<?php
$GLOBALS["lang"][' Default, currently '] = ' Standard, aktuelt ';

$GLOBALS["lang"][' is now supported with a language file. To change your user to use this language, click '] = ' er nu understøttet med en sprogfil. For at ændre din bruger til at bruge dette sprog, skal du klikke ';

$GLOBALS["lang"][' seconds'] = ' sekunder';

$GLOBALS["lang"]['10 Minutes'] = '10 minutter';

$GLOBALS["lang"]['15 Minutes'] = '15 minutter';

$GLOBALS["lang"]['30 Minutes'] = '30 minutter';

$GLOBALS["lang"]['5 Minutes'] = '5 Protokol';

$GLOBALS["lang"]['<br> <strong>NOTE</strong> - You are accessing this URL from the local Open-AudIT server. The downloaded script will not be able to submit when run on any other machine. If you need to audit other machines, please download the script from any remote machine, not using a browser on the Open-AudIT server itself.'] = '<br/> <strong>BEMÆRKNING</strong> - Du har adgang til denne URL fra den lokale Open- AudiT server. Det downloadede script vil ikke være i stand til at indsende når der køres på nogen anden maskine. Hvis du har brug for at revidere andre maskiner, skal du downloade scriptet fra en fjern maskine, ikke ved hjælp af en browser på Open- Audit server selv.';

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

$GLOBALS["lang"]['A URL to a file to download.'] = 'En URL til en fil at downloade.';

$GLOBALS["lang"]['A calculated field that displays the number of times this piece of software was found on the computers in the selected Org (and its descendants if configured).'] = 'Et beregnet felt, der viser antallet af gange dette stykke software blev fundet på computerne i den valgte Org (og dens efterkommere, hvis konfigureret).';

$GLOBALS["lang"]['A collector is either in Collector or Stand-Alone mode.'] = 'En samler er enten i Collector eller Stand- Alone tilstand.';

$GLOBALS["lang"]['A comma separated list of applicable CVEs.'] = 'En kommaadskilt liste over relevante CVE \'er.';

$GLOBALS["lang"]['A comma separated list of values, one of which can be selected.'] = 'En kommaadskilt liste over værdier, hvoraf en kan vælges.';

$GLOBALS["lang"]['A command to run. When the agent is Windows based, this command is run from within the powershell agent.'] = 'En ordre at løbe. Når agenten er Windows baseret, denne kommando køres fra inde i powershell agent.';

$GLOBALS["lang"]['A list of custom TCP ports to scan (22 is SSH, 135 is WMI, 62078 is iPhone sync).'] = 'En liste over brugerdefinerede TCP-porte til at scanne (22 er SSH, 135 er WMI, 62078 er iPhone sync).';

$GLOBALS["lang"]['A list of custom UDP ports to scan (161 is SNMP).'] = 'En liste over brugerdefinerede UDP-porte til scanning (161 er SNMP).';

$GLOBALS["lang"]['A lower number means it will be applied before other rules.'] = 'Et lavere antal betyder, at det vil blive anvendt før andre regler.';

$GLOBALS["lang"]['A lower number means it will be applied before other rules. The default weight is 100.'] = 'Et lavere antal betyder, at det vil blive anvendt før andre regler. Standardvægten er 100.';

$GLOBALS["lang"]['A password (stored as a hash) that enables logon when using application authentication.'] = 'Et kodeord (gemt som hash), der muliggør logon, når programmet godkendes.';

$GLOBALS["lang"]['A routing domain or address space where the IP addresses and MAC addresses are unique.'] = 'Et routingdomæne eller adresseområde, hvor IP-adresser og MAC-adresser er unikke.';

$GLOBALS["lang"]['A security zone is a administrative domain or policy domain within the Network Domain.'] = 'En sikkerhedszone er et administrativt domæne eller politikdomæne inden for netværksområdet.';

$GLOBALS["lang"]['A short description of the log entry.'] = 'En kort beskrivelse af loggen.';

$GLOBALS["lang"]['A string that matches the <code>software.name</code> attribute. You can use the standard SQL wildcard of percent (%) to match one or more characters.'] = 'En streng der matcher <code>software.name</code> attribut. Du kan bruge standard SQL wildcard af procent (%) til at matche en eller flere tegn.';

$GLOBALS["lang"]['A vulnerability affecting availability may allow attackers to disrupt services, crash systems, or cause denial-of-service (DoS) (None, Low, High).'] = 'En sårbarhed, der påvirker tilgængeligheden, kan give angribere mulighed for at afbryde tjenester, nedbrud systemer, eller forårsage benægtelse-of- service (DoS) (Ingen, lav, høj).';

$GLOBALS["lang"]['A vulnerability affecting confidentiality may allow attackers to read sensitive data, such as personal information, credentials, or proprietary business data (None, Low, High).'] = 'En sårbarhed, der påvirker fortroligheden, kan give angribere mulighed for at læse følsomme data, såsom personlige oplysninger, legitimation eller fortrolige forretningsdata (Ingen, lav, høj).';

$GLOBALS["lang"]['A vulnerability affecting integrity may allow attackers to modify data, inject malicious code, or alter system configurations (None, Low, High).'] = 'En sårbarhed, der påvirker integriteten, kan tillade angribere at ændre data, injicere ondsindet kode eller ændre systemkonfigurationer (Ingen, Lav, Høj).';

$GLOBALS["lang"]['AD Group'] = 'AD Group';

$GLOBALS["lang"]['ADSL, HFC, ISDN, etc.'] = 'ADSL, HFC, ISDN osv.';

$GLOBALS["lang"]['AIX'] = 'AIX';

$GLOBALS["lang"]['ALL IPs'] = 'ALLE IPs';

$GLOBALS["lang"]['API / Web Access'] = 'API / Web Access';

$GLOBALS["lang"]['API Documentation'] = 'API-dokumentation';

$GLOBALS["lang"]['API Key required.'] = 'API nøgle kræves.';

$GLOBALS["lang"]['API Result'] = 'API-resultat';

$GLOBALS["lang"]['About'] = 'Om';

$GLOBALS["lang"]['Accept'] = 'Accepter';

$GLOBALS["lang"]['access_point'] = 'Adgangspunkt';

$GLOBALS["lang"]['Access Point'] = 'Adgangspunkt';

$GLOBALS["lang"]['access_token'] = 'Adgang Token';

$GLOBALS["lang"]['Access Token'] = 'Adgang Token';

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

$GLOBALS["lang"]['Add image'] = 'Tilføj billede';

$GLOBALS["lang"]['additional_items'] = 'Supplerende elementer';

$GLOBALS["lang"]['Additional Items'] = 'Supplerende elementer';

$GLOBALS["lang"]['address'] = 'Adresse';

$GLOBALS["lang"]['Address'] = 'Adresse';

$GLOBALS["lang"]['Admin'] = 'Admin';

$GLOBALS["lang"]['admin_status'] = 'Admin- status';

$GLOBALS["lang"]['Admin Status'] = 'Admin- status';

$GLOBALS["lang"]['advanced'] = 'Avanceret';

$GLOBALS["lang"]['Advanced'] = 'Avanceret';

$GLOBALS["lang"]['Afghanistan'] = 'Afghanistan';

$GLOBALS["lang"]['agents'] = 'Agenter';

$GLOBALS["lang"]['Agents'] = 'Agenter';

$GLOBALS["lang"]['Aggressive'] = 'Aggressive';

$GLOBALS["lang"]['Aland Islands'] = 'Alandsøerne';

$GLOBALS["lang"]['Albania'] = 'Albanien';

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

$GLOBALS["lang"]['Amazon AWS Fields'] = 'Amazon AWS Felter';

$GLOBALS["lang"]['American Samoa'] = 'Amerikansk Samoa';

$GLOBALS["lang"]['An array of <code>benchmarks.id</code>.'] = 'En række af <code>benchmarks.id</code>.';

$GLOBALS["lang"]['An array of <code>devices.id</code>.'] = 'En række af <code>devices.id</code>.';

$GLOBALS["lang"]['An array of object representing external links to more information.'] = 'En række objekter repræsenterer eksterne links til mere information.';

$GLOBALS["lang"]['An encrypted JSON document containing the required attributes depending on the <code>credentials.type</code>.'] = 'Et krypteret JSON-dokument, der indeholder de krævede attributter, afhængigt af <code>credentials.type</code>.';

$GLOBALS["lang"]['An indication of the level of service required by this site.'] = 'En angivelse af det serviceniveau, som dette websted kræver.';

$GLOBALS["lang"]['An internal field that indicates if the discovery has completed.'] = 'Et internt felt, der angiver, om opdagelsen er afsluttet.';

$GLOBALS["lang"]['An optional GeoCode'] = 'En valgfri GeoCode';

$GLOBALS["lang"]['An optional password to use sudo.'] = 'En valgfri adgangskode at bruge sudo.';

$GLOBALS["lang"]['Andorra'] = 'Andorra';

$GLOBALS["lang"]['Angola'] = 'Angola';

$GLOBALS["lang"]['Anguilla'] = 'Anguilla';

$GLOBALS["lang"]['Antarctica'] = 'Antarktis';

$GLOBALS["lang"]['AntiVirus'] = 'Antivirus';

$GLOBALS["lang"]['Antigua and Barbuda'] = 'Antigua og Barbuda';

$GLOBALS["lang"]['Antivirus'] = 'Antivirus';

$GLOBALS["lang"]['Any TCP ports (comma seperated, no spaces) you wish to exclude from this discovery. Only available when using Nmap 7+.'] = 'Enhver TCP porte (komma seperated, ingen mellemrum) du ønsker at udelukke fra denne opdagelse. Kun tilgængelig ved brug af Nmap 7 +.';

$GLOBALS["lang"]['Any UDP ports (comma seperated, no spaces) you wish to exclude from this discovery. Only available when using Nmap 7+.'] = 'Enhver UDP-porte (komma seperated, ingen mellemrum) du ønsker at udelukke fra denne opdagelse. Kun tilgængelig ved brug af Nmap 7 +.';

$GLOBALS["lang"]['Any additional documentation you need.'] = 'Yderligere dokumentation.';

$GLOBALS["lang"]['Any additional notes you care to make.'] = 'Eventuelle yderligere noter du ønsker at gøre.';

$GLOBALS["lang"]['Any devices will be assigned to this Org when they run their audit script (if set). Links to <code>orgs.id</code>.'] = 'Enhver enhed vil blive tildelt denne Org, når de kører deres revision script (hvis sæt). Links til <code>orgs.id</code>.';

$GLOBALS["lang"]['Any discovered devices will be assigned to this Location if set. Links to <code>locations.id</code>.'] = 'Eventuelle opdagede enheder vil blive tildelt denne placering, hvis sæt. Links til <code>locations.id</code>.';

$GLOBALS["lang"]['Any discovered devices will be assigned to this Location when they run their audit script (if set). Links to <code>locations.id</code>.'] = 'Enhver opdaget enhed vil blive tildelt dette sted, når de kører deres revision script (hvis sæt). Links til <code>locations.id</code>.';

$GLOBALS["lang"]['Any discovered devices will be assigned to this Org if set. If not set, they are assigned to the <code>org_id</code> of this discovery. Links to <code>orgs.id</code>.'] = 'Enhver opdaget enhed vil blive tildelt denne Org hvis sæt. Hvis de ikke er indstillet, er de tildelt <code>org_id</code> af denne opdagelse. Links til <code>orgs.id</code>.';

$GLOBALS["lang"]['Any required filter. NOTE: When type = traffic, this represents the font-awesome icon.'] = 'Ethvert påkrævet filter. BEMÆRK: Når type = trafik, repræsenterer dette font- awesome ikon.';

$GLOBALS["lang"]['Any specific TCP ports you wish tested (comma seperated, no spaces).'] = 'Enhver specifik TCP-porte, du ønsker testet (komma seperated, ingen mellemrum).';

$GLOBALS["lang"]['Any specific UDP ports you wish tested (comma seperated, no spaces).'] = 'Eventuelle specifikke UDP-porte du ønsker testet (kommaer seperated, ingen mellemrum).';

$GLOBALS["lang"]['Application'] = 'Anvendelse';

$GLOBALS["lang"]['application_id'] = 'AnsøgningsID';

$GLOBALS["lang"]['Application ID'] = 'AnsøgningsID';

$GLOBALS["lang"]['Application Licenses'] = 'Ansøgningstilladelser';

$GLOBALS["lang"]['Application, Operating System or Hardware.'] = 'Anvendelse, operativsystem eller hardware.';

$GLOBALS["lang"]['applications'] = 'Ansøgninger';

$GLOBALS["lang"]['Applications'] = 'Ansøgninger';

$GLOBALS["lang"]['applied'] = 'Anvendt';

$GLOBALS["lang"]['Applied'] = 'Anvendt';

$GLOBALS["lang"]['Approved'] = 'Godkendt';

$GLOBALS["lang"]['April'] = 'April';

$GLOBALS["lang"]['architecture'] = 'Arkitektur';

$GLOBALS["lang"]['Architecture'] = 'Arkitektur';

$GLOBALS["lang"]['Are you sure you want to delete this input item?'] = 'Er du sikker på at du vil slette dette input element?';

$GLOBALS["lang"]['Are you sure you want to delete this output item?'] = 'Er du sikker på, at du vil slette dette outputpunkt?';

$GLOBALS["lang"]['Are you sure? This will remove all queue entries and prevent the remaining IPs from being discovered.'] = 'Er du sikker? Dette vil fjerne alle køindgange og forhindre de resterende IPs i at blive opdaget.';

$GLOBALS["lang"]['Are you sure? This will reset the queue processing count and could cause load on the server.'] = 'Er du sikker? Dette vil nulstille kø behandling tæller og kunne forårsage belastning på serveren.';

$GLOBALS["lang"]['area'] = 'Område';

$GLOBALS["lang"]['Area'] = 'Område';

$GLOBALS["lang"]['Argentina'] = 'Argentina';

$GLOBALS["lang"]['Armenia'] = 'Armenien';

$GLOBALS["lang"]['arp'] = 'Arp';

$GLOBALS["lang"]['Arp'] = 'Arp';

$GLOBALS["lang"]['Aruba'] = 'Aruba';

$GLOBALS["lang"]['As per the attributes for device environments. Production, Training, et al.'] = 'I henhold til attributterne til enhedsmiljøer. Produktion, uddannelse, et al.';

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

$GLOBALS["lang"]['Assign an Operator'] = 'Tildel en operatør';

$GLOBALS["lang"]['Assigned To'] = 'Tildelt';

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

$GLOBALS["lang"]['Attribute'] = 'Attribut';

$GLOBALS["lang"]['attributes'] = 'Attributter';

$GLOBALS["lang"]['Attributes'] = 'Attributter';

$GLOBALS["lang"]['Audit'] = 'Revision';

$GLOBALS["lang"]['Audit AIX'] = 'Audit AIX';

$GLOBALS["lang"]['Audit ESXi'] = 'Revision ESXi';

$GLOBALS["lang"]['Audit Linux'] = 'Revision af Linux';

$GLOBALS["lang"]['audit_log'] = 'Revisionslog';

$GLOBALS["lang"]['Audit Log'] = 'Revisionslog';

$GLOBALS["lang"]['Audit My PC'] = 'Revision Min PC';

$GLOBALS["lang"]['Audit OSX'] = 'Revision OSX';

$GLOBALS["lang"]['Audit Result Input'] = 'Revision Resultatinput';

$GLOBALS["lang"]['Audit Status'] = 'Revisionsstatus';

$GLOBALS["lang"]['Audit Windows'] = 'Revision af Windows';

$GLOBALS["lang"]['Audit the Device'] = 'Revision af enheden';

$GLOBALS["lang"]['Audits'] = 'Revision';

$GLOBALS["lang"]['August'] = 'August';

$GLOBALS["lang"]['Australia'] = 'Australien';

$GLOBALS["lang"]['Austria'] = 'Østrig';

$GLOBALS["lang"]['Auth'] = 'Auth';

$GLOBALS["lang"]['auth'] = 'Auth';

$GLOBALS["lang"]['Authentication Passphrase'] = 'Autentificeringskodefrase';

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

$GLOBALS["lang"]['Azerbaijan'] = 'Aserbajdsjan';

$GLOBALS["lang"]['BTU Max'] = 'BTU Max';

$GLOBALS["lang"]['BTU Total'] = 'BTU i alt';

$GLOBALS["lang"]['Backup'] = 'Backup';

$GLOBALS["lang"]['Bahamas the'] = 'Bahamas';

$GLOBALS["lang"]['Bahrain'] = 'Bahrain';

$GLOBALS["lang"]['Bangladesh'] = 'Bangladesh';

$GLOBALS["lang"]['bank'] = 'Bank';

$GLOBALS["lang"]['Bank'] = 'Bank';

$GLOBALS["lang"]['Banned'] = 'Forbudt';

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

$GLOBALS["lang"]['Basic'] = 'Grundlæggende';

$GLOBALS["lang"]['Belarus'] = 'Hviderusland';

$GLOBALS["lang"]['Belgium'] = 'Belgien';

$GLOBALS["lang"]['Belize'] = 'Belize';

$GLOBALS["lang"]['Benchmark'] = 'Benchmark';

$GLOBALS["lang"]['benchmark_id'] = 'Benchmark ID';

$GLOBALS["lang"]['Benchmark ID'] = 'Benchmark ID';

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

$GLOBALS["lang"]['Botswana'] = 'Botswana';

$GLOBALS["lang"]['Bouvet Island (Bouvetoya)'] = 'Bouvet Island (Bouvetoya)';

$GLOBALS["lang"]['Brazil'] = 'Brasilien';

$GLOBALS["lang"]['Brazilian Portuguese'] = 'Brasiliansk portugisisk';

$GLOBALS["lang"]['British Indian Ocean Territory (Chagos Archipelago)'] = 'Britisk område i Det Indiske Ocean (Chagos skærgård)';

$GLOBALS["lang"]['British Virgin Islands'] = 'De Britiske Jomfruøer';

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

