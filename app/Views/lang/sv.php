<?php
$GLOBALS["lang"][' Default, currently '] = ' Standard, för närvarande ';

$GLOBALS["lang"][' is now supported with a language file. To change your user to use this language, click '] = ' stöds nu med en språkfil. För att ändra användaren för att använda detta språk, klicka ';

$GLOBALS["lang"][' seconds'] = ' sekunder';

$GLOBALS["lang"]['10 Minutes'] = '10 minuter';

$GLOBALS["lang"]['15 Minutes'] = '15 minuter';

$GLOBALS["lang"]['30 Minutes'] = '30 minuter';

$GLOBALS["lang"]['5 Minutes'] = '5 minuter';

$GLOBALS["lang"]['<br> <strong>NOTE</strong> - You are accessing this URL from the local Open-AudIT server. The downloaded script will not be able to submit when run on any other machine. If you need to audit other machines, please download the script from any remote machine, not using a browser on the Open-AudIT server itself.'] = '<br/> <strong>Notera</strong> Du får tillgång till den här webbadressen från den lokala Open-AudIT-servern. Det nedladdade skriptet kommer inte att kunna skicka in när du körs på någon annan maskin. Om du behöver granska andra maskiner, ladda ner skriptet från någon fjärrmaskin, inte använda en webbläsare på Open-AudIT-servern själv.';

$GLOBALS["lang"]['<p></p>'] = '<p></p>';

$GLOBALS["lang"]['<p><strong class="text-danger">NOTE</strong> - You must have working SSH or SSH Key credentials to execute benchmarks upon a target device.</p>'] = '<p><strong class="text-danger">Notera</strong> - Du måste ha fungerande SSH- eller SSH-nyckeluppgifter för att utföra riktmärken på en målenhet.</p>';

$GLOBALS["lang"]['<p><strong>Baseline</strong> - The overarching document that contains the baseline definition and the individual policy tests.<br> <br> <strong>Policies</strong> - The individual tests contained within a Baseline. Each test is for a specific item. An example would be testing for SSH version 1.2.3.<br> <br> <strong>Details</strong> - Baselines can compare netstat ports, users and software.<br> <br> <strong>Software</strong> - To compare software we check the name and version. Because version numbers are not all standardised in format, when we receive an audit result we create a new attribute called software_padded which we store in the database along with the rest of the software details for each package. For this reason, baselines using software policies will not work when run against a device that has not been audited by 1.10 (at least). Software policies can test against the version being "equal to", "greater than" or "equal to or greater than".<br> <br> <strong>Netstat Ports</strong> - Netstat Ports use a combination of port number, protocol and program. If all are present the policy passes.<br> <br> <strong>Users</strong> - Users work similar to Netstat Ports. If a user exists with a matching name, status and password details (changeable, expires, required) then the policy passes.<br> <br> </p>'] = '<p><strong>Baseline</strong> - Det övergripande dokumentet som innehåller baslinjedefinitionen och de enskilda politiska testerna.<br/> <br/> <strong>Politik</strong> - De enskilda testerna som finns i en baslinje. Varje test är för ett specifikt objekt. Ett exempel skulle testas för SSH version 1.2.3.<br/> <br/> <strong>Detaljer</strong> Baslinjer kan jämföra netstatportar, användare och programvara.<br/> <br/> <strong>Programvara</strong> För att jämföra programvara kontrollerar vi namnet och versionen. Eftersom versionsnummer inte är alla standardiserade i format, när vi får ett revisionsresultat skapar vi ett nytt attribut som kallas mjukvara_padded som vi lagrar i databasen tillsammans med resten av mjukvarudetaljerna för varje paket. Av denna anledning kommer baslinjer som använder programvara inte att fungera när de körs mot en enhet som inte har granskats av 1.10 (åtminstone). Programvarupolicyer kan testa mot versionen är "lika", "större än" eller "lika till eller större än".<br/> <br/> <strong>Netstat Ports</strong> Netstat Ports använder en kombination av portnummer, protokoll och program. Om alla är närvarande går policyn.<br/> <br/> <strong>Användare</strong> - Användare fungerar som Netstat Ports. Om en användare finns med ett matchande namn, status och lösenordsdetaljer (föränderliga, löper ut, krävs) så passerar policyn.<br/> <br/> </p>';

$GLOBALS["lang"]['<p>A location is a physical address that can have devices associated with it.<br> <br>You can assign it coordinates (lat/long) and if there are devices assigned, the location will appear on the Open-AudIT Enterprise map.<br> <br></p>'] = '<p>En plats är en fysisk adress som kan ha enheter som är förknippade med den.<br/> <br/>Du kan tilldela den koordinater (sent/långt) och om det finns enheter som tilldelats visas platsen på Open-AudIT Enterprise-kartan.<br/> <br/></p>';

$GLOBALS["lang"]['<p>A network is derived from discovery entries and device attributes.<br> <br></p>'] = '<p>Ett nätverk härrör från upptäcktsposter och enhetsattribut.<br/> <br/></p>';

$GLOBALS["lang"]['<p>A summary will display a list of items, grouped by the distinct values of the attribute specified by the <code>table</code> and <code>column</code> attributes.<br> <br>When a summary is executed, the result will be a list of distinct values for that <code>table</code> and <code>column</code>. There will be links on the values that allow the user to see the matching devices.<br> <br>If the attribute of <code>extra_columns</code> is populated, the resulting page will contain these columns in addition to the standard device columns.<br> <br></p>'] = '<p>En sammanfattning kommer att visa en lista över objekt, grupperade av de distinkta värdena av attributet som anges av <code>table</code> och <code>column</code> attribut.<br/> <br/>När en sammanfattning genomförs blir resultatet en lista över olika värden för det. <code>table</code> och <code>column</code>. Det kommer att finnas länkar på de värden som gör det möjligt för användaren att se matchande enheter.<br/> <br/>Om attributet för <code>extra_columns</code> är befolkad, den resulterande sidan kommer att innehålla dessa kolumner utöver standardenhet kolumner.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Agents let you audit PCs without a discovery. Install the agent and it will check-in with the server each day and audit itself. It does not matter if your computers are firewalled, audit data will still appear in Open-AudIT.</p><p>When testing <strong>if</strong> an agent should perform actions, all three tests must pass (if the test is set). <strong>Then</strong> the actions are taken.</p>'] = '<p>Agenter låter dig granska datorer utan upptäckt. Installera agenten och det kommer att checka in med servern varje dag och granska sig själv. Det spelar ingen roll om dina datorer är brandväggade, revisionsdata kommer fortfarande att visas i Open-AudIT.</p><p>När testning <strong>om</strong> En agent bör utföra åtgärder, alla tre tester måste passera (om testet är inställt). <strong>och sedan</strong> åtgärder vidtas.</p>';

$GLOBALS["lang"]['<p>Applications are defined by you, the user and stored for Open-AudIT to use and associate with devices.<br> <br></p>'] = '<p>Applikationer definieras av dig, användaren och lagras för Open-AudIT att använda och associera med enheter.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Attributes are stored for Open-AudIT to use for particular fields.</p>'] = '<p>Innehåll lagras för att Open-AudIT ska användas för särskilda fält.</p>';

$GLOBALS["lang"]['<p>Being able to determine which machines are configured the same is a major part of systems administration and auditing &ndash; and now reporting on that will be made simple and automated. Once you define your baseline it will automatically run against a set of devices on a predetermined schedule. The output of these executed baselines will be available for web viewing, importing into a third party system or even as a printed report.<br> <br> Baselines enable you to combine audit data with a set of attributes you have previously defined (your baseline) to determine compliance of devices.<br> <br> For example - you might create a baseline from a device running Centos 6 which acts as one of your apache servers in a cluster. You know this particular server is configured just the way you want it but you are unsure if other servers in the cluster are configured exactly the same. Baselines enables you to determine this.<br> <br> </p>'] = '<p>Att kunna avgöra vilka maskiner som är konfigurerade är en stor del av systemadministrationen och revisionen – och nu kommer rapporteringen att göras enkel och automatiserad. När du definierar din baslinje kommer den automatiskt att köras mot en uppsättning enheter på ett förutbestämd schema. Utgången av dessa utförda baslinjer kommer att finnas tillgänglig för webbvisning, import till ett tredjepartssystem eller till och med som en tryckt rapport.<br/> <br/> Baslinjer gör att du kan kombinera revisionsdata med en uppsättning attribut som du tidigare har definierat (din baslinje) för att bestämma överensstämmelse med enheter.<br/> <br/> Du kan till exempel skapa en baslinje från en enhet som kör Centos 6 som fungerar som en av dina apache-servrar i ett kluster. Du vet att den här servern är konfigurerad precis som du vill ha den men du är osäker på om andra servrar i klustret är konfigurerade exakt samma. Baslinjer gör att du kan bestämma detta.<br/> <br/> </p>';

$GLOBALS["lang"]['<p>Clusters are stored in Open-AudIT to associate devices to better record, manage and estimate licensing costs.<br> <br></p>'] = '<p>Kluster lagras i Open-AudIT för att associera enheter för att bättre registrera, hantera och uppskatta licenskostnader.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Components is a generic term used for the tables that store the attributes for a device. Those tables are: access_point, arp, bios, certificate, cli_config, disk, dns, file, ip, license, log, memory, module, monitor, motherboard, netstat, network, nmap, optical, pagefile, partition, policy, print_queue, processor, radio, route, san, scsi, server, server_item, service, share, software, software_key, sound, task, usb, user, user_group, variable, video, vm, windows.</p><p> In addition we class the following tables also as device related: application, attachment, cluster, credential, image.</p>'] = '<p>Komponenter är en generisk term som används för de tabeller som lagrar attributen för en enhet. Dessa tabeller är: access_point, arp, bios, certifikat, cli_config, disk, dns, fil, ip, licens, log, minne, modul, monitor, moderkort, netstat, nätverk, nmap, optisk, pagefile, partition, policy, print_queue, processor, radio, route, san, scsi, server, server_item, service, share, software_key, sound, task, usb, user_group, variabel, video, vm, windows.</p><p> Dessutom klassar vi följande tabeller också som enhetsrelaterad: app, bilaga, kluster, referens, bild.</p>';

$GLOBALS["lang"]['<p>Credentials are encrypted when stored in the database.<br> <br>When a Discovery is run, a device has its credentials retrieved and tested for connection first (from the <code>credential</code> table). If these fail, then credentials associated with the given Org <code>credentials.org_id</code> is also tested against the device. Working credentials are stored at an individual device level in the credential table (note - no "s" in the table name).<br> <br>SSH keys are tested before SSH username / password. When testing SSH, credentials will also be marked as working with sudo or being root.<br> <br>For ease of use, Windows passwords should not contain a single or double quote. This is a remote WMI limitation, not an Open-AudIT limitation.<br> <br></p>'] = '<p>Krediter krypteras när de lagras i databasen.<br/> <br/>När en upptäckt körs, har en enhet sina referenser hämtas och testas för anslutning först (från <code>credential</code> tabell). Om dessa misslyckas, då referenser associerade med den givna Org <code>credentials.org_id</code> testas också mot enheten. Arbetsuppgifter lagras på en individuell enhetsnivå i referenstabellen (not - nej "s" i tabellnamnet).<br/> <br/>SSH-nycklar testas innan SSH-användarnamn / lösenord. Vid testning av SSH kommer referenser också att markeras som att arbeta med sudo eller vara rot.<br/> <br/>För enkel användning bör Windows-lösenord inte innehålla en enda eller dubbel citat. Detta är en fjärr WMI-begränsning, inte en Open-AudIT-begränsning.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Credentials are used to access devices.<br> <br>Configuring credentials should be one of the first things you do after installing Open-AudIT.<br> <br></p>'] = '<p>Krediter används för att komma åt enheter.<br/> <br/>Konfigurera referenser bör vara en av de första sakerna du gör efter att du har installerat Open-AudIT.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Define your racks and assign devices into their positions. You already have your devices in Open-AudIT and you know your locations. Open-AudIT extends this to allow you to create a rack and assign devices to it. Open-AudIT will even provide a visualisation of the rack and the devices contained within. If you provide a device picture, that picture will be used in the visualisation. You can look at the rack on the screen and see the same items you would see if you were standing in front of it.<br> <br></p>'] = '<p>Definiera dina rack och tilldela enheter i sina positioner. Du har redan dina enheter i Open-AudIT och du vet dina platser. Open-AudIT utökar detta så att du kan skapa en rack och tilldela enheter till det. Open-AudIT kommer även att ge en visualisering av racket och enheterna som finns inom. Om du ger en enhetsbild kommer den bilden att användas i visualiseringen. Du kan titta på racket på skärmen och se samma objekt som du skulle se om du stod framför den.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Devices on your network need to be managed. But how do you keep your records up to date? A spreadsheet - defintley not. That will be out of date in hours, if not days. Why manually try to keep up. Use Open-AudIT to automatically scan your networks and record your devices - manufacturer, model, serial and more than 100 other attributes. Full lists of software, services, disks, open ports, users, etc. Automatically see if an attribute has been added, removed or changed.<br> <br>Once Open-AudIT is setup, you can sit back and relax. Have change reports emailed to you on a schedule, for example - what new devices did we discover this week? What new software was installed this week? Were there any hardware changes last month?<br> <br>Expand on the stored fields easily with your own custom attributes.<br> <br>Even add devices that are not connected to your network or those devices your Open-AudIT server cannot reach.<br> <br>Computers, switches, routers, printers or any other device on your network - Open-AudIT can audit them all.<br> <br></p>'] = '<p>Enheter på ditt nätverk måste hanteras. Men hur håller du dina poster uppdaterade? Ett kalkylblad - Defintley inte. Det kommer att vara föråldrat i timmar, om inte dagar. Varför manuellt försöka hålla upp. Använd Open-AudIT för att automatiskt skanna dina nätverk och spela in dina enheter - tillverkare, modell, seriella och mer än 100 andra attribut. Fullständiga listor över programvara, tjänster, diskar, öppna portar, användare etc. Se automatiskt om ett attribut har lagts till, tagits bort eller ändrats.<br/> <br/>När Open-AudIT är inställd kan du luta dig tillbaka och koppla av. Har du ändrade rapporter mailade till dig på ett schema, till exempel - vilka nya enheter upptäckte vi den här veckan? Vilken ny programvara installerades den här veckan? Finns det några hårdvaruförändringar förra månaden?<br/> <br/>Utöka på de lagrade fälten enkelt med egna egna attribut.<br/> <br/>Lägg till enheter som inte är anslutna till ditt nätverk eller de enheter som din Open-AudIT-server inte kan nå.<br/> <br/>Datorer, switchar, routrar, skrivare eller någon annan enhet på ditt nätverk - Open-AudIT kan granska dem alla.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Discoveries are at the very heart of what Open-AudIT does.<br> <br>How else would you know "What is on my network?"<br> <br>Discoveries are prepared data items that enable you to run a discovery upon a network in a single click, without entering the details of that network each and every time.<br> <br></p>'] = '<p>Upptäckten ligger i hjärtat av vad Open-AudIT gör.<br/> <br/>Hur skulle du annars veta "Vad är på mitt nätverk?"<br/> <br/>Upptäckten är förberedda dataobjekt som gör att du kan köra en upptäckt på ett nätverk i ett enda klick, utan att ange detaljerna i det nätverket varje gång.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Discovery Options are a global setting changed in the <a href="../configuration?configuration.name=discovery_default_scan_option">configuration</a>. If you have an Open-AudIT Enterprise license these are settable per discovery and in addition futher customizable as required. Discovery Options are as follows (including an indicitave time to scan an individual IP):<br/><br><strong>UltraFast</strong>: <i>1 second</i>. Scan only the ports that Open-AudIT needs to use to talk to the device and detect an IOS device (WMI, SSH, SNMP, Apple Sync). An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is not considered open. Device must respond to an Nmap ping. Use aggressive timing.<br><br/><strong>SuperFast</strong>: <i>5 seconds</i>. Scan the top 10 TCP and UDP ports, as well as port 62078 (Apple IOS detection). An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is not considered open. Device must respond to an Nmap ping. Use aggressive timing.<br/><br/><strong>Fast</strong>: <i>40 seconds</i>. Scan the top 100 TCP and UDP ports, as well as port 62078 (Apple IOS detection). An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is not considered open. Device must respond to an Nmap ping. Use aggressive timing.<br/><br/><strong>Medium (Classic)</strong>: <i>90 seconds</i>. As close to a traditional Open-AudIT scan as we can make it. Scan the top 1000 TCP ports, as well as 62078 (Apple IOS detection) and UDP 161 (SNMP). An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is considered open (and will trigger device detection). Devices are scanned regardless of a response to an Nmap ping. Use aggressive timing.<br/><br/><strong>Medium</strong>: <i>100 seconds</i>. Scan the top 1000 TCP and top 100 UDP ports, as well as port 62078 (Apple IOS detection). An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is not considered open. Device must respond to an Nmap ping. Use aggressive timing.<br/><br/><strong>Slow</strong>: <i>4 minutes</i>. Scan the top 1000 TCP and top 100 UDP ports, as well as port 62078 (Apple IOS detection). Version detection enabled. An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is considered open (and will trigger device detection). Device must respond to an Nmap ping. Use normal timing.<br/><br/><strong>UltraSlow</strong>: <i>20 minutes</i>. Not recommended. Scan the top 1000 TCP and UDP ports, as well as port 62078 (Apple IOS detection). Devices are scanned regardless of a response to an Nmap ping. Version detection enabled. An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is considered open (and will trigger device detection). Use polite timing.<br/><br/><strong>Custom</strong>: <i>Unknown time</i>. When options other than as set by a standard discovery preset are altered.<br><br></p>'] = '<p>Upptäck Alternativ är en global miljö som förändrats i <a href="../configuration?configuration.name=discovery_default_scan_option">Konfiguration</a>. Om du har en Open-AudIT Enterprise licens är dessa inställbara per upptäckt och dessutom futher anpassningsbara efter behov. Upptäck Alternativ är följande (inklusive en indicitave-tid för att skanna en individuell IP):<br/><br/><strong>UltraFast</strong>Från: <i>1 sekund</i>. Skanna endast de portar som Open-AudIT behöver använda för att prata med enheten och upptäcka en IOS-enhet (WMI, SSH, SNMP, Apple Sync). Ett <code>open|filtered</code> hamnen anses vara öppen. Ett <code>filtered</code> hamnen anses inte öppen. Enhet måste svara på en Nmap ping. Använd aggressiv timing.<br/><br><strong>SuperFast</strong>Från: <i>5 sekunder</i>. Skanna de 10 TCP- och UDP-portarna samt port 62078 (Apple IOS-detektering). Ett <code>open|filtered</code> hamnen anses vara öppen. Ett <code>filtered</code> hamnen anses inte öppen. Enhet måste svara på en Nmap ping. Använd aggressiv timing.<br><br/><strong>Snabbt</strong>Från: <i>40 sekunder</i>. Skanna de 100 TCP- och UDP-portarna samt port 62078 (Apple IOS-detektering). Ett <code>open|filtered</code> hamnen anses vara öppen. Ett <code>filtered</code> hamnen anses inte öppen. Enhet måste svara på en Nmap ping. Använd aggressiv timing.<br/><br/><strong>Medium (klassiker)</strong>Från: <i>90 sekunder</i>. Så nära en traditionell Open-AudIT-skanning som vi kan göra det. Skanna de 1000 TCP-portarna, samt 62078 (Apple IOS-detektering) och UDP 161 (SNMP). Ett <code>open|filtered</code> hamnen anses vara öppen. Ett <code>filtered</code> port anses vara öppen (och kommer att utlösa enhetsdetektering). Enheter skannas oavsett ett svar på en Nmap-ping. Använd aggressiv timing.<br/><br/><strong>Medium</strong>Från: <i>100 sekunder</i>. Skanna topp 1000 TCP och topp 100 UDP-portar, samt port 62078 (Apple IOS-detektering). Ett <code>open|filtered</code> hamnen anses vara öppen. Ett <code>filtered</code> hamnen anses inte öppen. Enhet måste svara på en Nmap ping. Använd aggressiv timing.<br/><br/><strong>Långsamt</strong>Från: <i>4 minuter</i>. Skanna topp 1000 TCP och topp 100 UDP-portar, samt port 62078 (Apple IOS-detektering). Version Detection aktiverad. Ett <code>open|filtered</code> hamnen anses vara öppen. Ett <code>filtered</code> port anses vara öppen (och kommer att utlösa enhetsdetektering). Enhet måste svara på en Nmap ping. Använd normal timing.<br/><br/><strong>UltraSlow</strong>Från: <i>20 minuter</i>. Rekommenderas inte. Skanna de 1000 TCP- och UDP-portarna samt port 62078 (Apple IOS-detektering). Enheter skannas oavsett ett svar på en Nmap-ping. Version Detection aktiverad. Ett <code>open|filtered</code> hamnen anses vara öppen. Ett <code>filtered</code> port anses vara öppen (och kommer att utlösa enhetsdetektering). Använd artig timing.<br/><br/><strong>Anpassad</strong>Från: <i>Okänd tid</i>. När andra alternativ än som fastställts av en standard upptäckt förinställd ändras.<br/><br/></br></br></p>';

$GLOBALS["lang"]['<p>Groups are used as simple lists of devices that match the required conditions. If requested using JSON they return a list of <code>devices.id</code> only. If requested using the web interface, they return the standard column attribute list.<br> <br></p>'] = '<p>Grupper används som enkla listor över enheter som matchar de nödvändiga villkoren. Om de begärs med JSON returnerar de en lista över <code>devices.id</code> endast. Om de begärs med hjälp av webbgränssnittet returnerar de standard kolumn attributlistan.<br/> <br/></p>';

$GLOBALS["lang"]['<p>If the user logging on to Open-AudIT does not have the access to search LDAP (and you are using OpenLDAP), you can use another account which does have this access. Use the <code>ldap_dn_account</code> and <code>ldap_dn_password</code> to configure this.<br> <br><strong>Helpful Documentation</strong><br> <br>
        <a href="/index.php/auth/help">General Auth Help</a><br> <br>
        <a href="/index.php/faq?name=Using Entra for Auth">Using Entra for Auth</a><br> <br>
        <a href="/index.php/faq?name=Using OKTA for Auth">Using OKTA for Auth</a><br> <br>
        <a href="/index.php/faq?name=Troubleshooting LDAP Logins">Troubleshooting LDAP Logins</a><br> <br>
        <a href="/index.php/faq?name=Users, Roles and Orgs">Users, Roles and Orgs</a><br> <br></p>'] = '<p>Om användaren loggar in på Open-AudIT inte har tillgång till sök LDAP (och du använder OpenLDAP), kan du använda ett annat konto som har denna åtkomst. Använda <code>ldap_dn_account</code> och <code>ldap_dn_password</code> att konfigurera detta.<br/> <br/><strong>Hjälpsam dokumentation</strong><br/> <br/><a href="/index.php/auth/help">General Auth Hjälp</a><br/> <br/><a href="/index.php/faq?name=Using Entra for Auth">Använda Entra för Auth</a><br/> <br/><a href="/index.php/faq?name=Using OKTA for Auth">Använda OKTA för Auth</a><br/> <br/><a href="/index.php/faq?name=Troubleshooting LDAP Logins">Felsökning LDAP Logins</a><br/> <br/><a href="/index.php/faq?name=Users, Roles and Orgs">Användare, roller och orger</a><br/> <br/></p>';

$GLOBALS["lang"]['<p>If you add a device type, to display the associated icon you will have to manually copy the .svg formatted file to the directory:<br><em>Linux</em>:/usr/local/open-audit/public/device_images<br><em>Windows</em>: c:\xampp\htdocs\open-audit\device_images<br> <br>If you add a location type, to display the associated icon you will have to manually copy the 32x32px icon to the directory:<br><em>Linux</em>:/usr/local/open-audit/public/images/map_icons<br><em>Windows</em>: c:\xampp\htdocs\open-audit\images\map_icons</p><p>When the <i>resource</i> is a <code>device</code>, valid <i>types</i> are: <code>class</code>, <code>environment</code>, <code>status</code> and <code>type</code>. If the <i>resource</i> is <code>locations</code> or <code>org</code> the only valid <i>type</i> is <code>type</code>. If the <i>resource</i> is a <code>query</code> the only valid <i>type</i> is <code>menu_category</code>.</p>'] = '<p>Om du lägger till en enhetstyp, för att visa den tillhörande ikonen måste du manuellt kopiera .svg-formaterade filen till katalogen:<br/><em>Linux</em>:/usr/local/open-audit/public/device_images<br/><em>Windows Windows</em>c:\xampp\htdocs\open-audit\device_images<br/> <br/>Om du lägger till en platstyp, för att visa den tillhörande ikonen måste du manuellt kopiera 32x32px-ikonen till katalogen:<br/><em>Linux</em>:/usr/local/open-audit/public/images/map_icons<br/><em>Windows Windows</em>c:\xampp\htdocs\open-audit\images\map_icons</p><p>När <i>resurs</i> är en <code>device</code>, giltig <i>Typer</i> är: <code>class</code>, <code>environment</code>, <code>status</code> och <code>type</code>. Om <i>resurs</i> är att <code>locations</code> eller <code>org</code> Den enda giltiga <i>Typ typ typ</i> är att <code>type</code>. Om <i>resurs</i> är en <code>query</code> Den enda giltiga <i>Typ typ typ</i> är att <code>menu_category</code>.</p>';

$GLOBALS["lang"]['<p>If you intend to completely audit your cloud machines, do not forget you will also need those credentials saved in Open-AudIT.</p><p>Make sure you allow the correct ports if you are using Microsoft Azure (22 for SSH, etc). Check your Virtual Machine -> Networking rules.<br> <br></p>'] = '<p>Om du avser att helt granska dina molnmaskiner, glöm inte att du också behöver de uppgifter som sparas i Open-AudIT.</p><p>Se till att du tillåter rätt portar om du använder Microsoft Azure (22 för SSH, etc). Kontrollera din virtuella maskin -> Nätverk regler.<br/> <br/></p>';

$GLOBALS["lang"]['<p>If you select a List type, the "values" field will be enabled. You should put a comma separated list of selectable values here. These will display in a dropdown box whenever the field is edited.<br> <br>Like most other attributes, Fields can be bulk edited. Use the Bulk Edit function as you normally would and you will see the Fields are available for input.<br> <br>View the device details screen, open the section containing the field and (if you have sufficient access) you can click on the field value to edit it.<br> <br></p>'] = '<p>Om du väljer en listatyp aktiveras fältet "värden". Du bör lägga en komma separerad lista över valbara värden här. Dessa visas i en dropdown box när fältet är redigerat.<br/> <br/>Liksom de flesta andra attribut kan fält redigeras. Använd funktionen Bulk Edit som du normalt skulle och du kommer att se fälten är tillgängliga för inmatning.<br/> <br/>Visa skärmen för enhetsdetaljer, öppna avsnittet som innehåller fältet och (om du har tillräcklig åtkomst) kan du klicka på fältvärdet för att redigera det.<br/> <br/></p>';

$GLOBALS["lang"]['<p>In the ever-changing world of computer security where new vulnerabilities are being discovered and patched every day, enforcing security compliance must be a continuous process. It also needs to include a way to make adjustments to policies, as well as periodic assessment and risk monitoring. The OpenSCAP ecosystem provides tools and customizable policies for a quick, cost-effective and flexible implementation of these processes.</p>'] = '<p>I den ständigt föränderliga världen av datorsäkerhet där nya sårbarheter upptäcks och patchas varje dag, måste upprätthållande av säkerhetsöverensstämmelse vara en kontinuerlig process. Det måste också innehålla ett sätt att göra justeringar av politiken, samt periodisk bedömning och riskövervakning. OpenSCAP ekosystem ger verktyg och anpassningsbara strategier för en snabb, kostnadseffektiv och flexibel implementering av dessa processer.</p>';

$GLOBALS["lang"]['<p>Integrations allow you to setup device selection and schedules for Open-AudIT to talk to external systems.<br> <br></p>'] = '<p>Integrationer gör att du kan ställa in enhetsval och scheman för Open-AudIT för att prata med externa system.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Nmap timing details are found on the bottom of this linked page <a href="https://nmap.org/book/man-performance.html" target="_blank">https://nmap.org/book/man-performance.html</a>. From that page:<br> <br><em>If you are on a decent broadband or ethernet connection, I would recommend always using -T4 (Aggressive). Some people love -T5 (Insane) though it is too aggressive for my taste. People sometimes specify -T2 (Polite) because they think it is less likely to crash hosts or because they consider themselves to be polite in general. They often do not realize just how slow -T2 really is. Their scan may take ten times longer than a default scan. Machine crashes and bandwidth problems are rare with the default timing options -T3 (Normal) and so I normally recommend that for cautious scanners. Omitting version detection is far more effective than playing with timing values at reducing these problems.</em><footer>Gordon <i>Fyodor</i> Lyon</footer><br> <br></p>'] = '<p>Nmap timing detaljer finns på botten av denna länkade sida <a href="https://nmap.org/book/man-performance.html" target="_blank">https://nmap.org/book/man-performance.html</a>. Från den sidan:<br/> <br/><em>Om du är på en anständig bredband eller ethernet-anslutning, rekommenderar jag alltid att du använder -T4 (Aggressive). Vissa människor älskar -T5 (Insane) men det är för aggressivt för min smak. Människor anger ibland -T2 (Polite) eftersom de tror att det är mindre sannolikt att krascha värdar eller eftersom de anser sig vara artiga i allmänhet. De inser ofta inte hur långsamt - T2 verkligen är. Deras skanning kan ta tio gånger längre än en standardskanning. Maskin kraschar och bandbredd problem är sällsynta med standard timing alternativ -T3 (Normal) och så jag rekommenderar normalt att för försiktiga skannrar. Omitting version detection är mycket effektivare än att spela med tidsvärden för att minska dessa problem.</em><footer>Gordon <i>Fyodor</i> Lyon</footer><br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT can be configured to use different methods to authenticate a user and in addition, to create a user account using assigned roles and orgs based on group membership.<br> <br></p>'] = '<p>Open-AudIT kan konfigureras för att använda olika metoder för att autentisera en användare och dessutom skapa ett användarkonto med tilldelade roller och orger baserat på gruppmedlemskap.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT can retrieve details about a file or directory of files and monitor these files for changes as per other attributes in the Open-AudIT database.<br> <br>This feature works out of the box for Linux Open-AudIT servers, but needs a change to the service account name under a Windows Open-AudIT server.<br> <br>Supported clients are Windows and Linux.<br> <br></p>'] = '<p>Open-Aud IT kan hämta detaljer om en fil eller katalog över filer och övervaka dessa filer för ändringar enligt andra attribut i Open-AudIT-databasen.<br/> <br/>Den här funktionen fungerar ur rutan för Linux Open-AudIT-servrar, men behöver en förändring till servicekontonamnet under en Windows Open-AudIT-server.<br/> <br/>Supporterade kunder är Windows och Linux.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT can retrieve details about a file, ask the native package manager if they are known to it and monitor these files for changes as per other attributes in the Open-AudIT database.<br> <br>Supported clients are Linux only.<br> <br></p>'] = '<p>Open-Aud IT kan hämta detaljer om en fil, fråga den inhemska pakethanteraren om de är kända för det och övervaka dessa filer för ändringar enligt andra attribut i Open-AudIT-databasen.<br/> <br/>Supporterade kunder är endast Linux.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT can store information in custom fields that are associated with each device.<br> <br>Once an Additional Field has been created it can be used in queries and groups just like any other attribute in the database.<br> <br></p>'] = '<p>Open-Aud IT kan lagra information i anpassade fält som är associerade med varje enhet.<br/> <br/>När ett tilläggsfält har skapats kan det användas i frågor och grupper precis som alla andra attribut i databasen.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT comes with many queries inbuilt. If you require a specific query and none of the pre-packaged queries fit your needs, it is quite easy to create a new one and load it into Open-AudIT for running.<br> <br></p>'] = '<p>Open-AudIT kommer med många frågor inbyggda. Om du behöver en specifik fråga och ingen av de förpackade frågorna passar dina behov, är det ganska lätt att skapa en ny och ladda den i Open-AudIT för att köra.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT comes with many summaries inbuilt. If you require a specific summary and none of the pre-packaged summaries fit your needs, it is quite easy to create a new one and load it into Open-AudIT for running.<br> <br></p>'] = '<p>Open-AudIT kommer med många sammanfattningar inbyggda. Om du behöver en specifik sammanfattning och ingen av de förpackade sammanfattningarna passar dina behov, är det ganska lätt att skapa en ny och ladda den till Open-AudIT för att köra.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT is supported by FirstWave with an amazing level of support. If you prefer an active community of support givers, theres that as well. Where else can you talk directly to the developers and get a response within 24 hours? Just try that with other products! Amazing support. Full stop. You need support, we provide support. No ifs or buts. Great support. Period.<br> <br></p>'] = '<p>Open-AudIT stöds av FirstWave med en fantastisk nivå av stöd. Om du föredrar en aktiv gemenskap av stödgivare finns det också. Var annars kan du prata direkt med utvecklarna och få ett svar inom 24 timmar? Prova det med andra produkter! Fantastiskt stöd. Full stopp. Du behöver stöd, vi ger stöd. Ingen ifs eller buts. Stort stöd. Period.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT provides multi-tenancy out of the box!<br> <br>Orgs (organisations) in Open-AudIT are a key item. A user has a primary Org as well as a list of Orgs they can access. A user combines this with a list of assigned "Roles" that define what actions they can take on items assigned to the Orgs they have access to. The combination of a users "orgs" and "roles" define what they can and cannot do within Open-AudIT.<br> <br>Most items in Open-AudIT are assigned to an Org. Devices, Locations, Networks, etc.<br> <br>Orgs can have child Orgs. Think of an organisational chart (tree) structure. If a user has access to a specific Org, they also have access to that Orgs descendants. For more information, see this <a href="/index.php/faq?name=Users, Roles and Orgs">FAQ</a>.</p>'] = '<p>Open-AudIT erbjuder multi-tenans ur lådan!<br/> <br/>Orgs (organisationer) i Open-AudIT är ett viktigt objekt. En användare har en primär Org samt en lista över Orgs de kan komma åt. En användare kombinerar detta med en lista över tilldelade "Roles" som definierar vilka åtgärder de kan vidta på objekt som tilldelats Orgs de har tillgång till. Kombinationen av en användare "orgs" och "roller" definierar vad de kan och inte kan göra inom Open-AudIT.<br/> <br/>De flesta objekt i Open-AudIT tilldelas en Org. Enheter, Platser, Nätverk, etc.<br/> <br/>Org kan ha barn Orgs. Tänk på ett organisatoriskt diagram (träd) struktur. Om en användare har tillgång till en specifik org, har de också tillgång till Orgs ättlingar. För mer information, se detta <a href="/index.php/faq?name=Users, Roles and Orgs">FAQ</a>.</p>';

$GLOBALS["lang"]['<p>Open-AudIT provides multi-tenancy out of the box!<br> <br>Orgs (organisations) in Open-AudIT are a key item. A user has a primary Org as well as a list of Orgs they can access. A user combines this with a list of assigned "Roles" that define what actions they can take on items assigned to the Orgs they have access to. The combination of a users "orgs" and "roles" define what they can and cannot do within Open-AudIT.<br> <br>Most items in Open-AudIT are assigned to an Org. Devices, Locations, Networks, etc.<br> <br>Orgs can have child Orgs. Think of an organisational chart (tree) structure. If a user has access to a specific Org, they also have access to that Orgs descendants.</p>'] = '<p>Open-AudIT erbjuder multi-tenans ur lådan!<br/> <br/>Orgs (organisationer) i Open-AudIT är ett viktigt objekt. En användare har en primär Org samt en lista över Orgs de kan komma åt. En användare kombinerar detta med en lista över tilldelade "Roles" som definierar vilka åtgärder de kan vidta på objekt som tilldelats Orgs de har tillgång till. Kombinationen av en användare "orgs" och "roller" definierar vad de kan och inte kan göra inom Open-AudIT.<br/> <br/>De flesta objekt i Open-AudIT tilldelas en Org. Enheter, Platser, Nätverk, etc.<br/> <br/>Org kan ha barn Orgs. Tänk på ett organisatoriskt diagram (träd) struktur. Om en användare har tillgång till en specifik org, har de också tillgång till Orgs ättlingar.</p>';

$GLOBALS["lang"]['<p>Quickly view the status of devices on your network.<br> <br></p>'] = '<p>Visa snabbt statusen för enheter på ditt nätverk.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Roles in Open-AudIT are a key item. A user has a primary Org as well as a list of Orgs they can access. A user combines this with a list of assigned Roles that define what actions they can take on items assigned to the Orgs they have access to. The combination of a users "orgs" and "roles" define what they can and cannot do within Open-AudIT.<br> <br>
        Get the complete Open-AudIT Enterprise experience. Creating roles allows fine grained control over what your users can do within Open-AudIT.<br> <br>
        The primary method for authorisation (what a user can do) is based on the users Roles. Default roles are defined as admin, org_admin, reporter and user. Each role has a set of permissions (Create, Read, Update, Delete) for each endpoint. The ability to define additional roles and edit existing roles is enabled in Open-AudIT Enterprise.<br> <br>Roles can also be used with LDAP (Active Directory and OpenLDAP) authorisation. Enterprise licensed installations have the ability to customise the LDAP group for each defined role.<br> <br></p>'] = '<p>Roller i Open-Aud Det är ett nyckelobjekt. En användare har en primär Org samt en lista över Orgs de kan komma åt. En användare kombinerar detta med en lista över tilldelade Roller som definierar vilka åtgärder de kan vidta på objekt som tilldelats Orgs de har tillgång till. Kombinationen av en användare "orgs" och "roller" definierar vad de kan och inte kan göra inom Open-AudIT.<br/> <br/>Få komplett Open-AudIT Enterprise-upplevelse. Skapa roller ger bra kornig kontroll över vad dina användare kan göra inom Open-AudIT.<br/> <br/>Den primära metoden för godkännande (vad en användare kan göra) baseras på användarrollerna. Standardroller definieras som admin, org_admin, reporter och användare. Varje roll har en uppsättning behörigheter (Create, Read, Update, Delete) för varje slutpunkt. Förmågan att definiera ytterligare roller och redigera befintliga roller möjliggörs i Open-AudIT Enterprise.<br/> <br/>Roller kan också användas med LDAP (Active Directory and OpenLDAP). Enterprise licensierade installationer har möjlighet att anpassa LDAP-gruppen för varje definierad roll.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Rules examine attributes and make cahnges based on the appropriate rule.</p>'] = '<p>Regler granskar attribut och gör cahnges baserat på lämplig regel.</p>';

$GLOBALS["lang"]['<p>Scanning options allow you to easily apply a set of options to a discovery.<br> <br></p>'] = '<p>Skanningsalternativ låter dig enkelt tillämpa en uppsättning alternativ till en upptäckt.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Simple, intuitive, accurate geographic mapping provided by Google Maps. Open-AudIT leverages Google Maps to provide live, interactive geographic mapping of device locations. Automated conversion of street addresses to geocodes and longitude / latitude.<br> <br>
        </p>'] = '<p>Enkel, intuitiv, exakt geografisk kartläggning som tillhandahålls av Google Maps. Open-AudIT hävstång Google Maps för att ge live, interaktiv geografisk kartläggning av enhetsplatser. Automatiserad omvandling av gatuadresser till geokoder och longitud / latitud.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Software Packages are used to determine if antivirus, backup, firewall, approved or banned software is installed.<br> <br></p>'] = '<p>Programvarupaket används för att avgöra om antivirus, säkerhetskopiering, brandvägg, godkänd eller förbjuden programvara installeras.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Some examples of valid Subnet attributes are: 192.168.1.1 (a single IP address), 192.168.1.0/24 (a subnet), 192.168.1-3.1-20 (a range of IP addresses).<br> <br><em>NOTE</em> - Only a subnet (as per the examples - 192.168.1.0/24) will be able to automatically create a valid network for Open-AudIT. <br> <br>If you use an Active Directory type, make sure you have appropriate credentials to talk to your Domain Controller already in <a href="../credentials">credentials</a>.<br> <br></p>'] = '<p>Några exempel på giltiga Subnet-attribut är: 192.168.1.1 (en enda IP-adress), 192.168.1.0/24 (en subnet), 192.168.1-3.1-20 (en rad IP-adresser).<br/> <br/><em>Notera</em> Endast ett undernät (exempel - 192.168.1.0/24) kommer att kunna skapa ett giltigt nätverk för Open-AudIT. <br/> <br/>Om du använder en Active Directory-typ, se till att du har lämpliga uppgifter för att prata med din domänkontroll redan i <a href="../credentials">credentials</a>.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Standards are stored in Open-AudIT.<br /><br /><br /><br /></p>'] = '<p>Standarder lagras i Open-AudIT.<br/><br/><br/><br/></p>';

$GLOBALS["lang"]['<p>Supported clients are Linux only.<br> <br></p>'] = '<p>Supporterade kunder är endast Linux.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Tasks have a schedule that mirrors the unix cron schedule. The attributes for minute, hour, day_of_month, month, day_of_week all act as per the cron definitions. You can select multiples of these using comma seperated values (no spaces). You can select every value using *.<br> <br>The <code>type</code> of the task can be one of: baselines, collectors, discoveries, queries, reports or summaries.<br> <br>If you wish to schedule a Baseline or Discovery, you will need to create these before creating the tasks. You must use the ID of the type of item in <code>sub_resource_id</code>. For example if you wish to schedule a Discovery, use that particular Discoveries ID in <code>sub_resource_id</code>.<br> <br>The value for <code>uuid</code> is specific to each Open-AudIT server. Your unique value can be found in the configuration.<br> <br>The <code>options</code> attribute is a JSON document containing any extra attributes required to run the task. The extra attributes for reports, queries and summaries are: <code>email_address</code> and <code>format</code>. The extra attribute for Bselines is <code>group_id</code>.<br> <br></p>'] = '<p>Uppgifter har ett schema som speglar unix cron schema. attributen för minut, timme, day_of_month, månad, day_of_week alla fungerar enligt cron definitioner. Du kan välja multiplar av dessa med kommatecken sepererade värden (inga utrymmen). Du kan välja varje värde med *.<br/> <br/>och <code>type</code> uppgiften kan vara en av: baslinjer, samlare, upptäckter, frågor, rapporter eller sammanfattningar.<br/> <br/>Om du vill schemalägga en baslinje eller upptäckt måste du skapa dessa innan du skapar uppgifterna. Du måste använda ID för typen av objekt i <code>sub_resource_id</code>. Om du till exempel vill schemalägga en upptäckt, använd det specifika Discoveries-ID i <code>sub_resource_id</code>.<br/> <br/>Värdet för <code>uuid</code> är specifik för varje Open-AudIT-server. Ditt unika värde finns i konfigurationen.<br/> <br/>och <code>options</code> attribut är ett JSON-dokument som innehåller några extra attribut som krävs för att köra uppgiften. De extra attributen för rapporter, frågor och sammanfattningar är: <code>email_address</code> och <code>format</code>. Det extra attributet för Bselines är <code>group_id</code>.<br/> <br/></p>';

$GLOBALS["lang"]['<p>The <code>type</code> of the location will assign its icon.<br> <br></p>'] = '<p>och <code>type</code> platsen kommer att tilldela sin ikon.<br/> <br/></p>';

$GLOBALS["lang"]['<p>The Attributes endpoint allows you to add customized values to different attributes in Open-AudIT, at the moment this feature works on the Class, Environment, Status and Type attributes on Devices, the Type attribute for both Locations and Orgs as well as the Menu Category for Queries. If you view an item of one of the prvious types (say view a Lkocation) you will notice the Type attribute must be selected from a drop-down box. This is where those values are stored. Hence, if you would like to add a new Type to be chosen for a Location, add it using the Attributes feature.</p>'] = '<p>Attributes endpoint låter dig lägga till anpassade värden till olika attribut i Open-AudIT, för tillfället fungerar den här funktionen på klass, miljö, status och typ attribut på enheter, typ attributet för både Platser och Orgs samt menykategorin för Queries. Om du tittar på ett objekt av en av de prvious typerna (säg visa en Lkocation) kommer du att märka att typ attributet måste väljas från en nedgångsruta. Det är där dessa värden lagras. Därför, om du vill lägga till en ny typ som ska väljas för en plats, lägg till den med funktionen Attributes.</p>';

$GLOBALS["lang"]['<p>The Collectors feature enables you to easily manage many "collector" computers that perform network discovery. All Collectors are centrally controlled from the Server. The only required network ports between the Collector and the Server are 80 and/or 443.<br> <br>It makes managing disparate networks quick, easy and simple. Open-AudIT Enterprise licensees get a single collector license included and have the option to buy more as required..<br> <br></p>'] = '<p>Collectors-funktionen gör att du enkelt kan hantera många "collector" -datorer som utför nätverksupptäckt. Samlare kontrolleras centralt från servern. De enda nätverksportarna som krävs mellan Collector och Servern är 80 och/eller 443.<br/> <br/>Det gör att man hanterar olika nätverk snabbt, enkelt och enkelt. Open-AudIT Enterprise licenstagare får en enda samlarlicens ingår och har möjlighet att köpa mer efter behov.<br/> <br/></p>';

$GLOBALS["lang"]['<p>The SELECT section of your SQL <em>must</em> contain fully qualified columns. IE - <code>SELECT devices.id AS `devices.id`, devices.name AS `devices.name` ...</code>.<br> <br>The WHERE section of your SQL <em>must</em> contain <code>WHERE @filter</code> so Open-AudIT knows to restrict your query to the appropriate Orgs. SQL not containing this condition will result in the query failing to be created, unless you have the Admin role.<br> <br>An example query SQL showing attributes on devices that have an <code>os_group</code> attribute of "Linux" - <br><code>SELECT devices.id AS `devices.id`, devices.icon AS `devices.icon`, devices.type AS `devices.type`, devices.name AS `devices.name`, devices.os_name AS `devices.os_name` FROM devices WHERE @filter AND devices.os_group = "Linux"</code><br> <br></p>'] = '<p>SELECT-delen av din SQL <em>måste</em> innehåller fullt kvalificerade kolumner. IE - <code>SELECT devices.id AS `devices.id`, devices.name AS `devices.name` ...</code>.<br/> <br/>Den andra delen av din SQL <em>måste</em> innehåller <code>WHERE @filter</code> Open-AudIT vet att begränsa din fråga till lämpliga Orgs. SQL som inte innehåller detta tillstånd kommer att resultera i att frågan inte skapas, om du inte har Admin-rollen.<br/> <br/>Ett exempel fråga SQL som visar attribut på enheter som har en <code>os_group</code> attributet "Linux" - <br/><code>SELECT devices.id AS `devices.id`, devices.icon AS `devices.icon`, devices.type AS `devices.type`, devices.name AS `devices.name`, devices.os_name AS `devices.os_name` FROM devices WHERE @filter AND devices.os_group = "Linux"</code><br/> <br/></p>';

$GLOBALS["lang"]['<p>The SELECT section of your SQL <em>must</em> only contain <code>DISTINCT(devices.id)</code>.<br> <br>The WHERE section of your SQL <em>must</em> contain <code>WHERE @filter</code> so Open-AudIT knows to restrict your query to the appropriate Orgs. SQL not containing this condition will result in the group failing to be created.<br> <br>An example for SQL to select all devices running the Debian OS - <code>SELECT DISTINCT(devices.id) FROM devices WHERE @filter AND devices.os_family = "Debian"</code><br> <br></p>'] = '<p>SELECT-delen av din SQL <em>måste</em> endast innehåller <code>DISTINCT(devices.id)</code>.<br/> <br/>Den andra delen av din SQL <em>måste</em> innehåller <code>WHERE @filter</code> Open-AudIT vet att begränsa din fråga till lämpliga Orgs. SQL som inte innehåller detta tillstånd kommer att resultera i att gruppen inte skapas.<br/> <br/>Ett exempel för SQL att välja alla enheter som kör Debian OS - <code>SELECT DISTINCT(devices.id) FROM devices WHERE @filter AND devices.os_family = "Debian"</code><br/> <br/></p>';

$GLOBALS["lang"]['<p>The license endpoint allows you to track the number of licenses found on your devices.<br> <br>To create an entry to track your licenses you <em>must</em> to provide a name, an organization, the number of licenses acquired and the name of the software. On the field <code>match_string</code> you must provide the name of the software that you want to track, you can use the percent sign (%) as a wildcard in the match_string.<br> <br></p>'] = '<p>Licens endpoint låter dig spåra antalet licenser som finns på dina enheter.<br/> <br/>För att skapa en post för att spåra dina licenser du <em>måste</em> för att ge ett namn, en organisation, antalet licenser som förvärvats och namnet på programvaran. På området <code>match_string</code> Du måste ange namnet på den programvara som du vill spåra, du kan använda procentskylten (%) som ett wildcard i match_string.<br/> <br/></p>';

$GLOBALS["lang"]['<p>The network should be in the format 192.168.1.0/24.<br> <br></p>'] = '<p>Nätverket ska vara i formatet 192.168.1.0/24.<br/> <br/></p>';

$GLOBALS["lang"]['<p>The primary and optional secondary items should be fully qualified - ie, devices.type or software.name.<br> <br></p>'] = '<p>De primära och valfria sekundära objekten bör vara fullt kvalificerade - dvs. enheter. typ eller programvara. Namn.<br/> <br/></p>';

$GLOBALS["lang"]['<p>There is no need to do anything if you are running Open-AudIT on a Linux server.<br>
<br>
Windows clients are just fine and require no special actions, however.... to enable this feature the audit script must be run locally on the target Windows system. It cannot be run remotely as we do with WMI calls when running the audit script on one Windows machine, while targeting a second Windows machine. To do this we need to copy the audit script to the target Windows machine and then run it. Unfortunately the service account that Apache runs under is the Local System account. This account has no access to remote (network based) resources. To work around this issue the service must be run under another account. It is easiest to just use the local Administrator account, but you can try any account you like as long as it has the required privileges. The Local System account has as much local access as the local Administrator account.<br>
<br>
See our page on enabling <a href="/index.php/faq?name=Running Open-AudIT Apache Service Under Windows">Running Open-AudIT Apache Service Under Windows</a></p>'] = '<p>Det finns inget behov av att göra något om du kör Open-AudIT på en Linux-server.<br/><br/>Windows-klienter är bara bra och kräver inga speciella åtgärder, men ... för att aktivera den här funktionen måste revisionsskriptet köras lokalt på mål Windows-systemet. Det kan inte köras på distans som vi gör med WMI-samtal när vi kör revisionsskriptet på en Windows-maskin, samtidigt som vi riktar in en andra Windows-maskin. För att göra detta måste vi kopiera revisionsskriptet till mål Windows-maskinen och sedan köra det. Tyvärr är det servicekonto som Apache kör under det lokala systemkontot. Detta konto har ingen tillgång till fjärr (nätverksbaserade) resurser. För att arbeta runt denna fråga måste tjänsten köras under ett annat konto. Det är lättast att bara använda det lokala administratörskontot, men du kan prova vilket konto du vill så länge det har de nödvändiga privilegierna. Lokalt systemkonto har så mycket lokal åtkomst som det lokala administratörskontot.<br/><br/>Se vår sida på att möjliggöra <a href="/index.php/faq?name=Running Open-AudIT Apache Service Under Windows">Kör Open-AudIT Apache Service under Windows</a></p>';

$GLOBALS["lang"]['<p>These are the devices that live within a rack.<br> <br></p>'] = '<p>Dessa är de enheter som bor i ett rack.<br/> <br/></p>';

$GLOBALS["lang"]['<p>This endpoint enables you to add your cloud infrastructure details. Open-AudIT will then reach out to your clouds using their native API and return your servers, just like any other device in Open-AudIT.<br> <br><em>NOTE</em> - To use this feature, we <em>must</em> enable the configuration items match_mac (for AWS) and match_hostname (for Azure). This will be done automatically the first time a cloud discovery is executed.<br> <br>Credentials for your cloud (<a href="/index.php/faq?name=Credentials for Microsoft Azure used in Cloud Discovery">Azure</a> or <a href="/index.php/faq?name=Credentials for Amazon AWS used in Cloud Discovery">AWS</a>) are required.<br> <br></p>'] = '<p>Denna slutpunkt gör att du kan lägga till dina moln infrastruktur detaljer. Open-AudIT kommer sedan att nå ut till dina moln med deras ursprungliga API och returnera dina servrar, precis som alla andra enheter i Open-AudIT.<br/> <br/><em>Notera</em> - För att använda denna funktion, vi <em>måste</em> aktivera konfigurationsobjekten match_mac (för AWS) och match_hostname (för Azure). Detta görs automatiskt första gången en moln upptäckt utförs.<br/> <br/>Behörighet för ditt moln (<a href="/index.php/faq?name=Credentials for Microsoft Azure used in Cloud Discovery">Azure</a> eller <a href="/index.php/faq?name=Credentials for Amazon AWS used in Cloud Discovery">AWS</a>) krävs.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Vulnerabilities reporting based on the NIST CVE feed.<br> <br></p>'] = '<p>Sårbarhetsrapportering baserat på NIST CVE-flödet.<br/> <br/></p>';

$GLOBALS["lang"]['<p>We initially setup the default list of scripts with the default options. These default scripts cannot be deleted. You can create additional scripts for use by you as required. Your script will be based on one of the existing scripts and have custom options applied. The scripts can then be downloaded from the list page at menu -> Discover -> Audit Scripts -> List Audit Scripts<br> <br></p>'] = '<p>Vi installerar ursprungligen standardlistan över skript med standardalternativen. Dessa standardskript kan inte raderas. Du kan skapa ytterligare skript för användning av dig efter behov. Ditt skript kommer att baseras på ett av de befintliga skripten och har anpassade alternativ tillämpas. Skripten kan sedan laddas ner från listsidan på menyn -> Upptäck -> Audit Scripts -> Lista revision Scripts<br/> <br/></p>';

$GLOBALS["lang"]['<p>When using Regex for matching, a helpful page can be found on the <a href="https://www.php.net/manual/en/regexp.reference.meta.php" target="_blank"> PHP website</a>. Some differences to Perl Regex can be found <a href="https://www.php.net/manual/en/reference.pcre.pattern.differences.php" target="_blank">here</a>.</p>'] = '<p>När du använder Regex för matchning kan en användbar sida hittas på <a href="https://www.php.net/manual/en/regexp.reference.meta.php" target="_blank"> PHP hemsida</a>. Vissa skillnader till Perl Regex kan hittas <a href="https://www.php.net/manual/en/reference.pcre.pattern.differences.php" target="_blank">här här här</a>.</p>';

$GLOBALS["lang"]['<p>Widgets can easily be created to show whatever is specific to your environment on your dashboards.<br> <br></p>'] = '<p>Widgets kan enkelt skapas för att visa vad som är specifikt för din miljö på dina instrumentbrädor.<br/> <br/></p>';

$GLOBALS["lang"]['<p>With Open-AudIT Professional and Enterprise you can automate and schedule discoveries, report generation, or baseline checks to run when you want, and as often as you need. Schedule your discoveries to run nightly and reports to be generated and emailed to key personnel each morning. Complex or simple schedules, device discovery and report generation is just a click away.<br> <br>Create individual discovery schedules for each subnet or AD controller, add in reports to be created for targeted audiences. Develop simple or complex schedules to support company needs, avoid backups or impact to operations, or simply to spread the load and speed-up audit completion.<br> <br></p>'] = '<p>Med Open-AudIT Professionella och företag du kan automatisera och schemalägga upptäckter, rapportera generation eller baseline kontroller att köra när du vill, och så ofta du behöver. Planera dina upptäckter att köra nattliga och rapporterar att genereras och skickas till nyckelpersoner varje morgon. Komplexa eller enkla scheman, enhetsupptäckt och rapportgenerering är bara ett klick bort.<br/> <br/>Skapa individuella upptäcktsscheman för varje undernät eller AD-kontroll, lägg till i rapporter som ska skapas för målgrupper. Utveckla enkla eller komplexa scheman för att stödja företagsbehov, undvika säkerhetskopior eller påverkan på verksamheten, eller helt enkelt för att sprida belastningen och hastighetsrevisionen.<br/> <br/></p>';

$GLOBALS["lang"]['<p>You can create a script with all the options for any of the existing audit scripts - not just Windows. AIX, ESX, Linux, OSX and Windows are all covered.<br> <br></p>'] = '<p>Du kan skapa ett manus med alla alternativ för någon av de befintliga revisionsskripten - inte bara Windows. AIX, ESX, Linux, OSX och Windows är alla täckta.<br/> <br/></p>';

$GLOBALS["lang"]['<p>You can use the percent % sign as a wildcard in the match_string.<br> <br></p>'] = '<p>Du kan använda procentskylten som ett wildcard i match_string.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Your racks help refine exactly where your devices are located.<br> <br></p>'] = '<p>Dina rack hjälper till att förfina exakt var dina enheter finns.<br/> <br/></p>';

$GLOBALS["lang"]['A Google Maps API Key is required for this function.'] = 'Google Maps API Nyckeln krävs för denna funktion.';

$GLOBALS["lang"]['A JSON array of device IDs that will have this benchmark executed.'] = 'En JSON-samling av enhets-ID som kommer att ha detta riktmärke utfört.';

$GLOBALS["lang"]['A JSON array of objects matching the software name taken from the CVE, enriched with the software name retrieved by Open-AudIT.'] = 'En JSON-samling av objekt som matchar mjukvarunamnet från CVE, berikat med mjukvarunamnet som hämtats av Open-AudIT.';

$GLOBALS["lang"]['A JSON array of values to test for this vulnerability.'] = 'En JSON mängd värden för att testa för denna sårbarhet.';

$GLOBALS["lang"]['A JSON document containing the Orgs assigned to this user. IDs taken from <code>orgs.id</code>. If a user has access to an Org, they have access to that Orgs descendants.'] = 'Ett JSON-dokument som innehåller Orgs som tilldelats denna användare. ID tas från <code>orgs.id</code>. Om en användare har tillgång till en Org, har de tillgång till Orgs ättlingar.';

$GLOBALS["lang"]['A JSON document containing the required attributes depending on <code>scripts.type</code>.'] = 'Ett JSON-dokument som innehåller de nödvändiga attributen beroende på <code>scripts.type</code>.';

$GLOBALS["lang"]['A JSON document containing the required attributes overriding the chosen discovery_scan_options.'] = 'Ett JSON-dokument som innehåller de nödvändiga attributen som överskrider den valda upptäckten_scan_options.';

$GLOBALS["lang"]['A JSON document containing the required attributes overriding the default device match options.'] = 'Ett JSON-dokument som innehåller de nödvändiga attributen som överskrider standardenhetens matchalternativ.';

$GLOBALS["lang"]['A JSON document containing the roles assigned to this user. Role names taken from <code>roles.name</code>.'] = 'Ett JSON-dokument som innehåller de roller som tilldelats denna användare. Rollnamn tagna från <code>roles.name</code>.';

$GLOBALS["lang"]['A JSON object containing an array of attributes to change if the match occurs.'] = 'Ett JSON-objekt som innehåller en rad attribut för att ändra om matchen inträffar.';

$GLOBALS["lang"]['A JSON object containing an array of attributes to match.'] = 'Ett JSON-objekt som innehåller en rad attribut för att matcha.';

$GLOBALS["lang"]['A JSON object containing collection specific options.'] = 'Ett JSON-objekt som innehåller insamlingsspecifika alternativ.';

$GLOBALS["lang"]['A JSON object populated via a Cloud discovery.'] = 'Ett JSON-objekt befolkat via en molnupptäckt.';

$GLOBALS["lang"]['A JSON representation containing the details of the queue item to be executed.'] = 'En JSON-representation som innehåller detaljerna i köposten som ska utföras.';

$GLOBALS["lang"]['A JSON representation of the fields for this integration.'] = 'En JSON-representation av fälten för denna integration.';

$GLOBALS["lang"]['A JSON representation of the individual tests and their results on all devices this baseline has been run against.'] = 'En JSON-representation av de enskilda testerna och deras resultat på alla enheter som denna baslinje har körts mot.';

$GLOBALS["lang"]['A JSON representation of the tests that make up this policy.'] = 'En JSON-representation av de tester som utgör denna policy.';

$GLOBALS["lang"]['A URL to a file to download.'] = 'En URL till en fil för att ladda ner.';

$GLOBALS["lang"]['A calculated field that displays the number of times this piece of software was found on the computers in the selected Org (and its descendants if configured).'] = 'Ett beräknat fält som visar antalet gånger denna mjukvara hittades på datorerna i den valda Org (och dess ättlingar om de är konfigurerade).';

$GLOBALS["lang"]['A collector is either in Collector or Stand-Alone mode.'] = 'En samlare är antingen i Collector eller Stand-Alone-läge.';

$GLOBALS["lang"]['A comma separated list of applicable CVEs.'] = 'En komma separerad lista över tillämpliga CVE.';

$GLOBALS["lang"]['A comma separated list of values, one of which can be selected.'] = 'En komma separerad lista över värden, varav en kan väljas.';

$GLOBALS["lang"]['A command to run. When the agent is Windows based, this command is run from within the powershell agent.'] = 'Ett kommando att springa. När agenten är Windows-baserad körs det här kommandot inifrån powershell-agenten.';

$GLOBALS["lang"]['A list of custom TCP ports to scan (22 is SSH, 135 is WMI, 62078 is iPhone sync).'] = 'En lista över anpassade TCP-portar att skanna (22 är SSH, 135 är WMI, 62078 är iPhone sync).';

$GLOBALS["lang"]['A list of custom UDP ports to scan (161 is SNMP).'] = 'En lista över anpassade UDP-portar att skanna (161 är SNMP).';

$GLOBALS["lang"]['A lower number means it will be applied before other rules.'] = 'Ett lägre antal innebär att det kommer att tillämpas före andra regler.';

$GLOBALS["lang"]['A lower number means it will be applied before other rules. The default weight is 100.'] = 'Ett lägre antal innebär att det kommer att tillämpas före andra regler. Standardvikten är 100.';

$GLOBALS["lang"]['A password (stored as a hash) that enables logon when using application authentication.'] = 'Ett lösenord (lagras som en hash) som möjliggör logon när du använder applikationsautentisering.';

$GLOBALS["lang"]['A routing domain or address space where the IP addresses and MAC addresses are unique.'] = 'En routing domän eller adress utrymme där IP-adresser och MAC-adresser är unika.';

$GLOBALS["lang"]['A security zone is a administrative domain or policy domain within the Network Domain.'] = 'En säkerhetszon är en administrativ domän eller politisk domän inom Network Domain.';

$GLOBALS["lang"]['A short description of the log entry.'] = 'En kort beskrivning av loggposten.';

$GLOBALS["lang"]['A string that matches the <code>software.name</code> attribute. You can use the standard SQL wildcard of percent (%) to match one or more characters.'] = 'En sträng som matchar <code>software.name</code> attribut. Du kan använda standard SQL wildcard på procent (%) för att matcha en eller flera tecken.';

$GLOBALS["lang"]['A vulnerability affecting availability may allow attackers to disrupt services, crash systems, or cause denial-of-service (DoS) (None, Low, High).'] = 'En sårbarhet som påverkar tillgängligheten kan tillåta angripare att störa tjänster, kraschsystem eller orsaka förnekelse (DoS) (None, Low, High).';

$GLOBALS["lang"]['A vulnerability affecting confidentiality may allow attackers to read sensitive data, such as personal information, credentials, or proprietary business data (None, Low, High).'] = 'En sårbarhet som påverkar konfidentialitet kan tillåta angripare att läsa känsliga data, såsom personlig information, referenser eller egenutvecklade affärsdata (Ingen, Låg, Hög).';

$GLOBALS["lang"]['A vulnerability affecting integrity may allow attackers to modify data, inject malicious code, or alter system configurations (None, Low, High).'] = 'En sårbarhet som påverkar integriteten kan tillåta angripare att ändra data, injicera skadlig kod eller ändra systemkonfigurationer (Ingen, Låg, Hög).';

$GLOBALS["lang"]['AD Group'] = 'AD Group';

$GLOBALS["lang"]['ADSL, HFC, ISDN, etc.'] = 'ADSL, HFC, ISDN, etc.';

$GLOBALS["lang"]['AIX'] = 'AIX';

$GLOBALS["lang"]['ALL IPs'] = 'Alla IPs';

$GLOBALS["lang"]['API / Web Access'] = 'API / Web Access';

$GLOBALS["lang"]['API Documentation'] = 'API dokumentation';

$GLOBALS["lang"]['API Key required.'] = 'API Key krävs.';

$GLOBALS["lang"]['API Result'] = 'API-resultat';

$GLOBALS["lang"]['About'] = 'Om';

$GLOBALS["lang"]['Accept'] = 'Acceptera';

$GLOBALS["lang"]['access_point'] = 'Access Point';

$GLOBALS["lang"]['Access Point'] = 'Access Point';

$GLOBALS["lang"]['access_token'] = 'Access Token';

$GLOBALS["lang"]['Access Token'] = 'Access Token';

$GLOBALS["lang"]['ack_by'] = 'Ack av';

$GLOBALS["lang"]['Ack By'] = 'Ack av';

$GLOBALS["lang"]['ack_date'] = 'Ack datum';

$GLOBALS["lang"]['Ack Date'] = 'Ack datum';

$GLOBALS["lang"]['ack_time'] = 'Ack Time';

$GLOBALS["lang"]['Ack Time'] = 'Ack Time';

$GLOBALS["lang"]['action'] = 'Action';

$GLOBALS["lang"]['Action'] = 'Action';

$GLOBALS["lang"]['action_audit'] = 'Action Audit';

$GLOBALS["lang"]['Action Audit'] = 'Action Audit';

$GLOBALS["lang"]['action_command'] = 'Action Command';

$GLOBALS["lang"]['Action Command'] = 'Action Command';

$GLOBALS["lang"]['action_date'] = 'Action Date';

$GLOBALS["lang"]['Action Date'] = 'Action Date';

$GLOBALS["lang"]['action_devices_assigned_to_location'] = 'Action Devices tilldelas plats';

$GLOBALS["lang"]['Action Devices Assigned To Location'] = 'Action Devices tilldelas plats';

$GLOBALS["lang"]['action_devices_assigned_to_org'] = 'Åtgärdsenheter tilldelade till org';

$GLOBALS["lang"]['Action Devices Assigned To Org'] = 'Åtgärdsenheter tilldelade till org';

$GLOBALS["lang"]['action_download'] = 'Action Download';

$GLOBALS["lang"]['Action Download'] = 'Action Download';

$GLOBALS["lang"]['action_uninstall'] = 'Action Uninstallera';

$GLOBALS["lang"]['Action Uninstall'] = 'Action Uninstallera';

$GLOBALS["lang"]['actioned'] = 'Actioned';

$GLOBALS["lang"]['Actioned'] = 'Actioned';

$GLOBALS["lang"]['actioned_by'] = 'Actioned by';

$GLOBALS["lang"]['Actioned By'] = 'Actioned by';

$GLOBALS["lang"]['actioned_date'] = 'Åtgärdade datum';

$GLOBALS["lang"]['Actioned Date'] = 'Åtgärdade datum';

$GLOBALS["lang"]['actions'] = 'Aktiviteter';

$GLOBALS["lang"]['Actions'] = 'Aktiviteter';

$GLOBALS["lang"]['Activate'] = 'Aktivera';

$GLOBALS["lang"]['Activate Free License'] = 'Aktivera gratis licens';

$GLOBALS["lang"]['Activate Key'] = 'Aktivera nyckel';

$GLOBALS["lang"]['Activate a free Enterprise license'] = 'Aktivera en gratis Enterprise licens';

$GLOBALS["lang"]['Active'] = 'Aktiv';

$GLOBALS["lang"]['Active / Active'] = 'Aktiv / Aktiv';

$GLOBALS["lang"]['Active / Passive'] = 'Aktiv / Passiv';

$GLOBALS["lang"]['Active Directory'] = 'Active Directory';

$GLOBALS["lang"]['Active Directory Domain'] = 'Active Directory Domain';

$GLOBALS["lang"]['active_directory_ou'] = 'Active Directory Ou';

$GLOBALS["lang"]['Active Directory Ou'] = 'Active Directory Ou';

$GLOBALS["lang"]['Active Directory Server'] = 'Active Directory Server';

$GLOBALS["lang"]['ad_domain'] = 'Ad Domän';

$GLOBALS["lang"]['Ad Domain'] = 'Ad Domän';

$GLOBALS["lang"]['ad_group'] = 'Ad Group';

$GLOBALS["lang"]['Ad Group'] = 'Ad Group';

$GLOBALS["lang"]['ad_server'] = 'Ad Server';

$GLOBALS["lang"]['Ad Server'] = 'Ad Server';

$GLOBALS["lang"]['Add'] = 'Lägg till';

$GLOBALS["lang"]['Add Credentials'] = 'Add Credentials';

$GLOBALS["lang"]['Add Device'] = 'Lägg till enhet';

$GLOBALS["lang"]['Add Device to Application'] = 'Lägg till enhet till applikation';

$GLOBALS["lang"]['Add Device to Cluster'] = 'Lägg till enhet till Cluster';

$GLOBALS["lang"]['Add Exception'] = 'Lägg till undantag';

$GLOBALS["lang"]['Add Field'] = 'Lägg till fält';

$GLOBALS["lang"]['Add If'] = 'Lägg till om';

$GLOBALS["lang"]['Add Policies from Device'] = 'Lägg till politik från Enhet';

$GLOBALS["lang"]['Add Policy'] = 'Lägg till policy';

$GLOBALS["lang"]['Add Then'] = 'Lägg till sedan';

$GLOBALS["lang"]['Add image'] = 'Lägg till bild';

$GLOBALS["lang"]['additional_items'] = 'Ytterligare artiklar';

$GLOBALS["lang"]['Additional Items'] = 'Ytterligare artiklar';

$GLOBALS["lang"]['address'] = 'Adress';

$GLOBALS["lang"]['Address'] = 'Adress';

$GLOBALS["lang"]['Admin'] = 'Admin';

$GLOBALS["lang"]['admin_status'] = 'Admin Status';

$GLOBALS["lang"]['Admin Status'] = 'Admin Status';

$GLOBALS["lang"]['advanced'] = 'Avancerad';

$GLOBALS["lang"]['Advanced'] = 'Avancerad';

$GLOBALS["lang"]['Afghanistan'] = 'Afghanistan Afghanistan';

$GLOBALS["lang"]['agents'] = 'Agenter';

$GLOBALS["lang"]['Agents'] = 'Agenter';

$GLOBALS["lang"]['Aggressive'] = 'Aggressiv';

$GLOBALS["lang"]['Aland Islands'] = 'Aland Islands';

$GLOBALS["lang"]['Albania'] = 'Albanien';

$GLOBALS["lang"]['alert_style'] = 'Alert Style';

$GLOBALS["lang"]['Alert Style'] = 'Alert Style';

$GLOBALS["lang"]['Algeria'] = 'Algeriet';

$GLOBALS["lang"]['algorithm'] = 'Algoritm';

$GLOBALS["lang"]['Algorithm'] = 'Algoritm';

$GLOBALS["lang"]['alias'] = 'Alias';

$GLOBALS["lang"]['Alias'] = 'Alias';

$GLOBALS["lang"]['All'] = 'Alla alla';

$GLOBALS["lang"]['All IPs'] = 'Alla IPs';

$GLOBALS["lang"]['All Policies'] = 'Alla politiker';

$GLOBALS["lang"]['All Queued Items'] = 'Alla Queued objekt';

$GLOBALS["lang"]['Amazon AWS Fields'] = 'Amazon AWS Fält';

$GLOBALS["lang"]['American Samoa'] = 'Amerikanska Samoa';

$GLOBALS["lang"]['An array of <code>benchmarks.id</code>.'] = 'En rad av <code>benchmarks.id</code>.';

$GLOBALS["lang"]['An array of <code>devices.id</code>.'] = 'En rad av <code>devices.id</code>.';

$GLOBALS["lang"]['An array of object representing external links to more information.'] = 'En rad objekt som representerar externa länkar till mer information.';

$GLOBALS["lang"]['An encrypted JSON document containing the required attributes depending on the <code>credentials.type</code>.'] = 'Ett krypterat JSON-dokument som innehåller de nödvändiga attributen beroende på <code>credentials.type</code>.';

$GLOBALS["lang"]['An indication of the level of service required by this site.'] = 'En indikation på den servicenivå som krävs av denna webbplats.';

$GLOBALS["lang"]['An internal field that indicates if the discovery has completed.'] = 'Ett internt fält som indikerar om upptäckten har slutförts.';

$GLOBALS["lang"]['An optional GeoCode'] = 'En valfri GeoCode';

$GLOBALS["lang"]['An optional password to use sudo.'] = 'Ett valfritt lösenord för att använda sudo.';

$GLOBALS["lang"]['Andorra'] = 'Andorra';

$GLOBALS["lang"]['Angola'] = 'Angola';

$GLOBALS["lang"]['Anguilla'] = 'Anguilla';

$GLOBALS["lang"]['Antarctica'] = 'Antarktis';

$GLOBALS["lang"]['AntiVirus'] = 'AntiVirus';

$GLOBALS["lang"]['Antigua and Barbuda'] = 'Antigua och Barbuda';

$GLOBALS["lang"]['Antivirus'] = 'Antivirus';

$GLOBALS["lang"]['Any TCP ports (comma seperated, no spaces) you wish to exclude from this discovery. Only available when using Nmap 7+.'] = 'Alla TCP-portar (komma sepererade, inga utrymmen) du vill utesluta från denna upptäckt. Endast tillgänglig när du använder Nmap 7+.';

$GLOBALS["lang"]['Any UDP ports (comma seperated, no spaces) you wish to exclude from this discovery. Only available when using Nmap 7+.'] = 'Alla UDP-portar (komma sepererade, inga utrymmen) du vill utesluta från denna upptäckt. Endast tillgänglig när du använder Nmap 7+.';

$GLOBALS["lang"]['Any additional documentation you need.'] = 'All ytterligare dokumentation du behöver.';

$GLOBALS["lang"]['Any additional notes you care to make.'] = 'Eventuella ytterligare anteckningar du bryr dig om att göra.';

$GLOBALS["lang"]['Any devices will be assigned to this Org when they run their audit script (if set). Links to <code>orgs.id</code>.'] = 'Alla enheter kommer att tilldelas denna Org när de kör sitt revisionsskript (om det anges). Länkar till <code>orgs.id</code>.';

$GLOBALS["lang"]['Any discovered devices will be assigned to this Location if set. Links to <code>locations.id</code>.'] = 'Alla upptäckta enheter kommer att tilldelas denna plats om de är inställda. Länkar till <code>locations.id</code>.';

$GLOBALS["lang"]['Any discovered devices will be assigned to this Location when they run their audit script (if set). Links to <code>locations.id</code>.'] = 'Alla upptäckta enheter kommer att tilldelas denna plats när de kör sitt revisionsskript (om det är bestämt). Länkar till <code>locations.id</code>.';

$GLOBALS["lang"]['Any discovered devices will be assigned to this Org if set. If not set, they are assigned to the <code>org_id</code> of this discovery. Links to <code>orgs.id</code>.'] = 'Alla upptäckta enheter kommer att tilldelas denna Org om de är inställda. Om de inte är inställda tilldelas de <code>org_id</code> av denna upptäckt. Länkar till <code>orgs.id</code>.';

$GLOBALS["lang"]['Any required filter. NOTE: When type = traffic, this represents the font-awesome icon.'] = 'Alla nödvändiga filter. OBS: När typ = trafik, representerar detta den typsnitt-awesome ikonen.';

$GLOBALS["lang"]['Any specific TCP ports you wish tested (comma seperated, no spaces).'] = 'Eventuella specifika TCP-portar du vill testa (komma sepererade, inga utrymmen).';

$GLOBALS["lang"]['Any specific UDP ports you wish tested (comma seperated, no spaces).'] = 'Alla specifika UDP-portar som du vill testa (komma sepererade, inga utrymmen).';

$GLOBALS["lang"]['Application'] = 'Ansökan';

$GLOBALS["lang"]['application_id'] = 'Ansökan ID';

$GLOBALS["lang"]['Application ID'] = 'Ansökan ID';

$GLOBALS["lang"]['Application Licenses'] = 'Tillämpningslicenser';

$GLOBALS["lang"]['Application, Operating System or Hardware.'] = 'Applikation, operativsystem eller hårdvara.';

$GLOBALS["lang"]['applications'] = 'Ansökningar';

$GLOBALS["lang"]['Applications'] = 'Ansökningar';

$GLOBALS["lang"]['applied'] = 'Tillämpad';

$GLOBALS["lang"]['Applied'] = 'Tillämpad';

$GLOBALS["lang"]['Approved'] = 'Godkänd';

$GLOBALS["lang"]['April'] = 'april';

$GLOBALS["lang"]['architecture'] = 'Arkitektur';

$GLOBALS["lang"]['Architecture'] = 'Arkitektur';

$GLOBALS["lang"]['Are you sure you want to delete this input item?'] = 'Är du säker på att du vill ta bort denna inmatningsprodukt?';

$GLOBALS["lang"]['Are you sure you want to delete this output item?'] = 'Är du säker på att du vill ta bort det här utdataobjektet?';

$GLOBALS["lang"]['Are you sure? This will remove all queue entries and prevent the remaining IPs from being discovered.'] = 'Är du säker? Detta kommer att ta bort alla köposter och förhindra att de återstående IP: er upptäcks.';

$GLOBALS["lang"]['Are you sure? This will reset the queue processing count and could cause load on the server.'] = 'Är du säker? Detta kommer att återställa köbearbetningsräkningen och kan orsaka belastning på servern.';

$GLOBALS["lang"]['area'] = 'Område';

$GLOBALS["lang"]['Area'] = 'Område';

$GLOBALS["lang"]['Argentina'] = 'Argentina';

$GLOBALS["lang"]['Armenia'] = 'Armenien';

$GLOBALS["lang"]['arp'] = 'Arp';

$GLOBALS["lang"]['Arp'] = 'Arp';

$GLOBALS["lang"]['Aruba'] = 'Aruba';

$GLOBALS["lang"]['As per the attributes for device environments. Production, Training, et al.'] = 'Enligt attributen för enhetsmiljöer. Produktion, utbildning, et al.';

$GLOBALS["lang"]['As you have Collectors registered, please choose where to execute this discovery.'] = 'När du har Collectors registrerade, välj var du ska utföra denna upptäckt.';

$GLOBALS["lang"]['Ask me later'] = 'Fråga mig senare';

$GLOBALS["lang"]['Ask the Community for help or contribute answers for others.'] = 'Be gemenskapen om hjälp eller bidra med svar för andra.';

$GLOBALS["lang"]['aspect_ratio'] = 'Aspect Ratio';

$GLOBALS["lang"]['Aspect Ratio'] = 'Aspect Ratio';

$GLOBALS["lang"]['Asset ID'] = 'Asset ID';

$GLOBALS["lang"]['asset_ident'] = 'Tillgång Ident';

$GLOBALS["lang"]['Asset Ident'] = 'Tillgång Ident';

$GLOBALS["lang"]['asset_number'] = 'Tillgångsnummer';

$GLOBALS["lang"]['Asset Number'] = 'Tillgångsnummer';

$GLOBALS["lang"]['asset_tag'] = 'Asset Tag';

$GLOBALS["lang"]['Asset Tag'] = 'Asset Tag';

$GLOBALS["lang"]['Assign Device to Application'] = 'Tilldela Enhet till Applikation';

$GLOBALS["lang"]['Assign Device to Cluster'] = 'Tilldela Enhet till Cluster';

$GLOBALS["lang"]['Assign Device to Location'] = 'Tilldela enhet till plats';

$GLOBALS["lang"]['Assign Device to Organisation'] = 'Tilldela enhet till organisation';

$GLOBALS["lang"]['Assign Devices to Location'] = 'Tilldela enheter till plats';

$GLOBALS["lang"]['Assign Devices to Organisation'] = 'Tilldela enheter till organisation';

$GLOBALS["lang"]['Assign an Operator'] = 'Tilldela en operatör';

$GLOBALS["lang"]['Assigned To'] = 'Tilldelat till';

$GLOBALS["lang"]['At present we can use netstat_ports, software and users.'] = 'För närvarande kan vi använda netstat_ports, programvara och användare.';

$GLOBALS["lang"]['attached_device_id'] = 'Fäst enhet ID';

$GLOBALS["lang"]['Attached Device ID'] = 'Fäst enhet ID';

$GLOBALS["lang"]['attached_to'] = 'Bifogad till';

$GLOBALS["lang"]['Attached To'] = 'Bifogad till';

$GLOBALS["lang"]['attachment'] = 'Attachment';

$GLOBALS["lang"]['Attachment'] = 'Attachment';

$GLOBALS["lang"]['attachments'] = 'Bilagor';

$GLOBALS["lang"]['Attachments'] = 'Bilagor';

$GLOBALS["lang"]['attack_complexity'] = 'Attack Complexity';

$GLOBALS["lang"]['Attack Complexity'] = 'Attack Complexity';

$GLOBALS["lang"]['attack_requirements'] = 'Angreppskrav';

$GLOBALS["lang"]['Attack Requirements'] = 'Angreppskrav';

$GLOBALS["lang"]['attack_vector'] = 'Attack Vector';

$GLOBALS["lang"]['Attack Vector'] = 'Attack Vector';

$GLOBALS["lang"]['Attribute'] = 'Attribut';

$GLOBALS["lang"]['attributes'] = 'Attribut';

$GLOBALS["lang"]['Attributes'] = 'Attribut';

$GLOBALS["lang"]['Audit'] = 'Revision';

$GLOBALS["lang"]['Audit AIX'] = 'Audit AIX';

$GLOBALS["lang"]['Audit ESXi'] = 'Revision ESXi';

$GLOBALS["lang"]['Audit Linux'] = 'Revision Linux';

$GLOBALS["lang"]['audit_log'] = 'Audit Log';

$GLOBALS["lang"]['Audit Log'] = 'Audit Log';

$GLOBALS["lang"]['Audit My PC'] = 'Granska min PC';

$GLOBALS["lang"]['Audit OSX'] = 'Audit OSX';

$GLOBALS["lang"]['Audit Result Input'] = 'Audit Result Input';

$GLOBALS["lang"]['Audit Status'] = 'Revisionsstatus';

$GLOBALS["lang"]['Audit Windows'] = 'Granska Windows';

$GLOBALS["lang"]['Audit the Device'] = 'Revidera enheten';

$GLOBALS["lang"]['Audits'] = 'Revisioner';

$GLOBALS["lang"]['August'] = 'augusti augusti';

$GLOBALS["lang"]['Australia'] = 'Australien Australien';

$GLOBALS["lang"]['Austria'] = 'Österrike';

$GLOBALS["lang"]['Auth'] = 'Auth';

$GLOBALS["lang"]['auth'] = 'Auth';

$GLOBALS["lang"]['Authentication Passphrase'] = 'Autentiseringspassfras';

$GLOBALS["lang"]['authority_key_ident'] = 'Myndighet nyckel identitet';

$GLOBALS["lang"]['Authority Key Ident'] = 'Myndighet nyckel identitet';

$GLOBALS["lang"]['Auto'] = 'Auto Auto Auto Auto';

$GLOBALS["lang"]['auto_renew'] = 'Auto förnya';

$GLOBALS["lang"]['Auto Renew'] = 'Auto förnya';

$GLOBALS["lang"]['Auto populated by the Open-AudIT Server.'] = 'Auto befolkas av Open-AudIT Server.';

$GLOBALS["lang"]['AutoRenew'] = 'AutoRenew';

$GLOBALS["lang"]['automatable'] = 'Automatisk';

$GLOBALS["lang"]['Automatable'] = 'Automatisk';

$GLOBALS["lang"]['Automatically populated based on the Collectors OS.'] = 'Automatiskt befolkade baserat på Collectors OS.';

$GLOBALS["lang"]['availability'] = 'Tillgänglighet';

$GLOBALS["lang"]['Availability'] = 'Tillgänglighet';

$GLOBALS["lang"]['Azerbaijan'] = 'Azerbajdzjan';

$GLOBALS["lang"]['BTU Max'] = 'BTU Max';

$GLOBALS["lang"]['BTU Total'] = 'BTU Totalt';

$GLOBALS["lang"]['Backup'] = 'Backup';

$GLOBALS["lang"]['Bahamas the'] = 'Bahamas den';

$GLOBALS["lang"]['Bahrain'] = 'Bahrain';

$GLOBALS["lang"]['Bangladesh'] = 'Bangladesh';

$GLOBALS["lang"]['bank'] = 'Bank Bank Bank Bank';

$GLOBALS["lang"]['Bank'] = 'Bank Bank Bank Bank';

$GLOBALS["lang"]['Banned'] = 'Banned';

$GLOBALS["lang"]['bar_code'] = 'Bar Code';

$GLOBALS["lang"]['Bar Code'] = 'Bar Code';

$GLOBALS["lang"]['Barbados'] = 'Barbados';

$GLOBALS["lang"]['Base DN'] = 'Base DN';

$GLOBALS["lang"]['base_score'] = 'Baspoäng';

$GLOBALS["lang"]['Base Score'] = 'Baspoäng';

$GLOBALS["lang"]['base_severity'] = 'Base Severity';

$GLOBALS["lang"]['Base Severity'] = 'Base Severity';

$GLOBALS["lang"]['based_on'] = 'Baserat på';

$GLOBALS["lang"]['Based On'] = 'Baserat på';

$GLOBALS["lang"]['baseline'] = 'Baseline';

$GLOBALS["lang"]['Baseline'] = 'Baseline';

$GLOBALS["lang"]['baseline_id'] = 'Baseline ID';

$GLOBALS["lang"]['Baseline ID'] = 'Baseline ID';

$GLOBALS["lang"]['baselines'] = 'Baselines';

$GLOBALS["lang"]['Baselines'] = 'Baselines';

$GLOBALS["lang"]['baselines_policies'] = 'Grundläggande politik';

$GLOBALS["lang"]['Baselines Policies'] = 'Grundläggande politik';

$GLOBALS["lang"]['Baselines Policy'] = 'Grundläggande policy';

$GLOBALS["lang"]['Baselines Policy Details'] = 'Grundläggande policydetaljer';

$GLOBALS["lang"]['baselines_results'] = 'Baselines resultat';

$GLOBALS["lang"]['Baselines Results'] = 'Baselines resultat';

$GLOBALS["lang"]['Basic'] = 'Grundläggande';

$GLOBALS["lang"]['Belarus'] = 'Vitryssland';

$GLOBALS["lang"]['Belgium'] = 'Belgien';

$GLOBALS["lang"]['Belize'] = 'Belize';

$GLOBALS["lang"]['Benchmark'] = 'Benchmark';

$GLOBALS["lang"]['benchmark_id'] = 'Benchmark ID';

$GLOBALS["lang"]['Benchmark ID'] = 'Benchmark ID';

$GLOBALS["lang"]['benchmarks'] = 'Benchmarks';

$GLOBALS["lang"]['Benchmarks'] = 'Benchmarks';

$GLOBALS["lang"]['benchmarks_exceptions'] = 'Benchmarks undantag';

$GLOBALS["lang"]['Benchmarks Exceptions'] = 'Benchmarks undantag';

$GLOBALS["lang"]['benchmarks_log'] = 'Benchmarks Log';

$GLOBALS["lang"]['Benchmarks Log'] = 'Benchmarks Log';

$GLOBALS["lang"]['benchmarks_policies'] = 'Benchmarks Policies';

$GLOBALS["lang"]['Benchmarks Policies'] = 'Benchmarks Policies';

$GLOBALS["lang"]['benchmarks_result'] = 'Benchmarks resultat';

$GLOBALS["lang"]['Benchmarks Result'] = 'Benchmarks resultat';

$GLOBALS["lang"]['Benin'] = 'Benin';

$GLOBALS["lang"]['Bermuda'] = 'Bermuda';

$GLOBALS["lang"]['best_practises'] = 'Bästa praxis';

$GLOBALS["lang"]['Best Practises'] = 'Bästa praxis';

$GLOBALS["lang"]['Bhutan'] = 'Bhutan';

$GLOBALS["lang"]['bios'] = 'Bios';

$GLOBALS["lang"]['Bios'] = 'Bios';

$GLOBALS["lang"]['body'] = 'Kropp';

$GLOBALS["lang"]['Body'] = 'Kropp';

$GLOBALS["lang"]['Bolivia'] = 'Bolivia';

$GLOBALS["lang"]['Boolean'] = 'Boolean';

$GLOBALS["lang"]['Boolean 1/0'] = 'Boolean 1/0';

$GLOBALS["lang"]['Boolean y/n'] = 'Boolean y/n';

$GLOBALS["lang"]['boot_device'] = 'Boot Device';

$GLOBALS["lang"]['Boot Device'] = 'Boot Device';

$GLOBALS["lang"]['bootable'] = 'Bootable';

$GLOBALS["lang"]['Bootable'] = 'Bootable';

$GLOBALS["lang"]['Bosnia and Herzegovina'] = 'Bosnien och Hercegovina';

$GLOBALS["lang"]['Botswana'] = 'Botswana';

$GLOBALS["lang"]['Bouvet Island (Bouvetoya)'] = 'Bouvet Island (Bouvetoya)';

$GLOBALS["lang"]['Brazil'] = 'Brasilien';

$GLOBALS["lang"]['Brazilian Portuguese'] = 'Brasiliansk portugisiska';

$GLOBALS["lang"]['British Indian Ocean Territory (Chagos Archipelago)'] = 'British Indian Ocean Territory (Chagos Archipelago)';

$GLOBALS["lang"]['British Virgin Islands'] = 'Brittiska Jungfruöarna';

$GLOBALS["lang"]['Brunei Darussalam'] = 'Brunei Darussalam';

$GLOBALS["lang"]['btu_max'] = 'Btu Max';

$GLOBALS["lang"]['Btu Max'] = 'Btu Max';

$GLOBALS["lang"]['btu_total'] = 'Btu Totalt';

$GLOBALS["lang"]['Btu Total'] = 'Btu Totalt';

$GLOBALS["lang"]['build_number'] = 'Byggnummer';

$GLOBALS["lang"]['Build Number'] = 'Byggnummer';

$GLOBALS["lang"]['build_number_full'] = 'Bygg nummer Full';

$GLOBALS["lang"]['Build Number Full'] = 'Bygg nummer Full';

$GLOBALS["lang"]['Building'] = 'Byggnad';

$GLOBALS["lang"]['Bulgaria'] = 'Bulgarien';

$GLOBALS["lang"]['Bulk Edit'] = 'Bulk Edit';

$GLOBALS["lang"]['Bulk Editing Device Attributes'] = 'Bulk Editing Device Attributes';

$GLOBALS["lang"]['Burkina Faso'] = 'Burkina Faso';

$GLOBALS["lang"]['Burundi'] = 'Burundi';

$GLOBALS["lang"]['business_requirements'] = 'Företagskrav';

$GLOBALS["lang"]['Business Requirements'] = 'Företagskrav';

$GLOBALS["lang"]['Buy'] = 'Köp';

$GLOBALS["lang"]['Buy More'] = 'Köp mer';

$GLOBALS["lang"]['Buy More Licenses'] = 'Köp fler licenser';

$GLOBALS["lang"]['By'] = 'Genom';

$GLOBALS["lang"]['CIDR'] = 'CIDR';

$GLOBALS["lang"]['CIDR Mask'] = 'CIDR Mask';

$GLOBALS["lang"]['cli_config'] = 'CLI Konfig';

$GLOBALS["lang"]['CLI Config'] = 'CLI Konfig';

$GLOBALS["lang"]['CPU'] = 'CPU';

$GLOBALS["lang"]['CPUs'] = 'CPU';

$GLOBALS["lang"]['CSV'] = 'CSV';

$GLOBALS["lang"]['CVE'] = 'CVE';

$GLOBALS["lang"]['Calculated from discovery.'] = 'Beräknad från upptäckt.';

$GLOBALS["lang"]['Calculated total number of valid IP addresses for this network.'] = 'Beräknat totalt antal giltiga IP-adresser för detta nätverk.';

$GLOBALS["lang"]['Calculated upon completion, the time taken to execute this item.'] = 'Beräknad efter slutförandet, den tid som tas för att utföra detta objekt.';

$GLOBALS["lang"]['Calculated when integration is run and contains a JSON representation of the devices in this integration. Each links to <code>devices.id</code>.'] = 'Beräknas när integrationen körs och innehåller en JSON-representation av enheterna i denna integration. Varje länk till <code>devices.id</code>.';

$GLOBALS["lang"]['Calculated when integration is run and contains a JSON representation of the locations in this integration. Each links to <code>locations.id</code>.'] = 'Beräknad när integrationen körs och innehåller en JSON-representation av platserna i denna integration. Varje länk till <code>locations.id</code>.';

$GLOBALS["lang"]['Calculated when integration is run and contains the number of devices selected from Open-AudIT.'] = 'Beräknas när integrationen körs och innehåller antalet enheter som valts från Open-AudIT.';

$GLOBALS["lang"]['Calculated when integration is run and contains the number of devices selected the external system.'] = 'Beräknas när integrationen körs och innehåller antalet enheter som valts ut i det externa systemet.';

$GLOBALS["lang"]['Calculated when integration is run and contains the number of devices to be updated in the external system.'] = 'Beräknas när integrationen körs och innehåller antalet enheter som ska uppdateras i det externa systemet.';

$GLOBALS["lang"]['Calculated when integration is run and contains the number of devices updated in Open-AudIT.'] = 'Beräknas när integrationen körs och innehåller antalet enheter som uppdateras i Open-AudIT.';

$GLOBALS["lang"]['Cambodia'] = 'Kambodja';

$GLOBALS["lang"]['Cameroon'] = 'Kamerun';

$GLOBALS["lang"]['Campus Area Network'] = 'Campus Area Network';

$GLOBALS["lang"]['Can be  <code>active</code>, <code>passive</code> or blank.'] = 'Kan vara <code>active</code>, <code>passive</code> eller blank.';

$GLOBALS["lang"]['Can be <code>application</code>, <code>compute</code>, <code>database</code>, <code>storage</code>, <code>virtualisation</code>, <code>web</code>, <code>other</code> or blank.'] = 'Kan vara <code>application</code>, <code>compute</code>, <code>database</code>, <code>storage</code>, <code>virtualisation</code>, <code>web</code>, <code>other</code> eller blank.';

$GLOBALS["lang"]['Can be <code>auto</code>, <code>fixed</code>, <code>other</code> or blank.'] = 'Kan vara <code>auto</code>, <code>fixed</code>, <code>other</code> eller blank.';

$GLOBALS["lang"]['Can be <code>high availability</code>, <code>load balancing</code>, <code>performance</code>, <code>storage</code>, <code>other</code> or blank.'] = 'Kan vara <code>high availability</code>, <code>load balancing</code>, <code>performance</code>, <code>storage</code>, <code>other</code> eller blank.';

$GLOBALS["lang"]['Can be <code>line</code>, <code>pie</code> or <code>traffic</code>.'] = 'Kan vara <code>line</code>, <code>pie</code> eller <code>traffic</code>.';

$GLOBALS["lang"]['Can be <code>user</code> or <code>collector</code>.'] = 'Kan vara <code>user</code> eller <code>collector</code>.';

$GLOBALS["lang"]['Can be set by discovery or user.'] = 'Kan ställas in av upptäckt eller användare.';

$GLOBALS["lang"]['Can be set by discovery or user. Uses the ID from the locations table.'] = 'Kan ställas in av upptäckt eller användare. Använder ID från tabellen platser.';

$GLOBALS["lang"]['Can the user edit this item.'] = 'Kan användaren redigera detta objekt.';

$GLOBALS["lang"]['Canada'] = 'Kanada Kanada';

$GLOBALS["lang"]['Cancel'] = 'Avbokning';

$GLOBALS["lang"]['capabilities'] = 'Förmågor';

$GLOBALS["lang"]['Capabilities'] = 'Förmågor';

$GLOBALS["lang"]['Capacity'] = 'Kapacitet';

$GLOBALS["lang"]['Cape Verde'] = 'Kap Verde';

$GLOBALS["lang"]['Capitalise'] = 'Kapitalisera';

$GLOBALS["lang"]['caption'] = 'Caption';

$GLOBALS["lang"]['Caption'] = 'Caption';

$GLOBALS["lang"]['Cayman Islands'] = 'Caymanöarna';

$GLOBALS["lang"]['Cellular Details'] = 'Cellulära detaljer';

$GLOBALS["lang"]['Central African Republic'] = 'Centralafrikanska republiken';

$GLOBALS["lang"]['certificate'] = 'Certificate';

$GLOBALS["lang"]['Certificate'] = 'Certificate';

$GLOBALS["lang"]['certificate_file'] = 'Certificate File';

$GLOBALS["lang"]['Certificate File'] = 'Certificate File';

$GLOBALS["lang"]['certificate_name'] = 'Certifikatnamn';

$GLOBALS["lang"]['Certificate Name'] = 'Certifikatnamn';

$GLOBALS["lang"]['certificates'] = 'certifikat';

$GLOBALS["lang"]['Certificates'] = 'certifikat';

$GLOBALS["lang"]['Chad'] = 'Tchad';

$GLOBALS["lang"]['change_id'] = 'Ändra ID';

$GLOBALS["lang"]['Change ID'] = 'Ändra ID';

$GLOBALS["lang"]['change_log'] = 'Ändra logga';

$GLOBALS["lang"]['Change Log'] = 'Ändra logga';

$GLOBALS["lang"]['change_type'] = 'Ändra typ';

$GLOBALS["lang"]['Change Type'] = 'Ändra typ';

$GLOBALS["lang"]['check_minutes'] = 'Check Minutes';

$GLOBALS["lang"]['Check Minutes'] = 'Check Minutes';

$GLOBALS["lang"]['Check for SSH on these ports'] = 'Kontrollera SSH på dessa portar';

$GLOBALS["lang"]['Check this port for any SSH service.'] = 'Kontrollera denna port för alla SSH-tjänster.';

$GLOBALS["lang"]['Chile'] = 'Chile';

$GLOBALS["lang"]['China'] = 'Kina Kina Kina';

$GLOBALS["lang"]['Choose'] = 'Välj Välj Välj';

$GLOBALS["lang"]['Choose (select OS first)'] = 'Välj (välj OS först)';

$GLOBALS["lang"]['Choose a Device'] = 'Välj en enhet';

$GLOBALS["lang"]['Choose a Table'] = 'Välj ett bord';

$GLOBALS["lang"]['Christmas Island'] = 'Christmas Island';

$GLOBALS["lang"]['cidr'] = 'Cidr';

$GLOBALS["lang"]['Cidr'] = 'Cidr';

$GLOBALS["lang"]['circuit_count'] = 'Circuit Count';

$GLOBALS["lang"]['Circuit Count'] = 'Circuit Count';

$GLOBALS["lang"]['circuit_status'] = 'Circuit Status';

$GLOBALS["lang"]['Circuit Status'] = 'Circuit Status';

$GLOBALS["lang"]['city'] = 'Staden City';

$GLOBALS["lang"]['City'] = 'Staden City';

$GLOBALS["lang"]['class'] = 'Klass';

$GLOBALS["lang"]['Class'] = 'Klass';

$GLOBALS["lang"]['class_text'] = 'Klasstext';

$GLOBALS["lang"]['Class Text'] = 'Klasstext';

$GLOBALS["lang"]['Click the Delete button to remove the example devices from Open-AudIT.<br>This will remove the below devices from the database. '] = 'Klicka på knappen Ta bort exemplet enheter från Open-AudIT.<br/>Detta kommer att ta bort nedanstående enheter från databasen. ';

$GLOBALS["lang"]['Click the Import button below to populate Open-AudIT with example device data.'] = 'Klicka på knappen Importera nedan för att fylla Open-AudIT med exempel enhetsdata.';

$GLOBALS["lang"]['Client ID'] = 'Kund ID';

$GLOBALS["lang"]['client_ident'] = 'Kundident';

$GLOBALS["lang"]['Client Ident'] = 'Kundident';

$GLOBALS["lang"]['client_secret'] = 'Kundhemlighet';

$GLOBALS["lang"]['Client Secret'] = 'Kundhemlighet';

$GLOBALS["lang"]['client_site_name'] = 'Kundwebbplatsnamn';

$GLOBALS["lang"]['Client Site Name'] = 'Kundwebbplatsnamn';

$GLOBALS["lang"]['Close'] = 'Nära';

$GLOBALS["lang"]['Cloud'] = 'Cloud';

$GLOBALS["lang"]['Cloud Details'] = 'Cloud Details';

$GLOBALS["lang"]['Cloud Discovery'] = 'Cloud Discovery';

$GLOBALS["lang"]['cloud_id'] = 'Cloud ID';

$GLOBALS["lang"]['Cloud ID'] = 'Cloud ID';

$GLOBALS["lang"]['cloud_log'] = 'Cloud Log';

$GLOBALS["lang"]['Cloud Log'] = 'Cloud Log';

$GLOBALS["lang"]['cloud_name'] = 'Molnnamn';

$GLOBALS["lang"]['Cloud Name'] = 'Molnnamn';

$GLOBALS["lang"]['Cloud Network'] = 'Cloud Network';

$GLOBALS["lang"]['clouds'] = 'Moln';

$GLOBALS["lang"]['Clouds'] = 'Moln';

$GLOBALS["lang"]['cluster'] = 'Cluster';

$GLOBALS["lang"]['Cluster'] = 'Cluster';

$GLOBALS["lang"]['cluster_id'] = 'Cluster ID';

$GLOBALS["lang"]['Cluster ID'] = 'Cluster ID';

$GLOBALS["lang"]['cluster_name'] = 'Klusternamn';

$GLOBALS["lang"]['Cluster Name'] = 'Klusternamn';

$GLOBALS["lang"]['cluster_type'] = 'Cluster Type';

$GLOBALS["lang"]['Cluster Type'] = 'Cluster Type';

$GLOBALS["lang"]['clusters'] = 'Kluster';

$GLOBALS["lang"]['Clusters'] = 'Kluster';

$GLOBALS["lang"]['Cocos (Keeling) Islands'] = 'Cocos (Keeling) öar';

$GLOBALS["lang"]['Collector'] = 'Collector';

$GLOBALS["lang"]['Collector (UUID)'] = 'Collector (UUID)';

$GLOBALS["lang"]['Collector Name'] = 'Collector namn';

$GLOBALS["lang"]['collector_uuid'] = 'Collector Uuid';

$GLOBALS["lang"]['Collector Uuid'] = 'Collector Uuid';

$GLOBALS["lang"]['collectors'] = 'Collectors';

$GLOBALS["lang"]['Collectors'] = 'Collectors';

$GLOBALS["lang"]['Colombia'] = 'Colombia';

$GLOBALS["lang"]['color'] = 'Färgfärg';

$GLOBALS["lang"]['Color'] = 'Färgfärg';

$GLOBALS["lang"]['column'] = 'Kolumn';

$GLOBALS["lang"]['Column'] = 'Kolumn';

$GLOBALS["lang"]['Columns'] = 'Kolumner';

$GLOBALS["lang"]['command'] = 'Kommando';

$GLOBALS["lang"]['Command'] = 'Kommando';

$GLOBALS["lang"]['command_options'] = 'Kommandoalternativ';

$GLOBALS["lang"]['Command Options'] = 'Kommandoalternativ';

$GLOBALS["lang"]['command_output'] = 'Command Output';

$GLOBALS["lang"]['Command Output'] = 'Command Output';

$GLOBALS["lang"]['command_status'] = 'Kommando Status';

$GLOBALS["lang"]['Command Status'] = 'Kommando Status';

$GLOBALS["lang"]['command_time_to_execute'] = 'Kommandotid att utföra';

$GLOBALS["lang"]['Command Time To Execute'] = 'Kommandotid att utföra';

$GLOBALS["lang"]['comment'] = 'Kommentar';

$GLOBALS["lang"]['Comment'] = 'Kommentar';

$GLOBALS["lang"]['comments'] = 'kommentarer';

$GLOBALS["lang"]['Comments'] = 'kommentarer';

$GLOBALS["lang"]['commercial'] = 'Kommersiell';

$GLOBALS["lang"]['Commercial'] = 'Kommersiell';

$GLOBALS["lang"]['common_name'] = 'Vanligt namn';

$GLOBALS["lang"]['Common Name'] = 'Vanligt namn';

$GLOBALS["lang"]['Commonly referred to as the clientId.'] = 'Vanligtvis kallad klientiden.';

$GLOBALS["lang"]['Commonly referred to as the clientSecret.'] = 'Vanligtvis kallad kundhemligheten.';

$GLOBALS["lang"]['Community'] = 'gemenskap';

$GLOBALS["lang"]['Community Questions'] = 'gemenskapsfrågor';

$GLOBALS["lang"]['Community String'] = 'Gemenskapssträng';

$GLOBALS["lang"]['Comoros the'] = 'Komorerna';

$GLOBALS["lang"]['Compact'] = 'Kompakt';

$GLOBALS["lang"]['Company'] = 'Företag';

$GLOBALS["lang"]['Complexity of the attack (Low or High).'] = 'Komplexitet av attacken (låg eller hög).';

$GLOBALS["lang"]['Component Table'] = 'Komponentbord';

$GLOBALS["lang"]['Components (All Devices)'] = 'Komponenter (alla enheter)';

$GLOBALS["lang"]['Compute'] = 'Beräkning';

$GLOBALS["lang"]['Condition'] = 'Villkor';

$GLOBALS["lang"]['Config'] = 'Konfig';

$GLOBALS["lang"]['Config Default, currently '] = 'Config Default, för närvarande ';

$GLOBALS["lang"]['config_file'] = 'Config File';

$GLOBALS["lang"]['Config File'] = 'Config File';

$GLOBALS["lang"]['config_manager_error_code'] = 'Config Manager Error Code';

$GLOBALS["lang"]['Config Manager Error Code'] = 'Config Manager Error Code';

$GLOBALS["lang"]['configuration'] = 'Konfiguration';

$GLOBALS["lang"]['Configuration'] = 'Konfiguration';

$GLOBALS["lang"]['Configure'] = 'Konfigurera';

$GLOBALS["lang"]['Congo'] = 'Kongo';

$GLOBALS["lang"]['Congo the'] = 'Kongo över';

$GLOBALS["lang"]['Connected To'] = 'Ansluten till';

$GLOBALS["lang"]['connection'] = 'Anslutning';

$GLOBALS["lang"]['Connection'] = 'Anslutning';

$GLOBALS["lang"]['Connection Options'] = 'Anslutningsalternativ';

$GLOBALS["lang"]['connection_status'] = 'Anslutningsstatus';

$GLOBALS["lang"]['Connection Status'] = 'Anslutningsstatus';

$GLOBALS["lang"]['connections'] = 'Anslutningar';

$GLOBALS["lang"]['Connections'] = 'Anslutningar';

$GLOBALS["lang"]['Consider filtered Ports Open'] = 'Överväga filtrerad Portar öppna';

$GLOBALS["lang"]['Consider open|filtered Ports Open'] = 'Överväg öppen |filtrerad Portar öppna';

$GLOBALS["lang"]['contact'] = 'Kontakta Kontakt';

$GLOBALS["lang"]['Contact'] = 'Kontakta Kontakt';

$GLOBALS["lang"]['contact_name'] = 'Kontaktnamn';

$GLOBALS["lang"]['Contact Name'] = 'Kontaktnamn';

$GLOBALS["lang"]['contained_in'] = 'Innehållet i';

$GLOBALS["lang"]['Contained In'] = 'Innehållet i';

$GLOBALS["lang"]['Contains a JSON object details the associated widgets and their positions.'] = 'Innehåller ett JSON-objekt detaljer de tillhörande widgets och deras positioner.';

$GLOBALS["lang"]['Contains the fields that determine if we should use ssh, snmp and wmi discovery options. A JSON object.'] = 'Innehåller de fält som avgör om vi ska använda ssh, snmp och wmi upptäckt alternativ. Ett JSON-objekt.';

$GLOBALS["lang"]['Context Engine ID'] = 'Context Engine ID';

$GLOBALS["lang"]['Context Name'] = 'Kontextnamn';

$GLOBALS["lang"]['contractual_obligations'] = 'Kontraktsförpliktelser';

$GLOBALS["lang"]['Contractual Obligations'] = 'Kontraktsförpliktelser';

$GLOBALS["lang"]['Cook Islands'] = 'Cook Islands';

$GLOBALS["lang"]['Copy and paste an audit result'] = 'Kopiera och klistra in ett revisionsresultat';

$GLOBALS["lang"]['Copy and paste the below to the forums, another instance of Open-AudIT or anywhere else you need to provide this item.'] = 'Kopiera och klistra in nedan till forumen, en annan instans av Open-AudIT eller någon annanstans du behöver för att ge detta objekt.';

$GLOBALS["lang"]['core_count'] = 'Core Count';

$GLOBALS["lang"]['Core Count'] = 'Core Count';

$GLOBALS["lang"]['Cores'] = 'Cores';

$GLOBALS["lang"]['cost_center'] = 'Kostnadscenter';

$GLOBALS["lang"]['Cost Center'] = 'Kostnadscenter';

$GLOBALS["lang"]['cost_code'] = 'Kostnadskod';

$GLOBALS["lang"]['Cost Code'] = 'Kostnadskod';

$GLOBALS["lang"]['Costa Rica'] = 'Costa Rica';

$GLOBALS["lang"]['Cote d Ivoire'] = 'Cote d Ivoire';

$GLOBALS["lang"]['count'] = 'Räkna';

$GLOBALS["lang"]['Count'] = 'Räkna';

$GLOBALS["lang"]['country'] = 'Landet';

$GLOBALS["lang"]['Country'] = 'Landet';

$GLOBALS["lang"]['country_code'] = 'Country Code';

$GLOBALS["lang"]['Country Code'] = 'Country Code';

$GLOBALS["lang"]['cpu_count'] = 'Cpu Count';

$GLOBALS["lang"]['Cpu Count'] = 'Cpu Count';

$GLOBALS["lang"]['Create'] = 'Skapa';

$GLOBALS["lang"]['Create Example Devices'] = 'Skapa exempel på enheter';

$GLOBALS["lang"]['create_external_count'] = 'Skapa extern greve';

$GLOBALS["lang"]['Create External Count'] = 'Skapa extern greve';

$GLOBALS["lang"]['create_external_from_internal'] = 'Skapa externt från interna';

$GLOBALS["lang"]['Create External From Internal'] = 'Skapa externt från interna';

$GLOBALS["lang"]['Create Geocode'] = 'Skapa geokod';

$GLOBALS["lang"]['create_internal_count'] = 'Skapa internräkning';

$GLOBALS["lang"]['Create Internal Count'] = 'Skapa internräkning';

$GLOBALS["lang"]['create_internal_from_external'] = 'Skapa interna från externa';

$GLOBALS["lang"]['Create Internal From External'] = 'Skapa interna från externa';

$GLOBALS["lang"]['Create NMIS Devices from Open-AudIT'] = 'Skapa NMIS-enheter från Open-AudIT';

$GLOBALS["lang"]['Create Open-AudIT Devices from '] = 'Skapa Open-AudIT Enheter från ';

$GLOBALS["lang"]['Create Open-AudIT Devices from NMIS'] = 'Skapa Open-AudIT Enheter från NMIS';

$GLOBALS["lang"]['created_by'] = 'Skapad av';

$GLOBALS["lang"]['Created By'] = 'Skapad av';

$GLOBALS["lang"]['created_date'] = 'Skapat datum';

$GLOBALS["lang"]['Created Date'] = 'Skapat datum';

$GLOBALS["lang"]['Creating'] = 'Skapa';

$GLOBALS["lang"]['Creating Device'] = 'Skapa enhet';

$GLOBALS["lang"]['Creating a Query'] = 'Skapa en Query';

$GLOBALS["lang"]['creator'] = 'Skaparen';

$GLOBALS["lang"]['Creator'] = 'Skaparen';

$GLOBALS["lang"]['credential'] = 'Credential';

$GLOBALS["lang"]['Credential'] = 'Credential';

$GLOBALS["lang"]['credentials'] = 'Credentials';

$GLOBALS["lang"]['Credentials'] = 'Credentials';

$GLOBALS["lang"]['Credentials Client ID'] = 'Credentials Client ID';

$GLOBALS["lang"]['Credentials Subscription ID'] = 'Credentials prenumeration ID';

$GLOBALS["lang"]['Credentials Tenant ID'] = 'Credentials Tenant ID';

$GLOBALS["lang"]['Credentials for Amazon AWS used in Cloud Discovery'] = 'Behörighet för Amazon AWS som används i Cloud Discovery';

$GLOBALS["lang"]['Credentials for Microsoft Azure used in Cloud Discovery'] = 'Credentials för Microsoft Azure används i Cloud Discovery';

$GLOBALS["lang"]['Critical'] = 'Kritisk';

$GLOBALS["lang"]['criticality'] = 'Kritik';

$GLOBALS["lang"]['Criticality'] = 'Kritik';

$GLOBALS["lang"]['Croatia'] = 'Kroatien';

$GLOBALS["lang"]['Cuba'] = 'Kuba';

$GLOBALS["lang"]['current'] = 'Nuvarande';

$GLOBALS["lang"]['Current'] = 'Nuvarande';

$GLOBALS["lang"]['Current Discovery Processes'] = 'Nuvarande upptäcktsprocesser';

$GLOBALS["lang"]['Current date & time is '] = 'Nuvarande datum och tid är ';

$GLOBALS["lang"]['Currently Installed'] = 'För närvarande installerad';

$GLOBALS["lang"]['Currently supported types are <code>snmp</code>, <code>snmp_v3</code>, <code>ssh</code>, <code>ssh_key</code> or <code>windows</code>.'] = 'För närvarande stödda typer är <code>snmp</code>, <code>snmp_v3</code>, <code>ssh</code>, <code>ssh_key</code> eller <code>windows</code>.';

$GLOBALS["lang"]['Custom TCP Ports'] = 'Anpassade TCP-portar';

$GLOBALS["lang"]['Custom UDP Ports'] = 'Anpassad UDP Hamnar';

$GLOBALS["lang"]['Cve'] = 'Cve';

$GLOBALS["lang"]['Cyprus'] = 'Cypern';

$GLOBALS["lang"]['Czech'] = 'Tjeckien Tjeckien Tjeckien';

$GLOBALS["lang"]['Czech Republic'] = 'Tjeckien';

$GLOBALS["lang"]['DHCP'] = 'DHCP';

$GLOBALS["lang"]['DN Account (optional)'] = 'DN-konto (valfritt)';

$GLOBALS["lang"]['DN Password (optional)'] = 'DN-lösenord (tillval)';

$GLOBALS["lang"]['DNS FQDN'] = 'DNS FQDN';

$GLOBALS["lang"]['DNS Hostname'] = 'DNS Hostname';

$GLOBALS["lang"]['dashboard_id'] = 'Dashboard ID';

$GLOBALS["lang"]['Dashboard ID'] = 'Dashboard ID';

$GLOBALS["lang"]['dashboards'] = 'Dashboards';

$GLOBALS["lang"]['Dashboards'] = 'Dashboards';

$GLOBALS["lang"]['Database'] = 'Databas';

$GLOBALS["lang"]['db_action'] = 'Databasåtgärd';

$GLOBALS["lang"]['Database Action'] = 'Databasåtgärd';

$GLOBALS["lang"]['db_column'] = 'Databaskolumn';

$GLOBALS["lang"]['Database Column'] = 'Databaskolumn';

$GLOBALS["lang"]['Database Definition'] = 'Databasdefinition';

$GLOBALS["lang"]['db_row'] = 'Databas Row';

$GLOBALS["lang"]['Database Row'] = 'Databas Row';

$GLOBALS["lang"]['Database Schema'] = 'Databas Schema';

$GLOBALS["lang"]['db_table'] = 'Databasbord';

$GLOBALS["lang"]['Database Table'] = 'Databasbord';

$GLOBALS["lang"]['dataset_title'] = 'Dataset Title';

$GLOBALS["lang"]['Dataset Title'] = 'Dataset Title';

$GLOBALS["lang"]['date'] = 'Datum';

$GLOBALS["lang"]['Date'] = 'Datum';

$GLOBALS["lang"]['Date D-M-Y'] = 'Datum D-M-Y';

$GLOBALS["lang"]['Date M-D-Y'] = 'Datum M-D-Y';

$GLOBALS["lang"]['Date Now'] = 'Datum nu';

$GLOBALS["lang"]['date_of_manufacture'] = 'Datum för tillverkning';

$GLOBALS["lang"]['Date Of Manufacture'] = 'Datum för tillverkning';

$GLOBALS["lang"]['date_paid'] = 'Datum betalt';

$GLOBALS["lang"]['Date Paid'] = 'Datum betalt';

$GLOBALS["lang"]['date_received'] = 'Datum mottaget';

$GLOBALS["lang"]['Date Received'] = 'Datum mottaget';

$GLOBALS["lang"]['Date Y-M-D'] = 'Datum Y-M-D';

$GLOBALS["lang"]['Date and time when the CVE was last updated.'] = 'Datum och tid när CVE senast uppdaterades.';

$GLOBALS["lang"]['Date and time when the CVE was published.'] = 'Datum och tid när CVE publicerades.';

$GLOBALS["lang"]['Date when the CVE was published.'] = 'Datum när CVE publicerades.';

$GLOBALS["lang"]['DateTime Now'] = 'Datumtid nu';

$GLOBALS["lang"]['DateTime Y-M-D H:M:S'] = 'Datumtid Y-M-D H:M:S';

$GLOBALS["lang"]['day_of_month'] = 'Dag för månad';

$GLOBALS["lang"]['Day Of Month'] = 'Dag för månad';

$GLOBALS["lang"]['day_of_week'] = 'Dag för vecka';

$GLOBALS["lang"]['Day Of Week'] = 'Dag för vecka';

$GLOBALS["lang"]['Day of Month'] = 'Månadens dag';

$GLOBALS["lang"]['dbus_identifier'] = 'Dbus Identifier';

$GLOBALS["lang"]['Dbus Identifier'] = 'Dbus Identifier';

$GLOBALS["lang"]['Debug'] = 'Debug';

$GLOBALS["lang"]['December'] = 'december';

$GLOBALS["lang"]['Default'] = 'Standard';

$GLOBALS["lang"]['Default Items'] = 'Standard objekt';

$GLOBALS["lang"]['Default Value'] = 'Standardvärde';

$GLOBALS["lang"]['Default of 389. Normally 636 used for Active Directory LDAPS.'] = 'Standard på 389. Normalt 636 används för Active Directory LDAPS.';

$GLOBALS["lang"]['Default of <code>3</code> for LDAP and Active Directory.'] = 'Standard för <code>3</code> för LDAP och Active Directory.';

$GLOBALS["lang"]['Defaults'] = 'Standarder';

$GLOBALS["lang"]['delay_minutes'] = 'Delay Minutes';

$GLOBALS["lang"]['Delay Minutes'] = 'Delay Minutes';

$GLOBALS["lang"]['Delete'] = 'Delete';

$GLOBALS["lang"]['Delete Example Devices'] = 'Ta bort Exempel Enheter';

$GLOBALS["lang"]['delete_external_from_internal'] = 'Ta bort externt från interna';

$GLOBALS["lang"]['Delete External From Internal'] = 'Ta bort externt från interna';

$GLOBALS["lang"]['Delete NMIS Devices if not in Open-AudIT'] = 'Ta bort NMIS Enheter om inte i Open-AudIT';

$GLOBALS["lang"]['Delete from Application'] = 'Ta bort från Application';

$GLOBALS["lang"]['Delete from Cluster'] = 'Ta bort från Cluster';

$GLOBALS["lang"]['Denmark'] = 'Danmark';

$GLOBALS["lang"]['Derived by audit or manually set by user.'] = 'härledd av revision eller manuellt inställd av användaren.';

$GLOBALS["lang"]['Derived by audit.'] = 'härledd av revision.';

$GLOBALS["lang"]['Derived from <code>rack_devices.device_id</code>.'] = 'härrör från <code>rack_devices.device_id</code>.';

$GLOBALS["lang"]['Derived from <code>rack_devices.rack_id</code>.'] = 'härrör från <code>rack_devices.rack_id</code>.';

$GLOBALS["lang"]['Derived from Collector discovery.'] = 'Härrör från Collector discovery.';

$GLOBALS["lang"]['Derived from OS Name.'] = 'härrör från OS Name.';

$GLOBALS["lang"]['Derived from cloud discovery.'] = 'härrör från moln upptäckt.';

$GLOBALS["lang"]['Derived from device audits.'] = 'härrör från enhetsrevisioner.';

$GLOBALS["lang"]['Derived from device type and OS.'] = 'härrör från enhetstyp och OS.';

$GLOBALS["lang"]['Derived from discovery.'] = 'härrör från upptäckten.';

$GLOBALS["lang"]['Derived from hostname, sysName, dns Hostname and IP in that order.'] = 'Härrör från värdnamn, sysName, dns Hostname och IP i den ordningen.';

$GLOBALS["lang"]['Derived from the integer severity.'] = 'härrör från integerns svårighetsgrad.';

$GLOBALS["lang"]['description'] = 'Beskrivning';

$GLOBALS["lang"]['Description'] = 'Beskrivning';

$GLOBALS["lang"]['destination'] = 'Destination';

$GLOBALS["lang"]['Destination'] = 'Destination';

$GLOBALS["lang"]['detail'] = 'Detalj';

$GLOBALS["lang"]['Detail'] = 'Detalj';

$GLOBALS["lang"]['Details'] = 'Detaljer';

$GLOBALS["lang"]['details'] = 'Detaljer';

$GLOBALS["lang"]['Details of who is usually contactable at this site.'] = 'Detaljer om vem som vanligtvis är kontaktbar på denna webbplats.';

$GLOBALS["lang"]['device'] = 'Enhet';

$GLOBALS["lang"]['Device'] = 'Enhet';

$GLOBALS["lang"]['Device Audits'] = 'Enhetsrevisioner';

$GLOBALS["lang"]['Device ID'] = 'Enhet ID';

$GLOBALS["lang"]['device_id'] = 'Enhet ID';

$GLOBALS["lang"]['device_id_a'] = 'Enhet ID A';

$GLOBALS["lang"]['Device ID A'] = 'Enhet ID A';

$GLOBALS["lang"]['device_id_b'] = 'Enhet ID B';

$GLOBALS["lang"]['Device ID B'] = 'Enhet ID B';

$GLOBALS["lang"]['Device Name'] = 'Enhetsnamn';

$GLOBALS["lang"]['Device Result'] = 'Enhetsresultat';

$GLOBALS["lang"]['Device Results'] = 'Enhetsresultat';

$GLOBALS["lang"]['Device Seed'] = 'Device Seed';

$GLOBALS["lang"]['Device Seed IP'] = 'Device Seed IP';

$GLOBALS["lang"]['Device Status'] = 'Enhetsstatus';

$GLOBALS["lang"]['Device Types'] = 'Enhetstyper';

$GLOBALS["lang"]['Device is in the Subnet'] = 'Enhet finns i Subnet';

$GLOBALS["lang"]['Devices'] = 'Enheter';

$GLOBALS["lang"]['devices_assigned_to_location'] = 'Enheter som tilldelats plats';

$GLOBALS["lang"]['Devices Assigned To Location'] = 'Enheter som tilldelats plats';

$GLOBALS["lang"]['devices_assigned_to_org'] = 'Enheter som tilldelats org';

$GLOBALS["lang"]['Devices Assigned To Org'] = 'Enheter som tilldelats org';

$GLOBALS["lang"]['Devices Audited'] = 'Enheter reviderade';

$GLOBALS["lang"]['Devices Created in '] = 'Enheter som skapats i ';

$GLOBALS["lang"]['Devices Created in Open-AudIT'] = 'Enheter som skapats i Open-AudIT';

$GLOBALS["lang"]['devices_default_display_columns'] = 'Enheter Standard Display Columns';

$GLOBALS["lang"]['Devices Default Display Columns'] = 'Enheter Standard Display Columns';

$GLOBALS["lang"]['Devices Found Last 7 Days'] = 'Enheter hittades senast 7 dagar';

$GLOBALS["lang"]['Devices Found Today'] = 'Enheter som finns idag';

$GLOBALS["lang"]['Devices Found Yesterday'] = 'Enheter hittades igår';

$GLOBALS["lang"]['Devices Not Audited'] = 'Enheter som inte revideras';

$GLOBALS["lang"]['Devices Not Seen 30 Days'] = 'Enheter som inte ses 30 dagar';

$GLOBALS["lang"]['Devices Not Seen 7 Days'] = 'Enheter som inte ses 7 dagar';

$GLOBALS["lang"]['Devices Not Seen 90 Days'] = 'Enheter som inte ses 90 dagar';

$GLOBALS["lang"]['Devices Retrieved via API'] = 'Enheter hämtade via API';

$GLOBALS["lang"]['Devices Selected from '] = 'Enheter som väljs från ';

$GLOBALS["lang"]['Devices Selected from Open-AudIT'] = 'Utvalda enheter från Open-AudIT';

$GLOBALS["lang"]['Devices Updated in '] = 'Enheter uppdaterade i ';

$GLOBALS["lang"]['Devices Updated in Open-AudIT'] = 'Enheter uppdaterade i Open-AudIT';

$GLOBALS["lang"]['Devices are being benchmarked.'] = 'Enheter är benchmarked.';

$GLOBALS["lang"]['Devices are not being benchmarked.'] = 'Enheter är inte benchmarked.';

$GLOBALS["lang"]['Devices could be benchmarked.'] = 'Enheter kan jämföras.';

$GLOBALS["lang"]['Devices in Running State'] = 'Enheter i Running State';

$GLOBALS["lang"]['Devices in Stopped State'] = 'Enheter i stoppad stat';

$GLOBALS["lang"]['Devices in this'] = 'Enheter i detta';

$GLOBALS["lang"]['Devired from type or OS.'] = 'Avvikas från typ eller OS.';

$GLOBALS["lang"]['dhcp_enabled'] = 'Dhcp aktiverad';

$GLOBALS["lang"]['Dhcp Enabled'] = 'Dhcp aktiverad';

$GLOBALS["lang"]['dhcp_lease_expires'] = 'Dhcp Lease går ut';

$GLOBALS["lang"]['Dhcp Lease Expires'] = 'Dhcp Lease går ut';

$GLOBALS["lang"]['dhcp_lease_obtained'] = 'Dhcp lease kvar';

$GLOBALS["lang"]['Dhcp Lease Obtained'] = 'Dhcp lease kvar';

$GLOBALS["lang"]['dhcp_server'] = 'Dhcp Server';

$GLOBALS["lang"]['Dhcp Server'] = 'Dhcp Server';

$GLOBALS["lang"]['Did the command complete successfully and return expected data.'] = 'Hade kommandot fullständigt framgångsrikt och returnera förväntade data.';

$GLOBALS["lang"]['direction'] = 'Riktning';

$GLOBALS["lang"]['Direction'] = 'Riktning';

$GLOBALS["lang"]['directory'] = 'Directory';

$GLOBALS["lang"]['Directory'] = 'Directory';

$GLOBALS["lang"]['disabled'] = 'Inaktiverad';

$GLOBALS["lang"]['Disabled'] = 'Inaktiverad';

$GLOBALS["lang"]['discard'] = 'Discard';

$GLOBALS["lang"]['Discard'] = 'Discard';

$GLOBALS["lang"]['Discover'] = 'upptäcka';

$GLOBALS["lang"]['discoveries'] = 'upptäckter';

$GLOBALS["lang"]['Discoveries'] = 'upptäckter';

$GLOBALS["lang"]['Discovery'] = 'Upptäck';

$GLOBALS["lang"]['Discovery Change Logs'] = 'Discovery Change Logs';

$GLOBALS["lang"]['Discovery Data Retention'] = 'Discovery Data Retention';

$GLOBALS["lang"]['discovery_id'] = 'Discovery ID';

$GLOBALS["lang"]['Discovery ID'] = 'Discovery ID';

$GLOBALS["lang"]['Discovery Issues'] = 'Discovery frågor';

$GLOBALS["lang"]['discovery_log'] = 'Discovery Log';

$GLOBALS["lang"]['Discovery Log'] = 'Discovery Log';

$GLOBALS["lang"]['Discovery Match Options'] = 'Discovery Match Options';

$GLOBALS["lang"]['Discovery Name'] = 'Upptäckt namn';

$GLOBALS["lang"]['Discovery Options'] = 'Upptäck alternativ';

$GLOBALS["lang"]['Discovery Queue Count'] = 'Discovery Queue Count';

$GLOBALS["lang"]['Discovery Queue Limit'] = 'Discovery Queue Limit';

$GLOBALS["lang"]['discovery_run'] = 'Discovery Run';

$GLOBALS["lang"]['Discovery Run'] = 'Discovery Run';

$GLOBALS["lang"]['discovery_scan_options'] = 'Discovery Scan Options';

$GLOBALS["lang"]['Discovery Scan Options'] = 'Discovery Scan Options';

$GLOBALS["lang"]['disk'] = 'Disk';

$GLOBALS["lang"]['Disk'] = 'Disk';

$GLOBALS["lang"]['display_version'] = 'Visa version';

$GLOBALS["lang"]['Display Version'] = 'Visa version';

$GLOBALS["lang"]['Display in Menu'] = 'Visa i Menu';

$GLOBALS["lang"]['district'] = 'District';

$GLOBALS["lang"]['District'] = 'District';

$GLOBALS["lang"]['Djibouti'] = 'Djibouti';

$GLOBALS["lang"]['dns'] = 'Dns';

$GLOBALS["lang"]['Dns'] = 'Dns';

$GLOBALS["lang"]['dns_domain'] = 'Dns Domain';

$GLOBALS["lang"]['Dns Domain'] = 'Dns Domain';

$GLOBALS["lang"]['dns_domain_reg_enabled'] = 'Dns domän Reg aktiverad';

$GLOBALS["lang"]['Dns Domain Reg Enabled'] = 'Dns domän Reg aktiverad';

$GLOBALS["lang"]['dns_fqdn'] = 'Dns Fqdn';

$GLOBALS["lang"]['Dns Fqdn'] = 'Dns Fqdn';

$GLOBALS["lang"]['dns_host_name'] = 'Dns värdnamn';

$GLOBALS["lang"]['Dns Host Name'] = 'Dns värdnamn';

$GLOBALS["lang"]['dns_hostname'] = 'Dns Hostname';

$GLOBALS["lang"]['Dns Hostname'] = 'Dns Hostname';

$GLOBALS["lang"]['dns_server'] = 'Dns Server';

$GLOBALS["lang"]['Dns Server'] = 'Dns Server';

$GLOBALS["lang"]['Do not scan these TCP ports.'] = 'Skanna inte dessa TCP-portar.';

$GLOBALS["lang"]['Do not scan these UDP ports.'] = 'Skanna inte dessa UDP-portar.';

$GLOBALS["lang"]['Do not show me again'] = 'Visa mig inte igen';

$GLOBALS["lang"]['Do you want to use secure transport (LDAPS) or regular unencrypted LDAP.'] = 'Vill du använda säker transport (LDAPS) eller vanlig okrypterad LDAP.';

$GLOBALS["lang"]['Do you wish to see the standard sidebar on the left.'] = 'Vill du se standardsidan på vänster sida.';

$GLOBALS["lang"]['documentation'] = 'Dokumentation';

$GLOBALS["lang"]['Documentation'] = 'Dokumentation';

$GLOBALS["lang"]['Does the license apply to child Orgs.'] = 'Gäller licensen för barn Orgs.';

$GLOBALS["lang"]['domain'] = 'Domain';

$GLOBALS["lang"]['Domain'] = 'Domain';

$GLOBALS["lang"]['domain_controller_address'] = 'Domain Controller Adress';

$GLOBALS["lang"]['Domain Controller Address'] = 'Domain Controller Adress';

$GLOBALS["lang"]['domain_controller_name'] = 'Domänkontroll Namnnamn';

$GLOBALS["lang"]['Domain Controller Name'] = 'Domänkontroll Namnnamn';

$GLOBALS["lang"]['domain_role'] = 'Domain Role';

$GLOBALS["lang"]['Domain Role'] = 'Domain Role';

$GLOBALS["lang"]['domain_short'] = 'Domain Short';

$GLOBALS["lang"]['Domain Short'] = 'Domain Short';

$GLOBALS["lang"]['Dominica'] = 'Dominica';

$GLOBALS["lang"]['Dominican Republic'] = 'Dominikanska republiken';

$GLOBALS["lang"]['Dont hold my hand, I know what I am doing. No filter and the ability to join custom tables.'] = 'Håll inte min hand, jag vet vad jag gör. Inget filter och förmågan att gå med i anpassade tabeller.';

$GLOBALS["lang"]['Download'] = 'Ladda ner';

$GLOBALS["lang"]['Download a file from URL'] = 'Ladda ner en fil från URL';

$GLOBALS["lang"]['driver'] = 'Förare';

$GLOBALS["lang"]['Driver'] = 'Förare';

$GLOBALS["lang"]['duplex'] = 'Duplex';

$GLOBALS["lang"]['Duplex'] = 'Duplex';

$GLOBALS["lang"]['duration'] = 'Varaktighet';

$GLOBALS["lang"]['Duration'] = 'Varaktighet';

$GLOBALS["lang"]['ESXi'] = 'ESXi';

$GLOBALS["lang"]['EULA'] = 'EULA';

$GLOBALS["lang"]['Ecuador'] = 'Ecuador';

$GLOBALS["lang"]['Edit'] = 'Edit';

$GLOBALS["lang"]['edit_log'] = 'Edit Log';

$GLOBALS["lang"]['Edit Log'] = 'Edit Log';

$GLOBALS["lang"]['editable'] = 'Editable';

$GLOBALS["lang"]['Editable'] = 'Editable';

$GLOBALS["lang"]['edited_by'] = 'Redigerad av';

$GLOBALS["lang"]['Edited By'] = 'Redigerad av';

$GLOBALS["lang"]['edited_date'] = 'Redigerad datum';

$GLOBALS["lang"]['Edited Date'] = 'Redigerad datum';

$GLOBALS["lang"]['edition'] = 'Edition';

$GLOBALS["lang"]['Edition'] = 'Edition';

$GLOBALS["lang"]['Egypt'] = 'Egypten Egypten';

$GLOBALS["lang"]['Either Amazon, Google or Microsoft.'] = 'Antingen Amazon, Google eller Microsoft.';

$GLOBALS["lang"]['Either none or present.

<strong>None</strong> - The successful attack does not depend on the deployment and execution conditions of the vulnerable system. The attacker can expect to be able to reach the vulnerability and execute the exploit under all or most instances of the vulnerability.

<strong>Present</strong> - The successful attack depends on the presence of specific deployment and execution conditions of the vulnerable system that enable the attack. These include:

A race condition must be won to successfully exploit the vulnerability. The successfulness of the attack is conditioned on execution conditions that are not under full control of the attacker. The attack may need to be launched multiple times against a single target before being successful.

Network injection. The attacker must inject themselves into the logical network path between the target and the resource requested by the victim (e.g. vulnerabilities requiring an on-path attacker).'] = 'Antingen ingen eller närvarande.

<strong>Ingen</strong> Den framgångsrika attacken beror inte på utplacerings- och genomförandeförhållandena i det sårbara systemet. Angriparen kan förvänta sig att kunna nå sårbarheten och utföra utnyttjandet under alla eller de flesta fall av sårbarheten.

<strong>Nuvarande</strong> - Den framgångsrika attacken beror på förekomsten av specifika utplacerings- och genomförandeförhållanden i det sårbara systemet som möjliggör attacken. Dessa inkluderar:

Ett tävlingstillstånd måste vinnas för att framgångsrikt utnyttja sårbarheten. Angreppets framgång är konditionerad på utförandeförhållanden som inte är under full kontroll av angriparen. Attacken kan behöva startas flera gånger mot ett enda mål innan den lyckas.

Nätverksinjektion. Angriparen måste injicera sig på den logiska nätvägen mellan målet och den resurs som offret begär (t.ex. sårbarheter som kräver en angripare på väg).';

$GLOBALS["lang"]['El Salvador'] = 'El Salvador';

$GLOBALS["lang"]['email'] = 'E-post';

$GLOBALS["lang"]['Email'] = 'E-post';

$GLOBALS["lang"]['email_address'] = 'E-postadress';

$GLOBALS["lang"]['Email Address'] = 'E-postadress';

$GLOBALS["lang"]['Email Configuration'] = 'E-postkonfiguration';

$GLOBALS["lang"]['Email to send test to'] = 'E-post för att skicka test till';

$GLOBALS["lang"]['Enable'] = 'Aktivera';

$GLOBALS["lang"]['enabled'] = 'Enabled';

$GLOBALS["lang"]['Enabled'] = 'Enabled';

$GLOBALS["lang"]['encryption'] = 'Kryptering';

$GLOBALS["lang"]['Encryption'] = 'Kryptering';

$GLOBALS["lang"]['encryption_method'] = 'Krypteringsmetod';

$GLOBALS["lang"]['Encryption Method'] = 'Krypteringsmetod';

$GLOBALS["lang"]['encryption_status'] = 'Krypteringsstatus';

$GLOBALS["lang"]['Encryption Status'] = 'Krypteringsstatus';

$GLOBALS["lang"]['end_date'] = 'Slutdatum';

$GLOBALS["lang"]['End Date'] = 'Slutdatum';

$GLOBALS["lang"]['End OF Life Product ID'] = 'Slut på Life Product ID';

$GLOBALS["lang"]['end_of_life'] = 'Slut på livet';

$GLOBALS["lang"]['End Of Life'] = 'Slut på livet';

$GLOBALS["lang"]['end_of_production'] = 'Slut på produktion';

$GLOBALS["lang"]['End Of Production'] = 'Slut på produktion';

$GLOBALS["lang"]['end_of_service'] = 'Slut på service';

$GLOBALS["lang"]['End Of Service'] = 'Slut på service';

$GLOBALS["lang"]['end_of_service_life'] = 'Slut på Service Life';

$GLOBALS["lang"]['End Of Service Life'] = 'Slut på Service Life';

$GLOBALS["lang"]['English'] = 'engelska engelska';

$GLOBALS["lang"]['enterprise'] = 'Företag';

$GLOBALS["lang"]['Enterprise'] = 'Företag';

$GLOBALS["lang"]['Enterprise Private Network'] = 'Enterprise Private Network';

$GLOBALS["lang"]['Entitlement Type'] = 'rättighetstyp';

$GLOBALS["lang"]['environment'] = 'Miljö';

$GLOBALS["lang"]['Environment'] = 'Miljö';

$GLOBALS["lang"]['Equal To'] = 'Lika för';

$GLOBALS["lang"]['Equal To or Greater Than'] = 'Lika för eller större än';

$GLOBALS["lang"]['Equal To or Less Than'] = 'Lika för eller mindre än';

$GLOBALS["lang"]['Equals'] = 'Likaså';

$GLOBALS["lang"]['Equatorial Guinea'] = 'Ekvatorialguinea';

$GLOBALS["lang"]['Eritrea'] = 'Eritrea';

$GLOBALS["lang"]['Error'] = 'Fel';

$GLOBALS["lang"]['Error Code'] = 'Felkod';

$GLOBALS["lang"]['Established'] = 'Etablerad';

$GLOBALS["lang"]['Estonia'] = 'Estland';

$GLOBALS["lang"]['Ethernet MAC'] = 'Ethernet MAC';

$GLOBALS["lang"]['ethernet_mac'] = 'Ethernet Mac';

$GLOBALS["lang"]['Ethernet Mac'] = 'Ethernet Mac';

$GLOBALS["lang"]['Ethiopia'] = 'Etiopien';

$GLOBALS["lang"]['Every'] = 'Var och en var';

$GLOBALS["lang"]['Every Day'] = 'Varje dag';

$GLOBALS["lang"]['Exceptions'] = 'Undantag';

$GLOBALS["lang"]['exclude'] = 'Exkludera';

$GLOBALS["lang"]['Exclude'] = 'Exkludera';

$GLOBALS["lang"]['exclude_ip'] = 'Exkludera IP';

$GLOBALS["lang"]['Exclude IP'] = 'Exkludera IP';

$GLOBALS["lang"]['Exclude IP Addresses'] = 'Exkludera IP-adresser';

$GLOBALS["lang"]['Exclude TCP Ports'] = 'Exkludera TCP Ports';

$GLOBALS["lang"]['exclude_tcp_ports'] = 'Exkludera Tcp Ports';

$GLOBALS["lang"]['Exclude Tcp Ports'] = 'Exkludera Tcp Ports';

$GLOBALS["lang"]['Exclude UDP Ports'] = 'Undvik UDP-portar';

$GLOBALS["lang"]['exclude_udp_ports'] = 'Uteslut Udp Ports';

$GLOBALS["lang"]['Exclude Udp Ports'] = 'Uteslut Udp Ports';

$GLOBALS["lang"]['Exclude these IP addresses from being Nmap scanned.'] = 'Uteslut dessa IP-adresser från att vara Nmap skannade.';

$GLOBALS["lang"]['Excluded'] = 'Exkluderad';

$GLOBALS["lang"]['exclusion_reasons'] = 'Exclusion skäl';

$GLOBALS["lang"]['Exclusion Reasons'] = 'Exclusion skäl';

$GLOBALS["lang"]['executable'] = 'Exekutabel';

$GLOBALS["lang"]['Executable'] = 'Exekutabel';

$GLOBALS["lang"]['executable_id'] = 'Exekverbart ID';

$GLOBALS["lang"]['Executable ID'] = 'Exekverbart ID';

$GLOBALS["lang"]['executables'] = 'Exekverbara';

$GLOBALS["lang"]['Executables'] = 'Exekverbara';

$GLOBALS["lang"]['Execute'] = 'Utförlig';

$GLOBALS["lang"]['Executing'] = 'Utförande';

$GLOBALS["lang"]['exemption_reason'] = 'Undantagsförnuft';

$GLOBALS["lang"]['Exemption Reason'] = 'Undantagsförnuft';

$GLOBALS["lang"]['Existing Building'] = 'Befintlig byggnad';

$GLOBALS["lang"]['Existing Floor'] = 'Befintlig golv';

$GLOBALS["lang"]['Existing Room'] = 'Befintliga rum';

$GLOBALS["lang"]['Existing Row'] = 'Befintlig Row';

$GLOBALS["lang"]['expire_date'] = 'Expire Date';

$GLOBALS["lang"]['Expire Date'] = 'Expire Date';

$GLOBALS["lang"]['expire_minutes'] = 'Expire Minutes';

$GLOBALS["lang"]['Expire Minutes'] = 'Expire Minutes';

$GLOBALS["lang"]['expires'] = 'Förfaller';

$GLOBALS["lang"]['Expires'] = 'Förfaller';

$GLOBALS["lang"]['expiry_date'] = 'Förfallodatum';

$GLOBALS["lang"]['Expiry Date'] = 'Förfallodatum';

$GLOBALS["lang"]['exploit_maturity'] = 'Exploatera mognad';

$GLOBALS["lang"]['Exploit Maturity'] = 'Exploatera mognad';

$GLOBALS["lang"]['Export'] = 'Export';

$GLOBALS["lang"]['Export by Device'] = 'Export från Device';

$GLOBALS["lang"]['Export by Policy'] = 'Export av policy';

$GLOBALS["lang"]['Export data to'] = 'Exportera data till';

$GLOBALS["lang"]['expose'] = 'Exponering';

$GLOBALS["lang"]['Expose'] = 'Exponering';

$GLOBALS["lang"]['External'] = 'Externa';

$GLOBALS["lang"]['External Field Name'] = 'Externt fältnamn';

$GLOBALS["lang"]['External Field Type'] = 'Extern fälttyp';

$GLOBALS["lang"]['external_ident'] = 'Extern identitet';

$GLOBALS["lang"]['External Ident'] = 'Extern identitet';

$GLOBALS["lang"]['external_link'] = 'Extern länk';

$GLOBALS["lang"]['External Link'] = 'Extern länk';

$GLOBALS["lang"]['extra_columns'] = 'Extra kolumner';

$GLOBALS["lang"]['Extra Columns'] = 'Extra kolumner';

$GLOBALS["lang"]['Extra and more verbose logging is generated for troubleshooting.'] = 'Extra och mer verbose loggning genereras för felsökning.';

$GLOBALS["lang"]['FAQ'] = 'FAQ';

$GLOBALS["lang"]['FQDN'] = 'FQDN';

$GLOBALS["lang"]['FW Revision'] = 'FW Revision';

$GLOBALS["lang"]['Fail'] = 'Underlåtenhet';

$GLOBALS["lang"]['Failed'] = 'Misslyckades';

$GLOBALS["lang"]['Failed Severity'] = 'Misslyckad Severity';

$GLOBALS["lang"]['Falkland Islands (Malvinas)'] = 'Falklandsöarna (Malvinas)';

$GLOBALS["lang"]['Family'] = 'Familj';

$GLOBALS["lang"]['Faroe Islands'] = 'Färöarna';

$GLOBALS["lang"]['Features'] = 'funktioner';

$GLOBALS["lang"]['February'] = 'februari februari';

$GLOBALS["lang"]['field'] = 'Fält';

$GLOBALS["lang"]['Field'] = 'Fält';

$GLOBALS["lang"]['field_id'] = 'Fält ID';

$GLOBALS["lang"]['Field ID'] = 'Fält ID';

$GLOBALS["lang"]['Field Name'] = 'Fältnamn';

$GLOBALS["lang"]['Field Type'] = 'Fälttyp';

$GLOBALS["lang"]['Fields'] = 'Fält';

$GLOBALS["lang"]['fields'] = 'Fält';

$GLOBALS["lang"]['Fiji the Fiji Islands'] = 'Fiji Fiji öarna';

$GLOBALS["lang"]['File'] = 'Fil';

$GLOBALS["lang"]['File Import'] = 'Fil Importera';

$GLOBALS["lang"]['File Input'] = 'Fil Input';

$GLOBALS["lang"]['file_name'] = 'Filnamn';

$GLOBALS["lang"]['File Name'] = 'Filnamn';

$GLOBALS["lang"]['file_size'] = 'Filstorlek';

$GLOBALS["lang"]['File Size'] = 'Filstorlek';

$GLOBALS["lang"]['filename'] = 'Filenam';

$GLOBALS["lang"]['Filename'] = 'Filenam';

$GLOBALS["lang"]['files'] = 'Filer';

$GLOBALS["lang"]['Files'] = 'Filer';

$GLOBALS["lang"]['files_id'] = 'Filer ID';

$GLOBALS["lang"]['Files ID'] = 'Filer ID';

$GLOBALS["lang"]['filter'] = 'Filter';

$GLOBALS["lang"]['Filter'] = 'Filter';

$GLOBALS["lang"]['filtered'] = 'Filtrerad';

$GLOBALS["lang"]['Filtered'] = 'Filtrerad';

$GLOBALS["lang"]['Finland'] = 'Finland Finland Finland';

$GLOBALS["lang"]['Firewall'] = 'Brandvägg';

$GLOBALS["lang"]['firewall_rule'] = 'Brandväggsregel';

$GLOBALS["lang"]['Firewall Rule'] = 'Brandväggsregel';

$GLOBALS["lang"]['firmware'] = 'Brandware';

$GLOBALS["lang"]['Firmware'] = 'Brandware';

$GLOBALS["lang"]['firmware_revision'] = 'Firmware Revision';

$GLOBALS["lang"]['Firmware Revision'] = 'Firmware Revision';

$GLOBALS["lang"]['First Name'] = 'Förnamn';

$GLOBALS["lang"]['first_run'] = 'Första körningen';

$GLOBALS["lang"]['First Run'] = 'Första körningen';

$GLOBALS["lang"]['first_seen'] = 'Första Seen';

$GLOBALS["lang"]['First Seen'] = 'Första Seen';

$GLOBALS["lang"]['FirstWave'] = 'Första vågen';

$GLOBALS["lang"]['Fix'] = 'Fix';

$GLOBALS["lang"]['Fixed'] = 'Fast';

$GLOBALS["lang"]['Floor'] = 'Floor';

$GLOBALS["lang"]['Follow any of the links below and discover how to use Open-AudIT to find out <b>Whats On Your Network?</b>'] = 'Följ någon av länkarna nedan och upptäck hur du använder Open-AudIT för att ta reda på <b>Vad är på ditt nätverk?</b>';

$GLOBALS["lang"]['For a seed discovery, should I only discover IPs in the private IP address space.'] = 'För en fröupptäckt ska jag bara upptäcka IP-adresser i det privata IP-adressutrymmet.';

$GLOBALS["lang"]['For a seed discovery, should I only discover IPs on the chosen subnet.'] = 'För en frö upptäckt, om jag bara upptäcka IPs på det valda subnet.';

$GLOBALS["lang"]['For a seed discovery, should I ping the subnet before running the discovery.'] = 'För en frö upptäckt, om jag ping subnet innan du kör upptäckten.';

$GLOBALS["lang"]['For advanced entry of a raw SQL query. As per Queries, you must include <code>WHERE @filter AND<code> in your SQL.'] = 'För avancerad inträde av en rå SQL-fråga. Enligt Queries måste du inkludera <code>WHERE @filter AND<code> in your SQL.</code></code>';

$GLOBALS["lang"]['For licenses that are not perpetual, when does the license expire.'] = 'För licenser som inte är permanenta, när licensen löper ut.';

$GLOBALS["lang"]['form_factor'] = 'Formfaktor';

$GLOBALS["lang"]['Form Factor'] = 'Formfaktor';

$GLOBALS["lang"]['format'] = 'Format';

$GLOBALS["lang"]['Format'] = 'Format';

$GLOBALS["lang"]['fqdn'] = 'Fqdn';

$GLOBALS["lang"]['Fqdn'] = 'Fqdn';

$GLOBALS["lang"]['France, French Republic'] = 'Frankrike, Frankrike';

$GLOBALS["lang"]['free'] = 'Gratis gratis';

$GLOBALS["lang"]['Free'] = 'Gratis gratis';

$GLOBALS["lang"]['French'] = 'Franska franska';

$GLOBALS["lang"]['French Guiana'] = 'Franska Guyana';

$GLOBALS["lang"]['French Polynesia'] = 'Franska Polynesien';

$GLOBALS["lang"]['French Southern Territories'] = 'Franska södra territorier';

$GLOBALS["lang"]['Frequently Asked Questions'] = 'Vanliga frågor';

$GLOBALS["lang"]['Friday'] = 'fredag fredag';

$GLOBALS["lang"]['From 100 Devices'] = 'Från 100 enheter';

$GLOBALS["lang"]['From 500 Devices'] = 'Från 500 enheter';

$GLOBALS["lang"]['full_name'] = 'Fullständigt namn';

$GLOBALS["lang"]['Full Name'] = 'Fullständigt namn';

$GLOBALS["lang"]['function'] = 'Funktion';

$GLOBALS["lang"]['Function'] = 'Funktion';

$GLOBALS["lang"]['GROUP BY'] = 'GROUP BY';

$GLOBALS["lang"]['Gabon'] = 'Gabon';

$GLOBALS["lang"]['Gambia the'] = 'Gambia';

$GLOBALS["lang"]['gateway'] = 'Gateway';

$GLOBALS["lang"]['Gateway'] = 'Gateway';

$GLOBALS["lang"]['gateways'] = 'Gateways';

$GLOBALS["lang"]['Gateways'] = 'Gateways';

$GLOBALS["lang"]['Generated By'] = 'Genererad av';

$GLOBALS["lang"]['geo'] = 'Geo';

$GLOBALS["lang"]['Geo'] = 'Geo';

$GLOBALS["lang"]['Georgia'] = 'Georgien';

$GLOBALS["lang"]['German'] = 'Tyska tyska';

$GLOBALS["lang"]['Germany'] = 'Tyskland Tyskland';

$GLOBALS["lang"]['Get Lat/Long'] = 'Få Lat/Long';

$GLOBALS["lang"]['Get Started'] = 'Kom igång';

$GLOBALS["lang"]['Get a Free License'] = 'Få en gratis licens';

$GLOBALS["lang"]['Getting Started'] = 'Komma igång';

$GLOBALS["lang"]['Ghana'] = 'Ghana';

$GLOBALS["lang"]['Gibraltar'] = 'Gibraltar';

$GLOBALS["lang"]['Global Discovery Options'] = 'Globala upptäcktsalternativ';

$GLOBALS["lang"]['Go'] = 'Go Go Go Go';

$GLOBALS["lang"]['Google Compute Fields'] = 'Google Compute-fält';

$GLOBALS["lang"]['Google Maps API Key'] = 'Google Maps API Nyckeln';

$GLOBALS["lang"]['Greater Than'] = 'Större än';

$GLOBALS["lang"]['Greater Than or Equals'] = 'Större än eller lika';

$GLOBALS["lang"]['Greece'] = 'Grekland';

$GLOBALS["lang"]['Green Query'] = 'Gröna Query';

$GLOBALS["lang"]['Greenland'] = 'Grönland';

$GLOBALS["lang"]['Grenada'] = 'Grenada';

$GLOBALS["lang"]['Group'] = 'Gruppgrupp';

$GLOBALS["lang"]['group_by'] = 'Grupp av';

$GLOBALS["lang"]['Group By'] = 'Grupp av';

$GLOBALS["lang"]['group_id'] = 'Grupp ID';

$GLOBALS["lang"]['Group ID'] = 'Grupp ID';

$GLOBALS["lang"]['groups'] = 'Grupper';

$GLOBALS["lang"]['Groups'] = 'Grupper';

$GLOBALS["lang"]['Guadeloupe'] = 'Guadeloupe';

$GLOBALS["lang"]['Guam'] = 'Guam';

$GLOBALS["lang"]['Guatemala'] = 'Guatemala';

$GLOBALS["lang"]['Guernsey'] = 'Guernsey';

$GLOBALS["lang"]['guest_device_id'] = 'Gästenhet ID';

$GLOBALS["lang"]['Guest Device ID'] = 'Gästenhet ID';

$GLOBALS["lang"]['guid'] = 'Guid';

$GLOBALS["lang"]['Guid'] = 'Guid';

$GLOBALS["lang"]['Guinea'] = 'Guinea';

$GLOBALS["lang"]['Guinea-Bissau'] = 'Guinea-Bissau';

$GLOBALS["lang"]['Guyana'] = 'Guyana';

$GLOBALS["lang"]['HP-UX'] = 'HP-UX';

$GLOBALS["lang"]['HW Revision'] = 'HW revision';

$GLOBALS["lang"]['Haiti'] = 'Haiti';

$GLOBALS["lang"]['hard_drive_index'] = 'Hårddisk Index';

$GLOBALS["lang"]['Hard Drive Index'] = 'Hårddisk Index';

$GLOBALS["lang"]['hardware_revision'] = 'Hardware Revision';

$GLOBALS["lang"]['Hardware Revision'] = 'Hardware Revision';

$GLOBALS["lang"]['Has this policy been applied in this organization.'] = 'Har denna policy tillämpats i denna organisation.';

$GLOBALS["lang"]['hash'] = 'Hash';

$GLOBALS["lang"]['Hash'] = 'Hash';

$GLOBALS["lang"]['Head'] = 'Head';

$GLOBALS["lang"]['Heard Island and McDonald Islands'] = 'Heard Island och McDonald Islands';

$GLOBALS["lang"]['height'] = 'höjd';

$GLOBALS["lang"]['Height'] = 'höjd';

$GLOBALS["lang"]['Height in RU'] = 'Höjd i RU';

$GLOBALS["lang"]['Help'] = 'Hjälp';

$GLOBALS["lang"]['Help and Frequently Asked Questions'] = 'Hjälp och vanliga frågor';

$GLOBALS["lang"]['high'] = 'Hög';

$GLOBALS["lang"]['High'] = 'Hög';

$GLOBALS["lang"]['High Availability'] = 'Hög tillgänglighet';

$GLOBALS["lang"]['Holy See (Vatican City State)'] = 'Holy See (Vatican City State)';

$GLOBALS["lang"]['Home'] = 'Hemsidan';

$GLOBALS["lang"]['home'] = 'Hemsidan';

$GLOBALS["lang"]['Home Area Network'] = 'Home Area Network';

$GLOBALS["lang"]['Honduras'] = 'Honduras';

$GLOBALS["lang"]['Hong Kong'] = 'Hong Kong';

$GLOBALS["lang"]['host'] = 'Värd';

$GLOBALS["lang"]['Host'] = 'Värd';

$GLOBALS["lang"]['hostname'] = 'Hostname';

$GLOBALS["lang"]['Hostname'] = 'Hostname';

$GLOBALS["lang"]['hour'] = 'Hour';

$GLOBALS["lang"]['Hour'] = 'Hour';

$GLOBALS["lang"]['How and Why is Open-AudIT More Secure'] = 'Hur och varför är Open-AudIT mer säker';

$GLOBALS["lang"]['How long did the command take to execute.'] = 'Hur länge tog kommandot att verkställa.';

$GLOBALS["lang"]['How long should Nmap wait for a response, per device.'] = 'Hur länge ska Nmap vänta på ett svar, per enhet.';

$GLOBALS["lang"]['How many circuit feed to this rack.'] = 'Hur många kretsar matar till denna rack.';

$GLOBALS["lang"]['How many policies results in a fail.'] = 'Hur många policyer resulterar i ett misslyckande.';

$GLOBALS["lang"]['How many policies results in a pass.'] = 'Hur många policyer resulterar i ett pass.';

$GLOBALS["lang"]['How many power sockets in this rack.'] = 'Hur många kraftuttag i denna rack.';

$GLOBALS["lang"]['How many rack units in height is this rack.'] = 'Hur många rack enheter i höjd är denna rack.';

$GLOBALS["lang"]['How often should the collector ask the server for a task.'] = 'Hur ofta ska samlaren be servern om en uppgift.';

$GLOBALS["lang"]['How should we select devices to be integrated (using an Attribute, Query or a Group).'] = 'Hur ska vi välja enheter som ska integreras (med hjälp av en Attribute, Query eller en grupp).';

$GLOBALS["lang"]['How the vulnerability is exploited (e.g., Network, Adjacent, Local, Physical).'] = 'Hur sårbarheten utnyttjas (t.ex. Network, Adjacent, Local, Physical).';

$GLOBALS["lang"]['How to compare'] = 'Hur man jämför';

$GLOBALS["lang"]['Human-readable explanation of the vulnerability.'] = 'Mänsklig läsbar förklaring av sårbarheten.';

$GLOBALS["lang"]['Hungary'] = 'Ungern';

$GLOBALS["lang"]['hw_cpe'] = 'Hw Cpe';

$GLOBALS["lang"]['Hw Cpe'] = 'Hw Cpe';

$GLOBALS["lang"]['hyperthreading'] = 'Hyperthreading';

$GLOBALS["lang"]['Hyperthreading'] = 'Hyperthreading';

$GLOBALS["lang"]['I have read the EULA.'] = 'Jag har läst EULA.';

$GLOBALS["lang"]['id'] = 'ID';

$GLOBALS["lang"]['ID'] = 'ID';

$GLOBALS["lang"]['IF'] = 'Om';

$GLOBALS["lang"]['IOS Version'] = 'IOS Version';

$GLOBALS["lang"]['IP'] = 'IP IP IP';

$GLOBALS["lang"]['ip'] = 'IP IP IP';

$GLOBALS["lang"]['IP Address'] = 'IP-adress';

$GLOBALS["lang"]['IP Addresses'] = 'IP-adresser';

$GLOBALS["lang"]['IP Last Seen'] = 'IP förra Seen';

$GLOBALS["lang"]['IP Set By'] = 'IP Set by';

$GLOBALS["lang"]['ISO 27001 only.'] = 'ISO 27001.';

$GLOBALS["lang"]['Iceland'] = 'Island Island Island';

$GLOBALS["lang"]['icon'] = 'Icon';

$GLOBALS["lang"]['Icon'] = 'Icon';

$GLOBALS["lang"]['Icon and Text'] = 'Ikon och text';

$GLOBALS["lang"]['Icon only, text only or icon and text.'] = 'Ikon endast, text eller ikon och text.';

$GLOBALS["lang"]['id_internal'] = 'Id Internal';

$GLOBALS["lang"]['Id Internal'] = 'Id Internal';

$GLOBALS["lang"]['id_number'] = 'Id-nummer';

$GLOBALS["lang"]['Id Number'] = 'Id-nummer';

$GLOBALS["lang"]['identification'] = 'Identifiering';

$GLOBALS["lang"]['Identification'] = 'Identifiering';

$GLOBALS["lang"]['If'] = 'Om';

$GLOBALS["lang"]['If a port responds with filtered, should we consider it available.'] = 'Om en port svarar med filtrerat, bör vi överväga den tillgänglig.';

$GLOBALS["lang"]['If a port responds with open|filtered, should we consider it available.'] = 'Om en port svarar med öppen |filtrerad, bör vi överväga den tillgänglig.';

$GLOBALS["lang"]['If a remote device does not exist in the Open-AudIT selected devices, should we delete it from the external system.'] = 'Om en fjärrenhet inte finns i Open-AudIT-valda enheter, ska vi ta bort den från det externa systemet.';

$GLOBALS["lang"]['If an Open-AudIT device has been changed, should we update the external system.'] = 'Om en Open-AudIT-enhet har ändrats bör vi uppdatera det externa systemet.';

$GLOBALS["lang"]['If an Open-AudIT device is not on the external system, should we create it.'] = 'Om en Open-AudIT-enhet inte finns på det externa systemet ska vi skapa den.';

$GLOBALS["lang"]['If an agent reports its primary IP is in this subnet, perform the actions.'] = 'Om en agent rapporterar att dess primära IP är i detta undernät, utför åtgärderna.';

$GLOBALS["lang"]['If any of these (comma seperated, no spaces) ports are detected, assume SSH is running on them and use them for auditing. No need to add this port to the Custom TCP ports - it will be added automatically.'] = 'Om någon av dessa (komma sepererade, inga utrymmen) hamnar upptäcks, antar SSH körs på dem och använder dem för revision. Du behöver inte lägga till den här porten i de anpassade TCP-portarna - den läggs till automatiskt.';

$GLOBALS["lang"]['If set, holds a JSON array of specific device columns this user has chosen to see, other than the configuration default.'] = 'Om du ställer in, håller en JSON-array av specifika enhetskolumner som den här användaren har valt att se, annat än konfigurationsstandarden.';

$GLOBALS["lang"]['If the agent OS family (case insensitive) contains this string, perform the actions.'] = 'Om agenten OS-familjen (är okänslig) innehåller denna sträng, utför åtgärderna.';

$GLOBALS["lang"]['If the following conditions are met:<br><ul><li>a Role has an assigned ad_group</li><li>an Org has an assigned ad_group</li><li>an LDAP Server has use_roles set to y</li><li>a user exists in LDAP (be it Active Directory or OpenLDAP) and is in the assigned ad_groups</li></ul>That user can log on to Open-AudIT without an account in Open-AudIT needing to be created. Open-AudIT will query the LDAP in question and if the user is in the required groups but not in Open-AudIT, their user attributes (name, full name, email,  roles, orgs, etc) within Open-AudIT will be automatically populated and they will be logged on.<br> <br>'] = 'Om följande villkor är uppfyllda:<br/><ul><li>En Role har en tilldelad ad_group</li><li>En Org har en tilldelad ad_group</li><li>En LDAP Server har Use_roles inställd på y</li><li>en användare finns i LDAP (om det är Active Directory eller OpenLDAP) och är i de tilldelade ad_groups</li></ul>Den användaren kan logga in på Open-AudIT utan ett konto i Open-AudIT som behöver skapas. Open-AudIT kommer att fråga LDAP i fråga och om användaren är i de grupper som krävs men inte i Open-AudIT, deras användarattribut (namn, fullständigt namn, e-post, roller, orgs, etc) inom Open-AudIT kommer automatiskt att fyllas och de kommer att loggas in.<br/> <br/>';

$GLOBALS["lang"]['If the user logging on to Open-AudIT does not have the access to search LDAP, you can use another account which does have this access.'] = 'Om användaren loggar in på Open-AudIT inte har tillgång till sök LDAP kan du använda ett annat konto som har denna åtkomst.';

$GLOBALS["lang"]['If this many or more minutes have passed since the device contacted the server, perform the actions.'] = 'Om detta många eller flera minuter har gått sedan enheten kontaktade servern, utför åtgärderna.';

$GLOBALS["lang"]['If you choose a Collector, it will be scheduled to execute on the next 5 minute boundary.'] = 'Om du väljer en Collector, kommer det att vara planerat att genomföra nästa 5 minuters gräns.';

$GLOBALS["lang"]['ifadminstatus'] = 'Omadminstatus';

$GLOBALS["lang"]['Ifadminstatus'] = 'Omadminstatus';

$GLOBALS["lang"]['iflastchange'] = 'Omlastchange';

$GLOBALS["lang"]['Iflastchange'] = 'Omlastchange';

$GLOBALS["lang"]['Ignored'] = 'Okunnig';

$GLOBALS["lang"]['image'] = 'Bild';

$GLOBALS["lang"]['Image'] = 'Bild';

$GLOBALS["lang"]['Images'] = 'Bilder';

$GLOBALS["lang"]['impact_availability'] = 'Impact tillgänglighet';

$GLOBALS["lang"]['Impact Availability'] = 'Impact tillgänglighet';

$GLOBALS["lang"]['impact_confidentiality'] = 'Impact Confidentiality';

$GLOBALS["lang"]['Impact Confidentiality'] = 'Impact Confidentiality';

$GLOBALS["lang"]['impact_integrity'] = 'Inverkan Integritet';

$GLOBALS["lang"]['Impact Integrity'] = 'Inverkan Integritet';

$GLOBALS["lang"]['implementation_notes'] = 'Implementeringsmeddelanden';

$GLOBALS["lang"]['Implementation Notes'] = 'Implementeringsmeddelanden';

$GLOBALS["lang"]['Import'] = 'Importera import';

$GLOBALS["lang"]['Import Example Data'] = 'Importera Exempeldata';

$GLOBALS["lang"]['improvement_opportunities'] = 'Förbättringsmöjligheter';

$GLOBALS["lang"]['Improvement Opportunities'] = 'Förbättringsmöjligheter';

$GLOBALS["lang"]['In'] = 'Inom';

$GLOBALS["lang"]['Inactive'] = 'Inaktiv';

$GLOBALS["lang"]['Include'] = 'Inkludera';

$GLOBALS["lang"]['Incomplete'] = 'Ofullständig';

$GLOBALS["lang"]['Index'] = 'Index';

$GLOBALS["lang"]['India'] = 'Indien Indien';

$GLOBALS["lang"]['Indonesia'] = 'Indonesien';

$GLOBALS["lang"]['Info'] = 'Info';

$GLOBALS["lang"]['Informational'] = 'Informations';

$GLOBALS["lang"]['initial_size'] = 'Initial storlek';

$GLOBALS["lang"]['Initial Size'] = 'Initial storlek';

$GLOBALS["lang"]['inode'] = 'Inode';

$GLOBALS["lang"]['Inode'] = 'Inode';

$GLOBALS["lang"]['Input Type'] = 'Input Type';

$GLOBALS["lang"]['inputs'] = 'Ingångar';

$GLOBALS["lang"]['Inputs'] = 'Ingångar';

$GLOBALS["lang"]['Insane'] = 'Insane';

$GLOBALS["lang"]['Insert example data and discover all that Open-AudIT can tell you.'] = 'infoga exempeldata och upptäck allt som Open-AudIT kan berätta för dig.';

$GLOBALS["lang"]['Insert your Purchased license Key'] = 'Sätt in din Köpt licens Nyckeln';

$GLOBALS["lang"]['install'] = 'Installera';

$GLOBALS["lang"]['Install'] = 'Installera';

$GLOBALS["lang"]['install_date'] = 'Installera datum';

$GLOBALS["lang"]['Install Date'] = 'Installera datum';

$GLOBALS["lang"]['install_directory'] = 'Installera Directory';

$GLOBALS["lang"]['Install Directory'] = 'Installera Directory';

$GLOBALS["lang"]['Install OpenScap if required'] = 'Installera OpenScap om det behövs';

$GLOBALS["lang"]['install_source'] = 'Installera källa';

$GLOBALS["lang"]['Install Source'] = 'Installera källa';

$GLOBALS["lang"]['installed_by'] = 'Installerad av';

$GLOBALS["lang"]['Installed By'] = 'Installerad av';

$GLOBALS["lang"]['installed_on'] = 'Installerad på';

$GLOBALS["lang"]['Installed On'] = 'Installerad på';

$GLOBALS["lang"]['Installing on Linux'] = 'Installera på Linux';

$GLOBALS["lang"]['Installing on MacOS'] = 'Installera på MacOS';

$GLOBALS["lang"]['Installing on Windows'] = 'Installera på Windows';

$GLOBALS["lang"]['instance'] = 'Instans';

$GLOBALS["lang"]['Instance'] = 'Instans';

$GLOBALS["lang"]['instance_ident'] = 'Instance Ident';

$GLOBALS["lang"]['Instance Ident'] = 'Instance Ident';

$GLOBALS["lang"]['instance_options'] = 'Instance Options';

$GLOBALS["lang"]['Instance Options'] = 'Instance Options';

$GLOBALS["lang"]['instance_provider'] = 'Instance Provider';

$GLOBALS["lang"]['Instance Provider'] = 'Instance Provider';

$GLOBALS["lang"]['instance_reservation_ident'] = 'Instance Reservation Ident';

$GLOBALS["lang"]['Instance Reservation Ident'] = 'Instance Reservation Ident';

$GLOBALS["lang"]['instance_state'] = 'Instance State';

$GLOBALS["lang"]['Instance State'] = 'Instance State';

$GLOBALS["lang"]['instance_tags'] = 'Instance Tags';

$GLOBALS["lang"]['Instance Tags'] = 'Instance Tags';

$GLOBALS["lang"]['instance_type'] = 'Instanstyp';

$GLOBALS["lang"]['Instance Type'] = 'Instanstyp';

$GLOBALS["lang"]['Integer'] = 'Integer';

$GLOBALS["lang"]['Integration'] = 'Integration';

$GLOBALS["lang"]['integrations'] = 'Integrationer';

$GLOBALS["lang"]['Integrations'] = 'Integrationer';

$GLOBALS["lang"]['integrations_id'] = 'Integrations ID';

$GLOBALS["lang"]['Integrations ID'] = 'Integrations ID';

$GLOBALS["lang"]['integrations_log'] = 'Integrations Log';

$GLOBALS["lang"]['Integrations Log'] = 'Integrations Log';

$GLOBALS["lang"]['interface'] = 'Interface';

$GLOBALS["lang"]['Interface'] = 'Interface';

$GLOBALS["lang"]['interface_id'] = 'Interface ID';

$GLOBALS["lang"]['Interface ID'] = 'Interface ID';

$GLOBALS["lang"]['interface_type'] = 'Interface Type';

$GLOBALS["lang"]['Interface Type'] = 'Interface Type';

$GLOBALS["lang"]['Internal'] = 'Interna';

$GLOBALS["lang"]['Internal Field Name'] = 'Internt fältnamn';

$GLOBALS["lang"]['Internal ID'] = 'Internt ID';

$GLOBALS["lang"]['Internal JSON array of valid access tokens for this user.'] = 'Interna JSON samling av giltiga åtkomsttokens för denna användare.';

$GLOBALS["lang"]['Introduction'] = 'Introduktion';

$GLOBALS["lang"]['invoice'] = 'Faktura';

$GLOBALS["lang"]['Invoice'] = 'Faktura';

$GLOBALS["lang"]['invoice_id'] = 'Faktura ID';

$GLOBALS["lang"]['Invoice ID'] = 'Faktura ID';

$GLOBALS["lang"]['invoice_item'] = 'Faktura objekt';

$GLOBALS["lang"]['Invoice Item'] = 'Faktura objekt';

$GLOBALS["lang"]['ios_version'] = 'Ios Version';

$GLOBALS["lang"]['Ios Version'] = 'Ios Version';

$GLOBALS["lang"]['ip_address_external_a'] = 'Ip Adress External A';

$GLOBALS["lang"]['Ip Address External A'] = 'Ip Adress External A';

$GLOBALS["lang"]['ip_address_external_b'] = 'Ip Adress External B';

$GLOBALS["lang"]['Ip Address External B'] = 'Ip Adress External B';

$GLOBALS["lang"]['ip_address_internal_a'] = 'Ip Adress Internal A';

$GLOBALS["lang"]['Ip Address Internal A'] = 'Ip Adress Internal A';

$GLOBALS["lang"]['ip_address_internal_b'] = 'Ip Adress Internal B';

$GLOBALS["lang"]['Ip Address Internal B'] = 'Ip Adress Internal B';

$GLOBALS["lang"]['ip_all_count'] = 'Ip All Count';

$GLOBALS["lang"]['Ip All Count'] = 'Ip All Count';

$GLOBALS["lang"]['ip_audited_count'] = 'Ip Audited Count';

$GLOBALS["lang"]['Ip Audited Count'] = 'Ip Audited Count';

$GLOBALS["lang"]['ip_discovered_count'] = 'Ip upptäckt greve';

$GLOBALS["lang"]['Ip Discovered Count'] = 'Ip upptäckt greve';

$GLOBALS["lang"]['ip_enabled'] = 'Ip Enabled';

$GLOBALS["lang"]['Ip Enabled'] = 'Ip Enabled';

$GLOBALS["lang"]['ip_responding_count'] = 'Ip Responding Count';

$GLOBALS["lang"]['Ip Responding Count'] = 'Ip Responding Count';

$GLOBALS["lang"]['ip_scanned_count'] = 'Ip Scanned Count';

$GLOBALS["lang"]['Ip Scanned Count'] = 'Ip Scanned Count';

$GLOBALS["lang"]['Iran'] = 'Iran Iran Iran';

$GLOBALS["lang"]['Iraq'] = 'Irak Irak';

$GLOBALS["lang"]['Ireland'] = 'Irland';

$GLOBALS["lang"]['Is FRU'] = 'Är FRU';

$GLOBALS["lang"]['is_fru'] = 'Är Fru';

$GLOBALS["lang"]['Is Fru'] = 'Är Fru';

$GLOBALS["lang"]['Is the NMIS server local (on this Open-AudIT server) or remote?'] = 'Är NMIS-servern lokal (på denna Open-AudIT-server) eller fjärrkontroll?';

$GLOBALS["lang"]['Is this account active? If set to <code>n</code>, the user cannot logon.'] = 'Är detta konto aktivt? Om du är inställd på <code>n</code>Användaren kan inte logga in.';

$GLOBALS["lang"]['Is this query restricted to licensed customers.'] = 'Är denna fråga begränsad till licensierade kunder.';

$GLOBALS["lang"]['Is this task enabled (y/n).'] = 'Är denna uppgift aktiverad (y/n).';

$GLOBALS["lang"]['Isle of Man'] = 'Ön om människan';

$GLOBALS["lang"]['Israel'] = 'Israel Israel Israel Israel';

$GLOBALS["lang"]['Issue'] = 'Problem';

$GLOBALS["lang"]['issuer'] = 'Issuer';

$GLOBALS["lang"]['Issuer'] = 'Issuer';

$GLOBALS["lang"]['issuer_name'] = 'Utgivare namn';

$GLOBALS["lang"]['Issuer Name'] = 'Utgivare namn';

$GLOBALS["lang"]['Issues'] = 'Frågor';

$GLOBALS["lang"]['Italy'] = 'Italien Italien';

$GLOBALS["lang"]['Items not in Baseline'] = 'Artiklar som inte finns i Baseline';

$GLOBALS["lang"]['JSON'] = 'JSON';

$GLOBALS["lang"]['JSON to Import'] = 'JSON importerar';

$GLOBALS["lang"]['Jamaica'] = 'Jamaica';

$GLOBALS["lang"]['January'] = 'januari januari';

$GLOBALS["lang"]['Japan'] = 'Japanska Japan';

$GLOBALS["lang"]['Jersey'] = 'Jersey';

$GLOBALS["lang"]['Jordan'] = 'Jordan Jordan Jordan Jordan';

$GLOBALS["lang"]['July'] = 'juli juli';

$GLOBALS["lang"]['June'] = 'juni';

$GLOBALS["lang"]['Kazakhstan'] = 'Kazakstan';

$GLOBALS["lang"]['Kenya'] = 'Kenya';

$GLOBALS["lang"]['kernel_version'] = 'Kernel Version';

$GLOBALS["lang"]['Kernel Version'] = 'Kernel Version';

$GLOBALS["lang"]['Key'] = 'Nyckeln';

$GLOBALS["lang"]['Key Password (optional)'] = 'Nyckellösenord (valfritt)';

$GLOBALS["lang"]['keys'] = 'Nycklar';

$GLOBALS["lang"]['Keys'] = 'Nycklar';

$GLOBALS["lang"]['Kiribati'] = 'Kiribati';

$GLOBALS["lang"]['Korea'] = 'Korea';

$GLOBALS["lang"]['Kuwait'] = 'Kuwait';

$GLOBALS["lang"]['Kyrgyz Republic'] = 'Kirgizistan';

$GLOBALS["lang"]['lang'] = 'Lang';

$GLOBALS["lang"]['Lang'] = 'Lang';

$GLOBALS["lang"]['language'] = 'Språkspråk';

$GLOBALS["lang"]['Language'] = 'Språkspråk';

$GLOBALS["lang"]['Lao'] = 'Lao';

$GLOBALS["lang"]['last_changed'] = 'Sista ändrade';

$GLOBALS["lang"]['Last Changed'] = 'Sista ändrade';

$GLOBALS["lang"]['last_finished'] = 'Förra avslutad';

$GLOBALS["lang"]['Last Finished'] = 'Förra avslutad';

$GLOBALS["lang"]['last_logon'] = 'Sista Logon';

$GLOBALS["lang"]['Last Logon'] = 'Sista Logon';

$GLOBALS["lang"]['Last Name'] = 'efternamn';

$GLOBALS["lang"]['last_os_update'] = 'Last Os Update';

$GLOBALS["lang"]['Last Os Update'] = 'Last Os Update';

$GLOBALS["lang"]['last_result'] = 'Sista resultat';

$GLOBALS["lang"]['Last Result'] = 'Sista resultat';

$GLOBALS["lang"]['last_run'] = 'Sista körningen';

$GLOBALS["lang"]['Last Run'] = 'Sista körningen';

$GLOBALS["lang"]['last_seen'] = 'Sista Seen';

$GLOBALS["lang"]['Last Seen'] = 'Sista Seen';

$GLOBALS["lang"]['last_seen_by'] = 'Sista Seen Genom';

$GLOBALS["lang"]['Last Seen By'] = 'Sista Seen Genom';

$GLOBALS["lang"]['last_user'] = 'Sista användaren';

$GLOBALS["lang"]['Last User'] = 'Sista användaren';

$GLOBALS["lang"]['lastModified'] = 'LastModified';

$GLOBALS["lang"]['LastModified'] = 'LastModified';

$GLOBALS["lang"]['latitude'] = 'Latitud';

$GLOBALS["lang"]['Latitude'] = 'Latitud';

$GLOBALS["lang"]['Latvia'] = 'Lettland';

$GLOBALS["lang"]['Layout'] = 'Layout';

$GLOBALS["lang"]['ldap'] = 'Ldap';

$GLOBALS["lang"]['Ldap'] = 'Ldap';

$GLOBALS["lang"]['ldap_base_dn'] = 'Ldap Base Dn';

$GLOBALS["lang"]['Ldap Base Dn'] = 'Ldap Base Dn';

$GLOBALS["lang"]['ldap_dn_account'] = 'Ldap Dn-konto';

$GLOBALS["lang"]['Ldap Dn Account'] = 'Ldap Dn-konto';

$GLOBALS["lang"]['ldap_dn_password'] = 'Ldap Dn lösenord';

$GLOBALS["lang"]['Ldap Dn Password'] = 'Ldap Dn lösenord';

$GLOBALS["lang"]['Learn About'] = 'Lär dig om';

$GLOBALS["lang"]['Learn More'] = 'Lär dig mer';

$GLOBALS["lang"]['lease_expiry_date'] = 'Lämna utgångsdatum';

$GLOBALS["lang"]['Lease Expiry Date'] = 'Lämna utgångsdatum';

$GLOBALS["lang"]['Lebanon'] = 'Libanon';

$GLOBALS["lang"]['legal_requirements'] = 'Juridiska krav';

$GLOBALS["lang"]['Legal Requirements'] = 'Juridiska krav';

$GLOBALS["lang"]['Lesotho'] = 'Lesotho';

$GLOBALS["lang"]['Less Than'] = 'Mindre än';

$GLOBALS["lang"]['Less Than or Equals'] = 'Mindre än eller lika';

$GLOBALS["lang"]['level'] = 'Nivå';

$GLOBALS["lang"]['Level'] = 'Nivå';

$GLOBALS["lang"]['Level of privileges needed to exploit (None, Low, High).'] = 'Nivå av privilegier som behövs för att utnyttja (ingen, låg, hög).';

$GLOBALS["lang"]['Liberia'] = 'Liberia';

$GLOBALS["lang"]['Libyan Arab Jamahiriya'] = 'Libyens arabiska jamahiriya';

$GLOBALS["lang"]['License'] = 'Licens';

$GLOBALS["lang"]['License Key'] = 'Licens nyckel';

$GLOBALS["lang"]['License Required'] = 'Licens krävs';

$GLOBALS["lang"]['licenses'] = 'Licenser';

$GLOBALS["lang"]['Licenses'] = 'Licenser';

$GLOBALS["lang"]['Liechtenstein'] = 'Liechtenstein';

$GLOBALS["lang"]['Like'] = 'som liknar';

$GLOBALS["lang"]['limit'] = 'Begränsning';

$GLOBALS["lang"]['Limit'] = 'Begränsning';

$GLOBALS["lang"]['Limit the query to the first X items.'] = 'Begränsa frågan till de första X-objekten.';

$GLOBALS["lang"]['Limited to 100 rows.'] = 'Begränsad till 100 rader.';

$GLOBALS["lang"]['line_amount'] = 'Line Amount';

$GLOBALS["lang"]['Line Amount'] = 'Line Amount';

$GLOBALS["lang"]['Line Graph'] = 'Line Graph';

$GLOBALS["lang"]['line_number_a'] = 'Linjenummer ett';

$GLOBALS["lang"]['Line Number A'] = 'Linjenummer ett';

$GLOBALS["lang"]['line_number_b'] = 'Linjenummer B';

$GLOBALS["lang"]['Line Number B'] = 'Linjenummer B';

$GLOBALS["lang"]['line_text'] = 'Line Text';

$GLOBALS["lang"]['Line Text'] = 'Line Text';

$GLOBALS["lang"]['link'] = 'Länk';

$GLOBALS["lang"]['Link'] = 'Länk';

$GLOBALS["lang"]['Link (Advanced)'] = 'Länk (Avancerad)';

$GLOBALS["lang"]['Linked Files'] = 'Länkade filer';

$GLOBALS["lang"]['links'] = 'Länkar';

$GLOBALS["lang"]['Links'] = 'Länkar';

$GLOBALS["lang"]['Links this discovery to the associated cloud (if required). Links to <code>clouds.id</code>.'] = 'Länkar denna upptäckt till det associerade molnet (om så krävs). Länkar till <code>clouds.id</code>.';

$GLOBALS["lang"]['Links to <code>discovery_scan_options.id</code>.'] = 'Länkar till <code>discovery_scan_options.id</code>.';

$GLOBALS["lang"]['Links to <code>standards.id</code>'] = 'Länkar till <code>standards.id</code>';

$GLOBALS["lang"]['Links to <standards_policies.id</code>'] = 'Länkar till <standards_policies.id< code=""></standards_policies.id<>';

$GLOBALS["lang"]['Linux'] = 'Linux';

$GLOBALS["lang"]['List'] = 'Lista List';

$GLOBALS["lang"]['list_table_format'] = 'Lista tabellformat';

$GLOBALS["lang"]['List Table Format'] = 'Lista tabellformat';

$GLOBALS["lang"]['Lithuania'] = 'Litauen';

$GLOBALS["lang"]['Load Balancing'] = 'Load Balancing';

$GLOBALS["lang"]['Local'] = 'Lokal';

$GLOBALS["lang"]['Local Area Network'] = 'Lokalt område nätverk';

$GLOBALS["lang"]['local_port'] = 'Lokal hamn';

$GLOBALS["lang"]['Local Port'] = 'Lokal hamn';

$GLOBALS["lang"]['Localhost'] = 'Localhost';

$GLOBALS["lang"]['Localisation'] = 'Lokalisering';

$GLOBALS["lang"]['Location'] = 'Plats';

$GLOBALS["lang"]['Location A'] = 'Plats A';

$GLOBALS["lang"]['Location B'] = 'Plats B';

$GLOBALS["lang"]['location_id'] = 'Plats ID';

$GLOBALS["lang"]['Location ID'] = 'Plats ID';

$GLOBALS["lang"]['location_id_a'] = 'Plats ID A';

$GLOBALS["lang"]['Location ID A'] = 'Plats ID A';

$GLOBALS["lang"]['location_id_b'] = 'Plats ID B';

$GLOBALS["lang"]['Location ID B'] = 'Plats ID B';

$GLOBALS["lang"]['location_latitude'] = 'Plats Latitude';

$GLOBALS["lang"]['Location Latitude'] = 'Plats Latitude';

$GLOBALS["lang"]['location_level'] = 'Platsnivå';

$GLOBALS["lang"]['Location Level'] = 'Platsnivå';

$GLOBALS["lang"]['location_longitude'] = 'Läge Longitude';

$GLOBALS["lang"]['Location Longitude'] = 'Läge Longitude';

$GLOBALS["lang"]['location_rack'] = 'Plats Rack';

$GLOBALS["lang"]['Location Rack'] = 'Plats Rack';

$GLOBALS["lang"]['location_rack_position'] = 'Plats Rack Position';

$GLOBALS["lang"]['Location Rack Position'] = 'Plats Rack Position';

$GLOBALS["lang"]['location_rack_size'] = 'Plats Rack Storlek';

$GLOBALS["lang"]['Location Rack Size'] = 'Plats Rack Storlek';

$GLOBALS["lang"]['location_room'] = 'Platsrum';

$GLOBALS["lang"]['Location Room'] = 'Platsrum';

$GLOBALS["lang"]['location_suite'] = 'Plats Suite';

$GLOBALS["lang"]['Location Suite'] = 'Plats Suite';

$GLOBALS["lang"]['locations'] = 'Platser';

$GLOBALS["lang"]['Locations'] = 'Platser';

$GLOBALS["lang"]['Locations in this'] = 'Platser i detta';

$GLOBALS["lang"]['log'] = 'Logga in';

$GLOBALS["lang"]['Log'] = 'Logga in';

$GLOBALS["lang"]['log_format'] = 'Log Format';

$GLOBALS["lang"]['Log Format'] = 'Log Format';

$GLOBALS["lang"]['log_path'] = 'Log Path';

$GLOBALS["lang"]['Log Path'] = 'Log Path';

$GLOBALS["lang"]['log_rotation'] = 'Log Rotation';

$GLOBALS["lang"]['Log Rotation'] = 'Log Rotation';

$GLOBALS["lang"]['log_status'] = 'Log Status';

$GLOBALS["lang"]['Log Status'] = 'Log Status';

$GLOBALS["lang"]['Logical Cores '] = 'Logiska Cores ';

$GLOBALS["lang"]['logical_count'] = 'Logisk greve';

$GLOBALS["lang"]['Logical Count'] = 'Logisk greve';

$GLOBALS["lang"]['Logout'] = 'Logout';

$GLOBALS["lang"]['Logs'] = 'Loggar';

$GLOBALS["lang"]['longitude'] = 'Längd';

$GLOBALS["lang"]['Longitude'] = 'Längd';

$GLOBALS["lang"]['low'] = 'Låg';

$GLOBALS["lang"]['Low'] = 'Låg';

$GLOBALS["lang"]['Lower Case'] = 'Lägre fall';

$GLOBALS["lang"]['Luxembourg'] = 'Luxemburg';

$GLOBALS["lang"]['MAC Address'] = 'MAC-adress';

$GLOBALS["lang"]['MAC Manufacturer'] = 'MAC Tillverkare';

$GLOBALS["lang"]['mac'] = 'Mac Mac Mac Mac Mac';

$GLOBALS["lang"]['Mac'] = 'Mac Mac Mac Mac Mac';

$GLOBALS["lang"]['Mac Address'] = 'Mac-adress';

$GLOBALS["lang"]['MacOS'] = 'MacOS';

$GLOBALS["lang"]['Macao'] = 'Macao';

$GLOBALS["lang"]['Macedonia'] = 'Makedonien';

$GLOBALS["lang"]['Madagascar'] = 'Madagaskar';

$GLOBALS["lang"]['maintenance_expires'] = 'Underhållsutgångar';

$GLOBALS["lang"]['Maintenance Expires'] = 'Underhållsutgångar';

$GLOBALS["lang"]['Make My Default Dashboard'] = 'Gör min standard Dashboard';

$GLOBALS["lang"]['Make this install a Collector'] = 'Gör detta installera en Collector';

$GLOBALS["lang"]['Malawi'] = 'Malawi';

$GLOBALS["lang"]['Malaysia'] = 'Malaysia';

$GLOBALS["lang"]['Maldives'] = 'Maldiverna';

$GLOBALS["lang"]['Mali'] = 'Mali Mali';

$GLOBALS["lang"]['Malta'] = 'Malta';

$GLOBALS["lang"]['Manage'] = 'Hantera';

$GLOBALS["lang"]['Manage Licenses'] = 'Hantera licenser';

$GLOBALS["lang"]['Manage in NMIS'] = 'Hantera i NMIS';

$GLOBALS["lang"]['Managed'] = 'Managed';

$GLOBALS["lang"]['managed_by'] = 'Hanterad av';

$GLOBALS["lang"]['Managed By'] = 'Hanterad av';

$GLOBALS["lang"]['Manual Input'] = 'Manuell input';

$GLOBALS["lang"]['Manually set by user, defaults to Production.'] = 'Manuellt ställd av användaren, standarder för produktion.';

$GLOBALS["lang"]['Manually set by user.'] = 'Manuellt ställd av användaren.';

$GLOBALS["lang"]['manufacture_date'] = 'Tillverkningsdatum';

$GLOBALS["lang"]['Manufacture Date'] = 'Tillverkningsdatum';

$GLOBALS["lang"]['manufacturer'] = 'Tillverkare';

$GLOBALS["lang"]['Manufacturer'] = 'Tillverkare';

$GLOBALS["lang"]['manufacturer_code'] = 'Tillverkarkod';

$GLOBALS["lang"]['Manufacturer Code'] = 'Tillverkarkod';

$GLOBALS["lang"]['Map'] = 'Karta';

$GLOBALS["lang"]['maps'] = 'Kartor';

$GLOBALS["lang"]['Maps'] = 'Kartor';

$GLOBALS["lang"]['March'] = 'mars mars';

$GLOBALS["lang"]['Marshall Islands'] = 'Marshallöarna';

$GLOBALS["lang"]['Martinique'] = 'Martinique';

$GLOBALS["lang"]['mask'] = 'Mask';

$GLOBALS["lang"]['Mask'] = 'Mask';

$GLOBALS["lang"]['Match'] = 'Match';

$GLOBALS["lang"]['match_options'] = 'Matchalternativ';

$GLOBALS["lang"]['Match Options'] = 'Matchalternativ';

$GLOBALS["lang"]['match_string'] = 'Match String';

$GLOBALS["lang"]['Match String'] = 'Match String';

$GLOBALS["lang"]['Matching Attribute'] = 'Matchning Attribute';

$GLOBALS["lang"]['maturity_level'] = 'Maturity Level';

$GLOBALS["lang"]['Maturity Level'] = 'Maturity Level';

$GLOBALS["lang"]['maturity_score'] = 'Maturity Score';

$GLOBALS["lang"]['Maturity Score'] = 'Maturity Score';

$GLOBALS["lang"]['Mauritania'] = 'Mauretanien';

$GLOBALS["lang"]['Mauritius'] = 'Mauritius';

$GLOBALS["lang"]['max_file_size'] = 'Max Filstorlek';

$GLOBALS["lang"]['Max File Size'] = 'Max Filstorlek';

$GLOBALS["lang"]['Max Length'] = 'Max längd';

$GLOBALS["lang"]['max_size'] = 'Max storlek';

$GLOBALS["lang"]['Max Size'] = 'Max storlek';

$GLOBALS["lang"]['May'] = 'maj maj';

$GLOBALS["lang"]['Mayotte'] = 'Mayotte';

$GLOBALS["lang"]['Measures the likelihood of the vulnerability being attacked, and is based on the current state of exploit techniques, exploit code availability, or active, “in-the-wild” exploitation.'] = 'Mäter sannolikheten för att sårbarheten attackeras, och bygger på det nuvarande tillståndet för utnyttjande tekniker, utnyttja kod tillgänglighet eller aktiv, "i-vild" exploatering.';

$GLOBALS["lang"]['medium'] = 'Medium';

$GLOBALS["lang"]['Medium'] = 'Medium';

$GLOBALS["lang"]['members'] = 'Medlemmar';

$GLOBALS["lang"]['Members'] = 'Medlemmar';

$GLOBALS["lang"]['memory'] = 'Minne';

$GLOBALS["lang"]['Memory'] = 'Minne';

$GLOBALS["lang"]['memory_count'] = 'Memory Count';

$GLOBALS["lang"]['Memory Count'] = 'Memory Count';

$GLOBALS["lang"]['memory_slot_count'] = 'Memory Slot Count';

$GLOBALS["lang"]['Memory Slot Count'] = 'Memory Slot Count';

$GLOBALS["lang"]['menu_category'] = 'Meny Kategori';

$GLOBALS["lang"]['Menu Category'] = 'Meny Kategori';

$GLOBALS["lang"]['menu_display'] = 'Menu Display';

$GLOBALS["lang"]['Menu Display'] = 'Menu Display';

$GLOBALS["lang"]['message'] = 'Meddelande';

$GLOBALS["lang"]['Message'] = 'Meddelande';

$GLOBALS["lang"]['meta_last_changed'] = 'Meta senast ändrad';

$GLOBALS["lang"]['Meta Last Changed'] = 'Meta senast ändrad';

$GLOBALS["lang"]['metric'] = 'Metric';

$GLOBALS["lang"]['Metric'] = 'Metric';

$GLOBALS["lang"]['Metropolitan Area Network'] = 'Metropolitan Area Network';

$GLOBALS["lang"]['Mexico'] = 'Mexiko';

$GLOBALS["lang"]['Micronesia'] = 'Mikronesien';

$GLOBALS["lang"]['Microsoft Azure Fields'] = 'Microsoft Azure-fält';

$GLOBALS["lang"]['microtime'] = 'Microtime';

$GLOBALS["lang"]['Microtime'] = 'Microtime';

$GLOBALS["lang"]['minute'] = 'Minut';

$GLOBALS["lang"]['Minute'] = 'Minut';

$GLOBALS["lang"]['Minutes Since last Audit are Greater than'] = 'Minuter sedan senaste revisionen är större än';

$GLOBALS["lang"]['model'] = 'Modellmodell';

$GLOBALS["lang"]['Model'] = 'Modellmodell';

$GLOBALS["lang"]['model_family'] = 'Modell Familj';

$GLOBALS["lang"]['Model Family'] = 'Modell Familj';

$GLOBALS["lang"]['module'] = 'Modul';

$GLOBALS["lang"]['Module'] = 'Modul';

$GLOBALS["lang"]['module_index'] = 'Modulindex';

$GLOBALS["lang"]['Module Index'] = 'Modulindex';

$GLOBALS["lang"]['Modules'] = 'Moduler';

$GLOBALS["lang"]['Moldova'] = 'Moldavien';

$GLOBALS["lang"]['Monaco'] = 'Monaco';

$GLOBALS["lang"]['Monday'] = 'Måndag Måndag';

$GLOBALS["lang"]['Mongolia'] = 'Mongoliet';

$GLOBALS["lang"]['monitor'] = 'Monitor';

$GLOBALS["lang"]['Monitor'] = 'Monitor';

$GLOBALS["lang"]['Montenegro'] = 'Montenegro';

$GLOBALS["lang"]['month'] = 'Månad';

$GLOBALS["lang"]['Month'] = 'Månad';

$GLOBALS["lang"]['Montserrat'] = 'Montserrat';

$GLOBALS["lang"]['Morocco'] = 'Marocko';

$GLOBALS["lang"]['motherboard'] = 'Motherboard';

$GLOBALS["lang"]['Motherboard'] = 'Motherboard';

$GLOBALS["lang"]['mount_point'] = 'Mount Point';

$GLOBALS["lang"]['Mount Point'] = 'Mount Point';

$GLOBALS["lang"]['mount_type'] = 'Mount Type';

$GLOBALS["lang"]['Mount Type'] = 'Mount Type';

$GLOBALS["lang"]['Mozambique'] = 'Moçambique';

$GLOBALS["lang"]['Must Respond to Ping'] = 'Måste svara på Ping';

$GLOBALS["lang"]['Myanmar'] = 'Myanmar';

$GLOBALS["lang"]['N+1'] = 'N+1';

$GLOBALS["lang"]['N+M'] = 'N+M';

$GLOBALS["lang"]['N-to-1'] = 'N-till-1';

$GLOBALS["lang"]['N-to-N'] = 'N-to-N';

$GLOBALS["lang"]['NMIS Business Service'] = 'NMIS Business Service';

$GLOBALS["lang"]['NMIS Customer'] = 'NMIS Kund';

$GLOBALS["lang"]['NMIS Device Options'] = 'NMIS-enhetsalternativ';

$GLOBALS["lang"]['NMIS Device Selection'] = 'NMIS Device Selection';

$GLOBALS["lang"]['NMIS Field Name'] = 'NMIS fältnamn';

$GLOBALS["lang"]['NMIS Field Type'] = 'NMIS fälttyp';

$GLOBALS["lang"]['NMIS Group'] = 'NMIS Group';

$GLOBALS["lang"]['NMIS Poller'] = 'NMIS Poller';

$GLOBALS["lang"]['NMIS Role'] = 'NMIS Rollen';

$GLOBALS["lang"]['NOTE - You can prevent plain text credentials being displayed below by setting the configuration item for <code>decrypt_credentials</code> to <code>n</code>.'] = 'Obs! - Du kan förhindra att vanliga textuppgifter visas nedan genom att ange konfigurationsobjektet för <code>decrypt_credentials</code> att <code>n</code>.';

$GLOBALS["lang"]['name'] = 'Namnnamn';

$GLOBALS["lang"]['Name'] = 'Namnnamn';

$GLOBALS["lang"]['Namibia'] = 'Namibia';

$GLOBALS["lang"]['Nauru'] = 'Nauru';

$GLOBALS["lang"]['Nepal'] = 'Nepal';

$GLOBALS["lang"]['net_index'] = 'Net Index';

$GLOBALS["lang"]['Net Index'] = 'Net Index';

$GLOBALS["lang"]['Netherlands Antilles'] = 'Nederländska Antillerna';

$GLOBALS["lang"]['Netherlands the'] = 'Nederländerna';

$GLOBALS["lang"]['netmask'] = 'Netmask';

$GLOBALS["lang"]['Netmask'] = 'Netmask';

$GLOBALS["lang"]['netstat'] = 'Netstat';

$GLOBALS["lang"]['Netstat'] = 'Netstat';

$GLOBALS["lang"]['Netstat Policies'] = 'Netstat Policies';

$GLOBALS["lang"]['Network'] = 'Nätverk';

$GLOBALS["lang"]['network_address'] = 'Network Address';

$GLOBALS["lang"]['Network Address'] = 'Network Address';

$GLOBALS["lang"]['network_domain'] = 'Nätverk domän';

$GLOBALS["lang"]['Network Domain'] = 'Nätverk domän';

$GLOBALS["lang"]['Network Types'] = 'Network Typer';

$GLOBALS["lang"]['networks'] = 'Nätverk';

$GLOBALS["lang"]['Networks'] = 'Nätverk';

$GLOBALS["lang"]['Networks Generated By'] = 'Nätverk som genereras av';

$GLOBALS["lang"]['Networks using a CIDR Mask of'] = 'Nätverk med hjälp av en CIDR mask av';

$GLOBALS["lang"]['New Building Name'] = 'Nytt byggnamn';

$GLOBALS["lang"]['New Caledonia'] = 'Nya Kaledonien';

$GLOBALS["lang"]['New Floor Name'] = 'Nytt golvnamn';

$GLOBALS["lang"]['New Room Name'] = 'Nytt rumsnamn';

$GLOBALS["lang"]['New Row Name'] = 'Ny Row Name';

$GLOBALS["lang"]['New Zealand'] = 'Nya Zeeland';

$GLOBALS["lang"]['News'] = 'Nyhet';

$GLOBALS["lang"]['next_hop'] = 'Nästa Hop';

$GLOBALS["lang"]['Next Hop'] = 'Nästa Hop';

$GLOBALS["lang"]['next_run'] = 'Nästa Run';

$GLOBALS["lang"]['Next Run'] = 'Nästa Run';

$GLOBALS["lang"]['Nicaragua'] = 'Nicaragua';

$GLOBALS["lang"]['Niger'] = 'Niger';

$GLOBALS["lang"]['Nigeria'] = 'Nigeria';

$GLOBALS["lang"]['Niue'] = 'Niue';

$GLOBALS["lang"]['nmap'] = 'Nmap';

$GLOBALS["lang"]['Nmap'] = 'Nmap';

$GLOBALS["lang"]['Nmap Port Scanning Responses'] = 'Nmap Port Scanning svar';

$GLOBALS["lang"]['nmap_tcp_ports'] = 'Nmap Tcp Ports';

$GLOBALS["lang"]['Nmap Tcp Ports'] = 'Nmap Tcp Ports';

$GLOBALS["lang"]['nmap_udp_ports'] = 'Nmap Udp Ports';

$GLOBALS["lang"]['Nmap Udp Ports'] = 'Nmap Udp Ports';

$GLOBALS["lang"]['nmis_business_service'] = 'Nmis Business Service';

$GLOBALS["lang"]['Nmis Business Service'] = 'Nmis Business Service';

$GLOBALS["lang"]['nmis_customer'] = 'Nmis Kund';

$GLOBALS["lang"]['Nmis Customer'] = 'Nmis Kund';

$GLOBALS["lang"]['nmis_group'] = 'Nmis Group';

$GLOBALS["lang"]['Nmis Group'] = 'Nmis Group';

$GLOBALS["lang"]['nmis_manage'] = 'Nmis Manage';

$GLOBALS["lang"]['Nmis Manage'] = 'Nmis Manage';

$GLOBALS["lang"]['nmis_name'] = 'Nmis Namn';

$GLOBALS["lang"]['Nmis Name'] = 'Nmis Namn';

$GLOBALS["lang"]['nmis_notes'] = 'Nmis Notes';

$GLOBALS["lang"]['Nmis Notes'] = 'Nmis Notes';

$GLOBALS["lang"]['nmis_poller'] = 'Nmis Poller';

$GLOBALS["lang"]['Nmis Poller'] = 'Nmis Poller';

$GLOBALS["lang"]['nmis_poller_uuid'] = 'Nmis Poller Uuid';

$GLOBALS["lang"]['Nmis Poller Uuid'] = 'Nmis Poller Uuid';

$GLOBALS["lang"]['nmis_role'] = 'Nmis Role';

$GLOBALS["lang"]['Nmis Role'] = 'Nmis Role';

$GLOBALS["lang"]['No'] = 'Ingen';

$GLOBALS["lang"]['No Devices Returned'] = 'Inga enheter returnerade';

$GLOBALS["lang"]['No Google Maps API Key present, you will not be able to display the map.'] = 'Ingen Google Maps API Nyckelpresent kan du inte visa kartan.';

$GLOBALS["lang"]['No License for Professional or Enterprise'] = 'Ingen licens för professionell eller företag';

$GLOBALS["lang"]['No Results'] = 'Inga resultat';

$GLOBALS["lang"]['No data in License Key'] = 'Inga data i License Key';

$GLOBALS["lang"]['No database upgrade required at this time.'] = 'Ingen databasuppgradering krävs vid denna tidpunkt.';

$GLOBALS["lang"]['Node'] = 'Nod';

$GLOBALS["lang"]['None'] = 'Ingen';

$GLOBALS["lang"]['Norfolk Island'] = 'Norfolk Island';

$GLOBALS["lang"]['Normal'] = 'Normal';

$GLOBALS["lang"]['Northern Mariana Islands'] = 'Norra Marianaöarna';

$GLOBALS["lang"]['Norway'] = 'Norge Norge';

$GLOBALS["lang"]['Not Applicable'] = 'Inte tillämplig';

$GLOBALS["lang"]['Not Checked'] = 'Inte kontrollerad';

$GLOBALS["lang"]['Not Equals'] = 'Inte lika';

$GLOBALS["lang"]['Not In'] = 'Inte i';

$GLOBALS["lang"]['Not Like'] = 'Inte som';

$GLOBALS["lang"]['Not Set'] = 'Inte Set';

$GLOBALS["lang"]['Not normally used. If set, this requires the device to have an open port (as per Scan Options) to be considered responding. A MAC address, arp response or ping response is not considered sufficient to be considered responding. Useful if a router or firewall between the Open-AudIT server and target IP is responding to port scans on the IPs behalf.'] = 'Inte normalt används. Om det är inställt kräver det att enheten har en öppen port (enligt skanningsalternativ) som ska beaktas. En MAC-adress, arp-svar eller ping-svar anses inte tillräckligt för att anses svara. Användbart om en router eller brandvägg mellan Open-AudIT-servern och mål IP svarar på portskanningar på IP: s räkning.';

$GLOBALS["lang"]['Note'] = 'Note';

$GLOBALS["lang"]['Note - Selecting a parent will automatically provide access to its children (although it wont be shown here).'] = 'Observera att välja en förälder automatiskt ger tillgång till sina barn (även om det inte visas här).';

$GLOBALS["lang"]['Notes'] = 'Anteckningar';

$GLOBALS["lang"]['notes'] = 'Anteckningar';

$GLOBALS["lang"]['Notice'] = 'Notice';

$GLOBALS["lang"]['notin'] = 'Notin';

$GLOBALS["lang"]['Notin'] = 'Notin';

$GLOBALS["lang"]['November'] = 'november';

$GLOBALS["lang"]['nvd_json'] = 'Nvd Json';

$GLOBALS["lang"]['Nvd Json'] = 'Nvd Json';

$GLOBALS["lang"]['ORDER BY'] = 'ORDER BY';

$GLOBALS["lang"]['OS'] = 'OS';

$GLOBALS["lang"]['OS Families'] = 'OS familjer';

$GLOBALS["lang"]['OS Family'] = 'OS Familj';

$GLOBALS["lang"]['OS Group'] = 'OS Group';

$GLOBALS["lang"]['oae_manage'] = 'Oae Manage';

$GLOBALS["lang"]['Oae Manage'] = 'Oae Manage';

$GLOBALS["lang"]['object_ident'] = 'Objekt Ident';

$GLOBALS["lang"]['Object Ident'] = 'Objekt Ident';

$GLOBALS["lang"]['October'] = 'oktober oktober';

$GLOBALS["lang"]['Oman'] = 'Oman';

$GLOBALS["lang"]['omk_uuid'] = 'Omk Uuid';

$GLOBALS["lang"]['Omk Uuid'] = 'Omk Uuid';

$GLOBALS["lang"]['On'] = 'På';

$GLOBALS["lang"]['One of <code>3x2</code>, <code>4x2</code>, <code>4x3</code> or <code>4x4</code>.'] = 'En av <code>3x2</code>, <code>4x2</code>, <code>4x3</code> eller <code>4x4</code>.';

$GLOBALS["lang"]['One of Campus Area Network, Cloud Network, Enterprise Private Network, Home Area Network, Local Area Network, Metropolitan Area Network, Passive Optical Local Area Network, Personal Area Network, Storage-Area Network, System-Area Network, Virtual Private Network, Wide Area Network, Wireless Local Area Network.'] = 'Ett av Campus Area Network, Cloud Network, Enterprise Private Network, Home Area Network, Local Area Network, Metropolitan Area Network, Passive Optical Local Area Network, Personal Area Network, Storage-Area Network, System-Area Network, Virtual Private Network, Wide Area Network, Wireless Local Area Network.';

$GLOBALS["lang"]['One of Development, Disaster Recovery, Evaluation, Pre-Production, Production, Testing, Training, User Acceptance Testing'] = 'En av utveckling, katastrofåterställning, utvärdering, förproduktion, produktion, testning, träning, användaracceptanstestning';

$GLOBALS["lang"]['One of allocated, delegated, planning, reserved, unallocated, unknown, unmanaged. Defaults to allocated.'] = 'En av delegerade, delegerade, planerade, reserverade, oallokerade, okända, ohanterade. Standarder till allokerade.';

$GLOBALS["lang"]['One of either <code>active directory</code> or <code>openldap</code>.'] = 'En av dem <code>active directory</code> eller <code>openldap</code>.';

$GLOBALS["lang"]['One of: antivirus, backup, firewall, approved, banned, ignored or other.'] = 'Ett av: antivirus, backup, brandvägg, godkänt, förbjudet, ignorerat eller annat.';

$GLOBALS["lang"]['Online Documentation'] = 'Online dokumentation';

$GLOBALS["lang"]['Open-AudIT'] = 'Open-AudIT';

$GLOBALS["lang"]['Open-AudIT Community'] = 'Open-AudIT gemenskap';

$GLOBALS["lang"]['Open-AudIT Device Selection'] = 'Open-AudIT Device Selection';

$GLOBALS["lang"]['Open-AudIT Enterprise'] = 'Open AudIT Enterprise';

$GLOBALS["lang"]['Open-AudIT Enterprise. High-scale flexible discovery and audit solution for large networks. All the features of Professional plus: Baselines, File Auditing, Cloud Discovery, Rack Management, Configurable Role Based Access Control including Active Directory and LDAP.'] = 'Open AudIT Enterprise. Högskalig flexibel upptäckt och revisionslösning för stora nätverk. Alla funktioner i Professional plus: Baselines, File Auditing, Cloud Discovery, Rack Management, Configurable Role Based Access Control inklusive Active Directory och LDAP.';

$GLOBALS["lang"]['Open-AudIT Field Name'] = 'Open-AudIT fältnamn';

$GLOBALS["lang"]['Open-AudIT Licenses'] = 'Open-AudIT licenser';

$GLOBALS["lang"]['Open-AudIT Options'] = 'Open-AudIT Options';

$GLOBALS["lang"]['Open-AudIT Professional'] = 'Open-AudIT Professional';

$GLOBALS["lang"]['Open-AudIT Professional. The world\\'] = 'Open-AudIT Professional. Världen';

$GLOBALS["lang"]['Open-AudIT and Nmap'] = 'Open-AudIT och Nmap';

$GLOBALS["lang"]['OpenScap is Installed'] = 'OpenScap är installerat';

$GLOBALS["lang"]['openldap_user_dn'] = 'Openldap Användare Dn';

$GLOBALS["lang"]['Openldap User Dn'] = 'Openldap Användare Dn';

$GLOBALS["lang"]['openldap_user_membership_attribute'] = 'Openldap Användarmedlemskap Attribute';

$GLOBALS["lang"]['Openldap User Membership Attribute'] = 'Openldap Användarmedlemskap Attribute';

$GLOBALS["lang"]['open|filtered'] = 'Öppen |filtrerad';

$GLOBALS["lang"]['Open|filtered'] = 'Öppen |filtrerad';

$GLOBALS["lang"]['Operating System'] = 'Operativsystem';

$GLOBALS["lang"]['Operating System Family Contains'] = 'Operativsystemfamiljen innehåller';

$GLOBALS["lang"]['Operating Systems'] = 'Operativsystem';

$GLOBALS["lang"]['optical'] = 'Optisk';

$GLOBALS["lang"]['Optical'] = 'Optisk';

$GLOBALS["lang"]['Optimized'] = 'Optimerad';

$GLOBALS["lang"]['Optional version as audited by Open-AudIT. Use the percent sign % as a wildcard.'] = 'Valfri version som granskas av Open-AudIT. Använd procent tecknet % som wildcard.';

$GLOBALS["lang"]['options'] = 'Alternativ';

$GLOBALS["lang"]['Options'] = 'Alternativ';

$GLOBALS["lang"]['Or select from the below fields.'] = 'Eller välj från nedanstående fält.';

$GLOBALS["lang"]['org_descendants'] = 'Org ättlingar';

$GLOBALS["lang"]['Org Descendants'] = 'Org ättlingar';

$GLOBALS["lang"]['org_id'] = 'Org ID';

$GLOBALS["lang"]['Org ID'] = 'Org ID';

$GLOBALS["lang"]['Organisation'] = 'Organisation';

$GLOBALS["lang"]['organisation'] = 'Organisation';

$GLOBALS["lang"]['Organisation Descendants'] = 'Organisationens ättlingar';

$GLOBALS["lang"]['Organisations'] = 'Organisationer';

$GLOBALS["lang"]['orgs'] = 'Orgs';

$GLOBALS["lang"]['Orgs'] = 'Orgs';

$GLOBALS["lang"]['Orgs Name'] = 'Orgs namn';

$GLOBALS["lang"]['orientation'] = 'Orientering';

$GLOBALS["lang"]['Orientation'] = 'Orientering';

$GLOBALS["lang"]['os'] = 'Oss';

$GLOBALS["lang"]['Os'] = 'Oss';

$GLOBALS["lang"]['os_arch'] = 'Os Arch';

$GLOBALS["lang"]['Os Arch'] = 'Os Arch';

$GLOBALS["lang"]['os_bit'] = 'Os Bit';

$GLOBALS["lang"]['Os Bit'] = 'Os Bit';

$GLOBALS["lang"]['os_cpe'] = 'Os Cpe';

$GLOBALS["lang"]['Os Cpe'] = 'Os Cpe';

$GLOBALS["lang"]['os_display_version'] = 'Os Display Version';

$GLOBALS["lang"]['Os Display Version'] = 'Os Display Version';

$GLOBALS["lang"]['os_family'] = 'Os familj';

$GLOBALS["lang"]['Os Family'] = 'Os familj';

$GLOBALS["lang"]['os_group'] = 'Os Group';

$GLOBALS["lang"]['Os Group'] = 'Os Group';

$GLOBALS["lang"]['os_installation_date'] = 'Os installationsdatum';

$GLOBALS["lang"]['Os Installation Date'] = 'Os installationsdatum';

$GLOBALS["lang"]['os_licence_expiry'] = 'Licensutgång';

$GLOBALS["lang"]['Os Licence Expiry'] = 'Licensutgång';

$GLOBALS["lang"]['os_license'] = 'Os licens';

$GLOBALS["lang"]['Os License'] = 'Os licens';

$GLOBALS["lang"]['os_license_code'] = 'Os licenskod';

$GLOBALS["lang"]['Os License Code'] = 'Os licenskod';

$GLOBALS["lang"]['os_license_mode'] = 'Licensläge';

$GLOBALS["lang"]['Os License Mode'] = 'Licensläge';

$GLOBALS["lang"]['os_license_type'] = 'Os licenstyp';

$GLOBALS["lang"]['Os License Type'] = 'Os licenstyp';

$GLOBALS["lang"]['os_name'] = 'Os namn';

$GLOBALS["lang"]['Os Name'] = 'Os namn';

$GLOBALS["lang"]['os_version'] = 'Os Version';

$GLOBALS["lang"]['Os Version'] = 'Os Version';

$GLOBALS["lang"]['Other'] = 'Andra';

$GLOBALS["lang"]['Others'] = 'Andra';

$GLOBALS["lang"]['Our timeout for a SSH response'] = 'Vår timeout för ett SSH-svar';

$GLOBALS["lang"]['Our timeout for a WMI response'] = 'Vår timeout för ett WMI-svar';

$GLOBALS["lang"]['Our timeout for an SNMP response'] = 'Vår timeout för ett SNMP-svar';

$GLOBALS["lang"]['Our timeout for an audit script response'] = 'Vår timeout för en revision skript svar';

$GLOBALS["lang"]['output'] = 'Output';

$GLOBALS["lang"]['Output'] = 'Output';

$GLOBALS["lang"]['outputs'] = 'Utgångar';

$GLOBALS["lang"]['Outputs'] = 'Utgångar';

$GLOBALS["lang"]['Overall severity score (0–10).'] = 'Övergripande svårighetsgrad (0-10).';

$GLOBALS["lang"]['overwrite'] = 'Överskrivning';

$GLOBALS["lang"]['Overwrite'] = 'Överskrivning';

$GLOBALS["lang"]['owner'] = 'Ägare';

$GLOBALS["lang"]['Owner'] = 'Ägare';

$GLOBALS["lang"]['PHP'] = 'PHP';

$GLOBALS["lang"]['POD'] = 'POD';

$GLOBALS["lang"]['Package'] = 'Paketpaket';

$GLOBALS["lang"]['packages'] = 'Paket';

$GLOBALS["lang"]['Packages'] = 'Paket';

$GLOBALS["lang"]['pagefile'] = 'Pagefile';

$GLOBALS["lang"]['Pagefile'] = 'Pagefile';

$GLOBALS["lang"]['Pakistan'] = 'Pakistan Pakistan';

$GLOBALS["lang"]['Palau'] = 'Palau';

$GLOBALS["lang"]['Palestinian Territory'] = 'Palestinska territoriet';

$GLOBALS["lang"]['Panama'] = 'Panama';

$GLOBALS["lang"]['Papua New Guinea'] = 'Papua Nya Guinea';

$GLOBALS["lang"]['Paraguay'] = 'Paraguay';

$GLOBALS["lang"]['Paranoid'] = 'Paranoid';

$GLOBALS["lang"]['Parent'] = 'Förälder';

$GLOBALS["lang"]['parent_id'] = 'Föräldra-ID';

$GLOBALS["lang"]['Parent ID'] = 'Föräldra-ID';

$GLOBALS["lang"]['parent_name'] = 'Föräldranamn';

$GLOBALS["lang"]['Parent Name'] = 'Föräldranamn';

$GLOBALS["lang"]['part_number'] = 'Delnummer';

$GLOBALS["lang"]['Part Number'] = 'Delnummer';

$GLOBALS["lang"]['part_of_domain'] = 'Del av domänen';

$GLOBALS["lang"]['Part Of Domain'] = 'Del av domänen';

$GLOBALS["lang"]['Partition'] = 'Partition';

$GLOBALS["lang"]['partition_count'] = 'Partition Count';

$GLOBALS["lang"]['Partition Count'] = 'Partition Count';

$GLOBALS["lang"]['partition_disk_index'] = 'Partition Disk Index';

$GLOBALS["lang"]['Partition Disk Index'] = 'Partition Disk Index';

$GLOBALS["lang"]['Pass'] = 'Passar';

$GLOBALS["lang"]['Passed'] = 'Passerad';

$GLOBALS["lang"]['Passive Optical Local Area Network'] = 'Passiva optiska lokala nätverk';

$GLOBALS["lang"]['Password'] = 'Lösenord';

$GLOBALS["lang"]['password'] = 'Lösenord';

$GLOBALS["lang"]['password_changeable'] = 'Lösenord Föränderligt';

$GLOBALS["lang"]['Password Changeable'] = 'Lösenord Föränderligt';

$GLOBALS["lang"]['password_disabled'] = 'Password Disabled';

$GLOBALS["lang"]['Password Disabled'] = 'Password Disabled';

$GLOBALS["lang"]['password_expires'] = 'Lösenordet går ut';

$GLOBALS["lang"]['Password Expires'] = 'Lösenordet går ut';

$GLOBALS["lang"]['password_last_changed'] = 'Lösenord senast ändrat';

$GLOBALS["lang"]['Password Last Changed'] = 'Lösenord senast ändrat';

$GLOBALS["lang"]['password_required'] = 'Lösenord som krävs';

$GLOBALS["lang"]['Password Required'] = 'Lösenord som krävs';

$GLOBALS["lang"]['patch_panel'] = 'Patch Panel';

$GLOBALS["lang"]['Patch Panel'] = 'Patch Panel';

$GLOBALS["lang"]['patch_panel_port'] = 'Patch Panel Port';

$GLOBALS["lang"]['Patch Panel Port'] = 'Patch Panel Port';

$GLOBALS["lang"]['path'] = 'Vägen';

$GLOBALS["lang"]['Path'] = 'Vägen';

$GLOBALS["lang"]['Performance'] = 'Prestanda';

$GLOBALS["lang"]['Performed'] = 'Performerad';

$GLOBALS["lang"]['permission'] = 'Tillstånd';

$GLOBALS["lang"]['Permission'] = 'Tillstånd';

$GLOBALS["lang"]['permissions'] = 'Tillstånd';

$GLOBALS["lang"]['Permissions'] = 'Tillstånd';

$GLOBALS["lang"]['Personal Area Network'] = 'Personal Area Network';

$GLOBALS["lang"]['Peru'] = 'Peru';

$GLOBALS["lang"]['Philippines'] = 'Filippinerna';

$GLOBALS["lang"]['phone'] = 'Telefon';

$GLOBALS["lang"]['Phone'] = 'Telefon';

$GLOBALS["lang"]['Physical CPUs'] = 'Fysiska CPU';

$GLOBALS["lang"]['physical_count'] = 'Fysisk räkna';

$GLOBALS["lang"]['Physical Count'] = 'Fysisk räkna';

$GLOBALS["lang"]['physical_depth'] = 'Fysisk djup';

$GLOBALS["lang"]['Physical Depth'] = 'Fysisk djup';

$GLOBALS["lang"]['physical_height'] = 'Fysisk höjd';

$GLOBALS["lang"]['Physical Height'] = 'Fysisk höjd';

$GLOBALS["lang"]['physical_width'] = 'Fysisk bredd';

$GLOBALS["lang"]['Physical Width'] = 'Fysisk bredd';

$GLOBALS["lang"]['picture'] = 'Bild';

$GLOBALS["lang"]['Picture'] = 'Bild';

$GLOBALS["lang"]['pid'] = 'Pid';

$GLOBALS["lang"]['Pid'] = 'Pid';

$GLOBALS["lang"]['Pie Chart'] = 'Pie Chart';

$GLOBALS["lang"]['ping'] = 'Ping';

$GLOBALS["lang"]['Ping'] = 'Ping';

$GLOBALS["lang"]['Pitcairn Islands'] = 'Pitcairnöarna';

$GLOBALS["lang"]['placement'] = 'Placering';

$GLOBALS["lang"]['Placement'] = 'Placering';

$GLOBALS["lang"]['Please have an Open-AudIT administrator logon and upgrade the database.'] = 'Vänligen ha en Open-AudIT-administratörslogg och uppgradera databasen.';

$GLOBALS["lang"]['Please note that the select box will override the text input box.'] = 'Observera att den valda rutan kommer att åsidosätta textinmatningsrutan.';

$GLOBALS["lang"]['Please set using'] = 'Vänligen ange att använda';

$GLOBALS["lang"]['pod'] = 'Pod';

$GLOBALS["lang"]['Pod'] = 'Pod';

$GLOBALS["lang"]['Poland'] = 'Polen';

$GLOBALS["lang"]['Policies'] = 'Politik';

$GLOBALS["lang"]['Policies have exceptions.'] = 'Politiken har undantag.';

$GLOBALS["lang"]['policy'] = 'Policypolitik';

$GLOBALS["lang"]['Policy'] = 'Policypolitik';

$GLOBALS["lang"]['policy_id'] = 'Policy ID';

$GLOBALS["lang"]['Policy ID'] = 'Policy ID';

$GLOBALS["lang"]['Policy Result'] = 'Policyresultat';

$GLOBALS["lang"]['Policy Results'] = 'Policyresultat';

$GLOBALS["lang"]['Polite'] = 'Polit';

$GLOBALS["lang"]['Populated by audit.'] = 'Befolkad av revision.';

$GLOBALS["lang"]['Populated by discovery and audit.'] = 'Befolkad av upptäckt och revision.';

$GLOBALS["lang"]['Populated dynamically.'] = 'Befolkat dynamiskt.';

$GLOBALS["lang"]['Populated from DNS.'] = 'Befolkad från DNS.';

$GLOBALS["lang"]['Populated from SNMP discovery.'] = 'Befolkad från SNMP upptäckt.';

$GLOBALS["lang"]['Populated from device audits.'] = 'Befolkad från enhetsrevisioner.';

$GLOBALS["lang"]['Populated from hostname.'] = 'Befolkad från värdnamn.';

$GLOBALS["lang"]['Populated from machine-id on Linux.'] = 'Befolkad från maskin-id på Linux.';

$GLOBALS["lang"]['Populated from the IP for the default route or the IP detected in discovery.'] = 'Befolkad från IP för standardrutten eller IP som upptäcktes i upptäckten.';

$GLOBALS["lang"]['Populated from the hostname command.'] = 'Befolkad från kommandot värdnamn.';

$GLOBALS["lang"]['Populated with additional data from the external system, in a JSON representation.'] = 'Befolkad med ytterligare data från det externa systemet, i en JSON-representation.';

$GLOBALS["lang"]['port'] = 'Port Port Port Port';

$GLOBALS["lang"]['Port'] = 'Port Port Port Port';

$GLOBALS["lang"]['port_name'] = 'Portnamn';

$GLOBALS["lang"]['Port Name'] = 'Portnamn';

$GLOBALS["lang"]['port_number'] = 'Portnummer';

$GLOBALS["lang"]['Port Number'] = 'Portnummer';

$GLOBALS["lang"]['ports_in_order'] = 'Portar i ordning';

$GLOBALS["lang"]['Ports In Order'] = 'Portar i ordning';

$GLOBALS["lang"]['ports_stop_after'] = 'Hamnar slutar efter';

$GLOBALS["lang"]['Ports Stop After'] = 'Hamnar slutar efter';

$GLOBALS["lang"]['Portugal, Portuguese Republic'] = 'Portugal, portugisiska republiken';

$GLOBALS["lang"]['position'] = 'Position';

$GLOBALS["lang"]['Position'] = 'Position';

$GLOBALS["lang"]['postcode'] = 'Postkod';

$GLOBALS["lang"]['Postcode'] = 'Postkod';

$GLOBALS["lang"]['power_circuit'] = 'Kraftkrets';

$GLOBALS["lang"]['Power Circuit'] = 'Kraftkrets';

$GLOBALS["lang"]['power_sockets'] = 'Power Sockets';

$GLOBALS["lang"]['Power Sockets'] = 'Power Sockets';

$GLOBALS["lang"]['Predictable'] = 'Förutsägbar';

$GLOBALS["lang"]['Preferences'] = 'Föreställningar';

$GLOBALS["lang"]['Prerequisites'] = 'Förutsättningar';

$GLOBALS["lang"]['Prerequisites and Tests'] = 'Förutsättningar och tester';

$GLOBALS["lang"]['present'] = 'Nuvarande';

$GLOBALS["lang"]['Present'] = 'Nuvarande';

$GLOBALS["lang"]['previous_value'] = 'Tidigare värde';

$GLOBALS["lang"]['Previous Value'] = 'Tidigare värde';

$GLOBALS["lang"]['primary'] = 'Primär';

$GLOBALS["lang"]['Primary'] = 'Primär';

$GLOBALS["lang"]['Primary Key'] = 'Primär nyckel';

$GLOBALS["lang"]['print_queue'] = 'Print Queue';

$GLOBALS["lang"]['Print Queue'] = 'Print Queue';

$GLOBALS["lang"]['printer_color'] = 'Printerfärg';

$GLOBALS["lang"]['Printer Color'] = 'Printerfärg';

$GLOBALS["lang"]['printer_duplex'] = 'Skrivare Duplex';

$GLOBALS["lang"]['Printer Duplex'] = 'Skrivare Duplex';

$GLOBALS["lang"]['printer_port_name'] = 'Printer Port Namn';

$GLOBALS["lang"]['Printer Port Name'] = 'Printer Port Namn';

$GLOBALS["lang"]['printer_shared'] = 'Printer delad';

$GLOBALS["lang"]['Printer Shared'] = 'Printer delad';

$GLOBALS["lang"]['printer_shared_name'] = 'Skrivare delat namn';

$GLOBALS["lang"]['Printer Shared Name'] = 'Skrivare delat namn';

$GLOBALS["lang"]['priority'] = 'Prioritet';

$GLOBALS["lang"]['Priority'] = 'Prioritet';

$GLOBALS["lang"]['Privacy Passphrase'] = 'Privacy Passphrase';

$GLOBALS["lang"]['privileges_required'] = 'Privilegier som krävs';

$GLOBALS["lang"]['Privileges Required'] = 'Privilegier som krävs';

$GLOBALS["lang"]['processor'] = 'Processor';

$GLOBALS["lang"]['Processor'] = 'Processor';

$GLOBALS["lang"]['processor_count'] = 'Processor Count';

$GLOBALS["lang"]['Processor Count'] = 'Processor Count';

$GLOBALS["lang"]['processor_slot_count'] = 'Processor Slot räkna';

$GLOBALS["lang"]['Processor Slot Count'] = 'Processor Slot räkna';

$GLOBALS["lang"]['processor_type'] = 'Processortyp';

$GLOBALS["lang"]['Processor Type'] = 'Processortyp';

$GLOBALS["lang"]['Processors'] = 'Processorer';

$GLOBALS["lang"]['product_name'] = 'Produktnamn';

$GLOBALS["lang"]['Product Name'] = 'Produktnamn';

$GLOBALS["lang"]['Product Name Match from CPE: '] = 'Produktnamn Match från CPE: ';

$GLOBALS["lang"]['products'] = 'Produkter';

$GLOBALS["lang"]['Products'] = 'Produkter';

$GLOBALS["lang"]['profile'] = 'Profil';

$GLOBALS["lang"]['Profile'] = 'Profil';

$GLOBALS["lang"]['program'] = 'Programprogram';

$GLOBALS["lang"]['Program'] = 'Programprogram';

$GLOBALS["lang"]['protocol'] = 'Protokoll';

$GLOBALS["lang"]['Protocol'] = 'Protokoll';

$GLOBALS["lang"]['provider'] = 'Leverantör';

$GLOBALS["lang"]['Provider'] = 'Leverantör';

$GLOBALS["lang"]['published'] = 'Publicerad';

$GLOBALS["lang"]['Published'] = 'Publicerad';

$GLOBALS["lang"]['published_date'] = 'Publicerad datum';

$GLOBALS["lang"]['Published Date'] = 'Publicerad datum';

$GLOBALS["lang"]['publisher'] = 'Förlag';

$GLOBALS["lang"]['Publisher'] = 'Förlag';

$GLOBALS["lang"]['Puerto Rico'] = 'Puerto Rico';

$GLOBALS["lang"]['Purchase'] = 'Köp';

$GLOBALS["lang"]['purchase_amount'] = 'Köpa pengar';

$GLOBALS["lang"]['Purchase Amount'] = 'Köpa pengar';

$GLOBALS["lang"]['purchase_cost_center'] = 'Köp Cost Center';

$GLOBALS["lang"]['Purchase Cost Center'] = 'Köp Cost Center';

$GLOBALS["lang"]['purchase_count'] = 'Köp greve';

$GLOBALS["lang"]['Purchase Count'] = 'Köp greve';

$GLOBALS["lang"]['purchase_date'] = 'Köpdatum';

$GLOBALS["lang"]['Purchase Date'] = 'Köpdatum';

$GLOBALS["lang"]['purchase_invoice'] = 'Köp faktura';

$GLOBALS["lang"]['Purchase Invoice'] = 'Köp faktura';

$GLOBALS["lang"]['purchase_order'] = 'Köp Order';

$GLOBALS["lang"]['Purchase Order'] = 'Köp Order';

$GLOBALS["lang"]['purchase_order_number'] = 'Köp ordernummer';

$GLOBALS["lang"]['Purchase Order Number'] = 'Köp ordernummer';

$GLOBALS["lang"]['purchase_service_contract_number'] = 'Köp serviceavtalsnummer';

$GLOBALS["lang"]['Purchase Service Contract Number'] = 'Köp serviceavtalsnummer';

$GLOBALS["lang"]['purchase_vendor'] = 'Köp leverantör';

$GLOBALS["lang"]['Purchase Vendor'] = 'Köp leverantör';

$GLOBALS["lang"]['purpose'] = 'syfte';

$GLOBALS["lang"]['Purpose'] = 'syfte';

$GLOBALS["lang"]['Qatar'] = 'Qatar';

$GLOBALS["lang"]['queries'] = 'Queries';

$GLOBALS["lang"]['Queries'] = 'Queries';

$GLOBALS["lang"]['Query'] = 'Query';

$GLOBALS["lang"]['queue'] = 'Queue';

$GLOBALS["lang"]['Queue'] = 'Queue';

$GLOBALS["lang"]['Queue Limit'] = 'Queue Limit';

$GLOBALS["lang"]['Queued Device Audits'] = 'Queued Device Audits';

$GLOBALS["lang"]['Queued IP Scans'] = 'Queued IP Scans';

$GLOBALS["lang"]['Queued Items'] = 'Queued objekt';

$GLOBALS["lang"]['RU Start'] = 'RU Start';

$GLOBALS["lang"]['RX Bitrate'] = 'RX Bitrate';

$GLOBALS["lang"]['RX Freq'] = 'RX Freq';

$GLOBALS["lang"]['RX Level'] = 'RX Level';

$GLOBALS["lang"]['RX Power'] = 'RX Power';

$GLOBALS["lang"]['RX Profile'] = 'RX Profil';

$GLOBALS["lang"]['Rack'] = 'Rack';

$GLOBALS["lang"]['rack_devices'] = 'Rack Devices';

$GLOBALS["lang"]['Rack Devices'] = 'Rack Devices';

$GLOBALS["lang"]['rack_id'] = 'Rack ID';

$GLOBALS["lang"]['Rack ID'] = 'Rack ID';

$GLOBALS["lang"]['Racks'] = 'Racks';

$GLOBALS["lang"]['racks'] = 'Racks';

$GLOBALS["lang"]['radio'] = 'Radio Radio Radio';

$GLOBALS["lang"]['Radio'] = 'Radio Radio Radio';

$GLOBALS["lang"]['Radio MAC'] = 'Radio Mac';

$GLOBALS["lang"]['rationale'] = 'Rationale';

$GLOBALS["lang"]['Rationale'] = 'Rationale';

$GLOBALS["lang"]['raw'] = 'Raw';

$GLOBALS["lang"]['Raw'] = 'Raw';

$GLOBALS["lang"]['read'] = 'Läs mer';

$GLOBALS["lang"]['Read'] = 'Läs mer';

$GLOBALS["lang"]['Read our online documentation on the Open-AudIT Wiki.'] = 'Läs vår onlinedokumentation på Open-AudIT Wiki.';

$GLOBALS["lang"]['Red Query'] = 'Röda Query';

$GLOBALS["lang"]['Redirect URI'] = 'Redirect URI';

$GLOBALS["lang"]['redirect_uri'] = 'Omdirigera Uri';

$GLOBALS["lang"]['Redirect Uri'] = 'Omdirigera Uri';

$GLOBALS["lang"]['references'] = 'Referenser';

$GLOBALS["lang"]['References'] = 'Referenser';

$GLOBALS["lang"]['region'] = 'Region Region Region Region';

$GLOBALS["lang"]['Region'] = 'Region Region Region Region';

$GLOBALS["lang"]['registered_user'] = 'Registrerad användare';

$GLOBALS["lang"]['Registered User'] = 'Registrerad användare';

$GLOBALS["lang"]['rel'] = 'Rel';

$GLOBALS["lang"]['Rel'] = 'Rel';

$GLOBALS["lang"]['Release'] = 'Släpp';

$GLOBALS["lang"]['remediation'] = 'Remediation';

$GLOBALS["lang"]['Remediation'] = 'Remediation';

$GLOBALS["lang"]['Remote'] = 'Fjärrkontroll';

$GLOBALS["lang"]['remote_address'] = 'Fjärradress';

$GLOBALS["lang"]['Remote Address'] = 'Fjärradress';

$GLOBALS["lang"]['remote_port'] = 'Fjärrport';

$GLOBALS["lang"]['Remote Port'] = 'Fjärrport';

$GLOBALS["lang"]['Remove'] = 'Ta bort';

$GLOBALS["lang"]['Remove Exception'] = 'Ta bort undantag';

$GLOBALS["lang"]['Report'] = 'Rapport';

$GLOBALS["lang"]['Report on your devices, networks and more'] = 'Rapportera på dina enheter, nätverk och mer';

$GLOBALS["lang"]['reportable'] = 'Rapporterbar';

$GLOBALS["lang"]['Reportable'] = 'Rapporterbar';

$GLOBALS["lang"]['Reports'] = 'Rapporter';

$GLOBALS["lang"]['request'] = 'Begäran';

$GLOBALS["lang"]['Request'] = 'Begäran';

$GLOBALS["lang"]['Request a Specific CVE'] = 'Begär en specifik CVE';

$GLOBALS["lang"]['requested'] = 'Begäran';

$GLOBALS["lang"]['Requested'] = 'Begäran';

$GLOBALS["lang"]['require_port'] = 'Kräv Port';

$GLOBALS["lang"]['Require Port'] = 'Kräv Port';

$GLOBALS["lang"]['Require an Open Port'] = 'Kräver en öppen hamn';

$GLOBALS["lang"]['Required'] = 'Krav';

$GLOBALS["lang"]['Reset'] = 'Återställ';

$GLOBALS["lang"]['Reset All Data'] = 'Återställ alla data';

$GLOBALS["lang"]['Reset to Default'] = 'Återställ till standard';

$GLOBALS["lang"]['resource'] = 'Resurs';

$GLOBALS["lang"]['Resource'] = 'Resurs';

$GLOBALS["lang"]['Resource Name'] = 'Resursnamn';

$GLOBALS["lang"]['Resources'] = 'Resurser';

$GLOBALS["lang"]['response'] = 'Svar';

$GLOBALS["lang"]['Response'] = 'Svar';

$GLOBALS["lang"]['responsibility'] = 'Ansvar';

$GLOBALS["lang"]['Responsibility'] = 'Ansvar';

$GLOBALS["lang"]['Restore my Licenses'] = 'Återställ mina licenser';

$GLOBALS["lang"]['Restrict to Private'] = 'Begränsa till privat';

$GLOBALS["lang"]['Restrict to Subnet'] = 'Begränsa till Subnet';

$GLOBALS["lang"]['result'] = 'Resultat';

$GLOBALS["lang"]['Result'] = 'Resultat';

$GLOBALS["lang"]['Results'] = 'Resultat';

$GLOBALS["lang"]['retrieved'] = 'Hämtad';

$GLOBALS["lang"]['Retrieved'] = 'Hämtad';

$GLOBALS["lang"]['retrieved_ident'] = 'Hämtad identitet';

$GLOBALS["lang"]['Retrieved Ident'] = 'Hämtad identitet';

$GLOBALS["lang"]['retrieved_name'] = 'hämtat namn';

$GLOBALS["lang"]['Retrieved Name'] = 'hämtat namn';

$GLOBALS["lang"]['Retrieved from the device - Windows:Win32_ComputerSystemProduct, Linux:dmidecode, MacOS:system_profiler, ESXi:vim-cmd hostsvc/hostsummary, HP-UX:machinfo, Solaris:smbios, AIX:uname.'] = 'hämtad från enheten - Windows:Win32_ComputerSystemProduct, Linux:dmidecode, MacOS:system_profiler, ESXi:vim-cmd hostsvc/hostsummary, HP-UX:machinfo, Solaris:smbios, AIX:uname.';

$GLOBALS["lang"]['Reunion'] = 'Återförening';

$GLOBALS["lang"]['revision'] = 'Revision';

$GLOBALS["lang"]['Revision'] = 'Revision';

$GLOBALS["lang"]['risk_assesment_result'] = 'Riskbedömningsresultat';

$GLOBALS["lang"]['Risk Assesment Result'] = 'Riskbedömningsresultat';

$GLOBALS["lang"]['role'] = 'Rollen';

$GLOBALS["lang"]['Role'] = 'Rollen';

$GLOBALS["lang"]['roles'] = 'Roller';

$GLOBALS["lang"]['Roles'] = 'Roller';

$GLOBALS["lang"]['Romania'] = 'Rumänien';

$GLOBALS["lang"]['Room'] = 'Rum Room';

$GLOBALS["lang"]['route'] = 'Route';

$GLOBALS["lang"]['Route'] = 'Route';

$GLOBALS["lang"]['Row'] = 'Row';

$GLOBALS["lang"]['Row Count'] = 'Row Count';

$GLOBALS["lang"]['row_position'] = 'Row position';

$GLOBALS["lang"]['Row Position'] = 'Row position';

$GLOBALS["lang"]['Rows'] = 'Rows';

$GLOBALS["lang"]['ru_height'] = 'Ru Height';

$GLOBALS["lang"]['Ru Height'] = 'Ru Height';

$GLOBALS["lang"]['ru_start'] = 'Ru Starta';

$GLOBALS["lang"]['Ru Start'] = 'Ru Starta';

$GLOBALS["lang"]['rule_group'] = 'Rule Group';

$GLOBALS["lang"]['Rule Group'] = 'Rule Group';

$GLOBALS["lang"]['rules'] = 'Regler';

$GLOBALS["lang"]['Rules'] = 'Regler';

$GLOBALS["lang"]['Run Discovery'] = 'Kör upptäckt';

$GLOBALS["lang"]['Run Discovery on Devices'] = 'Kör upptäckt på enheter';

$GLOBALS["lang"]['Run a discovery and find out <b>Whats On Your Network?</b>'] = 'Kör en upptäckt och ta reda på <b>Vad är på ditt nätverk?</b>';

$GLOBALS["lang"]['Run this Command'] = 'Kör denna kommando';

$GLOBALS["lang"]['runas'] = 'Runas';

$GLOBALS["lang"]['Runas'] = 'Runas';

$GLOBALS["lang"]['Running Open-AudIT Apache Service Under Windows'] = 'Kör Open-AudIT Apache Service under Windows';

$GLOBALS["lang"]['Russian Federation'] = 'Ryska Federationen';

$GLOBALS["lang"]['Rwanda'] = 'Rwanda';

$GLOBALS["lang"]['rx_bitrate'] = 'Rx Bitrate';

$GLOBALS["lang"]['Rx Bitrate'] = 'Rx Bitrate';

$GLOBALS["lang"]['rx_freq'] = 'Rx Freq';

$GLOBALS["lang"]['Rx Freq'] = 'Rx Freq';

$GLOBALS["lang"]['rx_level'] = 'Rx nivå';

$GLOBALS["lang"]['Rx Level'] = 'Rx nivå';

$GLOBALS["lang"]['rx_power'] = 'Rx Power';

$GLOBALS["lang"]['Rx Power'] = 'Rx Power';

$GLOBALS["lang"]['rx_profile'] = 'Rx profil';

$GLOBALS["lang"]['Rx Profile'] = 'Rx profil';

$GLOBALS["lang"]['SELECT'] = 'Sälj';

$GLOBALS["lang"]['SID'] = 'SID';

$GLOBALS["lang"]['SM Version'] = 'SM Version';

$GLOBALS["lang"]['SNMP (v1 / v2)'] = 'SNMP (v1/v2)';

$GLOBALS["lang"]['SNMP Details'] = 'SNMP Detaljer';

$GLOBALS["lang"]['SNMP OID'] = 'SNMP OID';

$GLOBALS["lang"]['SNMP Version'] = 'SNMP version';

$GLOBALS["lang"]['SNMP v3'] = 'SNMP v3';

$GLOBALS["lang"]['SQL'] = 'SQL';

$GLOBALS["lang"]['SQL (Advanced)'] = 'SQL (Avancerad)';

$GLOBALS["lang"]['SQL Creation Statements'] = 'SQL Creation Statements';

$GLOBALS["lang"]['SSH'] = 'SSH';

$GLOBALS["lang"]['SSH Key'] = 'SSH Nyckeln';

$GLOBALS["lang"]['SW Revision'] = 'SW Revision';

$GLOBALS["lang"]['Saint Barthelemy'] = 'Saint Barthelemy';

$GLOBALS["lang"]['Saint Helena'] = 'Saint Helena';

$GLOBALS["lang"]['Saint Kitts and Nevis'] = 'Saint Kitts och Nevis';

$GLOBALS["lang"]['Saint Lucia'] = 'Saint Lucia';

$GLOBALS["lang"]['Saint Martin'] = 'Saint Martin';

$GLOBALS["lang"]['Saint Pierre and Miquelon'] = 'Saint Pierre och Miquelon';

$GLOBALS["lang"]['Saint Vincent and the Grenadines'] = 'Saint Vincent och Grenadinerna';

$GLOBALS["lang"]['Samoa'] = 'Samoa';

$GLOBALS["lang"]['san'] = 'Sankt Sankt Sankt Sankt';

$GLOBALS["lang"]['San'] = 'Sankt Sankt Sankt Sankt';

$GLOBALS["lang"]['San Marino'] = 'San Marino';

$GLOBALS["lang"]['Sao Tome and Principe'] = 'Sao Tome och Principe';

$GLOBALS["lang"]['Saturday'] = 'lördag';

$GLOBALS["lang"]['Saudi Arabia'] = 'Saudiarabien';

$GLOBALS["lang"]['Save as Default'] = 'Spara som standard';

$GLOBALS["lang"]['scaling'] = 'Scaling';

$GLOBALS["lang"]['Scaling'] = 'Scaling';

$GLOBALS["lang"]['scan_options'] = 'Skanna alternativ';

$GLOBALS["lang"]['Scan Options'] = 'Skanna alternativ';

$GLOBALS["lang"]['Scan Options ID'] = 'Skanna alternativ ID';

$GLOBALS["lang"]['Scan the Nmap top number of TCP ports.'] = 'Skanna Nmap toppnummer av TCP-portar.';

$GLOBALS["lang"]['Scan the Nmap top number of UDP ports.'] = 'Skanna Nmap toppnummer av UDP-portar.';

$GLOBALS["lang"]['schedule'] = 'Schema';

$GLOBALS["lang"]['Schedule'] = 'Schema';

$GLOBALS["lang"]['scope'] = 'Scope';

$GLOBALS["lang"]['Scope'] = 'Scope';

$GLOBALS["lang"]['script_timeout'] = 'Script Timeout';

$GLOBALS["lang"]['Script Timeout'] = 'Script Timeout';

$GLOBALS["lang"]['scripts'] = 'Skrifter';

$GLOBALS["lang"]['Scripts'] = 'Skrifter';

$GLOBALS["lang"]['scsi'] = 'Scsi';

$GLOBALS["lang"]['Scsi'] = 'Scsi';

$GLOBALS["lang"]['scsi_bus'] = 'Scsi Bus';

$GLOBALS["lang"]['Scsi Bus'] = 'Scsi Bus';

$GLOBALS["lang"]['scsi_logical_unit'] = 'Scsi logisk enhet';

$GLOBALS["lang"]['Scsi Logical Unit'] = 'Scsi logisk enhet';

$GLOBALS["lang"]['scsi_port'] = 'Scsi Port';

$GLOBALS["lang"]['Scsi Port'] = 'Scsi Port';

$GLOBALS["lang"]['Search'] = 'Sök efter Sök';

$GLOBALS["lang"]['Search For a Device'] = 'Sök efter en enhet';

$GLOBALS["lang"]['Search for Device'] = 'Sök efter Device';

$GLOBALS["lang"]['Searching Using DataTables'] = 'Söka Använda DataTables';

$GLOBALS["lang"]['secondary'] = 'sekundär';

$GLOBALS["lang"]['Secondary'] = 'sekundär';

$GLOBALS["lang"]['Secondary Text'] = 'Sekundär text';

$GLOBALS["lang"]['section'] = 'Avsnitt';

$GLOBALS["lang"]['Section'] = 'Avsnitt';

$GLOBALS["lang"]['secure'] = 'Säker';

$GLOBALS["lang"]['Secure'] = 'Säker';

$GLOBALS["lang"]['Security Name'] = 'Säkerhetsnamn';

$GLOBALS["lang"]['Security Status'] = 'Säkerhetsstatus';

$GLOBALS["lang"]['security_zone'] = 'Säkerhetszon';

$GLOBALS["lang"]['Security Zone'] = 'Säkerhetszon';

$GLOBALS["lang"]['seed_ip'] = 'Seed IP';

$GLOBALS["lang"]['Seed IP'] = 'Seed IP';

$GLOBALS["lang"]['seed_ping'] = 'Seed Ping';

$GLOBALS["lang"]['Seed Ping'] = 'Seed Ping';

$GLOBALS["lang"]['seed_restrict_to_private'] = 'Seed Restrict till privat';

$GLOBALS["lang"]['Seed Restrict To Private'] = 'Seed Restrict till privat';

$GLOBALS["lang"]['seed_restrict_to_subnet'] = 'Seed Restrict till Subnet';

$GLOBALS["lang"]['Seed Restrict To Subnet'] = 'Seed Restrict till Subnet';

$GLOBALS["lang"]['Select'] = 'Välj Välj';

$GLOBALS["lang"]['Select All'] = 'Välj alla';

$GLOBALS["lang"]['select_external_attribute'] = 'Välj externt attribut';

$GLOBALS["lang"]['Select External Attribute'] = 'Välj externt attribut';

$GLOBALS["lang"]['select_external_count'] = 'Välj extern räkning';

$GLOBALS["lang"]['Select External Count'] = 'Välj extern räkning';

$GLOBALS["lang"]['select_external_type'] = 'Välj extern Typ';

$GLOBALS["lang"]['Select External Type'] = 'Välj extern Typ';

$GLOBALS["lang"]['select_external_value'] = 'Välj extern Värde';

$GLOBALS["lang"]['Select External Value'] = 'Välj extern Värde';

$GLOBALS["lang"]['select_internal_attribute'] = 'Välj interna attribut';

$GLOBALS["lang"]['Select Internal Attribute'] = 'Välj interna attribut';

$GLOBALS["lang"]['select_internal_count'] = 'Välj Internal Count';

$GLOBALS["lang"]['Select Internal Count'] = 'Välj Internal Count';

$GLOBALS["lang"]['select_internal_type'] = 'Välj Internal Typ';

$GLOBALS["lang"]['Select Internal Type'] = 'Välj Internal Typ';

$GLOBALS["lang"]['select_internal_value'] = 'Välj Internal Värde';

$GLOBALS["lang"]['Select Internal Value'] = 'Välj Internal Värde';

$GLOBALS["lang"]['Select a Table'] = 'Välj en tabell';

$GLOBALS["lang"]['Senegal'] = 'Senegal';

$GLOBALS["lang"]['sensitivity'] = 'Känslighet';

$GLOBALS["lang"]['Sensitivity'] = 'Känslighet';

$GLOBALS["lang"]['September'] = 'September september';

$GLOBALS["lang"]['Serbia'] = 'Serbien';

$GLOBALS["lang"]['serial'] = 'Serial';

$GLOBALS["lang"]['Serial'] = 'Serial';

$GLOBALS["lang"]['serial_imei'] = 'Serial Imei';

$GLOBALS["lang"]['Serial Imei'] = 'Serial Imei';

$GLOBALS["lang"]['serial_sim'] = 'Serial Sim';

$GLOBALS["lang"]['Serial Sim'] = 'Serial Sim';

$GLOBALS["lang"]['series'] = 'Serie';

$GLOBALS["lang"]['Series'] = 'Serie';

$GLOBALS["lang"]['server'] = 'Server';

$GLOBALS["lang"]['Server'] = 'Server';

$GLOBALS["lang"]['server_id'] = 'Server ID';

$GLOBALS["lang"]['Server ID'] = 'Server ID';

$GLOBALS["lang"]['Server Is'] = 'Server är';

$GLOBALS["lang"]['server_item'] = 'Server Item';

$GLOBALS["lang"]['Server Item'] = 'Server Item';

$GLOBALS["lang"]['Server Status'] = 'Server Status';

$GLOBALS["lang"]['Servers'] = 'Servrar';

$GLOBALS["lang"]['service'] = 'Serviceservice';

$GLOBALS["lang"]['Service'] = 'Serviceservice';

$GLOBALS["lang"]['service_identifier'] = 'Service Identifier';

$GLOBALS["lang"]['Service Identifier'] = 'Service Identifier';

$GLOBALS["lang"]['service_level_a'] = 'Servicenivå A';

$GLOBALS["lang"]['Service Level A'] = 'Servicenivå A';

$GLOBALS["lang"]['service_level_b'] = 'Servicenivå B';

$GLOBALS["lang"]['Service Level B'] = 'Servicenivå B';

$GLOBALS["lang"]['service_network'] = 'Service Network';

$GLOBALS["lang"]['Service Network'] = 'Service Network';

$GLOBALS["lang"]['service_number'] = 'Servicenummer';

$GLOBALS["lang"]['Service Number'] = 'Servicenummer';

$GLOBALS["lang"]['service_pack'] = 'Service Pack';

$GLOBALS["lang"]['Service Pack'] = 'Service Pack';

$GLOBALS["lang"]['service_plan'] = 'Serviceplan';

$GLOBALS["lang"]['Service Plan'] = 'Serviceplan';

$GLOBALS["lang"]['service_provider'] = 'Serviceleverantör';

$GLOBALS["lang"]['Service Provider'] = 'Serviceleverantör';

$GLOBALS["lang"]['service_tag'] = 'Service Tag';

$GLOBALS["lang"]['Service Tag'] = 'Service Tag';

$GLOBALS["lang"]['service_type'] = 'Servicetyp';

$GLOBALS["lang"]['Service Type'] = 'Servicetyp';

$GLOBALS["lang"]['service_version'] = 'Service Version';

$GLOBALS["lang"]['Service Version'] = 'Service Version';

$GLOBALS["lang"]['Set'] = 'Set';

$GLOBALS["lang"]['set_by'] = 'Set by';

$GLOBALS["lang"]['Set By'] = 'Set by';

$GLOBALS["lang"]['Set the size (normal or compact) of the tables on the List screens.'] = 'Ange storleken (normal eller kompakt) på tabellerna på listskärmarna.';

$GLOBALS["lang"]['severity'] = 'Allvar';

$GLOBALS["lang"]['Severity'] = 'Allvar';

$GLOBALS["lang"]['severity_text'] = 'Svårighetstext';

$GLOBALS["lang"]['Severity Text'] = 'Svårighetstext';

$GLOBALS["lang"]['Severity is calculated from the <code>base_score</code> and can be one of: None, Low, Medium, High, Critical.'] = 'Svårighetsgrad beräknas från <code>base_score</code> och kan vara en av: Ingen, Låg, Medium, Hög, Kritisk.';

$GLOBALS["lang"]['Seychelles'] = 'Seychellerna';

$GLOBALS["lang"]['share'] = 'Dela';

$GLOBALS["lang"]['Share'] = 'Dela';

$GLOBALS["lang"]['Share Name'] = 'Dela namn';

$GLOBALS["lang"]['shared'] = 'Delad';

$GLOBALS["lang"]['Shared'] = 'Delad';

$GLOBALS["lang"]['shared_name'] = 'delat namn';

$GLOBALS["lang"]['Shared Name'] = 'delat namn';

$GLOBALS["lang"]['shell'] = 'Shell';

$GLOBALS["lang"]['Shell'] = 'Shell';

$GLOBALS["lang"]['Ship Date'] = 'Fartygsdatum';

$GLOBALS["lang"]['short'] = 'Kort kort';

$GLOBALS["lang"]['Short'] = 'Kort kort';

$GLOBALS["lang"]['Should I remove all non-current data from this device?'] = 'Ska jag ta bort alla icke-strömdata från den här enheten?';

$GLOBALS["lang"]['Should this file (or pattern) be used to exclude files from being reported. Normally, to audit files, this is set to <code>y</code>.'] = 'Om den här filen (eller mönster) används för att utesluta filer från att rapporteras. Normalt, för att granska filer, är detta inställt på att <code>y</code>.';

$GLOBALS["lang"]['Should this vendor be used when retrieving vulnerabilities from FirstWave.'] = 'Ska denna leverantör användas när du hämtar sårbarheter från FirstWave.';

$GLOBALS["lang"]['Should we add devices from the remote service, locally.'] = 'Om vi lägger till enheter från fjärrtjänsten, lokalt.';

$GLOBALS["lang"]['Should we apply this license to the selected Org as well as the Orgs children?'] = 'Ska vi tillämpa denna licens på den utvalda Org samt Orgs barn?';

$GLOBALS["lang"]['Should we consider a filtered port to be an open port - and therefore flag this IP as having a device attached?'] = 'Ska vi överväga att en filtrerad port ska vara en öppen port - och flagga därför denna IP som en enhet fäst?';

$GLOBALS["lang"]['Should we consider an open|filtered port to be an open port - and therefore flag this IP as having a device attached?'] = 'Ska vi överväga en öppen | filtrerad port för att vara en öppen port - och flagga därför denna IP som att ha en enhet bifogad?';

$GLOBALS["lang"]['Should we expose this group in the web interface.'] = 'Ska vi avslöja denna grupp i webbgränssnittet.';

$GLOBALS["lang"]['Should we expose this query in the list of reports under the Report menu in the web interface.'] = 'Skulle vi avslöja denna fråga i listan över rapporter under rapportmenyn i webbgränssnittet.';

$GLOBALS["lang"]['Should we expose this query in the list of reports under the Reports menu in the web interface.'] = 'Skulle vi avslöja denna fråga i listan över rapporter under menyn Rapporter i webbgränssnittet.';

$GLOBALS["lang"]['Should we install Open-Scap on the target machine.'] = 'Ska vi installera Open-Scap på målmaskinen.';

$GLOBALS["lang"]['Should we match a device based mac address even if its a known likely duplicate from VMware.'] = 'Om vi matchar en enhetsbaserad mac-adress även om det är en känd troligen dubblett från VMware.';

$GLOBALS["lang"]['Should we match a device based on its DNS fqdn.'] = 'Ska vi matcha en enhet baserad på dess DNS fqdn.';

$GLOBALS["lang"]['Should we match a device based on its DNS hostname.'] = 'Ska vi matcha en enhet baserat på dess DNS-värdnamn.';

$GLOBALS["lang"]['Should we match a device based on its UUID.'] = 'Om vi matchar en enhet baserat på dess UUID.';

$GLOBALS["lang"]['Should we match a device based on its dbus id.'] = 'Ska vi matcha en enhet baserad på dess dbus id.';

$GLOBALS["lang"]['Should we match a device based on its fqdn.'] = 'Ska vi matcha en enhet baserad på dess fqdn.';

$GLOBALS["lang"]['Should we match a device based on its hostname and UUID.'] = 'Om vi matchar en enhet baserat på dess värdnamn och UUID.';

$GLOBALS["lang"]['Should we match a device based on its hostname and dbus id.'] = 'Om vi matchar en enhet baserat på dess värdnamn och dbus id.';

$GLOBALS["lang"]['Should we match a device based on its hostname and serial.'] = 'Om vi matchar en enhet baserat på dess värdnamn och seriell.';

$GLOBALS["lang"]['Should we match a device based on its ip if we have an existing device with no data.'] = 'Om vi matchar en enhet baserat på dess ip om vi har en befintlig enhet utan data.';

$GLOBALS["lang"]['Should we match a device based on its ip.'] = 'Ska vi matcha en enhet baserad på dess ip.';

$GLOBALS["lang"]['Should we match a device based on its mac address.'] = 'Om vi matchar en enhet baserat på dess mac-adress.';

$GLOBALS["lang"]['Should we match a device based on its serial and type.'] = 'Om vi matchar en enhet baserat på dess seriell och typ.';

$GLOBALS["lang"]['Should we match a device based on its serial number.'] = 'Om vi matchar en enhet baserat på dess serienummer.';

$GLOBALS["lang"]['Should we match a device based only on its SNMP sysName and serial.'] = 'Om vi matchar en enhet baserad endast på SNMP sysName och seriell.';

$GLOBALS["lang"]['Should we match a device based only on its SNMP sysName.'] = 'Om vi matchar en enhet baserad endast på SNMP sysName.';

$GLOBALS["lang"]['Should we match a device based only on its hostname.'] = 'Om vi matchar en enhet baserad endast på dess värdnamn.';

$GLOBALS["lang"]['Should we ping the IP before attempting to scan it? If it does not respond to the ping, skip this device.'] = 'Ska vi pinga IP innan vi försöker skanna den? Om det inte svarar på pingen, hoppa över denna enhet.';

$GLOBALS["lang"]['Should we populate the external system from our local devices.'] = 'Om vi befolkar det externa systemet från våra lokala enheter.';

$GLOBALS["lang"]['Should we run an audit and submit it (y/n).'] = 'Om vi kör en revision och skickar in den (y/n).';

$GLOBALS["lang"]['Should we test for SNMP using UDP port 161.'] = 'Ska vi testa för SNMP med UDP-port 161.';

$GLOBALS["lang"]['Should we test for SSH using TCP port 22.'] = 'Ska vi testa för SSH med TCP-port 22.';

$GLOBALS["lang"]['Should we test for WMI using TCP port 135.'] = 'Ska vi testa för WMI med TCP-port 135.';

$GLOBALS["lang"]['Should we uninstall the agent (y/n).'] = 'Ska vi avinstallera agenten (y/n).';

$GLOBALS["lang"]['Should we use this method to authenticate user credentials. Set to <code>y</code> or <code>n</code>.'] = 'Om vi använder denna metod för att autentisera användaruppgifter. Set to <code>y</code> eller <code>n</code>.';

$GLOBALS["lang"]['Should we use this method to populate a users roles. The field <code>use_auth</code> must be set to <code>y</code> to use this. Set to <code>y</code> or <code>n</code>.'] = 'Ska vi använda denna metod för att fylla en användarroll. Fältet <code>use_auth</code> måste ställas in för att <code>y</code> att använda detta. Set to <code>y</code> eller <code>n</code>.';

$GLOBALS["lang"]['Show All'] = 'Visa alla';

$GLOBALS["lang"]['sid'] = 'Sid';

$GLOBALS["lang"]['Sid'] = 'Sid';

$GLOBALS["lang"]['sidebar'] = 'Sidebar';

$GLOBALS["lang"]['Sidebar'] = 'Sidebar';

$GLOBALS["lang"]['Sierra Leone'] = 'Sierra Leone';

$GLOBALS["lang"]['Singapore'] = 'Singapore Singapore';

$GLOBALS["lang"]['Site A'] = 'Webbplats A';

$GLOBALS["lang"]['Site B'] = 'Webbplats B';

$GLOBALS["lang"]['site_hours_a'] = 'Site Hours A';

$GLOBALS["lang"]['Site Hours A'] = 'Site Hours A';

$GLOBALS["lang"]['site_hours_b'] = 'Webbplats timmar B';

$GLOBALS["lang"]['Site Hours B'] = 'Webbplats timmar B';

$GLOBALS["lang"]['size'] = 'Storlek';

$GLOBALS["lang"]['Size'] = 'Storlek';

$GLOBALS["lang"]['slaves'] = 'Slavar';

$GLOBALS["lang"]['Slaves'] = 'Slavar';

$GLOBALS["lang"]['Slovakia (Slovak Republic)'] = 'Slovakien (Slovakien)';

$GLOBALS["lang"]['Slovenia'] = 'Slovenien';

$GLOBALS["lang"]['Smart Status'] = 'Smart Status';

$GLOBALS["lang"]['smversion'] = 'Smversion';

$GLOBALS["lang"]['Smversion'] = 'Smversion';

$GLOBALS["lang"]['Sneaky'] = 'Sneaky';

$GLOBALS["lang"]['snmp_enterprise_id'] = 'Snmp Enterprise ID';

$GLOBALS["lang"]['Snmp Enterprise ID'] = 'Snmp Enterprise ID';

$GLOBALS["lang"]['snmp_enterprise_name'] = 'Snmp Enterprise Namn';

$GLOBALS["lang"]['Snmp Enterprise Name'] = 'Snmp Enterprise Namn';

$GLOBALS["lang"]['snmp_oid'] = 'Snmp Oid';

$GLOBALS["lang"]['Snmp Oid'] = 'Snmp Oid';

$GLOBALS["lang"]['snmp_timeout'] = 'Snmp Timeout';

$GLOBALS["lang"]['Snmp Timeout'] = 'Snmp Timeout';

$GLOBALS["lang"]['snmp_version'] = 'Snmp version';

$GLOBALS["lang"]['Snmp Version'] = 'Snmp version';

$GLOBALS["lang"]['socket'] = 'Socket';

$GLOBALS["lang"]['Socket'] = 'Socket';

$GLOBALS["lang"]['software'] = 'Programvara';

$GLOBALS["lang"]['Software'] = 'Programvara';

$GLOBALS["lang"]['Software Found Last 7 Days'] = 'Programvaran hittades senast 7 dagar';

$GLOBALS["lang"]['Software Found Today'] = 'Programvara hittades idag';

$GLOBALS["lang"]['Software Found Yesterday'] = 'Programvara hittades igår';

$GLOBALS["lang"]['software_key'] = 'Software Key';

$GLOBALS["lang"]['Software Key'] = 'Software Key';

$GLOBALS["lang"]['software_name'] = 'Programvarunamn';

$GLOBALS["lang"]['Software Name'] = 'Programvarunamn';

$GLOBALS["lang"]['Software Policies'] = 'Programvarupolicy';

$GLOBALS["lang"]['software_revision'] = 'Software Revision';

$GLOBALS["lang"]['Software Revision'] = 'Software Revision';

$GLOBALS["lang"]['software_version'] = 'Programvaruversion';

$GLOBALS["lang"]['Software Version'] = 'Programvaruversion';

$GLOBALS["lang"]['Solaris'] = 'Solaris';

$GLOBALS["lang"]['Solomon Islands'] = 'Salomonöarna';

$GLOBALS["lang"]['Somalia, Somali Republic'] = 'Somalia, somaliska republiken';

$GLOBALS["lang"]['sound'] = 'Ljud';

$GLOBALS["lang"]['Sound'] = 'Ljud';

$GLOBALS["lang"]['source'] = 'Källa';

$GLOBALS["lang"]['Source'] = 'Källa';

$GLOBALS["lang"]['South Africa'] = 'Sydafrika';

$GLOBALS["lang"]['South Georgia and the South Sandwich Islands'] = 'Södra Georgien och Södra Sandwichöarna';

$GLOBALS["lang"]['Spain'] = 'Spanien Spanien';

$GLOBALS["lang"]['Spanish'] = 'Spanska spanska';

$GLOBALS["lang"]['Specific to Azure.'] = 'Specifikt för Azure.';

$GLOBALS["lang"]['Specific to OKTA.'] = 'Specifikt för OKTA.';

$GLOBALS["lang"]['Specifies a comma-separated list of targets (no spaces) to be excluded from the scan. The list you pass in uses normal Nmap syntax, so it can include hostnames, CIDR netblocks, octet ranges, etc.'] = 'Anger en komma-separerad lista över mål (inga utrymmen) som ska uteslutas från skanningen. Listan du passerar i använder normal Nmap-syntax, så det kan inkludera värdnamn, CIDR-nätblock, oktetintervall, etc.';

$GLOBALS["lang"]['speed'] = 'Hastighet';

$GLOBALS["lang"]['Speed'] = 'Hastighet';

$GLOBALS["lang"]['speed_down_a'] = 'Speed Down Ett';

$GLOBALS["lang"]['Speed Down A'] = 'Speed Down Ett';

$GLOBALS["lang"]['speed_down_b'] = 'Speed Down B';

$GLOBALS["lang"]['Speed Down B'] = 'Speed Down B';

$GLOBALS["lang"]['speed_up_a'] = 'Speed Up A';

$GLOBALS["lang"]['Speed Up A'] = 'Speed Up A';

$GLOBALS["lang"]['speed_up_b'] = 'Hastighet B';

$GLOBALS["lang"]['Speed Up B'] = 'Hastighet B';

$GLOBALS["lang"]['sql'] = 'Sql';

$GLOBALS["lang"]['Sql'] = 'Sql';

$GLOBALS["lang"]['Sri Lanka'] = 'Sri Lanka';

$GLOBALS["lang"]['ssh_ports'] = 'Ssh Ports';

$GLOBALS["lang"]['Ssh Ports'] = 'Ssh Ports';

$GLOBALS["lang"]['ssh_timeout'] = 'Ssh Timeout';

$GLOBALS["lang"]['Ssh Timeout'] = 'Ssh Timeout';

$GLOBALS["lang"]['Stand-Alone'] = 'Stand-Alone';

$GLOBALS["lang"]['Standard'] = 'Standard';

$GLOBALS["lang"]['standard_id'] = 'Standard ID';

$GLOBALS["lang"]['Standard ID'] = 'Standard ID';

$GLOBALS["lang"]['standards'] = 'Standarder';

$GLOBALS["lang"]['Standards'] = 'Standarder';

$GLOBALS["lang"]['standards_policies'] = 'Standardpolicyer';

$GLOBALS["lang"]['Standards Policies'] = 'Standardpolicyer';

$GLOBALS["lang"]['standards_results'] = 'Standardresultat';

$GLOBALS["lang"]['Standards Results'] = 'Standardresultat';

$GLOBALS["lang"]['start_date'] = 'Startdatum';

$GLOBALS["lang"]['Start Date'] = 'Startdatum';

$GLOBALS["lang"]['start_mode'] = 'Startläge';

$GLOBALS["lang"]['Start Mode'] = 'Startläge';

$GLOBALS["lang"]['started_date'] = 'Startdatum';

$GLOBALS["lang"]['Started Date'] = 'Startdatum';

$GLOBALS["lang"]['state'] = 'Staten';

$GLOBALS["lang"]['State'] = 'Staten';

$GLOBALS["lang"]['Stats'] = 'Statistik';

$GLOBALS["lang"]['status'] = 'Status';

$GLOBALS["lang"]['Status'] = 'Status';

$GLOBALS["lang"]['Storage'] = 'Lagring';

$GLOBALS["lang"]['storage_count'] = 'Lagringsräkning';

$GLOBALS["lang"]['Storage Count'] = 'Lagringsräkning';

$GLOBALS["lang"]['Storage-Area Network'] = 'Storage-Area Network';

$GLOBALS["lang"]['string'] = 'String';

$GLOBALS["lang"]['String'] = 'String';

$GLOBALS["lang"]['sub_resource_id'] = 'Sub Resource ID';

$GLOBALS["lang"]['Sub Resource ID'] = 'Sub Resource ID';

$GLOBALS["lang"]['sub_type'] = 'Sub Type';

$GLOBALS["lang"]['Sub Type'] = 'Sub Type';

$GLOBALS["lang"]['subject_key_ident'] = 'Subject Key Ident';

$GLOBALS["lang"]['Subject Key Ident'] = 'Subject Key Ident';

$GLOBALS["lang"]['Submit'] = 'Inlämning';

$GLOBALS["lang"]['Submitted From'] = 'Submitterad från';

$GLOBALS["lang"]['subnet'] = 'Subnet';

$GLOBALS["lang"]['Subnet'] = 'Subnet';

$GLOBALS["lang"]['Subscription ID'] = 'Prenumerations-ID';

$GLOBALS["lang"]['suburb'] = 'Förort';

$GLOBALS["lang"]['Suburb'] = 'Förort';

$GLOBALS["lang"]['Success'] = 'Framgång';

$GLOBALS["lang"]['Sudan'] = 'Sudan';

$GLOBALS["lang"]['Sudo Password'] = 'Sudo Password';

$GLOBALS["lang"]['Sudo Password (optional)'] = 'Sudo Password (tillval)';

$GLOBALS["lang"]['suite'] = 'Suite';

$GLOBALS["lang"]['Suite'] = 'Suite';

$GLOBALS["lang"]['summaries'] = 'Sammanfattningar';

$GLOBALS["lang"]['Summaries'] = 'Sammanfattningar';

$GLOBALS["lang"]['Summary'] = 'Sammanfattning';

$GLOBALS["lang"]['Sunday'] = 'Söndag söndag';

$GLOBALS["lang"]['supplier'] = 'Leverantör';

$GLOBALS["lang"]['Supplier'] = 'Leverantör';

$GLOBALS["lang"]['Support'] = 'Support';

$GLOBALS["lang"]['Supported types are <code>subnet</code>, <code>seed</code> and <code>active directory</code>.'] = 'Stödda typer är <code>subnet</code>, <code>seed</code> och <code>active directory</code>.';

$GLOBALS["lang"]['Suriname'] = 'Surinam';

$GLOBALS["lang"]['Svalbard & Jan Mayen Islands'] = 'Svalbard och Jan Mayen Islands';

$GLOBALS["lang"]['Swaziland'] = 'Swaziland';

$GLOBALS["lang"]['Sweden'] = 'Sverige';

$GLOBALS["lang"]['switch_device_id'] = 'Switch Device ID';

$GLOBALS["lang"]['Switch Device ID'] = 'Switch Device ID';

$GLOBALS["lang"]['switch_port'] = 'Växla Port';

$GLOBALS["lang"]['Switch Port'] = 'Växla Port';

$GLOBALS["lang"]['Switzerland, Swiss Confederation'] = 'Schweiz, Schweiziska konfederationen';

$GLOBALS["lang"]['Syrian Arab Republic'] = 'Arabiska Syrien';

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

$GLOBALS["lang"]['sysUpTime'] = 'SysUptime';

$GLOBALS["lang"]['SysUpTime'] = 'SysUptime';

$GLOBALS["lang"]['system_component'] = 'Systemkomponent';

$GLOBALS["lang"]['System Component'] = 'Systemkomponent';

$GLOBALS["lang"]['System-Area Network'] = 'System-Area Network';

$GLOBALS["lang"]['TX Bitrate'] = 'TX Bitrate';

$GLOBALS["lang"]['TX Freq'] = 'TX Freq';

$GLOBALS["lang"]['TX Level'] = 'TX nivå';

$GLOBALS["lang"]['TX Power'] = 'TX Power';

$GLOBALS["lang"]['TX Profile'] = 'TX Profile';

$GLOBALS["lang"]['table'] = 'Bord';

$GLOBALS["lang"]['Table'] = 'Bord';

$GLOBALS["lang"]['tag'] = 'Taggar';

$GLOBALS["lang"]['Tag'] = 'Taggar';

$GLOBALS["lang"]['tag_1'] = 'Tag 1';

$GLOBALS["lang"]['Tag 1'] = 'Tag 1';

$GLOBALS["lang"]['tag_2'] = 'Tag 2';

$GLOBALS["lang"]['Tag 2'] = 'Tag 2';

$GLOBALS["lang"]['tag_3'] = 'Tag 3';

$GLOBALS["lang"]['Tag 3'] = 'Tag 3';

$GLOBALS["lang"]['tags'] = 'Taggar';

$GLOBALS["lang"]['Tags'] = 'Taggar';

$GLOBALS["lang"]['Tags :: '] = 'Taggar :: ';

$GLOBALS["lang"]['Taiwan'] = 'Taiwan';

$GLOBALS["lang"]['Tajikistan'] = 'Tadzjikistan';

$GLOBALS["lang"]['Tanzania'] = 'Tanzania';

$GLOBALS["lang"]['task'] = 'Uppgift';

$GLOBALS["lang"]['Task'] = 'Uppgift';

$GLOBALS["lang"]['tasks'] = 'Uppgifter';

$GLOBALS["lang"]['Tasks'] = 'Uppgifter';

$GLOBALS["lang"]['tcp_ports'] = 'Tcp Ports';

$GLOBALS["lang"]['Tcp Ports'] = 'Tcp Ports';

$GLOBALS["lang"]['tenant'] = 'Tenant';

$GLOBALS["lang"]['Tenant'] = 'Tenant';

$GLOBALS["lang"]['ternary'] = 'Ternary';

$GLOBALS["lang"]['Ternary'] = 'Ternary';

$GLOBALS["lang"]['Test 1'] = 'Test 1';

$GLOBALS["lang"]['Test 2'] = 'Test 2';

$GLOBALS["lang"]['Test 3'] = 'Test 3';

$GLOBALS["lang"]['test_minutes'] = 'Test Minutes';

$GLOBALS["lang"]['Test Minutes'] = 'Test Minutes';

$GLOBALS["lang"]['test_os'] = 'Test Os';

$GLOBALS["lang"]['Test Os'] = 'Test Os';

$GLOBALS["lang"]['test_subnet'] = 'Test Subnet';

$GLOBALS["lang"]['Test Subnet'] = 'Test Subnet';

$GLOBALS["lang"]['tests'] = 'Tester';

$GLOBALS["lang"]['Tests'] = 'Tester';

$GLOBALS["lang"]['Text'] = 'Texttext';

$GLOBALS["lang"]['Thailand'] = 'Thailand Thailand';

$GLOBALS["lang"]['The Active Directory domain to retrieve a list of subnets from.'] = 'Domänen Active Directory för att hämta en lista över undernät från.';

$GLOBALS["lang"]['The Active Directory server to retrieve a list of subnets from.'] = 'Active Directory-servern för att hämta en lista över undernät från.';

$GLOBALS["lang"]['The Automatable metric captures the answer to the question <strong>Can an attacker automate exploitation events for this vulnerability across multiple targets?</strong> based on steps 1-4 of the kill chain. These steps are reconnaissance, weaponization, delivery, and exploitation (Not Defined, No, Yes).'] = 'Den automatiska metriska fångar svaret på frågan <strong>Kan en angripare automatisera exploateringshändelser för denna sårbarhet över flera mål?</strong> baserat på steg 1-4 i dödskedjan. Dessa steg är rekonnässans, vapen, leverans och exploatering (inte definierad, Nej, Ja).';

$GLOBALS["lang"]['The CVE identifier.'] = 'CVE-identifieraren.';

$GLOBALS["lang"]['The Cloud that owns this item. Links to <code>clouds.id</code>.'] = 'Molnet som äger detta objekt. Länkar till <code>clouds.id</code>.';

$GLOBALS["lang"]['The Group used to run the Baseline. Links to <code>groups.id</code>.'] = 'Gruppen brukade köra Baseline. Länkar till <code>groups.id</code>.';

$GLOBALS["lang"]['The ID from the devices table (the devices.name will be displayed) of the NTU at this end of the connection. Links to <code>devices.id</code>.'] = 'ID från tabellen enheter (enheter.name kommer att visas) av NTU i denna ände av anslutningen. Länkar till <code>devices.id</code>.';

$GLOBALS["lang"]['The ID from the imported benchmark policy.'] = 'ID från den importerade referenspolicyn.';

$GLOBALS["lang"]['The ID from the locations table (the locations.name will be displayed) of this end of the connection. Links to <code>locations.id</code>. The A location is usually the <code>FROM</code> location.'] = 'ID från tabellen platser (platser.namnet kommer att visas) i denna ände av anslutningen. Länkar till <code>locations.id</code>. En plats är vanligtvis den <code>FROM</code> plats.';

$GLOBALS["lang"]['The ID from the locations table (the locations.name will be displayed) of this end of the connection. Links to <code>locations.id</code>. The B location is usually the <code>TO</code> location.'] = 'ID från tabellen platser (platser.namnet kommer att visas) i denna ände av anslutningen. Länkar till <code>locations.id</code>. B-platsen är vanligtvis den <code>TO</code> plats.';

$GLOBALS["lang"]['The ID of the associated device (if any). Links to <code>devices.id</code>.'] = 'ID för den tillhörande enheten (om någon). Länkar till <code>devices.id</code>.';

$GLOBALS["lang"]['The ID of the associated discovery. Linked to <code>discoveries.id</code>'] = 'ID för den tillhörande upptäckten. Länkat till <code>discoveries.id</code>';

$GLOBALS["lang"]['The ID of the item of the associated type.'] = 'ID för objektet av den tillhörande typen.';

$GLOBALS["lang"]['The ID of this orgs parent org. Linked to <code>orgs.id</code>'] = 'ID för denna orgs förälder org. Länkat till <code>orgs.id</code>';

$GLOBALS["lang"]['The ID provided by the provider.'] = 'ID som tillhandahålls av leverantören.';

$GLOBALS["lang"]['The ID retrieved from a Cloud discovery.'] = 'ID hämtade från en moln upptäckt.';

$GLOBALS["lang"]['The IP address of this collector used to communicate with the server.'] = 'IP-adressen för denna samlare brukade kommunicera med servern.';

$GLOBALS["lang"]['The IP of the device to start a seed discovery with.'] = 'IP av enheten för att starta en frö upptäckt med.';

$GLOBALS["lang"]['The IP of the external interface.'] = 'IP för det yttre gränssnittet.';

$GLOBALS["lang"]['The IP of the internal interface.'] = 'IP för det interna gränssnittet.';

$GLOBALS["lang"]['The ISP or Telco providing this link.'] = 'ISP eller Telco tillhandahåller denna länk.';

$GLOBALS["lang"]['The JSON record from Mitre.'] = 'JSON rekord från Mitre.';

$GLOBALS["lang"]['The JSON record from the NVD feed.'] = 'JSON-rekordet från NVD-flödet.';

$GLOBALS["lang"]['The LDAP OU of this user (if LDAP is used).'] = 'LDAP OU av denna användare (om LDAP används).';

$GLOBALS["lang"]['The Location that contains this network. Links to <code>locations.id</code>.'] = 'Platsen som innehåller detta nätverk. Länkar till <code>locations.id</code>.';

$GLOBALS["lang"]['The NVD assigned base status.'] = 'NVD tilldelade basstatus.';

$GLOBALS["lang"]['The Nmap timing preset.'] = 'Nmap timing förinställd.';

$GLOBALS["lang"]['The OS this package should be reported against. Blank for all. Use the percent sign % as a wildcard. Will be tested against os_group, os_family and os_name in that order.'] = 'OS detta paket bör rapporteras mot. Blank för alla. Använd procent tecknet % som wildcard. Testas mot os_group, os_family och os_name i den ordningen.';

$GLOBALS["lang"]['The Open-AudIT API'] = 'Open-AudIT API';

$GLOBALS["lang"]['The Open-AudIT id of the linked cloud. Links to <code>clouds.id</code>.'] = 'Open-AudIT id av det länkade molnet. Länkar till <code>clouds.id</code>.';

$GLOBALS["lang"]['The Open-AudIT server code was exeucted within this file.'] = 'Open-Aud IT-serverkoden utfördes i den här filen.';

$GLOBALS["lang"]['The Open-AudIT server code was exeucted within this function.'] = 'Open-Aud IT-serverkoden utfördes inom denna funktion.';

$GLOBALS["lang"]['The Organisation that owns this item. Links to <code>orgs.id</code>.'] = 'Organisationen som äger detta objekt. Länkar till <code>orgs.id</code>.';

$GLOBALS["lang"]['The Process Identifier of the running associated discovery.'] = 'Process Identifier av den löpande tillhörande upptäckten.';

$GLOBALS["lang"]['The RU positon of the top of this device.'] = 'RU positon av toppen av denna enhet.';

$GLOBALS["lang"]['The SNMP community string.'] = 'SNMP gemenskap sträng.';

$GLOBALS["lang"]['The SNMP v3 Authentication Passphrase.'] = 'SNMP v3 Authentication Passphrase';

$GLOBALS["lang"]['The SNMP v3 Authentication Protocol.'] = 'SNMP v3 Authentication Protocol';

$GLOBALS["lang"]['The SNMP v3 Privacy Passphrase.'] = 'SNMP v3 Privacy Passphrase.';

$GLOBALS["lang"]['The SNMP v3 Privacy Protocol.'] = 'SNMP v3 Privacy Protocol.';

$GLOBALS["lang"]['The SNMP v3 Security Level.'] = 'SNMP v3 säkerhetsnivå.';

$GLOBALS["lang"]['The SNMP v3 Security Name.'] = 'SNMP v3 säkerhetsnamn.';

$GLOBALS["lang"]['The SNMPv3 context Engine ID (optional).'] = 'SNMPv3-kontexten Engine ID (tillval).';

$GLOBALS["lang"]['The SNMPv3 context Name (optional).'] = 'SNMPv3-kontextnamnet (valfritt).';

$GLOBALS["lang"]['The URL of the external system.'] = 'URL för det externa systemet.';

$GLOBALS["lang"]['The URL of your Open-AudIT Server that this Collector will report to (no trailing slash).'] = 'URL för din Open-AudIT Server som denna Collector kommer att rapportera till (ingen spårning slash).';

$GLOBALS["lang"]['The URL the audit scripts should submit their result to.'] = 'Adressen revisionsskripten bör lämna in sitt resultat till.';

$GLOBALS["lang"]['The actual full name of this user.'] = 'Det faktiska fullständiga namnet på denna användare.';

$GLOBALS["lang"]['The associated baseline. Links to <code>baselines.id</code>.'] = 'Den tillhörande baslinjen. Länkar till <code>baselines.id</code>.';

$GLOBALS["lang"]['The associated discovery (if required). Links to <code>discoveries.id</code>.'] = 'Den tillhörande upptäckten (om så krävs). Länkar till <code>discoveries.id</code>.';

$GLOBALS["lang"]['The attribute to test (from the <code>devices</code> table).'] = 'Attributen till test (från <code>devices</code> tabell).';

$GLOBALS["lang"]['The attribute to test (must match an external field name from below).'] = 'attributet för test (måste matcha ett externt fältnamn underifrån).';

$GLOBALS["lang"]['The audit script upon which to base your customisations.'] = 'Revisionsmanuset för att basera dina anpassningar.';

$GLOBALS["lang"]['The base path from which to search for Users.'] = 'Grundvägen för att söka efter användare.';

$GLOBALS["lang"]['The benchmark type.'] = 'Benchmark typ.';

$GLOBALS["lang"]['The building the rack is located in.'] = 'Byggnaden racket ligger i.';

$GLOBALS["lang"]['The calculated number of devices to be created externally.'] = 'Det beräknade antalet enheter som ska skapas externt.';

$GLOBALS["lang"]['The calculated number of devices to be created in Open-AudIT.'] = 'Det beräknade antalet enheter som ska skapas i Open-AudIT.';

$GLOBALS["lang"]['The collectors internal IP used when it runs a discovery.'] = 'Samlarna intern IP användes när den kör en upptäckt.';

$GLOBALS["lang"]['The column name from the foreign table. Should be one of: class, environment, status, type or menu_category.'] = 'Kolumnnamnet från det utländska bordet. Bör vara en av: klass, miljö, status, typ eller meny_kategori.';

$GLOBALS["lang"]['The command executed upon the target device or Open-AudIT server code executed during discovery.'] = 'Kommandot som utförs på målenheten eller Open-AudIT-serverkoden som utförs under upptäckten.';

$GLOBALS["lang"]['The configuration of your cluster can be: <code>active/active</code>, <code>active/passive</code>, <code>N+1</code>, <code>N+M</code>, <code>N-to-1</code>, <code>N-to-N</code>, <code>other</code> or blank.'] = 'Konfigurationen av ditt kluster kan vara: <code>active/active</code>, <code>active/passive</code>, <code>N+1</code>, <code>N+M</code>, <code>N-to-1</code>, <code>N-to-N</code>, <code>other</code> eller blank.';

$GLOBALS["lang"]['The credentials password. If the credentials are an SSH Key, this is the password used to unlock the key and is optional.'] = 'Credentials lösenord. Om referenserna är en SSH-nyckel är detta lösenordet som används för att låsa upp nyckeln och är valfritt.';

$GLOBALS["lang"]['The credentials username.'] = 'Credentials användarnamn.';

$GLOBALS["lang"]['The current status of the Cloud Discovery.'] = 'Den nuvarande statusen för Cloud Discovery.';

$GLOBALS["lang"]['The current status of the discovery.'] = 'Den nuvarande statusen för upptäckten.';

$GLOBALS["lang"]['The dashboard that will be shown by default for this user. Links to <code>dashboards.id</code>.'] = 'Dashboard som visas som standard för denna användare. Länkar till <code>dashboards.id</code>.';

$GLOBALS["lang"]['The database version and web version are inconsistent.'] = 'Databasversionen och webbversionen är inkonsekvent.';

$GLOBALS["lang"]['The date of license expiration.'] = 'Datumet för licensutgång.';

$GLOBALS["lang"]['The date the software is discontinued by the manufacturer. Usually replaced by a newer version. Maintenance may still be available.'] = 'Datumet programvaran avbryts av tillverkaren. Vanligtvis ersatt av en nyare version. Underhåll kan fortfarande vara tillgängligt.';

$GLOBALS["lang"]['The date the software no longer receives updates and is effectively discontinued altogether. Maintenance is discontinued.'] = 'Datumet programvaran inte längre får uppdateringar och avbryts helt och hållet. Underhåll avbryts.';

$GLOBALS["lang"]['The date this item was changed or added (read only). NOTE - This is the timestamp from the server.'] = 'Det datum som detta objekt ändrades eller läggs till (läs endast). OBS: Detta är tidsstämpeln från servern.';

$GLOBALS["lang"]['The date/time when this result was created.'] = 'Datum/tid då detta resultat skapades.';

$GLOBALS["lang"]['The day of the month when this task should execute (* for every day).'] = 'Månadens dag när denna uppgift ska utföras (* för varje dag).';

$GLOBALS["lang"]['The day of the week when this task should execute (* for every day).'] = 'Veckans dag när denna uppgift ska utföras (* för varje dag).';

$GLOBALS["lang"]['The default language assigned to any user created by this method.'] = 'Standardspråket som tilldelats alla användare som skapats genom denna metod.';

$GLOBALS["lang"]['The device must respond to an Nmap ping before it is considered online.'] = 'Enheten måste svara på en Nmap-ping innan den anses online.';

$GLOBALS["lang"]['The device within Open-AudIT. Links to <code>devices.id</code>.'] = 'Enheten inom Open-AudIT. Länkar till <code>devices.id</code>.';

$GLOBALS["lang"]['The direct link for the script is'] = 'Den direkta länken för manuset är';

$GLOBALS["lang"]['The email address of the reciever'] = 'e-postadressen till reciever';

$GLOBALS["lang"]['The enterprise binary from FirstWave is required for a license. Please download Open-AudIT from'] = 'Företaget binär från FirstWave krävs för en licens. Ladda ner Open-AudIT från';

$GLOBALS["lang"]['The entire associated baseline this result is from.'] = 'Hela tillhörande baslinje detta resultat är från.';

$GLOBALS["lang"]['The externally referenced location ID. Usually populated by Cloud audits.'] = 'Det externt refererade plats-ID. Vanligtvis befolkas av molnrevisioner.';

$GLOBALS["lang"]['The first time that Open-AudIT retrieved details of this device.'] = 'Första gången Open-AudIT hämtade detaljer om denna enhet.';

$GLOBALS["lang"]['The floor the rack is located on.'] = 'Gotet racket ligger på.';

$GLOBALS["lang"]['The foreign table to reference. Should be one of: devices, locations, orgs or queries.'] = 'Den utländska tabellen till referens. Bör vara en av: enheter, platser, orger eller frågor.';

$GLOBALS["lang"]['The format used for the output to be emailed.'] = 'Formatet som används för utgången för att e-postas.';

$GLOBALS["lang"]['The fully qualified column upon which to group by. NOTE: When type = traffic, this represents the red query id.'] = 'Den fullt kvalificerade kolumnen för att gruppera efter. OBS: När typ = trafik representerar detta den röda frågan.';

$GLOBALS["lang"]['The fully qualified table.column. Multiple may be provided, separated by a comma (no spaces).'] = 'Den fullt kvalificerade table.column. Flera kan tillhandahållas, separeras av ett kommatecken (inga utrymmen).';

$GLOBALS["lang"]['The generated SQL query to test for this vulnerability. This field can be edited to correct the query as required.'] = 'Den genererade SQL-frågan för att testa för denna sårbarhet. Detta fält kan redigeras för att korrigera frågan efter behov.';

$GLOBALS["lang"]['The group of devices on which the baseline was run against.'] = 'Den grupp av enheter där baslinjen kördes mot.';

$GLOBALS["lang"]['The group that provides a list of devices for the integration. Links to <code>groups.id</code>.'] = 'Gruppen som tillhandahåller en lista över enheter för integrationen. Länkar till <code>groups.id</code>.';

$GLOBALS["lang"]['The hour of the day when this task should execute (* for every hour).'] = 'Dagen då denna uppgift skall utföras (* varje timme).';

$GLOBALS["lang"]['The id of the linked device. Links to <code>devices.id</code>'] = 'Id för den länkade enheten. Länkar till <code>devices.id</code>';

$GLOBALS["lang"]['The identifier column (integer) in the database (read only).'] = 'Identifikationskolumnen (integer) i databasen (läs endast).';

$GLOBALS["lang"]['The importance of this baseline (not used yet).'] = 'Vikten av denna baslinje (inte används än).';

$GLOBALS["lang"]['The integer of severity.'] = 'heltal av svårighetsgrad.';

$GLOBALS["lang"]['The ip address of the Auth method.'] = 'Ip-adressen till Auth-metoden.';

$GLOBALS["lang"]['The language to translate the web interface into for the user.'] = 'Språket för att översätta webbgränssnittet till för användaren.';

$GLOBALS["lang"]['The last date and time this item was executed (read only).'] = 'Det sista datumet och tiden detta objekt utfördes (läs endast).';

$GLOBALS["lang"]['The last time that Open-AudIT retrieved details of this device.'] = 'Sista gången som Open-AudIT hämtade detaljer om denna enhet.';

$GLOBALS["lang"]['The last time this benchmarks was executed.'] = 'Sista gången detta riktmärke utfördes.';

$GLOBALS["lang"]['The last time this integration was run.'] = 'Sista gången denna integration kördes.';

$GLOBALS["lang"]['The line number assigned by the provider to the line at this end of the connection.'] = 'Linjenummer som tilldelats av leverantören till linjen i denna ände av anslutningen.';

$GLOBALS["lang"]['The location the rack is located in. Links to <code>locations.id</code>.'] = 'Platsen racket ligger i. Länkar till <code>locations.id</code>.';

$GLOBALS["lang"]['The locations address.'] = 'Platserna adress.';

$GLOBALS["lang"]['The locations area.'] = 'Platserna området.';

$GLOBALS["lang"]['The locations city.'] = 'Platserna stad.';

$GLOBALS["lang"]['The locations country.'] = 'Platserna land.';

$GLOBALS["lang"]['The locations district.'] = 'Platserna distrikt.';

$GLOBALS["lang"]['The locations latitude.'] = 'Platserna latitud.';

$GLOBALS["lang"]['The locations level.'] = 'Platserna nivå.';

$GLOBALS["lang"]['The locations longitude.'] = 'Platserna longitud.';

$GLOBALS["lang"]['The locations phone.'] = 'Platserna telefon.';

$GLOBALS["lang"]['The locations postcode.'] = 'Platserna postkod.';

$GLOBALS["lang"]['The locations region.'] = 'Platserna region.';

$GLOBALS["lang"]['The locations room.'] = 'Platserna rum.';

$GLOBALS["lang"]['The locations state.'] = 'Platserna stat.';

$GLOBALS["lang"]['The locations suburb.'] = 'Platserna förorter.';

$GLOBALS["lang"]['The locations suite.'] = 'Platserna svit.';

$GLOBALS["lang"]['The maximum physical weight (in KGs) this rack can hold.'] = 'Den maximala fysiska vikten (i KG) kan denna rack hålla.';

$GLOBALS["lang"]['The maximum total BTUs this rack is rated for.'] = 'Den maximala totala BTU: er denna rack är rankad för.';

$GLOBALS["lang"]['The minute of the hour when this task should execute (* for every minute).'] = 'Minuten av timmen när denna uppgift ska utföra (* för varje minut).';

$GLOBALS["lang"]['The month of the year when this task should execute (* for every month).'] = 'Årets månad när denna uppgift ska utföras (* för varje månad).';

$GLOBALS["lang"]['The name given to this item.'] = 'Namnet som ges till detta objekt.';

$GLOBALS["lang"]['The name given to this item. Ideally it should be unique.'] = 'Namnet som ges till detta objekt. Helst bör det vara unikt.';

$GLOBALS["lang"]['The name given to this user (used to login). Ideally it should be unique.'] = 'Namnet som ges till denna användare (används för att logga in). Helst bör det vara unikt.';

$GLOBALS["lang"]['The name of the associated cloud (if required).'] = 'Namnet på det associerade molnet (om så krävs).';

$GLOBALS["lang"]['The name of the software package, as audited by Open-AudIT. Use the percent sign % as a wildcard.'] = 'Namnet på mjukvarupaketet, som granskas av Open-AudIT. Använd procent tecknet % som wildcard.';

$GLOBALS["lang"]['The name of the user who last changed or added this item (read only).'] = 'Namnet på användaren som senast ändrade eller lade till detta objekt (läs endast).';

$GLOBALS["lang"]['The name provided by the provider.'] = 'Namnet som tillhandahålls av leverantören.';

$GLOBALS["lang"]['The network in the format 192.168.1.0/24.'] = 'Nätverk i formatet 192.168.1.0/24.';

$GLOBALS["lang"]['The network subnet to execute the discovery on.'] = 'Nätverkssubnet för att genomföra upptäckten på.';

$GLOBALS["lang"]['The number of RUs this device occupies.'] = 'Antalet RU: er denna enhet upptar.';

$GLOBALS["lang"]['The number of associated locations. Links to <code>locations.cloud_id</code>.'] = 'Antalet associerade platser. Länkar till <code>locations.cloud_id</code>.';

$GLOBALS["lang"]['The number of associated networks. Links to <code>networks.cloud_id</code>.'] = 'Antalet tillhörande nätverk. Länkar till <code>networks.cloud_id</code>.';

$GLOBALS["lang"]['The number of audited devices in this cloud. Links to <code>devices.cloud_id</code> and <code>devices.serial</code>.'] = 'Antalet reviderade enheter i detta moln. Länkar till <code>devices.cloud_id</code> och <code>devices.serial</code>.';

$GLOBALS["lang"]['The number of critical severity vulnerabilities held by FirstWave (not in your database).'] = 'Antalet kritiska svårighetsgrader som innehas av FirstWave (inte i databasen).';

$GLOBALS["lang"]['The number of devices found by this discovery.'] = 'Antalet enheter som hittats av denna upptäckt.';

$GLOBALS["lang"]['The number of devices in the associated group.'] = 'Antalet enheter i den tillhörande gruppen.';

$GLOBALS["lang"]['The number of devices in this cloud with a state of running. Links to <code>devices.cloud_id</code> and <code>devices.instance_state</code>.'] = 'Antalet enheter i detta moln med ett tillstånd av körning. Länkar till <code>devices.cloud_id</code> och <code>devices.instance_state</code>.';

$GLOBALS["lang"]['The number of devices in this cloud with a state of stopped. Links to <code>devices.cloud_id</code> and <code>devices.instance_state</code>.'] = 'Antalet enheter i detta moln med ett tillstånd av stoppat. Länkar till <code>devices.cloud_id</code> och <code>devices.instance_state</code>.';

$GLOBALS["lang"]['The number of devices in this cloud. Links to <code>devices.cloud_id</code>.'] = 'Antalet enheter i detta moln. Länkar till <code>devices.cloud_id</code>.';

$GLOBALS["lang"]['The number of devices this benchmark will be executed upon. Derived from <code>benchmarks.devices</code>.'] = 'Antalet enheter som detta referensvärde kommer att utföras på. härrör från <code>benchmarks.devices</code>.';

$GLOBALS["lang"]['The number of devices to limit this discovery to.'] = 'Antalet enheter för att begränsa denna upptäckt till.';

$GLOBALS["lang"]['The number of high severity vulnerabilities held by FirstWave (not in your database).'] = 'Antalet allvarliga sårbarheter som innehas av FirstWave (inte i databasen).';

$GLOBALS["lang"]['The number of low severity vulnerabilities held by FirstWave (not in your database).'] = 'Antalet låga svårighetsgrader som innehas av FirstWave (inte i databasen).';

$GLOBALS["lang"]['The number of medium severity vulnerabilities held by FirstWave (not in your database).'] = 'Antalet medellånga svårighetsgrader som innehas av FirstWave (inte i databasen).';

$GLOBALS["lang"]['The number of purchased licenses.'] = 'Antalet köpta licenser.';

$GLOBALS["lang"]['The number of seconds to try and communicate with the target IP.'] = 'Antalet sekunder att försöka kommunicera med målet IP.';

$GLOBALS["lang"]['The number of vulnerabilities without a severity held by FirstWave (not in your database).'] = 'Antalet sårbarheter utan svårighetsgrad som innehas av FirstWave (inte i databasen).';

$GLOBALS["lang"]['The optional secondary column. NOTE: When type = traffic, this represents the yellow query id.'] = 'Den valfria sekundära kolumnen. OBS: När typ = trafik representerar detta den gula frågan.';

$GLOBALS["lang"]['The optional third column. NOTE: When type = traffic, this represents the green query id.'] = 'Den valfria tredje kolumnen. OBS: När typ = trafik representerar detta den gröna frågan.';

$GLOBALS["lang"]['The orientation of this device.'] = 'Orienteringen av denna enhet.';

$GLOBALS["lang"]['The password for the dn_account attribute.'] = 'Lösenordet för dn_account-attributet.';

$GLOBALS["lang"]['The password used to access the external system.'] = 'Lösenordet används för att komma åt det externa systemet.';

$GLOBALS["lang"]['The path to the file or directory.'] = 'Vägen till filen eller katalogen.';

$GLOBALS["lang"]['The path to the file or directory. Directories should end with a trailing slash.'] = 'Vägen till filen eller katalogen. Kataloger bör sluta med en spårningsskärpa.';

$GLOBALS["lang"]['The physical depth (in CMs) of the rack.'] = 'Det fysiska djupet (i CM) av racket.';

$GLOBALS["lang"]['The physical height (in CMs) of the rack.'] = 'Den fysiska höjden (i CM) av racket.';

$GLOBALS["lang"]['The physical weight (in KGs) of the rack at present.'] = 'Den fysiska vikten (i KG) av racket för närvarande.';

$GLOBALS["lang"]['The physical weight (in KGs) of the rack when empty.'] = 'Den fysiska vikten (i KG) av racket när den är tom.';

$GLOBALS["lang"]['The physical width (in CMs) of the rack.'] = 'Den fysiska bredden (i CM) av racket.';

$GLOBALS["lang"]['The pod (if any) that this rack is part of.'] = 'Poden (om någon) som denna rack är en del av.';

$GLOBALS["lang"]['The power circuit this rack attaches to.'] = 'Kraftkretsen denna rack fäster på.';

$GLOBALS["lang"]['The primary database table upon which to base this widget.'] = 'Den primära databastabellen för att basera denna widget.';

$GLOBALS["lang"]['The process identifier of this queue item.'] = 'Processidentifieraren för detta köobjekt.';

$GLOBALS["lang"]['The process that was used last to retrieve details about the device'] = 'Processen som användes senast för att hämta detaljer om enheten';

$GLOBALS["lang"]['The query that provides a list of devices for the integration. Links to <code>queries.id</code>.'] = 'Frågan som ger en lista över enheter för integrationen. Länkar till <code>queries.id</code>.';

$GLOBALS["lang"]['The rack asset number.'] = 'rack tillgång nummer.';

$GLOBALS["lang"]['The rack asset tag.'] = 'rack asset tag.';

$GLOBALS["lang"]['The rack bar code.'] = 'rack bar kod.';

$GLOBALS["lang"]['The rack model.'] = 'rack modell.';

$GLOBALS["lang"]['The rack serial.'] = 'rack seriell.';

$GLOBALS["lang"]['The rack series.'] = 'rack-serien.';

$GLOBALS["lang"]['The rack this device is located in. Links to <code>racks.id</code>.'] = 'Den rack denna enhet ligger i. Länkar till <code>racks.id</code>.';

$GLOBALS["lang"]['The recommended process of addressing and fixing identified security vulnerabilities. This typically involves applying patches, updates, or other measures to eliminate the risk posed by the vulnerabilities.'] = 'Den rekommenderade processen för att åtgärda och fastställa identifierade säkerhetsproblem. Detta innebär vanligtvis att applicera fläckar, uppdateringar eller andra åtgärder för att eliminera risken som sårbarheterna utgör.';

$GLOBALS["lang"]['The regular domain notation of your directory. Eg - <code>open-audit.lan</code>.'] = 'Den vanliga domänen notering av din katalog. Eg - <code>open-audit.lan</code>.';

$GLOBALS["lang"]['The result of the command.'] = 'Resultatet av kommandot.';

$GLOBALS["lang"]['The room the rack is located in.'] = 'Rummet racket ligger i.';

$GLOBALS["lang"]['The row the rack is located in.'] = 'Raden racket ligger i.';

$GLOBALS["lang"]['The secret key used in conjunction with your AWS EC2 API key.'] = 'Den hemliga nyckeln som används tillsammans med din AWS EC2 API-nyckel.';

$GLOBALS["lang"]['The software end-of-life date.'] = 'Programvaran end-of-life datum.';

$GLOBALS["lang"]['The software end-of-service-life date.'] = 'Programvaran end-of-service-life datum.';

$GLOBALS["lang"]['The specific database column from the specified database table.'] = 'Den specifika databaskolumnen från den angivna databastabellen.';

$GLOBALS["lang"]['The specific database table.'] = 'Den specifika databastabellen.';

$GLOBALS["lang"]['The standard Nmap timing options. We usually use -T4 (Aggressive) as this is recommended for a decent broadband or ethernet connection.'] = 'Standard Nmap timing alternativ. Vi brukar använda -T4 (Aggressive) eftersom detta rekommenderas för en anständig bredband eller ethernet-anslutning.';

$GLOBALS["lang"]['The status of this integration'] = 'Statusen för denna integration';

$GLOBALS["lang"]['The status of this queued item.'] = 'statusen för detta köade objekt.';

$GLOBALS["lang"]['The target IP this log entry referers to (if any).'] = 'Målet IP denna loggpost hänvisar till (om någon).';

$GLOBALS["lang"]['The template for the link to be generated per result line.'] = 'Mallen för länken som ska genereras per resultatlinje.';

$GLOBALS["lang"]['The text for the bottom of the chart in a line chart (only).'] = 'Texten till botten av diagrammet i ett linjediagram (endast).';

$GLOBALS["lang"]['The text that is displayed.'] = 'Den text som visas.';

$GLOBALS["lang"]['The timestamp after which, this task should run. For example, run a task after the 1st June 2017 at 10am, set it to <code>2017-06-01 09:59:00</code>. This value should be zero padded (ie, 09, not 9). This value defaults to <code>2000-01-01 00:00:00</code> which means by default, a scheduled task will run at next scheduled execution time.'] = 'Tidsstämpeln varefter denna uppgift bör köras. Till exempel, kör en uppgift efter den 1 juni 2017 klockan 10. <code>2017-06-01 09:59:00</code>. Detta värde bör vara noll vadderad (dvs. 09, inte 9). Detta värde standarder för <code>2000-01-01 00:00:00</code> Vilket innebär som standard, kommer en schemalagd uppgift att köras vid nästa schemalagd avrättningstid.';

$GLOBALS["lang"]['The top 10, 100 or 1000 (or none) TCP ports commonly in use according to Nmap.'] = 'Topp 10, 100 eller 1000 (eller ingen) TCP-portar som vanligtvis används enligt Nmap.';

$GLOBALS["lang"]['The top 10, 100 or 1000 (or none) UDP ports commonly in use according to Nmap.'] = 'Topp 10, 100 eller 1000 (eller ingen) UDP-portar som vanligtvis används enligt Nmap.';

$GLOBALS["lang"]['The total BTU output by this rack.'] = 'Den totala BTU-utgången av denna rack.';

$GLOBALS["lang"]['The type of device.'] = 'Typ av enhet.';

$GLOBALS["lang"]['The type of organisation.'] = 'Den typ av organisation.';

$GLOBALS["lang"]['The type of rack (compute, power, network, etc).'] = 'Typen av rack (dator, kraft, nätverk, etc).';

$GLOBALS["lang"]['The type of task to run. One of: baseline, benchmark, cloud discovery, discovery, integration, report, query.'] = 'Typ av uppgift att köra. En av: baslinje, riktmärke, moln upptäckt, upptäckt, integration, rapport, fråga.';

$GLOBALS["lang"]['The type of the integration (usually named after the external system).'] = 'Den typ av integration (vanligtvis uppkallad efter det externa systemet).';

$GLOBALS["lang"]['The unique identifier of this server.'] = 'Den unika identifieraren för denna server.';

$GLOBALS["lang"]['The user account this collector uses. Links to <code>users.id</code>.'] = 'Användarkontot som denna samlare använder. Länkar till <code>users.id</code>.';

$GLOBALS["lang"]['The username used to access the external system.'] = 'Användarnamnet som används för att komma åt det externa systemet.';

$GLOBALS["lang"]['The users email address.'] = 'Användarnas e-postadress.';

$GLOBALS["lang"]['The usual hours of operation at this site.'] = 'De vanliga drifttimmarna på denna webbplats.';

$GLOBALS["lang"]['The value assigned to the item.'] = 'Det värde som tilldelats objektet.';

$GLOBALS["lang"]['The value that is stored for this particular item.'] = 'Det värde som lagras för denna punkt.';

$GLOBALS["lang"]['The vendor name as per CPE entries.'] = 'Leverantörsnamnet per CPE-post.';

$GLOBALS["lang"]['The vendor taken from the CPE.'] = 'Leverantören från CPE.';

$GLOBALS["lang"]['The web directory on the host that Open-AudIT is installed (requires a trailing slash).'] = 'Webbkatalogen på värden som Open-AudIT är installerad (kräver en spårning slash).';

$GLOBALS["lang"]['The widget at position '] = 'widgeten på position ';

$GLOBALS["lang"]['The width of this device.'] = 'bredden på denna enhet.';

$GLOBALS["lang"]['Then'] = 'och sedan';

$GLOBALS["lang"]['This CVE will be retrieved and overwrite the existing CVE if it exists.'] = 'Detta CVE kommer att hämtas och skriva över det befintliga CVE om det existerar.';

$GLOBALS["lang"]['This attribute is stored as a JSON object. It is the list of all collections and contains the collection name along with <code>c</code>, <code>r</code>, <code>u</code> and,or <code>d</code> which represent create, read, update and delete. These are the actions a user can perform on items from that particular collection.'] = 'Detta attribut lagras som ett JSON-objekt. Det är listan över alla samlingar och innehåller samlingsnamnet tillsammans med <code>c</code>, <code>r</code>, <code>u</code> och, <code>d</code> som representerar skapa, läsa, uppdatera och ta bort. Det här är de åtgärder som en användare kan utföra på objekt från den samlingen.';

$GLOBALS["lang"]['This can be either a varchar (a text field), a list (a list of values that can be selected) or a date.'] = 'Detta kan vara antingen en varchar (ett textfält), en lista (en lista över värden som kan väljas) eller ett datum.';

$GLOBALS["lang"]['This collectors universally unique identifier.'] = 'Denna samlare universellt unik identifierare.';

$GLOBALS["lang"]['This description is auto-populated and should ideally be left as-is.'] = 'Denna beskrivning är auto-populerad och bör helst lämnas as-is.';

$GLOBALS["lang"]['This feature requires a Professional or an Enterprise license.'] = 'Denna funktion kräver en professionell eller en företagslicens.';

$GLOBALS["lang"]['This is generally the primary column, unless otherwise configured. NOTE: When type = traffic, this represents the secondary text.'] = 'Detta är i allmänhet den primära kolumnen, om inte annat konfigureras. OBS: När typ = trafik representerar detta den sekundära texten.';

$GLOBALS["lang"]['This item must match the value of the attribute selected or contains the ID of the query to be used.'] = 'Detta objekt måste matcha värdet av attributet som valts eller innehåller ID för frågan som ska användas.';

$GLOBALS["lang"]['This item must match the value of the attribute selected.'] = 'Detta objekt måste matcha värdet av attributet som valts.';

$GLOBALS["lang"]['This license expires on'] = 'Denna licens löper ut på';

$GLOBALS["lang"]['This should be set to either 1 or the height of the rack.'] = 'Detta bör ställas in på antingen 1 eller höjden på racket.';

$GLOBALS["lang"]['This will auto-populate.'] = 'Detta kommer auto-populera.';

$GLOBALS["lang"]['This will considerably slow the discovery scan.'] = 'Detta kommer avsevärt att sakta upptäcktsskanningen.';

$GLOBALS["lang"]['Thursday'] = 'Torsdag torsdag';

$GLOBALS["lang"]['time_caption'] = 'Time Caption';

$GLOBALS["lang"]['Time Caption'] = 'Time Caption';

$GLOBALS["lang"]['time_daylight'] = 'Time Daylight';

$GLOBALS["lang"]['Time Daylight'] = 'Time Daylight';

$GLOBALS["lang"]['Time to Execute'] = 'Dags att utföra';

$GLOBALS["lang"]['timeout'] = 'Timeout';

$GLOBALS["lang"]['Timeout'] = 'Timeout';

$GLOBALS["lang"]['Timeout Per Target (Seconds)'] = 'Timeout Per Target (andra)';

$GLOBALS["lang"]['Timesatamp'] = 'Timesatamp';

$GLOBALS["lang"]['Timestamp'] = 'Timestamp';

$GLOBALS["lang"]['timing'] = 'Timing';

$GLOBALS["lang"]['Timing'] = 'Timing';

$GLOBALS["lang"]['Timor-Leste'] = 'Östtimor';

$GLOBALS["lang"]['Title'] = 'Titel';

$GLOBALS["lang"]['Togo'] = 'Togo';

$GLOBALS["lang"]['Tokelau'] = 'Tokelau';

$GLOBALS["lang"]['Tonga'] = 'Tonga';

$GLOBALS["lang"]['toolbar_style'] = 'Toolbar Style';

$GLOBALS["lang"]['Toolbar Style'] = 'Toolbar Style';

$GLOBALS["lang"]['Top Nmap TCP Ports'] = 'Top Nmap TCP Ports';

$GLOBALS["lang"]['Top Nmap UDP Ports'] = 'Top Nmap UDP Ports';

$GLOBALS["lang"]['Traditional Chinese'] = 'Traditionella kinesiska';

$GLOBALS["lang"]['Traffic Light'] = 'Trafikljus';

$GLOBALS["lang"]['Trinidad and Tobago'] = 'Trinidad och Tobago';

$GLOBALS["lang"]['Troubleshooting LDAP Logins'] = 'Felsökning LDAP Logins';

$GLOBALS["lang"]['Try all the latest features with a FREE 100 device license of Open-AudIT Enterprise. Please read the <a href=\"'] = 'Prova alla de senaste funktionerna med en GRATIS 100 enhet licens för Open-AudIT Enterprise. Läs gärna <a hrefaught"';

$GLOBALS["lang"]['Tuesday'] = 'Tisdag tisdag';

$GLOBALS["lang"]['Tunisia'] = 'Tunisien';

$GLOBALS["lang"]['Turkey'] = 'Turkiet';

$GLOBALS["lang"]['Turkmenistan'] = 'Turkmenistan';

$GLOBALS["lang"]['Turks and Caicos Islands'] = 'Turkar och Caicosöarna';

$GLOBALS["lang"]['Tuvalu'] = 'Tuvalu';

$GLOBALS["lang"]['tx_bitrate'] = 'Tx Bitrate';

$GLOBALS["lang"]['Tx Bitrate'] = 'Tx Bitrate';

$GLOBALS["lang"]['tx_freq'] = 'Tx Freq';

$GLOBALS["lang"]['Tx Freq'] = 'Tx Freq';

$GLOBALS["lang"]['tx_level'] = 'Tx Level';

$GLOBALS["lang"]['Tx Level'] = 'Tx Level';

$GLOBALS["lang"]['tx_power'] = 'Tx Power';

$GLOBALS["lang"]['Tx Power'] = 'Tx Power';

$GLOBALS["lang"]['tx_profile'] = 'Tx profil';

$GLOBALS["lang"]['Tx Profile'] = 'Tx profil';

$GLOBALS["lang"]['type'] = 'Typ';

$GLOBALS["lang"]['Type'] = 'Typ';

$GLOBALS["lang"]['URL'] = 'URL';

$GLOBALS["lang"]['uuid'] = 'UUID';

$GLOBALS["lang"]['UUID'] = 'UUID';

$GLOBALS["lang"]['udp_ports'] = 'Udp Ports';

$GLOBALS["lang"]['Udp Ports'] = 'Udp Ports';

$GLOBALS["lang"]['Uganda'] = 'Uganda';

$GLOBALS["lang"]['Ukraine'] = 'Ukraina Ukraina';

$GLOBALS["lang"]['uninstall'] = 'Avinstallera';

$GLOBALS["lang"]['Uninstall'] = 'Avinstallera';

$GLOBALS["lang"]['Uninstall the Agent'] = 'Avinstallera agenten';

$GLOBALS["lang"]['United Arab Emirates'] = 'Förenade Arabemiraten';

$GLOBALS["lang"]['United Kingdom'] = 'Storbritannien';

$GLOBALS["lang"]['United States Minor Outlying Islands'] = 'USA Mindre Outlying Islands';

$GLOBALS["lang"]['United States Virgin Islands'] = 'Amerikanska Jungfruöarna';

$GLOBALS["lang"]['United States of America'] = 'Amerikas förenta stater';

$GLOBALS["lang"]['Unknown'] = 'Okänd';

$GLOBALS["lang"]['unlock_pin'] = 'Lås upp Pin';

$GLOBALS["lang"]['Unlock Pin'] = 'Lås upp Pin';

$GLOBALS["lang"]['Unscheduled'] = 'Unscheduled';

$GLOBALS["lang"]['Unused as at 5.2.0.'] = 'Oanvänd som vid 5.2.0.';

$GLOBALS["lang"]['Unused.'] = 'Oanvänd.';

$GLOBALS["lang"]['Update'] = 'Uppdatering';

$GLOBALS["lang"]['update_external_count'] = 'Uppdatera externt räkna';

$GLOBALS["lang"]['Update External Count'] = 'Uppdatera externt räkna';

$GLOBALS["lang"]['update_external_from_internal'] = 'Uppdatera externt från interna';

$GLOBALS["lang"]['Update External From Internal'] = 'Uppdatera externt från interna';

$GLOBALS["lang"]['update_internal_count'] = 'Uppdatera Internal Count';

$GLOBALS["lang"]['Update Internal Count'] = 'Uppdatera Internal Count';

$GLOBALS["lang"]['update_internal_from_external'] = 'Uppdatera internt från externt';

$GLOBALS["lang"]['Update Internal From External'] = 'Uppdatera internt från externt';

$GLOBALS["lang"]['Update NMIS Devices from Open-AudIT'] = 'Uppdatera NMIS-enheter från Open-AudIT';

$GLOBALS["lang"]['Update Open-AudIT Devices from '] = 'Uppdatera Open-AudIT Enheter från ';

$GLOBALS["lang"]['Update Open-AudIT Devices from NMIS'] = 'Uppdatera Open-AudIT Enheter från NMIS';

$GLOBALS["lang"]['Updated each time discovery has been executed with IPs detected to be responding.'] = 'Uppdaterad varje gång upptäckt har genomförts med IPs upptäckt att svara.';

$GLOBALS["lang"]['Updated each time discovery has been executed with IPs that have been scanned by Nmap.'] = 'Uppdaterad varje gång upptäckt har genomförts med IPs som har skannats av Nmap.';

$GLOBALS["lang"]['Updated each time discovery has been executed with devices we were able to audit.'] = 'Uppdaterad varje gång upptäckt har genomförts med enheter som vi kunde granska.';

$GLOBALS["lang"]['Updated each time discovery has been executed with devices we were able to query.'] = 'Uppdaterad varje gång upptäckt har utförts med enheter som vi kunde fråga.';

$GLOBALS["lang"]['Updated each time discovery has been executed.'] = 'Uppdaterad varje gång upptäckt har genomförts.';

$GLOBALS["lang"]['Updated each time the discovery has been executed.'] = 'Uppdaterad varje gång upptäckten har genomförts.';

$GLOBALS["lang"]['Updated each time the discovery has completed execution.'] = 'Uppdaterad varje gång upptäckten har slutförts.';

$GLOBALS["lang"]['Updating'] = 'Uppdatering';

$GLOBALS["lang"]['Upgrade'] = 'Uppgradera';

$GLOBALS["lang"]['Upload an audit result file'] = 'Ladda upp en revisionsresultatfil';

$GLOBALS["lang"]['Upper Case'] = 'Övre fallet';

$GLOBALS["lang"]['uptime'] = 'Uptime';

$GLOBALS["lang"]['Uptime'] = 'Uptime';

$GLOBALS["lang"]['url'] = 'Url';

$GLOBALS["lang"]['Url'] = 'Url';

$GLOBALS["lang"]['Uruguay, Eastern Republic of'] = 'Uruguay, östra republiken';

$GLOBALS["lang"]['usb'] = 'Usb';

$GLOBALS["lang"]['Usb'] = 'Usb';

$GLOBALS["lang"]['use'] = 'Användning';

$GLOBALS["lang"]['Use'] = 'Användning';

$GLOBALS["lang"]['use_authentication'] = 'Använd autentisering';

$GLOBALS["lang"]['Use Authentication'] = 'Använd autentisering';

$GLOBALS["lang"]['use_authorisation'] = 'Använda tillstånd';

$GLOBALS["lang"]['Use Authorisation'] = 'Använda tillstånd';

$GLOBALS["lang"]['Use SNMP'] = 'Använd SNMP';

$GLOBALS["lang"]['Use SSH'] = 'Använd SSH';

$GLOBALS["lang"]['Use Secure (LDAPS)'] = 'Använd Secure (LDAPS)';

$GLOBALS["lang"]['Use Service Version Detection'] = 'Använd Service Version Detection';

$GLOBALS["lang"]['Use WMI'] = 'Använd WMI';

$GLOBALS["lang"]['Use for Authentication'] = 'Använd för autentisering';

$GLOBALS["lang"]['Use for Roles'] = 'Använd för Roles';

$GLOBALS["lang"]['used'] = 'Används';

$GLOBALS["lang"]['Used'] = 'Används';

$GLOBALS["lang"]['used_count'] = 'Använda Count';

$GLOBALS["lang"]['Used Count'] = 'Använda Count';

$GLOBALS["lang"]['Used by OpenLDAP only.'] = 'Används endast av OpenLDAP.';

$GLOBALS["lang"]['Used internally when discovering a single device.'] = 'Används internt när du upptäcker en enda enhet.';

$GLOBALS["lang"]['Used internally when discovering a single device. Links to <code>devices.id</code>.'] = 'Används internt när du upptäcker en enda enhet. Länkar till <code>devices.id</code>.';

$GLOBALS["lang"]['Used when LDAP servers have been configured to populate a users details - this includes the Orgs to which they have access. If a user is in this LDAP group, they are assigned this org.'] = 'Används när LDAP-servrar har konfigurerats för att fylla en användarinformation - detta inkluderar Orgs som de har tillgång till. Om en användare är i denna LDAP-grupp tilldelas de denna org.';

$GLOBALS["lang"]['Used when LDAP servers have been configured to populate a users details - this includes the Roles which they are assigned. If a user is in this LDAP group, they are assigned this role.'] = 'Används när LDAP-servrar har konfigurerats för att fylla en användarinformation - detta inkluderar Rollerna som de tilldelas. Om en användare är i denna LDAP-grupp tilldelas de denna roll.';

$GLOBALS["lang"]['Used when searching OpenLDAP to match a users uid to a groups members. Default of <code>memberUid</code>. Used by OpenLDAP only.'] = 'Används när du söker OpenLDAP för att matcha en användare som är ledsen till en grupp medlemmar. Standard för <code>memberUid</code>. Används endast av OpenLDAP.';

$GLOBALS["lang"]['Used with Integrations and FirstWave monitoring applications.'] = 'Används med Integrations och FirstWave övervakningsprogram.';

$GLOBALS["lang"]['Used with Integrations and FirstWave monitoring applications. Set to y if working SNMP detected by discovery.'] = 'Används med Integrations och FirstWave övervakningsprogram. Ange om du arbetar SNMP upptäckt av upptäckten.';

$GLOBALS["lang"]['user'] = 'Användare';

$GLOBALS["lang"]['User'] = 'Användare';

$GLOBALS["lang"]['User DN'] = 'Användar DN';

$GLOBALS["lang"]['user_group'] = 'Användargrupp';

$GLOBALS["lang"]['User Group'] = 'Användargrupp';

$GLOBALS["lang"]['user_id'] = 'Användar-ID';

$GLOBALS["lang"]['User ID'] = 'Användar-ID';

$GLOBALS["lang"]['user_interaction'] = 'Användarinteraktion';

$GLOBALS["lang"]['User Interaction'] = 'Användarinteraktion';

$GLOBALS["lang"]['User Membership Attribute'] = 'Användarmedlemskap Attribute';

$GLOBALS["lang"]['user_name'] = 'Användarnamn';

$GLOBALS["lang"]['User Name'] = 'Användarnamn';

$GLOBALS["lang"]['User Policies'] = 'Användarpolicy';

$GLOBALS["lang"]['Username'] = 'Användarnamn';

$GLOBALS["lang"]['username'] = 'Användarnamn';

$GLOBALS["lang"]['users'] = 'Användare';

$GLOBALS["lang"]['Users'] = 'Användare';

$GLOBALS["lang"]['Users, Roles and Orgs'] = 'Användare, roller och orger';

$GLOBALS["lang"]['Using Entra for Auth'] = 'Använda Entra för Auth';

$GLOBALS["lang"]['Using OKTA for Auth'] = 'Använda OKTA för Auth';

$GLOBALS["lang"]['Usually Mb/s, from Location A.'] = 'Vanligtvis Mb/s, från plats A.';

$GLOBALS["lang"]['Usually Mb/s, from Location B.'] = 'Vanligtvis Mb/s, från plats B.';

$GLOBALS["lang"]['Usually Mb/s, to Location A.'] = 'Vanligtvis Mb/s, till plats A.';

$GLOBALS["lang"]['Usually Mb/s, to Location B.'] = 'Vanligtvis Mb/s, till plats B.';

$GLOBALS["lang"]['Uzbekistan'] = 'Uzbekistan';

$GLOBALS["lang"]['VLAN'] = 'VLAN';

$GLOBALS["lang"]['VLAN ID'] = 'VLAN ID';

$GLOBALS["lang"]['valid_from'] = 'Giltigt från';

$GLOBALS["lang"]['Valid From'] = 'Giltigt från';

$GLOBALS["lang"]['valid_from_raw'] = 'Giltigt från Raw';

$GLOBALS["lang"]['Valid From Raw'] = 'Giltigt från Raw';

$GLOBALS["lang"]['valid_to'] = 'Giltigt att';

$GLOBALS["lang"]['Valid To'] = 'Giltigt att';

$GLOBALS["lang"]['valid_to_raw'] = 'Giltigt för Raw';

$GLOBALS["lang"]['Valid To Raw'] = 'Giltigt för Raw';

$GLOBALS["lang"]['Valid Values'] = 'Giltiga värden';

$GLOBALS["lang"]['value'] = 'Värde';

$GLOBALS["lang"]['Value'] = 'Värde';

$GLOBALS["lang"]['values'] = 'Värden';

$GLOBALS["lang"]['Values'] = 'Värden';

$GLOBALS["lang"]['Vanuatu'] = 'Vanuatu';

$GLOBALS["lang"]['VarChar'] = 'VarChar';

$GLOBALS["lang"]['Varchar'] = 'Varchar';

$GLOBALS["lang"]['variable'] = 'Variabel';

$GLOBALS["lang"]['Variable'] = 'Variabel';

$GLOBALS["lang"]['vendor'] = 'Leverantör';

$GLOBALS["lang"]['Vendor'] = 'Leverantör';

$GLOBALS["lang"]['vendors'] = 'Försäljare';

$GLOBALS["lang"]['Vendors'] = 'Försäljare';

$GLOBALS["lang"]['Venezuela'] = 'Venezuela';

$GLOBALS["lang"]['version'] = 'Version';

$GLOBALS["lang"]['Version'] = 'Version';

$GLOBALS["lang"]['version_padded'] = 'Version Padded';

$GLOBALS["lang"]['Version Padded'] = 'Version Padded';

$GLOBALS["lang"]['version_raw'] = 'Version Raw';

$GLOBALS["lang"]['Version Raw'] = 'Version Raw';

$GLOBALS["lang"]['version_string'] = 'Version String';

$GLOBALS["lang"]['Version String'] = 'Version String';

$GLOBALS["lang"]['video'] = 'Video';

$GLOBALS["lang"]['Video'] = 'Video';

$GLOBALS["lang"]['Vietnam'] = 'Vietnam Vietnam';

$GLOBALS["lang"]['View'] = 'Utsikt';

$GLOBALS["lang"]['View All'] = 'Visa alla';

$GLOBALS["lang"]['View Details'] = 'Visa detaljer';

$GLOBALS["lang"]['View Device'] = 'Visa enhet';

$GLOBALS["lang"]['View Discovery'] = 'View Discovery';

$GLOBALS["lang"]['View Policy'] = 'View Policy';

$GLOBALS["lang"]['Virtual Private Network'] = 'Virtuellt privat nätverk';

$GLOBALS["lang"]['Virtualisation'] = 'Virtualisering';

$GLOBALS["lang"]['Visit our YouTube channel for instructional videos.'] = 'Besök vår YouTube-kanal för instruktionsvideor.';

$GLOBALS["lang"]['vlan'] = 'Vlan';

$GLOBALS["lang"]['Vlan'] = 'Vlan';

$GLOBALS["lang"]['vlan_id'] = 'Vlan ID';

$GLOBALS["lang"]['Vlan ID'] = 'Vlan ID';

$GLOBALS["lang"]['vm'] = 'Vm';

$GLOBALS["lang"]['Vm'] = 'Vm';

$GLOBALS["lang"]['vm_device_id'] = 'Vm Device ID';

$GLOBALS["lang"]['Vm Device ID'] = 'Vm Device ID';

$GLOBALS["lang"]['vm_group'] = 'Vm Group';

$GLOBALS["lang"]['Vm Group'] = 'Vm Group';

$GLOBALS["lang"]['vm_ident'] = 'Vm Ident';

$GLOBALS["lang"]['Vm Ident'] = 'Vm Ident';

$GLOBALS["lang"]['vm_server_name'] = 'Vm Server Namn';

$GLOBALS["lang"]['Vm Server Name'] = 'Vm Server Namn';

$GLOBALS["lang"]['vm_vendor'] = 'Vm leverantör';

$GLOBALS["lang"]['Vm Vendor'] = 'Vm leverantör';

$GLOBALS["lang"]['vuln_status'] = 'Vuln Status';

$GLOBALS["lang"]['Vuln Status'] = 'Vuln Status';

$GLOBALS["lang"]['vulnerabilities'] = 'Vulnerabilitet';

$GLOBALS["lang"]['Vulnerabilities'] = 'Vulnerabilitet';

$GLOBALS["lang"]['vulnerabilities_cache'] = 'Vulnerabilities Cache';

$GLOBALS["lang"]['Vulnerabilities Cache'] = 'Vulnerabilities Cache';

$GLOBALS["lang"]['vulnerability_id'] = 'Sårbarhet ID';

$GLOBALS["lang"]['Vulnerability ID'] = 'Sårbarhet ID';

$GLOBALS["lang"]['WHERE'] = 'Vart';

$GLOBALS["lang"]['wall_port'] = 'Wall Port';

$GLOBALS["lang"]['Wall Port'] = 'Wall Port';

$GLOBALS["lang"]['Wallis and Futuna'] = 'Wallis och Futuna';

$GLOBALS["lang"]['Want to know more?'] = 'Vill du veta mer?';

$GLOBALS["lang"]['Warning'] = 'Varning';

$GLOBALS["lang"]['warranty'] = 'Garanti';

$GLOBALS["lang"]['Warranty'] = 'Garanti';

$GLOBALS["lang"]['warranty_duration'] = 'Garanti varaktighet';

$GLOBALS["lang"]['Warranty Duration'] = 'Garanti varaktighet';

$GLOBALS["lang"]['warranty_expires'] = 'Garantin löper ut';

$GLOBALS["lang"]['Warranty Expires'] = 'Garantin löper ut';

$GLOBALS["lang"]['warranty_status'] = 'Garanti Status';

$GLOBALS["lang"]['Warranty Status'] = 'Garanti Status';

$GLOBALS["lang"]['warranty_type'] = 'Garantityp';

$GLOBALS["lang"]['Warranty Type'] = 'Garantityp';

$GLOBALS["lang"]['Web'] = 'Webwebbplats';

$GLOBALS["lang"]['Webserver'] = 'Webserver';

$GLOBALS["lang"]['Website'] = 'Webbplats';

$GLOBALS["lang"]['Wednesday'] = 'Onsdag onsdag';

$GLOBALS["lang"]['weight'] = 'Vikt';

$GLOBALS["lang"]['Weight'] = 'Vikt';

$GLOBALS["lang"]['weight_current'] = 'Vikt nuvarande';

$GLOBALS["lang"]['Weight Current'] = 'Vikt nuvarande';

$GLOBALS["lang"]['weight_empty'] = 'Vikt Tom';

$GLOBALS["lang"]['Weight Empty'] = 'Vikt Tom';

$GLOBALS["lang"]['weight_max'] = 'Vikt Max';

$GLOBALS["lang"]['Weight Max'] = 'Vikt Max';

$GLOBALS["lang"]['Welcome'] = 'Välkommen';

$GLOBALS["lang"]['Welcome Dashboard'] = 'Välkommen Dashboard';

$GLOBALS["lang"]['Welcome to FirstWave Open-AudIT'] = 'Välkommen till FirstWave Open-AudIT';

$GLOBALS["lang"]['Western Sahara'] = 'Västsahara';

$GLOBALS["lang"]['What Can I Expect if I Have no Credentials'] = 'Vad kan jag förvänta mig om jag inte har några krediter';

$GLOBALS["lang"]['What is the purpose of this rack.'] = 'Vad är syftet med denna rack.';

$GLOBALS["lang"]['What is the type of this location. Allowable types held in <code>attributes</code> table.'] = 'Vad är typen av denna plats. Tillåtna typer som hålls i <code>attributes</code> tabell.';

$GLOBALS["lang"]['When integrating devices from the external system, if the device doesnt exist in Open-AudIT should we create it?'] = 'När du integrerar enheter från det externa systemet, om enheten inte finns i Open-AudIT ska vi skapa det?';

$GLOBALS["lang"]['When integrating devices from the external system, if the device has been updated in the external system should we update it in Open-AudIT?'] = 'När du integrerar enheter från det externa systemet, om enheten har uppdaterats i det externa systemet ska vi uppdatera den i Open-AudIT?';

$GLOBALS["lang"]['When retrieve an external device, should we run discovery upon it?'] = 'När du hämtar en extern enhet, ska vi köra upptäckt på den?';

$GLOBALS["lang"]['When this benchmark is scheduled to be executed. Derived from the associated <code>tasks.type</code> and <code>tasks.sub_resource_id</code>.'] = 'När detta riktmärke är planerat att genomföras. härrör från den associerade <code>tasks.type</code> och <code>tasks.sub_resource_id</code>.';

$GLOBALS["lang"]['When this log was created.'] = 'När denna logg skapades.';

$GLOBALS["lang"]['When this queue item started processing.'] = 'När detta kö objekt började bearbeta.';

$GLOBALS["lang"]['When we execute this baseline, should we check for items on devices that are not in a policy for this baseline.'] = 'När vi utför denna baslinje bör vi kontrollera objekt på enheter som inte är i en policy för denna baslinje.';

$GLOBALS["lang"]['When we receive an open port, should we attempt to test for the version of the service currently running upon it? This assists in confirming actual running services.'] = 'När vi får en öppen hamn, bör vi försöka testa för den version av den tjänst som för närvarande kör på den? Detta hjälper till att bekräfta faktiska driftstjänster.';

$GLOBALS["lang"]['where'] = 'Var där';

$GLOBALS["lang"]['Where'] = 'Var där';

$GLOBALS["lang"]['Where on the Device Details screen you would like to see this field appear.'] = 'Var på skärmen Enhetsdetaljer vill du se detta fält visas.';

$GLOBALS["lang"]['Where the rack is in the row.'] = 'Där racket är i raden.';

$GLOBALS["lang"]['Whether the vulnerability affects components beyond its own using Impact, Availability and Confidentiality.'] = 'Oavsett om sårbarheten påverkar komponenter bortom sin egen användning av Impact, Availability and Confidentiality.';

$GLOBALS["lang"]['Whether user interaction is required (None, Passive, Active).'] = 'Om användarinteraktion krävs (ingen, passiv, aktiv).';

$GLOBALS["lang"]['Which OS this benchmark applies to.'] = 'Vilket OS detta riktmärke gäller.';

$GLOBALS["lang"]['Which devices should Open-AudIT create from the external system (if any). Using All, None or a given Attribute.'] = 'Vilka enheter bör Open-AudIT skapas från det externa systemet (om något). Använda alla, ingen eller ett givet attribut.';

$GLOBALS["lang"]['Which sub-menu should we display this query in.'] = 'Vilken undermeny ska vi visa denna fråga i.';

$GLOBALS["lang"]['Who made this rack.'] = 'Vem gjorde detta rack.';

$GLOBALS["lang"]['Why Windows Server Only?'] = 'Varför Windows Server bara?';

$GLOBALS["lang"]['Why do we exclude this policy?'] = 'Varför utesluter vi denna policy?';

$GLOBALS["lang"]['Wide Area Network'] = 'Wide Area Network';

$GLOBALS["lang"]['Widget'] = 'Widget';

$GLOBALS["lang"]['Widget # '] = 'Widget # ';

$GLOBALS["lang"]['Widget Type'] = 'Widget Type';

$GLOBALS["lang"]['widgets'] = 'Widgets';

$GLOBALS["lang"]['Widgets'] = 'Widgets';

$GLOBALS["lang"]['width'] = 'Bredd';

$GLOBALS["lang"]['Width'] = 'Bredd';

$GLOBALS["lang"]['windows'] = 'Windows Windows';

$GLOBALS["lang"]['Windows'] = 'Windows Windows';

$GLOBALS["lang"]['Windows Test Script'] = 'Windows Test Script';

$GLOBALS["lang"]['Wireless Local Area Network'] = 'Wireless Local Area Network';

$GLOBALS["lang"]['wmi_fails'] = 'Wmi misslyckas';

$GLOBALS["lang"]['Wmi Fails'] = 'Wmi misslyckas';

$GLOBALS["lang"]['wmi_timeout'] = 'Wmi Timeout';

$GLOBALS["lang"]['Wmi Timeout'] = 'Wmi Timeout';

$GLOBALS["lang"]['workgroup'] = 'Arbetsgrupp';

$GLOBALS["lang"]['Workgroup'] = 'Arbetsgrupp';

$GLOBALS["lang"]['Working Credentials'] = 'Working Credentials';

$GLOBALS["lang"]['XML'] = 'XML';

$GLOBALS["lang"]['Yellow Query'] = 'Gula Query';

$GLOBALS["lang"]['Yemen'] = 'Jemen';

$GLOBALS["lang"]['Yes'] = 'Ja ja ja ja ja';

$GLOBALS["lang"]['You may want to copy and paste this URL in an email to your staff.'] = 'Du kanske vill kopiera och klistra in denna URL i ett e-postmeddelande till din personal.';

$GLOBALS["lang"]['You must delete your existing license before adding a new license.'] = 'Du måste ta bort din befintliga licens innan du lägger till en ny licens.';

$GLOBALS["lang"]['YouTube Tutorials'] = 'YouTube Tutorials';

$GLOBALS["lang"]['Your AWS EC2 API key.'] = 'AWS EC2 API-nyckeln.';

$GLOBALS["lang"]['Your Google Compute credentials as JSON.'] = 'Dina Google Compute-uppgifter som JSON.';

$GLOBALS["lang"]['Your Licenses'] = 'Dina licenser';

$GLOBALS["lang"]['Your Microsoft Azure Client ID.'] = 'Ditt Microsoft Azure Client ID.';

$GLOBALS["lang"]['Your Microsoft Azure Client Secret.'] = 'Din Microsoft Azure Client Secret.';

$GLOBALS["lang"]['Your Microsoft Azure Subscription ID.'] = 'Ditt Microsoft Azure-prenumerations-ID.';

$GLOBALS["lang"]['Your Microsoft Azure Tennant ID.'] = 'Microsoft Azure Tennant ID.';

$GLOBALS["lang"]['Your SQL to select attributes that will populate this query.'] = 'Din SQL för att välja attribut som kommer att fylla denna fråga.';

$GLOBALS["lang"]['Your SQL to select devices that will populate this group.'] = 'Din SQL för att välja enheter som kommer att fylla denna grupp.';

$GLOBALS["lang"]['Your SSH key.'] = 'Din SSH nyckel.';

$GLOBALS["lang"]['Your access credentials, as per that clouds native API.'] = 'Din åtkomst referenser, enligt det moln infödda API.';

$GLOBALS["lang"]['Your description of the status of this connection (provisioned, retired, etc).'] = 'Din beskrivning av statusen för denna anslutning (tillhandahållen, pensionerad etc).';

$GLOBALS["lang"]['Your description of this item.'] = 'Din beskrivning av detta objekt.';

$GLOBALS["lang"]['Your generic name for this piece of software'] = 'Ditt generiska namn för denna mjukvara';

$GLOBALS["lang"]['Your generic version for this piece of software'] = 'Din generiska version för denna mjukvara';

$GLOBALS["lang"]['Zambia'] = 'Zambia';

$GLOBALS["lang"]['Zimbabwe'] = 'Zimbabwe';

$GLOBALS["lang"]['active'] = 'aktiv aktiv aktiv aktiv';

$GLOBALS["lang"]['active directory'] = 'aktiv katalog';

$GLOBALS["lang"]['active/active'] = 'aktiv/aktiv aktiv';

$GLOBALS["lang"]['active/passive'] = 'aktiv/passiv';

$GLOBALS["lang"]['advertisement'] = 'annons';

$GLOBALS["lang"]['alert'] = 'Varning';

$GLOBALS["lang"]['all'] = 'Alla alla';

$GLOBALS["lang"]['allocated'] = 'allokerade';

$GLOBALS["lang"]['amazon'] = 'Amazon';

$GLOBALS["lang"]['antivirus'] = 'antivirus';

$GLOBALS["lang"]['application'] = 'Ansökan';

$GLOBALS["lang"]['approved'] = 'Godkänd';

$GLOBALS["lang"]['attribute'] = 'attribut';

$GLOBALS["lang"]['auto'] = 'auto auto auto';

$GLOBALS["lang"]['backup'] = 'backup';

$GLOBALS["lang"]['banned'] = 'Förbjudet';

$GLOBALS["lang"]['blog'] = 'Blogg';

$GLOBALS["lang"]['bottom'] = 'botten botten';

$GLOBALS["lang"]['browser_lang'] = 'browser_lang';

$GLOBALS["lang"]['building'] = 'byggnadsbyggnad';

$GLOBALS["lang"]['cloud'] = 'moln moln';

$GLOBALS["lang"]['code'] = 'kodkodkod';

$GLOBALS["lang"]['collector'] = 'samlare';

$GLOBALS["lang"]['compute'] = 'Beräkning';

$GLOBALS["lang"]['config'] = 'Konfig';

$GLOBALS["lang"]['contains'] = 'innehåller';

$GLOBALS["lang"]['create'] = 'skapa';

$GLOBALS["lang"]['created'] = 'skapat skapat';

$GLOBALS["lang"]['critical'] = 'kritisk kritisk';

$GLOBALS["lang"]['cve'] = 'Cve';

$GLOBALS["lang"]['database'] = 'Databasdata';

$GLOBALS["lang"]['debug'] = 'Debug';

$GLOBALS["lang"]['delegated'] = 'Delegerad';

$GLOBALS["lang"]['delete'] = 'ta bort';

$GLOBALS["lang"]['deleted'] = 'raderad';

$GLOBALS["lang"]['denied'] = 'förnekar';

$GLOBALS["lang"]['devices'] = 'Enheter';

$GLOBALS["lang"]['digitalocean'] = 'Digitalocean';

$GLOBALS["lang"]['does not equal'] = 'inte lika';

$GLOBALS["lang"]['emergency'] = 'nödsituation';

$GLOBALS["lang"]['entra'] = 'Entra';

$GLOBALS["lang"]['equals'] = 'lika';

$GLOBALS["lang"]['error'] = 'fel';

$GLOBALS["lang"]['established'] = 'etablerad';

$GLOBALS["lang"]['excluded'] = 'exkluderad';

$GLOBALS["lang"]['expired'] = 'utgångna';

$GLOBALS["lang"]['extreme - Without which, the organisation would fail.

very high - Functions that are essential for the organisations survival and must be restored immediately.

high - Important functions that should be restored quickly but may have a slightly longer recovery time.

medium - Functions that are necessary but can tolerate longer downtime.

low - Non-essential functions that can be delayed without significant impact.

unassigned - The default until set.'] = 'Utan vilket skulle organisationen misslyckas.

Mycket hög - Funktioner som är nödvändiga för organisationernas överlevnad och måste återställas omedelbart.

höga - Viktiga funktioner som ska återställas snabbt men kan ha en något längre återhämtningstid.

Medium - Funktioner som är nödvändiga men kan tolerera längre driftstopp.

låga - Icke väsentliga funktioner som kan fördröjas utan betydande inverkan.

otillåten - Standarden tills den är inställd.';

$GLOBALS["lang"]['fail'] = 'misslyckas';

$GLOBALS["lang"]['false'] = 'falska lögner';

$GLOBALS["lang"]['file'] = 'fil';

$GLOBALS["lang"]['firewall'] = 'Brandvägg';

$GLOBALS["lang"]['fixed'] = 'Fast';

$GLOBALS["lang"]['floor'] = 'golvgolv';

$GLOBALS["lang"]['front'] = 'Framsidan';

$GLOBALS["lang"]['front-left'] = 'front-vänster';

$GLOBALS["lang"]['front-right'] = 'Fram-höger';

$GLOBALS["lang"]['github'] = 'github';

$GLOBALS["lang"]['google'] = 'Google';

$GLOBALS["lang"]['greater or equals'] = 'större eller lika';

$GLOBALS["lang"]['greater than'] = 'större än';

$GLOBALS["lang"]['group'] = 'gruppgrupp';

$GLOBALS["lang"]['head'] = 'huvud';

$GLOBALS["lang"]['here'] = 'här här här';

$GLOBALS["lang"]['high availability'] = 'hög tillgänglighet';

$GLOBALS["lang"]['howto'] = 'Hur';

$GLOBALS["lang"]['ignored'] = 'ignorerad';

$GLOBALS["lang"]['in'] = 'in i';

$GLOBALS["lang"]['inactive'] = 'Inaktiv';

$GLOBALS["lang"]['incomplete'] = 'ofullständig';

$GLOBALS["lang"]['info'] = 'info info info';

$GLOBALS["lang"]['int, text, bool (y/n), etc'] = 'Int, text, bool (y/n), etc.';

$GLOBALS["lang"]['is licensed to'] = 'är licensierad till';

$GLOBALS["lang"]['left'] = 'vänster';

$GLOBALS["lang"]['less or equals'] = 'mindre eller lika';

$GLOBALS["lang"]['less than'] = 'mindre än';

$GLOBALS["lang"]['license'] = 'licens';

$GLOBALS["lang"]['like'] = 'som liknar';

$GLOBALS["lang"]['line'] = 'linje';

$GLOBALS["lang"]['load balancing'] = 'lastbalansering';

$GLOBALS["lang"]['location'] = 'plats';

$GLOBALS["lang"]['managed'] = 'Hanterad';

$GLOBALS["lang"]['microsoft'] = 'mikrosoft';

$GLOBALS["lang"]['mount point'] = 'Mount Point';

$GLOBALS["lang"]['network'] = 'nätverk';

$GLOBALS["lang"]['news'] = 'Nyhet';

$GLOBALS["lang"]['no'] = 'Ingen';

$GLOBALS["lang"]['node'] = 'Nod';

$GLOBALS["lang"]['none'] = 'Ingen';

$GLOBALS["lang"]['normal'] = 'normalt normalt';

$GLOBALS["lang"]['not applicable'] = 'inte tillämpligt';

$GLOBALS["lang"]['not in'] = 'Inte i';

$GLOBALS["lang"]['not like'] = 'Inte gillar';

$GLOBALS["lang"]['notice'] = 'Notera';

$GLOBALS["lang"]['notification'] = 'anmälan';

$GLOBALS["lang"]['okta'] = 'okta';

$GLOBALS["lang"]['openldap'] = 'openldap';

$GLOBALS["lang"]['optimized'] = 'optimerad';

$GLOBALS["lang"]['optionally '] = 'valfritt ';

$GLOBALS["lang"]['other'] = 'andra';

$GLOBALS["lang"]['package'] = 'Paketpaket';

$GLOBALS["lang"]['partition'] = 'Partition';

$GLOBALS["lang"]['pass'] = 'passerar';

$GLOBALS["lang"]['pending'] = 'i väntan';

$GLOBALS["lang"]['performance'] = 'prestanda';

$GLOBALS["lang"]['performed'] = 'utförd';

$GLOBALS["lang"]['pie'] = 'Pie';

$GLOBALS["lang"]['planning'] = 'Planering';

$GLOBALS["lang"]['predictable'] = 'förutsägbar';

$GLOBALS["lang"]['query'] = 'Fråga';

$GLOBALS["lang"]['rear'] = 'bak';

$GLOBALS["lang"]['rear-left'] = 'Rear-left';

$GLOBALS["lang"]['rear-right'] = 'Rear-Rätt';

$GLOBALS["lang"]['regex'] = 'Regex';

$GLOBALS["lang"]['release'] = 'release';

$GLOBALS["lang"]['reserved'] = 'reserverad';

$GLOBALS["lang"]['right'] = 'rätt';

$GLOBALS["lang"]['room'] = 'rum rum rum';

$GLOBALS["lang"]['row'] = 'rad';

$GLOBALS["lang"]['stand-alone'] = 'Stand-alone';

$GLOBALS["lang"]['standard'] = 'standard';

$GLOBALS["lang"]['starts with'] = 'Börjar med';

$GLOBALS["lang"]['storage'] = 'Lagring lagring';

$GLOBALS["lang"]['timestamp'] = 'timestamp';

$GLOBALS["lang"]['top'] = 'toppen';

$GLOBALS["lang"]['top secret - Military / Government classification. Disclosure would cause exceptionally grave danger to national security.

secret - Military / Government classification. Disclosure would cause serious damage to national security.

confidential - Military / Government and Private Sector classification. Data that is confidential includes trade secrets, intellectual data, application programming code, and other data that could seriously affect the organization if unauthorized disclosure occurred. Data at this level would be available only to personnel in the organization whose work needs, or is directly related to, the accessed data. Access to confidential data usually requires authorization for each access.

private - Private Sector classification. Data that is private includes any information related to personnel, including human resources records, medical records, and salary information, that is used only within the organization.

sensitive - Military / Government and Private Sector classification. Data that is sensitive includes organizational financial information and requires extra measures to ensure its CIA and accuracy. Disclosure might harm national security.

public - Private Sector classification. Public data is data that is generally shared with the public and would not cause a negative impact on the organization. Examples of public data include how many people work in the organization and what products an organization manufactures or sells.

unclassified - Military / Government classification. Any information that can generally be distributed to the public without any threat to national interest.

unassigned - The default until set.'] = 'topphemlighet - militär / regeringsklassificering. Avslöjande skulle orsaka exceptionellt allvarlig fara för nationell säkerhet.

Hemlighet - Militär / regeringsklassificering. Upplysningar skulle orsaka allvarliga skador på nationell säkerhet.

konfidentiell - militär / regering och privat sektor klassificering. Uppgifter som är konfidentiella inkluderar handelshemligheter, intellektuella data, applikationsprogramkod och andra data som allvarligt kan påverka organisationen om obehörig avslöjande inträffade. Uppgifter på denna nivå skulle endast vara tillgängliga för personal i den organisation vars arbetsbehov, eller är direkt relaterad till, åtkomstdata. Tillgång till konfidentiella data kräver vanligtvis tillstånd för varje åtkomst.

Privat sektor klassificering. Data som är privat inkluderar all information relaterad till personal, inklusive personalregister, journaler och löneinformation, som endast används inom organisationen.

Känslig - Militär / regering och privat sektor klassificering. Data som är känslig inkluderar organisatorisk finansiell information och kräver extra åtgärder för att säkerställa dess CIA och noggrannhet. Upplysningar kan skada nationell säkerhet.

offentlig - Privat sektor klassificering. Offentliga data är data som i allmänhet delas med allmänheten och skulle inte orsaka en negativ inverkan på organisationen. Exempel på offentliga data inkluderar hur många som arbetar i organisationen och vilka produkter en organisation tillverkar eller säljer.

oklassificerad - militär / regeringsklassificering. All information som i allmänhet kan delas ut till allmänheten utan något hot mot nationellt intresse.

otillåten - Standarden tills den är inställd.';

$GLOBALS["lang"]['traffic'] = 'trafiktrafiktrafik';

$GLOBALS["lang"]['true'] = 'sanning sant';

$GLOBALS["lang"]['unallocated'] = 'Unallocated';

$GLOBALS["lang"]['unauthorised'] = 'obehörig';

$GLOBALS["lang"]['unknown'] = 'Okänd';

$GLOBALS["lang"]['unmanaged'] = 'Unmanaged';

$GLOBALS["lang"]['unused'] = 'Oanvänd';

$GLOBALS["lang"]['update'] = 'Uppdatering';

$GLOBALS["lang"]['valid'] = 'giltigt';

$GLOBALS["lang"]['virtualisation'] = 'virtualisering';

$GLOBALS["lang"]['warning'] = 'Varning';

$GLOBALS["lang"]['web'] = 'Webwebbplats';

$GLOBALS["lang"]['yes'] = 'ja ja';

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

