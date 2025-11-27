<?php
$GLOBALS["lang"][' Default, currently '] = ' Noklusētais, pašlaik ';

$GLOBALS["lang"][' If something does not work as expected, your first thing to do is check the logs.'] = ' Ja kaut kas nedarbojas, kā gaidīts, jūsu pirmā lieta, ko darīt, ir pārbaudīt žurnālus.';

$GLOBALS["lang"][' is now supported with a language file. To change your user to use this language, click '] = ' tagad tiek atbalstīts ar valodas failu. Lai mainītu lietotāju lietot šo valodu, noklikšķiniet uz ';

$GLOBALS["lang"][' seconds'] = ' sekundes';

$GLOBALS["lang"][', but will not need to remember a separate set of logon credentials.'] = ', bet nav nepieciešams atcerēties atsevišķu komplektu logon akreditācijas.';

$GLOBALS["lang"][', of which we supply over thirty as a default set. Professional users cannot alter these, but an Enterprise user has complete customisation abilities - including creating your own.'] = ', no kuriem mēs piegādājam vairāk nekā trīsdesmit kā noklusējuma komplekts. Profesionāli lietotāji tos nevar mainīt, bet uzņēmumam ir pilnīgas pielāgošanas spējas, tostarp sava veida radīšana.';

$GLOBALS["lang"][', you <i>must</i> be using https on your Open-AudIT server to use Entra for Auth. Please configure Apache to use <strong>https</strong> before configuring Entra for auth.'] = ', tu <i>nav</i> izmanto https savā Open-AudIT serverī, lai izmantotu Entra for Auth. Lūdzu konfigurējiet Apache, ko lietot <strong>https</strong> pirms konfigurācijas Entra for auth.';

$GLOBALS["lang"]['. To enable this, edit the configuration item for '] = '. Lai ieslēgtu šo, rediģējiet konfigurācijas ierakstu ';

$GLOBALS["lang"]['10 Minutes'] = '10 protokols';

$GLOBALS["lang"]['15 Minutes'] = '15 minūtes';

$GLOBALS["lang"]['30 Minutes'] = '30 protokols';

$GLOBALS["lang"]['5 Minutes'] = '5 Protokols';

$GLOBALS["lang"]['93 controls grouped into organizational, people, physical, and technological categories'] = '93 kontroles grupētas organizatoriskajās, cilvēku, fizisko, un tehnoloģiju kategorijās';

$GLOBALS["lang"]['<br> <strong>NOTE</strong> - You are accessing this URL from the local Open-AudIT server. The downloaded script will not be able to submit when run on any other machine. If you need to audit other machines, please download the script from any remote machine, not using a browser on the Open-AudIT server itself.'] = '<br/><strong>Piezīme</strong> - Jūs piekļūstat šim URL no vietējā Open- AudIT servera. Lejupielādētais skripts nevarēs iesniegt, kad tiks darbināta kāda cita mašīna. Ja nepieciešams pārbaudīt citas iekārtas, lūdzu, lejupielādējiet skriptu no jebkuras attālinātas mašīnas, neizmantojot pārlūkprogrammu pašā Open-AudIT serverī.';

$GLOBALS["lang"]['<p></p>'] = '<p></p>';

$GLOBALS["lang"]['<p><strong class="text-danger">NOTE</strong> - You must have working SSH or SSH Key credentials to execute benchmarks upon a target device.</p>'] = '<p><strong class="text-danger">Piezīme</strong> - Jums ir jāstrādā SSH vai SSH Key akreditācijas, lai izpildītu etalonus uz mērķa ierīces.</p>';

$GLOBALS["lang"]['<p><strong>Baseline</strong> - The overarching document that contains the baseline definition and the individual policy tests.<br> <br> <strong>Policies</strong> - The individual tests contained within a Baseline. Each test is for a specific item. An example would be testing for SSH version 1.2.3.<br> <br> <strong>Details</strong> - Baselines can compare netstat ports, users and software.<br> <br> <strong>Software</strong> - To compare software we check the name and version. Because version numbers are not all standardised in format, when we receive an audit result we create a new attribute called software_padded which we store in the database along with the rest of the software details for each package. For this reason, baselines using software policies will not work when run against a device that has not been audited by 1.10 (at least). Software policies can test against the version being "equal to", "greater than" or "equal to or greater than".<br> <br> <strong>Netstat Ports</strong> - Netstat Ports use a combination of port number, protocol and program. If all are present the policy passes.<br> <br> <strong>Users</strong> - Users work similar to Netstat Ports. If a user exists with a matching name, status and password details (changeable, expires, required) then the policy passes.<br> <br> </p>'] = '<p><strong>Bāzlīnija</strong> - Vispārējais dokuments, kas satur bāzes definīciju un individuālos politikas testus.<br/> <br/> <strong>Politika</strong> - Individuālie testi, kas ietverti bāzes scenārijā. Katrs tests attiecas uz konkrētu priekšmetu. Piemērs būtu SSH 1.2.3. versijas testēšana.<br/> <br/> <strong>Detaļas</strong> - Bāzes līnijas var salīdzināt netstat ostas, lietotājus un programmatūru.<br/> <br/> <strong>Programmatūra</strong> - Lai salīdzinātu programmatūru, mēs pārbaudām nosaukumu un versiju. Jo versiju numuri nav visi standartizēti formātā, kad mēs saņemam audita rezultātu, mēs izveidojam jaunu atribūtu, ko sauc par software_padded, kuru mēs uzglabājam datu bāzē kopā ar pārējo programmatūras informāciju par katru pakotni. Šā iemesla dēļ bāzes līnijas, kurās izmanto programmatūras politiku, nedarbosies, ja tās darbosies pret ierīci, kurai nav veikta revīzija saskaņā ar 1.10. punktu (vismaz). Programmatūras politika var pārbaudīt pret versiju "vienlīdzīgs", "lielāks nekā" vai "vienāds vai lielāks nekā".<br/> <br/> <strong>Netstat ostas</strong> - Netstat ostas izmanto kombināciju ostas numuru, protokolu un programmu. Ja visi ir klāt, politika iet.<br/> <br/> <strong>Lietotāji</strong> - Lietotāji strādā līdzīgi Netstat ostas. Ja lietotājs eksistē ar atbilstošu nosaukumu, statusu un paroli (maināms, beidzas, nepieciešams) tad politika iet.<br/> <br/> </p>';

$GLOBALS["lang"]['<p>A location is a physical address that can have devices associated with it.<br> <br>You can assign it coordinates (lat/long) and if there are devices assigned, the location will appear on the Open-AudIT Enterprise map.<br> <br></p>'] = '<p>Atrašanās vieta ir fiziska adrese, kurai var būt ar to saistītas ierīces.<br/> <br/>Jūs varat piešķirt tā koordinātas (lat / gar) un, ja ir ierīces piešķirts, atrašanās vieta parādīsies Open-AudIT Enterprise kartē.<br/> <br/></p>';

$GLOBALS["lang"]['<p>A network is derived from discovery entries and device attributes.<br> <br></p>'] = '<p>Tīkls ir atvasināts no atklāšanas ierakstiem un ierīces atribūtiem.<br/> <br/></p>';

$GLOBALS["lang"]['<p>A summary will display a list of items, grouped by the distinct values of the attribute specified by the <code>table</code> and <code>column</code> attributes.<br> <br>When a summary is executed, the result will be a list of distinct values for that <code>table</code> and <code>column</code>. There will be links on the values that allow the user to see the matching devices.<br> <br>If the attribute of <code>extra_columns</code> is populated, the resulting page will contain these columns in addition to the standard device columns.<br> <br></p>'] = '<p>Kopsavilkumā tiks parādīts vienību saraksts, kas sagrupēts pēc atribūta, kuru norāda <code>table</code> kā arī <code>column</code> atribūti.<br/> <br/>Ja tiek sagatavots kopsavilkums, rezultāts būs atsevišķu vērtību saraksts. <code>table</code> kā arī <code>column</code>. Būs saites uz vērtībām, kas ļauj lietotājam redzēt saskaņošanas ierīces.<br/> <br/>Ja atribūts <code>extra_columns</code> ir aizpildīta, rezultātā lapā būs šīs kolonnas papildus standarta ierīces kolonnas.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Agents let you audit PCs without a discovery. Install the agent and it will check-in with the server each day and audit itself. It does not matter if your computers are firewalled, audit data will still appear in Open-AudIT.</p><p>When testing <strong>if</strong> an agent should perform actions, all three tests must pass (if the test is set). <strong>Then</strong> the actions are taken.</p>'] = '<p>Aģenti ļauj jums auditēt datorus bez atklājuma. Instalējiet aģentu un tas reģistrēsies ar serveri katru dienu un auditē sevi. Nav svarīgi, vai jūsu datori ir ugunsmūri, revīzijas dati joprojām parādīsies Open-AudIT.</p><p>Pārbaudot <strong>ja</strong> aģents veic darbības, visi trīs testi ir izturējuši (ja tests ir iestatīts). <strong>Tad</strong> darbības tiek veiktas.</p>';

$GLOBALS["lang"]['<p>Applications are defined by you, the user and stored for Open-AudIT to use and associate with devices.<br> <br></p>'] = '<p>Lietotnes definē jūs, lietotājs un glabā Open-AudIT, lai lietotu un asociētos ar ierīcēm.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Attributes are stored for Open-AudIT to use for particular fields.</p>'] = '<p>Atribūti tiek glabāti, lai Open-AudIT varētu izmantot konkrētos laukos.</p>';

$GLOBALS["lang"]['<p>Being able to determine which machines are configured the same is a major part of systems administration and auditing &ndash; and now reporting on that will be made simple and automated. Once you define your baseline it will automatically run against a set of devices on a predetermined schedule. The output of these executed baselines will be available for web viewing, importing into a third party system or even as a printed report.<br> <br> Baselines enable you to combine audit data with a set of attributes you have previously defined (your baseline) to determine compliance of devices.<br> <br> For example - you might create a baseline from a device running Centos 6 which acts as one of your apache servers in a cluster. You know this particular server is configured just the way you want it but you are unsure if other servers in the cluster are configured exactly the same. Baselines enables you to determine this.<br> <br> </p>'] = '<p>Spēja noteikt, kuras mašīnas ir konfigurētas pats ir liela daļa no sistēmu administrēšanas un audita - un tagad ziņošana par to būs vienkārša un automatizēta. Kad jūs definēt savu bāzes līniju, tas automātiski darbojas pret ierīču komplektu iepriekš noteiktā grafikā. Šo izpildīto bāzes līniju produkcija būs pieejama tīmekļa apskatīšanai, importēšanai trešās puses sistēmā vai pat kā drukāts ziņojums.<br/> <br/> Bāzes līnijas ļauj apvienot audita datus ar iepriekš definētu atribūtu kopumu (jūsu bāzes līnijas), lai noteiktu ierīču atbilstību.<br/> <br/> Piemēram - jūs varat izveidot bāzes līniju no ierīces, kas darbojas Centos 6, kas darbojas kā viens no jūsu apache serveriem klasterī. Jūs zināt, šis konkrētais serveris ir konfigurēts tieši tā, kā vēlaties to, bet jūs neesat pārliecināts, vai citi serveri klasterī ir konfigurēti tieši tāpat. Bāzes līnijas ļauj to noteikt.<br/> <br/> </p>';

$GLOBALS["lang"]['<p>Clusters are stored in Open-AudIT to associate devices to better record, manage and estimate licensing costs.<br> <br></p>'] = '<p>Kopas tiek glabātas Open-AudIT, lai asociētu ierīces, lai labāk reģistrētu, pārvaldītu un novērtētu licencēšanas izmaksas.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Components is a generic term used for the tables that store the attributes for a device. Those tables are: access_point, arp, bios, certificate, cli_config, disk, dns, file, ip, license, log, memory, module, monitor, motherboard, netstat, network, nmap, optical, pagefile, partition, policy, print_queue, processor, radio, route, san, scsi, server, server_item, service, share, software, software_key, sound, task, usb, user, user_group, variable, video, vm, windows.</p><p> In addition we class the following tables also as device related: application, attachment, cluster, credential, image.</p>'] = '<p>Sastāvdaļas ir vispārīgs termins, ko lieto tabulām, kurās uzglabā ierīces atribūtus. Šīs tabulas ir: access_point, arp, bios, sertifikāts, cli_config, disks, dns, fails, ip, licence, log, atmiņa, modulis, monitors, pamatplate, netstat, tīkls, nmap, optic, pagefile, nodalījums, politika, print_queue, procesors, radio, maršruts, san, scusi, serveris, serveris_item, pakalpojums, koplietošana, programmatūra, programmatūra_key, skaņa, uzdevums, usb, lietotājs, lietotāja_grupa, mainīgais, video, vm, logi.</p><p> Turklāt mēs šķirojam sekojošas tabulas arī kā ierīces saistītas: aplikācija, piestiprinājums, klasteris, kredentāls, attēls.</p>';

$GLOBALS["lang"]['<p>Credentials are encrypted when stored in the database.<br> <br>When a Discovery is run, a device has its credentials retrieved and tested for connection first (from the <code>credential</code> table). If these fail, then credentials associated with the given Org <code>credentials.org_id</code> is also tested against the device. Working credentials are stored at an individual device level in the credential table (note - no "s" in the table name).<br> <br>SSH keys are tested before SSH username / password. When testing SSH, credentials will also be marked as working with sudo or being root.<br> <br>For ease of use, Windows passwords should not contain a single or double quote. This is a remote WMI limitation, not an Open-AudIT limitation.<br> <br></p>'] = '<p>Datubāzē saglabātie dati tiek šifrēti.<br/> <br/>Kad tiek palaists Discovery, ierīcei vispirms tiek ielādēti dati un pārbaudīta pieslēgšanās (no <code>credential</code> tabulu). Ja tās neizdodas, tad pilnvaras, kas saistītas ar doto Org <code>credentials.org_id</code> pārbauda arī pret ierīci. Darba akreditācijas dati tiek glabāti atsevišķas ierīces līmenī akreditācijas tabulā (piezīme - nav "s" tabulas nosaukumā).<br/> <br/>SSH atslēgas tiek pārbaudītas pirms SSH lietotājvārda / paroles. Pārbaudot SSH, tiks atzīmēti arī kā darbi ar sudo vai saknes.<br/> <br/>Lai atvieglotu lietošanu, Windows paroles nedrīkst saturēt vienu vai dubultu citātu. Šis ir attālināts WMI ierobežojums, nevis Open-AudIT ierobežojums.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Credentials are used to access devices.<br> <br>Configuring credentials should be one of the first things you do after installing Open-AudIT.<br> <br></p>'] = '<p>Lai piekļūtu ierīcēm, tiek izmantoti kredenti.<br/> <br/>Konfigurācijas datiem jābūt vienai no pirmajām lietām, ko jūs darāt pēc Open-AudIT uzstādīšanas.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Define your racks and assign devices into their positions. You already have your devices in Open-AudIT and you know your locations. Open-AudIT extends this to allow you to create a rack and assign devices to it. Open-AudIT will even provide a visualisation of the rack and the devices contained within. If you provide a device picture, that picture will be used in the visualisation. You can look at the rack on the screen and see the same items you would see if you were standing in front of it.<br> <br></p>'] = '<p>Noteikt jūsu plaukti un piešķirt ierīces savās pozīcijās. Jums jau ir savas ierīces Open-AudIT un jūs zināt savas vietas. Open-AudIT paplašina šo, lai ļautu jums izveidot plauktu un piešķirt tam ierīces. Open-AudIT pat nodrošinās plaukta un tajā esošo ierīču vizualizāciju. Ja jūs sniedzat ierīces attēlu, šo attēlu izmantos vizualizācijai. Jūs varat apskatīt plauktu uz ekrāna un redzēt tos pašus priekšmetus jūs redzētu, ja jūs stāvēja priekšā no tā.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Devices on your network need to be managed. But how do you keep your records up to date? A spreadsheet - defintley not. That will be out of date in hours, if not days. Why manually try to keep up. Use Open-AudIT to automatically scan your networks and record your devices - manufacturer, model, serial and more than 100 other attributes. Full lists of software, services, disks, open ports, users, etc. Automatically see if an attribute has been added, removed or changed.<br> <br>Once Open-AudIT is setup, you can sit back and relax. Have change reports emailed to you on a schedule, for example - what new devices did we discover this week? What new software was installed this week? Were there any hardware changes last month?<br> <br>Expand on the stored fields easily with your own custom attributes.<br> <br>Even add devices that are not connected to your network or those devices your Open-AudIT server cannot reach.<br> <br>Computers, switches, routers, printers or any other device on your network - Open-AudIT can audit them all.<br> <br></p>'] = '<p>Tīkla ierīces ir jāpārvalda. Bet kā jūs savus ierakstus regulāri atjaunināt? Izklājlapu - nedefintley. Tas būs novecojusi stundas, ja ne dienas. Kāpēc manuāli mēģināt sekot līdzi. Izmantojiet Open-AudIT, lai automātiski skenētu savus tīklus un ierakstītu savas ierīces - ražotāju, modeli, seriālu un vairāk nekā 100 citus atribūtus. Pilni programmatūras, pakalpojumu, disku, atvērto ostu, lietotāju u.c. saraksti. Automātiski redzēt, vai atribūts ir pievienots, noņemts vai mainīts.<br/> <br/>Kad Open-AudIT ir iestatīts, jūs varat sēdēt un atpūsties. Ir izmaiņas ziņojumi e-pasta jums par grafiku, piemēram, - kādas jaunas ierīces mēs atklājām šonedēļ? Kāda jauna programmatūra tika uzstādīta šonedēļ? Vai pagājušajā mēnesī mainījās aparatūra?<br/> <br/>Izvērst uz saglabātajiem laukiem viegli ar saviem pielāgotajiem atribūtiem.<br/> <br/>Pat pievienot ierīces, kas nav savienotas ar jūsu tīklu, vai tās ierīces, kuras nevar sasniegt jūsu Open-AudIT serveri.<br/> <br/>Datori, slēdži, maršrutētāji, printeri vai jebkura cita ierīce jūsu tīklā - Open-AudIT var auditēt tos visus.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Discoveries are at the very heart of what Open-AudIT does.<br> <br>How else would you know "What is on my network?"<br> <br>Discoveries are prepared data items that enable you to run a discovery upon a network in a single click, without entering the details of that network each and every time.<br> <br></p>'] = '<p>Atklājumi ir pašā centrā to, ko Open-AudIT dara.<br/> <br/>Kā citādi jūs zināt, "Kas ir manā tīklā?"<br/> <br/>Atklājumi ir sagatavoti datu elementi, kas ļauj palaist atklājumu tīklā ar vienu klikšķi, neievadot šī tīkla detaļas katru reizi.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Discovery Options are a global setting changed in the <a href="../configuration?configuration.name=discovery_default_scan_option">configuration</a>. If you have an Open-AudIT Enterprise license these are settable per discovery and in addition futher customizable as required. Discovery Options are as follows (including an indicitave time to scan an individual IP):<br/><br><strong>UltraFast</strong>: <i>1 second</i>. Scan only the ports that Open-AudIT needs to use to talk to the device and detect an IOS device (WMI, SSH, SNMP, Apple Sync). An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is not considered open. Device must respond to an Nmap ping. Use aggressive timing.<br><br/><strong>SuperFast</strong>: <i>5 seconds</i>. Scan the top 10 TCP and UDP ports, as well as port 62078 (Apple IOS detection). An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is not considered open. Device must respond to an Nmap ping. Use aggressive timing.<br/><br/><strong>Fast</strong>: <i>40 seconds</i>. Scan the top 100 TCP and UDP ports, as well as port 62078 (Apple IOS detection). An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is not considered open. Device must respond to an Nmap ping. Use aggressive timing.<br/><br/><strong>Medium (Classic)</strong>: <i>90 seconds</i>. As close to a traditional Open-AudIT scan as we can make it. Scan the top 1000 TCP ports, as well as 62078 (Apple IOS detection) and UDP 161 (SNMP). An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is considered open (and will trigger device detection). Devices are scanned regardless of a response to an Nmap ping. Use aggressive timing.<br/><br/><strong>Medium</strong>: <i>100 seconds</i>. Scan the top 1000 TCP and top 100 UDP ports, as well as port 62078 (Apple IOS detection). An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is not considered open. Device must respond to an Nmap ping. Use aggressive timing.<br/><br/><strong>Slow</strong>: <i>4 minutes</i>. Scan the top 1000 TCP and top 100 UDP ports, as well as port 62078 (Apple IOS detection). Version detection enabled. An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is considered open (and will trigger device detection). Device must respond to an Nmap ping. Use normal timing.<br/><br/><strong>UltraSlow</strong>: <i>20 minutes</i>. Not recommended. Scan the top 1000 TCP and UDP ports, as well as port 62078 (Apple IOS detection). Devices are scanned regardless of a response to an Nmap ping. Version detection enabled. An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is considered open (and will trigger device detection). Use polite timing.<br/><br/><strong>Custom</strong>: <i>Unknown time</i>. When options other than as set by a standard discovery preset are altered.<br><br></p>'] = '<p>Atklājums Iespējas ir globāla vide, kas mainīta <a href="../configuration?configuration.name=discovery_default_scan_option">konfigurācija</a>. Ja jums ir Open-AudIT Enterprise licence tie ir setable vienu atklājumu un papildus pielāgojams, kā nepieciešams. Atklājums Iespējamie varianti ir šādi (tostarp individuāls IP skenēšanas laiks):<br/><br/><strong>UltraFast</strong>: <i>1 sekunde</i>. Skenēt tikai pieslēgvietas, kuras Open-AudIT nepieciešams izmantot, lai runātu ar ierīci un noteiktu IOS ierīci (WMI, SSH, SNMP, Apple Sync). An <code>open|filtered</code> ports tiek uzskatīts par atvērtu. A <code>filtered</code> ports netiek uzskatīts par atvērtu. Ierīcei jāatbild uz Nmap ping. Izmantot agresīvu laiku.<br/><br><strong>SuperFast</strong>: <i>5 sekundes</i>. Skenēt top 10 TCP un UDP portus, kā arī portu 62078 (Apple IOS noteikšana). An <code>open|filtered</code> ports tiek uzskatīts par atvērtu. A <code>filtered</code> ports netiek uzskatīts par atvērtu. Ierīcei jāatbild uz Nmap ping. Izmantot agresīvu laiku.<br><br/><strong>Ātri</strong>: <i>40 sekundes</i>. Skenēt top 100 TCP un UDP portus, kā arī portu 62078 (Apple IOS noteikšana). An <code>open|filtered</code> ports tiek uzskatīts par atvērtu. A <code>filtered</code> ports netiek uzskatīts par atvērtu. Ierīcei jāatbild uz Nmap ping. Izmantot agresīvu laiku.<br/><br/><strong>Vidējs (klasisks)</strong>: <i>90 sekundes</i>. Tik tuvu tradicionālajai Open-AudIT skenēšanai, cik vien varam. Skenēt top 1000 TCP portus, kā arī 62078 (Apple IOS noteikšana) un UDP 161 (SNMP). An <code>open|filtered</code> ports tiek uzskatīts par atvērtu. A <code>filtered</code> ports tiek uzskatīts par atvērtu (un izraisīs ierīces atklāšanu). Ierīces tiek skenētas neatkarīgi no atbildes uz Nmap ping. Izmantot agresīvu laiku.<br/><br/><strong>Vidējs</strong>: <i>100 sekundes</i>. Skenēt top 1000 TCP un top 100 UDP portus, kā arī portu 62078 (Apple IOS noteikšana). An <code>open|filtered</code> ports tiek uzskatīts par atvērtu. A <code>filtered</code> ports netiek uzskatīts par atvērtu. Ierīcei jāatbild uz Nmap ping. Izmantot agresīvu laiku.<br/><br/><strong>Lēni</strong>: <i>4 minūtes</i>. Skenēt top 1000 TCP un top 100 UDP portus, kā arī portu 62078 (Apple IOS noteikšana). Versijas noteikšana atļauta. An <code>open|filtered</code> ports tiek uzskatīts par atvērtu. A <code>filtered</code> ports tiek uzskatīts par atvērtu (un izraisīs ierīces atklāšanu). Ierīcei jāatbild uz Nmap ping. Izmantojiet parasto laiku.<br/><br/><strong>UltraSlow</strong>: <i>20 minūtes</i>. Nav ieteicama. Skenēt top 1000 TCP un UDP portus, kā arī portu 62078 (Apple IOS noteikšana). Ierīces tiek skenētas neatkarīgi no atbildes uz Nmap ping. Versijas noteikšana atļauta. An <code>open|filtered</code> ports tiek uzskatīts par atvērtu. A <code>filtered</code> ports tiek uzskatīts par atvērtu (un izraisīs ierīces atklāšanu). Izmantojiet pieklājīgu laiku.<br/><br/><strong>Pielāgots</strong>: <i>Nezināms laiks</i>. Ja tiek mainītas citas opcijas, kas nav iestatītas ar standarta meklēšanas regulējumu.<br/><br/></br></br></p>';

$GLOBALS["lang"]['<p>Groups are used as simple lists of devices that match the required conditions. If requested using JSON they return a list of <code>devices.id</code> only. If requested using the web interface, they return the standard column attribute list.<br> <br></p>'] = '<p>Grupas tiek izmantotas kā vienkārši ierīču saraksti, kas atbilst nepieciešamajiem nosacījumiem. Ja tiek pieprasīts, izmantojot JSON, viņi nosūta sarakstu ar <code>devices.id</code> tikai. Ja tiek pieprasīts, izmantojot tīmekļa saskarni, viņi atgriež standarta kolonnas atribūtu sarakstu.<br/> <br/></p>';

$GLOBALS["lang"]['<p>If the user logging on to Open-AudIT does not have the access to search LDAP (and you are using OpenLDAP), you can use another account which does have this access. Use the <code>ldap_dn_account</code> and <code>ldap_dn_password</code> to configure this.<br> <br><strong>Helpful Documentation</strong><br> <br>
        <a href="/index.php/auth/help">General Auth Help</a><br> <br>
        <a href="/index.php/faq?name=Using Entra for Auth">Using Entra for Auth</a><br> <br>
        <a href="/index.php/faq?name=Using OKTA for Auth">Using OKTA for Auth</a><br> <br>
        <a href="/index.php/faq?name=Troubleshooting LDAP Logins">Troubleshooting LDAP Logins</a><br> <br>
        <a href="/index.php/faq?name=Users, Roles and Orgs">Users, Roles and Orgs</a><br> <br></p>'] = '<p>Ja lietotājam, kas piesakās Open-AudIT, nav piekļuves meklēšanai LDAP (un jūs izmantojat OpenLDAP), varat izmantot citu kontu, kuram ir šī piekļuve. Lietojiet <code>ldap_dn_account</code> kā arī <code>ldap_dn_password</code> konfigurēt šo.<br/> <br/><strong>Dokumentācija</strong><br/> <br/><a href="/index.php/auth/help">Ģenerālis Auth Help</a><br/> <br/><a href="/index.php/faq?name=Using Entra for Auth">Entra lietošana Auth vajadzībām</a><br/> <br/><a href="/index.php/faq?name=Using OKTA for Auth">OKTA izmantošana Auth vajadzībām</a><br/> <br/><a href="/index.php/faq?name=Troubleshooting LDAP Logins">Problēmu novēršana LDAP pieteikšanās</a><br/> <br/><a href="/index.php/faq?name=Users, Roles and Orgs">Lietotāji, lomas un orgi</a><br/> <br/></p>';

$GLOBALS["lang"]['<p>If you add a device type, to display the associated icon you will have to manually copy the .svg formatted file to the directory:<br><em>Linux</em>:/usr/local/open-audit/public/device_images<br><em>Windows</em>: c:\xampp\htdocs\open-audit\device_images<br> <br>If you add a location type, to display the associated icon you will have to manually copy the 32x32px icon to the directory:<br><em>Linux</em>:/usr/local/open-audit/public/images/map_icons<br><em>Windows</em>: c:\xampp\htdocs\open-audit\images\map_icons</p><p>When the <i>resource</i> is a <code>device</code>, valid <i>types</i> are: <code>class</code>, <code>environment</code>, <code>status</code> and <code>type</code>. If the <i>resource</i> is <code>locations</code> or <code>org</code> the only valid <i>type</i> is <code>type</code>. If the <i>resource</i> is a <code>query</code> the only valid <i>type</i> is <code>menu_category</code>.</p>'] = '<p>Ja jūs pievienot ierīces tipu, lai parādītu saistīto ikonu jums būs manuāli kopēt .svg formatēts failu direktorijā:<br/><em>Linux</em>:/pašreizējās/vietējās/atklātās revīzijas/publiskās/ierīces_attēli<br/><em>Logi</em>: c:\ xampp\ htdocs\ open-audit\ device_images<br/> <br/>Pievienojot vietas tipu, lai attēlotu saistīto ikonu, jums būs manuāli jākopē direktorijā 32x32px ikona:<br/><em>Linux</em>:/lietotājs/vietējs/atklāts audits/publisks/attēli/map_icons<br/><em>Logi</em>: c:\ xampp\ htdocs\ open-audit\ images\ map_icons</p><p>Kad no <i>resurss</i> s ta rē <code>device</code>, derīgs <i>tipi</i> ir šādi: <code>class</code>, <code>environment</code>, <code>status</code> kā arī <code>type</code>. Ja no <i>resurss</i> ir <code>locations</code> vai <code>org</code> vienīgais derīgais <i>Veids</i> ir <code>type</code>. Ja no <i>resurss</i> s ta rē <code>query</code> vienīgais derīgais <i>Veids</i> ir <code>menu_category</code>.</p>';

$GLOBALS["lang"]['<p>If you intend to completely audit your cloud machines, do not forget you will also need those credentials saved in Open-AudIT.</p><p>Make sure you allow the correct ports if you are using Microsoft Azure (22 for SSH, etc). Check your Virtual Machine -> Networking rules.<br> <br></p>'] = '<p>Ja plānojat pilnībā pārbaudīt mākoņa iekārtas, neaizmirstiet, ka jums būs nepieciešami arī Open-AudIT dati.</p><p>Ja izmantojat Microsoft Azure (22 SSH, u.c.), pārliecinieties, ka atspējojat pareizos portus. Pārbaudi savu Virtuālo Mašīnu Tīkla veidošanas noteikumi.<br/> <br/></p>';

$GLOBALS["lang"]['<p>If you select a List type, the "values" field will be enabled. You should put a comma separated list of selectable values here. These will display in a dropdown box whenever the field is edited.<br> <br>Like most other attributes, Fields can be bulk edited. Use the Bulk Edit function as you normally would and you will see the Fields are available for input.<br> <br>View the device details screen, open the section containing the field and (if you have sufficient access) you can click on the field value to edit it.<br> <br></p>'] = '<p>Izvēloties Saraksta tipu, tiks ieslēgts "vērtību" lauks. Šeit jums vajadzētu ievietot ar komatu atdalītu izvēlēto vērtību sarakstu. Tie tiks parādīti nolaižamajā kastē ikreiz, kad lauks tiks rediģēts.<br/> <br/>Tāpat kā lielākā daļa citu atribūtu, lauciņus var beztaras rediģēt. Izmantojiet Bulk Edit funkciju kā parasti, un jūs redzēsiet lauki ir pieejami ievadei.<br/> <br/>Skatiet ierīces detaļu ekrānu, atveriet lauku saturošo sadaļu un (ja jums ir pietiekama piekļuve) varat noklikšķināt uz lauka vērtības, lai to rediģētu.<br/> <br/></p>';

$GLOBALS["lang"]['<p>In the ever-changing world of computer security where new vulnerabilities are being discovered and patched every day, enforcing security compliance must be a continuous process. It also needs to include a way to make adjustments to policies, as well as periodic assessment and risk monitoring. The OpenSCAP ecosystem provides tools and customizable policies for a quick, cost-effective and flexible implementation of these processes.</p>'] = '<p>Pastāvīgi mainīgajā datoru drošības pasaulē, kur katru dienu tiek atklātas jaunas vājās vietas, drošības prasību ievērošanas nodrošināšanai ir jābūt nepārtrauktam procesam. Tajā jāietver arī veids, kā veikt politikas pielāgojumus, kā arī periodiska novērtēšana un riska uzraudzība. OpenSCAP ekosistēma nodrošina instrumentus un pielāgojamu politiku šo procesu ātrai, rentablai un elastīgai īstenošanai.</p>';

$GLOBALS["lang"]['<p>Integrations allow you to setup device selection and schedules for Open-AudIT to talk to external systems.<br> <br></p>'] = '<p>Integrācijas ļauj jums iestatīt ierīces izvēli un grafikus Open-AudIT, lai runātu ar ārējām sistēmām.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Microsoft Windows desktop systems have network limitations that may impact the performance of Open-AudIT. The TCP/IP stack limits the number of simultaneous incomplete outbound TCP connection attempts. After the limit is reached, subsequent connection attempts are put in a queue and will be resolved at a fixed rate (10 per second). If too many enter the queue, they may be dropped. And finally, Apache will be restarted by the OS. For this reason, installing Open-AudIT on a Windows desktop operating system is not supported.<br><br>There is nothing wrong with the Open-AudIT code, nor can we do anything to address this issue on Windows client machines.'] = '<p>Microsoft Windows darbvirsmas sistēmām ir tīkla ierobežojumi, kas var ietekmēt Open-AudIT veiktspēju. TCP/IP steks ierobežo vienlaicīgi nepabeigtu izejošo TCP savienojuma mēģinājumu skaitu. Pēc tam, kad robeža ir sasniegta, turpmākie savienojuma mēģinājumi tiek likti rindā un tiks atrisināti ar fiksētu likmi (10 sekundē). Ja rindā ienāk pārāk daudz cilvēku, viņus var nomest. Un visbeidzot, Apache tiks restartēts ar OS. Šī iemesla dēļ Open-AudIT uzstādīšana Windows darbvirsmas operētājsistēmā nav atbalstīta.<br/><br/>Nav nekas nepareizs ar Open-AudIT kodu, nedz arī mēs varam kaut ko darīt, lai risinātu šo jautājumu Windows klientu ierīcēs.</p>';

$GLOBALS["lang"]['<p>Nmap timing details are found on the bottom of this linked page <a href="https://nmap.org/book/man-performance.html" target="_blank">https://nmap.org/book/man-performance.html</a>. From that page:<br> <br><em>If you are on a decent broadband or ethernet connection, I would recommend always using -T4 (Aggressive). Some people love -T5 (Insane) though it is too aggressive for my taste. People sometimes specify -T2 (Polite) because they think it is less likely to crash hosts or because they consider themselves to be polite in general. They often do not realize just how slow -T2 really is. Their scan may take ten times longer than a default scan. Machine crashes and bandwidth problems are rare with the default timing options -T3 (Normal) and so I normally recommend that for cautious scanners. Omitting version detection is far more effective than playing with timing values at reducing these problems.</em><footer>Gordon <i>Fyodor</i> Lyon</footer><br> <br></p>'] = '<p>Nmap laika detaļas ir atrodamas šīs saistītās lapas apakšā <a href="https://nmap.org/book/man-performance.html" target="_blank">https://nmap.org/book/man-performance.html</a>. No šīs lapas:<br/> <br/><em>Ja jums ir pienācīgas platjoslas vai ethernet savienojumu, es ieteiktu vienmēr izmantot -T4 (Agresīvs). Daži cilvēki mīl -T5 (Insane), lai gan tas ir pārāk agresīvs manai gaumei. Cilvēki dažreiz norāda -T2 (Polite), jo viņi domā, ka tas ir mazāk iespējams crash hosts vai tāpēc, ka viņi uzskata sevi par pieklājīgs vispār. Viņi bieži vien nesaprot, cik lēns ir T2. To skenēšana var ilgt desmit reizes ilgāk nekā noklusējuma skenēšana. Mašīnas avārijas un joslas platuma problēmas ir reti ar noklusējuma laika iespējas -T3 (Normal) un tāpēc es parasti ieteiktu, ka piesardzīgiem skeneriem. Omitēšanas versiju noteikšana ir daudz efektīvāka nekā spēlēšana ar laika vērtībām, lai samazinātu šīs problēmas.</em><footer>Gordons <i>Fyodor</i> Liona</footer><br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT can be configured to use different methods to authenticate a user and in addition, to create a user account using assigned roles and orgs based on group membership.<br> <br></p>'] = '<p>Open-AudIT var konfigurēt, lai lietotu dažādas metodes autentificēt lietotāju un papildus, lai izveidotu lietotāja kontu, izmantojot piešķirtās lomas un orgs pamatojoties uz grupas dalību.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT can retrieve details about a file or directory of files and monitor these files for changes as per other attributes in the Open-AudIT database.<br> <br>This feature works out of the box for Linux Open-AudIT servers, but needs a change to the service account name under a Windows Open-AudIT server.<br> <br>Supported clients are Windows and Linux.<br> <br></p>'] = '<p>Atvērts IT var iegūt detaļas par failu vai direktoriju failu un uzraudzīt šos failus izmaiņām, kā saskaņā ar citiem atribūtiem Open-AudIT datubāzē.<br/> <br/>Šī funkcija darbojas no loga Linux Open-AudIT serveriem, bet nepieciešama pakalpojuma konta nosaukuma maiņa zem Windows Open-AudIT servera.<br/> <br/>Atbalstītie klienti ir Windows un Linux.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT can retrieve details about a file, ask the native package manager if they are known to it and monitor these files for changes as per other attributes in the Open-AudIT database.<br> <br>Supported clients are Linux only.<br> <br></p>'] = '<p>Atvērts IT var iegūt informāciju par failu, pajautāt vietējo pakotņu pārvaldniekam, ja tie ir zināmi, un uzraudzīt šos failus izmaiņām, kā citu atribūtu Open-AudIT datubāzē.<br/> <br/>Atbalstītie klienti ir tikai Linux.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT can store information in custom fields that are associated with each device.<br> <br>Once an Additional Field has been created it can be used in queries and groups just like any other attribute in the database.<br> <br></p>'] = '<p>Atvērts IT var uzglabāt informāciju pielāgotos laukos, kas ir saistīti ar katru ierīci.<br/> <br/>Kad Papildu lauks ir izveidots, to var izmantot vaicājumos un grupās tāpat kā jebkuru citu atribūtu datubāzē.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT comes with many queries inbuilt. If you require a specific query and none of the pre-packaged queries fit your needs, it is quite easy to create a new one and load it into Open-AudIT for running.<br> <br></p>'] = '<p>Open-AudIT nāk ar daudziem jautājumiem iebūvēta. Ja jums ir nepieciešams konkrēts vaicājums un neviens no fasētajiem vaicājumiem neatbilst jūsu vajadzībām, ir diezgan viegli izveidot jaunu un ielādēt to Open-AudIT darbībai.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT comes with many summaries inbuilt. If you require a specific summary and none of the pre-packaged summaries fit your needs, it is quite easy to create a new one and load it into Open-AudIT for running.<br> <br></p>'] = '<p>Open-AudIT nāk ar daudziem kopsavilkumiem iebūvēta. Ja jums ir nepieciešams konkrēts kopsavilkums un neviens no fasētiem kopsavilkumiem neatbilst jūsu vajadzībām, tas ir diezgan viegli izveidot jaunu un ielādēt to Open-AudIT darbībai.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT is supported by FirstWave with an amazing level of support. If you prefer an active community of support givers, theres that as well. Where else can you talk directly to the developers and get a response within 24 hours? Just try that with other products! Amazing support. Full stop. You need support, we provide support. No ifs or buts. Great support. Period.<br> <br></p>'] = '<p>Open-AudIT atbalsta FirstWave ar apbrīnojamu atbalsta līmeni. Ja jūs dodat priekšroku aktīvai kopienai, kas sniedz atbalstu, tur arī tas. Kur vēl jūs varat runāt tieši ar izstrādātājiem un saņemt atbildi 24 stundu laikā? Vienkārši izmēģināt, ka ar citiem produktiem! Pārsteidzošs atbalsts. Apstājies. Jums ir nepieciešams atbalsts, mēs sniedzam atbalstu. Nē, ja vai buts. Liels atbalsts. Punkts.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT provides multi-tenancy out of the box!<br> <br>Orgs (organisations) in Open-AudIT are a key item. A user has a primary Org as well as a list of Orgs they can access. A user combines this with a list of assigned "Roles" that define what actions they can take on items assigned to the Orgs they have access to. The combination of a users "orgs" and "roles" define what they can and cannot do within Open-AudIT.<br> <br>Most items in Open-AudIT are assigned to an Org. Devices, Locations, Networks, etc.<br> <br>Orgs can have child Orgs. Think of an organisational chart (tree) structure. If a user has access to a specific Org, they also have access to that Orgs descendants. For more information, see this <a href="/index.php/faq?name=Users, Roles and Orgs">FAQ</a>.</p>'] = '<p>Open-AudIT nodrošina multi-tenancy no kastes!<br/> <br/>Orgs (organizācijas) Open-AudIT ir galvenais elements. Lietotājam ir primārā Org, kā arī saraksts ar Orgs viņi var piekļūt. Lietotājs to apvieno ar piešķirto "Roles" sarakstu, kas nosaka, kādas darbības viņi var veikt uz orgiem piešķirtajiem priekšmetiem, kuriem viņi var piekļūt. Lietotāju "orgu" un "lomu" kombinācija definē, ko viņi var un nevar darīt Open-AudIT ietvaros.<br/> <br/>Lielākā daļa Open-AudIT elementu tiek piešķirti Org ierīcēm, atrašanās vietām, tīkliem utt.<br/> <br/>Orgs var būt bērns Orgs. Padomājiet par organizācijas diagrammas (koku) struktūru. Ja lietotājam ir piekļuve konkrētai Org, viņiem ir piekļuve arī šim Orgs pēctečiem. Sīkākai informācijai skatīt šo <a href="/index.php/faq?name=Users, Roles and Orgs">BUJ</a>.</p>';

$GLOBALS["lang"]['<p>Open-AudIT provides multi-tenancy out of the box!<br> <br>Orgs (organisations) in Open-AudIT are a key item. A user has a primary Org as well as a list of Orgs they can access. A user combines this with a list of assigned "Roles" that define what actions they can take on items assigned to the Orgs they have access to. The combination of a users "orgs" and "roles" define what they can and cannot do within Open-AudIT.<br> <br>Most items in Open-AudIT are assigned to an Org. Devices, Locations, Networks, etc.<br> <br>Orgs can have child Orgs. Think of an organisational chart (tree) structure. If a user has access to a specific Org, they also have access to that Orgs descendants.</p>'] = '<p>Open-AudIT nodrošina multi-tenancy no kastes!<br/> <br/>Orgs (organizācijas) Open-AudIT ir galvenais elements. Lietotājam ir primārā Org, kā arī saraksts ar Orgs viņi var piekļūt. Lietotājs to apvieno ar piešķirto "Roles" sarakstu, kas nosaka, kādas darbības viņi var veikt uz orgiem piešķirtajiem priekšmetiem, kuriem viņi var piekļūt. Lietotāju "orgu" un "lomu" kombinācija definē, ko viņi var un nevar darīt Open-AudIT ietvaros.<br/> <br/>Lielākā daļa Open-AudIT elementu tiek piešķirti Org ierīcēm, atrašanās vietām, tīkliem utt.<br/> <br/>Orgs var būt bērns Orgs. Padomājiet par organizācijas diagrammas (koku) struktūru. Ja lietotājam ir piekļuve konkrētai Org, viņiem ir piekļuve arī šim Orgs pēctečiem.</p>';

$GLOBALS["lang"]['<p>Quickly view the status of devices on your network.<br> <br></p>'] = '<p>Ātri skatiet jūsu tīklā esošo ierīču statusu.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Roles in Open-AudIT are a key item. A user has a primary Org as well as a list of Orgs they can access. A user combines this with a list of assigned Roles that define what actions they can take on items assigned to the Orgs they have access to. The combination of a users "orgs" and "roles" define what they can and cannot do within Open-AudIT.<br> <br>
        Get the complete Open-AudIT Enterprise experience. Creating roles allows fine grained control over what your users can do within Open-AudIT.<br> <br>
        The primary method for authorisation (what a user can do) is based on the users Roles. Default roles are defined as admin, org_admin, reporter and user. Each role has a set of permissions (Create, Read, Update, Delete) for each endpoint. The ability to define additional roles and edit existing roles is enabled in Open-AudIT Enterprise.<br> <br>Roles can also be used with LDAP (Active Directory and OpenLDAP) authorisation. Enterprise licensed installations have the ability to customise the LDAP group for each defined role.<br> <br></p>'] = '<p>Lomas atklātā laukā IT ir galvenais elements. Lietotājam ir primārā Org, kā arī saraksts ar Orgs viņi var piekļūt. Lietotājs to apvieno ar piešķirto lomu sarakstu, kas nosaka, kādas darbības viņi var veikt ar priekšmetiem, kas viņiem ir pieejami. Lietotāju "orgu" un "lomu" kombinācija definē, ko viņi var un nevar darīt Open-AudIT ietvaros.<br/> <br/>Iegūstiet pilnu Open-AudIT Enterprise pieredzi. Radīt lomas ļauj smalki graudains kontrolēt to, ko jūsu lietotāji var darīt Open-AudIT ietvaros.<br/> <br/>Primārā autorizācijas metode (ko lietotājs var darīt) ir balstīta uz lietotāju lomām. Noklusētās lomas ir definētas kā admin, org_admin, reportieris un lietotājs. Katrai lomai ir atļauju kopums (Radīt, Lasīt, Atjaunināt, Dzēst) katram mērķa kritērijam. Spēja definēt papildu lomas un rediģēt esošās lomas ir iespējota Open-AudIT Enterprise.<br/> <br/>Lomas var izmantot arī ar LDAP (Active Directory un OpenLDAP) atļauju. Uzņēmuma licencētās instalācijas spēj pielāgot LDAP grupu katrai definētai lomai.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Rules examine attributes and make cahnges based on the appropriate rule.</p>'] = '<p>Noteikumi izskata atribūtus un padara kahnzes, pamatojoties uz attiecīgo noteikumu.</p>';

$GLOBALS["lang"]['<p>Scanning options allow you to easily apply a set of options to a discovery.<br> <br></p>'] = '<p>Skenēšanas opcijas ļauj viegli izmantot meklēšanas iespējas.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Simple, intuitive, accurate geographic mapping provided by Google Maps. Open-AudIT leverages Google Maps to provide live, interactive geographic mapping of device locations. Automated conversion of street addresses to geocodes and longitude / latitude.<br> <br>
        </p>'] = '<p>Vienkārša, intuitīva, precīza ģeogrāfiskā kartēšana, ko nodrošina Google Maps. Open-AudIT sviras Google Maps nodrošina ierīču atrašanās vietu tiešraidi, interaktīvu ģeogrāfisko kartēšanu. Automatizēta pārveidošana ielu adreses uz ģeokodiem un garuma / platuma.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Software Packages are used to determine if antivirus, backup, firewall, approved or banned software is installed.<br> <br></p>'] = '<p>Programmatūras paketes tiek izmantotas, lai noteiktu, vai ir uzstādīta antivīrusa, rezerves, ugunsmūra, apstiprināta vai aizliegta programmatūra.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Some examples of valid Subnet attributes are: 192.168.1.1 (a single IP address), 192.168.1.0/24 (a subnet), 192.168.1-3.1-20 (a range of IP addresses).<br> <br><em>NOTE</em> - Only a subnet (as per the examples - 192.168.1.0/24) will be able to automatically create a valid network for Open-AudIT. <br> <br>If you use an Active Directory type, make sure you have appropriate credentials to talk to your Domain Controller already in <a href="../credentials">credentials</a>.<br> <br></p>'] = '<p>Daži derīgu Subnet atribūtu piemēri ir: 192.168.1.1 (viena IP adrese), 192.168.1.0/24 (apakštīkls), 192.168.1-3.1.-20 (IP adrešu diapazons).<br/> <br/><em>Piezīme</em> - Tikai apakštīkls (kā piemēram - 192.168.1.0/24) varēs automātiski izveidot derīgu tīklu Open-AudIT. <br/> <br/>Ja izmantojat Active Directory tipu, pārliecinieties, ka jums ir atbilstošas pilnvaras runāt ar savu domēna kontrolieri jau <a href="../credentials">pilnvaras</a>.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Standards are stored in Open-AudIT.<br /><br /><br /><br /></p>'] = '<p>Standarti tiek glabāti Open-AudIT.<br/><br/><br/><br/></p>';

$GLOBALS["lang"]['<p>Supported clients are Linux only.<br> <br></p>'] = '<p>Atbalstītie klienti ir tikai Linux.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Tasks have a schedule that mirrors the unix cron schedule. The attributes for minute, hour, day_of_month, month, day_of_week all act as per the cron definitions. You can select multiples of these using comma seperated values (no spaces). You can select every value using *.<br> <br>The <code>type</code> of the task can be one of: baselines, collectors, discoveries, queries, reports or summaries.<br> <br>If you wish to schedule a Baseline or Discovery, you will need to create these before creating the tasks. You must use the ID of the type of item in <code>sub_resource_id</code>. For example if you wish to schedule a Discovery, use that particular Discoveries ID in <code>sub_resource_id</code>.<br> <br>The value for <code>uuid</code> is specific to each Open-AudIT server. Your unique value can be found in the configuration.<br> <br>The <code>options</code> attribute is a JSON document containing any extra attributes required to run the task. The extra attributes for reports, queries and summaries are: <code>email_address</code> and <code>format</code>. The extra attribute for Bselines is <code>group_id</code>.<br> <br></p>'] = '<p>Uzdevumi ir grafiks, kas atspoguļo unix cron grafiku. Raksturlielumi minūte, stunda, diena_mēnesis, mēnesis, diena_nedēļa visi darbojas saskaņā ar cron definīcijas. Izmantojot komata seperētās vērtības (nav atstarpju), varat izvēlēties vairākus no tiem. Jūs varat izvēlēties katru vērtību, izmantojot *.<br/> <br/>E ir o pa s <code>type</code> uzdevums var būt viens no: bāzes, savācēji, atklājumi, vaicājumi, ziņojumi vai kopsavilkumi.<br/> <br/>Ja vēlaties ieplānot bāzes līniju vai Discovery, jums būs nepieciešams, lai izveidotu šos uzdevumus. Jums jāizmanto vienības veida ID <code>sub_resource_id</code>. Piemēram, ja vēlaties plānot Discovery, izmantojiet šo konkrēto Discoveries ID <code>sub_resource_id</code>.<br/> <br/>Vērtība <code>uuid</code> ir specifiska katram Open-AudIT serverim. Jūsu unikālo vērtību var atrast konfigurācijā.<br/> <br/>E ir o pa s <code>options</code> atribūts ir JSON dokuments, kas satur papildu atribūtus, kuri nepieciešami uzdevuma veikšanai. Papildu atribūti ziņojumiem, vaicājumiem un kopsavilkumiem ir: <code>email_address</code> kā arī <code>format</code>. Papildu atribūts Bselines ir <code>group_id</code>.<br/> <br/></p>';

$GLOBALS["lang"]['<p>The <code>type</code> of the location will assign its icon.<br> <br></p>'] = '<p>E ir o pa s <code>type</code> no vietas piešķirs savu ikonu.<br/> <br/></p>';

$GLOBALS["lang"]['<p>The Attributes endpoint allows you to add customized values to different attributes in Open-AudIT, at the moment this feature works on the Class, Environment, Status and Type attributes on Devices, the Type attribute for both Locations and Orgs as well as the Menu Category for Queries. If you view an item of one of the prvious types (say view a Lkocation) you will notice the Type attribute must be selected from a drop-down box. This is where those values are stored. Hence, if you would like to add a new Type to be chosen for a Location, add it using the Attributes feature.</p>'] = '<p>Atribūtu galapunkts ļauj pievienot pielāgotās vērtības dažādiem Open-AudIT atribūtiem, brīdī, kad šī funkcija darbojas uz Klases, vides, statusa un tipa atribūtiem ierīcēs, tipa atribūtu gan atrašanās vietām, gan orgiem, kā arī izvēlnes kategoriju vaicājumiem. Ja jūs apskatīt objektu no viena no neprātīgs veidiem (say apskatīt Lkocation), jūs ievērosiet Type atribūts ir jāizvēlas nolaižamā lodziņā. Šeit šīs vērtības tiek glabātas. Tātad, ja vēlaties pievienot jaunu tipu, kas tiks izvēlēts atrašanās vietai, pievienojiet to, izmantojot atribūtu funkciju.</p>';

$GLOBALS["lang"]['<p>The Collectors feature enables you to easily manage many "collector" computers that perform network discovery. All Collectors are centrally controlled from the Server. The only required network ports between the Collector and the Server are 80 and/or 443.<br> <br>It makes managing disparate networks quick, easy and simple. Open-AudIT Enterprise licensees get a single collector license included and have the option to buy more as required..<br> <br></p>'] = '<p>Kolekcionāru funkcija ļauj viegli pārvaldīt daudzus "kolektoru" datorus, kas veic tīkla atklāšanu. Visi kolekcionāri tiek centralizēti kontrolēti no servera. Vienīgās vajadzīgās tīkla pieslēgvietas starp kolektoru un serveri ir 80 un/vai 443.<br/> <br/>Tas padara atšķirīgu tīklu pārvaldību ātru, vieglu un vienkāršu. Open-AudIT Enterprise licenciāti saņem vienu kolekcionāra licenci un ir iespēja iegādāties vairāk, kā nepieciešams..<br/> <br/></p>';

$GLOBALS["lang"]['<p>The SELECT section of your SQL <em>must</em> contain fully qualified columns. IE - <code>SELECT devices.id AS `devices.id`, devices.name AS `devices.name` ...</code>.<br> <br>The WHERE section of your SQL <em>must</em> contain <code>WHERE @filter</code> so Open-AudIT knows to restrict your query to the appropriate Orgs. SQL not containing this condition will result in the query failing to be created, unless you have the Admin role.<br> <br>An example query SQL showing attributes on devices that have an <code>os_group</code> attribute of "Linux" - <br><code>SELECT devices.id AS `devices.id`, devices.icon AS `devices.icon`, devices.type AS `devices.type`, devices.name AS `devices.name`, devices.os_name AS `devices.os_name` FROM devices WHERE @filter AND devices.os_group = "Linux"</code><br> <br></p>'] = '<p>Jūsu SQL sadaļa SELECT <em>nav</em> satur pilnībā atbilstošas kolonnas. IE - <code>SELECT devices.id AS `devices.id`, devices.name AS `devices.name` ...</code>.<br/> <br/>KUR SQL sadaļa <em>nav</em> satur <code>WHERE @filter</code> Tātad Open-AudIT zina, lai ierobežotu savu vaicājumu ar atbilstošu Orgs. SQL nav šī nosacījuma rezultātā vaicājums netiek izveidots, ja vien jums nav Admin loma.<br/> <br/>Piemēra vaicājums SQL, kas rāda atribūtus ierīcēs, kurām ir <code>os_group</code> "Linux" atribūts - <br/><code>SELECT devices.id AS `devices.id`, devices.icon AS `devices.icon`, devices.type AS `devices.type`, devices.name AS `devices.name`, devices.os_name AS `devices.os_name` FROM devices WHERE @filter AND devices.os_group = "Linux"</code><br/> <br/></p>';

$GLOBALS["lang"]['<p>The SELECT section of your SQL <em>must</em> only contain <code>DISTINCT(devices.id)</code>.<br> <br>The WHERE section of your SQL <em>must</em> contain <code>WHERE @filter</code> so Open-AudIT knows to restrict your query to the appropriate Orgs. SQL not containing this condition will result in the group failing to be created.<br> <br>An example for SQL to select all devices running the Debian OS - <code>SELECT DISTINCT(devices.id) FROM devices WHERE @filter AND devices.os_family = "Debian"</code><br> <br></p>'] = '<p>Jūsu SQL sadaļa SELECT <em>nav</em> satur tikai <code>DISTINCT(devices.id)</code>.<br/> <br/>KUR SQL sadaļa <em>nav</em> satur <code>WHERE @filter</code> Tātad Open-AudIT zina, lai ierobežotu savu vaicājumu ar atbilstošu Orgs. SQL, kas nesatur šo nosacījumu, rezultātā grupa netiks izveidota.<br/> <br/>Piemērs SQL, lai izvēlētos visas ierīces, kas darbojas Debian OS - <code>SELECT DISTINCT(devices.id) FROM devices WHERE @filter AND devices.os_family = "Debian"</code><br/> <br/></p>';

$GLOBALS["lang"]['<p>The license endpoint allows you to track the number of licenses found on your devices.<br> <br>To create an entry to track your licenses you <em>must</em> to provide a name, an organization, the number of licenses acquired and the name of the software. On the field <code>match_string</code> you must provide the name of the software that you want to track, you can use the percent sign (%) as a wildcard in the match_string.<br> <br></p>'] = '<p>Licences galapunkts ļauj izsekot jūsu ierīcēs atrasto licenču skaitu.<br/> <br/>Lai izveidotu ierakstu izsekot jūsu licences jums <em>nav</em> norādīt nosaukumu, organizāciju, iegūto licenču skaitu un programmatūras nosaukumu. Laukā <code>match_string</code> jums ir jānorāda nosaukums programmatūras, kuru vēlaties, lai izsekotu, jūs varat izmantot procentu zīmi (%) kā zvaigznītes, kas atbilst_ string.<br/> <br/></p>';

$GLOBALS["lang"]['<p>The network should be in the format 192.168.1.0/24.<br> <br></p>'] = '<p>Tīklam jābūt formātā 192.168.1.0/24.<br/> <br/></p>';

$GLOBALS["lang"]['<p>The primary and optional secondary items should be fully qualified - ie, devices.type or software.name.<br> <br></p>'] = '<p>Primārajiem un izvēles sekundārajiem posteņiem jābūt pilnībā kvalificētiem - ti, ierīcēm. tips vai programmatūra. nosaukums.<br/> <br/></p>';

$GLOBALS["lang"]['<p>There is no need to do anything if you are running Open-AudIT on a Linux server.<br>
<br>
Windows clients are just fine and require no special actions, however.... to enable this feature the audit script must be run locally on the target Windows system. It cannot be run remotely as we do with WMI calls when running the audit script on one Windows machine, while targeting a second Windows machine. To do this we need to copy the audit script to the target Windows machine and then run it. Unfortunately the service account that Apache runs under is the Local System account. This account has no access to remote (network based) resources. To work around this issue the service must be run under another account. It is easiest to just use the local Administrator account, but you can try any account you like as long as it has the required privileges. The Local System account has as much local access as the local Administrator account.<br>
<br>
See our page on enabling <a href="/index.php/faq?name=Running Open-AudIT Apache Service Under Windows">Running Open-AudIT Apache Service Under Windows</a></p>'] = '<p>Nav nepieciešams neko darīt, ja darbojas Open-AudIT uz Linux servera.<br/><br/>Windows klienti ir tikai naudas sodu un neprasa nekādas īpašas darbības, tomēr.... lai ieslēgtu šo funkciju audita skripts ir jādarbina lokāli mērķa Windows sistēmā. To nevar palaist attālināti, kā mēs to darām ar WMI zvaniem, kad darbojas audita skriptu vienā Windows mašīna, vienlaikus mērķējot otru Windows mašīna. Lai to izdarītu, mums ir nepieciešams kopēt audita skriptu uz mērķa Windows mašīna un pēc tam palaist to. Diemžēl pakalpojumu konts, kas Apache darbojas zem ir vietējās sistēmas konts. Šim kontam nav piekļuves attālinātiem (tīkla bāzētiem) resursiem. Lai strādātu pie šī jautājuma, dienestam ir jādarbojas citā kontā. Tas ir visvieglāk vienkārši izmantot vietējo administratora kontu, bet jūs varat izmēģināt jebkuru kontu jums patīk, ja vien tas ir nepieciešamās privilēģijas. Vietējās sistēmas kontam ir tikpat liela vietējā piekļuve kā vietējā administratora kontam.<br/><br/>Skatiet mūsu lapu par iespēju <a href="/index.php/faq?name=Running Open-AudIT Apache Service Under Windows">Atvērt- AudIT Apache pakalpojuma darbināšana zem logiem</a></p>';

$GLOBALS["lang"]['<p>These are the devices that live within a rack.<br> <br></p>'] = '<p>Tās ir ierīces, kas dzīvo plauktā.<br/> <br/></p>';

$GLOBALS["lang"]['<p>This endpoint enables you to add your cloud infrastructure details. Open-AudIT will then reach out to your clouds using their native API and return your servers, just like any other device in Open-AudIT.<br> <br><em>NOTE</em> - To use this feature, we <em>must</em> enable the configuration items match_mac (for AWS) and match_hostname (for Azure). This will be done automatically the first time a cloud discovery is executed.<br> <br>Credentials for your cloud (<a href="/index.php/faq?name=Credentials for Microsoft Azure used in Cloud Discovery">Azure</a> or <a href="/index.php/faq?name=Credentials for Amazon AWS used in Cloud Discovery">AWS</a>) are required.<br> <br></p>'] = '<p>Šis mērķa kritērijs ļauj pievienot mākoņdatošanas infrastruktūras detaļas. Open-AudIT pēc tam sasniegs jūsu mākoņus, izmantojot vietējo API, un atgriezīs jūsu serverus, tāpat kā jebkura cita ierīce Open-AudIT.<br/> <br/><em>Piezīme</em> - Lai izmantotu šo funkciju, mēs <em>nav</em> ieslēgt konfigurācijas vienības atbilst_mac (AWS) un atbilst_hostname (Azure). Tas tiks darīts automātiski pirmo reizi, kad tiks veikts mākoņdatošana.<br/> <br/>Mākoņu radījumi (<a href="/index.php/faq?name=Credentials for Microsoft Azure used in Cloud Discovery">Acs</a> vai <a href="/index.php/faq?name=Credentials for Amazon AWS used in Cloud Discovery">AWS</a>) ir nepieciešami.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Vulnerabilities reporting based on the NIST CVE feed.<br> <br></p>'] = '<p>Neaizsargātības ziņošana, pamatojoties uz NIST CVE barību.<br/> <br/></p>';

$GLOBALS["lang"]['<p>We initially setup the default list of scripts with the default options. These default scripts cannot be deleted. You can create additional scripts for use by you as required. Your script will be based on one of the existing scripts and have custom options applied. The scripts can then be downloaded from the list page at menu -> Discover -> Audit Scripts -> List Audit Scripts<br> <br></p>'] = '<p>Mēs sākotnēji iestatām noklusēto skriptu sarakstu ar noklusējuma opcijām. Šos noklusētos skriptus nevar izdzēst. Jūs varat izveidot papildu skriptus izmantošanai jums pēc vajadzības. Jūsu skripts tiks balstīts uz vienu no esošajiem skriptiem un ir pielāgotas opcijas. Pēc tam skriptus var lejupielādēt no saraksta lapas izvēlnē -> Atklāj -> Revīzijas skripti Parādīt revīzijas skriptus<br/> <br/></p>';

$GLOBALS["lang"]['<p>When using Regex for matching, a helpful page can be found on the <a href="https://www.php.net/manual/en/regexp.reference.meta.php" target="_blank"> PHP website</a>. Some differences to Perl Regex can be found <a href="https://www.php.net/manual/en/reference.pcre.pattern.differences.php" target="_blank">here</a>.</p>'] = '<p>Izmantojot Regex saskaņošanai, noderīga lapa var atrast uz <a href="https://www.php.net/manual/en/regexp.reference.meta.php" target="_blank"> PHP tīmekļa vietne</a>. Dažas atšķirības uz Perl Regex var atrast <a href="https://www.php.net/manual/en/reference.pcre.pattern.differences.php" target="_blank">šeit</a>.</p>';

$GLOBALS["lang"]['<p>Widgets can easily be created to show whatever is specific to your environment on your dashboards.<br> <br></p>'] = '<p>Sīkrīkus var viegli izveidot, lai parādītu, kas ir raksturīgs jūsu videi uz jūsu paneļa.<br/> <br/></p>';

$GLOBALS["lang"]['<p>With Open-AudIT Professional and Enterprise you can automate and schedule discoveries, report generation, or baseline checks to run when you want, and as often as you need. Schedule your discoveries to run nightly and reports to be generated and emailed to key personnel each morning. Complex or simple schedules, device discovery and report generation is just a click away.<br> <br>Create individual discovery schedules for each subnet or AD controller, add in reports to be created for targeted audiences. Develop simple or complex schedules to support company needs, avoid backups or impact to operations, or simply to spread the load and speed-up audit completion.<br> <br></p>'] = '<p>Ar Open- AudIT Professional un Enterprise jūs varat automatizēt un plānot atklājumus, ziņot paaudzes, vai bāzes pārbaudes palaist, kad vēlaties, un tik bieži, cik jums ir nepieciešams. Ieplānojiet savus atklājumus skriet naktīs un ziņojumus, kas katru rītu tiek ģenerēti un nosūtīti uz galveno personālu. Sarežģīti vai vienkārši grafiki, ierīču atklāšana un ziņojumu ģenerēšana ir tikai klikšķa attālumā.<br/> <br/>Izveidot individuālu atklāšanas grafiku katram apakštīklam vai AD kontrolierim, pievienot ziņojumus, kas jāizveido mērķauditorijai. Izstrādāt vienkāršus vai sarežģītus grafikus, lai atbalstītu uzņēmuma vajadzībām, izvairītos no dublējumu vai ietekmi uz darbību, vai vienkārši izplatīt slodzes un ātruma audita pabeigšanu.<br/> <br/></p>';

$GLOBALS["lang"]['<p>You can create a script with all the options for any of the existing audit scripts - not just Windows. AIX, ESX, Linux, OSX and Windows are all covered.<br> <br></p>'] = '<p>Jūs varat izveidot skriptu ar visām iespējām jebkuram no esošajiem audita skriptiem - ne tikai Windows. Visi ir pārklāti ar AIX, ESX, Linux, OSX un Windows.<br/> <br/></p>';

$GLOBALS["lang"]['<p>You can use the percent % sign as a wildcard in the match_string.<br> <br></p>'] = '<p>% zīmi var izmantot kā zvaigznīti match_ string.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Your racks help refine exactly where your devices are located.<br> <br></p>'] = '<p>Jūsu plaukti palīdz precizēt, kur tieši atrodas jūsu ierīces.<br/> <br/></p>';

$GLOBALS["lang"]['<strong>NOTE</strong> - You are accessing this URL from the local Open-AudIT server. The downloaded script will not be able to submit when run on any other machine. If you need to audit other machines, please download the script from any remote machine, not using a browser on the Open-AudIT server itself.'] = '<strong>Piezīme</strong> - Jūs piekļūstat šim URL no vietējā Open- AudIT servera. Lejupielādētais skripts nevarēs iesniegt, kad tiks darbināta kāda cita mašīna. Ja nepieciešams pārbaudīt citas iekārtas, lūdzu, lejupielādējiet skriptu no jebkuras attālinātas mašīnas, neizmantojot pārlūkprogrammu pašā Open-AudIT serverī.';

$GLOBALS["lang"]['A CVE item that does not contain a filter to determine the affected item(s).'] = 'CVE vienība, kas nesatur filtru, lai noteiktu attiecīgo(-ās) vienību(-as).';

$GLOBALS["lang"]['A Google Maps API Key is required for this function.'] = 'Google kartes API Atslēga ir nepieciešama šo funkciju.';

$GLOBALS["lang"]['A JSON array of device IDs that will have this benchmark executed.'] = 'JSON masīvs ar ierīču ID, kuriem šis etalons tiks izpildīts.';

$GLOBALS["lang"]['A JSON array of objects matching the software name taken from the CVE, enriched with the software name retrieved by Open-AudIT.'] = 'JSON masīvs ar objektiem, kas atbilst programmatūras nosaukumam, kas ņemts no CVE, bagātināts ar programmatūras nosaukumu, kuru iegūst Open-AudIT.';

$GLOBALS["lang"]['A JSON array of values to test for this vulnerability.'] = 'JSON vērtību kopums, lai pārbaudītu šo ievainojamību.';

$GLOBALS["lang"]['A JSON document containing the Orgs assigned to this user. IDs taken from <code>orgs.id</code>. If a user has access to an Org, they have access to that Orgs descendants.'] = 'JSON dokuments, kas satur šim lietotājam piešķirtos orgus. ID no <code>orgs.id</code>. Ja lietotājam ir piekļuve orgam, viņiem ir piekļuve tam orgu pēctečiem.';

$GLOBALS["lang"]['A JSON document containing the required attributes depending on <code>scripts.type</code>.'] = 'JSON dokuments, kas satur nepieciešamos atribūtus atkarībā no <code>scripts.type</code>.';

$GLOBALS["lang"]['A JSON document containing the required attributes overriding the chosen discovery_scan_options.'] = 'JSON dokuments, kas satur nepieciešamos atribūtus, kuri ir svarīgāki par izvēlētajām meklēšanas_scan_options.';

$GLOBALS["lang"]['A JSON document containing the required attributes overriding the default device match options.'] = 'JSON dokuments, kas satur nepieciešamos atribūtus, kas aizstāj noklusētās ierīces atbilstības opcijas.';

$GLOBALS["lang"]['A JSON document containing the roles assigned to this user. Role names taken from <code>roles.name</code>.'] = 'JSON dokuments, kurā norādītas šim lietotājam piešķirtās lomas. Lomu nosaukumi no <code>roles.name</code>.';

$GLOBALS["lang"]['A JSON object containing an array of attributes to change if the match occurs.'] = 'JSON objekts, kas satur virkni atribūtu, kurus mainīt, ja notiek spēle.';

$GLOBALS["lang"]['A JSON object containing an array of attributes to match.'] = 'JSON objekts, kas satur virkni atribūtu, lai atbilstu.';

$GLOBALS["lang"]['A JSON object containing collection specific options.'] = 'JSON objekts, kas satur kolekcijas īpašas iespējas.';

$GLOBALS["lang"]['A JSON object populated via a Cloud discovery.'] = 'JSON objekts apdzīvots caur Mākoņa atklājumu.';

$GLOBALS["lang"]['A JSON representation containing the details of the queue item to be executed.'] = 'JSON atveidojums, kurā ietverta informācija par izpildāmo rindas elementu.';

$GLOBALS["lang"]['A JSON representation of the fields for this integration.'] = 'JSON pārstāv šīs integrācijas jomas.';

$GLOBALS["lang"]['A JSON representation of the individual tests and their results on all devices this baseline has been run against.'] = 'A JSON attēlo individuālos testus un to rezultātus visās ierīcēs, pret kurām ir veikts sākotnējais novērtējums.';

$GLOBALS["lang"]['A JSON representation of the tests that make up this policy.'] = 'A JSON pārstāv pārbaudes, kas veido šo politiku.';

$GLOBALS["lang"]['A LAN can be connected to a WAN using a router.'] = 'LAN var savienot ar WAN, izmantojot maršrutētāju.';

$GLOBALS["lang"]['A Metropolitan area network (MAN) is a large computer network that usually spans a city or a large campus.'] = 'Aglomerācijas tīkls (MAN) ir liels datortīkls, kas parasti aptver kādu pilsētu vai lielu pilsētiņu.';

$GLOBALS["lang"]['A Seed discovery uses an initial IP to retrieve the IPs of any other devices it knows about, adds those IPs to the list and scans those - again asking for any IPs those additional devices knows about. Rinse and repeat. It is intelligent enough to know if it has already scanned a given IP in its execution and discards any already scanned (or even on the list to be scanned).'] = 'A Sēklu atklāšana izmanto sākotnējo IP, lai iegūtu jebkuras citas ierīces IP, par kurām tā zina, pievieno šos IP sarakstam un skenē tos - atkal prasot jebkurus IP šīs papildu ierīces zina par. Noskalo un atkārto. Tas ir pietiekami inteliģents, lai zinātu, vai tas jau ir skenējis konkrēto IP tā izpildē un izmet visus jau skenētos (vai pat skenējamo sarakstā).';

$GLOBALS["lang"]['A Subnet discovery will scan the IPs provided.'] = 'Apakštīkla atklājums skenēs piedāvātos IP.';

$GLOBALS["lang"]['A URL provided to the agent which will then download the file and store it on the local disk.'] = 'Aģentam, kurš pēc tam lejupielādēs failu un glabās to lokālajā diskā, ir norādīts URL.';

$GLOBALS["lang"]['A URL to a file to download.'] = 'Lejupielādējamā faila URL.';

$GLOBALS["lang"]['A backbone network is part of a computer network infrastructure that provides a path for the exchange of information between different LANs or sub-networks. A backbone can tie together diverse networks within the same building, across different buildings, or over a wide area.<br><br>For example, a large company might implement a backbone network to connect departments that are located around the world. The equipment that ties together the departmental networks constitutes the network backbone. When designing a network backbone, network performance and network congestion are critical factors to take into account. Normally, the backbone network capacity is greater than that of the individual networks connected to it.<br><br>Another example of a backbone network is the Internet backbone, which is the set of wide area networks (WANs) and core routers that tie together all networks connected to the Internet.'] = 'Pamattīkls ir daļa no datortīkla infrastruktūras, kas nodrošina ceļu informācijas apmaiņai starp dažādiem LAN vai apakštīkliem. Pamats var apvienot dažādus tīklus vienā ēkā, dažādās ēkās vai plašā teritorijā.<br/><br/>Piemēram, liels uzņēmums varētu ieviest pamattīklu, lai savienotu nodaļas, kas atrodas visā pasaulē. Aprīkojums, kas savieno departamentu tīklus, veido tīkla pamatu. Veidojot tīkla pamatu, tīkla veiktspēja un tīkla pārslodze ir būtiski faktori, kas jāņem vērā. Parasti galvenā tīkla jauda ir lielāka nekā atsevišķiem ar to savienotiem tīkliem.<br/><br/>Vēl viens pamattīkla piemērs ir interneta mugurkauls, kas ir plaša apgabala tīklu (WAN) un galveno maršrutētāju kopums, kas sasaista visus ar internetu savienotos tīklus.';

$GLOBALS["lang"]['A calculated field that displays the number of times this piece of software was found on the computers in the selected Org (and its descendants if configured).'] = 'Aprēķināts lauks, kas parāda cik reizes šī programmatūra tika atrasta uz datoriem izvēlētajā Org (un tās pēcnācēji, ja konfigurēta).';

$GLOBALS["lang"]['A campus area network (CAN) is made up of an interconnection of LANs within a limited geographical area. The networking equipment (switches, routers) and transmission media (optical fiber, copper plant, Cat5 cabling, etc.) are almost entirely owned by the campus tenant / owner (an enterprise, university, government, etc.).<br><br>For example, a university campus network is likely to link a variety of campus buildings to connect academic colleges or departments, the library, and student residence halls.'] = 'Kampusas apgabala tīklu (CAN) veido LAN starpsavienojums ierobežotā ģeogrāfiskā apgabalā. Tīklu iekārtas (slēgi, maršrutētāji) un pārraides līdzekļi (optiskā šķiedra, vara ražotne, Cat5 kabeļu sistēma u.c.) gandrīz pilnībā pieder pilsētiņas īrniekam/īpašniekam (uzņēmums, universitāte, valdība u.c.).<br/><br/>Piemēram, universitātes pilsētiņas tīkls, visticamāk, savienos dažādas universitātes pilsētiņas ēkas, lai savienotu akadēmiskās koledžas vai nodaļas, bibliotēku un studentu rezidences zāles.';

$GLOBALS["lang"]['A closed port is accessible (it receives and responds to Nmap probe packets), but there is no application listening on it. They can be helpful in showing that a host is up on an IP address (host discovery, or ping scanning), and as part of OS detection. Because closed ports are reachable, it may be worth scanning later in case some open up. Administrators may want to consider blocking such ports with a firewall. Then they would appear in the filtered state, discussed next.'] = 'Slēgts ports ir pieejams (tas saņem un atbild uz Nmap zondes paketēm), bet nav lietojumprogrammas, kas tajā klausās. Tie var būt noderīgi, parādot, ka dators ir uz augšu uz IP adresi (host atklājums, vai ping skenēšana), un kā daļa no OS atklāšanas. Tā kā slēgtie porti ir sasniedzami, varbūt vēlāk ir vērts tos skenēt, ja daži atveras. Administratori var vēlēties apsvērt šādu portu bloķēšanu ar ugunsmūri. Tad tie parādās filtrētā stāvoklī, apspriests nākamais.';

$GLOBALS["lang"]['A collector is either in Collector or Stand-Alone mode.'] = 'Kolekcionārs ir vai nu Collector, vai Stand-Alone režīmā.';

$GLOBALS["lang"]['A comma separated list of applicable CVEs.'] = 'Ar komatu atdalīts piemērojamo CVE saraksts.';

$GLOBALS["lang"]['A comma separated list of values, one of which can be selected.'] = 'Ar komatu atdalīts vērtību saraksts, no kurām vienu var izvēlēties.';

$GLOBALS["lang"]['A command to run. When the agent is Windows based, this command is run from within the powershell agent.'] = 'Izpildāmā komanda. Kad aģents ir bāzēts uz Windows, šī komanda tiek palaista no Powerhell aģenta.';

$GLOBALS["lang"]['A dashboard is made up of three columns and two rows of what we call <i>widgets</i>. A widget is very similar to a summary, only we take the summary concept a bit further. Widgets are created in a simple fashion using a couple of drop down boxes - or you can elect to use your own SQL for complete customisability.'] = 'Panelis sastāv no trim kolonnām un divām rindām no tā, ko mēs saucam <i>sīkrīki</i>. Widget ir ļoti līdzīgs kopsavilkumam, tikai mēs ņemam kopsavilkuma koncepciju mazliet tālāk. Sīkrīki ir izveidoti vienkāršā veidā, izmantojot pāris nolaižamas kastes - vai arī jūs varat izvēlēties izmantot savu SQL pilnīgu pielāgojamību.';

$GLOBALS["lang"]['A filtered port is considered open (and will trigger device detection).'] = 'Filtrēts ports tiek uzskatīts par atvērtu (un iedarbinās ierīces noteikšanu).';

$GLOBALS["lang"]['A global area network (GAN) is a network used for supporting mobile across an arbitrary number of wireless LANs, satellite coverage areas, etc. The key challenge in mobile communications is handing off user communications from one local coverage area to the next. In IEEE Project 802, this involves a succession of terrestrial wireless LANs.'] = 'Globāls teritorijas tīkls (GAN) ir tīkls, ko izmanto mobilo sakaru atbalstam patvaļīgā skaitā bezvadu LAN, satelītu pārklājuma zonās utt. Galvenais uzdevums mobilo sakaru jomā ir nodrošināt lietotāju sakarus no viena vietējā pārklājuma apgabala uz otru. IEEE Project 802 tas ietver zemes bezvadu LAN pēctecību.';

$GLOBALS["lang"]['A home area network (HAN) is a residential LAN used for communication between digital devices typically deployed in the home, usually a small number of personal computers and accessories, such as printers and mobile computing devices. An important function is the sharing of Internet access, often a broadband service through a cable TV or digital subscriber line (DSL) provider.'] = 'Mājas rajona tīkls (HAN) ir dzīvojamā LAN, ko izmanto saziņai starp ciparu ierīcēm, kas parasti izvietotas mājās, parasti neliels skaits personālo datoru un piederumu, piemēram, printeri un mobilās skaitļošanas ierīces. Svarīga funkcija ir kopīga piekļuve internetam, bieži vien platjoslas pakalpojums, izmantojot kabeļtelevīzijas vai ciparu abonentu līnijas (DSL) pakalpojumu sniedzēju.';

$GLOBALS["lang"]['A list of custom TCP ports to scan (22 is SSH, 135 is WMI, 62078 is iPhone sync).'] = 'Saraksts ar pasūtījuma TCP portiem, lai skenētu (22 ir SSH, 135 ir WMI, 62078 ir iPhone sinhronizācija).';

$GLOBALS["lang"]['A list of custom UDP ports to scan (161 is SNMP).'] = 'Saraksts ar pasūtījuma UDP portiem, lai skenētu (161 ir SNMP).';

$GLOBALS["lang"]['A local area network (LAN) is a network that connects computers and devices in a limited geographical area such as a home, school, office building, or closely positioned group of buildings. Each computer or device on the network is a node. Wired LANs are most likely based on Ethernet technology. Newer standards such as ITU-T G.hn also provide a way to create a wired LAN using existing wiring, such as coaxial cables, telephone lines, and power lines.<br><br>The defining characteristics of a LAN, in contrast to a wide area network (WAN), include higher data transfer rates, limited geographic range, and lack of reliance on leased lines to provide connectivity. Current Ethernet or other IEEE 802.3LAN technologies operate at data transfer rates up to 100 Gbit/s, standardized by IEEE in 2010. Currently, 400 Gbit/s Ethernet is being developed.'] = 'Lokālais teritoriju tīkls (LAN) ir tīkls, kas savieno datorus un ierīces ierobežotā ģeogrāfiskajā apgabalā, piemēram, mājās, skolā, biroju ēkā vai cieši izvietotā ēku grupā. Katrs dators vai ierīce tīklā ir mezglpunkts. Vadu LAN visticamāk balstās uz Ethernet tehnoloģiju. Jaunāki standarti, piemēram, ITU-T G.hn arī nodrošina veidu, kā izveidot vadu LAN izmantojot esošo vadu, piemēram, koaksiālie kabeļi, telefona līnijas, un elektrolīnijas.<br/><br/>LAN definējošās īpašības atšķirībā no plaša apgabala tīkla (WAN) ietver augstākus datu pārraides tarifus, ierobežotu ģeogrāfisko diapazonu un paļaušanos uz nomātām līnijām, lai nodrošinātu savienojamību. Strāvas Ethernet vai citas IEEE 802.3LAN tehnoloģijas darbojas ar datu pārraides ātrumu līdz 100 Gbit/s, standartizētu IEEE 2010. gadā. Pašlaik 400 Gbit/s Tiek izstrādāts Ethernet.';

$GLOBALS["lang"]['A location is a physical address that can have devices associated with it. You can assign it coordinates and if there are devices assigned, the location will appear on the Map when you have an Open-AudIT Enterprise license.'] = 'Atrašanās vieta ir fiziska adrese, kurai var būt ar to saistītas ierīces. Jūs varat piešķirt tā koordinātas un, ja ir piešķirtas ierīces, atrašanās vieta parādīsies uz kartes, kad jums ir Open-AudIT Enterprise licence.';

$GLOBALS["lang"]['A location name will help you to find these devices in the future.'] = 'Atrašanās vietas nosaukums palīdzēs jums atrast šīs ierīces nākotnē.';

$GLOBALS["lang"]['A lower number means it will be applied before other rules.'] = 'Mazāks skaits nozīmē, ka to piemēros pirms citiem noteikumiem.';

$GLOBALS["lang"]['A lower number means it will be applied before other rules. The default weight is 100.'] = 'Mazāks skaits nozīmē, ka to piemēros pirms citiem noteikumiem. Noklusētais svars ir 100.';

$GLOBALS["lang"]['A new user logged in to Open-AudIT and was authenticated and authorized by the LDAP sever. That user was then created in Open-AudIT and logged in. Success.'] = 'Jauns lietotājs pieslēdzās Open- AudIT un to autentificēja un pilnvaroja LDAP severs. Šis lietotājs tika izveidots Open-AudIT un pieteicies. Panākumi.';

$GLOBALS["lang"]['A package is a piece of installed softare. A package has a type - antivirus, approved, backup, banned, cloud, firewall, ignored, license or other.'] = 'Pakete ir uzstādīts mīksts. Pakete ir tipa - antivīruss, apstiprināts, rezerves, aizliegta, mākonis, ugunsmūris, ignorēts, licence vai citu.';

$GLOBALS["lang"]['A password (stored as a hash) that enables logon when using application authentication.'] = 'Parole (glabāta kā hash), kas ļauj pieteikties, izmantojot programmu autentificēšanu.';

$GLOBALS["lang"]['A person has an account in the Open-AudIT application. Their user account has a list of associated Roles and Organizations. The roles the user has determines WHAT they can do. The Organizations a user has determines WHICH items they can act upon.<br><br>When a user requests to perform an operation (create, read, update, delete) on a collection item, the roles are consulted to see if they are allowed to perform that action, then the orgs are consulted to determine if the collection item belongs to an org the user has permission to act on.'] = 'Personai Open-AudIT lietojumprogrammā ir konts. Viņu lietotāja kontā ir saraksts ar saistītajām lomām un organizācijām. Lietotājam piemītošās lomas nosaka, ko viņi var darīt. Organizācijas lietotājs ir noteikusi, uz kuriem priekšmetiem viņi var rīkoties.<br/><br/>Kad lietotājs pieprasa veikt kādu operāciju (izveidot, lasīt, atjaunināt, dzēst) ar kolekcijas vienību, ar lomām konsultējas, lai redzētu, vai tām ir atļauts veikt šo darbību, tad tiek konsultēts ar org, lai noteiktu, vai kolekcijas vienība pieder pie org lietotājam ir atļauja rīkoties.';

$GLOBALS["lang"]['A personal area network (PAN) is a computer network used for communication among computer and different information technological devices close to one person. Some examples of devices that are used in a PAN are personal computers, printers, fax machines, telephones, PDAs, scanners, and even video game consoles. A PAN may include wired and wireless devices. The reach of a PAN typically extends to 10 meters. A wired PAN is usually constructed with USB and FireWire connections while technologies such as Bluetooth and infrared communication typically form a wireless PAN.'] = 'Personālā apgabala tīkls (PAN) ir datortīkls, ko izmanto saziņai starp datoru un dažādām informācijas tehnoloģijām tuvu vienai personai. Daži PAN lietoto ierīču piemēri ir personālie datori, printeri, faksa aparāti, telefoni, PDA, skeneri un pat videospēļu konsoles. PAN var ietvert vadu un bezvadu ierīces. PAN sasniedzamība parasti sniedzas līdz 10 metriem. Vadu PAN parasti konstruē ar USB un FireWire savienojumiem, savukārt tādas tehnoloģijas kā Bluetooth un infrasarkanā komunikācija parasti veido bezvadu PAN.';

$GLOBALS["lang"]['A query is essentially a SQL statement. This statement is run against the database with the automatic addition of the limit, filtered to apply to only those requested items and only those items the user has permission to view. A Query can be created using menu -> Manage -> Queries -> Create Queries. Queries contain an org_id and are hence restricted to the appropriate users. A user must have the org_admin or reporter role(s) to create, update or delete a query. All users can execute a query. A query has a name attribute used for the menu item as well as a menu category attribute. This tells the Open-Audit GUI which submenu to place the query in. There is also menu display which should be set to <i>y</i> to enable the query in the GUI (<i>n</i> to prevent the query from appearing at all). The query would still run if called using its <code>id</code>, regardless of menu displays value.'] = 'Pieprasījums būtībā ir SQL paziņojums. Šis apgalvojums tiek darbināts pret datubāzi ar automātisku ierobežojuma pievienošanu, filtrēts, lai attiektos tikai uz tām pieprasītajām vienībām, un tikai tās vienības, kuras lietotājam ir atļauts apskatīt. Vaicāt var, izmantojot izvēlni Pārvaldīt -> Vaicāt -> Izveidot vaicājumus. Vaicājumi satur org_id, un tāpēc tie attiecas tikai uz attiecīgajiem lietotājiem. Lietotājam jābūt org_admin vai reportiera lomai(-ām), lai izveidotu, atjauninātu vai dzēstu vaicājumu. Visi lietotāji var izpildīt vaicājumu. Vaicājumam ir nosaukuma atribūts, ko izmanto izvēlnes elementam, kā arī izvēlnes kategorijas atribūts. Šis stāsta Open- Audit GUI, kurā apakšizvēlnē ievietot vaicājumu. Ir arī izvēlnes displejs, uz kuru vajadzētu iestatīt <i>y</i> lai ieslēgtu vaicājumu GUI (<i>n</i> lai vispār nerastos vaicājums). Jautājums joprojām darbotos, ja to izsauktu, izmantojot <code>id</code>, neatkarīgi no izvēlnes rāda vērtību.';

$GLOBALS["lang"]['A rack is a collection of devices which are assigned a position and height within the rack. A device can optionally have a picture associated with it. A rack is placed in a row. We have created a very granular system for positioning of racks, which is as follows. At the top level (as always) is the Organisation (Org). An Org can have multiple locations (as has always been the case). With the addition of the Racks feature, a location can now contain one or more Buildings. A building can contain one or more Floors. A floor can contain one or more Rooms. A room can contain one or more Rows. This sounds like a lot of work, but defaults are created for you. Create a new Location and the sub-components will be automatically created for you. If you need more items (buildings, rooms, etc) you can add them as you like. A rack can also be part of a <i>pod</i> of racks. The pod attribute works as a tag, rather than a strict hierarchical inheritance model as per buildings, floors, etc.<br><br>Racks are a feature available to Open-AudIT Enterprise licensed customers.'] = 'Paliktnis ir ierīču kopums, kam ir noteikts novietojums un augstums statīvā. Ierīcei pēc izvēles var būt ar to saistīts attēls. Pēc kārtas tiek novietots plaukts. Mēs esam izveidojuši ļoti granulu sistēmu plauktu pozicionēšanai, kas ir šādi. Augšējā līmenī (kā vienmēr) ir Organizācija (Org). Org var būt vairākas vietas (kā vienmēr ir bijis gadījums). Pievienojot Racks funkciju, vietā tagad var būt viena vai vairākas ēkas. Ēkā var būt viens vai vairāki stāvi. Grīdā var būt viena vai vairākas istabas. Telpā var būt viena vai vairākas rindas. Tas izklausās daudz darba, bet jums tiek radīti noklusējuma. Izveidot jaunu atrašanās vietu un apakškomponenti tiks automātiski izveidots jums. Ja jums ir nepieciešams vairāk priekšmetus (ēkas, telpas, uc), jūs varat pievienot tos, kā vēlaties. Režģis var būt arī daļa no <i>pod</i> no plauktiem. Pod atribūts darbojas kā tags, nevis kā stingrs hierarhisks mantojuma modelis pēc ēkām, stāviem utt.<br/><br/>Racks ir iespēja pieejama Open-AudIT Enterprise licencētiem klientiem.';

$GLOBALS["lang"]['A routing domain or address space where the IP addresses and MAC addresses are unique.'] = 'Maršrutēšanas domēns vai adrešu telpa, kur IP adreses un MAC adreses ir unikālas.';

$GLOBALS["lang"]['A sample cron file for Linux is below. This should be placed in'] = 'Zemāk ir Linux izlases cron fails. Tas jāievieto';

$GLOBALS["lang"]['A security zone is a administrative domain or policy domain within the Network Domain.'] = 'Drošības zona ir administratīvs domēns vai politikas domēns Tīkla domēnā.';

$GLOBALS["lang"]['A seed discovery is another type of discovery, where you provide the IP of a single <i>seed</i> device. This device is audited, and any IPs it knows are then added to the list of IPs to be audited. Then, those devices are audited and any IPs they know are also added to the list of IPs for auditing. This process then continues within the parameters configured by the user.'] = 'Sēklu atklāšana ir cita veida atklājums, kur jūs sniedzat viena IP <i>sēklas</i> ierīce. Šai ierīcei veic revīziju, un visus tai zināmos integrētos projektus pēc tam pievieno revidējamo integrēto projektu sarakstam. Pēc tam šīs ierīces tiek pārbaudītas un visi IP, ko tās pazīst, tiek pievienoti arī revīzijas IP sarakstam. Šis process turpinās lietotāja konfigurētajos parametros.';

$GLOBALS["lang"]['A short description of the log entry.'] = 'Īss žurnāla ieraksta apraksts.';

$GLOBALS["lang"]['A storage area network (SAN) is a dedicated network that provides access to consolidated, block level data storage. SANs are primarily used to make storage devices, such as disk arrays, tape libraries, and optical jukeboxes, accessible to servers so that the devices appear like locally attached devices to the operating system. A SAN typically has its own network of storage devices that are generally not accessible through the local area network by other devices. The cost and complexity of SANs dropped in the early 2000s to levels allowing wider adoption across both enterprise and small to medium-sized business environments.'] = 'Glabāšanas apgabala tīkls (SAN) ir specializēts tīkls, kas nodrošina piekļuvi konsolidētai, bloka līmeņa datu uzglabāšanai. SAN galvenokārt izmanto, lai padarītu atmiņas ierīces, piemēram, disku masīvus, lenšu bibliotēkas un optiskās jukeboxes, pieejamas serveriem tā, ka ierīces parādās kā lokāli piestiprinātas ierīces operētājsistēmai. SAN parasti ir savs glabāšanas ierīču tīkls, kas parasti nav pieejams caur lokālo tīklu ar citām ierīcēm. SAN izmaksas un sarežģītība 2000. gadu sākumā samazinājās līdz līmenim, kas ļāva to plašāk ieviest gan uzņēmumu, gan mazo un vidējo uzņēmumu vidē.';

$GLOBALS["lang"]['A string that matches the <code>software.name</code> attribute. You can use the standard SQL wildcard of percent (%) to match one or more characters.'] = 'Virkne, kas atbilst <code>software.name</code> atribūts. Jūs varat izmantot standarta SQL wildcard procentu (%), lai atbilstu vienai vai vairākām rakstzīmēm.';

$GLOBALS["lang"]['A structured system for managing sensitive information'] = 'Strukturēta sistēma sensitīvas informācijas pārvaldībai';

$GLOBALS["lang"]['A timestamp.'] = 'Laika zīmogs.';

$GLOBALS["lang"]['A user has a primary Org as well as a list of Orgs they can access. A user combines this with a list of assigned roles that define what actions they can take on items assigned to the Orgs they have access to. The combination of a users <i>orgs</i> and <i>roles</i> define what they can and cannot do within Open-AudIT.'] = 'Lietotājam ir primārā Org, kā arī saraksts ar Orgs viņi var piekļūt. Lietotājs apvieno šo ar piešķirto lomu sarakstu, kas nosaka, kādas darbības viņi var veikt ar priekšmetiem, kas piešķirti orgiem, kuriem viņiem ir piekļuve. Lietotāju kombinācija <i>orgs</i> kā arī <i>lomas</i> definēt, ko viņi var un nevar darīt Open-AudIT ietvaros.';

$GLOBALS["lang"]['A user will have a list of associated organizations (orgs). Each org the user has will allow them to act upon items within that org as per their role(s).<br><br>All orgs except the default org have a parent. Think of an Org Chart. If a user has permission on an Org, they also have permission on any descendants of that Org.<br><br>Users are also allowed permission on a child org to see the items from parent orgs for certain collections. Those are: dashboards, discovery_scan_options, fields, files, groups, queries, reports, roles, rules, scripts, summaries, widgets.<br><br>Do not forget you have granular control over what users can see and do using Roles in Enterprise.'] = 'Lietotājam būs saraksts ar asociētajām organizācijām (orgiem). Katrs org lietotājs ļaus viņiem rīkoties pēc vienības šajā org atbilstoši to lomai(-ām).<br/><br/>Visiem org, izņemot noklusēto org, ir vecāks. Padomājiet par Org Chart. Ja lietotājam ir atļauja uz orga, viņiem ir atļauja arī uz jebkura šī orga pēcteča.<br/><br/>Lietotājiem ir atļauts arī uz bērnu org apskatīt priekšmetus no vecākiem orgs konkrētām kolekcijām. Tie ir: paneļa, atklāšanas_scan_options, lauki, faili, grupas, vaicājumi, ziņojumi, lomas, noteikumi, skripti, kopsavilkumi, logrīki.<br/><br/>Neaizmirstiet, ka jums ir granulu kontrole pār to, ko lietotāji var redzēt un darīt, izmantojot lomas uzņēmumā.';

$GLOBALS["lang"]['A user will have a list of associated organizations (orgs). Each org the user has will allow them to act upon items within that org as per their role(s).<br><br>All orgs except the default org have a parent. Think of an Org Chart. If a user has permission on an Org, they also have permission on any descendants of that Org.<br><br>We have also allow a user with permission on a child org to see the items from parent orgs for certain collections. Those are: dashboards, discovery_scan_options, fields, files, groups, queries, roles, rules, scripts, summaries, widgets.<br><br>Do not forget you have granular control over what users can see and do using'] = 'Lietotājam būs saraksts ar asociētajām organizācijām (orgiem). Katrs org lietotājs ļaus viņiem rīkoties pēc vienības šajā org atbilstoši to lomai(-ām).<br/><br/>Visiem org, izņemot noklusēto org, ir vecāks. Padomājiet par Org Chart. Ja lietotājam ir atļauja uz orga, viņiem ir atļauja arī uz jebkura šī orga pēcteča.<br/><br/>Mums ir arī ļaut lietotājam ar atļauju uz bērnu org redzēt priekšmetus no vecākiem orgs konkrētām kolekcijām. Tie ir: paneļa, atklāšanas_scan_options, lauki, faili, grupas, vaicājumi, lomas, noteikumi, skripti, kopsavilkumi, logrīki.<br/><br/>Neaizmirstiet, jums ir granulu kontrole pār to, ko lietotāji var redzēt un darīt, izmantojot';

$GLOBALS["lang"]['A virtual private network (VPN) is an overlay network in which some of the links between nodes are carried by open connections or virtual circuits in some larger network (e.g., the Internet) instead of by physical wires. The data link layer protocols of the virtual network are said to be tunneled through the larger network when this is the case. One common application is secure communications through the public Internet, but a VPN need not have explicit security features, such as authentication or content encryption. VPNs, for example, can be used to separate the traffic of different user communities over an underlying network with strong security features.<br><br>VPN may have best-effort performance, or may have a defined service level agreement (SLA) between the VPN customer and the VPN service provider. Generally, a VPN has a topology more complex than point-to-point.'] = 'Virtuāls privāts tīkls (VPN) ir pārklāts tīkls, kurā daļu no mezglu saitēm ved ar vaļējiem savienojumiem vai virtuālām ķēdēm kādā lielākā tīklā (piemēram, Internetā), nevis ar fiziskiem vadiem. Virtuālā tīkla datu pārraides slāņa protokolus mēdz tunelēt caur lielāku tīklu, kad tas tā ir. Viena kopīga lietojumprogramma ir droša saziņa, izmantojot publisko internetu, bet VPN nav jābūt skaidriem drošības elementiem, piemēram, autentifikācijai vai satura šifrēšanai. Piemēram, VPN var izmantot, lai nošķirtu dažādu lietotāju kopienu datplūsmu pa pamattīklu ar spēcīgiem drošības elementiem.<br/><br/>VPN var būt vislabākie centieni, vai var būt noteikts pakalpojumu līmeņa līgums (SLA) starp VPN klientu un VPN pakalpojumu sniedzēju. Parasti VPN topoloģija ir sarežģītāka nekā point-to-point.';

$GLOBALS["lang"]['A vulnerability affecting availability may allow attackers to disrupt services, crash systems, or cause denial-of-service (DoS) (None, Low, High).'] = 'Neaizsargātība, kas ietekmē pieejamību, var ļaut uzbrucējiem traucēt pakalpojumus, avārijas sistēmas vai izraisīt pakalpojuma noliegšanu (DoS) (Nav, Low, High).';

$GLOBALS["lang"]['A vulnerability affecting confidentiality may allow attackers to read sensitive data, such as personal information, credentials, or proprietary business data (None, Low, High).'] = 'Neaizsargātība, kas ietekmē konfidencialitāti, var ļaut uzbrucējiem izlasīt sensitīvus datus, piemēram, personas informāciju, akreditācijas datus vai patentētus uzņēmējdarbības datus (Nav, Low, High).';

$GLOBALS["lang"]['A vulnerability affecting integrity may allow attackers to modify data, inject malicious code, or alter system configurations (None, Low, High).'] = 'Ievainojamība, kas ietekmē integritāti var ļaut uzbrucējiem mainīt datus, injicēt ļaunprātīgu kodu, vai mainīt sistēmas konfigurācijas (None, Low, High).';

$GLOBALS["lang"]['A vulnerability can be editied and more specific package names provided where the enrichment data is insufficient or the generated SQL is not quite correct.'] = 'Ievainojamību var rediģēt un konkrētākus pakešu nosaukumus, ja bagātināšanas dati ir nepietiekami vai ģenerētais SQL nav gluži pareizs.';

$GLOBALS["lang"]['A vulnerability item in Open-AudIT can be thought of as essentially a query against your database to determine your potential exposure to a given CVE report. A vulnerability is made up of the CVE report, along with enrichment data from FirstWave. These two items are combined to produce a suitable query that is automatically downloaded from FirstWave.'] = 'Open-AudIT ievainojamības elementu var uzskatīt par būtībā vaicājumu pret jūsu datubāzi, lai noteiktu jūsu potenciālo saskarsmi ar doto CVE ziņojumu. Neaizsargātību veido CVE ziņojums kopā ar bagātināšanas datiem no FirstWave. Šie divi elementi ir apvienoti, lai izveidotu piemērotu vaicājumu, kas tiek automātiski lejupielādēts no FirstWave.';

$GLOBALS["lang"]['A wide area network (WAN) is a computer network that covers a large geographic area such as a city, country, or spans even intercontinental distances. A WAN uses a communications channel that combines many types of media such as telephone lines, cables, and air waves. A WAN often makes use of transmission facilities provided by common carriers, such as telephone companies. WAN technologies generally function at the lower three layers of the OSI reference model: the physical layer, the data link layer, and the network layer.'] = 'Plašs teritoriju tīkls (WAN) ir datortīkls, kas aptver lielu ģeogrāfisko teritoriju, piemēram, pilsētu, valsti, vai aptver pat starpkontinentālus attālumus. WAN izmanto sakaru kanālu, kurā apvienoti daudzi plašsaziņas līdzekļu veidi, piemēram, telefona līnijas, kabeļi un gaisa viļņi. WAN bieži izmanto pārraides iekārtas, ko nodrošina kopīgi pārvadātāji, piemēram, telefonu kompānijas. WAN tehnoloģijas parasti darbojas OSI references modeļa trīs apakšējos slāņos: fiziskajā slānī, datu pārraides slānī un tīkla slānī.';

$GLOBALS["lang"]['AD Group'] = 'AD grupa';

$GLOBALS["lang"]['ADSL, HFC, ISDN, etc.'] = 'ADSL, HFC, ISDN utt.';

$GLOBALS["lang"]['AIX'] = 'AIX';

$GLOBALS["lang"]['ALL IPs'] = 'VISI IP';

$GLOBALS["lang"]['API / Web Access'] = 'API / Tīmekļa piekļuve';

$GLOBALS["lang"]['API Documentation'] = 'Dokumentācija';

$GLOBALS["lang"]['API Key required.'] = 'Nepieciešama API atslēga.';

$GLOBALS["lang"]['API Result'] = 'API rezultāts';

$GLOBALS["lang"]['About'] = '& Par';

$GLOBALS["lang"]['Above are the only required items.'] = 'Virs ir tikai nepieciešamie punkti.';

$GLOBALS["lang"]['Accept'] = 'Pieņemt';

$GLOBALS["lang"]['Access Model'] = 'Piekļuves modelis';

$GLOBALS["lang"]['access_point'] = 'Piekļuves punkts';

$GLOBALS["lang"]['Access Point'] = 'Piekļuves punkts';

$GLOBALS["lang"]['access_token'] = 'Piekļuves marķierierīce';

$GLOBALS["lang"]['Access Token'] = 'Piekļuves marķierierīce';

$GLOBALS["lang"]['Access to the admin$ share and RPC uses the SMB2 protocol.'] = 'Piekļuve admin$ daļa un RPC izmanto SMB2 protokolu.';

$GLOBALS["lang"]['ack_by'] = 'Pēc';

$GLOBALS["lang"]['Ack By'] = 'Pēc';

$GLOBALS["lang"]['ack_date'] = 'Datums';

$GLOBALS["lang"]['Ack Date'] = 'Datums';

$GLOBALS["lang"]['ack_time'] = 'Akšanas laiks';

$GLOBALS["lang"]['Ack Time'] = 'Akšanas laiks';

$GLOBALS["lang"]['action'] = 'Darbība';

$GLOBALS["lang"]['Action'] = 'Darbība';

$GLOBALS["lang"]['action_audit'] = 'Darbības revīzija';

$GLOBALS["lang"]['Action Audit'] = 'Darbības revīzija';

$GLOBALS["lang"]['action_command'] = 'Darbību komanda';

$GLOBALS["lang"]['Action Command'] = 'Darbību komanda';

$GLOBALS["lang"]['action_date'] = 'Darbības datums';

$GLOBALS["lang"]['Action Date'] = 'Darbības datums';

$GLOBALS["lang"]['action_devices_assigned_to_location'] = 'Atrašanās vietai piešķirtās darbības ierīces';

$GLOBALS["lang"]['Action Devices Assigned To Location'] = 'Atrašanās vietai piešķirtās darbības ierīces';

$GLOBALS["lang"]['action_devices_assigned_to_org'] = 'Darbības ierīces, kas piešķirtas org';

$GLOBALS["lang"]['Action Devices Assigned To Org'] = 'Darbības ierīces, kas piešķirtas org';

$GLOBALS["lang"]['action_download'] = 'Darbība';

$GLOBALS["lang"]['Action Download'] = 'Darbība';

$GLOBALS["lang"]['action_uninstall'] = 'Atinstalēt darbību';

$GLOBALS["lang"]['Action Uninstall'] = 'Atinstalēt darbību';

$GLOBALS["lang"]['actioned'] = 'Darbība';

$GLOBALS["lang"]['Actioned'] = 'Darbība';

$GLOBALS["lang"]['actioned_by'] = 'Rīkojas pēc';

$GLOBALS["lang"]['Actioned By'] = 'Rīkojas pēc';

$GLOBALS["lang"]['actioned_date'] = 'Datums';

$GLOBALS["lang"]['Actioned Date'] = 'Datums';

$GLOBALS["lang"]['actions'] = 'Darbības';

$GLOBALS["lang"]['Actions'] = 'Darbības';

$GLOBALS["lang"]['Activate'] = 'Aktivizēt';

$GLOBALS["lang"]['Activate Free License'] = 'Aktivizēt bezmaksas licenci';

$GLOBALS["lang"]['Activate Key'] = 'Aktivizēt atslēgu';

$GLOBALS["lang"]['Activate a free Enterprise license'] = 'Aktivizēt bezmaksas uzņēmuma licenci';

$GLOBALS["lang"]['Active'] = 'Aktīvs';

$GLOBALS["lang"]['Active / Active'] = 'Aktīvs / Aktīvs';

$GLOBALS["lang"]['Active / Passive'] = 'Aktīvs / Pasīvs';

$GLOBALS["lang"]['Active Directory'] = 'Aktīvā mape';

$GLOBALS["lang"]['Active Directory Domain'] = 'Aktīvs direktorijas domēns';

$GLOBALS["lang"]['active_directory_ou'] = 'Aktīvā mape Ou';

$GLOBALS["lang"]['Active Directory Ou'] = 'Aktīvā mape Ou';

$GLOBALS["lang"]['Active Directory Server'] = 'Aktīvās mapes serveris';

$GLOBALS["lang"]['Active Directory and OpenLDAP'] = 'Aktīvā mape un OpenLDAP';

$GLOBALS["lang"]['ad_domain'] = 'Ad domēns';

$GLOBALS["lang"]['Ad Domain'] = 'Ad domēns';

$GLOBALS["lang"]['ad_group'] = 'Ad grupa';

$GLOBALS["lang"]['Ad Group'] = 'Ad grupa';

$GLOBALS["lang"]['ad_server'] = 'Reklāmas serveris';

$GLOBALS["lang"]['Ad Server'] = 'Reklāmas serveris';

$GLOBALS["lang"]['Add'] = 'Pievienot';

$GLOBALS["lang"]['Add Credentials'] = 'Pievienot attaisnojumus';

$GLOBALS["lang"]['Add Device'] = 'Pievienot ierīci';

$GLOBALS["lang"]['Add Device to Application'] = 'Pievienot ierīci programmai';

$GLOBALS["lang"]['Add Device to Cluster'] = 'Pievienot ierīci klasteram';

$GLOBALS["lang"]['Add Exception'] = 'Pievienot izņēmumu';

$GLOBALS["lang"]['Add Field'] = 'Pievienot lauku';

$GLOBALS["lang"]['Add If'] = 'Pievienot, ja';

$GLOBALS["lang"]['Add Policies from Device'] = 'Pievienot ierīces politiku';

$GLOBALS["lang"]['Add Policy'] = 'Pievienot politiku';

$GLOBALS["lang"]['Add Then'] = 'Pievienot pēc tam';

$GLOBALS["lang"]['Add Your Credentials'] = 'Pievienot savus attaisnojumus';

$GLOBALS["lang"]['Add image'] = 'Pievienot attēlu';

$GLOBALS["lang"]['additional_items'] = 'Papildu preces';

$GLOBALS["lang"]['Additional Items'] = 'Papildu preces';

$GLOBALS["lang"]['address'] = 'Adrese';

$GLOBALS["lang"]['Address'] = 'Adrese';

$GLOBALS["lang"]['Address any nonconformities'] = 'Risināt jebkādas neatbilstības';

$GLOBALS["lang"]['Address audit findings and corrective actions'] = 'Pievērsties revīzijas konstatējumiem un korektīvām darbībām';

$GLOBALS["lang"]['Admin'] = 'Administrators';

$GLOBALS["lang"]['admin_status'] = 'Administratora statuss';

$GLOBALS["lang"]['Admin Status'] = 'Administratora statuss';

$GLOBALS["lang"]['advanced'] = 'Paplašināti';

$GLOBALS["lang"]['Advanced'] = 'Paplašināti';

$GLOBALS["lang"]['Afghanistan'] = 'Afganistāna';

$GLOBALS["lang"]['After an Integration has been created, when you view the details of an Integration you will notice a field named Debug. This is set to no by default. Changing it to yes provides extra logging when an Integration is executed. Debug should not be left as yes. This is because the debug output will contain everything retrieved from external systems - including items such as WMI and SNMP credentials. The debug option should be used only when an issue has occurred and you wish to dig deeper in to see if you can determine why.'] = 'Pēc tam, kad Integrācija ir izveidota, kad jūs skatāties detaļas integrācijas jūs ievērosiet lauku ar nosaukumu Debug. Šis nav iestatīts pēc noklusējuma. Mainot to uz jā, tiek nodrošināta papildu pieteikšanās, kad tiek izpildīta Integrācija. Atkļūdot nedrīkst kā jā. Tas ir tāpēc, ka atkļūdošanas izvade saturēs visu, kas izgūts no ārējām sistēmām - ieskaitot tādas vienības kā WMI un SNMP akreditācijas datus. Atkļūdošanas opcija būtu jāizmanto tikai tad, ja problēma ir radusies un vēlaties rakt dziļāk, lai redzētu, vai varat noteikt, kāpēc.';

$GLOBALS["lang"]['After completing the above, uninstall the agent.'] = 'Pabeidzot iepriekš minēto, atinstalējiet aģentu.';

$GLOBALS["lang"]['Agent? Discovery? Credentials?'] = 'Aģent? Atklājums? Mantojumi?';

$GLOBALS["lang"]['agents'] = 'Pārstāvji';

$GLOBALS["lang"]['Agents'] = 'Pārstāvji';

$GLOBALS["lang"]['Agents entries can be created that specify a duration, a network and an operating system. If all tests match, the server then asks the agent to perform actions. If any test is not set, it is excluded from the <i>all must match</i> requirement.<br><br>You can create multiple agents and have the server check one or all agent entries. You might (for example) specify one agent that says <i>If the agent IP is in this subnet, set the location_id of the device</i>.<br><br>Another example might be not running an audit at all, rather download a script and run it. If the agent is installed with admin rights, you can now manage your machines without opening <strong>any</strong> ports from it to the world.</p><p>Enabling advanced agents means an agent can be instructed to download any file and execute any command. <strong>WARNING</strong>: This comes with security risks. This configuration will <strong>only</strong> function when running Open-AudIT using HTTPS and a valid (Certificate Authority provided) certificate for '] = 'Aģentu ierakstus var izveidot, kas norāda ilgumu, tīklu un operētājsistēmu. Ja visi testi atbilst, serveris tad lūdz aģentu veikt darbības. Ja tests nav iestatīts, to izslēdz no <i>visiem jāatbilst</i> prasības.<br/><br/>Jūs varat izveidot vairākus aģentus, un serveris pārbauda vienu vai visus aģentu ierakstus. Jūs varat (piemēram) norādīt vienu aģentu, kas saka <i>Ja aģents IP ir šajā apakštīklā, norādiet ierīces atrašanās vietu_id</i>.<br/><br/>Vēl viens piemērs varētu būt ne veikt revīziju vispār, drīzāk lejupielādēt skriptu un palaist to. Ja aģents ir instalēts ar admin tiesībām, tagad jūs varat pārvaldīt savas mašīnas, neatverot <strong>jebkurš</strong> ostas no tā uz pasauli.<p>Ieslēdzot uzlabotas aģenti nozīmē aģents var uzdot lejupielādēt jebkuru failu un izpildīt jebkuru komandu. <strong>BRĪDINĀJUMI</strong>: Tas ir saistīts ar drošības riskiem. Šī konfigurācija <strong>tikai</strong> Funkcija, darbojoties Open-AudIT, izmantojot HTTPS un derīgu (sertifikāta autoritāte nodrošināta) sertifikātu </p>';

$GLOBALS["lang"]['Aggressive'] = 'Agresīvi';

$GLOBALS["lang"]['Aland Islands'] = 'Ālandu salas';

$GLOBALS["lang"]['Albania'] = 'Albānija';

$GLOBALS["lang"]['Albanian'] = 'Albāņu';

$GLOBALS["lang"]['alert_style'] = 'Brīdinājuma stils';

$GLOBALS["lang"]['Alert Style'] = 'Brīdinājuma stils';

$GLOBALS["lang"]['Algeria'] = 'Alžīrija';

$GLOBALS["lang"]['algorithm'] = 'Algoritms';

$GLOBALS["lang"]['Algorithm'] = 'Algoritms';

$GLOBALS["lang"]['alias'] = 'Pieņemts nosaukums';

$GLOBALS["lang"]['Alias'] = 'Pieņemts nosaukums';

$GLOBALS["lang"]['All'] = 'Visi';

$GLOBALS["lang"]['All IPs'] = 'Visi IP';

$GLOBALS["lang"]['All Policies'] = 'Visas politikas';

$GLOBALS["lang"]['All Queued Items'] = 'Visas ierindotās vienības';

$GLOBALS["lang"]['All collections URLs use the format'] = 'Visas kolekcijas URL izmanto formātu';

$GLOBALS["lang"]['All device sub-tables contain a couple of important columns.'] = 'Visās ierīču apakštabulās ir dažas svarīgas kolonnas.';

$GLOBALS["lang"]['All devices with a type like computer.'] = 'Visas ierīces ar tipa datoru.';

$GLOBALS["lang"]['All devices with a type of computer or router.'] = 'Visas ierīces ar datora tipu vai maršrutētāju.';

$GLOBALS["lang"]['All devices without a type of switch and printer.'] = 'Visas ierīces bez slēdža un printera veida.';

$GLOBALS["lang"]['All devices without a type of switch and printer. Essentially the same as the above query.'] = 'Visas ierīces bez slēdža un printera veida. Būtībā tas pats, kas iepriekš vaicājums.';

$GLOBALS["lang"]['All regular discovery options are also available for use in Device Seed Discoveries.'] = 'Visas regulārās atklāšanas opcijas ir pieejamas izmantošanai arī Device Seed Discoveries.';

$GLOBALS["lang"]['All tasks can be created the same in Windows and Linux. Tasks use the CRON method for scheduling execution.'] = 'Visus uzdevumus var izveidot vienādi Windows un Linux. Uzdevumi plānošanai izmanto CRON metodi.';

$GLOBALS["lang"]['Along with this request for information, we send back to FirstWave datapoints that will give us some much needed information on feature use and your installation.'] = 'Kopā ar šo informācijas pieprasījumu, mēs nosūtām atpakaļ uz FirstWave datu punktiem, kas sniegs mums kādu ļoti nepieciešamo informāciju par funkciju izmantošanu un jūsu uzstādīšanu.';

$GLOBALS["lang"]['Also can be created from the'] = 'Var izveidot arī no';

$GLOBALS["lang"]['Alternatives'] = 'Alternatīvas';

$GLOBALS["lang"]['Amazon AWS Fields'] = 'Amazon AWS Lauki';

$GLOBALS["lang"]['American Samoa'] = 'Amerikas Samoa';

$GLOBALS["lang"]['An Active Directory discovery will query Active Directory for a list of networks and scan the associated IPs just like a regular Subnet discovery.'] = 'Aktīva direktorija atklāšana vaicās Active Directory par tīklu sarakstu un skenēt saistītos IP tāpat kā regulāru Subnet atklājums.';

$GLOBALS["lang"]['An Org (organization) is the owner of most items in collections within Open-AudIT. With the exception of global items like <i>configuration</i>, most items are assigned to (owned by) an Org. A user has access to those items in a collection, that below to an Org the user has permission on.'] = 'Org (organizācija) ir īpašnieks lielākajai daļai kolekciju Open-AudIT. Izņemot tādus globālos posteņus kā <i>konfigurācija</i>, lielākā daļa posteņu tiek piešķirti (pieder) Org. Lietotājam ir piekļuve šiem priekšmetiem kolekcijā, ka zemāk Org lietotājam ir atļauja.';

$GLOBALS["lang"]['An application is actively accepting TCP connections, UDP datagrams or SCTP associations on this port. Finding these is often the primary goal of port scanning. Security-minded people know that each open port is an avenue for attack. Attackers and pen-testers want to exploit the open ports, while administrators try to close or protect them with firewalls without thwarting legitimate users. Open ports are also interesting for non-security scans because they show services available for use on the network.'] = 'Programma aktīvi pieņem TCP savienojumus, UDP datugrammas vai SCTP asociācijas šajā ostā. To atrašana bieži ir galvenais portu skenēšanas mērķis. Drošībai noskaņoti cilvēki zina, ka katra atklātā osta ir uzbrukuma ceļš. Uzbrucēji un pildspalvu izmēģinātāji vēlas izmantot atvērtās ostas, savukārt administratori cenšas tās aizvērt vai aizsargāt ar ugunsmūriem, netraucējot likumīgiem lietotājiem. Atvērtie porti ir interesanti arī nedrošības skenēšanai, jo tie rāda pakalpojumus, kas pieejami izmantošanai tīklā.';

$GLOBALS["lang"]['An array of <code>benchmarks.id</code>.'] = 'Masīvs <code>benchmarks.id</code>.';

$GLOBALS["lang"]['An array of <code>devices.id</code>.'] = 'Masīvs <code>devices.id</code>.';

$GLOBALS["lang"]['An array of object representing external links to more information.'] = 'Objekta masīvs, kas atveido ārējās saites uz plašāku informāciju.';

$GLOBALS["lang"]['An educated guess to the identity and type of device'] = 'Izglītots pieņēmums par ierīces identitāti un tipu';

$GLOBALS["lang"]['An encrypted JSON document containing the required attributes depending on the <code>credentials.type</code>.'] = 'Šifrēts JSON dokuments, kas satur nepieciešamos atribūtus atkarībā no <code>credentials.type</code>.';

$GLOBALS["lang"]['An enterprise private network is a network that a single organization builds to interconnect its office locations (e.g., production sites, head offices, remote offices, shops) so they can share computer resources.'] = 'Uzņēmuma privātais tīkls ir tīkls, ko viena organizācija veido, lai savstarpēji savienotu savas biroju vietas (piemēram, ražotnes, galvenie biroji, attāli biroji, veikali), lai tās varētu dalīties ar datoru resursiem.';

$GLOBALS["lang"]['An entry can be created using the web interface if the current user logged in has a role that contains the'] = 'Ierakstu var izveidot, izmantojot tīmekļa saskarni, ja pašreizējam lietotājam, kurš pieslēdzies, ir loma, kas satur';

$GLOBALS["lang"]['An example JSON POST body is below. This should be attached to the &quot;data&quot; form item.'] = 'Piemērs JSON POST ķermenis ir zemāk. Tas jāpievieno "datu" veidlapas punktam.';

$GLOBALS["lang"]['An example widget SQL showing devices counted per location.'] = 'Piemēra sīkrīks SQL, kas rāda ierīces saskaitītas katrā vietā.';

$GLOBALS["lang"]['An existing Open-AudIT user was authenticated and authorized by the LDAP server. Success.'] = 'Eksistējošu Open- AudIT lietotāju autentificēja un pilnvaroja LDAP serveris. Panākumi.';

$GLOBALS["lang"]['An indication of the level of service required by this site.'] = 'Norāde par pakalpojuma līmeni, ko pieprasa šī vietne.';

$GLOBALS["lang"]['An internal field that indicates if the discovery has completed.'] = 'Iekšējais lauks, kas norāda, vai atradums ir pabeigts.';

$GLOBALS["lang"]['An open|filtered port is considered open (and will trigger device detection).<br>Previously, Open-AudIT considered an Nmap response of'] = 'Atveramo;filtrēto pieslēgvietu uzskata par atvērtu (un iedarbinās ierīces atklāšanu).<br/>Agrāk Open-Aud IT uzskatīja Nmap atbildi';

$GLOBALS["lang"]['An optional GeoCode'] = 'Fakultatīvs GeoCode';

$GLOBALS["lang"]['An optional password to use sudo.'] = 'Neobligāta parole sudo izmantošanai.';

$GLOBALS["lang"]['Analyzed'] = 'Analizēts';

$GLOBALS["lang"]['And finally, click Submit to execute this discovery.'] = 'Un visbeidzot, noklikšķiniet uz Iesniegt, lai izpildītu šo atklājumu.';

$GLOBALS["lang"]['And if Something Goes Wrong?'] = 'Un ja kaut kas notiek nepareizi?';

$GLOBALS["lang"]['And lastly click <i>Submit</i> to create your Open-AudIT Auth method for Entra.'] = 'Un pēdējais klikšķis <i>Nosūtīt</i> lai izveidotu savu Open-AudIT Auth metodi Entra.';

$GLOBALS["lang"]['And lastly, not so much a security issue - more peace of mind. The data structures are open and documented. You can view them'] = 'Un visbeidzot, ne tik daudz drošības jautājums - lielāks miers. Datu struktūras ir atvērtas un dokumentētas. Jūs varat tos apskatīt';

$GLOBALS["lang"]['And provide a name - we humbly recommend Open-AudIT &#128512;, but you can name it anything you like. Make sure the option for <i>Integrate any other application you do not find in the gallery (Non-gallery)</i> is selected. And then click <i>Create<i>.'] = 'Un sniedziet nosaukumu - mēs pazemīgi iesakām Open-AudIT, bet jūs varat nosaukt to visu, kas jums patīk. Pārliecinieties, ka <i>Integrēt jebkuru citu pieteikumu jūs neatrodat galerijā (ne-galerija)</i> ir izvēlēts. Un tad noklikšķiniet <i>Izveidot<i>.</i></i>';

$GLOBALS["lang"]['And so much more.'] = 'Un vēl daudz vairāk.';

$GLOBALS["lang"]['Andorra'] = 'Andora';

$GLOBALS["lang"]['Angola'] = 'Angola';

$GLOBALS["lang"]['Anguilla'] = 'Angilja';

$GLOBALS["lang"]['Annex A Controls'] = 'A pielikuma kontrole';

$GLOBALS["lang"]['Antarctica'] = 'Antarktika';

$GLOBALS["lang"]['AntiVirus'] = 'Antivīruss';

$GLOBALS["lang"]['AntiVirus Packages'] = 'Pretvīrusu pakotnes';

$GLOBALS["lang"]['Antigua and Barbuda'] = 'Antigva un Barbuda';

$GLOBALS["lang"]['Antivirus'] = 'Antivīruss';

$GLOBALS["lang"]['Any TCP ports (comma seperated, no spaces) you wish to exclude from this discovery. Only available when using Nmap 7+.'] = 'Jebkuri TCP porti (comma seperated, no atstarpes) jūs vēlaties izslēgt no šī atklājuma. Pieejams tikai izmantojot Nmap 7+.';

$GLOBALS["lang"]['Any UDP ports (comma seperated, no spaces) you wish to exclude from this discovery. Only available when using Nmap 7+.'] = 'Jebkura UDP porti (comma seperated, bez atstarpēm) jūs vēlaties izslēgt no šī atklājuma. Pieejams tikai izmantojot Nmap 7+.';

$GLOBALS["lang"]['Any additional documentation you need.'] = 'Visi papildu dokumenti jums ir nepieciešami.';

$GLOBALS["lang"]['Any additional notes you care to make.'] = 'Jebkuras papildu piezīmes, ko vēlaties veikt.';

$GLOBALS["lang"]['Any attributes followed by a * indicate that CVSS data less than v4 was used to complete this field. By default, we attempt to use v4 fields, however if they are not populated we will fallback to the previous version(s) for attributes.'] = 'Visi atribūti, kam seko a *, norāda, ka šā lauka aizpildīšanai izmantoti CVSS dati, kas mazāki par v4. Pēc noklusējuma mēs mēģinām izmantot v4 laukus, tomēr, ja tie nav apdzīvoti, mēs atkāpsimies uz iepriekšējo versiju(-ām) atribūtiem.';

$GLOBALS["lang"]['Any devices will be assigned to this Org when they run their audit script (if set).'] = 'Visām ierīcēm tiks piešķirts šis Org, kad tās darbosies savu audita skriptu (ja uzstādīts).';

$GLOBALS["lang"]['Any devices will be assigned to this Org when they run their audit script (if set). Links to <code>orgs.id</code>.'] = 'Visām ierīcēm tiks piešķirts šis Org, kad tās darbosies savu audita skriptu (ja uzstādīts). Saites uz <code>orgs.id</code>.';

$GLOBALS["lang"]['Any discovered devices will be assigned to this Location if set. Links to <code>locations.id</code>.'] = 'Jebkuras atklātas ierīces tiks piešķirts šajā vietā, ja iestatīts. Saites uz <code>locations.id</code>.';

$GLOBALS["lang"]['Any discovered devices will be assigned to this Location when they run their audit script (if set).'] = 'Jebkuras atklātas ierīces tiks piešķirts uz šo vietu, kad viņi palaist savu audita skriptu (ja uzstādīts).';

$GLOBALS["lang"]['Any discovered devices will be assigned to this Location when they run their audit script (if set). Links to <code>locations.id</code>.'] = 'Jebkuras atklātas ierīces tiks piešķirts uz šo vietu, kad viņi palaist savu audita skriptu (ja uzstādīts). Saites uz <code>locations.id</code>.';

$GLOBALS["lang"]['Any discovered devices will be assigned to this Org if set. If not set, they are assigned to the <code>org_id</code> of this discovery. Links to <code>orgs.id</code>.'] = 'Visām atklātajām ierīcēm tiks piešķirts šis Org, ja uzstādīts. Ja tās nav noteiktas, tās piešķir <code>org_id</code> par šo atklājumu. Saites uz <code>orgs.id</code>.';

$GLOBALS["lang"]['Any files found in this manner are stored in the <i>executable</i> table as per any other device component.'] = 'Visi šādi atrastie faili tiek saglabāti <i>Izpildāmais</i> tabula atbilstoši jebkuram citam ierīces komponentam.';

$GLOBALS["lang"]['Any required filter. NOTE: When type = traffic, this represents the font-awesome icon.'] = 'Jebkurš nepieciešamais filtrs. PIEZĪME: ja tips = datplūsma, šis attēlo fontu- awesome ikonu.';

$GLOBALS["lang"]['Any specific TCP ports you wish tested (comma seperated, no spaces).'] = 'Jebkuri konkrēti TCP porti, kurus vēlaties pārbaudīt (comma seperated, no atstarpes).';

$GLOBALS["lang"]['Any specific UDP ports you wish tested (comma seperated, no spaces).'] = 'Jebkuri konkrēti UDP porti, kurus vēlaties testēt (comma seperated, no atstarpes).';

$GLOBALS["lang"]['Any user uploaded images are placed here.'] = 'Šeit tiek ievietoti visi augšupielādētie lietotāja attēli.';

$GLOBALS["lang"]['Application'] = 'Piemērošana';

$GLOBALS["lang"]['Application Definitions'] = 'Piemērošanas definīcijas';

$GLOBALS["lang"]['application_id'] = 'Programmas ID';

$GLOBALS["lang"]['Application ID'] = 'Programmas ID';

$GLOBALS["lang"]['Application Licenses'] = 'Programmas licences';

$GLOBALS["lang"]['Application, Operating System or Hardware.'] = 'Aplikācija, operētājsistēma vai aparatūra.';

$GLOBALS["lang"]['applications'] = 'Pieteikumi';

$GLOBALS["lang"]['Applications'] = 'Pieteikumi';

$GLOBALS["lang"]['Applications are an Enterprise only feature.'] = 'Lietojumi ir tikai uzņēmums iezīme.';

$GLOBALS["lang"]['Applications are being introduced in Open-AudIT 2.2 with a view to expand on the concept as further development is made.'] = 'Aplikācijas tiek ieviestas Open-AudIT 2.2, lai paplašinātu koncepciju, veicot tālāku attīstību.';

$GLOBALS["lang"]['applied'] = 'Piemēro';

$GLOBALS["lang"]['Applied'] = 'Piemēro';

$GLOBALS["lang"]['Approved'] = 'Apstiprināts';

$GLOBALS["lang"]['Approved Packages'] = 'Apstiprinātie iepakojumi';

$GLOBALS["lang"]['April'] = 'Aprīlis';

$GLOBALS["lang"]['Arabic'] = 'Arābu';

$GLOBALS["lang"]['architecture'] = 'Arhitektūra';

$GLOBALS["lang"]['Architecture'] = 'Arhitektūra';

$GLOBALS["lang"]['Are you sure you want to delete this input item?'] = 'Vai tiešām vēlaties dzēst šo ievades ierakstu?';

$GLOBALS["lang"]['Are you sure you want to delete this output item?'] = 'Vai tiešām vēlaties dzēst šo izvada vienību?';

$GLOBALS["lang"]['Are you sure?'] = 'Tiešām?';

$GLOBALS["lang"]['Are you sure? This will remove all queue entries and prevent the remaining IPs from being discovered.'] = 'Tiešām? Šis izdzēsīs visus rindas ierakstus un novērsīs atlikušo IP atklāšanu.';

$GLOBALS["lang"]['Are you sure? This will reset the queue processing count and could cause load on the server.'] = 'Tiešām? Šis atiestatīs rindas apstrādes skaitu un var izraisīt ielādi uz servera.';

$GLOBALS["lang"]['area'] = 'Apgabals';

$GLOBALS["lang"]['Area'] = 'Apgabals';

$GLOBALS["lang"]['Argentina'] = 'Argentīna';

$GLOBALS["lang"]['Armenia'] = 'Armēnija';

$GLOBALS["lang"]['arp'] = 'Arps';

$GLOBALS["lang"]['Arp'] = 'Arps';

$GLOBALS["lang"]['Aruba'] = 'Aruba';

$GLOBALS["lang"]['As a reminder of how authorisations works in Open-AudIT, see'] = 'Kā atgādinājumu par to, kā atļaujas darbojas Open-AudIT, skatīt';

$GLOBALS["lang"]['As a result, we <strong>must</strong> have the admin$ share available to the discovery credentials user. Please check the target Windows machine provides <i>write</i> access for the discovery credentials user.<br>'] = 'Tā rezultātā mēs <strong>nav</strong> ir admin$ daļa pieejama atklāšanas akreditācijas lietotājam. Lūdzu, pārbaudiet mērķa Windows mašīna sniedz <i>rakstīt</i> piekļuve meklēšanas datu lietotājam.<br/>';

$GLOBALS["lang"]['As mentioned above, the developers do not speak all the translation languages offered. This means we cannot review with acuracy, the translated text. We do try for a cursory review. If you see something that is not translated correctly, you can change it yourself. Edit the appropriate language file (as below) and find the text to be changed. Maybe it does not exist and you need to add it. Just change the text, save the file and refresh your we page. No need to restart any services/daemons for it to take effect. You might need to force refresh your browser.'] = 'Kā minēts iepriekš, izstrādātāji nerunā visās piedāvātajās tulkošanas valodās. Tas nozīmē, ka mēs nevaram pārskatīt ar neprecizitāti, tulkoto tekstu. Mēs cenšamies kursoru atsauksmi. Ja jūs redzat kaut ko, kas nav tulkots pareizi, jūs varat mainīt to pats. Rediģēt atbilstošo valodas failu (kā zemāk) un atrast tekstu, kas jāmaina. Varbūt tā neeksistē un jums tā ir jāpievieno. Vienkārši mainiet tekstu, saglabājiet failu un atsvaidziniet mūsu lapu. Nav nepieciešams restartēt nekādus servisus/dēmonus, lai tas stātos spēkā. Jums var būt nepieciešams piespiest atsvaidzināt savu pārlūkprogrammu.';

$GLOBALS["lang"]['As per the OpenSCAP benchmarks - <i>Do not attempt to implement any of the settings in this benchmark without first testing them in a non-operational environment. The creators of this benchmark assume no responsibility whatsoever for its use by other parties, and makes no guarantees, expressed or implied, about its quality, reliability, or any other characteristic.</i><br><br>Seriously, do not blindly start <i>fixing</i> issues revealed after running a benchmark without first thoroughly testing in a non-production, identical environment.'] = 'Saskaņā ar OpenSCAP kritērijiem <i>Nemēģiniet ieviest nevienu no iestatījumiem šajā etalonā, vispirms nepārbaudot tos neoperatīvā vidē. Šā etalona veidotāji neuzņemas nekādu atbildību par to, ka to izmanto citas puses, un nesniedz nekādas izteiktas vai netiešas garantijas par tā kvalitāti, uzticamību vai citām īpašībām.</i><br/><br/>Nopietni, nav akli sākt <i>ar ko nosaka</i> problēmas, kas atklātas pēc etalona izmantošanas, vispirms rūpīgi nepārbaudot neražojošā, identiskā vidē.';

$GLOBALS["lang"]['As per the attributes for device environments. Production, Training, et al.'] = 'Kā ierīces vides atribūtiem. Production, Training, et al.';

$GLOBALS["lang"]['As the audit script uses bash, you can use the wildcard of * when you are defining directories and exclusions.'] = 'Tā kā revīzijas skripts izmanto bash, jūs varat izmantot wildcard *, kad jūs definēt direktorijus un izņēmumus.';

$GLOBALS["lang"]['As usual, go to menu → Manage → Integrations → Create Integration. As above, if you are running on Linux and you have NMIS on the same server, you do not need to do anything other than click <i>Submit</i>. I cannot make it easier than that.'] = 'Kā parasti, iet uz izvēlni → Pārvaldīt → Integrācijas → Izveidot integrāciju. Kā iepriekš, ja jūs darbojaties uz Linux un jums ir NMIS uz tā paša servera, jums nav nepieciešams darīt neko citu kā tikai klikšķi <i>Nosūtīt</i>. Es nevaru to atvieglot.';

$GLOBALS["lang"]['As we run Discoveries and collect device results we populate the list of networks. The Blessed Subnets feature uses this list of networks to only accept data from devices on those networks.'] = 'Kā mēs palaist Atklājumi un apkopot ierīces rezultātus mēs aizpildīt sarakstu tīklu. Slavens Subnets funkcija izmanto šo tīklu sarakstu, lai pieņemtu tikai datus no ierīcēm šajos tīklos.';

$GLOBALS["lang"]['As you have Collectors registered, please choose where to execute this discovery.'] = 'Kā jūs esat reģistrējis Kolekcionāri, lūdzu, izvēlieties, kur veikt šo atklājumu.';

$GLOBALS["lang"]['Ask me later'] = 'Pajautā man vēlāk';

$GLOBALS["lang"]['Ask the Community for help or contribute answers for others.'] = 'Lūdziet Kopienai palīdzību vai atbildes citiem.';

$GLOBALS["lang"]['aspect_ratio'] = 'Aspekta attiecība';

$GLOBALS["lang"]['Aspect Ratio'] = 'Aspekta attiecība';

$GLOBALS["lang"]['Asset ID'] = 'Aktīvu ID';

$GLOBALS["lang"]['asset_ident'] = 'Aktīvu identifikators';

$GLOBALS["lang"]['Asset Ident'] = 'Aktīvu identifikators';

$GLOBALS["lang"]['asset_number'] = 'Aktīvu numurs';

$GLOBALS["lang"]['Asset Number'] = 'Aktīvu numurs';

$GLOBALS["lang"]['asset_tag'] = 'Aktīvu tags';

$GLOBALS["lang"]['Asset Tag'] = 'Aktīvu tags';

$GLOBALS["lang"]['Assign Device to Application'] = 'Piešķirt ierīci lietotnei';

$GLOBALS["lang"]['Assign Device to Cluster'] = 'Piešķirt ierīci klasteram';

$GLOBALS["lang"]['Assign Device to Location'] = 'Piešķirt ierīci atrašanās vietai';

$GLOBALS["lang"]['Assign Device to Organisation'] = 'Piešķirt ierīci organizācijai';

$GLOBALS["lang"]['Assign Devices to Location'] = 'Piešķirt ierīces atrašanās vietai';

$GLOBALS["lang"]['Assign Devices to Organisation'] = 'Piešķirt ierīces organizācijai';

$GLOBALS["lang"]['Assign an ISMS manager or team'] = 'Piešķirt ISMS vadītāju vai komandu';

$GLOBALS["lang"]['Assign an Operator'] = 'Piešķirt ekspluatantam';

$GLOBALS["lang"]['Assign any audited devices to this Org. Leave blank to leave device in currently assigned Org (or to set default).'] = 'Piešķirt visām revidētajām ierīcēm šo Org. Atstājiet tukšu, lai atstātu ierīci šobrīd piešķirtajā Org (vai iestatīt noklusēto).';

$GLOBALS["lang"]['Assign the Device to a Location'] = 'Piešķirt ierīci vietai';

$GLOBALS["lang"]['Assign the device to an Org'] = 'Piešķirt ierīci orgam';

$GLOBALS["lang"]['Assigned To'] = 'Piešķirts';

$GLOBALS["lang"]['Assigning Discovered Devices'] = 'Piešķirt atklātas ierīces';

$GLOBALS["lang"]['At present we can use netstat_ports, software and users.'] = 'Šobrīd mēs varam izmantot netstat_portus, programmatūru un lietotājus.';

$GLOBALS["lang"]['attached_device_id'] = 'Pievienotais ierīces ID';

$GLOBALS["lang"]['Attached Device ID'] = 'Pievienotais ierīces ID';

$GLOBALS["lang"]['attached_to'] = 'Pievienots';

$GLOBALS["lang"]['Attached To'] = 'Pievienots';

$GLOBALS["lang"]['attachment'] = 'Pielikums';

$GLOBALS["lang"]['Attachment'] = 'Pielikums';

$GLOBALS["lang"]['attachments'] = 'Pielikumi';

$GLOBALS["lang"]['Attachments'] = 'Pielikumi';

$GLOBALS["lang"]['attack_complexity'] = 'Uzbrukuma sarežģītība';

$GLOBALS["lang"]['Attack Complexity'] = 'Uzbrukuma sarežģītība';

$GLOBALS["lang"]['attack_requirements'] = 'Uzbrukuma prasības';

$GLOBALS["lang"]['Attack Requirements'] = 'Uzbrukuma prasības';

$GLOBALS["lang"]['attack_vector'] = 'Uzbrukuma vektors';

$GLOBALS["lang"]['Attack Vector'] = 'Uzbrukuma vektors';

$GLOBALS["lang"]['Attempt to ping the device if we are not auditing localhost.'] = 'Mēģinājums ping ierīci, ja mēs neesam revīzijas localhost.';

$GLOBALS["lang"]['Attribute'] = 'Atribūts';

$GLOBALS["lang"]['attributes'] = 'Atribūti';

$GLOBALS["lang"]['Attributes'] = 'Atribūti';

$GLOBALS["lang"]['Attributes are stored for Open-AudIT to use for particular fields, at present all fields are based on the devices, locations, orgs and queries tables. The attributes you can edit are associated with the following columns: Class, Environment, Status & Type.'] = 'Atribūti tiek glabāti Open-AudIT lietošanai konkrētos laukos, pašlaik visi lauki ir balstīti uz ierīcēm, vietām, orgs un vaicājumu tabulām. Piezīmes, ko varat rediģēt, ir saistītas ar šādām kolonnām: Klase, vide, statuss un tips.';

$GLOBALS["lang"]['Audit'] = 'Revīzija';

$GLOBALS["lang"]['Audit AIX'] = 'Revīzijas AIX';

$GLOBALS["lang"]['Audit DNS'] = 'Revīzijas DNS';

$GLOBALS["lang"]['Audit ESXi'] = 'Audits ESXi';

$GLOBALS["lang"]['Audit Linux'] = 'Audits Linux';

$GLOBALS["lang"]['audit_log'] = 'Pārbaudes žurnāls';

$GLOBALS["lang"]['Audit Log'] = 'Pārbaudes žurnāls';

$GLOBALS["lang"]['Audit Mount Point'] = 'Revīzijas kalna punkts';

$GLOBALS["lang"]['Audit My PC'] = 'Audits mans PC';

$GLOBALS["lang"]['Audit Netstat'] = 'Audits Netstat';

$GLOBALS["lang"]['Audit OSX'] = 'Audits OSX';

$GLOBALS["lang"]['Audit Result Input'] = 'Revīzijas rezultātu ievade';

$GLOBALS["lang"]['Audit Software'] = 'Revīzijas programmatūra';

$GLOBALS["lang"]['Audit Status'] = 'Revīzijas statuss';

$GLOBALS["lang"]['Audit Win32 Product'] = 'Revīzijas Win32 Produkts';

$GLOBALS["lang"]['Audit Windows'] = 'Audits Windows';

$GLOBALS["lang"]['Audit the Device'] = 'Kontrolēt ierīci';

$GLOBALS["lang"]['Audits'] = 'Revīzijas';

$GLOBALS["lang"]['August'] = 'Augusts';

$GLOBALS["lang"]['Australia'] = 'Austrālija';

$GLOBALS["lang"]['Austria'] = 'Austrija';

$GLOBALS["lang"]['Auth'] = 'Auth';

$GLOBALS["lang"]['auth'] = 'Auth';

$GLOBALS["lang"]['Auth Methods'] = 'Auth metodes';

$GLOBALS["lang"]['Authenticate only'] = 'Autentificēt tikai';

$GLOBALS["lang"]['Authentication Passphrase'] = 'Autentificēšanas parole';

$GLOBALS["lang"]['Authentication Protocol'] = 'Autentificēšanas protokols';

$GLOBALS["lang"]['authority_key_ident'] = 'Iestādes atslēgas identifikators';

$GLOBALS["lang"]['Authority Key Ident'] = 'Iestādes atslēgas identifikators';

$GLOBALS["lang"]['Auto'] = 'Automātiski';

$GLOBALS["lang"]['auto_renew'] = 'Automātiski atjaunot';

$GLOBALS["lang"]['Auto Renew'] = 'Automātiski atjaunot';

$GLOBALS["lang"]['Auto populated by the Open-AudIT Server.'] = 'Automātiski apdzīvo Open-AudIT serveri.';

$GLOBALS["lang"]['AutoRenew'] = 'Automātiski atjaunot';

$GLOBALS["lang"]['automatable'] = 'Automātiski';

$GLOBALS["lang"]['Automatable'] = 'Automātiski';

$GLOBALS["lang"]['Automatically populated based on the Collectors OS.'] = 'Automātiski apdzīvots, balstoties uz Kolekcionāru OS.';

$GLOBALS["lang"]['availability'] = 'Pieejamība';

$GLOBALS["lang"]['Availability'] = 'Pieejamība';

$GLOBALS["lang"]['Available Benchmarks'] = 'Pieejamie kritēriji';

$GLOBALS["lang"]['Awaiting Analysis'] = 'Gaida analīze';

$GLOBALS["lang"]['Azerbaijan'] = 'Azerbaidžāna';

$GLOBALS["lang"]['Azerbaijani'] = 'Azerbaidžāna';

$GLOBALS["lang"]['Azure Active Directory'] = 'Aktīvs direktorijs';

$GLOBALS["lang"]['BTU Max'] = 'BTU Max';

$GLOBALS["lang"]['BTU Total'] = 'BTU kopā';

$GLOBALS["lang"]['Backbone network'] = 'Pamattīkls';

$GLOBALS["lang"]['Backup'] = 'Rezerves kopija';

$GLOBALS["lang"]['Bahamas the'] = 'Bahamu salās';

$GLOBALS["lang"]['Bahrain'] = 'Bahreina';

$GLOBALS["lang"]['Bangladesh'] = 'Bangladeša';

$GLOBALS["lang"]['bank'] = 'Banka';

$GLOBALS["lang"]['Bank'] = 'Banka';

$GLOBALS["lang"]['Banned'] = 'Konservēti';

$GLOBALS["lang"]['Banned Packages'] = 'Konservētas pakas';

$GLOBALS["lang"]['bar_code'] = 'Joslas kods';

$GLOBALS["lang"]['Bar Code'] = 'Joslas kods';

$GLOBALS["lang"]['Barbados'] = 'Barbadosa';

$GLOBALS["lang"]['Base DN'] = 'Bāze DN';

$GLOBALS["lang"]['base_score'] = 'Pamata rezultāts';

$GLOBALS["lang"]['Base Score'] = 'Pamata rezultāts';

$GLOBALS["lang"]['base_severity'] = 'Pamata smagums';

$GLOBALS["lang"]['Base Severity'] = 'Pamata smagums';

$GLOBALS["lang"]['based_on'] = 'Pamatojoties uz';

$GLOBALS["lang"]['Based On'] = 'Pamatojoties uz';

$GLOBALS["lang"]['baseline'] = 'Bāzlīnija';

$GLOBALS["lang"]['Baseline'] = 'Bāzlīnija';

$GLOBALS["lang"]['baseline_id'] = 'Sākotnējais ID';

$GLOBALS["lang"]['Baseline ID'] = 'Sākotnējais ID';

$GLOBALS["lang"]['baselines'] = 'Bāzlīnijas';

$GLOBALS["lang"]['Baselines'] = 'Bāzlīnijas';

$GLOBALS["lang"]['baselines_policies'] = 'Pamata politikas';

$GLOBALS["lang"]['Baselines Policies'] = 'Pamata politikas';

$GLOBALS["lang"]['Baselines Policy'] = 'Bāzes līnijas politika';

$GLOBALS["lang"]['Baselines Policy Details'] = 'Bāzes līnijas politikas detaļas';

$GLOBALS["lang"]['baselines_results'] = 'Bāzes līnijas rezultāti';

$GLOBALS["lang"]['Baselines Results'] = 'Bāzes līnijas rezultāti';

$GLOBALS["lang"]['Baselines can compare netstat ports, users and software.'] = 'Bāzes līnijas var salīdzināt netstat ostas, lietotājus un programmatūru.';

$GLOBALS["lang"]['Baselines enable you to combine audit data with a set of attributes you have previously defined (your baseline) to determine compliance of devices.'] = 'Bāzes līnijas ļauj apvienot audita datus ar iepriekš definētu atribūtu kopumu (jūsu bāzes līnijas), lai noteiktu ierīču atbilstību.';

$GLOBALS["lang"]['Baselines for Device Comparison'] = 'Ierīču salīdzināšanas bāzes līnijas';

$GLOBALS["lang"]['Basic'] = 'Vienkāršs';

$GLOBALS["lang"]['Basque'] = 'BaskuName';

$GLOBALS["lang"]['Because we try to be as transparent as possible, here is your actual data that we send.'] = 'Jo mēs cenšamies būt pēc iespējas pārredzamāki, šeit ir jūsu faktiskie dati, ko mēs sūtām.';

$GLOBALS["lang"]['Being able to determine which machines are configured in the same way is a major part of systems administration and auditing – and now reporting on that will be made simple and automated. Once you define your baseline it will automatically run against a set of devices on a predetermined schedule. The output of these executed baselines will be available for web viewing, importing into a third party system or even as a printed report.<br><br>For auditing and management purposes it can be advantageous to baseline individual devices against a fixed, known good device. Baselines enable you to combine audit data with a set of attributes you have previously defined (your baseline) to determine compliance of devices.'] = 'Spēja noteikt, kuras mašīnas ir konfigurētas tādā pašā veidā ir liela daļa no sistēmu administrēšanas un audita - un tagad ziņošana par to būs vienkārša un automatizēta. Kad jūs definēt savu bāzes līniju, tas automātiski darbojas pret ierīču komplektu iepriekš noteiktā grafikā. Šo izpildīto bāzes līniju produkcija būs pieejama tīmekļa apskatīšanai, importēšanai trešās puses sistēmā vai pat kā drukāts ziņojums.<br/><br/>Revīzijas un vadības nolūkos var būt izdevīgi bāzes atsevišķām ierīcēm pret fiksētu, zināmu labu ierīci. Bāzes līnijas ļauj apvienot audita datus ar iepriekš definētu atribūtu kopumu (jūsu bāzes līnijas), lai noteiktu ierīču atbilstību.';

$GLOBALS["lang"]['Belarus'] = 'Baltkrievija';

$GLOBALS["lang"]['Belgium'] = 'Beļģija';

$GLOBALS["lang"]['Belize'] = 'Beliza';

$GLOBALS["lang"]['Below is an example of the required csv format.'] = 'Zemāk ir piemērs nepieciešamo csv formātā.';

$GLOBALS["lang"]['Below these lines are where the variables are injected into the script. Following on from our earlier example, the Linux audit script is populated with our directory like so'] = 'Zem šīm rindām ir vieta, kur mainīgie tiek ievadīti skriptā. Sekojot no mūsu iepriekšējo piemēru, Linux audita skripts ir apdzīvota ar mūsu direktoriju, piemēram, tā';

$GLOBALS["lang"]['Below you can see an example Org Chart. If a user has permission on the <i>Finance A</i> Org, they also have permission on the descendant Orgs of Dept A, B & C. This is regardless of the collection requested.<br><br>If the collection requested allows ascendants, then the user will also have access to Company #1 and Default Org items. This is for (as above) queries, groups, et al.<br><br>Note - A user may have access to a query from Default Org, but that is the query itself not the result. The result will only show devices that the user has access to - IE devices from Finance A and Dept A, B & C.'] = 'Zemāk jūs varat redzēt piemēru Org Chart. Ja lietotājam ir atļauja <i>Finansējums A</i> Org, viņiem ir arī atļauja uz pēcnācējs Orgs Dept A, B & C. Tas ir neatkarīgi no pieprasītās kolekcijas.<br/><br/>Ja pieprasītā kolekcija ļauj augšupējiem, tad lietotājam būs piekļuve arī Company #1 un Noklusējuma Org ierakstiem. Tas attiecas uz (kā iepriekš) jautājumiem, grupām, et al.<br/><br/>Piezīme - Lietotājam var būt pieejams vaicājums no noklusējuma Org, bet tas ir pats vaicājums nevis rezultāts. Rezultāts tikai parādīs ierīces, kuras lietotājam ir pieejamas - IE ierīces no Finance A un Dept A, B & C.';

$GLOBALS["lang"]['Benchmark'] = 'Standarts';

$GLOBALS["lang"]['benchmark_id'] = 'Standarta ID';

$GLOBALS["lang"]['Benchmark ID'] = 'Standarta ID';

$GLOBALS["lang"]['Benchmark Tasks are created automatically when a benchmark is created.'] = 'Standartu uzdevumi tiek radīti automātiski, kad etalons tiek izveidots.';

$GLOBALS["lang"]['Benchmark execution and processing can take a lengthy amount of time, hence the preference to schedule them and not run them ad-hoc.'] = 'Standartu izpilde un apstrāde var aizņemt ilgu laiku, tādējādi priekšroku dod plānot tos un ne palaist tos ad hoc.';

$GLOBALS["lang"]['benchmarks'] = 'Kritēriji';

$GLOBALS["lang"]['Benchmarks'] = 'Kritēriji';

$GLOBALS["lang"]['benchmarks_exceptions'] = 'Kritēriji Izņēmumi';

$GLOBALS["lang"]['Benchmarks Exceptions'] = 'Kritēriji Izņēmumi';

$GLOBALS["lang"]['benchmarks_log'] = 'Kritēriju žurnāls';

$GLOBALS["lang"]['Benchmarks Log'] = 'Kritēriju žurnāls';

$GLOBALS["lang"]['benchmarks_policies'] = 'Kritēriji Politika';

$GLOBALS["lang"]['Benchmarks Policies'] = 'Kritēriji Politika';

$GLOBALS["lang"]['benchmarks_result'] = 'Rezultāti';

$GLOBALS["lang"]['Benchmarks Result'] = 'Rezultāti';

$GLOBALS["lang"]['Benchmarks are created by providing an operating system and Version, combined with a specific guide and a list of machines to execute it upon. After creation, benchmarks are executed against the list of machines on a schedule.'] = 'Standarti tiek izveidoti, nodrošinot operētājsistēmu un versiju, apvienojumā ar īpašu rokasgrāmatu un mašīnu sarakstu, lai to izpildītu. Pēc izveidošanas, etaloni tiek izpildīti pret sarakstu mašīnas grafiku.';

$GLOBALS["lang"]['Benchmarks for Best Practise Configuration'] = 'Kritēriji vislabākajai prakses konfigurācijai';

$GLOBALS["lang"]['Benchmarks provide security recommendations for your computers, utilising the OpenSCAP tools and policies.</p><p><i>From the OpenSCAP homepage:</i>  In the ever-changing world of computer security where new vulnerabilities are being discovered and patched every day, enforcing security compliance must be a continuous process. It also needs to include a way to make adjustments to policies, as well as periodic assessment and risk monitoring. The OpenSCAP ecosystem provides tools and customizable policies for a quick, cost-effective and flexible implementation of these processes.'] = 'Standarti sniedz drošības ieteikumus jūsu datoriem, izmantojot OpenSCAP rīkus un politiku.<p><i>No OpenSCAP mājas lapas:</i> Pastāvīgi mainīgajā datoru drošības pasaulē, kur katru dienu tiek atklātas jaunas vājās vietas, drošības prasību ievērošanas nodrošināšanai ir jābūt nepārtrauktam procesam. Tajā jāietver arī veids, kā veikt politikas pielāgojumus, kā arī periodiska novērtēšana un riska uzraudzība. OpenSCAP ekosistēma nodrošina instrumentus un pielāgojamu politiku šo procesu ātrai, rentablai un elastīgai īstenošanai.</p>';

$GLOBALS["lang"]['Benefits'] = 'Ieguvumi';

$GLOBALS["lang"]['Bengali'] = 'BengāļuName';

$GLOBALS["lang"]['Benin'] = 'Benina';

$GLOBALS["lang"]['Bermuda'] = 'Bermudu salas';

$GLOBALS["lang"]['best_practises'] = 'Labākās prakses piemēri';

$GLOBALS["lang"]['Best Practises'] = 'Labākās prakses piemēri';

$GLOBALS["lang"]['Bhutan'] = 'Butāna';

$GLOBALS["lang"]['bios'] = 'Bios';

$GLOBALS["lang"]['Bios'] = 'Bios';

$GLOBALS["lang"]['body'] = 'Korpuss';

$GLOBALS["lang"]['Body'] = 'Korpuss';

$GLOBALS["lang"]['Bolivia'] = 'Bolīvija';

$GLOBALS["lang"]['Boolean'] = 'Bula';

$GLOBALS["lang"]['Boolean 1/0'] = 'Bula 1/0';

$GLOBALS["lang"]['Boolean y/n'] = 'Bula y/n';

$GLOBALS["lang"]['boot_device'] = 'Sāknēšanas ierīce';

$GLOBALS["lang"]['Boot Device'] = 'Sāknēšanas ierīce';

$GLOBALS["lang"]['bootable'] = 'Ielādējams';

$GLOBALS["lang"]['Bootable'] = 'Ielādējams';

$GLOBALS["lang"]['Bosnia and Herzegovina'] = 'Bosnija un Hercegovina';

$GLOBALS["lang"]['Both forms of'] = 'Abas';

$GLOBALS["lang"]['Botswana'] = 'Botsvāna';

$GLOBALS["lang"]['Bouvet Island (Bouvetoya)'] = 'Buvē sala (Bouvetoya)';

$GLOBALS["lang"]['Brazil'] = 'Brazīlija';

$GLOBALS["lang"]['Brazilian Portuguese'] = 'Brazīlijas portugāļuName';

$GLOBALS["lang"]['Breaking it Down'] = 'Kā to pārvarēt';

$GLOBALS["lang"]['British Indian Ocean Territory (Chagos Archipelago)'] = 'Britu Indijas okeāna teritorija (Čagu arhipelāgs)';

$GLOBALS["lang"]['British Virgin Islands'] = 'Britu Virdžīnu salas';

$GLOBALS["lang"]['Browse down the tree to Console Root -> Component Services -> Computers -> My Computer<br><br>Right click on <i>My Computer</i> and select properties<br><br>Select the <i>Default Properties</i> tab'] = 'Pārlūkot koku uz konsoles saknes -> Datori Mans dators<br/><br/>Labais klikšķis <i>Mans dators</i> un izvēlieties īpašības<br/><br/>Izvēlieties <i>Noklusētās īpašības</i> uzgalis';

$GLOBALS["lang"]['Brunei Darussalam'] = 'Bruneja Darusalama';

$GLOBALS["lang"]['btu_max'] = 'Btu Max';

$GLOBALS["lang"]['Btu Max'] = 'Btu Max';

$GLOBALS["lang"]['btu_total'] = 'Kopā Btu';

$GLOBALS["lang"]['Btu Total'] = 'Kopā Btu';

$GLOBALS["lang"]['build_number'] = 'Būves Numurs';

$GLOBALS["lang"]['Build Number'] = 'Būves Numurs';

$GLOBALS["lang"]['build_number_full'] = 'Būvēšanas numurs pilns';

$GLOBALS["lang"]['Build Number Full'] = 'Būvēšanas numurs pilns';

$GLOBALS["lang"]['Building'] = 'Ēka';

$GLOBALS["lang"]['Builds trust with clients and partners'] = 'Veido uzticību ar klientiem un partneriem';

$GLOBALS["lang"]['Bulgaria'] = 'Bulgārija';

$GLOBALS["lang"]['Bulgarian'] = 'Bulgāru';

$GLOBALS["lang"]['Bulk Edit'] = 'Lielapjoma rediģēšana';

$GLOBALS["lang"]['Bulk Edit Form'] = 'Bulk rediģēt formu';

$GLOBALS["lang"]['Bulk Editing Device Attributes'] = 'Lielapjoma rediģēšanas ierīces atribūti';

$GLOBALS["lang"]['Bulk edit selections wont stay selected after clicking next page.'] = 'Beztaras rediģēšanas izvēles paliks izvēlētas pēc noklikšķinot uz nākamās lapas.';

$GLOBALS["lang"]['Burkina Faso'] = 'Burkinafaso';

$GLOBALS["lang"]['Burundi'] = 'Burundi';

$GLOBALS["lang"]['business_requirements'] = 'Uzņēmējdarbības prasības';

$GLOBALS["lang"]['Business Requirements'] = 'Uzņēmējdarbības prasības';

$GLOBALS["lang"]['But I Only Have Windows Client Machines Available!'] = 'Bet man ir tikai Windows klientu mašīnas pieejama!';

$GLOBALS["lang"]['But I do not want to have to change the language file every time I update!'] = 'Bet es nevēlos, lai būtu jāmaina valodas failu katru reizi, kad es atjaunināt!';

$GLOBALS["lang"]['Buy'] = 'Pirkt';

$GLOBALS["lang"]['Buy More'] = 'Pirkt vairāk';

$GLOBALS["lang"]['Buy More Licenses'] = 'Iegādāties vairāk licenču';

$GLOBALS["lang"]['By'] = 'Pēc';

$GLOBALS["lang"]['By default we integrate all devices with their nmis_manage attribute set to <i>y</i>. With 4.2.0 we also ship a Rule that says <i>If we discover a device and it has a valid SNMP OID, mark that device as managed by NMIS</i>. Obviously you can disable this if it is not what you want.'] = 'Pēc noklusējuma mēs integrējam visas ierīces ar to nmis_manage atribūtu <i>y</i>. Ar 4.2.0 mēs arī nosūtīt noteikumu, kas saka <i>Ja mēs atklājam ierīci un tai ir derīgs SNMP OID, atzīmējiet šo ierīci, kā pārvalda NMIS</i>. Acīmredzot jūs varat atslēgt šo, ja tas nav tas, ko jūs vēlaties.';

$GLOBALS["lang"]['By default, we skip certificate validation because customers tend to use self-signed certificates. To enable certificate validation, edit the file below'] = 'Pēc noklusējuma, mēs izlaist sertifikātu apstiprināšanu, jo klienti mēdz izmantot pašparakstītus sertifikātus. Lai ieslēgtu sertifikātu apstiprināšanu, rediģējiet failu zemāk';

$GLOBALS["lang"]['CIDR'] = 'CIDR';

$GLOBALS["lang"]['CIDR Mask'] = 'CIDR Maska';

$GLOBALS["lang"]['cli_config'] = 'CLI Konfigurācija';

$GLOBALS["lang"]['CLI Config'] = 'CLI Konfigurācija';

$GLOBALS["lang"]['CPU'] = 'CPU';

$GLOBALS["lang"]['CPUs'] = 'CPU';

$GLOBALS["lang"]['CSV'] = 'CSV';

$GLOBALS["lang"]['CVE'] = 'CVE';

$GLOBALS["lang"]['CVEs with a status of received, awaiting analysis, undergoing analysis, rejected. These CVEs (mostly) do not contain sufficient information to enable us to generate a correct SQL query.'] = 'CVE ar saņemto statusu, gaidot analīzi, veicot analīzi, noraidīts. Šie CVE (galvenokārt) nesatur pietiekamu informāciju, lai mēs varētu radīt pareizu SQL vaicājumu.';

$GLOBALS["lang"]['Calculated from discovery.'] = 'Aprēķināts no atklāšanas.';

$GLOBALS["lang"]['Calculated total number of valid IP addresses for this network.'] = 'Aprēķinātais derīgais IP adrešu skaits šim tīklam.';

$GLOBALS["lang"]['Calculated upon completion, the time taken to execute this item.'] = 'Aprēķināts pēc pabeigšanas, laiks, kas nepieciešams, lai izpildītu šo posteni.';

$GLOBALS["lang"]['Calculated when integration is run and contains a JSON representation of the devices in this integration. Each links to <code>devices.id</code>.'] = 'Aprēķināts, kad integrācija ir palaista un tajā ir JSON attēlojums ierīcēm šajā integrācijā. Katra saite uz <code>devices.id</code>.';

$GLOBALS["lang"]['Calculated when integration is run and contains a JSON representation of the locations in this integration. Each links to <code>locations.id</code>.'] = 'Aprēķināts, kad integrācija ir palaista, un tajā ir JSON attēlojums par vietām šajā integrācijā. Katra saite uz <code>locations.id</code>.';

$GLOBALS["lang"]['Calculated when integration is run and contains the number of devices selected from Open-AudIT.'] = 'Aprēķināts, kad integrācija ir palaista un satur no Open-AudIT izvēlēto ierīču skaitu.';

$GLOBALS["lang"]['Calculated when integration is run and contains the number of devices selected the external system.'] = 'Aprēķināts, kad integrācija ir palaista, un satur ārējās sistēmas izvēlēto ierīču skaitu.';

$GLOBALS["lang"]['Calculated when integration is run and contains the number of devices to be updated in the external system.'] = 'Aprēķināts, kad integrācija ir palaista un satur to ierīču skaitu, kas jāatjaunina ārējā sistēmā.';

$GLOBALS["lang"]['Calculated when integration is run and contains the number of devices updated in Open-AudIT.'] = 'Aprēķināts, kad integrācija ir palaista un satur ierīču skaitu atjaunināta Open-AudIT.';

$GLOBALS["lang"]['Call up a command prompt by clicking Start and searching for <code>command</code>'] = 'Izsauciet komandu uzvedni, noklikšķinot uz Sākt un meklēt <code>command</code>';

$GLOBALS["lang"]['Cambodia'] = 'Kambodža';

$GLOBALS["lang"]['Cameroon'] = 'Kamerūna';

$GLOBALS["lang"]['Campus Area Network'] = 'Kampusas apgabala tīkls';

$GLOBALS["lang"]['Campus area network'] = 'Kampusas apgabala tīkls';

$GLOBALS["lang"]['Can be  <code>active</code>, <code>passive</code> or blank.'] = 'Var būt <code>active</code>, <code>passive</code> vai tukšs.';

$GLOBALS["lang"]['Can be <code>application</code>, <code>compute</code>, <code>database</code>, <code>storage</code>, <code>virtualisation</code>, <code>web</code>, <code>other</code> or blank.'] = 'Var būt <code>application</code>, <code>compute</code>, <code>database</code>, <code>storage</code>, <code>virtualisation</code>, <code>web</code>, <code>other</code> vai tukšs.';

$GLOBALS["lang"]['Can be <code>auto</code>, <code>fixed</code>, <code>other</code> or blank.'] = 'Var būt <code>auto</code>, <code>fixed</code>, <code>other</code> vai tukšs.';

$GLOBALS["lang"]['Can be <code>high availability</code>, <code>load balancing</code>, <code>performance</code>, <code>storage</code>, <code>other</code> or blank.'] = 'Var būt <code>high availability</code>, <code>load balancing</code>, <code>performance</code>, <code>storage</code>, <code>other</code> vai tukšs.';

$GLOBALS["lang"]['Can be <code>line</code>, <code>pie</code> or <code>traffic</code>.'] = 'Var būt <code>line</code>, <code>pie</code> vai <code>traffic</code>.';

$GLOBALS["lang"]['Can be <code>user</code> or <code>collector</code>.'] = 'Var būt <code>user</code> vai <code>collector</code>.';

$GLOBALS["lang"]['Can be set by discovery or user.'] = 'Var iestatīt ar atklājumu vai lietotāju.';

$GLOBALS["lang"]['Can be set by discovery or user. Uses the ID from the locations table.'] = 'Var iestatīt ar atklājumu vai lietotāju. Izmanto ID no atrašanās vietu tabulas.';

$GLOBALS["lang"]['Can the user edit this item.'] = 'Vai lietotājs var rediģēt šo ierakstu.';

$GLOBALS["lang"]['Canada'] = 'Kanāda';

$GLOBALS["lang"]['Cancel'] = 'Atcelt';

$GLOBALS["lang"]['capabilities'] = 'Iespējas';

$GLOBALS["lang"]['Capabilities'] = 'Iespējas';

$GLOBALS["lang"]['Capacity'] = 'Jauda';

$GLOBALS["lang"]['Cape Verde'] = 'Kaboverde';

$GLOBALS["lang"]['Capitalise'] = 'Kapitalizācija';

$GLOBALS["lang"]['caption'] = 'Apraksts';

$GLOBALS["lang"]['Caption'] = 'Apraksts';

$GLOBALS["lang"]['Catalan'] = 'Kataloņu';

$GLOBALS["lang"]['Cayman Islands'] = 'Kaimanu salas';

$GLOBALS["lang"]['Cellular Details'] = 'Elementu detaļas';

$GLOBALS["lang"]['Central African Republic'] = 'Centrālāfrikas Republika';

$GLOBALS["lang"]['certificate'] = 'Sertifikāts';

$GLOBALS["lang"]['Certificate'] = 'Sertifikāts';

$GLOBALS["lang"]['certificate_file'] = 'Sertifikāta fails';

$GLOBALS["lang"]['Certificate File'] = 'Sertifikāta fails';

$GLOBALS["lang"]['certificate_name'] = 'Sertifikāta nosaukums';

$GLOBALS["lang"]['Certificate Name'] = 'Sertifikāta nosaukums';

$GLOBALS["lang"]['certificates'] = 'Sertifikāti';

$GLOBALS["lang"]['Certificates'] = 'Sertifikāti';

$GLOBALS["lang"]['Certification'] = 'Sertifikācija';

$GLOBALS["lang"]['Certification Audit'] = 'Sertifikācijas audits';

$GLOBALS["lang"]['Certification Process'] = 'Sertifikācijas process';

$GLOBALS["lang"]['Chad'] = 'Čada';

$GLOBALS["lang"]['Change'] = 'Mainīt';

$GLOBALS["lang"]['change_id'] = 'Mainīt ID';

$GLOBALS["lang"]['Change ID'] = 'Mainīt ID';

$GLOBALS["lang"]['change_log'] = 'Mainīt žurnālu';

$GLOBALS["lang"]['Change Log'] = 'Mainīt žurnālu';

$GLOBALS["lang"]['Change Logs'] = 'Mainīt žurnālus';

$GLOBALS["lang"]['change_type'] = 'Mainīt tipu';

$GLOBALS["lang"]['Change Type'] = 'Mainīt tipu';

$GLOBALS["lang"]['check_minutes'] = 'Pārbaudes protokols';

$GLOBALS["lang"]['Check Minutes'] = 'Pārbaudes protokols';

$GLOBALS["lang"]['Check for SSH on these ports'] = 'Pārbaudīt SSH uz šiem portiem';

$GLOBALS["lang"]['Check this port for any SSH service.'] = 'Pārbaudiet šo portu jebkuram SSH servisam.';

$GLOBALS["lang"]['Chile'] = 'Čīle';

$GLOBALS["lang"]['China'] = 'Ķīna';

$GLOBALS["lang"]['Chinese'] = 'Ķīniešu';

$GLOBALS["lang"]['Chinese (traditional)'] = 'Ķīniešu (tradicionālie)';

$GLOBALS["lang"]['Choose'] = 'Izvēlēties';

$GLOBALS["lang"]['Choose (select OS first)'] = 'Izvēlieties (izvēlieties OS vispirms)';

$GLOBALS["lang"]['Choose a Device'] = 'Izvēlieties ierīci';

$GLOBALS["lang"]['Choose a Table'] = 'Izvēlieties tabulu';

$GLOBALS["lang"]['Choose the type of the task from the first drop down. This will configure the additional fields required depending on the type of task.'] = 'Izvēlieties uzdevuma tipu no pirmās nolaižamās vietas. Šis konfigurēs papildus nepieciešamos laukus atkarībā no uzdevuma veida.';

$GLOBALS["lang"]['Christmas Island'] = 'Ziemassvētku sala';

$GLOBALS["lang"]['cidr'] = 'Cidr';

$GLOBALS["lang"]['Cidr'] = 'Cidr';

$GLOBALS["lang"]['circuit_count'] = 'Apgabalu skaits';

$GLOBALS["lang"]['Circuit Count'] = 'Apgabalu skaits';

$GLOBALS["lang"]['circuit_status'] = 'Stencils';

$GLOBALS["lang"]['Circuit Status'] = 'Stencils';

$GLOBALS["lang"]['city'] = 'Pilsēta';

$GLOBALS["lang"]['City'] = 'Pilsēta';

$GLOBALS["lang"]['class'] = 'Klase';

$GLOBALS["lang"]['Class'] = 'Klase';

$GLOBALS["lang"]['class_text'] = 'Klase';

$GLOBALS["lang"]['Class Text'] = 'Klase';

$GLOBALS["lang"]['Click <i>New client secret</i>.'] = 'Klikšķis <i>Jauns klienta noslēpums</i>.';

$GLOBALS["lang"]['Click Submit to Execute'] = 'Noklikšķiniet uz Iesniegt, lai izietu';

$GLOBALS["lang"]['Click on <i>Properties</i> under the <i>Manage</i> header in the central menu column. Copy the <i>User Access URL</i>. Once copied, paste it into yout text editor. You will need to copy one section of this field.<br><br>Our example field looks like this<br><code>https://launcher.myapps.microsoft.com/api/signin/5d97003c-g24b-346e-9932-77db6470b939?tenantId=cf406343-1a96-4f7c-0cc6-46e86dddabf3</code>.<br><br>The section we need is <code>cf406343-1a96-4f7c-0cc6-46e86dddabf3</code> (the tenant ID). This is used in Open-AudIT as the <i>Tenant</i> field, so paste it in there.'] = 'Uzklikšķiniet uz <i>Īpašības</i> zem <i>Pārvaldīt</i> galvene centrālajā izvēlnes kolonnā. Kopēt <i>Lietotāja piekļuves URL</i>. Pēc kopēšanas ielīmējiet to teksta redaktorā. Jums būs nepieciešams kopēt vienu sadaļu šajā laukā.<br/><br/>Mūsu piemērs lauks izskatās šādi<br/><code>https://launcher.myapps.microsoft.com/api/signin/5d97003c-g24b-346e-9932-77db6470b939?tenantId=cf406343-1a96-4f7c-0cc6-46e86dddabf3</code>.<br/><br/>Mums ir nepieciešama sadaļa: <code>cf406343-1a96-4f7c-0cc6-46e86dddabf3</code> (īrnieka ID). To izmanto Open- AudIT kā <i>Noturīgs</i> lauks, lai ielīmēt to tur.';

$GLOBALS["lang"]['Click on App Registrations to create a new Application, then click New Application Registration. Give it a name (I used Open-AudIT), select Web app / API as the type and provide any URL (the URL is not important) and now click Create.'] = 'Uzklikšķiniet uz App Registrations, lai izveidotu jaunu Application, tad noklikšķiniet uz Jaunu App Registration. Dodiet tam nosaukumu (es izmantoju Open-AudIT), izvēlieties Web app / API kā tipu un norādiet jebkuru URL (URL nav svarīgi) un tagad noklikšķiniet uz Izveidot.';

$GLOBALS["lang"]['Click on OK and close the DCOMCNFG window.<br><br>The above changes will require a reboot to take effect.'] = 'Noklikšķiniet uz Labi un aizveriet DCOMCNFG logu.<br/><br/>Lai minētās izmaiņas stātos spēkā, būs nepieciešams sākt no jauna.';

$GLOBALS["lang"]['Click on the application you just created. The Application ID displayed is the Client ID.<br><br>To create the client secret, click Settings, then Keys. Provide a key name and select an appropriate expiry date, then click Save.<br><br>The value will be populated for you - this is the Client Secret.'] = 'Noklikšķiniet uz tikko izveidotās programmas. Attēlotais programmas ID ir klienta ID.<br/><br/>Lai izveidotu klienta noslēpumu, noklikšķiniet uz Iestatījumi, tad taustiņi. Norādiet atslēgas nosaukumu un izvēlieties atbilstošu derīguma termiņu, tad noklikšķiniet uz Saglabāt.<br/><br/>Vērtība tiks apdzīvota jums - tas ir Klienta noslēpums.';

$GLOBALS["lang"]['Click the Delete button to remove the example devices from Open-AudIT.<br>This will remove the below devices from the database. '] = 'Noklikšķiniet uz Dzēst pogu, lai noņemtu piemēru ierīces no Open-AudIT.<br/>Tas noņems zemāk ierīces no datubāzes. ';

$GLOBALS["lang"]['Click the Edit button for <i>Basic SAML Configuration</i>.'] = 'Nospiediet pogu Rediģēt <i>Pamata SAML Konfigurācija</i>.';

$GLOBALS["lang"]['Click the Import button below to populate Open-AudIT with example device data.'] = 'Noklikšķiniet uz Importa pogu zemāk, lai aizpildītu Open- AudIT ar piemēru ierīces datus.';

$GLOBALS["lang"]['Click the icon to the right of the field you wish to edit. Change the field and click the green icon to submit.'] = 'Noklikšķiniet uz ikonas pa labi no lauka, kuru vēlaties rediģēt. Mainīt lauku un noklikšķiniet uz zaļā ikona iesniegt.';

$GLOBALS["lang"]['Client ID'] = 'Klienta ID';

$GLOBALS["lang"]['Client ID and Secret'] = 'Klienta ID un noslēpums';

$GLOBALS["lang"]['client_ident'] = 'Klienta identifikācija';

$GLOBALS["lang"]['Client Ident'] = 'Klienta identifikācija';

$GLOBALS["lang"]['client_secret'] = 'Klienta noslēpums';

$GLOBALS["lang"]['Client Secret'] = 'Klienta noslēpums';

$GLOBALS["lang"]['client_site_name'] = 'Klienta vietnes nosaukums';

$GLOBALS["lang"]['Client Site Name'] = 'Klienta vietnes nosaukums';

$GLOBALS["lang"]['Close'] = 'Aizvērt';

$GLOBALS["lang"]['Closed'] = 'Pabeigts';

$GLOBALS["lang"]['Cloud'] = 'Mākoņi';

$GLOBALS["lang"]['Cloud Details'] = 'Mākoņa detaļas';

$GLOBALS["lang"]['Cloud Discovery'] = 'Mākoņu meklēšana';

$GLOBALS["lang"]['Cloud Discovery and Auditing'] = 'Mākoņdatošana un auditēšana';

$GLOBALS["lang"]['cloud_id'] = 'Mākoņa ID';

$GLOBALS["lang"]['Cloud ID'] = 'Mākoņa ID';

$GLOBALS["lang"]['cloud_log'] = 'Mākoņu žurnāls';

$GLOBALS["lang"]['Cloud Log'] = 'Mākoņu žurnāls';

$GLOBALS["lang"]['cloud_name'] = 'Mākoņa nosaukums';

$GLOBALS["lang"]['Cloud Name'] = 'Mākoņa nosaukums';

$GLOBALS["lang"]['Cloud Network'] = 'Mākoņu tīkls';

$GLOBALS["lang"]['clouds'] = 'Mākoņi';

$GLOBALS["lang"]['Clouds'] = 'Mākoņi';

$GLOBALS["lang"]['Clouds are a feature available to Open-AudIT Enterprise licensed customers.'] = 'Mākoņi ir Open-AudIT Enterprise licencētiem klientiem pieejama funkcija.';

$GLOBALS["lang"]['cluster'] = 'Kopa';

$GLOBALS["lang"]['Cluster'] = 'Kopa';

$GLOBALS["lang"]['cluster_id'] = 'Kopas ID';

$GLOBALS["lang"]['Cluster ID'] = 'Kopas ID';

$GLOBALS["lang"]['cluster_name'] = 'Kopas nosaukums';

$GLOBALS["lang"]['Cluster Name'] = 'Kopas nosaukums';

$GLOBALS["lang"]['cluster_type'] = 'Kopas veids';

$GLOBALS["lang"]['Cluster Type'] = 'Kopas veids';

$GLOBALS["lang"]['clusters'] = 'Kopas';

$GLOBALS["lang"]['Clusters'] = 'Kopas';

$GLOBALS["lang"]['Clusters and Reporting'] = 'Kopas un ziņojumi';

$GLOBALS["lang"]['Cocos (Keeling) Islands'] = 'Kokosu (Kīlingas) salas';

$GLOBALS["lang"]['Collection'] = 'Kolekcija';

$GLOBALS["lang"]['Collections'] = 'Kolekcijas';

$GLOBALS["lang"]['Collector'] = 'Kolekcionārs';

$GLOBALS["lang"]['Collector (UUID)'] = 'Kolekcionārs (UUID)';

$GLOBALS["lang"]['Collector / Server is an Enterprise only feature. Enterprise customers receive one Collector license for free. Additional Collector licenses can be purchased as required.'] = 'Kolekcionārs / Serveris ir tikai uzņēmuma iezīme. Uzņēmuma klienti saņem vienu Kolekcionāra licenci par brīvu. Papildu Collector licences var iegādāties pēc vajadzības.';

$GLOBALS["lang"]['Collector / Server is designed so that you can have a remote or <i>collector</i>  instance of Open-AudIT running on a remote machine. That collector instance might be in another security zone, subnet, cloud hosting instance or at a customer site.  The remote collector is then doing all the discovering and auditing of devices locally avoiding networking and firewalling complexity.  The Collector once it has registered is completely controlled by the <i>server</i>.  This means you only need an HTTP or HTTPS connection from that Collector to the Server.'] = 'Kolekcionārs / Serveris ir paredzēts, lai jūs varētu būt tālvadības vai <i>kolektors</i> piemērs Open-AudIT darbojas ar tālvadības mašīnu. Šī kolekcionāra instance varētu būt citā drošības zonā, apakštīklā, mākoņu hostingā vai klienta vietnē. Attālinātais kolekcionārs dara visu, lai atklātu un pārbaudītu ierīces lokāli, izvairoties no tīklošanas un ugunsmūrēšanas sarežģītības. Kolekcionārs, kad tas ir reģistrēts, ir pilnībā kontrolē <i>serveris</i>. Tas nozīmē, ka jums ir nepieciešams tikai HTTP vai HTTPS savienojums no šī kolekcionāra uz serveri.';

$GLOBALS["lang"]['Collector Dashboard'] = 'Kolekcionāra dashboard';

$GLOBALS["lang"]['Collector Name'] = 'Kolekcionāra vārds';

$GLOBALS["lang"]['collector_uuid'] = 'Kolekcionārs Uuid';

$GLOBALS["lang"]['Collector Uuid'] = 'Kolekcionārs Uuid';

$GLOBALS["lang"]['Collector tasks are automatically setup when the collector feature is enabled. Collector tasks should not be created directly by users. Collector tasks can have their frequency edited after creation. If the Open-AudIT Server has Collectors reporting to it, an additional drop down is provided. You can select this to specify which Collector the task should run on. Only Discovery tasks are supported for Collectors.'] = 'Kolekcionāra uzdevumi tiek automātiski iestatīti, kad kolekcionāra funkcija ir ieslēgta. Kolekcionēšanas uzdevumus nevajadzētu radīt tieši lietotājiem. Kolekcionāra uzdevumi pēc izveidošanas var rediģēt to frekvenci. Ja Open-AudIT serverim ir kolekcionāri, kas uz to ziņo, tiek nodrošināta papildus nolaižamā ierīce. Jūs varat izvēlēties šo, lai norādītu, uz kuru darbu strādāt. Kolekcionāriem tiek atbalstīti tikai Discovery uzdevumi.';

$GLOBALS["lang"]['Collectors'] = 'Kolekcionāri';

$GLOBALS["lang"]['Collectors can operate in one of two modes: Collector and StandAlone. When in Collector mode, the instance of Open-AudIT is managed by the main server. When in Stand Alone mode, the instance is managed locally and forwards any found devices to the main server.'] = 'Kolekcionāri var darboties vienā no diviem režīmiem: Collector un StandAlone. Kad Collector režīmā Open-AudIT instanci pārvalda galvenais serveris. Kad stand Alone režīmā, instance tiek pārvaldīta lokāli un pārsūta visas atrastās ierīces uz galveno serveri.';

$GLOBALS["lang"]['Collectors for Remote Discovery'] = 'Kolekcionāri attālinātiem atklājumiem';

$GLOBALS["lang"]['Colombia'] = 'Kolumbija';

$GLOBALS["lang"]['color'] = 'Krāsa';

$GLOBALS["lang"]['Color'] = 'Krāsa';

$GLOBALS["lang"]['Column'] = 'Kolonna';

$GLOBALS["lang"]['Columns'] = 'Kolonnas';

$GLOBALS["lang"]['command'] = 'Komanda';

$GLOBALS["lang"]['Command'] = 'Komanda';

$GLOBALS["lang"]['command_options'] = 'Komandas opcijas';

$GLOBALS["lang"]['Command Options'] = 'Komandas opcijas';

$GLOBALS["lang"]['command_output'] = 'Komandas izvade';

$GLOBALS["lang"]['Command Output'] = 'Komandas izvade';

$GLOBALS["lang"]['command_status'] = 'Komandas statuss';

$GLOBALS["lang"]['Command Status'] = 'Komandas statuss';

$GLOBALS["lang"]['command_time_to_execute'] = 'Komandas laiks, kad palaist';

$GLOBALS["lang"]['Command Time To Execute'] = 'Komandas laiks, kad palaist';

$GLOBALS["lang"]['comment'] = 'Komentārs';

$GLOBALS["lang"]['Comment'] = 'Komentārs';

$GLOBALS["lang"]['Comment out the below line (about line 49 or so). Just place a hash # at the start of the line.'] = 'Komentēt zemāk līniju (ap līniju 49 vai tā). Novietojiet hash # sākumā līnijas.';

$GLOBALS["lang"]['comments'] = 'Piezīmes';

$GLOBALS["lang"]['Comments'] = 'Piezīmes';

$GLOBALS["lang"]['commercial'] = 'Komerciāls';

$GLOBALS["lang"]['Commercial'] = 'Komerciāls';

$GLOBALS["lang"]['Commercial Support'] = 'Komerciālais atbalsts';

$GLOBALS["lang"]['common_name'] = 'Vispārpieņemtais nosaukums';

$GLOBALS["lang"]['Common Name'] = 'Vispārpieņemtais nosaukums';

$GLOBALS["lang"]['Commonly referred to as the clientId.'] = 'Parasti sauc par clientId.';

$GLOBALS["lang"]['Commonly referred to as the clientSecret.'] = 'Bieži dēvēts par klientuSecret.';

$GLOBALS["lang"]['Community'] = 'Kopiena';

$GLOBALS["lang"]['Community Questions'] = 'Kopienas jautājumi';

$GLOBALS["lang"]['Community String'] = 'Kopienas virkne';

$GLOBALS["lang"]['Comoros the'] = 'Komoru salas';

$GLOBALS["lang"]['Compact'] = 'Kompakts';

$GLOBALS["lang"]['Company'] = 'Uzņēmums';

$GLOBALS["lang"]['Complete these steps.'] = 'Pabeigt šos soļus.';

$GLOBALS["lang"]['Complexity of the attack (Low or High).'] = 'Uzbrukuma sarežģītība (Low vai High).';

$GLOBALS["lang"]['Component Table'] = 'Komponentu tabula';

$GLOBALS["lang"]['Components (All Devices)'] = 'Sastāvdaļas (visas ierīces)';

$GLOBALS["lang"]['Compute'] = 'Skaitļot';

$GLOBALS["lang"]['Condition'] = 'Stāvoklis';

$GLOBALS["lang"]['Conduct a risk assessment'] = 'Riska novērtējuma veikšana';

$GLOBALS["lang"]['Conduct awareness and training programs'] = 'Veikt informētības un apmācības programmas';

$GLOBALS["lang"]['Conduct management review meetings'] = 'Vadības pārbaudes sanāksmes';

$GLOBALS["lang"]['Conduct regular surveillance audits (usually annually)'] = 'Veikt regulāras uzraudzības revīzijas (parasti reizi gadā)';

$GLOBALS["lang"]['Conducted by an accredited body in two stages'] = 'Akreditēta iestāde vada divos posmos';

$GLOBALS["lang"]['Config'] = 'Konfigurācija';

$GLOBALS["lang"]['Config Default, currently '] = 'Noklusētā konfigurācija ';

$GLOBALS["lang"]['config_file'] = 'Konfigurācijas fails';

$GLOBALS["lang"]['Config File'] = 'Konfigurācijas fails';

$GLOBALS["lang"]['config_manager_error_code'] = 'Konfigurācijas pārvaldnieka kļūdas kods';

$GLOBALS["lang"]['Config Manager Error Code'] = 'Konfigurācijas pārvaldnieka kļūdas kods';

$GLOBALS["lang"]['Configurable Role Based Access Control (RBAC)'] = 'Konfigurējama uz lomu balstīta piekļuves kontrole (RBAC)';

$GLOBALS["lang"]['configuration'] = 'Konfigurācija';

$GLOBALS["lang"]['Configuration'] = 'Konfigurācija';

$GLOBALS["lang"]['Configuration Change Detection and Reporting'] = 'Konfigurācijas izmaiņu noteikšana un ziņošana';

$GLOBALS["lang"]['Configure'] = 'Konfigurēt';

$GLOBALS["lang"]['Configure the agent server-side to perform audits on a schedule'] = 'Konfigurēt aģenta servera pusi, lai veiktu revīziju pēc grafikaName';

$GLOBALS["lang"]['Congo'] = 'Kongo';

$GLOBALS["lang"]['Congo the'] = 'Kongo';

$GLOBALS["lang"]['Connected To'] = 'Pieslēdzies';

$GLOBALS["lang"]['connection'] = 'Savienojums';

$GLOBALS["lang"]['Connection'] = 'Savienojums';

$GLOBALS["lang"]['Connection Options'] = 'Savienojuma opcijas';

$GLOBALS["lang"]['connection_status'] = 'Savienojuma statuss';

$GLOBALS["lang"]['Connection Status'] = 'Savienojuma statuss';

$GLOBALS["lang"]['connections'] = 'Savienojumi';

$GLOBALS["lang"]['Connections'] = 'Savienojumi';

$GLOBALS["lang"]['Consider filtered Ports Open'] = 'Jāapsver filtrēšana Ostas atvērtas';

$GLOBALS["lang"]['Consider open|filtered Ports Open'] = 'Apsveriet iespēju filtrēt Ostas atvērtas';

$GLOBALS["lang"]['Consulting, implementation and other services are available through'] = 'Konsultācijas, īstenošana un citi pakalpojumi ir pieejami, izmantojot';

$GLOBALS["lang"]['contact'] = 'Kontaktinformācija';

$GLOBALS["lang"]['Contact'] = 'Kontaktinformācija';

$GLOBALS["lang"]['contact_name'] = 'Kontakta nosaukums';

$GLOBALS["lang"]['Contact Name'] = 'Kontakta nosaukums';

$GLOBALS["lang"]['contained_in'] = 'Ietilpa';

$GLOBALS["lang"]['Contained In'] = 'Ietilpa';

$GLOBALS["lang"]['Contains a JSON object details the associated widgets and their positions.'] = 'Satur JSON objekts detaļas saistītās widgets un to pozīcijas.';

$GLOBALS["lang"]['Contains the fields that determine if we should use ssh, snmp and wmi discovery options. A JSON object.'] = 'Satur laukus, kas nosaka, vai mums vajadzētu izmantot ssh, snmp un wmi atklāšanas iespējas. JSON objekts.';

$GLOBALS["lang"]['Context & Leadership'] = 'Konteksts un vadība';

$GLOBALS["lang"]['Context Engine ID'] = 'Konteksta motora ID';

$GLOBALS["lang"]['Context Name'] = 'Konteksta nosaukums';

$GLOBALS["lang"]['Continuously improve the ISMS'] = 'Pastāvīgi uzlabot ISMS';

$GLOBALS["lang"]['contractual_obligations'] = 'Līguma saistības';

$GLOBALS["lang"]['Contractual Obligations'] = 'Līguma saistības';

$GLOBALS["lang"]['Cook Islands'] = 'Kuka salas';

$GLOBALS["lang"]['Copy and paste an audit result'] = 'Kopēt un ielīmēt audita rezultātu';

$GLOBALS["lang"]['Copy and paste the below to the forums, another instance of Open-AudIT or anywhere else you need to provide this item.'] = 'Kopēt un ielīmēt zemāk uz forumiem, vēl viens Open-AudIT gadījums vai jebkur citur jums ir nepieciešams, lai nodrošinātu šo posteni.';

$GLOBALS["lang"]['Copy the <i>Application ID</i> field and paste it into the Open-AudIT <i>Client ID</i> field for the new Auth Method.'] = 'Kopēt <i>Programmas ID</i> lauks un ielīmēt to Open-AudIT <i>Klienta ID</i> jaunās Auth metodes lauks.';

$GLOBALS["lang"]['Copy the <i>Client ID</i> and paste it into the Open-AudIT <i>Client ID</i> field.<br>If there is no secret, click <i>Generate new secret</i>, then copy the value and paste it into the Open-AudIT <i>Client Secret</i> field.'] = 'Kopēt <i>Klienta ID</i> un ielīmēt to Open-AudIT <i>Klienta ID</i> lauka.<br/>Ja slepenības nav, noklikšķiniet uz <i>Ģenerēt jaunu noslēpumu</i>, tad kopēt vērtību un ielīmēt to Open-AudIT <i>Klienta noslēpums</i> lauka.';

$GLOBALS["lang"]['Copy the value and paste it into the Open-AudIT form for the <i>Client Secret</i> field.'] = 'Kopēt vērtību un ielīmēt to Open- AudIT formā <i>Klienta noslēpums</i> lauka.';

$GLOBALS["lang"]['core_count'] = 'Pamatskaitlis';

$GLOBALS["lang"]['Core Count'] = 'Pamatskaitlis';

$GLOBALS["lang"]['Cores'] = 'Kodoli';

$GLOBALS["lang"]['cost_center'] = 'Izmaksu centrs';

$GLOBALS["lang"]['Cost Center'] = 'Izmaksu centrs';

$GLOBALS["lang"]['cost_code'] = 'Izmaksu kods';

$GLOBALS["lang"]['Cost Code'] = 'Izmaksu kods';

$GLOBALS["lang"]['Costa Rica'] = 'Kostarika';

$GLOBALS["lang"]['Cote d Ivoire'] = 'Kotdivuāra';

$GLOBALS["lang"]['count'] = 'Skaits';

$GLOBALS["lang"]['Count'] = 'Skaits';

$GLOBALS["lang"]['country'] = 'Valsts';

$GLOBALS["lang"]['Country'] = 'Valsts';

$GLOBALS["lang"]['country_code'] = 'Valsts kods';

$GLOBALS["lang"]['Country Code'] = 'Valsts kods';

$GLOBALS["lang"]['cpu_count'] = 'Cpu skaits';

$GLOBALS["lang"]['Cpu Count'] = 'Cpu skaits';

$GLOBALS["lang"]['Create'] = 'Izveidot';

$GLOBALS["lang"]['Create Example Devices'] = 'Izveidot piemēru ierīces';

$GLOBALS["lang"]['create_external_count'] = 'Izveidot ārējo skaitu';

$GLOBALS["lang"]['Create External Count'] = 'Izveidot ārējo skaitu';

$GLOBALS["lang"]['create_external_from_internal'] = 'Izveidot ārēju no iekšēja';

$GLOBALS["lang"]['Create External From Internal'] = 'Izveidot ārēju no iekšēja';

$GLOBALS["lang"]['Create File'] = 'Izveidot failu';

$GLOBALS["lang"]['Create Geocode'] = 'Izveidot ģeokodu';

$GLOBALS["lang"]['create_internal_count'] = 'Izveidot iekšējo skaitu';

$GLOBALS["lang"]['Create Internal Count'] = 'Izveidot iekšējo skaitu';

$GLOBALS["lang"]['create_internal_from_external'] = 'Izveidot iekšēju no ārēja';

$GLOBALS["lang"]['Create Internal From External'] = 'Izveidot iekšēju no ārēja';

$GLOBALS["lang"]['Create NMIS Devices from Open-AudIT'] = 'Izveidot NMIS ierīces no Open- AudIT';

$GLOBALS["lang"]['Create Open-AudIT Devices from '] = 'Izveidot Open- AudIT Ierīces no ';

$GLOBALS["lang"]['Create Open-AudIT Devices from NMIS'] = 'Izveidot Open- AudIT NMIS ierīces';

$GLOBALS["lang"]['Create a Baseline for the example device'] = 'Izveidot bāzes līniju parauga ierīcei';

$GLOBALS["lang"]['Create a Discovery'] = 'Izveidot atklājumu';

$GLOBALS["lang"]['Create a Statement of Applicability (SoA)'] = 'Izveidot paziņojumu par piemērojamību (SoA)';

$GLOBALS["lang"]['created_by'] = 'Izveidots';

$GLOBALS["lang"]['Created By'] = 'Izveidots';

$GLOBALS["lang"]['created_date'] = 'Izveidotais datums';

$GLOBALS["lang"]['Created Date'] = 'Izveidotais datums';

$GLOBALS["lang"]['Creating'] = 'Radīt';

$GLOBALS["lang"]['Creating Credentials'] = 'Radot radījumus';

$GLOBALS["lang"]['Creating Device'] = 'Veido ierīci';

$GLOBALS["lang"]['Creating Widgets'] = 'Veido sīkrīkus';

$GLOBALS["lang"]['Creating a Discovery Scan Options entry'] = 'Veido atklājumu Skenēšanas opciju ieraksts';

$GLOBALS["lang"]['Creating a Query'] = 'Meklēju vaicājumu';

$GLOBALS["lang"]['Creating a SQL Statement for Groups'] = 'Grupām paredzēta SQL paziņojuma izveide';

$GLOBALS["lang"]['Creating a SQL Statement for Queries'] = 'Veido SQL paziņojumu vaicājumiem';

$GLOBALS["lang"]['Creating an Integration'] = 'Integrācijas izveide';

$GLOBALS["lang"]['creator'] = 'Radītājs';

$GLOBALS["lang"]['Creator'] = 'Radītājs';

$GLOBALS["lang"]['credential'] = 'Kreentiāls';

$GLOBALS["lang"]['Credential'] = 'Kreentiāls';

$GLOBALS["lang"]['Credentials'] = 'Riska faktori';

$GLOBALS["lang"]['Credentials Client ID'] = 'Kredīti Klienta ID';

$GLOBALS["lang"]['Credentials Subscription ID'] = 'Pamatojums ID';

$GLOBALS["lang"]['Credentials Tenant ID'] = 'Dzīvības apdrošināšana, kas līdzinās dzīvības apdrošināšanai';

$GLOBALS["lang"]['Credentials are stored in the <i>credentials</i> database table. The actual credential information is encrypted in storage. When a Discovery is run, a device has its specific credentials retrieved from the database, decrypted and tested. If these fail the list of credentials is also retrieved, decrypted and then tested against the device starting with credentials known to have worked previously. Device specific credentials are stored at an individual device level in the <i>credential</i> table (note - no <i>s</i> in the table name). SSH keys are tested before SSH username / password. When testing SSH, credentials will also be marked as working with sudo or being root.'] = 'Credentials tiek glabāti <i>pilnvaras</i> datu bāzes tabula. Faktiskā akreditācijas informācija tiek šifrēta krātuvē. Kad darbojas Discovery, ierīcei ir specifiskie dati, kas iegūti no datubāzes, atšifrēti un pārbaudīti. Ja tie neizdodas, tiek arī izgūts, atšifrēts akreditācijas saraksts un pēc tam pārbaudīts pret ierīci, sākot ar akreditācijas datiem, par kuriem zināms, ka tie ir darbojušies iepriekš. Ierīcei specifiskie dati tiek glabāti ierīces līmenī <i>kredentiāls</i> tabula (piezīme – nē) <i>s</i> tabulas nosaukumā). SSH atslēgas tiek pārbaudītas pirms SSH lietotājvārda / paroles. Pārbaudot SSH, tiks atzīmēti arī kā darbi ar sudo vai saknes.';

$GLOBALS["lang"]['Credentials can have one of a few different types - snmp v.1 / v.2, snmp v.3, ssh, ssh key, windows are all implemented. CAVEAT - ssh keys are not implemented for Windows Open-AudIT servers as yet.'] = 'Credentials var būt viens no dažiem dažādiem tipiem - snmp v.1 / v.2, snmp v.3, ssh, ssh taustiņu, logi visi ir realizēti. CAVEAT - ssh taustiņi vēl nav ieviesti Windows Open-AudIT serveriem.';

$GLOBALS["lang"]['Credentials for Amazon AWS used in Cloud Discovery'] = 'Credentials priekš Amazon AWS, ko izmanto mākoņatklājumos';

$GLOBALS["lang"]['Credentials for Microsoft Azure used in Cloud Discovery'] = 'Microsoft apstiprinājumi Mākoņdatošana';

$GLOBALS["lang"]['Critical'] = 'Kritisks';

$GLOBALS["lang"]['criticality'] = 'Kritika';

$GLOBALS["lang"]['Criticality'] = 'Kritika';

$GLOBALS["lang"]['Croatia'] = 'Horvātija';

$GLOBALS["lang"]['Cuba'] = 'Kuba';

$GLOBALS["lang"]['current'] = 'laikposms';

$GLOBALS["lang"]['Current'] = 'laikposms';

$GLOBALS["lang"]['Current Discovery Processes'] = 'Pašreizējie meklēšanas procesi';

$GLOBALS["lang"]['Current date & time is '] = 'Pašreizējais datums un laiks ir ';

$GLOBALS["lang"]['Currently Installed'] = 'Šobrīd instalēts';

$GLOBALS["lang"]['Currently supported types are <code>snmp</code>, <code>snmp_v3</code>, <code>ssh</code>, <code>ssh_key</code> or <code>windows</code>.'] = 'Šobrīd atbalstītie tipi ir <code>snmp</code>, <code>snmp_v3</code>, <code>ssh</code>, <code>ssh_key</code> vai <code>windows</code>.';

$GLOBALS["lang"]['Custom Fields'] = 'Pielāgoti lauki';

$GLOBALS["lang"]['Custom TCP Ports'] = 'Pielāgoti TCP porti';

$GLOBALS["lang"]['Custom TCP Ports. Any specific ports we would liuke scanned in addition to the Top TCP Ports. Comma seperated, no spaces.'] = 'Pielāgotas TCP porti. Jebkuras īpašas ostas mēs varētu like skenēt papildus Top TCP ostas. Komēta ir atdalīta, nav atstarpju.';

$GLOBALS["lang"]['Custom UDP Ports'] = 'Pielāgots UDP Ostas';

$GLOBALS["lang"]['Custom UDP Ports. Any specific ports we would liuke scanned in addition to the Top UDP Ports. Comma seperated, no spaces.'] = 'Pielāgoti UDP porti. Jebkuri īpaši porti mēs varētu like skenēt papildus Top UDP porti. Komēta ir atdalīta, nav atstarpju.';

$GLOBALS["lang"]['Customisable Scanning Options per Discovery'] = 'Pielāgojamas skenēšanas opcijas katram atklājumam';

$GLOBALS["lang"]['Cve'] = 'Cve';

$GLOBALS["lang"]['Cyprus'] = 'Kipra';

$GLOBALS["lang"]['Czech'] = 'Čehu';

$GLOBALS["lang"]['Czech Republic'] = 'Čehija';

$GLOBALS["lang"]['DHCP'] = 'DHCP';

$GLOBALS["lang"]['DN Account (optional)'] = 'DN konts (nav obligāts)';

$GLOBALS["lang"]['DN Password (optional)'] = 'DN Parole (fakultatīvi)';

$GLOBALS["lang"]['DNS FQDN'] = 'DNS FQDN';

$GLOBALS["lang"]['DNS Hostname'] = 'DNS resursdatora nosaukums';

$GLOBALS["lang"]['Danish'] = 'Dāņu';

$GLOBALS["lang"]['dashboard_id'] = 'Dashboard ID';

$GLOBALS["lang"]['Dashboard ID'] = 'Dashboard ID';

$GLOBALS["lang"]['Dashboard Widgets'] = 'Dashboard sīkrīki';

$GLOBALS["lang"]['dashboards'] = 'Dashboards';

$GLOBALS["lang"]['Dashboards'] = 'Dashboards';

$GLOBALS["lang"]['Dashboards and Widgets allow Enterprise licensed customers to create, read, update and delete both of these collections to ensure their homepage is exactly what they need to see. Not only that, but a user is able to set a given dashboard as their own homepage. Everyone does not need to use the same homepage (dashboard), nor the same widgets on that dashboard. Professional licensed customers can choose between two predefined dashboards to set as their own homepage.'] = 'Dashboards un logrīki ļauj Enterprise licencētiem klientiem izveidot, lasīt, atjaunināt un dzēst abas šīs kolekcijas, lai nodrošinātu, ka to mājas lapa ir tieši tas, kas viņiem ir nepieciešams, lai redzētu. Ne tikai tas, ka, bet lietotājs ir iespēja noteikt konkrētu paneļa kā savu mājas lapā. Ikvienam nav nepieciešams izmantot to pašu mājas lapu (dashboard), ne tās pašas widgets uz šī paneļa. Profesionāli licencēti klienti var izvēlēties starp diviem iepriekš noteiktiem paneļa uzstādīt kā savu mājas lapu.';

$GLOBALS["lang"]['Dashboards provide <i>at a glance</i> important visibility for changes occurring on your network as well as providing quick links to device types, manufacturers, and operating systems and so much more.'] = 'Dashboards nodrošina <i>īsumā</i> svarīga redzamība izmaiņām, kas notiek jūsu tīklā, kā arī nodrošinot ātras saites uz ierīču tipiem, ražotājiem, un operētājsistēmas un vēl daudz ko citu.';

$GLOBALS["lang"]['Dashboards use'] = 'Dashboards izmantošana';

$GLOBALS["lang"]['Data'] = 'Dati';

$GLOBALS["lang"]['Data Export - CSV, XML, JSON'] = 'Datu eksports - CSV, XML, JSON';

$GLOBALS["lang"]['Data Retention'] = 'Datu saglabāšana';

$GLOBALS["lang"]['Database'] = 'Datu bāze';

$GLOBALS["lang"]['db_action'] = 'Datubāzes darbība';

$GLOBALS["lang"]['Database Action'] = 'Datubāzes darbība';

$GLOBALS["lang"]['db_column'] = 'Datubāzes kolona';

$GLOBALS["lang"]['Database Column'] = 'Datubāzes kolona';

$GLOBALS["lang"]['Database Definition'] = 'Datubāzes definīcija';

$GLOBALS["lang"]['db_row'] = 'Datubāzes rinda';

$GLOBALS["lang"]['Database Row'] = 'Datubāzes rinda';

$GLOBALS["lang"]['Database Schema'] = 'Datubāzes shēma';

$GLOBALS["lang"]['Database Server Discovery'] = 'Datubāzes servera atklājums';

$GLOBALS["lang"]['db_table'] = 'Datubāzes tabula';

$GLOBALS["lang"]['Database Table'] = 'Datubāzes tabula';

$GLOBALS["lang"]['Database Tables'] = 'Datubāžu tabulas';

$GLOBALS["lang"]['dataset_title'] = 'Datu kopas nosaukums';

$GLOBALS["lang"]['Dataset Title'] = 'Datu kopas nosaukums';

$GLOBALS["lang"]['date'] = 'Datums';

$GLOBALS["lang"]['Date'] = 'Datums';

$GLOBALS["lang"]['Date D-M-Y'] = 'Datums D-M-Y';

$GLOBALS["lang"]['Date M-D-Y'] = 'Datums M-D-Y';

$GLOBALS["lang"]['Date Now'] = 'Datums tagad';

$GLOBALS["lang"]['date_of_manufacture'] = 'Ražošanas datums';

$GLOBALS["lang"]['Date Of Manufacture'] = 'Ražošanas datums';

$GLOBALS["lang"]['date_paid'] = 'Samaksātais datums';

$GLOBALS["lang"]['Date Paid'] = 'Samaksātais datums';

$GLOBALS["lang"]['date_received'] = 'Saņemtais datums';

$GLOBALS["lang"]['Date Received'] = 'Saņemtais datums';

$GLOBALS["lang"]['Date Y-M-D'] = 'Datums Y-M-D';

$GLOBALS["lang"]['Date and time when the CVE was last updated.'] = 'Datums un laiks, kad CVE pēdējo reizi atjaunināts.';

$GLOBALS["lang"]['Date and time when the CVE was published.'] = 'Datums un laiks, kad tika publicēts CVE.';

$GLOBALS["lang"]['Date when the CVE was published.'] = 'Datums, kad tika publicēts CVE.';

$GLOBALS["lang"]['DateTime Now'] = 'DatumsLaiks tagad';

$GLOBALS["lang"]['DateTime Y-M-D H:M:S'] = 'DatumsLaiks Y-M-D H:M:S';

$GLOBALS["lang"]['day_of_month'] = 'Mēneša diena';

$GLOBALS["lang"]['Day Of Month'] = 'Mēneša diena';

$GLOBALS["lang"]['day_of_week'] = 'Nedēļas diena';

$GLOBALS["lang"]['Day Of Week'] = 'Nedēļas diena';

$GLOBALS["lang"]['Day of Month'] = 'Mēneša diena';

$GLOBALS["lang"]['dbus_identifier'] = 'Dbus identifikators';

$GLOBALS["lang"]['Dbus Identifier'] = 'Dbus identifikators';

$GLOBALS["lang"]['Debug'] = 'Atkļūdot';

$GLOBALS["lang"]['Debugging'] = 'Atkļūdošana';

$GLOBALS["lang"]['Debugging a Script'] = 'Atkļūdot skriptu';

$GLOBALS["lang"]['December'] = 'decembris';

$GLOBALS["lang"]['Decommission'] = 'Ekspluatācijas pārtraukšana';

$GLOBALS["lang"]['Default'] = 'Noklusētais';

$GLOBALS["lang"]['Default Authentication Level - Set to Connect'] = 'Noklusētā autentificēšana Līmenis - Pārslēgties uz savienojumu';

$GLOBALS["lang"]['Default Impersonation Level - Set to Identify'] = 'Noklusētā personība Līmenis - Pārslēgt uz Identificēšanu';

$GLOBALS["lang"]['Default Items'] = 'Noklusētās vienības';

$GLOBALS["lang"]['Default Orgs Groups'] = 'Noklusētās orgu grupas';

$GLOBALS["lang"]['Default Roles Groups'] = 'Noklusētās lomas grupas';

$GLOBALS["lang"]['Default Value'] = 'Noklusētā vērtība';

$GLOBALS["lang"]['Default of 389. Normally 636 used for Active Directory LDAPS.'] = '389 noklusējuma vērtība. Parasti 636 izmanto Active Directory LDAPS.';

$GLOBALS["lang"]['Default of <code>3</code> for LDAP and Active Directory.'] = 'Noklusējuma <code>3</code> priekš LDAP un Active Directory.';

$GLOBALS["lang"]['Defaults'] = 'Noklusētie';

$GLOBALS["lang"]['Deferred'] = 'Atliktais';

$GLOBALS["lang"]['Define project scope and objectives'] = 'Noteikt projekta darbības jomu un mērķus';

$GLOBALS["lang"]['Define the ISMS scope'] = 'Definēt ISMS darbības jomu';

$GLOBALS["lang"]['Define the context of the organization (internal/external issues)'] = 'Definēt organizācijas kontekstu (iekšējie/ārējie jautājumi)';

$GLOBALS["lang"]['delay_minutes'] = 'Aiztures protokols';

$GLOBALS["lang"]['Delay Minutes'] = 'Aiztures protokols';

$GLOBALS["lang"]['Delete'] = 'Dzēst';

$GLOBALS["lang"]['Delete Example Devices'] = 'Dzēst piemēra ierīces';

$GLOBALS["lang"]['delete_external_from_internal'] = 'Dzēst ārējo no iekšējā';

$GLOBALS["lang"]['Delete External From Internal'] = 'Dzēst ārējo no iekšējā';

$GLOBALS["lang"]['Delete NMIS Devices if not in Open-AudIT'] = 'Dzēst NMIS Ierīces, ja tās neatrodas Open- AudIT';

$GLOBALS["lang"]['Delete a {collection} entry.'] = 'Dzēst ierakstu {savākšana}.';

$GLOBALS["lang"]['Delete from Application'] = 'Dzēst no programmas';

$GLOBALS["lang"]['Delete from Cluster'] = 'Dzēst no klastera';

$GLOBALS["lang"]['Denmark'] = 'Dānija';

$GLOBALS["lang"]['Derived by audit or manually set by user.'] = 'Iegūts ar auditu vai manuāli iestata lietotājs.';

$GLOBALS["lang"]['Derived by audit.'] = 'Audita rezultāts.';

$GLOBALS["lang"]['Derived from <code>rack_devices.device_id</code>.'] = 'no <code>rack_devices.device_id</code>.';

$GLOBALS["lang"]['Derived from <code>rack_devices.rack_id</code>.'] = 'no <code>rack_devices.rack_id</code>.';

$GLOBALS["lang"]['Derived from Collector discovery.'] = 'Atvasināts no Kolekcionāra atklājuma.';

$GLOBALS["lang"]['Derived from OS Name.'] = 'Atvasināts no OS Name.';

$GLOBALS["lang"]['Derived from cloud discovery.'] = 'Atvasināts no mākoņu atklāšanas.';

$GLOBALS["lang"]['Derived from device audits.'] = 'Iegūts no ierīču auditiem.';

$GLOBALS["lang"]['Derived from device type and OS.'] = 'Iegūts no ierīces tipa un OS.';

$GLOBALS["lang"]['Derived from discovery.'] = 'Atvasināts no atklāšanas.';

$GLOBALS["lang"]['Derived from hostname, sysName, dns Hostname and IP in that order.'] = 'Iegūts no datora nosaukuma, sysName, dns Hostname un IP šādā secībā.';

$GLOBALS["lang"]['Derived from the integer severity.'] = 'Iegūts no veselā nopietnības.';

$GLOBALS["lang"]['description'] = 'Apraksts';

$GLOBALS["lang"]['Description'] = 'Apraksts';

$GLOBALS["lang"]['destination'] = 'Galamērķis';

$GLOBALS["lang"]['Destination'] = 'Galamērķis';

$GLOBALS["lang"]['detail'] = 'Detaļa';

$GLOBALS["lang"]['Detail'] = 'Detaļa';

$GLOBALS["lang"]['Details'] = 'Detaļas';

$GLOBALS["lang"]['Details of who is usually contactable at this site.'] = 'Sīkāka informācija par to, kas parasti ir kontakts šajā vietā.';

$GLOBALS["lang"]['Determine how often you want to run the Baseline check against the database and create a Scheduled Report'] = 'Nosakiet cik bieži jūs vēlaties palaist Bāzes līnijas pārbaudi pret datubāzi un izveidot plānotu ziņojumu';

$GLOBALS["lang"]['Determine risk treatment options'] = 'Noteikt riska ārstēšanas iespējas';

$GLOBALS["lang"]['Develop a Risk Treatment Plan'] = 'Izstrādāt riska ārstēšanas plānu';

$GLOBALS["lang"]['Develop policies, procedures, and controls'] = 'Izstrādāt politiku, procedūras un kontroles';

$GLOBALS["lang"]['Develop required ISMS documentation (policies, procedures, etc.)'] = 'Izstrādāt vajadzīgo ISMS dokumentāciju (politikas, procedūras utt.)';

$GLOBALS["lang"]['device'] = 'Ierīce';

$GLOBALS["lang"]['Device'] = 'Ierīce';

$GLOBALS["lang"]['Device Audits'] = 'Ierīces audits';

$GLOBALS["lang"]['Device Component Names'] = 'Ierīču komponentu nosaukumi';

$GLOBALS["lang"]['Device ID'] = 'Ierīces ID';

$GLOBALS["lang"]['device_id'] = 'Ierīces ID';

$GLOBALS["lang"]['device_id_a'] = 'Ierīces ID A';

$GLOBALS["lang"]['Device ID A'] = 'Ierīces ID A';

$GLOBALS["lang"]['device_id_b'] = 'Ierīces ID B';

$GLOBALS["lang"]['Device ID B'] = 'Ierīces ID B';

$GLOBALS["lang"]['Device Matching Rules'] = 'Ierīces atbilstības noteikumi';

$GLOBALS["lang"]['Device Name'] = 'Ierīces nosaukums';

$GLOBALS["lang"]['Device Result'] = 'Ierīces rezultāts';

$GLOBALS["lang"]['Device Results'] = 'Ierīces rezultāti';

$GLOBALS["lang"]['Device Seed'] = 'Ierīces sēklas';

$GLOBALS["lang"]['Device Seed Discoveries are a good option if you know that your network consists of a range of subnets, but you are unsure what they are. Seed the discovery with a local router and watch your network unfold before your eyes.'] = 'Ierīces sēklas Atklājumi ir laba iespēja, ja jūs zināt, ka jūsu tīkls sastāv no vairākiem apakštīkliem, bet jūs neesat pārliecināts, kādi tie ir. Sēžot atklājumu ar lokālu maršrutētāju, skatieties, kā jūsu tīkls atklājas acu priekšā.';

$GLOBALS["lang"]['Device Seed IP'] = 'Ierīces sēklas IP';

$GLOBALS["lang"]['Device Status'] = 'Ierīces statuss';

$GLOBALS["lang"]['Device Types'] = 'Ierīces tipi';

$GLOBALS["lang"]['Device and Software and Hardware Auditing'] = 'Ierīču un programmatūras un aparatūras auditēšana';

$GLOBALS["lang"]['Device is in the Subnet'] = 'Ierīce atrodas apakštīklā';

$GLOBALS["lang"]['Devices'] = 'Ierīces';

$GLOBALS["lang"]['devices_assigned_to_location'] = 'Atrašanās vietai piešķirtās ierīces';

$GLOBALS["lang"]['Devices Assigned To Location'] = 'Atrašanās vietai piešķirtās ierīces';

$GLOBALS["lang"]['devices_assigned_to_org'] = 'Org piešķirtās ierīces';

$GLOBALS["lang"]['Devices Assigned To Org'] = 'Org piešķirtās ierīces';

$GLOBALS["lang"]['Devices Audited'] = 'Auditētās ierīces';

$GLOBALS["lang"]['Devices Collection'] = 'Ierīču kolekcija';

$GLOBALS["lang"]['Devices Created in '] = 'Ierīces izveidotas ';

$GLOBALS["lang"]['Devices Created in Open-AudIT'] = 'Open- AudIT ierīces';

$GLOBALS["lang"]['devices_default_display_columns'] = 'Ierīces noklusētās attēlošanas kolonas';

$GLOBALS["lang"]['Devices Default Display Columns'] = 'Ierīces noklusētās attēlošanas kolonas';

$GLOBALS["lang"]['Devices Found Last 7 Days'] = 'Ierīces atrastas pēdējās 7 dienās';

$GLOBALS["lang"]['Devices Found Today'] = 'Ierīces atrastas mūsdienās';

$GLOBALS["lang"]['Devices Found Yesterday'] = 'Ierīces atrastas vakar';

$GLOBALS["lang"]['Devices Missing Information'] = 'Ierīces bez informācijas';

$GLOBALS["lang"]['Devices Not Audited'] = 'Ierīces nav pārbaudītas';

$GLOBALS["lang"]['Devices Not Seen 30 Days'] = 'Ierīces, kas neredz 30 dienas';

$GLOBALS["lang"]['Devices Not Seen 7 Days'] = 'Ierīces, kas neredz 7 dienas';

$GLOBALS["lang"]['Devices Not Seen 90 Days'] = 'Ierīces, kas neredz 90 dienas';

$GLOBALS["lang"]['Devices Older Than X'] = 'Ierīces vecākas par X';

$GLOBALS["lang"]['Devices Retrieved via API'] = 'Ielādētās ierīces caur API';

$GLOBALS["lang"]['Devices Selected from '] = 'Ierīces izvēlētas no ';

$GLOBALS["lang"]['Devices Selected from Open-AudIT'] = 'No Open- AudIT izvēlētās ierīces';

$GLOBALS["lang"]['Devices Updated in '] = 'Ierīces atjauninātas ';

$GLOBALS["lang"]['Devices Updated in Open-AudIT'] = 'Ierīces atjauninātas Open- AudIT';

$GLOBALS["lang"]['Devices are being benchmarked.'] = 'Ierīces tiek salīdzinātas.';

$GLOBALS["lang"]['Devices are not being benchmarked.'] = 'Ierīces netiek salīdzinātas.';

$GLOBALS["lang"]['Devices could be benchmarked.'] = 'Ierīces varētu salīdzināt.';

$GLOBALS["lang"]['Devices from Open-AudIT'] = 'Open- AudIT ierīces';

$GLOBALS["lang"]['Devices in Running State'] = 'Ierīces braukšanas stāvoklī';

$GLOBALS["lang"]['Devices in Stopped State'] = 'Ierīces apstādinātā stāvoklī';

$GLOBALS["lang"]['Devices in this'] = 'Ierīces šajā';

$GLOBALS["lang"]['Devices will not be matched if their status is set to <i>deleted</i>. Any other status will allow a match to occur.'] = 'Ierīces netiks saskaņotas, ja to statuss ir iestatīts uz <i>svītrots</i>. Jebkurš cits statuss ļaus notikt sakritībai.';

$GLOBALS["lang"]['Devices with Expired Warranties'] = 'Ierīces ar spēkā neesošām garantijām';

$GLOBALS["lang"]['Devired from type or OS.'] = 'Nošķirti no tipa vai OS.';

$GLOBALS["lang"]['dhcp_enabled'] = 'Dhcp ieslēgts';

$GLOBALS["lang"]['Dhcp Enabled'] = 'Dhcp ieslēgts';

$GLOBALS["lang"]['dhcp_lease_expires'] = 'Nomāšanas termiņš beidzas';

$GLOBALS["lang"]['Dhcp Lease Expires'] = 'Nomāšanas termiņš beidzas';

$GLOBALS["lang"]['dhcp_lease_obtained'] = 'Nomnieks, kas saņem nomnieku';

$GLOBALS["lang"]['Dhcp Lease Obtained'] = 'Nomnieks, kas saņem nomnieku';

$GLOBALS["lang"]['dhcp_server'] = 'Dhcp serveris';

$GLOBALS["lang"]['Dhcp Server'] = 'Dhcp serveris';

$GLOBALS["lang"]['Did the command complete successfully and return expected data.'] = 'Pabeidza komandu veiksmīgi un atgrieza gaidītos datus.';

$GLOBALS["lang"]['direction'] = 'Virziens';

$GLOBALS["lang"]['Direction'] = 'Virziens';

$GLOBALS["lang"]['directory'] = 'Mape';

$GLOBALS["lang"]['Directory'] = 'Mape';

$GLOBALS["lang"]['disabled'] = 'Atslēgts';

$GLOBALS["lang"]['Disabled'] = 'Atslēgts';

$GLOBALS["lang"]['discard'] = 'Izmest';

$GLOBALS["lang"]['Discard'] = 'Izmest';

$GLOBALS["lang"]['Discover'] = 'Atklājiet';

$GLOBALS["lang"]['Discoveries'] = 'Atklājumi';

$GLOBALS["lang"]['Discoveries are at the very heart of what Open-AudIT does. How else would you know <i>Whats On Your Network?</i>'] = 'Atklājumi ir pašā centrā to, ko Open-AudIT dara. Kā citādi tu zinātu <i>Kas ir jūsu tīklā?</i>';

$GLOBALS["lang"]['Discoveries are entries that enable you to run a discovery upon a network in a single click, without entering the details of that network each and every time.'] = 'Atklājumi ir ieraksti, kas ļauj palaist atklājumu pēc tīkla ar vienu klikšķi, neievadot šī tīkla detaļas katru reizi.';

$GLOBALS["lang"]['Discovery'] = 'Atklājums';

$GLOBALS["lang"]['Discovery Change Logs'] = 'Atklāšanas izmaiņu žurnāli';

$GLOBALS["lang"]['Discovery Data Retention'] = 'Atklāšanas datu saglabāšana';

$GLOBALS["lang"]['discovery_id'] = 'Atklāšanas ID';

$GLOBALS["lang"]['Discovery ID'] = 'Atklāšanas ID';

$GLOBALS["lang"]['Discovery Issues'] = 'Atklāšanas jautājumi';

$GLOBALS["lang"]['discovery_log'] = 'Atklāšanas žurnāls';

$GLOBALS["lang"]['Discovery Log'] = 'Atklāšanas žurnāls';

$GLOBALS["lang"]['Discovery Match Options'] = 'Atklāšanas sakritības opcijas';

$GLOBALS["lang"]['Discovery Name'] = 'Atklāšanas nosaukums';

$GLOBALS["lang"]['Discovery Options'] = 'Atklāšanas opcijas';

$GLOBALS["lang"]['Discovery Queue Count'] = 'Atklāšanas rindas skaits';

$GLOBALS["lang"]['Discovery Queue Limit'] = 'Atklāšanas rindas ierobežojums';

$GLOBALS["lang"]['discovery_run'] = 'Atklāšana';

$GLOBALS["lang"]['Discovery Run'] = 'Atklāšana';

$GLOBALS["lang"]['discovery_scan_options'] = 'Atklāšanas skenēšanas opcijas';

$GLOBALS["lang"]['Discovery Scan Options'] = 'Atklāšanas skenēšanas opcijas';

$GLOBALS["lang"]['Discovery Scan Options are just another item collection. Enterprise users can create, read, update and delete entries as required. Professional users can read all entries, but not create new entries, update existing entries or delete entries. Community users have no GUI that allows access to this collection.'] = 'Atklāšanas skenēšana Opcijas ir tikai vēl viena elementa kolekcija. Uzņēmuma lietotāji var izveidot, lasīt, atjaunināt un dzēst ierakstus pēc vajadzības. Profesionāli lietotāji var nolasīt visus ierakstus, bet ne izveidot jaunus ierakstus, atjaunināt esošos ierakstus vai dzēst ierakstus. Kopienas lietotājiem nav GUI, kas ļauj piekļūt šai kolekcijai.';

$GLOBALS["lang"]['Discovery Scan Types'] = 'Atklāšanas skenēšanas tipi';

$GLOBALS["lang"]['Discovery Support'] = 'Atklāšanas atbalsts';

$GLOBALS["lang"]['Discovery has stopped working'] = 'Atklājums pārtrauca darbu';

$GLOBALS["lang"]['disk'] = 'Disks';

$GLOBALS["lang"]['Disk'] = 'Disks';

$GLOBALS["lang"]['display_version'] = 'Rādīt versiju';

$GLOBALS["lang"]['Display Version'] = 'Rādīt versiju';

$GLOBALS["lang"]['Display in Menu'] = 'Rādīt izvēlnē';

$GLOBALS["lang"]['Displays a standard web form for submission to POST /{collection}.'] = 'Rāda standarta tīmekļa formu iesniegšanai PostT /{collection}.';

$GLOBALS["lang"]['Displays a standard web form for submission to POST /{collection}/import.'] = 'Rāda standarta tīmekļa formu iesniegšanai PostT /{collection}/import.';

$GLOBALS["lang"]['district'] = 'Apgabals';

$GLOBALS["lang"]['District'] = 'Apgabals';

$GLOBALS["lang"]['Djibouti'] = 'Džibutija';

$GLOBALS["lang"]['dns'] = 'Dns';

$GLOBALS["lang"]['Dns'] = 'Dns';

$GLOBALS["lang"]['dns_domain'] = 'Dns domēns';

$GLOBALS["lang"]['Dns Domain'] = 'Dns domēns';

$GLOBALS["lang"]['dns_domain_reg_enabled'] = 'Ieslēgts Dns Domain Reg';

$GLOBALS["lang"]['Dns Domain Reg Enabled'] = 'Ieslēgts Dns Domain Reg';

$GLOBALS["lang"]['dns_fqdn'] = 'Dns Fqdn';

$GLOBALS["lang"]['Dns Fqdn'] = 'Dns Fqdn';

$GLOBALS["lang"]['dns_host_name'] = 'Dns resursdatora nosaukums';

$GLOBALS["lang"]['Dns Host Name'] = 'Dns resursdatora nosaukums';

$GLOBALS["lang"]['dns_hostname'] = 'Dns resursdatora nosaukums';

$GLOBALS["lang"]['Dns Hostname'] = 'Dns resursdatora nosaukums';

$GLOBALS["lang"]['dns_server'] = 'Dns serveris';

$GLOBALS["lang"]['Dns Server'] = 'Dns serveris';

$GLOBALS["lang"]['Do not forget about the Open-AudIT wiki for all your documentation.'] = 'Neaizmirstiet par Open-AudIT wiki visiem jūsu dokumentiem.';

$GLOBALS["lang"]['Do not forget there is a mountain of documentation on the wiki'] = 'Neaizmirstiet, ka viki ir dokumentācijas kalns';

$GLOBALS["lang"]['Do not scan these TCP ports.'] = 'Neskenējiet šos TCP portus.';

$GLOBALS["lang"]['Do not scan these UDP ports.'] = 'Neskenējiet šos UDP portus.';

$GLOBALS["lang"]['Do not show me again'] = 'Nerādīt man vēlreiz';

$GLOBALS["lang"]['Do you have a perfect example of this configuration? Perhaps a device located in a lab environment or a workstation you use to clone workstation VMs from.'] = 'Vai jums ir ideāls piemērs šai konfigurācijai? Varbūt ierīce, kas atrodas laboratorijas vidē, vai darbstacija, kuru izmantojat, lai klons darbstacijas VMs no.';

$GLOBALS["lang"]['Do you want to use secure transport (LDAPS) or regular unencrypted LDAP.'] = 'Vai vēlaties izmantot drošu transportu (LDAPS) vai regulāru nešifrētu LDAP.';

$GLOBALS["lang"]['Do you wish to see the standard sidebar on the left.'] = 'Vai vēlaties redzēt standarta sānjoslu pa kreisi.';

$GLOBALS["lang"]['documentation'] = 'Dokumentācija';

$GLOBALS["lang"]['Documentation'] = 'Dokumentācija';

$GLOBALS["lang"]['Documentation about a particular collection.'] = 'Dokumentācija par konkrētu kolekciju.';

$GLOBALS["lang"]['Does Not Equal'] = 'Nav vienāds';

$GLOBALS["lang"]['Does the license apply to child Orgs.'] = 'Vai licence attiecas uz bērnu Orgs.';

$GLOBALS["lang"]['domain'] = 'Domēns';

$GLOBALS["lang"]['Domain'] = 'Domēns';

$GLOBALS["lang"]['domain_controller_address'] = 'Domēna kontrollera adrese';

$GLOBALS["lang"]['Domain Controller Address'] = 'Domēna kontrollera adrese';

$GLOBALS["lang"]['domain_controller_name'] = 'Domēna kontrolieris Nosaukums';

$GLOBALS["lang"]['Domain Controller Name'] = 'Domēna kontrolieris Nosaukums';

$GLOBALS["lang"]['domain_role'] = 'Domēna loma';

$GLOBALS["lang"]['Domain Role'] = 'Domēna loma';

$GLOBALS["lang"]['domain_short'] = 'Domēns īss';

$GLOBALS["lang"]['Domain Short'] = 'Domēns īss';

$GLOBALS["lang"]['Dominica'] = 'Dominika';

$GLOBALS["lang"]['Dominican Republic'] = 'Dominikānas Republika';

$GLOBALS["lang"]['Dont hold my hand, I know what I am doing. No filter and the ability to join custom tables.'] = 'Neturi roku, es zinu, ko daru. Nav filtra un iespēja pievienoties pielāgotām tabulām.';

$GLOBALS["lang"]['Download'] = 'Lejupielādēt';

$GLOBALS["lang"]['Download a File'] = 'Lejupielādēt failu';

$GLOBALS["lang"]['Download a file from URL'] = 'Lejupielādēt failu no URL';

$GLOBALS["lang"]['Download the test_windows_client.vbs script directly'] = 'Lejupielādēt test_windows_client.vbs skriptu tieši';

$GLOBALS["lang"]['Download your updated version from'] = 'Lejupielādēt atjaunināto versiju no';

$GLOBALS["lang"]['driver'] = 'Draiveris';

$GLOBALS["lang"]['Driver'] = 'Draiveris';

$GLOBALS["lang"]['duplex'] = 'Duplekss';

$GLOBALS["lang"]['Duplex'] = 'Duplekss';

$GLOBALS["lang"]['Duplicate Devices / Missing Devices'] = 'Dublēt ierīces / Trūkst ierīces';

$GLOBALS["lang"]['duration'] = 'Ilgums';

$GLOBALS["lang"]['Duration'] = 'Ilgums';

$GLOBALS["lang"]['Dutch'] = 'Holandiešu';

$GLOBALS["lang"]['ESXi'] = 'ESXi';

$GLOBALS["lang"]['EULA'] = 'EULA';

$GLOBALS["lang"]['Each IP is scanned with the discovery configured options (see Discovery Scan Options and Discovery - Community vs Professional vs Enterprise on the wiki). In general, Nmap will test for ports 22 (ssh), 135 (wmi), 62078 (iPhone) and UDP 161 (snmp). If 22, 135 or 161 respond the credential list is retrieved and each credential tested in turn. The first working credentials are used for further queries directly from the device. Note - if a device has previously been discovered and has working credentials, those credentials are tested first. Only if those fail are the other credentials then attempted.'] = 'Katrs IP tiek skenēts ar meklēšanas konfigurētajām opcijām (skatīt Discovery Scan Opcijas un Discovery - Community vs Professional vs Enterprise on the wiki). Kopumā Nmap pārbaudīs 22 (ssh), 135 (wmi), 62078 (iPhone) un UDP 161 (snmp). Ja atbilde ir 22, 135 vai 161, tad tiek paņemts atrunu saraksts un pēc kārtas tiek pārbaudīta katra atruna. Pirmie darba akreditācijas dati tiek izmantoti turpmākiem vaicājumiem tieši no ierīces. Piezīme - ja ierīce ir iepriekš atklāta un tai ir darba akreditācijas dati, šie dati tiek pārbaudīti vispirms. Tikai tad, ja šīs neveiksmes ir citas pilnvaras, tad mēģināja.';

$GLOBALS["lang"]['Each time a device is discovered or an audit result is processed, all rules are retrieved from the database and run against the attributes of the specific device. Rules run against one device at a time - there is no facility to say <i>Run the rules against all devices<i> or <i>Run the rules against these devices<i>. An individual rule will test one or more attributes of the device and if they match the rule, the result will be applied. Several attributes can be tested. Several attributes can be set. Think of this as an If This, Then That system for Open-AudIT.'] = 'Katru reizi, kad ierīce tiek atklāta vai audita rezultāts tiek apstrādāts, visi noteikumi tiek izgūti no datubāzes un darbojas pret konkrētās ierīces atribūtiem. Noteikumi darbojas pret vienu ierīci vienlaicīgi - nav iespēju teikt <i>Palaist noteikumus pret visām ierīcēm<i> vai <i>Palaist noteikumus pret šīm ierīcēm<i>. Atsevišķs noteikums pārbaudīs vienu vai vairākus ierīces atribūtus, un, ja tie atbilst noteikumam, rezultāts tiks piemērots. Var pārbaudīt vairākus raksturlielumus. Var iestatīt vairākus atribūtus. Domājiet par šo kā If This, Tad Šī sistēma Open-AudIT.</i></i></i></i>';

$GLOBALS["lang"]['Easily run a discovery upon a network in a single click, without entering the details of that network each and every time.'] = 'Viegli palaist atklājumu uz tīkla ar vienu klikšķi, neievadot šī tīkla detaļas katru reizi.';

$GLOBALS["lang"]['Ecuador'] = 'Ekvadora';

$GLOBALS["lang"]['Edit'] = 'Rediģēt';

$GLOBALS["lang"]['edit_log'] = 'Rediģēt žurnālu';

$GLOBALS["lang"]['Edit Log'] = 'Rediģēt žurnālu';

$GLOBALS["lang"]['editable'] = 'Rediģējams';

$GLOBALS["lang"]['Editable'] = 'Rediģējams';

$GLOBALS["lang"]['edited_by'] = 'Rediģēts';

$GLOBALS["lang"]['Edited By'] = 'Rediģēts';

$GLOBALS["lang"]['edited_date'] = 'Rediģēts datums';

$GLOBALS["lang"]['Edited Date'] = 'Rediģēts datums';

$GLOBALS["lang"]['edition'] = 'Izdevums';

$GLOBALS["lang"]['Edition'] = 'Izdevums';

$GLOBALS["lang"]['Egypt'] = 'Ēģipte';

$GLOBALS["lang"]['Either Amazon, Google or Microsoft.'] = 'Amazon, Google vai Microsoft.';

$GLOBALS["lang"]['Either none or present.

<strong>None</strong> - The successful attack does not depend on the deployment and execution conditions of the vulnerable system. The attacker can expect to be able to reach the vulnerability and execute the exploit under all or most instances of the vulnerability.

<strong>Present</strong> - The successful attack depends on the presence of specific deployment and execution conditions of the vulnerable system that enable the attack. These include:

A race condition must be won to successfully exploit the vulnerability. The successfulness of the attack is conditioned on execution conditions that are not under full control of the attacker. The attack may need to be launched multiple times against a single target before being successful.

Network injection. The attacker must inject themselves into the logical network path between the target and the resource requested by the victim (e.g. vulnerabilities requiring an on-path attacker).'] = 'Vai nu nav, vai nav klāt.

<strong>Nav</strong> - Veiksmīgais uzbrukums nav atkarīgs no neaizsargātās sistēmas izvietošanas un izpildes apstākļiem. Uzbrucējs var sagaidīt, ka spēs sasniegt ievainojamību un izmantot visus vai lielāko daļu neaizsargātības gadījumu.

<strong>Klāt</strong> - Veiksmīgs uzbrukums ir atkarīgs no tā, vai ir īpaši izvietoti un izpildīti neaizsargātās sistēmas nosacījumi, kas ļauj uzbrukumu. Riska faktori ir sekojoši:

Jāuzvar sacīkšu stāvoklis, lai veiksmīgi izmantotu ievainojamību. Uzbrukuma veiksmīgums ir nosacīts izpildes nosacījumiem, kurus pilnībā nekontrolē uzbrucējs. Uzbrukumu var būt nepieciešams uzsākt vairākas reizes pret vienu mērķi, lai gūtu panākumus.

Tīkla ievade. Uzbrucējam jāiešļircina sevi loģiskā tīkla ceļā starp mērķi un cietušā pieprasīto resursu (piemēram, ievainojamība, kas prasa uz ceļa uzbrucēju).';

$GLOBALS["lang"]['El Salvador'] = 'Salvadora';

$GLOBALS["lang"]['email'] = 'E- pasts';

$GLOBALS["lang"]['Email'] = 'E- pasts';

$GLOBALS["lang"]['email_address'] = 'E- pasta adrese';

$GLOBALS["lang"]['Email Address'] = 'E- pasta adrese';

$GLOBALS["lang"]['Email Configuration'] = 'E- pasta konfigurācija';

$GLOBALS["lang"]['Email to send test to'] = 'E-pasts, lai nosūtītu testu';

$GLOBALS["lang"]['Enable'] = 'Ieslēgt';

$GLOBALS["lang"]['Enable Distributed COM on this computer - Option is checked'] = 'Ieslēgt sadalīto COM šajā datorā - tiek pārbaudīta opcija';

$GLOBALS["lang"]['enabled'] = 'Aktivizēts';

$GLOBALS["lang"]['Enabled'] = 'Aktivizēts';

$GLOBALS["lang"]['Enabling the Feature Under Windows'] = 'Logu iezīme';

$GLOBALS["lang"]['encryption'] = 'Šifrēšana';

$GLOBALS["lang"]['Encryption'] = 'Šifrēšana';

$GLOBALS["lang"]['encryption_method'] = 'Šifrēšanas metode';

$GLOBALS["lang"]['Encryption Method'] = 'Šifrēšanas metode';

$GLOBALS["lang"]['encryption_status'] = 'Šifrēšanas statuss';

$GLOBALS["lang"]['Encryption Status'] = 'Šifrēšanas statuss';

$GLOBALS["lang"]['end_date'] = 'Beigu datums';

$GLOBALS["lang"]['End Date'] = 'Beigu datums';

$GLOBALS["lang"]['End OF Life Product ID'] = 'Dzīvības beigu produkta ID';

$GLOBALS["lang"]['end_of_life'] = 'Dzīves beigas';

$GLOBALS["lang"]['End Of Life'] = 'Dzīves beigas';

$GLOBALS["lang"]['end_of_production'] = 'Ražošanas beigas';

$GLOBALS["lang"]['End Of Production'] = 'Ražošanas beigas';

$GLOBALS["lang"]['end_of_service'] = 'Pakalpojuma beigas';

$GLOBALS["lang"]['End Of Service'] = 'Pakalpojuma beigas';

$GLOBALS["lang"]['end_of_service_life'] = 'Kalpošanas mūža beigas';

$GLOBALS["lang"]['End Of Service Life'] = 'Kalpošanas mūža beigas';

$GLOBALS["lang"]['Endpoint'] = 'Mērķa kritērijs';

$GLOBALS["lang"]['English'] = 'Angļu';

$GLOBALS["lang"]['Enhances regulatory compliance'] = 'uzlabo regulatīvo atbilstību;';

$GLOBALS["lang"]['Enrichment is complete. The CVE has full metadata and is considered stable.'] = 'Bagātināšana ir pabeigta. CVE ir pilni metadati, un to uzskata par stabilu.';

$GLOBALS["lang"]['Ensure documentation is controlled and accessible'] = 'Nodrošināt, ka dokumentācija tiek kontrolēta un pieejama';

$GLOBALS["lang"]['enterprise'] = 'Uzņēmums';

$GLOBALS["lang"]['Enterprise'] = 'Uzņēmums';

$GLOBALS["lang"]['Enterprise Private Network'] = 'Privātais uzņēmums';

$GLOBALS["lang"]['Enterprise private network'] = 'Privātais uzņēmumu tīkls';

$GLOBALS["lang"]['Entitlement Type'] = 'Tiesību veids';

$GLOBALS["lang"]['Entra'] = 'Entra';

$GLOBALS["lang"]['environment'] = 'Vide';

$GLOBALS["lang"]['Environment'] = 'Vide';

$GLOBALS["lang"]['Equal To'] = 'Vienāds ar';

$GLOBALS["lang"]['Equal To or Greater Than'] = 'Vienāds vai lielāks par';

$GLOBALS["lang"]['Equal To or Less Than'] = 'Vienāds vai mazāks par';

$GLOBALS["lang"]['Equals'] = 'Vienāds ar';

$GLOBALS["lang"]['Equatorial Guinea'] = 'Ekvatoriālā Gvineja';

$GLOBALS["lang"]['Eritrea'] = 'Eritreja';

$GLOBALS["lang"]['Error'] = 'Kļūda';

$GLOBALS["lang"]['Error Code'] = 'Kļūdas kods';

$GLOBALS["lang"]['Esperanto'] = 'Esperanto';

$GLOBALS["lang"]['Establish a project plan and timeline'] = 'Izveidot projekta plānu un grafiku';

$GLOBALS["lang"]['Establish an information security policy'] = 'Izveidot informācijas drošības politiku';

$GLOBALS["lang"]['Established'] = 'Dibināts';

$GLOBALS["lang"]['Estonia'] = 'Igaunija';

$GLOBALS["lang"]['Estonian'] = 'igauņu';

$GLOBALS["lang"]['Ethernet MAC'] = 'Ethernet MAC';

$GLOBALS["lang"]['ethernet_mac'] = 'Ethernet Mac';

$GLOBALS["lang"]['Ethernet Mac'] = 'Ethernet Mac';

$GLOBALS["lang"]['Ethiopia'] = 'Etiopija';

$GLOBALS["lang"]['Evaluate the ISMS internally'] = 'Iekšējā ISMS novērtēšana';

$GLOBALS["lang"]['Every'] = 'Katru';

$GLOBALS["lang"]['Every Day'] = 'Katru dienu';

$GLOBALS["lang"]['Example'] = 'Piemērs';

$GLOBALS["lang"]['Example Devices'] = 'Piemēru ierīces';

$GLOBALS["lang"]['Example Org Chart with Access'] = 'Org diagramma ar piekļuvi';

$GLOBALS["lang"]['Example text from'] = 'Teksta piemērs no';

$GLOBALS["lang"]['Examples'] = 'Piemēri';

$GLOBALS["lang"]['Exceptions'] = 'Izņēmumi';

$GLOBALS["lang"]['exclude'] = 'Izslēgt';

$GLOBALS["lang"]['Exclude'] = 'Izslēgt';

$GLOBALS["lang"]['exclude_ip'] = 'Izslēgt IP';

$GLOBALS["lang"]['Exclude IP'] = 'Izslēgt IP';

$GLOBALS["lang"]['Exclude IP Addresses'] = 'Izslēgt IP adreses';

$GLOBALS["lang"]['Exclude IP Addresses (individual IP - 192.168.1.20, ranges - 192.168.1.30-40 or subnets - 192.168.1.100/30) listed from being scanned. Comma seperated, no spaces.'] = 'Izslēgt IP adreses (individuālie IP - 192.168.1.20, diapazoni - 192.168.1.30-40 vai apakštīkli - 192.168.1.100/30) uzskaitīti no skenēšanas. Komēta ir atdalīta, nav atstarpju.';

$GLOBALS["lang"]['Exclude TCP Ports'] = 'Izņemot TCP ostas';

$GLOBALS["lang"]['exclude_tcp_ports'] = 'Izņemot Tcp ostas';

$GLOBALS["lang"]['Exclude Tcp Ports'] = 'Izņemot Tcp ostas';

$GLOBALS["lang"]['Exclude UDP Ports'] = 'Izslēgt UDP ostas';

$GLOBALS["lang"]['exclude_udp_ports'] = 'Izslēgt Udp ostas';

$GLOBALS["lang"]['Exclude Udp Ports'] = 'Izslēgt Udp ostas';

$GLOBALS["lang"]['Exclude any ports listed from being scanned. Comma seperated, no spaces.'] = 'Izslēgt sarakstā iekļautās ostas no skenēšanas. Komēta ir atdalīta, nav atstarpju.';

$GLOBALS["lang"]['Exclude these IP addresses from being Nmap scanned.'] = 'Izslēgt šīs IP adreses no Nmap skenēšanas.';

$GLOBALS["lang"]['Excluded'] = 'Izslēgts';

$GLOBALS["lang"]['exclusion_reasons'] = 'Izslēgšanas iemesli';

$GLOBALS["lang"]['Exclusion Reasons'] = 'Izslēgšanas iemesli';

$GLOBALS["lang"]['executable'] = 'Izpildāmais';

$GLOBALS["lang"]['Executable'] = 'Izpildāmais';

$GLOBALS["lang"]['executable_id'] = 'Izpildāmā ID';

$GLOBALS["lang"]['Executable ID'] = 'Izpildāmā ID';

$GLOBALS["lang"]['executables'] = 'Izpildāmie faili';

$GLOBALS["lang"]['Executables'] = 'Izpildāmie faili';

$GLOBALS["lang"]['Execute'] = 'Izpildīt';

$GLOBALS["lang"]['Executing'] = 'Izpilda';

$GLOBALS["lang"]['exemption_reason'] = 'Atbrīvojuma iemesls';

$GLOBALS["lang"]['Exemption Reason'] = 'Atbrīvojuma iemesls';

$GLOBALS["lang"]['Existing Building'] = 'Esošā ēka';

$GLOBALS["lang"]['Existing Floor'] = 'Esošā grīda';

$GLOBALS["lang"]['Existing Room'] = 'Esošā telpa';

$GLOBALS["lang"]['Existing Row'] = 'Esošā rinda';

$GLOBALS["lang"]['expire_date'] = 'Derīguma termiņš';

$GLOBALS["lang"]['Expire Date'] = 'Derīguma termiņš';

$GLOBALS["lang"]['expire_minutes'] = 'Izņemt protokolu';

$GLOBALS["lang"]['Expire Minutes'] = 'Izņemt protokolu';

$GLOBALS["lang"]['expires'] = 'Zaudē spēku';

$GLOBALS["lang"]['Expires'] = 'Zaudē spēku';

$GLOBALS["lang"]['expiry_date'] = 'Derīguma termiņš';

$GLOBALS["lang"]['Expiry Date'] = 'Derīguma termiņš';

$GLOBALS["lang"]['exploit_maturity'] = 'Izmantot termiņu';

$GLOBALS["lang"]['Exploit Maturity'] = 'Izmantot termiņu';

$GLOBALS["lang"]['Export'] = 'Eksports';

$GLOBALS["lang"]['Export by Device'] = 'Eksportēt ar ierīci';

$GLOBALS["lang"]['Export by Policy'] = 'Eksportēt pēc politikas';

$GLOBALS["lang"]['Export data to'] = 'Eksportēt datus uz';

$GLOBALS["lang"]['Exporting a Device'] = 'Eksportē ierīci';

$GLOBALS["lang"]['expose'] = 'Eksponēt';

$GLOBALS["lang"]['Expose'] = 'Eksponēt';

$GLOBALS["lang"]['External'] = 'Ārējā';

$GLOBALS["lang"]['External Field Name'] = 'Ārējā lauka nosaukums';

$GLOBALS["lang"]['External Field Type'] = 'Ārējā lauka tips';

$GLOBALS["lang"]['External Field Types'] = 'Ārējā lauka tipi';

$GLOBALS["lang"]['external_ident'] = 'Ārējā Identitāte';

$GLOBALS["lang"]['External Ident'] = 'Ārējā Identitāte';

$GLOBALS["lang"]['external_link'] = 'Ārējā saite';

$GLOBALS["lang"]['External Link'] = 'Ārējā saite';

$GLOBALS["lang"]['extra_columns'] = 'Papildus kolonas';

$GLOBALS["lang"]['Extra Columns'] = 'Papildus kolonas';

$GLOBALS["lang"]['Extra and Time based Reporting'] = 'Uz ārzonu un laiku balstīta ziņošana';

$GLOBALS["lang"]['Extra and more verbose logging is generated for troubleshooting.'] = 'Papildus un vairāk stenoza žurnalēšana tiek ģenerēts traucējummeklēšanai.';

$GLOBALS["lang"]['FAQ'] = 'BUJ';

$GLOBALS["lang"]['FQDN'] = 'FQDN';

$GLOBALS["lang"]['FW Revision'] = 'FW revīzija';

$GLOBALS["lang"]['Fail'] = 'Neveiksme';

$GLOBALS["lang"]['Failed'] = 'Neizdevās';

$GLOBALS["lang"]['Failed Severity'] = 'Kļūdains svērums';

$GLOBALS["lang"]['Falkland Islands (Malvinas)'] = 'Folklenda salas (Malvīnas)';

$GLOBALS["lang"]['Family'] = 'Ģimene';

$GLOBALS["lang"]['Faroe Islands'] = 'Fēru salas';

$GLOBALS["lang"]['Features'] = 'Iezīmes';

$GLOBALS["lang"]['February'] = 'Februārs';

$GLOBALS["lang"]['field'] = 'Lauks';

$GLOBALS["lang"]['Field'] = 'Lauks';

$GLOBALS["lang"]['field_id'] = 'Lauka ID';

$GLOBALS["lang"]['Field ID'] = 'Lauka ID';

$GLOBALS["lang"]['Field Name'] = 'Lauka nosaukums';

$GLOBALS["lang"]['Field Type'] = 'Lauka veids';

$GLOBALS["lang"]['Fields'] = 'Lauki';

$GLOBALS["lang"]['fields'] = 'Lauki';

$GLOBALS["lang"]['Fields attributes are'] = 'Lauku atribūti ir';

$GLOBALS["lang"]['Fiji the Fiji Islands'] = 'Fidži salas';

$GLOBALS["lang"]['File'] = 'Fails';

$GLOBALS["lang"]['File Auditing'] = 'Failu revīzija';

$GLOBALS["lang"]['File Import'] = 'Fails importēts';

$GLOBALS["lang"]['File Input'] = 'Faila ievade';

$GLOBALS["lang"]['file_name'] = 'Faila nosaukums';

$GLOBALS["lang"]['File Name'] = 'Faila nosaukums';

$GLOBALS["lang"]['File Share Discovery'] = 'Failu kopīgošanas atklājums';

$GLOBALS["lang"]['file_size'] = 'Faila izmērs';

$GLOBALS["lang"]['File Size'] = 'Faila izmērs';

$GLOBALS["lang"]['filename'] = 'Faila nosaukums';

$GLOBALS["lang"]['Filename'] = 'Faila nosaukums';

$GLOBALS["lang"]['files'] = 'Faili';

$GLOBALS["lang"]['Files'] = 'Faili';

$GLOBALS["lang"]['files_id'] = 'Failu ID';

$GLOBALS["lang"]['Files ID'] = 'Failu ID';

$GLOBALS["lang"]['filter'] = 'Filtrs';

$GLOBALS["lang"]['Filter'] = 'Filtrs';

$GLOBALS["lang"]['filtered'] = 'Filtrēts';

$GLOBALS["lang"]['Filtered'] = 'Filtrēts';

$GLOBALS["lang"]['Filtered Ports'] = 'Filtrētās ostas';

$GLOBALS["lang"]['Finland'] = 'Somija';

$GLOBALS["lang"]['Finnish'] = 'Somu';

$GLOBALS["lang"]['Firewall'] = 'Ugunsmūris';

$GLOBALS["lang"]['Firewall Packages'] = 'Ugunsmūra pakotnes';

$GLOBALS["lang"]['firewall_rule'] = 'Ugunsmūra noteikums';

$GLOBALS["lang"]['Firewall Rule'] = 'Ugunsmūra noteikums';

$GLOBALS["lang"]['firmware'] = 'cietais';

$GLOBALS["lang"]['Firmware'] = 'cietais';

$GLOBALS["lang"]['firmware_revision'] = 'Firmware revīzijaComment';

$GLOBALS["lang"]['Firmware Revision'] = 'Firmware revīzijaComment';

$GLOBALS["lang"]['First'] = 'Pirmais';

$GLOBALS["lang"]['First Name'] = 'Vārds';

$GLOBALS["lang"]['first_run'] = 'Pirmais brauciens';

$GLOBALS["lang"]['First Run'] = 'Pirmais brauciens';

$GLOBALS["lang"]['first_seen'] = 'Pirmais seanss';

$GLOBALS["lang"]['First Seen'] = 'Pirmais seanss';

$GLOBALS["lang"]['First focus on what the end need is: are you trying to baseline software, users, or Netstat data? What is the important thing(s) to compare and report on?'] = 'Pirmā uzmanība uz to, kas galu nepieciešams ir: jūs mēģināt bāzes programmatūru, lietotāji, vai Netstat dati? Kas ir svarīgi salīdzināt un ziņot par to?';

$GLOBALS["lang"]['FirstWave'] = 'FirstWave';

$GLOBALS["lang"]['Fix'] = 'Fikss';

$GLOBALS["lang"]['Fixed'] = 'Fiksēts';

$GLOBALS["lang"]['Fixing the Issue'] = 'Jautājuma noteikšana';

$GLOBALS["lang"]['Floor'] = 'Grīda';

$GLOBALS["lang"]['Follow any of the links below and discover how to use Open-AudIT to find out <b>Whats On Your Network?</b>'] = 'Sekojiet jebkurai no zemāk redzamajām saitēm un atklājiet, kā izmantot Open-AudIT, lai uzzinātu <b>Kas ir jūsu tīklā?</b>';

$GLOBALS["lang"]['For'] = 'Par';

$GLOBALS["lang"]['For <i>Type</i> make sure to select Baseline, and for Group you should select a Group of devices, if applicable to this baseline, that best represent the devices to apply the baseline against. This will prevent erroneous entries.'] = 'Par <i>Veids</i> pārliecinieties, lai izvēlētos bāzes, un grupai jums vajadzētu izvēlēties ierīču grupu, ja piemērojams šajā bāzes, kas vislabāk pārstāvēt ierīces, lai piemērotu bāzes līnijas pret. Šis novērsīs kļūdainus ierakstus.';

$GLOBALS["lang"]['For Debian/Ubuntu run, including setting dpkg to remember your override so an apt-get upgrade will not break'] = 'Debian / Ubuntu palaist, ieskaitot iestatījumu dpkg, lai atcerētos jūsu nomaināmība tāpēc tpt-get jauninājums nebūs pārtraukums';

$GLOBALS["lang"]['For SNMP Open-AudIT can use v1, v2 and v3 credentials. The device is queried regardless of it being a router, switch (regular network devices) or a computer (Linux and Windows often run SNMP for monitoring tools).'] = 'SNMP Open-AudIT var izmantot v1, v2 un v3 akreditācijas datus. Ierīce tiek apšaubīta neatkarīgi no tā, vai tā ir maršrutētājs, komutators (regulārās tīkla ierīces) vai dators (Linux un Windows bieži palaist SNMP monitoringa rīkiem).';

$GLOBALS["lang"]['For a primer on cron, see this Wikipedia page'] = 'Par praimeru uz cron skatīt šo Wikipedia lapu';

$GLOBALS["lang"]['For a seed discovery, should I only discover IPs in the private IP address space.'] = 'Sēklu atklāšanai, vai es varētu atklāt tikai IP privātajā IP adrešu telpā.';

$GLOBALS["lang"]['For a seed discovery, should I only discover IPs on the chosen subnet.'] = 'Sēklu atklāšanai, ja es atklātu tikai IP uz izvēlētā apakštīkla.';

$GLOBALS["lang"]['For a seed discovery, should I ping the subnet before running the discovery.'] = 'Sēklu atklāšanai, ja es ping apakštīklu pirms palaist atklājumu.';

$GLOBALS["lang"]['For advanced entry of a raw SQL query. As per Queries, you must include <code>WHERE @filter AND<code> in your SQL.'] = 'Raw SQL vaicājuma papildu ievadīšanai. Kā katru vaicājumu, jums ir jāiekļauj <code>WHERE @filter AND<code> in your SQL.</code></code>';

$GLOBALS["lang"]['For each spawned process, the below occurs.'] = 'Katram nārsta procesam notiek tālāk.';

$GLOBALS["lang"]['For example - you might create a baseline from a device running Redhat 9 which acts as one of your Apache servers in a cluster. You know this particular server is configured just the way you want it but you are unsure if other servers in the cluster are configured exactly the same. Baselines enable you to determine this.'] = 'Piemēram - jūs varētu izveidot bāzes no ierīces, kas darbojas Redhat 9 kas darbojas kā viens no jūsu Apache serveriem klasterī. Jūs zināt, šis konkrētais serveris ir konfigurēts tieši tā, kā vēlaties to, bet jūs neesat pārliecināts, vai citi serveri klasterī ir konfigurēti tieši tāpat. Bāzes līnijas ļauj jums noteikt šo.';

$GLOBALS["lang"]['For example - you might create a baseline from a device running Redhat 9 which acts as one of your Apache servers in a cluster. You know this particular server is configured just the way you want it but you are unsure if other servers in the cluster are configured exactly the same. Baselines enables you to determine this.'] = 'Piemēram - jūs varētu izveidot bāzes no ierīces, kas darbojas Redhat 9 kas darbojas kā viens no jūsu Apache serveriem klasterī. Jūs zināt, šis konkrētais serveris ir konfigurēts tieši tā, kā vēlaties to, bet jūs neesat pārliecināts, vai citi serveri klasterī ir konfigurēti tieši tāpat. Bāzes līnijas ļauj to noteikt.';

$GLOBALS["lang"]['For further details information, see the wiki.'] = 'Sīkākai informācijai skatīt wiki.';

$GLOBALS["lang"]['For licenses that are not perpetual, when does the license expire.'] = 'Licencēm, kas nav perpetual, kad tas licences beidzas.';

$GLOBALS["lang"]['For more detailed information, check the Open-AudIT Knowledge Base.'] = 'Lai iegūtu sīkāku informāciju, pārbaudiet Open-AudIT zināšanu bāzi.';

$GLOBALS["lang"]['For more information please see the following guide which includes a video. Use'] = 'Plašāku informāciju skatīt šajā rokasgrāmatā, kurā iekļauts video. Lietot';

$GLOBALS["lang"]['For more information, see'] = 'Sīkāku informāciju skatīt';

$GLOBALS["lang"]['form_factor'] = 'Formas koeficients';

$GLOBALS["lang"]['Form Factor'] = 'Formas koeficients';

$GLOBALS["lang"]['format'] = 'Formāts';

$GLOBALS["lang"]['Format'] = 'Formāts';

$GLOBALS["lang"]['Forth'] = 'Forth';

$GLOBALS["lang"]['fqdn'] = 'Fqdn';

$GLOBALS["lang"]['Fqdn'] = 'Fqdn';

$GLOBALS["lang"]['France, French Republic'] = 'Francija, Francijas Republika';

$GLOBALS["lang"]['free'] = 'Bez nodokļa';

$GLOBALS["lang"]['Free'] = 'Bez nodokļa';

$GLOBALS["lang"]['French'] = 'Franču';

$GLOBALS["lang"]['French Guiana'] = 'Franču Gviāna';

$GLOBALS["lang"]['French Polynesia'] = 'Franču Polinēzija';

$GLOBALS["lang"]['French Southern Territories'] = 'Francijas Dienvidu teritorijas';

$GLOBALS["lang"]['Frequently Asked Questions'] = 'Bieži uzdotie jautājumi';

$GLOBALS["lang"]['Friday'] = 'Piektdiena';

$GLOBALS["lang"]['From 100 Devices'] = 'No 100 ierīcēm';

$GLOBALS["lang"]['From 500 Devices'] = 'No 500 ierīcēm';

$GLOBALS["lang"]['From that page'] = 'No šīs lapas';

$GLOBALS["lang"]['full_name'] = 'Pilns vārds';

$GLOBALS["lang"]['Full Name'] = 'Pilns vārds';

$GLOBALS["lang"]['Full cloud auditing with all the details from a regular Open-AudIT audit AND details such as the machine type and size.'] = 'Pilns mākoņaudits ar visu informāciju no regulāra Open-AudIT audita UN tādām detaļām kā mašīnas veids un izmērs.';

$GLOBALS["lang"]['function'] = 'Funkcija';

$GLOBALS["lang"]['Function'] = 'Funkcija';

$GLOBALS["lang"]['GROUP BY'] = 'BY GRUPA';

$GLOBALS["lang"]['Gabon'] = 'Gabona';

$GLOBALS["lang"]['Galician'] = 'Galisiešu';

$GLOBALS["lang"]['Gambia the'] = 'Gambija';

$GLOBALS["lang"]['Gap Analysis (optional)'] = 'Atšķirību analīze (pēc izvēles)';

$GLOBALS["lang"]['gateway'] = 'Vārteja';

$GLOBALS["lang"]['Gateway'] = 'Vārteja';

$GLOBALS["lang"]['gateways'] = 'Vārti';

$GLOBALS["lang"]['Gateways'] = 'Vārti';

$GLOBALS["lang"]['Generated By'] = 'Ģenerators';

$GLOBALS["lang"]['geo'] = 'Ģeogrāfiskais';

$GLOBALS["lang"]['Geo'] = 'Ģeogrāfiskais';

$GLOBALS["lang"]['Geographical Maps'] = 'Ģeogrāfiskās kartes';

$GLOBALS["lang"]['Georgia'] = 'Gruzija';

$GLOBALS["lang"]['German'] = 'Vācu';

$GLOBALS["lang"]['Germany'] = 'Vācija';

$GLOBALS["lang"]['Get Lat/Long'] = 'Get Lat/Long';

$GLOBALS["lang"]['Get News'] = 'Ielādēt ziņas';

$GLOBALS["lang"]['Get Started'] = 'Sākt';

$GLOBALS["lang"]['Get a Free License'] = 'Saņemt bezmaksas licenci';

$GLOBALS["lang"]['Get familiar with the Open-AudIT platform and explore some of its features.'] = 'Iepazīties ar Open-AudIT platformu un izpētīt dažas no tās funkcijām.';

$GLOBALS["lang"]['Getting Started'] = 'Kā sākt';

$GLOBALS["lang"]['Ghana'] = 'Gana';

$GLOBALS["lang"]['Gibraltar'] = 'Gibraltāra';

$GLOBALS["lang"]['Github'] = 'Gitubs';

$GLOBALS["lang"]['Global Discovery Options'] = 'Globālās meklēšanas opcijas';

$GLOBALS["lang"]['Global area network'] = 'Globālais tīkls';

$GLOBALS["lang"]['Go'] = 'Iet';

$GLOBALS["lang"]['Go back to your Open-AudIT server and create a discovery with the target Windows computers IP Address as the subnet (this will save having to discover the entire subnet again). Run the discovery, taking note of any issues. For any issues found, take appropriate actions.'] = 'Iet atpakaļ uz jūsu Open-AudIT serveri un izveidot atklājumu ar mērķa Windows datoru IP adresi kā apakštīklu (tas ietaupīs, lai atklātu visu apakštīklu vēlreiz). Palaist atklājums, ņemot vērā visus jautājumus. Jebkuram konstatētajam jautājumam veic atbilstošus pasākumus.';

$GLOBALS["lang"]['Go the target Windows PC (or use RDP) and log on as the user used by your discovery credential set.'] = 'Iet mērķa Windows PC (vai izmantot RDP) un piesakieties kā lietotājs izmanto jūsu atklājumu credential komplekts.';

$GLOBALS["lang"]['Go to menu'] = 'Iet uz izvēlni';

$GLOBALS["lang"]['Go to the <i>Applications</i> -> <i>App registrations</i> menu item on the far left. Search for Open-AudIT. Click the Open-AudIT entry in the list (assuming you named the app Open-AudIT).'] = 'Iet uz <i>Pieteikumi</i> - _BAR_ <i>Lietotņu reģistrācija</i> izvēlnes vienība tālu pa kreisi. Meklēt Open- AudIT. Noklikšķiniet uz Open-AudIT ierakstu sarakstā (pieņemot, ka jūs nosauca app Open-AudIT).';

$GLOBALS["lang"]['Go to the <i>Certificates and secrets</i> menu item under <i>Manage</i> in the center menu.'] = 'Iet uz <i>Sertifikāti un noslēpumi</i> izvēlnes elements <i>Pārvaldīt</i> centra izvēlnē.';

$GLOBALS["lang"]['Go to the <i>Single sign-on</i> menu item and click SAML for <i>Select a single sign-on method</i>.'] = 'Iet uz <i>Viena pierakstīšanās</i> izvēlnes vienība un noklikšķiniet uz SAML <i>Izvēlieties vienu pierakstīšanās metodi</i>.';

$GLOBALS["lang"]['Google Compute Fields'] = 'Google aprēķināt laukus';

$GLOBALS["lang"]['Google JSON Credentials'] = 'Google JSON Riska faktori';

$GLOBALS["lang"]['Google Maps API Key'] = 'Google Maps API Taustiņš';

$GLOBALS["lang"]['Great, then you can help! Send FirstWave the text shown in the GUI and what should be shown. We will include that in the language file so going forward, the translation is improved and you do not need to worry about updating it for every release!'] = 'Lieliski, tad tu vari palīdzēt! Sūtīt vispirms Viļņot tekstu parādīto GUI un to, kas būtu jārāda. Mēs ietversim, ka valodas failā, lai iet uz priekšu, tulkojums ir uzlabota, un jums nav jāuztraucas par atjaunināšanu to par katru atbrīvošanu!';

$GLOBALS["lang"]['Greater Than'] = 'Lielāks par';

$GLOBALS["lang"]['Greater Than or Equals'] = 'Lielāks par vai vienāds';

$GLOBALS["lang"]['Greece'] = 'Grieķija';

$GLOBALS["lang"]['Greek'] = 'Grieķu';

$GLOBALS["lang"]['Green Query'] = 'Zaļš vaicājums';

$GLOBALS["lang"]['Greenland'] = 'Grenlande';

$GLOBALS["lang"]['Grenada'] = 'Grenāda';

$GLOBALS["lang"]['Group'] = 'Grupa';

$GLOBALS["lang"]['group_by'] = 'Grupa';

$GLOBALS["lang"]['Group By'] = 'Grupa';

$GLOBALS["lang"]['group_id'] = 'Grupas ID';

$GLOBALS["lang"]['Group ID'] = 'Grupas ID';

$GLOBALS["lang"]['groups'] = 'Grupas';

$GLOBALS["lang"]['Groups'] = 'Grupas';

$GLOBALS["lang"]['Groups are used as simple lists of devices that match the required conditions. If requested using JSON they return a list of <i>devices.id</i> only. If requested using the web interface, they return the standard column attribute list. Groups can be used for Integrations, Baselines and other items.'] = 'Grupas tiek izmantotas kā vienkārši ierīču saraksti, kas atbilst nepieciešamajiem nosacījumiem. Ja tiek pieprasīts, izmantojot JSON, viņi nosūta sarakstu ar <i>ierīces.id</i> tikai. Ja tiek pieprasīts, izmantojot tīmekļa saskarni, viņi atgriež standarta kolonnas atribūtu sarakstu. Grupas var izmantot integrācijas, bāzes un citiem posteņiem.';

$GLOBALS["lang"]['Guadeloupe'] = 'Gvadelupa';

$GLOBALS["lang"]['Guam'] = 'Guama';

$GLOBALS["lang"]['Guatemala'] = 'Gvatemala';

$GLOBALS["lang"]['Guernsey'] = 'Gērnsija';

$GLOBALS["lang"]['guest_device_id'] = 'Viesa ierīces ID';

$GLOBALS["lang"]['Guest Device ID'] = 'Viesa ierīces ID';

$GLOBALS["lang"]['guid'] = 'Guid';

$GLOBALS["lang"]['Guid'] = 'Guid';

$GLOBALS["lang"]['Guinea'] = 'Gvineja';

$GLOBALS["lang"]['Guinea-Bissau'] = 'Gvineja-Bisava';

$GLOBALS["lang"]['Guyana'] = 'Gajāna';

$GLOBALS["lang"]['HP-UX'] = 'HP-UX';

$GLOBALS["lang"]['HW Revision'] = 'HW revīzija';

$GLOBALS["lang"]['Haiti'] = 'Haiti';

$GLOBALS["lang"]['hard_drive_index'] = 'Cietā diska indekss';

$GLOBALS["lang"]['Hard Drive Index'] = 'Cietā diska indekss';

$GLOBALS["lang"]['Hardware'] = 'Ierīce';

$GLOBALS["lang"]['hardware_revision'] = 'Aparatūras revīzija';

$GLOBALS["lang"]['Hardware Revision'] = 'Aparatūras revīzija';

$GLOBALS["lang"]['Has this policy been applied in this organization.'] = 'Vai šī politika ir izmantota šajā organizācijā.';

$GLOBALS["lang"]['hash'] = 'Hash';

$GLOBALS["lang"]['Hash'] = 'Hash';

$GLOBALS["lang"]['Have the agent always run the latest audit script (if you upgrade Open-AudIT and manually copy the scripts to the targets, then set cron - you will need to update these scripts for each upgrade).'] = 'Vai aģents vienmēr palaist jaunāko audita skriptu (ja jūs uzlabot Open-AudIT un manuāli kopēt skriptus uz mērķiem, tad noteikt cron - jums būs nepieciešams atjaunināt šos skriptus katram jauninājums).';

$GLOBALS["lang"]['Have your user open a command prompt (using <i>Run as Administrator</i>). Paste the below into the prompt to download the Agent.'] = 'Vai jūsu lietotājs atvērt komandu uzvedni (izmantojot <i>Palaist kā administratoru</i>). Ielīmējiet zemāk uz uzvedni lejupielādēt aģentu.';

$GLOBALS["lang"]['Head'] = 'Galva';

$GLOBALS["lang"]['Heard Island and McDonald Islands'] = 'Hērda sala un Makdonalda salas';

$GLOBALS["lang"]['Hebrew'] = 'Ebreju';

$GLOBALS["lang"]['height'] = 'Augstums';

$GLOBALS["lang"]['Height'] = 'Augstums';

$GLOBALS["lang"]['Height in RU'] = 'Augstums DPU';

$GLOBALS["lang"]['Help'] = 'Palīdzība';

$GLOBALS["lang"]['Help and Frequently Asked Questions'] = 'Palīdzība un bieži uzdotie jautājumi';

$GLOBALS["lang"]['Helps manage and mitigate information security risks'] = 'Palīdz pārvaldīt un mazināt informācijas drošības riskus';

$GLOBALS["lang"]['Hide Audit Window'] = 'Slēpt revīzijas logu';

$GLOBALS["lang"]['high'] = 'Augsts';

$GLOBALS["lang"]['High'] = 'Augsts';

$GLOBALS["lang"]['High Availability'] = 'Augsta pieejamība';

$GLOBALS["lang"]['Hindi'] = 'Hindi';

$GLOBALS["lang"]['Holy See (Vatican City State)'] = 'Vatikāna Pilsētvalsts';

$GLOBALS["lang"]['Home'] = 'Mājas';

$GLOBALS["lang"]['home'] = 'Mājas';

$GLOBALS["lang"]['Home Area Network'] = 'Mājas Area Network';

$GLOBALS["lang"]['Home area network'] = 'Mājas apvidus tīkls';

$GLOBALS["lang"]['Honduras'] = 'Hondura';

$GLOBALS["lang"]['Hong Kong'] = 'Honkonga';

$GLOBALS["lang"]['host'] = 'Dators';

$GLOBALS["lang"]['Host'] = 'Dators';

$GLOBALS["lang"]['hostname'] = 'Resursdators';

$GLOBALS["lang"]['Hostname'] = 'Resursdators';

$GLOBALS["lang"]['hour'] = 'Stunda';

$GLOBALS["lang"]['Hour'] = 'Stunda';

$GLOBALS["lang"]['How Does It Work?'] = 'Kā tā darbojas?';

$GLOBALS["lang"]['How Does it Work?'] = 'Kā tas darbojas?';

$GLOBALS["lang"]['How Long Does it Take'] = 'Cik ilgs laiks vajadzīgs';

$GLOBALS["lang"]['How and Why is'] = 'Kā un kāpēc';

$GLOBALS["lang"]['How and Why is Open-AudIT More Secure'] = 'Kā un kāpēc Open-AudIT drošāka';

$GLOBALS["lang"]['How do they work?'] = 'Kā tās darbojas?';

$GLOBALS["lang"]['How does a Device Seed Discovery find known IPs?'] = 'Kā ierīce Seed Discovery atrod zināmos IP?';

$GLOBALS["lang"]['How long did the command take to execute.'] = 'Cik ilgi komandai vajadzēja izpildīt.';

$GLOBALS["lang"]['How long should Nmap wait for a response, per device.'] = 'Cik ilgi Nmap gaidīt atbildi, uz vienu ierīci.';

$GLOBALS["lang"]['How many circuit feed to this rack.'] = 'Cik daudz ķēdes padodas šim plauktam.';

$GLOBALS["lang"]['How many policies results in a fail.'] = 'Cik daudz politiku noved pie neveiksmes.';

$GLOBALS["lang"]['How many policies results in a pass.'] = 'Cik daudz politikas ir ar caurlaidi.';

$GLOBALS["lang"]['How many power sockets in this rack.'] = 'Cik daudz strāvas kontaktligzdu šajā plauktā.';

$GLOBALS["lang"]['How many rack units in height is this rack.'] = 'Cik daudz plauktu augstuma ir šis plaukts.';

$GLOBALS["lang"]['How often should the collector ask the server for a task.'] = 'Cik bieži kolekcionāram vajadzētu uzdot serverim uzdevumu.';

$GLOBALS["lang"]['How should we select devices to be integrated (using an Attribute, Query or a Group).'] = 'Kā mums vajadzētu izvēlēties ierīces integrēt (izmantojot atribūtu, vaicājums vai grupa).';

$GLOBALS["lang"]['How the vulnerability is exploited (e.g., Network, Adjacent, Local, Physical).'] = 'Kā neaizsargātība tiek izmantota (piemēram, Tīkls, Adjacent, Vietējais, Fiziskais).';

$GLOBALS["lang"]['How to compare'] = 'Kā salīdzināt';

$GLOBALS["lang"]['Human-readable explanation of the vulnerability.'] = 'Cilvēkam salasāms neaizsargātības skaidrojums.';

$GLOBALS["lang"]['Hungarian'] = 'ungāru';

$GLOBALS["lang"]['Hungary'] = 'Ungārija';

$GLOBALS["lang"]['hw_cpe'] = 'Hw Cpe';

$GLOBALS["lang"]['Hw Cpe'] = 'Hw Cpe';

$GLOBALS["lang"]['hyperthreading'] = 'Hipertreading';

$GLOBALS["lang"]['Hyperthreading'] = 'Hipertreading';

$GLOBALS["lang"]['I have read the EULA.'] = 'Esmu izlasījis EULA.';

$GLOBALS["lang"]['I hope this post has alleviated any concerns you have about Open-AudIT and Security. If you have any questions at all, please do not hesitate to reach out to us here at FirstWave. We are always happy to discuss your concerns and needs. And maybe if your question is not something I have addressed here, I can add it here for future users'] = 'Es ceru, ka šis amats ir kliedējis jūsu bažas par Open-AudIT un drošību. Ja jums vispār ir kādi jautājumi, lūdzu, nekavējoties vērsieties pie mums šeit FirstWave. Mēs vienmēr esam priecīgi apspriest jūsu bažas un vajadzības. Un varbūt, ja jūsu jautājums nav kaut kas man ir jārisina šeit, es varu pievienot to šeit nākamajiem lietotājiem';

$GLOBALS["lang"]['id'] = 'ID';

$GLOBALS["lang"]['ID'] = 'ID';

$GLOBALS["lang"]['IF'] = 'IF';

$GLOBALS["lang"]['IMPORTANT'] = 'SVARĪGI';

$GLOBALS["lang"]['INPUTS'] = 'IEGULDĪJUMI';

$GLOBALS["lang"]['IOS Version'] = 'IOS versija';

$GLOBALS["lang"]['IP'] = 'IP';

$GLOBALS["lang"]['ip'] = 'IP';

$GLOBALS["lang"]['IP Address'] = 'IP adrese';

$GLOBALS["lang"]['IP Addresses'] = 'IP adreses';

$GLOBALS["lang"]['IP Last Seen'] = 'IP pēdējais seeen';

$GLOBALS["lang"]['IP Set By'] = 'IP iestatīts pēc';

$GLOBALS["lang"]['ISMS'] = 'ISMS';

$GLOBALS["lang"]['ISO 27001 only.'] = 'Tikai ISO 27001.';

$GLOBALS["lang"]['Iceland'] = 'Islande';

$GLOBALS["lang"]['icon'] = 'Ikona';

$GLOBALS["lang"]['Icon'] = 'Ikona';

$GLOBALS["lang"]['Icon and Text'] = 'Ikona un teksts';

$GLOBALS["lang"]['Icon only, text only or icon and text.'] = 'Tikai ikona, tikai teksts vai ikona un teksts.';

$GLOBALS["lang"]['id_internal'] = 'Iekšējs';

$GLOBALS["lang"]['Id Internal'] = 'Iekšējs';

$GLOBALS["lang"]['id_number'] = 'Id numurs';

$GLOBALS["lang"]['Id Number'] = 'Id numurs';

$GLOBALS["lang"]['identification'] = 'Identifikācija';

$GLOBALS["lang"]['Identification'] = 'Identifikācija';

$GLOBALS["lang"]['Identify information assets'] = 'Identificēt informācijas aktīvus';

$GLOBALS["lang"]['Identify interested parties and their requirements'] = 'Ieinteresēto personu noteikšana un to prasības';

$GLOBALS["lang"]['Identify key stakeholders and assign roles'] = 'Noteikt galvenās ieinteresētās personas un piešķirt tām funkcijas';

$GLOBALS["lang"]['Identify the device(s) that are your exemplary, or <i>gold image</i> you want to compare similar devices against.'] = 'Identificējiet ierīci(-es), kas ir jūsu paraugs, vai <i>zelta attēls</i> jūs vēlaties salīdzināt līdzīgas ierīces pret.';

$GLOBALS["lang"]['Identifying and evaluating security risks'] = 'Drošības risku noteikšana un novērtēšana';

$GLOBALS["lang"]['If'] = 'Ja';

$GLOBALS["lang"]['If a device is individually discovered using the <i>Discover Device</i> link on the device details page, we first check if this device has been discovered previously (by Discovery) and if so, use the discovery options from that scan. If it has not been previously discovered, we revert to the configuration item discovery_default_scan_option the settings.'] = 'Ja ierīce tiek atsevišķi atklāta, izmantojot <i>Atrast ierīci</i> saite uz ierīces detaļas lapā, mēs vispirms pārbaudiet, vai šī ierīce ir atrasta iepriekš (ar Discovery) un, ja tā, izmantojiet meklēšanas opcijas no šīs skenēšanas. Ja tas nav iepriekš atklāts, mēs atgriežamies pie konfigurācijas elementa atrašanas_ default_ scan_ option settings.';

$GLOBALS["lang"]['If a new Org is created, an LDAP group name is automatically derived from the name. For example, if a new Org is created and is named Test, the corresponding LDAP group will be named open-audit_orgs_test.'] = 'Ja tiek izveidots jauns Org, no nosaukuma automātiski tiek atvasināts LDAP grupas nosaukums. Piemēram, ja tiek izveidots jauns Org un tiek nosaukts par Test, atbilstošā LDAP grupa tiks nosaukta par open-audit_orgs_test.';

$GLOBALS["lang"]['If a port responds with filtered, should we consider it available.'] = 'Ja ports reaģē ar filtrētu, mums vajadzētu uzskatīt, ka tas ir pieejams.';

$GLOBALS["lang"]['If a port responds with open|filtered, should we consider it available.'] = 'Ja ports reaģē ar atvērtu;filtrēts, vai mums vajadzētu uzskatīt, ka ir pieejams.';

$GLOBALS["lang"]['If a remote device does not exist in the Open-AudIT selected devices, should we delete it from the external system.'] = 'Ja Open-AudIT izvēlētajās ierīcēs nepastāv attālināta ierīce, vai dzēst to no ārējās sistēmas.';

$GLOBALS["lang"]['If an Open-AudIT device has been changed, should we update the external system.'] = 'Ja ir mainīta Open-AudIT ierīce, vai mums vajadzētu atjaunināt ārējo sistēmu.';

$GLOBALS["lang"]['If an Open-AudIT device is not on the external system, should we create it.'] = 'Ja Open-AudIT ierīce nav uz ārējās sistēmas, vai mums to izveidot.';

$GLOBALS["lang"]['If an agent reports its primary IP is in this subnet, perform the actions.'] = 'Ja aģents ziņo, ka tā primārais IP ir šajā apakštīklā, veic darbības.';

$GLOBALS["lang"]['If any of these (comma seperated, no spaces) ports are detected, assume SSH is running on them and use them for auditing. No need to add this port to the Custom TCP ports - it will be added automatically.'] = 'Ja tiek atklāta kāda no šīm (comma seperated, bez atstarpēm) pieslēgvietām, pieņem, ka SSH darbojas uz tām un izmanto tās revīzijai. Nav nepieciešams pievienot šo portu Pielāgotiem TCP portiem - tas tiks pievienots automātiski.';

$GLOBALS["lang"]['If no operator is specified, the default is =. Properties should be fully qualified - ie, devices.hostname (not just hostname).'] = 'Ja nav norādīts operators, noklusējums ir =. Īpašībām jābūt pilnībā kvalificētām - ti, ierīces.hostname (ne tikai datora nosaukums).';

$GLOBALS["lang"]['If no value is present, supply this value. EG: for system.nmis_group / configuraion.group we use'] = 'Ja vērtības nav, norāda šo vērtību. EG: sistēmai.nmis_group / konfigurēšana. grupa mēs izmantojam';

$GLOBALS["lang"]['If set, holds a JSON array of specific device columns this user has chosen to see, other than the configuration default.'] = 'Ja ieslēgts, tur JSON masīvu ar konkrētām ierīces kolonnām, kuras lietotājs ir izvēlējies redzēt, izņemot konfigurācijas noklusēto.';

$GLOBALS["lang"]['If the OS Family (as reported by the device) contains this item, pass.</li>'] = 'Ja OS saime (kā ziņo ierīce) satur šo elementu, iet.';

$GLOBALS["lang"]['If the Open-AudIT Server has Collectors reporting to it, an additional drop down is provided. You can select this to specify which Collector the task should run on. Only Discovery tasks are supported for Collectors.'] = 'Ja Open-AudIT serverim ir kolekcionāri, kas uz to ziņo, tiek nodrošināta papildus nolaižamā ierīce. Jūs varat izvēlēties šo, lai norādītu, uz kuru darbu strādāt. Kolekcionāriem tiek atbalstīti tikai Discovery uzdevumi.';

$GLOBALS["lang"]['If the agent OS family (case insensitive) contains this string, perform the actions.'] = 'Ja aģents OS saime (ja nejūtīgs) satur šo virkni, veikt darbības.';

$GLOBALS["lang"]['If the binary is not found in either of these locations, a warning message will be displayed in the installer.'] = 'Ja binārs nav atrodams nevienā no šīm vietām, uzstādītājā tiks parādīts brīdinājuma ziņojums.';

$GLOBALS["lang"]['If the following conditions are met:<br><ul><li>a Role has an assigned ad_group</li><li>an Org has an assigned ad_group</li><li>an LDAP Server has use_roles set to y</li><li>a user exists in LDAP (be it Active Directory or OpenLDAP) and is in the assigned ad_groups</li></ul>That user can log on to Open-AudIT without an account in Open-AudIT needing to be created. Open-AudIT will query the LDAP in question and if the user is in the required groups but not in Open-AudIT, their user attributes (name, full name, email,  roles, orgs, etc) within Open-AudIT will be automatically populated and they will be logged on.<br> <br>'] = 'Ja ir izpildīti šādi nosacījumi:<br/><ul><li>a Lomai ir piešķirta ad_group</li><li>org ir piešķirts ad_ group</li><li>LDAP Serverim ir_roles iestatīts uz y</li><li>lietotājs eksistē LDAP (vai tā būtu aktīvā mape vai OpenLDAP) un ir atvēlētajā ad_groups</li></ul>Ka lietotājs var pieteikties uz Open-AudIT bez konta Open-AudIT nepieciešams izveidot. Open-AudIT vaicās attiecīgo LDAP un, ja lietotājs ir nepieciešamajās grupās, bet ne Open-AudIT, to lietotāja atribūti (vārds, pilnais vārds, e-pasts, lomas, orgs u.c.) Open-AudIT sistēmā tiks automātiski aizpildīti un tiks reģistrēti.<br/> <br/>';

$GLOBALS["lang"]['If the local field is true (bool) or y (string) or Y (string) or 1 (integer) then set the external data to 1.'] = 'Ja vietējais lauks ir patiess (bool) vai y (string) vai Y (string) vai 1 (integer), tad ārējos datus iestata uz 1.';

$GLOBALS["lang"]['If the local field is true (bool) or y (string) or Y (string) or 1 (integer) then set the external data to y.'] = 'Ja vietējais lauks ir patiess (bool) vai y (string) vai Y (string) vai 1 (integer), tad ārējos datus iestata uz y.';

$GLOBALS["lang"]['If the primary IP (as reported by the device) is in this subnet, pass.</li>'] = 'Ja primārais IP (kā ziņo ierīce) ir šajā apakštīklā, iet.';

$GLOBALS["lang"]['If the user account does not actually exist within Open-AudIT and <code>use_authorisation</code> is set, the user will be created. If it does exist, details such as email, full name, etc will be populated.'] = 'Ja lietotāja konts faktiski nepastāv Open-AudIT un <code>use_authorisation</code> ir iestatīts, lietotājs tiks izveidots. Ja tā pastāv, tiks aizpildītas tādas detaļas kā e-pasts, pilns nosaukums utt.';

$GLOBALS["lang"]['If the user either does not have valid credentials or is not in at least one Open-AudIT Role and Group (when using <code>use_authorisation</code>), Open-AudIT will fallback to using local Open-AudIT user details and attempt authentication and authorization there. Failing that, the user will be denied access.'] = 'Ja lietotājam vai nu nav derīgu datu, vai nav vismaz vienā Open-AudIT lomā un grupā (izmantojot <code>use_authorisation</code>), Open-AudIT atteiksies izmantot vietējo Open-AudIT lietotāja informāciju un mēģināt autentifikāciju un autorizāciju tur. Ja tas netiks izdarīts, lietotājam tiks liegta piekļuve.';

$GLOBALS["lang"]['If the user logging on to Open-AudIT does not have the access to search LDAP, you can use another account which does have this access.'] = 'Ja lietotājam, kas piesakās Open-AudIT, nav piekļuves meklēšanai LDAP, varat izmantot citu kontu, kuram ir šī piekļuve.';

$GLOBALS["lang"]['If the user logging on to Open-AudIT does not have the access to search OpenLDAP, you can use another account which does have this access. Use the dn_account and dn_password to configure this.'] = 'Ja lietotājam, kas piesakās Open-AudIT, nav piekļuves meklēt OpenLDAP, varat izmantot citu kontu, kuram ir šī piekļuve. Izmantojiet dn_ kontu un dn_ paroli, lai konfigurētu šo.';

$GLOBALS["lang"]['If the value is not set, the current timestamp will be used.'] = 'Ja vērtība nav iestatīta, tiks izmantots pašreizējais laika zīmogs.';

$GLOBALS["lang"]['If the value is set, that timestamp value will be used.'] = 'Ja vērtība ir iestatīta, tiks izmantota šī laika zīmoga vērtība.';

$GLOBALS["lang"]['If this change does not work for you, all is not lost. We have added a configuration item (set to n by default, so it will use not this new option out of the box) called discovery_use_org_id_match. If you change it to y then the OrgID assigned to the device by the discovery will be used in the relevant match rules.'] = 'Ja šīs izmaiņas nepalīdzēs jums, viss netiks zaudēts. Mēs esam pievienojuši konfigurācijas ierakstu (iestatīts n pēc noklusējuma, tāpēc tas neizmantos šo jauno iespēju no kastes) sauc atklāšanas_use_org_id_match. Ja jūs to maināt uz y, tad ierīces OrgID, kas piešķirts ar atklājumu, tiks izmantots attiecīgajos atbilstības noteikumos.';

$GLOBALS["lang"]['If this many minutes (or more) have passed since the server last saw the device, pass.</li>'] = 'Ja šis daudz minūtes (vai vairāk) ir pagājis, kopš serveris pēdējo reizi redzēja ierīci, iet.';

$GLOBALS["lang"]['If this many or more minutes have passed since the device contacted the server, perform the actions.'] = 'Ja šis daudz vai vairāk minūtes ir pagājis kopš ierīce sazinājās serveri, veikt darbības.';

$GLOBALS["lang"]['If this occurs then the issue you are seeing is related to the table control being used on the webpage. It only stores in memory the state of the check boxes for the current page being viewed. If you make selections, then page forward/back those selections will be lost. You can, however, accomplish what you want by expanding the number of devices shown on each page. In the top-left corner is a drop-down labeled “records per page”; use this to expand the number of entries displayed until you see all you want to select for Bulk Edit.'] = 'Ja tas notiek, tad jautājums jūs redzat ir saistīts ar galda kontrole tiek izmantota mājas lapā. Tas tikai glabā atmiņā stāvokli check kastes par pašreizējo lapu tiek apskatīts. Ja veicat atlasi, tad lapa uz priekšu / atpakaļ šīs izvēles tiks pazaudēta. Tomēr jūs varat paveikt to, ko vēlaties, palielinot ierīču skaitu katrā lapā. Augšējā kreisajā stūrī ir nolaižamais marķējums “ieraksti vienā lapā”; izmanto šo, lai paplašinātu parādīto ierakstu skaitu, līdz redzat visu, ko vēlaties izvēlēties Bulk Edit.';

$GLOBALS["lang"]['If we detect the san management software, should we run an auto-discover before the query.'] = 'Ja mēs atklājam san pārvaldības programmatūru, mums vajadzētu palaist auto-atklāt pirms vaicājumu.';

$GLOBALS["lang"]['If you add a Location Type, add those icons to'] = 'Pievienojot atrašanās vietas tipu, pievienojiet šīs ikonas';

$GLOBALS["lang"]['If you add a device type, to display the associated icon you will have to manually copy the .svg formatted file to the directory'] = 'Ja jūs pievienot ierīces tipu, lai parādītu saistīto ikonu jums būs manuāli kopēt .svg formatēts failu direktorijā';

$GLOBALS["lang"]['If you are a supported FirstWave customer,a couple of items will make helping your easier. Open a support ticket with FirstWave and attach the logfile. Also include the output from the Support button on the upper right of the'] = 'Ja esat atbalstīts FirstWave klients, pāris preces padarīs palīdzību vieglāku. Atveriet atbalsta biļeti ar FirstWave un pievienojiet žurnāla failu. Iekļaut arī izvadi no atbalsta pogas augšējā labajā';

$GLOBALS["lang"]['If you are a supported customer and open a support ticket with FirstWave, please attach these files.'] = 'Ja esat atbalstīts klients un atveriet atbalsta biļeti ar FirstWave, lūdzu, pievienojiet šos failus.';

$GLOBALS["lang"]['If you are having issues with Google Maps API keys or your company does not have access to create Google Maps API keys, please contact the FirstWave support team.'] = 'Ja jums ir problēmas ar Google Maps API atslēgām vai jūsu uzņēmumam nav piekļuves izveidot Google Maps API atslēgas, lūdzu, sazinieties ar FirstWave atbalsta komandu.';

$GLOBALS["lang"]['If you are on Windows or your NMIS server is remote, you will need to supply the URL, username and password to access that server.'] = 'Ja esat Windows vai NMIS serveris ir attālināts, jums būs nepieciešams norādīt URL, lietotājvārdu un paroli, lai piekļūtu šim serverim.';

$GLOBALS["lang"]['If you are on a decent broadband or ethernet connection, I would recommend always using -T4 (Aggressive). Some people love -T5 (Insane) though it is too aggressive for my taste. People sometimes specify -T2 (Polite) because they think it is less likely to crash hosts or because they consider themselves to be polite in general. They often do not realize just how slow -T2 really is. Their scan may take ten times longer than a default scan. Machine crashes and bandwidth problems are rare with the default timing options -T3 (Normal) and so I normally recommend that for cautious scanners. Omitting version detection is far more effective than playing with timing values at reducing these problems.'] = 'Ja jums ir pienācīgas platjoslas vai ethernet savienojumu, es ieteiktu vienmēr izmantot -T4 (Agresīvs). Daži cilvēki mīl -T5 (Insane), lai gan tas ir pārāk agresīvs manai gaumei. Cilvēki dažreiz norāda -T2 (Polite), jo viņi domā, ka tas ir mazāk iespējams crash hosts vai tāpēc, ka viņi uzskata sevi par pieklājīgs vispār. Viņi bieži vien nesaprot, cik lēns ir T2. To skenēšana var ilgt desmit reizes ilgāk nekā noklusējuma skenēšana. Mašīnas avārijas un joslas platuma problēmas ir reti ar noklusējuma laika iespējas -T3 (Normal) un tāpēc es parasti ieteiktu, ka piesardzīgiem skeneriem. Omitēšanas versiju noteikšana ir daudz efektīvāka nekā spēlēšana ar laika vērtībām, lai samazinātu šīs problēmas.';

$GLOBALS["lang"]['If you are running a RedHat or Centos system and you have upgraded Nmap, please reset the SUID on the binary by'] = 'Ja jūs darbināt RedHat vai Centos sistēmu un jums ir modernizētas Nmap, lūdzu, atiestatiet SUID uz binārā';

$GLOBALS["lang"]['If you are running an Open-AudIT server on Linux, this does not affect you.'] = 'Ja uz Linux darbojas Open-AudIT serveris, tas jūs neietekmē.';

$GLOBALS["lang"]['If you are using Open-AudIT on Windows or if your NMIS server is not on your Open-AudIT Server (in the case of some Linux installs), you will need to supply access credentials and a URL to the remote NMIS - but that is all! Yes - Integrations between NMIS and Open-AudIT even work with Windows based Open-AudIT now!'] = 'Ja izmantojat Open-AudIT uz Windows vai ja jūsu NMIS serveris nav uz jūsu Open-AudIT servera (dažu Linux instalējumu gadījumā), jums būs nepieciešams piegādāt piekļuves akreditācijas datus un URL uz attālināto NMIS - bet tas ir viss! Jā - Integrācija starp NMIS un Open-AudIT pat tagad strādā ar Windows bāzētu Open-AudIT!';

$GLOBALS["lang"]['If you choose a Collector, it will be scheduled to execute on the next 5 minute boundary.'] = 'Ja izvēlaties Kolekcionāru, to plānots izpildīt uz nākamās 5 minūšu robežas.';

$GLOBALS["lang"]['If you do normally set devices_assigned_to_org and the configuration item is enabled, then the OrgID will be used to further refine the match.'] = 'Ja jūs parasti iestatīt ierīces_asigned_to_org un konfigurācijas elements ir ieslēgts, tad OrgID tiks izmantots, lai vēl vairāk uzlabotu atbilstību.';

$GLOBALS["lang"]['If you do not normally set devices_assigned_to_org, then it will have no effect. We only check using the OrgID if it has been set in discovery (or manually in an audit script) and enabled in the configuration.'] = 'Ja jums nav parasti iestatīt ierīces_asigned_to_org, tad tas nebūs spēkā. Mēs tikai pārbaudām, izmantojot OrgID, ja tas ir iestatīts atklājumā (vai manuāli audita skriptā) un ieslēgts konfigurācijā.';

$GLOBALS["lang"]['If you enable the configuration item, use discovery to assign an Org and then subsequently change the OrgID of a device after discovery then you will likely have a new device created the next time the discovery runs. In this instance, you should probably just unset devices_assigned_to_org before running subsequent discoveries. This is because (in this instance) you have told Open-AudIT <i>these devices from this discovery belong to Org X<i>, but then changed the Org of the device. You have changed the stored devices information. In this case - there is no no longer a device belonging to Org X, so we create a new one.'] = 'Ja ieslēdzat konfigurācijas ierakstu, izmantojiet atklājumu, lai piešķirtu Org, un pēc tam mainiet ierīces OrgID pēc atklāšanas, tad jums, visticamāk, būs jauna ierīce, kas tiks izveidota nākamajā atklāšanas reizē. Šajā gadījumā, jums vajadzētu, iespējams, tikai atiestatīt ierīces_asigned_to_org pirms palaist turpmākos atklājumus. Tas ir tāpēc (šajā gadījumā) Jūs esat teicis Open-AudIT <i>šīs meklēšanas ierīces pieder Org X<i>, bet pēc tam mainīja Org ierīces. Jūs esat mainījis saglabāto ierīču informāciju. Šajā gadījumā - vairs nav ierīces, kas pieder Org X, tāpēc mēs radām jaunu.</i></i>';

$GLOBALS["lang"]['If you have Anti-Virus software running, allowing the services of Opmantek (omkd), Apache (apache2.2) and MySQL (mysql) to auto start and run is essential. These services are used by Open-AudIT. You should only need to do this once. If your Anti-Virus program keeps prompting you about Open-AudIT, please post to the forums or send an email to support with the name and version of your Anti-Virus software.'] = 'Ja jums ir Anti-Virus programmatūra darbojas, ļaujot pakalpojumus Opmantek (omkd), Apache (apache2.2) un MySQL (mysql) automātiski sākt un palaist ir būtiski. Šos pakalpojumus izmanto Open-AudIT. Jums tas jādara tikai vienu reizi. Ja jūsu Anti-Virus programma turpina mudināt jūs par Open-AudIT, lūdzu, publicējiet forumos vai nosūtiet e-pastu, lai atbalstītu ar nosaukumu un versiju jūsu Anti-Virus programmatūru.';

$GLOBALS["lang"]['If you have working credentials, you can expect the full amount of information possible.<br><br>Obviously, the best way to use Open-AudIT is to have working credentials for the devices being discovered (be they WMI, SSH, or SNMP credentials).<br><br>We also have a page on auditing without credentials.'] = 'Ja jums ir darba akreditācijas dati, jūs varat sagaidīt visu iespējamo informāciju.<br/><br/>Protams, labākais veids, kā izmantot Open-AudIT ir, lai būtu darba akreditācijas datus par ierīcēm, kas tiek atklāts (būtu WMI, SSH, vai SNMP akreditācijas).<br/><br/>Mums ir arī lapa par revīziju bez akreditācijas.';

$GLOBALS["lang"]['If you include the \"id\" field <strong>and</strong> set it with a number, that item will be updated rather than created.'] = 'Ja jūs iekļaujat \ id\" lauku <strong>kā arī</strong> iestatīt to ar numuru, ka vienība tiks atjaunināta, nevis izveidota.';

$GLOBALS["lang"]['If you need to configure Active Directory access, you can usually use the example of <code>cn=Users,dc=your,dc=domain,dc=com</code> for your <code>base_dn</code>. There is no need to set <code>user_dn</code>.'] = 'Ja jums ir nepieciešams konfigurēt Active Directory piekļuvi, jūs parasti varat izmantot piemēru <code>cn=Users,dc=your,dc=domain,dc=com</code> lietošanai <code>base_dn</code>. Nav nepieciešams iestatīt <code>user_dn</code>.';

$GLOBALS["lang"]['If you need to configure OpenLDAP access for your users and a given users access DN is normally <code>uid=username@domain,cn=People,dc=your,dc=domain,dc=com</code> then you should set <code>base_dn</code> to <code>dc=your,dc=domain,dc=com</code> and <code>user_dn</code> to <code>uid=@username@@domain,cn=People</code>. The special words <code>@username</code> and <code>@domain</code> will be replaced by the login details provided by your user on the login page.'] = 'Ja jums ir nepieciešams konfigurēt OpenLDAP piekļuvi jūsu lietotājiem un dotie lietotāji var piekļūt DN parasti <code>uid=username@domain,cn=People,dc=your,dc=domain,dc=com</code> tad Jums vajadzētu noteikt <code>base_dn</code> līdz <code>dc=your,dc=domain,dc=com</code> kā arī <code>user_dn</code> līdz <code>uid=@username@@domain,cn=People</code>. Īpašie vārdi <code>@username</code> kā arī <code>@domain</code> tiks aizstāta ar pieteikšanās informāciju, ko jūsu lietotājs sniedz pieteikšanās lapā.';

$GLOBALS["lang"]['If you run discovery upon a subnet that the Server (or Collector) is directly installed on, you can expect the following for responding devices'] = 'Ja jūs darbināt atklājums uz apakštīkla, ka Serveris (vai kolektors) ir tieši instalēts, jūs varat sagaidīt šādu, atbildot uz ierīcēm';

$GLOBALS["lang"]['If you run discovery upon a subnet that your Server (or Collector) is not directly installed on, you can expect the following for responding devices'] = 'Ja jūs darbināt atklājums uz apakštīkla, ka jūsu Serveris (vai kolekcionārs) nav tieši instalēta, jūs varat sagaidīt šādu, atbildot uz ierīcēm';

$GLOBALS["lang"]['If you select a List type, an additional field will appear called Values. You should put a comma separated list of selectable values here. These will display in a dropdown box whenever the field is edited.'] = 'Izvēloties Saraksta tipu, parādīsies papildu lauks, ko sauc par Vērtības. Šeit jums vajadzētu ievietot ar komatu atdalītu izvēlēto vērtību sarakstu. Tie tiks parādīti nolaižamajā kastē ikreiz, kad lauks tiks rediģēts.';

$GLOBALS["lang"]['If you set the values for'] = 'Ja jūs noteikt vērtības';

$GLOBALS["lang"]['If you want to force your Agents to use a particular configuration, you can supply the ID of the agents entry to use, as below (replace $id with the number of the Agents entry). When this Agent is installed, it will check-in with the sevrer and <strong>only</strong> check that one individual Agent entrys attributes (tests and actions). This may be useful if you are an MSP - create an Agents entry for a particular customer and have their devices all use this entry, which assigns them to an Org and Location.'] = 'Ja jūs vēlaties, lai piespiestu savus aģentus izmantot konkrētu konfigurāciju, jūs varat sniegt ID aģentu ierakstu, lai izmantotu, kā norādīts (aizstāt $id ar numuru aģentu ierakstu). Kad šis aģents ir instalēts, tas reģistrēsies ar sevrer un <strong>tikai</strong> pārbaudīt, vai Aģentu ierakstu atribūti (testi un darbības). Tas var būt noderīgi, ja esat MSP - izveidot aģentu ierakstu konkrētam klientam un ir viņu ierīces visas izmantot šo ierakstu, kas piešķir tos Org un Atrašanās vieta.';

$GLOBALS["lang"]['If you wish to dig in and customize the Integration, click the Advanced button (and try not to be overwhelmed!).'] = 'Ja vēlaties rakt un pielāgot integrāciju, noklikšķiniet uz Advanced pogu (un mēģiniet nav pārspēt!).';

$GLOBALS["lang"]['If you wish to run a Discovery on an externally provided device, select the option and when the Integration is created, so s the Discovery.'] = 'Ja vēlaties palaist Discovery uz ārēji nodrošinātas ierīces, izvēlieties opciju un kad integrācija ir izveidota, tāpēc s Discovery.';

$GLOBALS["lang"]['If you would like to use the script outside of Discovery we have created another endpoint called <i>scripts</i>. See the documentation'] = 'Ja jūs vēlētos izmantot skriptu ārpus Discovery mēs esam radījuši citu galapunktu sauc <i>skripti</i>. Skatīt dokumentāciju';

$GLOBALS["lang"]['If your user does not have <i>Run as Administrator</i> rights, they can still download the agent (first command above) and run it to submit an audit as below. It will be a one-off audit without the Agent being installed or scheduled.'] = 'Ja lietotājam nav <i>Palaist kā administratoru</i> tiesības, viņi joprojām var lejupielādēt aģentu (pirmā komanda iepriekš) un palaist to, lai iesniegtu auditu, kā turpmāk. Tas būs vienreizējs audits bez aģenta uzstādīšanas vai plānotās.';

$GLOBALS["lang"]['ifadminstatus'] = 'Ifadminstatuss';

$GLOBALS["lang"]['Ifadminstatus'] = 'Ifadminstatuss';

$GLOBALS["lang"]['iflastchange'] = 'Iflastchange';

$GLOBALS["lang"]['Iflastchange'] = 'Iflastchange';

$GLOBALS["lang"]['Ignore Invalid SSL'] = 'Ignorēt nelikumīgu SSL';

$GLOBALS["lang"]['Ignored'] = 'Ignorēts';

$GLOBALS["lang"]['image'] = 'Attēls';

$GLOBALS["lang"]['Image'] = 'Attēls';

$GLOBALS["lang"]['Images'] = 'Attēli';

$GLOBALS["lang"]['impact_availability'] = 'Ietekmes pieejamība';

$GLOBALS["lang"]['Impact Availability'] = 'Ietekmes pieejamība';

$GLOBALS["lang"]['impact_confidentiality'] = 'Ietekmes konfidencialitāte';

$GLOBALS["lang"]['Impact Confidentiality'] = 'Ietekmes konfidencialitāte';

$GLOBALS["lang"]['impact_integrity'] = 'Ietekmes integritāte';

$GLOBALS["lang"]['Impact Integrity'] = 'Ietekmes integritāte';

$GLOBALS["lang"]['Implement selected controls and procedures'] = 'Ieviest izvēlēto kontroli un procedūras';

$GLOBALS["lang"]['Implementation'] = 'Īstenošana';

$GLOBALS["lang"]['implementation_notes'] = 'Īstenošanas piezīmes';

$GLOBALS["lang"]['Implementation Notes'] = 'Īstenošanas piezīmes';

$GLOBALS["lang"]['Import'] = 'Importēt';

$GLOBALS["lang"]['Import Example Data'] = 'Importēt parauga datus';

$GLOBALS["lang"]['Import multiple {collection} using a CSV.'] = 'Importēt daudzkārtni {kolekcija} izmantojot CSV.';

$GLOBALS["lang"]['improvement_opportunities'] = 'Iespēju uzlabošana';

$GLOBALS["lang"]['Improvement Opportunities'] = 'Iespēju uzlabošana';

$GLOBALS["lang"]['Improves business continuity and resilience'] = 'Uzlabota uzņēmējdarbības nepārtrauktība un izturētspēja';

$GLOBALS["lang"]['In'] = 'In';

$GLOBALS["lang"]['In a second tab or window go to your OKTA console and click <i>Create App Integration</i>.'] = 'Otrajā cilnē vai logā dodieties uz OKTA konsoli un noklikšķiniet uz <i>Izveidot programmu integrāciju</i>.';

$GLOBALS["lang"]['In a second tab or window sign-on to your'] = 'Otrā cilnē vai logā, pierakstot uz';

$GLOBALS["lang"]['In my personal opinion, the best way to find and audit every single item on your network is a Seed Discovery for each subnet, restricted to that subnet (using credentials). Seed Discoveries use switch, router and computer MAC Address tables to not miss a single device. If it is connected to the network and uses TCP/IP, a switch/router/computer has to know it is there - thats just how TCP/IP works. Combine that with custom TCP and/or UDP ports and you should then be able to determine the device type as well. But thats just my personal preference'] = 'Pēc manām personīgajām domām, labākais veids, kā atrast un pārbaudīt katru elementu savā tīklā, ir Seed Discovery katram apakštīklam, tikai šajā apakštīklā (izmantojot akreditācijas datus). Sēklu atklājēji izmanto slēdzi, maršrutētāju un datoru MAC adrešu tabulas, lai nepalaistu garām vienu ierīci. Ja tas ir savienots ar tīklu un izmanto TCP / IP, slēdzis / maršrutētājs / dators ir jāzina, tas ir tur - tas, kā TCP / IP darbojas. Apvienot, ka ar pielāgotu TCP un / vai UDP portiem, un jums vajadzētu būt iespējai noteikt ierīces veidu, kā arī. Bet tā ir mana personīgā izvēle';

$GLOBALS["lang"]['In order for Open-AudIT to be able to apply user permissions on items, we mandate the user of <code>WHERE @filter</code>. If you do not use this format, the queryCreateForm will throw a warning. Only users with the Admin role are permitted to create queries that lack this attribute and even then, only after the configuration item for <i>advanced_queries</i> has been enabled.'] = 'Lai Open-AudIT varētu piemērot lietotāja atļaujas uz precēm, mēs pilnvarojam lietotāju <code>WHERE @filter</code>. Ja jūs neizmantojat šo formātu, vaicājumsCreateForm mest brīdinājumu. Tikai lietotāji ar Admin lomu ir atļauts izveidot vaicājumus, kas trūkst šo atribūtu un pat tad, tikai pēc konfigurācijas objektu <i>Paplašināti_queries</i> ir ieslēgts.';

$GLOBALS["lang"]['In order to enable Google Maps you will need to a Google API Key follow this link and log in with your Google account,'] = 'Lai iespējotu Google Maps, jums būs nepieciešams Google API taustiņš sekot šai saitei un pieteikties ar Google konts,';

$GLOBALS["lang"]['In order to use the Azure Rest API, you will need to create an Azure Active Directory Application that is used for authentication.'] = 'Lai izmantotu Azure Rest API, jums būs nepieciešams izveidot Azure Active Directory Application, kas tiek izmantota autentificēšanai.';

$GLOBALS["lang"]['In order to use this functionality, it must be enabled in the configuration - click'] = 'Lai izmantotu šo funkcionalitāti, tas ir jāieslēdz konfigurācijā - noklikšķiniet';

$GLOBALS["lang"]['In the (comma seperated) list'] = '(Comma seperated) sarakstā';

$GLOBALS["lang"]['In the case of <code>in</code> and <code>notin</code>, you should enclose the values in round brackets and separate them using a comma (just a comma, not a comma, then space).<br><br>With these operators you can filter quite comprehensively.<br><br>When you add data and filter on multiple columns, those columns are combined using <strong>AND</strong>. You cannot filter using an <strong>OR</strong> condition. With the inclusion of <code>notin</code>, you should be able to get most searches working. And for those that do really require unsupported and complex selections, you can always write an actual query.'] = 'Gadījumā, ja <code>in</code> kā arī <code>notin</code>, jums vajadzētu pievienot vērtības apaļie iekavas un atdalīt tos, izmantojot komats (tikai komats, nevis komats, tad atstarpe).<br/><br/>Ar šiem operatoriem jūs varat filtrēt diezgan visaptveroši.<br/><br/>Pievienojot datus un filtrējot vairākas kolonnas, šīs kolonnas tiek apvienotas, izmantojot <strong>UN</strong>. Jūs nevarat filtrēt, izmantojot <strong>VAI</strong> slimība. Iekļaujot <code>notin</code>, jums vajadzētu būt iespējai iegūt lielāko daļu meklēšanu darba. Un tiem, kas tiešām prasa neatbalstītas un sarežģītas izvēles, jūs vienmēr varat rakstīt faktisko vaicājumu.';

$GLOBALS["lang"]['In the case where we store several fields (usually in JSON format) inside a BIGTEXT MySQL field (eg: credentials.credentials - the credentials column in the credentials table), you should use the format'] = 'Gadījumā, ja mēs uzglabājam vairākus laukus (parasti JSON formātā) iekšā BIGTEXT MySQL laukā (piemēram: akreditācijas datus. akreditācijas - akreditācijas aile akreditācijas tabulā), jums vajadzētu izmantot formātu';

$GLOBALS["lang"]['In the command prompt shell, navigate to the download directory (likely <code>cd Downloads</code>).'] = 'Komandas uzvednes čaulā, naviet uz lejupielādes mapi (iespējams <code>cd Downloads</code>).';

$GLOBALS["lang"]['Inactive'] = 'Neaktīvs';

$GLOBALS["lang"]['Incomplete'] = 'Nepilnīgs';

$GLOBALS["lang"]['Index'] = 'Indekss';

$GLOBALS["lang"]['India'] = 'Indija';

$GLOBALS["lang"]['Indonesia'] = 'Indonēzija';

$GLOBALS["lang"]['Indonesian'] = 'Indonēziešu';

$GLOBALS["lang"]['Info'] = 'Informācija';

$GLOBALS["lang"]['Information only.'] = 'Tikai informācija.';

$GLOBALS["lang"]['Informational'] = 'Informācija';

$GLOBALS["lang"]['initial_size'] = 'Sākotnējais izmērs';

$GLOBALS["lang"]['Initial Size'] = 'Sākotnējais izmērs';

$GLOBALS["lang"]['Initial login credentials are'] = 'Sākotnējā pieteikšanās dati ir';

$GLOBALS["lang"]['Initiation'] = 'Procedūras sākšana';

$GLOBALS["lang"]['inode'] = 'Inode';

$GLOBALS["lang"]['Inode'] = 'Inode';

$GLOBALS["lang"]['Input'] = 'Ievade';

$GLOBALS["lang"]['Input Type'] = 'Ievades Tips';

$GLOBALS["lang"]['inputs'] = 'Ieguldījumi';

$GLOBALS["lang"]['Inputs'] = 'Ieguldījumi';

$GLOBALS["lang"]['Insane'] = 'Traks';

$GLOBALS["lang"]['Insert a new {collection} entry.'] = 'Ievietot jaunu {collection} ierakstu.';

$GLOBALS["lang"]['Insert example data and discover all that Open-AudIT can tell you.'] = 'Ievietot piemēra datus un atklāt visu, ko Open-AudIT var jums pateikt.';

$GLOBALS["lang"]['Insert your Purchased license Key'] = 'Ievietot Iegādāta licence Taustiņš';

$GLOBALS["lang"]['install'] = 'Instalēt';

$GLOBALS["lang"]['Install'] = 'Instalēt';

$GLOBALS["lang"]['install_date'] = 'Instalēt datumu';

$GLOBALS["lang"]['Install Date'] = 'Instalēt datumu';

$GLOBALS["lang"]['install_directory'] = 'Instalēt mapi';

$GLOBALS["lang"]['Install Directory'] = 'Instalēt mapi';

$GLOBALS["lang"]['Install OpenScap if required'] = 'Instalēt OpenScap, ja nepieciešams';

$GLOBALS["lang"]['install_source'] = 'Instalēt avotu';

$GLOBALS["lang"]['Install Source'] = 'Instalēt avotu';

$GLOBALS["lang"]['Install Support'] = 'Instalēt atbalstu';

$GLOBALS["lang"]['installed_by'] = 'Instalēts';

$GLOBALS["lang"]['Installed By'] = 'Instalēts';

$GLOBALS["lang"]['installed_on'] = 'Instalēts';

$GLOBALS["lang"]['Installed On'] = 'Instalēts';

$GLOBALS["lang"]['Installing'] = 'Instalē';

$GLOBALS["lang"]['Installing on Linux'] = 'Instalē Linux';

$GLOBALS["lang"]['Installing on MacOS'] = 'Instalē uz MacOS';

$GLOBALS["lang"]['Installing on Windows'] = 'Instalē uz logiem';

$GLOBALS["lang"]['instance'] = 'Instance';

$GLOBALS["lang"]['Instance'] = 'Instance';

$GLOBALS["lang"]['instance_ident'] = 'Instance Ident';

$GLOBALS["lang"]['Instance Ident'] = 'Instance Ident';

$GLOBALS["lang"]['instance_options'] = 'Instances opcijas';

$GLOBALS["lang"]['Instance Options'] = 'Instances opcijas';

$GLOBALS["lang"]['instance_provider'] = 'Instances piegādātājs';

$GLOBALS["lang"]['Instance Provider'] = 'Instances piegādātājs';

$GLOBALS["lang"]['instance_reservation_ident'] = 'Instances rezervācija Identisks';

$GLOBALS["lang"]['Instance Reservation Ident'] = 'Instances rezervācija Identisks';

$GLOBALS["lang"]['instance_state'] = 'Instances valsts';

$GLOBALS["lang"]['Instance State'] = 'Instances valsts';

$GLOBALS["lang"]['instance_tags'] = 'Instances tagi';

$GLOBALS["lang"]['Instance Tags'] = 'Instances tagi';

$GLOBALS["lang"]['instance_type'] = 'Instances veids';

$GLOBALS["lang"]['Instance Type'] = 'Instances veids';

$GLOBALS["lang"]['Integer'] = 'Integer';

$GLOBALS["lang"]['Integration'] = 'Integrācija';

$GLOBALS["lang"]['integrations'] = 'Integrācija';

$GLOBALS["lang"]['Integrations'] = 'Integrācija';

$GLOBALS["lang"]['integrations_id'] = 'Integrācijas ID';

$GLOBALS["lang"]['Integrations ID'] = 'Integrācijas ID';

$GLOBALS["lang"]['integrations_log'] = 'Integrāciju žurnāls';

$GLOBALS["lang"]['Integrations Log'] = 'Integrāciju žurnāls';

$GLOBALS["lang"]['Integrations can be scheduled as desired. This is left to the user.'] = 'Integrāciju var plānot pēc vajadzības. Tas ir atstāts lietotājam.';

$GLOBALS["lang"]['Integrations can be scheduled as per Discoveries, Queries, et al.'] = 'Integrāciju var plānot kā vienu atklājumus, vaicājumus, et al.';

$GLOBALS["lang"]['Interactive Dashboards'] = 'Interaktīvie dashboards';

$GLOBALS["lang"]['Interactive dashboards provide instant visibility into the status of network inventory allowing IT teams to spot newly discovered devices and unusual device behaviour at a glance.'] = 'Interaktīvi paneli nodrošina tūlītēju redzamību tīkla inventāra statusā, ļaujot IT komandām pamanīt jaunatklātās ierīces un neparastu ierīces uzvedību acumirklī.';

$GLOBALS["lang"]['interface'] = 'Saskarne';

$GLOBALS["lang"]['Interface'] = 'Saskarne';

$GLOBALS["lang"]['interface_id'] = 'Saskarnes ID';

$GLOBALS["lang"]['Interface ID'] = 'Saskarnes ID';

$GLOBALS["lang"]['interface_type'] = 'Saskarnes veids';

$GLOBALS["lang"]['Interface Type'] = 'Saskarnes veids';

$GLOBALS["lang"]['Internal'] = 'Iekšējs';

$GLOBALS["lang"]['Internal Audit'] = 'Iekšējā revīzija';

$GLOBALS["lang"]['Internal Audit & Review'] = 'Iekšējā revīzija un pārskatīšana';

$GLOBALS["lang"]['Internal Field Name'] = 'Iekšējā lauka nosaukums';

$GLOBALS["lang"]['Internal ID'] = 'Iekšējais ID';

$GLOBALS["lang"]['Internal JSON array of valid access tokens for this user.'] = 'Iekšējais JSON masīvs šim lietotājam derīgas piekļuves žetoniem.';

$GLOBALS["lang"]['Introduction'] = 'Ievads';

$GLOBALS["lang"]['invoice'] = 'Rēķins';

$GLOBALS["lang"]['Invoice'] = 'Rēķins';

$GLOBALS["lang"]['invoice_id'] = 'Rēķina ID';

$GLOBALS["lang"]['Invoice ID'] = 'Rēķina ID';

$GLOBALS["lang"]['invoice_item'] = 'Rēķins';

$GLOBALS["lang"]['Invoice Item'] = 'Rēķins';

$GLOBALS["lang"]['ios_version'] = 'Ios versija';

$GLOBALS["lang"]['Ios Version'] = 'Ios versija';

$GLOBALS["lang"]['ip_address_external_a'] = 'IP adrese ārējā A';

$GLOBALS["lang"]['Ip Address External A'] = 'IP adrese ārējā A';

$GLOBALS["lang"]['ip_address_external_b'] = 'IP adrese ārējā B';

$GLOBALS["lang"]['Ip Address External B'] = 'IP adrese ārējā B';

$GLOBALS["lang"]['ip_address_internal_a'] = 'IP adrese iekšējā A';

$GLOBALS["lang"]['Ip Address Internal A'] = 'IP adrese iekšējā A';

$GLOBALS["lang"]['ip_address_internal_b'] = 'IP adrese iekšējā B';

$GLOBALS["lang"]['Ip Address Internal B'] = 'IP adrese iekšējā B';

$GLOBALS["lang"]['ip_all_count'] = 'Visi skaitļi';

$GLOBALS["lang"]['Ip All Count'] = 'Visi skaitļi';

$GLOBALS["lang"]['ip_audited_count'] = 'Ip Audited count';

$GLOBALS["lang"]['Ip Audited Count'] = 'Ip Audited count';

$GLOBALS["lang"]['ip_discovered_count'] = 'Atklātais skaitlis';

$GLOBALS["lang"]['Ip Discovered Count'] = 'Atklātais skaitlis';

$GLOBALS["lang"]['ip_enabled'] = 'Ip ieslēgts';

$GLOBALS["lang"]['Ip Enabled'] = 'Ip ieslēgts';

$GLOBALS["lang"]['ip_responding_count'] = 'Ip respondentu skaits';

$GLOBALS["lang"]['Ip Responding Count'] = 'Ip respondentu skaits';

$GLOBALS["lang"]['ip_scanned_count'] = 'Ip skenētais skaitlis';

$GLOBALS["lang"]['Ip Scanned Count'] = 'Ip skenētais skaitlis';

$GLOBALS["lang"]['Iran'] = 'Irāna';

$GLOBALS["lang"]['Iraq'] = 'Irāka';

$GLOBALS["lang"]['Ireland'] = 'Īrija';

$GLOBALS["lang"]['Irish'] = 'Īru';

$GLOBALS["lang"]['Is FRU'] = 'Ir FRU';

$GLOBALS["lang"]['is_fru'] = 'Ir Fru';

$GLOBALS["lang"]['Is Fru'] = 'Ir Fru';

$GLOBALS["lang"]['Is the NMIS server local (on this Open-AudIT server) or remote?'] = 'Vai NMIS serveris ir lokāls (uz šī Open-AudIT servera) vai attālināts?';

$GLOBALS["lang"]['Is this account active? If set to <code>n</code>, the user cannot logon.'] = 'Vai šis konts ir aktīvs? Ja ieslēgts <code>n</code>, lietotājs nevar pieteikt.';

$GLOBALS["lang"]['Is this query restricted to licensed customers.'] = 'Vai šis vaicājums attiecas tikai uz licencētiem klientiem.';

$GLOBALS["lang"]['Is this task enabled (y/n).'] = 'Vai šis uzdevums ir ieslēgts (jā/nē).';

$GLOBALS["lang"]['Isle of Man'] = 'Menas sala';

$GLOBALS["lang"]['Israel'] = 'Izraēla';

$GLOBALS["lang"]['Issue'] = 'Jautājums';

$GLOBALS["lang"]['issuer'] = 'Emitents';

$GLOBALS["lang"]['Issuer'] = 'Emitents';

$GLOBALS["lang"]['issuer_name'] = 'Emitenta nosaukums';

$GLOBALS["lang"]['Issuer Name'] = 'Emitenta nosaukums';

$GLOBALS["lang"]['Issues'] = 'Jautājumi';

$GLOBALS["lang"]['It <i>Just Works</i> with NMIS'] = 'Tas <i>Tikai darbi</i> ar NMIS';

$GLOBALS["lang"]['It is available at Menu -> Help ->'] = 'Tas ir pieejams ēdienkartē Palīdzība ->';

$GLOBALS["lang"]['It is important to note that when Open-AudIT determines a match any properties set to <i>y</i> must match exactly (and not be blank) in order for Open-AudIT to determine that the discovered device matches a device already in the database. If none of the properties marked <i>y</i> match, then a new device entry will be created, which could result in duplicate device entries. In situations where properties are duplicated, for example a dbus_id is copied during a VM clone, then an existing device may incorrectly get overwritten/updated rather then a new entry being created resulting in missing devices.'] = 'Ir svarīgi atzīmēt, ka tad, kad Open- AudIT nosaka atbilstību visām īpašībām, kas ir <i>y</i> ir jāatbilst precīzi (un nedrīkst būt tukšs), lai Open-AudIT, lai noteiktu, ka atrastā ierīce atbilst ierīce jau datubāzē. Ja nav atzīmēta neviena no īpašībām <i>y</i> atbilst, tad tiks izveidots jauns ierīces ieraksts, kas varētu izraisīt dublēt ierīces ierakstus. Situācijās, kad īpašības tiek dublētas, piemēram, dbus_id tiek kopēts VM klona laikā, tad esoša ierīce var nepareizi pārrakstīt/atjaunināt, drīzāk tad tiek izveidots jauns ieraksts, kā rezultātā trūkst ierīces.';

$GLOBALS["lang"]['It is not uncommon to have an overlapping address space in a given Organisation. Not ideal, but not uncommon.'] = 'Nereti attiecīgajā organizācijā adrešu telpa pārklājas. Nav ideāls, bet ne neparasts.';

$GLOBALS["lang"]['It is very common for second tier motherboard manufacturers to not set this, to set it to all <i>0</i>s or even all <i>F</i>s.'] = 'Ir ļoti bieži otrā līmeņa pamatplates ražotājiem to nenoteikt, noteikt to visiem <i>0</i>s vai pat visi <i>F</i>s.';

$GLOBALS["lang"]['Italian'] = 'Itāļu';

$GLOBALS["lang"]['Italy'] = 'Itālija';

$GLOBALS["lang"]['Items not in Baseline'] = 'Vienības, kas nav sākotnējā stāvoklī';

$GLOBALS["lang"]['JSON'] = 'JSON';

$GLOBALS["lang"]['JSON to Import'] = 'Importēt JSON';

$GLOBALS["lang"]['Jamaica'] = 'Jamaika';

$GLOBALS["lang"]['January'] = 'Janvāris';

$GLOBALS["lang"]['Japan'] = 'Japāna';

$GLOBALS["lang"]['Japanese'] = 'japāņu';

$GLOBALS["lang"]['Jersey'] = 'Džērsija';

$GLOBALS["lang"]['Jordan'] = 'Jordānija';

$GLOBALS["lang"]['July'] = 'Jūlijs';

$GLOBALS["lang"]['June'] = 'Jūnijs';

$GLOBALS["lang"]['Kazakhstan'] = 'Kazahstānas Republika';

$GLOBALS["lang"]['Kenya'] = 'Kenija';

$GLOBALS["lang"]['kernel_version'] = 'Kernel versija';

$GLOBALS["lang"]['Kernel Version'] = 'Kernel versija';

$GLOBALS["lang"]['Key'] = 'Taustiņš';

$GLOBALS["lang"]['Key Components'] = 'Galvenie komponenti';

$GLOBALS["lang"]['Key Password (optional)'] = 'Taustiņa parole (nav obligāta)';

$GLOBALS["lang"]['keys'] = 'Atslēgas';

$GLOBALS["lang"]['Keys'] = 'Atslēgas';

$GLOBALS["lang"]['Kiribati'] = 'Kiribati';

$GLOBALS["lang"]['Korea'] = 'Koreja';

$GLOBALS["lang"]['Korean'] = 'Korejiešu';

$GLOBALS["lang"]['Kuwait'] = 'Kuveita';

$GLOBALS["lang"]['Kyrgyz'] = 'Kirgizstāna';

$GLOBALS["lang"]['Kyrgyz Republic'] = 'Kirgizstānas Republika';

$GLOBALS["lang"]['LDAP Group'] = 'LDAP grupa';

$GLOBALS["lang"]['LDAP was searched for this user and their account was found.'] = 'Tika meklēta LDAP šim lietotājam un viņu konts.';

$GLOBALS["lang"]['LDAP was searched for this user and their account was not found. Check the LDAP server logs. The user credentials have worked, but the user was not found. Also check you have specified the correct Base DN attribute when you created the LDAP Server in Open-AudIT.'] = 'Tika meklēta LDAP šim lietotājam un viņu konts netika atrasts. Pārbaudiet LDAP servera žurnālus. Lietotāja dati ir strādājuši, bet lietotājs netika atrasts. Pārbaudiet arī, vai esat norādījis pareizo Bāzes DN atribūtu, kad esat izveidojis LDAP serveri Open-AudIT.';

$GLOBALS["lang"]['lang'] = 'Lang';

$GLOBALS["lang"]['Lang'] = 'Lang';

$GLOBALS["lang"]['language'] = 'Valoda';

$GLOBALS["lang"]['Language'] = 'Valoda';

$GLOBALS["lang"]['Lao'] = 'Lao';

$GLOBALS["lang"]['last_changed'] = 'Pēdējoreiz mainīts';

$GLOBALS["lang"]['Last Changed'] = 'Pēdējoreiz mainīts';

$GLOBALS["lang"]['last_finished'] = 'Pēdējais pabeigtais';

$GLOBALS["lang"]['Last Finished'] = 'Pēdējais pabeigtais';

$GLOBALS["lang"]['last_logon'] = 'Pēdējais pieteikšanās laiks';

$GLOBALS["lang"]['Last Logon'] = 'Pēdējais pieteikšanās laiks';

$GLOBALS["lang"]['Last Name'] = 'Uzvārds';

$GLOBALS["lang"]['last_os_update'] = 'Pēdējā Os atjaunināšana';

$GLOBALS["lang"]['Last Os Update'] = 'Pēdējā Os atjaunināšana';

$GLOBALS["lang"]['last_result'] = 'Pēdējais rezultāts';

$GLOBALS["lang"]['Last Result'] = 'Pēdējais rezultāts';

$GLOBALS["lang"]['last_run'] = 'Pēdējā reize';

$GLOBALS["lang"]['Last Run'] = 'Pēdējā reize';

$GLOBALS["lang"]['last_seen'] = 'Pēdējais seanss';

$GLOBALS["lang"]['Last Seen'] = 'Pēdējais seanss';

$GLOBALS["lang"]['last_seen_by'] = 'Pēdējais seanss Pēc';

$GLOBALS["lang"]['Last Seen By'] = 'Pēdējais seanss Pēc';

$GLOBALS["lang"]['last_user'] = 'Pēdējais lietotājs';

$GLOBALS["lang"]['Last User'] = 'Pēdējais lietotājs';

$GLOBALS["lang"]['Last up is WMI. For Windows as in Linux, a user with Administrator level access is preferred (see Target Client Configuration on the wiki).'] = 'Beidzot ir WMI. Windows, tāpat kā Linux, priekšroka tiek dota lietotājam ar administratora līmeņa piekļuvi (skatīt Target Client Configuration uz wiki).';

$GLOBALS["lang"]['lastModified'] = 'PēdējaisModified';

$GLOBALS["lang"]['LastModified'] = 'PēdējaisModified';

$GLOBALS["lang"]['latitude'] = 'Ģeogrāfiskais platums';

$GLOBALS["lang"]['Latitude'] = 'Ģeogrāfiskais platums';

$GLOBALS["lang"]['Latvia'] = 'Latvija';

$GLOBALS["lang"]['Latvian'] = 'Latviešu';

$GLOBALS["lang"]['Layout'] = 'Izkārtojums';

$GLOBALS["lang"]['ldap'] = 'Ldap';

$GLOBALS["lang"]['Ldap'] = 'Ldap';

$GLOBALS["lang"]['ldap_base_dn'] = 'Ldap bāze Dn';

$GLOBALS["lang"]['Ldap Base Dn'] = 'Ldap bāze Dn';

$GLOBALS["lang"]['ldap_dn_account'] = 'Ldap Dn konts';

$GLOBALS["lang"]['Ldap Dn Account'] = 'Ldap Dn konts';

$GLOBALS["lang"]['ldap_dn_password'] = 'Parole';

$GLOBALS["lang"]['Ldap Dn Password'] = 'Parole';

$GLOBALS["lang"]['Learn About'] = 'Mācīties par';

$GLOBALS["lang"]['Learn More'] = 'Uzziniet vairāk';

$GLOBALS["lang"]['lease_expiry_date'] = 'Nomas termiņa beigu datums';

$GLOBALS["lang"]['Lease Expiry Date'] = 'Nomas termiņa beigu datums';

$GLOBALS["lang"]['Lebanon'] = 'Libāna';

$GLOBALS["lang"]['legal_requirements'] = 'Juridiskās prasības';

$GLOBALS["lang"]['Legal Requirements'] = 'Juridiskās prasības';

$GLOBALS["lang"]['Lesotho'] = 'Lesoto';

$GLOBALS["lang"]['Less Than'] = 'Mazāks par';

$GLOBALS["lang"]['Less Than or Equals'] = 'Mazāks vai vienāds';

$GLOBALS["lang"]['Lets set the logging to debug. Copy the file:'] = 'Ļauj iestatīt žurnalēšanu atkļūdošanai. Kopēt failu:';

$GLOBALS["lang"]['level'] = 'Līmenis';

$GLOBALS["lang"]['Level'] = 'Līmenis';

$GLOBALS["lang"]['Level of privileges needed to exploit (None, Low, High).'] = 'Ekspluatācijai vajadzīgo tiesību līmenis (nav, zems, augsts).';

$GLOBALS["lang"]['Liberia'] = 'Libērija';

$GLOBALS["lang"]['Libraries (ie, code that another program might include). These are typically items like Wordpress extensions, drupal extensions, node.js libraries, Android / iPhone / Windows libraries, python libraries, etc.'] = 'Bibliotēkas (ti, kods, ka cita programma varētu ietvert). Tie parasti ir priekšmeti, piemēram, WordPress paplašinājumi, drupal paplašinājumi, mezgla.js bibliotēkas, Android / iPhone / Windows bibliotēkas, python bibliotēkas, uc.';

$GLOBALS["lang"]['Libyan Arab Jamahiriya'] = 'Lībijas Arābu Džamahīrija';

$GLOBALS["lang"]['License'] = 'Licence';

$GLOBALS["lang"]['License Key'] = 'Licences atslēga';

$GLOBALS["lang"]['License Required'] = 'Nepieciešama licence';

$GLOBALS["lang"]['Licensed users are free to add or modify the rules as you see fit. If you have a device with an SNMP OID that does not match a model already in the file - now you can add it easily. No more waiting for us to provide a patch and add it to the code base for you.<br><br>When you create a Rules entry, you will need to provide a name and a list of inputs and outputs. The inputs and outputs are stored as JSON arrays within the database.<br><br>Inputs have a table and attribute, an operator and a value. When executing the condition, it works thus: If $table . $attribute $operator $value then apply the outputs.<br><br>An example rule to match an SNMP OID and set the model is below.<br>'] = 'Licencēti lietotāji var brīvi pievienot vai mainīt noteikumus, kā redzat fit. Ja jums ir ierīce ar SNMP OID, kas neatbilst modelim jau failā - tagad jūs varat to viegli pievienot. Vairs negaida, lai mēs sniegtu plāksteri un pievienot to kodu bāzei jums.<br/><br/>Kad jūs izveidot noteikumu ierakstu, jums būs nepieciešams, lai sniegtu nosaukumu un sarakstu ieejas un izejas. Ievades un izejas tiek saglabāti kā JSON masīvi datu bāzē.<br/><br/>Ieejai ir tabula un atribūts, operators un vērtība. Izpildot nosacījumu, tas darbojas šādi: Ja $table . $atributte $operators $ vērtību, tad piemēro rezultātus.<br/><br/>Piemēra noteikums, lai atbilstu SNMP OID un iestatīt modeli, ir zemāk.<br/>';

$GLOBALS["lang"]['Licenses'] = 'Licences';

$GLOBALS["lang"]['Liechtenstein'] = 'Lihtenšteina';

$GLOBALS["lang"]['Like'] = 'Kā';

$GLOBALS["lang"]['Like most other attributes, Additional Fields can be bulk edited. Use the Bulk Edit function as you normally would and you will see the Additional Fields are available for input.'] = 'Tāpat kā lielākā daļa citu atribūtu, papildus laukus var beztaras rediģēt. Izmantojiet Bulk Edit funkciju kā parasti, un jūs redzēsiet Papildu lauki ir pieejami ievadei.';

$GLOBALS["lang"]['Like versus Equals'] = 'Tāpat kā pret vienādiem';

$GLOBALS["lang"]['limit'] = 'Limits';

$GLOBALS["lang"]['Limit'] = 'Limits';

$GLOBALS["lang"]['Limit the query to the first X items.'] = 'Ierobežot vaicājumu ar pirmajiem X elementiem.';

$GLOBALS["lang"]['Limited to 100 rows.'] = 'Ierobežots līdz 100 rindām.';

$GLOBALS["lang"]['line_amount'] = 'Summa';

$GLOBALS["lang"]['Line Amount'] = 'Summa';

$GLOBALS["lang"]['Line Graph'] = 'Līniju grafiks';

$GLOBALS["lang"]['line_number_a'] = 'Rindas numurs A';

$GLOBALS["lang"]['Line Number A'] = 'Rindas numurs A';

$GLOBALS["lang"]['line_number_b'] = 'Rindas numurs B';

$GLOBALS["lang"]['Line Number B'] = 'Rindas numurs B';

$GLOBALS["lang"]['line_text'] = 'Rindas teksts';

$GLOBALS["lang"]['Line Text'] = 'Rindas teksts';

$GLOBALS["lang"]['Line charts must return date or my_date, description or my_description and count.'] = 'Līnijas diagrammas ir atgriezties datums vai my_date, apraksts vai my_apraksts un skaits.';

$GLOBALS["lang"]['link'] = 'Saikne';

$GLOBALS["lang"]['Link'] = 'Saikne';

$GLOBALS["lang"]['Link (Advanced)'] = 'Saite (Advanced)';

$GLOBALS["lang"]['Linked Files'] = 'Saistītie faili';

$GLOBALS["lang"]['links'] = 'Saites';

$GLOBALS["lang"]['Links'] = 'Saites';

$GLOBALS["lang"]['Links this discovery to the associated cloud (if required). Links to <code>clouds.id</code>.'] = 'Savieno šo atklājumu ar saistīto mākoni (ja nepieciešams). Saites uz <code>clouds.id</code>.';

$GLOBALS["lang"]['Links to <code>discovery_scan_options.id</code>.'] = 'Saites uz <code>discovery_scan_options.id</code>.';

$GLOBALS["lang"]['Links to <code>standards.id</code>'] = 'Saites uz <code>standards.id</code>';

$GLOBALS["lang"]['Links to <standards_policies.id</code>'] = 'Saites uz <standards_policies.id< code=""></standards_policies.id<>';

$GLOBALS["lang"]['Linux'] = 'Linux';

$GLOBALS["lang"]['Linux Packages'] = 'Linux pakotnes';

$GLOBALS["lang"]['List'] = 'Saraksts';

$GLOBALS["lang"]['List All NMAP Ports, Protocols and Programs for Each Device'] = 'Saraksts ar visām NMAP portiem, protokoliem un programmām katrai ierīcei';

$GLOBALS["lang"]['List Devices'] = 'Saraksta ierīces';

$GLOBALS["lang"]['List Discoveries'] = 'Saraksts atklājumi';

$GLOBALS["lang"]['list_table_format'] = 'Rādīt tabulas formātu';

$GLOBALS["lang"]['List Table Format'] = 'Rādīt tabulas formātu';

$GLOBALS["lang"]['List Tables'] = 'Sarakstu tabulas';

$GLOBALS["lang"]['Lithuania'] = 'Lietuva';

$GLOBALS["lang"]['Lithuanian'] = 'lietuviešu';

$GLOBALS["lang"]['Load Balancing'] = 'Slodzes līdzsvarošana';

$GLOBALS["lang"]['Local'] = 'Lokāls';

$GLOBALS["lang"]['Local Area Network'] = 'Lokālais tīkls';

$GLOBALS["lang"]['local_port'] = 'Lokālā osta';

$GLOBALS["lang"]['Local Port'] = 'Lokālā osta';

$GLOBALS["lang"]['Local area network'] = 'Lokālais tīkls';

$GLOBALS["lang"]['Localhost'] = 'Lokālais hosts';

$GLOBALS["lang"]['Localisation'] = 'Lokalizācija';

$GLOBALS["lang"]['Location'] = 'Vieta';

$GLOBALS["lang"]['Location A'] = 'A vieta';

$GLOBALS["lang"]['Location B'] = 'B vieta';

$GLOBALS["lang"]['location_id'] = 'Vietas ID';

$GLOBALS["lang"]['Location ID'] = 'Vietas ID';

$GLOBALS["lang"]['location_id_a'] = 'A atrašanās vietas ID';

$GLOBALS["lang"]['Location ID A'] = 'A atrašanās vietas ID';

$GLOBALS["lang"]['location_id_b'] = 'Atrašanās vietas ID B';

$GLOBALS["lang"]['Location ID B'] = 'Atrašanās vietas ID B';

$GLOBALS["lang"]['location_latitude'] = 'Atrašanās vietas platums';

$GLOBALS["lang"]['Location Latitude'] = 'Atrašanās vietas platums';

$GLOBALS["lang"]['location_level'] = 'Vietas līmenis';

$GLOBALS["lang"]['Location Level'] = 'Vietas līmenis';

$GLOBALS["lang"]['location_longitude'] = 'Atrašanās vieta Garums';

$GLOBALS["lang"]['Location Longitude'] = 'Atrašanās vieta Garums';

$GLOBALS["lang"]['Location Name'] = 'Vietas nosaukums';

$GLOBALS["lang"]['location_rack'] = 'Atrašanās vieta Rack';

$GLOBALS["lang"]['Location Rack'] = 'Atrašanās vieta Rack';

$GLOBALS["lang"]['location_rack_position'] = 'Atrašanās vieta';

$GLOBALS["lang"]['Location Rack Position'] = 'Atrašanās vieta';

$GLOBALS["lang"]['location_rack_size'] = 'Atrašanās vieta Rack Izmērs';

$GLOBALS["lang"]['Location Rack Size'] = 'Atrašanās vieta Rack Izmērs';

$GLOBALS["lang"]['location_room'] = 'Atrašanās vieta';

$GLOBALS["lang"]['Location Room'] = 'Atrašanās vieta';

$GLOBALS["lang"]['location_suite'] = 'Atrašanās vietas komplekts';

$GLOBALS["lang"]['Location Suite'] = 'Atrašanās vietas komplekts';

$GLOBALS["lang"]['Locations'] = 'Vietas';

$GLOBALS["lang"]['Locations in this'] = 'Vietas šajā';

$GLOBALS["lang"]['log'] = 'Žurnāls';

$GLOBALS["lang"]['Log'] = 'Žurnāls';

$GLOBALS["lang"]['log_format'] = 'Žurnāla formāts';

$GLOBALS["lang"]['Log Format'] = 'Žurnāla formāts';

$GLOBALS["lang"]['Log Line'] = 'Žurnāla rinda';

$GLOBALS["lang"]['log_path'] = 'Žurnāla ceļš';

$GLOBALS["lang"]['Log Path'] = 'Žurnāla ceļš';

$GLOBALS["lang"]['log_rotation'] = 'Žurnāla rotācija';

$GLOBALS["lang"]['Log Rotation'] = 'Žurnāla rotācija';

$GLOBALS["lang"]['log_status'] = 'Žurnāla statuss';

$GLOBALS["lang"]['Log Status'] = 'Žurnāla statuss';

$GLOBALS["lang"]['Logging in'] = 'Reģistrēšana';

$GLOBALS["lang"]['Logical Cores '] = 'Loģiskie kodoli ';

$GLOBALS["lang"]['logical_count'] = 'Loģiskais skaits';

$GLOBALS["lang"]['Logical Count'] = 'Loģiskais skaits';

$GLOBALS["lang"]['Logout'] = 'Atteikties';

$GLOBALS["lang"]['Logs'] = 'Žurnāli';

$GLOBALS["lang"]['longitude'] = 'Ģeogrāfiskais garums';

$GLOBALS["lang"]['Longitude'] = 'Ģeogrāfiskais garums';

$GLOBALS["lang"]['low'] = 'Zems';

$GLOBALS["lang"]['Low'] = 'Zems';

$GLOBALS["lang"]['Lower Case'] = 'Mazie burti';

$GLOBALS["lang"]['Lowercase Hostname'] = 'Mazais datora nosaukums';

$GLOBALS["lang"]['Luxembourg'] = 'Luksemburga';

$GLOBALS["lang"]['MAC Address'] = 'MAC adrese';

$GLOBALS["lang"]['MAC Manufacturer'] = 'MAC Ražotājs';

$GLOBALS["lang"]['mac'] = 'Mac';

$GLOBALS["lang"]['Mac'] = 'Mac';

$GLOBALS["lang"]['Mac Address'] = 'Mac adrese';

$GLOBALS["lang"]['MacOS'] = 'MacOS';

$GLOBALS["lang"]['MacOS Packages'] = 'MacOS pakotnes';

$GLOBALS["lang"]['Macao'] = 'Makao';

$GLOBALS["lang"]['Macedonia'] = 'Maķedonijas Republika';

$GLOBALS["lang"]['Madagascar'] = 'Madagaskara';

$GLOBALS["lang"]['Maintain records of risk assessments and treatments'] = 'Riska novērtējuma un ārstēšanas dokumentēšana';

$GLOBALS["lang"]['maintenance_expires'] = 'Zaudē spēku';

$GLOBALS["lang"]['Maintenance Expires'] = 'Zaudē spēku';

$GLOBALS["lang"]['Make My Default Dashboard'] = 'Padarīt manu noklusējuma dashboard';

$GLOBALS["lang"]['Make this install a Collector'] = 'Padarīt šo instalēt Kolekcionāru';

$GLOBALS["lang"]['Malawi'] = 'Malāvija';

$GLOBALS["lang"]['Malay'] = 'Malāvija';

$GLOBALS["lang"]['Malaysia'] = 'Malaizija';

$GLOBALS["lang"]['Maldives'] = 'Maldivu salas';

$GLOBALS["lang"]['Mali'] = 'Mali';

$GLOBALS["lang"]['Malta'] = 'Portugāle';

$GLOBALS["lang"]['Manage'] = 'Pārvaldīt';

$GLOBALS["lang"]['Manage Licenses'] = 'Pārvaldīt licences';

$GLOBALS["lang"]['Manage in NMIS'] = 'Pārvaldīt NMIS';

$GLOBALS["lang"]['Manage incidents and nonconformities'] = 'Pārvaldīt incidentus un neatbilstības';

$GLOBALS["lang"]['Managed'] = 'Pārvaldīts';

$GLOBALS["lang"]['managed_by'] = 'Pārvalda';

$GLOBALS["lang"]['Managed By'] = 'Pārvalda';

$GLOBALS["lang"]['Manual Input'] = 'Manuālā ievade';

$GLOBALS["lang"]['Manually set by user, defaults to Production.'] = 'Manuāli iestatīts ar lietotāju, noklusējuma Production.';

$GLOBALS["lang"]['Manually set by user.'] = 'Lietotāja manuāli iestatīts.';

$GLOBALS["lang"]['manufacture_date'] = 'Ražošanas datums';

$GLOBALS["lang"]['Manufacture Date'] = 'Ražošanas datums';

$GLOBALS["lang"]['manufacturer'] = 'Ražotājs';

$GLOBALS["lang"]['Manufacturer'] = 'Ražotājs';

$GLOBALS["lang"]['manufacturer_code'] = 'Ražotāja kods';

$GLOBALS["lang"]['Manufacturer Code'] = 'Ražotāja kods';

$GLOBALS["lang"]['Map'] = 'Karte';

$GLOBALS["lang"]['maps'] = 'Kartes';

$GLOBALS["lang"]['Maps'] = 'Kartes';

$GLOBALS["lang"]['March'] = 'Marts';

$GLOBALS["lang"]['Marshall Islands'] = 'Māršala salas';

$GLOBALS["lang"]['Martinique'] = 'Martinika';

$GLOBALS["lang"]['mask'] = 'Maska';

$GLOBALS["lang"]['Mask'] = 'Maska';

$GLOBALS["lang"]['Match'] = 'Atbilst';

$GLOBALS["lang"]['match_options'] = 'Meklēt opcijas';

$GLOBALS["lang"]['Match Options'] = 'Meklēt opcijas';

$GLOBALS["lang"]['Match Order'] = 'Saskaņošanas kārtība';

$GLOBALS["lang"]['Match Process'] = 'Meklēt procesu';

$GLOBALS["lang"]['match_string'] = 'Atbilstoša virkne';

$GLOBALS["lang"]['Match String'] = 'Atbilstoša virkne';

$GLOBALS["lang"]['Matching Attribute'] = 'Atbilst atribūtam';

$GLOBALS["lang"]['Matching Devices - Including OrgID'] = 'Saskaņošanas ierīces - ieskaitot OrgID';

$GLOBALS["lang"]['Matching Linux Devices'] = 'Atbilst Linux ierīcēm';

$GLOBALS["lang"]['Matching is conducted in the following order'] = 'Saskaņošana notiek šādā secībā:';

$GLOBALS["lang"]['maturity_level'] = 'Termiņš';

$GLOBALS["lang"]['Maturity Level'] = 'Termiņš';

$GLOBALS["lang"]['maturity_score'] = 'Termiņš';

$GLOBALS["lang"]['Maturity Score'] = 'Termiņš';

$GLOBALS["lang"]['Mauritania'] = 'Mauritānija';

$GLOBALS["lang"]['Mauritius'] = 'Maurīcija';

$GLOBALS["lang"]['max_file_size'] = 'Maks. faila izmērs';

$GLOBALS["lang"]['Max File Size'] = 'Maks. faila izmērs';

$GLOBALS["lang"]['Max Length'] = 'Maksimālais garums';

$GLOBALS["lang"]['max_size'] = 'Maks. izmērs';

$GLOBALS["lang"]['Max Size'] = 'Maks. izmērs';

$GLOBALS["lang"]['May'] = 'Maijs';

$GLOBALS["lang"]['Mayotte'] = 'Majota';

$GLOBALS["lang"]['Measures the likelihood of the vulnerability being attacked, and is based on the current state of exploit techniques, exploit code availability, or active, “in-the-wild” exploitation.'] = 'Mēra varbūtību, ka var tikt uzbrukts neaizsargātībai, un balstās uz pašreizējo ekspluatācijas metožu stāvokli, izmantot kodu pieejamību vai aktīvi izmantot “savvaļā”.';

$GLOBALS["lang"]['medium'] = 'Vidējs';

$GLOBALS["lang"]['Medium'] = 'Vidējs';

$GLOBALS["lang"]['members'] = 'Locekļi';

$GLOBALS["lang"]['Members'] = 'Locekļi';

$GLOBALS["lang"]['memory'] = 'Atmiņa';

$GLOBALS["lang"]['Memory'] = 'Atmiņa';

$GLOBALS["lang"]['memory_count'] = 'Atmiņas skaits';

$GLOBALS["lang"]['Memory Count'] = 'Atmiņas skaits';

$GLOBALS["lang"]['memory_slot_count'] = 'Atmiņas slotu skaits';

$GLOBALS["lang"]['Memory Slot Count'] = 'Atmiņas slotu skaits';

$GLOBALS["lang"]['menu_category'] = 'Izvēlnes kategorija';

$GLOBALS["lang"]['Menu Category'] = 'Izvēlnes kategorija';

$GLOBALS["lang"]['menu_display'] = 'Izvēlnes displejs';

$GLOBALS["lang"]['Menu Display'] = 'Izvēlnes displejs';

$GLOBALS["lang"]['message'] = 'Ziņojums';

$GLOBALS["lang"]['Message'] = 'Ziņojums';

$GLOBALS["lang"]['meta_last_changed'] = 'Meta pēdējās izmaiņas';

$GLOBALS["lang"]['Meta Last Changed'] = 'Meta pēdējās izmaiņas';

$GLOBALS["lang"]['metric'] = 'Metrisks';

$GLOBALS["lang"]['Metric'] = 'Metrisks';

$GLOBALS["lang"]['Metropolitan Area Network'] = 'Metropolitan Area Network';

$GLOBALS["lang"]['Metropolitan area network'] = 'Aglomerācijas tīkls';

$GLOBALS["lang"]['Mexico'] = 'Meksika';

$GLOBALS["lang"]['Micronesia'] = 'Mikronēzija';

$GLOBALS["lang"]['Microsoft Azure Fields'] = 'Microsoft Azure lauki';

$GLOBALS["lang"]['microtime'] = 'Mikrolaiks';

$GLOBALS["lang"]['Microtime'] = 'Mikrolaiks';

$GLOBALS["lang"]['minute'] = 'Minūte';

$GLOBALS["lang"]['Minute'] = 'Minūte';

$GLOBALS["lang"]['Minutes'] = 'Protokols';

$GLOBALS["lang"]['Minutes Since last Audit are Greater than'] = 'Protokoli Kopš pēdējās revīzijas';

$GLOBALS["lang"]['model'] = 'Paraugs';

$GLOBALS["lang"]['Model'] = 'Paraugs';

$GLOBALS["lang"]['model_family'] = 'Parauga ģimene';

$GLOBALS["lang"]['Model Family'] = 'Parauga ģimene';

$GLOBALS["lang"]['Modified'] = 'Mainīts';

$GLOBALS["lang"]['Modifying an Existing Script'] = 'Izmainīt esošo skriptu';

$GLOBALS["lang"]['module'] = 'Modulis';

$GLOBALS["lang"]['Module'] = 'Modulis';

$GLOBALS["lang"]['module_index'] = 'Moduļu indekss';

$GLOBALS["lang"]['Module Index'] = 'Moduļu indekss';

$GLOBALS["lang"]['Modules'] = 'Moduļi';

$GLOBALS["lang"]['Moldova'] = 'Moldova';

$GLOBALS["lang"]['Monaco'] = 'Monako';

$GLOBALS["lang"]['Monday'] = 'Pirmdiena';

$GLOBALS["lang"]['Mongolia'] = 'Mongolija';

$GLOBALS["lang"]['monitor'] = 'Monitors';

$GLOBALS["lang"]['Monitor'] = 'Monitors';

$GLOBALS["lang"]['Monitor and measure ISMS performance'] = 'Uzraudzīt un izmērīt ISMS veiktspēju';

$GLOBALS["lang"]['Montenegro'] = 'Melnkalne';

$GLOBALS["lang"]['month'] = 'Mēnesis';

$GLOBALS["lang"]['Month'] = 'Mēnesis';

$GLOBALS["lang"]['Montserrat'] = 'Montserrat';

$GLOBALS["lang"]['More Information'] = 'Vairāk informācijas';

$GLOBALS["lang"]['More Secure'] = 'Drošāks';

$GLOBALS["lang"]['More elaborate SQL can used to group attributes within a range. Below shows the SQL for devices not seen in a pie chart grouped by last seen date ranges.'] = 'Sīkāk SQL var izmantot grupu atribūtiem diapazonā. Zemāk redzams SQL ierīcēm, kas nav redzamas pīrāga diagrammā, grupējot pēc pēdējiem redzamajiem datumu diapazoniem.';

$GLOBALS["lang"]['More information about debugging this can be found on a helpful Stack Overflow thread'] = 'Vairāk informācijas par atkļūdošanu var atrast uz noderīga kaudzes pārplūdes pavediena';

$GLOBALS["lang"]['Morocco'] = 'Maroka';

$GLOBALS["lang"]['Most likely the Windows firewall (or a third party firewall) is denying the connection attempt.<br><br>Please log on to the target Windows machine and check the firewall settings.'] = 'Visticamāk Windows ugunsmūris (vai trešās puses ugunsmūris) noliedz savienojuma mēģinājumu.<br/><br/>Lūdzu, pieslēdzieties mērķa Windows mašīnai un pārbaudiet ugunsmūra iestatījumus.';

$GLOBALS["lang"]['Most of Open-AudIT is Licensed with GNU AGPL.'] = 'Lielākā daļa Open-AudIT ir licencēta ar GNU AGPL.';

$GLOBALS["lang"]['motherboard'] = 'Pamatplate';

$GLOBALS["lang"]['Motherboard'] = 'Pamatplate';

$GLOBALS["lang"]['mount_point'] = 'Montēšanas punkts';

$GLOBALS["lang"]['Mount Point'] = 'Montēšanas punkts';

$GLOBALS["lang"]['mount_type'] = 'Montēšanas tips';

$GLOBALS["lang"]['Mount Type'] = 'Montēšanas tips';

$GLOBALS["lang"]['Mozambique'] = 'Mozambika';

$GLOBALS["lang"]['Must Respond To Ping. If set, Nmap will fist attempt to send and listen for an ICMP response. If the device does not respond, no further scanning will occur.<br>Previously a device did not have to respond to a ping for Open-AudIT to continue scanning.'] = 'Jāreaģē uz Ping. Ja iestatīts, Nmap dūre mēģinās nosūtīt un klausīties ICMP atbildi. Ja ierīce neatbildēs, turpmāka skenēšana nenotiks.<br/>Iepriekš ierīcei nebija jāatbild uz ping Open- AudIT, lai turpinātu skenēšanu.';

$GLOBALS["lang"]['Must Respond to Ping'] = 'Jāreaģē uz Ping';

$GLOBALS["lang"]['My AntiVirus is prompting me to deny/allow things'] = 'Mans antiviruss mani mudina noliegt/atļaut lietas';

$GLOBALS["lang"]['My time is off in Open-AudIT'] = 'Mans laiks ir brīvs Open-AudIT';

$GLOBALS["lang"]['Myanmar'] = 'Mjanma';

$GLOBALS["lang"]['N+1'] = 'N+1';

$GLOBALS["lang"]['N+M'] = 'N+M';

$GLOBALS["lang"]['N-to-1'] = 'N-to-1';

$GLOBALS["lang"]['N-to-N'] = 'N-to-N';

$GLOBALS["lang"]['NMIS Business Service'] = 'NMIS uzņēmējdarbības pakalpojums';

$GLOBALS["lang"]['NMIS Customer'] = 'NMIS klients';

$GLOBALS["lang"]['NMIS Device Options'] = 'NMIS ierīces opcijas';

$GLOBALS["lang"]['NMIS Device Selection'] = 'NMIS ierīces izvēle';

$GLOBALS["lang"]['NMIS Field Name'] = 'NMIS lauka nosaukums';

$GLOBALS["lang"]['NMIS Field Type'] = 'NMIS lauka tips';

$GLOBALS["lang"]['NMIS Group'] = 'NMIS grupa';

$GLOBALS["lang"]['NMIS Poller'] = 'NMIS Poller';

$GLOBALS["lang"]['NMIS Role'] = 'NMIS Loma';

$GLOBALS["lang"]['NOTE'] = 'Piezīme';

$GLOBALS["lang"]['NOTE #2'] = 'piezīme';

$GLOBALS["lang"]['NOTE - For more info on DateTime formats, see'] = 'PIEZĪME - Plašāku informāciju par DateTime formātiem skatīt';

$GLOBALS["lang"]['NOTE - If you request a downloaded CSV, XML or JSON format (either a single credential, or the complete collection) the actual credential details will be sent. Not the encrypted string, the actual username, password, community string, etc. Any sensitive details are not displayed in the web GUI, but are made available via other formats. To prevent this export a configuration item is available called decrypt_credentials.'] = 'PIEZĪME - Ja jūs pieprasāt lejupielādēt CSV, XML vai JSON formātu (vai nu vienu credential, vai pilnu kolekciju), tiks nosūtītas faktiskās credential detaļas. Nav šifrēta virkne, faktiskais lietotājvārds, parole, kopienas virkne utt. Jebkura sensitīva informācija netiek parādīta tīmekļa GUI, bet ir pieejama citos formātos. Lai novērstu šo eksportu konfigurācijas vienība ir pieejama sauc atšifrēt_ credentials.';

$GLOBALS["lang"]['NOTE - The curly brackets in the data filed should be used as-is (not replaced as per other examples above).'] = 'PIEZĪME - Iesniegto datu kronšteini jāizmanto kā ir (netiek aizstāti, kā norādīts citos piemēros iepriekš).';

$GLOBALS["lang"]['NOTE - You can prevent plain text credentials being displayed below by setting the configuration item for <code>decrypt_credentials</code> to <code>n</code>.'] = 'PIEZĪME - Jūs varat novērst vienkāršu teksta akreditācijas parādīšanos zemāk, iestatot konfigurācijas elementu <code>decrypt_credentials</code> līdz <code>n</code>.';

$GLOBALS["lang"]['name'] = 'Nosaukums';

$GLOBALS["lang"]['Name'] = 'Nosaukums';

$GLOBALS["lang"]['Name: The name you are giving to this field. Ideally it should be unique.'] = 'Vārds: Vārds, ko dodat šim laukam. Ideālā gadījumā tam vajadzētu būt unikālam.';

$GLOBALS["lang"]['Namibia'] = 'Namībija';

$GLOBALS["lang"]['Nauru'] = 'Nauru';

$GLOBALS["lang"]['Nepal'] = 'Nepāla';

$GLOBALS["lang"]['net_index'] = 'Neto indekss';

$GLOBALS["lang"]['Net Index'] = 'Neto indekss';

$GLOBALS["lang"]['Netherlands Antilles'] = 'Nīderlandes Antiļas';

$GLOBALS["lang"]['Netherlands the'] = 'Nīderlande';

$GLOBALS["lang"]['netmask'] = 'Netmask';

$GLOBALS["lang"]['Netmask'] = 'Netmask';

$GLOBALS["lang"]['netstat'] = 'Netstat';

$GLOBALS["lang"]['Netstat'] = 'Netstat';

$GLOBALS["lang"]['Netstat Policies'] = 'Netstata politika';

$GLOBALS["lang"]['Netstat Ports'] = 'Netstat ostas';

$GLOBALS["lang"]['Netstat Ports use a combination of port number, protocol and program. If all are present the policy passes.'] = 'Netstat ostas izmanto ostas numura, protokola un programmas kombināciju. Ja visi ir klāt, politika iet.';

$GLOBALS["lang"]['Network'] = 'Tīkls';

$GLOBALS["lang"]['network_address'] = 'Tīkla adrese';

$GLOBALS["lang"]['Network Address'] = 'Tīkla adrese';

$GLOBALS["lang"]['Network Discovery'] = 'Tīkla atklājums';

$GLOBALS["lang"]['network_domain'] = 'Tīkla domēns';

$GLOBALS["lang"]['Network Domain'] = 'Tīkla domēns';

$GLOBALS["lang"]['Network Types'] = 'Tīkla tipi';

$GLOBALS["lang"]['Network type is set to Local Area Network by default, but can be changed by the user as they see fit. The types supported are below (with thanks to Wikipedia).<br><br>A network can be characterized by its physical capacity or its organizational purpose. Use of the network, including user authorization and access rights, differ accordingly.'] = 'Pēc noklusējuma tīkla tips ir iestatīts uz lokālo tīklu, bet lietotājs to var mainīt, kad tas šķiet piemērots. Atbalstītie tipi ir zemāk ( pateicoties Vikipēdijai).<br/><br/>Tīklu var raksturot ar tā fizisko jaudu vai organizatorisko mērķi. Attiecīgi atšķiras tīkla izmantošana, tostarp lietotāju autorizācija un piekļuves tiesības.';

$GLOBALS["lang"]['networks'] = 'Tīkli';

$GLOBALS["lang"]['Networks'] = 'Tīkli';

$GLOBALS["lang"]['Networks Generated By'] = 'Tīklus ģenerē';

$GLOBALS["lang"]['Networks are updated with every discovery. Items such as IPs Available and IPs Used, along with Gateways, DHCP and DNS Servers are added as found.'] = 'Tīkli tiek atjaunināti ar katru atklājumu. Tādas vienības kā IP Pieejams un IP Lietoti, kopā ar Gateways, DHCP un DNS serveri tiek pievienoti, kā konstatēts.';

$GLOBALS["lang"]['Networks respond differently depending on how they are configured. Some routers and/or firewalls can respond <i>on behalf</i> of IPs on the other side of their interfaces to the Open-AudIT Server. It is quite common to see Nmap report a probe for SNMP (UDP port 161) to respond as open|filtered for devices that do and do not exist. This is misleading as there is no device at that IP, yet it ends up with a device entry in the database. 99.9% of the time, it is not Open-AudIT, nor even Nmap, but the network causing this issue. Now that we have the options to treat open|filtered ports as either open or closed, we can eliminate a lot of this confusion. Enterprise users even have the option to change this on a per discovery basis (more than just using the Medium (Classic) item, as above).'] = 'Tīkli reaģē atšķirīgi atkarībā no tā, kā tie ir konfigurēti. Daži maršrutētāji un/vai ugunsmūri var reaģēt <i>vārdā –</i> IP to saskarnes ar Open-AudIT serveri otrā pusē. Tas ir diezgan bieži redzēt Nmap ziņojumu zonde SNMP (UDP portu 161), lai atbildētu kā atvērts     ; filtrēts ierīcēm, kas ir un nav. Tas ir maldinoši, jo tajā IP nav ierīces, tomēr tas beidzas ar ierīces ierakstu datubāzē. 99,9% no laika, tas nav Open-AudIT, ne pat Nmap, bet tīkls izraisa šo jautājumu. Tagad, kad mums ir iespējas, lai ārstētu atvērtus;filtrēti porti kā atvērti vai slēgti, mēs varam novērst daudz šo apjukumu. Uzņēmuma lietotājiem pat ir iespēja mainīt šo uz vienu atklājumu bāzes (vairāk nekā tikai izmantojot Medium (Classic) objektu, kā iepriekš).';

$GLOBALS["lang"]['Networks using a CIDR Mask of'] = 'Tīkli, kuros izmanto CIDR masku';

$GLOBALS["lang"]['New Building Name'] = 'Jaunas ēkas nosaukums';

$GLOBALS["lang"]['New Caledonia'] = 'Jaunkaledonija';

$GLOBALS["lang"]['New Floor Name'] = 'Jaunas grīdas nosaukums';

$GLOBALS["lang"]['New Room Name'] = 'Jaunas istabas nosaukums';

$GLOBALS["lang"]['New Row Name'] = 'Jauns rindas nosaukums';

$GLOBALS["lang"]['New Zealand'] = 'Jaunzēlande';

$GLOBALS["lang"]['News'] = 'Ziņas';

$GLOBALS["lang"]['News checks-in each time you login for updated queries & packages, configuration recommendations, release announcements, blog posts and more.'] = 'Jaunumi pārbauda-in katru reizi, kad jūs pieteikties uz atjauninātiem vaicājumiem & paketes, konfigurācijas ieteikumus, atbrīvot paziņojumus, blog posts un vairāk.';

$GLOBALS["lang"]['News is our way of keeping you up-to-date with the latest fixes, announcements, query updates, software versions and more.<br><br>You do not need to keep on top of the wiki or check for new releases, we can send these to you!'] = 'Jaunumi ir mūsu veids, kā uzturēt jūs atjaunināt ar jaunākajiem labojumiem, paziņojumiem, vaicājumu atjauninājumus, programmatūras versijas un vairāk.<br/><br/>Jums nav nepieciešams, lai saglabātu virs wiki vai pārbaudīt jaunu relīzes, mēs varam nosūtīt šos jums!';

$GLOBALS["lang"]['next_hop'] = 'Nākamais Hop';

$GLOBALS["lang"]['Next Hop'] = 'Nākamais Hop';

$GLOBALS["lang"]['next_run'] = 'Nākamā izpilde';

$GLOBALS["lang"]['Next Run'] = 'Nākamā izpilde';

$GLOBALS["lang"]['Next click <i>Create your own application</i>.'] = 'Nākamais klikšķis <i>Izveidot savu programmu</i>.';

$GLOBALS["lang"]['Next, click OK, then right click the Apache 2.4 service and click Restart. Done!'] = 'Nākamais, noklikšķiniet OK, tad labi noklikšķiniet uz Apache 2.4 pakalpojumu un noklikšķiniet Restart. Sarunāts!';

$GLOBALS["lang"]['Next, right click the Apache2.4 service and select Properties, then click the Log On tab.'] = 'Nākamais, labi noklikšķiniet uz Apache2.4 pakalpojumu un izvēlieties īpašības, tad noklikšķiniet uz žurnāla cilnē.';

$GLOBALS["lang"]['Nicaragua'] = 'Brazīlija';

$GLOBALS["lang"]['Niger'] = 'Nigēra';

$GLOBALS["lang"]['Nigeria'] = 'Nigērija';

$GLOBALS["lang"]['Niue'] = 'Niue';

$GLOBALS["lang"]['nmap'] = 'Nmap';

$GLOBALS["lang"]['Nmap'] = 'Nmap';

$GLOBALS["lang"]['Nmap Port Scanning Responses'] = 'Nmap ostas skenēšanas atbildes';

$GLOBALS["lang"]['nmap_tcp_ports'] = 'Nmap Tcp porti';

$GLOBALS["lang"]['Nmap Tcp Ports'] = 'Nmap Tcp porti';

$GLOBALS["lang"]['nmap_udp_ports'] = 'Nmap Udp porti';

$GLOBALS["lang"]['Nmap Udp Ports'] = 'Nmap Udp porti';

$GLOBALS["lang"]['Nmap cannot determine whether the port is open because packet filtering prevents its probes from reaching the port. The filtering could be from a dedicated firewall device, router rules, or host-based firewall software. These ports frustrate attackers because they provide so little information. Sometimes they respond with ICMP error messages such as type 3 code 13 (destination unreachable: communication administratively prohibited), but filters that simply drop probes without responding are far more common. This forces Nmap to retry several times just in case the probe was dropped due to network congestion rather than filtering. This slows down the scan dramatically.'] = 'Nmap nevar noteikt, vai ports ir atvērts, jo pakešu filtrēšana neļauj tā zondēm sasniegt portu. Filtrēšana varētu būt no speciālas ugunsmūra ierīces, maršrutētāja noteikumiem vai saimnieka bāzētas ugunsmūra programmatūras. Šīs ostas traucē uzbrucējiem, jo sniedz tik maz informācijas. Dažreiz tie reaģē ar ICMP kļūdas ziņojumiem, piemēram, 3. tipa kodu 13 (destinācija nesasniedzama: komunikācija administratīvi aizliegta), bet filtri, kas vienkārši nomet zondes bez atbildes, ir daudz izplatītāki. Tas liek Nmap atkārtoti vairākas reizes tikai gadījumā, ja zonde tika nomesta tīkla sastrēgumu dēļ, nevis filtrēšanas dēļ. Tas krasi palēnina skenēšanu.';

$GLOBALS["lang"]['Nmap places ports in this state when it is unable to determine whether a port is open or filtered. This occurs for scan types in which open ports give no response. The lack of response could also mean that a packet filter dropped the probe or any response it elicited. So Nmap does not know for sure whether the port is open or being filtered. The UDP, IP protocol, FIN, NULL, and Xmas scans classify ports this way.'] = 'Nmap ievieto portus šajā stāvoklī, kad tas nespēj noteikt, vai ports ir atvērts vai filtrēts. Tas notiek skenēšanas tipiem, kuros atvērtie porti nesniedz atbildi. Atbildes trūkums varētu nozīmēt arī to, ka pakešu filtrs nometa zondi vai jebkādu reakciju, ko tas izraisīja. Tātad Nmap nezina, vai ports ir atvērts vai tiek filtrēts. UDP, IP protokols, FIN, NULL un Xmas skenēšana klasificē pieslēgvietas šādā veidā.';

$GLOBALS["lang"]['Nmap timing details are found on the bottom of this linked page'] = 'Nmap laika detaļas ir atrodamas šīs saistītās lapas apakšā';

$GLOBALS["lang"]['nmis_business_service'] = 'Nmis Business Service';

$GLOBALS["lang"]['Nmis Business Service'] = 'Nmis Business Service';

$GLOBALS["lang"]['nmis_customer'] = 'Nmis klients';

$GLOBALS["lang"]['Nmis Customer'] = 'Nmis klients';

$GLOBALS["lang"]['nmis_group'] = 'Nmis grupa';

$GLOBALS["lang"]['Nmis Group'] = 'Nmis grupa';

$GLOBALS["lang"]['nmis_manage'] = 'Nmis Manage';

$GLOBALS["lang"]['Nmis Manage'] = 'Nmis Manage';

$GLOBALS["lang"]['nmis_name'] = 'Nmis nosaukums';

$GLOBALS["lang"]['Nmis Name'] = 'Nmis nosaukums';

$GLOBALS["lang"]['nmis_notes'] = 'Nmis piezīmes';

$GLOBALS["lang"]['Nmis Notes'] = 'Nmis piezīmes';

$GLOBALS["lang"]['nmis_poller'] = 'Nmis Poller';

$GLOBALS["lang"]['Nmis Poller'] = 'Nmis Poller';

$GLOBALS["lang"]['nmis_poller_uuid'] = 'Nmis Poller Uuid';

$GLOBALS["lang"]['Nmis Poller Uuid'] = 'Nmis Poller Uuid';

$GLOBALS["lang"]['nmis_role'] = 'Nmis loma';

$GLOBALS["lang"]['Nmis Role'] = 'Nmis loma';

$GLOBALS["lang"]['No'] = 'Nē';

$GLOBALS["lang"]['No Devices Returned'] = 'Nav atgriezta neviena ierīce';

$GLOBALS["lang"]['No Google Maps API Key present, you will not be able to display the map.'] = 'Nav Google Maps API Atslēga klāt, jūs nevarēsiet parādīt karti.';

$GLOBALS["lang"]['No License for Professional or Enterprise'] = 'Nav licences profesionāliem vai uzņēmumiem';

$GLOBALS["lang"]['No Results'] = 'Nav rezultātu';

$GLOBALS["lang"]['No data in License Key'] = 'Nav datu Licenču atslēgā';

$GLOBALS["lang"]['No database upgrade required at this time.'] = 'Šajā laikā nav nepieciešama datubāzes atjaunināšana.';

$GLOBALS["lang"]['No devices are in the database.'] = 'Datubāzē nav ierīču.';

$GLOBALS["lang"]['Node'] = 'Mezgls';

$GLOBALS["lang"]['None'] = 'Nav';

$GLOBALS["lang"]['Norfolk Island'] = 'Norfolkas sala';

$GLOBALS["lang"]['Normal'] = 'Normāls';

$GLOBALS["lang"]['Northern Mariana Islands'] = 'Ziemeļu Marianas salas';

$GLOBALS["lang"]['Norway'] = 'Norvēģija';

$GLOBALS["lang"]['Norwegian'] = 'Latviešu';

$GLOBALS["lang"]['Not Applicable'] = 'Nav piemērojams';

$GLOBALS["lang"]['Not Checked'] = 'Nav pārbaudīts';

$GLOBALS["lang"]['Not Equals'] = 'Nav vienāds';

$GLOBALS["lang"]['Not In'] = 'Nav iekšā';

$GLOBALS["lang"]['Not Like'] = 'Nekā';

$GLOBALS["lang"]['Not Set'] = 'Nav iestatīts';

$GLOBALS["lang"]['Not every computer will be able to successfully complete a benchmark. We have seen in some fail in testing for reasons beyond our control. The logs should help point you in the right direction for these items.'] = 'Ne katrs dators spēs veiksmīgi pabeigt etalonu. Mēs esam pieredzējuši, ka daži no mums nekontrolējamu iemeslu dēļ nav izturējuši pārbaudi. Žurnāliem vajadzētu palīdzēt norādīt jums pareizajā virzienā šiem priekšmetiem.';

$GLOBALS["lang"]['Not in the (comma seperated) list'] = 'Nav (comma seperated) sarakstā';

$GLOBALS["lang"]['Not normally used. If set, this requires the device to have an open port (as per Scan Options) to be considered responding. A MAC address, arp response or ping response is not considered sufficient to be considered responding. Useful if a router or firewall between the Open-AudIT server and target IP is responding to port scans on the IPs behalf.'] = 'parasti neizmanto. Ja ieslēgts, ierīcei jābūt atvērtam portam (kā katrai skenēšanas opcijai), lai to uzskatītu par atbildi. MAC adresi, arp atbildi vai ping atbildi neuzskata par pietiekamu, lai uzskatītu, ka ir atbilde. Noderīga, ja maršrutētājs vai ugunsmūris starp Open-AudIT serveri un mērķa IP atbild uz portu skenēšanu IP vārdā.';

$GLOBALS["lang"]['Note'] = 'Piezīme';

$GLOBALS["lang"]['Note - Selecting a parent will automatically provide access to its children (although it wont be shown here).'] = 'Piezīme - Vecāka izvēle automātiski nodrošinās piekļuvi saviem bērniem (lai gan šeit tas netiks parādīts).';

$GLOBALS["lang"]['Note that the 100 device Enterprise license does not include support.'] = 'Ņemiet vērā, ka 100 ierīces Enterprise licence neietver atbalstu.';

$GLOBALS["lang"]['Note, you may need to make the script executable with'] = 'Piezīme, jums var būt nepieciešams padarīt skriptu izpildāmu ar';

$GLOBALS["lang"]['Notes'] = 'Piezīmes';

$GLOBALS["lang"]['notes'] = 'Piezīmes';

$GLOBALS["lang"]['Notice'] = 'Paziņojums';

$GLOBALS["lang"]['notin'] = 'Notīns';

$GLOBALS["lang"]['Notin'] = 'Notīns';

$GLOBALS["lang"]['November'] = 'Novembris';

$GLOBALS["lang"]['Now for the Subscription ID, click All Services, Subscriptions and copy it.'] = 'Tagad abonēšanas ID, noklikšķiniet uz visiem Pakalpojumiem, abonēšana un kopēt to.';

$GLOBALS["lang"]['Now we need to provide the Azure Active Directory application access to your subscription.<br><br>Click on Resource Groups and then the resource group you would like your Azure Active Directory Application to have access to.<br><br>Click Add. The role should be Contributor and then search for the app (Open-AudIT). Then click Save.<br><br>Now the application has access to the subscription, so we can make API calls. The API calls will be requested on behalf of the application, not your user.'] = 'Tagad mums ir nepieciešams, lai nodrošinātu Azure Active Directory pieteikumu piekļuvi jūsu abonementu.<br/><br/>Klikšķiniet uz resursu grupām un resursu grupu, kurai vēlaties piekļūt jūsu Azure Active Directory programmai.<br/><br/>Noklikšķiniet uz Add. Šai lomai vajadzētu būt atbalstītājam un pēc tam meklēt lietotni (Open-AudIT). Tad noklikšķiniet uz Saglabāt.<br/><br/>Tagad aplikācijai ir piekļuve abonēšanai, tāpēc varam veikt API zvanus. API zvani tiks pieprasīti lietojumprogrammas vārdā, nevis jūsu lietotāja vārdā.';

$GLOBALS["lang"]['nvd_json'] = 'Nvd Json';

$GLOBALS["lang"]['Nvd Json'] = 'Nvd Json';

$GLOBALS["lang"]['ORDER BY'] = 'ORDER BY';

$GLOBALS["lang"]['OS'] = 'OS';

$GLOBALS["lang"]['OS Families'] = 'OS ģimenes';

$GLOBALS["lang"]['OS Family'] = 'OS ģimene';

$GLOBALS["lang"]['OS Group'] = 'OS grupa';

$GLOBALS["lang"]['OUTPUTS'] = 'REZULTĀTI';

$GLOBALS["lang"]['oae_manage'] = 'Oae pārvaldīšana';

$GLOBALS["lang"]['Oae Manage'] = 'Oae pārvaldīšana';

$GLOBALS["lang"]['object_ident'] = 'Objekta Atkāpe';

$GLOBALS["lang"]['Object Ident'] = 'Objekta Atkāpe';

$GLOBALS["lang"]['Obtain top management support'] = 'Iegūt augstākās vadības atbalstu';

$GLOBALS["lang"]['October'] = 'Oktobris';

$GLOBALS["lang"]['Offset'] = 'Nobīde';

$GLOBALS["lang"]['Okta'] = 'Okta';

$GLOBALS["lang"]['Oman'] = 'Omāna';

$GLOBALS["lang"]['omk_uuid'] = 'Omk Uuid';

$GLOBALS["lang"]['Omk Uuid'] = 'Omk Uuid';

$GLOBALS["lang"]['On'] = 'On';

$GLOBALS["lang"]['On Windows, Open-AudIT uses WMI as it is primary method of auditing. Windows has a notorious reputation where remote WMI is concerned. It tends to either <i>just work</i> or some mystery item on the target requires changing. If you are experiencing difficulty auditing remote Windows PCs, we have created a script called test_windows_client.vbs. You can run this script <strong>locally</strong> on the machine in question, after signing on as the user that is used by Open-AudIT to perform the audit. The script makes <strong>no changes</strong> to the target devices. It checks most (not all) of the items below and generates PASS, FAIL and INFO tags for various properties. NOTE - If your target system is being audited correctly, you should not change any settings. Some of the below do not exist on Windows PCs that are able to be audited and some do exist. Only change settings if your discoveries on particular PCs are not working as intended.'] = 'Windows Open-AudIT izmanto WMI, jo tā ir primārā revīzijas metode. Windows ir bēdīgi slavena reputācija attiecībā uz attālo WMI. Tas mēdz vai nu <i>tikai darbs</i> vai kādu noslēpums posteni uz mērķa nepieciešams mainīt. Ja Jums ir grūtības auditēt tālvadības Windows PC, mēs esam radījuši skriptu sauc test_windows_client.vbs. Jūs varat palaist šo skriptu <strong>lokāli</strong> uz attiecīgās iekārtas, pēc parakstīšanas kā lietotājs, ko izmanto Open-AudIT audita veikšanai. Skripts veido <strong>bez izmaiņām</strong> uz mērķa ierīcēm. Tas pārbauda lielāko daļu (ne visus) no zemāk minētajiem priekšmetiem un ģenerē PASS, FAIL un INFO marķējumus dažādām īpašībām. PIEZĪME - Ja mērķa sistēma tiek pārbaudīta pareizi, jūs nedrīkstat mainīt iestatījumus. Daži no zemāk minētajiem nav uz Windows PC, kas ir iespējams revidēt, un daži pastāv. Mainīt iestatījumus tikai tad, ja jūsu atklājumi konkrētos datoros nedarbojas kā paredzēts.';

$GLOBALS["lang"]['On the Tasks List page, click the <i>Add New</i> button to configure a task.'] = 'Uzdevumu saraksta lapā, noklikšķiniet uz <i>Pievienot jaunu</i> poga darba konfigurēšanai.';

$GLOBALS["lang"]['On the field <i>Match String</i> you should provide the name of the software that you want to track. You can use the percent sign (%) as a wildcard in where required.'] = 'Laukā <i>Atbilstoša virkne</i> jums vajadzētu sniegt nosaukumu programmatūru, kuru vēlaties izsekot. Jūs varat izmantot procentu zīmi (%) kā zvaigznīti, kur nepieciešams.';

$GLOBALS["lang"]['On the next page you will be able to select Access Keys and see your key or create a new key.'] = 'Nākamajā lapā jūs varēsiet izvēlēties Piekļuves atslēgas un redzēt jūsu atslēgu vai izveidot jaunu atslēgu.';

$GLOBALS["lang"]['On the target Windows PC, run the DCOM utility and verify (or set) the below attributes. Start -> Run, Enter DCOMCNFG and press OK. This will open the DCOMCNFG window.'] = 'Uz mērķa Windows PC, palaist DCOM utilītprogrammas un pārbaudīt (vai iestatīt) zemāk norādītos atribūtus. Sākums -> Run, ievadiet DCOMCNFG un nospiediet OK. Tas atvērs DCOMCNFG logu.';

$GLOBALS["lang"]['On the top right (underneath the menu bar) you will see several buttons. These allow you to select another dashboard, set the current dashboard as your homepage (if it is not already) and edit the current dashboard (if you have permission).'] = 'Augšējā labajā pusē (zem izvēlnes joslas) jūs redzēsiet vairākas pogas. Tie ļauj izvēlēties citu paneļa, iestatīt pašreizējo paneļa kā jūsu mājas lapā (ja tas nav jau) un rediģēt pašreizējo paneļa (ja jums ir atļauja).';

$GLOBALS["lang"]['On-Premise, Not Cloud'] = 'Atvērt, ne mākoni';

$GLOBALS["lang"]['Once an Additional Field has been created it can be used in queries and groups just like any other attribute in the database.'] = 'Kad Papildu lauks ir izveidots, to var izmantot vaicājumos un grupās tāpat kā jebkuru citu atribūtu datubāzē.';

$GLOBALS["lang"]['Once commented out, your certificate will be validated, but may also fail this validation if you are using self-signed certificates and have not configured your server correctly.'] = 'Pēc komentēšanas jūsu sertifikāts tiks apstiprināts, bet tas var arī neizdoties, ja izmantojat pašparakstītus sertifikātus un neesat pareizi konfigurējis jūsu serveri.';

$GLOBALS["lang"]['Once the script has run on a target, should the script delete itself.'] = 'Kad skripts ir darbināts uz mērķa, ja skripts izdzēst sevi.';

$GLOBALS["lang"]['Once those initial queries (snmp, ssh, wmi) are complete, if the device is a supported by the audit scripts (Windows, Linux, OSX, AIX, HP-UX, Solaris and ESXi), the correct audit script will be copied to the target and executed. The audit script will self delete upon completion. The result will be stored on the target machine as an XML file. The Open-AudIT server will then retrieve the result file for processing and delete the result file on the target. The location the audit script is copied to on the target device (at least for SSH audits) is configurable by editing the discovery_linux_script_directory config item. By default it is set to /tmp/. This may need changing if /tmp has noexec set. The result file is then processed and the device details updated within Open-AudIT.'] = 'Kad šie sākotnējie pieprasījumi (snmp, ssh, wmi) ir pabeigti, ja ierīci atbalsta audita skripti (Windows, Linux, OSX, AIX, HP-UX, Solaris un ESXi), pareizais audita skripts tiks nokopēts līdz mērķim un izpildīts. Revīzijas skripts pats izdzēst pēc pabeigšanas. Rezultāts tiks saglabāts mērķa iekārtā kā XML fails. Open- AudIT serveris pēc tam izgūs rezultātu failu apstrādei un izdzēsīs mērķa rezultātu failu. Revīzijas skripta kopētā atrašanās vieta uz mērķa ierīces (vismaz SSH auditiem) ir konfigurējama, rediģējot meklēšanas_linux_script_directory konfigurācijas ierakstu. Pēc noklusējuma tas ir iestatīts uz / tmp/. Tas var būt nepieciešams mainīt, ja / tmp ir noexec iestatīts. Rezultātu fails tiek apstrādāts un ierīces detaļas atjauninātas Open-AudIT.';

$GLOBALS["lang"]['Once you click the execute button, Open-AudIT will spawn a process to initiate the discovery and return the user to the discovery details page. The newly spawned process takes the configured discovery options and executes Nmap commands to determine the initial list of IP addresses to be scanned (or queries Active Directory if that type is used). Each IP to be scanned is placed into a queue. Once the initial process has completed (and there are IPs to be scanned in the queue) a number of processes will be spawned to further scan each IP in parallel. This number of processes is configurable in the configuration, edit the attribute <i>queue_limit</i>. By default this is set to 20.'] = 'Kad noklikšķināsiet uz pogas izpildīt, Open-AudIT radīs procesu, lai uzsāktu atklājumu un atgrieztu lietotāju atklāšanas detaļas lapā. Jaunizveidotais process aizņem konfigurētās meklēšanas opcijas un izpilda Nmap komandas, lai noteiktu sākotnējo skenējamo IP adrešu sarakstu (vai vaicājumus Active Directory, ja šis tips tiek izmantots). Katrs skenējamais IP tiek ievietots rindā. Kad sākotnējais process būs pabeigts (un rindā tiks skenēti IP), tiks radīta virkne procesu, lai paralēli turpinātu katra IP skenēšanu. Šis procesu skaits konfigurējams konfigurācijā, rediģēt atribūtu <i>rindas_robeža</i>. Pēc noklusējuma šis ir iestatīts uz 20.';

$GLOBALS["lang"]['Once you have chosen your devices to edit, click the pencil button on the top right of the table.'] = 'Kad esat izvēlējies ierīces rediģēt, noklikšķiniet uz zīmuli pogu augšējā labajā galda.';

$GLOBALS["lang"]['Once you have done this, Open-AudIT will attempt to verify your user logon details against the configured Auth Method. If the user has valid credentials and <code>use_authorisation</code> is set, Open-AudIT will ask for the list of groups that the user belongs to. If the user is in the corresponding groups for Open-AudIT Roles and Orgs, those Roles and Orgs will be applied to that user.'] = 'Kad esat to izdarījis, Open-AudIT mēģinās pārbaudīt lietotāja pieteikšanās detaļas pret konfigurēto Auth metodi. Ja lietotājam ir derīgi dati un <code>use_authorisation</code> ir iestatīts, Open- AudIT lūgs sarakstu ar grupām, kurām lietotājs pieder. Ja lietotājs ir attiecīgajās grupās Open-AudIT lomas un Orgs, šīs lomas un Orgs tiks piemēroti šim lietotājam.';

$GLOBALS["lang"]['Once you have generated a Baseline Definition you can schedule it to be run against a specified group of devices.'] = 'Kad esat radījis Baseline Definition jūs varat plānot to palaist pret norādīto ierīču grupu.';

$GLOBALS["lang"]['Once you have those items, in Open-AudIT Enterprise you can go to menu -> Discover -> Clouds -> Create Clouds, select the <i>Amazon AWS</i> type and paste them in. Done.'] = 'Kad jums ir šīs preces, Open-AudIT Uzņēmums, uz kuru var doties ēdienkartē -> Atklāj -> Mākoņi -> Izveidot Mākoņi, izvēlieties <i>Amazon AWS</i> ielīmējiet tos. Sarunāts.';

$GLOBALS["lang"]['Once you have those items, in Open-AudIT Enterprise you can go to menu -> Discover -> Clouds -> Create Clouds, select the <i>Microsoft Azure</i> type and paste them in. Done.'] = 'Kad jums ir šīs preces, Open-AudIT Uzņēmums, uz kuru var doties ēdienkartē -> Atklāj -> Mākoņi -> Izveidot Mākoņi, izvēlieties <i>Microsoft Azure</i> ielīmējiet tos. Sarunāts.';

$GLOBALS["lang"]['Once you have your cloud credentials, it is merely a matter of creating a new cloud and running the discovery - or scheduling first/future discoveries. Make sure you also have the credentials required to log on to your cloud machines, and it is all done for you just like a regular discovery. Credentials for your cloud'] = 'Kad jums ir jūsu mākonis akreditācijas, tas ir tikai jautājums par radot jaunu mākoni un vadīt atklājumu - vai plānošana pirmais / nākotnes atklājumi. Pārliecinieties, ka jums ir arī dati, kas nepieciešami, lai pieteiktos uz jūsu mākoņa mašīnas, un tas viss tiek darīts, lai jūs tāpat kā regulāru atklājumu. Mākoņa pamatojums';

$GLOBALS["lang"]['One of <code>3x2</code>, <code>4x2</code>, <code>4x3</code> or <code>4x4</code>.'] = 'Viens no <code>3x2</code>, <code>4x2</code>, <code>4x3</code> vai <code>4x4</code>.';

$GLOBALS["lang"]['One of Campus Area Network, Cloud Network, Enterprise Private Network, Home Area Network, Local Area Network, Metropolitan Area Network, Passive Optical Local Area Network, Personal Area Network, Storage-Area Network, System-Area Network, Virtual Private Network, Wide Area Network, Wireless Local Area Network.'] = 'Viens no Campus Area Network, Cloud Network, Enterprise Private Network, Home Area Network, Local Area Network, Metropolitan Area Network, Passive Optic Area Network, Personal Area Network, Storage-Area Network, System-Area Network, Virtual Private Network, Wide Area Network, Wireless Local Area Network.';

$GLOBALS["lang"]['One of Development, Disaster Recovery, Evaluation, Pre-Production, Production, Testing, Training, User Acceptance Testing'] = 'Viens no attīstības, katastrofu seku novēršanas, novērtēšanas, pirmsražošanas, ražošanas, testēšanas, apmācības, lietotāju pieņemšanas testēšana';

$GLOBALS["lang"]['One of allocated, delegated, planning, reserved, unallocated, unknown, unmanaged. Defaults to allocated.'] = 'Viens no iedalītajiem, deleģētajiem, plānošanas, rezervētajiem, nepiešķirtajiem, nezināmajiem, neapsaimniekotajiem. Piešķirtās saistības.';

$GLOBALS["lang"]['One of either <code>active directory</code> or <code>openldap</code>.'] = 'Viens no <code>active directory</code> vai <code>openldap</code>.';

$GLOBALS["lang"]['One of: antivirus, backup, firewall, approved, banned, ignored or other.'] = 'Viens no: antivīruss, dublējums, ugunsmūris, apstiprināts, aizliegts, ignorēts vai cits.';

$GLOBALS["lang"]['One other item to be careful of - make sure you use the hostname (or fqdn) of your LDAP Server that matches what is in the certificate (not just the LDAP Servers IP address) when creating the LDAP entry in Open-AudIT.'] = 'Vēl viens punkts, no kura jāuzmanās - pārliecinieties, ka izmantojat LDAP datora nosaukumu (vai fqdn) Serveris, kas atbilst sertifikātā esošajam (ne tikai LDAP serveru IP adresei), izveidojot LDAP ierakstu Open-AudIT.';

$GLOBALS["lang"]['Online Documentation'] = 'Dokumentācija tiešsaistē';

$GLOBALS["lang"]['Open'] = 'Atvērt';

$GLOBALS["lang"]['Open Data'] = 'Atvērtie dati';

$GLOBALS["lang"]['Open Source'] = 'Atvērt avotu';

$GLOBALS["lang"]['Open-AudIT'] = 'Open- Audit';

$GLOBALS["lang"]['Open-AudIT Community source code is available on GitHub. You are encouraged to inspect any code you have concerns about, and because it is open source - you are also encouraged to ask us about any issues you have or report any findings. We are always more than happy to accept code contributions, vulnerability reports, or even simple questions. We are here to help.<br><br>The audit scripts themselves (Windows, Linux, MacOS, et al) are deliberately written in readable native shell script (VBScript for Windows, Bash for *nix). You can see exactly what commands are run. You can remove any commands you feel you do not need. You can ask a third party to inspect the code for you and (if you want to) report any findings.<br><br>Open-AudIT Enterprise performs the add-on commercial functions for Open-AudIT Community. It is included as a single compiled file with no external dependencies. Where Enterprise itself performs the function(s), if you are concerned with any issues Firstwave is happy to work through them with you - just ask! Try that with another commercial software vendor!'] = 'Open- Audit Kopienas izcelsmes kods ir pieejams GitHub. Jūs tiekat mudināts pārbaudīt jebkuru kodu, par kuru jums ir bažas, un tāpēc, ka tas ir atvērts avots - jūs esat arī aicināti jautāt mums par visiem jautājumiem, kas jums ir, vai ziņot par visiem konstatējumiem. Mēs vienmēr esam vairāk nekā priecīgi pieņemt koda ziņojumus, neaizsargātības ziņojumus vai pat vienkāršus jautājumus. Mēs esam šeit, lai palīdzētu.<br/><br/>Paši revīzijas skripti (Windows, Linux, MacOS, et al) tiek apzināti rakstīti lasāmā dzimtā čaulas skriptā (VBScript Windows, Bash for *nix). Jūs varat redzēt, tieši kādas komandas tiek palaistas. Jūs varat noņemt jebkuras komandas, kas jums liekas jums nav nepieciešams. Jūs varat lūgt trešajai personai pārbaudīt kodu jums un (ja jūs vēlaties) ziņot par jebkuru konstatējumu.<br/><br/>Open- Audit Uzņēmums veic papildu komerciālās funkcijas Open-AudIT kopienai. Tas ir iekļauts kā viens kompilēts fails bez ārējām atkarībām. Ja uzņēmums pats veic funkciju(-as), ja jums ir bažas par kādu jautājumu Firstwave ir priecīgi strādāt caur viņiem ar jums - tikai lūgt! Izmēģiniet, ka ar citu komerciālo programmatūras pārdevējs!';

$GLOBALS["lang"]['Open-AudIT Device Selection'] = 'Open- AudIT ierīces izvēle';

$GLOBALS["lang"]['Open-AudIT Enterprise has the ability to choose from a pre-defined list of discovery scan options and also to customise individual options per discovery.'] = 'Open- Audit Uzņēmumam ir iespēja izvēlēties no iepriekš noteikta meklēšanas skenēšanas iespēju saraksta, kā arī pielāgot atsevišķas iespējas katram atklājumam.';

$GLOBALS["lang"]['Open-AudIT Enterprise. High-scale flexible discovery and audit solution for large networks. All the features of Professional plus: Baselines, File Auditing, Cloud Discovery, Rack Management, Configurable Role Based Access Control including Active Directory and LDAP.'] = 'Open-AudIT Enterprise. Plaša mēroga elastīgu atklāšanas un revīzijas risinājumu lieliem tīkliem. Visas funkcijas Professional plus: Bāzes līnijas, File Auditing, Cloud Discovery, Rack Management, Configurable Role Based Access Control, ieskaitot Active Directory un LDAP.';

$GLOBALS["lang"]['Open-AudIT Field Name'] = 'Atvērt- AudIT lauka nosaukums';

$GLOBALS["lang"]['Open-AudIT Licenses'] = 'Open- AudIT licences';

$GLOBALS["lang"]['Open-AudIT Options'] = 'Open- AudIT opcijas';

$GLOBALS["lang"]['Open-AudIT Professional and Enterprise include Enhanced Reporting features, including time-based, historical, and muti-query based reporting features in multiple formats.'] = 'Open-AudIT Professional un Enterprise ietver uzlabotas ziņošanas funkcijas, tostarp uz laiku balstītas, vēsturiskas un muti-query balstītas ziņošanas funkcijas vairākos formātos.';

$GLOBALS["lang"]['Open-AudIT Professional has the ability to choose from a pre-defined list of discovery scan options, per discovery.'] = 'Open- Audit Profesional ir iespēja izvēlēties no iepriekš noteikta saraksta atklājumu skenēšanas iespējas, uz vienu atklājumu.';

$GLOBALS["lang"]['Open-AudIT Professional. The world\\'] = 'Open-AudIT Professional. Pasaule\\';

$GLOBALS["lang"]['Open-AudIT Professional. The worlds most flexible network discovery and audit solution. All the features of Community plus: Interactive Dashboards, Geographical Maps, Scheduled Time-based or Historical Reporting, Commercial Support.'] = 'Open-AudIT Professional. Pasaulē elastīgākais tīkla atklāšanas un revīzijas risinājums. Visas iezīmes Community plus: Interactive Dashboards, Ģeogrāfiskās kartes, Plānota Laika balstītas vai Vēsturiskas atskaites, Komerciāls atbalsts.';

$GLOBALS["lang"]['Open-AudIT can be configured to use LDAP servers (Microsoft Active Directory and/or OpenLDAP) to authenticate and authorize a user and in addition, to create a user account in Open-AudIT using assigned roles and orgs based on LDAP group membership. It can also use'] = 'Atvērts IT var konfigurēt, lai lietotu LDAP serverus (Microsoft Active Directory un/vai OpenLDAP), lai autentificētu un pilnvarotu lietotāju un papildus, lai izveidotu lietotāja kontu Open-AudIT, izmantojot piešķirtās lomas un org, balstoties uz LDAP grupas dalību. Tas var arī izmantot';

$GLOBALS["lang"]['Open-AudIT can be run on your server in your data center. It does not need access to the internet at all. Even the installation on Linux where we use the distribution package manager for our prerequisites can be negated by you using an in-house and security team-approved package repository.<br><br>Open-AudIT does not store any of your data in the cloud. Even licensing information can be provided without having to access the internet from the Open-AudIT server.<br><br>Sure, it is easier to allow it to access the internet to download packages (including security fixes) for your distribution, but that is up to you and your security policies. Open-AudIT does not need the internet.'] = 'Atvērts IT var palaist uz jūsu servera jūsu datu centrā. Tai vispār nav vajadzīga piekļuve internetam. Pat instalācija uz Linux, kur mēs izmantojam distribūcijas pakotņu pārvaldnieks mūsu priekšnoteikumiem var negated ar jums, izmantojot iekšējo un drošības komandas apstiprinātu paketes repozitoriju.<br/><br/>Atvērts IT neglabā nevienu no jūsu datiem mākonī. Pat licencēšanas informāciju var sniegt bez piekļuves internetam no Open-AudIT servera.<br/><br/>Protams, tas ir vieglāk ļaut piekļūt internetam lejupielādēt paketes (tostarp drošības labojumus) jūsu izplatīšanai, bet tas ir atkarīgs no jums un jūsu drošības politiku. Open-AudIT nav nepieciešams internets.';

$GLOBALS["lang"]['Open-AudIT can download, parse and use NIST CVE Vulnerability reports.'] = 'Open-AudIT var lejupielādēt, analizēt un izmantot NIST CVE neaizsargātības ziņojumus.';

$GLOBALS["lang"]['Open-AudIT can show in one of several languages. How you can improve this?'] = 'Atvērts IT var rādīt vienā no vairākām valodām. Kā to var uzlabot?';

$GLOBALS["lang"]['Open-AudIT can store information in additional fields that are associated with each device.'] = 'Atvērts IT var glabāt informāciju papildu laukos, kas ir saistīti ar katru ierīci.';

$GLOBALS["lang"]['Open-AudIT can use Microsoft Entra (previously known as Microsoft Azure Active Directory) as an authentication method. This means your user in Open-AudIT can click the Logon using Entra button on the logon page and use their Entra credentials to logon. That user will need to already exist within Open-AudIT (and be assigned'] = 'Open-AudIT kā autentifikācijas metodi var izmantot Microsoft Entra (iepriekš zināma kā Microsoft Azure Active Directory). Tas nozīmē, ka jūsu lietotājs Open-AudIT var noklikšķināt uz Logon, izmantojot Entra pogu uz logona lapā un izmantot to Entra akreditācijas datus, lai pieteiktos. Šim lietotājam jau būs jābūt atvērtam OudIT sistēmā (un tam būs';

$GLOBALS["lang"]['Open-AudIT can use OKTA as an authentication method. This means your user in Open-AudIT can click the Logon using OKTA button on the logon page and use their OKTA credentials to logon. That user will need to already exist within Open-AudIT (and be assigned Roles and Orgs), but will not need to remember a separate set of logon credentials.'] = 'Open- AudIT var izmantot OKTA kā autentifikācijas metodi. Tas nozīmē, ka jūsu lietotājs Open-AudIT var noklikšķināt uz Logon, izmantojot OKTA pogu uz logona lapā un izmantot to OKTA akreditācijas datus, lai pieteiktos. Šim lietotājam būs nepieciešams jau eksistēt Open-AudIT (un jāpiešķir lomas un Orgs), bet nebūs nepieciešams atcerēties atsevišķu kopumu logon akreditācijas.';

$GLOBALS["lang"]['Open-AudIT comes with many queries inbuilt. If you require a specific query and none of the pre-packaged queries fit your needs, it is quite easy to create a new one and load it into Open-AudIT for running.'] = 'Open-AudIT nāk ar daudziem jautājumiem iebūvēta. Ja jums ir nepieciešams konkrēts vaicājums un neviens no fasētajiem vaicājumiem neatbilst jūsu vajadzībām, ir diezgan viegli izveidot jaunu un ielādēt to Open-AudIT darbībai.';

$GLOBALS["lang"]['Open-AudIT has a JSON Restful API to be used both in the web interface and via JSON requests.'] = 'Open-AudIT ir JSON Restful API izmantošanai gan tīmekļa saskarnē, gan caur JSON pieprasījumiem.';

$GLOBALS["lang"]['Open-AudIT has a granular permissions system to determine what a user within Open-AudIT can do, and the items he can do it to. Open-AudIT can be entirely self-contained, or use Active Directory or OpenLDAP for authentication and/or authorization.<br><br>It is entirely up to the administrator of Open-AudIT how they would like the Role Based Access Control to work.'] = 'Atvērts IT ir granulveida atļauju sistēma, lai noteiktu, ko lietotājs Open-AudIT ietvaros var darīt, un priekšmetus, ko viņš var darīt to. Open-AudIT var būt pilnībā autonomi, vai izmantot Active Directory vai OpenLDAP autentifikācijai un/vai autorizācijai.<br/><br/>Tas ir pilnībā atkarīgs no Open-AudIT administratora, kā viņi vēlētos, lai darbotos uz lomu balstīta piekļuves kontrole.';

$GLOBALS["lang"]['Open-AudIT has a powerful change detection engine. Any device attributes that are added, removed or changed will be detected and stored. These changes can be reported upon and the relevant data confirmed as to what was expected from your company change and release process.<br><br>When a device is audited, attributes are divided into sections which correspond to tables in the database.<br><br>Each device (computer, router, printer, et al) has an entry in the <code>devices</code> table. Each entry in the devices table has an <code>id</code> column. This value is unique - it is an auto-incrementing id.<br><br>When the audit result is processed, each item in each section has its audit result compared to what is in the database.<br><br>For each section, if the key columns (see below table) contain the identical values, it is considered already installed and has its <code>last_seen</code> attribute updated. No change_log entry is created.<br><br>If any of the key columns do not match, it is considered a new attribute and is inserted. A <code>change_log</code> entry is created if the device had other attributes already present in the table.<br><br>At the completion of the audit processing, any database items that have not been updated (or inserted) are considered to not be present. The <code>current</code> attribute for this item is set to <i>n</i> and a change_log entry is generated.<br><br>So, we can determine if something is currently installed - the current column is <i>y</i>.<br><br>We can determine when something was initially detected - the <i>first_seen</i>.<br><br>We can determine if something was installed after the initial audit - first seen will be different in the component and device tables.<br><br>We can determine if something is not currently installed, but previously was - current = <i>n</i>.<br><br>We can determine the last time we detected an item - last_seen.<br><br>At any given point, we can determine what was on a system - by using the audit_log table and selecting the relevant components based on first_seen and last_seen.<br><br>Each section and its matching key columns are below.<br><br>NOTE - There are some exceptions as detailed below.<br><br>*1 - For network cards, if the computer is a VMware Esx machine it also uses the net_index and connection columns.<br><br>*2 - For partitions, f the computer is an AIX machine, we use the partition name.'] = 'Atvērts IT ir spēcīgs izmaiņu noteikšanas dzinējs. Jebkurš ierīces atribūts, kas tiek pievienots, noņemts vai mainīts, tiks atklāts un saglabāts. Par šīm izmaiņām var ziņot un apstiprināt attiecīgos datus par to, kas tika gaidīts no jūsu uzņēmuma maiņas un izlaides procesa.<br/><br/>Kad ierīcei tiek veikts audits, atribūti tiek iedalīti sadaļās, kas atbilst datubāzes tabulām.<br/><br/>Katra ierīce (dators, maršrutētājs, printeris, et al) ir ieraksts <code>devices</code> tabula. Katrs ieraksts ierīču tabulā ir <code>id</code> sleja. Šī vērtība ir unikāla - tas ir auto-inkrementējoša id.<br/><br/>Kad revīzijas rezultāti tiek apstrādāti, katra punkta katrā sadaļā ir savs revīzijas rezultāts salīdzinājumā ar to, kas ir datubāzē.<br/><br/>Ja katrai sadaļai galvenajās slejās (sk. tabulu) ir identiskas vērtības, to uzskata par jau uzstādītu un tai ir <code>last_seen</code> atribūts atjaunināts. Nav izveidots izmaiņu_log ieraksts.<br/><br/>Ja kāda no atslēgas kolonnām nesakrīt, tā tiek uzskatīta par jaunu atribūtu un tiek ievietota. A <code>change_log</code> ieraksts ir izveidots, ja ierīcei jau bija citi atribūti tabulā.<br/><br/>Pabeidzot revīzijas apstrādi, uzskata, ka visi datubāzes elementi, kas nav atjaunināti (vai iekļauti), nav iekļauti. E ir o pa s <code>current</code> šīs preces atribūts ir iestatīts uz <i>n</i> un tiek ģenerēts pārmaiņu_log ieraksts.<br/><br/>Tātad, mēs varam noteikt, vai kaut kas ir instalēts - pašreizējā kolonna ir <i>y</i>.<br/><br/>Mēs varam noteikt, kad kaut kas tika sākotnēji konstatēts - <i>pirmais_redzētais</i>.<br/><br/>Mēs varam noteikt, vai kaut kas tika uzstādīts pēc sākotnējā audita - pirmo reizi redzams būs atšķirīgs detaļu un ierīču tabulās.<br/><br/>Mēs varam noteikt, vai kaut kas pašlaik nav uzstādīts, bet iepriekš bija - pašreizējais = <i>n</i>.<br/><br/>Mēs varam noteikt pēdējo reizi, kad mēs atklājām objektu - last_seen.<br/><br/>Jebkurā brīdī, mēs varam noteikt, kas bija sistēmā - izmantojot audit_log tabulu un izvēloties attiecīgos komponentus, pamatojoties uz first_seed un last_veen.<br/><br/>Katra sadaļa un tās atbilstošās atslēgas slejas ir zemāk.<br/><br/>PIEZĪME - Ir daži izņēmumi, kā sīkāk aprakstīts zemāk.<br/><br/>*1 - Tīkla kartēm, ja dators ir VMware Esx mašīna, tas izmanto arī tīkla_indeksu un savienojuma kolonnas.<br/><br/>*2 - Par nodalījumiem, f dators ir AIX mašīna, mēs izmantojam nodalījumu nosaukumu.';

$GLOBALS["lang"]['Open-AudIT is a program designed to track and report on your IT and related assets details and configuration. Open-AudIT can tell <i>What is On Your Network?</i>, how it is configured and if there have been any changes. Open-AudIT delivers a sleek, flexible and easy to use platform for device discovery, IT auditing and inventory management automation straight out of the box.'] = 'Open-AudIT ir programma, kas izstrādāta, lai izsekotu un ziņotu par jūsu IT un saistīto aktīvu informāciju un konfigurāciju. Open- AudIT var pateikt <i>Kas ir Jūsu Tīklā?</i>, kā tas ir konfigurēts un ja ir bijušas izmaiņas. Open-AudIT nodrošina elastīgu, elastīgu un viegli izmantojamu platformu ierīces atklāšanai, IT audita un inventāra pārvaldības automatizācijai tieši no kastes.';

$GLOBALS["lang"]['Open-AudIT makes it easy to edit the attributes of multiple devices at once.'] = 'Atvērts IT ļauj viegli rediģēt vairāku ierīču atribūtus uzreiz.';

$GLOBALS["lang"]['Open-AudIT needs specific directory permissions to be able to create files, upload results, etc. Please set as below.'] = 'Atvērts IT ir nepieciešamas īpašas direktoriju atļaujas, lai varētu izveidot failus, augšupielādēt rezultātus, utt. Lūdzu, norādiet zemāk.';

$GLOBALS["lang"]['Open-AudIT provides many built-in queries and makes it simple to create your own.'] = 'Open-AudIT nodrošina daudzus iebūvētos vaicājumus un padara to vienkārši izveidot savu.';

$GLOBALS["lang"]['Open-AudIT ships with inbuilt roles for admin, org_admin and user.<br><br>Generally, a user who is an administrator of the Open-AudIT application itself should have admin and possible org_admin roles.<br><br>A user can have multiple roles. The permission will be applied at the most permissive level - IE, if a user has the roles of user and org_admin, they will be able to create locations because org_admin grants this permission, even though the user role does not.<br><br>The admin role allows access to collections such as configuration, database, groups, ldap servers, logs, queries and roles. Global items that affect the entire application.<br><br>The org_admin role usually allows create, read, update and delete actions for any collection that contains the org_id column. Virtually all data except some of the collections mentioned above will contain an <code>org_id</code> column.<br><br>The user role generally allows read only access to all items with an org_id column.'] = 'Atvērts IT kuģi ar iebūvētām lomām admin, org_admin un lietotājs.<br/><br/>Parasti lietotājam, kurš ir Open-AudIT programmas administrators, vajadzētu būt admin un iespējamām org_admin lomām.<br/><br/>Lietotājam var būt vairākas lomas. Atļauja tiks piemērota vispielaidīgākajā līmenī - IE, ja lietotājam ir lietotāja un org_admin lomas, viņi varēs izveidot vietas, jo org_admin piešķir šo atļauju, pat ja lietotāja loma nav.<br/><br/>Admin loma ļauj piekļūt kolekcijām, piemēram, konfigurācija, datubāze, grupas, ldap serveri, žurnāli, vaicājumi un lomas. Globāli priekšmeti, kas ietekmē visu programmu.<br/><br/>Org_admin loma parasti ļauj izveidot, lasīt, atjaunināt un dzēst darbības jebkurai kolekcijai, kas satur org_id kolonnu. Praktiski visi dati, izņemot dažas no iepriekš minētajām kolekcijām, satur <code>org_id</code> sleja.<br/><br/>Lietotāja loma parasti ļauj lasīt tikai piekļuvi visiem ierakstiem ar org_id kolonnu.';

$GLOBALS["lang"]['Open-AudIT ships with inbuilt roles for admin, org_admin and user.<br><br>Generally, a user who is an administrator of the Open-AudIT application itself should have admin and possible org_admin roles.<br><br>A user can have multiple roles. The permission will be applied at the most permissive level - IE, if a user has the roles of user and org_admin, they will be able to create locations because org_admin grants this permission, even though the user role does not.<br><br>The admin role allows access to collections such as configuration, database, groups, ldap servers, logs, queries and roles. Global items that affect the entire application.<br><br>The org_admin role usually allows create, read, update and delete actions for any collection that contains the org_id column. Virtually all data except some of the collections mentioned above will contain an org_id column.<br><br>The user role generally allows read only access to all items with an org_id column.'] = 'Atvērts IT kuģi ar iebūvētām lomām admin, org_admin un lietotājs.<br/><br/>Parasti lietotājam, kurš ir Open-AudIT programmas administrators, vajadzētu būt admin un iespējamām org_admin lomām.<br/><br/>Lietotājam var būt vairākas lomas. Atļauja tiks piemērota vispielaidīgākajā līmenī - IE, ja lietotājam ir lietotāja un org_admin lomas, viņi varēs izveidot vietas, jo org_admin piešķir šo atļauju, pat ja lietotāja loma nav.<br/><br/>Admin loma ļauj piekļūt kolekcijām, piemēram, konfigurācija, datubāze, grupas, ldap serveri, žurnāli, vaicājumi un lomas. Globāli priekšmeti, kas ietekmē visu programmu.<br/><br/>Org_admin loma parasti ļauj izveidot, lasīt, atjaunināt un dzēst darbības jebkurai kolekcijai, kas satur org_id kolonnu. Gandrīz visi dati, izņemot dažas no iepriekš minētajām kolekcijām, saturēs org_id kolonnu.<br/><br/>Lietotāja loma parasti ļauj lasīt tikai piekļuvi visiem ierakstiem ar org_id kolonnu.';

$GLOBALS["lang"]['Open-AudIT ships with several pre-configured Dashboards. If you are a Professional user, you can select between two of these and set it as your default page when you logon. If you are an Enterprise user, you can not only select between the five preconfigured Dashboards, but you also have the ability to create your own.'] = 'Open-AudIT kuģi ar vairākiem iepriekš konfigurētiem Dashboards. Ja esat profesionāls lietotājs, jūs varat izvēlēties starp diviem no tiem un iestatīt to kā savu noklusējuma lapu, kad jūs piesakāties. Ja esat uzņēmuma lietotājs, jūs varat ne tikai izvēlēties starp pieciem iepriekš konfigurētajiem Dashboards, bet jums ir arī iespēja izveidot savu.';

$GLOBALS["lang"]['Open-AudIT should be installed on 64bit Windows <strong>Server</strong> systems only. Windows 10 and Windows 11 are <strong>not</strong> supported.'] = 'Open- AudIT jāuzstāda uz 64 bitu logiem <strong>Serveris</strong> tikai sistēmām. Windows 10 un Windows 11 ir <strong>nav</strong> atbalsta.';

$GLOBALS["lang"]['Open-AudIT uses Nmap in its Discovery function. Nmap probes devices for open ports. Devices ideally should respond with open for working ports. Devices often do not respond with this. The varying responses are detailed below.'] = 'Open-AudIT savā Discovery funkcijā izmanto Nmap. Nmap zondes ierīces atvērtiem portiem. Ierīcēm vislabāk būtu reaģēt ar atvērtu darba portu palīdzību. Ierīces bieži nereaģē ar šo. Atšķirīgās atbildes ir izklāstītas turpmāk.';

$GLOBALS["lang"]['Open-AudIT uses Nmap in its Discovery function. Without Nmap, Open-AudIT will not function correctly. Every Open-AudIT install assumes Nmap is installed and will also test for it on the Discovery web pages. More information about Open-AudIT and Nmap is available here'] = 'Open-AudIT savā Discovery funkcijā izmanto Nmap. Bez Nmap Open-AudIT nedarbosies pareizi. Katrs Open-AudIT instalēt pieņem Nmap ir instalēta un arī pārbaudīs to Discovery tīmekļa lapās. Plašāka informācija par Open-AudIT un Nmap pieejama šeit';

$GLOBALS["lang"]['Open-AudIT uses Nmap in its Discovery function. Without Nmap, Open-AudIT will not function correctly. Every Open-AudIT install assumes Nmap is installed and will test for it on the Discovery web pages.'] = 'Open-AudIT savā Discovery funkcijā izmanto Nmap. Bez Nmap Open-AudIT nedarbosies pareizi. Katrs Open-AudIT instalēt pieņem Nmap ir instalēta un pārbaudīs to Discovery tīmekļa lapās.';

$GLOBALS["lang"]['Open-AudIT uses credentials to access your devices. These are encrypted and stored, just as you would expect.'] = 'Atvērts IT izmanto akreditācijas datus, lai piekļūtu jūsu ierīcēm. Tie ir šifrēti un saglabāti, kā jūs gaidītu.';

$GLOBALS["lang"]['Open-AudIT was written by an English speaking Australian. Everything in the application uses English wording. However Open-AudIT has always supported multiple languages for display. These translations are not always correct, because the developers do not natively speak the language of every translation offered.<br><br>What can you do if something is not correct in the translation?'] = 'Open-AudIT sarakstīja angļu valodā runājošs austrālietis. Viss pieteikumā tiek lietots angļu valodā. Tomēr Open-AudIT vienmēr ir atbalstījis vairākas valodas displeja. Šie tulkojumi ne vienmēr ir pareizi, jo izstrādātāji nerunā valodā katru piedāvāto tulkojumu.<br/><br/>Kā rīkoties, ja tulkojumā kaut kas nav kārtībā?';

$GLOBALS["lang"]['OpenLDAP'] = 'OpenLDAP';

$GLOBALS["lang"]['OpenScap is Installed'] = 'OpenScap ir instalēts';

$GLOBALS["lang"]['Opening a Support Ticket?'] = 'Vai tiek atvērta atbalsta biļete?';

$GLOBALS["lang"]['openldap_user_dn'] = 'Openldap lietotāja Dn';

$GLOBALS["lang"]['Openldap User Dn'] = 'Openldap lietotāja Dn';

$GLOBALS["lang"]['openldap_user_membership_attribute'] = 'Openldap lietotāja dalības atribūts';

$GLOBALS["lang"]['Openldap User Membership Attribute'] = 'Openldap lietotāja dalības atribūts';

$GLOBALS["lang"]['open|filtered'] = 'Vaļēji filtrēti';

$GLOBALS["lang"]['Open|filtered'] = 'Vaļēji filtrēti';

$GLOBALS["lang"]['Operating System'] = 'Operētājsistēma';

$GLOBALS["lang"]['Operating System Family Contains'] = 'Operētājsistēmu saime satur';

$GLOBALS["lang"]['Operating Systems'] = 'Operāciju sistēmas';

$GLOBALS["lang"]['Operators'] = 'Uzņēmēji';

$GLOBALS["lang"]['optical'] = 'optiskie';

$GLOBALS["lang"]['Optical'] = 'optiskie';

$GLOBALS["lang"]['Optimized'] = 'Optimizēts';

$GLOBALS["lang"]['Option #1 - Change the data'] = 'Iespēja #1 - Mainīt datus';

$GLOBALS["lang"]['Option #2 - Change the translation file'] = '2. variants - Mainīt tulkošanas failu';

$GLOBALS["lang"]['Optional Agent Based Auditing'] = 'Fakultatīvs aģenta audits';

$GLOBALS["lang"]['Optional version as audited by Open-AudIT. Use the percent sign % as a wildcard.'] = 'Fakultatīva versija, kuras revīziju veica Open-AudIT. Izmantot procenta zīmi% kā aizstājējkarti.';

$GLOBALS["lang"]['options'] = 'Opcijas';

$GLOBALS["lang"]['Options'] = 'Opcijas';

$GLOBALS["lang"]['Options, options, options'] = 'Iespējas līgumi, iespējas līgumi, iespējas līgumi';

$GLOBALS["lang"]['Or'] = 'Vai';

$GLOBALS["lang"]['Or select from the below fields.'] = 'Vai izvēlieties no zem laukiem.';

$GLOBALS["lang"]['org_descendants'] = 'Org Deskendanti';

$GLOBALS["lang"]['Org Descendants'] = 'Org Deskendanti';

$GLOBALS["lang"]['org_id'] = 'Org ID';

$GLOBALS["lang"]['Org ID'] = 'Org ID';

$GLOBALS["lang"]['Organisation'] = 'Organizācija';

$GLOBALS["lang"]['organisation'] = 'Organizācija';

$GLOBALS["lang"]['Organisation Descendants'] = 'Organizācija';

$GLOBALS["lang"]['Organisations'] = 'Organizācijas';

$GLOBALS["lang"]['Organisations can extend and enhance the level of detail that is stored against every discovered device using custom fields and the open core allows for easy integration into CMDB, event management and ticketing systems.'] = 'Organizācijas var paplašināt un uzlabot detalizācijas līmeni, kas tiek saglabāts pret katru atklāto ierīci, izmantojot pielāgotus laukus, un atvērtais kodols ļauj viegli integrēties CMDB, notikumu vadības un biļešu sistēmas.';

$GLOBALS["lang"]['orgs'] = 'Orgas';

$GLOBALS["lang"]['Orgs'] = 'Orgas';

$GLOBALS["lang"]['Orgs Name'] = 'Orgu nosaukums';

$GLOBALS["lang"]['Orgs in Open-AudIT are a key item. A user has a primary Org as well as a list of Orgs they can access. A user combines this with a list of assigned roles that define what actions they can take on items assigned to the Orgs they have access to. The combination of a users <i>orgs</i> and <i>roles</i> define what they can and cannot do within Open-AudIT.<br><br>Most items in Open-AudIT are assigned to an Org. Devices, Locations, Networks, etc, etc.<br><br>Orgs can have child Orgs. Think of an organisational chart (tree) structure. If a user has access to a specific Org, most of the time (not always) they also have access to that Orgs descendants.'] = 'Orgs in Open-AudIT ir galvenais elements. Lietotājam ir primārā Org, kā arī saraksts ar Orgs viņi var piekļūt. Lietotājs apvieno šo ar piešķirto lomu sarakstu, kas nosaka, kādas darbības viņi var veikt ar priekšmetiem, kas piešķirti orgiem, kuriem viņiem ir piekļuve. Lietotāju kombinācija <i>orgs</i> kā arī <i>lomas</i> definēt, ko viņi var un nevar darīt Open-AudIT ietvaros.<br/><br/>Lielākā daļa Open-AudIT elementu tiek piešķirti Org ierīcēm, atrašanās vietām, tīkliem utt.<br/><br/>Orgs var būt bērns Orgs. Padomājiet par organizācijas diagrammas (koku) struktūru. Ja lietotājam ir pieeja konkrētai Org, lielākajai daļai laika (ne vienmēr) viņiem ir piekļuve arī šai Orgu pēctečiem.';

$GLOBALS["lang"]['orientation'] = 'Orientācija';

$GLOBALS["lang"]['Orientation'] = 'Orientācija';

$GLOBALS["lang"]['os'] = 'Os';

$GLOBALS["lang"]['Os'] = 'Os';

$GLOBALS["lang"]['os_arch'] = 'Os arka';

$GLOBALS["lang"]['Os Arch'] = 'Os arka';

$GLOBALS["lang"]['os_bit'] = 'Os bits';

$GLOBALS["lang"]['Os Bit'] = 'Os bits';

$GLOBALS["lang"]['os_cpe'] = 'Os Cpe';

$GLOBALS["lang"]['Os Cpe'] = 'Os Cpe';

$GLOBALS["lang"]['os_display_version'] = 'Os attēlošanas versija';

$GLOBALS["lang"]['Os Display Version'] = 'Os attēlošanas versija';

$GLOBALS["lang"]['os_family'] = 'Os ģimene';

$GLOBALS["lang"]['Os Family'] = 'Os ģimene';

$GLOBALS["lang"]['os_group'] = 'Os grupa';

$GLOBALS["lang"]['Os Group'] = 'Os grupa';

$GLOBALS["lang"]['os_installation_date'] = 'Os uzstādīšanas datums';

$GLOBALS["lang"]['Os Installation Date'] = 'Os uzstādīšanas datums';

$GLOBALS["lang"]['os_licence_expiry'] = 'Os licences derīguma termiņš';

$GLOBALS["lang"]['Os Licence Expiry'] = 'Os licences derīguma termiņš';

$GLOBALS["lang"]['os_license'] = 'Os licence';

$GLOBALS["lang"]['Os License'] = 'Os licence';

$GLOBALS["lang"]['os_license_code'] = 'Os licences kods';

$GLOBALS["lang"]['Os License Code'] = 'Os licences kods';

$GLOBALS["lang"]['os_license_mode'] = 'Os licences režīms';

$GLOBALS["lang"]['Os License Mode'] = 'Os licences režīms';

$GLOBALS["lang"]['os_license_type'] = 'Os licences tips';

$GLOBALS["lang"]['Os License Type'] = 'Os licences tips';

$GLOBALS["lang"]['os_name'] = 'Os nosaukums';

$GLOBALS["lang"]['Os Name'] = 'Os nosaukums';

$GLOBALS["lang"]['os_version'] = 'Os versija';

$GLOBALS["lang"]['Os Version'] = 'Os versija';

$GLOBALS["lang"]['Other'] = 'Citi';

$GLOBALS["lang"]['Other than that restriction, you are free to select attributes as required. It is a good idea to use the menu'] = 'Izņemot šo ierobežojumu, jums ir brīvi izvēlēties atribūtus, kā nepieciešams. Laba doma ir izmantot izvēlni';

$GLOBALS["lang"]['Others'] = 'Citi';

$GLOBALS["lang"]['Our default Integration also enables a discovery on any externally supplied devices. So we ship a default discovery for the Default Integration out of the box. These use the default matching rules, but also enable matching on IP address.'] = 'Mūsu noklusējuma integrācija ļauj arī atklājumu uz visām ārēji piegādātām ierīcēm. Tāpēc mēs sūtām noklusējuma atklājumu noklusējuma integrācijai no kastes. Tie izmanto noklusējuma saskaņošanas noteikumus, bet arī ļauj piemeklēt IP adresi.';

$GLOBALS["lang"]['Our examples will use the <i>type</i> column.'] = 'Mūsu piemēri izmantos <i>Veids</i> sleja.';

$GLOBALS["lang"]['Our framework uploads files here for processing, then deletes them. Think submitted audit results, etc.'] = 'Mūsu ietvars augšupielādē failus šeit apstrādei, tad tos dzēš. Padomājiet par iesniegtajiem revīzijas rezultātiem utt.';

$GLOBALS["lang"]['Our goal with the initial integrations release was specifically for NMIS to Open-AudIT integration to <i>just work</i>. If you are using the programs on Linux, you can literally click a single button to execute the integration. Nothing more is required. Having said that, the integration itself is extremely configurable - so if something is not to your preference, it can easily be changed.'] = 'Mūsu mērķis ar sākotnējo integrāciju atbrīvošanu bija īpaši NMIS Open-AudIT integrāciju <i>tikai darbs</i>. Ja jūs izmantojat programmas Linux, jūs varat burtiski noklikšķiniet uz vienas pogas, lai izpildītu integrāciju. Nekas vairāk nav vajadzīgs. Ņemot to vērā, integrācija pati par sevi ir ārkārtīgi konfigurējama - tāpēc, ja kaut kas nav jūsu vēlmēm, to var viegli mainīt.';

$GLOBALS["lang"]['Our new feature called Vulnerabilities gives you the ability to quickly determine if any devices are affected by any CVE (Common Vulnerability Exposure) - but how?<br><br>FirstWave constantly consumes the output from the Nist NVD feed. We take this and apply a few restrictions, then extract the affected programs and build a SQL query for reporting. Your Open-AudIT instance reaches out to FirstWave and requests any new vulnerabilities on a regular basis. When it receives a new vulnerability record, it is run against the database and the result stored. Each time a device is processed, all matching vulnerabilities are again executed and the result stored. This means when viewing a vulnerability list, we do not need to calculate all affected devices - we already have the result. When you view an individual vulnerability record, we do indeed recalculate the result for this singular vulnerability.<br><br>So, you are always up to date!<br><br>In addition to this, we also calculate the result of all vulnerabilities for all devices daily (usually at a quiet time, say 2am).<br><br>In your instance of Open-AudIT, we allow you to select which vendors you care about. i.e. there is no use retrieving vulnerability records from a vendor whose software you do not use or have installed. By default, our vendor list is Adobe, Apple, Cisco, Google, Microsoft, Mozilla, and Redhat.<br><br>This all sounds very simple, but behind the scenes a <b>lot</b> is going on. For instance, the CVE record contains a list of affected software - but those software names do not match what we receive when we audit a computer. A good example is Apache. Typically, a CVE record will say the affected software is http_server. In reality, this appears as apache2 (Ubuntu), httpd (Redhat), Apache HTTP Server (Windows) - and others. So, we have to first determine what is the actual name of the program we receive when we ask a computer, and there may be multiple names. After that we must parse the CVE record and create a matching SQL statement. Allowing for multiple program names as above, and multiple versions, version ranges, and even multiple different pieces of software (an example is Thunderbird and Firefox in a single CVE). And your instance of Open-AudIT must take this and apply Orgs filtering as well. And that is just a single CVE. What about determining which CVEs you have and do not have? What about adding a vendor to the list later? So many things to consider!<br><br>As well as the usual reporting, we also have a few new widgets available for Dashboards, based on Vulnerabilities data.'] = 'Mūsu jaunā funkcija sauc Vulnerabilities dod jums iespēju ātri noteikt, vai kādas ierīces ietekmē jebkurš CVE (kopējā neaizsargātības ekspozīcija) - bet kā?<br/><br/>FirstWave pastāvīgi patērē izvadi no Nist NVD barotnes. Mēs veikt šo un piemērot dažus ierobežojumus, tad iegūt skartās programmas un veidot SQL vaicājumu ziņošanai. Jūsu Open-AudIT instance sasniedz FirstWave un regulāri pieprasa jebkādas jaunas ievainojamības. Kad tas saņem jaunu ievainojamības rekordu, tas tiek veikts pret datubāzi un saglabāto rezultātu. Katru reizi, kad ierīce tiek apstrādāta, visas atbilstošās ievainojamības atkal tiek izpildītas un rezultāts tiek saglabāts. Tas nozīmē, ka, skatoties ievainojamības sarakstu, mums nav jāaprēķina visas skartās ierīces - mums jau ir rezultāts. Kad jūs redzat individuālu ievainojamības rekordu, mēs patiešām pārrēķinām šīs ievainojamības rezultātu.<br/><br/>Tātad, jūs vienmēr esat mūsdienīgs!<br/><br/>Papildus tam, mēs arī aprēķinām rezultātu visu ievainojamību visām ierīcēm katru dienu (parasti klusā laikā, teiksim 2am).<br/><br/>Jūsu gadījumā Open-AudIT, mēs ļaujam jums izvēlēties, kuri pārdevēji jums rūp. t.i., no pārdevēja, kura programmatūru neizmantojat vai esat uzstādījis, nav iespējams iegūt ievainojamības ierakstus. Pēc noklusējuma mūsu piedāvātāju saraksts ir Adobe, Apple, Cisco, Google, Microsoft, Mozilla un Redhat.<br/><br/>Tas viss izklausās ļoti vienkārši, bet aiz ainas a <b>Sērija</b> notiek. Piemēram, CVE ierakstā ir iekļauts skarto programmatūru saraksts, bet šie programmatūras nosaukumi neatbilst tam, ko mēs saņemam, kad auditējam datoru. Labs piemērs ir Apache. Parasti CVE ieraksts teiks, ka skartā programmatūra ir http_server. Realitātē tas parādās kā apache2 (Ubuntu), httpd (Redhat), Apache HTTP Server (Windows) - un citi. Tātad, mums vispirms ir jānosaka, kāds ir faktiskais nosaukums programmu mēs saņemam, kad mēs lūdzam datoru, un var būt vairāki vārdi. Pēc tam mums ir parse CVE ierakstu un izveidot atbilstošu SQL paziņojumu. Ļauj vairākus programmu nosaukumus, kā minēts iepriekš, un vairākas versijas, versiju diapazonus, un pat vairākas dažādas daļas programmatūras (piemērs ir Thunderbird un Firefox vienā CVE). Un jūsu Open-AudIT instance ir jāņem šo un piemērot Orgs filtrēšanu, kā arī. Un tas ir tikai viens CVE. Kā ar to, kuri CVE jums ir un kuri nav? Kā ar pārdevēja pievienošanu sarakstam vēlāk? Tik daudz kas jāapsver!<br/><br/>Kā arī parasto ziņojumu, mums ir arī dažas jaunas widgets pieejami Dashboards, pamatojoties uz Vulnerabilities datiem.';

$GLOBALS["lang"]['Our timeout for a SSH response'] = 'Mūsu noildze SSH atbildes';

$GLOBALS["lang"]['Our timeout for a WMI response'] = 'Mūsu laiks WMI atbildei';

$GLOBALS["lang"]['Our timeout for an SNMP response'] = 'Mūsu noildze SNMP atbildes';

$GLOBALS["lang"]['Our timeout for an audit script response'] = 'Mūsu noildze revīzijas skripta atbildei';

$GLOBALS["lang"]['output'] = 'Izvade';

$GLOBALS["lang"]['Output'] = 'Izvade';

$GLOBALS["lang"]['outputs'] = 'Rezultāts';

$GLOBALS["lang"]['Outputs'] = 'Rezultāts';

$GLOBALS["lang"]['Overall severity score (0–10).'] = 'Kopējā smaguma pakāpe (0-10).';

$GLOBALS["lang"]['overwrite'] = 'Pārrakstīt';

$GLOBALS["lang"]['Overwrite'] = 'Pārrakstīt';

$GLOBALS["lang"]['owner'] = 'Īpašnieks';

$GLOBALS["lang"]['Owner'] = 'Īpašnieks';

$GLOBALS["lang"]['PAExec is a freely-redistributable re-implementation of SysInternal/Microsofts popular PsExec program.  PAExec aims to be a drop in replacement for PsExec, so the command-line usage is identical, with additional options also supported.  This work was originally inspired by Talha Tariqs RemCom.'] = 'PAExec ir brīvi redalāma SysInternal/Microsofts populārās PsExec programmas reīstenošana. PAExec mērķis ir būt piliens aizvietošanas PsExec, tāpēc komandrindas izmantošana ir identiska, ar papildu opcijām arī atbalstīta. Šo darbu sākotnēji iedvesmoja Talha Tariqs RemCom.';

$GLOBALS["lang"]['PHP'] = 'PHP';

$GLOBALS["lang"]['POD'] = 'POD';

$GLOBALS["lang"]['POSTing data'] = 'Pēctesta dati';

$GLOBALS["lang"]['Package'] = 'Pakotne';

$GLOBALS["lang"]['packages'] = 'Pakotnes';

$GLOBALS["lang"]['Packages'] = 'Pakotnes';

$GLOBALS["lang"]['Packages are used to report on things such as <i>banned software</i>, AntiVirus on servers, etc.<br><br>Open-AudIT provides widgets that build upon also supplied repots to detemine the status of antivirus, firewall and other software.'] = 'Pakotnes izmanto, lai ziņotu par tādām lietām kā <i>aizliegta programmatūra</i>, AntiVirus uz serveriem, utt.<br/><br/>Open-AudIT nodrošina sīkrīkus, kas balstās uz arī piegādātajiem repotiem detemine antivīrusa, ugunsmūra un citas programmatūras statusu.';

$GLOBALS["lang"]['pagefile'] = 'Lapas fails';

$GLOBALS["lang"]['Pagefile'] = 'Lapas fails';

$GLOBALS["lang"]['Pakistan'] = 'Pakistāna';

$GLOBALS["lang"]['Palau'] = 'Palau';

$GLOBALS["lang"]['Palestinian Territory'] = 'Palestīnas teritorija';

$GLOBALS["lang"]['Panama'] = 'Panama';

$GLOBALS["lang"]['Papua New Guinea'] = 'Papua-Jaungvineja';

$GLOBALS["lang"]['Paraguay'] = 'Krievija';

$GLOBALS["lang"]['Parameters'] = 'Parametri';

$GLOBALS["lang"]['Paranoid'] = 'Paranoīds';

$GLOBALS["lang"]['Parent'] = 'Vecāki';

$GLOBALS["lang"]['parent_id'] = 'Vecāka ID';

$GLOBALS["lang"]['Parent ID'] = 'Vecāka ID';

$GLOBALS["lang"]['parent_name'] = 'Vecāka vārds';

$GLOBALS["lang"]['Parent Name'] = 'Vecāka vārds';

$GLOBALS["lang"]['part_number'] = 'Daļas numurs';

$GLOBALS["lang"]['Part Number'] = 'Daļas numurs';

$GLOBALS["lang"]['part_of_domain'] = 'Domēna daļa';

$GLOBALS["lang"]['Part Of Domain'] = 'Domēna daļa';

$GLOBALS["lang"]['Partition'] = 'Sadaļa';

$GLOBALS["lang"]['partition_count'] = 'Sadalījumu skaits';

$GLOBALS["lang"]['Partition Count'] = 'Sadalījumu skaits';

$GLOBALS["lang"]['partition_disk_index'] = 'Partīciju diska indekss';

$GLOBALS["lang"]['Partition Disk Index'] = 'Partīciju diska indekss';

$GLOBALS["lang"]['Pass'] = 'Caurlaide';

$GLOBALS["lang"]['Passed'] = 'Nodots';

$GLOBALS["lang"]['Passive Optical Local Area Network'] = 'Pasīvais optiskais lokālais tīkls';

$GLOBALS["lang"]['Password'] = 'Parole';

$GLOBALS["lang"]['password'] = 'Parole';

$GLOBALS["lang"]['password_changeable'] = 'Paroles maiņa';

$GLOBALS["lang"]['Password Changeable'] = 'Paroles maiņa';

$GLOBALS["lang"]['password_disabled'] = 'Parole izslēgta';

$GLOBALS["lang"]['Password Disabled'] = 'Parole izslēgta';

$GLOBALS["lang"]['password_expires'] = 'Parole zaudē spēku';

$GLOBALS["lang"]['Password Expires'] = 'Parole zaudē spēku';

$GLOBALS["lang"]['password_last_changed'] = 'Parole pēdējoreiz mainīta';

$GLOBALS["lang"]['Password Last Changed'] = 'Parole pēdējoreiz mainīta';

$GLOBALS["lang"]['password_required'] = 'Nepieciešama parole';

$GLOBALS["lang"]['Password Required'] = 'Nepieciešama parole';

$GLOBALS["lang"]['patch_panel'] = 'Ielāpu panelis';

$GLOBALS["lang"]['Patch Panel'] = 'Ielāpu panelis';

$GLOBALS["lang"]['patch_panel_port'] = 'Ielāpu paneļa ports';

$GLOBALS["lang"]['Patch Panel Port'] = 'Ielāpu paneļa ports';

$GLOBALS["lang"]['path'] = 'Ceļš';

$GLOBALS["lang"]['Path'] = 'Ceļš';

$GLOBALS["lang"]['Performance'] = 'Darbības rezultāti';

$GLOBALS["lang"]['Performed'] = 'Veikts';

$GLOBALS["lang"]['Permission'] = 'Atļauja';

$GLOBALS["lang"]['Permission Required'] = 'Nepieciešama atļauja';

$GLOBALS["lang"]['permissions'] = 'Atļaujas';

$GLOBALS["lang"]['Permissions'] = 'Atļaujas';

$GLOBALS["lang"]['Persian'] = 'Persiešu';

$GLOBALS["lang"]['Personal Area Network'] = 'Personīgais apgabalu tīkls';

$GLOBALS["lang"]['Personal area network'] = 'Personālo zonu tīkls';

$GLOBALS["lang"]['Peru'] = 'Peru';

$GLOBALS["lang"]['Philippines'] = 'Filipīnas';

$GLOBALS["lang"]['phone'] = 'Tālrunis';

$GLOBALS["lang"]['Phone'] = 'Tālrunis';

$GLOBALS["lang"]['Physical CPUs'] = 'Fiziskie CPU';

$GLOBALS["lang"]['physical_count'] = 'Fiziskais skaits';

$GLOBALS["lang"]['Physical Count'] = 'Fiziskais skaits';

$GLOBALS["lang"]['physical_depth'] = 'Fiziskais dziļums';

$GLOBALS["lang"]['Physical Depth'] = 'Fiziskais dziļums';

$GLOBALS["lang"]['physical_height'] = 'Fiziskais augstums';

$GLOBALS["lang"]['Physical Height'] = 'Fiziskais augstums';

$GLOBALS["lang"]['physical_width'] = 'Fiziskais platums';

$GLOBALS["lang"]['Physical Width'] = 'Fiziskais platums';

$GLOBALS["lang"]['picture'] = 'Attēls';

$GLOBALS["lang"]['Picture'] = 'Attēls';

$GLOBALS["lang"]['pid'] = 'Pid';

$GLOBALS["lang"]['Pid'] = 'Pid';

$GLOBALS["lang"]['Pie Chart'] = 'Pierakstīt grafiku';

$GLOBALS["lang"]['Pie charts must return name or my_name, description or my_description and count.'] = 'Pie diagrammas jāatgriež vārds vai mans_nosaukums, apraksts vai my_apraksts un skaits.';

$GLOBALS["lang"]['ping'] = 'Ping';

$GLOBALS["lang"]['Ping'] = 'Ping';

$GLOBALS["lang"]['Ping Target'] = 'Stencils';

$GLOBALS["lang"]['Pitcairn Islands'] = 'Pitkērnas salas';

$GLOBALS["lang"]['placement'] = 'Novietojums';

$GLOBALS["lang"]['Placement'] = 'Novietojums';

$GLOBALS["lang"]['Plan and conduct internal audits'] = 'Plānot un veikt iekšējās revīzijas';

$GLOBALS["lang"]['Please have an Open-AudIT administrator logon and upgrade the database.'] = 'Lūdzu, pievienojiet Open-AudIT administratoram un atjauniniet datubāzi.';

$GLOBALS["lang"]['Please log in and change these ASAP.'] = 'Lūdzu, pieslēdzieties un mainiet šo ASAP.';

$GLOBALS["lang"]['Please log on to the Open-AudIT Server (either Windows or Linux) and run <code>nslookup IP_ADDRESS_OF_TARGET</code> in the command prompt or shell. It must be able to resolve the IP to a name.'] = 'Lūdzu, pieslēdzieties Open-AudIT serverim ( Windows vai Linux) un palaidiet <code>nslookup IP_ADDRESS_OF_TARGET</code> komandas uzvednē vai čaulā. Tai jāspēj atrisināt IP ar nosaukumu.';

$GLOBALS["lang"]['Please note that the select box will override the text input box.'] = 'Lūdzu, ņemiet vērā, ka iezīmētais lodziņš aizstās teksta ievades lauku.';

$GLOBALS["lang"]['Please see the FAQ'] = 'Lūdzam skatīt FAQ';

$GLOBALS["lang"]['Please send all three files to your support contact at Opmantek and describe your issue.'] = 'Lūdzu, nosūtiet visus trīs failus uz jūsu atbalsta kontaktu pie Opmantek un aprakstiet savu jautājumu.';

$GLOBALS["lang"]['Please set using'] = 'Lūdzu iestatiet, izmantojot';

$GLOBALS["lang"]['Please visit the homepage at'] = 'Apmeklējiet mājas lapu';

$GLOBALS["lang"]['pod'] = 'Pod';

$GLOBALS["lang"]['Pod'] = 'Pod';

$GLOBALS["lang"]['Poland'] = 'Polija';

$GLOBALS["lang"]['Policies'] = 'Politika';

$GLOBALS["lang"]['Policies have exceptions.'] = 'Politikai ir izņēmumi.';

$GLOBALS["lang"]['policy'] = 'Politika';

$GLOBALS["lang"]['Policy'] = 'Politika';

$GLOBALS["lang"]['policy_id'] = 'Politikas ID';

$GLOBALS["lang"]['Policy ID'] = 'Politikas ID';

$GLOBALS["lang"]['Policy Result'] = 'Politikas rezultāts';

$GLOBALS["lang"]['Policy Results'] = 'Politikas rezultāti';

$GLOBALS["lang"]['Polish'] = 'Poļu';

$GLOBALS["lang"]['Polite'] = 'Pieklājīgi';

$GLOBALS["lang"]['Populate the with values provided below:'] = 'Populē ar turpmāk norādītajām vērtībām:';

$GLOBALS["lang"]['Populated by audit.'] = 'Apdzīvots ar auditu.';

$GLOBALS["lang"]['Populated by discovery and audit.'] = 'Apdzīvots ar atklājumiem un revīziju.';

$GLOBALS["lang"]['Populated dynamically.'] = 'Apdzīvots dinamiski.';

$GLOBALS["lang"]['Populated from DNS.'] = 'Apdzīvots no DNS.';

$GLOBALS["lang"]['Populated from SNMP discovery.'] = 'Apdzīvots no SNMP atklājuma.';

$GLOBALS["lang"]['Populated from device audits.'] = 'Apdzīvots no ierīču auditiem.';

$GLOBALS["lang"]['Populated from hostname.'] = 'Apdzīvots no datora nosaukuma.';

$GLOBALS["lang"]['Populated from machine-id on Linux.'] = 'Apdzīvots no mašinērijas id uz Linux.';

$GLOBALS["lang"]['Populated from the IP for the default route or the IP detected in discovery.'] = 'Apdzīvots no IP noklusētajam maršrutam vai atrastajam IP.';

$GLOBALS["lang"]['Populated from the hostname command.'] = 'Apkopots no datora nosaukumu komandas.';

$GLOBALS["lang"]['Populated with additional data from the external system, in a JSON representation.'] = 'Apkopots ar papildu datiem no ārējās sistēmas, JSON atveidojumā.';

$GLOBALS["lang"]['port'] = 'Osta';

$GLOBALS["lang"]['Port'] = 'Osta';

$GLOBALS["lang"]['port_name'] = 'Ostas nosaukums';

$GLOBALS["lang"]['Port Name'] = 'Ostas nosaukums';

$GLOBALS["lang"]['port_number'] = 'Ostas numurs';

$GLOBALS["lang"]['Port Number'] = 'Ostas numurs';

$GLOBALS["lang"]['ports_in_order'] = 'Kārtas ostas';

$GLOBALS["lang"]['Ports In Order'] = 'Kārtas ostas';

$GLOBALS["lang"]['ports_stop_after'] = 'Porti apstājas pēc';

$GLOBALS["lang"]['Ports Stop After'] = 'Porti apstājas pēc';

$GLOBALS["lang"]['Portugal, Portuguese Republic'] = 'Portugāle';

$GLOBALS["lang"]['Portuguese'] = 'Portugāļu';

$GLOBALS["lang"]['Portuguese (Brazil)'] = 'Portugāļu (Brazīlija)';

$GLOBALS["lang"]['position'] = 'Pozīcija';

$GLOBALS["lang"]['Position'] = 'Pozīcija';

$GLOBALS["lang"]['Post-Certification'] = 'Pēc apstiprināšanas';

$GLOBALS["lang"]['postcode'] = 'Pasta indekss';

$GLOBALS["lang"]['Postcode'] = 'Pasta indekss';

$GLOBALS["lang"]['power_circuit'] = 'Barošanas ķēde';

$GLOBALS["lang"]['Power Circuit'] = 'Barošanas ķēde';

$GLOBALS["lang"]['power_sockets'] = 'Barošanas ierīces';

$GLOBALS["lang"]['Power Sockets'] = 'Barošanas ierīces';

$GLOBALS["lang"]['Predictable'] = 'Paredzamais';

$GLOBALS["lang"]['Preferences'] = 'Iestatījumi';

$GLOBALS["lang"]['Prepare for recertification every 3 years'] = 'Sagatavoties atkārtotai sertifikācijai ik pēc 3 gadiem';

$GLOBALS["lang"]['Prerequisites'] = 'Priekšnosacījumi';

$GLOBALS["lang"]['Prerequisites and Tests'] = 'Priekšnoteikumi un testi';

$GLOBALS["lang"]['present'] = 'Klāt';

$GLOBALS["lang"]['Present'] = 'Klāt';

$GLOBALS["lang"]['previous_value'] = 'Iepriekšējā vērtība';

$GLOBALS["lang"]['Previous Value'] = 'Iepriekšējā vērtība';

$GLOBALS["lang"]['primary'] = 'Sākumizglītība';

$GLOBALS["lang"]['Primary'] = 'Sākumizglītība';

$GLOBALS["lang"]['Primary Key'] = 'Primārā atslēga';

$GLOBALS["lang"]['print_queue'] = 'Drukāt rindu';

$GLOBALS["lang"]['Print Queue'] = 'Drukāt rindu';

$GLOBALS["lang"]['printer_color'] = 'Printera krāsa';

$GLOBALS["lang"]['Printer Color'] = 'Printera krāsa';

$GLOBALS["lang"]['printer_duplex'] = 'Printera Duplekss';

$GLOBALS["lang"]['Printer Duplex'] = 'Printera Duplekss';

$GLOBALS["lang"]['printer_port_name'] = 'Drukas iekārtas porta nosaukums';

$GLOBALS["lang"]['Printer Port Name'] = 'Drukas iekārtas porta nosaukums';

$GLOBALS["lang"]['printer_shared'] = 'Drukas Iekārtas Koplietošana';

$GLOBALS["lang"]['Printer Shared'] = 'Drukas Iekārtas Koplietošana';

$GLOBALS["lang"]['printer_shared_name'] = 'Drukas iekārtas koplietojamais nosaukums';

$GLOBALS["lang"]['Printer Shared Name'] = 'Drukas iekārtas koplietojamais nosaukums';

$GLOBALS["lang"]['priority'] = 'Prioritāte';

$GLOBALS["lang"]['Priority'] = 'Prioritāte';

$GLOBALS["lang"]['Privacy Passphrase'] = 'Parole';

$GLOBALS["lang"]['Privacy Protocol'] = 'Privātuma protokols';

$GLOBALS["lang"]['privileges_required'] = 'Nepieciešamās tiesības';

$GLOBALS["lang"]['Privileges Required'] = 'Nepieciešamās tiesības';

$GLOBALS["lang"]['processor'] = 'Procesors';

$GLOBALS["lang"]['Processor'] = 'Procesors';

$GLOBALS["lang"]['processor_count'] = 'Procesora skaits';

$GLOBALS["lang"]['Processor Count'] = 'Procesora skaits';

$GLOBALS["lang"]['processor_slot_count'] = 'Procesora slotu skaits';

$GLOBALS["lang"]['Processor Slot Count'] = 'Procesora slotu skaits';

$GLOBALS["lang"]['processor_type'] = 'Procesora tips';

$GLOBALS["lang"]['Processor Type'] = 'Procesora tips';

$GLOBALS["lang"]['Processors'] = 'Pārstrādātāji';

$GLOBALS["lang"]['product_name'] = 'Produkta nosaukums';

$GLOBALS["lang"]['Product Name'] = 'Produkta nosaukums';

$GLOBALS["lang"]['Product Name Match from CPE: '] = 'Produkta nosaukuma atbilstība no CPE: ';

$GLOBALS["lang"]['products'] = 'Produkti';

$GLOBALS["lang"]['Products'] = 'Produkti';

$GLOBALS["lang"]['Professional'] = 'Profesionāli';

$GLOBALS["lang"]['profile'] = 'Profils';

$GLOBALS["lang"]['Profile'] = 'Profils';

$GLOBALS["lang"]['program'] = 'Programma';

$GLOBALS["lang"]['Program'] = 'Programma';

$GLOBALS["lang"]['Properties'] = 'Īpašības';

$GLOBALS["lang"]['Proprietary. If you want to modify HighCharts you may require a'] = 'Īpašnieks. Ja jūs vēlaties mainīt HighCharts jums var būt nepieciešams';

$GLOBALS["lang"]['Protects confidentiality, integrity, and availability of information'] = 'Aizsargā konfidencialitāti, integritāti un informācijas pieejamību';

$GLOBALS["lang"]['protocol'] = 'Protokols';

$GLOBALS["lang"]['Protocol'] = 'Protokols';

$GLOBALS["lang"]['Provide a description and select and expires duration.'] = 'Sniedziet aprakstu un izvēlieties un termiņa beigas.';

$GLOBALS["lang"]['Provide a name - we humbly recommand Open-AudIT &#128512;, but you can name it anything you like.<br>From the Open-AudIT form, copy the value for the <i>Redirect URI</i> field and paste it into the <i>Sign-in redirect URIs</i> field in OKTA.<br>The Sign-out redirect URIs is optional, but if you want you can use open-audit/index.php/logout with your Open-AudIT servers http address, as per the screenshot.<br>Normally your Open-AudIT URL will look something like'] = 'Sniedziet nosaukumu - mēs pazemīgi pārkomand Open-AudIT, bet jūs varat nosaukt visu, kas jums patīk.<br/>No Open- AudIT veidlapas kopēt vērtību <i>Pārvirzīt URI</i> uz lauka un ielīmēt to uz <i>Pierakstīties novirzīt URI</i> lauks OKTA.<br/>Izslēgšanas pāradresēšanas URI ir pēc izvēles, bet, ja vēlaties, varat izmantot atvērto auditu/indeksu. php/logout ar jūsu Open-AudIT serveriem http adrese, kā tas ir ekrānattēlā.<br/>Parasti Open- AudIT URL izskatīsies kā';

$GLOBALS["lang"]['Provided you have the correct credentials, Device Seed Discovery works as follows'] = 'Ja jums ir pareizie dati, ierīce Seed Discovery darbojas šādi';

$GLOBALS["lang"]['provider'] = 'Piegādātājs';

$GLOBALS["lang"]['Provider'] = 'Piegādātājs';

$GLOBALS["lang"]['published'] = 'Publicēts';

$GLOBALS["lang"]['Published'] = 'Publicēts';

$GLOBALS["lang"]['published_date'] = 'Publicēšanas datums';

$GLOBALS["lang"]['Published Date'] = 'Publicēšanas datums';

$GLOBALS["lang"]['publisher'] = 'Izdevējs';

$GLOBALS["lang"]['Publisher'] = 'Izdevējs';

$GLOBALS["lang"]['Puerto Rico'] = 'Puertoriko';

$GLOBALS["lang"]['Purchase'] = 'Pirkšana';

$GLOBALS["lang"]['purchase_amount'] = 'Pirkuma summa';

$GLOBALS["lang"]['Purchase Amount'] = 'Pirkuma summa';

$GLOBALS["lang"]['purchase_cost_center'] = 'Pirkuma izmaksu centrs';

$GLOBALS["lang"]['Purchase Cost Center'] = 'Pirkuma izmaksu centrs';

$GLOBALS["lang"]['purchase_count'] = 'Pirkumu skaits';

$GLOBALS["lang"]['Purchase Count'] = 'Pirkumu skaits';

$GLOBALS["lang"]['purchase_date'] = 'Pirkšanas datums';

$GLOBALS["lang"]['Purchase Date'] = 'Pirkšanas datums';

$GLOBALS["lang"]['purchase_invoice'] = 'Pirkuma rēķins';

$GLOBALS["lang"]['Purchase Invoice'] = 'Pirkuma rēķins';

$GLOBALS["lang"]['purchase_order'] = 'Pirkuma pasūtījums';

$GLOBALS["lang"]['Purchase Order'] = 'Pirkuma pasūtījums';

$GLOBALS["lang"]['purchase_order_number'] = 'Pirkuma kārtas numurs';

$GLOBALS["lang"]['Purchase Order Number'] = 'Pirkuma kārtas numurs';

$GLOBALS["lang"]['purchase_service_contract_number'] = 'Pirkšanas pakalpojuma līguma numurs';

$GLOBALS["lang"]['Purchase Service Contract Number'] = 'Pirkšanas pakalpojuma līguma numurs';

$GLOBALS["lang"]['purchase_vendor'] = 'Pārdevējs';

$GLOBALS["lang"]['Purchase Vendor'] = 'Pārdevējs';

$GLOBALS["lang"]['purpose'] = 'Mērķis';

$GLOBALS["lang"]['Purpose'] = 'Mērķis';

$GLOBALS["lang"]['Qatar'] = 'Katara';

$GLOBALS["lang"]['queries'] = 'Jautājumi';

$GLOBALS["lang"]['Queries'] = 'Jautājumi';

$GLOBALS["lang"]['Queries are an important part of Open-AudIT. They are what enables you to get meaningful information from all the device data you have discovered. Along with summaries and groups, they provide a powerful mechanism to extract crucial information.'] = 'Jautājums ir svarīga Open-AudIT sastāvdaļa. Tie ir tie, kas ļauj iegūt jēgpilnu informāciju no visiem ierīces datiem, kurus esat atklājis. Kopā ar kopsavilkumiem un grupām tie nodrošina spēcīgu mehānismu būtiskas informācijas iegūšanai.';

$GLOBALS["lang"]['Queries for Groups should select only the'] = 'Grupu vaicājumiem jāizvēlas tikai';

$GLOBALS["lang"]['Query'] = 'Vaicājums';

$GLOBALS["lang"]['Query this Active Directory attribute first to determine the users work unit.'] = 'Vaicāt šo Active Directory atribūtu vispirms, lai noteiktu lietotāju darba vienību.';

$GLOBALS["lang"]['Query this Active Directory attribute second to determine the users work unit.'] = 'Vaicāt šo Active Directory atribūtu otrais, lai noteiktu lietotāju darba vienību.';

$GLOBALS["lang"]['queue'] = 'Rinda';

$GLOBALS["lang"]['Queue'] = 'Rinda';

$GLOBALS["lang"]['Queue Limit'] = 'Rindas ierobežojums';

$GLOBALS["lang"]['Queued Device Audits'] = 'Ierindoto ierīču auditi';

$GLOBALS["lang"]['Queued IP Scans'] = 'Ierindotie IP skenējumi';

$GLOBALS["lang"]['Queued Items'] = 'Ierindotās vienības';

$GLOBALS["lang"]['RBAC for Active Directory and openLDAP'] = 'RBAC aktīvai mapei un atvērtai LDAP';

$GLOBALS["lang"]['RU Start'] = 'RU Sākums';

$GLOBALS["lang"]['RX Bitrate'] = 'RX bitātrums';

$GLOBALS["lang"]['RX Freq'] = 'RX Freq';

$GLOBALS["lang"]['RX Level'] = 'RX līmenis';

$GLOBALS["lang"]['RX Power'] = 'RX jauda';

$GLOBALS["lang"]['RX Profile'] = 'RX profils';

$GLOBALS["lang"]['Rack'] = 'Rack';

$GLOBALS["lang"]['rack_devices'] = 'Rack ierīces';

$GLOBALS["lang"]['Rack Devices'] = 'Rack ierīces';

$GLOBALS["lang"]['rack_id'] = 'Numura ID';

$GLOBALS["lang"]['Rack ID'] = 'Numura ID';

$GLOBALS["lang"]['Rack Management and Reporting'] = 'Rack vadība un ziņošana';

$GLOBALS["lang"]['Racks'] = 'Racks';

$GLOBALS["lang"]['racks'] = 'Racks';

$GLOBALS["lang"]['radio'] = 'Radio';

$GLOBALS["lang"]['Radio'] = 'Radio';

$GLOBALS["lang"]['Radio MAC'] = 'Radio MAC';

$GLOBALS["lang"]['rationale'] = 'Pamatojums';

$GLOBALS["lang"]['Rationale'] = 'Pamatojums';

$GLOBALS["lang"]['raw'] = 'Jēlspirts';

$GLOBALS["lang"]['Raw'] = 'Jēlspirts';

$GLOBALS["lang"]['read'] = 'Lasīt';

$GLOBALS["lang"]['Read'] = 'Lasīt';

$GLOBALS["lang"]['Read our online documentation on the Open-AudIT Wiki.'] = 'Izlasiet mūsu tiešsaistes dokumentāciju par Open-AudIT Wiki.';

$GLOBALS["lang"]['Read through the log file at'] = 'Lasīt caur žurnāla failu';

$GLOBALS["lang"]['Received'] = 'Saņemts';

$GLOBALS["lang"]['Recently we have been asked the question - do you consider Open-AudIT more secure than other similar programs? As with most things, the answer is <i>it depends</i>.<br><br>Open-AudIT can be operated in such a way as to be extremely secure. But as usual with computer-based security, the more secure you wish to make something, the more inconvenient it becomes to use. The old phrase <i>the most secure computer is one that is turned off and in the cupboard<i> comes to mind.<br><br>Below we will outline some options that can be used with Open-AudIT that will increase security. Like most items within Open-AudIT, these are options and not mandatory. How far you take security is up to you.'] = 'Nesen mums tika uzdots jautājums - vai jūs uzskatāt Open-AudIT drošāka nekā citas līdzīgas programmas? Tāpat kā vairumā lietu, atbilde ir: <i>tas ir atkarīgs</i>.<br/><br/>Atvērts IT var darboties tā, lai tā būtu ārkārtīgi droša. Bet, kā parasti ar datoru balstītu drošību, jo drošāk jūs vēlaties kaut ko darīt, jo neērtāks tas kļūst izmantot. Vecā frāze <i>visdrošākais dators ir viens, kas ir izslēgts un skapī<i> nāk prātā.<br/><br/>Zemāk mēs ieskicēsim dažas iespējas, ko var izmantot ar Open-AudIT, kas palielinās drošību. Tāpat kā lielākā daļa Open-AudIT vienību, tās ir iespējas un nav obligātas. Cik tālu jūs ņemat drošību ir atkarīgs no jums.</i></i>';

$GLOBALS["lang"]['Recertification:</strong> Required every three years'] = 'Atkārtota sertifikācija: Nepieciešams ik pēc trim gadiem';

$GLOBALS["lang"]['Red Query'] = 'Sarkanā vaicājums';

$GLOBALS["lang"]['Redirect URI'] = 'Pārvirzīt URI';

$GLOBALS["lang"]['redirect_uri'] = 'Pārvirzīt Uri';

$GLOBALS["lang"]['Redirect Uri'] = 'Pārvirzīt Uri';

$GLOBALS["lang"]['Reduces risk of data breaches and cyber threats'] = 'Samazina datu aizsardzības pārkāpumu un kiberdraudu risku';

$GLOBALS["lang"]['references'] = 'Atsauces';

$GLOBALS["lang"]['References'] = 'Atsauces';

$GLOBALS["lang"]['region'] = 'Reģions';

$GLOBALS["lang"]['Region'] = 'Reģions';

$GLOBALS["lang"]['registered_user'] = 'Reģistrētais lietotājs';

$GLOBALS["lang"]['Registered User'] = 'Reģistrētais lietotājs';

$GLOBALS["lang"]['Rejected'] = 'Noraidīts';

$GLOBALS["lang"]['rel'] = 'Rel.';

$GLOBALS["lang"]['Rel'] = 'Rel.';

$GLOBALS["lang"]['Release'] = 'Laidiens';

$GLOBALS["lang"]['remediation'] = 'Sanācija';

$GLOBALS["lang"]['Remediation'] = 'Sanācija';

$GLOBALS["lang"]['Remote'] = 'Attālināts';

$GLOBALS["lang"]['remote_address'] = 'Attālinātā adrese';

$GLOBALS["lang"]['Remote Address'] = 'Attālinātā adrese';

$GLOBALS["lang"]['remote_port'] = 'Attālinātais ports';

$GLOBALS["lang"]['Remote Port'] = 'Attālinātais ports';

$GLOBALS["lang"]['Remove'] = 'Izņemt';

$GLOBALS["lang"]['Remove Exception'] = 'Izņemt izņēmumu';

$GLOBALS["lang"]['Repeat until you have a completely discovered and audited Windows PC.'] = 'Atkārtojiet, līdz jums ir pilnīgi atklāts un auditēts Windows PC.';

$GLOBALS["lang"]['Report'] = 'Ziņojums';

$GLOBALS["lang"]['Report on your devices, networks and more'] = 'Ziņot par savām ierīcēm, tīkliem un citām';

$GLOBALS["lang"]['reportable'] = 'Informācija';

$GLOBALS["lang"]['Reportable'] = 'Informācija';

$GLOBALS["lang"]['Reports'] = 'Ziņojumi';

$GLOBALS["lang"]['request'] = 'Pieprasījums';

$GLOBALS["lang"]['Request'] = 'Pieprasījums';

$GLOBALS["lang"]['Request Method'] = 'Pieprasījuma metode';

$GLOBALS["lang"]['Request Vulnerability'] = 'Pieprasījuma neaizsargātība';

$GLOBALS["lang"]['Request a Specific CVE'] = 'Pieprasīt konkrētu CVE';

$GLOBALS["lang"]['requested'] = 'Pieprasīts';

$GLOBALS["lang"]['Requested'] = 'Pieprasīts';

$GLOBALS["lang"]['require_port'] = 'Nepieciešama osta';

$GLOBALS["lang"]['Require Port'] = 'Nepieciešama osta';

$GLOBALS["lang"]['Require an Open Port'] = 'Nepieciešama atvērta ports';

$GLOBALS["lang"]['Required'] = 'Nepieciešams';

$GLOBALS["lang"]['Required AWS user permissions'] = 'Nepieciešamas AWS lietotāju atļaujas';

$GLOBALS["lang"]['Required Fields'] = 'Obligātie lauki';

$GLOBALS["lang"]['Reset'] = 'Atstatīt';

$GLOBALS["lang"]['Reset All Data'] = 'Atstatīt visus datus';

$GLOBALS["lang"]['Reset to Default'] = 'Atstatīt uz noklusēto';

$GLOBALS["lang"]['resource'] = 'Resursu';

$GLOBALS["lang"]['Resource'] = 'Resursu';

$GLOBALS["lang"]['Resource Name'] = 'Resursa nosaukums';

$GLOBALS["lang"]['Resources'] = 'Resursi';

$GLOBALS["lang"]['response'] = 'Atbildes reakcija';

$GLOBALS["lang"]['Response'] = 'Atbildes reakcija';

$GLOBALS["lang"]['responsibility'] = 'Atbildība';

$GLOBALS["lang"]['Responsibility'] = 'Atbildība';

$GLOBALS["lang"]['Restore my Licenses'] = 'Atjaunot manas licences';

$GLOBALS["lang"]['Restrict to Private'] = 'Ierobežot ar ierindu';

$GLOBALS["lang"]['Restrict to Subnet'] = 'Ierobežot ar apakštīklu';

$GLOBALS["lang"]['result'] = 'Rezultāts';

$GLOBALS["lang"]['Result'] = 'Rezultāts';

$GLOBALS["lang"]['Resulting Function'] = 'Funkcija';

$GLOBALS["lang"]['Results'] = 'Rezultāti';

$GLOBALS["lang"]['Retrieve a list of devices in the'] = 'Ielādēt ierīču sarakstu';

$GLOBALS["lang"]['Retrieve a list of devices with OS Name like Windows 2008'] = 'Ielādēt ierīču sarakstu ar OS Name like Windows 2008';

$GLOBALS["lang"]['Retrieve all details about the device with id 88.'] = 'Ielādējiet visu informāciju par ierīci ar id 88.';

$GLOBALS["lang"]['Retrieve all devices running Windows.'] = 'Ielādēt visas ierīces, kas darbojas Windows.';

$GLOBALS["lang"]['Retrieve all devices with the standard columns'] = 'Ielādēt visas ierīces ar standarta kolonnām';

$GLOBALS["lang"]['Retrieve the first 10 devices running Windows ordered by hostname'] = 'Ielādēt pirmās 10 ierīces, kas darbina Windows pēc datora nosaukuma';

$GLOBALS["lang"]['Retrieve the properties id, ip, hostname, domain, type from all devices'] = 'Ielādēt īpašības id, ip, hostname, domēns, tips no visām ierīcēm';

$GLOBALS["lang"]['retrieved'] = 'Ielādēts';

$GLOBALS["lang"]['Retrieved'] = 'Ielādēts';

$GLOBALS["lang"]['retrieved_ident'] = 'Ielādētais identifikators';

$GLOBALS["lang"]['Retrieved Ident'] = 'Ielādētais identifikators';

$GLOBALS["lang"]['retrieved_name'] = 'Ielādētais nosaukums';

$GLOBALS["lang"]['Retrieved Name'] = 'Ielādētais nosaukums';

$GLOBALS["lang"]['Retrieved from the device - Windows:Win32_ComputerSystemProduct, Linux:dmidecode, MacOS:system_profiler, ESXi:vim-cmd hostsvc/hostsummary, HP-UX:machinfo, Solaris:smbios, AIX:uname.'] = 'Retrieved from the device - Windows:Win32_ComputerSystemProduct, Linux:dmidcode, MacOS:system_profiler, ESXi:vim-cmd hostsvc/hostsummary, HP-UX:machinfo, Solaris:smbios, AIX:ulame.';

$GLOBALS["lang"]['Retrieving a List of Credentials'] = 'Iegūstu sarakstu ar radījumiem';

$GLOBALS["lang"]['Retrieving or Creating'] = 'Ielādē vai veido';

$GLOBALS["lang"]['Return a collection of devices with the default set of columns (devices.id, devices.icon, devices.type, devices.name, devices.ip, devices.dns_fqdn, devices.identification, devices.description, devices.manufacturer, devices.os_family, devices.status)'] = 'Atgriezt kolekciju ierīces ar noklusējuma kolonnu komplektu (ierīces.id, ierīces.icon, ierīces.type, ierīces.name, ierīces.ip, ierīces.dns_fqdn, ierīces.identification, ierīces.apraksts, ierīces.ražotājs, ierīces.os_family, ierīces.status)';

$GLOBALS["lang"]['Return a list of all Modules installed on Routers'] = 'Atgriezt sarakstu ar visiem moduļiem instalēta Routers';

$GLOBALS["lang"]['Return an individual device details.'] = 'Atgrieziet atsevišķas ierīces detaļas.';

$GLOBALS["lang"]['Returns a list of {collection}.'] = 'Atgriež sarakstu {kolekcija}.';

$GLOBALS["lang"]['Returns a {collection} details.'] = 'Atgriež a {collection} detaļas.';

$GLOBALS["lang"]['Reunion'] = 'Reinjona';

$GLOBALS["lang"]['Review current practices against ISO 27001 requirements'] = 'Pārskatīt pašreizējo praksi attiecībā uz ISO 27001 prasībām';

$GLOBALS["lang"]['revision'] = 'Pārskatīšana';

$GLOBALS["lang"]['Revision'] = 'Pārskatīšana';

$GLOBALS["lang"]['risk_assesment_result'] = 'Riska novērtējuma rezultāts';

$GLOBALS["lang"]['Risk Assesment Result'] = 'Riska novērtējuma rezultāts';

$GLOBALS["lang"]['Risk Assessment & Treatment'] = 'Riska novērtējums un ārstēšana';

$GLOBALS["lang"]['Risk Management'] = 'Riska vadība';

$GLOBALS["lang"]['Role'] = 'Loma';

$GLOBALS["lang"]['roles'] = 'Lomas';

$GLOBALS["lang"]['Roles'] = 'Lomas';

$GLOBALS["lang"]['Roles can only be created and edited if you have an Open-AudIT Enterprise license. For most users, the default set of Roles should be all that is required.'] = 'Lomas var izveidot un rediģēt tikai tad, ja jums ir Open-AudIT Enterprise licence. Lielākajai daļai lietotāju noklusētajam uzdevumu kopumam jābūt visam, kas ir vajadzīgs.';

$GLOBALS["lang"]['Romania'] = 'Rumānija';

$GLOBALS["lang"]['Romanian'] = 'Rumāņu';

$GLOBALS["lang"]['Room'] = 'Telpa';

$GLOBALS["lang"]['route'] = 'Ievadīšanas veids';

$GLOBALS["lang"]['Route'] = 'Ievadīšanas veids';

$GLOBALS["lang"]['Row'] = 'Rinda';

$GLOBALS["lang"]['Row Count'] = 'Rindu skaits';

$GLOBALS["lang"]['row_position'] = 'Rindas pozīcija';

$GLOBALS["lang"]['Row Position'] = 'Rindas pozīcija';

$GLOBALS["lang"]['Rows'] = 'Rindas';

$GLOBALS["lang"]['ru_height'] = 'Ru augstums';

$GLOBALS["lang"]['Ru Height'] = 'Ru augstums';

$GLOBALS["lang"]['ru_start'] = 'Ru Sākums';

$GLOBALS["lang"]['Ru Start'] = 'Ru Sākums';

$GLOBALS["lang"]['rule_group'] = 'Noteikumu grupa';

$GLOBALS["lang"]['Rule Group'] = 'Noteikumu grupa';

$GLOBALS["lang"]['rules'] = 'Noteikumi';

$GLOBALS["lang"]['Rules'] = 'Noteikumi';

$GLOBALS["lang"]['Rules are created and run against a device when the device is discovered or an audit result is processed. Rules can be used to set a device attribute based on other attributes.<br><br>NOTE - At present we cannot delete a rule input or output that contains a /. This is because the framework is parsing the / as part of the URL and returning a 404, even before our code runs. The work-around for this is to delete the Rule itself, then recreate the inputs and outputs as required. Fortunately inputs and outputs that contain a / are rare (indeed, none exist by default).'] = 'Noteikumi tiek radīti un darbojas pret ierīci, kad ierīce tiek atklāta vai audita rezultāts tiek apstrādāts. Noteikumi var tikt izmantoti, lai iestatītu ierīces atribūtu, pamatojoties uz citiem atribūtiem.<br/><br/>PIEZĪME - Pašlaik mēs nevaram dzēst noteikumu ievadi vai izvadi, kas satur /. Tas ir tāpēc, ka ietvars ir analizējot / kā daļa no URL un atgriež 404, pat pirms mūsu kods darbojas. Darbs ar to ir izdzēst noteikumu pats, tad atjaunot ieejas un izejas, kā prasīts. Par laimi ieejas un izejas, kas satur / ir reti (patiesi, neviens nepastāv pēc noklusējuma).';

$GLOBALS["lang"]['Run Discovery'] = 'Palaist atklājumu';

$GLOBALS["lang"]['Run Discovery on Devices'] = 'Palaist meklēšanu ierīcēs';

$GLOBALS["lang"]['Run Your Discovery'] = 'Darbināt savu atklājumu';

$GLOBALS["lang"]['Run a Command'] = 'Darbināt komandu';

$GLOBALS["lang"]['Run a discovery and find out <b>Whats On Your Network?</b>'] = 'Palaist atklājumu un uzzināt <b>Kas ir jūsu tīklā?</b>';

$GLOBALS["lang"]['Run the script by typing <code>cscript test_windows_client.vbs</code> in the console.'] = 'Darbināt skriptu, ierakstot <code>cscript test_windows_client.vbs</code> konsolē.';

$GLOBALS["lang"]['Run this Command'] = 'Darbināt šo komandu';

$GLOBALS["lang"]['runas'] = 'Runas';

$GLOBALS["lang"]['Runas'] = 'Runas';

$GLOBALS["lang"]['Running'] = 'Darbojas';

$GLOBALS["lang"]['Running Open-AudIT Apache Service Under Windows'] = 'Atvērt- AudIT Apache pakalpojuma darbināšana zem logiem';

$GLOBALS["lang"]['Russian'] = 'Krievu';

$GLOBALS["lang"]['Russian Federation'] = 'Krievijas Federācija';

$GLOBALS["lang"]['Rwanda'] = 'Ruanda';

$GLOBALS["lang"]['rx_bitrate'] = 'Rx bitātrums';

$GLOBALS["lang"]['Rx Bitrate'] = 'Rx bitātrums';

$GLOBALS["lang"]['rx_freq'] = 'Rx Freq';

$GLOBALS["lang"]['Rx Freq'] = 'Rx Freq';

$GLOBALS["lang"]['rx_level'] = 'Rx līmenis';

$GLOBALS["lang"]['Rx Level'] = 'Rx līmenis';

$GLOBALS["lang"]['rx_power'] = 'Rx jauda';

$GLOBALS["lang"]['Rx Power'] = 'Rx jauda';

$GLOBALS["lang"]['rx_profile'] = 'Rx profils';

$GLOBALS["lang"]['Rx Profile'] = 'Rx profils';

$GLOBALS["lang"]['SAN Audit'] = 'SAN audits';

$GLOBALS["lang"]['SAN Auto-Discover'] = 'SAN Auto- Discover';

$GLOBALS["lang"]['SELECT'] = 'IZVĒLE';

$GLOBALS["lang"]['SID'] = 'SID';

$GLOBALS["lang"]['SM Version'] = 'SM versija';

$GLOBALS["lang"]['SNMP (v1 / v2)'] = 'SNMP (v1 / v2)';

$GLOBALS["lang"]['SNMP Details'] = 'SNMP Detaļas';

$GLOBALS["lang"]['SNMP OID'] = 'SNMP OID';

$GLOBALS["lang"]['SNMP Version'] = 'SNMP versija';

$GLOBALS["lang"]['SNMP v3'] = 'SNMP v3';

$GLOBALS["lang"]['SQL'] = 'SQL';

$GLOBALS["lang"]['SQL (Advanced)'] = 'SQL (Advanced)';

$GLOBALS["lang"]['SQL Creation Statements'] = 'SQL izveidošanas paziņojumi';

$GLOBALS["lang"]['SQL not containing this condition will result in the widget failing to be executed.'] = 'SQL nesatur šo nosacījumu radīs widget nav izpildīts.';

$GLOBALS["lang"]['SSH'] = 'SSH';

$GLOBALS["lang"]['SSH Key'] = 'SSH Taustiņš';

$GLOBALS["lang"]['SW Revision'] = 'SW revīzija';

$GLOBALS["lang"]['Saint Barthelemy'] = 'Senbartelmī';

$GLOBALS["lang"]['Saint Helena'] = 'Helēnas sala';

$GLOBALS["lang"]['Saint Kitts and Nevis'] = 'Sentkitsa un Nevisa';

$GLOBALS["lang"]['Saint Lucia'] = 'Sentlūsija';

$GLOBALS["lang"]['Saint Martin'] = 'Senmartēna';

$GLOBALS["lang"]['Saint Pierre and Miquelon'] = 'Senpjēra un Mikelona';

$GLOBALS["lang"]['Saint Vincent and the Grenadines'] = 'Sentvinsenta un Grenadīnas';

$GLOBALS["lang"]['Samoa'] = 'Samoa';

$GLOBALS["lang"]['san'] = 'San';

$GLOBALS["lang"]['San'] = 'San';

$GLOBALS["lang"]['San Marino'] = 'Sanmarīno';

$GLOBALS["lang"]['Sao Tome and Principe'] = 'Santome un Prinsipi';

$GLOBALS["lang"]['Saturday'] = 'Sestdiena';

$GLOBALS["lang"]['Saudi Arabia'] = 'Saūda Arābija';

$GLOBALS["lang"]['Save and run the file. Make sure you run the file as an Administrator in order to install it (right click, Run as Administrator).'] = 'Saglabāt un palaist failu. Pārliecinieties, ka jūs darbināt failu kā administrators, lai instalētu to (labo klikšķi, palaist kā administrators).';

$GLOBALS["lang"]['Save as Default'] = 'Saglabāt kā noklusēto';

$GLOBALS["lang"]['Save the downloaded file.'] = 'Saglabāt lejupielādēto failu.';

$GLOBALS["lang"]['scaling'] = 'Mērogošana';

$GLOBALS["lang"]['Scaling'] = 'Mērogošana';

$GLOBALS["lang"]['scan_options'] = 'Skenēšanas opcijas';

$GLOBALS["lang"]['Scan Options'] = 'Skenēšanas opcijas';

$GLOBALS["lang"]['Scan Options ID'] = 'Skenēšanas opcijas ID';

$GLOBALS["lang"]['Scan for this port(s) and if detected open, use this port for SSH communication. This is added to the list of Custom TCP Ports above (if not already included), so there is no need to include it in that list as well. Comma seperated, no spaces.'] = 'Skenējiet šo portu(-us) un, ja atklāts, izmantojiet šo portu SSH saziņai. Tas tiek pievienots iepriekš minēto Pielāgoto TCP portu sarakstam (ja tas jau nav iekļauts), tāpēc nav vajadzības to iekļaut arī šajā sarakstā. Komēta ir atdalīta, nav atstarpju.';

$GLOBALS["lang"]['Scan the Nmap top number of TCP ports.'] = 'Skenējiet TCP portu Nmap augšējo numuru.';

$GLOBALS["lang"]['Scan the Nmap top number of UDP ports.'] = 'Skenējiet UDP portu Nmap top numuru.';

$GLOBALS["lang"]['schedule'] = 'Grafiks';

$GLOBALS["lang"]['Schedule'] = 'Grafiks';

$GLOBALS["lang"]['Scheduled device discovery and reporting make Open-AudIT Professional an efficient solution for busy IT professionals looking to reduce overheads and increase insights.'] = 'Plānota ierīces atklāšana un ziņošana padara Open-AudIT Professional efektīvu risinājumu aizņemtiem IT profesionāļiem, kas vēlas samazināt pieskaitāmās izmaksas un palielināt ieskatu.';

$GLOBALS["lang"]['Scheduling - discovery, reporting &amp; more'] = 'Plānošana - atklāšana, ziņošana un vairāk';

$GLOBALS["lang"]['scope'] = 'Darbības joma';

$GLOBALS["lang"]['Scope'] = 'Darbības joma';

$GLOBALS["lang"]['Scope is known as Authorization Scope, representing whether a vulnerability affects resources beyond the original security authority of the vulnerable component.<br><br>The only two valid values for this attribute are'] = 'Darbības joma ir zināma kā atļaujas darbības joma, kas atspoguļo to, vai neaizsargātība ietekmē resursus, kas pārsniedz neaizsargātā komponenta sākotnējo drošības iestādi.<br/><br/>Šim atribūtam tikai divas derīgas vērtības:';

$GLOBALS["lang"]['script_timeout'] = 'Skripta noildze';

$GLOBALS["lang"]['Script Timeout'] = 'Skripta noildze';

$GLOBALS["lang"]['scripts'] = 'Skripti';

$GLOBALS["lang"]['Scripts'] = 'Skripti';

$GLOBALS["lang"]['scsi'] = 'Scsi';

$GLOBALS["lang"]['Scsi'] = 'Scsi';

$GLOBALS["lang"]['scsi_bus'] = 'Scsi kopne';

$GLOBALS["lang"]['Scsi Bus'] = 'Scsi kopne';

$GLOBALS["lang"]['scsi_logical_unit'] = 'Scsi loģiskā vienība';

$GLOBALS["lang"]['Scsi Logical Unit'] = 'Scsi loģiskā vienība';

$GLOBALS["lang"]['scsi_port'] = 'Scsi osta';

$GLOBALS["lang"]['Scsi Port'] = 'Scsi osta';

$GLOBALS["lang"]['Search'] = 'Meklēt';

$GLOBALS["lang"]['Search For a Device'] = 'Meklēt ierīci';

$GLOBALS["lang"]['Searching Using DataTables'] = 'Meklē, izmantojot datu tabulas';

$GLOBALS["lang"]['Second'] = 'Otrā';

$GLOBALS["lang"]['secondary'] = 'Sekundārā';

$GLOBALS["lang"]['Secondary'] = 'Sekundārā';

$GLOBALS["lang"]['Secondary Text'] = 'Sekundārais teksts';

$GLOBALS["lang"]['Secret Key'] = 'Slepenā atslēga';

$GLOBALS["lang"]['section'] = 'Iedaļa';

$GLOBALS["lang"]['Section'] = 'Iedaļa';

$GLOBALS["lang"]['secure'] = 'Drošs';

$GLOBALS["lang"]['Secure'] = 'Drošs';

$GLOBALS["lang"]['Security Content Automation Protocol'] = 'Drošības satura automatizācijas protokols';

$GLOBALS["lang"]['Security Level'] = 'Drošības līmenis';

$GLOBALS["lang"]['Security Name'] = 'Drošības nosaukums';

$GLOBALS["lang"]['Security Status'] = 'Drošības statuss';

$GLOBALS["lang"]['security_zone'] = 'Drošības zona';

$GLOBALS["lang"]['Security Zone'] = 'Drošības zona';

$GLOBALS["lang"]['See above. NOTE - This could also be caused by a self-signed certificate on the LDAP server. We are working to allow for this in a future release.'] = 'Skatīt iepriekš. PIEZĪME - to varētu izraisīt arī pašparakstīts sertifikāts LDAP serverī. Mēs strādājam, lai to pieļautu nākotnē.';

$GLOBALS["lang"]['See our page on enabling'] = 'Skatiet mūsu lapu par iespēju';

$GLOBALS["lang"]['Seed Discoveries'] = 'Sēklu atklāšana';

$GLOBALS["lang"]['seed_ip'] = 'Sēklas IP';

$GLOBALS["lang"]['Seed IP'] = 'Sēklas IP';

$GLOBALS["lang"]['seed_ping'] = 'Sēklas Ping';

$GLOBALS["lang"]['Seed Ping'] = 'Sēklas Ping';

$GLOBALS["lang"]['seed_restrict_to_private'] = 'Sēklas ierobežojums ierindā';

$GLOBALS["lang"]['Seed Restrict To Private'] = 'Sēklas ierobežojums ierindā';

$GLOBALS["lang"]['seed_restrict_to_subnet'] = 'Sēklas ierobežojums apakštīklā';

$GLOBALS["lang"]['Seed Restrict To Subnet'] = 'Sēklas ierobežojums apakštīklā';

$GLOBALS["lang"]['Select'] = 'Izvēlēties';

$GLOBALS["lang"]['Select Admin -> Tasks -> Create Task from the menu.'] = 'Izvēlēties administratoru Uzdevumi Izveidot Uzdevums no izvēlnes.';

$GLOBALS["lang"]['Select All'] = 'Izvēlēties visu';

$GLOBALS["lang"]['Select All Devices'] = 'Izvēlēties visas ierīces';

$GLOBALS["lang"]['select_external_attribute'] = 'Izvēlēties ārējo atribūtu';

$GLOBALS["lang"]['Select External Attribute'] = 'Izvēlēties ārējo atribūtu';

$GLOBALS["lang"]['select_external_count'] = 'Izvēlēties ārējo skaitu';

$GLOBALS["lang"]['Select External Count'] = 'Izvēlēties ārējo skaitu';

$GLOBALS["lang"]['select_external_type'] = 'Izvēlēties ārējo Veids';

$GLOBALS["lang"]['Select External Type'] = 'Izvēlēties ārējo Veids';

$GLOBALS["lang"]['select_external_value'] = 'Izvēlēties ārējo Vērtība';

$GLOBALS["lang"]['Select External Value'] = 'Izvēlēties ārējo Vērtība';

$GLOBALS["lang"]['select_internal_attribute'] = 'Izvēlieties iekšējo atribūtu';

$GLOBALS["lang"]['Select Internal Attribute'] = 'Izvēlieties iekšējo atribūtu';

$GLOBALS["lang"]['select_internal_count'] = 'Izvēlēties iekšējo skaitu';

$GLOBALS["lang"]['Select Internal Count'] = 'Izvēlēties iekšējo skaitu';

$GLOBALS["lang"]['select_internal_type'] = 'Izvēlēties iekšējo Veids';

$GLOBALS["lang"]['Select Internal Type'] = 'Izvēlēties iekšējo Veids';

$GLOBALS["lang"]['select_internal_value'] = 'Izvēlēties iekšējo Vērtība';

$GLOBALS["lang"]['Select Internal Value'] = 'Izvēlēties iekšējo Vērtība';

$GLOBALS["lang"]['Select Menu -> Manage -> Baselines -> List Baselines.'] = 'Izvēlne Pārvaldīt -> Bāzlīnijas - > Saraksts Bāzlīnijas.';

$GLOBALS["lang"]['Select a Table'] = 'Izvēlieties tabulu';

$GLOBALS["lang"]['Select an accredited certification body'] = 'Izvēlieties akreditētu sertifikācijas iestādi';

$GLOBALS["lang"]['Select and apply appropriate controls (Annex A)'] = 'Izvēlas un piemēro atbilstošas kontroles (A pielikums)';

$GLOBALS["lang"]['Select the <i>COM Security</i> tab<br><br>Click on Access Permissions Edit Default'] = 'Izvēlieties <i>KOM Drošība</i> uzgalis<br/><br/>Noklikšķiniet uz piekļuves atļaujām Rediģēt noklusēto';

$GLOBALS["lang"]['Select the <i>Sign On</i> tab and copy the value for <i>Issuer</i> (just the URL itself). Paste this into the Open-AudIT <i>Issuer</i> field.'] = 'Izvēlieties <i>Parakstīt</i> cilne un kopēt vērtību <i>Emitents</i> (tikai pats URL). Ielīmēt Open- AudIT <i>Emitents</i> lauka.';

$GLOBALS["lang"]['Select the <i>This Account</i> checkbox and provide the account name and password.'] = 'Izvēlieties <i>Šis konts</i> pārbaudiet rūtiņu un norādiet konta nosaukumu un paroli.';

$GLOBALS["lang"]['Select the Start menu and type <i>services<.i>. Click the Services icon.'] = 'Izvēlieties sākuma izvēlni un tipu <i>pakalpojumi Noklikšķiniet uz Pakalpojumu ikonas.</i>';

$GLOBALS["lang"]['Select the type of Auth Menthod to create and input the relevant details.'] = 'Izvēlieties Auth Menthod veidu, lai izveidotu un ievadītu attiecīgās detaļas.';

$GLOBALS["lang"]['Self Delete'] = 'Pašdzēst';

$GLOBALS["lang"]['Senegal'] = 'Senegāla';

$GLOBALS["lang"]['sensitivity'] = 'Jutība';

$GLOBALS["lang"]['Sensitivity'] = 'Jutība';

$GLOBALS["lang"]['September'] = 'Septembris';

$GLOBALS["lang"]['Serbia'] = 'Serbija';

$GLOBALS["lang"]['serial'] = 'Seriāls';

$GLOBALS["lang"]['Serial'] = 'Seriāls';

$GLOBALS["lang"]['serial_imei'] = 'Seriālā Imei';

$GLOBALS["lang"]['Serial Imei'] = 'Seriālā Imei';

$GLOBALS["lang"]['serial_sim'] = 'Seriālais Sim';

$GLOBALS["lang"]['Serial Sim'] = 'Seriālais Sim';

$GLOBALS["lang"]['series'] = 'Sērija';

$GLOBALS["lang"]['Series'] = 'Sērija';

$GLOBALS["lang"]['server'] = 'Serveris';

$GLOBALS["lang"]['Server'] = 'Serveris';

$GLOBALS["lang"]['server_id'] = 'Servera ID';

$GLOBALS["lang"]['Server ID'] = 'Servera ID';

$GLOBALS["lang"]['Server Is'] = 'Serveris ir';

$GLOBALS["lang"]['server_item'] = 'Servera elements';

$GLOBALS["lang"]['Server Item'] = 'Servera elements';

$GLOBALS["lang"]['Server Status'] = 'Servera statuss';

$GLOBALS["lang"]['Servers'] = 'Serveri';

$GLOBALS["lang"]['Servers Only'] = 'Tikai serveri';

$GLOBALS["lang"]['service'] = 'Pakalpojums';

$GLOBALS["lang"]['Service'] = 'Pakalpojums';

$GLOBALS["lang"]['service_identifier'] = 'Pakalpojumu identifikators';

$GLOBALS["lang"]['Service Identifier'] = 'Pakalpojumu identifikators';

$GLOBALS["lang"]['service_level_a'] = 'A pakalpojuma līmenis';

$GLOBALS["lang"]['Service Level A'] = 'A pakalpojuma līmenis';

$GLOBALS["lang"]['service_level_b'] = 'B pakalpojuma līmenis';

$GLOBALS["lang"]['Service Level B'] = 'B pakalpojuma līmenis';

$GLOBALS["lang"]['service_network'] = 'Pakalpojumu tīkls';

$GLOBALS["lang"]['Service Network'] = 'Pakalpojumu tīkls';

$GLOBALS["lang"]['service_number'] = 'Pakalpojuma numurs';

$GLOBALS["lang"]['Service Number'] = 'Pakalpojuma numurs';

$GLOBALS["lang"]['service_pack'] = 'Servisa iepakojums';

$GLOBALS["lang"]['Service Pack'] = 'Servisa iepakojums';

$GLOBALS["lang"]['service_plan'] = 'Pakalpojumu plāns';

$GLOBALS["lang"]['Service Plan'] = 'Pakalpojumu plāns';

$GLOBALS["lang"]['service_provider'] = 'Pakalpojumu sniedzējs';

$GLOBALS["lang"]['Service Provider'] = 'Pakalpojumu sniedzējs';

$GLOBALS["lang"]['service_tag'] = 'Servisa tags';

$GLOBALS["lang"]['Service Tag'] = 'Servisa tags';

$GLOBALS["lang"]['service_type'] = 'Pakalpojuma veids';

$GLOBALS["lang"]['Service Type'] = 'Pakalpojuma veids';

$GLOBALS["lang"]['Service Under Windows'] = 'Pakalpojums zem logiem';

$GLOBALS["lang"]['service_version'] = 'Servisa versija';

$GLOBALS["lang"]['Service Version'] = 'Servisa versija';

$GLOBALS["lang"]['Set'] = 'Komplekts';

$GLOBALS["lang"]['set_by'] = 'Iestatīt pēc';

$GLOBALS["lang"]['Set By'] = 'Iestatīt pēc';

$GLOBALS["lang"]['Set by the Discovery function - do not normally set this manually.'] = 'Iestata pēc Atklāšanas funkcijas - parasti to neiestata manuāli.';

$GLOBALS["lang"]['Set by the audit_domain or discover_domain scripts. Do not set.'] = 'Iestata audit_domēna vai atrast_domēna skriptus. Neiestatīt.';

$GLOBALS["lang"]['Set the external text to capitalized version of the internal data.'] = 'Iestatīt ārējo tekstu kapitalizētai iekšējo datu versijai.';

$GLOBALS["lang"]['Set the external text to lowercase.'] = 'Iestatīt ārējo tekstu mazajiem burtiem.';

$GLOBALS["lang"]['Set the external text to uppercase.'] = 'Iestatīt ārējo tekstu uz lielajiem burtiem.';

$GLOBALS["lang"]['Set the size (normal or compact) of the tables on the List screens.'] = 'Iestatiet saraksta ekrānu tabulu izmēru (normālu vai kompaktu).';

$GLOBALS["lang"]['Set this if you wish to insert systems from AD that may not be contactable, but have been seen by AD since that date.'] = 'Iestatiet šo, ja vēlaties ievietot sistēmas no AD, kuras var nebūt kontaktējamas, bet kuras AD ir redzējis kopš šī datuma.';

$GLOBALS["lang"]['Setting up Discovery on a subnet is almost identical to running a regular Discovery via the web interface. The only additional items are the scheduled hour and day(s) and a name for the Scheduled Task itself. You can take advantage of this to schedule multiple discoveries using different sets of credentials.<br><br>As per the Subnet Discovery, the Active Directory Discovery is also simply the same fields as a regular Active Directory Discovery with the addition of a day, hour(s) and name.<br><br>If the Open-AudIT Server has Collectors reporting to it, an additional drop down is provided. You can select this to specify which Collector the task should run on. Only Discovery tasks are supported for Collectors. Specify the same items as a regular Discovery, but provide the alternate Collector to run this task.'] = 'Discovery iestatīšana apakštīklā ir gandrīz identiska regulāra Discovery darbināšanai caur tīmekļa saskarni. Vienīgās papildu vienības ir plānotā stunda un diena(-as) un pašas plānotā uzdevuma nosaukums. Jūs varat izmantot šo, lai ieplānotu vairākus atklājumus, izmantojot dažādus komplektus akreditācijas.<br/><br/>Kā par Subnet Discovery, Active Directory Discovery ir arī vienkārši tie paši lauki kā regulāra Active Directory Discovery ar pievienojot dienu, stundu(-as) un nosaukumu.<br/><br/>Ja Open-AudIT serverim ir kolekcionāri, kas uz to ziņo, tiek nodrošināta papildus nolaižamā ierīce. Jūs varat izvēlēties šo, lai norādītu, uz kuru darbu strādāt. Kolekcionāriem tiek atbalstīti tikai Discovery uzdevumi. Norādiet tos pašus elementus kā regulāru Discovery, bet norādiet aizstājēju Kolekcionāru, lai veiktu šo uzdevumu.';

$GLOBALS["lang"]['severity'] = 'Smagums';

$GLOBALS["lang"]['Severity'] = 'Smagums';

$GLOBALS["lang"]['severity_text'] = 'Smaguma teksts';

$GLOBALS["lang"]['Severity Text'] = 'Smaguma teksts';

$GLOBALS["lang"]['Severity is calculated from the <code>base_score</code> and can be one of: None, Low, Medium, High, Critical.'] = 'Smagumu aprēķina no <code>base_score</code> un var būt viens no: Neviens, zems, vidējs, augsts, kritisks.';

$GLOBALS["lang"]['Seychelles'] = 'Seišelu salas';

$GLOBALS["lang"]['share'] = 'Daļa';

$GLOBALS["lang"]['Share'] = 'Daļa';

$GLOBALS["lang"]['Share Name'] = 'Kopīgojuma nosaukums';

$GLOBALS["lang"]['shared'] = 'Dalīta';

$GLOBALS["lang"]['Shared'] = 'Dalīta';

$GLOBALS["lang"]['shared_name'] = 'Koplietošanas nosaukums';

$GLOBALS["lang"]['Shared Name'] = 'Koplietošanas nosaukums';

$GLOBALS["lang"]['shell'] = 'Čaula';

$GLOBALS["lang"]['Shell'] = 'Čaula';

$GLOBALS["lang"]['Ship Date'] = 'Kuģa datums';

$GLOBALS["lang"]['Shipped are a set of default items. These can be found by going to menu'] = 'Nosūtīti ir virkne noklusējuma posteņiem. Tos var atrast, dodoties uz izvēlni';

$GLOBALS["lang"]['short'] = 'Īss';

$GLOBALS["lang"]['Short'] = 'Īss';

$GLOBALS["lang"]['Should I remove all non-current data from this device?'] = 'Vai man noņemt visus ilglaicīgos datus no šīs ierīces?';

$GLOBALS["lang"]['Should this file (or pattern) be used to exclude files from being reported. Normally, to audit files, this is set to <code>y</code>.'] = 'Ja izmanto šo failu (vai šablonu), lai neziņotu par failiem. Parasti, lai auditētu datnes, tas ir iestatīts uz <code>y</code>.';

$GLOBALS["lang"]['Should this vendor be used when retrieving vulnerabilities from FirstWave.'] = 'Ja šis pārdevējs tiks izmantots, izlādējot ievainojamību no FirstWave.';

$GLOBALS["lang"]['Should we add devices from the remote service, locally.'] = 'Vai pievienot ierīces no attālinātā servisa, lokāli.';

$GLOBALS["lang"]['Should we apply this license to the selected Org as well as the Orgs children?'] = 'Vai mums vajadzētu piemērot šo licenci izvēlētajiem Org, kā arī Orgs bērniem?';

$GLOBALS["lang"]['Should we audit a SAN if the management software is detected.'] = 'Ja mēs auditējam SAN, ja pārvaldības programmatūra tiek atklāta.';

$GLOBALS["lang"]['Should we audit mount points.'] = 'Ja mēs auditu mount punktus.';

$GLOBALS["lang"]['Should we audit netstat ports (yes, no, servers only).'] = 'Ja mēs auditējam netstat portus (jā, nē, tikai serveri).';

$GLOBALS["lang"]['Should we audit the installed software.'] = 'Ja mēs auditējam instalēto programmatūru.';

$GLOBALS["lang"]['Should we consider a filtered port to be an open port - and therefore flag this IP as having a device attached?'] = 'Vai mums vajadzētu uzskatīt filtrētu portu par atvērtu portu - un tāpēc atzīmēt šo IP kā ar pievienotu ierīci?';

$GLOBALS["lang"]['Should we consider an open|filtered port to be an open port - and therefore flag this IP as having a device attached?'] = 'Vai mums vajadzētu uzskatīt atvērtu, filtrētu portu par atvērtu ostu - un tāpēc atzīmēt šo IP kā ar pievienotu ierīci?';

$GLOBALS["lang"]['Should we convert the hostname to lowercase.'] = 'Ja mēs pārvērst hostname uz mazajiem.';

$GLOBALS["lang"]['Should we create a file based on the audit result.'] = 'Vai mums izveidot failu, pamatojoties uz revīzijas rezultātu.';

$GLOBALS["lang"]['Should we expose this group in the web interface.'] = 'Ja mēs pakļautu šo grupu tīmekļa interfeisā.';

$GLOBALS["lang"]['Should we expose this query in the list of reports under the Report menu in the web interface.'] = 'Ja mēs pakļautu šo vaicājumu ziņojumu sarakstā zem ziņojuma izvēlnē tīmekļa interfeisā.';

$GLOBALS["lang"]['Should we expose this query in the list of reports under the Reports menu in the web interface.'] = 'Ja mēs pakļaut šo vaicājumu ziņojumu sarakstā saskaņā ar Atskaites izvēlni tīmekļa interfeisā.';

$GLOBALS["lang"]['Should we hide the audit script window when executing.'] = 'Vai mums slēpt audita skripta logu, kad izpildi.';

$GLOBALS["lang"]['Should we ignore an invalid or self signed SSL certificate and submit the result anyway.'] = 'Ja mēs ignorētu nederīgu vai sevi parakstīts SSL sertifikātu un iesniegt rezultātu vienalga.';

$GLOBALS["lang"]['Should we install Open-Scap on the target machine.'] = 'Ja mēs instalēt Open-Scap uz mērķa mašīna.';

$GLOBALS["lang"]['Should we match a device based mac address even if its a known likely duplicate from VMware.'] = 'Ja mēs atbilstu ierīces balstīta mac adresi, pat ja tā zināms, iespējams dublikāts no VMware.';

$GLOBALS["lang"]['Should we match a device based on its DNS fqdn.'] = 'Ja mēs atbilstu ierīci, pamatojoties uz tās DNS fqdn.';

$GLOBALS["lang"]['Should we match a device based on its DNS hostname.'] = 'Ja mēs atbilstu ierīci, pamatojoties uz tās DNS hostname.';

$GLOBALS["lang"]['Should we match a device based on its UUID.'] = 'Ja mēs atbilstu ierīci, pamatojoties uz tās UUID.';

$GLOBALS["lang"]['Should we match a device based on its dbus id.'] = 'Ja mēs atbilstu ierīci, pamatojoties uz tās dbus id.';

$GLOBALS["lang"]['Should we match a device based on its fqdn.'] = 'Mums vajadzētu saskaņot ierīci, pamatojoties uz tās fqdn.';

$GLOBALS["lang"]['Should we match a device based on its hostname and UUID.'] = 'Vai mums vajadzētu saskaņot ierīci, pamatojoties uz tās datora nosaukumu un UUID.';

$GLOBALS["lang"]['Should we match a device based on its hostname and dbus id.'] = 'Ja mēs atbilstu ierīci, pamatojoties uz tās hostname un dbus id.';

$GLOBALS["lang"]['Should we match a device based on its hostname and serial.'] = 'Mums vajadzētu saskaņot ierīci, pamatojoties uz tās datora nosaukumu un seriālu.';

$GLOBALS["lang"]['Should we match a device based on its ip if we have an existing device with no data.'] = 'Vai mums saskaņot ierīci, pamatojoties uz tās ip, ja mums ir esoša ierīce bez datiem.';

$GLOBALS["lang"]['Should we match a device based on its ip.'] = 'Mums vajadzētu saskaņot ierīci, pamatojoties uz tās ip.';

$GLOBALS["lang"]['Should we match a device based on its mac address.'] = 'Mums vajadzētu saskaņot ierīci, pamatojoties uz tās mac adresi.';

$GLOBALS["lang"]['Should we match a device based on its serial and type.'] = 'Mums vajadzētu saskaņot ierīci, pamatojoties uz tās seriālu un tipu.';

$GLOBALS["lang"]['Should we match a device based on its serial number.'] = 'Ja mēs atbilstu ierīci, pamatojoties uz tās sērijas numuru.';

$GLOBALS["lang"]['Should we match a device based only on its SNMP sysName and serial.'] = 'Ja mēs atbilstu ierīci, pamatojoties tikai uz tās SNMP sysName un seriāls.';

$GLOBALS["lang"]['Should we match a device based only on its SNMP sysName.'] = 'Ja mēs atbilstu ierīci, pamatojoties tikai uz tās SNMP sysName.';

$GLOBALS["lang"]['Should we match a device based only on its hostname.'] = 'Mums vajadzētu saskaņot ierīci, pamatojoties tikai uz tās datora nosaukumu.';

$GLOBALS["lang"]['Should we ping the IP before attempting to scan it? If it does not respond to the ping, skip this device.'] = 'Vai mums vajadzētu ping IP pirms mēģināt skenēt to? Ja tas nereaģē uz ping, izlaist šo ierīci.';

$GLOBALS["lang"]['Should we populate the external system from our local devices.'] = 'Mums vajadzētu aizpildīt ārējo sistēmu no mūsu vietējām ierīcēm.';

$GLOBALS["lang"]['Should we retrieve all DNS names'] = 'Ja mēs iegūt visus DNS nosaukumus';

$GLOBALS["lang"]['Should we run an audit and submit it (y/n).'] = 'Ja mēs veicam revīziju un iesniedzam to (jā/nē).';

$GLOBALS["lang"]['Should we test for SNMP using UDP port 161.'] = 'Ja mēs pārbaudītu SNMP izmantojot UDP portu 161.';

$GLOBALS["lang"]['Should we test for SSH using TCP port 22.'] = 'Ja mēs testējam SSH izmantojot TCP portu 22.';

$GLOBALS["lang"]['Should we test for WMI using TCP port 135.'] = 'Ja mēs pārbaudām WMI, izmantojot TCP portu 135.';

$GLOBALS["lang"]['Should we uninstall the agent (y/n).'] = 'Ja atinstalējam aģentu (jā/nē).';

$GLOBALS["lang"]['Should we use the system or user level proxy to submit the audit result.'] = 'Ja mēs izmantojam sistēmu vai lietotāja līmeņa starpniekserveri iesniegt audita rezultātu.';

$GLOBALS["lang"]['Should we use the win32_product WMI class (not recommended by Microsoft) when retrieving installed software.'] = 'Ja mēs izmantojam win32_product WMI klasi (nav ieteicams Microsoft), izlādējot instalēto programmatūru.';

$GLOBALS["lang"]['Should we use this method to authenticate user credentials. Set to <code>y</code> or <code>n</code>.'] = 'Ja mēs izmantotu šo metodi, lai autentificētu lietotāja akreditācijas datus. Iestatīt uz <code>y</code> vai <code>n</code>.';

$GLOBALS["lang"]['Should we use this method to populate a users roles. The field <code>use_auth</code> must be set to <code>y</code> to use this. Set to <code>y</code> or <code>n</code>.'] = 'Ja mēs izmantojam šo metodi, lai aizpildītu lietotāju lomas. Lauks <code>use_auth</code> jābūt iestatītam uz <code>y</code> lai izmantotu šo. Iestatīt uz <code>y</code> vai <code>n</code>.';

$GLOBALS["lang"]['Should we use this value to match external and internal devices. Our default Integration uses IP and UUID here. If either of these match between external and internal device, we consider them to be the same device.'] = 'Ja mēs izmantotu šo vērtību, lai atbilstu ārējām un iekšējām ierīcēm. Mūsu noklusējuma integrācija izmanto IP un UUID šeit. Ja kāds no šiem atbilst starp ārējo un iekšējo ierīci, mēs uzskatām, ka tās pašas ierīces.';

$GLOBALS["lang"]['Show All'] = 'Rādīt visu';

$GLOBALS["lang"]['sid'] = 'Sid';

$GLOBALS["lang"]['Sid'] = 'Sid';

$GLOBALS["lang"]['sidebar'] = 'Sānjosla';

$GLOBALS["lang"]['Sidebar'] = 'Sānjosla';

$GLOBALS["lang"]['Sierra Leone'] = 'Singapūra';

$GLOBALS["lang"]['Singapore'] = 'Singapūra';

$GLOBALS["lang"]['Site A'] = 'A vieta';

$GLOBALS["lang"]['Site B'] = 'B vieta';

$GLOBALS["lang"]['site_hours_a'] = 'Vietas stundas A';

$GLOBALS["lang"]['Site Hours A'] = 'Vietas stundas A';

$GLOBALS["lang"]['site_hours_b'] = 'Vietas stundas B';

$GLOBALS["lang"]['Site Hours B'] = 'Vietas stundas B';

$GLOBALS["lang"]['size'] = 'Izmērs';

$GLOBALS["lang"]['Size'] = 'Izmērs';

$GLOBALS["lang"]['slaves'] = 'Vergi';

$GLOBALS["lang"]['Slaves'] = 'Vergi';

$GLOBALS["lang"]['Slovak'] = 'Slovāku';

$GLOBALS["lang"]['Slovakia (Slovak Republic)'] = 'Slovākija (Slovākijas Republika)';

$GLOBALS["lang"]['Slovenia'] = 'Slovēnija';

$GLOBALS["lang"]['Slovenian'] = 'Slovēņu';

$GLOBALS["lang"]['Smart Status'] = 'Vieds statuss';

$GLOBALS["lang"]['smversion'] = 'Aptumšojums';

$GLOBALS["lang"]['Smversion'] = 'Aptumšojums';

$GLOBALS["lang"]['Sneaky'] = 'Sneaky';

$GLOBALS["lang"]['snmp_enterprise_id'] = 'Snmp uzņēmuma ID';

$GLOBALS["lang"]['Snmp Enterprise ID'] = 'Snmp uzņēmuma ID';

$GLOBALS["lang"]['snmp_enterprise_name'] = 'Snmp uzņēmuma nosaukums';

$GLOBALS["lang"]['Snmp Enterprise Name'] = 'Snmp uzņēmuma nosaukums';

$GLOBALS["lang"]['snmp_oid'] = 'Snmp Oid';

$GLOBALS["lang"]['Snmp Oid'] = 'Snmp Oid';

$GLOBALS["lang"]['snmp_timeout'] = 'Snmp noildze';

$GLOBALS["lang"]['Snmp Timeout'] = 'Snmp noildze';

$GLOBALS["lang"]['snmp_version'] = 'Snmp versija';

$GLOBALS["lang"]['Snmp Version'] = 'Snmp versija';

$GLOBALS["lang"]['So a script is not working on a recalcitrant device. Grrr. The scripts for Windows, Linux, and MacOS all accept the debugging argument. This can be set in the script itself, or provided on the command line. Run the script using that option set to 5 and you should see in which section of the script the failure occurs. For example'] = 'Tātad skripts nedarbojas uz rekalitrējošas ierīces. Grrr. Windows, Linux un MacOS skripti pieņem atkļūdošanas argumentu. Šo var iestatīt pašā skriptā vai norādīt komandrindā. Palaist skriptu, izmantojot šo iespēju uz 5, un jums vajadzētu redzēt, kurā sadaļā skripts neveiksme notiek. Piemēram';

$GLOBALS["lang"]['So apart from a regular word, what other options are there - I am glad you asked! As per the standard Open-AudIT API, we have several operators for filtering. Operators that can precede the value are'] = 'Tātad, izņemot regulāru vārdu, kādas citas iespējas ir tur - Es priecājos jums jautāja! Kā par standarta Open-AudIT API, mums ir vairāki operatori filtrēšanai. Operatori, kas var pirms vērtības ir';

$GLOBALS["lang"]['So you have an issue providing Open-AudIT credentials to discover your devices. I have an answer - dont then! Sure, I mean, discovery is the best thing since sliced bread. You do not need to know ahead of time <i>Whats On Your Network</i>. But how can you extract data from devices without providing credentials?<br><br>In the case of computers, an easy option is to copy the appropriate audit script to the target machines and set it to execute on a schedule. More details on the wiki. The machines will send their data to Open-AudIT on that schedule, almost as if you were running discovery. The device simply runs the audit script on a schedule (again, you can read the audit script) as the user you tell it to and sends the output to the server. No credentials are involved at all.<br><br>And now we have Agents for Windows. The advantages of an actual installed Agent are'] = 'Tātad jums ir jautājums, kas nodrošina Open-AudIT akreditācijas datus, lai atklātu jūsu ierīces. Man ir atbilde! Protams, atklājums ir labākais kopš maizes šķēlēs. Jums nav jāzina pirms laika <i>Kas ir jūsu tīklā</i>. Bet kā jūs varat iegūt datus no ierīcēm, nesniedzot datus?<br/><br/>Datoru gadījumā viegli ir nokopēt atbilstošo audita skriptu mērķa mašīnām un iestatīt to izpildīt grafikā. Vairāk informācijas par wiki. Mašīnas nosūtīs savus datus Open-AudIT par šo grafiku, gandrīz tā, it kā jūs darbināt atklāšanas. Ierīce vienkārši vada audita skriptu grafikā (atkal, jūs varat izlasīt audita skriptu) kā lietotājs jums pateikt to un nosūta izvadu uz serveri. Pilnvaras vispār nav iesaistītas.<br/><br/>Un tagad mums ir Windows aģenti. Faktiskā uzstādītā aģenta priekšrocības ir';

$GLOBALS["lang"]['socket'] = 'Ligzda';

$GLOBALS["lang"]['Socket'] = 'Ligzda';

$GLOBALS["lang"]['software'] = 'Programmatūra';

$GLOBALS["lang"]['Software'] = 'Programmatūra';

$GLOBALS["lang"]['Software Found Last 7 Days'] = 'Programmatūra atrasta Pēdējo 7 dienu laikā';

$GLOBALS["lang"]['Software Found Today'] = 'Programmatūra atrasta šodien';

$GLOBALS["lang"]['Software Found Yesterday'] = 'Programmatūra atrasta vakar';

$GLOBALS["lang"]['software_key'] = 'Programmatūras atslēga';

$GLOBALS["lang"]['Software Key'] = 'Programmatūras atslēga';

$GLOBALS["lang"]['Software License Reporting'] = 'Ziņošana par programmatūras licencēm';

$GLOBALS["lang"]['software_name'] = 'Programmatūras nosaukums';

$GLOBALS["lang"]['Software Name'] = 'Programmatūras nosaukums';

$GLOBALS["lang"]['Software Policies'] = 'Programmatūras politika';

$GLOBALS["lang"]['software_revision'] = 'Programmatūras pārskatīšana';

$GLOBALS["lang"]['Software Revision'] = 'Programmatūras pārskatīšana';

$GLOBALS["lang"]['software_version'] = 'Programmatūras versija';

$GLOBALS["lang"]['Software Version'] = 'Programmatūras versija';

$GLOBALS["lang"]['Solaris'] = 'Solaris';

$GLOBALS["lang"]['Solomon Islands'] = 'Zālamana salas';

$GLOBALS["lang"]['Somalia, Somali Republic'] = 'Somālijas Republika';

$GLOBALS["lang"]['Some collections can be executed - queries, etc - see below.'] = 'Dažas kolekcijas var izpildīt - vaicājumi utt - skatīt zemāk.';

$GLOBALS["lang"]['Some examples are at the bottom of this page. All endpoints also have a minimum list of required fields. These are below.'] = 'Daži piemēri ir šīs lapas apakšā. Visiem beigupunktiem ir arī minimālais vajadzīgo lauku saraksts. Tie ir zemāk.';

$GLOBALS["lang"]['Some of our templates support the new move to dataTables, using server side processing. This massivley improves load times.'] = 'Dažas no mūsu veidnēm atbalsta jauno pāreju uz dataTables, izmantojot servera sānu apstrādi. Masivley uzlabo slodzes laiku.';

$GLOBALS["lang"]['Some other error has occurred when attempting to bind to the LDAP server. It is contactable (ie, the <i>connect</i> above has worked), but for some other reason, binding has not occurred. Check the logs on the LDAP server.'] = 'Ir notikusi kāda cita kļūda mēģinot piesaistīties LDAP serverim. Tas ir pieejams (t.i., <i>pieslēgties</i> iepriekš ir strādājusi), bet kāda cita iemesla dēļ saistoša nav notikusi. Pārbaudiet žurnālus uz LDAP servera.';

$GLOBALS["lang"]['Something has gone seriously wrong. Open-AudIT cannot read the <i>orgs</i> table.'] = 'Kaut kas ir nogājis nopietni nepareizi. Open- AudIT nevar nolasīt <i>orgs</i> tabula.';

$GLOBALS["lang"]['Something has gone seriously wrong. Open-AudIT cannot read the <i>roles</i> table.'] = 'Kaut kas ir nogājis nopietni nepareizi. Open- AudIT nevar nolasīt <i>lomas</i> tabula.';

$GLOBALS["lang"]['Sometimes agentless discovery just does not fit your use-case. Maybe your PCs have tight firewalls. Maybe they are not on the network when your discoveries are scheduled. Maybe they are used by remote workers. Whatever the case, this is where an agent can help. Install it on the target machine and it will <i>check-in</i> with your Open-AudIT server on a schedule and accept tasks. The most common task the server requests is for the agent to audit itself and send the result.'] = 'Dažreiz bezaģenta atklājums vienkārši neatbilst jūsu lietošanai. Varbūt jūsu datoriem ir cieši ugunsmūri. Varbūt tie nav tīklā, kad jūsu atklājumi ir ieplānoti. Varbūt tos izmanto attāli strādnieki. Jebkurā gadījumā, tas ir, ja aģents var palīdzēt. Instalēt to uz mērķa mašīna un tas <i>reģistrācija</i> ar savu Open-AudIT serveri grafiku un pieņemt uzdevumus. Izplatītākais uzdevums, ko serveris pieprasa, ir aģentam pašam veikt revīziju un nosūtīt rezultātu.';

$GLOBALS["lang"]['Sort'] = 'Kārtot';

$GLOBALS["lang"]['sound'] = 'Skaņa';

$GLOBALS["lang"]['Sound'] = 'Skaņa';

$GLOBALS["lang"]['source'] = 'Avots';

$GLOBALS["lang"]['Source'] = 'Avots';

$GLOBALS["lang"]['South Africa'] = 'Dienvidāfrika';

$GLOBALS["lang"]['South Georgia and the South Sandwich Islands'] = 'Dienviddžordžija un Dienvidsendviču salas';

$GLOBALS["lang"]['Spain'] = 'Spānija';

$GLOBALS["lang"]['Spanish'] = 'Spāņu';

$GLOBALS["lang"]['Specific to Azure.'] = 'Īpašs Azure.';

$GLOBALS["lang"]['Specific to OKTA.'] = 'Īpašs OKTA.';

$GLOBALS["lang"]['Specifies a comma-separated list of targets (no spaces) to be excluded from the scan. The list you pass in uses normal Nmap syntax, so it can include hostnames, CIDR netblocks, octet ranges, etc.'] = 'Norāda ar komatu atdalītu mērķu sarakstu (nav atstarpju), ko izslēgt no skenēšanas. Saraksts jums iet izmanto normālu Nmap sintakse, lai tā var ietvert hostnames, CIDR netblocks, oktet diapazoni, utt.';

$GLOBALS["lang"]['speed'] = 'Ātrums';

$GLOBALS["lang"]['Speed'] = 'Ātrums';

$GLOBALS["lang"]['speed_down_a'] = 'Ātrums uz leju A';

$GLOBALS["lang"]['Speed Down A'] = 'Ātrums uz leju A';

$GLOBALS["lang"]['speed_down_b'] = 'Ātrums uz leju B';

$GLOBALS["lang"]['Speed Down B'] = 'Ātrums uz leju B';

$GLOBALS["lang"]['speed_up_a'] = 'Paātrināt A';

$GLOBALS["lang"]['Speed Up A'] = 'Paātrināt A';

$GLOBALS["lang"]['speed_up_b'] = 'Paātrināt';

$GLOBALS["lang"]['Speed Up B'] = 'Paātrināt';

$GLOBALS["lang"]['sql'] = 'Sql';

$GLOBALS["lang"]['Sql'] = 'Sql';

$GLOBALS["lang"]['Sri Lanka'] = 'Šrilanka';

$GLOBALS["lang"]['ssh_ports'] = 'Ssh ostas';

$GLOBALS["lang"]['Ssh Ports'] = 'Ssh ostas';

$GLOBALS["lang"]['ssh_timeout'] = 'Ssh noildze';

$GLOBALS["lang"]['Ssh Timeout'] = 'Ssh noildze';

$GLOBALS["lang"]['Stage 1: Documentation review'] = 'posms: dokumentācijas pārskatīšana';

$GLOBALS["lang"]['Stage 2: Implementation and effectiveness review'] = 'posms: Īstenošana un efektivitātes pārskatīšana';

$GLOBALS["lang"]['Stand-Alone'] = 'Vienstāva';

$GLOBALS["lang"]['Standard'] = 'Standarta';

$GLOBALS["lang"]['standard_id'] = 'Standarta ID';

$GLOBALS["lang"]['Standard ID'] = 'Standarta ID';

$GLOBALS["lang"]['standards'] = 'Standarti';

$GLOBALS["lang"]['Standards'] = 'Standarti';

$GLOBALS["lang"]['standards_policies'] = 'Standartu politika';

$GLOBALS["lang"]['Standards Policies'] = 'Standartu politika';

$GLOBALS["lang"]['standards_results'] = 'Standartu rezultāti';

$GLOBALS["lang"]['Standards Results'] = 'Standartu rezultāti';

$GLOBALS["lang"]['start_date'] = 'Sākuma datums';

$GLOBALS["lang"]['Start Date'] = 'Sākuma datums';

$GLOBALS["lang"]['start_mode'] = 'Sākuma režīms';

$GLOBALS["lang"]['Start Mode'] = 'Sākuma režīms';

$GLOBALS["lang"]['Start a web browser and go to'] = 'Sākt tīmekļa pārlūku un doties uz';

$GLOBALS["lang"]['started_date'] = 'Sākuma datums';

$GLOBALS["lang"]['Started Date'] = 'Sākuma datums';

$GLOBALS["lang"]['Starting June 2018 Google has implemented a pay-as-you-go pricing model for the Google Maps Platform APIs. Previously, most users with moderate usage could use Google Maps, which are embedded into opCharts and Open-AudIT Professional/Enterprise, for free. Googles new policy is outlined here,'] = 'Sākot no 2018. gada jūnija Google ir ieviesis pay-as-you-go cenu modeli Google Maps Platform API. Iepriekš lielākā daļa lietotāju ar mērenu lietošanu varētu izmantot Google Maps, kas ir iestrādāti opCharts un Open-AudIT Professional/Enterprise, bez maksas. Google jaunā politika ir izklāstīta šeit,';

$GLOBALS["lang"]['Starts With'] = 'Sākas ar';

$GLOBALS["lang"]['state'] = 'Stāvoklis';

$GLOBALS["lang"]['State'] = 'Stāvoklis';

$GLOBALS["lang"]['Stats'] = 'Stati';

$GLOBALS["lang"]['status'] = 'Statuss';

$GLOBALS["lang"]['Status'] = 'Statuss';

$GLOBALS["lang"]['Storage'] = 'Uzglabāšana';

$GLOBALS["lang"]['storage_count'] = 'Glabāšanas skaits';

$GLOBALS["lang"]['Storage Count'] = 'Glabāšanas skaits';

$GLOBALS["lang"]['Storage area network'] = 'Glabāšanas apgabala tīkls';

$GLOBALS["lang"]['Storage-Area Network'] = 'Glabāšanas apgabala tīkls';

$GLOBALS["lang"]['string'] = 'Virkne';

$GLOBALS["lang"]['String'] = 'Virkne';

$GLOBALS["lang"]['sub_resource_id'] = 'Resursu apakš ID';

$GLOBALS["lang"]['Sub Resource ID'] = 'Resursu apakš ID';

$GLOBALS["lang"]['sub_type'] = 'Apakštips';

$GLOBALS["lang"]['Sub Type'] = 'Apakštips';

$GLOBALS["lang"]['subject_key_ident'] = 'Objekta atslēgas datne';

$GLOBALS["lang"]['Subject Key Ident'] = 'Objekta atslēgas datne';

$GLOBALS["lang"]['Submit'] = 'Nosūtīt';

$GLOBALS["lang"]['Submit Online'] = 'Iesniegt tiešsaistē';

$GLOBALS["lang"]['Submitted From'] = 'Nosūtīts no';

$GLOBALS["lang"]['Subnet'] = 'Apakštīkls';

$GLOBALS["lang"]['Subnet Discoveries'] = 'Apakštīkla atklājumi';

$GLOBALS["lang"]['Subscription ID'] = 'Pieraksta ID';

$GLOBALS["lang"]['suburb'] = 'Suburb';

$GLOBALS["lang"]['Suburb'] = 'Suburb';

$GLOBALS["lang"]['Success'] = 'Panākumi';

$GLOBALS["lang"]['Sudan'] = 'Sudāna';

$GLOBALS["lang"]['Sudo Password'] = 'Sudo parole';

$GLOBALS["lang"]['Sudo Password (optional)'] = 'Sudo parole (pēc izvēles)';

$GLOBALS["lang"]['suite'] = 'Suite';

$GLOBALS["lang"]['Suite'] = 'Suite';

$GLOBALS["lang"]['summaries'] = 'Kopsavilkumi';

$GLOBALS["lang"]['Summaries'] = 'Kopsavilkumi';

$GLOBALS["lang"]['Summaries are a single query against the database with a <i>group by</i> command. Using this simple method we can easily create a summary for virtually any attribute.<br><br>We no longer require a separate report for each <i>type</i> of a device. We now simply have a summary that groups by <i>devices.type</i> and shows the result. You can then click on a given type from the list and see the matching devices. In this case, one Summary replaces (potentially) 78 reports (there are 78 device types).<br><br>A summary is different to a query in that a summary is designed to group items by a given attribute then provide a <i>click through</i> link to the actual devices. A query is simply a list of items with no further links. As above - this of a Summary as a combined <i>report + subreport</i>, whereas a query is simply a single Report.<br><br>Summaries have a different collection template to the other resources within Open-AudIT. This template shows the Summary as you would expect and also shows buttons with counts of other resources. This page is designed to be the HomePage of Open-AudIT.'] = 'Kopsavilkumi ir viens vaicājums pret datu bāzi ar <i>grupa</i> komanda. Izmantojot šo vienkāršo metodi, mēs varam viegli izveidot kopsavilkumu praktiski jebkuram atribūtam.<br/><br/>Mums vairs nav nepieciešams atsevišķs ziņojums par katru <i>Veids</i> ierīces. Mums tagad vienkārši ir kopsavilkums, kas grupām <i>ierīcēm. Veids</i> un parāda rezultātu. Pēc tam jūs varat noklikšķināt uz konkrētā tipa no saraksta un redzēt atbilstošas ierīces. Šajā gadījumā viens kopsavilkums aizstāj (potenciāli) 78 ziņojumus (ir 78 ierīču tipi).<br/><br/>Kopsavilkums atšķiras ar vaicājumu, ka kopsavilkums ir paredzēts grupēt priekšmetus ar doto atribūtu, tad sniedziet <i>klikšķiniet cauri</i> saite uz faktiskajām ierīcēm. Vaicājums ir vienkārši saraksts ar vienumiem bez papildu saites. Kā iepriekš - tas no kopsavilkuma kā kopā <i>ziņojums + apakšziņojums</i>, bet jautājums ir vienkārši viens ziņojums.<br/><br/>Kopsavilkumiem ir cita kolekcijas veidne nekā pārējiem Open-AudIT resursiem. Šī sagatave rāda kopsavilkumu, kā jūs varētu sagaidīt, un arī rāda pogas ar skaitu citu resursu. Šī lapa ir paredzēta kā HomePage Open-AudIT.';

$GLOBALS["lang"]['Summaries are designed to group items by a particular matching column and then to provide a link to individual devices. In the previous versions of Open-AudIT, this would have been two different items - a report and subreport. We have now bundled these into what we call a Summary.'] = 'Kopsavilkumi ir paredzēti, lai grupētu objektus ar konkrētu atbilstošo kolonnu un pēc tam nodrošinātu saiti uz atsevišķām ierīcēm. Iepriekšējās Open-AudIT versijās tas būtu bijis divi dažādi posteņi - ziņojums un apakšziņojums. Tagad mēs tos esam apkopojuši kopsavilkumā.';

$GLOBALS["lang"]['Summaries provide drilldown reporting capabilities. Simple, intuitive, powerful.'] = 'Kopsavilkumi nodrošina urbšanas ziņošanas iespējas. Vienkārši, intuitīvi, spēcīgi.';

$GLOBALS["lang"]['Summaries take the same arguments as Queries.'] = 'Kopsavilkumos ir tādi paši argumenti kā Queries.';

$GLOBALS["lang"]['Summary'] = 'Kopsavilkums';

$GLOBALS["lang"]['Sunday'] = 'Svētdiena';

$GLOBALS["lang"]['supplier'] = 'Piegādātājs';

$GLOBALS["lang"]['Supplier'] = 'Piegādātājs';

$GLOBALS["lang"]['Support'] = 'Atbalsts';

$GLOBALS["lang"]['Supported types are <code>subnet</code>, <code>seed</code> and <code>active directory</code>.'] = 'Atbalstītie veidi ir: <code>subnet</code>, <code>seed</code> kā arī <code>active directory</code>.';

$GLOBALS["lang"]['Supports compliance with legal and regulatory requirements'] = 'Atbalsta atbilstību tiesiskajām un normatīvajām prasībām';

$GLOBALS["lang"]['Suriname'] = 'Surinama';

$GLOBALS["lang"]['Surveillance Audits:</strong> Annual audits to maintain certification'] = 'Uzraudzības revīzijas: Ikgadējās revīzijas sertifikācijas uzturēšanai';

$GLOBALS["lang"]['Svalbard & Jan Mayen Islands'] = 'Svalbāra un Janu Majenu salas';

$GLOBALS["lang"]['Swaziland'] = 'Svazilenda';

$GLOBALS["lang"]['Sweden'] = 'Zviedrija';

$GLOBALS["lang"]['Swedish'] = 'Zviedru';

$GLOBALS["lang"]['switch_device_id'] = 'Pārslēgt ierīces ID';

$GLOBALS["lang"]['Switch Device ID'] = 'Pārslēgt ierīces ID';

$GLOBALS["lang"]['switch_port'] = 'Pārslēgt portu';

$GLOBALS["lang"]['Switch Port'] = 'Pārslēgt portu';

$GLOBALS["lang"]['Switzerland, Swiss Confederation'] = 'Šveice, Šveices Konfederācija';

$GLOBALS["lang"]['Symptom'] = 'Simptomi';

$GLOBALS["lang"]['Syrian Arab Republic'] = 'Sīrijas Arābu Republika';

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

$GLOBALS["lang"]['system_component'] = 'Sistēmas komponente';

$GLOBALS["lang"]['System Component'] = 'Sistēmas komponente';

$GLOBALS["lang"]['System-Area Network'] = 'Sistēmas apgabalu tīkls';

$GLOBALS["lang"]['TX Bitrate'] = 'TX bitātrums';

$GLOBALS["lang"]['TX Freq'] = 'TX Freq';

$GLOBALS["lang"]['TX Level'] = 'TX līmenis';

$GLOBALS["lang"]['TX Power'] = 'TX jauda';

$GLOBALS["lang"]['TX Profile'] = 'TX profils';

$GLOBALS["lang"]['Table'] = 'Tabula';

$GLOBALS["lang"]['tag'] = 'Tags';

$GLOBALS["lang"]['Tag'] = 'Tags';

$GLOBALS["lang"]['tag_1'] = '1. tags';

$GLOBALS["lang"]['Tag 1'] = '1. tags';

$GLOBALS["lang"]['tag_2'] = '2. tags';

$GLOBALS["lang"]['Tag 2'] = '2. tags';

$GLOBALS["lang"]['tag_3'] = '3. tags';

$GLOBALS["lang"]['Tag 3'] = '3. tags';

$GLOBALS["lang"]['Tagalog'] = 'Tagalogs';

$GLOBALS["lang"]['tags'] = 'Tagi';

$GLOBALS["lang"]['Tags'] = 'Tagi';

$GLOBALS["lang"]['Tags :: '] = 'Tagi :: ';

$GLOBALS["lang"]['Taiwan'] = 'Taivāna';

$GLOBALS["lang"]['Tajikistan'] = 'Tadžikija';

$GLOBALS["lang"]['Take note of all output and action each item as appropriate.'] = 'Ņemt vērā visu rezultātu un darbību katru posteni pēc vajadzības.';

$GLOBALS["lang"]['Tanzania'] = 'Tanzānija';

$GLOBALS["lang"]['Target Computer'] = 'Mērķa dators';

$GLOBALS["lang"]['task'] = 'Uzdevums';

$GLOBALS["lang"]['Task'] = 'Uzdevums';

$GLOBALS["lang"]['tasks'] = 'Uzdevumi';

$GLOBALS["lang"]['Tasks'] = 'Uzdevumi';

$GLOBALS["lang"]['Tasks can be one of several distinct types: Baseline, Discovery, Report, Query, Summary or Collector.'] = 'Uzdevumi var būt viens no vairākiem atšķirīgiem veidiem: Baseline, Discovery, Report, Query, Summary vai Collector.';

$GLOBALS["lang"]['tcp_ports'] = 'Tcp porti';

$GLOBALS["lang"]['Tcp Ports'] = 'Tcp porti';

$GLOBALS["lang"]['Technical Details'] = 'Tehniskās detaļas';

$GLOBALS["lang"]['tenant'] = 'Noturīgs';

$GLOBALS["lang"]['Tenant'] = 'Noturīgs';

$GLOBALS["lang"]['Tenant ID'] = 'Uzturētāja ID';

$GLOBALS["lang"]['Tennant ID'] = 'Tennanta ID';

$GLOBALS["lang"]['ternary'] = 'Jūras līdaka';

$GLOBALS["lang"]['Ternary'] = 'Jūras līdaka';

$GLOBALS["lang"]['Test 1'] = 'tests';

$GLOBALS["lang"]['Test 2'] = 'tests';

$GLOBALS["lang"]['Test 3'] = 'tests';

$GLOBALS["lang"]['Test Email'] = 'Pārbaudīt e- pastu';

$GLOBALS["lang"]['test_minutes'] = 'Testa protokols';

$GLOBALS["lang"]['Test Minutes'] = 'Testa protokols';

$GLOBALS["lang"]['test_os'] = 'Os tests';

$GLOBALS["lang"]['Test Os'] = 'Os tests';

$GLOBALS["lang"]['test_subnet'] = 'Testa apakštīkls';

$GLOBALS["lang"]['Test Subnet'] = 'Testa apakštīkls';

$GLOBALS["lang"]['tests'] = 'Testi';

$GLOBALS["lang"]['Tests'] = 'Testi';

$GLOBALS["lang"]['Text'] = 'Teksts';

$GLOBALS["lang"]['Thai'] = 'Taizemiešu';

$GLOBALS["lang"]['Thailand'] = 'Taizeme';

$GLOBALS["lang"]['Thank you for starting your journey with the best discovery and inventory tool around.'] = 'Paldies, ka uzsākāt savu ceļojumu ar labāko atklāšanas un inventāra rīku apkārt.';

$GLOBALS["lang"]['Thanks to'] = 'Paldies';

$GLOBALS["lang"]['Thats it! You have just edited the attributes of as many devices as you need to.'] = 'Tas arī viss! Jūs esat tikko rediģējis atribūtus tik daudz ierīču, cik nepieciešams.';

$GLOBALS["lang"]['The <i>Roles</i> endpoint allows you to manage the set of permissions(Create, Read, Update, Delete) that are granted to the users and are applied to each endpoint.'] = 'E ir o pa s <i>Lomas</i> galapunkts ļauj pārvaldīt atļauju komplektu (Izveidot, lasīt, atjaunināt, svītrot), kas tiek piešķirts lietotājiem un tiek piemērots katram galapunktam.';

$GLOBALS["lang"]['The API uses a cookie. You can request a cookie by sending a POST to the URL below, containing the username and password attributes and values:'] = 'API izmanto sīkdatni. Jūs varat pieprasīt sīkdatni, nosūtot POST uz zemāk norādīto URL, kurā ir lietotājvārds un paroles atribūti un vērtības:';

$GLOBALS["lang"]['The Active Directory domain to retrieve a list of subnets from.'] = 'Aktīvās mapes domēns, no kura iegūt apakštīklu sarakstu.';

$GLOBALS["lang"]['The Active Directory server to retrieve a list of subnets from.'] = 'Aktīvās mapes serveris, no kura iegūt apakštīklu sarakstu.';

$GLOBALS["lang"]['The Applications endpoint allows you to define an application which you can then associate to a device (or devices).'] = 'Lietotņu galapunkts ļauj definēt programmu, kuru pēc tam varat asociēt ar ierīci (vai ierīcēm).';

$GLOBALS["lang"]['The Attributes endpoint allows you to add customized values to different attributes in Open-AudIT, at the moment this feature works on the Class, Environment, Status and Type attributes on Devices, the Type attribute for both Locations and Orgs as well as the Menu Category for Queries. If you view an item of one of the prvious types (say view a Lkocation) you will notice the Type attribute must be selected from a drop-down box. This is where those values are stored. Hence, if you would like to add a new Type to be chosen for a Location, add it using the Attributes feature.'] = 'Atribūtu galapunkts ļauj pievienot pielāgotās vērtības dažādiem Open-AudIT atribūtiem, brīdī, kad šī funkcija darbojas uz Klases, vides, statusa un tipa atribūtiem ierīcēs, tipa atribūtu gan atrašanās vietām, gan orgiem, kā arī izvēlnes kategoriju vaicājumiem. Ja jūs apskatīt objektu no viena no neprātīgs veidiem (say apskatīt Lkocation), jūs ievērosiet Type atribūts ir jāizvēlas nolaižamā lodziņā. Šeit šīs vērtības tiek glabātas. Tātad, ja vēlaties pievienot jaunu tipu, kas tiks izvēlēts atrašanās vietai, pievienojiet to, izmantojot atribūtu funkciju.';

$GLOBALS["lang"]['The Automatable metric captures the answer to the question <strong>Can an attacker automate exploitation events for this vulnerability across multiple targets?</strong> based on steps 1-4 of the kill chain. These steps are reconnaissance, weaponization, delivery, and exploitation (Not Defined, No, Yes).'] = 'Automatizējamā metrika tver atbildi uz jautājumu <strong>Vai uzbrucējs var automatizēt ekspluatācijas notikumus šīs neaizsargātības pār vairākiem mērķiem?</strong> pamatojoties uz nogalināšanas ķēdes 1.–4. posmu. Šie soļi ir izlūkošana, ierocis, piegāde, un ekspluatācija (nav definēts, Nē, Jā).';

$GLOBALS["lang"]['The CVE has been marked as invalid or withdrawn in the CVE List. It remains in the NVD but is excluded from default search results.'] = 'CVE ir atzīmēts kā nederīgs vai atsaukts CVE sarakstā. Tā paliek NVD, bet ir izslēgta no noklusējuma meklēšanas rezultātiem.';

$GLOBALS["lang"]['The CVE has been published to the CVE List and included in the NVD dataset. Initial ingestion only.'] = 'CVE ir publicēta CVE sarakstā un iekļauta NVD datu kopā. Tikai sākotnējai norīšanai.';

$GLOBALS["lang"]['The CVE has been updated after initial analysis. NVD enrichment data may have been revised.'] = 'CVE tika atjaunināta pēc sākotnējās analīzes. NVD bagātināšanas dati varētu būt pārskatīti.';

$GLOBALS["lang"]['The CVE identifier.'] = 'CVE identifikators.';

$GLOBALS["lang"]['The CVE is actively being enriched with CVSS scores, CWE classifications, reference tags, and CPE applicability.'] = 'CVE tiek aktīvi bagātināta ar CVSS rādītājiem, CWE klasifikāciju, atsauces zīmēm un CPE piemērojamību.';

$GLOBALS["lang"]['The CVE is not currently prioritized for enrichment due to resource constraints or other reasons.'] = 'CVE pašlaik nav prioritizēts bagātināšanai resursu ierobežojumu vai citu iemeslu dēļ.';

$GLOBALS["lang"]['The CVE is queued for enrichment by NVD analysts. No detailed metadata yet.'] = 'NVD analītiķi ir ierindojuši CVE bagātināšanai. Vēl nav detalizētu metadatu.';

$GLOBALS["lang"]['The Cloud that owns this item. Links to <code>clouds.id</code>.'] = 'Mākonis, kam pieder šī vienība. Saites uz <code>clouds.id</code>.';

$GLOBALS["lang"]['The Device Seed Discovery type is the newest highly-effective method for network crawling, giving you the ability to target your network as narrowly or as broadly as you need. It is fast, it works and it is great.'] = 'Ierīces Seed Discovery tips ir visjaunākā ļoti efektīvā metode tīkla rāpošanai, kas dod iespēju mērķēt uz jūsu tīklu tik šauri vai tik plaši, cik nepieciešams. Tas ir ātri, tas darbojas, un tas ir lieliski.';

$GLOBALS["lang"]['The Discovery Scan Options we ship are detailed in the table below. As above, Enterprise users can create more of these or edit the shipped items.'] = 'Atklāšanas skenēšana Iespējas mēs kuģi ir detalizēti tabulā zemāk. Kā iepriekš, Enterprise lietotāji var izveidot vairāk no šiem vai rediģēt nosūtītos priekšmetus.';

$GLOBALS["lang"]['The Elevated User query'] = 'Paaugstināts lietotāja vaicājums';

$GLOBALS["lang"]['The Executables feature scans the disk of a device as part of the audit and checks that every executable file is known to the package manager. Because it uses the package manager, the feature applies to Linux target devices only, and further than that, only rpm or deb based distributions. Anything Redhat or Debian based should work.'] = 'Izpildāmie faili skenē ierīces disku kā revīzijas daļu un pārbauda, vai katrs izpildāmais fails ir zināms pakotņu pārvaldniekam. Tā kā tas izmanto pakotņu pārvaldnieku, funkcija attiecas tikai uz Linux mērķa ierīcēm, un vēl vairāk, tikai uz apgr./min vai deb balstītu distributīviem. Jebkas Redhat vai Debian balstītu jāstrādā.';

$GLOBALS["lang"]['The FROM'] = 'No';

$GLOBALS["lang"]['The Group used to run the Baseline. Links to <code>groups.id</code>.'] = 'Grupa izmantoja, lai palaistu bāzes līniju. Saites uz <code>groups.id</code>.';

$GLOBALS["lang"]['The ID from the devices table (the devices.name will be displayed) of the NTU at this end of the connection. Links to <code>devices.id</code>.'] = 'NTU ID no ierīču tabulas (ierīces. nosaukums tiks parādīts) šajā savienojuma beigās. Saites uz <code>devices.id</code>.';

$GLOBALS["lang"]['The ID from the imported benchmark policy.'] = 'Importēto etalonu politikas ID.';

$GLOBALS["lang"]['The ID from the locations table (the locations.name will be displayed) of this end of the connection. Links to <code>locations.id</code>. The A location is usually the <code>FROM</code> location.'] = 'Savienojuma beigu ID no atrašanās vietu tabulas (vietas. nosaukums tiks parādīts). Saites uz <code>locations.id</code>. A vieta parasti ir <code>FROM</code> atrašanās vieta.';

$GLOBALS["lang"]['The ID from the locations table (the locations.name will be displayed) of this end of the connection. Links to <code>locations.id</code>. The B location is usually the <code>TO</code> location.'] = 'Savienojuma beigu ID no atrašanās vietu tabulas (vietas. nosaukums tiks parādīts). Saites uz <code>locations.id</code>. B vieta parasti ir <code>TO</code> atrašanās vieta.';

$GLOBALS["lang"]['The ID of the associated device (if any). Links to <code>devices.id</code>.'] = 'Saistītās ierīces ID (ja ir). Saites uz <code>devices.id</code>.';

$GLOBALS["lang"]['The ID of the associated discovery. Linked to <code>discoveries.id</code>'] = 'Saistītā atklājuma ID. Saistīts ar <code>discoveries.id</code>';

$GLOBALS["lang"]['The ID of the item of the associated type.'] = 'C0010 – C0020/R0220';

$GLOBALS["lang"]['The ID of this orgs parent org. Linked to <code>orgs.id</code>'] = 'Šī org vecāka org ID. Saistīts ar <code>orgs.id</code>';

$GLOBALS["lang"]['The ID provided by the provider.'] = 'Piegādātāja norādītais ID.';

$GLOBALS["lang"]['The ID retrieved from a Cloud discovery.'] = 'ID ielādēts no mākoņa atklāšanas.';

$GLOBALS["lang"]['The IP address of this collector used to communicate with the server.'] = 'Šī kolektora IP adrese, ko izmanto, lai sazinātos ar serveri.';

$GLOBALS["lang"]['The IP of the device to start a seed discovery with.'] = 'Ierīces IP, ar kuru sākt sēklas atklāšanu.';

$GLOBALS["lang"]['The IP of the external interface.'] = 'Ārējās saskarnes IP.';

$GLOBALS["lang"]['The IP of the internal interface.'] = 'Iekšējās saskarnes IP.';

$GLOBALS["lang"]['The ISO/IEC 27001 certification process and its key elements.'] = 'ISO/IEC 27001 sertifikācijas process un tā galvenie elementi.';

$GLOBALS["lang"]['The ISP or Telco providing this link.'] = 'ISP vai Telco nodrošina šo saiti.';

$GLOBALS["lang"]['The JSON record from Mitre.'] = 'JSON ieraksts no Mitres.';

$GLOBALS["lang"]['The JSON record from the NVD feed.'] = 'JSON ieraksts no NVD barotnes.';

$GLOBALS["lang"]['The LDAP OU of this user (if LDAP is used).'] = 'Šī lietotāja LDAP OU (ja lieto LDAP).';

$GLOBALS["lang"]['The LDAP server could not be connected to. At all. Check it is pingable from the Open-AudIT server. Check the correct port is open to the Open-AudIT server. An nmap from the Open-AudIT server will show this. Substitute your LDAP servers IP for $ip. Try:<code>nmap -vv $ip</code>'] = 'Neizdevās pieslēgties LDAP serverim. Nē. Pārbaudiet, vai tas ir pingable no Open- AudIT servera. Pārbaudiet, vai Open- AudIT serveris ir atvērts pareizi. Open- AudIT servera nkarte rādīs šo. Aizvietot savu LDAP serveri IP $ip. Mēģināt:<code>nmap -vv $ip</code>';

$GLOBALS["lang"]['The LDAP server type is invalid. It should be either <i>active directory</i> or <i>openldap</i>.'] = 'LDAP servera tips nav derīgs. Tam jābūt vai nu <i>aktīvā mape</i> vai <i>endldaps</i>.';

$GLOBALS["lang"]['The LDAP server was connected to and the user credentials accepted for bind.'] = 'LDAP serveris tika pieslēgts un lietotāja dati tika pieņemti saistīšanai.';

$GLOBALS["lang"]['The Linux Open-AudIT installer will test for and if required, install Open-AudITs dependencies from your distributions repository, including setting the Nmap SetUID. This is required for SNMP (UDP 161) detection by a non-root user. This is supported on RedHat/CentOS and Debian/Ubuntu. If you need to manually install Nmap:<br><br>For RedHat/CentOS do (NOTE - if you upgrade using yum, you will need to reapply this <i>chmod</i> setting).'] = 'Linux Open-AudIT uzstādītājs pārbaudīs un nepieciešamības gadījumā instalēs Open-AudITs atkarības no jūsu distribūcijas krātuves, tostarp iestatīs Nmap Setuid. Tas ir vajadzīgs, lai lietotājs bez saknēm noteiktu SNMP (UDP 161). To atbalsta RedHat/CentOS un Debian/Ubuntu. Ja jums ir nepieciešams manuāli instalēt Nmap:<br/><br/>RedHat/CentOS do (NOTE - ja jūs uzlabot, izmantojot yum, jums būs nepieciešams atkārtoti <i>chmod</i> apakšpunktu).';

$GLOBALS["lang"]['The Location that contains this network. Links to <code>locations.id</code>.'] = 'Atrašanās vieta, kas satur šo tīklu. Saites uz <code>locations.id</code>.';

$GLOBALS["lang"]['The NVD assigned base status.'] = 'NVD piešķirtais pamata statuss.';

$GLOBALS["lang"]['The National Institute of Standards and Technology is the federal technology agency. They advance official technology, measurement science and standards.'] = 'Valsts standartu un tehnoloģiju institūts ir federālā tehnoloģiju aģentūra. Tās veicina oficiālās tehnoloģijas, mērījumu zinātni un standartus.';

$GLOBALS["lang"]['The Network to Discover'] = 'Tīkls, kas jāatklāj';

$GLOBALS["lang"]['The Nmap timing preset.'] = 'Nmap laika iestatīšana.';

$GLOBALS["lang"]['The OS this package should be reported against. Blank for all. Use the percent sign % as a wildcard. Will be tested against os_group, os_family and os_name in that order.'] = 'Par OS šajā paketē jāziņo pretēji. Tukšs visiem. Izmantot procenta zīmi% kā aizstājējkarti. Tiks pārbaudīta pret os_group, os_family un os_name šādā secībā.';

$GLOBALS["lang"]['The Open-AudIT API'] = 'Atvērto AudIT API';

$GLOBALS["lang"]['The Open-AudIT id of the linked cloud. Links to <code>clouds.id</code>.'] = 'Saistītā mākoņa Open-AudIT id. Saites uz <code>clouds.id</code>.';

$GLOBALS["lang"]['The Open-AudIT server code was exeucted within this file.'] = 'Atvērtais troksnis Šajā failā tika izlaists IT servera kods.';

$GLOBALS["lang"]['The Open-AudIT server code was exeucted within this function.'] = 'Atvērtais troksnis IT servera kods tika izlaists šīs funkcijas ietvaros.';

$GLOBALS["lang"]['The OpenSCAP ecosystem provides multiple tools to assist administrators and auditors with assessment, measurement, and enforcement of security baselines including a wide variety of hardening guides and configuration baselines developed by the open source community, ensuring that you can choose a security policy which best suits the needs of your organization, regardless of its size.'] = 'OpenSCAP ekosistēma nodrošina vairākus rīkus, lai palīdzētu administratoriem un auditoriem novērtēt, mērīt un īstenot drošības pamatvērtības, tostarp dažādas cietināšanas rokasgrāmatas un konfigurācijas bāzes, ko izstrādājusi atvērtā pirmkoda kopiena, nodrošinot, ka jūs varat izvēlēties drošības politiku, kas vislabāk atbilst jūsu organizācijas vajadzībām, neatkarīgi no tās lieluma.';

$GLOBALS["lang"]['The OpenSCAP project is a collection of open source tools for implementing and enforcing this standard, and has been awarded the SCAP 1.2 certification by NIST in 2014.'] = 'OpenSCAP projekts ir atvērtā pirmkoda rīku kopums šā standarta īstenošanai un īstenošanai, un NIST 2014. gadā tam piešķīra SCAP 1.2 sertifikātu.';

$GLOBALS["lang"]['The Organisation that owns this item. Links to <code>orgs.id</code>.'] = 'Organizācija, kurai pieder šis postenis. Saites uz <code>orgs.id</code>.';

$GLOBALS["lang"]['The Process Identifier of the running associated discovery.'] = 'Procesa identifikators palaistajam saistītajam atklājumam.';

$GLOBALS["lang"]['The RU positon of the top of this device.'] = 'Šīs ierīces augšdaļas DPU pozits.';

$GLOBALS["lang"]['The Racks feature is used to manage and visualize your rack use with an Organisation, Location, Building, Floor, Room and Row.'] = 'Funkcija Racks tiek izmantota, lai pārvaldītu un vizualizētu jūsu plaukta lietošanu ar organizāciju, atrašanās vietu, ēku, grīdu, istabu un rindu.';

$GLOBALS["lang"]['The SCAP is a specification for expressing and manipulating security data in standardized ways. SCAP uses several individual specifications in concert to automate continuous monitoring, vulnerability management, and security policy compliance evaluation reporting'] = 'SCAP ir specifikācija drošības datu izteikšanai un manipulēšanai standartizētos veidos. SCAP izmanto vairākas individuālas specifikācijas, lai automatizētu nepārtrauktu uzraudzību, neaizsargātības pārvaldību un drošības politikas atbilstības novērtēšanas ziņojumus';

$GLOBALS["lang"]['The SELECT'] = 'ATLASE';

$GLOBALS["lang"]['The SELECT section of the query should use full dot notation and also request the field with its full dot name. IE - SELECT devices.id AS `devices.id`. Each field should be selected in this fashion to enable GUI side attribute filtering.'] = 'SELECT sadaļā vaicājuma vajadzētu izmantot pilnu punktu notāciju un arī pieprasīt lauku ar tā pilnu punktu nosaukumu. IE - SELECT ierīces. AS \'devices.id\'. Katrs lauks būtu jāizvēlas šādā veidā, lai ieslēgtu GUI sānu atribūtu filtrēšanu.';

$GLOBALS["lang"]['The SELECT section of your SQL must contain fully qualified columns and specify certain columns.'] = 'SELECT sadaļā jūsu SQL jābūt pilnībā kvalificētiem kolonnām un norādīt dažas kolonnas.';

$GLOBALS["lang"]['The SNMP community string.'] = 'SNMP kopienas virkne.';

$GLOBALS["lang"]['The SNMP v3 Authentication Passphrase.'] = 'SNMP v3 autentificēšanas paroli.';

$GLOBALS["lang"]['The SNMP v3 Authentication Protocol.'] = 'SNMP v3 autentifikācijas protokols.';

$GLOBALS["lang"]['The SNMP v3 Privacy Passphrase.'] = 'SNMP v3 privātuma parole.';

$GLOBALS["lang"]['The SNMP v3 Privacy Protocol.'] = 'SNMP v3 Privātuma protokols.';

$GLOBALS["lang"]['The SNMP v3 Security Level.'] = 'SNMP v3 drošības līmenis.';

$GLOBALS["lang"]['The SNMP v3 Security Name.'] = 'SNMP v3 drošības nosaukums.';

$GLOBALS["lang"]['The SNMPv3 context Engine ID (optional).'] = 'SNMPv3 konteksta dzinēja ID (pēc izvēles).';

$GLOBALS["lang"]['The SNMPv3 context Name (optional).'] = 'SNMPv3 konteksta nosaukums (nav obligāts).';

$GLOBALS["lang"]['The SQL cannot contain <strong>WHERE @filter OR</strong>. That SQL will not be executed, however <strong>WHERE @filter AND</strong> queries are allowed.'] = 'SQL nevar saturēt <strong>KUR @filtrs VAI</strong>. Ka SQL netiks izpildīts, tomēr <strong>KUR @filtrs UN</strong> vaicājumi ir atļauti.';

$GLOBALS["lang"]['The SQL queries used in Open-AudIT require the use of the backtick - ` character and NOT the standard single quote for fields. On most US Windows keyboards the backtick key is located in the top-left of the keyboard along with the tilde ~. On a US Mac keyboard the backtick key is located next to the SHIFT key. The standard single quote is still used to enclose values as the examples below illustrate.'] = 'Open-AudIT vaicājumiem ir nepieciešams izmantot backtick - ` rakstzīmi un NAV standarta vienu citātu laukiem. Lielākajā daļā ASV Windows klaviatūru backtick taustiņš atrodas tastatūras augšējā kreisajā pusē kopā ar tilde ~. Uz US Mac tastatūras backtick taustiņš atrodas blakus SHIFT taustiņam. Standarta vienoto citātu joprojām izmanto, lai pievienotu vērtības kā piemērus turpmāk.';

$GLOBALS["lang"]['The SQL query is essentially broken into three parts.'] = 'SQL vaicājums būtībā ir sadalīts trīs daļās.';

$GLOBALS["lang"]['The Standards functionality in Open-AudIT allows you to, ahead of time, complete the questions auditors require when completing ISO 27001 certification.'] = 'Standartu funkcionalitāte Open-AudIT ļauj pirms laika aizpildīt jautājumus, kas nepieciešami auditoriem, aizpildot ISO 27001 sertifikāciju.';

$GLOBALS["lang"]['The URL of the external system.'] = 'Ārējās sistēmas URL.';

$GLOBALS["lang"]['The URL of your Open-AudIT Server that this Collector will report to (no trailing slash).'] = 'Jūsu Open- AudIT URL Serveris ka šis Kolekcionārs ziņos (nav trailing slash).';

$GLOBALS["lang"]['The URL the audit scripts should submit their result to.'] = 'Revīzijas skriptu URL jāiesniedz to rezultāti.';

$GLOBALS["lang"]['The User endpoint allows you to manage user accounts within Open-AudIT.'] = 'Lietotāja galapunkts ļauj pārvaldīt lietotāju kontus Open-AudIT sistēmā.';

$GLOBALS["lang"]['The WHERE'] = 'KUR';

$GLOBALS["lang"]['The WHERE section of your SQL <em>must</em> contain'] = 'KUR SQL sadaļa <em>nav</em> satur';

$GLOBALS["lang"]['The Windows'] = 'Logi';

$GLOBALS["lang"]['The Windows log may say the following'] = 'Windows žurnāls var teikt šādu';

$GLOBALS["lang"]['The account must have a password; WMI does not allow blank passwords.'] = 'Kontam jābūt parolei; WMI nepieļauj tukšu paroli.';

$GLOBALS["lang"]['The account password must NOT contain \" (double quotes). This is because cscript (and wscript) cannot parse argument values containing double quotes. They are simply stripped. No (before you ask) escaping will not work. This is a cscript limitation and nothing to do with Open-AudIT.'] = 'Konta parole NEDRĪKST saturēt\" (dubultpēdiņas). Tas ir tāpēc, ka ccript (un wscript) nevar parse argumentu vērtības, kas satur divkāršu citātus. Viņi vienkārši tiek norauti. Nē (pirms jūs jautājat) bēgšana nedarbosies. Tas ir cscry ierobežojums un nav nekāda sakara ar Open-AudIT.';

$GLOBALS["lang"]['The actual full name of this user.'] = 'Faktiskais pilnais šī lietotāja vārds.';

$GLOBALS["lang"]['The address of the Open-AudIT server submit page.'] = 'Open-AudIT servera adrese iesniedz lapu.';

$GLOBALS["lang"]['The administrator supplied credentials that were successfully used to bind to LDAP.'] = 'Administrators piegādāja akreditācijas datus, kas tika veiksmīgi izmantoti, lai piesaistītos LDAP.';

$GLOBALS["lang"]['The administrator supplied credentials to bind to the LDAP server, but they have not been accepted by the LDAP sevrer. Double check the credentials work on the LDAP server, and then check (or reset them) in the Open-AudIT LDAP Server entry.'] = 'Administrators piegādāja akreditācijas datus LDAP serverim, bet tos nav pieņēmis LDAP sender. Dubulti pārbaudiet LDAP servera akreditācijas datus un pēc tam pārbaudiet (vai atiestatiet tos) Open-AudIT LDAP servera ierakstā.';

$GLOBALS["lang"]['The agent and server are also intelligent enough to self-update the agent if a newer version is installed on the server (say after upgrading Open-AudIT).'] = 'Aģents un serveris ir arī pietiekami inteliģenti, lai pats atjauninātu aģentu, ja uz servera ir uzstādīta jaunāka versija (saka pēc Open-AudIT atjaunināšanas).';

$GLOBALS["lang"]['The agent should download a fresh copy of the audit script, run it and submit the result to the server.'] = 'Aģentam vajadzētu lejupielādēt revīzijas skripta jaunu kopiju, darbināt to un iesniegt rezultātus serverim.';

$GLOBALS["lang"]['The application creates temporary audit scrtips here, copies them to the target machines, then deletes them.'] = 'Aplikācija šeit izveido pagaidu audita skripus, nokopē tos mērķa mašīnām, tad tos dzēš.';

$GLOBALS["lang"]['The associated baseline. Links to <code>baselines.id</code>.'] = 'Saistītais bāzes scenārijs. Saites uz <code>baselines.id</code>.';

$GLOBALS["lang"]['The associated discovery (if required). Links to <code>discoveries.id</code>.'] = 'Saistītais atklājums (ja nepieciešams). Saites uz <code>discoveries.id</code>.';

$GLOBALS["lang"]['The attribute to test (from the <code>devices</code> table).'] = 'Testa atribūts (no <code>devices</code> tabulu).';

$GLOBALS["lang"]['The attribute to test (must match an external field name from below).'] = 'Testa atribūts (jāatbilst ārējam lauka nosaukumam no apakšas).';

$GLOBALS["lang"]['The attributes for discovery scan options are as below.'] = 'Atklājamo skenēšanas opciju atribūti ir šādi.';

$GLOBALS["lang"]['The audit script upon which to base your customisations.'] = 'Revīzijas skripts, uz kura pamatot jūsu pielāgošanu.';

$GLOBALS["lang"]['The audit script will use the files[ ] array and retrieve the file details.'] = 'Revīzijas skripts izmantos failus [ ] masīvs un iegūt faila detaļas.';

$GLOBALS["lang"]['The audit scripts all accept a debugging argument. You can run the script utilizing that and see in more detail what the issue is. And if you cannot figure it out - that is what we are here for! Open a support case and we will get things running in no time.'] = 'Revīzijas skripti visi pieņem atkļūdošanas argumentu. Jūs varat palaist skriptu, izmantojot to, un redzēt sīkāk, kāda problēma ir. Un, ja jūs nevarat saprast - tas ir tas, kāpēc mēs esam šeit! Atvērt atbalsta lietu, un mēs saņemsiet lietas darbojas drīz.';

$GLOBALS["lang"]['The base path from which to search for Users.'] = 'Pamata ceļš, no kura meklēt lietotājus.';

$GLOBALS["lang"]['The below steps are not the fault of or unique to Open-AudIT and would affect <strong>any</strong> discovery application using remote WMI and/or Windows.'] = 'Zemāk soļi nav vainas vai unikāla Open-AudIT un ietekmētu <strong>jebkurš</strong> meklēšanas programma, izmantojot attālināto WMI un/vai Windows.';

$GLOBALS["lang"]['The benchmark type.'] = 'Etalona veids.';

$GLOBALS["lang"]['The building the rack is located in.'] = 'Ēka plaukts atrodas.';

$GLOBALS["lang"]['The calculated number of devices to be created externally.'] = 'Ārēji izveidojamo ierīču aprēķinātais skaits.';

$GLOBALS["lang"]['The calculated number of devices to be created in Open-AudIT.'] = 'Aprēķinātais ierīču skaits, kas jāizveido Open-AudIT.';

$GLOBALS["lang"]['The client ID is the ID of an Azure Active Directory application. The client secret is the key that you give that application.'] = 'Klienta ID ir Azure Active Directory programmas ID. Klienta noslēpums ir atslēga, kuru dodat šai aplikācijai.';

$GLOBALS["lang"]['The collector is essentially a full install of Open-AudIT in <i>collector</i> mode. The collector is designed to run discovery upon the network it is situated in. It is not restricted to only that network, but ideally it would essentially be one collector per subnet where required. The collector is driven on a schedule by the server and runs discovery upon the network as specified.<br>When in Stand Alone mode the Collector acts as an independant server, simply forwarding all devices found to the main server.<br><br>Once installed and setup, control of the Collector is performed on the Server (not in Stand Alone mode).<br><br>The only required network ports between the collector and server are 80 or 443 (TCP connection established from the Collector to the Server). The Open-AudIT database is not (and cannot be) shared between these installs.<br><br>By default the collector (not in Stand Alone mode) will request from the server any discovery tasks every 5 minutes (you can configure this on the server for new Collectors using the configuration item collector_check_minutes) therefor any discovery tasks for the collector should be scheduled for 0, 5, 10, 15, etc minutes.'] = 'Kolekcionārs būtībā ir pilna Open-AudIT uzstādīšana <i>kolektors</i> režīms. Kolektors ir paredzēts, lai palaistu atklājumu tīklā, kurā tas atrodas. Tas neaprobežojas tikai ar šo tīklu, bet ideālā gadījumā būtībā būtu viens kolektors uz katru apakštīklu, kur tas nepieciešams. Kolektoru serveris darbina pēc grafika un vada atklājumu tīklā, kā norādīts.<br/>Stāvot Viens pats režīms Collector darbojas kā neatkarīgs serveris, vienkārši pārsūtot visas atrastās ierīces uz galveno serveri.<br/><br/>Pēc uzstādīšanas un uzstādīšanas kolekcionāra kontrole tiek veikta serverī (nevis Stand Alone režīmā).<br/><br/>Vienīgās nepieciešamās tīkla pieslēgvietas starp kolektoru un serveri ir 80 vai 443 (TCP savienojums izveidots no Kolekcionāra uz serveri). Open- AudIT datu bāze nav (un nevar) kopīgots starp šiem instalējumiem.<br/><br/>Pēc noklusējuma kolekcionārs (ne Stand Alone režīmā) no servera ik pēc 5 minūtēm pieprasīs jebkādus meklēšanas uzdevumus (to var konfigurēt uz servera jauniem kolekcionāriem, izmantojot konfigurācijas elementu kolekcionāru_check_minutes), lai visi kolekcionāra meklēšanas uzdevumi būtu ieplānoti 0, 5, 10, 15 utt. minūtēs.';

$GLOBALS["lang"]['The collector is essentially a full install of Open-AudIT in <i>collector</i> mode. This mode would reduce visible functionality in an effort to simplify and focus the application. It is designed to collect information about local networks and devices, where firewall and/or network traversal is an issue from the server.'] = 'Kolekcionārs būtībā ir pilna Open-AudIT uzstādīšana <i>kolektors</i> režīms. Šis režīms samazinātu redzamu funkcionalitāti, cenšoties vienkāršot un koncentrēt pieteikumu. Tas paredzēts informācijas vākšanai par lokālajiem tīkliem un ierīcēm, kur ugunsmūris un/vai tīkla traversāls ir jautājums no servera.';

$GLOBALS["lang"]['The collectors internal IP used when it runs a discovery.'] = 'Kolektoru iekšējais IP, ko izmanto, kad tas vada atklājumu.';

$GLOBALS["lang"]['The column name from the foreign table. Should be one of: class, environment, status, type or menu_category.'] = 'Kolonnas nosaukums no ārvalstu tabulas. Jābūt vienai no: klasei, videi, statusam, tipam vai izvēlnes_kategorijai.';

$GLOBALS["lang"]['The command executed upon the target device or Open-AudIT server code executed during discovery.'] = 'Komanda, kas izpildīta uz mērķa ierīces vai Open-AudIT servera koda, izpildīta atklāšanas laikā.';

$GLOBALS["lang"]['The configuration of your cluster can be: <code>active/active</code>, <code>active/passive</code>, <code>N+1</code>, <code>N+M</code>, <code>N-to-1</code>, <code>N-to-N</code>, <code>other</code> or blank.'] = 'Jūsu klastera konfigurācija var būt: <code>active/active</code>, <code>active/passive</code>, <code>N+1</code>, <code>N+M</code>, <code>N-to-1</code>, <code>N-to-N</code>, <code>other</code> vai tukšs.';

$GLOBALS["lang"]['The credentials password. If the credentials are an SSH Key, this is the password used to unlock the key and is optional.'] = 'Akreditācijas parole. Ja dati ir SSH Key, šī ir parole, ko izmanto, lai atslēgtu atslēgu, un ir izvēles.';

$GLOBALS["lang"]['The credentials supplied by the user have failed.'] = 'Lietotāja sniegtie dati ir neveiksmīgi.';

$GLOBALS["lang"]['The credentials username.'] = 'Akreditācijas lietotājvārds.';

$GLOBALS["lang"]['The current date and time in the format: Y-m-d H:i:s.'] = 'Pašreizējais datums un laiks formātā: Y-m-d H:i:s.';

$GLOBALS["lang"]['The current date in Y-m-d format.'] = 'Pašreizējais datums Y- m- d formātā.';

$GLOBALS["lang"]['The current status of the Cloud Discovery.'] = 'Mākoņu meklēšanas pašreizējais statuss.';

$GLOBALS["lang"]['The current status of the discovery.'] = 'Pašreizējais atraduma statuss.';

$GLOBALS["lang"]['The dashboard that will be shown by default for this user. Links to <code>dashboards.id</code>.'] = 'Šim lietotājam noklusētais panelis. Saites uz <code>dashboards.id</code>.';

$GLOBALS["lang"]['The data stored in the database is not showing in the application translated. We leave the data as it is. However, there is nothing to stop you, the user, changing the name (for example) of an item in the database to your language.'] = 'Datubāzē saglabātie dati nav redzami tulkotajā lietojumprogrammā. Mēs atstājam datus tādus, kādi tie ir. Tomēr nav nekas, lai apturētu jūs, lietotājs, mainot nosaukumu (piemēram) uz vienu vienību datu bāzē uz jūsu valodu.';

$GLOBALS["lang"]['The data you input will be used in a <code>LIKE</code> clause, not (as per the API) an <code>equals</code> clause. Another example - if you input <code>comput</code>, it would still return all computers. And because we are using a <code>LIKE</code> clause, it is case-insensitive.'] = 'Jūsu ievadītie dati tiks izmantoti <code>LIKE</code> klauzula, nevis (kā API) <code>equals</code> punkts. Vēl viens piemērs - ja jūs ievadāt <code>comput</code>, tas joprojām atgrieztu visus datorus. Un tāpēc, ka mēs izmantojam <code>LIKE</code> klauzula, tas nav jutīgs pret konkrētiem gadījumiem.';

$GLOBALS["lang"]['The database schema can be found in the application if the user has database::read permission by going to menu: Admin -> Database ->'] = 'Datu bāzes shēmu var atrast programmā, ja lietotājam ir datubāze::Read atļauju dodoties uz izvēlni: Admin -> Datu bāze ->';

$GLOBALS["lang"]['The database version and web version are inconsistent.'] = 'Datubāzes versija un tīmekļa versija ir pretrunīgas.';

$GLOBALS["lang"]['The date of license expiration.'] = 'Atļaujas derīguma termiņš.';

$GLOBALS["lang"]['The date the software is discontinued by the manufacturer. Usually replaced by a newer version. Maintenance may still be available.'] = 'Datums, kad ražotājs pārtrauc programmatūru. Parasti aizvieto ar jaunāku versiju. Apkope joprojām var būt pieejama.';

$GLOBALS["lang"]['The date the software no longer receives updates and is effectively discontinued altogether. Maintenance is discontinued.'] = 'Datums programmatūra vairs nesaņem atjauninājumus un tiek efektīvi pārtraukta pavisam. Apkope tiek pārtraukta.';

$GLOBALS["lang"]['The date this item was changed or added (read only). NOTE - This is the timestamp from the server.'] = 'Datums, kad šī pozīcija tika mainīta vai pievienota (tikai lasāms). PIEZĪME - Šis ir servera laika zīmogs.';

$GLOBALS["lang"]['The date/time when this result was created.'] = 'Datums/laiks, kad tika izveidots šis rezultāts.';

$GLOBALS["lang"]['The day of the month when this task should execute (* for every day).'] = 'Mēneša diena, kad šis uzdevums jāizpilda (* par katru dienu).';

$GLOBALS["lang"]['The day of the week when this task should execute (* for every day).'] = 'Nedēļas diena, kad šis uzdevums jāizpilda (* par katru dienu).';

$GLOBALS["lang"]['The debug level (will output to command prompt window). Lower means less output with 0 being no output.'] = 'Atkļūdošanas līmenis (izvadīs komandu izsaukšanas logu). Zemāks nozīmē mazāk izejas, bet 0 nav izejas.';

$GLOBALS["lang"]['The default discovery scan option is the UltraFast set.'] = 'Noklusētā meklēšanas skenēšanas opcija ir UltraFast iestatījums.';

$GLOBALS["lang"]['The default language assigned to any user created by this method.'] = 'Noklusējuma valoda piešķirta jebkuram lietotājam, kas izveidots ar šo metodi.';

$GLOBALS["lang"]['The device must respond to an Nmap ping before it is considered online.'] = 'Ierīcei ir jāatbild uz Nmap ping, pirms to uzskata par tiešsaistē.';

$GLOBALS["lang"]['The device within Open-AudIT. Links to <code>devices.id</code>.'] = 'Ierīce Open-AudIT sistēmā. Saites uz <code>devices.id</code>.';

$GLOBALS["lang"]['The direct link for the script is'] = 'Tieša skripta saite ir';

$GLOBALS["lang"]['The email address of the reciever'] = 'Saņēmēja e-pasta adrese';

$GLOBALS["lang"]['The enterprise binary from FirstWave is required for a license. Please download Open-AudIT from'] = 'FirstWave binārais uzņēmums ir nepieciešams licencei. Lūdzu, lejupielādējiet Open- AudIT no';

$GLOBALS["lang"]['The entire associated baseline this result is from.'] = 'Viss saistītais bāzes līnijas šis rezultāts ir no.';

$GLOBALS["lang"]['The exploited vulnerability can affect resources beyond the security authority of the vulnerable component. This usually means a privilege or trust boundary is crossed (for example, escaping from a container to the host OS).'] = 'Izmantotā neaizsargātība var ietekmēt resursus, kas ir ārpus neaizsargātā komponenta drošības iestādes. Tas parasti nozīmē, ka tiek šķērsota privilēģija vai uzticības robeža (piemēram, bēgšana no konteinera uz uzņēmējas OS).';

$GLOBALS["lang"]['The exploited vulnerability only impacts resources within the same security authority as the vulnerable component. In other words, the attacker’s actions stay within the original trust boundary.'] = 'Izmantotā neaizsargātība ietekmē resursus tikai tajā pašā drošības iestādē, kurā atrodas neaizsargātais komponents. Citiem vārdiem sakot, uzbrucēja rīcība atrodas sākotnējā uzticības robežās.';

$GLOBALS["lang"]['The externally referenced location ID. Usually populated by Cloud audits.'] = 'Ārēji norādīts atrašanās vietas ID. Parasti apdzīvo Mākoņu audits.';

$GLOBALS["lang"]['The fields associated with an Integration are stored in the database as a JSON array of objects. Each field has the following attributes'] = 'Ar integrāciju saistītie lauki tiek glabāti datubāzē kā JSON objektu masīvs. Katram laukam ir šādi atribūti';

$GLOBALS["lang"]['The first time that Open-AudIT retrieved details of this device.'] = 'Pirmo reizi, kad Open- AudIT ieguva informāciju par šo ierīci.';

$GLOBALS["lang"]['The floor the rack is located on.'] = 'Stāvs plaukts atrodas.';

$GLOBALS["lang"]['The foreign table to reference. Should be one of: devices, locations, orgs or queries.'] = 'Ārvalstu tabula atsaucei. Vajadzētu būt vienam no: ierīces, vietas, orgs vai vaicājumi.';

$GLOBALS["lang"]['The format of your data should be in the form'] = 'Jūsu datu formātam jābūt šādā formā:';

$GLOBALS["lang"]['The format used for the output to be emailed.'] = 'Formāts, ko izmanto izvadei e-pastā.';

$GLOBALS["lang"]['The fully qualified column upon which to group by. NOTE: When type = traffic, this represents the red query id.'] = 'Pilnībā kvalificēta sleja, kurā grupēt PIEZĪME: ja tips = satiksme, šis attēlo sarkanā vaicājuma id.';

$GLOBALS["lang"]['The fully qualified name returned by the external system. EG: for NMIS we use configuration.roleType.'] = 'Ārējā sistēmā atgriezts pilnībā kvalificēts nosaukums. EG: priekš NMIS mēs izmantojam konfigurāciju. loma Veids.';

$GLOBALS["lang"]['The fully qualified table.column. Multiple may be provided, separated by a comma (no spaces).'] = 'Pilnībā kvalificēta tabula. kolonna. Var būt vairāki, atdalīti ar komatu (nav atstarpju).';

$GLOBALS["lang"]['The generated SQL query to test for this vulnerability. This field can be edited to correct the query as required.'] = 'Izveidotais SQL vaicājums, lai pārbaudītu šo ievainojamību. Šo lauku var rediģēt, lai pēc vajadzības labotu vaicājumu.';

$GLOBALS["lang"]['The group of devices on which the baseline was run against.'] = 'Ierīču grupa, pret kuru iedarbināja bāzes līniju.';

$GLOBALS["lang"]['The group that provides a list of devices for the integration. Links to <code>groups.id</code>.'] = 'Grupa, kas sniedz integrācijas ierīču sarakstu. Saites uz <code>groups.id</code>.';

$GLOBALS["lang"]['The hour of the day when this task should execute (* for every hour).'] = 'Dienas stunda, kad izpildīt šo uzdevumu (* uz katru stundu).';

$GLOBALS["lang"]['The id of the linked device. Links to <code>devices.id</code>'] = 'Saistītās ierīces ID. Saites uz <code>devices.id</code>';

$GLOBALS["lang"]['The identifier column (integer) in the database (read only).'] = 'Identifikatora kolonna (integer) datubāzē (tikai lasāms).';

$GLOBALS["lang"]['The importance of this baseline (not used yet).'] = 'Šī bāzlīnijas nozīme (vēl nav izmantota).';

$GLOBALS["lang"]['The integer of severity.'] = 'Smaguma skaitlis.';

$GLOBALS["lang"]['The internal value, reformatted in this format.'] = 'Iekšējā vērtība, kas pārveidota šādā formātā.';

$GLOBALS["lang"]['The ip address of the Auth method.'] = 'Auth metodes ip adrese.';

$GLOBALS["lang"]['The language to translate the web interface into for the user.'] = 'Valoda, lai tulkotu tīmekļa saskarni lietotājam.';

$GLOBALS["lang"]['The last date and time this item was executed (read only).'] = 'Pēdējais datums un laiks, kad šis ieraksts tika izpildīts (tikai lasāms).';

$GLOBALS["lang"]['The last time that Open-AudIT retrieved details of this device.'] = 'Pēdējo reizi, kad Open- AudIT ieguva informāciju par šo ierīci.';

$GLOBALS["lang"]['The last time this benchmarks was executed.'] = 'Pēdējo reizi, kad šie kritēriji tika izpildīti.';

$GLOBALS["lang"]['The last time this integration was run.'] = 'Pēdējo reizi šī integrācija tika īstenota.';

$GLOBALS["lang"]['The license endpoint allows you to track the number of licenses found on your devices.'] = 'Licences galapunkts ļauj izsekot jūsu ierīcēs atrasto licenču skaitu.';

$GLOBALS["lang"]['The line number assigned by the provider to the line at this end of the connection.'] = 'Pieslēguma veids';

$GLOBALS["lang"]['The location the rack is located in. Links to <code>locations.id</code>.'] = 'Vieta plaukts atrodas. Saites uz <code>locations.id</code>.';

$GLOBALS["lang"]['The locations address.'] = 'Vietas adrese.';

$GLOBALS["lang"]['The locations area.'] = 'Atrašanās vieta.';

$GLOBALS["lang"]['The locations city.'] = 'Vietas pilsēta.';

$GLOBALS["lang"]['The locations country.'] = 'Vietas valsts.';

$GLOBALS["lang"]['The locations district.'] = 'Vietas rajons.';

$GLOBALS["lang"]['The locations latitude.'] = 'Vietas platuma.';

$GLOBALS["lang"]['The locations level.'] = 'Vietu līmenis.';

$GLOBALS["lang"]['The locations longitude.'] = 'Atrašanās vietas garums.';

$GLOBALS["lang"]['The locations phone.'] = 'Vietas telefons.';

$GLOBALS["lang"]['The locations postcode.'] = 'Vietas pasta indekss.';

$GLOBALS["lang"]['The locations region.'] = 'Vietas reģions.';

$GLOBALS["lang"]['The locations room.'] = 'Vietas telpa.';

$GLOBALS["lang"]['The locations state.'] = 'Vietas stāvoklis.';

$GLOBALS["lang"]['The locations suburb.'] = 'Vietas priekšpilsēta.';

$GLOBALS["lang"]['The locations suite.'] = 'Vietas.';

$GLOBALS["lang"]['The logic for device matching is contained in the devices_helper.php file, which on a Linux install can be found here'] = 'Ierīču atbilstības loģika ir ietverta ierīces_helper.php failā, kuru Linux instalējot var atrast šeit';

$GLOBALS["lang"]['The machine-default permission settings do not grant Local Activation permission for the COM Server application with'] = 'Mašīnas noklusētie atļaujas iestatījumi nepiešķir lokālās aktivizēšanas atļauju COM servera programmai ar';

$GLOBALS["lang"]['The maximum physical weight (in KGs) this rack can hold.'] = 'Maksimālais fiziskais svars (GS) šajā plauktā var būt.';

$GLOBALS["lang"]['The maximum total BTUs this rack is rated for.'] = 'Maksimālais kopējais BTUU šis plaukts ir novērtēts.';

$GLOBALS["lang"]['The minimum required attributes for attributes are'] = 'Obligātie atribūti atribūtiem ir:';

$GLOBALS["lang"]['The minute of the hour when this task should execute (* for every minute).'] = 'Stundas minūte, kad izpildīt šo uzdevumu (* par katru minūti).';

$GLOBALS["lang"]['The month of the year when this task should execute (* for every month).'] = 'Gada mēnesis, kad šis uzdevums jāizpilda (* par katru mēnesi).';

$GLOBALS["lang"]['The name given to this item.'] = 'Šim ierakstam dotais nosaukums.';

$GLOBALS["lang"]['The name given to this item. Ideally it should be unique.'] = 'Šim ierakstam dotais nosaukums. Ideālā gadījumā tam vajadzētu būt unikālam.';

$GLOBALS["lang"]['The name given to this user (used to login). Ideally it should be unique.'] = 'Lietotājam dotais vārds (lietots piesakoties). Ideālā gadījumā tam vajadzētu būt unikālam.';

$GLOBALS["lang"]['The name of the associated cloud (if required).'] = 'Saistītā mākoņa nosaukums (ja nepieciešams).';

$GLOBALS["lang"]['The name of the software package, as audited by Open-AudIT. Use the percent sign % as a wildcard.'] = 'Programmatūras pakotnes nosaukums, kā to pārbaudīja Open-AudIT. Izmantot procenta zīmi% kā aizstājējkarti.';

$GLOBALS["lang"]['The name of the user who last changed or added this item (read only).'] = 'Lietotāja vārds, kurš pēdējo reizi izmainījis vai pievienojis šo ierakstu (tikai lasāms).';

$GLOBALS["lang"]['The name provided by the provider.'] = 'Norāda pakalpojumu sniedzēja nosaukumu.';

$GLOBALS["lang"]['The network in the format 192.168.1.0/24.'] = 'Tīkls formātā 192.168.1.0/24.';

$GLOBALS["lang"]['The network subnet to execute the discovery on.'] = 'Tīkla apakštīkls, kurā veikt atklājumu.';

$GLOBALS["lang"]['The new Agent runs a PowerShell version of the old audit script in preparation for the depreciation of VBScript (yes, it is coming).'] = 'Jaunais aģents vada PowerShell vecā audita skripta versiju, gatavojoties VBScript amortizācijai (jā, tas tuvojas).';

$GLOBALS["lang"]['The number of RUs this device occupies.'] = 'DPU skaits, ko aizņem šī ierīce.';

$GLOBALS["lang"]['The number of associated locations. Links to <code>locations.cloud_id</code>.'] = 'Asociēto vietu skaits. Saites uz <code>locations.cloud_id</code>.';

$GLOBALS["lang"]['The number of associated networks. Links to <code>networks.cloud_id</code>.'] = 'Saistīto tīklu skaits. Saites uz <code>networks.cloud_id</code>.';

$GLOBALS["lang"]['The number of audited devices in this cloud. Links to <code>devices.cloud_id</code> and <code>devices.serial</code>.'] = 'Revidēto ierīču skaits šajā mākonī. Saites uz <code>devices.cloud_id</code> kā arī <code>devices.serial</code>.';

$GLOBALS["lang"]['The number of critical severity vulnerabilities held by FirstWave (not in your database).'] = 'Kritiskās smaguma ievainojamības skaits, ko glabā FirstWave (ne jūsu datubāzē).';

$GLOBALS["lang"]['The number of devices found by this discovery.'] = 'Šajā atradumā atrasto ierīču skaits.';

$GLOBALS["lang"]['The number of devices in the associated group.'] = 'Ierīču skaits saistītajā grupā.';

$GLOBALS["lang"]['The number of devices in this cloud with a state of running. Links to <code>devices.cloud_id</code> and <code>devices.instance_state</code>.'] = 'Ierīču skaits šajā mākonī ar darbojošos stāvokli. Saites uz <code>devices.cloud_id</code> kā arī <code>devices.instance_state</code>.';

$GLOBALS["lang"]['The number of devices in this cloud with a state of stopped. Links to <code>devices.cloud_id</code> and <code>devices.instance_state</code>.'] = 'Ierīču skaits šajā mākonī ar apstādinātu stāvokli. Saites uz <code>devices.cloud_id</code> kā arī <code>devices.instance_state</code>.';

$GLOBALS["lang"]['The number of devices in this cloud. Links to <code>devices.cloud_id</code>.'] = 'Ierīču skaits šajā mākonī. Saites uz <code>devices.cloud_id</code>.';

$GLOBALS["lang"]['The number of devices this benchmark will be executed upon. Derived from <code>benchmarks.devices</code>.'] = 'To ierīču skaits, uz kurām šis etalons tiks izpildīts. no <code>benchmarks.devices</code>.';

$GLOBALS["lang"]['The number of devices to limit this discovery to.'] = 'Ierīču skaits, uz ko ierobežot šo atklājumu.';

$GLOBALS["lang"]['The number of high severity vulnerabilities held by FirstWave (not in your database).'] = 'Augsta smaguma ievainojamību skaits, kas pieder FirstWave (ne jūsu datubāzē).';

$GLOBALS["lang"]['The number of low severity vulnerabilities held by FirstWave (not in your database).'] = 'Zema smaguma ievainojamību skaits, kas pieder FirstWave (ne jūsu datubāzē).';

$GLOBALS["lang"]['The number of medium severity vulnerabilities held by FirstWave (not in your database).'] = 'Vidēja smaguma ievainojamību skaits, ko satur FirstWave (ne jūsu datubāzē).';

$GLOBALS["lang"]['The number of purchased licenses.'] = 'Iegādāto licenču skaits.';

$GLOBALS["lang"]['The number of seconds to try and communicate with the target IP.'] = 'Skaits sekundes, lai mēģinātu sazināties ar mērķa IP.';

$GLOBALS["lang"]['The number of vulnerabilities without a severity held by FirstWave (not in your database).'] = 'Ievainojamību skaits bez smaguma, kas pieder FirstWave (ne jūsu datubāzē).';

$GLOBALS["lang"]['The offset is the count of devices you wish to return data from.'] = 'Nobīde ir ierīču skaits, no kurām vēlaties atgriezt datus.';

$GLOBALS["lang"]['The only required permission / policy name (in our testing) is'] = 'Vienīgā nepieciešamā atļauja / politika nosaukums (mūsu testēšana) ir';

$GLOBALS["lang"]['The optional secondary column. NOTE: When type = traffic, this represents the yellow query id.'] = 'Neobligātā sekundārā sleja. PIEZĪME: ja tips = satiksme, šis attēlo dzelteno vaicājumu id.';

$GLOBALS["lang"]['The optional third column. NOTE: When type = traffic, this represents the green query id.'] = 'Neobligātā trešā sleja. PIEZĪME: ja tips = satiksme, šis attēlo zaļā vaicājuma id.';

$GLOBALS["lang"]['The order of information retrieval is snmp, ssh, wmi.'] = 'Informācijas iegūšanas kārtība ir snmp, ssh, wmi.';

$GLOBALS["lang"]['The orientation of this device.'] = 'Šīs ierīces orientācija.';

$GLOBALS["lang"]['The password (if not using the user running the script).'] = 'Parole (ja neizmanto skriptu).';

$GLOBALS["lang"]['The password for the dn_account attribute.'] = 'Parole dn_account atribūtam.';

$GLOBALS["lang"]['The password used to access the external system.'] = 'Parole, kas izmantota, lai piekļūtu ārējai sistēmai.';

$GLOBALS["lang"]['The path to the file or directory.'] = 'Ceļš uz failu vai mapi.';

$GLOBALS["lang"]['The path to the file or directory. Directories should end with a trailing slash.'] = 'Ceļš uz failu vai mapi. Mapei vajadzētu beigties ar trailing slash.';

$GLOBALS["lang"]['The physical depth (in CMs) of the rack.'] = 'Režģa fiziskais dziļums (CMs).';

$GLOBALS["lang"]['The physical height (in CMs) of the rack.'] = 'Režģa fiziskais augstums (CMs).';

$GLOBALS["lang"]['The physical weight (in KGs) of the rack at present.'] = 'Režģa fiziskais svars (kg) pašlaik.';

$GLOBALS["lang"]['The physical weight (in KGs) of the rack when empty.'] = 'Krāna fiziskais svars (KP), kad tas ir tukšs.';

$GLOBALS["lang"]['The physical width (in CMs) of the rack.'] = 'Režģa fiziskais platums (CMs).';

$GLOBALS["lang"]['The pod (if any) that this rack is part of.'] = 'Pod (ja ir), ka šis plaukts ir daļa no.';

$GLOBALS["lang"]['The power circuit this rack attaches to.'] = 'Strāvas ķēde, pie kuras pieder šis plaukts.';

$GLOBALS["lang"]['The primary database table upon which to base this widget.'] = 'Primārā datubāzes tabula, uz kuras bāzēt šo sīkrīku.';

$GLOBALS["lang"]['The primary method for authorization (what a user can do) is now based on the users Roles. Roles are defined as admin, org_admin, reporter, and user by default. Each role has a set of permissions (Create, Read, Update, Delete) for each endpoint. Standard roles as shipped should cover 99.9 percent of use-cases. The ability to define additional roles and edit existing roles is enabled in Open-AudIT Enterprise.'] = 'Primārā metode autorizācijai (ko lietotājs var darīt) tagad ir balstīta uz lietotāju lomām. Lomas ir definētas kā admin, org_admin, ziņotājs, un lietotājs pēc noklusējuma. Katrai lomai ir atļauju kopums (Radīt, Lasīt, Atjaunināt, Dzēst) katram mērķa kritērijam. Nosūtīšanas standarta lomām jāaptver 99,9 procenti lietošanas gadījumu. Spēja definēt papildu lomas un rediģēt esošās lomas ir iespējota Open-AudIT Enterprise.';

$GLOBALS["lang"]['The process identifier of this queue item.'] = 'Šā rindas ieraksta procesa identifikators.';

$GLOBALS["lang"]['The process that was used last to retrieve details about the device'] = 'Process, kas pēdējo reizi tika izmantots, lai iegūtu informāciju par ierīci';

$GLOBALS["lang"]['The purpose of this licensing page is to list the products and licenses included in Firstwave Commercial products including products based upon open source works.Open-AudIT is licensed from Firstwave under AGPLv3 or later with Enterprise and Professional functionality licensed under commercial terms.Open-AudIT when downloaded from FirstWave may include the following libraries and projects, which are supplied unmodified and licensed as indicated:'] = 'Šīs licencēšanas lapas mērķis ir uzskaitīt produktus un licences, kas iekļauti Firstwave Commercial produktos, tostarp produktus, kuru pamatā ir atvērtā koda darbi. Open-AudIT ir licencēts no Firstwave AGPLv3 vai vēlāk ar Enterprise un Professional funkcionalitāti, kas licencēta saskaņā ar komerciāliem noteikumiem. Open-AudIT lejupielādējot no FirstWave var ietvert šādas bibliotēkas un projektus, kas tiek piegādāti nemodificēti un licencēti, kā norādīts:';

$GLOBALS["lang"]['The query that provides a list of devices for the integration. Links to <code>queries.id</code>.'] = 'vaicājums, kas nodrošina integrācijas ierīču sarakstu. Saites uz <code>queries.id</code>.';

$GLOBALS["lang"]['The rack asset number.'] = 'Krāna īpašuma numurs.';

$GLOBALS["lang"]['The rack asset tag.'] = 'Noliktavas aktīvu birka.';

$GLOBALS["lang"]['The rack bar code.'] = 'Režģa svītru kods.';

$GLOBALS["lang"]['The rack model.'] = 'Rack modelis.';

$GLOBALS["lang"]['The rack serial.'] = 'Rack seriāls.';

$GLOBALS["lang"]['The rack series.'] = 'Rack sērija.';

$GLOBALS["lang"]['The rack this device is located in. Links to <code>racks.id</code>.'] = 'Šī ierīce atrodas plauktā. Saites uz <code>racks.id</code>.';

$GLOBALS["lang"]['The recommended process of addressing and fixing identified security vulnerabilities. This typically involves applying patches, updates, or other measures to eliminate the risk posed by the vulnerabilities.'] = 'Ieteiktais konstatēto drošības apdraudējumu novēršanas un novēršanas process. Tas parasti ietver ielāpu, atjauninājumu vai citu pasākumu piemērošanu, lai novērstu risku, ko rada neaizsargātība.';

$GLOBALS["lang"]['The regular domain notation of your directory. Eg - <code>open-audit.lan</code>.'] = 'Regulāra domēna notācija jūsu direktorijā. Eg <code>open-audit.lan</code>.';

$GLOBALS["lang"]['The requested properties should be in a comma-separated list. Properties should be fully qualified - ie, system.hostname (not just hostname).'] = 'Pieprasītajām īpašībām jābūt sarakstā ar komatu atdalītām. Īpašībām jābūt pilnībā kvalificētām - ti, system.hostname (ne tikai datora nosaukums).';

$GLOBALS["lang"]['The result of the command.'] = 'Komandas rezultāts.';

$GLOBALS["lang"]['The room the rack is located in.'] = 'Telpa, kurā atrodas plaukts.';

$GLOBALS["lang"]['The row the rack is located in.'] = 'Rinda plaukts atrodas.';

$GLOBALS["lang"]['The search for group on the LDAP server failed. Check the LDAP server logs. Have you created these groups (for roles and orgs) on the LDAP server and assigned LDAP users to them?'] = 'Neizdevās atrast grupu LDAP serverī. Pārbaudiet LDAP servera žurnālus. Vai esat izveidojis šīs grupas (lomām un orgiem) uz LDAP servera un piešķīris tām LDAP lietotājus?';

$GLOBALS["lang"]['The secret key used in conjunction with your AWS EC2 API key.'] = 'Slepenā atslēga, ko izmanto kopā ar jūsu AWS EC2 API atslēgu.';

$GLOBALS["lang"]['The software end-of-life date.'] = 'Programmatūras izmantošanas beigu datums.';

$GLOBALS["lang"]['The software end-of-service-life date.'] = 'Programmatūras izmantošanas beigu datums.';

$GLOBALS["lang"]['The specific database column from the specified database table.'] = 'Konkrētā datubāzes sleja no norādītās datubāzes tabulas.';

$GLOBALS["lang"]['The specific database table.'] = 'Konkrētā datubāzes tabula.';

$GLOBALS["lang"]['The standard Nmap timing options. Previously set at T4 (aggressive).'] = 'Standarta Nmap laika opcijas. Iepriekš uzstādīts T4 (agresīvs).';

$GLOBALS["lang"]['The standard Nmap timing options. We usually use -T4 (Aggressive) as this is recommended for a decent broadband or ethernet connection.'] = 'Standarta Nmap laika opcijas. Mēs parasti izmantojam -T4 (Agressive), jo tas ir ieteicams pienācīgas platjoslas vai ethernet savienojumu.';

$GLOBALS["lang"]['The status of this integration'] = 'Šīs integrācijas statuss';

$GLOBALS["lang"]['The status of this queued item.'] = 'Ierindotās vienības statuss.';

$GLOBALS["lang"]['The steps below outline the process.'] = 'Turpmākie pasākumi iezīmē procesu.';

$GLOBALS["lang"]['The target IP this log entry referers to (if any).'] = 'Mērķa IP šis žurnāls ieraksts referers uz (ja ir).';

$GLOBALS["lang"]['The target computer to audit. \".\" means localhost.'] = 'Mērķa datoru, lai auditētu. \ "\" nozīmē localhost.';

$GLOBALS["lang"]['The template for the link to be generated per result line.'] = 'Saikne, kas jāizveido uz rezultātu līniju.';

$GLOBALS["lang"]['The text for the bottom of the chart in a line chart (only).'] = 'Teksts diagrammas apakšā līniju diagrammā (tikai).';

$GLOBALS["lang"]['The text that is displayed.'] = 'Parādāmais teksts.';

$GLOBALS["lang"]['The timestamp after which, this task should run. For example, run a task after the 1st June 2017 at 10am, set it to <code>2017-06-01 09:59:00</code>. This value should be zero padded (ie, 09, not 9). This value defaults to <code>2000-01-01 00:00:00</code> which means by default, a scheduled task will run at next scheduled execution time.'] = 'Laika zīmogs, pēc kura šim uzdevumam vajadzētu darboties. Piemēram, palaist uzdevumu pēc 1.jūnijā 2017 pie 10am, kas to <code>2017-06-01 09:59:00</code>. Šai vērtībai jābūt nullei polsterētai (t.i., 09, nevis 9). Šī vērtība noklusē līdz <code>2000-01-01 00:00:00</code> kas pēc noklusējuma nozīmē, ka ieplānotais uzdevums tiks izpildīts nākamajā plānotajā izpildes laikā.';

$GLOBALS["lang"]['The top 10, 100 or 1000 (or none) TCP ports commonly in use according to Nmap.'] = 'Top 10, 100 vai 1000 (vai nav) TCP porti parasti izmanto saskaņā ar Nmap.';

$GLOBALS["lang"]['The top 10, 100 or 1000 (or none) UDP ports commonly in use according to Nmap.'] = 'Top 10, 100 vai 1000 (vai nav) UDP porti parasti izmanto saskaņā ar Nmap.';

$GLOBALS["lang"]['The total BTU output by this rack.'] = 'Kopējā BTU produkcija šajā plauktā.';

$GLOBALS["lang"]['The type of device.'] = 'Ierīces tips.';

$GLOBALS["lang"]['The type of organisation.'] = 'Organizācijas veids.';

$GLOBALS["lang"]['The type of rack (compute, power, network, etc).'] = 'statņa tips (skaitlis, jauda, tīkls utt.).';

$GLOBALS["lang"]['The type of task to run. One of: baseline, benchmark, cloud discovery, discovery, integration, report, query.'] = 'Darbināmā uzdevuma veids. Viens no: bāzes, etalons, mākoņa atklāšana, atklāšana, integrācija, ziņojums, vaicājums.';

$GLOBALS["lang"]['The type of the integration (usually named after the external system).'] = 'Integrācijas veids (parasti nosaukts ārējās sistēmas vārdā).';

$GLOBALS["lang"]['The unfiltered state means that a port is accessible, but Nmap is unable to determine whether it is open or closed. Only the ACK scan, which is used to map firewall rulesets, classifies ports into this state. Scanning unfiltered ports with other scan types such as Window scan, SYN scan, or FIN scan, may help resolve whether the port is open.'] = 'Nefiltrētais stāvoklis nozīmē, ka ports ir pieejams, bet Nmap nespēj noteikt, vai tas ir atvērts vai aizvērts. Tikai ACK skenēšana, kas tiek izmantota ugunsmūra noteikumu kartēšanai, klasificē ostas šajā stāvoklī. Nefiltrētu pieslēgvietu skenēšana ar citiem skenēšanas veidiem, piemēram, logu skenēšanu, SYN skenēšanu vai FIN skenēšanu, var palīdzēt atrisināt porta atvēršanu.';

$GLOBALS["lang"]['The unique identifier of this server.'] = 'Šī servera unikālais identifikators.';

$GLOBALS["lang"]['The user account this collector uses. Links to <code>users.id</code>.'] = 'Šis kolekcionārs izmanto lietotāja kontu. Saites uz <code>users.id</code>.';

$GLOBALS["lang"]['The user in Active Directory / OpenLDAP must be a direct member of the required Open-AudIT groups for Roles and Orgs. A member of a group that is a member another group that is a member of the Open-AudIT group will not work.'] = 'Lietotājam Active Directory / OpenLDAP ir jābūt tiešam dalībniekam nepieciešamajās Open-AudIT grupās lomām un orgām. Grupas dalībnieks, kas ir dalībnieks, nestrādās citā grupā, kas ir Open-AudIT grupas dalībnieks.';

$GLOBALS["lang"]['The user is in LDAP and their credentials are valid, but is not in any of the Open-AudIT LDAP groups for Orgs.'] = 'Lietotājs ir LDAP un viņu akreditācijas dati ir derīgi, bet nav nevienā no Open-AudIT LDAP grupām priekš Orgs.';

$GLOBALS["lang"]['The user is in LDAP and their credentials are valid, but is not in any of the Open-AudIT LDAP groups for Roles.'] = 'Lietotājs ir LDAP un viņu akreditācijas dati ir derīgi, bet nav nevienā no Open-AudIT LDAP grupām lomām.';

$GLOBALS["lang"]['The user is in LDAP and their credentials are valid, but is not in any of the required Open-AudIT LDAP groups.'] = 'Lietotājs ir LDAP un viņu akreditācijas dati ir derīgi, bet nav nevienā no nepieciešamajām Open-AudIT LDAP grupām.';

$GLOBALS["lang"]['The user is in the LDAP group that matches this Org.'] = 'Lietotājs ir LDAP grupā, kas atbilst šim Org.';

$GLOBALS["lang"]['The user is in the LDAP group that matches this Role.'] = 'Lietotājs ir LDAP grupā, kas atbilst šai lomai.';

$GLOBALS["lang"]['The user is not in the LDAP group that matches this Org.'] = 'Lietotājs nav LDAP grupā, kas atbilst šim Org.';

$GLOBALS["lang"]['The user is not in the LDAP group that matches this Role.'] = 'Lietotājs nav LDAP grupā, kas atbilst šai lomai.';

$GLOBALS["lang"]['The user that was specified exists in LDAP, but Open-AudIT is not configured to consume the LDAP groups for roles and that user does not exist within Open-AudIT. Either select <i>Use LDAP for Roles</i> on the Open-AudIT LDAP Server screen or create this user within Open-AudIT and assign roles and orgs.'] = 'Norādītais lietotājs eksistē LDAP, bet Open-AudIT nav konfigurēts, lai patērētu LDAP grupas lomām un ka lietotājs nepastāv Open-AudIT ietvaros. Vai nu izvēlēties <i>Lietot LDAP lomām</i> par Open-AudIT LDAP Servera ekrāns vai izveidot šo lietotāju Open-AudIT un piešķirt lomas un orgs.';

$GLOBALS["lang"]['The username (if not using the user running the script).'] = 'Lietotājvārds (ja neizmanto skriptu).';

$GLOBALS["lang"]['The username used to access the external system.'] = 'Ārējās sistēmas lietotāja vārds.';

$GLOBALS["lang"]['The users details were not retrieved from LDAP. Check the LDAP server logs.'] = 'Informācija par lietotājiem netika iegūta no LDAP. Pārbaudiet LDAP servera žurnālus.';

$GLOBALS["lang"]['The users details were retrieved from LDAP.'] = 'Informācija lietotājiem tika izgūta no LDAP.';

$GLOBALS["lang"]['The users email address.'] = 'Lietotāja e-pasta adrese.';

$GLOBALS["lang"]['The usual hours of operation at this site.'] = 'Parastās darbības stundas šajā vietā.';

$GLOBALS["lang"]['The value assigned to the item.'] = 'Postenim piešķirtā vērtība.';

$GLOBALS["lang"]['The value that is stored for this particular item.'] = 'Vērtība, kas tiek glabāta šim konkrētajam ierakstam.';

$GLOBALS["lang"]['The vendor name as per CPE entries.'] = 'Pārdevēja nosaukums saskaņā ar CPE ierakstiem.';

$GLOBALS["lang"]['The vendor taken from the CPE.'] = 'Pārdevējs ņemts no CPE.';

$GLOBALS["lang"]['The web directory on the host that Open-AudIT is installed (requires a trailing slash).'] = 'Tīmekļa direktorija uz datora, kas ir instalēts Open-AudIT (prasa trailing slash).';

$GLOBALS["lang"]['The widget at position '] = 'Logdaļa pozīcijā ';

$GLOBALS["lang"]['The width of this device.'] = 'Šīs ierīces platums.';

$GLOBALS["lang"]['Their OrgIDs and their descendants'] = 'OrgIDi un viņu pēcnācēji';

$GLOBALS["lang"]['Their OrgIDs only'] = 'Tikai OrgID';

$GLOBALS["lang"]['Their OrgIDs, ascendants and descendants'] = 'Viņu orgidāļi, augšupējie un pēcteči';

$GLOBALS["lang"]['Then'] = 'Tad';

$GLOBALS["lang"]['Then create a new Auth method in Open-AudIT by going to menu -> Admin -> Auth Methods -> Create Auth. Provide a name and set the <i>type</i> to Entra.'] = 'Tad izveidojiet jaunu Auth metodi Open- AudIT, dodoties uz izvēlni -> Administrators -> Auth metodes -> Izveidot Auth. Norādīt nosaukumu un iestatīt <i>Veids</i> Entra.';

$GLOBALS["lang"]['Then you can use Open-AudIT (unsupported) to receive audit data directly from the clients. Discovery <strong>will fail</strong>, but if youre not using Discovery (the main feature Open-AudIT was designed around), you can still get device data. You would need to run the audit scripts directly on the clients using cron, or use the Windows Agent feature (Enterprise only).'] = 'Tad varat izmantot Open-AudIT (neatbalstīts), lai saņemtu audita datus tieši no klientiem. Atklājums <strong>neizdosies</strong>, bet, ja jūs neizmantojat Discovery (galvenā funkcija Open-AudIT tika izstrādāta apkārt), jūs joprojām varat saņemt ierīces datus. Jums būtu nepieciešams, lai palaistu audita skriptus tieši uz klientiem, izmantojot cron, vai izmantot Windows aģenta funkciju (Enterprise tikai).';

$GLOBALS["lang"]['There is a button to export to JSON. This will display only the device table of attributes. To export the device with all associated component tables, view the device details, then add'] = 'Ir poga, lai eksportētu uz JSON. Šis parādīs tikai ierīces atribūtu tabulu. Lai eksportētu ierīci ar visām saistītajām sastāvdaļu tabulām, skatiet ierīces detaļas, tad pievienot';

$GLOBALS["lang"]['There is absolutely no need to manually edit each individual device.'] = 'Nav absolūti nepieciešams manuāli rediģēt katru atsevišķu ierīci.';

$GLOBALS["lang"]['There is no need to do anything if you are running Open-AudIT on a Linux server.<br><br>Windows clients are just fine and require no special actions, however.... to enable this feature the audit script must be run locally on the target Windows system. It cannot be run remotely as we do with WMI calls when running the audit script on one Windows machine, while targeting a second Windows machine. To do this we need to copy the audit script to the target Windows machine and then run it. Unfortunately the service account that Apache runs under is the Local System account. This account has no access to remote (network based) resources. To work around this issue the service must be run under another account. It is easiest to just use the local Administrator account, but you can try any account you like as long as it has the required privileges. The Local System account has as much local access as the local Administrator account.'] = 'Nav nepieciešams neko darīt, ja darbojas Open-AudIT uz Linux servera.<br/><br/>Windows klienti ir tikai naudas sodu un neprasa nekādas īpašas darbības, tomēr.... lai ieslēgtu šo funkciju audita skripts ir jādarbina lokāli mērķa Windows sistēmā. To nevar palaist attālināti, kā mēs to darām ar WMI zvaniem, kad darbojas audita skriptu vienā Windows mašīna, vienlaikus mērķējot otru Windows mašīna. Lai to izdarītu, mums ir nepieciešams kopēt audita skriptu uz mērķa Windows mašīna un pēc tam palaist to. Diemžēl pakalpojumu konts, kas Apache darbojas zem ir vietējās sistēmas konts. Šim kontam nav piekļuves attālinātiem (tīkla bāzētiem) resursiem. Lai strādātu pie šī jautājuma, dienestam ir jādarbojas citā kontā. Tas ir visvieglāk vienkārši izmantot vietējo administratora kontu, bet jūs varat izmēģināt jebkuru kontu jums patīk, ja vien tas ir nepieciešamās privilēģijas. Vietējās sistēmas kontam ir tikpat liela vietējā piekļuve kā vietējā administratora kontam.';

$GLOBALS["lang"]['These are only examples. You may need to adjust these attributes to suit your particular LDAP.'] = 'Tie ir tikai piemēri. Jums var būt nepieciešams pielāgot šos atribūtus, lai tie atbilstu jūsu konkrētajam LDAP.';

$GLOBALS["lang"]['These parameters enable you to audit only what is useful and relevant to you, saving processing time and allowing you to discover your network in an orderly manner.'] = 'Šie parametri ļauj jums pārbaudīt tikai to, kas jums ir noderīgs un svarīgs, ietaupot apstrādes laiku un ļaujot jums atklāt savu tīklu sakārtotā veidā.';

$GLOBALS["lang"]['Thing'] = 'Kaklasaites';

$GLOBALS["lang"]['Think of mail.domain1.com and mail.domain2.com - same hostname.'] = 'Domā par mail.domain1.com un mail.domain2.com - to pašu datora nosaukumu.';

$GLOBALS["lang"]['Third'] = 'Trešā';

$GLOBALS["lang"]['This CVE will be retrieved and overwrite the existing CVE if it exists.'] = 'Šis CVE tiks ielādēts un pārrakstīts esošais CVE, ja tāds pastāv.';

$GLOBALS["lang"]['This Org has no AD group specified. Check the roles details within Open-AudIT.'] = 'Šim orgam nav norādīta AD grupa. Pārbaudiet lomu detaļas Open-AudIT.';

$GLOBALS["lang"]['This Org has no AD group specified. Check the roles details within Open-AudIT. <span class=\"confluence-link\">Have you created these groups (for orgs) on the LDAP server and assigned LDAP users to them?'] = 'Šim orgam nav norādīta AD grupa. Pārbaudiet lomu detaļas Open-AudIT. <span class=\'\"confluence-link\"\'>Vai esat izveidojis šīs grupas (orgiem) uz LDAP servera un piešķīris tām LDAP lietotājus?</span>';

$GLOBALS["lang"]['This Role has no AD group specified. Check the roles details within Open-AudIT.'] = 'Šajā lomā nav norādīta AD grupa. Pārbaudiet lomu detaļas Open-AudIT.';

$GLOBALS["lang"]['This attribute is stored as a JSON object. It is the list of all collections and contains the collection name along with <code>c</code>, <code>r</code>, <code>u</code> and,or <code>d</code> which represent create, read, update and delete. These are the actions a user can perform on items from that particular collection.'] = 'Šis atribūts tiek saglabāts kā JSON objekts. Tas ir saraksts ar visām kolekcijām un satur kolekcijas nosaukumu kopā ar <code>c</code>, <code>r</code>, <code>u</code> un vai <code>d</code> kas pārstāv izveidot, lasīt, atjaunināt un dzēst. Tās ir darbības, ko lietotājs var veikt uz konkrētās kolekcijas priekšmetiem.';

$GLOBALS["lang"]['This can be either a varchar (a text field), a list (a list of values that can be selected) or a date.'] = 'Tas var būt vai nu varhara (teksta lauks), saraksts (var izvēlēties vērtību saraksts) vai datums.';

$GLOBALS["lang"]['This code relys on the great work done by the'] = 'Šis kods balstās uz lielo darbu, ko';

$GLOBALS["lang"]['This collectors universally unique identifier.'] = 'Šis kolekcionārs universāli unikāls identifikators.';

$GLOBALS["lang"]['This column is required by'] = 'Šo sleju norāda';

$GLOBALS["lang"]['This column is required by '] = 'Šo sleju norāda ';

$GLOBALS["lang"]['This description is auto-populated and should ideally be left as-is.'] = 'Šis apraksts ir autoapdzīvots un ideālā gadījumā būtu jāatstāj kā ir.';

$GLOBALS["lang"]['This endpoint enables you to add the connections that are part of your network infrastructure, it allows you to customize a variety of attributes, specify where this connection is located and the organization that it belongs.'] = 'Šis mērķa kritērijs ļauj pievienot savienojumus, kas ir daļa no jūsu tīkla infrastruktūras, tas ļauj jums pielāgot dažādus atribūtus, norādīt, kur šis savienojums atrodas, un organizāciju, kas tam pieder.';

$GLOBALS["lang"]['This error indicates that SMB1 has been disabled or removed from the target machine. This is normal for modern version of Windows and you will only see this message when the SMB2 connection attempt has failed. If the SMB2 connection fails, we attempt SMB1 to enable discovery on old versions of Windows. If the target Windows machine <i>is</i> running an old version of Windows, it is likely your credentials have failed. In that case, see'] = 'Šī kļūda norāda, ka SMB1 ir atslēgts vai izņemts no mērķa iekārtas. Tas ir normāli mūsdienu Windows versijai, un jūs redzēsiet šo ziņojumu tikai tad, kad SMB2 savienojuma mēģinājums ir cietis neveiksmi. Ja SMB2 savienojums neizdodas, mēs mēģinām SMB1, lai ieslēgtu atklājumu uz vecām Windows versijām. Ja mērķa Windows mašīna <i>ir</i> darbinot veco Windows versiju, visticamāk, jūsu akreditācijas dati ir bijuši neveiksmīgi. Tādā gadījumā skatīt';

$GLOBALS["lang"]['This error indicates that not enough virtual memory or paging file quota is available to complete the specified operation. You should try again later.'] = 'Šī kļūda norāda, ka nepietiek virtuālās atmiņas vai peidžera faila kvota ir pieejama, lai pabeigtu norādīto operāciju. Jums vajadzētu mēģināt vēlāk vēlreiz.';

$GLOBALS["lang"]['This error indicates the credentials used either are incorrect, do not exist or do not have sufficient privileges to log on remotely to the target Windows machine. You should verify the credentials and check the below.'] = 'Šī kļūda norāda, ka izmantotie dati ir nepareizi, neeksistē vai tiem nav pietiekamu tiesību attālināti pieteikties uz mērķa Windows iekārtu. Jums vajadzētu pārbaudīt akreditācijas datus un pārbaudīt tālāk.';

$GLOBALS["lang"]['This example creates a list of all Modules marked as'] = 'Šis piemērs izveido sarakstu ar visiem moduļiem, kas atzīmēti kā';

$GLOBALS["lang"]['This example creates a list of devices and the open Ports, Protocols, and Programs found by the NMAP scan.'] = 'Šis piemērs izveido ierīču un atvērto portu, protokolu un programmu sarakstu, ko atrod NMAP skenēšana.';

$GLOBALS["lang"]['This example creates a list of devices where the Function or Description fields are blank OR the Purchase Date is the default.'] = 'Šis piemērs izveido ierīču sarakstu, kurās funkcijas vai apraksta lauki ir tukši VAI Pirkuma datums ir noklusētais.';

$GLOBALS["lang"]['This example query retrieves a list of devices OVER 3 years old. The query uses today'] = 'Šis piemērs vaicājums iegūst sarakstu ar ierīcēm, kas ir vecākas par 3 gadiem. Jautājums izmanto šodien';

$GLOBALS["lang"]['This example uses'] = 'Šis piemērs izmanto';

$GLOBALS["lang"]['This feature requires a Professional or an Enterprise license.'] = 'Šī funkcija prasa Professional vai Enterprise licenci.';

$GLOBALS["lang"]['This feature, because it has the ability to affect target devices more than usual must be manually enabled. To enable this feature, change the configuration item feature_executables to <i>yes</i>.'] = 'Šī funkcija, jo tā spēj ietekmēt mērķa ierīces vairāk nekā parasti ir manuāli jāieslēdz. Lai ieslēgtu šo iespēju, mainiet konfigurācijas elementa funkciju_izpildāmos failus uz <i>jā</i>.';

$GLOBALS["lang"]['This file tells Linux to poll the application to determine if there are any scheduled tasks that should be run.'] = 'Šis fails Linux liek aptaujāt programmu, lai noteiktu, vai ir kādi ieplānoti uzdevumi, kurus vajadzētu palaist.';

$GLOBALS["lang"]['This form provides a simple way to get started discovering the devices on your network. For more (much more) detailed options, you can individually create'] = 'Šī forma nodrošina vienkāršu veidu, kā sākt jūsu tīklā esošo ierīču atklāšanu. Lai iegūtu vairāk (daudz vairāk) detalizētas iespējas, jūs varat individuāli izveidot';

$GLOBALS["lang"]['This is also the way that PAExec works.'] = 'Tas ir arī veids, kā PAExec darbojas.';

$GLOBALS["lang"]['This is an optional configuration option, enabled by setting discovery_use_org_id_match in the global configuration.'] = 'Šī ir izvēles konfigurācijas opcija, kas ieslēgta, uzstādot atrating_use_org_id_match globālajā konfigurācijā.';

$GLOBALS["lang"]['This is generally the primary column, unless otherwise configured. NOTE: When type = traffic, this represents the secondary text.'] = 'Šī parasti ir primārā kolonna, ja vien nav konfigurēts citādi. PIEZĪME: ja tips = satiksme, tas apzīmē sekundāro tekstu.';

$GLOBALS["lang"]['This is likely due to MySQL time being off. MySQL typically uses the host devices time. You can check this by'] = 'Tas ir iespējams, jo MySQL laiks ir izslēgts. MySQL parasti izmanto datora ierīces laiku. Jūs varat pārbaudīt šo';

$GLOBALS["lang"]['This is settable by users and so even though it should be globally unique, there is certainly no guarantee of this.'] = 'Tas ir iestatāms ar lietotājiem, un tāpēc, lai gan tas būtu visā pasaulē unikāls, noteikti nav garantijas par to.';

$GLOBALS["lang"]['This is the directory where we store any attachments to devices.'] = 'Šī ir mape, kurā mēs glabājam ierīces pielikumus.';

$GLOBALS["lang"]['This is to be used as the first point of call when troubleshooting Open-AudIT issues. You can click the Export button on the top right to retrieve this as a JSON file (to be added to the support ticket / email.'] = 'Tas ir jāizmanto kā pirmais punkts zvanu, kad problēmu risināšana Open-AudIT jautājumiem. Jūs varat noklikšķināt uz pogas Eksportēt augšējā labajā pusē, lai iegūtu šo kā JSON failu (jāpievieno atbalsta biļete / e-pasts.';

$GLOBALS["lang"]['This issue is under investigation.'] = 'Šis jautājums tiek izmeklēts.';

$GLOBALS["lang"]['This item must match the value of the attribute selected or contains the ID of the query to be used.'] = 'Šim ierakstam jāsakrīt ar izvēlētā atribūta vērtību vai arī tam jāsatur izmantojamā vaicājuma ID.';

$GLOBALS["lang"]['This item must match the value of the attribute selected.'] = 'Šim ierakstam jāatbilst izvēlētā atribūta vērtībai.';

$GLOBALS["lang"]['This license expires on'] = 'Šī licence zaudē spēku';

$GLOBALS["lang"]['This security permission can be modified using the Component Services administrative tool.'] = 'Šo drošības atļauju var mainīt, izmantojot Component Services administratīvo rīku.';

$GLOBALS["lang"]['This should be commented out after troubleshooting as debug mode will generate a lot of logs on the disk for no benefit.'] = 'Tas būtu jākomentē, kas pēc problēmu novēršanas kā atkļūdošanas režīms radīs daudz žurnālu uz diska bez labuma.';

$GLOBALS["lang"]['This should be globally unique, but I have seen instances where it is not.'] = 'Tam vajadzētu būt globāli unikālam, bet es esmu redzējis gadījumus, kad tas tā nav.';

$GLOBALS["lang"]['This should be set to either 1 or the height of the rack.'] = 'To iestata vai nu uz 1, vai uz bagāžnieka augstumu.';

$GLOBALS["lang"]['This should be the fully qualified field name in the database. Currently columns from the system, fields and credentials tables are supported. EG: system.nmis_role.'] = 'Tam vajadzētu būt pilnībā kvalificētam lauka nosaukumam datubāzē. Šobrīd tiek atbalstītas kolonnas no sistēmas, lauki un akreditācijas tabulas. EG: system.nmis_role.';

$GLOBALS["lang"]['This state is used when Nmap is unable to determine whether a port is closed or filtered. It is only used for the IP ID idle scan.'] = 'Šis stāvoklis tiek izmantots, kad Nmap nespēj noteikt, vai ports ir aizvērts vai filtrēts. To izmanto tikai IP ID dīkstāves skenēšanai.';

$GLOBALS["lang"]['This will auto-populate.'] = 'Tas būs auto-populators.';

$GLOBALS["lang"]['This will considerably slow the discovery scan.'] = 'Tas ievērojami palēninās meklēšanas skenēšanu.';

$GLOBALS["lang"]['This will delete the current rows in the'] = 'Šis izdzēsīs pašreizējās rindas';

$GLOBALS["lang"]['This will permanently DELETE this license.'] = 'Tas būs pastāvīgi DELETE šo licenci.';

$GLOBALS["lang"]['This will show you the Bulk Edit form. Any attributes you set on this form will be applied to all selected devices. You can set multiple attributes at once.'] = 'Tas parādīs Bulk Edit formu. Visi šajā veidlapā norādītie atribūti tiks piemēroti visām izvēlētajām ierīcēm. Jūs varat iestatīt vairākus atribūtus vienlaicīgi.';

$GLOBALS["lang"]['Thursday'] = 'Ceturtdiena';

$GLOBALS["lang"]['time_caption'] = 'Laika paraksts';

$GLOBALS["lang"]['Time Caption'] = 'Laika paraksts';

$GLOBALS["lang"]['time_daylight'] = 'Dienasgaisma laiks';

$GLOBALS["lang"]['Time Daylight'] = 'Dienasgaisma laiks';

$GLOBALS["lang"]['Time to Execute'] = 'Laiks izpildīt';

$GLOBALS["lang"]['timeout'] = 'Noildze';

$GLOBALS["lang"]['Timeout'] = 'Noildze';

$GLOBALS["lang"]['Timeout Per Target (Seconds)'] = 'Noildze pēc mērķa (sekundes)';

$GLOBALS["lang"]['Timeout per Target. Wait for X seconds for a target response.'] = 'Noildze uz mērķi. Pagaidiet X sekundes līdz mērķa atbildei.';

$GLOBALS["lang"]['Timesatamp'] = 'Laika zīmogs';

$GLOBALS["lang"]['Timestamp'] = 'Laika zīmogs';

$GLOBALS["lang"]['timing'] = 'Laiks';

$GLOBALS["lang"]['Timing'] = 'Laiks';

$GLOBALS["lang"]['Timor-Leste'] = 'Austrumtimora';

$GLOBALS["lang"]['Title'] = 'Nosaukums';

$GLOBALS["lang"]['To a new file named .env (in the same directory). Now edit that new file and uncomment (remove the #) the line below (line 17)'] = 'Uz jaunu failu ar nosaukumu .env (tajā pašā direktorijā). Tagad rediģēt šo jauno failu un uncomment (atcelt #) līniju zem (17. rinda)';

$GLOBALS["lang"]['To actually execute the query, append a /execute, thus /open-audit/index.php/queries/{$id}/execute.'] = 'Lai faktiski izpildītu vaicājumu, pievienojiet a / Execute, tādējādi /open-audit/index.php/queries/{$id}/execute.';

$GLOBALS["lang"]['To audit a machine, you must have credentials and administrator level access.'] = 'Lai pārbaudītu iekārtu, jums ir jābūt akreditācijas datiem un administratora līmeņa piekļuvi.';

$GLOBALS["lang"]['To audit a remote machine on an Active Directory domain, your supplied user (or if none provided, the user running the script) must be a member of the target machines Administrators group (or subgroup).'] = 'Lai auditētu attālinātu mašīnu Active Directory domēnā, Jūsu piegādātajam lietotājam (vai, ja nav norādīts, skripta lietotājam) jābūt mērķa mašīnu Administratoru grupas (vai apakšgrupas) dalībniekam.';

$GLOBALS["lang"]['To audit a remote machine that is not in a domain, you must use the Administrator account (not <i>an</i> admin account, <i>the</i> Administrator account) on the target PC. #1 and #2'] = 'Lai pārbaudītu attālinātu mašīnu, kas nav domēnā, jums ir jāizmanto administratora konts (ne <i>an</i> admin konts, <i>gads</i> Administratora konts) uz mērķa PC. un 2.';

$GLOBALS["lang"]['To audit localhost, any supplied credentials are disregarded and the connection is made using the details of the user running the script.'] = 'Lai auditētu localhost, visi piegādātie dati tiek ignorēti un savienojums tiek veikts, izmantojot informāciju par lietotāju, kas darbojas skriptu.';

$GLOBALS["lang"]['To compare software we check the name and version. Because version numbers are not all standardised in format, when we receive an audit result we create a new attribute called software_padded which we store in the database along with the rest of the software details for each package. For this reason, baselines using software policies will not work when run against a device that has not been audited by 1.10 (at least). Software policies can test against the version being <i>equal to</i>, <i>greater than</i> or <i>equal to or greater than</i>.'] = 'Lai salīdzinātu programmatūru, mēs pārbaudām nosaukumu un versiju. Jo versiju numuri nav visi standartizēti formātā, kad mēs saņemam audita rezultātu, mēs izveidojam jaunu atribūtu, ko sauc par software_padded, kuru mēs uzglabājam datu bāzē kopā ar pārējo programmatūras informāciju par katru pakotni. Šā iemesla dēļ bāzes līnijas, kurās izmanto programmatūras politiku, nedarbosies, ja tās darbosies pret ierīci, kurai nav veikta revīzija saskaņā ar 1.10. punktu (vismaz). Programmatūras politikas var pārbaudīt pret versiju ir <i>vienāds ar</i>, <i>lielāks par</i> vai <i>vienāds vai lielāks par</i>.';

$GLOBALS["lang"]['To create a new entry click the Create button in the upper right hand corner.'] = 'Lai izveidotu jaunu ierakstu, noklikšķiniet uz Izveidot pogu augšējā labajā stūrī.';

$GLOBALS["lang"]['To create a resource, you should POST the required data.'] = 'Lai izveidotu resursu, jums vajadzētu POST nepieciešamos datus.';

$GLOBALS["lang"]['To enable a remote machine (Vista or above) to be audited that is not on a domain, by an account in the Administrators group, other than the actual Administrator account see the below section on UAC.'] = 'Lai varētu veikt attālinātas iekārtas (Vista vai augstāk) revīziju, kas neatrodas domēnā, administratora grupas konts, izņemot faktisko administratora kontu, skatīt tālāko sadaļu par UAC.';

$GLOBALS["lang"]['To enable this, create a new Auth item by going to menu -> Admin -> Auth -> Create Auth Method.'] = 'Lai to ieslēgtu, izveidojiet jaunu Auth vienību, dodoties uz izvēlni -> Administrators -> Auth -> Izveidot Auth metodi.';

$GLOBALS["lang"]['To execute the Windows powershell script, open a command prompt as Administrator and use the following command'] = 'Lai izpildītu Windows Powershell skriptu, atveriet komandu kā Administrator un izmantojiet šādu komandu';

$GLOBALS["lang"]['To execute the audit script, open a terminal and use the following command'] = 'Lai izpildītu audita skriptu, atveriet termināli un izmantojiet šādu komandu';

$GLOBALS["lang"]['To filter by a property value, use the property name. Operators that should precede the value are'] = 'Lai filtrētu ar īpašības vērtību, izmantojiet īpašības nosaukumu. Operatori, kas būtu pirms vērtības';

$GLOBALS["lang"]['To install Nmap on Windows, visit the Nmap page at'] = 'Lai instalētu Nmap Windows, apmeklējiet Nmap lapu';

$GLOBALS["lang"]['To make the change, just follow the steps below.'] = 'Lai veiktu izmaiņas, veiciet tālāk minētās darbības.';

$GLOBALS["lang"]['To retrieve the Tenant ID. Open the Azure portal click on Azure Active Directory, Properties and the Tenant ID is displayed as your Directory ID - do not blame me for the name mismatch, that is how Microsoft roll.'] = 'Lai iegūtu īrnieka ID. Atveriet Azure portālu, noklikšķiniet uz Azure Active Directory, Properties un Tenant ID tiek parādīts kā jūsu Directory ID - nevainojiet mani par nosaukumu neatbilstību, tas ir, kā Microsoft roll.';

$GLOBALS["lang"]['To retrieve your key, log in to the AWS Console and select your username, then My Security Credentials.'] = 'Lai ielādētu jūsu atslēgu, pieslēdzieties AWS konsolei un izvēlieties savu lietotājvārdu, tad My Security Credentials.';

$GLOBALS["lang"]['To return a specific component item.'] = 'Lai atgrieztu konkrētu sastāvdaļu posteni.';

$GLOBALS["lang"]['To return all items for a compnent type for a specific device.'] = 'Lai atgrieztu visus priekšmetus datora tipam konkrētai ierīcei.';

$GLOBALS["lang"]['To return all items for a component type. If you wanted all software you would use'] = 'Lai atgrieztu visas sastāvdaļas tipa preces. Ja vēlaties visu programmatūru jūs varētu izmantot';

$GLOBALS["lang"]['To reverse sort, insert a minus, thus'] = 'Lai apgriezti sakārtotu, ievietojiet mīnus, tādējādi';

$GLOBALS["lang"]['To run the test script on the target Windows PC'] = 'Lai palaistu testa skriptu uz mērķa Windows PC';

$GLOBALS["lang"]['To select devices to be integrated, we use nmis_manage = y, but you might like (for example) type = router. You can also use a Group or Query if you prefer something more complex.'] = 'Lai izvēlētos integrējamās ierīces, mēs izmantojam nmis_manage = y, bet jums varētu patikt (piemēram) tips = maršrutētājs. Jūs varat arī izmantot grupu vai vaicājumu, ja vēlaties kaut ko sarežģītāku.';

$GLOBALS["lang"]['To sort by a database column, use'] = 'Lai sakārtotu pēc datubāzes kolonnas, izmantojiet';

$GLOBALS["lang"]['To use this Enterprise feature, you first need to create your user in Open-AudIT as per usual. Assigning a password is not necessary. You do have to assign Roles and Orgs. The username in Open-AudIT should match the Entra <i>preferred username</i> attribute. There is no need for a Full Name or Email - these will be populated from Entra. If you do not know your users <i>preferred username</i>, fear not. You can create the new Auth Method in Open-AudIT and the Enterprise Application in Entra and when a user attempts to sign-on to Open-AudIT without a pre-existing user, check the logs and you will see their <i>preferred username</i> logged for your convienence.'] = 'Lai izmantotu šo Enterprise funkciju, jums vispirms ir nepieciešams izveidot savu lietotāju Open-AudIT kā parasti. Paroles piešķiršana nav nepieciešama. Jums ir jāpiešķir lomas un orgs. Open- AudIT lietotājvārds atbilst Entra <i>vēlamais lietotājvārds</i> atribūts. Nav nepieciešams pilns vārds vai e-pasts - tie tiks apdzīvoti no Entra. Ja jūs nezināt savus lietotājus <i>vēlamais lietotājvārds</i>, bailes nav. Jūs varat izveidot jaunu Auth metodi Open-AudIT un Enterprise Application in Entra un kad lietotājs mēģina pierakstīties Open-AudIT bez iepriekš esoša lietotāja, pārbaudīt žurnālus un jūs redzēsiet to <i>vēlamais lietotājvārds</i> pieteicies jūsu sajukumu.';

$GLOBALS["lang"]['To use this Enterprise feature, you first need to create your user in Open-AudIT as per usual. Assigning a password is not necessary. You do have to assign Roles and Orgs. The username in Open-AudIT should match the OKTA <i>name</i> attribute. There is no need for a Full Name or Email - these will be populated from OKTA. If you do not know your users <i>name<i>, fear not. You can create the new Auth Menthod in Open-AudIT and the Application in OKTA and when a user attempts to sign-on to Open-AudIT without a pre-existing user, check the logs and you will see their <i>name<i> logged for your convienence.<br></p><p>Then create a new Auth method in Open-AudIT by going to menu -> Admin -> Auth Methods -> Create Auth. Provide a name and set the <i>type</i> to Okta.'] = 'Lai izmantotu šo Enterprise funkciju, jums vispirms ir nepieciešams izveidot savu lietotāju Open-AudIT kā parasti. Paroles piešķiršana nav nepieciešama. Jums ir jāpiešķir lomas un orgs. Open- AudIT lietotājvārds atbilst OKTA <i>nosaukums</i> atribūts. Nav nepieciešams pilns vārds vai e- pasts - tos apdzīvos OKTA. Ja jūs nezināt savus lietotājus <i>nosaukums<i>, bailes nav. Jūs varat izveidot jaunu Auth Menthod Open-AudIT un Application OKTA un kad lietotājs mēģina pieteikties Open-AudIT bez iepriekš esoša lietotāja, pārbaudiet žurnālus un jūs redzēsiet to <i>nosaukums<i> pieteicies jūsu sajukumu.<br/><p>Tad izveidojiet jaunu Auth metodi Open- AudIT, dodoties uz izvēlni -> Administrators -> Auth metodes -> Izveidot Auth. Norādīt nosaukumu un iestatīt <i>Veids</i> Uz Oktu.</p></i></i></i></i>';

$GLOBALS["lang"]['To use this feature you must enable the configuration items match_mac (for AWS) and match_hostname (for Azure). This will be done automatically the first time a cloud discovery is executed. For more on Open-AudITs matching rules see HERE: Matching Devices'] = 'Lai izmantotu šo funkciju, jums ir jāieslēdz konfigurācijas vienības atbilst_mac (AWS) un sakrist_hostname (Azure). Tas tiks darīts automātiski pirmo reizi, kad tiks veikts mākoņdatošana. Vairāk par Open-AudITs atbilstības noteikumiem skatīt ŠEIT: Saskaņošanas ierīces';

$GLOBALS["lang"]['To view the details of a query, the standard URL structure of /open-audit/index.php/queries/{$id} should be used.'] = 'Lai apskatītu vaicājuma detaļas, standarta URL struktūra /open-audit/index. jālieto php/queries/{$id}.';

$GLOBALS["lang"]['Togo'] = 'Togo';

$GLOBALS["lang"]['Tokelau'] = 'Tokelau';

$GLOBALS["lang"]['Tonga'] = 'Tonga';

$GLOBALS["lang"]['toolbar_style'] = 'Rīkjoslas stils';

$GLOBALS["lang"]['Toolbar Style'] = 'Rīkjoslas stils';

$GLOBALS["lang"]['Top Nmap TCP Ports'] = 'Augšējie Nmap TCP porti';

$GLOBALS["lang"]['Top Nmap TCP Ports. The top 10, 100, 1000 ports to scan as per Nmaps &quot;top ports&quot; options.'] = 'Top Nmap TCP ostas. Top 10, 100, 1000 porti, lai skenētu saskaņā ar Nmaps "augšējo portu" iespējas.';

$GLOBALS["lang"]['Top Nmap UDP Ports'] = 'Augšējie Nmap UDP porti';

$GLOBALS["lang"]['Top Nmap UDP Ports. The top 10, 100, 1000 ports to scan as per Nmaps &quot;top ports&quot; options.'] = 'Top Nmap UDP Ports. Top 10, 100, 1000 porti, lai skenētu saskaņā ar Nmaps "augšējo portu" iespējas.';

$GLOBALS["lang"]['Traditional Chinese'] = 'Tradicionālā ķīniešu valoda';

$GLOBALS["lang"]['Traffic Light'] = 'Lukturis';

$GLOBALS["lang"]['Trinidad and Tobago'] = 'Trinidāda un Tobāgo';

$GLOBALS["lang"]['Troubleshooting'] = 'Problēmu novēršana';

$GLOBALS["lang"]['Troubleshooting LDAP Logins'] = 'Problēmu novēršana LDAP pieteikšanās';

$GLOBALS["lang"]['Try Open-AudIT Enterprise, on us without a time limit. All the features of Enterprise. Limited to 20 devices.'] = 'Mēģiniet atvērt- AudIT Uzņēmējdarbība, uz mums bez laika ierobežojuma. Visas uzņēmuma iezīmes. Tikai 20 ierīces.';

$GLOBALS["lang"]['Try all the latest features with a FREE 100 device license of Open-AudIT Enterprise. Please read the '] = 'Izmēģiniet visas jaunākās funkcijas ar bezmaksas 100 ierīces licenci Open-AudIT Enterprise. Lūdzu, izlasiet ';

$GLOBALS["lang"]['Try logging in using an LDAP user. We are assuming this will fail (otherwise, why are you still reading this?). Next, comment out the line from ther file above.'] = 'Mēģiniet pieteikties, izmantojot LDAP lietotāju. Mēs pieņemam, ka tas neizdosies (citreiz, kāpēc jūs joprojām lasīt šo). Nākamais, komentēt līniju nother failu iepriekš.';

$GLOBALS["lang"]['Tuesday'] = 'Otrdiena';

$GLOBALS["lang"]['Tunisia'] = 'Tunisija';

$GLOBALS["lang"]['Turkey'] = 'Turcija';

$GLOBALS["lang"]['Turkish'] = 'Turku';

$GLOBALS["lang"]['Turkmenistan'] = 'Turkmēnija';

$GLOBALS["lang"]['Turks and Caicos Islands'] = 'Tērksas un Kaikosas salas';

$GLOBALS["lang"]['Tuvalu'] = 'Tuvalu';

$GLOBALS["lang"]['tx_bitrate'] = 'Tx bitātrums';

$GLOBALS["lang"]['Tx Bitrate'] = 'Tx bitātrums';

$GLOBALS["lang"]['tx_freq'] = 'Tx Freq';

$GLOBALS["lang"]['Tx Freq'] = 'Tx Freq';

$GLOBALS["lang"]['tx_level'] = 'Tx līmenis';

$GLOBALS["lang"]['Tx Level'] = 'Tx līmenis';

$GLOBALS["lang"]['tx_power'] = 'Tx jauda';

$GLOBALS["lang"]['Tx Power'] = 'Tx jauda';

$GLOBALS["lang"]['tx_profile'] = 'Tx profils';

$GLOBALS["lang"]['Tx Profile'] = 'Tx profils';

$GLOBALS["lang"]['type'] = 'Veids';

$GLOBALS["lang"]['Type'] = 'Veids';

$GLOBALS["lang"]['Type: This can be either a varchar (a text field) or a List (a list of values that can be selected).'] = 'Tips: Tas var būt vai nu varhara (teksta lauks) vai Saraksts (to vērtību saraksts, kuras var izvēlēties).';

$GLOBALS["lang"]['Types of Networks'] = 'Tīklu veidi';

$GLOBALS["lang"]['URL'] = 'URL';

$GLOBALS["lang"]['uuid'] = 'UUID';

$GLOBALS["lang"]['UUID'] = 'UUID';

$GLOBALS["lang"]['udp_ports'] = 'Udp porti';

$GLOBALS["lang"]['Udp Ports'] = 'Udp porti';

$GLOBALS["lang"]['Uganda'] = 'Uganda';

$GLOBALS["lang"]['Ukraine'] = 'Ukraina';

$GLOBALS["lang"]['Ukrainian'] = 'Ukraiņu';

$GLOBALS["lang"]['Undergo Stage 1 audit (documentation review)'] = 'Apakšposma 1. posma revīzija (dokumentācijas pārbaude)';

$GLOBALS["lang"]['Undergo Stage 2 audit (implementation review)'] = 'Apakšposma otrā posma revīzija (īstenošanas pārskatīšana)';

$GLOBALS["lang"]['Undergoing Analysis'] = 'Notiek analīze';

$GLOBALS["lang"]['Unfiltered'] = 'Nefiltrēts';

$GLOBALS["lang"]['uninstall'] = 'Atinstalēt';

$GLOBALS["lang"]['Uninstall'] = 'Atinstalēt';

$GLOBALS["lang"]['Uninstall the Agent'] = 'Atinstalējiet aģentu';

$GLOBALS["lang"]['United Arab Emirates'] = 'Apvienotie Arābu Emirāti';

$GLOBALS["lang"]['United Kingdom'] = 'Apvienotā Karaliste';

$GLOBALS["lang"]['United States Minor Outlying Islands'] = 'ASV Mazās Aizjūras Salas';

$GLOBALS["lang"]['United States Virgin Islands'] = 'Amerikas Savienoto Valstu Virdžīnu salas';

$GLOBALS["lang"]['United States of America'] = 'Amerikas Savienotās Valstis';

$GLOBALS["lang"]['Unknown'] = 'Nezināms';

$GLOBALS["lang"]['unlock_pin'] = 'Atslēgt pin';

$GLOBALS["lang"]['Unlock Pin'] = 'Atslēgt pin';

$GLOBALS["lang"]['Unscheduled'] = 'Neplānots';

$GLOBALS["lang"]['Unused as at 5.2.0.'] = 'Neizmantots kā 5.2.0. punktā';

$GLOBALS["lang"]['Unused.'] = 'Neizmantots.';

$GLOBALS["lang"]['Update'] = 'Atjaunināt';

$GLOBALS["lang"]['update_external_count'] = 'Atjaunot ārējo skaitu';

$GLOBALS["lang"]['Update External Count'] = 'Atjaunot ārējo skaitu';

$GLOBALS["lang"]['update_external_from_internal'] = 'Atjaunot ārējo no iekšējā';

$GLOBALS["lang"]['Update External From Internal'] = 'Atjaunot ārējo no iekšējā';

$GLOBALS["lang"]['update_internal_count'] = 'Atjaunot iekšējo skaitu';

$GLOBALS["lang"]['Update Internal Count'] = 'Atjaunot iekšējo skaitu';

$GLOBALS["lang"]['update_internal_from_external'] = 'Atjaunot iekšējo no ārējā';

$GLOBALS["lang"]['Update Internal From External'] = 'Atjaunot iekšējo no ārējā';

$GLOBALS["lang"]['Update NMIS Devices from Open-AudIT'] = 'Atjaunināt NMIS ierīces no Open- AudIT';

$GLOBALS["lang"]['Update Open-AudIT Devices from '] = 'Atjaunināt Open- AudIT Ierīces no ';

$GLOBALS["lang"]['Update Open-AudIT Devices from NMIS'] = 'Atjaunināt Open- AudIT NMIS ierīces';

$GLOBALS["lang"]['Update Vulnerabilities'] = 'Atjaunināt neaizsargātību';

$GLOBALS["lang"]['Update an attribute of a {collection} entry.'] = 'Atjaunināt atribūtu {collection} ierakstam.';

$GLOBALS["lang"]['Update attributes'] = 'Atjaunināt atribūtus';

$GLOBALS["lang"]['Updated each time discovery has been executed with IPs detected to be responding.'] = 'Atjaunot katru reizi, kad atklājums ir izpildīts ar IP, kas ir konstatēts, lai atbildētu.';

$GLOBALS["lang"]['Updated each time discovery has been executed with IPs that have been scanned by Nmap.'] = 'Atjaunots katru reizi, kad atklājums ir izpildīts ar Nmap skenētajiem IP.';

$GLOBALS["lang"]['Updated each time discovery has been executed with devices we were able to audit.'] = 'Katru reizi, kad atklājums ir veikts ar ierīcēm, mēs varējām auditēt.';

$GLOBALS["lang"]['Updated each time discovery has been executed with devices we were able to query.'] = 'Atjaunot katru reizi, kad atklājums ir izpildīts ar ierīcēm, mēs varējām vaicāt.';

$GLOBALS["lang"]['Updated each time discovery has been executed.'] = 'Atjaunot katru reizi, kad atklājums ir izpildīts.';

$GLOBALS["lang"]['Updated each time the discovery has been executed.'] = 'Atjaunot katru reizi, kad atklājums ir izpildīts.';

$GLOBALS["lang"]['Updated each time the discovery has completed execution.'] = 'Atjaunot katru reizi, kad atklājums ir pabeidzis izpildi.';

$GLOBALS["lang"]['Updating'] = 'Atjaunināšana';

$GLOBALS["lang"]['Upgrade'] = 'Atjaunināt';

$GLOBALS["lang"]['Upload an audit result file'] = 'Augšupielādē revīzijas rezultātu failu';

$GLOBALS["lang"]['Upper Case'] = 'Lielie burti';

$GLOBALS["lang"]['uptime'] = '& Laiks';

$GLOBALS["lang"]['Uptime'] = '& Laiks';

$GLOBALS["lang"]['Urdu'] = 'Urdu';

$GLOBALS["lang"]['url'] = 'Url';

$GLOBALS["lang"]['Url'] = 'Url';

$GLOBALS["lang"]['Uruguay, Eastern Republic of'] = 'Urugvajas Austrumu Republika';

$GLOBALS["lang"]['usb'] = 'Usb';

$GLOBALS["lang"]['Usb'] = 'Usb';

$GLOBALS["lang"]['use'] = 'Lietot';

$GLOBALS["lang"]['Use'] = 'Lietot';

$GLOBALS["lang"]['use_authentication'] = 'Lietot autentificēšanu';

$GLOBALS["lang"]['Use Authentication'] = 'Lietot autentificēšanu';

$GLOBALS["lang"]['use_authorisation'] = 'Izmantošanas atļauja';

$GLOBALS["lang"]['Use Authorisation'] = 'Izmantošanas atļauja';

$GLOBALS["lang"]['Use Proxy'] = 'Lietot starpniekserveri';

$GLOBALS["lang"]['Use SNMP'] = 'Lietot SNMP';

$GLOBALS["lang"]['Use SSH'] = 'Lietot SSH';

$GLOBALS["lang"]['Use Secure (LDAPS)'] = 'Lietot drošu (LDAPS)';

$GLOBALS["lang"]['Use Service Version Detection'] = 'Lietot pakalpojuma versiju noteikšanu';

$GLOBALS["lang"]['Use Service Version Detection. When a detected port is detected as open, if set to <i>y</i>, Nmap will query the target device in an attempt to determine the version of the service running on this port.<br>This can be useful when identifying unclassified devices. This was not previously used.'] = 'Izmantot pakalpojuma versiju noteikšanu. Kad atklāta ports ir atklāts, ja iestatīts uz <i>y</i>, Nmap vaicāt mērķa ierīci, mēģinot noteikt versiju pakalpojuma darbojas šajā ostā.<br/>Tas var noderēt, identificējot neklasificētas ierīces. Tas iepriekš netika izmantots.';

$GLOBALS["lang"]['Use WMI'] = 'Lietot WMI';

$GLOBALS["lang"]['Use a <i>Sign-in method</i> of OIDC - OpenID Connect and an <i>Application Type</i> of Web Application. Click <i>Next</i>.'] = 'Lietot a <i>Pierakstīšanās metode</i> OIDC - OpenID Connect un an <i>Programmas veids</i> Web Application. Klikšķis <i>Nākamais</i>.';

$GLOBALS["lang"]['Use for Authentication'] = 'Autentificēšanas izmantošana';

$GLOBALS["lang"]['Use for Roles'] = 'Izmanto lomas';

$GLOBALS["lang"]['Use the standard install options when displayed and click the <i>I Agree</i>, <i>Next</i> and <i>Install</i> buttons to install Nmap.'] = 'Izmantojiet standarta instalēt opcijas, kad redzams un noklikšķiniet uz <i>Es piekrītu</i>, <i>Nākamais</i> kā arī <i>Instalēt</i> pogas, lai instalētu Nmap.';

$GLOBALS["lang"]['used'] = 'Izmantots';

$GLOBALS["lang"]['Used'] = 'Izmantots';

$GLOBALS["lang"]['used_count'] = 'Izmantotais skaits';

$GLOBALS["lang"]['Used Count'] = 'Izmantotais skaits';

$GLOBALS["lang"]['Used by OpenLDAP only.'] = 'Izmanto tikai OpenLDAP.';

$GLOBALS["lang"]['Used internally when discovering a single device.'] = 'Izmanto iekšēji, atklājot vienu ierīci.';

$GLOBALS["lang"]['Used internally when discovering a single device. Links to <code>devices.id</code>.'] = 'Izmanto iekšēji, atklājot vienu ierīci. Saites uz <code>devices.id</code>.';

$GLOBALS["lang"]['Used when LDAP servers have been configured to populate a users details - this includes the Orgs to which they have access. If a user is in this LDAP group, they are assigned this org.'] = 'Izmanto, kad LDAP serveri ir konfigurēti, lai aizpildītu lietotāju detaļas - tas ietver orgus, kuriem tie var piekļūt. Ja lietotājs ir šajā LDAP grupā, viņiem tiek piešķirts šis org.';

$GLOBALS["lang"]['Used when LDAP servers have been configured to populate a users details - this includes the Roles which they are assigned. If a user is in this LDAP group, they are assigned this role.'] = 'Izmanto, kad LDAP serveri ir konfigurēti, lai aizpildītu lietotāju detaļas - tas ietver lomas, kuras tiem ir piešķirtas. Ja lietotājs ir šajā LDAP grupā, viņiem tiek piešķirta šī loma.';

$GLOBALS["lang"]['Used when searching OpenLDAP to match a users uid to a groups members. Default of <code>memberUid</code>. Used by OpenLDAP only.'] = 'Izmanto, meklējot OpenLDAP, lai saskaņotu lietotāju uid ar grupu locekļiem. Noklusējuma <code>memberUid</code>. Izmanto tikai OpenLDAP.';

$GLOBALS["lang"]['Used with Integrations and FirstWave monitoring applications.'] = 'Izmanto ar Integrations un FirstWave monitoringa programmas.';

$GLOBALS["lang"]['Used with Integrations and FirstWave monitoring applications. Set to y if working SNMP detected by discovery.'] = 'Izmanto ar Integrations un FirstWave monitoringa programmas. Ieslēdziet uz y ja meklēšanas laikā tiek konstatēts SNMP.';

$GLOBALS["lang"]['user'] = 'Lietotājs';

$GLOBALS["lang"]['User'] = 'Lietotājs';

$GLOBALS["lang"]['User DN'] = 'Lietotājs DN';

$GLOBALS["lang"]['user_group'] = 'Lietotāju grupa';

$GLOBALS["lang"]['User Group'] = 'Lietotāju grupa';

$GLOBALS["lang"]['user_id'] = 'Lietotāja ID';

$GLOBALS["lang"]['User ID'] = 'Lietotāja ID';

$GLOBALS["lang"]['user_interaction'] = 'Mijiedarbība ar lietotājiem';

$GLOBALS["lang"]['User Interaction'] = 'Mijiedarbība ar lietotājiem';

$GLOBALS["lang"]['User Membership Attribute'] = 'Lietotāja dalības atribūts';

$GLOBALS["lang"]['user_name'] = 'Lietotājvārds';

$GLOBALS["lang"]['User Name'] = 'Lietotājvārds';

$GLOBALS["lang"]['User Policies'] = 'Lietotāju politika';

$GLOBALS["lang"]['Username'] = 'Lietotājvārds';

$GLOBALS["lang"]['username'] = 'Lietotājvārds';

$GLOBALS["lang"]['users'] = 'Lietotāji';

$GLOBALS["lang"]['Users'] = 'Lietotāji';

$GLOBALS["lang"]['Users work similar to Netstat Ports. If a user exists with a matching name, status and password details (changeable, expires, required) then the policy passes.'] = 'Lietotāji strādā līdzīgi Netstat ostas. Ja lietotājs eksistē ar atbilstošu nosaukumu, statusu un paroli (maināms, beidzas, nepieciešams) tad politika iet.';

$GLOBALS["lang"]['Users, Roles and Orgs'] = 'Lietotāji, lomas un orgi';

$GLOBALS["lang"]['Uses the CodeIgniter PHP Framework.'] = 'Izmanto CodeIgniter PHP sistēmu.';

$GLOBALS["lang"]['Using'] = 'Izmanto';

$GLOBALS["lang"]['Using Entra for Auth'] = 'Entra lietošana Auth vajadzībām';

$GLOBALS["lang"]['Using LDAPS'] = 'Izmanto LDAPS';

$GLOBALS["lang"]['Using OKTA for Auth'] = 'OKTA izmantošana Auth vajadzībām';

$GLOBALS["lang"]['Using the format option is useful when using a web browser but you wish to see the result in JSON format. Adding format=json achieves this. Normally a web browser will set its accept header to HTML, so in that case, we return the rendered page. Using an API to retrieve JSON you should set the accept header to'] = 'Formāta opcijas izmantošana ir noderīga, ja izmantojat tīmekļa pārlūku, bet vēlaties redzēt rezultātu JSON formātā. Pievienojot formāts=json sasniedz šo. Parasti tīmekļa pārlūks iestatīs savu pieņem galveni uz HTML, tāpēc tādā gadījumā mēs atgriežam pārrakstīto lapu. Izmantojot API, lai iegūtu JSON jums vajadzētu noteikt pieņem galvenes uz';

$GLOBALS["lang"]['Usually Mbs, from Location A.'] = 'Parasti Mbs, no A atrašanās vietas.';

$GLOBALS["lang"]['Usually Mbs, from Location B.'] = 'Parasti Mbs, no vietas B.';

$GLOBALS["lang"]['Usually Mbs, to Location A.'] = 'Parasti Mbs, uz A atrašanās vietu.';

$GLOBALS["lang"]['Usually Mbs, to Location B.'] = 'Parasti Mbs, uz Atrašanās vietu B.';

$GLOBALS["lang"]['Usually should be set to 3.'] = 'Parasti vajadzētu būt 3.';

$GLOBALS["lang"]['Uzbekistan'] = 'Uzbekistāna';

$GLOBALS["lang"]['VLAN'] = 'VLAN';

$GLOBALS["lang"]['VLAN ID'] = 'VLAN ID';

$GLOBALS["lang"]['valid_from'] = 'Derīgs no';

$GLOBALS["lang"]['Valid From'] = 'Derīgs no';

$GLOBALS["lang"]['valid_from_raw'] = 'Derīgs no Raw';

$GLOBALS["lang"]['Valid From Raw'] = 'Derīgs no Raw';

$GLOBALS["lang"]['valid_to'] = 'Derīgs uz';

$GLOBALS["lang"]['Valid To'] = 'Derīgs uz';

$GLOBALS["lang"]['valid_to_raw'] = 'Derīgs raw';

$GLOBALS["lang"]['Valid To Raw'] = 'Derīgs raw';

$GLOBALS["lang"]['Valid Values'] = 'Derīgas vērtības';

$GLOBALS["lang"]['value'] = 'Vērtība';

$GLOBALS["lang"]['Value'] = 'Vērtība';

$GLOBALS["lang"]['Value Types'] = 'Vērtības tipi';

$GLOBALS["lang"]['values'] = 'Vērtības';

$GLOBALS["lang"]['Values'] = 'Vērtības';

$GLOBALS["lang"]['Values: In the case of a <i>list</i> field, this should be a comma separated list of valid values.'] = 'Vērtības Ja <i>saraksts</i> lauks, šim jābūt ar komatu atdalītam derīgo vērtību sarakstam.';

$GLOBALS["lang"]['Vanuatu'] = 'Vanuatu';

$GLOBALS["lang"]['VarChar'] = 'VarChar';

$GLOBALS["lang"]['Varchar'] = 'Varchar';

$GLOBALS["lang"]['variable'] = 'Mainīgais';

$GLOBALS["lang"]['Variable'] = 'Mainīgais';

$GLOBALS["lang"]['Various'] = 'Dažādi';

$GLOBALS["lang"]['vendor'] = 'Ražotājs';

$GLOBALS["lang"]['Vendor'] = 'Ražotājs';

$GLOBALS["lang"]['Vendor Report'] = 'Ražotāja ziņojums';

$GLOBALS["lang"]['vendors'] = 'Ražotājs';

$GLOBALS["lang"]['Vendors'] = 'Ražotājs';

$GLOBALS["lang"]['Venezuela'] = 'Venecuēla';

$GLOBALS["lang"]['Version'] = 'Versija';

$GLOBALS["lang"]['version_padded'] = 'Pievienotā versija';

$GLOBALS["lang"]['Version Padded'] = 'Pievienotā versija';

$GLOBALS["lang"]['version_raw'] = 'Versija Raw';

$GLOBALS["lang"]['Version Raw'] = 'Versija Raw';

$GLOBALS["lang"]['version_string'] = 'Versijas virkne';

$GLOBALS["lang"]['Version String'] = 'Versijas virkne';

$GLOBALS["lang"]['video'] = 'Video';

$GLOBALS["lang"]['Video'] = 'Video';

$GLOBALS["lang"]['Vietnam'] = 'Vjetnama';

$GLOBALS["lang"]['Vietnamese'] = 'Vjetnamiešu';

$GLOBALS["lang"]['View'] = 'Skats';

$GLOBALS["lang"]['View All'] = 'Skatīt visu';

$GLOBALS["lang"]['View Details'] = 'Skata detaļas';

$GLOBALS["lang"]['View Device'] = 'Skatīt ierīci';

$GLOBALS["lang"]['View Discovery'] = 'Skatīt atklājumu';

$GLOBALS["lang"]['View Policy'] = 'Skata politika';

$GLOBALS["lang"]['View Racks'] = 'Rādīt racks';

$GLOBALS["lang"]['View the'] = 'Skatīt';

$GLOBALS["lang"]['View the discovery in question, then click the Support button in the top right toolbar. This will provide the discovery settings, config items, the discovery device list as well as the logs for this particular discovery.'] = 'Skatiet attiecīgo atklājumu, tad nospiediet atbalsta pogu augšējā labajā rīkjoslā. Šis nodrošinās meklēšanas iestatījumus, konfigurācijas ierakstus, meklēšanas ierīču sarakstu, kā arī žurnālus šim konkrētajam atklājumam.';

$GLOBALS["lang"]['View the release notes on the'] = 'Apskatīt izlaiduma piezīmes';

$GLOBALS["lang"]['Virtual Private Network'] = 'Virtuālais privātais tīkls';

$GLOBALS["lang"]['Virtual private network'] = 'Virtuālais privātais tīkls';

$GLOBALS["lang"]['Virtualisation'] = 'Virtualizācija';

$GLOBALS["lang"]['Visit our YouTube channel for instructional videos.'] = 'Apmeklējiet mūsu YouTube kanālu mācību videoklipiem.';

$GLOBALS["lang"]['vlan'] = 'Vlan';

$GLOBALS["lang"]['Vlan'] = 'Vlan';

$GLOBALS["lang"]['vlan_id'] = 'Vlan ID';

$GLOBALS["lang"]['Vlan ID'] = 'Vlan ID';

$GLOBALS["lang"]['vm'] = 'Vm';

$GLOBALS["lang"]['Vm'] = 'Vm';

$GLOBALS["lang"]['vm_device_id'] = 'Vm ierīces ID';

$GLOBALS["lang"]['Vm Device ID'] = 'Vm ierīces ID';

$GLOBALS["lang"]['vm_group'] = 'Vm grupa';

$GLOBALS["lang"]['Vm Group'] = 'Vm grupa';

$GLOBALS["lang"]['vm_ident'] = 'Vm Ident';

$GLOBALS["lang"]['Vm Ident'] = 'Vm Ident';

$GLOBALS["lang"]['vm_server_name'] = 'Vm servera nosaukums';

$GLOBALS["lang"]['Vm Server Name'] = 'Vm servera nosaukums';

$GLOBALS["lang"]['vm_vendor'] = 'Vm Ražotājs';

$GLOBALS["lang"]['Vm Vendor'] = 'Vm Ražotājs';

$GLOBALS["lang"]['vuln_status'] = 'Vunn statuss';

$GLOBALS["lang"]['Vuln Status'] = 'Vunn statuss';

$GLOBALS["lang"]['vulnerabilities'] = 'Neaizsargātība';

$GLOBALS["lang"]['Vulnerabilities'] = 'Neaizsargātība';

$GLOBALS["lang"]['vulnerabilities_cache'] = 'Neaizsargātības kešatmiņa';

$GLOBALS["lang"]['Vulnerabilities Cache'] = 'Neaizsargātības kešatmiņa';

$GLOBALS["lang"]['Vulnerabilities and Results'] = 'Neaizsargātība un rezultāti';

$GLOBALS["lang"]['Vulnerabilities initially published before 1st January, 2025 (by default). We see no sense in returning vulnerabilities from years prior. This can be changed in the configuration.'] = 'Neaizsargātības, kas sākotnēji publicētas līdz 2025. gada 1. janvārim (pēc noklusējuma). Mēs neredzam jēgu, atgriežot neaizsargātību no gadiem iepriekš. To var mainīt konfigurācijā.';

$GLOBALS["lang"]['vulnerability_id'] = 'Neaizsargātības ID';

$GLOBALS["lang"]['Vulnerability ID'] = 'Neaizsargātības ID';

$GLOBALS["lang"]['Vulnerability Status'] = 'Neaizsargātības statuss';

$GLOBALS["lang"]['WARNING - When creating a baseline using software policies, at present Centos and RedHat package the kernel using the names <i>kernel</i> and <i>kernel-devel</i>. There can be multiple packages with this name and different versions concurrently installed. Debian based distributions use names like <i>linux-image-3.13.0-24-generic</i>, note the version number is included in the package name. Because RedHat based operating systems use this format and subsequently have multiple identical package names with different versions we currently exclude <i>kernel</i> and <i>kernel-devel</i> from software policies. This may be addressed in a future update.'] = 'BRĪDINĀJUMS - Veidojot bāzes līniju, izmantojot programmatūras politikas, šobrīd Centos un RedHat pakotni kodols, izmantojot nosaukumus <i>kodoli</i> kā arī <i>kodols</i>. Var būt vairākas paketes ar šo nosaukumu un dažādas versijas vienlaicīgi instalētas. Debian bāzēti distributīvi izmanto tādus nosaukumus kā <i>Linux-image-3.13.0-24-ģenērisks</i>, piezīme versijas numurs ir iekļauts iepakojuma nosaukumā. Jo RedHat balstītas operētājsistēmas izmantot šo formātu un pēc tam ir vairākas identiskas paketes nosaukumus ar dažādām versijām mēs pašlaik izslēgt <i>kodoli</i> kā arī <i>kodols</i> no programmatūras politikas. To var risināt turpmākajā atjauninājumā.';

$GLOBALS["lang"]['WHERE'] = 'KUR';

$GLOBALS["lang"]['WMI Credentials Requirements'] = 'WMI Credentials prasības';

$GLOBALS["lang"]['Wait for it to complete, then paste in this next line to install the Agent.'] = 'Pagaidiet, lai pabeigtu, tad ielīmējiet šajā nākamajā rindā, lai instalētu aģents.';

$GLOBALS["lang"]['wall_port'] = 'Sienas osta';

$GLOBALS["lang"]['Wall Port'] = 'Sienas osta';

$GLOBALS["lang"]['Wallis and Futuna'] = 'Volisa un Futuna';

$GLOBALS["lang"]['Want to know more?'] = 'Gribi zināt vairāk?';

$GLOBALS["lang"]['Warning'] = 'Brīdinājums';

$GLOBALS["lang"]['warranty'] = 'Garantija';

$GLOBALS["lang"]['Warranty'] = 'Garantija';

$GLOBALS["lang"]['warranty_duration'] = 'Garantijas ilgums';

$GLOBALS["lang"]['Warranty Duration'] = 'Garantijas ilgums';

$GLOBALS["lang"]['warranty_expires'] = 'Garantijas derīguma termiņš';

$GLOBALS["lang"]['Warranty Expires'] = 'Garantijas derīguma termiņš';

$GLOBALS["lang"]['warranty_status'] = 'Garantijas statuss';

$GLOBALS["lang"]['Warranty Status'] = 'Garantijas statuss';

$GLOBALS["lang"]['warranty_type'] = 'Garantijas veids';

$GLOBALS["lang"]['Warranty Type'] = 'Garantijas veids';

$GLOBALS["lang"]['We also have an option to Ping Before Scan (important for routers with long lived ARP caches). This is usually a good idea.'] = 'Mums ir arī iespēja Ping Before Scan (svarīgs maršrutētājiem ar ilgi dzīvo ARP kešatmiņām). Tā parasti ir laba doma.';

$GLOBALS["lang"]['We also have our action items (which are executed in the order below):'] = 'Mums ir arī mūsu darbības elementi (kas tiek izpildīti šādā secībā):';

$GLOBALS["lang"]['We are often asked this question and the answer most definitely is <i>it depends</i>. It depends on the number of IPs to be scanned, the network connection speed, the speed of the devices being scanned, the type of devices being scanned, the number of different credentials being tested and the speed of the Open-AudIT server. We do not have a calculator that would allow us to input those variables and return a value. It is simply too complex. Generally I limit my discoveries to 256 IP addresses - ie, a /24 subnet. We have had customers scan /16 subnets (65k addresses) and it does work - but it can take a long time. You are much better off scanning in /24 blocks. If you simply do not know what your address ranges are, then this is a good case for a Seed discovery.'] = 'Mums bieži uzdod šo jautājumu, un atbilde noteikti ir: <i>tas ir atkarīgs</i>. Tas ir atkarīgs no skenējamo IP skaita, tīkla pieslēguma ātruma, skenējamo ierīču ātruma, skenējamo ierīču veida, dažādo pārbaudīto akreditācijas datu skaita un Open-AudIT servera ātruma. Mums nav kalkulators, kas ļautu mums ievadīt šos mainīgos un atgriezt vērtību. Tas vienkārši ir pārāk sarežģīti. Parasti es ierobežot savus atklājumus 256 IP adreses - ti, /24 subnet. Mums ir bijuši klienti skenēt /16 subnets (65k adreses), un tas darbojas - bet tas var prasīt ilgu laiku. Jums ir daudz labāk no skenēšanas /24 blokos. Ja jūs vienkārši nezināt, kādi ir jūsu adrešu diapazoni, tad tas ir labs gadījums sēklu atklājumam.';

$GLOBALS["lang"]['We have more detailed instructions on'] = 'Mums ir sīkākas instrukcijas par';

$GLOBALS["lang"]['We have tests for:'] = 'Mums ir pārbaudes:';

$GLOBALS["lang"]['We hope you find Open-AudIT as useful as we do.'] = 'Ceram, ka Open-AudIT atradīsi tikpat noderīgu kā mēs.';

$GLOBALS["lang"]['We initially setup the default list of scripts with the default options. The list of script is viewable at /scripts. These default scripts cannot be deleted. You can create additional scripts for use by you as required. Your script will be based on one of the existing scripts and have custom options applied. The scripts can then be downloaded from the list page at menu: Discover -> Audit Scripts -> List Audit Scripts.'] = 'Mēs sākotnēji iestatām noklusēto skriptu sarakstu ar noklusējuma opcijām. Skriptu saraksts ir skatāms /skripti. Šos noklusētos skriptus nevar izdzēst. Jūs varat izveidot papildu skriptus izmantošanai jums pēc vajadzības. Jūsu skripts tiks balstīts uz vienu no esošajiem skriptiem un ir pielāgotas opcijas. Pēc tam skriptus var lejupielādēt no saraksta lapas izvēlnē: Atklājiet -> Revīzijas skripti -> Revīzijas skripti.';

$GLOBALS["lang"]['We need some credentials to be able to effectively talk to the devices on your network.'] = 'Mums ir vajadzīgi daži akreditācijas dati, lai varētu efektīvi sazināties ar jūsu tīklā esošajām ierīcēm.';

$GLOBALS["lang"]['We only send the minimum amount of data and nothing of a sensitive nature. We send our license data (name, type, etc), our application data (name, version, platform, timezone, etc), any logged errors, a count of device types and a count of the features used. <i>Any</i> environment has devices and that is the only piece of your data we send. And only the type of device and a count. Not the manufacturer, not the model. We send nothing special. No networks. No IP addresses. No OS versions. No software names. The UUID and Server fields are sha256 encoded (so we do not know the value). We send just the data we need to improve the product. We hope you see the benefit to all of us with this information. It will provide us guided direction on where to focus improvements and new features in the product.'] = 'Mēs tikai sūtām minimālo datu apjomu un neko sensitīvu. Mēs nosūtām licences datus (vārds, tips, u.c.), mūsu pieteikuma datus (nosaukums, versija, platforma, laikjosla utt.), visas reģistrētās kļūdas, ierīču tipu skaitu un izmantoto funkciju skaitu. <i>Jebkurš</i> videi ir ierīces, un tā ir vienīgā jūsu datu daļa, ko mēs sūtām. Un tikai ierīces veids un skaits. Nevis ražotājs, ne modelis. Mēs nesūtām neko īpašu. Nav tīklu. Nav IP adrešu. Nav OS versiju. Nav programmatūras nosaukumu. UUID un Servera lauki ir Sha256 kodēti (tādēļ mēs nezinām vērtību). Mēs nosūtām tikai tos datus, kas nepieciešami, lai uzlabotu produktu. Mēs ceram, ka jūs redzēsiet labumu mums visiem ar šo informāciju. Tas sniegs mums virzīt virzienu uz to, kur koncentrēties uzlabojumus un jaunas funkcijas produktā.';

$GLOBALS["lang"]['We tend to use the Google Chrome extension called Postman for testing actual restful queries. You might like to install and test with that.'] = 'Mēs mēdzam izmantot Google Chrome paplašinājumu sauc Postman, lai pārbaudītu faktisko nemierīgs vaicājumiem. Jums varētu patikt instalēt un pārbaudīt ar to.';

$GLOBALS["lang"]['Web'] = 'Tīmeklis';

$GLOBALS["lang"]['Web Application Routes'] = 'Tīmekļa programmu maršruti';

$GLOBALS["lang"]['Web Server Discovery'] = 'Tīmekļa servera atklājums';

$GLOBALS["lang"]['Webserver'] = 'Tīmekļa serveris';

$GLOBALS["lang"]['Website'] = 'Tīmekļa vietne';

$GLOBALS["lang"]['Wednesday'] = 'Trešdiena';

$GLOBALS["lang"]['weight'] = 'Svars';

$GLOBALS["lang"]['Weight'] = 'Svars';

$GLOBALS["lang"]['weight_current'] = 'Svara strāva';

$GLOBALS["lang"]['Weight Current'] = 'Svara strāva';

$GLOBALS["lang"]['weight_empty'] = 'Svars tukšs';

$GLOBALS["lang"]['Weight Empty'] = 'Svars tukšs';

$GLOBALS["lang"]['weight_max'] = 'Maksimālais svars';

$GLOBALS["lang"]['Weight Max'] = 'Maksimālais svars';

$GLOBALS["lang"]['Welcome'] = 'Oficiāla sveikšana';

$GLOBALS["lang"]['Welcome Dashboard'] = 'Laipni lūdzam Dashboard';

$GLOBALS["lang"]['Welcome to'] = 'Laipni lūdzam';

$GLOBALS["lang"]['Western Sahara'] = 'Rietumsahāra';

$GLOBALS["lang"]['What Can I Expect if I Have no Credentials'] = 'Ko es varu sagaidīt, ja man nav attaisnojumu';

$GLOBALS["lang"]['What about fields that I want from NMIS that are not in Open-AudIT? We have got you covered. Any fields in the external system (NMIS) that do not exist in Open-AudIT will be automatically created as Open-AudIT Custom fields.'] = 'Kā ar laukiem, kurus es gribu no NMIS, kas nav Open-AudIT? Mēs tevi piesedzām. Jebkurš lauks ārējā sistēmā (NVIS), kas nepastāv Open-AudIT, tiks automātiski izveidots kā Open-AudIT Custom lauki.';

$GLOBALS["lang"]['What about other network devices? Think switches, routers, printers, etc. Obviously, it is best if you can provide some SNMP credentials for these devices. They only need <i>read-only</i> access. But if you do not want to do even that, there is nothing stopping you from running discovery, finding the devices, and making a rule or two to identify them (maybe use MAC Address prefix in combination with open ports, for example). You wont have much information, but you will know they are on the network, what they are, and when the last time they were seen was. You will also see if anything new appears on the network.'] = 'Kā ar citām tīkla ierīcēm? Domāt slēdži, maršrutētāji, printeri utt. Protams, tas ir vislabāk, ja jūs varat sniegt dažas SNMP akreditācijas datus par šīm ierīcēm. Viņiem vajag tikai <i>tikai lasāms</i> piekļuve. Bet, ja jūs nevēlaties darīt pat to, nav nekas apturēt jūs no palaist atklājumu, atrast ierīces, un padarot noteikumu vai divas, lai identificētu tos (varbūt izmantot MAC Address prefiksu kombinācijā ar atvērtu portu, piemēram). Jums nebūs daudz informācijas, bet jūs zināsiet, ka tās ir tīklā, kādas tās ir un kad tās pēdējo reizi tika redzētas. Jūs arī redzēsiet, vai tīklā parādās kaut kas jauns.';

$GLOBALS["lang"]['What do we send?'] = 'Ko mēs sūtīsim?';

$GLOBALS["lang"]['What does this actually mean to you?'] = 'Ko tas tev patiesībā nozīmē?';

$GLOBALS["lang"]['What is the purpose of this rack.'] = 'Kāds ir šīs plaukta mērķis.';

$GLOBALS["lang"]['What is the type of this location. Allowable types held in <code>attributes</code> table.'] = 'Kāds ir šīs vietas tips. Atļautie veidi, kas tiek turēti <code>attributes</code> tabula.';

$GLOBALS["lang"]['When Open-AudIT on Linux discovers a Windows machine, in order to execute a remote command we use'] = 'Kad Open- AudIT uz Linux atklāj Windows mašīnu, lai izpildītu attālinātu komandu, ko mēs izmantojam';

$GLOBALS["lang"]['When Open-AudIT on Windows discovers a Windows machine, in order to execute a remote command we use'] = 'Kad Open- AudIT uz Windows atklāj Windows mašīna, lai izpildītu tālvadības komandu mēs izmantojam';

$GLOBALS["lang"]['When Open-AudIT receives data about a device, either by discovering the device during an audit run or by the user importing the device, it must determine if this discovered device matches a device that already exists within its database, or if it is a new device that should be added. Open-AudIT uses a series of twelve property matches to determine this. The Match Rules work as OR comparisons, not AND. This means the first rule that matches a field in the discovered device to one in the dB resolves as an existing device. All Matching Rules have to fail in order for a device to be new and result in a new record being created.'] = 'Kad atvērts IT saņem datus par ierīci, vai nu atklājot ierīci audita laikā, vai lietotājs, kas importē ierīci, tai jānosaka, vai šī atklātā ierīce atbilst ierīcei, kas jau pastāv tās datubāzē, vai arī tā ir jauna ierīce, kas būtu jāpievieno. Open-AudIT izmanto virkni divpadsmit īpašumu atbilst, lai noteiktu šo. Match noteikumi darbojas kā vai salīdzinājumi, nav UN. Tas nozīmē, ka pirmais noteikums, kas atbilst laukam atrastajā ierīcē uz vienu no dB atrisina kā esošu ierīci. Lai ierīce būtu jauna un tiktu izveidots jauns ieraksts, visiem atbilstības noteikumiem ir jāizdodas.';

$GLOBALS["lang"]['When POSTing data, you must include an access token. An access token is generated with every request type, so make a GET (for example) and Accept: application/json, parse the response for meta→access_token, and include that with your request. This should be placed in the field data[access_token], IE, the top level.'] = 'Kad POSTing dati, jums ir jāiekļauj piekļuvi marķierierīci. Piekļuve marķierierīce tiek ģenerēta ar katru pieprasījuma veidu, tāpēc veikt GET (piemēram) un pieņemt: application/json, analizēt atbildi uz meta→access_token, un iekļaut to ar savu pieprasījumu. Tas būtu jāievieto lauka datu[access_token], IE, augšējā līmenī.';

$GLOBALS["lang"]['When a device is Discovered the audit script will be injected with the file (or directory) details. Both audit_linux.sh and audit_windows.vbs will be populated, regardless of the file path. If you are thinking <i>but putting a Linux path into a Windows machine will break things!</i>, it wont break, you just wont receive any data from that file or directory entry.<br>Retrieved details will be stored in the <i>file</i> database table and are stored like any other attribute. File details will be stored as any other attribute and generate alerts if any of the following attributes change - <i>full_name</i>, <i>hash</i>, <i>inode</i>, <i>last_changed</i>. The table contain a system_id, first_seen, last_seen and current columns as well as the file details.<br>Attributes recorded are:<br><ul><li>Windows - name, size, directory, SHA1 hash (of the file contents), last changed, permissions, owner, version (file permitting).</li><br><li>Linux - name, size, directory, SHA1 hash (of the file contents), last changed, meta data last changed, permissions, owner, group, inode.</li></ul>You will see a section in both the Windows and Linux audit scripts as below'] = 'Ja ierīce ir atklāta, revīzijas skripts tiks ievadīts ar faila (vai direktorijā) detaļas. Gan audit_linux.sh, gan audit_windows.vbs tiks aizpildīti, neatkarīgi no faila ceļu. Ja domājat <i>bet liekot Linux ceļu uz Windows mašīna pārtrauks lietas!</i>, tas wont pārtraukums, jūs vienkārši wont saņemt jebkādus datus no šī faila vai direktorija ierakstu.<br/>Retrieved informācija tiks saglabāta <i>fails</i> datu bāzes tabulu un tiek saglabāti kā jebkurš cits atribūts. Faila dati tiks saglabāti kā jebkurš cits atribūts un ģenerēt ziņojumus, ja kāds no šiem atribūtiem mainās - <i>pilns_ nosaukums</i>, <i>hash</i>, <i>inode</i>, <i>pēdējais_mainīts</i>. Tabulā ir sistēmas_id, pirmais_redzētais, pēdējais_redzētais un pašreizējās kolonnas, kā arī faila detaļas.<br/>Ierakstīti šādi atribūti:<br/><ul><li>Windows - nosaukums, izmērs, direktorija, SHA1 hash (faila satura), pēdējo reizi mainīts, atļaujas, īpašnieks, versija (fails atļauj).</li><br/><li>Linux - nosaukums, izmērs, direktorija, SHA1 hash (no faila satura), pēdējo reizi mainīts, meta dati pēdējo reizi mainīts, atļaujas, īpašnieks, grupa, inode.</li></ul>Jūs redzēsiet sadaļu gan Windows un Linux audita skriptus kā zemāk';

$GLOBALS["lang"]['When a discovery is run, the relevant discovery scan option is chosen and those settings are used by Nmap to scan the target devices.  The scan options determine which ports nmap scans, how fast they scan and whether or not nmap ping is first used to determine if the IP is live or not.'] = 'Kad tiek veikts atklājums, tiek izvēlēta attiecīgā meklēšanas skenēšanas opcija un Nmap izmanto šos iestatījumus mērķa ierīču skenēšanai. Skenēšanas opcijas nosaka, kuri porti nmap skenē, cik ātri tie skenē un vai nmap ping pirmo reizi izmanto, lai noteiktu, vai IP ir dzīvs vai nav.';

$GLOBALS["lang"]['When a discovery is run, the relevant discovery scan option is chosen and those settings used by Nmap to scan the target devices. If no option set is chosen, the default configuration item (discovery_default_scan_option) is selected and used. Open-AudIT Community will use the default options as per the configuration for all discoveries.'] = 'Kad tiek palaists atklājums, tiek izvēlēta attiecīgā meklēšanas skenēšanas opcija un Nmap izmantotie iestatījumi mērķa ierīču skenēšanai. Ja neviena opcija nav izvēlēta, tiek izvēlēts un izmantots noklusētais konfigurācijas ieraksts (discovery_default_scan_option). Open-AudIT kopiena izmantos noklusējuma opcijas pēc konfigurācijas visiem atklājumiem.';

$GLOBALS["lang"]['When a subnet discovery is executed it first runs, if selected, an Nmap ping scan on the range or IP addresses. Any device responding will be port scanned. If an Nmap ping scan is not requested, each IP is individually port scanned. Which ports? That is determined by the'] = 'Kad tiek veikts apakštīkla atklājums, tas vispirms darbojas, ja ieslēgts, Nmap ping skenēšana diapazonā vai IP adresēs. Jebkura ierīce, kas reaģēs, tiks skenēta. Ja Nmap ping skenēšana netiek pieprasīta, katru IP skenē atsevišķi. Kuras ostas? To nosaka';

$GLOBALS["lang"]['When auditing a Linux device via SSH, some Linux distributions do not allow sudo commands to be passed without a TTY (which we are doing). To completely audit one of these linux distributions it is best to supply the root user credentials. If no root is supplied and sudo without a TTY is not possible, the audit script will be run but will not contain the amount of data as would otherwise. Subsequent audits using root (or run locally using sudo) will therefore provide extra details about the system and generate several <i>changes</i>.'] = 'Audizējot Linux ierīci caur SSH, daži Linux distributīvi neļauj sudo komandas nodot bez TY (ko mēs darām). Lai pilnībā auditētu vienu no šiem linux distributīviem, vislabāk ir nodrošināt saknes lietotāja akreditācijas datus. Ja nav saknes tiek piegādāts un sudo bez TY nav iespējams, revīzijas skripts tiks veikts, bet nesaturēs datu apjomu, kā citādi. Turpmākās revīzijas, izmantojot root (vai palaist lokāli, izmantojot sudo), tādējādi sniegs papildu informāciju par sistēmu un radīs vairākus <i>izmaiņas</i>.';

$GLOBALS["lang"]['When combining devices, which system is the authoritative source for information.'] = 'Apvienojot ierīces, kura sistēma ir autoritatīvs informācijas avots.';

$GLOBALS["lang"]['When complete, close the command window and you are done!'] = 'Kad pabeigts, aizveriet komandu logu un jums ir darīts!';

$GLOBALS["lang"]['When creating a widget, if you select the <i>Advanced</i> button you will have the ability to upload your own custom SQL.'] = 'Veidojot logdaļu, ja izvēlaties <i>Paplašināti</i> pogu jums būs iespēja augšupielādēt savu pielāgotu SQL.';

$GLOBALS["lang"]['When integrating devices from the external system, if the device doesnt exist in Open-AudIT should we create it?'] = 'Integrējot ierīces no ārējās sistēmas, ja ierīce neeksistē Open-AudIT mums vajadzētu to izveidot?';

$GLOBALS["lang"]['When integrating devices from the external system, if the device has been updated in the external system should we update it in Open-AudIT?'] = 'Integrējot ierīces no ārējās sistēmas, ja ierīce ir atjaunināta ārējā sistēmā, vai mums vajadzētu atjaunināt to Open-AudIT?';

$GLOBALS["lang"]['When investigating a Discovery, support will request the Exported Discovery Logs. To retrieve these, go to menu -> Discoveries ->'] = 'Veicot meklēšanas meklēšanu, atbalsts pieprasīs eksportētos meklēšanas žurnālus. Lai iegūtu šos, dodieties uz izvēlni Atklājumi ->';

$GLOBALS["lang"]['When matching a Linux based device, we prefer to use the Dbus id concatenated with the hostname. We can also use other options as per the below table, but we can retrieve the Dbus ID without root. To retrieve the UUID (from the motherboard), we need to run dmidecode, which does require root. Unfortunately, when you clone an ESXi guest, the Dbus ID does not get recreated - hence our concatenating this with the hostname. There is a good article linked here that details the <i>why</i> of hardware IDs.'] = 'Saskaņojot Linux bāzētu ierīci, mēs dodam priekšroku Dbus id savienošanai ar datora nosaukumu. Mēs varam izmantot arī citas iespējas, kā norādīts zemāk tabulā, bet mēs varam iegūt Dbus ID bez saknes. Lai iegūtu UUID (no mātesplates), mums ir nepieciešams palaist dmidecode, kas prasa saknes. Diemžēl, kad klons ir ESXi viesis, Dbus ID netiek radīts no jauna - tāpēc mēs to saskaņojam ar saimnieka vārdu. Ir labs raksts saistīts šeit, ka detaļas <i>Kāpēc</i> iekārtas ID.';

$GLOBALS["lang"]['When requesting JSON, by default no limit is set. When requesting screen display, the limit is set to 1000 by default. This can be changed in the configuration. See the <i>page_size</i> item'] = 'Pieprasot JSON, noklusējuma limits nav noteikts. Pieprasot ekrāna displeju, pēc noklusējuma tas ir 1000. To var mainīt konfigurācijā. Skatīt <i>lapas_izmērs</i> Postenis';

$GLOBALS["lang"]['When retrieve an external device, should we run discovery upon it?'] = 'Kad iegūt ārējo ierīci, mums palaist atklājums uz to?';

$GLOBALS["lang"]['When running Open-AudIT on Windows the Apache service account must be that of a <i>regular</i> user (or the Administrator). This is because the <i>Local System</i> account normally used to run Apache has no access to any network resources. IE - We cannot use Apache when running as the Local System account account to copy the audit script to Windows PCs.'] = 'Darbinot Open- AudIT uz Windows Apache servisa kontam jābūt <i>regulāri</i> lietotājs (vai administrators). Tas ir tāpēc, ka <i>Lokālā sistēma</i> kontam, ko parasti izmanto, lai palaistu Apache, nav piekļuves nevienam tīkla resursam. IE - Mēs nevaram izmantot Apache, kad darbojas kā vietējās sistēmas konta kontu kopēt audita skriptu uz Windows PC.';

$GLOBALS["lang"]['When the configuration option is set, we take this into account for devices for a certain defined subset of match rules where the configuration item has been enabled. These rules are:'] = 'Kad ir iestatīta konfigurācijas opcija, mēs to ņemam vērā ierīcēm, kas paredzētas noteiktai atbilstības noteikumu apakškopai, kurā ir iespējota konfigurācijas vienība. Šie noteikumi ir šādi:';

$GLOBALS["lang"]['When the rules run in discovery, any matching rules will appear in the discovery log. See below for an example.'] = 'Kad meklēšanas noteikumi darbosies, meklēšanas žurnālā parādīsies jebkādi saskaņošanas noteikumi. Skatīt turpmāk, piemēram.';

$GLOBALS["lang"]['When this benchmark is scheduled to be executed. Derived from the associated <code>tasks.type</code> and <code>tasks.sub_resource_id</code>.'] = 'Kad šo etalonu plānots izpildīt. Atvasināts no saistītā <code>tasks.type</code> kā arī <code>tasks.sub_resource_id</code>.';

$GLOBALS["lang"]['When this log was created.'] = 'Kad šis žurnāls tika izveidots.';

$GLOBALS["lang"]['When this queue item started processing.'] = 'Kad sākās rindas ieraksta apstrāde.';

$GLOBALS["lang"]['When using Open-AudIT Professional or Enterprise, widgets are available and customisable to be displayed on Dashboards.'] = 'Lietojot Open-AudIT Professional vai Enterprise, logrīki ir pieejami un pielāgojami, lai tos rādītu Dashboards.';

$GLOBALS["lang"]['When we are converting an internally selected device to an object for the external system, what should the external data be. EG: integer, string, etc.'] = 'Kad mēs pārveidojam iekšēji atlasītu ierīci uz ārējās sistēmas objektu, kādi būtu ārējie dati. EG: vesels skaitlis, virkne utt.';

$GLOBALS["lang"]['When we execute this baseline, should we check for items on devices that are not in a policy for this baseline.'] = 'Kad mēs izpildām šo bāzlīniju, vai mums vajadzētu pārbaudīt ierīces, kas nav politikas par šo bāzlīniju.';

$GLOBALS["lang"]['When we receive an open port, should we attempt to test for the version of the service currently running upon it? This assists in confirming actual running services.'] = 'Kad mēs saņemam atvērtu ostu, vai mums vajadzētu mēģināt pārbaudīt versiju pakalpojumu, kas pašlaik darbojas uz to? Tas palīdz apstiprināt faktiskos pakalpojumus.';

$GLOBALS["lang"]['When you are using Clouds to discover your Amazon AWS instances, you will need two credential items - key and secret key. Your key should already be known to you and your secret key as well. Of note is that you cannot retrieve your secret key using the AWS Console provided by Amazon. If you have misplaced it, you will need to generate a new one.'] = 'Kad izmantojat Clouds, lai atklātu Amazon AWS instances, jums būs nepieciešami divi autoritatīvi priekšmeti - atslēga un slepena atslēga. Jūsu atslēga jau būtu zināms, lai jums un jūsu slepeno atslēgu, kā arī. Jāatzīmē, ka jūs nevarat iegūt savu slepeno atslēgu, izmantojot AWS Console, ko nodrošina Amazon. Ja jums ir nepareizi novietots, jums būs nepieciešams radīt jaunu.';

$GLOBALS["lang"]['When you are using Clouds to discover your Microsoft Azure instances, you will need four credential items - subscription id, tenant id, client id and client secret.'] = 'Kad izmantojat Clouds, lai atklātu Microsoft Azure instances, jums būs nepieciešami četri autoritatīvi priekšmeti - abonēšanas ID, īrnieka id, klienta id un klienta noslēpums.';

$GLOBALS["lang"]['When you create a discovery you have an option to devices_assigned_to_org. This means that any devices discovered for this discovery will be assigned (have <code>devices.org_id</code> set to) your chosen Organisation.'] = 'Kad jūs izveidot atklājumu, jums ir iespēja ierīces_asigned_to_org. Tas nozīmē, ka tiks piešķirtas visas šim atklājumam atklātās ierīces (ir <code>devices.org_id</code> iestatīts) jūsu izvēlētā organizācija.';

$GLOBALS["lang"]['When you create a new discovery if you click the Advanced button, you have many more options to change, one of them being the type of discovery.Types have always been Subnet (encompassing the above range, subnet, ip options) and Active Directory. As at v4.1, Open-AudIT has a new discovery type called Seed.'] = 'Kad jūs izveidojat jaunu atklājumu, ja noklikšķināt uz Advanced pogas, jums ir daudz vairāk iespēju, ko mainīt, viens no tiem ir atklāšanas veids. Tipi vienmēr ir bijuši Subnet (ieskaitot iepriekš minēto diapazonu, apakštīkli, ip opcijas) un Active Directory. Tāpat kā pie v4.1, Open-AudIT ir jauns atklājuma tips, ko sauc par Seed.';

$GLOBALS["lang"]['When you enable a Query to be run on a schedule, the query is emailed to your chosen address. You must have set up email via menu -> Admin -> Enterprise -> Email Config. We also have a <i>test email<i> button on that page. Input your details, save it and then test it. You should have a modal box that informs you if it successful or not and obviously a test email should arrive if it is successful. Once you have email configured, your scheduled query can be configured.<br><br>Provide a name, optional description, choose <i>Query</i> type, select the desired query, provide an email address, choose a format and set the schedule.<br><br>Provide an hour (hour only, no minutes as yet), give the task a name (this is not the name of the actual scheduled query itself), select which days you would like the query run, choose which query you would like run, supply an email address and choose a query format and you are done.<br>Queries will be sent with an email body of the query (in html format) and the query attached in the requested format.'] = 'Kad jūs ļaujat Query palaist grafiku, vaicājums tiek nosūtīts uz jūsu izvēlēto adresi. Jums jābūt izveidojuši e-pastu caur izvēlni -> Administrators -> E-pasts Config. Mums ir arī <i>testa e- pasts<i> pogu tajā lapā. Ievietojiet savu informāciju, saglabājiet to un pēc tam pārbaudiet to. Jums vajadzētu būt modālā kaste, kas informē jūs, ja tas ir veiksmīgs vai nē, un acīmredzot testa e-pasta jāierodas, ja tas ir veiksmīgs. Kad ir konfigurēts e- pasts, var konfigurēt plānoto vaicājumu.<br/><br/>Norādīt nosaukumu, izvēles aprakstu, izvēlēties <i>Vaicājums</i> ierakstiet, izvēlieties vēlamo vaicājumu, norādiet e-pasta adresi, izvēlieties formātu un norādiet grafiku.<br/><br/>Sniedziet stundu (stundu tikai, ne minūtes vēl), dodiet uzdevumam nosaukumu (tas nav faktiskā plānotā vaicājuma nosaukums pats), izvēlieties, kuras dienas vēlaties vaicājumu palaist, izvēlieties, kuru vaicājumu vēlaties palaist, norādiet e-pasta adresi un izvēlieties vaicājuma formātu un jūs esat pabeidzis.<br/>Vaicājumi tiks nosūtīts ar e-pasta ķermeni vaicājuma (html formātā) un vaicājums pievienots pieprasītajā formātā.</i></i>';

$GLOBALS["lang"]['When you enter text into one of the column headings, you can simply use a normal word. For example, when you enter <code>computer</code> into the search box above the <i>Type</i> column, the search will return all devices with the type of Computer. Essentially, Open-AudIT requests data using a URL like <code>devices?devices.type=computer</code>. Now there is one significant difference when using the dataTables search, versus the standard'] = 'Ievadot tekstu vienā no sleju virsrakstiem, jūs varat vienkārši lietot parastu vārdu. Piemēram, ieejot <code>computer</code> meklēšanas lodziņā virs <i>Veids</i> kolonna, meklēšana atgriezīsies visas ierīces ar veidu datoru. Būtībā atvērtais Auds IT pieprasa datus, izmantojot URL kā <code>devices?devices.type=computer</code>. Tagad ir viena būtiska atšķirība, izmantojot datu tabulas meklēšanu, salīdzinot ar standarta';

$GLOBALS["lang"]['where'] = 'kur:';

$GLOBALS["lang"]['Where'] = 'kur:';

$GLOBALS["lang"]['Where $x is a number. This many LDAP entries are in the DB and have been retrieved.'] = 'Kur x ir skaitlis. Šis daudzais LDAP ieraksts ir DB un ir ielādēts.';

$GLOBALS["lang"]['Where on the Device Details screen you would like to see this field appear.'] = 'Kur uz ierīces Detaļas ekrāna jūs vēlētos redzēt šo lauku.';

$GLOBALS["lang"]['Where the rack is in the row.'] = 'Ja plaukts ir rindā.';

$GLOBALS["lang"]['Whether the vulnerability affects components beyond its own using Impact, Availability and Confidentiality.'] = 'Vai neaizsargātība ietekmē komponentus ārpus tās ietekmes, pieejamības un konfidencialitātes.';

$GLOBALS["lang"]['Whether user interaction is required (None, Passive, Active).'] = 'Vai lietotāja mijiedarbība ir nepieciešama (Nav, Pasīva, Aktīva).';

$GLOBALS["lang"]['Which OS this benchmark applies to.'] = 'Kurai OS šis kritērijs attiecas uz.';

$GLOBALS["lang"]['Which devices should Open-AudIT create from the external system (if any). Using All, None or a given Attribute.'] = 'Kuras ierīces Open-AudIT izveidot no ārējās sistēmas (ja ir). Izmantot visus, Neviens vai dotais atribūts.';

$GLOBALS["lang"]['Which network should we discover. This should be in the format of'] = 'Kuru tīklu mums vajadzētu atklāt. Tam jābūt šādā formātā:';

$GLOBALS["lang"]['Which sub-menu should we display this query in.'] = 'Kurā apakšizvēlnē rādīt šo vaicājumu.';

$GLOBALS["lang"]['Who made this rack.'] = 'Kas to paveica.';

$GLOBALS["lang"]['Why Windows Server Only?'] = 'Kāpēc tikai Windows Server?';

$GLOBALS["lang"]['Why do we exclude this policy?'] = 'Kāpēc mēs izslēdzam šo politiku?';

$GLOBALS["lang"]['Wide Area Network'] = 'Platjoslas tīkls';

$GLOBALS["lang"]['Wide area network'] = 'Plata mēroga tīkls';

$GLOBALS["lang"]['Widget'] = 'Logdaļa';

$GLOBALS["lang"]['Widget #'] = 'Sīkrīks #';

$GLOBALS["lang"]['Widget # '] = 'Sīkrīks # ';

$GLOBALS["lang"]['Widget Type'] = 'Logdaļas tips';

$GLOBALS["lang"]['widgets'] = 'Sīkrīki';

$GLOBALS["lang"]['Widgets'] = 'Sīkrīki';

$GLOBALS["lang"]['Widgets are designed to be used on Dashboards. Enterprise users have complete freedom to create, update and delete widgets as required.'] = 'Logrīki ir paredzēti izmantošanai Dashboards. Uzņēmuma lietotājiem ir pilnīga brīvība izveidot, atjaunināt un dzēst logrīkus, kā nepieciešams.';

$GLOBALS["lang"]['width'] = 'Platums';

$GLOBALS["lang"]['Width'] = 'Platums';

$GLOBALS["lang"]['windows'] = 'Logi';

$GLOBALS["lang"]['Windows'] = 'Logi';

$GLOBALS["lang"]['Windows Packages'] = 'Windows pakotnes';

$GLOBALS["lang"]['Windows Test Script'] = 'Windows pārbaudes skripts';

$GLOBALS["lang"]['Windows User Work Unit #1'] = 'Windows lietotāja darba vienība # 1';

$GLOBALS["lang"]['Windows User Work Unit #2'] = 'Windows lietotāja darba vienība # 2';

$GLOBALS["lang"]['Windows may also have blocked the service from starting. On the target start the Windows Security applet and ensure the WinExeSvc executable is allowed to run (click Allow on Device and then Start Actions).'] = 'Windows arī var būt bloķējis pakalpojumu no palaišanas. Uz mērķa starta Windows drošības sīkrīks un nodrošināt, ka WinExeSvc izpildfails ir atļauts darboties (noklikšķiniet uz Ierīces un pēc tam palaidiet darbības).';

$GLOBALS["lang"]['Winexe page on Samba'] = 'Winex lapa uz Samba';

$GLOBALS["lang"]['Winexe requires the following Windows services to be started and running: netlogon and rpc services to be running.<br><br>Please log on to the target Windows machine and check the services for netlogon and rpc are running.'] = 'Vīna kokss prasa, lai tiktu uzsākti un palaisti šādi Windows pakalpojumi: netlogon un rpc pakalpojumi.<br/><br/>Lūdzu, piesakieties uz mērķa Windows mašīna un pārbaudiet pakalpojumus netlogon un RPC darbojas.';

$GLOBALS["lang"]['Winexe uses the admin$ and RPC (net service start) to install and start a remote service (winexesvc). This service initializes a named pipe that is used to transport commands from the Open-AudIT server to the target and the output in the reverse way. When finished, the named pipe closes and the winexesvc waits for more connections or uninstalls (depending of the options given).'] = 'Vīnkokss izmanto admin$ un RPC (tīrā servisa sākums), lai instalētu un sāktu tālvadības pakalpojumu (winexesvc). Šis serviss inicializē nosaukto cauruli, kas tiek izmantota, lai transportētu komandas no Open-AudIT servera uz mērķi un izvadi atpakaļgaitā. Kad pabeigts, nosauktā caurule aizveras un winesvc gaida vairāk savienojumus vai atinstalē (atkarībā no dotajām iespējām).';

$GLOBALS["lang"]['Wireless Local Area Network'] = 'Bezvadu lokālais tīkls';

$GLOBALS["lang"]['With the 3.3.0 release of Open-AudIT we have introduced the concept of a Cluster. This intuitively maps to the idea of a web cluster, database cluster or file cluster (or one of several other purposes) into a given type (high availability, redundancy, scaling, etc).<br><br>Depending on the purpose of cluster chosen, the reporting will be slightly different.<br><br>For example, if you create a Cluster with a purpose of virtualisation, when you have added devices to it you will also see the virtual machines on those devices.'] = 'Ar 3.3.0 Open-AudIT atbrīvošanu esam ieviesuši klastera koncepciju. Šī intuitīvi kartē uz ideju par tīmekļa klasteri, datubāzu klasteri vai failu klasteri (vai vienu no vairākiem citiem mērķiem) konkrētā veidā (augsta pieejamība, atlaišana, mērogošana utt.).<br/><br/>Atkarībā no izvēlētā kopas mērķa ziņošana būs nedaudz atšķirīga.<br/><br/>Piemēram, ja jūs izveidojat klasteri ar virtualizācijas mērķi, kad esat tam pievienojis ierīces, jūs redzēsiet arī virtuālās mašīnas šajās ierīcēs.';

$GLOBALS["lang"]['With the introduction of the Clouds feature, you can supply details of your cloud, Amazon AWS or Microsoft Azure, and Open-AudIT will use the relevant API to retrieve a list of locations, networks, and instances, then discover each of these instances.'] = 'Ieviešot mākoņdatošanas funkciju, jūs varat sniegt informāciju par savu mākoni, Amazon AWS vai Microsoft Azure, un Open-AudIT izmantos attiecīgo API, lai iegūtu sarakstu ar vietām, tīkliem un instancēm, pēc tam atklājot katru no šīm instancēm.';

$GLOBALS["lang"]['wmi_fails'] = 'Wmi Fails';

$GLOBALS["lang"]['Wmi Fails'] = 'Wmi Fails';

$GLOBALS["lang"]['wmi_timeout'] = 'Wmi noildze';

$GLOBALS["lang"]['Wmi Timeout'] = 'Wmi noildze';

$GLOBALS["lang"]['workgroup'] = 'Darba grupa';

$GLOBALS["lang"]['Workgroup'] = 'Darba grupa';

$GLOBALS["lang"]['Working Credentials'] = 'Darba apstākļi';

$GLOBALS["lang"]['Wrap Up'] = 'Aplauzt';

$GLOBALS["lang"]['Written in the PHP scripting language.'] = 'Rakstījis PHP skriptēšanas valodā.';

$GLOBALS["lang"]['XML'] = 'XML';

$GLOBALS["lang"]['Yellow Query'] = 'Dzeltens vaicājums';

$GLOBALS["lang"]['Yemen'] = 'Jemena';

$GLOBALS["lang"]['Yes'] = 'Jā';

$GLOBALS["lang"]['You are able to define extra directories to be scanned as entries in the Executables collection. When defined, the directory and all sub-directories are scanned for files that are executable. You can also define directories and files to be excluded. When activated, these are injected into the linux audit script and performed whenever it is run (usually as part of a discovery). If you want these in a script you can manually copy to the target, use menu -> Discover -> Scripts -> List Scripts and download the script from there.'] = 'Jūs varat definēt papildus mapes, kas tiks skenētas kā darbi Executables kolekcijā. Kad definēts, direktorija un visas apakšdirektorijas tiek skenētas failiem, kas ir izpildāmi. Jūs varat arī definēt direktorijas un failus, kas jāizslēdz. Kad aktivizēts, tos ievada linux audita skriptā un veic, kad tas tiek darbināts (parasti kā daļa no atklājuma). Ja vēlaties šos skriptā jūs varat manuāli kopēt uz mērķi, izmantojiet izvēlni -> Atklājiet -> Skripti -> Saraksts skripti un lejupielādēt skriptu no turienes.';

$GLOBALS["lang"]['You are always free to modify the audit scripts themselves to suit your specific requirements. You will need to (re)incorporate those changes whenever you upgrade as they will be overwritten by the default scripts. I would suggest saving a master copy of your modified script, upgrading Open-AudIT, then running a diff between the new default script and your modified script and applying the differences. The audit scripts are native scripts (Windows is VBScript, all others are Bash). Simple and easy to modify - just make sure to have a copy of your changes before you upgrade.'] = 'Jums vienmēr ir brīvi mainīt revīzijas skriptus paši, lai atbilstu jūsu īpašajām prasībām. Jums būs nepieciešams (re)iekļaut šīs izmaiņas, kad jūs jaunināt, jo tie tiks pārrakstīts ar noklusējuma skriptiem. Es ieteiktu saglabāt master kopiju jūsu modificēto skriptu, jaunināšana Open-AudIT, pēc tam darbojas diff starp jauno noklusējuma skriptu un jūsu modificētu skriptu un piemērojot atšķirības. Revīzijas skripti ir vietējie skripti (Windows ir VBScript, visi pārējie ir Bash). Vienkāršs un viegli modificējams - tikai pārliecinieties, ka pirms jaunināšanas ir jūsu izmaiņu kopija.';

$GLOBALS["lang"]['You are running version'] = 'Jūs darbināt versiju';

$GLOBALS["lang"]['You can access the collection using the normal Open-AudIT JSON based API. Just like any other collection. Please see'] = 'Jūs varat piekļūt kolekcijai, izmantojot parasto Open-AudIT JSON bāzes API. Tāpat kā jebkura cita kolekcija. Skatīt';

$GLOBALS["lang"]['You can also'] = 'Jūs varat arī';

$GLOBALS["lang"]['You can also see at the bottom of the page a table showing the devices the changes will be applied to.'] = 'Jūs varat arī redzēt lapas apakšā tabulu ar ierīcēm, uz kurām tiks attiecinātas izmaiņas.';

$GLOBALS["lang"]['You can also specify properties using the below format.'] = 'Jūs varat arī norādīt īpašības, izmantojot zemāk formātu.';

$GLOBALS["lang"]['You can always run the Firstwave VM on your virtual infrastructure (ESX, Azure, et al). The Firstwave VM runs Debian linux and is free from OS licensing concerns and limitations. Or install on your own Linux distro of choice. We support Redhat 9, Ubuntu 20.04, 22.04 and 24.04 as well as Debian 11 and 12.'] = 'Jūs vienmēr varat palaist Firstwave VM savā virtuālajā infrastruktūrā (ESX, Azure, et al). Firstwave VM vada Debian linux un ir brīva no OS licencēšanas bažām un ierobežojumiem. Vai instalēt uz savu Linux distro izvēles. Mēs atbalstām Redhat 9, Ubuntu 20.04, 22.04 un 24.04, kā arī Debian 11 un 12.';

$GLOBALS["lang"]['You can assign devices to a location automatically using'] = 'Jūs varat piešķirt ierīces uz vietu automātiski izmantojot';

$GLOBALS["lang"]['You can assign devices using custom'] = 'Jūs varat piešķirt ierīces izmantojot pielāgotu';

$GLOBALS["lang"]['You can audit a remote machine without the using the actual Administrator account by creating a registry key. Create the below key on every machine to be audited and make sure the user credentials used is a member of the Administrators group.'] = 'Izveidojot reģistra atslēgu, jūs varat pārbaudīt attālināto datoru bez faktiskā administratora konta. Izveidot zemāk atslēgu uz katru mašīnu, kas jārevidē, un pārliecinieties, ka izmantotie lietotāja akreditācijas dati ir loceklis administratoru grupā.';

$GLOBALS["lang"]['You can certainly run a discovery without any valid credentials on the devices within the network, however, the information retrieved will be a very small subset of what Open-AudIT has the ability to retrieve <i>with</i> credentials.'] = 'Jūs noteikti varat palaist atklājumu bez derīgas akreditācijas par ierīcēm tīklā, tomēr, iegūtā informācija būs ļoti maza apakškopa no tā, ko Open-AudIT ir spēja iegūt <i>kur:</i> pilnvaras.';

$GLOBALS["lang"]['You can create a baseline, run it against a group of devices and view the results, add scheduled execution, add more tables for comparison (currently only software, netstat ports and users are enabled), in place baseline editing, archiving of results and more.'] = 'Jūs varat izveidot bāzes, palaist to pret ierīču grupu un apskatīt rezultātus, pievienot plānoto izpildi, pievienot vairāk tabulas salīdzināšanai (pašlaik ir iespējota tikai programmatūra, netstat porti un lietotāji), vietā bāzes rediģēšanu, arhivēšanas rezultātiem un vairāk.';

$GLOBALS["lang"]['You can create a script with all the options for any of the existing audit scripts - not just Windows. AIX, ESX, Linux, OSX and Windows are all covered.'] = 'Jūs varat izveidot skriptu ar visām iespējām jebkuram no esošajiem audita skriptiem - ne tikai Windows. Visi ir pārklāti ar AIX, ESX, Linux, OSX un Windows.';

$GLOBALS["lang"]['You can customize the entire integration down to which system (NMIS or Open-AudIT) is the authority on a per field basis. There are options to create and/or update devices in Open-AudIT or NMIS. Should we run a discovery on a created or updated device and so much more. There are explanations for each item on the right side of the page.'] = 'Jūs varat pielāgot visu integrāciju uz leju, uz kuru sistēma (NMIS vai Open-AudIT) ir iestāde par katru lauku. Ir iespējas izveidot un/vai atjaunināt ierīces Open-AudIT vai NMIS. Ja mēs palaist atklājums uz izveidota vai atjaunināta ierīce un tik daudz vairāk. Katram punktam lapas labajā pusē ir paskaidrojumi.';

$GLOBALS["lang"]['You can define an application and associate a device to this application. A device may be associated to more than one application. An application may be associated to more than one device.'] = 'Jūs varat definēt programmu un asociēt ierīci šai programmai. Ierīce var būt saistīta ar vairāk nekā vienu lietojumu. Pieteikums var būt saistīts ar vairāk nekā vienu ierīci.';

$GLOBALS["lang"]['You can edit the value of the Additional Field for each individual device on the device details page. View the device details screen, open the section containing the field and (if you have'] = 'Katrai ierīcei ierīces informācijas lapā varat rediģēt papildu lauka vērtību. Skatiet ierīces detaļas ekrānu, atveriet sadaļu, kas satur lauku un (ja jums ir';

$GLOBALS["lang"]['You can limit the Device Seed Discovery to fall within a strict set of parameters, including: <i>Restrict to Subnet</i> and <i>Restrict to Private</i>'] = 'Jūs varat ierobežot Device Seed Discovery, lai tas atbilstu stingriem parametriem, tostarp: <i>Ierobežot ar apakštīklu</i> kā arī <i>Ierobežot ar ierindu</i>';

$GLOBALS["lang"]['You can manually assign devices using'] = 'Jūs varat manuāli piešķirt ierīcēm, izmantojot';

$GLOBALS["lang"]['You can override this by providing the format option in the URL.'] = 'Varat to aizstāt, norādot URL formāta opciju.';

$GLOBALS["lang"]['You can select individual devices by clicking their check-boxes on the right side or selecting all devices clicking the checkbox on the top right of the table (underneath the Edit button that looks like a pencil).'] = 'Jūs varat izvēlēties atsevišķas ierīces, noklikšķinot uz to izvēles rūtiņām labajā pusē vai izvēloties visas ierīces, noklikšķinot uz izvēles rūtiņas tabulas augšējā labajā pusē (zem pogas Rediģēt, kas izskatās kā zīmulis).';

$GLOBALS["lang"]['You can select the devices to be integrated by choosing any attribute in the system (device) table and matching (see menu → Admin → Database → List Tables → system for a list of fields). An attribute match can only match a single value.'] = 'Jūs varat izvēlēties ierīces integrēt, izvēloties jebkuru atribūtu sistēmas (ierīču) tabulā un saskaņošana (skatīt izvēlni → Admin → Database → Saraksts Tabulas → sistēma sarakstu laukiem). Atribūts atbilst tikai vienai vērtībai.';

$GLOBALS["lang"]['You can turn any server into a collector by going to menu -> Admin -> Collectors -> Make this install a Collector. You will need credentials to log on to the server this install will report in to.'] = 'Jebkuru serveri var pārvērst kolekcionārā, dodoties uz izvēlni -> Administrators -> Kolekcionāri -> Padarīt šo instalēt Collector. Jums būs nepieciešams akreditācijas datus, lai pieteikties uz servera šī instalēt ziņos uz.';

$GLOBALS["lang"]['You can view by clicking on the blue view icon. You can also edit or delete if you have permissions.'] = 'Jūs varat apskatīt, noklikšķinot uz zilā skata ikonas. Jūs varat arī rediģēt vai dzēst, ja jums ir atļaujas.';

$GLOBALS["lang"]['You do not have the PHP MBString extension installed. This extension is required.'] = 'Jums nav instalēts PHP MBString paplašinājums. Šis pagarinājums ir vajadzīgs.';

$GLOBALS["lang"]['You do not have the PHP SNMP extension installed. This extension is highly recommended.'] = 'Jums nav instalēts PHP SNMP paplašinājums. Šis pagarinājums ir ļoti ieteicams.';

$GLOBALS["lang"]['You may want to copy and paste this URL in an email to your staff.'] = 'Jūs varat kopēt un ielīmēt šo URL jūsu darbiniekiem e-pastā.';

$GLOBALS["lang"]['You may wish to have Active Directory or OpenLDAP authenticate your users, but not provide authorization. To do this, make sure <i>Use for Authentication</i> is set to Y and <i>Use for Roles</i> is set to N. The credentials will be validated by LDAP, but you will need to have the user already created and assigned Roles in Open-AudIT. This also <i>automatically</i> applies to'] = 'Jūs varat vēlēties Active Directory vai OpenLDAP autentificēt savus lietotājus, bet nenodrošināt autorizāciju. Lai to izdarītu, pārliecinieties <i>Autentificēšanas izmantošana</i> ir iestatīts uz Y un <i>Izmanto lomas</i> ir N. Dati tiks apstiprināti ar LDAP, bet jums būs nepieciešams, lai lietotājs jau izveidots un piešķirts lomas Open-AudIT. Tas arī <i>automātiski</i> attiecas uz';

$GLOBALS["lang"]['You might have noticed these match rules are for items that might not be globally unique. Some examples:'] = 'Jūs varētu būt ievērojuši šos atbilstības noteikumus ir posteņiem, kas varētu nebūt pasaulē unikāls. Daži piemēri:';

$GLOBALS["lang"]['You must delete your existing license before adding a new license.'] = 'Jums ir dzēst savu esošo licenci, pirms pievienot jaunu licenci.';

$GLOBALS["lang"]['You must have working SSH credentials to execute a benchmark. The following Operating Systems are currently supported: Centos 7, Debian 12, Redhat 7, Redhat 8, Redhat 9, SLES 15, Ubuntu 20.04, Ubuntu 22.04. We plan to expand on these with further releases.'] = 'Jums ir jāstrādā SSH akreditācijas, lai izpildītu etalonu. Pašlaik tiek atbalstītas šādas operētājsistēmas: Centos 7, Debian 12, Redhat 7, Redhat 8, Redhat 9, SLES 15, Ubuntu 20.04, Ubuntu 22.04. Mēs plānojam paplašināt šos ar papildu atbrīvošanu.';

$GLOBALS["lang"]['You should copy and paste the entire file into the textbox. In the case below, copy ALL the text.'] = 'Jums vajadzētu kopēt un ielīmēt visu failu teksta kastē. Šajā gadījumā kopiju VISU tekstu.';

$GLOBALS["lang"]['You should not include the edited_by and edited_date fields. These will be automatically set.'] = 'Jums nevajadzētu iekļaut rediģētos un rediģētos_date laukus. Tie tiks automātiski iestatīti.';

$GLOBALS["lang"]['You should only change the second sentence of text, the'] = 'Jums vajadzētu tikai mainīt otro teikumu teksta,';

$GLOBALS["lang"]['You should substitute the required column (eg, org_id) for ATTRIBUTE_NAME.'] = 'Jums vajadzētu aizstāt nepieciešamo kolonnu (piemēram, org_id) ATTRIBUTE_NAME.';

$GLOBALS["lang"]['You should use a header line containing the names of the columns you wish to populate, then your data lines below that.'] = 'Jums vajadzētu izmantot galvenes līniju, kas satur nosaukumu kolonnas vēlaties aizpildīt, tad jūsu datu līnijas zem ka.';

$GLOBALS["lang"]['You should use only those tables that contain attributes you need. I usually use a left join. For example'] = 'Jums vajadzētu izmantot tikai tās tabulas, kas satur atribūtus jums nepieciešams. Es parasti izmanto kreiso pievienoties. Piemēram';

$GLOBALS["lang"]['You will need a'] = 'Jums';

$GLOBALS["lang"]['You will need the ports for WMI on the Windows firewall opened on each target Windows computer. For Windows Core servers, ensure you allow the firewall connections as per'] = 'Jums būs nepieciešams porti WMI uz Windows ugunsmūris atvērts katrā mērķa Windows datoru. Logiem Pamatserveri, pārliecinieties, ka jūs ļaujat ugunsmūra savienojumus, kā vienu';

$GLOBALS["lang"]['You will see a list of'] = 'Jūs redzēsiet sarakstu';

$GLOBALS["lang"]['YouTube Tutorials'] = 'Pamācības YouTube';

$GLOBALS["lang"]['Your AWS EC2 API key.'] = 'Jūsu AWS EC2 API atslēga.';

$GLOBALS["lang"]['Your Google Compute credentials as JSON.'] = 'Jūsu Google aprēķina akreditācijas datus kā JSON.';

$GLOBALS["lang"]['Your Host is'] = 'Jūsu Dators ir';

$GLOBALS["lang"]['Your Licenses'] = 'Jūsu licences';

$GLOBALS["lang"]['Your Microsoft Azure Client ID.'] = 'Microsoft Azure klienta ID.';

$GLOBALS["lang"]['Your Microsoft Azure Client Secret.'] = 'Microsoft Azure klienta noslēpums.';

$GLOBALS["lang"]['Your Microsoft Azure Subscription ID.'] = 'Microsoft Azure abonēšanas ID.';

$GLOBALS["lang"]['Your Microsoft Azure Tennant ID.'] = 'Microsoft Azure Tennant ID.';

$GLOBALS["lang"]['Your PHP version is'] = 'Jūsu PHP versija ir';

$GLOBALS["lang"]['Your SQL to select attributes that will populate this query.'] = 'Jūsu SQL, lai izvēlētos atribūtus, kas aizpilda šo vaicājumu.';

$GLOBALS["lang"]['Your SQL to select devices that will populate this group.'] = 'Jūsu SQL, lai izvēlētos ierīces, kas papildinās šo grupu.';

$GLOBALS["lang"]['Your SSH key.'] = 'Jūsu SSH atslēga.';

$GLOBALS["lang"]['Your access credentials, as per that clouds native API.'] = 'Jūsu piekļuves dati, kā par to mākoņiem dzimtā API.';

$GLOBALS["lang"]['Your data is your data. You can extract it any time you like. We even helpfully provide exports to CSV, JSON and XML. And we have a JSON API. And you can write custom reports and have those output in CSV, XML, and JSON! Again, it is your data - not anyone else. You can be confident that the security of your data is in your hands.'] = 'Jūsu dati ir jūsu dati. Jūs varat iegūt to jebkurā laikā vēlaties. Mēs pat noderīgi sniegt eksportu uz CSV, JSON un XML. Un mums ir JSON API. Un jūs varat rakstīt pasūtījuma ziņojumus un ir tiem izejas CSV, XML, un JSON! Atkal, tie ir jūsu dati - ne kāds cits. Jūs varat būt pārliecināti, ka jūsu datu drošība ir jūsu rokās.';

$GLOBALS["lang"]['Your database platform is'] = 'Jūsu datu bāzes platforma ir';

$GLOBALS["lang"]['Your description of the status of this connection (provisioned, retired, etc).'] = 'Jūsu apraksts par šī savienojuma statusu (pagarināts, pensionēts utt.).';

$GLOBALS["lang"]['Your description of this item.'] = 'Jūsu apraksts par šo preci.';

$GLOBALS["lang"]['Your generic name for this piece of software'] = 'Jūsu lietotājvārds šai programmatūrai';

$GLOBALS["lang"]['Your generic version for this piece of software'] = 'Jūsu vispārējā versija šai programmatūrai';

$GLOBALS["lang"]['Your user should now be able to logon by clicking the <i>Logon with Entra</i> button on the Open-AudIT logon page. As mentioned above, if the logon fails, please check the logfile and verify the users <i>preferred username</i>.<br><br>And that should be all there is too it. Now your users should have one less set of credentials to remember!<br><br>As always, if you have troubles with this feature, please email'] = 'Jūsu lietotājam tagad vajadzētu būt iespējai pieteikties, noklikšķinot uz <i>Pieteikties ar Entra</i> pogu Open-AudIT logonī lapā. Kā minēts iepriekš, ja pieteikšanās neizdodas, lūdzu, pārbaudiet logfile un pārbaudīt lietotājiem <i>vēlamais lietotājvārds</i>.<br/><br/>Un tam visam vajadzētu būt arī tam. Tagad jūsu lietotājiem vajadzētu būt par vienu mazāk akreditācijas komplekts atcerēties!<br/><br/>Kā vienmēr, ja jums ir problēmas ar šo funkciju, lūdzu, rakstiet';

$GLOBALS["lang"]['Your user should now be able to logon by clicking the <i>Logon with OKTA</i> button on the Open-AudIT logon page. As mentioned above, if the logon fails, please check the logfile and verify the users <i>name</i>.<br><br>And that should be all there is too it. Now your users should have one less set of credentials to remember!<br><br>As always, if you have troubles with this feature, please email'] = 'Jūsu lietotājam tagad vajadzētu būt iespējai pieteikties, noklikšķinot uz <i>Pieteikties ar OKTA</i> pogu Open-AudIT logonī lapā. Kā minēts iepriekš, ja pieteikšanās neizdodas, lūdzu, pārbaudiet logfile un pārbaudīt lietotājiem <i>nosaukums</i>.<br/><br/>Un tam visam vajadzētu būt arī tam. Tagad jūsu lietotājiem vajadzētu būt par vienu mazāk akreditācijas komplekts atcerēties!<br/><br/>Kā vienmēr, ja jums ir problēmas ar šo funkciju, lūdzu, rakstiet';

$GLOBALS["lang"]['Your web server is'] = 'Jūsu tīmekļa serveris ir';

$GLOBALS["lang"]['Zambia'] = 'Zambija';

$GLOBALS["lang"]['Zimbabwe'] = 'Zimbabve';

$GLOBALS["lang"]['a String'] = 'Virkne';

$GLOBALS["lang"]['active'] = 'aktīvs';

$GLOBALS["lang"]['active directory'] = 'aktīvā mape';

$GLOBALS["lang"]['active/active'] = 'aktīvi/aktīvi';

$GLOBALS["lang"]['active/passive'] = 'aktīvs/pasīvs';

$GLOBALS["lang"]['advertisement'] = 'reklāma';

$GLOBALS["lang"]['alert'] = 'brīdinājums';

$GLOBALS["lang"]['all'] = 'visi';

$GLOBALS["lang"]['allocated'] = 'iedalīti';

$GLOBALS["lang"]['amazon'] = 'amazons';

$GLOBALS["lang"]['an Integer'] = 'Comment';

$GLOBALS["lang"]['and'] = 'kā arī';

$GLOBALS["lang"]['and / or'] = 'un/vai';

$GLOBALS["lang"]['and a support ticket will be created and actioned.'] = 'un tiks izveidota atbalsta biļete un darbība.';

$GLOBALS["lang"]['and another'] = 'un cits';

$GLOBALS["lang"]['and download the Latest Release self-installer. You may need to scroll down the page to find it.'] = 'un lejupielādējiet Jaunāko Release pašinstalētāju. Lai to atrastu, jums var būt nepieciešams ritināt uz leju lapu.';

$GLOBALS["lang"]['and go to Applications -> Enterprise Applications (far left menu), then click <i>New application</i>.'] = 'un doties uz programmas -> Enterprise Applications (attālu kreiso izvēlni), tad noklikšķiniet <i>Jauns pieteikums</i>.';

$GLOBALS["lang"]['and its current time is'] = 'un tā pašreizējais laiks ir';

$GLOBALS["lang"]['and looks for a warranty expiration date prior to today.'] = 'un meklē garantijas derīguma termiņu pirms šodienas.';

$GLOBALS["lang"]['and review what is possible.'] = 'un pārskatīt, kas ir iespējams.';

$GLOBALS["lang"]['and the Sign-out redirect URI being'] = 'un novirzīšanas URI';

$GLOBALS["lang"]['and the final lines will likely be of most interest. These lines should give you the exact point at which the login failed.'] = 'un gala līnijas, visticamāk, būs visvairāk ieinteresēti. Šīm rindām vajadzētu dot precīzu punktu, kurā pieteikšanās neizdevās.';

$GLOBALS["lang"]['antivirus'] = 'antivīruss';

$GLOBALS["lang"]['application'] = 'pieteikums';

$GLOBALS["lang"]['approved'] = 'apstiprināts';

$GLOBALS["lang"]['are required.'] = 'ir nepieciešami.';

$GLOBALS["lang"]['are used.'] = 'izmanto.';

$GLOBALS["lang"]['as a device responding on this port.<br>This has caused some customers issues where firewalls respond on behalf of a non-existing device, and hence cause false positive device detection. We now have this attribute available to set per scan.'] = 'kā ierīce, kas reaģē šajā portā.<br/>Tas ir radījis dažas klientu problēmas, kurās ugunsmūri reaģē neesošas ierīces vārdā, un tādējādi rada viltus pozitīvu ierīces atklāšanu. Tagad mums ir šis atribūts pieejams, lai iestatītu vienu skenēšanu.';

$GLOBALS["lang"]['as the reference point and filters out all virtual machines via a check of the system.serial field for VM.'] = 'kā atskaites punktu un filtrē visas virtuālās mašīnas, pārbaudot sistēmu. sērijas lauks VM.';

$GLOBALS["lang"]['assuming working and client populated DNS'] = 'pieņemot darba un klienta apdzīvotu DNS';

$GLOBALS["lang"]['attribute'] = 'atribūts';

$GLOBALS["lang"]['auto'] = 'auto';

$GLOBALS["lang"]['backup'] = 'rezerves kopija';

$GLOBALS["lang"]['banned'] = 'aizliegts';

$GLOBALS["lang"]['blog'] = 'emuārs';

$GLOBALS["lang"]['blue'] = 'zils';

$GLOBALS["lang"]['bottom'] = 'apakša';

$GLOBALS["lang"]['building'] = 'ēka';

$GLOBALS["lang"]['can be used for user authentication (is the users name and password correct) as well as user authorization (what roles and orgs does a user have).<br><br>If a user is not in the configured LDAP but is in Open-AudIT (eg: the <i>admin</i> user), Open-AudIT will fallback to using itself for both authentication and authorization.<br><br>Open-AudIT uses specific LDAP groups for roles and orgs. A user must be a direct member of these group(s) in order for Open-AudIT to determine that users access.<br><br>When configured correctly, LDAP use can completely remove the need to create users in Open-AudIT. Simply configure Open-AudIT to use LDAP for both authentication and authorization. If the user does not exist in Open-AudIT but does exist in LDAP and their credentials are correct and they are a member of the required groups Open-AudIT will create the user account automatically.'] = 'var izmantot lietotāja autentificēšanai (ir lietotāja vārds un parole pareizi), kā arī lietotāja autorizācijai (kāda loma un orgs ir lietotājam).<br/><br/>Ja lietotājs nav konfigurētajā LDAP, bet ir Open-AudIT (piemēram: <i>admin</i> lietotājs), Open- AudIT atteiksies izmantot sevi gan autentificēšanai un autorizācijai.<br/><br/>Atvērts IT izmanto īpašas LDAP grupas lomām un orgiem. Lietotājam jābūt tiešam šīs grupas(-u) dalībniekam, lai Open-AudIT varētu noteikt, ka lietotāji var piekļūt.<br/><br/>Kad pareizi konfigurēts, LDAP lietošana var pilnībā noņemt nepieciešamību izveidot lietotājus Open-AudIT. Vienkārši konfigurējiet Open- AudIT, lai izmantotu LDAP gan autentificēšanai, gan autorizācijai. Ja lietotājs nepastāv Open-AudIT, bet pastāv LDAP un viņu akreditācijas dati ir pareizi un viņi ir nepieciešamo grupu Open-AudIT biedrs, automātiski izveido lietotāja kontu.';

$GLOBALS["lang"]['can now retrieve details about a file or directory of files and monitor these files for changes as per other attributes in the Open-AudIT database. This feature works out of the box for Linux Open-AudIT servers, but needs a change to the service account name under a Windows Open-AudIT server. Supported clients are Windows and Linux.'] = 'tagad var iegūt informāciju par failu vai direktoriju failu un uzraudzīt šos failus izmaiņas, kā saskaņā ar citiem atribūtiem Open-AudIT datu bāzē. Šī funkcija darbojas no loga Linux Open-AudIT serveriem, bet nepieciešama pakalpojuma konta nosaukuma maiņa zem Windows Open-AudIT servera. Atbalstītie klienti ir Windows un Linux.';

$GLOBALS["lang"]['changed'] = 'mainīts';

$GLOBALS["lang"]['chosen. From there if a port for WMI, SSH or SNMP is detected responding the device is further queried using '] = 'izvēlēts. No turienes, ja tiek atklāts WMI, SSH vai SNMP ports, kas reaģē, ierīce tiek vēl vairāk apšaubīta, izmantojot ';

$GLOBALS["lang"]['cloud'] = 'mākoņi';

$GLOBALS["lang"]['code'] = 'kods';

$GLOBALS["lang"]['collections and details pages is an icon to execute.'] = 'kolekcijas un detaļas lapas ir ikona izpildīt.';

$GLOBALS["lang"]['collector'] = 'kolektors';

$GLOBALS["lang"]['collectors'] = 'savācēji';

$GLOBALS["lang"]['column'] = 'sleja';

$GLOBALS["lang"]['column will contain either <i>y</i> or <i>n</i>. This indicates if this row is currently present on the device. For example software may be installed (which would result in <i>software.current = y</i>), but on a subsequent audit it may not be detected. Open-AudIT will then change this rows current attribute to <i>n</i>.'] = 'kolonna saturēs vai nu <i>y</i> vai <i>n</i>. Tas norāda, vai šī rinda pašlaik atrodas uz ierīces. Piemēram, var uzstādīt programmatūru (tā rezultātā <i>programmatūra.current = y</i>), bet turpmākajā revīzijā to var neatrast. Open- AudIT tad mainīs šo rindu pašreizējo atribūtu uz <i>n</i>.';

$GLOBALS["lang"]['column. The'] = 'sleja. E ir o pa s';

$GLOBALS["lang"]['compute'] = 'Skaitļot';

$GLOBALS["lang"]['config'] = 'konfigurācija';

$GLOBALS["lang"]['console'] = 'konsole';

$GLOBALS["lang"]['contains'] = 'satur';

$GLOBALS["lang"]['create'] = 'izveidot';

$GLOBALS["lang"]['created'] = 'izveidots';

$GLOBALS["lang"]['credentials'] = 'pilnvaras';

$GLOBALS["lang"]['critical'] = 'kritisks';

$GLOBALS["lang"]['cve'] = 'cve';

$GLOBALS["lang"]['database'] = 'datubāze';

$GLOBALS["lang"]['debug'] = 'atkļūdot';

$GLOBALS["lang"]['delegated'] = 'deleģēti';

$GLOBALS["lang"]['delete'] = 'dzēst';

$GLOBALS["lang"]['deleted'] = 'svītrots';

$GLOBALS["lang"]['denied'] = 'liegts';

$GLOBALS["lang"]['details'] = 'informācija';

$GLOBALS["lang"]['devices'] = 'ierīces';

$GLOBALS["lang"]['digitalocean'] = 'digitalokeāns';

$GLOBALS["lang"]['discoveries'] = 'atklājumi';

$GLOBALS["lang"]['documentation for further details.'] = 'dokumentācija sīkākai informācijai.';

$GLOBALS["lang"]['does <strong>not</strong> provide vulnerability reports for the following'] = 'nav <strong>nav</strong> sniegt neaizsargātības ziņojumus par:';

$GLOBALS["lang"]['does not equal'] = 'nav vienāds';

$GLOBALS["lang"]['emergency'] = 'ārkārtas';

$GLOBALS["lang"]['entra'] = 'entra';

$GLOBALS["lang"]['equals'] = 'vienāds ar';

$GLOBALS["lang"]['error'] = 'kļūda';

$GLOBALS["lang"]['established'] = 'līmenis';

$GLOBALS["lang"]['excluded'] = 'izslēgts';

$GLOBALS["lang"]['expired'] = 'beidzies';

$GLOBALS["lang"]['extreme - Without which, the organisation would fail.

very high - Functions that are essential for the organisations survival and must be restored immediately.

high - Important functions that should be restored quickly but may have a slightly longer recovery time.

medium - Functions that are necessary but can tolerate longer downtime.

low - Non-essential functions that can be delayed without significant impact.

unassigned - The default until set.'] = 'ekstrēms - bez kura, organizācija neizdoties.

ļoti augstas funkcijas, kas ir būtiskas organizāciju izdzīvošanai un ir nekavējoties jāatjauno.

augstas - Svarīgas funkcijas, kas ir jāatjauno ātri, bet var būt nedaudz ilgāks atveseļošanās laiks.

vidēja - funkcijas, kas ir nepieciešamas, bet var paciest ilgāku dīkstāves.

zema - nebūtiskas funkcijas, kuras var aizkavēt bez būtiskas ietekmes.

nav piešķirts - Noklusētais līdz iestatīts.';

$GLOBALS["lang"]['fail'] = 'neizdoties';

$GLOBALS["lang"]['false'] = 'Aplams';

$GLOBALS["lang"]['file'] = 'fails';

$GLOBALS["lang"]['firewall'] = 'ugunsmūris';

$GLOBALS["lang"]['first'] = 'pirmais';

$GLOBALS["lang"]['fixed'] = 'fiksēts';

$GLOBALS["lang"]['floor'] = 'stāvs';

$GLOBALS["lang"]['for'] = 'aizstāj';

$GLOBALS["lang"]['for authentication'] = 'autentificēšanai';

$GLOBALS["lang"]['for this information.'] = 'šo informāciju.';

$GLOBALS["lang"]['from Audit Script Result'] = 'no revīzijas skripta rezultāta';

$GLOBALS["lang"]['from NMIS'] = 'no NMIS';

$GLOBALS["lang"]['from address LocalHost (Using LRPC) running in the application container'] = 'no adreses LokālsHost (izmantojot LRPC), kas darbojas lietojumprogrammu konteinerā';

$GLOBALS["lang"]['front'] = 'Priekša';

$GLOBALS["lang"]['front-left'] = 'priekšējā- kreisajā';

$GLOBALS["lang"]['front-right'] = 'Priekšējā- labā';

$GLOBALS["lang"]['github'] = 'gitubs';

$GLOBALS["lang"]['google'] = 'google';

$GLOBALS["lang"]['greater or equals'] = 'lielāks vai vienāds';

$GLOBALS["lang"]['greater than'] = 'lielāks par';

$GLOBALS["lang"]['group'] = 'grupa';

$GLOBALS["lang"]['has not been set'] = 'nav iestatīts';

$GLOBALS["lang"]['have a working reverse DNS resolvable IP to the target Windows PC.'] = 'ir darba reversā DNS noregulējams IP mērķa Windows PC.';

$GLOBALS["lang"]['have the ability to be executed. On the'] = 'ir izpildāmas. gada';

$GLOBALS["lang"]['head'] = 'galvas';

$GLOBALS["lang"]['here'] = 'šeit';

$GLOBALS["lang"]['high availability'] = 'augsta pieejamība';

$GLOBALS["lang"]['howto'] = 'kā';

$GLOBALS["lang"]['if you clone a Linux virtual machine, unless you manually regenerate this (and in my experience, people do not) it will remain the same.'] = 'ja jūs klons Linux virtuālo mašīnu, ja vien jūs manuāli atjaunot šo (un manā pieredzē, cilvēki nav) tas paliks pats.';

$GLOBALS["lang"]['ignored'] = 'ignorēts';

$GLOBALS["lang"]['import the example device data'] = 'importēt parauga ierīces datus';

$GLOBALS["lang"]['in'] = 'skaits';

$GLOBALS["lang"]['in Enterprise.'] = 'uzņēmumā.';

$GLOBALS["lang"]['in Inputs can have the following values.'] = 'Inputs var būt šādas vērtības.';

$GLOBALS["lang"]['in Outputs can have the following values.'] = 'In Outputs var būt šādas vērtības.';

$GLOBALS["lang"]['inactive'] = 'neaktīvs';

$GLOBALS["lang"]['incomplete'] = 'nepilnīga';

$GLOBALS["lang"]['info'] = 'info';

$GLOBALS["lang"]['installer will test for the presence of Nmap in its standard install locations of'] = 'uzstādītājs pārbaudīs klātbūtni Nmap savā standarta uzstādīšanas vietās';

$GLOBALS["lang"]['int, text, bool (y/n), etc'] = 'int, text, bool (y/n) u. c.';

$GLOBALS["lang"]['is U.S. standard maintained by National Institute of Standards and Technology'] = 'ir ASV standarts uztur Nacionālais standartu un tehnoloģiju institūts';

$GLOBALS["lang"]['is an international standard for managing information security. It provides a framework for establishing, implementing, maintaining, and continually improving an Information Security Management System (ISMS).'] = 'ir starptautisks standarts informācijas drošības pārvaldībai. Tā nodrošina pamatu informācijas drošības pārvaldības sistēmas (ISMS) izveidei, īstenošanai, uzturēšanai un pastāvīgai uzlabošanai.';

$GLOBALS["lang"]['is based upon'] = 'ir balstīta uz';

$GLOBALS["lang"]['is licensed to'] = 'ir licencēts';

$GLOBALS["lang"]['is next on the list and Open-AudIT can use password and key authentication. Open-AudIT can also use a sudo enabled user as opposed to the root use directly (although it can also use root). For best results, the root user or a sudo enabled user should be used (see Auditing Linux without root and Target Client Configuration on the wiki). Windows devices can also run ssh, however if Open-AudIT detects this it will stop the SSH queries and instead use WMI (assuming working WMI credentials).'] = 'ir nākamais sarakstā un Open-AudIT var izmantot paroli un atslēgu autentificēšanu. Open-AudIT var izmantot arī sudo aktivizētu lietotāju, nevis saknes izmantošanu tieši (lai gan tas var izmantot arī root). Lai iegūtu vislabākos rezultātus, ir jāizmanto saknes lietotājs vai sudo aktivizēts lietotājs (skatīt Auditing Linux bez saknes un Target Client konfigurācija uz wiki). Windows ierīces var darbināt arī ssh, tomēr, ja Open-AudIT to konstatē, tas apturēs SSH vaicājumus un tā vietā izmanto WMI (pieņemot, ka strādā WMI akreditācijas).';

$GLOBALS["lang"]['is the link to the'] = 'ir saite uz';

$GLOBALS["lang"]['item to view the specific tables and their columns. This will enable you to find exactly what you need, rather than trawling through the MySQL console of the schema creation script.'] = 'postenis apskatīt īpašās tabulas un to kolonnas. Tas ļaus jums atrast tieši to, kas jums ir nepieciešams, nevis tralēšana caur MySQL konsole no shēmas radīšanas skriptu.';

$GLOBALS["lang"]['key required to retrieve lat/long and display map. See'] = 'taustiņš, kas nepieciešams, lai iegūtu lat / gar un parādīt karti. Skatīt';

$GLOBALS["lang"]['left'] = 'kreisā';

$GLOBALS["lang"]['less or equals'] = 'mazāks vai vienāds';

$GLOBALS["lang"]['less than'] = 'mazāks par';

$GLOBALS["lang"]['license'] = 'licence';

$GLOBALS["lang"]['licenses'] = 'licences';

$GLOBALS["lang"]['like'] = 'kā';

$GLOBALS["lang"]['line'] = 'rinda';

$GLOBALS["lang"]['list'] = 'saraksts';

$GLOBALS["lang"]['list View, using the Create button'] = 'saraksta skats, izmantojot pogu Izveidot';

$GLOBALS["lang"]['load balancing'] = 'slodzes līdzsvarošana';

$GLOBALS["lang"]['location'] = 'atrašanās vieta';

$GLOBALS["lang"]['locations'] = 'vietas';

$GLOBALS["lang"]['managed'] = 'pārvaldīts';

$GLOBALS["lang"]['methods'] = 'metodes';

$GLOBALS["lang"]['microsoft'] = 'microsoft';

$GLOBALS["lang"]['mount point'] = 'uzstādīšanas punkts';

$GLOBALS["lang"]['must'] = 'nav';

$GLOBALS["lang"]['network'] = 'tīkls';

$GLOBALS["lang"]['news'] = 'ziņas';

$GLOBALS["lang"]['no'] = 'nav';

$GLOBALS["lang"]['node'] = 'mezgls';

$GLOBALS["lang"]['none'] = 'nelieto';

$GLOBALS["lang"]['normal'] = 'Normāls';

$GLOBALS["lang"]['not applicable'] = 'nav piemērojams';

$GLOBALS["lang"]['not in'] = 'nav';

$GLOBALS["lang"]['not like'] = 'nav līdzīgs';

$GLOBALS["lang"]['notice'] = 'paziņojums';

$GLOBALS["lang"]['notification'] = 'paziņošana';

$GLOBALS["lang"]['okta'] = 'okta';

$GLOBALS["lang"]['on devices where'] = 'uz ierīcēm, kur:';

$GLOBALS["lang"]['openldap'] = 'endldaps';

$GLOBALS["lang"]['optimized'] = 'optimizēts';

$GLOBALS["lang"]['optionally '] = 'pēc izvēles ';

$GLOBALS["lang"]['or'] = 'vai';

$GLOBALS["lang"]['or the GitHub page at'] = 'vai GitHub lapa';

$GLOBALS["lang"]['other'] = 'pārējie';

$GLOBALS["lang"]['package'] = 'Iepakojums';

$GLOBALS["lang"]['page. Export your LDAP server from menu -> Admin -> LDAP Servers -> Details to JSON and save and include this data as well.'] = 'lappuse. Eksportēt savu LDAP serveri no izvēlnes Administrators -> LDAP serveri -> Sīkāka informācija JSON un saglabāt un iekļaut šos datus, kā arī.';

$GLOBALS["lang"]['partition'] = 'Sadalījums';

$GLOBALS["lang"]['pass'] = 'iet';

$GLOBALS["lang"]['pending'] = 'vēl nav';

$GLOBALS["lang"]['performance'] = 'Veiktspēja';

$GLOBALS["lang"]['performed'] = 'veikts';

$GLOBALS["lang"]['permission'] = 'atļauja';

$GLOBALS["lang"]['permissions required per endpoint'] = 'nepieciešamas atļaujas katram mērķa kritērijam';

$GLOBALS["lang"]['pie'] = 'pīrāgs';

$GLOBALS["lang"]['planning'] = 'plānošana';

$GLOBALS["lang"]['predictable'] = 'paredzami';

$GLOBALS["lang"]['query'] = 'vaicājums';

$GLOBALS["lang"]['rear'] = 'aizmugurē';

$GLOBALS["lang"]['rear-left'] = 'pa kreisi';

$GLOBALS["lang"]['rear-right'] = 'pa labi no aizmugures';

$GLOBALS["lang"]['regex'] = 'regex';

$GLOBALS["lang"]['release'] = 'atbrīvot';

$GLOBALS["lang"]['removed from display, but has been set'] = 'izņemts no displeja, bet ir iestatīts';

$GLOBALS["lang"]['reserved'] = 'rezervēts';

$GLOBALS["lang"]['right'] = 'pa labi';

$GLOBALS["lang"]['rights) you can click on the field value to edit it.'] = 'tiesības) jūs varat noklikšķiniet uz lauka vērtību, lai rediģētu to.';

$GLOBALS["lang"]['role'] = 'loma';

$GLOBALS["lang"]['room'] = 'telpa';

$GLOBALS["lang"]['row'] = 'rinda';

$GLOBALS["lang"]['service failed to start due to the following error'] = 'Servisu neizdevās palaist sekojošas kļūdas dēļ';

$GLOBALS["lang"]['so Open-AudIT knows to restrict your query to the appropriate Orgs.'] = 'Tātad Open-AudIT zina, lai ierobežotu savu vaicājumu ar atbilstošu Orgs.';

$GLOBALS["lang"]['stand-alone'] = 'savrups';

$GLOBALS["lang"]['standard'] = 'standarta';

$GLOBALS["lang"]['starts with'] = 'sākas ar';

$GLOBALS["lang"]['storage'] = 'uzglabāšana';

$GLOBALS["lang"]['subnet'] = 'Apakštīkls';

$GLOBALS["lang"]['table'] = 'tabula';

$GLOBALS["lang"]['table and insert the original rows.'] = 'tabula un ievietot sākotnējās rindas.';

$GLOBALS["lang"]['team'] = 'komanda';

$GLOBALS["lang"]['text. The first is the array index and should be left as-is. The index is used in the templates to lookup the translated text.'] = 'tekstu. Pirmais ir masīva indekss un būtu jāatstāj kā-ir. Indekss tiek izmantots veidnēs, lai meklētu tulkoto tekstu.';

$GLOBALS["lang"]['then clicking on the details button for the table.'] = 'tad nospiediet uz tabulas detaļas pogas.';

$GLOBALS["lang"]['then clicking on the details button for the table. Device details are stored in the'] = 'tad nospiediet uz tabulas detaļas pogas. Ierīces detaļas tiek saglabātas';

$GLOBALS["lang"]['timestamp'] = 'laika zīmogs';

$GLOBALS["lang"]['to'] = 'līdz';

$GLOBALS["lang"]['to create an item of this type'] = 'lai izveidotu šāda tipa ierakstu';

$GLOBALS["lang"]['to the URL, you will get the full database entry, including all component tables, of a given device.'] = 'uz URL, jūs saņemsiet pilnu datubāzes ierakstu, ieskaitot visas sastāvdaļas tabulas, konkrētā ierīcē.';

$GLOBALS["lang"]['to the user'] = 'lietotājam';

$GLOBALS["lang"]['top'] = 'top';

$GLOBALS["lang"]['top secret - Military / Government classification. Disclosure would cause exceptionally grave danger to national security.

secret - Military / Government classification. Disclosure would cause serious damage to national security.

confidential - Military / Government and Private Sector classification. Data that is confidential includes trade secrets, intellectual data, application programming code, and other data that could seriously affect the organization if unauthorized disclosure occurred. Data at this level would be available only to personnel in the organization whose work needs, or is directly related to, the accessed data. Access to confidential data usually requires authorization for each access.

private - Private Sector classification. Data that is private includes any information related to personnel, including human resources records, medical records, and salary information, that is used only within the organization.

sensitive - Military / Government and Private Sector classification. Data that is sensitive includes organizational financial information and requires extra measures to ensure its CIA and accuracy. Disclosure might harm national security.

public - Private Sector classification. Public data is data that is generally shared with the public and would not cause a negative impact on the organization. Examples of public data include how many people work in the organization and what products an organization manufactures or sells.

unclassified - Military / Government classification. Any information that can generally be distributed to the public without any threat to national interest.

unassigned - The default until set.'] = 'top noslēpums - Militārā / valdības klasifikācija. Informācijas atklāšana ārkārtīgi nopietni apdraudētu valsts drošību.

noslēpums - Militārā / valdības klasifikācija. Informācijas atklāšana radītu nopietnu kaitējumu valsts drošībai.

konfidenciāli - militārā / valdības un privātā sektora klasifikācija. Konfidenciāli dati ietver komercnoslēpumus, intelektuālos datus, lietojumprogrammas programmēšanas kodu un citus datus, kas var nopietni ietekmēt organizāciju, ja notikusi neatļauta izpaušana. Dati šajā līmenī būtu pieejami tikai organizācijas personālam, kura darbam ir vajadzīgi vai ir tieši saistīti ar piekļūtajiem datiem. Piekļuve konfidenciāliem datiem parasti prasa atļauju katrai piekļuvei.

privātā - Privātā sektora klasifikācija. Privātie dati ietver jebkuru informāciju, kas saistīta ar personālu, tostarp cilvēkresursu uzskaiti, medicīnisko dokumentāciju un algu informāciju, kas tiek izmantota tikai organizācijā.

sensitīvs - Militārā / valdības un privātā sektora klasifikācija. Dati, kas ir sensitīvs ietver organizatorisko finanšu informāciju un prasa papildu pasākumus, lai nodrošinātu savu CIP un precizitāti. Informācijas atklāšana var kaitēt valsts drošībai.

publiskā - privātā sektora klasifikācija. Publiskie dati ir dati, kas parasti tiek kopīgoti ar sabiedrību un neradītu negatīvu ietekmi uz organizāciju. Publisko datu piemēri ir, cik cilvēku strādā organizācijā un kādus produktus tā ražo vai pārdod.

neklasificēts - Militārā / valdības klasifikācija. Jebkāda informācija, ko parasti var izplatīt sabiedrībai, neapdraudot valsts intereses.

nav piešķirts - Noklusētais līdz iestatīts.';

$GLOBALS["lang"]['traffic'] = 'satiksme';

$GLOBALS["lang"]['true'] = 'patiess';

$GLOBALS["lang"]['true or false (in JSON context)'] = 'Patiess vai nepatiess (JSON kontekstā)';

$GLOBALS["lang"]['unallocated'] = 'nepiešķirts';

$GLOBALS["lang"]['unauthorised'] = 'neatļauts';

$GLOBALS["lang"]['unchanged'] = 'nemainīts';

$GLOBALS["lang"]['unknown'] = 'nezināms';

$GLOBALS["lang"]['unmanaged'] = 'neapsaimniekots';

$GLOBALS["lang"]['unused'] = 'neizmantots';

$GLOBALS["lang"]['update'] = 'atjaunināt';

$GLOBALS["lang"]['uses the data collected from your devices and matches the software installed with the value provided, it counts the matches calculates how many licenses have been used and how many are left. It allows the use of wildcards on the <i>match string</i> field which matches the software.name attribute.'] = 'izmanto datus, kas savākti no jūsu ierīcēm un atbilst instalēto programmatūru ar sniegto vērtību, tas skaita atbilstību aprēķina, cik licences ir izmantotas un cik daudz ir palicis. Tas ļauj izmantot zvaigznītes uz <i>atbilst virknei</i> lauks, kas atbilst programmatūrai. nosaukuma atribūts.';

$GLOBALS["lang"]['using the main menu items.'] = 'galveno izvēlnes elementu izmantošana.';

$GLOBALS["lang"]['valid'] = 'derīgs';

$GLOBALS["lang"]['version'] = 'versija';

$GLOBALS["lang"]['virtualisation'] = 'Virtualizācija';

$GLOBALS["lang"]['warning'] = 'brīdinājums';

$GLOBALS["lang"]['web'] = 'tīmekļa';

$GLOBALS["lang"]['with Local and Remote access permissions set.'] = 'ir iestatītas vietējās un attālinātās piekļuves atļaujas.';

$GLOBALS["lang"]['with devices::update permission.'] = 'ar ierīcēm: atjaunināt atļauju.';

$GLOBALS["lang"]['with the Sign-On Redirect URI being'] = 'ar pārvirzītu zīmju URI';

$GLOBALS["lang"]['with the intention of providing simple and intuitive access in a manner familiar to developers. In addition to this API, the web interface will use the same request format and supply some additional actions (eg: HTML forms for creating items).'] = 'ar mērķi nodrošināt vienkāršu un intuitīvu piekļuvi izstrādātājiem pazīstamā veidā. Papildus šai API, tīmekļa saskarne izmantos to pašu pieprasījuma formātu un sniegs dažas papildu darbības (piemēram: HTML formas vienību radīšanai).';

$GLOBALS["lang"]['yes'] = 'jā';

$GLOBALS["lang"]['you do not require a HighCharts license to use Firstwave products. License'] = 'jums nav nepieciešama HighCharts licence izmantot Firstwave produktus. Licence';

$GLOBALS["lang"]['you will assign any found devices to that Org or Location.'] = 'Jūs piešķirat visas atrastās ierīces šai Org vai Atrašanās vieta.';

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