$GLOBALS["lang"]['Bulgaria'] = 'Bulgarien';

$GLOBALS["lang"]['Bulk Edit'] = 'Bulk editor';

$GLOBALS["lang"]['Bulk Editing Device Attributes'] = 'Bulk redigeringsenhed attributter';

$GLOBALS["lang"]['Burkina Faso'] = 'Burkina Faso';

$GLOBALS["lang"]['Burundi'] = 'Burundi';

$GLOBALS["lang"]['business_requirements'] = 'Forretningskrav';

$GLOBALS["lang"]['Business Requirements'] = 'Forretningskrav';

$GLOBALS["lang"]['Buy'] = 'Køb';

$GLOBALS["lang"]['Buy More'] = 'Køb mere';

$GLOBALS["lang"]['Buy More Licenses'] = 'Køb flere licenser';

$GLOBALS["lang"]['By'] = 'Af';

$GLOBALS["lang"]['CIDR'] = 'CIDR';

$GLOBALS["lang"]['CIDR Mask'] = 'CIDR Mask';

$GLOBALS["lang"]['cli_config'] = 'CLI Konfig';

$GLOBALS["lang"]['CLI Config'] = 'CLI Konfig';

$GLOBALS["lang"]['CPU'] = 'CPU';

$GLOBALS["lang"]['CPUs'] = 'CPU \'er';

$GLOBALS["lang"]['CSV'] = 'CSV';

$GLOBALS["lang"]['CVE'] = 'CVE';

$GLOBALS["lang"]['Calculated from discovery.'] = 'Beregnet af opdagelsen.';

$GLOBALS["lang"]['Calculated total number of valid IP addresses for this network.'] = 'Beregnet samlet antal gyldige IP-adresser for dette netværk.';

$GLOBALS["lang"]['Calculated upon completion, the time taken to execute this item.'] = 'Beregnet efter afslutningen, den tid det tager at udføre dette element.';

$GLOBALS["lang"]['Calculated when integration is run and contains a JSON representation of the devices in this integration. Each links to <code>devices.id</code>.'] = 'Beregnet ved integration og indeholder en JSON-repræsentation af enhederne i denne integration. Hvert link til <code>devices.id</code>.';

$GLOBALS["lang"]['Calculated when integration is run and contains a JSON representation of the locations in this integration. Each links to <code>locations.id</code>.'] = 'Beregnet ved integration og indeholder en JSON-repræsentation af lokaliteterne i denne integration. Hvert link til <code>locations.id</code>.';

$GLOBALS["lang"]['Calculated when integration is run and contains the number of devices selected from Open-AudIT.'] = 'Beregnet når integration køres og indeholder antallet af enheder valgt fra Open- Audit.';

$GLOBALS["lang"]['Calculated when integration is run and contains the number of devices selected the external system.'] = 'Beregnet når integration køres og indeholder antallet af enheder valgt det eksterne system.';

$GLOBALS["lang"]['Calculated when integration is run and contains the number of devices to be updated in the external system.'] = 'Beregnet ved integration og indeholder antallet af enheder, der skal opdateres i det eksterne system.';

$GLOBALS["lang"]['Calculated when integration is run and contains the number of devices updated in Open-AudIT.'] = 'Beregnet når integration køres og indeholder antallet af enheder opdateret i Open- Audit.';

$GLOBALS["lang"]['Cambodia'] = 'Cambodja';

$GLOBALS["lang"]['Cameroon'] = 'Cameroun';

$GLOBALS["lang"]['Campus Area Network'] = 'Campus Area Network';

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

$GLOBALS["lang"]['Chad'] = 'Tchad';

$GLOBALS["lang"]['change_id'] = 'Ændr ID';

$GLOBALS["lang"]['Change ID'] = 'Ændr ID';

$GLOBALS["lang"]['change_log'] = 'Ændr log';

$GLOBALS["lang"]['Change Log'] = 'Ændr log';

$GLOBALS["lang"]['change_type'] = 'Ændr type';

$GLOBALS["lang"]['Change Type'] = 'Ændr type';

$GLOBALS["lang"]['check_minutes'] = 'Kontrolprotokol';

$GLOBALS["lang"]['Check Minutes'] = 'Kontrolprotokol';

$GLOBALS["lang"]['Check for SSH on these ports'] = 'Tjek for SSH på disse porte';

$GLOBALS["lang"]['Check this port for any SSH service.'] = 'Tjek denne port for alle SSH-tjenester.';

$GLOBALS["lang"]['Chile'] = 'Chile';

$GLOBALS["lang"]['China'] = 'Kina';

$GLOBALS["lang"]['Choose'] = 'Vælg';

$GLOBALS["lang"]['Choose (select OS first)'] = 'Vælg (vælg OS først)';

$GLOBALS["lang"]['Choose a Device'] = 'Vælg en enhed';

$GLOBALS["lang"]['Choose a Table'] = 'Vælg et bord';

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

$GLOBALS["lang"]['Click the Delete button to remove the example devices from Open-AudIT.<br>This will remove the below devices from the database. '] = 'Klik på knappen Slet for at fjerne eksempelenhederne fra Open- Audit.<br/>Dette vil fjerne nedenstående enheder fra databasen. ';

$GLOBALS["lang"]['Click the Import button below to populate Open-AudIT with example device data.'] = 'Klik på Importér knappen nedenfor for at folde Open- Audit med eksempel enhedsdata.';

$GLOBALS["lang"]['Client ID'] = 'Klient- id';

$GLOBALS["lang"]['client_ident'] = 'Klient- id';

$GLOBALS["lang"]['Client Ident'] = 'Klient- id';

$GLOBALS["lang"]['client_secret'] = 'Klienthemmelighed';

$GLOBALS["lang"]['Client Secret'] = 'Klienthemmelighed';

$GLOBALS["lang"]['client_site_name'] = 'Kundenavn';

$GLOBALS["lang"]['Client Site Name'] = 'Kundenavn';

$GLOBALS["lang"]['Close'] = 'Luk';

$GLOBALS["lang"]['Cloud'] = 'Cloud';

$GLOBALS["lang"]['Cloud Details'] = 'Cloud detaljer';

$GLOBALS["lang"]['Cloud Discovery'] = 'Cloud Discovery';

$GLOBALS["lang"]['cloud_id'] = 'Cloud-id';

$GLOBALS["lang"]['Cloud ID'] = 'Cloud-id';

$GLOBALS["lang"]['cloud_log'] = 'Sky- log';

$GLOBALS["lang"]['Cloud Log'] = 'Sky- log';

$GLOBALS["lang"]['cloud_name'] = 'Skynavn';

$GLOBALS["lang"]['Cloud Name'] = 'Skynavn';

$GLOBALS["lang"]['Cloud Network'] = 'Cloud-netværk';

$GLOBALS["lang"]['clouds'] = 'Skyer';

$GLOBALS["lang"]['Clouds'] = 'Skyer';

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

$GLOBALS["lang"]['Cocos (Keeling) Islands'] = 'Cocos (Keeling) Islands';

$GLOBALS["lang"]['Collector'] = 'Samler';

$GLOBALS["lang"]['Collector (UUID)'] = 'Samler (UUID)';

$GLOBALS["lang"]['Collector Name'] = 'Opsamlernavn';

$GLOBALS["lang"]['collector_uuid'] = 'Collector Uuid';

$GLOBALS["lang"]['Collector Uuid'] = 'Collector Uuid';

$GLOBALS["lang"]['collectors'] = 'Samlere';

$GLOBALS["lang"]['Collectors'] = 'Samlere';

$GLOBALS["lang"]['Colombia'] = 'Colombia';

$GLOBALS["lang"]['color'] = 'Farve';

$GLOBALS["lang"]['Color'] = 'Farve';

$GLOBALS["lang"]['column'] = 'Kolonne';

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

$GLOBALS["lang"]['comments'] = 'Bemærkninger';

$GLOBALS["lang"]['Comments'] = 'Bemærkninger';

$GLOBALS["lang"]['commercial'] = 'Handelsmæssig';

$GLOBALS["lang"]['Commercial'] = 'Handelsmæssig';

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

$GLOBALS["lang"]['Complexity of the attack (Low or High).'] = 'Kompleksitet af angrebet (lav eller høj).';

$GLOBALS["lang"]['Component Table'] = 'Komponenttabel';

$GLOBALS["lang"]['Components (All Devices)'] = 'Komponenter (alle enheder)';

$GLOBALS["lang"]['Compute'] = 'Beregn';

$GLOBALS["lang"]['Condition'] = 'Betingelse';

$GLOBALS["lang"]['Config'] = 'Konfig';

$GLOBALS["lang"]['Config Default, currently '] = 'Konfigurationsstandard, aktuelt ';

$GLOBALS["lang"]['config_file'] = 'Konfigurationsfil';

$GLOBALS["lang"]['Config File'] = 'Konfigurationsfil';

$GLOBALS["lang"]['config_manager_error_code'] = 'Fejlkode til indstillingshåndtering';

$GLOBALS["lang"]['Config Manager Error Code'] = 'Fejlkode til indstillingshåndtering';

$GLOBALS["lang"]['configuration'] = 'Indstilling';

$GLOBALS["lang"]['Configuration'] = 'Indstilling';

$GLOBALS["lang"]['Configure'] = 'Indstil';

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

$GLOBALS["lang"]['contact'] = 'Kontakt';

$GLOBALS["lang"]['Contact'] = 'Kontakt';

$GLOBALS["lang"]['contact_name'] = 'Kontaktnavn';

$GLOBALS["lang"]['Contact Name'] = 'Kontaktnavn';

$GLOBALS["lang"]['contained_in'] = 'Indeholdt i';

$GLOBALS["lang"]['Contained In'] = 'Indeholdt i';

$GLOBALS["lang"]['Contains a JSON object details the associated widgets and their positions.'] = 'Indeholder en JSON objekt detaljer de tilhørende widgets og deres positioner.';

$GLOBALS["lang"]['Contains the fields that determine if we should use ssh, snmp and wmi discovery options. A JSON object.'] = 'Indeholder de felter, der afgør, om vi skal bruge ssh, snmp og wmi opdagelse muligheder. Et JSON objekt.';

$GLOBALS["lang"]['Context Engine ID'] = 'Kontekstmotor- id';

$GLOBALS["lang"]['Context Name'] = 'Kontekstnavn';

$GLOBALS["lang"]['contractual_obligations'] = 'Kontraktmæssige forpligtelser';

$GLOBALS["lang"]['Contractual Obligations'] = 'Kontraktmæssige forpligtelser';

$GLOBALS["lang"]['Cook Islands'] = 'Cookøerne';

$GLOBALS["lang"]['Copy and paste an audit result'] = 'Kopiér og indsæt et revisionsresultat';

$GLOBALS["lang"]['Copy and paste the below to the forums, another instance of Open-AudIT or anywhere else you need to provide this item.'] = 'Kopiér og indsæt nedenstående til fora, et andet tilfælde af Open- Audit eller andre steder du har brug for at give dette punkt.';

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

$GLOBALS["lang"]['Create Geocode'] = 'Opret Geokode';

$GLOBALS["lang"]['create_internal_count'] = 'Opret intern tæller';

$GLOBALS["lang"]['Create Internal Count'] = 'Opret intern tæller';

$GLOBALS["lang"]['create_internal_from_external'] = 'Opret intern fra ekstern';

$GLOBALS["lang"]['Create Internal From External'] = 'Opret intern fra ekstern';

$GLOBALS["lang"]['Create NMIS Devices from Open-AudIT'] = 'Opret NMIS enheder fra Open- Audit';

$GLOBALS["lang"]['Create Open-AudIT Devices from '] = 'Opret Open- Audit Enheder fra ';

$GLOBALS["lang"]['Create Open-AudIT Devices from NMIS'] = 'Opret Open- Audit Enheder fra NMIS';

$GLOBALS["lang"]['created_by'] = 'Oprettet af';

$GLOBALS["lang"]['Created By'] = 'Oprettet af';

$GLOBALS["lang"]['created_date'] = 'Oprettet dato';

$GLOBALS["lang"]['Created Date'] = 'Oprettet dato';

$GLOBALS["lang"]['Creating'] = 'Oprettelse';

$GLOBALS["lang"]['Creating Device'] = 'Oprettelse af enhed';

$GLOBALS["lang"]['Creating a Query'] = 'Oprettelse af en forespørgsel';

$GLOBALS["lang"]['creator'] = 'Skaber';

$GLOBALS["lang"]['Creator'] = 'Skaber';

$GLOBALS["lang"]['credential'] = 'Kredit';

$GLOBALS["lang"]['Credential'] = 'Kredit';

$GLOBALS["lang"]['credentials'] = 'Valgret';

$GLOBALS["lang"]['Credentials'] = 'Valgret';

$GLOBALS["lang"]['Credentials Client ID'] = 'Valgt klient- id';

$GLOBALS["lang"]['Credentials Subscription ID'] = 'Valgret Abonnement ID';

$GLOBALS["lang"]['Credentials Tenant ID'] = 'Valgret Tenant ID';

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

$GLOBALS["lang"]['Custom TCP Ports'] = 'Brugerdefinerede TCP-porte';

$GLOBALS["lang"]['Custom UDP Ports'] = 'Brugerdefineret UDP Havne';

$GLOBALS["lang"]['Cve'] = 'Cve';

$GLOBALS["lang"]['Cyprus'] = 'Cypern';

$GLOBALS["lang"]['Czech'] = 'Tjekkisk';

$GLOBALS["lang"]['Czech Republic'] = 'Tjekkiet';

$GLOBALS["lang"]['DHCP'] = 'DHCP';

$GLOBALS["lang"]['DN Account (optional)'] = 'DN-konto (valgfrit)';

$GLOBALS["lang"]['DN Password (optional)'] = 'DN Password (valgfrit)';

$GLOBALS["lang"]['DNS FQDN'] = 'DNS FQDN';

$GLOBALS["lang"]['DNS Hostname'] = 'DNS hovednavn';

$GLOBALS["lang"]['dashboard_id'] = 'Dashboard- id';

$GLOBALS["lang"]['Dashboard ID'] = 'Dashboard- id';

$GLOBALS["lang"]['dashboards'] = 'Dashboards';

$GLOBALS["lang"]['Dashboards'] = 'Dashboards';

$GLOBALS["lang"]['Database'] = 'Database';

$GLOBALS["lang"]['db_action'] = 'Databaseaktion';

$GLOBALS["lang"]['Database Action'] = 'Databaseaktion';

$GLOBALS["lang"]['db_column'] = 'Databasekolonne';

$GLOBALS["lang"]['Database Column'] = 'Databasekolonne';

$GLOBALS["lang"]['Database Definition'] = 'Databasedefinition';

$GLOBALS["lang"]['db_row'] = 'Databaserække';

$GLOBALS["lang"]['Database Row'] = 'Databaserække';

$GLOBALS["lang"]['Database Schema'] = 'Databaseskema';

$GLOBALS["lang"]['db_table'] = 'Databasetabel';

$GLOBALS["lang"]['Database Table'] = 'Databasetabel';

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

$GLOBALS["lang"]['December'] = 'December';

$GLOBALS["lang"]['Default'] = 'Standard';

$GLOBALS["lang"]['Default Items'] = 'Standardelementer';

$GLOBALS["lang"]['Default Value'] = 'Standardværdi';

$GLOBALS["lang"]['Default of 389. Normally 636 used for Active Directory LDAPS.'] = 'Standard 389. Normalt 636 anvendes til Active Directory LDAPS.';

$GLOBALS["lang"]['Default of <code>3</code> for LDAP and Active Directory.'] = 'Standard for <code>3</code> for LDAP og Active Directory.';

$GLOBALS["lang"]['Defaults'] = 'Standard';

$GLOBALS["lang"]['delay_minutes'] = 'Forsinkelsesprotokollen';

$GLOBALS["lang"]['Delay Minutes'] = 'Forsinkelsesprotokollen';

$GLOBALS["lang"]['Delete'] = 'Slet';

$GLOBALS["lang"]['Delete Example Devices'] = 'Slet eksempel enheder';

$GLOBALS["lang"]['delete_external_from_internal'] = 'Slet eksternt fra internt';

$GLOBALS["lang"]['Delete External From Internal'] = 'Slet eksternt fra internt';

$GLOBALS["lang"]['Delete NMIS Devices if not in Open-AudIT'] = 'Slet NMIS Enheder hvis ikke i Open- Audit';

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

$GLOBALS["lang"]['details'] = 'Detaljer';

$GLOBALS["lang"]['Details of who is usually contactable at this site.'] = 'Detaljer om, hvem der normalt kan kontaktes på dette websted.';

$GLOBALS["lang"]['device'] = 'Enhed';

$GLOBALS["lang"]['Device'] = 'Enhed';

$GLOBALS["lang"]['Device Audits'] = 'Enhedsrevision';

$GLOBALS["lang"]['Device ID'] = 'Enhedens id';

$GLOBALS["lang"]['device_id'] = 'Enhedens id';

$GLOBALS["lang"]['device_id_a'] = 'Enhed ID A';

$GLOBALS["lang"]['Device ID A'] = 'Enhed ID A';

$GLOBALS["lang"]['device_id_b'] = 'Enhedens ID B';

$GLOBALS["lang"]['Device ID B'] = 'Enhedens ID B';

$GLOBALS["lang"]['Device Name'] = 'Enhedsnavn';

$GLOBALS["lang"]['Device Result'] = 'Enhedsresultat';

$GLOBALS["lang"]['Device Results'] = 'Enhedsresultater';

$GLOBALS["lang"]['Device Seed'] = 'Enhedsfrø';

$GLOBALS["lang"]['Device Seed IP'] = 'Enhed Seed IP';

$GLOBALS["lang"]['Device Status'] = 'Enhedsstatus';

$GLOBALS["lang"]['Device Types'] = 'Enhedstyper';

$GLOBALS["lang"]['Device is in the Subnet'] = 'Enheden er i subnettet';

