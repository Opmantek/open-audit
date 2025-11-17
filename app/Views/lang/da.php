<?php
$GLOBALS["lang"][' Default, currently '] = ' Standard, aktuelt ';

$GLOBALS["lang"][' If something does not work as expected, your first thing to do is check the logs.'] = ' Hvis noget ikke virker som forventet, din første ting at gøre er at tjekke logfiler.';

$GLOBALS["lang"][' is now supported with a language file. To change your user to use this language, click '] = ' er nu understøttet med en sprogfil. For at ændre din bruger til at bruge dette sprog, skal du klikke ';

$GLOBALS["lang"][' seconds'] = ' sekunder';

$GLOBALS["lang"][', but will not need to remember a separate set of logon credentials.'] = ', men ikke behøver at huske et separat sæt logon akkreditiver.';

$GLOBALS["lang"][', of which we supply over thirty as a default set. Professional users cannot alter these, but an Enterprise user has complete customisation abilities - including creating your own.'] = ', hvoraf vi leverer over 30 som standard sæt. Professionelle brugere kan ikke ændre disse, men en Enterprise-bruger har komplet tilpasning evner - herunder at skabe dine egne.';

$GLOBALS["lang"][', you <i>must</i> be using https on your Open-AudIT server to use Entra for Auth. Please configure Apache to use <strong>https</strong> before configuring Entra for auth.'] = ', dig <i>skal</i> bruge https på din Open- Audit server til at bruge Entra til Auth. Indstil Apache til brug <strong>https</strong> før konfigurering Entra til auth.';

$GLOBALS["lang"]['. To enable this, edit the configuration item for '] = '. For at aktivere dette, skal du redigere indstillingspunktet for ';

$GLOBALS["lang"]['10 Minutes'] = '10 minutter';

$GLOBALS["lang"]['15 Minutes'] = '15 minutter';

$GLOBALS["lang"]['30 Minutes'] = '30 minutter';

$GLOBALS["lang"]['5 Minutes'] = '5 Protokol';

$GLOBALS["lang"]['93 controls grouped into organizational, people, physical, and technological categories'] = '93 kontrol grupperet i organisatoriske, mennesker, fysiske og teknologiske kategorier';

$GLOBALS["lang"]['<br> <strong>NOTE</strong> - You are accessing this URL from the local Open-AudIT server. The downloaded script will not be able to submit when run on any other machine. If you need to audit other machines, please download the script from any remote machine, not using a browser on the Open-AudIT server itself.'] = '<br/><strong>BEMÆRKNING</strong> - Du har adgang til denne URL fra den lokale Open- AudiT server. Det downloadede script vil ikke være i stand til at indsende når der køres på nogen anden maskine. Hvis du har brug for at revidere andre maskiner, skal du downloade scriptet fra en fjern maskine, ikke ved hjælp af en browser på Open- Audit server selv.';

$GLOBALS["lang"]['<p></p>'] = '<p></p>';

$GLOBALS["lang"]['<p><strong class="text-danger">NOTE</strong> - You must have working SSH or SSH Key credentials to execute benchmarks upon a target device.</p>'] = '<p><strong class="text-danger">BEMÆRKNING</strong> - Du skal have fungerende SSH eller SSH Key legitimation til at udføre benchmarks på en målenhed.</p>';

$GLOBALS["lang"]['<p><strong>Baseline</strong> - The overarching document that contains the baseline definition and the individual policy tests.<br> <br> <strong>Policies</strong> - The individual tests contained within a Baseline. Each test is for a specific item. An example would be testing for SSH version 1.2.3.<br> <br> <strong>Details</strong> - Baselines can compare netstat ports, users and software.<br> <br> <strong>Software</strong> - To compare software we check the name and version. Because version numbers are not all standardised in format, when we receive an audit result we create a new attribute called software_padded which we store in the database along with the rest of the software details for each package. For this reason, baselines using software policies will not work when run against a device that has not been audited by 1.10 (at least). Software policies can test against the version being "equal to", "greater than" or "equal to or greater than".<br> <br> <strong>Netstat Ports</strong> - Netstat Ports use a combination of port number, protocol and program. If all are present the policy passes.<br> <br> <strong>Users</strong> - Users work similar to Netstat Ports. If a user exists with a matching name, status and password details (changeable, expires, required) then the policy passes.<br> <br> </p>'] = '<p><strong>Baseline</strong> - Det overordnede dokument, der indeholder basisdefinitionen og de individuelle politiske test.<br/> <br/> <strong>Politikker</strong> - De individuelle prøver i en Baseline. Hver prøvning vedrører et bestemt emne. Et eksempel ville være test for SSH version 1.2.3.<br/> <br/> <strong>Detaljer</strong> - Baselines kan sammenligne netstat havne, brugere og software.<br/> <br/> <strong>Software</strong> - For at sammenligne software vi kontrollere navn og version. Fordi versionsnumre ikke alle er standardiseret i format, når vi modtager et revisionsresultat, vi oprette en ny attribut kaldet software _ pold, som vi gemmer i databasen sammen med resten af softwaren detaljer for hver pakke. Derfor vil basislinjer, der anvender softwarepolitikker, ikke fungere, når de køres mod en enhed, der ikke er blevet revideret af 1.10 (i det mindste). Softwarepolitikker kan teste mod den version, der er "lig med", "større end" eller "lig med eller større end".<br/> <br/> <strong>Netstat Ports</strong> - Netstat Ports bruger en kombination af portnummer, protokol og program. Hvis alle er til stede, går politikken videre.<br/> <br/> <strong>Brugere</strong> - Brugere arbejder på samme måde som Netstat Ports. Hvis en bruger eksisterer med et matchende navn, status og password detaljer (udskiftelige, udløber, kræves) derefter politikken passerer.<br/> <br/> </p>';

$GLOBALS["lang"]['<p>A location is a physical address that can have devices associated with it.<br> <br>You can assign it coordinates (lat/long) and if there are devices assigned, the location will appear on the Open-AudIT Enterprise map.<br> <br></p>'] = '<p>En placering er en fysisk adresse, der kan have enheder forbundet med det.<br/> <br/>Du kan tildele det koordinater (lat / lang), og hvis der er enheder tildelt, vil placeringen vises på Open- Audit Enterprise kortet.<br/> <br/></p>';

$GLOBALS["lang"]['<p>A network is derived from discovery entries and device attributes.<br> <br></p>'] = '<p>Et netværk er afledt af fund poster og enhed attributter.<br/> <br/></p>';

$GLOBALS["lang"]['<p>A summary will display a list of items, grouped by the distinct values of the attribute specified by the <code>table</code> and <code>column</code> attributes.<br> <br>When a summary is executed, the result will be a list of distinct values for that <code>table</code> and <code>column</code>. There will be links on the values that allow the user to see the matching devices.<br> <br>If the attribute of <code>extra_columns</code> is populated, the resulting page will contain these columns in addition to the standard device columns.<br> <br></p>'] = '<p>Et resumé vil vise en liste over emner, grupperet efter de særskilte værdier af attributten angivet af <code>table</code> og <code>column</code> attributter.<br/> <br/>Når et resumé udføres, vil resultatet være en liste over særskilte værdier for <code>table</code> og <code>column</code>. Der vil være links på de værdier, der giver brugeren mulighed for at se matchende enheder.<br/> <br/>Hvis attributten <code>extra_columns</code> er befolket, vil den resulterende side indeholde disse kolonner ud over standardkolonnerne for enheder.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Agents let you audit PCs without a discovery. Install the agent and it will check-in with the server each day and audit itself. It does not matter if your computers are firewalled, audit data will still appear in Open-AudIT.</p><p>When testing <strong>if</strong> an agent should perform actions, all three tests must pass (if the test is set). <strong>Then</strong> the actions are taken.</p>'] = '<p>Agenter lader dig gennemgå pc \'er uden en opdagelse. Installere agenten og det vil check- in med serveren hver dag og revidere sig selv. Det er lige meget, om dine computere er firewalled, revision data vil stadig vises i Open- Audit.</p><p>Ved prøvning <strong>hvis</strong> en agens skal udføre handlinger, alle tre prøver skal bestå (hvis testen er indstillet). <strong>Så</strong> foranstaltningerne er truffet.</p>';

$GLOBALS["lang"]['<p>Applications are defined by you, the user and stored for Open-AudIT to use and associate with devices.<br> <br></p>'] = '<p>Programmer er defineret af dig, brugeren og gemt for Open- Audit at bruge og associere med enheder.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Attributes are stored for Open-AudIT to use for particular fields.</p>'] = '<p>Attributter gemmes til Open- Audit til brug for bestemte felter.</p>';

$GLOBALS["lang"]['<p>Being able to determine which machines are configured the same is a major part of systems administration and auditing &ndash; and now reporting on that will be made simple and automated. Once you define your baseline it will automatically run against a set of devices on a predetermined schedule. The output of these executed baselines will be available for web viewing, importing into a third party system or even as a printed report.<br> <br> Baselines enable you to combine audit data with a set of attributes you have previously defined (your baseline) to determine compliance of devices.<br> <br> For example - you might create a baseline from a device running Centos 6 which acts as one of your apache servers in a cluster. You know this particular server is configured just the way you want it but you are unsure if other servers in the cluster are configured exactly the same. Baselines enables you to determine this.<br> <br> </p>'] = '<p>At kunne bestemme, hvilke maskiner der er konfigureret ens, er en stor del af systemadministration og revision - og nu rapportering om, at der vil blive gjort enkel og automatiseret. Når du definerer din baseline vil det automatisk køre mod et sæt af enheder på en forudbestemt tidsplan. Output af disse udførte basislinjer vil være tilgængelige for webvisning, import til en tredjepart system eller endda som en trykt rapport.<br/> <br/> Baselines giver dig mulighed for at kombinere revisionsdata med et sæt attributter, du tidligere har defineret (din basislinje) for at fastslå udstyrets overensstemmelse.<br/> <br/> For eksempel - kan du oprette en baseline fra en enhed, der kører Centos 6, som fungerer som en af dine apache servere i en klynge. Du ved denne særlige server er konfigureret præcis som du ønsker det, men du er usikker på, om andre servere i klyngen er konfigureret præcis det samme. Baselines giver dig mulighed for at afgøre dette.<br/> <br/> </p>';

$GLOBALS["lang"]['<p>Clusters are stored in Open-AudIT to associate devices to better record, manage and estimate licensing costs.<br> <br></p>'] = '<p>Clusters er gemt i Open- Audit til at associere enheder til bedre at registrere, administrere og estimere licensomkostninger.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Components is a generic term used for the tables that store the attributes for a device. Those tables are: access_point, arp, bios, certificate, cli_config, disk, dns, file, ip, license, log, memory, module, monitor, motherboard, netstat, network, nmap, optical, pagefile, partition, policy, print_queue, processor, radio, route, san, scsi, server, server_item, service, share, software, software_key, sound, task, usb, user, user_group, variable, video, vm, windows.</p><p> In addition we class the following tables also as device related: application, attachment, cluster, credential, image.</p>'] = '<p>Komponenter er et generisk udtryk, der anvendes til de tabeller, der gemmer attributterne til en enhed. Disse tabeller er: adgang _ point, arp, bios, certifikat, cli _ config, disk, dns, fil, ip, licens, log, hukommelse, modul, monitor, netstat, netværk, nmap, optisk, pagefile, partition, politik, print _ queue, processor, radio, rute, san, scsi, server, server _ post, service, dele, software, software _ key, lyd, opgave, usb, bruger, bruger _ gruppe, variabel, video, vm, vinduer.</p><p> Derudover inddeles følgende tabeller også som enhedsrelaterede: applikation, vedhæftning, klynge, kreditværdighed, billede.</p>';

$GLOBALS["lang"]['<p>Credentials are encrypted when stored in the database.<br> <br>When a Discovery is run, a device has its credentials retrieved and tested for connection first (from the <code>credential</code> table). If these fail, then credentials associated with the given Org <code>credentials.org_id</code> is also tested against the device. Working credentials are stored at an individual device level in the credential table (note - no "s" in the table name).<br> <br>SSH keys are tested before SSH username / password. When testing SSH, credentials will also be marked as working with sudo or being root.<br> <br>For ease of use, Windows passwords should not contain a single or double quote. This is a remote WMI limitation, not an Open-AudIT limitation.<br> <br></p>'] = '<p>Valgret er krypteret, når de lagres i databasen.<br/> <br/>Når en Discovery køres, en enhed har sine legitimationsoplysninger hentet og testet for tilslutning først (fra <code>credential</code> Tabel). Hvis disse mislykkes, så legitimation forbundet med den givne Org <code>credentials.org_id</code> er også testet mod anordningen. Arbejdslegitimation opbevares på et individuelt enhedsniveau i kredittabellen (note - ingen "s" i tabelnavnet).<br/> <br/>SSH tasterne testes før SSH brugernavn / adgangskode. Ved test af SSH, legitimation vil også blive markeret som arbejder med sudo eller være rod.<br/> <br/>For at lette brugen, bør Windows-adgangskoder ikke indeholde en enkelt eller dobbelt tilbud. Dette er en ekstern WMI begrænsning, ikke en Open- Audit begrænsning.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Credentials are used to access devices.<br> <br>Configuring credentials should be one of the first things you do after installing Open-AudIT.<br> <br></p>'] = '<p>Valgret bruges til at få adgang til apparater.<br/> <br/>Indstilling af legitimation bør være en af de første ting, du gør efter installation Open- Audit.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Define your racks and assign devices into their positions. You already have your devices in Open-AudIT and you know your locations. Open-AudIT extends this to allow you to create a rack and assign devices to it. Open-AudIT will even provide a visualisation of the rack and the devices contained within. If you provide a device picture, that picture will be used in the visualisation. You can look at the rack on the screen and see the same items you would see if you were standing in front of it.<br> <br></p>'] = '<p>Definer dine stativer og tildele enheder i deres positioner. Du har allerede dine enheder i Open- Audit og du kender dine steder. Open- Audit udvider dette, så du kan oprette en rack og tildele enheder til det. Open- Audit vil endda give en visualisering af rack og de enheder, der er indeholdt i. Hvis du leverer et enhedsbillede, vil dette billede blive brugt i visualiseringen. Du kan se på rack på skærmen og se de samme elementer, du ville se, hvis du stod foran det.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Devices on your network need to be managed. But how do you keep your records up to date? A spreadsheet - defintley not. That will be out of date in hours, if not days. Why manually try to keep up. Use Open-AudIT to automatically scan your networks and record your devices - manufacturer, model, serial and more than 100 other attributes. Full lists of software, services, disks, open ports, users, etc. Automatically see if an attribute has been added, removed or changed.<br> <br>Once Open-AudIT is setup, you can sit back and relax. Have change reports emailed to you on a schedule, for example - what new devices did we discover this week? What new software was installed this week? Were there any hardware changes last month?<br> <br>Expand on the stored fields easily with your own custom attributes.<br> <br>Even add devices that are not connected to your network or those devices your Open-AudIT server cannot reach.<br> <br>Computers, switches, routers, printers or any other device on your network - Open-AudIT can audit them all.<br> <br></p>'] = '<p>Enheder på dit netværk skal styres. Men hvordan holder du dine optegnelser ajour? Et regneark - bestemt ikke. Det vil være forældet på timer, hvis ikke dage. Hvorfor prøve manuelt at følge med. Brug Open- Audit til automatisk at scanne dine netværk og registrere dine enheder - producent, model, seriel og mere end 100 andre attributter. Fuld lister over software, tjenester, diske, åbne porte, brugere osv. Se automatisk om en attribut er blevet tilføjet, fjernet eller ændret.<br/> <br/>Når Open- Audit er sat, kan du læne dig tilbage og slappe af. Har ændret rapporter mailet til dig på en tidsplan, for eksempel - hvilke nye enheder opdagede vi i denne uge? Hvilken ny software blev installeret i denne uge? Var der nogen isenkram i sidste måned?<br/> <br/>Udvid på de gemte felter nemt med dine egne brugerdefinerede attributter.<br/> <br/>Selv tilføje enheder, der ikke er forbundet til dit netværk eller de enheder, din Open- Audit server ikke kan nå.<br/> <br/>Computere, kontakter, routere, printere eller andre enheder på dit netværk - Open- Audit kan revidere dem alle.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Discoveries are at the very heart of what Open-AudIT does.<br> <br>How else would you know "What is on my network?"<br> <br>Discoveries are prepared data items that enable you to run a discovery upon a network in a single click, without entering the details of that network each and every time.<br> <br></p>'] = '<p>Opdagelser er kernen i, hvad Open- Audit gør.<br/> <br/>Hvordan ved du ellers, hvad der er på mit netværk?<br/> <br/>Opdagelser er forberedt dataposter, der giver dig mulighed for at køre en opdagelse på et netværk i et enkelt klik, uden at indtaste detaljerne i dette netværk hver eneste gang.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Discovery Options are a global setting changed in the <a href="../configuration?configuration.name=discovery_default_scan_option">configuration</a>. If you have an Open-AudIT Enterprise license these are settable per discovery and in addition futher customizable as required. Discovery Options are as follows (including an indicitave time to scan an individual IP):<br/><br><strong>UltraFast</strong>: <i>1 second</i>. Scan only the ports that Open-AudIT needs to use to talk to the device and detect an IOS device (WMI, SSH, SNMP, Apple Sync). An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is not considered open. Device must respond to an Nmap ping. Use aggressive timing.<br><br/><strong>SuperFast</strong>: <i>5 seconds</i>. Scan the top 10 TCP and UDP ports, as well as port 62078 (Apple IOS detection). An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is not considered open. Device must respond to an Nmap ping. Use aggressive timing.<br/><br/><strong>Fast</strong>: <i>40 seconds</i>. Scan the top 100 TCP and UDP ports, as well as port 62078 (Apple IOS detection). An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is not considered open. Device must respond to an Nmap ping. Use aggressive timing.<br/><br/><strong>Medium (Classic)</strong>: <i>90 seconds</i>. As close to a traditional Open-AudIT scan as we can make it. Scan the top 1000 TCP ports, as well as 62078 (Apple IOS detection) and UDP 161 (SNMP). An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is considered open (and will trigger device detection). Devices are scanned regardless of a response to an Nmap ping. Use aggressive timing.<br/><br/><strong>Medium</strong>: <i>100 seconds</i>. Scan the top 1000 TCP and top 100 UDP ports, as well as port 62078 (Apple IOS detection). An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is not considered open. Device must respond to an Nmap ping. Use aggressive timing.<br/><br/><strong>Slow</strong>: <i>4 minutes</i>. Scan the top 1000 TCP and top 100 UDP ports, as well as port 62078 (Apple IOS detection). Version detection enabled. An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is considered open (and will trigger device detection). Device must respond to an Nmap ping. Use normal timing.<br/><br/><strong>UltraSlow</strong>: <i>20 minutes</i>. Not recommended. Scan the top 1000 TCP and UDP ports, as well as port 62078 (Apple IOS detection). Devices are scanned regardless of a response to an Nmap ping. Version detection enabled. An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is considered open (and will trigger device detection). Use polite timing.<br/><br/><strong>Custom</strong>: <i>Unknown time</i>. When options other than as set by a standard discovery preset are altered.<br><br></p>'] = '<p>Opdagelse Indstillinger er en global indstilling ændret i <a href="../configuration?configuration.name=discovery_default_scan_option">konfiguration</a>. Hvis du har en Open- Audit Enterprise licens disse er settable per opdagelse og derudover futher tilpasses efter behov. Opdagelse Muligheder er som følger (herunder en indikativ tid til at scanne en individuel IP):<br/><br/><strong>UltraFast</strong>: <i>1 sekund</i>. Scan kun de porte, som Open- Audit skal bruge til at tale med enheden og registrere en IOS-enhed (WMI, SSH, SNMP, Apple Sync). En <code>open|filtered</code> Havnen betragtes som åben. A <code>filtered</code> Havnen betragtes ikke som åben. Enheden skal reagere på en Nmap ping. Brug aggressiv timing.<br/><br><strong>Hurtig</strong>: <i>5 sekunder</i>. Scan top 10 TCP og UDP porte, samt port 62078 (Apple IOS detektering). En <code>open|filtered</code> Havnen betragtes som åben. A <code>filtered</code> Havnen betragtes ikke som åben. Enheden skal reagere på en Nmap ping. Brug aggressiv timing.<br><br/><strong>Hurtig</strong>: <i>40 sekunder</i>. Scan top 100 TCP og UDP porte, samt port 62078 (Apple IOS detektering). En <code>open|filtered</code> Havnen betragtes som åben. A <code>filtered</code> Havnen betragtes ikke som åben. Enheden skal reagere på en Nmap ping. Brug aggressiv timing.<br/><br/><strong>Medium (Classic)</strong>: <i>90 sekunder</i>. Så tæt på en traditionel Open- Audit scanning som vi kan gøre det. Scan top 1000 TCP-porte, samt 62078 (Apple IOS detektering) og UDP 161 (SNMP). En <code>open|filtered</code> Havnen betragtes som åben. A <code>filtered</code> port betragtes som åben (og vil udløse detektering af enheden). Enheder scannes uanset respons på en Nmap ping. Brug aggressiv timing.<br/><br/><strong>Mellem</strong>: <i>100 sekunder</i>. Scan top 1000 TCP og top 100 UDP porte, samt port 62078 (Apple IOS detektion). En <code>open|filtered</code> Havnen betragtes som åben. A <code>filtered</code> Havnen betragtes ikke som åben. Enheden skal reagere på en Nmap ping. Brug aggressiv timing.<br/><br/><strong>Langsomt</strong>: <i>4 minutter</i>. Scan top 1000 TCP og top 100 UDP porte, samt port 62078 (Apple IOS detektion). Versionsdetektion aktiveret. En <code>open|filtered</code> Havnen betragtes som åben. A <code>filtered</code> port betragtes som åben (og vil udløse detektering af enheden). Enheden skal reagere på en Nmap ping. Brug normal timing.<br/><br/><strong>UltraSlow</strong>: <i>20 minutter</i>. Ikke anbefalet. Scan top 1000 TCP og UDP porte, samt port 62078 (Apple IOS detektering). Enheder scannes uanset respons på en Nmap ping. Versionsdetektion aktiveret. En <code>open|filtered</code> Havnen betragtes som åben. A <code>filtered</code> port betragtes som åben (og vil udløse detektering af enheden). Brug høflig timing.<br/><br/><strong>Brugerdefineret</strong>: <i>Ukendt tid</i>. Når andre muligheder end som fastsat af en standard opdagelse forudindstillet ændres.<br/><br/></br></br></p>';

$GLOBALS["lang"]['<p>Groups are used as simple lists of devices that match the required conditions. If requested using JSON they return a list of <code>devices.id</code> only. If requested using the web interface, they return the standard column attribute list.<br> <br></p>'] = '<p>Grupper bruges som simple lister over enheder, der matcher de krævede betingelser. Efter anmodning fra JSON returnerer de en liste over <code>devices.id</code> Kun. Hvis der anmodes om brug af webgrænsefladen, returnerer de standardsøjleattributlisten.<br/> <br/></p>';

$GLOBALS["lang"]['<p>If the user logging on to Open-AudIT does not have the access to search LDAP (and you are using OpenLDAP), you can use another account which does have this access. Use the <code>ldap_dn_account</code> and <code>ldap_dn_password</code> to configure this.<br> <br><strong>Helpful Documentation</strong><br> <br>
        <a href="/index.php/auth/help">General Auth Help</a><br> <br>
        <a href="/index.php/faq?name=Using Entra for Auth">Using Entra for Auth</a><br> <br>
        <a href="/index.php/faq?name=Using OKTA for Auth">Using OKTA for Auth</a><br> <br>
        <a href="/index.php/faq?name=Troubleshooting LDAP Logins">Troubleshooting LDAP Logins</a><br> <br>
        <a href="/index.php/faq?name=Users, Roles and Orgs">Users, Roles and Orgs</a><br> <br></p>'] = '<p>Hvis brugeren logger på Open- Audit ikke har adgang til at søge LDAP (og du bruger OpenLDAP), kan du bruge en anden konto, som har denne adgang. Brug <code>ldap_dn_account</code> og <code>ldap_dn_password</code> at indstille dette.<br/> <br/><strong>Nyttig dokumentation</strong><br/> <br/><a href="/index.php/auth/help">Generel authhjælp</a><br/> <br/><a href="/index.php/faq?name=Using Entra for Auth">Brug Entra til Auth</a><br/> <br/><a href="/index.php/faq?name=Using OKTA for Auth">Brug OKTA til Auth</a><br/> <br/><a href="/index.php/faq?name=Troubleshooting LDAP Logins">Fejlfinding af LDAP- loginer</a><br/> <br/><a href="/index.php/faq?name=Users, Roles and Orgs">Brugere, ruller og orger</a><br/> <br/></p>';

$GLOBALS["lang"]['<p>If you add a device type, to display the associated icon you will have to manually copy the .svg formatted file to the directory:<br><em>Linux</em>:/usr/local/open-audit/public/device_images<br><em>Windows</em>: c:\xampp\htdocs\open-audit\device_images<br> <br>If you add a location type, to display the associated icon you will have to manually copy the 32x32px icon to the directory:<br><em>Linux</em>:/usr/local/open-audit/public/images/map_icons<br><em>Windows</em>: c:\xampp\htdocs\open-audit\images\map_icons</p><p>When the <i>resource</i> is a <code>device</code>, valid <i>types</i> are: <code>class</code>, <code>environment</code>, <code>status</code> and <code>type</code>. If the <i>resource</i> is <code>locations</code> or <code>org</code> the only valid <i>type</i> is <code>type</code>. If the <i>resource</i> is a <code>query</code> the only valid <i>type</i> is <code>menu_category</code>.</p>'] = '<p>Hvis du tilføjer en enhedstype, for at vise det tilhørende ikon skal du manuelt kopiere .svg formateret fil til mappen:<br/><em>Linux</em>: / usr / local / open- audit / public / device _ images<br/><em>Vinduer</em>: c:\ xampp\ htdocs\ open- audit\ device _ images<br/> <br/>Hvis du tilføjer en lokaliseringstype, for at vise det tilhørende ikon skal du manuelt kopiere 32x32px ikonet til mappen:<br/><em>Linux</em>: / usr / local / open- audit / public / images / map _ ikoner<br/><em>Vinduer</em>: c:\ xampp\ htdocs\ open- audit\ images\ map _ ikoner</p><p>Når <i>ressource</i> er <code>device</code>, gyldig <i>typer</i> er: <code>class</code>, <code>environment</code>, <code>status</code> og <code>type</code>. Hvis <i>ressource</i> er <code>locations</code> eller <code>org</code> den eneste gyldige <i>type</i> er <code>type</code>. Hvis <i>ressource</i> er <code>query</code> den eneste gyldige <i>type</i> er <code>menu_category</code>.</p>';

$GLOBALS["lang"]['<p>If you intend to completely audit your cloud machines, do not forget you will also need those credentials saved in Open-AudIT.</p><p>Make sure you allow the correct ports if you are using Microsoft Azure (22 for SSH, etc). Check your Virtual Machine -> Networking rules.<br> <br></p>'] = '<p>Hvis du har til hensigt helt at revidere dine cloud-maskiner, glem ikke, at du også har brug for disse legitimationsoplysninger gemt i Open- Audit.</p><p>Sørg for at tillade de korrekte porte, hvis du bruger Microsoft Azure (22 for SSH, osv.). Tjek din virtuelle maskine - > Netværksregler.<br/> <br/></p>';

$GLOBALS["lang"]['<p>If you select a List type, the "values" field will be enabled. You should put a comma separated list of selectable values here. These will display in a dropdown box whenever the field is edited.<br> <br>Like most other attributes, Fields can be bulk edited. Use the Bulk Edit function as you normally would and you will see the Fields are available for input.<br> <br>View the device details screen, open the section containing the field and (if you have sufficient access) you can click on the field value to edit it.<br> <br></p>'] = '<p>Hvis du vælger en listetype, vil feltet "værdier" blive aktiveret. Du bør sætte en kommaadskilt liste over valgbare værdier her. Disse vises i et dropned- felt når feltet redigeres.<br/> <br/>Som de fleste andre attributter, Fields kan være bulk redigeret. Brug Bulk Redigér-funktionen som du normalt ville, og du vil se felterne er tilgængelige for input.<br/> <br/>Vis skærmen med enhedsdetaljer, åbn afsnittet der indeholder feltet og (hvis du har tilstrækkelig adgang) du kan klikke på feltværdien for at redigere det.<br/> <br/></p>';

$GLOBALS["lang"]['<p>In the ever-changing world of computer security where new vulnerabilities are being discovered and patched every day, enforcing security compliance must be a continuous process. It also needs to include a way to make adjustments to policies, as well as periodic assessment and risk monitoring. The OpenSCAP ecosystem provides tools and customizable policies for a quick, cost-effective and flexible implementation of these processes.</p>'] = '<p>I den evigt skiftende verden af computersikkerhed, hvor nye sårbarheder bliver opdaget og lappet hver dag, skal håndhævelse af sikkerheden være en kontinuerlig proces. Det skal også omfatte en måde at foretage justeringer på i politikker samt periodisk vurdering og risikoovervågning. OpenSCAP økosystemet giver værktøjer og tilpassede politikker til en hurtig, omkostningseffektiv og fleksibel implementering af disse processer.</p>';

$GLOBALS["lang"]['<p>Integrations allow you to setup device selection and schedules for Open-AudIT to talk to external systems.<br> <br></p>'] = '<p>Integrationer giver dig mulighed for at indstille valg af enhed og tidsplaner for Open- Audit til at tale med eksterne systemer.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Microsoft Windows desktop systems have network limitations that may impact the performance of Open-AudIT. The TCP/IP stack limits the number of simultaneous incomplete outbound TCP connection attempts. After the limit is reached, subsequent connection attempts are put in a queue and will be resolved at a fixed rate (10 per second). If too many enter the queue, they may be dropped. And finally, Apache will be restarted by the OS. For this reason, installing Open-AudIT on a Windows desktop operating system is not supported.<br><br>There is nothing wrong with the Open-AudIT code, nor can we do anything to address this issue on Windows client machines.'] = '<p>Microsoft Windows desktop-systemer har netværksbegrænsninger, der kan påvirke udførelsen af Open- Audit. TCP / IP stakken begrænser antallet af samtidige ufuldstændige TCP-tilslutningsforsøg. Når grænsen er nået, efterfølgende tilslutning forsøg sættes i en kø og vil blive løst med en fast sats (10 per sekund). Hvis for mange går ind i køen, kan de blive droppet. Og til sidst vil Apache blive genstartet af OS. Derfor er installation af Open- Audit på et Windows-skrivebordsoperativsystem ikke understøttet.<br/><br/>Der er intet galt med Open- Audit kode, og vi kan heller ikke gøre noget for at løse dette problem på Windows-klient maskiner.</p>';

$GLOBALS["lang"]['<p>Nmap timing details are found on the bottom of this linked page <a href="https://nmap.org/book/man-performance.html" target="_blank">https://nmap.org/book/man-performance.html</a>. From that page:<br> <br><em>If you are on a decent broadband or ethernet connection, I would recommend always using -T4 (Aggressive). Some people love -T5 (Insane) though it is too aggressive for my taste. People sometimes specify -T2 (Polite) because they think it is less likely to crash hosts or because they consider themselves to be polite in general. They often do not realize just how slow -T2 really is. Their scan may take ten times longer than a default scan. Machine crashes and bandwidth problems are rare with the default timing options -T3 (Normal) and so I normally recommend that for cautious scanners. Omitting version detection is far more effective than playing with timing values at reducing these problems.</em><footer>Gordon <i>Fyodor</i> Lyon</footer><br> <br></p>'] = '<p>Nmap timing detaljer findes i bunden af denne linkede side <a href="https://nmap.org/book/man-performance.html" target="_blank">https: / / nmap.org / book / man- performance.html</a>. Fra denne side:<br/> <br/><em>Hvis du er på en anstændig bredbånd eller ethernet forbindelse, vil jeg anbefale altid at bruge -T4 (Aggressive). Nogle mennesker elsker -T5 (Insane) selvom det er for aggressiv til min smag. Folk undertiden angive -T2 (Polite), fordi de tror, det er mindre sandsynligt at gå ned værter, eller fordi de anser sig selv for at være høflig i almindelighed. De ofte ikke klar over, hvor langsom -T2 virkelig er. Deres scanning kan tage ti gange længere end en standard scanning. Machine crash og båndbredde problemer er sjældne med standard timing muligheder -T3 (Normal) og så jeg normalt anbefale, at for forsigtige scannere. At udelade versionsdetektion er langt mere effektivt end at lege med timing værdier til at reducere disse problemer.</em><footer>Gordon <i>Fyodor</i> Lyon Formand</footer><br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT can be configured to use different methods to authenticate a user and in addition, to create a user account using assigned roles and orgs based on group membership.<br> <br></p>'] = '<p>Open- Audit kan konfigureres til at bruge forskellige metoder til at autentificere en bruger og derudover til at oprette en brugerkonto ved hjælp af tildelte roller og kugler baseret på gruppemedlemskab.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT can retrieve details about a file or directory of files and monitor these files for changes as per other attributes in the Open-AudIT database.<br> <br>This feature works out of the box for Linux Open-AudIT servers, but needs a change to the service account name under a Windows Open-AudIT server.<br> <br>Supported clients are Windows and Linux.<br> <br></p>'] = '<p>Open- Aud IT kan hente oplysninger om en fil eller mappe af filer og overvåge disse filer for ændringer som pr andre attributter i Open- Audit database.<br/> <br/>Denne funktion fungerer ud af boksen for Linux Open- Audit-servere, men har brug for en ændring til service-konto navn under en Windows Open- Audit-server.<br/> <br/>Understøttede klienter er Windows og Linux.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT can retrieve details about a file, ask the native package manager if they are known to it and monitor these files for changes as per other attributes in the Open-AudIT database.<br> <br>Supported clients are Linux only.<br> <br></p>'] = '<p>Open- Aud IT kan hente oplysninger om en fil, spørge den indfødte pakkehåndtering, om de er kendt for det, og overvåge disse filer for ændringer som pr andre attributter i Open- Audit database.<br/> <br/>Understøttede klienter er kun Linux.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT can store information in custom fields that are associated with each device.<br> <br>Once an Additional Field has been created it can be used in queries and groups just like any other attribute in the database.<br> <br></p>'] = '<p>Open- Aud IT kan gemme oplysninger i brugerdefinerede felter, der er forbundet med hver enhed.<br/> <br/>Når et ekstra felt er blevet oprettet, kan det bruges i forespørgsler og grupper ligesom enhver anden attribut i databasen.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT comes with many queries inbuilt. If you require a specific query and none of the pre-packaged queries fit your needs, it is quite easy to create a new one and load it into Open-AudIT for running.<br> <br></p>'] = '<p>Open- Audit leveres med mange forespørgsler indbygget. Hvis du har brug for en specifik forespørgsel, og ingen af de færdigpakkede forespørgsler passer til dine behov, er det ganske nemt at oprette en ny og indlæse den i Open- Audit til kørsel.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT comes with many summaries inbuilt. If you require a specific summary and none of the pre-packaged summaries fit your needs, it is quite easy to create a new one and load it into Open-AudIT for running.<br> <br></p>'] = '<p>Open- Audit leveres med mange resuméer indbygget. Hvis du har brug for et specifikt resumé og ingen af de færdigpakkede resuméer passer til dine behov, er det ganske nemt at oprette en ny og indlæse den i Open- Audit til kørsel.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT is supported by FirstWave with an amazing level of support. If you prefer an active community of support givers, theres that as well. Where else can you talk directly to the developers and get a response within 24 hours? Just try that with other products! Amazing support. Full stop. You need support, we provide support. No ifs or buts. Great support. Period.<br> <br></p>'] = '<p>Open- Audit understøttes af FirstWave med et fantastisk niveau af støtte. Hvis du foretrækker et aktivt fællesskab af støtte giver, theres, så godt. Hvor kan du ellers tale direkte til udviklerne og få et svar inden for 24 timer? Prøv det med andre produkter! Fantastisk støtte. Fuld stop. Du har brug for støtte, vi yder støtte. Ingen hvis eller men. Stor støtte. Punktum.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT provides multi-tenancy out of the box!<br> <br>Orgs (organisations) in Open-AudIT are a key item. A user has a primary Org as well as a list of Orgs they can access. A user combines this with a list of assigned "Roles" that define what actions they can take on items assigned to the Orgs they have access to. The combination of a users "orgs" and "roles" define what they can and cannot do within Open-AudIT.<br> <br>Most items in Open-AudIT are assigned to an Org. Devices, Locations, Networks, etc.<br> <br>Orgs can have child Orgs. Think of an organisational chart (tree) structure. If a user has access to a specific Org, they also have access to that Orgs descendants. For more information, see this <a href="/index.php/faq?name=Users, Roles and Orgs">FAQ</a>.</p>'] = '<p>Open- Audit giver multi-leje ud af boksen!<br/> <br/>Orgs (organisationer) i Open- Audit er et nøglepunkt. En bruger har en primær Org samt en liste over Orgs, de kan få adgang til. En bruger kombinerer dette med en liste over tildelte "Roles", der definerer, hvilke handlinger de kan tage på emner, der er tildelt til Orgs de har adgang til. Kombinationen af en bruger "orgs" og "roller" definerer, hvad de kan og ikke kan gøre i Open- Audit.<br/> <br/>De fleste elementer i Open- Audit er tildelt en org. enheder, lokaliseringer, netværk, osv.<br/> <br/>Orgs kan få børn Orgs. Tænk på en organisationsstruktur (træ). Hvis en bruger har adgang til en bestemt Org, de har også adgang til, at Orgs efterkommere. For mere information, se dette <a href="/index.php/faq?name=Users, Roles and Orgs">FAQ</a>.</p>';

$GLOBALS["lang"]['<p>Open-AudIT provides multi-tenancy out of the box!<br> <br>Orgs (organisations) in Open-AudIT are a key item. A user has a primary Org as well as a list of Orgs they can access. A user combines this with a list of assigned "Roles" that define what actions they can take on items assigned to the Orgs they have access to. The combination of a users "orgs" and "roles" define what they can and cannot do within Open-AudIT.<br> <br>Most items in Open-AudIT are assigned to an Org. Devices, Locations, Networks, etc.<br> <br>Orgs can have child Orgs. Think of an organisational chart (tree) structure. If a user has access to a specific Org, they also have access to that Orgs descendants.</p>'] = '<p>Open- Audit giver multi-leje ud af boksen!<br/> <br/>Orgs (organisationer) i Open- Audit er et nøglepunkt. En bruger har en primær Org samt en liste over Orgs, de kan få adgang til. En bruger kombinerer dette med en liste over tildelte "Roles", der definerer, hvilke handlinger de kan tage på emner, der er tildelt til Orgs de har adgang til. Kombinationen af en bruger "orgs" og "roller" definerer, hvad de kan og ikke kan gøre i Open- Audit.<br/> <br/>De fleste elementer i Open- Audit er tildelt en org. enheder, lokaliseringer, netværk, osv.<br/> <br/>Orgs kan få børn Orgs. Tænk på en organisationsstruktur (træ). Hvis en bruger har adgang til en bestemt Org, de har også adgang til, at Orgs efterkommere.</p>';

$GLOBALS["lang"]['<p>Quickly view the status of devices on your network.<br> <br></p>'] = '<p>Se hurtigt status på enheder på dit netværk.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Roles in Open-AudIT are a key item. A user has a primary Org as well as a list of Orgs they can access. A user combines this with a list of assigned Roles that define what actions they can take on items assigned to the Orgs they have access to. The combination of a users "orgs" and "roles" define what they can and cannot do within Open-AudIT.<br> <br>
        Get the complete Open-AudIT Enterprise experience. Creating roles allows fine grained control over what your users can do within Open-AudIT.<br> <br>
        The primary method for authorisation (what a user can do) is based on the users Roles. Default roles are defined as admin, org_admin, reporter and user. Each role has a set of permissions (Create, Read, Update, Delete) for each endpoint. The ability to define additional roles and edit existing roles is enabled in Open-AudIT Enterprise.<br> <br>Roles can also be used with LDAP (Active Directory and OpenLDAP) authorisation. Enterprise licensed installations have the ability to customise the LDAP group for each defined role.<br> <br></p>'] = '<p>Roller i Open- Aud IT er et nøgleelement. En bruger har en primær Org samt en liste over Orgs, de kan få adgang til. En bruger kombinerer dette med en liste over tildelte Roller, der definerer, hvilke handlinger de kan tage på emner, der er tildelt til Orgs de har adgang til. Kombinationen af en bruger "orgs" og "roller" definerer, hvad de kan og ikke kan gøre i Open- Audit.<br/> <br/>Få den komplette Open- Audit Enterprise oplevelse. Oprettelse af roller tillader finkornet kontrol over, hvad dine brugere kan gøre i Open- Audit.<br/> <br/>Den primære metode til godkendelse (hvad en bruger kan gøre) er baseret på brugerne Roles. Standardroller defineres som admin, org _ admin, reporter og bruger. Hver rolle har et sæt tilladelser (Opret, Læs, Opdatér, Slet) for hvert endpoint. Evnen til at definere yderligere roller og redigere eksisterende roller er aktiveret i Open- Audit Enterprise.<br/> <br/>Roller kan også anvendes med LDAP (Active Directory og OpenLDAP) godkendelse. Virksomhedsgodkendte anlæg har mulighed for at tilpasse LDAP-gruppen til hver defineret rolle.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Rules examine attributes and make cahnges based on the appropriate rule.</p>'] = '<p>Regler undersøge attributter og gøre cahnges baseret på den relevante regel.</p>';

$GLOBALS["lang"]['<p>Scanning options allow you to easily apply a set of options to a discovery.<br> <br></p>'] = '<p>Scanning muligheder giver dig mulighed for nemt at anvende et sæt af muligheder til en opdagelse.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Simple, intuitive, accurate geographic mapping provided by Google Maps. Open-AudIT leverages Google Maps to provide live, interactive geographic mapping of device locations. Automated conversion of street addresses to geocodes and longitude / latitude.<br> <br>
        </p>'] = '<p>Enkel, intuitiv, præcis geografisk kortlægning fra Google Maps. Open- Audits udtræk Google Maps til at levere live, interaktiv geografisk kortlægning af enhedsplaceringer. Automatisk konvertering af gadeadresser til geokoder og længde / breddegrad.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Software Packages are used to determine if antivirus, backup, firewall, approved or banned software is installed.<br> <br></p>'] = '<p>Softwarepakker bruges til at afgøre, om antivirus, backup, firewall, godkendt eller forbudt software er installeret.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Some examples of valid Subnet attributes are: 192.168.1.1 (a single IP address), 192.168.1.0/24 (a subnet), 192.168.1-3.1-20 (a range of IP addresses).<br> <br><em>NOTE</em> - Only a subnet (as per the examples - 192.168.1.0/24) will be able to automatically create a valid network for Open-AudIT. <br> <br>If you use an Active Directory type, make sure you have appropriate credentials to talk to your Domain Controller already in <a href="../credentials">credentials</a>.<br> <br></p>'] = '<p>Nogle eksempler på gyldige Subnet attributter er: 192.168.1.1 (en enkelt IP-adresse), 192.168.1.0 / 24 (et subnet), 192.168.1-3.1-20 (en række IP-adresser).<br/> <br/><em>BEMÆRKNING</em> - Kun en subnet (som i eksemplerne - 192.168.1.0 / 24) vil være i stand til automatisk at oprette et gyldigt netværk for Open- Audit. <br/> <br/>Hvis du bruger en Active Directory type, skal du sørge for, at du har passende legitimation til at tale med din Domæne Controller allerede i <a href="../credentials">mandater</a>.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Standards are stored in Open-AudIT.<br /><br /><br /><br /></p>'] = '<p>Standarder gemmes i Open- Audit.<br/><br/><br/><br/></p>';

$GLOBALS["lang"]['<p>Supported clients are Linux only.<br> <br></p>'] = '<p>Understøttede klienter er kun Linux.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Tasks have a schedule that mirrors the unix cron schedule. The attributes for minute, hour, day_of_month, month, day_of_week all act as per the cron definitions. You can select multiples of these using comma seperated values (no spaces). You can select every value using *.<br> <br>The <code>type</code> of the task can be one of: baselines, collectors, discoveries, queries, reports or summaries.<br> <br>If you wish to schedule a Baseline or Discovery, you will need to create these before creating the tasks. You must use the ID of the type of item in <code>sub_resource_id</code>. For example if you wish to schedule a Discovery, use that particular Discoveries ID in <code>sub_resource_id</code>.<br> <br>The value for <code>uuid</code> is specific to each Open-AudIT server. Your unique value can be found in the configuration.<br> <br>The <code>options</code> attribute is a JSON document containing any extra attributes required to run the task. The extra attributes for reports, queries and summaries are: <code>email_address</code> and <code>format</code>. The extra attribute for Bselines is <code>group_id</code>.<br> <br></p>'] = '<p>Opgaver har en tidsplan, der afspejler unix cron tidsplan. Attributterne for minut, time, dag _ of _ måned, måned, dag _ of _ uge alle fungerer som pr cron definitioner. Du kan vælge multipla af disse ved hjælp af komma seperated værdier (ingen mellemrum). Du kan vælge hver værdi med *.<br/> <br/>Den <code>type</code> af opgaven kan være en af: basislinjer, samlere, opdagelser, forespørgsler, rapporter eller resuméer.<br/> <br/>Hvis du ønsker at planlægge en Baseline eller Discovery, du bliver nødt til at oprette disse, før du opretter opgaverne. Du skal bruge ID for den type element i <code>sub_resource_id</code>. For eksempel hvis du ønsker at planlægge en Discovery, bruge denne særlige opdagelser ID i <code>sub_resource_id</code>.<br/> <br/>Værdien for <code>uuid</code> er specifik for hver Open- Audit- server. Din unikke værdi kan findes i konfigurationen.<br/> <br/>Den <code>options</code> attributten er et JSON-dokument, der indeholder eventuelle yderligere attributter, der er nødvendige for at udføre opgaven. De ekstra attributter til rapporter, forespørgsler og resuméer er: <code>email_address</code> og <code>format</code>. Den ekstra attribut for Bselines er <code>group_id</code>.<br/> <br/></p>';

$GLOBALS["lang"]['<p>The <code>type</code> of the location will assign its icon.<br> <br></p>'] = '<p>Den <code>type</code> placering vil tildele sit ikon.<br/> <br/></p>';

$GLOBALS["lang"]['<p>The Attributes endpoint allows you to add customized values to different attributes in Open-AudIT, at the moment this feature works on the Class, Environment, Status and Type attributes on Devices, the Type attribute for both Locations and Orgs as well as the Menu Category for Queries. If you view an item of one of the prvious types (say view a Lkocation) you will notice the Type attribute must be selected from a drop-down box. This is where those values are stored. Hence, if you would like to add a new Type to be chosen for a Location, add it using the Attributes feature.</p>'] = '<p>Attributter endpoint giver dig mulighed for at tilføje tilpassede værdier til forskellige attributter i Open- Audit, i øjeblikket denne funktion virker på klasse, miljø, status og type attributter på enheder, typen attribut for både steder og orger samt Menu kategori for forespørgsler. Hvis du ser et element af en af de snørklede typer (siger se en Lkocation) vil du bemærke Type attributten skal vælges fra et drop- down felt. Det er her, disse værdier lagres. Derfor, hvis du ønsker at tilføje en ny Type, der skal vælges for en placering, tilføje det ved hjælp af Attributter funktion.</p>';

$GLOBALS["lang"]['<p>The Collectors feature enables you to easily manage many "collector" computers that perform network discovery. All Collectors are centrally controlled from the Server. The only required network ports between the Collector and the Server are 80 and/or 443.<br> <br>It makes managing disparate networks quick, easy and simple. Open-AudIT Enterprise licensees get a single collector license included and have the option to buy more as required..<br> <br></p>'] = '<p>Den Collectors funktion giver dig mulighed for nemt at administrere mange "samler" computere, der udfører netværk opdagelse. Alle samlere styres centralt fra serveren. De eneste nødvendige netværksporte mellem samleren og serveren er 80 og / eller 443.<br/> <br/>Det gør forvaltningen af forskellige netværk hurtig, nem og enkel. Open- Audit Enterprise licenshavere få en enkelt samler licens inkluderet og har mulighed for at købe mere som krævet..<br/> <br/></p>';

$GLOBALS["lang"]['<p>The SELECT section of your SQL <em>must</em> contain fully qualified columns. IE - <code>SELECT devices.id AS `devices.id`, devices.name AS `devices.name` ...</code>.<br> <br>The WHERE section of your SQL <em>must</em> contain <code>WHERE @filter</code> so Open-AudIT knows to restrict your query to the appropriate Orgs. SQL not containing this condition will result in the query failing to be created, unless you have the Admin role.<br> <br>An example query SQL showing attributes on devices that have an <code>os_group</code> attribute of "Linux" - <br><code>SELECT devices.id AS `devices.id`, devices.icon AS `devices.icon`, devices.type AS `devices.type`, devices.name AS `devices.name`, devices.os_name AS `devices.os_name` FROM devices WHERE @filter AND devices.os_group = "Linux"</code><br> <br></p>'] = '<p>SELECT-sektionen af din SQL <em>skal</em> indeholder fuldt kvalificerede kolonner. IE - <code>SELECT devices.id AS `devices.id`, devices.name AS `devices.name` ...</code>.<br/> <br/>Hvor del af din SQL <em>skal</em> indeholder <code>WHERE @filter</code> så Open- Audit ved at begrænse din forespørgsel til de relevante orgs. SQL ikke indeholder denne betingelse vil resultere i forespørgslen ikke at blive oprettet, medmindre du har Admin rolle.<br/> <br/>Et eksempel forespørgsel SQL viser attributter på enheder, der har en <code>os_group</code> attributten "Linux" - <br/><code>SELECT devices.id AS `devices.id`, devices.icon AS `devices.icon`, devices.type AS `devices.type`, devices.name AS `devices.name`, devices.os_name AS `devices.os_name` FROM devices WHERE @filter AND devices.os_group = "Linux"</code><br/> <br/></p>';

$GLOBALS["lang"]['<p>The SELECT section of your SQL <em>must</em> only contain <code>DISTINCT(devices.id)</code>.<br> <br>The WHERE section of your SQL <em>must</em> contain <code>WHERE @filter</code> so Open-AudIT knows to restrict your query to the appropriate Orgs. SQL not containing this condition will result in the group failing to be created.<br> <br>An example for SQL to select all devices running the Debian OS - <code>SELECT DISTINCT(devices.id) FROM devices WHERE @filter AND devices.os_family = "Debian"</code><br> <br></p>'] = '<p>SELECT-sektionen af din SQL <em>skal</em> indeholder kun <code>DISTINCT(devices.id)</code>.<br/> <br/>Hvor del af din SQL <em>skal</em> indeholder <code>WHERE @filter</code> så Open- Audit ved at begrænse din forespørgsel til de relevante orgs. SQL ikke indeholder denne betingelse vil resultere i, at gruppen ikke er oprettet.<br/> <br/>Et eksempel på at SQL kan vælge alle enheder der kører Debian OS - <code>SELECT DISTINCT(devices.id) FROM devices WHERE @filter AND devices.os_family = "Debian"</code><br/> <br/></p>';

$GLOBALS["lang"]['<p>The license endpoint allows you to track the number of licenses found on your devices.<br> <br>To create an entry to track your licenses you <em>must</em> to provide a name, an organization, the number of licenses acquired and the name of the software. On the field <code>match_string</code> you must provide the name of the software that you want to track, you can use the percent sign (%) as a wildcard in the match_string.<br> <br></p>'] = '<p>Licensens endepunkt giver dig mulighed for at spore antallet af licenser fundet på dine enheder.<br/> <br/>For at oprette en indgang til at spore dine licenser du <em>skal</em> at give et navn, en organisation, antallet af erhvervede licenser og navnet på softwaren. På banen <code>match_string</code> du skal angive navnet på den software, du ønsker at spore, kan du bruge procent tegnet (%) som et wildcard i match _ string.<br/> <br/></p>';

$GLOBALS["lang"]['<p>The network should be in the format 192.168.1.0/24.<br> <br></p>'] = '<p>Netværket skal være i formatet 192.168.1.0 / 24.<br/> <br/></p>';

$GLOBALS["lang"]['<p>The primary and optional secondary items should be fully qualified - ie, devices.type or software.name.<br> <br></p>'] = '<p>De primære og valgfrie sekundære poster skal være fuldt kvalificerede - dvs, enheder. type eller software. navn.<br/> <br/></p>';

$GLOBALS["lang"]['<p>There is no need to do anything if you are running Open-AudIT on a Linux server.<br>
<br>
Windows clients are just fine and require no special actions, however.... to enable this feature the audit script must be run locally on the target Windows system. It cannot be run remotely as we do with WMI calls when running the audit script on one Windows machine, while targeting a second Windows machine. To do this we need to copy the audit script to the target Windows machine and then run it. Unfortunately the service account that Apache runs under is the Local System account. This account has no access to remote (network based) resources. To work around this issue the service must be run under another account. It is easiest to just use the local Administrator account, but you can try any account you like as long as it has the required privileges. The Local System account has as much local access as the local Administrator account.<br>
<br>
See our page on enabling <a href="/index.php/faq?name=Running Open-AudIT Apache Service Under Windows">Running Open-AudIT Apache Service Under Windows</a></p>'] = '<p>Der er ingen grund til at gøre noget, hvis du kører Open- Audit på en Linux-server.<br/><br/>Windows-klienter er helt fint og kræver ingen særlige handlinger, dog.... for at aktivere denne funktion audit script skal køres lokalt på målet Windows-system. Det kan ikke køres fjernfra, som vi gør med WMI-opkald, når du kører revision script på en Windows-maskine, mens rettet mod en anden Windows-maskine. For at gøre dette er vi nødt til at kopiere revision script til målet Windows maskine og derefter køre det. Desværre service konto, Apache kører under er Local System konto. Denne konto har ingen adgang til eksterne (netværksbaserede) ressourcer. For at løse dette problem skal tjenesten drives under en anden konto. Det er lettest at bruge den lokale administrator konto, men du kan prøve enhver konto, du ønsker, så længe den har de nødvendige privilegier. Den lokale systemkonto har lige så meget lokal adgang som den lokale administrator konto.<br/><br/>Se vores side om aktivering <a href="/index.php/faq?name=Running Open-AudIT Apache Service Under Windows">Kør Open- Audit Apache Service under Windows</a></p>';

$GLOBALS["lang"]['<p>These are the devices that live within a rack.<br> <br></p>'] = '<p>Det er de enheder, der lever i en rack.<br/> <br/></p>';

$GLOBALS["lang"]['<p>This endpoint enables you to add your cloud infrastructure details. Open-AudIT will then reach out to your clouds using their native API and return your servers, just like any other device in Open-AudIT.<br> <br><em>NOTE</em> - To use this feature, we <em>must</em> enable the configuration items match_mac (for AWS) and match_hostname (for Azure). This will be done automatically the first time a cloud discovery is executed.<br> <br>Credentials for your cloud (<a href="/index.php/faq?name=Credentials for Microsoft Azure used in Cloud Discovery">Azure</a> or <a href="/index.php/faq?name=Credentials for Amazon AWS used in Cloud Discovery">AWS</a>) are required.<br> <br></p>'] = '<p>Dette endpoint giver dig mulighed for at tilføje dine cloud infrastruktur detaljer. Open- Audit vil derefter nå ud til dine skyer ved hjælp af deres indfødte API og returnere dine servere, ligesom enhver anden enhed i Open- Audit.<br/> <br/><em>BEMÆRKNING</em> - For at bruge denne funktion, vi <em>skal</em> aktivere konfigurationselementer match _ mac (for AWS) og match _ hostname (for Azure). Dette vil blive gjort automatisk første gang en cloud opdagelse udføres.<br/> <br/>Valgt til din sky (<a href="/index.php/faq?name=Credentials for Microsoft Azure used in Cloud Discovery">Azure</a> eller <a href="/index.php/faq?name=Credentials for Amazon AWS used in Cloud Discovery">AWS</a>) er påkrævet.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Vulnerabilities reporting based on the NIST CVE feed.<br> <br></p>'] = '<p>Sårbarhed rapportering baseret på NIST CVE foder.<br/> <br/></p>';

$GLOBALS["lang"]['<p>We initially setup the default list of scripts with the default options. These default scripts cannot be deleted. You can create additional scripts for use by you as required. Your script will be based on one of the existing scripts and have custom options applied. The scripts can then be downloaded from the list page at menu -> Discover -> Audit Scripts -> List Audit Scripts<br> <br></p>'] = '<p>Vi opsætter i første omgang standardlisten over scripts med standardtilvalg. Disse standard scripts kan ikke slettes. Du kan oprette yderligere scripts til brug for dig efter behov. Dit script vil være baseret på en af de eksisterende scripts og har brugerdefinerede muligheder anvendes. Scripts kan derefter downloades fra listesiden i menuen - > Oplev - > Revisionsscripts - > Liste over revisionsscripts<br/> <br/></p>';

$GLOBALS["lang"]['<p>When using Regex for matching, a helpful page can be found on the <a href="https://www.php.net/manual/en/regexp.reference.meta.php" target="_blank"> PHP website</a>. Some differences to Perl Regex can be found <a href="https://www.php.net/manual/en/reference.pcre.pattern.differences.php" target="_blank">here</a>.</p>'] = '<p>Når Regex bruges til matching, kan en hjælpsom side findes på <a href="https://www.php.net/manual/en/regexp.reference.meta.php" target="_blank"> PHP-websted</a>. Nogle forskelle til Perl Regex kan findes <a href="https://www.php.net/manual/en/reference.pcre.pattern.differences.php" target="_blank">her</a>.</p>';

$GLOBALS["lang"]['<p>Widgets can easily be created to show whatever is specific to your environment on your dashboards.<br> <br></p>'] = '<p>Widgets kan nemt oprettes til at vise, hvad der er specifikt for dit miljø på dine dashboards.<br/> <br/></p>';

$GLOBALS["lang"]['<p>With Open-AudIT Professional and Enterprise you can automate and schedule discoveries, report generation, or baseline checks to run when you want, and as often as you need. Schedule your discoveries to run nightly and reports to be generated and emailed to key personnel each morning. Complex or simple schedules, device discovery and report generation is just a click away.<br> <br>Create individual discovery schedules for each subnet or AD controller, add in reports to be created for targeted audiences. Develop simple or complex schedules to support company needs, avoid backups or impact to operations, or simply to spread the load and speed-up audit completion.<br> <br></p>'] = '<p>Med Open- Audit Professionel og Enterprise du kan automatisere og planlægge opdagelser, rapportere generation, eller baseline kontrol til at køre, når du ønsker, og så ofte som du har brug for. Planlæg dine opdagelser til at køre natligt og rapporter, der skal genereres og mailes til nøglepersonale hver morgen. Komplekse eller enkle tidsplaner, enhed opdagelse og rapport generation er blot et klik væk.<br/> <br/>Opret individuelle søgningsskemaer for hver subnet eller AD controller, tilføje i rapporter, der skal oprettes for målrettede målgrupper. Udvikle enkle eller komplekse tidsplaner til at støtte virksomhedens behov, undgå sikkerhedskopier eller effekt til operationer, eller blot at sprede belastningen og speed- up revision afslutning.<br/> <br/></p>';

$GLOBALS["lang"]['<p>You can create a script with all the options for any of the existing audit scripts - not just Windows. AIX, ESX, Linux, OSX and Windows are all covered.<br> <br></p>'] = '<p>Du kan oprette et script med alle de muligheder for nogen af de eksisterende revision scripts - ikke bare Windows. AIX, ESX, Linux, OSX og Windows er alle dækket.<br/> <br/></p>';

$GLOBALS["lang"]['<p>You can use the percent % sign as a wildcard in the match_string.<br> <br></p>'] = '<p>Du kan bruge procent% tegnet som et wildcard i match _ strengen.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Your racks help refine exactly where your devices are located.<br> <br></p>'] = '<p>Dine stativer hjælper med at forfine præcis hvor dine enheder er placeret.<br/> <br/></p>';

$GLOBALS["lang"]['<strong>NOTE</strong> - You are accessing this URL from the local Open-AudIT server. The downloaded script will not be able to submit when run on any other machine. If you need to audit other machines, please download the script from any remote machine, not using a browser on the Open-AudIT server itself.'] = '<strong>BEMÆRKNING</strong> - Du har adgang til denne URL fra den lokale Open- AudiT server. Det downloadede script vil ikke være i stand til at indsende når der køres på nogen anden maskine. Hvis du har brug for at revidere andre maskiner, skal du downloade scriptet fra en fjern maskine, ikke ved hjælp af en browser på Open- Audit server selv.';

$GLOBALS["lang"]['A CVE item that does not contain a filter to determine the affected item(s).'] = 'Et CVE-element, der ikke indeholder et filter til bestemmelse af de pågældende punkter.';

$GLOBALS["lang"]['A Google Maps API Key is required for this function.'] = 'En Google Maps API Nøglen er nødvendig for denne funktion.';

$GLOBALS["lang"]['A JSON array of device IDs that will have this benchmark executed.'] = 'En JSON array af enhed ID, der vil få dette benchmark udført.';

$GLOBALS["lang"]['A JSON array of objects matching the software name taken from the CVE, enriched with the software name retrieved by Open-AudIT.'] = 'En JSON array af objekter, der matcher software navn taget fra CVE, beriget med software navn hentet af Open- Audit.';

$GLOBALS["lang"]['A JSON array of values to test for this vulnerability.'] = 'En JSON vifte af værdier til at teste for denne sårbarhed.';

$GLOBALS["lang"]['A JSON document containing the Orgs assigned to this user. IDs taken from <code>orgs.id</code>. If a user has access to an Org, they have access to that Orgs descendants.'] = 'Et JSON-dokument indeholdende de orgs, der er tildelt denne bruger. ID taget fra <code>orgs.id</code>. Hvis en bruger har adgang til en Org, har de adgang til at Orgs efterkommere.';

$GLOBALS["lang"]['A JSON document containing the required attributes depending on <code>scripts.type</code>.'] = 'Et JSON-dokument indeholdende de krævede attributter afhængigt af <code>scripts.type</code>.';

$GLOBALS["lang"]['A JSON document containing the required attributes overriding the chosen discovery_scan_options.'] = 'Et JSON-dokument, der indeholder de krævede attributter, der tilsidesætter de valgte søge- _ scan _ options.';

$GLOBALS["lang"]['A JSON document containing the required attributes overriding the default device match options.'] = 'Et JSON-dokument, der indeholder de krævede attributter, der tilsidesætter standardtilvalget for enhedsmatch.';

$GLOBALS["lang"]['A JSON document containing the roles assigned to this user. Role names taken from <code>roles.name</code>.'] = 'Et JSON-dokument indeholdende de roller, der tildeles denne bruger. Rolenavne taget fra <code>roles.name</code>.';

$GLOBALS["lang"]['A JSON object containing an array of attributes to change if the match occurs.'] = 'Et JSON-objekt, der indeholder en række attributter at ændre, hvis kampen opstår.';

$GLOBALS["lang"]['A JSON object containing an array of attributes to match.'] = 'Et JSON-objekt, der indeholder en række attributter at matche.';

$GLOBALS["lang"]['A JSON object containing collection specific options.'] = 'Et JSON objekt, der indeholder indsamling specifikke muligheder.';

$GLOBALS["lang"]['A JSON object populated via a Cloud discovery.'] = 'Et JSON objekt befolket via en Cloud opdagelse.';

$GLOBALS["lang"]['A JSON representation containing the details of the queue item to be executed.'] = 'En JSON-repræsentation, der indeholder oplysninger om det køelement, der skal udføres.';

$GLOBALS["lang"]['A JSON representation of the fields for this integration.'] = 'En JSON-repræsentation af områderne for denne integration.';

$GLOBALS["lang"]['A JSON representation of the individual tests and their results on all devices this baseline has been run against.'] = 'En JSON repræsentation af de individuelle test og deres resultater på alle enheder denne baseline er blevet kørt imod.';

$GLOBALS["lang"]['A JSON representation of the tests that make up this policy.'] = 'En JSON repræsentation af de test, der udgør denne politik.';

$GLOBALS["lang"]['A LAN can be connected to a WAN using a router.'] = 'Et LAN kan tilsluttes en WAN ved hjælp af en router.';

$GLOBALS["lang"]['A Metropolitan area network (MAN) is a large computer network that usually spans a city or a large campus.'] = 'Et Metropolitan område netværk (MAN) er et stort computernetværk, der normalt spænder over en by eller en stor campus.';

$GLOBALS["lang"]['A Seed discovery uses an initial IP to retrieve the IPs of any other devices it knows about, adds those IPs to the list and scans those - again asking for any IPs those additional devices knows about. Rinse and repeat. It is intelligent enough to know if it has already scanned a given IP in its execution and discards any already scanned (or even on the list to be scanned).'] = 'A Seed opdagelse bruger en indledende IP til at hente IP \'er af andre enheder, den kender til, tilføjer disse IP\' er til listen og scanner dem - igen beder om nogen IP \'er disse ekstra enheder kender til. Skyl og gentag. Det er intelligent nok til at vide, om det allerede har scannet en given IP i sin udførelse og udsmid nogen allerede scannet (eller endda på listen, der skal scannes).';

$GLOBALS["lang"]['A Subnet discovery will scan the IPs provided.'] = 'En Subnet opdagelse vil scanne IPs leveres.';

$GLOBALS["lang"]['A URL provided to the agent which will then download the file and store it on the local disk.'] = 'En URL til agenten som derefter vil downloade filen og gemme den på den lokale disk.';

$GLOBALS["lang"]['A URL to a file to download.'] = 'En URL til en fil at downloade.';

$GLOBALS["lang"]['A backbone network is part of a computer network infrastructure that provides a path for the exchange of information between different LANs or sub-networks. A backbone can tie together diverse networks within the same building, across different buildings, or over a wide area.<br><br>For example, a large company might implement a backbone network to connect departments that are located around the world. The equipment that ties together the departmental networks constitutes the network backbone. When designing a network backbone, network performance and network congestion are critical factors to take into account. Normally, the backbone network capacity is greater than that of the individual networks connected to it.<br><br>Another example of a backbone network is the Internet backbone, which is the set of wide area networks (WANs) and core routers that tie together all networks connected to the Internet.'] = 'Et netværk af rygraden er en del af en infrastruktur af computernetværk, der giver mulighed for udveksling af oplysninger mellem forskellige LANer eller subnetværk. En rygrad kan binde forskellige netværk inden for samme bygning, på tværs af forskellige bygninger eller over et bredt område.<br/><br/>For eksempel, en stor virksomhed kan gennemføre en rygrad netværk til at forbinde afdelinger, der er placeret rundt om i verden. Det udstyr, der forbinder afdelingerne, udgør nettets rygrad. Ved udformningen af en netrygrad er netpræstation og netoverbelastning afgørende faktorer at tage hensyn til. Normalt er rygsøjlenettets kapacitet større end de enkelte net, der er forbundet hermed.<br/><br/>Et andet eksempel på et netværk af rygrad er internetrygraden, som er det store netværk (WANs) og centrale routere, der forbinder alle netværk, der er tilsluttet internettet.';

$GLOBALS["lang"]['A calculated field that displays the number of times this piece of software was found on the computers in the selected Org (and its descendants if configured).'] = 'Et beregnet felt, der viser antallet af gange dette stykke software blev fundet på computerne i den valgte Org (og dens efterkommere, hvis konfigureret).';

$GLOBALS["lang"]['A campus area network (CAN) is made up of an interconnection of LANs within a limited geographical area. The networking equipment (switches, routers) and transmission media (optical fiber, copper plant, Cat5 cabling, etc.) are almost entirely owned by the campus tenant / owner (an enterprise, university, government, etc.).<br><br>For example, a university campus network is likely to link a variety of campus buildings to connect academic colleges or departments, the library, and student residence halls.'] = 'Et campus-områdenet (CAN) består af en sammenkobling af LAN inden for et begrænset geografisk område. Netværksudstyret (afbrydere, routere) og transmissionsmedier (optiske fibre, kobberanlæg, Cat5-kabler osv.) ejes næsten udelukkende af campus-lejer / ejer (en virksomhed, universitet, regering osv.).<br/><br/>For eksempel, et universitet campus netværk er tilbøjelige til at forbinde en række campus bygninger til at forbinde akademiske universiteter eller afdelinger, biblioteket, og studerende kollegier.';

$GLOBALS["lang"]['A closed port is accessible (it receives and responds to Nmap probe packets), but there is no application listening on it. They can be helpful in showing that a host is up on an IP address (host discovery, or ping scanning), and as part of OS detection. Because closed ports are reachable, it may be worth scanning later in case some open up. Administrators may want to consider blocking such ports with a firewall. Then they would appear in the filtered state, discussed next.'] = 'En lukket port er tilgængelig (den modtager og reagerer på Nmap sonde pakker), men der er ingen program lytter på det. De kan være nyttige i at vise, at en vært er op på en IP-adresse (vært opdagelse, eller ping scanning), og som en del af OS opdagelse. Fordi lukkede havne kan nås, kan det være værd at scanne senere i tilfælde af nogle åbne op. Administratorer kan overveje at blokere sådanne havne med en firewall. Så ville de vise sig i filtreret tilstand, diskuteret næste.';

$GLOBALS["lang"]['A collector is either in Collector or Stand-Alone mode.'] = 'En samler er enten i Collector eller Stand- Alone tilstand.';

$GLOBALS["lang"]['A comma separated list of applicable CVEs.'] = 'En kommaadskilt liste over relevante CVE \'er.';

$GLOBALS["lang"]['A comma separated list of values, one of which can be selected.'] = 'En kommaadskilt liste over værdier, hvoraf en kan vælges.';

$GLOBALS["lang"]['A command to run. When the agent is Windows based, this command is run from within the powershell agent.'] = 'En ordre at løbe. Når agenten er Windows baseret, denne kommando køres fra inde i powershell agent.';

$GLOBALS["lang"]['A dashboard is made up of three columns and two rows of what we call <i>widgets</i>. A widget is very similar to a summary, only we take the summary concept a bit further. Widgets are created in a simple fashion using a couple of drop down boxes - or you can elect to use your own SQL for complete customisability.'] = 'Et instrumentbræt består af tre søjler og to rækker af det vi kalder <i>widgets</i>. En widget er meget lig et resumé, men vi tager det resumé koncept lidt længere. Widgets er skabt på en enkel måde ved hjælp af et par drop down kasser - eller du kan vælge at bruge din egen SQL for fuldstændig brugervenlighed.';

$GLOBALS["lang"]['A filtered port is considered open (and will trigger device detection).'] = 'En filtreret port betragtes som åben (og vil udløse detektering af enheden).';

$GLOBALS["lang"]['A global area network (GAN) is a network used for supporting mobile across an arbitrary number of wireless LANs, satellite coverage areas, etc. The key challenge in mobile communications is handing off user communications from one local coverage area to the next. In IEEE Project 802, this involves a succession of terrestrial wireless LANs.'] = 'Et globalt områdenetværk (GAN) er et netværk, der anvendes til at støtte mobil på tværs af et vilkårligt antal trådløse LANer, satellitområder osv. Den største udfordring inden for mobilkommunikation er at give brugerkommunikation fra et lokalt dækningsområde til det næste. I IEEE-projekt 802 omfatter dette en række jordbaserede trådløse LAN.';

$GLOBALS["lang"]['A home area network (HAN) is a residential LAN used for communication between digital devices typically deployed in the home, usually a small number of personal computers and accessories, such as printers and mobile computing devices. An important function is the sharing of Internet access, often a broadband service through a cable TV or digital subscriber line (DSL) provider.'] = 'Et hjemmenetværk (HAN) er et beboelsesområde LAN, der bruges til kommunikation mellem digitale enheder, der typisk anvendes i hjemmet, normalt et lille antal personlige computere og tilbehør, såsom printere og mobile computere. En vigtig funktion er deling af internetadgang, ofte en bredbåndstjeneste via kabel-tv eller digital abonnentlinje (DSL) udbyder.';

$GLOBALS["lang"]['A list of custom TCP ports to scan (22 is SSH, 135 is WMI, 62078 is iPhone sync).'] = 'En liste over brugerdefinerede TCP-porte til at scanne (22 er SSH, 135 er WMI, 62078 er iPhone sync).';

$GLOBALS["lang"]['A list of custom UDP ports to scan (161 is SNMP).'] = 'En liste over brugerdefinerede UDP-porte til scanning (161 er SNMP).';

$GLOBALS["lang"]['A local area network (LAN) is a network that connects computers and devices in a limited geographical area such as a home, school, office building, or closely positioned group of buildings. Each computer or device on the network is a node. Wired LANs are most likely based on Ethernet technology. Newer standards such as ITU-T G.hn also provide a way to create a wired LAN using existing wiring, such as coaxial cables, telephone lines, and power lines.<br><br>The defining characteristics of a LAN, in contrast to a wide area network (WAN), include higher data transfer rates, limited geographic range, and lack of reliance on leased lines to provide connectivity. Current Ethernet or other IEEE 802.3LAN technologies operate at data transfer rates up to 100 Gbit/s, standardized by IEEE in 2010. Currently, 400 Gbit/s Ethernet is being developed.'] = 'Et lokalt netværk (LAN) er et netværk, der forbinder computere og enheder i et begrænset geografisk område, såsom et hjem, skole, kontorbygning eller tæt placerede grupper af bygninger. Hver computer eller enhed på netværket er en knude. Wired LANs er mest sandsynligt baseret på Ethernet teknologi. Nyere standarder såsom ITU-T G.hn giver også en måde at skabe en kappet LAN ved hjælp af eksisterende ledninger, såsom koaksialkabler, telefonlinjer og elledninger.<br/><br/>De karakteristiske træk ved et LAN, i modsætning til et bredt net (WAN), omfatter højere dataoverførselsrater, begrænset geografisk interval og manglende afhængighed af lejede linjer for at skabe forbindelse. Nuværende Ethernet eller andre IEEE 802.3LAN-teknologier opererer ved dataoverførselshastigheder op til 100 Gbit / s, standardiseret af IEEE i 2010. I øjeblikket 400 Gbit / s Ethernet er under udvikling.';

$GLOBALS["lang"]['A location is a physical address that can have devices associated with it. You can assign it coordinates and if there are devices assigned, the location will appear on the Map when you have an Open-AudIT Enterprise license.'] = 'En placering er en fysisk adresse, der kan have enheder forbundet med det. Du kan tildele det koordinater, og hvis der er enheder tildelt, vil placeringen vises på kortet, når du har en Open- Audit Enterprise licens.';

$GLOBALS["lang"]['A location name will help you to find these devices in the future.'] = 'Et stednavn vil hjælpe dig med at finde disse enheder i fremtiden.';

$GLOBALS["lang"]['A lower number means it will be applied before other rules.'] = 'Et lavere antal betyder, at det vil blive anvendt før andre regler.';

$GLOBALS["lang"]['A lower number means it will be applied before other rules. The default weight is 100.'] = 'Et lavere antal betyder, at det vil blive anvendt før andre regler. Standardvægten er 100.';

$GLOBALS["lang"]['A new user logged in to Open-AudIT and was authenticated and authorized by the LDAP sever. That user was then created in Open-AudIT and logged in. Success.'] = 'En ny bruger logget ind på Open- Audit og blev godkendt og godkendt af LDAP sever. Denne bruger blev derefter oprettet i Open- Audit og logget ind. Succes.';

$GLOBALS["lang"]['A package is a piece of installed softare. A package has a type - antivirus, approved, backup, banned, cloud, firewall, ignored, license or other.'] = 'En pakke er et stykke installeret bløddel. En pakke har en type - antivirus, godkendt, backup, forbudt, cloud, firewall, ignoreret, licens eller andet.';

$GLOBALS["lang"]['A password (stored as a hash) that enables logon when using application authentication.'] = 'Et kodeord (gemt som hash), der muliggør logon, når programmet godkendes.';

$GLOBALS["lang"]['A person has an account in the Open-AudIT application. Their user account has a list of associated Roles and Organizations. The roles the user has determines WHAT they can do. The Organizations a user has determines WHICH items they can act upon.<br><br>When a user requests to perform an operation (create, read, update, delete) on a collection item, the roles are consulted to see if they are allowed to perform that action, then the orgs are consulted to determine if the collection item belongs to an org the user has permission to act on.'] = 'En person har en konto i Open- Audit applikationen. Deres brugerkonto har en liste over associerede Roles og organisationer. De roller, brugeren har, bestemmer, hvad de kan gøre. Organisationer en bruger har afgørende hvilke elementer, de kan handle på.<br/><br/>Når en bruger anmoder om at udføre en operation (oprette, læse, opdatere, slette) på en samling element, rollerne er konsulteret for at se, om de er tilladt at udføre denne handling, så er orgs konsulteres for at afgøre, om indsamling element tilhører en org brugeren har tilladelse til at handle på.';

$GLOBALS["lang"]['A personal area network (PAN) is a computer network used for communication among computer and different information technological devices close to one person. Some examples of devices that are used in a PAN are personal computers, printers, fax machines, telephones, PDAs, scanners, and even video game consoles. A PAN may include wired and wireless devices. The reach of a PAN typically extends to 10 meters. A wired PAN is usually constructed with USB and FireWire connections while technologies such as Bluetooth and infrared communication typically form a wireless PAN.'] = 'Et personligt områdenetværk (PAN) er et computernetværk, der bruges til kommunikation mellem computere og forskellige informationsteknologiske enheder tæt på én person. Nogle eksempler på enheder, der anvendes i en PAN er personlige computere, printere, faxmaskiner, telefoner, PDA \'er, scannere og endda videospilkonsoller. En PAN kan omfatte kablede og trådløse enheder. rækkevidde af en PAN typisk strækker sig til 10 meter. En kablet PAN er normalt konstrueret med USB og FireWire forbindelser, mens teknologier som Bluetooth og infrarød kommunikation typisk danner en trådløs PAN.';

$GLOBALS["lang"]['A query is essentially a SQL statement. This statement is run against the database with the automatic addition of the limit, filtered to apply to only those requested items and only those items the user has permission to view. A Query can be created using menu -> Manage -> Queries -> Create Queries. Queries contain an org_id and are hence restricted to the appropriate users. A user must have the org_admin or reporter role(s) to create, update or delete a query. All users can execute a query. A query has a name attribute used for the menu item as well as a menu category attribute. This tells the Open-Audit GUI which submenu to place the query in. There is also menu display which should be set to <i>y</i> to enable the query in the GUI (<i>n</i> to prevent the query from appearing at all). The query would still run if called using its <code>id</code>, regardless of menu displays value.'] = 'En forespørgsel er grundlæggende en SQL erklæring. Denne erklæring køres mod databasen med automatisk tilføjelse af grænsen, filtreret til kun at gælde for de ønskede elementer og kun de elementer, brugeren har tilladelse til at se. En forespørgsel kan oprettes ved hjælp af menu - > Håndtering - > Forespørgsler - > Opret forespørgsler. Forespørgsler indeholder en org _ id og er derfor begrænset til de relevante brugere. En bruger skal have org _ admin eller reporter rolle (r) til at oprette, opdatere eller slette en forespørgsel. Alle brugere kan udføre en forespørgsel. En forespørgsel har et navn attribut der bruges til menupunktet samt en menukategori attribut. Dette fortæller den Open- Audit GUI som undermenu til at placere forespørgslen i. Der er også menu display, som skal sættes til <i>y</i> for at aktivere forespørgslen i GUI (<i>n</i> at forhindre forespørgslen i at dukke op overhovedet). Forespørgslen ville stadig køre, hvis kaldet ved hjælp af sin <code>id</code>, uanset menu viser værdi.';

$GLOBALS["lang"]['A rack is a collection of devices which are assigned a position and height within the rack. A device can optionally have a picture associated with it. A rack is placed in a row. We have created a very granular system for positioning of racks, which is as follows. At the top level (as always) is the Organisation (Org). An Org can have multiple locations (as has always been the case). With the addition of the Racks feature, a location can now contain one or more Buildings. A building can contain one or more Floors. A floor can contain one or more Rooms. A room can contain one or more Rows. This sounds like a lot of work, but defaults are created for you. Create a new Location and the sub-components will be automatically created for you. If you need more items (buildings, rooms, etc) you can add them as you like. A rack can also be part of a <i>pod</i> of racks. The pod attribute works as a tag, rather than a strict hierarchical inheritance model as per buildings, floors, etc.<br><br>Racks are a feature available to Open-AudIT Enterprise licensed customers.'] = 'En rack er en samling af enheder, der er tildelt en position og højde i rack. En enhed kan eventuelt have et billede forbundet med det. En rack er placeret i træk. Vi har skabt et meget granulært system til placering af stativer, hvilket er som følger. På øverste niveau (som altid) er organisationen (Org). En Org kan have flere steder (som altid har været tilfældet). Med tilføjelsen af racks funktion, kan en placering nu indeholde en eller flere Bygninger. En bygning kan indeholde et eller flere gulve. Et gulv kan indeholde et eller flere værelser. Et værelse kan indeholde en eller flere rækker. Det lyder som en masse arbejde, men standard er skabt for dig. Opret en ny placering og subkomponenterne vil automatisk blive oprettet for dig. Hvis du har brug for flere elementer (bygninger, værelser osv.) kan du tilføje dem som du vil. En rack kan også være en del af en <i>kapsel</i> af stativer. Pod attributten fungerer som et mærke, snarere end en streng hierarkisk arvemodel som pr bygninger, gulve osv.<br/><br/>Racks er en funktion til Open- Audit Enterprise licenserede kunder.';

$GLOBALS["lang"]['A routing domain or address space where the IP addresses and MAC addresses are unique.'] = 'Et routingdomæne eller adresseområde, hvor IP-adresser og MAC-adresser er unikke.';

$GLOBALS["lang"]['A sample cron file for Linux is below. This should be placed in'] = 'En prøve cron fil til Linux er nedenfor. Dette bør placeres i';

$GLOBALS["lang"]['A security zone is a administrative domain or policy domain within the Network Domain.'] = 'En sikkerhedszone er et administrativt domæne eller politikdomæne inden for netværksområdet.';

$GLOBALS["lang"]['A seed discovery is another type of discovery, where you provide the IP of a single <i>seed</i> device. This device is audited, and any IPs it knows are then added to the list of IPs to be audited. Then, those devices are audited and any IPs they know are also added to the list of IPs for auditing. This process then continues within the parameters configured by the user.'] = 'En frø opdagelse er en anden type opdagelse, hvor du giver IP af en enkelt <i>frø</i> enhed. Denne anordning revideres, og eventuelle integrerede projekter, den kender, tilføjes derefter til listen over integrerede projekter, der skal revideres. Derefter revideres disse enheder, og eventuelle IP \'er, de kender, tilføjes også til listen over IP\' er til revision. Denne proces fortsætter derefter inden for de parametre konfigureret af brugeren.';

$GLOBALS["lang"]['A short description of the log entry.'] = 'En kort beskrivelse af loggen.';

$GLOBALS["lang"]['A storage area network (SAN) is a dedicated network that provides access to consolidated, block level data storage. SANs are primarily used to make storage devices, such as disk arrays, tape libraries, and optical jukeboxes, accessible to servers so that the devices appear like locally attached devices to the operating system. A SAN typically has its own network of storage devices that are generally not accessible through the local area network by other devices. The cost and complexity of SANs dropped in the early 2000s to levels allowing wider adoption across both enterprise and small to medium-sized business environments.'] = 'Et lagerområde netværk (SAN) er et dedikeret netværk, der giver adgang til konsolideret, blok niveau data lagring. SANs bruges primært til at gøre lagringsenheder, såsom diskarrays, båndbiblioteker og optiske jukebokse, tilgængelige for servere, så enhederne fremstår som lokalt fastgjort enheder til operativsystemet. En SAN typisk har sit eget netværk af lagringsenheder, der generelt ikke er tilgængelige via lokalområdet netværk af andre enheder. Omkostningerne og kompleksiteten af SANs faldt i begyndelsen af 2000 \'erne til niveauer, der tillader bredere adoption på tværs af både virksomheder og små til mellemstore virksomheder.';

$GLOBALS["lang"]['A string that matches the <code>software.name</code> attribute. You can use the standard SQL wildcard of percent (%) to match one or more characters.'] = 'En streng der matcher <code>software.name</code> attribut. Du kan bruge standard SQL wildcard af procent (%) til at matche en eller flere tegn.';

$GLOBALS["lang"]['A structured system for managing sensitive information'] = 'Et struktureret system til forvaltning af følsomme oplysninger';

$GLOBALS["lang"]['A timestamp.'] = 'Et tidsstempel.';

$GLOBALS["lang"]['A user has a primary Org as well as a list of Orgs they can access. A user combines this with a list of assigned roles that define what actions they can take on items assigned to the Orgs they have access to. The combination of a users <i>orgs</i> and <i>roles</i> define what they can and cannot do within Open-AudIT.'] = 'En bruger har en primær Org samt en liste over Orgs, de kan få adgang til. En bruger kombinerer dette med en liste over tildelte roller, der definerer, hvilke handlinger de kan tage på emner, der er tildelt til Orgs de har adgang til. Kombinationen af en bruger <i>orgs</i> og <i>roller</i> definere, hvad de kan og ikke kan gøre i Open- Audit.';

$GLOBALS["lang"]['A user will have a list of associated organizations (orgs). Each org the user has will allow them to act upon items within that org as per their role(s).<br><br>All orgs except the default org have a parent. Think of an Org Chart. If a user has permission on an Org, they also have permission on any descendants of that Org.<br><br>Users are also allowed permission on a child org to see the items from parent orgs for certain collections. Those are: dashboards, discovery_scan_options, fields, files, groups, queries, reports, roles, rules, scripts, summaries, widgets.<br><br>Do not forget you have granular control over what users can see and do using Roles in Enterprise.'] = 'En bruger vil have en liste over associerede organisationer (orgs). Hver org brugeren har vil give dem mulighed for at handle på elementer i denne org som pr deres rolle (r).<br/><br/>Alle orgs undtagen standard org har en forælder. Tænk på en Org Chart. Hvis en bruger har tilladelse på en Org, de har også tilladelse på eventuelle efterkommere af denne Org.<br/><br/>Brugere har også tilladelse til at se elementer fra forældreorger på et børneorgel til visse samlinger. Disse er: dashboards, opdagelse _ scan _ options, felter, filer, grupper, forespørgsler, rapporter, roller, regler, scripts, resuméer, widgets.<br/><br/>Glem ikke, at du har kornet kontrol over, hvad brugerne kan se og gøre ved hjælp af Roles i Enterprise.';

$GLOBALS["lang"]['A user will have a list of associated organizations (orgs). Each org the user has will allow them to act upon items within that org as per their role(s).<br><br>All orgs except the default org have a parent. Think of an Org Chart. If a user has permission on an Org, they also have permission on any descendants of that Org.<br><br>We have also allow a user with permission on a child org to see the items from parent orgs for certain collections. Those are: dashboards, discovery_scan_options, fields, files, groups, queries, roles, rules, scripts, summaries, widgets.<br><br>Do not forget you have granular control over what users can see and do using'] = 'En bruger vil have en liste over associerede organisationer (orgs). Hver org brugeren har vil give dem mulighed for at handle på elementer i denne org som pr deres rolle (r).<br/><br/>Alle orgs undtagen standard org har en forælder. Tænk på en Org Chart. Hvis en bruger har tilladelse på en Org, de har også tilladelse på eventuelle efterkommere af denne Org.<br/><br/>Vi har også tillade en bruger med tilladelse på et barn org til at se elementer fra forældre orgs for visse samlinger. Disse er: dashboards, opdagelse _ scan _ options, felter, filer, grupper, forespørgsler, roller, regler, scripts, resuméer, widgets.<br/><br/>Glem ikke, at du har kornet kontrol over, hvad brugerne kan se og gøre ved hjælp af';

$GLOBALS["lang"]['A virtual private network (VPN) is an overlay network in which some of the links between nodes are carried by open connections or virtual circuits in some larger network (e.g., the Internet) instead of by physical wires. The data link layer protocols of the virtual network are said to be tunneled through the larger network when this is the case. One common application is secure communications through the public Internet, but a VPN need not have explicit security features, such as authentication or content encryption. VPNs, for example, can be used to separate the traffic of different user communities over an underlying network with strong security features.<br><br>VPN may have best-effort performance, or may have a defined service level agreement (SLA) between the VPN customer and the VPN service provider. Generally, a VPN has a topology more complex than point-to-point.'] = 'Et virtuelt privat netværk (VPN) er et overlay-netværk, hvor nogle af båndene mellem knudepunkter bæres af åbne forbindelser eller virtuelle kredsløb i nogle større netværk (f.eks. internettet) i stedet for af fysiske ledninger. Data link lag protokoller af det virtuelle netværk siges at være tunneled gennem det større netværk, når dette er tilfældet. Et fælles program er sikker kommunikation via det offentlige internet, men en VPN behøver ikke have eksplicitte sikkerhedselementer, såsom autentificering eller indholdskryptering. VPN \'er kan f.eks. bruges til at adskille trafikken i forskellige brugergrupper over et underliggende netværk med stærke sikkerhedselementer.<br/><br/>VPN kan have best-indsats ydeevne, eller kan have en defineret serviceniveau aftale (SLA) mellem VPN-kunden og VPN tjenesteudbyder. Generelt har en VPN en topologi mere kompleks end point- to- point.';

$GLOBALS["lang"]['A vulnerability affecting availability may allow attackers to disrupt services, crash systems, or cause denial-of-service (DoS) (None, Low, High).'] = 'En sårbarhed, der påvirker tilgængeligheden, kan give angribere mulighed for at afbryde tjenester, nedbrud systemer, eller forårsage benægtelse-of- service (DoS) (Ingen, lav, høj).';

$GLOBALS["lang"]['A vulnerability affecting confidentiality may allow attackers to read sensitive data, such as personal information, credentials, or proprietary business data (None, Low, High).'] = 'En sårbarhed, der påvirker fortroligheden, kan give angribere mulighed for at læse følsomme data, såsom personlige oplysninger, legitimation eller fortrolige forretningsdata (Ingen, lav, høj).';

$GLOBALS["lang"]['A vulnerability affecting integrity may allow attackers to modify data, inject malicious code, or alter system configurations (None, Low, High).'] = 'En sårbarhed, der påvirker integriteten, kan tillade angribere at ændre data, injicere ondsindet kode eller ændre systemkonfigurationer (Ingen, Lav, Høj).';

$GLOBALS["lang"]['A vulnerability can be editied and more specific package names provided where the enrichment data is insufficient or the generated SQL is not quite correct.'] = 'Der kan opbygges en sårbarhed, og der kan leveres mere specifikke pakkenavne, hvis berigningsdataene er utilstrækkelige, eller hvis de genererede SQL ikke er helt korrekte.';

$GLOBALS["lang"]['A vulnerability item in Open-AudIT can be thought of as essentially a query against your database to determine your potential exposure to a given CVE report. A vulnerability is made up of the CVE report, along with enrichment data from FirstWave. These two items are combined to produce a suitable query that is automatically downloaded from FirstWave.'] = 'Et sårbarhedselement i Open- Audit kan opfattes som en grundlæggende forespørgsel mod din database til at bestemme din potentielle eksponering for en given CVE-rapport. En sårbarhed består af CVE-rapporten sammen med berigningsdata fra FirstWave. Disse to elementer er kombineret til at producere en passende forespørgsel, der automatisk downloades fra FirstWave.';

$GLOBALS["lang"]['A wide area network (WAN) is a computer network that covers a large geographic area such as a city, country, or spans even intercontinental distances. A WAN uses a communications channel that combines many types of media such as telephone lines, cables, and air waves. A WAN often makes use of transmission facilities provided by common carriers, such as telephone companies. WAN technologies generally function at the lower three layers of the OSI reference model: the physical layer, the data link layer, and the network layer.'] = 'Et bredt områdenet (WAN) er et computernetværk, der dækker et stort geografisk område som f.eks. en by, et land eller endog interkontinentale afstande. En WAN bruger en kommunikationskanal, der kombinerer mange typer medier såsom telefonlinjer, kabler og luftbølger. En WAN gør ofte brug af transmissionsfaciliteter, der leveres af fælles luftfartsselskaber, såsom telefonselskaber. WAN-teknologier fungerer generelt i de tre lavere lag af OSI-referencemodellen: det fysiske lag, datalink-laget og netværkslaget.';

$GLOBALS["lang"]['AD Group'] = 'AD Group';

$GLOBALS["lang"]['ADSL, HFC, ISDN, etc.'] = 'ADSL, HFC, ISDN osv.';

$GLOBALS["lang"]['AIX'] = 'AIX';

$GLOBALS["lang"]['ALL IPs'] = 'ALLE IPs';

$GLOBALS["lang"]['API / Web Access'] = 'API / Web Access';

$GLOBALS["lang"]['API Documentation'] = 'API-dokumentation';

$GLOBALS["lang"]['API Key required.'] = 'API nøgle kræves.';

$GLOBALS["lang"]['API Result'] = 'API-resultat';

$GLOBALS["lang"]['About'] = 'Om';

$GLOBALS["lang"]['Above are the only required items.'] = 'Ovenfor er de eneste nødvendige elementer.';

$GLOBALS["lang"]['Accept'] = 'Accepter';

$GLOBALS["lang"]['Access Model'] = 'Adgangsmodel';

$GLOBALS["lang"]['access_point'] = 'Adgangspunkt';

$GLOBALS["lang"]['Access Point'] = 'Adgangspunkt';

$GLOBALS["lang"]['access_token'] = 'Adgang Token';

$GLOBALS["lang"]['Access Token'] = 'Adgang Token';

$GLOBALS["lang"]['Access to the admin$ share and RPC uses the SMB2 protocol.'] = 'Adgang til admin $share og RPC bruger SMB2 protokollen.';

$GLOBALS["lang"]['ack_by'] = 'Ack By';

$GLOBALS["lang"]['Ack By'] = 'Ack By';

$GLOBALS["lang"]['ack_date'] = 'Ak- dato';

$GLOBALS["lang"]['Ack Date'] = 'Ak- dato';

$GLOBALS["lang"]['ack_time'] = 'Ak- tid';

$GLOBALS["lang"]['Ack Time'] = 'Ak- tid';

$GLOBALS["lang"]['action'] = 'Handling';

$GLOBALS["lang"]['Action'] = 'Handling';

$GLOBALS["lang"]['action_audit'] = 'Aktionskontrol';

$GLOBALS["lang"]['Action Audit'] = 'Aktionskontrol';

$GLOBALS["lang"]['action_command'] = 'Handlingskommando';

$GLOBALS["lang"]['Action Command'] = 'Handlingskommando';

$GLOBALS["lang"]['action_date'] = 'Aktionsdato';

$GLOBALS["lang"]['Action Date'] = 'Aktionsdato';

$GLOBALS["lang"]['action_devices_assigned_to_location'] = 'Aktiveringsenheder tildelt til placering';

$GLOBALS["lang"]['Action Devices Assigned To Location'] = 'Aktiveringsenheder tildelt til placering';

$GLOBALS["lang"]['action_devices_assigned_to_org'] = 'Aktiveringsenheder tildelt til Org';

$GLOBALS["lang"]['Action Devices Assigned To Org'] = 'Aktiveringsenheder tildelt til Org';

$GLOBALS["lang"]['action_download'] = 'Action Download';

$GLOBALS["lang"]['Action Download'] = 'Action Download';

$GLOBALS["lang"]['action_uninstall'] = 'Afinstallere handling';

$GLOBALS["lang"]['Action Uninstall'] = 'Afinstallere handling';

$GLOBALS["lang"]['actioned'] = 'Aktiveret';

$GLOBALS["lang"]['Actioned'] = 'Aktiveret';

$GLOBALS["lang"]['actioned_by'] = 'Aktiveret af';

$GLOBALS["lang"]['Actioned By'] = 'Aktiveret af';

$GLOBALS["lang"]['actioned_date'] = 'Dato';

$GLOBALS["lang"]['Actioned Date'] = 'Dato';

$GLOBALS["lang"]['actions'] = 'Handlinger';

$GLOBALS["lang"]['Actions'] = 'Handlinger';

$GLOBALS["lang"]['Activate'] = 'Aktivér';

$GLOBALS["lang"]['Activate Free License'] = 'Aktivér gratis licens';

$GLOBALS["lang"]['Activate Key'] = 'Aktivér nøgle';

$GLOBALS["lang"]['Activate a free Enterprise license'] = 'Aktivér en gratis Enterprise-licens';

$GLOBALS["lang"]['Active'] = 'Aktiv';

$GLOBALS["lang"]['Active / Active'] = 'Aktiv / Aktiv';

$GLOBALS["lang"]['Active / Passive'] = 'Aktivt / passivt';

$GLOBALS["lang"]['Active Directory'] = 'Aktiv mappe';

$GLOBALS["lang"]['Active Directory Domain'] = 'Active Directory Domain';

$GLOBALS["lang"]['active_directory_ou'] = 'Active Directory Ou';

$GLOBALS["lang"]['Active Directory Ou'] = 'Active Directory Ou';

$GLOBALS["lang"]['Active Directory Server'] = 'Active Directory Server';

$GLOBALS["lang"]['Active Directory and OpenLDAP'] = 'Aktiv mappe og OpenLDAP';

$GLOBALS["lang"]['ad_domain'] = 'Ad domain';

$GLOBALS["lang"]['Ad Domain'] = 'Ad domain';

$GLOBALS["lang"]['ad_group'] = 'Ad-gruppe';

$GLOBALS["lang"]['Ad Group'] = 'Ad-gruppe';

$GLOBALS["lang"]['ad_server'] = 'Ad server';

$GLOBALS["lang"]['Ad Server'] = 'Ad server';

$GLOBALS["lang"]['Add'] = 'Tilføj';

$GLOBALS["lang"]['Add Credentials'] = 'Tilføj afstemning';

$GLOBALS["lang"]['Add Device'] = 'Tilføj enhed';

$GLOBALS["lang"]['Add Device to Application'] = 'Tilføj enhed til program';

$GLOBALS["lang"]['Add Device to Cluster'] = 'Tilføj enhed til klynge';

$GLOBALS["lang"]['Add Exception'] = 'Tilføj undtagelse';

$GLOBALS["lang"]['Add Field'] = 'Tilføj felt';

$GLOBALS["lang"]['Add If'] = 'Tilføj hvis';

$GLOBALS["lang"]['Add Policies from Device'] = 'Tilføj politikker fra enhed';

$GLOBALS["lang"]['Add Policy'] = 'Tilføj politik';

$GLOBALS["lang"]['Add Then'] = 'Tilføj derefter';

$GLOBALS["lang"]['Add Your Credentials'] = 'Tilføj dit valg';

$GLOBALS["lang"]['Add image'] = 'Tilføj billede';

$GLOBALS["lang"]['additional_items'] = 'Supplerende elementer';

$GLOBALS["lang"]['Additional Items'] = 'Supplerende elementer';

$GLOBALS["lang"]['address'] = 'Adresse';

$GLOBALS["lang"]['Address'] = 'Adresse';

$GLOBALS["lang"]['Address any nonconformities'] = 'Adresser på eventuelle afvigelser';

$GLOBALS["lang"]['Address audit findings and corrective actions'] = 'Behandling af revisionsresultater og korrigerende foranstaltninger';

$GLOBALS["lang"]['Admin'] = 'Admin';

$GLOBALS["lang"]['admin_status'] = 'Admin- status';

$GLOBALS["lang"]['Admin Status'] = 'Admin- status';

$GLOBALS["lang"]['advanced'] = 'Avanceret';

$GLOBALS["lang"]['Advanced'] = 'Avanceret';

$GLOBALS["lang"]['Afghanistan'] = 'Afghanistan';

$GLOBALS["lang"]['After an Integration has been created, when you view the details of an Integration you will notice a field named Debug. This is set to no by default. Changing it to yes provides extra logging when an Integration is executed. Debug should not be left as yes. This is because the debug output will contain everything retrieved from external systems - including items such as WMI and SNMP credentials. The debug option should be used only when an issue has occurred and you wish to dig deeper in to see if you can determine why.'] = 'Efter en integration er blevet skabt, når du ser detaljerne i en integration, vil du bemærke et felt kaldet debug. Dette sættes til ingen som standard. Ændring til ja giver ekstra logning, når en integration udføres. Fejlen bør ikke efterlades som ja. Dette skyldes, at fejlretningsoutput vil indeholde alt hentet fra eksterne systemer - herunder emner som WMI og SNMP legitimationsoplysninger. Fejlsøgningstilvalget bør kun bruges når et problem er opstået og du ønsker at grave dybere ind for at se om du kan afgøre hvorfor.';

$GLOBALS["lang"]['After completing the above, uninstall the agent.'] = 'Efter afslutning af ovenstående, afinstallere agenten.';

$GLOBALS["lang"]['Agent? Discovery? Credentials?'] = 'Agent? Opdagelse? Valgret?';

$GLOBALS["lang"]['agents'] = 'Agenter';

$GLOBALS["lang"]['Agents'] = 'Agenter';

$GLOBALS["lang"]['Agents entries can be created that specify a duration, a network and an operating system. If all tests match, the server then asks the agent to perform actions. If any test is not set, it is excluded from the <i>all must match</i> requirement.<br><br>You can create multiple agents and have the server check one or all agent entries. You might (for example) specify one agent that says <i>If the agent IP is in this subnet, set the location_id of the device</i>.<br><br>Another example might be not running an audit at all, rather download a script and run it. If the agent is installed with admin rights, you can now manage your machines without opening <strong>any</strong> ports from it to the world.</p><p>Enabling advanced agents means an agent can be instructed to download any file and execute any command. <strong>WARNING</strong>: This comes with security risks. This configuration will <strong>only</strong> function when running Open-AudIT using HTTPS and a valid (Certificate Authority provided) certificate for '] = 'Agenter poster kan oprettes, der angiver en varighed, et netværk og et operativsystem. Hvis alle tests matcher, beder serveren agenten om at udføre handlinger. Hvis en test ikke er indstillet, er den udelukket fra <i>alle skal matche</i> krav.<br/><br/>Du kan oprette flere agenter og få serveren til at tjekke en eller alle agentposter. Du kan (for eksempel) angive en agent, der siger <i>Hvis agent IP er i denne subnet, indstille placering _ id af enheden</i>.<br/><br/>Et andet eksempel kan være ikke kører en revision overhovedet, snarere downloade et script og køre det. Hvis agenten er installeret med admin rettigheder, kan du nu administrere dine maskiner uden at åbne <strong>alle</strong> havne fra det til verden.<p>Aktivering af avancerede agenter betyder, at en agent kan instrueres i at downloade enhver fil og udføre enhver kommando. <strong>ADVARSEL</strong>: Dette kommer med sikkerhedsrisici. Denne indstilling vil <strong>Kun til</strong> funktion, når du kører Open- Audit ved hjælp af HTTPS og et gyldigt certifikat (Certificate Authority) for </p>';

$GLOBALS["lang"]['Aggressive'] = 'Aggressive';

$GLOBALS["lang"]['Aland Islands'] = 'Alandsøerne';

$GLOBALS["lang"]['Albania'] = 'Albanien';

$GLOBALS["lang"]['Albanian'] = 'Albansk';

$GLOBALS["lang"]['alert_style'] = 'Alert stil';

$GLOBALS["lang"]['Alert Style'] = 'Alert stil';

$GLOBALS["lang"]['Algeria'] = 'Algeriet';

$GLOBALS["lang"]['algorithm'] = 'Alginisme';

$GLOBALS["lang"]['Algorithm'] = 'Alginisme';

$GLOBALS["lang"]['alias'] = 'Alias';

$GLOBALS["lang"]['Alias'] = 'Alias';

$GLOBALS["lang"]['All'] = 'Alle';

$GLOBALS["lang"]['All IPs'] = 'Alle integrerede projekter';

$GLOBALS["lang"]['All Policies'] = 'Alle politikker';

$GLOBALS["lang"]['All Queued Items'] = 'Alle punkter i kø';

$GLOBALS["lang"]['All collections URLs use the format'] = 'Alle samlinger URL \'er bruger formatet';

$GLOBALS["lang"]['All device sub-tables contain a couple of important columns.'] = 'Alle enheder under borde indeholder et par vigtige kolonner.';

$GLOBALS["lang"]['All devices with a type like computer.'] = 'Alle enheder med en type som computer.';

$GLOBALS["lang"]['All devices with a type of computer or router.'] = 'Alle enheder med en type computer eller router.';

$GLOBALS["lang"]['All devices without a type of switch and printer.'] = 'Alle enheder uden en type kontakt og printer.';

$GLOBALS["lang"]['All devices without a type of switch and printer. Essentially the same as the above query.'] = 'Alle enheder uden en type kontakt og printer. Grundlæggende det samme som ovenstående forespørgsel.';

$GLOBALS["lang"]['All regular discovery options are also available for use in Device Seed Discoveries.'] = 'Alle almindelige søgemuligheder er også tilgængelige til brug i Enhedsfrø opdagelser.';

$GLOBALS["lang"]['All tasks can be created the same in Windows and Linux. Tasks use the CRON method for scheduling execution.'] = 'Alle opgaver kan oprettes på samme måde i Windows og Linux. Opgaver bruge CRON metode til planlægning udførelse.';

$GLOBALS["lang"]['Along with this request for information, we send back to FirstWave datapoints that will give us some much needed information on feature use and your installation.'] = 'Sammen med denne anmodning om information, sender vi tilbage til FirstWave datapunkter, der vil give os nogle meget nødvendige oplysninger om brug af funktioner og din installation.';

$GLOBALS["lang"]['Also can be created from the'] = 'Også kan oprettes fra';

$GLOBALS["lang"]['Alternatives'] = 'Alternativer';

$GLOBALS["lang"]['Amazon AWS Fields'] = 'Amazon AWS Felter';

$GLOBALS["lang"]['American Samoa'] = 'Amerikansk Samoa';

$GLOBALS["lang"]['An Active Directory discovery will query Active Directory for a list of networks and scan the associated IPs just like a regular Subnet discovery.'] = 'En Active Directory opdagelse vil spørge Active Directory for en liste over netværk og scanne de tilhørende IPs ligesom en regelmæssig Subnet opdagelse.';

$GLOBALS["lang"]['An Org (organization) is the owner of most items in collections within Open-AudIT. With the exception of global items like <i>configuration</i>, most items are assigned to (owned by) an Org. A user has access to those items in a collection, that below to an Org the user has permission on.'] = 'En Org (organisation) er ejer af de fleste elementer i samlinger i Open- Audit. Med undtagelse af globale emner <i>konfiguration</i>, de fleste poster er tildelt (ejet af) en Org. En bruger har adgang til disse elementer i en samling, der nedenfor til en Org brugeren har tilladelse til.';

$GLOBALS["lang"]['An application is actively accepting TCP connections, UDP datagrams or SCTP associations on this port. Finding these is often the primary goal of port scanning. Security-minded people know that each open port is an avenue for attack. Attackers and pen-testers want to exploit the open ports, while administrators try to close or protect them with firewalls without thwarting legitimate users. Open ports are also interesting for non-security scans because they show services available for use on the network.'] = 'Et program accepterer aktivt TCP-forbindelser, UDP datagre eller SCTP-foreninger på denne port. At finde disse er ofte det primære mål for port scanning. Securityminded mennesker ved, at hver åben havn er en mulighed for angreb. Angribere og penttestere ønsker at udnytte de åbne havne, mens administratorer forsøger at lukke eller beskytte dem med firewalls uden at forhindre legitime brugere. Åbne porte er også interessante for ikke-sikkerhed scanninger, fordi de viser tjenester til rådighed til brug på netværket.';

$GLOBALS["lang"]['An array of <code>benchmarks.id</code>.'] = 'En række af <code>benchmarks.id</code>.';

$GLOBALS["lang"]['An array of <code>devices.id</code>.'] = 'En række af <code>devices.id</code>.';

$GLOBALS["lang"]['An array of object representing external links to more information.'] = 'En række objekter repræsenterer eksterne links til mere information.';

$GLOBALS["lang"]['An educated guess to the identity and type of device'] = 'Et kvalificeret gæt på udstyrets identitet og type';

$GLOBALS["lang"]['An encrypted JSON document containing the required attributes depending on the <code>credentials.type</code>.'] = 'Et krypteret JSON-dokument, der indeholder de krævede attributter, afhængigt af <code>credentials.type</code>.';

$GLOBALS["lang"]['An enterprise private network is a network that a single organization builds to interconnect its office locations (e.g., production sites, head offices, remote offices, shops) so they can share computer resources.'] = 'Et privat netværk af virksomheder er et netværk, som en enkelt organisation bygger for at sammenkoble sine kontorsteder (f.eks. produktionssteder, hovedkontorer, fjernkontorer, butikker), så de kan dele computerressourcer.';

$GLOBALS["lang"]['An entry can be created using the web interface if the current user logged in has a role that contains the'] = 'En indgang kan oprettes ved hjælp af web-interface, hvis den aktuelle bruger logget ind har en rolle, der indeholder';

$GLOBALS["lang"]['An example JSON POST body is below. This should be attached to the &quot;data&quot; form item.'] = 'Et eksempel JSON POST krop er nedenfor. Dette skal vedlægges formularen "data".';

$GLOBALS["lang"]['An example widget SQL showing devices counted per location.'] = 'Et eksempel på widget SQL viser enheder tælles pr. sted.';

$GLOBALS["lang"]['An existing Open-AudIT user was authenticated and authorized by the LDAP server. Success.'] = 'En eksisterende Open- Audit bruger blev godkendt og godkendt af LDAP-serveren. Succes.';

$GLOBALS["lang"]['An indication of the level of service required by this site.'] = 'En angivelse af det serviceniveau, som dette websted kræver.';

$GLOBALS["lang"]['An internal field that indicates if the discovery has completed.'] = 'Et internt felt, der angiver, om opdagelsen er afsluttet.';

$GLOBALS["lang"]['An open|filtered port is considered open (and will trigger device detection).<br>Previously, Open-AudIT considered an Nmap response of'] = 'Et åbent 124; filtreret port betragtes som åben (og vil udløse detektering enhed).<br/>Tidligere, Open- Aud IT betragtes som en Nmap respons af';

$GLOBALS["lang"]['An optional GeoCode'] = 'En valgfri GeoCode';

$GLOBALS["lang"]['An optional password to use sudo.'] = 'En valgfri adgangskode at bruge sudo.';

$GLOBALS["lang"]['Analyzed'] = 'Analyseret';

$GLOBALS["lang"]['And finally, click Submit to execute this discovery.'] = 'Og til sidst, klik på Indsend for at udføre denne opdagelse.';

$GLOBALS["lang"]['And if Something Goes Wrong?'] = 'Og hvis noget går galt?';

$GLOBALS["lang"]['And lastly click <i>Submit</i> to create your Open-AudIT Auth method for Entra.'] = 'Og endelig klik <i>Indsend</i> at oprette din Open- Audit Auth metode til Entra.';

$GLOBALS["lang"]['And lastly, not so much a security issue - more peace of mind. The data structures are open and documented. You can view them'] = 'Og endelig ikke så meget et sikkerhedsspørgsmål - mere ro i sindet. Datastrukturen er åben og dokumenteret. Du kan se dem';

$GLOBALS["lang"]['And provide a name - we humbly recommend Open-AudIT &#128512;, but you can name it anything you like. Make sure the option for <i>Integrate any other application you do not find in the gallery (Non-gallery)</i> is selected. And then click <i>Create<i>.'] = 'Og give et navn - vi ydmygt anbefale Open- Audit, men du kan navngive det, hvad du vil. Sørg for muligheden for <i>Integrer alle andre programmer, du ikke finder i galleriet (ikke-galleri)</i> er valgt. Og klik derefter <i>Opret<i>.</i></i>';

$GLOBALS["lang"]['And so much more.'] = 'Og så meget mere.';

$GLOBALS["lang"]['Andorra'] = 'Andorra';

$GLOBALS["lang"]['Angola'] = 'Angola';

$GLOBALS["lang"]['Anguilla'] = 'Anguilla';

$GLOBALS["lang"]['Annex A Controls'] = 'Bilag A Kontrol';

$GLOBALS["lang"]['Antarctica'] = 'Antarktis';

$GLOBALS["lang"]['AntiVirus'] = 'Antivirus';

$GLOBALS["lang"]['AntiVirus Packages'] = 'Antiviruspakker';

$GLOBALS["lang"]['Antigua and Barbuda'] = 'Antigua og Barbuda';

$GLOBALS["lang"]['Antivirus'] = 'Antivirus';

$GLOBALS["lang"]['Any TCP ports (comma seperated, no spaces) you wish to exclude from this discovery. Only available when using Nmap 7+.'] = 'Enhver TCP porte (komma seperated, ingen mellemrum) du ønsker at udelukke fra denne opdagelse. Kun tilgængelig ved brug af Nmap 7 +.';

$GLOBALS["lang"]['Any UDP ports (comma seperated, no spaces) you wish to exclude from this discovery. Only available when using Nmap 7+.'] = 'Enhver UDP-porte (komma seperated, ingen mellemrum) du ønsker at udelukke fra denne opdagelse. Kun tilgængelig ved brug af Nmap 7 +.';

$GLOBALS["lang"]['Any additional documentation you need.'] = 'Yderligere dokumentation.';

$GLOBALS["lang"]['Any additional notes you care to make.'] = 'Eventuelle yderligere noter du ønsker at gøre.';

$GLOBALS["lang"]['Any attributes followed by a * indicate that CVSS data less than v4 was used to complete this field. By default, we attempt to use v4 fields, however if they are not populated we will fallback to the previous version(s) for attributes.'] = 'Eventuelle attributter efterfulgt af en * angiver, at CVSS-data mindre end v4 blev brugt til at fuldføre dette felt. Som standard forsøger vi at bruge v4-felter, men hvis de ikke er befolket, vil vi falde tilbage til den tidligere version for attributter.';

$GLOBALS["lang"]['Any devices will be assigned to this Org when they run their audit script (if set).'] = 'Enhver enhed vil blive tildelt denne Org, når de kører deres revision script (hvis sæt).';

$GLOBALS["lang"]['Any devices will be assigned to this Org when they run their audit script (if set). Links to <code>orgs.id</code>.'] = 'Enhver enhed vil blive tildelt denne Org, når de kører deres revision script (hvis sæt). Links til <code>orgs.id</code>.';

$GLOBALS["lang"]['Any discovered devices will be assigned to this Location if set. Links to <code>locations.id</code>.'] = 'Eventuelle opdagede enheder vil blive tildelt denne placering, hvis sæt. Links til <code>locations.id</code>.';

$GLOBALS["lang"]['Any discovered devices will be assigned to this Location when they run their audit script (if set).'] = 'Enhver opdaget enhed vil blive tildelt dette sted, når de kører deres revision script (hvis sæt).';

$GLOBALS["lang"]['Any discovered devices will be assigned to this Location when they run their audit script (if set). Links to <code>locations.id</code>.'] = 'Enhver opdaget enhed vil blive tildelt dette sted, når de kører deres revision script (hvis sæt). Links til <code>locations.id</code>.';

$GLOBALS["lang"]['Any discovered devices will be assigned to this Org if set. If not set, they are assigned to the <code>org_id</code> of this discovery. Links to <code>orgs.id</code>.'] = 'Enhver opdaget enhed vil blive tildelt denne Org hvis sæt. Hvis de ikke er indstillet, er de tildelt <code>org_id</code> af denne opdagelse. Links til <code>orgs.id</code>.';

$GLOBALS["lang"]['Any files found in this manner are stored in the <i>executable</i> table as per any other device component.'] = 'Alle filer fundet på denne måde er gemt i <i>eksekverbar</i> tabel som pr enhver anden enhed komponent.';

$GLOBALS["lang"]['Any required filter. NOTE: When type = traffic, this represents the font-awesome icon.'] = 'Ethvert påkrævet filter. BEMÆRK: Når type = trafik, repræsenterer dette font- awesome ikon.';

$GLOBALS["lang"]['Any specific TCP ports you wish tested (comma seperated, no spaces).'] = 'Enhver specifik TCP-porte, du ønsker testet (komma seperated, ingen mellemrum).';

$GLOBALS["lang"]['Any specific UDP ports you wish tested (comma seperated, no spaces).'] = 'Eventuelle specifikke UDP-porte du ønsker testet (kommaer seperated, ingen mellemrum).';

$GLOBALS["lang"]['Any user uploaded images are placed here.'] = 'Enhver bruger uploadet billeder er placeret her.';

$GLOBALS["lang"]['Application'] = 'Anvendelse';

$GLOBALS["lang"]['Application Definitions'] = 'Anvendelsesområde';

$GLOBALS["lang"]['application_id'] = 'AnsøgningsID';

$GLOBALS["lang"]['Application ID'] = 'AnsøgningsID';

$GLOBALS["lang"]['Application Licenses'] = 'Ansøgningstilladelser';

$GLOBALS["lang"]['Application, Operating System or Hardware.'] = 'Anvendelse, operativsystem eller hardware.';

$GLOBALS["lang"]['applications'] = 'Ansøgninger';

$GLOBALS["lang"]['Applications'] = 'Ansøgninger';

$GLOBALS["lang"]['Applications are an Enterprise only feature.'] = 'Programmer er kun en Enterprise-funktion.';

$GLOBALS["lang"]['Applications are being introduced in Open-AudIT 2.2 with a view to expand on the concept as further development is made.'] = 'Ansøgningerne introduceres i Open- Audit 2.2 med henblik på at udvide begrebet, efterhånden som der gøres yderligere udvikling.';

$GLOBALS["lang"]['applied'] = 'Anvendt';

$GLOBALS["lang"]['Applied'] = 'Anvendt';

$GLOBALS["lang"]['Approved'] = 'Godkendt';

$GLOBALS["lang"]['Approved Packages'] = 'Godkendte kolli';

$GLOBALS["lang"]['April'] = 'April';

$GLOBALS["lang"]['Arabic'] = 'Arabisk';

$GLOBALS["lang"]['architecture'] = 'Arkitektur';

$GLOBALS["lang"]['Architecture'] = 'Arkitektur';

$GLOBALS["lang"]['Are you sure you want to delete this input item?'] = 'Er du sikker på at du vil slette dette input element?';

$GLOBALS["lang"]['Are you sure you want to delete this output item?'] = 'Er du sikker på, at du vil slette dette outputpunkt?';

$GLOBALS["lang"]['Are you sure?'] = 'Er du sikker?';

$GLOBALS["lang"]['Are you sure? This will remove all queue entries and prevent the remaining IPs from being discovered.'] = 'Er du sikker? Dette vil fjerne alle køindgange og forhindre de resterende IPs i at blive opdaget.';

$GLOBALS["lang"]['Are you sure? This will reset the queue processing count and could cause load on the server.'] = 'Er du sikker? Dette vil nulstille kø behandling tæller og kunne forårsage belastning på serveren.';

$GLOBALS["lang"]['area'] = 'Område';

$GLOBALS["lang"]['Area'] = 'Område';

$GLOBALS["lang"]['Argentina'] = 'Argentina';

$GLOBALS["lang"]['Armenia'] = 'Armenien';

$GLOBALS["lang"]['arp'] = 'Arp';

$GLOBALS["lang"]['Arp'] = 'Arp';

$GLOBALS["lang"]['Aruba'] = 'Aruba';

$GLOBALS["lang"]['As a reminder of how authorisations works in Open-AudIT, see'] = 'Som en påmindelse om, hvordan godkendelser fungerer i Open- Audit, se';

$GLOBALS["lang"]['As a result, we <strong>must</strong> have the admin$ share available to the discovery credentials user. Please check the target Windows machine provides <i>write</i> access for the discovery credentials user.<br>'] = 'Det er derfor, vi <strong>skal</strong> har admin $andel til rådighed for opdagelsen legitimationsoplysninger bruger. Tjek venligst målet Windows-maskine giver <i>skrive</i> adgang for brugeren af opdagelseslegitimation.<br/>';

$GLOBALS["lang"]['As mentioned above, the developers do not speak all the translation languages offered. This means we cannot review with acuracy, the translated text. We do try for a cursory review. If you see something that is not translated correctly, you can change it yourself. Edit the appropriate language file (as below) and find the text to be changed. Maybe it does not exist and you need to add it. Just change the text, save the file and refresh your we page. No need to restart any services/daemons for it to take effect. You might need to force refresh your browser.'] = 'Som nævnt ovenfor taler udviklerne ikke alle de oversættelsessprog, der tilbydes. Det betyder, at vi ikke kan revidere den oversatte tekst med akkurat. Vi prøver at få en kort gennemgang. Hvis du ser noget, der ikke er oversat korrekt, kan du selv ændre det. Redigér den relevante sprogfil (som nedenfor) og find teksten der skal ændres. Måske eksisterer det ikke, og du er nødt til at tilføje det. Bare ændre teksten, gemme filen og opdatere din vi side. Ingen grund til at genstarte nogen tjenester / dæmninger for det at træde i kraft. Du kan blive nødt til at tvinge opdatere din browser.';

$GLOBALS["lang"]['As per the OpenSCAP benchmarks - <i>Do not attempt to implement any of the settings in this benchmark without first testing them in a non-operational environment. The creators of this benchmark assume no responsibility whatsoever for its use by other parties, and makes no guarantees, expressed or implied, about its quality, reliability, or any other characteristic.</i><br><br>Seriously, do not blindly start <i>fixing</i> issues revealed after running a benchmark without first thoroughly testing in a non-production, identical environment.'] = 'I henhold til OpenSCAP benchmarks - <i>Forsøg ikke at implementere nogen af indstillingerne i dette benchmark uden først at teste dem i et ikke-operationelt miljø. Ophavsmændene til dette benchmark påtager sig intet som helst ansvar for andre parters brug af benchmarket og giver ingen garantier, udtrykt eller implicit, for dets kvalitet, pålidelighed eller andre kendetegn.</i><br/><br/>Seriøst, start ikke blindt <i>fastsættelse</i> problemer afsløret efter at have kørt et benchmark uden først grundig test i en ikke-produktion, identiske miljø.';

$GLOBALS["lang"]['As per the attributes for device environments. Production, Training, et al.'] = 'I henhold til attributterne til enhedsmiljøer. Produktion, uddannelse, et al.';

$GLOBALS["lang"]['As the audit script uses bash, you can use the wildcard of * when you are defining directories and exclusions.'] = 'Som revisionen script bruger bash, kan du bruge wildcard * når du definerer mapper og udelukkelser.';

$GLOBALS["lang"]['As usual, go to menu → Manage → Integrations → Create Integration. As above, if you are running on Linux and you have NMIS on the same server, you do not need to do anything other than click <i>Submit</i>. I cannot make it easier than that.'] = 'Som sædvanlig, gå til menu → Administrer → Integrationer → Opret integration. Som ovenfor, hvis du kører på Linux og du har NMIS på samme server, behøver du ikke at gøre andet end at klikke <i>Indsend</i>. Jeg kan ikke gøre det lettere end det.';

$GLOBALS["lang"]['As we run Discoveries and collect device results we populate the list of networks. The Blessed Subnets feature uses this list of networks to only accept data from devices on those networks.'] = 'Som vi kører opdagelser og indsamle enhedsresultater vi befolke listen over netværk. Funktionen Velsignede Subnets bruger denne liste af netværk til kun at acceptere data fra enheder på disse netværk.';

$GLOBALS["lang"]['As you have Collectors registered, please choose where to execute this discovery.'] = 'Som du har Samlere registreret, bedes du vælge, hvor du skal udføre denne opdagelse.';

$GLOBALS["lang"]['Ask me later'] = 'Spørg mig senere';

$GLOBALS["lang"]['Ask the Community for help or contribute answers for others.'] = 'Spørg Fællesskabet om hjælp eller svar til andre.';

$GLOBALS["lang"]['aspect_ratio'] = 'Orienteringsforhold';

$GLOBALS["lang"]['Aspect Ratio'] = 'Orienteringsforhold';

$GLOBALS["lang"]['Asset ID'] = 'Aktiv- ID';

$GLOBALS["lang"]['asset_ident'] = 'Aktiver Ident';

$GLOBALS["lang"]['Asset Ident'] = 'Aktiver Ident';

$GLOBALS["lang"]['asset_number'] = 'Aktivnummer';

$GLOBALS["lang"]['Asset Number'] = 'Aktivnummer';

$GLOBALS["lang"]['asset_tag'] = 'Aktivmærke';

$GLOBALS["lang"]['Asset Tag'] = 'Aktivmærke';

$GLOBALS["lang"]['Assign Device to Application'] = 'Tildel enhed til program';

$GLOBALS["lang"]['Assign Device to Cluster'] = 'Tildel enhed til klynge';

$GLOBALS["lang"]['Assign Device to Location'] = 'Tildel enhed til placering';

$GLOBALS["lang"]['Assign Device to Organisation'] = 'Tildel enhed til organisation';

$GLOBALS["lang"]['Assign Devices to Location'] = 'Tildel enheder til placering';

$GLOBALS["lang"]['Assign Devices to Organisation'] = 'Tildel enheder til organisation';

$GLOBALS["lang"]['Assign an ISMS manager or team'] = 'Tildel en ISMS-manager eller et ISMS-team';

$GLOBALS["lang"]['Assign an Operator'] = 'Tildel en operatør';

$GLOBALS["lang"]['Assign any audited devices to this Org. Leave blank to leave device in currently assigned Org (or to set default).'] = 'Tildel eventuelle reviderede enheder til denne Org. Efterlad blank for at forlade enheden i øjeblikket tildelt Org (eller for at indstille standard).';

$GLOBALS["lang"]['Assign the Device to a Location'] = 'Tildel enheden til et sted';

$GLOBALS["lang"]['Assign the device to an Org'] = 'Tildel enheden til en Org';

$GLOBALS["lang"]['Assigned To'] = 'Tildelt';

$GLOBALS["lang"]['Assigning Discovered Devices'] = 'Tildeling af uddækkede enheder';

$GLOBALS["lang"]['At present we can use netstat_ports, software and users.'] = 'I øjeblikket kan vi bruge netstat _ ports, software og brugere.';

$GLOBALS["lang"]['attached_device_id'] = 'Vedhæftet enheds- ID';

$GLOBALS["lang"]['Attached Device ID'] = 'Vedhæftet enheds- ID';

$GLOBALS["lang"]['attached_to'] = 'Vedhæftet til';

$GLOBALS["lang"]['Attached To'] = 'Vedhæftet til';

$GLOBALS["lang"]['attachment'] = 'Bilag';

$GLOBALS["lang"]['Attachment'] = 'Bilag';

$GLOBALS["lang"]['attachments'] = 'Bilag';

$GLOBALS["lang"]['Attachments'] = 'Bilag';

$GLOBALS["lang"]['attack_complexity'] = 'Angrebskompleksitet';

$GLOBALS["lang"]['Attack Complexity'] = 'Angrebskompleksitet';

$GLOBALS["lang"]['attack_requirements'] = 'Angrebskrav';

$GLOBALS["lang"]['Attack Requirements'] = 'Angrebskrav';

$GLOBALS["lang"]['attack_vector'] = 'Angrib vektor';

$GLOBALS["lang"]['Attack Vector'] = 'Angrib vektor';

$GLOBALS["lang"]['Attempt to ping the device if we are not auditing localhost.'] = 'Forsøg at pinge enheden, hvis vi ikke reviderer localhost.';

$GLOBALS["lang"]['Attribute'] = 'Attribut';

$GLOBALS["lang"]['attributes'] = 'Attributter';

$GLOBALS["lang"]['Attributes'] = 'Attributter';

$GLOBALS["lang"]['Attributes are stored for Open-AudIT to use for particular fields, at present all fields are based on the devices, locations, orgs and queries tables. The attributes you can edit are associated with the following columns: Class, Environment, Status & Type.'] = 'Attributter er gemt for Open- Audit at bruge til bestemte felter, på nuværende tidspunkt alle felter er baseret på de enheder, steder, orgs og forespørgsler tabeller. De attributter du kan redigere er forbundet med følgende kolonner: Klasse, miljø, status og type.';

$GLOBALS["lang"]['Audit'] = 'Revision';

$GLOBALS["lang"]['Audit AIX'] = 'Audit AIX';

$GLOBALS["lang"]['Audit DNS'] = 'Revision DNS';

$GLOBALS["lang"]['Audit ESXi'] = 'Revision ESXi';

$GLOBALS["lang"]['Audit Linux'] = 'Revision af Linux';

$GLOBALS["lang"]['audit_log'] = 'Revisionslog';

$GLOBALS["lang"]['Audit Log'] = 'Revisionslog';

$GLOBALS["lang"]['Audit Mount Point'] = 'Audit Mount Point';

$GLOBALS["lang"]['Audit My PC'] = 'Revision Min PC';

$GLOBALS["lang"]['Audit Netstat'] = 'Audit Netstat';

$GLOBALS["lang"]['Audit OSX'] = 'Revision OSX';

$GLOBALS["lang"]['Audit Result Input'] = 'Revision Resultatinput';

$GLOBALS["lang"]['Audit Software'] = 'Audit Software';

$GLOBALS["lang"]['Audit Status'] = 'Revisionsstatus';

$GLOBALS["lang"]['Audit Win32 Product'] = 'Revision Produkt';

$GLOBALS["lang"]['Audit Windows'] = 'Revision af Windows';

$GLOBALS["lang"]['Audit the Device'] = 'Revision af enheden';

$GLOBALS["lang"]['Audits'] = 'Revision';

$GLOBALS["lang"]['August'] = 'August';

$GLOBALS["lang"]['Australia'] = 'Australien';

$GLOBALS["lang"]['Austria'] = 'Østrig';

$GLOBALS["lang"]['Auth'] = 'Auth';

$GLOBALS["lang"]['auth'] = 'Auth';

$GLOBALS["lang"]['Auth Methods'] = 'Aut- metoder';

$GLOBALS["lang"]['Authenticate only'] = 'Kun authenticat';

$GLOBALS["lang"]['Authentication Passphrase'] = 'Autentificeringskodefrase';

$GLOBALS["lang"]['Authentication Protocol'] = 'Godkendelsesprotokol';

$GLOBALS["lang"]['authority_key_ident'] = 'Authority Key Ident';

$GLOBALS["lang"]['Authority Key Ident'] = 'Authority Key Ident';

$GLOBALS["lang"]['Auto'] = 'Auto';

$GLOBALS["lang"]['auto_renew'] = 'Auto Renew';

$GLOBALS["lang"]['Auto Renew'] = 'Auto Renew';

$GLOBALS["lang"]['Auto populated by the Open-AudIT Server.'] = 'Auto befolket af Open- Audit Server.';

$GLOBALS["lang"]['AutoRenew'] = 'AutoRenew';

$GLOBALS["lang"]['automatable'] = 'Automatisk';

$GLOBALS["lang"]['Automatable'] = 'Automatisk';

$GLOBALS["lang"]['Automatically populated based on the Collectors OS.'] = 'Automatisk befolket baseret på Collectors OS.';

$GLOBALS["lang"]['availability'] = 'Tilgængelighed';

$GLOBALS["lang"]['Availability'] = 'Tilgængelighed';

$GLOBALS["lang"]['Available Benchmarks'] = 'Tilgængelige Benchmarks';

$GLOBALS["lang"]['Awaiting Analysis'] = 'Afventer analyse';

$GLOBALS["lang"]['Azerbaijan'] = 'Aserbajdsjan';

$GLOBALS["lang"]['Azerbaijani'] = 'Aserbajdsjan';

$GLOBALS["lang"]['Azure Active Directory'] = 'Azure Active Directory';

$GLOBALS["lang"]['BTU Max'] = 'BTU Max';

$GLOBALS["lang"]['BTU Total'] = 'BTU i alt';

$GLOBALS["lang"]['Backbone network'] = 'Backbone netværk';

$GLOBALS["lang"]['Backup'] = 'Backup';

$GLOBALS["lang"]['Bahamas the'] = 'Bahamas';

$GLOBALS["lang"]['Bahrain'] = 'Bahrain';

$GLOBALS["lang"]['Bangladesh'] = 'Bangladesh';

$GLOBALS["lang"]['bank'] = 'Bank';

$GLOBALS["lang"]['Bank'] = 'Bank';

$GLOBALS["lang"]['Banned'] = 'Forbudt';

$GLOBALS["lang"]['Banned Packages'] = 'Forbudte pakker';

$GLOBALS["lang"]['bar_code'] = 'Barkode';

$GLOBALS["lang"]['Bar Code'] = 'Barkode';

$GLOBALS["lang"]['Barbados'] = 'Barbados Formand';

$GLOBALS["lang"]['Base DN'] = 'Base DN';

$GLOBALS["lang"]['base_score'] = 'Base Score';

$GLOBALS["lang"]['Base Score'] = 'Base Score';

$GLOBALS["lang"]['base_severity'] = 'Base Severity';

$GLOBALS["lang"]['Base Severity'] = 'Base Severity';

$GLOBALS["lang"]['based_on'] = 'Baseret på';

$GLOBALS["lang"]['Based On'] = 'Baseret på';

$GLOBALS["lang"]['baseline'] = 'Baseline';

$GLOBALS["lang"]['Baseline'] = 'Baseline';

$GLOBALS["lang"]['baseline_id'] = 'Baseline-id';

$GLOBALS["lang"]['Baseline ID'] = 'Baseline-id';

$GLOBALS["lang"]['baselines'] = 'Basislinjer';

$GLOBALS["lang"]['Baselines'] = 'Basislinjer';

$GLOBALS["lang"]['baselines_policies'] = 'Basispolitikker';

$GLOBALS["lang"]['Baselines Policies'] = 'Basispolitikker';

$GLOBALS["lang"]['Baselines Policy'] = 'Basispolitik';

$GLOBALS["lang"]['Baselines Policy Details'] = 'Oplysninger om basispolitik';

$GLOBALS["lang"]['baselines_results'] = 'Resultater';

$GLOBALS["lang"]['Baselines Results'] = 'Resultater';

$GLOBALS["lang"]['Baselines can compare netstat ports, users and software.'] = 'Baselines kan sammenligne netstat-havne, brugere og software.';

$GLOBALS["lang"]['Baselines enable you to combine audit data with a set of attributes you have previously defined (your baseline) to determine compliance of devices.'] = 'Baselines giver dig mulighed for at kombinere revisionsdata med et sæt attributter, du tidligere har defineret (din basislinje) for at fastslå udstyrets overensstemmelse.';

$GLOBALS["lang"]['Baselines for Device Comparison'] = 'Basislinjer for sammenligning af enhed';

$GLOBALS["lang"]['Basic'] = 'Grundlæggende';

$GLOBALS["lang"]['Basque'] = 'Baskisk';

$GLOBALS["lang"]['Because we try to be as transparent as possible, here is your actual data that we send.'] = 'Fordi vi forsøger at være så gennemsigtige som muligt, her er dine faktiske data, som vi sender.';

$GLOBALS["lang"]['Being able to determine which machines are configured in the same way is a major part of systems administration and auditing – and now reporting on that will be made simple and automated. Once you define your baseline it will automatically run against a set of devices on a predetermined schedule. The output of these executed baselines will be available for web viewing, importing into a third party system or even as a printed report.<br><br>For auditing and management purposes it can be advantageous to baseline individual devices against a fixed, known good device. Baselines enable you to combine audit data with a set of attributes you have previously defined (your baseline) to determine compliance of devices.'] = 'At kunne bestemme, hvilke maskiner der er konfigureret på samme måde, er en stor del af systemadministration og revision - og nu rapportering om, at der vil blive gjort enkel og automatiseret. Når du definerer din baseline vil det automatisk køre mod et sæt af enheder på en forudbestemt tidsplan. Output af disse udførte basislinjer vil være tilgængelige for webvisning, import til en tredjepart system eller endda som en trykt rapport.<br/><br/>Til revisions- og ledelsesformål kan det være fordelagtigt for individuelle enheder i basislinjen mod en fast, kendt god enhed. Baselines giver dig mulighed for at kombinere revisionsdata med et sæt attributter, du tidligere har defineret (din basislinje) for at fastslå udstyrets overensstemmelse.';

$GLOBALS["lang"]['Belarus'] = 'Hviderusland';

$GLOBALS["lang"]['Belgium'] = 'Belgien';

$GLOBALS["lang"]['Belize'] = 'Belize';

$GLOBALS["lang"]['Below is an example of the required csv format.'] = 'Nedenfor er et eksempel på det krævede csv format.';

$GLOBALS["lang"]['Below these lines are where the variables are injected into the script. Following on from our earlier example, the Linux audit script is populated with our directory like so'] = 'Nedenfor disse linjer er hvor variablerne injiceres i scriptet. I forlængelse af vores tidligere eksempel, Linux audit script er befolket med vores mappe som så';

$GLOBALS["lang"]['Below you can see an example Org Chart. If a user has permission on the <i>Finance A</i> Org, they also have permission on the descendant Orgs of Dept A, B & C. This is regardless of the collection requested.<br><br>If the collection requested allows ascendants, then the user will also have access to Company #1 and Default Org items. This is for (as above) queries, groups, et al.<br><br>Note - A user may have access to a query from Default Org, but that is the query itself not the result. The result will only show devices that the user has access to - IE devices from Finance A and Dept A, B & C.'] = 'Nedenfor kan du se et eksempel Org Chart. Hvis en bruger har tilladelse til <i>Finansiering A</i> Org, de har også tilladelse på efterkommeren Orgs af Dept A, B & C. Dette er uanset den ønskede samling.<br/><br/>Hvis den samling, der anmodes om, tillader opstiger, så brugeren vil også have adgang til Company # 1 og Standard Org elementer. Dette er for (som ovenfor) forespørgsler, grupper, et al.<br/><br/>Bemærk - En bruger kan have adgang til en forespørgsel fra Standard Org, men det er selve forespørgslen ikke resultatet. Resultatet vil kun vise enheder, som brugeren har adgang til - IE-enheder fra Finance A og Dept A, B & C.';

$GLOBALS["lang"]['Benchmark'] = 'Benchmark';

$GLOBALS["lang"]['benchmark_id'] = 'Benchmark ID';

$GLOBALS["lang"]['Benchmark ID'] = 'Benchmark ID';

$GLOBALS["lang"]['Benchmark Tasks are created automatically when a benchmark is created.'] = 'Benchmark Opgaver oprettes automatisk, når et benchmark oprettes.';

$GLOBALS["lang"]['Benchmark execution and processing can take a lengthy amount of time, hence the preference to schedule them and not run them ad-hoc.'] = 'Benchmark udførelse og forarbejdning kan tage lang tid, derfor foretrækker at planlægge dem og ikke køre dem ad hoc.';

$GLOBALS["lang"]['benchmarks'] = 'Benchmarks';

$GLOBALS["lang"]['Benchmarks'] = 'Benchmarks';

$GLOBALS["lang"]['benchmarks_exceptions'] = 'Benchmarks Undtagelser';

$GLOBALS["lang"]['Benchmarks Exceptions'] = 'Benchmarks Undtagelser';

$GLOBALS["lang"]['benchmarks_log'] = 'Benchmarks log';

$GLOBALS["lang"]['Benchmarks Log'] = 'Benchmarks log';

$GLOBALS["lang"]['benchmarks_policies'] = 'Benchmarks-politikker';

$GLOBALS["lang"]['Benchmarks Policies'] = 'Benchmarks-politikker';

$GLOBALS["lang"]['benchmarks_result'] = 'Benchmarks resultat';

$GLOBALS["lang"]['Benchmarks Result'] = 'Benchmarks resultat';

$GLOBALS["lang"]['Benchmarks are created by providing an operating system and Version, combined with a specific guide and a list of machines to execute it upon. After creation, benchmarks are executed against the list of machines on a schedule.'] = 'Benchmarks er skabt ved at give et operativsystem og version, kombineret med en specifik guide og en liste over maskiner til at udføre det på. Efter oprettelse, benchmarks udføres mod listen over maskiner på en tidsplan.';

$GLOBALS["lang"]['Benchmarks for Best Practise Configuration'] = 'Benchmarks for bedste træningsindstilling';

$GLOBALS["lang"]['Benchmarks provide security recommendations for your computers, utilising the OpenSCAP tools and policies.</p><p><i>From the OpenSCAP homepage:</i>  In the ever-changing world of computer security where new vulnerabilities are being discovered and patched every day, enforcing security compliance must be a continuous process. It also needs to include a way to make adjustments to policies, as well as periodic assessment and risk monitoring. The OpenSCAP ecosystem provides tools and customizable policies for a quick, cost-effective and flexible implementation of these processes.'] = 'Benchmarks giver sikkerhedsanbefalinger til dine computere, ved hjælp af OpenSCAP værktøjer og politikker.<p><i>Fra OpenSCAP \'s hjemmeside:</i> I den evigt skiftende verden af computersikkerhed, hvor nye sårbarheder bliver opdaget og lappet hver dag, skal håndhævelse af sikkerheden være en kontinuerlig proces. Det skal også omfatte en måde at foretage justeringer på i politikker samt periodisk vurdering og risikoovervågning. OpenSCAP økosystemet giver værktøjer og tilpassede politikker til en hurtig, omkostningseffektiv og fleksibel implementering af disse processer.</p>';

$GLOBALS["lang"]['Benefits'] = 'Ydelser';

$GLOBALS["lang"]['Bengali'] = 'Bengali';

$GLOBALS["lang"]['Benin'] = 'Benin';

$GLOBALS["lang"]['Bermuda'] = 'Bermuda';

$GLOBALS["lang"]['best_practises'] = 'Bedste praksis';

$GLOBALS["lang"]['Best Practises'] = 'Bedste praksis';

$GLOBALS["lang"]['Bhutan'] = 'Bhutanworld. kgm';

$GLOBALS["lang"]['bios'] = 'Bioer';

$GLOBALS["lang"]['Bios'] = 'Bioer';

$GLOBALS["lang"]['body'] = 'Krop';

$GLOBALS["lang"]['Body'] = 'Krop';

$GLOBALS["lang"]['Bolivia'] = 'Bolivia';

$GLOBALS["lang"]['Boolean'] = 'Boolesk';

$GLOBALS["lang"]['Boolean 1/0'] = 'Boolesk 1 / 0';

$GLOBALS["lang"]['Boolean y/n'] = 'Boolesk y / n';

$GLOBALS["lang"]['boot_device'] = 'Boot- enhed';

$GLOBALS["lang"]['Boot Device'] = 'Boot- enhed';

$GLOBALS["lang"]['bootable'] = 'Bootable';

$GLOBALS["lang"]['Bootable'] = 'Bootable';

$GLOBALS["lang"]['Bosnia and Herzegovina'] = 'Bosnien-Hercegovina';

$GLOBALS["lang"]['Both forms of'] = 'Begge former for';

$GLOBALS["lang"]['Botswana'] = 'Botswana';

$GLOBALS["lang"]['Bouvet Island (Bouvetoya)'] = 'Bouvet Island (Bouvetoya)';

$GLOBALS["lang"]['Brazil'] = 'Brasilien';

$GLOBALS["lang"]['Brazilian Portuguese'] = 'Brasiliansk portugisisk';

$GLOBALS["lang"]['Breaking it Down'] = 'Bryder det ned';

$GLOBALS["lang"]['British Indian Ocean Territory (Chagos Archipelago)'] = 'Britisk område i Det Indiske Ocean (Chagos skærgård)';

$GLOBALS["lang"]['British Virgin Islands'] = 'De Britiske Jomfruøer';

$GLOBALS["lang"]['Browse down the tree to Console Root -> Component Services -> Computers -> My Computer<br><br>Right click on <i>My Computer</i> and select properties<br><br>Select the <i>Default Properties</i> tab'] = 'Gennemse ned træet til Konsol Root - > Komponentydelser - > Computere - > Min computer<br/><br/>Højreklik på <i>Min computer</i> og vælg egenskaber<br/><br/>Vælg <i>Standardegenskaber</i> tab';

$GLOBALS["lang"]['Brunei Darussalam'] = 'Brunei Darussalam';

$GLOBALS["lang"]['btu_max'] = 'Btu Max';

$GLOBALS["lang"]['Btu Max'] = 'Btu Max';

$GLOBALS["lang"]['btu_total'] = 'Btu i alt';

$GLOBALS["lang"]['Btu Total'] = 'Btu i alt';

$GLOBALS["lang"]['build_number'] = 'Byg nummer';

$GLOBALS["lang"]['Build Number'] = 'Byg nummer';

$GLOBALS["lang"]['build_number_full'] = 'Byg antal fuld';

$GLOBALS["lang"]['Build Number Full'] = 'Byg antal fuld';

$GLOBALS["lang"]['Building'] = 'Bygning';

$GLOBALS["lang"]['Builds trust with clients and partners'] = 'Opbygger tillid med kunder og partnere';

$GLOBALS["lang"]['Bulgaria'] = 'Bulgarien';

$GLOBALS["lang"]['Bulgarian'] = 'Bulgarsk';

$GLOBALS["lang"]['Bulk Edit'] = 'Bulk editor';

$GLOBALS["lang"]['Bulk Edit Form'] = 'Fyldredigeringsformular';

$GLOBALS["lang"]['Bulk Editing Device Attributes'] = 'Bulk redigeringsenhed attributter';

$GLOBALS["lang"]['Bulk edit selections wont stay selected after clicking next page.'] = 'Bulk redigere valg plejer at blive valgt efter at klikke på næste side.';

$GLOBALS["lang"]['Burkina Faso'] = 'Burkina Faso';

$GLOBALS["lang"]['Burundi'] = 'Burundi';

$GLOBALS["lang"]['business_requirements'] = 'Forretningskrav';

$GLOBALS["lang"]['Business Requirements'] = 'Forretningskrav';

$GLOBALS["lang"]['But I Only Have Windows Client Machines Available!'] = 'Men jeg har kun Windows Client Maskiner til rådighed!';

$GLOBALS["lang"]['But I do not want to have to change the language file every time I update!'] = 'Men jeg ønsker ikke at skulle ændre sprogfilen, hver gang jeg opdaterer!';

$GLOBALS["lang"]['Buy'] = 'Køb';

$GLOBALS["lang"]['Buy More'] = 'Køb mere';

$GLOBALS["lang"]['Buy More Licenses'] = 'Køb flere licenser';

$GLOBALS["lang"]['By'] = 'Af';

$GLOBALS["lang"]['By default we integrate all devices with their nmis_manage attribute set to <i>y</i>. With 4.2.0 we also ship a Rule that says <i>If we discover a device and it has a valid SNMP OID, mark that device as managed by NMIS</i>. Obviously you can disable this if it is not what you want.'] = 'Som standard integrerer vi alle enheder med deres nmis _ managing attribut sat til <i>y</i>. Med 4.2.0 sender vi også en regel, der siger: <i>Hvis vi opdager en enhed og det har en gyldig SNMP OID, markere denne enhed som administreret af NMIS</i>. Du kan selvfølgelig deaktivere dette, hvis det ikke er, hvad du ønsker.';

$GLOBALS["lang"]['By default, we skip certificate validation because customers tend to use self-signed certificates. To enable certificate validation, edit the file below'] = 'Som standard dropper vi certifikatvalidering, fordi kunderne har tendens til at bruge selvsignerede certifikater. For at aktivere certifikatvalidering, redigere filen nedenfor';

$GLOBALS["lang"]['CIDR'] = 'CIDR';

$GLOBALS["lang"]['CIDR Mask'] = 'CIDR Mask';

$GLOBALS["lang"]['cli_config'] = 'CLI Konfig';

$GLOBALS["lang"]['CLI Config'] = 'CLI Konfig';

$GLOBALS["lang"]['CPU'] = 'CPU';

$GLOBALS["lang"]['CPUs'] = 'CPU \'er';

$GLOBALS["lang"]['CSV'] = 'CSV';

$GLOBALS["lang"]['CVE'] = 'CVE';

$GLOBALS["lang"]['CVEs with a status of received, awaiting analysis, undergoing analysis, rejected. These CVEs (mostly) do not contain sufficient information to enable us to generate a correct SQL query.'] = 'CVE \'er med status som modtagne, afventer analyse, gennemgår analyse, afvises. Disse CVE\' er (for det meste) indeholder ikke tilstrækkelige oplysninger til, at vi kan generere en korrekt SQL forespørgsel.';

$GLOBALS["lang"]['Calculated from discovery.'] = 'Beregnet af opdagelsen.';

$GLOBALS["lang"]['Calculated total number of valid IP addresses for this network.'] = 'Beregnet samlet antal gyldige IP-adresser for dette netværk.';

$GLOBALS["lang"]['Calculated upon completion, the time taken to execute this item.'] = 'Beregnet efter afslutningen, den tid det tager at udføre dette element.';

$GLOBALS["lang"]['Calculated when integration is run and contains a JSON representation of the devices in this integration. Each links to <code>devices.id</code>.'] = 'Beregnet ved integration og indeholder en JSON-repræsentation af enhederne i denne integration. Hvert link til <code>devices.id</code>.';

$GLOBALS["lang"]['Calculated when integration is run and contains a JSON representation of the locations in this integration. Each links to <code>locations.id</code>.'] = 'Beregnet ved integration og indeholder en JSON-repræsentation af lokaliteterne i denne integration. Hvert link til <code>locations.id</code>.';

$GLOBALS["lang"]['Calculated when integration is run and contains the number of devices selected from Open-AudIT.'] = 'Beregnet når integration køres og indeholder antallet af enheder valgt fra Open- Audit.';

$GLOBALS["lang"]['Calculated when integration is run and contains the number of devices selected the external system.'] = 'Beregnet når integration køres og indeholder antallet af enheder valgt det eksterne system.';

$GLOBALS["lang"]['Calculated when integration is run and contains the number of devices to be updated in the external system.'] = 'Beregnet ved integration og indeholder antallet af enheder, der skal opdateres i det eksterne system.';

$GLOBALS["lang"]['Calculated when integration is run and contains the number of devices updated in Open-AudIT.'] = 'Beregnet når integration køres og indeholder antallet af enheder opdateret i Open- Audit.';

$GLOBALS["lang"]['Call up a command prompt by clicking Start and searching for <code>command</code>'] = 'Opkald en kommandoprompt ved at klikke på Start og søge efter <code>command</code>';

$GLOBALS["lang"]['Cambodia'] = 'Cambodja';

$GLOBALS["lang"]['Cameroon'] = 'Cameroun';

$GLOBALS["lang"]['Campus Area Network'] = 'Campus Area Network';

$GLOBALS["lang"]['Campus area network'] = 'Netværk af Campus-området';

$GLOBALS["lang"]['Can be  <code>active</code>, <code>passive</code> or blank.'] = 'Kan være <code>active</code>, <code>passive</code> eller blank.';

$GLOBALS["lang"]['Can be <code>application</code>, <code>compute</code>, <code>database</code>, <code>storage</code>, <code>virtualisation</code>, <code>web</code>, <code>other</code> or blank.'] = 'Kan være <code>application</code>, <code>compute</code>, <code>database</code>, <code>storage</code>, <code>virtualisation</code>, <code>web</code>, <code>other</code> eller blank.';

$GLOBALS["lang"]['Can be <code>auto</code>, <code>fixed</code>, <code>other</code> or blank.'] = 'Kan være <code>auto</code>, <code>fixed</code>, <code>other</code> eller blank.';

$GLOBALS["lang"]['Can be <code>high availability</code>, <code>load balancing</code>, <code>performance</code>, <code>storage</code>, <code>other</code> or blank.'] = 'Kan være <code>high availability</code>, <code>load balancing</code>, <code>performance</code>, <code>storage</code>, <code>other</code> eller blank.';

$GLOBALS["lang"]['Can be <code>line</code>, <code>pie</code> or <code>traffic</code>.'] = 'Kan være <code>line</code>, <code>pie</code> eller <code>traffic</code>.';

$GLOBALS["lang"]['Can be <code>user</code> or <code>collector</code>.'] = 'Kan være <code>user</code> eller <code>collector</code>.';

$GLOBALS["lang"]['Can be set by discovery or user.'] = 'Kan indstilles af opdagelse eller bruger.';

$GLOBALS["lang"]['Can be set by discovery or user. Uses the ID from the locations table.'] = 'Kan indstilles af opdagelse eller bruger. Bruger ID fra placeringstabellen.';

$GLOBALS["lang"]['Can the user edit this item.'] = 'Kan brugeren redigere dette punkt.';

$GLOBALS["lang"]['Canada'] = 'Canada';

$GLOBALS["lang"]['Cancel'] = 'Annullér';

$GLOBALS["lang"]['capabilities'] = 'Kapacitet';

$GLOBALS["lang"]['Capabilities'] = 'Kapacitet';

$GLOBALS["lang"]['Capacity'] = 'Kapacitet';

$GLOBALS["lang"]['Cape Verde'] = 'Kap Verde';

$GLOBALS["lang"]['Capitalise'] = 'Kapitalise';

$GLOBALS["lang"]['caption'] = 'Billedtekst';

$GLOBALS["lang"]['Caption'] = 'Billedtekst';

$GLOBALS["lang"]['Catalan'] = 'Katalansk';

$GLOBALS["lang"]['Cayman Islands'] = 'Caymanøerne';

$GLOBALS["lang"]['Cellular Details'] = 'Celledetaljer';

$GLOBALS["lang"]['Central African Republic'] = 'Den Centralafrikanske Republik';

$GLOBALS["lang"]['certificate'] = 'Certifikat';

$GLOBALS["lang"]['Certificate'] = 'Certifikat';

$GLOBALS["lang"]['certificate_file'] = 'Certifikatfil';

$GLOBALS["lang"]['Certificate File'] = 'Certifikatfil';

$GLOBALS["lang"]['certificate_name'] = 'Certifikatets navn';

$GLOBALS["lang"]['Certificate Name'] = 'Certifikatets navn';

$GLOBALS["lang"]['certificates'] = 'Certifikater';

$GLOBALS["lang"]['Certificates'] = 'Certifikater';

$GLOBALS["lang"]['Certification'] = 'Certificering';

$GLOBALS["lang"]['Certification Audit'] = 'Certificeringsrevision';

$GLOBALS["lang"]['Certification Process'] = 'Certificeringsproces';

$GLOBALS["lang"]['Chad'] = 'Tchad';

$GLOBALS["lang"]['Change'] = 'Ændring';

$GLOBALS["lang"]['change_id'] = 'Ændr ID';

$GLOBALS["lang"]['Change ID'] = 'Ændr ID';

$GLOBALS["lang"]['change_log'] = 'Ændr log';

$GLOBALS["lang"]['Change Log'] = 'Ændr log';

$GLOBALS["lang"]['Change Logs'] = 'Ændr log';

$GLOBALS["lang"]['change_type'] = 'Ændr type';

$GLOBALS["lang"]['Change Type'] = 'Ændr type';

$GLOBALS["lang"]['check_minutes'] = 'Kontrolprotokol';

$GLOBALS["lang"]['Check Minutes'] = 'Kontrolprotokol';

$GLOBALS["lang"]['Check for SSH on these ports'] = 'Tjek for SSH på disse porte';

$GLOBALS["lang"]['Check this port for any SSH service.'] = 'Tjek denne port for alle SSH-tjenester.';

$GLOBALS["lang"]['Chile'] = 'Chile';

$GLOBALS["lang"]['China'] = 'Kina';

$GLOBALS["lang"]['Chinese'] = 'Kinesisk';

$GLOBALS["lang"]['Chinese (traditional)'] = 'Kinesisk (traditionel)';

$GLOBALS["lang"]['Choose'] = 'Vælg';

$GLOBALS["lang"]['Choose (select OS first)'] = 'Vælg (vælg OS først)';

$GLOBALS["lang"]['Choose a Device'] = 'Vælg en enhed';

$GLOBALS["lang"]['Choose a Table'] = 'Vælg et bord';

$GLOBALS["lang"]['Choose the type of the task from the first drop down. This will configure the additional fields required depending on the type of task.'] = 'Vælg opgavens type fra første drop down. Dette vil indstille de ekstra felter som kræves afhængig af opgavens type.';

$GLOBALS["lang"]['Christmas Island'] = 'Juleøen';

$GLOBALS["lang"]['cidr'] = 'Cidr';

$GLOBALS["lang"]['Cidr'] = 'Cidr';

$GLOBALS["lang"]['circuit_count'] = 'Cirkuittæller';

$GLOBALS["lang"]['Circuit Count'] = 'Cirkuittæller';

$GLOBALS["lang"]['circuit_status'] = 'Circuit- status';

$GLOBALS["lang"]['Circuit Status'] = 'Circuit- status';

$GLOBALS["lang"]['city'] = 'By';

$GLOBALS["lang"]['City'] = 'By';

$GLOBALS["lang"]['class'] = 'Klasse';

$GLOBALS["lang"]['Class'] = 'Klasse';

$GLOBALS["lang"]['class_text'] = 'Klasse tekst';

$GLOBALS["lang"]['Class Text'] = 'Klasse tekst';

$GLOBALS["lang"]['Click <i>New client secret</i>.'] = 'Klik <i>Ny klient hemmelighed</i>.';

$GLOBALS["lang"]['Click Submit to Execute'] = 'Klik på Indsend for at udføre';

$GLOBALS["lang"]['Click on <i>Properties</i> under the <i>Manage</i> header in the central menu column. Copy the <i>User Access URL</i>. Once copied, paste it into yout text editor. You will need to copy one section of this field.<br><br>Our example field looks like this<br><code>https://launcher.myapps.microsoft.com/api/signin/5d97003c-g24b-346e-9932-77db6470b939?tenantId=cf406343-1a96-4f7c-0cc6-46e86dddabf3</code>.<br><br>The section we need is <code>cf406343-1a96-4f7c-0cc6-46e86dddabf3</code> (the tenant ID). This is used in Open-AudIT as the <i>Tenant</i> field, so paste it in there.'] = 'Klik på <i>Egenskaber</i> under <i>Håndtering</i> header i den centrale menukolonne. Kopiér <i>Brugeradgangs- URL</i>. Når kopieret, indsætte det i yout tekst editor. Du bliver nødt til at kopiere en del af dette felt.<br/><br/>Vores eksempel felt ser sådan her ud<br/><code>https://launcher.myapps.microsoft.com/api/signin/5d97003c-g24b-346e-9932-77db6470b939?tenantId=cf406343-1a96-4f7c-0cc6-46e86dddabf3</code>.<br/><br/>Den sektion vi har brug for er <code>cf406343-1a96-4f7c-0cc6-46e86dddabf3</code> (lejerens ID). Dette bruges i Open- Audit som <i>Tenant</i> Field, så indsæt det derinde.';

$GLOBALS["lang"]['Click on App Registrations to create a new Application, then click New Application Registration. Give it a name (I used Open-AudIT), select Web app / API as the type and provide any URL (the URL is not important) and now click Create.'] = 'Klik på App Registreringer for at oprette et nyt program, og klik derefter på Ny ansøgning Registrering. Giv det et navn (Jeg brugte Open- Audit), vælg Web app / API som typen og giv enhver URL (URL er ikke vigtig) og klik nu på Opret.';

$GLOBALS["lang"]['Click on OK and close the DCOMCNFG window.<br><br>The above changes will require a reboot to take effect.'] = 'Klik på OK og luk DCOMCNFG vinduet.<br/><br/>Ovenstående ændringer vil kræve en genstart til at træde i kraft.';

$GLOBALS["lang"]['Click on the application you just created. The Application ID displayed is the Client ID.<br><br>To create the client secret, click Settings, then Keys. Provide a key name and select an appropriate expiry date, then click Save.<br><br>The value will be populated for you - this is the Client Secret.'] = 'Klik på det program, du lige har oprettet. Programmet ID vises er klienten ID.<br/><br/>For at skabe klienthemmeligheden, skal du klikke på Indstillinger, derefter Keys. Angiv et nøglenavn og vælg en passende udløbsdato, og klik derefter på Gem.<br/><br/>Værdien vil blive befolket for dig - dette er klienthemmeligheden.';

$GLOBALS["lang"]['Click the Delete button to remove the example devices from Open-AudIT.<br>This will remove the below devices from the database. '] = 'Klik på knappen Slet for at fjerne eksempelenhederne fra Open- Audit.<br/>Dette vil fjerne nedenstående enheder fra databasen. ';

$GLOBALS["lang"]['Click the Edit button for <i>Basic SAML Configuration</i>.'] = 'Klik på Redigér knappen for <i>Basisprøve Indstilling</i>.';

$GLOBALS["lang"]['Click the Import button below to populate Open-AudIT with example device data.'] = 'Klik på Importér knappen nedenfor for at folde Open- Audit med eksempel enhedsdata.';

$GLOBALS["lang"]['Click the icon to the right of the field you wish to edit. Change the field and click the green icon to submit.'] = 'Klik på ikonet til højre for det felt, du ønsker at redigere. Skift felt og klik på det grønne ikon for at indsende.';

$GLOBALS["lang"]['Client ID'] = 'Klient- id';

$GLOBALS["lang"]['Client ID and Secret'] = 'Klient- id og hemmelighed';

$GLOBALS["lang"]['client_ident'] = 'Klient- id';

$GLOBALS["lang"]['Client Ident'] = 'Klient- id';

$GLOBALS["lang"]['client_secret'] = 'Klienthemmelighed';

$GLOBALS["lang"]['Client Secret'] = 'Klienthemmelighed';

$GLOBALS["lang"]['client_site_name'] = 'Kundenavn';

$GLOBALS["lang"]['Client Site Name'] = 'Kundenavn';

$GLOBALS["lang"]['Close'] = 'Luk';

$GLOBALS["lang"]['Closed'] = 'Lukket';

$GLOBALS["lang"]['Cloud'] = 'Cloud';

$GLOBALS["lang"]['Cloud Details'] = 'Cloud detaljer';

$GLOBALS["lang"]['Cloud Discovery'] = 'Cloud Discovery';

$GLOBALS["lang"]['Cloud Discovery and Auditing'] = 'Cloud Discovery og Auditing';

$GLOBALS["lang"]['cloud_id'] = 'Cloud-id';

$GLOBALS["lang"]['Cloud ID'] = 'Cloud-id';

$GLOBALS["lang"]['cloud_log'] = 'Sky- log';

$GLOBALS["lang"]['Cloud Log'] = 'Sky- log';

$GLOBALS["lang"]['cloud_name'] = 'Skynavn';

$GLOBALS["lang"]['Cloud Name'] = 'Skynavn';

$GLOBALS["lang"]['Cloud Network'] = 'Cloud-netværk';

$GLOBALS["lang"]['clouds'] = 'Skyer';

$GLOBALS["lang"]['Clouds'] = 'Skyer';

$GLOBALS["lang"]['Clouds are a feature available to Open-AudIT Enterprise licensed customers.'] = 'Skyer er en funktion til rådighed for Open- Audit Enterprise licenserede kunder.';

$GLOBALS["lang"]['cluster'] = 'Klynge';

$GLOBALS["lang"]['Cluster'] = 'Klynge';

$GLOBALS["lang"]['cluster_id'] = 'Klynge- id';

$GLOBALS["lang"]['Cluster ID'] = 'Klynge- id';

$GLOBALS["lang"]['cluster_name'] = 'Klyngenavn';

$GLOBALS["lang"]['Cluster Name'] = 'Klyngenavn';

$GLOBALS["lang"]['cluster_type'] = 'Klyngetype';

$GLOBALS["lang"]['Cluster Type'] = 'Klyngetype';

$GLOBALS["lang"]['clusters'] = 'Klynger';

$GLOBALS["lang"]['Clusters'] = 'Klynger';

$GLOBALS["lang"]['Clusters and Reporting'] = 'Klynger og rapportering';

$GLOBALS["lang"]['Cocos (Keeling) Islands'] = 'Cocos (Keeling) Islands';

$GLOBALS["lang"]['Collection'] = 'Samling';

$GLOBALS["lang"]['Collections'] = 'Samlinger';

$GLOBALS["lang"]['Collector'] = 'Samler';

$GLOBALS["lang"]['Collector (UUID)'] = 'Samler (UUID)';

$GLOBALS["lang"]['Collector / Server is an Enterprise only feature. Enterprise customers receive one Collector license for free. Additional Collector licenses can be purchased as required.'] = 'Collector / Server er en Enterprise eneste funktion. Enterprise-kunder modtager en Collector licens gratis. Yderligere Collector licenser kan købes efter behov.';

$GLOBALS["lang"]['Collector / Server is designed so that you can have a remote or <i>collector</i>  instance of Open-AudIT running on a remote machine. That collector instance might be in another security zone, subnet, cloud hosting instance or at a customer site.  The remote collector is then doing all the discovering and auditing of devices locally avoiding networking and firewalling complexity.  The Collector once it has registered is completely controlled by the <i>server</i>.  This means you only need an HTTP or HTTPS connection from that Collector to the Server.'] = 'Collector / Server er designet, så du kan have en fjernbetjening eller <i>opkøber</i> tilfælde af Open- Audit kører på en ekstern maskine. Denne samler instans kan være i en anden sikkerhedszone, subnet, cloud hosting instans eller på en kunde site. Den eksterne samler gør derefter alle de opdagelser og revision af enheder lokalt undgå netværk og firewalling kompleksitet. Den Collector når det har registreret er helt kontrolleret af <i>server</i>. Dette betyder, at du kun har brug for en HTTP eller HTTPS-forbindelse fra at Collector til serveren.';

$GLOBALS["lang"]['Collector Dashboard'] = 'Collector Dashboard';

$GLOBALS["lang"]['Collector Name'] = 'Opsamlernavn';

$GLOBALS["lang"]['collector_uuid'] = 'Collector Uuid';

$GLOBALS["lang"]['Collector Uuid'] = 'Collector Uuid';

$GLOBALS["lang"]['Collector tasks are automatically setup when the collector feature is enabled. Collector tasks should not be created directly by users. Collector tasks can have their frequency edited after creation. If the Open-AudIT Server has Collectors reporting to it, an additional drop down is provided. You can select this to specify which Collector the task should run on. Only Discovery tasks are supported for Collectors.'] = 'Samleropgaver opsættes automatisk, når samlerfunktionen er aktiveret. Samleropgaver bør ikke oprettes direkte af brugere. Collector opgaver kan have deres frekvens redigeret efter oprettelsen. Hvis Open- Audit Server har Samlere rapportering til det, en ekstra drop down er fastsat. Du kan vælge dette for at angive hvilken Collector opgaven skal køre på. Kun Discovery opgaver understøttes for Collectors.';

$GLOBALS["lang"]['Collectors'] = 'Samlere';

$GLOBALS["lang"]['Collectors can operate in one of two modes: Collector and StandAlone. When in Collector mode, the instance of Open-AudIT is managed by the main server. When in Stand Alone mode, the instance is managed locally and forwards any found devices to the main server.'] = 'Samlere kan operere i en af to tilstande: Samler og Standalone. Når i Collector tilstand, er tilfældet af Open- Audit forvaltes af den vigtigste server. Når du er i Stand Alone-tilstand, håndteres instansen lokalt og videresender alle fundne enheder til hovedserveren.';

$GLOBALS["lang"]['Collectors for Remote Discovery'] = 'Samlere til ekstern søgning';

$GLOBALS["lang"]['Colombia'] = 'Colombia';

$GLOBALS["lang"]['color'] = 'Farve';

$GLOBALS["lang"]['Color'] = 'Farve';

$GLOBALS["lang"]['Column'] = 'Kolonne';

$GLOBALS["lang"]['Columns'] = 'Kolonner';

$GLOBALS["lang"]['command'] = 'Kommando';

$GLOBALS["lang"]['Command'] = 'Kommando';

$GLOBALS["lang"]['command_options'] = 'Kommandoindstillinger';

$GLOBALS["lang"]['Command Options'] = 'Kommandoindstillinger';

$GLOBALS["lang"]['command_output'] = 'Kommandouddata';

$GLOBALS["lang"]['Command Output'] = 'Kommandouddata';

$GLOBALS["lang"]['command_status'] = 'Kommandostatus';

$GLOBALS["lang"]['Command Status'] = 'Kommandostatus';

$GLOBALS["lang"]['command_time_to_execute'] = 'Kommandotid at udføre';

$GLOBALS["lang"]['Command Time To Execute'] = 'Kommandotid at udføre';

$GLOBALS["lang"]['comment'] = 'Kommentar';

$GLOBALS["lang"]['Comment'] = 'Kommentar';

$GLOBALS["lang"]['Comment out the below line (about line 49 or so). Just place a hash # at the start of the line.'] = 'Kommentere nedenstående linje (om linje 49 eller så). Bare sæt en hash # i starten af linjen.';

$GLOBALS["lang"]['comments'] = 'Bemærkninger';

$GLOBALS["lang"]['Comments'] = 'Bemærkninger';

$GLOBALS["lang"]['commercial'] = 'Handelsmæssig';

$GLOBALS["lang"]['Commercial'] = 'Handelsmæssig';

$GLOBALS["lang"]['Commercial Support'] = 'Handelsstøtte';

$GLOBALS["lang"]['common_name'] = 'Almindeligt anvendt navn';

$GLOBALS["lang"]['Common Name'] = 'Almindeligt anvendt navn';

$GLOBALS["lang"]['Commonly referred to as the clientId.'] = 'Almindeligt benævnt klientId.';

$GLOBALS["lang"]['Commonly referred to as the clientSecret.'] = 'Almindeligt omtalt som klienthemmeligheden.';

$GLOBALS["lang"]['Community'] = 'Fællesskabet';

$GLOBALS["lang"]['Community Questions'] = 'Spørgsmål vedrørende Fællesskabet';

$GLOBALS["lang"]['Community String'] = 'Fællesskabsstreng';

$GLOBALS["lang"]['Comoros the'] = 'Comorerne';

$GLOBALS["lang"]['Compact'] = 'Kompakt';

$GLOBALS["lang"]['Company'] = 'Virksomhed';

$GLOBALS["lang"]['Complete these steps.'] = 'Gennemfør disse trin.';

$GLOBALS["lang"]['Complexity of the attack (Low or High).'] = 'Kompleksitet af angrebet (lav eller høj).';

$GLOBALS["lang"]['Component Table'] = 'Komponenttabel';

$GLOBALS["lang"]['Components (All Devices)'] = 'Komponenter (alle enheder)';

$GLOBALS["lang"]['Compute'] = 'Beregn';

$GLOBALS["lang"]['Condition'] = 'Betingelse';

$GLOBALS["lang"]['Conduct a risk assessment'] = 'Udføre en risikovurdering';

$GLOBALS["lang"]['Conduct awareness and training programs'] = 'Udføre bevidstgørelses- og træningsprogrammer';

$GLOBALS["lang"]['Conduct management review meetings'] = 'Møder for revision af gennemførelsen';

$GLOBALS["lang"]['Conduct regular surveillance audits (usually annually)'] = 'Udfør regelmæssige overvågningsrevisioner (normalt årligt)';

$GLOBALS["lang"]['Conducted by an accredited body in two stages'] = 'Leveres af et akkrediteret organ i to faser';

$GLOBALS["lang"]['Config'] = 'Konfig';

$GLOBALS["lang"]['Config Default, currently '] = 'Konfigurationsstandard, aktuelt ';

$GLOBALS["lang"]['config_file'] = 'Konfigurationsfil';

$GLOBALS["lang"]['Config File'] = 'Konfigurationsfil';

$GLOBALS["lang"]['config_manager_error_code'] = 'Fejlkode til indstillingshåndtering';

$GLOBALS["lang"]['Config Manager Error Code'] = 'Fejlkode til indstillingshåndtering';

$GLOBALS["lang"]['Configurable Role Based Access Control (RBAC)'] = 'Konfigurerbar rollebaseret adgangskontrol (RBAC)';

$GLOBALS["lang"]['configuration'] = 'Indstilling';

$GLOBALS["lang"]['Configuration'] = 'Indstilling';

$GLOBALS["lang"]['Configuration Change Detection and Reporting'] = 'Konfigurationsændring detektering og rapportering';

$GLOBALS["lang"]['Configure'] = 'Indstil';

$GLOBALS["lang"]['Configure the agent server-side to perform audits on a schedule'] = 'Indstil agentens serverside for at udføre revisioner efter en tidsplan';

$GLOBALS["lang"]['Congo'] = 'Congo';

$GLOBALS["lang"]['Congo the'] = 'Congo';

$GLOBALS["lang"]['Connected To'] = 'Forbundet til';

$GLOBALS["lang"]['connection'] = 'Forbindelse';

$GLOBALS["lang"]['Connection'] = 'Forbindelse';

$GLOBALS["lang"]['Connection Options'] = 'Tilslutningsindstillinger';

$GLOBALS["lang"]['connection_status'] = 'Forbindelsesstatus';

$GLOBALS["lang"]['Connection Status'] = 'Forbindelsesstatus';

$GLOBALS["lang"]['connections'] = 'Forbindelser';

$GLOBALS["lang"]['Connections'] = 'Forbindelser';

$GLOBALS["lang"]['Consider filtered Ports Open'] = 'Overvej filtreret Havne åbne';

$GLOBALS["lang"]['Consider open|filtered Ports Open'] = 'Overvej åbent; 124; filtreret Havne åbne';

$GLOBALS["lang"]['Consulting, implementation and other services are available through'] = 'Consulting, implementering og andre tjenester er tilgængelige via';

$GLOBALS["lang"]['contact'] = 'Kontakt';

$GLOBALS["lang"]['Contact'] = 'Kontakt';

$GLOBALS["lang"]['contact_name'] = 'Kontaktnavn';

$GLOBALS["lang"]['Contact Name'] = 'Kontaktnavn';

$GLOBALS["lang"]['contained_in'] = 'Indeholdt i';

$GLOBALS["lang"]['Contained In'] = 'Indeholdt i';

$GLOBALS["lang"]['Contains a JSON object details the associated widgets and their positions.'] = 'Indeholder en JSON objekt detaljer de tilhørende widgets og deres positioner.';

$GLOBALS["lang"]['Contains the fields that determine if we should use ssh, snmp and wmi discovery options. A JSON object.'] = 'Indeholder de felter, der afgør, om vi skal bruge ssh, snmp og wmi opdagelse muligheder. Et JSON objekt.';

$GLOBALS["lang"]['Context & Leadership'] = 'Kontekst og ledelse';

$GLOBALS["lang"]['Context Engine ID'] = 'Kontekstmotor- id';

$GLOBALS["lang"]['Context Name'] = 'Kontekstnavn';

$GLOBALS["lang"]['Continuously improve the ISMS'] = 'Kontinuerlig forbedring af ISMS';

$GLOBALS["lang"]['contractual_obligations'] = 'Kontraktmæssige forpligtelser';

$GLOBALS["lang"]['Contractual Obligations'] = 'Kontraktmæssige forpligtelser';

$GLOBALS["lang"]['Cook Islands'] = 'Cookøerne';

$GLOBALS["lang"]['Copy and paste an audit result'] = 'Kopiér og indsæt et revisionsresultat';

$GLOBALS["lang"]['Copy and paste the below to the forums, another instance of Open-AudIT or anywhere else you need to provide this item.'] = 'Kopiér og indsæt nedenstående til fora, et andet tilfælde af Open- Audit eller andre steder du har brug for at give dette punkt.';

$GLOBALS["lang"]['Copy the <i>Application ID</i> field and paste it into the Open-AudIT <i>Client ID</i> field for the new Auth Method.'] = 'Kopiér <i>AnsøgningsID</i> felt og indsætte det i Open- Audit <i>Klient- id</i> felt til den nye Auth-metode.';

$GLOBALS["lang"]['Copy the <i>Client ID</i> and paste it into the Open-AudIT <i>Client ID</i> field.<br>If there is no secret, click <i>Generate new secret</i>, then copy the value and paste it into the Open-AudIT <i>Client Secret</i> field.'] = 'Kopiér <i>Klient- id</i> og indsætte det i Open- Audit <i>Klient- id</i> mark.<br/>Hvis der ikke er nogen hemmelighed, klik <i>Generér ny hemmelighed</i>, derefter kopiere værdien og indsætte den i Open- Audit <i>Klienthemmelighed</i> mark.';

$GLOBALS["lang"]['Copy the value and paste it into the Open-AudIT form for the <i>Client Secret</i> field.'] = 'Kopiér værdien og indsæt den i Open- Audit formularen til <i>Klienthemmelighed</i> mark.';

$GLOBALS["lang"]['core_count'] = 'Kernetælling';

$GLOBALS["lang"]['Core Count'] = 'Kernetælling';

$GLOBALS["lang"]['Cores'] = 'Cores';

$GLOBALS["lang"]['cost_center'] = 'Omkostningscenter';

$GLOBALS["lang"]['Cost Center'] = 'Omkostningscenter';

$GLOBALS["lang"]['cost_code'] = 'Omkostningskode';

$GLOBALS["lang"]['Cost Code'] = 'Omkostningskode';

$GLOBALS["lang"]['Costa Rica'] = 'Costa Rica';

$GLOBALS["lang"]['Cote d Ivoire'] = 'Côte d \'Ivoire';

$GLOBALS["lang"]['count'] = 'Antal';

$GLOBALS["lang"]['Count'] = 'Antal';

$GLOBALS["lang"]['country'] = 'Land';

$GLOBALS["lang"]['Country'] = 'Land';

$GLOBALS["lang"]['country_code'] = 'Landekode';

$GLOBALS["lang"]['Country Code'] = 'Landekode';

$GLOBALS["lang"]['cpu_count'] = 'Cpu-tal';

$GLOBALS["lang"]['Cpu Count'] = 'Cpu-tal';

$GLOBALS["lang"]['Create'] = 'Opret';

$GLOBALS["lang"]['Create Example Devices'] = 'Opret eksempelenheder';

$GLOBALS["lang"]['create_external_count'] = 'Opret ekstern tæller';

$GLOBALS["lang"]['Create External Count'] = 'Opret ekstern tæller';

$GLOBALS["lang"]['create_external_from_internal'] = 'Opret eksternt fra internt';

$GLOBALS["lang"]['Create External From Internal'] = 'Opret eksternt fra internt';

$GLOBALS["lang"]['Create File'] = 'Opret fil';

$GLOBALS["lang"]['Create Geocode'] = 'Opret Geokode';

$GLOBALS["lang"]['create_internal_count'] = 'Opret intern tæller';

$GLOBALS["lang"]['Create Internal Count'] = 'Opret intern tæller';

$GLOBALS["lang"]['create_internal_from_external'] = 'Opret intern fra ekstern';

$GLOBALS["lang"]['Create Internal From External'] = 'Opret intern fra ekstern';

$GLOBALS["lang"]['Create NMIS Devices from Open-AudIT'] = 'Opret NMIS enheder fra Open- Audit';

$GLOBALS["lang"]['Create Open-AudIT Devices from '] = 'Opret Open- Audit Enheder fra ';

$GLOBALS["lang"]['Create Open-AudIT Devices from NMIS'] = 'Opret Open- Audit Enheder fra NMIS';

$GLOBALS["lang"]['Create a Baseline for the example device'] = 'Opret en basislinje for eksempelenheden';

$GLOBALS["lang"]['Create a Discovery'] = 'Opret en opdagelse';

$GLOBALS["lang"]['Create a Statement of Applicability (SoA)'] = 'Opret en erklæring om anvendelighed (SoA)';

$GLOBALS["lang"]['created_by'] = 'Oprettet af';

$GLOBALS["lang"]['Created By'] = 'Oprettet af';

$GLOBALS["lang"]['created_date'] = 'Oprettet dato';

$GLOBALS["lang"]['Created Date'] = 'Oprettet dato';

$GLOBALS["lang"]['Creating'] = 'Oprettelse';

$GLOBALS["lang"]['Creating Credentials'] = 'Oprettelse af valgs prøvelse';

$GLOBALS["lang"]['Creating Device'] = 'Oprettelse af enhed';

$GLOBALS["lang"]['Creating Widgets'] = 'Oprettelse af kontroller';

$GLOBALS["lang"]['Creating a Discovery Scan Options entry'] = 'Oprettelse af en Discovery Indgang til Scan Options';

$GLOBALS["lang"]['Creating a Query'] = 'Oprettelse af en forespørgsel';

$GLOBALS["lang"]['Creating a SQL Statement for Groups'] = 'Oprettelse af en SQL-erklæring for grupper';

$GLOBALS["lang"]['Creating a SQL Statement for Queries'] = 'Oprettelse af en SQL-erklæring for forespørgsler';

$GLOBALS["lang"]['Creating an Integration'] = 'Oprettelse af en integration';

$GLOBALS["lang"]['creator'] = 'Skaber';

$GLOBALS["lang"]['Creator'] = 'Skaber';

$GLOBALS["lang"]['credential'] = 'Kredit';

$GLOBALS["lang"]['Credential'] = 'Kredit';

$GLOBALS["lang"]['Credentials'] = 'Valgret';

$GLOBALS["lang"]['Credentials Client ID'] = 'Valgt klient- id';

$GLOBALS["lang"]['Credentials Subscription ID'] = 'Valgret Abonnement ID';

$GLOBALS["lang"]['Credentials Tenant ID'] = 'Valgret Tenant ID';

$GLOBALS["lang"]['Credentials are stored in the <i>credentials</i> database table. The actual credential information is encrypted in storage. When a Discovery is run, a device has its specific credentials retrieved from the database, decrypted and tested. If these fail the list of credentials is also retrieved, decrypted and then tested against the device starting with credentials known to have worked previously. Device specific credentials are stored at an individual device level in the <i>credential</i> table (note - no <i>s</i> in the table name). SSH keys are tested before SSH username / password. When testing SSH, credentials will also be marked as working with sudo or being root.'] = 'Afstemningen finder sted i <i>mandater</i> database tabel. Den faktiske kreditinformation er krypteret i lager. Når en Discovery køres, en enhed har sine specifikke legitimation hentet fra databasen, dekrypteret og testet. Hvis disse mislykkes listen over legitimationsoplysninger er også hentet, dekrypteret og derefter testet mod enheden, der starter med legitimationsoplysninger kendt for at have arbejdet tidligere. Enhedsspecifikke legitimationsoplysninger lagres på et individuelt enhedsniveau i <i>credential</i> Tabel (note - nej <i>s</i> i tabelnavnet). SSH tasterne testes før SSH brugernavn / adgangskode. Ved test af SSH, legitimation vil også blive markeret som arbejder med sudo eller være rod.';

$GLOBALS["lang"]['Credentials can have one of a few different types - snmp v.1 / v.2, snmp v.3, ssh, ssh key, windows are all implemented. CAVEAT - ssh keys are not implemented for Windows Open-AudIT servers as yet.'] = 'Valgret kan have en af nogle få forskellige typer - snmp v.1 / v.2, snmp v.3, ssh, ssh nøgle, vinduer er alle implementeret. CAVEAT - ssh tasterne er ikke implementeret til Windows Open- Audit servere endnu.';

$GLOBALS["lang"]['Credentials for Amazon AWS used in Cloud Discovery'] = 'Valgt til Amazon AWS bruges i Cloud Discovery';

$GLOBALS["lang"]['Credentials for Microsoft Azure used in Cloud Discovery'] = 'Valg til Microsoft Azure brugt i Cloud Discovery';

$GLOBALS["lang"]['Critical'] = 'Kritisk';

$GLOBALS["lang"]['criticality'] = 'Kritik';

$GLOBALS["lang"]['Criticality'] = 'Kritik';

$GLOBALS["lang"]['Croatia'] = 'Kroatien';

$GLOBALS["lang"]['Cuba'] = 'Cuba';

$GLOBALS["lang"]['current'] = 'Løbende måned';

$GLOBALS["lang"]['Current'] = 'Løbende måned';

$GLOBALS["lang"]['Current Discovery Processes'] = 'Nuværende søgningsprocesser';

$GLOBALS["lang"]['Current date & time is '] = 'Nuværende dato & tid er ';

$GLOBALS["lang"]['Currently Installed'] = 'Installeret';

$GLOBALS["lang"]['Currently supported types are <code>snmp</code>, <code>snmp_v3</code>, <code>ssh</code>, <code>ssh_key</code> or <code>windows</code>.'] = 'I øjeblikket understøttede typer er <code>snmp</code>, <code>snmp_v3</code>, <code>ssh</code>, <code>ssh_key</code> eller <code>windows</code>.';

$GLOBALS["lang"]['Custom Fields'] = 'Brugerdefinerede felter';

$GLOBALS["lang"]['Custom TCP Ports'] = 'Brugerdefinerede TCP-porte';

$GLOBALS["lang"]['Custom TCP Ports. Any specific ports we would liuke scanned in addition to the Top TCP Ports. Comma seperated, no spaces.'] = 'Brugerdefinerede TCP Ports. Enhver specifik havne vi ville liuke scannet ud over Top TCP Ports. Komma seperated, ingen mellemrum.';

$GLOBALS["lang"]['Custom UDP Ports'] = 'Brugerdefineret UDP Havne';

$GLOBALS["lang"]['Custom UDP Ports. Any specific ports we would liuke scanned in addition to the Top UDP Ports. Comma seperated, no spaces.'] = 'Brugerdefinerede UDP-porte. Enhver specifik havne vi ville liuke scannet ud over Top UDP Ports. Komma seperated, ingen mellemrum.';

$GLOBALS["lang"]['Customisable Scanning Options per Discovery'] = 'Brugerdefinerbare Scanning indstillinger pr Opdagelse';

$GLOBALS["lang"]['Cve'] = 'Cve';

$GLOBALS["lang"]['Cyprus'] = 'Cypern';

$GLOBALS["lang"]['Czech'] = 'Tjekkisk';

$GLOBALS["lang"]['Czech Republic'] = 'Tjekkiet';

$GLOBALS["lang"]['DHCP'] = 'DHCP';

$GLOBALS["lang"]['DN Account (optional)'] = 'DN-konto (valgfrit)';

$GLOBALS["lang"]['DN Password (optional)'] = 'DN Password (valgfrit)';

$GLOBALS["lang"]['DNS FQDN'] = 'DNS FQDN';

$GLOBALS["lang"]['DNS Hostname'] = 'DNS hovednavn';

$GLOBALS["lang"]['Danish'] = 'Dansk';

$GLOBALS["lang"]['dashboard_id'] = 'Dashboard- id';

$GLOBALS["lang"]['Dashboard ID'] = 'Dashboard- id';

$GLOBALS["lang"]['Dashboard Widgets'] = 'Dashboard- widgets';

$GLOBALS["lang"]['dashboards'] = 'Dashboards';

$GLOBALS["lang"]['Dashboards'] = 'Dashboards';

$GLOBALS["lang"]['Dashboards and Widgets allow Enterprise licensed customers to create, read, update and delete both of these collections to ensure their homepage is exactly what they need to see. Not only that, but a user is able to set a given dashboard as their own homepage. Everyone does not need to use the same homepage (dashboard), nor the same widgets on that dashboard. Professional licensed customers can choose between two predefined dashboards to set as their own homepage.'] = 'Dashboards og Widgets tillader Enterprise licenserede kunder at oprette, læse, opdatere og slette begge disse samlinger for at sikre deres hjemmeside er præcis, hvad de har brug for at se. Ikke kun det, men en bruger er i stand til at indstille en given dashboard som deres egen hjemmeside. Alle behøver ikke at bruge den samme hjemmeside (dashboard), eller de samme widgets på dette dashboard. Professionelle licenserede kunder kan vælge mellem to foruddefinerede dashboards at indstille som deres egen hjemmeside.';

$GLOBALS["lang"]['Dashboards provide <i>at a glance</i> important visibility for changes occurring on your network as well as providing quick links to device types, manufacturers, and operating systems and so much more.'] = 'Dashboards giver <i>ved et blik</i> vigtige synlighed for ændringer, der sker på dit netværk samt giver hurtige links til enhedstyper, producenter, og operativsystemer og så meget mere.';

$GLOBALS["lang"]['Dashboards use'] = 'Brug af instrumentbrætter';

$GLOBALS["lang"]['Data'] = 'Data';

$GLOBALS["lang"]['Data Export - CSV, XML, JSON'] = 'Data Export - CSV, XML, JSON';

$GLOBALS["lang"]['Data Retention'] = 'Datatilbageholdelse';

$GLOBALS["lang"]['Database'] = 'Database';

$GLOBALS["lang"]['db_action'] = 'Databaseaktion';

$GLOBALS["lang"]['Database Action'] = 'Databaseaktion';

$GLOBALS["lang"]['db_column'] = 'Databasekolonne';

$GLOBALS["lang"]['Database Column'] = 'Databasekolonne';

$GLOBALS["lang"]['Database Definition'] = 'Databasedefinition';

$GLOBALS["lang"]['db_row'] = 'Databaserække';

$GLOBALS["lang"]['Database Row'] = 'Databaserække';

$GLOBALS["lang"]['Database Schema'] = 'Databaseskema';

$GLOBALS["lang"]['Database Server Discovery'] = 'Database- serversøgningComment';

$GLOBALS["lang"]['db_table'] = 'Databasetabel';

$GLOBALS["lang"]['Database Table'] = 'Databasetabel';

$GLOBALS["lang"]['Database Tables'] = 'Databasetabeller';

$GLOBALS["lang"]['dataset_title'] = 'Datasets titel';

$GLOBALS["lang"]['Dataset Title'] = 'Datasets titel';

$GLOBALS["lang"]['date'] = 'Dato';

$GLOBALS["lang"]['Date'] = 'Dato';

$GLOBALS["lang"]['Date D-M-Y'] = 'Dato D-M-Y';

$GLOBALS["lang"]['Date M-D-Y'] = 'Dato M-D-Y';

$GLOBALS["lang"]['Date Now'] = 'Dato nu';

$GLOBALS["lang"]['date_of_manufacture'] = 'Fremstilling på basis af varer henhøren de under pos.';

$GLOBALS["lang"]['Date Of Manufacture'] = 'Fremstilling på basis af varer henhøren de under pos.';

$GLOBALS["lang"]['date_paid'] = 'Dato for betaling';

$GLOBALS["lang"]['Date Paid'] = 'Dato for betaling';

$GLOBALS["lang"]['date_received'] = 'Dato modtaget';

$GLOBALS["lang"]['Date Received'] = 'Dato modtaget';

$GLOBALS["lang"]['Date Y-M-D'] = 'Dato Y- M- D';

$GLOBALS["lang"]['Date and time when the CVE was last updated.'] = 'Dato og tidspunkt, hvor CVE sidst blev opdateret.';

$GLOBALS["lang"]['Date and time when the CVE was published.'] = 'Dato og tidspunkt for offentliggørelsen af CVE.';

$GLOBALS["lang"]['Date when the CVE was published.'] = 'Dato for udgivelsen af CVE.';

$GLOBALS["lang"]['DateTime Now'] = 'DateTime Now';

$GLOBALS["lang"]['DateTime Y-M-D H:M:S'] = 'DateTime Y- M- D H: M: S';

$GLOBALS["lang"]['day_of_month'] = 'Månedag';

$GLOBALS["lang"]['Day Of Month'] = 'Månedag';

$GLOBALS["lang"]['day_of_week'] = 'Ugens dag';

$GLOBALS["lang"]['Day Of Week'] = 'Ugens dag';

$GLOBALS["lang"]['Day of Month'] = 'Månedag';

$GLOBALS["lang"]['dbus_identifier'] = 'Dbus-id';

$GLOBALS["lang"]['Dbus Identifier'] = 'Dbus-id';

$GLOBALS["lang"]['Debug'] = 'Fejl';

$GLOBALS["lang"]['Debugging'] = 'Fejlsøgning';

$GLOBALS["lang"]['Debugging a Script'] = 'Fejlsøgning af et script';

$GLOBALS["lang"]['December'] = 'December';

$GLOBALS["lang"]['Decommission'] = 'Nedlukning';

$GLOBALS["lang"]['Default'] = 'Standard';

$GLOBALS["lang"]['Default Authentication Level - Set to Connect'] = 'Standardgodkendelse Niveau - Sæt til tilslutning';

$GLOBALS["lang"]['Default Impersonation Level - Set to Identify'] = 'Standard imitation Niveau - Sæt til at identificere';

$GLOBALS["lang"]['Default Items'] = 'Standardelementer';

$GLOBALS["lang"]['Default Orgs Groups'] = 'Standard- org- grupper';

$GLOBALS["lang"]['Default Roles Groups'] = 'Standardgrupper';

$GLOBALS["lang"]['Default Value'] = 'Standardværdi';

$GLOBALS["lang"]['Default of 389. Normally 636 used for Active Directory LDAPS.'] = 'Standard 389. Normalt 636 anvendes til Active Directory LDAPS.';

$GLOBALS["lang"]['Default of <code>3</code> for LDAP and Active Directory.'] = 'Standard for <code>3</code> for LDAP og Active Directory.';

$GLOBALS["lang"]['Defaults'] = 'Standard';

$GLOBALS["lang"]['Deferred'] = 'Udskudt';

$GLOBALS["lang"]['Define project scope and objectives'] = 'Definere projektets omfang og mål';

$GLOBALS["lang"]['Define the ISMS scope'] = 'Definér ISMS-anvendelsesområdet';

$GLOBALS["lang"]['Define the context of the organization (internal/external issues)'] = 'Definér organisationens kontekst (interne / eksterne spørgsmål)';

$GLOBALS["lang"]['delay_minutes'] = 'Forsinkelsesprotokollen';

$GLOBALS["lang"]['Delay Minutes'] = 'Forsinkelsesprotokollen';

$GLOBALS["lang"]['Delete'] = 'Slet';

$GLOBALS["lang"]['Delete Example Devices'] = 'Slet eksempel enheder';

$GLOBALS["lang"]['delete_external_from_internal'] = 'Slet eksternt fra internt';

$GLOBALS["lang"]['Delete External From Internal'] = 'Slet eksternt fra internt';

$GLOBALS["lang"]['Delete NMIS Devices if not in Open-AudIT'] = 'Slet NMIS Enheder hvis ikke i Open- Audit';

$GLOBALS["lang"]['Delete a {collection} entry.'] = 'Slet en {collection} indgang.';

$GLOBALS["lang"]['Delete from Application'] = 'Slet fra program';

$GLOBALS["lang"]['Delete from Cluster'] = 'Slet fra klynge';

$GLOBALS["lang"]['Denmark'] = 'Danmark';

$GLOBALS["lang"]['Derived by audit or manually set by user.'] = 'Afledt af revision eller manuelt indstillet af brugeren.';

$GLOBALS["lang"]['Derived by audit.'] = 'Afledt af revision.';

$GLOBALS["lang"]['Derived from <code>rack_devices.device_id</code>.'] = 'Afledte <code>rack_devices.device_id</code>.';

$GLOBALS["lang"]['Derived from <code>rack_devices.rack_id</code>.'] = 'Afledte <code>rack_devices.rack_id</code>.';

$GLOBALS["lang"]['Derived from Collector discovery.'] = 'Afledt af Collector opdagelse.';

$GLOBALS["lang"]['Derived from OS Name.'] = 'Afledt af OS navn.';

$GLOBALS["lang"]['Derived from cloud discovery.'] = 'Afledt af skyopdagelse.';

$GLOBALS["lang"]['Derived from device audits.'] = 'Afledt af udstyrskontrol.';

$GLOBALS["lang"]['Derived from device type and OS.'] = 'Afledt af enhedstype og OS.';

$GLOBALS["lang"]['Derived from discovery.'] = 'Afledt af opdagelsen.';

$GLOBALS["lang"]['Derived from hostname, sysName, dns Hostname and IP in that order.'] = 'Afledt fra værtsnavn, sysName, dns Hostname og IP i den rækkefølge.';

$GLOBALS["lang"]['Derived from the integer severity.'] = 'Afledt af heltalsgraden.';

$GLOBALS["lang"]['description'] = 'Varebeskrivelse';

$GLOBALS["lang"]['Description'] = 'Varebeskrivelse';

$GLOBALS["lang"]['destination'] = 'Bestemmelsessted';

$GLOBALS["lang"]['Destination'] = 'Bestemmelsessted';

$GLOBALS["lang"]['detail'] = 'Detalje';

$GLOBALS["lang"]['Detail'] = 'Detalje';

$GLOBALS["lang"]['Details'] = 'Detaljer';

$GLOBALS["lang"]['Details of who is usually contactable at this site.'] = 'Detaljer om, hvem der normalt kan kontaktes på dette websted.';

$GLOBALS["lang"]['Determine how often you want to run the Baseline check against the database and create a Scheduled Report'] = 'Bestem hvor ofte du ønsker at køre Baseline check mod databasen og oprette en skemalagt rapport';

$GLOBALS["lang"]['Determine risk treatment options'] = 'Bestem risikobehandlingsmuligheder';

$GLOBALS["lang"]['Develop a Risk Treatment Plan'] = 'Udarbejde en risikostyringsplan';

$GLOBALS["lang"]['Develop policies, procedures, and controls'] = 'Udvikle politikker, procedurer og kontroller';

$GLOBALS["lang"]['Develop required ISMS documentation (policies, procedures, etc.)'] = 'Udvikle nødvendig ISMS-dokumentation (politikker, procedurer osv.)';

$GLOBALS["lang"]['device'] = 'Enhed';

$GLOBALS["lang"]['Device'] = 'Enhed';

$GLOBALS["lang"]['Device Audits'] = 'Enhedsrevision';

$GLOBALS["lang"]['Device Component Names'] = 'Enhedskomponentnavne';

$GLOBALS["lang"]['Device ID'] = 'Enhedens id';

$GLOBALS["lang"]['device_id'] = 'Enhedens id';

$GLOBALS["lang"]['device_id_a'] = 'Enhed ID A';

$GLOBALS["lang"]['Device ID A'] = 'Enhed ID A';

$GLOBALS["lang"]['device_id_b'] = 'Enhedens ID B';

$GLOBALS["lang"]['Device ID B'] = 'Enhedens ID B';

$GLOBALS["lang"]['Device Matching Rules'] = 'Enhedsmatchningsregler';

$GLOBALS["lang"]['Device Name'] = 'Enhedsnavn';

$GLOBALS["lang"]['Device Result'] = 'Enhedsresultat';

$GLOBALS["lang"]['Device Results'] = 'Enhedsresultater';

$GLOBALS["lang"]['Device Seed'] = 'Enhedsfrø';

$GLOBALS["lang"]['Device Seed Discoveries are a good option if you know that your network consists of a range of subnets, but you are unsure what they are. Seed the discovery with a local router and watch your network unfold before your eyes.'] = 'Enhedsfrø Opdagelser er en god mulighed, hvis du ved, at dit netværk består af en række subnets, men du er usikker på, hvad de er. Seed opdagelsen med en lokal router og se dit netværk udfolde sig for dine øjne.';

$GLOBALS["lang"]['Device Seed IP'] = 'Enhed Seed IP';

$GLOBALS["lang"]['Device Status'] = 'Enhedsstatus';

$GLOBALS["lang"]['Device Types'] = 'Enhedstyper';

$GLOBALS["lang"]['Device and Software and Hardware Auditing'] = 'Enhed og software og hardware revision';

$GLOBALS["lang"]['Device is in the Subnet'] = 'Enheden er i subnettet';

$GLOBALS["lang"]['Devices'] = 'Enheder';

$GLOBALS["lang"]['devices_assigned_to_location'] = 'Enheder tildelt til placering';

$GLOBALS["lang"]['Devices Assigned To Location'] = 'Enheder tildelt til placering';

$GLOBALS["lang"]['devices_assigned_to_org'] = 'Enheder tildelt Org';

$GLOBALS["lang"]['Devices Assigned To Org'] = 'Enheder tildelt Org';

$GLOBALS["lang"]['Devices Audited'] = 'Enheder revideret';

$GLOBALS["lang"]['Devices Collection'] = 'Enhedssamling';

$GLOBALS["lang"]['Devices Created in '] = 'Enheder oprettet i ';

$GLOBALS["lang"]['Devices Created in Open-AudIT'] = 'Enheder oprettet i Open- Audit';

$GLOBALS["lang"]['devices_default_display_columns'] = 'Enhedsstandardvisningskolonner';

$GLOBALS["lang"]['Devices Default Display Columns'] = 'Enhedsstandardvisningskolonner';

$GLOBALS["lang"]['Devices Found Last 7 Days'] = 'Enheder fundet sidste 7 dage';

$GLOBALS["lang"]['Devices Found Today'] = 'Enheder fundet i dag';

$GLOBALS["lang"]['Devices Found Yesterday'] = 'Enheder fundet i går';

$GLOBALS["lang"]['Devices Missing Information'] = 'Enheder mangler information';

$GLOBALS["lang"]['Devices Not Audited'] = 'Enheder som ikke er kontrolleret';

$GLOBALS["lang"]['Devices Not Seen 30 Days'] = 'Enheder som ikke har set 30 dage';

$GLOBALS["lang"]['Devices Not Seen 7 Days'] = 'Enheder ikke set 7 dage';

$GLOBALS["lang"]['Devices Not Seen 90 Days'] = 'Enheder ikke set 90 dage';

$GLOBALS["lang"]['Devices Older Than X'] = 'Enheder ældre end X';

$GLOBALS["lang"]['Devices Retrieved via API'] = 'Enheder Retrieved via API';

$GLOBALS["lang"]['Devices Selected from '] = 'Enheder valgt fra ';

$GLOBALS["lang"]['Devices Selected from Open-AudIT'] = 'Enheder valgt fra Open- Audit';

$GLOBALS["lang"]['Devices Updated in '] = 'Enheder opdateret i ';

$GLOBALS["lang"]['Devices Updated in Open-AudIT'] = 'Enheder opdateret i Open- Audit';

$GLOBALS["lang"]['Devices are being benchmarked.'] = 'Enhederne bliver benchmarket.';

$GLOBALS["lang"]['Devices are not being benchmarked.'] = 'Enheder bliver ikke benchmarket.';

$GLOBALS["lang"]['Devices could be benchmarked.'] = 'Enhederne kan benchmarkes.';

$GLOBALS["lang"]['Devices from Open-AudIT'] = 'Enheder fra Open- Audit';

$GLOBALS["lang"]['Devices in Running State'] = 'Enheder i køretilstand';

$GLOBALS["lang"]['Devices in Stopped State'] = 'Enheder i stoppet tilstand';

$GLOBALS["lang"]['Devices in this'] = 'Enheder i dette';

$GLOBALS["lang"]['Devices will not be matched if their status is set to <i>deleted</i>. Any other status will allow a match to occur.'] = 'Enheder vil ikke blive matchet, hvis deres status er sat til <i>slettet</i>. Enhver anden status vil tillade en match at forekomme.';

$GLOBALS["lang"]['Devices with Expired Warranties'] = 'Enheder med tidligere garantier';

$GLOBALS["lang"]['Devired from type or OS.'] = 'Afviget fra type eller OS.';

$GLOBALS["lang"]['dhcp_enabled'] = 'Dhcp aktiveret';

$GLOBALS["lang"]['Dhcp Enabled'] = 'Dhcp aktiveret';

$GLOBALS["lang"]['dhcp_lease_expires'] = 'Dhcp Leaseudgange';

$GLOBALS["lang"]['Dhcp Lease Expires'] = 'Dhcp Leaseudgange';

$GLOBALS["lang"]['dhcp_lease_obtained'] = 'Dhcp Lease opnået';

$GLOBALS["lang"]['Dhcp Lease Obtained'] = 'Dhcp Lease opnået';

$GLOBALS["lang"]['dhcp_server'] = 'Dhcp- server';

$GLOBALS["lang"]['Dhcp Server'] = 'Dhcp- server';

$GLOBALS["lang"]['Did the command complete successfully and return expected data.'] = 'Har kommandoen fuldføre med succes og returnere forventede data.';

$GLOBALS["lang"]['direction'] = 'Retning';

$GLOBALS["lang"]['Direction'] = 'Retning';

$GLOBALS["lang"]['directory'] = 'Mappe';

$GLOBALS["lang"]['Directory'] = 'Mappe';

$GLOBALS["lang"]['disabled'] = 'Deaktiveret';

$GLOBALS["lang"]['Disabled'] = 'Deaktiveret';

$GLOBALS["lang"]['discard'] = 'Kassér';

$GLOBALS["lang"]['Discard'] = 'Kassér';

$GLOBALS["lang"]['Discover'] = 'Oplev';

$GLOBALS["lang"]['Discoveries'] = 'opdagelser';

$GLOBALS["lang"]['Discoveries are at the very heart of what Open-AudIT does. How else would you know <i>Whats On Your Network?</i>'] = 'Opdagelser er kernen i, hvad Open- Audit gør. Hvordan ved du ellers det? <i>Hvad er på dit netværk?</i>';

$GLOBALS["lang"]['Discoveries are entries that enable you to run a discovery upon a network in a single click, without entering the details of that network each and every time.'] = 'Opdagelser er poster, der giver dig mulighed for at køre en opdagelse på et netværk i et enkelt klik, uden at indtaste detaljerne i dette netværk hver eneste gang.';

$GLOBALS["lang"]['Discovery'] = 'Opdagelse';

$GLOBALS["lang"]['Discovery Change Logs'] = 'Discovery Change Logs';

$GLOBALS["lang"]['Discovery Data Retention'] = 'Opdagelse af data';

$GLOBALS["lang"]['discovery_id'] = 'Opdagelses- ID';

$GLOBALS["lang"]['Discovery ID'] = 'Opdagelses- ID';

$GLOBALS["lang"]['Discovery Issues'] = 'Opdagelsesspørgsmål';

$GLOBALS["lang"]['discovery_log'] = 'Opdagelseslog';

$GLOBALS["lang"]['Discovery Log'] = 'Opdagelseslog';

$GLOBALS["lang"]['Discovery Match Options'] = 'Indstillinger for søgematch';

$GLOBALS["lang"]['Discovery Name'] = 'Opdagelsesnavn';

$GLOBALS["lang"]['Discovery Options'] = 'Opdagelsesindstillinger';

$GLOBALS["lang"]['Discovery Queue Count'] = 'Opdagelseskeutæller';

$GLOBALS["lang"]['Discovery Queue Limit'] = 'Opdagelseskøens grænse';

$GLOBALS["lang"]['discovery_run'] = 'Opdagelsesrun';

$GLOBALS["lang"]['Discovery Run'] = 'Opdagelsesrun';

$GLOBALS["lang"]['discovery_scan_options'] = 'Indstillinger for søgescanning';

$GLOBALS["lang"]['Discovery Scan Options'] = 'Indstillinger for søgescanning';

$GLOBALS["lang"]['Discovery Scan Options are just another item collection. Enterprise users can create, read, update and delete entries as required. Professional users can read all entries, but not create new entries, update existing entries or delete entries. Community users have no GUI that allows access to this collection.'] = 'Opdagelse Scan Valgmuligheder er bare endnu en samling. Enterprise-brugere kan oprette, læse, opdatere og slette poster efter behov. Professionelle brugere kan læse alle poster, men ikke oprette nye poster, opdatere eksisterende poster eller slette poster. Fællesskabets brugere har ingen GUI, der giver adgang til denne samling.';

$GLOBALS["lang"]['Discovery Scan Types'] = 'Opdagelsesscantyper';

$GLOBALS["lang"]['Discovery Support'] = 'Opdagelsesunderstøttelse';

$GLOBALS["lang"]['Discovery has stopped working'] = 'Opdagelsen er ophørt med at virke';

$GLOBALS["lang"]['disk'] = 'Disk';

$GLOBALS["lang"]['Disk'] = 'Disk';

$GLOBALS["lang"]['display_version'] = 'Vis version';

$GLOBALS["lang"]['Display Version'] = 'Vis version';

$GLOBALS["lang"]['Display in Menu'] = 'Vis i menuen';

$GLOBALS["lang"]['Displays a standard web form for submission to POST /{collection}.'] = 'Viser en standard webformular til indsendelse til POST / {collection}.';

$GLOBALS["lang"]['Displays a standard web form for submission to POST /{collection}/import.'] = 'Viser en standard webformular til indsendelse til POST / {collection} / import.';

$GLOBALS["lang"]['district'] = 'Område';

$GLOBALS["lang"]['District'] = 'Område';

$GLOBALS["lang"]['Djibouti'] = 'Djibouti';

$GLOBALS["lang"]['dns'] = 'Dns';

$GLOBALS["lang"]['Dns'] = 'Dns';

$GLOBALS["lang"]['dns_domain'] = 'Dns domæne';

$GLOBALS["lang"]['Dns Domain'] = 'Dns domæne';

$GLOBALS["lang"]['dns_domain_reg_enabled'] = 'Dns domæne Reg aktiveret';

$GLOBALS["lang"]['Dns Domain Reg Enabled'] = 'Dns domæne Reg aktiveret';

$GLOBALS["lang"]['dns_fqdn'] = 'Dns Fqdn';

$GLOBALS["lang"]['Dns Fqdn'] = 'Dns Fqdn';

$GLOBALS["lang"]['dns_host_name'] = 'Dns værtsnavn';

$GLOBALS["lang"]['Dns Host Name'] = 'Dns værtsnavn';

$GLOBALS["lang"]['dns_hostname'] = 'Dns hovednavn';

$GLOBALS["lang"]['Dns Hostname'] = 'Dns hovednavn';

$GLOBALS["lang"]['dns_server'] = 'Dns Server';

$GLOBALS["lang"]['Dns Server'] = 'Dns Server';

$GLOBALS["lang"]['Do not forget about the Open-AudIT wiki for all your documentation.'] = 'Glem ikke Open- Audit wiki for al din dokumentation.';

$GLOBALS["lang"]['Do not forget there is a mountain of documentation on the wiki'] = 'Glem ikke, at der er et bjerg af dokumentation på wikien';

$GLOBALS["lang"]['Do not scan these TCP ports.'] = 'Scan ikke disse TCP-porte.';

$GLOBALS["lang"]['Do not scan these UDP ports.'] = 'Scan ikke disse UDP-porte.';

$GLOBALS["lang"]['Do not show me again'] = 'Vis mig ikke igen';

$GLOBALS["lang"]['Do you have a perfect example of this configuration? Perhaps a device located in a lab environment or a workstation you use to clone workstation VMs from.'] = 'Har du et perfekt eksempel på denne konfiguration? Måske en enhed placeret i et laboratorium miljø eller en arbejdsstation, du bruger til at klone arbejdsstation VM \'er fra.';

$GLOBALS["lang"]['Do you want to use secure transport (LDAPS) or regular unencrypted LDAP.'] = 'Ønsker du at bruge sikker transport (LDAPS) eller regelmæssig ukrypteret LDAP.';

$GLOBALS["lang"]['Do you wish to see the standard sidebar on the left.'] = 'Ønsker du at se standard sidebjælken til venstre.';

$GLOBALS["lang"]['documentation'] = 'Dokumentation';

$GLOBALS["lang"]['Documentation'] = 'Dokumentation';

$GLOBALS["lang"]['Documentation about a particular collection.'] = 'Dokumentation om en bestemt samling.';

$GLOBALS["lang"]['Does Not Equal'] = 'Er ikke lige';

$GLOBALS["lang"]['Does the license apply to child Orgs.'] = 'Gælder kørekortet for børneorger.';

$GLOBALS["lang"]['domain'] = 'Domæne';

$GLOBALS["lang"]['Domain'] = 'Domæne';

$GLOBALS["lang"]['domain_controller_address'] = 'Domænekontroller- adresse';

$GLOBALS["lang"]['Domain Controller Address'] = 'Domænekontroller- adresse';

$GLOBALS["lang"]['domain_controller_name'] = 'Domænekontroller Navn';

$GLOBALS["lang"]['Domain Controller Name'] = 'Domænekontroller Navn';

$GLOBALS["lang"]['domain_role'] = 'Domæne rolle';

$GLOBALS["lang"]['Domain Role'] = 'Domæne rolle';

$GLOBALS["lang"]['domain_short'] = 'Domæne kort';

$GLOBALS["lang"]['Domain Short'] = 'Domæne kort';

$GLOBALS["lang"]['Dominica'] = 'Dominica';

$GLOBALS["lang"]['Dominican Republic'] = 'Den Dominikanske Republik';

$GLOBALS["lang"]['Dont hold my hand, I know what I am doing. No filter and the ability to join custom tables.'] = 'Hold ikke min hånd, jeg ved, hvad jeg gør. Intet filter og evnen til at deltage i brugerdefinerede borde.';

$GLOBALS["lang"]['Download'] = 'Download';

$GLOBALS["lang"]['Download a File'] = 'Download en fil';

$GLOBALS["lang"]['Download a file from URL'] = 'Hent en fil fra URL';

$GLOBALS["lang"]['Download the test_windows_client.vbs script directly'] = 'Hent scriptet test _ windows _ client.vbs direkte';

$GLOBALS["lang"]['Download your updated version from'] = 'Download din opdaterede version fra';

$GLOBALS["lang"]['driver'] = 'Driver';

$GLOBALS["lang"]['Driver'] = 'Driver';

$GLOBALS["lang"]['duplex'] = 'Duplex';

$GLOBALS["lang"]['Duplex'] = 'Duplex';

$GLOBALS["lang"]['Duplicate Devices / Missing Devices'] = 'Duplikér enheder / manglende enheder';

$GLOBALS["lang"]['duration'] = 'Varighed';

$GLOBALS["lang"]['Duration'] = 'Varighed';

$GLOBALS["lang"]['Dutch'] = 'Hollandsk';

$GLOBALS["lang"]['ESXi'] = 'ESXi';

$GLOBALS["lang"]['EULA'] = 'EULA';

$GLOBALS["lang"]['Each IP is scanned with the discovery configured options (see Discovery Scan Options and Discovery - Community vs Professional vs Enterprise on the wiki). In general, Nmap will test for ports 22 (ssh), 135 (wmi), 62078 (iPhone) and UDP 161 (snmp). If 22, 135 or 161 respond the credential list is retrieved and each credential tested in turn. The first working credentials are used for further queries directly from the device. Note - if a device has previously been discovered and has working credentials, those credentials are tested first. Only if those fail are the other credentials then attempted.'] = 'Hver IP er scannet med den opdagelse konfigurerede muligheder (se Discovery Scan Options og Discovery - Community vs Professional vs Enterprise på wiki). Generelt vil Nmap teste for porte 22 (ssh), 135 (wmi), 62078 (iPhone) og UDP 161 (snmp). Hvis 22, 135 eller 161 svarer, hentes kreditlisten, og hver kreditværdi testes igen. De første arbejdsoplysninger bruges til yderligere forespørgsler direkte fra enheden. Bemærk - hvis en enhed tidligere er blevet opdaget og har fungerende legitimationsoplysninger, disse legitimationsoplysninger testes først. Kun hvis disse mislykkes er de andre akkreditiver derefter forsøgt.';

$GLOBALS["lang"]['Each time a device is discovered or an audit result is processed, all rules are retrieved from the database and run against the attributes of the specific device. Rules run against one device at a time - there is no facility to say <i>Run the rules against all devices<i> or <i>Run the rules against these devices<i>. An individual rule will test one or more attributes of the device and if they match the rule, the result will be applied. Several attributes can be tested. Several attributes can be set. Think of this as an If This, Then That system for Open-AudIT.'] = 'Hver gang en enhed opdages eller et revisionsresultat behandles, hentes alle regler fra databasen og køres mod attributterne til den specifikke enhed. Regler kører mod en enhed ad gangen - der er ingen mulighed for at sige <i>Kør reglerne mod alle enheder<i> eller <i>Kør reglerne mod disse enheder<i>. En individuel regel vil teste en eller flere egenskaber ved anordningen, og hvis de svarer til reglen, vil resultatet blive anvendt. Flere egenskaber kan testes. Flere attributter kan indstilles. Tænk på dette som en hvis dette, så det system til Open- Audit.</i></i></i></i>';

$GLOBALS["lang"]['Easily run a discovery upon a network in a single click, without entering the details of that network each and every time.'] = 'Nemt køre en opdagelse på et netværk i et enkelt klik, uden at indtaste detaljerne i dette netværk hver eneste gang.';

$GLOBALS["lang"]['Ecuador'] = 'Ecuador';

$GLOBALS["lang"]['Edit'] = 'Redigér';

$GLOBALS["lang"]['edit_log'] = 'Redigér log';

$GLOBALS["lang"]['Edit Log'] = 'Redigér log';

$GLOBALS["lang"]['editable'] = 'Editable';

$GLOBALS["lang"]['Editable'] = 'Editable';

$GLOBALS["lang"]['edited_by'] = 'Redigeret af';

$GLOBALS["lang"]['Edited By'] = 'Redigeret af';

$GLOBALS["lang"]['edited_date'] = 'Editeret dato';

$GLOBALS["lang"]['Edited Date'] = 'Editeret dato';

$GLOBALS["lang"]['edition'] = 'Udgave';

$GLOBALS["lang"]['Edition'] = 'Udgave';

$GLOBALS["lang"]['Egypt'] = 'Egypten';

$GLOBALS["lang"]['Either Amazon, Google or Microsoft.'] = 'Enten Amazon, Google eller Microsoft.';

$GLOBALS["lang"]['Either none or present.

<strong>None</strong> - The successful attack does not depend on the deployment and execution conditions of the vulnerable system. The attacker can expect to be able to reach the vulnerability and execute the exploit under all or most instances of the vulnerability.

<strong>Present</strong> - The successful attack depends on the presence of specific deployment and execution conditions of the vulnerable system that enable the attack. These include:

A race condition must be won to successfully exploit the vulnerability. The successfulness of the attack is conditioned on execution conditions that are not under full control of the attacker. The attack may need to be launched multiple times against a single target before being successful.

Network injection. The attacker must inject themselves into the logical network path between the target and the resource requested by the victim (e.g. vulnerabilities requiring an on-path attacker).'] = 'Enten ingen eller til stede.

<strong>Ingen</strong> - Det vellykkede angreb afhænger ikke af det sårbare systems indsættelse og udførelse. Angriberen kan forvente at være i stand til at nå sårbarhed og udføre udnyttelse under alle eller de fleste tilfælde af sårbarhed.

<strong>Nuværende</strong> - Det vellykkede angreb afhænger af tilstedeværelsen af specifikke deployerings- og udførelsesbetingelser for det sårbare system, der muliggør angrebet. Disse omfatter:

En race betingelse skal vindes for at udnytte sårbarheden. Angrebets succes er betinget af henrettelsesbetingelser, der ikke er under fuld kontrol af angriberen. Angrebet kan være nødvendigt at blive lanceret flere gange mod et enkelt mål, før det lykkes.

Netværksinjektion. Angriberen skal injicere sig selv ind i den logiske netværkssti mellem målet og den ressource, ofret ønsker (f.eks. sårbarheder, der kræver en on- path-angriber).';

$GLOBALS["lang"]['El Salvador'] = 'El Salvador';

$GLOBALS["lang"]['email'] = 'E- mail';

$GLOBALS["lang"]['Email'] = 'E- mail';

$GLOBALS["lang"]['email_address'] = 'E- mail- adresse';

$GLOBALS["lang"]['Email Address'] = 'E- mail- adresse';

$GLOBALS["lang"]['Email Configuration'] = 'Indstilling af e- mail';

$GLOBALS["lang"]['Email to send test to'] = 'E-mail til at sende test til';

$GLOBALS["lang"]['Enable'] = 'Aktivér';

$GLOBALS["lang"]['Enable Distributed COM on this computer - Option is checked'] = 'Aktivér distribueret COM på denne computer - Tilvalg er markeret';

$GLOBALS["lang"]['enabled'] = 'Aktiveret';

$GLOBALS["lang"]['Enabled'] = 'Aktiveret';

$GLOBALS["lang"]['Enabling the Feature Under Windows'] = 'Aktivering af funktionen under Windows';

$GLOBALS["lang"]['encryption'] = 'Kryptering';

$GLOBALS["lang"]['Encryption'] = 'Kryptering';

$GLOBALS["lang"]['encryption_method'] = 'Krypteringsmetode';

$GLOBALS["lang"]['Encryption Method'] = 'Krypteringsmetode';

$GLOBALS["lang"]['encryption_status'] = 'Krypteringsstatus';

$GLOBALS["lang"]['Encryption Status'] = 'Krypteringsstatus';

$GLOBALS["lang"]['end_date'] = 'Slutdato';

$GLOBALS["lang"]['End Date'] = 'Slutdato';

$GLOBALS["lang"]['End OF Life Product ID'] = 'Slutprodukt-ID';

$GLOBALS["lang"]['end_of_life'] = 'Ende af liv';

$GLOBALS["lang"]['End Of Life'] = 'Ende af liv';

$GLOBALS["lang"]['end_of_production'] = 'Slutproduktion';

$GLOBALS["lang"]['End Of Production'] = 'Slutproduktion';

$GLOBALS["lang"]['end_of_service'] = 'Slut på tjeneste';

$GLOBALS["lang"]['End Of Service'] = 'Slut på tjeneste';

$GLOBALS["lang"]['end_of_service_life'] = 'Slut på tjenestetid';

$GLOBALS["lang"]['End Of Service Life'] = 'Slut på tjenestetid';

$GLOBALS["lang"]['Endpoint'] = 'Slutpunkt';

$GLOBALS["lang"]['English'] = 'Engelsk';

$GLOBALS["lang"]['Enhances regulatory compliance'] = 'Forbedrer overholdelse af lovgivningen';

$GLOBALS["lang"]['Enrichment is complete. The CVE has full metadata and is considered stable.'] = 'Berigelse er fuldendt. CVE har fuld metadata og betragtes som stabil.';

$GLOBALS["lang"]['Ensure documentation is controlled and accessible'] = 'Sørg for, at dokumentationen er kontrolleret og tilgængelig';

$GLOBALS["lang"]['enterprise'] = 'Erhvervspolitik';

$GLOBALS["lang"]['Enterprise'] = 'Erhvervspolitik';

$GLOBALS["lang"]['Enterprise Private Network'] = 'Virksomhedens private netværk';

$GLOBALS["lang"]['Enterprise private network'] = 'Private virksomhedsnetværk';

$GLOBALS["lang"]['Entitlement Type'] = 'Rettighedstype';

$GLOBALS["lang"]['Entra'] = 'Entra';

$GLOBALS["lang"]['environment'] = 'Miljø';

$GLOBALS["lang"]['Environment'] = 'Miljø';

$GLOBALS["lang"]['Equal To'] = 'Lige til';

$GLOBALS["lang"]['Equal To or Greater Than'] = 'Lige til eller større end';

$GLOBALS["lang"]['Equal To or Less Than'] = 'Lige til eller mindre end';

$GLOBALS["lang"]['Equals'] = 'Ækvivalenter';

$GLOBALS["lang"]['Equatorial Guinea'] = 'Ækvatorialguinea';

$GLOBALS["lang"]['Eritrea'] = 'Eritrea';

$GLOBALS["lang"]['Error'] = 'Fejl';

$GLOBALS["lang"]['Error Code'] = 'Fejlkode';

$GLOBALS["lang"]['Esperanto'] = 'Esperanto';

$GLOBALS["lang"]['Establish a project plan and timeline'] = 'Etablere en projektplan og en tidsplan';

$GLOBALS["lang"]['Establish an information security policy'] = 'Etablere en informationssikkerhedspolitik';

$GLOBALS["lang"]['Established'] = 'Oprettet';

$GLOBALS["lang"]['Estonia'] = 'Estland';

$GLOBALS["lang"]['Estonian'] = 'Estisk';

$GLOBALS["lang"]['Ethernet MAC'] = 'Ethernet MAC';

$GLOBALS["lang"]['ethernet_mac'] = 'Ethernet Mac';

$GLOBALS["lang"]['Ethernet Mac'] = 'Ethernet Mac';

$GLOBALS["lang"]['Ethiopia'] = 'Etiopien';

$GLOBALS["lang"]['Evaluate the ISMS internally'] = 'Evaluering af ISMS internt';

$GLOBALS["lang"]['Every'] = 'Hver';

$GLOBALS["lang"]['Every Day'] = 'Hver dag';

$GLOBALS["lang"]['Example'] = 'Eksempel';

$GLOBALS["lang"]['Example Devices'] = 'Eksempel på enheder';

$GLOBALS["lang"]['Example Org Chart with Access'] = 'Eksempel Org Chart med adgang';

$GLOBALS["lang"]['Example text from'] = 'Eksempel på tekst fra';

$GLOBALS["lang"]['Examples'] = 'Eksempler';

$GLOBALS["lang"]['Exceptions'] = 'Undtagelser';

$GLOBALS["lang"]['exclude'] = 'Udeluk';

$GLOBALS["lang"]['Exclude'] = 'Udeluk';

$GLOBALS["lang"]['exclude_ip'] = 'Ekskl. IP';

$GLOBALS["lang"]['Exclude IP'] = 'Ekskl. IP';

$GLOBALS["lang"]['Exclude IP Addresses'] = 'Ekskl. IP-adresser';

$GLOBALS["lang"]['Exclude IP Addresses (individual IP - 192.168.1.20, ranges - 192.168.1.30-40 or subnets - 192.168.1.100/30) listed from being scanned. Comma seperated, no spaces.'] = 'Ekskl. IP-adresser (individuel IP - 192.168.1.20, intervaller - 192.168.1.30- 40 eller undernet - 192.168.1.100 / 30), der er anført fra scanningen. Komma seperated, ingen mellemrum.';

$GLOBALS["lang"]['Exclude TCP Ports'] = 'Ekskl. TCP-porte';

$GLOBALS["lang"]['exclude_tcp_ports'] = 'Ekskl. Tcp Ports';

$GLOBALS["lang"]['Exclude Tcp Ports'] = 'Ekskl. Tcp Ports';

$GLOBALS["lang"]['Exclude UDP Ports'] = 'Ekskl. UDP-porte';

$GLOBALS["lang"]['exclude_udp_ports'] = 'Ekskl. Udp- porte';

$GLOBALS["lang"]['Exclude Udp Ports'] = 'Ekskl. Udp- porte';

$GLOBALS["lang"]['Exclude any ports listed from being scanned. Comma seperated, no spaces.'] = 'Ekskl alle havne, der er angivet, fra at blive scannet. Komma seperated, ingen mellemrum.';

$GLOBALS["lang"]['Exclude these IP addresses from being Nmap scanned.'] = 'Udeluk disse IP-adresser fra at blive Nmap scannet.';

$GLOBALS["lang"]['Excluded'] = 'Ekskluderet';

$GLOBALS["lang"]['exclusion_reasons'] = 'Udelukkelsesgrunde';

$GLOBALS["lang"]['Exclusion Reasons'] = 'Udelukkelsesgrunde';

$GLOBALS["lang"]['executable'] = 'Kan udføres';

$GLOBALS["lang"]['Executable'] = 'Kan udføres';

$GLOBALS["lang"]['executable_id'] = 'Eksekverbart ID';

$GLOBALS["lang"]['Executable ID'] = 'Eksekverbart ID';

$GLOBALS["lang"]['executables'] = 'Eksekverbare';

$GLOBALS["lang"]['Executables'] = 'Eksekverbare';

$GLOBALS["lang"]['Execute'] = 'Kør';

$GLOBALS["lang"]['Executing'] = 'Gennemførelse';

$GLOBALS["lang"]['exemption_reason'] = 'Fritagelsesgrund';

$GLOBALS["lang"]['Exemption Reason'] = 'Fritagelsesgrund';

$GLOBALS["lang"]['Existing Building'] = 'Eksisterende bygning';

$GLOBALS["lang"]['Existing Floor'] = 'Eksisterende gulv';

$GLOBALS["lang"]['Existing Room'] = 'Eksisterende rum';

$GLOBALS["lang"]['Existing Row'] = 'Eksisterende række';

$GLOBALS["lang"]['expire_date'] = 'Udløbsdato';

$GLOBALS["lang"]['Expire Date'] = 'Udløbsdato';

$GLOBALS["lang"]['expire_minutes'] = 'Udløb af protokollen';

$GLOBALS["lang"]['Expire Minutes'] = 'Udløb af protokollen';

$GLOBALS["lang"]['expires'] = 'Udløb';

$GLOBALS["lang"]['Expires'] = 'Udløb';

$GLOBALS["lang"]['expiry_date'] = 'Udløbsdato';

$GLOBALS["lang"]['Expiry Date'] = 'Udløbsdato';

$GLOBALS["lang"]['exploit_maturity'] = 'Udnyttelsesløbetid';

$GLOBALS["lang"]['Exploit Maturity'] = 'Udnyttelsesløbetid';

$GLOBALS["lang"]['Export'] = 'Eksport';

$GLOBALS["lang"]['Export by Device'] = 'Eksportér af enhed';

$GLOBALS["lang"]['Export by Policy'] = 'Eksport efter politik';

$GLOBALS["lang"]['Export data to'] = 'Eksportér data til';

$GLOBALS["lang"]['Exporting a Device'] = 'Eksporterer en enhed';

$GLOBALS["lang"]['expose'] = 'Udsæt';

$GLOBALS["lang"]['Expose'] = 'Udsæt';

$GLOBALS["lang"]['External'] = 'Eksterne';

$GLOBALS["lang"]['External Field Name'] = 'Eksternt feltnavn';

$GLOBALS["lang"]['External Field Type'] = 'Ekstern felttype';

$GLOBALS["lang"]['External Field Types'] = 'Eksterne felttyper';

$GLOBALS["lang"]['external_ident'] = 'Ekstern Ident';

$GLOBALS["lang"]['External Ident'] = 'Ekstern Ident';

$GLOBALS["lang"]['external_link'] = 'Ekstern forbindelse';

$GLOBALS["lang"]['External Link'] = 'Ekstern forbindelse';

$GLOBALS["lang"]['extra_columns'] = 'Ekstra kolonner';

$GLOBALS["lang"]['Extra Columns'] = 'Ekstra kolonner';

$GLOBALS["lang"]['Extra and Time based Reporting'] = 'Ekstra og tidsbaseret rapportering';

$GLOBALS["lang"]['Extra and more verbose logging is generated for troubleshooting.'] = 'Ekstra og mere verbose logning genereres til fejlfinding.';

$GLOBALS["lang"]['FAQ'] = 'FAQ';

$GLOBALS["lang"]['FQDN'] = 'FQDN';

$GLOBALS["lang"]['FW Revision'] = 'FW Revision';

$GLOBALS["lang"]['Fail'] = 'Fejl';

$GLOBALS["lang"]['Failed'] = 'Mislykkedes';

$GLOBALS["lang"]['Failed Severity'] = 'Mislykkedes severity';

$GLOBALS["lang"]['Falkland Islands (Malvinas)'] = 'Falklandsøerne (Malvinas)';

$GLOBALS["lang"]['Family'] = 'Familie';

$GLOBALS["lang"]['Faroe Islands'] = 'Færøerne';

$GLOBALS["lang"]['Features'] = 'Funktioner';

$GLOBALS["lang"]['February'] = 'Februar';

$GLOBALS["lang"]['field'] = 'Felt';

$GLOBALS["lang"]['Field'] = 'Felt';

$GLOBALS["lang"]['field_id'] = 'Felt- ID';

$GLOBALS["lang"]['Field ID'] = 'Felt- ID';

$GLOBALS["lang"]['Field Name'] = 'Feltnavn';

$GLOBALS["lang"]['Field Type'] = 'Felttype';

$GLOBALS["lang"]['Fields'] = 'Felter';

$GLOBALS["lang"]['fields'] = 'Felter';

$GLOBALS["lang"]['Fields attributes are'] = 'Felterne attributter er';

$GLOBALS["lang"]['Fiji the Fiji Islands'] = 'Fiji Fiji-øerne';

$GLOBALS["lang"]['File'] = 'Fil';

$GLOBALS["lang"]['File Auditing'] = 'Filrevision';

$GLOBALS["lang"]['File Import'] = 'Filimport';

$GLOBALS["lang"]['File Input'] = 'Fil Input';

$GLOBALS["lang"]['file_name'] = 'Filnavn';

$GLOBALS["lang"]['File Name'] = 'Filnavn';

$GLOBALS["lang"]['File Share Discovery'] = 'Opdagelse af fildeling';

$GLOBALS["lang"]['file_size'] = 'Filstørrelse';

$GLOBALS["lang"]['File Size'] = 'Filstørrelse';

$GLOBALS["lang"]['filename'] = 'Filnavn';

$GLOBALS["lang"]['Filename'] = 'Filnavn';

$GLOBALS["lang"]['files'] = 'Filer';

$GLOBALS["lang"]['Files'] = 'Filer';

$GLOBALS["lang"]['files_id'] = 'Fil- id';

$GLOBALS["lang"]['Files ID'] = 'Fil- id';

$GLOBALS["lang"]['filter'] = 'Filter';

$GLOBALS["lang"]['Filter'] = 'Filter';

$GLOBALS["lang"]['filtered'] = 'Filtreret';

$GLOBALS["lang"]['Filtered'] = 'Filtreret';

$GLOBALS["lang"]['Filtered Ports'] = 'Filtrerede porte';

$GLOBALS["lang"]['Finland'] = 'Finland';

$GLOBALS["lang"]['Finnish'] = 'Finsk';

$GLOBALS["lang"]['Firewall'] = 'Firewall';

$GLOBALS["lang"]['Firewall Packages'] = 'Firewall-pakker';

$GLOBALS["lang"]['firewall_rule'] = 'Firewall regel';

$GLOBALS["lang"]['Firewall Rule'] = 'Firewall regel';

$GLOBALS["lang"]['firmware'] = 'Firmware';

$GLOBALS["lang"]['Firmware'] = 'Firmware';

$GLOBALS["lang"]['firmware_revision'] = 'Firmware revision';

$GLOBALS["lang"]['Firmware Revision'] = 'Firmware revision';

$GLOBALS["lang"]['First'] = 'Første';

$GLOBALS["lang"]['First Name'] = 'Fornavn';

$GLOBALS["lang"]['first_run'] = 'Første kørsel';

$GLOBALS["lang"]['First Run'] = 'Første kørsel';

$GLOBALS["lang"]['first_seen'] = 'Set først';

$GLOBALS["lang"]['First Seen'] = 'Set først';

$GLOBALS["lang"]['First focus on what the end need is: are you trying to baseline software, users, or Netstat data? What is the important thing(s) to compare and report on?'] = 'Første fokus på, hvad slutbehovet er: Er du forsøger at baseline software, brugere, eller Netstat data? Hvad er det vigtigste at sammenligne og rapportere om?';

$GLOBALS["lang"]['FirstWave'] = 'FirstWave';

$GLOBALS["lang"]['Fix'] = 'Fix';

$GLOBALS["lang"]['Fixed'] = 'Fast';

$GLOBALS["lang"]['Fixing the Issue'] = 'Fastlæggelse af spørgsmålet';

$GLOBALS["lang"]['Floor'] = 'Gulv';

$GLOBALS["lang"]['Follow any of the links below and discover how to use Open-AudIT to find out <b>Whats On Your Network?</b>'] = 'Følg et af nedenstående links og find ud af, hvordan du bruger Open- Audit <b>Hvad er på dit netværk?</b>';

$GLOBALS["lang"]['For'] = 'For';

$GLOBALS["lang"]['For <i>Type</i> make sure to select Baseline, and for Group you should select a Group of devices, if applicable to this baseline, that best represent the devices to apply the baseline against. This will prevent erroneous entries.'] = 'For <i>Type</i> Sørg for at vælge Baseline, og for gruppe bør du vælge en gruppe af enheder, hvis det er relevant for denne baseline, der bedst repræsenterer de enheder, der skal anvende baseline mod. Dette vil forhindre fejlagtige indgange.';

$GLOBALS["lang"]['For Debian/Ubuntu run, including setting dpkg to remember your override so an apt-get upgrade will not break'] = 'For Debian / Ubuntu-kørsel, inklusive indstilling af dpkg for at huske din override, så en apt- get opgradering ikke vil bryde sammen';

$GLOBALS["lang"]['For SNMP Open-AudIT can use v1, v2 and v3 credentials. The device is queried regardless of it being a router, switch (regular network devices) or a computer (Linux and Windows often run SNMP for monitoring tools).'] = 'For SNMP Open- Audit kan bruge v1, v2 og v3 legitimationsoplysninger. Enheden er spurgt, uanset om det er en router, switch (almindelige netværksenheder) eller en computer (Linux og Windows ofte køre SNMP for overvågning værktøjer).';

$GLOBALS["lang"]['For a primer on cron, see this Wikipedia page'] = 'For en primer på cron, se denne Wikipedia side';

$GLOBALS["lang"]['For a seed discovery, should I only discover IPs in the private IP address space.'] = 'For en frø opdagelse, skal jeg kun opdage IP \'er i den private IP-adresse plads.';

$GLOBALS["lang"]['For a seed discovery, should I only discover IPs on the chosen subnet.'] = 'For en frø opdagelse, skulle jeg kun opdage IP \'er på den valgte subnet.';

$GLOBALS["lang"]['For a seed discovery, should I ping the subnet before running the discovery.'] = 'For en frø opdagelse, skal jeg ping subnet før køre opdagelsen.';

$GLOBALS["lang"]['For advanced entry of a raw SQL query. As per Queries, you must include <code>WHERE @filter AND<code> in your SQL.'] = 'For avanceret indgang af en rå SQL forespørgsel. Som pr Forespørgsler, skal du inkludere <code>WHERE @filter AND<code> in your SQL.</code></code>';

$GLOBALS["lang"]['For each spawned process, the below occurs.'] = 'For hver spawned proces, følgende forekommer.';

$GLOBALS["lang"]['For example - you might create a baseline from a device running Redhat 9 which acts as one of your Apache servers in a cluster. You know this particular server is configured just the way you want it but you are unsure if other servers in the cluster are configured exactly the same. Baselines enable you to determine this.'] = 'For eksempel - kan du oprette en baseline fra en enhed, der kører Redhat 9, som fungerer som en af dine Apache servere i en klynge. Du ved denne særlige server er konfigureret præcis som du ønsker det, men du er usikker på, om andre servere i klyngen er konfigureret præcis det samme. Baselines giver dig mulighed for at afgøre dette.';

$GLOBALS["lang"]['For example - you might create a baseline from a device running Redhat 9 which acts as one of your Apache servers in a cluster. You know this particular server is configured just the way you want it but you are unsure if other servers in the cluster are configured exactly the same. Baselines enables you to determine this.'] = 'For eksempel - kan du oprette en baseline fra en enhed, der kører Redhat 9, som fungerer som en af dine Apache servere i en klynge. Du ved denne særlige server er konfigureret præcis som du ønsker det, men du er usikker på, om andre servere i klyngen er konfigureret præcis det samme. Baselines giver dig mulighed for at afgøre dette.';

$GLOBALS["lang"]['For further details information, see the wiki.'] = 'For yderligere oplysninger, se wikien.';

$GLOBALS["lang"]['For licenses that are not perpetual, when does the license expire.'] = 'For licenser, der ikke er evige, hvornår udløber licensen.';

$GLOBALS["lang"]['For more detailed information, check the Open-AudIT Knowledge Base.'] = 'For mere detaljeret information, se Open- Audit videnbase.';

$GLOBALS["lang"]['For more information please see the following guide which includes a video. Use'] = 'For mere information se følgende vejledning, som indeholder en video. Anvendelse';

$GLOBALS["lang"]['For more information, see'] = 'For mere information, se';

$GLOBALS["lang"]['form_factor'] = 'Formfaktor';

$GLOBALS["lang"]['Form Factor'] = 'Formfaktor';

$GLOBALS["lang"]['format'] = 'Format';

$GLOBALS["lang"]['Format'] = 'Format';

$GLOBALS["lang"]['Forth'] = 'Forth';

$GLOBALS["lang"]['fqdn'] = 'Fqdn';

$GLOBALS["lang"]['Fqdn'] = 'Fqdn';

$GLOBALS["lang"]['France, French Republic'] = 'Frankrig, Den Franske Republik';

$GLOBALS["lang"]['free'] = 'Fri';

$GLOBALS["lang"]['Free'] = 'Fri';

$GLOBALS["lang"]['French'] = 'Fransk';

$GLOBALS["lang"]['French Guiana'] = 'Fransk Guyana';

$GLOBALS["lang"]['French Polynesia'] = 'Fransk Polynesien';

$GLOBALS["lang"]['French Southern Territories'] = 'De franske sydlige områder';

$GLOBALS["lang"]['Frequently Asked Questions'] = 'Ofte stillede spørgsmål';

$GLOBALS["lang"]['Friday'] = 'Fredag';

$GLOBALS["lang"]['From 100 Devices'] = 'Fra 100 enheder';

$GLOBALS["lang"]['From 500 Devices'] = 'Fra 500 enheder';

$GLOBALS["lang"]['From that page'] = 'Fra denne side';

$GLOBALS["lang"]['full_name'] = 'Fuldt navn';

$GLOBALS["lang"]['Full Name'] = 'Fuldt navn';

$GLOBALS["lang"]['Full cloud auditing with all the details from a regular Open-AudIT audit AND details such as the machine type and size.'] = 'Fuld cloud audit med alle detaljer fra en regelmæssig Open- Audit audit og detaljer såsom maskintype og størrelse.';

$GLOBALS["lang"]['function'] = 'Funktion';

$GLOBALS["lang"]['Function'] = 'Funktion';

$GLOBALS["lang"]['GROUP BY'] = 'GRUPPE AF';

$GLOBALS["lang"]['Gabon'] = 'Gabon';

$GLOBALS["lang"]['Galician'] = 'Gælisk';

$GLOBALS["lang"]['Gambia the'] = 'Gambia';

$GLOBALS["lang"]['Gap Analysis (optional)'] = 'Gap analyse (valgfri)';

$GLOBALS["lang"]['gateway'] = 'Gateway';

$GLOBALS["lang"]['Gateway'] = 'Gateway';

$GLOBALS["lang"]['gateways'] = 'Gateways';

$GLOBALS["lang"]['Gateways'] = 'Gateways';

$GLOBALS["lang"]['Generated By'] = 'Genereret af';

$GLOBALS["lang"]['geo'] = 'Geo';

$GLOBALS["lang"]['Geo'] = 'Geo';

$GLOBALS["lang"]['Geographical Maps'] = 'Geografiske kort';

$GLOBALS["lang"]['Georgia'] = 'Georgien';

$GLOBALS["lang"]['German'] = 'Tysk';

$GLOBALS["lang"]['Germany'] = 'Tyskland';

$GLOBALS["lang"]['Get Lat/Long'] = 'Få Lat / Long';

$GLOBALS["lang"]['Get News'] = 'Hent nyheder';

$GLOBALS["lang"]['Get Started'] = 'Start';

$GLOBALS["lang"]['Get a Free License'] = 'Få en gratis licens';

$GLOBALS["lang"]['Get familiar with the Open-AudIT platform and explore some of its features.'] = 'Få kendskab til Open- Audit platform og udforske nogle af dens funktioner.';

$GLOBALS["lang"]['Getting Started'] = 'Kom i gang';

$GLOBALS["lang"]['Ghana'] = 'Ghana';

$GLOBALS["lang"]['Gibraltar'] = 'Gibraltar';

$GLOBALS["lang"]['Github'] = 'Github';

$GLOBALS["lang"]['Global Discovery Options'] = 'Globale søgemuligheder';

$GLOBALS["lang"]['Global area network'] = 'Globalt områdenet';

$GLOBALS["lang"]['Go'] = 'Gå';

$GLOBALS["lang"]['Go back to your Open-AudIT server and create a discovery with the target Windows computers IP Address as the subnet (this will save having to discover the entire subnet again). Run the discovery, taking note of any issues. For any issues found, take appropriate actions.'] = 'Gå tilbage til din Open- Audit server og oprette en opdagelse med målet Windows-computere IP-adresse som subnet (dette vil spare at skulle opdage hele subnet igen). Kør opdagelsen, tage til efterretning af eventuelle problemer. For alle spørgsmål, der er fundet, skal du træffe passende foranstaltninger.';

$GLOBALS["lang"]['Go the target Windows PC (or use RDP) and log on as the user used by your discovery credential set.'] = 'Gå målet Windows PC (eller bruge RDP) og logge på som brugeren bruges af din opdagelse kreditværdige sæt.';

$GLOBALS["lang"]['Go to menu'] = 'Gå til menu';

$GLOBALS["lang"]['Go to the <i>Applications</i> -> <i>App registrations</i> menu item on the far left. Search for Open-AudIT. Click the Open-AudIT entry in the list (assuming you named the app Open-AudIT).'] = 'Gå til <i>Ansøgninger</i> - > <i>App registreringer</i> menupunkt til venstre. Søg efter Open- Audit. Klik på Open- Audit i listen (hvis du angav appen Open- Audit).';

$GLOBALS["lang"]['Go to the <i>Certificates and secrets</i> menu item under <i>Manage</i> in the center menu.'] = 'Gå til <i>Certifikater og hemmeligheder</i> menupunkt under <i>Håndtering</i> I midtermenuen.';

$GLOBALS["lang"]['Go to the <i>Single sign-on</i> menu item and click SAML for <i>Select a single sign-on method</i>.'] = 'Gå til <i>Enkelt signalpå-</i> menupunkt og klik på SAML for <i>Vælg en enkelt signerings- on metode</i>.';

$GLOBALS["lang"]['Google Compute Fields'] = 'Google Computefelter';

$GLOBALS["lang"]['Google JSON Credentials'] = 'Google JSON Valgret';

$GLOBALS["lang"]['Google Maps API Key'] = 'Google Maps API Nøgle';

$GLOBALS["lang"]['Great, then you can help! Send FirstWave the text shown in the GUI and what should be shown. We will include that in the language file so going forward, the translation is improved and you do not need to worry about updating it for every release!'] = 'Godt, så kan du hjælpe! Send først Vink teksten vist i GUI og hvad der skal vises. Vi vil inkludere, at i den sproglige fil så går fremad, oversættelsen er forbedret, og du behøver ikke at bekymre dig om at opdatere det for hver udgivelse!';

$GLOBALS["lang"]['Greater Than'] = 'Større end';

$GLOBALS["lang"]['Greater Than or Equals'] = 'Større end eller lig med';

$GLOBALS["lang"]['Greece'] = 'Grækenland';

$GLOBALS["lang"]['Greek'] = 'Græsk';

$GLOBALS["lang"]['Green Query'] = 'Grøn forespørgsel';

$GLOBALS["lang"]['Greenland'] = 'Grønland';

$GLOBALS["lang"]['Grenada'] = 'Grenada';

$GLOBALS["lang"]['Group'] = 'Gruppe';

$GLOBALS["lang"]['group_by'] = 'Gruppe af';

$GLOBALS["lang"]['Group By'] = 'Gruppe af';

$GLOBALS["lang"]['group_id'] = 'Gruppe ID';

$GLOBALS["lang"]['Group ID'] = 'Gruppe ID';

$GLOBALS["lang"]['groups'] = 'Grupper';

$GLOBALS["lang"]['Groups'] = 'Grupper';

$GLOBALS["lang"]['Groups are used as simple lists of devices that match the required conditions. If requested using JSON they return a list of <i>devices.id</i> only. If requested using the web interface, they return the standard column attribute list. Groups can be used for Integrations, Baselines and other items.'] = 'Grupper bruges som simple lister over enheder, der matcher de krævede betingelser. Efter anmodning fra JSON returnerer de en liste over <i>devices.id</i> Kun. Hvis der anmodes om brug af webgrænsefladen, returnerer de standardsøjleattributlisten. Grupper kan bruges til Integrationer, Baselines og andre emner.';

$GLOBALS["lang"]['Guadeloupe'] = 'Guadeloupe Formand';

$GLOBALS["lang"]['Guam'] = 'Guam';

$GLOBALS["lang"]['Guatemala'] = 'Guatemala';

$GLOBALS["lang"]['Guernsey'] = 'Guernsey Formand';

$GLOBALS["lang"]['guest_device_id'] = 'Gæsteenheds- id';

$GLOBALS["lang"]['Guest Device ID'] = 'Gæsteenheds- id';

$GLOBALS["lang"]['guid'] = 'Guid';

$GLOBALS["lang"]['Guid'] = 'Guid';

$GLOBALS["lang"]['Guinea'] = 'Guinea';

$GLOBALS["lang"]['Guinea-Bissau'] = 'Guinea- Bissau';

$GLOBALS["lang"]['Guyana'] = 'Guyana';

$GLOBALS["lang"]['HP-UX'] = 'HP-UX';

$GLOBALS["lang"]['HW Revision'] = 'HW Revision';

$GLOBALS["lang"]['Haiti'] = 'Haiti';

$GLOBALS["lang"]['hard_drive_index'] = 'Hard Drive Index';

$GLOBALS["lang"]['Hard Drive Index'] = 'Hard Drive Index';

$GLOBALS["lang"]['Hardware'] = 'Hardware';

$GLOBALS["lang"]['hardware_revision'] = 'Hardwarerevision';

$GLOBALS["lang"]['Hardware Revision'] = 'Hardwarerevision';

$GLOBALS["lang"]['Has this policy been applied in this organization.'] = 'Er denne politik blevet anvendt i denne organisation?';

$GLOBALS["lang"]['hash'] = 'Hash';

$GLOBALS["lang"]['Hash'] = 'Hash';

$GLOBALS["lang"]['Have the agent always run the latest audit script (if you upgrade Open-AudIT and manually copy the scripts to the targets, then set cron - you will need to update these scripts for each upgrade).'] = 'Har agenten altid køre den nyeste revision script (hvis du opgraderer Open- Audit og manuelt kopiere scripts til målene, derefter indstille cron - du bliver nødt til at opdatere disse scripts for hver opgradering).';

$GLOBALS["lang"]['Have your user open a command prompt (using <i>Run as Administrator</i>). Paste the below into the prompt to download the Agent.'] = 'Få din bruger til at åbne en kommandoprompt (bruger <i>Kør som administrator</i>). Indsæt nedenstående ind i prompten for at downloade agenten.';

$GLOBALS["lang"]['Head'] = 'Ansvarlig';

$GLOBALS["lang"]['Heard Island and McDonald Islands'] = 'Hørt Island og McDonald Islands';

$GLOBALS["lang"]['Hebrew'] = 'Hebraisk';

$GLOBALS["lang"]['height'] = 'Højde';

$GLOBALS["lang"]['Height'] = 'Højde';

$GLOBALS["lang"]['Height in RU'] = 'Højde i jernbanevirksomhed';

$GLOBALS["lang"]['Help'] = 'Hjælp';

$GLOBALS["lang"]['Help and Frequently Asked Questions'] = 'Hjælp og ofte stillede spørgsmål';

$GLOBALS["lang"]['Helps manage and mitigate information security risks'] = 'Hjælper med at håndtere og mindske informationssikkerhedsrisici';

$GLOBALS["lang"]['Hide Audit Window'] = 'Skjul revisionsvindue';

$GLOBALS["lang"]['high'] = 'Høj';

$GLOBALS["lang"]['High'] = 'Høj';

$GLOBALS["lang"]['High Availability'] = 'Høj tilgængelighed';

$GLOBALS["lang"]['Hindi'] = 'Hindi';

$GLOBALS["lang"]['Holy See (Vatican City State)'] = 'Pavestolen (Vatikanstaten)';

$GLOBALS["lang"]['Home'] = 'Hjem';

$GLOBALS["lang"]['home'] = 'Hjem';

$GLOBALS["lang"]['Home Area Network'] = 'Hjemmeområdenetværk';

$GLOBALS["lang"]['Home area network'] = 'Hjemmeområdenetværk';

$GLOBALS["lang"]['Honduras'] = 'Honduras';

$GLOBALS["lang"]['Hong Kong'] = 'Hongkong';

$GLOBALS["lang"]['host'] = 'Vært';

$GLOBALS["lang"]['Host'] = 'Vært';

$GLOBALS["lang"]['hostname'] = 'Værtsnavn';

$GLOBALS["lang"]['Hostname'] = 'Værtsnavn';

$GLOBALS["lang"]['hour'] = 'Time';

$GLOBALS["lang"]['Hour'] = 'Time';

$GLOBALS["lang"]['How Does It Work?'] = 'Hvordan virker det?';

$GLOBALS["lang"]['How Does it Work?'] = 'Hvordan virker det?';

$GLOBALS["lang"]['How Long Does it Take'] = 'Hvor lang tid tager det';

$GLOBALS["lang"]['How and Why is'] = 'Hvordan og hvorfor';

$GLOBALS["lang"]['How and Why is Open-AudIT More Secure'] = 'Hvordan og hvorfor er Open- Audit mere sikker';

$GLOBALS["lang"]['How do they work?'] = 'Hvordan virker de?';

$GLOBALS["lang"]['How does a Device Seed Discovery find known IPs?'] = 'Hvordan finder en enhed Seed Discovery kendte IP \'er?';

$GLOBALS["lang"]['How long did the command take to execute.'] = 'Hvor lang tid tog kommandoen at udføre.';

$GLOBALS["lang"]['How long should Nmap wait for a response, per device.'] = 'Hvor længe skal Nmap vente på et svar, per enhed.';

$GLOBALS["lang"]['How many circuit feed to this rack.'] = 'Hvor mange kredsløbsfeeds til denne rack.';

$GLOBALS["lang"]['How many policies results in a fail.'] = 'Hvor mange politikker resulterer i en fiasko.';

$GLOBALS["lang"]['How many policies results in a pass.'] = 'Hvor mange politikker resulterer i et pass.';

$GLOBALS["lang"]['How many power sockets in this rack.'] = 'Hvor mange stikkontakter er der?';

$GLOBALS["lang"]['How many rack units in height is this rack.'] = 'Hvor mange rack enheder i højden er denne rack.';

$GLOBALS["lang"]['How often should the collector ask the server for a task.'] = 'Hvor ofte skal samleren bede serveren om en opgave.';

$GLOBALS["lang"]['How should we select devices to be integrated (using an Attribute, Query or a Group).'] = 'Hvordan skal vi vælge enheder, der skal integreres (ved hjælp af en attribut, forespørgsel eller en gruppe).';

$GLOBALS["lang"]['How the vulnerability is exploited (e.g., Network, Adjacent, Local, Physical).'] = 'Hvordan sårbarheden udnyttes (f.eks. netværk, address, lokale, fysiske).';

$GLOBALS["lang"]['How to compare'] = 'Hvordan man sammenligner';

$GLOBALS["lang"]['Human-readable explanation of the vulnerability.'] = 'Menneskelig-læsbar forklaring af sårbarheden.';

$GLOBALS["lang"]['Hungarian'] = 'Ungarsk';

$GLOBALS["lang"]['Hungary'] = 'Ungarn';

$GLOBALS["lang"]['hw_cpe'] = 'Hw Cpe';

$GLOBALS["lang"]['Hw Cpe'] = 'Hw Cpe';

$GLOBALS["lang"]['hyperthreading'] = 'Hyperthreading';

$GLOBALS["lang"]['Hyperthreading'] = 'Hyperthreading';

$GLOBALS["lang"]['I have read the EULA.'] = 'Jeg har læst EULA.';

$GLOBALS["lang"]['I hope this post has alleviated any concerns you have about Open-AudIT and Security. If you have any questions at all, please do not hesitate to reach out to us here at FirstWave. We are always happy to discuss your concerns and needs. And maybe if your question is not something I have addressed here, I can add it here for future users'] = 'Jeg håber, at dette indlæg har lettet dine bekymringer om Open- Audit og Sikkerhed. Hvis du overhovedet har spørgsmål, så tøv ikke med at kontakte os her på FirstWave. Vi er altid glade for at diskutere dine bekymringer og behov. Og måske hvis dit spørgsmål ikke er noget, jeg har behandlet her, kan jeg tilføje det her for fremtidige brugere';

$GLOBALS["lang"]['id'] = 'ID';

$GLOBALS["lang"]['ID'] = 'ID';

$GLOBALS["lang"]['IF'] = 'IF';

$GLOBALS["lang"]['IMPORTANT'] = 'VIGTIGT';

$GLOBALS["lang"]['INPUTS'] = 'INPUTER';

$GLOBALS["lang"]['IOS Version'] = 'IOS-version';

$GLOBALS["lang"]['IP'] = 'IP';

$GLOBALS["lang"]['ip'] = 'IP';

$GLOBALS["lang"]['IP Address'] = 'IP- adresse';

$GLOBALS["lang"]['IP Addresses'] = 'IP-adresser';

$GLOBALS["lang"]['IP Last Seen'] = 'IP- sidst set';

$GLOBALS["lang"]['IP Set By'] = 'IP Set by';

$GLOBALS["lang"]['ISMS'] = 'ISMS';

$GLOBALS["lang"]['ISO 27001 only.'] = 'Kun ISO 27001.';

$GLOBALS["lang"]['Iceland'] = 'Island';

$GLOBALS["lang"]['icon'] = 'Ikon';

$GLOBALS["lang"]['Icon'] = 'Ikon';

$GLOBALS["lang"]['Icon and Text'] = 'Ikon og tekst';

$GLOBALS["lang"]['Icon only, text only or icon and text.'] = 'Kun ikon, kun tekst eller ikon og tekst.';

$GLOBALS["lang"]['id_internal'] = 'Id Intern';

$GLOBALS["lang"]['Id Internal'] = 'Id Intern';

$GLOBALS["lang"]['id_number'] = 'Id-nummer';

$GLOBALS["lang"]['Id Number'] = 'Id-nummer';

$GLOBALS["lang"]['identification'] = 'Identifikation';

$GLOBALS["lang"]['Identification'] = 'Identifikation';

$GLOBALS["lang"]['Identify information assets'] = 'Identificer informationsaktiver';

$GLOBALS["lang"]['Identify interested parties and their requirements'] = 'Identificer interesserede parter og deres krav';

$GLOBALS["lang"]['Identify key stakeholders and assign roles'] = 'Identificer centrale interessenter og tildele roller';

$GLOBALS["lang"]['Identify the device(s) that are your exemplary, or <i>gold image</i> you want to compare similar devices against.'] = 'Identificer den eller de enheder, der er eksemplariske, eller <i>guldbillede</i> du ønsker at sammenligne lignende enheder mod.';

$GLOBALS["lang"]['Identifying and evaluating security risks'] = 'Identificering og vurdering af sikkerhedsrisici';

$GLOBALS["lang"]['If'] = 'Hvis';

$GLOBALS["lang"]['If a device is individually discovered using the <i>Discover Device</i> link on the device details page, we first check if this device has been discovered previously (by Discovery) and if so, use the discovery options from that scan. If it has not been previously discovered, we revert to the configuration item discovery_default_scan_option the settings.'] = 'Hvis en enhed opdages individuelt ved hjælp af <i>Opdag enhed</i> link på siden med oplysninger om enheden, vi først kontrollere, om denne enhed er blevet opdaget tidligere (af Discovery), og hvis det er tilfældet, bruge søgemuligheder fra denne scanning. Hvis det ikke tidligere er blevet opdaget, vender vi tilbage til opsætning element opdagelse _ default _ scan _ option indstillingerne.';

$GLOBALS["lang"]['If a new Org is created, an LDAP group name is automatically derived from the name. For example, if a new Org is created and is named Test, the corresponding LDAP group will be named open-audit_orgs_test.'] = 'Hvis en ny Org oprettes, er et LDAP gruppenavn automatisk afledt af navnet. For eksempel, hvis en ny Org er oprettet og er navngivet Test, vil den tilsvarende LDAP gruppe blive navngivet open- audit _ orgs _ test.';

$GLOBALS["lang"]['If a port responds with filtered, should we consider it available.'] = 'Hvis en havn reagerer med filtreret, skal vi overveje det.';

$GLOBALS["lang"]['If a port responds with open|filtered, should we consider it available.'] = 'Hvis en port reagerer med åbent 124; filtreret, skal vi overveje det til rådighed.';

$GLOBALS["lang"]['If a remote device does not exist in the Open-AudIT selected devices, should we delete it from the external system.'] = 'Hvis en ekstern enhed ikke findes i de valgte Open- Audit enheder, skal vi slette den fra det eksterne system.';

$GLOBALS["lang"]['If an Open-AudIT device has been changed, should we update the external system.'] = 'Hvis en Open- Audit enhed er blevet ændret, skal vi opdatere det eksterne system.';

$GLOBALS["lang"]['If an Open-AudIT device is not on the external system, should we create it.'] = 'Hvis en Open- Audit enhed ikke er på det eksterne system, skal vi oprette det.';

$GLOBALS["lang"]['If an agent reports its primary IP is in this subnet, perform the actions.'] = 'Hvis en agent rapporterer sin primære IP er i denne subnet, udføre handlinger.';

$GLOBALS["lang"]['If any of these (comma seperated, no spaces) ports are detected, assume SSH is running on them and use them for auditing. No need to add this port to the Custom TCP ports - it will be added automatically.'] = 'Hvis nogen af disse (komma seperated, ingen mellemrum) porte detekteres, antage SSH kører på dem og bruge dem til revision. Ingen grund til at tilføje denne port til Custom TCP-porte - det vil blive tilføjet automatisk.';

$GLOBALS["lang"]['If no operator is specified, the default is =. Properties should be fully qualified - ie, devices.hostname (not just hostname).'] = 'Hvis ingen operatør er angivet, er standarden =. Egenskaber skal være fuldt kvalificerede - dvs, devices.hostname (ikke bare værtsnavn).';

$GLOBALS["lang"]['If no value is present, supply this value. EG: for system.nmis_group / configuraion.group we use'] = 'Hvis der ikke er nogen værdi til stede, angives denne værdi. EG: for system.nmis _ group / configuraion. gruppe vi bruger';

$GLOBALS["lang"]['If set, holds a JSON array of specific device columns this user has chosen to see, other than the configuration default.'] = 'Hvis sat, holder en JSON array af specifikke enheder kolonner denne bruger har valgt at se, ud over konfigurationsstandard.';

$GLOBALS["lang"]['If the OS Family (as reported by the device) contains this item, pass.</li>'] = 'Hvis OS-familien (som rapporteret af enheden) indeholder dette punkt, pass.';

$GLOBALS["lang"]['If the Open-AudIT Server has Collectors reporting to it, an additional drop down is provided. You can select this to specify which Collector the task should run on. Only Discovery tasks are supported for Collectors.'] = 'Hvis Open- Audit Server har Samlere rapportering til det, en ekstra drop down er fastsat. Du kan vælge dette for at angive hvilken Collector opgaven skal køre på. Kun Discovery opgaver understøttes for Collectors.';

$GLOBALS["lang"]['If the agent OS family (case insensitive) contains this string, perform the actions.'] = 'Hvis agent OS familie (tilfælde ufølsom) indeholder denne streng, udføre handlinger.';

$GLOBALS["lang"]['If the binary is not found in either of these locations, a warning message will be displayed in the installer.'] = 'Hvis binær ikke findes i nogen af disse steder, vil en advarsel blive vist i installeringsprogrammet.';

$GLOBALS["lang"]['If the following conditions are met:<br><ul><li>a Role has an assigned ad_group</li><li>an Org has an assigned ad_group</li><li>an LDAP Server has use_roles set to y</li><li>a user exists in LDAP (be it Active Directory or OpenLDAP) and is in the assigned ad_groups</li></ul>That user can log on to Open-AudIT without an account in Open-AudIT needing to be created. Open-AudIT will query the LDAP in question and if the user is in the required groups but not in Open-AudIT, their user attributes (name, full name, email,  roles, orgs, etc) within Open-AudIT will be automatically populated and they will be logged on.<br> <br>'] = 'Hvis følgende betingelser er opfyldt:<br/><ul><li>a Rolle har en tildelt ad _ group</li><li>en Org har en tildelt ad _ group</li><li>en LDAP Server har brug _ roller indstillet til y</li><li>en bruger findes i LDAP (det være sig Active Directory eller OpenLDAP) og er i de tildelte ad _ groups</li></ul>Denne bruger kan logge på Open- Audit uden en konto i Open- Audit behov for at blive oprettet. Open- Audit vil spørge den LDAP pågældende, og hvis brugeren er i de krævede grupper, men ikke i Open- Audit, deres brugerattributter (navn, fulde navn, e-mail, roller, orgs, etc) inden Open- Audit vil blive automatisk befolket, og de vil blive logget på.<br/> <br/>';

$GLOBALS["lang"]['If the local field is true (bool) or y (string) or Y (string) or 1 (integer) then set the external data to 1.'] = 'Hvis det lokale felt er sandt (bool) eller y (streng) eller Y (streng) eller 1 (heltal) derefter indstille de eksterne data til 1.';

$GLOBALS["lang"]['If the local field is true (bool) or y (string) or Y (string) or 1 (integer) then set the external data to y.'] = 'Hvis det lokale felt er sandt (bool) eller y (streng) eller Y (streng) eller 1 (heltal) derefter indstille de eksterne data til y.';

$GLOBALS["lang"]['If the primary IP (as reported by the device) is in this subnet, pass.</li>'] = 'Hvis den primære IP (som rapporteret af enheden) er i denne subnet, pass.';

$GLOBALS["lang"]['If the user account does not actually exist within Open-AudIT and <code>use_authorisation</code> is set, the user will be created. If it does exist, details such as email, full name, etc will be populated.'] = 'Hvis brugerkontoen ikke eksisterer i Open- Audit og <code>use_authorisation</code> er indstillet, vil brugeren blive oprettet. Hvis det eksisterer, vil oplysninger såsom e-mail, fulde navn, osv blive befolket.';

$GLOBALS["lang"]['If the user either does not have valid credentials or is not in at least one Open-AudIT Role and Group (when using <code>use_authorisation</code>), Open-AudIT will fallback to using local Open-AudIT user details and attempt authentication and authorization there. Failing that, the user will be denied access.'] = 'Hvis brugeren enten ikke har gyldige legitimationsoplysninger eller ikke er i mindst én Open- Audit Rolle og Group (når du bruger <code>use_authorisation</code>), Open- Audit vil falde tilbage til at bruge lokale Open- Audit brugerdetaljer og forsøge godkendelse og godkendelse der. Hvis det ikke lykkes, vil brugeren blive nægtet adgang.';

$GLOBALS["lang"]['If the user logging on to Open-AudIT does not have the access to search LDAP, you can use another account which does have this access.'] = 'Hvis brugeren logger på Open- Audit ikke har adgang til at søge LDAP, kan du bruge en anden konto, som har denne adgang.';

$GLOBALS["lang"]['If the user logging on to Open-AudIT does not have the access to search OpenLDAP, you can use another account which does have this access. Use the dn_account and dn_password to configure this.'] = 'Hvis brugeren logger på Open- Audit ikke har adgang til at søge i OpenLDAP, kan du bruge en anden konto, som har denne adgang. Brug dn _ account og dn _ password til at indstille dette.';

$GLOBALS["lang"]['If the value is not set, the current timestamp will be used.'] = 'Hvis værdien ikke er sat, vil det aktuelle tidsstempel blive brugt.';

$GLOBALS["lang"]['If the value is set, that timestamp value will be used.'] = 'Hvis værdien er sat, anvendes denne værdi for tidsstempel.';

$GLOBALS["lang"]['If this change does not work for you, all is not lost. We have added a configuration item (set to n by default, so it will use not this new option out of the box) called discovery_use_org_id_match. If you change it to y then the OrgID assigned to the device by the discovery will be used in the relevant match rules.'] = 'Hvis denne ændring ikke virker for dig, er alt ikke tabt. Vi har tilføjet et indstillingselement (indstillet til n som standard, så det vil ikke bruge denne nye indstilling ud af boksen) kaldet descovery _ use _ org _ id _ match. Hvis du ændrer det til y så Orgid tildelt enheden af opdagelsen vil blive brugt i de relevante matchregler.';

$GLOBALS["lang"]['If this many minutes (or more) have passed since the server last saw the device, pass.</li>'] = 'Hvis dette mange minutter (eller mere) er gået siden serveren sidst så enheden, pass.';

$GLOBALS["lang"]['If this many or more minutes have passed since the device contacted the server, perform the actions.'] = 'Hvis dette mange eller flere minutter er gået, siden enheden kontaktede serveren, udføre handlinger.';

$GLOBALS["lang"]['If this occurs then the issue you are seeing is related to the table control being used on the webpage. It only stores in memory the state of the check boxes for the current page being viewed. If you make selections, then page forward/back those selections will be lost. You can, however, accomplish what you want by expanding the number of devices shown on each page. In the top-left corner is a drop-down labeled “records per page”; use this to expand the number of entries displayed until you see all you want to select for Bulk Edit.'] = 'Hvis dette sker, så er det problem, du ser, relateret til tabellen kontrol bliver brugt på hjemmesiden. Det gemmer kun i hukommelsen tilstanden af afkrydsningsfelterne for den aktuelle side, der bliver set. Hvis du foretager valg, så side frem / tilbage disse valg vil blive tabt. Du kan dog opnå, hvad du ønsker ved at udvide antallet af enheder vist på hver side. I øverste venstre hjørne er en drop- down mærket "poster per side"; bruge dette til at udvide antallet af indgange, der vises, indtil du ser alt, hvad du ønsker at vælge for Bulk Edit.';

$GLOBALS["lang"]['If we detect the san management software, should we run an auto-discover before the query.'] = 'Hvis vi opdager san management software, skal vi køre en automatisk-opdage før forespørgslen.';

$GLOBALS["lang"]['If you add a Location Type, add those icons to'] = 'Hvis du tilføjer en placering Type, tilføje disse ikoner til';

$GLOBALS["lang"]['If you add a device type, to display the associated icon you will have to manually copy the .svg formatted file to the directory'] = 'Hvis du tilføjer en enhedstype, for at vise det tilhørende ikon, skal du manuelt kopiere .svg formateret fil til mappen';

$GLOBALS["lang"]['If you are a supported FirstWave customer,a couple of items will make helping your easier. Open a support ticket with FirstWave and attach the logfile. Also include the output from the Support button on the upper right of the'] = 'Hvis du er en understøttet FirstWave kunde, et par elementer vil gøre hjælpe din nemmere. Åbn en supportbillet med FirstWave og vedhæft logfilen. Også omfatte output fra Support knappen på øverste højre';

$GLOBALS["lang"]['If you are a supported customer and open a support ticket with FirstWave, please attach these files.'] = 'Hvis du er en understøttet kunde og åbner en supportbillet med FirstWave, skal du vedhæfte disse filer.';

$GLOBALS["lang"]['If you are having issues with Google Maps API keys or your company does not have access to create Google Maps API keys, please contact the FirstWave support team.'] = 'Hvis du har problemer med Google Maps API-nøgler, eller din virksomhed ikke har adgang til at oprette Google Maps API-nøgler, bedes du kontakte FirstWave support team.';

$GLOBALS["lang"]['If you are on Windows or your NMIS server is remote, you will need to supply the URL, username and password to access that server.'] = 'Hvis du er på Windows eller din NMIS-server er fjern, skal du levere URL, brugernavn og adgangskode for at få adgang til denne server.';

$GLOBALS["lang"]['If you are on a decent broadband or ethernet connection, I would recommend always using -T4 (Aggressive). Some people love -T5 (Insane) though it is too aggressive for my taste. People sometimes specify -T2 (Polite) because they think it is less likely to crash hosts or because they consider themselves to be polite in general. They often do not realize just how slow -T2 really is. Their scan may take ten times longer than a default scan. Machine crashes and bandwidth problems are rare with the default timing options -T3 (Normal) and so I normally recommend that for cautious scanners. Omitting version detection is far more effective than playing with timing values at reducing these problems.'] = 'Hvis du er på en anstændig bredbånd eller ethernet forbindelse, vil jeg anbefale altid at bruge -T4 (Aggressive). Nogle mennesker elsker -T5 (Insane) selvom det er for aggressiv til min smag. Folk undertiden angive -T2 (Polite), fordi de tror, det er mindre sandsynligt at gå ned værter, eller fordi de anser sig selv for at være høflig i almindelighed. De ofte ikke klar over, hvor langsom -T2 virkelig er. Deres scanning kan tage ti gange længere end en standard scanning. Machine crash og båndbredde problemer er sjældne med standard timing muligheder -T3 (Normal) og så jeg normalt anbefale, at for forsigtige scannere. At udelade versionsdetektion er langt mere effektivt end at lege med timing værdier til at reducere disse problemer.';

$GLOBALS["lang"]['If you are running a RedHat or Centos system and you have upgraded Nmap, please reset the SUID on the binary by'] = 'Hvis du kører et RedHat eller Centos system, og du har opgraderet Nmap, skal du nulstille SUID på den binære ved';

$GLOBALS["lang"]['If you are running an Open-AudIT server on Linux, this does not affect you.'] = 'Hvis du kører en Open- Audit- server på Linux, påvirker dette dig ikke.';

$GLOBALS["lang"]['If you are using Open-AudIT on Windows or if your NMIS server is not on your Open-AudIT Server (in the case of some Linux installs), you will need to supply access credentials and a URL to the remote NMIS - but that is all! Yes - Integrations between NMIS and Open-AudIT even work with Windows based Open-AudIT now!'] = 'Hvis du bruger Open- Audit på Windows, eller hvis din NMIS-server ikke er på din Open- Audit Server (i tilfælde af nogle Linux-installeringer), skal du levere adgangsoplysninger og en URL til den eksterne NMIS - men det er alt! Ja - Integration mellem NMIS og Open- Audit selv arbejde med Windows-baseret Open- Audit nu!';

$GLOBALS["lang"]['If you choose a Collector, it will be scheduled to execute on the next 5 minute boundary.'] = 'Hvis du vælger en Collector, vil det være planlagt at udføre på den næste 5 minutters grænse.';

$GLOBALS["lang"]['If you do normally set devices_assigned_to_org and the configuration item is enabled, then the OrgID will be used to further refine the match.'] = 'Hvis du normalt sætter enheder _ allokeret _ to _ org og indstillingselementet er aktiveret, så vil Orgid blive brugt til yderligere at forfine kampen.';

$GLOBALS["lang"]['If you do not normally set devices_assigned_to_org, then it will have no effect. We only check using the OrgID if it has been set in discovery (or manually in an audit script) and enabled in the configuration.'] = 'Hvis du ikke normalt sætter enheder _ allokeret _ to _ org, så vil det ikke have nogen effekt. Vi kontrollerer kun ved hjælp af Orgid, hvis det er blevet sat i opdagelse (eller manuelt i et revisionsscript) og aktiveret i konfigurationen.';

$GLOBALS["lang"]['If you enable the configuration item, use discovery to assign an Org and then subsequently change the OrgID of a device after discovery then you will likely have a new device created the next time the discovery runs. In this instance, you should probably just unset devices_assigned_to_org before running subsequent discoveries. This is because (in this instance) you have told Open-AudIT <i>these devices from this discovery belong to Org X<i>, but then changed the Org of the device. You have changed the stored devices information. In this case - there is no no longer a device belonging to Org X, so we create a new one.'] = 'Hvis du aktiverer indstillingselementet, skal du bruge opdagelsen til at tildele en Org og derefter efterfølgende ændre Orgid på en enhed efter opdagelsen så vil du sandsynligvis have en ny enhed oprettet næste gang opdagelsen kører. I dette tilfælde bør du sandsynligvis bare frakoble enheder _ allokeret _ to _ org før du kører efterfølgende opdagelser. Dette er fordi (i dette tilfælde) du har fortalt Open- Audit <i>disse enheder fra denne opdagelse tilhører Org X<i>, men derefter ændret Org af enheden. Du har ændret information om gemte enheder. I dette tilfælde - er der ikke længere en enhed tilhører Org X, så vi skaber en ny.</i></i>';

$GLOBALS["lang"]['If you have Anti-Virus software running, allowing the services of Opmantek (omkd), Apache (apache2.2) and MySQL (mysql) to auto start and run is essential. These services are used by Open-AudIT. You should only need to do this once. If your Anti-Virus program keeps prompting you about Open-AudIT, please post to the forums or send an email to support with the name and version of your Anti-Virus software.'] = 'Hvis du har Anti- Virus software kører, så tjenester Opmantek (omkd), Apache (apache2.2) og MySQL (mysql) til auto start og køre er afgørende. Disse tjenester bruges af Open- Audit. Du skal kun gøre det én gang. Hvis dit Anti- Virus program bliver ved med at spørge dig om Open- Audit, skal du sende en mail til forummet eller sende en e-mail til support med navnet og versionen af din Anti- Virus software.';

$GLOBALS["lang"]['If you have working credentials, you can expect the full amount of information possible.<br><br>Obviously, the best way to use Open-AudIT is to have working credentials for the devices being discovered (be they WMI, SSH, or SNMP credentials).<br><br>We also have a page on auditing without credentials.'] = 'Hvis du har arbejdslegitimation, kan du forvente den fulde mængde af oplysninger muligt.<br/><br/>Naturligvis, den bedste måde at bruge Open- Audit er at have arbejdslegitimation for de enheder, der bliver opdaget (være de WMI, SSH, eller SNMP legitimationsoplysninger).<br/><br/>Vi har også en side om revision uden legitimation.';

$GLOBALS["lang"]['If you include the \"id\" field <strong>and</strong> set it with a number, that item will be updated rather than created.'] = 'Hvis du inkluderer\ "id\" feltet <strong>og</strong> sætte det med et tal, at elementet vil blive opdateret snarere end skabt.';

$GLOBALS["lang"]['If you need to configure Active Directory access, you can usually use the example of <code>cn=Users,dc=your,dc=domain,dc=com</code> for your <code>base_dn</code>. There is no need to set <code>user_dn</code>.'] = 'Hvis du har brug for at indstille Active Directory adgang, kan du normalt bruge eksemplet med <code>cn=Users,dc=your,dc=domain,dc=com</code> for din <code>base_dn</code>. Der er ingen grund til at sætte <code>user_dn</code>.';

$GLOBALS["lang"]['If you need to configure OpenLDAP access for your users and a given users access DN is normally <code>uid=username@domain,cn=People,dc=your,dc=domain,dc=com</code> then you should set <code>base_dn</code> to <code>dc=your,dc=domain,dc=com</code> and <code>user_dn</code> to <code>uid=@username@@domain,cn=People</code>. The special words <code>@username</code> and <code>@domain</code> will be replaced by the login details provided by your user on the login page.'] = 'Hvis du har brug for at konfigurere OpenLDAP adgang for dine brugere og en given bruger adgang DN er normalt <code>uid=username@domain,cn=People,dc=your,dc=domain,dc=com</code> så skal du indstille <code>base_dn</code> til <code>dc=your,dc=domain,dc=com</code> og <code>user_dn</code> til <code>uid=@username@@domain,cn=People</code>. De særlige ord <code>@username</code> og <code>@domain</code> vil blive erstattet af de login oplysninger, som din bruger på login side.';

$GLOBALS["lang"]['If you run discovery upon a subnet that the Server (or Collector) is directly installed on, you can expect the following for responding devices'] = 'Hvis du kører opdagelse på et subnet, at serveren (eller Collector) er direkte installeret på, kan du forvente følgende for responderende enheder';

$GLOBALS["lang"]['If you run discovery upon a subnet that your Server (or Collector) is not directly installed on, you can expect the following for responding devices'] = 'Hvis du kører opdagelse på et subnet, at din server (eller Collector) ikke er direkte installeret på, kan du forvente følgende for responderende enheder';

$GLOBALS["lang"]['If you select a List type, an additional field will appear called Values. You should put a comma separated list of selectable values here. These will display in a dropdown box whenever the field is edited.'] = 'Hvis du vælger en liste- type, vises et ekstra felt kaldet Værdier. Du bør sætte en kommaadskilt liste over valgbare værdier her. Disse vises i et dropned- felt når feltet redigeres.';

$GLOBALS["lang"]['If you set the values for'] = 'Hvis du sætter værdierne for';

$GLOBALS["lang"]['If you want to force your Agents to use a particular configuration, you can supply the ID of the agents entry to use, as below (replace $id with the number of the Agents entry). When this Agent is installed, it will check-in with the sevrer and <strong>only</strong> check that one individual Agent entrys attributes (tests and actions). This may be useful if you are an MSP - create an Agents entry for a particular customer and have their devices all use this entry, which assigns them to an Org and Location.'] = 'Hvis du ønsker at tvinge dine agenter til at bruge en bestemt konfiguration, kan du levere ID for de agenter post til at bruge, som nedenfor (erstatte $id med antallet af agenter post). Når denne agent er installeret, vil den checke ind med sevrer og <strong>Kun til</strong> kontrollere, at en person Agent entrys attributter (test og handlinger). Dette kan være nyttigt, hvis du er en MSP - oprette en Agent post til en bestemt kunde og få deres enheder alle bruge denne post, som tildeler dem til en Org og Placering.';

$GLOBALS["lang"]['If you wish to dig in and customize the Integration, click the Advanced button (and try not to be overwhelmed!).'] = 'Hvis du ønsker at grave i og tilpasse integration, skal du klikke på Advanced knappen (og prøv ikke at blive overvældet!).';

$GLOBALS["lang"]['If you wish to run a Discovery on an externally provided device, select the option and when the Integration is created, so s the Discovery.'] = 'Hvis du ønsker at køre en Discovery på en eksternt udstyret enhed, skal du vælge indstillingen og når Integration er skabt, så s Discovery.';

$GLOBALS["lang"]['If you would like to use the script outside of Discovery we have created another endpoint called <i>scripts</i>. See the documentation'] = 'Hvis du gerne vil bruge scriptet uden for Discovery har vi skabt et andet endpoint kaldet <i>scripts</i>. Se dokumentationen';

$GLOBALS["lang"]['If your user does not have <i>Run as Administrator</i> rights, they can still download the agent (first command above) and run it to submit an audit as below. It will be a one-off audit without the Agent being installed or scheduled.'] = 'Hvis din bruger ikke har <i>Kør som administrator</i> rettigheder, kan de stadig downloade agenten (første kommando ovenfor) og køre det til at indsende en revision som nedenfor. Det bliver en engangsrevision uden at agenten bliver installeret eller planlagt.';

$GLOBALS["lang"]['ifadminstatus'] = 'Ifadminstatus';

$GLOBALS["lang"]['Ifadminstatus'] = 'Ifadminstatus';

$GLOBALS["lang"]['iflastchange'] = 'Iflastchange';

$GLOBALS["lang"]['Iflastchange'] = 'Iflastchange';

$GLOBALS["lang"]['Ignore Invalid SSL'] = 'Ignorér ugyldigt SSL';

$GLOBALS["lang"]['Ignored'] = 'Ignoreret';

$GLOBALS["lang"]['image'] = 'Billede';

$GLOBALS["lang"]['Image'] = 'Billede';

$GLOBALS["lang"]['Images'] = 'Billeder';

$GLOBALS["lang"]['impact_availability'] = 'Indvirkning Tilgængelighed';

$GLOBALS["lang"]['Impact Availability'] = 'Indvirkning Tilgængelighed';

$GLOBALS["lang"]['impact_confidentiality'] = 'Indvirkning Fortrolighed';

$GLOBALS["lang"]['Impact Confidentiality'] = 'Indvirkning Fortrolighed';

$GLOBALS["lang"]['impact_integrity'] = 'Påvirkningens integritet';

$GLOBALS["lang"]['Impact Integrity'] = 'Påvirkningens integritet';

$GLOBALS["lang"]['Implement selected controls and procedures'] = 'Implementere udvalgte kontroller og procedurer';

$GLOBALS["lang"]['Implementation'] = 'Gennemførelse';

$GLOBALS["lang"]['implementation_notes'] = 'Gennemførelsesnoter';

$GLOBALS["lang"]['Implementation Notes'] = 'Gennemførelsesnoter';

$GLOBALS["lang"]['Import'] = 'Importér';

$GLOBALS["lang"]['Import Example Data'] = 'Importér eksempeldata';

$GLOBALS["lang"]['Import multiple {collection} using a CSV.'] = 'Importér flere {collection} ved brug af en CSV.';

$GLOBALS["lang"]['improvement_opportunities'] = 'Forbedring af mulighederne';

$GLOBALS["lang"]['Improvement Opportunities'] = 'Forbedring af mulighederne';

$GLOBALS["lang"]['Improves business continuity and resilience'] = 'Forbedrer driftskontinuitet og modstandsdygtighed';

$GLOBALS["lang"]['In'] = 'I';

$GLOBALS["lang"]['In a second tab or window go to your OKTA console and click <i>Create App Integration</i>.'] = 'I et andet faneblad eller vindue gå til din OKTA-konsol og klik <i>Opret App Integration</i>.';

$GLOBALS["lang"]['In a second tab or window sign-on to your'] = 'I en anden fane eller vindue sign-on til din';

$GLOBALS["lang"]['In my personal opinion, the best way to find and audit every single item on your network is a Seed Discovery for each subnet, restricted to that subnet (using credentials). Seed Discoveries use switch, router and computer MAC Address tables to not miss a single device. If it is connected to the network and uses TCP/IP, a switch/router/computer has to know it is there - thats just how TCP/IP works. Combine that with custom TCP and/or UDP ports and you should then be able to determine the device type as well. But thats just my personal preference'] = 'Efter min personlige mening, den bedste måde at finde og revidere hver enkelt element på dit netværk er en Seed Discovery for hver subnet, begrænset til denne subnet (ved hjælp af legitimation). Seed Opdagelser bruger switch, router og computer MAC adresseborde til ikke at gå glip af en enkelt enhed. Hvis det er tilsluttet netværket og bruger TCP / IP, skal en kontakt / router / computer vide, at det er der - det er præcis, hvordan TCP / IP fungerer. Kombiner, at med brugerdefinerede TCP og / eller UDP-porte, og du skal derefter være i stand til at bestemme enheden type så godt. Men det er bare min personlige præference';

$GLOBALS["lang"]['In order for Open-AudIT to be able to apply user permissions on items, we mandate the user of <code>WHERE @filter</code>. If you do not use this format, the queryCreateForm will throw a warning. Only users with the Admin role are permitted to create queries that lack this attribute and even then, only after the configuration item for <i>advanced_queries</i> has been enabled.'] = 'For at Open- Audit at kunne anvende brugertilladelser på emner, vi giver brugeren af <code>WHERE @filter</code>. Hvis du ikke bruger dette format, vil queryCreateForm kaste en advarsel. Kun brugere med Admin rolle er tilladt at skabe forespørgsler, der mangler denne attribut, og selv da, kun efter konfigurationselementet for <i>advanced _ queries</i> er blevet aktiveret.';

$GLOBALS["lang"]['In order to enable Google Maps you will need to a Google API Key follow this link and log in with your Google account,'] = 'For at aktivere Google Maps skal du bruge en Google API-nøgle til at følge dette link og logge ind med din Google-konto';

$GLOBALS["lang"]['In order to use the Azure Rest API, you will need to create an Azure Active Directory Application that is used for authentication.'] = 'For at bruge Azure Rest API, skal du oprette en Azure Active Directory Program, der bruges til godkendelse.';

$GLOBALS["lang"]['In order to use this functionality, it must be enabled in the configuration - click'] = 'For at bruge denne funktionalitet, skal det være aktiveret i konfigurationen - klik';

$GLOBALS["lang"]['In the (comma seperated) list'] = 'I listen over (komma seperated)';

$GLOBALS["lang"]['In the case of <code>in</code> and <code>notin</code>, you should enclose the values in round brackets and separate them using a comma (just a comma, not a comma, then space).<br><br>With these operators you can filter quite comprehensively.<br><br>When you add data and filter on multiple columns, those columns are combined using <strong>AND</strong>. You cannot filter using an <strong>OR</strong> condition. With the inclusion of <code>notin</code>, you should be able to get most searches working. And for those that do really require unsupported and complex selections, you can always write an actual query.'] = 'I tilfælde af <code>in</code> og <code>notin</code>, bør du vedlægge værdierne i runde parenteser og adskille dem ved hjælp af et komma (blot et komma, ikke et komma, derefter plads).<br/><br/>Med disse operatører kan du filtrere ganske omfattende.<br/><br/>Når du tilføjer data og filter på flere kolonner, disse kolonner er kombineret med <strong>OG</strong>. Du kan ikke filtrere med et <strong>ELLER</strong> tilstand. Med <code>notin</code>, bør du være i stand til at få de fleste søgninger til at virke. Og for dem, der virkelig kræver uunderstøttet og komplekse valg, kan du altid skrive en egentlig forespørgsel.';

$GLOBALS["lang"]['In the case where we store several fields (usually in JSON format) inside a BIGTEXT MySQL field (eg: credentials.credentials - the credentials column in the credentials table), you should use the format'] = 'I tilfælde, hvor vi gemmer flere felter (normalt i JSON format) inde i et BIGTEXT MySQL felt (fx: legitimationsoplysninger. legitimation - den legitimation kolonne i legitimationstabellen), bør du bruge formatet';

$GLOBALS["lang"]['In the command prompt shell, navigate to the download directory (likely <code>cd Downloads</code>).'] = 'I kommandoprompten skal du navigere til download mappen (sandsynligvis <code>cd Downloads</code>).';

$GLOBALS["lang"]['Inactive'] = 'Inaktiv';

$GLOBALS["lang"]['Incomplete'] = 'Ufuldstændig';

$GLOBALS["lang"]['Index'] = 'Indeks';

$GLOBALS["lang"]['India'] = 'Indien';

$GLOBALS["lang"]['Indonesia'] = 'Indonesien';

$GLOBALS["lang"]['Indonesian'] = 'Indonesisk';

$GLOBALS["lang"]['Info'] = 'Info';

$GLOBALS["lang"]['Information only.'] = 'Kun information.';

$GLOBALS["lang"]['Informational'] = 'Informativ';

$GLOBALS["lang"]['initial_size'] = 'Oprindelig størrelse';

$GLOBALS["lang"]['Initial Size'] = 'Oprindelig størrelse';

$GLOBALS["lang"]['Initial login credentials are'] = 'Indledende login legitimation er';

$GLOBALS["lang"]['Initiation'] = 'Indledning';

$GLOBALS["lang"]['inode'] = 'Inode';

$GLOBALS["lang"]['Inode'] = 'Inode';

$GLOBALS["lang"]['Input'] = 'Input';

$GLOBALS["lang"]['Input Type'] = 'Inputtype';

$GLOBALS["lang"]['inputs'] = 'Indgange';

$GLOBALS["lang"]['Inputs'] = 'Indgange';

$GLOBALS["lang"]['Insane'] = 'Insane';

$GLOBALS["lang"]['Insert a new {collection} entry.'] = 'Indsæt en ny {collection} indgang.';

$GLOBALS["lang"]['Insert example data and discover all that Open-AudIT can tell you.'] = 'Indsæt eksempel data og opdage alt, at Open- Audit kan fortælle dig.';

$GLOBALS["lang"]['Insert your Purchased license Key'] = 'Indsæt Købt licens Nøgle';

$GLOBALS["lang"]['install'] = 'Installér';

$GLOBALS["lang"]['Install'] = 'Installér';

$GLOBALS["lang"]['install_date'] = 'Installér dato';

$GLOBALS["lang"]['Install Date'] = 'Installér dato';

$GLOBALS["lang"]['install_directory'] = 'Installér mappe';

$GLOBALS["lang"]['Install Directory'] = 'Installér mappe';

$GLOBALS["lang"]['Install OpenScap if required'] = 'Installér OpenScap hvis nødvendigt';

$GLOBALS["lang"]['install_source'] = 'Installér kilde';

$GLOBALS["lang"]['Install Source'] = 'Installér kilde';

$GLOBALS["lang"]['Install Support'] = 'Installér understøttelse';

$GLOBALS["lang"]['installed_by'] = 'Installeret af';

$GLOBALS["lang"]['Installed By'] = 'Installeret af';

$GLOBALS["lang"]['installed_on'] = 'Installeret på';

$GLOBALS["lang"]['Installed On'] = 'Installeret på';

$GLOBALS["lang"]['Installing'] = 'Installation';

$GLOBALS["lang"]['Installing on Linux'] = 'Installation af Linux';

$GLOBALS["lang"]['Installing on MacOS'] = 'Installation på MacOS';

$GLOBALS["lang"]['Installing on Windows'] = 'Installation af Windows';

$GLOBALS["lang"]['instance'] = 'Retten';

$GLOBALS["lang"]['Instance'] = 'Retten';

$GLOBALS["lang"]['instance_ident'] = 'Retten';

$GLOBALS["lang"]['Instance Ident'] = 'Retten';

$GLOBALS["lang"]['instance_options'] = 'Retten';

$GLOBALS["lang"]['Instance Options'] = 'Retten';

$GLOBALS["lang"]['instance_provider'] = 'Sagsbehandler';

$GLOBALS["lang"]['Instance Provider'] = 'Sagsbehandler';

$GLOBALS["lang"]['instance_reservation_ident'] = 'Retten Forbehold Ident';

$GLOBALS["lang"]['Instance Reservation Ident'] = 'Retten Forbehold Ident';

$GLOBALS["lang"]['instance_state'] = 'Sag';

$GLOBALS["lang"]['Instance State'] = 'Sag';

$GLOBALS["lang"]['instance_tags'] = 'Sagsbetegnelse';

$GLOBALS["lang"]['Instance Tags'] = 'Sagsbetegnelse';

$GLOBALS["lang"]['instance_type'] = 'Sagstype';

$GLOBALS["lang"]['Instance Type'] = 'Sagstype';

$GLOBALS["lang"]['Integer'] = 'Integrer';

$GLOBALS["lang"]['Integration'] = 'Integration';

$GLOBALS["lang"]['integrations'] = 'Integrationer';

$GLOBALS["lang"]['Integrations'] = 'Integrationer';

$GLOBALS["lang"]['integrations_id'] = 'Integrations ID';

$GLOBALS["lang"]['Integrations ID'] = 'Integrations ID';

$GLOBALS["lang"]['integrations_log'] = 'Integrations log';

$GLOBALS["lang"]['Integrations Log'] = 'Integrations log';

$GLOBALS["lang"]['Integrations can be scheduled as desired. This is left to the user.'] = 'Integrationer kan planlægges som ønsket. Dette er overladt til brugeren.';

$GLOBALS["lang"]['Integrations can be scheduled as per Discoveries, Queries, et al.'] = 'Integrationer kan planlægges som pr opdagelser, forespørgsler, et al.';

$GLOBALS["lang"]['Interactive Dashboards'] = 'Interaktive Dashboards';

$GLOBALS["lang"]['Interactive dashboards provide instant visibility into the status of network inventory allowing IT teams to spot newly discovered devices and unusual device behaviour at a glance.'] = 'Interaktive dashboards giver øjeblikkelig synlighed i status af netværk opgørelse gør det muligt IT-hold at spotte nyligt opdagede enheder og usædvanlig adfærd enhed på et øjeblik.';

$GLOBALS["lang"]['interface'] = 'Grænseflade';

$GLOBALS["lang"]['Interface'] = 'Grænseflade';

$GLOBALS["lang"]['interface_id'] = 'Interface-id';

$GLOBALS["lang"]['Interface ID'] = 'Interface-id';

$GLOBALS["lang"]['interface_type'] = 'Grænsetype';

$GLOBALS["lang"]['Interface Type'] = 'Grænsetype';

$GLOBALS["lang"]['Internal'] = 'Intern';

$GLOBALS["lang"]['Internal Audit'] = 'Intern revision';

$GLOBALS["lang"]['Internal Audit & Review'] = 'Intern revision og revision';

$GLOBALS["lang"]['Internal Field Name'] = 'Intern feltnavn';

$GLOBALS["lang"]['Internal ID'] = 'Intern ID';

$GLOBALS["lang"]['Internal JSON array of valid access tokens for this user.'] = 'Intern JSON array af gyldige adgang tokens for denne bruger.';

$GLOBALS["lang"]['Introduction'] = 'Indledning';

$GLOBALS["lang"]['invoice'] = 'Fakturaer';

$GLOBALS["lang"]['Invoice'] = 'Fakturaer';

$GLOBALS["lang"]['invoice_id'] = 'Faktura- id';

$GLOBALS["lang"]['Invoice ID'] = 'Faktura- id';

$GLOBALS["lang"]['invoice_item'] = 'Fakturaelement';

$GLOBALS["lang"]['Invoice Item'] = 'Fakturaelement';

$GLOBALS["lang"]['ios_version'] = 'Ios Version';

$GLOBALS["lang"]['Ios Version'] = 'Ios Version';

$GLOBALS["lang"]['ip_address_external_a'] = 'Ip Adresse Ekstern A';

$GLOBALS["lang"]['Ip Address External A'] = 'Ip Adresse Ekstern A';

$GLOBALS["lang"]['ip_address_external_b'] = 'Ip Adresse Ekstern B';

$GLOBALS["lang"]['Ip Address External B'] = 'Ip Adresse Ekstern B';

$GLOBALS["lang"]['ip_address_internal_a'] = 'Ip Adresse Intern A';

$GLOBALS["lang"]['Ip Address Internal A'] = 'Ip Adresse Intern A';

$GLOBALS["lang"]['ip_address_internal_b'] = 'Ip Adresse Intern B';

$GLOBALS["lang"]['Ip Address Internal B'] = 'Ip Adresse Intern B';

$GLOBALS["lang"]['ip_all_count'] = 'Ip Alle tal';

$GLOBALS["lang"]['Ip All Count'] = 'Ip Alle tal';

$GLOBALS["lang"]['ip_audited_count'] = 'Ip Revideret optælling';

$GLOBALS["lang"]['Ip Audited Count'] = 'Ip Revideret optælling';

$GLOBALS["lang"]['ip_discovered_count'] = 'Ip Discovered Count';

$GLOBALS["lang"]['Ip Discovered Count'] = 'Ip Discovered Count';

$GLOBALS["lang"]['ip_enabled'] = 'Ip aktiveret';

$GLOBALS["lang"]['Ip Enabled'] = 'Ip aktiveret';

$GLOBALS["lang"]['ip_responding_count'] = 'Ip Responderende tæller';

$GLOBALS["lang"]['Ip Responding Count'] = 'Ip Responderende tæller';

$GLOBALS["lang"]['ip_scanned_count'] = 'Ip Scannede greve';

$GLOBALS["lang"]['Ip Scanned Count'] = 'Ip Scannede greve';

$GLOBALS["lang"]['Iran'] = 'Iran';

$GLOBALS["lang"]['Iraq'] = 'Irak';

$GLOBALS["lang"]['Ireland'] = 'Irland';

$GLOBALS["lang"]['Irish'] = 'Irsk';

$GLOBALS["lang"]['Is FRU'] = 'Er FRU';

$GLOBALS["lang"]['is_fru'] = 'Er Fru';

$GLOBALS["lang"]['Is Fru'] = 'Er Fru';

$GLOBALS["lang"]['Is the NMIS server local (on this Open-AudIT server) or remote?'] = 'Er NMIS serveren lokal (på denne Open- Audit- server) eller fjernbetjening?';

$GLOBALS["lang"]['Is this account active? If set to <code>n</code>, the user cannot logon.'] = 'Er kontoen aktiv? Hvis sat til <code>n</code>, brugeren kan ikke logge på.';

$GLOBALS["lang"]['Is this query restricted to licensed customers.'] = 'Er denne forespørgsel begrænset til licenserede kunder.';

$GLOBALS["lang"]['Is this task enabled (y/n).'] = 'Er denne opgave aktiveret (y / n).';

$GLOBALS["lang"]['Isle of Man'] = 'Isle of Man';

$GLOBALS["lang"]['Israel'] = 'Israel';

$GLOBALS["lang"]['Issue'] = 'Emne';

$GLOBALS["lang"]['issuer'] = 'Udsteder';

$GLOBALS["lang"]['Issuer'] = 'Udsteder';

$GLOBALS["lang"]['issuer_name'] = 'Udsteders navn';

$GLOBALS["lang"]['Issuer Name'] = 'Udsteders navn';

$GLOBALS["lang"]['Issues'] = 'Spørgsmål';

$GLOBALS["lang"]['It <i>Just Works</i> with NMIS'] = 'Det <i>Bare virker</i> med NMIS';

$GLOBALS["lang"]['It is available at Menu -> Help ->'] = 'Det er tilgængelig på Menu - > Hjælp - >';

$GLOBALS["lang"]['It is important to note that when Open-AudIT determines a match any properties set to <i>y</i> must match exactly (and not be blank) in order for Open-AudIT to determine that the discovered device matches a device already in the database. If none of the properties marked <i>y</i> match, then a new device entry will be created, which could result in duplicate device entries. In situations where properties are duplicated, for example a dbus_id is copied during a VM clone, then an existing device may incorrectly get overwritten/updated rather then a new entry being created resulting in missing devices.'] = 'Det er vigtigt at bemærke, at når Open- Audit bestemmer en match nogen egenskaber indstillet til <i>y</i> skal matche nøjagtigt (og ikke være blank) for Open- Audit at afgøre, at den opdagede enhed matcher en enhed allerede i databasen. Hvis ingen af egenskaberne er markeret <i>y</i> match, så en ny enhed indgang vil blive oprettet, hvilket kunne resultere i duplikerede enhedsindgange. I situationer, hvor egenskaber er duplikeret, for eksempel en dbus _ id kopieres under en VM klon, så en eksisterende enhed kan fejlagtigt få overskrevet / opdateret snarere derefter en ny indgang bliver oprettet, hvilket resulterer i manglende enheder.';

$GLOBALS["lang"]['It is not uncommon to have an overlapping address space in a given Organisation. Not ideal, but not uncommon.'] = 'Det er ikke ualmindeligt at have et overlappende adresseområde i en given organisation. Ikke ideelt, men ikke ualmindeligt.';

$GLOBALS["lang"]['It is very common for second tier motherboard manufacturers to not set this, to set it to all <i>0</i>s or even all <i>F</i>s.'] = 'Det er meget almindeligt, at andet niveau bundkort producenter ikke sætte dette, at sætte det til alle <i>0</i>s eller endda alle <i>F</i>b.';

$GLOBALS["lang"]['Italian'] = 'Italiensk';

$GLOBALS["lang"]['Italy'] = 'Italien';

$GLOBALS["lang"]['Items not in Baseline'] = 'Poster uden for Baseline';

$GLOBALS["lang"]['JSON'] = 'JSON';

$GLOBALS["lang"]['JSON to Import'] = 'JSON at importere';

$GLOBALS["lang"]['Jamaica'] = 'Jamaica';

$GLOBALS["lang"]['January'] = 'Januar';

$GLOBALS["lang"]['Japan'] = 'Japan';

$GLOBALS["lang"]['Japanese'] = 'Japansk';

$GLOBALS["lang"]['Jersey'] = 'Jersey';

$GLOBALS["lang"]['Jordan'] = 'Jordan';

$GLOBALS["lang"]['July'] = 'Juli';

$GLOBALS["lang"]['June'] = 'Juni';

$GLOBALS["lang"]['Kazakhstan'] = 'Kasakhstan';

$GLOBALS["lang"]['Kenya'] = 'Kenya';

$GLOBALS["lang"]['kernel_version'] = 'Kerneversion';

$GLOBALS["lang"]['Kernel Version'] = 'Kerneversion';

$GLOBALS["lang"]['Key'] = 'Nøgle';

$GLOBALS["lang"]['Key Components'] = 'Nøglekomponenter';

$GLOBALS["lang"]['Key Password (optional)'] = 'Nøglekodeord (valgfrit)';

$GLOBALS["lang"]['keys'] = 'Nøgler';

$GLOBALS["lang"]['Keys'] = 'Nøgler';

$GLOBALS["lang"]['Kiribati'] = 'Kiribati';

$GLOBALS["lang"]['Korea'] = 'Korea';

$GLOBALS["lang"]['Korean'] = 'Koreansk';

$GLOBALS["lang"]['Kuwait'] = 'Kuwait';

$GLOBALS["lang"]['Kyrgyz'] = 'Kirgisistan';

$GLOBALS["lang"]['Kyrgyz Republic'] = 'Den Kirgisiske Republik';

$GLOBALS["lang"]['LDAP Group'] = 'LDAP Group';

$GLOBALS["lang"]['LDAP was searched for this user and their account was found.'] = 'LDAP blev søgt efter denne bruger og deres konto blev fundet.';

$GLOBALS["lang"]['LDAP was searched for this user and their account was not found. Check the LDAP server logs. The user credentials have worked, but the user was not found. Also check you have specified the correct Base DN attribute when you created the LDAP Server in Open-AudIT.'] = 'LDAP blev ledt efter denne bruger, og deres konto blev ikke fundet. Tjek LDAP- serverens logfiler. Brugerlegitimationerne har fungeret, men brugeren blev ikke fundet. Kontrollér også, at du har angivet den korrekte Base DN attribut, da du oprettede LDAP Server i Open- Audit.';

$GLOBALS["lang"]['lang'] = 'Lang';

$GLOBALS["lang"]['Lang'] = 'Lang';

$GLOBALS["lang"]['language'] = 'Sprog';

$GLOBALS["lang"]['Language'] = 'Sprog';

$GLOBALS["lang"]['Lao'] = 'Lao';

$GLOBALS["lang"]['last_changed'] = 'Sidste ændret';

$GLOBALS["lang"]['Last Changed'] = 'Sidste ændret';

$GLOBALS["lang"]['last_finished'] = 'Seneste afsluttet';

$GLOBALS["lang"]['Last Finished'] = 'Seneste afsluttet';

$GLOBALS["lang"]['last_logon'] = 'Sidste logon';

$GLOBALS["lang"]['Last Logon'] = 'Sidste logon';

$GLOBALS["lang"]['Last Name'] = 'Efternavn';

$GLOBALS["lang"]['last_os_update'] = 'Seneste Os opdatering';

$GLOBALS["lang"]['Last Os Update'] = 'Seneste Os opdatering';

$GLOBALS["lang"]['last_result'] = 'Seneste resultat';

$GLOBALS["lang"]['Last Result'] = 'Seneste resultat';

$GLOBALS["lang"]['last_run'] = 'Sidste kørsel';

$GLOBALS["lang"]['Last Run'] = 'Sidste kørsel';

$GLOBALS["lang"]['last_seen'] = 'Seneste set';

$GLOBALS["lang"]['Last Seen'] = 'Seneste set';

$GLOBALS["lang"]['last_seen_by'] = 'Seneste set Af';

$GLOBALS["lang"]['Last Seen By'] = 'Seneste set Af';

$GLOBALS["lang"]['last_user'] = 'Sidste bruger';

$GLOBALS["lang"]['Last User'] = 'Sidste bruger';

$GLOBALS["lang"]['Last up is WMI. For Windows as in Linux, a user with Administrator level access is preferred (see Target Client Configuration on the wiki).'] = 'Det sidste er WMI. For Windows som i Linux, er en bruger med Administrator niveau adgang foretrækkes (se Target klient konfiguration på wiki).';

$GLOBALS["lang"]['lastModified'] = 'LastModificeret';

$GLOBALS["lang"]['LastModified'] = 'LastModificeret';

$GLOBALS["lang"]['latitude'] = 'Breddegrad';

$GLOBALS["lang"]['Latitude'] = 'Breddegrad';

$GLOBALS["lang"]['Latvia'] = 'Letland';

$GLOBALS["lang"]['Latvian'] = 'Lettisk';

$GLOBALS["lang"]['Layout'] = 'Layout';

$GLOBALS["lang"]['ldap'] = 'Ldap Formand';

$GLOBALS["lang"]['Ldap'] = 'Ldap Formand';

$GLOBALS["lang"]['ldap_base_dn'] = 'Ldap Base Dn';

$GLOBALS["lang"]['Ldap Base Dn'] = 'Ldap Base Dn';

$GLOBALS["lang"]['ldap_dn_account'] = 'Ldap Dn-konto';

$GLOBALS["lang"]['Ldap Dn Account'] = 'Ldap Dn-konto';

$GLOBALS["lang"]['ldap_dn_password'] = 'Ldap Dn Password';

$GLOBALS["lang"]['Ldap Dn Password'] = 'Ldap Dn Password';

$GLOBALS["lang"]['Learn About'] = 'Lær om';

$GLOBALS["lang"]['Learn More'] = 'Lær mere';

$GLOBALS["lang"]['lease_expiry_date'] = 'Leasingudløbsdato';

$GLOBALS["lang"]['Lease Expiry Date'] = 'Leasingudløbsdato';

$GLOBALS["lang"]['Lebanon'] = 'Libanon';

$GLOBALS["lang"]['legal_requirements'] = 'Lovkrav';

$GLOBALS["lang"]['Legal Requirements'] = 'Lovkrav';

$GLOBALS["lang"]['Lesotho'] = 'Lesotho';

$GLOBALS["lang"]['Less Than'] = 'Mindre end';

$GLOBALS["lang"]['Less Than or Equals'] = 'Mindre end eller lig med';

$GLOBALS["lang"]['Lets set the logging to debug. Copy the file:'] = 'Lad os indstille logning til fejlretning. Kopiér filen:';

$GLOBALS["lang"]['level'] = 'Niveau';

$GLOBALS["lang"]['Level'] = 'Niveau';

$GLOBALS["lang"]['Level of privileges needed to exploit (None, Low, High).'] = 'Niveau af rettigheder, der er nødvendige for at udnytte (Ingen, Lav, Høj).';

$GLOBALS["lang"]['Liberia'] = 'Liberia';

$GLOBALS["lang"]['Libraries (ie, code that another program might include). These are typically items like Wordpress extensions, drupal extensions, node.js libraries, Android / iPhone / Windows libraries, python libraries, etc.'] = 'Biblioteker (dvs. kode, som et andet program kan omfatte). Disse er typisk emner som wordpress udvidelser, drupal udvidelser, node.js biblioteker, Android / iPhone / Windows biblioteker, python biblioteker, osv.';

$GLOBALS["lang"]['Libyan Arab Jamahiriya'] = 'Libyan Arab Jamahiriya';

$GLOBALS["lang"]['License'] = 'Licens';

$GLOBALS["lang"]['License Key'] = 'Licensnøgle';

$GLOBALS["lang"]['License Required'] = 'Krævet licens';

$GLOBALS["lang"]['Licensed users are free to add or modify the rules as you see fit. If you have a device with an SNMP OID that does not match a model already in the file - now you can add it easily. No more waiting for us to provide a patch and add it to the code base for you.<br><br>When you create a Rules entry, you will need to provide a name and a list of inputs and outputs. The inputs and outputs are stored as JSON arrays within the database.<br><br>Inputs have a table and attribute, an operator and a value. When executing the condition, it works thus: If $table . $attribute $operator $value then apply the outputs.<br><br>An example rule to match an SNMP OID and set the model is below.<br>'] = 'Licenserede brugere kan frit tilføje eller ændre reglerne, som du ønsker. Hvis du har en enhed med en SNMP OID, der ikke matcher en model allerede i filen - nu kan du tilføje det nemt. Ikke mere ventetid for os at give en patch og tilføje det til den kode base for dig.<br/><br/>Når du opretter en Rules post, skal du give et navn og en liste over input og udgange. Indgange og udgange gemmes som JSON arrays i databasen.<br/><br/>Input har en tabel og attribut, en operatør og en værdi. Ved udførelse af betingelsen virker det således: Hvis $tabel. $attribut $operatør $værdi derefter anvende udgange.<br/><br/>Et eksempel regel til at matche en SNMP OID og indstille modellen er nedenfor.<br/>';

$GLOBALS["lang"]['Licenses'] = 'Licenser';

$GLOBALS["lang"]['Liechtenstein'] = 'Liechtenstein';

$GLOBALS["lang"]['Like'] = 'Ligesom';

$GLOBALS["lang"]['Like most other attributes, Additional Fields can be bulk edited. Use the Bulk Edit function as you normally would and you will see the Additional Fields are available for input.'] = 'Som de fleste andre attributter, kan Yderligere felter redigeres bulk. Brug Bulk Redigér-funktionen som du normalt ville, og du vil se de ekstra felter er tilgængelige for input.';

$GLOBALS["lang"]['Like versus Equals'] = 'Like versus Equals';

$GLOBALS["lang"]['limit'] = 'Grænse';

$GLOBALS["lang"]['Limit'] = 'Grænse';

$GLOBALS["lang"]['Limit the query to the first X items.'] = 'Begræns forespørgslen til de første X- punkter.';

$GLOBALS["lang"]['Limited to 100 rows.'] = 'Begrænset til 100 rækker.';

$GLOBALS["lang"]['line_amount'] = 'Linjebeløb';

$GLOBALS["lang"]['Line Amount'] = 'Linjebeløb';

$GLOBALS["lang"]['Line Graph'] = 'Linjediagram';

$GLOBALS["lang"]['line_number_a'] = 'Linjenummer A';

$GLOBALS["lang"]['Line Number A'] = 'Linjenummer A';

$GLOBALS["lang"]['line_number_b'] = 'Linjenummer B';

$GLOBALS["lang"]['Line Number B'] = 'Linjenummer B';

$GLOBALS["lang"]['line_text'] = 'Linjetekst';

$GLOBALS["lang"]['Line Text'] = 'Linjetekst';

$GLOBALS["lang"]['Line charts must return date or my_date, description or my_description and count.'] = 'Linjediagrammer skal returnere dato eller min _ date, beskrivelse eller min _ beskrivelse og tælle.';

$GLOBALS["lang"]['link'] = 'Link';

$GLOBALS["lang"]['Link'] = 'Link';

$GLOBALS["lang"]['Link (Advanced)'] = 'Link (Advanced)';

$GLOBALS["lang"]['Linked Files'] = 'Sammenkædede filer';

$GLOBALS["lang"]['links'] = 'Links';

$GLOBALS["lang"]['Links'] = 'Links';

$GLOBALS["lang"]['Links this discovery to the associated cloud (if required). Links to <code>clouds.id</code>.'] = 'Links denne opdagelse til den tilknyttede sky (hvis påkrævet). Links til <code>clouds.id</code>.';

$GLOBALS["lang"]['Links to <code>discovery_scan_options.id</code>.'] = 'Links til <code>discovery_scan_options.id</code>.';

$GLOBALS["lang"]['Links to <code>standards.id</code>'] = 'Links til <code>standards.id</code>';

$GLOBALS["lang"]['Links to <standards_policies.id</code>'] = 'Links til <standards_policies.id< code=""></standards_policies.id<>';

$GLOBALS["lang"]['Linux'] = 'Linux';

$GLOBALS["lang"]['Linux Packages'] = 'Linux-pakker';

$GLOBALS["lang"]['List'] = 'Liste';

$GLOBALS["lang"]['List All NMAP Ports, Protocols and Programs for Each Device'] = 'Liste over alle NMAP-porte, protokoller og programmer for hver enhed';

$GLOBALS["lang"]['List Devices'] = 'Listeenheder';

$GLOBALS["lang"]['List Discoveries'] = 'Listeopdagelser';

$GLOBALS["lang"]['list_table_format'] = 'Liste over tabelformat';

$GLOBALS["lang"]['List Table Format'] = 'Liste over tabelformat';

$GLOBALS["lang"]['List Tables'] = 'Liste over tabeller';

$GLOBALS["lang"]['Lithuania'] = 'Litauen';

$GLOBALS["lang"]['Lithuanian'] = 'litauisk';

$GLOBALS["lang"]['Load Balancing'] = 'Belastning';

$GLOBALS["lang"]['Local'] = 'Lokal';

$GLOBALS["lang"]['Local Area Network'] = 'Netværk for lokalområdet';

$GLOBALS["lang"]['local_port'] = 'Lokal havn';

$GLOBALS["lang"]['Local Port'] = 'Lokal havn';

$GLOBALS["lang"]['Local area network'] = 'Lokalnet';

$GLOBALS["lang"]['Localhost'] = 'Localhost';

$GLOBALS["lang"]['Localisation'] = 'Lokalisering';

$GLOBALS["lang"]['Location'] = 'Sted';

$GLOBALS["lang"]['Location A'] = 'Sted A';

$GLOBALS["lang"]['Location B'] = 'Sted B';

$GLOBALS["lang"]['location_id'] = 'Sted';

$GLOBALS["lang"]['Location ID'] = 'Sted';

$GLOBALS["lang"]['location_id_a'] = 'Sted ID A';

$GLOBALS["lang"]['Location ID A'] = 'Sted ID A';

$GLOBALS["lang"]['location_id_b'] = 'Sted ID B';

$GLOBALS["lang"]['Location ID B'] = 'Sted ID B';

$GLOBALS["lang"]['location_latitude'] = 'Placering Breddegrad';

$GLOBALS["lang"]['Location Latitude'] = 'Placering Breddegrad';

$GLOBALS["lang"]['location_level'] = 'Placeringsniveau';

$GLOBALS["lang"]['Location Level'] = 'Placeringsniveau';

$GLOBALS["lang"]['location_longitude'] = 'Placering Længdegrad';

$GLOBALS["lang"]['Location Longitude'] = 'Placering Længdegrad';

$GLOBALS["lang"]['Location Name'] = 'Sted';

$GLOBALS["lang"]['location_rack'] = 'Placering Rack';

$GLOBALS["lang"]['Location Rack'] = 'Placering Rack';

$GLOBALS["lang"]['location_rack_position'] = 'Placering Rack Position';

$GLOBALS["lang"]['Location Rack Position'] = 'Placering Rack Position';

$GLOBALS["lang"]['location_rack_size'] = 'Placering Rack størrelse';

$GLOBALS["lang"]['Location Rack Size'] = 'Placering Rack størrelse';

$GLOBALS["lang"]['location_room'] = 'Lokalrum';

$GLOBALS["lang"]['Location Room'] = 'Lokalrum';

$GLOBALS["lang"]['location_suite'] = 'Placering Suite';

$GLOBALS["lang"]['Location Suite'] = 'Placering Suite';

$GLOBALS["lang"]['Locations'] = 'Placering';

$GLOBALS["lang"]['Locations in this'] = 'Placeringer i dette';

$GLOBALS["lang"]['log'] = 'Log';

$GLOBALS["lang"]['Log'] = 'Log';

$GLOBALS["lang"]['log_format'] = 'Logformat';

$GLOBALS["lang"]['Log Format'] = 'Logformat';

$GLOBALS["lang"]['Log Line'] = 'Loglinje';

$GLOBALS["lang"]['log_path'] = 'Logsti';

$GLOBALS["lang"]['Log Path'] = 'Logsti';

$GLOBALS["lang"]['log_rotation'] = 'Logrotation';

$GLOBALS["lang"]['Log Rotation'] = 'Logrotation';

$GLOBALS["lang"]['log_status'] = 'Logstatus';

$GLOBALS["lang"]['Log Status'] = 'Logstatus';

$GLOBALS["lang"]['Logging in'] = 'Indlogning';

$GLOBALS["lang"]['Logical Cores '] = 'Logiske linjer ';

$GLOBALS["lang"]['logical_count'] = 'Logisk tæller';

$GLOBALS["lang"]['Logical Count'] = 'Logisk tæller';

$GLOBALS["lang"]['Logout'] = 'Logout';

$GLOBALS["lang"]['Logs'] = 'Logge';

$GLOBALS["lang"]['longitude'] = 'Længdegrad';

$GLOBALS["lang"]['Longitude'] = 'Længdegrad';

$GLOBALS["lang"]['low'] = 'Lav';

$GLOBALS["lang"]['Low'] = 'Lav';

$GLOBALS["lang"]['Lower Case'] = 'Lavere sag';

$GLOBALS["lang"]['Lowercase Hostname'] = 'Lowercase Hostname';

$GLOBALS["lang"]['Luxembourg'] = 'Luxembourg';

$GLOBALS["lang"]['MAC Address'] = 'MAC-adresse';

$GLOBALS["lang"]['MAC Manufacturer'] = 'MAC Fremstiller';

$GLOBALS["lang"]['mac'] = 'Mac';

$GLOBALS["lang"]['Mac'] = 'Mac';

$GLOBALS["lang"]['Mac Address'] = 'Mac- adresse';

$GLOBALS["lang"]['MacOS'] = 'MacOS';

$GLOBALS["lang"]['MacOS Packages'] = 'MacOS-pakker';

$GLOBALS["lang"]['Macao'] = 'Macao';

$GLOBALS["lang"]['Macedonia'] = 'Makedonien';

$GLOBALS["lang"]['Madagascar'] = 'Madagaskar';

$GLOBALS["lang"]['Maintain records of risk assessments and treatments'] = 'Opretholde fortegnelser over risikovurderinger og behandlinger';

$GLOBALS["lang"]['maintenance_expires'] = 'Vedligeholdelsesudgifter';

$GLOBALS["lang"]['Maintenance Expires'] = 'Vedligeholdelsesudgifter';

$GLOBALS["lang"]['Make My Default Dashboard'] = 'Lav min standard instrumentbræt';

$GLOBALS["lang"]['Make this install a Collector'] = 'Gør dette installere en Collector';

$GLOBALS["lang"]['Malawi'] = 'Malawi';

$GLOBALS["lang"]['Malay'] = 'Malay Formand';

$GLOBALS["lang"]['Malaysia'] = 'Malaysia';

$GLOBALS["lang"]['Maldives'] = 'Maldiverne';

$GLOBALS["lang"]['Mali'] = 'Mali';

$GLOBALS["lang"]['Malta'] = 'Malta';

$GLOBALS["lang"]['Manage'] = 'Håndtering';

$GLOBALS["lang"]['Manage Licenses'] = 'Håndtér licenser';

$GLOBALS["lang"]['Manage in NMIS'] = 'Håndtering i NMIS';

$GLOBALS["lang"]['Manage incidents and nonconformities'] = 'Håndtér hændelser og afvigelser';

$GLOBALS["lang"]['Managed'] = 'Håndteret';

$GLOBALS["lang"]['managed_by'] = 'Forvaltet af';

$GLOBALS["lang"]['Managed By'] = 'Forvaltet af';

$GLOBALS["lang"]['Manual Input'] = 'Manuel input';

$GLOBALS["lang"]['Manually set by user, defaults to Production.'] = 'Manuel indstilling af brugeren, standard til produktion.';

$GLOBALS["lang"]['Manually set by user.'] = 'Manuelt indstillet af brugeren.';

$GLOBALS["lang"]['manufacture_date'] = 'Fremstilling Dato';

$GLOBALS["lang"]['Manufacture Date'] = 'Fremstilling Dato';

$GLOBALS["lang"]['manufacturer'] = 'Fremstiller';

$GLOBALS["lang"]['Manufacturer'] = 'Fremstiller';

$GLOBALS["lang"]['manufacturer_code'] = 'Fabrikantens kode';

$GLOBALS["lang"]['Manufacturer Code'] = 'Fabrikantens kode';

$GLOBALS["lang"]['Map'] = 'Kort';

$GLOBALS["lang"]['maps'] = 'Kort';

$GLOBALS["lang"]['Maps'] = 'Kort';

$GLOBALS["lang"]['March'] = 'Marts';

$GLOBALS["lang"]['Marshall Islands'] = 'Marshalløerne';

$GLOBALS["lang"]['Martinique'] = 'Martinique';

$GLOBALS["lang"]['mask'] = 'Mask';

$GLOBALS["lang"]['Mask'] = 'Mask';

$GLOBALS["lang"]['Match'] = 'Match';

$GLOBALS["lang"]['match_options'] = 'Match- tilvalg';

$GLOBALS["lang"]['Match Options'] = 'Match- tilvalg';

$GLOBALS["lang"]['Match Order'] = 'Matchrækkefølge';

$GLOBALS["lang"]['Match Process'] = 'Match- proces';

$GLOBALS["lang"]['match_string'] = 'Matchstreng';

$GLOBALS["lang"]['Match String'] = 'Matchstreng';

$GLOBALS["lang"]['Matching Attribute'] = 'Matchende attribut';

$GLOBALS["lang"]['Matching Devices - Including OrgID'] = 'Matchende enheder - herunder Orgid';

$GLOBALS["lang"]['Matching Linux Devices'] = 'Matchende Linux-enheder';

$GLOBALS["lang"]['Matching is conducted in the following order'] = 'Matching udføres i følgende rækkefølge:';

$GLOBALS["lang"]['maturity_level'] = 'Løbetid';

$GLOBALS["lang"]['Maturity Level'] = 'Løbetid';

$GLOBALS["lang"]['maturity_score'] = 'Løbetidskurv';

$GLOBALS["lang"]['Maturity Score'] = 'Løbetidskurv';

$GLOBALS["lang"]['Mauritania'] = 'Mauretanien';

$GLOBALS["lang"]['Mauritius'] = 'Mauritius';

$GLOBALS["lang"]['max_file_size'] = 'Maks. filstørrelse';

$GLOBALS["lang"]['Max File Size'] = 'Maks. filstørrelse';

$GLOBALS["lang"]['Max Length'] = 'Maks. længde';

$GLOBALS["lang"]['max_size'] = 'Maks. størrelse';

$GLOBALS["lang"]['Max Size'] = 'Maks. størrelse';

$GLOBALS["lang"]['May'] = 'Maj';

$GLOBALS["lang"]['Mayotte'] = 'Mayotte';

$GLOBALS["lang"]['Measures the likelihood of the vulnerability being attacked, and is based on the current state of exploit techniques, exploit code availability, or active, “in-the-wild” exploitation.'] = 'Måler sandsynligheden for, at sårbarheden bliver angrebet, og er baseret på den nuværende situation med udnyttelse af teknikker, udnytte kode tilgængelighed, eller aktiv, "in-the-wild" udnyttelse.';

$GLOBALS["lang"]['medium'] = 'Mellem';

$GLOBALS["lang"]['Medium'] = 'Mellem';

$GLOBALS["lang"]['members'] = 'Medlemmerne';

$GLOBALS["lang"]['Members'] = 'Medlemmerne';

$GLOBALS["lang"]['memory'] = 'Hukommelse';

$GLOBALS["lang"]['Memory'] = 'Hukommelse';

$GLOBALS["lang"]['memory_count'] = 'Hukommelsestælling';

$GLOBALS["lang"]['Memory Count'] = 'Hukommelsestælling';

$GLOBALS["lang"]['memory_slot_count'] = 'Hukommelse Slot tæller';

$GLOBALS["lang"]['Memory Slot Count'] = 'Hukommelse Slot tæller';

$GLOBALS["lang"]['menu_category'] = 'Menukategori';

$GLOBALS["lang"]['Menu Category'] = 'Menukategori';

$GLOBALS["lang"]['menu_display'] = 'Menuvisning';

$GLOBALS["lang"]['Menu Display'] = 'Menuvisning';

$GLOBALS["lang"]['message'] = 'Meddelelse';

$GLOBALS["lang"]['Message'] = 'Meddelelse';

$GLOBALS["lang"]['meta_last_changed'] = 'Meta senest ændret';

$GLOBALS["lang"]['Meta Last Changed'] = 'Meta senest ændret';

$GLOBALS["lang"]['metric'] = 'Metric';

$GLOBALS["lang"]['Metric'] = 'Metric';

$GLOBALS["lang"]['Metropolitan Area Network'] = 'Metropolitan Area Network';

$GLOBALS["lang"]['Metropolitan area network'] = 'Nettet af storbyområder';

$GLOBALS["lang"]['Mexico'] = 'Mexico';

$GLOBALS["lang"]['Micronesia'] = 'Mikronesien';

$GLOBALS["lang"]['Microsoft Azure Fields'] = 'Microsoft Azure felter';

$GLOBALS["lang"]['microtime'] = 'Mikrotid';

$GLOBALS["lang"]['Microtime'] = 'Mikrotid';

$GLOBALS["lang"]['minute'] = 'Minute';

$GLOBALS["lang"]['Minute'] = 'Minute';

$GLOBALS["lang"]['Minutes'] = 'Protokol';

$GLOBALS["lang"]['Minutes Since last Audit are Greater than'] = 'Protokol Siden sidste revision er større end';

$GLOBALS["lang"]['model'] = 'Model';

$GLOBALS["lang"]['Model'] = 'Model';

$GLOBALS["lang"]['model_family'] = 'Model familie';

$GLOBALS["lang"]['Model Family'] = 'Model familie';

$GLOBALS["lang"]['Modified'] = 'Ændret';

$GLOBALS["lang"]['Modifying an Existing Script'] = 'Ændr et eksisterende script';

$GLOBALS["lang"]['module'] = 'Modul';

$GLOBALS["lang"]['Module'] = 'Modul';

$GLOBALS["lang"]['module_index'] = 'Modul indeks';

$GLOBALS["lang"]['Module Index'] = 'Modul indeks';

$GLOBALS["lang"]['Modules'] = 'Moduler';

$GLOBALS["lang"]['Moldova'] = 'Moldova';

$GLOBALS["lang"]['Monaco'] = 'Monaco';

$GLOBALS["lang"]['Monday'] = 'Mandag';

$GLOBALS["lang"]['Mongolia'] = 'Mongoliet';

$GLOBALS["lang"]['monitor'] = 'Overvågning';

$GLOBALS["lang"]['Monitor'] = 'Overvågning';

$GLOBALS["lang"]['Monitor and measure ISMS performance'] = 'Overvågning og måling af ISMS-ydeevne';

$GLOBALS["lang"]['Montenegro'] = 'Montenegro';

$GLOBALS["lang"]['month'] = 'Måned';

$GLOBALS["lang"]['Month'] = 'Måned';

$GLOBALS["lang"]['Montserrat'] = 'Montserrat Formand';

$GLOBALS["lang"]['More Information'] = 'Mere information';

$GLOBALS["lang"]['More Secure'] = 'Mere sikker';

$GLOBALS["lang"]['More elaborate SQL can used to group attributes within a range. Below shows the SQL for devices not seen in a pie chart grouped by last seen date ranges.'] = 'Mere omfattende SQL kan bruges til at gruppere attributter inden for et interval. Nedenfor vises SQL for enheder, der ikke ses i et tærtediagram grupperet efter seneste set datointervaller.';

$GLOBALS["lang"]['More information about debugging this can be found on a helpful Stack Overflow thread'] = 'Mere information om debugging dette kan findes på en hjælpsom Stack Overflow tråd';

$GLOBALS["lang"]['Morocco'] = 'Marokko';

$GLOBALS["lang"]['Most likely the Windows firewall (or a third party firewall) is denying the connection attempt.<br><br>Please log on to the target Windows machine and check the firewall settings.'] = 'Mest sandsynligt Windows firewall (eller en tredjepart firewall) benægter forbindelsen forsøg.<br/><br/>Vær venlig at logge på målet Windows maskine og kontrollere firewall indstillinger.';

$GLOBALS["lang"]['Most of Open-AudIT is Licensed with GNU AGPL.'] = 'De fleste af Open- Audit er licenseret med GNU AGPL.';

$GLOBALS["lang"]['motherboard'] = 'Motherboard';

$GLOBALS["lang"]['Motherboard'] = 'Motherboard';

$GLOBALS["lang"]['mount_point'] = 'Monteringspunkt';

$GLOBALS["lang"]['Mount Point'] = 'Monteringspunkt';

$GLOBALS["lang"]['mount_type'] = 'Monteringstype';

$GLOBALS["lang"]['Mount Type'] = 'Monteringstype';

$GLOBALS["lang"]['Mozambique'] = 'Mozambique';

$GLOBALS["lang"]['Must Respond To Ping. If set, Nmap will fist attempt to send and listen for an ICMP response. If the device does not respond, no further scanning will occur.<br>Previously a device did not have to respond to a ping for Open-AudIT to continue scanning.'] = 'Må svare på Ping. Hvis sat, Nmap vil knytnæve forsøg på at sende og lytte til en ICMP reaktion. Hvis enheden ikke reagerer, vil der ikke ske yderligere scanning.<br/>Tidligere behøvede en enhed ikke at reagere på en ping for Open- Audit at fortsætte scanningen.';

$GLOBALS["lang"]['Must Respond to Ping'] = 'Skal reagere på Ping';

$GLOBALS["lang"]['My AntiVirus is prompting me to deny/allow things'] = 'Min antivirus beder mig om at nægte / tillade ting';

$GLOBALS["lang"]['My time is off in Open-AudIT'] = 'Min tid er gået i Open- Audit';

$GLOBALS["lang"]['Myanmar'] = 'Myanmar';

$GLOBALS["lang"]['N+1'] = 'N + 1';

$GLOBALS["lang"]['N+M'] = 'N + M';

$GLOBALS["lang"]['N-to-1'] = '- Nej.';

$GLOBALS["lang"]['N-to-N'] = 'N-to-N';

$GLOBALS["lang"]['NMIS Business Service'] = 'NMIS Business Service';

$GLOBALS["lang"]['NMIS Customer'] = 'NMIS kunde';

$GLOBALS["lang"]['NMIS Device Options'] = 'NMIS enhedsindstillinger';

$GLOBALS["lang"]['NMIS Device Selection'] = 'Valg af NMIS- enhed';

$GLOBALS["lang"]['NMIS Field Name'] = 'NMIS-feltnavn';

$GLOBALS["lang"]['NMIS Field Type'] = 'NMIS-felttype';

$GLOBALS["lang"]['NMIS Group'] = 'NMIS Group';

$GLOBALS["lang"]['NMIS Poller'] = 'NMIS Poller';

$GLOBALS["lang"]['NMIS Role'] = 'NMIS Rolle';

$GLOBALS["lang"]['NOTE'] = 'BEMÆRKNING';

$GLOBALS["lang"]['NOTE #2'] = 'NOTE # 2';

$GLOBALS["lang"]['NOTE - For more info on DateTime formats, see'] = 'OBS - For mere information om DateTime formater, se';

$GLOBALS["lang"]['NOTE - If you request a downloaded CSV, XML or JSON format (either a single credential, or the complete collection) the actual credential details will be sent. Not the encrypted string, the actual username, password, community string, etc. Any sensitive details are not displayed in the web GUI, but are made available via other formats. To prevent this export a configuration item is available called decrypt_credentials.'] = 'BEMÆRK - Hvis du beder om et downloadet CSV, XML eller JSON format (enten en enkelt kreditværdi, eller den komplette samling) de faktiske kreditoplysninger vil blive sendt. Ikke den krypterede streng, det faktiske brugernavn, kodeord, fællesskabsstreng osv. Eventuelle følsomme oplysninger vises ikke i webtjenesten, men gøres tilgængelige via andre formater. For at forhindre denne eksport er et konfigurationselement tilgængeligt kaldet decrypt _ legitimations.';

$GLOBALS["lang"]['NOTE - The curly brackets in the data filed should be used as-is (not replaced as per other examples above).'] = 'BEMÆRK - De krøllede parenteser i de indsendte data skal bruges as- is (ikke erstattet som i andre eksempler ovenfor).';

$GLOBALS["lang"]['NOTE - You can prevent plain text credentials being displayed below by setting the configuration item for <code>decrypt_credentials</code> to <code>n</code>.'] = 'BEMÆRK - Du kan forhindre almindelig tekst legitimation vises nedenfor ved at indstille konfigurationselementet for <code>decrypt_credentials</code> til <code>n</code>.';

$GLOBALS["lang"]['name'] = 'Navn';

$GLOBALS["lang"]['Name'] = 'Navn';

$GLOBALS["lang"]['Name: The name you are giving to this field. Ideally it should be unique.'] = 'Navn: Navnet du giver til dette felt. Ideelt set burde det være unikt.';

$GLOBALS["lang"]['Namibia'] = 'Namibia';

$GLOBALS["lang"]['Nauru'] = 'Nauru';

$GLOBALS["lang"]['Nepal'] = 'Nepal';

$GLOBALS["lang"]['net_index'] = 'Nettoindeks';

$GLOBALS["lang"]['Net Index'] = 'Nettoindeks';

$GLOBALS["lang"]['Netherlands Antilles'] = 'De Nederlandske Antiller';

$GLOBALS["lang"]['Netherlands the'] = 'Nederlandene';

$GLOBALS["lang"]['netmask'] = 'Netmask';

$GLOBALS["lang"]['Netmask'] = 'Netmask';

$GLOBALS["lang"]['netstat'] = 'Netstat';

$GLOBALS["lang"]['Netstat'] = 'Netstat';

$GLOBALS["lang"]['Netstat Policies'] = 'Netstat-politikker';

$GLOBALS["lang"]['Netstat Ports'] = 'Netstat Ports';

$GLOBALS["lang"]['Netstat Ports use a combination of port number, protocol and program. If all are present the policy passes.'] = 'Netstat Ports bruger en kombination af portnummer, protokol og program. Hvis alle er til stede, går politikken videre.';

$GLOBALS["lang"]['Network'] = 'Netværk';

$GLOBALS["lang"]['network_address'] = 'Netværksadresse';

$GLOBALS["lang"]['Network Address'] = 'Netværksadresse';

$GLOBALS["lang"]['Network Discovery'] = 'Netværkssøgning';

$GLOBALS["lang"]['network_domain'] = 'Netværksdomæne';

$GLOBALS["lang"]['Network Domain'] = 'Netværksdomæne';

$GLOBALS["lang"]['Network Types'] = 'Netværkstyper';

$GLOBALS["lang"]['Network type is set to Local Area Network by default, but can be changed by the user as they see fit. The types supported are below (with thanks to Wikipedia).<br><br>A network can be characterized by its physical capacity or its organizational purpose. Use of the network, including user authorization and access rights, differ accordingly.'] = 'Netværkstype er indstillet til Local Area Network som standard, men kan ændres af brugeren som de ønsker. De understøttede typer er nedenfor (med tak til Wikipedia).<br/><br/>Et netværk kan karakteriseres ved sin fysiske kapacitet eller sit organisatoriske formål. Anvendelsen af nettet, herunder brugergodkendelse og adgangsrettigheder, er i overensstemmelse hermed forskellig.';

$GLOBALS["lang"]['networks'] = 'Netværk';

$GLOBALS["lang"]['Networks'] = 'Netværk';

$GLOBALS["lang"]['Networks Generated By'] = 'Netværk genereret af';

$GLOBALS["lang"]['Networks are updated with every discovery. Items such as IPs Available and IPs Used, along with Gateways, DHCP and DNS Servers are added as found.'] = 'Netværk opdateres med hver opdagelse. Produkter såsom IPs Tilgængelige og IPs Brugte, sammen med Gateways, DHCP og DNS servere er tilføjet som fundet.';

$GLOBALS["lang"]['Networks respond differently depending on how they are configured. Some routers and/or firewalls can respond <i>on behalf</i> of IPs on the other side of their interfaces to the Open-AudIT Server. It is quite common to see Nmap report a probe for SNMP (UDP port 161) to respond as open|filtered for devices that do and do not exist. This is misleading as there is no device at that IP, yet it ends up with a device entry in the database. 99.9% of the time, it is not Open-AudIT, nor even Nmap, but the network causing this issue. Now that we have the options to treat open|filtered ports as either open or closed, we can eliminate a lot of this confusion. Enterprise users even have the option to change this on a per discovery basis (more than just using the Medium (Classic) item, as above).'] = 'Netværk reagerer forskelligt afhængigt af, hvordan de er konfigureret. Nogle routere og / eller firewalls kan reagere <i>for</i> af IPs på den anden side af deres grænseflader til Open- Audit Server. Det er ret almindeligt at se Nmap rapport en sonde for SNMP (UDP port 161) til at reagere som åben MEP 124; filtreret for enheder, der gør og ikke eksisterer. Dette er vildledende, da der ikke er nogen enhed på det IP, men det ender med en enhed indgang i databasen. 99,9% af tiden, er det ikke Open- Audit, eller endda Nmap, men netværket forårsager dette problem. Nu hvor vi har mulighed for at behandle åbne 124; filtrerede porte som enten åbne eller lukkede, kan vi eliminere en masse af denne forvirring. Enterprise-brugere har endda mulighed for at ændre dette på en per opdagelse basis (mere end bare at bruge Medium (Classic) element, som ovenfor).';

$GLOBALS["lang"]['Networks using a CIDR Mask of'] = 'Netværk, der anvender en CIDR-maske af';

$GLOBALS["lang"]['New Building Name'] = 'Nyt bygningsnavn';

$GLOBALS["lang"]['New Caledonia'] = 'Ny Kaledonien';

$GLOBALS["lang"]['New Floor Name'] = 'Nyt gulvnavn';

$GLOBALS["lang"]['New Room Name'] = 'Navn på nyt værelse';

$GLOBALS["lang"]['New Row Name'] = 'Navn på ny række';

$GLOBALS["lang"]['New Zealand'] = 'New Zealand';

$GLOBALS["lang"]['News'] = 'Nyheder';

$GLOBALS["lang"]['News checks-in each time you login for updated queries & packages, configuration recommendations, release announcements, blog posts and more.'] = 'Nyheder checks - i hver gang du logger ind for opdaterede forespørgsler og pakker, konfigurationsanbefalinger, udgivelsesmeddelelser, blogindlæg og meget mere.';

$GLOBALS["lang"]['News is our way of keeping you up-to-date with the latest fixes, announcements, query updates, software versions and more.<br><br>You do not need to keep on top of the wiki or check for new releases, we can send these to you!'] = 'Nyheder er vores måde at holde dig opdateret med de seneste rettelser, meddelelser, forespørgsler opdateringer, softwareversioner og meget mere.<br/><br/>Du behøver ikke at holde på toppen af wiki eller tjekke for nye udgivelser, kan vi sende disse til dig!';

$GLOBALS["lang"]['next_hop'] = 'Næste hop';

$GLOBALS["lang"]['Next Hop'] = 'Næste hop';

$GLOBALS["lang"]['next_run'] = 'Næste Kør';

$GLOBALS["lang"]['Next Run'] = 'Næste Kør';

$GLOBALS["lang"]['Next click <i>Create your own application</i>.'] = 'Næste klik <i>Opret dit eget program</i>.';

$GLOBALS["lang"]['Next, click OK, then right click the Apache 2.4 service and click Restart. Done!'] = 'Næste, klik på OK, og derefter højre klikke på Apache 2.4 service og klik på Genstart. Færdig!';

$GLOBALS["lang"]['Next, right click the Apache2.4 service and select Properties, then click the Log On tab.'] = 'Næste, Højreklik på Apache2.4 service og vælg Egenskaber, og klik derefter på Log On fanen.';

$GLOBALS["lang"]['Nicaragua'] = 'Nicaragua';

$GLOBALS["lang"]['Niger'] = 'Niger';

$GLOBALS["lang"]['Nigeria'] = 'Nigeria';

$GLOBALS["lang"]['Niue'] = 'Niue';

$GLOBALS["lang"]['nmap'] = 'Nmap';

$GLOBALS["lang"]['Nmap'] = 'Nmap';

$GLOBALS["lang"]['Nmap Port Scanning Responses'] = 'Nmap Port Scanning Responses';

$GLOBALS["lang"]['nmap_tcp_ports'] = 'Nmap Tcp Ports';

$GLOBALS["lang"]['Nmap Tcp Ports'] = 'Nmap Tcp Ports';

$GLOBALS["lang"]['nmap_udp_ports'] = 'Nmap Udp Ports';

$GLOBALS["lang"]['Nmap Udp Ports'] = 'Nmap Udp Ports';

$GLOBALS["lang"]['Nmap cannot determine whether the port is open because packet filtering prevents its probes from reaching the port. The filtering could be from a dedicated firewall device, router rules, or host-based firewall software. These ports frustrate attackers because they provide so little information. Sometimes they respond with ICMP error messages such as type 3 code 13 (destination unreachable: communication administratively prohibited), but filters that simply drop probes without responding are far more common. This forces Nmap to retry several times just in case the probe was dropped due to network congestion rather than filtering. This slows down the scan dramatically.'] = 'Nmap kan ikke afgøre, om havnen er åben, fordi pakkefiltrering forhindrer dens prober i at nå havnen. Filtreringen kan være fra en dedikeret firewall enhed, router regler, eller host-baseret firewall software. Disse havne frustrere angribere, fordi de giver så lidt information. Nogle gange reagerer de med ICMP fejlmeddelelser såsom type 3 kode 13 (destination uopnåelig: kommunikation administrativt forbudt), men filtre, der blot slippe sonder uden at reagere er langt mere almindelige. Dette tvinger Nmap til at prøve igen flere gange bare i tilfælde af, at sonden blev droppet på grund af netværk trængsel snarere end filtrering. Dette forsinker scanningen dramatisk.';

$GLOBALS["lang"]['Nmap places ports in this state when it is unable to determine whether a port is open or filtered. This occurs for scan types in which open ports give no response. The lack of response could also mean that a packet filter dropped the probe or any response it elicited. So Nmap does not know for sure whether the port is open or being filtered. The UDP, IP protocol, FIN, NULL, and Xmas scans classify ports this way.'] = 'Nmap placerer porte i denne tilstand, når den ikke er i stand til at afgøre, om en port er åben eller filtreret. Dette sker for scanningstyper, hvor åbne porte ikke giver noget svar. Manglen på respons kan også betyde, at et pakkefilter tabte sonden eller et hvilket som helst svar, den udløste. Så Nmap ved ikke med sikkerhed, om porten er åben eller filtreret. UDP, IP-protokollen, FIN, NULL og Xmas scanner klassificere porte på denne måde.';

$GLOBALS["lang"]['Nmap timing details are found on the bottom of this linked page'] = 'Nmap timing detaljer findes i bunden af denne linkede side';

$GLOBALS["lang"]['nmis_business_service'] = 'Nmis Business Service';

$GLOBALS["lang"]['Nmis Business Service'] = 'Nmis Business Service';

$GLOBALS["lang"]['nmis_customer'] = 'Nmis kunde';

$GLOBALS["lang"]['Nmis Customer'] = 'Nmis kunde';

$GLOBALS["lang"]['nmis_group'] = 'Nmis Group';

$GLOBALS["lang"]['Nmis Group'] = 'Nmis Group';

$GLOBALS["lang"]['nmis_manage'] = 'Nmis Manage';

$GLOBALS["lang"]['Nmis Manage'] = 'Nmis Manage';

$GLOBALS["lang"]['nmis_name'] = 'Nmis navn';

$GLOBALS["lang"]['Nmis Name'] = 'Nmis navn';

$GLOBALS["lang"]['nmis_notes'] = 'Nmis Noter';

$GLOBALS["lang"]['Nmis Notes'] = 'Nmis Noter';

$GLOBALS["lang"]['nmis_poller'] = 'Nmis Poller';

$GLOBALS["lang"]['Nmis Poller'] = 'Nmis Poller';

$GLOBALS["lang"]['nmis_poller_uuid'] = 'Nmis Poller Uuid';

$GLOBALS["lang"]['Nmis Poller Uuid'] = 'Nmis Poller Uuid';

$GLOBALS["lang"]['nmis_role'] = 'Nmis rolle';

$GLOBALS["lang"]['Nmis Role'] = 'Nmis rolle';

$GLOBALS["lang"]['No'] = 'Nej';

$GLOBALS["lang"]['No Devices Returned'] = 'Ingen enheder returneret';

$GLOBALS["lang"]['No Google Maps API Key present, you will not be able to display the map.'] = 'Ingen Google Maps API Nøgle til stede, vil du ikke være i stand til at vise kortet.';

$GLOBALS["lang"]['No License for Professional or Enterprise'] = 'Ingen licens til professionel eller Enterprise';

$GLOBALS["lang"]['No Results'] = 'Ingen resultater';

$GLOBALS["lang"]['No data in License Key'] = 'Ingen data i licensnøgle';

$GLOBALS["lang"]['No database upgrade required at this time.'] = 'Ingen database opgradering kræves på dette tidspunkt.';

$GLOBALS["lang"]['No devices are in the database.'] = 'Ingen enheder er i databasen.';

$GLOBALS["lang"]['Node'] = 'Knude';

$GLOBALS["lang"]['None'] = 'Ingen';

$GLOBALS["lang"]['Norfolk Island'] = 'Norfolk Island';

$GLOBALS["lang"]['Normal'] = 'Normal';

$GLOBALS["lang"]['Northern Mariana Islands'] = 'Northern Mariana Islands';

$GLOBALS["lang"]['Norway'] = 'Norge';

$GLOBALS["lang"]['Norwegian'] = 'Norsk';

$GLOBALS["lang"]['Not Applicable'] = 'Ikke relevant';

$GLOBALS["lang"]['Not Checked'] = 'Ikke kontrolleret';

$GLOBALS["lang"]['Not Equals'] = 'Ikke ækvivalenter';

$GLOBALS["lang"]['Not In'] = 'Ikke i';

$GLOBALS["lang"]['Not Like'] = 'Ikke som';

$GLOBALS["lang"]['Not Set'] = 'Ikke sat';

$GLOBALS["lang"]['Not every computer will be able to successfully complete a benchmark. We have seen in some fail in testing for reasons beyond our control. The logs should help point you in the right direction for these items.'] = 'Ikke alle computere vil kunne gennemføre et benchmark. Vi har set i nogle fejl i test af årsager uden for vores kontrol. Logfilerne skal hjælpe med at pege dig i den rigtige retning for disse elementer.';

$GLOBALS["lang"]['Not in the (comma seperated) list'] = 'Ikke på listen (comma seperated)';

$GLOBALS["lang"]['Not normally used. If set, this requires the device to have an open port (as per Scan Options) to be considered responding. A MAC address, arp response or ping response is not considered sufficient to be considered responding. Useful if a router or firewall between the Open-AudIT server and target IP is responding to port scans on the IPs behalf.'] = 'Anvendes normalt ikke. Hvis sat, dette kræver, at enheden til at have en åben port (som pr Scan Indstillinger), der skal anses for at svare. En MAC-adresse, arp-respons eller ping-respons anses ikke for tilstrækkelig til at blive betragtet som respons. Nyttigt hvis en router eller firewall mellem Open- AudiT server og mål IP reagerer på port scanninger på IPs vegne.';

$GLOBALS["lang"]['Note'] = 'Bemærkning';

$GLOBALS["lang"]['Note - Selecting a parent will automatically provide access to its children (although it wont be shown here).'] = 'Bemærk - At vælge en forælder vil automatisk give adgang til sine børn (selv om det plejer at blive vist her).';

$GLOBALS["lang"]['Note that the 100 device Enterprise license does not include support.'] = 'Bemærk, at 100 enhed Enterprise licens ikke omfatter støtte.';

$GLOBALS["lang"]['Note, you may need to make the script executable with'] = 'Bemærk, at du måske skal gøre scriptet eksekverbart med';

$GLOBALS["lang"]['Notes'] = 'Bemærkninger';

$GLOBALS["lang"]['notes'] = 'Bemærkninger';

$GLOBALS["lang"]['Notice'] = 'Meddelelse';

$GLOBALS["lang"]['notin'] = 'Notin';

$GLOBALS["lang"]['Notin'] = 'Notin';

$GLOBALS["lang"]['November'] = 'November';

$GLOBALS["lang"]['Now for the Subscription ID, click All Services, Subscriptions and copy it.'] = 'Nu for Abonnementsidentitet, klik på Alle Tjenester, Abonnementer og kopiere det.';

$GLOBALS["lang"]['Now we need to provide the Azure Active Directory application access to your subscription.<br><br>Click on Resource Groups and then the resource group you would like your Azure Active Directory Application to have access to.<br><br>Click Add. The role should be Contributor and then search for the app (Open-AudIT). Then click Save.<br><br>Now the application has access to the subscription, so we can make API calls. The API calls will be requested on behalf of the application, not your user.'] = 'Nu skal vi give Azure Active Directory adgang til dit abonnement.<br/><br/>Klik på Resource Groups og derefter den ressource gruppe, du ønsker din Azure Active Directory Application at have adgang til.<br/><br/>Klik på Tilføj. Rollen bør være bidragyder og derefter søge efter app (Open- Audit). Klik derefter på Gem.<br/><br/>Nu har programmet adgang til abonnementet, så vi kan foretage API opkald. API opkald vil blive bedt om på vegne af programmet, ikke din bruger.';

$GLOBALS["lang"]['nvd_json'] = 'Nvd Json';

$GLOBALS["lang"]['Nvd Json'] = 'Nvd Json';

$GLOBALS["lang"]['ORDER BY'] = 'KENDELSE VED';

$GLOBALS["lang"]['OS'] = 'OS';

$GLOBALS["lang"]['OS Families'] = 'OS Familier';

$GLOBALS["lang"]['OS Family'] = 'OS Family';

$GLOBALS["lang"]['OS Group'] = 'OS Group';

$GLOBALS["lang"]['OUTPUTS'] = 'RESULTATER';

$GLOBALS["lang"]['oae_manage'] = 'Oe Håndtering';

$GLOBALS["lang"]['Oae Manage'] = 'Oe Håndtering';

$GLOBALS["lang"]['object_ident'] = 'Objekt Ident';

$GLOBALS["lang"]['Object Ident'] = 'Objekt Ident';

$GLOBALS["lang"]['Obtain top management support'] = 'Opnå top management støtte';

$GLOBALS["lang"]['October'] = 'Oktober';

$GLOBALS["lang"]['Offset'] = 'Offset';

$GLOBALS["lang"]['Okta'] = 'Okta';

$GLOBALS["lang"]['Oman'] = 'Oman';

$GLOBALS["lang"]['omk_uuid'] = 'Omk Uuid';

$GLOBALS["lang"]['Omk Uuid'] = 'Omk Uuid';

$GLOBALS["lang"]['On'] = 'Til';

$GLOBALS["lang"]['On Windows, Open-AudIT uses WMI as it is primary method of auditing. Windows has a notorious reputation where remote WMI is concerned. It tends to either <i>just work</i> or some mystery item on the target requires changing. If you are experiencing difficulty auditing remote Windows PCs, we have created a script called test_windows_client.vbs. You can run this script <strong>locally</strong> on the machine in question, after signing on as the user that is used by Open-AudIT to perform the audit. The script makes <strong>no changes</strong> to the target devices. It checks most (not all) of the items below and generates PASS, FAIL and INFO tags for various properties. NOTE - If your target system is being audited correctly, you should not change any settings. Some of the below do not exist on Windows PCs that are able to be audited and some do exist. Only change settings if your discoveries on particular PCs are not working as intended.'] = 'På Windows, Open- Audit bruger WMI, da det er den primære metode til revision. Windows har et berygtet ry, når det drejer sig om fjernbetjening WMI. Det har tendens til at enten <i>bare arbejde</i> eller en mystisk genstand på målet kræver forandring. Hvis du oplever problemer med at revidere eksterne Windows-pc \'er, har vi oprettet et script kaldet test _ windows _ client.vbs. Du kan køre dette script <strong>lokalt</strong> på den pågældende maskine, efter at signere på som den bruger, der anvendes af Open- Audit til at udføre revisionen. Scriptet gør <strong>ingen ændringer</strong> til målenhederne. Det kontrollerer de fleste (ikke alle) af de elementer nedenfor og genererer PASS, FAIL og INFO tags for forskellige egenskaber. BEMÆRK - Hvis dit målsystem revideres korrekt, bør du ikke ændre nogen indstillinger. Nogle af nedenstående findes ikke på Windows-pc \'er, der er i stand til at blive revideret, og nogle findes. Ændr kun indstillinger hvis dine opdagelser på bestemte pc\' er ikke virker som tilsigtet.';

$GLOBALS["lang"]['On the Tasks List page, click the <i>Add New</i> button to configure a task.'] = 'På siden Opgaver, klik på <i>Tilføj ny</i> knap til at indstille en opgave.';

$GLOBALS["lang"]['On the field <i>Match String</i> you should provide the name of the software that you want to track. You can use the percent sign (%) as a wildcard in where required.'] = 'På banen <i>Matchstreng</i> du skal angive navnet på den software, du ønsker at spore. Du kan bruge procent tegnet (%) som et wildcard i hvor det er nødvendigt.';

$GLOBALS["lang"]['On the next page you will be able to select Access Keys and see your key or create a new key.'] = 'På næste side vil du være i stand til at vælge Access Keys og se din nøgle eller oprette en ny nøgle.';

$GLOBALS["lang"]['On the target Windows PC, run the DCOM utility and verify (or set) the below attributes. Start -> Run, Enter DCOMCNFG and press OK. This will open the DCOMCNFG window.'] = 'På målet Windows PC, køre DCOM nytte og kontrollere (eller indstille) nedenstående attributter. Start - > Løb, Indtast DCOMCNFG og tryk på OK. Dette vil åbne DCOMCNFG vinduet.';

$GLOBALS["lang"]['On the top right (underneath the menu bar) you will see several buttons. These allow you to select another dashboard, set the current dashboard as your homepage (if it is not already) and edit the current dashboard (if you have permission).'] = 'Øverst til højre (under menulinjen) vil du se flere knapper. Disse tillader dig at vælge et andet instrumentbræt, indstille det aktuelle instrumentbræt som din hjemmeside (hvis det ikke allerede er) og redigere det aktuelle instrumentbræt (hvis du har tilladelse).';

$GLOBALS["lang"]['On-Premise, Not Cloud'] = 'On- Previous, Not Cloud';

$GLOBALS["lang"]['Once an Additional Field has been created it can be used in queries and groups just like any other attribute in the database.'] = 'Når et ekstra felt er blevet oprettet, kan det bruges i forespørgsler og grupper ligesom enhver anden attribut i databasen.';

$GLOBALS["lang"]['Once commented out, your certificate will be validated, but may also fail this validation if you are using self-signed certificates and have not configured your server correctly.'] = 'Når kommenteret ud, vil dit certifikat blive valideret, men kan også mislykkes denne validering, hvis du bruger selvsignerede certifikater og ikke har konfigureret din server korrekt.';

$GLOBALS["lang"]['Once the script has run on a target, should the script delete itself.'] = 'Når scriptet har kørt på et mål, skal scriptet slette sig selv.';

$GLOBALS["lang"]['Once those initial queries (snmp, ssh, wmi) are complete, if the device is a supported by the audit scripts (Windows, Linux, OSX, AIX, HP-UX, Solaris and ESXi), the correct audit script will be copied to the target and executed. The audit script will self delete upon completion. The result will be stored on the target machine as an XML file. The Open-AudIT server will then retrieve the result file for processing and delete the result file on the target. The location the audit script is copied to on the target device (at least for SSH audits) is configurable by editing the discovery_linux_script_directory config item. By default it is set to /tmp/. This may need changing if /tmp has noexec set. The result file is then processed and the device details updated within Open-AudIT.'] = 'Når disse indledende forespørgsler (snmp, ssh, wmi) er færdige, hvis enheden er en understøttet af revision scripts (Windows, Linux, OSX, AIX, HP-UX, Solaris og ESXi), vil den korrekte revision script blive kopieret til målet og udført. Revisionen script vil selv slette efter afslutningen. Resultatet vil blive gemt på målmaskinen som en XML-fil. Open- Audits server vil derefter hente resultatfilen til behandling og slette resultatfilen på målet. Placeringen af revisionsscriptet kopieres til på målenheden (i det mindste for SSH-revisioner) kan indstilles ved at redigere punktet Opdagelse _ linux _ script _ directory config. Som standard er det sat til / tmp /. Dette kan være nødvendigt at ændre hvis / tmp har noexec sæt. Resultatet fil behandles derefter, og enhedsoplysningerne opdateres i Open- Audit.';

$GLOBALS["lang"]['Once you click the execute button, Open-AudIT will spawn a process to initiate the discovery and return the user to the discovery details page. The newly spawned process takes the configured discovery options and executes Nmap commands to determine the initial list of IP addresses to be scanned (or queries Active Directory if that type is used). Each IP to be scanned is placed into a queue. Once the initial process has completed (and there are IPs to be scanned in the queue) a number of processes will be spawned to further scan each IP in parallel. This number of processes is configurable in the configuration, edit the attribute <i>queue_limit</i>. By default this is set to 20.'] = 'Når du klikker på knappen eksekvering, vil Open- Audit udgydt en proces til at indlede opdagelsen og returnere brugeren til den opdagelse detaljer side. Den nyligt spawned proces tager de konfigurerede søgemuligheder og udfører Nmap kommandoer til at bestemme den oprindelige liste over IP-adresser, der skal scannes (eller forespørgsler Active Directory, hvis denne type bruges). Hver IP, der skal scannes, placeres i en kø. Når den indledende proces er afsluttet (og der er IP \'er, der skal scannes i køen) en række processer vil blive spowned at yderligere scanne hver IP parallelt. Dette antal processer kan indstilles i konfigurationen, redigere attributten <i>kø _ limit</i>. Som standard sættes dette til 20.';

$GLOBALS["lang"]['Once you have chosen your devices to edit, click the pencil button on the top right of the table.'] = 'Når du har valgt dine enheder til at redigere, skal du klikke på blyantknappen øverst til højre i tabellen.';

$GLOBALS["lang"]['Once you have done this, Open-AudIT will attempt to verify your user logon details against the configured Auth Method. If the user has valid credentials and <code>use_authorisation</code> is set, Open-AudIT will ask for the list of groups that the user belongs to. If the user is in the corresponding groups for Open-AudIT Roles and Orgs, those Roles and Orgs will be applied to that user.'] = 'Når du har gjort dette, vil Open- Audit forsøge at verificere dine bruger logon detaljer mod den konfigurerede Auth metode. Hvis brugeren har gyldige legitimationsoplysninger og <code>use_authorisation</code> er indstillet, Open- Audit vil bede om listen over grupper, som brugeren tilhører. Hvis brugeren er i de tilsvarende grupper for Open- Audit Roles og Orgs, disse Roles og Orgs vil blive anvendt på denne bruger.';

$GLOBALS["lang"]['Once you have generated a Baseline Definition you can schedule it to be run against a specified group of devices.'] = 'Når du har genereret en Baseline Definition kan du planlægge det skal køres mod en bestemt gruppe af enheder.';

$GLOBALS["lang"]['Once you have those items, in Open-AudIT Enterprise you can go to menu -> Discover -> Clouds -> Create Clouds, select the <i>Amazon AWS</i> type and paste them in. Done.'] = 'Når du har disse elementer, i Open- Audit Enterprise du kan gå til menu - > Oplev - > Skyer - > Opret Skyer, vælg <i>Amazon AWS</i> skrive og indsætte dem i. Færdig.';

$GLOBALS["lang"]['Once you have those items, in Open-AudIT Enterprise you can go to menu -> Discover -> Clouds -> Create Clouds, select the <i>Microsoft Azure</i> type and paste them in. Done.'] = 'Når du har disse elementer, i Open- Audit Enterprise du kan gå til menu - > Oplev - > Skyer - > Opret Skyer, vælg <i>Microsoft Azure</i> skrive og indsætte dem i. Færdig.';

$GLOBALS["lang"]['Once you have your cloud credentials, it is merely a matter of creating a new cloud and running the discovery - or scheduling first/future discoveries. Make sure you also have the credentials required to log on to your cloud machines, and it is all done for you just like a regular discovery. Credentials for your cloud'] = 'Når du har dine cloud-oplysninger, er det blot et spørgsmål om at skabe en ny cloud og køre opdagelsen - eller planlægge første / fremtidige opdagelser. Sørg for, at du også har de legitimationsoplysninger, der kræves for at logge på dine cloud-maskiner, og det hele er gjort for dig ligesom en regelmæssig opdagelse. Valgt til din sky';

$GLOBALS["lang"]['One of <code>3x2</code>, <code>4x2</code>, <code>4x3</code> or <code>4x4</code>.'] = 'En af <code>3x2</code>, <code>4x2</code>, <code>4x3</code> eller <code>4x4</code>.';

$GLOBALS["lang"]['One of Campus Area Network, Cloud Network, Enterprise Private Network, Home Area Network, Local Area Network, Metropolitan Area Network, Passive Optical Local Area Network, Personal Area Network, Storage-Area Network, System-Area Network, Virtual Private Network, Wide Area Network, Wireless Local Area Network.'] = 'En af Campus Area Network, Cloud Network, Enterprise Private Network, Home Area Network, Local Area Network, Metropolitan Area Network, Passive Optical Local Area Network, Personal Area Network, Storage- Area Network, System- Area Network, Virtual Private Network, Wide Area Network, Trådløs Local Area Network.';

$GLOBALS["lang"]['One of Development, Disaster Recovery, Evaluation, Pre-Production, Production, Testing, Training, User Acceptance Testing'] = 'En af Udvikling, Katastrofe Inddrivelse, Evaluering, Pre-produktion, Produktion, Test, Uddannelse, Brugeraccept Test';

$GLOBALS["lang"]['One of allocated, delegated, planning, reserved, unallocated, unknown, unmanaged. Defaults to allocated.'] = 'En af de tildelte, uddelegerede, planlægning, reserverede, ikke-tildelte, ukendte, uforvaltede. Standard tildelt.';

$GLOBALS["lang"]['One of either <code>active directory</code> or <code>openldap</code>.'] = 'En af <code>active directory</code> eller <code>openldap</code>.';

$GLOBALS["lang"]['One of: antivirus, backup, firewall, approved, banned, ignored or other.'] = 'En af: antivirus, backup, firewall, godkendt, forbudt, ignoreret eller andet.';

$GLOBALS["lang"]['One other item to be careful of - make sure you use the hostname (or fqdn) of your LDAP Server that matches what is in the certificate (not just the LDAP Servers IP address) when creating the LDAP entry in Open-AudIT.'] = 'Et andet element at være forsigtig med - sørg for at bruge værtsnavnet (eller fqdn) på din LDAP Server, der matcher, hvad der er i certifikatet (ikke kun LDAP Servers IP-adresse), når du opretter LDAP post i Open- Audit.';

$GLOBALS["lang"]['Online Documentation'] = 'Online dokumentation';

$GLOBALS["lang"]['Open'] = 'Åbn';

$GLOBALS["lang"]['Open Data'] = 'Åbn data';

$GLOBALS["lang"]['Open Source'] = 'Åbn kilde';

$GLOBALS["lang"]['Open-AudIT'] = 'Open- Audit';

$GLOBALS["lang"]['Open-AudIT Community source code is available on GitHub. You are encouraged to inspect any code you have concerns about, and because it is open source - you are also encouraged to ask us about any issues you have or report any findings. We are always more than happy to accept code contributions, vulnerability reports, or even simple questions. We are here to help.<br><br>The audit scripts themselves (Windows, Linux, MacOS, et al) are deliberately written in readable native shell script (VBScript for Windows, Bash for *nix). You can see exactly what commands are run. You can remove any commands you feel you do not need. You can ask a third party to inspect the code for you and (if you want to) report any findings.<br><br>Open-AudIT Enterprise performs the add-on commercial functions for Open-AudIT Community. It is included as a single compiled file with no external dependencies. Where Enterprise itself performs the function(s), if you are concerned with any issues Firstwave is happy to work through them with you - just ask! Try that with another commercial software vendor!'] = 'Open- Audit Fællesskabets kildekode findes på GitHub. Du opfordres til at inspicere enhver kode, du har bekymringer om, og fordi det er open source - du opfordres også til at spørge os om eventuelle spørgsmål, du har, eller rapportere eventuelle resultater. Vi er altid mere end glade for at acceptere kode bidrag, sårbarhed rapporter, eller endda enkle spørgsmål. Vi er her for at hjælpe.<br/><br/>Revisionen scripts selv (Windows, Linux, MacOS, et al) er bevidst skrevet i læsbare indfødte shell script (VBScript til Windows, Bash til * nix). Du kan se præcis, hvilke kommandoer der køres. Du kan fjerne alle kommandoer du føler du ikke har brug for. Du kan bede en tredjepart om at inspicere koden for dig og (hvis du vil) rapportere eventuelle resultater.<br/><br/>Open- Audit Erhvervslivet varetager de kommercielle funktioner i Open- Audit-fællesskabet. Det er inkluderet som en enkelt kompileret fil uden eksterne afhængigheder. Hvor Enterprise selv udfører den eller de funktioner, hvis du er bekymret over eventuelle spørgsmål Firstwave er glad for at arbejde gennem dem med dig - bare spørg! Prøv det med en anden kommerciel software leverandør!';

$GLOBALS["lang"]['Open-AudIT Device Selection'] = 'Valg af Open- Audit- enhed';

$GLOBALS["lang"]['Open-AudIT Enterprise has the ability to choose from a pre-defined list of discovery scan options and also to customise individual options per discovery.'] = 'Open- Audit Enterprise har evnen til at vælge mellem en foruddefineret liste over søgescanningsmuligheder og også at tilpasse individuelle muligheder per opdagelse.';

$GLOBALS["lang"]['Open-AudIT Enterprise. High-scale flexible discovery and audit solution for large networks. All the features of Professional plus: Baselines, File Auditing, Cloud Discovery, Rack Management, Configurable Role Based Access Control including Active Directory and LDAP.'] = 'Open- Audit Enterprise. Høj skala fleksibel opdagelse og revision løsning for store netværk. Alle funktionerne i Professional plus: Baselines, File Auditing, Cloud Discovery, Rack Management, Konfigurativ Rollebaseret Access Control, herunder Active Directory og LDAP.';

$GLOBALS["lang"]['Open-AudIT Field Name'] = 'Open- Audit- feltnavn';

$GLOBALS["lang"]['Open-AudIT Licenses'] = 'Open- Audit Licenses';

$GLOBALS["lang"]['Open-AudIT Options'] = 'Open- Audit- tilvalg';

$GLOBALS["lang"]['Open-AudIT Professional and Enterprise include Enhanced Reporting features, including time-based, historical, and muti-query based reporting features in multiple formats.'] = 'Open- Audit Professional og Enterprise omfatter Forbedret rapportering funktioner, herunder tidsbaserede, historiske, og muti- forespørgsel baseret rapportering funktioner i flere formater.';

$GLOBALS["lang"]['Open-AudIT Professional has the ability to choose from a pre-defined list of discovery scan options, per discovery.'] = 'Open- Audit Professionel har evnen til at vælge fra en foruddefineret liste af opdagelse scanningsmuligheder, per opdagelse.';

$GLOBALS["lang"]['Open-AudIT Professional. The world\\'] = 'Open- Audit Professional. Verden\\';

$GLOBALS["lang"]['Open-AudIT Professional. The worlds most flexible network discovery and audit solution. All the features of Community plus: Interactive Dashboards, Geographical Maps, Scheduled Time-based or Historical Reporting, Commercial Support.'] = 'Open- Audit Professional. Verdens mest fleksible netværk opdagelse og revision løsning. Alle træk ved Fællesskabet plus: Interaktive Dashboards, Geografiske Kort, Planlagt Tidsbaseret eller Historisk Rapportering, Handelsstøtte.';

$GLOBALS["lang"]['Open-AudIT can be configured to use LDAP servers (Microsoft Active Directory and/or OpenLDAP) to authenticate and authorize a user and in addition, to create a user account in Open-AudIT using assigned roles and orgs based on LDAP group membership. It can also use'] = 'Open- Aud IT kan konfigureres til at bruge LDAP-servere (Microsoft Active Directory og / eller OpenLDAP) til at autentificere og autorisere en bruger og derudover til at oprette en brugerkonto i Open- Audit ved hjælp af tildelte roller og orgs baseret på LDAP gruppe medlemskab. Det kan også bruge';

$GLOBALS["lang"]['Open-AudIT can be run on your server in your data center. It does not need access to the internet at all. Even the installation on Linux where we use the distribution package manager for our prerequisites can be negated by you using an in-house and security team-approved package repository.<br><br>Open-AudIT does not store any of your data in the cloud. Even licensing information can be provided without having to access the internet from the Open-AudIT server.<br><br>Sure, it is easier to allow it to access the internet to download packages (including security fixes) for your distribution, but that is up to you and your security policies. Open-AudIT does not need the internet.'] = 'Open- Aud IT kan køres på din server i dit datacenter. Det har slet ikke brug for adgang til internettet. Selv installationen på Linux, hvor vi bruger distributions pakkehåndtering til vores forudsætninger, kan negateres af dig ved hjælp af et internt og sikkerhedsgodkendt pakkearkiv.<br/><br/>Open- Aud IT gemmer ikke nogen af dine data i skyen. Selv licensoplysninger kan leveres uden at skulle få adgang til internettet fra Open- Audits server.<br/><br/>Selvfølgelig er det nemmere at give det adgang til internettet til at downloade pakker (herunder sikkerhedsrettelser) til din distribution, men det er op til dig og dine sikkerhedspolitikker. Open- Audit behøver ikke internettet.';

$GLOBALS["lang"]['Open-AudIT can download, parse and use NIST CVE Vulnerability reports.'] = 'Open- Audit kan downloade, parse og bruge NIST CVE sårbarhed rapporter.';

$GLOBALS["lang"]['Open-AudIT can show in one of several languages. How you can improve this?'] = 'Open- Aud IT kan vises på et af flere sprog. Hvordan kan du forbedre det?';

$GLOBALS["lang"]['Open-AudIT can store information in additional fields that are associated with each device.'] = 'Open- Aud IT kan gemme oplysninger i yderligere felter, der er forbundet med hver enhed.';

$GLOBALS["lang"]['Open-AudIT can use Microsoft Entra (previously known as Microsoft Azure Active Directory) as an authentication method. This means your user in Open-AudIT can click the Logon using Entra button on the logon page and use their Entra credentials to logon. That user will need to already exist within Open-AudIT (and be assigned'] = 'Open- Audit kan bruge Microsoft Entra (tidligere kendt som Microsoft Azure Active Directory) som en godkendelsesmetode. Det betyder, at din bruger i Open- Audit kan klikke på Logon ved hjælp af Entra-knappen på logonsiden og bruge deres Entra-legitimation til at logge på. Denne bruger bliver nødt til allerede at eksistere i Open- Audit (og få tildelt';

$GLOBALS["lang"]['Open-AudIT can use OKTA as an authentication method. This means your user in Open-AudIT can click the Logon using OKTA button on the logon page and use their OKTA credentials to logon. That user will need to already exist within Open-AudIT (and be assigned Roles and Orgs), but will not need to remember a separate set of logon credentials.'] = 'Open- Audit kan bruge OKTA som en godkendelsesmetode. Dette betyder, at din bruger i Open- Audit kan klikke på Logon ved hjælp af OKTA-knappen på logonsiden og bruge deres OKTA-legitimation til at logge på. Denne bruger bliver nødt til allerede at eksistere i Open- Audit (og få tildelt Roles og Orgs), men vil ikke behøver at huske et separat sæt af logon legitimationsoplysninger.';

$GLOBALS["lang"]['Open-AudIT comes with many queries inbuilt. If you require a specific query and none of the pre-packaged queries fit your needs, it is quite easy to create a new one and load it into Open-AudIT for running.'] = 'Open- Audit leveres med mange forespørgsler indbygget. Hvis du har brug for en specifik forespørgsel, og ingen af de færdigpakkede forespørgsler passer til dine behov, er det ganske nemt at oprette en ny og indlæse den i Open- Audit til kørsel.';

$GLOBALS["lang"]['Open-AudIT has a JSON Restful API to be used both in the web interface and via JSON requests.'] = 'Open- Audit har en JSON Restful API, der skal bruges både i web-interface og via JSON anmodninger.';

$GLOBALS["lang"]['Open-AudIT has a granular permissions system to determine what a user within Open-AudIT can do, and the items he can do it to. Open-AudIT can be entirely self-contained, or use Active Directory or OpenLDAP for authentication and/or authorization.<br><br>It is entirely up to the administrator of Open-AudIT how they would like the Role Based Access Control to work.'] = 'Open- Aud IT har en granulær tilladelser system til at bestemme, hvad en bruger i Open- Audit kan gøre, og de elementer, han kan gøre det til. Open- Audit kan være helt selvbehersket, eller bruge Active Directory eller OpenLDAP til godkendelse og / eller godkendelse.<br/><br/>Det er helt op til administratoren af Open- Audit, hvordan de ønsker Role Based Access Control til at arbejde.';

$GLOBALS["lang"]['Open-AudIT has a powerful change detection engine. Any device attributes that are added, removed or changed will be detected and stored. These changes can be reported upon and the relevant data confirmed as to what was expected from your company change and release process.<br><br>When a device is audited, attributes are divided into sections which correspond to tables in the database.<br><br>Each device (computer, router, printer, et al) has an entry in the <code>devices</code> table. Each entry in the devices table has an <code>id</code> column. This value is unique - it is an auto-incrementing id.<br><br>When the audit result is processed, each item in each section has its audit result compared to what is in the database.<br><br>For each section, if the key columns (see below table) contain the identical values, it is considered already installed and has its <code>last_seen</code> attribute updated. No change_log entry is created.<br><br>If any of the key columns do not match, it is considered a new attribute and is inserted. A <code>change_log</code> entry is created if the device had other attributes already present in the table.<br><br>At the completion of the audit processing, any database items that have not been updated (or inserted) are considered to not be present. The <code>current</code> attribute for this item is set to <i>n</i> and a change_log entry is generated.<br><br>So, we can determine if something is currently installed - the current column is <i>y</i>.<br><br>We can determine when something was initially detected - the <i>first_seen</i>.<br><br>We can determine if something was installed after the initial audit - first seen will be different in the component and device tables.<br><br>We can determine if something is not currently installed, but previously was - current = <i>n</i>.<br><br>We can determine the last time we detected an item - last_seen.<br><br>At any given point, we can determine what was on a system - by using the audit_log table and selecting the relevant components based on first_seen and last_seen.<br><br>Each section and its matching key columns are below.<br><br>NOTE - There are some exceptions as detailed below.<br><br>*1 - For network cards, if the computer is a VMware Esx machine it also uses the net_index and connection columns.<br><br>*2 - For partitions, f the computer is an AIX machine, we use the partition name.'] = 'Open- Aud IT har en kraftig ændringsdetektor. Enhver enhed attributter, der er tilføjet, fjernet eller ændret vil blive opdaget og gemt. Disse ændringer kan rapporteres, og de relevante data bekræftes med hensyn til, hvad der forventedes af din virksomheds ændrings- og udgivelsesproces.<br/><br/>Når en anordning revideres, opdeles attributterne i afsnit, der svarer til tabellerne i databasen.<br/><br/>Hver enhed (computer, router, printer, et al) har en indgang i <code>devices</code> Bord. Hver indgang i tabellen enheder har en <code>id</code> kolonne. Denne værdi er unik - det er en auto- stigende id.<br/><br/>Når revisionsresultatet behandles, har hvert punkt i hvert afsnit sit revisionsresultat i forhold til det, der er i databasen.<br/><br/>For hvert afsnit, hvis nøglekolonnerne (se nedenstående tabel) indeholder de identiske værdier, anses de allerede for installeret og har deres <code>last_seen</code> attribut opdateret. Ingen ændring _ log indgang er oprettet.<br/><br/>Hvis en af nøglesøjlerne ikke matcher, betragtes den som en ny attribut og indsættes. A <code>change_log</code> indtastning er oprettet, hvis enheden havde andre attributter, der allerede er til stede i tabellen.<br/><br/>Ved afslutningen af revisionsprocessen anses alle databaseelementer, der ikke er blevet opdateret (eller indsat), ikke for at være til stede. Den <code>current</code> attribut for denne post er sat til <i>n</i> og en ændring _ log indgang genereres.<br/><br/>Så vi kan afgøre, om noget er installeret i øjeblikket - den nuværende kolonne er <i>y</i>.<br/><br/>Vi kan afgøre, hvornår noget blev opdaget - <i>første _ set</i>.<br/><br/>Vi kan afgøre, om noget blev installeret efter den første revision - først set vil være anderledes i komponent og enhed tabeller.<br/><br/>Vi kan afgøre, om noget ikke er installeret i øjeblikket, men tidligere var - nuværende = <i>n</i>.<br/><br/>Vi kan afgøre, hvornår vi sidst opdagede en genstand - sidst set.<br/><br/>På et givet tidspunkt kan vi bestemme, hvad der var på et system - ved at bruge audit _ log tabellen og vælge de relevante komponenter baseret på først _ set og sidst _ set.<br/><br/>Hvert afsnit og dens matchende nøglekolonner er nedenfor.<br/><br/>BEMÆRK - Der er nogle undtagelser som beskrevet nedenfor.<br/><br/>* 1 - For netværkskort, hvis computeren er en VMware Esx maskine det også bruger net _ index og forbindelse kolonner.<br/><br/>* 2 - For partitioner, hvis computeren er en AIX maskine, vi bruger partitionsnavnet.';

$GLOBALS["lang"]['Open-AudIT is a program designed to track and report on your IT and related assets details and configuration. Open-AudIT can tell <i>What is On Your Network?</i>, how it is configured and if there have been any changes. Open-AudIT delivers a sleek, flexible and easy to use platform for device discovery, IT auditing and inventory management automation straight out of the box.'] = 'Open- Audit er et program designet til at spore og rapportere om din IT og relaterede aktiver detaljer og konfiguration. Open- Audit kan fortælle <i>Hvad er på dit netværk?</i>, hvordan det er konfigureret, og hvis der har været nogen ændringer. Open- Audit leverer en slank, fleksibel og nem at bruge platform til enhed opdagelse, IT revision og lagerstyring automatisering lige ud af boksen.';

$GLOBALS["lang"]['Open-AudIT makes it easy to edit the attributes of multiple devices at once.'] = 'Open- Aud Det gør det nemt at redigere attributterne til flere enheder på én gang.';

$GLOBALS["lang"]['Open-AudIT needs specific directory permissions to be able to create files, upload results, etc. Please set as below.'] = 'Open- Aud IT har brug for specifikke mappetilladelser for at kunne oprette filer, uploade resultater osv. Sæt venligst som nedenfor.';

$GLOBALS["lang"]['Open-AudIT provides many built-in queries and makes it simple to create your own.'] = 'Open- Audit giver mange bygge-i forespørgsler og gør det nemt at oprette din egen.';

$GLOBALS["lang"]['Open-AudIT ships with inbuilt roles for admin, org_admin and user.<br><br>Generally, a user who is an administrator of the Open-AudIT application itself should have admin and possible org_admin roles.<br><br>A user can have multiple roles. The permission will be applied at the most permissive level - IE, if a user has the roles of user and org_admin, they will be able to create locations because org_admin grants this permission, even though the user role does not.<br><br>The admin role allows access to collections such as configuration, database, groups, ldap servers, logs, queries and roles. Global items that affect the entire application.<br><br>The org_admin role usually allows create, read, update and delete actions for any collection that contains the org_id column. Virtually all data except some of the collections mentioned above will contain an <code>org_id</code> column.<br><br>The user role generally allows read only access to all items with an org_id column.'] = 'Open- Aud IT skibe med indbyggede roller for admin, org _ admin og bruger.<br/><br/>Generelt bør en bruger, der er administrator af Open- Audit programmet selv have admin og mulige org _ admin roller.<br/><br/>En bruger kan have flere roller. Tilladelsen vil blive anvendt på det mest eftergivende niveau - IE, hvis en bruger har rollen som bruger og org _ admin, vil de være i stand til at oprette steder, fordi org _ admin giver denne tilladelse, selv om brugerens rolle ikke gør.<br/><br/>Den admin rolle giver adgang til samlinger såsom konfiguration, database, grupper, ldap servere, logs, forespørgsler og roller. Globale elementer, der påvirker hele programmet.<br/><br/>Den org _ admin rolle normalt tillader oprette, læse, opdatere og slette handlinger for enhver samling, der indeholder org _ id kolonne. Næsten alle data undtagen nogle af de ovennævnte samlinger vil indeholde en <code>org_id</code> kolonne.<br/><br/>Den brugerrolle, der generelt tillader læse kun adgang til alle elementer med en org _ id kolonne.';

$GLOBALS["lang"]['Open-AudIT ships with inbuilt roles for admin, org_admin and user.<br><br>Generally, a user who is an administrator of the Open-AudIT application itself should have admin and possible org_admin roles.<br><br>A user can have multiple roles. The permission will be applied at the most permissive level - IE, if a user has the roles of user and org_admin, they will be able to create locations because org_admin grants this permission, even though the user role does not.<br><br>The admin role allows access to collections such as configuration, database, groups, ldap servers, logs, queries and roles. Global items that affect the entire application.<br><br>The org_admin role usually allows create, read, update and delete actions for any collection that contains the org_id column. Virtually all data except some of the collections mentioned above will contain an org_id column.<br><br>The user role generally allows read only access to all items with an org_id column.'] = 'Open- Aud IT skibe med indbyggede roller for admin, org _ admin og bruger.<br/><br/>Generelt bør en bruger, der er administrator af Open- Audit programmet selv have admin og mulige org _ admin roller.<br/><br/>En bruger kan have flere roller. Tilladelsen vil blive anvendt på det mest eftergivende niveau - IE, hvis en bruger har rollen som bruger og org _ admin, vil de være i stand til at oprette steder, fordi org _ admin giver denne tilladelse, selv om brugerens rolle ikke gør.<br/><br/>Den admin rolle giver adgang til samlinger såsom konfiguration, database, grupper, ldap servere, logs, forespørgsler og roller. Globale elementer, der påvirker hele programmet.<br/><br/>Den org _ admin rolle normalt tillader oprette, læse, opdatere og slette handlinger for enhver samling, der indeholder org _ id kolonne. Stort set alle data undtagen nogle af de ovennævnte samlinger vil indeholde en org _ id kolonne.<br/><br/>Den brugerrolle, der generelt tillader læse kun adgang til alle elementer med en org _ id kolonne.';

$GLOBALS["lang"]['Open-AudIT ships with several pre-configured Dashboards. If you are a Professional user, you can select between two of these and set it as your default page when you logon. If you are an Enterprise user, you can not only select between the five preconfigured Dashboards, but you also have the ability to create your own.'] = 'Open- Audit skibe med flere forudindstillede Dashboards. Hvis du er professionel bruger, kan du vælge mellem to af disse og indstille det som din standard side, når du logger på. Hvis du er en Enterprise-bruger, kan du ikke kun vælge mellem de fem prækonfigurerede Dashboards, men du har også evnen til at skabe dine egne.';

$GLOBALS["lang"]['Open-AudIT should be installed on 64bit Windows <strong>Server</strong> systems only. Windows 10 and Windows 11 are <strong>not</strong> supported.'] = 'Open- Audit skal installeres på 64bit Windows <strong>Server</strong> Kun systemer. Windows 10 og Windows 11 er <strong>ikke</strong> støttet.';

$GLOBALS["lang"]['Open-AudIT uses Nmap in its Discovery function. Nmap probes devices for open ports. Devices ideally should respond with open for working ports. Devices often do not respond with this. The varying responses are detailed below.'] = 'Open- Audit bruger Nmap i sin Discovery funktion. Nmap sonder enheder til åbne porte. Enheder ideelt set bør reagere med åben for arbejdshavne. Enheder reagerer ofte ikke med dette. De forskellige svar er beskrevet nedenfor.';

$GLOBALS["lang"]['Open-AudIT uses Nmap in its Discovery function. Without Nmap, Open-AudIT will not function correctly. Every Open-AudIT install assumes Nmap is installed and will also test for it on the Discovery web pages. More information about Open-AudIT and Nmap is available here'] = 'Open- Audit bruger Nmap i sin Discovery funktion. Uden Nmap vil Open- Audit ikke fungere korrekt. Hver Open- Audit installere antager Nmap er installeret og vil også teste for det på Discovery websider. Mere information om Open- Audit og Nmap er tilgængelig her';

$GLOBALS["lang"]['Open-AudIT uses Nmap in its Discovery function. Without Nmap, Open-AudIT will not function correctly. Every Open-AudIT install assumes Nmap is installed and will test for it on the Discovery web pages.'] = 'Open- Audit bruger Nmap i sin Discovery funktion. Uden Nmap vil Open- Audit ikke fungere korrekt. Hver Open- Audit installation antager Nmap er installeret og vil teste for det på Discovery websider.';

$GLOBALS["lang"]['Open-AudIT uses credentials to access your devices. These are encrypted and stored, just as you would expect.'] = 'Open- Aud IT bruger legitimation til at få adgang til dine enheder. Disse er krypteret og gemt, ligesom du ville forvente.';

$GLOBALS["lang"]['Open-AudIT was written by an English speaking Australian. Everything in the application uses English wording. However Open-AudIT has always supported multiple languages for display. These translations are not always correct, because the developers do not natively speak the language of every translation offered.<br><br>What can you do if something is not correct in the translation?'] = 'Open- Audit blev skrevet af en engelsktalende australsk. Alt i ansøgningen bruger engelsk ordlyd. Men Open- Audit har altid støttet flere sprog til visning. Disse oversættelser er ikke altid korrekte, fordi udviklerne ikke indfødte taler sproget i hver oversættelse tilbydes.<br/><br/>Hvad kan du gøre, hvis noget ikke er korrekt i oversættelsen?';

$GLOBALS["lang"]['OpenLDAP'] = 'OpenLDAP';

$GLOBALS["lang"]['OpenScap is Installed'] = 'OpenScap er installeret';

$GLOBALS["lang"]['Opening a Support Ticket?'] = 'Åbner du en billet?';

$GLOBALS["lang"]['openldap_user_dn'] = 'Openldap bruger Dn';

$GLOBALS["lang"]['Openldap User Dn'] = 'Openldap bruger Dn';

$GLOBALS["lang"]['openldap_user_membership_attribute'] = 'Openldap Brugermedlemsattribut';

$GLOBALS["lang"]['Openldap User Membership Attribute'] = 'Openldap Brugermedlemsattribut';

$GLOBALS["lang"]['open|filtered'] = 'Åbent 124; filtreret';

$GLOBALS["lang"]['Open|filtered'] = 'Åbent 124; filtreret';

$GLOBALS["lang"]['Operating System'] = 'Driftssystem';

$GLOBALS["lang"]['Operating System Family Contains'] = 'Operativsystemfamilie Indeholder';

$GLOBALS["lang"]['Operating Systems'] = 'Operativsystemer';

$GLOBALS["lang"]['Operators'] = 'Operatører';

$GLOBALS["lang"]['optical'] = 'Optisk';

$GLOBALS["lang"]['Optical'] = 'Optisk';

$GLOBALS["lang"]['Optimized'] = 'Optimeret';

$GLOBALS["lang"]['Option #1 - Change the data'] = 'Valgmulighed # 1 - Ændr data';

$GLOBALS["lang"]['Option #2 - Change the translation file'] = 'Tilvalg # 2 - Skift oversættelsesfil';

$GLOBALS["lang"]['Optional Agent Based Auditing'] = 'Valgfri agentbaseret revision';

$GLOBALS["lang"]['Optional version as audited by Open-AudIT. Use the percent sign % as a wildcard.'] = 'Valgfri version som revideret af Open- Audit. Brug procenttegnet% som et wildcard.';

$GLOBALS["lang"]['options'] = 'Indstillinger';

$GLOBALS["lang"]['Options'] = 'Indstillinger';

$GLOBALS["lang"]['Options, options, options'] = 'Indstillinger, indstillinger, indstillinger';

$GLOBALS["lang"]['Or'] = 'Eller';

$GLOBALS["lang"]['Or select from the below fields.'] = 'Eller vælg fra nedenstående felter.';

$GLOBALS["lang"]['org_descendants'] = 'Org Efterkommere';

$GLOBALS["lang"]['Org Descendants'] = 'Org Efterkommere';

$GLOBALS["lang"]['org_id'] = 'Org- id';

$GLOBALS["lang"]['Org ID'] = 'Org- id';

$GLOBALS["lang"]['Organisation'] = 'Organisation';

$GLOBALS["lang"]['organisation'] = 'Organisation';

$GLOBALS["lang"]['Organisation Descendants'] = 'Organisationsefterkommere';

$GLOBALS["lang"]['Organisations'] = 'Organisationer';

$GLOBALS["lang"]['Organisations can extend and enhance the level of detail that is stored against every discovered device using custom fields and the open core allows for easy integration into CMDB, event management and ticketing systems.'] = 'Organisationer kan udvide og forbedre detaljeringsniveauet, der er gemt mod hver opdaget enhed ved hjælp af brugerdefinerede felter og den åbne kerne giver mulighed for nem integration i CMDB, event management og billetsystemer.';

$GLOBALS["lang"]['orgs'] = 'Porrer';

$GLOBALS["lang"]['Orgs'] = 'Porrer';

$GLOBALS["lang"]['Orgs Name'] = 'Org- navn';

$GLOBALS["lang"]['Orgs in Open-AudIT are a key item. A user has a primary Org as well as a list of Orgs they can access. A user combines this with a list of assigned roles that define what actions they can take on items assigned to the Orgs they have access to. The combination of a users <i>orgs</i> and <i>roles</i> define what they can and cannot do within Open-AudIT.<br><br>Most items in Open-AudIT are assigned to an Org. Devices, Locations, Networks, etc, etc.<br><br>Orgs can have child Orgs. Think of an organisational chart (tree) structure. If a user has access to a specific Org, most of the time (not always) they also have access to that Orgs descendants.'] = 'Orgs i Open- Audit er et nøgleelement. En bruger har en primær Org samt en liste over Orgs, de kan få adgang til. En bruger kombinerer dette med en liste over tildelte roller, der definerer, hvilke handlinger de kan tage på emner, der er tildelt til Orgs de har adgang til. Kombinationen af en bruger <i>orgs</i> og <i>roller</i> definere, hvad de kan og ikke kan gøre i Open- Audit.<br/><br/>De fleste elementer i Open- Audit er tildelt en org. enheder, lokaliseringer, netværk, osv.<br/><br/>Orgs kan få børn Orgs. Tænk på en organisationsstruktur (træ). Hvis en bruger har adgang til en bestemt Org, det meste af tiden (ikke altid) de har også adgang til, at Orgs efterkommere.';

$GLOBALS["lang"]['orientation'] = 'Orientering';

$GLOBALS["lang"]['Orientation'] = 'Orientering';

$GLOBALS["lang"]['os'] = 'Os';

$GLOBALS["lang"]['Os'] = 'Os';

$GLOBALS["lang"]['os_arch'] = 'Os Arch';

$GLOBALS["lang"]['Os Arch'] = 'Os Arch';

$GLOBALS["lang"]['os_bit'] = 'Os Bit';

$GLOBALS["lang"]['Os Bit'] = 'Os Bit';

$GLOBALS["lang"]['os_cpe'] = 'Formand';

$GLOBALS["lang"]['Os Cpe'] = 'Formand';

$GLOBALS["lang"]['os_display_version'] = 'Os Display Version';

$GLOBALS["lang"]['Os Display Version'] = 'Os Display Version';

$GLOBALS["lang"]['os_family'] = 'Os familie';

$GLOBALS["lang"]['Os Family'] = 'Os familie';

$GLOBALS["lang"]['os_group'] = 'Os Group';

$GLOBALS["lang"]['Os Group'] = 'Os Group';

$GLOBALS["lang"]['os_installation_date'] = 'Os installationsdato';

$GLOBALS["lang"]['Os Installation Date'] = 'Os installationsdato';

$GLOBALS["lang"]['os_licence_expiry'] = 'O \'s Licence Expiriy';

$GLOBALS["lang"]['Os Licence Expiry'] = 'O \'s Licence Expiriy';

$GLOBALS["lang"]['os_license'] = 'Os Licens';

$GLOBALS["lang"]['Os License'] = 'Os Licens';

$GLOBALS["lang"]['os_license_code'] = 'Os License Code';

$GLOBALS["lang"]['Os License Code'] = 'Os License Code';

$GLOBALS["lang"]['os_license_mode'] = 'Os Licenstilstand';

$GLOBALS["lang"]['Os License Mode'] = 'Os Licenstilstand';

$GLOBALS["lang"]['os_license_type'] = 'Os Licenstype';

$GLOBALS["lang"]['Os License Type'] = 'Os Licenstype';

$GLOBALS["lang"]['os_name'] = 'Os navn';

$GLOBALS["lang"]['Os Name'] = 'Os navn';

$GLOBALS["lang"]['os_version'] = 'Os Version';

$GLOBALS["lang"]['Os Version'] = 'Os Version';

$GLOBALS["lang"]['Other'] = 'Andre varer';

$GLOBALS["lang"]['Other than that restriction, you are free to select attributes as required. It is a good idea to use the menu'] = 'Ud over denne begrænsning kan du frit vælge attributter efter behov. Det er en god idé at bruge menuen';

$GLOBALS["lang"]['Others'] = 'Andre';

$GLOBALS["lang"]['Our default Integration also enables a discovery on any externally supplied devices. So we ship a default discovery for the Default Integration out of the box. These use the default matching rules, but also enable matching on IP address.'] = 'Vores standard Integration muliggør også en opdagelse på eksternt leverede enheder. Så vi sender en standard opdagelse for standard integration ud af boksen. Disse bruger standard matching regler, men også aktivere matching på IP-adresse.';

$GLOBALS["lang"]['Our examples will use the <i>type</i> column.'] = 'Vores eksempler vil bruge <i>type</i> kolonne.';

$GLOBALS["lang"]['Our framework uploads files here for processing, then deletes them. Think submitted audit results, etc.'] = 'Vores rammer uploader filer her til behandling, og sletter dem. Tænk på indsendte revisionsresultater osv.';

$GLOBALS["lang"]['Our goal with the initial integrations release was specifically for NMIS to Open-AudIT integration to <i>just work</i>. If you are using the programs on Linux, you can literally click a single button to execute the integration. Nothing more is required. Having said that, the integration itself is extremely configurable - so if something is not to your preference, it can easily be changed.'] = 'Vores mål med den oprindelige integration udgivelse var specifikt for NMIS til Open- Audit integration til <i>bare arbejde</i>. Hvis du bruger programmerne på Linux, kan du bogstaveligt talt klikke på en enkelt knap for at udføre integrationen. Der kræves ikke mere. Når det er sagt, er selve integrationen yderst konfigurerbar - så hvis noget ikke er i din præference, kan det nemt ændres.';

$GLOBALS["lang"]['Our new feature called Vulnerabilities gives you the ability to quickly determine if any devices are affected by any CVE (Common Vulnerability Exposure) - but how?<br><br>FirstWave constantly consumes the output from the Nist NVD feed. We take this and apply a few restrictions, then extract the affected programs and build a SQL query for reporting. Your Open-AudIT instance reaches out to FirstWave and requests any new vulnerabilities on a regular basis. When it receives a new vulnerability record, it is run against the database and the result stored. Each time a device is processed, all matching vulnerabilities are again executed and the result stored. This means when viewing a vulnerability list, we do not need to calculate all affected devices - we already have the result. When you view an individual vulnerability record, we do indeed recalculate the result for this singular vulnerability.<br><br>So, you are always up to date!<br><br>In addition to this, we also calculate the result of all vulnerabilities for all devices daily (usually at a quiet time, say 2am).<br><br>In your instance of Open-AudIT, we allow you to select which vendors you care about. i.e. there is no use retrieving vulnerability records from a vendor whose software you do not use or have installed. By default, our vendor list is Adobe, Apple, Cisco, Google, Microsoft, Mozilla, and Redhat.<br><br>This all sounds very simple, but behind the scenes a <b>lot</b> is going on. For instance, the CVE record contains a list of affected software - but those software names do not match what we receive when we audit a computer. A good example is Apache. Typically, a CVE record will say the affected software is http_server. In reality, this appears as apache2 (Ubuntu), httpd (Redhat), Apache HTTP Server (Windows) - and others. So, we have to first determine what is the actual name of the program we receive when we ask a computer, and there may be multiple names. After that we must parse the CVE record and create a matching SQL statement. Allowing for multiple program names as above, and multiple versions, version ranges, and even multiple different pieces of software (an example is Thunderbird and Firefox in a single CVE). And your instance of Open-AudIT must take this and apply Orgs filtering as well. And that is just a single CVE. What about determining which CVEs you have and do not have? What about adding a vendor to the list later? So many things to consider!<br><br>As well as the usual reporting, we also have a few new widgets available for Dashboards, based on Vulnerabilities data.'] = 'Vores nye funktion kaldet sårbarhed giver dig mulighed for hurtigt at afgøre, om nogen enheder er påvirket af nogen CVE (fælles sårbarhed eksponering) - men hvordan?<br/><br/>FirstWave bruger konstant output fra Nist NVD feed. Vi tager dette og anvender et par restriktioner, derefter udtrække de berørte programmer og bygge en SQL forespørgsel til rapportering. Din Open- Audit instans når ud til FirstWave og anmoder om nye sårbarheder på en regelmæssig basis. Når det modtager en ny sårbarhed rekord, det køres mod databasen og resultatet gemt. Hver gang en enhed behandles, bliver alle matchende sårbarheder igen udført og resultatet gemt. Det betyder, at når vi ser en sårbarhedsliste, behøver vi ikke at beregne alle berørte enheder - vi har allerede resultatet. Når du ser en individuel sårbarhed rekord, vi faktisk omberegne resultatet for denne enestående sårbarhed.<br/><br/>Så du er altid opdateret!<br/><br/>Derudover beregner vi også resultatet af alle sårbarheder for alle enheder dagligt (normalt på et roligt tidspunkt, siger 2am).<br/><br/>I dit tilfælde af Open- Audit, lader vi dig vælge, hvilke leverandører du holder af. dvs der er ingen brug hentning sårbarhed optegnelser fra en sælger, hvis software du ikke bruger eller har installeret. Som standard er vores leverandørliste Adobe, Apple, Cisco, Google, Microsoft, Mozilla og Redhat.<br/><br/>Det hele lyder meget simpelt, men bag kulisserne en <b>parti</b> Jeg er på vej. For eksempel indeholder CVE record en liste over de berørte programmer - men disse softwarenavne matcher ikke hvad vi modtager, når vi reviderer en computer. Et godt eksempel er Apache. Typisk, en CVE rekord vil sige den berørte software er http _ server. I virkeligheden, dette vises som apache2 (Ubuntu), httpd (Redhat), Apache HTTP Server (Windows) - og andre. Vi skal først finde ud af, hvad der er navnet på det program, vi modtager, når vi spørger en computer, og der kan være flere navne. Derefter skal vi fortolke CVE record og oprette en matchende SQL erklæring. Tillader flere programnavne som ovenfor, og flere versioner, version intervaller, og endda flere forskellige stykker software (et eksempel er Thunderbird og Firefox i en enkelt CVE). Og dit tilfælde af Open- Audit skal tage dette og anvende orgs filtrering så godt. Og det er bare en enkelt CVE. Hvad med at bestemme, hvilke CVE \'er du har og ikke har? Hvad med at tilføje en leverandør til listen senere? Så mange ting at overveje!<br/><br/>Ud over den sædvanlige rapportering, har vi også et par nye widgets til rådighed for Dashboards, baseret på sårbarheder data.';

$GLOBALS["lang"]['Our timeout for a SSH response'] = 'Vores timeout for et SSH svar';

$GLOBALS["lang"]['Our timeout for a WMI response'] = 'Vores timeout for et WMI svar';

$GLOBALS["lang"]['Our timeout for an SNMP response'] = 'Vores timeout for et SNMP svar';

$GLOBALS["lang"]['Our timeout for an audit script response'] = 'Vores timeout for en revision script svar';

$GLOBALS["lang"]['output'] = 'Output';

$GLOBALS["lang"]['Output'] = 'Output';

$GLOBALS["lang"]['outputs'] = 'Resultater';

$GLOBALS["lang"]['Outputs'] = 'Resultater';

$GLOBALS["lang"]['Overall severity score (0–10).'] = 'Samlet sværhedsgrad score (0- 10).';

$GLOBALS["lang"]['overwrite'] = 'Overskriv';

$GLOBALS["lang"]['Overwrite'] = 'Overskriv';

$GLOBALS["lang"]['owner'] = 'Ejer';

$GLOBALS["lang"]['Owner'] = 'Ejer';

$GLOBALS["lang"]['PAExec is a freely-redistributable re-implementation of SysInternal/Microsofts popular PsExec program.  PAExec aims to be a drop in replacement for PsExec, so the command-line usage is identical, with additional options also supported.  This work was originally inspired by Talha Tariqs RemCom.'] = 'PAExec er en freely- redistributable re- implementering af SysIntern / Metts populære PsExec program. PAExec har til formål at være et fald i udskiftning af PsExec, så kommandolinjebrugen er identisk, med yderligere muligheder også understøttet. Dette værk blev oprindeligt inspireret af Talha Tariqs RemCom.';

$GLOBALS["lang"]['PHP'] = 'PHP';

$GLOBALS["lang"]['POD'] = 'POD';

$GLOBALS["lang"]['POSTing data'] = 'POSTER data';

$GLOBALS["lang"]['Package'] = 'Emballage';

$GLOBALS["lang"]['packages'] = 'Pakker';

$GLOBALS["lang"]['Packages'] = 'Pakker';

$GLOBALS["lang"]['Packages are used to report on things such as <i>banned software</i>, AntiVirus on servers, etc.<br><br>Open-AudIT provides widgets that build upon also supplied repots to detemine the status of antivirus, firewall and other software.'] = 'Pakker bruges til at rapportere om ting såsom <i>forbudt software</i>, AntiVirus på servere, osv.<br/><br/>Open- Audit giver widgets, der bygger på også leveret repotter til detemine status af antivirus, firewall og anden software.';

$GLOBALS["lang"]['pagefile'] = 'Sidefil';

$GLOBALS["lang"]['Pagefile'] = 'Sidefil';

$GLOBALS["lang"]['Pakistan'] = 'Pakistan';

$GLOBALS["lang"]['Palau'] = 'Palau';

$GLOBALS["lang"]['Palestinian Territory'] = 'Palæstinensisk område';

$GLOBALS["lang"]['Panama'] = 'Panama';

$GLOBALS["lang"]['Papua New Guinea'] = 'Papua Ny Guinea';

$GLOBALS["lang"]['Paraguay'] = 'Paraguayfrance. kgm';

$GLOBALS["lang"]['Parameters'] = 'Parametre';

$GLOBALS["lang"]['Paranoid'] = 'Paranoid';

$GLOBALS["lang"]['Parent'] = 'Forældre';

$GLOBALS["lang"]['parent_id'] = 'Forældre- id';

$GLOBALS["lang"]['Parent ID'] = 'Forældre- id';

$GLOBALS["lang"]['parent_name'] = 'Fornavn';

$GLOBALS["lang"]['Parent Name'] = 'Fornavn';

$GLOBALS["lang"]['part_number'] = 'Delnummer';

$GLOBALS["lang"]['Part Number'] = 'Delnummer';

$GLOBALS["lang"]['part_of_domain'] = 'Del af domæne';

$GLOBALS["lang"]['Part Of Domain'] = 'Del af domæne';

$GLOBALS["lang"]['Partition'] = 'Partition';

$GLOBALS["lang"]['partition_count'] = 'Partitionstælling';

$GLOBALS["lang"]['Partition Count'] = 'Partitionstælling';

$GLOBALS["lang"]['partition_disk_index'] = 'Partition- diskindeks';

$GLOBALS["lang"]['Partition Disk Index'] = 'Partition- diskindeks';

$GLOBALS["lang"]['Pass'] = 'Pass';

$GLOBALS["lang"]['Passed'] = 'Bestået';

$GLOBALS["lang"]['Passive Optical Local Area Network'] = 'Passivt optisk lokalnet';

$GLOBALS["lang"]['Password'] = 'Adgangskode';

$GLOBALS["lang"]['password'] = 'Adgangskode';

$GLOBALS["lang"]['password_changeable'] = 'Adgangskode kan ændres';

$GLOBALS["lang"]['Password Changeable'] = 'Adgangskode kan ændres';

$GLOBALS["lang"]['password_disabled'] = 'Adgangskode deaktiveret';

$GLOBALS["lang"]['Password Disabled'] = 'Adgangskode deaktiveret';

$GLOBALS["lang"]['password_expires'] = 'Adgangskode Udløber';

$GLOBALS["lang"]['Password Expires'] = 'Adgangskode Udløber';

$GLOBALS["lang"]['password_last_changed'] = 'Kodeord senest ændret';

$GLOBALS["lang"]['Password Last Changed'] = 'Kodeord senest ændret';

$GLOBALS["lang"]['password_required'] = 'Adgangskode påkrævet';

$GLOBALS["lang"]['Password Required'] = 'Adgangskode påkrævet';

$GLOBALS["lang"]['patch_panel'] = 'Patchpanel';

$GLOBALS["lang"]['Patch Panel'] = 'Patchpanel';

$GLOBALS["lang"]['patch_panel_port'] = 'Patch- panel- port';

$GLOBALS["lang"]['Patch Panel Port'] = 'Patch- panel- port';

$GLOBALS["lang"]['path'] = 'Sti';

$GLOBALS["lang"]['Path'] = 'Sti';

$GLOBALS["lang"]['Performance'] = 'Resultater';

$GLOBALS["lang"]['Performed'] = 'Performeret';

$GLOBALS["lang"]['Permission'] = 'Tilladelse';

$GLOBALS["lang"]['Permission Required'] = 'Påkrævet tilladelse';

$GLOBALS["lang"]['permissions'] = 'Tilladelser';

$GLOBALS["lang"]['Permissions'] = 'Tilladelser';

$GLOBALS["lang"]['Persian'] = 'Persisk';

$GLOBALS["lang"]['Personal Area Network'] = 'Personlige områdenetværk';

$GLOBALS["lang"]['Personal area network'] = 'Personlige områdenetværk';

$GLOBALS["lang"]['Peru'] = 'Peru';

$GLOBALS["lang"]['Philippines'] = 'Filippinerne';

$GLOBALS["lang"]['phone'] = 'Telefon';

$GLOBALS["lang"]['Phone'] = 'Telefon';

$GLOBALS["lang"]['Physical CPUs'] = 'Fysiske CPU \'er';

$GLOBALS["lang"]['physical_count'] = 'Fysisk optælling';

$GLOBALS["lang"]['Physical Count'] = 'Fysisk optælling';

$GLOBALS["lang"]['physical_depth'] = 'Fysisk dybde';

$GLOBALS["lang"]['Physical Depth'] = 'Fysisk dybde';

$GLOBALS["lang"]['physical_height'] = 'Fysisk højde';

$GLOBALS["lang"]['Physical Height'] = 'Fysisk højde';

$GLOBALS["lang"]['physical_width'] = 'Fysisk bredde';

$GLOBALS["lang"]['Physical Width'] = 'Fysisk bredde';

$GLOBALS["lang"]['picture'] = 'Billede';

$GLOBALS["lang"]['Picture'] = 'Billede';

$GLOBALS["lang"]['pid'] = 'Pid';

$GLOBALS["lang"]['Pid'] = 'Pid';

$GLOBALS["lang"]['Pie Chart'] = 'Piediagram';

$GLOBALS["lang"]['Pie charts must return name or my_name, description or my_description and count.'] = 'Pie diagrammer skal returnere navn eller mit _ navn, beskrivelse eller min _ beskrivelse og tælle.';

$GLOBALS["lang"]['ping'] = 'Ping';

$GLOBALS["lang"]['Ping'] = 'Ping';

$GLOBALS["lang"]['Ping Target'] = 'Ping Target';

$GLOBALS["lang"]['Pitcairn Islands'] = 'Pitcairnøerne';

$GLOBALS["lang"]['placement'] = 'Placering';

$GLOBALS["lang"]['Placement'] = 'Placering';

$GLOBALS["lang"]['Plan and conduct internal audits'] = 'Planlægning og gennemførelse af interne revisioner';

$GLOBALS["lang"]['Please have an Open-AudIT administrator logon and upgrade the database.'] = 'Venligst have en Open- Audit administrator logon og opgradere databasen.';

$GLOBALS["lang"]['Please log in and change these ASAP.'] = 'Vær venlig at logge ind og ændre disse hurtigst muligt.';

$GLOBALS["lang"]['Please log on to the Open-AudIT Server (either Windows or Linux) and run <code>nslookup IP_ADDRESS_OF_TARGET</code> in the command prompt or shell. It must be able to resolve the IP to a name.'] = 'Log på Open- AudiT Server (enten Windows eller Linux) og kør <code>nslookup IP_ADDRESS_OF_TARGET</code> i kommandoprompten eller skallen. Det skal være i stand til at løse IP til et navn.';

$GLOBALS["lang"]['Please note that the select box will override the text input box.'] = 'Bemærk venligst at feltet Vælg vil tilsidesætte tekstinddatafeltet.';

$GLOBALS["lang"]['Please see the FAQ'] = 'Se venligst FAQ';

$GLOBALS["lang"]['Please send all three files to your support contact at Opmantek and describe your issue.'] = 'Send venligst alle tre filer til din støttekontakt på Opmantek og beskriv dit problem.';

$GLOBALS["lang"]['Please set using'] = 'Sæt venligst brug';

$GLOBALS["lang"]['Please visit the homepage at'] = 'Besøg venligst hjemmesiden på';

$GLOBALS["lang"]['pod'] = 'Pod';

$GLOBALS["lang"]['Pod'] = 'Pod';

$GLOBALS["lang"]['Poland'] = 'Polen';

$GLOBALS["lang"]['Policies'] = 'Politikker';

$GLOBALS["lang"]['Policies have exceptions.'] = 'Politikkerne har undtagelser.';

$GLOBALS["lang"]['policy'] = 'Politik';

$GLOBALS["lang"]['Policy'] = 'Politik';

$GLOBALS["lang"]['policy_id'] = 'Politik- id';

$GLOBALS["lang"]['Policy ID'] = 'Politik- id';

$GLOBALS["lang"]['Policy Result'] = 'Politisk resultat';

$GLOBALS["lang"]['Policy Results'] = 'Resultater af politikker';

$GLOBALS["lang"]['Polish'] = 'Polsk';

$GLOBALS["lang"]['Polite'] = 'Kalit';

$GLOBALS["lang"]['Populate the with values provided below:'] = 'Populér værdierne nedenfor:';

$GLOBALS["lang"]['Populated by audit.'] = 'Populeret ved revision.';

$GLOBALS["lang"]['Populated by discovery and audit.'] = 'Populeret af opdagelse og revision.';

$GLOBALS["lang"]['Populated dynamically.'] = 'Populeret dynamisk.';

$GLOBALS["lang"]['Populated from DNS.'] = 'Populeret fra DNS.';

$GLOBALS["lang"]['Populated from SNMP discovery.'] = 'Populeret fra SNMP opdagelse.';

$GLOBALS["lang"]['Populated from device audits.'] = 'Opdelt efter udstyrskontrol.';

$GLOBALS["lang"]['Populated from hostname.'] = 'Populeret fra værtsnavn.';

$GLOBALS["lang"]['Populated from machine-id on Linux.'] = 'Populeret fra maskin- id på Linux.';

$GLOBALS["lang"]['Populated from the IP for the default route or the IP detected in discovery.'] = 'Populeret fra IP for standardruten eller IP opdaget i opdagelse.';

$GLOBALS["lang"]['Populated from the hostname command.'] = 'Populeret fra værtsnavnekommandoen.';

$GLOBALS["lang"]['Populated with additional data from the external system, in a JSON representation.'] = 'Populeret med yderligere data fra det eksterne system i en JSON repræsentation.';

$GLOBALS["lang"]['port'] = 'Port';

$GLOBALS["lang"]['Port'] = 'Port';

$GLOBALS["lang"]['port_name'] = 'Portnavn';

$GLOBALS["lang"]['Port Name'] = 'Portnavn';

$GLOBALS["lang"]['port_number'] = 'Portnummer';

$GLOBALS["lang"]['Port Number'] = 'Portnummer';

$GLOBALS["lang"]['ports_in_order'] = 'Havne i rækkefølge';

$GLOBALS["lang"]['Ports In Order'] = 'Havne i rækkefølge';

$GLOBALS["lang"]['ports_stop_after'] = 'Havne Stop efter';

$GLOBALS["lang"]['Ports Stop After'] = 'Havne Stop efter';

$GLOBALS["lang"]['Portugal, Portuguese Republic'] = 'Portugal, Portugal';

$GLOBALS["lang"]['Portuguese'] = 'Portugisisk';

$GLOBALS["lang"]['Portuguese (Brazil)'] = 'Portugisisk (Brasilien)';

$GLOBALS["lang"]['position'] = 'Stilling';

$GLOBALS["lang"]['Position'] = 'Stilling';

$GLOBALS["lang"]['Post-Certification'] = 'Post- Certificering';

$GLOBALS["lang"]['postcode'] = 'Postnummer';

$GLOBALS["lang"]['Postcode'] = 'Postnummer';

$GLOBALS["lang"]['power_circuit'] = 'Kraftkredsløb';

$GLOBALS["lang"]['Power Circuit'] = 'Kraftkredsløb';

$GLOBALS["lang"]['power_sockets'] = 'Strømstikdåse';

$GLOBALS["lang"]['Power Sockets'] = 'Strømstikdåse';

$GLOBALS["lang"]['Predictable'] = 'Forudsigelig';

$GLOBALS["lang"]['Preferences'] = 'Indstillinger';

$GLOBALS["lang"]['Prepare for recertification every 3 years'] = 'Forbered gencertificering hvert 3. år';

$GLOBALS["lang"]['Prerequisites'] = 'Forudsætninger';

$GLOBALS["lang"]['Prerequisites and Tests'] = 'Forudsætninger og test';

$GLOBALS["lang"]['present'] = 'Nuværende';

$GLOBALS["lang"]['Present'] = 'Nuværende';

$GLOBALS["lang"]['previous_value'] = 'Forrige værdi';

$GLOBALS["lang"]['Previous Value'] = 'Forrige værdi';

$GLOBALS["lang"]['primary'] = 'Primær';

$GLOBALS["lang"]['Primary'] = 'Primær';

$GLOBALS["lang"]['Primary Key'] = 'Primær nøgle';

$GLOBALS["lang"]['print_queue'] = 'Udskriv kø';

$GLOBALS["lang"]['Print Queue'] = 'Udskriv kø';

$GLOBALS["lang"]['printer_color'] = 'Printerfarve';

$GLOBALS["lang"]['Printer Color'] = 'Printerfarve';

$GLOBALS["lang"]['printer_duplex'] = 'Printerduplex';

$GLOBALS["lang"]['Printer Duplex'] = 'Printerduplex';

$GLOBALS["lang"]['printer_port_name'] = 'Printerhavnenavn';

$GLOBALS["lang"]['Printer Port Name'] = 'Printerhavnenavn';

$GLOBALS["lang"]['printer_shared'] = 'Printer delt';

$GLOBALS["lang"]['Printer Shared'] = 'Printer delt';

$GLOBALS["lang"]['printer_shared_name'] = 'Udskriftsdelt navn';

$GLOBALS["lang"]['Printer Shared Name'] = 'Udskriftsdelt navn';

$GLOBALS["lang"]['priority'] = 'Prioriteret';

$GLOBALS["lang"]['Priority'] = 'Prioriteret';

$GLOBALS["lang"]['Privacy Passphrase'] = 'Fortrolighedspassage';

$GLOBALS["lang"]['Privacy Protocol'] = 'Protokollen om beskyttelse af personlige oplysninger';

$GLOBALS["lang"]['privileges_required'] = 'Beføjelser påkrævet';

$GLOBALS["lang"]['Privileges Required'] = 'Beføjelser påkrævet';

$GLOBALS["lang"]['processor'] = 'Processor';

$GLOBALS["lang"]['Processor'] = 'Processor';

$GLOBALS["lang"]['processor_count'] = 'Processortæller';

$GLOBALS["lang"]['Processor Count'] = 'Processortæller';

$GLOBALS["lang"]['processor_slot_count'] = 'Processor Slot Count';

$GLOBALS["lang"]['Processor Slot Count'] = 'Processor Slot Count';

$GLOBALS["lang"]['processor_type'] = 'Processortype';

$GLOBALS["lang"]['Processor Type'] = 'Processortype';

$GLOBALS["lang"]['Processors'] = 'Forarbejdningsvirksomheder';

$GLOBALS["lang"]['product_name'] = 'Produktnavn';

$GLOBALS["lang"]['Product Name'] = 'Produktnavn';

$GLOBALS["lang"]['Product Name Match from CPE: '] = 'Produktnavn Match fra CPE: ';

$GLOBALS["lang"]['products'] = 'Produkter';

$GLOBALS["lang"]['Products'] = 'Produkter';

$GLOBALS["lang"]['Professional'] = 'Professionel';

$GLOBALS["lang"]['profile'] = 'Profil';

$GLOBALS["lang"]['Profile'] = 'Profil';

$GLOBALS["lang"]['program'] = 'Program';

$GLOBALS["lang"]['Program'] = 'Program';

$GLOBALS["lang"]['Properties'] = 'Egenskaber';

$GLOBALS["lang"]['Proprietary. If you want to modify HighCharts you may require a'] = 'Proprietær. Hvis du ønsker at ændre highcharts kan du kræve en';

$GLOBALS["lang"]['Protects confidentiality, integrity, and availability of information'] = 'Beskytter fortrolighed, integritet og adgang til oplysninger';

$GLOBALS["lang"]['protocol'] = 'Protokol';

$GLOBALS["lang"]['Protocol'] = 'Protokol';

$GLOBALS["lang"]['Provide a description and select and expires duration.'] = 'Giv en beskrivelse og vælg og udløber varigheden.';

$GLOBALS["lang"]['Provide a name - we humbly recommand Open-AudIT &#128512;, but you can name it anything you like.<br>From the Open-AudIT form, copy the value for the <i>Redirect URI</i> field and paste it into the <i>Sign-in redirect URIs</i> field in OKTA.<br>The Sign-out redirect URIs is optional, but if you want you can use open-audit/index.php/logout with your Open-AudIT servers http address, as per the screenshot.<br>Normally your Open-AudIT URL will look something like'] = 'Giv et navn - vi ydmygt recommand Open- Audits, men du kan navngive det, hvad du vil.<br/>Fra Open- Audit formularen, kopiere værdien for <i>Omdiriger URI</i> felt og indsætte det i <i>Signal- i omdirigerede URI \'er</i> felt i OKTA.<br/>Signal- out omdirigerer URI \'er er valgfrit, men hvis du vil, kan du bruge open- audit / indeks. php / logout med dine Open- Audit servere http adresse, som pr skærmbilledet.<br/>Normalt Open- Audit URL vil se noget lignende';

$GLOBALS["lang"]['Provided you have the correct credentials, Device Seed Discovery works as follows'] = 'Forudsat du har de korrekte legitimationer, Enhedsfrø Discovery fungerer som følger';

$GLOBALS["lang"]['provider'] = 'Udbyder';

$GLOBALS["lang"]['Provider'] = 'Udbyder';

$GLOBALS["lang"]['published'] = 'Offentliggjort';

$GLOBALS["lang"]['Published'] = 'Offentliggjort';

$GLOBALS["lang"]['published_date'] = 'Offentliggjort dato';

$GLOBALS["lang"]['Published Date'] = 'Offentliggjort dato';

$GLOBALS["lang"]['publisher'] = 'Forlag';

$GLOBALS["lang"]['Publisher'] = 'Forlag';

$GLOBALS["lang"]['Puerto Rico'] = 'Puerto Rico';

$GLOBALS["lang"]['Purchase'] = 'Køb';

$GLOBALS["lang"]['purchase_amount'] = 'Indkøbsbeløb';

$GLOBALS["lang"]['Purchase Amount'] = 'Indkøbsbeløb';

$GLOBALS["lang"]['purchase_cost_center'] = 'Køb Cost Center';

$GLOBALS["lang"]['Purchase Cost Center'] = 'Køb Cost Center';

$GLOBALS["lang"]['purchase_count'] = 'Indkøbstal';

$GLOBALS["lang"]['Purchase Count'] = 'Indkøbstal';

$GLOBALS["lang"]['purchase_date'] = 'Indkøbsdato';

$GLOBALS["lang"]['Purchase Date'] = 'Indkøbsdato';

$GLOBALS["lang"]['purchase_invoice'] = 'Køb faktura';

$GLOBALS["lang"]['Purchase Invoice'] = 'Køb faktura';

$GLOBALS["lang"]['purchase_order'] = 'Indkøbsordre';

$GLOBALS["lang"]['Purchase Order'] = 'Indkøbsordre';

$GLOBALS["lang"]['purchase_order_number'] = 'Købsordrenummer';

$GLOBALS["lang"]['Purchase Order Number'] = 'Købsordrenummer';

$GLOBALS["lang"]['purchase_service_contract_number'] = 'Kontraktnummer';

$GLOBALS["lang"]['Purchase Service Contract Number'] = 'Kontraktnummer';

$GLOBALS["lang"]['purchase_vendor'] = 'Køb Vendor';

$GLOBALS["lang"]['Purchase Vendor'] = 'Køb Vendor';

$GLOBALS["lang"]['purpose'] = 'Formål';

$GLOBALS["lang"]['Purpose'] = 'Formål';

$GLOBALS["lang"]['Qatar'] = 'Qatar';

$GLOBALS["lang"]['queries'] = 'Forespørgsler';

$GLOBALS["lang"]['Queries'] = 'Forespørgsler';

$GLOBALS["lang"]['Queries are an important part of Open-AudIT. They are what enables you to get meaningful information from all the device data you have discovered. Along with summaries and groups, they provide a powerful mechanism to extract crucial information.'] = 'Forespørgsler er en vigtig del af Open- Audit. De er, hvad der gør det muligt for dig at få meningsfulde oplysninger fra alle de enhedsdata, du har opdaget. Sammen med resuméer og grupper, de giver en kraftfuld mekanisme til at udtrække vigtige oplysninger.';

$GLOBALS["lang"]['Queries for Groups should select only the'] = 'Forespørgsler til grupper bør kun vælge';

$GLOBALS["lang"]['Query'] = 'Forespørgsel';

$GLOBALS["lang"]['Query this Active Directory attribute first to determine the users work unit.'] = 'Forespørg denne Active Directory attribut først for at bestemme brugerne arbejde enhed.';

$GLOBALS["lang"]['Query this Active Directory attribute second to determine the users work unit.'] = 'Forespørg denne Active Directory attribut anden at bestemme brugerne arbejde enhed.';

$GLOBALS["lang"]['queue'] = 'Kø';

$GLOBALS["lang"]['Queue'] = 'Kø';

$GLOBALS["lang"]['Queue Limit'] = 'Kø grænse';

$GLOBALS["lang"]['Queued Device Audits'] = 'Revision af enheder i kø';

$GLOBALS["lang"]['Queued IP Scans'] = 'I kø IP- scans';

$GLOBALS["lang"]['Queued Items'] = 'Poster i kø';

$GLOBALS["lang"]['RBAC for Active Directory and openLDAP'] = 'RBAC for Active Directory og openLDAP';

$GLOBALS["lang"]['RU Start'] = 'RU Start';

$GLOBALS["lang"]['RX Bitrate'] = 'RX Bitrate';

$GLOBALS["lang"]['RX Freq'] = 'RX Freq';

$GLOBALS["lang"]['RX Level'] = 'RX- niveau';

$GLOBALS["lang"]['RX Power'] = 'RX- effekt';

$GLOBALS["lang"]['RX Profile'] = 'RX- profil';

$GLOBALS["lang"]['Rack'] = 'Rack';

$GLOBALS["lang"]['rack_devices'] = 'Rack-enheder';

$GLOBALS["lang"]['Rack Devices'] = 'Rack-enheder';

$GLOBALS["lang"]['rack_id'] = 'Rack ID';

$GLOBALS["lang"]['Rack ID'] = 'Rack ID';

$GLOBALS["lang"]['Rack Management and Reporting'] = 'Rack Management og rapportering';

$GLOBALS["lang"]['Racks'] = 'Raketter';

$GLOBALS["lang"]['racks'] = 'Raketter';

$GLOBALS["lang"]['radio'] = 'Radio';

$GLOBALS["lang"]['Radio'] = 'Radio';

$GLOBALS["lang"]['Radio MAC'] = 'Radio MAC';

$GLOBALS["lang"]['rationale'] = 'Rationale';

$GLOBALS["lang"]['Rationale'] = 'Rationale';

$GLOBALS["lang"]['raw'] = 'Rå varer';

$GLOBALS["lang"]['Raw'] = 'Rå varer';

$GLOBALS["lang"]['read'] = 'Læs';

$GLOBALS["lang"]['Read'] = 'Læs';

$GLOBALS["lang"]['Read our online documentation on the Open-AudIT Wiki.'] = 'Læs vores online dokumentation på Open- Audit Wiki.';

$GLOBALS["lang"]['Read through the log file at'] = 'Læs logfilen på';

$GLOBALS["lang"]['Received'] = 'Modtaget';

$GLOBALS["lang"]['Recently we have been asked the question - do you consider Open-AudIT more secure than other similar programs? As with most things, the answer is <i>it depends</i>.<br><br>Open-AudIT can be operated in such a way as to be extremely secure. But as usual with computer-based security, the more secure you wish to make something, the more inconvenient it becomes to use. The old phrase <i>the most secure computer is one that is turned off and in the cupboard<i> comes to mind.<br><br>Below we will outline some options that can be used with Open-AudIT that will increase security. Like most items within Open-AudIT, these are options and not mandatory. How far you take security is up to you.'] = 'For nylig er vi blevet stillet spørgsmålet - mener du Open- Audit mere sikker end andre lignende programmer? Som med de fleste ting, svaret er <i>det afhænger</i>.<br/><br/>Open- Aud IT kan betjenes på en sådan måde, at den er yderst sikker. Men som sædvanlig med computerbaseret sikkerhed, jo mere sikker du ønsker at gøre noget, jo mere ubelejligt det bliver at bruge. Den gamle sætning <i>den mest sikre computer er en, der er slukket og i skabet<i> kommer til at tænke.<br/><br/>Nedenfor vil vi skitsere nogle muligheder, der kan bruges med Open- Audit, der vil øge sikkerheden. Ligesom de fleste elementer i Open- Audit, disse er muligheder og ikke obligatoriske. Hvor langt du tager sikkerheden er op til dig.</i></i>';

$GLOBALS["lang"]['Recertification:</strong> Required every three years'] = 'Gengivelse: Krævet hvert tredje år';

$GLOBALS["lang"]['Red Query'] = 'Rød forespørgsel';

$GLOBALS["lang"]['Redirect URI'] = 'Omdiriger URI';

$GLOBALS["lang"]['redirect_uri'] = 'Omdiriger Uri';

$GLOBALS["lang"]['Redirect Uri'] = 'Omdiriger Uri';

$GLOBALS["lang"]['Reduces risk of data breaches and cyber threats'] = 'Reducerer risikoen for brud på data og cybertrusler';

$GLOBALS["lang"]['references'] = 'Henvisninger';

$GLOBALS["lang"]['References'] = 'Henvisninger';

$GLOBALS["lang"]['region'] = 'Region';

$GLOBALS["lang"]['Region'] = 'Region';

$GLOBALS["lang"]['registered_user'] = 'Registreret bruger';

$GLOBALS["lang"]['Registered User'] = 'Registreret bruger';

$GLOBALS["lang"]['Rejected'] = 'Afvist';

$GLOBALS["lang"]['rel'] = 'Rel';

$GLOBALS["lang"]['Rel'] = 'Rel';

$GLOBALS["lang"]['Release'] = 'Frigivelse';

$GLOBALS["lang"]['remediation'] = 'Rengøring';

$GLOBALS["lang"]['Remediation'] = 'Rengøring';

$GLOBALS["lang"]['Remote'] = 'Fjernbetjening';

$GLOBALS["lang"]['remote_address'] = 'Fjernadresse';

$GLOBALS["lang"]['Remote Address'] = 'Fjernadresse';

$GLOBALS["lang"]['remote_port'] = 'Fjernport';

$GLOBALS["lang"]['Remote Port'] = 'Fjernport';

$GLOBALS["lang"]['Remove'] = 'Fjern';

$GLOBALS["lang"]['Remove Exception'] = 'Fjern undtagelse';

$GLOBALS["lang"]['Repeat until you have a completely discovered and audited Windows PC.'] = 'Gentag indtil du har en helt opdaget og revideret Windows-pc.';

$GLOBALS["lang"]['Report'] = 'Rapport';

$GLOBALS["lang"]['Report on your devices, networks and more'] = 'Rapport om dine enheder, netværk og mere';

$GLOBALS["lang"]['reportable'] = 'Indberetningspligtige';

$GLOBALS["lang"]['Reportable'] = 'Indberetningspligtige';

$GLOBALS["lang"]['Reports'] = 'Rapporter';

$GLOBALS["lang"]['request'] = 'Anmodning';

$GLOBALS["lang"]['Request'] = 'Anmodning';

$GLOBALS["lang"]['Request Method'] = 'Ansøgningsmetode';

$GLOBALS["lang"]['Request Vulnerability'] = 'Anmodning om sårbarhed';

$GLOBALS["lang"]['Request a Specific CVE'] = 'Anmodning om en specifik CVE';

$GLOBALS["lang"]['requested'] = 'Besøgt';

$GLOBALS["lang"]['Requested'] = 'Besøgt';

$GLOBALS["lang"]['require_port'] = 'Kræv havn';

$GLOBALS["lang"]['Require Port'] = 'Kræv havn';

$GLOBALS["lang"]['Require an Open Port'] = 'Kræv en åben port';

$GLOBALS["lang"]['Required'] = 'Krævet';

$GLOBALS["lang"]['Required AWS user permissions'] = 'Krævede AWS-brugertilladelser';

$GLOBALS["lang"]['Required Fields'] = 'Krævede felter';

$GLOBALS["lang"]['Reset'] = 'Nulstil';

$GLOBALS["lang"]['Reset All Data'] = 'Nulstil alle data';

$GLOBALS["lang"]['Reset to Default'] = 'Nulstil til standard';

$GLOBALS["lang"]['resource'] = 'Resource';

$GLOBALS["lang"]['Resource'] = 'Resource';

$GLOBALS["lang"]['Resource Name'] = 'Ressourcenavn';

$GLOBALS["lang"]['Resources'] = 'Ressourcer';

$GLOBALS["lang"]['response'] = 'Respons';

$GLOBALS["lang"]['Response'] = 'Respons';

$GLOBALS["lang"]['responsibility'] = 'Ansvar';

$GLOBALS["lang"]['Responsibility'] = 'Ansvar';

$GLOBALS["lang"]['Restore my Licenses'] = 'Genopret mine licenser';

$GLOBALS["lang"]['Restrict to Private'] = 'Begræns til privat';

$GLOBALS["lang"]['Restrict to Subnet'] = 'Begræns til subnet';

$GLOBALS["lang"]['result'] = 'Resultat';

$GLOBALS["lang"]['Result'] = 'Resultat';

$GLOBALS["lang"]['Resulting Function'] = 'Resultatfunktion';

$GLOBALS["lang"]['Results'] = 'Resultater';

$GLOBALS["lang"]['Retrieve a list of devices in the'] = 'Hent en liste over enheder i';

$GLOBALS["lang"]['Retrieve a list of devices with OS Name like Windows 2008'] = 'Hent en liste over enheder med OS-navn som Windows 2008';

$GLOBALS["lang"]['Retrieve all details about the device with id 88.'] = 'Hent alle detaljer om enheden med id 88.';

$GLOBALS["lang"]['Retrieve all devices running Windows.'] = 'Hent alle enheder der kører Windows.';

$GLOBALS["lang"]['Retrieve all devices with the standard columns'] = 'Hent alle enheder med standardkolonner';

$GLOBALS["lang"]['Retrieve the first 10 devices running Windows ordered by hostname'] = 'Hent de første 10 enheder, der kører Windows bestilt af værtsnavn';

$GLOBALS["lang"]['Retrieve the properties id, ip, hostname, domain, type from all devices'] = 'Hent egenskaberne id, ip, værtsnavn, domæne, type fra alle enheder';

$GLOBALS["lang"]['retrieved'] = 'Retrieved';

$GLOBALS["lang"]['Retrieved'] = 'Retrieved';

$GLOBALS["lang"]['retrieved_ident'] = 'Retrieved Ident';

$GLOBALS["lang"]['Retrieved Ident'] = 'Retrieved Ident';

$GLOBALS["lang"]['retrieved_name'] = 'Tilbagetrukket navn';

$GLOBALS["lang"]['Retrieved Name'] = 'Tilbagetrukket navn';

$GLOBALS["lang"]['Retrieved from the device - Windows:Win32_ComputerSystemProduct, Linux:dmidecode, MacOS:system_profiler, ESXi:vim-cmd hostsvc/hostsummary, HP-UX:machinfo, Solaris:smbios, AIX:uname.'] = 'Tilbagetrukket fra enheden - Windows: Win32 _ ComputerSystemProduct, Linux: dmidecode, MacOS: system _ profiler, ESXi: vim- cmd hostsvc / hostsummary, HP- UX: machinfo, Solaris: smbios, AIX: uname.';

$GLOBALS["lang"]['Retrieving a List of Credentials'] = 'Indhentning af en valgliste';

$GLOBALS["lang"]['Retrieving or Creating'] = 'Hentning eller oprettelse';

$GLOBALS["lang"]['Return a collection of devices with the default set of columns (devices.id, devices.icon, devices.type, devices.name, devices.ip, devices.dns_fqdn, devices.identification, devices.description, devices.manufacturer, devices.os_family, devices.status)'] = 'Returnerer en samling af enheder med standardsæt af kolonner (devices.id, devices.icon, devices.type, devices.name, devices.ip, devices.dns _ fqdn, devices.identification, devices.devices.devices.producer, devices.os _ family, devices.status)';

$GLOBALS["lang"]['Return a list of all Modules installed on Routers'] = 'Returner en liste over alle moduler installeret på Routere';

$GLOBALS["lang"]['Return an individual device details.'] = 'Returnerer en individuel enhedsinformation.';

$GLOBALS["lang"]['Returns a list of {collection}.'] = 'Returnerer en liste over {collection}.';

$GLOBALS["lang"]['Returns a {collection} details.'] = 'Returnerer en {collection} - detaljer.';

$GLOBALS["lang"]['Reunion'] = 'Genforening';

$GLOBALS["lang"]['Review current practices against ISO 27001 requirements'] = 'Gennemgå gældende praksis i forhold til ISO 27001-krav';

$GLOBALS["lang"]['revision'] = 'Revision';

$GLOBALS["lang"]['Revision'] = 'Revision';

$GLOBALS["lang"]['risk_assesment_result'] = 'Risk Assesment Resultat';

$GLOBALS["lang"]['Risk Assesment Result'] = 'Risk Assesment Resultat';

$GLOBALS["lang"]['Risk Assessment & Treatment'] = 'Risikovurdering og behandling';

$GLOBALS["lang"]['Risk Management'] = 'Risikostyring';

$GLOBALS["lang"]['Role'] = 'Rolle';

$GLOBALS["lang"]['roles'] = 'Ruller';

$GLOBALS["lang"]['Roles'] = 'Ruller';

$GLOBALS["lang"]['Roles can only be created and edited if you have an Open-AudIT Enterprise license. For most users, the default set of Roles should be all that is required.'] = 'Roller kan kun oprettes og redigeres, hvis du har en Open- Audit Enterprise licens. For de fleste brugere, bør standard sæt af Roles være alt, der kræves.';

$GLOBALS["lang"]['Romania'] = 'Rumænien';

$GLOBALS["lang"]['Romanian'] = 'Rumænsk';

$GLOBALS["lang"]['Room'] = 'Værelse';

$GLOBALS["lang"]['route'] = 'Rute';

$GLOBALS["lang"]['Route'] = 'Rute';

$GLOBALS["lang"]['Row'] = 'Række';

$GLOBALS["lang"]['Row Count'] = 'Rækketælling';

$GLOBALS["lang"]['row_position'] = 'Rækkeposition';

$GLOBALS["lang"]['Row Position'] = 'Rækkeposition';

$GLOBALS["lang"]['Rows'] = 'Rækker';

$GLOBALS["lang"]['ru_height'] = 'Ru-højde';

$GLOBALS["lang"]['Ru Height'] = 'Ru-højde';

$GLOBALS["lang"]['ru_start'] = 'Ru Start';

$GLOBALS["lang"]['Ru Start'] = 'Ru Start';

$GLOBALS["lang"]['rule_group'] = 'Forretningsgruppe';

$GLOBALS["lang"]['Rule Group'] = 'Forretningsgruppe';

$GLOBALS["lang"]['rules'] = 'Regler';

$GLOBALS["lang"]['Rules'] = 'Regler';

$GLOBALS["lang"]['Rules are created and run against a device when the device is discovered or an audit result is processed. Rules can be used to set a device attribute based on other attributes.<br><br>NOTE - At present we cannot delete a rule input or output that contains a /. This is because the framework is parsing the / as part of the URL and returning a 404, even before our code runs. The work-around for this is to delete the Rule itself, then recreate the inputs and outputs as required. Fortunately inputs and outputs that contain a / are rare (indeed, none exist by default).'] = 'Regler oprettes og kører mod en enhed, når enheden opdages eller et revisionsresultat behandles. Regler kan bruges til at indstille en udstyrsattribut baseret på andre attributter.<br/><br/>NOTE - På nuværende tidspunkt kan vi ikke slette en regel input eller output, der indeholder a /. Dette skyldes, at rammen fortolker / som en del af URL \'en og returnerer en 404, selv før vores kode kører. Arbejdet-rundt for dette er at slette selve reglen, derefter genskabe input og udgange efter behov. Heldigvis indgange og udgange, der indeholder a / er sjældne (ja, ingen eksisterer som standard).';

$GLOBALS["lang"]['Run Discovery'] = 'Kør søgerName';

$GLOBALS["lang"]['Run Discovery on Devices'] = 'Kør søgning på enheder';

$GLOBALS["lang"]['Run Your Discovery'] = 'Kør din opdagelse';

$GLOBALS["lang"]['Run a Command'] = 'Kør en kommando';

$GLOBALS["lang"]['Run a discovery and find out <b>Whats On Your Network?</b>'] = 'Kør en opdagelse og find ud af <b>Hvad er på dit netværk?</b>';

$GLOBALS["lang"]['Run the script by typing <code>cscript test_windows_client.vbs</code> in the console.'] = 'Kør scriptet ved at skrive <code>cscript test_windows_client.vbs</code> I konsollen.';

$GLOBALS["lang"]['Run this Command'] = 'Kør denne kommando';

$GLOBALS["lang"]['runas'] = 'Runas';

$GLOBALS["lang"]['Runas'] = 'Runas';

$GLOBALS["lang"]['Running'] = 'Kører';

$GLOBALS["lang"]['Running Open-AudIT Apache Service Under Windows'] = 'Kør Open- Audit Apache Service under Windows';

$GLOBALS["lang"]['Russian'] = 'Russisk';

$GLOBALS["lang"]['Russian Federation'] = 'Den Russiske Føderation';

$GLOBALS["lang"]['Rwanda'] = 'Rwanda';

$GLOBALS["lang"]['rx_bitrate'] = 'Rx Bitrate';

$GLOBALS["lang"]['Rx Bitrate'] = 'Rx Bitrate';

$GLOBALS["lang"]['rx_freq'] = 'Rx Freq';

$GLOBALS["lang"]['Rx Freq'] = 'Rx Freq';

$GLOBALS["lang"]['rx_level'] = 'Rx niveau';

$GLOBALS["lang"]['Rx Level'] = 'Rx niveau';

$GLOBALS["lang"]['rx_power'] = 'Rx effekt';

$GLOBALS["lang"]['Rx Power'] = 'Rx effekt';

$GLOBALS["lang"]['rx_profile'] = 'Rx profil';

$GLOBALS["lang"]['Rx Profile'] = 'Rx profil';

$GLOBALS["lang"]['SAN Audit'] = 'SAN Audit';

$GLOBALS["lang"]['SAN Auto-Discover'] = 'SAN Auto- Discover';

$GLOBALS["lang"]['SELECT'] = 'SELEKT';

$GLOBALS["lang"]['SID'] = 'SID';

$GLOBALS["lang"]['SM Version'] = 'SM Version';

$GLOBALS["lang"]['SNMP (v1 / v2)'] = 'SNMP (v1 / v2)';

$GLOBALS["lang"]['SNMP Details'] = 'SNMP Detaljer';

$GLOBALS["lang"]['SNMP OID'] = 'SNMP OID';

$GLOBALS["lang"]['SNMP Version'] = 'SNMP Version';

$GLOBALS["lang"]['SNMP v3'] = 'SNMP v3';

$GLOBALS["lang"]['SQL'] = 'SQL';

$GLOBALS["lang"]['SQL (Advanced)'] = 'SQL (Avanceret)';

$GLOBALS["lang"]['SQL Creation Statements'] = 'SQL- oprettelseserklæringer';

$GLOBALS["lang"]['SQL not containing this condition will result in the widget failing to be executed.'] = 'SQL ikke indeholder denne betingelse vil resultere i widget ikke at blive udført.';

$GLOBALS["lang"]['SSH'] = 'SSH';

$GLOBALS["lang"]['SSH Key'] = 'SSH Nøgle';

$GLOBALS["lang"]['SW Revision'] = 'SW Revision';

$GLOBALS["lang"]['Saint Barthelemy'] = 'Saint Barthelemi';

$GLOBALS["lang"]['Saint Helena'] = 'Saint Helena';

$GLOBALS["lang"]['Saint Kitts and Nevis'] = 'Saint Christopher og Nevis';

$GLOBALS["lang"]['Saint Lucia'] = 'Saint Lucia';

$GLOBALS["lang"]['Saint Martin'] = 'Saint Martin';

$GLOBALS["lang"]['Saint Pierre and Miquelon'] = 'Saint Pierre og Miquelon';

$GLOBALS["lang"]['Saint Vincent and the Grenadines'] = 'Saint Vincent og Grenadinerne';

$GLOBALS["lang"]['Samoa'] = 'Samoa';

$GLOBALS["lang"]['san'] = 'San Name';

$GLOBALS["lang"]['San'] = 'San Name';

$GLOBALS["lang"]['San Marino'] = 'San Marino';

$GLOBALS["lang"]['Sao Tome and Principe'] = 'São Tomé og Príncipe';

$GLOBALS["lang"]['Saturday'] = 'Lørdag';

$GLOBALS["lang"]['Saudi Arabia'] = 'Saudi-Arabien';

$GLOBALS["lang"]['Save and run the file. Make sure you run the file as an Administrator in order to install it (right click, Run as Administrator).'] = 'Gem og kør filen. Sørg for at køre filen som administrator for at installere det (Højreklik, Kør som administrator).';

$GLOBALS["lang"]['Save as Default'] = 'Gem som standard';

$GLOBALS["lang"]['Save the downloaded file.'] = 'Gem den downloadede fil.';

$GLOBALS["lang"]['scaling'] = 'Skalering';

$GLOBALS["lang"]['Scaling'] = 'Skalering';

$GLOBALS["lang"]['scan_options'] = 'Scan indstillinger';

$GLOBALS["lang"]['Scan Options'] = 'Scan indstillinger';

$GLOBALS["lang"]['Scan Options ID'] = 'Scan options ID';

$GLOBALS["lang"]['Scan for this port(s) and if detected open, use this port for SSH communication. This is added to the list of Custom TCP Ports above (if not already included), so there is no need to include it in that list as well. Comma seperated, no spaces.'] = 'Scan for denne port (er) og hvis detekteret åben, bruge denne port til SSH kommunikation. Dette tilføjes til listen over Custom TCP Ports ovenfor (hvis ikke allerede inkluderet), så der er ingen grund til at medtage det i denne liste så godt. Komma seperated, ingen mellemrum.';

$GLOBALS["lang"]['Scan the Nmap top number of TCP ports.'] = 'Scan Nmap top antal TCP-porte.';

$GLOBALS["lang"]['Scan the Nmap top number of UDP ports.'] = 'Scan Nmap top antal UDP-porte.';

$GLOBALS["lang"]['schedule'] = 'Skema';

$GLOBALS["lang"]['Schedule'] = 'Skema';

$GLOBALS["lang"]['Scheduled device discovery and reporting make Open-AudIT Professional an efficient solution for busy IT professionals looking to reduce overheads and increase insights.'] = 'Planlagt enhed opdagelse og rapportering gør Open- Audit Professional en effektiv løsning for travle IT-fagfolk, der søger at reducere generalomkostninger og øge indsigter.';

$GLOBALS["lang"]['Scheduling - discovery, reporting &amp; more'] = 'Skemalægning - opdagelse, rapportering & mere';

$GLOBALS["lang"]['scope'] = 'Anvendelsesområde';

$GLOBALS["lang"]['Scope'] = 'Anvendelsesområde';

$GLOBALS["lang"]['Scope is known as Authorization Scope, representing whether a vulnerability affects resources beyond the original security authority of the vulnerable component.<br><br>The only two valid values for this attribute are'] = 'Anvendelsesområde er kendt som Autorisation Scope, der repræsenterer, om en sårbarhed påvirker ressourcer ud over den oprindelige sikkerhedsmyndighed for den sårbare komponent.<br/><br/>De eneste to gyldige værdier for denne attribut er';

$GLOBALS["lang"]['script_timeout'] = 'Script- tidsudløb';

$GLOBALS["lang"]['Script Timeout'] = 'Script- tidsudløb';

$GLOBALS["lang"]['scripts'] = 'Scripts';

$GLOBALS["lang"]['Scripts'] = 'Scripts';

$GLOBALS["lang"]['scsi'] = 'Scsi';

$GLOBALS["lang"]['Scsi'] = 'Scsi';

$GLOBALS["lang"]['scsi_bus'] = 'Scsi Bus';

$GLOBALS["lang"]['Scsi Bus'] = 'Scsi Bus';

$GLOBALS["lang"]['scsi_logical_unit'] = 'Scsi Logical Unit';

$GLOBALS["lang"]['Scsi Logical Unit'] = 'Scsi Logical Unit';

$GLOBALS["lang"]['scsi_port'] = 'Scsi Port';

$GLOBALS["lang"]['Scsi Port'] = 'Scsi Port';

$GLOBALS["lang"]['Search'] = 'Søg';

$GLOBALS["lang"]['Search For a Device'] = 'Søg efter en enhed';

$GLOBALS["lang"]['Searching Using DataTables'] = 'Søgning ved hjælp af datatabeller';

$GLOBALS["lang"]['Second'] = 'Andet';

$GLOBALS["lang"]['secondary'] = 'Sekundær';

$GLOBALS["lang"]['Secondary'] = 'Sekundær';

$GLOBALS["lang"]['Secondary Text'] = 'Sekundær tekst';

$GLOBALS["lang"]['Secret Key'] = 'Hemmelig nøgle';

$GLOBALS["lang"]['section'] = 'Afdeling';

$GLOBALS["lang"]['Section'] = 'Afdeling';

$GLOBALS["lang"]['secure'] = 'Sikker';

$GLOBALS["lang"]['Secure'] = 'Sikker';

$GLOBALS["lang"]['Security Content Automation Protocol'] = 'Sikkerhedsindhold Automationsprotokol';

$GLOBALS["lang"]['Security Level'] = 'Sikkerhedsniveau';

$GLOBALS["lang"]['Security Name'] = 'Sikkerhedsnavn';

$GLOBALS["lang"]['Security Status'] = 'Sikkerhedsstatus';

$GLOBALS["lang"]['security_zone'] = 'Sikkerhedszone';

$GLOBALS["lang"]['Security Zone'] = 'Sikkerhedszone';

$GLOBALS["lang"]['See above. NOTE - This could also be caused by a self-signed certificate on the LDAP server. We are working to allow for this in a future release.'] = 'Se ovenfor. BEMÆRK - Dette kan også være forårsaget af et selvsigneret certifikat på LDAP- serveren. Vi arbejder på at tillade dette i en fremtidig udgivelse.';

$GLOBALS["lang"]['See our page on enabling'] = 'Se vores side om aktivering';

$GLOBALS["lang"]['Seed Discoveries'] = 'Frøopdagelser';

$GLOBALS["lang"]['seed_ip'] = 'Til udsæd';

$GLOBALS["lang"]['Seed IP'] = 'Til udsæd';

$GLOBALS["lang"]['seed_ping'] = 'Formand';

$GLOBALS["lang"]['Seed Ping'] = 'Formand';

$GLOBALS["lang"]['seed_restrict_to_private'] = 'Frø Begræns til privat';

$GLOBALS["lang"]['Seed Restrict To Private'] = 'Frø Begræns til privat';

$GLOBALS["lang"]['seed_restrict_to_subnet'] = 'Frø Begræns til subnet';

$GLOBALS["lang"]['Seed Restrict To Subnet'] = 'Frø Begræns til subnet';

$GLOBALS["lang"]['Select'] = 'Vælg';

$GLOBALS["lang"]['Select Admin -> Tasks -> Create Task from the menu.'] = 'Vælg Admin - > Opgaver - > Opret Opgave fra menuen.';

$GLOBALS["lang"]['Select All'] = 'Vælg alle';

$GLOBALS["lang"]['Select All Devices'] = 'Vælg alle enheder';

$GLOBALS["lang"]['select_external_attribute'] = 'Vælg ekstern attribut';

$GLOBALS["lang"]['Select External Attribute'] = 'Vælg ekstern attribut';

$GLOBALS["lang"]['select_external_count'] = 'Vælg ekstern tæller';

$GLOBALS["lang"]['Select External Count'] = 'Vælg ekstern tæller';

$GLOBALS["lang"]['select_external_type'] = 'Vælg eksternt Type';

$GLOBALS["lang"]['Select External Type'] = 'Vælg eksternt Type';

$GLOBALS["lang"]['select_external_value'] = 'Vælg eksternt Værdi';

$GLOBALS["lang"]['Select External Value'] = 'Vælg eksternt Værdi';

$GLOBALS["lang"]['select_internal_attribute'] = 'Vælg intern attribut';

$GLOBALS["lang"]['Select Internal Attribute'] = 'Vælg intern attribut';

$GLOBALS["lang"]['select_internal_count'] = 'Vælg intern tæller';

$GLOBALS["lang"]['Select Internal Count'] = 'Vælg intern tæller';

$GLOBALS["lang"]['select_internal_type'] = 'Vælg intern Type';

$GLOBALS["lang"]['Select Internal Type'] = 'Vælg intern Type';

$GLOBALS["lang"]['select_internal_value'] = 'Vælg intern Værdi';

$GLOBALS["lang"]['Select Internal Value'] = 'Vælg intern Værdi';

$GLOBALS["lang"]['Select Menu -> Manage -> Baselines -> List Baselines.'] = 'Vælg menu - > Håndtering - > Baselines - > Listebasislinjer.';

$GLOBALS["lang"]['Select a Table'] = 'Vælg en tabel';

$GLOBALS["lang"]['Select an accredited certification body'] = 'Vælg et akkrediteret certificeringsorgan';

$GLOBALS["lang"]['Select and apply appropriate controls (Annex A)'] = 'Vælg og anvend passende kontroller (bilag A)';

$GLOBALS["lang"]['Select the <i>COM Security</i> tab<br><br>Click on Access Permissions Edit Default'] = 'Vælg <i>KOM Sikkerhed</i> tab<br/><br/>Klik på Adgangstilladelser Redigér standard';

$GLOBALS["lang"]['Select the <i>Sign On</i> tab and copy the value for <i>Issuer</i> (just the URL itself). Paste this into the Open-AudIT <i>Issuer</i> field.'] = 'Vælg <i>Signér på</i> fane og kopiere værdien for <i>Udsteder</i> (kun URL selv). Indsæt dette i Open- Audit <i>Udsteder</i> mark.';

$GLOBALS["lang"]['Select the <i>This Account</i> checkbox and provide the account name and password.'] = 'Vælg <i>Denne konto</i> afkrydsningsfelt og giv kontonavn og adgangskode.';

$GLOBALS["lang"]['Select the Start menu and type <i>services<.i>. Click the Services icon.'] = 'Vælg menuen Start og skriv <i>tjenester < .i >. Klik på ikonet Tjenester.</i>';

$GLOBALS["lang"]['Select the type of Auth Menthod to create and input the relevant details.'] = 'Vælg typen af Auth Menthod for at oprette og indtaste de relevante detaljer.';

$GLOBALS["lang"]['Self Delete'] = 'Slet selv';

$GLOBALS["lang"]['Senegal'] = 'Senegal';

$GLOBALS["lang"]['sensitivity'] = 'Følsomhed';

$GLOBALS["lang"]['Sensitivity'] = 'Følsomhed';

$GLOBALS["lang"]['September'] = 'September';

$GLOBALS["lang"]['Serbia'] = 'Serbien';

$GLOBALS["lang"]['serial'] = 'Seriel';

$GLOBALS["lang"]['Serial'] = 'Seriel';

$GLOBALS["lang"]['serial_imei'] = 'Seriel Imei';

$GLOBALS["lang"]['Serial Imei'] = 'Seriel Imei';

$GLOBALS["lang"]['serial_sim'] = 'Seriel Sim';

$GLOBALS["lang"]['Serial Sim'] = 'Seriel Sim';

$GLOBALS["lang"]['series'] = 'Serie';

$GLOBALS["lang"]['Series'] = 'Serie';

$GLOBALS["lang"]['server'] = 'Server';

$GLOBALS["lang"]['Server'] = 'Server';

$GLOBALS["lang"]['server_id'] = 'Server- id';

$GLOBALS["lang"]['Server ID'] = 'Server- id';

$GLOBALS["lang"]['Server Is'] = 'Server er';

$GLOBALS["lang"]['server_item'] = 'Serverelement';

$GLOBALS["lang"]['Server Item'] = 'Serverelement';

$GLOBALS["lang"]['Server Status'] = 'Serverstatus';

$GLOBALS["lang"]['Servers'] = 'Servere';

$GLOBALS["lang"]['Servers Only'] = 'Kun servere';

$GLOBALS["lang"]['service'] = 'Tjeneste';

$GLOBALS["lang"]['Service'] = 'Tjeneste';

$GLOBALS["lang"]['service_identifier'] = 'Tjenesteidentifikator';

$GLOBALS["lang"]['Service Identifier'] = 'Tjenesteidentifikator';

$GLOBALS["lang"]['service_level_a'] = 'Tjenesteniveau A';

$GLOBALS["lang"]['Service Level A'] = 'Tjenesteniveau A';

$GLOBALS["lang"]['service_level_b'] = 'Tjenesteniveau B';

$GLOBALS["lang"]['Service Level B'] = 'Tjenesteniveau B';

$GLOBALS["lang"]['service_network'] = 'Servicenetværk';

$GLOBALS["lang"]['Service Network'] = 'Servicenetværk';

$GLOBALS["lang"]['service_number'] = 'Service-nummer';

$GLOBALS["lang"]['Service Number'] = 'Service-nummer';

$GLOBALS["lang"]['service_pack'] = 'Servicepakke';

$GLOBALS["lang"]['Service Pack'] = 'Servicepakke';

$GLOBALS["lang"]['service_plan'] = 'Serviceplan';

$GLOBALS["lang"]['Service Plan'] = 'Serviceplan';

$GLOBALS["lang"]['service_provider'] = 'Serviceudbyder';

$GLOBALS["lang"]['Service Provider'] = 'Serviceudbyder';

$GLOBALS["lang"]['service_tag'] = 'Servicemærke';

$GLOBALS["lang"]['Service Tag'] = 'Servicemærke';

$GLOBALS["lang"]['service_type'] = 'Type tjeneste';

$GLOBALS["lang"]['Service Type'] = 'Type tjeneste';

$GLOBALS["lang"]['Service Under Windows'] = 'Service under Windows';

$GLOBALS["lang"]['service_version'] = 'Service Version';

$GLOBALS["lang"]['Service Version'] = 'Service Version';

$GLOBALS["lang"]['Set'] = 'Sæt';

$GLOBALS["lang"]['set_by'] = 'Sæt af';

$GLOBALS["lang"]['Set By'] = 'Sæt af';

$GLOBALS["lang"]['Set by the Discovery function - do not normally set this manually.'] = 'Indstil af Discovery-funktionen - sæt normalt ikke dette manuelt.';

$GLOBALS["lang"]['Set by the audit_domain or discover_domain scripts. Do not set.'] = 'Sæt af audit _ domæne eller find _ domæne scripts. Sæt dig ikke.';

$GLOBALS["lang"]['Set the external text to capitalized version of the internal data.'] = 'Indstil den eksterne tekst til kapitaliseret version af de interne data.';

$GLOBALS["lang"]['Set the external text to lowercase.'] = 'Sæt den eksterne tekst til små bogstaver.';

$GLOBALS["lang"]['Set the external text to uppercase.'] = 'Sæt den eksterne tekst til store bogstaver.';

$GLOBALS["lang"]['Set the size (normal or compact) of the tables on the List screens.'] = 'Sæt størrelsen (normal eller kompakt) på tabellerne på List-skærmene.';

$GLOBALS["lang"]['Set this if you wish to insert systems from AD that may not be contactable, but have been seen by AD since that date.'] = 'Sæt dette hvis du ønsker at indsætte systemer fra AD, der måske ikke kan kontaktes, men er blevet set af AD siden denne dato.';

$GLOBALS["lang"]['Setting up Discovery on a subnet is almost identical to running a regular Discovery via the web interface. The only additional items are the scheduled hour and day(s) and a name for the Scheduled Task itself. You can take advantage of this to schedule multiple discoveries using different sets of credentials.<br><br>As per the Subnet Discovery, the Active Directory Discovery is also simply the same fields as a regular Active Directory Discovery with the addition of a day, hour(s) and name.<br><br>If the Open-AudIT Server has Collectors reporting to it, an additional drop down is provided. You can select this to specify which Collector the task should run on. Only Discovery tasks are supported for Collectors. Specify the same items as a regular Discovery, but provide the alternate Collector to run this task.'] = 'Opsætning af Discovery på et subnet er næsten identisk med at køre en regelmæssig Discovery via web-interface. De eneste yderligere elementer er den planlagte time og dag (s) og et navn for den skemalagte opgave selv. Du kan drage fordel af dette at planlægge flere opdagelser ved hjælp af forskellige sæt af akkreditiver.<br/><br/>Som pr Subnet Discovery, Active Directory Discovery er også blot de samme områder som en regelmæssig Active Directory Discovery med tilføjelse af en dag, time (s) og navn.<br/><br/>Hvis Open- Audit Server har Samlere rapportering til det, en ekstra drop down er fastsat. Du kan vælge dette for at angive hvilken Collector opgaven skal køre på. Kun Discovery opgaver understøttes for Collectors. Angiv de samme elementer som en regelmæssig Discovery, men giv den alternative Collector til at køre denne opgave.';

$GLOBALS["lang"]['severity'] = 'Sværhedsgrad';

$GLOBALS["lang"]['Severity'] = 'Sværhedsgrad';

$GLOBALS["lang"]['severity_text'] = 'Sværhedstekst';

$GLOBALS["lang"]['Severity Text'] = 'Sværhedstekst';

$GLOBALS["lang"]['Severity is calculated from the <code>base_score</code> and can be one of: None, Low, Medium, High, Critical.'] = 'Sværhedsgraden beregnes ud fra <code>base_score</code> og kan være en af: Ingen, Lav, Medium, Høj, Kritisk.';

$GLOBALS["lang"]['Seychelles'] = 'Seychellerne';

$GLOBALS["lang"]['share'] = 'Del';

$GLOBALS["lang"]['Share'] = 'Del';

$GLOBALS["lang"]['Share Name'] = 'Del navn';

$GLOBALS["lang"]['shared'] = 'Delt';

$GLOBALS["lang"]['Shared'] = 'Delt';

$GLOBALS["lang"]['shared_name'] = 'Fælles navn';

$GLOBALS["lang"]['Shared Name'] = 'Fælles navn';

$GLOBALS["lang"]['shell'] = 'SkalName';

$GLOBALS["lang"]['Shell'] = 'SkalName';

$GLOBALS["lang"]['Ship Date'] = 'Skibsdato';

$GLOBALS["lang"]['Shipped are a set of default items. These can be found by going to menu'] = 'Shipped er et sæt af standard elementer. Disse kan findes ved at gå til menu';

$GLOBALS["lang"]['short'] = 'Kort';

$GLOBALS["lang"]['Short'] = 'Kort';

$GLOBALS["lang"]['Should I remove all non-current data from this device?'] = 'Skal jeg fjerne alle data fra denne enhed?';

$GLOBALS["lang"]['Should this file (or pattern) be used to exclude files from being reported. Normally, to audit files, this is set to <code>y</code>.'] = 'Skal denne fil (eller mønster) bruges til at udelukke filer fra at blive rapporteret. Normalt, at revidere filer, er dette sat til <code>y</code>.';

$GLOBALS["lang"]['Should this vendor be used when retrieving vulnerabilities from FirstWave.'] = 'Skal denne leverandør bruges, når du henter sårbarheder fra FirstWave.';

$GLOBALS["lang"]['Should we add devices from the remote service, locally.'] = 'Skal vi tilføje enheder fra fjernbetjeningen, lokalt.';

$GLOBALS["lang"]['Should we apply this license to the selected Org as well as the Orgs children?'] = 'Skal vi anvende denne licens på den valgte Org samt Orgs børn?';

$GLOBALS["lang"]['Should we audit a SAN if the management software is detected.'] = 'Skal vi revidere en SAN, hvis forvaltningen software er opdaget.';

$GLOBALS["lang"]['Should we audit mount points.'] = 'Skal vi revidere montpoint.';

$GLOBALS["lang"]['Should we audit netstat ports (yes, no, servers only).'] = 'Skal vi revidere netstat porte (ja, nej, servere kun).';

$GLOBALS["lang"]['Should we audit the installed software.'] = 'Skal vi revidere den installerede software.';

$GLOBALS["lang"]['Should we consider a filtered port to be an open port - and therefore flag this IP as having a device attached?'] = 'Skal vi betragte en filtreret port som en åben port - og derfor markere denne IP som værende forsynet med en anordning?';

$GLOBALS["lang"]['Should we consider an open|filtered port to be an open port - and therefore flag this IP as having a device attached?'] = 'Skal vi betragte en åben terminal 124; filtreret port som en åben port - og derfor markere denne IP som at have en enhed fastgjort?';

$GLOBALS["lang"]['Should we convert the hostname to lowercase.'] = 'Skal vi konvertere værtsnavnet til lavercase.';

$GLOBALS["lang"]['Should we create a file based on the audit result.'] = 'Skal vi oprette en fil baseret på revisionsresultatet.';

$GLOBALS["lang"]['Should we expose this group in the web interface.'] = 'Skal vi afsløre denne gruppe i webgrænsefladen.';

$GLOBALS["lang"]['Should we expose this query in the list of reports under the Report menu in the web interface.'] = 'Skal vi udsætte denne forespørgsel i listen over rapporter under rapportmenuen i webgrænsefladen.';

$GLOBALS["lang"]['Should we expose this query in the list of reports under the Reports menu in the web interface.'] = 'Skal vi udsætte denne forespørgsel i listen over rapporter under menuen Rapporter i webgrænsefladen.';

$GLOBALS["lang"]['Should we hide the audit script window when executing.'] = 'Skal vi skjule revisionsscriptvinduet, når vi udfører.';

$GLOBALS["lang"]['Should we ignore an invalid or self signed SSL certificate and submit the result anyway.'] = 'Skal vi ignorere et ugyldigt eller selvsigneret SSL certifikat og indsende resultatet alligevel.';

$GLOBALS["lang"]['Should we install Open-Scap on the target machine.'] = 'Skal vi installere Open- Scap på målmaskinen.';

$GLOBALS["lang"]['Should we match a device based mac address even if its a known likely duplicate from VMware.'] = 'Skal vi matche en enhed baseret mac-adresse, selv om det er en kendt sandsynlig kopi fra VMware.';

$GLOBALS["lang"]['Should we match a device based on its DNS fqdn.'] = 'Skal vi matche en enhed baseret på dens DNS fqdn.';

$GLOBALS["lang"]['Should we match a device based on its DNS hostname.'] = 'Skal vi matche en enhed baseret på sit DNS værtsnavn.';

$GLOBALS["lang"]['Should we match a device based on its UUID.'] = 'Skal vi matche en enhed baseret på dens UUID.';

$GLOBALS["lang"]['Should we match a device based on its dbus id.'] = 'Skal vi matche en enhed baseret på dens dbus id.';

$GLOBALS["lang"]['Should we match a device based on its fqdn.'] = 'Skal vi matche en enhed baseret på dens fqdn.';

$GLOBALS["lang"]['Should we match a device based on its hostname and UUID.'] = 'Skal vi matche en enhed baseret på dens værtsnavn og UUID.';

$GLOBALS["lang"]['Should we match a device based on its hostname and dbus id.'] = 'Skal vi matche en enhed baseret på dens værtsnavn og dbus id.';

$GLOBALS["lang"]['Should we match a device based on its hostname and serial.'] = 'Skal vi matche en enhed baseret på dens værtsnavn og serienummer?';

$GLOBALS["lang"]['Should we match a device based on its ip if we have an existing device with no data.'] = 'Skal vi matche en enhed baseret på sin ip, hvis vi har en eksisterende enhed uden data.';

$GLOBALS["lang"]['Should we match a device based on its ip.'] = 'Skal vi matche en enhed baseret på dens ip.';

$GLOBALS["lang"]['Should we match a device based on its mac address.'] = 'Skal vi matche en enhed baseret på dens mac adresse.';

$GLOBALS["lang"]['Should we match a device based on its serial and type.'] = 'Skal vi matche en enhed baseret på dens serie og type.';

$GLOBALS["lang"]['Should we match a device based on its serial number.'] = 'Skal vi matche en enhed baseret på dens serienummer.';

$GLOBALS["lang"]['Should we match a device based only on its SNMP sysName and serial.'] = 'Skal vi matche en enhed baseret kun på dens SNMP sysName og seriel.';

$GLOBALS["lang"]['Should we match a device based only on its SNMP sysName.'] = 'Skal vi matche en enhed baseret kun på sin SNMP sysName.';

$GLOBALS["lang"]['Should we match a device based only on its hostname.'] = 'Skal vi matche en enhed baseret kun på dens værtsnavn.';

$GLOBALS["lang"]['Should we ping the IP before attempting to scan it? If it does not respond to the ping, skip this device.'] = 'Skal vi prøve at scanne IP \'et? Hvis det ikke reagerer på ping, springe denne enhed.';

$GLOBALS["lang"]['Should we populate the external system from our local devices.'] = 'Skal vi befolke det eksterne system fra vores lokale enheder.';

$GLOBALS["lang"]['Should we retrieve all DNS names'] = 'Skal vi hente alle DNS-navne';

$GLOBALS["lang"]['Should we run an audit and submit it (y/n).'] = 'Skal vi køre en revision og indsende den (y / n).';

$GLOBALS["lang"]['Should we test for SNMP using UDP port 161.'] = 'Skal vi teste for SNMP ved hjælp af UDP port 161.';

$GLOBALS["lang"]['Should we test for SSH using TCP port 22.'] = 'Skal vi teste SSH ved hjælp af TCP port 22.';

$GLOBALS["lang"]['Should we test for WMI using TCP port 135.'] = 'Skal vi teste for WMI med TCP port 135.';

$GLOBALS["lang"]['Should we uninstall the agent (y/n).'] = 'Skal vi afinstallere agenten (y / n).';

$GLOBALS["lang"]['Should we use the system or user level proxy to submit the audit result.'] = 'Skal vi bruge systemet eller brugerniveau proxy til at indsende revision resultat.';

$GLOBALS["lang"]['Should we use the win32_product WMI class (not recommended by Microsoft) when retrieving installed software.'] = 'Skal vi bruge win32 _ product WMI klasse (ikke anbefalet af Microsoft), når du henter installeret software.';

$GLOBALS["lang"]['Should we use this method to authenticate user credentials. Set to <code>y</code> or <code>n</code>.'] = 'Skal vi bruge denne metode til at godkende brugerlegitimation. Sæt til <code>y</code> eller <code>n</code>.';

$GLOBALS["lang"]['Should we use this method to populate a users roles. The field <code>use_auth</code> must be set to <code>y</code> to use this. Set to <code>y</code> or <code>n</code>.'] = 'Skal vi bruge denne metode til at befolke en bruger roller. Feltet <code>use_auth</code> skal sættes til <code>y</code> at bruge dette. Sæt til <code>y</code> eller <code>n</code>.';

$GLOBALS["lang"]['Should we use this value to match external and internal devices. Our default Integration uses IP and UUID here. If either of these match between external and internal device, we consider them to be the same device.'] = 'Skal vi bruge denne værdi til at matche eksterne og interne enheder. Vores standard Integration bruger IP og UUID her. Hvis en af disse matcher mellem ydre og indre enhed, anser vi dem for at være den samme enhed.';

$GLOBALS["lang"]['Show All'] = 'Vis alle';

$GLOBALS["lang"]['sid'] = 'Sid Formand';

$GLOBALS["lang"]['Sid'] = 'Sid Formand';

$GLOBALS["lang"]['sidebar'] = 'Sidebar';

$GLOBALS["lang"]['Sidebar'] = 'Sidebar';

$GLOBALS["lang"]['Sierra Leone'] = 'Sierra Leone';

$GLOBALS["lang"]['Singapore'] = 'Singapore';

$GLOBALS["lang"]['Site A'] = 'Område A';

$GLOBALS["lang"]['Site B'] = 'Område B';

$GLOBALS["lang"]['site_hours_a'] = 'Site Timer A';

$GLOBALS["lang"]['Site Hours A'] = 'Site Timer A';

$GLOBALS["lang"]['site_hours_b'] = 'Site Timer B';

$GLOBALS["lang"]['Site Hours B'] = 'Site Timer B';

$GLOBALS["lang"]['size'] = 'Størrelse';

$GLOBALS["lang"]['Size'] = 'Størrelse';

$GLOBALS["lang"]['slaves'] = 'Slaver';

$GLOBALS["lang"]['Slaves'] = 'Slaver';

$GLOBALS["lang"]['Slovak'] = 'Slovakisk';

$GLOBALS["lang"]['Slovakia (Slovak Republic)'] = 'Slovakiet';

$GLOBALS["lang"]['Slovenia'] = 'Slovenien';

$GLOBALS["lang"]['Slovenian'] = 'Slovensk';

$GLOBALS["lang"]['Smart Status'] = 'Smart status';

$GLOBALS["lang"]['smversion'] = 'Smversion';

$GLOBALS["lang"]['Smversion'] = 'Smversion';

$GLOBALS["lang"]['Sneaky'] = 'Sneaky';

$GLOBALS["lang"]['snmp_enterprise_id'] = 'Snmp Enterprise ID';

$GLOBALS["lang"]['Snmp Enterprise ID'] = 'Snmp Enterprise ID';

$GLOBALS["lang"]['snmp_enterprise_name'] = 'Virksomhedens Snmp-navn';

$GLOBALS["lang"]['Snmp Enterprise Name'] = 'Virksomhedens Snmp-navn';

$GLOBALS["lang"]['snmp_oid'] = 'Snmp Oid';

$GLOBALS["lang"]['Snmp Oid'] = 'Snmp Oid';

$GLOBALS["lang"]['snmp_timeout'] = 'Snmp Timeout';

$GLOBALS["lang"]['Snmp Timeout'] = 'Snmp Timeout';

$GLOBALS["lang"]['snmp_version'] = 'Snmp- version';

$GLOBALS["lang"]['Snmp Version'] = 'Snmp- version';

$GLOBALS["lang"]['So a script is not working on a recalcitrant device. Grrr. The scripts for Windows, Linux, and MacOS all accept the debugging argument. This can be set in the script itself, or provided on the command line. Run the script using that option set to 5 and you should see in which section of the script the failure occurs. For example'] = 'Så et manuskript arbejder ikke på en genstridig anordning. Grrr. Scripts til Windows, Linux og MacOS accepterer alle fejlsøgningsargumentet. Dette kan indstilles i selve scriptet, eller leveres på kommandolinjen. Kør scriptet ved hjælp af denne indstilling indstillet til 5, og du skal se, i hvilken del af scriptet fejlen opstår. For eksempel';

$GLOBALS["lang"]['So apart from a regular word, what other options are there - I am glad you asked! As per the standard Open-AudIT API, we have several operators for filtering. Operators that can precede the value are'] = 'Så bortset fra et regulært ord, hvilke andre muligheder er der - jeg er glad for du spurgte! Som pr standard Open- Audit API, har vi flere operatører til filtrering. Operatører, der kan gå forud for værdien er';

$GLOBALS["lang"]['So you have an issue providing Open-AudIT credentials to discover your devices. I have an answer - dont then! Sure, I mean, discovery is the best thing since sliced bread. You do not need to know ahead of time <i>Whats On Your Network</i>. But how can you extract data from devices without providing credentials?<br><br>In the case of computers, an easy option is to copy the appropriate audit script to the target machines and set it to execute on a schedule. More details on the wiki. The machines will send their data to Open-AudIT on that schedule, almost as if you were running discovery. The device simply runs the audit script on a schedule (again, you can read the audit script) as the user you tell it to and sends the output to the server. No credentials are involved at all.<br><br>And now we have Agents for Windows. The advantages of an actual installed Agent are'] = 'Så du har et problem med Open- Audit legitimation til at opdage dine enheder. Jeg har et svar - så lad være! Selvfølgelig, jeg mener, opdagelse er det bedste siden skiver brød. Du behøver ikke at vide før tiden <i>Hvad er på dit netværk</i>. Men hvordan kan du udtrække data fra enheder uden at give legitimation?<br/><br/>I tilfælde af computere, en nem mulighed er at kopiere den relevante revision script til målet maskiner og indstille det til at udføre på en tidsplan. Flere detaljer om wikien. Maskinerne vil sende deres data til Open- Audit på denne tidsplan, næsten som om du kørte opdagelse. Enheden kører blot revisionsscriptet på en tidsplan (igen, kan du læse revisionsscriptet) som brugeren du fortæller det til og sender output til serveren. Der er slet ingen legitimation involveret.<br/><br/>Og nu har vi agenter til Windows. Fordelene ved en faktisk installeret agent er';

$GLOBALS["lang"]['socket'] = 'Sokkel';

$GLOBALS["lang"]['Socket'] = 'Sokkel';

$GLOBALS["lang"]['software'] = 'Software';

$GLOBALS["lang"]['Software'] = 'Software';

$GLOBALS["lang"]['Software Found Last 7 Days'] = 'Software fundet sidste 7 dage';

$GLOBALS["lang"]['Software Found Today'] = 'Software fundet i dag';

$GLOBALS["lang"]['Software Found Yesterday'] = 'Software fundet i går';

$GLOBALS["lang"]['software_key'] = 'Softwarenøgle';

$GLOBALS["lang"]['Software Key'] = 'Softwarenøgle';

$GLOBALS["lang"]['Software License Reporting'] = 'Softwarelicensrapportering';

$GLOBALS["lang"]['software_name'] = 'Softwarenavn';

$GLOBALS["lang"]['Software Name'] = 'Softwarenavn';

$GLOBALS["lang"]['Software Policies'] = 'Softwarepolitikker';

$GLOBALS["lang"]['software_revision'] = 'Softwarerevision';

$GLOBALS["lang"]['Software Revision'] = 'Softwarerevision';

$GLOBALS["lang"]['software_version'] = 'Softwareversion';

$GLOBALS["lang"]['Software Version'] = 'Softwareversion';

$GLOBALS["lang"]['Solaris'] = 'Solaris Formand';

$GLOBALS["lang"]['Solomon Islands'] = 'Salomonøerne';

$GLOBALS["lang"]['Somalia, Somali Republic'] = 'Somalia, Republikken Somalia';

$GLOBALS["lang"]['Some collections can be executed - queries, etc - see below.'] = 'Nogle samlinger kan udføres - forespørgsler osv. - se nedenfor.';

$GLOBALS["lang"]['Some examples are at the bottom of this page. All endpoints also have a minimum list of required fields. These are below.'] = 'Nogle eksempler er nederst på denne side. Alle endpoints har også en minimumsliste over krævede felter. De er nedenunder.';

$GLOBALS["lang"]['Some of our templates support the new move to dataTables, using server side processing. This massivley improves load times.'] = 'Nogle af vores skabeloner understøtter den nye flytning til datatabeller, ved hjælp af server side behandling. Denne massivley forbedrer lasttiden.';

$GLOBALS["lang"]['Some other error has occurred when attempting to bind to the LDAP server. It is contactable (ie, the <i>connect</i> above has worked), but for some other reason, binding has not occurred. Check the logs on the LDAP server.'] = 'En anden fejl er opstået, når du forsøger at binde sig til LDAP- serveren. Det er kontaktbart (dvs. <i>Tilslut</i> Der er ikke sket nogen binding. Tjek logfiler på LDAP- serveren.';

$GLOBALS["lang"]['Something has gone seriously wrong. Open-AudIT cannot read the <i>orgs</i> table.'] = 'Noget er gået galt. Open- Audit kan ikke læse <i>orgs</i> Bord.';

$GLOBALS["lang"]['Something has gone seriously wrong. Open-AudIT cannot read the <i>roles</i> table.'] = 'Noget er gået galt. Open- Audit kan ikke læse <i>roller</i> Bord.';

$GLOBALS["lang"]['Sometimes agentless discovery just does not fit your use-case. Maybe your PCs have tight firewalls. Maybe they are not on the network when your discoveries are scheduled. Maybe they are used by remote workers. Whatever the case, this is where an agent can help. Install it on the target machine and it will <i>check-in</i> with your Open-AudIT server on a schedule and accept tasks. The most common task the server requests is for the agent to audit itself and send the result.'] = 'Nogle gange passer det bare ikke til din sag. Måske har dine pc \'er tætte firewalls. Måske er de ikke på netværket, når dine opdagelser er planlagt. Måske bruges de af fjernarbejdere. Uanset hvad, er det her en agent kan hjælpe. Installer det på målmaskinen, og det vil <i>check-in</i> med din Open- AudiT server på en tidsplan og acceptere opgaver. Den mest almindelige opgave serveren anmoder om er for agenten til at revidere sig selv og sende resultatet.';

$GLOBALS["lang"]['Sort'] = 'Sortér';

$GLOBALS["lang"]['sound'] = 'Lyd';

$GLOBALS["lang"]['Sound'] = 'Lyd';

$GLOBALS["lang"]['source'] = 'Kilde';

$GLOBALS["lang"]['Source'] = 'Kilde';

$GLOBALS["lang"]['South Africa'] = 'Sydafrika';

$GLOBALS["lang"]['South Georgia and the South Sandwich Islands'] = 'Sydgeorgien og de sydlige Sandwichøer';

$GLOBALS["lang"]['Spain'] = 'Spanien';

$GLOBALS["lang"]['Spanish'] = 'Spansk';

$GLOBALS["lang"]['Specific to Azure.'] = 'Specifikt for Azure.';

$GLOBALS["lang"]['Specific to OKTA.'] = 'Specifikt for OKTA.';

$GLOBALS["lang"]['Specifies a comma-separated list of targets (no spaces) to be excluded from the scan. The list you pass in uses normal Nmap syntax, so it can include hostnames, CIDR netblocks, octet ranges, etc.'] = 'Angiver en kommaadskilt liste over mål (ingen mellemrum), der skal udelukkes fra scanningen. Listen du passerer i bruger normal Nmap syntaks, så det kan omfatte værtsnavne, CIDR netblocks, octet intervaller, osv.';

$GLOBALS["lang"]['speed'] = 'Hastighed';

$GLOBALS["lang"]['Speed'] = 'Hastighed';

$GLOBALS["lang"]['speed_down_a'] = 'Hastighed nedad A';

$GLOBALS["lang"]['Speed Down A'] = 'Hastighed nedad A';

$GLOBALS["lang"]['speed_down_b'] = 'Hastighed nedad B';

$GLOBALS["lang"]['Speed Down B'] = 'Hastighed nedad B';

$GLOBALS["lang"]['speed_up_a'] = 'Speed Up A';

$GLOBALS["lang"]['Speed Up A'] = 'Speed Up A';

$GLOBALS["lang"]['speed_up_b'] = 'Hastighed op B';

$GLOBALS["lang"]['Speed Up B'] = 'Hastighed op B';

$GLOBALS["lang"]['sql'] = 'Sql';

$GLOBALS["lang"]['Sql'] = 'Sql';

$GLOBALS["lang"]['Sri Lanka'] = 'Sri Lanka';

$GLOBALS["lang"]['ssh_ports'] = 'Ssh Ports';

$GLOBALS["lang"]['Ssh Ports'] = 'Ssh Ports';

$GLOBALS["lang"]['ssh_timeout'] = 'Ssh Timeout';

$GLOBALS["lang"]['Ssh Timeout'] = 'Ssh Timeout';

$GLOBALS["lang"]['Stage 1: Documentation review'] = 'Fase 1: Dokumentation';

$GLOBALS["lang"]['Stage 2: Implementation and effectiveness review'] = 'Fase 2: Gennemforelse og effektivisering';

$GLOBALS["lang"]['Stand-Alone'] = 'Stand- alene';

$GLOBALS["lang"]['Standard'] = 'Standard';

$GLOBALS["lang"]['standard_id'] = 'Standard- ID';

$GLOBALS["lang"]['Standard ID'] = 'Standard- ID';

$GLOBALS["lang"]['standards'] = 'Standarder';

$GLOBALS["lang"]['Standards'] = 'Standarder';

$GLOBALS["lang"]['standards_policies'] = 'Standardiseringspolitik';

$GLOBALS["lang"]['Standards Policies'] = 'Standardiseringspolitik';

$GLOBALS["lang"]['standards_results'] = 'Standardiseringsresultater';

$GLOBALS["lang"]['Standards Results'] = 'Standardiseringsresultater';

$GLOBALS["lang"]['start_date'] = 'Startdato';

$GLOBALS["lang"]['Start Date'] = 'Startdato';

$GLOBALS["lang"]['start_mode'] = 'Starttilstand';

$GLOBALS["lang"]['Start Mode'] = 'Starttilstand';

$GLOBALS["lang"]['Start a web browser and go to'] = 'Start en webbrowser og gå til';

$GLOBALS["lang"]['started_date'] = 'Startdato';

$GLOBALS["lang"]['Started Date'] = 'Startdato';

$GLOBALS["lang"]['Starting June 2018 Google has implemented a pay-as-you-go pricing model for the Google Maps Platform APIs. Previously, most users with moderate usage could use Google Maps, which are embedded into opCharts and Open-AudIT Professional/Enterprise, for free. Googles new policy is outlined here,'] = 'Fra juni 2018 Google har implementeret en pay-as-you- go prismodel for Google Maps Platform API \'er. Tidligere kunne de fleste brugere med moderat brug bruge Google Maps, som er indlejret i opCharts og Open- Audit Professional / Enterprise, gratis. Googles nye politik er skitseret her,';

$GLOBALS["lang"]['Starts With'] = 'Starter med';

$GLOBALS["lang"]['state'] = 'Tilstand';

$GLOBALS["lang"]['State'] = 'Tilstand';

$GLOBALS["lang"]['Stats'] = 'Stats';

$GLOBALS["lang"]['status'] = 'Status';

$GLOBALS["lang"]['Status'] = 'Status';

$GLOBALS["lang"]['Storage'] = 'Opbevaring';

$GLOBALS["lang"]['storage_count'] = 'Lagringstal';

$GLOBALS["lang"]['Storage Count'] = 'Lagringstal';

$GLOBALS["lang"]['Storage area network'] = 'Lagringsområdenetværk';

$GLOBALS["lang"]['Storage-Area Network'] = 'Store- Area Network';

$GLOBALS["lang"]['string'] = 'Streng';

$GLOBALS["lang"]['String'] = 'Streng';

$GLOBALS["lang"]['sub_resource_id'] = 'Underressource- id';

$GLOBALS["lang"]['Sub Resource ID'] = 'Underressource- id';

$GLOBALS["lang"]['sub_type'] = 'Undertype';

$GLOBALS["lang"]['Sub Type'] = 'Undertype';

$GLOBALS["lang"]['subject_key_ident'] = 'Emne Key Ident';

$GLOBALS["lang"]['Subject Key Ident'] = 'Emne Key Ident';

$GLOBALS["lang"]['Submit'] = 'Indsend';

$GLOBALS["lang"]['Submit Online'] = 'Indsend online';

$GLOBALS["lang"]['Submitted From'] = 'Indsendt fra';

$GLOBALS["lang"]['Subnet'] = 'Undernet';

$GLOBALS["lang"]['Subnet Discoveries'] = 'Undernet- opdagelser';

$GLOBALS["lang"]['Subscription ID'] = 'Abonnementsidentifikation';

$GLOBALS["lang"]['suburb'] = 'Forstad';

$GLOBALS["lang"]['Suburb'] = 'Forstad';

$GLOBALS["lang"]['Success'] = 'Succes';

$GLOBALS["lang"]['Sudan'] = 'Sudan';

$GLOBALS["lang"]['Sudo Password'] = 'Sudo- adgangskode';

$GLOBALS["lang"]['Sudo Password (optional)'] = 'Sudo Password (valgfri)';

$GLOBALS["lang"]['suite'] = 'Suite';

$GLOBALS["lang"]['Suite'] = 'Suite';

$GLOBALS["lang"]['summaries'] = 'Resuméer';

$GLOBALS["lang"]['Summaries'] = 'Resuméer';

$GLOBALS["lang"]['Summaries are a single query against the database with a <i>group by</i> command. Using this simple method we can easily create a summary for virtually any attribute.<br><br>We no longer require a separate report for each <i>type</i> of a device. We now simply have a summary that groups by <i>devices.type</i> and shows the result. You can then click on a given type from the list and see the matching devices. In this case, one Summary replaces (potentially) 78 reports (there are 78 device types).<br><br>A summary is different to a query in that a summary is designed to group items by a given attribute then provide a <i>click through</i> link to the actual devices. A query is simply a list of items with no further links. As above - this of a Summary as a combined <i>report + subreport</i>, whereas a query is simply a single Report.<br><br>Summaries have a different collection template to the other resources within Open-AudIT. This template shows the Summary as you would expect and also shows buttons with counts of other resources. This page is designed to be the HomePage of Open-AudIT.'] = 'Resuméer er en enkelt forespørgsel mod databasen med en <i>gruppe efter</i> Kommando. Ved hjælp af denne enkle metode kan vi nemt oprette et resumé for stort set alle attributter.<br/><br/>Vi har ikke længere brug for en særskilt rapport for hver <i>type</i> af en anordning. Vi har nu blot et resumé af, at grupper <i>udstyr. type</i> og viser resultatet. Du kan derefter klikke på en given type fra listen og se matchende enheder. I dette tilfælde erstatter et resumé (potentielt) 78 rapporter (der er 78 udstyrstyper).<br/><br/>Et resumé er forskellig fra en forespørgsel i, at et resumé er designet til at gruppere elementer af en given attribut derefter give en <i>klik igennem</i> link til de faktiske enheder. En forespørgsel er blot en liste over elementer uden yderligere links. Som ovenfor - dette af en oversigt som en kombineret <i>Rapport + underrapport</i>, mens en forespørgsel blot er en enkelt rapport.<br/><br/>Resuméer har en anden indsamlingsskabelon til de andre ressourcer i Open- Audit. Denne skabelon viser resuméet som du ville forvente og viser også knapper med tal på andre ressourcer. Denne side er designet til at være HomePage of Open- Audit.';

$GLOBALS["lang"]['Summaries are designed to group items by a particular matching column and then to provide a link to individual devices. In the previous versions of Open-AudIT, this would have been two different items - a report and subreport. We have now bundled these into what we call a Summary.'] = 'Resuméer er designet til at gruppere elementer med en bestemt matchende kolonne og derefter til at give et link til de enkelte enheder. I de tidligere versioner af Open- Audit, ville dette have været to forskellige punkter - en rapport og underrapport. Vi har nu samlet disse i det, vi kalder et resumé.';

$GLOBALS["lang"]['Summaries provide drilldown reporting capabilities. Simple, intuitive, powerful.'] = 'Resuméer giver mulighed for at rapportere om boringer. Enkel, intuitiv, kraftfuld.';

$GLOBALS["lang"]['Summaries take the same arguments as Queries.'] = 'Resuméer tager de samme argumenter som forespørgsler.';

$GLOBALS["lang"]['Summary'] = 'Oversigt';

$GLOBALS["lang"]['Sunday'] = 'Søndag';

$GLOBALS["lang"]['supplier'] = 'Leverandør';

$GLOBALS["lang"]['Supplier'] = 'Leverandør';

$GLOBALS["lang"]['Support'] = 'Støtte';

$GLOBALS["lang"]['Supported types are <code>subnet</code>, <code>seed</code> and <code>active directory</code>.'] = 'Understøttede typer er <code>subnet</code>, <code>seed</code> og <code>active directory</code>.';

$GLOBALS["lang"]['Supports compliance with legal and regulatory requirements'] = 'Understøtter overholdelse af lovkrav';

$GLOBALS["lang"]['Suriname'] = 'Surinam';

$GLOBALS["lang"]['Surveillance Audits:</strong> Annual audits to maintain certification'] = 'Overvågningsrevisioner: Årlige revisioner med henblik på at opretholde certificeringen';

$GLOBALS["lang"]['Svalbard & Jan Mayen Islands'] = 'Svalbard & Jan Mayen';

$GLOBALS["lang"]['Swaziland'] = 'Swaziland';

$GLOBALS["lang"]['Sweden'] = 'Sverige';

$GLOBALS["lang"]['Swedish'] = 'Svensk';

$GLOBALS["lang"]['switch_device_id'] = 'Skift enhed- ID';

$GLOBALS["lang"]['Switch Device ID'] = 'Skift enhed- ID';

$GLOBALS["lang"]['switch_port'] = 'Skift port';

$GLOBALS["lang"]['Switch Port'] = 'Skift port';

$GLOBALS["lang"]['Switzerland, Swiss Confederation'] = 'Schweiz, Det Schweiziske Forbund';

$GLOBALS["lang"]['Symptom'] = 'Symptomer';

$GLOBALS["lang"]['Syrian Arab Republic'] = 'Den Syriske Arabiske Republik';

$GLOBALS["lang"]['sysContact'] = 'Syskontakt';

$GLOBALS["lang"]['SysContact'] = 'Syskontakt';

$GLOBALS["lang"]['sysDescr'] = 'SysDescr';

$GLOBALS["lang"]['SysDescr'] = 'SysDescr';

$GLOBALS["lang"]['sysLocation'] = 'Syslocation';

$GLOBALS["lang"]['SysLocation'] = 'Syslocation';

$GLOBALS["lang"]['sysName'] = 'SysName';

$GLOBALS["lang"]['SysName'] = 'SysName';

$GLOBALS["lang"]['sysObjectID'] = 'SysObjectID';

$GLOBALS["lang"]['SysObjectID'] = 'SysObjectID';

$GLOBALS["lang"]['sysUpTime'] = 'SysupTime';

$GLOBALS["lang"]['SysUpTime'] = 'SysupTime';

$GLOBALS["lang"]['system_component'] = 'Systemkomponent';

$GLOBALS["lang"]['System Component'] = 'Systemkomponent';

$GLOBALS["lang"]['System-Area Network'] = 'System- områdenetværk';

$GLOBALS["lang"]['TX Bitrate'] = 'TX Bitrate';

$GLOBALS["lang"]['TX Freq'] = 'TX Freq';

$GLOBALS["lang"]['TX Level'] = 'TX- niveau';

$GLOBALS["lang"]['TX Power'] = 'TX- effekt';

$GLOBALS["lang"]['TX Profile'] = 'TX- profil';

$GLOBALS["lang"]['Table'] = 'Tabel';

$GLOBALS["lang"]['tag'] = 'Mærke';

$GLOBALS["lang"]['Tag'] = 'Mærke';

$GLOBALS["lang"]['tag_1'] = 'Mærke 1';

$GLOBALS["lang"]['Tag 1'] = 'Mærke 1';

$GLOBALS["lang"]['tag_2'] = 'Mærke 2';

$GLOBALS["lang"]['Tag 2'] = 'Mærke 2';

$GLOBALS["lang"]['tag_3'] = 'Mærke 3';

$GLOBALS["lang"]['Tag 3'] = 'Mærke 3';

$GLOBALS["lang"]['Tagalog'] = 'Tagalog';

$GLOBALS["lang"]['tags'] = 'Mærker';

$GLOBALS["lang"]['Tags'] = 'Mærker';

$GLOBALS["lang"]['Tags :: '] = 'Tags:: ';

$GLOBALS["lang"]['Taiwan'] = 'Taiwan';

$GLOBALS["lang"]['Tajikistan'] = 'Tadsjikistan';

$GLOBALS["lang"]['Take note of all output and action each item as appropriate.'] = 'Vær opmærksom på alt output og handling hvert punkt, hvor det er relevant.';

$GLOBALS["lang"]['Tanzania'] = 'Tanzania';

$GLOBALS["lang"]['Target Computer'] = 'Målcomputer';

$GLOBALS["lang"]['task'] = 'Opgave';

$GLOBALS["lang"]['Task'] = 'Opgave';

$GLOBALS["lang"]['tasks'] = 'Opgaver';

$GLOBALS["lang"]['Tasks'] = 'Opgaver';

$GLOBALS["lang"]['Tasks can be one of several distinct types: Baseline, Discovery, Report, Query, Summary or Collector.'] = 'Opgaver kan være en af flere forskellige typer: Baseline, Discovery, Rapport, Forespørgsel, Oversigt eller Collector.';

$GLOBALS["lang"]['tcp_ports'] = 'Tcp Ports';

$GLOBALS["lang"]['Tcp Ports'] = 'Tcp Ports';

$GLOBALS["lang"]['Technical Details'] = 'Tekniske detaljer';

$GLOBALS["lang"]['tenant'] = 'Tenant';

$GLOBALS["lang"]['Tenant'] = 'Tenant';

$GLOBALS["lang"]['Tenant ID'] = 'Tent ID';

$GLOBALS["lang"]['Tennant ID'] = 'Tennant ID';

$GLOBALS["lang"]['ternary'] = 'Ternary Formand';

$GLOBALS["lang"]['Ternary'] = 'Ternary Formand';

$GLOBALS["lang"]['Test 1'] = 'Prøvning 1';

$GLOBALS["lang"]['Test 2'] = 'Prøvning 2';

$GLOBALS["lang"]['Test 3'] = 'Prøvning 3';

$GLOBALS["lang"]['Test Email'] = 'Test e- mail';

$GLOBALS["lang"]['test_minutes'] = 'Testprotokol';

$GLOBALS["lang"]['Test Minutes'] = 'Testprotokol';

$GLOBALS["lang"]['test_os'] = 'Test Os';

$GLOBALS["lang"]['Test Os'] = 'Test Os';

$GLOBALS["lang"]['test_subnet'] = 'Testsubnet';

$GLOBALS["lang"]['Test Subnet'] = 'Testsubnet';

$GLOBALS["lang"]['tests'] = 'Prøvning';

$GLOBALS["lang"]['Tests'] = 'Prøvning';

$GLOBALS["lang"]['Text'] = 'Tekst';

$GLOBALS["lang"]['Thai'] = 'Thai';

$GLOBALS["lang"]['Thailand'] = 'Thailand';

$GLOBALS["lang"]['Thank you for starting your journey with the best discovery and inventory tool around.'] = 'Tak for at starte din rejse med den bedste opdagelse og opgørelse værktøj rundt.';

$GLOBALS["lang"]['Thanks to'] = 'Takket være';

$GLOBALS["lang"]['Thats it! You have just edited the attributes of as many devices as you need to.'] = 'Det er det! Du har netop redigeret attributterne til så mange enheder, som du har brug for.';

$GLOBALS["lang"]['The <i>Roles</i> endpoint allows you to manage the set of permissions(Create, Read, Update, Delete) that are granted to the users and are applied to each endpoint.'] = 'Den <i>Ruller</i> endpoint giver dig mulighed for at administrere det sæt tilladelser (Opret, Læs, Opdatér, Slet), der gives til brugerne og anvendes på hvert endpoint.';

$GLOBALS["lang"]['The API uses a cookie. You can request a cookie by sending a POST to the URL below, containing the username and password attributes and values:'] = 'API bruger en cookie. Du kan anmode om en cookie ved at sende en POST til webadressen nedenfor, der indeholder brugernavn og kodeord attributter og værdier:';

$GLOBALS["lang"]['The Active Directory domain to retrieve a list of subnets from.'] = 'Active Directory domæne at hente en liste over subnets fra.';

$GLOBALS["lang"]['The Active Directory server to retrieve a list of subnets from.'] = 'Den Active Directory server til at hente en liste over undernet fra.';

$GLOBALS["lang"]['The Applications endpoint allows you to define an application which you can then associate to a device (or devices).'] = 'Applications endpoint giver dig mulighed for at definere et program, som du derefter kan associere til en enhed (eller enheder).';

$GLOBALS["lang"]['The Attributes endpoint allows you to add customized values to different attributes in Open-AudIT, at the moment this feature works on the Class, Environment, Status and Type attributes on Devices, the Type attribute for both Locations and Orgs as well as the Menu Category for Queries. If you view an item of one of the prvious types (say view a Lkocation) you will notice the Type attribute must be selected from a drop-down box. This is where those values are stored. Hence, if you would like to add a new Type to be chosen for a Location, add it using the Attributes feature.'] = 'Attributter endpoint giver dig mulighed for at tilføje tilpassede værdier til forskellige attributter i Open- Audit, i øjeblikket denne funktion virker på klasse, miljø, status og type attributter på enheder, typen attribut for både steder og orger samt Menu kategori for forespørgsler. Hvis du ser et element af en af de snørklede typer (siger se en Lkocation) vil du bemærke Type attributten skal vælges fra et drop- down felt. Det er her, disse værdier lagres. Derfor, hvis du ønsker at tilføje en ny Type, der skal vælges for en placering, tilføje det ved hjælp af Attributter funktion.';

$GLOBALS["lang"]['The Automatable metric captures the answer to the question <strong>Can an attacker automate exploitation events for this vulnerability across multiple targets?</strong> based on steps 1-4 of the kill chain. These steps are reconnaissance, weaponization, delivery, and exploitation (Not Defined, No, Yes).'] = 'Den Automaterbare metrisk indfanger svaret på spørgsmålet <strong>Kan en angriber automatisere udnyttelsesbegivenheder for denne sårbarhed på tværs af flere mål?</strong> baseret på trin 1-4 i dræberkæden. Disse trin er rekognoscering, våben, levering og udnyttelse (Ikke defineret, Nej, Ja).';

$GLOBALS["lang"]['The CVE has been marked as invalid or withdrawn in the CVE List. It remains in the NVD but is excluded from default search results.'] = 'CVE er markeret som ugyldig eller trukket tilbage på CVE-listen. Det forbliver i NVD, men er udelukket fra standard søgeresultater.';

$GLOBALS["lang"]['The CVE has been published to the CVE List and included in the NVD dataset. Initial ingestion only.'] = 'CVE er blevet offentliggjort på CVE List og inkluderet i NVD datasæt. Kun initial indtagelse.';

$GLOBALS["lang"]['The CVE has been updated after initial analysis. NVD enrichment data may have been revised.'] = 'CVE er blevet opdateret efter indledende analyse. NVD-berigningsdata kan være blevet revideret.';

$GLOBALS["lang"]['The CVE identifier.'] = 'CVE-identifikatoren.';

$GLOBALS["lang"]['The CVE is actively being enriched with CVSS scores, CWE classifications, reference tags, and CPE applicability.'] = 'CVE bliver aktivt beriget med CVSS scorer, CWE klassifikationer, reference tags, og CPE anvendelighed.';

$GLOBALS["lang"]['The CVE is not currently prioritized for enrichment due to resource constraints or other reasons.'] = 'CVE er ikke i øjeblikket prioriteret for berigelse på grund af ressourcemæssige begrænsninger eller andre årsager.';

$GLOBALS["lang"]['The CVE is queued for enrichment by NVD analysts. No detailed metadata yet.'] = 'CVE er i kø for berigelse af NVD analytikere. Ingen detaljerede metadata endnu.';

$GLOBALS["lang"]['The Cloud that owns this item. Links to <code>clouds.id</code>.'] = 'Den Cloud, der ejer denne vare. Links til <code>clouds.id</code>.';

$GLOBALS["lang"]['The Device Seed Discovery type is the newest highly-effective method for network crawling, giving you the ability to target your network as narrowly or as broadly as you need. It is fast, it works and it is great.'] = 'Enheden Seed Discovery type er den nyeste højeffektive metode til netværk kravle, hvilket giver dig mulighed for at målrette dit netværk så snævert eller så bredt som du har brug for. Det er hurtigt, det virker og det er fantastisk.';

$GLOBALS["lang"]['The Discovery Scan Options we ship are detailed in the table below. As above, Enterprise users can create more of these or edit the shipped items.'] = 'Discovery Scan Valgmuligheder vi sender er beskrevet i tabellen nedenfor. Som ovenfor, Enterprise-brugere kan oprette flere af disse eller redigere de leverede elementer.';

$GLOBALS["lang"]['The Elevated User query'] = 'Den forhøjede brugerforespørgsel';

$GLOBALS["lang"]['The Executables feature scans the disk of a device as part of the audit and checks that every executable file is known to the package manager. Because it uses the package manager, the feature applies to Linux target devices only, and further than that, only rpm or deb based distributions. Anything Redhat or Debian based should work.'] = 'Den Executables funktion scanner disken på en enhed som en del af revisionen og kontrollerer, at hver eksekverbar fil er kendt af pakkehåndtering. Fordi den bruger pakkehåndteringen, gælder funktionen kun for Linux-målenheder, og derudover kun rpm eller deb-baserede distributioner. Alt Redhat eller Debian-baseret bør virke.';

$GLOBALS["lang"]['The FROM'] = 'FRA';

$GLOBALS["lang"]['The Group used to run the Baseline. Links to <code>groups.id</code>.'] = 'Gruppen plejede at lede Baseline. Links til <code>groups.id</code>.';

$GLOBALS["lang"]['The ID from the devices table (the devices.name will be displayed) of the NTU at this end of the connection. Links to <code>devices.id</code>.'] = 'ID fra tabellen enheder (devices.name vil blive vist) af NTU i denne ende af forbindelsen. Links til <code>devices.id</code>.';

$GLOBALS["lang"]['The ID from the imported benchmark policy.'] = 'ID fra den importerede benchmarkpolitik.';

$GLOBALS["lang"]['The ID from the locations table (the locations.name will be displayed) of this end of the connection. Links to <code>locations.id</code>. The A location is usually the <code>FROM</code> location.'] = 'ID fra placeringstabellen (locations.name vil blive vist) for denne ende af forbindelsen. Links til <code>locations.id</code>. A-placeringen er normalt den <code>FROM</code> placering.';

$GLOBALS["lang"]['The ID from the locations table (the locations.name will be displayed) of this end of the connection. Links to <code>locations.id</code>. The B location is usually the <code>TO</code> location.'] = 'ID fra placeringstabellen (locations.name vil blive vist) for denne ende af forbindelsen. Links til <code>locations.id</code>. B placeringen er normalt den <code>TO</code> placering.';

$GLOBALS["lang"]['The ID of the associated device (if any). Links to <code>devices.id</code>.'] = 'Identifikationen af den tilknyttede anordning (hvis en sådan findes). Links til <code>devices.id</code>.';

$GLOBALS["lang"]['The ID of the associated discovery. Linked to <code>discoveries.id</code>'] = 'Identifikationen af den tilknyttede opdagelse. Forbundet til <code>discoveries.id</code>';

$GLOBALS["lang"]['The ID of the item of the associated type.'] = 'ID for elementet af den tilknyttede type.';

$GLOBALS["lang"]['The ID of this orgs parent org. Linked to <code>orgs.id</code>'] = 'ID for denne orgs forælder org. Forbundet til <code>orgs.id</code>';

$GLOBALS["lang"]['The ID provided by the provider.'] = 'Udbyderens ID.';

$GLOBALS["lang"]['The ID retrieved from a Cloud discovery.'] = 'ID hentet fra en Cloud opdagelse.';

$GLOBALS["lang"]['The IP address of this collector used to communicate with the server.'] = 'IP- adressen på denne samler som bruges til at kommunikere med serveren.';

$GLOBALS["lang"]['The IP of the device to start a seed discovery with.'] = 'IP af enheden til at starte en frøopdagelse med.';

$GLOBALS["lang"]['The IP of the external interface.'] = 'IP af den eksterne grænseflade.';

$GLOBALS["lang"]['The IP of the internal interface.'] = 'IP af den interne grænseflade.';

$GLOBALS["lang"]['The ISO/IEC 27001 certification process and its key elements.'] = 'ISO / IEC 27001 certificeringsprocessen og dens nøgleelementer.';

$GLOBALS["lang"]['The ISP or Telco providing this link.'] = 'ISP eller Telco leverer dette link.';

$GLOBALS["lang"]['The JSON record from Mitre.'] = 'JSON-rekorden fra Mitre.';

$GLOBALS["lang"]['The JSON record from the NVD feed.'] = 'JSON record fra NVD feed.';

$GLOBALS["lang"]['The LDAP OU of this user (if LDAP is used).'] = 'Denne brugers LDAP OU (hvis LDAP anvendes).';

$GLOBALS["lang"]['The LDAP server could not be connected to. At all. Check it is pingable from the Open-AudIT server. Check the correct port is open to the Open-AudIT server. An nmap from the Open-AudIT server will show this. Substitute your LDAP servers IP for $ip. Try:<code>nmap -vv $ip</code>'] = 'LDAP- serveren kunne ikke tilsluttes. Overhovedet. Kontroller at det kan ses fra Open- Audits server. Tjek den korrekte port er åben for Open- Audit- serveren. Et nmap fra Open- Audit- serveren vil vise dette. Erstat dine LDAP servere IP for $ip. Prøv:<code>nmap -vv $ip</code>';

$GLOBALS["lang"]['The LDAP server type is invalid. It should be either <i>active directory</i> or <i>openldap</i>.'] = 'LDAP- servertypen er ugyldig. Det bør være enten <i>aktiv mappe</i> eller <i>openldap</i>.';

$GLOBALS["lang"]['The LDAP server was connected to and the user credentials accepted for bind.'] = 'LDAP-serveren blev tilsluttet og brugerlegitimationerne blev accepteret for binding.';

$GLOBALS["lang"]['The Linux Open-AudIT installer will test for and if required, install Open-AudITs dependencies from your distributions repository, including setting the Nmap SetUID. This is required for SNMP (UDP 161) detection by a non-root user. This is supported on RedHat/CentOS and Debian/Ubuntu. If you need to manually install Nmap:<br><br>For RedHat/CentOS do (NOTE - if you upgrade using yum, you will need to reapply this <i>chmod</i> setting).'] = 'Linux Open- Audits installeringsprogram vil teste for og om nødvendigt installere Open- Audits afhængigheder fra dit distributions arkiv, herunder indstilling af Nmap SetuID. Dette kræves for SNMP (UDP 161) detektering af en ikke-root bruger. Dette understøttes af RedHat / CentOS og Debian / Ubuntu. Hvis du skal installere Nmap manuelt:<br/><br/>For RedHat / CentOS gør (NOTE - hvis du opgraderer ved hjælp af yum, skal du genanvende dette <i>chmod</i> setting).';

$GLOBALS["lang"]['The Location that contains this network. Links to <code>locations.id</code>.'] = 'Placering, der indeholder dette netværk. Links til <code>locations.id</code>.';

$GLOBALS["lang"]['The NVD assigned base status.'] = 'NVD tildelte basisstatus.';

$GLOBALS["lang"]['The National Institute of Standards and Technology is the federal technology agency. They advance official technology, measurement science and standards.'] = 'National Institute of Standards and Technology er det føderale teknologiagentur. De fremmer officiel teknologi, målevidenskab og standarder.';

$GLOBALS["lang"]['The Network to Discover'] = 'Netværket der skal opdages';

$GLOBALS["lang"]['The Nmap timing preset.'] = 'Nmap timing forudindstillet.';

$GLOBALS["lang"]['The OS this package should be reported against. Blank for all. Use the percent sign % as a wildcard. Will be tested against os_group, os_family and os_name in that order.'] = 'Den OS denne pakke skal rapporteres imod. Blank for alle. Brug procenttegnet% som et wildcard. Vil blive testet mod os _ group, os _ family og os _ name i denne rækkefølge.';

$GLOBALS["lang"]['The Open-AudIT API'] = 'Den Open- Audit API';

$GLOBALS["lang"]['The Open-AudIT id of the linked cloud. Links to <code>clouds.id</code>.'] = 'Open- Audit id for den forbundne sky. Links til <code>clouds.id</code>.';

$GLOBALS["lang"]['The Open-AudIT server code was exeucted within this file.'] = 'Open- Aud IT-serverkoden blev slettet i denne fil.';

$GLOBALS["lang"]['The Open-AudIT server code was exeucted within this function.'] = 'Open- Aud IT-serverkoden blev overskredet inden for denne funktion.';

$GLOBALS["lang"]['The OpenSCAP ecosystem provides multiple tools to assist administrators and auditors with assessment, measurement, and enforcement of security baselines including a wide variety of hardening guides and configuration baselines developed by the open source community, ensuring that you can choose a security policy which best suits the needs of your organization, regardless of its size.'] = 'OpenSCAP økosystem giver flere værktøjer til at hjælpe administratorer og revisorer med vurdering, måling og håndhævelse af sikkerhedslinjer, herunder en bred vifte af hærdning guider og konfiguration basislinjer udviklet af open source samfund, sikre, at du kan vælge en sikkerhedspolitik, der passer bedst til behovene i din organisation, uanset dens størrelse.';

$GLOBALS["lang"]['The OpenSCAP project is a collection of open source tools for implementing and enforcing this standard, and has been awarded the SCAP 1.2 certification by NIST in 2014.'] = 'OpenSCAP projektet er en samling af open source værktøjer til at gennemføre og håndhæve denne standard, og har fået tildelt SCAP 1.2 certificering af NIST i 2014.';

$GLOBALS["lang"]['The Organisation that owns this item. Links to <code>orgs.id</code>.'] = 'Den organisation, der ejer denne vare. Links til <code>orgs.id</code>.';

$GLOBALS["lang"]['The Process Identifier of the running associated discovery.'] = 'Proces- identifikatoren for den kørende tilknyttede opdagelse.';

$GLOBALS["lang"]['The RU positon of the top of this device.'] = 'Jernbanevirksomhedens positon på toppen af denne anordning.';

$GLOBALS["lang"]['The Racks feature is used to manage and visualize your rack use with an Organisation, Location, Building, Floor, Room and Row.'] = 'Racks-funktionen bruges til at administrere og visualisere din rack-brug med en organisation, placering, bygning, gulv, værelse og række.';

$GLOBALS["lang"]['The SCAP is a specification for expressing and manipulating security data in standardized ways. SCAP uses several individual specifications in concert to automate continuous monitoring, vulnerability management, and security policy compliance evaluation reporting'] = 'Den fælles landbrugspolitik er en specifikation for at udtrykke og manipulere sikkerhedsdata på standardiserede måder. SCAP bruger flere individuelle specifikationer i fællesskab til at automatisere løbende overvågning, sårbarhedsstyring og evaluering af sikkerhedspolitikkens overholdelse';

$GLOBALS["lang"]['The SELECT'] = 'SELEKT';

$GLOBALS["lang"]['The SELECT section of the query should use full dot notation and also request the field with its full dot name. IE - SELECT devices.id AS `devices.id`. Each field should be selected in this fashion to enable GUI side attribute filtering.'] = 'SELECT-afsnittet i forespørgslen skal bruge fuld prik notation og også anmode om feltet med sin fulde prik navn. IE - SELEKT enheder. id AS \'devices.id\'. Hvert felt skal vælges på denne måde, så GUI-side attributten filtreres.';

$GLOBALS["lang"]['The SELECT section of your SQL must contain fully qualified columns and specify certain columns.'] = 'SELECT-sektionen af din SQL skal indeholde fuldt kvalificerede kolonner og angive visse kolonner.';

$GLOBALS["lang"]['The SNMP community string.'] = 'SNMP \'s samfundsstreng.';

$GLOBALS["lang"]['The SNMP v3 Authentication Passphrase.'] = 'SNMP v3 Authentication Passphrase.';

$GLOBALS["lang"]['The SNMP v3 Authentication Protocol.'] = 'SNMP v3 Authenticationsprotokollen.';

$GLOBALS["lang"]['The SNMP v3 Privacy Passphrase.'] = 'SNMP v3 Privacy Passphrase.';

$GLOBALS["lang"]['The SNMP v3 Privacy Protocol.'] = 'SNMP v3 \'s fortrolighedsprotokol.';

$GLOBALS["lang"]['The SNMP v3 Security Level.'] = 'SNMP v3 Security Level.';

$GLOBALS["lang"]['The SNMP v3 Security Name.'] = 'SNMP v3 sikkerhedsnavn.';

$GLOBALS["lang"]['The SNMPv3 context Engine ID (optional).'] = 'SNMPv3-kontekstmotorens ID (valgfrit).';

$GLOBALS["lang"]['The SNMPv3 context Name (optional).'] = 'SNMPv3 kontekstnavn (valgfrit).';

$GLOBALS["lang"]['The SQL cannot contain <strong>WHERE @filter OR</strong>. That SQL will not be executed, however <strong>WHERE @filter AND</strong> queries are allowed.'] = 'SQL kan ikke indeholde <strong>HVOR @ filter ELLER</strong>. At SQL ikke vil blive udført, men <strong>HVOR @ filter OG</strong> Forespørgsler er tilladt.';

$GLOBALS["lang"]['The SQL queries used in Open-AudIT require the use of the backtick - ` character and NOT the standard single quote for fields. On most US Windows keyboards the backtick key is located in the top-left of the keyboard along with the tilde ~. On a US Mac keyboard the backtick key is located next to the SHIFT key. The standard single quote is still used to enclose values as the examples below illustrate.'] = 'SQL forespørgsler, der anvendes i Open- Audit kræver brug af backtch - \'karakter og IKKE standard enkelt tilbud for felter. På de fleste amerikanske Windows tastaturer er backtick-tasten placeret øverst til venstre på tastaturet sammen med tilde ~. På et amerikansk Mac-tastatur er backtick-tasten placeret ved siden af SHIFT-tasten. Standard enkelt tilbud bruges stadig til at vedlægge værdier, som eksemplerne nedenfor illustrerer.';

$GLOBALS["lang"]['The SQL query is essentially broken into three parts.'] = 'SQL-forespørgslen er hovedsagelig opdelt i tre dele.';

$GLOBALS["lang"]['The Standards functionality in Open-AudIT allows you to, ahead of time, complete the questions auditors require when completing ISO 27001 certification.'] = 'Standarder funktionalitet i Open- Audit giver dig mulighed for at, forud for tid, fuldføre de spørgsmål revisorer kræver, når du udfører ISO 27001 certificering.';

$GLOBALS["lang"]['The URL of the external system.'] = 'URL \'en for det eksterne system.';

$GLOBALS["lang"]['The URL of your Open-AudIT Server that this Collector will report to (no trailing slash).'] = 'URL \'en for din Open- Audit Server, som denne Collector vil rapportere til (ingen efterfølgende skråstreg).';

$GLOBALS["lang"]['The URL the audit scripts should submit their result to.'] = 'Den URL revision scripts bør indsende deres resultat til.';

$GLOBALS["lang"]['The User endpoint allows you to manage user accounts within Open-AudIT.'] = 'Brugerendepunktet giver dig mulighed for at administrere brugerkonti i Open- Audit.';

$GLOBALS["lang"]['The WHERE'] = 'Hvor';

$GLOBALS["lang"]['The WHERE section of your SQL <em>must</em> contain'] = 'Hvor del af din SQL <em>skal</em> indeholder';

$GLOBALS["lang"]['The Windows'] = 'Vinduerne';

$GLOBALS["lang"]['The Windows log may say the following'] = 'Windows-loggen kan sige følgende';

$GLOBALS["lang"]['The account must have a password; WMI does not allow blank passwords.'] = 'Kontoen skal have en adgangskode; WMI tillader ikke tomme adgangskoder.';

$GLOBALS["lang"]['The account password must NOT contain \" (double quotes). This is because cscript (and wscript) cannot parse argument values containing double quotes. They are simply stripped. No (before you ask) escaping will not work. This is a cscript limitation and nothing to do with Open-AudIT.'] = 'Kontokodeordet må IKKE indeholde\ "(dobbelte citater). Dette skyldes, at cscript (og wscript) ikke kan fortolke argumentværdier, der indeholder dobbelte citater. De er simpelthen strippet. Nej (før du spørger) flugt vil ikke virke. Dette er en cscript begrænsning og intet at gøre med Open- Audit.';

$GLOBALS["lang"]['The actual full name of this user.'] = 'Det faktiske fulde navn på denne bruger.';

$GLOBALS["lang"]['The address of the Open-AudIT server submit page.'] = 'Adressen på Open- Audit- serveren indsende siden.';

$GLOBALS["lang"]['The administrator supplied credentials that were successfully used to bind to LDAP.'] = 'Administratoren leverede legitimationer, der med held blev brugt til at binde sig til LDAP.';

$GLOBALS["lang"]['The administrator supplied credentials to bind to the LDAP server, but they have not been accepted by the LDAP sevrer. Double check the credentials work on the LDAP server, and then check (or reset them) in the Open-AudIT LDAP Server entry.'] = 'Administratoren leverede legitimationer for at binde sig til LDAP-serveren, men de er ikke blevet accepteret af LDAP-severe. Dobbelt tjek legitimationsarbejdet på LDAP-serveren, og derefter kontrollere (eller nulstille dem) i Open- Audit LDAP Server post.';

$GLOBALS["lang"]['The agent and server are also intelligent enough to self-update the agent if a newer version is installed on the server (say after upgrading Open-AudIT).'] = 'Agent og server er også intelligente nok til at selvopdatere agent, hvis en nyere version er installeret på serveren (siger efter opgradering Open- Audit).';

$GLOBALS["lang"]['The agent should download a fresh copy of the audit script, run it and submit the result to the server.'] = 'Agenten bør downloade en ny kopi af revisionsscriptet, køre det og indsende resultatet til serveren.';

$GLOBALS["lang"]['The application creates temporary audit scrtips here, copies them to the target machines, then deletes them.'] = 'Ansøgningen skaber midlertidige revision scrups her, kopierer dem til målet maskiner, og derefter sletter dem.';

$GLOBALS["lang"]['The associated baseline. Links to <code>baselines.id</code>.'] = 'Den relaterede baseline. Links til <code>baselines.id</code>.';

$GLOBALS["lang"]['The associated discovery (if required). Links to <code>discoveries.id</code>.'] = 'Den tilknyttede opdagelse (hvis påkrævet). Links til <code>discoveries.id</code>.';

$GLOBALS["lang"]['The attribute to test (from the <code>devices</code> table).'] = 'Attributten til prøvningen (fra <code>devices</code> Tabel).';

$GLOBALS["lang"]['The attribute to test (must match an external field name from below).'] = 'Attributten til prøvningen (skal svare til et eksternt feltnavn nedefra).';

$GLOBALS["lang"]['The attributes for discovery scan options are as below.'] = 'Attributterne for søgescanningsmuligheder er som nedenfor.';

$GLOBALS["lang"]['The audit script upon which to base your customisations.'] = 'Den revision script til at basere dine tilpasninger.';

$GLOBALS["lang"]['The audit script will use the files[ ] array and retrieve the file details.'] = 'Revisorscriptet vil bruge filerne [] array og hente filoplysningerne.';

$GLOBALS["lang"]['The audit scripts all accept a debugging argument. You can run the script utilizing that and see in more detail what the issue is. And if you cannot figure it out - that is what we are here for! Open a support case and we will get things running in no time.'] = 'Revisionspapirerne accepterer alle et fejlsøgningsargument. Du kan køre scriptet udnytte det og se mere detaljeret, hvad problemet er. Og hvis du ikke kan finde ud af det - det er det, vi er her for! Åbn en støttesag og vi vil få tingene i gang på ingen tid.';

$GLOBALS["lang"]['The base path from which to search for Users.'] = 'Basisstien hvorfra du skal søge efter brugere.';

$GLOBALS["lang"]['The below steps are not the fault of or unique to Open-AudIT and would affect <strong>any</strong> discovery application using remote WMI and/or Windows.'] = 'Nedenstående trin er ikke skyld i eller unik for Open- Audit og ville påvirke <strong>alle</strong> søgningsprogram ved hjælp af ekstern WMI og / eller Windows.';

$GLOBALS["lang"]['The benchmark type.'] = 'Referencetype.';

$GLOBALS["lang"]['The building the rack is located in.'] = 'Bygningen er placeret i.';

$GLOBALS["lang"]['The calculated number of devices to be created externally.'] = 'Det beregnede antal enheder, der skal oprettes eksternt.';

$GLOBALS["lang"]['The calculated number of devices to be created in Open-AudIT.'] = 'Det beregnede antal enheder, der skal oprettes i Open- Audit.';

$GLOBALS["lang"]['The client ID is the ID of an Azure Active Directory application. The client secret is the key that you give that application.'] = 'Klienten ID er ID for et Azure Active Directory program. Kundehemmeligheden er nøglen, du giver den ansøgning.';

$GLOBALS["lang"]['The collector is essentially a full install of Open-AudIT in <i>collector</i> mode. The collector is designed to run discovery upon the network it is situated in. It is not restricted to only that network, but ideally it would essentially be one collector per subnet where required. The collector is driven on a schedule by the server and runs discovery upon the network as specified.<br>When in Stand Alone mode the Collector acts as an independant server, simply forwarding all devices found to the main server.<br><br>Once installed and setup, control of the Collector is performed on the Server (not in Stand Alone mode).<br><br>The only required network ports between the collector and server are 80 or 443 (TCP connection established from the Collector to the Server). The Open-AudIT database is not (and cannot be) shared between these installs.<br><br>By default the collector (not in Stand Alone mode) will request from the server any discovery tasks every 5 minutes (you can configure this on the server for new Collectors using the configuration item collector_check_minutes) therefor any discovery tasks for the collector should be scheduled for 0, 5, 10, 15, etc minutes.'] = 'Samleren er hovedsagelig en fuld installation af Open- Audit i <i>opkøber</i> tilstand. Samleren er designet til at køre opdagelse på det netværk, det er beliggende i. Det er ikke begrænset til kun dette netværk, men ideelt set ville det i bund og grund være en samler per subnet, hvor det er nødvendigt. Samleren drives på en tidsplan af serveren og kører opdagelse på netværket som angivet.<br/>Når I står op Alene tilstand Collector fungerer som en uafhængig server, blot videresender alle enheder fundet til hovedserveren.<br/><br/>Når installeret og opsætning, kontrol af Samleren udføres på serveren (ikke i Stand Alone tilstand).<br/><br/>De eneste nødvendige netværksporte mellem samleren og serveren er 80 eller 443 (TCP-forbindelse etableret fra Samleren til serveren). Open- Audits database er ikke (og kan ikke) delt mellem disse installationer.<br/><br/>Som standard vil samleren (ikke i Stand Alone-tilstand) anmode serveren om eventuelle opdagelsesopgaver hvert 5. minut (du kan konfigurere dette på serveren for nye samlere ved hjælp af konfigurationselementet samler _ check _ minutes) Derfor skal eventuelle opdagelsesopgaver for samleren planlægges til 0, 5, 10, 15, etc minutter.';

$GLOBALS["lang"]['The collector is essentially a full install of Open-AudIT in <i>collector</i> mode. This mode would reduce visible functionality in an effort to simplify and focus the application. It is designed to collect information about local networks and devices, where firewall and/or network traversal is an issue from the server.'] = 'Samleren er hovedsagelig en fuld installation af Open- Audit i <i>opkøber</i> tilstand. Denne tilstand ville reducere synlig funktionalitet i et forsøg på at forenkle og fokusere programmet. Det er designet til at indsamle oplysninger om lokale netværk og enheder, hvor firewall og / eller netværk traversal er et problem fra serveren.';

$GLOBALS["lang"]['The collectors internal IP used when it runs a discovery.'] = 'Samlere interne IP bruges, når det kører en opdagelse.';

$GLOBALS["lang"]['The column name from the foreign table. Should be one of: class, environment, status, type or menu_category.'] = 'Kolonnens navn fra den udenlandske tabel. Bør være en af: klasse, miljø, status, type eller menu _ kategori.';

$GLOBALS["lang"]['The command executed upon the target device or Open-AudIT server code executed during discovery.'] = 'Kommandoen udført på målenheden eller Open- Audit- server- kode udført under opdagelsen.';

$GLOBALS["lang"]['The configuration of your cluster can be: <code>active/active</code>, <code>active/passive</code>, <code>N+1</code>, <code>N+M</code>, <code>N-to-1</code>, <code>N-to-N</code>, <code>other</code> or blank.'] = 'Konfigurationen af din klynge kan være: <code>active/active</code>, <code>active/passive</code>, <code>N+1</code>, <code>N+M</code>, <code>N-to-1</code>, <code>N-to-N</code>, <code>other</code> eller blank.';

$GLOBALS["lang"]['The credentials password. If the credentials are an SSH Key, this is the password used to unlock the key and is optional.'] = 'Adgangskoden. Hvis legitimationerne er en SSH-nøgle, dette er den adgangskode, der bruges til at låse nøglen op og er valgfri.';

$GLOBALS["lang"]['The credentials supplied by the user have failed.'] = 'Den legitimation, som brugeren har leveret, er mislykkedes.';

$GLOBALS["lang"]['The credentials username.'] = 'Brugernavnet.';

$GLOBALS["lang"]['The current date and time in the format: Y-m-d H:i:s.'] = 'Den aktuelle dato og tid i formatet: Y- m- d H: i: s.';

$GLOBALS["lang"]['The current date in Y-m-d format.'] = 'Den aktuelle dato i Y- m- d format.';

$GLOBALS["lang"]['The current status of the Cloud Discovery.'] = 'Den aktuelle status af Cloud Discovery.';

$GLOBALS["lang"]['The current status of the discovery.'] = 'Den aktuelle status af opdagelsen.';

$GLOBALS["lang"]['The dashboard that will be shown by default for this user. Links to <code>dashboards.id</code>.'] = 'Det instrumentbræt, der vil blive vist som standard for denne bruger. Links til <code>dashboards.id</code>.';

$GLOBALS["lang"]['The data stored in the database is not showing in the application translated. We leave the data as it is. However, there is nothing to stop you, the user, changing the name (for example) of an item in the database to your language.'] = 'De data, der er lagret i databasen, vises ikke i programmet oversat. Vi efterlader dataene, som de er. Men der er intet at stoppe dig, brugeren, ændre navnet (for eksempel) på et element i databasen til dit sprog.';

$GLOBALS["lang"]['The data you input will be used in a <code>LIKE</code> clause, not (as per the API) an <code>equals</code> clause. Another example - if you input <code>comput</code>, it would still return all computers. And because we are using a <code>LIKE</code> clause, it is case-insensitive.'] = 'De data du indtaster vil blive brugt i en <code>LIKE</code> klausul, ikke (ifølge API) en <code>equals</code> klausul. Et andet eksempel - hvis du indtaster <code>comput</code>Det ville stadig returnere alle computere. Og fordi vi bruger en <code>LIKE</code> Formanden. - Forhandlingen er afsluttet.';

$GLOBALS["lang"]['The database schema can be found in the application if the user has database::read permission by going to menu: Admin -> Database ->'] = 'Databasen skema kan findes i programmet, hvis brugeren har database:: Læs tilladelse ved at gå til menu: Admin - > Database - >';

$GLOBALS["lang"]['The database version and web version are inconsistent.'] = 'Databasen version og web-version er inkonsistente.';

$GLOBALS["lang"]['The date of license expiration.'] = 'Datoen for licensens udløb.';

$GLOBALS["lang"]['The date the software is discontinued by the manufacturer. Usually replaced by a newer version. Maintenance may still be available.'] = 'Den dato, hvor softwaren ophører af fabrikanten. Normalt erstattet af en nyere version. Vedligeholdelse kan stadig være til rådighed.';

$GLOBALS["lang"]['The date the software no longer receives updates and is effectively discontinued altogether. Maintenance is discontinued.'] = 'Datoen softwaren ikke længere modtager opdateringer og er effektivt indstillet helt. Vedligeholdelsen afbrydes.';

$GLOBALS["lang"]['The date this item was changed or added (read only). NOTE - This is the timestamp from the server.'] = 'Datoen for dette punkt blev ændret eller tilføjet (kun læst). BEMÆRK - Dette er tidsstemplet fra serveren.';

$GLOBALS["lang"]['The date/time when this result was created.'] = 'Dato / tidspunkt, hvor dette resultat blev skabt.';

$GLOBALS["lang"]['The day of the month when this task should execute (* for every day).'] = 'Den dag i måneden, hvor denne opgave skal udføres (* for hver dag).';

$GLOBALS["lang"]['The day of the week when this task should execute (* for every day).'] = 'Den dag i ugen, hvor denne opgave skal udføres (* for hver dag).';

$GLOBALS["lang"]['The debug level (will output to command prompt window). Lower means less output with 0 being no output.'] = 'Fejlsøgningsniveau (vil udskrive til kommandoprompt vinduet). Lavere betyder mindre output med 0 er ingen output.';

$GLOBALS["lang"]['The default discovery scan option is the UltraFast set.'] = 'Standard scan option er UltraFast sæt.';

$GLOBALS["lang"]['The default language assigned to any user created by this method.'] = 'Standardsproget tildelt enhver bruger oprettet ved denne metode.';

$GLOBALS["lang"]['The device must respond to an Nmap ping before it is considered online.'] = 'Enheden skal reagere på en Nmap ping, før det betragtes online.';

$GLOBALS["lang"]['The device within Open-AudIT. Links to <code>devices.id</code>.'] = 'Enheden i Open- Audit. Links til <code>devices.id</code>.';

$GLOBALS["lang"]['The direct link for the script is'] = 'Det direkte link til scriptet er';

$GLOBALS["lang"]['The email address of the reciever'] = 'E-mailadressen';

$GLOBALS["lang"]['The enterprise binary from FirstWave is required for a license. Please download Open-AudIT from'] = 'Virksomheden binær fra FirstWave er påkrævet for en licens. Download venligst Open- Audit fra';

$GLOBALS["lang"]['The entire associated baseline this result is from.'] = 'Hele den tilknyttede baseline dette resultat er fra.';

$GLOBALS["lang"]['The exploited vulnerability can affect resources beyond the security authority of the vulnerable component. This usually means a privilege or trust boundary is crossed (for example, escaping from a container to the host OS).'] = 'Den udnyttede sårbarhed kan påvirke ressourcerne ud over den sårbare komponents sikkerhedsmyndighed. Dette betyder normalt et privilegium eller tillid grænse krydses (for eksempel, flygte fra en container til værten OS).';

$GLOBALS["lang"]['The exploited vulnerability only impacts resources within the same security authority as the vulnerable component. In other words, the attacker’s actions stay within the original trust boundary.'] = 'Den udnyttede sårbarhed påvirker kun ressourcer inden for samme sikkerhedsmyndighed som den sårbare komponent. Med andre ord, angriberens handlinger forbliver inden for den oprindelige tillid grænse.';

$GLOBALS["lang"]['The externally referenced location ID. Usually populated by Cloud audits.'] = 'Det eksternt refererede sted- id. Normalt befolket af Cloud revisioner.';

$GLOBALS["lang"]['The fields associated with an Integration are stored in the database as a JSON array of objects. Each field has the following attributes'] = 'Felterne i forbindelse med integration lagres i databasen som et JSON-array af objekter. Hvert felt har følgende attributter:';

$GLOBALS["lang"]['The first time that Open-AudIT retrieved details of this device.'] = 'Første gang, at Open- Audit hentede oplysninger om denne enhed.';

$GLOBALS["lang"]['The floor the rack is located on.'] = 'Gulvet rack er placeret på.';

$GLOBALS["lang"]['The foreign table to reference. Should be one of: devices, locations, orgs or queries.'] = 'Den udenlandske tabel til reference. Bør være en af: enheder, steder, orgs eller forespørgsler.';

$GLOBALS["lang"]['The format of your data should be in the form'] = 'Formatet for dine data skal være i form';

$GLOBALS["lang"]['The format used for the output to be emailed.'] = 'Det format, der bruges til uddata, der skal sendes.';

$GLOBALS["lang"]['The fully qualified column upon which to group by. NOTE: When type = traffic, this represents the red query id.'] = 'Den fuldt kvalificerede kolonne, som skal grupperes efter. BEMÆRK: Når type = trafik, repræsenterer dette den røde forespørgsel id.';

$GLOBALS["lang"]['The fully qualified name returned by the external system. EG: for NMIS we use configuration.roleType.'] = 'Det fuldt kvalificerede navn returneres af det eksterne system. EG: For NMIS bruger vi konfiguration. rolle Type.';

$GLOBALS["lang"]['The fully qualified table.column. Multiple may be provided, separated by a comma (no spaces).'] = 'Den fuldt kvalificerede table.column. Der kan leveres flere, adskilt af et komma (ingen mellemrum).';

$GLOBALS["lang"]['The generated SQL query to test for this vulnerability. This field can be edited to correct the query as required.'] = 'Den genererede SQL forespørgsel at teste for denne sårbarhed. Dette felt kan redigeres for at korrigere forespørgslen efter behov.';

$GLOBALS["lang"]['The group of devices on which the baseline was run against.'] = 'Den gruppe af enheder, som basislinjen blev kørt imod.';

$GLOBALS["lang"]['The group that provides a list of devices for the integration. Links to <code>groups.id</code>.'] = 'Den gruppe, der leverer en liste over anordninger til integration. Links til <code>groups.id</code>.';

$GLOBALS["lang"]['The hour of the day when this task should execute (* for every hour).'] = 'Den time på dagen, hvor denne opgave skal udføres (* for hver time).';

$GLOBALS["lang"]['The id of the linked device. Links to <code>devices.id</code>'] = 'Identifikationen af den tilsluttede enhed. Links til <code>devices.id</code>';

$GLOBALS["lang"]['The identifier column (integer) in the database (read only).'] = 'Identifikationskolonnen (heltal) i databasen (kun læst).';

$GLOBALS["lang"]['The importance of this baseline (not used yet).'] = 'Betydningen af denne baseline (endnu ikke anvendt).';

$GLOBALS["lang"]['The integer of severity.'] = 'Hele sværhedsgraden.';

$GLOBALS["lang"]['The internal value, reformatted in this format.'] = 'Den interne værdi, omformateret i dette format.';

$GLOBALS["lang"]['The ip address of the Auth method.'] = 'Ip-adressen på Auth-metoden.';

$GLOBALS["lang"]['The language to translate the web interface into for the user.'] = 'Sproget til at oversætte web-interface til for brugeren.';

$GLOBALS["lang"]['The last date and time this item was executed (read only).'] = 'Den sidste dato og tidspunkt dette element blev udført (læs kun).';

$GLOBALS["lang"]['The last time that Open-AudIT retrieved details of this device.'] = 'Sidste gang, at Open- Audit hentede oplysninger om denne enhed.';

$GLOBALS["lang"]['The last time this benchmarks was executed.'] = 'Sidste gang disse benchmarks blev udført.';

$GLOBALS["lang"]['The last time this integration was run.'] = 'Sidste gang denne integration blev gennemført.';

$GLOBALS["lang"]['The license endpoint allows you to track the number of licenses found on your devices.'] = 'Licensens endepunkt giver dig mulighed for at spore antallet af licenser fundet på dine enheder.';

$GLOBALS["lang"]['The line number assigned by the provider to the line at this end of the connection.'] = 'Linjenummer tildelt af udbyderen til linjen i denne ende af forbindelsen.';

$GLOBALS["lang"]['The location the rack is located in. Links to <code>locations.id</code>.'] = 'Placeringen rack er placeret i. Links til <code>locations.id</code>.';

$GLOBALS["lang"]['The locations address.'] = 'Adressen.';

$GLOBALS["lang"]['The locations area.'] = 'Placeringerne område.';

$GLOBALS["lang"]['The locations city.'] = 'Placeringerne by.';

$GLOBALS["lang"]['The locations country.'] = 'Placeringerne landet.';

$GLOBALS["lang"]['The locations district.'] = 'Lokalområdet.';

$GLOBALS["lang"]['The locations latitude.'] = 'Placeringerne breddegrad.';

$GLOBALS["lang"]['The locations level.'] = 'Placeringerne niveau.';

$GLOBALS["lang"]['The locations longitude.'] = 'Lokaliteterne længde.';

$GLOBALS["lang"]['The locations phone.'] = 'Placeringstelefonen.';

$GLOBALS["lang"]['The locations postcode.'] = 'Placeringerne postnummer.';

$GLOBALS["lang"]['The locations region.'] = 'Lokaliseringsområdet.';

$GLOBALS["lang"]['The locations room.'] = 'Placerings rummet.';

$GLOBALS["lang"]['The locations state.'] = 'Placeringerne står.';

$GLOBALS["lang"]['The locations suburb.'] = 'Placeringerne forstad.';

$GLOBALS["lang"]['The locations suite.'] = 'Lokaliseringssuiten.';

$GLOBALS["lang"]['The logic for device matching is contained in the devices_helper.php file, which on a Linux install can be found here'] = 'Logikken for enhed matching er indeholdt i enheden _ helper.php fil, som på en Linux-installation kan findes her';

$GLOBALS["lang"]['The machine-default permission settings do not grant Local Activation permission for the COM Server application with'] = 'Indstillingerne for maskin- standard tilladelse giver ikke lokal aktiveringstilladelse til COM Server programmet med';

$GLOBALS["lang"]['The maximum physical weight (in KGs) this rack can hold.'] = 'Den maksimale fysiske vægt (i KG) denne rack kan holde.';

$GLOBALS["lang"]['The maximum total BTUs this rack is rated for.'] = 'Den maksimale samlede BTU \'er, som denne rack er vurderet til.';

$GLOBALS["lang"]['The minimum required attributes for attributes are'] = 'De krævede minimumsattributter for attributter er';

$GLOBALS["lang"]['The minute of the hour when this task should execute (* for every minute).'] = 'Det minut i timen, hvor denne opgave skal udføres (* for hvert minut).';

$GLOBALS["lang"]['The month of the year when this task should execute (* for every month).'] = 'Den måned i året, hvor denne opgave skal udføres (* for hver måned).';

$GLOBALS["lang"]['The name given to this item.'] = 'Navnet på dette punkt.';

$GLOBALS["lang"]['The name given to this item. Ideally it should be unique.'] = 'Navnet på dette punkt. Ideelt set burde det være unikt.';

$GLOBALS["lang"]['The name given to this user (used to login). Ideally it should be unique.'] = 'Navnet givet til denne bruger (bruges til at logge ind). Ideelt set burde det være unikt.';

$GLOBALS["lang"]['The name of the associated cloud (if required).'] = 'Navnet på den tilknyttede sky (hvis påkrævet).';

$GLOBALS["lang"]['The name of the software package, as audited by Open-AudIT. Use the percent sign % as a wildcard.'] = 'Navnet på softwarepakken, som revideret af Open- Audit. Brug procenttegnet% som et wildcard.';

$GLOBALS["lang"]['The name of the user who last changed or added this item (read only).'] = 'Navnet på den bruger, der senest har ændret eller tilføjet dette punkt (kun læst).';

$GLOBALS["lang"]['The name provided by the provider.'] = 'Navnet fra udbyderen.';

$GLOBALS["lang"]['The network in the format 192.168.1.0/24.'] = 'Netværket i formatet 192.168.1.0 / 24.';

$GLOBALS["lang"]['The network subnet to execute the discovery on.'] = 'Netværksundernettet at udføre opdagelsen på.';

$GLOBALS["lang"]['The new Agent runs a PowerShell version of the old audit script in preparation for the depreciation of VBScript (yes, it is coming).'] = 'Den nye agent kører en PowerShell version af den gamle revision script som forberedelse til afskrivning af VBScript (ja, det kommer).';

$GLOBALS["lang"]['The number of RUs this device occupies.'] = 'Antallet af RUs denne enhed indtager.';

$GLOBALS["lang"]['The number of associated locations. Links to <code>locations.cloud_id</code>.'] = 'Antallet af tilknyttede steder. Links til <code>locations.cloud_id</code>.';

$GLOBALS["lang"]['The number of associated networks. Links to <code>networks.cloud_id</code>.'] = 'Antallet af tilknyttede netværk. Links til <code>networks.cloud_id</code>.';

$GLOBALS["lang"]['The number of audited devices in this cloud. Links to <code>devices.cloud_id</code> and <code>devices.serial</code>.'] = 'Antallet af reviderede enheder i denne sky. Links til <code>devices.cloud_id</code> og <code>devices.serial</code>.';

$GLOBALS["lang"]['The number of critical severity vulnerabilities held by FirstWave (not in your database).'] = 'Antallet af kritiske sværhedssårbarheder hos FirstWave (ikke i din database).';

$GLOBALS["lang"]['The number of devices found by this discovery.'] = 'Antallet af enheder fundet ved denne opdagelse.';

$GLOBALS["lang"]['The number of devices in the associated group.'] = 'Antal enheder i den tilknyttede gruppe.';

$GLOBALS["lang"]['The number of devices in this cloud with a state of running. Links to <code>devices.cloud_id</code> and <code>devices.instance_state</code>.'] = 'Antallet af enheder i denne sky med en driftstilstand. Links til <code>devices.cloud_id</code> og <code>devices.instance_state</code>.';

$GLOBALS["lang"]['The number of devices in this cloud with a state of stopped. Links to <code>devices.cloud_id</code> and <code>devices.instance_state</code>.'] = 'Antallet af enheder i denne sky med en tilstand af stoppet. Links til <code>devices.cloud_id</code> og <code>devices.instance_state</code>.';

$GLOBALS["lang"]['The number of devices in this cloud. Links to <code>devices.cloud_id</code>.'] = 'Antallet af enheder i denne sky. Links til <code>devices.cloud_id</code>.';

$GLOBALS["lang"]['The number of devices this benchmark will be executed upon. Derived from <code>benchmarks.devices</code>.'] = 'Antallet af enheder, som dette benchmark vil blive udført på. Afledte <code>benchmarks.devices</code>.';

$GLOBALS["lang"]['The number of devices to limit this discovery to.'] = 'Antallet af enheder til at begrænse denne opdagelse til.';

$GLOBALS["lang"]['The number of high severity vulnerabilities held by FirstWave (not in your database).'] = 'Antallet af alvorlige sårbarheder hos FirstWave (ikke i din database).';

$GLOBALS["lang"]['The number of low severity vulnerabilities held by FirstWave (not in your database).'] = 'Antallet af svagheder med lav sværhedsgrad hos FirstWave (ikke i din database).';

$GLOBALS["lang"]['The number of medium severity vulnerabilities held by FirstWave (not in your database).'] = 'Antallet af mellemstore sværhedssårbarheder hos FirstWave (ikke i din database).';

$GLOBALS["lang"]['The number of purchased licenses.'] = 'Antal købte licenser.';

$GLOBALS["lang"]['The number of seconds to try and communicate with the target IP.'] = 'Antallet af sekunder til at prøve at kommunikere med målet IP.';

$GLOBALS["lang"]['The number of vulnerabilities without a severity held by FirstWave (not in your database).'] = 'Antallet af sårbarheder uden en sværhedsgrad holdt af FirstWave (ikke i din database).';

$GLOBALS["lang"]['The offset is the count of devices you wish to return data from.'] = 'Offset er antallet af enheder, du ønsker at returnere data fra.';

$GLOBALS["lang"]['The only required permission / policy name (in our testing) is'] = 'Den eneste krævede tilladelse / politik navn (i vores test) er';

$GLOBALS["lang"]['The optional secondary column. NOTE: When type = traffic, this represents the yellow query id.'] = 'Den valgfrie sekundære kolonne. BEMÆRK: Når type = trafik, repræsenterer dette den gule forespørgsel id.';

$GLOBALS["lang"]['The optional third column. NOTE: When type = traffic, this represents the green query id.'] = 'Den valgfrie tredje kolonne. BEMÆRK: Når type = trafik, dette repræsenterer den grønne forespørgsel id.';

$GLOBALS["lang"]['The order of information retrieval is snmp, ssh, wmi.'] = 'Den rækkefølge oplysninger hentning er snmp, ssh, wmi.';

$GLOBALS["lang"]['The orientation of this device.'] = 'Anordningens retning.';

$GLOBALS["lang"]['The password (if not using the user running the script).'] = 'Adgangskoden (hvis du ikke bruger brugeren som kører scriptet).';

$GLOBALS["lang"]['The password for the dn_account attribute.'] = 'Kodeordet for dn _ account attributten.';

$GLOBALS["lang"]['The password used to access the external system.'] = 'Adgangskoden der bruges til at få adgang til det eksterne system.';

$GLOBALS["lang"]['The path to the file or directory.'] = 'Stien til filen eller mappen.';

$GLOBALS["lang"]['The path to the file or directory. Directories should end with a trailing slash.'] = 'Stien til filen eller mappen. Mapper bør slutte med en efterbehandling skråstreg.';

$GLOBALS["lang"]['The physical depth (in CMs) of the rack.'] = 'Den fysiske dybde (i CMs) af rack.';

$GLOBALS["lang"]['The physical height (in CMs) of the rack.'] = 'Den fysiske højde (i CMs) af rack.';

$GLOBALS["lang"]['The physical weight (in KGs) of the rack at present.'] = 'Den fysiske vægt (i kg) af rack i øjeblikket.';

$GLOBALS["lang"]['The physical weight (in KGs) of the rack when empty.'] = 'Den fysiske vægt (i kg) af rack når tom.';

$GLOBALS["lang"]['The physical width (in CMs) of the rack.'] = 'Den fysiske bredde (i CMs) af rack.';

$GLOBALS["lang"]['The pod (if any) that this rack is part of.'] = 'Pod (hvis nogen), at denne rack er en del af.';

$GLOBALS["lang"]['The power circuit this rack attaches to.'] = 'Kraftkredsløbet, som den holder fast ved.';

$GLOBALS["lang"]['The primary database table upon which to base this widget.'] = 'Den primære databasetabel som denne kontrol skal baseres på.';

$GLOBALS["lang"]['The primary method for authorization (what a user can do) is now based on the users Roles. Roles are defined as admin, org_admin, reporter, and user by default. Each role has a set of permissions (Create, Read, Update, Delete) for each endpoint. Standard roles as shipped should cover 99.9 percent of use-cases. The ability to define additional roles and edit existing roles is enabled in Open-AudIT Enterprise.'] = 'Den primære metode til godkendelse (hvad en bruger kan gøre) er nu baseret på brugerne Roles. Roller defineres som admin, org _ admin, reporter og bruger som standard. Hver rolle har et sæt tilladelser (Opret, Læs, Opdatér, Slet) for hvert endpoint. Standardroller som sendt bør dække 99,9 procent af use-cases. Evnen til at definere yderligere roller og redigere eksisterende roller er aktiveret i Open- Audit Enterprise.';

$GLOBALS["lang"]['The process identifier of this queue item.'] = 'Proces- id for dette køeelement.';

$GLOBALS["lang"]['The process that was used last to retrieve details about the device'] = 'Processen der sidst blev brugt til at hente detaljer om enheden';

$GLOBALS["lang"]['The purpose of this licensing page is to list the products and licenses included in Firstwave Commercial products including products based upon open source works.Open-AudIT is licensed from Firstwave under AGPLv3 or later with Enterprise and Professional functionality licensed under commercial terms.Open-AudIT when downloaded from FirstWave may include the following libraries and projects, which are supplied unmodified and licensed as indicated:'] = 'Formålet med denne licens side er at liste de produkter og licenser, der indgår i Firstwave Kommercielle produkter, herunder produkter baseret på open source værker. Open- Audit er licenseret fra Firstwave under AGPLv3 eller senere med Enterprise og Professional funktionalitet licenseret på kommercielle vilkår. Open- Audit når du downloades fra FirstWave kan omfatte følgende biblioteker og projekter, som leveres umodificeret og licenseret som angivet:';

$GLOBALS["lang"]['The query that provides a list of devices for the integration. Links to <code>queries.id</code>.'] = 'Den forespørgsel, der giver en liste over enheder til integration. Links til <code>queries.id</code>.';

$GLOBALS["lang"]['The rack asset number.'] = 'Rack aktivnummeret.';

$GLOBALS["lang"]['The rack asset tag.'] = 'Rack-aktivet.';

$GLOBALS["lang"]['The rack bar code.'] = 'Rack-stregkoden.';

$GLOBALS["lang"]['The rack model.'] = 'Rack modellen.';

$GLOBALS["lang"]['The rack serial.'] = 'Raketserien.';

$GLOBALS["lang"]['The rack series.'] = 'Rack serien.';

$GLOBALS["lang"]['The rack this device is located in. Links to <code>racks.id</code>.'] = 'Den holder denne enhed er placeret i. Links til <code>racks.id</code>.';

$GLOBALS["lang"]['The recommended process of addressing and fixing identified security vulnerabilities. This typically involves applying patches, updates, or other measures to eliminate the risk posed by the vulnerabilities.'] = 'Den anbefalede proces til håndtering og fastsættelse af identificerede sikkerhedssårbarheder. Dette indebærer typisk anvendelse af patches, opdateringer eller andre foranstaltninger for at eliminere den risiko, som sårbarheder.';

$GLOBALS["lang"]['The regular domain notation of your directory. Eg - <code>open-audit.lan</code>.'] = 'Den almindelige domæne notation af din mappe. Eg - <code>open-audit.lan</code>.';

$GLOBALS["lang"]['The requested properties should be in a comma-separated list. Properties should be fully qualified - ie, system.hostname (not just hostname).'] = 'De ønskede egenskaber bør være i en kommaadskilt liste. Egenskaber skal være fuldt kvalificerede - dvs. system.hostname (ikke bare værtsnavn).';

$GLOBALS["lang"]['The result of the command.'] = 'Resultatet af kommandoen.';

$GLOBALS["lang"]['The room the rack is located in.'] = 'Rummet rack er placeret i.';

$GLOBALS["lang"]['The row the rack is located in.'] = 'Rækken rack er placeret i.';

$GLOBALS["lang"]['The search for group on the LDAP server failed. Check the LDAP server logs. Have you created these groups (for roles and orgs) on the LDAP server and assigned LDAP users to them?'] = 'Søgningen efter gruppe på LDAP- serveren mislykkedes. Tjek LDAP- serverens logfiler. Har du oprettet disse grupper (for roller og orger) på LDAP-serveren og tildelt LDAP-brugere til dem?';

$GLOBALS["lang"]['The secret key used in conjunction with your AWS EC2 API key.'] = 'Den hemmelige nøgle bruges i forbindelse med din AWS EC2 API nøgle.';

$GLOBALS["lang"]['The software end-of-life date.'] = 'Den software ende- of-life dato.';

$GLOBALS["lang"]['The software end-of-service-life date.'] = 'Den software ende- of-service-liv dato.';

$GLOBALS["lang"]['The specific database column from the specified database table.'] = 'Den specifikke databasekolonne fra den angivne databasetabel.';

$GLOBALS["lang"]['The specific database table.'] = 'Den specifikke database tabel.';

$GLOBALS["lang"]['The standard Nmap timing options. Previously set at T4 (aggressive).'] = 'Standard Nmap timing muligheder. Tidligere sat på T4 (aggressiv).';

$GLOBALS["lang"]['The standard Nmap timing options. We usually use -T4 (Aggressive) as this is recommended for a decent broadband or ethernet connection.'] = 'Standard Nmap timing muligheder. Vi bruger normalt -T4 (Aggressive) som dette anbefales for en anstændig bredbånd eller ethernet forbindelse.';

$GLOBALS["lang"]['The status of this integration'] = 'Status for denne integration';

$GLOBALS["lang"]['The status of this queued item.'] = 'Status for dette punkt i køen.';

$GLOBALS["lang"]['The steps below outline the process.'] = 'Nedenstående trin skitserer processen.';

$GLOBALS["lang"]['The target IP this log entry referers to (if any).'] = 'Målet IP denne log post refererer til (hvis nogen).';

$GLOBALS["lang"]['The target computer to audit. \".\" means localhost.'] = 'Målet computer til at revidere.\. "\" betyder localhost.';

$GLOBALS["lang"]['The template for the link to be generated per result line.'] = 'Skemaet for det link, der skal genereres pr. resultatlinje.';

$GLOBALS["lang"]['The text for the bottom of the chart in a line chart (only).'] = 'Teksten til bunden af diagrammet i et linjediagram (kun).';

$GLOBALS["lang"]['The text that is displayed.'] = 'Teksten der vises.';

$GLOBALS["lang"]['The timestamp after which, this task should run. For example, run a task after the 1st June 2017 at 10am, set it to <code>2017-06-01 09:59:00</code>. This value should be zero padded (ie, 09, not 9). This value defaults to <code>2000-01-01 00:00:00</code> which means by default, a scheduled task will run at next scheduled execution time.'] = 'Tidsstemplet hvorefter, denne opgave skal køre. For eksempel køre en opgave efter den 1. juni 2017 kl 10: 00, indstille det til <code>2017-06-01 09:59:00</code>. Denne værdi bør være nul polstret (dvs 09, ikke 9). Denne værdi standard til <code>2000-01-01 00:00:00</code> hvilket betyder som standard, en planlagt opgave vil køre på næste planlagte udførelse tid.';

$GLOBALS["lang"]['The top 10, 100 or 1000 (or none) TCP ports commonly in use according to Nmap.'] = 'De øverste 10, 100 eller 1000 (eller ingen) TCP-porte almindeligt i brug ifølge Nmap.';

$GLOBALS["lang"]['The top 10, 100 or 1000 (or none) UDP ports commonly in use according to Nmap.'] = 'De øverste 10, 100 eller 1000 (eller ingen) UDP-porte almindeligt i brug ifølge Nmap.';

$GLOBALS["lang"]['The total BTU output by this rack.'] = 'Den samlede BTU output af denne rack.';

$GLOBALS["lang"]['The type of device.'] = 'Typen af anordningen.';

$GLOBALS["lang"]['The type of organisation.'] = 'Organisationstype.';

$GLOBALS["lang"]['The type of rack (compute, power, network, etc).'] = 'Den type rack (beregne, strøm, netværk, osv.).';

$GLOBALS["lang"]['The type of task to run. One of: baseline, benchmark, cloud discovery, discovery, integration, report, query.'] = 'Den type opgave, der skal udføres. En af: baseline, benchmark, cloud opdagelse, opdagelse, integration, rapport, forespørgsel.';

$GLOBALS["lang"]['The type of the integration (usually named after the external system).'] = 'Den type integration (normalt opkaldt efter det eksterne system).';

$GLOBALS["lang"]['The unfiltered state means that a port is accessible, but Nmap is unable to determine whether it is open or closed. Only the ACK scan, which is used to map firewall rulesets, classifies ports into this state. Scanning unfiltered ports with other scan types such as Window scan, SYN scan, or FIN scan, may help resolve whether the port is open.'] = 'Den ufiltrerede tilstand betyder, at en port er tilgængelig, men Nmap er ikke i stand til at afgøre, om den er åben eller lukket. Kun ACK-scanningen, som bruges til at kortlægge firewall-regler, klassificerer porte i denne tilstand. Scanning ufiltrerede porte med andre scanningstyper såsom Vinduesscanning, SYN-scanning eller FIN-scanning, kan hjælpe med at løse, om porten er åben.';

$GLOBALS["lang"]['The unique identifier of this server.'] = 'Den entydige identifikator for denne server.';

$GLOBALS["lang"]['The user account this collector uses. Links to <code>users.id</code>.'] = 'Den brugerkonto denne samler bruger. Links til <code>users.id</code>.';

$GLOBALS["lang"]['The user in Active Directory / OpenLDAP must be a direct member of the required Open-AudIT groups for Roles and Orgs. A member of a group that is a member another group that is a member of the Open-AudIT group will not work.'] = 'Brugeren i Active Directory / OpenLDAP skal være direkte medlem af de krævede Open- AudiT grupper for Roles og Orgs. Et medlem af en gruppe, der er medlem af en anden gruppe, der er medlem af Open- Audit-gruppen, vil ikke arbejde.';

$GLOBALS["lang"]['The user is in LDAP and their credentials are valid, but is not in any of the Open-AudIT LDAP groups for Orgs.'] = 'Brugeren er i LDAP og deres legitimationsoplysninger er gyldige, men er ikke i nogen af Open- Audit LDAP grupper for Orgs.';

$GLOBALS["lang"]['The user is in LDAP and their credentials are valid, but is not in any of the Open-AudIT LDAP groups for Roles.'] = 'Brugeren er i LDAP og deres legitimationsoplysninger er gyldige, men er ikke i nogen af Open- Audit LDAP grupper for Roles.';

$GLOBALS["lang"]['The user is in LDAP and their credentials are valid, but is not in any of the required Open-AudIT LDAP groups.'] = 'Brugeren er i LDAP og deres legitimationsoplysninger er gyldige, men er ikke i nogen af de krævede Open- Audit LDAP grupper.';

$GLOBALS["lang"]['The user is in the LDAP group that matches this Org.'] = 'Brugeren er i LDAP gruppen, der matcher denne Org.';

$GLOBALS["lang"]['The user is in the LDAP group that matches this Role.'] = 'Brugeren er i LDAP gruppen, der matcher denne rolle.';

$GLOBALS["lang"]['The user is not in the LDAP group that matches this Org.'] = 'Brugeren er ikke i LDAP gruppen, der matcher denne Org.';

$GLOBALS["lang"]['The user is not in the LDAP group that matches this Role.'] = 'Brugeren er ikke i LDAP gruppen, der matcher denne rolle.';

$GLOBALS["lang"]['The user that was specified exists in LDAP, but Open-AudIT is not configured to consume the LDAP groups for roles and that user does not exist within Open-AudIT. Either select <i>Use LDAP for Roles</i> on the Open-AudIT LDAP Server screen or create this user within Open-AudIT and assign roles and orgs.'] = 'Den bruger, der blev angivet findes i LDAP, men Open- Audit er ikke konfigureret til at forbruge LDAP grupper for roller, og at brugeren ikke findes i Open- Audit. Vælg enten <i>Brug LDAP til ruller</i> om Open- Audit LDAP Server skærm eller oprette denne bruger i Open- Audit og tildele roller og kugler.';

$GLOBALS["lang"]['The username (if not using the user running the script).'] = 'Brugernavnet (hvis du ikke bruger den bruger der kører scriptet).';

$GLOBALS["lang"]['The username used to access the external system.'] = 'Brugernavnet bruges til at få adgang til det eksterne system.';

$GLOBALS["lang"]['The users details were not retrieved from LDAP. Check the LDAP server logs.'] = 'Brugernes oplysninger blev ikke hentet fra LDAP. Tjek LDAP- serverens logfiler.';

$GLOBALS["lang"]['The users details were retrieved from LDAP.'] = 'Brugernes oplysninger blev hentet fra LDAP.';

$GLOBALS["lang"]['The users email address.'] = 'Brugernes e-mailadresse.';

$GLOBALS["lang"]['The usual hours of operation at this site.'] = 'De sædvanlige driftstimer på dette sted.';

$GLOBALS["lang"]['The value assigned to the item.'] = 'Værdien af posten.';

$GLOBALS["lang"]['The value that is stored for this particular item.'] = 'Den værdi, der er gemt for denne vare.';

$GLOBALS["lang"]['The vendor name as per CPE entries.'] = 'Sælger navn som pr CPE indgange.';

$GLOBALS["lang"]['The vendor taken from the CPE.'] = 'Sælgeren er taget fra CPE.';

$GLOBALS["lang"]['The web directory on the host that Open-AudIT is installed (requires a trailing slash).'] = 'Webmappen på værten, at Open- Audit er installeret (kræver en efterfølgende skråstreg).';

$GLOBALS["lang"]['The widget at position '] = 'Kontrollen på position ';

$GLOBALS["lang"]['The width of this device.'] = 'Bredden af denne anordning.';

$GLOBALS["lang"]['Their OrgIDs and their descendants'] = 'Deres Orgids og deres efterkommere';

$GLOBALS["lang"]['Their OrgIDs only'] = 'Kun deres ordforråd';

$GLOBALS["lang"]['Their OrgIDs, ascendants and descendants'] = 'Deres Orgids, Ascendives og efterkommere';

$GLOBALS["lang"]['Then'] = 'Så';

$GLOBALS["lang"]['Then create a new Auth method in Open-AudIT by going to menu -> Admin -> Auth Methods -> Create Auth. Provide a name and set the <i>type</i> to Entra.'] = 'Derefter oprette en ny Auth metode i Open- Audit ved at gå til menu - > Admin - > Auth Metoder - > Opret Auth. Angiv et navn og sæt <i>type</i> til Entra.';

$GLOBALS["lang"]['Then you can use Open-AudIT (unsupported) to receive audit data directly from the clients. Discovery <strong>will fail</strong>, but if youre not using Discovery (the main feature Open-AudIT was designed around), you can still get device data. You would need to run the audit scripts directly on the clients using cron, or use the Windows Agent feature (Enterprise only).'] = 'Derefter kan du bruge Open- Audit (ikke understøttet) til at modtage revisionsdata direkte fra klienterne. Opdagelse <strong>vil mislykkes</strong>, men hvis du ikke bruger Discovery (hovedfunktionen Open- Audit blev designet rundt), kan du stadig få enhedsdata. Du vil skulle køre revision scripts direkte på klienterne ved hjælp af cron, eller bruge Windows Agent funktion (kun Enterprise).';

$GLOBALS["lang"]['There is a button to export to JSON. This will display only the device table of attributes. To export the device with all associated component tables, view the device details, then add'] = 'Der er en knap at eksportere til JSON. Dette vil kun vise enhedens tabel over attributter. For at eksportere enheden med alle tilhørende komponenttabeller, se enheden detaljer, og derefter tilføje';

$GLOBALS["lang"]['There is absolutely no need to manually edit each individual device.'] = 'Der er absolut ingen grund til manuelt at redigere hver enkelt enhed.';

$GLOBALS["lang"]['There is no need to do anything if you are running Open-AudIT on a Linux server.<br><br>Windows clients are just fine and require no special actions, however.... to enable this feature the audit script must be run locally on the target Windows system. It cannot be run remotely as we do with WMI calls when running the audit script on one Windows machine, while targeting a second Windows machine. To do this we need to copy the audit script to the target Windows machine and then run it. Unfortunately the service account that Apache runs under is the Local System account. This account has no access to remote (network based) resources. To work around this issue the service must be run under another account. It is easiest to just use the local Administrator account, but you can try any account you like as long as it has the required privileges. The Local System account has as much local access as the local Administrator account.'] = 'Der er ingen grund til at gøre noget, hvis du kører Open- Audit på en Linux-server.<br/><br/>Windows-klienter er helt fint og kræver ingen særlige handlinger, dog.... for at aktivere denne funktion audit script skal køres lokalt på målet Windows-system. Det kan ikke køres fjernfra, som vi gør med WMI-opkald, når du kører revision script på en Windows-maskine, mens rettet mod en anden Windows-maskine. For at gøre dette er vi nødt til at kopiere revision script til målet Windows maskine og derefter køre det. Desværre service konto, Apache kører under er Local System konto. Denne konto har ingen adgang til eksterne (netværksbaserede) ressourcer. For at løse dette problem skal tjenesten drives under en anden konto. Det er lettest at bruge den lokale administrator konto, men du kan prøve enhver konto, du ønsker, så længe den har de nødvendige privilegier. Den lokale systemkonto har lige så meget lokal adgang som den lokale administrator konto.';

$GLOBALS["lang"]['These are only examples. You may need to adjust these attributes to suit your particular LDAP.'] = 'Det er kun eksempler. Du kan være nødt til at justere disse attributter, der passer til din særlige LDAP.';

$GLOBALS["lang"]['These parameters enable you to audit only what is useful and relevant to you, saving processing time and allowing you to discover your network in an orderly manner.'] = 'Disse parametre giver dig mulighed for kun at revidere, hvad der er nyttigt og relevant for dig, hvilket sparer behandlingstid og giver dig mulighed for at opdage dit netværk på en velordnet måde.';

$GLOBALS["lang"]['Thing'] = 'Ting';

$GLOBALS["lang"]['Think of mail.domain1.com and mail.domain2.com - same hostname.'] = 'Tænk på mail.domain1.com og mail.domain2.com - samme værtsnavn.';

$GLOBALS["lang"]['Third'] = 'Tredje';

$GLOBALS["lang"]['This CVE will be retrieved and overwrite the existing CVE if it exists.'] = 'Denne CVE vil blive hentet og overskrive den eksisterende CVE, hvis den eksisterer.';

$GLOBALS["lang"]['This Org has no AD group specified. Check the roles details within Open-AudIT.'] = 'Denne Org har ingen AD gruppe angivet. Tjek rolledetaljerne i Open- Audit.';

$GLOBALS["lang"]['This Org has no AD group specified. Check the roles details within Open-AudIT. <span class=\"confluence-link\">Have you created these groups (for orgs) on the LDAP server and assigned LDAP users to them?'] = 'Denne Org har ingen AD gruppe angivet. Tjek rolledetaljerne i Open- Audit. <span class=\'\"confluence-link\"\'>Har du oprettet disse grupper (til orgs) på LDAP-serveren og tildelt LDAP-brugere til dem?</span>';

$GLOBALS["lang"]['This Role has no AD group specified. Check the roles details within Open-AudIT.'] = 'Denne rolle har ingen AD-gruppe angivet. Tjek rolledetaljerne i Open- Audit.';

$GLOBALS["lang"]['This attribute is stored as a JSON object. It is the list of all collections and contains the collection name along with <code>c</code>, <code>r</code>, <code>u</code> and,or <code>d</code> which represent create, read, update and delete. These are the actions a user can perform on items from that particular collection.'] = 'Denne attribut gemmes som et JSON objekt. Det er listen over alle samlinger og indeholder indsamling navn sammen med <code>c</code>, <code>r</code>, <code>u</code> og <code>d</code> som repræsenterer oprette, læse, opdatere og slette. Dette er de handlinger, en bruger kan udføre på elementer fra den pågældende samling.';

$GLOBALS["lang"]['This can be either a varchar (a text field), a list (a list of values that can be selected) or a date.'] = 'Dette kan være enten et varchar (et tekstfelt), en liste (en liste over værdier, der kan vælges) eller en dato.';

$GLOBALS["lang"]['This code relys on the great work done by the'] = 'Denne kode relaterer til det store arbejde, som';

$GLOBALS["lang"]['This collectors universally unique identifier.'] = 'Denne samlere universelt unikke identifikator.';

$GLOBALS["lang"]['This column is required by'] = 'Denne kolonne kræves af';

$GLOBALS["lang"]['This column is required by '] = 'Denne kolonne kræves af ';

$GLOBALS["lang"]['This description is auto-populated and should ideally be left as-is.'] = 'Denne beskrivelse er selvbefolket og bør helst efterlades som -is.';

$GLOBALS["lang"]['This endpoint enables you to add the connections that are part of your network infrastructure, it allows you to customize a variety of attributes, specify where this connection is located and the organization that it belongs.'] = 'Dette endpoint giver dig mulighed for at tilføje de forbindelser, der er en del af dit netværk infrastruktur, det giver dig mulighed for at tilpasse en række attributter, angive, hvor denne forbindelse er placeret, og den organisation, det tilhører.';

$GLOBALS["lang"]['This error indicates that SMB1 has been disabled or removed from the target machine. This is normal for modern version of Windows and you will only see this message when the SMB2 connection attempt has failed. If the SMB2 connection fails, we attempt SMB1 to enable discovery on old versions of Windows. If the target Windows machine <i>is</i> running an old version of Windows, it is likely your credentials have failed. In that case, see'] = 'Denne fejl indikerer, at SMB1 er blevet deaktiveret eller fjernet fra målmaskinen. Dette er normalt for moderne version af Windows, og du vil kun se denne meddelelse, når SMB2 forbindelse forsøg har fejlet. Hvis SMB2 forbindelsen mislykkes, vi forsøger SMB1 at aktivere opdagelse på gamle versioner af Windows. Hvis målet Windows maskine <i>er</i> kører en gammel version af Windows, er det sandsynligt, at dine legitimationsoplysninger er mislykkedes. I så fald';

$GLOBALS["lang"]['This error indicates that not enough virtual memory or paging file quota is available to complete the specified operation. You should try again later.'] = 'Denne fejl viser, at ikke nok virtuelle hukommelse eller personsøgning fil kvote er tilgængelig til at fuldføre den angivne operation. Prøv igen senere.';

$GLOBALS["lang"]['This error indicates the credentials used either are incorrect, do not exist or do not have sufficient privileges to log on remotely to the target Windows machine. You should verify the credentials and check the below.'] = 'Denne fejl angiver de legitimationsoplysninger, der anvendes enten er forkerte, ikke eksisterer eller ikke har tilstrækkelige privilegier til at logge på fjernadgang til målet Windows maskine. Du bør kontrollere legitimationerne og kontrollere nedenstående.';

$GLOBALS["lang"]['This example creates a list of all Modules marked as'] = 'Dette eksempel skaber en liste over alle moduler markeret som';

$GLOBALS["lang"]['This example creates a list of devices and the open Ports, Protocols, and Programs found by the NMAP scan.'] = 'Dette eksempel skaber en liste over enheder og de åbne porte, protokoller og programmer fundet af NMAP scanningen.';

$GLOBALS["lang"]['This example creates a list of devices where the Function or Description fields are blank OR the Purchase Date is the default.'] = 'Dette eksempel skaber en liste over enheder, hvor funktionen eller beskrivelsesfelterne er tomme ELLER købsdatoen er standard.';

$GLOBALS["lang"]['This example query retrieves a list of devices OVER 3 years old. The query uses today'] = 'Dette eksempel forespørgsel henter en liste over enheder OVER 3 år gammel. Forespørgslen bruger i dag';

$GLOBALS["lang"]['This example uses'] = 'Dette eksempel bruger';

$GLOBALS["lang"]['This feature requires a Professional or an Enterprise license.'] = 'Denne funktion kræver en Professional eller en Enterprise licens.';

$GLOBALS["lang"]['This feature, because it has the ability to affect target devices more than usual must be manually enabled. To enable this feature, change the configuration item feature_executables to <i>yes</i>.'] = 'Denne funktion, fordi det har evnen til at påvirke målenheder mere end normalt skal være manuelt aktiveret. For at aktivere denne funktion, ændre konfigurationselementet _ executables til <i>ja</i>.';

$GLOBALS["lang"]['This file tells Linux to poll the application to determine if there are any scheduled tasks that should be run.'] = 'Denne fil fortæller Linux at polle programmet for at afgøre, om der er nogen planlagte opgaver, der skal køres.';

$GLOBALS["lang"]['This form provides a simple way to get started discovering the devices on your network. For more (much more) detailed options, you can individually create'] = 'Denne formular giver en enkel måde at komme i gang med at opdage enheder på dit netværk. For flere (meget mere) detaljerede muligheder, kan du individuelt oprette';

$GLOBALS["lang"]['This is also the way that PAExec works.'] = 'Sådan fungerer PAExec også.';

$GLOBALS["lang"]['This is an optional configuration option, enabled by setting discovery_use_org_id_match in the global configuration.'] = 'Dette er en valgfri indstillingsmulighed, aktiveret ved at indstille scovery _ use _ org _ id _ match i den globale konfiguration.';

$GLOBALS["lang"]['This is generally the primary column, unless otherwise configured. NOTE: When type = traffic, this represents the secondary text.'] = 'Dette er generelt den primære kolonne, medmindre andet er indstillet. BEMÆRK: Når type = trafik, repræsenterer dette den sekundære tekst.';

$GLOBALS["lang"]['This is likely due to MySQL time being off. MySQL typically uses the host devices time. You can check this by'] = 'Dette skyldes sandsynligvis, at MySQL tiden er slukket. MySQL bruger typisk værtsenhedernes tid. Du kan tjekke dette ved';

$GLOBALS["lang"]['This is settable by users and so even though it should be globally unique, there is certainly no guarantee of this.'] = 'Dette er muligt af brugerne, og selv om det bør være globalt unikt, er der bestemt ingen garanti for dette.';

$GLOBALS["lang"]['This is the directory where we store any attachments to devices.'] = 'Dette er mappen hvor vi gemmer eventuelle vedhæftede filer til enheder.';

$GLOBALS["lang"]['This is to be used as the first point of call when troubleshooting Open-AudIT issues. You can click the Export button on the top right to retrieve this as a JSON file (to be added to the support ticket / email.'] = 'Dette skal bruges som det første opkaldspunkt, når problemer med fejlfinding af Open- Audit spørgsmål. Du kan klikke på Eksportér knappen øverst til højre for at hente dette som en JSON fil (skal tilføjes til supportbilletten / e-mail.';

$GLOBALS["lang"]['This issue is under investigation.'] = 'Dette spørgsmål er under undersøgelse.';

$GLOBALS["lang"]['This item must match the value of the attribute selected or contains the ID of the query to be used.'] = 'Dette punkt skal matche værdien af den valgte attribut eller indeholder ID for den forespørgsel, der skal bruges.';

$GLOBALS["lang"]['This item must match the value of the attribute selected.'] = 'Dette punkt skal matche værdien af den valgte attribut.';

$GLOBALS["lang"]['This license expires on'] = 'Denne licens udløber den';

$GLOBALS["lang"]['This security permission can be modified using the Component Services administrative tool.'] = 'Denne sikkerhedstilladelse kan ændres ved hjælp af Component Services administrative værktøj.';

$GLOBALS["lang"]['This should be commented out after troubleshooting as debug mode will generate a lot of logs on the disk for no benefit.'] = 'Dette bør kommenteres efter fejlfinding som debug tilstand vil generere en masse logs på disken for ingen fordel.';

$GLOBALS["lang"]['This should be globally unique, but I have seen instances where it is not.'] = 'Dette bør være globalt unikt, men jeg har set tilfælde, hvor det ikke er.';

$GLOBALS["lang"]['This should be set to either 1 or the height of the rack.'] = 'Dette bør indstilles til enten 1 eller højden af rack.';

$GLOBALS["lang"]['This should be the fully qualified field name in the database. Currently columns from the system, fields and credentials tables are supported. EG: system.nmis_role.'] = 'Dette bør være det fuldt kvalificerede feltnavn i databasen. I øjeblikket er kolonner fra systemet, felter og legitimationstabeller understøttet. EG: system.nmis _ role.';

$GLOBALS["lang"]['This state is used when Nmap is unable to determine whether a port is closed or filtered. It is only used for the IP ID idle scan.'] = 'Denne tilstand anvendes, når Nmap ikke kan afgøre, om en port er lukket eller filtreret. Det bruges kun til IP-ID tomgangsscanning.';

$GLOBALS["lang"]['This will auto-populate.'] = 'Dette vil selvbefolke.';

$GLOBALS["lang"]['This will considerably slow the discovery scan.'] = 'Dette vil forsinke scanningen.';

$GLOBALS["lang"]['This will delete the current rows in the'] = 'Dette vil slette de nuværende rækker i';

$GLOBALS["lang"]['This will permanently DELETE this license.'] = 'Dette vil permanent DELETE denne licens.';

$GLOBALS["lang"]['This will show you the Bulk Edit form. Any attributes you set on this form will be applied to all selected devices. You can set multiple attributes at once.'] = 'Dette vil vise dig Bulk Rediger formular. Alle attributter du sætter på denne formular vil blive anvendt på alle markerede enheder. Du kan indstille flere attributter på én gang.';

$GLOBALS["lang"]['Thursday'] = 'Torsdag';

$GLOBALS["lang"]['time_caption'] = 'Tidstekst';

$GLOBALS["lang"]['Time Caption'] = 'Tidstekst';

$GLOBALS["lang"]['time_daylight'] = 'Dagslys';

$GLOBALS["lang"]['Time Daylight'] = 'Dagslys';

$GLOBALS["lang"]['Time to Execute'] = 'Tid til at udføre';

$GLOBALS["lang"]['timeout'] = 'Tidsudløb';

$GLOBALS["lang"]['Timeout'] = 'Tidsudløb';

$GLOBALS["lang"]['Timeout Per Target (Seconds)'] = 'Tidsudløb pr. mål (sekunder)';

$GLOBALS["lang"]['Timeout per Target. Wait for X seconds for a target response.'] = 'Timeout per mål. Vent på X sekunder til målet.';

$GLOBALS["lang"]['Timesatamp'] = 'Timesatamp';

$GLOBALS["lang"]['Timestamp'] = 'Tidsstempel';

$GLOBALS["lang"]['timing'] = 'Timing';

$GLOBALS["lang"]['Timing'] = 'Timing';

$GLOBALS["lang"]['Timor-Leste'] = 'Timor- Leste';

$GLOBALS["lang"]['Title'] = 'Titel';

$GLOBALS["lang"]['To a new file named .env (in the same directory). Now edit that new file and uncomment (remove the #) the line below (line 17)'] = 'Til en ny fil ved navn .env (i samme mappe). Nu redigere den nye fil og afkommentere (fjerne #) linjen nedenfor (linje 17)';

$GLOBALS["lang"]['To actually execute the query, append a /execute, thus /open-audit/index.php/queries/{$id}/execute.'] = 'For faktisk at udføre forespørgslen, tilføje en / køre, således / open- audit / index.php / queries / {$id} / køre.';

$GLOBALS["lang"]['To audit a machine, you must have credentials and administrator level access.'] = 'For at revidere en maskine, skal du have legitimation og administrator niveau adgang.';

$GLOBALS["lang"]['To audit a remote machine on an Active Directory domain, your supplied user (or if none provided, the user running the script) must be a member of the target machines Administrators group (or subgroup).'] = 'For at revidere en fjernmaskine på et Active Directory domæne, skal din medfølgende bruger (eller hvis ingen angivet, brugeren kører scriptet) være medlem af målmaskinernes Administratorer gruppe (eller undergruppe).';

$GLOBALS["lang"]['To audit a remote machine that is not in a domain, you must use the Administrator account (not <i>an</i> admin account, <i>the</i> Administrator account) on the target PC. #1 and #2'] = 'For at revidere en ekstern maskine, der ikke er i et domæne, skal du bruge Administrator konto (ikke <i>a</i> admin-konto <i>i</i> Administrator konto) på målet PC. # 1 og # 2';

$GLOBALS["lang"]['To audit localhost, any supplied credentials are disregarded and the connection is made using the details of the user running the script.'] = 'For at revidere localhost ses der bort fra eventuelle fremsendte legitimationsoplysninger, og forbindelsen foretages ved hjælp af oplysningerne fra den bruger, der kører scriptet.';

$GLOBALS["lang"]['To compare software we check the name and version. Because version numbers are not all standardised in format, when we receive an audit result we create a new attribute called software_padded which we store in the database along with the rest of the software details for each package. For this reason, baselines using software policies will not work when run against a device that has not been audited by 1.10 (at least). Software policies can test against the version being <i>equal to</i>, <i>greater than</i> or <i>equal to or greater than</i>.'] = 'For at sammenligne software, tjekker vi navn og version. Fordi versionsnumre ikke alle er standardiseret i format, når vi modtager et revisionsresultat, vi oprette en ny attribut kaldet software _ pold, som vi gemmer i databasen sammen med resten af softwaren detaljer for hver pakke. Derfor vil basislinjer, der anvender softwarepolitikker, ikke fungere, når de køres mod en enhed, der ikke er blevet revideret af 1.10 (i det mindste). Softwarepolitikker kan teste mod versionen er <i>lig med</i>, <i>større end</i> eller <i>lig med eller større end</i>.';

$GLOBALS["lang"]['To create a new entry click the Create button in the upper right hand corner.'] = 'For at oprette en ny indgang, klik på Opret knappen i øverste højre hjørne.';

$GLOBALS["lang"]['To create a resource, you should POST the required data.'] = 'For at oprette en ressource, bør du POST de nødvendige data.';

$GLOBALS["lang"]['To enable a remote machine (Vista or above) to be audited that is not on a domain, by an account in the Administrators group, other than the actual Administrator account see the below section on UAC.'] = 'For at gøre det muligt at revidere en fjernmaskine (Vista eller derover), som ikke er på et domæne, af en anden konto i Administrationsgruppen end den faktiske Administrator konto, se nedenstående afsnit om UAC.';

$GLOBALS["lang"]['To enable this, create a new Auth item by going to menu -> Admin -> Auth -> Create Auth Method.'] = 'For at aktivere dette, skal du oprette en ny Auth element ved at gå til menu - > Admin - > Auth - > Opret Auth metode.';

$GLOBALS["lang"]['To execute the Windows powershell script, open a command prompt as Administrator and use the following command'] = 'For at udføre Windows powershell script, skal du åbne en kommandoprompt som Administrator og bruge følgende kommando';

$GLOBALS["lang"]['To execute the audit script, open a terminal and use the following command'] = 'For at udføre revisionsscriptet, skal du åbne en terminal og bruge følgende kommando';

$GLOBALS["lang"]['To filter by a property value, use the property name. Operators that should precede the value are'] = 'For at filtrere med en egenskabsværdi, skal du bruge egenskabsnavnet. Operatører, der bør gå forud for værdien er';

$GLOBALS["lang"]['To install Nmap on Windows, visit the Nmap page at'] = 'For at installere Nmap på Windows, besøge Nmap side på';

$GLOBALS["lang"]['To make the change, just follow the steps below.'] = 'For at foretage ændringen, bare følg trinene nedenfor.';

$GLOBALS["lang"]['To retrieve the Tenant ID. Open the Azure portal click on Azure Active Directory, Properties and the Tenant ID is displayed as your Directory ID - do not blame me for the name mismatch, that is how Microsoft roll.'] = 'For at hente Tenant ID. Åbn Azure portal klik på Azure Active Directory, Egenskaber og Tenant ID vises som din Directory ID - ikke bebrejde mig for navnet mismatch, det er, hvordan Microsoft roll.';

$GLOBALS["lang"]['To retrieve your key, log in to the AWS Console and select your username, then My Security Credentials.'] = 'For at hente din nøgle, logge ind på AWS Konsole og vælge dit brugernavn, derefter Min Sikkerhed Valgs.';

$GLOBALS["lang"]['To return a specific component item.'] = 'For at returnere en bestemt komponent.';

$GLOBALS["lang"]['To return all items for a compnent type for a specific device.'] = 'For at returnere alle elementer til en kompaktype for en bestemt enhed.';

$GLOBALS["lang"]['To return all items for a component type. If you wanted all software you would use'] = 'For at returnere alle elementer for en komponenttype. Hvis du ønskede al software, du ville bruge';

$GLOBALS["lang"]['To reverse sort, insert a minus, thus'] = 'For at vende sortere, indsætte et minus, således';

$GLOBALS["lang"]['To run the test script on the target Windows PC'] = 'For at køre testscript på målet Windows PC';

$GLOBALS["lang"]['To select devices to be integrated, we use nmis_manage = y, but you might like (for example) type = router. You can also use a Group or Query if you prefer something more complex.'] = 'For at vælge enheder, der skal integreres, bruger vi nmis _ managing = y, men du kan lide (for eksempel) type = router. Du kan også bruge en gruppe eller forespørgsel, hvis du foretrækker noget mere komplekst.';

$GLOBALS["lang"]['To sort by a database column, use'] = 'Hvis du vil sortere efter en databasekolonne, skal du bruge';

$GLOBALS["lang"]['To use this Enterprise feature, you first need to create your user in Open-AudIT as per usual. Assigning a password is not necessary. You do have to assign Roles and Orgs. The username in Open-AudIT should match the Entra <i>preferred username</i> attribute. There is no need for a Full Name or Email - these will be populated from Entra. If you do not know your users <i>preferred username</i>, fear not. You can create the new Auth Method in Open-AudIT and the Enterprise Application in Entra and when a user attempts to sign-on to Open-AudIT without a pre-existing user, check the logs and you will see their <i>preferred username</i> logged for your convienence.'] = 'For at bruge denne Enterprise-funktion, skal du først oprette din bruger i Open- Audit som normalt. Tildeling af en adgangskode er ikke nødvendig. Du skal tildele Roles og Orgs. Brugernavnet i Open- Audit skal matche Entra <i>foretrukne brugernavn</i> attribut. Der er ingen grund til et Full Name eller e-mail - disse vil blive befolket fra Entra. Hvis du ikke kender dine brugere <i>foretrukne brugernavn</i>, frygt ikke. Du kan oprette den nye Auth metode i Open- Audit og Enterprise Application i Entra, og når en bruger forsøger at signere-on til Open- Audit uden en allerede eksisterende bruger, kontrollere logfiler, og du vil se deres <i>foretrukne brugernavn</i> logget på din konvience.';

$GLOBALS["lang"]['To use this Enterprise feature, you first need to create your user in Open-AudIT as per usual. Assigning a password is not necessary. You do have to assign Roles and Orgs. The username in Open-AudIT should match the OKTA <i>name</i> attribute. There is no need for a Full Name or Email - these will be populated from OKTA. If you do not know your users <i>name<i>, fear not. You can create the new Auth Menthod in Open-AudIT and the Application in OKTA and when a user attempts to sign-on to Open-AudIT without a pre-existing user, check the logs and you will see their <i>name<i> logged for your convienence.<br></p><p>Then create a new Auth method in Open-AudIT by going to menu -> Admin -> Auth Methods -> Create Auth. Provide a name and set the <i>type</i> to Okta.'] = 'For at bruge denne Enterprise-funktion, skal du først oprette din bruger i Open- Audit som normalt. Tildeling af en adgangskode er ikke nødvendig. Du skal tildele Roles og Orgs. Brugernavnet i Open- Audit skal matche OKTA <i>navn</i> attribut. Der er ingen grund til et Full Name eller e-mail - disse vil blive befolket fra OKTA. Hvis du ikke kender dine brugere <i>navn<i>, frygt ikke. Du kan oprette den nye Auth Menthod i Open- Audit og programmet i OKTA, og når en bruger forsøger at signere-on til Open- Audit uden en allerede eksisterende bruger, kontrollere logfiler, og du vil se deres <i>navn<i> logget på din konvience.<br/><p>Derefter oprette en ny Auth metode i Open- Audit ved at gå til menu - > Admin - > Auth Metoder - > Opret Auth. Angiv et navn og sæt <i>type</i> Til Otta.</p></i></i></i></i>';

$GLOBALS["lang"]['To use this feature you must enable the configuration items match_mac (for AWS) and match_hostname (for Azure). This will be done automatically the first time a cloud discovery is executed. For more on Open-AudITs matching rules see HERE: Matching Devices'] = 'For at bruge denne funktion skal du aktivere konfigurationselementerne match _ mac (for AWS) og match _ hostname (for Azure). Dette vil blive gjort automatisk første gang en cloud opdagelse udføres. For mere om Open- Audits matching regler se HER: Matchende enheder';

$GLOBALS["lang"]['To view the details of a query, the standard URL structure of /open-audit/index.php/queries/{$id} should be used.'] = 'For at se detaljerne i en forespørgsel, standard URL struktur / open- audit / index. php / queries / {$id} bør anvendes.';

$GLOBALS["lang"]['Togo'] = 'Togo';

$GLOBALS["lang"]['Tokelau'] = 'TokelauCity in Italy';

$GLOBALS["lang"]['Tonga'] = 'Tonga';

$GLOBALS["lang"]['toolbar_style'] = 'Værktøjslinjestil';

$GLOBALS["lang"]['Toolbar Style'] = 'Værktøjslinjestil';

$GLOBALS["lang"]['Top Nmap TCP Ports'] = 'Top Nmap TCP Ports';

$GLOBALS["lang"]['Top Nmap TCP Ports. The top 10, 100, 1000 ports to scan as per Nmaps &quot;top ports&quot; options.'] = 'Top Nmap TCP Ports. De øverste 10, 100, 1000 porte til at scanne som pr Nmaps "top porte" muligheder.';

$GLOBALS["lang"]['Top Nmap UDP Ports'] = 'Top Nmap UDP Ports';

$GLOBALS["lang"]['Top Nmap UDP Ports. The top 10, 100, 1000 ports to scan as per Nmaps &quot;top ports&quot; options.'] = 'Top Nmap UDP Ports. De øverste 10, 100, 1000 porte til at scanne som pr Nmaps "top porte" muligheder.';

$GLOBALS["lang"]['Traditional Chinese'] = 'Traditionel kinesisk';

$GLOBALS["lang"]['Traffic Light'] = 'Trafiklys';

$GLOBALS["lang"]['Trinidad and Tobago'] = 'Trinidad og Tobago';

$GLOBALS["lang"]['Troubleshooting'] = 'Fejlfinding';

$GLOBALS["lang"]['Troubleshooting LDAP Logins'] = 'Fejlfinding af LDAP- loginer';

$GLOBALS["lang"]['Try Open-AudIT Enterprise, on us without a time limit. All the features of Enterprise. Limited to 20 devices.'] = 'Prøv Open- Audit Enterprise, på os uden tidsbegrænsning. Alle træk ved Enterprise. Begrænset til 20 enheder.';

$GLOBALS["lang"]['Try all the latest features with a FREE 100 device license of Open-AudIT Enterprise. Please read the '] = 'Prøv alle de nyeste funktioner med en GRATIS 100 enhed licens af Open- Audit Enterprise. Læs venligst ';

$GLOBALS["lang"]['Try logging in using an LDAP user. We are assuming this will fail (otherwise, why are you still reading this?). Next, comment out the line from ther file above.'] = 'Prøv at logge ind med en LDAP- bruger. Vi antager, at dette vil mislykkes (ellers, hvorfor læser du stadig dette?). Næste, kommentere den linje fra ther fil ovenfor.';

$GLOBALS["lang"]['Tuesday'] = 'Tirsdag';

$GLOBALS["lang"]['Tunisia'] = 'Tunesien';

$GLOBALS["lang"]['Turkey'] = 'Tyrkiet';

$GLOBALS["lang"]['Turkish'] = 'Tyrkisk';

$GLOBALS["lang"]['Turkmenistan'] = 'Turkmenistan';

$GLOBALS["lang"]['Turks and Caicos Islands'] = 'Turks- og Caicosøerne';

$GLOBALS["lang"]['Tuvalu'] = 'Tuvalu';

$GLOBALS["lang"]['tx_bitrate'] = 'Tx Bitrate';

$GLOBALS["lang"]['Tx Bitrate'] = 'Tx Bitrate';

$GLOBALS["lang"]['tx_freq'] = 'Tx Freq';

$GLOBALS["lang"]['Tx Freq'] = 'Tx Freq';

$GLOBALS["lang"]['tx_level'] = 'Tx niveau';

$GLOBALS["lang"]['Tx Level'] = 'Tx niveau';

$GLOBALS["lang"]['tx_power'] = 'Tx-effekt';

$GLOBALS["lang"]['Tx Power'] = 'Tx-effekt';

$GLOBALS["lang"]['tx_profile'] = 'Tx- profil';

$GLOBALS["lang"]['Tx Profile'] = 'Tx- profil';

$GLOBALS["lang"]['type'] = 'Type';

$GLOBALS["lang"]['Type'] = 'Type';

$GLOBALS["lang"]['Type: This can be either a varchar (a text field) or a List (a list of values that can be selected).'] = 'Type: Dette kan enten være et varchar (et tekstfelt) eller en liste (en liste over værdier der kan vælges).';

$GLOBALS["lang"]['Types of Networks'] = 'Netværkstyper';

$GLOBALS["lang"]['URL'] = 'URL';

$GLOBALS["lang"]['uuid'] = 'UUID';

$GLOBALS["lang"]['UUID'] = 'UUID';

$GLOBALS["lang"]['udp_ports'] = 'Udp Ports';

$GLOBALS["lang"]['Udp Ports'] = 'Udp Ports';

$GLOBALS["lang"]['Uganda'] = 'Uganda';

$GLOBALS["lang"]['Ukraine'] = 'Ukraine';

$GLOBALS["lang"]['Ukrainian'] = 'Ukrainsk';

$GLOBALS["lang"]['Undergo Stage 1 audit (documentation review)'] = 'Undergofase 1-revision (dokumentation)';

$GLOBALS["lang"]['Undergo Stage 2 audit (implementation review)'] = 'Undergofase 2-revision (gennemgang af gennemførelsen)';

$GLOBALS["lang"]['Undergoing Analysis'] = 'Undergående analyse';

$GLOBALS["lang"]['Unfiltered'] = 'Ufiltrerede';

$GLOBALS["lang"]['uninstall'] = 'Fjern';

$GLOBALS["lang"]['Uninstall'] = 'Fjern';

$GLOBALS["lang"]['Uninstall the Agent'] = 'Fjern agenten';

$GLOBALS["lang"]['United Arab Emirates'] = 'De Forenede Arabiske Emirater';

$GLOBALS["lang"]['United Kingdom'] = 'Det Forenede Kongerige';

$GLOBALS["lang"]['United States Minor Outlying Islands'] = 'USA \'s mindre perifere øer';

$GLOBALS["lang"]['United States Virgin Islands'] = 'De Forenede Staters Jomfruøer';

$GLOBALS["lang"]['United States of America'] = 'USA';

$GLOBALS["lang"]['Unknown'] = 'Ukendt';

$GLOBALS["lang"]['unlock_pin'] = 'Lås Pin op';

$GLOBALS["lang"]['Unlock Pin'] = 'Lås Pin op';

$GLOBALS["lang"]['Unscheduled'] = 'Uskemalagt';

$GLOBALS["lang"]['Unused as at 5.2.0.'] = 'Ubrugt pr. 5.2.0.';

$GLOBALS["lang"]['Unused.'] = 'Ubrugt.';

$GLOBALS["lang"]['Update'] = 'Opdatering';

$GLOBALS["lang"]['update_external_count'] = 'Opdatér ekstern tælling';

$GLOBALS["lang"]['Update External Count'] = 'Opdatér ekstern tælling';

$GLOBALS["lang"]['update_external_from_internal'] = 'Opdatér ekstern fra intern';

$GLOBALS["lang"]['Update External From Internal'] = 'Opdatér ekstern fra intern';

$GLOBALS["lang"]['update_internal_count'] = 'Opdatér intern tælling';

$GLOBALS["lang"]['Update Internal Count'] = 'Opdatér intern tælling';

$GLOBALS["lang"]['update_internal_from_external'] = 'Opdatér intern fra ekstern';

$GLOBALS["lang"]['Update Internal From External'] = 'Opdatér intern fra ekstern';

$GLOBALS["lang"]['Update NMIS Devices from Open-AudIT'] = 'Opdatér NMIS enheder fra Open- Audit';

$GLOBALS["lang"]['Update Open-AudIT Devices from '] = 'Opdatér Open- Audit Enheder fra ';

$GLOBALS["lang"]['Update Open-AudIT Devices from NMIS'] = 'Opdatér Open- Audit Enheder fra NMIS';

$GLOBALS["lang"]['Update Vulnerabilities'] = 'Opdatér sårbarheder';

$GLOBALS["lang"]['Update an attribute of a {collection} entry.'] = 'Opdatér en attribut til en {collection} indgang.';

$GLOBALS["lang"]['Update attributes'] = 'Opdatér attributter';

$GLOBALS["lang"]['Updated each time discovery has been executed with IPs detected to be responding.'] = 'Opdateret hver gang opdagelsen er blevet udført med IP \'er opdaget at svare.';

$GLOBALS["lang"]['Updated each time discovery has been executed with IPs that have been scanned by Nmap.'] = 'Opdateret hver gang opdagelse er blevet udført med IP \'er, der er blevet scannet af Nmap.';

$GLOBALS["lang"]['Updated each time discovery has been executed with devices we were able to audit.'] = 'Opdateret hver gang opdagelsen er blevet udført med enheder, vi var i stand til at revidere.';

$GLOBALS["lang"]['Updated each time discovery has been executed with devices we were able to query.'] = 'Opdateret hver gang opdagelse er blevet udført med enheder, vi var i stand til at spørge.';

$GLOBALS["lang"]['Updated each time discovery has been executed.'] = 'Opdateret hver gang opdagelsen er blevet udført.';

$GLOBALS["lang"]['Updated each time the discovery has been executed.'] = 'Opdateret hver gang opdagelsen er udført.';

$GLOBALS["lang"]['Updated each time the discovery has completed execution.'] = 'Opdateret hver gang opdagelsen er afsluttet.';

$GLOBALS["lang"]['Updating'] = 'Opdatering';

$GLOBALS["lang"]['Upgrade'] = 'Opgradering';

$GLOBALS["lang"]['Upload an audit result file'] = 'Upload en revisionsresultatfil';

$GLOBALS["lang"]['Upper Case'] = 'Øvre kasse';

$GLOBALS["lang"]['uptime'] = 'Optid';

$GLOBALS["lang"]['Uptime'] = 'Optid';

$GLOBALS["lang"]['Urdu'] = 'Urdu';

$GLOBALS["lang"]['url'] = 'Url';

$GLOBALS["lang"]['Url'] = 'Url';

$GLOBALS["lang"]['Uruguay, Eastern Republic of'] = 'Uruguay, Den Østlige Republik';

$GLOBALS["lang"]['usb'] = 'Usb';

$GLOBALS["lang"]['Usb'] = 'Usb';

$GLOBALS["lang"]['use'] = 'Anvendelse';

$GLOBALS["lang"]['Use'] = 'Anvendelse';

$GLOBALS["lang"]['use_authentication'] = 'Brug autentificering';

$GLOBALS["lang"]['Use Authentication'] = 'Brug autentificering';

$GLOBALS["lang"]['use_authorisation'] = 'Anvendelse';

$GLOBALS["lang"]['Use Authorisation'] = 'Anvendelse';

$GLOBALS["lang"]['Use Proxy'] = 'Brug Proxy';

$GLOBALS["lang"]['Use SNMP'] = 'Brug SNMP';

$GLOBALS["lang"]['Use SSH'] = 'Brug SSH';

$GLOBALS["lang"]['Use Secure (LDAPS)'] = 'Brug sikker (LDAPS)';

$GLOBALS["lang"]['Use Service Version Detection'] = 'Detektering af brugsservice-version';

$GLOBALS["lang"]['Use Service Version Detection. When a detected port is detected as open, if set to <i>y</i>, Nmap will query the target device in an attempt to determine the version of the service running on this port.<br>This can be useful when identifying unclassified devices. This was not previously used.'] = 'Brug Service Version Detection. Når en detekteret port detekteres som åben, hvis sat til <i>y</i>, Nmap vil spørge målet enhed i et forsøg på at bestemme den version af tjenesten, der kører på denne port.<br/>Dette kan være nyttigt ved identifikation af uklassificerede anordninger. Dette blev ikke tidligere anvendt.';

$GLOBALS["lang"]['Use WMI'] = 'Brug WMI';

$GLOBALS["lang"]['Use a <i>Sign-in method</i> of OIDC - OpenID Connect and an <i>Application Type</i> of Web Application. Click <i>Next</i>.'] = 'Brug en <i>Signal- in metode</i> OIDC - OpenID Connect og en <i>Ansøgningstype</i> af webprogram. Klik <i>Næste</i>.';

$GLOBALS["lang"]['Use for Authentication'] = 'Brug til autentificering';

$GLOBALS["lang"]['Use for Roles'] = 'Anvendelse til ruller';

$GLOBALS["lang"]['Use the standard install options when displayed and click the <i>I Agree</i>, <i>Next</i> and <i>Install</i> buttons to install Nmap.'] = 'Brug standard installere muligheder, når de vises, og klik på <i>Jeg er enig</i>, <i>Næste</i> og <i>Installér</i> knapper til at installere Nmap.';

$GLOBALS["lang"]['used'] = 'Brugt';

$GLOBALS["lang"]['Used'] = 'Brugt';

$GLOBALS["lang"]['used_count'] = 'Brugt antal';

$GLOBALS["lang"]['Used Count'] = 'Brugt antal';

$GLOBALS["lang"]['Used by OpenLDAP only.'] = 'Anvendes kun af OpenLDAP.';

$GLOBALS["lang"]['Used internally when discovering a single device.'] = 'Bruges internt, når man opdager en enkelt enhed.';

$GLOBALS["lang"]['Used internally when discovering a single device. Links to <code>devices.id</code>.'] = 'Bruges internt, når man opdager en enkelt enhed. Links til <code>devices.id</code>.';

$GLOBALS["lang"]['Used when LDAP servers have been configured to populate a users details - this includes the Orgs to which they have access. If a user is in this LDAP group, they are assigned this org.'] = 'Bruges, når LDAP servere er konfigureret til at befolke en bruger detaljer - dette omfatter de Orgs, som de har adgang til. Hvis en bruger er i denne LDAP- gruppe, tildeles de denne org.';

$GLOBALS["lang"]['Used when LDAP servers have been configured to populate a users details - this includes the Roles which they are assigned. If a user is in this LDAP group, they are assigned this role.'] = 'Bruges, når LDAP servere er konfigureret til at befolke en bruger detaljer - dette omfatter Roles, som de er tildelt. Hvis en bruger er i denne LDAP gruppe, de er tildelt denne rolle.';

$GLOBALS["lang"]['Used when searching OpenLDAP to match a users uid to a groups members. Default of <code>memberUid</code>. Used by OpenLDAP only.'] = 'Bruges ved søgning i OpenLDAP til at matche en bruger uid til en gruppe medlemmer. Standard for <code>memberUid</code>. Anvendes kun af OpenLDAP.';

$GLOBALS["lang"]['Used with Integrations and FirstWave monitoring applications.'] = 'Bruges med Integrationer og FirstWave overvågning applikationer.';

$GLOBALS["lang"]['Used with Integrations and FirstWave monitoring applications. Set to y if working SNMP detected by discovery.'] = 'Bruges med Integrationer og FirstWave overvågning applikationer. Sæt til y hvis du arbejder SNMP opdaget af opdagelse.';

$GLOBALS["lang"]['user'] = 'Bruger';

$GLOBALS["lang"]['User'] = 'Bruger';

$GLOBALS["lang"]['User DN'] = 'Bruger DN';

$GLOBALS["lang"]['user_group'] = 'Brugergruppe';

$GLOBALS["lang"]['User Group'] = 'Brugergruppe';

$GLOBALS["lang"]['user_id'] = 'Bruger- id';

$GLOBALS["lang"]['User ID'] = 'Bruger- id';

$GLOBALS["lang"]['user_interaction'] = 'Brugerinteraktion';

$GLOBALS["lang"]['User Interaction'] = 'Brugerinteraktion';

$GLOBALS["lang"]['User Membership Attribute'] = 'Brugermedlemsattribut';

$GLOBALS["lang"]['user_name'] = 'Brugernavn';

$GLOBALS["lang"]['User Name'] = 'Brugernavn';

$GLOBALS["lang"]['User Policies'] = 'Brugerpolitik';

$GLOBALS["lang"]['Username'] = 'Brugernavn';

$GLOBALS["lang"]['username'] = 'Brugernavn';

$GLOBALS["lang"]['users'] = 'Brugere';

$GLOBALS["lang"]['Users'] = 'Brugere';

$GLOBALS["lang"]['Users work similar to Netstat Ports. If a user exists with a matching name, status and password details (changeable, expires, required) then the policy passes.'] = 'Brugerne arbejder på samme måde som Netstat Ports. Hvis en bruger eksisterer med et matchende navn, status og password detaljer (udskiftelige, udløber, kræves) derefter politikken passerer.';

$GLOBALS["lang"]['Users, Roles and Orgs'] = 'Brugere, ruller og orger';

$GLOBALS["lang"]['Uses the CodeIgniter PHP Framework.'] = 'Bruger CodeIgniter PHP Framework.';

$GLOBALS["lang"]['Using'] = 'Brug';

$GLOBALS["lang"]['Using Entra for Auth'] = 'Brug Entra til Auth';

$GLOBALS["lang"]['Using LDAPS'] = 'Brug af LDAPS';

$GLOBALS["lang"]['Using OKTA for Auth'] = 'Brug OKTA til Auth';

$GLOBALS["lang"]['Using the format option is useful when using a web browser but you wish to see the result in JSON format. Adding format=json achieves this. Normally a web browser will set its accept header to HTML, so in that case, we return the rendered page. Using an API to retrieve JSON you should set the accept header to'] = 'Brug af formatet er nyttig, når du bruger en webbrowser, men du ønsker at se resultatet i JSON format. Tilføj format = json opnår dette. Normalt en webbrowser vil indstille sin accept header til HTML, så i så fald, vi returnerer den afleverede side. Brug af en API til at hente JSON bør du indstille accept header til';

$GLOBALS["lang"]['Usually Mbs, from Location A.'] = 'Normalt Mbs, fra Placering A.';

$GLOBALS["lang"]['Usually Mbs, from Location B.'] = 'Normalt Mbs, fra Placering B.';

$GLOBALS["lang"]['Usually Mbs, to Location A.'] = 'Normalt Mbs, til Placering A.';

$GLOBALS["lang"]['Usually Mbs, to Location B.'] = 'Normalt Mbs, til placering B.';

$GLOBALS["lang"]['Usually should be set to 3.'] = 'Normalt sættes til 3.';

$GLOBALS["lang"]['Uzbekistan'] = 'Usbekistan';

$GLOBALS["lang"]['VLAN'] = 'VLAN';

$GLOBALS["lang"]['VLAN ID'] = 'VLAN-id';

$GLOBALS["lang"]['valid_from'] = 'Gyldig fra';

$GLOBALS["lang"]['Valid From'] = 'Gyldig fra';

$GLOBALS["lang"]['valid_from_raw'] = 'Gyldig fra rå';

$GLOBALS["lang"]['Valid From Raw'] = 'Gyldig fra rå';

$GLOBALS["lang"]['valid_to'] = 'Gyldig til';

$GLOBALS["lang"]['Valid To'] = 'Gyldig til';

$GLOBALS["lang"]['valid_to_raw'] = 'Gyldig til rå';

$GLOBALS["lang"]['Valid To Raw'] = 'Gyldig til rå';

$GLOBALS["lang"]['Valid Values'] = 'Gyldige værdier';

$GLOBALS["lang"]['value'] = 'Værdi';

$GLOBALS["lang"]['Value'] = 'Værdi';

$GLOBALS["lang"]['Value Types'] = 'Værdityper';

$GLOBALS["lang"]['values'] = 'Værdier';

$GLOBALS["lang"]['Values'] = 'Værdier';

$GLOBALS["lang"]['Values: In the case of a <i>list</i> field, this should be a comma separated list of valid values.'] = 'Værdier: I tilfælde af <i>liste</i> felt, skal dette være en kommaadskilt liste over gyldige værdier.';

$GLOBALS["lang"]['Vanuatu'] = 'Vanuatu';

$GLOBALS["lang"]['VarChar'] = 'VarChar Formand';

$GLOBALS["lang"]['Varchar'] = 'Varchar Formand';

$GLOBALS["lang"]['variable'] = 'Variabel';

$GLOBALS["lang"]['Variable'] = 'Variabel';

$GLOBALS["lang"]['Various'] = 'Diverse';

$GLOBALS["lang"]['vendor'] = 'Leverandør';

$GLOBALS["lang"]['Vendor'] = 'Leverandør';

$GLOBALS["lang"]['Vendor Report'] = 'Leverandørrapport';

$GLOBALS["lang"]['vendors'] = 'Leverandører';

$GLOBALS["lang"]['Vendors'] = 'Leverandører';

$GLOBALS["lang"]['Venezuela'] = 'Venezuela';

$GLOBALS["lang"]['Version'] = 'Version';

$GLOBALS["lang"]['version_padded'] = 'Version Polstret';

$GLOBALS["lang"]['Version Padded'] = 'Version Polstret';

$GLOBALS["lang"]['version_raw'] = 'Version Raw';

$GLOBALS["lang"]['Version Raw'] = 'Version Raw';

$GLOBALS["lang"]['version_string'] = 'Versionsstreng';

$GLOBALS["lang"]['Version String'] = 'Versionsstreng';

$GLOBALS["lang"]['video'] = 'Video';

$GLOBALS["lang"]['Video'] = 'Video';

$GLOBALS["lang"]['Vietnam'] = 'Vietnam';

$GLOBALS["lang"]['Vietnamese'] = 'vietnamesisk';

$GLOBALS["lang"]['View'] = 'Vis';

$GLOBALS["lang"]['View All'] = 'Vis alle';

$GLOBALS["lang"]['View Details'] = 'Vis detaljer';

$GLOBALS["lang"]['View Device'] = 'Vis enhed';

$GLOBALS["lang"]['View Discovery'] = 'Vis Opdagelse';

$GLOBALS["lang"]['View Policy'] = 'Vis politik';

$GLOBALS["lang"]['View Racks'] = 'Vis racks';

$GLOBALS["lang"]['View the'] = 'Vis';

$GLOBALS["lang"]['View the discovery in question, then click the Support button in the top right toolbar. This will provide the discovery settings, config items, the discovery device list as well as the logs for this particular discovery.'] = 'Vis den pågældende opdagelse, og klik derefter på Support knappen i øverste højre værktøjslinje. Dette vil give den opdagelse indstillinger, config elementer, opdagelse enhed liste samt logfiler for denne særlige opdagelse.';

$GLOBALS["lang"]['View the release notes on the'] = 'Se udgivelsesbemærkningerne på';

$GLOBALS["lang"]['Virtual Private Network'] = 'Virtuelt privat netværk';

$GLOBALS["lang"]['Virtual private network'] = 'Virtuelt privat netværk';

$GLOBALS["lang"]['Virtualisation'] = 'Virtualisering';

$GLOBALS["lang"]['Visit our YouTube channel for instructional videos.'] = 'Besøg vores YouTube-kanal for instruktive videoer.';

$GLOBALS["lang"]['vlan'] = 'Vlan Formand';

$GLOBALS["lang"]['Vlan'] = 'Vlan Formand';

$GLOBALS["lang"]['vlan_id'] = 'VIN ID';

$GLOBALS["lang"]['Vlan ID'] = 'VIN ID';

$GLOBALS["lang"]['vm'] = 'Vm';

$GLOBALS["lang"]['Vm'] = 'Vm';

$GLOBALS["lang"]['vm_device_id'] = 'Vm enheds- id';

$GLOBALS["lang"]['Vm Device ID'] = 'Vm enheds- id';

$GLOBALS["lang"]['vm_group'] = 'Vm Group';

$GLOBALS["lang"]['Vm Group'] = 'Vm Group';

$GLOBALS["lang"]['vm_ident'] = 'Vm Ident';

$GLOBALS["lang"]['Vm Ident'] = 'Vm Ident';

$GLOBALS["lang"]['vm_server_name'] = 'Vm- servernavn';

$GLOBALS["lang"]['Vm Server Name'] = 'Vm- servernavn';

$GLOBALS["lang"]['vm_vendor'] = 'Vm Vendor';

$GLOBALS["lang"]['Vm Vendor'] = 'Vm Vendor';

$GLOBALS["lang"]['vuln_status'] = 'Vulnstatus';

$GLOBALS["lang"]['Vuln Status'] = 'Vulnstatus';

$GLOBALS["lang"]['vulnerabilities'] = 'Sårbarhed';

$GLOBALS["lang"]['Vulnerabilities'] = 'Sårbarhed';

$GLOBALS["lang"]['vulnerabilities_cache'] = 'Sårbarhedscache';

$GLOBALS["lang"]['Vulnerabilities Cache'] = 'Sårbarhedscache';

$GLOBALS["lang"]['Vulnerabilities and Results'] = 'Sårbarhed og resultater';

$GLOBALS["lang"]['Vulnerabilities initially published before 1st January, 2025 (by default). We see no sense in returning vulnerabilities from years prior. This can be changed in the configuration.'] = 'Sårbarheder oprindeligt offentliggjort før 1 Januar, 2025 (som standard). Vi ser ingen mening i at returnere sårbarheder fra år før. Dette kan ændres i konfigurationen.';

$GLOBALS["lang"]['vulnerability_id'] = 'Sårbarhedsidentifikation';

$GLOBALS["lang"]['Vulnerability ID'] = 'Sårbarhedsidentifikation';

$GLOBALS["lang"]['Vulnerability Status'] = 'Sårbarhedsstatus';

$GLOBALS["lang"]['WARNING - When creating a baseline using software policies, at present Centos and RedHat package the kernel using the names <i>kernel</i> and <i>kernel-devel</i>. There can be multiple packages with this name and different versions concurrently installed. Debian based distributions use names like <i>linux-image-3.13.0-24-generic</i>, note the version number is included in the package name. Because RedHat based operating systems use this format and subsequently have multiple identical package names with different versions we currently exclude <i>kernel</i> and <i>kernel-devel</i> from software policies. This may be addressed in a future update.'] = 'ADVARSEL - Når du opretter en baseline ved hjælp af softwarepolitikker, på nuværende tidspunkt Centos og RedHat pakke kernen ved hjælp af navnene <i>kerne</i> og <i>kernel- devel</i>. Der kan være flere pakker med dette navn og forskellige versioner samtidigt installeret. Debian-baserede distributioner bruger navne som <i>linux- image- 3, 13, 0- 24 - generisk</i>, bemærk versionsnummeret er inkluderet i pakkenavnet. Fordi RedHat baserede operativsystemer bruger dette format og efterfølgende har flere identiske pakkenavne med forskellige versioner, vi i øjeblikket udelukker <i>kerne</i> og <i>kernel- devel</i> fra softwarepolitikker. Dette kan behandles i en fremtidig opdatering.';

$GLOBALS["lang"]['WHERE'] = 'HVOR';

$GLOBALS["lang"]['WMI Credentials Requirements'] = 'Krav til valg til WMI';

$GLOBALS["lang"]['Wait for it to complete, then paste in this next line to install the Agent.'] = 'Vent til den er færdig, og indsæt så næste linje for at installere agenten.';

$GLOBALS["lang"]['wall_port'] = 'Wall Port';

$GLOBALS["lang"]['Wall Port'] = 'Wall Port';

$GLOBALS["lang"]['Wallis and Futuna'] = 'Wallis og Futuna';

$GLOBALS["lang"]['Want to know more?'] = 'Vil du vide mere?';

$GLOBALS["lang"]['Warning'] = 'Advarsel';

$GLOBALS["lang"]['warranty'] = 'Garanti';

$GLOBALS["lang"]['Warranty'] = 'Garanti';

$GLOBALS["lang"]['warranty_duration'] = 'Garantiperiode';

$GLOBALS["lang"]['Warranty Duration'] = 'Garantiperiode';

$GLOBALS["lang"]['warranty_expires'] = 'Garantiomkostninger';

$GLOBALS["lang"]['Warranty Expires'] = 'Garantiomkostninger';

$GLOBALS["lang"]['warranty_status'] = 'Garantistatus';

$GLOBALS["lang"]['Warranty Status'] = 'Garantistatus';

$GLOBALS["lang"]['warranty_type'] = 'Garantitype';

$GLOBALS["lang"]['Warranty Type'] = 'Garantitype';

$GLOBALS["lang"]['We also have an option to Ping Before Scan (important for routers with long lived ARP caches). This is usually a good idea.'] = 'Vi har også en mulighed for at Ping før Scan (vigtigt for routere med lang levetid ARP caches). Det er normalt en god idé.';

$GLOBALS["lang"]['We also have our action items (which are executed in the order below):'] = 'Vi har også vores handling elementer (som udføres i nedenstående rækkefølge):';

$GLOBALS["lang"]['We are often asked this question and the answer most definitely is <i>it depends</i>. It depends on the number of IPs to be scanned, the network connection speed, the speed of the devices being scanned, the type of devices being scanned, the number of different credentials being tested and the speed of the Open-AudIT server. We do not have a calculator that would allow us to input those variables and return a value. It is simply too complex. Generally I limit my discoveries to 256 IP addresses - ie, a /24 subnet. We have had customers scan /16 subnets (65k addresses) and it does work - but it can take a long time. You are much better off scanning in /24 blocks. If you simply do not know what your address ranges are, then this is a good case for a Seed discovery.'] = 'Vi bliver ofte stillet dette spørgsmål, og svaret er helt klart: <i>det afhænger</i>. Det afhænger af antallet af IP \'er, der skal scannes, netværkstilslutningshastigheden, hastigheden af de enheder, der scannes, typen af enheder, der scannes, antallet af forskellige legitimationsoplysninger, der testes, og hastigheden af Open- AudiT-serveren. Vi har ikke en lommeregner, der ville give os mulighed for at indtaste disse variabler og returnere en værdi. Det er simpelthen for komplekst. Generelt begrænser jeg mine opdagelser til 256 IP-adresser - dvs, a / 24 subnet. Vi har haft kunder scanne / 16 undernet (65k adresser) og det virker - men det kan tage lang tid. Du er meget bedre stillet scanning i / 24 blokke. Hvis du simpelthen ikke ved, hvad din adresse intervaller er, så er dette en god sag for en Seed opdagelse.';

$GLOBALS["lang"]['We have more detailed instructions on'] = 'Vi har mere detaljerede instruktioner om';

$GLOBALS["lang"]['We have tests for:'] = 'Vi har tests for:';

$GLOBALS["lang"]['We hope you find Open-AudIT as useful as we do.'] = 'Vi håber du finder Open- Audit lige så nyttigt som vi gør.';

$GLOBALS["lang"]['We initially setup the default list of scripts with the default options. The list of script is viewable at /scripts. These default scripts cannot be deleted. You can create additional scripts for use by you as required. Your script will be based on one of the existing scripts and have custom options applied. The scripts can then be downloaded from the list page at menu: Discover -> Audit Scripts -> List Audit Scripts.'] = 'Vi opsætter i første omgang standardlisten over scripts med standardtilvalg. Listen over script kan ses på / scripts. Disse standard scripts kan ikke slettes. Du kan oprette yderligere scripts til brug for dig efter behov. Dit script vil være baseret på en af de eksisterende scripts og har brugerdefinerede muligheder anvendes. Scripts kan derefter downloades fra listesiden i menuen: Oplev - > Audit Scripts - > Liste Audit Scripts.';

$GLOBALS["lang"]['We need some credentials to be able to effectively talk to the devices on your network.'] = 'Vi har brug for nogle legitimationsoplysninger for effektivt at kunne tale med enhederne på dit netværk.';

$GLOBALS["lang"]['We only send the minimum amount of data and nothing of a sensitive nature. We send our license data (name, type, etc), our application data (name, version, platform, timezone, etc), any logged errors, a count of device types and a count of the features used. <i>Any</i> environment has devices and that is the only piece of your data we send. And only the type of device and a count. Not the manufacturer, not the model. We send nothing special. No networks. No IP addresses. No OS versions. No software names. The UUID and Server fields are sha256 encoded (so we do not know the value). We send just the data we need to improve the product. We hope you see the benefit to all of us with this information. It will provide us guided direction on where to focus improvements and new features in the product.'] = 'Vi sender kun den mindste mængde data og intet følsomt. Vi sender vores licensdata (navn, type osv.), vores applikationsdata (navn, version, platform, tidszone osv.), eventuelle loggede fejl, en optælling af enhedstyper og en optælling af de anvendte funktioner. <i>Alle</i> miljø har enheder, og det er det eneste stykke af dine data, vi sender. Og kun typen af enhed og en optælling. Ikke producenten, ikke modellen. Vi sender ikke noget særligt. Ingen netværk. Ingen IP-adresser. Ingen OS-versioner. Ingen softwarenavne. Felterne UUID og Server er sha256 indkodet (så vi ikke kender værdien). Vi sender lige de data, vi har brug for for at forbedre produktet. Vi håber, at De ser fordelen for os alle med disse oplysninger. Det vil give os vejledning om, hvor vi kan fokusere forbedringer og nye funktioner i produktet.';

$GLOBALS["lang"]['We tend to use the Google Chrome extension called Postman for testing actual restful queries. You might like to install and test with that.'] = 'Vi har tendens til at bruge Google Chrome udvidelse kaldet Postman til at teste faktiske restaured forespørgsler. Du vil måske gerne installere og teste med det.';

$GLOBALS["lang"]['Web'] = 'Web';

$GLOBALS["lang"]['Web Application Routes'] = 'Webprogramruter';

$GLOBALS["lang"]['Web Server Discovery'] = 'Opdagelse af webserver';

$GLOBALS["lang"]['Webserver'] = 'Webserver';

$GLOBALS["lang"]['Website'] = 'Hjemmeside';

$GLOBALS["lang"]['Wednesday'] = 'Onsdag';

$GLOBALS["lang"]['weight'] = 'Vægt';

$GLOBALS["lang"]['Weight'] = 'Vægt';

$GLOBALS["lang"]['weight_current'] = 'Vægt Nuværende';

$GLOBALS["lang"]['Weight Current'] = 'Vægt Nuværende';

$GLOBALS["lang"]['weight_empty'] = 'Vægt tom';

$GLOBALS["lang"]['Weight Empty'] = 'Vægt tom';

$GLOBALS["lang"]['weight_max'] = 'Vægt Max';

$GLOBALS["lang"]['Weight Max'] = 'Vægt Max';

$GLOBALS["lang"]['Welcome'] = 'Velkommen';

$GLOBALS["lang"]['Welcome Dashboard'] = 'Velkomstord';

$GLOBALS["lang"]['Welcome to'] = 'Velkommen til';

$GLOBALS["lang"]['Western Sahara'] = 'Vestsahara';

$GLOBALS["lang"]['What Can I Expect if I Have no Credentials'] = 'Hvad kan jeg forvente, hvis jeg ikke har noget valg';

$GLOBALS["lang"]['What about fields that I want from NMIS that are not in Open-AudIT? We have got you covered. Any fields in the external system (NMIS) that do not exist in Open-AudIT will be automatically created as Open-AudIT Custom fields.'] = 'Hvad med felter, jeg ønsker fra NMIS, der ikke er i Open- Audit? Vi har dig dækket. Alle felter i det eksterne system (NMIS), der ikke findes i Open- Audit, oprettes automatisk som Open- Audit Custom felter.';

$GLOBALS["lang"]['What about other network devices? Think switches, routers, printers, etc. Obviously, it is best if you can provide some SNMP credentials for these devices. They only need <i>read-only</i> access. But if you do not want to do even that, there is nothing stopping you from running discovery, finding the devices, and making a rule or two to identify them (maybe use MAC Address prefix in combination with open ports, for example). You wont have much information, but you will know they are on the network, what they are, and when the last time they were seen was. You will also see if anything new appears on the network.'] = 'Hvad med andre netværksenheder? Tænk på kontakter, routere, printere osv. Det er naturligvis bedst, hvis du kan give nogle SNMP legitimation for disse enheder. De behøver kun <i>read- only</i> adgang. Men hvis du ikke ønsker at gøre selv det, er der intet, der forhindrer dig i at køre opdagelse, finde enheder, og gøre en regel eller to til at identificere dem (måske bruge MAC-adresse præfiks i kombination med åbne porte, for eksempel). Du plejer at have mange oplysninger, men du vil vide, at de er på netværket, hvad de er, og når sidste gang de blev set var. Du vil også se, om noget nyt vises på netværket.';

$GLOBALS["lang"]['What do we send?'] = 'Hvad sender vi?';

$GLOBALS["lang"]['What does this actually mean to you?'] = 'Hvad betyder det egentlig for dig?';

$GLOBALS["lang"]['What is the purpose of this rack.'] = 'Hvad er formålet med denne rack.';

$GLOBALS["lang"]['What is the type of this location. Allowable types held in <code>attributes</code> table.'] = 'Hvad er typen af denne placering. Godtgørelsestyper <code>attributes</code> Bord.';

$GLOBALS["lang"]['When Open-AudIT on Linux discovers a Windows machine, in order to execute a remote command we use'] = 'Når Open- Audit på Linux opdager en Windows-maskine, for at udføre en ekstern kommando bruger vi';

$GLOBALS["lang"]['When Open-AudIT on Windows discovers a Windows machine, in order to execute a remote command we use'] = 'Når Open- Audit på Windows opdager en Windows-maskine, for at udføre en ekstern kommando, vi bruger';

$GLOBALS["lang"]['When Open-AudIT receives data about a device, either by discovering the device during an audit run or by the user importing the device, it must determine if this discovered device matches a device that already exists within its database, or if it is a new device that should be added. Open-AudIT uses a series of twelve property matches to determine this. The Match Rules work as OR comparisons, not AND. This means the first rule that matches a field in the discovered device to one in the dB resolves as an existing device. All Matching Rules have to fail in order for a device to be new and result in a new record being created.'] = 'Når Open- Aud IT modtager data om en enhed, enten ved at opdage enheden under en auditkørsel eller af den bruger, der importerer enheden, skal det afgøre, om denne opdagede enhed matcher en enhed, der allerede findes i sin database, eller om det er en ny enhed, der skal tilføjes. Open- Audit bruger en serie af 12 ejendom kampe til at afgøre dette. Match reglerne fungerer som ELLER sammenligninger, ikke OG. Dette betyder den første regel, der matcher et felt i den opdagede enhed til en i dB løser som en eksisterende enhed. Alle matchingsregler skal mislykkes for at en enhed skal være ny og resultere i, at der oprettes en ny rekord.';

$GLOBALS["lang"]['When POSTing data, you must include an access token. An access token is generated with every request type, so make a GET (for example) and Accept: application/json, parse the response for meta→access_token, and include that with your request. This should be placed in the field data[access_token], IE, the top level.'] = 'Når POSTING data, skal du inkludere en adgang token. En adgang token genereres med hver anmodning type, så lave en GET (for eksempel) og Accept: ansøgning / json, parse svaret for meta → adgang _ token, og omfatte det med din anmodning. Dette bør placeres i feltets data [adgang _ token], IE, det øverste niveau.';

$GLOBALS["lang"]['When a device is Discovered the audit script will be injected with the file (or directory) details. Both audit_linux.sh and audit_windows.vbs will be populated, regardless of the file path. If you are thinking <i>but putting a Linux path into a Windows machine will break things!</i>, it wont break, you just wont receive any data from that file or directory entry.<br>Retrieved details will be stored in the <i>file</i> database table and are stored like any other attribute. File details will be stored as any other attribute and generate alerts if any of the following attributes change - <i>full_name</i>, <i>hash</i>, <i>inode</i>, <i>last_changed</i>. The table contain a system_id, first_seen, last_seen and current columns as well as the file details.<br>Attributes recorded are:<br><ul><li>Windows - name, size, directory, SHA1 hash (of the file contents), last changed, permissions, owner, version (file permitting).</li><br><li>Linux - name, size, directory, SHA1 hash (of the file contents), last changed, meta data last changed, permissions, owner, group, inode.</li></ul>You will see a section in both the Windows and Linux audit scripts as below'] = 'Når en enhed er opdaget vil auditscriptet blive injiceret med filen (eller mappen) detaljer. Både audit _ linux.sh og audit _ windows.vbs vil blive befolket, uanset filsti. Hvis du tænker <i>men at sætte en Linux-sti ind i en Windows-maskine vil bryde ting!</i>, det plejer at bryde, du bare ikke modtager nogen data fra denne fil eller mappe post.<br/>Indledte oplysninger vil blive gemt i <i>fil</i> database tabel og gemmes som enhver anden attribut. Filoplysninger vil blive gemt som enhver anden attribut og generere advarsler, hvis en af følgende attributter ændres - <i>full _ name</i>, <i>hash</i>, <i>inode</i>, <i>seneste _ ændret</i>. Tabellen indeholder et system _ id, først _ set, sidste _ set og nuværende kolonner samt fildetaljer.<br/>Attributter registreret er:<br/><ul><li>Windows - navn, størrelse, mappe, SHA1 hash (af filens indhold), senest ændret, tilladelser, ejer, version (fil tillader).</li><br/><li>Linux - navn, størrelse, mappe, SHA1 hash (af filens indhold), senest ændret, meta data sidst ændret, tilladelser, ejer, gruppe, inode.</li></ul>Du vil se et afsnit i både Windows og Linux revision scripts som nedenfor';

$GLOBALS["lang"]['When a discovery is run, the relevant discovery scan option is chosen and those settings are used by Nmap to scan the target devices.  The scan options determine which ports nmap scans, how fast they scan and whether or not nmap ping is first used to determine if the IP is live or not.'] = 'Når en opdagelse køres, vælges den relevante søgescanning og disse indstillinger bruges af Nmap til at scanne målenhederne. Scanningsmulighederne bestemmer hvilke porte nmap scanner, hvor hurtigt de scanner og om nmap ping først bruges til at afgøre om IP er live eller ej.';

$GLOBALS["lang"]['When a discovery is run, the relevant discovery scan option is chosen and those settings used by Nmap to scan the target devices. If no option set is chosen, the default configuration item (discovery_default_scan_option) is selected and used. Open-AudIT Community will use the default options as per the configuration for all discoveries.'] = 'Når en opdagelse køres, vælges den relevante søgescanning og de indstillinger, som Nmap bruger til at scanne målenhederne. Hvis der ikke vælges noget tilvalg, vælges og bruges standardindstillingspunktet (find _ default _ scan _ option). Open- Audit fællesskab vil bruge standardindstillinger som pr konfigurationen for alle opdagelser.';

$GLOBALS["lang"]['When a subnet discovery is executed it first runs, if selected, an Nmap ping scan on the range or IP addresses. Any device responding will be port scanned. If an Nmap ping scan is not requested, each IP is individually port scanned. Which ports? That is determined by the'] = 'Når en subnet opdagelse udføres det første kører, hvis valgt, en Nmap ping scanning på området eller IP-adresser. Enhver enhed, der reagerer, bliver scannet. Hvis der ikke anmodes om en Nmap ping scanning, hver IP er individuelt port scannet. Hvilke havne? Det bestemmes af';

$GLOBALS["lang"]['When auditing a Linux device via SSH, some Linux distributions do not allow sudo commands to be passed without a TTY (which we are doing). To completely audit one of these linux distributions it is best to supply the root user credentials. If no root is supplied and sudo without a TTY is not possible, the audit script will be run but will not contain the amount of data as would otherwise. Subsequent audits using root (or run locally using sudo) will therefore provide extra details about the system and generate several <i>changes</i>.'] = 'Ved revision af en Linux-enhed via SSH tillader nogle Linux-distributioner ikke sudo-kommandoer at blive bestået uden en TTY (som vi gør). At helt revidere en af disse linux distributioner er det bedste at levere root bruger legitimationsoplysninger. Hvis ingen root er leveret og sudo uden en TTY er ikke muligt, revision script vil blive kørt, men vil ikke indeholde mængden af data som ellers ville. Efterfølgende revisioner ved hjælp af rod (eller køre lokalt ved hjælp sudo) vil derfor give yderligere oplysninger om systemet og generere flere <i>ændringer</i>.';

$GLOBALS["lang"]['When combining devices, which system is the authoritative source for information.'] = 'Ved kombination af udstyr, hvilket system er den autoritative kilde til information.';

$GLOBALS["lang"]['When complete, close the command window and you are done!'] = 'Når du er færdig, luk kommandovinduet og du er færdig!';

$GLOBALS["lang"]['When creating a widget, if you select the <i>Advanced</i> button you will have the ability to upload your own custom SQL.'] = 'Når du opretter en kontrol, hvis du vælger <i>Avanceret</i> knappen vil du have mulighed for at uploade din egen brugerdefinerede SQL.';

$GLOBALS["lang"]['When integrating devices from the external system, if the device doesnt exist in Open-AudIT should we create it?'] = 'Når du integrerer enheder fra det eksterne system, hvis enheden doesnt eksisterer i Open- Audit skal vi oprette det?';

$GLOBALS["lang"]['When integrating devices from the external system, if the device has been updated in the external system should we update it in Open-AudIT?'] = 'Når du integrerer enheder fra det eksterne system, hvis enheden er blevet opdateret i det eksterne system bør vi opdatere det i Open- Audit?';

$GLOBALS["lang"]['When investigating a Discovery, support will request the Exported Discovery Logs. To retrieve these, go to menu -> Discoveries ->'] = 'Når du undersøger en Discovery, støtte vil anmode om Exporterede Discovery Logs. For at hente disse, gå til menu - > Opdagelser - >';

$GLOBALS["lang"]['When matching a Linux based device, we prefer to use the Dbus id concatenated with the hostname. We can also use other options as per the below table, but we can retrieve the Dbus ID without root. To retrieve the UUID (from the motherboard), we need to run dmidecode, which does require root. Unfortunately, when you clone an ESXi guest, the Dbus ID does not get recreated - hence our concatenating this with the hostname. There is a good article linked here that details the <i>why</i> of hardware IDs.'] = 'Når vi matcher en Linux-baseret enhed, foretrækker vi at bruge Dbus-id \'et sammenkædet med værtsnavnet. Vi kan også bruge andre muligheder som pr nedenstående tabel, men vi kan hente Dbus ID uden rod. For at hente UUID (fra bundkortet), skal vi køre dmidecode, som kræver rod. Desværre, når du kloner en ESXi gæst, Dbus ID ikke bliver genskabt - derfor vores sammenkædning dette med værtsnavnet. Der er en god artikel knyttet her, der beskriver <i>hvorfor</i> af hardware-id \'er.';

$GLOBALS["lang"]['When requesting JSON, by default no limit is set. When requesting screen display, the limit is set to 1000 by default. This can be changed in the configuration. See the <i>page_size</i> item'] = 'Når der anmodes om JSON, sættes der som standard ingen grænse. Når der anmodes om skærmvisning, sættes grænsen til 1000 som standard. Dette kan ændres i konfigurationen. Se <i>side _ størrelse</i> post';

$GLOBALS["lang"]['When retrieve an external device, should we run discovery upon it?'] = 'Når du henter en ekstern enhed, skal vi køre opdagelse på det?';

$GLOBALS["lang"]['When running Open-AudIT on Windows the Apache service account must be that of a <i>regular</i> user (or the Administrator). This is because the <i>Local System</i> account normally used to run Apache has no access to any network resources. IE - We cannot use Apache when running as the Local System account account to copy the audit script to Windows PCs.'] = 'Når du kører Open- Audit på Windows Apache service konto skal være en <i>almindelig</i> bruger (eller administrator). Det er fordi <i>Lokalt system</i> konto normalt bruges til at køre Apache har ingen adgang til nogen netværksressourcer. IE - Vi kan ikke bruge Apache, når vi kører som Local System konto til at kopiere revision script til Windows-pc \'er.';

$GLOBALS["lang"]['When the configuration option is set, we take this into account for devices for a certain defined subset of match rules where the configuration item has been enabled. These rules are:'] = 'Når konfigurationsindstillingen er indstillet, tager vi dette i betragtning for enheder til en bestemt defineret delmængde af matchregler, hvor konfigurationselementet er aktiveret. Disse regler er:';

$GLOBALS["lang"]['When the rules run in discovery, any matching rules will appear in the discovery log. See below for an example.'] = 'Når reglerne løber i opdagelse, vil eventuelle matchende regler vises i opdagelsesloggen. Se nedenfor for et eksempel.';

$GLOBALS["lang"]['When this benchmark is scheduled to be executed. Derived from the associated <code>tasks.type</code> and <code>tasks.sub_resource_id</code>.'] = 'Når dette benchmark er planlagt til at blive gennemført. Afledt af den tilknyttede <code>tasks.type</code> og <code>tasks.sub_resource_id</code>.';

$GLOBALS["lang"]['When this log was created.'] = 'Da denne log blev oprettet.';

$GLOBALS["lang"]['When this queue item started processing.'] = 'Når denne kø element begyndte behandling.';

$GLOBALS["lang"]['When using Open-AudIT Professional or Enterprise, widgets are available and customisable to be displayed on Dashboards.'] = 'Når du bruger Open- Audit Professional eller Enterprise, widgets er tilgængelige og tilpasses til at blive vist på Dashboards.';

$GLOBALS["lang"]['When we are converting an internally selected device to an object for the external system, what should the external data be. EG: integer, string, etc.'] = 'Når vi er ved at konvertere en internt valgt enhed til et objekt for det eksterne system, hvad skal de eksterne data være. EG: heltal, streng, osv.';

$GLOBALS["lang"]['When we execute this baseline, should we check for items on devices that are not in a policy for this baseline.'] = 'Når vi udfører denne basislinje, skal vi kontrollere for elementer på enheder, der ikke er i en politik for denne basislinje.';

$GLOBALS["lang"]['When we receive an open port, should we attempt to test for the version of the service currently running upon it? This assists in confirming actual running services.'] = 'Når vi modtager en åben port, bør vi forsøge at teste for den version af tjenesten, der kører på det i øjeblikket? Dette hjælper med at bekræfte den faktiske drift.';

$GLOBALS["lang"]['When you are using Clouds to discover your Amazon AWS instances, you will need two credential items - key and secret key. Your key should already be known to you and your secret key as well. Of note is that you cannot retrieve your secret key using the AWS Console provided by Amazon. If you have misplaced it, you will need to generate a new one.'] = 'Når du bruger Clouds til at opdage dine Amazon AWS tilfælde, vil du brug for to kreditelementer - nøgle og hemmelig nøgle. Din nøgle bør allerede være kendt for dig og din hemmelige nøgle så godt. Bemærk er, at du ikke kan hente din hemmelige nøgle ved hjælp af AWS Console leveret af Amazon. Hvis du har malplaceret det, du bliver nødt til at generere en ny.';

$GLOBALS["lang"]['When you are using Clouds to discover your Microsoft Azure instances, you will need four credential items - subscription id, tenant id, client id and client secret.'] = 'Når du bruger Clouds til at opdage dine Microsoft Azure tilfælde, vil du have brug for fire kreditelementer - abonnement id, lejer id, klient id og klient hemmelighed.';

$GLOBALS["lang"]['When you create a discovery you have an option to devices_assigned_to_org. This means that any devices discovered for this discovery will be assigned (have <code>devices.org_id</code> set to) your chosen Organisation.'] = 'Når du opretter en opdagelse, har du en mulighed for enheder _ allokeret _ to _ org. Dette betyder, at alle enheder opdaget til denne opdagelse vil blive tildelt (har <code>devices.org_id</code> indstillet til) din valgte organisation.';

$GLOBALS["lang"]['When you create a new discovery if you click the Advanced button, you have many more options to change, one of them being the type of discovery.Types have always been Subnet (encompassing the above range, subnet, ip options) and Active Directory. As at v4.1, Open-AudIT has a new discovery type called Seed.'] = 'Når du opretter en ny opdagelse, hvis du klikker på knappen Avanceret, har du mange flere muligheder for at ændre, en af dem er den type opdagelse. Typer har altid været Subnet (omfatter ovenstående område, subnet, ip muligheder) og Active Directory. Som på v4.1, Open- Audit har en ny opdagelse type kaldet Seed.';

$GLOBALS["lang"]['When you enable a Query to be run on a schedule, the query is emailed to your chosen address. You must have set up email via menu -> Admin -> Enterprise -> Email Config. We also have a <i>test email<i> button on that page. Input your details, save it and then test it. You should have a modal box that informs you if it successful or not and obviously a test email should arrive if it is successful. Once you have email configured, your scheduled query can be configured.<br><br>Provide a name, optional description, choose <i>Query</i> type, select the desired query, provide an email address, choose a format and set the schedule.<br><br>Provide an hour (hour only, no minutes as yet), give the task a name (this is not the name of the actual scheduled query itself), select which days you would like the query run, choose which query you would like run, supply an email address and choose a query format and you are done.<br>Queries will be sent with an email body of the query (in html format) and the query attached in the requested format.'] = 'Når du aktiverer en forespørgsel, der skal køres på en tidsplan, bliver forespørgslen sendt til din valgte adresse. Du skal have oprettet e-mail via menu - > Admin - > Enterprise - > Email Config. Vi har også en <i>teste- e- mail<i> Knappen på siden. Input dine detaljer, gemme det og derefter teste det. Du bør have en modal boks, der informerer dig, hvis det lykkes eller ej, og naturligvis en test e-mail bør ankomme, hvis det lykkes. Når du har e-mail konfigureret, kan din planlagte forespørgsel konfigureres.<br/><br/>Angiv navn, valgfri beskrivelse, vælg <i>Forespørgsel</i> type, vælge den ønskede forespørgsel, give en e-mail-adresse, vælge et format og indstille tidsplanen.<br/><br/>Giv en time (kun time, ingen minutter endnu), giv opgaven et navn (dette er ikke navnet på selve den planlagte forespørgsel), vælg hvilke dage du ønsker forespørgslen køre, vælg hvilken forespørgsel du gerne vil køre, giv en e-mailadresse og vælg en forespørgsel format og du er færdig.<br/>Forespørgsler vil blive sendt med en e-mail organ af forespørgslen (i html format) og forespørgslen knyttet i det ønskede format.</i></i>';

$GLOBALS["lang"]['When you enter text into one of the column headings, you can simply use a normal word. For example, when you enter <code>computer</code> into the search box above the <i>Type</i> column, the search will return all devices with the type of Computer. Essentially, Open-AudIT requests data using a URL like <code>devices?devices.type=computer</code>. Now there is one significant difference when using the dataTables search, versus the standard'] = 'Når du indtaster tekst i en af søjlerne overskrifter, kan du blot bruge et normalt ord. For eksempel, når du indtaster <code>computer</code> i søgefeltet over <i>Type</i> kolonne, søgningen vil returnere alle enheder med typen af computer. Grundlæggende, Open- Aud IT anmoder om data ved hjælp af en URL som <code>devices?devices.type=computer</code>. Nu er der en betydelig forskel, når du bruger datatabeller søgning, versus standard';

$GLOBALS["lang"]['where'] = 'Hvor';

$GLOBALS["lang"]['Where'] = 'Hvor';

$GLOBALS["lang"]['Where $x is a number. This many LDAP entries are in the DB and have been retrieved.'] = 'Hvor x er et tal. Denne mange LDAP-indgange er i DB og er blevet hentet.';

$GLOBALS["lang"]['Where on the Device Details screen you would like to see this field appear.'] = 'Hvor på skærmen Enhedsdetaljer du gerne vil se dette felt vises.';

$GLOBALS["lang"]['Where the rack is in the row.'] = 'Hvor rack er i rækken.';

$GLOBALS["lang"]['Whether the vulnerability affects components beyond its own using Impact, Availability and Confidentiality.'] = 'Om sårbarheden påvirker komponenter ud over deres egen ved hjælp af Impact, Tilgængelighed og fortrolighed.';

$GLOBALS["lang"]['Whether user interaction is required (None, Passive, Active).'] = 'Om brugerinteraktion er påkrævet (Ingen, Passive, Aktiv).';

$GLOBALS["lang"]['Which OS this benchmark applies to.'] = 'Hvilket OS dette benchmark gælder for.';

$GLOBALS["lang"]['Which devices should Open-AudIT create from the external system (if any). Using All, None or a given Attribute.'] = 'Hvilke enheder skal Open- Audit oprette fra det eksterne system (hvis nogen). Bruger alle, Ingen eller en given attribut.';

$GLOBALS["lang"]['Which network should we discover. This should be in the format of'] = 'Hvilket netværk skal vi finde? Dette bør ske i form af';

$GLOBALS["lang"]['Which sub-menu should we display this query in.'] = 'Hvilken undermenu skal vi vise denne forespørgsel i.';

$GLOBALS["lang"]['Who made this rack.'] = 'Som lavede det her stativ.';

$GLOBALS["lang"]['Why Windows Server Only?'] = 'Hvorfor kun Windows Server?';

$GLOBALS["lang"]['Why do we exclude this policy?'] = 'Hvorfor udelukker vi denne politik?';

$GLOBALS["lang"]['Wide Area Network'] = 'Bredt områdenetværk';

$GLOBALS["lang"]['Wide area network'] = 'Bredt områdenet';

$GLOBALS["lang"]['Widget'] = 'Kontrol';

$GLOBALS["lang"]['Widget #'] = 'Widget #';

$GLOBALS["lang"]['Widget # '] = 'Widget # ';

$GLOBALS["lang"]['Widget Type'] = 'Kontroltype';

$GLOBALS["lang"]['widgets'] = 'Kontroller';

$GLOBALS["lang"]['Widgets'] = 'Kontroller';

$GLOBALS["lang"]['Widgets are designed to be used on Dashboards. Enterprise users have complete freedom to create, update and delete widgets as required.'] = 'Widgets er designet til at blive brugt på Dashboards. Virksomhedsbrugere har fuldstændig frihed til at oprette, opdatere og slette widgets efter behov.';

$GLOBALS["lang"]['width'] = 'Bredde';

$GLOBALS["lang"]['Width'] = 'Bredde';

$GLOBALS["lang"]['windows'] = 'Vinduer';

$GLOBALS["lang"]['Windows'] = 'Vinduer';

$GLOBALS["lang"]['Windows Packages'] = 'Windows-pakker';

$GLOBALS["lang"]['Windows Test Script'] = 'Windows Test Script';

$GLOBALS["lang"]['Windows User Work Unit #1'] = 'Windows Brugerenhed # 1';

$GLOBALS["lang"]['Windows User Work Unit #2'] = 'Windows Brugerenhed # 2';

$GLOBALS["lang"]['Windows may also have blocked the service from starting. On the target start the Windows Security applet and ensure the WinExeSvc executable is allowed to run (click Allow on Device and then Start Actions).'] = 'Windows kan også have blokeret tjenesten fra starten. På målet start Windows Security applet og sikre, at WinExeSvc eksekverbar er tilladt at køre (klik Tillad på enhed og derefter Start handlinger).';

$GLOBALS["lang"]['Winexe page on Samba'] = 'Winexe side på Samba';

$GLOBALS["lang"]['Winexe requires the following Windows services to be started and running: netlogon and rpc services to be running.<br><br>Please log on to the target Windows machine and check the services for netlogon and rpc are running.'] = 'Winexe kræver følgende Windows-tjenester, der skal startes og kører: netlogon og rpc-tjenester, der skal køre.<br/><br/>Venligst logge på målet Windows maskine og kontrollere tjenester for netlogon og rpc kører.';

$GLOBALS["lang"]['Winexe uses the admin$ and RPC (net service start) to install and start a remote service (winexesvc). This service initializes a named pipe that is used to transport commands from the Open-AudIT server to the target and the output in the reverse way. When finished, the named pipe closes and the winexesvc waits for more connections or uninstalls (depending of the options given).'] = 'Winexe bruger admin $og RPC (net service start) til at installere og starte en fjernbetjening (winexesvc). Denne tjeneste initialiserer et navngivet rør, der bruges til at transportere kommandoer fra Open- AudiT-serveren til målet og output på den modsatte måde. Når du er færdig, lukker den navngivne pibe og vinexesvc venter på flere forbindelser eller uninstalls (afhængigt af de givne muligheder).';

$GLOBALS["lang"]['Wireless Local Area Network'] = 'Trådløst lokalnet';

$GLOBALS["lang"]['With the 3.3.0 release of Open-AudIT we have introduced the concept of a Cluster. This intuitively maps to the idea of a web cluster, database cluster or file cluster (or one of several other purposes) into a given type (high availability, redundancy, scaling, etc).<br><br>Depending on the purpose of cluster chosen, the reporting will be slightly different.<br><br>For example, if you create a Cluster with a purpose of virtualisation, when you have added devices to it you will also see the virtual machines on those devices.'] = 'Med 3.3.0 udgivelse af Open- Audit har vi indført begrebet en klynge. Denne intuitive kort til ideen om en web klynge, database klynge eller fil klynge (eller et af flere andre formål) i en given type (høj tilgængelighed, redundans, skalering, osv.).<br/><br/>Afhængigt af formålet med den valgte klynge vil indberetningen være lidt anderledes.<br/><br/>For eksempel, hvis du opretter en klynge med et formål af virtualisering, når du har tilføjet enheder til det, vil du også se de virtuelle maskiner på disse enheder.';

$GLOBALS["lang"]['With the introduction of the Clouds feature, you can supply details of your cloud, Amazon AWS or Microsoft Azure, and Open-AudIT will use the relevant API to retrieve a list of locations, networks, and instances, then discover each of these instances.'] = 'Med introduktionen af Clouds-funktionen, kan du levere oplysninger om din sky, Amazon AWS eller Microsoft Azure, og Open- Audit vil bruge den relevante API til at hente en liste over steder, netværk og instanser, så opdage hver af disse tilfælde.';

$GLOBALS["lang"]['wmi_fails'] = 'Wmi mislykkedes';

$GLOBALS["lang"]['Wmi Fails'] = 'Wmi mislykkedes';

$GLOBALS["lang"]['wmi_timeout'] = 'Wmi Timeout';

$GLOBALS["lang"]['Wmi Timeout'] = 'Wmi Timeout';

$GLOBALS["lang"]['workgroup'] = 'Arbejdsgruppe';

$GLOBALS["lang"]['Workgroup'] = 'Arbejdsgruppe';

$GLOBALS["lang"]['Working Credentials'] = 'Arbejdsudvalg';

$GLOBALS["lang"]['Wrap Up'] = 'Wrap up';

$GLOBALS["lang"]['Written in the PHP scripting language.'] = 'Skrevet i PHP scriptsprog.';

$GLOBALS["lang"]['XML'] = 'XML';

$GLOBALS["lang"]['Yellow Query'] = 'Gul forespørgsel';

$GLOBALS["lang"]['Yemen'] = 'Yemen';

$GLOBALS["lang"]['Yes'] = 'Ja';

$GLOBALS["lang"]['You are able to define extra directories to be scanned as entries in the Executables collection. When defined, the directory and all sub-directories are scanned for files that are executable. You can also define directories and files to be excluded. When activated, these are injected into the linux audit script and performed whenever it is run (usually as part of a discovery). If you want these in a script you can manually copy to the target, use menu -> Discover -> Scripts -> List Scripts and download the script from there.'] = 'Du er i stand til at definere ekstra mapper, der skal scannes som indgange i samlingen Executables. Når det er defineret, scannes mappen og alle undermapper for filer der kan køres. Du kan også definere mapper og filer, der skal udelukkes. Når de aktiveres, indsprøjtes disse i linux audit script og udføres, når det køres (normalt som en del af en opdagelse). Hvis du ønsker disse i et script kan du manuelt kopiere til målet, bruge menuen - > Oplev - > Scripts - > List Scripts og download scriptet derfra.';

$GLOBALS["lang"]['You are always free to modify the audit scripts themselves to suit your specific requirements. You will need to (re)incorporate those changes whenever you upgrade as they will be overwritten by the default scripts. I would suggest saving a master copy of your modified script, upgrading Open-AudIT, then running a diff between the new default script and your modified script and applying the differences. The audit scripts are native scripts (Windows is VBScript, all others are Bash). Simple and easy to modify - just make sure to have a copy of your changes before you upgrade.'] = 'Du er altid fri til at ændre revision scripts selv, der passer til dine specifikke krav. Du bliver nødt til at (re) indarbejde disse ændringer, når du opgraderer som de vil blive overskrevet af standard scripts. Jeg foreslår at gemme en hovedkopi af dit ændrede script, opgradere Open- Audit, og derefter køre en diffs mellem den nye standard script og dit modificerede script og anvende forskellene. Den revision scripts er indfødte scripts (Windows er VBScript, alle andre er Bash). Enkel og nem at ændre - bare sørg for at have en kopi af dine ændringer, før du opgraderer.';

$GLOBALS["lang"]['You are running version'] = 'Du kører version';

$GLOBALS["lang"]['You can access the collection using the normal Open-AudIT JSON based API. Just like any other collection. Please see'] = 'Du kan få adgang til samlingen ved hjælp af den normale Open- Audit JSON baseret API. Ligesom enhver anden samling. Se venligst';

$GLOBALS["lang"]['You can also'] = 'Du kan også';

$GLOBALS["lang"]['You can also see at the bottom of the page a table showing the devices the changes will be applied to.'] = 'Du kan også se nederst på siden en tabel, der viser de enheder, ændringerne vil blive anvendt på.';

$GLOBALS["lang"]['You can also specify properties using the below format.'] = 'Du kan også angive egenskaber ved hjælp af nedenstående format.';

$GLOBALS["lang"]['You can always run the Firstwave VM on your virtual infrastructure (ESX, Azure, et al). The Firstwave VM runs Debian linux and is free from OS licensing concerns and limitations. Or install on your own Linux distro of choice. We support Redhat 9, Ubuntu 20.04, 22.04 and 24.04 as well as Debian 11 and 12.'] = 'Du kan altid køre Firstwave VM på din virtuelle infrastruktur (ESX, Azure, et al). Firstwave VM kører Debian linux og er fri for OS-licensproblemer og begrænsninger. Eller installere på din egen Linux ditro valg. Vi støtter Redhat 9, Ubuntu 20.04, 22.04 og 24.04 samt Debian 11 og 12.';

$GLOBALS["lang"]['You can assign devices to a location automatically using'] = 'Du kan tildele enheder til et sted automatisk ved hjælp af';

$GLOBALS["lang"]['You can assign devices using custom'] = 'Du kan tildele enheder ved hjælp af brugerdefinerede';

$GLOBALS["lang"]['You can audit a remote machine without the using the actual Administrator account by creating a registry key. Create the below key on every machine to be audited and make sure the user credentials used is a member of the Administrators group.'] = 'Du kan revidere en fjern maskine uden at bruge den faktiske Administrator konto ved at oprette en registreringsdatabase nøgle. Opret nedenstående nøgle på hver maskine, der skal revideres, og sørg for, at de bruger legitimationsoplysninger, der anvendes, er medlem af Administrationsgruppen.';

$GLOBALS["lang"]['You can certainly run a discovery without any valid credentials on the devices within the network, however, the information retrieved will be a very small subset of what Open-AudIT has the ability to retrieve <i>with</i> credentials.'] = 'Du kan helt sikkert køre en opdagelse uden nogen gyldig legitimation på enheder inden for netværket, men de oplysninger, der hentes vil være en meget lille delmængde af, hvad Open- Audit har evnen til at hente <i>med</i> legitimation.';

$GLOBALS["lang"]['You can create a baseline, run it against a group of devices and view the results, add scheduled execution, add more tables for comparison (currently only software, netstat ports and users are enabled), in place baseline editing, archiving of results and more.'] = 'Du kan oprette en baseline, køre det mod en gruppe af enheder og se resultaterne, tilføje skemalagt udførelse, tilføje flere tabeller til sammenligning (i øjeblikket kun software, netstat porte og brugere er aktiveret), på plads baseline redigering, arkivering af resultater og meget mere.';

$GLOBALS["lang"]['You can create a script with all the options for any of the existing audit scripts - not just Windows. AIX, ESX, Linux, OSX and Windows are all covered.'] = 'Du kan oprette et script med alle de muligheder for nogen af de eksisterende revision scripts - ikke bare Windows. AIX, ESX, Linux, OSX og Windows er alle dækket.';

$GLOBALS["lang"]['You can customize the entire integration down to which system (NMIS or Open-AudIT) is the authority on a per field basis. There are options to create and/or update devices in Open-AudIT or NMIS. Should we run a discovery on a created or updated device and so much more. There are explanations for each item on the right side of the page.'] = 'Du kan tilpasse hele integrationen ned til hvilket system (NMIS eller Open- Audit) er myndigheden pr. felt. Der er muligheder for at oprette og / eller opdatere enheder i Open- Audit eller NMIS. Skal vi køre en opdagelse på en oprettet eller opdateret enhed og så meget mere. Der er forklaringer for hvert punkt på højre side af siden.';

$GLOBALS["lang"]['You can define an application and associate a device to this application. A device may be associated to more than one application. An application may be associated to more than one device.'] = 'Du kan definere et program og knytte en enhed til dette program. En anordning kan være forbundet med mere end én applikation. En applikation kan være forbundet med mere end én anordning.';

$GLOBALS["lang"]['You can edit the value of the Additional Field for each individual device on the device details page. View the device details screen, open the section containing the field and (if you have'] = 'Du kan redigere værdien af ekstra felt for hver enkelt enhed på siden enhedsdetaljer. Vis skærmen med enhedsdetaljer, åbn afsnittet der indeholder feltet og (hvis du har';

$GLOBALS["lang"]['You can limit the Device Seed Discovery to fall within a strict set of parameters, including: <i>Restrict to Subnet</i> and <i>Restrict to Private</i>'] = 'Du kan begrænse Device Seed Discovery til at falde inden for et strengt sæt parametre, herunder: <i>Begræns til subnet</i> og <i>Begræns til privat</i>';

$GLOBALS["lang"]['You can manually assign devices using'] = 'Du kan manuelt tildele enheder ved hjælp af';

$GLOBALS["lang"]['You can override this by providing the format option in the URL.'] = 'Du kan tilsidesætte dette ved at angive formatet i URL \'en.';

$GLOBALS["lang"]['You can select individual devices by clicking their check-boxes on the right side or selecting all devices clicking the checkbox on the top right of the table (underneath the Edit button that looks like a pencil).'] = 'Du kan vælge individuelle enheder ved at klikke på deres afkrydsningsfelter i højre side eller vælge alle enheder, der klikker på afkrydsningsfeltet øverst til højre i tabellen (under knappen Redigér der ligner en blyant).';

$GLOBALS["lang"]['You can select the devices to be integrated by choosing any attribute in the system (device) table and matching (see menu → Admin → Database → List Tables → system for a list of fields). An attribute match can only match a single value.'] = 'Du kan vælge de enheder, der skal integreres ved at vælge en attribut i systemet (enhed) tabel og matching (se menu → Admin → Database → Liste tabeller → system for en liste over felter). En attribut match kan kun matche en enkelt værdi.';

$GLOBALS["lang"]['You can turn any server into a collector by going to menu -> Admin -> Collectors -> Make this install a Collector. You will need credentials to log on to the server this install will report in to.'] = 'Du kan gøre enhver server til en samler ved at gå til menu - > Admin - > Samlere - > Gør dette installere en Collector. Du skal bruge legitimationer til at logge på serveren denne installation vil rapportere ind til.';

$GLOBALS["lang"]['You can view by clicking on the blue view icon. You can also edit or delete if you have permissions.'] = 'Du kan se ved at klikke på ikonet med blå visning. Du kan også redigere eller slette hvis du har rettigheder.';

$GLOBALS["lang"]['You do not have the PHP MBString extension installed. This extension is required.'] = 'Du har ikke PHP MBString udvidelse installeret. Denne udvidelse er nødvendig.';

$GLOBALS["lang"]['You do not have the PHP SNMP extension installed. This extension is highly recommended.'] = 'Du har ikke PHP SNMP udvidelse installeret. Denne udvidelse er stærkt anbefales.';

$GLOBALS["lang"]['You may want to copy and paste this URL in an email to your staff.'] = 'Du kan ønske at kopiere og indsætte denne URL i en e-mail til dit personale.';

$GLOBALS["lang"]['You may wish to have Active Directory or OpenLDAP authenticate your users, but not provide authorization. To do this, make sure <i>Use for Authentication</i> is set to Y and <i>Use for Roles</i> is set to N. The credentials will be validated by LDAP, but you will need to have the user already created and assigned Roles in Open-AudIT. This also <i>automatically</i> applies to'] = 'Du kan ønske at have Active Directory eller OpenLDAP autentificere dine brugere, men ikke give godkendelse. For at gøre dette, sørg for <i>Brug til autentificering</i> er indstillet til Y og <i>Anvendelse til ruller</i> er indstillet til N. De legitimation vil blive valideret af LDAP, men du bliver nødt til at have brugeren allerede oprettet og tildelt Roles i Open- Audit. Det samme gælder <i>automatisk</i> gælder for';

$GLOBALS["lang"]['You might have noticed these match rules are for items that might not be globally unique. Some examples:'] = 'Du har måske bemærket disse match regler er for elementer, der måske ikke er globalt unikke. Nogle eksempler:';

$GLOBALS["lang"]['You must delete your existing license before adding a new license.'] = 'Du skal slette din eksisterende licens, før du tilføjer en ny licens.';

$GLOBALS["lang"]['You must have working SSH credentials to execute a benchmark. The following Operating Systems are currently supported: Centos 7, Debian 12, Redhat 7, Redhat 8, Redhat 9, SLES 15, Ubuntu 20.04, Ubuntu 22.04. We plan to expand on these with further releases.'] = 'Du skal have arbejdet SSH legitimation til at udføre en benchmark. Følgende operativsystemer understøttes i øjeblikket: Centos 7, Debian 12, Redhat 7, Redhat 8, Redhat 9, SLES 15, Ubuntu 20.04, Ubuntu 22.04. Vi planlægger at udvide disse med yderligere udgivelser.';

$GLOBALS["lang"]['You should copy and paste the entire file into the textbox. In the case below, copy ALL the text.'] = 'Du bør kopiere og indsætte hele filen i tekstboksen. I nedenstående tilfælde kopieres ALL teksten.';

$GLOBALS["lang"]['You should not include the edited_by and edited_date fields. These will be automatically set.'] = 'Du bør ikke inkludere feltet redigeret _ by og redigeret _ date. Disse vil blive sat automatisk.';

$GLOBALS["lang"]['You should only change the second sentence of text, the'] = 'De bør kun ændre anden sætning i teksten,';

$GLOBALS["lang"]['You should substitute the required column (eg, org_id) for ATTRIBUTE_NAME.'] = 'Du bør erstatte den krævede kolonne (fx org _ id) for ATTRIBUTTE _ NAME.';

$GLOBALS["lang"]['You should use a header line containing the names of the columns you wish to populate, then your data lines below that.'] = 'Du bør bruge en header linje, der indeholder navnene på de kolonner, du ønsker at befolke, så dine data linjer nedenfor.';

$GLOBALS["lang"]['You should use only those tables that contain attributes you need. I usually use a left join. For example'] = 'Du bør kun bruge de tabeller, der indeholder attributter, du har brug for. Jeg plejer at bruge venstre. For eksempel';

$GLOBALS["lang"]['You will need a'] = 'Du får brug for en';

$GLOBALS["lang"]['You will need the ports for WMI on the Windows firewall opened on each target Windows computer. For Windows Core servers, ensure you allow the firewall connections as per'] = 'Du skal bruge portene til WMI på Windows firewall åbnet på hver mål Windows-computer. Til Windows Kerneservere, sikre, at du tillader firewall-forbindelser som pr';

$GLOBALS["lang"]['You will see a list of'] = 'Du vil se en liste over';

$GLOBALS["lang"]['YouTube Tutorials'] = 'YouTube Tutorials';

$GLOBALS["lang"]['Your AWS EC2 API key.'] = 'Din AWS EC2 API nøgle.';

$GLOBALS["lang"]['Your Google Compute credentials as JSON.'] = 'Din Google Compute-legitimation som JSON.';

$GLOBALS["lang"]['Your Host is'] = 'Din Værten er';

$GLOBALS["lang"]['Your Licenses'] = 'Dine licenser';

$GLOBALS["lang"]['Your Microsoft Azure Client ID.'] = 'Dit Microsoft Azure-klient-id.';

$GLOBALS["lang"]['Your Microsoft Azure Client Secret.'] = 'Din Microsoft Azure klient Secret.';

$GLOBALS["lang"]['Your Microsoft Azure Subscription ID.'] = 'Dit Microsoft Azure Abonnement- id.';

$GLOBALS["lang"]['Your Microsoft Azure Tennant ID.'] = 'Dit Microsoft Azure Tennant-id.';

$GLOBALS["lang"]['Your PHP version is'] = 'Din PHP version er';

$GLOBALS["lang"]['Your SQL to select attributes that will populate this query.'] = 'Din SQL til at vælge attributter, der vil befolke denne forespørgsel.';

$GLOBALS["lang"]['Your SQL to select devices that will populate this group.'] = 'Din SQL til at vælge enheder, der vil befolke denne gruppe.';

$GLOBALS["lang"]['Your SSH key.'] = 'Din SSH nøgle.';

$GLOBALS["lang"]['Your access credentials, as per that clouds native API.'] = 'Din adgang legitimation, som pr at skyer indfødte API.';

$GLOBALS["lang"]['Your data is your data. You can extract it any time you like. We even helpfully provide exports to CSV, JSON and XML. And we have a JSON API. And you can write custom reports and have those output in CSV, XML, and JSON! Again, it is your data - not anyone else. You can be confident that the security of your data is in your hands.'] = 'Dine data er dine data. Du kan udtrække det når som helst. Vi endda hjælpsomt levere eksport til CSV, JSON og XML. Og vi har en JSON API. Og du kan skrive brugerdefinerede rapporter og har disse output i CSV, XML, og JSON! Igen er det dine data - ikke nogen andre. Du kan være sikker på, at sikkerheden af dine data er i dine hænder.';

$GLOBALS["lang"]['Your database platform is'] = 'Din databaseplatform er';

$GLOBALS["lang"]['Your description of the status of this connection (provisioned, retired, etc).'] = 'Din beskrivelse af denne forbindelses status (henlæggelser, pensionerede osv.).';

$GLOBALS["lang"]['Your description of this item.'] = 'Din beskrivelse af dette punkt.';

$GLOBALS["lang"]['Your generic name for this piece of software'] = 'Dit generiske navn for dette stykke software';

$GLOBALS["lang"]['Your generic version for this piece of software'] = 'Din generiske version til dette stykke software';

$GLOBALS["lang"]['Your user should now be able to logon by clicking the <i>Logon with Entra</i> button on the Open-AudIT logon page. As mentioned above, if the logon fails, please check the logfile and verify the users <i>preferred username</i>.<br><br>And that should be all there is too it. Now your users should have one less set of credentials to remember!<br><br>As always, if you have troubles with this feature, please email'] = 'Din bruger skal nu kunne logge på ved at klikke på <i>Logon med Entra</i> knappen på Open- Audit- logon- siden. Som nævnt ovenfor, hvis logon mislykkes, skal du kontrollere logfilen og kontrollere brugerne <i>foretrukne brugernavn</i>.<br/><br/>Og det burde der også være. Nu dine brugere skal have en mindre sæt af legitimationsoplysninger at huske!<br/><br/>Som altid, hvis du har problemer med denne funktion, bedes du e-mail';

$GLOBALS["lang"]['Your user should now be able to logon by clicking the <i>Logon with OKTA</i> button on the Open-AudIT logon page. As mentioned above, if the logon fails, please check the logfile and verify the users <i>name</i>.<br><br>And that should be all there is too it. Now your users should have one less set of credentials to remember!<br><br>As always, if you have troubles with this feature, please email'] = 'Din bruger skal nu kunne logge på ved at klikke på <i>Logon med OKTA</i> knappen på Open- Audit- logon- siden. Som nævnt ovenfor, hvis logon mislykkes, skal du kontrollere logfilen og kontrollere brugerne <i>navn</i>.<br/><br/>Og det burde der også være. Nu dine brugere skal have en mindre sæt af legitimationsoplysninger at huske!<br/><br/>Som altid, hvis du har problemer med denne funktion, bedes du e-mail';

$GLOBALS["lang"]['Your web server is'] = 'Din webserver er';

$GLOBALS["lang"]['Zambia'] = 'Zambia';

$GLOBALS["lang"]['Zimbabwe'] = 'Zimbabwe';

$GLOBALS["lang"]['a String'] = 'a String';

$GLOBALS["lang"]['active'] = 'aktiv';

$GLOBALS["lang"]['active directory'] = 'aktiv mappe';

$GLOBALS["lang"]['active/active'] = 'aktiv / aktiv';

$GLOBALS["lang"]['active/passive'] = 'aktiv / passiv';

$GLOBALS["lang"]['advertisement'] = 'reklame';

$GLOBALS["lang"]['alert'] = 'alarm';

$GLOBALS["lang"]['all'] = 'alle';

$GLOBALS["lang"]['allocated'] = 'tildelt';

$GLOBALS["lang"]['amazon'] = 'amazon';

$GLOBALS["lang"]['an Integer'] = 'et heltal';

$GLOBALS["lang"]['and'] = 'og';

$GLOBALS["lang"]['and / or'] = 'og / eller';

$GLOBALS["lang"]['and a support ticket will be created and actioned.'] = 'og en supportbillet vil blive oprettet og aktiveret.';

$GLOBALS["lang"]['and another'] = 'og en anden';

$GLOBALS["lang"]['and download the Latest Release self-installer. You may need to scroll down the page to find it.'] = 'og downloade Seneste Udgivelsesself-installer. Du kan være nødt til at rulle ned siden for at finde det.';

$GLOBALS["lang"]['and go to Applications -> Enterprise Applications (far left menu), then click <i>New application</i>.'] = 'og gå til Programmer - > Enterprise Programmer (langt til venstre menu), og klik derefter på <i>Ny ansøgning</i>.';

$GLOBALS["lang"]['and its current time is'] = 'og dens nuværende tid er';

$GLOBALS["lang"]['and looks for a warranty expiration date prior to today.'] = 'og leder efter en garanti udløbsdato før i dag.';

$GLOBALS["lang"]['and review what is possible.'] = 'og gennemgå, hvad der er muligt.';

$GLOBALS["lang"]['and the Sign-out redirect URI being'] = 'og Sign-out omdirigere URI er';

$GLOBALS["lang"]['and the final lines will likely be of most interest. These lines should give you the exact point at which the login failed.'] = 'og de endelige linjer vil sandsynligvis være af mest interesse. Disse linjer bør give dig det nøjagtige punkt, hvor login mislykkedes.';

$GLOBALS["lang"]['antivirus'] = 'antivirus';

$GLOBALS["lang"]['application'] = 'ansøgning';

$GLOBALS["lang"]['approved'] = 'godkendt';

$GLOBALS["lang"]['are required.'] = 'er påkrævet.';

$GLOBALS["lang"]['are used.'] = 'anvendes.';

$GLOBALS["lang"]['as a device responding on this port.<br>This has caused some customers issues where firewalls respond on behalf of a non-existing device, and hence cause false positive device detection. We now have this attribute available to set per scan.'] = 'som en enhed, der reagerer på denne port.<br/>Dette har forårsaget nogle kunder problemer, hvor firewalls reagere på vegne af en ikke-eksisterende enhed, og dermed forårsage falsk positiv enhed opdagelse. Vi har nu denne attribut til rådighed til at indstille per scanning.';

$GLOBALS["lang"]['as the reference point and filters out all virtual machines via a check of the system.serial field for VM.'] = 'som referencepunkt og filtrerer alle virtuelle maskiner ud via en kontrol af systemet. seriefelt felt til VM.';

$GLOBALS["lang"]['assuming working and client populated DNS'] = 'Antager arbejder og klient befolket DNS';

$GLOBALS["lang"]['attribute'] = 'attribut';

$GLOBALS["lang"]['auto'] = 'auto';

$GLOBALS["lang"]['backup'] = 'backup';

$GLOBALS["lang"]['banned'] = 'forbudt';

$GLOBALS["lang"]['blog'] = 'blog';

$GLOBALS["lang"]['blue'] = 'blå';

$GLOBALS["lang"]['bottom'] = 'bund';

$GLOBALS["lang"]['building'] = 'bygning';

$GLOBALS["lang"]['can be used for user authentication (is the users name and password correct) as well as user authorization (what roles and orgs does a user have).<br><br>If a user is not in the configured LDAP but is in Open-AudIT (eg: the <i>admin</i> user), Open-AudIT will fallback to using itself for both authentication and authorization.<br><br>Open-AudIT uses specific LDAP groups for roles and orgs. A user must be a direct member of these group(s) in order for Open-AudIT to determine that users access.<br><br>When configured correctly, LDAP use can completely remove the need to create users in Open-AudIT. Simply configure Open-AudIT to use LDAP for both authentication and authorization. If the user does not exist in Open-AudIT but does exist in LDAP and their credentials are correct and they are a member of the required groups Open-AudIT will create the user account automatically.'] = 'kan bruges til brugerautentificering (er brugernes navn og adgangskode korrekt) samt brugergodkendelse (hvilke roller og orgs gør en bruger har).<br/><br/>Hvis en bruger ikke er i den konfigurerede LDAP, men er i Open- Audit (fx: <i>admin</i> bruger), vil Open- Audit falde tilbage til at bruge sig selv til både godkendelse og godkendelse.<br/><br/>Open- Aud IT bruger specifikke LDAP-grupper til roller og orger. En bruger skal være et direkte medlem af disse grupper for at Open- Audit at afgøre, at brugerne adgang.<br/><br/>Når konfigureret korrekt, LDAP brug kan helt fjerne behovet for at oprette brugere i Open- Audit. Du skal blot indstille Open- Audit til at bruge LDAP til både godkendelse og godkendelse. Hvis brugeren ikke findes i Open- Audit, men findes i LDAP og deres legitimation er korrekte, og de er medlem af de ønskede grupper Open- Audit vil oprette brugerkontoen automatisk.';

$GLOBALS["lang"]['can now retrieve details about a file or directory of files and monitor these files for changes as per other attributes in the Open-AudIT database. This feature works out of the box for Linux Open-AudIT servers, but needs a change to the service account name under a Windows Open-AudIT server. Supported clients are Windows and Linux.'] = 'kan nu hente oplysninger om en fil eller mappe af filer og overvåge disse filer for ændringer som pr andre attributter i Open- Audit database. Denne funktion fungerer ud af boksen for Linux Open- Audit-servere, men har brug for en ændring til service-konto navn under en Windows Open- Audit-server. Understøttede klienter er Windows og Linux.';

$GLOBALS["lang"]['changed'] = 'ændret';

$GLOBALS["lang"]['chosen. From there if a port for WMI, SSH or SNMP is detected responding the device is further queried using '] = 'valgt. Derfra, hvis en port til WMI, SSH eller SNMP detekteres svare enheden er yderligere forespurgt ved hjælp af ';

$GLOBALS["lang"]['cloud'] = 'cloud';

$GLOBALS["lang"]['code'] = 'kode';

$GLOBALS["lang"]['collections and details pages is an icon to execute.'] = 'samlinger og detaljer sider er et ikon at udføre.';

$GLOBALS["lang"]['collector'] = 'opkøber';

$GLOBALS["lang"]['collectors'] = 'samlere';

$GLOBALS["lang"]['column'] = 'kolonne';

$GLOBALS["lang"]['column will contain either <i>y</i> or <i>n</i>. This indicates if this row is currently present on the device. For example software may be installed (which would result in <i>software.current = y</i>), but on a subsequent audit it may not be detected. Open-AudIT will then change this rows current attribute to <i>n</i>.'] = 'kolonne vil indeholde enten <i>y</i> eller <i>n</i>. Dette angiver om denne række i øjeblikket er til stede på enheden. For eksempel kan software installeres (hvilket ville resultere i <i>software.current = y</i>), men ved en efterfølgende revision kan det ikke påvises. Open- Audit vil derefter ændre denne række nuværende attribut til <i>n</i>.';

$GLOBALS["lang"]['column. The'] = 'kolonne. Den';

$GLOBALS["lang"]['compute'] = 'beregne';

$GLOBALS["lang"]['config'] = 'config';

$GLOBALS["lang"]['console'] = 'konsol';

$GLOBALS["lang"]['contains'] = 'indeholder';

$GLOBALS["lang"]['create'] = 'oprette';

$GLOBALS["lang"]['created'] = 'oprettet';

$GLOBALS["lang"]['credentials'] = 'mandater';

$GLOBALS["lang"]['critical'] = 'kritisk';

$GLOBALS["lang"]['cve'] = 'cve';

$GLOBALS["lang"]['database'] = 'database';

$GLOBALS["lang"]['debug'] = 'debug';

$GLOBALS["lang"]['delegated'] = 'uddelegeret';

$GLOBALS["lang"]['delete'] = 'Slet';

$GLOBALS["lang"]['deleted'] = 'slettet';

$GLOBALS["lang"]['denied'] = 'nægtet';

$GLOBALS["lang"]['details'] = 'detaljer';

$GLOBALS["lang"]['devices'] = 'anordninger';

$GLOBALS["lang"]['digitalocean'] = 'digitalitalozid';

$GLOBALS["lang"]['discoveries'] = 'opdagelser';

$GLOBALS["lang"]['documentation for further details.'] = 'dokumentation for yderligere oplysninger.';

$GLOBALS["lang"]['does <strong>not</strong> provide vulnerability reports for the following'] = 'gør <strong>ikke</strong> forelægge sårbarhedsrapporter for følgende:';

$GLOBALS["lang"]['does not equal'] = 'ikke er lig med';

$GLOBALS["lang"]['emergency'] = 'nødsituation';

$GLOBALS["lang"]['entra'] = 'entra';

$GLOBALS["lang"]['equals'] = 'er';

$GLOBALS["lang"]['error'] = 'fejl';

$GLOBALS["lang"]['established'] = 'etableret';

$GLOBALS["lang"]['excluded'] = 'Udelukkende';

$GLOBALS["lang"]['expired'] = 'udløbet';

$GLOBALS["lang"]['extreme - Without which, the organisation would fail.

very high - Functions that are essential for the organisations survival and must be restored immediately.

high - Important functions that should be restored quickly but may have a slightly longer recovery time.

medium - Functions that are necessary but can tolerate longer downtime.

low - Non-essential functions that can be delayed without significant impact.

unassigned - The default until set.'] = 'extrem - Uden hvilken, ville organisationen mislykkes.

meget høj - funktioner, der er afgørende for organisationerne overlevelse og skal genoprettes straks.

høj - Vigtige funktioner, der bør gendannes hurtigt, men kan have en lidt længere helbredelsestid.

medium - Funktioner, der er nødvendige, men kan tåle længere nedetid.

lav - Ikke-væsentlige funktioner, der kan forsinkes uden væsentlig indvirkning.

ikke tildelt - Standard indtil sæt.';

$GLOBALS["lang"]['fail'] = 'mislykkes';

$GLOBALS["lang"]['false'] = 'falsk';

$GLOBALS["lang"]['file'] = 'fil';

$GLOBALS["lang"]['firewall'] = 'firewall';

$GLOBALS["lang"]['first'] = 'første';

$GLOBALS["lang"]['fixed'] = 'fast';

$GLOBALS["lang"]['floor'] = 'gulv';

$GLOBALS["lang"]['for'] = 'til';

$GLOBALS["lang"]['for authentication'] = 'for godkendelse';

$GLOBALS["lang"]['for this information.'] = 'til denne oplysning.';

$GLOBALS["lang"]['from Audit Script Result'] = 'fra revisionsscriptresultat';

$GLOBALS["lang"]['from NMIS'] = 'fra NMIS';

$GLOBALS["lang"]['from address LocalHost (Using LRPC) running in the application container'] = 'fra adresse LocalHost (ved hjælp af LRPC), der kører i programbeholderen';

$GLOBALS["lang"]['front'] = 'front';

$GLOBALS["lang"]['front-left'] = 'Forside-venstre';

$GLOBALS["lang"]['front-right'] = 'Forside-højre';

$GLOBALS["lang"]['github'] = 'github';

$GLOBALS["lang"]['google'] = 'google';

$GLOBALS["lang"]['greater or equals'] = 'større eller lig med';

$GLOBALS["lang"]['greater than'] = 'større end';

$GLOBALS["lang"]['group'] = 'gruppe';

$GLOBALS["lang"]['has not been set'] = 'ikke sat';

$GLOBALS["lang"]['have a working reverse DNS resolvable IP to the target Windows PC.'] = 'har en fungerende omvendt DNS kan løses IP til målet Windows PC.';

$GLOBALS["lang"]['have the ability to be executed. On the'] = 'have evnen til at blive henrettet. På';

$GLOBALS["lang"]['head'] = 'hoved';

$GLOBALS["lang"]['here'] = 'her';

$GLOBALS["lang"]['high availability'] = 'høj tilgængelighed';

$GLOBALS["lang"]['howto'] = 'howto';

$GLOBALS["lang"]['if you clone a Linux virtual machine, unless you manually regenerate this (and in my experience, people do not) it will remain the same.'] = 'hvis du kloner en virtuel Linux-maskine, medmindre du manuelt regenererer dette (og efter min erfaring, folk ikke) vil det forblive det samme.';

$GLOBALS["lang"]['ignored'] = 'ignoreret';

$GLOBALS["lang"]['import the example device data'] = 'importere eksempelenhedsdata';

$GLOBALS["lang"]['in'] = 'til';

$GLOBALS["lang"]['in Enterprise.'] = 'i Enterprise.';

$GLOBALS["lang"]['in Inputs can have the following values.'] = 'i Input kan have følgende værdier.';

$GLOBALS["lang"]['in Outputs can have the following values.'] = 'i Output kan have følgende værdier.';

$GLOBALS["lang"]['inactive'] = 'inaktiv';

$GLOBALS["lang"]['incomplete'] = 'ufuldstændig';

$GLOBALS["lang"]['info'] = 'info';

$GLOBALS["lang"]['installer will test for the presence of Nmap in its standard install locations of'] = 'Installator vil teste for tilstedeværelsen af Nmap i sin standard installation steder';

$GLOBALS["lang"]['int, text, bool (y/n), etc'] = 'int, text, bool (y / n), etc.';

$GLOBALS["lang"]['is U.S. standard maintained by National Institute of Standards and Technology'] = 'er US standard vedligeholdes af National Institute of Standards and Technology';

$GLOBALS["lang"]['is an international standard for managing information security. It provides a framework for establishing, implementing, maintaining, and continually improving an Information Security Management System (ISMS).'] = 'er en international standard for forvaltning af informationssikkerhed. Den udgør en ramme for etablering, gennemførelse, vedligeholdelse og løbende forbedring af et system til forvaltning af informationssikkerhed (ISMS).';

$GLOBALS["lang"]['is based upon'] = 'er baseret på';

$GLOBALS["lang"]['is licensed to'] = 'er licenseret til';

$GLOBALS["lang"]['is next on the list and Open-AudIT can use password and key authentication. Open-AudIT can also use a sudo enabled user as opposed to the root use directly (although it can also use root). For best results, the root user or a sudo enabled user should be used (see Auditing Linux without root and Target Client Configuration on the wiki). Windows devices can also run ssh, however if Open-AudIT detects this it will stop the SSH queries and instead use WMI (assuming working WMI credentials).'] = 'er næste på listen og Open- Audit kan bruge adgangskode og nøgle godkendelse. Open- Audit kan også bruge en sudo aktiveret bruger i modsætning til root brug direkte (selv om det også kan bruge root). For de bedste resultater, skal root-brugeren eller en sudo aktiveret bruger bruges (se Auditing Linux uden root og Target klientindstilling på wikien). Windows-enheder kan også køre ssh, men hvis Open- Audit registrerer dette, vil det stoppe SSH forespørgsler og i stedet bruge WMI (under forudsætning af at arbejde WMI legitimationsoplysninger).';

$GLOBALS["lang"]['is the link to the'] = 'er forbindelsen til';

$GLOBALS["lang"]['item to view the specific tables and their columns. This will enable you to find exactly what you need, rather than trawling through the MySQL console of the schema creation script.'] = 'post til at se de specifikke tabeller og deres kolonner. Dette vil gøre det muligt for dig at finde præcis, hvad du har brug for, snarere end trawling gennem MySQL konsol af skema kreation script.';

$GLOBALS["lang"]['key required to retrieve lat/long and display map. See'] = 'nøgle kræves for at hente lat / lang og vise kort. Se';

$GLOBALS["lang"]['left'] = 'venstre';

$GLOBALS["lang"]['less or equals'] = 'mindre eller lig med';

$GLOBALS["lang"]['less than'] = 'under';

$GLOBALS["lang"]['license'] = 'licens';

$GLOBALS["lang"]['licenses'] = 'licenser';

$GLOBALS["lang"]['like'] = 'som';

$GLOBALS["lang"]['line'] = 'linje';

$GLOBALS["lang"]['list'] = 'liste';

$GLOBALS["lang"]['list View, using the Create button'] = 'liste Vis, ved hjælp af knappen Opret';

$GLOBALS["lang"]['load balancing'] = 'lastafbalancering';

$GLOBALS["lang"]['location'] = 'placering';

$GLOBALS["lang"]['locations'] = 'steder';

$GLOBALS["lang"]['managed'] = 'administreret';

$GLOBALS["lang"]['methods'] = 'Metoder';

$GLOBALS["lang"]['microsoft'] = 'microsoft';

$GLOBALS["lang"]['mount point'] = 'Monteringspunkt';

$GLOBALS["lang"]['must'] = 'skal';

$GLOBALS["lang"]['network'] = 'netværk';

$GLOBALS["lang"]['news'] = 'nyheder';

$GLOBALS["lang"]['no'] = 'ng';

$GLOBALS["lang"]['node'] = 'node';

$GLOBALS["lang"]['none'] = 'ingen';

$GLOBALS["lang"]['normal'] = 'normal';

$GLOBALS["lang"]['not applicable'] = 'Ikke relevant';

$GLOBALS["lang"]['not in'] = 'ikke i';

$GLOBALS["lang"]['not like'] = 'ikke som';

$GLOBALS["lang"]['notice'] = 'varsel';

$GLOBALS["lang"]['notification'] = 'meddelelse';

$GLOBALS["lang"]['okta'] = 'okta';

$GLOBALS["lang"]['on devices where'] = 'på anordninger, hvor';

$GLOBALS["lang"]['openldap'] = 'openldap';

$GLOBALS["lang"]['optimized'] = 'optimeret';

$GLOBALS["lang"]['optionally '] = 'valgfrit ';

$GLOBALS["lang"]['or'] = 'eller';

$GLOBALS["lang"]['or the GitHub page at'] = 'eller GitHub siden på';

$GLOBALS["lang"]['other'] = 'andet';

$GLOBALS["lang"]['package'] = 'pakning';

$GLOBALS["lang"]['page. Export your LDAP server from menu -> Admin -> LDAP Servers -> Details to JSON and save and include this data as well.'] = 'Side. Eksportér din LDAP- server fra menuen - > Admin - > LDAP- servere - > Detaljer til JSON og gemme og inkludere disse data så godt.';

$GLOBALS["lang"]['partition'] = 'partition';

$GLOBALS["lang"]['pass'] = 'pass';

$GLOBALS["lang"]['pending'] = 'verserende';

$GLOBALS["lang"]['performance'] = 'ydeevne';

$GLOBALS["lang"]['performed'] = 'udført';

$GLOBALS["lang"]['permission'] = 'tilladelse';

$GLOBALS["lang"]['permissions required per endpoint'] = 'krævede tilladelser pr. endepunkt';

$GLOBALS["lang"]['pie'] = 'tærte';

$GLOBALS["lang"]['planning'] = 'planlægning';

$GLOBALS["lang"]['predictable'] = 'forudsigelig';

$GLOBALS["lang"]['query'] = 'forespørgsel';

$GLOBALS["lang"]['rear'] = 'bagside';

$GLOBALS["lang"]['rear-left'] = 'bag- venstre';

$GLOBALS["lang"]['rear-right'] = 'bag- højre';

$GLOBALS["lang"]['regex'] = 'regex';

$GLOBALS["lang"]['release'] = 'frigivelse';

$GLOBALS["lang"]['removed from display, but has been set'] = 'fjernet fra displayet, men er blevet indstillet';

$GLOBALS["lang"]['reserved'] = 'reserveret';

$GLOBALS["lang"]['right'] = 'højre';

$GLOBALS["lang"]['rights) you can click on the field value to edit it.'] = 'rettigheder) kan du klikke på feltværdien for at redigere den.';

$GLOBALS["lang"]['role'] = 'rolle';

$GLOBALS["lang"]['room'] = 'rum';

$GLOBALS["lang"]['row'] = 'række';

$GLOBALS["lang"]['service failed to start due to the following error'] = 'service mislykkedes at starte på grund af følgende fejl';

$GLOBALS["lang"]['so Open-AudIT knows to restrict your query to the appropriate Orgs.'] = 'så Open- Audit ved at begrænse din forespørgsel til de relevante orgs.';

$GLOBALS["lang"]['stand-alone'] = 'stå-alene';

$GLOBALS["lang"]['standard'] = 'standard';

$GLOBALS["lang"]['starts with'] = 'starter med';

$GLOBALS["lang"]['storage'] = 'opbevaring';

$GLOBALS["lang"]['subnet'] = 'subnet';

$GLOBALS["lang"]['table'] = 'tabel';

$GLOBALS["lang"]['table and insert the original rows.'] = 'tabel og indsætte de originale rækker.';

$GLOBALS["lang"]['team'] = 'hold';

$GLOBALS["lang"]['text. The first is the array index and should be left as-is. The index is used in the templates to lookup the translated text.'] = 'tekst. Den første er array indeks og bør efterlades as-is. Indekset bruges i skabelonerne til at slå den oversatte tekst op.';

$GLOBALS["lang"]['then clicking on the details button for the table.'] = 'derefter klikke på knappen detaljer for tabellen.';

$GLOBALS["lang"]['then clicking on the details button for the table. Device details are stored in the'] = 'derefter klikke på knappen detaljer for tabellen. Enhedsoplysninger gemmes i';

$GLOBALS["lang"]['timestamp'] = 'Tidsstempel';

$GLOBALS["lang"]['to'] = 'til';

$GLOBALS["lang"]['to create an item of this type'] = 'at oprette et element af denne type';

$GLOBALS["lang"]['to the URL, you will get the full database entry, including all component tables, of a given device.'] = 'til URL \'en, vil du få den fulde database indgang, herunder alle komponenter tabeller, af en given enhed.';

$GLOBALS["lang"]['to the user'] = 'til brugeren';

$GLOBALS["lang"]['top'] = 'top';

$GLOBALS["lang"]['top secret - Military / Government classification. Disclosure would cause exceptionally grave danger to national security.

secret - Military / Government classification. Disclosure would cause serious damage to national security.

confidential - Military / Government and Private Sector classification. Data that is confidential includes trade secrets, intellectual data, application programming code, and other data that could seriously affect the organization if unauthorized disclosure occurred. Data at this level would be available only to personnel in the organization whose work needs, or is directly related to, the accessed data. Access to confidential data usually requires authorization for each access.

private - Private Sector classification. Data that is private includes any information related to personnel, including human resources records, medical records, and salary information, that is used only within the organization.

sensitive - Military / Government and Private Sector classification. Data that is sensitive includes organizational financial information and requires extra measures to ensure its CIA and accuracy. Disclosure might harm national security.

public - Private Sector classification. Public data is data that is generally shared with the public and would not cause a negative impact on the organization. Examples of public data include how many people work in the organization and what products an organization manufactures or sells.

unclassified - Military / Government classification. Any information that can generally be distributed to the public without any threat to national interest.

unassigned - The default until set.'] = 'tophemmelig - Militær- / regeringsklassifikation. Offentligheden ville udgøre en usædvanlig alvorlig fare for den nationale sikkerhed.

hemmelig - Militær- / regeringsklassifikation. Oplysning vil forårsage alvorlig skade på den nationale sikkerhed.

fortrolig - Klassificering af militær / regering og den private sektor. Data, der er fortrolige, omfatter forretningshemmeligheder, intellektuelle data, applikationsprogrammeringskode, og andre data, der kan påvirke organisationen alvorligt, hvis uautoriseret videregivelse fandt sted. Data på dette niveau vil kun være tilgængelige for personale i organisationen, hvis arbejde har brug for eller er direkte forbundet med de tilgængelige data. Adgang til fortrolige data kræver normalt tilladelse for hver adgang.

privat - klassificering af den private sektor. Data, der er private, omfatter alle oplysninger vedrørende personale, herunder personaleregistre, lægejournaler og lønoplysninger, der kun anvendes i organisationen.

følsomme - Klassificering af militær / regering og den private sektor. Data, der er følsomme omfatter organisatoriske finansielle oplysninger og kræver ekstra foranstaltninger for at sikre sin CIA og nøjagtighed. Oplysninger kan skade den nationale sikkerhed.

offentlig - klassificering af den private sektor. Offentlige data er data, der generelt deles med offentligheden og ikke vil have en negativ indvirkning på organisationen. Eksempler på offentlige data omfatter, hvor mange mennesker der arbejder i organisationen, og hvilke produkter en organisation fremstiller eller sælger.

uklassificeret - militær / regeringsklassifikation. Alle oplysninger, der generelt kan videregives til offentligheden uden nogen trussel mod nationale interesser.

ikke tildelt - Standard indtil sæt.';

$GLOBALS["lang"]['traffic'] = 'trafik';

$GLOBALS["lang"]['true'] = 'true';

$GLOBALS["lang"]['true or false (in JSON context)'] = 'sande eller falske (i JSON-sammenhæng)';

$GLOBALS["lang"]['unallocated'] = 'ikke tildelt';

$GLOBALS["lang"]['unauthorised'] = 'uautoriseret';

$GLOBALS["lang"]['unchanged'] = 'uændret';

$GLOBALS["lang"]['unknown'] = 'ukendt';

$GLOBALS["lang"]['unmanaged'] = 'uforvaltet';

$GLOBALS["lang"]['unused'] = 'ubrugt';

$GLOBALS["lang"]['update'] = 'opdatering';

$GLOBALS["lang"]['uses the data collected from your devices and matches the software installed with the value provided, it counts the matches calculates how many licenses have been used and how many are left. It allows the use of wildcards on the <i>match string</i> field which matches the software.name attribute.'] = 'bruger de data, der er indsamlet fra dine enheder og matcher softwaren installeret med den angivne værdi, det tæller matches beregner, hvor mange licenser der er blevet brugt, og hvor mange der er tilbage. Det giver mulighed for brug af jokertegn på <i>matchstreng</i> felt, der matcher softwaren. navn attribut.';

$GLOBALS["lang"]['using the main menu items.'] = 'bruge de vigtigste menupunkter.';

$GLOBALS["lang"]['valid'] = 'gyldig';

$GLOBALS["lang"]['version'] = 'version';

$GLOBALS["lang"]['virtualisation'] = 'virtualisering';

$GLOBALS["lang"]['warning'] = 'advarsel';

$GLOBALS["lang"]['web'] = 'web';

$GLOBALS["lang"]['with Local and Remote access permissions set.'] = 'med lokale og eksterne adgangstilladelser.';

$GLOBALS["lang"]['with devices::update permission.'] = 'med enheder:: Opdater tilladelse.';

$GLOBALS["lang"]['with the Sign-On Redirect URI being'] = 'med Sign-On omdirigere URI er';

$GLOBALS["lang"]['with the intention of providing simple and intuitive access in a manner familiar to developers. In addition to this API, the web interface will use the same request format and supply some additional actions (eg: HTML forms for creating items).'] = 'med det formål at give enkel og intuitiv adgang på en måde, der er kendt for udviklere. Ud over denne API, vil web-interface bruge samme anmodning format og levere nogle yderligere handlinger (f.eks: HTML-formularer til at skabe elementer).';

$GLOBALS["lang"]['yes'] = 'ja';

$GLOBALS["lang"]['you do not require a HighCharts license to use Firstwave products. License'] = 'du ikke kræver en HighCharts licens til at bruge Firstwave produkter. Licens';

$GLOBALS["lang"]['you will assign any found devices to that Org or Location.'] = 'du vil tildele alle fundne enheder til at Org eller Placering.';

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

