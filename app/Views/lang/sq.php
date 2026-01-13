<?php
$GLOBALS["lang"][' Default, currently '] = ' E paracaktuar, aktualisht ';

$GLOBALS["lang"][' If something does not work as expected, your first thing to do is check the logs.'] = ' Nëse diçka nuk funksionon siç pritet, gjëja e parë që duhet të bësh është të kontrollosh shkrimet.';

$GLOBALS["lang"][' is now supported with a language file. To change your user to use this language, click '] = ' është suportuar tani me një file gjuhësor. Për të ndryshuar përdoruesin tuaj për të përdorur këtë gjuhë, kliko ';

$GLOBALS["lang"][' seconds'] = ' sekonda';

$GLOBALS["lang"][', but will not need to remember a separate set of logon credentials.'] = ', por nuk do të duhet të kujtojmë një seri të veçantë kredencialesh logon.';

$GLOBALS["lang"][', of which we supply over thirty as a default set. Professional users cannot alter these, but an Enterprise user has complete customisation abilities - including creating your own.'] = ', nga të cilat ne furnizojmë mbi 30 si një vend i paracaktuar. Përdoruesit profesionistë nuk mund t\'i ndryshojnë këto, por një përdorues i Ndërmarrjes ka aftësi të plota doganore, duke përfshirë krijimin tuaj.';

$GLOBALS["lang"][', you <i>must</i> be using https on your Open-AudIT server to use Entra for Auth. Please configure Apache to use <strong>https</strong> before configuring Entra for auth.'] = ', ti <i>duhet</i> të jenë duke përdorur https në serverin tuaj Open-AudIT për të përdorur Entra për Auth. Ju lutem konfiguroni Apaçinë për t\'u përdorur <strong>https</strong> para se ta kuptoj Entra për auth.';

$GLOBALS["lang"]['. To enable this, edit the configuration item for '] = '. Për të aktivizuar këtë, ndrysho zërin e konfigurimit për ';

$GLOBALS["lang"]['10 Minutes'] = '10 minuta';

$GLOBALS["lang"]['15 Minutes'] = '15 minuta';

$GLOBALS["lang"]['30 Minutes'] = '30 minuta';

$GLOBALS["lang"]['5 Minutes'] = '5 minuta';

$GLOBALS["lang"]['93 controls grouped into organizational, people, physical, and technological categories'] = '93 kontrolle të grupuara në kategori organizative, njerëzore, fizike dhe teknologjike';

$GLOBALS["lang"]['<br> <strong>NOTE</strong> - You are accessing this URL from the local Open-AudIT server. The downloaded script will not be able to submit when run on any other machine. If you need to audit other machines, please download the script from any remote machine, not using a browser on the Open-AudIT server itself.'] = '<br/><strong>DYJA</strong> - Jeni duke hyrë në këtë URL nga serveri lokal Open-AudIT. Shkrimi i shkarkuar nuk do të jetë në gjendje të paraqesë kur të drejtuar në ndonjë makinë tjetër. Nëse ju duhet të kontrolloni makineri të tjera, ju lutem shkarkoni skenarin nga ndonjë makinë remote, duke mos përdorur një shfletues në vetë serverin Open-AudIT.';

$GLOBALS["lang"]['<p></p>'] = '<p></p>';

$GLOBALS["lang"]['<p><strong class="text-danger">NOTE</strong> - You must have working SSH or SSH Key credentials to execute benchmarks upon a target device.</p>'] = '<p><strong class="text-danger">DYJA</strong> - Ju duhet të keni punuar SSH ose SSH kredencialet kryesore për të zbatuar provat mbi një pajisje objektive.</p>';

$GLOBALS["lang"]['<p><strong>Baseline</strong> - The overarching document that contains the baseline definition and the individual policy tests.<br> <br> <strong>Policies</strong> - The individual tests contained within a Baseline. Each test is for a specific item. An example would be testing for SSH version 1.2.3.<br> <br> <strong>Details</strong> - Baselines can compare netstat ports, users and software.<br> <br> <strong>Software</strong> - To compare software we check the name and version. Because version numbers are not all standardised in format, when we receive an audit result we create a new attribute called software_padded which we store in the database along with the rest of the software details for each package. For this reason, baselines using software policies will not work when run against a device that has not been audited by 1.10 (at least). Software policies can test against the version being "equal to", "greater than" or "equal to or greater than".<br> <br> <strong>Netstat Ports</strong> - Netstat Ports use a combination of port number, protocol and program. If all are present the policy passes.<br> <br> <strong>Users</strong> - Users work similar to Netstat Ports. If a user exists with a matching name, status and password details (changeable, expires, required) then the policy passes.<br> <br> </p>'] = '<p><strong>Linja</strong> - Dokumenti kryesor që përmban përcaktimin bazë dhe testet individuale të politikës.<br/> <br/> <strong>Politika</strong> - Testet individuale përmbanin brenda një baze. Çdo test është për një send specifik. Një shembull do të ishte testimi për versionin SSH 1.2.3.<br/> <br/> <strong>Hollësi</strong> - Bazat mund të krahasojnë portet, përdoruesit dhe programet.<br/> <br/> <strong>Software</strong> - Për të krahasuar programin ne kontrollojmë emrin dhe versionin. Për shkak se numrat e versionit nuk janë të gjitha të standardizuar në format, kur ne marrim një rezultat auditimi ne krijojmë një atribut të ri të quajtur software_padruar që ne e ruajmë në bazë të dhënash së bashku me pjesën tjetër të detajeve të programeve për çdo paketë. Për këtë arsye, linjat bazë që përdorin politikat e programeve kompjuterikë nuk do të funksionojnë kur drejtuar kundër një pajisje që nuk është kontrolluar nga 1.10 (të paktën). Politikat e programeve kompjuterike mund të testojnë kundër versionit që është "i barabartë me" "më i madh se" ose "i barabartë me apo më i madh se"<br/> <br/> <strong>Portat Netstat</strong> - Netstat Ports përdor një kombinim të numrit port, protokollit dhe programit. Nëse të gjithë janë të pranishëm politika kalon.<br/> <br/> <strong>Përdorues</strong> - Përdoruesit punojnë si Netstat Ports. Nëse një përdorues ekziston me një emër, status dhe hollësi fjalëkalimi (të ndryshueshme, skadon, kërkohet) atëhere politika kalon.<br/> <br/> </p>';

$GLOBALS["lang"]['<p>A location is a physical address that can have devices associated with it.<br> <br>You can assign it coordinates (lat/long) and if there are devices assigned, the location will appear on the Open-AudIT Enterprise map.<br> <br></p>'] = '<p>Vendi është një adresë fizike që mund të ketë pajisje që lidhen me të.<br/> <br/>Mund t\'i caktosh koordinatat (pla/long) dhe nëse ka pajisje të caktuara, vendi do të shfaqet në hartën e Ndërmarrjes Open-AudIT.<br/> <br/></p>';

$GLOBALS["lang"]['<p>A network is derived from discovery entries and device attributes.<br> <br></p>'] = '<p>Një rrjet vjen nga zbulimet dhe vetitë e pajisjeve.<br/> <br/></p>';

$GLOBALS["lang"]['<p>A summary will display a list of items, grouped by the distinct values of the attribute specified by the <code>table</code> and <code>column</code> attributes.<br> <br>When a summary is executed, the result will be a list of distinct values for that <code>table</code> and <code>column</code>. There will be links on the values that allow the user to see the matching devices.<br> <br>If the attribute of <code>extra_columns</code> is populated, the resulting page will contain these columns in addition to the standard device columns.<br> <br></p>'] = '<p>Një përmbledhje do të shfaqë një listë elementësh, të grupuar nga vlerat e veçanta të atributit të specifikuar nga <code>table</code> dhe <code>column</code> Cilësitë.<br/> <br/>Kur një përmbledhje është ekzekutuar, rezultati do të jetë një listë me vlera të veçanta për këtë <code>table</code> dhe <code>column</code>. Do të ketë lidhje në vlerat që i japin mundësi përdoruesit të shohë pajisjet korrisponduese.<br/> <br/>Nëse atributi i <code>extra_columns</code> është i populluar, faqja që vjen si pasojë do të përmbajë këto kollona përveç kolonave standarde të pajisjeve.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Agents let you audit PCs without a discovery. Install the agent and it will check-in with the server each day and audit itself. It does not matter if your computers are firewalled, audit data will still appear in Open-AudIT.</p><p>When testing <strong>if</strong> an agent should perform actions, all three tests must pass (if the test is set). <strong>Then</strong> the actions are taken.</p>'] = '<p>Agjentët ju lejojnë të kontrolloni PC pa një zbulim. Instaloni agjentin dhe ai do të kontrollojë me serverin çdo ditë dhe do të kontrollohet vetë. Nuk ka rëndësi nëse kompjuterët tuaj janë të rrethuar, të dhënat e kontrollit do të shfaqen ende në Open-AudIT.</p><p>Kur testohet <strong>nëse</strong> një agjent duhet të kryejë veprime, të trija testet duhet të kalojnë (nëse është vënë testi). <strong>Prandaj</strong> Veprimet janë marrë.</p>';

$GLOBALS["lang"]['<p>Applications are defined by you, the user and stored for Open-AudIT to use and associate with devices.<br> <br></p>'] = '<p>Programet janë përcaktuar nga ju, përdoruesi dhe ruhen për Open-AudIT për të përdorur dhe shoqëruar me pajisje.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Attributes are stored for Open-AudIT to use for particular fields.</p>'] = '<p>Veçoritë janë ruajtur që Open-AudIT të përdoret për fusha të veçanta.</p>';

$GLOBALS["lang"]['<p>Being able to determine which machines are configured the same is a major part of systems administration and auditing &ndash; and now reporting on that will be made simple and automated. Once you define your baseline it will automatically run against a set of devices on a predetermined schedule. The output of these executed baselines will be available for web viewing, importing into a third party system or even as a printed report.<br> <br> Baselines enable you to combine audit data with a set of attributes you have previously defined (your baseline) to determine compliance of devices.<br> <br> For example - you might create a baseline from a device running Centos 6 which acts as one of your apache servers in a cluster. You know this particular server is configured just the way you want it but you are unsure if other servers in the cluster are configured exactly the same. Baselines enables you to determine this.<br> <br> </p>'] = '<p>Të qenët në gjendje për të përcaktuar se cilat makineri janë parashikuar të njëjta është një pjesë kryesore e administratës së sistemeve dhe kontrollit të ⇩ dhe tani raportimi mbi këtë do të bëhet i thjeshtë dhe automatizuar. Sapo të përcaktoni bazën tuaj, automatikisht do të niset kundër një sërë pajisjesh në një program të paracaktuar. Prodhimi i këtyre bazave të ekzekutuara do të jetë në dispozicion për shikimin e internetit, importimin në një sistem të tretë partie ose edhe si një raport i shtypur.<br/> <br/> Bazat ju japin mundësi të kombinoni të dhënat e auditimit me një sërë atributesh që keni përcaktuar më parë (baza juaj) për të përcaktuar përputhjen e pajisjeve.<br/> <br/> Për shembull, mund të krijoni një bazë nga një pajisje që punon Centos 6 e cila shërben si një nga serverat tuaj apache në një grumbull. Ju e dini që ky server i veçantë është konfiguruar pikërisht ashtu si e dëshironi, por nuk jeni i sigurt nëse serverët e tjerë në grup janë konfiguruar saktësisht të njëjtën gjë. Bazat ju japin mundësi ta përcaktoni këtë.<br/> <br/> </p>';

$GLOBALS["lang"]['<p>Clusters are stored in Open-AudIT to associate devices to better record, manage and estimate licensing costs.<br> <br></p>'] = '<p>Në Open-AudIT janë ruajtur klausterë për të lidhur pajisjet për të regjistruar më mirë, për të administruar dhe vlerësuar kostot e licensimit.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Components is a generic term used for the tables that store the attributes for a device. Those tables are: access_point, arp, bios, certificate, cli_config, disk, dns, file, ip, license, log, memory, module, monitor, motherboard, netstat, network, nmap, optical, pagefile, partition, policy, print_queue, processor, radio, route, san, scsi, server, server_item, service, share, software, software_key, sound, task, usb, user, user_group, variable, video, vm, windows.</p><p> In addition we class the following tables also as device related: application, attachment, cluster, credential, image.</p>'] = '<p>Komponenetet janë një term i përgjithshëm që përdoret për tavolinat që ruajnë cilësitë për një pajisje. Këto tryeza janë: hyrje në_pozitë, arp, bios, çertifikatë, kli_configurim, disk, dns, file, liçenca, logi, moduli, monitori, tabela nënë, rrjetat, rrjeti, nmap, optikë, faqosje, politikë, shtyp_queue, programor, radio, rrugë, scsi, server_m, server_ite, aksion, software, soft_key, aktivitet, name, nab,_group, video, dritare të ndryshueshme, etj.</p><p> Përveç kësaj, ne i klasifikojmë tryezat vijuese si pajisje që lidhen me njëra - tjetrën: aplikimi, lidhja, grumbullimi, kredenciali, imazhi.</p>';

$GLOBALS["lang"]['<p>Credentials are encrypted when stored in the database.<br> <br>When a Discovery is run, a device has its credentials retrieved and tested for connection first (from the <code>credential</code> table). If these fail, then credentials associated with the given Org <code>credentials.org_id</code> is also tested against the device. Working credentials are stored at an individual device level in the credential table (note - no "s" in the table name).<br> <br>SSH keys are tested before SSH username / password. When testing SSH, credentials will also be marked as working with sudo or being root.<br> <br>For ease of use, Windows passwords should not contain a single or double quote. This is a remote WMI limitation, not an Open-AudIT limitation.<br> <br></p>'] = '<p>Krencialet janë të kriptuara kur ruhen në bazë të dhënash.<br/> <br/>Kur kryhet një zbulim, një dispozitiv ka kredencialet e tij të tërhequra dhe të testuara për lidhjen (nga e para) <code>credential</code> Tavolina. Nëse këto dështojnë, atëherë kredencialet lidhen me Org e dhënë <code>credentials.org_id</code> është testuar gjithashtu kundër pajisjes. Kredencialet e punës ruhen në një nivel instrumenti individual në tryezën e kredencialit (njoftimin - jo "s" në emrin e tabelës).<br/> <br/>Çelësat SSH janë testuar para emrit të përdoruesit dhe fjalëkalimit SSH. Kur të testosh SSH, kredencialet do të shënohen edhe si punë me sudo ose si rrënjë.<br/> <br/>Për lehtësi, fjalëkalimet në Windows nuk duhet të përmbajnë një kuotë të vetme ose të dyfishtë. Ky është një kufizim i largët WMI, jo një kufizim Open-AudIT.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Credentials are used to access devices.<br> <br>Configuring credentials should be one of the first things you do after installing Open-AudIT.<br> <br></p>'] = '<p>Kredencialet përdoren për të hyrë në pajisje.<br/> <br/>Konfigurimi i kredencialeve duhet të jetë një nga gjërat e para që bën pasi instalon Open-AudIT.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Define your racks and assign devices into their positions. You already have your devices in Open-AudIT and you know your locations. Open-AudIT extends this to allow you to create a rack and assign devices to it. Open-AudIT will even provide a visualisation of the rack and the devices contained within. If you provide a device picture, that picture will be used in the visualisation. You can look at the rack on the screen and see the same items you would see if you were standing in front of it.<br> <br></p>'] = '<p>Përcakto raftet dhe cakto pajisje në pozicionet e tyre. Ju tashmë i keni pajisjet tuaja në Open-AudIT dhe i dini vendet tuaja. Open-AudIT shtrihet kjo për t\'ju lejuar të krijoni një raft dhe të vendosni pajisje për të. Open-AudIT do të ofrojë edhe një vizualizim të raftit dhe pajisjet e përmbajtura brenda. Nëse ofroni një foto, kjo figurë do të përdoret në vizualizim. Mund të shihni raftin në ekran dhe të shihni të njëjtat gjëra që do të shihnit nëse po qëndronit para tij.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Devices on your network need to be managed. But how do you keep your records up to date? A spreadsheet - defintley not. That will be out of date in hours, if not days. Why manually try to keep up. Use Open-AudIT to automatically scan your networks and record your devices - manufacturer, model, serial and more than 100 other attributes. Full lists of software, services, disks, open ports, users, etc. Automatically see if an attribute has been added, removed or changed.<br> <br>Once Open-AudIT is setup, you can sit back and relax. Have change reports emailed to you on a schedule, for example - what new devices did we discover this week? What new software was installed this week? Were there any hardware changes last month?<br> <br>Expand on the stored fields easily with your own custom attributes.<br> <br>Even add devices that are not connected to your network or those devices your Open-AudIT server cannot reach.<br> <br>Computers, switches, routers, printers or any other device on your network - Open-AudIT can audit them all.<br> <br></p>'] = '<p>Pajisjet në rrjetin tuaj duhet të menaxhohen. Por si i mbani të dhënat tuaja deri në datë? Një defintli e gjerë jo. Kjo do të jetë jashtë datave në orë, nëse jo ditë. Pse me dorë përpiqesh të vazhdosh? Përdor Open-AudIT për të skanuar automatikisht rrjetet tuaja dhe për të regjistruar pajisjet tuaja - prodhues, model, serial dhe më shumë se 100 cilësi të tjera. Lista të plota të programeve, shërbimeve, disqeve, porteve të hapura, përdoruesve, etj. Shiko automatikisht nëse është shtuar një atribut, duke hequr ose ndryshuar.<br/> <br/>Pasi Open-AudIT është vendosur, ju mund të ulen dhe të pushojnë. Për shembull, çfarë pajisjesh të reja zbuluam këtë javë? Çfarë programesh të reja janë instaluar këtë javë? A kishte ndonjë ndryshim hardware muajin e kaluar?<br/> <br/>Zgjero lehtë fushat e ruajtura me cilësitë e tua doganore.<br/> <br/>Madje as pajisjet shtesë që nuk janë të lidhura me rrjetin tuaj apo ato pajisje që serveri juaj Open-AudIT nuk mund t\'i arrijë.<br/> <br/>Kompjutera, çelësa, shoferë, printera apo ndonjë pajisje tjetër në rrjetin tuaj - Open-AudIT mund t\'i kontrollojë të gjitha.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Discoveries are at the very heart of what Open-AudIT does.<br> <br>How else would you know "What is on my network?"<br> <br>Discoveries are prepared data items that enable you to run a discovery upon a network in a single click, without entering the details of that network each and every time.<br> <br></p>'] = '<p>Zbulimet janë në zemër të asaj që bën Open-AudIT.<br/> <br/>Si tjetër do të dini "Çfarë është në rrjetin tim?"<br/> <br/>Zbulimet janë objekte të përgatitura të dhëna që ju mundësojnë të kryeni një zbulim në një rrjet në një klikim të vetëm, pa hyrë në detajet e atij rrjeti çdo herë dhe çdo herë.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Discovery Options are a global setting changed in the <a href="../configuration?configuration.name=discovery_default_scan_option">configuration</a>. If you have an Open-AudIT Enterprise license these are settable per discovery and in addition futher customizable as required. Discovery Options are as follows (including an indicitave time to scan an individual IP):<br/><br><strong>UltraFast</strong>: <i>1 second</i>. Scan only the ports that Open-AudIT needs to use to talk to the device and detect an IOS device (WMI, SSH, SNMP, Apple Sync). An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is not considered open. Device must respond to an Nmap ping. Use aggressive timing.<br><br/><strong>SuperFast</strong>: <i>5 seconds</i>. Scan the top 10 TCP and UDP ports, as well as port 62078 (Apple IOS detection). An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is not considered open. Device must respond to an Nmap ping. Use aggressive timing.<br/><br/><strong>Fast</strong>: <i>40 seconds</i>. Scan the top 100 TCP and UDP ports, as well as port 62078 (Apple IOS detection). An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is not considered open. Device must respond to an Nmap ping. Use aggressive timing.<br/><br/><strong>Medium (Classic)</strong>: <i>90 seconds</i>. As close to a traditional Open-AudIT scan as we can make it. Scan the top 1000 TCP ports, as well as 62078 (Apple IOS detection) and UDP 161 (SNMP). An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is considered open (and will trigger device detection). Devices are scanned regardless of a response to an Nmap ping. Use aggressive timing.<br/><br/><strong>Medium</strong>: <i>100 seconds</i>. Scan the top 1000 TCP and top 100 UDP ports, as well as port 62078 (Apple IOS detection). An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is not considered open. Device must respond to an Nmap ping. Use aggressive timing.<br/><br/><strong>Slow</strong>: <i>4 minutes</i>. Scan the top 1000 TCP and top 100 UDP ports, as well as port 62078 (Apple IOS detection). Version detection enabled. An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is considered open (and will trigger device detection). Device must respond to an Nmap ping. Use normal timing.<br/><br/><strong>UltraSlow</strong>: <i>20 minutes</i>. Not recommended. Scan the top 1000 TCP and UDP ports, as well as port 62078 (Apple IOS detection). Devices are scanned regardless of a response to an Nmap ping. Version detection enabled. An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is considered open (and will trigger device detection). Use polite timing.<br/><br/><strong>Custom</strong>: <i>Unknown time</i>. When options other than as set by a standard discovery preset are altered.<br><br></p>'] = '<p>Zbulimi Mundësitë janë një sfond global i ndryshuar në <a href="../configuration?configuration.name=discovery_default_scan_option">Konfigurimi i Mail</a>. Nëse keni një liçensë të Ndërmarrjes Open-AudIT këto janë të caktuara për zbulim dhe në shtesë të personalizuar siç kërkohet. Zbulimi Mundësitë janë si më poshtë (duke përfshirë një kohë jodicitive për të skanuar një IP individual):<br/><br/><strong>UltraFast</strong>: <i>1 sekondë</i>. Skano vetëm portet që Open-AudIT duhet të përdorë për të folur me pajisjen dhe për të zbuluar një pajisje IOS (WMI, SSH, SNSMP, Sync Apple). A <code>open|filtered</code> Porti konsiderohet i hapur. A <code>filtered</code> Porti nuk konsiderohet i hapur. Dispozitivi duhet t\'i përgjigjet një ping Nep. Përdor kohën agresive.<br/><br><strong>SuperFast</strong>: <i>5 sekonda</i>. Skano 10 portet kryesore TCP dhe UDP si dhe portin 62078 (Diktimi Apple IOS). A <code>open|filtered</code> Porti konsiderohet i hapur. A <code>filtered</code> Porti nuk konsiderohet i hapur. Dispozitivi duhet t\'i përgjigjet një ping Nep. Përdor kohën agresive.<br><br/><strong>Shpejt.</strong>: <i>40 sekonda</i>. Skano 100 portet kryesore TCP dhe UDP si dhe portin 62078 (Diktimi i Apple IOS). A <code>open|filtered</code> Porti konsiderohet i hapur. A <code>filtered</code> Porti nuk konsiderohet i hapur. Dispozitivi duhet t\'i përgjigjet një ping Nep. Përdor kohën agresive.<br/><br/><strong>Mesatare</strong>: <i>90 sekonda</i>. Sa më afër një skanimi tradicional Open-AudIT, aq më shumë mund t\'ia dalim. Skano 1000 portet kryesore TCP, si dhe 62078 (Diktimi Apple IOS) dhe UDP 161 (SNSMP). A <code>open|filtered</code> Porti konsiderohet i hapur. A <code>filtered</code> Porta është konsideruar e hapur (dhe do të shkaktojë zbulimin e dispozitivit). Pajisjet skanohen pavarësisht nga reagimi ndaj një ping të Nmap. Përdor kohën agresive.<br/><br/><strong>Mesatare</strong>: <i>100 sekonda</i>. Skano 1000 TCP dhe 100 portet kryesore të UDP si dhe portin 62078 (Diktimi i Apple IOS). A <code>open|filtered</code> Porti konsiderohet i hapur. A <code>filtered</code> Porti nuk konsiderohet i hapur. Dispozitivi duhet t\'i përgjigjet një ping Nep. Përdor kohën agresive.<br/><br/><strong>Ngadalë.</strong>: <i>4 minuta</i>. Skano 1000 TCP dhe 100 portet kryesore të UDP si dhe portin 62078 (Diktimi i Apple IOS). Zbulimi i versionit është aktivizuar. A <code>open|filtered</code> Porti konsiderohet i hapur. A <code>filtered</code> Porta është konsideruar e hapur (dhe do të shkaktojë zbulimin e dispozitivit). Dispozitivi duhet t\'i përgjigjet një ping Nep. Përdor kohën normale.<br/><br/><strong>UltraSlow</strong>: <i>minuta</i>. Nuk rekomandohet. Skanoni 1000 portet kryesore TCP dhe UDP si edhe portin 62078 (Diktimi i Apple IOS). Pajisjet skanohen pavarësisht nga reagimi ndaj një ping të Nmap. Zbulimi i versionit është aktivizuar. A <code>open|filtered</code> Porti konsiderohet i hapur. A <code>filtered</code> Porta është konsideruar e hapur (dhe do të shkaktojë zbulimin e dispozitivit). Përdor kohën e duhur.<br/><br/><strong>E personalizuar</strong>: <i>Nuk njihet</i>. Kur mundësi të tjera përveç se të vendosura nga një zbulim standard ndryshohen.<br/><br/></br></br></p>';

$GLOBALS["lang"]['<p>Groups are used as simple lists of devices that match the required conditions. If requested using JSON they return a list of <code>devices.id</code> only. If requested using the web interface, they return the standard column attribute list.<br> <br></p>'] = '<p>Grupet përdoren si një listë e thjeshtë pajisjesh që përputhen me kushtet e kërkuara. Nëse kërkohet përdorimi i JSON kthehen në listën e <code>devices.id</code> Vetëm. Nëse kërkohet përdorimi i interfaqes web, ato kthejnë listën e atributeve standart të kollonës.<br/> <br/></p>';

$GLOBALS["lang"]['<p>If the user logging on to Open-AudIT does not have the access to search LDAP (and you are using OpenLDAP), you can use another account which does have this access. Use the <code>ldap_dn_account</code> and <code>ldap_dn_password</code> to configure this.<br> <br><strong>Helpful Documentation</strong><br> <br>
        <a href="/index.php/auth/help">General Auth Help</a><br> <br>
        <a href="/index.php/faq?name=Using Entra for Auth">Using Entra for Auth</a><br> <br>
        <a href="/index.php/faq?name=Using OKTA for Auth">Using OKTA for Auth</a><br> <br>
        <a href="/index.php/faq?name=Troubleshooting LDAP Logins">Troubleshooting LDAP Logins</a><br> <br>
        <a href="/index.php/faq?name=Users, Roles and Orgs">Users, Roles and Orgs</a><br> <br></p>'] = '<p>Nëse prerja e përdoruesit tek Open-AudIT nuk ka të drejtën e kërkimit LDAP (dhe po përdor OpenLDAP), mund të përdorësh një llogari tjetër që ka këtë hyrje. Përdor <code>ldap_dn_account</code> dhe <code>ldap_dn_password</code> për të konfiguruar këtë.<br/> <br/><strong>Dokumentim i dobishëm</strong><br/> <br/><a href="/index.php/auth/help">Ndihmë e përgjithshme e autorizimit</a><br/> <br/><a href="/index.php/faq?name=Using Entra for Auth">Përdorin një listë për t\'u pranuar</a><br/> <br/><a href="/index.php/faq?name=Using OKTA for Auth">Duke përdorur një OKTA për t\'u pranuar</a><br/> <br/><a href="/index.php/faq?name=Troubleshooting LDAP Logins">Duke goditur hyrjen LDAP</a><br/> <br/><a href="/index.php/faq?name=Users, Roles and Orgs">Përdorues, role dhe orga</a><br/> <br/></p>';

$GLOBALS["lang"]['<p>If you add a device type, to display the associated icon you will have to manually copy the .svg formatted file to the directory:<br><em>Linux</em>:/usr/local/open-audit/public/device_images<br><em>Windows</em>: c:\xampp\htdocs\open-audit\device_images<br> <br>If you add a location type, to display the associated icon you will have to manually copy the 32x32px icon to the directory:<br><em>Linux</em>:/usr/local/open-audit/public/images/map_icons<br><em>Windows</em>: c:\xampp\htdocs\open-audit\images\map_icons</p><p>When the <i>resource</i> is a <code>device</code>, valid <i>types</i> are: <code>class</code>, <code>environment</code>, <code>status</code> and <code>type</code>. If the <i>resource</i> is <code>locations</code> or <code>org</code> the only valid <i>type</i> is <code>type</code>. If the <i>resource</i> is a <code>query</code> the only valid <i>type</i> is <code>menu_category</code>.</p>'] = '<p>Nëse shtoni një lloj dispozitivi, për të shfaqur ikonën relative duhet të kopjoni manualisht file e kompozuar .svg tek directory:<br/><em>Linux</em>:/user/local/uper-autdit/publik/Device_images<br/><em>Dritaret</em>: c:\xampp\htdocs\upen-autdit\device_images<br/> <br/>a lloji ikonë në<br/><em>Linux</em>:/user/local/uper-autdit/publik/images/map_icons<br/><em>Dritaret</em>: c:\xampp\htdocs\upen-autdit\images\map_icons</p><p>Kur <i>Burimi</i> është a <code>device</code>, i vlefshëm <i>llojet</i> janë: <code>class</code>. <code>environment</code>. <code>status</code> dhe <code>type</code>. Nëse... <i>Burimi</i> është <code>locations</code> ose <code>org</code> vetëm <i>lloji</i> është <code>type</code>. Nëse... <i>Burimi</i> është a <code>query</code> vetëm <i>lloji</i> është <code>menu_category</code>.</p>';

$GLOBALS["lang"]['<p>If you intend to completely audit your cloud machines, do not forget you will also need those credentials saved in Open-AudIT.</p><p>Make sure you allow the correct ports if you are using Microsoft Azure (22 for SSH, etc). Check your Virtual Machine -> Networking rules.<br> <br></p>'] = '<p>Nëse keni ndërmend të kontrolloni plotësisht makinat tuaja re, mos harroni se do t\'ju duhen edhe ato kredenciale të ruajtura në Open-AudIT.</p><p>Sigurohuni që të lejoni portet korrekte nëse jeni duke përdorur Microsoft Azure (22 për SSH, etj). Kontrollo makinën virtuale -> Rregullat e rrjetit.<br/> <br/></p>';

$GLOBALS["lang"]['<p>If you select a List type, the "values" field will be enabled. You should put a comma separated list of selectable values here. These will display in a dropdown box whenever the field is edited.<br> <br>Like most other attributes, Fields can be bulk edited. Use the Bulk Edit function as you normally would and you will see the Fields are available for input.<br> <br>View the device details screen, open the section containing the field and (if you have sufficient access) you can click on the field value to edit it.<br> <br></p>'] = '<p>Nëse zgjidhni llojin e listës, fusha "vlera" do të aktivizohet. Ti a lista nga. Këto do të shfaqen në një kuti me rënie kur të ndryshohet fusha.<br/> <br/>Si shumica e atributeve të tjera, Fields mund të jetë shumë e redaktuar. Përdor funksionin e BuklEdit si zakonisht dhe do të shohësh që fushat janë në dispozicion për të dhënë.<br/> <br/>Shiko dispozitivin e detajit të ekranit, hap seksionin që përmban fushën dhe (nëse keni hyrje të mjaftueshme) mund të klikoni në vlerën e fushës për ta ndryshuar.<br/> <br/></p>';

$GLOBALS["lang"]['<p>In the ever-changing world of computer security where new vulnerabilities are being discovered and patched every day, enforcing security compliance must be a continuous process. It also needs to include a way to make adjustments to policies, as well as periodic assessment and risk monitoring. The OpenSCAP ecosystem provides tools and customizable policies for a quick, cost-effective and flexible implementation of these processes.</p>'] = '<p>Në botën gjithnjë në ndryshim të sigurisë kompjuterike ku janë zbuluar dobësi të reja dhe janë rregulluar çdo ditë, zbatimi i zbatimit të sigurisë duhet të jetë një proces i vazhdueshëm. Ai duhet gjithashtu të përfshijë një mënyrë për të bërë rregullime ndaj politikave si dhe vlerësimin periodik dhe mbikqyrjen e rrezikut. ekosistemi OpenSCAP siguron mjete dhe politika të personalizuara për një zbatim të shpejtë, efektiv dhe fleksibël të këtyre proceseve.</p>';

$GLOBALS["lang"]['<p>Integrations allow you to setup device selection and schedules for Open-AudIT to talk to external systems.<br> <br></p>'] = '<p>Integrimi ju lejon të krijoni përzgjedhjen e pajisjeve dhe oraret për Open-AudIT për të folur me sistemet e jashtme.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Microsoft Windows desktop systems have network limitations that may impact the performance of Open-AudIT. The TCP/IP stack limits the number of simultaneous incomplete outbound TCP connection attempts. After the limit is reached, subsequent connection attempts are put in a queue and will be resolved at a fixed rate (10 per second). If too many enter the queue, they may be dropped. And finally, Apache will be restarted by the OS. For this reason, installing Open-AudIT on a Windows desktop operating system is not supported.<br><br>There is nothing wrong with the Open-AudIT code, nor can we do anything to address this issue on Windows client machines.'] = '<p>Microsoft Sistemet Windows të desktopit kanë kufizime në rrjet që mund të ndikojnë në ecurinë e Open-AudIT. TCP/IP kufizon numrin e përpjekjeve të njëkohshme për lidhje me TCP. Pasi të arrihet kufiri, orvatjet e mëtejshme të lidhjes vihen në radhë dhe do të zgjidhen me një normë fikse (10 për sekondë). Nëse shumë veta hyjnë në radhë, mund të hiqen. Dhe në fund, Apaçi do të riniset nga OS. Për këtë arsye, instalimi i Open-AudIT në një sistem operativ Windows nuk mbështetet.<br/><br/>Nuk ka asgjë të keqe me kodin Open-AudIT, as nuk mund të bëjmë asgjë për të trajtuar këtë çështje në makinat e klientëve Windows.</p>';

$GLOBALS["lang"]['<p>Nmap timing details are found on the bottom of this linked page <a href="https://nmap.org/book/man-performance.html" target="_blank">https://nmap.org/book/man-performance.html</a>. From that page:<br> <br><em>If you are on a decent broadband or ethernet connection, I would recommend always using -T4 (Aggressive). Some people love -T5 (Insane) though it is too aggressive for my taste. People sometimes specify -T2 (Polite) because they think it is less likely to crash hosts or because they consider themselves to be polite in general. They often do not realize just how slow -T2 really is. Their scan may take ten times longer than a default scan. Machine crashes and bandwidth problems are rare with the default timing options -T3 (Normal) and so I normally recommend that for cautious scanners. Omitting version detection is far more effective than playing with timing values at reducing these problems.</em><footer>Gordon <i>Fyodor</i> Lyon</footer><br> <br></p>'] = '<p>Nmap detajet e kohës gjenden në fund të kësaj faqeje të lidhur <a href="https://nmap.org/book/man-performance.html" target="_blank">http://nmap.org/book/man-Madeance.html</a>. Nga ajo faqe:<br/> <br/><em>Nëse jeni në një lidhje të mirë bandëgjerë ose ethernet, unë do të rekomandoja gjithmonë përdorimin - T4 (Agresive). Disa njerëz e duan - T5 (insana) edhe pse është tepër agresive për shijen time. Disa herë njerëzit specifikojnë - T2 (Polite) sepse mendojnë se ka më pak të ngjarë të përplasen me mikpritësit ose ngaqë e konsiderojnë veten të sjellshëm në përgjithësi. Shpesh ata nuk e kuptojnë se sa i ngadaltë është në të vërtetë - T2. Skanimi i tyre mund të marrë dhjetë herë më shumë se një skanim i paracaktuar. Rrënojat e makinave dhe problemet e bandwidthit janë të rralla me alternativat e prezgjedhura të kohës - T3 (Normale) dhe kështu zakonisht e rekomandoj këtë për skanerë të kujdesshëm. Zbulimi i versionit është shumë më i efektshëm sesa të luash me vlerat e kohës në uljen e këtyre problemeve.</em><footer>Gordon <i>Fjodor</i> Lioni</footer><br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT can be configured to use different methods to authenticate a user and in addition, to create a user account using assigned roles and orgs based on group membership.<br> <br></p>'] = '<p>Open-AudIT mund të konfiguruar për të përdorur metoda të ndryshme për të identifikuar një përdorues dhe përveç kësaj, për të krijuar një profil përdoruesi duke përdorur rolet e caktuara dhe orgs bazuar në anëtarësimin në grup.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT can retrieve details about a file or directory of files and monitor these files for changes as per other attributes in the Open-AudIT database.<br> <br>This feature works out of the box for Linux Open-AudIT servers, but needs a change to the service account name under a Windows Open-AudIT server.<br> <br>Supported clients are Windows and Linux.<br> <br></p>'] = '<p>Hap-Aud IT mund të marrë hollësi në lidhje me një file apo directory të files dhe të mbikqyrë këto file për ndryshime si për cilësitë e tjera në bazën e të dhënave Open-AudIT.<br/> <br/>Kjo veçori funksionon jashtë kutisë për server-ët Linux Open-AudIT, por ka nevojë për një ndryshim në emrin e profilit të shërbimit nën një server Windows Open-AudIT.<br/> <br/>Klientët e mbështetur janë Windows dhe Linux.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT can retrieve details about a file, ask the native package manager if they are known to it and monitor these files for changes as per other attributes in the Open-AudIT database.<br> <br>Supported clients are Linux only.<br> <br></p>'] = '<p>Hap-Aud IT mund të marrë hollësi në lidhje me një file, pyet manaxherin vendas të paketave nëse dihet dhe monitoron këto dosje për ndryshime si për atribute të tjera në databazën Open-AudIT.<br/> <br/>Klientët e mbështetur janë vetëm Linux.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT can store information in custom fields that are associated with each device.<br> <br>Once an Additional Field has been created it can be used in queries and groups just like any other attribute in the database.<br> <br></p>'] = '<p>Hap-Aud IT mund të ruajë informacionet në fushat e personalizuara që lidhen me çdo pajisje.<br/> <br/>Pasi të jetë krijuar një Fusha shtesë mund të përdoret në pyetje dhe grupe si çdo atribut tjetër në databazë.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT comes with many queries inbuilt. If you require a specific query and none of the pre-packaged queries fit your needs, it is quite easy to create a new one and load it into Open-AudIT for running.<br> <br></p>'] = '<p>Open-AudIT vjen me shumë pyetje të ndërtuara. Nëse ju duhet një kërkesë specifike dhe asnjë nga kërkesat e parapaketuara nuk përputhet me nevojat tuaja, është shumë e lehtë të krijoni një të re dhe ta ngarkoni në Open-AudIT për të kandiduar.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT comes with many summaries inbuilt. If you require a specific summary and none of the pre-packaged summaries fit your needs, it is quite easy to create a new one and load it into Open-AudIT for running.<br> <br></p>'] = '<p>Open-AudIT vjen me shumë përmbledhje ndërtuar. Nëse ju duhet një përmbledhje specifike dhe asnjë nga përmbledhjet e para-paketuara nuk i përshtatet nevojave tuaja, është mjaft e lehtë të krijoni një të re dhe ta ngarkoni në Open-AudIT për drejtimin.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT is supported by FirstWave with an amazing level of support. If you prefer an active community of support givers, theres that as well. Where else can you talk directly to the developers and get a response within 24 hours? Just try that with other products! Amazing support. Full stop. You need support, we provide support. No ifs or buts. Great support. Period.<br> <br></p>'] = '<p>Open-AudIT mbështetet nga FirstWave me një nivel të mahnitshëm mbështetje. Nëse preferoni një komunitet aktiv mbështetësish, ka edhe kjo. Ku tjetër mund të flasësh drejtpërdrejt me zhvilluesit dhe të marrësh një përgjigje brenda 24 orëve? Provoje me produkte të tjera! Mbështetje e mahnitshme. Mjaft. Ju duhet mbështetje, ne japim mbështetje. Jo nëse apo por. Mbështetje e madhe. Pikë.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT provides multi-tenancy out of the box!<br> <br>Orgs (organisations) in Open-AudIT are a key item. A user has a primary Org as well as a list of Orgs they can access. A user combines this with a list of assigned "Roles" that define what actions they can take on items assigned to the Orgs they have access to. The combination of a users "orgs" and "roles" define what they can and cannot do within Open-AudIT.<br> <br>Most items in Open-AudIT are assigned to an Org. Devices, Locations, Networks, etc.<br> <br>Orgs can have child Orgs. Think of an organisational chart (tree) structure. If a user has access to a specific Org, they also have access to that Orgs descendants. For more information, see this <a href="/index.php/faq?name=Users, Roles and Orgs">FAQ</a>.</p>'] = '<p>Open-AudIT ofron shumë-interancë jashtë kutisë!<br/> <br/>Orgs (organizime) në Open-AudIT janë një element kyç. Një përdorues ka një Org primar si dhe një listë të Orgs që mund të kenë. Një përdorues e kombinon këtë me listën e "Roles" të caktuar që përcakton se çfarë veprimesh mund të ndërmarrin në objekte të caktuara për Orgs ku kanë qasje. Kombinimi i përdoruesve "orgs" dhe "roles" përcakton se çfarë mund dhe nuk mund të bëjnë brenda Open-AudIT.<br/> <br/>Shumica e sendeve në Open-AudIT janë caktuar në një Org. Paisja, vendndodhje, rrjet, etj.<br/> <br/>Orgs mund të ketë gogol fëmijësh. Mendo për një strukturë organizative (tree). Nëse një përdorues ka qasje në një org specifik, ata gjithashtu kanë qasje në pasardhësit e Orgs. Për më shumë informacion, shiko këtë <a href="/index.php/faq?name=Users, Roles and Orgs">FAQ</a>.</p>';

$GLOBALS["lang"]['<p>Open-AudIT provides multi-tenancy out of the box!<br> <br>Orgs (organisations) in Open-AudIT are a key item. A user has a primary Org as well as a list of Orgs they can access. A user combines this with a list of assigned "Roles" that define what actions they can take on items assigned to the Orgs they have access to. The combination of a users "orgs" and "roles" define what they can and cannot do within Open-AudIT.<br> <br>Most items in Open-AudIT are assigned to an Org. Devices, Locations, Networks, etc.<br> <br>Orgs can have child Orgs. Think of an organisational chart (tree) structure. If a user has access to a specific Org, they also have access to that Orgs descendants.</p>'] = '<p>Open-AudIT ofron shumë-interancë jashtë kutisë!<br/> <br/>Orgs (organizime) në Open-AudIT janë një element kyç. Një përdorues ka një Org primar si dhe një listë të Orgs që mund të kenë. Një përdorues e kombinon këtë me listën e "Roles" të caktuar që përcakton se çfarë veprimesh mund të ndërmarrin në objekte të caktuara për Orgs ku kanë qasje. Kombinimi i përdoruesve "orgs" dhe "roles" përcakton se çfarë mund dhe nuk mund të bëjnë brenda Open-AudIT.<br/> <br/>Shumica e sendeve në Open-AudIT janë caktuar në një Org. Paisja, vendndodhje, rrjet, etj.<br/> <br/>Orgs mund të ketë gogol fëmijësh. Mendo për një strukturë organizative (tree). Nëse një përdorues ka qasje në një org specifik, ata gjithashtu kanë qasje në pasardhësit e Orgs.</p>';

$GLOBALS["lang"]['<p>Quickly view the status of devices on your network.<br> <br></p>'] = '<p>Shpejt shikoni gjendjen e pajisjeve në rrjetin tuaj.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Roles in Open-AudIT are a key item. A user has a primary Org as well as a list of Orgs they can access. A user combines this with a list of assigned Roles that define what actions they can take on items assigned to the Orgs they have access to. The combination of a users "orgs" and "roles" define what they can and cannot do within Open-AudIT.<br> <br>
        Get the complete Open-AudIT Enterprise experience. Creating roles allows fine grained control over what your users can do within Open-AudIT.<br> <br>
        The primary method for authorisation (what a user can do) is based on the users Roles. Default roles are defined as admin, org_admin, reporter and user. Each role has a set of permissions (Create, Read, Update, Delete) for each endpoint. The ability to define additional roles and edit existing roles is enabled in Open-AudIT Enterprise.<br> <br>Roles can also be used with LDAP (Active Directory and OpenLDAP) authorisation. Enterprise licensed installations have the ability to customise the LDAP group for each defined role.<br> <br></p>'] = '<p>Roli në vend të hapur IT është një element kyç. Një përdorues ka një Org primar si dhe një listë të Orgs që mund të kenë. Një përdorues e kombinon këtë me një listë të roleve të caktuar, të cilat përcaktojnë se çfarë veprimesh mund të ndërmarrin për gjërat e caktuara në Orgs ku mund të hyjnë. Kombinimi i përdoruesve "orgs" dhe "roles" përcakton se çfarë mund dhe nuk mund të bëjnë brenda Open-AudIT.<br/> <br/>Merr përvojën e plotë të kompanisë Open-AudIT. Krijimi i roleve lejon kontroll të mirë të grurit mbi atë që përdoruesit tuaj mund të bëjnë brenda Open-AudIT.<br/> <br/>Metoda kryesore për autorizimin (çfarë mund të bëjë një përdorues) është bazuar në rolet e përdoruesve. Roli i paracaktuar është përcaktuar si admin, org_admin, reporter dhe përdorues. Çdo rol ka një sërë të drejtash (Krijo, lexo, rifresko, elemino) për çdo pikë. Aftësia për të përcaktuar role shtesë dhe për të ndryshuar rolet ekzistuese është aktivizuar në Ndërmarrjen Open-AudIT.<br/> <br/>Roli mund të përdoret gjithashtu me autorizimin LDAP (Active Directory dhe OpenLDAP). Instalimet e liçensuar të ndërmarrjeve kanë aftësinë për të përshtatur grupin LDAP për çdo rol të përcaktuar.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Rules examine attributes and make cahnges based on the appropriate rule.</p>'] = '<p>Rregullat shqyrtojnë cilësitë dhe bëjnë kahnge në bazë të rregullave të përshtatshme.</p>';

$GLOBALS["lang"]['<p>Scanning options allow you to easily apply a set of options to a discovery.<br> <br></p>'] = '<p>Mundimet e skanimit të japin mundësi të përdorësh me lehtësi një sërë alternativash për një zbulim.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Simple, intuitive, accurate geographic mapping provided by Google Maps. Open-AudIT leverages Google Maps to provide live, interactive geographic mapping of device locations. Automated conversion of street addresses to geocodes and longitude / latitude.<br> <br>
        </p>'] = '<p>E thjeshtë, intuitive, harta gjeografike e saktë e dhënë nga Google Maps. Mjete Open-AudIT Google Maps për të ofruar direkt, hartë gjeografike interaktive të pozicioneve të pajisjeve. Kthimi i automatizuar i adresave të rrugëve drejt gjeo kodëve dhe gjatësisë gjeografike.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Software Packages are used to determine if antivirus, backup, firewall, approved or banned software is installed.<br> <br></p>'] = '<p>Paketat e programeve kompjuterikë përdoren për të përcaktuar nëse është instaluar antivirusi, rezerve, firewall, programi i miratuar apo i ndaluar.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Some examples of valid Subnet attributes are: 192.168.1.1 (a single IP address), 192.168.1.0/24 (a subnet), 192.168.1-3.1-20 (a range of IP addresses).<br> <br><em>NOTE</em> - Only a subnet (as per the examples - 192.168.1.0/24) will be able to automatically create a valid network for Open-AudIT. <br> <br>If you use an Active Directory type, make sure you have appropriate credentials to talk to your Domain Controller already in <a href="../credentials">credentials</a>.<br> <br></p>'] = '<p>Disa shembuj të atributeve të vlefshme Subnet janë: 192.168.1.1 (një adresë e vetme IP), 192.168.0.24 (një nënnet), 192.168.1-3.1-20 (një gamë adresash IP).<br/> <br/><em>DYJA</em> - Vetëm një nënnet (si për shembujt - 192.168.1.0/24) do të jetë në gjendje të krijojë automatikisht një rrjet të vlefshëm për Open-AudIT. <br/> <br/>Nëse përdorni një lloj Active Directory, sigurohuni që keni kredencialet e duhura për të folur me kontrolluesin Domain <a href="../credentials">Kredenciale</a>.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Standards are stored in Open-AudIT.<br /><br /><br /><br /></p>'] = '<p>Standardet janë ruajtur në Open-AudIT.<br/><br/><br/><br/></p>';

$GLOBALS["lang"]['<p>Supported clients are Linux only.<br> <br></p>'] = '<p>Klientët e mbështetur janë vetëm Linux.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Tasks have a schedule that mirrors the unix cron schedule. The attributes for minute, hour, day_of_month, month, day_of_week all act as per the cron definitions. You can select multiples of these using comma seperated values (no spaces). You can select every value using *.<br> <br>The <code>type</code> of the task can be one of: baselines, collectors, discoveries, queries, reports or summaries.<br> <br>If you wish to schedule a Baseline or Discovery, you will need to create these before creating the tasks. You must use the ID of the type of item in <code>sub_resource_id</code>. For example if you wish to schedule a Discovery, use that particular Discoveries ID in <code>sub_resource_id</code>.<br> <br>The value for <code>uuid</code> is specific to each Open-AudIT server. Your unique value can be found in the configuration.<br> <br>The <code>options</code> attribute is a JSON document containing any extra attributes required to run the task. The extra attributes for reports, queries and summaries are: <code>email_address</code> and <code>format</code>. The extra attribute for Bselines is <code>group_id</code>.<br> <br></p>'] = '<p>Detyrat kanë një program që pasqyron programin unix ron. Veçoritë për minutë, orë, ditë_do_muaj, muaj, ditë_h_javore veprojnë si për përcaktimet e cron. Zgjidh nga. Ju mund të zgjidhni çdo vlerë duke përdorur *.<br/> <br/>The <code>type</code> i kësaj detyre mund të jetë një nga: raportet ose përmbledhjet e bazave, koleksionuesve, zbulimeve, pyetjeve.<br/> <br/>Nëse dëshironi të përcaktoni një bazë ose zbulim, do t\'ju duhet t\'i krijoni këto para se të krijoni detyrat. Duhet të përdorësh ID e llojit të elementit <code>sub_resource_id</code>. Për shembull, nëse dëshiron të programosh një zbulim, përdor këtë ID të veçantë <code>sub_resource_id</code>.<br/> <br/>Vlera për <code>uuid</code> është specifik tek çdo server Open-AudIT. Vlera juaj unike mund të gjendet në konfigurim.<br/> <br/>The <code>options</code> karakteristika është a nga. Cilësitë shtesë për raporte, pyetje dhe përmbledhje janë: <code>email_address</code> dhe <code>format</code>. Atributi shtesë për Belins është <code>group_id</code>.<br/> <br/></p>';

$GLOBALS["lang"]['<p>The <code>type</code> of the location will assign its icon.<br> <br></p>'] = '<p>The <code>type</code> nga pozicioni ikonë.<br/> <br/></p>';

$GLOBALS["lang"]['<p>The Attributes endpoint allows you to add customized values to different attributes in Open-AudIT, at the moment this feature works on the Class, Environment, Status and Type attributes on Devices, the Type attribute for both Locations and Orgs as well as the Menu Category for Queries. If you view an item of one of the prvious types (say view a Lkocation) you will notice the Type attribute must be selected from a drop-down box. This is where those values are stored. Hence, if you would like to add a new Type to be chosen for a Location, add it using the Attributes feature.</p>'] = '<p>Pika e fundit e Veçorive ju lejon t\'i shtoni vlerat e personalizuara tek atributet e ndryshme në Open-AudIT, në momentin që kjo veçori funksionon në klasën, mjedisin, statusin dhe cilësitë e llojeve në pajisje, atributin e llojit për të dy vendet dhe Orgs si dhe në kategorinë e Menusë për Keries. Nëse shikoni një element të njërës prej llojeve parrame (thani shfaq një Lkoction) do të vëreni se atributi i llojit duhet zgjedhur nga një kuti e hedhur poshtë. Këtu ruhen këto vlera. Prandaj, nëse dëshironi të shtoni një lloj të ri për t\'u zgjedhur për një vend, shtojeni duke përdorur veçoritë.</p>';

$GLOBALS["lang"]['<p>The Collectors feature enables you to easily manage many "collector" computers that perform network discovery. All Collectors are centrally controlled from the Server. The only required network ports between the Collector and the Server are 80 and/or 443.<br> <br>It makes managing disparate networks quick, easy and simple. Open-AudIT Enterprise licensees get a single collector license included and have the option to buy more as required..<br> <br></p>'] = '<p>Veçoria e koleksionuesve ju mundëson të administroni lehtësisht shumë kompjuterë "mbledhës" që kryejnë zbulimin e rrjetit. Të gjithë koleksionuesit janë të kontrolluar nga serveri. I vetmi rrjet i kërkuar porte midis koleksionorit dhe serverit janë 80 dhe/ose 443.<br/> <br/>Ajo e bën menaxhimin e rrjeteve disparate të shpejtë, të lehtë dhe të thjeshtë. Licensat e Ndërmarrjeve Open-AudIT marrin një licensë të vetme koleksionuese dhe kanë opsionin për të blerë më shumë siç kërkohet..<br/> <br/></p>';

$GLOBALS["lang"]['<p>The SELECT section of your SQL <em>must</em> contain fully qualified columns. IE - <code>SELECT devices.id AS `devices.id`, devices.name AS `devices.name` ...</code>.<br> <br>The WHERE section of your SQL <em>must</em> contain <code>WHERE @filter</code> so Open-AudIT knows to restrict your query to the appropriate Orgs. SQL not containing this condition will result in the query failing to be created, unless you have the Admin role.<br> <br>An example query SQL showing attributes on devices that have an <code>os_group</code> attribute of "Linux" - <br><code>SELECT devices.id AS `devices.id`, devices.icon AS `devices.icon`, devices.type AS `devices.type`, devices.name AS `devices.name`, devices.os_name AS `devices.os_name` FROM devices WHERE @filter AND devices.os_group = "Linux"</code><br> <br></p>'] = '<p>Pjesa SELECT e SQL tuaj <em>duhet</em> përmban kolona plotësisht të kualifikuara. IE... <code>SELECT devices.id AS `devices.id`, devices.name AS `devices.name` ...</code>.<br/> <br/>Pjesa KUDO e SQL tuaj <em>duhet</em> përmban <code>WHERE @filter</code> Pra Open-AudIT di të kufizojë kërkesën tuaj në Orgs duhur. SQL nuk përmban këtë kusht do të rezultojë në mungesën e kërkesës për t\'u krijuar, po të mos keni rolin e Admin.<br/> <br/>Një shembull që pyet SQL shfaq atribute në pajisjet që kanë një <code>os_group</code> karakteristika e "Linux" - <br/><code>SELECT devices.id AS `devices.id`, devices.icon AS `devices.icon`, devices.type AS `devices.type`, devices.name AS `devices.name`, devices.os_name AS `devices.os_name` FROM devices WHERE @filter AND devices.os_group = "Linux"</code><br/> <br/></p>';

$GLOBALS["lang"]['<p>The SELECT section of your SQL <em>must</em> only contain <code>DISTINCT(devices.id)</code>.<br> <br>The WHERE section of your SQL <em>must</em> contain <code>WHERE @filter</code> so Open-AudIT knows to restrict your query to the appropriate Orgs. SQL not containing this condition will result in the group failing to be created.<br> <br>An example for SQL to select all devices running the Debian OS - <code>SELECT DISTINCT(devices.id) FROM devices WHERE @filter AND devices.os_family = "Debian"</code><br> <br></p>'] = '<p>Pjesa SELECT e SQL tuaj <em>duhet</em> përmban <code>DISTINCT(devices.id)</code>.<br/> <br/>Pjesa KUDO e SQL tuaj <em>duhet</em> përmban <code>WHERE @filter</code> Pra Open-AudIT di të kufizojë kërkesën tuaj në Orgs duhur. SQL nuk përmban këtë kusht do të rezultojë në krijimin e grupit.<br/> <br/>Një shembull për SQL për të zgjedhur të gjitha pajisjet që drejtojnë OS Debian - <code>SELECT DISTINCT(devices.id) FROM devices WHERE @filter AND devices.os_family = "Debian"</code><br/> <br/></p>';

$GLOBALS["lang"]['<p>The license endpoint allows you to track the number of licenses found on your devices.<br> <br>To create an entry to track your licenses you <em>must</em> to provide a name, an organization, the number of licenses acquired and the name of the software. On the field <code>match_string</code> you must provide the name of the software that you want to track, you can use the percent sign (%) as a wildcard in the match_string.<br> <br></p>'] = '<p>Pika e licensës ju lejon të gjeni numrin e liçensave të gjetura në pajisjet tuaja.<br/> <br/>Për të krijuar një hyrje për të gjetur licensat tuaja <em>duhet</em> për të dhënë një emër, një organizatë, numrin e liçensave të fituara dhe emrin e programit. Në fushë <code>match_string</code> duhet të jepni emrin e software-it që dëshironi të ndiqni, mund të përdorni shenjën për qind (%) si një tenkard në fit_string.<br/> <br/></p>';

$GLOBALS["lang"]['<p>The network should be in the format 192.168.1.0/24.<br> <br></p>'] = '<p>Rrjeti duhet të jetë në formatin 192.168.1.0/24.<br/> <br/></p>';

$GLOBALS["lang"]['<p>The primary and optional secondary items should be fully qualified - ie, devices.type or software.name.<br> <br></p>'] = '<p>Gjërat dytësore parësore dhe të mundshme duhet të jenë plotësisht të kualifikuara - ie, pajisje. Tipi ose programi. Emri.<br/> <br/></p>';

$GLOBALS["lang"]['<p>There is no need to do anything if you are running Open-AudIT on a Linux server.<br>
<br>
Windows clients are just fine and require no special actions, however.... to enable this feature the audit script must be run locally on the target Windows system. It cannot be run remotely as we do with WMI calls when running the audit script on one Windows machine, while targeting a second Windows machine. To do this we need to copy the audit script to the target Windows machine and then run it. Unfortunately the service account that Apache runs under is the Local System account. This account has no access to remote (network based) resources. To work around this issue the service must be run under another account. It is easiest to just use the local Administrator account, but you can try any account you like as long as it has the required privileges. The Local System account has as much local access as the local Administrator account.<br>
<br>
See our page on enabling <a href="/index.php/faq?name=Running Open-AudIT Apache Service Under Windows">Running Open-AudIT Apache Service Under Windows</a></p>'] = '<p>Nuk ka nevojë të bëni asgjë nëse jeni duke drejtuar Open-AudIT në një server Linux.<br/><br/>Klientët Windows janë shumë mirë dhe nuk kërkojnë veprime të veçanta, megjithatë ... për të mundësuar këtë veçori skenar auditimi duhet të zbatohet lokalisht në sistemin e synuar Windows. Ajo nuk mund të drejtohet nga larg siç bëjmë ne me telefonatat WMI kur drejtojmë skenarin auditues në një makinë Windows, ndërsa shënjestrojmë një makinë të dytë Windows. Për ta bërë këtë ne duhet të kopjojmë skenarin auditues të makinës Windows dhe pastaj ta drejtojmë atë. Për fat të keq, tregimi i shërbimit që kryen Apaçi është llogaria e sistemit lokal. Ky profil nuk ka asnjë hyrje në burime të largëta (të bazuara në Internet). Për të punuar rreth kësaj çështjeje shërbimi duhet të zbatohet nën një llogari tjetër. Është më e lehtë të përdorësh llogarinë lokale të administratorit, por mund të provosh çdo llogari që të pëlqen për aq kohë sa ka privilegjet e kërkuara. Llogaria e sistemit lokal ka po aq hyrje lokale sa edhe llogaria Administratori lokal.<br/><br/>Shih faqen tonë në lidhje me mundësinë <a href="/index.php/faq?name=Running Open-AudIT Apache Service Under Windows">Shërbimi Apash Open-Audit nën Windows</a></p>';

$GLOBALS["lang"]['<p>These are the devices that live within a rack.<br> <br></p>'] = '<p>Këto janë pajisjet që jetojnë brenda një rafti.<br/> <br/></p>';

$GLOBALS["lang"]['<p>This endpoint enables you to add your cloud infrastructure details. Open-AudIT will then reach out to your clouds using their native API and return your servers, just like any other device in Open-AudIT.<br> <br><em>NOTE</em> - To use this feature, we <em>must</em> enable the configuration items match_mac (for AWS) and match_hostname (for Azure). This will be done automatically the first time a cloud discovery is executed.<br> <br>Credentials for your cloud (<a href="/index.php/faq?name=Credentials for Microsoft Azure used in Cloud Discovery">Azure</a> or <a href="/index.php/faq?name=Credentials for Amazon AWS used in Cloud Discovery">AWS</a>) are required.<br> <br></p>'] = '<p>Kjo pikë ju mundëson të shtoni detajet e infrastrukturës së reve. Open-AudIT më pas do të arrijë në retë tuaja duke përdorur vendasin e tyre API dhe kthyer serverat tuaj, ashtu si çdo mjet tjetër në Open-AudIT.<br/> <br/><em>DYJA</em> - Për të përdorur këtë veçori, ne <em>duhet</em> Aktivon konfigurimin e elementëve_mac (për AWS) dhe pë_name (për Azure). Kjo do të bëhet automatikisht herën e parë që ekzekutohet një zbulim resh.<br/> <br/>Reja juaj (<a href="/index.php/faq?name=Credentials for Microsoft Azure used in Cloud Discovery">Azure</a> ose <a href="/index.php/faq?name=Credentials for Amazon AWS used in Cloud Discovery">AUS</a>) kërkohet.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Vulnerabilities reporting based on the NIST CVE feed.<br> <br></p>'] = '<p>Raportimet e vulnerabiliteteve bazuar në furnizimin CVE NIST.<br/> <br/></p>';

$GLOBALS["lang"]['<p>We initially setup the default list of scripts with the default options. These default scripts cannot be deleted. You can create additional scripts for use by you as required. Your script will be based on one of the existing scripts and have custom options applied. The scripts can then be downloaded from the list page at menu -> Discover -> Audit Scripts -> List Audit Scripts<br> <br></p>'] = '<p>Ne fillimisht vendosim listën e prezgjedhur të script-eve me opsionet e prezgjedhura. Këta script-e të prezgjedhur nuk mund të fshihen. Mund të krijoni script-e shtesë për t\'u përdorur nga ju siç kërkohet. script-i juaj do të bazohet në një nga script-et ekzistuese dhe ka opcione të personalizuara të aplikuara. script-et mund të shkarkohen pastaj nga faqja e listës në menu -> Zbulo -> Script Lista<br/> <br/></p>';

$GLOBALS["lang"]['<p>When using Regex for matching, a helpful page can be found on the <a href="https://www.php.net/manual/en/regexp.reference.meta.php" target="_blank"> PHP website</a>. Some differences to Perl Regex can be found <a href="https://www.php.net/manual/en/reference.pcre.pattern.differences.php" target="_blank">here</a>.</p>'] = '<p>Kur përdoret Regex për t\'u përputhur, mund të gjendet një faqe e dobishme <a href="https://www.php.net/manual/en/regexp.reference.meta.php" target="_blank"> PHP website</a>. Disa ndryshime në Perl Regex mund të gjenden <a href="https://www.php.net/manual/en/reference.pcre.pattern.differences.php" target="_blank">këtu</a>.</p>';

$GLOBALS["lang"]['<p>Widgets can easily be created to show whatever is specific to your environment on your dashboards.<br> <br></p>'] = '<p>Widgett mund të krijohen me lehtësi për të treguar se çfarë është specifike për mjedisin tuaj në stendat tuaja.<br/> <br/></p>';

$GLOBALS["lang"]['<p>With Open-AudIT Professional and Enterprise you can automate and schedule discoveries, report generation, or baseline checks to run when you want, and as often as you need. Schedule your discoveries to run nightly and reports to be generated and emailed to key personnel each morning. Complex or simple schedules, device discovery and report generation is just a click away.<br> <br>Create individual discovery schedules for each subnet or AD controller, add in reports to be created for targeted audiences. Develop simple or complex schedules to support company needs, avoid backups or impact to operations, or simply to spread the load and speed-up audit completion.<br> <br></p>'] = '<p>Me Open-AudIT Profesional dhe Enterprise ju mund t\'i automatizoni dhe t\'i programoni zbulimet, të raportoni, ose të raportoni kontrollet bazë për të drejtuar kur doni dhe sa herë që keni nevojë. Programoni zbulimet tuaja për të drejtuar natën dhe raportet për t\'u gjeneruar dhe dërguar në personelin kyç çdo mëngjes. Programe të ndërlikuara ose të thjeshta, zbulimi i pajisjeve dhe brezi i raportimit është thjesht një klikim larg.<br/> <br/>Krijo programe të veçanta zbulimi për çdo nënnet ose kontrollues të AD - së, shtoni raportet që do të krijohen për shikuesit e synuar. Zhvillo programe të thjeshta ose komplekse për të mbështetur nevojat e kompanisë, shmang përforcimet apo ndikimin ndaj operacioneve, ose thjesht për të përhapur ngarkesën dhe për të përfunduar kontrollin me shpejtësi.<br/> <br/></p>';

$GLOBALS["lang"]['<p>You can create a script with all the options for any of the existing audit scripts - not just Windows. AIX, ESX, Linux, OSX and Windows are all covered.<br> <br></p>'] = '<p>Mund të krijosh një skenar me të gjitha mundësitë për ndonjë nga skenarët ekzistues të auditimit, jo vetëm Windows. AIX, ESX, Linux, OSX dhe Dritaret janë të gjitha të mbuluara.<br/> <br/></p>';

$GLOBALS["lang"]['<p>You can use the percent % sign as a wildcard in the match_string.<br> <br></p>'] = '<p>Mund të përdorni përqindjen % të shenjës si një tenkard në shkreps_string.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Your racks help refine exactly where your devices are located.<br> <br></p>'] = '<p>Dyqanet e tua të ndihmojnë të rafinosh saktësisht vendndodhjen e pajisjeve.<br/> <br/></p>';

$GLOBALS["lang"]['<strong>NOTE</strong> - You are accessing this URL from the local Open-AudIT server. The downloaded script will not be able to submit when run on any other machine. If you need to audit other machines, please download the script from any remote machine, not using a browser on the Open-AudIT server itself.'] = '<strong>DYJA</strong> - Jeni duke hyrë në këtë URL nga serveri lokal Open-AudIT. Shkrimi i shkarkuar nuk do të jetë në gjendje të paraqesë kur të drejtuar në ndonjë makinë tjetër. Nëse ju duhet të kontrolloni makineri të tjera, ju lutem shkarkoni skenarin nga ndonjë makinë remote, duke mos përdorur një shfletues në vetë serverin Open-AudIT.';

$GLOBALS["lang"]['A CVE item that does not contain a filter to determine the affected item(s).'] = 'Një element CVE që nuk përmban një filtër për të përcaktuar elementet e prekura.';

$GLOBALS["lang"]['A Google Maps API Key is required for this function.'] = 'A Google Maps API Ky funksion kërkohet për këtë funksion.';

$GLOBALS["lang"]['A JSON array of device IDs that will have this benchmark executed.'] = 'Një grup i ID-ve të pajisjeve që do të kenë ekzekutuar këtë standart.';

$GLOBALS["lang"]['A JSON array of objects matching the software name taken from the CVE, enriched with the software name retrieved by Open-AudIT.'] = 'Një grup objektesh që përputhen me emrin e programeve të marra nga CVE, të pasuruara me emrin e softuerit të marrë nga Open-AudIT.';

$GLOBALS["lang"]['A JSON array of values to test for this vulnerability.'] = 'NJË sërë vlerash për të provuar këtë dobësi.';

$GLOBALS["lang"]['A JSON document containing the Orgs assigned to this user. IDs taken from <code>orgs.id</code>. If a user has access to an Org, they have access to that Orgs descendants.'] = 'Një dokument JSON që përmban Orkët e caktuar për këtë përdorues. ID nga <code>orgs.id</code>. Nëse një përdorues ka qasje në një org, ata kanë qasje në pasardhësit e Orgs.';

$GLOBALS["lang"]['A JSON document containing the required attributes depending on <code>scripts.type</code>.'] = 'Një dokument që përmban atributet e kërkuara në varësi të <code>scripts.type</code>.';

$GLOBALS["lang"]['A JSON document containing the required attributes overriding the chosen discovery_scan_options.'] = 'Një dokument që përmban atributet e kërkuara mbingritja e zbulimit të zgjedhur_scan_options.';

$GLOBALS["lang"]['A JSON document containing the required attributes overriding the default device match options.'] = 'Një dokument JSON që përmban atributet e kërkuara mbingritja e opcioneve të prezgjedhura të dispozitivit.';

$GLOBALS["lang"]['A JSON document containing the roles assigned to this user. Role names taken from <code>roles.name</code>.'] = 'Një dokument që përmban rolet e caktuara për këtë përdorues. Roli emrat nga <code>roles.name</code>.';

$GLOBALS["lang"]['A JSON object containing an array of attributes to change if the match occurs.'] = 'Një objekt JSON që përmban një sërë atributesh për të ndryshuar nëse bëhet ndeshje.';

$GLOBALS["lang"]['A JSON object containing an array of attributes to match.'] = 'Një objekt JSON që përmban një sërë atributesh për tu përshtatur.';

$GLOBALS["lang"]['A JSON object containing collection specific options.'] = 'A j';

$GLOBALS["lang"]['A JSON object populated via a Cloud discovery.'] = 'NJË objekt JSON populloi nëpërmjet një zbulimi resh.';

$GLOBALS["lang"]['A JSON representation containing the details of the queue item to be executed.'] = 'Një paraqitje që përmban hollësitë e elementit të rreshtit që do të ekzekutohet.';

$GLOBALS["lang"]['A JSON representation of the fields for this integration.'] = 'Një përfaqësim i fushave për këtë integrim.';

$GLOBALS["lang"]['A JSON representation of the individual tests and their results on all devices this baseline has been run against.'] = 'Një përfaqësues i testeve individuale dhe rezultatet e tyre në të gjitha pajisjet kjo bazë është drejtuar kundër.';

$GLOBALS["lang"]['A JSON representation of the tests that make up this policy.'] = 'Një përfaqësues i testeve që përbëjnë këtë politikë.';

$GLOBALS["lang"]['A LAN can be connected to a WAN using a router.'] = 'ALANI mund të lidhet me UAN duke përdorur një shofer.';

$GLOBALS["lang"]['A Metropolitan area network (MAN) is a large computer network that usually spans a city or a large campus.'] = 'Një rrjet zonash metropolitane (MAN) është një rrjet i madh kompjuteri që zakonisht shtrihet në një qytet ose në një kamp të madh.';

$GLOBALS["lang"]['A Seed discovery uses an initial IP to retrieve the IPs of any other devices it knows about, adds those IPs to the list and scans those - again asking for any IPs those additional devices knows about. Rinse and repeat. It is intelligent enough to know if it has already scanned a given IP in its execution and discards any already scanned (or even on the list to be scanned).'] = 'A Zbulimi i farërave përdor një IP fillestar për të marrë IP - në të gjitha pajisjet e tjera që di ai, shton ato IP - ja në listë dhe i skanon ato - duke kërkuar përsëri për çdo IP - të që këto pajisje shtesë dinë. Rinso dhe përsërit. Është mjaft inteligjente të dish nëse ka skanuar tashmë një IP të dhënë në ekzekutimin e tij dhe hedh çdo skanim (ose edhe në listë për t\'u skanuar).';

$GLOBALS["lang"]['A Subnet discovery will scan the IPs provided.'] = 'Një zbulim i Subnet do të skanojë IP-të e siguruara.';

$GLOBALS["lang"]['A URL provided to the agent which will then download the file and store it on the local disk.'] = 'Një URL e dhënë agjentit që pastaj do të shkarkojë file dhe do ta ruajë në disk.';

$GLOBALS["lang"]['A URL to a file to download.'] = 'URL nga a file.';

$GLOBALS["lang"]['A backbone network is part of a computer network infrastructure that provides a path for the exchange of information between different LANs or sub-networks. A backbone can tie together diverse networks within the same building, across different buildings, or over a wide area.<br><br>For example, a large company might implement a backbone network to connect departments that are located around the world. The equipment that ties together the departmental networks constitutes the network backbone. When designing a network backbone, network performance and network congestion are critical factors to take into account. Normally, the backbone network capacity is greater than that of the individual networks connected to it.<br><br>Another example of a backbone network is the Internet backbone, which is the set of wide area networks (WANs) and core routers that tie together all networks connected to the Internet.'] = 'Një rrjet kurrizore është pjesë e një infrastrukture të rrjetit kompjuterik që siguron një rrugë për shkëmbimin e informacionit midis LANs apo nën-netork. Një shtyllë kurrizore mund të lidhë rrjete të ndryshme brenda së njëjtës ndërtesë, përmes ndërtesave të ndryshme ose mbi një zonë të gjerë.<br/><br/>Për shembull, një kompani e madhe mund të zbatojë një rrjet shtyllash kurrizore për të lidhur repartet që ndodhen anembanë botës. Pajisjet që lidhin së bashku rrjetet e departamenteve përbëjnë shtyllën kurrizore të rrjetit. Kur projektohet shtylla kurrizore e rrjetit, ecuria e rrjetit dhe bllokimi i rrjetit janë faktorë kritikë për t\'u mbajtur parasysh. Normalisht, kapaciteti i rrjetit kurrizore është më i madh se ai i rrjeteve individuale të lidhura me të.<br/><br/>Një shembull tjetër i një rrjeti kurrizore është shtylla kurrizore e Internetit, e cila është seti i rrjeteve të gjera të zonave (WANs) dhe i itinerareve bazë që lidhin të gjitha rrjetet e lidhura me Internetin.';

$GLOBALS["lang"]['A calculated field that displays the number of times this piece of software was found on the computers in the selected Org (and its descendants if configured).'] = 'Një fushë e llogaritur që shfaq numrin e herëve që ky program është gjetur në kompjuter në Orgun e zgjedhur (dhe në pasardhësit e tij nëse është konfiguruar).';

$GLOBALS["lang"]['A campus area network (CAN) is made up of an interconnection of LANs within a limited geographical area. The networking equipment (switches, routers) and transmission media (optical fiber, copper plant, Cat5 cabling, etc.) are almost entirely owned by the campus tenant / owner (an enterprise, university, government, etc.).<br><br>For example, a university campus network is likely to link a variety of campus buildings to connect academic colleges or departments, the library, and student residence halls.'] = 'Një rrjet zonash të kampusit (CAN) përbëhet nga një lidhje e LAN brenda një zone të kufizuar gjeografike. Paisja e rrjetit (switchers, udhëzuesit) dhe media transmetuese (nga fibrat optike, fabrika e bakrit, Cat5 cabling, etj.) zotërohen pothuajse plotësisht nga qiramarrësi i kampusit (një ndërmarrje, universitet, qeveri, etj.).<br/><br/>Për shembull, një rrjet universitetesh ka të ngjarë të lidhë një shumëllojshmëri ndërtesash kampusi për të lidhur kolegjet ose repartet akademike, bibliotekën dhe sallat e banimit të studentëve.';

$GLOBALS["lang"]['A closed port is accessible (it receives and responds to Nmap probe packets), but there is no application listening on it. They can be helpful in showing that a host is up on an IP address (host discovery, or ping scanning), and as part of OS detection. Because closed ports are reachable, it may be worth scanning later in case some open up. Administrators may want to consider blocking such ports with a firewall. Then they would appear in the filtered state, discussed next.'] = 'Një port i mbyllur është i arritshëm (ai merr dhe i përgjigjet paketave të hetimit të Nmap), por nuk ka asnjë dëgjim aplikimi mbi të. Ata mund të jenë të dobishëm për të treguar se një mikpritës gjendet në një adresë IP (zbulim mikpritës ose skanim ping) dhe si pjesë e zbulimit të OS. Meqë janë të arritshme porte të mbyllura, mund t\'ia vlejë të skanosh më vonë në rast se disa hapen. Administratorët mund të mendojnë t\'i bllokojnë këto porte me një mur mbrojtës. Pastaj ata do të dilnin në shtetin e filtruar, duke diskutuar më pas.';

$GLOBALS["lang"]['A collector is either in Collector or Stand-Alone mode.'] = 'Një koleksionist është ose në "Colector" ose "Right-Vetely mode."';

$GLOBALS["lang"]['A comma separated list of applicable CVEs.'] = 'Një listë e ndarë e CVE të zbatueshme.';

$GLOBALS["lang"]['A comma separated list of values, one of which can be selected.'] = 'Një listë vlerash të ndara me presje, një nga të cilat mund të zgjidhet.';

$GLOBALS["lang"]['A command to run. When the agent is Windows based, this command is run from within the powershell agent.'] = 'Një komandë për të drejtuar. Kur agjenti është i bazuar në Windows, ky komandë drejtohet nga brenda agjentit.';

$GLOBALS["lang"]['A dashboard is made up of three columns and two rows of what we call <i>widgets</i>. A widget is very similar to a summary, only we take the summary concept a bit further. Widgets are created in a simple fashion using a couple of drop down boxes - or you can elect to use your own SQL for complete customisability.'] = 'Një dërrasë përbëhet nga tri kolona dhe dy rreshta të asaj që ne e quajmë <i>widgets</i>. Një widget është shumë i ngjashëm me një përmbledhje, vetëm ne e marrim konceptin e përmbledhjes pak më tej. Widgett janë krijuar në një mënyrë të thjeshtë duke përdorur disa kuti për të zbritur ose mund të zgjidhni të përdorni SQL - në tuajën për zakonshmëri të plotë.';

$GLOBALS["lang"]['A filtered port is considered open (and will trigger device detection).'] = 'Një port i filtruar konsiderohet i hapur (dhe do të shkaktojë zbulimin e dispozitivit).';

$GLOBALS["lang"]['A global area network (GAN) is a network used for supporting mobile across an arbitrary number of wireless LANs, satellite coverage areas, etc. The key challenge in mobile communications is handing off user communications from one local coverage area to the next. In IEEE Project 802, this involves a succession of terrestrial wireless LANs.'] = 'Një rrjet botëror zonash (GAN) është një rrjet i përdorur për mbështetjen e celularit përmes një numri arbitrar LANs pa tel, zonave të mbulimit satelitor, etj. Sfida kryesore në komunikimet celulare është dorëzimi i komunikimit të përdoruesit nga një zonë e mbulimit lokal tek tjetra. Në Projektin IEEE 802, kjo përfshin një sërë llojesh të LANs pa tel tokësore.';

$GLOBALS["lang"]['A home area network (HAN) is a residential LAN used for communication between digital devices typically deployed in the home, usually a small number of personal computers and accessories, such as printers and mobile computing devices. An important function is the sharing of Internet access, often a broadband service through a cable TV or digital subscriber line (DSL) provider.'] = 'Një rrjet vendës (HAN) është një LAN rezidencial që përdoret për të komunikuar midis pajisjeve dixhitale që zakonisht janë vendosur në shtëpi, zakonisht një numër i vogël kompjuterash dhe aksesorësh personalë, siç janë printerat dhe pajisjet kompjuterike të lëvizshme. Një funksion i rëndësishëm është ndarja e qasjes në Internet, shpesh një shërbim bandëgjerë nëpërmjet një linje të abonuesve kabllor ose të abonuesve dixhitalë (DSL).';

$GLOBALS["lang"]['A list of custom TCP ports to scan (22 is SSH, 135 is WMI, 62078 is iPhone sync).'] = 'Një listë e porteve të personalizuara TCP për të skanuar (22 është SSH, 135 është WMI, 62078 është iPhone sync).';

$GLOBALS["lang"]['A list of custom UDP ports to scan (161 is SNMP).'] = 'Një listë e porteve të personalizuara UDP për të skanuar (161 është SNSM).';

$GLOBALS["lang"]['A local area network (LAN) is a network that connects computers and devices in a limited geographical area such as a home, school, office building, or closely positioned group of buildings. Each computer or device on the network is a node. Wired LANs are most likely based on Ethernet technology. Newer standards such as ITU-T G.hn also provide a way to create a wired LAN using existing wiring, such as coaxial cables, telephone lines, and power lines.<br><br>The defining characteristics of a LAN, in contrast to a wide area network (WAN), include higher data transfer rates, limited geographic range, and lack of reliance on leased lines to provide connectivity. Current Ethernet or other IEEE 802.3LAN technologies operate at data transfer rates up to 100 Gbit/s, standardized by IEEE in 2010. Currently, 400 Gbit/s Ethernet is being developed.'] = 'Një rrjet lokal i zonës (LAN) është një rrjet që lidh kompjuterët dhe pajisjet në një zonë të kufizuar gjeografike, si për shembull një shtëpi, shkollë, ndërtesë zyre ose një grup ndërtesash të pozicionuara mirë. Çdo kompjuter apo pajisje në rrjet është një nyjë. Ka shumë të ngjarë që LAN-ët e Wired të bazohen në teknologjinë Ethernet. Standarde më të reja të tilla si ITU-T G.hn gjithashtu ofrojnë një mënyrë për të krijuar një LAN të lidhur duke përdorur lidhje ekzistuese, si kabllot koaksiale, linjat telefonike dhe linjat e energjisë.<br/><br/>Karakteristikat dalluese të një LAN, në kontrast me një rrjet të gjerë zonash (WAN), përfshijnë norma më të larta transferimi të të dhënave, hapësira gjeografike të kufizuara dhe mungesën e mbështetjes në vijat me qira për të siguruar lidhje. Ethernet aktuale ose teknologji të tjera IEEEE 802.3LAN veprojnë në nivelet e transferimit të të dhënave deri në 100 Gbit/s, të standardizuara nga IEEEE më 2010. Aktualisht, 400 Gbit/s Ethernet po zhvillohet.';

$GLOBALS["lang"]['A location is a physical address that can have devices associated with it. You can assign it coordinates and if there are devices assigned, the location will appear on the Map when you have an Open-AudIT Enterprise license.'] = 'Vendi është një adresë fizike që mund të ketë pajisje që lidhen me të. Mund t\'i caktosh koordinatat dhe nëse ka pajisje të caktuara, vendi do të shfaqet në hartë kur të kesh një licensë të Ndërmarrjes Open-AudIT.';

$GLOBALS["lang"]['A location name will help you to find these devices in the future.'] = 'Emri i një vendi do t\'ju ndihmojë t\'i gjeni këto pajisje në të ardhmen.';

$GLOBALS["lang"]['A lower number means it will be applied before other rules.'] = 'Një numër më i ulët do të thotë se do të zbatohet përpara rregullave të tjera.';

$GLOBALS["lang"]['A lower number means it will be applied before other rules. The default weight is 100.'] = 'Një numër më i ulët do të thotë se do të zbatohet përpara rregullave të tjera. Pesha e paracaktuar është 100.';

$GLOBALS["lang"]['A new user logged in to Open-AudIT and was authenticated and authorized by the LDAP sever. That user was then created in Open-AudIT and logged in. Success.'] = 'Një përdorues i ri u fut në Open-AudIT dhe u identifikua dhe u autorizua nga LDAP pretend. Ky përdorues u krijua pastaj në Open-AudIT dhe u fut. Sukses.';

$GLOBALS["lang"]['A package is a piece of installed softare. A package has a type - antivirus, approved, backup, banned, cloud, firewall, ignored, license or other.'] = 'Një pako është një copë butare e instaluar. Një pako ka një lloj antivirusi, të miratuar, rezervë, të ndaluar, re, mur mbrojtës, të shpërfillur, të liçensuar ose të tjera.';

$GLOBALS["lang"]['A password (stored as a hash) that enables logon when using application authentication.'] = 'Një fjalëkalim (stored si një hash) që mundëson logon kur përdoret autentifikimi i aplikativit.';

$GLOBALS["lang"]['A person has an account in the Open-AudIT application. Their user account has a list of associated Roles and Organizations. The roles the user has determines WHAT they can do. The Organizations a user has determines WHICH items they can act upon.<br><br>When a user requests to perform an operation (create, read, update, delete) on a collection item, the roles are consulted to see if they are allowed to perform that action, then the orgs are consulted to determine if the collection item belongs to an org the user has permission to act on.'] = 'Një person ka një llogari në aplikimin Open-AudIT. Llogaria e tyre e përdoruesit ka një listë të roleve dhe organizatave shoqëruese. Roli që ka përdoruesi përcakton se çfarë mund të bëjnë. Organizatat një përdorues ka përcaktuar se çfarë gjërash mund të veprojnë.<br/><br/>Kur një përdorues kërkon të kryejë një operacion (krijim, lexim, përditësim, fshirje) në një element grumbullimi, rolet këshillohen për të parë nëse u lejohet të kryejnë këtë veprim, atëhere Orkët këshillohen për të përcaktuar nëse elementi i mbledhjes i përket një orgji ku përdoruesi ka leje të veprojë.';

$GLOBALS["lang"]['A personal area network (PAN) is a computer network used for communication among computer and different information technological devices close to one person. Some examples of devices that are used in a PAN are personal computers, printers, fax machines, telephones, PDAs, scanners, and even video game consoles. A PAN may include wired and wireless devices. The reach of a PAN typically extends to 10 meters. A wired PAN is usually constructed with USB and FireWire connections while technologies such as Bluetooth and infrared communication typically form a wireless PAN.'] = 'Një rrjet i zonës personale (PAN) është një rrjet kompjuteri që përdoret për të komunikuar mes kompjuterëve dhe pajisjeve të ndryshme teknologjike afër një personi. Disa shembuj pajisjesh që përdoren në një PAN janë kompjuterë personalë, tipografë, faksë, telefona, PDA, skanerë e madje edhe konsolë për lojërat me video. NJË PAN mund të përfshijë pajisje me tela dhe pa tel. Arritja e PAN zakonisht shtrihet në 10 metra. Një PAN e lidhur zakonisht ndërtohet me lidhje USB dhe FireWre ndërsa teknologjitë e tilla si Bluetooth dhe komunikimi infra të kuq zakonisht formojnë një PAN pa tel.';

$GLOBALS["lang"]['A query is essentially a SQL statement. This statement is run against the database with the automatic addition of the limit, filtered to apply to only those requested items and only those items the user has permission to view. A Query can be created using menu -> Manage -> Queries -> Create Queries. Queries contain an org_id and are hence restricted to the appropriate users. A user must have the org_admin or reporter role(s) to create, update or delete a query. All users can execute a query. A query has a name attribute used for the menu item as well as a menu category attribute. This tells the Open-Audit GUI which submenu to place the query in. There is also menu display which should be set to <i>y</i> to enable the query in the GUI (<i>n</i> to prevent the query from appearing at all). The query would still run if called using its <code>id</code>, regardless of menu displays value.'] = 'Një kërkesë është në thelb një deklaratë SQL. Kjo deklaratë është duke funksionuar kundër të dhënave me shtimin automatik të limitit, filtrohet për t\'u aplikuar vetëm atyre elementëve të kërkuar dhe vetëm këtyre gjërave që përdoruesi ka të drejtë t\'i shikojë. Një kërkesë mund të krijohet duke përdorur menu -> Menazhuesi -> Queries -> Krijo Queries. Queries përmban një org_id dhe prandaj janë të kufizuar në përdoruesit e duhur. Një përdorues duhet të ketë rolin org_admin apo gazetari për të krijuar, rifreskuar apo eleminuar një kërkesë. Të gjithë përdoruesit mund të ekzekutojnë një kërkesë. Një kërkesë ka një atribut emri të përdorur për zërin e menusë si edhe një atribut të kategorisë së menusë. Kjo tregon Open-Audit GUI se në cilën nënmenu të vendoset kërkesa. është menuja <i>p</i> për të aktivizuar kërkesën në GUI (<i>n</i> për të parandaluar që kërkesa të mos shfaqet fare. Kërkesa do të vazhdojë të zbatohet nëse quhet përdorimi i saj <code>id</code>, pa marrë parasysh vlerën e menusë.';

$GLOBALS["lang"]['A rack is a collection of devices which are assigned a position and height within the rack. A device can optionally have a picture associated with it. A rack is placed in a row. We have created a very granular system for positioning of racks, which is as follows. At the top level (as always) is the Organisation (Org). An Org can have multiple locations (as has always been the case). With the addition of the Racks feature, a location can now contain one or more Buildings. A building can contain one or more Floors. A floor can contain one or more Rooms. A room can contain one or more Rows. This sounds like a lot of work, but defaults are created for you. Create a new Location and the sub-components will be automatically created for you. If you need more items (buildings, rooms, etc) you can add them as you like. A rack can also be part of a <i>pod</i> of racks. The pod attribute works as a tag, rather than a strict hierarchical inheritance model as per buildings, floors, etc.<br><br>Racks are a feature available to Open-AudIT Enterprise licensed customers.'] = 'Një raft është një koleksion pajisjesh të cilat janë caktuar një pozicion dhe lartësi brenda raftit. Një pajisje mund të ketë një figurë të shoqëruar me të. Një raft është vendosur në një rresht. Ne kemi krijuar një sistem shumë të madh për pozicionimin e rafteve, që është si më poshtë. Në nivelin e lartë (si gjithmonë) është Organizata (Org). Një org mund të ketë shumë vende (si gjithmonë ka qenë rasti). Me shtimin e veçorive të Racs, një vend tani mund të përmbajë një apo më shumë ndërtesa. Një ndërtesë mund të përmbajë një ose më shumë dysheme. Një kat mund të përmbajë një ose më shumë dhoma. Një dhomë mund të përmbajë një ose më shumë rreshta. Kjo tingëllon si një shumë e punës, por falimentimet janë krijuar për ju. Krijo një pozicion të ri dhe nën-komponentët do të krijohen automatikisht për ju. Nëse ju duhen gjëra të tjera (ndërtimeve, dhomave) mund t\'i shtoni ato si të doni. Një raft mund të jetë gjithashtu pjesë e një <i>unit-format</i> Të gjoksit. Atributi funksionon si etiketë, në vend të një modeli të rreptë të trashëgimisë hierarkike si për ndërtesat, dyshemetë etj.<br/><br/>Racks janë një veçori në dispozicion të klientëve të liçensuar të Ndërmarrjes Open-AudIT.';

$GLOBALS["lang"]['A routing domain or address space where the IP addresses and MAC addresses are unique.'] = 'Një domain apo hapësirë adresash ku adresat IP janë unike.';

$GLOBALS["lang"]['A sample cron file for Linux is below. This should be placed in'] = 'Një mostër file cron për Linux është poshtë. Kjo duhet të vendoset';

$GLOBALS["lang"]['A security zone is a administrative domain or policy domain within the Network Domain.'] = 'Një zonë sigurie është një domenitet administrativ apo domain politik brenda Rrjetit Domain.';

$GLOBALS["lang"]['A seed discovery is another type of discovery, where you provide the IP of a single <i>seed</i> device. This device is audited, and any IPs it knows are then added to the list of IPs to be audited. Then, those devices are audited and any IPs they know are also added to the list of IPs for auditing. This process then continues within the parameters configured by the user.'] = 'Zbulimi i farës është një tjetër lloj zbulimi, ku ju siguroni IP e një të vetme <i>farë</i> Pajisja. Kjo pajisje është audituar, dhe çdo IP-së që ai di, i shtohet listës së IP-ve për t\'u kontrolluar. Pastaj, këto pajisje kontrollohen dhe çdo IP që njohin, i shtohet gjithashtu listës së IP-ve për auditim. Ky proces vazhdon pastaj brenda parametrave të konfiguruar nga përdoruesi.';

$GLOBALS["lang"]['A short description of the log entry.'] = 'Një përshkrim i shkurtër i hyrjes së log.';

$GLOBALS["lang"]['A storage area network (SAN) is a dedicated network that provides access to consolidated, block level data storage. SANs are primarily used to make storage devices, such as disk arrays, tape libraries, and optical jukeboxes, accessible to servers so that the devices appear like locally attached devices to the operating system. A SAN typically has its own network of storage devices that are generally not accessible through the local area network by other devices. The cost and complexity of SANs dropped in the early 2000s to levels allowing wider adoption across both enterprise and small to medium-sized business environments.'] = 'Një rrjet zonash ruajtjeje (SAN) është një rrjet i dedikuar që siguron mundësinë e përdorimit të të dhënave të konsoliduara, të bllokimit të nivelit të të dhënave. SANJËt përdoren kryesisht për të bërë pajisje ruajtjeje, si për shembull, lista disku, bibliotekat e shiritave dhe jukeboks optike, që gjenden në server, në mënyrë që pajisjet të duken si pajisje të lidhura me sistemin operativ. Një SANJË zakonisht ka rrjetin e vet të pajisjeve të ruajtjes që në përgjithësi nuk janë të arritshme nëpërmjet rrjetit lokal të zonës nga pajisje të tjera. Kostoja dhe kompleksiteti i SAN-eve ranë në fillim të viteve 2000 në nivelet që lejojnë miratimin më të gjerë si në ndërmarrjet ashtu edhe në mjediset e vogla të biznesit të mesëm.';

$GLOBALS["lang"]['A string that matches the <code>software.name</code> attribute. You can use the standard SQL wildcard of percent (%) to match one or more characters.'] = 'Një stringë që përputhet me këtë <code>software.name</code> Atributi. Mund të përdorni kartmonedhën standart SQL të përqindjes (%) për t\'iu përshtatur një apo më shumë gërmave.';

$GLOBALS["lang"]['A structured system for managing sensitive information'] = 'Një sistem i strukturuar për menaxhimin e informacionit të ndjeshëm';

$GLOBALS["lang"]['A timestamp.'] = 'Një moment.';

$GLOBALS["lang"]['A user has a primary Org as well as a list of Orgs they can access. A user combines this with a list of assigned roles that define what actions they can take on items assigned to the Orgs they have access to. The combination of a users <i>orgs</i> and <i>roles</i> define what they can and cannot do within Open-AudIT.'] = 'Një përdorues ka një Org primar si dhe një listë të Orgs që mund të kenë. Një përdorues e kombinon këtë me listën e roleve të caktuara, të cilat përcaktojnë se çfarë veprimesh mund të ndërmarrin për gjërat e caktuara në Orgs ku mund të hyjnë. Kombinimi i përdoruesve <i>unit-format</i> dhe <i>Roli</i> Përcakto çfarë mund të bëjnë dhe nuk mund të bëjnë brenda Open-AudIT.';

$GLOBALS["lang"]['A user will have a list of associated organizations (orgs). Each org the user has will allow them to act upon items within that org as per their role(s).<br><br>All orgs except the default org have a parent. Think of an Org Chart. If a user has permission on an Org, they also have permission on any descendants of that Org.<br><br>Users are also allowed permission on a child org to see the items from parent orgs for certain collections. Those are: dashboards, discovery_scan_options, fields, files, groups, queries, reports, roles, rules, scripts, summaries, widgets.<br><br>Do not forget you have granular control over what users can see and do using Roles in Enterprise.'] = 'Një përdorues do të ketë një listë organizatash shoqëruese (orgs). Çdo org përdoruesi do t\'i lejojë ata të veprojnë sipas elementëve brenda asaj orgji si për rolin e tyre.<br/><br/>Të gjitha Orkët përveç orgjit të paracaktuar kanë një prind. Mendo për një hartë Org. Në qoftë se një përdorues ka leje për një Org, ata gjithashtu kanë leje për ndonjë pasardhës të tij.<br/><br/>Përdoruesive u lejohet, gjithashtu, leja në një og fëmije për të parë artikujt nga primatët prindëror për disa koleksione. Këto janë: tabela, zbulime_scan_options, fusha, skedarë, grupe, pyetje, raporte, role, rregulla, script-e, përmbledhje, widget.<br/><br/>Mos harroni se keni kontroll të përgjithshëm mbi atë që mund të shohin dhe të bëjnë përdoruesit duke përdorur Role në Ndërmarrje.';

$GLOBALS["lang"]['A user will have a list of associated organizations (orgs). Each org the user has will allow them to act upon items within that org as per their role(s).<br><br>All orgs except the default org have a parent. Think of an Org Chart. If a user has permission on an Org, they also have permission on any descendants of that Org.<br><br>We have also allow a user with permission on a child org to see the items from parent orgs for certain collections. Those are: dashboards, discovery_scan_options, fields, files, groups, queries, roles, rules, scripts, summaries, widgets.<br><br>Do not forget you have granular control over what users can see and do using'] = 'Një përdorues do të ketë një listë organizatash shoqëruese (orgs). Çdo org përdoruesi do t\'i lejojë ata të veprojnë sipas elementëve brenda asaj orgji si për rolin e tyre.<br/><br/>Të gjitha Orkët përveç orgjit të paracaktuar kanë një prind. Mendo për një hartë Org. Në qoftë se një përdorues ka leje për një Org, ata gjithashtu kanë leje për ndonjë pasardhës të tij.<br/><br/>Gjithashtu, kemi lejuar që një përdorues të ketë leje në orgën e një fëmije për t\'i parë gjërat nga orgat e prindërve për disa koleksione. Këto janë: tabela, zbulime_scan_options, fusha, skedarë, grupe, pyetje, role, rregulla, script-e, përmbledhje, widget.<br/><br/>Mos harroni se ju keni një kontroll të përgjithshëm mbi atë që përdoruesit mund të shohin dhe të bëjnë përdorimin';

$GLOBALS["lang"]['A virtual private network (VPN) is an overlay network in which some of the links between nodes are carried by open connections or virtual circuits in some larger network (e.g., the Internet) instead of by physical wires. The data link layer protocols of the virtual network are said to be tunneled through the larger network when this is the case. One common application is secure communications through the public Internet, but a VPN need not have explicit security features, such as authentication or content encryption. VPNs, for example, can be used to separate the traffic of different user communities over an underlying network with strong security features.<br><br>VPN may have best-effort performance, or may have a defined service level agreement (SLA) between the VPN customer and the VPN service provider. Generally, a VPN has a topology more complex than point-to-point.'] = 'Një rrjet virtual privat (VPN) është një rrjet tepër i lartë, në të cilin disa nga lidhjet midis nyjeve transportohen nga lidhje të hapura ose qarqe virtuale në një rrjet më të madh (p.sh. Interneti) në vend të telave fizikë. Niveli i lidhjes së të dhënave me protokollet e rrjetit virtual thuhet se është hapur nëpërmjet rrjetit më të madh kur ky është rasti. Një aplikim i përbashkët është komunikimi i sigurtë nëpërmjet internetit publik, por një VPN nuk duhet të ketë tipare sigurie të qarta, si autentifikimi apo kriptimi i përmbajtjes. Për shembull, VPN-të mund të përdoren për të ndarë trafikun e komuniteteve të ndryshme të përdoruesve në një rrjet bazë me tipare të forta sigurie.<br/><br/>VPN mund të ketë performancë më të mirë ose mund të ketë një marrëveshje të përcaktuar të nivelit të shërbimit (SLA) midis klientit VPN dhe ofruesit të shërbimit VPN. Në përgjithësi, një VPN ka një topologji më komplekse se një pikë në pikë.';

$GLOBALS["lang"]['A vulnerability affecting availability may allow attackers to disrupt services, crash systems, or cause denial-of-service (DoS) (None, Low, High).'] = 'Një dobësi që prek mundësinë mund të lejojë sulmuesit të prishin shërbimet, sistemet e rrëzimit ose të shkaktojnë mohim të shërbimit (DoS) (askush, i ulët, i lartë).';

$GLOBALS["lang"]['A vulnerability affecting confidentiality may allow attackers to read sensitive data, such as personal information, credentials, or proprietary business data (None, Low, High).'] = 'Një dobësi që ndikon në mirëbesim mund t\'u japë mundësi sulmuesve të lexojnë të dhëna të ndjeshme, si: informacion personal, kredenciale ose të dhëna pronergjiale biznesi (askush, i ulët, i lartë).';

$GLOBALS["lang"]['A vulnerability affecting integrity may allow attackers to modify data, inject malicious code, or alter system configurations (None, Low, High).'] = 'Një dobësi që prek integritetin mund t\'u lejojë sulmuesve të ndryshojnë të dhënat, të injektojnë kodin keqdashës ose të ndryshojnë konfigurimin e sistemit (askush, i ulët, i lartë).';

$GLOBALS["lang"]['A vulnerability can be editied and more specific package names provided where the enrichment data is insufficient or the generated SQL is not quite correct.'] = 'Një dobësi mund të ndryshohet dhe më specifikisht emrat e paketave ku të dhënat e pasurimit janë të pamjaftueshme ose SQL e gjeneruara nuk është mjaft korrekte.';

$GLOBALS["lang"]['A vulnerability item in Open-AudIT can be thought of as essentially a query against your database to determine your potential exposure to a given CVE report. A vulnerability is made up of the CVE report, along with enrichment data from FirstWave. These two items are combined to produce a suitable query that is automatically downloaded from FirstWave.'] = 'Një gjë e cënueshme në Open-AudIT mund të mendohet si në thelb një kërkesë kundër bazës suaj të të dhënave për të përcaktuar ekspozimin tuaj potencial ndaj një raporti të caktuar CVE. Një dobësi përbëhet nga raporti CVE, së bashku me të dhënat pasuruese nga FirstWave. Këto dy gjëra kombinohen për të bërë një kërkesë të përshtatshme që shkarkohet automatikisht nga FirstWave.';

$GLOBALS["lang"]['A wide area network (WAN) is a computer network that covers a large geographic area such as a city, country, or spans even intercontinental distances. A WAN uses a communications channel that combines many types of media such as telephone lines, cables, and air waves. A WAN often makes use of transmission facilities provided by common carriers, such as telephone companies. WAN technologies generally function at the lower three layers of the OSI reference model: the physical layer, the data link layer, and the network layer.'] = 'Një rrjet i gjerë zonash (WAN) është një rrjet kompjuteri që mbulon një zonë të madhe gjeografike, si për shembull një qytet, vend ose hapësirë edhe në largësi ndërkontinentale. NJË mjet komunikimi përdor një kanal komunikimi që kombinon shumë lloje mediash, si linja telefonike, kabllo dhe valë ajri. NJË USH shpesh përdor ndërtesat e transmetimit që sigurohen nga transportuesit e zakonshëm, siç janë kompanitë telefonike. Teknologjitë WAN funksionojnë përgjithësisht në tri shtresat e poshtme të modelit referues OSI: shtresa fizike, shtresa e lidhjes së të dhënave dhe shtresa e rrjetit.';

$GLOBALS["lang"]['AD Group'] = 'Grupi AD';

$GLOBALS["lang"]['ADSL, HFC, ISDN, etc.'] = 'ADSL, HFC, ISDN, etj.';

$GLOBALS["lang"]['AIX'] = 'AIX';

$GLOBALS["lang"]['ALL IPs'] = 'TË GJITHA P - ja';

$GLOBALS["lang"]['API / Web Access'] = 'Hyrje në web';

$GLOBALS["lang"]['API Documentation'] = 'Dokumentë';

$GLOBALS["lang"]['API Key required.'] = 'Kërkohet çelësi.';

$GLOBALS["lang"]['API Result'] = 'Rezultati';

$GLOBALS["lang"]['About'] = 'Informacione';

$GLOBALS["lang"]['Above are the only required items.'] = 'Mbi to janë të vetmet gjëra që kërkohen.';

$GLOBALS["lang"]['Accept'] = 'Prano';

$GLOBALS["lang"]['Access Model'] = 'Modeli i hyrjes';

$GLOBALS["lang"]['access_point'] = 'hyrje Pikë';

$GLOBALS["lang"]['Access Point'] = 'hyrje Pikë';

$GLOBALS["lang"]['access_token'] = 'Hyrje në Token';

$GLOBALS["lang"]['Access Token'] = 'Hyrje në Token';

$GLOBALS["lang"]['Access to the admin$ share and RPC uses the SMB2 protocol.'] = 'Hyrja në pjesën admin $ dhe RPC përdor protokollin SMB2.';

$GLOBALS["lang"]['ack_by'] = 'Ack by';

$GLOBALS["lang"]['Ack By'] = 'Ack by';

$GLOBALS["lang"]['ack_date'] = 'Data e Ack';

$GLOBALS["lang"]['Ack Date'] = 'Data e Ack';

$GLOBALS["lang"]['ack_time'] = 'Koha e Ack';

$GLOBALS["lang"]['Ack Time'] = 'Koha e Ack';

$GLOBALS["lang"]['action'] = 'Veprimi';

$GLOBALS["lang"]['Action'] = 'Veprimi';

$GLOBALS["lang"]['action_audit'] = 'Kontrolli i veprimit';

$GLOBALS["lang"]['Action Audit'] = 'Kontrolli i veprimit';

$GLOBALS["lang"]['action_command'] = 'Komanda e veprimit';

$GLOBALS["lang"]['Action Command'] = 'Komanda e veprimit';

$GLOBALS["lang"]['action_date'] = 'Data e veprimit';

$GLOBALS["lang"]['Action Date'] = 'Data e veprimit';

$GLOBALS["lang"]['action_devices_assigned_to_location'] = 'Pajisjet e veprimit caktojnë vendndodhjen';

$GLOBALS["lang"]['Action Devices Assigned To Location'] = 'Pajisjet e veprimit caktojnë vendndodhjen';

$GLOBALS["lang"]['action_devices_assigned_to_org'] = 'Pajisjet e veprimit të caktuara për org';

$GLOBALS["lang"]['Action Devices Assigned To Org'] = 'Pajisjet e veprimit të caktuara për org';

$GLOBALS["lang"]['action_download'] = 'Veprimi';

$GLOBALS["lang"]['Action Download'] = 'Veprimi';

$GLOBALS["lang"]['action_uninstall'] = 'Veprimi';

$GLOBALS["lang"]['Action Uninstall'] = 'Veprimi';

$GLOBALS["lang"]['actioned'] = 'Veprimi';

$GLOBALS["lang"]['Actioned'] = 'Veprimi';

$GLOBALS["lang"]['actioned_by'] = 'Veprimi';

$GLOBALS["lang"]['Actioned By'] = 'Veprimi';

$GLOBALS["lang"]['actioned_date'] = 'Data e aksionit';

$GLOBALS["lang"]['Actioned Date'] = 'Data e aksionit';

$GLOBALS["lang"]['actions'] = 'Veprimet';

$GLOBALS["lang"]['Actions'] = 'Veprimet';

$GLOBALS["lang"]['Activate'] = 'Aktiv';

$GLOBALS["lang"]['Activate Free License'] = 'Aktivizo Liçencën e Lirë';

$GLOBALS["lang"]['Activate Key'] = 'Aktivo kyçin';

$GLOBALS["lang"]['Activate a free Enterprise license'] = 'Aktivizo një liçensë të lirë të Ndërmarrjes';

$GLOBALS["lang"]['Active'] = 'Aktiv';

$GLOBALS["lang"]['Active / Active'] = 'Aktiv';

$GLOBALS["lang"]['Active / Passive'] = 'Aktiv / Pasive';

$GLOBALS["lang"]['Active Directory'] = 'Directory aktive';

$GLOBALS["lang"]['Active Directory Domain'] = 'Aktiv Directory Domain';

$GLOBALS["lang"]['active_directory_ou'] = 'Directory aktive Ou';

$GLOBALS["lang"]['Active Directory Ou'] = 'Directory aktive Ou';

$GLOBALS["lang"]['Active Directory Server'] = 'Aktiv Directory Serveri';

$GLOBALS["lang"]['Active Directory and OpenLDAP'] = 'Directory aktive dhe OpenLDAP';

$GLOBALS["lang"]['ad_domain'] = 'Ad Domain';

$GLOBALS["lang"]['Ad Domain'] = 'Ad Domain';

$GLOBALS["lang"]['ad_group'] = 'Grupi';

$GLOBALS["lang"]['Ad Group'] = 'Grupi';

$GLOBALS["lang"]['ad_server'] = 'Serveri Ad';

$GLOBALS["lang"]['Ad Server'] = 'Serveri Ad';

$GLOBALS["lang"]['Add'] = '_Shto';

$GLOBALS["lang"]['Add Credentials'] = 'Shto';

$GLOBALS["lang"]['Add Device'] = 'Shto dispozitivin';

$GLOBALS["lang"]['Add Device to Application'] = 'Shto dispozitivin në aplikativ';

$GLOBALS["lang"]['Add Device to Cluster'] = 'Shto nga';

$GLOBALS["lang"]['Add Exception'] = 'Shto përjashtim';

$GLOBALS["lang"]['Add Field'] = 'Shto Fusha';

$GLOBALS["lang"]['Add If'] = 'Shto';

$GLOBALS["lang"]['Add Policies from Device'] = 'Shto';

$GLOBALS["lang"]['Add Policy'] = 'Shto Politikë';

$GLOBALS["lang"]['Add Then'] = 'Shto';

$GLOBALS["lang"]['Add Your Credentials'] = 'Shtoni cilësitë tuaja';

$GLOBALS["lang"]['Add image'] = 'Shto figurë';

$GLOBALS["lang"]['additional_items'] = 'Shto elementët';

$GLOBALS["lang"]['Additional Items'] = 'Shto elementët';

$GLOBALS["lang"]['address'] = 'Adresa';

$GLOBALS["lang"]['Address'] = 'Adresa';

$GLOBALS["lang"]['Address any nonconformities'] = 'Adresa çdo jokonformitet';

$GLOBALS["lang"]['Address audit findings and corrective actions'] = 'Përgjigjet e kontrollit dhe veprimet korrigjuese';

$GLOBALS["lang"]['Admin'] = 'Admin';

$GLOBALS["lang"]['admin_status'] = 'Gjendja';

$GLOBALS["lang"]['Admin Status'] = 'Gjendja';

$GLOBALS["lang"]['advanced'] = 'Të detajuara';

$GLOBALS["lang"]['Advanced'] = 'Të detajuara';

$GLOBALS["lang"]['Afghanistan'] = 'Afganistan';

$GLOBALS["lang"]['After an Integration has been created, when you view the details of an Integration you will notice a field named Debug. This is set to no by default. Changing it to yes provides extra logging when an Integration is executed. Debug should not be left as yes. This is because the debug output will contain everything retrieved from external systems - including items such as WMI and SNMP credentials. The debug option should be used only when an issue has occurred and you wish to dig deeper in to see if you can determine why.'] = 'Pasi të jetë krijuar një integrim, kur shihni hollësitë e një integrimi, do të vëreni një fushë të quajtur Gjetjabla. Kjo është vendosur në jo si e prezgjedhur. Duke e ndryshuar atë në po, siguron prerje shtesë kur ekzekutohet një integrim. Gjetja nuk duhet lënë si po. Kjo është për shkak se prodhimi i debug do të përmbajë çdo gjë të nxjerrë nga sistemet e jashtme, duke përfshirë objekte të tilla si kredencialet WMI dhe SNSMP. Opsioni i çbug duhet përdorur vetëm kur ka ndodhur një çështje dhe dëshiron të gërmosh më thellë brenda për të parë nëse mund të përcaktosh pse.';

$GLOBALS["lang"]['After completing the above, uninstall the agent.'] = 'Pasi të ketë përfunduar më sipër, shkëputeni agjentin.';

$GLOBALS["lang"]['Agent? Discovery? Credentials?'] = 'Agjent? Zbulim? Krenciale?';

$GLOBALS["lang"]['agents'] = 'Agjentë';

$GLOBALS["lang"]['Agents'] = 'Agjentë';

$GLOBALS["lang"]['Agents entries can be created that specify a duration, a network and an operating system. If all tests match, the server then asks the agent to perform actions. If any test is not set, it is excluded from the <i>all must match</i> requirement.<br><br>You can create multiple agents and have the server check one or all agent entries. You might (for example) specify one agent that says <i>If the agent IP is in this subnet, set the location_id of the device</i>.<br><br>Another example might be not running an audit at all, rather download a script and run it. If the agent is installed with admin rights, you can now manage your machines without opening <strong>any</strong> ports from it to the world.</p><p>Enabling advanced agents means an agent can be instructed to download any file and execute any command. <strong>WARNING</strong>: This comes with security risks. This configuration will <strong>only</strong> function when running Open-AudIT using HTTPS and a valid (Certificate Authority provided) certificate for '] = 'Mund të krijohen elementë që përcaktojnë kohëzgjatjen, një rrjet dhe një sistem operativ. Nëse të gjitha testet përputhen, serveri pastaj i kërkon agjentit të kryejë veprime. Nëse nuk është caktuar ndonjë test, ai përjashtohet nga <i>gjithçka</i> Kërkesa.<br/><br/>Ju mund të krijoni agjentë të shumtë dhe të keni serverin për të kontrolluar një apo të gjitha zërat e agjentëve. Ju mund (për shembull) të specifikoni një agjent që thotë <i>Nëse agjenti IP është në këtë nënnet, cakto pozicionin_id të dispozitivit</i>.<br/><br/>Një shembull tjetër mund të mos jetë kryerja e një auditimi, përkundrazi shkarkoni një skenar dhe zbatojeni. Nëse agjenti është i instaluar me të drejta admin, tani mund t\'i administroni makinat tuaja pa u hapur <strong>Asnjë</strong> Nga ajo deri në botë.<p>Të bësh agjentë të avancuar do të thotë se një agjent mund të mësohet të shkarkojë çdo dosje dhe të zbatojë çdo komandë. <strong>KUJDES</strong>: Kjo vjen me rreziqe sigurie. Ky konfigurim <strong>vetëm</strong> Funksion kur Open-AudIT përdor HTTP dhe një çertifikatë të vlefshme (Certifikate dhënë) për </p>';

$GLOBALS["lang"]['Aggressive'] = 'Agresive';

$GLOBALS["lang"]['Aland Islands'] = 'Ishujt Aland';

$GLOBALS["lang"]['Albania'] = 'Shqipëri';

$GLOBALS["lang"]['Albanian'] = 'Shqip';

$GLOBALS["lang"]['alert_style'] = 'Stili i alarmit';

$GLOBALS["lang"]['Alert Style'] = 'Stili i alarmit';

$GLOBALS["lang"]['Algeria'] = 'Algjeri';

$GLOBALS["lang"]['algorithm'] = 'Algoritmi';

$GLOBALS["lang"]['Algorithm'] = 'Algoritmi';

$GLOBALS["lang"]['alias'] = 'Pseudonimi';

$GLOBALS["lang"]['Alias'] = 'Pseudonimi';

$GLOBALS["lang"]['All'] = 'Gjithçka';

$GLOBALS["lang"]['All IPs'] = 'Të gjitha IP';

$GLOBALS["lang"]['All Policies'] = 'Të gjitha politikat';

$GLOBALS["lang"]['All Queued Items'] = 'Të gjithë elementët e kërkuar';

$GLOBALS["lang"]['All collections URLs use the format'] = 'Të gjitha adresat e koleksionit përdorin formatin';

$GLOBALS["lang"]['All device sub-tables contain a couple of important columns.'] = 'Të gjitha paisjet përmbajnë disa kolona të rëndësishme.';

$GLOBALS["lang"]['All devices with a type like computer.'] = 'Të gjitha pajisjet me një lloj kompjuteri.';

$GLOBALS["lang"]['All devices with a type of computer or router.'] = 'Të gjitha pajisjet me një lloj kompjuteri ose shoferi.';

$GLOBALS["lang"]['All devices without a type of switch and printer.'] = 'Të gjitha pajisjet pa një lloj çelësi dhe printeri.';

$GLOBALS["lang"]['All devices without a type of switch and printer. Essentially the same as the above query.'] = 'Të gjitha pajisjet pa një lloj çelësi dhe printeri. Në thelb e njëjta pyetje.';

$GLOBALS["lang"]['All regular discovery options are also available for use in Device Seed Discoveries.'] = 'Të gjitha mundësitë e zbulimit të rregullt janë në dispozicion edhe për t\'u përdorur në zbulimin e Farës së Pajisjeve.';

$GLOBALS["lang"]['All tasks can be created the same in Windows and Linux. Tasks use the CRON method for scheduling execution.'] = 'Të gjitha detyrat mund të krijohen të njëjta në Windows dhe Linux. Detyrat përdorin metodën e CRON për të caktuar ekzekutimin.';

$GLOBALS["lang"]['Along with this request for information, we send back to FirstWave datapoints that will give us some much needed information on feature use and your installation.'] = 'Së bashku me këtë kërkesë për informacion, ne dërgojmë përsëri në pikat e të dhënave FirstWave që do të na japin disa informacione shumë të nevojshme mbi përdorimin e veçorive dhe instalimin tuaj.';

$GLOBALS["lang"]['Also can be created from the'] = 'Gjithashtu mund të krijohet nga';

$GLOBALS["lang"]['Alternatives'] = 'Opsione';

$GLOBALS["lang"]['Amazon AWS Fields'] = 'AWS e Amazonës Fushat';

$GLOBALS["lang"]['American Samoa'] = 'Samoa amerikane';

$GLOBALS["lang"]['An Active Directory discovery will query Active Directory for a list of networks and scan the associated IPs just like a regular Subnet discovery.'] = 'Një zbulim Activ Directory do të kërkojë Active Directory për një listë rrjetesh dhe do të skanojë IP-të si një zbulim i rregullt në Subnet.';

$GLOBALS["lang"]['An Org (organization) is the owner of most items in collections within Open-AudIT. With the exception of global items like <i>configuration</i>, most items are assigned to (owned by) an Org. A user has access to those items in a collection, that below to an Org the user has permission on.'] = 'Një org (organizim) është pronari i shumicës së elementëve në koleksionet brenda Open-AudIT. Me përjashtim të gjërave globale si <i>Konfigurimi i Mail</i>, shumica e gjërave janë caktuar (të zotëruara nga) një org. Një përdorues ka qasje në këto objekte në një koleksion, që nën një Org përdoruesi ka leje.';

$GLOBALS["lang"]['An application is actively accepting TCP connections, UDP datagrams or SCTP associations on this port. Finding these is often the primary goal of port scanning. Security-minded people know that each open port is an avenue for attack. Attackers and pen-testers want to exploit the open ports, while administrators try to close or protect them with firewalls without thwarting legitimate users. Open ports are also interesting for non-security scans because they show services available for use on the network.'] = 'Një aplikim është duke pranuar aktivisht lidhjet TCP, programet e të dhënave të UDP apo shoqatat e SCTP në këtë port. Gjetja e tyre shpesh është synimi kryesor i skanimit të portit. Njerëzit me mendje sigurie e dinë se çdo port i hapur është një mënyrë për sulm. Sulmuesit dhe testuesit e penës duan të shfrytëzojnë portet e hapura, ndërsa administratorët përpiqen t\'i mbyllin apo t\'i mbrojnë ata me zjarr pa penguar përdoruesit e ligjshëm. Portet e hapura janë gjithashtu interesante për skanimet jo të sigurisë sepse ato tregojnë shërbime në dispozicion për përdorim në rrjet.';

$GLOBALS["lang"]['An array of <code>benchmarks.id</code>.'] = 'Një sërë <code>benchmarks.id</code>.';

$GLOBALS["lang"]['An array of <code>devices.id</code>.'] = 'Një sërë <code>devices.id</code>.';

$GLOBALS["lang"]['An array of object representing external links to more information.'] = 'Një sërë objektesh që përfaqësojnë lidhjet e jashtme me më shumë informacion.';

$GLOBALS["lang"]['An educated guess to the identity and type of device'] = 'Një ide e edukuar për identitetin dhe llojin e pajisjeve';

$GLOBALS["lang"]['An encrypted JSON document containing the required attributes depending on the <code>credentials.type</code>.'] = 'Një dokument i kriptuar JSON që përmban atributet e kërkuara në varësi të <code>credentials.type</code>.';

$GLOBALS["lang"]['An enterprise private network is a network that a single organization builds to interconnect its office locations (e.g., production sites, head offices, remote offices, shops) so they can share computer resources.'] = 'Një rrjet i ndërmarrjeve private është një rrjet që një organizatë e vetme ndërton për të lidhur vendet e saj të zyrave (p.sh., sitet e prodhimit, zyrat e zyrave, zyrat e largëta, dyqanet) në mënyrë që ata të mund të ndajnë burimet kompjuterike.';

$GLOBALS["lang"]['An entry can be created using the web interface if the current user logged in has a role that contains the'] = 'Një hyrje mund të krijohet duke përdorur interfaqen web nëse përdoruesi aktual është futur në të ka një rol që përmban';

$GLOBALS["lang"]['An example JSON POST body is below. This should be attached to the &quot;data&quot; form item.'] = 'Një shembull, trupi JSON është poshtë. Kjo duhet t\'i bashkangjitet elementit "Data."';

$GLOBALS["lang"]['An example widget SQL showing devices counted per location.'] = 'Një shembull i widget SQL që shfaq paisjet për vendndodhjen.';

$GLOBALS["lang"]['An existing Open-AudIT user was authenticated and authorized by the LDAP server. Success.'] = 'Një përdorues ekzistues Open-AudIT u identifikua dhe u autorizua nga serveri LDAP. Sukses.';

$GLOBALS["lang"]['An indication of the level of service required by this site.'] = 'Një tregues i nivelit të shërbimit që kërkohet nga ky sit.';

$GLOBALS["lang"]['An internal field that indicates if the discovery has completed.'] = 'Një fushë e brendshme që tregon nëse zbulimi ka përfunduar.';

$GLOBALS["lang"]['An open|filtered port is considered open (and will trigger device detection).<br>Previously, Open-AudIT considered an Nmap response of'] = 'Një port i hapur dhe i filtruar konsiderohet i hapur (dhe do të shkaktojë zbulimin e dispozitivit).<br/>Më parë, Open-Aud IMAGJINUAR si përgjigje e Nmap';

$GLOBALS["lang"]['An optional GeoCode'] = 'Një GeoCode opcionale';

$GLOBALS["lang"]['An optional password to use sudo.'] = 'Një fjalëkalim opcional për tu përdorur sudo.';

$GLOBALS["lang"]['Analyzed'] = 'Analizuar';

$GLOBALS["lang"]['And finally, click Submit to execute this discovery.'] = 'Dhe në fund, kliko për të ekzekutuar këtë zbulim.';

$GLOBALS["lang"]['And if Something Goes Wrong?'] = 'Dhe nëse diçka shkon keq?';

$GLOBALS["lang"]['And lastly click <i>Submit</i> to create your Open-AudIT Auth method for Entra.'] = 'Dhe klikim i fundit <i>Dërgo</i> për të krijuar metodën tuaj të autorizimit Open-AudIT për Entra.';

$GLOBALS["lang"]['And lastly, not so much a security issue - more peace of mind. The data structures are open and documented. You can view them'] = 'Dhe së fundi, jo aq shumë çështje sigurie - më shumë paqe mendore. Strukturat e të dhënave janë të hapura dhe të dokumentuara. Mund t\'i shohësh.';

$GLOBALS["lang"]['And provide a name - we humbly recommend Open-AudIT &#128512;, but you can name it anything you like. Make sure the option for <i>Integrate any other application you do not find in the gallery (Non-gallery)</i> is selected. And then click <i>Create<i>.'] = 'Dhe të ofrojmë një emër - ne me përulësi rekomandojmë Open-AudIT , por ju mund ta quani atë çdo gjë që ju pëlqen. nga <i>Rivendos çdo aplikativ tjetër që nuk gjen në galeri (Non-gallery)</i> është zgjedhur. Dhe pastaj kliko <i>Krijo<i>.</i></i>';

$GLOBALS["lang"]['And so much more.'] = 'Dhe shumë më tepër.';

$GLOBALS["lang"]['Andorra'] = 'Andora';

$GLOBALS["lang"]['Angola'] = 'Angolë';

$GLOBALS["lang"]['Anguilla'] = 'Anguilla';

$GLOBALS["lang"]['Annex A Controls'] = 'Anx A Kontrollet';

$GLOBALS["lang"]['Antarctica'] = 'Antarktika';

$GLOBALS["lang"]['AntiVirus'] = 'AntiVirus';

$GLOBALS["lang"]['AntiVirus Packages'] = 'Paketat antiVirus';

$GLOBALS["lang"]['Antigua and Barbuda'] = 'Antigua dhe Barbuda';

$GLOBALS["lang"]['Antivirus'] = 'Antivirusi';

$GLOBALS["lang"]['Any TCP ports (comma seperated, no spaces) you wish to exclude from this discovery. Only available when using Nmap 7+.'] = 'Çdo porte TCP (e ndarë në kompjuter, nuk ka hapësira) që dëshironi të përjashtoni nga ky zbulim. Vetëm kur përdoret Nmap 7+.';

$GLOBALS["lang"]['Any UDP ports (comma seperated, no spaces) you wish to exclude from this discovery. Only available when using Nmap 7+.'] = 'Çdo porte (komma ndarë, pa hapësira) që dëshironi të përjashtoni nga ky zbulim. Vetëm kur përdoret Nmap 7+.';

$GLOBALS["lang"]['Any additional documentation you need.'] = 'Çdo dokumentacion shtesë që ju duhet.';

$GLOBALS["lang"]['Any additional notes you care to make.'] = 'Çdo shënim tjetër që do të bësh.';

$GLOBALS["lang"]['Any attributes followed by a * indicate that CVSS data less than v4 was used to complete this field. By default, we attempt to use v4 fields, however if they are not populated we will fallback to the previous version(s) for attributes.'] = 'Çdo atribut i ndjekur nga një * tregon se të dhënat CVSS më pak se v4 u përdorën për të përfunduar këtë fushë. Në mënyrë të paracaktuar, ne përpiqemi të përdorim fushat v4, megjithatë nëse ato nuk janë të populluara ne do të kthehemi tek versioni i mëparshëm për atribute.';

$GLOBALS["lang"]['Any devices will be assigned to this Org when they run their audit script (if set).'] = 'Dhe, çfarëdo dredhie që të punojnë, ajo do të jetë e caktuar në Libër.';

$GLOBALS["lang"]['Any devices will be assigned to this Org when they run their audit script (if set). Links to <code>orgs.id</code>.'] = 'Dhe, çfarëdo dredhie që të punojnë, ajo do të jetë e caktuar në Libër. Lidhje me <code>orgs.id</code>.';

$GLOBALS["lang"]['Any discovered devices will be assigned to this Location if set. Links to <code>locations.id</code>.'] = 'Çdo pajisje e zbuluar do të caktohet në këtë vend nëse vendoset. Lidhje me <code>locations.id</code>.';

$GLOBALS["lang"]['Any discovered devices will be assigned to this Location when they run their audit script (if set).'] = 'Çdo mjet i zbuluar do të caktohet në këtë vend kur ata të drejtojnë skenarin e tyre auditues (nëse caktohet).';

$GLOBALS["lang"]['Any discovered devices will be assigned to this Location when they run their audit script (if set). Links to <code>locations.id</code>.'] = 'Çdo mjet i zbuluar do të caktohet në këtë vend kur ata të drejtojnë skenarin e tyre auditues (nëse caktohet). Lidhje me <code>locations.id</code>.';

$GLOBALS["lang"]['Any discovered devices will be assigned to this Org if set. If not set, they are assigned to the <code>org_id</code> of this discovery. Links to <code>orgs.id</code>.'] = 'Çdo pajisje e zbuluar do të caktohet në këtë Org nëse vendoset. Nëse nuk është vendosur, ata janë të caktuar në <code>org_id</code> I këtij zbulimi. Lidhje me <code>orgs.id</code>.';

$GLOBALS["lang"]['Any files found in this manner are stored in the <i>executable</i> table as per any other device component.'] = 'në <i>e ekzekutueshme</i> Tavolina për çdo komponent tjetër pajisjesh.';

$GLOBALS["lang"]['Any required filter. NOTE: When type = traffic, this represents the font-awesome icon.'] = 'Çdo filtër që kërkohet. NOFE: Kur lloji = trafik, kjo përfaqëson ikonën me shkronja të këndshme.';

$GLOBALS["lang"]['Any specific TCP ports you wish tested (comma seperated, no spaces).'] = 'Çdo porte të posaçme TCP dëshironi të testoheni (të ndarë në kompjuter, pa hapësira).';

$GLOBALS["lang"]['Any specific UDP ports you wish tested (comma seperated, no spaces).'] = 'Çdo port specifik UDP që dëshironi të testoni (të ndarë, pa hapësira).';

$GLOBALS["lang"]['Any user uploaded images are placed here.'] = 'Çdo përdorues është vendosur këtu.';

$GLOBALS["lang"]['Application'] = 'Aplikativi';

$GLOBALS["lang"]['Application Definitions'] = 'Përcakto përcaktimet e aplikativit';

$GLOBALS["lang"]['application_id'] = 'ID e aplikativit';

$GLOBALS["lang"]['Application ID'] = 'ID e aplikativit';

$GLOBALS["lang"]['Application Licenses'] = 'Liçenca';

$GLOBALS["lang"]['Application, Operating System or Hardware.'] = 'Program, sistem operativ apo hardware.';

$GLOBALS["lang"]['applications'] = 'Aplikativë';

$GLOBALS["lang"]['Applications'] = 'Aplikativë';

$GLOBALS["lang"]['Applications are an Enterprise only feature.'] = 'Aplikimi është vetëm një tipar i kompanisë.';

$GLOBALS["lang"]['Applications are being introduced in Open-AudIT 2.2 with a view to expand on the concept as further development is made.'] = 'Kërkesat janë duke u futur në Open-AudIT 2.2 me një pamje për të zgjeruar konceptin pasi është bërë zhvillimi i mëtejshëm.';

$GLOBALS["lang"]['applied'] = 'Aplikuar';

$GLOBALS["lang"]['Applied'] = 'Aplikuar';

$GLOBALS["lang"]['Approved'] = 'I miratuar';

$GLOBALS["lang"]['Approved Packages'] = 'Paketa të miratuara';

$GLOBALS["lang"]['April'] = 'Prill';

$GLOBALS["lang"]['Arabic'] = 'Arabisht';

$GLOBALS["lang"]['architecture'] = 'Arkitektura';

$GLOBALS["lang"]['Architecture'] = 'Arkitektura';

$GLOBALS["lang"]['Are you sure you want to delete this input item?'] = 'Jeni i sigurt që dëshironi të eleminoni këtë element?';

$GLOBALS["lang"]['Are you sure you want to delete this output item?'] = 'Jeni i sigurt që dëshiron të eleminosh këtë element output?';

$GLOBALS["lang"]['Are you sure?'] = 'Je i sigurt?';

$GLOBALS["lang"]['Are you sure? This will remove all queue entries and prevent the remaining IPs from being discovered.'] = 'Je i sigurt? Kjo do të heqë të gjithë zërat në rradhë dhe do të parandalojë zbulimin e IP-ve të mbetura.';

$GLOBALS["lang"]['Are you sure? This will reset the queue processing count and could cause load on the server.'] = 'Je i sigurt? Kjo do të rivendosë numërimin e përpunimit të rradhës dhe mund të shkaktojë ngarkimin në server.';

$GLOBALS["lang"]['area'] = 'Zona';

$GLOBALS["lang"]['Area'] = 'Zona';

$GLOBALS["lang"]['Argentina'] = 'Argjentinë';

$GLOBALS["lang"]['Armenia'] = 'Armeni';

$GLOBALS["lang"]['arp'] = 'Arp';

$GLOBALS["lang"]['Arp'] = 'Arp';

$GLOBALS["lang"]['Aruba'] = 'Aruba';

$GLOBALS["lang"]['As a reminder of how authorisations works in Open-AudIT, see'] = 'Si një përkujtues i asaj se si autorizimet punojnë në Open-AudIT, shiko';

$GLOBALS["lang"]['As a result, we <strong>must</strong> have the admin$ share available to the discovery credentials user. Please check the target Windows machine provides <i>write</i> access for the discovery credentials user.<br>'] = 'Si rezultat, ne <strong>duhet</strong> për. Ju lutem kontrolloni pajisjet e ndihmës Windows <i>shkruaj</i> për.<br/>';

$GLOBALS["lang"]['As mentioned above, the developers do not speak all the translation languages offered. This means we cannot review with acuracy, the translated text. We do try for a cursory review. If you see something that is not translated correctly, you can change it yourself. Edit the appropriate language file (as below) and find the text to be changed. Maybe it does not exist and you need to add it. Just change the text, save the file and refresh your we page. No need to restart any services/daemons for it to take effect. You might need to force refresh your browser.'] = 'Siç u përmend më sipër, zhvilluesit nuk flasin të gjitha gjuhët e përkthimit që ofrohen. Kjo do të thotë se nuk mund ta rishikojmë me saktësi tekstin e përkthyer. Ne përpiqemi për një rishikim kursor. Nëse sheh diçka që nuk përkthehet siç duhet, mund ta ndryshosh vetë. Ndrysho file gjuhësor (siç është edhe më poshtë) dhe gjej tekstin që duhet ndryshuar. Ndoshta nuk ekziston dhe duhet ta shtosh. Thjesht ndrysho tekstin, ruaje dosjen dhe rifresko faqen tënde. Nuk ka nevojë të rinisë ndonjë shërbim/daemon që të ketë efekt. Ndoshta duhet ta rifreskosh shfletuesin.';

$GLOBALS["lang"]['As per the OpenSCAP benchmarks - <i>Do not attempt to implement any of the settings in this benchmark without first testing them in a non-operational environment. The creators of this benchmark assume no responsibility whatsoever for its use by other parties, and makes no guarantees, expressed or implied, about its quality, reliability, or any other characteristic.</i><br><br>Seriously, do not blindly start <i>fixing</i> issues revealed after running a benchmark without first thoroughly testing in a non-production, identical environment.'] = 'Sa për provat e OpenSCAP - <i>Mos u përpiq të zbatosh ndonjë nga rregullimet në këtë standart pa i testuar ato së pari në një mjedis jo-bashkëpunues. Krijuesi i këtij standardi nuk merr asnjë përgjegjësi për përdorimin e tij nga partitë e tjera dhe nuk bën garanci, shprehur apo nënkuptuar, rreth cilësisë, besueshmërisë apo ndonjë karakteristikë tjetër.</i><br/><br/>Seriozisht, mos fillo verbërisht. <i>Duke rregulluar</i> Çështjet e zbuluara pas zbatimit të një standarti pa testuar së pari tërësisht në një mjedis jo-prodhues, identik.';

$GLOBALS["lang"]['As per the attributes for device environments. Production, Training, et al.'] = 'Sa për cilësitë për mjediset e pajisjeve. Prodhim, trajnim, etj.';

$GLOBALS["lang"]['As the audit script uses bash, you can use the wildcard of * when you are defining directories and exclusions.'] = 'Siç përdoret në skenarin e auditimit, mund të përdorni kasetën e egër të * kur përcaktoni directories dhe përjashtimet.';

$GLOBALS["lang"]['As usual, go to menu → Manage → Integrations → Create Integration. As above, if you are running on Linux and you have NMIS on the same server, you do not need to do anything other than click <i>Submit</i>. I cannot make it easier than that.'] = 'Si zakonisht, shkoni në menu → Menaxhoni → Integrimin → Krijoni integrimin. Si më sipër, nëse jeni duke punuar në Linux dhe keni NMIS në të njëjtin server, nuk keni nevojë të bëni asgjë tjetër përveç klikimit <i>Dërgo</i>. Nuk mund ta bëj më të lehtë se kaq.';

$GLOBALS["lang"]['As we run Discoveries and collect device results we populate the list of networks. The Blessed Subnets feature uses this list of networks to only accept data from devices on those networks.'] = 'Ndërsa bëjmë zbulime dhe mbledhim rezultatet e pajisjeve ne popullarizojmë listën e rrjeteve. Karakteristika e bekuar e Subnets përdor këtë listë rrjetesh për të pranuar vetëm të dhënat nga pajisjet në këto rrjete.';

$GLOBALS["lang"]['As you have Collectors registered, please choose where to execute this discovery.'] = 'Siç i keni regjistruar koleksionuesit, ju lutem zgjidhni ku ta ekzekutoni këtë zbulim.';

$GLOBALS["lang"]['Ask me later'] = 'Më pyet më vonë';

$GLOBALS["lang"]['Ask the Community for help or contribute answers for others.'] = 'Kërkoji ndihmë komunitetit ose jepu përgjigje të tjerëve.';

$GLOBALS["lang"]['aspect_ratio'] = 'Aspekte Ratio';

$GLOBALS["lang"]['Aspect Ratio'] = 'Aspekte Ratio';

$GLOBALS["lang"]['Asset ID'] = 'ID e asset';

$GLOBALS["lang"]['asset_ident'] = 'Ngushtim automatik';

$GLOBALS["lang"]['Asset Ident'] = 'Ngushtim automatik';

$GLOBALS["lang"]['asset_number'] = 'Numri i asetimit';

$GLOBALS["lang"]['Asset Number'] = 'Numri i asetimit';

$GLOBALS["lang"]['asset_tag'] = 'Asset Tag';

$GLOBALS["lang"]['Asset Tag'] = 'Asset Tag';

$GLOBALS["lang"]['Assign Device to Application'] = 'Cakto dispozitivin në aplikativ';

$GLOBALS["lang"]['Assign Device to Cluster'] = 'Caktoni pajisjen në ruster';

$GLOBALS["lang"]['Assign Device to Location'] = 'Cakto dispozitivin drejt pozicionit';

$GLOBALS["lang"]['Assign Device to Organisation'] = 'Cakto pajisjen tek organizata';

$GLOBALS["lang"]['Assign Devices to Location'] = 'Cakto pajisje drejt pozicionit';

$GLOBALS["lang"]['Assign Devices to Organisation'] = 'Cakto pajisje për organizimin';

$GLOBALS["lang"]['Assign an ISMS manager or team'] = 'Cakto një menazher ose ekip IMS';

$GLOBALS["lang"]['Assign an Operator'] = 'Cakto një Operator';

$GLOBALS["lang"]['Assign any audited devices to this Org. Leave blank to leave device in currently assigned Org (or to set default).'] = 'Cakton çdo mjet të audituar për këtë org. Dil bosh për të lënë një pajisje në Org (ose për të përcaktuar të prezgjedhurën).';

$GLOBALS["lang"]['Assign the Device to a Location'] = 'Caktoni dispozitivin në vendndodhjen';

$GLOBALS["lang"]['Assign the device to an Org'] = 'Caktone pajisjen në një org';

$GLOBALS["lang"]['Assigned To'] = 'Caktuar';

$GLOBALS["lang"]['Assigning Discovered Devices'] = 'Vendos pajisje të zbuluara';

$GLOBALS["lang"]['At present we can use netstat_ports, software and users.'] = 'Tani mund të përdorim rrjetat_portet, programet dhe përdoruesit.';

$GLOBALS["lang"]['attached_device_id'] = 'ID e dispozitivit të bashkangjitur';

$GLOBALS["lang"]['Attached Device ID'] = 'ID e dispozitivit të bashkangjitur';

$GLOBALS["lang"]['attached_to'] = 'Për';

$GLOBALS["lang"]['Attached To'] = 'Për';

$GLOBALS["lang"]['attachment'] = 'I bashkëngjitur';

$GLOBALS["lang"]['Attachment'] = 'I bashkëngjitur';

$GLOBALS["lang"]['attachments'] = 'Të bashkëngjitur';

$GLOBALS["lang"]['Attachments'] = 'Të bashkëngjitur';

$GLOBALS["lang"]['attack_complexity'] = 'Kompleksiteti i sulmit';

$GLOBALS["lang"]['Attack Complexity'] = 'Kompleksiteti i sulmit';

$GLOBALS["lang"]['attack_requirements'] = 'Kërkesat për sulm';

$GLOBALS["lang"]['Attack Requirements'] = 'Kërkesat për sulm';

$GLOBALS["lang"]['attack_vector'] = 'Sulmo Vektor';

$GLOBALS["lang"]['Attack Vector'] = 'Sulmo Vektor';

$GLOBALS["lang"]['Attempt to ping the device if we are not auditing localhost.'] = 'Përpiqemi ta marrim pajisjen nëse nuk po kontrollojmë mikpritësin lokal.';

$GLOBALS["lang"]['Attribute'] = 'Pronësi';

$GLOBALS["lang"]['attributes'] = 'Veçoritë';

$GLOBALS["lang"]['Attributes'] = 'Veçoritë';

$GLOBALS["lang"]['Attributes are stored for Open-AudIT to use for particular fields, at present all fields are based on the devices, locations, orgs and queries tables. The attributes you can edit are associated with the following columns: Class, Environment, Status & Type.'] = 'Veçoritë janë ruajtur që Open-AudIT t\'i përdorë për fusha të veçanta, tani të gjitha fushat janë të bazuara në pajisje, vende, orgs dhe tavolinat e karteve. Veçoritë që mund të ndryshoni janë të shoqëruara me kollonat në vazhdim: Klasa, Mjedisi, Gjendja & Lloji.';

$GLOBALS["lang"]['Audit'] = 'Kontrollo';

$GLOBALS["lang"]['Audit AIX'] = 'Audit AIX';

$GLOBALS["lang"]['Audit DNS'] = 'DNS Audit';

$GLOBALS["lang"]['Audit ESXi'] = 'Audit ESXi';

$GLOBALS["lang"]['Audit Linux'] = 'Audit Linux';

$GLOBALS["lang"]['audit_log'] = 'Log';

$GLOBALS["lang"]['Audit Log'] = 'Log';

$GLOBALS["lang"]['Audit Mount Point'] = 'Pika e kontrollit';

$GLOBALS["lang"]['Audit My PC'] = 'Kontrollo kompjuterin';

$GLOBALS["lang"]['Audit Netstat'] = 'Netstat i Kontrollit';

$GLOBALS["lang"]['Audit OSX'] = 'Audit OSX';

$GLOBALS["lang"]['Audit Result Input'] = 'Input i kontrollit';

$GLOBALS["lang"]['Audit Software'] = 'Program i Kontrollit';

$GLOBALS["lang"]['Audit Status'] = 'Gjëndja e kontrollit';

$GLOBALS["lang"]['Audit Win32 Product'] = 'Audit Uin32 Produkti';

$GLOBALS["lang"]['Audit Windows'] = 'Dritare Audit';

$GLOBALS["lang"]['Audit the Device'] = 'Kontrollo dispozitivin';

$GLOBALS["lang"]['Audits'] = 'Kontrolle';

$GLOBALS["lang"]['August'] = 'Gusht';

$GLOBALS["lang"]['Australia'] = 'Australi';

$GLOBALS["lang"]['Austria'] = 'Austri';

$GLOBALS["lang"]['Auth'] = 'Kërkohet';

$GLOBALS["lang"]['auth'] = 'Kërkohet';

$GLOBALS["lang"]['Auth Methods'] = 'Metodat e autorizimit';

$GLOBALS["lang"]['Authenticate only'] = 'Vetëm autentifikimi';

$GLOBALS["lang"]['Authentication Passphrase'] = 'Identifikimi';

$GLOBALS["lang"]['Authentication Protocol'] = 'Protokolli i identifikimit';

$GLOBALS["lang"]['authority_key_ident'] = 'Identifikimi i kyçit';

$GLOBALS["lang"]['Authority Key Ident'] = 'Identifikimi i kyçit';

$GLOBALS["lang"]['Auto'] = 'Auto';

$GLOBALS["lang"]['auto_renew'] = 'Automatike';

$GLOBALS["lang"]['Auto Renew'] = 'Automatike';

$GLOBALS["lang"]['Auto populated by the Open-AudIT Server.'] = 'Auto e populluar nga Serveri Open-AudIT.';

$GLOBALS["lang"]['AutoRenew'] = 'Automatike';

$GLOBALS["lang"]['automatable'] = 'Automatize';

$GLOBALS["lang"]['Automatable'] = 'Automatize';

$GLOBALS["lang"]['Automatically populated based on the Collectors OS.'] = 'I populluar automatikisht bazuar në koleksionistët OS.';

$GLOBALS["lang"]['availability'] = 'Avatura';

$GLOBALS["lang"]['Availability'] = 'Avatura';

$GLOBALS["lang"]['Available Benchmarks'] = 'Në dispozicion';

$GLOBALS["lang"]['Awaiting Analysis'] = 'Presin analizën';

$GLOBALS["lang"]['Azerbaijan'] = 'Azerbaixhani';

$GLOBALS["lang"]['Azerbaijani'] = 'Azerbaixhani';

$GLOBALS["lang"]['Azure Active Directory'] = 'Azure Aktiv Directory';

$GLOBALS["lang"]['BTU Max'] = 'BTU Max';

$GLOBALS["lang"]['BTU Total'] = 'Totali BTU';

$GLOBALS["lang"]['Backbone network'] = 'Rrjeti backbone';

$GLOBALS["lang"]['Backup'] = 'Backup (kopje)';

$GLOBALS["lang"]['Bahamas the'] = 'Bahamas';

$GLOBALS["lang"]['Bahrain'] = 'Bahrein';

$GLOBALS["lang"]['Bangladesh'] = 'Bangladesh';

$GLOBALS["lang"]['bank'] = 'Banka';

$GLOBALS["lang"]['Bank'] = 'Banka';

$GLOBALS["lang"]['Banned'] = 'Ndaluar';

$GLOBALS["lang"]['Banned Packages'] = 'Paketa të ndaluara';

$GLOBALS["lang"]['bar_code'] = 'Kodi Bar';

$GLOBALS["lang"]['Bar Code'] = 'Kodi Bar';

$GLOBALS["lang"]['Barbados'] = 'Barbados';

$GLOBALS["lang"]['Base DN'] = 'Bazë';

$GLOBALS["lang"]['base_score'] = 'Pikë';

$GLOBALS["lang"]['Base Score'] = 'Pikë';

$GLOBALS["lang"]['base_severity'] = 'Severity bazë';

$GLOBALS["lang"]['Base Severity'] = 'Severity bazë';

$GLOBALS["lang"]['based_on'] = 'Bazuar në';

$GLOBALS["lang"]['Based On'] = 'Bazuar në';

$GLOBALS["lang"]['baseline'] = 'Linja';

$GLOBALS["lang"]['Baseline'] = 'Linja';

$GLOBALS["lang"]['baseline_id'] = 'ID bazë';

$GLOBALS["lang"]['Baseline ID'] = 'ID bazë';

$GLOBALS["lang"]['baselines'] = 'Linja';

$GLOBALS["lang"]['Baselines'] = 'Linja';

$GLOBALS["lang"]['baselines_policies'] = 'Bazat kryesore';

$GLOBALS["lang"]['Baselines Policies'] = 'Bazat kryesore';

$GLOBALS["lang"]['Baselines Policy'] = 'Politika bazë';

$GLOBALS["lang"]['Baselines Policy Details'] = 'Bazë';

$GLOBALS["lang"]['baselines_results'] = 'Rezultatet bazë';

$GLOBALS["lang"]['Baselines Results'] = 'Rezultatet bazë';

$GLOBALS["lang"]['Baselines can compare netstat ports, users and software.'] = 'Bazat mund të krahasojnë portet e rrjetave, përdoruesit dhe programet kompjuterike.';

$GLOBALS["lang"]['Baselines enable you to combine audit data with a set of attributes you have previously defined (your baseline) to determine compliance of devices.'] = 'Bazat ju japin mundësi të kombinoni të dhënat e auditimit me një sërë atributesh që keni përcaktuar më parë (baza juaj) për të përcaktuar përputhjen e pajisjeve.';

$GLOBALS["lang"]['Baselines for Device Comparison'] = 'Linjat bazë për krahasimin me pajisjen';

$GLOBALS["lang"]['Basic'] = 'Bazë';

$GLOBALS["lang"]['Basque'] = 'Baske';

$GLOBALS["lang"]['Because we try to be as transparent as possible, here is your actual data that we send.'] = 'Sepse ne përpiqemi të jemi sa më transparentë që të jetë e mundur, ja ku janë të dhënat e tua që dërgojmë.';

$GLOBALS["lang"]['Being able to determine which machines are configured in the same way is a major part of systems administration and auditing – and now reporting on that will be made simple and automated. Once you define your baseline it will automatically run against a set of devices on a predetermined schedule. The output of these executed baselines will be available for web viewing, importing into a third party system or even as a printed report.<br><br>For auditing and management purposes it can be advantageous to baseline individual devices against a fixed, known good device. Baselines enable you to combine audit data with a set of attributes you have previously defined (your baseline) to determine compliance of devices.'] = 'Të qenët në gjendje për të përcaktuar se cilat makineri janë konfiguruar në të njëjtën mënyrë është një pjesë kryesore e administratës së sistemeve dhe kontrollimit ⇩ dhe tani raportimi mbi këtë do të bëhet i thjeshtë dhe automatizuar. Sapo të përcaktoni bazën tuaj, automatikisht do të niset kundër një sërë pajisjesh në një program të paracaktuar. Prodhimi i këtyre bazave të ekzekutuara do të jetë në dispozicion për shikimin e internetit, importimin në një sistem të tretë partie ose edhe si një raport i shtypur.<br/><br/>Për kontrollim dhe qëllime menaxhimi, mund të jetë dobiprurëse të bazosh pajisje individuale kundër një pajisjeje të mirë fikse e të njohur. Bazat ju japin mundësi të kombinoni të dhënat e auditimit me një sërë atributesh që keni përcaktuar më parë (baza juaj) për të përcaktuar përputhjen e pajisjeve.';

$GLOBALS["lang"]['Belarus'] = 'Bjellorusi';

$GLOBALS["lang"]['Belgium'] = 'Belgjikë';

$GLOBALS["lang"]['Belize'] = 'Belize';

$GLOBALS["lang"]['Below is an example of the required csv format.'] = 'Poshtë është një shembull i formatit të kërkuar csv.';

$GLOBALS["lang"]['Below these lines are where the variables are injected into the script. Following on from our earlier example, the Linux audit script is populated with our directory like so'] = 'Poshtë këto rreshta janë duke u injektuar në script-in. Duke ndjekur nga shembulli ynë i mëparshëm, skenari i kontrollit Linux është i populluar me një directory të tillë';

$GLOBALS["lang"]['Below you can see an example Org Chart. If a user has permission on the <i>Finance A</i> Org, they also have permission on the descendant Orgs of Dept A, B & C. This is regardless of the collection requested.<br><br>If the collection requested allows ascendants, then the user will also have access to Company #1 and Default Org items. This is for (as above) queries, groups, et al.<br><br>Note - A user may have access to a query from Default Org, but that is the query itself not the result. The result will only show devices that the user has access to - IE devices from Finance A and Dept A, B & C.'] = 'Poshtë mund të shihni një hartë të Orgut. Nëse një përdorues ka leje tek <i>Financë A</i> Org, ata kanë gjithashtu leje për pasardhësin Orgs të Dept A, B & C. Kjo është pavarësisht nga mbledhja e kërkuar.<br/><br/>Nëse koleksioni kërkon hyrje, atëherë përdoruesi do të ketë gjithashtu hyrje në kompaninë1 dhe sende të prezgjedhura Org. Kjo është për ata që nuk janë nga Mekka.<br/><br/>Shënim - Një përdorues mund të ketë mundësi të marrë një kërkesë nga Orgu i paracaktuar, por kjo është vetë kërkesa jo rezultat. Rezultati do të tregojë vetëm pajisje që përdoruesi ka qasje në - IE pajisje nga Financimi A dhe Dept A, B & C.';

$GLOBALS["lang"]['Benchmark'] = 'Benchmarke';

$GLOBALS["lang"]['benchmark_id'] = 'ID e Benchmark';

$GLOBALS["lang"]['Benchmark ID'] = 'ID e Benchmark';

$GLOBALS["lang"]['Benchmark Tasks are created automatically when a benchmark is created.'] = 'Detyrat bazë krijohen automatikisht kur krijohet një provë.';

$GLOBALS["lang"]['Benchmark execution and processing can take a lengthy amount of time, hence the preference to schedule them and not run them ad-hoc.'] = 'Ekzekutimi dhe përpunimi i Benchmark mund të marrë një kohë të gjatë, kështu që preferenca për t\'i programuar ato dhe për të mos i drejtuar ato ad-hoc.';

$GLOBALS["lang"]['benchmarks'] = 'Benchmarkes';

$GLOBALS["lang"]['Benchmarks'] = 'Benchmarkes';

$GLOBALS["lang"]['benchmarks_exceptions'] = 'Përjashtime';

$GLOBALS["lang"]['Benchmarks Exceptions'] = 'Përjashtime';

$GLOBALS["lang"]['benchmarks_log'] = 'Log';

$GLOBALS["lang"]['Benchmarks Log'] = 'Log';

$GLOBALS["lang"]['benchmarks_policies'] = 'Benchmarkes Policies';

$GLOBALS["lang"]['Benchmarks Policies'] = 'Benchmarkes Policies';

$GLOBALS["lang"]['benchmarks_result'] = 'Rezultati';

$GLOBALS["lang"]['Benchmarks Result'] = 'Rezultati';

$GLOBALS["lang"]['Benchmarks are created by providing an operating system and Version, combined with a specific guide and a list of machines to execute it upon. After creation, benchmarks are executed against the list of machines on a schedule.'] = 'Benchmarks krijohen duke siguruar një sistem operativ dhe Version, të kombinuar me një udhëzues specifik dhe një listë makinerish për ta ekzekutuar. Pas krijimit, provat ekzekutohen kundër listës së makinave në një program.';

$GLOBALS["lang"]['Benchmarks for Best Practise Configuration'] = 'Benchmarkes për konfigurimin më të mirë të procedimit';

$GLOBALS["lang"]['Benchmarks provide security recommendations for your computers, utilising the OpenSCAP tools and policies.</p><p><i>From the OpenSCAP homepage:</i>  In the ever-changing world of computer security where new vulnerabilities are being discovered and patched every day, enforcing security compliance must be a continuous process. It also needs to include a way to make adjustments to policies, as well as periodic assessment and risk monitoring. The OpenSCAP ecosystem provides tools and customizable policies for a quick, cost-effective and flexible implementation of these processes.'] = 'Benchmarkes ofrojnë rekomandime sigurie për kompjuterat tuaj, përdorimin e mjeteve dhe politikave OpenSCAP.<p><i>Nga faqja home e OpenSCAP:</i> Në botën gjithnjë në ndryshim të sigurisë kompjuterike ku janë zbuluar dobësi të reja dhe janë rregulluar çdo ditë, zbatimi i zbatimit të sigurisë duhet të jetë një proces i vazhdueshëm. Ai duhet gjithashtu të përfshijë një mënyrë për të bërë rregullime ndaj politikave si dhe vlerësimin periodik dhe mbikqyrjen e rrezikut. ekosistemi OpenSCAP siguron mjete dhe politika të personalizuara për një zbatim të shpejtë, efektiv dhe fleksibël të këtyre proceseve.</p>';

$GLOBALS["lang"]['Benefits'] = 'Dobitë';

$GLOBALS["lang"]['Bengali'] = 'Bengali';

$GLOBALS["lang"]['Benin'] = 'Benin';

$GLOBALS["lang"]['Bermuda'] = 'Bermuda';

$GLOBALS["lang"]['best_practises'] = 'Praktikat më të mira';

$GLOBALS["lang"]['Best Practises'] = 'Praktikat më të mira';

$GLOBALS["lang"]['Bhutan'] = 'Bhutan';

$GLOBALS["lang"]['bios'] = 'Bio';

$GLOBALS["lang"]['Bios'] = 'Bio';

$GLOBALS["lang"]['body'] = 'Trupi';

$GLOBALS["lang"]['Body'] = 'Trupi';

$GLOBALS["lang"]['Bolivia'] = 'Bolivi';

$GLOBALS["lang"]['Boolean'] = 'Boolean';

$GLOBALS["lang"]['Boolean 1/0'] = 'Boolean 1/0';

$GLOBALS["lang"]['Boolean y/n'] = 'Boolean y/n';

$GLOBALS["lang"]['boot_device'] = 'Dispozitivi i Butit';

$GLOBALS["lang"]['Boot Device'] = 'Dispozitivi i Butit';

$GLOBALS["lang"]['bootable'] = 'E thjeshtë';

$GLOBALS["lang"]['Bootable'] = 'E thjeshtë';

$GLOBALS["lang"]['Bosnia and Herzegovina'] = 'Bosnje dhe Herzegovina';

$GLOBALS["lang"]['Both forms of'] = 'Të dyja format e';

$GLOBALS["lang"]['Botswana'] = 'Botsvana';

$GLOBALS["lang"]['Bouvet Island (Bouvetoya)'] = 'Ishulli Bouvet (Bu vetoja)';

$GLOBALS["lang"]['Brazil'] = 'Brazil';

$GLOBALS["lang"]['Brazilian Portuguese'] = 'Portugeze braziliane';

$GLOBALS["lang"]['Breaking it Down'] = 'Ta shembim';

$GLOBALS["lang"]['British Indian Ocean Territory (Chagos Archipelago)'] = 'Territori i Oqeanit Indian Britanik (Chagos Arkipelago)';

$GLOBALS["lang"]['British Virgin Islands'] = 'Ishujt Virgjër britanikë';

$GLOBALS["lang"]['Browse down the tree to Console Root -> Component Services -> Computers -> My Computer<br><br>Right click on <i>My Computer</i> and select properties<br><br>Select the <i>Default Properties</i> tab'] = 'Shfletone pemen ne Konsol Root -> Komponenti Shërbimet -> Kompjuterët -> Kompjuteri im<br/><br/>Djathtas kliko tek <i>Kompjuteri im</i> dhe pronësitë<br/><br/>Zgjidh <i>Pronësitë e prezgjedhur</i> skedë';

$GLOBALS["lang"]['Brunei Darussalam'] = 'Brunei Darussalam';

$GLOBALS["lang"]['btu_max'] = 'Btu Max';

$GLOBALS["lang"]['Btu Max'] = 'Btu Max';

$GLOBALS["lang"]['btu_total'] = 'Totali';

$GLOBALS["lang"]['Btu Total'] = 'Totali';

$GLOBALS["lang"]['build_number'] = 'Numri i gjenerimit';

$GLOBALS["lang"]['Build Number'] = 'Numri i gjenerimit';

$GLOBALS["lang"]['build_number_full'] = 'Grupi';

$GLOBALS["lang"]['Build Number Full'] = 'Grupi';

$GLOBALS["lang"]['Building'] = 'Ndërtesa';

$GLOBALS["lang"]['Builds trust with clients and partners'] = 'Ndërton besimin me klientët dhe partnerët';

$GLOBALS["lang"]['Bulgaria'] = 'Bullgari';

$GLOBALS["lang"]['Bulgarian'] = 'Bullgarisht';

$GLOBALS["lang"]['Bulk Edit'] = 'Bulk Edit';

$GLOBALS["lang"]['Bulk Edit Form'] = 'Formues i përpunimit';

$GLOBALS["lang"]['Bulk Editing Device Attributes'] = 'Ndryshojnë Veçoritë e pajisjeve';

$GLOBALS["lang"]['Bulk edit selections wont stay selected after clicking next page.'] = 'Kontrolli i përzgjedhjeve nuk do të mbetet i zgjedhur mbas klikimit në faqen tjetër.';

$GLOBALS["lang"]['Burkina Faso'] = 'Burkina Faso';

$GLOBALS["lang"]['Burundi'] = 'Burundi';

$GLOBALS["lang"]['business_requirements'] = 'Kërkesat për biznes';

$GLOBALS["lang"]['Business Requirements'] = 'Kërkesat për biznes';

$GLOBALS["lang"]['But I Only Have Windows Client Machines Available!'] = 'Por kam në dispozicion vetëm Makinerat Windows të Klientëve!';

$GLOBALS["lang"]['But I do not want to have to change the language file every time I update!'] = 'Por nuk dua ta ndryshoj dosjen e gjuhës sa herë që e përditësoj!';

$GLOBALS["lang"]['Buy'] = 'Bli';

$GLOBALS["lang"]['Buy More'] = 'Bli më shumë';

$GLOBALS["lang"]['Buy More Licenses'] = 'Bli licensa të tjera';

$GLOBALS["lang"]['By'] = 'Nga';

$GLOBALS["lang"]['By default we integrate all devices with their nmis_manage attribute set to <i>y</i>. With 4.2.0 we also ship a Rule that says <i>If we discover a device and it has a valid SNMP OID, mark that device as managed by NMIS</i>. Obviously you can disable this if it is not what you want.'] = 'Në menyrë të paracaktuar i integrojmë të gjitha pajisjet me atributin e tyre nmis_menage <i>p</i>. Me 4.2.0 gjithashtu kemi një rregull që thotë <i>Nëse zbulojmë një pajisje dhe ka një OID të vlefshëm SNSMP, shëno atë pajisje si të drejtuar nga NMIS</i>. Sigurisht që mund ta çaktivizosh këtë nëse nuk është ajo që do.';

$GLOBALS["lang"]['By default, we skip certificate validation because customers tend to use self-signed certificates. To enable certificate validation, edit the file below'] = 'Në mënyrë të paracaktuar, ne e kapërcejmë vlefshmërinë e certifikatës sepse klientët priren të përdorin certifikatat e vetë-firmuara. Për të aktivizuar verifikimin e çertifikatës, ndrysho file më poshtë';

$GLOBALS["lang"]['CIDR'] = 'CIDR';

$GLOBALS["lang"]['CIDR Mask'] = 'CIDR Maska';

$GLOBALS["lang"]['cli_config'] = 'CLI Konfigurim';

$GLOBALS["lang"]['CLI Config'] = 'CLI Konfigurim';

$GLOBALS["lang"]['CPU'] = 'CPU';

$GLOBALS["lang"]['CPUs'] = 'CPUs';

$GLOBALS["lang"]['CSV'] = 'CSV';

$GLOBALS["lang"]['CVE'] = 'CVE';

$GLOBALS["lang"]['CVEs with a status of received, awaiting analysis, undergoing analysis, rejected. These CVEs (mostly) do not contain sufficient information to enable us to generate a correct SQL query.'] = 'CVE me një status të marrë, në pritje të analizës, duke iu nënshtruar analizave, nuk u pranua. Këto CVE (më së shumti) nuk përmbajnë informacion të mjaftueshëm për të na mundësuar të krijojmë një kërkesë korrekte SQL.';

$GLOBALS["lang"]['Calculated from discovery.'] = 'Të llogaritur nga zbulimi.';

$GLOBALS["lang"]['Calculated total number of valid IP addresses for this network.'] = 'Numri i përgjithshëm i adresave të vlefshme IP për këtë rrjet.';

$GLOBALS["lang"]['Calculated upon completion, the time taken to execute this item.'] = 'Llogaritur pas përfundimit, koha e marrë për të ekzekutuar këtë element.';

$GLOBALS["lang"]['Calculated when integration is run and contains a JSON representation of the devices in this integration. Each links to <code>devices.id</code>.'] = 'Llogaritur kur integrimi drejtohet dhe përmban një përfaqësim të pajisjeve në këtë integrim. Çdo lidhje me <code>devices.id</code>.';

$GLOBALS["lang"]['Calculated when integration is run and contains a JSON representation of the locations in this integration. Each links to <code>locations.id</code>.'] = 'Llogaritur kur integrimi drejtohet dhe përmban një përfaqësim të vendeve në këtë integrim. Çdo lidhje me <code>locations.id</code>.';

$GLOBALS["lang"]['Calculated when integration is run and contains the number of devices selected from Open-AudIT.'] = 'Llogaritur kur integrimi është ekzekutuar dhe përmban numrin e pajisjeve të zgjedhura nga Open-AudIT.';

$GLOBALS["lang"]['Calculated when integration is run and contains the number of devices selected the external system.'] = 'Llogaritur kur integrimi është ekzekutuar dhe përmban numrin e pajisjeve të zgjedhura të sistemit të jashtëm.';

$GLOBALS["lang"]['Calculated when integration is run and contains the number of devices to be updated in the external system.'] = 'Llogaritur kur integrimi është ekzekutuar dhe përmban numrin e pajisjeve që do të rifreskohen në sistemin e jashtëm.';

$GLOBALS["lang"]['Calculated when integration is run and contains the number of devices updated in Open-AudIT.'] = 'Llogaritur kur integrimi është në funksionim dhe përmban numrin e pajisjeve të përditësuara në Open-AudIT.';

$GLOBALS["lang"]['Call up a command prompt by clicking Start and searching for <code>command</code>'] = 'Thirrje për a nga dhe <code>command</code>';

$GLOBALS["lang"]['Cambodia'] = 'Kamboxhia';

$GLOBALS["lang"]['Cameroon'] = 'Kamerun';

$GLOBALS["lang"]['Campus Area Network'] = 'Rrjeti i Zonave Kampus';

$GLOBALS["lang"]['Campus area network'] = 'Rrjeti i zonës së Kampusit';

$GLOBALS["lang"]['Can be  <code>active</code>, <code>passive</code> or blank.'] = 'Mund të jetë <code>active</code>. <code>passive</code> ose bosh.';

$GLOBALS["lang"]['Can be <code>application</code>, <code>compute</code>, <code>database</code>, <code>storage</code>, <code>virtualisation</code>, <code>web</code>, <code>other</code> or blank.'] = 'Mund të jetë <code>application</code>. <code>compute</code>. <code>database</code>. <code>storage</code>. <code>virtualisation</code>. <code>web</code>. <code>other</code> ose bosh.';

$GLOBALS["lang"]['Can be <code>auto</code>, <code>fixed</code>, <code>other</code> or blank.'] = 'Mund të jetë <code>auto</code>. <code>fixed</code>. <code>other</code> ose bosh.';

$GLOBALS["lang"]['Can be <code>high availability</code>, <code>load balancing</code>, <code>performance</code>, <code>storage</code>, <code>other</code> or blank.'] = 'Mund të jetë <code>high availability</code>. <code>load balancing</code>. <code>performance</code>. <code>storage</code>. <code>other</code> ose bosh.';

$GLOBALS["lang"]['Can be <code>line</code>, <code>pie</code> or <code>traffic</code>.'] = 'Mund të jetë <code>line</code>. <code>pie</code> ose <code>traffic</code>.';

$GLOBALS["lang"]['Can be <code>user</code> or <code>collector</code>.'] = 'Mund të jetë <code>user</code> ose <code>collector</code>.';

$GLOBALS["lang"]['Can be set by discovery or user.'] = 'Mund të vendoset me anë të zbulimit ose të përdoruesit.';

$GLOBALS["lang"]['Can be set by discovery or user. Uses the ID from the locations table.'] = 'Mund të vendoset me anë të zbulimit ose të përdoruesit. Përdor ID nga pozicioni në tabelë.';

$GLOBALS["lang"]['Can the user edit this item.'] = 'nga përdorues ndrysho element.';

$GLOBALS["lang"]['Canada'] = 'Kanada';

$GLOBALS["lang"]['Cancel'] = 'Anullo';

$GLOBALS["lang"]['capabilities'] = 'Kapalitete';

$GLOBALS["lang"]['Capabilities'] = 'Kapalitete';

$GLOBALS["lang"]['Capacity'] = 'Kapaciteti';

$GLOBALS["lang"]['Cape Verde'] = 'Kepi Verde';

$GLOBALS["lang"]['Capitalise'] = 'Kapitaliz';

$GLOBALS["lang"]['caption'] = 'Titull';

$GLOBALS["lang"]['Caption'] = 'Titull';

$GLOBALS["lang"]['Catalan'] = 'Katalane';

$GLOBALS["lang"]['Cayman Islands'] = 'Ishujt Kajman';

$GLOBALS["lang"]['Cellular Details'] = 'Detajet qelizore';

$GLOBALS["lang"]['Central African Republic'] = 'Republika e Afrikës Qendrore';

$GLOBALS["lang"]['certificate'] = 'Çertifikatë';

$GLOBALS["lang"]['Certificate'] = 'Çertifikatë';

$GLOBALS["lang"]['certificate_file'] = 'Çertifikata';

$GLOBALS["lang"]['Certificate File'] = 'Çertifikata';

$GLOBALS["lang"]['certificate_name'] = 'Emri i çertifikatës';

$GLOBALS["lang"]['Certificate Name'] = 'Emri i çertifikatës';

$GLOBALS["lang"]['certificates'] = 'Çertifikimet';

$GLOBALS["lang"]['Certificates'] = 'Çertifikimet';

$GLOBALS["lang"]['Certification'] = 'Çertifikata';

$GLOBALS["lang"]['Certification Audit'] = 'Kontrolli i verifikimit';

$GLOBALS["lang"]['Certification Process'] = 'Çertifikata';

$GLOBALS["lang"]['Chad'] = 'Çad';

$GLOBALS["lang"]['Change'] = 'Ndrysho';

$GLOBALS["lang"]['change_id'] = 'Ndrysho ID';

$GLOBALS["lang"]['Change ID'] = 'Ndrysho ID';

$GLOBALS["lang"]['change_log'] = 'Ndrysho Log';

$GLOBALS["lang"]['Change Log'] = 'Ndrysho Log';

$GLOBALS["lang"]['Change Logs'] = 'Ndrysho logs';

$GLOBALS["lang"]['change_type'] = 'Ndrysho Lloji';

$GLOBALS["lang"]['Change Type'] = 'Ndrysho Lloji';

$GLOBALS["lang"]['check_minutes'] = 'Kontrolli minuta';

$GLOBALS["lang"]['Check Minutes'] = 'Kontrolli minuta';

$GLOBALS["lang"]['Check for SSH on these ports'] = 'Kontrolloni për SSH në këto porte';

$GLOBALS["lang"]['Check this port for any SSH service.'] = 'Kontrolloni këtë port për çdo shërbim SSH.';

$GLOBALS["lang"]['Chile'] = 'Kili';

$GLOBALS["lang"]['China'] = 'Kinë';

$GLOBALS["lang"]['Chinese'] = 'Kineze';

$GLOBALS["lang"]['Chinese (traditional)'] = 'Kineze';

$GLOBALS["lang"]['Choose'] = 'Zgjidh';

$GLOBALS["lang"]['Choose (select OS first)'] = 'Zgjidh i pari';

$GLOBALS["lang"]['Choose a Device'] = 'Zgjidh një dispozitiv';

$GLOBALS["lang"]['Choose a Table'] = 'Zgjidh një tabelë';

$GLOBALS["lang"]['Choose the type of the task from the first drop down. This will configure the additional fields required depending on the type of task.'] = 'Zgjidh llojin e detyrës nga pika e parë poshtë. Kjo do të konfigurojë fushat shtesë të kërkuara në varësi të llojit të detyrës.';

$GLOBALS["lang"]['Christmas Island'] = 'Ishulli Kristmas';

$GLOBALS["lang"]['cidr'] = 'Cidri';

$GLOBALS["lang"]['Cidr'] = 'Cidri';

$GLOBALS["lang"]['circuit_count'] = 'Numërim qarkor';

$GLOBALS["lang"]['Circuit Count'] = 'Numërim qarkor';

$GLOBALS["lang"]['circuit_status'] = 'Gjendja e qarkut';

$GLOBALS["lang"]['Circuit Status'] = 'Gjendja e qarkut';

$GLOBALS["lang"]['city'] = 'Qyteti';

$GLOBALS["lang"]['City'] = 'Qyteti';

$GLOBALS["lang"]['class'] = 'Klasa';

$GLOBALS["lang"]['Class'] = 'Klasa';

$GLOBALS["lang"]['class_text'] = 'Klasa';

$GLOBALS["lang"]['Class Text'] = 'Klasa';

$GLOBALS["lang"]['Click <i>New client secret</i>.'] = 'Klik <i>Gabim i ri klient</i>.';

$GLOBALS["lang"]['Click Submit to Execute'] = 'Kliko Le të ekzekutojë';

$GLOBALS["lang"]['Click on <i>Properties</i> under the <i>Manage</i> header in the central menu column. Copy the <i>User Access URL</i>. Once copied, paste it into yout text editor. You will need to copy one section of this field.<br><br>Our example field looks like this<br><code>https://launcher.myapps.microsoft.com/api/signin/5d97003c-g24b-346e-9932-77db6470b939?tenantId=cf406343-1a96-4f7c-0cc6-46e86dddabf3</code>.<br><br>The section we need is <code>cf406343-1a96-4f7c-0cc6-46e86dddabf3</code> (the tenant ID). This is used in Open-AudIT as the <i>Tenant</i> field, so paste it in there.'] = 'Kliko mbi <i>Pronësitë</i> Poshtë <i>Menaxho</i> Titull në kollonën qendrore të menusë. Kopjo <i>Përdoruesi</i>. Pasi kopjoi, ngjite në editor teksti. Ju duhet të kopjoni një seksion të kësaj fushe.<br/><br/>Fusha jonë e shembullit duket kështu<br/><code>https://launcher.myapps.microsoft.com/api/signin/5d97003c-g24b-346e-9932-77db6470b939?tenantId=cf406343-1a96-4f7c-0cc6-46e86dddabf3</code>.<br/><br/>Pjesa që na duhet është <code>cf406343-1a96-4f7c-0cc6-46e86dddabf3</code> ( ID qiramarrëse). Kjo përdoret në Open-AudIT si <i>Tenant</i> Fusha, pra ngjite aty.';

$GLOBALS["lang"]['Click on App Registrations to create a new Application, then click New Application Registration. Give it a name (I used Open-AudIT), select Web app / API as the type and provide any URL (the URL is not important) and now click Create.'] = 'Kliko në App Records për të krijuar një aplikativ të ri, pastaj kliko Regjistrim të Programeve të Re. Jepi një emër (Unë përdora Open-AudIT), zgjidha aplikacionin web /API si lloj dhe dhashë çdo URL ( URL nuk është e rëndësishme) dhe tani kliko tek Krijo.';

$GLOBALS["lang"]['Click on OK and close the DCOMCNFG window.<br><br>The above changes will require a reboot to take effect.'] = 'Kliko mbi OK dhe mbyll dritaren DCOMCNFG.<br/><br/>Ndryshimet e mësipërme do të kërkojnë një rifillim që të ketë efekt.';

$GLOBALS["lang"]['Click on the application you just created. The Application ID displayed is the Client ID.<br><br>To create the client secret, click Settings, then Keys. Provide a key name and select an appropriate expiry date, then click Save.<br><br>The value will be populated for you - this is the Client Secret.'] = 'Kliko mbi programin që sapo krijove. ID e aplikativit të shfaqur është ID e klientit.<br/><br/>Për të krijuar sekretin e klientit, kliko Rregullimet, pastaj çelësat. Jep një emër kyç dhe zgjidh një datë të përshtatshme skadencash, pastaj kliko Ruaj.<br/><br/>Vlera do të popullohet për ju - ky është sekreti i klientit.';

$GLOBALS["lang"]['Click the Delete button to remove the example devices from Open-AudIT.<br>This will remove the below devices from the database. '] = 'Shtyp pulsantin e eleminuar për të hequr dispozitivin e shembullit nga Open-AudIT.<br/>Kjo do të heqë pajisjet e mëposhtme nga databaza. ';

$GLOBALS["lang"]['Click the Edit button for <i>Basic SAML Configuration</i>.'] = 'Kliko butonin _Ndrysho <i>Bazë Konfigurimi i Mail</i>.';

$GLOBALS["lang"]['Click the Import button below to populate Open-AudIT with example device data.'] = 'Kliko butonin e importimit më poshtë për të popullarizuar Open-AudIT me të dhëna për dispozitivin e shembullit.';

$GLOBALS["lang"]['Click the icon to the right of the field you wish to edit. Change the field and click the green icon to submit.'] = 'Kliko ikonë në të djathtë të fushës ku dëshironi të ndryshoni. Ndrysho fushën dhe kliko ikonën jeshile për t\'u dorëzuar.';

$GLOBALS["lang"]['Client ID'] = 'ID e klientit';

$GLOBALS["lang"]['Client ID and Secret'] = 'ID dhe sekreti i klientit';

$GLOBALS["lang"]['client_ident'] = 'Identiteti i klientit';

$GLOBALS["lang"]['Client Ident'] = 'Identiteti i klientit';

$GLOBALS["lang"]['client_secret'] = 'Klienti:';

$GLOBALS["lang"]['Client Secret'] = 'Klienti:';

$GLOBALS["lang"]['client_site_name'] = 'Emri i site-it të klientit';

$GLOBALS["lang"]['Client Site Name'] = 'Emri i site-it të klientit';

$GLOBALS["lang"]['Close'] = 'Mbyll';

$GLOBALS["lang"]['Closed'] = 'Mbyllur';

$GLOBALS["lang"]['Cloud'] = 'Re';

$GLOBALS["lang"]['Cloud Details'] = 'Re';

$GLOBALS["lang"]['Cloud Discovery'] = 'Zbulimi i reve';

$GLOBALS["lang"]['Cloud Discovery and Auditing'] = 'Zbulim dhe kontrollim i reve';

$GLOBALS["lang"]['cloud_id'] = 'ID e reve';

$GLOBALS["lang"]['Cloud ID'] = 'ID e reve';

$GLOBALS["lang"]['cloud_log'] = 'Log';

$GLOBALS["lang"]['Cloud Log'] = 'Log';

$GLOBALS["lang"]['cloud_name'] = 'Emri i reve';

$GLOBALS["lang"]['Cloud Name'] = 'Emri i reve';

$GLOBALS["lang"]['Cloud Network'] = 'Rrjeti';

$GLOBALS["lang"]['clouds'] = 'Re';

$GLOBALS["lang"]['Clouds'] = 'Re';

$GLOBALS["lang"]['Clouds are a feature available to Open-AudIT Enterprise licensed customers.'] = 'Retë janë një veçori në dispozicion të klientëve të liçensuar të Ndërmarrjes Open-AudIT.';

$GLOBALS["lang"]['cluster'] = 'Klister';

$GLOBALS["lang"]['Cluster'] = 'Klister';

$GLOBALS["lang"]['cluster_id'] = 'ID e Valster';

$GLOBALS["lang"]['Cluster ID'] = 'ID e Valster';

$GLOBALS["lang"]['cluster_name'] = 'Emri';

$GLOBALS["lang"]['Cluster Name'] = 'Emri';

$GLOBALS["lang"]['cluster_type'] = 'Lloji';

$GLOBALS["lang"]['Cluster Type'] = 'Lloji';

$GLOBALS["lang"]['clusters'] = 'unit-format';

$GLOBALS["lang"]['Clusters'] = 'unit-format';

$GLOBALS["lang"]['Clusters and Reporting'] = 'Valë dhe raporte';

$GLOBALS["lang"]['Cocos (Keeling) Islands'] = 'Ishujt e Kokove';

$GLOBALS["lang"]['Collection'] = 'Koleksioni';

$GLOBALS["lang"]['Collections'] = 'Koleksione';

$GLOBALS["lang"]['Collector'] = 'Koleksionues';

$GLOBALS["lang"]['Collector (UUID)'] = 'Koleksionues';

$GLOBALS["lang"]['Collector / Server is an Enterprise only feature. Enterprise customers receive one Collector license for free. Additional Collector licenses can be purchased as required.'] = 'Collector / Server është një veçori e vetme e Ndërmarrjes. Klientët e ndërmarrjeve marrin një liçensë koleksionore falas. Licensat shtesë të koleksionit mund të blihen sipas nevojës.';

$GLOBALS["lang"]['Collector / Server is designed so that you can have a remote or <i>collector</i>  instance of Open-AudIT running on a remote machine. That collector instance might be in another security zone, subnet, cloud hosting instance or at a customer site.  The remote collector is then doing all the discovering and auditing of devices locally avoiding networking and firewalling complexity.  The Collector once it has registered is completely controlled by the <i>server</i>.  This means you only need an HTTP or HTTPS connection from that Collector to the Server.'] = 'Collector / Server është projektuar në mënyrë që të keni një distancë apo <i>Koleksionues</i> shembull i Open-AudIT që vrapon në një makinë të largët. Ky rast koleksionues mund të jetë në një zonë tjetër sigurie, nëndetë, në një rast reje ose në një vend klientësh. Më pas, koleksionisti i largët po bën të gjitha zbulimet dhe kontrollimin e pajisjeve në vend që të shmangë rrjetin dhe kompleksitetin e zjarrit. Koleksionori sapo të jetë regjistruar kontrollohet plotësisht nga <i>server</i>. Kjo do të thotë se ju duhet vetëm një lidhje HTTP ose HTTP nga ai koleksionor tek serveri.';

$GLOBALS["lang"]['Collector Dashboard'] = 'Koleksionuesi Dashboard';

$GLOBALS["lang"]['Collector Name'] = 'Emri koleksionor';

$GLOBALS["lang"]['collector_uuid'] = 'Koleksionuesi Uuid';

$GLOBALS["lang"]['Collector Uuid'] = 'Koleksionuesi Uuid';

$GLOBALS["lang"]['Collector tasks are automatically setup when the collector feature is enabled. Collector tasks should not be created directly by users. Collector tasks can have their frequency edited after creation. If the Open-AudIT Server has Collectors reporting to it, an additional drop down is provided. You can select this to specify which Collector the task should run on. Only Discovery tasks are supported for Collectors.'] = 'Aktivitetet kolektive rregullohen automatikisht kur është aktivuar funksioni i koleksionuesit. Aktivitetet kolektive nuk duhet të krijohen drejtpërdrejt nga përdoruesit. Aktivitetet kolektive mund të kenë frekuencën e tyre të redaktuar pas krijimit. Nëse Serveri Open-AudIT ka marrë pjesë në të, jepet një rënie shtesë. Ju mund të zgjidhni këtë për të specifikuar se në cilin koleksion duhet ekzekutuar detyra. Vetëm detyrat e zbulimit janë të suportuara për koleksionuesit.';

$GLOBALS["lang"]['Collectors'] = 'Koleksionues';

$GLOBALS["lang"]['Collectors can operate in one of two modes: Collector and StandAlone. When in Collector mode, the instance of Open-AudIT is managed by the main server. When in Stand Alone mode, the instance is managed locally and forwards any found devices to the main server.'] = 'Koleksionuesit mund të veprojnë në një nga dy mënyrat: koleksionuesi dhe Stand Alt. Kur është në modalitetin Collector, instancë e Open-AudIT drejtohet nga serveri kryesor. Kur është në modalitetin Qëndro i vetëm, shembulli administrohet lokal dhe përcjell çdo mjet të gjetur tek serveri kryesor.';

$GLOBALS["lang"]['Collectors for Remote Discovery'] = 'Koleksionues për zbulimin në distancë';

$GLOBALS["lang"]['Colombia'] = 'Kolumbi';

$GLOBALS["lang"]['color'] = 'Ngjyra';

$GLOBALS["lang"]['Color'] = 'Ngjyra';

$GLOBALS["lang"]['Column'] = 'Kollona';

$GLOBALS["lang"]['Columns'] = 'Kollona';

$GLOBALS["lang"]['command'] = 'Komanda';

$GLOBALS["lang"]['Command'] = 'Komanda';

$GLOBALS["lang"]['command_options'] = 'Opcione';

$GLOBALS["lang"]['Command Options'] = 'Opcione';

$GLOBALS["lang"]['command_output'] = 'Output nga komanda';

$GLOBALS["lang"]['Command Output'] = 'Output nga komanda';

$GLOBALS["lang"]['command_status'] = 'Gjendja e komandës';

$GLOBALS["lang"]['Command Status'] = 'Gjendja e komandës';

$GLOBALS["lang"]['command_time_to_execute'] = 'Koha e komandës për të ekzekutuar';

$GLOBALS["lang"]['Command Time To Execute'] = 'Koha e komandës për të ekzekutuar';

$GLOBALS["lang"]['comment'] = 'Komenti';

$GLOBALS["lang"]['Comment'] = 'Komenti';

$GLOBALS["lang"]['Comment out the below line (about line 49 or so). Just place a hash # at the start of the line.'] = 'Më poshtë komento rreshtin (rreth rreshtit 49). Vetëm vendos një hashash në fillim të rreshtit.';

$GLOBALS["lang"]['comments'] = 'Komenti';

$GLOBALS["lang"]['Comments'] = 'Komenti';

$GLOBALS["lang"]['commercial'] = 'Reklamë';

$GLOBALS["lang"]['Commercial'] = 'Reklamë';

$GLOBALS["lang"]['Commercial Support'] = 'Suporti komercial';

$GLOBALS["lang"]['common_name'] = 'Emri i zakonshëm';

$GLOBALS["lang"]['Common Name'] = 'Emri i zakonshëm';

$GLOBALS["lang"]['Commonly referred to as the clientId.'] = 'Zakonisht i referohemi si klient.';

$GLOBALS["lang"]['Commonly referred to as the clientSecret.'] = 'Zakonisht i referohemi si klienti Sekret.';

$GLOBALS["lang"]['Community'] = 'Komuniteti';

$GLOBALS["lang"]['Community Questions'] = 'Pyetje për komunitetin';

$GLOBALS["lang"]['Community String'] = 'Vlera e komunitetit';

$GLOBALS["lang"]['Comoros the'] = 'Komoros';

$GLOBALS["lang"]['Compact'] = 'Compact';

$GLOBALS["lang"]['Company'] = 'Shoqëria';

$GLOBALS["lang"]['Complete these steps.'] = 'Plotësoni këto hapa.';

$GLOBALS["lang"]['Complexity of the attack (Low or High).'] = 'Kompleksiteti i sulmit (Tri ose Lartë).';

$GLOBALS["lang"]['Component Table'] = 'Tabela Komponentiale';

$GLOBALS["lang"]['Components (All Devices)'] = 'Komponenti';

$GLOBALS["lang"]['Compute'] = 'Compute';

$GLOBALS["lang"]['Condition'] = 'Kushti';

$GLOBALS["lang"]['Conduct a risk assessment'] = 'Bëj një vlerësim të rrezikut';

$GLOBALS["lang"]['Conduct awareness and training programs'] = 'Sjellja e vetëdijshme dhe programet e stërvitjes';

$GLOBALS["lang"]['Conduct management review meetings'] = 'Menaxhimi i sjelljes rishikon mbledhjet';

$GLOBALS["lang"]['Conduct regular surveillance audits (usually annually)'] = 'Bëj kontrolle të rregullta vëzhgimi (veçanërisht çdo vit)';

$GLOBALS["lang"]['Conducted by an accredited body in two stages'] = 'E drejtuar nga një trup i akredituar në dy faza';

$GLOBALS["lang"]['Config'] = 'Konfigurim';

$GLOBALS["lang"]['Config Default, currently '] = 'E prezgjedhur ';

$GLOBALS["lang"]['config_file'] = 'Konfiguro file';

$GLOBALS["lang"]['Config File'] = 'Konfiguro file';

$GLOBALS["lang"]['config_manager_error_code'] = 'Gabim shifrimi';

$GLOBALS["lang"]['Config Manager Error Code'] = 'Gabim shifrimi';

$GLOBALS["lang"]['Configurable Role Based Access Control (RBAC)'] = 'Kontrolli i hyrjes i bazuar në një rol të konfigurueshëm (RBAC)';

$GLOBALS["lang"]['configuration'] = 'Konfigurimi i Mail';

$GLOBALS["lang"]['Configuration'] = 'Konfigurimi i Mail';

$GLOBALS["lang"]['Configuration Change Detection and Reporting'] = 'Konfigurimi ndryshon deteksionin dhe raportin';

$GLOBALS["lang"]['Configure'] = 'Konfiguro';

$GLOBALS["lang"]['Configure the agent server-side to perform audits on a schedule'] = 'Konfiguron agjentin me server për të kryer auditime në një orar';

$GLOBALS["lang"]['Congo'] = 'Kongo';

$GLOBALS["lang"]['Congo the'] = 'Kongo';

$GLOBALS["lang"]['Connected To'] = 'Lidhur';

$GLOBALS["lang"]['connection'] = 'Lidhja';

$GLOBALS["lang"]['Connection'] = 'Lidhja';

$GLOBALS["lang"]['Connection Options'] = 'Opsionet e lidhjes';

$GLOBALS["lang"]['connection_status'] = 'Lidhja';

$GLOBALS["lang"]['Connection Status'] = 'Lidhja';

$GLOBALS["lang"]['connections'] = 'Lidhjet';

$GLOBALS["lang"]['Connections'] = 'Lidhjet';

$GLOBALS["lang"]['Consider filtered Ports Open'] = 'Të mendojmë për filtrin Porta';

$GLOBALS["lang"]['Consider open|filtered Ports Open'] = 'Le të marrim rastin e filtrimit të hapur Porta';

$GLOBALS["lang"]['Consulting, implementation and other services are available through'] = 'Konsultimi, zbatimi dhe shërbime të tjera janë në dispozicion nëpërmjet';

$GLOBALS["lang"]['contact'] = 'Kontakti';

$GLOBALS["lang"]['Contact'] = 'Kontakti';

$GLOBALS["lang"]['contact_name'] = 'Emri i kontaktit';

$GLOBALS["lang"]['Contact Name'] = 'Emri i kontaktit';

$GLOBALS["lang"]['contained_in'] = 'Në qendër';

$GLOBALS["lang"]['Contained In'] = 'Në qendër';

$GLOBALS["lang"]['Contains a JSON object details the associated widgets and their positions.'] = 'Përmban një objekt JSON detajet e widget dhe pozicionet e tyre.';

$GLOBALS["lang"]['Contains the fields that determine if we should use ssh, snmp and wmi discovery options. A JSON object.'] = 'Përmban fushat që përcaktojnë nëse duhet të përdorim mundësi zbulimi ssh, snmp dhe wmi. Një objekt JSON.';

$GLOBALS["lang"]['Context & Leadership'] = 'Konteksti & Udhëheqësia';

$GLOBALS["lang"]['Context Engine ID'] = 'ID e motorit Context';

$GLOBALS["lang"]['Context Name'] = 'Emri';

$GLOBALS["lang"]['Continuously improve the ISMS'] = 'Për të përmirësuar vazhdimisht IZMS - në';

$GLOBALS["lang"]['contractual_obligations'] = 'Kufizime reciproke';

$GLOBALS["lang"]['Contractual Obligations'] = 'Kufizime reciproke';

$GLOBALS["lang"]['Cook Islands'] = 'Ishujt Kuk';

$GLOBALS["lang"]['Copy and paste an audit result'] = 'Kopjo dhe ngjit një rezultat auditimi';

$GLOBALS["lang"]['Copy and paste the below to the forums, another instance of Open-AudIT or anywhere else you need to provide this item.'] = 'Kopjo dhe ngjit poshtë në forume, një tjetër shembull i Open-AudIT apo kudo tjetër ju duhet të jepni këtë element.';

$GLOBALS["lang"]['Copy the <i>Application ID</i> field and paste it into the Open-AudIT <i>Client ID</i> field for the new Auth Method.'] = 'Kopjo <i>ID e aplikativit</i> fushë dhe ngjite atë në Open-AudIT <i>ID e klientit</i> Fusha për metodën e re të Auth.';

$GLOBALS["lang"]['Copy the <i>Client ID</i> and paste it into the Open-AudIT <i>Client ID</i> field.<br>If there is no secret, click <i>Generate new secret</i>, then copy the value and paste it into the Open-AudIT <i>Client Secret</i> field.'] = 'Kopjo <i>ID e klientit</i> dhe do ta ngjisim në Open-AudIT <i>ID e klientit</i> Fusha.<br/>Nëse nuk ka sekret, kliko <i>Duke krijuar një sekret të ri</i>, pastaj kopjoje vlerën dhe ngjite në Open-AudIT <i>Klienti:</i> Fusha.';

$GLOBALS["lang"]['Copy the value and paste it into the Open-AudIT form for the <i>Client Secret</i> field.'] = 'Kopjo dhe ngjit në <i>Klienti:</i> Fusha.';

$GLOBALS["lang"]['core_count'] = 'Numërim kore';

$GLOBALS["lang"]['Core Count'] = 'Numërim kore';

$GLOBALS["lang"]['Cores'] = 'Kore';

$GLOBALS["lang"]['cost_center'] = 'Në qendër';

$GLOBALS["lang"]['Cost Center'] = 'Në qendër';

$GLOBALS["lang"]['cost_code'] = 'Kodi i kostos';

$GLOBALS["lang"]['Cost Code'] = 'Kodi i kostos';

$GLOBALS["lang"]['Costa Rica'] = 'Kosta - Rikë';

$GLOBALS["lang"]['Cote d Ivoire'] = 'Kote d Bregu';

$GLOBALS["lang"]['count'] = 'Numërimi';

$GLOBALS["lang"]['Count'] = 'Numërimi';

$GLOBALS["lang"]['country'] = 'Profili';

$GLOBALS["lang"]['Country'] = 'Profili';

$GLOBALS["lang"]['country_code'] = 'Kodi i vendit';

$GLOBALS["lang"]['Country Code'] = 'Kodi i vendit';

$GLOBALS["lang"]['cpu_count'] = 'Numërimi Cpu';

$GLOBALS["lang"]['Cpu Count'] = 'Numërimi Cpu';

$GLOBALS["lang"]['Create'] = 'Krijo';

$GLOBALS["lang"]['Create Example Devices'] = 'Krijo pajisje shembull';

$GLOBALS["lang"]['create_external_count'] = 'Krijo numër të jashtëm';

$GLOBALS["lang"]['Create External Count'] = 'Krijo numër të jashtëm';

$GLOBALS["lang"]['create_external_from_internal'] = 'Krijo nga i brendshëm';

$GLOBALS["lang"]['Create External From Internal'] = 'Krijo nga i brendshëm';

$GLOBALS["lang"]['Create File'] = 'Krijo file';

$GLOBALS["lang"]['Create Geocode'] = 'Krijo';

$GLOBALS["lang"]['create_internal_count'] = 'Krijo numër të brendshëm';

$GLOBALS["lang"]['Create Internal Count'] = 'Krijo numër të brendshëm';

$GLOBALS["lang"]['create_internal_from_external'] = 'Krijo nga jashtë';

$GLOBALS["lang"]['Create Internal From External'] = 'Krijo nga jashtë';

$GLOBALS["lang"]['Create NMIS Devices from Open-AudIT'] = 'Krijo pajisje NMIS nga Open-AudIT';

$GLOBALS["lang"]['Create Open-AudIT Devices from '] = 'Krijo AudIT Dispozitivët nga ';

$GLOBALS["lang"]['Create Open-AudIT Devices from NMIS'] = 'Krijo AudIT Pajisje nga NMIS';

$GLOBALS["lang"]['Create a Baseline for the example device'] = 'Krijo a për';

$GLOBALS["lang"]['Create a Discovery'] = 'Krijo një zbulim';

$GLOBALS["lang"]['Create a Statement of Applicability (SoA)'] = 'Krijo një status të aplikimit (SoA)';

$GLOBALS["lang"]['created_by'] = 'Krijuar sipas';

$GLOBALS["lang"]['Created By'] = 'Krijuar sipas';

$GLOBALS["lang"]['created_date'] = 'Krijuar Data';

$GLOBALS["lang"]['Created Date'] = 'Krijuar Data';

$GLOBALS["lang"]['Creating'] = 'Duke krijuar';

$GLOBALS["lang"]['Creating Credentials'] = 'Krijimi i kreencialeve';

$GLOBALS["lang"]['Creating Device'] = 'Dispozitivi';

$GLOBALS["lang"]['Creating Widgets'] = '"Widget"';

$GLOBALS["lang"]['Creating a Discovery Scan Options entry'] = 'Krijo një zbulim Shtimi i opsioneve të skanimit';

$GLOBALS["lang"]['Creating a Query'] = 'a';

$GLOBALS["lang"]['Creating a SQL Statement for Groups'] = 'Krijon një deklaratë SQL për grupet';

$GLOBALS["lang"]['Creating a SQL Statement for Queries'] = 'Duke krijuar një deklaratë SQL për Queries';

$GLOBALS["lang"]['Creating an Integration'] = 'Krijimi i një integrimi';

$GLOBALS["lang"]['creator'] = 'Krijuesi';

$GLOBALS["lang"]['Creator'] = 'Krijuesi';

$GLOBALS["lang"]['credential'] = 'Krencial';

$GLOBALS["lang"]['Credential'] = 'Krencial';

$GLOBALS["lang"]['Credentials'] = 'Krenciale';

$GLOBALS["lang"]['Credentials Client ID'] = 'ID e klientit';

$GLOBALS["lang"]['Credentials Subscription ID'] = 'Përshkrimet ID';

$GLOBALS["lang"]['Credentials Tenant ID'] = 'Identifikim me vlerë';

$GLOBALS["lang"]['Credentials are stored in the <i>credentials</i> database table. The actual credential information is encrypted in storage. When a Discovery is run, a device has its specific credentials retrieved from the database, decrypted and tested. If these fail the list of credentials is also retrieved, decrypted and then tested against the device starting with credentials known to have worked previously. Device specific credentials are stored at an individual device level in the <i>credential</i> table (note - no <i>s</i> in the table name). SSH keys are tested before SSH username / password. When testing SSH, credentials will also be marked as working with sudo or being root.'] = 'Në to ruhen depozitimet <i>Kredenciale</i> Tavolina e të dhënave. Informacioni aktual i kredencialit është i kriptuar në arkiv. Kur funksionon një zbulim, një pajisje ka kredencialet specifike të nxjerra nga baza e të dhënave, deshifruar dhe testuar. Nëse këto dështojnë, lista e kredencialeve është tërhequr, dekriptuar dhe pastaj vihet në provë kundër dispozitivit duke filluar me kredencialet e njohura se kanë punuar më parë. në a niveli në <i>Profili</i> tabelë (njofta - jo <i>s</i> në emrin e tabelës). Çelësat SSH janë testuar para emrit të përdoruesit dhe fjalëkalimit SSH. Kur të testosh SSH, kredencialet do të shënohen edhe si punë me sudo ose si rrënjë.';

$GLOBALS["lang"]['Credentials can have one of a few different types - snmp v.1 / v.2, snmp v.3, ssh, ssh key, windows are all implemented. CAVEAT - ssh keys are not implemented for Windows Open-AudIT servers as yet.'] = 'Kredencialet mund të kenë një nga disa llojet e ndryshme - snmp v.1 / v.2, snmp kundër 3. Çelësat CAVEAT - ssh nuk janë zbatuar ende për serverat Windows Open-AudIT.';

$GLOBALS["lang"]['Credentials for Amazon AWS used in Cloud Discovery'] = 'Krenciale për AWS - të e Amazonës që përdoren për zbulimin e reve';

$GLOBALS["lang"]['Credentials for Microsoft Azure used in Cloud Discovery'] = 'Krenciale për Microsoft Azurë e përdorur në zbulimin e reve';

$GLOBALS["lang"]['Critical'] = 'Kritik';

$GLOBALS["lang"]['criticality'] = 'Kritik';

$GLOBALS["lang"]['Criticality'] = 'Kritik';

$GLOBALS["lang"]['Croatia'] = 'Kroacia';

$GLOBALS["lang"]['Cuba'] = 'Kuba';

$GLOBALS["lang"]['current'] = 'Aktual';

$GLOBALS["lang"]['Current'] = 'Aktual';

$GLOBALS["lang"]['Current Discovery Processes'] = 'Procesi aktual i zbulimit';

$GLOBALS["lang"]['Current date & time is '] = 'Data dhe ora aktuale është ';

$GLOBALS["lang"]['Currently Installed'] = 'Instaluar aktualisht';

$GLOBALS["lang"]['Currently supported types are <code>snmp</code>, <code>snmp_v3</code>, <code>ssh</code>, <code>ssh_key</code> or <code>windows</code>.'] = 'Llojet aktualisht të suportuara janë <code>snmp</code>. <code>snmp_v3</code>. <code>ssh</code>. <code>ssh_key</code> ose <code>windows</code>.';

$GLOBALS["lang"]['Custom Fields'] = 'Fusha të personalizuara';

$GLOBALS["lang"]['Custom TCP Ports'] = 'Gërmat e personalizuara TCP';

$GLOBALS["lang"]['Custom TCP Ports. Any specific ports we would liuke scanned in addition to the Top TCP Ports. Comma seperated, no spaces.'] = 'E personalizuar TCP Ports. Çdo porte specifike që do të bënim skanonte përveç Porteve Top TCP. Koma ndarë, nuk ka hapësira.';

$GLOBALS["lang"]['Custom UDP Ports'] = 'E personalizuar UDP Porta';

$GLOBALS["lang"]['Custom UDP Ports. Any specific ports we would liuke scanned in addition to the Top UDP Ports. Comma seperated, no spaces.'] = 'E personalizuar Ports UDP. Çdo porte të posaçme ne do të skanonim përveç porteve të UDP. Koma ndarë, nuk ka hapësira.';

$GLOBALS["lang"]['Customisable Scanning Options per Discovery'] = 'Mundësitë për';

$GLOBALS["lang"]['Cve'] = 'Cve';

$GLOBALS["lang"]['Cyprus'] = 'Qipro';

$GLOBALS["lang"]['Czech'] = 'Çekisht';

$GLOBALS["lang"]['Czech Republic'] = 'Republika Çeke';

$GLOBALS["lang"]['DHCP'] = 'DHCP';

$GLOBALS["lang"]['DN Account (optional)'] = 'Profili DN (optimal)';

$GLOBALS["lang"]['DN Password (optional)'] = 'Fjalëkalimi DN (optional)';

$GLOBALS["lang"]['DNS FQDN'] = 'DNS FQDN';

$GLOBALS["lang"]['DNS Hostname'] = 'Emri i host DNS';

$GLOBALS["lang"]['Danish'] = 'Danisht';

$GLOBALS["lang"]['dashboard_id'] = 'ID e Dashboard';

$GLOBALS["lang"]['Dashboard ID'] = 'ID e Dashboard';

$GLOBALS["lang"]['Dashboard Widgets'] = '"Widget"';

$GLOBALS["lang"]['dashboards'] = 'Dashboards';

$GLOBALS["lang"]['Dashboards'] = 'Dashboards';

$GLOBALS["lang"]['Dashboards and Widgets allow Enterprise licensed customers to create, read, update and delete both of these collections to ensure their homepage is exactly what they need to see. Not only that, but a user is able to set a given dashboard as their own homepage. Everyone does not need to use the same homepage (dashboard), nor the same widgets on that dashboard. Professional licensed customers can choose between two predefined dashboards to set as their own homepage.'] = 'Dyshet dhe "Widgett" i lejojnë ndërmarrjet e liçensuara të krijojnë, lexojnë, freskojnë dhe fshijnë të dyja këto mbledhje për të siguruar që faqja e tyre e shtëpisë është pikërisht ajo që duhet të shohin. Jo vetëm kaq, por një përdorues është në gjendje të vendosë një tabelë të caktuar si faqen e tyre të shtëpisë. Të gjithë nuk kanë nevojë të përdorin të njëjtën faqe shtëpie (dashboard), as të njëjtin widget në atë dërrasë. Klientët profesionistë të liçensuar mund të zgjedhin midis dy tabelave të parapërcaktuara për të vendosur si faqen e tyre të shtëpisë.';

$GLOBALS["lang"]['Dashboards provide <i>at a glance</i> important visibility for changes occurring on your network as well as providing quick links to device types, manufacturers, and operating systems and so much more.'] = 'Sigurohen tabelat <i>një shikim</i> Vëzhgim i rëndësishëm për ndryshimet që ndodhin në rrjetin tuaj, si edhe për të siguruar lidhje të shpejta me llojet e pajisjeve, prodhuesit dhe sistemet operative e kaq shumë më tepër.';

$GLOBALS["lang"]['Dashboards use'] = 'Përdor dashboards';

$GLOBALS["lang"]['Data'] = 'Të dhëna';

$GLOBALS["lang"]['Data Export - CSV, XML, JSON'] = 'Të dhëna Eksporto - CSV, XML, JSON';

$GLOBALS["lang"]['Data Retention'] = 'Riemërtimi i të dhënave';

$GLOBALS["lang"]['Database'] = 'Databaza';

$GLOBALS["lang"]['db_action'] = 'Databaza Veprimi';

$GLOBALS["lang"]['Database Action'] = 'Databaza Veprimi';

$GLOBALS["lang"]['db_column'] = 'Databaza';

$GLOBALS["lang"]['Database Column'] = 'Databaza';

$GLOBALS["lang"]['Database Definition'] = 'Databaza';

$GLOBALS["lang"]['db_row'] = 'Rreshti i Databazave';

$GLOBALS["lang"]['Database Row'] = 'Rreshti i Databazave';

$GLOBALS["lang"]['Database Schema'] = 'Databaza';

$GLOBALS["lang"]['Database Server Discovery'] = 'Gjetja e serverit Databaza';

$GLOBALS["lang"]['db_table'] = 'Tabela e Databazës';

$GLOBALS["lang"]['Database Table'] = 'Tabela e Databazës';

$GLOBALS["lang"]['Database Tables'] = 'Tabelat e databazës';

$GLOBALS["lang"]['dataset_title'] = 'Titulli i të dhënave';

$GLOBALS["lang"]['Dataset Title'] = 'Titulli i të dhënave';

$GLOBALS["lang"]['date'] = 'Data';

$GLOBALS["lang"]['Date'] = 'Data';

$GLOBALS["lang"]['Date D-M-Y'] = 'D-M-Y';

$GLOBALS["lang"]['Date M-D-Y'] = 'Data M-D-Y';

$GLOBALS["lang"]['Date Now'] = 'Data';

$GLOBALS["lang"]['date_of_manufacture'] = 'Data e prodhuesit';

$GLOBALS["lang"]['Date Of Manufacture'] = 'Data e prodhuesit';

$GLOBALS["lang"]['date_paid'] = 'Data e paguar';

$GLOBALS["lang"]['Date Paid'] = 'Data e paguar';

$GLOBALS["lang"]['date_received'] = 'Data e marrjes';

$GLOBALS["lang"]['Date Received'] = 'Data e marrjes';

$GLOBALS["lang"]['Date Y-M-D'] = 'Data Y-M-D';

$GLOBALS["lang"]['Date and time when the CVE was last updated.'] = 'Data dhe ora kur CVE u rifreskua e fundit.';

$GLOBALS["lang"]['Date and time when the CVE was published.'] = 'Data dhe koha kur u botua CVE.';

$GLOBALS["lang"]['Date when the CVE was published.'] = 'Data kur u botua CVE.';

$GLOBALS["lang"]['DateTime Now'] = 'Ora e datës';

$GLOBALS["lang"]['DateTime Y-M-D H:M:S'] = 'Data Y-M-D H:M:S';

$GLOBALS["lang"]['day_of_month'] = 'Dita e muajit';

$GLOBALS["lang"]['Day Of Month'] = 'Dita e muajit';

$GLOBALS["lang"]['day_of_week'] = 'Dita e javës';

$GLOBALS["lang"]['Day Of Week'] = 'Dita e javës';

$GLOBALS["lang"]['Day of Month'] = 'Dita e muajit';

$GLOBALS["lang"]['dbus_identifier'] = 'Identifikuesi Dbus';

$GLOBALS["lang"]['Dbus Identifier'] = 'Identifikuesi Dbus';

$GLOBALS["lang"]['Debug'] = 'Gjetja dhe korrigjimi i gabimeve';

$GLOBALS["lang"]['Debugging'] = 'Gjetja dhe korrigjimi i gabimeve';

$GLOBALS["lang"]['Debugging a Script'] = 'Gjetja dhe korrigjimi i gabimeve';

$GLOBALS["lang"]['December'] = 'Dhjetor';

$GLOBALS["lang"]['Decommission'] = 'Dekodimi';

$GLOBALS["lang"]['Default'] = 'Paracaktuar';

$GLOBALS["lang"]['Default Authentication Level - Set to Connect'] = 'Identifikimi i prezgjedhur Niveli - Lidhja me %s';

$GLOBALS["lang"]['Default Impersonation Level - Set to Identify'] = 'Përshkrimi i prezgjedhur Niveli - Vendose për të identifikuar';

$GLOBALS["lang"]['Default Items'] = 'Elementët e paracaktuar';

$GLOBALS["lang"]['Default Orgs Groups'] = 'Grupi i prezgjedhur i Orkëve';

$GLOBALS["lang"]['Default Roles Groups'] = 'Grupet e prezgjedhura të roleve';

$GLOBALS["lang"]['Default Value'] = 'Vlera e paracaktuar';

$GLOBALS["lang"]['Default of 389. Normally 636 used for Active Directory LDAPS.'] = 'E prezgjedhur 389. Normalisht 636 përdoret për Aktiv Directory LDAPS.';

$GLOBALS["lang"]['Default of <code>3</code> for LDAP and Active Directory.'] = 'E paracaktuar <code>3</code> për LDAP dhe Aktiv Directory.';

$GLOBALS["lang"]['Defaults'] = 'E prezgjedhur';

$GLOBALS["lang"]['Deferred'] = 'Deferuar';

$GLOBALS["lang"]['Define project scope and objectives'] = 'Përcakto gamën e projektit dhe objektivat';

$GLOBALS["lang"]['Define the ISMS scope'] = 'Përcakto gjerësinë IMS';

$GLOBALS["lang"]['Define the context of the organization (internal/external issues)'] = 'Përcakto kontekstin e organizatës (çështjet internale/eksterale)';

$GLOBALS["lang"]['delay_minutes'] = 'Intervali minuta';

$GLOBALS["lang"]['Delay Minutes'] = 'Intervali minuta';

$GLOBALS["lang"]['Delete'] = 'Elemino';

$GLOBALS["lang"]['Delete Example Devices'] = 'Hiq dispozitivin e Shembullit';

$GLOBALS["lang"]['delete_external_from_internal'] = 'Elemino nga brenda';

$GLOBALS["lang"]['Delete External From Internal'] = 'Elemino nga brenda';

$GLOBALS["lang"]['Delete NMIS Devices if not in Open-AudIT'] = 'Elemino NMIS Dispozitivët nëse nuk janë në Open-AudIT';

$GLOBALS["lang"]['Delete a {collection} entry.'] = 'Elemino një hyrje {mbledhje}.';

$GLOBALS["lang"]['Delete from Application'] = 'Elemino nga aplikativi';

$GLOBALS["lang"]['Delete from Cluster'] = 'Elemino';

$GLOBALS["lang"]['Denmark'] = 'Danimarkë';

$GLOBALS["lang"]['Derived by audit or manually set by user.'] = 'I shpërndarë nga auditimi ose nga manuali i vënë nga përdoruesi.';

$GLOBALS["lang"]['Derived by audit.'] = 'I shkatërruar nga auditimi.';

$GLOBALS["lang"]['Derived from <code>rack_devices.device_id</code>.'] = 'Derberd nga <code>rack_devices.device_id</code>.';

$GLOBALS["lang"]['Derived from <code>rack_devices.rack_id</code>.'] = 'Derberd nga <code>rack_devices.rack_id</code>.';

$GLOBALS["lang"]['Derived from Collector discovery.'] = 'I zhdukur nga zbulimi i koleksionit.';

$GLOBALS["lang"]['Derived from OS Name.'] = 'I dënuar nga emri OS.';

$GLOBALS["lang"]['Derived from cloud discovery.'] = 'U përhap nga zbulimi i reve.';

$GLOBALS["lang"]['Derived from device audits.'] = 'Të shpërndarë nga kontrollet e pajisjeve.';

$GLOBALS["lang"]['Derived from device type and OS.'] = 'Të shpërndarë nga lloji i pajisjeve dhe OS.';

$GLOBALS["lang"]['Derived from discovery.'] = 'I zhdukur nga zbulimi.';

$GLOBALS["lang"]['Derived from hostname, sysName, dns Hostname and IP in that order.'] = 'I shpërndarë nga emri i host, sysName, dns Emri i host dhe IP në këtë renditje.';

$GLOBALS["lang"]['Derived from the integer severity.'] = 'Nga ashpërsia e plotë.';

$GLOBALS["lang"]['description'] = 'Përshkrimi';

$GLOBALS["lang"]['Description'] = 'Përshkrimi';

$GLOBALS["lang"]['destination'] = 'Destinimi';

$GLOBALS["lang"]['Destination'] = 'Destinimi';

$GLOBALS["lang"]['detail'] = 'Hollësi';

$GLOBALS["lang"]['Detail'] = 'Hollësi';

$GLOBALS["lang"]['Details'] = 'Hollësi';

$GLOBALS["lang"]['Details of who is usually contactable at this site.'] = 'Detajet se kush zakonisht është i kontaktuar në këtë sit.';

$GLOBALS["lang"]['Determine how often you want to run the Baseline check against the database and create a Scheduled Report'] = 'Përcakto se sa shpesh dëshiron të kontrollosh Baseline kundër bazës së të dhënave dhe të krijosh një raport të caktuar';

$GLOBALS["lang"]['Determine risk treatment options'] = 'Përcakto opsionet e trajtimit të rrezikut';

$GLOBALS["lang"]['Develop a Risk Treatment Plan'] = 'Të zhvillojmë një plan trajtimi për rrezikun';

$GLOBALS["lang"]['Develop policies, procedures, and controls'] = 'Zhvillo politika, procedura dhe kontrolle';

$GLOBALS["lang"]['Develop required ISMS documentation (policies, procedures, etc.)'] = 'Zhvillon dokumentacionin IMS (policitë, procedurat, etj.)';

$GLOBALS["lang"]['device'] = 'Dispozitivi';

$GLOBALS["lang"]['Device'] = 'Dispozitivi';

$GLOBALS["lang"]['Device Audits'] = 'Kontrolli i pajisjeve';

$GLOBALS["lang"]['Device Component Names'] = 'Asnjë element';

$GLOBALS["lang"]['Device ID'] = 'ID e dispozitivit';

$GLOBALS["lang"]['device_id'] = 'ID e dispozitivit';

$GLOBALS["lang"]['device_id_a'] = 'ID e dispozitivit A';

$GLOBALS["lang"]['Device ID A'] = 'ID e dispozitivit A';

$GLOBALS["lang"]['device_id_b'] = 'ID B';

$GLOBALS["lang"]['Device ID B'] = 'ID B';

$GLOBALS["lang"]['Device Matching Rules'] = 'Rregullat e plotësimit të dispozitivit';

$GLOBALS["lang"]['Device Name'] = 'Emri i dispozitivit';

$GLOBALS["lang"]['Device Result'] = 'Rezultati i dispozitivit';

$GLOBALS["lang"]['Device Results'] = 'Rezultatet e dispozitivit';

$GLOBALS["lang"]['Device Seed'] = 'Shkronja';

$GLOBALS["lang"]['Device Seed Discoveries are a good option if you know that your network consists of a range of subnets, but you are unsure what they are. Seed the discovery with a local router and watch your network unfold before your eyes.'] = 'Shkronja Zbulimet janë një mundësi e mirë nëse e dini se rrjeti juaj përbëhet nga një gamë subnetesh, por ju jeni të pasigurt se çfarë janë ato. Mbill zbulimin me një shofer lokal dhe shiko rrjetin tënd të shpalosur para syve.';

$GLOBALS["lang"]['Device Seed IP'] = 'P';

$GLOBALS["lang"]['Device Status'] = 'Gjendja e dispozitivit';

$GLOBALS["lang"]['Device Types'] = 'Lloji i dispozitivit';

$GLOBALS["lang"]['Device and Software and Hardware Auditing'] = 'Pajisjet dhe programet kompjuterike dhe kontrollimi i hardware';

$GLOBALS["lang"]['Device is in the Subnet'] = 'Dispozitivi është në nënnet';

$GLOBALS["lang"]['Devices'] = 'Dispozitivët';

$GLOBALS["lang"]['devices_assigned_to_location'] = 'Pajisjet e caktuara për vendndodhjen';

$GLOBALS["lang"]['Devices Assigned To Location'] = 'Pajisjet e caktuara për vendndodhjen';

$GLOBALS["lang"]['devices_assigned_to_org'] = 'Pajisjet e caktuara për org';

$GLOBALS["lang"]['Devices Assigned To Org'] = 'Pajisjet e caktuara për org';

$GLOBALS["lang"]['Devices Audited'] = 'Dispozitivët u kontrolluan';

$GLOBALS["lang"]['Devices Collection'] = 'Koleksioni i pajisjeve';

$GLOBALS["lang"]['Devices Created in '] = 'Dispozitivët e krijuar ';

$GLOBALS["lang"]['Devices Created in Open-AudIT'] = 'Pajisjet e krijuara në Open-AudIT';

$GLOBALS["lang"]['devices_default_display_columns'] = 'Dispozitivët e prezgjedhur Shfaq kollonat';

$GLOBALS["lang"]['Devices Default Display Columns'] = 'Dispozitivët e prezgjedhur Shfaq kollonat';

$GLOBALS["lang"]['Devices Found Last 7 Days'] = 'Pajisjet e gjetura 7 ditët e fundit';

$GLOBALS["lang"]['Devices Found Today'] = 'U gjetën pajisje sot';

$GLOBALS["lang"]['Devices Found Yesterday'] = 'U gjetën pajisje';

$GLOBALS["lang"]['Devices Missing Information'] = 'Mungon informacioni';

$GLOBALS["lang"]['Devices Not Audited'] = 'Pajisjet nuk u kontrolluan';

$GLOBALS["lang"]['Devices Not Seen 30 Days'] = 'Pajisjet nuk shihen 30 ditë';

$GLOBALS["lang"]['Devices Not Seen 7 Days'] = 'Pajisjet nuk shihen 7 ditë';

$GLOBALS["lang"]['Devices Not Seen 90 Days'] = 'Pajisjet që nuk shihen 90 ditë';

$GLOBALS["lang"]['Devices Older Than X'] = 'Dispozitivët më të vjetër se X';

$GLOBALS["lang"]['Devices Retrieved via API'] = 'Dispozitivët që po marrin nëpërmjet API';

$GLOBALS["lang"]['Devices Selected from '] = 'Dispozitivi i zgjedhur nga ';

$GLOBALS["lang"]['Devices Selected from Open-AudIT'] = 'Dispozitivët e zgjedhur nga Open-AudIT';

$GLOBALS["lang"]['Devices Updated in '] = 'Dispozitivët u rifreskuan ';

$GLOBALS["lang"]['Devices Updated in Open-AudIT'] = 'Dispozitivët u rifreskuan në Open-AudIT';

$GLOBALS["lang"]['Devices are being benchmarked.'] = 'Pajisjet janë duke u shënuar.';

$GLOBALS["lang"]['Devices are not being benchmarked.'] = 'Pajisjet nuk janë duke u shënuar.';

$GLOBALS["lang"]['Devices could be benchmarked.'] = 'Pajisjet mund të jenë të shënuara.';

$GLOBALS["lang"]['Devices from Open-AudIT'] = 'Dispozitivët nga Open-AudIT';

$GLOBALS["lang"]['Devices in Running State'] = 'Pajisje në shtetin në ekzekutim';

$GLOBALS["lang"]['Devices in Stopped State'] = 'Pajisje në gjendje të ndaluar';

$GLOBALS["lang"]['Devices in this'] = 'Dispozitivët në këtë';

$GLOBALS["lang"]['Devices will not be matched if their status is set to <i>deleted</i>. Any other status will allow a match to occur.'] = 'Dispozitivët nuk do të maten nëse statusi i tyre është vendosur <i>fshirë</i>. Çdo status tjetër do të lejojë të ndodhë një ndeshje.';

$GLOBALS["lang"]['Devices with Expired Warranties'] = 'Pajisje me luftanije të tejmbushura';

$GLOBALS["lang"]['Devired from type or OS.'] = 'E shkatërruar nga lloji ose OS.';

$GLOBALS["lang"]['dhcp_enabled'] = 'Aktivizo Java';

$GLOBALS["lang"]['Dhcp Enabled'] = 'Aktivizo Java';

$GLOBALS["lang"]['dhcp_lease_expires'] = 'Dhcp Lease Skadim';

$GLOBALS["lang"]['Dhcp Lease Expires'] = 'Dhcp Lease Skadim';

$GLOBALS["lang"]['dhcp_lease_obtained'] = 'Dhcp Lease Obtained';

$GLOBALS["lang"]['Dhcp Lease Obtained'] = 'Dhcp Lease Obtained';

$GLOBALS["lang"]['dhcp_server'] = 'Serveri Dhcp';

$GLOBALS["lang"]['Dhcp Server'] = 'Serveri Dhcp';

$GLOBALS["lang"]['Did the command complete successfully and return expected data.'] = 'U plotësua komanda me sukses dhe ktheu të dhënat e pritura.';

$GLOBALS["lang"]['direction'] = 'Drejtimi';

$GLOBALS["lang"]['Direction'] = 'Drejtimi';

$GLOBALS["lang"]['directory'] = 'Directory';

$GLOBALS["lang"]['Directory'] = 'Directory';

$GLOBALS["lang"]['disabled'] = 'Jo aktiv';

$GLOBALS["lang"]['Disabled'] = 'Jo aktiv';

$GLOBALS["lang"]['discard'] = 'Anullo';

$GLOBALS["lang"]['Discard'] = 'Anullo';

$GLOBALS["lang"]['Discover'] = 'Zbulo';

$GLOBALS["lang"]['Discoveries'] = 'Zbulimet';

$GLOBALS["lang"]['Discoveries are at the very heart of what Open-AudIT does. How else would you know <i>Whats On Your Network?</i>'] = 'Zbulimet janë në zemër të asaj që bën Open-AudIT. Si ndryshe do ta dije? <i>Çfarë ke në rrjet?</i>';

$GLOBALS["lang"]['Discoveries are entries that enable you to run a discovery upon a network in a single click, without entering the details of that network each and every time.'] = 'Zbulimet janë zëra që ju mundësojnë të kryeni një zbulim në një rrjet në një klikim të vetëm, pa hyrë në detajet e atij rrjeti çdo herë dhe çdo herë.';

$GLOBALS["lang"]['Discovery'] = 'Zbulimi';

$GLOBALS["lang"]['Discovery Change Logs'] = 'Zbulimi ndryshon login';

$GLOBALS["lang"]['Discovery Data Retention'] = 'Zbulimi i të dhënave';

$GLOBALS["lang"]['discovery_id'] = 'ID e zbulimit';

$GLOBALS["lang"]['Discovery ID'] = 'ID e zbulimit';

$GLOBALS["lang"]['Discovery Issues'] = 'Çështje zbulimi';

$GLOBALS["lang"]['discovery_log'] = 'Zbulimi Log';

$GLOBALS["lang"]['Discovery Log'] = 'Zbulimi Log';

$GLOBALS["lang"]['Discovery Match Options'] = 'Zbulo opsionet e plotësimit automatik';

$GLOBALS["lang"]['Discovery Name'] = 'Zbulo emrin';

$GLOBALS["lang"]['Discovery Options'] = 'Zbulo opsionet';

$GLOBALS["lang"]['Discovery Queue Count'] = 'Zbulo';

$GLOBALS["lang"]['Discovery Queue Limit'] = 'Zbuloni kufirin Queue';

$GLOBALS["lang"]['discovery_run'] = 'Zbulimi Run';

$GLOBALS["lang"]['Discovery Run'] = 'Zbulimi Run';

$GLOBALS["lang"]['discovery_scan_options'] = 'Zbulo opsionet e skanimit';

$GLOBALS["lang"]['Discovery Scan Options'] = 'Zbulo opsionet e skanimit';

$GLOBALS["lang"]['Discovery Scan Options are just another item collection. Enterprise users can create, read, update and delete entries as required. Professional users can read all entries, but not create new entries, update existing entries or delete entries. Community users have no GUI that allows access to this collection.'] = 'Zbulo Skanim Mundësitë janë vetëm një koleksion tjetër elementësh. Përdoruesit e ndërmarrjeve mund të krijojnë, lexojnë, përditësojnë dhe eleminojnë zërat siç kërkohet. Përdoruesit profesionistë mund të lexojnë të gjithë zërat, por nuk krijojnë zëra të rinj, të freskojnë zërat ekzistues apo të eleminojnë zërat. Përdoruesit e komunitetit nuk kanë asnjë GUI që lejon hyrjen në këtë koleksion.';

$GLOBALS["lang"]['Discovery Scan Types'] = 'Zbulo Scanlo Lloji';

$GLOBALS["lang"]['Discovery Support'] = 'Zbulues';

$GLOBALS["lang"]['Discovery has stopped working'] = 'Zbulimi ndaloi së punuari.';

$GLOBALS["lang"]['disk'] = 'Disk';

$GLOBALS["lang"]['Disk'] = 'Disk';

$GLOBALS["lang"]['display_version'] = 'Shfaq Versioni';

$GLOBALS["lang"]['Display Version'] = 'Shfaq Versioni';

$GLOBALS["lang"]['Display in Menu'] = 'Shfaq në menu';

$GLOBALS["lang"]['Displays a standard web form for submission to POST /{collection}.'] = 'Shfaq një formë standarte web për paraqitjen tek POST /{mbledhje}.';

$GLOBALS["lang"]['Displays a standard web form for submission to POST /{collection}/import.'] = 'Shfaq një formular standart web për paraqitjen tek POST /{mbledhje}/import.';

$GLOBALS["lang"]['district'] = 'Qarku';

$GLOBALS["lang"]['District'] = 'Qarku';

$GLOBALS["lang"]['Djibouti'] = 'Gjinbouti';

$GLOBALS["lang"]['dns'] = 'Dns';

$GLOBALS["lang"]['Dns'] = 'Dns';

$GLOBALS["lang"]['dns_domain'] = 'Dns Domain';

$GLOBALS["lang"]['Dns Domain'] = 'Dns Domain';

$GLOBALS["lang"]['dns_domain_reg_enabled'] = 'Aktivizuar Regjimenti Dn Domain';

$GLOBALS["lang"]['Dns Domain Reg Enabled'] = 'Aktivizuar Regjimenti Dn Domain';

$GLOBALS["lang"]['dns_fqdn'] = 'Dns Fqdn';

$GLOBALS["lang"]['Dns Fqdn'] = 'Dns Fqdn';

$GLOBALS["lang"]['dns_host_name'] = 'Dns Host Emri';

$GLOBALS["lang"]['Dns Host Name'] = 'Dns Host Emri';

$GLOBALS["lang"]['dns_hostname'] = 'Dns Emri i host';

$GLOBALS["lang"]['Dns Hostname'] = 'Dns Emri i host';

$GLOBALS["lang"]['dns_server'] = 'Serveri Dns';

$GLOBALS["lang"]['Dns Server'] = 'Serveri Dns';

$GLOBALS["lang"]['Do not forget about the Open-AudIT wiki for all your documentation.'] = 'Mos harroni për wiki Open-AudIT për të gjithë dokumentacionin tuaj.';

$GLOBALS["lang"]['Do not forget there is a mountain of documentation on the wiki'] = 'Mos harroni se ka një mal me dokumente në wiki';

$GLOBALS["lang"]['Do not scan these TCP ports.'] = 'Mos i skano këto porte TCP.';

$GLOBALS["lang"]['Do not scan these UDP ports.'] = 'Mos i skano këto porte të UDP.';

$GLOBALS["lang"]['Do not show me again'] = 'Mos shfaq më';

$GLOBALS["lang"]['Do you have a perfect example of this configuration? Perhaps a device located in a lab environment or a workstation you use to clone workstation VMs from.'] = 'A keni një shembull perfekt të këtij konfigurimi? Ndoshta një pajisje e vendosur në një mjedis laboratori ose një punë e përdorur për të klonuar funksionimin VM nga.';

$GLOBALS["lang"]['Do you want to use secure transport (LDAPS) or regular unencrypted LDAP.'] = 'Dëshiron të përdorësh një transport të sigurt (LDAPS) apo një LDAP të pakriptuar rregullisht.';

$GLOBALS["lang"]['Do you wish to see the standard sidebar on the left.'] = 'Dëshironi të shihni bazën standarde në të majtë.';

$GLOBALS["lang"]['documentation'] = 'Dokumentë';

$GLOBALS["lang"]['Documentation'] = 'Dokumentë';

$GLOBALS["lang"]['Documentation about a particular collection.'] = 'Dokumentë për një koleksion të veçantë.';

$GLOBALS["lang"]['Does Not Equal'] = 'Nuk është njësoj';

$GLOBALS["lang"]['Does the license apply to child Orgs.'] = 'Licensa aplikohet tek Orgsat e Fëmijëve.';

$GLOBALS["lang"]['domain'] = 'Domain';

$GLOBALS["lang"]['Domain'] = 'Domain';

$GLOBALS["lang"]['domain_controller_address'] = 'Adresa e kontrollit Domain';

$GLOBALS["lang"]['Domain Controller Address'] = 'Adresa e kontrollit Domain';

$GLOBALS["lang"]['domain_controller_name'] = 'Domain Kontrollues Emri';

$GLOBALS["lang"]['Domain Controller Name'] = 'Domain Kontrollues Emri';

$GLOBALS["lang"]['domain_role'] = 'Roli Domain';

$GLOBALS["lang"]['Domain Role'] = 'Roli Domain';

$GLOBALS["lang"]['domain_short'] = 'E shkurtër Domain';

$GLOBALS["lang"]['Domain Short'] = 'E shkurtër Domain';

$GLOBALS["lang"]['Dominica'] = 'Dominika';

$GLOBALS["lang"]['Dominican Republic'] = 'Republika Domenikane';

$GLOBALS["lang"]['Dont hold my hand, I know what I am doing. No filter and the ability to join custom tables.'] = 'Mos ma mbaj dorën, e di se çfarë po bëj. Asnjë filtër dhe aftësinë për t\'u bashkuar me tavolinat doganore.';

$GLOBALS["lang"]['Download'] = 'Shkarkimi';

$GLOBALS["lang"]['Download a File'] = 'Shkarkimi i një file';

$GLOBALS["lang"]['Download a file from URL'] = 'Shkarkimi i një file nga URL';

$GLOBALS["lang"]['Download the test_windows_client.vbs script directly'] = 'Shkarko drejtpërsëdrejti script-in test_change.vbs';

$GLOBALS["lang"]['Download your updated version from'] = 'Shkarko versionin e rifreskuar nga';

$GLOBALS["lang"]['driver'] = 'Shofer';

$GLOBALS["lang"]['Driver'] = 'Shofer';

$GLOBALS["lang"]['duplex'] = 'Duplex';

$GLOBALS["lang"]['Duplex'] = 'Duplex';

$GLOBALS["lang"]['Duplicate Devices / Missing Devices'] = 'Dispozitivët e dyfishuar / Dispozitivët e humbur';

$GLOBALS["lang"]['duration'] = 'Kohëzgjatja';

$GLOBALS["lang"]['Duration'] = 'Kohëzgjatja';

$GLOBALS["lang"]['Dutch'] = 'Hollandeze';

$GLOBALS["lang"]['ESXi'] = 'ESXi';

$GLOBALS["lang"]['EULA'] = 'ELA';

$GLOBALS["lang"]['Each IP is scanned with the discovery configured options (see Discovery Scan Options and Discovery - Community vs Professional vs Enterprise on the wiki). In general, Nmap will test for ports 22 (ssh), 135 (wmi), 62078 (iPhone) and UDP 161 (snmp). If 22, 135 or 161 respond the credential list is retrieved and each credential tested in turn. The first working credentials are used for further queries directly from the device. Note - if a device has previously been discovered and has working credentials, those credentials are tested first. Only if those fail are the other credentials then attempted.'] = 'Çdo IP skanohet me alternativat e konfiguruara (shih Opsicionet e Skanimit dhe Zbulimit - Komuniteti kundër Ndërmarrjes Profesionale në wiki). Në përgjithësi, Nmap do të testojë për portet 22 (sh), 135 (wmi), 62078 (iPhone) dhe UDP 161 (snmp). Nëse 22, 135 ose 161 përgjigjen në listën e kredencialeve e marrin dhe çdo kredencial testohet nga ana tjetër. Kredencialet e para të punës janë përdorur për kërkesa të mëtejshme direkt nga pajisja. Vini re - nëse një pajisje është zbuluar më parë dhe ka kredenciale në punë, këto kredenciale provohen së pari. Vetëm nëse ato dështime janë kredencialet e tjera atëherë u përpoqën.';

$GLOBALS["lang"]['Each time a device is discovered or an audit result is processed, all rules are retrieved from the database and run against the attributes of the specific device. Rules run against one device at a time - there is no facility to say <i>Run the rules against all devices<i> or <i>Run the rules against these devices<i>. An individual rule will test one or more attributes of the device and if they match the rule, the result will be applied. Several attributes can be tested. Several attributes can be set. Think of this as an If This, Then That system for Open-AudIT.'] = 'Sa herë që zbulohet një pajisje ose përpunohet një rezultat auditimi, të gjitha rregullat dalin nga baza e të dhënave dhe kundër vetive të pajisjes specifike. Rregullat janë kundër një pajisje në një kohë - nuk ka asnjë strukturë për të thënë <i>Zbatoni rregullat kundër të gjitha pajisjeve<i> ose <i>Zbatoni rregullat kundër këtyre pajisjeve<i>. Një rregull individual do të provojë një ose më shumë atribute të pajisjes dhe nëse ata përputhen me rregullin, rezultati do të zbatohet. Disa cilësi mund të provohen. Disa cilësi mund të vendosen. Mendoni për këtë si një Nëse kjo, Pastaj ky sistem për Open-AudIT.</i></i></i></i>';

$GLOBALS["lang"]['Easily run a discovery upon a network in a single click, without entering the details of that network each and every time.'] = 'Në mënyrë të lehtë një zbulim në një rrjet në një klikim të vetëm, pa hyrë në detajet e atij rrjeti çdo herë dhe çdo herë.';

$GLOBALS["lang"]['Ecuador'] = 'Ekuador';

$GLOBALS["lang"]['Edit'] = 'Ndrysho';

$GLOBALS["lang"]['edit_log'] = 'Ndrysho Log';

$GLOBALS["lang"]['Edit Log'] = 'Ndrysho Log';

$GLOBALS["lang"]['editable'] = 'Ndrysho';

$GLOBALS["lang"]['Editable'] = 'Ndrysho';

$GLOBALS["lang"]['edited_by'] = 'Ndrysho nga';

$GLOBALS["lang"]['Edited By'] = 'Ndrysho nga';

$GLOBALS["lang"]['edited_date'] = 'Data e ndryshuar';

$GLOBALS["lang"]['Edited Date'] = 'Data e ndryshuar';

$GLOBALS["lang"]['edition'] = 'Botimi';

$GLOBALS["lang"]['Edition'] = 'Botimi';

$GLOBALS["lang"]['Egypt'] = 'Egjipt';

$GLOBALS["lang"]['Either Amazon, Google or Microsoft.'] = 'Ose Amazon, Google ose Microsoft.';

$GLOBALS["lang"]['Either none or present.

<strong>None</strong> - The successful attack does not depend on the deployment and execution conditions of the vulnerable system. The attacker can expect to be able to reach the vulnerability and execute the exploit under all or most instances of the vulnerability.

<strong>Present</strong> - The successful attack depends on the presence of specific deployment and execution conditions of the vulnerable system that enable the attack. These include:

A race condition must be won to successfully exploit the vulnerability. The successfulness of the attack is conditioned on execution conditions that are not under full control of the attacker. The attack may need to be launched multiple times against a single target before being successful.

Network injection. The attacker must inject themselves into the logical network path between the target and the resource requested by the victim (e.g. vulnerabilities requiring an on-path attacker).'] = 'As edhe një, as të pranishëm.

<strong>Asnjë</strong> - Sulmi i suksesshëm nuk varet nga vendosja dhe ekzekutimi i kushteve të sistemit të cënueshëm. Sulmuesi mund të presë që të jetë në gjendje të arrijë cënueshmërinë dhe të ekzekutojë shfrytëzimin nën të gjitha apo në shumicën e rasteve të dobësisë.

<strong>Këtu</strong> - Sulmi i suksesshëm varet nga prania e vendosjes së veçantë dhe kushteve të ekzekutimit të sistemit të cënueshëm që bëjnë të mundur sulmin. Këto përfshijnë:

Duhet fituar një gjendje gare për të shfrytëzuar me sukses cënueshmërinë. Suksesi i sulmit është kushtëzuar me kushtet e ekzekutimit që nuk janë nën kontrollin e plotë të sulmuesit. Sulmi mund të duhet të nisë shumë herë kundër një objektivi të vetëm përpara se të jetë i suksesshëm.

Injektim në rrjet. Sulmuesi duhet të injektojë veten në rrugën logjike të rrjetit midis objektivit dhe burimeve të kërkuara nga viktima (p.sh. dobësitë që kërkojnë një sulmues në rrugën e duhur).';

$GLOBALS["lang"]['El Salvador'] = 'Salvador';

$GLOBALS["lang"]['email'] = 'Email';

$GLOBALS["lang"]['Email'] = 'Email';

$GLOBALS["lang"]['email_address'] = 'Adresa email';

$GLOBALS["lang"]['Email Address'] = 'Adresa email';

$GLOBALS["lang"]['Email Configuration'] = 'Konfigurimi i Mail';

$GLOBALS["lang"]['Email to send test to'] = 'Email ku duhet dërguar';

$GLOBALS["lang"]['Enable'] = 'Aktivo';

$GLOBALS["lang"]['Enable Distributed COM on this computer - Option is checked'] = 'Aktivizon COM-në e shpërndarë në këtë opcion kompjuteri është kontrolluar';

$GLOBALS["lang"]['enabled'] = 'Aktiv';

$GLOBALS["lang"]['Enabled'] = 'Aktiv';

$GLOBALS["lang"]['Enabling the Feature Under Windows'] = 'Efektet nën Windows';

$GLOBALS["lang"]['encryption'] = 'Kriptimi';

$GLOBALS["lang"]['Encryption'] = 'Kriptimi';

$GLOBALS["lang"]['encryption_method'] = 'Metoda e kriptimit';

$GLOBALS["lang"]['Encryption Method'] = 'Metoda e kriptimit';

$GLOBALS["lang"]['encryption_status'] = 'Gjëndja e kriptimit';

$GLOBALS["lang"]['Encryption Status'] = 'Gjëndja e kriptimit';

$GLOBALS["lang"]['end_date'] = 'Fundi';

$GLOBALS["lang"]['End Date'] = 'Fundi';

$GLOBALS["lang"]['End OF Life Product ID'] = 'Fundi i projektit të jetës';

$GLOBALS["lang"]['end_of_life'] = 'Fundi i jetës';

$GLOBALS["lang"]['End Of Life'] = 'Fundi i jetës';

$GLOBALS["lang"]['end_of_production'] = 'Fundi i prodhimit';

$GLOBALS["lang"]['End Of Production'] = 'Fundi i prodhimit';

$GLOBALS["lang"]['end_of_service'] = 'Fundi i shërbimit';

$GLOBALS["lang"]['End Of Service'] = 'Fundi i shërbimit';

$GLOBALS["lang"]['end_of_service_life'] = 'Fundi i jetës së shërbimit';

$GLOBALS["lang"]['End Of Service Life'] = 'Fundi i jetës së shërbimit';

$GLOBALS["lang"]['Endpoint'] = 'Fundi';

$GLOBALS["lang"]['English'] = 'Anglisht';

$GLOBALS["lang"]['Enhances regulatory compliance'] = 'Përshtatja rregulluese e Enhances';

$GLOBALS["lang"]['Enrichment is complete. The CVE has full metadata and is considered stable.'] = 'Pasuritë janë të plota. CVE ka metadata të plota dhe konsiderohet e qëndrueshme.';

$GLOBALS["lang"]['Ensure documentation is controlled and accessible'] = 'Dokumentimi i sigurisë është i kontrolluar dhe i arritshëm';

$GLOBALS["lang"]['enterprise'] = 'Ndërmarrje';

$GLOBALS["lang"]['Enterprise'] = 'Ndërmarrje';

$GLOBALS["lang"]['Enterprise Private Network'] = 'Rrjeti Privat i ndërmarrjes';

$GLOBALS["lang"]['Enterprise private network'] = 'Rrjeti privat i ndërmarrjes';

$GLOBALS["lang"]['Entitlement Type'] = 'Lloji i titullit';

$GLOBALS["lang"]['Entra'] = 'Entra';

$GLOBALS["lang"]['environment'] = 'Të ndryshueshme:';

$GLOBALS["lang"]['Environment'] = 'Të ndryshueshme:';

$GLOBALS["lang"]['Equal To'] = 'E barabartë me';

$GLOBALS["lang"]['Equal To or Greater Than'] = 'E barabartë apo më e madhe';

$GLOBALS["lang"]['Equal To or Less Than'] = 'E barabartë me ose më pak se';

$GLOBALS["lang"]['Equals'] = 'Barsa';

$GLOBALS["lang"]['Equatorial Guinea'] = 'Guineja Ekuatoriale';

$GLOBALS["lang"]['Eritrea'] = 'Eritrea';

$GLOBALS["lang"]['Error'] = 'Gabim';

$GLOBALS["lang"]['Error Code'] = 'Gabim';

$GLOBALS["lang"]['Esperanto'] = 'Esperanto';

$GLOBALS["lang"]['Establish a project plan and timeline'] = 'Krijo një plan projekti dhe një linjë kohore';

$GLOBALS["lang"]['Establish an information security policy'] = 'Krijo një politikë sigurie informacioni';

$GLOBALS["lang"]['Established'] = 'Ngritur';

$GLOBALS["lang"]['Estonia'] = 'Estoni';

$GLOBALS["lang"]['Estonian'] = 'Estonisht';

$GLOBALS["lang"]['Ethernet MAC'] = 'Ethernet MAC';

$GLOBALS["lang"]['ethernet_mac'] = 'Ethernet Mac';

$GLOBALS["lang"]['Ethernet Mac'] = 'Ethernet Mac';

$GLOBALS["lang"]['Ethiopia'] = 'Etiopi';

$GLOBALS["lang"]['Evaluate the ISMS internally'] = 'PËRFYTYRONI ISMS - in';

$GLOBALS["lang"]['Every'] = 'Çdo';

$GLOBALS["lang"]['Every Day'] = 'Çdo ditë';

$GLOBALS["lang"]['Example'] = 'Shembull';

$GLOBALS["lang"]['Example Devices'] = 'Dispozitivi i shembullit';

$GLOBALS["lang"]['Example Org Chart with Access'] = 'Tabela e Orgut';

$GLOBALS["lang"]['Example text from'] = 'Shembull tekst';

$GLOBALS["lang"]['Examples'] = 'Shembuj';

$GLOBALS["lang"]['Exceptions'] = 'Përjashtime';

$GLOBALS["lang"]['exclude'] = 'Përjashto';

$GLOBALS["lang"]['Exclude'] = 'Përjashto';

$GLOBALS["lang"]['exclude_ip'] = 'Përjashto IP';

$GLOBALS["lang"]['Exclude IP'] = 'Përjashto IP';

$GLOBALS["lang"]['Exclude IP Addresses'] = 'Përjashto adresat IP';

$GLOBALS["lang"]['Exclude IP Addresses (individual IP - 192.168.1.20, ranges - 192.168.1.30-40 or subnets - 192.168.1.100/30) listed from being scanned. Comma seperated, no spaces.'] = 'Përjashto adresat IP (IP indivile - 192.168.1.20, gama - 192.168.1.30-40 ose subnets - 192.168.100/30) të renditura nga skanimi. Koma ndarë, nuk ka hapësira.';

$GLOBALS["lang"]['Exclude TCP Ports'] = 'Përjashto portat TCP';

$GLOBALS["lang"]['exclude_tcp_ports'] = 'Përjashto Tcp Ports';

$GLOBALS["lang"]['Exclude Tcp Ports'] = 'Përjashto Tcp Ports';

$GLOBALS["lang"]['Exclude UDP Ports'] = 'Përjashto portat UDP';

$GLOBALS["lang"]['exclude_udp_ports'] = 'Përjashto portat Udp';

$GLOBALS["lang"]['Exclude Udp Ports'] = 'Përjashto portat Udp';

$GLOBALS["lang"]['Exclude any ports listed from being scanned. Comma seperated, no spaces.'] = 'Përjashto çdo porte të renditur nga skanimi. Koma ndarë, nuk ka hapësira.';

$GLOBALS["lang"]['Exclude these IP addresses from being Nmap scanned.'] = 'Përjashto këto adresa IP nga skanimi i Nmap.';

$GLOBALS["lang"]['Excluded'] = 'Përjashto';

$GLOBALS["lang"]['exclusion_reasons'] = 'Arsye të tepruara';

$GLOBALS["lang"]['Exclusion Reasons'] = 'Arsye të tepruara';

$GLOBALS["lang"]['executable'] = 'E ekzekutueshm';

$GLOBALS["lang"]['Executable'] = 'E ekzekutueshm';

$GLOBALS["lang"]['executable_id'] = 'ID e ekzekutueshme';

$GLOBALS["lang"]['Executable ID'] = 'ID e ekzekutueshme';

$GLOBALS["lang"]['executables'] = 'E ekzekutueshme';

$GLOBALS["lang"]['Executables'] = 'E ekzekutueshme';

$GLOBALS["lang"]['Execute'] = 'Ekzekuto';

$GLOBALS["lang"]['Executing'] = 'Duke u ekzekutuar';

$GLOBALS["lang"]['exemption_reason'] = 'Arsye për të arsyetuar';

$GLOBALS["lang"]['Exemption Reason'] = 'Arsye për të arsyetuar';

$GLOBALS["lang"]['Existing Building'] = 'Ndërtesa ekzistuese';

$GLOBALS["lang"]['Existing Floor'] = 'Kati ekzistues';

$GLOBALS["lang"]['Existing Room'] = 'Dhoma ekzistuese';

$GLOBALS["lang"]['Existing Row'] = 'Rreshti ekzistues';

$GLOBALS["lang"]['expire_date'] = 'Shpërfill datën';

$GLOBALS["lang"]['Expire Date'] = 'Shpërfill datën';

$GLOBALS["lang"]['expire_minutes'] = 'minuta';

$GLOBALS["lang"]['Expire Minutes'] = 'minuta';

$GLOBALS["lang"]['expires'] = 'Skadimi';

$GLOBALS["lang"]['Expires'] = 'Skadimi';

$GLOBALS["lang"]['expiry_date'] = 'Data e shkurtër';

$GLOBALS["lang"]['Expiry Date'] = 'Data e shkurtër';

$GLOBALS["lang"]['exploit_maturity'] = 'Kultivimi i shfrytëzimit';

$GLOBALS["lang"]['Exploit Maturity'] = 'Kultivimi i shfrytëzimit';

$GLOBALS["lang"]['Export'] = 'Eksporto';

$GLOBALS["lang"]['Export by Device'] = 'Eksporto nga';

$GLOBALS["lang"]['Export by Policy'] = 'Eksporto nga Politika';

$GLOBALS["lang"]['Export data to'] = 'Eksporto';

$GLOBALS["lang"]['Exporting a Device'] = 'Eksporto një dispozitiv';

$GLOBALS["lang"]['expose'] = 'Ekspozo';

$GLOBALS["lang"]['Expose'] = 'Ekspozo';

$GLOBALS["lang"]['External'] = 'I jashtëm';

$GLOBALS["lang"]['External Field Name'] = 'Emri i jashtëm i fushës';

$GLOBALS["lang"]['External Field Type'] = 'Lloji i jashtëm i fushës';

$GLOBALS["lang"]['External Field Types'] = 'Lloje të jashtëm të fushës';

$GLOBALS["lang"]['external_ident'] = 'Ngushtim i jashtëm';

$GLOBALS["lang"]['External Ident'] = 'Ngushtim i jashtëm';

$GLOBALS["lang"]['external_link'] = 'Lidhje e jashtme';

$GLOBALS["lang"]['External Link'] = 'Lidhje e jashtme';

$GLOBALS["lang"]['extra_columns'] = 'Kollona të tjera';

$GLOBALS["lang"]['Extra Columns'] = 'Kollona të tjera';

$GLOBALS["lang"]['Extra and Time based Reporting'] = 'Raportim i jashtëdukshëm dhe i bazuar në kohë';

$GLOBALS["lang"]['Extra and more verbose logging is generated for troubleshooting.'] = 'Shtesë dhe më shumë prerje foljesh krijohet për të goditur.';

$GLOBALS["lang"]['FAQ'] = 'FAQ';

$GLOBALS["lang"]['FQDN'] = 'FQDN';

$GLOBALS["lang"]['FW Revision'] = 'Revizioni';

$GLOBALS["lang"]['Fail'] = 'Dështova';

$GLOBALS["lang"]['Failed'] = 'Dështoi';

$GLOBALS["lang"]['Failed Severity'] = 'Serviteti dështoi';

$GLOBALS["lang"]['Falkland Islands (Malvinas)'] = 'Ishujt Falkland (Malvinas)';

$GLOBALS["lang"]['Family'] = 'Mbiemri';

$GLOBALS["lang"]['Faroe Islands'] = 'Ishujt Faroe';

$GLOBALS["lang"]['Features'] = 'Veçoritë';

$GLOBALS["lang"]['February'] = 'Shkurt';

$GLOBALS["lang"]['field'] = 'Fusha';

$GLOBALS["lang"]['Field'] = 'Fusha';

$GLOBALS["lang"]['field_id'] = 'ID e fushës';

$GLOBALS["lang"]['Field ID'] = 'ID e fushës';

$GLOBALS["lang"]['Field Name'] = 'Emri i fushës';

$GLOBALS["lang"]['Field Type'] = 'Lloji i fushës';

$GLOBALS["lang"]['Fields'] = 'Fushat';

$GLOBALS["lang"]['fields'] = 'Fushat';

$GLOBALS["lang"]['Fields attributes are'] = 'Atributet e fushës janë';

$GLOBALS["lang"]['Fiji the Fiji Islands'] = 'Fixhi Ishujt Fixhi';

$GLOBALS["lang"]['File'] = 'File';

$GLOBALS["lang"]['File Auditing'] = 'Kontrolli i file';

$GLOBALS["lang"]['File Import'] = 'Importo';

$GLOBALS["lang"]['File Input'] = 'Input nga file';

$GLOBALS["lang"]['file_name'] = 'Emri';

$GLOBALS["lang"]['File Name'] = 'Emri';

$GLOBALS["lang"]['File Share Discovery'] = 'Zbulimi i skedarëve';

$GLOBALS["lang"]['file_size'] = 'Madhësia e file';

$GLOBALS["lang"]['File Size'] = 'Madhësia e file';

$GLOBALS["lang"]['filename'] = 'Emri i file';

$GLOBALS["lang"]['Filename'] = 'Emri i file';

$GLOBALS["lang"]['files'] = 'Files';

$GLOBALS["lang"]['Files'] = 'Files';

$GLOBALS["lang"]['files_id'] = 'ID e files';

$GLOBALS["lang"]['Files ID'] = 'ID e files';

$GLOBALS["lang"]['filter'] = 'Filtra';

$GLOBALS["lang"]['Filter'] = 'Filtra';

$GLOBALS["lang"]['filtered'] = 'Filtra';

$GLOBALS["lang"]['Filtered'] = 'Filtra';

$GLOBALS["lang"]['Filtered Ports'] = 'Porta e filtruar';

$GLOBALS["lang"]['Finland'] = 'Finlandë';

$GLOBALS["lang"]['Finnish'] = 'Finlandeze';

$GLOBALS["lang"]['Firewall'] = 'Firewall';

$GLOBALS["lang"]['Firewall Packages'] = 'Firewall';

$GLOBALS["lang"]['firewall_rule'] = 'Firewall';

$GLOBALS["lang"]['Firewall Rule'] = 'Firewall';

$GLOBALS["lang"]['firmware'] = 'Firmware';

$GLOBALS["lang"]['Firmware'] = 'Firmware';

$GLOBALS["lang"]['firmware_revision'] = 'Revizioni';

$GLOBALS["lang"]['Firmware Revision'] = 'Revizioni';

$GLOBALS["lang"]['First'] = 'E Para';

$GLOBALS["lang"]['First Name'] = 'Emri';

$GLOBALS["lang"]['first_run'] = 'E para';

$GLOBALS["lang"]['First Run'] = 'E para';

$GLOBALS["lang"]['first_seen'] = 'E parë';

$GLOBALS["lang"]['First Seen'] = 'E parë';

$GLOBALS["lang"]['First focus on what the end need is: are you trying to baseline software, users, or Netstat data? What is the important thing(s) to compare and report on?'] = 'Fokusi i parë në atë që ka nevojë fundi është: a po përpiqeni të bazoni programe kompjuterike, përdorues apo të dhëna netstate? Cila është gjëja më e rëndësishme që duhet krahasuar dhe raportuar?';

$GLOBALS["lang"]['FirstWave'] = 'FirstWave';

$GLOBALS["lang"]['Fix'] = 'Fikso';

$GLOBALS["lang"]['Fixed'] = 'Fiksuar';

$GLOBALS["lang"]['Fixing the Issue'] = 'Rregullojnë çështjen';

$GLOBALS["lang"]['Floor'] = 'Kati';

$GLOBALS["lang"]['Follow any of the links below and discover how to use Open-AudIT to find out <b>Whats On Your Network?</b>'] = 'Ndiqni çdo hallkë më poshtë dhe zbuloni si të përdorni Open-AudIT për të zbuluar <b>Çfarë ke në rrjet?</b>';

$GLOBALS["lang"]['For'] = 'Për';

$GLOBALS["lang"]['For <i>Type</i> make sure to select Baseline, and for Group you should select a Group of devices, if applicable to this baseline, that best represent the devices to apply the baseline against. This will prevent erroneous entries.'] = 'Për <i>Lloji</i> për Grupi a nga në Kjo do të parandalojë zërat e gabuar.';

$GLOBALS["lang"]['For Debian/Ubuntu run, including setting dpkg to remember your override so an apt-get upgrade will not break'] = 'Për Debian/Ubuntu drejtuar, duke përfshirë vendosjen e dpg për të kujtuar heqjen tuaj në mënyrë që një përmirësim i saktë nuk do të thyhet';

$GLOBALS["lang"]['For SNMP Open-AudIT can use v1, v2 and v3 credentials. The device is queried regardless of it being a router, switch (regular network devices) or a computer (Linux and Windows often run SNMP for monitoring tools).'] = 'Për SNMP Open-AudIT mund të përdorë v1, v2 dhe v3 kredenciale. Paisja është e shqetësuar, pavarësisht se ajo është një udhëzues, kalon (paisja e rrjetit rajonal) ose një kompjuter (Linux dhe Windows shpesh drejtojnë SNSM për të mbikqyrur mjetet).';

$GLOBALS["lang"]['For a primer on cron, see this Wikipedia page'] = 'Për një preser në cron, shikoni këtë faqe Wikipedia';

$GLOBALS["lang"]['For a seed discovery, should I only discover IPs in the private IP address space.'] = 'Për një zbulim farash, duhet të zbuloj vetëm IP në hapësirën private IP.';

$GLOBALS["lang"]['For a seed discovery, should I only discover IPs on the chosen subnet.'] = 'Për një zbulim farash, duhet të zbuloj vetëm IP në nëndetësen e zgjedhur.';

$GLOBALS["lang"]['For a seed discovery, should I ping the subnet before running the discovery.'] = 'Për një zbulim farash, a duhet ta ping nënnet para se të drejtoj zbulimin.';

$GLOBALS["lang"]['For advanced entry of a raw SQL query. As per Queries, you must include <code>WHERE @filter AND<code> in your SQL.'] = 'Për hyrjen e përparuar të një kërkese të gjallë SQL. Si për Queries, ju duhet të përfshijë <code>WHERE @filter AND<code> in your SQL.</code></code>';

$GLOBALS["lang"]['For each spawned process, the below occurs.'] = 'Për çdo proces të sapodalë, ndodh pjesa e mëposhtme.';

$GLOBALS["lang"]['For example - you might create a baseline from a device running Redhat 9 which acts as one of your Apache servers in a cluster. You know this particular server is configured just the way you want it but you are unsure if other servers in the cluster are configured exactly the same. Baselines enable you to determine this.'] = 'Për shembull, mund të krijoni një bazë nga një pajisje që drejton Redhat 9 e cila vepron si një nga serverat tuaj Apash në një grumbull. Ju e dini që ky server i veçantë është konfiguruar pikërisht ashtu si e dëshironi, por nuk jeni i sigurt nëse serverët e tjerë në grup janë konfiguruar saktësisht të njëjtën gjë. Bazat ju japin mundësi ta përcaktoni këtë.';

$GLOBALS["lang"]['For example - you might create a baseline from a device running Redhat 9 which acts as one of your Apache servers in a cluster. You know this particular server is configured just the way you want it but you are unsure if other servers in the cluster are configured exactly the same. Baselines enables you to determine this.'] = 'Për shembull, mund të krijoni një bazë nga një pajisje që drejton Redhat 9 e cila vepron si një nga serverat tuaj Apash në një grumbull. Ju e dini që ky server i veçantë është konfiguruar pikërisht ashtu si e dëshironi, por nuk jeni i sigurt nëse serverët e tjerë në grup janë konfiguruar saktësisht të njëjtën gjë. Bazat ju japin mundësi ta përcaktoni këtë.';

$GLOBALS["lang"]['For further details information, see the wiki.'] = 'Për detaje të mëtejshme, shiko Uikin.';

$GLOBALS["lang"]['For licenses that are not perpetual, when does the license expire.'] = 'Për licensat që nuk janë të përhershme, kur mbaron liçensa.';

$GLOBALS["lang"]['For more detailed information, check the Open-AudIT Knowledge Base.'] = 'Për informacione më të hollësishme, kontrollo bazën Njohuria Open-AudIT.';

$GLOBALS["lang"]['For more information please see the following guide which includes a video. Use'] = 'Për më shumë informacion, ju lutemi të shihni udhëzuesin vijues që përfshin një video. Përdoruesi';

$GLOBALS["lang"]['For more information, see'] = 'Për më shumë informacion, shiko';

$GLOBALS["lang"]['form_factor'] = 'Formular';

$GLOBALS["lang"]['Form Factor'] = 'Formular';

$GLOBALS["lang"]['format'] = 'Formati';

$GLOBALS["lang"]['Format'] = 'Formati';

$GLOBALS["lang"]['Forth'] = 'Fortesa';

$GLOBALS["lang"]['fqdn'] = 'Fqdn';

$GLOBALS["lang"]['Fqdn'] = 'Fqdn';

$GLOBALS["lang"]['France, French Republic'] = 'Francë, Republika Franceze';

$GLOBALS["lang"]['free'] = 'I lirë';

$GLOBALS["lang"]['Free'] = 'I lirë';

$GLOBALS["lang"]['French'] = 'Franceze';

$GLOBALS["lang"]['French Guiana'] = 'Frengjisht';

$GLOBALS["lang"]['French Polynesia'] = 'Polinezia Franceze';

$GLOBALS["lang"]['French Southern Territories'] = 'Territoret jugore franceze';

$GLOBALS["lang"]['Frequently Asked Questions'] = 'Pyetje të shpeshta';

$GLOBALS["lang"]['Friday'] = 'E premte';

$GLOBALS["lang"]['From 100 Devices'] = 'Nga 100 pajisje';

$GLOBALS["lang"]['From 500 Devices'] = 'Nga 500 pajisje';

$GLOBALS["lang"]['From that page'] = 'Nga ajo faqe';

$GLOBALS["lang"]['full_name'] = 'Emri dhe Mbiemri';

$GLOBALS["lang"]['Full Name'] = 'Emri dhe Mbiemri';

$GLOBALS["lang"]['Full cloud auditing with all the details from a regular Open-AudIT audit AND details such as the machine type and size.'] = 'Re e plotë auditim me të gjitha detajet nga një kontroll të rregullt Open-AudIT dhe detaje të tilla si lloji i makinës dhe madhësia.';

$GLOBALS["lang"]['function'] = 'Funksioni';

$GLOBALS["lang"]['Function'] = 'Funksioni';

$GLOBALS["lang"]['GROUP BY'] = 'GROUP NGA';

$GLOBALS["lang"]['Gabon'] = 'Gabon';

$GLOBALS["lang"]['Galician'] = 'Galiciani';

$GLOBALS["lang"]['Gambia the'] = 'Gambia';

$GLOBALS["lang"]['Gap Analysis (optional)'] = 'Analizë gap (optional)';

$GLOBALS["lang"]['gateway'] = 'hyrje';

$GLOBALS["lang"]['Gateway'] = 'hyrje';

$GLOBALS["lang"]['gateways'] = 'hyrje';

$GLOBALS["lang"]['Gateways'] = 'hyrje';

$GLOBALS["lang"]['Generated By'] = 'Ndërtuar nga';

$GLOBALS["lang"]['geo'] = 'Geo';

$GLOBALS["lang"]['Geo'] = 'Geo';

$GLOBALS["lang"]['Geographical Maps'] = 'Harta gjeografike';

$GLOBALS["lang"]['Georgia'] = 'Gjeorgji';

$GLOBALS["lang"]['German'] = 'Gjermanisht';

$GLOBALS["lang"]['Germany'] = 'Gjermani';

$GLOBALS["lang"]['Get Lat/Long'] = 'Merr Lat/Long';

$GLOBALS["lang"]['Get News'] = 'Merr lajme';

$GLOBALS["lang"]['Get Started'] = 'Fillo';

$GLOBALS["lang"]['Get a Free License'] = 'Merr një liçencë të lirë';

$GLOBALS["lang"]['Get familiar with the Open-AudIT platform and explore some of its features.'] = 'Njihu me platformën Open-AudIT dhe eksploro disa nga veçoritë e saj.';

$GLOBALS["lang"]['Getting Started'] = 'Fillimi';

$GLOBALS["lang"]['Ghana'] = 'Ganë';

$GLOBALS["lang"]['Gibraltar'] = 'Gjibraltar';

$GLOBALS["lang"]['Github'] = 'Github';

$GLOBALS["lang"]['Global Discovery Options'] = 'Global';

$GLOBALS["lang"]['Global area network'] = 'Rrjeti global i zonës';

$GLOBALS["lang"]['Go'] = 'Shko';

$GLOBALS["lang"]['Go back to your Open-AudIT server and create a discovery with the target Windows computers IP Address as the subnet (this will save having to discover the entire subnet again). Run the discovery, taking note of any issues. For any issues found, take appropriate actions.'] = 'Kthehu në serverin tënd Open-AudIT dhe krijo një zbulim me kompjuterët Windows IP Adresa IP (kjo do të ruajë zbulimin e të gjithë subnet përsëri). Drejtoje zbulimin, duke marrë parasysh çdo çështje. Për çdo çështje që gjendet, bëni veprime të përshtatshme.';

$GLOBALS["lang"]['Go the target Windows PC (or use RDP) and log on as the user used by your discovery credential set.'] = 'Shko tek PC Windows (ose përdor RDP) dhe shënoni si përdorues i përdorur nga seti juaj i zbulimit.';

$GLOBALS["lang"]['Go to menu'] = 'Shko tek menuja';

$GLOBALS["lang"]['Go to the <i>Applications</i> -> <i>App registrations</i> menu item on the far left. Search for Open-AudIT. Click the Open-AudIT entry in the list (assuming you named the app Open-AudIT).'] = 'Shko tek... <i>Aplikativë</i> -> <i>Regjistrimi</i> element menuje majtas. Kërko për Open-AudIT. Kliko zërin Open-AudIT në listë (duke u nisur nga programi Open-AudIT).';

$GLOBALS["lang"]['Go to the <i>Certificates and secrets</i> menu item under <i>Manage</i> in the center menu.'] = 'Shko tek... <i>Çertifikatat dhe sekretet</i> element menuje nën <i>Menaxho</i> në mes të menusë.';

$GLOBALS["lang"]['Go to the <i>Single sign-on</i> menu item and click SAML for <i>Select a single sign-on method</i>.'] = 'Shko tek... <i>Vetëm</i> element menuje dhe kliko SAML për <i>Zgjidh një metodë të vetme</i>.';

$GLOBALS["lang"]['Google Compute Fields'] = 'Fushat Compute të Google';

$GLOBALS["lang"]['Google JSON Credentials'] = 'Google JSON Krenciale';

$GLOBALS["lang"]['Google Maps API Key'] = 'Google Maps API Kenia';

$GLOBALS["lang"]['Great, then you can help! Send FirstWave the text shown in the GUI and what should be shown. We will include that in the language file so going forward, the translation is improved and you do not need to worry about updating it for every release!'] = 'Bukur, atëherë mund të ndihmosh! Dërgo i pari Prite tekstin e treguar në GUI dhe çfarë duhet treguar. Do të përfshijmë edhe faktin se në dosjen e gjuhës, përkthimi përmirësohet dhe s\'ke pse të shqetësohesh që ta shtosh për çdo çlirim.';

$GLOBALS["lang"]['Greater Than'] = 'Më i madh se';

$GLOBALS["lang"]['Greater Than or Equals'] = 'Më i madh se ose i barabartë';

$GLOBALS["lang"]['Greece'] = 'Greqi';

$GLOBALS["lang"]['Greek'] = 'Greqisht';

$GLOBALS["lang"]['Green Query'] = 'Kërkesë e gjelbër';

$GLOBALS["lang"]['Greenland'] = 'Grenlanda';

$GLOBALS["lang"]['Grenada'] = 'Grenada';

$GLOBALS["lang"]['Group'] = 'Grupi';

$GLOBALS["lang"]['group_by'] = 'Grupo sipas';

$GLOBALS["lang"]['Group By'] = 'Grupo sipas';

$GLOBALS["lang"]['group_id'] = 'ID e grupit';

$GLOBALS["lang"]['Group ID'] = 'ID e grupit';

$GLOBALS["lang"]['groups'] = 'Grupi';

$GLOBALS["lang"]['Groups'] = 'Grupi';

$GLOBALS["lang"]['Groups are used as simple lists of devices that match the required conditions. If requested using JSON they return a list of <i>devices.id</i> only. If requested using the web interface, they return the standard column attribute list. Groups can be used for Integrations, Baselines and other items.'] = 'Grupet përdoren si një listë e thjeshtë pajisjesh që përputhen me kushtet e kërkuara. Nëse kërkohet përdorimi i JSON kthehen në listën e <i>Pajisja.id</i> Vetëm. Nëse kërkohet përdorimi i interfaqes web, ato kthejnë listën e atributeve standart të kollonës. Grupet mund të përdoren për integrimin, bazat dhe sende të tjera.';

$GLOBALS["lang"]['Guadeloupe'] = 'Guadelupe';

$GLOBALS["lang"]['Guam'] = 'Guam';

$GLOBALS["lang"]['Guatemala'] = 'Guatemala';

$GLOBALS["lang"]['Guernsey'] = 'Guinsej';

$GLOBALS["lang"]['guest_device_id'] = 'ID e dispozitivit të Myst';

$GLOBALS["lang"]['Guest Device ID'] = 'ID e dispozitivit të Myst';

$GLOBALS["lang"]['guid'] = 'Guid';

$GLOBALS["lang"]['Guid'] = 'Guid';

$GLOBALS["lang"]['Guinea'] = 'Guine';

$GLOBALS["lang"]['Guinea-Bissau'] = 'Guine-Bisau';

$GLOBALS["lang"]['Guyana'] = 'Guajanë';

$GLOBALS["lang"]['HP-UX'] = 'HP-UX';

$GLOBALS["lang"]['HW Revision'] = 'Revizioni HW';

$GLOBALS["lang"]['Haiti'] = 'Haiti';

$GLOBALS["lang"]['hard_drive_index'] = 'Treguesi i hard Drive';

$GLOBALS["lang"]['Hard Drive Index'] = 'Treguesi i hard Drive';

$GLOBALS["lang"]['Hardware'] = 'Hardware';

$GLOBALS["lang"]['hardware_revision'] = 'Revizioni';

$GLOBALS["lang"]['Hardware Revision'] = 'Revizioni';

$GLOBALS["lang"]['Has this policy been applied in this organization.'] = 'Në këtë organizatë është zbatuar kjo politikë.';

$GLOBALS["lang"]['hash'] = 'Hash';

$GLOBALS["lang"]['Hash'] = 'Hash';

$GLOBALS["lang"]['Have the agent always run the latest audit script (if you upgrade Open-AudIT and manually copy the scripts to the targets, then set cron - you will need to update these scripts for each upgrade).'] = 'I thoni agjentit gjithmonë të drejtojë skenarin më të fundit të auditimit (në qoftë se e përmirësoni Open-AudIT dhe kopjoni manualisht script-et për objektivat, atëherë vendosni cron - ju duhet t\'i përditësoni këto script-e për çdo përmirësim).';

$GLOBALS["lang"]['Have your user open a command prompt (using <i>Run as Administrator</i>). Paste the below into the prompt to download the Agent.'] = 'a <i>Ekzekuto</i>). Ngjiteni poshtë në shpejtësi për të shkarkuar agjentin.';

$GLOBALS["lang"]['Head'] = 'Lexo';

$GLOBALS["lang"]['Heard Island and McDonald Islands'] = 'Dëgjova Ishullin dhe Ishujt McDonald';

$GLOBALS["lang"]['Hebrew'] = 'Hebraike';

$GLOBALS["lang"]['height'] = 'Lartësia';

$GLOBALS["lang"]['Height'] = 'Lartësia';

$GLOBALS["lang"]['Height in RU'] = 'Lartësia në RU';

$GLOBALS["lang"]['Help'] = 'Ndihmë';

$GLOBALS["lang"]['Help and Frequently Asked Questions'] = 'Ndihmë dhe pyetje të shpeshta';

$GLOBALS["lang"]['Helps manage and mitigate information security risks'] = 'Ndihmon dhe zbut rreziqet e sigurisë së informacionit';

$GLOBALS["lang"]['Hide Audit Window'] = 'Fshih dritaren e kontrollit';

$GLOBALS["lang"]['high'] = 'E lartë';

$GLOBALS["lang"]['High'] = 'E lartë';

$GLOBALS["lang"]['High Availability'] = 'Avalitet i lartë';

$GLOBALS["lang"]['Hindi'] = 'Hindi';

$GLOBALS["lang"]['Holy See (Vatican City State)'] = 'Pamje e Shenjtë (shteti i Vatikanit)';

$GLOBALS["lang"]['Home'] = 'Shtëpi';

$GLOBALS["lang"]['home'] = 'Shtëpi';

$GLOBALS["lang"]['Home Area Network'] = 'Rrjeti i zonave shtëpiake';

$GLOBALS["lang"]['Home area network'] = 'Rrjeti i zonës së shtëpisë';

$GLOBALS["lang"]['Honduras'] = 'Honduras';

$GLOBALS["lang"]['Hong Kong'] = 'Hong Kong';

$GLOBALS["lang"]['host'] = 'Host';

$GLOBALS["lang"]['Host'] = 'Host';

$GLOBALS["lang"]['hostname'] = 'Emri i host';

$GLOBALS["lang"]['Hostname'] = 'Emri i host';

$GLOBALS["lang"]['hour'] = 'Ora';

$GLOBALS["lang"]['Hour'] = 'Ora';

$GLOBALS["lang"]['How Does It Work?'] = 'Si funksionon?';

$GLOBALS["lang"]['How Does it Work?'] = 'Si funksionon?';

$GLOBALS["lang"]['How Long Does it Take'] = 'Sa kohë duhet?';

$GLOBALS["lang"]['How and Why is'] = 'Si dhe pse?';

$GLOBALS["lang"]['How and Why is Open-AudIT More Secure'] = 'Si dhe pse është më i sigurt Open-AudIT';

$GLOBALS["lang"]['How do they work?'] = 'Si funksionojnë?';

$GLOBALS["lang"]['How does a Device Seed Discovery find known IPs?'] = 'Si e gjen të njohur IP - në zbulimin e Farës së Pajisjeve?';

$GLOBALS["lang"]['How long did the command take to execute.'] = 'Sa kohë mori komanda për të ekzekutuar.';

$GLOBALS["lang"]['How long should Nmap wait for a response, per device.'] = 'Sa gjatë duhet të presë Nmap për një përgjigje, për pajisje.';

$GLOBALS["lang"]['How many circuit feed to this rack.'] = 'Sa qarkë ushqehen me këtë raft.';

$GLOBALS["lang"]['How many policies results in a fail.'] = 'Sa shumë politika rezultojnë në një dështim.';

$GLOBALS["lang"]['How many policies results in a pass.'] = 'Sa politika rezulton në një pasim.';

$GLOBALS["lang"]['How many power sockets in this rack.'] = 'Sa bazat e energjisë në këtë raft.';

$GLOBALS["lang"]['How many rack units in height is this rack.'] = 'Sa njësi në lartësi është kjo raft.';

$GLOBALS["lang"]['How often should the collector ask the server for a task.'] = 'Shpesh koleksionuesi duhet t\'i kërkojë serverit një detyrë.';

$GLOBALS["lang"]['How should we select devices to be integrated (using an Attribute, Query or a Group).'] = 'Si duhet të zgjedhim pajisje për t\'u integruar (duke përdorur një Veçori, kërkesë apo një grup).';

$GLOBALS["lang"]['How the vulnerability is exploited (e.g., Network, Adjacent, Local, Physical).'] = 'Si shfrytëzohet dobësia (p.sh., Rrjeti, Adjacent, Lokale, Fizike).';

$GLOBALS["lang"]['How to compare'] = 'Si të krahasohet?';

$GLOBALS["lang"]['Human-readable explanation of the vulnerability.'] = 'Shpjegim i lexueshëm i dobësisë.';

$GLOBALS["lang"]['Hungarian'] = 'Hungarisht';

$GLOBALS["lang"]['Hungary'] = 'Hungarisht';

$GLOBALS["lang"]['hw_cpe'] = 'Hw Cpe';

$GLOBALS["lang"]['Hw Cpe'] = 'Hw Cpe';

$GLOBALS["lang"]['hyperthreading'] = 'Hyperthexing';

$GLOBALS["lang"]['Hyperthreading'] = 'Hyperthexing';

$GLOBALS["lang"]['I have read the EULA.'] = 'Kam lexuar EULA.';

$GLOBALS["lang"]['I hope this post has alleviated any concerns you have about Open-AudIT and Security. If you have any questions at all, please do not hesitate to reach out to us here at FirstWave. We are always happy to discuss your concerns and needs. And maybe if your question is not something I have addressed here, I can add it here for future users'] = 'Shpresoj se ky postim ka lehtësuar çdo shqetësim që keni për Open-AudIT-in dhe sigurimin. Nëse keni ndonjë pyetje, ju lutem mos ngurroni të vini tek ne këtu në FirstWave. Jemi gjithnjë të lumtur të flasim për shqetësimet dhe nevojat tuaja. Dhe ndoshta nëse pyetja juaj nuk është diçka që e kam trajtuar këtu, mund ta shtoj këtu për përdoruesit e ardhshëm';

$GLOBALS["lang"]['id'] = 'ID';

$GLOBALS["lang"]['ID'] = 'ID';

$GLOBALS["lang"]['IF'] = 'IF';

$GLOBALS["lang"]['IMPORTANT'] = 'IMORTANT';

$GLOBALS["lang"]['INPUTS'] = 'INPUT';

$GLOBALS["lang"]['IOS Version'] = 'Versioni:';

$GLOBALS["lang"]['IP'] = 'IP';

$GLOBALS["lang"]['ip'] = 'IP';

$GLOBALS["lang"]['IP Address'] = 'Adresa IP';

$GLOBALS["lang"]['IP Addresses'] = 'Adresa IP';

$GLOBALS["lang"]['IP Last Seen'] = 'P';

$GLOBALS["lang"]['IP Set By'] = 'IP';

$GLOBALS["lang"]['ISMS'] = 'IMS';

$GLOBALS["lang"]['ISO 27001 only.'] = 'Vetëm ISO 27001.';

$GLOBALS["lang"]['Iceland'] = 'Islandë';

$GLOBALS["lang"]['icon'] = 'Ikona';

$GLOBALS["lang"]['Icon'] = 'Ikona';

$GLOBALS["lang"]['Icon and Text'] = 'Ikona dhe teksti';

$GLOBALS["lang"]['Icon only, text only or icon and text.'] = 'Ikona vetëm, tekst, ikonë dhe tekst.';

$GLOBALS["lang"]['id_internal'] = 'Id i brendshëm';

$GLOBALS["lang"]['Id Internal'] = 'Id i brendshëm';

$GLOBALS["lang"]['id_number'] = 'Numri i Id';

$GLOBALS["lang"]['Id Number'] = 'Numri i Id';

$GLOBALS["lang"]['identification'] = 'Identifikimi';

$GLOBALS["lang"]['Identification'] = 'Identifikimi';

$GLOBALS["lang"]['Identify information assets'] = 'Identifiko vlerat e informacionit';

$GLOBALS["lang"]['Identify interested parties and their requirements'] = 'Identifiko partitë e interesuara dhe kërkesat e tyre';

$GLOBALS["lang"]['Identify key stakeholders and assign roles'] = 'Identifiko aktorët kyç dhe cakto role';

$GLOBALS["lang"]['Identify the device(s) that are your exemplary, or <i>gold image</i> you want to compare similar devices against.'] = 'Identifiko pajisjet që janë shembulli yt, ose <i>Figura e artë</i> ju dëshironi të krahasoni pajisje të ngjashme kundër.';

$GLOBALS["lang"]['Identifying and evaluating security risks'] = 'Identifikimi dhe vlerësimi i rreziqeve të sigurisë';

$GLOBALS["lang"]['If'] = 'Nëse';

$GLOBALS["lang"]['If a device is individually discovered using the <i>Discover Device</i> link on the device details page, we first check if this device has been discovered previously (by Discovery) and if so, use the discovery options from that scan. If it has not been previously discovered, we revert to the configuration item discovery_default_scan_option the settings.'] = 'Nëse zbulohet një pajisje duke përdorur <i>Zbulo dispozitivin</i> Lidhja në faqen e detajeve të pajisjes, së pari kontrollojmë nëse kjo pajisje është zbuluar më parë (nga Discovery) dhe nëse po, përdor opsionet e zbulimit nga ky skanim. Nëse nuk është zbuluar më parë, do të kthehemi tek elementi i konfigurimit që ka zbuluar_scan_options';

$GLOBALS["lang"]['If a new Org is created, an LDAP group name is automatically derived from the name. For example, if a new Org is created and is named Test, the corresponding LDAP group will be named open-audit_orgs_test.'] = 'Nëse krijohet një org i ri, emri i grupit LDAP rrjedh automatikisht nga emri. Për shembull, nëse krijohet një org i ri dhe emërohet test, grupi korrespondues LDAP do të emërohet si i hapur apo jo.';

$GLOBALS["lang"]['If a port responds with filtered, should we consider it available.'] = 'Nëse një port përgjigjet me filtrim, duhet ta konsiderojmë të disponueshme.';

$GLOBALS["lang"]['If a port responds with open|filtered, should we consider it available.'] = 'Nëse një port përgjigjet me filtrues të hapur, duhet ta konsiderojmë të lirë.';

$GLOBALS["lang"]['If a remote device does not exist in the Open-AudIT selected devices, should we delete it from the external system.'] = 'Nëse një dispozitiv remote nuk ekziston në paisjet e zgjedhura Open-AudIT, duhet ta eleminojmë atë nga sistemi i jashtëm.';

$GLOBALS["lang"]['If an Open-AudIT device has been changed, should we update the external system.'] = 'Nëse një dispozitiv Open-AudIT është ndryshuar, duhet të rifreskojmë sistemin e jashtëm.';

$GLOBALS["lang"]['If an Open-AudIT device is not on the external system, should we create it.'] = 'Nëse një dispozitiv Open-AudIT nuk është në sistemin e jashtëm, duhet ta krijojmë.';

$GLOBALS["lang"]['If an agent reports its primary IP is in this subnet, perform the actions.'] = 'Nëse një agjent raporton se IP e tij primare është në këtë nënnet, kryeni veprimet.';

$GLOBALS["lang"]['If any of these (comma seperated, no spaces) ports are detected, assume SSH is running on them and use them for auditing. No need to add this port to the Custom TCP ports - it will be added automatically.'] = 'Nëse diktohet ndonjë nga këto porte (koma të ndarë, pa hapësira), supozo se SSH po vrapon mbi to dhe i përdor për kontrollim. Nuk ka nevojë t\'ia shtosh këtë port porteve të personalizuara TCP - do t\'i shtohet automatikisht.';

$GLOBALS["lang"]['If no operator is specified, the default is =. Properties should be fully qualified - ie, devices.hostname (not just hostname).'] = 'është. Veçoritë duhet të jenë plotësisht të kualifikuara - ie, pajisje. Emri i host (jo thjesht emër).';

$GLOBALS["lang"]['If no value is present, supply this value. EG: for system.nmis_group / configuraion.group we use'] = 'Nëse nuk ka vlerë, jepe këtë vlerë. EG: për sistemin.nmis_group / konfigurim. Grupi që përdorim';

$GLOBALS["lang"]['If set, holds a JSON array of specific device columns this user has chosen to see, other than the configuration default.'] = 'Nëse caktuar, mbani një rrjet JSON të kollonave të veçanta të dispozitivit që ky përdorues ka zgjedhur për të parë, përveç falimentimit të konfigurimit.';

$GLOBALS["lang"]['If the OS Family (as reported by the device) contains this item, pass.</li>'] = 'Nëse familja OS (siç raportohet nga pajisja) përmban këtë element, kalo.';

$GLOBALS["lang"]['If the Open-AudIT Server has Collectors reporting to it, an additional drop down is provided. You can select this to specify which Collector the task should run on. Only Discovery tasks are supported for Collectors.'] = 'Nëse Serveri Open-AudIT ka marrë pjesë në të, jepet një rënie shtesë. Ju mund të zgjidhni këtë për të specifikuar se në cilin koleksion duhet ekzekutuar detyra. Vetëm detyrat e zbulimit janë të suportuara për koleksionuesit.';

$GLOBALS["lang"]['If the agent OS family (case insensitive) contains this string, perform the actions.'] = 'Nëse agjenti i familjes OS (nëse nuk është e ndjeshme) përmban këtë varg, vepro.';

$GLOBALS["lang"]['If the binary is not found in either of these locations, a warning message will be displayed in the installer.'] = 'Nëse binari nuk gjendet në asnjë nga këto pozicione, një mesazh paralajmërues do të shfaqet tek instalimi.';

$GLOBALS["lang"]['If the following conditions are met:<br><ul><li>a Role has an assigned ad_group</li><li>an Org has an assigned ad_group</li><li>an LDAP Server has use_roles set to y</li><li>a user exists in LDAP (be it Active Directory or OpenLDAP) and is in the assigned ad_groups</li></ul>That user can log on to Open-AudIT without an account in Open-AudIT needing to be created. Open-AudIT will query the LDAP in question and if the user is in the required groups but not in Open-AudIT, their user attributes (name, full name, email,  roles, orgs, etc) within Open-AudIT will be automatically populated and they will be logged on.<br> <br>'] = 'Nëse kushtet në vijim plotësohen:<br/><ul><li>a Roli</li><li>a</li><li>një LDAP Serveri ka përdorime të caktuara për y</li><li>a në është në</li></ul>Ky përdorues mund të futet në Open-AudIT pa një profil në Open-AudIT që duhet krijuar. Open-AudIT do të pyesë LDAP në fjalë dhe nëse përdoruesi është në grupet e kërkuara por jo në Open-AudIT, atributet e tyre të përdoruesit (emri, emri i plotë, e-mail, rolet, orgs, etj.) brenda Open-AudIT do të popullohen automatikisht dhe do të futen në të.<br/> <br/>';

$GLOBALS["lang"]['If the local field is true (bool) or y (string) or Y (string) or 1 (integer) then set the external data to 1.'] = 'Nëse fusha lokale është e vërtetë (bool) ose y (string) ose Y (string) ose 1 (integer) atëherë vendos të dhënat e jashtme në 1.';

$GLOBALS["lang"]['If the local field is true (bool) or y (string) or Y (string) or 1 (integer) then set the external data to y.'] = 'Nëse fusha lokale është e vërtetë (bool) ose y (string) ose Y (string) ose 1 (integer) atëherë vendosni të dhënat e jashtme në y.';

$GLOBALS["lang"]['If the primary IP (as reported by the device) is in this subnet, pass.</li>'] = 'Nëse IP primare (siç raportohet nga pajisja) është në këtë nënnet, kalo.';

$GLOBALS["lang"]['If the user account does not actually exist within Open-AudIT and <code>use_authorisation</code> is set, the user will be created. If it does exist, details such as email, full name, etc will be populated.'] = 'Nëse profili i përdoruesit nuk ekziston aktualisht brenda Open-AudIT dhe <code>use_authorisation</code> është përcaktuar, përdoruesi do të krijohet. Nëse ekziston, hollësi të tilla si email, emri i plotë, etj, do të popullohen.';

$GLOBALS["lang"]['If the user either does not have valid credentials or is not in at least one Open-AudIT Role and Group (when using <code>use_authorisation</code>), Open-AudIT will fallback to using local Open-AudIT user details and attempt authentication and authorization there. Failing that, the user will be denied access.'] = 'është nuk në Hap dhe Grupi <code>use_authorisation</code>), Open-AudIT do t\'i kthehet përdorimit të detajeve të përdoruesit lokalë Open-AudIT dhe përpjekjes për autentifikimin dhe autorizimin atje. Duke dështuar në këtë, përdoruesi do të ndalohet hyrja.';

$GLOBALS["lang"]['If the user logging on to Open-AudIT does not have the access to search LDAP, you can use another account which does have this access.'] = 'Nëse prerja e përdoruesit në Open-AudIT nuk ka të drejtën e kërkimit LDAP, mund të përdorni një llogari tjetër që ka këtë hyrje.';

$GLOBALS["lang"]['If the user logging on to Open-AudIT does not have the access to search OpenLDAP, you can use another account which does have this access. Use the dn_account and dn_password to configure this.'] = 'Nëse prerja e përdoruesit tek Open-AudIT nuk ka qasje në kërkim të OpenLDAP, mund të përdorni një llogari tjetër që ka këtë hyrje. Përdor profilin dhe dn_n_fjalën për të konfiguruar këtë.';

$GLOBALS["lang"]['If the value is not set, the current timestamp will be used.'] = 'Nëse vlera nuk është caktuar, do të përdoret nitulli aktual.';

$GLOBALS["lang"]['If the value is set, that timestamp value will be used.'] = 'Nëse vlera është përcaktuar, do të përdoret ajo vlerë e përsëritur.';

$GLOBALS["lang"]['If this change does not work for you, all is not lost. We have added a configuration item (set to n by default, so it will use not this new option out of the box) called discovery_use_org_id_match. If you change it to y then the OrgID assigned to the device by the discovery will be used in the relevant match rules.'] = 'Nëse ky ndryshim nuk funksionon për ju, gjithçka nuk është e humbur. Ne kemi shtuar një element konfigurimi (vizim në n si menyrë të prezgjedhur, prandaj nuk do të përdorë këtë opsion të ri nga kutia) të quajtur zbulimi_përdor_org_id_match. Nëse e ndërron në y atëherë OrgID-i i caktuar në pajisje nga zbulimi do të përdoret në rregullat përkatëse të ndeshjes.';

$GLOBALS["lang"]['If this many minutes (or more) have passed since the server last saw the device, pass.</li>'] = 'Nëse këto shumë minuta (ose më shumë) kanë kaluar që kur serveri i fundit ka parë dispozitivin, kalo.';

$GLOBALS["lang"]['If this many or more minutes have passed since the device contacted the server, perform the actions.'] = 'Nëse kanë kaluar shumë ose më shumë minuta që kur dispozitivi kontaktoi serverin, ngarko veprimet.';

$GLOBALS["lang"]['If this occurs then the issue you are seeing is related to the table control being used on the webpage. It only stores in memory the state of the check boxes for the current page being viewed. If you make selections, then page forward/back those selections will be lost. You can, however, accomplish what you want by expanding the number of devices shown on each page. In the top-left corner is a drop-down labeled “records per page”; use this to expand the number of entries displayed until you see all you want to select for Bulk Edit.'] = 'Nëse ndodh kjo, çështja që po shihni lidhet me kontrollin e tabelës që përdoret në webfaqe. Ajo vetëm ruan në kujtesë gjendjen e kutive të kontrollit për faqen aktuale. Nëse bëni zgjedhje, atëherë faqja përpara/braps këto zgjedhje do të humbasë. Megjithatë, mund ta arrish atë që dëshiron duke zgjeruar numrin e pajisjeve që tregohen në çdo faqe. Në këndin e majtë sipër është një pikë rënie e etiketuar për faqe, përdore këtë për të zgjeruar numrin e elementëve të shfaqur deri sa të shohësh gjithçka që dëshiron të zgjedhësh për BulkEdit.';

$GLOBALS["lang"]['If we detect the san management software, should we run an auto-discover before the query.'] = 'Nëse pikasim softverin e menaxhimit san, duhet të bëjmë një zbulim automatik para se të kërkojmë.';

$GLOBALS["lang"]['If you add a Location Type, add those icons to'] = 'Nëse shtoni një lloj pozicioni, shtojini ikonat';

$GLOBALS["lang"]['If you add a device type, to display the associated icon you will have to manually copy the .svg formatted file to the directory'] = 'Nëse shton një lloj dispozitivi, duhet të shfaqësh ikonën relative që duhet të kopjosh manualisht file e formatuar .svg tek directory';

$GLOBALS["lang"]['If you are a supported FirstWave customer,a couple of items will make helping your easier. Open a support ticket with FirstWave and attach the logfile. Also include the output from the Support button on the upper right of the'] = 'Nëse jeni një klient i mbështetur në FirstWave, disa gjëra do t\'ju ndihmojnë më lehtë. Hap një biletë mbështetëse me FirstWave dhe lidhe file e log. nga në djathtas nga';

$GLOBALS["lang"]['If you are a supported customer and open a support ticket with FirstWave, please attach these files.'] = 'Nëse jeni një klient i suportuar dhe hapni një biletë mbështetëse me FirstWave, ju lutem bashkangjitni këto dosje.';

$GLOBALS["lang"]['If you are having issues with Google Maps API keys or your company does not have access to create Google Maps API keys, please contact the FirstWave support team.'] = 'Nëse keni probleme me Google Maps API ose kompania juaj nuk ka qasje në krijimin e kyçeve Google Maps API, ju lutem kontaktoni ekipin e mbështetjes së ParëWave.';

$GLOBALS["lang"]['If you are on Windows or your NMIS server is remote, you will need to supply the URL, username and password to access that server.'] = 'Nëse jeni në Windows ose serveri juaj NMIS është remote, do t\'ju duhet të jepni URL, përdoruesin dhe fjalëkalimin për të hyrë në atë server.';

$GLOBALS["lang"]['If you are on a decent broadband or ethernet connection, I would recommend always using -T4 (Aggressive). Some people love -T5 (Insane) though it is too aggressive for my taste. People sometimes specify -T2 (Polite) because they think it is less likely to crash hosts or because they consider themselves to be polite in general. They often do not realize just how slow -T2 really is. Their scan may take ten times longer than a default scan. Machine crashes and bandwidth problems are rare with the default timing options -T3 (Normal) and so I normally recommend that for cautious scanners. Omitting version detection is far more effective than playing with timing values at reducing these problems.'] = 'Nëse jeni në një lidhje të mirë bandëgjerë ose ethernet, unë do të rekomandoja gjithmonë përdorimin - T4 (Agresive). Disa njerëz e duan - T5 (insana) edhe pse është tepër agresive për shijen time. Disa herë njerëzit specifikojnë - T2 (Polite) sepse mendojnë se ka më pak të ngjarë të përplasen me mikpritësit ose ngaqë e konsiderojnë veten të sjellshëm në përgjithësi. Shpesh ata nuk e kuptojnë se sa i ngadaltë është në të vërtetë - T2. Skanimi i tyre mund të marrë dhjetë herë më shumë se një skanim i paracaktuar. Rrënojat e makinave dhe problemet e bandwidthit janë të rralla me alternativat e prezgjedhura të kohës - T3 (Normale) dhe kështu zakonisht e rekomandoj këtë për skanerë të kujdesshëm. Zbulimi i versionit është shumë më i efektshëm sesa të luash me vlerat e kohës në uljen e këtyre problemeve.';

$GLOBALS["lang"]['If you are running a RedHat or Centos system and you have upgraded Nmap, please reset the SUID on the binary by'] = 'Nëse jeni duke drejtuar një sistem Red Hat ose Centos dhe keni përmirësuar Nmap, ju lutem rivendosni SUID në binar nga';

$GLOBALS["lang"]['If you are running an Open-AudIT server on Linux, this does not affect you.'] = 'Nëse drejtoni një server Open-AudIT në Linux, kjo nuk ndikon tek ju.';

$GLOBALS["lang"]['If you are using Open-AudIT on Windows or if your NMIS server is not on your Open-AudIT Server (in the case of some Linux installs), you will need to supply access credentials and a URL to the remote NMIS - but that is all! Yes - Integrations between NMIS and Open-AudIT even work with Windows based Open-AudIT now!'] = 'Nëse jeni duke përdorur Open-AudIT në Windows ose nëse serveri juaj NMIS nuk është në serverin tuaj Open-AudIT (në rastin e disa instalimit të Linux), do t\'ju duhet të jepni kredenciale hyrjeje dhe një URL në NMIS e largët - por kjo është e gjitha! Po - Integrimi midis NMIS dhe Open-AudIT punojnë edhe me Windows me bazë Open-AudIT tani!';

$GLOBALS["lang"]['If you choose a Collector, it will be scheduled to execute on the next 5 minute boundary.'] = 'Nëse zgjedh një koleksionor, do të jetë planifikuar të ekzekutohet në kufirin e 5 minutash.';

$GLOBALS["lang"]['If you do normally set devices_assigned_to_org and the configuration item is enabled, then the OrgID will be used to further refine the match.'] = 'Nëse normalisht vendosni instrumentë_ascipted_to_org dhe elementi i konfigurimit është aktivizuar, atëhere OrgID do të përdoret për të përmirësuar më tej ndeshjen.';

$GLOBALS["lang"]['If you do not normally set devices_assigned_to_org, then it will have no effect. We only check using the OrgID if it has been set in discovery (or manually in an audit script) and enabled in the configuration.'] = 'Nëse normalisht nuk vendosni pajisje_s së shënuar_toorg, atëhere nuk do të ketë efekt. Ne vetëm kontrollojmë përdorimin e OrgID nëse është vendosur në zbulim (ose manualisht në një skenar auditimi) dhe kemi mundësuar konfigurimin.';

$GLOBALS["lang"]['If you enable the configuration item, use discovery to assign an Org and then subsequently change the OrgID of a device after discovery then you will likely have a new device created the next time the discovery runs. In this instance, you should probably just unset devices_assigned_to_org before running subsequent discoveries. This is because (in this instance) you have told Open-AudIT <i>these devices from this discovery belong to Org X<i>, but then changed the Org of the device. You have changed the stored devices information. In this case - there is no no longer a device belonging to Org X, so we create a new one.'] = 'Nëse e aktivoni zërin e konfigurimit, përdorni zbulimin për të caktuar një org dhe pastaj ndryshoni OrgID të një pajisjeje pas zbulimit, ka të ngjarë të keni një pajisje të re të krijuar herën tjetër që do të fillojë zbulimi. Në këtë rast, ndoshta duhet të anulloni vetëm pajisjet e caktuara_to_org para se të kryeni zbulimet pasuese. Kjo është sepse (në këtë rast) i keni thënë Open-AudIT <i>Këto pajisje nga ky zbulim i përkasin Org X<i>, por pastaj ndryshuar Org e pajisjes. Keni ndryshuar informacionin e pajisjeve të ruajtura. Në këtë rast - nuk ka më një pajisje që i përket Org X, kështu që krijojmë një të ri.</i></i>';

$GLOBALS["lang"]['If you have Anti-Virus software running, allowing the services of Opmantek (omkd), Apache (apache2.2) and MySQL (mysql) to auto start and run is essential. These services are used by Open-AudIT. You should only need to do this once. If your Anti-Virus program keeps prompting you about Open-AudIT, please post to the forums or send an email to support with the name and version of your Anti-Virus software.'] = 'Nëse keni programe anti-Virus, duke lejuar shërbimet e Opmantek (omkd), Apash (apa2.2) dhe MySQL (misql) për të filluar dhe drejtuar është thelbësore. Këto shërbime përdoren nga Open-AudIT. Duhet ta bësh këtë vetëm një herë. Nëse programi juaj anti-Virus vazhdon t\'ju nxitë në lidhje me Open-AudIT, ju lutem dërgoni në forume ose dërgoni një email për të mbështetur emrin dhe versionin e programit tuaj anti-Virus.';

$GLOBALS["lang"]['If you have working credentials, you can expect the full amount of information possible.<br><br>Obviously, the best way to use Open-AudIT is to have working credentials for the devices being discovered (be they WMI, SSH, or SNMP credentials).<br><br>We also have a page on auditing without credentials.'] = 'Nëse keni kredenciale në punë, mund të prisni të gjithë sasinë e informacionit të mundshëm.<br/><br/>Është e qartë se mënyra më e mirë për të përdorur Open-AudIT është të kemi kredenciale pune për pajisjet që po zbulohen (të jenë ato WMI, SSH ose kredenciale SNSMP).<br/><br/>Kemi gjithashtu një faqe në auditim pa kredenciale.';

$GLOBALS["lang"]['If you include the \"id\" field <strong>and</strong> set it with a number, that item will be updated rather than created.'] = 'Nëse përfshin fushën \"id\" <strong>dhe</strong> Përcaktoje me një numër, ky element do të rifreskohet në vend të krijimit.';

$GLOBALS["lang"]['If you need to configure Active Directory access, you can usually use the example of <code>cn=Users,dc=your,dc=domain,dc=com</code> for your <code>base_dn</code>. There is no need to set <code>user_dn</code>.'] = 'Nëse ju duhet të konfiguroni hyrjen në Directory aktive, zakonisht mund të përdorni shembullin e <code>cn=Users,dc=your,dc=domain,dc=com</code> për ty <code>base_dn</code>. Nuk është nevoja të caktohet <code>user_dn</code>.';

$GLOBALS["lang"]['If you need to configure OpenLDAP access for your users and a given users access DN is normally <code>uid=username@domain,cn=People,dc=your,dc=domain,dc=com</code> then you should set <code>base_dn</code> to <code>dc=your,dc=domain,dc=com</code> and <code>user_dn</code> to <code>uid=@username@@domain,cn=People</code>. The special words <code>@username</code> and <code>@domain</code> will be replaced by the login details provided by your user on the login page.'] = 'Nëse ju duhet të konfiguroni qasjen OpenLDAP për përdoruesit tuaj dhe një akses të dhënë nga përdoruesit DN është normalisht <code>uid=username@domain,cn=People,dc=your,dc=domain,dc=com</code> atëherë duhet të vendosesh <code>base_dn</code> për <code>dc=your,dc=domain,dc=com</code> dhe <code>user_dn</code> për <code>uid=@username@@domain,cn=People</code>. Fjalët speciale <code>@username</code> dhe <code>@domain</code> do të zëvendësohet nga detajet e hyrjes dhënë nga përdoruesi juaj në faqen e hyrjes.';

$GLOBALS["lang"]['If you run discovery upon a subnet that the Server (or Collector) is directly installed on, you can expect the following for responding devices'] = 'Nëse kryeni zbulimin në një nënnet ku është instaluar drejtpërdrejt Serveri (ose koleksioni), mund të prisni ndjekjen e pajisjeve në vazhdim për t\'u përgjigjur';

$GLOBALS["lang"]['If you run discovery upon a subnet that your Server (or Collector) is not directly installed on, you can expect the following for responding devices'] = 'Nëse kryeni zbulimin në një nënnet ku Serveri juaj (ose koleksioni) nuk është instaluar drejtpërdrejt, mund të prisni ndjekjen e pajisjeve për t\'u përgjigjur';

$GLOBALS["lang"]['If you select a List type, an additional field will appear called Values. You should put a comma separated list of selectable values here. These will display in a dropdown box whenever the field is edited.'] = 'Nëse zgjidhni llojin e listës, një fushë shtesë do të shfaqet e quajtur Vlerat. Ti a lista nga. Këto do të shfaqen në një kuti me rënie kur të ndryshohet fusha.';

$GLOBALS["lang"]['If you set the values for'] = 'Nëse vendosni vlerat për';

$GLOBALS["lang"]['If you want to force your Agents to use a particular configuration, you can supply the ID of the agents entry to use, as below (replace $id with the number of the Agents entry). When this Agent is installed, it will check-in with the sevrer and <strong>only</strong> check that one individual Agent entrys attributes (tests and actions). This may be useful if you are an MSP - create an Agents entry for a particular customer and have their devices all use this entry, which assigns them to an Org and Location.'] = 'Nëse dëshironi t\'i detyroni agjentët tuaj të përdorin një konfigurim të veçantë, ju mund t\'i jepni ID e agjentëve të hyrjes për t\'u përdorur, si më poshtë (ricaktoni $id me numrin e agjentëve). Kur ky agjenti të jetë instaluar, do të kontrollojë me sevrer dhe <strong>vetëm</strong> Kontrollo atë individ Agent Kjo mund të jetë e dobishme nëse jeni një MSP - i - ja - Krijoni një agjent për një klient të veçantë dhe i përdorni të gjitha pajisjet e tyre, gjë që i cakton në një org dhe vend.';

$GLOBALS["lang"]['If you wish to dig in and customize the Integration, click the Advanced button (and try not to be overwhelmed!).'] = 'Nëse dëshironi të gërmoni dhe të rregulloni integrimin, kliko butonin e hollësishëm (dhe përpiqu të mos jesh i mbytur!).';

$GLOBALS["lang"]['If you wish to run a Discovery on an externally provided device, select the option and when the Integration is created, so s the Discovery.'] = 'Nëse dëshironi të kryeni një zbulim në një pajisje të ofruar nga jashtë, zgjidhni opsionin dhe kur integrimi të krijohet, kështu që tregon zbulimin.';

$GLOBALS["lang"]['If you would like to use the script outside of Discovery we have created another endpoint called <i>scripts</i>. See the documentation'] = 'Nëse dëshironi të përdorni skenarin jashtë Discovery ne kemi krijuar një tjetër pikë e quajtur <i>script-et</i>. Shiko dokumentacionin';

$GLOBALS["lang"]['If your user does not have <i>Run as Administrator</i> rights, they can still download the agent (first command above) and run it to submit an audit as below. It will be a one-off audit without the Agent being installed or scheduled.'] = 'Nëse përdoruesi juaj nuk ka <i>Ekzekuto</i> Të drejtat, ata ende mund të shkarkojnë agjentin (komandantin e parë sipër) dhe ta drejtojnë atë për të paraqitur një auditim si më poshtë. Ai do të jetë një kontroll i vetëm pa u instaluar apo planifikuar agjenti.';

$GLOBALS["lang"]['ifadminstatus'] = 'Ifadminstatus';

$GLOBALS["lang"]['Ifadminstatus'] = 'Ifadminstatus';

$GLOBALS["lang"]['iflastchange'] = 'Ndryshimi i fundit';

$GLOBALS["lang"]['Iflastchange'] = 'Ndryshimi i fundit';

$GLOBALS["lang"]['Ignore Invalid SSL'] = 'Shpërfill';

$GLOBALS["lang"]['Ignored'] = 'Shpërf_ill';

$GLOBALS["lang"]['image'] = 'Figura';

$GLOBALS["lang"]['Image'] = 'Figura';

$GLOBALS["lang"]['Images'] = 'Figura';

$GLOBALS["lang"]['impact_availability'] = 'Ndikimi';

$GLOBALS["lang"]['Impact Availability'] = 'Ndikimi';

$GLOBALS["lang"]['impact_confidentiality'] = 'Ndikimi';

$GLOBALS["lang"]['Impact Confidentiality'] = 'Ndikimi';

$GLOBALS["lang"]['impact_integrity'] = 'Ndikimi i integritetit';

$GLOBALS["lang"]['Impact Integrity'] = 'Ndikimi i integritetit';

$GLOBALS["lang"]['Implement selected controls and procedures'] = 'Zbatimi i kontrolleve dhe procedurave të zgjedhura';

$GLOBALS["lang"]['Implementation'] = 'Shembull aksioni';

$GLOBALS["lang"]['implementation_notes'] = 'Shënime aksioni';

$GLOBALS["lang"]['Implementation Notes'] = 'Shënime aksioni';

$GLOBALS["lang"]['Import'] = 'Importo';

$GLOBALS["lang"]['Import Example Data'] = 'I rëndësishëm';

$GLOBALS["lang"]['Import multiple {collection} using a CSV.'] = 'Importo shumëfish {mbledhje} duke përdorur një CSV.';

$GLOBALS["lang"]['improvement_opportunities'] = 'Mundësitë';

$GLOBALS["lang"]['Improvement Opportunities'] = 'Mundësitë';

$GLOBALS["lang"]['Improves business continuity and resilience'] = 'Përmirëson vazhdimësinë e biznesit dhe elasticitetin';

$GLOBALS["lang"]['In'] = 'Zmadho';

$GLOBALS["lang"]['In a second tab or window go to your OKTA console and click <i>Create App Integration</i>.'] = 'Në një skedë të dytë ose dritare shko tek konsolë juaj OKTA dhe kliko <i>Krijo integrimin e duhur</i>.';

$GLOBALS["lang"]['In a second tab or window sign-on to your'] = 'Në një tab të dytë ose tabelë dritaresh për ty';

$GLOBALS["lang"]['In my personal opinion, the best way to find and audit every single item on your network is a Seed Discovery for each subnet, restricted to that subnet (using credentials). Seed Discoveries use switch, router and computer MAC Address tables to not miss a single device. If it is connected to the network and uses TCP/IP, a switch/router/computer has to know it is there - thats just how TCP/IP works. Combine that with custom TCP and/or UDP ports and you should then be able to determine the device type as well. But thats just my personal preference'] = 'Sipas mendimit tim personal, mënyra më e mirë për të gjetur dhe kontrolluar çdo send në rrjetin tuaj është një zbulim i Farës për çdo subnet, i kufizuar në atë subnet (përdor kredenciale). Zbulimet e farërave përdorin çelësin, udhëzuesin dhe kompjuterët që të mos humbasin asnjë pajisje. Nëse është i lidhur me rrjetin dhe përdor TCP/IP, një çelës/komputer duhet të dijë se është atje - kjo është mënyra se si punon TCP/IP. Bashkoje këtë me portet doganore TCP dhe/ose UDP dhe pastaj do të jesh në gjendje të përcaktosh llojin e dispozitivit gjithashtu. Por kjo është vetëm preferenca ime personale';

$GLOBALS["lang"]['In order for Open-AudIT to be able to apply user permissions on items, we mandate the user of <code>WHERE @filter</code>. If you do not use this format, the queryCreateForm will throw a warning. Only users with the Admin role are permitted to create queries that lack this attribute and even then, only after the configuration item for <i>advanced_queries</i> has been enabled.'] = 'Me qëllim që Open-AudIT të jetë në gjendje të aplikojë të drejtat e përdoruesit mbi elementët, ne mandatojmë përdoruesin <code>WHERE @filter</code>. Nëse nuk përdorni këtë format, kërkesa "Form" do të dërgojë një paralajmërim. Vetëm përdoruesit me rolin Admin janë të lejuar të krijojnë kërkesa që u mungon ky atribut dhe madje edhe më pas, vetëm pas elementit të konfigurimit për <i>Pre_zantime të përparuara</i> është aktivizuar.';

$GLOBALS["lang"]['In order to enable Google Maps you will need to a Google API Key follow this link and log in with your Google account,'] = 'Në mënyrë që të aktivoni Google Maps do t\'ju duhet një Google API për të ndjekur këtë lidhje dhe për të kryer login me ju Profili Google,';

$GLOBALS["lang"]['In order to use the Azure Rest API, you will need to create an Azure Active Directory Application that is used for authentication.'] = 'Për të përdorur Azure Rest API, do t\'ju duhet të krijoni një Program Azure Aktiv Directory që përdoret për autentifikim.';

$GLOBALS["lang"]['In order to use this functionality, it must be enabled in the configuration - click'] = 'Për të përdorur këtë funksion, duhet të jetë aktivizuar në konfigurim - kliko';

$GLOBALS["lang"]['In the (comma seperated) list'] = 'Në listën (comma ndarë)';

$GLOBALS["lang"]['In the case of <code>in</code> and <code>notin</code>, you should enclose the values in round brackets and separate them using a comma (just a comma, not a comma, then space).<br><br>With these operators you can filter quite comprehensively.<br><br>When you add data and filter on multiple columns, those columns are combined using <strong>AND</strong>. You cannot filter using an <strong>OR</strong> condition. With the inclusion of <code>notin</code>, you should be able to get most searches working. And for those that do really require unsupported and complex selections, you can always write an actual query.'] = 'Në rastin e <code>in</code> dhe <code>notin</code>, ju duhet t\'i mbyllni vlerat në grupe dhe t\'i ndani ato duke përdorur një presje (vetëm një comma, jo një presje, pastaj hapësirë).<br/><br/>Me këta operatorë mund të filtroni në mënyrë tërësore.<br/><br/>Kur shtoni të dhëna dhe filtro në kollona të shumëfishta, këto kollona kombinohen <strong>AND</strong>. Nuk mund të filtroni duke përdorur një filtër <strong>OSE</strong> Kushti. Me përfshirjen e <code>notin</code>, ju duhet të jetë në gjendje për të bërë shumicën e kontrolleve punojnë. Dhe për ata që me të vërtetë kërkojnë përzgjedhje të pasuportuara dhe komplekse, ju gjithmonë mund të shkruani një kërkesë aktuale.';

$GLOBALS["lang"]['In the case where we store several fields (usually in JSON format) inside a BIGTEXT MySQL field (eg: credentials.credentials - the credentials column in the credentials table), you should use the format'] = 'Në rastin kur ne ruajmë disa fusha (veçanërisht në formatin JSON) brenda një fushe BIGTEXT MySQL (p.sh: kredenciale. Kredenciale - kollona kredenciale në tabelën kredenciale, duhet të përdorni formatin';

$GLOBALS["lang"]['In the command prompt shell, navigate to the download directory (likely <code>cd Downloads</code>).'] = 'Në krye, lëviz drejt directory e shkarkimit (si p.sh. <code>cd Downloads</code>).';

$GLOBALS["lang"]['Inactive'] = 'Aktiv';

$GLOBALS["lang"]['Incomplete'] = 'plotësim automatik';

$GLOBALS["lang"]['Index'] = 'Treguesi';

$GLOBALS["lang"]['India'] = 'India';

$GLOBALS["lang"]['Indonesia'] = 'Indonezi';

$GLOBALS["lang"]['Indonesian'] = 'Indoneziane';

$GLOBALS["lang"]['Info'] = 'Informacione';

$GLOBALS["lang"]['Information only.'] = 'Vetëm informacion.';

$GLOBALS["lang"]['Informational'] = 'Informacione';

$GLOBALS["lang"]['initial_size'] = 'Madhësia fillestare';

$GLOBALS["lang"]['Initial Size'] = 'Madhësia fillestare';

$GLOBALS["lang"]['Initial login credentials are'] = 'Kredencialet e hyrjes fillestare janë';

$GLOBALS["lang"]['Initiation'] = 'Nismë';

$GLOBALS["lang"]['inode'] = 'Inode';

$GLOBALS["lang"]['Inode'] = 'Inode';

$GLOBALS["lang"]['Input'] = 'Input';

$GLOBALS["lang"]['Input Type'] = 'Input Lloji';

$GLOBALS["lang"]['inputs'] = 'Inputs';

$GLOBALS["lang"]['Inputs'] = 'Inputs';

$GLOBALS["lang"]['Insane'] = 'Insane';

$GLOBALS["lang"]['Insert a new {collection} entry.'] = 'Fut a i ri.';

$GLOBALS["lang"]['Insert example data and discover all that Open-AudIT can tell you.'] = 'Shtoni të dhënat dhe zbuloni gjithçka që Open-AudIT mund t\'ju thotë.';

$GLOBALS["lang"]['Insert your Purchased license Key'] = 'Fut Liçenca Kenia';

$GLOBALS["lang"]['install'] = '_Instalo';

$GLOBALS["lang"]['Install'] = '_Instalo';

$GLOBALS["lang"]['install_date'] = 'Instalo datën';

$GLOBALS["lang"]['Install Date'] = 'Instalo datën';

$GLOBALS["lang"]['install_directory'] = '_Instalo directory';

$GLOBALS["lang"]['Install Directory'] = '_Instalo directory';

$GLOBALS["lang"]['Install OpenScap if required'] = 'Instalo OpenSkap nëse nevoitet';

$GLOBALS["lang"]['install_source'] = 'Instalo Burimin';

$GLOBALS["lang"]['Install Source'] = 'Instalo Burimin';

$GLOBALS["lang"]['Install Support'] = 'Instalo';

$GLOBALS["lang"]['installed_by'] = 'Instaluar nga';

$GLOBALS["lang"]['Installed By'] = 'Instaluar nga';

$GLOBALS["lang"]['installed_on'] = 'Instaluar në';

$GLOBALS["lang"]['Installed On'] = 'Instaluar në';

$GLOBALS["lang"]['Installing'] = 'Duke instaluar';

$GLOBALS["lang"]['Installing on Linux'] = 'Instalim në Linux';

$GLOBALS["lang"]['Installing on MacOS'] = 'Instalohet në MacOS';

$GLOBALS["lang"]['Installing on Windows'] = 'Instalim në Windows';

$GLOBALS["lang"]['instance'] = 'Instanca';

$GLOBALS["lang"]['Instance'] = 'Instanca';

$GLOBALS["lang"]['instance_ident'] = 'Treguesi';

$GLOBALS["lang"]['Instance Ident'] = 'Treguesi';

$GLOBALS["lang"]['instance_options'] = 'Opsionet e instancës';

$GLOBALS["lang"]['Instance Options'] = 'Opsionet e instancës';

$GLOBALS["lang"]['instance_provider'] = 'Instanca Siguruesi';

$GLOBALS["lang"]['Instance Provider'] = 'Instanca Siguruesi';

$GLOBALS["lang"]['instance_reservation_ident'] = 'Reservacion i shembullit Ngushtim automatik';

$GLOBALS["lang"]['Instance Reservation Ident'] = 'Reservacion i shembullit Ngushtim automatik';

$GLOBALS["lang"]['instance_state'] = 'Gjendja e shembullit';

$GLOBALS["lang"]['Instance State'] = 'Gjendja e shembullit';

$GLOBALS["lang"]['instance_tags'] = 'Instanca Tags';

$GLOBALS["lang"]['Instance Tags'] = 'Instanca Tags';

$GLOBALS["lang"]['instance_type'] = 'Lloji i shembullit';

$GLOBALS["lang"]['Instance Type'] = 'Lloji i shembullit';

$GLOBALS["lang"]['Integer'] = 'I plotë';

$GLOBALS["lang"]['Integration'] = 'Integrimi';

$GLOBALS["lang"]['integrations'] = 'Integrimi';

$GLOBALS["lang"]['Integrations'] = 'Integrimi';

$GLOBALS["lang"]['integrations_id'] = 'ID e integrimit';

$GLOBALS["lang"]['Integrations ID'] = 'ID e integrimit';

$GLOBALS["lang"]['integrations_log'] = 'Log për integrimin';

$GLOBALS["lang"]['Integrations Log'] = 'Log për integrimin';

$GLOBALS["lang"]['Integrations can be scheduled as desired. This is left to the user.'] = 'Integrimi mund të planifikohet si i dëshiruar. Kjo i mbetet përdoruesit.';

$GLOBALS["lang"]['Integrations can be scheduled as per Discoveries, Queries, et al.'] = 'Integrimi mund të planifikohet si zbulime, Queries, et al.';

$GLOBALS["lang"]['Interactive Dashboards'] = 'Tabela interaktive';

$GLOBALS["lang"]['Interactive dashboards provide instant visibility into the status of network inventory allowing IT teams to spot newly discovered devices and unusual device behaviour at a glance.'] = 'Tabelat interaktive ofrojnë shikim të menjëhershëm në statusin e inventarit të rrjetit që lejon ekipet e IT të pikasin pajisjet e reja të zbuluara dhe sjelljen e pazakontë të pajisjeve në një shikim.';

$GLOBALS["lang"]['interface'] = 'Interfaqja';

$GLOBALS["lang"]['Interface'] = 'Interfaqja';

$GLOBALS["lang"]['interface_id'] = 'ID e interfaqes';

$GLOBALS["lang"]['Interface ID'] = 'ID e interfaqes';

$GLOBALS["lang"]['interface_type'] = 'Lloji i interfaqjes';

$GLOBALS["lang"]['Interface Type'] = 'Lloji i interfaqjes';

$GLOBALS["lang"]['Internal'] = 'I brendshëm';

$GLOBALS["lang"]['Internal Audit'] = 'Kontrolli i brendshëm';

$GLOBALS["lang"]['Internal Audit & Review'] = 'Kontrolli i brendshëm & Rishikimi';

$GLOBALS["lang"]['Internal Field Name'] = 'Emri i fushës së brendshme';

$GLOBALS["lang"]['Internal ID'] = 'ID e brendshme';

$GLOBALS["lang"]['Internal JSON array of valid access tokens for this user.'] = 'Për këtë përdorues është plot me shenja hyrjeje të vlefshme.';

$GLOBALS["lang"]['Introduction'] = 'Fut';

$GLOBALS["lang"]['invoice'] = 'Rilexo';

$GLOBALS["lang"]['Invoice'] = 'Rilexo';

$GLOBALS["lang"]['invoice_id'] = 'ID e vizores';

$GLOBALS["lang"]['Invoice ID'] = 'ID e vizores';

$GLOBALS["lang"]['invoice_item'] = 'Regjistruesi i faturave';

$GLOBALS["lang"]['Invoice Item'] = 'Regjistruesi i faturave';

$GLOBALS["lang"]['ios_version'] = 'Ios Version';

$GLOBALS["lang"]['Ios Version'] = 'Ios Version';

$GLOBALS["lang"]['ip_address_external_a'] = 'Adresa A';

$GLOBALS["lang"]['Ip Address External A'] = 'Adresa A';

$GLOBALS["lang"]['ip_address_external_b'] = 'Adresa B';

$GLOBALS["lang"]['Ip Address External B'] = 'Adresa B';

$GLOBALS["lang"]['ip_address_internal_a'] = 'Adresa A';

$GLOBALS["lang"]['Ip Address Internal A'] = 'Adresa A';

$GLOBALS["lang"]['ip_address_internal_b'] = 'Adresa B';

$GLOBALS["lang"]['Ip Address Internal B'] = 'Adresa B';

$GLOBALS["lang"]['ip_all_count'] = 'P';

$GLOBALS["lang"]['Ip All Count'] = 'P';

$GLOBALS["lang"]['ip_audited_count'] = 'Numërim i kontrolluar';

$GLOBALS["lang"]['Ip Audited Count'] = 'Numërim i kontrolluar';

$GLOBALS["lang"]['ip_discovered_count'] = 'Ip i zbuluar';

$GLOBALS["lang"]['Ip Discovered Count'] = 'Ip i zbuluar';

$GLOBALS["lang"]['ip_enabled'] = 'Ip aktiv';

$GLOBALS["lang"]['Ip Enabled'] = 'Ip aktiv';

$GLOBALS["lang"]['ip_responding_count'] = 'Numërimi i përgjigjes';

$GLOBALS["lang"]['Ip Responding Count'] = 'Numërimi i përgjigjes';

$GLOBALS["lang"]['ip_scanned_count'] = 'Numër i skanuar Ip';

$GLOBALS["lang"]['Ip Scanned Count'] = 'Numër i skanuar Ip';

$GLOBALS["lang"]['Iran'] = 'Iran';

$GLOBALS["lang"]['Iraq'] = 'Irak';

$GLOBALS["lang"]['Ireland'] = 'Irlandë';

$GLOBALS["lang"]['Irish'] = 'Irlandez';

$GLOBALS["lang"]['Is FRU'] = 'Është FRU';

$GLOBALS["lang"]['is_fru'] = 'Është Fru';

$GLOBALS["lang"]['Is Fru'] = 'Është Fru';

$GLOBALS["lang"]['Is the NMIS server local (on this Open-AudIT server) or remote?'] = 'Është serveri lokal NMIS (në këtë server Open-AudIT) apo në distancë?';

$GLOBALS["lang"]['Is this account active? If set to <code>n</code>, the user cannot logon.'] = 'A është ky tregim aktiv? Nëse duhet vendosur <code>n</code>Përdoruesi nuk mund të futet.';

$GLOBALS["lang"]['Is this query restricted to licensed customers.'] = 'A është kjo kërkesë e kufizuar për klientët e liçensuar.';

$GLOBALS["lang"]['Is this task enabled (y/n).'] = 'A është aktivizuar ky aktivitet (y/n).';

$GLOBALS["lang"]['Isle of Man'] = 'Ishulli i Njeriut';

$GLOBALS["lang"]['Israel'] = 'Izraeli';

$GLOBALS["lang"]['Issue'] = 'Çështja';

$GLOBALS["lang"]['issuer'] = 'Dërgues';

$GLOBALS["lang"]['Issuer'] = 'Dërgues';

$GLOBALS["lang"]['issuer_name'] = 'Dërgues Emri';

$GLOBALS["lang"]['Issuer Name'] = 'Dërgues Emri';

$GLOBALS["lang"]['Issues'] = 'Çështje';

$GLOBALS["lang"]['It <i>Just Works</i> with NMIS'] = 'Ajo <i>Vetëm punë</i> me NMIS';

$GLOBALS["lang"]['It is available at Menu -> Help ->'] = 'Disponohet tek Menu -> Ndihmë';

$GLOBALS["lang"]['It is important to note that when Open-AudIT determines a match any properties set to <i>y</i> must match exactly (and not be blank) in order for Open-AudIT to determine that the discovered device matches a device already in the database. If none of the properties marked <i>y</i> match, then a new device entry will be created, which could result in duplicate device entries. In situations where properties are duplicated, for example a dbus_id is copied during a VM clone, then an existing device may incorrectly get overwritten/updated rather then a new entry being created resulting in missing devices.'] = 'Është e rëndësishme të vërehet se kur Open-AudIT përcakton një korrespondim në çdo prona të caktuara <i>p</i> duhet të korrispondon (dhe të mos jetë bosh) në mënyrë që Open-AudIT të përcaktojë se pajisja e zbuluar përputhet me një pajisje tashmë në databazë. Nëse asnjë nga pronësitë nuk është shënuar <i>p</i> korrispondon, pastaj do të krijohet një dispozitiv i ri, i cili mund të rezultojë në numra të duplikuar të dispozitivit. Në situata ku pronësitë janë duplikuar, për shembull, një dbus_id kopjohet gjatë një kloni VM, pastaj një pajisje ekzistuese mund të mbishkruhet ose mbipërpunohet në mënyrë të gabuar dhe pastaj një hyrje e re krijohet duke rezultuar në pajisje të humbura.';

$GLOBALS["lang"]['It is not uncommon to have an overlapping address space in a given Organisation. Not ideal, but not uncommon.'] = 'Nuk është e pazakontë të kesh një vend të mbivendosjes në një organizatë të caktuar. Jo ideale, por jo e pazakontë.';

$GLOBALS["lang"]['It is very common for second tier motherboard manufacturers to not set this, to set it to all <i>0</i>s or even all <i>F</i>s.'] = 'Është shumë e zakonshme për prodhuesit e dytë të dërrasës së nënës për të mos vendosur këtë, për të vendosur atë në të gjitha <i>0</i>p ose madje edhe të gjitha <i>F</i>S.';

$GLOBALS["lang"]['Italian'] = 'Italisht';

$GLOBALS["lang"]['Italy'] = 'Itali';

$GLOBALS["lang"]['Items not in Baseline'] = 'Elementë në';

$GLOBALS["lang"]['JSON'] = 'JSON';

$GLOBALS["lang"]['JSON to Import'] = 'I pamundur importimi';

$GLOBALS["lang"]['Jamaica'] = 'Xhamajka';

$GLOBALS["lang"]['January'] = 'Janar';

$GLOBALS["lang"]['Japan'] = 'Japoni';

$GLOBALS["lang"]['Japanese'] = 'Japonisht';

$GLOBALS["lang"]['Jersey'] = 'Xhersi';

$GLOBALS["lang"]['Jordan'] = 'Jordani';

$GLOBALS["lang"]['July'] = 'Korrik';

$GLOBALS["lang"]['June'] = 'Qershor';

$GLOBALS["lang"]['Kazakhstan'] = 'Kazakistan';

$GLOBALS["lang"]['Kenya'] = 'Kenia';

$GLOBALS["lang"]['kernel_version'] = 'Emri i Kernel';

$GLOBALS["lang"]['Kernel Version'] = 'Emri i Kernel';

$GLOBALS["lang"]['Key'] = 'Kenia';

$GLOBALS["lang"]['Key Components'] = 'Komponenti kyç';

$GLOBALS["lang"]['Key Password (optional)'] = 'Fjalëkalimi i kyçit (option)';

$GLOBALS["lang"]['keys'] = 'Çelësat';

$GLOBALS["lang"]['Keys'] = 'Çelësat';

$GLOBALS["lang"]['Kiribati'] = 'Kiribati';

$GLOBALS["lang"]['Korea'] = 'Kore';

$GLOBALS["lang"]['Korean'] = 'Koreane';

$GLOBALS["lang"]['Kuwait'] = 'Kuvajti';

$GLOBALS["lang"]['Kyrgyz'] = 'Kirgiz';

$GLOBALS["lang"]['Kyrgyz Republic'] = 'Republika kirgize';

$GLOBALS["lang"]['LDAP Group'] = 'Grupi LDAP';

$GLOBALS["lang"]['LDAP was searched for this user and their account was found.'] = 'LDAP është kërkuar për këtë përdorues dhe profili i tyre u gjet.';

$GLOBALS["lang"]['LDAP was searched for this user and their account was not found. Check the LDAP server logs. The user credentials have worked, but the user was not found. Also check you have specified the correct Base DN attribute when you created the LDAP Server in Open-AudIT.'] = 'LDAP është kërkuar për këtë përdorues dhe profili i tyre nuk u gjet. Kontrollo shkrimet e serverit LDAP. Kredencialet e përdoruesit kanë funksionuar, por përdoruesi nuk u gjet. Kontrollo gjithashtu që keni specifikuar atributin bazë DN kur keni krijuar serverin LDAP në Open-AudIT.';

$GLOBALS["lang"]['lang'] = 'Leng';

$GLOBALS["lang"]['Lang'] = 'Leng';

$GLOBALS["lang"]['language'] = 'Gjuha';

$GLOBALS["lang"]['Language'] = 'Gjuha';

$GLOBALS["lang"]['Lao'] = 'Lao';

$GLOBALS["lang"]['last_changed'] = 'Ndryshimi i fundit';

$GLOBALS["lang"]['Last Changed'] = 'Ndryshimi i fundit';

$GLOBALS["lang"]['last_finished'] = 'Fundi';

$GLOBALS["lang"]['Last Finished'] = 'Fundi';

$GLOBALS["lang"]['last_logon'] = 'Logon i fundit';

$GLOBALS["lang"]['Last Logon'] = 'Logon i fundit';

$GLOBALS["lang"]['Last Name'] = 'Emri';

$GLOBALS["lang"]['last_os_update'] = 'Përditëso';

$GLOBALS["lang"]['Last Os Update'] = 'Përditëso';

$GLOBALS["lang"]['last_result'] = 'Rezultati i fundit';

$GLOBALS["lang"]['Last Result'] = 'Rezultati i fundit';

$GLOBALS["lang"]['last_run'] = 'Ekzekutimi i fundit';

$GLOBALS["lang"]['Last Run'] = 'Ekzekutimi i fundit';

$GLOBALS["lang"]['last_seen'] = 'E fundit';

$GLOBALS["lang"]['Last Seen'] = 'E fundit';

$GLOBALS["lang"]['last_seen_by'] = 'E fundit Nga';

$GLOBALS["lang"]['Last Seen By'] = 'E fundit Nga';

$GLOBALS["lang"]['last_user'] = 'Përdoruesi i fundit';

$GLOBALS["lang"]['Last User'] = 'Përdoruesi i fundit';

$GLOBALS["lang"]['Last up is WMI. For Windows as in Linux, a user with Administrator level access is preferred (see Target Client Configuration on the wiki).'] = 'E fundit është WMI. Për Windows si në Linux, preferohet hyrja në nivelin e Administratorit (shiko konfigurimin e klientit të objektivit në wiki).';

$GLOBALS["lang"]['lastModified'] = 'E fundit';

$GLOBALS["lang"]['LastModified'] = 'E fundit';

$GLOBALS["lang"]['latitude'] = 'Pozicioni';

$GLOBALS["lang"]['Latitude'] = 'Pozicioni';

$GLOBALS["lang"]['Latvia'] = 'Letoni';

$GLOBALS["lang"]['Latvian'] = 'Letonisht';

$GLOBALS["lang"]['Layout'] = 'Planimetria';

$GLOBALS["lang"]['ldap'] = 'Ldap';

$GLOBALS["lang"]['Ldap'] = 'Ldap';

$GLOBALS["lang"]['ldap_base_dn'] = 'Ldap Baza Dn';

$GLOBALS["lang"]['Ldap Base Dn'] = 'Ldap Baza Dn';

$GLOBALS["lang"]['ldap_dn_account'] = 'Ldap Dn Profili';

$GLOBALS["lang"]['Ldap Dn Account'] = 'Ldap Dn Profili';

$GLOBALS["lang"]['ldap_dn_password'] = 'Fjalëkalimi';

$GLOBALS["lang"]['Ldap Dn Password'] = 'Fjalëkalimi';

$GLOBALS["lang"]['Learn About'] = 'Mësoni për';

$GLOBALS["lang"]['Learn More'] = 'Mëso më shumë';

$GLOBALS["lang"]['lease_expiry_date'] = 'Data e skadencës Lease';

$GLOBALS["lang"]['Lease Expiry Date'] = 'Data e skadencës Lease';

$GLOBALS["lang"]['Lebanon'] = 'Liban';

$GLOBALS["lang"]['legal_requirements'] = 'Kërkesa ligjore';

$GLOBALS["lang"]['Legal Requirements'] = 'Kërkesa ligjore';

$GLOBALS["lang"]['Lesotho'] = 'Lezoto';

$GLOBALS["lang"]['Less Than'] = 'është më e vogël se';

$GLOBALS["lang"]['Less Than or Equals'] = 'Më pak se ose të barabartë';

$GLOBALS["lang"]['Lets set the logging to debug. Copy the file:'] = 'Le të vendosim prerjen në çbug. Kopjo file:';

$GLOBALS["lang"]['level'] = 'Niveli';

$GLOBALS["lang"]['Level'] = 'Niveli';

$GLOBALS["lang"]['Level of privileges needed to exploit (None, Low, High).'] = 'Niveli i privilegjeve të nevojshme për të shfrytëzuar (askush, i ulët, i lartë).';

$GLOBALS["lang"]['Liberia'] = 'Liberi';

$GLOBALS["lang"]['Libraries (ie, code that another program might include). These are typically items like Wordpress extensions, drupal extensions, node.js libraries, Android / iPhone / Windows libraries, python libraries, etc.'] = 'Bibliotekat (ie, kodi që mund të përfshijë një program tjetër). Këto janë zakonisht objekte si zgjatja e Wordpress, zgjatjet derupale, bibliotekat e nyjeve, Android / iPhone / Windows, bibliotekat pythone, etj.';

$GLOBALS["lang"]['Libyan Arab Jamahiriya'] = 'Arabi libian Jamahiriya';

$GLOBALS["lang"]['License'] = 'Liçenca';

$GLOBALS["lang"]['License Key'] = 'Liçenca';

$GLOBALS["lang"]['License Required'] = 'Liçenca';

$GLOBALS["lang"]['Licensed users are free to add or modify the rules as you see fit. If you have a device with an SNMP OID that does not match a model already in the file - now you can add it easily. No more waiting for us to provide a patch and add it to the code base for you.<br><br>When you create a Rules entry, you will need to provide a name and a list of inputs and outputs. The inputs and outputs are stored as JSON arrays within the database.<br><br>Inputs have a table and attribute, an operator and a value. When executing the condition, it works thus: If $table . $attribute $operator $value then apply the outputs.<br><br>An example rule to match an SNMP OID and set the model is below.<br>'] = 'Përdoruesit e liçensuar janë të lirë të shtojnë apo të ndryshojnë rregullat siç e shihni të përshtatshme. Nëse keni një pajisje me një OID SNMP që nuk përputhet me një model që tashmë është në dosje, tani mund ta shtoni me lehtësi. Nuk ka më pritje për ne për të siguruar një pjesë dhe të shtuar atë në bazë kod për ju.<br/><br/>Kur të krijoni një rregull, do t\'ju duhet të jepni një emër dhe një listë të inputeve dhe rezultateve. Të dhënat dhe daljet ruhen si grupe JSON brenda bazës së të dhënave.<br/><br/>Inputs kanë një tryezë dhe atribut, një operator dhe një vlerë. Kur e ekzekuton këtë gjendje, funksionon kështu: Nëse tableta $ . $ dhënë $operatorit $ vlerë, atëherë zbatoji rezultatet.<br/><br/>Një rregull shembullor për t\'iu përshtatur një OID SNEMP dhe për të vendosur modelin është më poshtë.<br/>';

$GLOBALS["lang"]['Licenses'] = 'Liçenca';

$GLOBALS["lang"]['Liechtenstein'] = 'Lihtenshtajni';

$GLOBALS["lang"]['Like'] = 'Si';

$GLOBALS["lang"]['Like most other attributes, Additional Fields can be bulk edited. Use the Bulk Edit function as you normally would and you will see the Additional Fields are available for input.'] = 'Ashtu si shumica e atributeve të tjera, fushat shtesë mund të redaktohen më shumë. Përdor funksionin BulkView si zakonisht dhe do të shohësh që fushat shtesë janë në dispozicion për të dhënë.';

$GLOBALS["lang"]['Like versus Equals'] = 'Si kundër të barabartëve';

$GLOBALS["lang"]['limit'] = 'Kufiri';

$GLOBALS["lang"]['Limit'] = 'Kufiri';

$GLOBALS["lang"]['Limit the query to the first X items.'] = 'Kufizo kërkesën tek elementët e parë X.';

$GLOBALS["lang"]['Limited to 100 rows.'] = 'I kufizuar në 100 rreshta.';

$GLOBALS["lang"]['line_amount'] = 'Linja';

$GLOBALS["lang"]['Line Amount'] = 'Linja';

$GLOBALS["lang"]['Line Graph'] = 'Linja';

$GLOBALS["lang"]['line_number_a'] = 'Linja A';

$GLOBALS["lang"]['Line Number A'] = 'Linja A';

$GLOBALS["lang"]['line_number_b'] = 'Linja B';

$GLOBALS["lang"]['Line Number B'] = 'Linja B';

$GLOBALS["lang"]['line_text'] = 'Linja Teksti';

$GLOBALS["lang"]['Line Text'] = 'Linja Teksti';

$GLOBALS["lang"]['Line charts must return date or my_date, description or my_description and count.'] = 'Hartat e rreshtave duhet të kthehen në datën ose në datën time, përshkrimin apo në numërimin dhe llogarinë time.';

$GLOBALS["lang"]['link'] = 'Lidhje';

$GLOBALS["lang"]['Link'] = 'Lidhje';

$GLOBALS["lang"]['Link (Advanced)'] = 'Lidhje';

$GLOBALS["lang"]['Linked Files'] = 'File të lidhur';

$GLOBALS["lang"]['links'] = 'Lidhje';

$GLOBALS["lang"]['Links'] = 'Lidhje';

$GLOBALS["lang"]['Links this discovery to the associated cloud (if required). Links to <code>clouds.id</code>.'] = 'e lidh këtë zbulim me renë (nëse kërkohet). Lidhje me <code>clouds.id</code>.';

$GLOBALS["lang"]['Links to <code>discovery_scan_options.id</code>.'] = 'Lidhje me <code>discovery_scan_options.id</code>.';

$GLOBALS["lang"]['Links to <code>standards.id</code>'] = 'Lidhje me <code>standards.id</code>';

$GLOBALS["lang"]['Links to <standards_policies.id</code>'] = 'Lidhje me <standards_policies.id< code=""></standards_policies.id<>';

$GLOBALS["lang"]['Linux'] = 'Linux';

$GLOBALS["lang"]['Linux Packages'] = 'Paketat Linux';

$GLOBALS["lang"]['List'] = 'Lista';

$GLOBALS["lang"]['List All NMAP Ports, Protocols and Programs for Each Device'] = 'Lista me të gjitha portet NMAP, protokollet dhe programet për çdo mjet';

$GLOBALS["lang"]['List Devices'] = 'Dispozitivët e listës';

$GLOBALS["lang"]['List Discoveries'] = 'Lista';

$GLOBALS["lang"]['list_table_format'] = 'Formati i listës';

$GLOBALS["lang"]['List Table Format'] = 'Formati i listës';

$GLOBALS["lang"]['List Tables'] = 'Lista';

$GLOBALS["lang"]['Lithuania'] = 'Lituani';

$GLOBALS["lang"]['Lithuanian'] = 'Lituaniane';

$GLOBALS["lang"]['Load Balancing'] = 'Ngarko Balaning';

$GLOBALS["lang"]['Local'] = 'Lokale';

$GLOBALS["lang"]['Local Area Network'] = 'Rrjeti i zonave lokale';

$GLOBALS["lang"]['local_port'] = 'Porta lokale';

$GLOBALS["lang"]['Local Port'] = 'Porta lokale';

$GLOBALS["lang"]['Local area network'] = 'Rrjeti i zonës lokale';

$GLOBALS["lang"]['Localhost'] = 'Lokale';

$GLOBALS["lang"]['Localisation'] = 'Lokale';

$GLOBALS["lang"]['Location'] = 'Vendodhja';

$GLOBALS["lang"]['Location A'] = 'Vendodhja A';

$GLOBALS["lang"]['Location B'] = 'Vendodhja B';

$GLOBALS["lang"]['location_id'] = 'ID e pozicionit';

$GLOBALS["lang"]['Location ID'] = 'ID e pozicionit';

$GLOBALS["lang"]['location_id_a'] = 'Vendodhja ID A';

$GLOBALS["lang"]['Location ID A'] = 'Vendodhja ID A';

$GLOBALS["lang"]['location_id_b'] = 'Vendodhja ID B';

$GLOBALS["lang"]['Location ID B'] = 'Vendodhja ID B';

$GLOBALS["lang"]['location_latitude'] = 'Pozicioni';

$GLOBALS["lang"]['Location Latitude'] = 'Pozicioni';

$GLOBALS["lang"]['location_level'] = 'Vendodhja';

$GLOBALS["lang"]['Location Level'] = 'Vendodhja';

$GLOBALS["lang"]['location_longitude'] = 'Gjatësia';

$GLOBALS["lang"]['Location Longitude'] = 'Gjatësia';

$GLOBALS["lang"]['Location Name'] = 'Emri i pozicionit';

$GLOBALS["lang"]['location_rack'] = 'Vendodhja';

$GLOBALS["lang"]['Location Rack'] = 'Vendodhja';

$GLOBALS["lang"]['location_rack_position'] = 'Pozicioni';

$GLOBALS["lang"]['Location Rack Position'] = 'Pozicioni';

$GLOBALS["lang"]['location_rack_size'] = 'Vendndodhja';

$GLOBALS["lang"]['Location Rack Size'] = 'Vendndodhja';

$GLOBALS["lang"]['location_room'] = 'Vendodhja';

$GLOBALS["lang"]['Location Room'] = 'Vendodhja';

$GLOBALS["lang"]['location_suite'] = 'Vendndodhja';

$GLOBALS["lang"]['Location Suite'] = 'Vendndodhja';

$GLOBALS["lang"]['Locations'] = 'Vendodhja';

$GLOBALS["lang"]['Locations in this'] = 'Vendodhja në këtë';

$GLOBALS["lang"]['log'] = 'E ulët';

$GLOBALS["lang"]['Log'] = 'E ulët';

$GLOBALS["lang"]['log_format'] = 'Formati i log';

$GLOBALS["lang"]['Log Format'] = 'Formati i log';

$GLOBALS["lang"]['Log Line'] = 'Linja';

$GLOBALS["lang"]['log_path'] = 'Pozicioni';

$GLOBALS["lang"]['Log Path'] = 'Pozicioni';

$GLOBALS["lang"]['log_rotation'] = 'Log';

$GLOBALS["lang"]['Log Rotation'] = 'Log';

$GLOBALS["lang"]['log_status'] = 'Gjëndja';

$GLOBALS["lang"]['Log Status'] = 'Gjëndja';

$GLOBALS["lang"]['Logging in'] = 'Kopjimi';

$GLOBALS["lang"]['Logical Cores '] = 'Kore logjike ';

$GLOBALS["lang"]['logical_count'] = 'Numërim logjik';

$GLOBALS["lang"]['Logical Count'] = 'Numërim logjik';

$GLOBALS["lang"]['Logout'] = 'Logout';

$GLOBALS["lang"]['Logs'] = 'Logs';

$GLOBALS["lang"]['longitude'] = 'Gjatësia';

$GLOBALS["lang"]['Longitude'] = 'Gjatësia';

$GLOBALS["lang"]['low'] = 'E ulët';

$GLOBALS["lang"]['Low'] = 'E ulët';

$GLOBALS["lang"]['Lower Case'] = 'E ulët';

$GLOBALS["lang"]['Lowercase Hostname'] = 'poshtë';

$GLOBALS["lang"]['Luxembourg'] = 'Luksemburg';

$GLOBALS["lang"]['MAC Address'] = 'Adresa';

$GLOBALS["lang"]['MAC Manufacturer'] = 'MAC Prodhuesi';

$GLOBALS["lang"]['mac'] = 'Mek';

$GLOBALS["lang"]['Mac'] = 'Mek';

$GLOBALS["lang"]['Mac Address'] = 'Adresa';

$GLOBALS["lang"]['MacOS'] = 'MacOS';

$GLOBALS["lang"]['MacOS Packages'] = 'Paketat MacOS';

$GLOBALS["lang"]['Macao'] = 'Makao';

$GLOBALS["lang"]['Macedonia'] = 'Maqedoni';

$GLOBALS["lang"]['Madagascar'] = 'Madagaskar';

$GLOBALS["lang"]['Maintain records of risk assessments and treatments'] = 'Mbaj të dhënat e vlerësimeve dhe trajtimeve të rrezikut';

$GLOBALS["lang"]['maintenance_expires'] = 'Skadimi i mirëmbajtjes';

$GLOBALS["lang"]['Maintenance Expires'] = 'Skadimi i mirëmbajtjes';

$GLOBALS["lang"]['Make My Default Dashboard'] = 'Bëje dërrasën time të paracaktuar';

$GLOBALS["lang"]['Make this install a Collector'] = 'Bëje këtë instalo një koleksionues';

$GLOBALS["lang"]['Malawi'] = 'Malavi';

$GLOBALS["lang"]['Malay'] = 'Malay';

$GLOBALS["lang"]['Malaysia'] = 'Malajzi';

$GLOBALS["lang"]['Maldives'] = 'Maldive';

$GLOBALS["lang"]['Mali'] = 'Mali';

$GLOBALS["lang"]['Malta'] = 'Malta';

$GLOBALS["lang"]['Manage'] = 'Menaxho';

$GLOBALS["lang"]['Manage Licenses'] = 'Menaxho liçencat';

$GLOBALS["lang"]['Manage in NMIS'] = 'Menaxhim në NMIS';

$GLOBALS["lang"]['Manage incidents and nonconformities'] = 'Menaxho incidente dhe moskonformime';

$GLOBALS["lang"]['Managed'] = 'Menazhuar';

$GLOBALS["lang"]['managed_by'] = 'Menazhuar nga';

$GLOBALS["lang"]['Managed By'] = 'Menazhuar nga';

$GLOBALS["lang"]['Manual Input'] = 'Input manual';

$GLOBALS["lang"]['Manually set by user, defaults to Production.'] = 'nga përdorues prezgjedhur.';

$GLOBALS["lang"]['Manually set by user.'] = 'Manuali i caktuar nga përdoruesi.';

$GLOBALS["lang"]['manufacture_date'] = 'Prodhimi Data';

$GLOBALS["lang"]['Manufacture Date'] = 'Prodhimi Data';

$GLOBALS["lang"]['manufacturer'] = 'Prodhuesi';

$GLOBALS["lang"]['Manufacturer'] = 'Prodhuesi';

$GLOBALS["lang"]['manufacturer_code'] = 'Kodi i prodhuesit';

$GLOBALS["lang"]['Manufacturer Code'] = 'Kodi i prodhuesit';

$GLOBALS["lang"]['Map'] = 'Harta';

$GLOBALS["lang"]['maps'] = 'Hartat';

$GLOBALS["lang"]['Maps'] = 'Hartat';

$GLOBALS["lang"]['March'] = 'Mars';

$GLOBALS["lang"]['Marshall Islands'] = 'Ishujt Marshall';

$GLOBALS["lang"]['Martinique'] = 'Martinique';

$GLOBALS["lang"]['mask'] = 'Maska';

$GLOBALS["lang"]['Mask'] = 'Maska';

$GLOBALS["lang"]['Match'] = 'Korrispondencë';

$GLOBALS["lang"]['match_options'] = 'Mundësitë';

$GLOBALS["lang"]['Match Options'] = 'Mundësitë';

$GLOBALS["lang"]['Match Order'] = 'Korrispond';

$GLOBALS["lang"]['Match Process'] = 'Proçesi';

$GLOBALS["lang"]['match_string'] = 'Stringë';

$GLOBALS["lang"]['Match String'] = 'Stringë';

$GLOBALS["lang"]['Matching Attribute'] = 'Korrispondon me Veçoritë';

$GLOBALS["lang"]['Matching Devices - Including OrgID'] = 'Përputhni paisjet - përfshirë OrgID -';

$GLOBALS["lang"]['Matching Linux Devices'] = 'Dispozitivët Linux';

$GLOBALS["lang"]['Matching is conducted in the following order'] = 'Korrispondon sipas radhës së mëposhtme';

$GLOBALS["lang"]['maturity_level'] = 'Niveli i pjekurisë';

$GLOBALS["lang"]['Maturity Level'] = 'Niveli i pjekurisë';

$GLOBALS["lang"]['maturity_score'] = 'Pikët e pjekurisë';

$GLOBALS["lang"]['Maturity Score'] = 'Pikët e pjekurisë';

$GLOBALS["lang"]['Mauritania'] = 'Mauritania';

$GLOBALS["lang"]['Mauritius'] = 'Mauriki';

$GLOBALS["lang"]['max_file_size'] = 'Madhësia e file maksimum';

$GLOBALS["lang"]['Max File Size'] = 'Madhësia e file maksimum';

$GLOBALS["lang"]['Max Length'] = 'Gjatësia maksimum';

$GLOBALS["lang"]['max_size'] = 'Madhësia';

$GLOBALS["lang"]['Max Size'] = 'Madhësia';

$GLOBALS["lang"]['May'] = 'Maj';

$GLOBALS["lang"]['Mayotte'] = 'Meiteta';

$GLOBALS["lang"]['Measures the likelihood of the vulnerability being attacked, and is based on the current state of exploit techniques, exploit code availability, or active, “in-the-wild” exploitation.'] = 'Mat gjasat që cënueshmëria të sulmohet dhe bazohet në gjendjen aktuale të teknikave të shfrytëzimit, shfrytëzimit të kodit të disponueshëm apo aktiv, shfrytëzimi i viteve të fundit.';

$GLOBALS["lang"]['medium'] = 'Mesatare';

$GLOBALS["lang"]['Medium'] = 'Mesatare';

$GLOBALS["lang"]['members'] = 'Anëtarë';

$GLOBALS["lang"]['Members'] = 'Anëtarë';

$GLOBALS["lang"]['memory'] = 'Kujtesa';

$GLOBALS["lang"]['Memory'] = 'Kujtesa';

$GLOBALS["lang"]['memory_count'] = 'Kodifikimi i kujtesës';

$GLOBALS["lang"]['Memory Count'] = 'Kodifikimi i kujtesës';

$GLOBALS["lang"]['memory_slot_count'] = 'Kodifikimi';

$GLOBALS["lang"]['Memory Slot Count'] = 'Kodifikimi';

$GLOBALS["lang"]['menu_category'] = 'Kategoria me menu';

$GLOBALS["lang"]['Menu Category'] = 'Kategoria me menu';

$GLOBALS["lang"]['menu_display'] = 'Shfaqje me menu';

$GLOBALS["lang"]['Menu Display'] = 'Shfaqje me menu';

$GLOBALS["lang"]['message'] = 'Mesazhi:';

$GLOBALS["lang"]['Message'] = 'Mesazhi:';

$GLOBALS["lang"]['meta_last_changed'] = 'Meta Ndryshimi i fundit';

$GLOBALS["lang"]['Meta Last Changed'] = 'Meta Ndryshimi i fundit';

$GLOBALS["lang"]['metric'] = 'Metrike';

$GLOBALS["lang"]['Metric'] = 'Metrike';

$GLOBALS["lang"]['Metropolitan Area Network'] = 'Rrjeti i zonave metropolitane';

$GLOBALS["lang"]['Metropolitan area network'] = 'Rrjeti i zonës metropolitane';

$GLOBALS["lang"]['Mexico'] = 'Meksikë';

$GLOBALS["lang"]['Micronesia'] = 'Mikronezia';

$GLOBALS["lang"]['Microsoft Azure Fields'] = 'Fushat e Microsoft Azure';

$GLOBALS["lang"]['microtime'] = 'unit-format';

$GLOBALS["lang"]['Microtime'] = 'unit-format';

$GLOBALS["lang"]['minute'] = 'minuta';

$GLOBALS["lang"]['Minute'] = 'minuta';

$GLOBALS["lang"]['Minutes'] = 'minuta';

$GLOBALS["lang"]['Minutes Since last Audit are Greater than'] = 'Minute që nga kontrolli i fundit janë më të mëdha se';

$GLOBALS["lang"]['model'] = 'Modeli';

$GLOBALS["lang"]['Model'] = 'Modeli';

$GLOBALS["lang"]['model_family'] = 'Familja model';

$GLOBALS["lang"]['Model Family'] = 'Familja model';

$GLOBALS["lang"]['Modified'] = 'Ndryshuar';

$GLOBALS["lang"]['Modifying an Existing Script'] = 'Ndryshon një shkrim ekzistues';

$GLOBALS["lang"]['module'] = 'Moduli';

$GLOBALS["lang"]['Module'] = 'Moduli';

$GLOBALS["lang"]['module_index'] = 'Treguesi i modulit';

$GLOBALS["lang"]['Module Index'] = 'Treguesi i modulit';

$GLOBALS["lang"]['Modules'] = 'Moduli';

$GLOBALS["lang"]['Moldova'] = 'Moldavi';

$GLOBALS["lang"]['Monaco'] = 'Monako';

$GLOBALS["lang"]['Monday'] = 'E hënë';

$GLOBALS["lang"]['Mongolia'] = 'Mongolia';

$GLOBALS["lang"]['monitor'] = 'Ekrani';

$GLOBALS["lang"]['Monitor'] = 'Ekrani';

$GLOBALS["lang"]['Monitor and measure ISMS performance'] = 'Monitor dhe mat performancën IMS';

$GLOBALS["lang"]['Montenegro'] = 'Mali i Zi';

$GLOBALS["lang"]['month'] = 'Muaji';

$GLOBALS["lang"]['Month'] = 'Muaji';

$GLOBALS["lang"]['Montserrat'] = 'Monserrat';

$GLOBALS["lang"]['More Information'] = 'Informacione shtesë';

$GLOBALS["lang"]['More Secure'] = 'Më i sigurt';

$GLOBALS["lang"]['More elaborate SQL can used to group attributes within a range. Below shows the SQL for devices not seen in a pie chart grouped by last seen date ranges.'] = 'SQL më i përpunuar mund të përdoret për të grupuar atribute brenda një game. Poshtë tregon SQL për pajisjet që nuk shihen në një tabelë byreku të grupuar nga intervalet e fundit të datës.';

$GLOBALS["lang"]['More information about debugging this can be found on a helpful Stack Overflow thread'] = 'Më shumë informacion rreth debug që mund të gjendet në një fill të dobishëm stack';

$GLOBALS["lang"]['Morocco'] = 'Marok';

$GLOBALS["lang"]['Most likely the Windows firewall (or a third party firewall) is denying the connection attempt.<br><br>Please log on to the target Windows machine and check the firewall settings.'] = 'Ka shumë të ngjarë që Firewall Dritaret (ose një mur mbrojtës i tretë i partisë) të jetë duke mohuar përpjekjen për lidhje.<br/><br/>Ju lutem hyni tek makina Windows dhe kontrolloni rregullimet e firewall-it.';

$GLOBALS["lang"]['Most of Open-AudIT is Licensed with GNU AGPL.'] = 'Shumica e Open-AudIT është licensuar me GNU AGPL.';

$GLOBALS["lang"]['motherboard'] = 'Shënim';

$GLOBALS["lang"]['Motherboard'] = 'Shënim';

$GLOBALS["lang"]['mount_point'] = 'Mali Pikë';

$GLOBALS["lang"]['Mount Point'] = 'Mali Pikë';

$GLOBALS["lang"]['mount_type'] = 'Lloji';

$GLOBALS["lang"]['Mount Type'] = 'Lloji';

$GLOBALS["lang"]['Mozambique'] = 'Mozambik';

$GLOBALS["lang"]['Must Respond To Ping. If set, Nmap will fist attempt to send and listen for an ICMP response. If the device does not respond, no further scanning will occur.<br>Previously a device did not have to respond to a ping for Open-AudIT to continue scanning.'] = 'Duhet t\'i përgjigjemi Ping. Nëse caktuar, Nmap do të përpiqet me grushta për të dërguar dhe dëgjuar për një përgjigje të ICMP. Nëse pajisja nuk përgjigjet, nuk do të ndodhë skanimi i mëtejshëm.<br/>Më parë, një pajisje nuk duhej t\'i përgjigjej një ping për Open-AudIT për të vazhduar skanimin.';

$GLOBALS["lang"]['Must Respond to Ping'] = 'Duhet t\'i përgjigjemi Ping - së';

$GLOBALS["lang"]['My AntiVirus is prompting me to deny/allow things'] = 'AntiVirusi im po më shtyn të mohoj gjërat.';

$GLOBALS["lang"]['My time is off in Open-AudIT'] = 'Koha ime mbaroi në Open-AudIT';

$GLOBALS["lang"]['Myanmar'] = 'Mjanmar';

$GLOBALS["lang"]['N+1'] = 'N+1';

$GLOBALS["lang"]['N+M'] = 'N+M';

$GLOBALS["lang"]['N-to-1'] = 'N-to-1';

$GLOBALS["lang"]['N-to-N'] = 'N-to-N';

$GLOBALS["lang"]['NMIS Business Service'] = 'Shërbimi i biznesit NMIS';

$GLOBALS["lang"]['NMIS Customer'] = 'Klient NMIS';

$GLOBALS["lang"]['NMIS Device Options'] = 'Mundësitë';

$GLOBALS["lang"]['NMIS Device Selection'] = 'Zgjedhja e dispozitivit NMIS';

$GLOBALS["lang"]['NMIS Field Name'] = 'Emri i fushës NMIS';

$GLOBALS["lang"]['NMIS Field Type'] = 'Lloji i fushës NMIS';

$GLOBALS["lang"]['NMIS Group'] = 'NMIS Group';

$GLOBALS["lang"]['NMIS Poller'] = 'Pjalmuesi NMIS';

$GLOBALS["lang"]['NMIS Role'] = 'NMIS Roli';

$GLOBALS["lang"]['NOTE'] = 'DYJA';

$GLOBALS["lang"]['NOTE #2'] = 'FJALU';

$GLOBALS["lang"]['NOTE - For more info on DateTime formats, see'] = 'NOE - Për më shumë informacion në formatet e datës, shiko';

$GLOBALS["lang"]['NOTE - If you request a downloaded CSV, XML or JSON format (either a single credential, or the complete collection) the actual credential details will be sent. Not the encrypted string, the actual username, password, community string, etc. Any sensitive details are not displayed in the web GUI, but are made available via other formats. To prevent this export a configuration item is available called decrypt_credentials.'] = 'NUKE - Nëse kërkoni një format të shkarkuar CSV, XML ose JSONF (as edhe një kredencial të vetëm, as koleksion të plotë) detajet aktuale të kredencialit do të dërgohen. Jo stringa e kriptuar, përdoruesi aktual, fjalëkalimi, stringa e komunitetit, etj. Çdo detaj i ndjeshëm nuk është shfaqur në GUI web, por është bërë i disponueshëm nëpërmjet formateve të tjera. Për të parandaluar këtë eksportim është në dispozicion një element konfigurimi i quajtur dekript_credencials.';

$GLOBALS["lang"]['NOTE - The curly brackets in the data filed should be used as-is (not replaced as per other examples above).'] = 'NOE - kllapat kaçurrere në të dhënat e paraqitura duhet të përdoren as-is (jo të zëvendësohet si për shembuj të tjerë më sipër).';

$GLOBALS["lang"]['NOTE - You can prevent plain text credentials being displayed below by setting the configuration item for <code>decrypt_credentials</code> to <code>n</code>.'] = 'NOE - Mund të parandaloni shfaqjen e kredencialeve në tekstin e mëposhtëm duke vendosur për të zgjedhur elementin e konfigurimit <code>decrypt_credentials</code> për <code>n</code>.';

$GLOBALS["lang"]['name'] = 'Emri';

$GLOBALS["lang"]['Name'] = 'Emri';

$GLOBALS["lang"]['Name: The name you are giving to this field. Ideally it should be unique.'] = 'Emri: Emrin që po i jepni kësaj fushe. Duhet të jetë unike.';

$GLOBALS["lang"]['Namibia'] = 'Namibi';

$GLOBALS["lang"]['Nauru'] = 'Nauru';

$GLOBALS["lang"]['Nepal'] = 'Nepal';

$GLOBALS["lang"]['net_index'] = 'Treguesi i rrjetit';

$GLOBALS["lang"]['Net Index'] = 'Treguesi i rrjetit';

$GLOBALS["lang"]['Netherlands Antilles'] = 'Antilet e Holandës';

$GLOBALS["lang"]['Netherlands the'] = 'Hollanda';

$GLOBALS["lang"]['netmask'] = 'Netmask';

$GLOBALS["lang"]['Netmask'] = 'Netmask';

$GLOBALS["lang"]['netstat'] = 'Netstat';

$GLOBALS["lang"]['Netstat'] = 'Netstat';

$GLOBALS["lang"]['Netstat Policies'] = 'Politikat Netstat';

$GLOBALS["lang"]['Netstat Ports'] = 'Portat Netstat';

$GLOBALS["lang"]['Netstat Ports use a combination of port number, protocol and program. If all are present the policy passes.'] = 'Netstat Ports përdor një kombinim të numrit të portit, protokollit dhe programit. Nëse të gjithë janë të pranishëm politika kalon.';

$GLOBALS["lang"]['Network'] = 'Rrjeti';

$GLOBALS["lang"]['network_address'] = 'Adresa e rrjetit';

$GLOBALS["lang"]['Network Address'] = 'Adresa e rrjetit';

$GLOBALS["lang"]['Network Discovery'] = 'Rrjeti';

$GLOBALS["lang"]['network_domain'] = 'Rrjeti Domain';

$GLOBALS["lang"]['Network Domain'] = 'Rrjeti Domain';

$GLOBALS["lang"]['Network Types'] = 'Rrjeti Lloji';

$GLOBALS["lang"]['Network type is set to Local Area Network by default, but can be changed by the user as they see fit. The types supported are below (with thanks to Wikipedia).<br><br>A network can be characterized by its physical capacity or its organizational purpose. Use of the network, including user authorization and access rights, differ accordingly.'] = 'Lloji i rrjetit është vendosur në Rrjetin Vendor të Zonave, si e prezgjedhur, por mund të ndryshohet nga përdoruesi siç e shohin të përshtatshëm. Llojet e suportuara janë më poshtë (sipas Wikipedia).<br/><br/>Një rrjet mund të karakterizohet nga aftësia fizike ose qëllimi i tij organizativ. Përdorimi i rrjetit, duke përfshirë autorizimin e përdoruesit dhe të drejtat e hyrjes, ndryshon në përputhje me këtë.';

$GLOBALS["lang"]['networks'] = 'Rrjeti';

$GLOBALS["lang"]['Networks'] = 'Rrjeti';

$GLOBALS["lang"]['Networks Generated By'] = 'Rrjetet e gjeneruara';

$GLOBALS["lang"]['Networks are updated with every discovery. Items such as IPs Available and IPs Used, along with Gateways, DHCP and DNS Servers are added as found.'] = 'Rrjeti është i përditësuar me çdo zbulim. Janë shtuar elementë të tillë si IPs në dispozicion dhe IPs, së bashku me hyrjet, DHCP dhe serverat DNS.';

$GLOBALS["lang"]['Networks respond differently depending on how they are configured. Some routers and/or firewalls can respond <i>on behalf</i> of IPs on the other side of their interfaces to the Open-AudIT Server. It is quite common to see Nmap report a probe for SNMP (UDP port 161) to respond as open|filtered for devices that do and do not exist. This is misleading as there is no device at that IP, yet it ends up with a device entry in the database. 99.9% of the time, it is not Open-AudIT, nor even Nmap, but the network causing this issue. Now that we have the options to treat open|filtered ports as either open or closed, we can eliminate a lot of this confusion. Enterprise users even have the option to change this on a per discovery basis (more than just using the Medium (Classic) item, as above).'] = 'Rrjetet reagojnë ndryshe në varësi të asaj se si janë konfiguruar. Disa rubers dhe/ose firewalls mund të përgjigjen <i>në emër</i> nga IPs në anën tjetër të interfaqeve të tyre tek Serveri Open-AudIT. Eshtë mjaft e zakonshme të shohësh raportin e Nmap një hetim për SNMP (portin 161) për t\'u përgjigjur si ifiltruar për pajisjet që bëjnë dhe nuk ekzistojnë. Kjo është mashtruese pasi nuk ka asnjë pajisje në atë IP, megjithatë përfundon me një pajisje hyrje në databazë. 99.9% e kohës, nuk është Open-AudIT, as edhe Nmap, por rrjeti që shkakton këtë çështje. Tani që kemi mundësitë për t\'i trajtuar portet e filtruara si të hapura ose të mbyllura, mund të eliminojmë shumë nga ky konfuzion. Përdoruesit e ndërmarrjeve madje kanë mundësinë ta ndryshojnë këtë mbi një bazë për zbulim (më shumë se vetëm përdorimi i elementit të mesëm (klasikë), si më sipër).';

$GLOBALS["lang"]['Networks using a CIDR Mask of'] = 'Rrjetet duke përdorur një maskë CIDR';

$GLOBALS["lang"]['New Building Name'] = 'Emër i ri ndërtimi';

$GLOBALS["lang"]['New Caledonia'] = 'Kaledonia e re';

$GLOBALS["lang"]['New Floor Name'] = 'E re';

$GLOBALS["lang"]['New Room Name'] = 'Emri i kanalit';

$GLOBALS["lang"]['New Row Name'] = 'Emër i ri rreshti';

$GLOBALS["lang"]['New Zealand'] = 'Zelanda e Re';

$GLOBALS["lang"]['News'] = 'Lajme';

$GLOBALS["lang"]['News checks-in each time you login for updated queries & packages, configuration recommendations, release announcements, blog posts and more.'] = 'Lajmet-në çdo herë që hyni në hyrje të pyetjeve të përditësuara & paketave, rekomandimeve të konfigurimit, publikimit të njoftimeve, postimeve në blog dhe më shumë.';

$GLOBALS["lang"]['News is our way of keeping you up-to-date with the latest fixes, announcements, query updates, software versions and more.<br><br>You do not need to keep on top of the wiki or check for new releases, we can send these to you!'] = 'Lajmet janë mënyra jonë për t\'ju mbajtur të përditësuar me rregullimet më të fundit, njoftimet, refrenimet e pyetjeve, versionet e programeve dhe më shumë.<br/><br/>Ju nuk keni nevojë për të mbajtur në krye të wiki apo kontrolloni për lirime të reja, ne mund të dërgojë këto për ju!';

$GLOBALS["lang"]['next_hop'] = 'Vazhdo';

$GLOBALS["lang"]['Next Hop'] = 'Vazhdo';

$GLOBALS["lang"]['next_run'] = 'Vazhdo';

$GLOBALS["lang"]['Next Run'] = 'Vazhdo';

$GLOBALS["lang"]['Next click <i>Create your own application</i>.'] = 'Vazhdo <i>Krijo programin tuaj</i>.';

$GLOBALS["lang"]['Next, click OK, then right click the Apache 2.4 service and click Restart. Done!'] = 'Pastaj klikoni OK, pastaj klikoni në shërbimin Apash 2.4 dhe klikoni në Rinisi. U bë!';

$GLOBALS["lang"]['Next, right click the Apache2.4 service and select Properties, then click the Log On tab.'] = 'Pastaj, djathtas kliko shërbimin Apaçi 2.4 dhe zgjidh Propertësinë, pastaj kliko tek Log On Tab.';

$GLOBALS["lang"]['Nicaragua'] = 'Nikaragua';

$GLOBALS["lang"]['Niger'] = 'Nigeri';

$GLOBALS["lang"]['Nigeria'] = 'Nigeri';

$GLOBALS["lang"]['Niue'] = 'Niue';

$GLOBALS["lang"]['nmap'] = 'Nmap';

$GLOBALS["lang"]['Nmap'] = 'Nmap';

$GLOBALS["lang"]['Nmap Port Scanning Responses'] = 'Analizo përgjigjet e skanimit të portit';

$GLOBALS["lang"]['nmap_tcp_ports'] = 'Nmap Tcp Ports';

$GLOBALS["lang"]['Nmap Tcp Ports'] = 'Nmap Tcp Ports';

$GLOBALS["lang"]['nmap_udp_ports'] = 'Nmap Udp Ports';

$GLOBALS["lang"]['Nmap Udp Ports'] = 'Nmap Udp Ports';

$GLOBALS["lang"]['Nmap cannot determine whether the port is open because packet filtering prevents its probes from reaching the port. The filtering could be from a dedicated firewall device, router rules, or host-based firewall software. These ports frustrate attackers because they provide so little information. Sometimes they respond with ICMP error messages such as type 3 code 13 (destination unreachable: communication administratively prohibited), but filters that simply drop probes without responding are far more common. This forces Nmap to retry several times just in case the probe was dropped due to network congestion rather than filtering. This slows down the scan dramatically.'] = 'Nmap nuk mund të përcaktojë nëse porti është i hapur për shkak se filtrimi i paketës ndalon sondat e tij të arrijnë në port. Filtërrimi mund të jetë nga një pajisje e dedikuar për firewall, rregulla udhëzuese, apo program softvere të bazuar në host. Këto porte i pengojnë sulmuesit, sepse japin kaq pak informacion. Ndonjëherë ata reagojnë me mesazhe të gabuara të ICMP-së, të tilla si tipi 3 i kodit 13 (i pamundur: komunikimi administrativisht i ndaluar), por filtrat që thjesht rëniet e hetimeve pa përgjigje janë shumë më të zakonshme. Këto forca Nmap duhet të riprovojnë disa herë vetëm në rast se sonda bie për shkak të bllokimit të rrjetit në vend të filtrimit. Kjo e ngadalëson skanerin dramatikisht.';

$GLOBALS["lang"]['Nmap places ports in this state when it is unable to determine whether a port is open or filtered. This occurs for scan types in which open ports give no response. The lack of response could also mean that a packet filter dropped the probe or any response it elicited. So Nmap does not know for sure whether the port is open or being filtered. The UDP, IP protocol, FIN, NULL, and Xmas scans classify ports this way.'] = 'Nap vendos portet në këtë shtet kur nuk është në gjendje të përcaktojë nëse një port është i hapur apo i filtruar. Kjo ndodh për llojet e skanimit në të cilat portet e hapura nuk japin përgjigje. Mungesa e përgjigjes mund të nënkuptojë gjithashtu se një paketë filtri e hodhi sondën apo çdo përgjigje që ajo shkaktoi. Prandaj, Nmap nuk e di me siguri nëse porti është i hapur apo i filtruar. Protokolli UDP, IP, FIN, NULL dhe Xmas skanojnë portet në këtë mënyrë.';

$GLOBALS["lang"]['Nmap timing details are found on the bottom of this linked page'] = 'Nmap detajet e kohës gjenden në fund të kësaj faqeje të lidhur';

$GLOBALS["lang"]['nmis_business_service'] = 'Shërbimi i biznesit Nmis';

$GLOBALS["lang"]['Nmis Business Service'] = 'Shërbimi i biznesit Nmis';

$GLOBALS["lang"]['nmis_customer'] = 'Klient Nmis';

$GLOBALS["lang"]['Nmis Customer'] = 'Klient Nmis';

$GLOBALS["lang"]['nmis_group'] = 'Nmis Group';

$GLOBALS["lang"]['Nmis Group'] = 'Nmis Group';

$GLOBALS["lang"]['nmis_manage'] = 'Nmis Manage';

$GLOBALS["lang"]['Nmis Manage'] = 'Nmis Manage';

$GLOBALS["lang"]['nmis_name'] = 'Emri';

$GLOBALS["lang"]['Nmis Name'] = 'Emri';

$GLOBALS["lang"]['nmis_notes'] = 'Shënime Nmis';

$GLOBALS["lang"]['Nmis Notes'] = 'Shënime Nmis';

$GLOBALS["lang"]['nmis_poller'] = 'Nmis Poller';

$GLOBALS["lang"]['Nmis Poller'] = 'Nmis Poller';

$GLOBALS["lang"]['nmis_poller_uuid'] = 'Nmis Poller Uuid';

$GLOBALS["lang"]['Nmis Poller Uuid'] = 'Nmis Poller Uuid';

$GLOBALS["lang"]['nmis_role'] = 'Roli i Nmis';

$GLOBALS["lang"]['Nmis Role'] = 'Roli i Nmis';

$GLOBALS["lang"]['No'] = 'Jo';

$GLOBALS["lang"]['No Devices Returned'] = 'Asnjë mjet nuk u kthye';

$GLOBALS["lang"]['No Google Maps API Key present, you will not be able to display the map.'] = 'Jo Google Maps API E tashmja kyçe, nuk do të jeni në gjendje të shfaqni hartën.';

$GLOBALS["lang"]['No License for Professional or Enterprise'] = 'Jo liçenca për kompaninë profesionale apo profesionale';

$GLOBALS["lang"]['No Results'] = 'Asnjë rezultat';

$GLOBALS["lang"]['No data in License Key'] = 'Asnjë e dhënë në liçenca Kyçi';

$GLOBALS["lang"]['No database upgrade required at this time.'] = 'Nuk kërkohet përmirësim i të dhënave në këtë kohë.';

$GLOBALS["lang"]['No devices are in the database.'] = 'Nuk ka pajisje në bazën e të dhënave.';

$GLOBALS["lang"]['Node'] = 'Node';

$GLOBALS["lang"]['None'] = 'Asnjë';

$GLOBALS["lang"]['Norfolk Island'] = 'Ishulli Norfolk';

$GLOBALS["lang"]['Normal'] = 'Normal';

$GLOBALS["lang"]['Northern Mariana Islands'] = 'Ishujt Mariana Veriore';

$GLOBALS["lang"]['Norway'] = 'Norvegji';

$GLOBALS["lang"]['Norwegian'] = 'Norvegjeze';

$GLOBALS["lang"]['Not Applicable'] = 'Nuk është e përshtatshme';

$GLOBALS["lang"]['Not Checked'] = 'Nuk është kontrolluar';

$GLOBALS["lang"]['Not Equals'] = 'Jo të barabartë';

$GLOBALS["lang"]['Not In'] = 'Jo në';

$GLOBALS["lang"]['Not Like'] = 'Jo si';

$GLOBALS["lang"]['Not Set'] = 'Nuk është caktuar';

$GLOBALS["lang"]['Not every computer will be able to successfully complete a benchmark. We have seen in some fail in testing for reasons beyond our control. The logs should help point you in the right direction for these items.'] = 'Jo çdo kompjuter do të jetë në gjendje të plotësojë me sukses një provë. Ne kemi parë në disa gabime në testime për arsye përtej kontrollit tonë. Frutat duhet t\'ju ndihmojnë t\'ju drejtojnë në drejtimin e duhur për këto gjëra.';

$GLOBALS["lang"]['Not in the (comma seperated) list'] = 'Jo në lista';

$GLOBALS["lang"]['Not normally used. If set, this requires the device to have an open port (as per Scan Options) to be considered responding. A MAC address, arp response or ping response is not considered sufficient to be considered responding. Useful if a router or firewall between the Open-AudIT server and target IP is responding to port scans on the IPs behalf.'] = 'Nuk përdoret normalisht. Nëse caktuar, kjo kërkon që pajisja të ketë një port të hapur (siç për opsionet e skanimit) të konsiderohet si përgjigje. Një adresë shtesë, përgjigje e ashpër apo përgjigje ping nuk konsiderohet e mjaftueshme për t\'u konsideruar si përgjigje. I dobishëm nëse një udhëzues apo një mur mbrojtës midis serverit Open-AudIT dhe objektivit IP i përgjigjet skanimit të portit në emër të IP.';

$GLOBALS["lang"]['Note'] = 'Shënim';

$GLOBALS["lang"]['Note - Selecting a parent will automatically provide access to its children (although it wont be shown here).'] = 'Shënim - Zgjedhja automatike e prindit do t\'u japë mundësi fëmijëve të saj (megjithëse nuk tregohet këtu).';

$GLOBALS["lang"]['Note that the 100 device Enterprise license does not include support.'] = 'Vini re se licensa e 100 pajisjeve nuk përfshin mbështetje.';

$GLOBALS["lang"]['Note, you may need to make the script executable with'] = 'Vini re, ndoshta duhet ta bëni shkrimin të ekzekutueshëm me';

$GLOBALS["lang"]['Notes'] = 'Shënime';

$GLOBALS["lang"]['notes'] = 'Shënime';

$GLOBALS["lang"]['Notice'] = 'Shënim';

$GLOBALS["lang"]['notin'] = 'Notin';

$GLOBALS["lang"]['Notin'] = 'Notin';

$GLOBALS["lang"]['November'] = 'Nëntor';

$GLOBALS["lang"]['Now for the Subscription ID, click All Services, Subscriptions and copy it.'] = 'Tani për ID-në e rekrutimit, klikoni të gjitha shërbimet, regjistrimet dhe kopjoni.';

$GLOBALS["lang"]['Now we need to provide the Azure Active Directory application access to your subscription.<br><br>Click on Resource Groups and then the resource group you would like your Azure Active Directory Application to have access to.<br><br>Click Add. The role should be Contributor and then search for the app (Open-AudIT). Then click Save.<br><br>Now the application has access to the subscription, so we can make API calls. The API calls will be requested on behalf of the application, not your user.'] = 'Tani duhet t\'i japim Azure Aktiv Directory qasje në abonimin tuaj.<br/><br/>Kliko tek Grupi i Burimeve dhe pastaj tek i cili do të keni hyrje në programin Azure Aktiv Directory.<br/><br/>Kliko Shto. Roli duhet të jetë një bashkëpunëtor dhe pastaj kërko për aplikacionin (Hap-AudIT). Atëherë kliko Save.<br/><br/>Tani aplikimi ka qasje në abonim, kështu që ne mund të bëjmë thirrje API. Thirrjet API do të kërkohen në emër të aplikativit, jo të përdoruesit tuaj.';

$GLOBALS["lang"]['nvd_json'] = 'Nvd Json';

$GLOBALS["lang"]['Nvd Json'] = 'Nvd Json';

$GLOBALS["lang"]['ORDER BY'] = 'NORD NGA';

$GLOBALS["lang"]['OS'] = 'OS';

$GLOBALS["lang"]['OS Families'] = 'Familje';

$GLOBALS["lang"]['OS Family'] = 'Familja';

$GLOBALS["lang"]['OS Group'] = 'Grupi';

$GLOBALS["lang"]['OUTPUTS'] = 'GJATË';

$GLOBALS["lang"]['oae_manage'] = 'Menaxhuesi i Oae';

$GLOBALS["lang"]['Oae Manage'] = 'Menaxhuesi i Oae';

$GLOBALS["lang"]['object_ident'] = 'Identifikimi i objektit';

$GLOBALS["lang"]['Object Ident'] = 'Identifikimi i objektit';

$GLOBALS["lang"]['Obtain top management support'] = 'Suporti për menaxhimin e lartë';

$GLOBALS["lang"]['October'] = 'Tetor';

$GLOBALS["lang"]['Offset'] = 'Spostimi';

$GLOBALS["lang"]['Okta'] = 'Okta';

$GLOBALS["lang"]['Oman'] = 'Oman';

$GLOBALS["lang"]['omk_uuid'] = 'Omk Uuid';

$GLOBALS["lang"]['Omk Uuid'] = 'Omk Uuid';

$GLOBALS["lang"]['On'] = 'Në';

$GLOBALS["lang"]['On Windows, Open-AudIT uses WMI as it is primary method of auditing. Windows has a notorious reputation where remote WMI is concerned. It tends to either <i>just work</i> or some mystery item on the target requires changing. If you are experiencing difficulty auditing remote Windows PCs, we have created a script called test_windows_client.vbs. You can run this script <strong>locally</strong> on the machine in question, after signing on as the user that is used by Open-AudIT to perform the audit. The script makes <strong>no changes</strong> to the target devices. It checks most (not all) of the items below and generates PASS, FAIL and INFO tags for various properties. NOTE - If your target system is being audited correctly, you should not change any settings. Some of the below do not exist on Windows PCs that are able to be audited and some do exist. Only change settings if your discoveries on particular PCs are not working as intended.'] = 'Në Windows, Open-AudIT përdor WMI pasi është metoda kryesore e auditimit. Dritaret ka një reputacion famëkeq ku është i shqetësuar WMI e largët. Tregon ose <i>Vetëm punë.</i> ose ndonjë element mister në objektiv kërkon ndryshim. Nëse jeni duke përjetuar vështirësi gjatë kontrollit të PC-ve Windows të largët, kemi krijuar një script të quajtur test_client.vbs. Mund ta ekzekutosh këtë script <strong>Në lokale</strong> në makinerinë në fjalë, pas nënshkrimit në si përdorues që përdoret nga Open-AudIT për të kryer auditimin. Shkrimi bëhet <strong>jo</strong> për pajisjet objektive. Ajo kontrollon shumicën (jo të gjithë) e sendeve më poshtë dhe prodhon PUS, FAIL dhe INFO etiketa për prona të ndryshme. NJERËZIT - Nëse sistemi juaj objektiv po kontrollohet siç duhet, nuk duhet të ndryshoni asnjë rregullim. Disa nga poshtë nuk ekzistojnë në PC Windows që janë në gjendje të kontrollohen dhe disa ekzistojnë. Vetëm ndrysho rregullimet nëse zbulimet e tua në kompjuterë të veçantë nuk punojnë siç janë menduar.';

$GLOBALS["lang"]['On the Tasks List page, click the <i>Add New</i> button to configure a task.'] = 'Në faqen e detyrave, kliko tek lista <i>Shto E re</i> pulsant për të konfiguruar një aktivitet.';

$GLOBALS["lang"]['On the field <i>Match String</i> you should provide the name of the software that you want to track. You can use the percent sign (%) as a wildcard in where required.'] = 'Në fushë <i>Stringë</i> Ju duhet të jepni emrin e programit që ju dëshironi të ndiqni. Mund të përdorni shenjën për qind (%) si një tabelë të egër ku kërkohet.';

$GLOBALS["lang"]['On the next page you will be able to select Access Keys and see your key or create a new key.'] = 'Në faqen në vazhdim do të jeni në gjendje të zgjidhni kyçet e hyrjes dhe të shihni kyçin tuaj apo të krijoni një kyç të ri.';

$GLOBALS["lang"]['On the target Windows PC, run the DCOM utility and verify (or set) the below attributes. Start -> Run, Enter DCOMCNFG and press OK. This will open the DCOMCNFG window.'] = 'Në PC Windows, punoni në njësinë DCOM dhe verifikoni (ose vini) cilësitë e mëposhtme. Fillimi -> Vrapo, COMCNFG dhe shtype mirë. Kjo do të hapë dritaren DCOMCNFG.';

$GLOBALS["lang"]['On the top right (underneath the menu bar) you will see several buttons. These allow you to select another dashboard, set the current dashboard as your homepage (if it is not already) and edit the current dashboard (if you have permission).'] = 'Në krye djathtas (në fund të menusë) do të shihni disa butona. Këto ju lejojnë të zgjidhni një tabelë tjetër, vendosini tabelat aktuale si home faqe (nëse nuk është tani) dhe ndrysho tabelën aktuale (nëse keni leje).';

$GLOBALS["lang"]['On-Premise, Not Cloud'] = 'O-Premise, jo Re';

$GLOBALS["lang"]['Once an Additional Field has been created it can be used in queries and groups just like any other attribute in the database.'] = 'Pasi të jetë krijuar një Fusha shtesë mund të përdoret në pyetje dhe grupe si çdo atribut tjetër në databazë.';

$GLOBALS["lang"]['Once commented out, your certificate will be validated, but may also fail this validation if you are using self-signed certificates and have not configured your server correctly.'] = 'Pasi të komentohet, çertifikata juaj do të jetë e vlefshme, por mund të dështojë edhe ky vlerësim nëse jeni duke përdorur çertifikatat e auto-firmuara dhe nuk keni konfiguruar si duhet serverin tuaj.';

$GLOBALS["lang"]['Once the script has run on a target, should the script delete itself.'] = 'Pasi script-i të jetë ekzekutuar në një objektiv, nëse script-i fshin vetë.';

$GLOBALS["lang"]['Once those initial queries (snmp, ssh, wmi) are complete, if the device is a supported by the audit scripts (Windows, Linux, OSX, AIX, HP-UX, Solaris and ESXi), the correct audit script will be copied to the target and executed. The audit script will self delete upon completion. The result will be stored on the target machine as an XML file. The Open-AudIT server will then retrieve the result file for processing and delete the result file on the target. The location the audit script is copied to on the target device (at least for SSH audits) is configurable by editing the discovery_linux_script_directory config item. By default it is set to /tmp/. This may need changing if /tmp has noexec set. The result file is then processed and the device details updated within Open-AudIT.'] = 'Sapo të jenë plotësuar këto pyetje fillestare (snmp, ssh, wmi), nëse pajisja është e mbështetur nga script-et audituese (Windows, Linux, OSX, AIX, HP-UX, Solaris dhe ESXi), skenari korrekt i kontrollit do të kopjohet në objektiv dhe do të ekzekutohet. Teksti i kontrollit do të fshihet pas përfundimit. Rezultati do të ruhet në makinën e synuar si një file XML. Serveri Open-AudIT do të tërheqë pastaj file e rezultateve për proçesimin dhe do të eleminojë file e rezultateve tek objektivi. Pozicioni ku është kopjuar script-i i kontrollit tek dispozitivi i synuar (të paktën për auditimet SSH) është i konfigurueshëm duke ndryshuar zbulimin_linux_rect_directory config element. Paracaktuar është vendosur në /tmp/. Kjo mund të ketë nevojë për ndryshim nëse /tmp ka set noexec. Rezultati file është dhe në.';

$GLOBALS["lang"]['Once you click the execute button, Open-AudIT will spawn a process to initiate the discovery and return the user to the discovery details page. The newly spawned process takes the configured discovery options and executes Nmap commands to determine the initial list of IP addresses to be scanned (or queries Active Directory if that type is used). Each IP to be scanned is placed into a queue. Once the initial process has completed (and there are IPs to be scanned in the queue) a number of processes will be spawned to further scan each IP in parallel. This number of processes is configurable in the configuration, edit the attribute <i>queue_limit</i>. By default this is set to 20.'] = 'Sapo të klikoni butonin e ekzekutimit, Open-AudIT do të krijojë një proces për të filluar zbulimin dhe për ta kthyer përdoruesin në faqen e detajeve të zbulimit. Procesi i sapodalë merr opsionet e konfiguruara të zbulimit dhe ekzekuton komandat e Nmap për të përcaktuar listën e parë të adresave IP që duhen skanuar (ose keet Aktiv Directory nëse përdoret ky lloj). Çdo IP që duhet skanuar është vendosur në rradhë. Sapo procesi fillestar të ketë përfunduar (dhe do të skanohet IP në rradhë) një numër procesesh do të lindin për të skanuar më tej çdo IP paralelisht. Ky numër procesesh është i konfigurueshëm në konfigurim, ndrysho atributin <i>Kufiri</i>. Kjo është vendosur në 20.';

$GLOBALS["lang"]['Once you have chosen your devices to edit, click the pencil button on the top right of the table.'] = 'Pasi të keni zgjedhur pajisjet tuaja për të ndryshuar, kliko butonin e lapsit në të djathtë të tavolinës.';

$GLOBALS["lang"]['Once you have done this, Open-AudIT will attempt to verify your user logon details against the configured Auth Method. If the user has valid credentials and <code>use_authorisation</code> is set, Open-AudIT will ask for the list of groups that the user belongs to. If the user is in the corresponding groups for Open-AudIT Roles and Orgs, those Roles and Orgs will be applied to that user.'] = 'Pasi ta keni bërë këtë, Open-AudIT do të përpiqet të verifikojë detajet e tua të logonit të përdoruesit kundër metodës së konfiguruar të akuzimit. Nëse përdoruesi ka kredenciale të vlefshme dhe <code>use_authorisation</code> është vendosur, Open-AudIT do të kërkojë listën e grupeve që përdoruesi i takon. Nëse përdoruesi është në grupet korresponduese për Rolet Open-AudIT dhe Orgs, këto role dhe Orgs do të aplikohen në atë përdorues.';

$GLOBALS["lang"]['Once you have generated a Baseline Definition you can schedule it to be run against a specified group of devices.'] = 'Pasi të keni krijuar një përcaktim bazë, mund ta përcaktoni që të zbatohet kundër një grupi të caktuar pajisjesh.';

$GLOBALS["lang"]['Once you have those items, in Open-AudIT Enterprise you can go to menu -> Discover -> Clouds -> Create Clouds, select the <i>Amazon AWS</i> type and paste them in. Done.'] = 'Sapo t\'i keni këto objekte, në Open-AudIT Ndërmarrje Zbulo -> Re -> Krijo Re, zgjidh <i>AWS e Amazonës</i> Shkruaji dhe ngjisi. U bë.';

$GLOBALS["lang"]['Once you have those items, in Open-AudIT Enterprise you can go to menu -> Discover -> Clouds -> Create Clouds, select the <i>Microsoft Azure</i> type and paste them in. Done.'] = 'Sapo t\'i keni këto objekte, në Open-AudIT Ndërmarrje Zbulo -> Re -> Krijo Re, zgjidh <i>Microsoft Azure</i> Shkruaji dhe ngjisi. U bë.';

$GLOBALS["lang"]['Once you have your cloud credentials, it is merely a matter of creating a new cloud and running the discovery - or scheduling first/future discoveries. Make sure you also have the credentials required to log on to your cloud machines, and it is all done for you just like a regular discovery. Credentials for your cloud'] = 'Pasi të keni kredencialet e reve, është thjesht një çështje e krijimit të një reje të re dhe drejtimit të zbulimit - ose programimit të zbulimeve të para/të çastit. Sigurohu që të kesh edhe kredencialet e kërkuara për t\'u lidhur me makinat e reve, dhe gjithçka bëhet për ju si një zbulim i rregullt. Krenciale për renë tuaj';

$GLOBALS["lang"]['One of <code>3x2</code>, <code>4x2</code>, <code>4x3</code> or <code>4x4</code>.'] = 'Një nga <code>3x2</code>. <code>4x2</code>. <code>4x3</code> ose <code>4x4</code>.';

$GLOBALS["lang"]['One of Campus Area Network, Cloud Network, Enterprise Private Network, Home Area Network, Local Area Network, Metropolitan Area Network, Passive Optical Local Area Network, Personal Area Network, Storage-Area Network, System-Area Network, Virtual Private Network, Wide Area Network, Wireless Local Area Network.'] = 'Një nga Rrjeti i Zonave Kampus, Rrjeti i Reve, Rrjeti Privat i Ndërmarrjeve, Rrjeti i Zonave të Shtëpisë, Rrjeti i Zonave Lokale, Rrjeti i Zonave Metropolitane, Rrjeti i Zonave Optike, Rrjeti i Zonave Personale, Rrjeti i Ruajtjes, Rrjeti i Sistemit-Aresë, Rrjeti Virtual Privat, Rrjeti i Zonave të gjera, Rrjeti Vendore Wireless.';

$GLOBALS["lang"]['One of Development, Disaster Recovery, Evaluation, Pre-Production, Production, Testing, Training, User Acceptance Testing'] = 'Një nga zhvillimin, rimëkëmbjen e katastrofave, vlerësimin, para-Prodhimin, prodhimin, testimin, trainimin, testimin e pranimit të përdoruesit';

$GLOBALS["lang"]['One of allocated, delegated, planning, reserved, unallocated, unknown, unmanaged. Defaults to allocated.'] = 'Një i caktuar, deleguar, planifikuar, rezervuar, i paalocuar, i panjohur, i pamenazhuar. Vlerat e paracaktuara për caktimin.';

$GLOBALS["lang"]['One of either <code>active directory</code> or <code>openldap</code>.'] = 'Një nga të dyja <code>active directory</code> ose <code>openldap</code>.';

$GLOBALS["lang"]['One of: antivirus, backup, firewall, approved, banned, ignored or other.'] = 'Njëri prej tyre: antivirusi, rezerve, muri mbrojtës, i miratuar, i ndaluar, i injoruar ose i tjerë.';

$GLOBALS["lang"]['One other item to be careful of - make sure you use the hostname (or fqdn) of your LDAP Server that matches what is in the certificate (not just the LDAP Servers IP address) when creating the LDAP entry in Open-AudIT.'] = 'Një tjetër element për të qenë i kujdesshëm - sigurohuni që të përdorni emrin e host (ose fqdn) e LDAP tuaj Serveri që përputhet me atë që është në çertifikatë (jo vetëm adresa LDAP servers IP) kur krijohet hyrja LDAP në Open-AudIT.';

$GLOBALS["lang"]['Online Documentation'] = 'Dokumentë online';

$GLOBALS["lang"]['Open'] = 'Hap';

$GLOBALS["lang"]['Open Data'] = 'Hap të dhënat';

$GLOBALS["lang"]['Open Source'] = 'Hap Burimi';

$GLOBALS["lang"]['Open-AudIT'] = 'Open-AudIT';

$GLOBALS["lang"]['Open-AudIT Community source code is available on GitHub. You are encouraged to inspect any code you have concerns about, and because it is open source - you are also encouraged to ask us about any issues you have or report any findings. We are always more than happy to accept code contributions, vulnerability reports, or even simple questions. We are here to help.<br><br>The audit scripts themselves (Windows, Linux, MacOS, et al) are deliberately written in readable native shell script (VBScript for Windows, Bash for *nix). You can see exactly what commands are run. You can remove any commands you feel you do not need. You can ask a third party to inspect the code for you and (if you want to) report any findings.<br><br>Open-AudIT Enterprise performs the add-on commercial functions for Open-AudIT Community. It is included as a single compiled file with no external dependencies. Where Enterprise itself performs the function(s), if you are concerned with any issues Firstwave is happy to work through them with you - just ask! Try that with another commercial software vendor!'] = 'Open-AudIT Kodi i burimit të komunitetit është i disponueshëm në GitHub. Jeni të inkurajuar të hetoni çdo kod për të cilin shqetësoheni dhe, meqë është burim i hapur, nxiteni të na pyesni për çdo çështje që keni ose të raportoni ndonjë zbulim. Gjithmonë jemi më shumë se të lumtur të pranojmë kontributet në kod, raportet për cënueshmërinë ose edhe pyetje të thjeshta. Ne jemi këtu për të ndihmuar.<br/><br/>Vetë script-et audituese (Windows, Linux, MacOS, et al) janë shkruar qëllimisht në alfabetin e lexueshëm të guaskës vendase (VBScript për Windows, Bash për *nix). Ju mund të shihni saktësisht se çfarë urdhëra janë drejtuar. Mund të heqësh çdo urdhër që mendon se nuk ke nevojë. Ju mund t\'i kërkoni një palë të tretë të kontrollojë kodin për ju dhe (nëse doni) të raportoni çdo gjetje.<br/><br/>Open-AudIT Ndërmarrja kryen funksionet tregtare shtesë për Komunitetin Open-AudIT. Përfshihet si një file i vetëm i përpiluar pa vartësi të jashtme. Ku vetë Ndërmarrja kryen funksionin e saj, nëse ju shqetëson ndonjë problem Vala e parë është e lumtur t\'i përballosh me ty, thjesht pyet! Provoje këtë me një shitës tjetër të programeve tregtare!';

$GLOBALS["lang"]['Open-AudIT Device Selection'] = 'Zgjedhja e dispozitivit Open-Audit';

$GLOBALS["lang"]['Open-AudIT Enterprise has the ability to choose from a pre-defined list of discovery scan options and also to customise individual options per discovery.'] = 'Open-AudIT Ndërmarrja ka aftësinë të zgjedhë nga një listë e paracaktuar e alternativave të skanimit të zbulimit dhe gjithashtu të përkufizojë alternativat individuale për zbulim.';

$GLOBALS["lang"]['Open-AudIT Enterprise. High-scale flexible discovery and audit solution for large networks. All the features of Professional plus: Baselines, File Auditing, Cloud Discovery, Rack Management, Configurable Role Based Access Control including Active Directory and LDAP.'] = 'Kompania Open-AudIT. Zbulimi fleksibël në shkallë të lartë dhe zgjidhja e kontrollit për rrjetet e mëdha. Të gjitha veçoritë e plus: baza, File Auditing, Discovery, Rak Management, Construction Conflict Bazuar në Kontrollin e Accesit duke përfshirë Aktiv Directory dhe LDAP.';

$GLOBALS["lang"]['Open-AudIT Field Name'] = 'Emri i fushës Open-AudIT';

$GLOBALS["lang"]['Open-AudIT Licenses'] = 'Hap Liçenca';

$GLOBALS["lang"]['Open-AudIT Options'] = 'Hap Mundësitë';

$GLOBALS["lang"]['Open-AudIT Professional and Enterprise include Enhanced Reporting features, including time-based, historical, and muti-query based reporting features in multiple formats.'] = 'Profesional dhe Ndërmarrje Profesioniste të Open-AudIT përfshijnë veçoritë e Raportimit të Enhaned, duke përfshirë veçoritë e raportimit me bazë kohore, historike dhe muzeu në formate të shumëfishta.';

$GLOBALS["lang"]['Open-AudIT Professional has the ability to choose from a pre-defined list of discovery scan options, per discovery.'] = 'Open-AudIT Profesional ka aftësinë të zgjedhë nga një listë e paracaktuar e alternativave të skanimit të zbulimit, për zbulim.';

$GLOBALS["lang"]['Open-AudIT Professional. The worlds'] = 'Profesionist i Open-AudIT. Bota\\';

$GLOBALS["lang"]['Open-AudIT can be configured to use LDAP servers (Microsoft Active Directory and/or OpenLDAP) to authenticate and authorize a user and in addition, to create a user account in Open-AudIT using assigned roles and orgs based on LDAP group membership. It can also use'] = 'Hap-Aud IT mund të konfiguruar të përdorë server-ët LDAP (Microsoft Aktiv Directory dhe/ose OpenLDAP) për të identifikuar dhe autorizuar një përdorues dhe përveç kësaj, për të krijuar një profil përdoruesi në Open-AudIT duke përdorur rolet e caktuara dhe orgs bazuar në anëtarësimin në grupin LDAP. Mund të përdoret gjithashtu';

$GLOBALS["lang"]['Open-AudIT can be run on your server in your data center. It does not need access to the internet at all. Even the installation on Linux where we use the distribution package manager for our prerequisites can be negated by you using an in-house and security team-approved package repository.<br><br>Open-AudIT does not store any of your data in the cloud. Even licensing information can be provided without having to access the internet from the Open-AudIT server.<br><br>Sure, it is easier to allow it to access the internet to download packages (including security fixes) for your distribution, but that is up to you and your security policies. Open-AudIT does not need the internet.'] = 'Hap-Aud IT mund të zbatohet në serverin tuaj në qendrën tuaj të të dhënave. Nuk ka nevojë fare për qasje në internet. Edhe instalimi në Linux ku ne përdorim menaxherin e paketave të shpërndarjes për parakushtet tona mund të anullohet nga ju duke përdorur një magazinë në shtëpi dhe një paketë sigurimi.<br/><br/>Hap-Aud IT nuk i përmban të dhënat e tua në re. Mund të sigurohen edhe informacione për licensimin pa patur nevojë të hysh në internet nga serveri Open-AudIT.<br/><br/>Sigurisht, është më e lehtë të lejohet që ajo të hyjë në internet për të shkarkuar paketat (duke përfshirë edhe rregullimet e sigurisë) për shpërndarjen tuaj, por kjo varet nga ju dhe politikat tuaja të sigurisë. Open-AudIT nuk ka nevojë për internet.';

$GLOBALS["lang"]['Open-AudIT can download, parse and use NIST CVE Vulnerability reports.'] = 'Open-AudIT mund të shkarkojë, analizojë dhe përdorë raportet e Vlnerabilitetit NIST CVE.';

$GLOBALS["lang"]['Open-AudIT can show in one of several languages. How you can improve this?'] = 'Hap-Aud IT - ja mund të shfaqet në një nga gjuhët e ndryshme. Si mund ta përmirësosh këtë?';

$GLOBALS["lang"]['Open-AudIT can store information in additional fields that are associated with each device.'] = 'Hap-Aud IT mund të ruajë informacione në fusha shtesë që lidhen me çdo pajisje.';

$GLOBALS["lang"]['Open-AudIT can use Microsoft Entra (previously known as Microsoft Azure Active Directory) as an authentication method. This means your user in Open-AudIT can click the Logon using Entra button on the logon page and use their Entra credentials to logon. That user will need to already exist within Open-AudIT (and be assigned'] = 'Open-AudIT mund të përdorë Microsoft Entra (e njohur më parë si Microsoft Azure Aktiv Directory) si një metodë autentifikimi. Kjo do të thotë që përdoruesi juaj në Open-AudIT mund të klikojë Logon duke përdorur butonin Entra në faqen logon dhe të përdorë kredencialet e tyre për logon. që përdoruesi ekziston brenda Hap-AudIT (dhe të caktohet';

$GLOBALS["lang"]['Open-AudIT can use OKTA as an authentication method. This means your user in Open-AudIT can click the Logon using OKTA button on the logon page and use their OKTA credentials to logon. That user will need to already exist within Open-AudIT (and be assigned Roles and Orgs), but will not need to remember a separate set of logon credentials.'] = 'Open-AudIT mund të përdorë OKTA si një metodë autentifikimi. Kjo do të thotë që përdoruesi juaj në Open-AudIT mund të klikojë Logon duke përdorur butonin OKTA në faqen logon dhe të përdorë kredencialet e tyre OKTA për logon. Ky përdorues do të duhet tashmë të ekzistojë brenda Open-AudIT (dhe të caktohet Role dhe Orgs), por nuk do të ketë nevojë të kujtojë një seri të veçantë kredencialesh logon.';

$GLOBALS["lang"]['Open-AudIT comes with many queries inbuilt. If you require a specific query and none of the pre-packaged queries fit your needs, it is quite easy to create a new one and load it into Open-AudIT for running.'] = 'Open-AudIT vjen me shumë pyetje të ndërtuara. Nëse ju duhet një kërkesë specifike dhe asnjë nga kërkesat e parapaketuara nuk përputhet me nevojat tuaja, është shumë e lehtë të krijoni një të re dhe ta ngarkoni në Open-AudIT për të kandiduar.';

$GLOBALS["lang"]['Open-AudIT has a JSON Restful API to be used both in the web interface and via JSON requests.'] = 'Open-AudIT ka një API JSON Resful për t\'u përdorur si në interfaqen e internetit ashtu edhe nëpërmjet kërkesave JSON.';

$GLOBALS["lang"]['Open-AudIT has a granular permissions system to determine what a user within Open-AudIT can do, and the items he can do it to. Open-AudIT can be entirely self-contained, or use Active Directory or OpenLDAP for authentication and/or authorization.<br><br>It is entirely up to the administrator of Open-AudIT how they would like the Role Based Access Control to work.'] = 'Hap-Aud IT ka një sistem granilar të drejtat për të përcaktuar se çfarë mund të bëjë një përdorues brenda Open-AudIT, dhe elementët që ai mund të bëjë. Open-AudIT mund të vetë-kontinohet plotësisht, ose të përdorë Directory Aktive ose OpenLDAP për autentifikimin dhe/ose autorizimin.<br/><br/>Varet plotësisht nga administratori i Open-AudIT se si ata do të donin që të punonte Kontrolli i Hyrjes së Bazuar Roli.';

$GLOBALS["lang"]['Open-AudIT has a powerful change detection engine. Any device attributes that are added, removed or changed will be detected and stored. These changes can be reported upon and the relevant data confirmed as to what was expected from your company change and release process.<br><br>When a device is audited, attributes are divided into sections which correspond to tables in the database.<br><br>Each device (computer, router, printer, et al) has an entry in the <code>devices</code> table. Each entry in the devices table has an <code>id</code> column. This value is unique - it is an auto-incrementing id.<br><br>When the audit result is processed, each item in each section has its audit result compared to what is in the database.<br><br>For each section, if the key columns (see below table) contain the identical values, it is considered already installed and has its <code>last_seen</code> attribute updated. No change_log entry is created.<br><br>If any of the key columns do not match, it is considered a new attribute and is inserted. A <code>change_log</code> entry is created if the device had other attributes already present in the table.<br><br>At the completion of the audit processing, any database items that have not been updated (or inserted) are considered to not be present. The <code>current</code> attribute for this item is set to <i>n</i> and a change_log entry is generated.<br><br>So, we can determine if something is currently installed - the current column is <i>y</i>.<br><br>We can determine when something was initially detected - the <i>first_seen</i>.<br><br>We can determine if something was installed after the initial audit - first seen will be different in the component and device tables.<br><br>We can determine if something is not currently installed, but previously was - current = <i>n</i>.<br><br>We can determine the last time we detected an item - last_seen.<br><br>At any given point, we can determine what was on a system - by using the audit_log table and selecting the relevant components based on first_seen and last_seen.<br><br>Each section and its matching key columns are below.<br><br>NOTE - There are some exceptions as detailed below.<br><br>*1 - For network cards, if the computer is a VMware Esx machine it also uses the net_index and connection columns.<br><br>*2 - For partitions, f the computer is an AIX machine, we use the partition name.'] = 'Hap-Aud IT ka një motor të fuqishëm zbulimi. Çdo pajisje që shtohet, hiqet ose ndryshohet do të zbulohet dhe ruhet. Këto ndryshime mund të njoftohen dhe të dhënat përkatëse konfirmojnë se çfarë pritej nga ndryshimi i kompanisë suaj dhe procesi i lirimit.<br/><br/>Kur kontrollohet një pajisje, atributet ndahen në seksione që korrespondojnë me tabelat e të dhënave.<br/><br/>Çdo dispozitiv (computer, udhëzues, printer, et al) ka një hyrje në <code>devices</code> Tavolina. Çdo hyrje në tabelë ka një <code>id</code> Kollona. Kjo vlerë është unike - është një id auto-inkrement.<br/><br/>Kur përpunohen rezultatet e kontrollit, çdo artikull në çdo pjesë ka rezultatin e vet të kontrollit në krahasim me atë që është në bazën e të dhënave.<br/><br/>Për çdo seksion, nëse kollonat kyçe (shiko poshtë tabelës) përmbajnë vlerat identike, ai konsiderohet tashmë i instaluar dhe ka vlerën e tij <code>last_seen</code> karakteristika. Nuk është krijuar asnjë mesazh ndryshimi.<br/><br/>Nëse ndonjë nga kollonat kyçe nuk përputhet, konsiderohet një cilësi e re dhe futet. A <code>change_log</code> Hyrja është krijuar nëse pajisja ka atribute të tjera tashmë të pranishme në tryezë.<br/><br/>Në përfundim të proçesimit të kontrollit, çdo bazë e dhënash që nuk është përditësuar (ose e futur) konsiderohet të mos jetë e pranishme. The <code>current</code> karakteristika për është nga <i>n</i> është.<br/><br/>Pra, ne mund të përcaktojmë nëse diçka aktualisht është instaluar - kollona aktuale është <i>p</i>.<br/><br/>Ne mund të përcaktojmë kur diçka u zbulua fillimisht - <i>E para_sisht</i>.<br/><br/>Mund të përcaktojmë nëse u instalua diçka pas kontrollit fillestar - që do të shihet së pari, do të jetë ndryshe në tabelat përbërëse dhe të pajisjeve.<br/><br/>Ne mund të përcaktojmë nëse diçka nuk është instaluar aktualisht, por më parë ishte - aktuale = <i>n</i>.<br/><br/>Ne mund të përcaktojmë herën e fundit kur zbuluam një send - të fundit_sen.<br/><br/>Në çdo pikë të caktuar, mund të përcaktojmë se çfarë kishte në sistem - duke përdorur tabelën audit_loge dhe duke zgjedhur elementët përkatës bazuar në të parin dhe të fundit_sen.<br/><br/>Çdo pjesë dhe kolonat kyçe që përputhen me njëra - tjetrën janë më poshtë.<br/><br/>DY FJALË - Disa përjashtime janë aq të hollësishme sa edhe më poshtë.<br/><br/>*1 - Për kartat e rrjetit, nëse kompjuteri është një makinë VMware Esx, ajo përdor gjithashtu shtyllat net_pastrike dhe të lidhjes.<br/><br/>*2 - Për ndarje, f kompjuteri është një makinë AIX, përdorim emrin e ndarjes.';

$GLOBALS["lang"]['Open-AudIT is a program designed to track and report on your IT and related assets details and configuration. Open-AudIT can tell <i>What is On Your Network?</i>, how it is configured and if there have been any changes. Open-AudIT delivers a sleek, flexible and easy to use platform for device discovery, IT auditing and inventory management automation straight out of the box.'] = 'Open-AudIT është një program i projektuar për të gjurmuar dhe raportuar mbi IT-në tuaj dhe detajet dhe konfigurimin e pasurive që lidhen me të. Open-AudIT mund të them <i>Çfarë është në rrjetin tuaj?</i>, si është konfiguruar dhe nëse ka pasur ndonjë ndryshim. Open-AudIT jep një sleek, fleksibël dhe të lehtë për të përdorur platformën për zbulimin e pajisjeve, kontrollimin e IT dhe menaxhimin e inventarit automatizimin jashtë kutisë.';

$GLOBALS["lang"]['Open-AudIT makes it easy to edit the attributes of multiple devices at once.'] = 'Hap-Aud IT - ja e bën të lehtë të ndryshojë menjëherë vetitë e shumë pajisjeve.';

$GLOBALS["lang"]['Open-AudIT needs specific directory permissions to be able to create files, upload results, etc. Please set as below.'] = 'Hap-Aud IT ka nevojë për të drejta specifike të directory për të qenë në gjendje të krijojë file, të ngarkojë rezultatet, etj. Ju lutem vendosni si më poshtë.';

$GLOBALS["lang"]['Open-AudIT provides many built-in queries and makes it simple to create your own.'] = 'Open-AudIT ofron shumë pyetje të ndërtuara dhe e bën të thjeshtë krijimin tuaj.';

$GLOBALS["lang"]['Open-AudIT ships with inbuilt roles for admin, org_admin and user.<br><br>Generally, a user who is an administrator of the Open-AudIT application itself should have admin and possible org_admin roles.<br><br>A user can have multiple roles. The permission will be applied at the most permissive level - IE, if a user has the roles of user and org_admin, they will be able to create locations because org_admin grants this permission, even though the user role does not.<br><br>The admin role allows access to collections such as configuration, database, groups, ldap servers, logs, queries and roles. Global items that affect the entire application.<br><br>The org_admin role usually allows create, read, update and delete actions for any collection that contains the org_id column. Virtually all data except some of the collections mentioned above will contain an <code>org_id</code> column.<br><br>The user role generally allows read only access to all items with an org_id column.'] = 'Hap-Aud IT anije me role të ndërtuara për admin, org_admin dhe përdorues.<br/><br/>Në përgjithësi, një përdorues që është administrator i vetë aplikativit Open-AudIT duhet të ketë admin dhe role të mundëshme org_admin.<br/><br/>Një përdorues mund të ketë role të shumta. Leja do të zbatohet në nivelin më tolerant - IE, nëse një përdorues ka rolet e përdoruesit dhe org_admin, ata do të jenë në gjendje të krijojnë pozicione sepse org_admin e jep këtë leje, edhe pse roli i përdoruesit nuk e jep.<br/><br/>Roli admin lejon mundësinë e marrjes së koleksioneve të tilla si konfigurimi, baza e të dhënave, grupet, serverat e livapit, shkrimet, kërkesat dhe rolet. Gjëra globale që ndikojnë në të gjithë aplikimin.<br/><br/>Roli org_admin zakonisht lejon krijimin, leximin, rifreskimin dhe fshirjen e veprimeve për çdo koleksion që përmban kollonën org_id. Pothuajse të gjitha të dhënat, përveç disa nga koleksionet e përmendura më sipër, do të përmbajnë një koleksion <code>org_id</code> Kollona.<br/><br/>Roli i përdoruesit përgjithësisht lejon të lexohet vetëm në të gjitha elementët me një kollonë org_id.';

$GLOBALS["lang"]['Open-AudIT ships with inbuilt roles for admin, org_admin and user.<br><br>Generally, a user who is an administrator of the Open-AudIT application itself should have admin and possible org_admin roles.<br><br>A user can have multiple roles. The permission will be applied at the most permissive level - IE, if a user has the roles of user and org_admin, they will be able to create locations because org_admin grants this permission, even though the user role does not.<br><br>The admin role allows access to collections such as configuration, database, groups, ldap servers, logs, queries and roles. Global items that affect the entire application.<br><br>The org_admin role usually allows create, read, update and delete actions for any collection that contains the org_id column. Virtually all data except some of the collections mentioned above will contain an org_id column.<br><br>The user role generally allows read only access to all items with an org_id column.'] = 'Hap-Aud IT anije me role të ndërtuara për admin, org_admin dhe përdorues.<br/><br/>Në përgjithësi, një përdorues që është administrator i vetë aplikativit Open-AudIT duhet të ketë admin dhe role të mundëshme org_admin.<br/><br/>Një përdorues mund të ketë role të shumta. Leja do të zbatohet në nivelin më tolerant - IE, nëse një përdorues ka rolet e përdoruesit dhe org_admin, ata do të jenë në gjendje të krijojnë pozicione sepse org_admin e jep këtë leje, edhe pse roli i përdoruesit nuk e jep.<br/><br/>Roli admin lejon mundësinë e marrjes së koleksioneve të tilla si konfigurimi, baza e të dhënave, grupet, serverat e livapit, shkrimet, kërkesat dhe rolet. Gjëra globale që ndikojnë në të gjithë aplikimin.<br/><br/>Roli org_admin zakonisht lejon krijimin, leximin, rifreskimin dhe fshirjen e veprimeve për çdo koleksion që përmban kollonën org_id. Pothuajse të gjitha të dhënat përveç disa nga koleksionet e përmendura më sipër do të përmbajnë një kollonë org_id.<br/><br/>Roli i përdoruesit përgjithësisht lejon të lexohet vetëm në të gjitha elementët me një kollonë org_id.';

$GLOBALS["lang"]['Open-AudIT ships with several pre-configured Dashboards. If you are a Professional user, you can select between two of these and set it as your default page when you logon. If you are an Enterprise user, you can not only select between the five preconfigured Dashboards, but you also have the ability to create your own.'] = 'Anije të hapura me disa anije të para-konfiguruara. Nëse jeni një përdorues profesional, mund të zgjidhni midis dy prej këtyre dhe ta përcaktoni si faqen tuaj të prezgjedhur kur kryeni logon. Nëse jeni një përdorues i Ndërmarrjes, jo vetëm që mund të zgjidhni midis pesë tabelave të parakonfiguruara, por keni edhe aftësinë për të krijuar tuajën.';

$GLOBALS["lang"]['Open-AudIT should be installed on 64bit Windows <strong>Server</strong> systems only. Windows 10 and Windows 11 are <strong>not</strong> supported.'] = 'Open-AudIT duhet të instalohet në 64bit Windows <strong>Serveri</strong> Vetëm sistemet. Dritaret 10 dhe Windows 11 janë <strong>jo</strong> E mbështetur.';

$GLOBALS["lang"]['Open-AudIT uses Nmap in its Discovery function. Nmap probes devices for open ports. Devices ideally should respond with open for working ports. Devices often do not respond with this. The varying responses are detailed below.'] = 'Open-AudIT përdor Nmap në funksionin e tij të zbulimit. Nmap heton pajisjet për portet e hapura. Pajisjet në mënyrë ideale duhet të reagojnë hapur për portet e punës. Shpesh këto pajisje nuk përgjigjen. Përgjigjet e ndryshme janë të hollësishme më poshtë.';

$GLOBALS["lang"]['Open-AudIT uses Nmap in its Discovery function. Without Nmap, Open-AudIT will not function correctly. Every Open-AudIT install assumes Nmap is installed and will also test for it on the Discovery web pages. More information about Open-AudIT and Nmap is available here'] = 'Open-AudIT përdor Nmap në funksionin e tij të zbulimit. Pa Nmap, Open-AudIT nuk do të funksionojë korrektësisht. Çdo instalim Open-AudIT merr Nmap dhe do të testohet gjithashtu për të në faqet Discovery web. Më shumë informacion rreth Open-AudIT dhe Nmap është në dispozicion këtu';

$GLOBALS["lang"]['Open-AudIT uses Nmap in its Discovery function. Without Nmap, Open-AudIT will not function correctly. Every Open-AudIT install assumes Nmap is installed and will test for it on the Discovery web pages.'] = 'Open-AudIT përdor Nmap në funksionin e tij të zbulimit. Pa Nmap, Open-AudIT nuk do të funksionojë korrektësisht. Çdo Instalim Open-AudIT merr Nmap dhe do të testohet për të në faqet Discovery web.';

$GLOBALS["lang"]['Open-AudIT uses credentials to access your devices. These are encrypted and stored, just as you would expect.'] = 'Hap-Aud IT përdor kredencialet për të hyrë në pajisjet tuaja. Këto janë të koduara dhe të ruajtura, ashtu siç do të prisnit.';

$GLOBALS["lang"]['Open-AudIT was written by an English speaking Australian. Everything in the application uses English wording. However Open-AudIT has always supported multiple languages for display. These translations are not always correct, because the developers do not natively speak the language of every translation offered.<br><br>What can you do if something is not correct in the translation?'] = 'Open-AudIT është shkruar nga një anglisht që flet Australian. Çdo gjë në aplikim përdor fjalë anglishte. Megjithatë, Open-AudIT ka mbështetur gjithmonë shumë gjuhë për t\'u shfaqur. Këto përkthime nuk janë gjithnjë të sakta, sepse zhvilluesit nuk e flasin gjuhën e çdo përkthimi që ofrohet në gjuhën amtare.<br/><br/>Ç\'mund të bësh nëse në përkthim diçka nuk është e saktë?';

$GLOBALS["lang"]['OpenLDAP'] = 'OpenLDAP';

$GLOBALS["lang"]['OpenScap is Installed'] = 'OpenSkap është instaluar';

$GLOBALS["lang"]['Opening a Support Ticket?'] = 'Hapja e një bilete mbështetëse?';

$GLOBALS["lang"]['openldap_user_dn'] = 'Openldap Përdoruesi Dn';

$GLOBALS["lang"]['Openldap User Dn'] = 'Openldap Përdoruesi Dn';

$GLOBALS["lang"]['openldap_user_membership_attribute'] = 'Pronësi e anëtarësimit të përdoruesit Openldap';

$GLOBALS["lang"]['Openldap User Membership Attribute'] = 'Pronësi e anëtarësimit të përdoruesit Openldap';

$GLOBALS["lang"]['open|filtered'] = 'Hap';

$GLOBALS["lang"]['Open|filtered'] = 'Hap';

$GLOBALS["lang"]['Operating System'] = 'Sistemi operativ';

$GLOBALS["lang"]['Operating System Family Contains'] = 'Familja operative e sistemit përmban';

$GLOBALS["lang"]['Operating Systems'] = 'Sistemet operative';

$GLOBALS["lang"]['Operators'] = 'Operatorët';

$GLOBALS["lang"]['optical'] = 'Optik';

$GLOBALS["lang"]['Optical'] = 'Optik';

$GLOBALS["lang"]['Optimized'] = 'Optimizuar';

$GLOBALS["lang"]['Option #1 - Change the data'] = 'Varianti Një: Ndrysho të dhënat';

$GLOBALS["lang"]['Option #2 - Change the translation file'] = 'Opsione Two - Ndrysho file';

$GLOBALS["lang"]['Optional Agent Based Auditing'] = 'Kontrollim i bazuar në Agjenten Personale';

$GLOBALS["lang"]['Optional version as audited by Open-AudIT. Use the percent sign % as a wildcard.'] = 'Versioni personal si audituar nga Open-AudIT. Përdor shenjën përqindjes % si një kartë e egër.';

$GLOBALS["lang"]['options'] = 'Mundësitë';

$GLOBALS["lang"]['Options'] = 'Mundësitë';

$GLOBALS["lang"]['Options, options, options'] = 'Mundësitë';

$GLOBALS["lang"]['Or'] = 'Ose';

$GLOBALS["lang"]['Or select from the below fields.'] = 'Ose zgjidh nga fushat e mëposhtme.';

$GLOBALS["lang"]['org_descendants'] = 'Fëmijë';

$GLOBALS["lang"]['Org Descendants'] = 'Fëmijë';

$GLOBALS["lang"]['org_id'] = 'ID e Org';

$GLOBALS["lang"]['Org ID'] = 'ID e Org';

$GLOBALS["lang"]['Organisation'] = 'Organizata';

$GLOBALS["lang"]['organisation'] = 'Organizata';

$GLOBALS["lang"]['Organisation Descendants'] = 'Organizata';

$GLOBALS["lang"]['Organisations'] = 'Organizata';

$GLOBALS["lang"]['Organisations can extend and enhance the level of detail that is stored against every discovered device using custom fields and the open core allows for easy integration into CMDB, event management and ticketing systems.'] = 'Organizatat mund të zgjatin dhe të zgjerojnë nivelin e detajeve që ruhen kundër çdo pajisjeje të zbuluar duke përdorur fusha doganore dhe thelbi i hapur lejon integrimin e lehtë në CMDB, menazhimin e ngjarjeve dhe sistemet e biletave.';

$GLOBALS["lang"]['orgs'] = 'Orgs';

$GLOBALS["lang"]['Orgs'] = 'Orgs';

$GLOBALS["lang"]['Orgs Name'] = 'Emri';

$GLOBALS["lang"]['Orgs in Open-AudIT are a key item. A user has a primary Org as well as a list of Orgs they can access. A user combines this with a list of assigned roles that define what actions they can take on items assigned to the Orgs they have access to. The combination of a users <i>orgs</i> and <i>roles</i> define what they can and cannot do within Open-AudIT.<br><br>Most items in Open-AudIT are assigned to an Org. Devices, Locations, Networks, etc, etc.<br><br>Orgs can have child Orgs. Think of an organisational chart (tree) structure. If a user has access to a specific Org, most of the time (not always) they also have access to that Orgs descendants.'] = 'Orgs në Open-AudIT janë një element kyç. Një përdorues ka një Org primar si dhe një listë të Orgs që mund të kenë. Një përdorues e kombinon këtë me listën e roleve të caktuara, të cilat përcaktojnë se çfarë veprimesh mund të ndërmarrin për gjërat e caktuara në Orgs ku mund të hyjnë. Kombinimi i përdoruesve <i>unit-format</i> dhe <i>Roli</i> Përcakto çfarë mund të bëjnë dhe nuk mund të bëjnë brenda Open-AudIT.<br/><br/>Shumica e elementëve në Open-AudIT janë caktuar në një Org. Paisja, vendndodhje, Rrjete, etj.<br/><br/>Orgs mund të ketë gogol fëmijësh. Mendo për një strukturë organizative (tree). Nëse një përdorues ka qasje në një Org specifik, pjesa më e madhe e kohës (jo gjithmonë) ata kanë mundësi të përdorin atë pasardhës të Orgs.';

$GLOBALS["lang"]['orientation'] = 'Orientimi';

$GLOBALS["lang"]['Orientation'] = 'Orientimi';

$GLOBALS["lang"]['os'] = 'Os';

$GLOBALS["lang"]['Os'] = 'Os';

$GLOBALS["lang"]['os_arch'] = 'Arç';

$GLOBALS["lang"]['Os Arch'] = 'Arç';

$GLOBALS["lang"]['os_bit'] = 'Os Bit';

$GLOBALS["lang"]['Os Bit'] = 'Os Bit';

$GLOBALS["lang"]['os_cpe'] = 'Os Cpe';

$GLOBALS["lang"]['Os Cpe'] = 'Os Cpe';

$GLOBALS["lang"]['os_display_version'] = 'Os Display Version';

$GLOBALS["lang"]['Os Display Version'] = 'Os Display Version';

$GLOBALS["lang"]['os_family'] = 'Familje';

$GLOBALS["lang"]['Os Family'] = 'Familje';

$GLOBALS["lang"]['os_group'] = 'Os Group';

$GLOBALS["lang"]['Os Group'] = 'Os Group';

$GLOBALS["lang"]['os_installation_date'] = 'Data e instalimit';

$GLOBALS["lang"]['Os Installation Date'] = 'Data e instalimit';

$GLOBALS["lang"]['os_licence_expiry'] = 'Shpërthim Os Licence';

$GLOBALS["lang"]['Os Licence Expiry'] = 'Shpërthim Os Licence';

$GLOBALS["lang"]['os_license'] = 'Os License';

$GLOBALS["lang"]['Os License'] = 'Os License';

$GLOBALS["lang"]['os_license_code'] = 'Os Liçenca';

$GLOBALS["lang"]['Os License Code'] = 'Os Liçenca';

$GLOBALS["lang"]['os_license_mode'] = 'Os Liçenca Modaliteti';

$GLOBALS["lang"]['Os License Mode'] = 'Os Liçenca Modaliteti';

$GLOBALS["lang"]['os_license_type'] = 'Os Liçenca Lloji';

$GLOBALS["lang"]['Os License Type'] = 'Os Liçenca Lloji';

$GLOBALS["lang"]['os_name'] = 'Emri';

$GLOBALS["lang"]['Os Name'] = 'Emri';

$GLOBALS["lang"]['os_version'] = 'Os Version';

$GLOBALS["lang"]['Os Version'] = 'Os Version';

$GLOBALS["lang"]['Other'] = 'Tjetër';

$GLOBALS["lang"]['Other than that restriction, you are free to select attributes as required. It is a good idea to use the menu'] = 'Përveç këtij kufizimi, je i lirë të zgjedhësh cilësitë që kërkohen. Është një ide e mirë të përdorësh menunë';

$GLOBALS["lang"]['Others'] = 'Të tjerë';

$GLOBALS["lang"]['Our default Integration also enables a discovery on any externally supplied devices. So we ship a default discovery for the Default Integration out of the box. These use the default matching rules, but also enable matching on IP address.'] = 'Integrimi ynë i prezgjedhur gjithashtu bën të mundur një zbulim të ndonjë pajisjeje të furnizuar jashtë. Kështu që ne dërguam një zbulim të paracaktuar për integrimin e paracaktuar jashtë kutisë. Këto përdorin rregullat e paracaktuara të korrespondimit, por gjithashtu mundësojnë përputhjen në adresën IP.';

$GLOBALS["lang"]['Our examples will use the <i>type</i> column.'] = 'Shembujt tanë do të përdorin <i>lloji</i> Kollona.';

$GLOBALS["lang"]['Our framework uploads files here for processing, then deletes them. Think submitted audit results, etc.'] = 'Kuadri ynë ngarkon dosjet këtu për procesim, pastaj i fshin ato. Mendo rezultatet e kontrollit, etj.';

$GLOBALS["lang"]['Our goal with the initial integrations release was specifically for NMIS to Open-AudIT integration to <i>just work</i>. If you are using the programs on Linux, you can literally click a single button to execute the integration. Nothing more is required. Having said that, the integration itself is extremely configurable - so if something is not to your preference, it can easily be changed.'] = 'Qëllimi ynë me lëshimin fillestar të integrimeve ishte veçanërisht që NMIS të hapë integrimin AudIT <i>Vetëm punë.</i>. Nëse jeni duke përdorur programet në Linux, mund të klikoni fjalë për fjalë një buton të vetëm për të ekzekutuar integrimin. Nuk kërkohet asgjë më shumë. Duke thënë këtë, vetë integrimi është jashtëzakonisht i konfigurueshëm, prandaj nëse diçka nuk është në preferencën tuaj, mund të ndryshohet me lehtësi.';

$GLOBALS["lang"]['Our new feature called Vulnerabilities gives you the ability to quickly determine if any devices are affected by any CVE (Common Vulnerability Exposure) - but how?<br><br>FirstWave constantly consumes the output from the Nist NVD feed. We take this and apply a few restrictions, then extract the affected programs and build a SQL query for reporting. Your Open-AudIT instance reaches out to FirstWave and requests any new vulnerabilities on a regular basis. When it receives a new vulnerability record, it is run against the database and the result stored. Each time a device is processed, all matching vulnerabilities are again executed and the result stored. This means when viewing a vulnerability list, we do not need to calculate all affected devices - we already have the result. When you view an individual vulnerability record, we do indeed recalculate the result for this singular vulnerability.<br><br>So, you are always up to date!<br><br>In addition to this, we also calculate the result of all vulnerabilities for all devices daily (usually at a quiet time, say 2am).<br><br>In your instance of Open-AudIT, we allow you to select which vendors you care about. i.e. there is no use retrieving vulnerability records from a vendor whose software you do not use or have installed. By default, our vendor list is Adobe, Apple, Cisco, Google, Microsoft, Mozilla, and Redhat.<br><br>This all sounds very simple, but behind the scenes a <b>lot</b> is going on. For instance, the CVE record contains a list of affected software - but those software names do not match what we receive when we audit a computer. A good example is Apache. Typically, a CVE record will say the affected software is http_server. In reality, this appears as apache2 (Ubuntu), httpd (Redhat), Apache HTTP Server (Windows) - and others. So, we have to first determine what is the actual name of the program we receive when we ask a computer, and there may be multiple names. After that we must parse the CVE record and create a matching SQL statement. Allowing for multiple program names as above, and multiple versions, version ranges, and even multiple different pieces of software (an example is Thunderbird and Firefox in a single CVE). And your instance of Open-AudIT must take this and apply Orgs filtering as well. And that is just a single CVE. What about determining which CVEs you have and do not have? What about adding a vendor to the list later? So many things to consider!<br><br>As well as the usual reporting, we also have a few new widgets available for Dashboards, based on Vulnerabilities data.'] = 'Karakteristika jonë e re e quajtur Vulnerability ju jep aftësinë të përcaktoni menjëherë nëse ndonjë mjet ndikohet nga ndonjë CVE (shfaqje e Vulnerabilitetit), por si?<br/><br/>FirstWave e konsumon vazhdimisht prodhimin nga ushqimi NVD Nisht. Marrim këtë dhe zbatojmë disa kufizime, pastaj nxjerrim programet e prekura dhe ndërtojmë një kërkesë SQL për raportim. Rasti juaj Open-AudIT arrin në FirstWave dhe kërkon çdo dobësi të re në një bazë të rregullt. Kur merr një të dhënë të re dobësie, ajo drejtohet kundër bazës së të dhënave dhe rezultatit të ruajtur. Sa herë që përpunohet një pajisje, të gjitha dobësitë që përputhen përsëri ekzekutohen dhe rezultati ruhet. Kjo do të thotë se kur shohim një listë dobësie, nuk kemi nevojë të llogaritim të gjitha pajisjet e prekura, por tashmë kemi rezultatin. Kur ju shihni një dokumentim individual të dobësisë, ne vërtet e përsëritim rezultatin për këtë dobësi të pazakontë.<br/><br/>Pra, je gjithmonë gati për takim!<br/><br/>Përveç kësaj, llogaritim edhe rezultatin e të gjitha dobësive për të gjitha pajisjet çdo ditë (zakonisht në një kohë të qetë, themi 2 am).<br/><br/>Në rastin tuaj të Open-AudIT, ne ju lejojmë të zgjidhni se çfarë shitësish ju intereson. p.sh. nuk ka asnjë përdorim për marrjen e të dhënave të cënueshmërisë nga një shitës, programi i të cilit ju nuk e përdorni apo keni instaluar. Në mënyrë të paracaktuar, lista jonë e shitësit është Adobe, Apple, Cisco, Google, Microsoft, Mozilla, dhe Redhat.<br/><br/>E gjitha kjo tingëllon shumë e thjeshtë, por pas skenave një <b>shumë</b> Po vazhdon. Për shembull, rekordi CVE përmban një listë programesh të prekura, por këta emra programesh nuk përputhen me atë që marrim kur kontrollojmë një kompjuter. Një shembull i mirë është Apaçi. Zakonisht, një rekord CVE do të thotë se programi i prekur është http_server. Në të vërtetë, kjo duket si apache2 (Ubuntu), http (Redhat), Serveri Apache (Windows) dhe të tjera. Pra, ne së pari duhet të përcaktojmë cili është emri aktual i programit që marrim kur pyesim një kompjuter, dhe mund të ketë emra të shumëfishtë. Pas kësaj ne duhet të analizojmë rekordin CVE dhe të krijojmë një deklaratë krahasuese SQL. lejuar për emrat e shumtë të programit si më sipër, dhe versione të shumëfishta, intervale versioni, madje edhe pjesë të ndryshme të programeve (një shembull është Thunderbird dhe Firefox në një CVE të vetëm). Dhe shembulli juaj i Open-AudIT duhet ta marrë këtë dhe të aplikojë filtrimin e Orgs gjithashtu. Dhe kjo është vetëm një CVE. Ç\'të themi për përcaktimin e cilës CVE ke dhe çfarë nuk ke? Ç\'të themi për shtimin e një shitësi në listë më vonë? Kaq shumë gjëra duhen marrë parasysh!<br/><br/>Si dhe raportet e zakonshme, ne gjithashtu kemi disa widget të rinj në dispozicion për Dashboards, bazuar në të dhënat e Vulnerability.';

$GLOBALS["lang"]['Our timeout for a SSH response'] = 'Koha për një përgjigje SSH';

$GLOBALS["lang"]['Our timeout for a WMI response'] = 'Koha për një përgjigje nga WMI';

$GLOBALS["lang"]['Our timeout for an SNMP response'] = 'Koha për një përgjigje SNMP';

$GLOBALS["lang"]['Our timeout for an audit script response'] = 'Koha për një përgjigje auditimi';

$GLOBALS["lang"]['output'] = 'Rezultati';

$GLOBALS["lang"]['Output'] = 'Rezultati';

$GLOBALS["lang"]['outputs'] = 'Rezultati';

$GLOBALS["lang"]['Outputs'] = 'Rezultati';

$GLOBALS["lang"]['Overall severity score (0–10).'] = 'Pikët e përgjithshme të ashpërsisë (0 udhërrëfyese).';

$GLOBALS["lang"]['overwrite'] = 'Mbishkruaj';

$GLOBALS["lang"]['Overwrite'] = 'Mbishkruaj';

$GLOBALS["lang"]['owner'] = 'Pronari';

$GLOBALS["lang"]['Owner'] = 'Pronari';

$GLOBALS["lang"]['PAExec is a freely-redistributable re-implementation of SysInternal/Microsofts popular PsExec program.  PAExec aims to be a drop in replacement for PsExec, so the command-line usage is identical, with additional options also supported.  This work was originally inspired by Talha Tariqs RemCom.'] = 'PAExec është një rizbatim lirisht i padepërtueshëm i SimsInternal/Microsofts popullore Psexec. PAExec synon të jetë një rënie në zëvendësimin e Psexec, kështu që përdorimi i komandës është identik, me opsione shtesë të mbështetura gjithashtu. Fillimisht kjo vepër u frymëzua nga Talha Tariks RemCom.';

$GLOBALS["lang"]['PHP'] = 'PHP';

$GLOBALS["lang"]['POD'] = 'POD';

$GLOBALS["lang"]['POSTing data'] = 'Duke përdorur të dhënat';

$GLOBALS["lang"]['Package'] = 'Paketa:';

$GLOBALS["lang"]['packages'] = 'Paketa';

$GLOBALS["lang"]['Packages'] = 'Paketa';

$GLOBALS["lang"]['Packages are used to report on things such as <i>banned software</i>, AntiVirus on servers, etc.<br><br>Open-AudIT provides widgets that build upon also supplied repots to detemine the status of antivirus, firewall and other software.'] = 'Paketat përdoren për të raportuar mbi gjëra të tilla si <i>Program i ndaluar</i>Antivirusi në server, etj.<br/><br/>Open-AudIT siguron widget që ndërtohen mbi repot të furnizuara gjithashtu për të hequr gjendjen e antivirusit, firewall dhe programeve të tjera.';

$GLOBALS["lang"]['pagefile'] = 'Faqja';

$GLOBALS["lang"]['Pagefile'] = 'Faqja';

$GLOBALS["lang"]['Pakistan'] = 'Pakistan';

$GLOBALS["lang"]['Palau'] = 'Palau';

$GLOBALS["lang"]['Palestinian Territory'] = 'Territori palestinez';

$GLOBALS["lang"]['Panama'] = 'Panama';

$GLOBALS["lang"]['Papua New Guinea'] = 'Papua Guineja e Re';

$GLOBALS["lang"]['Paraguay'] = 'Paraguaj';

$GLOBALS["lang"]['Parameters'] = 'Parametrat';

$GLOBALS["lang"]['Paranoid'] = 'Paranoid';

$GLOBALS["lang"]['Parent'] = 'Prindi';

$GLOBALS["lang"]['parent_id'] = 'ID e prindërve';

$GLOBALS["lang"]['Parent ID'] = 'ID e prindërve';

$GLOBALS["lang"]['parent_name'] = 'Emri i prindërve';

$GLOBALS["lang"]['Parent Name'] = 'Emri i prindërve';

$GLOBALS["lang"]['part_number'] = 'Numri i pjesës';

$GLOBALS["lang"]['Part Number'] = 'Numri i pjesës';

$GLOBALS["lang"]['part_of_domain'] = 'Pjesë e Domain';

$GLOBALS["lang"]['Part Of Domain'] = 'Pjesë e Domain';

$GLOBALS["lang"]['Partition'] = 'Zgjedhja';

$GLOBALS["lang"]['partition_count'] = 'Numërimi i particioneve';

$GLOBALS["lang"]['Partition Count'] = 'Numërimi i particioneve';

$GLOBALS["lang"]['partition_disk_index'] = 'Treguesi i Diskut të Pjesëve';

$GLOBALS["lang"]['Partition Disk Index'] = 'Treguesi i Diskut të Pjesëve';

$GLOBALS["lang"]['Pass'] = 'Bas';

$GLOBALS["lang"]['Passed'] = 'Pasuar';

$GLOBALS["lang"]['Passive Optical Local Area Network'] = 'Rrjeti Optik i zonave lokale';

$GLOBALS["lang"]['Password'] = 'Fjalëkalimi';

$GLOBALS["lang"]['password'] = 'Fjalëkalimi';

$GLOBALS["lang"]['password_changeable'] = 'Fjalëkalimi Ndrysho';

$GLOBALS["lang"]['Password Changeable'] = 'Fjalëkalimi Ndrysho';

$GLOBALS["lang"]['password_disabled'] = 'Fjalëkalimi';

$GLOBALS["lang"]['Password Disabled'] = 'Fjalëkalimi';

$GLOBALS["lang"]['password_expires'] = 'Fjalëkalimi skadon';

$GLOBALS["lang"]['Password Expires'] = 'Fjalëkalimi skadon';

$GLOBALS["lang"]['password_last_changed'] = 'Fjalëkalimi';

$GLOBALS["lang"]['Password Last Changed'] = 'Fjalëkalimi';

$GLOBALS["lang"]['password_required'] = 'Kërkohet fjalëkalimi';

$GLOBALS["lang"]['Password Required'] = 'Kërkohet fjalëkalimi';

$GLOBALS["lang"]['patch_panel'] = 'Paneli';

$GLOBALS["lang"]['Patch Panel'] = 'Paneli';

$GLOBALS["lang"]['patch_panel_port'] = 'Paneli';

$GLOBALS["lang"]['Patch Panel Port'] = 'Paneli';

$GLOBALS["lang"]['path'] = 'Pozicioni';

$GLOBALS["lang"]['Path'] = 'Pozicioni';

$GLOBALS["lang"]['Performance'] = 'Përformanca';

$GLOBALS["lang"]['Performed'] = 'Përformuar';

$GLOBALS["lang"]['Permission'] = 'Leja';

$GLOBALS["lang"]['Permission Required'] = 'Kërkohet leje';

$GLOBALS["lang"]['permissions'] = 'Të drejtat për';

$GLOBALS["lang"]['Permissions'] = 'Të drejtat për';

$GLOBALS["lang"]['Persian'] = 'Persiane';

$GLOBALS["lang"]['Personal Area Network'] = 'Rrjeti i zonave personale';

$GLOBALS["lang"]['Personal area network'] = 'Rrjeti i zonës personale';

$GLOBALS["lang"]['Peru'] = 'Peru';

$GLOBALS["lang"]['Philippines'] = 'Filipine';

$GLOBALS["lang"]['phone'] = 'Telefoni';

$GLOBALS["lang"]['Phone'] = 'Telefoni';

$GLOBALS["lang"]['Physical CPUs'] = 'CPU fizike';

$GLOBALS["lang"]['physical_count'] = 'Numërimi fizik';

$GLOBALS["lang"]['Physical Count'] = 'Numërimi fizik';

$GLOBALS["lang"]['physical_depth'] = 'Depthi fizik';

$GLOBALS["lang"]['Physical Depth'] = 'Depthi fizik';

$GLOBALS["lang"]['physical_height'] = 'Lartësia fizike';

$GLOBALS["lang"]['Physical Height'] = 'Lartësia fizike';

$GLOBALS["lang"]['physical_width'] = 'Gjerësia fizike';

$GLOBALS["lang"]['Physical Width'] = 'Gjerësia fizike';

$GLOBALS["lang"]['picture'] = 'Figura';

$GLOBALS["lang"]['Picture'] = 'Figura';

$GLOBALS["lang"]['pid'] = 'Pid';

$GLOBALS["lang"]['Pid'] = 'Pid';

$GLOBALS["lang"]['Pie Chart'] = 'Tabela e Pie';

$GLOBALS["lang"]['Pie charts must return name or my_name, description or my_description and count.'] = 'Planimetria emri dhe.';

$GLOBALS["lang"]['ping'] = 'Ping';

$GLOBALS["lang"]['Ping'] = 'Ping';

$GLOBALS["lang"]['Ping Target'] = 'Objektivi';

$GLOBALS["lang"]['Pitcairn Islands'] = 'Ishujt Pitkair';

$GLOBALS["lang"]['placement'] = 'Vendosja';

$GLOBALS["lang"]['Placement'] = 'Vendosja';

$GLOBALS["lang"]['Plan and conduct internal audits'] = 'Planifikoni dhe drejtoni kontrollet e brendshme';

$GLOBALS["lang"]['Please have an Open-AudIT administrator logon and upgrade the database.'] = 'Ju lutemi të keni një administrator Open-AudIT logon dhe të përtërini bazën e të dhënave.';

$GLOBALS["lang"]['Please log in and change these ASAP.'] = 'Ju lutem hyni dhe ndryshoni këto sa më shpejt.';

$GLOBALS["lang"]['Please log on to the Open-AudIT Server (either Windows or Linux) and run <code>nslookup IP_ADDRESS_OF_TARGET</code> in the command prompt or shell. It must be able to resolve the IP to a name.'] = 'Ju lutem hyni në serverin Open-AudIT (ose Windows ose Linux) dhe vraponi <code>nslookup IP_ADDRESS_OF_TARGET</code> të cilët lëvizin dhe zhduken nga shikimi (horizonti), Ajo duhet të jetë në gjendje për të zgjidhur IP në një emër.';

$GLOBALS["lang"]['Please note that the select box will override the text input box.'] = 'Ju lutem vini re që kutia e zgjedhur do të anullojë kutinë e input të tekstit.';

$GLOBALS["lang"]['Please see the FAQ'] = 'Ju lutem shikoni FAQ';

$GLOBALS["lang"]['Please send all three files to your support contact at Opmantek and describe your issue.'] = 'Ju lutem dërgoni tre skedarë tek kontakti juaj në Opmantek dhe përshkruani çështjen tuaj.';

$GLOBALS["lang"]['Please set using'] = 'Zgjidh';

$GLOBALS["lang"]['Please visit the homepage at'] = 'Ju lutem vizitoni faqen e nisjes';

$GLOBALS["lang"]['pod'] = 'Pod';

$GLOBALS["lang"]['Pod'] = 'Pod';

$GLOBALS["lang"]['Poland'] = 'Poloni';

$GLOBALS["lang"]['Policies'] = 'Politika';

$GLOBALS["lang"]['Policies have exceptions.'] = 'Politikat kanë përjashtime.';

$GLOBALS["lang"]['policy'] = 'Politika';

$GLOBALS["lang"]['Policy'] = 'Politika';

$GLOBALS["lang"]['policy_id'] = 'ID e politikës';

$GLOBALS["lang"]['Policy ID'] = 'ID e politikës';

$GLOBALS["lang"]['Policy Result'] = 'Rezultati i politikës';

$GLOBALS["lang"]['Policy Results'] = 'Rezultatet e politikës';

$GLOBALS["lang"]['Polish'] = 'Polonisht';

$GLOBALS["lang"]['Polite'] = 'Policia';

$GLOBALS["lang"]['Populate the with values provided below:'] = 'file në vazhdim:';

$GLOBALS["lang"]['Populated by audit.'] = 'Të popullarizuar nga auditimi.';

$GLOBALS["lang"]['Populated by discovery and audit.'] = 'Të popullarizuar nga zbulimi dhe auditimi.';

$GLOBALS["lang"]['Populated dynamically.'] = 'I popullarizuar dinamikisht.';

$GLOBALS["lang"]['Populated from DNS.'] = 'U hap nga DNS.';

$GLOBALS["lang"]['Populated from SNMP discovery.'] = 'U hap nga zbulimi i SNMP.';

$GLOBALS["lang"]['Populated from device audits.'] = 'U hap nga auditimet e pajisjeve.';

$GLOBALS["lang"]['Populated from hostname.'] = 'U zgjodh nga emri i host.';

$GLOBALS["lang"]['Populated from machine-id on Linux.'] = 'I izoluar nga makineria në Linux.';

$GLOBALS["lang"]['Populated from the IP for the default route or the IP detected in discovery.'] = 'I izoluar nga IP për rrugën e paracaktuar ose IP zbuluar në zbulim.';

$GLOBALS["lang"]['Populated from the hostname command.'] = 'U zgjidh nga komanda e emrit të host.';

$GLOBALS["lang"]['Populated with additional data from the external system, in a JSON representation.'] = 'I izoluar me të dhëna shtesë nga sistemi i jashtëm, në një përfaqësim JSON.';

$GLOBALS["lang"]['port'] = 'Porta';

$GLOBALS["lang"]['Port'] = 'Porta';

$GLOBALS["lang"]['port_name'] = 'Porta Emri';

$GLOBALS["lang"]['Port Name'] = 'Porta Emri';

$GLOBALS["lang"]['port_number'] = 'Porta Numri';

$GLOBALS["lang"]['Port Number'] = 'Porta Numri';

$GLOBALS["lang"]['ports_in_order'] = 'Porta me rregull';

$GLOBALS["lang"]['Ports In Order'] = 'Porta me rregull';

$GLOBALS["lang"]['ports_stop_after'] = 'Portat ndalen pas';

$GLOBALS["lang"]['Ports Stop After'] = 'Portat ndalen pas';

$GLOBALS["lang"]['Portugal, Portuguese Republic'] = 'Portugalia, Republika Portugeze';

$GLOBALS["lang"]['Portuguese'] = 'portugalisht';

$GLOBALS["lang"]['Portuguese (Brazil)'] = 'Portugeze (Brazil)';

$GLOBALS["lang"]['position'] = 'Pozicioni';

$GLOBALS["lang"]['Position'] = 'Pozicioni';

$GLOBALS["lang"]['Post-Certification'] = 'Post-Certifikimi';

$GLOBALS["lang"]['postcode'] = 'Postkode';

$GLOBALS["lang"]['Postcode'] = 'Postkode';

$GLOBALS["lang"]['power_circuit'] = 'Qarku i energjisë';

$GLOBALS["lang"]['Power Circuit'] = 'Qarku i energjisë';

$GLOBALS["lang"]['power_sockets'] = 'Sockets';

$GLOBALS["lang"]['Power Sockets'] = 'Sockets';

$GLOBALS["lang"]['Predictable'] = 'Parashikueshëm';

$GLOBALS["lang"]['Preferences'] = 'Preferimet';

$GLOBALS["lang"]['Prepare for recertification every 3 years'] = 'Përgatituni për rikëmbim çdo 3 vjet.';

$GLOBALS["lang"]['Prerequisites'] = 'Prerekuitët';

$GLOBALS["lang"]['Prerequisites and Tests'] = 'Parashikime dhe sprova';

$GLOBALS["lang"]['present'] = 'Këtu';

$GLOBALS["lang"]['Present'] = 'Këtu';

$GLOBALS["lang"]['previous_value'] = 'Vlera paraardhëse';

$GLOBALS["lang"]['Previous Value'] = 'Vlera paraardhëse';

$GLOBALS["lang"]['primary'] = 'Printo';

$GLOBALS["lang"]['Primary'] = 'Printo';

$GLOBALS["lang"]['Primary Key'] = 'Kyçi kryesor';

$GLOBALS["lang"]['print_queue'] = 'Printo';

$GLOBALS["lang"]['Print Queue'] = 'Printo';

$GLOBALS["lang"]['printer_color'] = 'Ngjyra e printimit';

$GLOBALS["lang"]['Printer Color'] = 'Ngjyra e printimit';

$GLOBALS["lang"]['printer_duplex'] = 'Printeri Duplex';

$GLOBALS["lang"]['Printer Duplex'] = 'Printeri Duplex';

$GLOBALS["lang"]['printer_port_name'] = 'Printer Port Emri';

$GLOBALS["lang"]['Printer Port Name'] = 'Printer Port Emri';

$GLOBALS["lang"]['printer_shared'] = 'E përbashkët';

$GLOBALS["lang"]['Printer Shared'] = 'E përbashkët';

$GLOBALS["lang"]['printer_shared_name'] = 'Printo';

$GLOBALS["lang"]['Printer Shared Name'] = 'Printo';

$GLOBALS["lang"]['priority'] = 'Prioriteti';

$GLOBALS["lang"]['Priority'] = 'Prioriteti';

$GLOBALS["lang"]['Privacy Passphrase'] = 'Password e Privacy';

$GLOBALS["lang"]['Privacy Protocol'] = 'Protokolli i Privacy';

$GLOBALS["lang"]['privileges_required'] = 'Kërkohet privilegje';

$GLOBALS["lang"]['Privileges Required'] = 'Kërkohet privilegje';

$GLOBALS["lang"]['processor'] = 'Proçesi';

$GLOBALS["lang"]['Processor'] = 'Proçesi';

$GLOBALS["lang"]['processor_count'] = 'Numri i proçesuesit';

$GLOBALS["lang"]['Processor Count'] = 'Numri i proçesuesit';

$GLOBALS["lang"]['processor_slot_count'] = 'Numërues i proçesit';

$GLOBALS["lang"]['Processor Slot Count'] = 'Numërues i proçesit';

$GLOBALS["lang"]['processor_type'] = 'Lloji i proçesuesit';

$GLOBALS["lang"]['Processor Type'] = 'Lloji i proçesuesit';

$GLOBALS["lang"]['Processors'] = 'Proçesi';

$GLOBALS["lang"]['product_name'] = 'Emri i produkteve';

$GLOBALS["lang"]['Product Name'] = 'Emri i produkteve';

$GLOBALS["lang"]['Product Name Match from CPE: '] = 'Emri ';

$GLOBALS["lang"]['products'] = 'Produkte';

$GLOBALS["lang"]['Products'] = 'Produkte';

$GLOBALS["lang"]['Professional'] = 'Profesional';

$GLOBALS["lang"]['profile'] = 'Profili';

$GLOBALS["lang"]['Profile'] = 'Profili';

$GLOBALS["lang"]['program'] = 'Programi';

$GLOBALS["lang"]['Program'] = 'Programi';

$GLOBALS["lang"]['Properties'] = 'Pronësitë';

$GLOBALS["lang"]['Proprietary. If you want to modify HighCharts you may require a'] = 'Përkrahje. Nëse dëshironi të ndryshoni HighCharts mund t\'ju duhet një';

$GLOBALS["lang"]['Protects confidentiality, integrity, and availability of information'] = 'Mbron konfidencialitetin, integritetin dhe disponueshmërinë e informacionit';

$GLOBALS["lang"]['protocol'] = 'Protokolli';

$GLOBALS["lang"]['Protocol'] = 'Protokolli';

$GLOBALS["lang"]['Provide a description and select and expires duration.'] = 'Jep një përshkrim, zgjidh dhe skadon kohëzgjatjen.';

$GLOBALS["lang"]['Provide a name - we humbly recommand Open-AudIT &#128512;, but you can name it anything you like.<br>From the Open-AudIT form, copy the value for the <i>Redirect URI</i> field and paste it into the <i>Sign-in redirect URIs</i> field in OKTA.<br>The Sign-out redirect URIs is optional, but if you want you can use open-audit/index.php/logout with your Open-AudIT servers http address, as per the screenshot.<br>Normally your Open-AudIT URL will look something like'] = 'Jep një emër - ne me përulësi urdhërojmë Open-AudIT ♫, por ju mund ta quani atë çdo gjë që ju pëlqen.<br/>Nga forma Open-AudIT, kopjo vlerën për <i>URI e ridrejtuar</i> dhe ngjite në fushë <i>Firma</i> Fusha në OKTA.<br/>URIt e punimit të shenjës është opsionale, por nëse dëshironi mund të përdorni "hapës/autdit." Pp/llout me serverat tuaj Open-AudIT http, si për pamje nga ekrani.<br/>Normalisht e jotja URL Open-ADIT do të duket diçka si';

$GLOBALS["lang"]['Provided you have the correct credentials, Device Seed Discovery works as follows'] = 'Me kusht që të keni kredencialet e sakta, Zbulimi i Farës së Pajisjeve funksionon si vijon';

$GLOBALS["lang"]['provider'] = 'Sigurues';

$GLOBALS["lang"]['Provider'] = 'Sigurues';

$GLOBALS["lang"]['published'] = 'Botuar';

$GLOBALS["lang"]['Published'] = 'Botuar';

$GLOBALS["lang"]['published_date'] = 'Botuar';

$GLOBALS["lang"]['Published Date'] = 'Botuar';

$GLOBALS["lang"]['publisher'] = 'Tabela e Publikuesit';

$GLOBALS["lang"]['Publisher'] = 'Tabela e Publikuesit';

$GLOBALS["lang"]['Puerto Rico'] = 'Porto Riko';

$GLOBALS["lang"]['Purchase'] = 'Blerje';

$GLOBALS["lang"]['purchase_amount'] = 'Pastrim';

$GLOBALS["lang"]['Purchase Amount'] = 'Pastrim';

$GLOBALS["lang"]['purchase_cost_center'] = 'Qendra e Kostove të Blerjes';

$GLOBALS["lang"]['Purchase Cost Center'] = 'Qendra e Kostove të Blerjes';

$GLOBALS["lang"]['purchase_count'] = 'Blerja';

$GLOBALS["lang"]['Purchase Count'] = 'Blerja';

$GLOBALS["lang"]['purchase_date'] = 'Bler datën';

$GLOBALS["lang"]['Purchase Date'] = 'Bler datën';

$GLOBALS["lang"]['purchase_invoice'] = 'Çertifikata e Blerjes';

$GLOBALS["lang"]['Purchase Invoice'] = 'Çertifikata e Blerjes';

$GLOBALS["lang"]['purchase_order'] = 'Rendit rregullin';

$GLOBALS["lang"]['Purchase Order'] = 'Rendit rregullin';

$GLOBALS["lang"]['purchase_order_number'] = 'Renditja e postës';

$GLOBALS["lang"]['Purchase Order Number'] = 'Renditja e postës';

$GLOBALS["lang"]['purchase_service_contract_number'] = 'Bler numrin e kontratave të shërbimit';

$GLOBALS["lang"]['Purchase Service Contract Number'] = 'Bler numrin e kontratave të shërbimit';

$GLOBALS["lang"]['purchase_vendor'] = 'Purchase Vendor';

$GLOBALS["lang"]['Purchase Vendor'] = 'Purchase Vendor';

$GLOBALS["lang"]['purpose'] = 'Qëllimi';

$GLOBALS["lang"]['Purpose'] = 'Qëllimi';

$GLOBALS["lang"]['Qatar'] = 'Katar';

$GLOBALS["lang"]['queries'] = 'Queries';

$GLOBALS["lang"]['Queries'] = 'Queries';

$GLOBALS["lang"]['Queries are an important part of Open-AudIT. They are what enables you to get meaningful information from all the device data you have discovered. Along with summaries and groups, they provide a powerful mechanism to extract crucial information.'] = 'Queries janë një pjesë e rëndësishme e Open-AudIT. Ato janë ato që ju lejojnë të merrni informacione domethënëse nga të gjitha të dhënat e pajisjeve që keni zbuluar. Bashkë me përmbledhjet dhe grupet, ato sigurojnë një mekanizëm të fuqishëm për të nxjerrë informacione thelbësore.';

$GLOBALS["lang"]['Queries for Groups should select only the'] = 'Queries për Grupin duhet të zgjedhë vetëm';

$GLOBALS["lang"]['Query'] = 'Kërkesë';

$GLOBALS["lang"]['Query this Active Directory attribute first to determine the users work unit.'] = 'Kërko këtë Directory Aktive në krye për të përcaktuar njësinë e punës të përdoruesve.';

$GLOBALS["lang"]['Query this Active Directory attribute second to determine the users work unit.'] = 'Kërko nga i dyti për të përcaktuar njësinë e punës të përdoruesit.';

$GLOBALS["lang"]['queue'] = 'Queue';

$GLOBALS["lang"]['Queue'] = 'Queue';

$GLOBALS["lang"]['Queue Limit'] = 'Kufiri';

$GLOBALS["lang"]['Queued Device Audits'] = 'Kontrolle për pajisje';

$GLOBALS["lang"]['Queued IP Scans'] = 'Skanat IP';

$GLOBALS["lang"]['Queued Items'] = 'Elementë';

$GLOBALS["lang"]['RBAC for Active Directory and openLDAP'] = 'RBAC për Active Directory dhe OpenLDAP';

$GLOBALS["lang"]['RU Start'] = 'RU Nisja';

$GLOBALS["lang"]['RX Bitrate'] = 'RX Bitrate';

$GLOBALS["lang"]['RX Freq'] = 'RX Freq';

$GLOBALS["lang"]['RX Level'] = 'Niveli RX';

$GLOBALS["lang"]['RX Power'] = 'Fuqia RX';

$GLOBALS["lang"]['RX Profile'] = 'RX Profili';

$GLOBALS["lang"]['Rack'] = 'Rak';

$GLOBALS["lang"]['rack_devices'] = 'Dispozitivët rak';

$GLOBALS["lang"]['Rack Devices'] = 'Dispozitivët rak';

$GLOBALS["lang"]['rack_id'] = 'ID rac';

$GLOBALS["lang"]['Rack ID'] = 'ID rac';

$GLOBALS["lang"]['Rack Management and Reporting'] = 'Menaxhim rak dhe raportim';

$GLOBALS["lang"]['Racks'] = 'Racks';

$GLOBALS["lang"]['racks'] = 'Racks';

$GLOBALS["lang"]['radio'] = 'Radio';

$GLOBALS["lang"]['Radio'] = 'Radio';

$GLOBALS["lang"]['Radio MAC'] = 'Radio MAC';

$GLOBALS["lang"]['rationale'] = 'Rationale';

$GLOBALS["lang"]['Rationale'] = 'Rationale';

$GLOBALS["lang"]['raw'] = 'Raike';

$GLOBALS["lang"]['Raw'] = 'Raike';

$GLOBALS["lang"]['read'] = 'Lexo';

$GLOBALS["lang"]['Read'] = 'Lexo';

$GLOBALS["lang"]['Read our online documentation on the Open-AudIT Wiki.'] = 'Lexo dokumentacionin tonë online në Wikie Open-AudIT.';

$GLOBALS["lang"]['Read through the log file at'] = 'Lexo file në';

$GLOBALS["lang"]['Received'] = 'Marrë';

$GLOBALS["lang"]['Recently we have been asked the question - do you consider Open-AudIT more secure than other similar programs? As with most things, the answer is <i>it depends</i>.<br><br>Open-AudIT can be operated in such a way as to be extremely secure. But as usual with computer-based security, the more secure you wish to make something, the more inconvenient it becomes to use. The old phrase <i>the most secure computer is one that is turned off and in the cupboard<i> comes to mind.<br><br>Below we will outline some options that can be used with Open-AudIT that will increase security. Like most items within Open-AudIT, these are options and not mandatory. How far you take security is up to you.'] = 'Kohët e fundit na është bërë pyetja: A e konsideroni Open-AudIT më të sigurt se programet e tjera të ngjashme? Ashtu si me shumicën e gjërave, përgjigjja është <i>Varet</i>.<br/><br/>Hap-Aud ËSHTË një mënyrë për të qenë jashtëzakonisht të sigurt. Por si zakonisht me sigurinë e bazuar në kompjuter, sa më të sigurt që dëshironi të bëni diçka, aq më e papërshtatshme bëhet përdorimi. Fraza e vjetër <i>Kompjuteri më i sigurt është ai që është i fikur dhe në dollap.<i> Më vjen në mendje.<br/><br/>Poshtë ne do të përshkruajmë disa opsione që mund të përdoren me Open-AudIT që do të rrisin sigurinë. Si shumica e elementëve brenda Open-AudIT, këto janë opsione dhe jo të detyrueshme. Sa larg ju merrni sigurinë varet nga ju.</i></i>';

$GLOBALS["lang"]['Recertification:</strong> Required every three years'] = 'Identifikimi: Kërkohet çdo tre vjet';

$GLOBALS["lang"]['Red Query'] = 'Kërkesë e kuqe';

$GLOBALS["lang"]['Redirect URI'] = 'URI e ridrejtuar';

$GLOBALS["lang"]['redirect_uri'] = 'Ridrejtuar Uri';

$GLOBALS["lang"]['Redirect Uri'] = 'Ridrejtuar Uri';

$GLOBALS["lang"]['Reduces risk of data breaches and cyber threats'] = 'Redukton rrezikun e shkeljeve të të dhënave dhe kërcënimeve në internet';

$GLOBALS["lang"]['references'] = 'Preferimet';

$GLOBALS["lang"]['References'] = 'Preferimet';

$GLOBALS["lang"]['region'] = 'Rajoni';

$GLOBALS["lang"]['Region'] = 'Rajoni';

$GLOBALS["lang"]['registered_user'] = 'Përdoruesi i regjistruar';

$GLOBALS["lang"]['Registered User'] = 'Përdoruesi i regjistruar';

$GLOBALS["lang"]['Rejected'] = '_Refuzo';

$GLOBALS["lang"]['rel'] = 'Rel';

$GLOBALS["lang"]['Rel'] = 'Rel';

$GLOBALS["lang"]['Release'] = 'Release';

$GLOBALS["lang"]['remediation'] = 'Remediation';

$GLOBALS["lang"]['Remediation'] = 'Remediation';

$GLOBALS["lang"]['Remote'] = 'Hiq';

$GLOBALS["lang"]['remote_address'] = 'Adresa remote';

$GLOBALS["lang"]['Remote Address'] = 'Adresa remote';

$GLOBALS["lang"]['remote_port'] = 'Në distancë Porta';

$GLOBALS["lang"]['Remote Port'] = 'Në distancë Porta';

$GLOBALS["lang"]['Remove'] = 'Hiq';

$GLOBALS["lang"]['Remove Exception'] = 'Hiq';

$GLOBALS["lang"]['Repeat until you have a completely discovered and audited Windows PC.'] = 'Përsëriteni derisa të keni zbuluar komplet dhe kontrolluar PC Windows.';

$GLOBALS["lang"]['Report'] = 'Raporto';

$GLOBALS["lang"]['Report on your devices, networks and more'] = 'Raportoni për pajisjet tuaja, rrjetet dhe më shumë';

$GLOBALS["lang"]['reportable'] = 'Raportues';

$GLOBALS["lang"]['Reportable'] = 'Raportues';

$GLOBALS["lang"]['Reports'] = 'Raporte';

$GLOBALS["lang"]['request'] = 'Kërkesë';

$GLOBALS["lang"]['Request'] = 'Kërkesë';

$GLOBALS["lang"]['Request Method'] = 'Metoda e kërkuar';

$GLOBALS["lang"]['Request Vulnerability'] = 'Kërkohen të qenët i qëndrueshëm';

$GLOBALS["lang"]['Request a Specific CVE'] = 'Kërkon një specifik CVE';

$GLOBALS["lang"]['requested'] = 'Kërkohet';

$GLOBALS["lang"]['Requested'] = 'Kërkohet';

$GLOBALS["lang"]['require_port'] = 'Kërko Porta';

$GLOBALS["lang"]['Require Port'] = 'Kërko Porta';

$GLOBALS["lang"]['Require an Open Port'] = 'Kërko një port të hapur';

$GLOBALS["lang"]['Required'] = 'Kërkohet';

$GLOBALS["lang"]['Required AWS user permissions'] = 'Të drejtat e duhura të përdoruesit';

$GLOBALS["lang"]['Required Fields'] = 'Fushat e kërkuara';

$GLOBALS["lang"]['Reset'] = '_Nga fillimi';

$GLOBALS["lang"]['Reset All Data'] = 'Nga fillimi Gjithçka Të dhëna';

$GLOBALS["lang"]['Reset to Default'] = 'Nga fillimi prezgjedhur';

$GLOBALS["lang"]['resource'] = 'Burimi';

$GLOBALS["lang"]['Resource'] = 'Burimi';

$GLOBALS["lang"]['Resource Name'] = 'Burimi Emri';

$GLOBALS["lang"]['Resources'] = 'Gjëndja';

$GLOBALS["lang"]['response'] = 'Përgjigje';

$GLOBALS["lang"]['Response'] = 'Përgjigje';

$GLOBALS["lang"]['responsibility'] = 'Përgjegjësia';

$GLOBALS["lang"]['Responsibility'] = 'Përgjegjësia';

$GLOBALS["lang"]['Restore my Licenses'] = '_Rivendos liçencën time';

$GLOBALS["lang"]['Restrict to Private'] = 'Kufizimi në privat';

$GLOBALS["lang"]['Restrict to Subnet'] = 'Kufizimi në nënnet';

$GLOBALS["lang"]['result'] = 'Rezultati';

$GLOBALS["lang"]['Result'] = 'Rezultati';

$GLOBALS["lang"]['Resulting Function'] = 'Funksioni';

$GLOBALS["lang"]['Results'] = 'Rezultatet';

$GLOBALS["lang"]['Retrieve a list of devices in the'] = 'Duke marrë listën e pajisjeve';

$GLOBALS["lang"]['Retrieve a list of devices with OS Name like Windows 2008'] = 'Duke marrë një listë pajisjesh me OS Emri si Windows 2008';

$GLOBALS["lang"]['Retrieve all details about the device with id 88.'] = 'Duke marrë të gjitha detajet rreth pajisjes me id 88.';

$GLOBALS["lang"]['Retrieve all devices running Windows.'] = 'Merr të gjitha pajisjet që punojnë në Windows.';

$GLOBALS["lang"]['Retrieve all devices with the standard columns'] = 'Duke marrë të gjitha pajisjet me kollonat standart';

$GLOBALS["lang"]['Retrieve the first 10 devices running Windows ordered by hostname'] = 'Duke marrë 10 pajisjet e para që drejtojnë Windows urdhëruar nga emri i host';

$GLOBALS["lang"]['Retrieve the properties id, ip, hostname, domain, type from all devices'] = 'Duke marrë pronësitë';

$GLOBALS["lang"]['retrieved'] = 'Marrë';

$GLOBALS["lang"]['Retrieved'] = 'Marrë';

$GLOBALS["lang"]['retrieved_ident'] = 'Ngushto kontaktin';

$GLOBALS["lang"]['Retrieved Ident'] = 'Ngushto kontaktin';

$GLOBALS["lang"]['retrieved_name'] = 'Emri i marrë';

$GLOBALS["lang"]['Retrieved Name'] = 'Emri i marrë';

$GLOBALS["lang"]['Retrieved from the device - Windows:Win32_ComputerSystemProduct, Linux:dmidecode, MacOS:system_profiler, ESXi:vim-cmd hostsvc/hostsummary, HP-UX:machinfo, Solaris:smbios, AIX:uname.'] = 'Marrë nga dispozitivi - Dritaret: Win32_CompputerSystemProduct, Linux:dmidecodecode, MacOS Solaris: SIX:name.';

$GLOBALS["lang"]['Retrieving a List of Credentials'] = 'Marrja e listës së gjërave me vlerë';

$GLOBALS["lang"]['Retrieving or Creating'] = 'Marrja apo krijimi';

$GLOBALS["lang"]['Return a collection of devices with the default set of columns (devices.id, devices.icon, devices.type, devices.name, devices.ip, devices.dns_fqdn, devices.identification, devices.description, devices.manufacturer, devices.os_family, devices.status)'] = 'Kthe a nga me paracaktuar nga kollonat j';

$GLOBALS["lang"]['Return a list of all Modules installed on Routers'] = 'Rikthe a lista nga në';

$GLOBALS["lang"]['Return an individual device details'] = 'Kthen një dispozitiv të veçantë\\';

$GLOBALS["lang"]['Returns a list of {collection}.'] = 'Kthen një listë me {mbledhje}.';

$GLOBALS["lang"]['Returns a {collection} details.'] = 'Kthen një detaj {mbledhje}.';

$GLOBALS["lang"]['Reunion'] = 'Ribashkimi';

$GLOBALS["lang"]['Review current practices against ISO 27001 requirements'] = 'Rishiko praktikat aktuale kundër kërkesave ISO 27001';

$GLOBALS["lang"]['revision'] = 'Revizioni';

$GLOBALS["lang"]['Revision'] = 'Revizioni';

$GLOBALS["lang"]['risk_assesment_result'] = 'Rezultati i sëmundjes së rrezikut';

$GLOBALS["lang"]['Risk Assesment Result'] = 'Rezultati i sëmundjes së rrezikut';

$GLOBALS["lang"]['Risk Assessment & Treatment'] = 'Vlerësimi dhe trajtimi i rrezikut';

$GLOBALS["lang"]['Risk Management'] = 'Menaxhimi i rrezikut';

$GLOBALS["lang"]['Role'] = 'Roli';

$GLOBALS["lang"]['roles'] = 'Roli';

$GLOBALS["lang"]['Roles'] = 'Roli';

$GLOBALS["lang"]['Roles can only be created and edited if you have an Open-AudIT Enterprise license. For most users, the default set of Roles should be all that is required.'] = 'Roli mund të krijohet dhe redaktohet vetëm nëse keni licensën e Ndërmarrjes Open-AudIT. Për shumicën e përdoruesve, seria e prezgjedhur e roleve duhet të jetë gjithçka që kërkohet.';

$GLOBALS["lang"]['Romania'] = 'Rumani';

$GLOBALS["lang"]['Romanian'] = 'Rumanisht';

$GLOBALS["lang"]['Room'] = 'Kanali';

$GLOBALS["lang"]['route'] = 'Rruga';

$GLOBALS["lang"]['Route'] = 'Rruga';

$GLOBALS["lang"]['Row'] = 'Rreshti';

$GLOBALS["lang"]['Row Count'] = 'Numërimi i rreshtit';

$GLOBALS["lang"]['row_position'] = 'Pozicioni i rreshtit';

$GLOBALS["lang"]['Row Position'] = 'Pozicioni i rreshtit';

$GLOBALS["lang"]['Rows'] = 'Rreshtat';

$GLOBALS["lang"]['ru_height'] = 'Road';

$GLOBALS["lang"]['Ru Height'] = 'Road';

$GLOBALS["lang"]['ru_start'] = 'Ru start';

$GLOBALS["lang"]['Ru Start'] = 'Ru start';

$GLOBALS["lang"]['rule_group'] = 'Grupi i rregullit';

$GLOBALS["lang"]['Rule Group'] = 'Grupi i rregullit';

$GLOBALS["lang"]['rules'] = 'Rregullat';

$GLOBALS["lang"]['Rules'] = 'Rregullat';

$GLOBALS["lang"]['Rules are created and run against a device when the device is discovered or an audit result is processed. Rules can be used to set a device attribute based on other attributes.<br><br>NOTE - At present we cannot delete a rule input or output that contains a /. This is because the framework is parsing the / as part of the URL and returning a 404, even before our code runs. The work-around for this is to delete the Rule itself, then recreate the inputs and outputs as required. Fortunately inputs and outputs that contain a / are rare (indeed, none exist by default).'] = 'Rregullat janë krijuar dhe drejtuar kundër një pajisjeje kur pajisja është zbuluar ose është përpunuar një rezultat kontrolli. Rregullat mund të përdoren për të vendosur një atribut me anë të vetive të tjera.<br/><br/>NUK mund ta fshijmë sot një të dhënë ose një prodhim që përmban një /. Kjo është për shkak se kuadri është parsting / si pjesë e URL dhe kthimi i një 404, edhe para se kodi ynë të funksionojë. Puna-rreth kësaj është të eleminohet vetë Rregulla, pastaj të rikrijohen inputet dhe rezultatet siç kërkohet. Për fat të mirë të dhënat dhe rezultatet që përmbajnë një / janë të rralla (në të vërtetë, asnjë nuk ekziston si duhet).';

$GLOBALS["lang"]['Run Discovery'] = 'Ekzekuto';

$GLOBALS["lang"]['Run Discovery on Devices'] = 'Ekzekuto zbulimin e pajisjeve';

$GLOBALS["lang"]['Run Your Discovery'] = 'Zbato zbulimin';

$GLOBALS["lang"]['Run a Command'] = 'Ekzekuto një komandë';

$GLOBALS["lang"]['Run a discovery and find out <b>Whats On Your Network?</b>'] = 'Bëj një zbulim dhe gjeje. <b>Çfarë ke në rrjet?</b>';

$GLOBALS["lang"]['Run the script by typing <code>cscript test_windows_client.vbs</code> in the console.'] = 'Ekzekuton script duke shkruar <code>cscript test_windows_client.vbs</code> në konsolë.';

$GLOBALS["lang"]['Run this Command'] = 'Ekzekuto këtë komandë';

$GLOBALS["lang"]['runas'] = 'Runas';

$GLOBALS["lang"]['Runas'] = 'Runas';

$GLOBALS["lang"]['Running'] = 'Në ekzekutim';

$GLOBALS["lang"]['Running Open-AudIT Apache Service Under Windows'] = 'Shërbimi Apash Open-Audit nën Windows';

$GLOBALS["lang"]['Russian'] = 'Rusisht';

$GLOBALS["lang"]['Russian Federation'] = 'Federata Ruse';

$GLOBALS["lang"]['Rwanda'] = 'Ruanda';

$GLOBALS["lang"]['rx_bitrate'] = 'Rx Bitrate';

$GLOBALS["lang"]['Rx Bitrate'] = 'Rx Bitrate';

$GLOBALS["lang"]['rx_freq'] = 'Rx Freq';

$GLOBALS["lang"]['Rx Freq'] = 'Rx Freq';

$GLOBALS["lang"]['rx_level'] = 'Niveli Rx';

$GLOBALS["lang"]['Rx Level'] = 'Niveli Rx';

$GLOBALS["lang"]['rx_power'] = 'Fuqia Rx';

$GLOBALS["lang"]['Rx Power'] = 'Fuqia Rx';

$GLOBALS["lang"]['rx_profile'] = 'Rx Profili';

$GLOBALS["lang"]['Rx Profile'] = 'Rx Profili';

$GLOBALS["lang"]['SAN Audit'] = 'LAN Audit';

$GLOBALS["lang"]['SAN Auto-Discover'] = 'SAN';

$GLOBALS["lang"]['SELECT'] = 'SELECT';

$GLOBALS["lang"]['SID'] = 'SID';

$GLOBALS["lang"]['SM Version'] = 'SM Version';

$GLOBALS["lang"]['SNMP (v1 / v2)'] = 'SNMP (v1 / v2)';

$GLOBALS["lang"]['SNMP Details'] = 'SNEMP Hollësi';

$GLOBALS["lang"]['SNMP OID'] = 'OID SNMP';

$GLOBALS["lang"]['SNMP Version'] = 'SNEMP Version';

$GLOBALS["lang"]['SNMP v3'] = 'SNMP v3';

$GLOBALS["lang"]['SQL'] = 'SQL';

$GLOBALS["lang"]['SQL (Advanced)'] = 'SQL (Advanced)';

$GLOBALS["lang"]['SQL Creation Statements'] = 'Gjendja e krijimit SQL';

$GLOBALS["lang"]['SQL not containing this condition will result in the widget failing to be executed.'] = 'SQL nuk përmban këtë kusht do të rezultojë në ekzekutimin e widget.';

$GLOBALS["lang"]['SSH'] = 'SSH';

$GLOBALS["lang"]['SSH Key'] = 'SSH Kenia';

$GLOBALS["lang"]['SW Revision'] = 'Revizioni';

$GLOBALS["lang"]['Saint Barthelemy'] = 'Saint Barthelemi';

$GLOBALS["lang"]['Saint Helena'] = 'Shën Helena';

$GLOBALS["lang"]['Saint Kitts and Nevis'] = 'Saint Kits dhe Nevis';

$GLOBALS["lang"]['Saint Lucia'] = 'Saint Lucia';

$GLOBALS["lang"]['Saint Martin'] = 'Shën Martin';

$GLOBALS["lang"]['Saint Pierre and Miquelon'] = 'Saint Pier dhe Miquelon';

$GLOBALS["lang"]['Saint Vincent and the Grenadines'] = 'Shën Vinsenti dhe Grendinat';

$GLOBALS["lang"]['Samoa'] = 'Samoa';

$GLOBALS["lang"]['san'] = 'San';

$GLOBALS["lang"]['San'] = 'San';

$GLOBALS["lang"]['San Marino'] = 'San Marino';

$GLOBALS["lang"]['Sao Tome and Principe'] = 'Sao Tome dhe Principe';

$GLOBALS["lang"]['Saturday'] = 'E shtunë';

$GLOBALS["lang"]['Saudi Arabia'] = 'Arabia Saudite';

$GLOBALS["lang"]['Save and run the file. Make sure you run the file as an Administrator in order to install it (right click, Run as Administrator).'] = 'Ruaj dhe kontrollo dosjen. a në djathtas j';

$GLOBALS["lang"]['Save as Default'] = 'Ruaje si të prezgjedhur';

$GLOBALS["lang"]['Save the downloaded file.'] = 'Ruaj file e shkarkuar.';

$GLOBALS["lang"]['scaling'] = 'Skanim';

$GLOBALS["lang"]['Scaling'] = 'Skanim';

$GLOBALS["lang"]['scan_options'] = 'Mundësitë';

$GLOBALS["lang"]['Scan Options'] = 'Mundësitë';

$GLOBALS["lang"]['Scan Options ID'] = 'ID e opsioneve skanim';

$GLOBALS["lang"]['Scan for this port(s) and if detected open, use this port for SSH communication. This is added to the list of Custom TCP Ports above (if not already included), so there is no need to include it in that list as well. Comma seperated, no spaces.'] = 'Skano për këtë port dhe nëse zbulohet hapur, përdor këtë port për komunikimin SSH. Kjo i shtohet listës së Porteve të E personalizuara TCP sipër (nëse nuk përfshihet tashmë), kështu që nuk ka nevojë ta përfshijmë atë gjithashtu në këtë listë. Koma ndarë, nuk ka hapësira.';

$GLOBALS["lang"]['Scan the Nmap top number of TCP ports.'] = 'Skano numrin e parë të porteve TCP.';

$GLOBALS["lang"]['Scan the Nmap top number of UDP ports.'] = 'Kontrollo numrin kryesor të porteve të UDP-së.';

$GLOBALS["lang"]['schedule'] = 'Skema';

$GLOBALS["lang"]['Schedule'] = 'Skema';

$GLOBALS["lang"]['Scheduled device discovery and reporting make Open-AudIT Professional an efficient solution for busy IT professionals looking to reduce overheads and increase insights.'] = 'Zbulimi i pajisjeve të planifikuara dhe raportimi e bëjnë Profesional Open-AudIT një zgjidhje të efektshme për profesionistët e zënë të IT që kërkojnë të reduktojnë mbi kokë dhe të rritin mendjehollësitë.';

$GLOBALS["lang"]['Scheduling - discovery, reporting &amp; more'] = 'Zbulim, raportim dhe më shumë';

$GLOBALS["lang"]['scope'] = 'Qëllimi';

$GLOBALS["lang"]['Scope'] = 'Qëllimi';

$GLOBALS["lang"]['Scope is known as Authorization Scope, representing whether a vulnerability affects resources beyond the original security authority of the vulnerable component.<br><br>The only two valid values for this attribute are'] = 'Qëllimi njihet si Qëllimi i autorizimit, duke përfaqësuar nëse cënueshmëria ndikon në burimet përtej autoritetit fillestar të sigurisë të komponentit të prekshëm.<br/><br/>Të vetmet vlera të vlefshme për këtë atribut janë';

$GLOBALS["lang"]['script_timeout'] = 'Script';

$GLOBALS["lang"]['Script Timeout'] = 'Script';

$GLOBALS["lang"]['scripts'] = 'Script';

$GLOBALS["lang"]['Scripts'] = 'Script';

$GLOBALS["lang"]['scsi'] = 'Scsi';

$GLOBALS["lang"]['Scsi'] = 'Scsi';

$GLOBALS["lang"]['scsi_bus'] = 'Autobusi Scsi';

$GLOBALS["lang"]['Scsi Bus'] = 'Autobusi Scsi';

$GLOBALS["lang"]['scsi_logical_unit'] = 'Njësia logjike Scsi';

$GLOBALS["lang"]['Scsi Logical Unit'] = 'Njësia logjike Scsi';

$GLOBALS["lang"]['scsi_port'] = 'Porta Scsi';

$GLOBALS["lang"]['Scsi Port'] = 'Porta Scsi';

$GLOBALS["lang"]['Search'] = 'Kërko';

$GLOBALS["lang"]['Search For a Device'] = 'Kërko për një dispozitiv';

$GLOBALS["lang"]['Searching Using DataTables'] = 'Kërkimi i të dhënave';

$GLOBALS["lang"]['Second'] = 'E dyta';

$GLOBALS["lang"]['secondary'] = 'Sekonda';

$GLOBALS["lang"]['Secondary'] = 'Sekonda';

$GLOBALS["lang"]['Secondary Text'] = 'Teksti i dytë';

$GLOBALS["lang"]['Secret Key'] = 'Kyçi sekret';

$GLOBALS["lang"]['section'] = 'Zgjedhja';

$GLOBALS["lang"]['Section'] = 'Zgjedhja';

$GLOBALS["lang"]['secure'] = 'I sigurtë';

$GLOBALS["lang"]['Secure'] = 'I sigurtë';

$GLOBALS["lang"]['Security Content Automation Protocol'] = 'Përmbajtja';

$GLOBALS["lang"]['Security Level'] = 'Niveli i sigurisë';

$GLOBALS["lang"]['Security Name'] = 'Emri i sigurisë';

$GLOBALS["lang"]['Security Status'] = 'Gjendja e sigurisë';

$GLOBALS["lang"]['security_zone'] = 'Zona e sigurisë';

$GLOBALS["lang"]['Security Zone'] = 'Zona e sigurisë';

$GLOBALS["lang"]['See above. NOTE - This could also be caused by a self-signed certificate on the LDAP server. We are working to allow for this in a future release.'] = 'Shiko lart. NOE - Kjo mund të shkaktohet gjithashtu nga një çertifikatë e vetë-firmuar në serverin LDAP. Ne jemi duke punuar për të lejuar për këtë në një lirim të ardhshëm.';

$GLOBALS["lang"]['See our page on enabling'] = 'Shih faqen tonë në lidhje me mundësinë';

$GLOBALS["lang"]['Seed Discoveries'] = 'Zbulohen farërat';

$GLOBALS["lang"]['seed_ip'] = 'Farë IP';

$GLOBALS["lang"]['Seed IP'] = 'Farë IP';

$GLOBALS["lang"]['seed_ping'] = 'Farë Ping';

$GLOBALS["lang"]['Seed Ping'] = 'Farë Ping';

$GLOBALS["lang"]['seed_restrict_to_private'] = 'Fara kufizohet në privat';

$GLOBALS["lang"]['Seed Restrict To Private'] = 'Fara kufizohet në privat';

$GLOBALS["lang"]['seed_restrict_to_subnet'] = 'Fara kufizohet në nënnet';

$GLOBALS["lang"]['Seed Restrict To Subnet'] = 'Fara kufizohet në nënnet';

$GLOBALS["lang"]['Select'] = 'Zgjidh';

$GLOBALS["lang"]['Select Admin -> Tasks -> Create Task from the menu.'] = 'Zgjidh Admin -> Aktivitete -> Krijo Detyra nga menuja.';

$GLOBALS["lang"]['Select All'] = 'Zgjidh gjithçka';

$GLOBALS["lang"]['Select All Devices'] = 'Zgjidh të gjithë kontaktet';

$GLOBALS["lang"]['select_external_attribute'] = 'Zgjidh Veçoritë e jashtme';

$GLOBALS["lang"]['Select External Attribute'] = 'Zgjidh Veçoritë e jashtme';

$GLOBALS["lang"]['select_external_count'] = 'Zgjidh';

$GLOBALS["lang"]['Select External Count'] = 'Zgjidh';

$GLOBALS["lang"]['select_external_type'] = 'Zgjidh të jashtëm Lloji';

$GLOBALS["lang"]['Select External Type'] = 'Zgjidh të jashtëm Lloji';

$GLOBALS["lang"]['select_external_value'] = 'Zgjidh të jashtëm Vlera';

$GLOBALS["lang"]['Select External Value'] = 'Zgjidh të jashtëm Vlera';

$GLOBALS["lang"]['select_internal_attribute'] = 'Zgjidh Veçoritë e brendshme';

$GLOBALS["lang"]['Select Internal Attribute'] = 'Zgjidh Veçoritë e brendshme';

$GLOBALS["lang"]['select_internal_count'] = 'Zgjidh numërimin e brendshëm';

$GLOBALS["lang"]['Select Internal Count'] = 'Zgjidh numërimin e brendshëm';

$GLOBALS["lang"]['select_internal_type'] = 'Zgjidh gjithçka Lloji';

$GLOBALS["lang"]['Select Internal Type'] = 'Zgjidh gjithçka Lloji';

$GLOBALS["lang"]['select_internal_value'] = 'Zgjidh gjithçka Vlera';

$GLOBALS["lang"]['Select Internal Value'] = 'Zgjidh gjithçka Vlera';

$GLOBALS["lang"]['Select Menu -> Manage -> Baselines -> List Baselines.'] = 'Zgjidh Menu Menazhuesi -> Bazë Lista.';

$GLOBALS["lang"]['Select a Table'] = 'Zgjidh një tabelë';

$GLOBALS["lang"]['Select an accredited certification body'] = 'Zgjidh një trup çertifikimi akredituar';

$GLOBALS["lang"]['Select and apply appropriate controls (Annex A)'] = 'Zgjidh dhe zbatoj kontrollet e duhura (Aneks A)';

$GLOBALS["lang"]['Select the <i>COM Security</i> tab<br><br>Click on Access Permissions Edit Default'] = 'Zgjidh <i>COM Siguria</i> skedë<br/><br/>Kliko mbi të drejtat e hyrjes Ndrysho paracaktuar';

$GLOBALS["lang"]['Select the <i>Sign On</i> tab and copy the value for <i>Issuer</i> (just the URL itself). Paste this into the Open-AudIT <i>Issuer</i> field.'] = 'Zgjidh <i>Firmos</i> për <i>Dërgues</i> (Vetëm URL.). Ngjite këtë në Open-AudIT <i>Dërgues</i> Fusha.';

$GLOBALS["lang"]['Select the <i>This Account</i> checkbox and provide the account name and password.'] = 'Zgjidh <i>Ky profil</i> Kontrollo dhe identifiko emrin dhe fjalëkalimin e profilit.';

$GLOBALS["lang"]['Select the Start menu and type <i>services<.i>. Click the Services icon.'] = 'Zgjidh menunë e fillimit dhe llojin <i>Shërbimet<.i>. Kliko ikonën e Shërbimeve.</i>';

$GLOBALS["lang"]['Select the type of Auth Menthod to create and input the relevant details.'] = 'Zgjidh llojin e Auth Mentodit për të krijuar dhe dhënë detajet përkatëse.';

$GLOBALS["lang"]['Self Delete'] = 'Elemino';

$GLOBALS["lang"]['Senegal'] = 'Senegal';

$GLOBALS["lang"]['sensitivity'] = 'Ndjeshmëri';

$GLOBALS["lang"]['Sensitivity'] = 'Ndjeshmëri';

$GLOBALS["lang"]['September'] = 'Shtator';

$GLOBALS["lang"]['Serbia'] = 'Serbia';

$GLOBALS["lang"]['serial'] = 'Serial';

$GLOBALS["lang"]['Serial'] = 'Serial';

$GLOBALS["lang"]['serial_imei'] = 'Imi serial';

$GLOBALS["lang"]['Serial Imei'] = 'Imi serial';

$GLOBALS["lang"]['serial_sim'] = 'Sim serial';

$GLOBALS["lang"]['Serial Sim'] = 'Sim serial';

$GLOBALS["lang"]['series'] = 'Sekuenca';

$GLOBALS["lang"]['Series'] = 'Sekuenca';

$GLOBALS["lang"]['server'] = 'Serveri';

$GLOBALS["lang"]['Server'] = 'Serveri';

$GLOBALS["lang"]['server_id'] = 'ID e serverit';

$GLOBALS["lang"]['Server ID'] = 'ID e serverit';

$GLOBALS["lang"]['Server Is'] = 'Serveri është';

$GLOBALS["lang"]['server_item'] = 'Serveri';

$GLOBALS["lang"]['Server Item'] = 'Serveri';

$GLOBALS["lang"]['Server Status'] = 'Gjendja e serverit';

$GLOBALS["lang"]['Servers'] = 'Serveri';

$GLOBALS["lang"]['Servers Only'] = 'Vetëm serverët';

$GLOBALS["lang"]['service'] = 'Shërbimi';

$GLOBALS["lang"]['Service'] = 'Shërbimi';

$GLOBALS["lang"]['service_identifier'] = 'Identifikuesi i shërbimit';

$GLOBALS["lang"]['Service Identifier'] = 'Identifikuesi i shërbimit';

$GLOBALS["lang"]['service_level_a'] = 'Niveli i shërbimit A';

$GLOBALS["lang"]['Service Level A'] = 'Niveli i shërbimit A';

$GLOBALS["lang"]['service_level_b'] = 'Niveli i Shërbimit B';

$GLOBALS["lang"]['Service Level B'] = 'Niveli i Shërbimit B';

$GLOBALS["lang"]['service_network'] = 'Rrjeti i shërbimit';

$GLOBALS["lang"]['Service Network'] = 'Rrjeti i shërbimit';

$GLOBALS["lang"]['service_number'] = 'Numri i shërbimit';

$GLOBALS["lang"]['Service Number'] = 'Numri i shërbimit';

$GLOBALS["lang"]['service_pack'] = 'Shërbimi';

$GLOBALS["lang"]['Service Pack'] = 'Shërbimi';

$GLOBALS["lang"]['service_plan'] = 'Plani i shërbimit';

$GLOBALS["lang"]['Service Plan'] = 'Plani i shërbimit';

$GLOBALS["lang"]['service_provider'] = 'Siguruesi i Shërbimit';

$GLOBALS["lang"]['Service Provider'] = 'Siguruesi i Shërbimit';

$GLOBALS["lang"]['service_tag'] = 'Tag';

$GLOBALS["lang"]['Service Tag'] = 'Tag';

$GLOBALS["lang"]['service_type'] = 'Lloji i shërbimit';

$GLOBALS["lang"]['Service Type'] = 'Lloji i shërbimit';

$GLOBALS["lang"]['Service Under Windows'] = 'Shërbimi nën Windows';

$GLOBALS["lang"]['service_version'] = 'Versioni i Shërbimit';

$GLOBALS["lang"]['Service Version'] = 'Versioni i Shërbimit';

$GLOBALS["lang"]['Set'] = 'Vendos';

$GLOBALS["lang"]['set_by'] = 'Cakto sipas';

$GLOBALS["lang"]['Set By'] = 'Cakto sipas';

$GLOBALS["lang"]['Set by the Discovery function - do not normally set this manually.'] = 'nga nuk.';

$GLOBALS["lang"]['Set by the audit_domain or discover_domain scripts. Do not set.'] = 'Përcakton nga audit_domain apo zbulon script-et domain. Mos vendos.';

$GLOBALS["lang"]['Set the external text to capitalized version of the internal data.'] = 'Përcakto tekstin e jashtëm tek versioni i kapitalizuar i të dhënave të brendshme.';

$GLOBALS["lang"]['Set the external text to lowercase.'] = 'Cakto tekstin e jashtëm në fund.';

$GLOBALS["lang"]['Set the external text to uppercase.'] = 'Zgjidh tekst nga';

$GLOBALS["lang"]['Set the size (normal or compact) of the tables on the List screens.'] = 'madhësia nga në Lista.';

$GLOBALS["lang"]['Set this if you wish to insert systems from AD that may not be contactable, but have been seen by AD since that date.'] = 'Vendose këtë nëse dëshiron të futësh sisteme nga AD që mund të mos jenë të kontaktuar, por janë parë nga AD që nga ajo datë.';

$GLOBALS["lang"]['Setting up Discovery on a subnet is almost identical to running a regular Discovery via the web interface. The only additional items are the scheduled hour and day(s) and a name for the Scheduled Task itself. You can take advantage of this to schedule multiple discoveries using different sets of credentials.<br><br>As per the Subnet Discovery, the Active Directory Discovery is also simply the same fields as a regular Active Directory Discovery with the addition of a day, hour(s) and name.<br><br>If the Open-AudIT Server has Collectors reporting to it, an additional drop down is provided. You can select this to specify which Collector the task should run on. Only Discovery tasks are supported for Collectors. Specify the same items as a regular Discovery, but provide the alternate Collector to run this task.'] = 'Vendosja e zbulimit në një nënnet është pothuajse identike me drejtimin e një zbulimi të rregullt nëpërmjet interfaqes së internetit. Të vetmet gjëra shtesë janë orët e caktuara dhe ditët e punës dhe një emër për vetë detyrën e caktuar. Mund të përfitoni nga kjo për të programuar zbulime të shumta duke përdorur disa grupe të ndryshme kredencialesh.<br/><br/>Si për zbulimin e Subnet, Discovery Aktiv Directory është gjithashtu thjesht të njëjtat fusha si një Discovery Aktiv Directory me shtimin e një dite, orë dhe emër.<br/><br/>Nëse Serveri Open-AudIT ka marrë pjesë në të, jepet një rënie shtesë. Ju mund të zgjidhni këtë për të specifikuar se në cilin koleksion duhet ekzekutuar detyra. Vetëm detyrat e zbulimit janë të suportuara për koleksionuesit. Specifiko të njëjtat elementë si një zbulim i rregullt, por jep koleksionuesin alternativ për të ekzekutuar këtë detyrë.';

$GLOBALS["lang"]['severity'] = 'Severity';

$GLOBALS["lang"]['Severity'] = 'Severity';

$GLOBALS["lang"]['severity_text'] = 'Teksti';

$GLOBALS["lang"]['Severity Text'] = 'Teksti';

$GLOBALS["lang"]['Severity is calculated from the <code>base_score</code> and can be one of: None, Low, Medium, High, Critical.'] = 'Severiteti është llogaritur nga <code>base_score</code> Dhe mund të jetë një nga: askush, i ulët, mesatar, i lartë, kritik.';

$GLOBALS["lang"]['Seychelles'] = 'Sichelles';

$GLOBALS["lang"]['share'] = 'Shpërnda';

$GLOBALS["lang"]['Share'] = 'Shpërnda';

$GLOBALS["lang"]['Share Name'] = 'Emri i aksioneve';

$GLOBALS["lang"]['shared'] = 'E përbashkët';

$GLOBALS["lang"]['Shared'] = 'E përbashkët';

$GLOBALS["lang"]['shared_name'] = 'E përbashkët';

$GLOBALS["lang"]['Shared Name'] = 'E përbashkët';

$GLOBALS["lang"]['shell'] = 'Shell';

$GLOBALS["lang"]['Shell'] = 'Shell';

$GLOBALS["lang"]['Ship Date'] = 'Anija';

$GLOBALS["lang"]['Shipped are a set of default items. These can be found by going to menu'] = 'Shikuar është një set i elementëve të prezgjedhur. Këto mund të gjenden duke shkuar në menu';

$GLOBALS["lang"]['short'] = 'E shkurtër';

$GLOBALS["lang"]['Short'] = 'E shkurtër';

$GLOBALS["lang"]['Should I remove all non-current data from this device?'] = 'A duhet t\'i heq të gjitha të dhënat jo aktuale nga kjo dispozitiv?';

$GLOBALS["lang"]['Should this file (or pattern) be used to exclude files from being reported. Normally, to audit files, this is set to <code>y</code>.'] = 'Nëse file (ose model) do të përdoret për të përjashtuar njoftimet e files. Normalisht, për të kontrolluar dosjet, kjo është vendosur për <code>y</code>.';

$GLOBALS["lang"]['Should this vendor be used when retrieving vulnerabilities from FirstWave.'] = 'A duhet përdorur ky shitës kur merr dobësi nga FirstWave.';

$GLOBALS["lang"]['Should we add devices from the remote service, locally.'] = 'Duhet të shtojmë pajisje nga shërbimi i largët, në vend.';

$GLOBALS["lang"]['Should we apply this license to the selected Org as well as the Orgs children?'] = 'A duhet ta aplikojmë këtë licensë tek Orgu i zgjedhur, si edhe tek fëmijët Orgs?';

$GLOBALS["lang"]['Should we audit a SAN if the management software is detected.'] = 'Duhet të kontrollojmë një SAN nëse diktohet programi i menaxhimit.';

$GLOBALS["lang"]['Should we audit mount points.'] = 'Duhet të kontrollojmë pikët e malit.';

$GLOBALS["lang"]['Should we audit netstat ports (yes, no, servers only).'] = 'Duhet të kontrollojmë portet e rrjetave (po, jo, vetëm serverat).';

$GLOBALS["lang"]['Should we audit the installed software.'] = 'Duhet të kontrollojmë programin e instaluar.';

$GLOBALS["lang"]['Should we consider a filtered port to be an open port - and therefore flag this IP as having a device attached?'] = 'A duhet të shqyrtojmë një port të filtruar që të jetë një port i hapur - e për këtë arsye ta mbajmë këtë IP si të ngjitur?';

$GLOBALS["lang"]['Should we consider an open|filtered port to be an open port - and therefore flag this IP as having a device attached?'] = 'A duhet ta konsiderojmë një port të hapur të filtruar për të qenë port i hapur - dhe për këtë arsye ta mbajmë këtë IP si të ngjitur?';

$GLOBALS["lang"]['Should we convert the hostname to lowercase.'] = 'Duhet të konvertojmë emrin e host në më të ultin.';

$GLOBALS["lang"]['Should we create a file based on the audit result.'] = 'Duhet të krijojmë një dosje bazuar në rezultatin e kontrollit.';

$GLOBALS["lang"]['Should we expose this group in the web interface.'] = 'Duhet ta ekspozojmë këtë grup në interfaqen e internetit.';

$GLOBALS["lang"]['Should we expose this query in the list of reports under the Report menu in the web interface.'] = 'A duhet ta ekspozojmë këtë kërkesë në listën e raporteve nën menunë e raportimit në interfaqen e internetit.';

$GLOBALS["lang"]['Should we expose this query in the list of reports under the Reports menu in the web interface.'] = 'A duhet ta ekspozojmë këtë kërkesë në listën e raporteve nën menunë e Raporteve në interfaqen e internetit.';

$GLOBALS["lang"]['Should we hide the audit script window when executing.'] = 'A duhet ta fshehim dritaren e auditimit kur të ekzekutohet.';

$GLOBALS["lang"]['Should we ignore an invalid or self signed SSL certificate and submit the result anyway.'] = 'Nëse shpërfillim një çertifikatë SSL të firmosur apo të pavlefshëm dhe e paraqesim rezultatin sidoqoftë.';

$GLOBALS["lang"]['Should we install Open-Scap on the target machine.'] = 'Duhet të instalojmë Open-Scap në makinën objektive.';

$GLOBALS["lang"]['Should we match a device based mac address even if its a known likely duplicate from VMware.'] = 'A duhet të përputhemi me një adresë të bazuar në MC edhe nëse është një kopje e njohur nga VMware.';

$GLOBALS["lang"]['Should we match a device based on its DNS fqdn.'] = 'Duhet të përputhemi me një pajisje të bazuar në DNS fqdn.';

$GLOBALS["lang"]['Should we match a device based on its DNS hostname.'] = 'Duhet të përputhemi me një pajisje të bazuar në emrin e tij të emrit të DNS-së.';

$GLOBALS["lang"]['Should we match a device based on its UUID.'] = 'Duhet të përputhemi me një pajisje të bazuar në UUID-in e saj.';

$GLOBALS["lang"]['Should we match a device based on its dbus id.'] = 'A duhet të përputhemi me një pajisje të bazuar në id të saj.';

$GLOBALS["lang"]['Should we match a device based on its fqdn.'] = 'Duhet të përputhemi me një pajisje të bazuar në fqdn.';

$GLOBALS["lang"]['Should we match a device based on its hostname and UUID.'] = 'Duhet të përputhemi me një pajisje të bazuar në emrin e tij të emrit dhe UUID.';

$GLOBALS["lang"]['Should we match a device based on its hostname and dbus id.'] = 'Duhet të përputhemi me një pajisje të bazuar në emrin e tij të emrit dhe id.';

$GLOBALS["lang"]['Should we match a device based on its hostname and serial.'] = 'Duhet të përputhemi me një pajisje të bazuar në emrin e tij dhe serialin.';

$GLOBALS["lang"]['Should we match a device based on its ip if we have an existing device with no data.'] = 'Duhet të përputhemi me një pajisje të bazuar në ip të saj nëse kemi një pajisje ekzistuese pa të dhëna.';

$GLOBALS["lang"]['Should we match a device based on its ip.'] = 'Duhet të përputhemi me një pajisje të bazuar në ip-in e saj.';

$GLOBALS["lang"]['Should we match a device based on its mac address.'] = 'Duhet të përputhemi me një pajisje të bazuar në adresën e saj.';

$GLOBALS["lang"]['Should we match a device based on its serial and type.'] = 'Duhet të përputhemi me një pajisje të bazuar në serialin dhe tipin e saj.';

$GLOBALS["lang"]['Should we match a device based on its serial number.'] = 'Duhet të përputhemi me një pajisje bazuar në numrin e saj serial.';

$GLOBALS["lang"]['Should we match a device based only on its SNMP sysName and serial.'] = 'A duhet të përputhemi me një pajisje të bazuar vetëm në SNSMP sysName dhe serial.';

$GLOBALS["lang"]['Should we match a device based only on its SNMP sysName.'] = 'Duhet të përputhemi me një pajisje të bazuar vetëm në SNSMP SisName.';

$GLOBALS["lang"]['Should we match a device based only on its hostname.'] = 'Duhet të përputhemi me një pajisje të bazuar vetëm në emrin e tij.';

$GLOBALS["lang"]['Should we ping the IP before attempting to scan it? If it does not respond to the ping, skip this device.'] = 'A duhet të ping IP para se të përpiqemi ta skanojmë atë? Nëse nuk i përgjigjet ping-ut, hiqe këtë pajisje.';

$GLOBALS["lang"]['Should we populate the external system from our local devices.'] = 'Duhet ta nxjerrim sistemin e jashtëm nga pajisjet tona lokale.';

$GLOBALS["lang"]['Should we retrieve all DNS names'] = 'Duhet t\'i marrim të gjithë emrat e DNS-së';

$GLOBALS["lang"]['Should we run an audit and submit it (y/n).'] = 'Nëse bëjmë një kontroll dhe e dorëzojmë (y/n).';

$GLOBALS["lang"]['Should we test for SNMP using UDP port 161.'] = 'Duhet të testojmë për SNSM duke përdorur portin e UDP 161.';

$GLOBALS["lang"]['Should we test for SSH using TCP port 22.'] = 'A duhet të testojmë për SSH duke përdorur portin TCP 22.';

$GLOBALS["lang"]['Should we test for WMI using TCP port 135.'] = 'Duhet të testojmë për WMI duke përdorur portin TCP 135.';

$GLOBALS["lang"]['Should we uninstall the agent (y/n).'] = 'A duhet ta çinstalojmë agjentin (y/n).';

$GLOBALS["lang"]['Should we use the system or user level proxy to submit the audit result.'] = 'Duhet të përdorim sistemin apo nivelin e përdoruesit prokuruar për të paraqitur rezultatin e kontrollit.';

$GLOBALS["lang"]['Should we use the win32_product WMI class (not recommended by Microsoft) when retrieving installed software.'] = 'Duhet të përdorim klasën win32_produktiv WMI (jo e rekomanduar nga Microsoft) kur marrim programet e instaluara.';

$GLOBALS["lang"]['Should we use this method to authenticate user credentials. Set to <code>y</code> or <code>n</code>.'] = 'Këtë metodë duhet ta përdorim për të identifikuar kredencialet e përdoruesit. Vendos <code>y</code> ose <code>n</code>.';

$GLOBALS["lang"]['Should we use this method to populate a users roles. The field <code>use_auth</code> must be set to <code>y</code> to use this. Set to <code>y</code> or <code>n</code>.'] = 'Duhet ta përdorim këtë metodë për të popullarizuar rolet e përdoruesve. Fusha <code>use_auth</code> Duhet vendosur <code>y</code> Për të përdorur këtë. Vendos <code>y</code> ose <code>n</code>.';

$GLOBALS["lang"]['Should we use this value to match external and internal devices. Our default Integration uses IP and UUID here. If either of these match between external and internal device, we consider them to be the same device.'] = 'Duhet ta përdorim këtë vlerë për të përshtatur pajisjet e jashtme dhe të brendshme. Integrimi ynë i prezgjedhur përdor IP dhe UUID këtu. Nëse secila nga këto përputhen midis pajisjeve të jashtme dhe të brendshme, ne i konsiderojmë ato të jenë të njëjta.';

$GLOBALS["lang"]['Show All'] = 'Shfaq gjithçka';

$GLOBALS["lang"]['sid'] = 'Sid';

$GLOBALS["lang"]['Sid'] = 'Sid';

$GLOBALS["lang"]['sidebar'] = 'Paneli anësor';

$GLOBALS["lang"]['Sidebar'] = 'Paneli anësor';

$GLOBALS["lang"]['Sierra Leone'] = 'Sierra - Leone';

$GLOBALS["lang"]['Singapore'] = 'Singapor';

$GLOBALS["lang"]['Site A'] = 'Site A';

$GLOBALS["lang"]['Site B'] = 'Site B';

$GLOBALS["lang"]['site_hours_a'] = 'unit-format';

$GLOBALS["lang"]['Site Hours A'] = 'unit-format';

$GLOBALS["lang"]['site_hours_b'] = 'Site Ours B';

$GLOBALS["lang"]['Site Hours B'] = 'Site Ours B';

$GLOBALS["lang"]['size'] = 'Madhësia';

$GLOBALS["lang"]['Size'] = 'Madhësia';

$GLOBALS["lang"]['slaves'] = 'Skllevër';

$GLOBALS["lang"]['Slaves'] = 'Skllevër';

$GLOBALS["lang"]['Slovak'] = 'sllovak';

$GLOBALS["lang"]['Slovakia (Slovak Republic)'] = 'Sllovakia';

$GLOBALS["lang"]['Slovenia'] = 'Sllovenia';

$GLOBALS["lang"]['Slovenian'] = 'Sllovene';

$GLOBALS["lang"]['Smart Status'] = 'Gjendja';

$GLOBALS["lang"]['smversion'] = 'Smover';

$GLOBALS["lang"]['Smversion'] = 'Smover';

$GLOBALS["lang"]['Sneaky'] = 'Tinëzare';

$GLOBALS["lang"]['snmp_enterprise_id'] = 'ID e kompanisë Snmp';

$GLOBALS["lang"]['Snmp Enterprise ID'] = 'ID e kompanisë Snmp';

$GLOBALS["lang"]['snmp_enterprise_name'] = 'Emri i ndërmarrjes Snmp';

$GLOBALS["lang"]['Snmp Enterprise Name'] = 'Emri i ndërmarrjes Snmp';

$GLOBALS["lang"]['snmp_oid'] = 'Snmp Oid';

$GLOBALS["lang"]['Snmp Oid'] = 'Snmp Oid';

$GLOBALS["lang"]['snmp_timeout'] = 'Skadenca';

$GLOBALS["lang"]['Snmp Timeout'] = 'Skadenca';

$GLOBALS["lang"]['snmp_version'] = 'Snmp Version';

$GLOBALS["lang"]['Snmp Version'] = 'Snmp Version';

$GLOBALS["lang"]['So a script is not working on a recalcitrant device. Grrr. The scripts for Windows, Linux, and MacOS all accept the debugging argument. This can be set in the script itself, or provided on the command line. Run the script using that option set to 5 and you should see in which section of the script the failure occurs. For example'] = 'Pra, skenari nuk është duke punuar në një pajisje rekalcitante. Gror. script-et për Windows, Linux dhe MacOS të gjithë pranojnë argumentin e debug. Kjo mund të vendoset në vetë script, ose jepet në rreshtin e komandës. Zbaton script duke përdorur këtë opsion vendosur në 5 dhe ju duhet të shihni në cilën pjesë të script-it ndodh dështimi. Për shembull';

$GLOBALS["lang"]['So apart from a regular word, what other options are there - I am glad you asked! As per the standard Open-AudIT API, we have several operators for filtering. Operators that can precede the value are'] = 'Prandaj, përveç një fjale të rregullt, çfarë mundësish të tjera ka: jam i kënaqur që pyete! Sa për standartin Open-AudIT API, kemi disa operatorë për filtrim. Operatorët që mund të paraprijnë vlerën janë';

$GLOBALS["lang"]['So you have an issue providing Open-AudIT credentials to discover your devices. I have an answer - dont then! Sure, I mean, discovery is the best thing since sliced bread. You do not need to know ahead of time <i>Whats On Your Network</i>. But how can you extract data from devices without providing credentials?<br><br>In the case of computers, an easy option is to copy the appropriate audit script to the target machines and set it to execute on a schedule. More details on the wiki. The machines will send their data to Open-AudIT on that schedule, almost as if you were running discovery. The device simply runs the audit script on a schedule (again, you can read the audit script) as the user you tell it to and sends the output to the server. No credentials are involved at all.<br><br>And now we have Agents for Windows. The advantages of an actual installed Agent are'] = 'Pra, ju keni një çështje që siguroni kredencialet Open-AudIT për të zbuluar pajisjet tuaja. Unë kam një përgjigje - atëherë mos! Sigurisht, dua të them, zbulimi është gjëja më e mirë që prej bukës së prerë. Nuk duhet ta dish më përpara. <i>Çfarë ke në rrjet</i>. Por si mund të nxirrni të dhëna nga pajisjet pa siguruar kredenciale?<br/><br/>Në rastin e kompjuterëve, një opsion i lehtë është të kopjohet skenari i përshtatshëm i kontrollit tek makineritë e synuara dhe ta përcaktojë atë për të ekzekutuar sipas një programi. Më shumë detaje për Uikin. Makinat do të dërgojnë të dhënat e tyre në Open-AudIT në atë orar, pothuajse sikur ju jeni duke kryer zbulimin. Paisja thjesht drejton script-in auditues në një program (përsëri, ju mund të lexoni script-in e auditimit) si përdorues t\'ia thoni dhe t\'ia dërgoni rezultatin server-it. Asnjë kredencial nuk është përfshirë fare.<br/><br/>Dhe tani kemi agjentë për Windows. Avantazhet e një agjenti të instaluar janë';

$GLOBALS["lang"]['socket'] = 'Socket';

$GLOBALS["lang"]['Socket'] = 'Socket';

$GLOBALS["lang"]['software'] = 'Software';

$GLOBALS["lang"]['Software'] = 'Software';

$GLOBALS["lang"]['Software Found Last 7 Days'] = 'Programet e gjetura 7 ditët e fundit';

$GLOBALS["lang"]['Software Found Today'] = 'Programet e gjetura sot';

$GLOBALS["lang"]['Software Found Yesterday'] = 'Programet u gjetën dje';

$GLOBALS["lang"]['software_key'] = 'Kyçi i programeve';

$GLOBALS["lang"]['Software Key'] = 'Kyçi i programeve';

$GLOBALS["lang"]['Software License Reporting'] = 'Software Liçenca Reporting';

$GLOBALS["lang"]['software_name'] = 'Emri i programeve';

$GLOBALS["lang"]['Software Name'] = 'Emri i programeve';

$GLOBALS["lang"]['Software Policies'] = 'Programet';

$GLOBALS["lang"]['software_revision'] = 'Programi Revizioni';

$GLOBALS["lang"]['Software Revision'] = 'Programi Revizioni';

$GLOBALS["lang"]['software_version'] = 'Software Versioni';

$GLOBALS["lang"]['Software Version'] = 'Software Versioni';

$GLOBALS["lang"]['Solaris'] = 'Solaris';

$GLOBALS["lang"]['Solomon Islands'] = 'Ishujt Solomon';

$GLOBALS["lang"]['Somalia, Somali Republic'] = 'Somali, Republika e Somalisë';

$GLOBALS["lang"]['Some collections can be executed - queries, etc - see below.'] = 'Disa koleksione mund të ekzekutohen, madje mund të shihen më poshtë.';

$GLOBALS["lang"]['Some examples are at the bottom of this page. All endpoints also have a minimum list of required fields. These are below.'] = 'Disa shembuj janë në fund të kësaj faqeje. Të gjitha pikat e fundit kanë gjithashtu një listë minimale të fushave të kërkuara. Këto janë poshtë.';

$GLOBALS["lang"]['Some of our templates support the new move to dataTables, using server side processing. This massivley improves load times.'] = 'Disa nga shabllonet tona mbështesin lëvizjen e re tek Tables të të dhënave, duke përdorur proçesimin anësor të server-it. Kjo masë përmirëson kohët e ngarkuara.';

$GLOBALS["lang"]['Some other error has occurred when attempting to bind to the LDAP server. It is contactable (ie, the <i>connect</i> above has worked), but for some other reason, binding has not occurred. Check the logs on the LDAP server.'] = 'U ndesh një gabim tjetër gjatë përpjekjes për t\'u lidhur me serverin LDAP. Është kontaktues (ie, the <i>lidhje</i> Më sipër ka punuar), por për ndonjë arsye tjetër, lidhja nuk ka ndodhur. Kontrollo shkrimet tek serveri LDAP.';

$GLOBALS["lang"]['Something has gone seriously wrong. Open-AudIT cannot read the <i>orgs</i> table.'] = 'Diçka ka shkuar seriozisht keq. Open-AudIT nuk mund të lexojë <i>unit-format</i> Tavolina.';

$GLOBALS["lang"]['Something has gone seriously wrong. Open-AudIT cannot read the <i>roles</i> table.'] = 'Diçka ka shkuar seriozisht keq. Open-AudIT nuk mund të lexojë <i>Roli</i> Tavolina.';

$GLOBALS["lang"]['Sometimes agentless discovery just does not fit your use-case. Maybe your PCs have tight firewalls. Maybe they are not on the network when your discoveries are scheduled. Maybe they are used by remote workers. Whatever the case, this is where an agent can help. Install it on the target machine and it will <i>check-in</i> with your Open-AudIT server on a schedule and accept tasks. The most common task the server requests is for the agent to audit itself and send the result.'] = 'Ndonjëherë zbulimi pa agjent nuk përputhet me rastin tënd të përdorimit. Ndoshta PC-të e tua kanë mure të ngushta. Ndoshta ata nuk janë në rrjet kur zbulimet tuaja janë planifikuar. Ndoshta përdoren nga punëtorët e largët. Sido që të jetë, këtu mund të ndihmojë një agjent. Instaloje në makinën e objektivit dhe do ta bëjë. <i>Kontrollo-në</i> me server në a dhe a. Detyra më e zakonshme që kërkon serveri është që agjenti të kontrollojë veten dhe të dërgojë rezultatin.';

$GLOBALS["lang"]['Sort'] = 'Renditja';

$GLOBALS["lang"]['sound'] = 'Zëri';

$GLOBALS["lang"]['Sound'] = 'Zëri';

$GLOBALS["lang"]['source'] = 'Burimi';

$GLOBALS["lang"]['Source'] = 'Burimi';

$GLOBALS["lang"]['South Africa'] = 'Afrika e Jugut';

$GLOBALS["lang"]['South Georgia and the South Sandwich Islands'] = 'Gjeorgjia e Jugut dhe Ishujt Sanduiç të Jugut';

$GLOBALS["lang"]['Spain'] = 'Spanjë';

$GLOBALS["lang"]['Spanish'] = 'Spanjisht';

$GLOBALS["lang"]['Specific to Azure.'] = 'Për Azure.';

$GLOBALS["lang"]['Specific to OKTA.'] = 'Përpikmëri për OKTA.';

$GLOBALS["lang"]['Specifies a comma-separated list of targets (no spaces) to be excluded from the scan. The list you pass in uses normal Nmap syntax, so it can include hostnames, CIDR netblocks, octet ranges, etc.'] = 'a lista nga jo. Lista që kalon përdor sintaksën normale të Nmap-it, në mënyrë që të përfshijë emrat e emrit, rrjetet CIDR, gamën e oktetit, etj.';

$GLOBALS["lang"]['speed'] = 'Shpejtësia';

$GLOBALS["lang"]['Speed'] = 'Shpejtësia';

$GLOBALS["lang"]['speed_down_a'] = 'Ulja e shpejtësisë A';

$GLOBALS["lang"]['Speed Down A'] = 'Ulja e shpejtësisë A';

$GLOBALS["lang"]['speed_down_b'] = 'Shpejtësia poshtë B';

$GLOBALS["lang"]['Speed Down B'] = 'Shpejtësia poshtë B';

$GLOBALS["lang"]['speed_up_a'] = 'A';

$GLOBALS["lang"]['Speed Up A'] = 'A';

$GLOBALS["lang"]['speed_up_b'] = 'Shpejtësia B';

$GLOBALS["lang"]['Speed Up B'] = 'Shpejtësia B';

$GLOBALS["lang"]['sql'] = 'Sql';

$GLOBALS["lang"]['Sql'] = 'Sql';

$GLOBALS["lang"]['Sri Lanka'] = 'Sri Lanka';

$GLOBALS["lang"]['ssh_ports'] = 'Ssh Ports';

$GLOBALS["lang"]['Ssh Ports'] = 'Ssh Ports';

$GLOBALS["lang"]['ssh_timeout'] = 'Skadenca';

$GLOBALS["lang"]['Ssh Timeout'] = 'Skadenca';

$GLOBALS["lang"]['Stage 1: Documentation review'] = 'Shqyrtimi i Dokumentacionit Faza 1:';

$GLOBALS["lang"]['Stage 2: Implementation and effectiveness review'] = 'Faza 2: Shqyrtimi i zbatimit dhe efektiv';

$GLOBALS["lang"]['Stand-Alone'] = 'Vetëm';

$GLOBALS["lang"]['Standard'] = 'Standart:';

$GLOBALS["lang"]['standard_id'] = 'ID standart';

$GLOBALS["lang"]['Standard ID'] = 'ID standart';

$GLOBALS["lang"]['standards'] = 'Standartet';

$GLOBALS["lang"]['Standards'] = 'Standartet';

$GLOBALS["lang"]['standards_policies'] = 'Politikat standarde';

$GLOBALS["lang"]['Standards Policies'] = 'Politikat standarde';

$GLOBALS["lang"]['standards_results'] = 'Rezultatet e standardeve';

$GLOBALS["lang"]['Standards Results'] = 'Rezultatet e standardeve';

$GLOBALS["lang"]['start_date'] = 'Fillimi';

$GLOBALS["lang"]['Start Date'] = 'Fillimi';

$GLOBALS["lang"]['start_mode'] = 'Modaliteti i nisjes';

$GLOBALS["lang"]['Start Mode'] = 'Modaliteti i nisjes';

$GLOBALS["lang"]['Start a web browser and go to'] = 'Fillo një shfletues web dhe shko tek';

$GLOBALS["lang"]['started_date'] = 'Data e fillimit';

$GLOBALS["lang"]['Started Date'] = 'Data e fillimit';

$GLOBALS["lang"]['Starting June 2018 Google has implemented a pay-as-you-go pricing model for the Google Maps Platform APIs. Previously, most users with moderate usage could use Google Maps, which are embedded into opCharts and Open-AudIT Professional/Enterprise, for free. Googles new policy is outlined here,'] = 'Duke filluar nga qershori 2018 Google ka zbatuar një model çmimi për Platformën Google Maps APIs. Më parë, shumica e përdoruesve me përdorim të moderuar mund të përdorin Google Maps, të cilat janë të futura në opCarts dhe Open-AudIT Profesional/Enterchapties, falas. Politika e re e Google është përshkruar këtu,';

$GLOBALS["lang"]['Starts With'] = 'Fillon me';

$GLOBALS["lang"]['state'] = 'Gjendja';

$GLOBALS["lang"]['State'] = 'Gjendja';

$GLOBALS["lang"]['Stats'] = 'Stats';

$GLOBALS["lang"]['status'] = 'Gjendja';

$GLOBALS["lang"]['Status'] = 'Gjendja';

$GLOBALS["lang"]['Storage'] = 'Arkivi';

$GLOBALS["lang"]['storage_count'] = 'Magazinim';

$GLOBALS["lang"]['Storage Count'] = 'Magazinim';

$GLOBALS["lang"]['Storage area network'] = 'Magazinim i rrjetit';

$GLOBALS["lang"]['Storage-Area Network'] = 'Magazinim';

$GLOBALS["lang"]['string'] = 'Stringë';

$GLOBALS["lang"]['String'] = 'Stringë';

$GLOBALS["lang"]['sub_resource_id'] = 'ID e Sub Resource';

$GLOBALS["lang"]['Sub Resource ID'] = 'ID e Sub Resource';

$GLOBALS["lang"]['sub_type'] = 'Lloji';

$GLOBALS["lang"]['Sub Type'] = 'Lloji';

$GLOBALS["lang"]['subject_key_ident'] = 'Ngushtimi i kyçit të subjektit';

$GLOBALS["lang"]['Subject Key Ident'] = 'Ngushtimi i kyçit të subjektit';

$GLOBALS["lang"]['Submit'] = 'Dërgo';

$GLOBALS["lang"]['Submit Online'] = 'Release';

$GLOBALS["lang"]['Submitted From'] = 'Nga';

$GLOBALS["lang"]['Subnet'] = 'Subnet';

$GLOBALS["lang"]['Subnet Discoveries'] = 'Zbulimet e subnet';

$GLOBALS["lang"]['Subscription ID'] = 'ID e regjistrimit';

$GLOBALS["lang"]['suburb'] = 'Suburb';

$GLOBALS["lang"]['Suburb'] = 'Suburb';

$GLOBALS["lang"]['Success'] = 'Me sukses';

$GLOBALS["lang"]['Sudan'] = 'Sudan';

$GLOBALS["lang"]['Sudo Password'] = 'Fjalëkalimi Sudo';

$GLOBALS["lang"]['Sudo Password (optional)'] = 'Fjalëkalimi Sudo (optional)';

$GLOBALS["lang"]['suite'] = 'Suite';

$GLOBALS["lang"]['Suite'] = 'Suite';

$GLOBALS["lang"]['summaries'] = 'Summer';

$GLOBALS["lang"]['Summaries'] = 'Summer';

$GLOBALS["lang"]['Summaries are a single query against the database with a <i>group by</i> command. Using this simple method we can easily create a summary for virtually any attribute.<br><br>We no longer require a separate report for each <i>type</i> of a device. We now simply have a summary that groups by <i>devices.type</i> and shows the result. You can then click on a given type from the list and see the matching devices. In this case, one Summary replaces (potentially) 78 reports (there are 78 device types).<br><br>A summary is different to a query in that a summary is designed to group items by a given attribute then provide a <i>click through</i> link to the actual devices. A query is simply a list of items with no further links. As above - this of a Summary as a combined <i>report + subreport</i>, whereas a query is simply a single Report.<br><br>Summaries have a different collection template to the other resources within Open-AudIT. This template shows the Summary as you would expect and also shows buttons with counts of other resources. This page is designed to be the HomePage of Open-AudIT.'] = 'Summerët janë një kërkesë e vetme kundër databazës me një <i>nga</i> Komanda. Duke përdorur këtë metodë të thjeshtë mund të krijojmë me lehtësi një përmbledhje për pothuajse çdo cilësi.<br/><br/>Ne nuk kërkojmë më një raport të veçantë për secilin <i>lloji</i> i një pajisje. Tani ne thjesht kemi një përmbledhje që grupe nga <i>Pajisje. lloji</i> dhe tregon rezultatin. Pastaj mund të klikoni në një lloj të dhënë nga lista dhe të shihni pajisjet që përputhen. Në këtë rast, një përmbledhje zëvendëson (potalisht) 78 raporte (ka 78 lloje pajisjesh).<br/><br/>Një përmbledhje është e ndryshme nga një kërkesë në kuptimin që një përmbledhje është projektuar për të grupuar elementët me anë të një atributi të dhënë, pastaj për të ofruar a <i>kliko</i> Lidhe me pajisjet e vërteta. Një kërkesë është thjesht një listë objektesh pa lidhje të mëtejshme. Si më sipër, kjo përmbledhje si e kombinuar <i>Raporto</i>, ndërsa një kërkesë është thjesht një raport.<br/><br/>Ato kanë një model të ndryshëm koleksioni për burimet e tjera brenda Open-AudIT. Ky model tregon përmbledhjen siç do të prisnit dhe gjithashtu shfaq butona me akuza të burimeve të tjera. Kjo faqe është projektuar të jetë HomePage of Open-AudIT.';

$GLOBALS["lang"]['Summaries are designed to group items by a particular matching column and then to provide a link to individual devices. In the previous versions of Open-AudIT, this would have been two different items - a report and subreport. We have now bundled these into what we call a Summary.'] = 'Ato janë projektuar për të grupuar artikuj nga një kolonë e veçantë që përputhet dhe pastaj për të siguruar një lidhje me pajisjet individuale. Në versionet e mëparshme të Open-AudIT, kjo do të kishte qenë dy gjëra të ndryshme - një raport dhe nënreportim. Tani i kemi futur në atë që ne e quajmë përmbledhje.';

$GLOBALS["lang"]['Summaries provide drilldown reporting capabilities. Simple, intuitive, powerful.'] = 'Ato sigurojnë aftësi raportimi. E thjeshtë, intuitive, e fuqishme.';

$GLOBALS["lang"]['Summaries take the same arguments as Queries.'] = 'Sumtarët marrin të njëjtat argumente si Queries.';

$GLOBALS["lang"]['Summary'] = 'Përmbledhja';

$GLOBALS["lang"]['Sunday'] = 'E djelë';

$GLOBALS["lang"]['supplier'] = 'Furnizues';

$GLOBALS["lang"]['Supplier'] = 'Furnizues';

$GLOBALS["lang"]['Support'] = 'Suporti';

$GLOBALS["lang"]['Supported types are <code>subnet</code>, <code>seed</code> and <code>active directory</code>.'] = 'lloji <code>subnet</code>. <code>seed</code> dhe <code>active directory</code>.';

$GLOBALS["lang"]['Supports compliance with legal and regulatory requirements'] = 'Përkrah përputhjen me kërkesat ligjore dhe rregullatore';

$GLOBALS["lang"]['Suriname'] = 'Surinami';

$GLOBALS["lang"]['Surveillance Audits:</strong> Annual audits to maintain certification'] = 'Kontrolli i mbikëqyrjes: Auditimet vjetore për të mbajtur çertifikimin';

$GLOBALS["lang"]['Svalbard & Jan Mayen Islands'] = 'Svalbardi & Jan Mayen Islands';

$GLOBALS["lang"]['Swaziland'] = 'Suazilend';

$GLOBALS["lang"]['Sweden'] = 'Suedi';

$GLOBALS["lang"]['Swedish'] = 'Suedisht';

$GLOBALS["lang"]['switch_device_id'] = 'ID e dispozitivit të shkëmbimit';

$GLOBALS["lang"]['Switch Device ID'] = 'ID e dispozitivit të shkëmbimit';

$GLOBALS["lang"]['switch_port'] = 'Kalo';

$GLOBALS["lang"]['Switch Port'] = 'Kalo';

$GLOBALS["lang"]['Switzerland, Swiss Confederation'] = 'Zvicër, Konfederatë zvicerane';

$GLOBALS["lang"]['Symptom'] = 'Simptoma';

$GLOBALS["lang"]['Syrian Arab Republic'] = 'Republika Arabe siriane';

$GLOBALS["lang"]['sysContact'] = 'Syscontact';

$GLOBALS["lang"]['SysContact'] = 'Syscontact';

$GLOBALS["lang"]['sysDescr'] = 'Sys Descr';

$GLOBALS["lang"]['SysDescr'] = 'Sys Descr';

$GLOBALS["lang"]['sysLocation'] = 'Vendodhja e Syve';

$GLOBALS["lang"]['SysLocation'] = 'Vendodhja e Syve';

$GLOBALS["lang"]['sysName'] = 'Emri i Syve';

$GLOBALS["lang"]['SysName'] = 'Emri i Syve';

$GLOBALS["lang"]['sysObjectID'] = 'SysObjed';

$GLOBALS["lang"]['SysObjectID'] = 'SysObjed';

$GLOBALS["lang"]['sysUpTime'] = 'SisUpTime';

$GLOBALS["lang"]['SysUpTime'] = 'SisUpTime';

$GLOBALS["lang"]['system_component'] = 'Sistemi';

$GLOBALS["lang"]['System Component'] = 'Sistemi';

$GLOBALS["lang"]['System-Area Network'] = 'Rrjeti';

$GLOBALS["lang"]['TX Bitrate'] = 'TX Bitrate';

$GLOBALS["lang"]['TX Freq'] = 'TX Freq';

$GLOBALS["lang"]['TX Level'] = 'TX';

$GLOBALS["lang"]['TX Power'] = 'TX fuqi';

$GLOBALS["lang"]['TX Profile'] = 'TXIMI';

$GLOBALS["lang"]['Table'] = 'Tabela';

$GLOBALS["lang"]['tag'] = 'Tag';

$GLOBALS["lang"]['Tag'] = 'Tag';

$GLOBALS["lang"]['tag_1'] = 'Tag';

$GLOBALS["lang"]['Tag 1'] = 'Tag';

$GLOBALS["lang"]['tag_2'] = 'Tag 2';

$GLOBALS["lang"]['Tag 2'] = 'Tag 2';

$GLOBALS["lang"]['tag_3'] = 'Tag 3';

$GLOBALS["lang"]['Tag 3'] = 'Tag 3';

$GLOBALS["lang"]['Tagalog'] = 'Tagalog';

$GLOBALS["lang"]['tags'] = 'Tags';

$GLOBALS["lang"]['Tags'] = 'Tags';

$GLOBALS["lang"]['Tags :: '] = 'Tags ';

$GLOBALS["lang"]['Taiwan'] = 'Tajvan';

$GLOBALS["lang"]['Tajikistan'] = 'Taxhikistan';

$GLOBALS["lang"]['Take note of all output and action each item as appropriate.'] = 'Vini re çdo dalje dhe veprim që është i përshtatshëm.';

$GLOBALS["lang"]['Tanzania'] = 'Tanzani';

$GLOBALS["lang"]['Target Computer'] = 'Objektivi';

$GLOBALS["lang"]['task'] = 'Detyra';

$GLOBALS["lang"]['Task'] = 'Detyra';

$GLOBALS["lang"]['tasks'] = 'Aktivitete';

$GLOBALS["lang"]['Tasks'] = 'Aktivitete';

$GLOBALS["lang"]['Tasks can be one of several distinct types: Baseline, Discovery, Report, Query, Summary or Collector.'] = 'Detyrat mund të jenë një nga llojet e ndryshme: Baseline, Discovery, Report, Lutje, përmbledhje apo koleksionor.';

$GLOBALS["lang"]['tcp_ports'] = 'Tcp Ports';

$GLOBALS["lang"]['Tcp Ports'] = 'Tcp Ports';

$GLOBALS["lang"]['Technical Details'] = 'Detajet teknike';

$GLOBALS["lang"]['tenant'] = 'Tenant';

$GLOBALS["lang"]['Tenant'] = 'Tenant';

$GLOBALS["lang"]['Tenant ID'] = 'ID me qira';

$GLOBALS["lang"]['Tennant ID'] = 'ID';

$GLOBALS["lang"]['ternary'] = 'Ternari';

$GLOBALS["lang"]['Ternary'] = 'Ternari';

$GLOBALS["lang"]['Test 1'] = 'Testi 1';

$GLOBALS["lang"]['Test 2'] = 'Testi 2';

$GLOBALS["lang"]['Test 3'] = 'Testi 3';

$GLOBALS["lang"]['Test Email'] = 'Test Email';

$GLOBALS["lang"]['test_minutes'] = 'Gazeta';

$GLOBALS["lang"]['Test Minutes'] = 'Gazeta';

$GLOBALS["lang"]['test_os'] = 'Test Os';

$GLOBALS["lang"]['Test Os'] = 'Test Os';

$GLOBALS["lang"]['test_subnet'] = 'Test Subnet';

$GLOBALS["lang"]['Test Subnet'] = 'Test Subnet';

$GLOBALS["lang"]['tests'] = 'Prova';

$GLOBALS["lang"]['Tests'] = 'Prova';

$GLOBALS["lang"]['Text'] = 'Teksti';

$GLOBALS["lang"]['Thai'] = 'Tailandeze';

$GLOBALS["lang"]['Thailand'] = 'Tajlandë';

$GLOBALS["lang"]['Thank you for starting your journey with the best discovery and inventory tool around.'] = 'Faleminderit që filluat udhëtimin tuaj me zbulimin më të mirë dhe mjetin e inventarit përreth.';

$GLOBALS["lang"]['Thanks to'] = 'Falë';

$GLOBALS["lang"]['Thats it! You have just edited the attributes of as many devices as you need to.'] = 'Kjo është! Ju sapo keni publikuar vetitë e sa pajisje që ju duhet.';

$GLOBALS["lang"]['The <i>Roles</i> endpoint allows you to manage the set of permissions(Create, Read, Update, Delete) that are granted to the users and are applied to each endpoint.'] = 'The <i>Roli</i> Pika e fundit ju mundëson të menaxhoni grupin e të drejtave të krijuara, lexoni, rifreskoni, Eleminoni) që u janë dhënë përdoruesve dhe janë aplikuar në secilin nga pikat e fundit.';

$GLOBALS["lang"]['The API uses a cookie. You can request a cookie by sending a POST to the URL below, containing the username and password attributes and values:'] = 'API përdor një biskotë. Mund të kërkoni një cookie duke dërguar një POST tek URL e mëposhtme, që përmban cilësitë dhe vlerat emrin e përdoruesit dhe fjalëkalimit:';

$GLOBALS["lang"]['The Active Directory domain to retrieve a list of subnets from.'] = 'Domain e Directory Aktive për të marrë një listë me subnets nga.';

$GLOBALS["lang"]['The Active Directory server to retrieve a list of subnets from.'] = 'Serveri aktiv Directory nga ku duhet tërhequr një listë me subnets.';

$GLOBALS["lang"]['The Applications endpoint allows you to define an application which you can then associate to a device (or devices).'] = 'Aplikimet nga a.';

$GLOBALS["lang"]['The Attributes endpoint allows you to add customized values to different attributes in Open-AudIT, at the moment this feature works on the Class, Environment, Status and Type attributes on Devices, the Type attribute for both Locations and Orgs as well as the Menu Category for Queries. If you view an item of one of the prvious types (say view a Lkocation) you will notice the Type attribute must be selected from a drop-down box. This is where those values are stored. Hence, if you would like to add a new Type to be chosen for a Location, add it using the Attributes feature.'] = 'Pika e fundit e Veçorive ju lejon t\'i shtoni vlerat e personalizuara tek atributet e ndryshme në Open-AudIT, në momentin që kjo veçori funksionon në klasën, mjedisin, statusin dhe cilësitë e llojeve në pajisje, atributin e llojit për të dy vendet dhe Orgs si dhe në kategorinë e Menusë për Keries. Nëse shikoni një element të njërës prej llojeve parrame (thani shfaq një Lkoction) do të vëreni se atributi i llojit duhet zgjedhur nga një kuti e hedhur poshtë. Këtu ruhen këto vlera. Prandaj, nëse dëshironi të shtoni një lloj të ri për t\'u zgjedhur për një vend, shtojeni duke përdorur veçoritë.';

$GLOBALS["lang"]['The Automatable metric captures the answer to the question <strong>Can an attacker automate exploitation events for this vulnerability across multiple targets?</strong> based on steps 1-4 of the kill chain. These steps are reconnaissance, weaponization, delivery, and exploitation (Not Defined, No, Yes).'] = 'Metriku automatifik kap përgjigjen e pyetjes <strong>A mundet një sulmues i njohurive automatike për këtë dobësi në mes të objektivave të shumëfishta?</strong> Bazuar në hapat 1-4 të zinxhirit të vrasjeve. Këto hapa janë zbulimi i armëve, dorëzimi dhe shfrytëzimi (jo, Po).';

$GLOBALS["lang"]['The CVE has been marked as invalid or withdrawn in the CVE List. It remains in the NVD but is excluded from default search results.'] = 'CVE është shënuar si i pavlefshëm ose i tërhequr në Listën CVE. Mbetet në NVD por është përjashtuar nga rezultatet e prezgjedhura të kërkimit.';

$GLOBALS["lang"]['The CVE has been published to the CVE List and included in the NVD dataset. Initial ingestion only.'] = 'CVE është botuar në Listën CVE dhe është përfshirë në të dhënat NVD. Vetëm gëlltitje fillestare.';

$GLOBALS["lang"]['The CVE has been updated after initial analysis. NVD enrichment data may have been revised.'] = 'CVE është përditësuar pas analizës fillestare. Të dhënat për pasurimin e NVD - së mund të jenë rishikuar.';

$GLOBALS["lang"]['The CVE identifier.'] = 'CVE identifikuar.';

$GLOBALS["lang"]['The CVE is actively being enriched with CVSS scores, CWE classifications, reference tags, and CPE applicability.'] = 'CVE po pasurohet aktivisht me rezultatet e CVSS, klasifikimet CWE, etiketat e referimit dhe aplikueshmëria CE.';

$GLOBALS["lang"]['The CVE is not currently prioritized for enrichment due to resource constraints or other reasons.'] = 'CVE nuk është aktualisht përparësi për pasurimin për shkak të kufizimeve të burimeve apo arsye të tjera.';

$GLOBALS["lang"]['The CVE is queued for enrichment by NVD analysts. No detailed metadata yet.'] = 'CVE është në rradhë për pasurim nga analistët NVD. Nuk ka akoma metadata të hollësishme.';

$GLOBALS["lang"]['The Cloud that owns this item. Links to <code>clouds.id</code>.'] = 'Reja që zotëron këtë send. Lidhje me <code>clouds.id</code>.';

$GLOBALS["lang"]['The Device Seed Discovery type is the newest highly-effective method for network crawling, giving you the ability to target your network as narrowly or as broadly as you need. It is fast, it works and it is great.'] = 'Lloji i zbulimit të Farës së Pajisjeve është metoda më e re me efekt të lartë për zvarritjen e rrjetit, duke ju dhënë aftësinë për të synuar rrjetin tuaj aq ngushtë ose sa ju duhet. Ajo është e shpejtë, ajo punon dhe është e madhe.';

$GLOBALS["lang"]['The Discovery Scan Options we ship are detailed in the table below. As above, Enterprise users can create more of these or edit the shipped items.'] = 'Skanimi i zbulimit Mundësi që ne anije janë të hollësishme në tryezën më poshtë. Si më sipër, përdoruesit e ndërmarrjeve mund të krijojnë më shumë nga këto ose të ndryshojnë elementët e dërguar.';

$GLOBALS["lang"]['The Elevated User query'] = 'Kërkimi i përditësuar i përdoruesit';

$GLOBALS["lang"]['The Executables feature scans the disk of a device as part of the audit and checks that every executable file is known to the package manager. Because it uses the package manager, the feature applies to Linux target devices only, and further than that, only rpm or deb based distributions. Anything Redhat or Debian based should work.'] = 'Veçoria e të ekzekutueshmeve skanon diskun e një pajisjeje si pjesë e kontrollit dhe kontrollon se çdo e ekzekutueshme do të njihet nga administratori i paketave. Për shkak se ajo përdor menaxherin e paketës, tipari zbatohet vetëm për pajisjet e synuara Linux, dhe më tej, vetëm prm ose deb. Çdo gjë që Redhati apo Debiani duhet të punojnë.';

$GLOBALS["lang"]['The FROM'] = 'NGA';

$GLOBALS["lang"]['The Group used to run the Baseline. Links to <code>groups.id</code>.'] = 'Grupi drejtonte bazën. Lidhje me <code>groups.id</code>.';

$GLOBALS["lang"]['The ID from the devices table (the devices.name will be displayed) of the NTU at this end of the connection. Links to <code>devices.id</code>.'] = 'ID nga NTU në fund të lidhjes. Lidhje me <code>devices.id</code>.';

$GLOBALS["lang"]['The ID from the imported benchmark policy.'] = 'ID nga politika standarte e importuar.';

$GLOBALS["lang"]['The ID from the locations table (the locations.name will be displayed) of this end of the connection. Links to <code>locations.id</code>. The A location is usually the <code>FROM</code> location.'] = 'ID nga pozicioni fund nga. Lidhje me <code>locations.id</code>. A Vendndodhja zakonisht është <code>FROM</code> Vendi.';

$GLOBALS["lang"]['The ID from the locations table (the locations.name will be displayed) of this end of the connection. Links to <code>locations.id</code>. The B location is usually the <code>TO</code> location.'] = 'ID nga pozicioni fund nga. Lidhje me <code>locations.id</code>. Pozicioni B është zakonisht <code>TO</code> Vendi.';

$GLOBALS["lang"]['The ID of the associated device (if any). Links to <code>devices.id</code>.'] = 'ID e dispozitivit shoqërues (nëse ka). Lidhje me <code>devices.id</code>.';

$GLOBALS["lang"]['The ID of the associated discovery. Linked to <code>discoveries.id</code>'] = 'Identifikimi i zbulimit shoqërues. Lidhur me <code>discoveries.id</code>';

$GLOBALS["lang"]['The ID of the item of the associated type.'] = 'ID e elementit të llojit shoqërues.';

$GLOBALS["lang"]['The ID of this orgs parent org. Linked to <code>orgs.id</code>'] = 'ID-ja e këtij orgji prind. Lidhur me <code>orgs.id</code>';

$GLOBALS["lang"]['The ID provided by the provider.'] = 'ID e dhënë nga siguruesi.';

$GLOBALS["lang"]['The ID retrieved from a Cloud discovery.'] = 'ID-ja doli nga një zbulim resh.';

$GLOBALS["lang"]['The IP address of this collector used to communicate with the server.'] = 'Adresa IP e këtij koleksionuesi përdoret për të komunikuar me serverin.';

$GLOBALS["lang"]['The IP of the device to start a seed discovery with.'] = 'IP e pajisjes për të filluar një zbulim farash.';

$GLOBALS["lang"]['The IP of the external interface.'] = 'IP e interfaqes së jashtme.';

$GLOBALS["lang"]['The IP of the internal interface.'] = 'IP e interfaqes së brendshme.';

$GLOBALS["lang"]['The ISO/IEC 27001 certification process and its key elements.'] = 'Procesi i çertifikimit ISO/IEC 27001 dhe elementët e tij kryesorë.';

$GLOBALS["lang"]['The ISP or Telco providing this link.'] = 'ISP ose Telco e sigurojnë këtë lidhje.';

$GLOBALS["lang"]['The JSON record from Mitre.'] = 'Rekordi JSON nga Mitre.';

$GLOBALS["lang"]['The JSON record from the NVD feed.'] = 'Rekordi JSON nga NVD.';

$GLOBALS["lang"]['The LDAP OU of this user (if LDAP is used).'] = 'LDAP OU i këtij përdoruesi (nëse LDAP përdoret).';

$GLOBALS["lang"]['The LDAP server could not be connected to. At all. Check it is pingable from the Open-AudIT server. Check the correct port is open to the Open-AudIT server. An nmap from the Open-AudIT server will show this. Substitute your LDAP servers IP for $ip. Try:<code>nmap -vv $ip</code>'] = 'Serveri LDAP nuk mund të lidhet. Aspak. Kontrolli është nga. Kontrollo portën korrekte është hapur tek serveri Open-AudIT. Një Nep nga serveri Open-AudIT do ta tregojë këtë. Nënvizoni serverat tuaj LDAP IP për të shtypur. Provo:<code>nmap -vv $ip</code>';

$GLOBALS["lang"]['The LDAP server type is invalid. It should be either <i>active directory</i> or <i>openldap</i>.'] = 'Lloji i serverit LDAP është i pavlefshëm. Duhet të jetë ose <i>Directory aktive</i> ose <i>Openldap</i>.';

$GLOBALS["lang"]['The LDAP server was connected to and the user credentials accepted for bind.'] = 'Serveri LDAP është lidhur dhe kredencialet e përdoruesit janë pranuar për t\'u lidhur.';

$GLOBALS["lang"]['The Linux Open-AudIT installer will test for and if required, install Open-AudITs dependencies from your distributions repository, including setting the Nmap SetUID. This is required for SNMP (UDP 161) detection by a non-root user. This is supported on RedHat/CentOS and Debian/Ubuntu. If you need to manually install Nmap:<br><br>For RedHat/CentOS do (NOTE - if you upgrade using yum, you will need to reapply this <i>chmod</i> setting).'] = 'Instaluesi i Linux Open-AudIT do të testojë dhe nëse kërkohet, instaloni vartësitë e Open-Audities nga depozitimi juaj i shpërndarjes, duke përfshirë caktimin e Nmap SetUID. Kjo kërkohet për zbulimin e SNMP (UDP 161) nga një përdorues jo-root. Kjo mbështetet në Red Hat/CentOS dhe Debian/Ubuntu. Nëse ju duhet të instaloni manualisht Nmap:<br/><br/>Për RedHat/CentOS do (NOTE - në qoftë se ju përmisoheni duke përdorur yum, ju do të duhet për të korrur këtë <i>chmod</i> Vendosja.';

$GLOBALS["lang"]['The Location that contains this network. Links to <code>locations.id</code>.'] = 'Vendi që përmban këtë rrjet. Lidhje me <code>locations.id</code>.';

$GLOBALS["lang"]['The NVD assigned base status.'] = 'NVD ka caktuar statusin bazë.';

$GLOBALS["lang"]['The National Institute of Standards and Technology is the federal technology agency. They advance official technology, measurement science and standards.'] = 'Instituti Kombëtar i Standardeve dhe Teknologjisë është agjensia federale e teknologjisë. Ata përparojnë teknologjinë zyrtare, matin shkencën dhe standardet.';

$GLOBALS["lang"]['The Network to Discover'] = 'Rrjeti për të zbuluar';

$GLOBALS["lang"]['The Nmap timing preset.'] = 'Ora e Nmap.';

$GLOBALS["lang"]['The OS this package should be reported against. Blank for all. Use the percent sign % as a wildcard. Will be tested against os_group, os_family and os_name in that order.'] = 'OS kjo pako duhet raportuar kundra. Është bosh për të gjithë. Përdor shenjën përqindjes % si një kartë e egër. do të testohet kundër os_group, os_familje dhe os_name me këtë renditje.';

$GLOBALS["lang"]['The Open-AudIT API'] = 'Open-AudIT API';

$GLOBALS["lang"]['The Open-AudIT id of the linked cloud. Links to <code>clouds.id</code>.'] = 'ID Open-AudIT e resë lidhur. Lidhje me <code>clouds.id</code>.';

$GLOBALS["lang"]['The Open-AudIT server code was exeucted within this file.'] = 'Open-Aud Kodi i serverit IT është përjashtuar në brendësi të këtij file.';

$GLOBALS["lang"]['The Open-AudIT server code was exeucted within this function.'] = 'Open-Aud Kodi i serverit IT është përjashtuar nga ky funksion.';

$GLOBALS["lang"]['The OpenSCAP ecosystem provides multiple tools to assist administrators and auditors with assessment, measurement, and enforcement of security baselines including a wide variety of hardening guides and configuration baselines developed by the open source community, ensuring that you can choose a security policy which best suits the needs of your organization, regardless of its size.'] = 'ekosistemi OpenSCAP siguron mjete të shumta për të ndihmuar administratorët dhe auditorët me vlerësimin, matjen dhe zbatimin e bazave të sigurisë, duke përfshirë një shumëllojshmëri të gjerë të udhëzuesve të ngurtësimit dhe bazave të konfigurimit të zhvilluara nga komuniteti i burimeve të hapura, duke siguruar që ju mund të zgjidhni një politikë sigurie e cila u përshtatet më së miri nevojave të organizatës suaj, pavarësisht nga madhësia e saj.';

$GLOBALS["lang"]['The OpenSCAP project is a collection of open source tools for implementing and enforcing this standard, and has been awarded the SCAP 1.2 certification by NIST in 2014.'] = 'Projekti OpenSCAP është një përmbledhje e mjeteve të hapura burimore për zbatimin dhe zbatimin e kësaj standarti dhe ju dha çertifikata SCAP 1.2 nga NIST më 2014.';

$GLOBALS["lang"]['The Organisation that owns this item. Links to <code>orgs.id</code>.'] = 'Organizata që zotëron këtë send. Lidhje me <code>orgs.id</code>.';

$GLOBALS["lang"]['The Process Identifier of the running associated discovery.'] = 'Identifikuesi i Procesit të zbulimit të lidhur me të.';

$GLOBALS["lang"]['The RU positon of the top of this device.'] = 'Positoni i sipërm i kësaj pajisjeje.';

$GLOBALS["lang"]['The Racks feature is used to manage and visualize your rack use with an Organisation, Location, Building, Floor, Room and Row.'] = 'Karakteri Racks përdoret për të menaxhuar dhe për të parë përdorimin e raftit tuaj me një Organizatë, Vende, ndërtesë, dysheme, dhomë dhe rresht.';

$GLOBALS["lang"]['The SCAP is a specification for expressing and manipulating security data in standardized ways. SCAP uses several individual specifications in concert to automate continuous monitoring, vulnerability management, and security policy compliance evaluation reporting'] = 'SCAP është një specifikim për shprehjen dhe manipulimin e të dhënave të sigurisë në mënyra të standardizuara. SCAP përdor disa specifikime individuale në bashkëpunim për mbikqyrjen e vazhdueshme automatike, menazhimin e cënueshmërisë dhe raportimin e vlerësimit të zbatimit të politikës së sigurisë';

$GLOBALS["lang"]['The SELECT'] = 'SELECT';

$GLOBALS["lang"]['The SELECT section of the query should use full dot notation and also request the field with its full dot name. IE - SELECT devices.id AS `devices.id`. Each field should be selected in this fashion to enable GUI side attribute filtering.'] = 'Pjesa SELECT e kërkesës duhet të përdorë pikët e plota dhe gjithashtu të kërkojë në fushë me emrin e saj të plotë. Pajisjet IE - SELECT. ld AS deviçes.id⇩. Çdo fushë duhet zgjedhur në këtë mënyrë për të mundësuar filtrimin e pjesës anësore të GUI.';

$GLOBALS["lang"]['The SELECT section of your SQL must contain fully qualified columns and specify certain columns.'] = 'Seksioni SELECT i SQL-së tuaj duhet të përmbajë kolona plotësisht të kualifikuara dhe të specifikojë disa kollona.';

$GLOBALS["lang"]['The SNMP community string.'] = 'Lidhja e komunitetit SNSMP.';

$GLOBALS["lang"]['The SNMP v3 Authentication Passphrase.'] = 'Pasfrazimi i Authenticitetit SNMP v3.';

$GLOBALS["lang"]['The SNMP v3 Authentication Protocol.'] = 'Protokolli i Identifikimit SNMP kundër 3-shit.';

$GLOBALS["lang"]['The SNMP v3 Privacy Passphrase.'] = 'SNSM kundër 3 Privacy Passphach.';

$GLOBALS["lang"]['The SNMP v3 Privacy Protocol.'] = 'Protokolli i Privacyit SNMP kundër 3.';

$GLOBALS["lang"]['The SNMP v3 Security Level.'] = 'Niveli i Sigurimit SNMP v3.';

$GLOBALS["lang"]['The SNMP v3 Security Name.'] = 'Emri i sigurisë SNMP v3.';

$GLOBALS["lang"]['The SNMPv3 context Engine ID (optional).'] = 'ID e motorit të kontekstit SNMP3 (optional).';

$GLOBALS["lang"]['The SNMPv3 context Name (optional).'] = 'Emri kontekstor SNMPv3 (optional).';

$GLOBALS["lang"]['The SQL cannot contain <strong>WHERE @filter OR</strong>. That SQL will not be executed, however <strong>WHERE @filter AND</strong> queries are allowed.'] = 'SQL nuk mund të përmbajë <strong>KU j</strong>. Se SQL nuk do të ekzekutohet, megjithatë <strong>KU KA @Filter DHE</strong> Janë të lejuara pyetje.';

$GLOBALS["lang"]['The SQL queries used in Open-AudIT require the use of the backtick - ` character and NOT the standard single quote for fields. On most US Windows keyboards the backtick key is located in the top-left of the keyboard along with the tilde ~. On a US Mac keyboard the backtick key is located next to the SHIFT key. The standard single quote is still used to enclose values as the examples below illustrate.'] = 'Kërkesat e SQL të përdorura në Open-AudIT kërkojnë përdorimin e personazhit backtik - ⇩ dhe JO citimi standard i vetëm për fushat. Në shumicën e tastjerave të US Windows çelësi i pastikut është vendosur në krye të majtë të tastierës së bashku me tilde ~. Në një tastierë të Mekut të SH.B.A.-së çelësi i shpinës gjendet pranë çelësit të grykut. Citati standard i vetëm përdoret ende për të mbyllur vlerat, siç ilustrojnë shembujt e mëposhtëm.';

$GLOBALS["lang"]['The SQL query is essentially broken into three parts.'] = 'Kërkesa e SQL-së në thelb është thyer në tre pjesë.';

$GLOBALS["lang"]['The Standards functionality in Open-AudIT allows you to, ahead of time, complete the questions auditors require when completing ISO 27001 certification.'] = 'Funksionaliteti i Standardeve në Open-AudIT ju lejon që, para kohe, të kompletoni pyetjet që kërkojnë kontrollorët kur kompletohen çertifikimi i ISO 27001.';

$GLOBALS["lang"]['The URL of the external system.'] = 'URL e sistemit të jashtëm.';

$GLOBALS["lang"]['The URL of your Open-AudIT Server that this Collector will report to (no trailing slash).'] = 'URL e Open-AudIT tuaj Serveri që ky koleksionor do të raportojë tek (nuk ka slash shtegu).';

$GLOBALS["lang"]['The URL the audit scripts should submit their result to.'] = 'URL e skenarëve auditues duhet të paraqesë rezultatin e tyre.';

$GLOBALS["lang"]['The User endpoint allows you to manage user accounts within Open-AudIT.'] = 'Pika e fundit e përdoruesit ju mundëson të menaxhoni llogaritë e përdoruesit brenda Open-AudIT.';

$GLOBALS["lang"]['The WHERE'] = 'KUDO';

$GLOBALS["lang"]['The WHERE section of your SQL <em>must</em> contain'] = 'Pjesa KUDO e SQL tuaj <em>duhet</em> përmban';

$GLOBALS["lang"]['The Windows'] = 'Dritaret';

$GLOBALS["lang"]['The Windows log may say the following'] = 'Dritaret mund të thonë:';

$GLOBALS["lang"]['The account must have a password; WMI does not allow blank passwords.'] = 'Profili duhet të ketë një fjalëkalim; WMI nuk lejon fjalëkalimet bosh.';

$GLOBALS["lang"]['The account password must NOT contain \" (double quotes). This is because cscript (and wscript) cannot parse argument values containing double quotes. They are simply stripped. No (before you ask) escaping will not work. This is a cscript limitation and nothing to do with Open-AudIT.'] = 'Fjalëkalimi i profilit nuk duhet të përmbajë \" (citacione të dyfishta). Kjo është për shkak se cript (dhe wcript) nuk mund të analizojnë vlerat argumentuese që përmbajnë dy citime. Janë thjesht të zhveshur. Jo, nuk është ashtu! Ky është një kufizim rekrutimi dhe asgjë për të bërë me Open-AudIT.';

$GLOBALS["lang"]['The actual full name of this user.'] = 'Emri i plotë i këtij përdoruesi.';

$GLOBALS["lang"]['The address of the Open-AudIT server submit page.'] = 'Adresa e faqes së serverit Open-AudIT.';

$GLOBALS["lang"]['The administrator supplied credentials that were successfully used to bind to LDAP.'] = 'Administratori dha kredenciale që u përdorën me sukses për t\'u lidhur me LDAP.';

$GLOBALS["lang"]['The administrator supplied credentials to bind to the LDAP server, but they have not been accepted by the LDAP sevrer. Double check the credentials work on the LDAP server, and then check (or reset them) in the Open-AudIT LDAP Server entry.'] = 'Administratori ka dhënë kredenciale për t\'u lidhur me serverin LDAP, por ato nuk janë pranuar nga serveri LDAP. Kontrollo dy herë punën e kredencialeve tek serveri LDAP, dhe kontrollo (ose rivendosi ato) në hyrjen në server Open-AudIT LDAP.';

$GLOBALS["lang"]['The agent and server are also intelligent enough to self-update the agent if a newer version is installed on the server (say after upgrading Open-AudIT).'] = 'Agjenti dhe serveri janë gjithashtu inteligjentë të mjaftueshëm për të vetë-përditësuar agjentin nëse një version i ri është instaluar në server (të themi pas përmirësimit të Open-AudIT).';

$GLOBALS["lang"]['The agent should download a fresh copy of the audit script, run it and submit the result to the server.'] = 'Agjenti duhet të shkarkojë një kopje të re të script-it të kontrollit, ta ekzekutojë dhe t\'ia dërgojë rezultatin serverit.';

$GLOBALS["lang"]['The application creates temporary audit scrtips here, copies them to the target machines, then deletes them.'] = 'Aplikimi krijon auditime të përkohshme këtu, i kopjon ato në makinat e synuara, pastaj i fshin ato.';

$GLOBALS["lang"]['The associated baseline. Links to <code>baselines.id</code>.'] = 'Baza e shoqëruar. Lidhje me <code>baselines.id</code>.';

$GLOBALS["lang"]['The associated discovery (if required). Links to <code>discoveries.id</code>.'] = 'Zbulimi i shoqëruar (nëse kërkohet). Lidhje me <code>discoveries.id</code>.';

$GLOBALS["lang"]['The attribute to test (from the <code>devices</code> table).'] = 'nga <code>devices</code> Tavolina.';

$GLOBALS["lang"]['The attribute to test (must match an external field name from below).'] = 'karakteristika për a emri.';

$GLOBALS["lang"]['The attributes for discovery scan options are as below.'] = 'Cilësitë për zbulimin e opsioneve të skanimit janë po aq poshtë.';

$GLOBALS["lang"]['The audit script upon which to base your customisations.'] = 'Skenari i kontrollit mbi të cilin të bazojë zakonet tuaja.';

$GLOBALS["lang"]['The audit script will use the files[ ] array and retrieve the file details.'] = 'Shkrimi i kontrollit do të përdorë listën e skedarëve [] dhe do të marrë detajet e skedarëve.';

$GLOBALS["lang"]['The audit scripts all accept a debugging argument. You can run the script utilizing that and see in more detail what the issue is. And if you cannot figure it out - that is what we are here for! Open a support case and we will get things running in no time.'] = 'File i kontrollit pranon të gjithë një argument debug. Mund ta përdorësh skenarin dhe të shohësh më me hollësi se cili është problemi. Dhe nëse nuk e kupton, për këtë jemi këtu! Hap një rast mbështetjeje dhe do t\'i bëjmë gjërat të ecin menjëherë.';

$GLOBALS["lang"]['The base path from which to search for Users.'] = 'Rruga bazë nga e cila duhet kërkuar përdoruesit.';

$GLOBALS["lang"]['The below steps are not the fault of or unique to Open-AudIT and would affect <strong>any</strong> discovery application using remote WMI and/or Windows.'] = 'Hapat e mëposhtëm nuk janë fajtorë apo unikë të Open-AudIT dhe do të ndikojnë <strong>Asnjë</strong> Program zbulimi duke përdorur WMI dhe/ose Windows të largët.';

$GLOBALS["lang"]['The benchmark type.'] = 'Lloji standart.';

$GLOBALS["lang"]['The building the rack is located in.'] = 'Ndërtesa është vendosur.';

$GLOBALS["lang"]['The calculated number of devices to be created externally.'] = 'Numri i llogaritur i pajisjeve që do të krijohen nga jashtë.';

$GLOBALS["lang"]['The calculated number of devices to be created in Open-AudIT.'] = 'Numri i llogaritur i pajisjeve që do të krijohet në Open-AudIT.';

$GLOBALS["lang"]['The client ID is the ID of an Azure Active Directory application. The client secret is the key that you give that application.'] = 'ID e klientit është ID e një aplikativi Azure Aktiv Directory. Sekreti i klientit është çelësi që i jepni atij aplikimi.';

$GLOBALS["lang"]['The collector is essentially a full install of Open-AudIT in <i>collector</i> mode. The collector is designed to run discovery upon the network it is situated in. It is not restricted to only that network, but ideally it would essentially be one collector per subnet where required. The collector is driven on a schedule by the server and runs discovery upon the network as specified.<br>When in Stand Alone mode the Collector acts as an independant server, simply forwarding all devices found to the main server.<br><br>Once installed and setup, control of the Collector is performed on the Server (not in Stand Alone mode).<br><br>The only required network ports between the collector and server are 80 or 443 (TCP connection established from the Collector to the Server). The Open-AudIT database is not (and cannot be) shared between these installs.<br><br>By default the collector (not in Stand Alone mode) will request from the server any discovery tasks every 5 minutes (you can configure this on the server for new Collectors using the configuration item collector_check_minutes) therefor any discovery tasks for the collector should be scheduled for 0, 5, 10, 15, etc minutes.'] = 'Koleksionuesi është në thelb një instalim i plotë i Open-AudIT në <i>Koleksionues</i> Në rregull. Koleksionuesi është projektuar për të zbuluar në rrjetin ku ndodhet. Ajo nuk kufizohet vetëm në atë rrjet, por në mënyrë ideale do të ishte një koleksionues për nënnet ku kërkohej. Koleksionuesi drejtohet në një program nga serveri dhe bën zbulimin në rrjet siç është përcaktuar.<br/>Kur je në këmbë Modaliteti i vetëm që koleksionori vepron si një server i pavarur, thjesht dërgimi i të gjitha pajisjeve të gjetura në serverin kryesor.<br/><br/>Sapo instaluar dhe vendosur, kontrolli i koleksionuesit kryhet në server (jo në modalitetin i vetëm).<br/><br/>I vetmi rrjet i kërkuar portet midis koleksionuesit dhe serverit janë 80 apo 443 (lidhje TCP e krijuar nga koleksioni me Server-in). Databaza Open-AudIT nuk është (dhe nuk mund të ndahet) midis këtyre instalimit.<br/><br/>Duke paracaktuar koleksionuesin (jo në modalitetin e vetëm) do të kërkojë nga serveri çdo aktivitet zbulimi çdo 5 minuta (mund ta konfiguroni këtë në server për koleksionuesit e rinj duke përdorur elementët e konfigurimit (kontrover_min_minutes) për këtë arsye çdo aktivitet zbulimi për koleksionuesin duhet të programohet për 0, 5, 10, 15 minuta.';

$GLOBALS["lang"]['The collector is essentially a full install of Open-AudIT in <i>collector</i> mode. This mode would reduce visible functionality in an effort to simplify and focus the application. It is designed to collect information about local networks and devices, where firewall and/or network traversal is an issue from the server.'] = 'Koleksionuesi është në thelb një instalim i plotë i Open-AudIT në <i>Koleksionues</i> Në rregull. Kjo mënyrë do të reduktonte funksionimin e dukshëm në një përpjekje për të thjeshtuar dhe për të përqendruar aplikimin. Eshtë projektuar për të mbledhur informacione rreth rrjeteve dhe pajisjeve lokale, ku muri mbrojtës dhe/ose rrjeti është një problem nga serveri.';

$GLOBALS["lang"]['The collectors internal IP used when it runs a discovery.'] = 'Koleksionuesit e brendshëm të IP e përdornin kur bënte një zbulim.';

$GLOBALS["lang"]['The column name from the foreign table. Should be one of: class, environment, status, type or menu_category.'] = 'Emri i kollonës nga tavolina e huaj. Duhet të jetë një nga: klasa, mjedisi, statusi, lloji apo menu_kategori.';

$GLOBALS["lang"]['The command executed upon the target device or Open-AudIT server code executed during discovery.'] = 'Komanda e ekzekutuar me anë të dispozitivit të synuar ose kodit të serverit Open-AudIT të ekzekutuar gjatë zbulimit.';

$GLOBALS["lang"]['The configuration of your cluster can be: <code>active/active</code>, <code>active/passive</code>, <code>N+1</code>, <code>N+M</code>, <code>N-to-1</code>, <code>N-to-N</code>, <code>other</code> or blank.'] = 'Konfigurimi i grupit tuaj mund të jetë: <code>active/active</code>. <code>active/passive</code>. <code>N+1</code>. <code>N+M</code>. <code>N-to-1</code>. <code>N-to-N</code>. <code>other</code> ose bosh.';

$GLOBALS["lang"]['The credentials password. If the credentials are an SSH Key, this is the password used to unlock the key and is optional.'] = 'Fjalëkalimi kredencial. Nëse kredencialet janë një kyç SSH, ky është fjalëkalimi i përdorur për të zbllokuar kyçin dhe është opsional.';

$GLOBALS["lang"]['The credentials supplied by the user have failed.'] = 'Kredencialet e dhëna nga përdoruesi kanë dështuar.';

$GLOBALS["lang"]['The credentials username.'] = 'Përdoruesi kredencial.';

$GLOBALS["lang"]['The current date and time in the format: Y-m-d H:i:s.'] = 'Data dhe ora aktuale në formatin: Y-m-d H:i:';

$GLOBALS["lang"]['The current date in Y-m-d format.'] = 'Data aktuale në formatin Y-m-d.';

$GLOBALS["lang"]['The current status of the Cloud Discovery.'] = 'Gjendja aktuale e Zbulimit të Resë.';

$GLOBALS["lang"]['The current status of the discovery.'] = 'Gjendja aktuale e zbulimit.';

$GLOBALS["lang"]['The dashboard that will be shown by default for this user. Links to <code>dashboards.id</code>.'] = 'Tabela që do të shfaqet si e prezgjedhur për këtë përdorues. Lidhje me <code>dashboards.id</code>.';

$GLOBALS["lang"]['The data stored in the database is not showing in the application translated. We leave the data as it is. However, there is nothing to stop you, the user, changing the name (for example) of an item in the database to your language.'] = 'Të dhënat e ruajtura në databazë nuk tregojnë në programin e përkthyer. Ne i lëmë të dhënat ashtu siç është. Megjithatë, nuk ka asgjë për t\'ju ndaluar ju, përdoruesi, duke ndryshuar emrin (për shembull) e një elementi në bazën e të dhënave në gjuhën tuaj.';

$GLOBALS["lang"]['The data you input will be used in a <code>LIKE</code> clause, not (as per the API) an <code>equals</code> clause. Another example - if you input <code>comput</code>, it would still return all computers. And because we are using a <code>LIKE</code> clause, it is case-insensitive.'] = 'Të dhënat që jepni do të përdoren në një <code>LIKE</code> nuk <code>equals</code> Klauzola. Një shembull tjetër, nëse e fut <code>comput</code>, ajo do t\'i kthente të gjithë kompjuterat. Dhe sepse ne jemi duke përdorur një <code>LIKE</code> Kjo është e ndjeshme.';

$GLOBALS["lang"]['The database schema can be found in the application if the user has database::read permission by going to menu: Admin -> Database ->'] = 'Skema e të dhënave mund të gjendet në programin nëse përdoruesi ka të dhëna bazë: lexo të drejtat nga menuja: Admin -> Databaza ->';

$GLOBALS["lang"]['The database version and web version are inconsistent.'] = 'Versioni i bazës së të dhënave dhe versioni web janë të papajtueshëm.';

$GLOBALS["lang"]['The date of license expiration.'] = 'Data e skadimit të liçensës.';

$GLOBALS["lang"]['The date the software is discontinued by the manufacturer. Usually replaced by a newer version. Maintenance may still be available.'] = 'Data kur programi është ndërprerë nga prodhuesi. Zakonisht zëvendësohet nga një version më i ri. Mund të jetë ende në dispozicion mirëmbajtja.';

$GLOBALS["lang"]['The date the software no longer receives updates and is effectively discontinued altogether. Maintenance is discontinued.'] = 'Data që softueri nuk merr më përditësim dhe efektivisht është ndërprerë krejtësisht. Mirëmbajtja është ndërprerë.';

$GLOBALS["lang"]['The date this item was changed or added (read only). NOTE - This is the timestamp from the server.'] = 'Data kur ky element është ndryshuar ose shtuar (vetëm lexim). NOE - Kjo është e timetamp nga serveri.';

$GLOBALS["lang"]['The date/time when this result was created.'] = 'Data dhe ora kur u krijua ky rezultat.';

$GLOBALS["lang"]['The day of the month when this task should execute (* for every day).'] = '(Ju përgjigjet): "Deri në Ditën e muajit!"';

$GLOBALS["lang"]['The day of the week when this task should execute (* for every day).'] = 'Dita e javës kur kjo detyrë duhet ekzekutuar (për çdo ditë).';

$GLOBALS["lang"]['The debug level (will output to command prompt window). Lower means less output with 0 being no output.'] = 'Niveli i debug (do të output për të komanduar dritaren). Më poshtë do të thotë më pak prodhim me 0 pa dalje.';

$GLOBALS["lang"]['The default discovery scan option is the UltraFast set.'] = 'Opsioni i paracaktuar i skanimit është set i UltraFast.';

$GLOBALS["lang"]['The default language assigned to any user created by this method.'] = 'Gjuha e paracaktuar e dhënë çdo përdoruesi të krijuar nga kjo metodë.';

$GLOBALS["lang"]['The device must respond to an Nmap ping before it is considered online.'] = 'Pajisja duhet t\'i përgjigjet një pingu në Nmap para se të shqyrtohet online.';

$GLOBALS["lang"]['The device within Open-AudIT. Links to <code>devices.id</code>.'] = 'Paisja brenda Open-AudIT. Lidhje me <code>devices.id</code>.';

$GLOBALS["lang"]['The direct link for the script is'] = 'Lidhja direkte për script-in është';

$GLOBALS["lang"]['The email address of the receiver'] = 'Adresa email e reciever';

$GLOBALS["lang"]['The enterprise binary from FirstWave is required for a license. Please download Open-AudIT from'] = 'Gjurma e ndërmarrjes nga FirstWave kërkohet për një liçensë. Ju lutem shkarkoni Open-AudIT nga';

$GLOBALS["lang"]['The entire associated baseline this result is from.'] = 'E gjithë baza e shoqëruar është nga.';

$GLOBALS["lang"]['The exploited vulnerability can affect resources beyond the security authority of the vulnerable component. This usually means a privilege or trust boundary is crossed (for example, escaping from a container to the host OS).'] = 'Dobësia e shfrytëzuar mund të prekë burimet përtej autoritetit të sigurisë të komponentit të prekshëm. Kjo zakonisht do të thotë se kalon një privilegj ose një kufi mirëbesimi (për shembull, duke ikur nga një enë te mikpritësi OS).';

$GLOBALS["lang"]['The exploited vulnerability only impacts resources within the same security authority as the vulnerable component. In other words, the attacker’s actions stay within the original trust boundary.'] = 'Dobësia e shfrytëzuar ndikon vetëm në burimet brenda të njëjtit autoritet sigurie si komponenti i prekshëm. Me fjalë të tjera, sulmuesi vepron brenda kufirit origjinal të besimit.';

$GLOBALS["lang"]['The externally referenced location ID. Usually populated by Cloud audits.'] = 'ID e pozicionit të jashtëm. Zakonisht të populluara nga kontrollet e reve.';

$GLOBALS["lang"]['The fields associated with an Integration are stored in the database as a JSON array of objects. Each field has the following attributes'] = 'Fushat e lidhura me një integrim janë ruajtur në bazën e të dhënave si një grup objektesh JSON. Çdo fushë ka cilësitë e mëposhtme';

$GLOBALS["lang"]['The first time that Open-AudIT retrieved details of this device.'] = 'Herën e parë që Open-AudIT mori detajet e kësaj pajisje.';

$GLOBALS["lang"]['The floor the rack is located on.'] = 'Dyshemeja është vendosur.';

$GLOBALS["lang"]['The foreign table to reference. Should be one of: devices, locations, orgs or queries.'] = 'Tavolina e huaj në referim. Duhet të jetë një nga: pajisjet, vendet, orgat ose kunjat.';

$GLOBALS["lang"]['The format of your data should be in the form'] = 'Formati i të dhënave tuaja duhet të jetë në formë';

$GLOBALS["lang"]['The format used for the output to be emailed.'] = 'Formati i përdorur për prodhimin e postës elektronike.';

$GLOBALS["lang"]['The fully qualified column upon which to group by. NOTE: When type = traffic, this represents the red query id.'] = 'Kolona e kualifikuar plotësisht sipas së cilës të grupohet. DYJA: Kur lloji = trafiku, kjo përfaqëson id - in e kërkimit të kuq.';

$GLOBALS["lang"]['The fully qualified name returned by the external system. EG: for NMIS we use configuration.roleType.'] = 'Emri plotësisht i kualifikuar u kthye nga sistemi i jashtëm. EG: për NMIS ne përdorim konfigurimin. rol Lloji.';

$GLOBALS["lang"]['The fully qualified table.column. Multiple may be provided, separated by a comma (no spaces).'] = 'Tavolina plotësisht e kualifikuar. Mund të sigurohen shumë, të ndara nga një presje (jo hapësira).';

$GLOBALS["lang"]['The generated SQL query to test for this vulnerability. This field can be edited to correct the query as required.'] = 'Kërkesa e gjeneruar SQL për të testuar për këtë dobësi. Kjo fushë mund të ndryshohet për të korrigjuar kërkesën siç kërkohet.';

$GLOBALS["lang"]['The group of devices on which the baseline was run against.'] = 'Grupi i pajisjeve në të cilat ishte drejtuar baza.';

$GLOBALS["lang"]['The group that provides a list of devices for the integration. Links to <code>groups.id</code>.'] = 'Grupi që jep një listë pajisjesh për integrimin. Lidhje me <code>groups.id</code>.';

$GLOBALS["lang"]['The hour of the day when this task should execute (* for every hour).'] = 'Momenti i ditës së caktuar!"';

$GLOBALS["lang"]['The id of the linked device. Links to <code>devices.id</code>'] = 'Identiteti i pajisjes së lidhur. Lidhje me <code>devices.id</code>';

$GLOBALS["lang"]['The identifier column (integer) in the database (read only).'] = 'Kolona e identifikuar (integer) në bazën e të dhënave (vetëm lexim).';

$GLOBALS["lang"]['The importance of this baseline (not used yet).'] = 'Rëndësia e kësaj vije bazë (nuk përdoret ende).';

$GLOBALS["lang"]['The integer of severity.'] = 'Shumicën e ashpërsisë.';

$GLOBALS["lang"]['The internal value, reformatted in this format.'] = 'Vlera e brendshme, e reformuar në këtë format.';

$GLOBALS["lang"]['The ip address of the Auth method.'] = 'Adresa e rrep e metodës së autorizimit.';

$GLOBALS["lang"]['The language to translate the web interface into for the user.'] = 'Gjuha për të përkthyer interfaqen web në për përdoruesin.';

$GLOBALS["lang"]['The last date and time this item was executed (read only).'] = 'Data dhe ora e fundit kur ky element u ekzekutua (vetëm lexim).';

$GLOBALS["lang"]['The last time that Open-AudIT retrieved details of this device.'] = 'Herën e fundit që Open-AudIT mori detajet e kësaj pajisje.';

$GLOBALS["lang"]['The last time this benchmarks was executed.'] = 'Herën e fundit kjo provë u ekzekutua.';

$GLOBALS["lang"]['The last time this integration was run.'] = 'Herën e fundit ky integrim u zhvillua.';

$GLOBALS["lang"]['The license endpoint allows you to track the number of licenses found on your devices.'] = 'Pika e licensës ju lejon të gjeni numrin e liçensave të gjetura në pajisjet tuaja.';

$GLOBALS["lang"]['The line number assigned by the provider to the line at this end of the connection.'] = 'Numri i vijës së caktuar nga ofruesi i vijës në këtë fund të lidhjes.';

$GLOBALS["lang"]['The location the rack is located in. Links to <code>locations.id</code>.'] = 'Vendi ku ndodhet rafti. Lidhje me <code>locations.id</code>.';

$GLOBALS["lang"]['The locations address.'] = 'Adresa e vendndodhjes.';

$GLOBALS["lang"]['The locations area.'] = 'Zona e vendndodhjes.';

$GLOBALS["lang"]['The locations city.'] = 'Në vendin ku ndodhet qyteti.';

$GLOBALS["lang"]['The locations country.'] = 'Vendi i vendeve.';

$GLOBALS["lang"]['The locations district.'] = 'Qarku i vendeve.';

$GLOBALS["lang"]['The locations latitude.'] = 'Gjerësia gjeografike.';

$GLOBALS["lang"]['The locations level.'] = 'Niveli i vendeve.';

$GLOBALS["lang"]['The locations longitude.'] = 'Vendi i gjatë.';

$GLOBALS["lang"]['The locations phone.'] = 'Telefoni i vendndodhjes.';

$GLOBALS["lang"]['The locations postcode.'] = 'Vendndodhjet postkode.';

$GLOBALS["lang"]['The locations region.'] = 'Në rajon.';

$GLOBALS["lang"]['The locations room.'] = 'Dhoma e vendndodhjes.';

$GLOBALS["lang"]['The locations state.'] = 'Vendi.';

$GLOBALS["lang"]['The locations suburb.'] = 'Në periferi.';

$GLOBALS["lang"]['The locations suite.'] = 'Në suitë.';

$GLOBALS["lang"]['The logic for device matching is contained in the devices_helper.php file, which on a Linux install can be found here'] = 'Logjika e përputhjes me dispozitivin gjendet në file instrument_helper.php, që në një instalimi Linux mund të gjendet këtu';

$GLOBALS["lang"]['The machine-default permission settings do not grant Local Activation permission for the COM Server application with'] = 'Rregullimet e prezgjedhura të të drejtave të makinës nuk japin leje për aktivizimin lokal për programin e serveritCOM me';

$GLOBALS["lang"]['The maximum physical weight (in KGs) this rack can hold.'] = 'Pesha maksimale fizike (në KGs) mund të mbajë.';

$GLOBALS["lang"]['The maximum total BTUs this rack is rated for.'] = 'Maksimumi i plotë i BTU-së për të cilin është vlerësuar kjo raft.';

$GLOBALS["lang"]['The minimum required attributes for attributes are'] = 'Veçoritë minimale të kërkuara për atributet janë';

$GLOBALS["lang"]['The minute of the hour when this task should execute (* for every minute).'] = 'Minuta e orës kur ky aktivitet duhet të ekzekutojë (çdo minutë).';

$GLOBALS["lang"]['The month of the year when this task should execute (* for every month).'] = 'muaji i vitit kur ky detyrë duhet ekzekutuar (për çdo muaj).';

$GLOBALS["lang"]['The name given to this item.'] = 'Emri i dhënë këtij elementi.';

$GLOBALS["lang"]['The name given to this item. Ideally it should be unique.'] = 'Emri i dhënë këtij elementi. Duhet të jetë unike.';

$GLOBALS["lang"]['The name given to this user (used to login). Ideally it should be unique.'] = 'emri nga. Duhet të jetë unike.';

$GLOBALS["lang"]['The name of the associated cloud (if required).'] = 'Emri i resë së përbashkët (nëse kërkohet).';

$GLOBALS["lang"]['The name of the software package, as audited by Open-AudIT. Use the percent sign % as a wildcard.'] = 'Emri i paketës së programeve, si audituar nga Open-AudIT. Përdor shenjën përqindjes % si një kartë e egër.';

$GLOBALS["lang"]['The name of the user who last changed or added this item (read only).'] = 'Emri i përdoruesit që e fundit ndryshoi apo shtoi këtë element (vetëm lexim).';

$GLOBALS["lang"]['The name provided by the provider.'] = 'Emri i dhënë nga siguruesi.';

$GLOBALS["lang"]['The network in the format 192.168.1.0/24.'] = 'Rrjeti në formatin 192.168.1.0/24.';

$GLOBALS["lang"]['The network subnet to execute the discovery on.'] = 'Rrjeti për të ekzekutuar zbulimin.';

$GLOBALS["lang"]['The new Agent runs a PowerShell version of the old audit script in preparation for the depreciation of VBScript (yes, it is coming).'] = 'Agjenti i ri drejton një version të PowerShell të skenarit të vjetër auditues në përgatitje për zhvlerësimin e VBScript (po, po vjen).';

$GLOBALS["lang"]['The number of RUs this device occupies.'] = 'Numri i RUS kjo pajisje zë.';

$GLOBALS["lang"]['The number of associated locations. Links to <code>locations.cloud_id</code>.'] = 'Numri i pozicioneve shoqëruese. Lidhje me <code>locations.cloud_id</code>.';

$GLOBALS["lang"]['The number of associated networks. Links to <code>networks.cloud_id</code>.'] = 'Numri i rrjeteve shoqëruese. Lidhje me <code>networks.cloud_id</code>.';

$GLOBALS["lang"]['The number of audited devices in this cloud. Links to <code>devices.cloud_id</code> and <code>devices.serial</code>.'] = 'Numri i pajisjeve të kontrolluara në këtë re. Lidhje me <code>devices.cloud_id</code> dhe <code>devices.serial</code>.';

$GLOBALS["lang"]['The number of critical severity vulnerabilities held by FirstWave (not in your database).'] = 'Numri i ashpërsisë kritike mbajtur nga FirstWave (jo në databazën tuaj).';

$GLOBALS["lang"]['The number of devices found by this discovery.'] = 'Numri i pajisjeve të gjetura nga ky zbulim.';

$GLOBALS["lang"]['The number of devices in the associated group.'] = 'Numri i pajisjeve në grupin shoqërues.';

$GLOBALS["lang"]['The number of devices in this cloud with a state of running. Links to <code>devices.cloud_id</code> and <code>devices.instance_state</code>.'] = 'Numri i pajisjeve në këtë re me një gjendje vrapimi. Lidhje me <code>devices.cloud_id</code> dhe <code>devices.instance_state</code>.';

$GLOBALS["lang"]['The number of devices in this cloud with a state of stopped. Links to <code>devices.cloud_id</code> and <code>devices.instance_state</code>.'] = 'Numri i pajisjeve në këtë re me një gjendje ndalimi. Lidhje me <code>devices.cloud_id</code> dhe <code>devices.instance_state</code>.';

$GLOBALS["lang"]['The number of devices in this cloud. Links to <code>devices.cloud_id</code>.'] = 'Numri i pajisjeve në këtë re. Lidhje me <code>devices.cloud_id</code>.';

$GLOBALS["lang"]['The number of devices this benchmark will be executed upon. Derived from <code>benchmarks.devices</code>.'] = 'Numri i pajisjeve që ky standart do të ekzekutohet. Derberd nga <code>benchmarks.devices</code>.';

$GLOBALS["lang"]['The number of devices to limit this discovery to.'] = 'Numri i pajisjeve për ta kufizuar këtë zbulim.';

$GLOBALS["lang"]['The number of high severity vulnerabilities held by FirstWave (not in your database).'] = 'Numri i ashpërsisë së lartë mbajtur nga FirstWave (jo në databazën tuaj).';

$GLOBALS["lang"]['The number of low severity vulnerabilities held by FirstWave (not in your database).'] = 'Numri i ashpërsisë së ulët mbajtur nga FirstWave (jo në databazën tuaj).';

$GLOBALS["lang"]['The number of medium severity vulnerabilities held by FirstWave (not in your database).'] = 'Numri i ashpërsisë së mesme mbajtur nga FirstWave (jo në databazën tuaj).';

$GLOBALS["lang"]['The number of purchased licenses.'] = 'Numri i liçensave të blera.';

$GLOBALS["lang"]['The number of seconds to try and communicate with the target IP.'] = 'Numri i sekondave për tu përpjekur dhe komunikuar me objektivin IP.';

$GLOBALS["lang"]['The number of vulnerabilities without a severity held by FirstWave (not in your database).'] = 'Numri i dobësive pa një ashpërsi mbajtur nga FirstWave (jo në databazën tuaj).';

$GLOBALS["lang"]['The offset is the count of devices you wish to return data from.'] = 'është nga.';

$GLOBALS["lang"]['The only required permission / policy name (in our testing) is'] = 'I vetmi emër i kërkuar për leje / politikë (në testimin tonë) është';

$GLOBALS["lang"]['The optional secondary column. NOTE: When type = traffic, this represents the yellow query id.'] = 'Kollona dytësore. DYJA: Kur lloji = trafiku, kjo paraqet id - in e verdhë.';

$GLOBALS["lang"]['The optional third column. NOTE: When type = traffic, this represents the green query id.'] = 'Kolona e tretë. DYJA: Kur lloji = trafiku, kjo përfaqëson id - in e kërkimit të gjelbër.';

$GLOBALS["lang"]['The order of information retrieval is snmp, ssh, wmi.'] = 'Urdhëri i marrjes së informacionit është snmp, ssh, wmi.';

$GLOBALS["lang"]['The orientation of this device.'] = 'Orientimi i kësaj pajisjeje.';

$GLOBALS["lang"]['The password (if not using the user running the script).'] = 'Fjalëkalimi (nëse nuk përdor fjalëkalimin duke ekzekutuar script-in).';

$GLOBALS["lang"]['The password for the dn_account attribute.'] = 'Fjalëkalimi për atributin dn_account.';

$GLOBALS["lang"]['The password used to access the external system.'] = 'Fjalëkalimi i përdorur për të hyrë në sistemin e jashtëm.';

$GLOBALS["lang"]['The path to the file or directory.'] = 'shtegu nga file.';

$GLOBALS["lang"]['The path to the file or directory. Directories should end with a trailing slash.'] = 'shtegu nga file. Drejtoritë duhet të përfundojnë me një slash.';

$GLOBALS["lang"]['The physical depth (in CMs) of the rack.'] = 'Thellësia fizike (në CM) e raftit.';

$GLOBALS["lang"]['The physical height (in CMs) of the rack.'] = 'Lartësia fizike e raftit.';

$GLOBALS["lang"]['The physical weight (in KGs) of the rack at present.'] = 'Pesha fizike (në KG) e raftit për momentin.';

$GLOBALS["lang"]['The physical weight (in KGs) of the rack when empty.'] = 'Pesha fizike (në KG) e raftit kur është bosh.';

$GLOBALS["lang"]['The physical width (in CMs) of the rack.'] = 'Gjerësia fizike (në CM) e raftit.';

$GLOBALS["lang"]['The pod (if any) that this rack is part of.'] = 'Kuçka (nëse ndonjë) është pjesë e saj.';

$GLOBALS["lang"]['The power circuit this rack attaches to.'] = 'Rrethi i energjisë që bën.';

$GLOBALS["lang"]['The primary database table upon which to base this widget.'] = 'Tabela kryesore e të dhënave mbi të cilën duhet bazuar ky widget.';

$GLOBALS["lang"]['The primary method for authorization (what a user can do) is now based on the users Roles. Roles are defined as admin, org_admin, reporter, and user by default. Each role has a set of permissions (Create, Read, Update, Delete) for each endpoint. Standard roles as shipped should cover 99.9 percent of use-cases. The ability to define additional roles and edit existing roles is enabled in Open-AudIT Enterprise.'] = 'Metoda kryesore për autorizimin (ajo që mund të bëjë një përdorues) tani bazohet në rolet e përdoruesve. Roli është përcaktuar si admin, org_admin, reporter dhe përdorues si prezgjedhur. Çdo rol ka një sërë të drejtash (Krijo, lexo, rifresko, elemino) për çdo pikë. Roli standart si i dërguar duhet të mbulojë 99.9 përqind të rasteve të përdorimit. Aftësia për të përcaktuar role shtesë dhe për të ndryshuar rolet ekzistuese është aktivizuar në Ndërmarrjen Open-AudIT.';

$GLOBALS["lang"]['The process identifier of this queue item.'] = 'nga j';

$GLOBALS["lang"]['The process that was used last to retrieve details about the device'] = 'Procesi i përdorur i fundit për të marrë hollësi në lidhje me dispozitivin';

$GLOBALS["lang"]['The purpose of this licensing page is to list the products and licenses included in Firstwave Commercial products including products based upon open source works.Open-AudIT is licensed from Firstwave under AGPLv3 or later with Enterprise and Professional functionality licensed under commercial terms.Open-AudIT when downloaded from FirstWave may include the following libraries and projects, which are supplied unmodified and licensed as indicated:'] = 'Qëllimi i kësaj faqeje për licensimin është të listojë produktet dhe licensat e përfshira në produktet komerciale të Firvalit të Parë, duke përfshirë edhe prodhimet e bazuara në burime të hapura. Open-AudIT është i liçensuar nga Firstwave sipas AGPLv3 ose më vonë me Sipërmarrjen dhe funksionalitetin profesional të liçensuar sipas kushteve komerciale. Open-AudIT kur shkarkohet nga FirstWave mund të përfshijë bibliotekat dhe projektet e mëposhtme, të cilat janë të pamodulifikuara dhe të liçensuara siç tregohet:';

$GLOBALS["lang"]['The query that provides a list of devices for the integration. Links to <code>queries.id</code>.'] = 'Kërkesa që ofron një listë pajisjesh për integrimin. Lidhje me <code>queries.id</code>.';

$GLOBALS["lang"]['The rack asset number.'] = 'Numri i aseteve.';

$GLOBALS["lang"]['The rack asset tag.'] = 'Etiketa e asetit.';

$GLOBALS["lang"]['The rack bar code.'] = 'Kodi i barit.';

$GLOBALS["lang"]['The rack model.'] = 'Modeli.';

$GLOBALS["lang"]['The rack serial.'] = 'Serik.';

$GLOBALS["lang"]['The rack series.'] = 'Seritë.';

$GLOBALS["lang"]['The rack this device is located in. Links to <code>racks.id</code>.'] = 'Dyqani është vendosur. Lidhje me <code>racks.id</code>.';

$GLOBALS["lang"]['The recommended process of addressing and fixing identified security vulnerabilities. This typically involves applying patches, updates, or other measures to eliminate the risk posed by the vulnerabilities.'] = 'Procesi i rekomanduar i trajtimit dhe fiksimit të dobësive të identifikuara të sigurisë. Kjo zakonisht përfshin të përdorësh pjesë, të reja ose masa të tjera për të eliminuar rrezikun e shkaktuar nga dobësitë.';

$GLOBALS["lang"]['The regular domain notation of your directory. Eg - <code>open-audit.lan</code>.'] = 'Notimi i rregullt i directory tuaj. Eg... <code>open-audit.lan</code>.';

$GLOBALS["lang"]['The requested properties should be in a comma-separated list. Properties should be fully qualified - ie, system.hostname (not just hostname).'] = 'Pronat e kërkuara duhet të jenë në një listë të ndarë nga komunikimi. Pronësitë duhet të jenë të kualifikuara plotësisht - ie, sistemi. Emri i host (jo vetëm emri i host).';

$GLOBALS["lang"]['The result of the command.'] = 'Rezultati i komandës.';

$GLOBALS["lang"]['The room the rack is located in.'] = 'Dhoma ku është vendosur rafti.';

$GLOBALS["lang"]['The row the rack is located in.'] = 'Rreshti ku ndodhet rafti.';

$GLOBALS["lang"]['The search for group on the LDAP server failed. Check the LDAP server logs. Have you created these groups (for roles and orgs) on the LDAP server and assigned LDAP users to them?'] = 'Kërkimi për grupin tek serveri LDAP dështoi. Kontrollo shkrimet e serverit LDAP. A i keni krijuar këto grupe (për role dhe orgs) në serverin LDAP dhe a u keni caktuar atyre përdorues LDAP?';

$GLOBALS["lang"]['The secret key used in conjunction with your AWS EC2 API key.'] = 'Çelësi sekret i përdorur së bashku me çelësin tuaj AWS EC2.';

$GLOBALS["lang"]['The software end-of-life date.'] = 'Programi mbaron datën e jetës.';

$GLOBALS["lang"]['The software end-of-service-life date.'] = 'Data e fundit e shërbimit të programeve.';

$GLOBALS["lang"]['The specific database column from the specified database table.'] = 'Modeli specifik i bazës së të dhënave nga tabela e përcaktuar e të dhënave.';

$GLOBALS["lang"]['The specific database table.'] = 'Tavolina specifike e të dhënave.';

$GLOBALS["lang"]['The standard Nmap timing options. Previously set at T4 (aggressive).'] = 'Opsionet standarde të kohës së Nmap. Më parë është vendosur në T4 (agresive).';

$GLOBALS["lang"]['The standard Nmap timing options. We usually use -T4 (Aggressive) as this is recommended for a decent broadband or ethernet connection.'] = 'Opsionet standarde të kohës së Nmap. Zakonisht përdorim - T4 (Agresive) pasi kjo rekomandohet për një lidhje të mirë bandëgjerë ose ethernet.';

$GLOBALS["lang"]['The status of this integration'] = 'Statusi i këtij integrimi';

$GLOBALS["lang"]['The status of this queued item.'] = 'Gjendja e këtij elementi në pritje.';

$GLOBALS["lang"]['The steps below outline the process.'] = 'Hapat e mëposhtëm përshkruajnë procesin.';

$GLOBALS["lang"]['The target IP this log entry referers to (if any).'] = 'Objektivi IP nga.';

$GLOBALS["lang"]['The target computer to audit. \".\" means localhost.'] = 'Kompjuteri objektiv për auditim. \."\" do të thotë mikpritës lokal.';

$GLOBALS["lang"]['The template for the link to be generated per result line.'] = 'Shablloni për lidhjen që duhet krijuar si rezultat i rreshtit.';

$GLOBALS["lang"]['The text for the bottom of the chart in a line chart (only).'] = 'Teksti për fundin e tabelës në një tabelë rreshti (vetëm).';

$GLOBALS["lang"]['The text that is displayed.'] = 'Teksti që tregohet.';

$GLOBALS["lang"]['The timestamp after which, this task should run. For example, run a task after the 1st June 2017 at 10am, set it to <code>2017-06-01 09:59:00</code>. This value should be zero padded (ie, 09, not 9). This value defaults to <code>2000-01-01 00:00:00</code> which means by default, a scheduled task will run at next scheduled execution time.'] = 'Pozicioni në vijim i të cilit duhet ekzekutuar. Për shembull, kryeni një detyrë pas 1 qershorit 2017 në 10 të mëngjesit, vënë atë për të <code>2017-06-01 09:59:00</code>. Kjo vlerë duhet të jetë zero e mbushur (ie, 09, jo 9). Kjo vlerë është e prezgjedhur <code>2000-01-01 00:00:00</code> që do të thotë në mënyrë të paracaktuar, një detyrë e planifikuar do të vazhdojë në kohën e ekzekutimit të planifikuar.';

$GLOBALS["lang"]['The top 10, 100 or 1000 (or none) TCP ports commonly in use according to Nmap.'] = '10, 100 ose 1000 e sipër (ose asnjë) porte TCP zakonisht në përdorim sipas Nmap.';

$GLOBALS["lang"]['The top 10, 100 or 1000 (or none) UDP ports commonly in use according to Nmap.'] = 'Porta e parë prej 10, 100 ose 1000 (ose asnjë) e UDP zakonisht në përdorim sipas Nmap.';

$GLOBALS["lang"]['The total BTU output by this rack.'] = 'Rezultati total i BTU nga kjo raft.';

$GLOBALS["lang"]['The type of device.'] = 'Lloji i pajisjes.';

$GLOBALS["lang"]['The type of organisation.'] = 'Lloji i organizimit.';

$GLOBALS["lang"]['The type of rack (compute, power, network, etc).'] = 'lloji nga.';

$GLOBALS["lang"]['The type of task to run. One of: baseline, benchmark, cloud discovery, discovery, integration, report, query.'] = 'Lloji i detyrës për tu ekzekutuar. Një nga: linja bazë, standarti, zbulimi i reve, zbulimi, integrimi, raporti, kërkesa.';

$GLOBALS["lang"]['The type of the integration (usually named after the external system).'] = 'Lloji i integrimit (i përmendur zakonisht pas sistemit të jashtëm).';

$GLOBALS["lang"]['The unfiltered state means that a port is accessible, but Nmap is unable to determine whether it is open or closed. Only the ACK scan, which is used to map firewall rulesets, classifies ports into this state. Scanning unfiltered ports with other scan types such as Window scan, SYN scan, or FIN scan, may help resolve whether the port is open.'] = 'Shteti i pafiltruar do të thotë se një port është i arritshëm, por Nmap nuk është në gjendje të përcaktojë nëse është i hapur apo i mbyllur. Vetëm skanimi ACK, i cili përdoret për të hartuar rregullat e firewall, klasifikon portet në këtë shtet. Duke skanuar portet e pafiltruara me lloje të tjera skanimesh, si skanimi i dritares, skanimi i SYN ose skanimi FIN, mund të zgjidhë nëse porti është i hapur.';

$GLOBALS["lang"]['The unique identifier of this server.'] = 'Identifikuesi unik i këtij serveri.';

$GLOBALS["lang"]['The user account this collector uses. Links to <code>users.id</code>.'] = 'Profili i përdoruesit që ky koleksionues përdor. Lidhje me <code>users.id</code>.';

$GLOBALS["lang"]['The user in Active Directory / OpenLDAP must be a direct member of the required Open-AudIT groups for Roles and Orgs. A member of a group that is a member another group that is a member of the Open-AudIT group will not work.'] = 'Përdoruesi në Active Directory / OpenLDAP duhet të jetë një anëtar i drejtpërdrejtë i grupeve të kërkuara Open-AudIT për Role dhe Orgs. Një anëtar i një grupi që është anëtar i një grupi tjetër që është anëtar i grupit Open-AudIT nuk do të punojë.';

$GLOBALS["lang"]['The user is in LDAP and their credentials are valid, but is not in any of the Open-AudIT LDAP groups for Orgs.'] = 'Përdoruesi është në LDAP dhe kredencialet e tyre janë të vlefshme, por nuk është në asnjë nga grupet Open-AudIT LDAP për Orgs.';

$GLOBALS["lang"]['The user is in LDAP and their credentials are valid, but is not in any of the Open-AudIT LDAP groups for Roles.'] = 'Përdoruesi është në LDAP dhe kredencialet e tyre janë të vlefshme, por nuk është në asnjë nga grupet LDAP Open-AudIT për Role.';

$GLOBALS["lang"]['The user is in LDAP and their credentials are valid, but is not in any of the required Open-AudIT LDAP groups.'] = 'Përdoruesi është në LDAP dhe kredencialet e tyre janë të vlefshme, por nuk është në asnjë nga grupet e kërkuara Open-AudIT LDAP.';

$GLOBALS["lang"]['The user is in the LDAP group that matches this Org.'] = 'Përdoruesi është në grupin LDAP që përputhet me këtë Org.';

$GLOBALS["lang"]['The user is in the LDAP group that matches this Role.'] = 'Përdoruesi është në grupin LDAP që përputhet me këtë rol.';

$GLOBALS["lang"]['The user is not in the LDAP group that matches this Org.'] = 'Përdoruesi nuk është në grupin LDAP që përputhet me këtë Org.';

$GLOBALS["lang"]['The user is not in the LDAP group that matches this Role.'] = 'Përdoruesi nuk është në grupin LDAP që përputhet me këtë rol.';

$GLOBALS["lang"]['The user that was specified exists in LDAP, but Open-AudIT is not configured to consume the LDAP groups for roles and that user does not exist within Open-AudIT. Either select <i>Use LDAP for Roles</i> on the Open-AudIT LDAP Server screen or create this user within Open-AudIT and assign roles and orgs.'] = 'Përdoruesi që është specifikuar ekziston në LDAP, por Open-AudIT nuk është konfiguruar të konsumojë grupet LDAP për role dhe se përdoruesi nuk ekziston brenda Open-AudIT. Zgjedhja <i>Përdor LDAP për role</i> në Open-AudIT LDAP Analizues i serverit ose krijim i këtij përdoruesi brenda Open-AudIT dhe caktimin e roleve dhe orgs.';

$GLOBALS["lang"]['The username (if not using the user running the script).'] = 'përdoruesi nuk përdorues.';

$GLOBALS["lang"]['The username used to access the external system.'] = 'Përdoruesi u përdor për të hyrë në sistemin e jashtëm.';

$GLOBALS["lang"]['The users details were not retrieved from LDAP. Check the LDAP server logs.'] = 'Hollësitë e përdoruesve nuk janë tërhequr nga LDAP. Kontrollo shkrimet e serverit LDAP.';

$GLOBALS["lang"]['The users details were retrieved from LDAP.'] = 'Detajet e përdoruesve janë tërhequr nga LDAP.';

$GLOBALS["lang"]['The users email address.'] = 'Adresa email e përdoruesve.';

$GLOBALS["lang"]['The usual hours of operation at this site.'] = 'Ora e zakonshme e operacionit në këtë faqe.';

$GLOBALS["lang"]['The value assigned to the item.'] = 'Vlera që i është dhënë elementit.';

$GLOBALS["lang"]['The value that is stored for this particular item.'] = 'Vlera që ruhet për këtë artikull të veçantë.';

$GLOBALS["lang"]['The vendor name as per CPE entries.'] = 'Emri i shitësit për CPE.';

$GLOBALS["lang"]['The vendor taken from the CPE.'] = 'Shitësi mori nga CPE.';

$GLOBALS["lang"]['The web directory on the host that Open-AudIT is installed (requires a trailing slash).'] = 'Directory e internetit mbi host-in që Open-AudIT është instaluar (require a passing slash).';

$GLOBALS["lang"]['The widget at position '] = 'widget në pozicion ';

$GLOBALS["lang"]['The width of this device.'] = 'Gjerësia e kësaj pajisje.';

$GLOBALS["lang"]['Their OrgIDs and their descendants'] = 'OrgIDët dhe pasardhësit e tyre';

$GLOBALS["lang"]['Their OrgIDs only'] = 'OrgIDs tyre vetëm';

$GLOBALS["lang"]['Their OrgIDs, ascendants and descendants'] = 'OrgIDs e tyre, ngjitjet dhe pasardhësit';

$GLOBALS["lang"]['Then'] = 'Prandaj';

$GLOBALS["lang"]['Then create a new Auth method in Open-AudIT by going to menu -> Admin -> Auth Methods -> Create Auth. Provide a name and set the <i>type</i> to Entra.'] = 'Pastaj krijo një metodë të re të autorizimit në Open-AudIT duke shkuar tek menu -> Admin -> Metodat e autorizimit -> Krijo Auth. Jep një emër dhe cakto emrin <i>lloji</i> Në Entra.';

$GLOBALS["lang"]['Then you can use Open-AudIT (unsupported) to receive audit data directly from the clients. Discovery <strong>will fail</strong>, but if youre not using Discovery (the main feature Open-AudIT was designed around), you can still get device data. You would need to run the audit scripts directly on the clients using cron, or use the Windows Agent feature (Enterprise only).'] = 'Pastaj mund të përdorni Open-AudIT (të pasuportuar) për të marrë të dhëna auditimi direkt nga klientët. Zbulimi <strong>do të dështojë</strong>, por nëse nuk jeni duke përdorur Discovery (aspekti kryesor Open-AudIT është projektuar rreth e rrotull), ju ende mund të merrni të dhënat e pajisjeve. Do t\'ju duhej t\'i drejtonit skenaret e auditimit direkt tek klientët duke përdorur cron, ose duke përdorur funksionin Windows (vetëm surpriza).';

$GLOBALS["lang"]['There is a button to export to JSON. This will display only the device table of attributes. To export the device with all associated component tables, view the device details, then add'] = 'Ka një buton për tu eksportuar në JSON. Kjo do të shfaqë vetëm tabelën e cilësive. Për të eksportuar dispozitivin me të gjitha tabelat përbërëse, shfaq detajet e dispozitivit, pastaj shto';

$GLOBALS["lang"]['There is absolutely no need to manually edit each individual device.'] = 'Nuk ka absolutisht nevojë për të ndryshuar manualisht çdo pajisje individuale.';

$GLOBALS["lang"]['There is no need to do anything if you are running Open-AudIT on a Linux server.<br><br>Windows clients are just fine and require no special actions, however.... to enable this feature the audit script must be run locally on the target Windows system. It cannot be run remotely as we do with WMI calls when running the audit script on one Windows machine, while targeting a second Windows machine. To do this we need to copy the audit script to the target Windows machine and then run it. Unfortunately the service account that Apache runs under is the Local System account. This account has no access to remote (network based) resources. To work around this issue the service must be run under another account. It is easiest to just use the local Administrator account, but you can try any account you like as long as it has the required privileges. The Local System account has as much local access as the local Administrator account.'] = 'Nuk ka nevojë të bëni asgjë nëse jeni duke drejtuar Open-AudIT në një server Linux.<br/><br/>Klientët Windows janë shumë mirë dhe nuk kërkojnë veprime të veçanta, megjithatë ... për të mundësuar këtë veçori skenar auditimi duhet të zbatohet lokalisht në sistemin e synuar Windows. Ajo nuk mund të drejtohet nga larg siç bëjmë ne me telefonatat WMI kur drejtojmë skenarin auditues në një makinë Windows, ndërsa shënjestrojmë një makinë të dytë Windows. Për ta bërë këtë ne duhet të kopjojmë skenarin auditues të makinës Windows dhe pastaj ta drejtojmë atë. Për fat të keq, tregimi i shërbimit që kryen Apaçi është llogaria e sistemit lokal. Ky profil nuk ka asnjë hyrje në burime të largëta (të bazuara në Internet). Për të punuar rreth kësaj çështjeje shërbimi duhet të zbatohet nën një llogari tjetër. Është më e lehtë të përdorësh llogarinë lokale të administratorit, por mund të provosh çdo llogari që të pëlqen për aq kohë sa ka privilegjet e kërkuara. Llogaria e sistemit lokal ka po aq hyrje lokale sa edhe llogaria Administratori lokal.';

$GLOBALS["lang"]['These are only examples. You may need to adjust these attributes to suit your particular LDAP.'] = 'Këta janë vetëm shembuj. Mund t\'ju duhet t\'i përshtatni këto cilësi me LDAP tuaj të veçantë.';

$GLOBALS["lang"]['These parameters enable you to audit only what is useful and relevant to you, saving processing time and allowing you to discover your network in an orderly manner.'] = 'Këto parametra ju japin mundësi të kontrolloni vetëm atë që është e dobishme dhe e rëndësishme për ju, të kurseni kohën e përpunimit dhe t\'ju lejojnë të zbuloni rrjetin në një mënyrë të rregullt.';

$GLOBALS["lang"]['Thing'] = 'Gjë';

$GLOBALS["lang"]['Think of mail.domain1.com and mail.domain2.com - same hostname.'] = 'Mendo për postën.Domain1.com dhe postën.domain2.com - i njëjti emër.';

$GLOBALS["lang"]['Third'] = 'E treta';

$GLOBALS["lang"]['This CVE will be retrieved and overwrite the existing CVE if it exists.'] = 'Kjo CVE do të merret dhe mbishkruhet CVE ekzistuese nëse ekziston.';

$GLOBALS["lang"]['This Org has no AD group specified. Check the roles details within Open-AudIT.'] = 'Ky org nuk ka specifikuar asnjë grup AD. Kontrollo detajet e roleve brenda Open-AudIT.';

$GLOBALS["lang"]['This Org has no AD group specified. Check the roles details within Open-AudIT. <span class=\"confluence-link\">Have you created these groups (for orgs) on the LDAP server and assigned LDAP users to them?'] = 'Ky org nuk ka specifikuar asnjë grup AD. Kontrollo detajet e roleve brenda Open-AudIT. <span class=\'\"confluence-link\"\'>A i keni krijuar këto grupe (për orgs) në serverin LDAP dhe a u keni caktuar atyre përdoruesit LDAP?</span>';

$GLOBALS["lang"]['This Role has no AD group specified. Check the roles details within Open-AudIT.'] = 'Ky rol nuk ka specifikuar asnjë grup AD. Kontrollo detajet e roleve brenda Open-AudIT.';

$GLOBALS["lang"]['This attribute is stored as a JSON object. It is the list of all collections and contains the collection name along with <code>c</code>, <code>r</code>, <code>u</code> and,or <code>d</code> which represent create, read, update and delete. These are the actions a user can perform on items from that particular collection.'] = 'Ky atribut ruhet si një objekt JSON. Është lista e të gjitha koleksioneve dhe përmban emrin e mbledhjes së bashku me <code>c</code>. <code>r</code>. <code>u</code> dhe, ose <code>d</code> që përfaqëson krijimin, leximin, përditësimin dhe fshirjen. Këto janë veprimet që një përdorues mund të kryejë në artikuj nga ai koleksion i veçantë.';

$GLOBALS["lang"]['This can be either a varchar (a text field), a list (a list of values that can be selected) or a date.'] = 'Kjo mund të jetë ose varhar (një fushë teksti), një listë vlerash (një listë vlerash që mund të zgjidhen) ose një datë.';

$GLOBALS["lang"]['This code relys on the great work done by the'] = 'Ky kod mbështetet në punën e madhe të bërë nga';

$GLOBALS["lang"]['This collectors universally unique identifier.'] = 'Ky koleksionues, i cili i identifikon në mënyrë universale.';

$GLOBALS["lang"]['This column is required by'] = 'Kjo kollonë kërkohet nga';

$GLOBALS["lang"]['This column is required by '] = 'Kjo kollonë kërkohet nga ';

$GLOBALS["lang"]['This description is auto-populated and should ideally be left as-is.'] = 'Ky përshkrim është i populluar me auto dhe duhet të mbetet idealisht as-is.';

$GLOBALS["lang"]['This endpoint enables you to add the connections that are part of your network infrastructure, it allows you to customize a variety of attributes, specify where this connection is located and the organization that it belongs.'] = 'Kjo pikë ju mundëson të shtoni lidhjet që janë pjesë e infrastrukturës së rrjetit tuaj, ju lejon të rregulloni një shumëllojshmëri cilësish, të specifikoni se ku ndodhet kjo lidhje dhe organizatën që i takon.';

$GLOBALS["lang"]['This error indicates that SMB1 has been disabled or removed from the target machine. This is normal for modern version of Windows and you will only see this message when the SMB2 connection attempt has failed. If the SMB2 connection fails, we attempt SMB1 to enable discovery on old versions of Windows. If the target Windows machine <i>is</i> running an old version of Windows, it is likely your credentials have failed. In that case, see'] = 'Ky gabim tregon se SMB1 është çaktivizuar ose hequr nga makineria e synuar. Kjo është normale për versionin modern të Windows dhe do ta shihni këtë mesazh vetëm kur përpjekja e lidhjes SMB2 të ketë dështuar. Nëse lidhja SMB2 dështon, ne përpiqemi SMB1 për të mundësuar zbulimin në versionet e vjetra të Windows. Nëse makineria Windows objektive <i>është</i> është. Në këtë rast, shiko';

$GLOBALS["lang"]['This error indicates that not enough virtual memory or paging file quota is available to complete the specified operation. You should try again later.'] = 'Ky gabim tregon se nuk është në dispozicion një kujtesë e mjaftueshme virtuale apo një kuotë leximi për të plotësuar operacionin e specifikuar. Duhet ta provosh përsëri më vonë.';

$GLOBALS["lang"]['This error indicates the credentials used either are incorrect, do not exist or do not have sufficient privileges to log on remotely to the target Windows machine. You should verify the credentials and check the below.'] = 'Ky gabim tregon që kredencialet e përdorura ose janë të pasakta, nuk ekziston ose nuk kanë privilegje të mjaftueshme për të kryer login në distancë tek makina Windows e synuar. Duhet të verifikoni kredencialet dhe të kontrolloni poshtë.';

$GLOBALS["lang"]['This example creates a list of all Modules marked as'] = 'Ky shembull krijon një listë të të gjitha modulëve të shënuar si';

$GLOBALS["lang"]['This example creates a list of devices and the open Ports, Protocols, and Programs found by the NMAP scan.'] = 'Ky shembull krijon një listë pajisjesh dhe Porteve të hapura, Protokolleve dhe Programeve të gjetura nga skanimi NMAP.';

$GLOBALS["lang"]['This example creates a list of devices where the Function or Description fields are blank OR the Purchase Date is the default.'] = 'Ky shembull krijon një listë pajisjesh ku fushat e funksionit apo përshkrimit janë bosh OSE data e Purchase është e prezgjedhura.';

$GLOBALS["lang"]['This example query retrieves a list of devices OVER 3 years old. The query uses today'] = 'Kjo pyetje për shembull merr një listë pajisjesh që janë 3 vjet të vjetra. Kërkesa përdoret sot';

$GLOBALS["lang"]['This example uses'] = 'Ky shembull përdoret';

$GLOBALS["lang"]['This feature requires a Professional or an Enterprise license.'] = 'Kjo veçori kërkon një liçensë profesionale ose një licensë Enterprise.';

$GLOBALS["lang"]['This feature, because it has the ability to affect target devices more than usual must be manually enabled. To enable this feature, change the configuration item feature_executables to <i>yes</i>.'] = 'Kjo veçori, sepse ka aftësinë të ndikojë te pajisjet e synuara më shumë se zakonisht, duhet të jetë e aktivizuar manualisht. Për të aktivizuar këtë funksion, ndrysho funksionin e konfigurimit tek <i>po</i>.';

$GLOBALS["lang"]['This file tells Linux to poll the application to determine if there are any scheduled tasks that should be run.'] = 'File i thotë Linux të shqyrtojë programin për të përcaktuar nëse duhen kryer ndonjë detyrë e caktuar.';

$GLOBALS["lang"]['This form provides a simple way to get started discovering the devices on your network. For more (much more) detailed options, you can individually create'] = 'Kjo formë siguron një mënyrë të thjeshtë për të filluar zbulimin e pajisjeve në rrjetin tuaj. Për më shumë opsione të hollësishme, ju mund të krijoni individualisht';

$GLOBALS["lang"]['This is also the way that PAExec works.'] = 'Kjo është gjithashtu mënyra se si punon PAExec.';

$GLOBALS["lang"]['This is an optional configuration option, enabled by setting discovery_use_org_id_match in the global configuration.'] = 'Ky është një opcion konfigurimi opcional, i aktivuar duke vendosur zbulimin_org_id_match në konfigurimin global.';

$GLOBALS["lang"]['This is generally the primary column, unless otherwise configured. NOTE: When type = traffic, this represents the secondary text.'] = 'Kjo është zakonisht shtylla primare, nëse nuk është konfiguruar ndryshe. DYJA: Kur lloji = trafiku, kjo përfaqëson tekstin dytësor.';

$GLOBALS["lang"]['This is likely due to MySQL time being off. MySQL typically uses the host devices time. You can check this by'] = 'Kjo ka të ngjarë të jetë për shkak të kohës së MySQL-it. MySQL zakonisht përdor kohën e pajisjeve pritëse. Mund ta kontrollosh këtë nga';

$GLOBALS["lang"]['This is settable by users and so even though it should be globally unique, there is certainly no guarantee of this.'] = 'Kjo është e qëndrueshme nga përdoruesit e kështu edhe pse duhet të jetë e veçantë në mbarë botën, sigurisht që nuk ka garanci për këtë.';

$GLOBALS["lang"]['This is the directory where we store any attachments to devices.'] = 'Kjo është directory ku ne ruajmë çdo lidhje me pajisjet.';

$GLOBALS["lang"]['This is to be used as the first point of call when troubleshooting Open-AudIT issues. You can click the Export button on the top right to retrieve this as a JSON file (to be added to the support ticket / email.'] = 'Kjo do të përdoret si pika e parë e thirrjes kur trazirat të godasin çështjet Open-AudIT. Ti në sipër djathtas j a j';

$GLOBALS["lang"]['This issue is under investigation.'] = 'Kjo çështje është nën hetim.';

$GLOBALS["lang"]['This item must match the value of the attribute selected or contains the ID of the query to be used.'] = 'Ky element duhet të përputhet me vlerën e atributit të zgjedhur apo përmban ID e kërkesës që duhet përdorur.';

$GLOBALS["lang"]['This item must match the value of the attribute selected.'] = 'Ky element duhet të përputhet me vlerën e atributit të zgjedhur.';

$GLOBALS["lang"]['This license expires on'] = 'Kjo liçensë skadon në';

$GLOBALS["lang"]['This security permission can be modified using the Component Services administrative tool.'] = 'Kjo leje sigurie mund të ndryshohet duke përdorur mjetin administrativ të Shërbimeve Komponale.';

$GLOBALS["lang"]['This should be commented out after troubleshooting as debug mode will generate a lot of logs on the disk for no benefit.'] = 'Kjo duhet komentuar pasi mundimi i mënyrës debug do të gjenerojë shumë shkrime në disk pa dobi.';

$GLOBALS["lang"]['This should be globally unique, but I have seen instances where it is not.'] = 'Kjo duhet të jetë unike globale, por kam parë raste ku nuk është.';

$GLOBALS["lang"]['This should be set to either 1 or the height of the rack.'] = 'Kjo duhet vendosur në 1 ose në lartësinë e raftit.';

$GLOBALS["lang"]['This should be the fully qualified field name in the database. Currently columns from the system, fields and credentials tables are supported. EG: system.nmis_role.'] = 'Ky duhet të jetë emri i fushës plotësisht i kualifikuar në databazë. Për momentin janë mbështetur kolona nga sistemi, fusha dhe tabela kredenciale. EG: sistemi.nmis_role.';

$GLOBALS["lang"]['This state is used when Nmap is unable to determine whether a port is closed or filtered. It is only used for the IP ID idle scan.'] = 'Kjo gjendje përdoret kur Nmap nuk është në gjendje të përcaktojë nëse një port është i mbyllur apo i filtruar. Përdoret vetëm për skanimin e ID IP.';

$GLOBALS["lang"]['This will auto-populate.'] = 'Kjo do të auto-populohet.';

$GLOBALS["lang"]['This will considerably slow the discovery scan.'] = 'Kjo do ta ngadalësojë shumë skanimin e zbulimit.';

$GLOBALS["lang"]['This will delete the current rows in the'] = 'elemino në';

$GLOBALS["lang"]['This will permanently DELETE this license.'] = 'Kjo do ta zgjidhë përgjithmonë këtë liçensë.';

$GLOBALS["lang"]['This will show you the Bulk Edit form. Any attributes you set on this form will be applied to all selected devices. You can set multiple attributes at once.'] = 'Kjo do t\'ju tregojë formën e Bukl Edit. Çdo atribut që keni vendosur në këtë formë do të zbatohet në të gjitha pajisjet e zgjedhura. Ju mund të vendosni cilësi të shumëfishta njëkohësisht.';

$GLOBALS["lang"]['Thursday'] = 'E enjte';

$GLOBALS["lang"]['time_caption'] = 'Ora';

$GLOBALS["lang"]['Time Caption'] = 'Ora';

$GLOBALS["lang"]['time_daylight'] = 'Ora';

$GLOBALS["lang"]['Time Daylight'] = 'Ora';

$GLOBALS["lang"]['Time to Execute'] = 'Koha për të ekzekutuar';

$GLOBALS["lang"]['timeout'] = 'Koha skadoi';

$GLOBALS["lang"]['Timeout'] = 'Koha skadoi';

$GLOBALS["lang"]['Timeout Per Target (Seconds)'] = 'Për Objektivi';

$GLOBALS["lang"]['Timeout per Target. Wait for X seconds for a target response.'] = 'Pushimi për objektiv. Prit për X sekonda për një përgjigje objektive.';

$GLOBALS["lang"]['Timesatamp'] = 'Timesatamp';

$GLOBALS["lang"]['Timestamp'] = 'unit-format';

$GLOBALS["lang"]['timing'] = 'Koha';

$GLOBALS["lang"]['Timing'] = 'Koha';

$GLOBALS["lang"]['Timor-Leste'] = 'Timor-Leste';

$GLOBALS["lang"]['Title'] = 'Titulli';

$GLOBALS["lang"]['To a new file named .env (in the same directory). Now edit that new file and uncomment (remove the #) the line below (line 17)'] = 'Për një file të ri të quajtur .env (në të njëjtën directory). Tani ndrysho këtë file të ri dhe anullo';

$GLOBALS["lang"]['To actually execute the query, append a /execute, thus /open-audit/index.php/queries/{$id}/execute.'] = 'Për të ekzekutuar në fakt kërkesën, shtoj një /exectute, në këtë mënyrë /hap-autidt.php/queries/{$id}/execut.';

$GLOBALS["lang"]['To audit a machine, you must have credentials and administrator level access.'] = 'Për të kontrolluar një makinë, duhet të keni qasje në nivel kredenciali dhe administratori.';

$GLOBALS["lang"]['To audit a remote machine on an Active Directory domain, your supplied user (or if none provided, the user running the script) must be a member of the target machines Administrators group (or subgroup).'] = 'Për të kontrolluar një makinë remote në një domain Aktiv Directory, përdoruesi juaj i furnizuar (ose nëse nuk është dhënë asnjë, përdoruesi që drejton script-in) duhet të jetë anëtar i grupit të manazhuesit të makinave objektive (ose nëngroup).';

$GLOBALS["lang"]['To audit a remote machine that is not in a domain, you must use the Administrator account (not <i>an</i> admin account, <i>the</i> Administrator account) on the target PC. #1 and #2'] = 'Për të kontrolluar një makinë të largët që nuk është në një domain, duhet të përdorni llogarinë Administ (jo <i>p.d</i> llogari admin, <i>tek</i> Llogaria administrative në PC. Një dhe dy';

$GLOBALS["lang"]['To audit localhost, any supplied credentials are disregarded and the connection is made using the details of the user running the script.'] = 'Për të kontrolluar mikpritësit lokalë, çdo kredencial i dhënë shpërfillet dhe lidhja është bërë duke përdorur detajet e përdorimit të script.';

$GLOBALS["lang"]['To compare software we check the name and version. Because version numbers are not all standardised in format, when we receive an audit result we create a new attribute called software_padded which we store in the database along with the rest of the software details for each package. For this reason, baselines using software policies will not work when run against a device that has not been audited by 1.10 (at least). Software policies can test against the version being <i>equal to</i>, <i>greater than</i> or <i>equal to or greater than</i>.'] = 'Për të krahasuar programet ne kontrollojmë emrin dhe versionin. Për shkak se numrat e versionit nuk janë të gjitha të standardizuar në format, kur ne marrim një rezultat auditimi ne krijojmë një atribut të ri të quajtur software_padruar që ne e ruajmë në bazë të dhënash së bashku me pjesën tjetër të detajeve të programeve për çdo paketë. Për këtë arsye, linjat bazë që përdorin politikat e programeve kompjuterikë nuk do të funksionojnë kur drejtuar kundër një pajisje që nuk është kontrolluar nga 1.10 (të paktën). Politikat e programeve mund të testojnë kundër versionit që është <i>baraz me</i>. <i>më e madhe se</i> ose <i>I barabartë ose i madh.</i>.';

$GLOBALS["lang"]['To create a new entry click the Create button in the upper right hand corner.'] = 'Për të krijuar një klikim të ri në hyrje, në këndin e sipërm të djathtë.';

$GLOBALS["lang"]['To create a resource, you should POST the required data.'] = 'Për të krijuar një burim, duhet të pranoni të dhënat e kërkuara.';

$GLOBALS["lang"]['To enable a remote machine (Vista or above) to be audited that is not on a domain, by an account in the Administrators group, other than the actual Administrator account see the below section on UAC.'] = 'Për të bërë të mundur që një makinë e largët (Vista ose më sipër) të kontrollohet, e cila nuk është në një domen, nga një llogari në grupin e Administratorëve, ndryshe nga llogaria e vërtetë e administratorit, të shohë pjesën e mëposhtme në UAC.';

$GLOBALS["lang"]['To enable this, create a new Auth item by going to menu -> Admin -> Auth -> Create Auth Method.'] = 'Për të aktivizuar këtë, krijo një element të ri të autorizimit duke shkuar në menu -> Admin -> Auth -> Krijo Metodë Auth.';

$GLOBALS["lang"]['To execute the Windows powershell script, open a command prompt as Administrator and use the following command'] = 'Për të ekzekutuar script-in Dritaret, hap një komandë të shpejtë si Administrator dhe përdor komandën në vazhdim';

$GLOBALS["lang"]['To execute the audit script, open a terminal and use the following command'] = 'Për të ekzekutuar script-in e kontrollit, hap një terminal dhe përdor komandën në vazhdim';

$GLOBALS["lang"]['To filter by a property value, use the property name. Operators that should precede the value are'] = 'Për të filtruar me një vlerë pronësie, përdor emrin e pronësisë. Operatorët që duhet të paraprijnë vlerën janë';

$GLOBALS["lang"]['To install Nmap on Windows, visit the Nmap page at'] = 'Për të instaluar Nmap në Windows, vizito faqen Nmap';

$GLOBALS["lang"]['To make the change, just follow the steps below.'] = 'Për të bërë ndryshimin, ndiq hapat poshtë.';

$GLOBALS["lang"]['To retrieve the Tenant ID. Open the Azure portal click on Azure Active Directory, Properties and the Tenant ID is displayed as your Directory ID - do not blame me for the name mismatch, that is how Microsoft roll.'] = 'Për të marrë kartën e identitetit. Hape klikimin e portalit Azure në Azure Aktiv Directory, Pronësitë dhe ID tenant është shfaqur si ID-ja juaj Directory - mos më fajëso mua për mospërputhjen e emrit, kjo është mënyra se si Microsoft rrotullon.';

$GLOBALS["lang"]['To retrieve your key, log in to the AWS Console and select your username, then My Security Credentials.'] = 'Për të marrë çelësin tuaj, hyrjen në Konsolë AWS dhe për të zgjedhur emrin tuaj, pastaj Credencials mia të sigurisë.';

$GLOBALS["lang"]['To return a specific component item.'] = 'Për të kthyer një element specifik përbërësi.';

$GLOBALS["lang"]['To return all items for a compnent type for a specific device.'] = 'Për të kthyer të gjithë elementët për një lloj kompensuese për një pajisje specifike.';

$GLOBALS["lang"]['To return all items for a component type. If you wanted all software you would use'] = 'Për të kthyer të gjithë elementët për një lloj komponenti. Nëse do të doje të gjitha programet do të përdorje';

$GLOBALS["lang"]['To reverse sort, insert a minus, thus'] = 'Për të kthyer llojin, fut një minus, kështu që';

$GLOBALS["lang"]['To run the test script on the target Windows PC'] = 'Për të kryer skenarin e testimit në Windows PC objektiv';

$GLOBALS["lang"]['To select devices to be integrated, we use nmis_manage = y, but you might like (for example) type = router. You can also use a Group or Query if you prefer something more complex.'] = 'Për të zgjedhur pajisjet për t\'u integruar, përdorim nmis_menage = y, por mund t\'ju pëlqejë (për shembull) lloji = udhëzues. Mund të përdorësh edhe një grup ose një kërkesë nëse preferon diçka më komplekse.';

$GLOBALS["lang"]['To sort by a database column, use'] = 'Për të renditur nga një kollonë databazë, përdor';

$GLOBALS["lang"]['To use this Enterprise feature, you first need to create your user in Open-AudIT as per usual. Assigning a password is not necessary. You do have to assign Roles and Orgs. The username in Open-AudIT should match the Entra <i>preferred username</i> attribute. There is no need for a Full Name or Email - these will be populated from Entra. If you do not know your users <i>preferred username</i>, fear not. You can create the new Auth Method in Open-AudIT and the Enterprise Application in Entra and when a user attempts to sign-on to Open-AudIT without a pre-existing user, check the logs and you will see their <i>preferred username</i> logged for your convienence.'] = 'Për të përdorur këtë funksion, së pari duhet të krijoni përdoruesin tuaj në Open-AudIT si zakonisht. Nuk është e nevojshme të caktohet fjalëkalimi. Duhet të caktosh Role dhe Orgs. Përdoruesi në Open-AudIT duhet të përputhet me Entra <i>Përdoruesi</i> Atributi. Nuk ka nevojë për një emër ose email të plotë - këto do të popullohen nga Entra. Nëse nuk i njihni përdoruesit tuaj <i>Përdoruesi</i>, mos kini frikë. Ju mund të krijoni metodën e re të Autus-it në Open-AudIT dhe Programin e Ndërmarrjes në Entra dhe kur një përdorues përpiqet të nënshkruajë-në Open-AudIT pa një përdorues para-ekzistues, kontrollon shkrimet dhe do t\'i shohësh ato <i>Përdoruesi</i> U lidh për konviencën tënde.';

$GLOBALS["lang"]['To use this Enterprise feature, you first need to create your user in Open-AudIT as per usual. Assigning a password is not necessary. You do have to assign Roles and Orgs. The username in Open-AudIT should match the OKTA <i>name</i> attribute. There is no need for a Full Name or Email - these will be populated from OKTA. If you do not know your users <i>name<i>, fear not. You can create the new Auth Menthod in Open-AudIT and the Application in OKTA and when a user attempts to sign-on to Open-AudIT without a pre-existing user, check the logs and you will see their <i>name<i> logged for your convienence.<br></p><p>Then create a new Auth method in Open-AudIT by going to menu -> Admin -> Auth Methods -> Create Auth. Provide a name and set the <i>type</i> to Okta.'] = 'Për të përdorur këtë funksion, së pari duhet të krijoni përdoruesin tuaj në Open-AudIT si zakonisht. Nuk është e nevojshme të caktohet fjalëkalimi. Duhet të caktosh Role dhe Orgs. Përdoruesi në Open-AudIT duhet të përputhet me OKTA <i>Emri</i> Atributi. Nuk ka nevojë për një emër apo email të plotë - këto do të popullohen nga OKTA. Nëse nuk i njihni përdoruesit tuaj <i>Emri<i>, mos kini frikë. Mund të krijoni Auth Menthod të ri në Open-AudIT dhe aplikimin në OKTA dhe kur një përdorues përpiqet të nënshkruajë-në për të Open-AudIT pa një përdorues para-ekzistues, të kontrollojë trungjet dhe do të shihni të tyren <i>Emri<i> U lidh për konviencën tënde.<br/><p>Pastaj krijo një metodë të re të autorizimit në Open-AudIT duke shkuar tek menu -> Admin -> Metodat e autorizimit -> Krijo Auth. Jep një emër dhe cakto emrin <i>lloji</i> Në Okta.</p></i></i></i></i>';

$GLOBALS["lang"]['To use this feature you must enable the configuration items match_mac (for AWS) and match_hostname (for Azure). This will be done automatically the first time a cloud discovery is executed. For more on Open-AudITs matching rules see HERE: Matching Devices'] = 'Për të përdorur këtë funksion duhet të aktivoni lidhjen e elementëve të konfigurimit_mac (për AWS) dhe emrin _host (për Azure). Kjo do të bëhet automatikisht herën e parë që ekzekutohet një zbulim resh. Për më shumë në rregullat korresponduese Open-Audities shohin HERE: Diskimet kompakte';

$GLOBALS["lang"]['To view the details of a query, the standard URL structure of /open-audit/index.php/queries/{$id} should be used.'] = 'Për të parë detajet e një kërkese, struktura standart URL e /hapur-autdit/index. pp/queries/{$id} duhet përdorur.';

$GLOBALS["lang"]['Togo'] = 'Togo';

$GLOBALS["lang"]['Tokelau'] = 'Tokelau';

$GLOBALS["lang"]['Tonga'] = 'Tonga';

$GLOBALS["lang"]['toolbar_style'] = 'Stili i panelit të instrumentëve';

$GLOBALS["lang"]['Toolbar Style'] = 'Stili i panelit të instrumentëve';

$GLOBALS["lang"]['Top Nmap TCP Ports'] = 'Portat e Nmap TCP';

$GLOBALS["lang"]['Top Nmap TCP Ports. The top 10, 100, 1000 ports to scan as per Nmaps &quot;top ports&quot; options.'] = 'Top Nmap TCP Ports. 10, 100, 1000 porte për të skanuar si mundësi të Nepts "top porte."';

$GLOBALS["lang"]['Top Nmap UDP Ports'] = 'Portat e Nmap UDP';

$GLOBALS["lang"]['Top Nmap UDP Ports. The top 10, 100, 1000 ports to scan as per Nmaps &quot;top ports&quot; options.'] = 'Top Nmap UDP Ports. 10, 100, 1000 porte për të skanuar si mundësi të Nepts "top porte."';

$GLOBALS["lang"]['Traditional Chinese'] = 'Kineze tradicionale';

$GLOBALS["lang"]['Traffic Light'] = 'Drita e trafikut';

$GLOBALS["lang"]['Trinidad and Tobago'] = 'Trinidad dhe Tobago';

$GLOBALS["lang"]['Troubleshooting'] = 'Tavoleta';

$GLOBALS["lang"]['Troubleshooting LDAP Logins'] = 'Duke goditur hyrjen LDAP';

$GLOBALS["lang"]['Try Open-AudIT Enterprise, on us without a time limit. All the features of Enterprise. Limited to 20 devices.'] = 'Provo Open-AudIT Kompania, në ne pa një kufi kohor. Të gjitha veçoritë e kompanisë. I kufizuar në 20 pajisje.';

$GLOBALS["lang"]['Try all the latest features with a FREE 100 device license of Open-AudIT Enterprise. Please read the '] = 'Provo të gjitha veçoritë më të fundit me një liçensë 100 pajisjesh FREE të Ndërmarrjes Open-AudIT. Ju lutemi të lexoni ';

$GLOBALS["lang"]['Try logging in using an LDAP user. We are assuming this will fail (otherwise, why are you still reading this?). Next, comment out the line from ther file above.'] = 'Përpiqu të futesh duke përdorur një përdorues LDAP. Ne mendojmë se kjo do të dështojë. Pastaj komento radhën nga file sipër.';

$GLOBALS["lang"]['Tuesday'] = 'E martë';

$GLOBALS["lang"]['Tunisia'] = 'Tunizia';

$GLOBALS["lang"]['Turkey'] = 'Turqia';

$GLOBALS["lang"]['Turkish'] = 'Turqisht';

$GLOBALS["lang"]['Turkmenistan'] = 'Turkmenia';

$GLOBALS["lang"]['Turks and Caicos Islands'] = 'Turqit dhe ishujt Kaikos';

$GLOBALS["lang"]['Tuvalu'] = 'Tuvalu';

$GLOBALS["lang"]['tx_bitrate'] = 'Tx Bitrate';

$GLOBALS["lang"]['Tx Bitrate'] = 'Tx Bitrate';

$GLOBALS["lang"]['tx_freq'] = 'Tx Freq';

$GLOBALS["lang"]['Tx Freq'] = 'Tx Freq';

$GLOBALS["lang"]['tx_level'] = 'Niveli Tx';

$GLOBALS["lang"]['Tx Level'] = 'Niveli Tx';

$GLOBALS["lang"]['tx_power'] = 'Tx';

$GLOBALS["lang"]['Tx Power'] = 'Tx';

$GLOBALS["lang"]['tx_profile'] = 'Profili Tx';

$GLOBALS["lang"]['Tx Profile'] = 'Profili Tx';

$GLOBALS["lang"]['type'] = 'Lloji';

$GLOBALS["lang"]['Type'] = 'Lloji';

$GLOBALS["lang"]['Type: This can be either a varchar (a text field) or a List (a list of values that can be selected).'] = 'Lloji: Kjo mund të jetë një varçar (një fushë teksti) ose një listë vlerash që mund të zgjidhen).';

$GLOBALS["lang"]['Types of Networks'] = 'Lloje rrjetesh';

$GLOBALS["lang"]['URL'] = 'URL';

$GLOBALS["lang"]['uuid'] = 'UUID';

$GLOBALS["lang"]['UUID'] = 'UUID';

$GLOBALS["lang"]['udp_ports'] = 'Portat Udp';

$GLOBALS["lang"]['Udp Ports'] = 'Portat Udp';

$GLOBALS["lang"]['Uganda'] = 'Ugandë';

$GLOBALS["lang"]['Ukraine'] = 'Ukrainë';

$GLOBALS["lang"]['Ukrainian'] = 'Ukrainase';

$GLOBALS["lang"]['Undergo Stage 1 audit (documentation review)'] = 'Auditimi i Fazës së Parë të Nëngos (shqyrtimi i dokumentimit)';

$GLOBALS["lang"]['Undergo Stage 2 audit (implementation review)'] = 'Auditimi i Fazës së Dytë (shqyrtimi i zbatimit)';

$GLOBALS["lang"]['Undergoing Analysis'] = 'Analizë e vazhdueshme';

$GLOBALS["lang"]['Unfiltered'] = 'Jo i plotë';

$GLOBALS["lang"]['uninstall'] = 'Uninstal';

$GLOBALS["lang"]['Uninstall'] = 'Uninstal';

$GLOBALS["lang"]['Uninstall the Agent'] = 'Uninstalo agjentin';

$GLOBALS["lang"]['United Arab Emirates'] = 'Emiratet e Bashkuara Arabe';

$GLOBALS["lang"]['United Kingdom'] = 'Mbretëria e Bashkuar';

$GLOBALS["lang"]['United States Minor Outlying Islands'] = 'Ishujt e Vogël në periferi të Shteteve të Bashkuara';

$GLOBALS["lang"]['United States Virgin Islands'] = 'Ishujt Virxhin të Shteteve të Bashkuara';

$GLOBALS["lang"]['United States of America'] = 'Shtetet e Bashkuara të Amerikës';

$GLOBALS["lang"]['Unknown'] = 'Nuk njihet';

$GLOBALS["lang"]['unlock_pin'] = 'Zhblloko Pinin';

$GLOBALS["lang"]['Unlock Pin'] = 'Zhblloko Pinin';

$GLOBALS["lang"]['Unscheduled'] = 'I paplanifikuar';

$GLOBALS["lang"]['Unused as at 5.2.0.'] = 'I papërdorur si 5.2.0.';

$GLOBALS["lang"]['Unused.'] = 'E papërdorur.';

$GLOBALS["lang"]['Update'] = 'Përditëso';

$GLOBALS["lang"]['update_external_count'] = 'Rifresko';

$GLOBALS["lang"]['Update External Count'] = 'Rifresko';

$GLOBALS["lang"]['update_external_from_internal'] = 'Rifresko nga i brendshëm';

$GLOBALS["lang"]['Update External From Internal'] = 'Rifresko nga i brendshëm';

$GLOBALS["lang"]['update_internal_count'] = 'Rifresko';

$GLOBALS["lang"]['Update Internal Count'] = 'Rifresko';

$GLOBALS["lang"]['update_internal_from_external'] = 'Përditëso nga jashtë';

$GLOBALS["lang"]['Update Internal From External'] = 'Përditëso nga jashtë';

$GLOBALS["lang"]['Update NMIS Devices from Open-AudIT'] = 'Përditëso pajisjet NMIS nga Open-AudIT';

$GLOBALS["lang"]['Update Open-AudIT Devices from '] = 'Rifresko Open-AudIT Dispozitivët nga ';

$GLOBALS["lang"]['Update Open-AudIT Devices from NMIS'] = 'Rifresko Open-AudIT Pajisje nga NMIS';

$GLOBALS["lang"]['Update Vulnerabilities'] = 'Përditësoni aftësitë';

$GLOBALS["lang"]['Update an attribute of a {collection} entry.'] = 'Rifresko a nga a.';

$GLOBALS["lang"]['Update attributes'] = 'Rifresko';

$GLOBALS["lang"]['Updated each time discovery has been executed with IPs detected to be responding.'] = 'Çdo herë që zbulohet se është ekzekutuar me IP, është zbuluar se po përgjigjet.';

$GLOBALS["lang"]['Updated each time discovery has been executed with IPs that have been scanned by Nmap.'] = 'Çdo zbulim i përditësuar është ekzekutuar me IP që janë skanuar nga Nep.';

$GLOBALS["lang"]['Updated each time discovery has been executed with devices we were able to audit.'] = 'Çdo zbulim i përditësuar është ekzekutuar me pajisje që mund t\'i kontrollonim.';

$GLOBALS["lang"]['Updated each time discovery has been executed with devices we were able to query.'] = 'Çdo zbulim i përditësuar është ekzekutuar me pajisje që mund t\'i kërkonim.';

$GLOBALS["lang"]['Updated each time discovery has been executed.'] = 'Çdo herë që zbulohet, është ekzekutuar.';

$GLOBALS["lang"]['Updated each time the discovery has been executed.'] = 'Çdo herë që ky zbulim është ekzekutuar.';

$GLOBALS["lang"]['Updated each time the discovery has completed execution.'] = 'Çdo herë që zbulimi ka përfunduar ekzekutimin.';

$GLOBALS["lang"]['Updating'] = 'Duke rifreskuar të dhënat';

$GLOBALS["lang"]['Upgrade'] = 'Përditëso';

$GLOBALS["lang"]['Upload an audit result file'] = 'Ngarko një file';

$GLOBALS["lang"]['Upper Case'] = 'E sipërme';

$GLOBALS["lang"]['uptime'] = 'Përditëso';

$GLOBALS["lang"]['Uptime'] = 'Përditëso';

$GLOBALS["lang"]['Urdu'] = 'Urdu';

$GLOBALS["lang"]['url'] = 'Url';

$GLOBALS["lang"]['Url'] = 'Url';

$GLOBALS["lang"]['Uruguay, Eastern Republic of'] = 'Uruguai, Republika Lindore e';

$GLOBALS["lang"]['usb'] = 'Usb';

$GLOBALS["lang"]['Usb'] = 'Usb';

$GLOBALS["lang"]['use'] = 'Përdoruesi';

$GLOBALS["lang"]['Use'] = 'Përdoruesi';

$GLOBALS["lang"]['use_authentication'] = 'Identifikimi dështoi';

$GLOBALS["lang"]['Use Authentication'] = 'Identifikimi dështoi';

$GLOBALS["lang"]['use_authorisation'] = 'Autorizimi i përdorimit';

$GLOBALS["lang"]['Use Authorisation'] = 'Autorizimi i përdorimit';

$GLOBALS["lang"]['Use Proxy'] = 'Proxy';

$GLOBALS["lang"]['Use SNMP'] = 'SNMP';

$GLOBALS["lang"]['Use SSH'] = 'SSH';

$GLOBALS["lang"]['Use Secure (LDAPS)'] = 'Përdor siguri (LDAPs)';

$GLOBALS["lang"]['Use Service Version Detection'] = 'Përdor Deteksionin e Shërbimit';

$GLOBALS["lang"]['Use Service Version Detection. When a detected port is detected as open, if set to <i>y</i>, Nmap will query the target device in an attempt to determine the version of the service running on this port.<br>This can be useful when identifying unclassified devices. This was not previously used.'] = 'Përdor Deteksionin e Shërbimit Version. Kur një port i zbuluar është zbuluar si i hapur, nëse caktuar <i>p</i>, Nmap do të kërkojë pajisjen objektive në një përpjekje për të përcaktuar versionin e shërbimit në këtë port.<br/>Kjo mund të jetë e dobishme kur identifikojmë pajisjet e panjohura. Kjo nuk u përdor më parë.';

$GLOBALS["lang"]['Use WMI'] = 'Përdor VMI';

$GLOBALS["lang"]['Use a <i>Sign-in method</i> of OIDC - OpenID Connect and an <i>Application Type</i> of Web Application. Click <i>Next</i>.'] = 'Përdor a <i>Metodë e firmave</i> nga OIDC - OpenID Connect and a <i>Lloji i aplikativit</i> nga Web Program. Klik <i>Në vazhdim</i>.';

$GLOBALS["lang"]['Use for Authentication'] = 'Përdorimi i identifikimit';

$GLOBALS["lang"]['Use for Roles'] = 'Përdore për role';

$GLOBALS["lang"]['Use the standard install options when displayed and click the <i>I Agree</i>, <i>Next</i> and <i>Install</i> buttons to install Nmap.'] = 'Përdor opsionet standartë të instalimit kur shfaqet dhe kliko tek <i>Unë pajtohem</i>. <i>Në vazhdim</i> dhe <i>_Instalo</i> Pulsantët për të instaluar Nmap.';

$GLOBALS["lang"]['used'] = 'Përdore';

$GLOBALS["lang"]['Used'] = 'Përdore';

$GLOBALS["lang"]['used_count'] = 'Numërimi i përdorur';

$GLOBALS["lang"]['Used Count'] = 'Numërimi i përdorur';

$GLOBALS["lang"]['Used by OpenLDAP only.'] = 'Përdoret vetëm nga OpenLDAP.';

$GLOBALS["lang"]['Used internally when discovering a single device.'] = 'Përdoret brenda vendit kur zbuloi një pajisje të vetme.';

$GLOBALS["lang"]['Used internally when discovering a single device. Links to <code>devices.id</code>.'] = 'Përdoret brenda vendit kur zbuloi një pajisje të vetme. Lidhje me <code>devices.id</code>.';

$GLOBALS["lang"]['Used when LDAP servers have been configured to populate a users details - this includes the Orgs to which they have access. If a user is in this LDAP group, they are assigned this org.'] = 'Përdoret kur server-ët LDAP janë konfiguruar për të popullarizuar detajet e përdoruesve - kjo përfshin Orgs në të cilin ata kanë hyrje. Nëse një përdorues është në këtë grup LDAP, ky org është caktuar.';

$GLOBALS["lang"]['Used when LDAP servers have been configured to populate a users details - this includes the Roles which they are assigned. If a user is in this LDAP group, they are assigned this role.'] = 'Përdoret kur server-ët LDAP janë konfiguruar për të popullarizuar detajet e përdoruesve - kjo përfshin rolet që u janë caktuar. Nëse një përdorues është në këtë grup LDAP, u është caktuar ky rol.';

$GLOBALS["lang"]['Used when searching OpenLDAP to match a users uid to a groups members. Default of <code>memberUid</code>. Used by OpenLDAP only.'] = 'Përdoret kur kërkonte OpenLDAP për t\'iu përshtatur një përdoruesi uid anëtarëve të një grupi. E paracaktuar <code>memberUid</code>. Përdoret vetëm nga OpenLDAP.';

$GLOBALS["lang"]['Used with Integrations and FirstWave monitoring applications.'] = 'Përdorur me integrime dhe aplikime mbikqyrëse FirstWave.';

$GLOBALS["lang"]['Used with Integrations and FirstWave monitoring applications. Set to y if working SNMP detected by discovery.'] = 'Përdorur me integrime dhe aplikime mbikqyrëse FirstWave. Vendos tek ju nëse punon SNMP zbuluar nga zbulimi.';

$GLOBALS["lang"]['user'] = 'Përdoruesi';

$GLOBALS["lang"]['User'] = 'Përdoruesi';

$GLOBALS["lang"]['User DN'] = 'Përdoruesi DN';

$GLOBALS["lang"]['user_group'] = 'Grupi i përdoruesit';

$GLOBALS["lang"]['User Group'] = 'Grupi i përdoruesit';

$GLOBALS["lang"]['user_id'] = 'ID e përdoruesit';

$GLOBALS["lang"]['User ID'] = 'ID e përdoruesit';

$GLOBALS["lang"]['user_interaction'] = 'Përdoruesi';

$GLOBALS["lang"]['User Interaction'] = 'Përdoruesi';

$GLOBALS["lang"]['User Membership Attribute'] = 'Anëtarësimi në përdorim';

$GLOBALS["lang"]['user_name'] = 'Emri i përdoruesit';

$GLOBALS["lang"]['User Name'] = 'Emri i përdoruesit';

$GLOBALS["lang"]['User Policies'] = 'Politikat e përdoruesit';

$GLOBALS["lang"]['Username'] = 'Përdoruesi';

$GLOBALS["lang"]['username'] = 'Përdoruesi';

$GLOBALS["lang"]['users'] = 'Përdorues';

$GLOBALS["lang"]['Users'] = 'Përdorues';

$GLOBALS["lang"]['Users work similar to Netstat Ports. If a user exists with a matching name, status and password details (changeable, expires, required) then the policy passes.'] = 'Përdoruesit punojnë të ngjashëm me Netstat Ports. Nëse një përdorues ekziston me një emër, status dhe hollësi fjalëkalimi (të ndryshueshme, skadon, kërkohet) atëhere politika kalon.';

$GLOBALS["lang"]['Users, Roles and Orgs'] = 'Përdorues, role dhe orga';

$GLOBALS["lang"]['Uses the CodeIgniter PHP Framework.'] = 'Përdor Kuadrin e Kodit PHP.';

$GLOBALS["lang"]['Using'] = 'Përdorimi';

$GLOBALS["lang"]['Using Entra for Auth'] = 'Përdorin një listë për t\'u pranuar';

$GLOBALS["lang"]['Using LDAPS'] = 'Duke përdorur LDAPS';

$GLOBALS["lang"]['Using OKTA for Auth'] = 'Duke përdorur një OKTA për t\'u pranuar';

$GLOBALS["lang"]['Using the format option is useful when using a web browser but you wish to see the result in JSON format. Adding format=json achieves this. Normally a web browser will set its accept header to HTML, so in that case, we return the rendered page. Using an API to retrieve JSON you should set the accept header to'] = 'Përdorimi i opsionit të formatit është i dobishëm kur përdoret një shfletues web por dëshiron të shohësh rezultatin në formatin JSON. Duke shtuar formatin=json arrin këtë. Normalisht një shfletues web do të vendosë kreun e vet të pranuar në HTML, kështu që në këtë rast, ne kthejmë faqen e përkthyer. Duke përdorur një API për të marrë JSON ju duhet të vendosni header e pranuar';

$GLOBALS["lang"]['Usually Mbs, from Location A.'] = 'Zakonisht nga vendi A.';

$GLOBALS["lang"]['Usually Mbs, from Location B.'] = 'Zakonisht Mbs, nga vendi B.';

$GLOBALS["lang"]['Usually Mbs, to Location A.'] = 'Zakonisht Mbs, në vendndodhjen A.';

$GLOBALS["lang"]['Usually Mbs, to Location B.'] = 'Zakonisht Mbs, në vendndodhjen B.';

$GLOBALS["lang"]['Usually should be set to 3.'] = 'Zakonisht duhet vendosur në 3.';

$GLOBALS["lang"]['Uzbekistan'] = 'Uzbekistan';

$GLOBALS["lang"]['VLAN'] = 'LAN';

$GLOBALS["lang"]['VLAN ID'] = 'ID VLAN';

$GLOBALS["lang"]['valid_from'] = 'Vlefshmëria nga';

$GLOBALS["lang"]['Valid From'] = 'Vlefshmëria nga';

$GLOBALS["lang"]['valid_from_raw'] = 'Vlefshëm nga i papërpunuar';

$GLOBALS["lang"]['Valid From Raw'] = 'Vlefshëm nga i papërpunuar';

$GLOBALS["lang"]['valid_to'] = 'Për';

$GLOBALS["lang"]['Valid To'] = 'Për';

$GLOBALS["lang"]['valid_to_raw'] = 'E vlefshme';

$GLOBALS["lang"]['Valid To Raw'] = 'E vlefshme';

$GLOBALS["lang"]['Valid Values'] = 'Vlerat e vlefshme';

$GLOBALS["lang"]['value'] = 'Vlera';

$GLOBALS["lang"]['Value'] = 'Vlera';

$GLOBALS["lang"]['Value Types'] = 'Lloji i vlerës';

$GLOBALS["lang"]['values'] = 'Vlerat';

$GLOBALS["lang"]['Values'] = 'Vlerat';

$GLOBALS["lang"]['Values: In the case of a <i>list</i> field, this should be a comma separated list of valid values.'] = 'Vlerat: Në rastin e një <i>lista</i> fushë, kjo duhet të jetë një listë e ndarë e vlerave të vlefshme.';

$GLOBALS["lang"]['Vanuatu'] = 'Vanuatu';

$GLOBALS["lang"]['VarChar'] = 'VarChar';

$GLOBALS["lang"]['Varchar'] = 'Varhar';

$GLOBALS["lang"]['variable'] = 'E ndryshueshme';

$GLOBALS["lang"]['Variable'] = 'E ndryshueshme';

$GLOBALS["lang"]['Various'] = 'Të ndryshme';

$GLOBALS["lang"]['vendor'] = '_Shitësi';

$GLOBALS["lang"]['Vendor'] = '_Shitësi';

$GLOBALS["lang"]['Vendor Report'] = 'Raporti i mbikëqyrësve';

$GLOBALS["lang"]['vendors'] = '_Shitësi';

$GLOBALS["lang"]['Vendors'] = '_Shitësi';

$GLOBALS["lang"]['Venezuela'] = 'Venezuelë';

$GLOBALS["lang"]['Version'] = 'Versioni';

$GLOBALS["lang"]['version_padded'] = 'Versioni';

$GLOBALS["lang"]['Version Padded'] = 'Versioni';

$GLOBALS["lang"]['version_raw'] = 'Versioni';

$GLOBALS["lang"]['Version Raw'] = 'Versioni';

$GLOBALS["lang"]['version_string'] = 'Versioni';

$GLOBALS["lang"]['Version String'] = 'Versioni';

$GLOBALS["lang"]['video'] = 'Dërgo video';

$GLOBALS["lang"]['Video'] = 'Dërgo video';

$GLOBALS["lang"]['Vietnam'] = 'Vietnam';

$GLOBALS["lang"]['Vietnamese'] = 'Vietnameze';

$GLOBALS["lang"]['View'] = 'Shfaq';

$GLOBALS["lang"]['View All'] = 'Paraqitja Gjithçka';

$GLOBALS["lang"]['View Details'] = 'Shiko hollësitë';

$GLOBALS["lang"]['View Device'] = '_Shfaq mesazhet';

$GLOBALS["lang"]['View Discovery'] = 'Shfaq';

$GLOBALS["lang"]['View Policy'] = '_Shfaq politikën';

$GLOBALS["lang"]['View Racks'] = 'Shfaq Racks';

$GLOBALS["lang"]['View the'] = 'Shfaq';

$GLOBALS["lang"]['View the discovery in question, then click the Support button in the top right toolbar. This will provide the discovery settings, config items, the discovery device list as well as the logs for this particular discovery.'] = 'Shiko zbulimin në fjalë, pastaj kliko butonin mbështetës në panelin e djathtë të instrumentëve. Kjo do të sigurojë rregullimet e zbulimit, elementët e konfigurimit, listën e pajisjeve zbuluese si dhe shkrimet për këtë zbulim të veçantë.';

$GLOBALS["lang"]['View the release notes on the'] = 'Shiko shënimet e lëshuara';

$GLOBALS["lang"]['Virtual Private Network'] = 'Rrjeti Virtual Privat';

$GLOBALS["lang"]['Virtual private network'] = 'Rrjet privat virtual';

$GLOBALS["lang"]['Virtualisation'] = 'Virtualizimi';

$GLOBALS["lang"]['Visit our YouTube channel for instructional videos.'] = 'Vizitoni kanalin tonë të YouTube për videot me udhëzime.';

$GLOBALS["lang"]['vlan'] = 'Vlan';

$GLOBALS["lang"]['Vlan'] = 'Vlan';

$GLOBALS["lang"]['vlan_id'] = 'ID Vlan';

$GLOBALS["lang"]['Vlan ID'] = 'ID Vlan';

$GLOBALS["lang"]['vm'] = 'Vm';

$GLOBALS["lang"]['Vm'] = 'Vm';

$GLOBALS["lang"]['vm_device_id'] = 'ID e dispozitivit Vm';

$GLOBALS["lang"]['Vm Device ID'] = 'ID e dispozitivit Vm';

$GLOBALS["lang"]['vm_group'] = 'Grupi Vm';

$GLOBALS["lang"]['Vm Group'] = 'Grupi Vm';

$GLOBALS["lang"]['vm_ident'] = 'Vm Ident';

$GLOBALS["lang"]['Vm Ident'] = 'Vm Ident';

$GLOBALS["lang"]['vm_server_name'] = 'Emri i serverit Vm';

$GLOBALS["lang"]['Vm Server Name'] = 'Emri i serverit Vm';

$GLOBALS["lang"]['vm_vendor'] = 'Vm Vendor';

$GLOBALS["lang"]['Vm Vendor'] = 'Vm Vendor';

$GLOBALS["lang"]['vuln_status'] = 'Vuln Gjendja';

$GLOBALS["lang"]['Vuln Status'] = 'Vuln Gjendja';

$GLOBALS["lang"]['vulnerabilities'] = 'Vulnerability';

$GLOBALS["lang"]['Vulnerabilities'] = 'Vulnerability';

$GLOBALS["lang"]['vulnerabilities_cache'] = 'Kaçapja e krizave';

$GLOBALS["lang"]['Vulnerabilities Cache'] = 'Kaçapja e krizave';

$GLOBALS["lang"]['Vulnerabilities and Results'] = 'Dobitë dhe rezultatet';

$GLOBALS["lang"]['Vulnerabilities initially published before 1st January, 2025 (by default). We see no sense in returning vulnerabilities from years prior. This can be changed in the configuration.'] = 'Vulnerabilityes filluar botuar para 1 janarit, 2025 (për falimentim). Ne nuk shohim asnjë kuptim në kthimin e dobësive nga vite më parë. Kjo mund të ndryshohet në konfigurim.';

$GLOBALS["lang"]['vulnerability_id'] = 'ID e patundshmërisë';

$GLOBALS["lang"]['Vulnerability ID'] = 'ID e patundshmërisë';

$GLOBALS["lang"]['Vulnerability Status'] = 'Gjendja e patundshmërisë';

$GLOBALS["lang"]['WARNING - When creating a baseline using software policies, at present Centos and RedHat package the kernel using the names <i>kernel</i> and <i>kernel-devel</i>. There can be multiple packages with this name and different versions concurrently installed. Debian based distributions use names like <i>linux-image-3.13.0-24-generic</i>, note the version number is included in the package name. Because RedHat based operating systems use this format and subsequently have multiple identical package names with different versions we currently exclude <i>kernel</i> and <i>kernel-devel</i> from software policies. This may be addressed in a future update.'] = 'KUJDES - Kur krijojnë një linjë bazë duke përdorur politikat e programeve kompjuterike, tani Centos dhe Red Hat paketojnë kokrrat duke përdorur emrat <i>kokrra</i> dhe <i>fara</i>. Mund të ketë shumë paketa me këtë emër dhe versione të ndryshme të instaluara njëkohësisht. Shpërndarja e bazuar në Debian përdor emra si <i>linux-image-3.13.0-24-generik</i>, vër re se numri i versionit përfshihet në emrin e paketës. Sepse sistemet operative me bazë RedHat përdorin këtë format dhe më pas kanë emra identikë të paketës me versione të ndryshme që ne aktualisht i përjashtojmë <i>kokrra</i> dhe <i>fara</i> Nga politikat e programeve. Kjo mund të trajtohet në të ardhmen.';

$GLOBALS["lang"]['WHERE'] = 'KU';

$GLOBALS["lang"]['WMI Credentials Requirements'] = 'VMI kërkon kërkesa';

$GLOBALS["lang"]['Wait for it to complete, then paste in this next line to install the Agent.'] = 'Prit që të përfundojë, pastaj ngjit në rreshtin tjetër për të instaluar agjentin.';

$GLOBALS["lang"]['wall_port'] = 'Wall Port';

$GLOBALS["lang"]['Wall Port'] = 'Wall Port';

$GLOBALS["lang"]['Wallis and Futuna'] = 'Uollis dhe Futuna';

$GLOBALS["lang"]['Want to know more?'] = 'Do të dish më shumë?';

$GLOBALS["lang"]['Warning'] = 'Kujdes:';

$GLOBALS["lang"]['warranty'] = 'Trashtë';

$GLOBALS["lang"]['Warranty'] = 'Trashtë';

$GLOBALS["lang"]['warranty_duration'] = 'Kohëzgjatja e luftës';

$GLOBALS["lang"]['Warranty Duration'] = 'Kohëzgjatja e luftës';

$GLOBALS["lang"]['warranty_expires'] = 'Skadimi i luftës';

$GLOBALS["lang"]['Warranty Expires'] = 'Skadimi i luftës';

$GLOBALS["lang"]['warranty_status'] = 'Gjendja luftarake';

$GLOBALS["lang"]['Warranty Status'] = 'Gjendja luftarake';

$GLOBALS["lang"]['warranty_type'] = 'Lloj lufte';

$GLOBALS["lang"]['Warranty Type'] = 'Lloj lufte';

$GLOBALS["lang"]['We also have an option to Ping Before Scan (important for routers with long lived ARP caches). This is usually a good idea.'] = 'Ne gjithashtu kemi një mundësi për Ping para Skanimit (që është e rëndësishme për udhëtarët me depo të gjata të jetesës ARP). Zakonisht kjo është ide e mirë.';

$GLOBALS["lang"]['We also have our action items (which are executed in the order below):'] = 'Ne gjithashtu kemi elementët tanë të veprimit (që ekzekutohen sipas radhës së mëposhtme):';

$GLOBALS["lang"]['We are often asked this question and the answer most definitely is <i>it depends</i>. It depends on the number of IPs to be scanned, the network connection speed, the speed of the devices being scanned, the type of devices being scanned, the number of different credentials being tested and the speed of the Open-AudIT server. We do not have a calculator that would allow us to input those variables and return a value. It is simply too complex. Generally I limit my discoveries to 256 IP addresses - ie, a /24 subnet. We have had customers scan /16 subnets (65k addresses) and it does work - but it can take a long time. You are much better off scanning in /24 blocks. If you simply do not know what your address ranges are, then this is a good case for a Seed discovery.'] = 'Shpesh na bëhet kjo pyetje dhe përgjigjja më e qartë është <i>Varet</i>. Varet nga numri i IP-ve që do skanohen, shpejtësia e lidhjes në rrjet, shpejtësia e pajisjeve që skanohen, lloji i pajisjeve që skanohen, numri i kredencialeve të ndryshme që po testohen dhe shpejtësia e serverit Open-AudIT. Ne nuk kemi nje kalkulator qe do te na lejoje te fusim keto variabla dhe te kthejme nje vlere. Është thjesht tepër komplekse. Në përgjithësi, i kufizoj zbulimet e mia në 256 adresa IP - ie, një subnet /24. Kemi pasur klientë që skanojnë /16 subnets ( adresat 65k) dhe funksionon - por mund të duhet një kohë e gjatë. Ju jeni shumë më mirë jashtë skanimit në /24 blloqe. Nëse thjesht nuk e di cila është vija juaj e adresës, atëherë ky është një rast i mirë për zbulimin e Farës.';

$GLOBALS["lang"]['We have more detailed instructions on'] = 'Kemi udhëzime më të hollësishme mbi';

$GLOBALS["lang"]['We have tests for:'] = 'Kemi teste për:';

$GLOBALS["lang"]['We hope you find Open-AudIT as useful as we do.'] = 'Ne shpresojmë që ju të gjeni Open-AudIT si të dobishme si ne.';

$GLOBALS["lang"]['We initially setup the default list of scripts with the default options. The list of script is viewable at /scripts. These default scripts cannot be deleted. You can create additional scripts for use by you as required. Your script will be based on one of the existing scripts and have custom options applied. The scripts can then be downloaded from the list page at menu: Discover -> Audit Scripts -> List Audit Scripts.'] = 'Ne fillimisht vendosim listën e prezgjedhur të script-eve me opsionet e prezgjedhura. Lista e script-it është e shikueshme në /scripts. Këta script-e të prezgjedhur nuk mund të fshihen. Mund të krijoni script-e shtesë për t\'u përdorur nga ju siç kërkohet. script-i juaj do të bazohet në një nga script-et ekzistuese dhe ka opcione të personalizuara të aplikuara. script-et mund të shkarkohen pastaj nga faqja e listës në menu: Discover -> Script-> Lista Audit.';

$GLOBALS["lang"]['We need some credentials to be able to effectively talk to the devices on your network.'] = 'Na duhen disa kredenciale për të qenë në gjendje të flasim me pajisjet në rrjetin tuaj.';

$GLOBALS["lang"]['We only send the minimum amount of data and nothing of a sensitive nature. We send our license data (name, type, etc), our application data (name, version, platform, timezone, etc), any logged errors, a count of device types and a count of the features used. <i>Any</i> environment has devices and that is the only piece of your data we send. And only the type of device and a count. Not the manufacturer, not the model. We send nothing special. No networks. No IP addresses. No OS versions. No software names. The UUID and Server fields are sha256 encoded (so we do not know the value). We send just the data we need to improve the product. We hope you see the benefit to all of us with this information. It will provide us guided direction on where to focus improvements and new features in the product.'] = 'Ne dërgojmë vetëm minimumin e të dhënave dhe asgjë të një natyre të ndjeshme. Dërgojmë të dhënat tona të liçencës (emri, lloji, etj), të dhënat tona të aplikativit (emri, versioni, platforma, zona orare, etj.), çdo gabim në hyrje, një numërim të llojeve të dispozitivit dhe një numër të karakteristikave të përdorura. <i>Asnjë</i> Mjedisi ka pajisje dhe kjo është e vetmja pjesë e të dhënave që dërgojmë. Dhe vetëm lloji i pajisjeve dhe numërimi. Jo prodhuesit, jo modelin. Nuk dërgojmë asgjë të veçantë. Jo rrjete. Nuk ka adresa IP. Asnjë version i OS. Nuk ka emra software. Fushat e UUID dhe të serverit janë të koduara la256 (pra nuk e dimë vlerën). Ne dërgojmë vetëm të dhënat që na duhen për të përmirësuar produktin. Shpresojmë që ju të shihni dobitë për të gjithë ne me këtë informacion. Ajo do të na japë drejtim të drejtpërdrejtë se ku të përqendrohemi përmirësimet dhe veçoritë e reja të produktit.';

$GLOBALS["lang"]['We tend to use the Google Chrome extension called Postman for testing actual restful queries. You might like to install and test with that.'] = 'Ne priremi të përdorim zgjatjen e Google Chrome të quajtur Postman për testimin e pyetjeve të vërteta të qeta. Ju mund të dëshironi të instaloni dhe të testoni me këtë.';

$GLOBALS["lang"]['Web'] = 'Web';

$GLOBALS["lang"]['Web Application Routes'] = 'Programi';

$GLOBALS["lang"]['Web Server Discovery'] = 'Informacione mbi serverin web';

$GLOBALS["lang"]['Webserver'] = 'Web';

$GLOBALS["lang"]['Website'] = 'Siti zyrtar';

$GLOBALS["lang"]['Wednesday'] = 'E mërkurë';

$GLOBALS["lang"]['weight'] = 'Pesha';

$GLOBALS["lang"]['Weight'] = 'Pesha';

$GLOBALS["lang"]['weight_current'] = 'Peshë Aktual';

$GLOBALS["lang"]['Weight Current'] = 'Peshë Aktual';

$GLOBALS["lang"]['weight_empty'] = 'Pesha bosh';

$GLOBALS["lang"]['Weight Empty'] = 'Pesha bosh';

$GLOBALS["lang"]['weight_max'] = 'Pesha Max';

$GLOBALS["lang"]['Weight Max'] = 'Pesha Max';

$GLOBALS["lang"]['Welcome'] = 'Mirësevini';

$GLOBALS["lang"]['Welcome Dashboard'] = 'Mirësevini në Dashboard';

$GLOBALS["lang"]['Welcome to'] = 'Mirësevini në';

$GLOBALS["lang"]['Western Sahara'] = 'Saharaja Perëndimore';

$GLOBALS["lang"]['What Can I Expect if I Have no Credentials'] = 'Ç\'mund të pres nëse nuk kam të meta';

$GLOBALS["lang"]['What about fields that I want from NMIS that are not in Open-AudIT? We have got you covered. Any fields in the external system (NMIS) that do not exist in Open-AudIT will be automatically created as Open-AudIT Custom fields.'] = 'Po fushat që unë dua nga NMIS që nuk janë në Open-AudIT? Të kemi mbuluar. Çdo fushë në sistemin e jashtëm (NMIS) që nuk ekziston në Open-AudIT do të krijohet automatikisht si Fusha të personalizuara Open-AudiTI.';

$GLOBALS["lang"]['What about other network devices? Think switches, routers, printers, etc. Obviously, it is best if you can provide some SNMP credentials for these devices. They only need <i>read-only</i> access. But if you do not want to do even that, there is nothing stopping you from running discovery, finding the devices, and making a rule or two to identify them (maybe use MAC Address prefix in combination with open ports, for example). You wont have much information, but you will know they are on the network, what they are, and when the last time they were seen was. You will also see if anything new appears on the network.'] = 'Po pajisjet tjera të rrjetit? Mendo ndryshimin, itineraret, printerat, etj. Sigurisht, është më mirë nëse mund të jepni disa kredenciale SNSMP për këto pajisje. Ata kanë nevojë vetëm <i>Në vetëm lexim</i> Hyrje. Por nëse nuk doni ta bëni këtë, nuk ka asgjë që t\'ju ndalojë nga zbulimi, gjetja e pajisjeve, dhe bërja e një rregulli ose e dy për t\'i identifikuar ato (mund të jetë duke përdorur adresën MAC preix në kombinim me portet e hapura, për shembull). Nuk ke shumë informacion, por do ta dish që janë në rrjet, çfarë janë, dhe kur u panë herën e fundit. Gjithashtu do të shihni nëse shfaqet ndonjë gjë e re në rrjet.';

$GLOBALS["lang"]['What do we send?'] = 'Çfarë do të dërgojmë?';

$GLOBALS["lang"]['What does this actually mean to you?'] = 'Çfarë do të thotë kjo për ty?';

$GLOBALS["lang"]['What is the purpose of this rack.'] = 'Cili është qëllimi i kësaj rafti.';

$GLOBALS["lang"]['What is the type of this location. Allowable types held in <code>attributes</code> table.'] = 'Çfarë është lloji i këtij pozicioni. në <code>attributes</code> Tavolina.';

$GLOBALS["lang"]['When Open-AudIT on Linux discovers a Windows machine, in order to execute a remote command we use'] = 'Kur Open-AudIT në Linux zbulon një makinë Windows, në mënyrë që të ekzekutojë një komandë remote ne përdorim';

$GLOBALS["lang"]['When Open-AudIT on Windows discovers a Windows machine, in order to execute a remote command we use'] = 'Kur Open-AudIT në Windows zbulon një makinë Windows, në mënyrë që të ekzekutojë një komandë remote ne përdorim';

$GLOBALS["lang"]['When Open-AudIT receives data about a device, either by discovering the device during an audit run or by the user importing the device, it must determine if this discovered device matches a device that already exists within its database, or if it is a new device that should be added. Open-AudIT uses a series of twelve property matches to determine this. The Match Rules work as OR comparisons, not AND. This means the first rule that matches a field in the discovered device to one in the dB resolves as an existing device. All Matching Rules have to fail in order for a device to be new and result in a new record being created.'] = 'Kur hap Aud IT merr të dhëna rreth një pajisjeje, duke zbuluar pajisjen gjatë një kontrolli a kontrolli ose nga përdoruesi importimi i dispozitivit, duhet të përcaktojë nëse kjo pajisje e zbuluar përputhet me një pajisje që ekziston tashmë brenda bazës së saj të të dhënave, ose nëse është një pajisje e re që duhet shtuar. Open-AudIT përdor një seri prej dymbëdhjetë ndeshjesh të pronës për të përcaktuar këtë. Rregullat e ndeshjeve funksionojnë si krahasime OSE, jo AND. Kjo do të thotë rregulli i parë që përputhet me një fushë në pajisjen e zbuluar me një të vendosur në dB si një pajisje ekzistuese. Të gjitha rregullat e ndeshjeve duhet të dështojnë në mënyrë që një pajisje të jetë e re dhe të rezultojë në krijimin e një rekordi të ri.';

$GLOBALS["lang"]['When POSTing data, you must include an access token. An access token is generated with every request type, so make a GET (for example) and Accept: application/json, parse the response for meta→access_token, and include that with your request. This should be placed in the field data[access_token], IE, the top level.'] = 'Kur të dhënat e POSTing, duhet të përfshini një shenjë hyrjeje. Një shenjë hyrje është krijuar me çdo lloj kërkese, kështu që bëj një GET (për shembull) dhe prano: aplikim/json, analizimin e përgjigjes për mundësit meta→, dhe përfshije atë me kërkesën tënde. Kjo duhet vendosur në fushën e të dhënave [açesi_token], IE, niveli më i lartë.';

$GLOBALS["lang"]['When a device is Discovered the audit script will be injected with the file (or directory) details. Both audit_linux.sh and audit_windows.vbs will be populated, regardless of the file path. If you are thinking <i>but putting a Linux path into a Windows machine will break things!</i>, it wont break, you just wont receive any data from that file or directory entry.<br>Retrieved details will be stored in the <i>file</i> database table and are stored like any other attribute. File details will be stored as any other attribute and generate alerts if any of the following attributes change - <i>full_name</i>, <i>hash</i>, <i>inode</i>, <i>last_changed</i>. The table contain a system_id, first_seen, last_seen and current columns as well as the file details.<br>Attributes recorded are:<br><ul><li>Windows - name, size, directory, SHA1 hash (of the file contents), last changed, permissions, owner, version (file permitting).</li><br><li>Linux - name, size, directory, SHA1 hash (of the file contents), last changed, meta data last changed, permissions, owner, group, inode.</li></ul>You will see a section in both the Windows and Linux audit scripts as below'] = 'Kur një dispozitiv të zbulohet script-i i kontrollit do të injektohet me detajet e file (ose directory). Si audit_linux.sh, ashtu edhe audit_al.vbs do të popullohen, pavarësisht nga shtegu i file. Nëse po mendon <i>Por vënia e një shtegu Linux në një makinë Windows do të thyejë gjëra!</i>, ajo nuk thyhet, ju thjesht nuk merrni ndonjë të dhënë nga ajo dosje apo hyrje directory.<br/>në <i>file</i> Tabela e të dhënave dhe ruhen si çdo atribut tjetër. Detajet e file do të ruhen si çdo atribut tjetër dhe do të gjenerojnë alarme nëse ndonjë nga atributet në vijim ndryshon - <i>E plotë</i>. <i>hash</i>. <i>inde</i>. <i>e fundit_ ndryshuar</i>. Tabela përmban një sistem_id, të parë_sen, të fundit dhe kollonat aktuale si dhe detajet e file.<br/>Veçoritë e regjistruara janë:<br/><ul><li>Emri, madhësia, directory, hashi SHA1 (e përmbajtjes së file), e fundit u ndryshua, e drejta, pronari, versioni.</li><br/><li>Emri - Linux, madhësia, directory, hash (e përmbajtjes së file), e fundit u ndryshua, e dhëna e fundit u ndryshua, e drejta, pronari, grupi, inode.</li></ul>Do të shihni një seksion në Windows dhe Linux si poshtë';

$GLOBALS["lang"]['When a discovery is run, the relevant discovery scan option is chosen and those settings are used by Nmap to scan the target devices.  The scan options determine which ports nmap scans, how fast they scan and whether or not nmap ping is first used to determine if the IP is live or not.'] = 'Kur zbulohet një zbulim, zgjidhet opsioni përkatës i skanimit dhe këto rregullime përdoren nga Nmap për të skanuar pajisjet objektive. Opsionet e skanimit përcaktojnë se cilat porte nmap skanojnë, sa shpejt skanohen dhe nëse fillimisht përdoret ping në hartë për të përcaktuar nëse IP është apo jo i gjallë.';

$GLOBALS["lang"]['When a discovery is run, the relevant discovery scan option is chosen and those settings used by Nmap to scan the target devices. If no option set is chosen, the default configuration item (discovery_default_scan_option) is selected and used. Open-AudIT Community will use the default options as per the configuration for all discoveries.'] = 'Kur zbulohet një zbulim, zgjidhet opsioni përkatës i skanimit dhe këto rregullime të përdorura nga Nmap për të skanuar pajisjet objektive. Nëse nuk është zgjedhur asnjë opsion, është zgjedhur dhe përdoret elementi i prezgjedhur i konfigurimit (Zbulimi_scan_option). Komuniteti Open-AudIT do të përdorë opsionet e prezgjedhura si për konfigurimin për të gjitha zbulimet.';

$GLOBALS["lang"]['When a subnet discovery is executed it first runs, if selected, an Nmap ping scan on the range or IP addresses. Any device responding will be port scanned. If an Nmap ping scan is not requested, each IP is individually port scanned. Which ports? That is determined by the'] = 'Kur një zbulim nëndetës zbatohet së pari, nëse zgjidhet, një skanim Nmap ping në interval ose adresa IP. Çdo pajisje që përgjigjet do të skanohet. Nëse nuk kërkohet një skanim Nmap ping, çdo IP skanohet individualisht. Cilat porte? Kjo është çështje e kryer!"';

$GLOBALS["lang"]['When auditing a Linux device via SSH, some Linux distributions do not allow sudo commands to be passed without a TTY (which we are doing). To completely audit one of these linux distributions it is best to supply the root user credentials. If no root is supplied and sudo without a TTY is not possible, the audit script will be run but will not contain the amount of data as would otherwise. Subsequent audits using root (or run locally using sudo) will therefore provide extra details about the system and generate several <i>changes</i>.'] = 'Kur kontrollohet një pajisje Linux nëpërmjet SSH, disa shpërndarje të Linux nuk lejojnë që komandat sudo të kalojnë pa TTY (të cilat po i bëjmë). Për të kontrolluar plotësisht një nga këto shpërndarje linux është më mirë të furnizojmë kredencialet bazë të përdoruesit. Nëse nuk jepet root dhe sudo pa TTY nuk është e mundur, script-i i kontrollit do të zbatohet por nuk do të përmbajë sasinë e të dhënave siç do të ishte ndryshe. Auditimet pasuese duke përdorur rrënjë (ose duke përdorur sudo) do të sigurojnë kështu hollësi shtesë rreth sistemit dhe do të gjenerojnë disa <i>Kryej</i>.';

$GLOBALS["lang"]['When combining devices, which system is the authoritative source for information.'] = 'Kur kombinohen pajisjet, cili sistem është burimi i autoritetit për informacionin.';

$GLOBALS["lang"]['When complete, close the command window and you are done!'] = 'Kur të përfundojë, mbyll dritaren e komandës dhe mbaro!';

$GLOBALS["lang"]['When creating a widget, if you select the <i>Advanced</i> button you will have the ability to upload your own custom SQL.'] = 'Kur krijoni një widget, nëse zgjidhni <i>Të detajuara</i> Butoni ju do të keni aftësinë për të ngarkuar zakonin tuaj SQL.';

$GLOBALS["lang"]['When integrating devices from the external system, if the device doesnt exist in Open-AudIT should we create it?'] = 'Kur integrimi i pajisjeve nga sistemi i jashtëm, nëse dispozitivi nuk ekziston në Open-AudIT duhet ta krijojmë?';

$GLOBALS["lang"]['When integrating devices from the external system, if the device has been updated in the external system should we update it in Open-AudIT?'] = 'Kur integrohen paisjet nga sistemi i jashtëm, nëse dispozitivi është përditësuar në sistemin e jashtëm duhet ta përditësojmë atë në Open-AudIT?';

$GLOBALS["lang"]['When investigating a Discovery, support will request the Exported Discovery Logs. To retrieve these, go to menu -> Discoveries ->'] = 'Kur heton një zbulim, mbështetja do të kërkojë Discovery Logs të eksportuar. Për t\'i marrë këto, shko tek menuja -> Zbulimet ->';

$GLOBALS["lang"]['When matching a Linux based device, we prefer to use the Dbus id concatenated with the hostname. We can also use other options as per the below table, but we can retrieve the Dbus ID without root. To retrieve the UUID (from the motherboard), we need to run dmidecode, which does require root. Unfortunately, when you clone an ESXi guest, the Dbus ID does not get recreated - hence our concatenating this with the hostname. There is a good article linked here that details the <i>why</i> of hardware IDs.'] = 'Kur përputhim një pajisje të bazuar në Linux, preferojmë të përdorim identitetin Dbus me emrin e host. Gjithashtu mund të përdorim alternativa të tjera si për tavolinën e mëposhtme, por mund të marrim ID-në e Dbus-it pa rrënjë. Për të marrë UUID (nga tabela nënë), duhet të bëjmë dmidecod, që kërkon rrënjë. Për fat të keq, kur klononi një mysafir të ESXi, ID e Dbus-it nuk rikrijohet - kështu që ne po e lidhim këtë me emrin e host. Ka një artikull të mirë të lidhur këtu që detajon <i>Pse?</i> identitete hardware.';

$GLOBALS["lang"]['When requesting JSON, by default no limit is set. When requesting screen display, the limit is set to 1000 by default. This can be changed in the configuration. See the <i>page_size</i> item'] = 'Kur kërkon JSON, nuk është përcaktuar asnjë limit. Kur kërkon display në ekran, limiti është vendosur në 1000 sipas falimentimit. Kjo mund të ndryshohet në konfigurim. Shiko <i>madhësia</i> element';

$GLOBALS["lang"]['When retrieve an external device, should we run discovery upon it?'] = 'Kur marrim një pajisje të jashtme, duhet ta zbulojmë?';

$GLOBALS["lang"]['When running Open-AudIT on Windows the Apache service account must be that of a <i>regular</i> user (or the Administrator). This is because the <i>Local System</i> account normally used to run Apache has no access to any network resources. IE - We cannot use Apache when running as the Local System account account to copy the audit script to Windows PCs.'] = 'Kur funksionon Open-AudIT në Windows the Apache llogari duhet të jetë ajo e një <i>rregullisht</i> përdorues. Kjo është sepse <i>Sistemi lokal</i> Llogaria që përdoret normalisht për të drejtuar Apashët nuk ka asnjë mundësi për të hyrë në ndonjë rrjet. IE - Ne nuk mund të përdorim Apaçinë kur funksionon si llogari e sistemit lokal për të kopjuar shkrimin e kontrollit në PC Windows.';

$GLOBALS["lang"]['When the configuration option is set, we take this into account for devices for a certain defined subset of match rules where the configuration item has been enabled. These rules are:'] = 'Kur është përcaktuar opsioni i konfigurimit, ne e marrim parasysh këtë për pajisjet për një nëngrup të caktuar rregullash të ndeshjeve ku elementi i konfigurimit është aktivizuar. Këto rregulla janë:';

$GLOBALS["lang"]['When the rules run in discovery, any matching rules will appear in the discovery log. See below for an example.'] = 'Kur rregullat të jenë të zbuluara, çdo rregull që përputhet do të shfaqet në regjistrin e zbulimit. Shih më poshtë për një shembull.';

$GLOBALS["lang"]['When this benchmark is scheduled to be executed. Derived from the associated <code>tasks.type</code> and <code>tasks.sub_resource_id</code>.'] = 'Kur ky standart është planifikuar të ekzekutohet. Nga afër <code>tasks.type</code> dhe <code>tasks.sub_resource_id</code>.';

$GLOBALS["lang"]['When this log was created.'] = 'Kur u krijua ky logok.';

$GLOBALS["lang"]['When this queue item started processing.'] = 'Kur filloi proçesimi i këtij elementi në pritje.';

$GLOBALS["lang"]['When using Open-AudIT Professional or Enterprise, widgets are available and customisable to be displayed on Dashboards.'] = 'Kur përdoret Profesional apo Ndërmarrje Open-AudIT, widget janë të disponueshëm dhe të personalizuar për t\'u shfaqur në Dashboards.';

$GLOBALS["lang"]['When we are converting an internally selected device to an object for the external system, what should the external data be. EG: integer, string, etc.'] = 'Kur ne jemi duke konvertuar një dispozitiv të zgjedhur brenda vendit në një objekt për sistemin e jashtëm, cilat duhet të jenë të dhënat e jashtme. EG: i plotë, stringa, etj.';

$GLOBALS["lang"]['When we execute this baseline, should we check for items on devices that are not in a policy for this baseline.'] = 'Kur ta ekzekutojmë këtë bazë, duhet të kontrollojmë për gjëra që nuk janë në një politikë për këtë bazë.';

$GLOBALS["lang"]['When we receive an open port, should we attempt to test for the version of the service currently running upon it? This assists in confirming actual running services.'] = 'Kur marrim një port të hapur, a duhet të përpiqemi të provojmë për versionin e shërbimit që është duke u zhvilluar mbi të? Kjo ndihmon në konfirmimin e shërbimeve aktuale.';

$GLOBALS["lang"]['When you are using Clouds to discover your Amazon AWS instances, you will need two credential items - key and secret key. Your key should already be known to you and your secret key as well. Of note is that you cannot retrieve your secret key using the AWS Console provided by Amazon. If you have misplaced it, you will need to generate a new one.'] = 'Kur jeni duke përdorur re për të zbuluar rastet e Amazonës suaj, do t\'ju duhen dy sende të ndryshme: çelësi dhe çelësi i fshehtë. Çelësi yt duhet të jetë i njohur për ty dhe për çelësin tënd sekret. Është e dukshme se nuk mund ta marrësh çelësin tënd sekret duke përdorur Konsolën AWS të siguruar nga Amazona. Nëse e ke vënë në vend të gabuar, do të të duhet të gjenerosh një të ri.';

$GLOBALS["lang"]['When you are using Clouds to discover your Microsoft Azure instances, you will need four credential items - subscription id, tenant id, client id and client secret.'] = 'Kur jeni duke përdorur re për të zbuluar rastet tuaja të Microsoft Azure, do t\'ju duhen katër sende kredenciale - id, id tenant, id-i, id-i i klientit dhe sekreti i klientit.';

$GLOBALS["lang"]['When you create a discovery you have an option to devices_assigned_to_org. This means that any devices discovered for this discovery will be assigned (have <code>devices.org_id</code> set to) your chosen Organisation.'] = 'Kur krijoni një zbulim keni një opsion ndaj dispozitivit_aned_to_org. Kjo do të thotë se çdo mjet i zbuluar për këtë zbulim do të caktohet (kanë <code>devices.org_id</code> Vendosu tek Organizata jote e zgjedhur.';

$GLOBALS["lang"]['When you create a new discovery if you click the Advanced button, you have many more options to change, one of them being the type of discovery.Types have always been Subnet (encompassing the above range, subnet, ip options) and Active Directory. As at v4.1, Open-AudIT has a new discovery type called Seed.'] = 'Kur krijoni një zbulim të ri nëse klikoni butonin e avancuar, keni shumë mundësi të tjera për të ndryshuar, një prej tyre është lloji i zbulimit. Llojet kanë qenë gjithmonë Subnet (që përfshin gamën e mësipërme, subnet, ip opsionet) dhe Active Directory. Si në v4.1, Open-AudIT ka një lloj të ri zbulimi të quajtur Fara.';

$GLOBALS["lang"]['When you enable a Query to be run on a schedule, the query is emailed to your chosen address. You must have set up email via menu -> Admin -> Enterprise -> Email Config. We also have a <i>test email<i> button on that page. Input your details, save it and then test it. You should have a modal box that informs you if it successful or not and obviously a test email should arrive if it is successful. Once you have email configured, your scheduled query can be configured.<br><br>Provide a name, optional description, choose <i>Query</i> type, select the desired query, provide an email address, choose a format and set the schedule.<br><br>Provide an hour (hour only, no minutes as yet), give the task a name (this is not the name of the actual scheduled query itself), select which days you would like the query run, choose which query you would like run, supply an email address and choose a query format and you are done.<br>Queries will be sent with an email body of the query (in html format) and the query attached in the requested format.'] = 'Kur bën të mundur që një kërkesë të zbatohet në një program, kërkesa dërgohet me anë të postës email në adresën tuaj të zgjedhur. Duhet të keni vendosur një email nëpërmjet menusë -> Admin -> Enterprise -> Email Config. Ne gjithashtu kemi një <i>Testo email<i> Butoni në atë faqe. Futi detajet, ruaje dhe pastaj provoje. Duhet të keni një kuti modale që ju informon nëse ka sukses apo jo dhe padyshim një e-mail testi duhet të mbërrijë nëse është i suksesshëm. Pasi të keni konfiguruar e-mail-in, kërkesa juaj e planifikuar mund të konfiguruar.<br/><br/>a emri përshkrimi <i>Kërkesë</i> lloji dhe a.<br/><br/>Jep një orë (vetëm një orë, jo minuta akoma), jep një emër (ky nuk është emri i vetë kërkuarit të caktuar), zgjidh cilat ditë do të dëshironit të ekzekutonit, zgjidhni cilin kërkesë do të dëshironit të ekzekutonit, ofertë elektronike dhe zgjidhnit një format kërkese dhe keni mbaruar.<br/>Queries do të dërgohet me një trup email të kërkesës (në formatin html) dhe në formatin e kërkuar.</i></i>';

$GLOBALS["lang"]['When you enter text into one of the column headings, you can simply use a normal word. For example, when you enter <code>computer</code> into the search box above the <i>Type</i> column, the search will return all devices with the type of Computer. Essentially, Open-AudIT requests data using a URL like <code>devices?devices.type=computer</code>. Now there is one significant difference when using the dataTables search, versus the standard'] = 'Kur hyn në një nga titujt e kollonës, thjesht mund të përdorësh një fjalë normale. Për shembull, kur hyni <code>computer</code> në kutinë e kërkimit sipër <i>Lloji</i> Kolona, kërkimi do të kthejë të gjitha pajisjet me llojin e kompjuterit. Në thelb, Open-Aud IT kërkon të dhëna duke përdorur një URL si <code>devices?devices.type=computer</code>. Tani ka një ndryshim të rëndësishëm kur përdoret kërkimi i të dhënave, kundrejt standartit';

$GLOBALS["lang"]['where'] = 'Ku';

$GLOBALS["lang"]['Where'] = 'Ku';

$GLOBALS["lang"]['Where $x is a number. This many LDAP entries are in the DB and have been retrieved.'] = 'Ku x është një numër. Këto shumë hyrje LDAP janë në DB dhe janë tërhequr.';

$GLOBALS["lang"]['Where on the Device Details screen you would like to see this field appear.'] = 'Ku në ekran do të dëshironi të shihni këtë fushë.';

$GLOBALS["lang"]['Where the rack is in the row.'] = 'Ku është rafti në rresht.';

$GLOBALS["lang"]['Whether the vulnerability affects components beyond its own using Impact, Availability and Confidentiality.'] = 'Nëse cënueshmëria ndikon tek përbërësit përtej përdorimit të ndikimit, avalitetit dhe konfidencialitetit.';

$GLOBALS["lang"]['Whether user interaction is required (None, Passive, Active).'] = 'Nëse është i nevojshëm ndërveprimi me përdoruesin (asnjë, Pasive, aktiv).';

$GLOBALS["lang"]['Which OS this benchmark applies to.'] = 'Për të cilën zbatohet ky standart.';

$GLOBALS["lang"]['Which devices should Open-AudIT create from the external system (if any). Using All, None or a given Attribute.'] = 'Cilat pajisje duhet të krijojnë Open-AudIT nga sistemi i jashtëm (nëse ndonjë). Duke përdorur gjithçka, asnjë apo ndonjë veçori të caktuar.';

$GLOBALS["lang"]['Which network should we discover. This should be in the format of'] = 'Cilin rrjet duhet të zbulojmë. Kjo duhet të jetë në formatin e';

$GLOBALS["lang"]['Which sub-menu should we display this query in.'] = 'Në cilën nën-menu duhet ta shfaqim këtë kërkesë.';

$GLOBALS["lang"]['Who made this rack.'] = 'Kush e bëri këtë raft.';

$GLOBALS["lang"]['Why Windows Server Only?'] = 'Pse vetëm Server-i Dritaret?';

$GLOBALS["lang"]['Why do we exclude this policy?'] = 'Pse e përjashtojmë këtë politikë?';

$GLOBALS["lang"]['Wide Area Network'] = 'Rrjet i gjerë i zonave';

$GLOBALS["lang"]['Wide area network'] = 'Rrjet i gjerë zonash';

$GLOBALS["lang"]['Widget'] = '"Widget"';

$GLOBALS["lang"]['Widget #'] = '"Widget"';

$GLOBALS["lang"]['Widget # '] = '"Widget" ';

$GLOBALS["lang"]['Widget Type'] = 'Lloji "Widget"';

$GLOBALS["lang"]['widgets'] = '"Widget"';

$GLOBALS["lang"]['Widgets'] = '"Widget"';

$GLOBALS["lang"]['Widgets are designed to be used on Dashboards. Enterprise users have complete freedom to create, update and delete widgets as required.'] = '"Widgett" janë projektuar për t\'u përdorur në Dashboards. Përdoruesit e ndërmarrjeve kanë liri të plotë për të krijuar, përditësuar dhe eleminuar widget sipas nevojës.';

$GLOBALS["lang"]['width'] = 'Gjerësia';

$GLOBALS["lang"]['Width'] = 'Gjerësia';

$GLOBALS["lang"]['windows'] = 'Dritaret';

$GLOBALS["lang"]['Windows'] = 'Dritaret';

$GLOBALS["lang"]['Windows Packages'] = 'Paketat Dritaret';

$GLOBALS["lang"]['Windows Test Script'] = 'Script';

$GLOBALS["lang"]['Windows User Work Unit #1'] = 'Njësia e Punës së Përdoruesit Windows1';

$GLOBALS["lang"]['Windows User Work Unit #2'] = 'Njësia e Punës për Përdorues Dritaret';

$GLOBALS["lang"]['Windows may also have blocked the service from starting. On the target start the Windows Security applet and ensure the WinExeSvc executable is allowed to run (click Allow on Device and then Start Actions).'] = 'Dritaret mund ta kenë bllokuar edhe shërbimin nga fillimi. Në objektivin për të filluar miniaplikativin e sigurisë Windows dhe të sigurojë që e ekzekutueshme WinExeSvc të lejohet të zbatohet (klik Lexe onaction dhe pastaj të fillojë veprimet).';

$GLOBALS["lang"]['Winexe page on Samba'] = 'Faqja Verexe në Samba';

$GLOBALS["lang"]['Winexe requires the following Windows services to be started and running: netlogon and rpc services to be running.<br><br>Please log on to the target Windows machine and check the services for netlogon and rpc are running.'] = 'Verenxe kërkon që shërbimet e mëposhtme Windows të fillojnë dhe të punojnë: shërbimet netlogon dhe rpc të jenë në funksionim.<br/><br/>Ju lutem hyni në makinën Windows dhe kontrolloni shërbimet për netlogon dhe rpc janë duke funksionuar.';

$GLOBALS["lang"]['Winexe uses the admin$ and RPC (net service start) to install and start a remote service (winexesvc). This service initializes a named pipe that is used to transport commands from the Open-AudIT server to the target and the output in the reverse way. When finished, the named pipe closes and the winexesvc waits for more connections or uninstalls (depending of the options given).'] = 'Verenxe përdor admin $ dhe RPC (fillimi i shërbimit net) për të instaluar dhe filluar një shërbim të largët (winexvc). Ky shërbim nis një pipë të quajtur që përdoret për të transportuar komandat nga serveri Open-AudIT tek objektivi dhe prodhimi në mënyrën e kundërt. Kur mbaron, tubi i quajtur mbyllet dhe veraxesvc pret për më shumë lidhje ose joinstalime (varësisht nga opsionet e dhëna).';

$GLOBALS["lang"]['Wireless Local Area Network'] = 'Rrjeti i zonave lokale pa fije';

$GLOBALS["lang"]['With the 3.3.0 release of Open-AudIT we have introduced the concept of a Cluster. This intuitively maps to the idea of a web cluster, database cluster or file cluster (or one of several other purposes) into a given type (high availability, redundancy, scaling, etc).<br><br>Depending on the purpose of cluster chosen, the reporting will be slightly different.<br><br>For example, if you create a Cluster with a purpose of virtualisation, when you have added devices to it you will also see the virtual machines on those devices.'] = 'Me daljen 3.3.0 të Open-AudIT ne kemi paraqitur konceptin e një Valster. Kjo hartë intuitive tregon idenë e një grumbulli të dhënash, grumbullit të të dhënave ose grumbullit të skedarëve (ose një nga disa qëllime të tjera) në një lloj të caktuar (arritja e lartë, rigjallërimi, shkallëzimi, etj).<br/><br/>Në varësi të qëllimit të grupit të zgjedhur, raporti do të jetë paksa i ndryshëm.<br/><br/>Për shembull, nëse krijoni një Valster me një qëllim të statizimit, kur keni pajisje shtesë në të do të shihni gjithashtu makineritë virtuale në këto pajisje.';

$GLOBALS["lang"]['With the introduction of the Clouds feature, you can supply details of your cloud, Amazon AWS or Microsoft Azure, and Open-AudIT will use the relevant API to retrieve a list of locations, networks, and instances, then discover each of these instances.'] = 'Me futjen e tiparit të reve, ju mund të jepni detaje të resë suaj, Amazona AWS ose Microsoft Azure, dhe Open-AudIT do të përdorë API relevante për të marrë një listë të vendndodhjeve, rrjeteve dhe shembujve, pastaj zbulon secilin nga këto raste.';

$GLOBALS["lang"]['wmi_fails'] = 'Vmi dështon';

$GLOBALS["lang"]['Wmi Fails'] = 'Vmi dështon';

$GLOBALS["lang"]['wmi_timeout'] = 'Koha skadoi';

$GLOBALS["lang"]['Wmi Timeout'] = 'Koha skadoi';

$GLOBALS["lang"]['workgroup'] = 'Grupi Punues';

$GLOBALS["lang"]['Workgroup'] = 'Grupi Punues';

$GLOBALS["lang"]['Working Credentials'] = 'Të punojmë me mjeshtëri';

$GLOBALS["lang"]['Wrap Up'] = 'Mbështill';

$GLOBALS["lang"]['Written in the PHP scripting language.'] = 'Shkruar në gjuhën e shkrimit PHP.';

$GLOBALS["lang"]['XML'] = 'XML';

$GLOBALS["lang"]['Yellow Query'] = 'Kërkesë e verdhë';

$GLOBALS["lang"]['Yemen'] = 'Jemen';

$GLOBALS["lang"]['Yes'] = 'Po';

$GLOBALS["lang"]['You are able to define extra directories to be scanned as entries in the Executables collection. When defined, the directory and all sub-directories are scanned for files that are executable. You can also define directories and files to be excluded. When activated, these are injected into the linux audit script and performed whenever it is run (usually as part of a discovery). If you want these in a script you can manually copy to the target, use menu -> Discover -> Scripts -> List Scripts and download the script from there.'] = 'Ju jeni në gjendje të përcaktoni directory shtesë për t\'u skanuar si elementë në koleksionin e ekzekutuesve. Kur përcaktohet, directory dhe të gjitha nën-directory skanohen për file që janë të ekzekutueshëm. Mund të përcaktoni gjithashtu directories dhe skedarët që duhen përjashtuar. Kur aktivizohen, këto i injektohen në alfabetin audit të linux dhe kryhet sa herë që zbatohet (veçanërisht si pjesë e një zbulimi). Nëse i dëshironi këto në një script mund ta kopjoni manualisht objektivin, përdorni menunë -> Zbulo:> List Scripts dhe shkarko script nga atje.';

$GLOBALS["lang"]['You are always free to modify the audit scripts themselves to suit your specific requirements. You will need to (re)incorporate those changes whenever you upgrade as they will be overwritten by the default scripts. I would suggest saving a master copy of your modified script, upgrading Open-AudIT, then running a diff between the new default script and your modified script and applying the differences. The audit scripts are native scripts (Windows is VBScript, all others are Bash). Simple and easy to modify - just make sure to have a copy of your changes before you upgrade.'] = 'Jeni gjithmonë të lirë të ndryshoni vetë skenarët e auditimit për t\'iu përshtatur kërkesave tuaja specifike. Do t\'ju duhet t\'i gjeni këto ndryshime sa herë që të përmirësoheni siç do të jenë të mbishkruara nga script-et e prezgjedhura. Unë do të sugjeroja ruajtjen e një kopje master të skenarit tuaj të modifikuar, duke përmirësuar Open-AudIT, pastaj duke kryer një ndryshim në mes të skenarit të ri të parazgjedhur dhe skenarit tuaj të modifikuar dhe duke zbatuar dallimet. script-et e kontrollit janë skenarë vendas (Windows është VBScript, të gjithë të tjerët janë Bash). E thjeshtë dhe e lehtë për t\'u ndryshuar - sigurohu që të kesh një kopje të ndryshimeve para se të përmirësosh.';

$GLOBALS["lang"]['You are running version'] = 'Je duke ekzekutuar versionin';

$GLOBALS["lang"]['You can access the collection using the normal Open-AudIT JSON based API. Just like any other collection. Please see'] = 'Mund të hysh në koleksion duke përdorur JONONIn normal Open-AudIT. Si çdo koleksion tjetër. Ju lutem shikoni';

$GLOBALS["lang"]['You can also'] = 'Edhe ti mundesh';

$GLOBALS["lang"]['You can also see at the bottom of the page a table showing the devices the changes will be applied to.'] = 'Mund të shihni gjithashtu në fund të faqes një tabelë që tregon pajisjet ku do të zbatohen ndryshimet.';

$GLOBALS["lang"]['You can also specify properties using the below format.'] = 'Mund të specifikoni gjithashtu pronësitë duke përdorur formatin e mëposhtëm.';

$GLOBALS["lang"]['You can always run the Firstwave VM on your virtual infrastructure (ESX, Azure, et al). The Firstwave VM runs Debian linux and is free from OS licensing concerns and limitations. Or install on your own Linux distro of choice. We support Redhat 9, Ubuntu 20.04, 22.04 and 24.04 as well as Debian 11 and 12.'] = 'Mund ta drejtosh gjithmonë Firstwave VM në infrastrukturën tënde virtuale (EX, Azure, et al). Firstwave VM drejton linux Debian dhe është i lirë nga shqetësimet dhe kufizimet e liçensimit të OS. Ose instalo në vetë Linux distro të zgjedhjes tënde. Ne mbështesim Redhatin 9, Ubuntu 20.04, 22.04 dhe 24.04 si dhe Debian 11 dhe 12.';

$GLOBALS["lang"]['You can assign devices to a location automatically using'] = 'Ti a pozicioni';

$GLOBALS["lang"]['You can assign devices using custom'] = 'Mund të caktosh pajisje duke përdorur porosi';

$GLOBALS["lang"]['You can audit a remote machine without the using the actual Administrator account by creating a registry key. Create the below key on every machine to be audited and make sure the user credentials used is a member of the Administrators group.'] = 'Mund të auditosh një makinë të largët pa përdorur llogarinë e vërtetë të administratorit duke krijuar një çelës regjistri. Krijoni çelësin e mëposhtëm në çdo makinë për t\'u kontrolluar dhe sigurohuni që kredencialet e përdoruesit të përdoren si anëtar i grupit të administratorëve.';

$GLOBALS["lang"]['You can certainly run a discovery without any valid credentials on the devices within the network, however, the information retrieved will be a very small subset of what Open-AudIT has the ability to retrieve <i>with</i> credentials.'] = 'Ju sigurisht mund të kryeni një zbulim pa ndonjë kredencial të vlefshëm në pajisjet brenda rrjetit, megjithatë informacioni i tërhequr do të jetë një nënvizim shumë i vogël i asaj që Open-AudIT ka aftësinë për të marrë <i>me</i> Kredenciale.';

$GLOBALS["lang"]['You can create a baseline, run it against a group of devices and view the results, add scheduled execution, add more tables for comparison (currently only software, netstat ports and users are enabled), in place baseline editing, archiving of results and more.'] = 'Ju mund të krijoni një linjë bazë, ta ekzekutoni kundër një grupi pajisjesh dhe të shihni rezultatet, të shtoni ekzekutimin e planifikuar, të shtoni më shumë tryeza për krahasim (tani vetëm software, porte dhe përdorues të rrjetave janë të aktivuar), në vendin e tyre të redaktimit bazë, alternimit të rezultateve dhe më shumë.';

$GLOBALS["lang"]['You can create a script with all the options for any of the existing audit scripts - not just Windows. AIX, ESX, Linux, OSX and Windows are all covered.'] = 'Mund të krijosh një skenar me të gjitha mundësitë për ndonjë nga skenarët ekzistues të auditimit, jo vetëm Windows. AIX, ESX, Linux, OSX dhe Dritaret janë të gjitha të mbuluara.';

$GLOBALS["lang"]['You can customize the entire integration down to which system (NMIS or Open-AudIT) is the authority on a per field basis. There are options to create and/or update devices in Open-AudIT or NMIS. Should we run a discovery on a created or updated device and so much more. There are explanations for each item on the right side of the page.'] = 'Ju mund ta rregulloni të gjithë integrimin poshtë në të cilin sistem (NMIS ose Open-AudIT) është autoriteti në një bazë në terren. Ka opsione për të krijuar dhe/ose përditësuar pajisjet në Open-AudIT apo NMIS. Duhet të bëjmë një zbulim në një pajisje të krijuar apo të përditësuar dhe shumë më tepër. Ka shpjegime për çdo gjë në anën e djathtë të faqes.';

$GLOBALS["lang"]['You can define an application and associate a device to this application. A device may be associated to more than one application. An application may be associated to more than one device.'] = 'Ju mund të përcaktoni një aplikativ dhe të lidhni një pajisje për këtë aplikativ. Një pajisje mund të lidhet me më shumë se një program. Një program mund të lidhet me më shumë se një pajisje.';

$GLOBALS["lang"]['You can edit the value of the Additional Field for each individual device on the device details page. View the device details screen, open the section containing the field and (if you have'] = 'Mund të ndryshoni vlerën e fushës shtesë për çdo pajisje individuale në faqen e detajeve të dispozitivit. Shfaq dispozitivin e detajit të ekranit, hap seksionin që përmban fushën dhe (nëse keni';

$GLOBALS["lang"]['You can limit the Device Seed Discovery to fall within a strict set of parameters, including: <i>Restrict to Subnet</i> and <i>Restrict to Private</i>'] = 'Ju mund ta kufizoni zbulimin e Farës së Pajtimit për të rënë brenda një seti të rreptë parametrash, duke përfshirë: <i>Kufizimi në nënnet</i> dhe <i>Kufizimi në privat</i>';

$GLOBALS["lang"]['You can manually assign devices using'] = 'Mund të caktosh manualisht pajisje duke përdorur';

$GLOBALS["lang"]['You can override this by providing the format option in the URL.'] = 'Mund ta anuloni këtë duke dhënë opsionin e formatit tek URL.';

$GLOBALS["lang"]['You can select individual devices by clicking their check-boxes on the right side or selecting all devices clicking the checkbox on the top right of the table (underneath the Edit button that looks like a pencil).'] = 'Ju mund të zgjidhni pajisjet individuale duke klikuar kutitë e tyre të kontrollit në anën e djathtë ose duke zgjedhur të gjitha pajisjet që klikojnë kutinë e kontrollit në të djathtë të tabelës (në pjesën e poshtme të pulsantit editues që duket si një laps).';

$GLOBALS["lang"]['You can select the devices to be integrated by choosing any attribute in the system (device) table and matching (see menu → Admin → Database → List Tables → system for a list of fields). An attribute match can only match a single value.'] = 'Ju mund të zgjidhni pajisjet për t\'u integruar duke zgjedhur çdo atribut në sistem (device) tryezë dhe përputhje (shiko menunë → Admin → Databaza → Lista Tabels → për një listë fushash). Atributi mund të krahasohet vetëm me një vlerë të vetme.';

$GLOBALS["lang"]['You can turn any server into a collector by going to menu -> Admin -> Collectors -> Make this install a Collector. You will need credentials to log on to the server this install will report in to.'] = 'Mund ta ktheni çdo server në një koleksionues duke shkuar në menu -> Admin -> Koleksionues -> Përcaktoje këtë instalimin e një koleksionuesi. Do t\'ju duhen kredenciale për t\'u futur në server tek i cili do të raportojë instalimi.';

$GLOBALS["lang"]['You can view by clicking on the blue view icon. You can also edit or delete if you have permissions.'] = 'Mund të shikoni duke klikuar në ikonën e pamjes blu. Mund të ndryshoni apo të eleminoni nëse keni të drejta.';

$GLOBALS["lang"]['You do not have the PHP MBString extension installed. This extension is required.'] = 'Nuk keni instaluar shtesën PHP MBString. Kjo zgjatje kërkohet.';

$GLOBALS["lang"]['You do not have the PHP SNMP extension installed. This extension is highly recommended.'] = 'Nuk keni instaluar shtesën PHP SNSMP. Kjo zgjatje rekomandohet shumë.';

$GLOBALS["lang"]['You may want to copy and paste this URL in an email to your staff.'] = 'Mund të kopjoni dhe ngjitni këtë URL në një email tek personeli juaj.';

$GLOBALS["lang"]['You may wish to have Active Directory or OpenLDAP authenticate your users, but not provide authorization. To do this, make sure <i>Use for Authentication</i> is set to Y and <i>Use for Roles</i> is set to N. The credentials will be validated by LDAP, but you will need to have the user already created and assigned Roles in Open-AudIT. This also <i>automatically</i> applies to'] = 'Ndoshta dëshironi të keni Active Directory ose OpenLDAP autentifikimin me përdoruesit tuaj, por nuk jepni autorizim. Për ta bërë këtë, sigurohu. <i>Përdorimi i identifikimit</i> është vendosur në Y dhe <i>Përdore për role</i> është vendosur për N. Kredencialet do të jenë të vlefshme nga LDAP, por do t\'ju duhet të keni përdoruesin tashmë të krijuar dhe të caktuar Role në Open-AudIT. Kjo gjithashtu <i>automatikisht</i> aplikohet';

$GLOBALS["lang"]['You might have noticed these match rules are for items that might not be globally unique. Some examples:'] = 'Ndoshta keni vënë re se këto rregulla përputhen me gjëra që mund të mos jenë të veçanta në mbarë botën. Disa shembuj:';

$GLOBALS["lang"]['You must delete your existing license before adding a new license.'] = 'Para se të shtoni një liçensë të re duhet të eleminoni liçensën tuaj ekzistuese.';

$GLOBALS["lang"]['You must have working SSH credentials to execute a benchmark. The following Operating Systems are currently supported: Centos 7, Debian 12, Redhat 7, Redhat 8, Redhat 9, SLES 15, Ubuntu 20.04, Ubuntu 22.04. We plan to expand on these with further releases.'] = 'Duhet të keni kredenciale pune SSH për të ekzekutuar një standart. Sistemi operativ i mëposhtëm mbështetet aktualisht: Centos 7, Debian 12, Redhat 7, Redhat 8, Redhat 9, SELS 15, Ubuntu 20.04, Ubuntu 22.04. Ne planifikojmë t\'i zgjerojmë këto me lirime të mëtejshme.';

$GLOBALS["lang"]['You should copy and paste the entire file into the textbox. In the case below, copy ALL the text.'] = 'kopjo dhe ngjit krejt file në tekst. Në rastin më poshtë, kopjoni gjithë tekstin.';

$GLOBALS["lang"]['You should not include the edited_by and edited_date fields. These will be automatically set.'] = 'Nuk duhet të përfshini fushat e specifikuara_nga dhe të ndryshuara. Këto do të vendosen automatikisht.';

$GLOBALS["lang"]['You should only change the second sentence of text, the'] = 'Duhet të ndryshosh vetëm fjalinë e dytë të tekstit,';

$GLOBALS["lang"]['You should substitute the required column (eg, org_id) for ATTRIBUTE_NAME.'] = 'Duhet të zëvendësosh kollonën e kërkuar (p.sh, org_id) për ATTRIBUTE_NAME.';

$GLOBALS["lang"]['You should use a header line containing the names of the columns you wish to populate, then your data lines below that.'] = 'Duhet të përdorni një krye rreshta me emrat e kollonave që dëshironi të populloni, pastaj rreshta nga poshtë.';

$GLOBALS["lang"]['You should use only those tables that contain attributes you need. I usually use a left join. For example'] = 'Duhet të përdorësh vetëm ato tavolina që përmbajnë cilësi që të duhen. Zakonisht përdor një bashkim të majtë. Për shembull';

$GLOBALS["lang"]['You will need a'] = 'Do të të duhet një';

$GLOBALS["lang"]['You will need the ports for WMI on the Windows firewall opened on each target Windows computer. For Windows Core servers, ensure you allow the firewall connections as per'] = 'Do t\'ju duhen porte për WMI në firewall-in Windows të hapur në çdo kompjuter Windows. Për Dritaret servers';

$GLOBALS["lang"]['You will see a list of'] = 'Ju do të shihni një listë';

$GLOBALS["lang"]['YouTube Tutorials'] = 'Tutorialet e YouTube';

$GLOBALS["lang"]['Your AWS EC2 API key.'] = 'Çelësi AWS EC2.';

$GLOBALS["lang"]['Your Google Compute credentials as JSON.'] = 'Kredencialet tuaja Google Compute si JSON.';

$GLOBALS["lang"]['Your Host is'] = 'Ty Host është';

$GLOBALS["lang"]['Your Licenses'] = 'Liçenca';

$GLOBALS["lang"]['Your Microsoft Azure Client ID.'] = 'Microsoft Azure Klient.';

$GLOBALS["lang"]['Your Microsoft Azure Client Secret.'] = 'Sekreti i klientit tuaj Microsoft Azure.';

$GLOBALS["lang"]['Your Microsoft Azure Subscription ID.'] = 'Microsoft Azure ID.';

$GLOBALS["lang"]['Your Microsoft Azure Tennant ID.'] = 'Microsoft Azure Tennanti.';

$GLOBALS["lang"]['Your PHP version is'] = 'Versioni juaj PHP është';

$GLOBALS["lang"]['Your SQL to select attributes that will populate this query.'] = 'SQL juaj për të zgjedhur atributet që do të popullarizojnë këtë kërkesë.';

$GLOBALS["lang"]['Your SQL to select devices that will populate this group.'] = 'SQL juaj për të zgjedhur pajisjet që do të popullarizojnë këtë grup.';

$GLOBALS["lang"]['Your SSH key.'] = 'Çelësi juaj SSH.';

$GLOBALS["lang"]['Your access credentials, as per that clouds native API.'] = 'Kredencialet tuaja të hyrjes, si për ato retë vendase API.';

$GLOBALS["lang"]['Your data is your data. You can extract it any time you like. We even helpfully provide exports to CSV, JSON and XML. And we have a JSON API. And you can write custom reports and have those output in CSV, XML, and JSON! Again, it is your data - not anyone else. You can be confident that the security of your data is in your hands.'] = 'Të dhënat tuaja janë të dhënat tuaja. Mund ta nxjerrësh sa herë të duash. Ne bile ju ofrojmë eksporte edhe në CSV, JSON dhe XML. Dhe kemi një JSON API. Dhe ju mund të shkruani raporte të personalizuara dhe të keni ato prodhime në CSV, XML, dhe JSON! Përsëri, janë të dhënat e tua, jo të tjerët. Mund të jeni të sigurt se siguria e të dhënave tuaja është në duart tuaja.';

$GLOBALS["lang"]['Your database platform is'] = 'Platforma jote e të dhënave është';

$GLOBALS["lang"]['Your description of the status of this connection (provisioned, retired, etc).'] = 'Përshkrimi juaj i gjendjes së kësaj lidhjeje (në pension).';

$GLOBALS["lang"]['Your description of this item.'] = 'Përshkrimi juaj i këtij elementi.';

$GLOBALS["lang"]['Your generic name for this piece of software'] = 'Emri juaj i përgjithshëm për këtë pjesë të programit';

$GLOBALS["lang"]['Your generic version for this piece of software'] = 'Versioni juaj i përgjithshëm për këtë pjesë të programit';

$GLOBALS["lang"]['Your user should now be able to logon by clicking the <i>Logon with Entra</i> button on the Open-AudIT logon page. As mentioned above, if the logon fails, please check the logfile and verify the users <i>preferred username</i>.<br><br>And that should be all there is too it. Now your users should have one less set of credentials to remember!<br><br>As always, if you have troubles with this feature, please email'] = 'Përdoruesi juaj duhet të jetë në gjendje të futet duke klikuar <i>Logon me Entra</i> Butoni në faqe. Siç u përmend më sipër, nëse logon-i dështon, ju lutemi të kontrolloni file e log dhe të verifikoni përdoruesit <i>Përdoruesi</i>.<br/><br/>Dhe kjo duhet të jetë e gjitha që ekziston. Tani përdoruesit tuaj duhet të kenë një sërë kredencialesh për t\'u mbajtur mend!<br/><br/>Si gjithmonë, nëse keni probleme me këtë veçori, ju lutem email';

$GLOBALS["lang"]['Your user should now be able to logon by clicking the <i>Logon with OKTA</i> button on the Open-AudIT logon page. As mentioned above, if the logon fails, please check the logfile and verify the users <i>name</i>.<br><br>And that should be all there is too it. Now your users should have one less set of credentials to remember!<br><br>As always, if you have troubles with this feature, please email'] = 'Përdoruesi juaj duhet të jetë në gjendje të futet duke klikuar <i>Logon me OKTA</i> Butoni në faqe. Siç u përmend më sipër, nëse logon-i dështon, ju lutemi të kontrolloni file e log dhe të verifikoni përdoruesit <i>Emri</i>.<br/><br/>Dhe kjo duhet të jetë e gjitha që ekziston. Tani përdoruesit tuaj duhet të kenë një sërë kredencialesh për t\'u mbajtur mend!<br/><br/>Si gjithmonë, nëse keni probleme me këtë veçori, ju lutem email';

$GLOBALS["lang"]['Your web server is'] = 'Serveri juaj web është';

$GLOBALS["lang"]['Zambia'] = 'Zambia';

$GLOBALS["lang"]['Zimbabwe'] = 'Zimbabve';

$GLOBALS["lang"]['a String'] = 'një stringë';

$GLOBALS["lang"]['active'] = 'Aktiv';

$GLOBALS["lang"]['active directory'] = 'Directory aktive';

$GLOBALS["lang"]['active/active'] = 'Aktiv';

$GLOBALS["lang"]['active/passive'] = 'aktiv';

$GLOBALS["lang"]['advertisement'] = 'Reklamë';

$GLOBALS["lang"]['alert'] = 'paralajmërim';

$GLOBALS["lang"]['all'] = 'gjithçka';

$GLOBALS["lang"]['allocated'] = 'caktuar';

$GLOBALS["lang"]['amazon'] = 'amazon';

$GLOBALS["lang"]['an Integer'] = 'I plotë';

$GLOBALS["lang"]['and'] = 'dhe';

$GLOBALS["lang"]['and / or'] = 'dhe /';

$GLOBALS["lang"]['and a support ticket will be created and actioned.'] = 'dhe një biletë mbështetëse do të krijohet dhe do të veprojë.';

$GLOBALS["lang"]['and another'] = 'Dhe një tjetër.';

$GLOBALS["lang"]['and download the Latest Release self-installer. You may need to scroll down the page to find it.'] = 'dhe shkarkoni vetë-instaluesin më të fundit. Mund të të duhet të rrokullisesh poshtë në faqe për ta gjetur.';

$GLOBALS["lang"]['and go to Applications -> Enterprise Applications (far left menu), then click <i>New application</i>.'] = 'dhe shko tek programet -> Programet e Ndërmarrjeve (far majtas menu), pastaj kliko <i>Program i ri</i>.';

$GLOBALS["lang"]['and its current time is'] = 'dhe ora e saj aktuale është';

$GLOBALS["lang"]['and looks for a warranty expiration date prior to today.'] = 'dhe të kërkojmë një datë skadence garancie para sot.';

$GLOBALS["lang"]['and review what is possible.'] = 'Dhe të shohim se çfarë është e mundur.';

$GLOBALS["lang"]['and the Sign-out redirect URI being'] = 'dhe në';

$GLOBALS["lang"]['and the final lines will likely be of most interest. These lines should give you the exact point at which the login failed.'] = 'dhe linjat përfundimtare ka të ngjarë të jenë më interesante. Këto rreshta duhet t\'ju japin pikën e saktë në të cilën hyrja dështoi.';

$GLOBALS["lang"]['antivirus'] = 'antivirusi';

$GLOBALS["lang"]['application'] = 'aplikativ';

$GLOBALS["lang"]['approved'] = 'I miratuar';

$GLOBALS["lang"]['are required.'] = 'kërkohet.';

$GLOBALS["lang"]['are used.'] = 'janë përdorur.';

$GLOBALS["lang"]['as a device responding on this port.<br>This has caused some customers issues where firewalls respond on behalf of a non-existing device, and hence cause false positive device detection. We now have this attribute available to set per scan.'] = 'Si një pajisje që përgjigjet në këtë port.<br/>Kjo ka shkaktuar disa çështje klientësh ku softyret e zjarrit reagojnë në emër të një pajisje jo-ekzistuese, dhe prandaj shkaktojnë zbulim të gabuar të pajisjeve pozitive. Tani kemi këtë atribut në dispozicion për të vendosur për skanim.';

$GLOBALS["lang"]['as the reference point and filters out all virtual machines via a check of the system.serial field for VM.'] = 'si pikë referimi dhe filtron të gjitha makinat virtuale nëpërmjet një kontrolli të sistemit. Fusha seriale për VM.';

$GLOBALS["lang"]['assuming working and client populated DNS'] = 'Duke marrë DNS të populluara nga puna dhe klienti';

$GLOBALS["lang"]['attribute'] = 'karakteristika';

$GLOBALS["lang"]['auto'] = 'auto';

$GLOBALS["lang"]['backup'] = 'backup';

$GLOBALS["lang"]['banned'] = 'I ndaluar';

$GLOBALS["lang"]['blog'] = 'Ditari';

$GLOBALS["lang"]['blue'] = 'blu';

$GLOBALS["lang"]['bottom'] = 'poshtë';

$GLOBALS["lang"]['building'] = 'ndërtesë';

$GLOBALS["lang"]['can be used for user authentication (is the users name and password correct) as well as user authorization (what roles and orgs does a user have).<br><br>If a user is not in the configured LDAP but is in Open-AudIT (eg: the <i>admin</i> user), Open-AudIT will fallback to using itself for both authentication and authorization.<br><br>Open-AudIT uses specific LDAP groups for roles and orgs. A user must be a direct member of these group(s) in order for Open-AudIT to determine that users access.<br><br>When configured correctly, LDAP use can completely remove the need to create users in Open-AudIT. Simply configure Open-AudIT to use LDAP for both authentication and authorization. If the user does not exist in Open-AudIT but does exist in LDAP and their credentials are correct and they are a member of the required groups Open-AudIT will create the user account automatically.'] = 'mund të përdoret për autentifikimin e përdoruesit (është emri dhe fjalëkalimi korrekt) si dhe autorizimi për përdoruesit (çfarë role dhe xeherorë ka një përdorues).<br/><br/>Nëse një përdorues nuk është tek LDAP i konfiguruar por është në Open-AudIT (p: <i>admin</i> Përdoruesi, Open-AudIT do t\'i kthehet përdorimit të vetes si për autentifikimin, ashtu edhe për autorizimin.<br/><br/>Hap-Aud IT përdor grupe të veçanta LDAP për rolet dhe orgsat. Një përdorues duhet të jetë një anëtar i drejtpërdrejtë i këtyre grupeve, në mënyrë që Open-AudIT të përcaktojë se përdoruesit hyjnë në të.<br/><br/>Kur konfiguruar si duhet, përdorimi LDAP mund të heqë plotësisht nevojën për të krijuar përdoruesit në Open-AudIT. Thjesht konfiguro Open-AudIT për të përdorur LDAP si për autentifikimin ashtu edhe për autorizimin. Nëse përdoruesi nuk ekziston në Open-AudIT por ekziston në LDAP dhe kredencialet e tyre janë korrekte dhe ato janë anëtare e grupeve të kërkuara Open-AudIT do të krijojë automatikisht profilin e përdoruesit.';

$GLOBALS["lang"]['can now retrieve details about a file or directory of files and monitor these files for changes as per other attributes in the Open-AudIT database. This feature works out of the box for Linux Open-AudIT servers, but needs a change to the service account name under a Windows Open-AudIT server. Supported clients are Windows and Linux.'] = 'tani a file dhe për në Open-AudIT. Kjo veçori funksionon jashtë kutisë për server-ët Linux Open-AudIT, por ka nevojë për një ndryshim në emrin e profilit të shërbimit nën një server Windows Open-AudIT. Klientët e mbështetur janë Windows dhe Linux.';

$GLOBALS["lang"]['changed'] = 'ndryshuar';

$GLOBALS["lang"]['chosen. From there if a port for WMI, SSH or SNMP is detected responding the device is further queried using '] = 'E zgjedhur. Nga atje në qoftë se një port për WMI, SSH apo SNSMP është zbuluar duke ju përgjigjur pajisjes është përdorur më tej ';

$GLOBALS["lang"]['cloud'] = 'Re';

$GLOBALS["lang"]['code'] = 'kod';

$GLOBALS["lang"]['collections and details pages is an icon to execute.'] = 'Koleksionet dhe faqet e hollësishme janë ikonë për tu ekzekutuar.';

$GLOBALS["lang"]['collector'] = 'Koleksionues';

$GLOBALS["lang"]['collectors'] = 'Koleksionues';

$GLOBALS["lang"]['column'] = 'Kollona';

$GLOBALS["lang"]['column will contain either <i>y</i> or <i>n</i>. This indicates if this row is currently present on the device. For example software may be installed (which would result in <i>software.current = y</i>), but on a subsequent audit it may not be detected. Open-AudIT will then change this rows current attribute to <i>n</i>.'] = 'përmban <i>p</i> ose <i>n</i>. Kjo tregon nëse ky rresht është aktualisht i pranishëm në pajisje. Për shembull, programet software mund të instalohen (që do të rezultojë në <i>software</i>), por në një kontroll tjetër mund të mos zbulohet. Open-AudIT do t\'i ndryshojë më pas këto rreshta atribute aktuale <i>n</i>.';

$GLOBALS["lang"]['column. The'] = 'Kollona. The';

$GLOBALS["lang"]['compute'] = 'Numërimi';

$GLOBALS["lang"]['config'] = 'Konfigurimi';

$GLOBALS["lang"]['console'] = 'konsolë';

$GLOBALS["lang"]['contains'] = 'përmban';

$GLOBALS["lang"]['create'] = 'Krijo';

$GLOBALS["lang"]['created'] = 'Krijo';

$GLOBALS["lang"]['credentials'] = 'Kredenciale';

$GLOBALS["lang"]['critical'] = 'Kritik';

$GLOBALS["lang"]['cve'] = 'cve';

$GLOBALS["lang"]['database'] = 'Të dhëna databazë';

$GLOBALS["lang"]['debug'] = 'debug';

$GLOBALS["lang"]['delegated'] = 'deleguar';

$GLOBALS["lang"]['delete'] = 'elemino';

$GLOBALS["lang"]['deleted'] = 'fshirë';

$GLOBALS["lang"]['denied'] = 'Mungon';

$GLOBALS["lang"]['details'] = 'Hollësi';

$GLOBALS["lang"]['devices'] = 'Pajisje';

$GLOBALS["lang"]['digitalocean'] = 'Fizikane';

$GLOBALS["lang"]['discoveries'] = 'Zbulime';

$GLOBALS["lang"]['documentation for further details.'] = 'Për hollësi të mëtejshme.';

$GLOBALS["lang"]['does <strong>not</strong> provide vulnerability reports for the following'] = 'nuk <strong>jo</strong> për';

$GLOBALS["lang"]['does not equal'] = 'nuk është i barabartë';

$GLOBALS["lang"]['emergency'] = '911';

$GLOBALS["lang"]['entra'] = 'Entra';

$GLOBALS["lang"]['equals'] = 'I barabartë';

$GLOBALS["lang"]['error'] = 'gabim';

$GLOBALS["lang"]['established'] = 'U vendos';

$GLOBALS["lang"]['excluded'] = 'I përjashtuar';

$GLOBALS["lang"]['expired'] = 'skaduar';

$GLOBALS["lang"]['extreme - Without which, the organisation would fail.

very high - Functions that are essential for the organisations survival and must be restored immediately.

high - Important functions that should be restored quickly but may have a slightly longer recovery time.

medium - Functions that are necessary but can tolerate longer downtime.

low - Non-essential functions that can be delayed without significant impact.

unassigned - The default until set.'] = 'Ekstremisht - Pa të cilat, organizata do të dështonte.

Funksione shumë të larta që janë thelbësore për mbijetesën e organizatave dhe duhet të rivendosen menjëherë.

Funksione shumë të rëndësishme që duhen rivendosur shpejt, por mund të kenë një kohë pak më të gjatë për shërimin.

Funksionet mesatare që janë të nevojshme, por që mund të tolerojnë më shumë kohë të ulët.

Funksione jo thelbësore që mund të vonohen pa ndikim të rëndësishëm.

Pa firmë - E prezgjedhura deri sa të vendoset.';

$GLOBALS["lang"]['fail'] = 'dështoi';

$GLOBALS["lang"]['false'] = 'E rreme';

$GLOBALS["lang"]['file'] = 'file';

$GLOBALS["lang"]['firewall'] = 'Firewall';

$GLOBALS["lang"]['first'] = 'i pari';

$GLOBALS["lang"]['fixed'] = 'fikse';

$GLOBALS["lang"]['floor'] = 'kat';

$GLOBALS["lang"]['for'] = 'për';

$GLOBALS["lang"]['for authentication'] = 'autentifikimi';

$GLOBALS["lang"]['for this information.'] = 'për këtë informacion.';

$GLOBALS["lang"]['from Audit Script Result'] = 'nga Audit';

$GLOBALS["lang"]['from NMIS'] = 'nga NMIS';

$GLOBALS["lang"]['from address LocalHost (Using LRPC) running in the application container'] = 'nga në programi';

$GLOBALS["lang"]['front'] = 'Përpara';

$GLOBALS["lang"]['front-left'] = 'Majtas';

$GLOBALS["lang"]['front-right'] = 'Djathtas';

$GLOBALS["lang"]['github'] = 'github';

$GLOBALS["lang"]['google'] = 'google';

$GLOBALS["lang"]['greater or equals'] = 'Më i madh apo i barabartë';

$GLOBALS["lang"]['greater than'] = 'më e madhe se';

$GLOBALS["lang"]['group'] = 'grupi';

$GLOBALS["lang"]['has not been set'] = 'nuk është caktuar';

$GLOBALS["lang"]['have a working reverse DNS resolvable IP to the target Windows PC.'] = 'kanë një punë DNS resolvble IP në PC Windows objektiv.';

$GLOBALS["lang"]['have the ability to be executed. On the'] = 'Kanë aftësinë për t\'u ekzekutuar. Tek';

$GLOBALS["lang"]['head'] = 'koke';

$GLOBALS["lang"]['here'] = 'këtu';

$GLOBALS["lang"]['high availability'] = 'Në dispozicion i madh';

$GLOBALS["lang"]['howto'] = 'Howto';

$GLOBALS["lang"]['if you clone a Linux virtual machine, unless you manually regenerate this (and in my experience, people do not) it will remain the same.'] = 'Nëse ju klononi një makinë virtuale Linux, nëse ju manualisht rigjeneroni këtë (dhe në përvojën time, njerëzit nuk e bëjnë) ajo do të mbetet e njëjtë.';

$GLOBALS["lang"]['ignored'] = 'i injoruar';

$GLOBALS["lang"]['import the example device data'] = 'Importo të dhënat e dispozitivit shembullor';

$GLOBALS["lang"]['in'] = 'në';

$GLOBALS["lang"]['in Enterprise.'] = 'Në kompani.';

$GLOBALS["lang"]['in Inputs can have the following values.'] = 'në hyrje mund të ketë vlerat e mëposhtme.';

$GLOBALS["lang"]['in Outputs can have the following values.'] = 'në daljet mund të kenë vlerat e mëposhtme.';

$GLOBALS["lang"]['inactive'] = 'Joaktiv';

$GLOBALS["lang"]['incomplete'] = 'Jo i plotë';

$GLOBALS["lang"]['info'] = 'Informacione';

$GLOBALS["lang"]['installer will test for the presence of Nmap in its standard install locations of'] = 'Instaluesi do të testojë për praninë e Nmap në pozicionet standartë të saj';

$GLOBALS["lang"]['int, text, bool (y/n), etc'] = 'int, tekst, bool (y/n), etj.';

$GLOBALS["lang"]['is U.S. standard maintained by National Institute of Standards and Technology'] = 'është standarti amerikan i mbajtur nga Instituti Kombëtar i Standardeve dhe Teknologjisë';

$GLOBALS["lang"]['is an international standard for managing information security. It provides a framework for establishing, implementing, maintaining, and continually improving an Information Security Management System (ISMS).'] = 'është një standart ndërkombëtar për menaxhimin e sigurisë së informacionit. Ai ofron një kuadër për krijimin, zbatimin, mbajtjen dhe përmirësimin e vazhdueshëm të Sistemit të Menaxhimit të Sigurisë së Informacionit (ISMS).';

$GLOBALS["lang"]['is based upon'] = 'është bazuar në';

$GLOBALS["lang"]['is licensed to'] = 'është i liçensuar';

$GLOBALS["lang"]['is next on the list and Open-AudIT can use password and key authentication. Open-AudIT can also use a sudo enabled user as opposed to the root use directly (although it can also use root). For best results, the root user or a sudo enabled user should be used (see Auditing Linux without root and Target Client Configuration on the wiki). Windows devices can also run ssh, however if Open-AudIT detects this it will stop the SSH queries and instead use WMI (assuming working WMI credentials).'] = 'është në vazhdim në listë dhe Open-AudIT mund të përdorë fjalëkalimin dhe autentifikimin kyç. Open-AudIT mund të përdorë gjithashtu një përdorues të aftë si kundër përdorimit të root drejtpërsëdrejti (megjithëse mund të përdorë gjithashtu root). Për rezultatet më të mira, duhet përdorur përdoruesi root ose një përdorues i aktivuar (shih Auditing Linux pa rrënjë dhe korrigjo konfigurimin e klientit objektiv në wiki). Pajisja Windows gjithashtu mund të punojë ssh, megjithatë nëse Open-AudIT zbulon se kjo do të ndalojë këstet SSH dhe në vend të kësaj do të përdorë WMI (duke punuar kredencialet WMI).';

$GLOBALS["lang"]['is the link to the'] = 'është lidhje me';

$GLOBALS["lang"]['item to view the specific tables and their columns. This will enable you to find exactly what you need, rather than trawling through the MySQL console of the schema creation script.'] = 'element për të shfaqur tabelat specifike dhe kolonat e tyre. Kjo do t\'ju mundësojë të gjeni saktësisht atë që ju duhet, në vend që të klikoni përmes konsolës MySQL të script-it të krijimit të skemës.';

$GLOBALS["lang"]['key required to retrieve lat/long and display map. See'] = 'Çelësi duhet të marrë lat/long dhe të shfaqë hartën. Shiko';

$GLOBALS["lang"]['left'] = 'majtas';

$GLOBALS["lang"]['less or equals'] = 'pak ose shumë';

$GLOBALS["lang"]['less than'] = 'më e vogël se';

$GLOBALS["lang"]['license'] = 'liçenca';

$GLOBALS["lang"]['licenses'] = 'liçenca';

$GLOBALS["lang"]['like'] = 'si';

$GLOBALS["lang"]['line'] = 'vijë';

$GLOBALS["lang"]['list'] = 'lista';

$GLOBALS["lang"]['list View, using the Create button'] = 'Paraqitja listë, duke përdorur butonin e krijimit';

$GLOBALS["lang"]['load balancing'] = 'Ngarko';

$GLOBALS["lang"]['location'] = 'Pozicioni';

$GLOBALS["lang"]['locations'] = 'Pozicioni';

$GLOBALS["lang"]['managed'] = 'Menaxhuar';

$GLOBALS["lang"]['methods'] = 'Metodat';

$GLOBALS["lang"]['microsoft'] = 'unit-format';

$GLOBALS["lang"]['mount point'] = 'pikë';

$GLOBALS["lang"]['must'] = 'duhet';

$GLOBALS["lang"]['network'] = 'Rrjeti';

$GLOBALS["lang"]['news'] = 'Lajme';

$GLOBALS["lang"]['no'] = 'jo';

$GLOBALS["lang"]['node'] = 'Nyja';

$GLOBALS["lang"]['none'] = 'asnjë';

$GLOBALS["lang"]['normal'] = 'normal';

$GLOBALS["lang"]['not applicable'] = 'nuk është i zbatueshëm';

$GLOBALS["lang"]['not in'] = 'jo në';

$GLOBALS["lang"]['not like'] = 'jo si';

$GLOBALS["lang"]['notice'] = 'njoftim';

$GLOBALS["lang"]['notification'] = 'animacioni';

$GLOBALS["lang"]['okta'] = 'okta';

$GLOBALS["lang"]['on devices where'] = 'në ku';

$GLOBALS["lang"]['openldap'] = 'Openldap';

$GLOBALS["lang"]['optimized'] = 'optimizuar';

$GLOBALS["lang"]['optionally '] = 'opsionale ';

$GLOBALS["lang"]['or'] = 'ose';

$GLOBALS["lang"]['or the GitHub page at'] = 'ose në faqe';

$GLOBALS["lang"]['other'] = 'tjetër';

$GLOBALS["lang"]['package'] = 'paket';

$GLOBALS["lang"]['page. Export your LDAP server from menu -> Admin -> LDAP Servers -> Details to JSON and save and include this data as well.'] = 'faqe. Eksporto serverin tuaj LDAP nga menuja -> Admin -> Serveri LDAP -> Detajet për JSON dhe për të ruajtur dhe përfshirë këto të dhëna gjithashtu.';

$GLOBALS["lang"]['partition'] = 'Ndarja';

$GLOBALS["lang"]['pass'] = 'pass';

$GLOBALS["lang"]['pending'] = 'Në pritje';

$GLOBALS["lang"]['performance'] = 'për';

$GLOBALS["lang"]['performed'] = 'kryer';

$GLOBALS["lang"]['permission'] = 'leje';

$GLOBALS["lang"]['permissions required per endpoint'] = 'Të drejtat për';

$GLOBALS["lang"]['pie'] = 'Tore';

$GLOBALS["lang"]['planning'] = 'Planifikimi';

$GLOBALS["lang"]['predictable'] = 'E parashikueshme';

$GLOBALS["lang"]['query'] = 'Kërkesë';

$GLOBALS["lang"]['rear'] = 'prapa';

$GLOBALS["lang"]['rear-left'] = 'majtas';

$GLOBALS["lang"]['rear-right'] = 'Mbrapa djathtas';

$GLOBALS["lang"]['regex'] = 'Regex';

$GLOBALS["lang"]['release'] = 'Dalja';

$GLOBALS["lang"]['removed from display, but has been set'] = 'U hoq nga display, por është vendosur';

$GLOBALS["lang"]['reserved'] = 'E rezervuara';

$GLOBALS["lang"]['right'] = 'djathtas';

$GLOBALS["lang"]['rights) you can click on the field value to edit it.'] = 'Të drejtat) mund të klikoni në vlerën e fushës për ta ndryshuar atë.';

$GLOBALS["lang"]['role'] = 'rol';

$GLOBALS["lang"]['room'] = 'Dhoma';

$GLOBALS["lang"]['row'] = 'rresht';

$GLOBALS["lang"]['service failed to start due to the following error'] = 'Shërbimi dështoi për shkak të gabimit në vijim';

$GLOBALS["lang"]['so Open-AudIT knows to restrict your query to the appropriate Orgs.'] = 'Pra Open-AudIT di të kufizojë kërkesën tuaj në Orgs duhur.';

$GLOBALS["lang"]['stand-alone'] = 'Vetëm';

$GLOBALS["lang"]['standard'] = 'standart';

$GLOBALS["lang"]['starts with'] = 'fillon me';

$GLOBALS["lang"]['storage'] = 'Arkivi';

$GLOBALS["lang"]['subnet'] = 'Nënnet';

$GLOBALS["lang"]['table'] = 'tabelë';

$GLOBALS["lang"]['table and insert the original rows.'] = 'Tavolina dhe fut rreshtat origjinalë.';

$GLOBALS["lang"]['team'] = 'Ekipi';

$GLOBALS["lang"]['text. The first is the array index and should be left as-is. The index is used in the templates to lookup the translated text.'] = 'Teksti. E para është indeksi i rendit dhe duhet të lihet as-është. Treguesi është përdorur në shabllon për të kërkuar tekstin e përkthyer.';

$GLOBALS["lang"]['then clicking on the details button for the table.'] = 'Pastaj kliko tek butoni i detajeve për tryezën.';

$GLOBALS["lang"]['then clicking on the details button for the table. Device details are stored in the'] = 'Pastaj kliko tek butoni i detajeve për tryezën. në';

$GLOBALS["lang"]['timestamp'] = 'unit-format';

$GLOBALS["lang"]['to'] = 'për';

$GLOBALS["lang"]['to create an item of this type'] = 'nga lloji';

$GLOBALS["lang"]['to the URL, you will get the full database entry, including all component tables, of a given device.'] = 'URL, ju do të merrni hyrjen e plotë të të dhënave, duke përfshirë të gjitha tabelat përbërëse, të një pajisje të dhënë.';

$GLOBALS["lang"]['to the user'] = 'përdoruesit';

$GLOBALS["lang"]['top'] = 'Sipër';

$GLOBALS["lang"]['top secret - Military / Government classification. Disclosure would cause exceptionally grave danger to national security.

secret - Military / Government classification. Disclosure would cause serious damage to national security.

confidential - Military / Government and Private Sector classification. Data that is confidential includes trade secrets, intellectual data, application programming code, and other data that could seriously affect the organization if unauthorized disclosure occurred. Data at this level would be available only to personnel in the organization whose work needs, or is directly related to, the accessed data. Access to confidential data usually requires authorization for each access.

private - Private Sector classification. Data that is private includes any information related to personnel, including human resources records, medical records, and salary information, that is used only within the organization.

sensitive - Military / Government and Private Sector classification. Data that is sensitive includes organizational financial information and requires extra measures to ensure its CIA and accuracy. Disclosure might harm national security.

public - Private Sector classification. Public data is data that is generally shared with the public and would not cause a negative impact on the organization. Examples of public data include how many people work in the organization and what products an organization manufactures or sells.

unclassified - Military / Government classification. Any information that can generally be distributed to the public without any threat to national interest.

unassigned - The default until set.'] = 'Shumë sekret - Klasifikimi Ushtarak / Qeveria. Shfrytëzimi do t\'i shkaktonte një rrezik jashtëzakonisht të madh sigurisë kombëtare.

Sekreti - Klasifikimi Ushtarak / Qeveria. Shfrytëzimi do t\'i shkaktonte dëme serioze sigurisë kombëtare.

Konfidenciale - Ushtria / Qeveria dhe klasifikimi i Sektorit Privat. Të dhënat që janë konfidenciale përfshijnë sekretet e tregtisë, të dhënat intelektuale, kodin e programimit të aplikimit dhe të dhëna të tjera që mund të ndikojnë seriozisht në organizatë nëse ndodh një zbulim i paautorizuar. Të dhënat në këtë nivel do të jenë në dispozicion vetëm për personelin në organizatë, puna e të cilit ka nevojë, ose është drejtpërdrejt e lidhur me, të dhënat e aksesuara. Të dhënat konfidenciale zakonisht kërkojnë autorizim për çdo qasje.

Klasifikimi i Sektorit Privat. Të dhënat që janë private përfshijnë çdo informacion që lidhet me personelin, përfshirë të dhënat e burimeve njerëzore, të dhënat mjekësore dhe informacionet e pagave, që përdoren vetëm brenda organizatës.

I ndjeshëm - Ushtarak / Qeveria dhe klasifikimi i Sektorit Privat. Të dhënat që janë të ndjeshme përfshijnë informacionin organizative financiar dhe kërkojnë masa shtesë për të siguruar CIA-n dhe saktësinë e saj. Shfrytëzimi mund të dëmtojë sigurinë kombëtare.

Klasifikimi i Sektorit Privat. Të dhënat publike janë të dhëna që zakonisht ndahen me publikun dhe nuk do të shkaktojnë një ndikim negativ mbi organizatën. Shembuj të të dhënave publike përfshijnë se sa njerëz punojnë në organizatë dhe çfarë produktesh prodhon ose shet një organizatë.

jo i klasifikuar - Ushtarak / Qeveria. Çdo informacion që zakonisht mund të shpërndahet në publik pa ndonjë kërcënim ndaj interesit kombëtar.

Pa firmë - E prezgjedhura deri sa të vendoset.';

$GLOBALS["lang"]['traffic'] = 'trafik';

$GLOBALS["lang"]['true'] = 'true';

$GLOBALS["lang"]['true or false (in JSON context)'] = 'E vërtetë apo e rreme (në kontekstin Joson)';

$GLOBALS["lang"]['unallocated'] = 'pa alocuar';

$GLOBALS["lang"]['unauthorised'] = 'Paautorizuar';

$GLOBALS["lang"]['unchanged'] = 'pandryshuar';

$GLOBALS["lang"]['unknown'] = 'nuk njihet';

$GLOBALS["lang"]['unmanaged'] = 'i pamenazhuar';

$GLOBALS["lang"]['unused'] = 'Nuk u përdor';

$GLOBALS["lang"]['update'] = 'Përditëso';

$GLOBALS["lang"]['uses the data collected from your devices and matches the software installed with the value provided, it counts the matches calculates how many licenses have been used and how many are left. It allows the use of wildcards on the <i>match string</i> field which matches the software.name attribute.'] = 'Përdor të dhënat e mbledhura nga pajisjet e tua dhe përputhet me programin e instaluar me vlerën e dhënë, ai llogarit se sa licensa janë përdorur dhe sa kanë mbetur. Kjo lejon përdorimin e kartave të egra në <i>string</i> Fusha që përputhet me programin. Emri i atributit.';

$GLOBALS["lang"]['using the main menu items.'] = 'duke përdorur elementët e menusë qendrore.';

$GLOBALS["lang"]['valid'] = 'e vlefshme';

$GLOBALS["lang"]['version'] = 'versioni';

$GLOBALS["lang"]['virtualisation'] = 'virtuale';

$GLOBALS["lang"]['warning'] = 'paralajmërim';

$GLOBALS["lang"]['web'] = 'web';

$GLOBALS["lang"]['with Local and Remote access permissions set.'] = 'me në distancë dhe lokal.';

$GLOBALS["lang"]['with devices::update permission.'] = 'me.';

$GLOBALS["lang"]['with the Sign-On Redirect URI being'] = 'me në';

$GLOBALS["lang"]['with the intention of providing simple and intuitive access in a manner familiar to developers. In addition to this API, the web interface will use the same request format and supply some additional actions (eg: HTML forms for creating items).'] = 'me synimin për të siguruar mundësi të thjeshta dhe intuitive në një mënyrë të njohur për zhvilluesit. Përveç kësaj API, interfaqja e internetit do të përdorë të njëjtin format kërkese dhe do të furnizojë disa veprime shtesë (p.sh. format HTML për krijimin e elementëve).';

$GLOBALS["lang"]['yes'] = 'po';

$GLOBALS["lang"]['you do not require a HighCharts license to use Firstwave products. License'] = 'Ju nuk keni nevojë për një licencë HighCharts për të përdorur produktet Firstwave. Liçenca';

$GLOBALS["lang"]['you will assign any found devices to that Org or Location.'] = 'ju do të përcaktoni çdo mjet gjetur në atë Org ose vend.';

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