$GLOBALS["lang"]['Devices'] = 'Enheder';

$GLOBALS["lang"]['devices_assigned_to_location'] = 'Enheder tildelt til placering';

$GLOBALS["lang"]['Devices Assigned To Location'] = 'Enheder tildelt til placering';

$GLOBALS["lang"]['devices_assigned_to_org'] = 'Enheder tildelt Org';

$GLOBALS["lang"]['Devices Assigned To Org'] = 'Enheder tildelt Org';

$GLOBALS["lang"]['Devices Audited'] = 'Enheder revideret';

$GLOBALS["lang"]['Devices Created in '] = 'Enheder oprettet i ';

$GLOBALS["lang"]['Devices Created in Open-AudIT'] = 'Enheder oprettet i Open- Audit';

$GLOBALS["lang"]['devices_default_display_columns'] = 'Enhedsstandardvisningskolonner';

$GLOBALS["lang"]['Devices Default Display Columns'] = 'Enhedsstandardvisningskolonner';

$GLOBALS["lang"]['Devices Found Last 7 Days'] = 'Enheder fundet sidste 7 dage';

$GLOBALS["lang"]['Devices Found Today'] = 'Enheder fundet i dag';

$GLOBALS["lang"]['Devices Found Yesterday'] = 'Enheder fundet i går';

$GLOBALS["lang"]['Devices Not Audited'] = 'Enheder som ikke er kontrolleret';

$GLOBALS["lang"]['Devices Not Seen 30 Days'] = 'Enheder som ikke har set 30 dage';

$GLOBALS["lang"]['Devices Not Seen 7 Days'] = 'Enheder ikke set 7 dage';

$GLOBALS["lang"]['Devices Not Seen 90 Days'] = 'Enheder ikke set 90 dage';

$GLOBALS["lang"]['Devices Retrieved via API'] = 'Enheder Retrieved via API';

$GLOBALS["lang"]['Devices Selected from '] = 'Enheder valgt fra ';

$GLOBALS["lang"]['Devices Selected from Open-AudIT'] = 'Enheder valgt fra Open- Audit';

$GLOBALS["lang"]['Devices Updated in '] = 'Enheder opdateret i ';

$GLOBALS["lang"]['Devices Updated in Open-AudIT'] = 'Enheder opdateret i Open- Audit';

$GLOBALS["lang"]['Devices are being benchmarked.'] = 'Enhederne bliver benchmarket.';

$GLOBALS["lang"]['Devices are not being benchmarked.'] = 'Enheder bliver ikke benchmarket.';

$GLOBALS["lang"]['Devices could be benchmarked.'] = 'Enhederne kan benchmarkes.';

$GLOBALS["lang"]['Devices in Running State'] = 'Enheder i køretilstand';

$GLOBALS["lang"]['Devices in Stopped State'] = 'Enheder i stoppet tilstand';

$GLOBALS["lang"]['Devices in this'] = 'Enheder i dette';

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

$GLOBALS["lang"]['discoveries'] = 'opdagelser';

$GLOBALS["lang"]['Discoveries'] = 'opdagelser';

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

$GLOBALS["lang"]['disk'] = 'Disk';

$GLOBALS["lang"]['Disk'] = 'Disk';

$GLOBALS["lang"]['display_version'] = 'Vis version';

$GLOBALS["lang"]['Display Version'] = 'Vis version';

$GLOBALS["lang"]['Display in Menu'] = 'Vis i menuen';

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

$GLOBALS["lang"]['Do not scan these TCP ports.'] = 'Scan ikke disse TCP-porte.';

$GLOBALS["lang"]['Do not scan these UDP ports.'] = 'Scan ikke disse UDP-porte.';

$GLOBALS["lang"]['Do not show me again'] = 'Vis mig ikke igen';

$GLOBALS["lang"]['Do you want to use secure transport (LDAPS) or regular unencrypted LDAP.'] = 'Ønsker du at bruge sikker transport (LDAPS) eller regelmæssig ukrypteret LDAP.';

$GLOBALS["lang"]['Do you wish to see the standard sidebar on the left.'] = 'Ønsker du at se standard sidebjælken til venstre.';

$GLOBALS["lang"]['documentation'] = 'Dokumentation';

$GLOBALS["lang"]['Documentation'] = 'Dokumentation';

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

$GLOBALS["lang"]['Download a file from URL'] = 'Hent en fil fra URL';

$GLOBALS["lang"]['driver'] = 'Driver';

$GLOBALS["lang"]['Driver'] = 'Driver';

$GLOBALS["lang"]['duplex'] = 'Duplex';

$GLOBALS["lang"]['Duplex'] = 'Duplex';

$GLOBALS["lang"]['duration'] = 'Varighed';

$GLOBALS["lang"]['Duration'] = 'Varighed';

$GLOBALS["lang"]['ESXi'] = 'ESXi';

$GLOBALS["lang"]['EULA'] = 'EULA';

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

$GLOBALS["lang"]['enabled'] = 'Aktiveret';

$GLOBALS["lang"]['Enabled'] = 'Aktiveret';

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

$GLOBALS["lang"]['English'] = 'Engelsk';

$GLOBALS["lang"]['enterprise'] = 'Erhvervspolitik';

$GLOBALS["lang"]['Enterprise'] = 'Erhvervspolitik';

$GLOBALS["lang"]['Enterprise Private Network'] = 'Virksomhedens private netværk';

$GLOBALS["lang"]['Entitlement Type'] = 'Rettighedstype';

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

$GLOBALS["lang"]['Established'] = 'Oprettet';

$GLOBALS["lang"]['Estonia'] = 'Estland';

$GLOBALS["lang"]['Ethernet MAC'] = 'Ethernet MAC';

$GLOBALS["lang"]['ethernet_mac'] = 'Ethernet Mac';

$GLOBALS["lang"]['Ethernet Mac'] = 'Ethernet Mac';

$GLOBALS["lang"]['Ethiopia'] = 'Etiopien';

$GLOBALS["lang"]['Every'] = 'Hver';

$GLOBALS["lang"]['Every Day'] = 'Hver dag';

$GLOBALS["lang"]['Exceptions'] = 'Undtagelser';

$GLOBALS["lang"]['exclude'] = 'Udeluk';

$GLOBALS["lang"]['Exclude'] = 'Udeluk';

$GLOBALS["lang"]['exclude_ip'] = 'Ekskl. IP';

$GLOBALS["lang"]['Exclude IP'] = 'Ekskl. IP';

$GLOBALS["lang"]['Exclude IP Addresses'] = 'Ekskl. IP-adresser';

$GLOBALS["lang"]['Exclude TCP Ports'] = 'Ekskl. TCP-porte';

$GLOBALS["lang"]['exclude_tcp_ports'] = 'Ekskl. Tcp Ports';

$GLOBALS["lang"]['Exclude Tcp Ports'] = 'Ekskl. Tcp Ports';

$GLOBALS["lang"]['Exclude UDP Ports'] = 'Ekskl. UDP-porte';

$GLOBALS["lang"]['exclude_udp_ports'] = 'Ekskl. Udp- porte';

$GLOBALS["lang"]['Exclude Udp Ports'] = 'Ekskl. Udp- porte';

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

$GLOBALS["lang"]['expose'] = 'Udsæt';

$GLOBALS["lang"]['Expose'] = 'Udsæt';

$GLOBALS["lang"]['External'] = 'Eksterne';

$GLOBALS["lang"]['External Field Name'] = 'Eksternt feltnavn';

$GLOBALS["lang"]['External Field Type'] = 'Ekstern felttype';

$GLOBALS["lang"]['external_ident'] = 'Ekstern Ident';

$GLOBALS["lang"]['External Ident'] = 'Ekstern Ident';

$GLOBALS["lang"]['external_link'] = 'Ekstern forbindelse';

$GLOBALS["lang"]['External Link'] = 'Ekstern forbindelse';

$GLOBALS["lang"]['extra_columns'] = 'Ekstra kolonner';

$GLOBALS["lang"]['Extra Columns'] = 'Ekstra kolonner';

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

$GLOBALS["lang"]['Fiji the Fiji Islands'] = 'Fiji Fiji-øerne';

$GLOBALS["lang"]['File'] = 'Fil';

$GLOBALS["lang"]['File Import'] = 'Filimport';

$GLOBALS["lang"]['File Input'] = 'Fil Input';

$GLOBALS["lang"]['file_name'] = 'Filnavn';

$GLOBALS["lang"]['File Name'] = 'Filnavn';

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

$GLOBALS["lang"]['Finland'] = 'Finland';

$GLOBALS["lang"]['Firewall'] = 'Firewall';

$GLOBALS["lang"]['firewall_rule'] = 'Firewall regel';

$GLOBALS["lang"]['Firewall Rule'] = 'Firewall regel';

$GLOBALS["lang"]['firmware'] = 'Firmware';

$GLOBALS["lang"]['Firmware'] = 'Firmware';

$GLOBALS["lang"]['firmware_revision'] = 'Firmware revision';

$GLOBALS["lang"]['Firmware Revision'] = 'Firmware revision';

$GLOBALS["lang"]['First Name'] = 'Fornavn';

$GLOBALS["lang"]['first_run'] = 'Første kørsel';

$GLOBALS["lang"]['First Run'] = 'Første kørsel';

$GLOBALS["lang"]['first_seen'] = 'Set først';

$GLOBALS["lang"]['First Seen'] = 'Set først';

$GLOBALS["lang"]['FirstWave'] = 'FirstWave';

$GLOBALS["lang"]['Fix'] = 'Fix';

$GLOBALS["lang"]['Fixed'] = 'Fast';

$GLOBALS["lang"]['Floor'] = 'Gulv';

$GLOBALS["lang"]['Follow any of the links below and discover how to use Open-AudIT to find out <b>Whats On Your Network?</b>'] = 'Følg et af nedenstående links og find ud af, hvordan du bruger Open- Audit <b>Hvad er på dit netværk?</b>';

$GLOBALS["lang"]['For a seed discovery, should I only discover IPs in the private IP address space.'] = 'For en frø opdagelse, skal jeg kun opdage IP \'er i den private IP-adresse plads.';

$GLOBALS["lang"]['For a seed discovery, should I only discover IPs on the chosen subnet.'] = 'For en frø opdagelse, skulle jeg kun opdage IP \'er på den valgte subnet.';

$GLOBALS["lang"]['For a seed discovery, should I ping the subnet before running the discovery.'] = 'For en frø opdagelse, skal jeg ping subnet før køre opdagelsen.';

$GLOBALS["lang"]['For advanced entry of a raw SQL query. As per Queries, you must include <code>WHERE @filter AND<code> in your SQL.'] = 'For avanceret indgang af en rå SQL forespørgsel. Som pr Forespørgsler, skal du inkludere <code>WHERE @filter AND<code> in your SQL.</code></code>';

$GLOBALS["lang"]['For licenses that are not perpetual, when does the license expire.'] = 'For licenser, der ikke er evige, hvornår udløber licensen.';

$GLOBALS["lang"]['form_factor'] = 'Formfaktor';

$GLOBALS["lang"]['Form Factor'] = 'Formfaktor';

$GLOBALS["lang"]['format'] = 'Format';

$GLOBALS["lang"]['Format'] = 'Format';

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

$GLOBALS["lang"]['full_name'] = 'Fuldt navn';

$GLOBALS["lang"]['Full Name'] = 'Fuldt navn';

$GLOBALS["lang"]['function'] = 'Funktion';

$GLOBALS["lang"]['Function'] = 'Funktion';

$GLOBALS["lang"]['GROUP BY'] = 'GRUPPE AF';

$GLOBALS["lang"]['Gabon'] = 'Gabon';

$GLOBALS["lang"]['Gambia the'] = 'Gambia';

$GLOBALS["lang"]['gateway'] = 'Gateway';

$GLOBALS["lang"]['Gateway'] = 'Gateway';

$GLOBALS["lang"]['gateways'] = 'Gateways';

$GLOBALS["lang"]['Gateways'] = 'Gateways';

$GLOBALS["lang"]['Generated By'] = 'Genereret af';

$GLOBALS["lang"]['geo'] = 'Geo';

$GLOBALS["lang"]['Geo'] = 'Geo';

$GLOBALS["lang"]['Georgia'] = 'Georgien';

$GLOBALS["lang"]['German'] = 'Tysk';

$GLOBALS["lang"]['Germany'] = 'Tyskland';

$GLOBALS["lang"]['Get Lat/Long'] = 'Få Lat / Long';

$GLOBALS["lang"]['Get Started'] = 'Start';

$GLOBALS["lang"]['Get a Free License'] = 'Få en gratis licens';

$GLOBALS["lang"]['Getting Started'] = 'Kom i gang';

$GLOBALS["lang"]['Ghana'] = 'Ghana';

$GLOBALS["lang"]['Gibraltar'] = 'Gibraltar';

$GLOBALS["lang"]['Global Discovery Options'] = 'Globale søgemuligheder';

$GLOBALS["lang"]['Go'] = 'Gå';

$GLOBALS["lang"]['Google Compute Fields'] = 'Google Computefelter';

$GLOBALS["lang"]['Google Maps API Key'] = 'Google Maps API Nøgle';

$GLOBALS["lang"]['Greater Than'] = 'Større end';

$GLOBALS["lang"]['Greater Than or Equals'] = 'Større end eller lig med';

$GLOBALS["lang"]['Greece'] = 'Grækenland';

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

$GLOBALS["lang"]['hardware_revision'] = 'Hardwarerevision';

$GLOBALS["lang"]['Hardware Revision'] = 'Hardwarerevision';

$GLOBALS["lang"]['Has this policy been applied in this organization.'] = 'Er denne politik blevet anvendt i denne organisation?';

$GLOBALS["lang"]['hash'] = 'Hash';

$GLOBALS["lang"]['Hash'] = 'Hash';

$GLOBALS["lang"]['Head'] = 'Ansvarlig';

$GLOBALS["lang"]['Heard Island and McDonald Islands'] = 'Hørt Island og McDonald Islands';

$GLOBALS["lang"]['height'] = 'Højde';

$GLOBALS["lang"]['Height'] = 'Højde';

$GLOBALS["lang"]['Height in RU'] = 'Højde i jernbanevirksomhed';

$GLOBALS["lang"]['Help'] = 'Hjælp';

$GLOBALS["lang"]['Help and Frequently Asked Questions'] = 'Hjælp og ofte stillede spørgsmål';

$GLOBALS["lang"]['high'] = 'Høj';

$GLOBALS["lang"]['High'] = 'Høj';

$GLOBALS["lang"]['High Availability'] = 'Høj tilgængelighed';

$GLOBALS["lang"]['Holy See (Vatican City State)'] = 'Pavestolen (Vatikanstaten)';

$GLOBALS["lang"]['Home'] = 'Hjem';

$GLOBALS["lang"]['home'] = 'Hjem';

$GLOBALS["lang"]['Home Area Network'] = 'Hjemmeområdenetværk';

$GLOBALS["lang"]['Honduras'] = 'Honduras';

$GLOBALS["lang"]['Hong Kong'] = 'Hongkong';

$GLOBALS["lang"]['host'] = 'Vært';

$GLOBALS["lang"]['Host'] = 'Vært';

$GLOBALS["lang"]['hostname'] = 'Værtsnavn';

$GLOBALS["lang"]['Hostname'] = 'Værtsnavn';

$GLOBALS["lang"]['hour'] = 'Time';

$GLOBALS["lang"]['Hour'] = 'Time';

$GLOBALS["lang"]['How and Why is Open-AudIT More Secure'] = 'Hvordan og hvorfor er Open- Audit mere sikker';

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

$GLOBALS["lang"]['Hungary'] = 'Ungarn';

$GLOBALS["lang"]['hw_cpe'] = 'Hw Cpe';

$GLOBALS["lang"]['Hw Cpe'] = 'Hw Cpe';

$GLOBALS["lang"]['hyperthreading'] = 'Hyperthreading';

$GLOBALS["lang"]['Hyperthreading'] = 'Hyperthreading';

$GLOBALS["lang"]['I have read the EULA.'] = 'Jeg har læst EULA.';

$GLOBALS["lang"]['id'] = 'ID';

$GLOBALS["lang"]['ID'] = 'ID';

$GLOBALS["lang"]['IF'] = 'IF';

$GLOBALS["lang"]['IOS Version'] = 'IOS-version';

$GLOBALS["lang"]['IP'] = 'IP';

$GLOBALS["lang"]['ip'] = 'IP';

$GLOBALS["lang"]['IP Address'] = 'IP- adresse';

$GLOBALS["lang"]['IP Addresses'] = 'IP-adresser';

$GLOBALS["lang"]['IP Last Seen'] = 'IP- sidst set';

$GLOBALS["lang"]['IP Set By'] = 'IP Set by';

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

$GLOBALS["lang"]['If'] = 'Hvis';

$GLOBALS["lang"]['If a port responds with filtered, should we consider it available.'] = 'Hvis en havn reagerer med filtreret, skal vi overveje det.';

$GLOBALS["lang"]['If a port responds with open|filtered, should we consider it available.'] = 'Hvis en port reagerer med åbent 124; filtreret, skal vi overveje det til rådighed.';

$GLOBALS["lang"]['If a remote device does not exist in the Open-AudIT selected devices, should we delete it from the external system.'] = 'Hvis en ekstern enhed ikke findes i de valgte Open- Audit enheder, skal vi slette den fra det eksterne system.';

$GLOBALS["lang"]['If an Open-AudIT device has been changed, should we update the external system.'] = 'Hvis en Open- Audit enhed er blevet ændret, skal vi opdatere det eksterne system.';

$GLOBALS["lang"]['If an Open-AudIT device is not on the external system, should we create it.'] = 'Hvis en Open- Audit enhed ikke er på det eksterne system, skal vi oprette det.';

$GLOBALS["lang"]['If an agent reports its primary IP is in this subnet, perform the actions.'] = 'Hvis en agent rapporterer sin primære IP er i denne subnet, udføre handlinger.';

$GLOBALS["lang"]['If any of these (comma seperated, no spaces) ports are detected, assume SSH is running on them and use them for auditing. No need to add this port to the Custom TCP ports - it will be added automatically.'] = 'Hvis nogen af disse (komma seperated, ingen mellemrum) porte detekteres, antage SSH kører på dem og bruge dem til revision. Ingen grund til at tilføje denne port til Custom TCP-porte - det vil blive tilføjet automatisk.';

$GLOBALS["lang"]['If set, holds a JSON array of specific device columns this user has chosen to see, other than the configuration default.'] = 'Hvis sat, holder en JSON array af specifikke enheder kolonner denne bruger har valgt at se, ud over konfigurationsstandard.';

$GLOBALS["lang"]['If the agent OS family (case insensitive) contains this string, perform the actions.'] = 'Hvis agent OS familie (tilfælde ufølsom) indeholder denne streng, udføre handlinger.';

$GLOBALS["lang"]['If the following conditions are met:<br><ul><li>a Role has an assigned ad_group</li><li>an Org has an assigned ad_group</li><li>an LDAP Server has use_roles set to y</li><li>a user exists in LDAP (be it Active Directory or OpenLDAP) and is in the assigned ad_groups</li></ul>That user can log on to Open-AudIT without an account in Open-AudIT needing to be created. Open-AudIT will query the LDAP in question and if the user is in the required groups but not in Open-AudIT, their user attributes (name, full name, email,  roles, orgs, etc) within Open-AudIT will be automatically populated and they will be logged on.<br> <br>'] = 'Hvis følgende betingelser er opfyldt:<br/><ul><li>a Rolle har en tildelt ad _ group</li><li>en Org har en tildelt ad _ group</li><li>en LDAP Server har brug _ roller indstillet til y</li><li>en bruger findes i LDAP (det være sig Active Directory eller OpenLDAP) og er i de tildelte ad _ groups</li></ul>Denne bruger kan logge på Open- Audit uden en konto i Open- Audit behov for at blive oprettet. Open- Audit vil spørge den LDAP pågældende, og hvis brugeren er i de krævede grupper, men ikke i Open- Audit, deres brugerattributter (navn, fulde navn, e-mail, roller, orgs, etc) inden Open- Audit vil blive automatisk befolket, og de vil blive logget på.<br/> <br/>';

$GLOBALS["lang"]['If the user logging on to Open-AudIT does not have the access to search LDAP, you can use another account which does have this access.'] = 'Hvis brugeren logger på Open- Audit ikke har adgang til at søge LDAP, kan du bruge en anden konto, som har denne adgang.';

$GLOBALS["lang"]['If this many or more minutes have passed since the device contacted the server, perform the actions.'] = 'Hvis dette mange eller flere minutter er gået, siden enheden kontaktede serveren, udføre handlinger.';

$GLOBALS["lang"]['If you choose a Collector, it will be scheduled to execute on the next 5 minute boundary.'] = 'Hvis du vælger en Collector, vil det være planlagt at udføre på den næste 5 minutters grænse.';

$GLOBALS["lang"]['ifadminstatus'] = 'Ifadminstatus';

$GLOBALS["lang"]['Ifadminstatus'] = 'Ifadminstatus';

$GLOBALS["lang"]['iflastchange'] = 'Iflastchange';

$GLOBALS["lang"]['Iflastchange'] = 'Iflastchange';

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

$GLOBALS["lang"]['implementation_notes'] = 'Gennemførelsesnoter';

$GLOBALS["lang"]['Implementation Notes'] = 'Gennemførelsesnoter';

$GLOBALS["lang"]['Import'] = 'Importér';

$GLOBALS["lang"]['Import Example Data'] = 'Importér eksempeldata';

$GLOBALS["lang"]['improvement_opportunities'] = 'Forbedring af mulighederne';

$GLOBALS["lang"]['Improvement Opportunities'] = 'Forbedring af mulighederne';

$GLOBALS["lang"]['In'] = 'I';

$GLOBALS["lang"]['Inactive'] = 'Inaktiv';

$GLOBALS["lang"]['Include'] = 'Medtag';

$GLOBALS["lang"]['Incomplete'] = 'Ufuldstændig';

$GLOBALS["lang"]['Index'] = 'Indeks';

$GLOBALS["lang"]['India'] = 'Indien';

$GLOBALS["lang"]['Indonesia'] = 'Indonesien';

$GLOBALS["lang"]['Info'] = 'Info';

$GLOBALS["lang"]['Informational'] = 'Informativ';

$GLOBALS["lang"]['initial_size'] = 'Oprindelig størrelse';

$GLOBALS["lang"]['Initial Size'] = 'Oprindelig størrelse';

$GLOBALS["lang"]['inode'] = 'Inode';

$GLOBALS["lang"]['Inode'] = 'Inode';

$GLOBALS["lang"]['Input Type'] = 'Inputtype';

$GLOBALS["lang"]['inputs'] = 'Indgange';

$GLOBALS["lang"]['Inputs'] = 'Indgange';

$GLOBALS["lang"]['Insane'] = 'Insane';

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

$GLOBALS["lang"]['installed_by'] = 'Installeret af';

$GLOBALS["lang"]['Installed By'] = 'Installeret af';

$GLOBALS["lang"]['installed_on'] = 'Installeret på';

$GLOBALS["lang"]['Installed On'] = 'Installeret på';

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

$GLOBALS["lang"]['interface'] = 'Grænseflade';

$GLOBALS["lang"]['Interface'] = 'Grænseflade';

$GLOBALS["lang"]['interface_id'] = 'Interface-id';

$GLOBALS["lang"]['Interface ID'] = 'Interface-id';

$GLOBALS["lang"]['interface_type'] = 'Grænsetype';

$GLOBALS["lang"]['Interface Type'] = 'Grænsetype';

$GLOBALS["lang"]['Internal'] = 'Intern';

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

$GLOBALS["lang"]['Italy'] = 'Italien';

$GLOBALS["lang"]['Items not in Baseline'] = 'Poster uden for Baseline';

$GLOBALS["lang"]['JSON'] = 'JSON';

$GLOBALS["lang"]['JSON to Import'] = 'JSON at importere';

$GLOBALS["lang"]['Jamaica'] = 'Jamaica';

$GLOBALS["lang"]['January'] = 'Januar';

$GLOBALS["lang"]['Japan'] = 'Japan';

$GLOBALS["lang"]['Jersey'] = 'Jersey';

$GLOBALS["lang"]['Jordan'] = 'Jordan';

$GLOBALS["lang"]['July'] = 'Juli';

$GLOBALS["lang"]['June'] = 'Juni';

$GLOBALS["lang"]['Kazakhstan'] = 'Kasakhstan';

$GLOBALS["lang"]['Kenya'] = 'Kenya';

$GLOBALS["lang"]['kernel_version'] = 'Kerneversion';

$GLOBALS["lang"]['Kernel Version'] = 'Kerneversion';

$GLOBALS["lang"]['Key'] = 'Nøgle';

$GLOBALS["lang"]['Key Password (optional)'] = 'Nøglekodeord (valgfrit)';

$GLOBALS["lang"]['keys'] = 'Nøgler';

$GLOBALS["lang"]['Keys'] = 'Nøgler';

$GLOBALS["lang"]['Kiribati'] = 'Kiribati';

$GLOBALS["lang"]['Korea'] = 'Korea';

$GLOBALS["lang"]['Kuwait'] = 'Kuwait';

$GLOBALS["lang"]['Kyrgyz Republic'] = 'Den Kirgisiske Republik';

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

$GLOBALS["lang"]['lastModified'] = 'LastModificeret';

$GLOBALS["lang"]['LastModified'] = 'LastModificeret';

$GLOBALS["lang"]['latitude'] = 'Breddegrad';

$GLOBALS["lang"]['Latitude'] = 'Breddegrad';

$GLOBALS["lang"]['Latvia'] = 'Letland';

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

$GLOBALS["lang"]['level'] = 'Niveau';

$GLOBALS["lang"]['Level'] = 'Niveau';

$GLOBALS["lang"]['Level of privileges needed to exploit (None, Low, High).'] = 'Niveau af rettigheder, der er nødvendige for at udnytte (Ingen, Lav, Høj).';

$GLOBALS["lang"]['Liberia'] = 'Liberia';

$GLOBALS["lang"]['Libyan Arab Jamahiriya'] = 'Libyan Arab Jamahiriya';

$GLOBALS["lang"]['License'] = 'Licens';

$GLOBALS["lang"]['License Key'] = 'Licensnøgle';

$GLOBALS["lang"]['License Required'] = 'Krævet licens';

$GLOBALS["lang"]['licenses'] = 'Licenser';

$GLOBALS["lang"]['Licenses'] = 'Licenser';

$GLOBALS["lang"]['Liechtenstein'] = 'Liechtenstein';

$GLOBALS["lang"]['Like'] = 'Ligesom';

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

$GLOBALS["lang"]['List'] = 'Liste';

$GLOBALS["lang"]['list_table_format'] = 'Liste over tabelformat';

$GLOBALS["lang"]['List Table Format'] = 'Liste over tabelformat';

$GLOBALS["lang"]['Lithuania'] = 'Litauen';

$GLOBALS["lang"]['Load Balancing'] = 'Belastning';

$GLOBALS["lang"]['Local'] = 'Lokal';

$GLOBALS["lang"]['Local Area Network'] = 'Netværk for lokalområdet';

$GLOBALS["lang"]['local_port'] = 'Lokal havn';

$GLOBALS["lang"]['Local Port'] = 'Lokal havn';

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

$GLOBALS["lang"]['locations'] = 'Placering';

$GLOBALS["lang"]['Locations'] = 'Placering';

$GLOBALS["lang"]['Locations in this'] = 'Placeringer i dette';

$GLOBALS["lang"]['log'] = 'Log';

$GLOBALS["lang"]['Log'] = 'Log';

$GLOBALS["lang"]['log_format'] = 'Logformat';

$GLOBALS["lang"]['Log Format'] = 'Logformat';

$GLOBALS["lang"]['log_path'] = 'Logsti';

$GLOBALS["lang"]['Log Path'] = 'Logsti';

$GLOBALS["lang"]['log_rotation'] = 'Logrotation';

$GLOBALS["lang"]['Log Rotation'] = 'Logrotation';

$GLOBALS["lang"]['log_status'] = 'Logstatus';

$GLOBALS["lang"]['Log Status'] = 'Logstatus';

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

$GLOBALS["lang"]['Luxembourg'] = 'Luxembourg';

$GLOBALS["lang"]['MAC Address'] = 'MAC-adresse';

$GLOBALS["lang"]['MAC Manufacturer'] = 'MAC Fremstiller';

$GLOBALS["lang"]['mac'] = 'Mac';

$GLOBALS["lang"]['Mac'] = 'Mac';

$GLOBALS["lang"]['Mac Address'] = 'Mac- adresse';

$GLOBALS["lang"]['MacOS'] = 'MacOS';

$GLOBALS["lang"]['Macao'] = 'Macao';

$GLOBALS["lang"]['Macedonia'] = 'Makedonien';

$GLOBALS["lang"]['Madagascar'] = 'Madagaskar';

$GLOBALS["lang"]['maintenance_expires'] = 'Vedligeholdelsesudgifter';

$GLOBALS["lang"]['Maintenance Expires'] = 'Vedligeholdelsesudgifter';

$GLOBALS["lang"]['Make My Default Dashboard'] = 'Lav min standard instrumentbræt';

$GLOBALS["lang"]['Make this install a Collector'] = 'Gør dette installere en Collector';

$GLOBALS["lang"]['Malawi'] = 'Malawi';

$GLOBALS["lang"]['Malaysia'] = 'Malaysia';

$GLOBALS["lang"]['Maldives'] = 'Maldiverne';

$GLOBALS["lang"]['Mali'] = 'Mali';

$GLOBALS["lang"]['Malta'] = 'Malta';

$GLOBALS["lang"]['Manage'] = 'Håndtering';

$GLOBALS["lang"]['Manage Licenses'] = 'Håndtér licenser';

$GLOBALS["lang"]['Manage in NMIS'] = 'Håndtering i NMIS';

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

$GLOBALS["lang"]['match_string'] = 'Matchstreng';

$GLOBALS["lang"]['Match String'] = 'Matchstreng';

$GLOBALS["lang"]['Matching Attribute'] = 'Matchende attribut';

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

$GLOBALS["lang"]['Mexico'] = 'Mexico';

$GLOBALS["lang"]['Micronesia'] = 'Mikronesien';

$GLOBALS["lang"]['Microsoft Azure Fields'] = 'Microsoft Azure felter';

$GLOBALS["lang"]['microtime'] = 'Mikrotid';

$GLOBALS["lang"]['Microtime'] = 'Mikrotid';

$GLOBALS["lang"]['minute'] = 'Minute';

$GLOBALS["lang"]['Minute'] = 'Minute';

$GLOBALS["lang"]['Minutes Since last Audit are Greater than'] = 'Protokol Siden sidste revision er større end';

$GLOBALS["lang"]['model'] = 'Model';

$GLOBALS["lang"]['Model'] = 'Model';

$GLOBALS["lang"]['model_family'] = 'Model familie';

$GLOBALS["lang"]['Model Family'] = 'Model familie';

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

$GLOBALS["lang"]['Montenegro'] = 'Montenegro';

$GLOBALS["lang"]['month'] = 'Måned';

$GLOBALS["lang"]['Month'] = 'Måned';

$GLOBALS["lang"]['Montserrat'] = 'Montserrat Formand';

$GLOBALS["lang"]['Morocco'] = 'Marokko';

$GLOBALS["lang"]['motherboard'] = 'Motherboard';

$GLOBALS["lang"]['Motherboard'] = 'Motherboard';

$GLOBALS["lang"]['mount_point'] = 'Monteringspunkt';

$GLOBALS["lang"]['Mount Point'] = 'Monteringspunkt';

$GLOBALS["lang"]['mount_type'] = 'Monteringstype';

$GLOBALS["lang"]['Mount Type'] = 'Monteringstype';

$GLOBALS["lang"]['Mozambique'] = 'Mozambique';

$GLOBALS["lang"]['Must Respond to Ping'] = 'Skal reagere på Ping';

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

$GLOBALS["lang"]['NOTE - You can prevent plain text credentials being displayed below by setting the configuration item for <code>decrypt_credentials</code> to <code>n</code>.'] = 'BEMÆRK - Du kan forhindre almindelig tekst legitimation vises nedenfor ved at indstille konfigurationselementet for <code>decrypt_credentials</code> til <code>n</code>.';

$GLOBALS["lang"]['name'] = 'Navn';

$GLOBALS["lang"]['Name'] = 'Navn';

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

$GLOBALS["lang"]['Network'] = 'Netværk';

$GLOBALS["lang"]['network_address'] = 'Netværksadresse';

$GLOBALS["lang"]['Network Address'] = 'Netværksadresse';

$GLOBALS["lang"]['network_domain'] = 'Netværksdomæne';

$GLOBALS["lang"]['Network Domain'] = 'Netværksdomæne';

$GLOBALS["lang"]['Network Types'] = 'Netværkstyper';

$GLOBALS["lang"]['networks'] = 'Netværk';

$GLOBALS["lang"]['Networks'] = 'Netværk';

$GLOBALS["lang"]['Networks Generated By'] = 'Netværk genereret af';

$GLOBALS["lang"]['Networks using a CIDR Mask of'] = 'Netværk, der anvender en CIDR-maske af';

$GLOBALS["lang"]['New Building Name'] = 'Nyt bygningsnavn';

$GLOBALS["lang"]['New Caledonia'] = 'Ny Kaledonien';

$GLOBALS["lang"]['New Floor Name'] = 'Nyt gulvnavn';

$GLOBALS["lang"]['New Room Name'] = 'Navn på nyt værelse';

$GLOBALS["lang"]['New Row Name'] = 'Navn på ny række';

$GLOBALS["lang"]['New Zealand'] = 'New Zealand';

$GLOBALS["lang"]['News'] = 'Nyheder';

$GLOBALS["lang"]['next_hop'] = 'Næste hop';

$GLOBALS["lang"]['Next Hop'] = 'Næste hop';

$GLOBALS["lang"]['next_run'] = 'Næste Kør';

$GLOBALS["lang"]['Next Run'] = 'Næste Kør';

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

$GLOBALS["lang"]['Node'] = 'Knude';

$GLOBALS["lang"]['None'] = 'Ingen';

$GLOBALS["lang"]['Norfolk Island'] = 'Norfolk Island';

$GLOBALS["lang"]['Normal'] = 'Normal';

$GLOBALS["lang"]['Northern Mariana Islands'] = 'Northern Mariana Islands';

$GLOBALS["lang"]['Norway'] = 'Norge';

$GLOBALS["lang"]['Not Applicable'] = 'Ikke relevant';

$GLOBALS["lang"]['Not Checked'] = 'Ikke kontrolleret';

$GLOBALS["lang"]['Not Equals'] = 'Ikke ækvivalenter';

$GLOBALS["lang"]['Not In'] = 'Ikke i';

$GLOBALS["lang"]['Not Like'] = 'Ikke som';

$GLOBALS["lang"]['Not Set'] = 'Ikke sat';

$GLOBALS["lang"]['Not normally used. If set, this requires the device to have an open port (as per Scan Options) to be considered responding. A MAC address, arp response or ping response is not considered sufficient to be considered responding. Useful if a router or firewall between the Open-AudIT server and target IP is responding to port scans on the IPs behalf.'] = 'Anvendes normalt ikke. Hvis sat, dette kræver, at enheden til at have en åben port (som pr Scan Indstillinger), der skal anses for at svare. En MAC-adresse, arp-respons eller ping-respons anses ikke for tilstrækkelig til at blive betragtet som respons. Nyttigt hvis en router eller firewall mellem Open- AudiT server og mål IP reagerer på port scanninger på IPs vegne.';

$GLOBALS["lang"]['Note'] = 'Bemærkning';

$GLOBALS["lang"]['Note - Selecting a parent will automatically provide access to its children (although it wont be shown here).'] = 'Bemærk - At vælge en forælder vil automatisk give adgang til sine børn (selv om det plejer at blive vist her).';

$GLOBALS["lang"]['Notes'] = 'Bemærkninger';

$GLOBALS["lang"]['notes'] = 'Bemærkninger';

$GLOBALS["lang"]['Notice'] = 'Meddelelse';

$GLOBALS["lang"]['notin'] = 'Notin';

$GLOBALS["lang"]['Notin'] = 'Notin';

$GLOBALS["lang"]['November'] = 'November';

$GLOBALS["lang"]['nvd_json'] = 'Nvd Json';

$GLOBALS["lang"]['Nvd Json'] = 'Nvd Json';

$GLOBALS["lang"]['ORDER BY'] = 'KENDELSE VED';

$GLOBALS["lang"]['OS'] = 'OS';

$GLOBALS["lang"]['OS Families'] = 'OS Familier';

$GLOBALS["lang"]['OS Family'] = 'OS Family';

$GLOBALS["lang"]['OS Group'] = 'OS Group';

$GLOBALS["lang"]['oae_manage'] = 'Oe Håndtering';

$GLOBALS["lang"]['Oae Manage'] = 'Oe Håndtering';

$GLOBALS["lang"]['object_ident'] = 'Objekt Ident';

$GLOBALS["lang"]['Object Ident'] = 'Objekt Ident';

$GLOBALS["lang"]['October'] = 'Oktober';

$GLOBALS["lang"]['Oman'] = 'Oman';

$GLOBALS["lang"]['omk_uuid'] = 'Omk Uuid';

$GLOBALS["lang"]['Omk Uuid'] = 'Omk Uuid';

$GLOBALS["lang"]['On'] = 'Til';

$GLOBALS["lang"]['One of <code>3x2</code>, <code>4x2</code>, <code>4x3</code> or <code>4x4</code>.'] = 'En af <code>3x2</code>, <code>4x2</code>, <code>4x3</code> eller <code>4x4</code>.';

$GLOBALS["lang"]['One of Campus Area Network, Cloud Network, Enterprise Private Network, Home Area Network, Local Area Network, Metropolitan Area Network, Passive Optical Local Area Network, Personal Area Network, Storage-Area Network, System-Area Network, Virtual Private Network, Wide Area Network, Wireless Local Area Network.'] = 'En af Campus Area Network, Cloud Network, Enterprise Private Network, Home Area Network, Local Area Network, Metropolitan Area Network, Passive Optical Local Area Network, Personal Area Network, Storage- Area Network, System- Area Network, Virtual Private Network, Wide Area Network, Trådløs Local Area Network.';

$GLOBALS["lang"]['One of Development, Disaster Recovery, Evaluation, Pre-Production, Production, Testing, Training, User Acceptance Testing'] = 'En af Udvikling, Katastrofe Inddrivelse, Evaluering, Pre-produktion, Produktion, Test, Uddannelse, Brugeraccept Test';

$GLOBALS["lang"]['One of allocated, delegated, planning, reserved, unallocated, unknown, unmanaged. Defaults to allocated.'] = 'En af de tildelte, uddelegerede, planlægning, reserverede, ikke-tildelte, ukendte, uforvaltede. Standard tildelt.';

$GLOBALS["lang"]['One of either <code>active directory</code> or <code>openldap</code>.'] = 'En af <code>active directory</code> eller <code>openldap</code>.';

$GLOBALS["lang"]['One of: antivirus, backup, firewall, approved, banned, ignored or other.'] = 'En af: antivirus, backup, firewall, godkendt, forbudt, ignoreret eller andet.';

$GLOBALS["lang"]['Online Documentation'] = 'Online dokumentation';

$GLOBALS["lang"]['Open-AudIT'] = 'Open- Audit';

$GLOBALS["lang"]['Open-AudIT Community'] = 'Open- Audit Community';

$GLOBALS["lang"]['Open-AudIT Device Selection'] = 'Valg af Open- Audit- enhed';

$GLOBALS["lang"]['Open-AudIT Enterprise'] = 'Open- Audit Enterprise';

$GLOBALS["lang"]['Open-AudIT Enterprise. High-scale flexible discovery and audit solution for large networks. All the features of Professional plus: Baselines, File Auditing, Cloud Discovery, Rack Management, Configurable Role Based Access Control including Active Directory and LDAP.'] = 'Open- Audit Enterprise. Høj skala fleksibel opdagelse og revision løsning for store netværk. Alle funktionerne i Professional plus: Baselines, File Auditing, Cloud Discovery, Rack Management, Konfigurativ Rollebaseret Access Control, herunder Active Directory og LDAP.';

$GLOBALS["lang"]['Open-AudIT Field Name'] = 'Open- Audit- feltnavn';

$GLOBALS["lang"]['Open-AudIT Licenses'] = 'Open- Audit Licenses';

$GLOBALS["lang"]['Open-AudIT Options'] = 'Open- Audit- tilvalg';

$GLOBALS["lang"]['Open-AudIT Professional'] = 'Open- Audit Professional';

$GLOBALS["lang"]['Open-AudIT Professional. The world\\'] = 'Open- Audit Professional. Verden\\';

$GLOBALS["lang"]['Open-AudIT and Nmap'] = 'Open- Audit og Nmap';

$GLOBALS["lang"]['OpenScap is Installed'] = 'OpenScap er installeret';

$GLOBALS["lang"]['openldap_user_dn'] = 'Openldap bruger Dn';

$GLOBALS["lang"]['Openldap User Dn'] = 'Openldap bruger Dn';

$GLOBALS["lang"]['openldap_user_membership_attribute'] = 'Openldap Brugermedlemsattribut';

$GLOBALS["lang"]['Openldap User Membership Attribute'] = 'Openldap Brugermedlemsattribut';

$GLOBALS["lang"]['open|filtered'] = 'Åbent 124; filtreret';

$GLOBALS["lang"]['Open|filtered'] = 'Åbent 124; filtreret';

$GLOBALS["lang"]['Operating System'] = 'Driftssystem';

$GLOBALS["lang"]['Operating System Family Contains'] = 'Operativsystemfamilie Indeholder';

$GLOBALS["lang"]['Operating Systems'] = 'Operativsystemer';

$GLOBALS["lang"]['optical'] = 'Optisk';

$GLOBALS["lang"]['Optical'] = 'Optisk';

$GLOBALS["lang"]['Optimized'] = 'Optimeret';

$GLOBALS["lang"]['Optional version as audited by Open-AudIT. Use the percent sign % as a wildcard.'] = 'Valgfri version som revideret af Open- Audit. Brug procenttegnet% som et wildcard.';

$GLOBALS["lang"]['options'] = 'Indstillinger';

$GLOBALS["lang"]['Options'] = 'Indstillinger';

$GLOBALS["lang"]['Or select from the below fields.'] = 'Eller vælg fra nedenstående felter.';

$GLOBALS["lang"]['org_descendants'] = 'Org Efterkommere';

$GLOBALS["lang"]['Org Descendants'] = 'Org Efterkommere';

$GLOBALS["lang"]['org_id'] = 'Org- id';

$GLOBALS["lang"]['Org ID'] = 'Org- id';

$GLOBALS["lang"]['Organisation'] = 'Organisation';

$GLOBALS["lang"]['organisation'] = 'Organisation';

$GLOBALS["lang"]['Organisation Descendants'] = 'Organisationsefterkommere';

$GLOBALS["lang"]['Organisations'] = 'Organisationer';

$GLOBALS["lang"]['orgs'] = 'Porrer';

$GLOBALS["lang"]['Orgs'] = 'Porrer';

$GLOBALS["lang"]['Orgs Name'] = 'Org- navn';

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

$GLOBALS["lang"]['Others'] = 'Andre';

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

$GLOBALS["lang"]['PHP'] = 'PHP';

$GLOBALS["lang"]['POD'] = 'POD';

$GLOBALS["lang"]['Package'] = 'Emballage';

$GLOBALS["lang"]['packages'] = 'Pakker';

$GLOBALS["lang"]['Packages'] = 'Pakker';

$GLOBALS["lang"]['pagefile'] = 'Sidefil';

$GLOBALS["lang"]['Pagefile'] = 'Sidefil';

$GLOBALS["lang"]['Pakistan'] = 'Pakistan';

$GLOBALS["lang"]['Palau'] = 'Palau';

$GLOBALS["lang"]['Palestinian Territory'] = 'Palæstinensisk område';

$GLOBALS["lang"]['Panama'] = 'Panama';

$GLOBALS["lang"]['Papua New Guinea'] = 'Papua Ny Guinea';

$GLOBALS["lang"]['Paraguay'] = 'Paraguayfrance. kgm';

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

$GLOBALS["lang"]['permission'] = 'Tilladelse';

$GLOBALS["lang"]['Permission'] = 'Tilladelse';

$GLOBALS["lang"]['permissions'] = 'Tilladelser';

$GLOBALS["lang"]['Permissions'] = 'Tilladelser';

$GLOBALS["lang"]['Personal Area Network'] = 'Personlige områdenetværk';

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

$GLOBALS["lang"]['ping'] = 'Ping';

$GLOBALS["lang"]['Ping'] = 'Ping';

$GLOBALS["lang"]['Pitcairn Islands'] = 'Pitcairnøerne';

$GLOBALS["lang"]['placement'] = 'Placering';

$GLOBALS["lang"]['Placement'] = 'Placering';

$GLOBALS["lang"]['Please have an Open-AudIT administrator logon and upgrade the database.'] = 'Venligst have en Open- Audit administrator logon og opgradere databasen.';

$GLOBALS["lang"]['Please note that the select box will override the text input box.'] = 'Bemærk venligst at feltet Vælg vil tilsidesætte tekstinddatafeltet.';

$GLOBALS["lang"]['Please set using'] = 'Sæt venligst brug';

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

$GLOBALS["lang"]['Polite'] = 'Kalit';

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

$GLOBALS["lang"]['position'] = 'Stilling';

$GLOBALS["lang"]['Position'] = 'Stilling';

$GLOBALS["lang"]['postcode'] = 'Postnummer';

$GLOBALS["lang"]['Postcode'] = 'Postnummer';

$GLOBALS["lang"]['power_circuit'] = 'Kraftkredsløb';

$GLOBALS["lang"]['Power Circuit'] = 'Kraftkredsløb';

$GLOBALS["lang"]['power_sockets'] = 'Strømstikdåse';

$GLOBALS["lang"]['Power Sockets'] = 'Strømstikdåse';

$GLOBALS["lang"]['Predictable'] = 'Forudsigelig';

$GLOBALS["lang"]['Preferences'] = 'Indstillinger';

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

$GLOBALS["lang"]['profile'] = 'Profil';

$GLOBALS["lang"]['Profile'] = 'Profil';

$GLOBALS["lang"]['program'] = 'Program';

$GLOBALS["lang"]['Program'] = 'Program';

$GLOBALS["lang"]['protocol'] = 'Protokol';

$GLOBALS["lang"]['Protocol'] = 'Protokol';

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

$GLOBALS["lang"]['Query'] = 'Forespørgsel';

$GLOBALS["lang"]['queue'] = 'Kø';

$GLOBALS["lang"]['Queue'] = 'Kø';

$GLOBALS["lang"]['Queue Limit'] = 'Kø grænse';

$GLOBALS["lang"]['Queued Device Audits'] = 'Revision af enheder i kø';

$GLOBALS["lang"]['Queued IP Scans'] = 'I kø IP- scans';

$GLOBALS["lang"]['Queued Items'] = 'Poster i kø';

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

$GLOBALS["lang"]['Red Query'] = 'Rød forespørgsel';

$GLOBALS["lang"]['Redirect URI'] = 'Omdiriger URI';

$GLOBALS["lang"]['redirect_uri'] = 'Omdiriger Uri';

$GLOBALS["lang"]['Redirect Uri'] = 'Omdiriger Uri';

$GLOBALS["lang"]['references'] = 'Henvisninger';

$GLOBALS["lang"]['References'] = 'Henvisninger';

$GLOBALS["lang"]['region'] = 'Region';

$GLOBALS["lang"]['Region'] = 'Region';

$GLOBALS["lang"]['registered_user'] = 'Registreret bruger';

$GLOBALS["lang"]['Registered User'] = 'Registreret bruger';

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

$GLOBALS["lang"]['Report'] = 'Rapport';

$GLOBALS["lang"]['Report on your devices, networks and more'] = 'Rapport om dine enheder, netværk og mere';

$GLOBALS["lang"]['reportable'] = 'Indberetningspligtige';

$GLOBALS["lang"]['Reportable'] = 'Indberetningspligtige';

$GLOBALS["lang"]['Reports'] = 'Rapporter';

$GLOBALS["lang"]['request'] = 'Anmodning';

$GLOBALS["lang"]['Request'] = 'Anmodning';

$GLOBALS["lang"]['Request a Specific CVE'] = 'Anmodning om en specifik CVE';

$GLOBALS["lang"]['requested'] = 'Besøgt';

$GLOBALS["lang"]['Requested'] = 'Besøgt';

$GLOBALS["lang"]['require_port'] = 'Kræv havn';

$GLOBALS["lang"]['Require Port'] = 'Kræv havn';

$GLOBALS["lang"]['Require an Open Port'] = 'Kræv en åben port';

$GLOBALS["lang"]['Required'] = 'Krævet';

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

$GLOBALS["lang"]['Results'] = 'Resultater';

$GLOBALS["lang"]['retrieved'] = 'Retrieved';

$GLOBALS["lang"]['Retrieved'] = 'Retrieved';

$GLOBALS["lang"]['retrieved_ident'] = 'Retrieved Ident';

$GLOBALS["lang"]['Retrieved Ident'] = 'Retrieved Ident';

$GLOBALS["lang"]['retrieved_name'] = 'Tilbagetrukket navn';

$GLOBALS["lang"]['Retrieved Name'] = 'Tilbagetrukket navn';

$GLOBALS["lang"]['Retrieved from the device - Windows:Win32_ComputerSystemProduct, Linux:dmidecode, MacOS:system_profiler, ESXi:vim-cmd hostsvc/hostsummary, HP-UX:machinfo, Solaris:smbios, AIX:uname.'] = 'Tilbagetrukket fra enheden - Windows: Win32 _ ComputerSystemProduct, Linux: dmidecode, MacOS: system _ profiler, ESXi: vim- cmd hostsvc / hostsummary, HP- UX: machinfo, Solaris: smbios, AIX: uname.';

$GLOBALS["lang"]['Reunion'] = 'Genforening';

$GLOBALS["lang"]['revision'] = 'Revision';

$GLOBALS["lang"]['Revision'] = 'Revision';

$GLOBALS["lang"]['risk_assesment_result'] = 'Risk Assesment Resultat';

$GLOBALS["lang"]['Risk Assesment Result'] = 'Risk Assesment Resultat';

$GLOBALS["lang"]['role'] = 'Rolle';

$GLOBALS["lang"]['Role'] = 'Rolle';

$GLOBALS["lang"]['roles'] = 'Ruller';

$GLOBALS["lang"]['Roles'] = 'Ruller';

$GLOBALS["lang"]['Romania'] = 'Rumænien';

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

$GLOBALS["lang"]['Run Discovery'] = 'Kør søgerName';

$GLOBALS["lang"]['Run Discovery on Devices'] = 'Kør søgning på enheder';

$GLOBALS["lang"]['Run a discovery and find out <b>Whats On Your Network?</b>'] = 'Kør en opdagelse og find ud af <b>Hvad er på dit netværk?</b>';

$GLOBALS["lang"]['Run this Command'] = 'Kør denne kommando';

$GLOBALS["lang"]['runas'] = 'Runas';

$GLOBALS["lang"]['Runas'] = 'Runas';

$GLOBALS["lang"]['Running Open-AudIT Apache Service Under Windows'] = 'Kør Open- Audit Apache Service under Windows';

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

$GLOBALS["lang"]['Save as Default'] = 'Gem som standard';

$GLOBALS["lang"]['scaling'] = 'Skalering';

$GLOBALS["lang"]['Scaling'] = 'Skalering';

$GLOBALS["lang"]['scan_options'] = 'Scan indstillinger';

$GLOBALS["lang"]['Scan Options'] = 'Scan indstillinger';

$GLOBALS["lang"]['Scan Options ID'] = 'Scan options ID';

$GLOBALS["lang"]['Scan the Nmap top number of TCP ports.'] = 'Scan Nmap top antal TCP-porte.';

$GLOBALS["lang"]['Scan the Nmap top number of UDP ports.'] = 'Scan Nmap top antal UDP-porte.';

$GLOBALS["lang"]['schedule'] = 'Skema';

$GLOBALS["lang"]['Schedule'] = 'Skema';

$GLOBALS["lang"]['scope'] = 'Anvendelsesområde';

$GLOBALS["lang"]['Scope'] = 'Anvendelsesområde';

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

$GLOBALS["lang"]['Search for Device'] = 'Søg efter enhed';

$GLOBALS["lang"]['Searching Using DataTables'] = 'Søgning ved hjælp af datatabeller';

$GLOBALS["lang"]['secondary'] = 'Sekundær';

$GLOBALS["lang"]['Secondary'] = 'Sekundær';

$GLOBALS["lang"]['Secondary Text'] = 'Sekundær tekst';

$GLOBALS["lang"]['section'] = 'Afdeling';

$GLOBALS["lang"]['Section'] = 'Afdeling';

$GLOBALS["lang"]['secure'] = 'Sikker';

$GLOBALS["lang"]['Secure'] = 'Sikker';

$GLOBALS["lang"]['Security Name'] = 'Sikkerhedsnavn';

$GLOBALS["lang"]['Security Status'] = 'Sikkerhedsstatus';

$GLOBALS["lang"]['security_zone'] = 'Sikkerhedszone';

$GLOBALS["lang"]['Security Zone'] = 'Sikkerhedszone';

$GLOBALS["lang"]['seed_ip'] = 'Til udsæd';

$GLOBALS["lang"]['Seed IP'] = 'Til udsæd';

$GLOBALS["lang"]['seed_ping'] = 'Formand';

$GLOBALS["lang"]['Seed Ping'] = 'Formand';

$GLOBALS["lang"]['seed_restrict_to_private'] = 'Frø Begræns til privat';

$GLOBALS["lang"]['Seed Restrict To Private'] = 'Frø Begræns til privat';

$GLOBALS["lang"]['seed_restrict_to_subnet'] = 'Frø Begræns til subnet';

$GLOBALS["lang"]['Seed Restrict To Subnet'] = 'Frø Begræns til subnet';

$GLOBALS["lang"]['Select'] = 'Vælg';

$GLOBALS["lang"]['Select All'] = 'Vælg alle';

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

$GLOBALS["lang"]['Select a Table'] = 'Vælg en tabel';

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

$GLOBALS["lang"]['service_version'] = 'Service Version';

$GLOBALS["lang"]['Service Version'] = 'Service Version';

$GLOBALS["lang"]['Set'] = 'Sæt';

$GLOBALS["lang"]['set_by'] = 'Sæt af';

$GLOBALS["lang"]['Set By'] = 'Sæt af';

$GLOBALS["lang"]['Set the size (normal or compact) of the tables on the List screens.'] = 'Sæt størrelsen (normal eller kompakt) på tabellerne på List-skærmene.';

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

$GLOBALS["lang"]['short'] = 'Kort';

$GLOBALS["lang"]['Short'] = 'Kort';

$GLOBALS["lang"]['Should I remove all non-current data from this device?'] = 'Skal jeg fjerne alle data fra denne enhed?';

$GLOBALS["lang"]['Should this file (or pattern) be used to exclude files from being reported. Normally, to audit files, this is set to <code>y</code>.'] = 'Skal denne fil (eller mønster) bruges til at udelukke filer fra at blive rapporteret. Normalt, at revidere filer, er dette sat til <code>y</code>.';

$GLOBALS["lang"]['Should this vendor be used when retrieving vulnerabilities from FirstWave.'] = 'Skal denne leverandør bruges, når du henter sårbarheder fra FirstWave.';

$GLOBALS["lang"]['Should we add devices from the remote service, locally.'] = 'Skal vi tilføje enheder fra fjernbetjeningen, lokalt.';

$GLOBALS["lang"]['Should we apply this license to the selected Org as well as the Orgs children?'] = 'Skal vi anvende denne licens på den valgte Org samt Orgs børn?';

$GLOBALS["lang"]['Should we consider a filtered port to be an open port - and therefore flag this IP as having a device attached?'] = 'Skal vi betragte en filtreret port som en åben port - og derfor markere denne IP som værende forsynet med en anordning?';

$GLOBALS["lang"]['Should we consider an open|filtered port to be an open port - and therefore flag this IP as having a device attached?'] = 'Skal vi betragte en åben terminal 124; filtreret port som en åben port - og derfor markere denne IP som at have en enhed fastgjort?';

$GLOBALS["lang"]['Should we expose this group in the web interface.'] = 'Skal vi afsløre denne gruppe i webgrænsefladen.';

$GLOBALS["lang"]['Should we expose this query in the list of reports under the Report menu in the web interface.'] = 'Skal vi udsætte denne forespørgsel i listen over rapporter under rapportmenuen i webgrænsefladen.';

$GLOBALS["lang"]['Should we expose this query in the list of reports under the Reports menu in the web interface.'] = 'Skal vi udsætte denne forespørgsel i listen over rapporter under menuen Rapporter i webgrænsefladen.';

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

$GLOBALS["lang"]['Should we run an audit and submit it (y/n).'] = 'Skal vi køre en revision og indsende den (y / n).';

$GLOBALS["lang"]['Should we test for SNMP using UDP port 161.'] = 'Skal vi teste for SNMP ved hjælp af UDP port 161.';

$GLOBALS["lang"]['Should we test for SSH using TCP port 22.'] = 'Skal vi teste SSH ved hjælp af TCP port 22.';

$GLOBALS["lang"]['Should we test for WMI using TCP port 135.'] = 'Skal vi teste for WMI med TCP port 135.';

$GLOBALS["lang"]['Should we uninstall the agent (y/n).'] = 'Skal vi afinstallere agenten (y / n).';

$GLOBALS["lang"]['Should we use this method to authenticate user credentials. Set to <code>y</code> or <code>n</code>.'] = 'Skal vi bruge denne metode til at godkende brugerlegitimation. Sæt til <code>y</code> eller <code>n</code>.';

$GLOBALS["lang"]['Should we use this method to populate a users roles. The field <code>use_auth</code> must be set to <code>y</code> to use this. Set to <code>y</code> or <code>n</code>.'] = 'Skal vi bruge denne metode til at befolke en bruger roller. Feltet <code>use_auth</code> skal sættes til <code>y</code> at bruge dette. Sæt til <code>y</code> eller <code>n</code>.';

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

$GLOBALS["lang"]['Slovakia (Slovak Republic)'] = 'Slovakiet';

$GLOBALS["lang"]['Slovenia'] = 'Slovenien';

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

$GLOBALS["lang"]['socket'] = 'Sokkel';

$GLOBALS["lang"]['Socket'] = 'Sokkel';

$GLOBALS["lang"]['software'] = 'Software';

$GLOBALS["lang"]['Software'] = 'Software';

$GLOBALS["lang"]['Software Found Last 7 Days'] = 'Software fundet sidste 7 dage';

$GLOBALS["lang"]['Software Found Today'] = 'Software fundet i dag';

$GLOBALS["lang"]['Software Found Yesterday'] = 'Software fundet i går';

$GLOBALS["lang"]['software_key'] = 'Softwarenøgle';

$GLOBALS["lang"]['Software Key'] = 'Softwarenøgle';

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

$GLOBALS["lang"]['started_date'] = 'Startdato';

$GLOBALS["lang"]['Started Date'] = 'Startdato';

$GLOBALS["lang"]['state'] = 'Tilstand';

$GLOBALS["lang"]['State'] = 'Tilstand';

$GLOBALS["lang"]['Stats'] = 'Stats';

$GLOBALS["lang"]['status'] = 'Status';

$GLOBALS["lang"]['Status'] = 'Status';

$GLOBALS["lang"]['Storage'] = 'Opbevaring';

$GLOBALS["lang"]['storage_count'] = 'Lagringstal';

$GLOBALS["lang"]['Storage Count'] = 'Lagringstal';

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

$GLOBALS["lang"]['Submitted From'] = 'Indsendt fra';

$GLOBALS["lang"]['subnet'] = 'Undernet';

$GLOBALS["lang"]['Subnet'] = 'Undernet';

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

$GLOBALS["lang"]['Summary'] = 'Oversigt';

$GLOBALS["lang"]['Sunday'] = 'Søndag';

$GLOBALS["lang"]['supplier'] = 'Leverandør';

$GLOBALS["lang"]['Supplier'] = 'Leverandør';

$GLOBALS["lang"]['Support'] = 'Støtte';

$GLOBALS["lang"]['Supported types are <code>subnet</code>, <code>seed</code> and <code>active directory</code>.'] = 'Understøttede typer er <code>subnet</code>, <code>seed</code> og <code>active directory</code>.';

$GLOBALS["lang"]['Suriname'] = 'Surinam';

$GLOBALS["lang"]['Svalbard & Jan Mayen Islands'] = 'Svalbard & Jan Mayen';

$GLOBALS["lang"]['Swaziland'] = 'Swaziland';

$GLOBALS["lang"]['Sweden'] = 'Sverige';

$GLOBALS["lang"]['switch_device_id'] = 'Skift enhed- ID';

$GLOBALS["lang"]['Switch Device ID'] = 'Skift enhed- ID';

$GLOBALS["lang"]['switch_port'] = 'Skift port';

$GLOBALS["lang"]['Switch Port'] = 'Skift port';

$GLOBALS["lang"]['Switzerland, Swiss Confederation'] = 'Schweiz, Det Schweiziske Forbund';

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

$GLOBALS["lang"]['table'] = 'Tabel';

$GLOBALS["lang"]['Table'] = 'Tabel';

$GLOBALS["lang"]['tag'] = 'Mærke';

$GLOBALS["lang"]['Tag'] = 'Mærke';

$GLOBALS["lang"]['tag_1'] = 'Mærke 1';

$GLOBALS["lang"]['Tag 1'] = 'Mærke 1';

$GLOBALS["lang"]['tag_2'] = 'Mærke 2';

$GLOBALS["lang"]['Tag 2'] = 'Mærke 2';

$GLOBALS["lang"]['tag_3'] = 'Mærke 3';

$GLOBALS["lang"]['Tag 3'] = 'Mærke 3';

$GLOBALS["lang"]['tags'] = 'Mærker';

$GLOBALS["lang"]['Tags'] = 'Mærker';

$GLOBALS["lang"]['Tags :: '] = 'Tags:: ';

$GLOBALS["lang"]['Taiwan'] = 'Taiwan';

$GLOBALS["lang"]['Tajikistan'] = 'Tadsjikistan';

$GLOBALS["lang"]['Tanzania'] = 'Tanzania';

$GLOBALS["lang"]['task'] = 'Opgave';

$GLOBALS["lang"]['Task'] = 'Opgave';

$GLOBALS["lang"]['tasks'] = 'Opgaver';

$GLOBALS["lang"]['Tasks'] = 'Opgaver';

$GLOBALS["lang"]['tcp_ports'] = 'Tcp Ports';

$GLOBALS["lang"]['Tcp Ports'] = 'Tcp Ports';

$GLOBALS["lang"]['tenant'] = 'Tenant';

$GLOBALS["lang"]['Tenant'] = 'Tenant';

$GLOBALS["lang"]['ternary'] = 'Ternary Formand';

$GLOBALS["lang"]['Ternary'] = 'Ternary Formand';

$GLOBALS["lang"]['Test 1'] = 'Prøvning 1';

$GLOBALS["lang"]['Test 2'] = 'Prøvning 2';

$GLOBALS["lang"]['Test 3'] = 'Prøvning 3';

$GLOBALS["lang"]['test_minutes'] = 'Testprotokol';

$GLOBALS["lang"]['Test Minutes'] = 'Testprotokol';

$GLOBALS["lang"]['test_os'] = 'Test Os';

$GLOBALS["lang"]['Test Os'] = 'Test Os';

$GLOBALS["lang"]['test_subnet'] = 'Testsubnet';

$GLOBALS["lang"]['Test Subnet'] = 'Testsubnet';

$GLOBALS["lang"]['tests'] = 'Prøvning';

$GLOBALS["lang"]['Tests'] = 'Prøvning';

$GLOBALS["lang"]['Text'] = 'Tekst';

$GLOBALS["lang"]['Thailand'] = 'Thailand';

$GLOBALS["lang"]['The Active Directory domain to retrieve a list of subnets from.'] = 'Active Directory domæne at hente en liste over subnets fra.';

$GLOBALS["lang"]['The Active Directory server to retrieve a list of subnets from.'] = 'Den Active Directory server til at hente en liste over undernet fra.';

$GLOBALS["lang"]['The Automatable metric captures the answer to the question <strong>Can an attacker automate exploitation events for this vulnerability across multiple targets?</strong> based on steps 1-4 of the kill chain. These steps are reconnaissance, weaponization, delivery, and exploitation (Not Defined, No, Yes).'] = 'Den Automaterbare metrisk indfanger svaret på spørgsmålet <strong>Kan en angriber automatisere udnyttelsesbegivenheder for denne sårbarhed på tværs af flere mål?</strong> baseret på trin 1-4 i dræberkæden. Disse trin er rekognoscering, våben, levering og udnyttelse (Ikke defineret, Nej, Ja).';

$GLOBALS["lang"]['The CVE identifier.'] = 'CVE-identifikatoren.';

$GLOBALS["lang"]['The Cloud that owns this item. Links to <code>clouds.id</code>.'] = 'Den Cloud, der ejer denne vare. Links til <code>clouds.id</code>.';

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

$GLOBALS["lang"]['The ISP or Telco providing this link.'] = 'ISP eller Telco leverer dette link.';

$GLOBALS["lang"]['The JSON record from Mitre.'] = 'JSON-rekorden fra Mitre.';

$GLOBALS["lang"]['The JSON record from the NVD feed.'] = 'JSON record fra NVD feed.';

$GLOBALS["lang"]['The LDAP OU of this user (if LDAP is used).'] = 'Denne brugers LDAP OU (hvis LDAP anvendes).';

$GLOBALS["lang"]['The Location that contains this network. Links to <code>locations.id</code>.'] = 'Placering, der indeholder dette netværk. Links til <code>locations.id</code>.';

$GLOBALS["lang"]['The NVD assigned base status.'] = 'NVD tildelte basisstatus.';

$GLOBALS["lang"]['The Nmap timing preset.'] = 'Nmap timing forudindstillet.';

$GLOBALS["lang"]['The OS this package should be reported against. Blank for all. Use the percent sign % as a wildcard. Will be tested against os_group, os_family and os_name in that order.'] = 'Den OS denne pakke skal rapporteres imod. Blank for alle. Brug procenttegnet% som et wildcard. Vil blive testet mod os _ group, os _ family og os _ name i denne rækkefølge.';

$GLOBALS["lang"]['The Open-AudIT API'] = 'Den Open- Audit API';

$GLOBALS["lang"]['The Open-AudIT id of the linked cloud. Links to <code>clouds.id</code>.'] = 'Open- Audit id for den forbundne sky. Links til <code>clouds.id</code>.';

$GLOBALS["lang"]['The Open-AudIT server code was exeucted within this file.'] = 'Open- Aud IT-serverkoden blev slettet i denne fil.';

$GLOBALS["lang"]['The Open-AudIT server code was exeucted within this function.'] = 'Open- Aud IT-serverkoden blev overskredet inden for denne funktion.';

$GLOBALS["lang"]['The Organisation that owns this item. Links to <code>orgs.id</code>.'] = 'Den organisation, der ejer denne vare. Links til <code>orgs.id</code>.';

$GLOBALS["lang"]['The Process Identifier of the running associated discovery.'] = 'Proces- identifikatoren for den kørende tilknyttede opdagelse.';

$GLOBALS["lang"]['The RU positon of the top of this device.'] = 'Jernbanevirksomhedens positon på toppen af denne anordning.';

$GLOBALS["lang"]['The SNMP community string.'] = 'SNMP \'s samfundsstreng.';

$GLOBALS["lang"]['The SNMP v3 Authentication Passphrase.'] = 'SNMP v3 Authentication Passphrase.';

$GLOBALS["lang"]['The SNMP v3 Authentication Protocol.'] = 'SNMP v3 Authenticationsprotokollen.';

$GLOBALS["lang"]['The SNMP v3 Privacy Passphrase.'] = 'SNMP v3 Privacy Passphrase.';

$GLOBALS["lang"]['The SNMP v3 Privacy Protocol.'] = 'SNMP v3 \'s fortrolighedsprotokol.';

$GLOBALS["lang"]['The SNMP v3 Security Level.'] = 'SNMP v3 Security Level.';

$GLOBALS["lang"]['The SNMP v3 Security Name.'] = 'SNMP v3 sikkerhedsnavn.';

$GLOBALS["lang"]['The SNMPv3 context Engine ID (optional).'] = 'SNMPv3-kontekstmotorens ID (valgfrit).';

$GLOBALS["lang"]['The SNMPv3 context Name (optional).'] = 'SNMPv3 kontekstnavn (valgfrit).';

$GLOBALS["lang"]['The URL of the external system.'] = 'URL \'en for det eksterne system.';

$GLOBALS["lang"]['The URL of your Open-AudIT Server that this Collector will report to (no trailing slash).'] = 'URL \'en for din Open- Audit Server, som denne Collector vil rapportere til (ingen efterfølgende skråstreg).';

$GLOBALS["lang"]['The URL the audit scripts should submit their result to.'] = 'Den URL revision scripts bør indsende deres resultat til.';

$GLOBALS["lang"]['The actual full name of this user.'] = 'Det faktiske fulde navn på denne bruger.';

$GLOBALS["lang"]['The associated baseline. Links to <code>baselines.id</code>.'] = 'Den relaterede baseline. Links til <code>baselines.id</code>.';

$GLOBALS["lang"]['The associated discovery (if required). Links to <code>discoveries.id</code>.'] = 'Den tilknyttede opdagelse (hvis påkrævet). Links til <code>discoveries.id</code>.';

$GLOBALS["lang"]['The attribute to test (from the <code>devices</code> table).'] = 'Attributten til prøvningen (fra <code>devices</code> Tabel).';

$GLOBALS["lang"]['The attribute to test (must match an external field name from below).'] = 'Attributten til prøvningen (skal svare til et eksternt feltnavn nedefra).';

$GLOBALS["lang"]['The audit script upon which to base your customisations.'] = 'Den revision script til at basere dine tilpasninger.';

$GLOBALS["lang"]['The base path from which to search for Users.'] = 'Basisstien hvorfra du skal søge efter brugere.';

$GLOBALS["lang"]['The benchmark type.'] = 'Referencetype.';

$GLOBALS["lang"]['The building the rack is located in.'] = 'Bygningen er placeret i.';

$GLOBALS["lang"]['The calculated number of devices to be created externally.'] = 'Det beregnede antal enheder, der skal oprettes eksternt.';

$GLOBALS["lang"]['The calculated number of devices to be created in Open-AudIT.'] = 'Det beregnede antal enheder, der skal oprettes i Open- Audit.';

$GLOBALS["lang"]['The collectors internal IP used when it runs a discovery.'] = 'Samlere interne IP bruges, når det kører en opdagelse.';

$GLOBALS["lang"]['The column name from the foreign table. Should be one of: class, environment, status, type or menu_category.'] = 'Kolonnens navn fra den udenlandske tabel. Bør være en af: klasse, miljø, status, type eller menu _ kategori.';

$GLOBALS["lang"]['The command executed upon the target device or Open-AudIT server code executed during discovery.'] = 'Kommandoen udført på målenheden eller Open- Audit- server- kode udført under opdagelsen.';

$GLOBALS["lang"]['The configuration of your cluster can be: <code>active/active</code>, <code>active/passive</code>, <code>N+1</code>, <code>N+M</code>, <code>N-to-1</code>, <code>N-to-N</code>, <code>other</code> or blank.'] = 'Konfigurationen af din klynge kan være: <code>active/active</code>, <code>active/passive</code>, <code>N+1</code>, <code>N+M</code>, <code>N-to-1</code>, <code>N-to-N</code>, <code>other</code> eller blank.';

$GLOBALS["lang"]['The credentials password. If the credentials are an SSH Key, this is the password used to unlock the key and is optional.'] = 'Adgangskoden. Hvis legitimationerne er en SSH-nøgle, dette er den adgangskode, der bruges til at låse nøglen op og er valgfri.';

$GLOBALS["lang"]['The credentials username.'] = 'Brugernavnet.';

$GLOBALS["lang"]['The current status of the Cloud Discovery.'] = 'Den aktuelle status af Cloud Discovery.';

$GLOBALS["lang"]['The current status of the discovery.'] = 'Den aktuelle status af opdagelsen.';

$GLOBALS["lang"]['The dashboard that will be shown by default for this user. Links to <code>dashboards.id</code>.'] = 'Det instrumentbræt, der vil blive vist som standard for denne bruger. Links til <code>dashboards.id</code>.';

$GLOBALS["lang"]['The database version and web version are inconsistent.'] = 'Databasen version og web-version er inkonsistente.';

$GLOBALS["lang"]['The date of license expiration.'] = 'Datoen for licensens udløb.';

$GLOBALS["lang"]['The date the software is discontinued by the manufacturer. Usually replaced by a newer version. Maintenance may still be available.'] = 'Den dato, hvor softwaren ophører af fabrikanten. Normalt erstattet af en nyere version. Vedligeholdelse kan stadig være til rådighed.';

$GLOBALS["lang"]['The date the software no longer receives updates and is effectively discontinued altogether. Maintenance is discontinued.'] = 'Datoen softwaren ikke længere modtager opdateringer og er effektivt indstillet helt. Vedligeholdelsen afbrydes.';

$GLOBALS["lang"]['The date this item was changed or added (read only). NOTE - This is the timestamp from the server.'] = 'Datoen for dette punkt blev ændret eller tilføjet (kun læst). BEMÆRK - Dette er tidsstemplet fra serveren.';

$GLOBALS["lang"]['The date/time when this result was created.'] = 'Dato / tidspunkt, hvor dette resultat blev skabt.';

$GLOBALS["lang"]['The day of the month when this task should execute (* for every day).'] = 'Den dag i måneden, hvor denne opgave skal udføres (* for hver dag).';

$GLOBALS["lang"]['The day of the week when this task should execute (* for every day).'] = 'Den dag i ugen, hvor denne opgave skal udføres (* for hver dag).';

$GLOBALS["lang"]['The default language assigned to any user created by this method.'] = 'Standardsproget tildelt enhver bruger oprettet ved denne metode.';

$GLOBALS["lang"]['The device must respond to an Nmap ping before it is considered online.'] = 'Enheden skal reagere på en Nmap ping, før det betragtes online.';

$GLOBALS["lang"]['The device within Open-AudIT. Links to <code>devices.id</code>.'] = 'Enheden i Open- Audit. Links til <code>devices.id</code>.';

$GLOBALS["lang"]['The direct link for the script is'] = 'Det direkte link til scriptet er';

$GLOBALS["lang"]['The email address of the reciever'] = 'E-mailadressen';

$GLOBALS["lang"]['The enterprise binary from FirstWave is required for a license. Please download Open-AudIT from'] = 'Virksomheden binær fra FirstWave er påkrævet for en licens. Download venligst Open- Audit fra';

$GLOBALS["lang"]['The entire associated baseline this result is from.'] = 'Hele den tilknyttede baseline dette resultat er fra.';

$GLOBALS["lang"]['The externally referenced location ID. Usually populated by Cloud audits.'] = 'Det eksternt refererede sted- id. Normalt befolket af Cloud revisioner.';

$GLOBALS["lang"]['The first time that Open-AudIT retrieved details of this device.'] = 'Første gang, at Open- Audit hentede oplysninger om denne enhed.';

$GLOBALS["lang"]['The floor the rack is located on.'] = 'Gulvet rack er placeret på.';

$GLOBALS["lang"]['The foreign table to reference. Should be one of: devices, locations, orgs or queries.'] = 'Den udenlandske tabel til reference. Bør være en af: enheder, steder, orgs eller forespørgsler.';

$GLOBALS["lang"]['The format used for the output to be emailed.'] = 'Det format, der bruges til uddata, der skal sendes.';

$GLOBALS["lang"]['The fully qualified column upon which to group by. NOTE: When type = traffic, this represents the red query id.'] = 'Den fuldt kvalificerede kolonne, som skal grupperes efter. BEMÆRK: Når type = trafik, repræsenterer dette den røde forespørgsel id.';

$GLOBALS["lang"]['The fully qualified table.column. Multiple may be provided, separated by a comma (no spaces).'] = 'Den fuldt kvalificerede table.column. Der kan leveres flere, adskilt af et komma (ingen mellemrum).';

$GLOBALS["lang"]['The generated SQL query to test for this vulnerability. This field can be edited to correct the query as required.'] = 'Den genererede SQL forespørgsel at teste for denne sårbarhed. Dette felt kan redigeres for at korrigere forespørgslen efter behov.';

$GLOBALS["lang"]['The group of devices on which the baseline was run against.'] = 'Den gruppe af enheder, som basislinjen blev kørt imod.';

$GLOBALS["lang"]['The group that provides a list of devices for the integration. Links to <code>groups.id</code>.'] = 'Den gruppe, der leverer en liste over anordninger til integration. Links til <code>groups.id</code>.';

$GLOBALS["lang"]['The hour of the day when this task should execute (* for every hour).'] = 'Den time på dagen, hvor denne opgave skal udføres (* for hver time).';

$GLOBALS["lang"]['The id of the linked device. Links to <code>devices.id</code>'] = 'Identifikationen af den tilsluttede enhed. Links til <code>devices.id</code>';

$GLOBALS["lang"]['The identifier column (integer) in the database (read only).'] = 'Identifikationskolonnen (heltal) i databasen (kun læst).';

$GLOBALS["lang"]['The importance of this baseline (not used yet).'] = 'Betydningen af denne baseline (endnu ikke anvendt).';

$GLOBALS["lang"]['The integer of severity.'] = 'Hele sværhedsgraden.';

$GLOBALS["lang"]['The ip address of the Auth method.'] = 'Ip-adressen på Auth-metoden.';

$GLOBALS["lang"]['The language to translate the web interface into for the user.'] = 'Sproget til at oversætte web-interface til for brugeren.';

$GLOBALS["lang"]['The last date and time this item was executed (read only).'] = 'Den sidste dato og tidspunkt dette element blev udført (læs kun).';

$GLOBALS["lang"]['The last time that Open-AudIT retrieved details of this device.'] = 'Sidste gang, at Open- Audit hentede oplysninger om denne enhed.';

$GLOBALS["lang"]['The last time this benchmarks was executed.'] = 'Sidste gang disse benchmarks blev udført.';

$GLOBALS["lang"]['The last time this integration was run.'] = 'Sidste gang denne integration blev gennemført.';

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

$GLOBALS["lang"]['The maximum physical weight (in KGs) this rack can hold.'] = 'Den maksimale fysiske vægt (i KG) denne rack kan holde.';

$GLOBALS["lang"]['The maximum total BTUs this rack is rated for.'] = 'Den maksimale samlede BTU \'er, som denne rack er vurderet til.';

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

$GLOBALS["lang"]['The optional secondary column. NOTE: When type = traffic, this represents the yellow query id.'] = 'Den valgfrie sekundære kolonne. BEMÆRK: Når type = trafik, repræsenterer dette den gule forespørgsel id.';

$GLOBALS["lang"]['The optional third column. NOTE: When type = traffic, this represents the green query id.'] = 'Den valgfrie tredje kolonne. BEMÆRK: Når type = trafik, dette repræsenterer den grønne forespørgsel id.';

$GLOBALS["lang"]['The orientation of this device.'] = 'Anordningens retning.';

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

$GLOBALS["lang"]['The process identifier of this queue item.'] = 'Proces- id for dette køeelement.';

$GLOBALS["lang"]['The process that was used last to retrieve details about the device'] = 'Processen der sidst blev brugt til at hente detaljer om enheden';

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

$GLOBALS["lang"]['The result of the command.'] = 'Resultatet af kommandoen.';

$GLOBALS["lang"]['The room the rack is located in.'] = 'Rummet rack er placeret i.';

$GLOBALS["lang"]['The row the rack is located in.'] = 'Rækken rack er placeret i.';

$GLOBALS["lang"]['The secret key used in conjunction with your AWS EC2 API key.'] = 'Den hemmelige nøgle bruges i forbindelse med din AWS EC2 API nøgle.';

$GLOBALS["lang"]['The software end-of-life date.'] = 'Den software ende- of-life dato.';

$GLOBALS["lang"]['The software end-of-service-life date.'] = 'Den software ende- of-service-liv dato.';

$GLOBALS["lang"]['The specific database column from the specified database table.'] = 'Den specifikke databasekolonne fra den angivne databasetabel.';

$GLOBALS["lang"]['The specific database table.'] = 'Den specifikke database tabel.';

$GLOBALS["lang"]['The standard Nmap timing options. We usually use -T4 (Aggressive) as this is recommended for a decent broadband or ethernet connection.'] = 'Standard Nmap timing muligheder. Vi bruger normalt -T4 (Aggressive) som dette anbefales for en anstændig bredbånd eller ethernet forbindelse.';

$GLOBALS["lang"]['The status of this integration'] = 'Status for denne integration';

$GLOBALS["lang"]['The status of this queued item.'] = 'Status for dette punkt i køen.';

$GLOBALS["lang"]['The target IP this log entry referers to (if any).'] = 'Målet IP denne log post refererer til (hvis nogen).';

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

$GLOBALS["lang"]['The unique identifier of this server.'] = 'Den entydige identifikator for denne server.';

$GLOBALS["lang"]['The user account this collector uses. Links to <code>users.id</code>.'] = 'Den brugerkonto denne samler bruger. Links til <code>users.id</code>.';

$GLOBALS["lang"]['The username used to access the external system.'] = 'Brugernavnet bruges til at få adgang til det eksterne system.';

$GLOBALS["lang"]['The users email address.'] = 'Brugernes e-mailadresse.';

$GLOBALS["lang"]['The usual hours of operation at this site.'] = 'De sædvanlige driftstimer på dette sted.';

$GLOBALS["lang"]['The value assigned to the item.'] = 'Værdien af posten.';

$GLOBALS["lang"]['The value that is stored for this particular item.'] = 'Den værdi, der er gemt for denne vare.';

$GLOBALS["lang"]['The vendor name as per CPE entries.'] = 'Sælger navn som pr CPE indgange.';

$GLOBALS["lang"]['The vendor taken from the CPE.'] = 'Sælgeren er taget fra CPE.';

$GLOBALS["lang"]['The web directory on the host that Open-AudIT is installed (requires a trailing slash).'] = 'Webmappen på værten, at Open- Audit er installeret (kræver en efterfølgende skråstreg).';

$GLOBALS["lang"]['The widget at position '] = 'Kontrollen på position ';

$GLOBALS["lang"]['The width of this device.'] = 'Bredden af denne anordning.';

$GLOBALS["lang"]['Then'] = 'Så';

$GLOBALS["lang"]['This CVE will be retrieved and overwrite the existing CVE if it exists.'] = 'Denne CVE vil blive hentet og overskrive den eksisterende CVE, hvis den eksisterer.';

$GLOBALS["lang"]['This attribute is stored as a JSON object. It is the list of all collections and contains the collection name along with <code>c</code>, <code>r</code>, <code>u</code> and,or <code>d</code> which represent create, read, update and delete. These are the actions a user can perform on items from that particular collection.'] = 'Denne attribut gemmes som et JSON objekt. Det er listen over alle samlinger og indeholder indsamling navn sammen med <code>c</code>, <code>r</code>, <code>u</code> og <code>d</code> som repræsenterer oprette, læse, opdatere og slette. Dette er de handlinger, en bruger kan udføre på elementer fra den pågældende samling.';

$GLOBALS["lang"]['This can be either a varchar (a text field), a list (a list of values that can be selected) or a date.'] = 'Dette kan være enten et varchar (et tekstfelt), en liste (en liste over værdier, der kan vælges) eller en dato.';

$GLOBALS["lang"]['This collectors universally unique identifier.'] = 'Denne samlere universelt unikke identifikator.';

$GLOBALS["lang"]['This description is auto-populated and should ideally be left as-is.'] = 'Denne beskrivelse er selvbefolket og bør helst efterlades som -is.';

$GLOBALS["lang"]['This feature requires a Professional or an Enterprise license.'] = 'Denne funktion kræver en Professional eller en Enterprise licens.';

$GLOBALS["lang"]['This is generally the primary column, unless otherwise configured. NOTE: When type = traffic, this represents the secondary text.'] = 'Dette er generelt den primære kolonne, medmindre andet er indstillet. BEMÆRK: Når type = trafik, repræsenterer dette den sekundære tekst.';

$GLOBALS["lang"]['This item must match the value of the attribute selected or contains the ID of the query to be used.'] = 'Dette punkt skal matche værdien af den valgte attribut eller indeholder ID for den forespørgsel, der skal bruges.';

$GLOBALS["lang"]['This item must match the value of the attribute selected.'] = 'Dette punkt skal matche værdien af den valgte attribut.';

$GLOBALS["lang"]['This license expires on'] = 'Denne licens udløber den';

$GLOBALS["lang"]['This should be set to either 1 or the height of the rack.'] = 'Dette bør indstilles til enten 1 eller højden af rack.';

$GLOBALS["lang"]['This will auto-populate.'] = 'Dette vil selvbefolke.';

$GLOBALS["lang"]['This will considerably slow the discovery scan.'] = 'Dette vil forsinke scanningen.';

$GLOBALS["lang"]['Thursday'] = 'Torsdag';

$GLOBALS["lang"]['time_caption'] = 'Tidstekst';

$GLOBALS["lang"]['Time Caption'] = 'Tidstekst';

$GLOBALS["lang"]['time_daylight'] = 'Dagslys';

$GLOBALS["lang"]['Time Daylight'] = 'Dagslys';

$GLOBALS["lang"]['Time to Execute'] = 'Tid til at udføre';

$GLOBALS["lang"]['timeout'] = 'Tidsudløb';

$GLOBALS["lang"]['Timeout'] = 'Tidsudløb';

$GLOBALS["lang"]['Timeout Per Target (Seconds)'] = 'Tidsudløb pr. mål (sekunder)';

$GLOBALS["lang"]['Timesatamp'] = 'Timesatamp';

$GLOBALS["lang"]['Timestamp'] = 'Tidsstempel';

$GLOBALS["lang"]['timing'] = 'Timing';

$GLOBALS["lang"]['Timing'] = 'Timing';

$GLOBALS["lang"]['Timor-Leste'] = 'Timor- Leste';

$GLOBALS["lang"]['Title'] = 'Titel';

$GLOBALS["lang"]['Togo'] = 'Togo';

$GLOBALS["lang"]['Tokelau'] = 'TokelauCity in Italy';

$GLOBALS["lang"]['Tonga'] = 'Tonga';

$GLOBALS["lang"]['toolbar_style'] = 'Værktøjslinjestil';

$GLOBALS["lang"]['Toolbar Style'] = 'Værktøjslinjestil';

$GLOBALS["lang"]['Top Nmap TCP Ports'] = 'Top Nmap TCP Ports';

$GLOBALS["lang"]['Top Nmap UDP Ports'] = 'Top Nmap UDP Ports';

$GLOBALS["lang"]['Traditional Chinese'] = 'Traditionel kinesisk';

$GLOBALS["lang"]['Traffic Light'] = 'Trafiklys';

$GLOBALS["lang"]['Trinidad and Tobago'] = 'Trinidad og Tobago';

$GLOBALS["lang"]['Troubleshooting LDAP Logins'] = 'Fejlfinding af LDAP- loginer';

$GLOBALS["lang"]['Try all the latest features with a FREE 100 device license of Open-AudIT Enterprise. Please read the <a href=\"'] = 'Prøv alle de nyeste funktioner med en GRATIS 100 enhed licens af Open- Audit Enterprise. Læs venligst < a HURF =\ "';

$GLOBALS["lang"]['Tuesday'] = 'Tirsdag';

$GLOBALS["lang"]['Tunisia'] = 'Tunesien';

$GLOBALS["lang"]['Turkey'] = 'Tyrkiet';

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

$GLOBALS["lang"]['URL'] = 'URL';

$GLOBALS["lang"]['uuid'] = 'UUID';

$GLOBALS["lang"]['UUID'] = 'UUID';

$GLOBALS["lang"]['udp_ports'] = 'Udp Ports';

$GLOBALS["lang"]['Udp Ports'] = 'Udp Ports';

$GLOBALS["lang"]['Uganda'] = 'Uganda';

$GLOBALS["lang"]['Ukraine'] = 'Ukraine';

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

$GLOBALS["lang"]['Use SNMP'] = 'Brug SNMP';

$GLOBALS["lang"]['Use SSH'] = 'Brug SSH';

$GLOBALS["lang"]['Use Secure (LDAPS)'] = 'Brug sikker (LDAPS)';

$GLOBALS["lang"]['Use Service Version Detection'] = 'Detektering af brugsservice-version';

$GLOBALS["lang"]['Use WMI'] = 'Brug WMI';

$GLOBALS["lang"]['Use for Authentication'] = 'Brug til autentificering';

$GLOBALS["lang"]['Use for Roles'] = 'Anvendelse til ruller';

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

$GLOBALS["lang"]['Users, Roles and Orgs'] = 'Brugere, ruller og orger';

$GLOBALS["lang"]['Using Entra for Auth'] = 'Brug Entra til Auth';

$GLOBALS["lang"]['Using OKTA for Auth'] = 'Brug OKTA til Auth';

$GLOBALS["lang"]['Usually Mbs, from Location A.'] = 'Normalt Mb / s, fra Placering A.';

$GLOBALS["lang"]['Usually Mbs, from Location B.'] = 'Normalt Mb / s, fra Placering B.';

$GLOBALS["lang"]['Usually Mbs, to Location A.'] = 'Normalt Mb / s, til placering A.';

$GLOBALS["lang"]['Usually Mbs, to Location B.'] = 'Normalt Mb / s, til placering B.';

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

$GLOBALS["lang"]['values'] = 'Værdier';

$GLOBALS["lang"]['Values'] = 'Værdier';

$GLOBALS["lang"]['Vanuatu'] = 'Vanuatu';

$GLOBALS["lang"]['VarChar'] = 'VarChar Formand';

$GLOBALS["lang"]['Varchar'] = 'Varchar Formand';

$GLOBALS["lang"]['variable'] = 'Variabel';

$GLOBALS["lang"]['Variable'] = 'Variabel';

$GLOBALS["lang"]['vendor'] = 'Leverandør';

$GLOBALS["lang"]['Vendor'] = 'Leverandør';

$GLOBALS["lang"]['vendors'] = 'Leverandører';

$GLOBALS["lang"]['Vendors'] = 'Leverandører';

$GLOBALS["lang"]['Venezuela'] = 'Venezuela';

$GLOBALS["lang"]['version'] = 'Version';

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

$GLOBALS["lang"]['View'] = 'Vis';

$GLOBALS["lang"]['View All'] = 'Vis alle';

$GLOBALS["lang"]['View Details'] = 'Vis detaljer';

$GLOBALS["lang"]['View Device'] = 'Vis enhed';

$GLOBALS["lang"]['View Discovery'] = 'Vis Opdagelse';

$GLOBALS["lang"]['View Policy'] = 'Vis politik';

$GLOBALS["lang"]['Virtual Private Network'] = 'Virtuelt privat netværk';

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

$GLOBALS["lang"]['vulnerability_id'] = 'Sårbarhedsidentifikation';

$GLOBALS["lang"]['Vulnerability ID'] = 'Sårbarhedsidentifikation';

$GLOBALS["lang"]['WHERE'] = 'HVOR';

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

$GLOBALS["lang"]['Web'] = 'Web';

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

$GLOBALS["lang"]['Welcome to FirstWave Open-AudIT'] = 'Velkommen til FirstWave Open- Audit';

$GLOBALS["lang"]['Western Sahara'] = 'Vestsahara';

$GLOBALS["lang"]['What Can I Expect if I Have no Credentials'] = 'Hvad kan jeg forvente, hvis jeg ikke har noget valg';

$GLOBALS["lang"]['What is the purpose of this rack.'] = 'Hvad er formålet med denne rack.';

$GLOBALS["lang"]['What is the type of this location. Allowable types held in <code>attributes</code> table.'] = 'Hvad er typen af denne placering. Godtgørelsestyper <code>attributes</code> Bord.';

$GLOBALS["lang"]['When integrating devices from the external system, if the device doesnt exist in Open-AudIT should we create it?'] = 'Når du integrerer enheder fra det eksterne system, hvis enheden doesnt eksisterer i Open- Audit skal vi oprette det?';

$GLOBALS["lang"]['When integrating devices from the external system, if the device has been updated in the external system should we update it in Open-AudIT?'] = 'Når du integrerer enheder fra det eksterne system, hvis enheden er blevet opdateret i det eksterne system bør vi opdatere det i Open- Audit?';

$GLOBALS["lang"]['When retrieve an external device, should we run discovery upon it?'] = 'Når du henter en ekstern enhed, skal vi køre opdagelse på det?';

$GLOBALS["lang"]['When this benchmark is scheduled to be executed. Derived from the associated <code>tasks.type</code> and <code>tasks.sub_resource_id</code>.'] = 'Når dette benchmark er planlagt til at blive gennemført. Afledt af den tilknyttede <code>tasks.type</code> og <code>tasks.sub_resource_id</code>.';

$GLOBALS["lang"]['When this log was created.'] = 'Da denne log blev oprettet.';

$GLOBALS["lang"]['When this queue item started processing.'] = 'Når denne kø element begyndte behandling.';

$GLOBALS["lang"]['When we execute this baseline, should we check for items on devices that are not in a policy for this baseline.'] = 'Når vi udfører denne basislinje, skal vi kontrollere for elementer på enheder, der ikke er i en politik for denne basislinje.';

$GLOBALS["lang"]['When we receive an open port, should we attempt to test for the version of the service currently running upon it? This assists in confirming actual running services.'] = 'Når vi modtager en åben port, bør vi forsøge at teste for den version af tjenesten, der kører på det i øjeblikket? Dette hjælper med at bekræfte den faktiske drift.';

$GLOBALS["lang"]['where'] = 'Hvor';

$GLOBALS["lang"]['Where'] = 'Hvor';

$GLOBALS["lang"]['Where on the Device Details screen you would like to see this field appear.'] = 'Hvor på skærmen Enhedsdetaljer du gerne vil se dette felt vises.';

$GLOBALS["lang"]['Where the rack is in the row.'] = 'Hvor rack er i rækken.';

$GLOBALS["lang"]['Whether the vulnerability affects components beyond its own using Impact, Availability and Confidentiality.'] = 'Om sårbarheden påvirker komponenter ud over deres egen ved hjælp af Impact, Tilgængelighed og fortrolighed.';

$GLOBALS["lang"]['Whether user interaction is required (None, Passive, Active).'] = 'Om brugerinteraktion er påkrævet (Ingen, Passive, Aktiv).';

$GLOBALS["lang"]['Which OS this benchmark applies to.'] = 'Hvilket OS dette benchmark gælder for.';

$GLOBALS["lang"]['Which devices should Open-AudIT create from the external system (if any). Using All, None or a given Attribute.'] = 'Hvilke enheder skal Open- Audit oprette fra det eksterne system (hvis nogen). Bruger alle, Ingen eller en given attribut.';

$GLOBALS["lang"]['Which sub-menu should we display this query in.'] = 'Hvilken undermenu skal vi vise denne forespørgsel i.';

$GLOBALS["lang"]['Who made this rack.'] = 'Som lavede det her stativ.';

$GLOBALS["lang"]['Why Windows Server Only?'] = 'Hvorfor kun Windows Server?';

$GLOBALS["lang"]['Why do we exclude this policy?'] = 'Hvorfor udelukker vi denne politik?';

$GLOBALS["lang"]['Wide Area Network'] = 'Bredt områdenetværk';

$GLOBALS["lang"]['Widget'] = 'Kontrol';

$GLOBALS["lang"]['Widget # '] = 'Widget # ';

$GLOBALS["lang"]['Widget Type'] = 'Kontroltype';

$GLOBALS["lang"]['widgets'] = 'Kontroller';

$GLOBALS["lang"]['Widgets'] = 'Kontroller';

$GLOBALS["lang"]['width'] = 'Bredde';

$GLOBALS["lang"]['Width'] = 'Bredde';

$GLOBALS["lang"]['windows'] = 'Vinduer';

$GLOBALS["lang"]['Windows'] = 'Vinduer';

$GLOBALS["lang"]['Windows Test Script'] = 'Windows Test Script';

$GLOBALS["lang"]['Wireless Local Area Network'] = 'Trådløst lokalnet';

$GLOBALS["lang"]['wmi_fails'] = 'Wmi mislykkedes';

$GLOBALS["lang"]['Wmi Fails'] = 'Wmi mislykkedes';

$GLOBALS["lang"]['wmi_timeout'] = 'Wmi Timeout';

$GLOBALS["lang"]['Wmi Timeout'] = 'Wmi Timeout';

$GLOBALS["lang"]['workgroup'] = 'Arbejdsgruppe';

$GLOBALS["lang"]['Workgroup'] = 'Arbejdsgruppe';

$GLOBALS["lang"]['Working Credentials'] = 'Arbejdsudvalg';

$GLOBALS["lang"]['XML'] = 'XML';

$GLOBALS["lang"]['Yellow Query'] = 'Gul forespørgsel';

$GLOBALS["lang"]['Yemen'] = 'Yemen';

$GLOBALS["lang"]['Yes'] = 'Ja';

$GLOBALS["lang"]['You may want to copy and paste this URL in an email to your staff.'] = 'Du kan ønske at kopiere og indsætte denne URL i en e-mail til dit personale.';

$GLOBALS["lang"]['You must delete your existing license before adding a new license.'] = 'Du skal slette din eksisterende licens, før du tilføjer en ny licens.';

$GLOBALS["lang"]['YouTube Tutorials'] = 'YouTube Tutorials';

$GLOBALS["lang"]['Your AWS EC2 API key.'] = 'Din AWS EC2 API nøgle.';

$GLOBALS["lang"]['Your Google Compute credentials as JSON.'] = 'Din Google Compute-legitimation som JSON.';

$GLOBALS["lang"]['Your Licenses'] = 'Dine licenser';

$GLOBALS["lang"]['Your Microsoft Azure Client ID.'] = 'Dit Microsoft Azure-klient-id.';

$GLOBALS["lang"]['Your Microsoft Azure Client Secret.'] = 'Din Microsoft Azure klient Secret.';

$GLOBALS["lang"]['Your Microsoft Azure Subscription ID.'] = 'Dit Microsoft Azure Abonnement- id.';

$GLOBALS["lang"]['Your Microsoft Azure Tennant ID.'] = 'Dit Microsoft Azure Tennant-id.';

$GLOBALS["lang"]['Your SQL to select attributes that will populate this query.'] = 'Din SQL til at vælge attributter, der vil befolke denne forespørgsel.';

$GLOBALS["lang"]['Your SQL to select devices that will populate this group.'] = 'Din SQL til at vælge enheder, der vil befolke denne gruppe.';

$GLOBALS["lang"]['Your SSH key.'] = 'Din SSH nøgle.';

$GLOBALS["lang"]['Your access credentials, as per that clouds native API.'] = 'Din adgang legitimation, som pr at skyer indfødte API.';

$GLOBALS["lang"]['Your description of the status of this connection (provisioned, retired, etc).'] = 'Din beskrivelse af denne forbindelses status (henlæggelser, pensionerede osv.).';

$GLOBALS["lang"]['Your description of this item.'] = 'Din beskrivelse af dette punkt.';

$GLOBALS["lang"]['Your generic name for this piece of software'] = 'Dit generiske navn for dette stykke software';

$GLOBALS["lang"]['Your generic version for this piece of software'] = 'Din generiske version til dette stykke software';

$GLOBALS["lang"]['Zambia'] = 'Zambia';

$GLOBALS["lang"]['Zimbabwe'] = 'Zimbabwe';

$GLOBALS["lang"]['active'] = 'aktiv';

$GLOBALS["lang"]['active directory'] = 'aktiv mappe';

$GLOBALS["lang"]['active/active'] = 'aktiv / aktiv';

$GLOBALS["lang"]['active/passive'] = 'aktiv / passiv';

$GLOBALS["lang"]['advertisement'] = 'reklame';

$GLOBALS["lang"]['alert'] = 'alarm';

$GLOBALS["lang"]['all'] = 'alle';

$GLOBALS["lang"]['allocated'] = 'tildelt';

$GLOBALS["lang"]['amazon'] = 'amazon';

$GLOBALS["lang"]['antivirus'] = 'antivirus';

$GLOBALS["lang"]['application'] = 'ansøgning';

$GLOBALS["lang"]['approved'] = 'godkendt';

$GLOBALS["lang"]['attribute'] = 'attribut';

$GLOBALS["lang"]['auto'] = 'auto';

$GLOBALS["lang"]['backup'] = 'backup';

$GLOBALS["lang"]['banned'] = 'forbudt';

$GLOBALS["lang"]['blog'] = 'blog';

$GLOBALS["lang"]['bottom'] = 'bund';

$GLOBALS["lang"]['browser_lang'] = 'browser _ lang';

$GLOBALS["lang"]['building'] = 'bygning';

$GLOBALS["lang"]['cloud'] = 'cloud';

$GLOBALS["lang"]['code'] = 'kode';

$GLOBALS["lang"]['collector'] = 'opkøber';

$GLOBALS["lang"]['compute'] = 'beregne';

$GLOBALS["lang"]['config'] = 'config';

$GLOBALS["lang"]['contains'] = 'indeholder';

$GLOBALS["lang"]['create'] = 'oprette';

$GLOBALS["lang"]['created'] = 'oprettet';

$GLOBALS["lang"]['critical'] = 'kritisk';

$GLOBALS["lang"]['cve'] = 'cve';

$GLOBALS["lang"]['database'] = 'database';

$GLOBALS["lang"]['debug'] = 'debug';

$GLOBALS["lang"]['delegated'] = 'uddelegeret';

$GLOBALS["lang"]['delete'] = 'Slet';

$GLOBALS["lang"]['deleted'] = 'slettet';

$GLOBALS["lang"]['denied'] = 'nægtet';

$GLOBALS["lang"]['devices'] = 'anordninger';

$GLOBALS["lang"]['digitalocean'] = 'digitalitalozid';

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

$GLOBALS["lang"]['fixed'] = 'fast';

$GLOBALS["lang"]['floor'] = 'gulv';

$GLOBALS["lang"]['front'] = 'front';

$GLOBALS["lang"]['front-left'] = 'Forside-venstre';

$GLOBALS["lang"]['front-right'] = 'Forside-højre';

$GLOBALS["lang"]['github'] = 'github';

$GLOBALS["lang"]['google'] = 'google';

$GLOBALS["lang"]['greater or equals'] = 'større eller lig med';

$GLOBALS["lang"]['greater than'] = 'større end';

$GLOBALS["lang"]['group'] = 'gruppe';

$GLOBALS["lang"]['head'] = 'hoved';

$GLOBALS["lang"]['here'] = 'her';

$GLOBALS["lang"]['high availability'] = 'høj tilgængelighed';

$GLOBALS["lang"]['howto'] = 'howto';

$GLOBALS["lang"]['ignored'] = 'ignoreret';

$GLOBALS["lang"]['in'] = 'til';

$GLOBALS["lang"]['inactive'] = 'inaktiv';

$GLOBALS["lang"]['incomplete'] = 'ufuldstændig';

$GLOBALS["lang"]['info'] = 'info';

$GLOBALS["lang"]['int, text, bool (y/n), etc'] = 'int, text, bool (y / n), etc.';

$GLOBALS["lang"]['is licensed to'] = 'er licenseret til';

$GLOBALS["lang"]['left'] = 'venstre';

$GLOBALS["lang"]['less or equals'] = 'mindre eller lig med';

$GLOBALS["lang"]['less than'] = 'under';

$GLOBALS["lang"]['license'] = 'licens';

$GLOBALS["lang"]['like'] = 'som';

$GLOBALS["lang"]['line'] = 'linje';

$GLOBALS["lang"]['load balancing'] = 'lastafbalancering';

$GLOBALS["lang"]['location'] = 'placering';

$GLOBALS["lang"]['managed'] = 'administreret';

$GLOBALS["lang"]['microsoft'] = 'microsoft';

$GLOBALS["lang"]['mount point'] = 'Monteringspunkt';

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

$GLOBALS["lang"]['openldap'] = 'openldap';

$GLOBALS["lang"]['optimized'] = 'optimeret';

$GLOBALS["lang"]['optionally '] = 'valgfrit ';

$GLOBALS["lang"]['other'] = 'andet';

$GLOBALS["lang"]['package'] = 'pakning';

$GLOBALS["lang"]['partition'] = 'partition';

$GLOBALS["lang"]['pass'] = 'pass';

$GLOBALS["lang"]['pending'] = 'verserende';

$GLOBALS["lang"]['performance'] = 'ydeevne';

$GLOBALS["lang"]['performed'] = 'udført';

$GLOBALS["lang"]['pie'] = 'tærte';

$GLOBALS["lang"]['planning'] = 'planlægning';

$GLOBALS["lang"]['predictable'] = 'forudsigelig';

$GLOBALS["lang"]['query'] = 'forespørgsel';

$GLOBALS["lang"]['rear'] = 'bagside';

$GLOBALS["lang"]['rear-left'] = 'bag- venstre';

$GLOBALS["lang"]['rear-right'] = 'bag- højre';

$GLOBALS["lang"]['regex'] = 'regex';

$GLOBALS["lang"]['release'] = 'frigivelse';

$GLOBALS["lang"]['reserved'] = 'reserveret';

$GLOBALS["lang"]['right'] = 'højre';

$GLOBALS["lang"]['room'] = 'rum';

$GLOBALS["lang"]['row'] = 'række';

$GLOBALS["lang"]['stand-alone'] = 'stå-alene';

$GLOBALS["lang"]['standard'] = 'standard';

$GLOBALS["lang"]['starts with'] = 'starter med';

$GLOBALS["lang"]['storage'] = 'opbevaring';

$GLOBALS["lang"]['timestamp'] = 'Tidsstempel';

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

$GLOBALS["lang"]['unallocated'] = 'ikke tildelt';

$GLOBALS["lang"]['unauthorised'] = 'uautoriseret';

$GLOBALS["lang"]['unknown'] = 'ukendt';

$GLOBALS["lang"]['unmanaged'] = 'uforvaltet';

$GLOBALS["lang"]['unused'] = 'ubrugt';

$GLOBALS["lang"]['update'] = 'opdatering';

$GLOBALS["lang"]['valid'] = 'gyldig';

$GLOBALS["lang"]['virtualisation'] = 'virtualisering';

$GLOBALS["lang"]['warning'] = 'advarsel';

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

