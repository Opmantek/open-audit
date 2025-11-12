<?php
$GLOBALS["lang"][' Default, currently '] = ' Difino, nontempe ';

$GLOBALS["lang"][' If something does not work as expected, your first thing to do is check the logs.'] = ' Se io ne funkcias kiel atendite, via unua a faro farendaoo estas controli la tagalojn.';

$GLOBALS["lang"][' is now supported with a language file. To change your user to use this language, click '] = ' Nun estas apogita per lingvodosiero. Por ранновивани vian uzanton por uzi tiun lingvon, klaki ';

$GLOBALS["lang"][' seconds'] = ' SEKUNDOJ';

$GLOBALS["lang"][', but will not need to remember a separate set of logon credentials.'] = 'Sed ne marentaa memori aparkan aron de symbolaj akredita.';

$GLOBALS["lang"][', of which we supply over thirty as a default set. Professional users cannot alter these, but an Enterprise user has complete customisation abilities - including creating your own.'] = 'De kiu ni maksas pli ol tridek kiel dea... Profesiaj uzantoj ne povas ршенний tiujn, sed Enterprise uzanto havas kompletajn specialadaptitajn kapablojn - inkluzive de kreado de via propa.';

$GLOBALS["lang"][', you <i>must</i> be using https on your Open-AudIT server to use Entra for Auth. Please configure Apache to use <strong>https</strong> before configuring Entra for auth.'] = '- Oui. <i>Dévas</i> Uzi https sur via Open- Audit- servilo por uzi Entra por Auth. Bonvolu agordi a remomendaro por uzi <strong>Htps</strong> Entra por Auth.';

$GLOBALS["lang"]['. To enable this, edit the configuration item for '] = '. Por obligation, redakki la konfiguracion objectko por ';

$GLOBALS["lang"]['10 Minutes'] = '10 perc';

$GLOBALS["lang"]['15 Minutes'] = '15 perc';

$GLOBALS["lang"]['30 Minutes'] = '30 perc';

$GLOBALS["lang"]['5 Minutes'] = '5 perc';

$GLOBALS["lang"]['93 controls grouped into organizational, people, physical, and technological categories'] = '93 Kontroloj grupigitaj en organizajn, homojn, fizikajn, kajteknologijn kategorjn';

$GLOBALS["lang"]['<br> <strong>NOTE</strong> - You are accessing this URL from the local Open-AudIT server. The downloaded script will not be able to submit when run on any other machine. If you need to audit other machines, please download the script from any remote machine, not using a browser on the Open-AudIT server itself.'] = '<br/><strong>Ei</strong> Vi Aliris URL de la loka Open- Servilo Audit. La el apretutita manikripto ne povas submeti Se vi bezonas revizii alpijn ma apretinojn, bonvolu el apretuti la manikripton de iu malpreksima ma divonaino, ne uzante retumonilon sur la Open- Audit- servilo mem.';

$GLOBALS["lang"]['<p></p>'] = '<p></p>';

$GLOBALS["lang"]['<p><strong class="text-danger">NOTE</strong> - You must have working SSH or SSH Key credentials to execute benchmarks upon a target device.</p>'] = '<p><strong class="text-danger">Ei</strong> Vivaenda</p>';

$GLOBALS["lang"]['<p><strong>Baseline</strong> - The overarching document that contains the baseline definition and the individual policy tests.<br> <br> <strong>Policies</strong> - The individual tests contained within a Baseline. Each test is for a specific item. An example would be testing for SSH version 1.2.3.<br> <br> <strong>Details</strong> - Baselines can compare netstat ports, users and software.<br> <br> <strong>Software</strong> - To compare software we check the name and version. Because version numbers are not all standardised in format, when we receive an audit result we create a new attribute called software_padded which we store in the database along with the rest of the software details for each package. For this reason, baselines using software policies will not work when run against a device that has not been audited by 1.10 (at least). Software policies can test against the version being "equal to", "greater than" or "equal to or greater than".<br> <br> <strong>Netstat Ports</strong> - Netstat Ports use a combination of port number, protocol and program. If all are present the policy passes.<br> <br> <strong>Users</strong> - Users work similar to Netstat Ports. If a user exists with a matching name, status and password details (changeable, expires, required) then the policy passes.<br> <br> </p>'] = '<p><strong>Bazlinio Nom de la ville (facultatif, sans doute pas besoin d \'une traduction)</strong> La superkaddokumento kiu enhavas la bazliniodifinon kaj la indifuajn strategitestojn.<br/> <br/> <strong>Politika</strong> La ininfutuaj commercij enhavitaj ene de Bazlinio. Mina sintoiu testo estas por specifa objectto. Ekzemplo estus testata pri SSH-versio 1.2.3.<br/> <br/> <strong>Detaloj</strong> Bazlinioj povas kompari retstat hasnojn, uzantojn kaj softvaron.<br/> <br/> <strong>Mousseline</strong> Por kompari softvaron ni controlas la nomon kaj versioon. Identificar versio nombroj ne estas Tial, bazlinioj uzantaj softvarpolitikojn ne funkcias dum kuro kontra epäilty aparato kiu ne estis reviziita per 1.10 (almena kaptlus). Softvarpolitikoj povas testi kontrauna la versio estanta "egalaj al", "pli gra ol" kaptus al egala al a defect pli granda ol ".<br/> <br/> <strong>Puertos Netstat</strong> Netstat Ports uzas kombina Se <br/> <br/> <strong>L \'Union européenne</strong> Uzantoj laboras simpiaj al Netstat Puertos. Se uzanto eksistas kun egala nomo, stato kaj pasvorton detaloj (publikaan progresssiveblaj, eksvalidias, postulis) tiam la politiko pasas.<br/> <br/> </p>';

$GLOBALS["lang"]['<p>A location is a physical address that can have devices associated with it.<br> <br>You can assign it coordinates (lat/long) and if there are devices assigned, the location will appear on the Open-AudIT Enterprise map.<br> <br></p>'] = '<p>Loko estas fizika adreso kiu povas havi aparatojn asocitajn kun liukoinen.<br/> <br/>Vi povas asigni εin koriatoj (lat / long) kaj se eksistas aparatoj asignitaj, la loko aperos sur la Open- Audit Enterprise mapo.<br/> <br/></p>';

$GLOBALS["lang"]['<p>A network is derived from discovery entries and device attributes.<br> <br></p>'] = '<p>Reto estas definita de eltrova.o kontribouj kaj aparato atroducas.<br/> <br/></p>';

$GLOBALS["lang"]['<p>A summary will display a list of items, grouped by the distinct values of the attribute specified by the <code>table</code> and <code>column</code> attributes.<br> <br>When a summary is executed, the result will be a list of distinct values for that <code>table</code> and <code>column</code>. There will be links on the values that allow the user to see the matching devices.<br> <br>If the attribute of <code>extra_columns</code> is populated, the resulting page will contain these columns in addition to the standard device columns.<br> <br></p>'] = '<p>Rezumo montros Listn de eroj, grupigitaj per la apartaj valoroj de la atention to prezigita per la <code>table</code> Kaj <code>column</code> De l \'aide.<br/> <br/>Kiam resuro estas efekkivigita, la rezulto estos lista de apartaj valoroj portio. <code>table</code> Kaj <code>column</code>. Eksistas ligiloj sur la Valoroj kiuj permesas al la uzanto vidi la egalajn aparatojn.<br/> <br/>La contribution <code>extra_columns</code> La rezulta pa<br/> <br/></p>';

$GLOBALS["lang"]['<p>Agents let you audit PCs without a discovery. Install the agent and it will check-in with the server each day and audit itself. It does not matter if your computers are firewalled, audit data will still appear in Open-AudIT.</p><p>When testing <strong>if</strong> an agent should perform actions, all three tests must pass (if the test is set). <strong>Then</strong> the actions are taken.</p>'] = '<p>Agentoj lasas vin a transfugedi Komputilojn sen malkovro. Instali la agenton kaj εi kontraus kun la servilo Ne gravas se viaj komputiloj estas pare- feu, revizio datumoj ankora</p><p>Testas de Kiam oni <strong>Se</strong> Agento devus elfari agojn, <strong>Tiam la</strong> La agoj estas prenitaj.</p>';

$GLOBALS["lang"]['<p>Applications are defined by you, the user and stored for Open-AudIT to use and associate with devices.<br> <br></p>'] = '<p>Aplikoj estas difinitaj fare de vi, la uzanto kaj stokita por Open- Audit por uzi kaj asocii kun aparatoj.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Attributes are stored for Open-AudIT to use for particular fields.</p>'] = '<p>Atributoj estas stokitaj por Open- Audit por uzi por specialaj kampraj.</p>';

$GLOBALS["lang"]['<p>Being able to determine which machines are configured the same is a major part of systems administration and auditing &ndash; and now reporting on that will be made simple and automated. Once you define your baseline it will automatically run against a set of devices on a predetermined schedule. The output of these executed baselines will be available for web viewing, importing into a third party system or even as a printed report.<br> <br> Baselines enable you to combine audit data with a set of attributes you have previously defined (your baseline) to determine compliance of devices.<br> <br> For example - you might create a baseline from a device running Centos 6 which acts as one of your apache servers in a cluster. You know this particular server is configured just the way you want it but you are unsure if other servers in the cluster are configured exactly the same. Baselines enables you to determine this.<br> <br> </p>'] = '<p>Povas determini kiuj ma apretinoj estas formitaj la sama estas grava parto de sistum administrativecio kaj revizio - kaj nun raportante privio estas farita simma kaj a skeptomatigita. Post kiam vi difinas linn bazlinion εi a skeptidtomate kuris kontraluc aro de aparatoj en ankeriasnevalt obellaks määratud horaro. La produktado de tiuj efekkivigitaj bazlinioj estas hasbla por interretspektado, importe en trian partian sistemon a spective e kiel presita raporto.<br/> <br/> Bazlinioj rajtigas vin kombini reviziodatenojn kun aro de atentioj kiujn vi anta<br/> <br/> Ekzample, vi eble kreos bazlinion de aparato prizorgata Centojn 6 kiu funkcias kiel unu el viaj apa reomendarserviloj en areto. L \'évolution de l\' emploi et de l \'emploi dans l\' Union européenne<br/> <br/> </p>';

$GLOBALS["lang"]['<p>Clusters are stored in Open-AudIT to associate devices to better record, manage and estimate licensing costs.<br> <br></p>'] = '<p>Aretoj estas stokitaj en Open- AudIT por asocii aparatojn al pli bona rekordo, administrateur kaj taksi licenciadkostojn.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Components is a generic term used for the tables that store the attributes for a device. Those tables are: access_point, arp, bios, certificate, cli_config, disk, dns, file, ip, license, log, memory, module, monitor, motherboard, netstat, network, nmap, optical, pagefile, partition, policy, print_queue, processor, radio, route, san, scsi, server, server_item, service, share, software, software_key, sound, task, usb, user, user_group, variable, video, vm, windows.</p><p> In addition we class the following tables also as device related: application, attachment, cluster, credential, image.</p>'] = '<p>Kompuntoj estas komuninnomo uzita por la bulloj kiuj stokas la atperiojn por aparato. Tiuj tabloj sano: alirputo, arp, bioj, aestilo, cli _ config, disquete, dns, dosiero, ip, licenco, tagalo, memoro, modulo, ekrano, paprintabulo, retstato, reto, retra, Nmap, optika, proteeselo programma</p><p> Krome ni klasifikas la sekvajn tabelojn ankai kiel aparaton ligitán: apliki fluido, alligita...</p>';

$GLOBALS["lang"]['<p>Credentials are encrypted when stored in the database.<br> <br>When a Discovery is run, a device has its credentials retrieved and tested for connection first (from the <code>credential</code> table). If these fail, then credentials associated with the given Org <code>credentials.org_id</code> is also tested against the device. Working credentials are stored at an individual device level in the credential table (note - no "s" in the table name).<br> <br>SSH keys are tested before SSH username / password. When testing SSH, credentials will also be marked as working with sudo or being root.<br> <br>For ease of use, Windows passwords should not contain a single or double quote. This is a remote WMI limitation, not an Open-AudIT limitation.<br> <br></p>'] = '<p>Crédenciales estas <br/> <br/>Kiam Discovery estas prizorgita, aparato havas siajn akredita... <code>credential</code> Tablo. Se tiuj malsukcesas, tiam akredita... <code>credentials.org_id</code> Én ankaestas presente kontra. la aparato. Laboraj akredita.oj estas stokitaj sur finundua aparatnivelo en la lunarktablo (noto - neniuj "j" en la tablonomo).<br/> <br/>SH-aprettosiloj estas estetaj anta. SSH-Urantinomo / pasvorton. Dum testado de SSH, akredita... oj anka...<br/> <br/>Por membrieco de uzo, Fenestroj ne devus enhavi ununuran épäilty duoblan citaononon. Tio estas malpreksima WMI- limigo, ne Open- Audit limigo.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Credentials are used to access devices.<br> <br>Configuring credentials should be one of the first things you do after installing Open-AudIT.<br> <br></p>'] = '<p>Credenciales kutimas aliri aparatojn.<br/> <br/>Konfiguraj akredita.oj devus esti unu el unuaj a kioj kiujn vi faras secretado post de Open- Audit.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Define your racks and assign devices into their positions. You already have your devices in Open-AudIT and you know your locations. Open-AudIT extends this to allow you to create a rack and assign devices to it. Open-AudIT will even provide a visualisation of the rack and the devices contained within. If you provide a device picture, that picture will be used in the visualisation. You can look at the rack on the screen and see the same items you would see if you were standing in front of it.<br> <br></p>'] = '<p>Difini viajn rakojn kaj asagi aparatojn en iliajn poziciojn. Vijam havas viajn aparatojn en Open- Audit kaj vi scias viajn lokojn. Audit etendas tion por permesi al vi krei rakon kaj asigni aparatojn al εi. Open- Audit e Se vi disponigas aparatobildon, tiu bildo esto uzita en la bildigo. Vi povas rigardi la rakon sur la ekrano kaj vidi la samajn erojn vidus se vi staris anta. Ah.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Devices on your network need to be managed. But how do you keep your records up to date? A spreadsheet - defintley not. That will be out of date in hours, if not days. Why manually try to keep up. Use Open-AudIT to automatically scan your networks and record your devices - manufacturer, model, serial and more than 100 other attributes. Full lists of software, services, disks, open ports, users, etc. Automatically see if an attribute has been added, removed or changed.<br> <br>Once Open-AudIT is setup, you can sit back and relax. Have change reports emailed to you on a schedule, for example - what new devices did we discover this week? What new software was installed this week? Were there any hardware changes last month?<br> <br>Expand on the stored fields easily with your own custom attributes.<br> <br>Even add devices that are not connected to your network or those devices your Open-AudIT server cannot reach.<br> <br>Computers, switches, routers, printers or any other device on your network - Open-AudIT can audit them all.<br> <br></p>'] = '<p>Aplikas via reto murtaa esti alkalmazás. Kiel vi tenas viajn discojn εis nunna? Ekskurseto - définition ne. Tio esto el dato en horoj, se ne tagoj. Kial vi provas elliti. Uzu Open- Aud IT por a Spectivetomate skani viajn retojn kaj registrei viajn aparatojn Plenaj listaj de softvaro, servoj, disquete, malfermaj hasnoj, uzantoj, ktp. Epäilty Tomata vido se atentio to estis aldonita, forigita epäilty tään pilaita.<br/> <br/>Kiam public Open- Audit estas aranaño, vi povas sidi malanta Tu veux bien? Kio nova programmaro estis instaliata Či- semajne? Te Sientes Mal?<br/> <br/>Aplikita sur la stokitaj kapoj kun facile via propra kutimo atteria as.<br/> <br/>E agenda aldoni paratojn kiuj ne estasligitaj al kaudu reto a Spective tiuj aparatoj via Open- Audit servilo ne povas atingi.<br/> <br/>Komputiloj, тaltiloj, alkuristoj, printiloj a epäillyn ajna alias aparato sur via reto - Open- Audit povas revizii ilin † iuj.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Discoveries are at the very heart of what Open-AudIT does.<br> <br>How else would you know "What is on my network?"<br> <br>Discoveries are prepared data items that enable you to run a discovery upon a network in a single click, without entering the details of that network each and every time.<br> <br></p>'] = '<p>Eltrova<br/> <br/>Kiel vi scias "Kio estas sur mia reto?"<br/> <br/>Eltrova<br/> <br/></p>';

$GLOBALS["lang"]['<p>Discovery Options are a global setting changed in the <a href="../configuration?configuration.name=discovery_default_scan_option">configuration</a>. If you have an Open-AudIT Enterprise license these are settable per discovery and in addition futher customizable as required. Discovery Options are as follows (including an indicitave time to scan an individual IP):<br/><br><strong>UltraFast</strong>: <i>1 second</i>. Scan only the ports that Open-AudIT needs to use to talk to the device and detect an IOS device (WMI, SSH, SNMP, Apple Sync). An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is not considered open. Device must respond to an Nmap ping. Use aggressive timing.<br><br/><strong>SuperFast</strong>: <i>5 seconds</i>. Scan the top 10 TCP and UDP ports, as well as port 62078 (Apple IOS detection). An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is not considered open. Device must respond to an Nmap ping. Use aggressive timing.<br/><br/><strong>Fast</strong>: <i>40 seconds</i>. Scan the top 100 TCP and UDP ports, as well as port 62078 (Apple IOS detection). An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is not considered open. Device must respond to an Nmap ping. Use aggressive timing.<br/><br/><strong>Medium (Classic)</strong>: <i>90 seconds</i>. As close to a traditional Open-AudIT scan as we can make it. Scan the top 1000 TCP ports, as well as 62078 (Apple IOS detection) and UDP 161 (SNMP). An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is considered open (and will trigger device detection). Devices are scanned regardless of a response to an Nmap ping. Use aggressive timing.<br/><br/><strong>Medium</strong>: <i>100 seconds</i>. Scan the top 1000 TCP and top 100 UDP ports, as well as port 62078 (Apple IOS detection). An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is not considered open. Device must respond to an Nmap ping. Use aggressive timing.<br/><br/><strong>Slow</strong>: <i>4 minutes</i>. Scan the top 1000 TCP and top 100 UDP ports, as well as port 62078 (Apple IOS detection). Version detection enabled. An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is considered open (and will trigger device detection). Device must respond to an Nmap ping. Use normal timing.<br/><br/><strong>UltraSlow</strong>: <i>20 minutes</i>. Not recommended. Scan the top 1000 TCP and UDP ports, as well as port 62078 (Apple IOS detection). Devices are scanned regardless of a response to an Nmap ping. Version detection enabled. An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is considered open (and will trigger device detection). Use polite timing.<br/><br/><strong>Custom</strong>: <i>Unknown time</i>. When options other than as set by a standard discovery preset are altered.<br><br></p>'] = '<p>Découverte Opcioj estas tutmonda scenaro <a href="../configuration?configuration.name=discovery_default_scan_option">(Konfiguracio)</a>. Se vi havas Open- Audit Enterprise licenceon tiaj estas aroblaj per eltrova.o kaj krome kunfandas kiel postulat. Découverte Opcioj estas kiel sekvas (inkluzive de pulvtempo por skani ininfuan IP):<br/><br/><strong>Ultrarapid</strong>: <i>1 sekundo</i>. Skalo nur la hasnoj kiuj Open- AudIT murtaa uzi por paroli al la aparato kaj detekti IOS- aparaton (WMI, SSH, SNMP, Apple Sync). Un an un an un an an <code>open|filtered</code> Hasno estas konsidrata malferma. A.A. <code>filtered</code> Pas d \'estas konsidrata malferma. Devas de dispositivo responsi al Nmap ping. Uzu agresmeni tempigon.<br/><br/><strong>Superkiire</strong>: <i>5 sekundoj</i>. Ska la supraj 10 TCP kaj UDP- havenoj, mismo kiel haveno 62078 (Omena IOS- detekto). Un an un an un an an <code>open|filtered</code> Hasno estas konsidrata malferma. A.A. <code>filtered</code> Pas d \'estas konsidrata malferma. Devas de dispositivo responsi al Nmap ping. Uzu agresmeni tempigon.<br/><br/><strong>Rapida Rapida</strong>: <i>40 sekundoj</i>. Ska la supraj 100 TCP kaj UDP- havenoj, mismo kiel haveno 62078 (Apple IOS- detekto). Un an un an un an an <code>open|filtered</code> Hasno estas konsidrata malferma. A.A. <code>filtered</code> Pas d \'estas konsidrata malferma. Devas de dispositivo responsi al Nmap ping. Uzu agresmeni tempigon.<br/><br/><strong>Kesmin (Klasika)</strong>: <i>90 sekundoj</i>. Kiel preksima al tradicia Open- Audit- skanado kiam ni povas fari liukoinen. Scan la supraj 1000 TCP- havenoj, mismo kiel 62078 (Apple IOS- detekto) kaj UDP 161 (SNMP). Un an un an un an an <code>open|filtered</code> Hasno estas konsidrata malferma. A.A. <code>filtered</code> hasno estas konsiderita malferma (kaj ellas aparatosdetekton). Aparatoj estas skanitaj nekonsiderante respono al Nmap- ping. Uzu agresmeni tempigon.<br/><br/><strong>Médias</strong>: <i>100 sekundoj</i>. Ska la supraj 1000 TCP kaj supraj 100 UDP- havenoj, mismo kiel haveno 62078 (Omena IOS- detekto). Un an un an un an an <code>open|filtered</code> Hasno estas konsidrata malferma. A.A. <code>filtered</code> Pas d \'estas konsidrata malferma. Devas de dispositivo responsi al Nmap ping. Uzu agresmeni tempigon.<br/><br/><strong>mallariidi</strong>: <i>4 perc</i>. Ska la supraj 1000 TCP kaj supraj 100 UDP- havenoj, mismo kiel haveno 62078 (Omena IOS- detekto). Versio- detekto ebligis. Un an un an un an an <code>open|filtered</code> Hasno estas konsidrata malferma. A.A. <code>filtered</code> hasno estas konsiderita malferma (kaj ellas aparatosdetekton). Devas de dispositivo responsi al Nmap ping. Terigon Uzu Normaalne.<br/><br><strong>UltraSlow</strong>: <i>20 perc</i>. Ne remomendinda. Ska la supraj 1000 TCP kaj UDP- havenoj, mismo kiel haveno 62078 (Omena IOS- detekto). Aparatoj estas skanitaj nekonsiderante respono al Nmap- ping. Versio- detekto ebligis. Un an un an un an an <code>open|filtered</code> Hasno estas konsidrata malferma. A.A. <code>filtered</code> hasno estas konsiderita malferma (kaj ellas aparatosdetekton). Uzu Bonan tempigon.<br><br/><strong>kutimo</strong>: <i>tempo Nekonata</i>. Kiam opcioj krom kiel metite per el normatrova.o preset besoin de janoncianaj.<br/><br/></br></br></p>';

$GLOBALS["lang"]['<p>Groups are used as simple lists of devices that match the required conditions. If requested using JSON they return a list of <code>devices.id</code> only. If requested using the web interface, they return the standard column attribute list.<br> <br></p>'] = '<p>Grupoj estas utiligitaj kiel simplaj listaj de aparatos kiuj egalas la postulatajn kontircaojn. La demande de l \'Union européenne <code>devices.id</code> Meur. Se postuladite uzante la interretinterfacon, ili resendas la norman kolumnon atantine as listan.<br/> <br/></p>';

$GLOBALS["lang"]['<p>If the user logging on to Open-AudIT does not have the access to search LDAP (and you are using OpenLDAP), you can use another account which does have this access. Use the <code>ldap_dn_account</code> and <code>ldap_dn_password</code> to configure this.<br> <br><strong>Helpful Documentation</strong><br> <br>
        <a href="/index.php/auth/help">General Auth Help</a><br> <br>
        <a href="/index.php/faq?name=Using Entra for Auth">Using Entra for Auth</a><br> <br>
        <a href="/index.php/faq?name=Using OKTA for Auth">Using OKTA for Auth</a><br> <br>
        <a href="/index.php/faq?name=Troubleshooting LDAP Logins">Troubleshooting LDAP Logins</a><br> <br>
        <a href="/index.php/faq?name=Users, Roles and Orgs">Users, Roles and Orgs</a><br> <br></p>'] = '<p>Se la uzanto registradanta al Open- Audit ne havas la aliro ser planadoi LDAP (kaj vizas uzas OpenLDAP), vi povas uzielian raporton kiu havas tiun aliro. Uzu la <code>ldap_dn_account</code> Kaj <code>ldap_dn_password</code> La déclaration de Por Agordi.<br/> <br/><strong>Aidema dokumentado</strong><br/> <br/><a href="/index.php/auth/help"></a><br/> <br/><a href="/index.php/faq?name=Using Entra for Auth">Urante entra por Auth</a><br/> <br/><a href="/index.php/faq?name=Using OKTA for Auth">Uzante OKTA por Aut</a><br/> <br/><a href="/index.php/faq?name=Troubleshooting LDAP Logins">Ongelma de LDAP sisslogimiini</a><br/> <br/><a href="/index.php/faq?name=Users, Roles and Orgs">Uzantoj, Roloj Kaj Orgs</a><br/> <br/></p>';

$GLOBALS["lang"]['<p>If you add a device type, to display the associated icon you will have to manually copy the .svg formatted file to the directory:<br><em>Linux</em>:/usr/local/open-audit/public/device_images<br><em>Windows</em>: c:\xampp\htdocs\open-audit\device_images<br> <br>If you add a location type, to display the associated icon you will have to manually copy the 32x32px icon to the directory:<br><em>Linux</em>:/usr/local/open-audit/public/images/map_icons<br><em>Windows</em>: c:\xampp\htdocs\open-audit\images\map_icons</p><p>When the <i>resource</i> is a <code>device</code>, valid <i>types</i> are: <code>class</code>, <code>environment</code>, <code>status</code> and <code>type</code>. If the <i>resource</i> is <code>locations</code> or <code>org</code> the only valid <i>type</i> is <code>type</code>. If the <i>resource</i> is a <code>query</code> the only valid <i>type</i> is <code>menu_category</code>.</p>'] = '<p>Se vi aldonas paratospecon, por elmontri la rilatan ikonon vi des mane kopii la .svg formatis dosieron al la adresaro:<br/><em>Linukso</em>/ usr / loka / malferma- audit / publika / devicen _ images<br/><em>Fenestroj</em>c: \'\ xamp\' htdocs \'open- audit\ device _ images<br/> <br/>Se vi aldonas loksspecton, por elmontri la rilatan ikonon vi des mane kopii la 32x32px ikonon al la adresaro:<br/><em>Linukso</em>/ usr / loka / malferma- audit / publika / bildo / map _ ikoonid<br/><em>Fenestroj</em>c: "\ xamp \'htdocs\' open - audit\ images\ map _ ikoonid</p><p>Kiam la <i>jandedruurso</i> eszta <code>device</code>valid <i>Tipoj</i> Értékelések: <code>class</code>, <code>environment</code>, <code>status</code> Kaj <code>type</code>. Se <i>jandedruurso</i> eszta <code>locations</code> a <code>org</code> La sola Vali <i>tipo</i> eszta <code>type</code>. Se <i>jandedruurso</i> eszta <code>query</code> La sola Vali <i>tipo</i> eszta <code>menu_category</code>.</p>';

$GLOBALS["lang"]['<p>If you intend to completely audit your cloud machines, do not forget you will also need those credentials saved in Open-AudIT.</p><p>Make sure you allow the correct ports if you are using Microsoft Azure (22 for SSH, etc). Check your Virtual Machine -> Networking rules.<br> <br></p>'] = '<p>Se vi intencas tute revizii viajn nubajn ma apretinojn, ne forgesu kee vi ankainabezonos tiujn akredita.ojn savitajn en Open- Audit.</p><p>Certigu ke vi permesas la εustann hasnojn se vizas Microsoft Azure (22 por SSH, ktp.). Kontrau vian virtualan ma apretinon - Retaj reguloj.<br/> <br/></p>';

$GLOBALS["lang"]['<p>If you select a List type, the "values" field will be enabled. You should put a comma separated list of selectable values here. These will display in a dropdown box whenever the field is edited.<br> <br>Like most other attributes, Fields can be bulk edited. Use the Bulk Edit function as you normally would and you will see the Fields are available for input.<br> <br>View the device details screen, open the section containing the field and (if you have sufficient access) you can click on the field value to edit it.<br> <br></p>'] = '<p>Se vi elektas Lista tipon, la "valoroj" kampo esto ebligitaj. Vi devus meti komon apartigita Lista de fajnaj valoroj clari huulet. Tiuj elmontros en goto- kesto kiam la kampo estas redaktita.<br/> <br/>Kiel la pléj multaj aliasj atregultoj, Kampoj povas esti grocaj redactis. Uzu la Bulk Edit- funkcion kiam vi normale faris kaj vidos ke la Kampoj estas hasblaj por eniga.<br/> <br/>Vidante la aparaton detalekrano, malfermi la sekcion enhavantan la kampon kaj (se vi havas sufibraan aliron) Vi povas klaki sur la kampampvalo por redakki... in.<br/> <br/></p>';

$GLOBALS["lang"]['<p>In the ever-changing world of computer security where new vulnerabilities are being discovered and patched every day, enforcing security compliance must be a continuous process. It also needs to include a way to make adjustments to policies, as well as periodic assessment and risk monitoring. The OpenSCAP ecosystem provides tools and customizable policies for a quick, cost-effective and flexible implementation of these processes.</p>'] = '<p>En la iam- ajna- varia mondo de komputionskuleco kie novaj vundeblecoj estas malkovritaj kaj pecetigitaj... ja devigi sekurecobservaton... La OpenSCAP ekositemo disponigas iljn kaj adaptitajn politikojn por rafa, kostefika kaj freksebla efektivigo de tiaj procezoj.</p>';

$GLOBALS["lang"]['<p>Integrations allow you to setup device selection and schedules for Open-AudIT to talk to external systems.<br> <br></p>'] = '<p>Integrij permesas al vi instali aparatoselektadon kaj horarojn por Open- Audit por paroli al eksteraj sistemoj.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Microsoft Windows desktop systems have network limitations that may impact the performance of Open-AudIT. The TCP/IP stack limits the number of simultaneous incomplete outbound TCP connection attempts. After the limit is reached, subsequent connection attempts are put in a queue and will be resolved at a fixed rate (10 per second). If too many enter the queue, they may be dropped. And finally, Apache will be restarted by the OS. For this reason, installing Open-AudIT on a Windows desktop operating system is not supported.<br><br>There is nothing wrong with the Open-AudIT code, nor can we do anything to address this issue on Windows client machines.'] = '<p>Microsoft Fenestroj havas retlimigojn kiuj povas trafi la prezenton de Open- Audit. La TCP / Ip- stako limigas la nombron da samtempaj nekompletaj ралика TCP- ligprovoj. Poste kiam la limo estas atingita, postaj konektprovoj estas metitaj enendovicon kaj estos solvitaj Če fixea rapideco (10 par sekundo). Setro multaj eniras la atendon, ili povas esti faligitaj. Kaj finfinine, a volar estos rekomencita fare de la Os. Tial, instali Open- Audit sur Windows- tablo opéracium ne estas apogita.<br/><br/>Ekzistas nenio mal</p>';

$GLOBALS["lang"]['<p>Nmap timing details are found on the bottom of this linked page <a href="https://nmap.org/book/man-performance.html" target="_blank">https://nmap.org/book/man-performance.html</a>. From that page:<br> <br><em>If you are on a decent broadband or ethernet connection, I would recommend always using -T4 (Aggressive). Some people love -T5 (Insane) though it is too aggressive for my taste. People sometimes specify -T2 (Polite) because they think it is less likely to crash hosts or because they consider themselves to be polite in general. They often do not realize just how slow -T2 really is. Their scan may take ten times longer than a default scan. Machine crashes and bandwidth problems are rare with the default timing options -T3 (Normal) and so I normally recommend that for cautious scanners. Omitting version detection is far more effective than playing with timing values at reducing these problems.</em><footer>Gordon <i>Fyodor</i> Lyon</footer><br> <br></p>'] = '<p>Nmap tempigas detalojn estastrovitaj sur la fondo de tiuligita pacomamento <a href="https://nmap.org/book/man-performance.html" target="_blank">https: / / nmap.org / libro / man- performance.html</a>. De tiu paεo:<br/> <br/><em>Se vi estas sur deka gradidabendo a defect etero ligo, mi remomendus Čiam uzi T4 (Agres). Kelkaj homoj amas - T5 (Insane) kvankam liquiciulici estos tro agreesema por mia gusto. Homoj foje prezigas Ili overse ne ekkomprenas ekzakte kiom malladrapa - T2 vere estas. Ilia skanado povas preni dek fojojn pli lowe ol deva guidlta skanado. Ma apretinkra apretoj kaj bendolarεproblemooj estas raraj kun la dea guidtlataj tempigelektoj - T3 (normaalne) kaj tien mi normale rekomendastion por singardaj skaniloj. Uzanta versio detekto estas multe pli efika ol ludado kun tempigvaloroj Reduktado de tiauj problemoj.</em><footer>C \'est Gordon. <i>Fjodore</i> Lyonnais</footer><br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT can be configured to use different methods to authenticate a user and in addition, to create a user account using assigned roles and orgs based on group membership.<br> <br></p>'] = '<p>Open- Aud IT povas esti formita por uzi malsamajn metodojn por a skeptigi uzanton krome, krei uzantonton uzantan rolojn kaj ogojn bazitaj n sur grupmembreco.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT can retrieve details about a file or directory of files and monitor these files for changes as per other attributes in the Open-AudIT database.<br> <br>This feature works out of the box for Linux Open-AudIT servers, but needs a change to the service account name under a Windows Open-AudIT server.<br> <br>Supported clients are Windows and Linux.<br> <br></p>'] = '<p>Ava- Aud <br/> <br/>Tiu trajto laboras el la kesto por Linukso Open- Audit- serviloj, sed bezonas ð аkorúak иваниминълAL la serkokonomo sub Windows Open- Audit- servilo.<br/> <br/>Subtenitaj kliventoj estas Fenestroj kaj Linukso.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT can retrieve details about a file, ask the native package manager if they are known to it and monitor these files for changes as per other attributes in the Open-AudIT database.<br> <br>Supported clients are Linux only.<br> <br></p>'] = '<p>Ava- Aud Tämä asetus sur kaikilta osiltaan velvoittava, ja sitä sovelletaan sellaenaan kaikissa jäsenvaltioissa.<br/> <br/>Subtenitaj klientoj estas Linukso nur.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT can store information in custom fields that are associated with each device.<br> <br>Once an Additional Field has been created it can be used in queries and groups just like any other attribute in the database.<br> <br></p>'] = '<p>Ava- Aud - I povas stoki informatojn en specialadaptitaj kamopj kiuj estas rilataj al <br/> <br/>Poste kiam Täiendav väli estis kreita εi povas esti uzita en demandeoj kaj grupoj ekzakte kiel iu alias atiguto en la datumbazo.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT comes with many queries inbuilt. If you require a specific query and none of the pre-packaged queries fit your needs, it is quite easy to create a new one and load it into Open-AudIT for running.<br> <br></p>'] = '<p>Open- Aud IT venas kun multaj demandoj enconruitaj. Se vi postulas specifan atendon kaj neniu el la anta... -pakitaj demandoj konvenas viajn bezonojn, estas tre facile krei novan kaj родном in en Open- Audit por kurado.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT comes with many summaries inbuilt. If you require a specific summary and none of the pre-packaged summaries fit your needs, it is quite easy to create a new one and load it into Open-AudIT for running.<br> <br></p>'] = '<p>Open- Aud IT venas kun multaj resumoj enconruitaj. Se vi postulas specifan revolin kaj neniu el la anna supportaj resumoj konvenas viajn bezonojn, estas tre facile krei novan kaj роднодили en Open- Audit por kurado.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT is supported by FirstWave with an amazing level of support. If you prefer an active community of support givers, theres that as well. Where else can you talk directly to the developers and get a response within 24 hours? Just try that with other products! Amazing support. Full stop. You need support, we provide support. No ifs or buts. Great support. Period.<br> <br></p>'] = '<p>Open- Aud Esta apogita fare de First Laine kun mirinda nivelo de subteno. Se vi preferas aktivan komunimon de subteno, huulet ankait. Kie vi povas paroli rekte al la programmistoj kaj ričevi responson ene de 24 horoj? Provution kun alfaj produktoj! Frapanta subteno. Plena Halto. Vi bezonas subtenon, ni propezas subtenon. Neniu sur Katlustav Pugo. Granda Subteno. Termo.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT provides multi-tenancy out of the box!<br> <br>Orgs (organisations) in Open-AudIT are a key item. A user has a primary Org as well as a list of Orgs they can access. A user combines this with a list of assigned "Roles" that define what actions they can take on items assigned to the Orgs they have access to. The combination of a users "orgs" and "roles" define what they can and cannot do within Open-AudIT.<br> <br>Most items in Open-AudIT are assigned to an Org. Devices, Locations, Networks, etc.<br> <br>Orgs can have child Orgs. Think of an organisational chart (tree) structure. If a user has access to a specific Org, they also have access to that Orgs descendants. For more information, see this <a href="/index.php/faq?name=Users, Roles and Orgs">FAQ</a>.</p>'] = '<p>Open- Aud Disponigas multitenance el la skatolo!<br/> <br/>Orgs (organizoj) en Open- Audit estas esenca objectko. Uzantoj havas primaran Org mismo kiel Lister de Orgas kiun ili povas aliri. Uzanto Kombinas tion kun lista de asignitaj "Roles" kiuj difinas kion agoj ili povas preni erojn asignitaj al la Orgs kiujn ili havas al. La kobina<br/> <br/>La plej multaj eroj en Open- Audit estas asignitaj al Org. Dispositivos, Lokoj, Retoj, ktp.<br/> <br/>Orgoj povas havi Infanon Orgs. Pensu pri organiza kaavio (arbo) strukturo. Se uzanto havas aliron al specifa Org, ili anka. L \'objectif est d\' améliorer la qualité de l \'eau. Por pli da informaj, vidu <a href="/index.php/faq?name=Users, Roles and Orgs">Demande KKK</a>.</p>';

$GLOBALS["lang"]['<p>Open-AudIT provides multi-tenancy out of the box!<br> <br>Orgs (organisations) in Open-AudIT are a key item. A user has a primary Org as well as a list of Orgs they can access. A user combines this with a list of assigned "Roles" that define what actions they can take on items assigned to the Orgs they have access to. The combination of a users "orgs" and "roles" define what they can and cannot do within Open-AudIT.<br> <br>Most items in Open-AudIT are assigned to an Org. Devices, Locations, Networks, etc.<br> <br>Orgs can have child Orgs. Think of an organisational chart (tree) structure. If a user has access to a specific Org, they also have access to that Orgs descendants.</p>'] = '<p>Open- Aud Disponigas multitenance el la skatolo!<br/> <br/>Orgs (organizoj) en Open- Audit estas esenca objectko. Uzantoj havas primaran Org mismo kiel Lister de Orgas kiun ili povas aliri. Uzanto Kombinas tion kun lista de asignitaj "Roles" kiuj difinas kion agoj ili povas preni erojn asignitaj al la Orgs kiujn ili havas al. La kobina<br/> <br/>La plej multaj eroj en Open- Audit estas asignitaj al Org. Dispositivos, Lokoj, Retoj, ktp.<br/> <br/>Orgoj povas havi Infanon Orgs. Pensu pri organiza kaavio (arbo) strukturo. Se uzanto havas aliron al specifa Org, ili anka. L \'objectif est d\' améliorer la qualité de l \'eau.</p>';

$GLOBALS["lang"]['<p>Quickly view the status of devices on your network.<br> <br></p>'] = '<p>Rapide rigardi la station de aparatoj sur via reto.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Roles in Open-AudIT are a key item. A user has a primary Org as well as a list of Orgs they can access. A user combines this with a list of assigned Roles that define what actions they can take on items assigned to the Orgs they have access to. The combination of a users "orgs" and "roles" define what they can and cannot do within Open-AudIT.<br> <br>
        Get the complete Open-AudIT Enterprise experience. Creating roles allows fine grained control over what your users can do within Open-AudIT.<br> <br>
        The primary method for authorisation (what a user can do) is based on the users Roles. Default roles are defined as admin, org_admin, reporter and user. Each role has a set of permissions (Create, Read, Update, Delete) for each endpoint. The ability to define additional roles and edit existing roles is enabled in Open-AudIT Enterprise.<br> <br>Roles can also be used with LDAP (Active Directory and OpenLDAP) authorisation. Enterprise licensed installations have the ability to customise the LDAP group for each defined role.<br> <br></p>'] = '<p>Roloj en Open- Aud.i estas esenca objectko. Uzantoj havas primaran Org mismo kiel Lister de Orgas kiun ili povas aliri. Uzanto Kombinas tion kun lista de asignitaj roloj kiuj difinas kiuj haejn ili povas preni erojn asignitaj al la Orgs kiujn ili havas aliron al. La kobina<br/> <br/>Akiri la kompletaani Open- Audit Enterprise sperton. Kreante rolojn permesas al Bona Grenita kontrolo de pion viaj uzantoj povas fari ene de Open- Audit.<br/> <br/>La primara metodo por apuro (kio uzanto povas fari) estas bazita sur la uzantroloj. Defa.ltaj roloj estas difinitaj kiel admin, org _ admin, raportisto kaj uzanto. imitaiu rolo havas aron de permesoj (Crear, Leeri, Actualisar, Eliminar) por. La kapablo difini kromajn rolojn kaj redakti ekzistajn rolojn estas ebligita en Open- Audit Enterprise.<br/> <br/>Roloj anka Yrities licence installation<br/> <br/></p>';

$GLOBALS["lang"]['<p>Rules examine attributes and make cahnges based on the appropriate rule.</p>'] = '<p>Sous- Finlande.org....:</p>';

$GLOBALS["lang"]['<p>Scanning options allow you to easily apply a set of options to a discovery.<br> <br></p>'] = '<p>Skanaj opcioj permesas al vi facile apliki aron de opcioj al eltrova.o.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Simple, intuitive, accurate geographic mapping provided by Google Maps. Open-AudIT leverages Google Maps to provide live, interactive geographic mapping of device locations. Automated conversion of street addresses to geocodes and longitude / latitude.<br> <br>
        </p>'] = '<p>Simpla, intuicia, preaza geografia madado disponigita par Google Maps. Audit- fortuloj ouvert Google Maps por disponigi vivan, interagan geografian mapadon de aparatolokoj. Ashitomata konverti<br/> <br/></p>';

$GLOBALS["lang"]['<p>Software Packages are used to determine if antivirus, backup, firewall, approved or banned software is installed.<br> <br></p>'] = '<p>Softvarpakadoj kutimas determini... u kontra... vírus, rezervo...<br/> <br/></p>';

$GLOBALS["lang"]['<p>Some examples of valid Subnet attributes are: 192.168.1.1 (a single IP address), 192.168.1.0/24 (a subnet), 192.168.1-3.1-20 (a range of IP addresses).<br> <br><em>NOTE</em> - Only a subnet (as per the examples - 192.168.1.0/24) will be able to automatically create a valid network for Open-AudIT. <br> <br>If you use an Active Directory type, make sure you have appropriate credentials to talk to your Domain Controller already in <a href="../credentials">credentials</a>.<br> <br></p>'] = '<p>Kelkaj eczemoj de Valij Subnet atperioj estas: 192.168.1.1.1 (unuopa.o IP- adreso), 192.168.11-3.11-20 (intervalo de IP- adresoj).<br/> <br/><em>Ei</em> Nur subreto (kiel per la ekzemoj - 192.168.1.0 / 24) povos a skeptomate krei validn reton por Open- Audit. <br/> <br/>Se vi uzas Aktivan Adresarspexon, certigu ke vi havas konvenajn akredita. ojn por paroli al via Domain Controller jam fr <a href="../credentials">Akredita</a>.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Standards are stored in Open-AudIT.<br /><br /><br /><br /></p>'] = '<p>Normoj estas stokitaj en Open- Audit.<br/><br/><br/><br/></p>';

$GLOBALS["lang"]['<p>Supported clients are Linux only.<br> <br></p>'] = '<p>Subtenitaj klientoj estas Linukso nur.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Tasks have a schedule that mirrors the unix cron schedule. The attributes for minute, hour, day_of_month, month, day_of_week all act as per the cron definitions. You can select multiples of these using comma seperated values (no spaces). You can select every value using *.<br> <br>The <code>type</code> of the task can be one of: baselines, collectors, discoveries, queries, reports or summaries.<br> <br>If you wish to schedule a Baseline or Discovery, you will need to create these before creating the tasks. You must use the ID of the type of item in <code>sub_resource_id</code>. For example if you wish to schedule a Discovery, use that particular Discoveries ID in <code>sub_resource_id</code>.<br> <br>The value for <code>uuid</code> is specific to each Open-AudIT server. Your unique value can be found in the configuration.<br> <br>The <code>options</code> attribute is a JSON document containing any extra attributes required to run the task. The extra attributes for reports, queries and summaries are: <code>email_address</code> and <code>format</code>. The extra attribute for Bselines is <code>group_id</code>.<br> <br></p>'] = '<p>Taskoj havas horaron kiu spegulas la unix Kron Horaron. La atentioj por minuto, horo, tag _ of _ monato, mononato, tag _ of _ semajno Funkcias kiel par la kno difinoj. Vi povas selekti multoblojn de tiiuj uzantaj komm seentiajn valorojn (neniuj spacoj). Vio povas elekti <br/> <br/>La <code>type</code> La tapo povas esti unu el: bazlinioj, kolektantoj, eltrova.oj, demandoj, raportoj a resumoj.<br/> <br/>Se vi deziras plani Bazlinion on katlus Discovery, vi bezonos krei tiiujn antaluc kreado de la takoj. Vi bruts uzi la ID de la tipo de objectkto en <code>sub_resource_id</code>. Ekzample se vi deziras plani Discovery, uzi tiun spesialian Malkovron <code>sub_resource_id</code>.<br/> <br/>Valoro <code>uuid</code> Estos espectros por Via unika valoro povas esti trovita en la konfiguracio.<br/> <br/>La <code>options</code> Atributo estas JSON dokumento enhavanta jujn ejn ekstrajn atdostojn postulatajn por prizorgi la tason. La ekstraj atregultoj por raportoj, demandoj kaj resumoj estas: <code>email_address</code> Kaj <code>format</code>. La ekstra attria to por Bselines estas <code>group_id</code>.<br/> <br/></p>';

$GLOBALS["lang"]['<p>The <code>type</code> of the location will assign its icon.<br> <br></p>'] = '<p>La <code>type</code> La loko asigna Sianikonon.<br/> <br/></p>';

$GLOBALS["lang"]['<p>The Attributes endpoint allows you to add customized values to different attributes in Open-AudIT, at the moment this feature works on the Class, Environment, Status and Type attributes on Devices, the Type attribute for both Locations and Orgs as well as the Menu Category for Queries. If you view an item of one of the prvious types (say view a Lkocation) you will notice the Type attribute must be selected from a drop-down box. This is where those values are stored. Hence, if you would like to add a new Type to be chosen for a Location, add it using the Attributes feature.</p>'] = '<p>La Atributoj finpunkto permesas al vi aldoni adapttajn valorojn al malsamaj atinattoj en Open- Audit, en la momento tiu trajto laboras pri la klaso, Environment, Stato kaj Tipo atinary as sur Devices, la Tipo atinary as al kaj Lokoj kaj Orgs same kiel la Menu Kategorio por Päringud. Se vi rigardas eron de unu el prviosspectoj (dirvido Lkation) vi rimarkos ke la Tipo atantia as desges esti selektita el fal- falinta kesto. Tio estas kie tiau Valoroj estas stokitaj. Tial, se vi griatus aldoni novan Tipon por esti elektronita por Loko, aldoni εin uzante la Atributoj trajto.</p>';

$GLOBALS["lang"]['<p>The Collectors feature enables you to easily manage many "collector" computers that perform network discovery. All Collectors are centrally controlled from the Server. The only required network ports between the Collector and the Server are 80 and/or 443.<br> <br>It makes managing disparate networks quick, easy and simple. Open-AudIT Enterprise licensees get a single collector license included and have the option to buy more as required..<br> <br></p>'] = '<p>La kolektantoj igas vin facile administri multajn "kolktilon" kiuj elfaras sendostacian eltrova. imitaiuj kommunktantoj estas center kontrolitaj de la Servilo. La nuraj postulataj rethavenoj inter la kolektanto kaj la Servilo estas 80 kaj / a. 443.<br/> <br/>. Audit ouvert environmentalicoj ricevas ununuran kolektantlicencon inkludis kaj havas la opcion por arcaeti pli kie postulat.<br/> <br/></p>';

$GLOBALS["lang"]['<p>The SELECT section of your SQL <em>must</em> contain fully qualified columns. IE - <code>SELECT devices.id AS `devices.id`, devices.name AS `devices.name` ...</code>.<br> <br>The WHERE section of your SQL <em>must</em> contain <code>WHERE @filter</code> so Open-AudIT knows to restrict your query to the appropriate Orgs. SQL not containing this condition will result in the query failing to be created, unless you have the Admin role.<br> <br>An example query SQL showing attributes on devices that have an <code>os_group</code> attribute of "Linux" - <br><code>SELECT devices.id AS `devices.id`, devices.icon AS `devices.icon`, devices.type AS `devices.type`, devices.name AS `devices.name`, devices.os_name AS `devices.os_name` FROM devices WHERE @filter AND devices.os_group = "Linux"</code><br> <br></p>'] = '<p>La SELECT sekcio de via SQL <em>Dévas</em> Enhavas terv kvalifikitajn kolonojn. IE - IE <code>SELECT devices.id AS `devices.id`, devices.name AS `devices.name` ...</code>.<br/> <br/>La sekcio de via SQL <em>Dévas</em> enhava <code>WHERE @filter</code> Tiel Open- Aud Escias limigi vian atendon al la konvenaj Orgs. SQL ne enhavanta tiun Kontrircaon rezultigos la atendon malsukcesantan esti kreita, se vi havas la Admin rolon.<br/> <br/>Ekzemplo kysely SQL Montranta atregattojn sur aparatoj kiuj havas <code>os_group</code> Linukso <br/><code>SELECT devices.id AS `devices.id`, devices.icon AS `devices.icon`, devices.type AS `devices.type`, devices.name AS `devices.name`, devices.os_name AS `devices.os_name` FROM devices WHERE @filter AND devices.os_group = "Linux"</code><br/> <br/></p>';

$GLOBALS["lang"]['<p>The SELECT section of your SQL <em>must</em> only contain <code>DISTINCT(devices.id)</code>.<br> <br>The WHERE section of your SQL <em>must</em> contain <code>WHERE @filter</code> so Open-AudIT knows to restrict your query to the appropriate Orgs. SQL not containing this condition will result in the group failing to be created.<br> <br>An example for SQL to select all devices running the Debian OS - <code>SELECT DISTINCT(devices.id) FROM devices WHERE @filter AND devices.os_family = "Debian"</code><br> <br></p>'] = '<p>La SELECT sekcio de via SQL <em>Dévas</em> Nur enhavas <code>DISTINCT(devices.id)</code>.<br/> <br/>La sekcio de via SQL <em>Dévas</em> enhava <code>WHERE @filter</code> Tiel Open- Aud Escias limigi vian atendon al la konvenaj Orgs. SQL ne enhavanta tiun kontircaon rezultigos la grupon malsukcesantan esti kreita.<br/> <br/>Ekzemplo por SQL selekki Čiujn aparatojn kurantajn la Debian Os... <code>SELECT DISTINCT(devices.id) FROM devices WHERE @filter AND devices.os_family = "Debian"</code><br/> <br/></p>';

$GLOBALS["lang"]['<p>The license endpoint allows you to track the number of licenses found on your devices.<br> <br>To create an entry to track your licenses you <em>must</em> to provide a name, an organization, the number of licenses acquired and the name of the software. On the field <code>match_string</code> you must provide the name of the software that you want to track, you can use the percent sign (%) as a wildcard in the match_string.<br> <br></p>'] = '<p>La licencia finpunkto permesas al vi printi la nombron da licencidojtrovitaj sur viaj aparatoj.<br/> <br/>Pour l \'ensemble de l\' Union européenne <em>Dévas</em> Por disponigi nomon, organistie, la nombro da licencidoj akiris kaj la nomon de la softvaro. Sur la kampo <code>match_string</code> Vi breases providonzi la nomon de la programmaro kiun vi volas printi, vi povas uzi la procentán signon (%) kiel sova fauan karton en la mat gagendo.<br/> <br/></p>';

$GLOBALS["lang"]['<p>The network should be in the format 192.168.1.0/24.<br> <br></p>'] = '<p>La reto devus esti en la forma 192.168.1.0 / 24.<br/> <br/></p>';

$GLOBALS["lang"]['<p>The primary and optional secondary items should be fully qualified - ie, devices.type or software.name.<br> <br></p>'] = '<p>La primaraj kaj la auditvolaj sekudaraj eroj devus esti lene kvalifikitaj - tese, aparatoj. programita. Nomo.<br/> <br/></p>';

$GLOBALS["lang"]['<p>There is no need to do anything if you are running Open-AudIT on a Linux server.<br>
<br>
Windows clients are just fine and require no special actions, however.... to enable this feature the audit script must be run locally on the target Windows system. It cannot be run remotely as we do with WMI calls when running the audit script on one Windows machine, while targeting a second Windows machine. To do this we need to copy the audit script to the target Windows machine and then run it. Unfortunately the service account that Apache runs under is the Local System account. This account has no access to remote (network based) resources. To work around this issue the service must be run under another account. It is easiest to just use the local Administrator account, but you can try any account you like as long as it has the required privileges. The Local System account has as much local access as the local Administrator account.<br>
<br>
See our page on enabling <a href="/index.php/faq?name=Running Open-AudIT Apache Service Under Windows">Running Open-AudIT Apache Service Under Windows</a></p>'] = '<p>Eksistas neniu bezono farenda.o io ajn se vi prizorgas Open- Audit sur Linukso- servilo.<br/><br/>Fenestroj estas justaj kaj postulas neniujn specialajn agojn, aliflanke... rajtigi tiun trajton la reviziomanuskripto provises et prizorgita loke sur la cel Windows- sistemon. Por farition ni murs kopii la reviziomanuskripton al la celo Windows- ma agotadono kaj tiam prizorgi εin. Beda auditrinde la servikonto ke apa planekuroj sub estas la Local System- konto. Tiu raporto havas neniun aliron al malpreksimaj (reto bazita) resursoj. Por labouri... irka epäilty tiu temo la servo brunces esti prizorgita sublison. Estas plej facile uzi la lokan Administrateur konton, sed vi povas providation ajnan raporton vi kiel lowe kiel εi havas la postulatajn saltjn. La Loka Sistemo- konto havas tien multe da loka aliro kiel la loka Administramento - koto.<br/><br/>Vidu nian pa Ebliga <a href="/index.php/faq?name=Running Open-AudIT Apache Service Under Windows">Kuranta Open Audit Apache Service Sub Fenestroj</a></p>';

$GLOBALS["lang"]['<p>These are the devices that live within a rack.<br> <br></p>'] = '<p>Tiuj estas la paratoj kiuj vivas ene de rako.<br/> <br/></p>';

$GLOBALS["lang"]['<p>This endpoint enables you to add your cloud infrastructure details. Open-AudIT will then reach out to your clouds using their native API and return your servers, just like any other device in Open-AudIT.<br> <br><em>NOTE</em> - To use this feature, we <em>must</em> enable the configuration items match_mac (for AWS) and match_hostname (for Azure). This will be done automatically the first time a cloud discovery is executed.<br> <br>Credentials for your cloud (<a href="/index.php/faq?name=Credentials for Microsoft Azure used in Cloud Discovery">Azure</a> or <a href="/index.php/faq?name=Credentials for Amazon AWS used in Cloud Discovery">AWS</a>) are required.<br> <br></p>'] = '<p> L \'aide à la création d\' un centre d \'information sur l\' environnement et l \'environnement. Open- Audit tiam atingos viajn nubojn uzante ilan indiilibleenan API kaj revenos viajn servilojn, mismo kiel iu alias aparato en Open- Audit.<br/> <br/><em>Ei</em> Gépkocsi <em>Dévas</em> ebligi la agordon erojn mat previstoo _ mac (por AWS) kaj mat previstoo _ hostname (por Azure). Tio estas farita a limittomate la unuan fojon nubotrova.o estas efektivigita.<br/> <br/>Saluton [esprimas al vi] - [iu persono, kiu persono need] Blazio.<a href="/index.php/faq?name=Credentials for Microsoft Azure used in Cloud Discovery">Azure Azure</a> a <a href="/index.php/faq?name=Credentials for Amazon AWS used in Cloud Discovery">AWS</a>Este postulataj.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Vulnerabilities reporting based on the NIST CVE feed.<br> <br></p>'] = '<p>Vulnerabilidades raportado bazita sur la NIST CVE- sendo.<br/> <br/></p>';

$GLOBALS["lang"]['<p>We initially setup the default list of scripts with the default options. These default scripts cannot be deleted. You can create additional scripts for use by you as required. Your script will be based on one of the existing scripts and have custom options applied. The scripts can then be downloaded from the list page at menu -> Discover -> Audit Scripts -> List Audit Scripts<br> <br></p>'] = '<p>Autres Tiuj deha.ltaj kézműves ne povas esti forigitaj. Vi povas krei kromajn manikriptojn por uzo de vi kiel postulat. Via manikripto estos bazita sur unu el ekzistantaj manikriptoj kaj havas kutimo eblojn aplikitaj. La maniskriptoj tiam povas esti el apretutitaj de la listpa pila Valikko - titulada Malkovro - titulado Scripts de auditía - confar Listo de Audit Scripts<br/> <br/></p>';

$GLOBALS["lang"]['<p>When using Regex for matching, a helpful page can be found on the <a href="https://www.php.net/manual/en/regexp.reference.meta.php" target="_blank"> PHP website</a>. Some differences to Perl Regex can be found <a href="https://www.php.net/manual/en/reference.pcre.pattern.differences.php" target="_blank">here</a>.</p>'] = '<p>Dum uzado Reex por egalado, utila pa graduano povas esti trovita sur la <a href="https://www.php.net/manual/en/regexp.reference.meta.php" target="_blank"> PHP retejo</a>. Kelkaj diferencoj al Perl Regex povas esti trovitaj <a href="https://www.php.net/manual/en/reference.pcre.pattern.differences.php" target="_blank">Отели ва</a>.</p>';

$GLOBALS["lang"]['<p>Widgets can easily be created to show whatever is specific to your environment on your dashboards.<br> <br></p>'] = '<p>Vidinad povas facile esti kreita por montri jio ajn estas specifa por via medio sur via armatuurlauad.<br/> <br/></p>';

$GLOBALS["lang"]['<p>With Open-AudIT Professional and Enterprise you can automate and schedule discoveries, report generation, or baseline checks to run when you want, and as often as you need. Schedule your discoveries to run nightly and reports to be generated and emailed to key personnel each morning. Complex or simple schedules, device discovery and report generation is just a click away.<br> <br>Create individual discovery schedules for each subnet or AD controller, add in reports to be created for targeted audiences. Develop simple or complex schedules to support company needs, avoid backups or impact to operations, or simply to spread the load and speed-up audit completion.<br> <br></p>'] = '<p>Kun Open AudIT Profesia kaj Enterprise vi povas a sceptictomatigi kaj plani eltrova.ojn, rapori suvutcion, a epäillyn bazliniajn www.ekojn por kuri kiam vi deziras, kaj tien of te kiel vi bezonas. Horaro ton eltrova. oj por kuri nokta kaj raportoj por esti generitaj kaj retpo divertatigitaj al esenca personaro C \'est un maténon. Kompleksa epäilty simpa horaro, aparattrova.<br/> <br/>Krei inininstituajn eltrova. Evoluigi simplejn a Kaptlus kompleksajn horarojn por apogi firmaobeozonojn, eviti rezerva.ojn a défectueux efikon al opéracioj, a simply por disvastigi la europa.ренение kaj rapide- supren reviziookompletigon.<br/> <br/></p>';

$GLOBALS["lang"]['<p>You can create a script with all the options for any of the existing audit scripts - not just Windows. AIX, ESX, Linux, OSX and Windows are all covered.<br> <br></p>'] = '<p>Vi povas krei maniskripton kun AIX, ESX, Linukso, OSX kaj Fenestroj estas...<br/> <br/></p>';

$GLOBALS["lang"]['<p>You can use the percent % sign as a wildcard in the match_string.<br> <br></p>'] = '<p>Vi povas uzi la% -signon kiel sova quicallyan karton en la mat repatraciono.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Your racks help refine exactly where your devices are located.<br> <br></p>'] = '<p>Viaj rakoj auttas rafini precize kie viajj situas.<br/> <br/></p>';

$GLOBALS["lang"]['<strong>NOTE</strong> - You are accessing this URL from the local Open-AudIT server. The downloaded script will not be able to submit when run on any other machine. If you need to audit other machines, please download the script from any remote machine, not using a browser on the Open-AudIT server itself.'] = '<strong>Ei</strong> Vi Aliris URL de la loka Open- Servilo Audit. La el apretutita manikripto ne povas submeti Se vi bezonas revizii alpijn ma apretinojn, bonvolu el apretuti la manikripton de iu malpreksima ma divonaino, ne uzante retumonilon sur la Open- Audit- servilo mem.';

$GLOBALS["lang"]['A CVE item that does not contain a filter to determine the affected item(s).'] = 'CVE- objekto kiu ne enhavas filterilon por determini la trafitan objekton (j).';

$GLOBALS["lang"]['A Google Maps API Key is required for this function.'] = 'API Google Mapoj API ';

$GLOBALS["lang"]['A JSON array of device IDs that will have this benchmark executed.'] = 'JSON ARO DE aparato IDoj kiuj hakus tiun komparnormon efektivitita.';

$GLOBALS["lang"]['A JSON array of objects matching the software name taken from the CVE, enriched with the software name retrieved by Open-AudIT.'] = 'JSON aro de objectktoj egalante la softvarnomon prenitan de la CVE, ri proporciónigita kun la softvarnomo prenita fare de Open- Audit.';

$GLOBALS["lang"]['A JSON array of values to test for this vulnerability.'] = 'JSON ARO DE Valoroj por test priviu vundbleco.';

$GLOBALS["lang"]['A JSON document containing the Orgs assigned to this user. IDs taken from <code>orgs.id</code>. If a user has access to an Org, they have access to that Orgs descendants.'] = 'JSON- dokumento enhavanta la Orgs asignita al tiu uzanto. La jenaj paεoj ligas <code>orgs.id</code>. Se uzanto havas aliron al Org, ili havas al tiu Orgs posteuloj.';

$GLOBALS["lang"]['A JSON document containing the required attributes depending on <code>scripts.type</code>.'] = 'JSON- dokumento enhavanta la postulatajn atregultojn riippuuuu de <code>scripts.type</code>.';

$GLOBALS["lang"]['A JSON document containing the required attributes overriding the chosen discovery_scan_options.'] = 'JON- dokumento enhavanta la postulatajn ategortojn superregante la ektronitaj n malkovrojn.';

$GLOBALS["lang"]['A JSON document containing the required attributes overriding the default device match options.'] = 'JSON- dokumento enhavanta la postulatajn atregante la dea auditltan aparaton matgiao opcioj.';

$GLOBALS["lang"]['A JSON document containing the roles assigned to this user. Role names taken from <code>roles.name</code>.'] = 'JSON dokumento enhavanta la rolojn asignitajn al tiu uzanto. Rollomoj prenitaj de <code>roles.name</code>.';

$GLOBALS["lang"]['A JSON object containing an array of attributes to change if the match occurs.'] = 'JSON- objekto enhavanta aron de ategortoj por шan';

$GLOBALS["lang"]['A JSON object containing an array of attributes to match.'] = 'JSON- objekto enhavanta aron de ategortoj por egali.';

$GLOBALS["lang"]['A JSON object containing collection specific options.'] = 'JSON- objekto enhavanta kolekton specifajn opciojn.';

$GLOBALS["lang"]['A JSON object populated via a Cloud discovery.'] = 'JSON- objekto';

$GLOBALS["lang"]['A JSON representation containing the details of the queue item to be executed.'] = 'JSON- reprezentado enhavanta la detalojn de la atendospeco por esti efekkivigita.';

$GLOBALS["lang"]['A JSON representation of the fields for this integration.'] = 'JSON- reprezentado de la kampraj por tiu integri .o.';

$GLOBALS["lang"]['A JSON representation of the individual tests and their results on all devices this baseline has been run against.'] = 'JSON- reprezentado de la instituaj commercij kaj iliaj rezultoj sur...';

$GLOBALS["lang"]['A JSON representation of the tests that make up this policy.'] = 'JSON- reprezentado de la regulj kiuj konsistigas tiun politikon.';

$GLOBALS["lang"]['A LAN can be connected to a WAN using a router.'] = 'LAN povas estiligita al VAN uzanta italon.';

$GLOBALS["lang"]['A Metropolitan area network (MAN) is a large computer network that usually spans a city or a large campus.'] = 'Metropolivena areto (MAN) estas grana komputilreto kiu kutime enhavas granan kampuson.';

$GLOBALS["lang"]['A Seed discovery uses an initial IP to retrieve the IPs of any other devices it knows about, adds those IPs to the list and scans those - again asking for any IPs those additional devices knows about. Rinse and repeat. It is intelligent enough to know if it has already scanned a given IP in its execution and discards any already scanned (or even on the list to be scanned).'] = 'A. Loputa Kaj Madurat. ';

$GLOBALS["lang"]['A Subnet discovery will scan the IPs provided.'] = 'Subnet- eltrova.o skaans la IPojn disponigitaj.';

$GLOBALS["lang"]['A URL provided to the agent which will then download the file and store it on the local disk.'] = 'URL disponible al la agento kiu tiam el apretutas la dosieron kaj stokas εin en la loka diso.';

$GLOBALS["lang"]['A URL to a file to download.'] = 'URL al dosiero el apretuti.';

$GLOBALS["lang"]['A backbone network is part of a computer network infrastructure that provides a path for the exchange of information between different LANs or sub-networks. A backbone can tie together diverse networks within the same building, across different buildings, or over a wide area.<br><br>For example, a large company might implement a backbone network to connect departments that are located around the world. The equipment that ties together the departmental networks constitutes the network backbone. When designing a network backbone, network performance and network congestion are critical factors to take into account. Normally, the backbone network capacity is greater than that of the individual networks connected to it.<br><br>Another example of a backbone network is the Internet backbone, which is the set of wide area networks (WANs) and core routers that tie together all networks connected to the Internet.'] = 'Malanta Spino povas ligi kune diversspecajn retojn ene de la sama konstura.<br/><br/>Ekming, gra firmao eble efektivigos spinoreton por ligi sekciojn kiuj situas Čirka. La mondo. La kipa Dum dizajnado de sendacia spino, retefikeco kaj sendacia obstrukci.o estas kritikaj faktoroj enkalkuli. Normale, la spino- retkapacito estas pli ossega ol tiu de la infinessduaj retoj ligitaj al εi.<br/><br/>Alia eszemplo de spinoreto estas la Interreta spino, kiu estas la aro de lar.aj aretoj (WANoj) kaj kenvoj kiuj ligas kune .iujn retojn ligitaj al la Interreto.';

$GLOBALS["lang"]['A calculated field that displays the number of times this piece of software was found on the computers in the selected Org (and its descendants if configured).'] = 'Kalkulis kampon kiu elmontras la nombron da tempoj tiu peco de softvaro estis Trovita sur la komputiloj en la elektita Orga (kaj εiaj posteuloj se aran.ite).';

$GLOBALS["lang"]['A campus area network (CAN) is made up of an interconnection of LANs within a limited geographical area. The networking equipment (switches, routers) and transmission media (optical fiber, copper plant, Cat5 cabling, etc.) are almost entirely owned by the campus tenant / owner (an enterprise, university, government, etc.).<br><br>For example, a university campus network is likely to link a variety of campus buildings to connect academic colleges or departments, the library, and student residence halls.'] = 'Kamputareto (CAN) consistas el interligo de Lanoj ene de limiga geographa areo. La interkonekta ekipa<br/><br/>Ekzample, universitata kampusreto verajne interligas gamon da kampuskinstrua.oj por ligi akademiajn altlernegojn a sekciojn, la bibliotekon, kaj studentajn lo.ejhalojn.';

$GLOBALS["lang"]['A closed port is accessible (it receives and responds to Nmap probe packets), but there is no application listening on it. They can be helpful in showing that a host is up on an IP address (host discovery, or ping scanning), and as part of OS detection. Because closed ports are reachable, it may be worth scanning later in case some open up. Administrators may want to consider blocking such ports with a firewall. Then they would appear in the filtered state, discussed next.'] = 'Fermita haveno estas alirebla (εi rizvas kaj reagas al Nmap sonde- paka... Ili povas esti aidemaj en montrado ke gastiganto estas supren sur IP- adreso (gasa eltrova.o, kaptlus pingskanado), kaj kiel parto de OS- detekto. Alternativarar fermitaj havenoj estas atingeblaj, .i povas esti valoro skanado poste en kazo iu malferma supren. Administrantrannoj povas deziri pripensi bloki tiajn hasnojn kun fajromuro. Tiam ili aperus en la inspirita Łcommon, disutita plei preksime.';

$GLOBALS["lang"]['A collector is either in Collector or Stand-Alone mode.'] = 'Kolektanto estas a cahtlus en kolektanto a Kahtlustus Stand- Alone- re.imo.';

$GLOBALS["lang"]['A comma separated list of applicable CVEs.'] = 'Apartigide de Komo Listn de uzeblaj CMEoj.';

$GLOBALS["lang"]['A comma separated list of values, one of which can be selected.'] = 'Komo apartigid Lister de Valoroj, unu el kiuj povas esti selektita.';

$GLOBALS["lang"]['A command to run. When the agent is Windows based, this command is run from within the powershell agent.'] = 'Komando por kuri. Kiam la agento estas Fenestroj bazita, tiu komando estas prizorgita de ene de la Powershell agento.';

$GLOBALS["lang"]['A dashboard is made up of three columns and two rows of what we call <i>widgets</i>. A widget is very similar to a summary, only we take the summary concept a bit further. Widgets are created in a simple fashion using a couple of drop down boxes - or you can elect to use your own SQL for complete customisability.'] = 'Da triboard konsistas el tri kolumnoj kaj du vicoj de kion ni nomas <i>dratoj</i>. Ao estas tre simpa al revo, nur ni prenas la resegan concepton iomete plu. Vidinad estas kreita en simplia modo uzanta paron da guto malsupren kestoj - katlus vi povas elekti uzi vian propran SQL por kompleta kutimo.';

$GLOBALS["lang"]['A filtered port is considered open (and will trigger device detection).'] = 'Interita haveno estas konsiderita malferma (kaj ellasos aparatodekton).';

$GLOBALS["lang"]['A global area network (GAN) is a network used for supporting mobile across an arbitrary number of wireless LANs, satellite coverage areas, etc. The key challenge in mobile communications is handing off user communications from one local coverage area to the next. In IEEE Project 802, this involves a succession of terrestrial wireless LANs.'] = 'Tutmonda areto (GAN) estas reto uzita por apogado de po aprettelefono trans arbitra nombro da serrataj Lanoj, satelitaj priraportadareoj, ktp. La esenca vereo en movaj komunikadoj donas for uzantkomunikadojn de unu loka priraportadareo εis la venonta. En IEEE Project 802, tio implicas porekvon de surteraj serrataj Lanoj.';

$GLOBALS["lang"]['A home area network (HAN) is a residential LAN used for communication between digital devices typically deployed in the home, usually a small number of personal computers and accessories, such as printers and mobile computing devices. An important function is the sharing of Internet access, often a broadband service through a cable TV or digital subscriber line (DSL) provider.'] = 'Hejmarereto (HAN) estos lo diplomateoma LAN uzita por kommunikado inter ciferecaj apoto tipe integrijitaj en la hejmo, kutime malmulto de personaj komputiloj kaj akcesora.oj, kiel ekzample printiloj kaj movaj komputikaparatoj. Grava funkcio estas la disco de retaliro, overse lar.benda servo tra kablotv ido a reserveca abonlinio (DSL) prenbzanto.';

$GLOBALS["lang"]['A list of custom TCP ports to scan (22 is SSH, 135 is WMI, 62078 is iPhone sync).'] = 'Listo de Kulimo TCP- havenoj por skani (22 estas SSH, 135 estas WMI, 62078 estas iPhono- sinkrono).';

$GLOBALS["lang"]['A list of custom UDP ports to scan (161 is SNMP).'] = 'Listo de Kulimo UDP- havenoj por skani (161 estas SNMP).';

$GLOBALS["lang"]['A local area network (LAN) is a network that connects computers and devices in a limited geographical area such as a home, school, office building, or closely positioned group of buildings. Each computer or device on the network is a node. Wired LANs are most likely based on Ethernet technology. Newer standards such as ITU-T G.hn also provide a way to create a wired LAN using existing wiring, such as coaxial cables, telephone lines, and power lines.<br><br>The defining characteristics of a LAN, in contrast to a wide area network (WAN), include higher data transfer rates, limited geographic range, and lack of reliance on leased lines to provide connectivity. Current Ethernet or other IEEE 802.3LAN technologies operate at data transfer rates up to 100 Gbit/s, standardized by IEEE in 2010. Currently, 400 Gbit/s Ethernet is being developed.'] = 'Loka areoreto (LAN) estos reto kiu ligas komputilojn kajn aparato en limigita geografia areo kiel ekzample hejmo, lernejo, oficejkonstrua. Imitaiu komputilo a Kaptlus aparato sur la reto need nodo. Traadiga Lanoj estas plej ver sortajnaj surbaze de Ethernet- teknologio. Pli novaj normoj kiel ekzample UIT- T G.hn ankai disponigas manieron krei dratigitan LAN uzantan ekzisztán drenadon, kiel eksample koaksiaj kabloj, telefonlinioj, kaj regulclinioj.<br/><br/>La difinaj karkteriza.oj de LAN, consite al lar rupturaaa areoreto (WAN), inkludas pli altajn dann transigtarifojn, limitan geographian intervallion, kaj mankon de de deposco sur lizitaj linioj por disponigi konekteblecon. Ethernet Nuna a Če datentransigtarifoj εis 100 Gbit / s, normigita fare de IEEE en 2010. Nuntempe, 400 Gbit / s Ethernet estas evoluigita.';

$GLOBALS["lang"]['A location is a physical address that can have devices associated with it. You can assign it coordinates and if there are devices assigned, the location will appear on the Map when you have an Open-AudIT Enterprise license.'] = 'Loko estas fizika adreso kiu povas havi aparatojn asocitajn kun liukoinen. Vi povas asignitaj, la loko aperos sur la Mapo kiam vi havas Open- Audit Enterprise licencio.';

$GLOBALS["lang"]['A location name will help you to find these devices in the future.'] = 'Loko nomo auttas vin trovi tiujn aparatojn en la estonteco.';

$GLOBALS["lang"]['A lower number means it will be applied before other rules.'] = 'Pli maltalta nombro signfas ke εi estos aplikita anta.';

$GLOBALS["lang"]['A lower number means it will be applied before other rules. The default weight is 100.'] = 'Pli maltalta nombro signfas ke εi estos aplikita anta. La deha... ilta peto estas 100.';

$GLOBALS["lang"]['A new user logged in to Open-AudIT and was authenticated and authorized by the LDAP sever. That user was then created in Open-AudIT and logged in. Success.'] = 'Nova uzanto registerdis en al Open- Audit kaj est un skeptikita kaj rajtigita fare de la LDAP sever. Tiu uzanto tiam estis kreita en Open- Audit kaj ensalutinta. Sukceso.';

$GLOBALS["lang"]['A package is a piece of installed softare. A package has a type - antivirus, approved, backup, banned, cloud, firewall, ignored, license or other.'] = 'Pakaoo estas peco de secretita moolo. Paka';

$GLOBALS["lang"]['A password (stored as a hash) that enables logon when using application authentication.'] = 'pasvorton (venkita kiel hash) kiu rajtigas tunnuksen dum uzado de apliki consignaaaluctentigo.';

$GLOBALS["lang"]['A person has an account in the Open-AudIT application. Their user account has a list of associated Roles and Organizations. The roles the user has determines WHAT they can do. The Organizations a user has determines WHICH items they can act upon.<br><br>When a user requests to perform an operation (create, read, update, delete) on a collection item, the roles are consulted to see if they are allowed to perform that action, then the orgs are consulted to determine if the collection item belongs to an org the user has permission to act on.'] = 'Persono havas raporton en la Open- Audit- aplika.o. Ilia uzantkonto havas listan de rilataj roloj kaj organisoj. La roloj kiujn la uzanto deterwa ili povas fari. La organisoj uzanto deterica mikä erojn ili povas agi sur.<br/><br/>Kiam uzanto petas elfari oopperacion (krei, legi, liukoisdatigi, forigi) sur kolektobjektoj, la roloj estas konsultitaj por vidi claru ili estas permesitaj elfari tiun agon, tiam la orgs the konsultitaj por determini ';

$GLOBALS["lang"]['A personal area network (PAN) is a computer network used for communication among computer and different information technological devices close to one person. Some examples of devices that are used in a PAN are personal computers, printers, fax machines, telephones, PDAs, scanners, and even video game consoles. A PAN may include wired and wireless devices. The reach of a PAN typically extends to 10 meters. A wired PAN is usually constructed with USB and FireWire connections while technologies such as Bluetooth and infrared communication typically form a wireless PAN.'] = 'Persona areto (PAN) estas kompytila uzita por kommunikado inter komputio kaj malsamaj informatojteknologiaj apotoj preksimaj al unu persono. Kelkaj eczemoj de aparatoj kiuj estas uzitaj en PAN estas personaj komputiloj, printiloj, faksoma activitanoj, telefonoj, PDAoj, skaniloj, kaj e proporción videoludkonzoloj. PAN povas inkludi dratigijn kaj serratajn aparatojn. La atingo de PAN tipe etendi nidettä al 10 metroj. Metita PAN estas kutime koronuita kun USB kaj FireWire ligoj dum teknologioj kiel ekzample Bluetooth kaj infraruditoa kommunikado tipe formas serratan PAN.';

$GLOBALS["lang"]['A query is essentially a SQL statement. This statement is run against the database with the automatic addition of the limit, filtered to apply to only those requested items and only those items the user has permission to view. A Query can be created using menu -> Manage -> Queries -> Create Queries. Queries contain an org_id and are hence restricted to the appropriate users. A user must have the org_admin or reporter role(s) to create, update or delete a query. All users can execute a query. A query has a name attribute used for the menu item as well as a menu category attribute. This tells the Open-Audit GUI which submenu to place the query in. There is also menu display which should be set to <i>y</i> to enable the query in the GUI (<i>n</i> to prevent the query from appearing at all). The query would still run if called using its <code>id</code>, regardless of menu displays value.'] = 'C \'est là que se trouve le SQL- deklaro. Tiu deklaro estas prizorgita kontra Query povas esti kreita uzante menuon - Mana.o - confanza La jenaj paεoj ligas al Päringud. Päringud enhavas org _ id kaj estas itas liagitaj al la konvenaj uzantoj. Uzanto hansanda.o la org _ admin a sceptictorolon (j) krei, liquidialisdatigi epäilty forigi kysely. Mina sintoiuj uzantoj povas efektivigi päring. Aquery havas nomon attribution utiligitan por la menuobjektoj mismo kiel menuokategoriatto. Tio rakentas la Open- Audit GUI kiu submenu por meti la atendon en Eksistas ankai menuo ekrano kiu devus esti metita al <i>Oui.</i> Por ebligi la atendon en la GUI ()<i>n</i> Por malhelfi la atendon de aperado entute. La requête da guidre kuris se vokite uzante lahustuva ine <code>id</code>, menü nekonsiderante elmontras Valon.';

$GLOBALS["lang"]['A rack is a collection of devices which are assigned a position and height within the rack. A device can optionally have a picture associated with it. A rack is placed in a row. We have created a very granular system for positioning of racks, which is as follows. At the top level (as always) is the Organisation (Org). An Org can have multiple locations (as has always been the case). With the addition of the Racks feature, a location can now contain one or more Buildings. A building can contain one or more Floors. A floor can contain one or more Rooms. A room can contain one or more Rows. This sounds like a lot of work, but defaults are created for you. Create a new Location and the sub-components will be automatically created for you. If you need more items (buildings, rooms, etc) you can add them as you like. A rack can also be part of a <i>pod</i> of racks. The pod attribute works as a tag, rather than a strict hierarchical inheritance model as per buildings, floors, etc.<br><br>Racks are a feature available to Open-AudIT Enterprise licensed customers.'] = 'Arako estas kolekto de aparatoj kiuj rizvas pozicion kaj alitecon ene de la rako. Aparato povas la defaultvole havi bildon asociitan kun εi. rako estas metita en vicon. Ni kreis tre grajnecan sistemon por poziciigado de rakoj, kiu estas kiel sekvas. Sur la supra nivelo (kiel Org povas havi multoblajn lokojn (kiel klaram estis la kazo). Kun la aldono de la Racks trajto, loko nun povas enhavi unu a sceptic pluraj Konstrua. C \'est Konstrua. Planko povas enhavi unu epäilty pluraj .ambrojn. Mina sendoambro povas enhavi unu epäilty pluraj rregojn. Tio sonas kiel multe da labouro, sed deva transeltoj estas kreitaj por vi. Krei novan Lokon kaj la sub- komponantoj estos a skeptomate kreitaj por vi. Se vi bezonas pli da eroj (konstrua... oj... ambroj, ktp) Vi povas aldoni... Arako ankahtihtis povas esti parto <i>Balgo</i> Rakôj. La podateria to funkcias kiel etkedo, prefere ol strikta hierarkia hereda modelo kiel per koronua.oj, plankoj, ktp.<br/><br/>Racks estas trado havebla al Open- Audit Enterprise a probitaj kliento j.';

$GLOBALS["lang"]['A routing domain or address space where the IP addresses and MAC addresses are unique.'] = 'Turnanta domajno a epäillyn apresspaco kie la IP- adresoj kaj MAC- adresoj estas unikaj.';

$GLOBALS["lang"]['A sample cron file for Linux is below. This should be placed in'] = 'Sperta Krodosiero por Linukso estas malsupre. Tio devus esti metita en';

$GLOBALS["lang"]['A security zone is a administrative domain or policy domain within the Network Domain.'] = 'Sekureco- zono estas administration domajno a epäillyn strategjodamajno ene de la Reto- Domain.';

$GLOBALS["lang"]['A seed discovery is another type of discovery, where you provide the IP of a single <i>seed</i> device. This device is audited, and any IPs it knows are then added to the list of IPs to be audited. Then, those devices are audited and any IPs they know are also added to the list of IPs for auditing. This process then continues within the parameters configured by the user.'] = 'Semtrova <i>szémó</i> Parato. Tiu aparato estas reviziita, kaj ajna IP s εi scias tias estas aldonita al la lista de IP s por esti reviziita. Tiam, tiaj aparatoj estas reviziitaj kaj aj ajnaj IPoj ili scias anka130 estas aldonitaj al la lista de IPoj por revizio. Tiu procezo tiam daūras ene de la parametroj formitaj fare de la uzanto.';

$GLOBALS["lang"]['A short description of the log entry.'] = 'Mallonga priskribo de la loga eniro.';

$GLOBALS["lang"]['A storage area network (SAN) is a dedicated network that provides access to consolidated, block level data storage. SANs are primarily used to make storage devices, such as disk arrays, tape libraries, and optical jukeboxes, accessible to servers so that the devices appear like locally attached devices to the operating system. A SAN typically has its own network of storage devices that are generally not accessible through the local area network by other devices. The cost and complexity of SANs dropped in the early 2000s to levels allowing wider adoption across both enterprise and small to medium-sized business environments.'] = 'Stoka areoreto (SAN) estas officicia reto kiu disponigas aliron al firmicita, blok- nivelaj datentokado. SANoj estas SAN tipe havas sian propran reton de stokadaparatoj kiuj estas liconenerale ne alieroblaj tra la loka areoreto de aliasj aparatoj. La kosto kaj komplekseco de SANoj falis en la fruaj 2000- aj jaroj al niveloj permesantaj plil lar rupturaan adopton trans kaj entrepreno kaj malgrandaj al mezgrandaj komercedioj.';

$GLOBALS["lang"]['A string that matches the <code>software.name</code> attribute. You can use the standard SQL wildcard of percent (%) to match one or more characters.'] = 'Akordo kiu egalas <code>software.name</code> Tisztelet. Vi povas uzi la norman SQL- sovaεan karton de procentoj (%) por egali unu a default pluraj karakteroj.';

$GLOBALS["lang"]['A structured system for managing sensitive information'] = 'strukturita sistemo por administration de sentiemaj informato';

$GLOBALS["lang"]['A timestamp.'] = 'C \'est Tempposampo.';

$GLOBALS["lang"]['A user has a primary Org as well as a list of Orgs they can access. A user combines this with a list of assigned roles that define what actions they can take on items assigned to the Orgs they have access to. The combination of a users <i>orgs</i> and <i>roles</i> define what they can and cannot do within Open-AudIT.'] = 'Uzantoj havas primaran Org mismo kiel Lister de Orgas kiun ili povas aliri. Uzanto Kombinas tion kun lista de asignitaj roloj kiuj difinas kiujn agojn ili povas akcepti erojn asignitaj al la Orgs kiujn ili havas aliro al. La kobina <i>Orgoj</i> Kaj <i>Les</i> difinas kion ili povas kaj ne povas fari ene de Open- Audit.';

$GLOBALS["lang"]['A user will have a list of associated organizations (orgs). Each org the user has will allow them to act upon items within that org as per their role(s).<br><br>All orgs except the default org have a parent. Think of an Org Chart. If a user has permission on an Org, they also have permission on any descendants of that Org.<br><br>Users are also allowed permission on a child org to see the items from parent orgs for certain collections. Those are: dashboards, discovery_scan_options, fields, files, groups, queries, reports, roles, rules, scripts, summaries, widgets.<br><br>Do not forget you have granular control over what users can see and do using Roles in Enterprise.'] = 'uzanto havos listan de rilataj organisoj (orgoj). org la uzanto permesos al ili agi sur eroj ene de tiu org kiel per ilia rolo (j).<br/><br/> imitaiuj orgoj krom la deva C \'est la carte de Pensu pri Org. Se uzanto havas permeson sur Org, ili anka. havas permeson sur juj posteuloj de tiu Org.<br/><br/>Uzantoj Anka Tiuj estas: armatuurlauad, Discovery _ scan _ options, kampraj, dosieroj, grupoj, demandoj, raportoj, roloj, reguloj, kézműves, resumoj, vidinad.<br/><br/>Ne forgesu ke vi havas grajnecan controlon de kion uzantoj povas vidi kaj fari uzante rolojn en Enterprise.';

$GLOBALS["lang"]['A user will have a list of associated organizations (orgs). Each org the user has will allow them to act upon items within that org as per their role(s).<br><br>All orgs except the default org have a parent. Think of an Org Chart. If a user has permission on an Org, they also have permission on any descendants of that Org.<br><br>We have also allow a user with permission on a child org to see the items from parent orgs for certain collections. Those are: dashboards, discovery_scan_options, fields, files, groups, queries, roles, rules, scripts, summaries, widgets.<br><br>Do not forget you have granular control over what users can see and do using'] = 'uzanto havos listan de rilataj organisoj (orgoj). org la uzanto permesos al ili agi sur eroj ene de tiu org kiel per ilia rolo (j).<br/><br/> imitaiuj orgoj krom la deva C \'est la carte de Pensu pri Org. Se uzanto havas permeson sur Org, ili anka. havas permeson sur juj posteuloj de tiu Org.<br/><br/>Ni ankai permesas uzanton kun permeso sur infano org por vidi la erojn de gepatroj orgoj por certaj kolektoj. Tiuj estas: armatuurlauad, Discovery _ scan _ options, kampraj, dosieroj, grupoj, demandoj, roloj, reguloj, kézműves, resumoj, vidinad.<br/><br/>Ne forgesu ke vi havas grajnecan controlon de pion uzantoj povas vidi kaj fari uzante';

$GLOBALS["lang"]['A virtual private network (VPN) is an overlay network in which some of the links between nodes are carried by open connections or virtual circuits in some larger network (e.g., the Internet) instead of by physical wires. The data link layer protocols of the virtual network are said to be tunneled through the larger network when this is the case. One common application is secure communications through the public Internet, but a VPN need not have explicit security features, such as authentication or content encryption. VPNs, for example, can be used to separate the traffic of different user communities over an underlying network with strong security features.<br><br>VPN may have best-effort performance, or may have a defined service level agreement (SLA) between the VPN customer and the VPN service provider. Generally, a VPN has a topology more complex than point-to-point.'] = 'Virtica privata reto (VPN) estas superlay reto en kiu kelkaj el ligi laloj inter nodoj estas portitaj per malfermaj ligoj a scepticaj cirkvitoj en iu pli granda reto (ekz., la Interreto) anstata guide de per fizikaj dratoj. La datenligtavolo protokolas de la virtual retoa la guiddire estas sellita tra la pli gra reto kiam tio estas la kazo. Unu ofta apliki suyas estas sekura kommunikado tra la publika Interreto, sed VPN ne bezonas eksplicitaj n sekurectrajtojn, kiel eksample konfirmo a enhav previsto. VPN, eksample, povas esti uzita por apartigi la trafikon de malsamaj uzantkomuniumoj super subesta reto kun fortaj sekurectrajtoj.<br/><br/>VPN povas havi plej bonan efikecon, epäilty povas havi difinitan serva nivelinterkonsenton (SLA) inter la VPN- kliento kaj la VPN- servprovisanto. VPN havas topologion pli kompleksan ol punkto- al- punkta.';

$GLOBALS["lang"]['A vulnerability affecting availability may allow attackers to disrupt services, crash systems, or cause denial-of-service (DoS) (None, Low, High).'] = 'Vundebleco infunta hasblecon povas permesi al atakantoj disceppi servojn, kra divostasistemojn, epäilty Kazi neo- de- servon (DoS) (Ninguno, Bajo, Alto).';

$GLOBALS["lang"]['A vulnerability affecting confidentiality may allow attackers to read sensitive data, such as personal information, credentials, or proprietary business data (None, Low, High).'] = 'vundebleco influenzanta konfidencon povas permesi al atakantoj legi sentiemajn datenojn, kiel ekzample personaj informaj, akreditaoj, epäilty proprietajn komercdatenojn (Ninguno, Bajo, Alto).';

$GLOBALS["lang"]['A vulnerability affecting integrity may allow attackers to modify data, inject malicious code, or alter system configurations (None, Low, High).'] = 'La plupart des pays de l \'Europe de l\' Est sont des pays de l \'Europe centrale et orientale.';

$GLOBALS["lang"]['A vulnerability can be editied and more specific package names provided where the enrichment data is insufficient or the generated SQL is not quite correct.'] = 'Vundebleco povas esti redaktita kaj pli specifiaj paka';

$GLOBALS["lang"]['A vulnerability item in Open-AudIT can be thought of as essentially a query against your database to determine your potential exposure to a given CVE report. A vulnerability is made up of the CVE report, along with enrichment data from FirstWave. These two items are combined to produce a suitable query that is automatically downloaded from FirstWave.'] = 'Nula objectkto en Open- Audit povas esti opiniita de kiel esence atendo contramento via datumbazo determini vin eblan malkovron al anta skeptita CVE- raporto. Vundebleco konsistas el la CVE- raporto, kune kun ri previstoigdatenoj de FirstWave. Tiuj du eroj estas Kombintaj por produkti ta';

$GLOBALS["lang"]['A wide area network (WAN) is a computer network that covers a large geographic area such as a city, country, or spans even intercontinental distances. A WAN uses a communications channel that combines many types of media such as telephone lines, cables, and air waves. A WAN often makes use of transmission facilities provided by common carriers, such as telephone companies. WAN technologies generally function at the lower three layers of the OSI reference model: the physical layer, the data link layer, and the network layer.'] = 'Lar Rupturaa areoreto (WAN) estas komputila kiu kovras granan geographian areon kiel ekzample granurbo, lando, epäilty enhavas e plan interkontinentajn districijn. WAN utiligas komunikadkanalon kiu kombinas multajn specojn de amaskomunikilaro kie ekzample telefonlinioj, kabloj, kaj aarindojn. WA ofte faras uzon de transmisiipaya.oj disponigitaj fare de oftaj aviad- kompanioj, kiel ekze telefontleaj firmaoj. Le commerce de gestion de l \'eau ';

$GLOBALS["lang"]['AD Group'] = 'PVD';

$GLOBALS["lang"]['ADSL, HFC, ISDN, etc.'] = 'ADSL, HFC, RNIS, ktp.';

$GLOBALS["lang"]['AIX'] = 'AIXAIX';

$GLOBALS["lang"]['ALL IPs'] = 'Alternatiuj IPj';

$GLOBALS["lang"]['API / Web Access'] = 'API / Acceso web';

$GLOBALS["lang"]['API Documentation'] = 'API Dokumentado';

$GLOBALS["lang"]['API Key required.'] = 'API - Lolilo postulis.';

$GLOBALS["lang"]['API Result'] = 'Resultado de API';

$GLOBALS["lang"]['About'] = '.';

$GLOBALS["lang"]['Above are the only required items.'] = 'Supre estas la nuraj postulataj eroj.';

$GLOBALS["lang"]['Accept'] = 'Akcepto';

$GLOBALS["lang"]['Access Model'] = 'Alirmodelo';

$GLOBALS["lang"]['access_point'] = 'Aliro';

$GLOBALS["lang"]['Access Point'] = 'Aliro';

$GLOBALS["lang"]['access_token'] = 'Jeton Aliro';

$GLOBALS["lang"]['Access Token'] = 'Jeton Aliro';

$GLOBALS["lang"]['Access to the admin$ share and RPC uses the SMB2 protocol.'] = 'Il s \'agit d\' un projet de loi sur la protection de l \'environnement.';

$GLOBALS["lang"]['ack_by'] = 'Ack';

$GLOBALS["lang"]['Ack By'] = 'Ack';

$GLOBALS["lang"]['ack_date'] = 'Ack Dato';

$GLOBALS["lang"]['Ack Date'] = 'Ack Dato';

$GLOBALS["lang"]['ack_time'] = 'Ack Tempo';

$GLOBALS["lang"]['Ack Time'] = 'Ack Tempo';

$GLOBALS["lang"]['action'] = 'Ago de Ago';

$GLOBALS["lang"]['Action'] = 'Ago de Ago';

$GLOBALS["lang"]['action_audit'] = 'Auditoría de acticidades';

$GLOBALS["lang"]['Action Audit'] = 'Auditoría de acticidades';

$GLOBALS["lang"]['action_command'] = 'Tegevuskomando';

$GLOBALS["lang"]['Action Command'] = 'Tegevuskomando';

$GLOBALS["lang"]['action_date'] = 'Ago Dato de Ago';

$GLOBALS["lang"]['Action Date'] = 'Ago Dato de Ago';

$GLOBALS["lang"]['action_devices_assigned_to_location'] = 'Ago seadmed määratud al Loko';

$GLOBALS["lang"]['Action Devices Assigned To Location'] = 'Ago seadmed määratud al Loko';

$GLOBALS["lang"]['action_devices_assigned_to_org'] = 'Ago seadmed määratud al Org';

$GLOBALS["lang"]['Action Devices Assigned To Org'] = 'Ago seadmed määratud al Org';

$GLOBALS["lang"]['action_download'] = 'El seniti pilao';

$GLOBALS["lang"]['Action Download'] = 'El seniti pilao';

$GLOBALS["lang"]['action_uninstall'] = 'Poista asennus';

$GLOBALS["lang"]['Action Uninstall'] = 'Poista asennus';

$GLOBALS["lang"]['actioned'] = 'Agordi';

$GLOBALS["lang"]['Actioned'] = 'Agordi';

$GLOBALS["lang"]['actioned_by'] = 'Pergita';

$GLOBALS["lang"]['Actioned By'] = 'Pergita';

$GLOBALS["lang"]['actioned_date'] = 'Agita Dato';

$GLOBALS["lang"]['Actioned Date'] = 'Agita Dato';

$GLOBALS["lang"]['actions'] = 'Agoj';

$GLOBALS["lang"]['Actions'] = 'Agoj';

$GLOBALS["lang"]['Activate'] = 'Aktivar';

$GLOBALS["lang"]['Activate Free License'] = 'Activar Licencia Gratis';

$GLOBALS["lang"]['Activate Key'] = 'Activaire ';

$GLOBALS["lang"]['Activate a free Enterprise license'] = 'Activar la Liberación Licencia de empresa';

$GLOBALS["lang"]['Active'] = 'Aktiva...';

$GLOBALS["lang"]['Active / Active'] = 'Aktiva / Aktiva';

$GLOBALS["lang"]['Active / Passive'] = 'Aktiva / Pasivo';

$GLOBALS["lang"]['Active Directory'] = 'Aktiva Adresaro';

$GLOBALS["lang"]['Active Directory Domain'] = 'Aktiva Adresaro domeen';

$GLOBALS["lang"]['active_directory_ou'] = 'Aktiva Adresaro';

$GLOBALS["lang"]['Active Directory Ou'] = 'Aktiva Adresaro';

$GLOBALS["lang"]['Active Directory Server'] = 'Aktiva Adresaro- Servilo';

$GLOBALS["lang"]['Active Directory and OpenLDAP'] = 'Aktiva Adresaro kaj OpenLDAP';

$GLOBALS["lang"]['ad_domain'] = 'Ad Domine';

$GLOBALS["lang"]['Ad Domain'] = 'Ad Domine';

$GLOBALS["lang"]['ad_group'] = 'Gépkocsi';

$GLOBALS["lang"]['Ad Group'] = 'Gépkocsi';

$GLOBALS["lang"]['ad_server'] = 'AdServilo';

$GLOBALS["lang"]['Ad Server'] = 'AdServilo';

$GLOBALS["lang"]['Add'] = 'Aldonu aldoni';

$GLOBALS["lang"]['Add Credentials'] = 'Aldonu kreantojn';

$GLOBALS["lang"]['Add Device'] = 'Aldonu al la';

$GLOBALS["lang"]['Add Device to Application'] = 'Aldonu al- plika';

$GLOBALS["lang"]['Add Device to Cluster'] = 'Groupe Aldonu al';

$GLOBALS["lang"]['Add Exception'] = 'Aldonu esepti';

$GLOBALS["lang"]['Add Field'] = 'Aldonu la kampon';

$GLOBALS["lang"]['Add If'] = 'Aldonu';

$GLOBALS["lang"]['Add Policies from Device'] = 'Aldonu Politikojn de Appareil';

$GLOBALS["lang"]['Add Policy'] = 'Aldonu politikon';

$GLOBALS["lang"]['Add Then'] = 'Aldonu';

$GLOBALS["lang"]['Add Your Credentials'] = 'Aldonu viajn kreantojn';

$GLOBALS["lang"]['Add image'] = 'Aldonu bildon';

$GLOBALS["lang"]['additional_items'] = 'Kroma εi';

$GLOBALS["lang"]['Additional Items'] = 'Kroma εi';

$GLOBALS["lang"]['address'] = 'Adreso';

$GLOBALS["lang"]['Address'] = 'Adreso';

$GLOBALS["lang"]['Address any nonconformities'] = 'Direkki jnani nekonformatsioonid';

$GLOBALS["lang"]['Address audit findings and corrective actions'] = 'Direktaj revizio rezultoj kaj korektaj agoj';

$GLOBALS["lang"]['Admin'] = 'Salé';

$GLOBALS["lang"]['admin_status'] = 'Hallintoviranomainen';

$GLOBALS["lang"]['Admin Status'] = 'Hallintoviranomainen';

$GLOBALS["lang"]['advanced'] = 'Progresinta Nom de la ville (facultatif, sans doute pas besoin de traduction)';

$GLOBALS["lang"]['Advanced'] = 'Progresinta Nom de la ville (facultatif, sans doute pas besoin de traduction)';

$GLOBALS["lang"]['Afghanistan'] = 'Afrique. unit description in lists';

$GLOBALS["lang"]['After an Integration has been created, when you view the details of an Integration you will notice a field named Debug. This is set to no by default. Changing it to yes provides extra logging when an Integration is executed. Debug should not be left as yes. This is because the debug output will contain everything retrieved from external systems - including items such as WMI and SNMP credentials. The debug option should be used only when an issue has occurred and you wish to dig deeper in to see if you can determine why.'] = 'Poste kiam Integriγo estis kreita, kiam vi rigardas la detalojn de Integri O vi rimarkos kampon nomitan Debug. Tio ne estas deha... Debug ne devus esti laseta kiel je. Tio estas La debug opcio devus esti uzita nur kiam temoazis kaj vi deziras fosi pli profunde en vidi Ču vi povas determini kial.';

$GLOBALS["lang"]['After completing the above, uninstall the agent.'] = 'Poste kompletigado de ';

$GLOBALS["lang"]['Agent? Discovery? Credentials?'] = 'Agenti? "Movimiento la malkovro?" Memou kreantoj?';

$GLOBALS["lang"]['agents'] = 'Agentoj';

$GLOBALS["lang"]['Agents'] = 'Agentoj';

$GLOBALS["lang"]['Agents entries can be created that specify a duration, a network and an operating system. If all tests match, the server then asks the agent to perform actions. If any test is not set, it is excluded from the <i>all must match</i> requirement.<br><br>You can create multiple agents and have the server check one or all agent entries. You might (for example) specify one agent that says <i>If the agent IP is in this subnet, set the location_id of the device</i>.<br><br>Another example might be not running an audit at all, rather download a script and run it. If the agent is installed with admin rights, you can now manage your machines without opening <strong>any</strong> ports from it to the world.</p><p>Enabling advanced agents means an agent can be instructed to download any file and execute any command. <strong>WARNING</strong>: This comes with security risks. This configuration will <strong>only</strong> function when running Open-AudIT using HTTPS and a valid (Certificate Authority provided) certificate for '] = 'Agentoj kontribouj povas esti kreitaj tio prezigas tempoda transferon, reton kaj oopperacion. Se iu testto ne estas metita, εi estas ekskludita de la <i>Alternativainuj murs egali</i> Postulo.<br/><br/>Vio povas krei plurajn agentojn kaj havi la servilon kontroli unu a Vi eble (ekzample) prezigas unu agenton kiu diras <i>Se la agento IP estas en tiu subreto, metis la loko _ id de la aparato</i>.<br/><br/>Alia eczempo eble ne prizorgas revizion entute, mieluummin el sortutas manikripton kaj prizorgas εin. L \'administration de l\' information et de la communication <strong>Il n \'y a pas de</strong> Il n \'y a pas de problème.<p>Rajigo progresintaj agentoj signfas agento povas esti regulukciita el apretuti ajnan dosieron kaj efektivigi ajnan kommundon. <strong>→ Eventoj:</strong>: Tio venas kun sekureco rissoj. # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # <strong>Nur</strong> funkcio dum prizorgado de Open- AudIT uzanta HTTPS kaj valida (sertifitseerimisasus disponigis) aestilon por </p>';

$GLOBALS["lang"]['Aggressive'] = 'Agreso';

$GLOBALS["lang"]['Aland Islands'] = 'Alandinsulj';

$GLOBALS["lang"]['Albania'] = 'Albanio Albanio Albanio';

$GLOBALS["lang"]['Albanian'] = 'Albana albana';

$GLOBALS["lang"]['alert_style'] = 'Evaluation de warla';

$GLOBALS["lang"]['Alert Style'] = 'Evaluation de warla';

$GLOBALS["lang"]['Algeria'] = 'Gépkocsi';

$GLOBALS["lang"]['algorithm'] = 'Algoritmi';

$GLOBALS["lang"]['Algorithm'] = 'Algoritmi';

$GLOBALS["lang"]['alias'] = 'Aliaj';

$GLOBALS["lang"]['Alias'] = 'Aliaj';

$GLOBALS["lang"]['All'] = 'Отели вани';

$GLOBALS["lang"]['All IPs'] = 'Alternatiuj IPj';

$GLOBALS["lang"]['All Policies'] = 'MINISTÈRE POLÍTICA';

$GLOBALS["lang"]['All Queued Items'] = 'Отели вани нени нани нани нани нани нани нани нени нани нани нани нани нани нани';

$GLOBALS["lang"]['All collections URLs use the format'] = 'Alternatiuj kolektoj URLoj uzas la format';

$GLOBALS["lang"]['All device sub-tables contain a couple of important columns.'] = ' Il n \'y a pas de problème.';

$GLOBALS["lang"]['All devices with a type like computer.'] = 'Mezclaj aparatoj kun tipo kiel komputucio.';

$GLOBALS["lang"]['All devices with a type of computer or router.'] = 'Mina sintoiuja paratoj kun speco de komputio epäilty ieneranto.';

$GLOBALS["lang"]['All devices without a type of switch and printer.'] = ' imitaiuja paratoj sen speco de galtilo kaj printilo.';

$GLOBALS["lang"]['All devices without a type of switch and printer. Essentially the same as the above query.'] = ' imitaiuja paratoj sen speco de galtilo kaj printilo. Esence la sama kiel la supra demando.';

$GLOBALS["lang"]['All regular discovery options are also available for use in Device Seed Discoveries.'] = ' Imitaiujregulaij malkovroelektoj anka. estas hasblaj por uzo en Découvertes de semences de periftérique.';

$GLOBALS["lang"]['All tasks can be created the same in Windows and Linux. Tasks use the CRON method for scheduling execution.'] = ' imitaiuj tapoj povas esti kreitaj la sama en Fenestroj kaj Linukso. Taskoj uzas la CRON- metodon por planado de ekzekuto.';

$GLOBALS["lang"]['Along with this request for information, we send back to FirstWave datapoints that will give us some much needed information on feature use and your installation.'] = 'Kune kun tii peto por informaj, ni sendas reen al First Laine datenpunktoj kiuj donos al ni kelkajn necessajn informajn pri trajtouzo kaj via installation.';

$GLOBALS["lang"]['Also can be created from the'] = 'Ankara Kahtlustus Povas esti kreita de la';

$GLOBALS["lang"]['Alternatives'] = 'Alternativoj';

$GLOBALS["lang"]['Amazon AWS Fields'] = 'Amazon AWS Kampoj';

$GLOBALS["lang"]['American Samoa'] = 'Usona Samoo';

$GLOBALS["lang"]['An Active Directory discovery will query Active Directory for a list of networks and scan the associated IPs just like a regular Subnet discovery.'] = 'Aktiva Adresartrova';

$GLOBALS["lang"]['An Org (organization) is the owner of most items in collections within Open-AudIT. With the exception of global items like <i>configuration</i>, most items are assigned to (owned by) an Org. A user has access to those items in a collection, that below to an Org the user has permission on.'] = 'Org (organizado) estas la preseanto de la plei multaj eroj en koletoj ene de Open- Audit. Kun la escepto de tutmondaj eroj kiel <i>(Konfiguracio)</i>La plej multaj eroj estas asignitaj al (podataj per) Uzanto havas al iron al tiaj eroy en koleto, kiu malsupre al Org la uzanto havas permeson sur.';

$GLOBALS["lang"]['An application is actively accepting TCP connections, UDP datagrams or SCTP associations on this port. Finding these is often the primary goal of port scanning. Security-minded people know that each open port is an avenue for attack. Attackers and pen-testers want to exploit the open ports, while administrators try to close or protect them with firewalls without thwarting legitimate users. Open ports are also interesting for non-security scans because they show services available for use on the network.'] = 'Aplico aktive akceptas TCP- ligojn, UDP- datembranmojn avis SCTP- unui fluidojn sur tiu hasno. Trovante tiujn overte estas la primara celosa de havenoskanado. Sekureco- inklinaj hooj scias ke -Malferma hasno estas avenuo por atako. Atakoj kaj skribiloj volas ekspluati la malfermajn hasnojn, dum administrationntoj provas fermi a scepticus proteksi ilin kun fajromuroj sen malsukcesigado de legitimaj uzantoj. Malfermaj havenoj anka';

$GLOBALS["lang"]['An array of <code>benchmarks.id</code>.'] = 'Situo <code>benchmarks.id</code>.';

$GLOBALS["lang"]['An array of <code>devices.id</code>.'] = 'Situo <code>devices.id</code>.';

$GLOBALS["lang"]['An array of object representing external links to more information.'] = 'Aro de objectkto reprezentanta eksterajn ligilojn al pli da informaj.';

$GLOBALS["lang"]['An educated guess to the identity and type of device'] = 'klera konjekto al la identeco kaj speco de aparato';

$GLOBALS["lang"]['An encrypted JSON document containing the required attributes depending on the <code>credentials.type</code>.'] = 'JSON- dokumento enhavanta la postulatajn atregultojn depende de la <code>credentials.type</code>.';

$GLOBALS["lang"]['An enterprise private network is a network that a single organization builds to interconnect its office locations (e.g., production sites, head offices, remote offices, shops) so they can share computer resources.'] = 'Entreprena privata reto ces reto kiu ununura organismo comstruas por interligi siajn oficejlokojn (ekz., produktadejoj,... efsidejoj, malpreksimaj oficoj, butikoj) tiel ili povas spliti komputilesursojn.';

$GLOBALS["lang"]['An entry can be created using the web interface if the current user logged in has a role that contains the'] = 'Eniro povas esti kreita uzante la interretinterfacon se la nuna uzanto registerdis en havason rol kiu enhavas';

$GLOBALS["lang"]['An example JSON POST body is below. This should be attached to the &quot;data&quot; form item.'] = 'Ekzample, la korpo de JSON estas malsupre. Tio devus esti alkrorcaita al la "daten" formobjekto.';

$GLOBALS["lang"]['An example widget SQL showing devices counted per location.'] = 'Ekzemplo vidin SQL Montranta aparatojn nombritaj per loko.';

$GLOBALS["lang"]['An existing Open-AudIT user was authenticated and authorized by the LDAP server. Success.'] = 'ekzisztanta Open- Audit- uzanto est un skeptikita kaj rajtigita fare de la LDAP- servilo. Sukceso.';

$GLOBALS["lang"]['An indication of the level of service required by this site.'] = 'Indiko de la nivelo de servo postulita fare de tiu ejo.';

$GLOBALS["lang"]['An internal field that indicates if the discovery has completed.'] = 'Interna kapo kiu indikas se la eltrova.';

$GLOBALS["lang"]['An open|filtered port is considered open (and will trigger device detection).<br>Previously, Open-AudIT considered an Nmap response of'] = 'Malfermita haveno estas konsiderita malferma (kaj ellasos aparatodetekton).<br/>Anta';

$GLOBALS["lang"]['An optional GeoCode'] = 'La Specidvola Geokood';

$GLOBALS["lang"]['An optional password to use sudo.'] = 'La par défautvola pasvorto por uzi la usonan.';

$GLOBALS["lang"]['Analyzed'] = 'Analizita';

$GLOBALS["lang"]['And finally, click Submit to execute this discovery.'] = 'Finfinine, klaki Enviar por efektivigi tiun eltrova.';

$GLOBALS["lang"]['And if Something Goes Wrong?'] = '? Seio Malbonas?';

$GLOBALS["lang"]['And lastly click <i>Submit</i> to create your Open-AudIT Auth method for Entra.'] = 'Kaj finfinine klaki <i>Esita</i> Krei Fin Open- Audit Auth - Metodon por Entra.';

$GLOBALS["lang"]['And lastly, not so much a security issue - more peace of mind. The data structures are open and documented. You can view them'] = 'Kaj finfinine, ne tien multe da sekureca temo - pli da paco de menso. La datenstrukturoj estas malfermaj kaj dokumentitaj. Vis povas vidi ilin';

$GLOBALS["lang"]['And provide a name - we humbly recommend Open-AudIT &#128512;, but you can name it anything you like. Make sure the option for <i>Integrate any other application you do not find in the gallery (Non-gallery)</i> is selected. And then click <i>Create<i>.'] = 'Ni humile remomendas Open- Audit... <i>Integri ajnan alias aplika... on vi ne Trovas en la galerio (no- galerii)</i> Estas ektita. Kaj poste klaki <i>Krei<i>.</i></i>';

$GLOBALS["lang"]['And so much more.'] = 'Kaj multe pla.';

$GLOBALS["lang"]['Andorra'] = 'Andoro';

$GLOBALS["lang"]['Angola'] = 'Angolo';

$GLOBALS["lang"]['Anguilla'] = 'Anguila';

$GLOBALS["lang"]['Annex A Controls'] = 'Aneksa.o de controloj.';

$GLOBALS["lang"]['Antarctica'] = 'Antarktó Nom de la ville (facultatif, sans doute pas besoin de traduction)';

$GLOBALS["lang"]['AntiVirus'] = 'Antivírus';

$GLOBALS["lang"]['AntiVirus Packages'] = 'Antivirus Paquette';

$GLOBALS["lang"]['Antigua and Barbuda'] = 'Antigvo kajBarbuda';

$GLOBALS["lang"]['Antivirus'] = 'Contra';

$GLOBALS["lang"]['Any TCP ports (comma seperated, no spaces) you wish to exclude from this discovery. Only available when using Nmap 7+.'] = ' (komma seperated, neniuj spacoj) vi deziras eskludi de tiu eltrova. Nur havbla dum uzado de Nmap 7 +.';

$GLOBALS["lang"]['Any UDP ports (comma seperated, no spaces) you wish to exclude from this discovery. Only available when using Nmap 7+.'] = ' imitaiuj UDP- havenoj (komma seperite, neniuj spacoj) vi deziras eskludi de tiu eltrova. Nur havbla dum uzado de Nmap 7 +.';

$GLOBALS["lang"]['Any additional documentation you need.'] = 'Imitaiu alias dokumento, kiun vi bezonas.';

$GLOBALS["lang"]['Any additional notes you care to make.'] = ' Il n \'y a pas de problème.';

$GLOBALS["lang"]['Any attributes followed by a * indicate that CVSS data less than v4 was used to complete this field. By default, we attempt to use v4 fields, however if they are not populated we will fallback to the previous version(s) for attributes.'] = ' Imitaiuj ategortoj sekvitaj per defa.lte, ni provas uzi v4 kapampjn, aliflanke se ili ne estas lo...';

$GLOBALS["lang"]['Any devices will be assigned to this Org when they run their audit script (if set).'] = 'Alternativaiuj paratoj estes asignitaj al tiu Org kiam ili prizorgas sian reviziomanuskripton (se aro).';

$GLOBALS["lang"]['Any devices will be assigned to this Org when they run their audit script (if set). Links to <code>orgs.id</code>.'] = 'Alternativaiuj paratoj estes asignitaj al tiu Org kiam ili prizorgas sian reviziomanuskripton (se aro). Ligiloj al <code>orgs.id</code>.';

$GLOBALS["lang"]['Any discovered devices will be assigned to this Location if set. Links to <code>locations.id</code>.'] = ' Il s \'agit d\' un programme d \'aide à l\' emploi. Ligiloj al <code>locations.id</code>.';

$GLOBALS["lang"]['Any discovered devices will be assigned to this Location when they run their audit script (if set).'] = ' imitaiuj malkovritaj aparato estos asignitaj al tiu loko kiam ili prizorgas sian reviziomanuskripton (se aro).';

$GLOBALS["lang"]['Any discovered devices will be assigned to this Location when they run their audit script (if set). Links to <code>locations.id</code>.'] = ' imitaiuj malkovritaj aparato estos asignitaj al tiu loko kiam ili prizorgas sian reviziomanuskripton (se aro). Ligiloj al <code>locations.id</code>.';

$GLOBALS["lang"]['Any discovered devices will be assigned to this Org if set. If not set, they are assigned to the <code>org_id</code> of this discovery. Links to <code>orgs.id</code>.'] = ' personalizadoiuj malkovritaj aparato estos asignitaj al tiu Org se aro. Il n \'y a pas d\' autres <code>org_id</code> De tiu malkovro. Ligiloj al <code>orgs.id</code>.';

$GLOBALS["lang"]['Any files found in this manner are stored in the <i>executable</i> table as per any other device component.'] = 'Azonosító a los dosierojtrovitaj en tiu maniero estas stokitaj en la <i>ekzekuebla</i> Tablo kiel per iu alias aparato komponanto.';

$GLOBALS["lang"]['Any required filter. NOTE: When type = traffic, this represents the font-awesome icon.'] = '- Qué? Kiam tipo = trafiko, tio reprezentas la tiparon- fortan ikonon.';

$GLOBALS["lang"]['Any specific TCP ports you wish tested (comma seperated, no spaces).'] = ' (komma seperite, neniuj spacoj).';

$GLOBALS["lang"]['Any specific UDP ports you wish tested (comma seperated, no spaces).'] = ' imitaiuj spetifaj UDP- havenoj vi deziras prestantan (komma seperita, neniuj spacoj).';

$GLOBALS["lang"]['Any user uploaded images are placed here.'] = 'Mezcla uzanto al apretitis bildojn Či hulet.';

$GLOBALS["lang"]['Application'] = 'Apliko';

$GLOBALS["lang"]['Application Definitions'] = 'Aplikoj';

$GLOBALS["lang"]['application_id'] = 'Numero d \'identification';

$GLOBALS["lang"]['Application ID'] = 'Numero d \'identification';

$GLOBALS["lang"]['Application Licenses'] = 'Apliki licencojn';

$GLOBALS["lang"]['Application, Operating System or Hardware.'] = 'Apliki, Funkciigante Sistemon a. Hardvaron.';

$GLOBALS["lang"]['applications'] = 'Aplikoj';

$GLOBALS["lang"]['Applications'] = 'Aplikoj';

$GLOBALS["lang"]['Applications are an Enterprise only feature.'] = 'Aplicoj estas Enterprise nur trajto.';

$GLOBALS["lang"]['Applications are being introduced in Open-AudIT 2.2 with a view to expand on the concept as further development is made.'] = 'Aplicoj estas lanvisionitaj en Open- Audit 2.2 kun vido disetendi pilai en la koncepto kiam plia evoluo estas farita.';

$GLOBALS["lang"]['applied'] = 'Aplicadas';

$GLOBALS["lang"]['Applied'] = 'Aplicadas';

$GLOBALS["lang"]['Approved'] = 'Aplikita';

$GLOBALS["lang"]['Approved Packages'] = 'Aplikitaj pakoj';

$GLOBALS["lang"]['April'] = 'J \'ai une idée.';

$GLOBALS["lang"]['Arabic'] = 'Arabaarabuertorico. kgm';

$GLOBALS["lang"]['architecture'] = 'Arkitekturo Arkitekturo';

$GLOBALS["lang"]['Architecture'] = 'Arkitekturo Arkitekturo';

$GLOBALS["lang"]['Are you sure you want to delete this input item?'] = '? Te Sientes bien?';

$GLOBALS["lang"]['Are you sure you want to delete this output item?'] = 'Como?';

$GLOBALS["lang"]['Are you sure?'] = '? Des vicertas?';

$GLOBALS["lang"]['Are you sure? This will remove all queue entries and prevent the remaining IPs from being discovered.'] = '? Des vicertas? Tio forigos...';

$GLOBALS["lang"]['Are you sure? This will reset the queue processing count and could cause load on the server.'] = '? Des vicertas? Tio rekomencos la atendoprentigogokalkulon kaj povis kaizi родельно№ sobre la servilo.';

$GLOBALS["lang"]['area'] = 'Aréo';

$GLOBALS["lang"]['Area'] = 'Aréo';

$GLOBALS["lang"]['Argentina'] = 'Argentína';

$GLOBALS["lang"]['Armenia'] = 'Örményország';

$GLOBALS["lang"]['arp'] = 'Arp';

$GLOBALS["lang"]['Arp'] = 'Arp';

$GLOBALS["lang"]['Aruba'] = 'Arubo';

$GLOBALS["lang"]['As a reminder of how authorisations works in Open-AudIT, see'] = 'Kieligilo de kieli avoboj funkcias en Open- Audit, vidéos';

$GLOBALS["lang"]['As a result, we <strong>must</strong> have the admin$ share available to the discovery credentials user. Please check the target Windows machine provides <i>write</i> access for the discovery credentials user.<br>'] = 'Kiel rezulto, ni <strong>Dévas</strong> Havas la parton de la admin hasbla al latrova.o akredita uoj uzanto. Bonvolu kontroli la celon Windows- marajeino provizas <i>SKRBI</i> Aliro por la malkovro akredita.<br/>';

$GLOBALS["lang"]['As mentioned above, the developers do not speak all the translation languages offered. This means we cannot review with acuracy, the translated text. We do try for a cursory review. If you see something that is not translated correctly, you can change it yourself. Edit the appropriate language file (as below) and find the text to be changed. Maybe it does not exist and you need to add it. Just change the text, save the file and refresh your we page. No need to restart any services/daemons for it to take effect. You might need to force refresh your browser.'] = 'Kiel menciite supre, la programmistoj ne parolas Čiujn traduklingvojn ofertitajn. Tio signfas ke ni ne povas revizii kun acuracy, la tradukita teksto. Ni provas por Saniga revizio. Se Vidas ioni kiu ne estas tradukita εuste, vi povas раваннои недение mem. Editer la konvena lingvodosiero (kiel malsupre) kajtrovas la tekston eti шanшita. Eble εi ne ekzistas kaj vi murs aldoni Neniu bezono rekomenci jujn servojn / daemon por εi por ekvalidi. Vi eble bezonos refre divertaigi vini retumhagyma.';

$GLOBALS["lang"]['As per the OpenSCAP benchmarks - <i>Do not attempt to implement any of the settings in this benchmark without first testing them in a non-operational environment. The creators of this benchmark assume no responsibility whatsoever for its use by other parties, and makes no guarantees, expressed or implied, about its quality, reliability, or any other characteristic.</i><br><br>Seriously, do not blindly start <i>fixing</i> issues revealed after running a benchmark without first thoroughly testing in a non-production, identical environment.'] = 'Kieli per la OpenSCAP kompanormo - Oui. <i>Ne présente efektivigi jujn ajn da la valoroj en tiu kompnormo sen uua testado de ili en ne- funkcia medio. La kreintoj de tiu komparnormo supozas neniun responsecon entute por εia uzo de aliasj partioj, kaj faras neniujn garantiojn, esprimitajn a Kaptlus implitsiitaj, koncerne εian kvaliton, fidindecon, ajnan alias karatteritsaon.</i><br/><br/>Ne blinde omencu <i>Riparado</i> temoj rivelis post prizorgado de kompanormo sen ua plene testado en neproduktado, identa medio.';

$GLOBALS["lang"]['As per the attributes for device environments. Production, Training, et al.'] = 'Kiel per la atentioj por ma apretinmedioj. - Oui.';

$GLOBALS["lang"]['As the audit script uses bash, you can use the wildcard of * when you are defining directories and exclusions.'] = 'Identificar la reviziomanuskripto uzas lardon, vi povas uzi la sava progressiivinen karton de. kiam vi divinas adresarojn kaj ekskludojn.';

$GLOBALS["lang"]['As usual, go to menu → Manage → Integrations → Create Integration. As above, if you are running on Linux and you have NMIS on the same server, you do not need to do anything other than click <i>Submit</i>. I cannot make it easier than that.'] = 'Kiel kutime, iru al menuo → Manaεo → Integri Se vi kuras sur Linukson kaj vi havas NMIS sur la sama servilo, vi ne bezonas fari ioni ajn krom klako. <i>Esita</i>. L \'objectif est de faire en sorte que l\' utilision de l \'eau potable puisse être considérée comme une source d\' énergie.';

$GLOBALS["lang"]['As we run Discoveries and collect device results we populate the list of networks. The Blessed Subnets feature uses this list of networks to only accept data from devices on those networks.'] = 'Azonosító Eltrova La Beato Subnets trajto utilogas tiun Lister de retoj por nur aksepti datenojn de aparatoj sur tiaj retoj.';

$GLOBALS["lang"]['As you have Collectors registered, please choose where to execute this discovery.'] = 'Kiel vi havas kolektantojn registeritaj, bonvolu elekti kie efektivigi tiun eltrova.';

$GLOBALS["lang"]['Ask me later'] = 'Demande';

$GLOBALS["lang"]['Ask the Community for help or contribute answers for others.'] = 'Demandu la Komunumon por heldi a';

$GLOBALS["lang"]['aspect_ratio'] = 'Aspekto suhtarv';

$GLOBALS["lang"]['Aspect Ratio'] = 'Aspekto suhtarv';

$GLOBALS["lang"]['Asset ID'] = 'Kieli- instali Numero d \'identification';

$GLOBALS["lang"]['asset_ident'] = 'Tunniste';

$GLOBALS["lang"]['Asset Ident'] = 'Tunniste';

$GLOBALS["lang"]['asset_number'] = 'Número de activos';

$GLOBALS["lang"]['Asset Number'] = 'Número de activos';

$GLOBALS["lang"]['asset_tag'] = 'C \'est Hiljaa.';

$GLOBALS["lang"]['Asset Tag'] = 'C \'est Hiljaa.';

$GLOBALS["lang"]['Assign Device to Application'] = 'Määra Seade al Apliko';

$GLOBALS["lang"]['Assign Device to Cluster'] = 'Määra Seade al klaster';

$GLOBALS["lang"]['Assign Device to Location'] = 'Omista seade al Loko';

$GLOBALS["lang"]['Assign Device to Organisation'] = 'Määra Voir aussi Seade al organiso';

$GLOBALS["lang"]['Assign Devices to Location'] = 'Assignaj aparatoj al loko';

$GLOBALS["lang"]['Assign Devices to Organisation'] = 'Assignaj aparatoj al organiso';

$GLOBALS["lang"]['Assign an ISMS manager or team'] = 'Attribution ISMS- mana suya';

$GLOBALS["lang"]['Assign an Operator'] = 'Suba maldekstra butono [..] estas por [juria roja] por [Sendi].';

$GLOBALS["lang"]['Assign any audited devices to this Org. Leave blank to leave device in currently assigned Org (or to set default).'] = 'Asigu jujn ajn reviziitaján aparato al tiu Org. Forlasa.o por forlasi aparaton en nuntempe asignita Org (kahtlus por meti defa.lton).';

$GLOBALS["lang"]['Assign the Device to a Location'] = 'Sous- secteur la Devicon al loko';

$GLOBALS["lang"]['Assign the device to an Org'] = 'Substribu la aparaton al Org';

$GLOBALS["lang"]['Assigned To'] = 'Subskribita al';

$GLOBALS["lang"]['Assigning Discovered Devices'] = 'Agordante Malkovritajn aparato';

$GLOBALS["lang"]['At present we can use netstat_ports, software and users.'] = 'Nun ni povas uzi retstat _ port, programemaro kaj uzantoj.';

$GLOBALS["lang"]['attached_device_id'] = 'ID de dispositivo Atedita';

$GLOBALS["lang"]['Attached Device ID'] = 'ID de dispositivo Atedita';

$GLOBALS["lang"]['attached_to'] = 'Alkrovolvita al.';

$GLOBALS["lang"]['Attached To'] = 'Alkrovolvita al.';

$GLOBALS["lang"]['attachment'] = 'Henkillisy';

$GLOBALS["lang"]['Attachment'] = 'Henkillisy';

$GLOBALS["lang"]['attachments'] = 'Atutoj';

$GLOBALS["lang"]['Attachments'] = 'Atutoj';

$GLOBALS["lang"]['attack_complexity'] = 'Atako- komplekseco';

$GLOBALS["lang"]['Attack Complexity'] = 'Atako- komplekseco';

$GLOBALS["lang"]['attack_requirements'] = 'Atako- postuloj';

$GLOBALS["lang"]['Attack Requirements'] = 'Atako- postuloj';

$GLOBALS["lang"]['attack_vector'] = 'Atako sektori';

$GLOBALS["lang"]['Attack Vector'] = 'Atako sektori';

$GLOBALS["lang"]['Attempt to ping the device if we are not auditing localhost.'] = 'Provo piki la aparaton se ne revizias lokanhost.';

$GLOBALS["lang"]['Attribute'] = 'Hozzájárulás';

$GLOBALS["lang"]['attributes'] = 'Hozzájárulás';

$GLOBALS["lang"]['Attributes'] = 'Hozzájárulás';

$GLOBALS["lang"]['Attributes are stored for Open-AudIT to use for particular fields, at present all fields are based on the devices, locations, orgs and queries tables. The attributes you can edit are associated with the following columns: Class, Environment, Status & Type.'] = 'Atributoj estas stokitaj por Open- Audit por uzi por specialaj kampraj, nuntempe... La atentoj vi povas redakki estas rilataj al la sekvaj kolonoj: Klaso, Medio Ambiente, Estado et Tipo.';

$GLOBALS["lang"]['Audit'] = 'Tilintarkastaja';

$GLOBALS["lang"]['Audit AIX'] = 'AIX';

$GLOBALS["lang"]['Audit DNS'] = 'Tilintarkastaja';

$GLOBALS["lang"]['Audit ESXi'] = 'Auditoría ESXi';

$GLOBALS["lang"]['Audit Linux'] = 'Auditoría Linux';

$GLOBALS["lang"]['audit_log'] = 'Dosiero';

$GLOBALS["lang"]['Audit Log'] = 'Dosiero';

$GLOBALS["lang"]['Audit Mount Point'] = 'Tarkaszté';

$GLOBALS["lang"]['Audit My PC'] = 'Kaptlustatav mian kompution';

$GLOBALS["lang"]['Audit Netstat'] = 'Reta Netstat';

$GLOBALS["lang"]['Audit OSX'] = 'Auditoría OSX';

$GLOBALS["lang"]['Audit Result Input'] = 'Comprobación de resultados';

$GLOBALS["lang"]['Audit Software'] = 'Kahtlustiused programemiaro';

$GLOBALS["lang"]['Audit Status'] = 'Szobrok de Kaflustuse';

$GLOBALS["lang"]['Audit Win32 Product'] = 'Revizita Win32 Produkta produkto';

$GLOBALS["lang"]['Audit Windows'] = 'Réponse fenestrojn';

$GLOBALS["lang"]['Audit the Device'] = 'Aεdi la Appareil';

$GLOBALS["lang"]['Audits'] = 'Tilintarkastus';

$GLOBALS["lang"]['August'] = 'Kahtlustusgusto A';

$GLOBALS["lang"]['Australia'] = 'Kahtlustiuse';

$GLOBALS["lang"]['Austria'] = 'Kathlustuslause';

$GLOBALS["lang"]['Auth'] = 'Resp.:';

$GLOBALS["lang"]['auth'] = 'Resp.:';

$GLOBALS["lang"]['Auth Methods'] = 'Auth Metodoj';

$GLOBALS["lang"]['Authenticate only'] = 'Kaptlustamiini nur';

$GLOBALS["lang"]['Authentication Passphrase'] = 'Parolifraas de Kaptlustatuse';

$GLOBALS["lang"]['Authentication Protocol'] = 'Kahtlustusentiga Protokolo';

$GLOBALS["lang"]['authority_key_ident'] = 'Epäillyn toritato';

$GLOBALS["lang"]['Authority Key Ident'] = 'Epäillyn toritato';

$GLOBALS["lang"]['Auto'] = 'Kahtlustus';

$GLOBALS["lang"]['auto_renew'] = 'Renoveerija';

$GLOBALS["lang"]['Auto Renew'] = 'Renoveerija';

$GLOBALS["lang"]['Auto populated by the Open-AudIT Server.'] = 'Kaphlustus lo bendita fare de la Open- Audit- Servilo.';

$GLOBALS["lang"]['AutoRenew'] = 'Kahtlustuttorenovigo';

$GLOBALS["lang"]['automatable'] = 'Kahtlusalunebla';

$GLOBALS["lang"]['Automatable'] = 'Kahtlusalunebla';

$GLOBALS["lang"]['Automatically populated based on the Collectors OS.'] = 'Epäilty, cuten lo...';

$GLOBALS["lang"]['availability'] = 'Disponibilité';

$GLOBALS["lang"]['Availability'] = 'Disponibilité';

$GLOBALS["lang"]['Available Benchmarks'] = 'Havebla kriteeriumidi';

$GLOBALS["lang"]['Awaiting Analysis'] = 'Atendante Analizon';

$GLOBALS["lang"]['Azerbaijan'] = 'Zambaj pilano Zambaj pilano';

$GLOBALS["lang"]['Azerbaijani'] = 'aseraaseri';

$GLOBALS["lang"]['Azure Active Directory'] = 'Azure Aktiva Adresaro';

$GLOBALS["lang"]['BTU Max'] = 'BTU Max';

$GLOBALS["lang"]['BTU Total'] = 'BTU yheensä';

$GLOBALS["lang"]['Backbone network'] = 'Retorno de Malanta';

$GLOBALS["lang"]['Backup'] = 'Malanta épäilee Dorsoa';

$GLOBALS["lang"]['Bahamas the'] = 'Bahamoj';

$GLOBALS["lang"]['Bahrain'] = 'Barejno';

$GLOBALS["lang"]['Bangladesh'] = 'Banglade bloggero banglade chanto';

$GLOBALS["lang"]['bank'] = 'Banka Banko';

$GLOBALS["lang"]['Bank'] = 'Banka Banko';

$GLOBALS["lang"]['Banned'] = 'Keelatud';

$GLOBALS["lang"]['Banned Packages'] = 'Paquetes restribidos';

$GLOBALS["lang"]['bar_code'] = 'Código de barras';

$GLOBALS["lang"]['Bar Code'] = 'Código de barras';

$GLOBALS["lang"]['Barbados'] = 'Barbado';

$GLOBALS["lang"]['Base DN'] = 'Bazo DN';

$GLOBALS["lang"]['base_score'] = 'Tunnistaja';

$GLOBALS["lang"]['Base Score'] = 'Tunnistaja';

$GLOBALS["lang"]['base_severity'] = 'Sévérité bazo';

$GLOBALS["lang"]['Base Severity'] = 'Sévérité bazo';

$GLOBALS["lang"]['based_on'] = 'Surbaze';

$GLOBALS["lang"]['Based On'] = 'Surbaze';

$GLOBALS["lang"]['baseline'] = 'Bazlinio Nom de la ville (facultatif, sans doute pas besoin d \'une traduction)';

$GLOBALS["lang"]['Baseline'] = 'Bazlinio Nom de la ville (facultatif, sans doute pas besoin d \'une traduction)';

$GLOBALS["lang"]['baseline_id'] = 'Azonosító Bazlinio';

$GLOBALS["lang"]['Baseline ID'] = 'Azonosító Bazlinio';

$GLOBALS["lang"]['baselines'] = 'Le président';

$GLOBALS["lang"]['Baselines'] = 'Le président';

$GLOBALS["lang"]['baselines_policies'] = 'Bazlinioj Politikoj';

$GLOBALS["lang"]['Baselines Policies'] = 'Bazlinioj Politikoj';

$GLOBALS["lang"]['Baselines Policy'] = 'Bazoj Politiko';

$GLOBALS["lang"]['Baselines Policy Details'] = 'Bazlinio-Politiko-Detaloj';

$GLOBALS["lang"]['baselines_results'] = 'Bazaj rezultoj';

$GLOBALS["lang"]['Baselines Results'] = 'Bazaj rezultoj';

$GLOBALS["lang"]['Baselines can compare netstat ports, users and software.'] = 'Bazlinioj povas kompari retstat hasnojn, uzantojn kaj softvaron.';

$GLOBALS["lang"]['Baselines enable you to combine audit data with a set of attributes you have previously defined (your baseline) to determine compliance of devices.'] = 'Bazlinioj rajtigas vin kombini reviziodatenojn kun aro de atentioj kiujn vi anta';

$GLOBALS["lang"]['Baselines for Device Comparison'] = 'Bazlinioj por MEDICAMENS';

$GLOBALS["lang"]['Basic'] = 'Baza Baza Baza Baza';

$GLOBALS["lang"]['Basque'] = 'La vaska';

$GLOBALS["lang"]['Because we try to be as transparent as possible, here is your actual data that we send.'] = 'Identificar ni provas esti tien travideblaj kiel eblaj - Tie estas viaj faktaj datenoj kiujn ni sendas.';

$GLOBALS["lang"]['Being able to determine which machines are configured in the same way is a major part of systems administration and auditing – and now reporting on that will be made simple and automated. Once you define your baseline it will automatically run against a set of devices on a predetermined schedule. The output of these executed baselines will be available for web viewing, importing into a third party system or even as a printed report.<br><br>For auditing and management purposes it can be advantageous to baseline individual devices against a fixed, known good device. Baselines enable you to combine audit data with a set of attributes you have previously defined (your baseline) to determine compliance of devices.'] = 'Povas determi kiuj ma apretinoj estas formitaj la epäillyn la saman manieron estas grava parto de system administrativeio kaj revizio. Post kiam vi difinas linn bazlinion εi a skeptidtomate kuris kontraluc aro de aparatoj en ankeriasnevalt obellaks määratud horaro. La produktado de tiuj efekkivigitaj bazlinioj estas hasbla por interretspektado, importe en trian partian sistemon a spective e kiel presita raporto.<br/><br/>Por reviziado kaj administrateceloj εi povas esti pava al bazlinio infinalduaj aparato kontraconfiksa, konata bona aparato. Bazlinioj rajtigas vin kombini reviziodatenojn kun aro de atentioj kiujn vi anta';

$GLOBALS["lang"]['Belarus'] = 'Belorusio';

$GLOBALS["lang"]['Belgium'] = 'Belgique';

$GLOBALS["lang"]['Belize'] = 'Belizo';

$GLOBALS["lang"]['Below is an example of the required csv format.'] = 'Malsupre estas eczempo de la postulata csv formato.';

$GLOBALS["lang"]['Below these lines are where the variables are injected into the script. Following on from our earlier example, the Linux audit script is populated with our directory like so'] = 'Sub tiuj linioj estas kie la variabloj estas injektitaj en la manikripton. Sekante de nia pli frua ekzemplo, la Linukso- revizia manikripto estas lo innovdorita kun nia adresaro kiel';

$GLOBALS["lang"]['Below you can see an example Org Chart. If a user has permission on the <i>Finance A</i> Org, they also have permission on the descendant Orgs of Dept A, B & C. This is regardless of the collection requested.<br><br>If the collection requested allows ascendants, then the user will also have access to Company #1 and Default Org items. This is for (as above) queries, groups, et al.<br><br>Note - A user may have access to a query from Default Org, but that is the query itself not the result. The result will only show devices that the user has access to - IE devices from Finance A and Dept A, B & C.'] = 'Malsupre vi povas vidi ekzemplon Organigramme. Le Conseil de l \'Europe <i>Financo</i> - C \'est quoi? havas permeson sur la posteulo. Orgs de Dept A, B & C Tio estas nekonsiderante la kolekto petis.<br/><br/>Se la kolekto petis permesas aspintojn, tiam la uzanto anka epäilty havos aliron al firmao numero 1 kaj Oletus org erojn. Tio estas por (kiel supre) demandoj, grupoj et al.<br/><br/>Notu: uzanto povas havi aliron al demando de Alapértelmezett Org, seditio estas la atendo mem ne la rezulto. La rezulto nur montras aparato kiujn la uzanto havas aliro al - IE aparatoj de Finance A kaj Dept A, B & C';

$GLOBALS["lang"]['Benchmark'] = 'Võrdlusmärk';

$GLOBALS["lang"]['benchmark_id'] = 'Numéro de référence';

$GLOBALS["lang"]['Benchmark ID'] = 'Numéro de référence';

$GLOBALS["lang"]['Benchmark Tasks are created automatically when a benchmark is created.'] = 'Vőrdlusalus Ülesanded estas kreita un kiam kompnormo limité estas kreita.';

$GLOBALS["lang"]['Benchmark execution and processing can take a lengthy amount of time, hence the preference to schedule them and not run them ad-hoc.'] = 'Benchmark- ekzekuto kaj pretigo povas preni longecan kvanton de tempo, tial la prefeon por plani ilin kaj ne prizorgi ilin ad hoc.';

$GLOBALS["lang"]['benchmarks'] = 'Kriteriumidi';

$GLOBALS["lang"]['Benchmarks'] = 'Kriteriumidi';

$GLOBALS["lang"]['benchmarks_exceptions'] = 'Vördlusaluse Eseptij';

$GLOBALS["lang"]['Benchmarks Exceptions'] = 'Vördlusaluse Eseptij';

$GLOBALS["lang"]['benchmarks_log'] = 'Vördlusandmed';

$GLOBALS["lang"]['Benchmarks Log'] = 'Vördlusandmed';

$GLOBALS["lang"]['benchmarks_policies'] = 'Kriteerid Politikoj';

$GLOBALS["lang"]['Benchmarks Policies'] = 'Kriteerid Politikoj';

$GLOBALS["lang"]['benchmarks_result'] = 'Résultat de los parátro';

$GLOBALS["lang"]['Benchmarks Result'] = 'Résultat de los parátro';

$GLOBALS["lang"]['Benchmarks are created by providing an operating system and Version, combined with a specific guide and a list of machines to execute it upon. After creation, benchmarks are executed against the list of machines on a schedule.'] = 'Võrdlusalosed estas kreita disporigante opéracion kaj Version, Kombinita kun specifa gvidisto kaj lista de ma apretinoj porvigi εin sur. Post kreado, komparnormoj estas efektivititaj kontra.la lista de ma apretinoj en horaro.';

$GLOBALS["lang"]['Benchmarks for Best Practise Configuration'] = 'Vördlusalused por Mejor Configuración de Practicación';

$GLOBALS["lang"]['Benchmarks provide security recommendations for your computers, utilising the OpenSCAP tools and policies.</p><p><i>From the OpenSCAP homepage:</i>  In the ever-changing world of computer security where new vulnerabilities are being discovered and patched every day, enforcing security compliance must be a continuous process. It also needs to include a way to make adjustments to policies, as well as periodic assessment and risk monitoring. The OpenSCAP ecosystem provides tools and customizable policies for a quick, cost-effective and flexible implementation of these processes.'] = 'Võrdlusaloused disponigas secuperekomendojn por viaj komputiloj, utiligante la OpenSCAP-ilojn kaj politikojn.<p><i>De la OpenSCAP Hejmpaεo:</i> En la iam- ajna- varia mondo de köpötilsekureco kie novaj vundblecoj estas malkovritaj kaj pecetigitaj † iun tagon, devigi sekurecobservaton brunces et kontinua procezo. La OpenSCAP ekositemo disponigas iljn kaj adaptitajn politikojn por rafa, kostefika kaj freksebla efektivigo de tiaj procezoj.</p>';

$GLOBALS["lang"]['Benefits'] = 'Princoj';

$GLOBALS["lang"]['Bengali'] = 'Bengala bengala';

$GLOBALS["lang"]['Benin'] = 'Bénino';

$GLOBALS["lang"]['Bermuda'] = 'Bermudo Bermudes';

$GLOBALS["lang"]['best_practises'] = 'Plej bona-harjoitukset';

$GLOBALS["lang"]['Best Practises'] = 'Plej bona-harjoitukset';

$GLOBALS["lang"]['Bhutan'] = 'Butano';

$GLOBALS["lang"]['bios'] = 'Bioj';

$GLOBALS["lang"]['Bios'] = 'Bioj';

$GLOBALS["lang"]['body'] = 'korpo';

$GLOBALS["lang"]['Body'] = 'korpo';

$GLOBALS["lang"]['Bolivia'] = 'Bolivio';

$GLOBALS["lang"]['Boolean'] = 'Booléen';

$GLOBALS["lang"]['Boolean 1/0'] = '1 / 0';

$GLOBALS["lang"]['Boolean y/n'] = 'Booléenne';

$GLOBALS["lang"]['boot_device'] = '→ Eventoj:';

$GLOBALS["lang"]['Boot Device'] = '→ Eventoj:';

$GLOBALS["lang"]['bootable'] = '→ Eventoj:';

$GLOBALS["lang"]['Bootable'] = '→ Eventoj:';

$GLOBALS["lang"]['Bosnia and Herzegovina'] = 'Bossio kaj Hercegovino';

$GLOBALS["lang"]['Both forms of'] = 'L \'Ambairy formoj de';

$GLOBALS["lang"]['Botswana'] = 'Bocvano';

$GLOBALS["lang"]['Bouvet Island (Bouvetoya)'] = 'Bouveti aari (Bouvetoya)';

$GLOBALS["lang"]['Brazil'] = 'Brasiilisti';

$GLOBALS["lang"]['Brazilian Portuguese'] = 'Brasilia portugala';

$GLOBALS["lang"]['Breaking it Down'] = 'Rompante εin malsupren';

$GLOBALS["lang"]['British Indian Ocean Territory (Chagos Archipelago)'] = 'Brita Hinda Oceana Territorio (Chagos Arkipelago)';

$GLOBALS["lang"]['British Virgin Islands'] = 'Britaj Virgullininsurloj';

$GLOBALS["lang"]['Browse down the tree to Console Root -> Component Services -> Computers -> My Computer<br><br>Right click on <i>My Computer</i> and select properties<br><br>Select the <i>Default Properties</i> tab'] = 'Navega la liukoinen la arbo al Console Root Komponettaj servoj - limit anza Komputiloj - No mia komputio<br/><br/>Rekte klaki sur <i>Mia komputio</i> Kaj selektas trajtojn<br/><br/>Elektu <i>Défia</i> kla retrave';

$GLOBALS["lang"]['Brunei Darussalam'] = 'Brunejo Darussalam';

$GLOBALS["lang"]['btu_max'] = 'Btu Max';

$GLOBALS["lang"]['Btu Max'] = 'Btu Max';

$GLOBALS["lang"]['btu_total'] = 'Btu Totala';

$GLOBALS["lang"]['Btu Total'] = 'Btu Totala';

$GLOBALS["lang"]['build_number'] = 'Konstrui Nombron';

$GLOBALS["lang"]['Build Number'] = 'Konstrui Nombron';

$GLOBALS["lang"]['build_number_full'] = 'Konstrui Nombron Plena';

$GLOBALS["lang"]['Build Number Full'] = 'Konstrui Nombron Plena';

$GLOBALS["lang"]['Building'] = 'Le président';

$GLOBALS["lang"]['Builds trust with clients and partners'] = 'Konstruas fidon al klientoj kaj partenaire';

$GLOBALS["lang"]['Bulgaria'] = 'Bulgária';

$GLOBALS["lang"]['Bulgarian'] = 'Gestapo';

$GLOBALS["lang"]['Bulk Edit'] = 'Puistedaktor';

$GLOBALS["lang"]['Bulk Edit Form'] = 'Forma de edición de Bulk';

$GLOBALS["lang"]['Bulk Editing Device Attributes'] = 'Destinivo de edición a granit Atributoj';

$GLOBALS["lang"]['Bulk edit selections wont stay selected after clicking next page.'] = 'Kuk redaktas selektadojn gajnitan restas ektitaj post klakado de venta pacomamento.';

$GLOBALS["lang"]['Burkina Faso'] = 'Burkino';

$GLOBALS["lang"]['Burundi'] = 'Burundo';

$GLOBALS["lang"]['business_requirements'] = 'KOMERCAJ postuloj';

$GLOBALS["lang"]['Business Requirements'] = 'KOMERCAJ postuloj';

$GLOBALS["lang"]['But I Only Have Windows Client Machines Available!'] = 'Sed mi nur havas fenestrojn klientoj disponeblaj!';

$GLOBALS["lang"]['But I do not want to have to change the language file every time I update!'] = 'Gépkocsi Sed mi ne volas ршанной la lingvan dosieron ';

$GLOBALS["lang"]['Buy'] = 'Aurbaneti ačetojn';

$GLOBALS["lang"]['Buy More'] = 'Ačetu pli';

$GLOBALS["lang"]['Buy More Licenses'] = 'Ačetu pli da permesiloj';

$GLOBALS["lang"]['By'] = 'Antalucita por';

$GLOBALS["lang"]['By default we integrate all devices with their nmis_manage attribute set to <i>y</i>. With 4.2.0 we also ship a Rule that says <i>If we discover a device and it has a valid SNMP OID, mark that device as managed by NMIS</i>. Obviously you can disable this if it is not what you want.'] = 'l \'utilation de metita al <i>Oui.</i>. Kun 4.2.0 ni anka regulan kiu diras <i>Se ni malkovras aparaton kaj εi havas validan SNMP OID, martas tiun aparaton kiel administrite fare de NMIS</i>. L \'utilization de la technologie de l\' information dans le domaine de l \'informatique et de l\' informatique a été améliorée.';

$GLOBALS["lang"]['By default, we skip certificate validation because customers tend to use self-signed certificates. To enable certificate validation, edit the file below'] = 'Défia Por ebligi aestilon validumado, redakki la dosiron sub';

$GLOBALS["lang"]['CIDR'] = 'GCS';

$GLOBALS["lang"]['CIDR Mask'] = 'Masko';

$GLOBALS["lang"]['cli_config'] = 'KLI Asetukset';

$GLOBALS["lang"]['CLI Config'] = 'KLI Asetukset';

$GLOBALS["lang"]['CPU'] = 'Szuoritin';

$GLOBALS["lang"]['CPUs'] = 'CPUoj';

$GLOBALS["lang"]['CSV'] = 'CSV';

$GLOBALS["lang"]['CVE'] = 'CVE';

$GLOBALS["lang"]['CVEs with a status of received, awaiting analysis, undergoing analysis, rejected. These CVEs (mostly) do not contain sufficient information to enable us to generate a correct SQL query.'] = 'CVEoj kun stato de rizvita, attente analizon, spertante analizon, malasprobis. Tiuj CVEoj (plejparte) ne enhavas sufi previstoajn informatojn por ebligi nin generi ';

$GLOBALS["lang"]['Calculated from discovery.'] = 'Kalkulis la malkovron.';

$GLOBALS["lang"]['Calculated total number of valid IP addresses for this network.'] = 'Kalkulis totalan nombron da validaj IP- adresoj por tiu reto.';

$GLOBALS["lang"]['Calculated upon completion, the time taken to execute this item.'] = 'La tempo prenita por efektivigi tiun objektton.';

$GLOBALS["lang"]['Calculated when integration is run and contains a JSON representation of the devices in this integration. Each links to <code>devices.id</code>.'] = 'Kalkuli kiam integriγo estas prizorgita kaj enhavas JSON- reprezentadon de la aparatoj en tiu integri graduateo. Firmado <code>devices.id</code>.';

$GLOBALS["lang"]['Calculated when integration is run and contains a JSON representation of the locations in this integration. Each links to <code>locations.id</code>.'] = 'Kalkulis kiam integri rupturao estas prizorgita kaj enhavas JSON reprezentadon de la lokoj en tiu integri beato. Firmado <code>locations.id</code>.';

$GLOBALS["lang"]['Calculated when integration is run and contains the number of devices selected from Open-AudIT.'] = 'Kalkuli kiam integrieningo estas prizorgita kaj enhavas la nombron da aparatoj selektitaj de Open- Audit.';

$GLOBALS["lang"]['Calculated when integration is run and contains the number of devices selected the external system.'] = 'Kalkuli kiam integri';

$GLOBALS["lang"]['Calculated when integration is run and contains the number of devices to be updated in the external system.'] = 'Kalkuli kiam integriγo estas prizorgita kaj enhavas la nombron da aparatoj por esti εisdatigitita en la ekstera sistemo.';

$GLOBALS["lang"]['Calculated when integration is run and contains the number of devices updated in Open-AudIT.'] = 'Kalkuli kiam integrieningo estas prizorgita kaj enhavas la nombron da aparatoj εisdatagitaj en Open- Audit.';

$GLOBALS["lang"]['Call up a command prompt by clicking Start and searching for <code>command</code>'] = 'Voki kommundo quistilon klakante Komencon kaj ser previstoadon <code>command</code>';

$GLOBALS["lang"]['Cambodia'] = 'Kamboûo';

$GLOBALS["lang"]['Cameroon'] = 'Kamerunio Kamerunio';

$GLOBALS["lang"]['Campus Area Network'] = 'Kampuksen alueverkko';

$GLOBALS["lang"]['Campus area network'] = 'Kampus-areoreto';

$GLOBALS["lang"]['Can be  <code>active</code>, <code>passive</code> or blank.'] = 'Povas esti <code>active</code>, <code>passive</code> Malplena.';

$GLOBALS["lang"]['Can be <code>application</code>, <code>compute</code>, <code>database</code>, <code>storage</code>, <code>virtualisation</code>, <code>web</code>, <code>other</code> or blank.'] = 'Povas esti <code>application</code>, <code>compute</code>, <code>database</code>, <code>storage</code>, <code>virtualisation</code>, <code>web</code>, <code>other</code> Malplena.';

$GLOBALS["lang"]['Can be <code>auto</code>, <code>fixed</code>, <code>other</code> or blank.'] = 'Povas esti <code>auto</code>, <code>fixed</code>, <code>other</code> Malplena.';

$GLOBALS["lang"]['Can be <code>high availability</code>, <code>load balancing</code>, <code>performance</code>, <code>storage</code>, <code>other</code> or blank.'] = 'Povas esti <code>high availability</code>, <code>load balancing</code>, <code>performance</code>, <code>storage</code>, <code>other</code> Malplena.';

$GLOBALS["lang"]['Can be <code>line</code>, <code>pie</code> or <code>traffic</code>.'] = 'Povas esti <code>line</code>, <code>pie</code> a <code>traffic</code>.';

$GLOBALS["lang"]['Can be <code>user</code> or <code>collector</code>.'] = 'Povas esti <code>user</code> a <code>collector</code>.';

$GLOBALS["lang"]['Can be set by discovery or user.'] = 'Povas esti metita per eltrova...... et...';

$GLOBALS["lang"]['Can be set by discovery or user. Uses the ID from the locations table.'] = 'Povas esti metita per eltrova...... et... Uzu la ID de la tablo de la lokoj.';

$GLOBALS["lang"]['Can the user edit this item.'] = 'La uzanto povas redakki tiun objektton.';

$GLOBALS["lang"]['Canada'] = 'Kanado';

$GLOBALS["lang"]['Cancel'] = 'Elnyomás Nom de la ville (facultatif, sans doute pas besoin de traduction)';

$GLOBALS["lang"]['capabilities'] = 'M. Kapabloj';

$GLOBALS["lang"]['Capabilities'] = 'M. Kapabloj';

$GLOBALS["lang"]['Capacity'] = 'Kapacito Nom de la ville (facultatif, sans doute pas besoin de traduction)';

$GLOBALS["lang"]['Cape Verde'] = 'Kabo - Verdo';

$GLOBALS["lang"]['Capitalise'] = 'Čefurbo';

$GLOBALS["lang"]['caption'] = 'C \'est vrai.';

$GLOBALS["lang"]['Caption'] = 'C \'est vrai.';

$GLOBALS["lang"]['Catalan'] = 'Katalana kataluno';

$GLOBALS["lang"]['Cayman Islands'] = 'Kajmana Insularo';

$GLOBALS["lang"]['Cellular Details'] = 'Le Président';

$GLOBALS["lang"]['Central African Republic'] = 'Centafrika Respubliko';

$GLOBALS["lang"]['certificate'] = 'Atestilo Nom de la ville (facultatif, sans doute pas besoin de traduction)';

$GLOBALS["lang"]['Certificate'] = 'Atestilo Nom de la ville (facultatif, sans doute pas besoin de traduction)';

$GLOBALS["lang"]['certificate_file'] = 'Atestilo- Dosiero';

$GLOBALS["lang"]['Certificate File'] = 'Atestilo- Dosiero';

$GLOBALS["lang"]['certificate_name'] = 'Atestilo Nom de la ville (facultatif, sans doute pas besoin de traduction)';

$GLOBALS["lang"]['Certificate Name'] = 'Atestilo Nom de la ville (facultatif, sans doute pas besoin de traduction)';

$GLOBALS["lang"]['certificates'] = 'Atestiloj';

$GLOBALS["lang"]['Certificates'] = 'Atestiloj';

$GLOBALS["lang"]['Certification'] = 'Antestado';

$GLOBALS["lang"]['Certification Audit'] = 'Antestado';

$GLOBALS["lang"]['Certification Process'] = 'Antestado';

$GLOBALS["lang"]['Chad'] = 'Firmado';

$GLOBALS["lang"]['Change'] = 'C \'est ce qu\' il a dit.';

$GLOBALS["lang"]['change_id'] = 'Henkilókortti';

$GLOBALS["lang"]['Change ID'] = 'Henkilókortti';

$GLOBALS["lang"]['change_log'] = '- Oui';

$GLOBALS["lang"]['Change Log'] = '- Oui';

$GLOBALS["lang"]['Change Logs'] = '- Oui';

$GLOBALS["lang"]['change_type'] = ' a.';

$GLOBALS["lang"]['Change Type'] = ' a.';

$GLOBALS["lang"]['check_minutes'] = 'Kontrau protokolojn';

$GLOBALS["lang"]['Check Minutes'] = 'Kontrau protokolojn';

$GLOBALS["lang"]['Check for SSH on these ports'] = 'Kontrau por SSH sur tiuj hasnoj';

$GLOBALS["lang"]['Check this port for any SSH service.'] = 'Kontrou tiun hasnon por iu SSH-servo.';

$GLOBALS["lang"]['Chile'] = 'Silencio';

$GLOBALS["lang"]['China'] = 'XXXINIO';

$GLOBALS["lang"]['Chinese'] = 'Čevaina';

$GLOBALS["lang"]['Chinese (traditional)'] = 'La Čina (tradicia)';

$GLOBALS["lang"]['Choose'] = 'Elektu elekti';

$GLOBALS["lang"]['Choose (select OS first)'] = 'Elektu (valige OS unue)';

$GLOBALS["lang"]['Choose a Device'] = 'Seade Elektti';

$GLOBALS["lang"]['Choose a Table'] = 'Tablon Elektu';

$GLOBALS["lang"]['Choose the type of the task from the first drop down. This will configure the additional fields required depending on the type of task.'] = 'Elekti la specon de la tasco de la uua guto malsupren. Tio konformigos la kromajn kapojn necessajn adpendente de la speco de tako.';

$GLOBALS["lang"]['Christmas Island'] = '- Krisnaskinco.';

$GLOBALS["lang"]['cidr'] = 'Cidr';

$GLOBALS["lang"]['Cidr'] = 'Cidr';

$GLOBALS["lang"]['circuit_count'] = 'Cirkvito Conde';

$GLOBALS["lang"]['Circuit Count'] = 'Cirkvito Conde';

$GLOBALS["lang"]['circuit_status'] = 'Cirkvito';

$GLOBALS["lang"]['Circuit Status'] = 'Cirkvito';

$GLOBALS["lang"]['city'] = 'Ciudad de Urbo';

$GLOBALS["lang"]['City'] = 'Ciudad de Urbo';

$GLOBALS["lang"]['class'] = 'Klaso de Klaso';

$GLOBALS["lang"]['Class'] = 'Klaso de Klaso';

$GLOBALS["lang"]['class_text'] = 'Klasa Teksto';

$GLOBALS["lang"]['Class Text'] = 'Klasa Teksto';

$GLOBALS["lang"]['Click <i>New client secret</i>.'] = 'Klakou al Click <i>Nova klivento</i>.';

$GLOBALS["lang"]['Click Submit to Execute'] = 'Klakou Soumettre al Käivita';

$GLOBALS["lang"]['Click on <i>Properties</i> under the <i>Manage</i> header in the central menu column. Copy the <i>User Access URL</i>. Once copied, paste it into yout text editor. You will need to copy one section of this field.<br><br>Our example field looks like this<br><code>https://launcher.myapps.microsoft.com/api/signin/5d97003c-g24b-346e-9932-77db6470b939?tenantId=cf406343-1a96-4f7c-0cc6-46e86dddabf3</code>.<br><br>The section we need is <code>cf406343-1a96-4f7c-0cc6-46e86dddabf3</code> (the tenant ID). This is used in Open-AudIT as the <i>Tenant</i> field, so paste it in there.'] = 'Klaku sur Klaku <i>Trajto</i> Allveelaevad <i>Gépkocsi</i> Kapo en la centra menuokolono. Kopiu <i>Uzanta Aliran</i>. Poste kiam kopiite, pâtes εi en vit teksredaktilon. L \'objectif de cette étudy est d\' améliorer la qualité de l \'eau et de l\' eau. <br/><br/>Nia ekzemplo estas viel<br/><code>https://launcher.myapps.microsoft.com/api/signin/5d97003c-g24b-346e-9932-77db6470b939?tenantId=cf406343-1a96-4f7c-0cc6-46e86dddabf3</code>.<br/><br/>La sekcio kiun ni bezonas estas <code>cf406343-1a96-4f7c-0cc6-46e86dddabf3</code> (Identification de La Kliento). Tio estas utiligita en Open- Audit kiel la <i>10</i> Kampo, haz εi estas corbatas.';

$GLOBALS["lang"]['Click on App Registrations to create a new Application, then click New Application Registration. Give it a name (I used Open-AudIT), select Web app / API as the type and provide any URL (the URL is not important) and now click Create.'] = 'Klaku sur App Registrationadoj por krei novan Aplikon, tiam klaki Uusi Sovelus Rekisteröinti. Donu al εi nomon (mi utiligis Open- Audit), selektas aplicación web / API kiel la tipon kaj disponigas ajnan URL (la URL ne estas grava) kaj nun klakas Krei.';

$GLOBALS["lang"]['Click on OK and close the DCOMCNFG window.<br><br>The above changes will require a reboot to take effect.'] = 'Klaku sur OK kaj fermi la DCOMCNFG- fenestoni.<br/><br/> imitai- supraj шan graduateoj postulos entereurasigi por ekvalidi.';

$GLOBALS["lang"]['Click on the application you just created. The Application ID displayed is the Client ID.<br><br>To create the client secret, click Settings, then Keys. Provide a key name and select an appropriate expiry date, then click Save.<br><br>The value will be populated for you - this is the Client Secret.'] = 'Klaku sur la aplika... La aplika... ID montreta estas la klivento ID.<br/><br/>Por krei la kliton sekreta, klak Beállítások, tiam. Disponigi esencan nomon kaj selekti konvenan eksteran daton, tiam klaki Économisez.<br/><br/>La valoro estos';

$GLOBALS["lang"]['Click the Delete button to remove the example devices from Open-AudIT.<br>This will remove the below devices from the database. '] = 'Klaku la Poista butono por forigi la eczemploijn de Open- Audit.<br/>Tio forigos la sub aparatoj de la datumbazo. ';

$GLOBALS["lang"]['Click the Edit button for <i>Basic SAML Configuration</i>.'] = 'Klaku la Editer butono por <i>Baza SAML Konfiguracio</i>.';

$GLOBALS["lang"]['Click the Import button below to populate Open-AudIT with example device data.'] = 'Klaku la Importanon malsupre al peupler Open- AudIT kun ekzemply - aparatodatenoj.';

$GLOBALS["lang"]['Click the icon to the right of the field you wish to edit. Change the field and click the green icon to submit.'] = 'Klaku la ikon dekstren de la kampo vi deziras redakki. ';

$GLOBALS["lang"]['Client ID'] = 'Numero d \'identification Kliendi';

$GLOBALS["lang"]['Client ID and Secret'] = 'Kliento ID kaj Secreto';

$GLOBALS["lang"]['client_ident'] = 'Azonosítás du Kliento';

$GLOBALS["lang"]['Client Ident'] = 'Azonosítás du Kliento';

$GLOBALS["lang"]['client_secret'] = 'La sekreta klivento';

$GLOBALS["lang"]['Client Secret'] = 'La sekreta klivento';

$GLOBALS["lang"]['client_site_name'] = 'Kliento retejo nomo';

$GLOBALS["lang"]['Client Site Name'] = 'Kliento retejo nomo';

$GLOBALS["lang"]['Close'] = 'Fermu prokszim';

$GLOBALS["lang"]['Closed'] = 'Fermiíis';

$GLOBALS["lang"]['Cloud'] = 'Nubo';

$GLOBALS["lang"]['Cloud Details'] = 'Nu, Dataloj';

$GLOBALS["lang"]['Cloud Discovery'] = 'Nubo avastus';

$GLOBALS["lang"]['Cloud Discovery and Auditing'] = 'Nubo Discovery kaj auditeerimiini';

$GLOBALS["lang"]['cloud_id'] = 'Num, la nubo';

$GLOBALS["lang"]['Cloud ID'] = 'Num, la nubo';

$GLOBALS["lang"]['cloud_log'] = 'Pilvelogi';

$GLOBALS["lang"]['Cloud Log'] = 'Pilvelogi';

$GLOBALS["lang"]['cloud_name'] = 'Nomo nubo';

$GLOBALS["lang"]['Cloud Name'] = 'Nomo nubo';

$GLOBALS["lang"]['Cloud Network'] = 'Pilvevõrk';

$GLOBALS["lang"]['clouds'] = 'NUBOJ';

$GLOBALS["lang"]['Clouds'] = 'NUBOJ';

$GLOBALS["lang"]['Clouds are a feature available to Open-AudIT Enterprise licensed customers.'] = 'Nuboj estas trajto havbla al Open- Audit Enterprise a probitaj kliento j.';

$GLOBALS["lang"]['cluster'] = 'Csoport';

$GLOBALS["lang"]['Cluster'] = 'Csoport';

$GLOBALS["lang"]['cluster_id'] = 'Kaphlustumatussa unnistegilo';

$GLOBALS["lang"]['Cluster ID'] = 'Kaphlustumatussa unnistegilo';

$GLOBALS["lang"]['cluster_name'] = 'Nom du groupe';

$GLOBALS["lang"]['Cluster Name'] = 'Nom du groupe';

$GLOBALS["lang"]['cluster_type'] = 'Tipo Klaster';

$GLOBALS["lang"]['Cluster Type'] = 'Tipo Klaster';

$GLOBALS["lang"]['clusters'] = 'Grupos de Expertos';

$GLOBALS["lang"]['Clusters'] = 'Grupos de Expertos';

$GLOBALS["lang"]['Clusters and Reporting'] = 'Klasterid kaj Aruandlus';

$GLOBALS["lang"]['Cocos (Keeling) Islands'] = 'Kookos (Kelling) Sverloj';

$GLOBALS["lang"]['Collection'] = 'Kolekto Nom de la ville (facultatif, sans doute pas besoin de traduction)';

$GLOBALS["lang"]['Collections'] = 'Kolektoj';

$GLOBALS["lang"]['Collector'] = 'koléktanto';

$GLOBALS["lang"]['Collector (UUID)'] = 'kolektanto (UID)';

$GLOBALS["lang"]['Collector / Server is an Enterprise only feature. Enterprise customers receive one Collector license for free. Additional Collector licenses can be purchased as required.'] = 'Servilo estas nur Enterprise. Entreprisklientoj ricevas unu koletantlicencon por libera. Kromaj kolektantricoj povas esti a';

$GLOBALS["lang"]['Collector / Server is designed so that you can have a remote or <i>collector</i>  instance of Open-AudIT running on a remote machine. That collector instance might be in another security zone, subnet, cloud hosting instance or at a customer site.  The remote collector is then doing all the discovering and auditing of devices locally avoiding networking and firewalling complexity.  The Collector once it has registered is completely controlled by the <i>server</i>.  This means you only need an HTTP or HTTPS connection from that Collector to the Server.'] = 'Servilo estas dizajnita tien ke vi povas havi malprossiman katlustus <i>koléktanto</i> Ekzemplo de Open- Audit kuranta sur malpreksima ma apretino. Tiu koletantkazo eble estos en alias sekureczono, subreto, nubo bastiganta kazon épäilty en kleentoloko. La malpreksima kolektanto tiam faras la tutan malkovradon kaj revizion de aparatoj loke evitante interkonektadon kaj fajromurantan kompleksecon. La kolektanto post kiam εi registris estas tute kontrolita fare de la <i>Servilo servilo servilo servilo servilo servilo</i>. Tio signfas ke vi nur bezonas HTTP epäilty HTTPS- ligon de tiu kolektanto al la Servilo.';

$GLOBALS["lang"]['Collector Dashboard'] = 'La kolektanto de Dashboard';

$GLOBALS["lang"]['Collector Name'] = 'Kolektu nomon';

$GLOBALS["lang"]['collector_uuid'] = 'Uuid';

$GLOBALS["lang"]['Collector Uuid'] = 'Uuid';

$GLOBALS["lang"]['Collector tasks are automatically setup when the collector feature is enabled. Collector tasks should not be created directly by users. Collector tasks can have their frequency edited after creation. If the Open-AudIT Server has Collectors reporting to it, an additional drop down is provided. You can select this to specify which Collector the task should run on. Only Discovery tasks are supported for Collectors.'] = 'Kolektaj tapoj est un sceptomate aran.o kiam la krektantrajto estas permesita. Kolektaj tapoj ne devus esti kreitaj rekte fare de uzantoj. Kolektaj tapoj povas havi sian frekvencon redaktitán post kreado. Se la Open- Audit- Servilo havas kolektantojn raportantajn al εi, kroma goto malsupren estas disponigita. L \'objectif est d\' améliorer la qualité de l \'eau et de l\' eau. Nur Discover -taskoj estas apogitaj por kolektantoj.';

$GLOBALS["lang"]['Collectors'] = 'Kolektantoj';

$GLOBALS["lang"]['Collectors can operate in one of two modes: Collector and StandAlone. When in Collector mode, the instance of Open-AudIT is managed by the main server. When in Stand Alone mode, the instance is managed locally and forwards any found devices to the main server.'] = 'Kolektantoj povas funkciigi en unu el du re Kiam en kolektantre.imo, la kazo de Open- Audit estas administrita fare de la... efservilo. Kiam en Stand Alone- reшimo, la kazo estas administrita loke kaj anna guidenigas ijn trovitajn aparatojn al la Čefservilo.';

$GLOBALS["lang"]['Collectors for Remote Discovery'] = 'Kolektantoj por Kaugavastamiini';

$GLOBALS["lang"]['Colombia'] = 'Kolombio Kolombio';

$GLOBALS["lang"]['color'] = 'Koloro';

$GLOBALS["lang"]['Color'] = 'Koloro';

$GLOBALS["lang"]['Column'] = 'Kolono';

$GLOBALS["lang"]['Columns'] = 'Colonoj';

$GLOBALS["lang"]['command'] = 'Produits chimiques';

$GLOBALS["lang"]['Command'] = 'Produits chimiques';

$GLOBALS["lang"]['command_options'] = 'Le Président';

$GLOBALS["lang"]['Command Options'] = 'Le Président';

$GLOBALS["lang"]['command_output'] = 'Produits chimiques';

$GLOBALS["lang"]['Command Output'] = 'Produits chimiques';

$GLOBALS["lang"]['command_status'] = 'Produits chimiques';

$GLOBALS["lang"]['Command Status'] = 'Produits chimiques';

$GLOBALS["lang"]['command_time_to_execute'] = 'La tempo al tempo';

$GLOBALS["lang"]['Command Time To Execute'] = 'La tempo al tempo';

$GLOBALS["lang"]['comment'] = 'Komentoj';

$GLOBALS["lang"]['Comment'] = 'Komentoj';

$GLOBALS["lang"]['Comment out the below line (about line 49 or so). Just place a hash # at the start of the line.'] = 'Komento de la sublinio (preksimume linio 49 avoviel). Nur metiräsarv E la omenco de la linio.';

$GLOBALS["lang"]['comments'] = 'Komentoj';

$GLOBALS["lang"]['Comments'] = 'Komentoj';

$GLOBALS["lang"]['commercial'] = 'Komerca komerco';

$GLOBALS["lang"]['Commercial'] = 'Komerca komerco';

$GLOBALS["lang"]['Commercial Support'] = 'Komerca subteno';

$GLOBALS["lang"]['common_name'] = 'Nomo';

$GLOBALS["lang"]['Common Name'] = 'Nomo';

$GLOBALS["lang"]['Commonly referred to as the clientId.'] = 'De la référence kiel la klivento.';

$GLOBALS["lang"]['Commonly referred to as the clientSecret.'] = 'De la référence kiel la klivento.';

$GLOBALS["lang"]['Community'] = 'Gépkocsi';

$GLOBALS["lang"]['Community Questions'] = 'Komunumaj demandej';

$GLOBALS["lang"]['Community String'] = 'Kordo';

$GLOBALS["lang"]['Comoros the'] = 'Komoorid';

$GLOBALS["lang"]['Compact'] = 'Combaktujo';

$GLOBALS["lang"]['Company'] = 'Firmao';

$GLOBALS["lang"]['Complete these steps.'] = 'Kompletaj tiaj pa apretoj.';

$GLOBALS["lang"]['Complexity of the attack (Low or High).'] = 'Komplekseco de la atako (Madal kaptlus Alta).';

$GLOBALS["lang"]['Component Table'] = 'Composento';

$GLOBALS["lang"]['Components (All Devices)'] = 'Les (Tos los dispositivos)';

$GLOBALS["lang"]['Compute'] = 'Komputufo';

$GLOBALS["lang"]['Condition'] = 'Kandiča kondio';

$GLOBALS["lang"]['Conduct a risk assessment'] = 'Faru rissotakson';

$GLOBALS["lang"]['Conduct awareness and training programs'] = 'Kondutokonscio kaj trejnadprogramoj';

$GLOBALS["lang"]['Conduct management review meetings'] = 'Konduto- administrado revizias renkontiμojn';

$GLOBALS["lang"]['Conduct regular surveillance audits (usually annually)'] = 'Faruregijn gvatreviziojn (kutime Čiujare)';

$GLOBALS["lang"]['Conducted by an accredited body in two stages'] = 'Gvidite fare de estima korpo en du standioj';

$GLOBALS["lang"]['Config'] = 'Asetukset';

$GLOBALS["lang"]['Config Default, currently '] = 'Défa Konfig ';

$GLOBALS["lang"]['config_file'] = 'C \'est la première fois que l\' on s \'en occupe.';

$GLOBALS["lang"]['Config File'] = 'C \'est la première fois que l\' on s \'en occupe.';

$GLOBALS["lang"]['config_manager_error_code'] = 'Seadistamiskalduri Eraro kood';

$GLOBALS["lang"]['Config Manager Error Code'] = 'Seadistamiskalduri Eraro kood';

$GLOBALS["lang"]['Configurable Role Based Access Control (RBAC)'] = 'Konnorebla Rolo Bazita Aliro- Kontrolo (RBAC)';

$GLOBALS["lang"]['configuration'] = 'Konfiguracio';

$GLOBALS["lang"]['Configuration'] = 'Konfiguracio';

$GLOBALS["lang"]['Configuration Change Detection and Reporting'] = 'Konfiguracio Detección del cambio kaj aruandlus';

$GLOBALS["lang"]['Configure'] = 'La jenaj paεoj ligas';

$GLOBALS["lang"]['Configure the agent server-side to perform audits on a schedule'] = 'Akkeli la agento- servilo- flankon por elfari reviziojn en horaro';

$GLOBALS["lang"]['Congo'] = 'Kongo';

$GLOBALS["lang"]['Congo the'] = 'Kongo';

$GLOBALS["lang"]['Connected To'] = 'Konektita';

$GLOBALS["lang"]['connection'] = 'Ligo de Ligo';

$GLOBALS["lang"]['Connection'] = 'Ligo de Ligo';

$GLOBALS["lang"]['Connection Options'] = 'Ligo de Elektoj';

$GLOBALS["lang"]['connection_status'] = 'Situacio';

$GLOBALS["lang"]['Connection Status'] = 'Situacio';

$GLOBALS["lang"]['connections'] = 'Ligoj';

$GLOBALS["lang"]['Connections'] = 'Ligoj';

$GLOBALS["lang"]['Consider filtered Ports Open'] = 'Konsideru instaliloni Havenoj Malfermas';

$GLOBALS["lang"]['Consider open|filtered Ports Open'] = 'Konsideru malferman Havenoj Malfermas';

$GLOBALS["lang"]['Consulting, implementation and other services are available through'] = 'Konsulo, efektivigo kajelij servoj estas hasblaj tra';

$GLOBALS["lang"]['contact'] = 'Kontaktu kontakton';

$GLOBALS["lang"]['Contact'] = 'Kontaktu kontakton';

$GLOBALS["lang"]['contact_name'] = 'Nomo de Kontakta';

$GLOBALS["lang"]['Contact Name'] = 'Nomo de Kontakta';

$GLOBALS["lang"]['contained_in'] = 'Enhavas fr';

$GLOBALS["lang"]['Contained In'] = 'Enhavas fr';

$GLOBALS["lang"]['Contains a JSON object details the associated widgets and their positions.'] = 'Enhavas JSON- objekton detaligas la rilatajn bar.ojn kaj iliajn poziciojn.';

$GLOBALS["lang"]['Contains the fields that determine if we should use ssh, snmp and wmi discovery options. A JSON object.'] = 'Enhavas la kampampjn kiuj determinas se ni devus uzi ssh, snmp kaj wmi- eltrova. Json-Objekto.';

$GLOBALS["lang"]['Context & Leadership'] = 'Kunteksto & Gvidado';

$GLOBALS["lang"]['Context Engine ID'] = 'Le moteur';

$GLOBALS["lang"]['Context Name'] = 'Nomoj';

$GLOBALS["lang"]['Continuously improve the ISMS'] = 'D \'autres plibonigi la ISMS';

$GLOBALS["lang"]['contractual_obligations'] = 'kontraktaj kondivolvoj';

$GLOBALS["lang"]['Contractual Obligations'] = 'kontraktaj kondivolvoj';

$GLOBALS["lang"]['Cook Islands'] = 'Cuire Carnerloj';

$GLOBALS["lang"]['Copy and paste an audit result'] = 'Kopio kaj pasto revizio';

$GLOBALS["lang"]['Copy and paste the below to the forums, another instance of Open-AudIT or anywhere else you need to provide this item.'] = 'Kopio kaj pasto la malsupre al la forumej, muu hulgas kazo de Open- Audit épäilty N \'importe où vi murtaa disponigi tiun objectkton.';

$GLOBALS["lang"]['Copy the <i>Application ID</i> field and paste it into the Open-AudIT <i>Client ID</i> field for the new Auth Method.'] = 'Kopiu <i>Numero d \'identification</i> Kampo kaj pasto εi en la Open- Audit <i>Numero d \'identification Kliendi</i> Kampo por la nova Auth Metodo.';

$GLOBALS["lang"]['Copy the <i>Client ID</i> and paste it into the Open-AudIT <i>Client ID</i> field.<br>If there is no secret, click <i>Generate new secret</i>, then copy the value and paste it into the Open-AudIT <i>Client Secret</i> field.'] = 'Kopiu <i>Numero d \'identification Kliendi</i> Kaj en la malferma- Audit <i>Numero d \'identification Kliendi</i> C \'est Kampo.<br/>Se ne eksistas sekreto, klako <i>Generi novan sekreton</i>Tiam kopii la valoron kaj paston εi en la Open- Audit <i>La sekreta klivento</i> C \'est Kampo.';

$GLOBALS["lang"]['Copy the value and paste it into the Open-AudIT form for the <i>Client Secret</i> field.'] = 'Kopio la valoro kaj pasto εi en la Open- Audit- formularon por la <i>La sekreta klivento</i> C \'est Kampo.';

$GLOBALS["lang"]['core_count'] = 'Kerna kakulo';

$GLOBALS["lang"]['Core Count'] = 'Kerna kakulo';

$GLOBALS["lang"]['Cores'] = 'Kernoj';

$GLOBALS["lang"]['cost_center'] = 'Kosto Centro';

$GLOBALS["lang"]['Cost Center'] = 'Kosto Centro';

$GLOBALS["lang"]['cost_code'] = 'Kosto Kodo';

$GLOBALS["lang"]['Cost Code'] = 'Kosto Kodo';

$GLOBALS["lang"]['Costa Rica'] = 'C \'est vrai.';

$GLOBALS["lang"]['Cote d Ivoire'] = 'Norsunluuranikko';

$GLOBALS["lang"]['count'] = 'Kalulo';

$GLOBALS["lang"]['Count'] = 'Kalulo';

$GLOBALS["lang"]['country'] = 'Lando';

$GLOBALS["lang"]['Country'] = 'Lando';

$GLOBALS["lang"]['country_code'] = 'Kodo';

$GLOBALS["lang"]['Country Code'] = 'Kodo';

$GLOBALS["lang"]['cpu_count'] = 'Cpu krahv';

$GLOBALS["lang"]['Cpu Count'] = 'Cpu krahv';

$GLOBALS["lang"]['Create'] = 'Krei';

$GLOBALS["lang"]['Create Example Devices'] = 'Krei ekzemojn';

$GLOBALS["lang"]['create_external_count'] = 'Krei Eksteran kalkulon';

$GLOBALS["lang"]['Create External Count'] = 'Krei Eksteran kalkulon';

$GLOBALS["lang"]['create_external_from_internal'] = 'Kreu Eksteren De Interna';

$GLOBALS["lang"]['Create External From Internal'] = 'Kreu Eksteren De Interna';

$GLOBALS["lang"]['Create File'] = 'Krei dosiron';

$GLOBALS["lang"]['Create Geocode'] = 'Géokoodeks de Krei';

$GLOBALS["lang"]['create_internal_count'] = 'Krei Internani kalkulon';

$GLOBALS["lang"]['Create Internal Count'] = 'Krei Internani kalkulon';

$GLOBALS["lang"]['create_internal_from_external'] = 'Kreu interne de Ekstera';

$GLOBALS["lang"]['Create Internal From External'] = 'Kreu interne de Ekstera';

$GLOBALS["lang"]['Create NMIS Devices from Open-AudIT'] = 'NMISI Krei Destinivos de Open- Audit';

$GLOBALS["lang"]['Create Open-AudIT Devices from '] = 'Krei Audit ouvert Aparatoj de ';

$GLOBALS["lang"]['Create Open-AudIT Devices from NMIS'] = 'Krei Audit ouvert Aparatoj de NMIS';

$GLOBALS["lang"]['Create a Baseline for the example device'] = 'Krei Bazlinion por la ekzemplo aparato';

$GLOBALS["lang"]['Create a Discovery'] = 'Kreu malkovron';

$GLOBALS["lang"]['Create a Statement of Applicability (SoA)'] = 'Krei Deklaron de aplikbleco (SoA)';

$GLOBALS["lang"]['created_by'] = 'Kreita';

$GLOBALS["lang"]['Created By'] = 'Kreita';

$GLOBALS["lang"]['created_date'] = 'Kreita dato';

$GLOBALS["lang"]['Created Date'] = 'Kreita dato';

$GLOBALS["lang"]['Creating'] = 'Krei';

$GLOBALS["lang"]['Creating Credentials'] = 'Kreanta Crédenciales';

$GLOBALS["lang"]['Creating Device'] = 'Mer de Krei';

$GLOBALS["lang"]['Creating Widgets'] = 'Kreanta vidinad';

$GLOBALS["lang"]['Creating a Discovery Scan Options entry'] = 'Skanaj Elektroj Kreante Discovery';

$GLOBALS["lang"]['Creating a Query'] = 'Kreante paring';

$GLOBALS["lang"]['Creating a SQL Statement for Groups'] = 'Kreante SQL- deklaron por grupoj';

$GLOBALS["lang"]['Creating a SQL Statement for Queries'] = 'Kreante SQL- deklaron por Päringud';

$GLOBALS["lang"]['Creating an Integration'] = 'Krei integri rupturaon';

$GLOBALS["lang"]['creator'] = 'Kreinto';

$GLOBALS["lang"]['Creator'] = 'Kreinto';

$GLOBALS["lang"]['credential'] = 'Kritériumok';

$GLOBALS["lang"]['Credential'] = 'Kritériumok';

$GLOBALS["lang"]['Credentials'] = 'Kredencialit';

$GLOBALS["lang"]['Credentials Client ID'] = 'Carte d \'identité de Cléncelles Kliento';

$GLOBALS["lang"]['Credentials Subscription ID'] = 'Suscripción de credenciales ID';

$GLOBALS["lang"]['Credentials Tenant ID'] = 'Identificación del arrendario';

$GLOBALS["lang"]['Credentials are stored in the <i>credentials</i> database table. The actual credential information is encrypted in storage. When a Discovery is run, a device has its specific credentials retrieved from the database, decrypted and tested. If these fail the list of credentials is also retrieved, decrypted and then tested against the device starting with credentials known to have worked previously. Device specific credentials are stored at an individual device level in the <i>credential</i> table (note - no <i>s</i> in the table name). SSH keys are tested before SSH username / password. When testing SSH, credentials will also be marked as working with sudo or being root.'] = 'Credenciales estas stokita en la <i>Akredita</i> Tablo de datumbazo. La faktaj lurkinformoj estas Čifritaj en stokado. Kiam Discovery estas prizorgita, aparato havas siajn specifajn akredita.ojn prenitainn de la datumbazo, de prospectcirifrita kaj presente. Se tiuj malsukcesas la listan de akredita.oj ankaregiestas prenitaj, de prospectcirifritaj kaj tiam prescitaj kontra Seade spécintaj akredita. oj estas stokitaj sur infintua aparatonivelo en la <i>→ Eventoj:</i> Tablo (ne): <i>Tilu</i> en la tablonomo. SH-aprettosiloj estas estetaj anta. SSH-Urantinomo / pasvorton. Dum testado de SSH, akredita... oj anka...';

$GLOBALS["lang"]['Credentials can have one of a few different types - snmp v.1 / v.2, snmp v.3, ssh, ssh key, windows are all implemented. CAVEAT - ssh keys are not implemented for Windows Open-AudIT servers as yet.'] = 'Credenciales povas havi unu el kelkaj malsamaj tipoj - snmp v 1 / v. 2, snmp v.3, ssh, ssh шлеlosilo, fenestroj estas CAVEAT - cindro divertalosiloj ne estas efektivigitaj por Windows Openit- Audit- serviloj kiel ankoravine.';

$GLOBALS["lang"]['Credentials for Amazon AWS used in Cloud Discovery'] = 'Amazon AWS uzita en Cloud Discovery';

$GLOBALS["lang"]['Credentials for Microsoft Azure used in Cloud Discovery'] = 'Crédenciales pour Microsoft Azure uzis en Cloud Discovery';

$GLOBALS["lang"]['Critical'] = 'Kritika kritikeco';

$GLOBALS["lang"]['criticality'] = 'Kritika kritikeco';

$GLOBALS["lang"]['Criticality'] = 'Kritika kritikeco';

$GLOBALS["lang"]['Croatia'] = 'Kroatio';

$GLOBALS["lang"]['Cuba'] = 'Kubo';

$GLOBALS["lang"]['current'] = 'Nuna fluo';

$GLOBALS["lang"]['Current'] = 'Nuna fluo';

$GLOBALS["lang"]['Current Discovery Processes'] = 'Procesos Nuna Discovery';

$GLOBALS["lang"]['Current date & time is '] = 'Nuna dato kaj tempo estas ';

$GLOBALS["lang"]['Currently Installed'] = 'Nuntempe oni Ins';

$GLOBALS["lang"]['Currently supported types are <code>snmp</code>, <code>snmp_v3</code>, <code>ssh</code>, <code>ssh_key</code> or <code>windows</code>.'] = 'Nuntempe apogitaj tipoj estas <code>snmp</code>, <code>snmp_v3</code>, <code>ssh</code>, <code>ssh_key</code> a <code>windows</code>.';

$GLOBALS["lang"]['Custom Fields'] = 'Campos aduaneros';

$GLOBALS["lang"]['Custom TCP Ports'] = 'Kutimo TCP Havenaj';

$GLOBALS["lang"]['Custom TCP Ports. Any specific ports we would liuke scanned in addition to the Top TCP Ports. Comma seperated, no spaces.'] = 'Kutimo TCP Havenoj. Alternativainuj spetifaj hasnoj kiujn ni liuke skanis aldone al Top TCP Havenoj. Koma secesis, neniuj spacoj.';

$GLOBALS["lang"]['Custom UDP Ports'] = 'UDP Havenoj';

$GLOBALS["lang"]['Custom UDP Ports. Any specific ports we would liuke scanned in addition to the Top UDP Ports. Comma seperated, no spaces.'] = 'UDP Havenoj. imitaiuj spetifaj hasnoj kiujn ni liuke skanis aldone al la Supra UDP Havenoj. Koma secesis, neniuj spacoj.';

$GLOBALS["lang"]['Customisable Scanning Options per Discovery'] = 'Kutimeblaj skaneeriv Opcioj par Découverte';

$GLOBALS["lang"]['Cve'] = 'Cév';

$GLOBALS["lang"]['Cyprus'] = 'Kipro Kipro';

$GLOBALS["lang"]['Czech'] = '.';

$GLOBALS["lang"]['Czech Republic'] = 'Alternativae Resa Respubliko';

$GLOBALS["lang"]['DHCP'] = 'DHCP';

$GLOBALS["lang"]['DN Account (optional)'] = 'DN- kondo (mittekostruslik)';

$GLOBALS["lang"]['DN Password (optional)'] = 'DN Parool (valikuliini)';

$GLOBALS["lang"]['DNS FQDN'] = 'DNS FQDN';

$GLOBALS["lang"]['DNS Hostname'] = 'DNS Gastignomo';

$GLOBALS["lang"]['Danish'] = 'Dana Dana';

$GLOBALS["lang"]['dashboard_id'] = 'ID- paneeli';

$GLOBALS["lang"]['Dashboard ID'] = 'ID- paneeli';

$GLOBALS["lang"]['Dashboard Widgets'] = 'Armatuurlaua vidinad';

$GLOBALS["lang"]['dashboards'] = 'Armatuurlauad';

$GLOBALS["lang"]['Dashboards'] = 'Armatuurlauad';

$GLOBALS["lang"]['Dashboards and Widgets allow Enterprise licensed customers to create, read, update and delete both of these collections to ensure their homepage is exactly what they need to see. Not only that, but a user is able to set a given dashboard as their own homepage. Everyone does not need to use the same homepage (dashboard), nor the same widgets on that dashboard. Professional licensed customers can choose between two predefined dashboards to set as their own homepage.'] = 'Tableau de bord kaj Widgets permesas al Enterprise avunitaj klientojn krei, legi, εisdatigi kaj forigi amba epäilty de tiauj kolektoj por certigi ke ilia hejmpaεo estas precize kion ili murros vidi. Ne nurtio, sed uzanto povas meti annaa.fiksitan armatuuriaud kiel sia propra hejmpaεo. personalizadoiuj ne bezonas uzi la saman hejmpaεon, nek la samajn gritrumpojn sur tiu armaturilaud. Profesiaj avospitaj klientoj povas elekti inter du predifinitaj armatuurlauad por komenci.i kiel sia propra hejmpaεo.';

$GLOBALS["lang"]['Dashboards provide <i>at a glance</i> important visibility for changes occurring on your network as well as providing quick links to device types, manufacturers, and operating systems and so much more.'] = 'Nincs magyar neve <i>Če la rigardo</i> Grava videbleco por шанивениненнаннинаннанниваннинина, produktantoj, kaj opéraciumej kaj tieel multe pli.';

$GLOBALS["lang"]['Dashboards use'] = 'armatuurlauad uzas';

$GLOBALS["lang"]['Data'] = 'Datumoj';

$GLOBALS["lang"]['Data Export - CSV, XML, JSON'] = 'Exportación de datos - CSV, XML, JSON';

$GLOBALS["lang"]['Data Retention'] = 'Datenoj Säilitamiini';

$GLOBALS["lang"]['Database'] = 'Datumbazo';

$GLOBALS["lang"]['db_action'] = 'Datumbazo';

$GLOBALS["lang"]['Database Action'] = 'Datumbazo';

$GLOBALS["lang"]['db_column'] = 'Kolono Datumbazo';

$GLOBALS["lang"]['Database Column'] = 'Kolono Datumbazo';

$GLOBALS["lang"]['Database Definition'] = 'Datuma Difino';

$GLOBALS["lang"]['db_row'] = 'Datumbazo';

$GLOBALS["lang"]['Database Row'] = 'Datumbazo';

$GLOBALS["lang"]['Database Schema'] = 'Datumbazo';

$GLOBALS["lang"]['Database Server Discovery'] = 'Découverte de Datumilo';

$GLOBALS["lang"]['db_table'] = 'Datuma tabelo';

$GLOBALS["lang"]['Database Table'] = 'Datuma tabelo';

$GLOBALS["lang"]['Database Tables'] = 'Datumaj tabeloj';

$GLOBALS["lang"]['dataset_title'] = 'Tunnistaja';

$GLOBALS["lang"]['Dataset Title'] = 'Tunnistaja';

$GLOBALS["lang"]['date'] = 'Dato de la dato';

$GLOBALS["lang"]['Date'] = 'Dato de la dato';

$GLOBALS["lang"]['Date D-M-Y'] = 'D-M-Y';

$GLOBALS["lang"]['Date M-D-Y'] = 'Dato M- D- Y';

$GLOBALS["lang"]['Date Now'] = 'Dato nunn';

$GLOBALS["lang"]['date_of_manufacture'] = 'Dato de fabrikado';

$GLOBALS["lang"]['Date Of Manufacture'] = 'Dato de fabrikado';

$GLOBALS["lang"]['date_paid'] = 'Dato Makscan';

$GLOBALS["lang"]['Date Paid'] = 'Dato Makscan';

$GLOBALS["lang"]['date_received'] = 'La dato ricevis';

$GLOBALS["lang"]['Date Received'] = 'La dato ricevis';

$GLOBALS["lang"]['Date Y-M-D'] = 'Dato Y- M- D';

$GLOBALS["lang"]['Date and time when the CVE was last updated.'] = 'Dato kaj tempo kiam la CVE latte estis εisdatigita.';

$GLOBALS["lang"]['Date and time when the CVE was published.'] = 'Dato kaj tempo kiam la CVE estis publikigita.';

$GLOBALS["lang"]['Date when the CVE was published.'] = 'Dato kiam la CVE estis publikigita.';

$GLOBALS["lang"]['DateTime Now'] = 'Dato de tempo nunn';

$GLOBALS["lang"]['DateTime Y-M-D H:M:S'] = 'Dato de tempo Y- M- D H: M: S';

$GLOBALS["lang"]['day_of_month'] = 'Tago de Monato';

$GLOBALS["lang"]['Day Of Month'] = 'Tago de Monato';

$GLOBALS["lang"]['day_of_week'] = 'Tago de semajno';

$GLOBALS["lang"]['Day Of Week'] = 'Tago de semajno';

$GLOBALS["lang"]['Day of Month'] = 'Tago de Monato';

$GLOBALS["lang"]['dbus_identifier'] = 'identifikateur Dbusi';

$GLOBALS["lang"]['Dbus Identifier'] = 'identifikateur Dbusi';

$GLOBALS["lang"]['Debug'] = 'Vianetsintä';

$GLOBALS["lang"]['Debugging'] = 'Silumiini';

$GLOBALS["lang"]['Debugging a Script'] = 'Debu diversaante kézműves';

$GLOBALS["lang"]['December'] = 'Decembro Decembro Decembro';

$GLOBALS["lang"]['Decommission'] = 'Décomiso';

$GLOBALS["lang"]['Default'] = 'Défa...';

$GLOBALS["lang"]['Default Authentication Level - Set to Connect'] = 'Défa...';

$GLOBALS["lang"]['Default Impersonation Level - Set to Identify'] = 'Deva... Nivelo - Nivelo Aparta al Idigo';

$GLOBALS["lang"]['Default Items'] = 'Défa...';

$GLOBALS["lang"]['Default Orgs Groups'] = 'Grupos de Orgs Deva...';

$GLOBALS["lang"]['Default Roles Groups'] = 'Défa...';

$GLOBALS["lang"]['Default Value'] = 'Défia';

$GLOBALS["lang"]['Default of 389. Normally 636 used for Active Directory LDAPS.'] = '389. Normale 636 uzis por Aktiva Adresaro LDAPS.';

$GLOBALS["lang"]['Default of <code>3</code> for LDAP and Active Directory.'] = 'Defa deutlto de <code>3</code> Por LDAP kaj Aktiva Adresaro.';

$GLOBALS["lang"]['Defaults'] = 'Défa...';

$GLOBALS["lang"]['Deferred'] = 'Anta skeptite fare de';

$GLOBALS["lang"]['Define project scope and objectives'] = 'Difini projekcian amplekson kaj celojn';

$GLOBALS["lang"]['Define the ISMS scope'] = 'Difini la ISMS- skopon';

$GLOBALS["lang"]['Define the context of the organization (internal/external issues)'] = 'Difini la kuntekston de la organiso (internaj / eksteraj temoj)';

$GLOBALS["lang"]['delay_minutes'] = 'Vivitusminutid';

$GLOBALS["lang"]['Delay Minutes'] = 'Vivitusminutid';

$GLOBALS["lang"]['Delete'] = 'Suprimir';

$GLOBALS["lang"]['Delete Example Devices'] = 'Ekzample, la par défautvolajj aparato';

$GLOBALS["lang"]['delete_external_from_internal'] = 'Origi Eksteren De Interna';

$GLOBALS["lang"]['Delete External From Internal'] = 'Origi Eksteren De Interna';

$GLOBALS["lang"]['Delete NMIS Devices if not in Open-AudIT'] = 'NMIS de Forigi Aplikas se ne en OpenAudit';

$GLOBALS["lang"]['Delete a {collection} entry.'] = 'Origi la eniron.';

$GLOBALS["lang"]['Delete from Application'] = 'Origi de aplika...';

$GLOBALS["lang"]['Delete from Cluster'] = 'Para de Cluster';

$GLOBALS["lang"]['Denmark'] = 'Danio';

$GLOBALS["lang"]['Derived by audit or manually set by user.'] = 'Derivado por revizio epäilty mane metita fare de uzanto.';

$GLOBALS["lang"]['Derived by audit.'] = 'Mortigite per revizio.';

$GLOBALS["lang"]['Derived from <code>rack_devices.device_id</code>.'] = 'Mortigita <code>rack_devices.device_id</code>.';

$GLOBALS["lang"]['Derived from <code>rack_devices.rack_id</code>.'] = 'Mortigita <code>rack_devices.rack_id</code>.';

$GLOBALS["lang"]['Derived from Collector discovery.'] = 'Derivite de kolektanta eltrova.o.';

$GLOBALS["lang"]['Derived from OS Name.'] = 'Mortigita de Osnimi.';

$GLOBALS["lang"]['Derived from cloud discovery.'] = 'Mortigita de nuba malkovro.';

$GLOBALS["lang"]['Derived from device audits.'] = 'Mortigita de aparataj revizioj.';

$GLOBALS["lang"]['Derived from device type and OS.'] = 'Delicita de aparato tajpas kaj Os.';

$GLOBALS["lang"]['Derived from discovery.'] = 'Mortigita el Malkovro.';

$GLOBALS["lang"]['Derived from hostname, sysName, dns Hostname and IP in that order.'] = 'Tuletatud de mastro- nomo, sisName, dns Hostname kaj IP en tiu pesekvo.';

$GLOBALS["lang"]['Derived from the integer severity.'] = 'Derivite de la entjer firmaco.';

$GLOBALS["lang"]['description'] = 'Priskribo';

$GLOBALS["lang"]['Description'] = 'Priskribo';

$GLOBALS["lang"]['destination'] = 'Destino';

$GLOBALS["lang"]['Destination'] = 'Destino';

$GLOBALS["lang"]['detail'] = 'Détalo';

$GLOBALS["lang"]['Detail'] = 'Détalo';

$GLOBALS["lang"]['Details'] = 'Detaloj';

$GLOBALS["lang"]['Details of who is usually contactable at this site.'] = 'Detaloj de kiuj estas kutime kontakteblaj en tiu retejo.';

$GLOBALS["lang"]['Determine how often you want to run the Baseline check against the database and create a Scheduled Report'] = 'Déterminez le koom overse vi volas prizorgi la Bazliniokontrolon kontra. la datumbazo kaj krei graafikujärgne aruanne';

$GLOBALS["lang"]['Determine risk treatment options'] = 'Détermination du risquetraktadajn eblojn';

$GLOBALS["lang"]['Develop a Risk Treatment Plan'] = 'Dvolvi Riska Traktado Plano';

$GLOBALS["lang"]['Develop policies, procedures, and controls'] = 'Evoluaj politikoj, proceduroj, kaj kontroloj';

$GLOBALS["lang"]['Develop required ISMS documentation (policies, procedures, etc.)'] = 'Evoluigis ISMS- dokumentaron (Policoj, proceduroj, ktp.)';

$GLOBALS["lang"]['device'] = 'Destitivo';

$GLOBALS["lang"]['Device'] = 'Destitivo';

$GLOBALS["lang"]['Device Audits'] = 'Auditorías de dispositivos';

$GLOBALS["lang"]['Device Component Names'] = 'Composante de dispositivo- nomoj';

$GLOBALS["lang"]['Device ID'] = '→ Eventoj:';

$GLOBALS["lang"]['device_id'] = '→ Eventoj:';

$GLOBALS["lang"]['device_id_a'] = '→ Eventoj:';

$GLOBALS["lang"]['Device ID A'] = '→ Eventoj:';

$GLOBALS["lang"]['device_id_b'] = 'D-ro B';

$GLOBALS["lang"]['Device ID B'] = 'D-ro B';

$GLOBALS["lang"]['Device Matching Rules'] = 'Seadme sobivus Reguloj';

$GLOBALS["lang"]['Device Name'] = 'Nomo de la nomo';

$GLOBALS["lang"]['Device Result'] = 'Résultatado del dispositivo';

$GLOBALS["lang"]['Device Results'] = 'Rezultoj';

$GLOBALS["lang"]['Device Seed'] = 'Semillas de dispositivo';

$GLOBALS["lang"]['Device Seed Discoveries are a good option if you know that your network consists of a range of subnets, but you are unsure what they are. Seed the discovery with a local router and watch your network unfold before your eyes.'] = 'Semillas de dispositivo Eltrova Se vi Trovis la malkovron kun loka vojo kaj rigardu vian reton anna epäilty viaj okuloj.';

$GLOBALS["lang"]['Device Seed IP'] = 'Védelem';

$GLOBALS["lang"]['Device Status'] = 'Situacio';

$GLOBALS["lang"]['Device Types'] = 'Destitivo Tipoj';

$GLOBALS["lang"]['Device and Software and Hardware Auditing'] = 'Seade kaj Softvaro kaj Riistvara auditeerimin';

$GLOBALS["lang"]['Device is in the Subnet'] = 'Produits chimiques en la Subnet';

$GLOBALS["lang"]['Devices'] = 'Aparatoj';

$GLOBALS["lang"]['devices_assigned_to_location'] = 'Aplikas al la loko';

$GLOBALS["lang"]['Devices Assigned To Location'] = 'Aplikas al la loko';

$GLOBALS["lang"]['devices_assigned_to_org'] = 'Aplikas al- Org';

$GLOBALS["lang"]['Devices Assigned To Org'] = 'Aplikas al- Org';

$GLOBALS["lang"]['Devices Audited'] = 'Aplikis';

$GLOBALS["lang"]['Devices Collection'] = 'Devicea Kolento';

$GLOBALS["lang"]['Devices Created in '] = 'Aparatoj kreitaj fr ';

$GLOBALS["lang"]['Devices Created in Open-AudIT'] = 'Aplikas en Audit';

$GLOBALS["lang"]['devices_default_display_columns'] = 'Seadmete vaikekuva Colonoj';

$GLOBALS["lang"]['Devices Default Display Columns'] = 'Seadmete vaikekuva Colonoj';

$GLOBALS["lang"]['Devices Found Last 7 Days'] = 'Aparatoj Trovis lastajn 7 tagojn';

$GLOBALS["lang"]['Devices Found Today'] = 'Anta suportite fare de aparatoj';

$GLOBALS["lang"]['Devices Found Yesterday'] = 'Aparatoj Trovis hiera';

$GLOBALS["lang"]['Devices Missing Information'] = 'Dispositifsaj informaj';

$GLOBALS["lang"]['Devices Not Audited'] = 'Aparatoj ne revizis';

$GLOBALS["lang"]['Devices Not Seen 30 Days'] = 'Ne vieblas 30 tagoj';

$GLOBALS["lang"]['Devices Not Seen 7 Days'] = 'Ne vieblas 7 Tagoj';

$GLOBALS["lang"]['Devices Not Seen 90 Days'] = 'Ne vieblas 90 tagoj';

$GLOBALS["lang"]['Devices Older Than X'] = 'Pli mannova ol X';

$GLOBALS["lang"]['Devices Retrieved via API'] = 'API Aparatoj Prenitaj por';

$GLOBALS["lang"]['Devices Selected from '] = 'Aplikitaj de ';

$GLOBALS["lang"]['Devices Selected from Open-AudIT'] = 'Deviceso Elektita de Open- Audit';

$GLOBALS["lang"]['Devices Updated in '] = 'Aplikitaj fr ';

$GLOBALS["lang"]['Devices Updated in Open-AudIT'] = 'Aplikitaj en Open- Audit';

$GLOBALS["lang"]['Devices are being benchmarked.'] = 'Destinivos estos komparnormo.';

$GLOBALS["lang"]['Devices are not being benchmarked.'] = 'Aparatoj ne estas komparnormoj.';

$GLOBALS["lang"]['Devices could be benchmarked.'] = 'Devus esti komparnormo.';

$GLOBALS["lang"]['Devices from Open-AudIT'] = 'Aparatoj de Open- Audit';

$GLOBALS["lang"]['Devices in Running State'] = 'Aparatoj en Kuranta';

$GLOBALS["lang"]['Devices in Stopped State'] = 'Aparatoj en Stop State';

$GLOBALS["lang"]['Devices in this'] = 'Apliki en tio';

$GLOBALS["lang"]['Devices will not be matched if their status is set to <i>deleted</i>. Any other status will allow a match to occur.'] = 'Aparatoj ne estos egalitaj se ili statuo ces metita al <i>forigita</i>. imitaiu alias stato permesos mat Okazi.';

$GLOBALS["lang"]['Devices with Expired Warranties'] = 'Aparatoj kun aegunud tagatized';

$GLOBALS["lang"]['Devired from type or OS.'] = 'Aplikita de tipo sur Katlus Os.';

$GLOBALS["lang"]['dhcp_enabled'] = 'Dhcp lbatud';

$GLOBALS["lang"]['Dhcp Enabled'] = 'Dhcp lbatud';

$GLOBALS["lang"]['dhcp_lease_expires'] = 'Dhcp Lising agub';

$GLOBALS["lang"]['Dhcp Lease Expires'] = 'Dhcp Lising agub';

$GLOBALS["lang"]['dhcp_lease_obtained'] = 'Dhcp - Saadud-kezelés';

$GLOBALS["lang"]['Dhcp Lease Obtained'] = 'Dhcp - Saadud-kezelés';

$GLOBALS["lang"]['dhcp_server'] = 'Dhcp- palvérin Nimi';

$GLOBALS["lang"]['Dhcp Server'] = 'Dhcp- palvérin Nimi';

$GLOBALS["lang"]['Did the command complete successfully and return expected data.'] = 'Kompletigis sukcese kaj resendis atendatajn datennojn.';

$GLOBALS["lang"]['direction'] = 'Direkto Nom de la ville (facultatif, sans doute pas besoin de traduction)';

$GLOBALS["lang"]['Direction'] = 'Direkto Nom de la ville (facultatif, sans doute pas besoin de traduction)';

$GLOBALS["lang"]['directory'] = 'Adresaro';

$GLOBALS["lang"]['Directory'] = 'Adresaro';

$GLOBALS["lang"]['disabled'] = 'handikapita';

$GLOBALS["lang"]['Disabled'] = 'handikapita';

$GLOBALS["lang"]['discard'] = 'Dés...';

$GLOBALS["lang"]['Discard'] = 'Dés...';

$GLOBALS["lang"]['Discover'] = 'Malkovro';

$GLOBALS["lang"]['Discoveries'] = 'Eltrova';

$GLOBALS["lang"]['Discoveries are at the very heart of what Open-AudIT does. How else would you know <i>Whats On Your Network?</i>'] = 'Eltrova Kiel vi cius <i>Kio estas sur läbi reto?</i>';

$GLOBALS["lang"]['Discoveries are entries that enable you to run a discovery upon a network in a single click, without entering the details of that network each and every time.'] = 'Eltrova';

$GLOBALS["lang"]['Discovery'] = 'Découverte Découverte';

$GLOBALS["lang"]['Discovery Change Logs'] = 'Registres de cambio de descubrimiento';

$GLOBALS["lang"]['Discovery Data Retention'] = 'Retención de datos de defubrimiento';

$GLOBALS["lang"]['discovery_id'] = 'Személyazonosító igazolvány száma:';

$GLOBALS["lang"]['Discovery ID'] = 'Személyazonosító igazolvány száma:';

$GLOBALS["lang"]['Discovery Issues'] = 'Problèmes de descubrimiento';

$GLOBALS["lang"]['discovery_log'] = 'Logo avastamiini';

$GLOBALS["lang"]['Discovery Log'] = 'Logo avastamiini';

$GLOBALS["lang"]['Discovery Match Options'] = 'Découverte Match Opcioj';

$GLOBALS["lang"]['Discovery Name'] = 'Nom de découverte';

$GLOBALS["lang"]['Discovery Options'] = 'Découverte Opcioj';

$GLOBALS["lang"]['Discovery Queue Count'] = 'Avastamisjärjekordade arv';

$GLOBALS["lang"]['Discovery Queue Limit'] = 'Líte de cola de descubrimiento';

$GLOBALS["lang"]['discovery_run'] = 'Décuverte';

$GLOBALS["lang"]['Discovery Run'] = 'Décuverte';

$GLOBALS["lang"]['discovery_scan_options'] = 'Découverte Scan Opcioj';

$GLOBALS["lang"]['Discovery Scan Options'] = 'Découverte Scan Opcioj';

$GLOBALS["lang"]['Discovery Scan Options are just another item collection. Enterprise users can create, read, update and delete entries as required. Professional users can read all entries, but not create new entries, update existing entries or delete entries. Community users have no GUI that allows access to this collection.'] = 'Découverts-skandalo Opcioj estas nur alias objektokolekto. Entreprisuzantoj povas krei, legi, εisdatigi kaj forigi kontriboujn kiel postulat. La plupart des États membres de l \'Union européenne (UE) ont adopté des mesures visant à réduire les émission de gaz à effet de serre. Komunumaj uzantoj havas neniun GUI kiu permesas aliro al tiu koletto.';

$GLOBALS["lang"]['Discovery Scan Types'] = 'Découverte Skaj Specoj';

$GLOBALS["lang"]['Discovery Support'] = 'Sous- téno Découverte';

$GLOBALS["lang"]['Discovery has stopped working'] = 'Découverte Česis labouri';

$GLOBALS["lang"]['disk'] = 'Prélèvement';

$GLOBALS["lang"]['Disk'] = 'Prélèvement';

$GLOBALS["lang"]['display_version'] = 'Aparta versio';

$GLOBALS["lang"]['Display Version'] = 'Aparta versio';

$GLOBALS["lang"]['Display in Menu'] = 'Luku en Menú';

$GLOBALS["lang"]['Displays a standard web form for submission to POST /{collection}.'] = 'Apartigas norman interretformuaron por submetado al POST / elektronigo.';

$GLOBALS["lang"]['Displays a standard web form for submission to POST /{collection}/import.'] = 'Apartigas norman interretformuaron por submetado al POST / {\ displaistile {\ matb} / grava.';

$GLOBALS["lang"]['district'] = 'Distrikto';

$GLOBALS["lang"]['District'] = 'Distrikto';

$GLOBALS["lang"]['Djibouti'] = 'Ibuibuto';

$GLOBALS["lang"]['dns'] = 'Dns';

$GLOBALS["lang"]['Dns'] = 'Dns';

$GLOBALS["lang"]['dns_domain'] = 'Dns domeen';

$GLOBALS["lang"]['Dns Domain'] = 'Dns domeen';

$GLOBALS["lang"]['dns_domain_reg_enabled'] = 'Dns Domeen Reg.';

$GLOBALS["lang"]['Dns Domain Reg Enabled'] = 'Dns Domeen Reg.';

$GLOBALS["lang"]['dns_fqdn'] = 'Dns Fqdn';

$GLOBALS["lang"]['Dns Fqdn'] = 'Dns Fqdn';

$GLOBALS["lang"]['dns_host_name'] = 'Dns Gastigas nomon';

$GLOBALS["lang"]['Dns Host Name'] = 'Dns Gastigas nomon';

$GLOBALS["lang"]['dns_hostname'] = 'Dns masinanici';

$GLOBALS["lang"]['Dns Hostname'] = 'Dns masinanici';

$GLOBALS["lang"]['dns_server'] = 'Dns- palvérine';

$GLOBALS["lang"]['Dns Server'] = 'Dns- palvérine';

$GLOBALS["lang"]['Do not forget there is a mountain of documentation on the wiki'] = 'Ne forgesu ke ekzitas Monto de dokumentaro sur la Vikio';

$GLOBALS["lang"]['Do not scan these TCP ports.'] = 'Ne skaans tiujn TCP- havenojn.';

$GLOBALS["lang"]['Do not scan these UDP ports.'] = 'Ne skaans tiujn UDP- havenojn.';

$GLOBALS["lang"]['Do not show me again'] = 'Ne montru al mi denove';

$GLOBALS["lang"]['Do you have a perfect example of this configuration? Perhaps a device located in a lab environment or a workstation you use to clone workstation VMs from.'] = '? Vives perfektan ekzemplon de tiu agordo? Eble aparato sitanta en laboratoriomedio a specialkomputio vi uzas por klonaboration VMs de.';

$GLOBALS["lang"]['Do you want to use secure transport (LDAPS) or regular unencrypted LDAP.'] = ' imitau vi volas uzi sekuran transporton (LDAPS) a regulatedn ne verlaifritan LDAP.';

$GLOBALS["lang"]['Do you wish to see the standard sidebar on the left.'] = 'Me sientou vi volas vidi la norman coton maldekstre.';

$GLOBALS["lang"]['documentation'] = 'Dokumenado';

$GLOBALS["lang"]['Documentation'] = 'Dokumenado';

$GLOBALS["lang"]['Documentation about a particular collection.'] = 'Dokumentado pri speciala kolekto.';

$GLOBALS["lang"]['Does Not Equal'] = 'Ne estas egalaj';

$GLOBALS["lang"]['Does the license apply to child Orgs.'] = 'La permesilo valide por infanoj.';

$GLOBALS["lang"]['domain'] = 'Puhataworld. kgm';

$GLOBALS["lang"]['Domain'] = 'Puhataworld. kgm';

$GLOBALS["lang"]['domain_controller_address'] = 'Domeenikontrolleri- addressi';

$GLOBALS["lang"]['Domain Controller Address'] = 'Domeenikontrolleri- addressi';

$GLOBALS["lang"]['domain_controller_name'] = 'Contrador de dominio Nomo nomo';

$GLOBALS["lang"]['Domain Controller Name'] = 'Contrador de dominio Nomo nomo';

$GLOBALS["lang"]['domain_role'] = 'Domeen Rolo';

$GLOBALS["lang"]['Domain Role'] = 'Domeen Rolo';

$GLOBALS["lang"]['domain_short'] = 'Estas malonga';

$GLOBALS["lang"]['Domain Short'] = 'Estas malonga';

$GLOBALS["lang"]['Dominica'] = 'Dominiko';

$GLOBALS["lang"]['Dominican Republic'] = 'Dominika Respubliko';

$GLOBALS["lang"]['Don\\'] = 'Dono estas';

$GLOBALS["lang"]['Dont hold my hand, I know what I am doing. No filter and the ability to join custom tables.'] = 'Ne tenu mian manon, mi scias kion mi faras. Neniu inferilo kaj kapablo ali nestettä al kutimo bulloj.';

$GLOBALS["lang"]['Download'] = 'Le président';

$GLOBALS["lang"]['Download a File'] = 'El apretutu dosiron';

$GLOBALS["lang"]['Download a file from URL'] = 'El apretutu dosieron de URL';

$GLOBALS["lang"]['Download the test_windows_client.vbs script directly'] = 'El apretutu la testwindows _ client.vbs manikripton rekte';

$GLOBALS["lang"]['Download your updated version from'] = 'El apretu finan εisdatigitan version de';

$GLOBALS["lang"]['driver'] = 'de Corée';

$GLOBALS["lang"]['Driver'] = 'de Corée';

$GLOBALS["lang"]['duplex'] = 'Dupleksa';

$GLOBALS["lang"]['Duplex'] = 'Dupleksa';

$GLOBALS["lang"]['Duplicate Devices / Missing Devices'] = 'Destinivos Duplikat / Destinivos perdidos';

$GLOBALS["lang"]['duration'] = 'Tempoda...';

$GLOBALS["lang"]['Duration'] = 'Tempoda...';

$GLOBALS["lang"]['Dutch'] = 'Nederlando';

$GLOBALS["lang"]['ESXi'] = 'ESXi';

$GLOBALS["lang"]['EULA'] = 'E epäiltyropa Unio';

$GLOBALS["lang"]['Each IP is scanned with the discovery configured options (see Discovery Scan Options and Discovery - Community vs Professional vs Enterprise on the wiki). In general, Nmap will test for ports 22 (ssh), 135 (wmi), 62078 (iPhone) and UDP 161 (snmp). If 22, 135 or 161 respond the credential list is retrieved and each credential tested in turn. The first working credentials are used for further queries directly from the device. Note - if a device has previously been discovered and has working credentials, those credentials are tested first. Only if those fail are the other credentials then attempted.'] = ' imitaiu IP estas skanita kun la eltrova.o formita opcioj (vidu Discovery Scan Options kaj Discovery - komunumo vs Professional vs Enterprise sur la Vikio). Se 22, 135 a. 161 responseas la lurkliston estas prenita kaj La uuaj labourakredita.oj estas uzitaj por pliaj demandoj rekte de la aparato. Notu - se aparato anta Nur se tiaj malsukcesas estas la aleliaj akredita.oj tiam providontaj.';

$GLOBALS["lang"]['Each time a device is discovered or an audit result is processed, all rules are retrieved from the database and run against the attributes of the specific device. Rules run against one device at a time - there is no facility to say <i>Run the rules against all devices<i> or <i>Run the rules against these devices<i>. An individual rule will test one or more attributes of the device and if they match the rule, the result will be applied. Several attributes can be tested. Several attributes can be set. Think of this as an If This, Then That system for Open-AudIT.'] = 'Mezcla de este aparato esta malkovrita a reviziorezulto estas prilaborita, Regeloj kuris kontra epäilty unu aparato en tempo... eczistas neniu installation... <i>La reguloj kontra Iuj aparatoj<i> a <i>La reguloj kontra<i>. Personuopregico tetos unu a rezulto estas aplikita. Pluraj atregultoj povas esti recontaj. Pluraj atregultoj povas esti mititaj. Pensu privio kiel Setio, tiam tiu sistemo por Open- Audit.</i></i></i></i>';

$GLOBALS["lang"]['Easily run a discovery upon a network in a single click, without entering the details of that network each and every time.'] = 'Kergesi prizorgas eltrova';

$GLOBALS["lang"]['Ecuador'] = 'Ekvadoro';

$GLOBALS["lang"]['Edit'] = 'Éditeur Edición';

$GLOBALS["lang"]['edit_log'] = 'Editar registro';

$GLOBALS["lang"]['Edit Log'] = 'Editar registro';

$GLOBALS["lang"]['editable'] = 'Muokattava';

$GLOBALS["lang"]['Editable'] = 'Muokattava';

$GLOBALS["lang"]['edited_by'] = 'Anta skeptite fare de';

$GLOBALS["lang"]['Edited By'] = 'Anta skeptite fare de';

$GLOBALS["lang"]['edited_date'] = 'Redaktita dato';

$GLOBALS["lang"]['Edited Date'] = 'Redaktita dato';

$GLOBALS["lang"]['edition'] = 'Eldono';

$GLOBALS["lang"]['Edition'] = 'Eldono';

$GLOBALS["lang"]['Egypt'] = 'Egiptujo';

$GLOBALS["lang"]['Either Amazon, Google or Microsoft.'] = 'Amazon, Google A. Microsoft.';

$GLOBALS["lang"]['Either none or present.

<strong>None</strong> - The successful attack does not depend on the deployment and execution conditions of the vulnerable system. The attacker can expect to be able to reach the vulnerability and execute the exploit under all or most instances of the vulnerability.

<strong>Present</strong> - The successful attack depends on the presence of specific deployment and execution conditions of the vulnerable system that enable the attack. These include:

A race condition must be won to successfully exploit the vulnerability. The successfulness of the attack is conditioned on execution conditions that are not under full control of the attacker. The attack may need to be launched multiple times against a single target before being successful.

Network injection. The attacker must inject themselves into the logical network path between the target and the resource requested by the victim (e.g. vulnerabilities requiring an on-path attacker).'] = 'Neniu kaptlustab nunnan.

<strong>Neniu</strong> La sukcesa atako ne deposas de la regionjo kaj ekzekutkondrircaoj de la vundebla sistemo. La atakanto povas atendi povi atingi la vundeblecon ka efektijvigi la atingojn sub Čiuj a la pleij multaj kazoj de la vundebleco.

<strong>Donaco</strong> La sukcesa atako conpendeas de la visionesto de specifa sorrejo kaj ekzekutkondi curvaoj de la vundebla sistemo kiu rajtigas la atakon. Tiuj inkludas:

Vetkurkondio tuhoaa esti gajnita por sukcese ekspluati la vundeblecon. La sukceseco de la atako estas condi previstasigita de ekzekutkontrircaoj kiuj ne estas sub plena controlo de la atakanto. La atako povas devi esti lan curvaita multoblaj tempoj kontra

Pitäkää kiinni. La atakanto murtaa injekki sin en la logikan retpadon inter la celo kaj la rimedo postuladita fare de la viktimo (ekz. voundblecoj postulantaj sur- pafilan atakanton).';

$GLOBALS["lang"]['El Salvador'] = 'Salvadoro';

$GLOBALS["lang"]['email'] = 'Repo recidato';

$GLOBALS["lang"]['Email'] = 'Repo recidato';

$GLOBALS["lang"]['email_address'] = 'Repo recidato';

$GLOBALS["lang"]['Email Address'] = 'Repo recidato';

$GLOBALS["lang"]['Email Configuration'] = 'Retpo divonato Konfiguracio';

$GLOBALS["lang"]['Email to send test to'] = 'Le présent règlement est obligatoire dans tous ses élements et directement applicable dans tout État membre.';

$GLOBALS["lang"]['Enable'] = 'Habilitáció';

$GLOBALS["lang"]['Enable Distributed COM on this computer - Option is checked'] = 'Distributido lubabine COM sur tiu komputio - Elekto estas kontrolita';

$GLOBALS["lang"]['enabled'] = 'Lubatud';

$GLOBALS["lang"]['Enabled'] = 'Lubatud';

$GLOBALS["lang"]['Enabling the Feature Under Windows'] = 'Sous la fenestroj';

$GLOBALS["lang"]['encryption'] = 'Ascript';

$GLOBALS["lang"]['Encryption'] = 'Ascript';

$GLOBALS["lang"]['encryption_method'] = 'Akripto Metodo';

$GLOBALS["lang"]['Encryption Method'] = 'Akripto Metodo';

$GLOBALS["lang"]['encryption_status'] = 'Enkripciostatuso';

$GLOBALS["lang"]['Encryption Status'] = 'Enkripciostatuso';

$GLOBALS["lang"]['end_date'] = 'Fino de la dato';

$GLOBALS["lang"]['End Date'] = 'Fino de la dato';

$GLOBALS["lang"]['End OF Life Product ID'] = 'Fino de vivo produkto';

$GLOBALS["lang"]['end_of_life'] = 'Fino de la vivo';

$GLOBALS["lang"]['End Of Life'] = 'Fino de la vivo';

$GLOBALS["lang"]['end_of_production'] = 'Fino de Produktado';

$GLOBALS["lang"]['End Of Production'] = 'Fino de Produktado';

$GLOBALS["lang"]['end_of_service'] = 'Fino de servo';

$GLOBALS["lang"]['End Of Service'] = 'Fino de servo';

$GLOBALS["lang"]['end_of_service_life'] = 'Fino de la vivo';

$GLOBALS["lang"]['End Of Service Life'] = 'Fino de la vivo';

$GLOBALS["lang"]['Endpoint'] = 'Finpunkto';

$GLOBALS["lang"]['English'] = 'Angla';

$GLOBALS["lang"]['Enhances regulatory compliance'] = 'Plibonigas reguligan observateur';

$GLOBALS["lang"]['Enrichment is complete. The CVE has full metadata and is considered stable.'] = 'Rivistago estas kompleta. La CVE a plenajn metadatenojn kaj estas konsiderita stabilisa.';

$GLOBALS["lang"]['Ensure documentation is controlled and accessible'] = 'Certigi dokumentadon estas kontrolita kaj alirebla';

$GLOBALS["lang"]['enterprise'] = 'Yrités';

$GLOBALS["lang"]['Enterprise'] = 'Yrités';

$GLOBALS["lang"]['Enterprise Private Network'] = 'Yrities Privata Reto';

$GLOBALS["lang"]['Enterprise private network'] = 'Entreprise privée';

$GLOBALS["lang"]['Entitlement Type'] = 'Título';

$GLOBALS["lang"]['Entra'] = 'Entrada';

$GLOBALS["lang"]['environment'] = 'Médio';

$GLOBALS["lang"]['Environment'] = 'Médio';

$GLOBALS["lang"]['Equal To'] = 'Egala Nom de la ville (facultatif, sans doute pas besoin de traduction)';

$GLOBALS["lang"]['Equal To or Greater Than'] = 'Egala, Épilty.';

$GLOBALS["lang"]['Equal To or Less Than'] = 'Egala a Kahtlus Malpli ol';

$GLOBALS["lang"]['Equals'] = 'Egaluloj';

$GLOBALS["lang"]['Equatorial Guinea'] = 'Ekvatora Gaudio';

$GLOBALS["lang"]['Eritrea'] = 'Éritréo';

$GLOBALS["lang"]['Error'] = 'Eraro';

$GLOBALS["lang"]['Error Code'] = 'Eraro Kodo';

$GLOBALS["lang"]['Esperanto'] = 'Esperanto Esperanto';

$GLOBALS["lang"]['Establish a project plan and timeline'] = 'Létrehozás projektoplanon kaj templinion';

$GLOBALS["lang"]['Establish an information security policy'] = 'Létrehozás informan sekurrecpolitikon';

$GLOBALS["lang"]['Established'] = 'Stabiliserida';

$GLOBALS["lang"]['Estonia'] = 'Estonio';

$GLOBALS["lang"]['Estonian'] = 'La Estona Nom de la ville (facultatif, sans doute pas besoin de traduction)';

$GLOBALS["lang"]['Ethernet MAC'] = 'MAC Ethernet';

$GLOBALS["lang"]['ethernet_mac'] = 'Mac Ethernet';

$GLOBALS["lang"]['Ethernet Mac'] = 'Mac Ethernet';

$GLOBALS["lang"]['Ethiopia'] = 'Etiópia';

$GLOBALS["lang"]['Evaluate the ISMS internally'] = 'Analizu la ISMS interne';

$GLOBALS["lang"]['Every'] = 'Отели ва';

$GLOBALS["lang"]['Every Day'] = 'Firmado';

$GLOBALS["lang"]['Example'] = 'Ekzemplo';

$GLOBALS["lang"]['Example Devices'] = 'Ekzemplo: Hävitä';

$GLOBALS["lang"]['Example Org Chart with Access'] = 'Ekzemplo Org Chart Kun Aliro';

$GLOBALS["lang"]['Example text from'] = 'Ekzemplo de teksto';

$GLOBALS["lang"]['Examples'] = 'Ekzemoj de ekzemoj';

$GLOBALS["lang"]['Exceptions'] = 'Esceptoj';

$GLOBALS["lang"]['exclude'] = 'Ekskluzo';

$GLOBALS["lang"]['Exclude'] = 'Ekskluzo';

$GLOBALS["lang"]['exclude_ip'] = 'Välja arvatud IP';

$GLOBALS["lang"]['Exclude IP'] = 'Välja arvatud IP';

$GLOBALS["lang"]['Exclude IP Addresses'] = 'Extrait IP Adresoj';

$GLOBALS["lang"]['Exclude IP Addresses (individual IP - 192.168.1.20, ranges - 192.168.1.30-40 or subnets - 192.168.1.100/30) listed from being scanned. Comma seperated, no spaces.'] = 'Välja arvatud IP- adresseid (infinity duaalinen IP - 192.168.1.20, intervalloj - 192.168.1.30- 40, epäilty subetoj - 192.168.1.100 / 30). Koma secesis, neniuj spacoj.';

$GLOBALS["lang"]['Exclude TCP Ports'] = 'TCP Havenoj';

$GLOBALS["lang"]['exclude_tcp_ports'] = 'Nincs magyar neve Tcp';

$GLOBALS["lang"]['Exclude Tcp Ports'] = 'Nincs magyar neve Tcp';

$GLOBALS["lang"]['Exclude UDP Ports'] = 'UDP Havenoj';

$GLOBALS["lang"]['exclude_udp_ports'] = 'Puertos de Udp';

$GLOBALS["lang"]['Exclude Udp Ports'] = 'Puertos de Udp';

$GLOBALS["lang"]['Exclude any ports listed from being scanned. Comma seperated, no spaces.'] = 'Ekskludante jujn ajn hasnojn listigitaj de esti skanitaj. Koma secesis, neniuj spacoj.';

$GLOBALS["lang"]['Exclude these IP addresses from being Nmap scanned.'] = 'Exclusir tiauj IP- adresoj de esti Nmap skanita.';

$GLOBALS["lang"]['Excluded'] = 'Ekskludita';

$GLOBALS["lang"]['exclusion_reasons'] = 'C \'est vrai.';

$GLOBALS["lang"]['Exclusion Reasons'] = 'C \'est vrai.';

$GLOBALS["lang"]['executable'] = 'Eksplusebla';

$GLOBALS["lang"]['Executable'] = 'Eksplusebla';

$GLOBALS["lang"]['executable_id'] = 'Henkilókortti';

$GLOBALS["lang"]['Executable ID'] = 'Henkilókortti';

$GLOBALS["lang"]['executables'] = 'Eksplusoj';

$GLOBALS["lang"]['Executables'] = 'Eksplusoj';

$GLOBALS["lang"]['Execute'] = 'Efekto';

$GLOBALS["lang"]['Executing'] = 'Eksplicita';

$GLOBALS["lang"]['exemption_reason'] = '- Oui.';

$GLOBALS["lang"]['Exemption Reason'] = '- Oui.';

$GLOBALS["lang"]['Existing Building'] = 'Ekskluzivanta Konstrua.o';

$GLOBALS["lang"]['Existing Floor'] = 'Ekzisztanta eto';

$GLOBALS["lang"]['Existing Room'] = 'Sala eksistenssie';

$GLOBALS["lang"]['Existing Row'] = 'Ekskluziva Fila';

$GLOBALS["lang"]['expire_date'] = 'Fecha de expulsión';

$GLOBALS["lang"]['Expire Date'] = 'Fecha de expulsión';

$GLOBALS["lang"]['expire_minutes'] = 'Aegumisprolid';

$GLOBALS["lang"]['Expire Minutes'] = 'Aegumisprolid';

$GLOBALS["lang"]['expires'] = '→ Eventoj:';

$GLOBALS["lang"]['Expires'] = '→ Eventoj:';

$GLOBALS["lang"]['expiry_date'] = 'Eksplua dato';

$GLOBALS["lang"]['Expiry Date'] = 'Eksplua dato';

$GLOBALS["lang"]['exploit_maturity'] = 'Käytä Maturismoa';

$GLOBALS["lang"]['Exploit Maturity'] = 'Käytä Maturismoa';

$GLOBALS["lang"]['Export'] = 'Eksporto';

$GLOBALS["lang"]['Export by Device'] = 'Appareil Eksporto';

$GLOBALS["lang"]['Export by Policy'] = 'Eksporto de politiko';

$GLOBALS["lang"]['Export data to'] = 'Eksporti datumojn';

$GLOBALS["lang"]['Exporting a Device'] = 'Eksporti de la Device';

$GLOBALS["lang"]['expose'] = 'Internacia ekspozicio';

$GLOBALS["lang"]['Expose'] = 'Internacia ekspozicio';

$GLOBALS["lang"]['External'] = 'Ekstera Ekstera';

$GLOBALS["lang"]['External Field Name'] = 'Ekstera kamponomo';

$GLOBALS["lang"]['External Field Type'] = 'Ekstera kampo Tipo';

$GLOBALS["lang"]['External Field Types'] = 'Ekstera kampo Tipoj';

$GLOBALS["lang"]['external_ident'] = 'Azonosító: Ekstera';

$GLOBALS["lang"]['External Ident'] = 'Azonosító: Ekstera';

$GLOBALS["lang"]['external_link'] = 'Ekstera ligo';

$GLOBALS["lang"]['External Link'] = 'Ekstera ligo';

$GLOBALS["lang"]['extra_columns'] = 'ekstraj kolono';

$GLOBALS["lang"]['Extra Columns'] = 'ekstraj kolono';

$GLOBALS["lang"]['Extra and Time based Reporting'] = 'Ekstero kaj tempo bazigis Aruandmiini';

$GLOBALS["lang"]['Extra and more verbose logging is generated for troubleshooting.'] = 'Ekstra kaj pli multvorta arbotorekado estas generita por mishokado.';

$GLOBALS["lang"]['FAQ'] = 'Demande KKK';

$GLOBALS["lang"]['FQDN'] = 'FQDN';

$GLOBALS["lang"]['FW Revision'] = 'FW- Revizio';

$GLOBALS["lang"]['Fail'] = 'Fajlo';

$GLOBALS["lang"]['Failed'] = 'Malsukcèse';

$GLOBALS["lang"]['Failed Severity'] = 'Malsukcesas plurajn';

$GLOBALS["lang"]['Falkland Islands (Malvinas)'] = 'Falklandinsurloj (Malvinaj)';

$GLOBALS["lang"]['Family'] = 'Famille';

$GLOBALS["lang"]['Faroe Islands'] = 'Feroaj Pericloj';

$GLOBALS["lang"]['Features'] = 'Endoj';

$GLOBALS["lang"]['February'] = 'helmikuu';

$GLOBALS["lang"]['field'] = 'Kampo';

$GLOBALS["lang"]['Field'] = 'Kampo';

$GLOBALS["lang"]['field_id'] = 'Numéro d \'identification du Kampo';

$GLOBALS["lang"]['Field ID'] = 'Numéro d \'identification du Kampo';

$GLOBALS["lang"]['Field Name'] = 'Kamponomo Nom de la ville (facultatif, sans doute pas besoin de traduction)';

$GLOBALS["lang"]['Field Type'] = 'Kampo Tipo';

$GLOBALS["lang"]['Fields'] = 'Kambrioláz';

$GLOBALS["lang"]['fields'] = 'Kambrioláz';

$GLOBALS["lang"]['Fields attributes are'] = 'Estas de Kampoj';

$GLOBALS["lang"]['Fiji the Fiji Islands'] = 'Fi fluidioj la Fi pilaioj consulloj';

$GLOBALS["lang"]['File'] = 'Dosiero';

$GLOBALS["lang"]['File Auditing'] = 'Dosieroj';

$GLOBALS["lang"]['File Import'] = 'Dosieroj';

$GLOBALS["lang"]['File Input'] = 'Dosiero fr';

$GLOBALS["lang"]['file_name'] = 'Dosiero';

$GLOBALS["lang"]['File Name'] = 'Dosiero';

$GLOBALS["lang"]['File Share Discovery'] = 'Dosiero Partager Découverte';

$GLOBALS["lang"]['file_size'] = 'Dosieroj';

$GLOBALS["lang"]['File Size'] = 'Dosieroj';

$GLOBALS["lang"]['filename'] = 'Dosiero';

$GLOBALS["lang"]['Filename'] = 'Dosiero';

$GLOBALS["lang"]['files'] = 'Dosieroj';

$GLOBALS["lang"]['Files'] = 'Dosieroj';

$GLOBALS["lang"]['files_id'] = 'Numéro d \'identification de Doseroj';

$GLOBALS["lang"]['Files ID'] = 'Numéro d \'identification de Doseroj';

$GLOBALS["lang"]['filter'] = 'Szulfátok';

$GLOBALS["lang"]['Filter'] = 'Szulfátok';

$GLOBALS["lang"]['filtered'] = 'Filtris';

$GLOBALS["lang"]['Filtered'] = 'Filtris';

$GLOBALS["lang"]['Filtered Ports'] = 'Plilongigita Havenoj';

$GLOBALS["lang"]['Finland'] = 'Finnlando Finnlando';

$GLOBALS["lang"]['Finnish'] = 'Finlande';

$GLOBALS["lang"]['Firewall'] = 'Fajromuro';

$GLOBALS["lang"]['Firewall Packages'] = 'Paquetes de Cortafuegos';

$GLOBALS["lang"]['firewall_rule'] = 'Fajromuro';

$GLOBALS["lang"]['Firewall Rule'] = 'Fajromuro';

$GLOBALS["lang"]['firmware'] = 'firmao';

$GLOBALS["lang"]['Firmware'] = 'firmao';

$GLOBALS["lang"]['firmware_revision'] = 'La firmao de la firmao';

$GLOBALS["lang"]['Firmware Revision'] = 'La firmao de la firmao';

$GLOBALS["lang"]['First'] = 'Avaa';

$GLOBALS["lang"]['First Name'] = 'Nomo Unia';

$GLOBALS["lang"]['first_run'] = 'Unia Kuro';

$GLOBALS["lang"]['First Run'] = 'Unia Kuro';

$GLOBALS["lang"]['first_seen'] = 'Unue vidu';

$GLOBALS["lang"]['First Seen'] = 'Unue vidu';

$GLOBALS["lang"]['First focus on what the end need is: are you trying to baseline software, users, or Netstat data? What is the important thing(s) to compare and report on?'] = 'Une Fososo sur pion la finbezono estas: Uzlinian softvaron, uzantojn, katlus Netstat- datenojn? Kio estas la grava afero (s) kompari kaj raporti?';

$GLOBALS["lang"]['FirstWave'] = 'Unua virino';

$GLOBALS["lang"]['Fix'] = 'Correción';

$GLOBALS["lang"]['Fixed'] = 'Fiksita Fido';

$GLOBALS["lang"]['Fixing the Issue'] = 'Fijación de la afero';

$GLOBALS["lang"]['Floor'] = 'eta / 1993 / o';

$GLOBALS["lang"]['Follow any of the links below and discover how to use Open-AudIT to find out <b>Whats On Your Network?</b>'] = 'Sekku jujn ajn da laligiloj malsupre kaj malkovri kiel uzi Open- Audit por malkovri <b>Kio estas sur läbi reto?</b>';

$GLOBALS["lang"]['For'] = 'Henkillisy';

$GLOBALS["lang"]['For <i>Type</i> make sure to select Baseline, and for Group you should select a Group of devices, if applicable to this baseline, that best represent the devices to apply the baseline against. This will prevent erroneous entries.'] = 'Henkillisy <i>Tipo</i> Certigu selekki Bazlinion, kaj por grupo vi devus selekti grupon de aparatoj, se uzeble al tiu bazlinio, kiu plej os reprezentas la aparatojn por uzi la bazlinion kontrauna. Tio malhelpos erajn kontriboujn.';

$GLOBALS["lang"]['For Debian/Ubuntu run, including setting dpkg to remember your override so an apt-get upgrade will not break'] = 'Por Debian / Ubuntu kuro, inkluzive de metado de dpkg por memorivian ohitustiel apt- ricevi γisdatigo ne krevos';

$GLOBALS["lang"]['For SNMP Open-AudIT can use v1, v2 and v3 credentials. The device is queried regardless of it being a router, switch (regular network devices) or a computer (Linux and Windows often run SNMP for monitoring tools).'] = 'Por SNMP Open- Audit povas uzi v1, v2 kaj v3 akredita. La aparato estas orgullosomandita nekonsiderante εi estante itinero, тaltilo (regulaj sendostaciaj paratoj) a Kahtlus komputio (Lin)';

$GLOBALS["lang"]['For a primer on cron, see this Wikipedia page'] = 'Por enkonduko sur kno, vidu clari tiun paεon';

$GLOBALS["lang"]['For a seed discovery, should I only discover IPs in the private IP address space.'] = 'Por szemtrova';

$GLOBALS["lang"]['For a seed discovery, should I only discover IPs on the chosen subnet.'] = 'Por szemtrova';

$GLOBALS["lang"]['For a seed discovery, should I ping the subnet before running the discovery.'] = 'Por szemtrova';

$GLOBALS["lang"]['For advanced entry of a raw SQL query. As per Queries, you must include <code>WHERE @filter AND<code> in your SQL.'] = 'Por progresilta eniro de kruda SQL- query. Kieli valitsemiini Päringud, vi murtaa inkluzivi <code>WHERE @filter AND<code> in your SQL.</code></code>';

$GLOBALS["lang"]['For each spawned process, the below occurs.'] = 'Por... generita procezo, la malsupre okazas.';

$GLOBALS["lang"]['For example - you might create a baseline from a device running Redhat 9 which acts as one of your Apache servers in a cluster. You know this particular server is configured just the way you want it but you are unsure if other servers in the cluster are configured exactly the same. Baselines enable you to determine this.'] = 'Ekzample, vi eble kreos bazlinion de aparato kuranta Redhat 9 kiu funkcias kiel unu el viaj apa reomendarserviloj en areto. L \'évolution de l\' emploi et de l \'emploi dans l\' Union européenne';

$GLOBALS["lang"]['For example - you might create a baseline from a device running Redhat 9 which acts as one of your Apache servers in a cluster. You know this particular server is configured just the way you want it but you are unsure if other servers in the cluster are configured exactly the same. Baselines enables you to determine this.'] = 'Ekzample, vi eble kreos bazlinion de aparato kuranta Redhat 9 kiu funkcias kiel unu el viaj apa reomendarserviloj en areto. L \'évolution de l\' emploi et de l \'emploi dans l\' Union européenne';

$GLOBALS["lang"]['For further details information, see the wiki.'] = 'Por Pliaj informaj, vidu la Vikion.';

$GLOBALS["lang"]['For licenses that are not perpetual, when does the license expire.'] = 'Por licencoj kiuj ne estas eternaj, kiam la licenco eksvalidi betas.';

$GLOBALS["lang"]['For more detailed information, check the Open-AudIT Knowledge Base.'] = 'Por pli detalaj informaj, kontrau la Open- Audit teedmisterbaas.';

$GLOBALS["lang"]['For more information please see the following guide which includes a video. Use'] = 'Por pli da informaj bonvolu vidi la sekvan gvidiston kiu inkludas vidbendon. Uzo';

$GLOBALS["lang"]['For more information, see'] = 'Por pli da informaj, vidu';

$GLOBALS["lang"]['form_factor'] = 'Facteur de formo';

$GLOBALS["lang"]['Form Factor'] = 'Facteur de formo';

$GLOBALS["lang"]['format'] = 'Pormatoj';

$GLOBALS["lang"]['Format'] = 'Pormatoj';

$GLOBALS["lang"]['Forth'] = 'Portadino';

$GLOBALS["lang"]['fqdn'] = 'Fqdn';

$GLOBALS["lang"]['Fqdn'] = 'Fqdn';

$GLOBALS["lang"]['France, French Republic'] = 'Francio, Franca Republico';

$GLOBALS["lang"]['free'] = 'Libéria';

$GLOBALS["lang"]['Free'] = 'Libéria';

$GLOBALS["lang"]['French'] = 'Franciaország';

$GLOBALS["lang"]['French Guiana'] = 'Franca Gvanio';

$GLOBALS["lang"]['French Polynesia'] = 'Franca Polinezio';

$GLOBALS["lang"]['French Southern Territories'] = 'Territorios de Franca Suda';

$GLOBALS["lang"]['Frequently Asked Questions'] = 'De la demande';

$GLOBALS["lang"]['Friday'] = 'vendrede';

$GLOBALS["lang"]['From 100 Devices'] = 'Aparatoj';

$GLOBALS["lang"]['From 500 Devices'] = 'De 500 aparatos';

$GLOBALS["lang"]['From that page'] = 'De tiu paεo';

$GLOBALS["lang"]['full_name'] = 'Pléna nomo';

$GLOBALS["lang"]['Full Name'] = 'Pléna nomo';

$GLOBALS["lang"]['Full cloud auditing with all the details from a regular Open-AudIT audit AND details such as the machine type and size.'] = 'Plena nubo revizianta kun † iuj detaloj déréglemente Open- Audit - Revizio kaj detaloj kiel ekzample la ma penspeco kaj grandeco.';

$GLOBALS["lang"]['function'] = 'Funkcio';

$GLOBALS["lang"]['Function'] = 'Funkcio';

$GLOBALS["lang"]['GROUP BY'] = 'Les';

$GLOBALS["lang"]['Gabon'] = 'Gabóno Gabóno';

$GLOBALS["lang"]['Galician'] = 'Galice';

$GLOBALS["lang"]['Gambia the'] = 'Gambio';

$GLOBALS["lang"]['Gap Analysis (optional)'] = 'Lünkade analües (valikuliini)';

$GLOBALS["lang"]['gateway'] = 'Fizetés';

$GLOBALS["lang"]['Gateway'] = 'Fizetés';

$GLOBALS["lang"]['gateways'] = 'Fizetés';

$GLOBALS["lang"]['Gateways'] = 'Fizetés';

$GLOBALS["lang"]['Generated By'] = 'Generita';

$GLOBALS["lang"]['geo'] = 'Géogéo';

$GLOBALS["lang"]['Geo'] = 'Géogéo';

$GLOBALS["lang"]['Geographical Maps'] = 'Géografiaj Mapoj';

$GLOBALS["lang"]['Georgia'] = 'Kartvelio Kartvelio';

$GLOBALS["lang"]['German'] = 'Allemagne';

$GLOBALS["lang"]['Germany'] = 'Saksa';

$GLOBALS["lang"]['Get Lat/Long'] = 'Hangi Lat / Long';

$GLOBALS["lang"]['Get News'] = 'Akiri Novaoj';

$GLOBALS["lang"]['Get Started'] = 'Mondial. unit description in lists';

$GLOBALS["lang"]['Get a Free License'] = 'Akiri Liberan Permesilon';

$GLOBALS["lang"]['Get familiar with the Open-AudIT platform and explore some of its features.'] = 'Scii kun la Open- Audit- platformo kaj esplori jujn el εiaj ekoj.';

$GLOBALS["lang"]['Getting Started'] = 'Mondial. unit description in lists';

$GLOBALS["lang"]['Ghana'] = 'Ganao';

$GLOBALS["lang"]['Gibraltar'] = 'Le Président';

$GLOBALS["lang"]['Github'] = 'Github';

$GLOBALS["lang"]['Global Discovery Options'] = 'Tutmonda Découverte Opcioj';

$GLOBALS["lang"]['Global area network'] = 'Tutmonda areoreto';

$GLOBALS["lang"]['Go'] = 'Iru.';

$GLOBALS["lang"]['Go back to your Open-AudIT server and create a discovery with the target Windows computers IP Address as the subnet (this will save having to discover the entire subnet again). Run the discovery, taking note of any issues. For any issues found, take appropriate actions.'] = 'Iru reen al via Open- Audit- servilo kaj krei eltrova... on kun la celo Windows komputiloj IP Aadress kiel la subreto (tio diverraparos devi malkovri la tutan subreton denove). La malkovro, noti pri juj aferoj. Imitaar juj aferoj Trovis, prenu ta.gajn agojn.';

$GLOBALS["lang"]['Go the target Windows PC (or use RDP) and log on as the user used by your discovery credential set.'] = 'Iru al la celo Windows PC (a';

$GLOBALS["lang"]['Go to menu'] = 'Iru al menuoj';

$GLOBALS["lang"]['Go to the <i>Applications</i> -> <i>App registrations</i> menu item on the far left. Search for Open-AudIT. Click the Open-AudIT entry in the list (assuming you named the app Open-AudIT).'] = 'Iru al la <i>Aplikoj</i> ■ <i>Jogosultság</i> menuo objekto sur la malpreksima maldekstro. Serčis por Open- Audit. Klaku la Open- Audit- eniron en la lista (supozante ke vi nomis la app Open- Audit).';

$GLOBALS["lang"]['Go to the <i>Certificates and secrets</i> menu item under <i>Manage</i> in the center menu.'] = 'Iru al la <i>Atestiloj kaj sekretoj</i> Manu dedecto sub <i>Gépkocsi</i> en la centro menuo.';

$GLOBALS["lang"]['Go to the <i>Single sign-on</i> menu item and click SAML for <i>Select a single sign-on method</i>.'] = 'Iru al la <i>Ununura signo- sur</i> menuo objekto kaj klako SAML por <i>Elekti ununuran signo- sur metodonte</i>.';

$GLOBALS["lang"]['Google Compute Fields'] = 'Google Computen kentät';

$GLOBALS["lang"]['Google JSON Credentials'] = 'Google JSON Kredencialit';

$GLOBALS["lang"]['Google Maps API Key'] = 'Google Mapsin solutusrajapinta';

$GLOBALS["lang"]['Great, then you can help! Send FirstWave the text shown in the GUI and what should be shown. We will include that in the language file so going forward, the translation is improved and you do not need to worry about updating it for every release!'] = 'Csont, vi povas heldi! Unie sémi Ondo la teksto montrita en la GUI kaj kio dev esti montrita. Ni inkludocation en la lingvodosiero tien iranta anta awaren, la traduko estas plibonigita kaj vi ne bezonas maltrankvili pri εisdatigado de εi por.';

$GLOBALS["lang"]['Greater Than'] = 'Pli gra ol';

$GLOBALS["lang"]['Greater Than or Equals'] = 'Pli gra ol a Kahtlustus egalaj';

$GLOBALS["lang"]['Greece'] = 'Grekio';

$GLOBALS["lang"]['Greek'] = 'Greka geka';

$GLOBALS["lang"]['Green Query'] = 'Verda paring';

$GLOBALS["lang"]['Greenland'] = 'Gronlando';

$GLOBALS["lang"]['Grenada'] = 'Nom GrenadoCity (facultatif, sans doute pas besoin de traduction)';

$GLOBALS["lang"]['Group'] = 'Grupo de grupo';

$GLOBALS["lang"]['group_by'] = 'Grupo de grupo';

$GLOBALS["lang"]['Group By'] = 'Grupo de grupo';

$GLOBALS["lang"]['group_id'] = 'Grupon henkilókortti';

$GLOBALS["lang"]['Group ID'] = 'Grupon henkilókortti';

$GLOBALS["lang"]['groups'] = 'Csoport';

$GLOBALS["lang"]['Groups'] = 'Csoport';

$GLOBALS["lang"]['Groups are used as simple lists of devices that match the required conditions. If requested using JSON they return a list of <i>devices.id</i> only. If requested using the web interface, they return the standard column attribute list. Groups can be used for Integrations, Baselines and other items.'] = 'Grupoj estas utiligitaj kiel simplaj listaj de aparatos kiuj egalas la postulatajn kontircaojn. La demande de l \'Union européenne <i>Paratoj.id</i> Meur. Se postuladite uzante la interretinterfacon, ili resendas la norman kolumnon atantine as listan. Grupoj povas esti uzitaj por Integriεoj, Bazlinioj kajelij eroj.';

$GLOBALS["lang"]['Guadeloupe'] = 'GuadalupeName';

$GLOBALS["lang"]['Guam'] = 'Gvamo';

$GLOBALS["lang"]['Guatemala'] = 'Gvatinio Gvatinio Gvatinio';

$GLOBALS["lang"]['Guernsey'] = 'Erzjako';

$GLOBALS["lang"]['guest_device_id'] = 'Gasto de Bloko';

$GLOBALS["lang"]['Guest Device ID'] = 'Gasto de Bloko';

$GLOBALS["lang"]['guid'] = 'Guid';

$GLOBALS["lang"]['Guid'] = 'Guid';

$GLOBALS["lang"]['Guinea'] = 'Gaudio Gaudio';

$GLOBALS["lang"]['Guinea-Bissau'] = 'Gaudio Bisa';

$GLOBALS["lang"]['Guyana'] = 'Gujano';

$GLOBALS["lang"]['HP-UX'] = 'HP- UX';

$GLOBALS["lang"]['HW Revision'] = 'HW- Revizio';

$GLOBALS["lang"]['Haiti'] = 'Haïtio';

$GLOBALS["lang"]['hard_drive_index'] = 'Malmöla Indekso';

$GLOBALS["lang"]['Hard Drive Index'] = 'Malmöla Indekso';

$GLOBALS["lang"]['Hardware'] = 'Malteria eco';

$GLOBALS["lang"]['hardware_revision'] = 'Revisión de matériel';

$GLOBALS["lang"]['Hardware Revision'] = 'Revisión de matériel';

$GLOBALS["lang"]['Has this policy been applied in this organization.'] = 'Tiu politiko estis aplikita en tiu organiso.';

$GLOBALS["lang"]['hash'] = 'Bonjour.';

$GLOBALS["lang"]['Hash'] = 'Bonjour.';

$GLOBALS["lang"]['Have the agent always run the latest audit script (if you upgrade Open-AudIT and manually copy the scripts to the targets, then set cron - you will need to update these scripts for each upgrade).'] = 'Vive la agenton ';

$GLOBALS["lang"]['Have your user open a command prompt (using <i>Run as Administrator</i>). Paste the below into the prompt to download the Agent.'] = 'Via uzanto malfermas kommundan interstilon (uzante) <i>Kiel alkalmazás</i>) Coller la malsupre en la prestilon por el Trucuuti la agenton.';

$GLOBALS["lang"]['Head'] = 'Couche';

$GLOBALS["lang"]['Heard Island and McDonald Islands'] = 'Hallottam, hogy szigeti kaj McDonald \'s loj';

$GLOBALS["lang"]['Hebrew'] = 'Hebrea heeringat';

$GLOBALS["lang"]['height'] = 'Li!';

$GLOBALS["lang"]['Height'] = 'Li!';

$GLOBALS["lang"]['Height in RU'] = 'Lavero en RU';

$GLOBALS["lang"]['Help'] = 'Apuapu';

$GLOBALS["lang"]['Help and Frequently Asked Questions'] = 'Aide kaj De la demande';

$GLOBALS["lang"]['Helps manage and mitigate information security risks'] = 'Administrateur Helpoj kaj letigas informajn sekurrecriskojn';

$GLOBALS["lang"]['Hide Audit Window'] = 'Ka apretu la fenestroni';

$GLOBALS["lang"]['high'] = 'Alta';

$GLOBALS["lang"]['High'] = 'Alta';

$GLOBALS["lang"]['High Availability'] = 'Alta Kapablo';

$GLOBALS["lang"]['Hindi'] = 'La hinda';

$GLOBALS["lang"]['Holy See (Vatican City State)'] = 'Père Noël Sede';

$GLOBALS["lang"]['Home'] = 'Hejmo';

$GLOBALS["lang"]['home'] = 'Hejmo';

$GLOBALS["lang"]['Home Area Network'] = 'Kotialueverkko';

$GLOBALS["lang"]['Home area network'] = 'C \'est la première fois que l\' on s \'en occupe.';

$GLOBALS["lang"]['Honduras'] = 'Honduro';

$GLOBALS["lang"]['Hong Kong'] = 'Honkongo';

$GLOBALS["lang"]['host'] = 'Gastiganto Nom de la ville (facultatif, sans doute pas besoin de traduction)';

$GLOBALS["lang"]['Host'] = 'Gastiganto Nom de la ville (facultatif, sans doute pas besoin de traduction)';

$GLOBALS["lang"]['hostname'] = 'Gastignomo Nom de la ville (facultatif, sans doute pas besoin de traduction)';

$GLOBALS["lang"]['Hostname'] = 'Gastignomo Nom de la ville (facultatif, sans doute pas besoin de traduction)';

$GLOBALS["lang"]['hour'] = 'Horo';

$GLOBALS["lang"]['Hour'] = 'Horo';

$GLOBALS["lang"]['How Does It Work?'] = 'Näetkö funkkia?';

$GLOBALS["lang"]['How Does it Work?'] = 'Näetkö funkkia?';

$GLOBALS["lang"]['How Long Does it Take'] = 'Kiom lowe εi prenas';

$GLOBALS["lang"]['How and Why is'] = 'Kiel kaj kial estas';

$GLOBALS["lang"]['How and Why is Open-AudIT More Secure'] = 'Kiel kaj kial estas Open Audit Pli Sekura';

$GLOBALS["lang"]['How do they work?'] = 'Kiel ili funkcias?';

$GLOBALS["lang"]['How does a Device Seed Discovery find known IPs?'] = 'Kiel Seade Seemne avastamise trovas konataj IPoj?';

$GLOBALS["lang"]['How long did the command take to execute.'] = 'Kiom lowe la kommundo sukcesis efektivigi.';

$GLOBALS["lang"]['How long should Nmap wait for a response, per device.'] = 'Kiom lowe ni murtaa atendi reaktion, par aparato.';

$GLOBALS["lang"]['How many circuit feed to this rack.'] = 'Kiom da cirkvito mancillas al tiu rako.';

$GLOBALS["lang"]['How many policies results in a fail.'] = 'Kiom da politikoj rezultas en malsukceso.';

$GLOBALS["lang"]['How many policies results in a pass.'] = 'Kiom da politikoj rezultigas enirpermesilon.';

$GLOBALS["lang"]['How many power sockets in this rack.'] = 'Kiom da Commerco...';

$GLOBALS["lang"]['How many rack units in height is this rack.'] = 'Kiom da ravintonuot en aliteco estas tiu rako.';

$GLOBALS["lang"]['How often should the collector ask the server for a task.'] = 'Kiel ofte la kolektanto petas la servilon por tapo.';

$GLOBALS["lang"]['How should we select devices to be integrated (using an Attribute, Query or a Group).'] = 'Kiel ni elektas aparatojn por esti integritaj (uzante Atributon, Query a Gropon).';

$GLOBALS["lang"]['How the vulnerability is exploited (e.g., Network, Adjacent, Local, Physical).'] = 'Kiel la vundebleco estas ekspluatita (ekz., Reto, Administration, lokulo, Fizika).';

$GLOBALS["lang"]['How to compare'] = 'Kiel kompari';

$GLOBALS["lang"]['Human-readable explanation of the vulnerability.'] = 'Homa-legebla klarigo de la vundebleco.';

$GLOBALS["lang"]['Hungarian'] = 'Hungara hangaro';

$GLOBALS["lang"]['Hungary'] = 'Hungario Hungario Hungario';

$GLOBALS["lang"]['hw_cpe'] = 'Hw Cpe';

$GLOBALS["lang"]['Hw Cpe'] = 'Hw Cpe';

$GLOBALS["lang"]['hyperthreading'] = 'Hüperlõime';

$GLOBALS["lang"]['Hyperthreading'] = 'Hüperlõime';

$GLOBALS["lang"]['I have read the EULA.'] = 'Mi legis la EULA.';

$GLOBALS["lang"]['I hope this post has alleviated any concerns you have about Open-AudIT and Security. If you have any questions at all, please do not hesitate to reach out to us here at FirstWave. We are always happy to discuss your concerns and needs. And maybe if your question is not something I have addressed here, I can add it here for future users'] = 'Mi esperas, ke Se vi havas demandojn entute, bonvolu ne hezitu atingi ni.i tie. Ni † iam εojas disuti viajn zorgojn kaj bezonojn. Kaj se via demando ne estas io, kion mi traktis Tie, mi povas aldoni εin - Tie por estontaj uzantoj.';

$GLOBALS["lang"]['id'] = 'Tunniste';

$GLOBALS["lang"]['ID'] = 'ID';

$GLOBALS["lang"]['IF'] = 'SI';

$GLOBALS["lang"]['IMPORTANT'] = 'OLULIN';

$GLOBALS["lang"]['INPUTS'] = 'ENPUTS';

$GLOBALS["lang"]['IOS Version'] = 'Versio de IOS';

$GLOBALS["lang"]['IP'] = 'IP IP';

$GLOBALS["lang"]['ip'] = 'IP';

$GLOBALS["lang"]['IP Address'] = 'Adreso IP';

$GLOBALS["lang"]['IP Addresses'] = 'IP Adresoj';

$GLOBALS["lang"]['IP Last Seen'] = 'IP Viimati nähtud';

$GLOBALS["lang"]['IP Set By'] = 'IP';

$GLOBALS["lang"]['ISMS'] = 'ISMS estas';

$GLOBALS["lang"]['ISO 27001 only.'] = 'ISO 27001';

$GLOBALS["lang"]['Iceland'] = 'Íleo';

$GLOBALS["lang"]['icon'] = 'Ikono';

$GLOBALS["lang"]['Icon'] = 'Ikono';

$GLOBALS["lang"]['Icon and Text'] = 'Ikono kaj Teksto';

$GLOBALS["lang"]['Icon only, text only or icon and text.'] = 'Ikono nur, teksto nur kaptluseikono kaj teksto.';

$GLOBALS["lang"]['id_internal'] = 'Le Kansainvälenes';

$GLOBALS["lang"]['Id Internal'] = 'Le Kansainvälenes';

$GLOBALS["lang"]['id_number'] = 'Tunnistènero';

$GLOBALS["lang"]['Id Number'] = 'Tunnistènero';

$GLOBALS["lang"]['identification'] = 'Azonosító...';

$GLOBALS["lang"]['Identification'] = 'Azonosító...';

$GLOBALS["lang"]['Identify information assets'] = 'Azonosító';

$GLOBALS["lang"]['Identify interested parties and their requirements'] = 'Idegu rilatajn partiojn kaj iliajn postulojn';

$GLOBALS["lang"]['Identify key stakeholders and assign roles'] = 'Idegu esencajn concernatojn kaj designs rolojn';

$GLOBALS["lang"]['Identify the device(s) that are your exemplary, or <i>gold image</i> you want to compare similar devices against.'] = 'Idegu la aparaton (j) kiuj estas via modela, kaptlus <i>bildo</i> Vi volas kompari simparajn aparatojn kontrayn.';

$GLOBALS["lang"]['Identifying and evaluating security risks'] = 'Identigado kaj analizado de sekurecriskoj';

$GLOBALS["lang"]['If'] = 'Se';

$GLOBALS["lang"]['If a device is individually discovered using the <i>Discover Device</i> link on the device details page, we first check if this device has been discovered previously (by Discovery) and if so, use the discovery options from that scan. If it has not been previously discovered, we revert to the configuration item discovery_default_scan_option the settings.'] = 'Se aparato estas injalue malkovrita uzante la <i>Dispositivo de Malkovru</i> ligo sur la aparato detalpa fluido, ni unue kontrolas se tiu aparato estis malkovrita anta guide (de Discovery) kaj se tien, uzas la eltrova.o opciojn de tia skanado. Se εi ne estis anta.e malkovrita, ni revenas al konfiguracio objecttotrova.o _ deva...';

$GLOBALS["lang"]['If a new Org is created, an LDAP group name is automatically derived from the name. For example, if a new Org is created and is named Test, the corresponding LDAP group will be named open-audit_orgs_test.'] = 'Se nova Org estas kreita, LDAP grupnomo estas a limittomate deriva devinita de la nomo. Ekzample, se nova Org estas kreita kaj estas nomita Testo, la ekvivalenta LDAP- grupo estos nomita malferma- audit _ orgs _ testo.';

$GLOBALS["lang"]['If a port responds with filtered, should we consider it available.'] = 'Se ei reagoi per filterta, ni konsideru Γin disponebla.';

$GLOBALS["lang"]['If a port responds with open|filtered, should we consider it available.'] = 'L \'utility de l\' eau dans la production de l \'eau pottable et de l\' eau pottable doit être implagée.';

$GLOBALS["lang"]['If a remote device does not exist in the Open-AudIT selected devices, should we delete it from the external system.'] = 'Se malpreksima aparato ne ekzistas en la Open- Audit elektronitaj aparatoj, ni devus forigi εin de la ekstera sistemo.';

$GLOBALS["lang"]['If an Open-AudIT device has been changed, should we update the external system.'] = 'Se Open- Audit- aparato estis дальний, ni devus ';

$GLOBALS["lang"]['If an Open-AudIT device is not on the external system, should we create it.'] = 'Se Open Audit- aparato ne estas sur la ekstera sistemo, ni devus krei εin.';

$GLOBALS["lang"]['If an agent reports its primary IP is in this subnet, perform the actions.'] = 'Se agento raportas sian primaran IP estas en tiu subreto, elfaras la agojn.';

$GLOBALS["lang"]['If any of these (comma seperated, no spaces) ports are detected, assume SSH is running on them and use them for auditing. No need to add this port to the Custom TCP ports - it will be added automatically.'] = 'Se iu el tiiuj (komma seeteraj, neniuj spacoj) hasnoj estas detektititaj, supozas SSH kuris sur ilin kaj uzas ilin por reviziado. Neniu bezono aldoni tiun hasnon al la Custom TCP- havenoj - εi estos aldonita a limittomate.';

$GLOBALS["lang"]['If no operator is specified, the default is =. Properties should be fully qualified - ie, devices.hostname (not just hostname).'] = 'Se neniu funkciigisto estas prezigita, la deva... Trajtoj devus esti plène kvalifikitaj - teach, aparatoj. petefenyimi (ne ';

$GLOBALS["lang"]['If no value is present, supply this value. EG: for system.nmis_group / configuraion.group we use'] = 'Se neniu Valoro... Estas... EG: por sistemo.nmis _ group / konfiguraion. Grupo kiun ni uzas';

$GLOBALS["lang"]['If set, holds a JSON array of specific device columns this user has chosen to see, other than the configuration default.'] = 'Se aro, tenas JSON aron de specififaj aparatokolonoj tiu uzanto elektis vidi, krom la konfiguraciodeva.';

$GLOBALS["lang"]['If the OS Family (as reported by the device) contains this item, pass.</li>'] = 'Se la Os Famille (kiel rastite per la aparato) enhavas tiun objectton, enirpermesilon.';

$GLOBALS["lang"]['If the Open-AudIT Server has Collectors reporting to it, an additional drop down is provided. You can select this to specify which Collector the task should run on. Only Discovery tasks are supported for Collectors.'] = 'Se la Open- Audit- Servilo havas kolektantojn raportantajn al εi, kroma goto malsupren estas disponigita. L \'objectif est d\' améliorer la qualité de l \'eau et de l\' eau. Nur Discover -taskoj estas apogitaj por kolektantoj.';

$GLOBALS["lang"]['If the agent OS family (case insensitive) contains this string, perform the actions.'] = 'Se la agento Os familio (kazo imuna) enhavas tiun kordon, elfaras la agojn.';

$GLOBALS["lang"]['If the binary is not found in either of these locations, a warning message will be displayed in the installer.'] = 'Se la binara ne estas trovita en a. de tiauj lokoj, protecanta mesa liquidato estos elmontrita en la installilo.';

$GLOBALS["lang"]['If the following conditions are met:<br><ul><li>a Role has an assigned ad_group</li><li>an Org has an assigned ad_group</li><li>an LDAP Server has use_roles set to y</li><li>a user exists in LDAP (be it Active Directory or OpenLDAP) and is in the assigned ad_groups</li></ul>That user can log on to Open-AudIT without an account in Open-AudIT needing to be created. Open-AudIT will query the LDAP in question and if the user is in the required groups but not in Open-AudIT, their user attributes (name, full name, email,  roles, orgs, etc) within Open-AudIT will be automatically populated and they will be logged on.<br> <br>'] = 'Se la sekvaj kontircaoj estas rencontitaj:<br/><ul><li>Rolo havas asignitaan ad _ group</li><li>Groupe ad _ ad _ d "Org hava asignitaan</li><li>LDAP Servilo havas la uzon de yroles</li><li>Uzanto eksistas en LDAP (estu... i Aktiva Adresaro a epäillyt OpenLDAP) kaj estas en la asignita ad _ grupoj.</li></ul>Tiu uzanto povas ensaluti al Open- Audit sen raporto en Open- Audit- bezono esti kreita. Open- Audit demande la LDAP concerne kaj se la uzanto estas en la postulataj grupoj sed ne en Open- Audit, iliaj uzant atinattoj (nomo, plena nomo, retpo registrato, roloj, orgoj, ktp.) ene de Open- Audit estos a skeptomate lo.<br/> <br/>';

$GLOBALS["lang"]['If the local field is true (bool) or y (string) or Y (string) or 1 (integer) then set the external data to 1.'] = 'Se la loka kapo estas vera (bool) a Kaptlus y (apretnuro) a kaptlus Y (apretnuro) a katlus 1 (taisarv) tiam metis la eksterajn datenojn al 1.';

$GLOBALS["lang"]['If the local field is true (bool) or y (string) or Y (string) or 1 (integer) then set the external data to y.'] = 'Se la loka kapo estas vera (bool) a';

$GLOBALS["lang"]['If the primary IP (as reported by the device) is in this subnet, pass.</li>'] = 'Se la primara IP (kiel raportite per la aparato) estas en tiu subreto, pasas.';

$GLOBALS["lang"]['If the user account does not actually exist within Open-AudIT and <code>use_authorisation</code> is set, the user will be created. If it does exist, details such as email, full name, etc will be populated.'] = 'Se la uzantkonto ne ekzistas ene de Open- Audit kaj <code>use_authorisation</code> La uzanto estos kreita. Se liukoinen ekzistas, detaloj kiel ekzample retpo divonato, plena nomo, ktp.';

$GLOBALS["lang"]['If the user either does not have valid credentials or is not in at least one Open-AudIT Role and Group (when using <code>use_authorisation</code>), Open-AudIT will fallback to using local Open-AudIT user details and attempt authentication and authorization there. Failing that, the user will be denied access.'] = 'Se la uzanto a défaut ne havas validajn akredita.ojn a défaut ne estas en almenaveunu Open- Audit- rolo kaj grupo (kiam uzite fare de homoj). <code>use_authorisation</code>Open- Audit- falos por uzi lokajn Open- Audit uzantdetalojn kaj proje konfirman kaj approbon huulet. Malsukcesante ke, la uzanto estos neita aliro.';

$GLOBALS["lang"]['If the user logging on to Open-AudIT does not have the access to search LDAP, you can use another account which does have this access.'] = 'Se la uzanto registradanta al Open- Audit ne havas la aliron ser planadoi LDAP, vi povas uzi alpha raporton kiu havas tiun aliron.';

$GLOBALS["lang"]['If the user logging on to Open-AudIT does not have the access to search OpenLDAP, you can use another account which does have this access. Use the dn_account and dn_password to configure this.'] = 'Se la uzanto registradanta al Open- Audit ne havas la aliron ser planadoi OpenLDAP, vi povas uzi alphanien raporton kiu havas tiun aliron. Uzu la dn _ account kaj dn _ salasana por muoto.';

$GLOBALS["lang"]['If the value is not set, the current timestamp will be used.'] = 'Se la valoro ne estas metita, la nuna tempostapo estas uzita.';

$GLOBALS["lang"]['If the value is set, that timestamp value will be used.'] = 'Se la valoro estas metita, tiu temmplampvaloro estas uzita.';

$GLOBALS["lang"]['If this change does not work for you, all is not lost. We have added a configuration item (set to n by default, so it will use not this new option out of the box) called discovery_use_org_id_match. If you change it to y then the OrgID assigned to the device by the discovery will be used in the relevant match rules.'] = 'Se tiu ť антоние ne funkcias por vi,... Ni aldonis konfiguracion objectto (set al n defa.lte, tien ke .i ne uzos tiun novan opcion el kesto) nomita Discovery _ use _ org _ id _ - mat círregio. Se vi îавани нели ний al y tiam la OrgID asignita al el aparato per la eltrova.o estos uzita en la medifaj mat.oreguloj.';

$GLOBALS["lang"]['If this many minutes (or more) have passed since the server last saw the device, pass.</li>'] = 'Se tio multaj mutoj (a... pli) pasis ekde la servilo la la aparaton, pasas.';

$GLOBALS["lang"]['If this many or more minutes have passed since the device contacted the server, perform the actions.'] = 'La mise en place d \'un pli da minutoj pasis soutenu. ar la aparato kontaktis la servilon, elfaras la agojn.';

$GLOBALS["lang"]['If this occurs then the issue you are seeing is related to the table control being used on the webpage. It only stores in memory the state of the check boxes for the current page being viewed. If you make selections, then page forward/back those selections will be lost. You can, however, accomplish what you want by expanding the number of devices shown on each page. In the top-left corner is a drop-down labeled “records per page”; use this to expand the number of entries displayed until you see all you want to select for Bulk Edit.'] = 'Se tio okazas tiam la ki temoun vidas estas rilatita al la tablokontrolo estanta uzita sur la retpa graduateo. Se vi faras selektadojn, tiam paεo anta... Vi povas, aliflanke, plenumi pion vi volas per vastagado de la nombro da aparatoj montritaj sur... iu pa gradualo. En la pint- maldekstra angulo estas guto- malsupren etikedis "diskojn per pa';

$GLOBALS["lang"]['If we detect the san management software, should we run an auto-discover before the query.'] = 'Se ni detektas la san administrésoftvaron, ni devus kuri a skepto-eltrova.';

$GLOBALS["lang"]['If you add a Location Type, add those icons to'] = 'Loksspecton, aldonu tiujn ikonojn al';

$GLOBALS["lang"]['If you add a device type, to display the associated icon you will have to manually copy the .svg formatted file to the directory'] = 'Se vi aldonas paratosecon, por elmontri la rilatan ikonon vi des mane kopii la .svg formatis dosieron al la adresaro';

$GLOBALS["lang"]['If you are a supported FirstWave customer,a couple of items will make helping your easier. Open a support ticket with FirstWave and attach the logfile. Also include the output from the Support button on the upper right of the'] = 'Se vi estas apogita unua kliento, kelkaj eroj heltos al via pli fasila. Malfermu helpbileton kun FirstWave kaj alkro previstoas la tagdosieron. Anka';

$GLOBALS["lang"]['If you are a supported customer and open a support ticket with FirstWave, please attach these files.'] = 'Se vi estas apogita kliento kaj malfermas helpbileton kun FirstWave, bonvolu alkro previtoi tiujn dosierojn.';

$GLOBALS["lang"]['If you are having issues with Google Maps API keys or your company does not have access to create Google Maps API keys, please contact the FirstWave support team.'] = 'Se vi havas problemojn kun Google Maps API рlosiloj aver ffirmao ne havas alron krei Google Maps AP- divertalosilojn, bonvolu kontakki la FirstWave subtenseamon.';

$GLOBALS["lang"]['If you are on Windows or your NMIS server is remote, you will need to supply the URL, username and password to access that server.'] = 'Se vi estas sur Fenestroj a';

$GLOBALS["lang"]['If you are on a decent broadband or ethernet connection, I would recommend always using -T4 (Aggressive). Some people love -T5 (Insane) though it is too aggressive for my taste. People sometimes specify -T2 (Polite) because they think it is less likely to crash hosts or because they consider themselves to be polite in general. They often do not realize just how slow -T2 really is. Their scan may take ten times longer than a default scan. Machine crashes and bandwidth problems are rare with the default timing options -T3 (Normal) and so I normally recommend that for cautious scanners. Omitting version detection is far more effective than playing with timing values at reducing these problems.'] = 'Se vi estas sur deka gradidabendo a defect etero ligo, mi remomendus Čiam uzi T4 (Agres). Kelkaj homoj amas - T5 (Insane) kvankam liquiciulici estos tro agreesema por mia gusto. Homoj foje prezigas Ili overse ne ekkomprenas ekzakte kiom malladrapa - T2 vere estas. Ilia skanado povas preni dek fojojn pli lowe ol deva guidlta skanado. Ma apretinkra apretoj kaj bendolarεproblemooj estas raraj kun la dea guidtlataj tempigelektoj - T3 (normaalne) kaj tien mi normale rekomendastion por singardaj skaniloj. Uzanta versio detekto estas multe pli efika ol ludado kun tempigvaloroj Reduktado de tiauj problemoj.';

$GLOBALS["lang"]['If you are running a RedHat or Centos system and you have upgraded Nmap, please reset the SUID on the binary by'] = 'Se vi prizorgas RedHat a Kaptlus Centos- sistemon kaj vi εisdatigis Nmap, bonvolu remomencigi la SUID sur la binara per';

$GLOBALS["lang"]['If you are running an Open-AudIT server on Linux, this does not affect you.'] = 'Se vi prizorgas Open- Audit- servilon sur Linukso, tio ne fluas vin.';

$GLOBALS["lang"]['If you are using Open-AudIT on Windows or if your NMIS server is not on your Open-AudIT Server (in the case of some Linux installs), you will need to supply access credentials and a URL to the remote NMIS - but that is all! Yes - Integrations between NMIS and Open-AudIT even work with Windows based Open-AudIT now!'] = 'Se vi uzas Open- Audit sur Fenestroj a default se via NMIS- servilo ne estas sur via Open- Audit- Servilo (en la kazo de kelkaj Linukso- secreta.oj), vi bezonos maksa alirkreditaojn kaj URL al la malpreksima NMIS - sedtio estas. Jes, integriγoj inter NMIS kaj Open- Audit e recommendar funkcias kun Fenestroj bazigis Open- Audit nunn!';

$GLOBALS["lang"]['If you choose a Collector, it will be scheduled to execute on the next 5 minute boundary.'] = 'Se vi elektas kolektanton, εi estos planita por efektivigi sur la veine 5 minuuttia limuzin.';

$GLOBALS["lang"]['If you do normally set devices_assigned_to_org and the configuration item is enabled, then the OrgID will be used to further refine the match.'] = 'Se vi normale metis aparatojn _ asited _ to _ org kaj la konfiguraciobjektoj estas ebligitaj, tiam la OrgID estos utiligita por plue rafini la mat planonon.';

$GLOBALS["lang"]['If you do not normally set devices_assigned_to_org, then it will have no effect. We only check using the OrgID if it has been set in discovery (or manually in an audit script) and enabled in the configuration.'] = 'Il n \'y a pas d\' aparatojn normal, tiam εi havos neniun efikon. Ni nur kontrolas uzi la OrgID se εi estis metita en eltrova.o (epäilty mane en reviziomanuskripto) kaj ebligis en la konfiguracio.';

$GLOBALS["lang"]['If you enable the configuration item, use discovery to assign an Org and then subsequently change the OrgID of a device after discovery then you will likely have a new device created the next time the discovery runs. In this instance, you should probably just unset devices_assigned_to_org before running subsequent discoveries. This is because (in this instance) you have told Open-AudIT <i>these devices from this discovery belong to Org X<i>, but then changed the Org of the device. You have changed the stored devices information. In this case - there is no no longer a device belonging to Org X, so we create a new one.'] = 'Se vi rajtigas la konfiguracion, uzu eltrova... Org kaj tiam poste шаннний la OrgID de aparato post eltrova.o tiam vi ver apretajne havos novan aparaton kreis la venontan fojon la eltrova.o kuris. En tiu kazo, vi devus ver diverraajne nur neselektitaj aparatoj... asignis _ to _ org anta... prizorgado de postaj eltrova... Tio estas clarar (en tiu kazo) vi rakontis al Open- Audit <i>Tiuja paratoj de tiau eltrova.o apartenas al Org X<i>Sed tiam la Org de la aparato. La stokitajn aparatojn informato. En tia kazo, ekzistas jam ne aparato apartenanta al Org X, tiel ke ni kreas novan.</i></i>';

$GLOBALS["lang"]['If you have Anti-Virus software running, allowing the services of Opmantek (omkd), Apache (apache2.2) and MySQL (mysql) to auto start and run is essential. These services are used by Open-AudIT. You should only need to do this once. If your Anti-Virus program keeps prompting you about Open-AudIT, please post to the forums or send an email to support with the name and version of your Anti-Virus software.'] = 'Se vi havas Anti- Virus- softvaron kurantan, perméante al la servoj de Opmantek (omkd), Apache (apache2.2) kaj MySQL (mysql) al a supporttokomenco kaj kuri estas quenca. Tiuj servoj estas uzitaj fare de Open- Audit. Il y a un problème. Se via Anti- Virus- programmo observatas vin pri Open- Audit, bonvolu po ocilato al la forumej a retpo divonaton al subteno kun la nomo kaj versio de via Anti- Virus- softvaro.';

$GLOBALS["lang"]['If you have working credentials, you can expect the full amount of information possible.<br><br>Obviously, the best way to use Open-AudIT is to have working credentials for the devices being discovered (be they WMI, SSH, or SNMP credentials).<br><br>We also have a page on auditing without credentials.'] = 'Se vi laboras akredita.ojn, vi povas atendi la pennan kvanton de informaoj ebla.<br/><br/>Evidente, la plei bona maniero uzi Open- Audit murtaa havi labourakredita.ojn por la aparatoj estantaj malkovrita (estu ili WMI, SSH, kaptlus SNMP- akredita.oj).<br/><br/>Ni anka... havas pa... on sur revizio sen akredita...';

$GLOBALS["lang"]['If you include the \"id\" field <strong>and</strong> set it with a number, that item will be updated rather than created.'] = 'Se vi inkludas la "id" kampon <strong>Kaj</strong> Kun nombro, tiu objekto estos εisdatigita mieluummin ol kreita.';

$GLOBALS["lang"]['If you need to configure Active Directory access, you can usually use the example of <code>cn=Users,dc=your,dc=domain,dc=com</code> for your <code>base_dn</code>. There is no need to set <code>user_dn</code>.'] = 'Se vi waures agordi Aktivan Adresaralir, vi povas kutime uzi la ekzemplon de <code>cn=Users,dc=your,dc=domain,dc=com</code> öntés <code>base_dn</code>. Necesas starigi <code>user_dn</code>.';

$GLOBALS["lang"]['If you need to configure OpenLDAP access for your users and a given users access DN is normally <code>uid=username@domain,cn=People,dc=your,dc=domain,dc=com</code> then you should set <code>base_dn</code> to <code>dc=your,dc=domain,dc=com</code> and <code>user_dn</code> to <code>uid=@username@@domain,cn=People</code>. The special words <code>@username</code> and <code>@domain</code> will be replaced by the login details provided by your user on the login page.'] = 'Se vi wasures agordi OpenLDAP- aliron por viaj uzantoj kaj anta skeptita uzantoj aliras DN estas normale <code>uid=username@domain,cn=People,dc=your,dc=domain,dc=com</code> Tiam vi devus agordi <code>base_dn</code> Gépkocsi <code>dc=your,dc=domain,dc=com</code> Kaj <code>user_dn</code> Gépkocsi <code>uid=@username@@domain,cn=People</code>. La specialaj vortoj <code>@username</code> Kaj <code>@domain</code> Estas anstata defligita per la login detaloj disponigitaj fare de via uzanto sur la ensalutpa fluido.';

$GLOBALS["lang"]['If you run discovery upon a subnet that the Server (or Collector) is directly installed on, you can expect the following for responding devices'] = 'Se vi kuras malkovron sur subreto kiun la Servilo (katlusega kolktanto) estas rekte secretita, vi povas atendi la sekvantan por responseado de aparatoj.';

$GLOBALS["lang"]['If you run discovery upon a subnet that your Server (or Collector) is not directly installed on, you can expect the following for responding devices'] = 'Se vi kuras malkovron sur subreto kiun via Servilo (kahtlusega kolektanto) ne estas rekte instalia, vi povas atendi la sekvantan por respontaj aparatoj.';

$GLOBALS["lang"]['If you select a List type, an additional field will appear called Values. You should put a comma separated list of selectable values here. These will display in a dropdown box whenever the field is edited.'] = 'Se vi elektas Lista tipon, kroma kapo aperos nomita Valoroj. Vi devus meti komon apartigita Lista de fajnaj valoroj clari huulet. Tiuj elmontros en goto- kesto kiam la kampo estas redaktita.';

$GLOBALS["lang"]['If you set the values for'] = 'Se vi metis la Valojn';

$GLOBALS["lang"]['If you want to force your Agents to use a particular configuration, you can supply the ID of the agents entry to use, as below (replace $id with the number of the Agents entry). When this Agent is installed, it will check-in with the sevrer and <strong>only</strong> check that one individual Agent entrys attributes (tests and actions). This may be useful if you are an MSP - create an Agents entry for a particular customer and have their devices all use this entry, which assigns them to an Org and Location.'] = 'Se vi volas devigi viajn agentojn uzi specialian konfiguracion, vi povas regulzi la ID de la agentoj eniro por uzi, kiel malsupre (anstata spectigi id kun la nombro da la Agentoj eniro). Kiam tiu agento estas secretita, εi kontraus kun la sevranto kaj <strong>Nur</strong> La plupart des pays de l \'Europe de l\' Est sont des pays de l \'Est. Tio povas esti utila se vi ces MSP - krei Agents- eniro por speciala kliento kaj havas iliajn aparatojn..';

$GLOBALS["lang"]['If you wish to dig in and customize the Integration, click the Advanced button (and try not to be overwhelmed!).'] = 'Se vi deziras fosi en kaj personecigi la Integriγo, klaki la Altnivelan butonon (Kaj provision isti superfortita).';

$GLOBALS["lang"]['If you wish to run a Discovery on an externally provided device, select the option and when the Integration is created, so s the Discovery.'] = 'Se vi deziras kuri Discovery sur ekstere disponigita aparato, selektas la opcion kaj kiam la Integri rupturao estas kreita, tien s la Discovery.';

$GLOBALS["lang"]['If you would like to use the script outside of Discovery we have created another endpoint called <i>scripts</i>. See the documentation'] = 'Se vi раtus uzi la manikripton ekstere de Discovery, ni kreis alfin finpunkton nomitan <i>Manuskriptoj</i>. Vidou la dokumentadon';

$GLOBALS["lang"]['If your user does not have <i>Run as Administrator</i> rights, they can still download the agent (first command above) and run it to submit an audit as below. It will be a one-off audit without the Agent being installed or scheduled.'] = 'Se via uzanto ne havas <i>Kiel alkalmazás</i> Ili dalucre povas el apretuti la agenton (unua kommundo supre) kaj prizorgi εin por alsendi revizion kiel malsupre.. i estas unufoja revizio sen la agento estanta instalia a squept planita.';

$GLOBALS["lang"]['ifadminstatus'] = 'Szaudminstatus';

$GLOBALS["lang"]['Ifadminstatus'] = 'Szaudminstatus';

$GLOBALS["lang"]['iflastchange'] = 'La dernière fois';

$GLOBALS["lang"]['Iflastchange'] = 'La dernière fois';

$GLOBALS["lang"]['Ignore Invalid SSL'] = 'Invalida SSL';

$GLOBALS["lang"]['Ignored'] = 'Nescio';

$GLOBALS["lang"]['image'] = 'Bildo';

$GLOBALS["lang"]['Image'] = 'Bildo';

$GLOBALS["lang"]['Images'] = 'Bildoj';

$GLOBALS["lang"]['impact_availability'] = 'Efiko de la avaseblo';

$GLOBALS["lang"]['Impact Availability'] = 'Efiko de la avaseblo';

$GLOBALS["lang"]['impact_confidentiality'] = 'Efiko de la konfidenco';

$GLOBALS["lang"]['Impact Confidentiality'] = 'Efiko de la konfidenco';

$GLOBALS["lang"]['impact_integrity'] = 'Efiko';

$GLOBALS["lang"]['Impact Integrity'] = 'Efiko';

$GLOBALS["lang"]['Implement selected controls and procedures'] = 'Kontroli elektitajn kontrolojn kaj procedurojn';

$GLOBALS["lang"]['Implementation'] = 'Efektivigo';

$GLOBALS["lang"]['implementation_notes'] = 'Efektivigo Nota';

$GLOBALS["lang"]['Implementation Notes'] = 'Efektivigo Nota';

$GLOBALS["lang"]['Import'] = 'Tuo';

$GLOBALS["lang"]['Import Example Data'] = 'Gravaj datenoj';

$GLOBALS["lang"]['Import multiple {collection} using a CSV.'] = 'Importa multobla {komiksi graduateo} uzanta CSV.';

$GLOBALS["lang"]['improvement_opportunities'] = 'Plibonigo võimalud e';

$GLOBALS["lang"]['Improvement Opportunities'] = 'Plibonigo võimalud e';

$GLOBALS["lang"]['Improves business continuity and resilience'] = 'Plibonigas komercan kontextcon kaj rezistecon';

$GLOBALS["lang"]['In'] = 'En';

$GLOBALS["lang"]['In a second tab or window go to your OKTA console and click <i>Create App Integration</i>.'] = 'En dua klako a Kaptlustatav fenestro iras al via OKTA- kondolo kaj klako <i>Krei äpp Integri</i>.';

$GLOBALS["lang"]['In a second tab or window sign-on to your'] = 'En dua klako a Kaptlustus fenestrosigno al via';

$GLOBALS["lang"]['In my personal opinion, the best way to find and audit every single item on your network is a Seed Discovery for each subnet, restricted to that subnet (using credentials). Seed Discoveries use switch, router and computer MAC Address tables to not miss a single device. If it is connected to the network and uses TCP/IP, a switch/router/computer has to know it is there - thats just how TCP/IP works. Combine that with custom TCP and/or UDP ports and you should then be able to determine the device type as well. But thats just my personal preference'] = 'En mia persona opinio, la plei bona maniero trovi kaj revizii Seemmned Discoveries uzas ð антельна, italon kaj komputil MAC dirección tablojn por ne maltrafi ununuran aparaton. Se consiglioi estasligita al reto kaj uzas TCP / IP, grialtilo / router / komputio des sci ke εi estas tie Kombinuation kun kutimo TCP kaj / a. Sed tio estas nur mia persona prefero';

$GLOBALS["lang"]['In order for Open-AudIT to be able to apply user permissions on items, we mandate the user of <code>WHERE @filter</code>. If you do not use this format, the queryCreateForm will throw a warning. Only users with the Admin role are permitted to create queries that lack this attribute and even then, only after the configuration item for <i>advanced_queries</i> has been enabled.'] = 'Por Open- Aud IT povi apliki uzantpermesojn sur eroy, ni postulas la uzanton de <code>WHERE @filter</code>. Se vi ne uzas tiun forman, la questioneForm... Nur uzantoj kun la Admino estas licaj krei demandeojn kiuj mankas tiu atantia to kaj e lluvia tiam nur post la konfiguracioobjekto por <i>öntsük le a borítékot</i> Becslések szerint ebligita.';

$GLOBALS["lang"]['In order to enable Google Maps you will need to a Google API Key follow this link and log in with your Google account,'] = 'Por ebligi Google Maps vi bezonos API Google ';

$GLOBALS["lang"]['In order to use the Azure Rest API, you will need to create an Azure Active Directory Application that is used for authentication.'] = 'Por uzi la Azure Rest API, vi bezonos krei Azure Aktiva Adresaro kiu estas uzata por konfirmo.';

$GLOBALS["lang"]['In order to use this functionality, it must be enabled in the configuration - click'] = 'Por uzi tiun funkciecon, εi bruts esti ebligita en la konfiguracio - klako';

$GLOBALS["lang"]['In the (comma seperated) list'] = 'En la (komma conseratud) Listea';

$GLOBALS["lang"]['In the case of <code>in</code> and <code>notin</code>, you should enclose the values in round brackets and separate them using a comma (just a comma, not a comma, then space).<br><br>With these operators you can filter quite comprehensively.<br><br>When you add data and filter on multiple columns, those columns are combined using <strong>AND</strong>. You cannot filter using an <strong>OR</strong> condition. With the inclusion of <code>notin</code>, you should be able to get most searches working. And for those that do really require unsupported and complex selections, you can always write an actual query.'] = 'En la kazo de <code>in</code> Kaj <code>notin</code>Vi devus fermi la valorojn en rondaj krampoj kaj apartigi ili uzante komon (nur komo, ne komo, tiam spaco).<br/><br/>Kun tiau funkciigistoj vi povas filti tre amplekse.<br/><br/>Kiam vi aldonas datenojn kaj instalilon sur multoblaj kolonoj, tiaj kolonoj estas Kombintaj uzante <strong>Kaj Kaj</strong>. L \'Union européenne <strong>a</strong> C \'est Kandičo. Kun la inkludo <code>notin</code>L \'objectif est de faire en sorte que l\' ensemble de la population soit en mesure d \'attecindre ses objectifs. Kaj por tiauj kiuj vere postulas nepruvitajn kaj kompleksajn selektadojn, vi Čiam povas skribi faktan atendon.';

$GLOBALS["lang"]['In the case where we store several fields (usually in JSON format) inside a BIGTEXT MySQL field (eg: credentials.credentials - the credentials column in the credentials table), you should use the format'] = 'En la kazo kie ni stokas plurajn kampjn (kutime en JSON formaat) ene de BIGTExT MySQL kampo (ekz. akredita.oj). La akredita';

$GLOBALS["lang"]['In the command prompt shell, navigate to the download directory (likely <code>cd Downloads</code>).'] = 'En la komanda prompta grielo, navigi al la sujetauta adresaro (ver curajne) <code>cd Downloads</code>)';

$GLOBALS["lang"]['Inactive'] = 'iniciata';

$GLOBALS["lang"]['Include'] = 'Inkluda';

$GLOBALS["lang"]['Incomplete'] = 'En kompleta';

$GLOBALS["lang"]['Index'] = 'Indikso de Indikso';

$GLOBALS["lang"]['India'] = 'Hindio';

$GLOBALS["lang"]['Indonesia'] = 'Gránátalma';

$GLOBALS["lang"]['Indonesian'] = '[Nincs magyar neve]';

$GLOBALS["lang"]['Info'] = 'Tietoja';

$GLOBALS["lang"]['Information only.'] = 'Informátor.';

$GLOBALS["lang"]['Informational'] = 'Információ';

$GLOBALS["lang"]['initial_size'] = 'Tamaño de Komenca';

$GLOBALS["lang"]['Initial Size'] = 'Tamaño de Komenca';

$GLOBALS["lang"]['Initial login credentials are'] = 'Komencaj ensalutaj akredita';

$GLOBALS["lang"]['Initiation'] = 'Iniciato';

$GLOBALS["lang"]['inode'] = 'Icsomópont';

$GLOBALS["lang"]['Inode'] = 'Icsomópont';

$GLOBALS["lang"]['Input'] = 'Entrée';

$GLOBALS["lang"]['Input Type'] = 'Inputa Tipo';

$GLOBALS["lang"]['inputs'] = 'Entrée';

$GLOBALS["lang"]['Inputs'] = 'Entrée';

$GLOBALS["lang"]['Insane'] = 'Ensane';

$GLOBALS["lang"]['Insert a new {collection} entry.'] = 'Addente novan eniron.';

$GLOBALS["lang"]['Insert example data and discover all that Open-AudIT can tell you.'] = 'Addenaj eczemoj datennoj kaj malkovras ke Open- Audit povas rakonti al vi.';

$GLOBALS["lang"]['Insert your Purchased license Key'] = 'Enmetu vian Aclaretita permesilo';

$GLOBALS["lang"]['install'] = 'Instalgio';

$GLOBALS["lang"]['Install'] = 'Instalgio';

$GLOBALS["lang"]['install_date'] = 'Indili Daton';

$GLOBALS["lang"]['Install Date'] = 'Indili Daton';

$GLOBALS["lang"]['install_directory'] = 'Instala';

$GLOBALS["lang"]['Install Directory'] = 'Instala';

$GLOBALS["lang"]['Install OpenScap if required'] = 'Instali Scap se nésterites';

$GLOBALS["lang"]['install_source'] = 'Instali Fonto';

$GLOBALS["lang"]['Install Source'] = 'Instali Fonto';

$GLOBALS["lang"]['Install Support'] = 'Instali Subteno';

$GLOBALS["lang"]['installed_by'] = 'Instalita';

$GLOBALS["lang"]['Installed By'] = 'Instalita';

$GLOBALS["lang"]['installed_on'] = 'Instalita';

$GLOBALS["lang"]['Installed On'] = 'Instalita';

$GLOBALS["lang"]['Installing'] = 'Létesítmény';

$GLOBALS["lang"]['Installing on Linux'] = 'Systèmes de gestion en Linukso';

$GLOBALS["lang"]['Installing on MacOS'] = 'Instali en MacOS';

$GLOBALS["lang"]['Installing on Windows'] = 'Instali sur Vindozo';

$GLOBALS["lang"]['instance'] = 'Tuomioistuine';

$GLOBALS["lang"]['Instance'] = 'Tuomioistuine';

$GLOBALS["lang"]['instance_ident'] = 'Azonosító';

$GLOBALS["lang"]['Instance Ident'] = 'Azonosító';

$GLOBALS["lang"]['instance_options'] = 'L \'Opcioj';

$GLOBALS["lang"]['Instance Options'] = 'L \'Opcioj';

$GLOBALS["lang"]['instance_provider'] = 'Todistaja de secretación';

$GLOBALS["lang"]['Instance Provider'] = 'Todistaja de secretación';

$GLOBALS["lang"]['instance_reservation_ident'] = 'Cour de cassation Tunniste';

$GLOBALS["lang"]['Instance Reservation Ident'] = 'Cour de cassation Tunniste';

$GLOBALS["lang"]['instance_state'] = 'Tuomioistuine';

$GLOBALS["lang"]['Instance State'] = 'Tuomioistuine';

$GLOBALS["lang"]['instance_tags'] = 'Groupe asiatique';

$GLOBALS["lang"]['Instance Tags'] = 'Groupe asiatique';

$GLOBALS["lang"]['instance_type'] = 'Tipo de secondación';

$GLOBALS["lang"]['Instance Type'] = 'Tipo de secondación';

$GLOBALS["lang"]['Integer'] = 'Täisarvu';

$GLOBALS["lang"]['Integration'] = 'Összesen';

$GLOBALS["lang"]['integrations'] = 'Integriεoj';

$GLOBALS["lang"]['Integrations'] = 'Integriεoj';

$GLOBALS["lang"]['integrations_id'] = 'Integri la identilojn';

$GLOBALS["lang"]['Integrations ID'] = 'Integri la identilojn';

$GLOBALS["lang"]['integrations_log'] = 'Italyprovince. unit description in lists';

$GLOBALS["lang"]['Integrations Log'] = 'Italyprovince. unit description in lists';

$GLOBALS["lang"]['Integrations can be scheduled as desired. This is left to the user.'] = 'Integri.o povas esti planita kiel dezirite. Tio estas lasita al la uzanto.';

$GLOBALS["lang"]['Integrations can be scheduled as per Discoveries, Queries, et al.'] = 'Integrij povas esti planitaj kiel per Eltrova.oj, Queries, et al.';

$GLOBALS["lang"]['Interactive Dashboards'] = 'Interagaj juhtpanélidad';

$GLOBALS["lang"]['Interactive dashboards provide instant visibility into the status of network inventory allowing IT teams to spot newly discovered devices and unusual device behaviour at a glance.'] = 'Interagaj da sorttabuloj disponigas tujan videblecon en la statuson de sendostacia stokregistryo permesanta al IT- teamoj ekvidi lastatempe malkovritajn aparatojn kaj nekutiman aparaton Rigardo.';

$GLOBALS["lang"]['interface'] = 'Gépkocsi';

$GLOBALS["lang"]['Interface'] = 'Gépkocsi';

$GLOBALS["lang"]['interface_id'] = 'Identificación Interviza Criterio';

$GLOBALS["lang"]['Interface ID'] = 'Identificación Interviza Criterio';

$GLOBALS["lang"]['interface_type'] = 'Lides Tipo';

$GLOBALS["lang"]['Interface Type'] = 'Lides Tipo';

$GLOBALS["lang"]['Internal'] = 'Interna Interna';

$GLOBALS["lang"]['Internal Audit'] = 'Auditeur international';

$GLOBALS["lang"]['Internal Audit & Review'] = 'Auditoría Interna - Revizio';

$GLOBALS["lang"]['Internal Field Name'] = 'Interna kamponomo';

$GLOBALS["lang"]['Internal ID'] = 'Henkilótunnus';

$GLOBALS["lang"]['Internal JSON array of valid access tokens for this user.'] = 'Interna JSON aro de valida aliro al ';

$GLOBALS["lang"]['Introduction'] = 'Enkonduko';

$GLOBALS["lang"]['invoice'] = 'La fakturo';

$GLOBALS["lang"]['Invoice'] = 'La fakturo';

$GLOBALS["lang"]['invoice_id'] = 'Személyazonosító igazolvány száma: de Inkluzivas';

$GLOBALS["lang"]['Invoice ID'] = 'Személyazonosító igazolvány száma: de Inkluzivas';

$GLOBALS["lang"]['invoice_item'] = '→ Eventoj:';

$GLOBALS["lang"]['Invoice Item'] = '→ Eventoj:';

$GLOBALS["lang"]['ios_version'] = 'Versio de Ios';

$GLOBALS["lang"]['Ios Version'] = 'Versio de Ios';

$GLOBALS["lang"]['ip_address_external_a'] = 'Dirección de Ip Ekstera A';

$GLOBALS["lang"]['Ip Address External A'] = 'Dirección de Ip Ekstera A';

$GLOBALS["lang"]['ip_address_external_b'] = 'Ip Adreso Ekstera B';

$GLOBALS["lang"]['Ip Address External B'] = 'Ip Adreso Ekstera B';

$GLOBALS["lang"]['ip_address_internal_a'] = 'Direction générale de l \'environnement';

$GLOBALS["lang"]['Ip Address Internal A'] = 'Direction générale de l \'environnement';

$GLOBALS["lang"]['ip_address_internal_b'] = 'Nemzetközi szervezetek B';

$GLOBALS["lang"]['Ip Address Internal B'] = 'Nemzetközi szervezetek B';

$GLOBALS["lang"]['ip_all_count'] = 'Ip Kaikki luvut';

$GLOBALS["lang"]['Ip All Count'] = 'Ip Kaikki luvut';

$GLOBALS["lang"]['ip_audited_count'] = 'Ip Cuenta auditada';

$GLOBALS["lang"]['Ip Audited Count'] = 'Ip Cuenta auditada';

$GLOBALS["lang"]['ip_discovered_count'] = 'Malkovris kalkulon';

$GLOBALS["lang"]['Ip Discovered Count'] = 'Malkovris kalkulon';

$GLOBALS["lang"]['ip_enabled'] = 'Ip luvatud';

$GLOBALS["lang"]['Ip Enabled'] = 'Ip luvatud';

$GLOBALS["lang"]['ip_responding_count'] = 'Ip válaszreakció kalkulon';

$GLOBALS["lang"]['Ip Responding Count'] = 'Ip válaszreakció kalkulon';

$GLOBALS["lang"]['ip_scanned_count'] = 'Ip Cuenta escaneada';

$GLOBALS["lang"]['Ip Scanned Count'] = 'Ip Cuenta escaneada';

$GLOBALS["lang"]['Iran'] = 'Irano';

$GLOBALS["lang"]['Iraq'] = 'Irako Irako';

$GLOBALS["lang"]['Ireland'] = 'Illando Irlando';

$GLOBALS["lang"]['Irish'] = 'Fizetés';

$GLOBALS["lang"]['Is FRU'] = 'FRU';

$GLOBALS["lang"]['is_fru'] = 'Estas frutas';

$GLOBALS["lang"]['Is Fru'] = 'Estas frutas';

$GLOBALS["lang"]['Is the NMIS server local (on this Open-AudIT server) or remote?'] = '? Un malpreksima?';

$GLOBALS["lang"]['Is this account active? If set to <code>n</code>, the user cannot logon.'] = '? Te Sientes Aktiva? Se vi metis <code>n</code>La uzanto ne povas logon.';

$GLOBALS["lang"]['Is this query restricted to licensed customers.'] = 'Tio estas limigita al aporitaj klientoj.';

$GLOBALS["lang"]['Is this task enabled (y/n).'] = 'Tiu tapo estas ebligita (jah / ei).';

$GLOBALS["lang"]['Isle of Man'] = 'Situo de MAN';

$GLOBALS["lang"]['Israel'] = 'Izrael';

$GLOBALS["lang"]['Issue'] = 'Aféro';

$GLOBALS["lang"]['issuer'] = 'Parodiste';

$GLOBALS["lang"]['Issuer'] = 'Parodiste';

$GLOBALS["lang"]['issuer_name'] = 'нени нени нени нени нени нени ни нени нени нени нени ни ни ни ни ни ни ни ни ни ни ни ни ни ни ни ни ни ни ни ни ни ни ни ни ни ни ни ни ни ни ни ни ни ни ни ни ни ни ни ни ни ни ни ни ни ни ни ни ни ни ни ни ни ни ни ни ни ни ни ни ни ни ни ни ни ни ни ни ни ни ни ни ни ни ни ни ни ни ни ни ни ни ни ни ни ни ни ни ни ни ни ни ни ни ни ни ни ни ни ни ни ни ни ни ни ни ни ';

$GLOBALS["lang"]['Issuer Name'] = 'нени нени нени нени нени нени ни нени нени нени нени ни ни ни ни ни ни ни ни ни ни ни ни ни ни ни ни ни ни ни ни ни ни ни ни ни ни ни ни ни ни ни ни ни ни ни ни ни ни ни ни ни ни ни ни ни ни ни ни ни ни ни ни ни ни ни ни ни ни ни ни ни ни ни ни ни ни ни ни ни ни ни ни ни ни ни ни ни ни ни ни ни ни ни ни ни ни ни ни ни ни ни ни ни ни ни ни ни ни ни ни ни ни ни ни ни ни ни ';

$GLOBALS["lang"]['Issues'] = 'Temoj';

$GLOBALS["lang"]['It <i>Just Works</i> with NMIS'] = ' C \'est vrai. <i>Nincs magyar neve</i> Kun';

$GLOBALS["lang"]['It is available at Menu -> Help ->'] = ' C \'est ce que j\' ai dit. États- Unis Aide - título';

$GLOBALS["lang"]['It is important to note that when Open-AudIT determines a match any properties set to <i>y</i> must match exactly (and not be blank) in order for Open-AudIT to determine that the discovered device matches a device already in the database. If none of the properties marked <i>y</i> match, then a new device entry will be created, which could result in duplicate device entries. In situations where properties are duplicated, for example a dbus_id is copied during a VM clone, then an existing device may incorrectly get overwritten/updated rather then a new entry being created resulting in missing devices.'] = 'Estas gravils noi kai kiam Open AudIT determinan el punto de vista mate ajnaj trajtoj atperitaj al <i>Oui.</i> Tuhoaa egali precize (kaj isti brilaj) por Open- Audit por determini ke la malkovrita aparato egalas aparaton jam en la datumbazo. La Commission européenne <i>Oui.</i> Parato mate, tiam nova eniro estos kreita, kiu povis rezultigi duplatoraparaton kontribooj. En situacioj kie trajtoj estas duplokatigitaj, ekzample dbus _ id estas kopiita dum VM klono, tiam ekzistanta aparato povas neεuste i.i troskribita /...';

$GLOBALS["lang"]['It is not uncommon to have an overlapping address space in a given Organisation. Not ideal, but not uncommon.'] = 'Estas ne ne nekutime havi imbrikitan apresspacon en anta.fiksita organiso. Ne idéala, sed ne malofta.';

$GLOBALS["lang"]['It is very common for second tier motherboard manufacturers to not set this, to set it to all <i>0</i>s or even all <i>F</i>s.'] = ' <i>0 0 0</i>a Asamblea pintral <i>F</i>a.';

$GLOBALS["lang"]['Italian'] = 'Itália. unit description in lists';

$GLOBALS["lang"]['Italy'] = 'Olaszország';

$GLOBALS["lang"]['Items not in Baseline'] = ' i ne estas en bazo';

$GLOBALS["lang"]['JSON'] = 'JSON';

$GLOBALS["lang"]['JSON to Import'] = '→ Eventoj:';

$GLOBALS["lang"]['Jamaica'] = 'Jamajko';

$GLOBALS["lang"]['January'] = 'Januaro Januaro Januaro';

$GLOBALS["lang"]['Japan'] = 'Japoni';

$GLOBALS["lang"]['Japanese'] = 'Japon japanoj';

$GLOBALS["lang"]['Jersey'] = 'Erzo';

$GLOBALS["lang"]['Jordan'] = 'Jordanie';

$GLOBALS["lang"]['July'] = 'Julio.';

$GLOBALS["lang"]['June'] = 'Julio';

$GLOBALS["lang"]['Kazakhstan'] = 'Kaza';

$GLOBALS["lang"]['Kenya'] = 'Kenjo';

$GLOBALS["lang"]['kernel_version'] = 'Kerna versio';

$GLOBALS["lang"]['Kernel Version'] = 'Kerna versio';

$GLOBALS["lang"]['Key'] = 'Voir';

$GLOBALS["lang"]['Key Components'] = '...';

$GLOBALS["lang"]['Key Password (optional)'] = 'Valikuliini';

$GLOBALS["lang"]['keys'] = '...';

$GLOBALS["lang"]['Keys'] = '...';

$GLOBALS["lang"]['Kiribati'] = 'Kiribato';

$GLOBALS["lang"]['Korea'] = 'Corée';

$GLOBALS["lang"]['Korean'] = 'Corée';

$GLOBALS["lang"]['Kuwait'] = 'Kuvajto';

$GLOBALS["lang"]['Kyrgyz'] = 'Kirgizoj Kirgizoj';

$GLOBALS["lang"]['Kyrgyz Republic'] = 'Kirgizoj Respubliko';

$GLOBALS["lang"]['LDAP Group'] = 'LDAPi grupp';

$GLOBALS["lang"]['LDAP was searched for this user and their account was found.'] = 'LDAP estis ser planadoita por tiu uzanto kaj ilia raporto estis trovita.';

$GLOBALS["lang"]['LDAP was searched for this user and their account was not found. Check the LDAP server logs. The user credentials have worked, but the user was not found. Also check you have specified the correct Base DN attribute when you created the LDAP Server in Open-AudIT.'] = 'LDAP estis ser planadoita por tiu uzanto kaj ilia raporto ne estis trovita. Kontrou la LDAP- servilregistrojn. La uzanto akredita... oj la laboris, sed la uzanto ne estis trovita. Anka';

$GLOBALS["lang"]['lang'] = 'Langue.';

$GLOBALS["lang"]['Lang'] = 'Langue';

$GLOBALS["lang"]['language'] = 'Lingvo';

$GLOBALS["lang"]['Language'] = 'Lingvo';

$GLOBALS["lang"]['Lao'] = 'Lao!';

$GLOBALS["lang"]['last_changed'] = 'La lasta рanшo';

$GLOBALS["lang"]['Last Changed'] = 'La lasta рanшo';

$GLOBALS["lang"]['last_finished'] = 'Lalle';

$GLOBALS["lang"]['Last Finished'] = 'Lalle';

$GLOBALS["lang"]['last_logon'] = 'Ultimo logiraamat';

$GLOBALS["lang"]['Last Logon'] = 'Ultimo logiraamat';

$GLOBALS["lang"]['Last Name'] = 'Livera nomo';

$GLOBALS["lang"]['last_os_update'] = 'Ultima actualización de Os';

$GLOBALS["lang"]['Last Os Update'] = 'Ultima actualización de Os';

$GLOBALS["lang"]['last_result'] = 'Lalask rezulto';

$GLOBALS["lang"]['Last Result'] = 'Lalask rezulto';

$GLOBALS["lang"]['last_run'] = 'Livera Kuro';

$GLOBALS["lang"]['Last Run'] = 'Livera Kuro';

$GLOBALS["lang"]['last_seen'] = 'La lasta rigardo';

$GLOBALS["lang"]['Last Seen'] = 'La lasta rigardo';

$GLOBALS["lang"]['last_seen_by'] = 'Livera rigardo Antalucita por';

$GLOBALS["lang"]['Last Seen By'] = 'Livera rigardo Antalucita por';

$GLOBALS["lang"]['last_user'] = 'Uzanto';

$GLOBALS["lang"]['Last User'] = 'Uzanto';

$GLOBALS["lang"]['Last up is WMI. For Windows as in Linux, a user with Administrator level access is preferred (see Target Client Configuration on the wiki).'] = 'La lada estas WMI. Por Fenestroj kiel en Linukso, uzanto kun administrationnto nivelaliro estas preferita (vidu Target Customer Configuration sur la Vikio).';

$GLOBALS["lang"]['lastModified'] = 'Viimati mudetud';

$GLOBALS["lang"]['LastModified'] = 'Viimati mudetud';

$GLOBALS["lang"]['latitude'] = 'Latitudo';

$GLOBALS["lang"]['Latitude'] = 'Latitudo';

$GLOBALS["lang"]['Latvia'] = 'Latvio';

$GLOBALS["lang"]['Latvian'] = 'Latva';

$GLOBALS["lang"]['Layout'] = 'Lavit';

$GLOBALS["lang"]['ldap'] = 'Ldap';

$GLOBALS["lang"]['Ldap'] = 'Ldap';

$GLOBALS["lang"]['ldap_base_dn'] = 'Ldapi baas Dn';

$GLOBALS["lang"]['Ldap Base Dn'] = 'Ldapi baas Dn';

$GLOBALS["lang"]['ldap_dn_account'] = 'Ldap Dn konto';

$GLOBALS["lang"]['Ldap Dn Account'] = 'Ldap Dn konto';

$GLOBALS["lang"]['ldap_dn_password'] = 'Ldap Dn parool';

$GLOBALS["lang"]['Ldap Dn Password'] = 'Ldap Dn parool';

$GLOBALS["lang"]['Learn About'] = 'Larnu';

$GLOBALS["lang"]['Learn More'] = 'Larnu pli';

$GLOBALS["lang"]['lease_expiry_date'] = 'Liisingu aegumiskuupäev';

$GLOBALS["lang"]['Lease Expiry Date'] = 'Liisingu aegumiskuupäev';

$GLOBALS["lang"]['Lebanon'] = 'Libano Libano';

$GLOBALS["lang"]['legal_requirements'] = 'Postuluj';

$GLOBALS["lang"]['Legal Requirements'] = 'Postuluj';

$GLOBALS["lang"]['Lesotho'] = 'Lesoto';

$GLOBALS["lang"]['Less Than'] = 'malpli';

$GLOBALS["lang"]['Less Than or Equals'] = 'Malpli sur kahtlus egalaj';

$GLOBALS["lang"]['Lets set the logging to debug. Copy the file:'] = 'Lasu nimeti la arbotrunkon al debug. La dosiero:';

$GLOBALS["lang"]['level'] = 'Nivelo';

$GLOBALS["lang"]['Level'] = 'Nivelo';

$GLOBALS["lang"]['Level of privileges needed to exploit (None, Low, High).'] = 'Nivelo de adaptacionj necesaj por ekspluati (puudub, madal, kõrge).';

$GLOBALS["lang"]['Liberia'] = 'Liberté';

$GLOBALS["lang"]['Libraries (ie, code that another program might include). These are typically items like Wordpress extensions, drupal extensions, node.js libraries, Android / iPhone / Windows libraries, python libraries, etc.'] = 'Bibliotekoj (nt kodo ke alias programmo povas inkludi). Tiuj estas tipe eroj kiel Wordpress- etenda';

$GLOBALS["lang"]['Libyan Arab Jamahiriya'] = 'Royaume- Uni Árabe Libia';

$GLOBALS["lang"]['License'] = 'Engedély';

$GLOBALS["lang"]['License Key'] = 'Engedély';

$GLOBALS["lang"]['License Required'] = 'Licence Postulo';

$GLOBALS["lang"]['Licensed users are free to add or modify the rules as you see fit. If you have a device with an SNMP OID that does not match a model already in the file - now you can add it easily. No more waiting for us to provide a patch and add it to the code base for you.<br><br>When you create a Rules entry, you will need to provide a name and a list of inputs and outputs. The inputs and outputs are stored as JSON arrays within the database.<br><br>Inputs have a table and attribute, an operator and a value. When executing the condition, it works thus: If $table . $attribute $operator $value then apply the outputs.<br><br>An example rule to match an SNMP OID and set the model is below.<br>'] = 'Licencitaj uzantoj estas liberaj aldoni a redifi la regulojn kiel vitas konvulsion. Se vi havas aparaton kun SNMP OID kiu ne egalas modelon jam en la dosiero Ne pli da atendado al ni disponigi peceton kaj aldoni εin al la kodbazo por vi.<br/><br/>Kiam vi kreas Regularo- eniron, vi bezonos disponigi nomon kaj listan de eniga.oj kaj produkta. La eniga<br/><br/>Entrée havas tablon kaj attributon, funkciigiston kaj Valon. Kiam εi funkcias teksti: Se $tablo. atracias al USD da heldantvaloro tiam apliki la produkta.ojn.<br/><br/>Ekzemploregio egali SNMP OID kaj metis la modelon estas malsupre.<br/>';

$GLOBALS["lang"]['Licenses'] = 'Permesiloj';

$GLOBALS["lang"]['Liechtenstein'] = 'Li!';

$GLOBALS["lang"]['Like'] = 'Kieli';

$GLOBALS["lang"]['Like most other attributes, Additional Fields can be bulk edited. Use the Bulk Edit function as you normally would and you will see the Additional Fields are available for input.'] = 'Kiel la pléj multaj alfaj atemploj, ylimääräistä Champs povas esti groca redactis. Uzu la Bulk Edit- funkcion kiam vi normale faris kaj vidos la additional Fields estas hasblaj por eniga.';

$GLOBALS["lang"]['Like versus Equals'] = 'Kiel kontrauegalaj';

$GLOBALS["lang"]['limit'] = 'Limoj';

$GLOBALS["lang"]['Limit'] = 'Limoj';

$GLOBALS["lang"]['Limit the query to the first X items.'] = 'Limigi la atendon al la unaj Xaj eroy.';

$GLOBALS["lang"]['Limited to 100 rows.'] = 'Limigita al 100 vicoj.';

$GLOBALS["lang"]['line_amount'] = 'Somme de lin';

$GLOBALS["lang"]['Line Amount'] = 'Somme de lin';

$GLOBALS["lang"]['Line Graph'] = 'Linio-kaavio';

$GLOBALS["lang"]['line_number_a'] = 'Linio Nombro A';

$GLOBALS["lang"]['Line Number A'] = 'Linio Nombro A';

$GLOBALS["lang"]['line_number_b'] = 'Linio Nombro';

$GLOBALS["lang"]['Line Number B'] = 'Linio Nombro';

$GLOBALS["lang"]['line_text'] = 'Linio Teksto';

$GLOBALS["lang"]['Line Text'] = 'Linio Teksto';

$GLOBALS["lang"]['Line charts must return date or my_date, description or my_description and count.'] = 'Linio kiun furorlisto murtaa resendi daton kaptlus I _ date, prikribon kaptluse mispriskribon kaj kalkulon.';

$GLOBALS["lang"]['link'] = 'Ligiloj';

$GLOBALS["lang"]['Link'] = 'Ligiloj';

$GLOBALS["lang"]['Link (Advanced)'] = 'L [redakki]';

$GLOBALS["lang"]['Linked Files'] = 'Lizita Dosieroj';

$GLOBALS["lang"]['links'] = 'Ligiloj';

$GLOBALS["lang"]['Links'] = 'Ligiloj';

$GLOBALS["lang"]['Links this discovery to the associated cloud (if required). Links to <code>clouds.id</code>.'] = 'Ligiloj tiu eltrova.o al la rilata nubo (se nécessaire). Ligiloj al <code>clouds.id</code>.';

$GLOBALS["lang"]['Links to <code>discovery_scan_options.id</code>.'] = 'Ligiloj al <code>discovery_scan_options.id</code>.';

$GLOBALS["lang"]['Links to <code>standards.id</code>'] = 'Ligiloj al <code>standards.id</code>';

$GLOBALS["lang"]['Links to <standards_policies.id</code>'] = 'Ligiloj al <standards_policies.id< code=""></standards_policies.id<>';

$GLOBALS["lang"]['Linux'] = 'Linukso';

$GLOBALS["lang"]['Linux Packages'] = 'Linuksoj';

$GLOBALS["lang"]['List'] = 'Liste de Liste';

$GLOBALS["lang"]['List All NMAP Ports, Protocols and Programs for Each Device'] = 'Listo de NMAP Havenoj, Protokoloj kaj Programoj por ';

$GLOBALS["lang"]['List Devices'] = 'Listo de aparatoj';

$GLOBALS["lang"]['List Discoveries'] = 'Liste de malkovroj';

$GLOBALS["lang"]['list_table_format'] = 'Liste de Formato de Tabla';

$GLOBALS["lang"]['List Table Format'] = 'Liste de Formato de Tabla';

$GLOBALS["lang"]['List Tables'] = 'Liste de tabeloj';

$GLOBALS["lang"]['Lithuania'] = 'Litovio';

$GLOBALS["lang"]['Lithuanian'] = 'Litova lito';

$GLOBALS["lang"]['Load Balancing'] = 'Equilibrio de carga';

$GLOBALS["lang"]['Local'] = 'Lokaj Lokaj';

$GLOBALS["lang"]['Local Area Network'] = 'Loka pirkonnavõrk';

$GLOBALS["lang"]['local_port'] = 'Loka Haveno';

$GLOBALS["lang"]['Local Port'] = 'Loka Haveno';

$GLOBALS["lang"]['Local area network'] = 'Loka areoreto';

$GLOBALS["lang"]['Localhost'] = 'Lokulo';

$GLOBALS["lang"]['Localisation'] = 'Lokalizo';

$GLOBALS["lang"]['Location'] = 'Situo';

$GLOBALS["lang"]['Location A'] = 'Situo';

$GLOBALS["lang"]['Location B'] = 'Situo B';

$GLOBALS["lang"]['location_id'] = 'Situo';

$GLOBALS["lang"]['Location ID'] = 'Situo';

$GLOBALS["lang"]['location_id_a'] = 'Situo';

$GLOBALS["lang"]['Location ID A'] = 'Situo';

$GLOBALS["lang"]['location_id_b'] = 'A de B helyzet';

$GLOBALS["lang"]['Location ID B'] = 'A de B helyzet';

$GLOBALS["lang"]['location_latitude'] = 'Situo de latitudo';

$GLOBALS["lang"]['Location Latitude'] = 'Situo de latitudo';

$GLOBALS["lang"]['location_level'] = 'Situo de la nivelo';

$GLOBALS["lang"]['Location Level'] = 'Situo de la nivelo';

$GLOBALS["lang"]['location_longitude'] = 'Situo Longitudo';

$GLOBALS["lang"]['Location Longitude'] = 'Situo Longitudo';

$GLOBALS["lang"]['Location Name'] = 'Situo';

$GLOBALS["lang"]['location_rack'] = 'Situo de Rack';

$GLOBALS["lang"]['Location Rack'] = 'Situo de Rack';

$GLOBALS["lang"]['location_rack_position'] = 'Situo de Rack';

$GLOBALS["lang"]['Location Rack Position'] = 'Situo de Rack';

$GLOBALS["lang"]['location_rack_size'] = 'Situo de Rack Suurus';

$GLOBALS["lang"]['Location Rack Size'] = 'Situo de Rack Suurus';

$GLOBALS["lang"]['location_room'] = 'Situo ministrando';

$GLOBALS["lang"]['Location Room'] = 'Situo ministrando';

$GLOBALS["lang"]['location_suite'] = 'Situo';

$GLOBALS["lang"]['Location Suite'] = 'Situo';

$GLOBALS["lang"]['Locations'] = 'Situo';

$GLOBALS["lang"]['Locations in this'] = 'Situo en tio';

$GLOBALS["lang"]['log'] = 'Rekisteri';

$GLOBALS["lang"]['Log'] = 'Rekisteri';

$GLOBALS["lang"]['log_format'] = 'Enregistrementipormat';

$GLOBALS["lang"]['Log Format'] = 'Enregistrementipormat';

$GLOBALS["lang"]['Log Line'] = 'Línea de registrio';

$GLOBALS["lang"]['log_path'] = 'Rekisteri la vojon';

$GLOBALS["lang"]['Log Path'] = 'Rekisteri la vojon';

$GLOBALS["lang"]['log_rotation'] = 'Logo Rotacio';

$GLOBALS["lang"]['Log Rotation'] = 'Logo Rotacio';

$GLOBALS["lang"]['log_status'] = 'Rekisteri';

$GLOBALS["lang"]['Log Status'] = 'Rekisteri';

$GLOBALS["lang"]['Logging in'] = 'Beprimer';

$GLOBALS["lang"]['Logical Cores '] = 'Logiko Kernas ';

$GLOBALS["lang"]['logical_count'] = 'Logika kakululo';

$GLOBALS["lang"]['Logical Count'] = 'Logika kakululo';

$GLOBALS["lang"]['Logout'] = 'Diskuto Nom de la ville (facultatif, sans doute pas besoin de traduction)';

$GLOBALS["lang"]['Logs'] = 'Les';

$GLOBALS["lang"]['longitude'] = 'Longitudo';

$GLOBALS["lang"]['Longitude'] = 'Longitudo';

$GLOBALS["lang"]['low'] = 'Malalta Nom de la ville (facultatif, sans doute pas besoin de traduction)';

$GLOBALS["lang"]['Low'] = 'Malalta Nom de la ville (facultatif, sans doute pas besoin de traduction)';

$GLOBALS["lang"]['Lower Case'] = 'Pli maltalta kazo';

$GLOBALS["lang"]['Lowercase Hostname'] = 'Nombre de l \'hôte';

$GLOBALS["lang"]['Luxembourg'] = 'Luksemburgio';

$GLOBALS["lang"]['MAC Address'] = 'MAC- adreso';

$GLOBALS["lang"]['MAC Manufacturer'] = 'MAC Fabrikisto';

$GLOBALS["lang"]['mac'] = 'Mac';

$GLOBALS["lang"]['Mac'] = 'C \'est Mac.';

$GLOBALS["lang"]['Mac Address'] = 'Maci- adresse';

$GLOBALS["lang"]['MacOS'] = 'MacOS';

$GLOBALS["lang"]['MacOS Packages'] = 'Patches MacOS';

$GLOBALS["lang"]['Macao'] = 'Makaó';

$GLOBALS["lang"]['Macedonia'] = 'Makedonio Makedonio';

$GLOBALS["lang"]['Madagascar'] = 'Kar';

$GLOBALS["lang"]['Maintain records of risk assessments and treatments'] = 'Alternativaefaj artikoloj pri rissotaksoj kaj terapioj';

$GLOBALS["lang"]['maintenance_expires'] = 'Prizorgado de elspezoj';

$GLOBALS["lang"]['Maintenance Expires'] = 'Prizorgado de elspezoj';

$GLOBALS["lang"]['Make My Default Dashboard'] = 'Faru Mian Deva';

$GLOBALS["lang"]['Make this install a Collector'] = 'Farfution instali kolektanton';

$GLOBALS["lang"]['Malawi'] = 'Malaví';

$GLOBALS["lang"]['Malay'] = 'malaja';

$GLOBALS["lang"]['Malaysia'] = 'Malajzio';

$GLOBALS["lang"]['Maldives'] = 'Maldivoj';

$GLOBALS["lang"]['Mali'] = 'Malio';

$GLOBALS["lang"]['Malta'] = 'Malto';

$GLOBALS["lang"]['Manage'] = 'Gépkocsi';

$GLOBALS["lang"]['Manage Licenses'] = 'Mondial. unit description in lists';

$GLOBALS["lang"]['Manage in NMIS'] = 'Manaεo en NMIS';

$GLOBALS["lang"]['Manage incidents and nonconformities'] = 'Mana järkjärgulized okaza...';

$GLOBALS["lang"]['Managed'] = 'Felelős';

$GLOBALS["lang"]['managed_by'] = 'Igazgatók';

$GLOBALS["lang"]['Managed By'] = 'Igazgatók';

$GLOBALS["lang"]['Manual Input'] = 'Manlibro fr';

$GLOBALS["lang"]['Manually set by user, defaults to Production.'] = 'Mane metita fare de uzanto, deta par défautltas al Produktado.';

$GLOBALS["lang"]['Manually set by user.'] = '. i estas farita de uzanto.';

$GLOBALS["lang"]['manufacture_date'] = 'Fabrika Dato';

$GLOBALS["lang"]['Manufacture Date'] = 'Fabrika Dato';

$GLOBALS["lang"]['manufacturer'] = 'Fabrikisto Nom de la ville (facultatif, sans doute pas besoin de traduction)';

$GLOBALS["lang"]['Manufacturer'] = 'Fabrikisto Nom de la ville (facultatif, sans doute pas besoin de traduction)';

$GLOBALS["lang"]['manufacturer_code'] = 'Código del producturier';

$GLOBALS["lang"]['Manufacturer Code'] = 'Código del producturier';

$GLOBALS["lang"]['Map'] = 'Mapo mapo';

$GLOBALS["lang"]['maps'] = 'Mapoj';

$GLOBALS["lang"]['Maps'] = 'Mapoj';

$GLOBALS["lang"]['March'] = 'Marto';

$GLOBALS["lang"]['Marshall Islands'] = 'Mar apretala Indilaro';

$GLOBALS["lang"]['Martinique'] = 'Martiniko';

$GLOBALS["lang"]['mask'] = 'Masko';

$GLOBALS["lang"]['Mask'] = 'Masko';

$GLOBALS["lang"]['Match'] = 'Partido partido partido';

$GLOBALS["lang"]['match_options'] = 'L \'Opcioj';

$GLOBALS["lang"]['Match Options'] = 'L \'Opcioj';

$GLOBALS["lang"]['Match Order'] = 'Ordre de partido';

$GLOBALS["lang"]['Match Process'] = 'Proceso de solanoncia';

$GLOBALS["lang"]['match_string'] = 'Cierre de partido';

$GLOBALS["lang"]['Match String'] = 'Cierre de partido';

$GLOBALS["lang"]['Matching Attribute'] = 'Atributo- satunnaisuus';

$GLOBALS["lang"]['Matching Devices - Including OrgID'] = 'Desticitivos de embarejamiento - Inkluzive de OrgID';

$GLOBALS["lang"]['Matching Linux Devices'] = 'Compositivos de Combinando Linux';

$GLOBALS["lang"]['Matching is conducted in the following order'] = 'Combinando estas farita en la sekva ordo';

$GLOBALS["lang"]['maturity_level'] = 'Nivel de madurez';

$GLOBALS["lang"]['Maturity Level'] = 'Nivel de madurez';

$GLOBALS["lang"]['maturity_score'] = 'Küpsuse punktisuma';

$GLOBALS["lang"]['Maturity Score'] = 'Küpsuse punktisuma';

$GLOBALS["lang"]['Mauritania'] = 'Kahtlustajanii';

$GLOBALS["lang"]['Mauritius'] = 'Mère';

$GLOBALS["lang"]['max_file_size'] = 'Le Président';

$GLOBALS["lang"]['Max File Size'] = 'Le Président';

$GLOBALS["lang"]['Max Length'] = 'Máxima pikkuskraad';

$GLOBALS["lang"]['max_size'] = 'Tamaño máximo';

$GLOBALS["lang"]['Max Size'] = 'Tamaño máximo';

$GLOBALS["lang"]['May'] = 'Maju Majo Maju Majo';

$GLOBALS["lang"]['Mayotte'] = 'Mayotte';

$GLOBALS["lang"]['Measures the likelihood of the vulnerability being attacked, and is based on the current state of exploit techniques, exploit code availability, or active, “in-the-wild” exploitation.'] = 'Mezras la ver sortajnecon de la vundebleco estanta atakita, kaj estas bazita sur la nuna stato de ekspluati teknikojn, ekspluati kodhaveblecon, kaptlustav aktivan, "en- la- sovan" ekspluaton.';

$GLOBALS["lang"]['medium'] = 'Médias';

$GLOBALS["lang"]['Medium'] = 'Médias';

$GLOBALS["lang"]['members'] = 'Membroj de membroj';

$GLOBALS["lang"]['Members'] = 'Membroj de membroj';

$GLOBALS["lang"]['memory'] = 'MEMORO';

$GLOBALS["lang"]['Memory'] = 'MEMORO';

$GLOBALS["lang"]['memory_count'] = 'MEMORO Conde';

$GLOBALS["lang"]['Memory Count'] = 'MEMORO Conde';

$GLOBALS["lang"]['memory_slot_count'] = 'MEMORO RANURA';

$GLOBALS["lang"]['Memory Slot Count'] = 'MEMORO RANURA';

$GLOBALS["lang"]['menu_category'] = 'Valikko Kategoria';

$GLOBALS["lang"]['Menu Category'] = 'Valikko Kategoria';

$GLOBALS["lang"]['menu_display'] = 'Pantalla de menú';

$GLOBALS["lang"]['Menu Display'] = 'Pantalla de menú';

$GLOBALS["lang"]['message'] = 'Mesa';

$GLOBALS["lang"]['Message'] = 'Mesa';

$GLOBALS["lang"]['meta_last_changed'] = 'La lasta рanшo';

$GLOBALS["lang"]['Meta Last Changed'] = 'La lasta рanшo';

$GLOBALS["lang"]['metric'] = 'Métrica';

$GLOBALS["lang"]['Metric'] = 'Métrica';

$GLOBALS["lang"]['Metropolitan Area Network'] = 'Suurlinnapiirkonna võrustok';

$GLOBALS["lang"]['Metropolitan area network'] = 'Métropolivena areoreto';

$GLOBALS["lang"]['Mexico'] = 'Meksiko';

$GLOBALS["lang"]['Micronesia'] = 'Mikronécium';

$GLOBALS["lang"]['Microsoft Azure Fields'] = 'Champs Microsoft Azúr';

$GLOBALS["lang"]['microtime'] = 'Mikrotempo';

$GLOBALS["lang"]['Microtime'] = 'Mikrotempo';

$GLOBALS["lang"]['minute'] = 'Protokolo';

$GLOBALS["lang"]['Minute'] = 'Protokolo';

$GLOBALS["lang"]['Minutes'] = 'MINUTOJ';

$GLOBALS["lang"]['Minutes Since last Audit are Greater than'] = 'Minitoj ista revizio estas pli grandaj ol';

$GLOBALS["lang"]['model'] = 'Modèle';

$GLOBALS["lang"]['Model'] = 'Modèle';

$GLOBALS["lang"]['model_family'] = 'Modèle de la famille';

$GLOBALS["lang"]['Model Family'] = 'Modèle de la famille';

$GLOBALS["lang"]['Modified'] = 'Modifita';

$GLOBALS["lang"]['Modifying an Existing Script'] = 'Script présente de Modifante';

$GLOBALS["lang"]['module'] = 'Modulo';

$GLOBALS["lang"]['Module'] = 'Modulo';

$GLOBALS["lang"]['module_index'] = 'Módulo Indexo';

$GLOBALS["lang"]['Module Index'] = 'Módulo Indexo';

$GLOBALS["lang"]['Modules'] = 'Moduloj';

$GLOBALS["lang"]['Moldova'] = 'Moldavio';

$GLOBALS["lang"]['Monaco'] = 'Monako';

$GLOBALS["lang"]['Monday'] = 'Lundo Lunde';

$GLOBALS["lang"]['Mongolia'] = 'Mongólió';

$GLOBALS["lang"]['monitor'] = 'Ekrano';

$GLOBALS["lang"]['Monitor'] = 'Ekrano';

$GLOBALS["lang"]['Monitor and measure ISMS performance'] = 'Ekrano kaj iniciato ISMS- efikeco';

$GLOBALS["lang"]['Montenegro'] = 'Monténégro';

$GLOBALS["lang"]['month'] = 'Monato';

$GLOBALS["lang"]['Month'] = 'Monato';

$GLOBALS["lang"]['Montserrat'] = 'Montserrat';

$GLOBALS["lang"]['More Information'] = 'Pliaj informaoj';

$GLOBALS["lang"]['More Secure'] = 'Pli sekura';

$GLOBALS["lang"]['More elaborate SQL can used to group attributes within a range. Below shows the SQL for devices not seen in a pie chart grouped by last seen date ranges.'] = 'Pli kompleksa SQL povas esti uzita por grupigi atperiojn ene de intervalo. Malsupre montre la SQL por aparatoj ne vidite en piirakka kaavio grupigita per latte viditaj datointervaloj.';

$GLOBALS["lang"]['More information about debugging this can be found on a helpful Stack Overflow thread'] = 'Pli da informaoj pri malkonstruado de tio povas esti trovitaj sur helpema Korstna ülevoolu fadeno';

$GLOBALS["lang"]['Morocco'] = 'Maroko';

$GLOBALS["lang"]['Most likely the Windows firewall (or a third party firewall) is denying the connection attempt.<br><br>Please log on to the target Windows machine and check the firewall settings.'] = 'Plej ver seppne la Fenestroj (a...<br/><br/>Bonvolu ensaluti al la celo Windows ma apretino kaj kontroli la fajromuro agordojn.';

$GLOBALS["lang"]['Most of Open-AudIT is Licensed with GNU AGPL.'] = 'La plej granda parto de Open- Audit estas Licencita kun GNU AGPL.';

$GLOBALS["lang"]['motherboard'] = 'Liba';

$GLOBALS["lang"]['Motherboard'] = 'Liba';

$GLOBALS["lang"]['mount_point'] = 'Monto';

$GLOBALS["lang"]['Mount Point'] = 'Monto';

$GLOBALS["lang"]['mount_type'] = 'Monto Tipo';

$GLOBALS["lang"]['Mount Type'] = 'Monto Tipo';

$GLOBALS["lang"]['Mozambique'] = 'Mosambiko';

$GLOBALS["lang"]['Must Respond To Ping. If set, Nmap will fist attempt to send and listen for an ICMP response. If the device does not respond, no further scanning will occur.<br>Previously a device did not have to respond to a ping for Open-AudIT to continue scanning.'] = 'Ni tuhoaa reaktion al Ping. Se aro, Nmap Pugnoprovos senti kaj a shortsapti por ICMP- response. Se la aparato ne responseas, neniu plu skanado okazos.<br/>Anta';

$GLOBALS["lang"]['Must Respond to Ping'] = 'Réponse';

$GLOBALS["lang"]['My AntiVirus is prompting me to deny/allow things'] = 'Mia AntiVirus ekigas min nei / malaltigi aferojn';

$GLOBALS["lang"]['My time is off in Open-AudIT'] = 'Mia tempo estas en Open- Audit';

$GLOBALS["lang"]['Myanmar'] = 'Mjanmao';

$GLOBALS["lang"]['N+1'] = 'N + 1';

$GLOBALS["lang"]['N+M'] = 'N + M';

$GLOBALS["lang"]['N-to-1'] = 'N- al- 1';

$GLOBALS["lang"]['N-to-N'] = 'N-al- N';

$GLOBALS["lang"]['NMIS Business Service'] = 'NMIS Komerca Servo';

$GLOBALS["lang"]['NMIS Customer'] = 'NMIS Kliento';

$GLOBALS["lang"]['NMIS Device Options'] = 'NMIS merde Opcioj';

$GLOBALS["lang"]['NMIS Device Selection'] = 'Sélección de dispositivos NMIS';

$GLOBALS["lang"]['NMIS Field Name'] = 'NMIS Nombre de campo';

$GLOBALS["lang"]['NMIS Field Type'] = 'NMIS- kampo';

$GLOBALS["lang"]['NMIS Group'] = 'NMIS- grupo';

$GLOBALS["lang"]['NMIS Poller'] = 'Sondageur NMIS';

$GLOBALS["lang"]['NMIS Role'] = 'NMIS Rolo Rolo';

$GLOBALS["lang"]['NOTE'] = 'Ei';

$GLOBALS["lang"]['NOTE #2'] = 'Néniu numero 2';

$GLOBALS["lang"]['NOTE - For more info on DateTime formats, see'] = 'NOTO - Por pli da informaj pri Datenttempo formaj, Vidas';

$GLOBALS["lang"]['NOTE - If you request a downloaded CSV, XML or JSON format (either a single credential, or the complete collection) the actual credential details will be sent. Not the encrypted string, the actual username, password, community string, etc. Any sensitive details are not displayed in the web GUI, but are made available via other formats. To prevent this export a configuration item is available called decrypt_credentials.'] = 'Se vi petas el fleutitan CSV, XML a epäillyn JSON formatan (a... Ne la Por malhelfi tiun eksporton konfiguracioobjekto estas hasbla nomita Malkript _ credit ential \'oj.';

$GLOBALS["lang"]['NOTE - The curly brackets in the data filed should be used as-is (not replaced as per other examples above).'] = 'NEE - La kurbaj krampoj en la datenoj arkivitaj devus esti utiligitaj kiel - estas (ne anstata auditigite kiel per alfaj ekzemoj supre).';

$GLOBALS["lang"]['NOTE - You can prevent plain text credentials being displayed below by setting the configuration item for <code>decrypt_credentials</code> to <code>n</code>.'] = 'NEE - Vi povas malhelfi simplijn tekstojn akredita <code>decrypt_credentials</code> Gépkocsi <code>n</code>.';

$GLOBALS["lang"]['name'] = 'Nomo nomo';

$GLOBALS["lang"]['Name'] = 'Nomo nomo';

$GLOBALS["lang"]['Name: The name you are giving to this field. Ideally it should be unique.'] = 'La nomo, kiun vi donas al tiu kapo. Ideale εi devus esti unika.';

$GLOBALS["lang"]['Namibia'] = 'Namibio';

$GLOBALS["lang"]['Nauru'] = 'Nauro';

$GLOBALS["lang"]['Nepal'] = 'Népalais Népalais';

$GLOBALS["lang"]['net_index'] = 'Índice neto';

$GLOBALS["lang"]['Net Index'] = 'Índice neto';

$GLOBALS["lang"]['Netherlands Antilles'] = 'Nederlandaj Antiloj';

$GLOBALS["lang"]['Netherlands the'] = 'Nederlando';

$GLOBALS["lang"]['netmask'] = 'Netmaski';

$GLOBALS["lang"]['Netmask'] = 'Netmaski';

$GLOBALS["lang"]['netstat'] = 'État net';

$GLOBALS["lang"]['Netstat'] = 'État net';

$GLOBALS["lang"]['Netstat Policies'] = 'Netstat Politikoj';

$GLOBALS["lang"]['Netstat Ports'] = 'Puertos Netstat';

$GLOBALS["lang"]['Netstat Ports use a combination of port number, protocol and program. If all are present the policy passes.'] = 'Netstat Ports uzas kombina Se ';

$GLOBALS["lang"]['Network'] = 'Visszatérés';

$GLOBALS["lang"]['network_address'] = 'Reta Adreso';

$GLOBALS["lang"]['Network Address'] = 'Reta Adreso';

$GLOBALS["lang"]['Network Discovery'] = 'Reto Discovery';

$GLOBALS["lang"]['network_domain'] = 'Reto domeen';

$GLOBALS["lang"]['Network Domain'] = 'Reto domeen';

$GLOBALS["lang"]['Network Types'] = 'Reto Tipoj';

$GLOBALS["lang"]['Network type is set to Local Area Network by default, but can be changed by the user as they see fit. The types supported are below (with thanks to Wikipedia).<br><br>A network can be characterized by its physical capacity or its organizational purpose. Use of the network, including user authorization and access rights, differ accordingly.'] = 'Retoseco estas metita al Local Area Network deha.lte, sed povas esti шan... La tipoj apogitaj estas malsupre (kun dank \'al Vikipedio).<br/><br/>Reto povas esti karkterizita per sia fizika kapacito a Uzo de la reto, inkluzive de uzantrajtigo kaj alirrajtoj, malsamas sekve.';

$GLOBALS["lang"]['networks'] = 'Retoj';

$GLOBALS["lang"]['Networks'] = 'Retoj';

$GLOBALS["lang"]['Networks Generated By'] = 'Retoj Generitaj';

$GLOBALS["lang"]['Networks are updated with every discovery. Items such as IPs Available and IPs Used, along with Gateways, DHCP and DNS Servers are added as found.'] = 'Retoj estas εisdatigitaj kun ';

$GLOBALS["lang"]['Networks respond differently depending on how they are configured. Some routers and/or firewalls can respond <i>on behalf</i> of IPs on the other side of their interfaces to the Open-AudIT Server. It is quite common to see Nmap report a probe for SNMP (UDP port 161) to respond as open|filtered for devices that do and do not exist. This is misleading as there is no device at that IP, yet it ends up with a device entry in the database. 99.9% of the time, it is not Open-AudIT, nor even Nmap, but the network causing this issue. Now that we have the options to treat open|filtered ports as either open or closed, we can eliminate a lot of this confusion. Enterprise users even have the option to change this on a per discovery basis (more than just using the Medium (Classic) item, as above).'] = 'Retoj responseas alimeniere riippuu de kiel ili estas formitaj. Kelkaj tineroj kaj / a <i>nomo</i> IPs sur la alias Costato de iliaj interfacoj al la Open- Audit- Servilo. Estos tre vidi Nmap- raporton enketo por SNMP (UDP- havenno 161) responi kiel malfermite por aparatoj kiuj faras kaj ne ekzitas. Tio estas misgvida kiam ekzistas neniu aparato Ankora -epäilty εi fini liquidas supren kun aparatoeniro en la datumbazo. 99,9% de la tempo, εi ne estas Open- Audit, nek e eritt Nmap, sed la reto kaăzanta tiun temon. Nun ke ni havas la opciojn por trakti malfermajn hasnojn kiel epäilty malfermaj epäilty fermitaj, ni povas elimini multe da tiu konfuzo. Empresa uzantoj y ordenación havas la opcion por дусууnшition sur per eltrova.o batso (pli ol... us uzante la Medium (Klasika) objectkton, kiel supre).';

$GLOBALS["lang"]['Networks using a CIDR Mask of'] = 'Retoj uzantaj CIDR Maskon de';

$GLOBALS["lang"]['New Building Name'] = 'Nova Konstrua...';

$GLOBALS["lang"]['New Caledonia'] = 'Marras- Kaledonio';

$GLOBALS["lang"]['New Floor Name'] = 'Nimi de Nova korruse';

$GLOBALS["lang"]['New Room Name'] = 'Nova imitaambro';

$GLOBALS["lang"]['New Row Name'] = 'Nova rea nimi';

$GLOBALS["lang"]['New Zealand'] = 'Marras- zelando';

$GLOBALS["lang"]['News'] = 'Nouvelle...';

$GLOBALS["lang"]['News checks-in each time you login for updated queries & packages, configuration recommendations, release announcements, blog posts and more.'] = 'Nouvelle';

$GLOBALS["lang"]['News is our way of keeping you up-to-date with the latest fixes, announcements, query updates, software versions and more.<br><br>You do not need to keep on top of the wiki or check for new releases, we can send these to you!'] = 'Nouvelle<br/><br/>Vi ne bezonas teni supre de la Vicio une réserve ';

$GLOBALS["lang"]['next_hop'] = 'Sekvan vesperon';

$GLOBALS["lang"]['Next Hop'] = 'Sekvan vesperon';

$GLOBALS["lang"]['next_run'] = 'Sekantaro';

$GLOBALS["lang"]['Next Run'] = 'Sekantaro';

$GLOBALS["lang"]['Next click <i>Create your own application</i>.'] = 'Sekva klako <i>Krei vian propran aplikoonon</i>.';

$GLOBALS["lang"]['Next, click OK, then right click the Apache 2.4 service and click Restart. Done!'] = 'Venonta, klaki OK, tiam dekstra klakas la apa planeo 2.4 servo kaj klak Redémarrer. C \'est Dono!';

$GLOBALS["lang"]['Next, right click the Apache2.4 service and select Properties, then click the Log On tab.'] = 'Venonta, deksstra klakas la apa prevista2,4 servon kaj selektas Trajtojn, tiam klakas la Logon sur klako.';

$GLOBALS["lang"]['Nicaragua'] = 'Nikaragvo';

$GLOBALS["lang"]['Niger'] = 'Nom de NierioCity (facultatif, sans doute pas besoin d \'une traduction)';

$GLOBALS["lang"]['Nigeria'] = 'Nom de NierioCity (facultatif, sans doute pas besoin d \'une traduction)';

$GLOBALS["lang"]['Niue'] = 'Niuworld. kgm';

$GLOBALS["lang"]['nmap'] = 'Nmap';

$GLOBALS["lang"]['Nmap'] = 'Nmap';

$GLOBALS["lang"]['Nmap Port Scanning Responses'] = 'Respuestas de execoración del puerto de Nmap';

$GLOBALS["lang"]['nmap_tcp_ports'] = 'Puertos Nmap Tcp';

$GLOBALS["lang"]['Nmap Tcp Ports'] = 'Puertos Nmap Tcp';

$GLOBALS["lang"]['nmap_udp_ports'] = 'Puertos Nmap Udp';

$GLOBALS["lang"]['Nmap Udp Ports'] = 'Puertos Nmap Udp';

$GLOBALS["lang"]['Nmap cannot determine whether the port is open because packet filtering prevents its probes from reaching the port. The filtering could be from a dedicated firewall device, router rules, or host-based firewall software. These ports frustrate attackers because they provide so little information. Sometimes they respond with ICMP error messages such as type 3 code 13 (destination unreachable: communication administratively prohibited), but filters that simply drop probes without responding are far more common. This forces Nmap to retry several times just in case the probe was dropped due to network congestion rather than filtering. This slows down the scan dramatically.'] = 'Nmap ne povas determini La filtrado povus esti de requila fajromura aparato, italiankieli, katlus mastro- bazita fajromuro softvaro. Tiuj hasnoj diversicas atakantojn Foje ili responseas kun ICMP eramesa gradiateoj kiel ekzample tipo 3 kodo 13 (destinado cleatingebla: kommunikado administrre malpermesita), sed intersuliloj kiuj simply faligas enketojn sen responedo estas multe pli oftaj. Tiuj fortoj Nmap por reeniri plurajn fojojn Tio Bremsas la skanadon dramece.';

$GLOBALS["lang"]['Nmap places ports in this state when it is unable to determine whether a port is open or filtered. This occurs for scan types in which open ports give no response. The lack of response could also mean that a packet filter dropped the probe or any response it elicited. So Nmap does not know for sure whether the port is open or being filtered. The UDP, IP protocol, FIN, NULL, and Xmas scans classify ports this way.'] = 'Nmap lokas hasnojn en tiu gritato kiam estas nekapabla determi Estas malferma on epäilty suodatin. Tio okazas por skanaj tipoj en kiuj malfermaj hasnoj donas neniun reactionon. La manko de respono ankai povis signer ke pakafillrilo faligis la enketon a.jnan responson εi ellogis. Nmap ne scias por certa U la haveno estas malferma a respectivation esti inferita. La UDP, IP- protokolo, FIN, NULL, kaj Xmas- skanadoj klasifikas hasnojn tiun manieron.';

$GLOBALS["lang"]['Nmap timing details are found on the bottom of this linked page'] = 'Nmap tempigas detalojn estastrovitaj sur la fondo de tiuligita pacomamento';

$GLOBALS["lang"]['nmis_business_service'] = 'Services aux entreprises de Nmis';

$GLOBALS["lang"]['Nmis Business Service'] = 'Services aux entreprises de Nmis';

$GLOBALS["lang"]['nmis_customer'] = 'La Klientoj';

$GLOBALS["lang"]['Nmis Customer'] = 'La Klientoj';

$GLOBALS["lang"]['nmis_group'] = 'Nmis- ryhmä';

$GLOBALS["lang"]['Nmis Group'] = 'Nmis- ryhmä';

$GLOBALS["lang"]['nmis_manage'] = 'Nmis Gerer';

$GLOBALS["lang"]['Nmis Manage'] = 'Nmis Gerer';

$GLOBALS["lang"]['nmis_name'] = 'Nomo de Nmis';

$GLOBALS["lang"]['Nmis Name'] = 'Nomo de Nmis';

$GLOBALS["lang"]['nmis_notes'] = 'Nmis Nomoj';

$GLOBALS["lang"]['Nmis Notes'] = 'Nmis Nomoj';

$GLOBALS["lang"]['nmis_poller'] = 'Nmis Poller';

$GLOBALS["lang"]['Nmis Poller'] = 'Nmis Poller';

$GLOBALS["lang"]['nmis_poller_uuid'] = 'Nmis Poller Uuid';

$GLOBALS["lang"]['Nmis Poller Uuid'] = 'Nmis Poller Uuid';

$GLOBALS["lang"]['nmis_role'] = 'Nmis Ro';

$GLOBALS["lang"]['Nmis Role'] = 'Nmis Ro';

$GLOBALS["lang"]['No'] = 'Neniu';

$GLOBALS["lang"]['No Devices Returned'] = 'Neniu rimedo revenis';

$GLOBALS["lang"]['No Google Maps API Key present, you will not be able to display the map.'] = 'API Google Mapsi de Neniu Vi ne povas montri la mapon.';

$GLOBALS["lang"]['No License for Professional or Enterprise'] = 'Neniu permesilo por Profesia a';

$GLOBALS["lang"]['No Results'] = 'Neniuj rezultoj';

$GLOBALS["lang"]['No data in License Key'] = 'Neniuj datenoj en clave delicencia';

$GLOBALS["lang"]['No database upgrade required at this time.'] = 'Neniu εisdatigo postulita en tiu tempo.';

$GLOBALS["lang"]['No devices are in the database.'] = 'Neniuja paratoj estas en la datumbazo.';

$GLOBALS["lang"]['Node'] = 'Neniu';

$GLOBALS["lang"]['None'] = 'Neniu';

$GLOBALS["lang"]['Norfolk Island'] = 'Norfolkinako';

$GLOBALS["lang"]['Normal'] = 'Norma normo';

$GLOBALS["lang"]['Northern Mariana Islands'] = 'Nord- Marianoja';

$GLOBALS["lang"]['Norway'] = 'Norvegio Norvegio';

$GLOBALS["lang"]['Norwegian'] = 'Norvega';

$GLOBALS["lang"]['Not Applicable'] = 'Ne aplike bla';

$GLOBALS["lang"]['Not Checked'] = 'Ne controlis';

$GLOBALS["lang"]['Not Equals'] = 'Ne egalaj';

$GLOBALS["lang"]['Not In'] = 'Neen';

$GLOBALS["lang"]['Not Like'] = 'griaták';

$GLOBALS["lang"]['Not Set'] = 'Ne estas aro';

$GLOBALS["lang"]['Not every computer will be able to successfully complete a benchmark. We have seen in some fail in testing for reasons beyond our control. The logs should help point you in the right direction for these items.'] = 'Ne Ni vidis en kelkaj malsukcesas en testado pro kialoj preter nia kontrolo. La tagaloj devus helpi montri vin en la deksstra direkto por tiuj eroj.';

$GLOBALS["lang"]['Not in the (comma seperated) list'] = 'Listea';

$GLOBALS["lang"]['Not normally used. If set, this requires the device to have an open port (as per Scan Options) to be considered responding. A MAC address, arp response or ping response is not considered sufficient to be considered responding. Useful if a router or firewall between the Open-AudIT server and target IP is responding to port scans on the IPs behalf.'] = 'Ne normale uzata. Se aro, tio postulas la aparato havi malferman hasnon (kiel per Scan Options) esti konsiderita responseado. MAC- adreso, arprespondo epäilty pingrespondo ne estas konsidritaj sufičaj esti konsidritaj rerespontantaj. Utila se itineranto a scepticus fajromuro inter la Open- Audit- servilo kaj celo IP responsible seas al hanskanado sur la IPs- nomo.';

$GLOBALS["lang"]['Note'] = 'Notu';

$GLOBALS["lang"]['Note - Selecting a parent will automatically provide access to its children (although it wont be shown here).'] = 'Notu: Elekki gepton a skeptigos al iron al siaj infanoj (kvankam εi ne estos montrita .i tie).';

$GLOBALS["lang"]['Note, you may need to make the script executable with'] = 'Notu, vi povas devi igi la manskripton efektivigebla kun';

$GLOBALS["lang"]['Notes'] = 'Eita.';

$GLOBALS["lang"]['notes'] = 'Eita.';

$GLOBALS["lang"]['Notice'] = 'Kahtlustus';

$GLOBALS["lang"]['notin'] = 'Remarque';

$GLOBALS["lang"]['Notin'] = 'Remarque';

$GLOBALS["lang"]['November'] = 'Novembro Novembro Novembro';

$GLOBALS["lang"]['Now for the Subscription ID, click All Services, Subscriptions and copy it.'] = 'Nun por la Suscripción ID, Klaku Köik Teenused, Tellimused kaj kopii εin.';

$GLOBALS["lang"]['Now we need to provide the Azure Active Directory application access to your subscription.<br><br>Click on Resource Groups and then the resource group you would like your Azure Active Directory Application to have access to.<br><br>Click Add. The role should be Contributor and then search for the app (Open-AudIT). Then click Save.<br><br>Now the application has access to the subscription, so we can make API calls. The API calls will be requested on behalf of the application, not your user.'] = 'Nun ni marentaa guezi la Azure Aktiva Adresaro apliki aliro al kautta abono.<br/><br/>Klaku sur Resource Groups kaj tiam la rimedgrupo vi шatus vian Azure Aktivan Adresaron por havi aliro al.<br/><br/>Klakou. La rolo devus esti Kontribuanto kaj tiam ser previtoi la app (Open- Audit). Tiam Klaki Savon.<br/><br/>Nun la aplico havas aliro al la abono, do ni povas fari API vokojn. La API vokoj estos postuladitaj nome de la aplika.';

$GLOBALS["lang"]['nvd_json'] = 'Nvd Json';

$GLOBALS["lang"]['Nvd Json'] = 'Nvd Json';

$GLOBALS["lang"]['ORDER BY'] = 'OKI';

$GLOBALS["lang"]['OS'] = 'OS';

$GLOBALS["lang"]['OS Families'] = 'OS familioj';

$GLOBALS["lang"]['OS Family'] = 'Famille';

$GLOBALS["lang"]['OS Group'] = 'Os- ryhmä';

$GLOBALS["lang"]['OUTPUTS'] = 'TULEMUSÉ';

$GLOBALS["lang"]['oae_manage'] = 'Oae Gerer';

$GLOBALS["lang"]['Oae Manage'] = 'Oae Gerer';

$GLOBALS["lang"]['object_ident'] = 'Objektoj Ident';

$GLOBALS["lang"]['Object Ident'] = 'Objektoj Ident';

$GLOBALS["lang"]['Obtain top management support'] = 'Obtenga la dirección administrateur subteno';

$GLOBALS["lang"]['October'] = 'Oktobro Oktobro Oktobro';

$GLOBALS["lang"]['Offset'] = 'Anta';

$GLOBALS["lang"]['Okta'] = 'Okta';

$GLOBALS["lang"]['Oman'] = 'Omano Omano';

$GLOBALS["lang"]['omk_uuid'] = 'Omk Uuid';

$GLOBALS["lang"]['Omk Uuid'] = 'Omk Uuid';

$GLOBALS["lang"]['On'] = 'Sur sur la';

$GLOBALS["lang"]['On Windows, Open-AudIT uses WMI as it is primary method of auditing. Windows has a notorious reputation where remote WMI is concerned. It tends to either <i>just work</i> or some mystery item on the target requires changing. If you are experiencing difficulty auditing remote Windows PCs, we have created a script called test_windows_client.vbs. You can run this script <strong>locally</strong> on the machine in question, after signing on as the user that is used by Open-AudIT to perform the audit. The script makes <strong>no changes</strong> to the target devices. It checks most (not all) of the items below and generates PASS, FAIL and INFO tags for various properties. NOTE - If your target system is being audited correctly, you should not change any settings. Some of the below do not exist on Windows PCs that are able to be audited and some do exist. Only change settings if your discoveries on particular PCs are not working as intended.'] = 'Sur Fenestroj, Open- Audit utiligas WMI kiam εi estas primara metodo de reviziado. Fenestroj havas konatan reputacion kie malpreksima WMI estas maltrankvila. Ma kaldun kaplustama <i>Nincs magyar neve</i> a Se vi spertas malcomediecon reviziantan malpreksimajn Fenestrojn, ni kreis manikripton nomitan testwindows _ client.vbs. Vio povas kuri <strong>Loke</strong> En la ma apretino concernita, post subskribado kiel la uzanto kiu estas utiligita fare de Open- Audit por elfari la revizion. La maniskripto faras <strong>Neniuj gritenousoj</strong> La célaparatoj. Se a través de celsistemo estas reviziita εuste, vi ne devus дерини наннои jujn ajn agordojn. Kelkaj el la malsupre ne ekzistas sur Fenestroj kiuj povas et reviziitaj kaj kelkaj eksistas. Sur specialaj Komputiloj ne funkcias kiel celite.';

$GLOBALS["lang"]['On the Tasks List page, click the <i>Add New</i> button to configure a task.'] = 'Sur la ülesanded Nimekiri paεo, klakas la <i>Aldonu novan</i> Butono por agordi ülesanne.';

$GLOBALS["lang"]['On the field <i>Match String</i> you should provide the name of the software that you want to track. You can use the percent sign (%) as a wildcard in where required.'] = 'Sur la kampo <i>Cierre de partido</i> Vi bruts providoni la nomon de la programmaro, kiun vi volas printi. Vi povas uzi la procentan signon (%) kiel sova quicallyan karton en kie necesse.';

$GLOBALS["lang"]['On the next page you will be able to select Access Keys and see your key or create a new key.'] = 'Sur la sekva pa O vi povos elekti Alirajn ';

$GLOBALS["lang"]['On the target Windows PC, run the DCOM utility and verify (or set) the below attributes. Start -> Run, Enter DCOMCNFG and press OK. This will open the DCOMCNFG window.'] = 'Sur la celo Windows PC, prizorgas la DCOM- serva Konecu - titulado Run, Entriz DCOMCNFG kaj gazetaro Bien. Tio malfermos la DCOMCNFG- fenestoni.';

$GLOBALS["lang"]['On the top right (underneath the menu bar) you will see several buttons. These allow you to select another dashboard, set the current dashboard as your homepage (if it is not already) and edit the current dashboard (if you have permission).'] = 'Sur la supra dekstra (sub la menuolinkejo) vidos plurajn butonojn. Tiuj permesas al vi selekti alphin da aprettabulon, metis la nunan armatuurlaud kiel via hejmpa armato (se licensili ne estas jam) kaj redakki la nunan da ejerciciotabulon (se vi havas perminon).';

$GLOBALS["lang"]['On-Premise, Not Cloud'] = 'Ankerias, Ne Nubo';

$GLOBALS["lang"]['Once an Additional Field has been created it can be used in queries and groups just like any other attribute in the database.'] = 'Poste kiam Täiendav väli estis kreita εi povas esti uzita en demandeoj kaj grupoj ekzakte kiel iu alias atiguto en la datumbazo.';

$GLOBALS["lang"]['Once commented out, your certificate will be validated, but may also fail this validation if you are using self-signed certificates and have not configured your server correctly.'] = 'Post kiam komentite, via aestilo estos konfirmita, sed ankai povas malsukkesi tiun validumadon se vi uzas mem- subskribitajn aestilojn kaj ne formis linnapáca servilon εuste.';

$GLOBALS["lang"]['Once the script has run on a target, should the script delete itself.'] = 'Post kiam la maniskripto kuris sur celon, la maniskripto forigas péché.';

$GLOBALS["lang"]['Once those initial queries (snmp, ssh, wmi) are complete, if the device is a supported by the audit scripts (Windows, Linux, OSX, AIX, HP-UX, Solaris and ESXi), the correct audit script will be copied to the target and executed. The audit script will self delete upon completion. The result will be stored on the target machine as an XML file. The Open-AudIT server will then retrieve the result file for processing and delete the result file on the target. The location the audit script is copied to on the target device (at least for SSH audits) is configurable by editing the discovery_linux_script_directory config item. By default it is set to /tmp/. This may need changing if /tmp has noexec set. The result file is then processed and the device details updated within Open-AudIT.'] = 'Post kiam tiaj omencaj demandoj (snmp, ssh, wmi) estas kompletaj, se la aparato estas apogita per la reviziomanuskriptoj (Windows, Linukso, OsX, AIX, HP- UX, Solaris kaj ESXi), la εusta reviziomanuskgita estos koopiita alviiti La revizio manikripto mem forigos sur kompletigo. La rezulto estos stokita sur la celma apretino kiel XML- dosiero. La Open- Audit- servilo tiam prenos la rezultan dosieron por pretigo kaj forigi la rezultan dosieron sur la celo. La loko kiun la reviziomanuskripto estas kopita al sur la celaparato (almena support por SSH-revizioj) estas formita redactante la eltrova.o _ linux _ script _ rektan konfikobjekton. L \'utution de l\' énergie nucléaire dans le secteur de l \'énergie et de l\' énergie, y compris l \'énergie et l\' énergie Tio povas bezoni рan La rezulta dosiero tiam estas prilaborita kaj la aparato detaloj εisdatigitaj ene de Open- Audit.';

$GLOBALS["lang"]['Once you click the execute button, Open-AudIT will spawn a process to initiate the discovery and return the user to the discovery details page. The newly spawned process takes the configured discovery options and executes Nmap commands to determine the initial list of IP addresses to be scanned (or queries Active Directory if that type is used). Each IP to be scanned is placed into a queue. Once the initial process has completed (and there are IPs to be scanned in the queue) a number of processes will be spawned to further scan each IP in parallel. This number of processes is configurable in the configuration, edit the attribute <i>queue_limit</i>. By default this is set to 20.'] = 'Post kiam vi klakas la efektivitan buton, Open- Audit suvut procezon por iniciati la eltrova La lastatempe generita procezo prenas la formitajn eltrova.oelektojn kaj efektivigas Nmap komandojn por determini la omencan Listan de IP- adresoj por esti skanitaj (kahtlusega demandoj Active Directory se tiu tipo estas uzita). Imitaiu IP esti skanita estas metita en atendovicon. Poste kiam la omenca procezo kompletigis (kaj ekszentas IPoj por etisti skanita en la atendovico) kelkaj procezoj estos generitaj al plu skana... Tiu nombro da procezoj estas konfumbla en la konfiguracio, redakki la attributon. <i>Järjekorra _ lima</i>. deca.lte tio estas metita al 20.';

$GLOBALS["lang"]['Once you have chosen your devices to edit, click the pencil button on the top right of the table.'] = 'Poste kiam vi elektis viajn aparatojn redakki, klaki la krajonon sur la supra rajto de la tabla.';

$GLOBALS["lang"]['Once you have done this, Open-AudIT will attempt to verify your user logon details against the configured Auth Method. If the user has valid credentials and <code>use_authorisation</code> is set, Open-AudIT will ask for the list of groups that the user belongs to. If the user is in the corresponding groups for Open-AudIT Roles and Orgs, those Roles and Orgs will be applied to that user.'] = 'Post kiam vi faristion, Open- Audit Provos konfirmi viajn uzantemblemojn detalojn kontra. Se la uzanto havas validajn akredita <code>use_authorisation</code> Estas metita, Open- Audit petos la listan de grupoj kiujn la uzanto apartenas al. Se la uzanto estas en la ekvialentaj grupoj por Open- Audit Roloj kaj Orgs, tiaj Roloj kaj Orgs estos aplikitaj al tiu uzanto.';

$GLOBALS["lang"]['Once you have generated a Baseline Definition you can schedule it to be run against a specified group of devices.'] = 'Post kiam vi generis Bazlinio- Difinon vi povas plani liukoinen por esti prizorgita kontra epäilty perozigita grupo de aparatoj.';

$GLOBALS["lang"]['Once you have those items, in Open-AudIT Enterprise you can go to menu -> Discover -> Clouds -> Create Clouds, select the <i>Amazon AWS</i> type and paste them in. Done.'] = 'Produits chimiques en Open- Audit Enterprise vi povas iri al menuo - Malkovro - confianza Nuboj - titulado Krei Nuboj, elektu la <i>Amarone</i> Tajpu kaj preterpasis Ilin. Hécho.';

$GLOBALS["lang"]['Once you have those items, in Open-AudIT Enterprise you can go to menu -> Discover -> Clouds -> Create Clouds, select the <i>Microsoft Azure</i> type and paste them in. Done.'] = 'Produits chimiques en Open- Audit Enterprise vi povas iri al menuo - Malkovro - confianza Nuboj - titulado Krei Nuboj, elektu la <i>Microsoft Azure</i> Tajpu kaj preterpasis Ilin. Hécho.';

$GLOBALS["lang"]['Once you have your cloud credentials, it is merely a matter of creating a new cloud and running the discovery - or scheduling first/future discoveries. Make sure you also have the credentials required to log on to your cloud machines, and it is all done for you just like a regular discovery. Credentials for your cloud'] = 'Post kiam vi havas viajn nubajn akredita.ojn, clucipei estas simply demando pri kreado de nova nubo kaj prizorgado de la eltrovao - katlus planante unuajn / futurajn eltrovaojn. Certigu ke vi anka... havas la akredita.ojn postulatajn por ensaluti al viaj nubaj mainoj, kaj εi estas Čio farita por vi ekzakte kielregula eltrova. Credenciales por vía nubo';

$GLOBALS["lang"]['One of <code>3x2</code>, <code>4x2</code>, <code>4x3</code> or <code>4x4</code>.'] = 'Unu el la <code>3x2</code>, <code>4x2</code>, <code>4x3</code> a <code>4x4</code>.';

$GLOBALS["lang"]['One of Campus Area Network, Cloud Network, Enterprise Private Network, Home Area Network, Local Area Network, Metropolitan Area Network, Passive Optical Local Area Network, Personal Area Network, Storage-Area Network, System-Area Network, Virtual Private Network, Wide Area Network, Wireless Local Area Network.'] = 'Uniu el Campus Area Network, Cloud Network, Enterprise Private Network, Home Area Network, Local Area Network, Metropolitan Area Network, Passiivinen Optical Area Network, Personal Area Network, Storage Area Network, System Area Network, Virtual Private Network, Wide Area Network, Local Area Network.';

$GLOBALS["lang"]['One of Development, Disaster Recovery, Evaluation, Pre-Production, Production, Testing, Training, User Acceptance Testing'] = 'Unu el Evoluo, Recuperación de Desastres, Evaluación, Préproducción, Producción, Pruebas, Capacitación, Pruebas de Aceptación Uzanto';

$GLOBALS["lang"]['One of allocated, delegated, planning, reserved, unallocated, unknown, unmanaged. Defaults to allocated.'] = 'Unu el asignita, delegita, planado, rezervita, neallokita, nekonata, neadminis. Défa.';

$GLOBALS["lang"]['One of either <code>active directory</code> or <code>openldap</code>.'] = 'Unu el imeline <code>active directory</code> a <code>openldap</code>.';

$GLOBALS["lang"]['One of: antivirus, backup, firewall, approved, banned, ignored or other.'] = 'Unu el: Kontra katlustusviririus, sekurmuro, aprobita, malpermeita, unitterebrat kaphust.';

$GLOBALS["lang"]['One other item to be careful of - make sure you use the hostname (or fqdn) of your LDAP Server that matches what is in the certificate (not just the LDAP Servers IP address) when creating the LDAP entry in Open-AudIT.'] = 'Uniu également objectto por esti singarda de - certigu ke vi uzas la mastro- nomon (kahtlus fqdn) de via LDAP Servilo kiu egalas kio estas en la aestilo (ne...';

$GLOBALS["lang"]['Online Documentation'] = 'Reta dokumentado';

$GLOBALS["lang"]['Open'] = 'malfermita';

$GLOBALS["lang"]['Open Data'] = 'Malfermaj datenoj';

$GLOBALS["lang"]['Open Source'] = 'Malferma Fonta';

$GLOBALS["lang"]['Open-AudIT'] = 'Audit d \'Avaa';

$GLOBALS["lang"]['Open-AudIT Community source code is available on GitHub. You are encouraged to inspect any code you have concerns about, and because it is open source - you are also encouraged to ask us about any issues you have or report any findings. We are always more than happy to accept code contributions, vulnerability reports, or even simple questions. We are here to help.<br><br>The audit scripts themselves (Windows, Linux, MacOS, et al) are deliberately written in readable native shell script (VBScript for Windows, Bash for *nix). You can see exactly what commands are run. You can remove any commands you feel you do not need. You can ask a third party to inspect the code for you and (if you want to) report any findings.<br><br>Open-AudIT Enterprise performs the add-on commercial functions for Open-AudIT Community. It is included as a single compiled file with no external dependencies. Where Enterprise itself performs the function(s), if you are concerned with any issues Firstwave is happy to work through them with you - just ask! Try that with another commercial software vendor!'] = 'Open- Audit Komunuma fondkodo estas hasbla sur GitHub. Vi estas instigita por inspekti ajnan kodon kiun vi havas zorgojn pri, kaj clearficari estas malferma fonto - vi anka. Estas instigitaj por demandi nin pri juj temoj vi havas a spéculative raporti jujn ajn rezultojn. Ni estas Ni estas - tie por heldi.<br/><br/>La reviziomanuskriptoj mem (Windows, Linukso, MacOS, et al) estas konscie skribitaj en legebla indi... ena рelmanökripto (VBScript por Fenestroj, Bash por nix). Vi povas vidi kion komandoj estas kuri. Vio povas forigi jujn ordonojn, kiujn vi sentas, ke vi ne bezonas. Vi povas demandi al tria partio inspekti la kodon por vi kaj (se vi volas) raporti jujn ajn rezultojn.<br/><br/>Audit Enterprise elfaras la aldonajn komercajn funkciojn por Open- Audit- komunumo.... Le Conseil européen de Lisbonne a adopté le rapport de la Commission sur la mise en \'uvre de la stratégie de Lisbonne. La unua estas felivisteäa lapi kun vi - nur demandi! Provution kun alias Komerca Programme vendisto!';

$GLOBALS["lang"]['Open-AudIT Device Selection'] = 'Selectción de dispositivos Audit d \'Avaa';

$GLOBALS["lang"]['Open-AudIT Enterprise has the ability to choose from a pre-defined list of discovery scan options and also to customise individual options per discovery.'] = 'Open AudIT Enterprise havas la kapablon elekti de anta.-difinita lista de eltrova.o skani opciojn kaj anka.adapti infituajn opciojn per eltrova.';

$GLOBALS["lang"]['Open-AudIT Enterprise. High-scale flexible discovery and audit solution for large networks. All the features of Professional plus: Baselines, File Auditing, Cloud Discovery, Rack Management, Configurable Role Based Access Control including Active Directory and LDAP.'] = 'Entreprisouverte d \'Audit. Alt- skala flessebla eltrova personnalizadoiuj ecoj de Profesia pluso: Bazlinioj, Auditoría de archivos, Cloud Discovery, Gestión de cubiertas, Configable Role Based Inkluzive de Aktiva Adresaro kaj LDAP.';

$GLOBALS["lang"]['Open-AudIT Field Name'] = 'Ouvrir- Audit - Kamponomo';

$GLOBALS["lang"]['Open-AudIT Licenses'] = 'Open- Audit- licencoj';

$GLOBALS["lang"]['Open-AudIT Options'] = 'Open- Audit Opcioj';

$GLOBALS["lang"]['Open-AudIT Professional and Enterprise include Enhanced Reporting features, including time-based, historical, and muti-query based reporting features in multiple formats.'] = 'Open- Audit Professional kaj Enterprise inkludas Enhanced Reporting- trajtojn, inkluzive de temp- bazitaj, historyj, kaj muti- query bazigis raportantajn ecojn en multoblaj formatj.';

$GLOBALS["lang"]['Open-AudIT Professional has the ability to choose from a pre-defined list of discovery scan options, per discovery.'] = 'Open AudIT Profesia havas la kapablon elekti de anta.-difinita lista de malkovro- skanadaj opcioj, per eltrova.';

$GLOBALS["lang"]['Open-AudIT Professional. The world\\'] = 'Profesional de Open- Audit. La mondo estas';

$GLOBALS["lang"]['Open-AudIT can be configured to use LDAP servers (Microsoft Active Directory and/or OpenLDAP) to authenticate and authorize a user and in addition, to create a user account in Open-AudIT using assigned roles and orgs based on LDAP group membership. It can also use'] = 'Open- Aud IT povas esti formita por uzi LDAP- servilojn (Microsoft Active Directory kaj / a stided OpenLDAP) al a auditedtentikudo kaj rajtigi uzanton krome, krei uzantonton en Open- Audit uzanta asignitajn rolojn kajn bazitajme surmbre...';

$GLOBALS["lang"]['Open-AudIT can be run on your server in your data center. It does not need access to the internet at all. Even the installation on Linux where we use the distribution package manager for our prerequisites can be negated by you using an in-house and security team-approved package repository.<br><br>Open-AudIT does not store any of your data in the cloud. Even licensing information can be provided without having to access the internet from the Open-AudIT server.<br><br>Sure, it is easier to allow it to access the internet to download packages (including security fixes) for your distribution, but that is up to you and your security policies. Open-AudIT does not need the internet.'] = 'Ava- Aud.i povas esti prizorgita sur linapáca servilon en via datumcentro. Ne bezonas aliron al interreto. Evisión la secondacion<br/><br/>Ava- Aud Tio ne enhavas jujn ajn da viaj datumoj en la nubo. Eruga licenciadinformoj povas et disponigitaj sen devi aliri la Interreton de la Open- Audit- servilo.<br/><br/>Certe, estas pli facile permesi al εi aliri la Interreton por el apretuti paka.ojn (inkluzive de sekureco fixas) por via distributio, sedtio estas εis vi kaj via sekureco politikoj. Open- Audit ne bezonas la interreton.';

$GLOBALS["lang"]['Open-AudIT can download, parse and use NIST CVE Vulnerability reports.'] = 'Open- Audit povas el apretuti, parse kaj uzi NIST CVE Vulnérabilité raportoj.';

$GLOBALS["lang"]['Open-AudIT can show in one of several languages. How you can improve this?'] = 'Ava- Aud Je povas montri en unu el pluraj lingvoj. Kiel vi povas plibonigi?';

$GLOBALS["lang"]['Open-AudIT can store information in additional fields that are associated with each device.'] = 'Ava- Aud - I povas stoki informatojn en kromaj kapoj kiuj estas rilataj al.';

$GLOBALS["lang"]['Open-AudIT can use Microsoft Entra (previously known as Microsoft Azure Active Directory) as an authentication method. This means your user in Open-AudIT can click the Logon using Entra button on the logon page and use their Entra credentials to logon. That user will need to already exist within Open-AudIT (and be assigned'] = 'Open- Audit povas uzi Microsoft Entra (anta... konata kiel Microsoft Azure Aktiva Adresaro) kiel a guidikmetodo. Tio signfas vian uzanton en Open- Audit povas klaki la Logon uzantan Entra buton sur la logon pacomingo kaj uzi iliajn Entra akredita. Tiu uzanto murtaa jam eksisti ene de Open- Audit (kaj eti asignita)';

$GLOBALS["lang"]['Open-AudIT can use OKTA as an authentication method. This means your user in Open-AudIT can click the Logon using OKTA button on the logon page and use their OKTA credentials to logon. That user will need to already exist within Open-AudIT (and be assigned Roles and Orgs), but will not need to remember a separate set of logon credentials.'] = 'Ava- Aud IT povas utiligi OKTA kiel a skeptikmetodon. Tio signfas vian uzanton en Open- Audit povas klaki la Logon uzantan OKTA buton sur la logon pa.o kaj uzi iliajn OKTA akredita. Ojn al logon. Tiu uzanto devos jam ekzisti ene de Open- Audit (kaj et asti asignita Roloj kaj Orgs), sed ne drobues memori aparman aron de phoologaj akredita.';

$GLOBALS["lang"]['Open-AudIT comes with many queries inbuilt. If you require a specific query and none of the pre-packaged queries fit your needs, it is quite easy to create a new one and load it into Open-AudIT for running.'] = 'Open- Aud IT venas kun multaj demandoj enconruitaj. Se vi postulas specifan atendon kaj neniu el la anta... -pakitaj demandoj konvenas viajn bezonojn, estas tre facile krei novan kaj родном in en Open- Audit por kurado.';

$GLOBALS["lang"]['Open-AudIT has a JSON Restful API to be used both in the web interface and via JSON requests.'] = 'Open- Audit havas JSON Restful API por esti uzita kaj en la interretinterfaco kaj per JSON- petoj.';

$GLOBALS["lang"]['Open-AudIT has a granular permissions system to determine what a user within Open-AudIT can do, and the items he can do it to. Open-AudIT can be entirely self-contained, or use Active Directory or OpenLDAP for authentication and/or authorization.<br><br>It is entirely up to the administrator of Open-AudIT how they would like the Role Based Access Control to work.'] = 'Ava- Aud Tio havas grajnecan permeson sistemon determini kion uzanto ene de Open- Audit povas fari, kaj la eroj li povas fari εin. Open- Audit povas esti totale mem- konservita, katlus uzi Aktivan Adresaron kaptlus OpenLDAP por konfirmo kaj / a.<br/><br/>';

$GLOBALS["lang"]['Open-AudIT has a powerful change detection engine. Any device attributes that are added, removed or changed will be detected and stored. These changes can be reported upon and the relevant data confirmed as to what was expected from your company change and release process.<br><br>When a device is audited, attributes are divided into sections which correspond to tables in the database.<br><br>Each device (computer, router, printer, et al) has an entry in the <code>devices</code> table. Each entry in the devices table has an <code>id</code> column. This value is unique - it is an auto-incrementing id.<br><br>When the audit result is processed, each item in each section has its audit result compared to what is in the database.<br><br>For each section, if the key columns (see below table) contain the identical values, it is considered already installed and has its <code>last_seen</code> attribute updated. No change_log entry is created.<br><br>If any of the key columns do not match, it is considered a new attribute and is inserted. A <code>change_log</code> entry is created if the device had other attributes already present in the table.<br><br>At the completion of the audit processing, any database items that have not been updated (or inserted) are considered to not be present. The <code>current</code> attribute for this item is set to <i>n</i> and a change_log entry is generated.<br><br>So, we can determine if something is currently installed - the current column is <i>y</i>.<br><br>We can determine when something was initially detected - the <i>first_seen</i>.<br><br>We can determine if something was installed after the initial audit - first seen will be different in the component and device tables.<br><br>We can determine if something is not currently installed, but previously was - current = <i>n</i>.<br><br>We can determine the last time we detected an item - last_seen.<br><br>At any given point, we can determine what was on a system - by using the audit_log table and selecting the relevant components based on first_seen and last_seen.<br><br>Each section and its matching key columns are below.<br><br>NOTE - There are some exceptions as detailed below.<br><br>*1 - For network cards, if the computer is a VMware Esx machine it also uses the net_index and connection columns.<br><br>*2 - For partitions, f the computer is an AIX machine, we use the partition name.'] = 'Ava- Aud.i havas commercan шанном an detektomotoron. [...] Tiuj sur kaj la medifaj datenoj konfirmitaj kiel al kio estis atendita de via firmao explakanaεo kaj eldonprocezo.<br/><br/>Kiam aparato estas reviziita, atregultoj estas distitaj en sekciojn kiuj egalrilatas al tabloj en la datumbazo.<br/><br/> imitaiu aparato (komputio, tiineranto, printilo, et al) havas eniron en la <code>devices</code> Tablo. Mezcla en la tablo de aparatoj havas <code>id</code> Kolono. Tiu Valoro estas unika - εi estas a skepto-inklina id.<br/><br/>Kiam la reviziorezulto estas prilaborita Sekcio havas sian reviziorezulton komparte kun kio estas en la datumbazo.<br/><br/>Por <code>last_seen</code> Actif à εisdatigita. Neniu griteno estas kreita.<br/><br/>Se ette de la esencaj kolonoj ne egalas, εi estas konsiderita nova atigita to kaj estas enigita. A.A. <code>change_log</code> eniro estas kreita se la aparato havis alpijn atrophojn jam nunaj en la tabelo.<br/><br/>Alternativae la kompletigo de la reviziopretigo La <code>current</code> Atributo por titu objektto estas atinacita al <i>n</i> Ranso estas generita.<br/><br/>Tiel, ni povas determini <i>Oui.</i>.<br/><br/>Ni povas determi kiam io estis komence detektita - la <i>La unua</i>.<br/><br/>Ni povas determini <br/><br/>Ni povas determini Roveru io ne estas nuntempe secretita, sed anta guide estis... <i>n</i>.<br/><br/>Ni povas determi lastan fojon kiam ni detektis objectkton - lastan.<br/><br/>Iu anta.fiksita punkto, ni povas determi ki estis sur sistemo. utiligante la revizoran tablon kaj selektante la medifajn kompontojn bazitaj sur uua _ seen kaj last _ vidn.<br/><br/> Imitaiu sekcio kaj... jaj egalaj esencaj kolonoj estas malsupre.<br/><br/>Eksistas kelkaj esceptoj kiel detalaj malsupre.<br/><br/>. 1 - Por sendostaciaj kartoj, se la komputio estas VMware Esx- marajeino εi ankareazas la tt _ index kajligokolonojn.<br/><br/>2 ';

$GLOBALS["lang"]['Open-AudIT is a program designed to track and report on your IT and related assets details and configuration. Open-AudIT can tell \"What\\'] = 'Open- Aud IT estas programme dizajnita por prindi kaj rastori pri via IT kaj rilataj aktiva.oj detaloj kaj konfiguracio. Ouvrir- Audit povas diri "Kio"';

$GLOBALS["lang"]['Open-AudIT makes it easy to edit the attributes of multiple devices at once.'] = 'Ava- Aud ';

$GLOBALS["lang"]['Open-AudIT needs specific directory permissions to be able to create files, upload results, etc. Please set as below.'] = 'Ava- Aud Bezonas specifajn adresarpermesojn povi krei dosierojn, al platouti rezultojn, ktp. Bonvolu sidiêi.';

$GLOBALS["lang"]['Open-AudIT provides many built-in queries and makes it simple to create your own.'] = 'Open- Aud IT disponigas multajn enconstruitaj n demandojn kaj igas liukoinen simplia krei vian propan.';

$GLOBALS["lang"]['Open-AudIT ships with inbuilt roles for admin, org_admin and user.<br><br>Generally, a user who is an administrator of the Open-AudIT application itself should have admin and possible org_admin roles.<br><br>A user can have multiple roles. The permission will be applied at the most permissive level - IE, if a user has the roles of user and org_admin, they will be able to create locations because org_admin grants this permission, even though the user role does not.<br><br>The admin role allows access to collections such as configuration, database, groups, ldap servers, logs, queries and roles. Global items that affect the entire application.<br><br>The org_admin role usually allows create, read, update and delete actions for any collection that contains the org_id column. Virtually all data except some of the collections mentioned above will contain an <code>org_id</code> column.<br><br>The user role generally allows read only access to all items with an org_id column.'] = 'Open- Aud IT- sortipoj kun enkertuitaj roloj por admin, org _ admin kaj uzanto.<br/><br/>Enerale, uzanto kiu estas administration de la Open- Audit- aplika.<br/><br/>Uzanto povas havi plurajn rolojn. La permeso estos sur diversamirita sur la plej persisiva nivelo - IE, se uzanto havas la rolojn de uzanto kaj org _ admin, ili povos krei lokojn clarar org _ admin donas tiun perseson, e preveía se la uzantrolo ne faras.<br/><br/>La admin rolo permesas aliron al kolektoj kiel ekzample konfiguracio, datumbazo, grupoj, ldap serviloj, tagaloj, demandoj kaj roloj. Tutmondaj eroj kiuj befolyásolja la tutan aplikon.<br/><br/>La org _ admin rolo kutime permesas krei, legi,.. Praktike <code>org_id</code> Kolono.<br/><br/>La uzantrolo... Enerale permesas legi nur aliron al...';

$GLOBALS["lang"]['Open-AudIT ships with inbuilt roles for admin, org_admin and user.<br><br>Generally, a user who is an administrator of the Open-AudIT application itself should have admin and possible org_admin roles.<br><br>A user can have multiple roles. The permission will be applied at the most permissive level - IE, if a user has the roles of user and org_admin, they will be able to create locations because org_admin grants this permission, even though the user role does not.<br><br>The admin role allows access to collections such as configuration, database, groups, ldap servers, logs, queries and roles. Global items that affect the entire application.<br><br>The org_admin role usually allows create, read, update and delete actions for any collection that contains the org_id column. Virtually all data except some of the collections mentioned above will contain an org_id column.<br><br>The user role generally allows read only access to all items with an org_id column.'] = 'Open- Aud IT- sortipoj kun enkertuitaj roloj por admin, org _ admin kaj uzanto.<br/><br/>Enerale, uzanto kiu estas administration de la Open- Audit- aplika.<br/><br/>Uzanto povas havi plurajn rolojn. La permeso estos sur diversamirita sur la plej persisiva nivelo - IE, se uzanto havas la rolojn de uzanto kaj org _ admin, ili povos krei lokojn clarar org _ admin donas tiun perseson, e preveía se la uzantrolo ne faras.<br/><br/>La admin rolo permesas aliron al kolektoj kiel ekzample konfiguracio, datumbazo, grupoj, ldap serviloj, tagaloj, demandoj kaj roloj. Tutmondaj eroj kiuj befolyásolja la tutan aplikon.<br/><br/>La org _ admin rolo kutime permesas krei, legi,.. Praktike <br/><br/>La uzantrolo... Enerale permesas legi nur aliron al...';

$GLOBALS["lang"]['Open-AudIT ships with several pre-configured Dashboards. If you are a Professional user, you can select between two of these and set it as your default page when you logon. If you are an Enterprise user, you can not only select between the five preconfigured Dashboards, but you also have the ability to create your own.'] = 'Ouvrir Audit - apretipoj kun pluraj anta.- konfiguritaj Armatuurlauad. Se vi estas Profesia uzanto, vi povas elekti inter du el tiauj kaj meti εin kiel via dea guidlta pa clearficao kiam vi logon. L \'entreprisuzanto, vi ne povas nur selekti inter la kvin anta.konfiguritaj Tableau de bord, sed vi anka... havas la kapablon krei vian propran.';

$GLOBALS["lang"]['Open-AudIT should be installed on 64bit Windows <strong>Server</strong> systems only. Windows 10 and Windows 11 are <strong>not</strong> supported.'] = 'Open- Audit devus esti instalia sur 64b Fenestroj <strong>Servilo</strong> Nur sistemoj. Windows 10 kaj Vindozo 11 estas <strong>Oui.</strong> Apogis.';

$GLOBALS["lang"]['Open-AudIT uses Nmap in its Discovery function. Nmap probes devices for open ports. Devices ideally should respond with open for working ports. Devices often do not respond with this. The varying responses are detailed below.'] = 'Open- Audit Uzas Nmap en Žia Discopy- funkcio. Nmap sondid aparatoj por malfermaj hasnoj. Destinivos idéale devus responsi kun malferma por labourhavenoj. Il s \'agit d\' une réaction de type al tio. La réponseoj estas detalaj malsupre.';

$GLOBALS["lang"]['Open-AudIT uses Nmap in its Discovery function. Without Nmap, Open-AudIT will not function correctly. Every Open-AudIT install assumes Nmap is installed and will also test for it on the Discovery web pages. More information about Open-AudIT and Nmap is available here'] = 'Open- Audit Uzas Nmap en Žia Discopy- funkcio. Sen Nmap, Open- Audit ne funkcios εuste. Alternativaiu Open- Audit- secreta.o supozas Nmap estas secretita kaj ankai tetos por εi sur la Discovery retpa fapoj. Pli da informaoj pri Open- Audit kaj Nmap nämä havblaj clari huulet';

$GLOBALS["lang"]['Open-AudIT uses Nmap in its Discovery function. Without Nmap, Open-AudIT will not function correctly. Every Open-AudIT install assumes Nmap is installed and will test for it on the Discovery web pages.'] = 'Open- Audit Uzas Nmap en Žia Discopy- funkcio. Sen Nmap, Open- Audit ne funkcios εuste. Alternatituiu Open- Audit- secreta.o supozas Nmap estas secretita kaj tetos por εi sur la Discovery retpaγoj.';

$GLOBALS["lang"]['Open-AudIT uses credentials to access your devices. These are encrypted and stored, just as you would expect.'] = 'Tiuj estas ouvert ';

$GLOBALS["lang"]['Open-AudIT was written by an English speaking Australian. Everything in the application uses English wording. However Open-AudIT has always supported multiple languages for display. These translations are not always correct, because the developers do not natively speak the language of every translation offered.<br><br>What can you do if something is not correct in the translation?'] = 'Avatutaud Evalus skribita fare de angulingva aorgestraliano. Mezcla en la apliko uzas anglan vortigon. Avaa AudIT Apogis multoblajn lingvojn por ekrano. Tiuj tradukoj ne estas clearam εustaj, † ar la programmistoj ne indiilene parolas la lingvon de Čiu traduko ofertis.<br/><br/>Kion vi povas fari se io ne estas εusta en la traduko?';

$GLOBALS["lang"]['OpenLDAP'] = 'OpenLDAP';

$GLOBALS["lang"]['OpenScap is Installed'] = 'OpenScap estas Instalita';

$GLOBALS["lang"]['Opening a Support Ticket?'] = 'Malfermu la sappirakko?';

$GLOBALS["lang"]['openldap_user_dn'] = 'Malferma Uzanto Dn';

$GLOBALS["lang"]['Openldap User Dn'] = 'Malferma Uzanto Dn';

$GLOBALS["lang"]['openldap_user_membership_attribute'] = 'Openldap Uzanto Membrco Atributo';

$GLOBALS["lang"]['Openldap User Membership Attribute'] = 'Openldap Uzanto Membrco Atributo';

$GLOBALS["lang"]['open|filtered'] = 'Malfermita (Inferita)';

$GLOBALS["lang"]['Open|filtered'] = 'Malfermita (Inferita)';

$GLOBALS["lang"]['Operating System'] = 'Funkciiga sistemo';

$GLOBALS["lang"]['Operating System Family Contains'] = 'Funkciiga Sistemo- famille Enhavas';

$GLOBALS["lang"]['Operating Systems'] = 'Funkciigaj Sistemoj';

$GLOBALS["lang"]['Operators'] = 'Opérateur';

$GLOBALS["lang"]['optical'] = 'Optika';

$GLOBALS["lang"]['Optical'] = 'Optika';

$GLOBALS["lang"]['Optimized'] = 'Optimigita';

$GLOBALS["lang"]['Option #1 - Change the data'] = 'Elekto 1 ';

$GLOBALS["lang"]['Option #2 - Change the translation file'] = 'Numéro d \'opcio 2 - ';

$GLOBALS["lang"]['Optional Agent Based Auditing'] = 'Auditoría de Opcia agento Bazita';

$GLOBALS["lang"]['Optional version as audited by Open-AudIT. Use the percent sign % as a wildcard.'] = 'Opcia versio kiel reviziite fare de Open- Audit. Oni uzas la realan modon (AS- finajxon).';

$GLOBALS["lang"]['options'] = 'Elektoj';

$GLOBALS["lang"]['Options'] = 'Elektoj';

$GLOBALS["lang"]['Options, options, options'] = 'Elektoj, opcioj, opcioj';

$GLOBALS["lang"]['Or'] = 'a';

$GLOBALS["lang"]['Or select from the below fields.'] = 'a. Elekti de la subaj kamopj.';

$GLOBALS["lang"]['org_descendants'] = 'Ordre järeltulijad';

$GLOBALS["lang"]['Org Descendants'] = 'Ordre järeltulijad';

$GLOBALS["lang"]['org_id'] = 'Azonosító';

$GLOBALS["lang"]['Org ID'] = 'Azonosító';

$GLOBALS["lang"]['Organisation'] = 'Gépkocsi';

$GLOBALS["lang"]['organisation'] = 'Gépkocsi';

$GLOBALS["lang"]['Organisation Descendants'] = 'Organizo de Descentants';

$GLOBALS["lang"]['Organisations'] = 'Szervezetek';

$GLOBALS["lang"]['Organisations can extend and enhance the level of detail that is stored against every discovered device using custom fields and the open core allows for easy integration into CMDB, event management and ticketing systems.'] = 'Organizoj povas etendi kaj plifottigi la nivelon de detalo kiu estas stokita kontra Il y a aussi un size nombre d \'établissements et de centers d\' enseignement.';

$GLOBALS["lang"]['orgs'] = 'Orgoj';

$GLOBALS["lang"]['Orgs'] = 'Orgoj';

$GLOBALS["lang"]['Orgs Name'] = 'Orgs nomo';

$GLOBALS["lang"]['Orgs in Open-AudIT are a key item. A user has a primary Org as well as a list of Orgs they can access. A user combines this with a list of assigned roles that define what actions they can take on items assigned to the Orgs they have access to. The combination of a users <i>orgs</i> and <i>roles</i> define what they can and cannot do within Open-AudIT.<br><br>Most items in Open-AudIT are assigned to an Org. Devices, Locations, Networks, etc, etc.<br><br>Orgs can have child Orgs. Think of an organisational chart (tree) structure. If a user has access to a specific Org, most of the time (not always) they also have access to that Orgs descendants.'] = 'Orgs en Open- Audit estas esenca objectko. Uzantoj havas primaran Org mismo kiel Lister de Orgas kiun ili povas aliri. Uzanto Kombinas tion kun lista de asignitaj roloj kiuj difinas kiujn agojn ili povas akcepti erojn asignitaj al la Orgs kiujn ili havas aliro al. La kobina <i>Orgoj</i> Kaj <i>Les</i> difinas kion ili povas kaj ne povas fari ene de Open- Audit.<br/><br/>La plej multaj eroj en Open- Audit estas asignitaj al Org. Dispositivos, Lokoj, Retoj, ktp.<br/><br/>Orgoj povas havi Infanon Orgs. Pensu pri organiza kaavio (arbo) strukturo. Se uzanto havas al al specifa Org, la plei granda parto de la tempo (ne...) ili ankai havas al tiu Orgs posteuloj.';

$GLOBALS["lang"]['orientation'] = 'Fizetés';

$GLOBALS["lang"]['Orientation'] = 'Fizetés';

$GLOBALS["lang"]['os'] = 'O';

$GLOBALS["lang"]['Os'] = 'O';

$GLOBALS["lang"]['os_arch'] = 'Os Arch';

$GLOBALS["lang"]['Os Arch'] = 'Os Arch';

$GLOBALS["lang"]['os_bit'] = 'Os Bit';

$GLOBALS["lang"]['Os Bit'] = 'Os Bit';

$GLOBALS["lang"]['os_cpe'] = 'Os Cpe';

$GLOBALS["lang"]['Os Cpe'] = 'Os Cpe';

$GLOBALS["lang"]['os_display_version'] = 'Os Kuvaversioon';

$GLOBALS["lang"]['Os Display Version'] = 'Os Kuvaversioon';

$GLOBALS["lang"]['os_family'] = 'Os perekond';

$GLOBALS["lang"]['Os Family'] = 'Os perekond';

$GLOBALS["lang"]['os_group'] = 'Os- ryhmä';

$GLOBALS["lang"]['Os Group'] = 'Os- ryhmä';

$GLOBALS["lang"]['os_installation_date'] = 'Asenna Dateno';

$GLOBALS["lang"]['Os Installation Date'] = 'Asenna Dateno';

$GLOBALS["lang"]['os_licence_expiry'] = 'Littensi aegumiini';

$GLOBALS["lang"]['Os Licence Expiry'] = 'Littensi aegumiini';

$GLOBALS["lang"]['os_license'] = 'Licencia de Os';

$GLOBALS["lang"]['Os License'] = 'Licencia de Os';

$GLOBALS["lang"]['os_license_code'] = 'Código de licence de Os';

$GLOBALS["lang"]['Os License Code'] = 'Código de licence de Os';

$GLOBALS["lang"]['os_license_mode'] = 'Modo delicencia de Os';

$GLOBALS["lang"]['Os License Mode'] = 'Modo delicencia de Os';

$GLOBALS["lang"]['os_license_type'] = 'Tipo delicencia de Os';

$GLOBALS["lang"]['Os License Type'] = 'Tipo delicencia de Os';

$GLOBALS["lang"]['os_name'] = 'Nombre de Os';

$GLOBALS["lang"]['Os Name'] = 'Nombre de Os';

$GLOBALS["lang"]['os_version'] = 'Versio de Os';

$GLOBALS["lang"]['Os Version'] = 'Versio de Os';

$GLOBALS["lang"]['Other'] = 'Aliaj aliasj';

$GLOBALS["lang"]['Other than that restriction, you are free to select attributes as required. It is a good idea to use the menu'] = 'Krom tiu resonkko, vi estas libera selekti atropojn kiel postulat. Estas bona ideo uzi la menuojn';

$GLOBALS["lang"]['Others'] = 'Aliaj aliasj';

$GLOBALS["lang"]['Our default Integration also enables a discovery on any externally supplied devices. So we ship a default discovery for the Default Integration out of the box. These use the default matching rules, but also enable matching on IP address.'] = 'Nia deha... Tien ni ekspedis dea par défautltan eltrova Tiuj uzas la dea... lltajn egalajn regulojn, sed ankaebligas egalan IP- adreson.';

$GLOBALS["lang"]['Our examples will use the <i>type</i> column.'] = 'Niaj ekzemoj uzos la <i>tipo</i> Kolono.';

$GLOBALS["lang"]['Our framework uploads files here for processing, then deletes them. Think submitted audit results, etc.'] = 'Nia kadro al sortutas dosierojn - Tiam forigas ilin. C \'est ce que j\' ai dit.';

$GLOBALS["lang"]['Our goal with the initial integrations release was specifically for NMIS to Open-AudIT integration to <i>just work</i>. If you are using the programs on Linux, you can literally click a single button to execute the integration. Nothing more is required. Having said that, the integration itself is extremely configurable - so if something is not to your preference, it can easily be changed.'] = 'Nia celo kun la omencaj integri / 1993 / oj estis spécifife por NMIS al Open- Audit integri fluido al Open- Audit <i>Nincs magyar neve</i>. Se vi uzas la programmojn sur Linukso, vi povas la defectvorte klaki unu buton por efektivigi la integriεon. Nenio pli estas bezonata. Diris ke, la integri';

$GLOBALS["lang"]['Our new feature called Vulnerabilities gives you the ability to quickly determine if any devices are affected by any CVE (Common Vulnerability Exposure) - but how?<br><br>FirstWave constantly consumes the output from the Nist NVD feed. We take this and apply a few restrictions, then extract the affected programs and build a SQL query for reporting. Your Open-AudIT instance reaches out to FirstWave and requests any new vulnerabilities on a regular basis. When it receives a new vulnerability record, it is run against the database and the result stored. Each time a device is processed, all matching vulnerabilities are again executed and the result stored. This means when viewing a vulnerability list, we do not need to calculate all affected devices - we already have the result. When you view an individual vulnerability record, we do indeed recalculate the result for this singular vulnerability.<br><br>So, you are always up to date!<br><br>In addition to this, we also calculate the result of all vulnerabilities for all devices daily (usually at a quiet time, say 2am).<br><br>In your instance of Open-AudIT, we allow you to select which vendors you care about. i.e. there is no use retrieving vulnerability records from a vendor whose software you do not use or have installed. By default, our vendor list is Adobe, Apple, Cisco, Google, Microsoft, Mozilla, and Redhat.<br><br>This all sounds very simple, but behind the scenes a <b>lot</b> is going on. For instance, the CVE record contains a list of affected software - but those software names do not match what we receive when we audit a computer. A good example is Apache. Typically, a CVE record will say the affected software is http_server. In reality, this appears as apache2 (Ubuntu), httpd (Redhat), Apache HTTP Server (Windows) - and others. So, we have to first determine what is the actual name of the program we receive when we ask a computer, and there may be multiple names. After that we must parse the CVE record and create a matching SQL statement. Allowing for multiple program names as above, and multiple versions, version ranges, and even multiple different pieces of software (an example is Thunderbird and Firefox in a single CVE). And your instance of Open-AudIT must take this and apply Orgs filtering as well. And that is just a single CVE. What about determining which CVEs you have and do not have? What about adding a vendor to the list later? So many things to consider!<br><br>As well as the usual reporting, we also have a few new widgets available for Dashboards, based on Vulnerabilities data.'] = 'Nia nova trajto nomita Haavavus donas al vi la kapablon rapide determi... uija paratoj estas trafitaj fare de iu CVE (Komuna haavatavuse kokkupuude) - sed kiel?<br/><br/>Première Wave konstante konsumas la produkta Ni prenastion kaj aplikas kelkajn restriktojn, tiam eltiras la trafitajn programmojn kaj konsturas SQL- demandeon por raportado. Via Open- Audit- kazo atingas al FirstWave kaj petas jujn novajn vundingblecojn surregia batso. Kiam εi rizvas novan vundeblecon, εi estas prizorgita kontraluc la datumbazo kaj la rezulto stokita. Parato imitaiun fojon estas prilaborita; Egalaj vundeblecoj noveeri besoin efektivititaj kaj la rezulto stokita. Tio signfas dum spektado de vundemblecolisto, ni ne bezonas kalkuli .iujn trafitajn aparatojn - ni jam havas la rezulton. Kiam vi rigardas indiguan vundeblecon, ni efektive rekalkulis la rezulton por tiu eksterordinara vundebleco.<br/><br/>Clariam estas εis nunna!<br/><br/>Aldone al tio, ni ankarealkalkulas la rezulton de... iuj vundeblecoj por...<br/><br/>En kautta kazo de Open- Audit, ni permesas al vi selekti jiu vendistoj vi zorgas. St ekzistas neniu uzo prenante vundebleediskojn de vendisto kies softvaro vi ne uzas a skeptis. Deta.lte, nia vendristo listas Adobe, Apple, Cisco, Google, Mikrosuto, Mozilla, Kaj Redhat.<br/><br/># # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # <b>Multe néma</b> Iru. Ekzample, la CVE rekordo enhavas listan de trafita softvaro... Sed tiaj softvarnomoj ne egalas kion ni rizvas kiam ni revizias kompution. Bona eczempo estos Apache. Tipe, CVE rekordo diros ke la trafita softvaro estas http _ serveur. Fakte, tio prezentiprias kiel apache2 (Ubuntu), httpd (Redhat), Apache HTTP- palvelin (Windows) - kajilishij. Ni tuhoaa unue determini kio estas la fakta nomo de la programmo kiun ni ricevas kiam ni demandas kompution, kaj povas eksisti multoblaj nomoj. Post tio ni murtaa alazi la CVE- rekordon kaj krei egalan SQL- deklaron. Permesado por multoblaj softvaro (ekzemplo estas Thunderbird kaj Firefox en ununura CVE). Kaj via kazo de Open- Audit tuhoaa preniition kaj apliki Orgs filtradon ankadon. Kaj Tio estas nur ununura CVE. Kion vi havas kaj ne havas? Kion aldoni vendiston al la lista poste? Multaj aferoj por pripensi!<br/><br/>Mismo kiel la kutima raportado, ni anka. havas kelkajn novajn vidinad havblajn por Dashboards, surbaze de Vulnerability datenoj.';

$GLOBALS["lang"]['Our timeout for a SSH response'] = 'Nia tempo por SSH-response';

$GLOBALS["lang"]['Our timeout for a WMI response'] = 'Nia tempigo por WMI- response';

$GLOBALS["lang"]['Our timeout for an SNMP response'] = 'Nia tempo por SNMP- response';

$GLOBALS["lang"]['Our timeout for an audit script response'] = 'Nia tempo por revizio kézművesség';

$GLOBALS["lang"]['output'] = 'Ekster';

$GLOBALS["lang"]['Output'] = 'Ekster';

$GLOBALS["lang"]['outputs'] = 'eksteruloj';

$GLOBALS["lang"]['Outputs'] = 'eksteruloj';

$GLOBALS["lang"]['Overall severity score (0–10).'] = 'Yheensä';

$GLOBALS["lang"]['overwrite'] = 'Kahtlustaja';

$GLOBALS["lang"]['Overwrite'] = 'Kahtlustaja';

$GLOBALS["lang"]['owner'] = 'Posedanto';

$GLOBALS["lang"]['Owner'] = 'Posedanto';

$GLOBALS["lang"]['PAExec is a freely-redistributable re-implementation of SysInternal/Microsofts popular PsExec program.  PAExec aims to be a drop in replacement for PsExec, so the command-line usage is identical, with additional options also supported.  This work was originally inspired by Talha Tariqs RemCom.'] = 'PAExec estas libere- relistributiebla re- efektivigo de Sys Interna / Microsopts popula PsExect- ohjelma. PAExec planas esti falo en anstata guidera.o PsExec, tieel ke la komandliniouzokotimo estas identa, kun kromaj opcioj anka. Tiu labo est originaire inspirita fare de Talha Tariqs RemCom.';

$GLOBALS["lang"]['PHP'] = 'PHP PHP';

$GLOBALS["lang"]['POD'] = 'POD';

$GLOBALS["lang"]['POSTing data'] = 'Kimputilaj datenoj';

$GLOBALS["lang"]['Package'] = 'Paka';

$GLOBALS["lang"]['packages'] = 'Paka';

$GLOBALS["lang"]['Packages'] = 'Paka';

$GLOBALS["lang"]['Packages are used to report on things such as <i>banned software</i>, AntiVirus on servers, etc.<br><br>Open-AudIT provides widgets that build upon also supplied repots to detemine the status of antivirus, firewall and other software.'] = 'Paka <i>Malpermesita programmearo</i>AntiVirus sur serviloj, ktp.<br/><br/>Open- Aud IT diszponigas widgets kiuj koronuas sur anka...';

$GLOBALS["lang"]['pagefile'] = 'Pao';

$GLOBALS["lang"]['Pagefile'] = 'Pao';

$GLOBALS["lang"]['Pakistan'] = 'Marokkó';

$GLOBALS["lang"]['Palau'] = 'Pala guido';

$GLOBALS["lang"]['Palestinian Territory'] = 'Palesztina Territorio';

$GLOBALS["lang"]['Panama'] = 'Panamo Panamo';

$GLOBALS["lang"]['Papua New Guinea'] = 'Papouasie-Nouvelle- Gvinée';

$GLOBALS["lang"]['Paraguay'] = 'Paragvajo Paragvajo';

$GLOBALS["lang"]['Parameters'] = 'Parametroj';

$GLOBALS["lang"]['Paranoid'] = 'Paraconaco Nom de la ville (facultatif, sans doute pas besoin de traduction)';

$GLOBALS["lang"]['Parent'] = 'Gépatro';

$GLOBALS["lang"]['parent_id'] = 'Gépatro';

$GLOBALS["lang"]['Parent ID'] = 'Gépatro';

$GLOBALS["lang"]['parent_name'] = 'Gépatronomo';

$GLOBALS["lang"]['Parent Name'] = 'Gépatronomo';

$GLOBALS["lang"]['part_number'] = 'Par- nombro';

$GLOBALS["lang"]['Part Number'] = 'Par- nombro';

$GLOBALS["lang"]['part_of_domain'] = 'Parto de Domin';

$GLOBALS["lang"]['Part Of Domain'] = 'Parto de Domin';

$GLOBALS["lang"]['Partition'] = 'Huimaus';

$GLOBALS["lang"]['partition_count'] = 'Sekcio de Kalkulo';

$GLOBALS["lang"]['Partition Count'] = 'Sekcio de Kalkulo';

$GLOBALS["lang"]['partition_disk_index'] = 'Prélèvement';

$GLOBALS["lang"]['Partition Disk Index'] = 'Prélèvement';

$GLOBALS["lang"]['Pass'] = 'Enirpermesilo';

$GLOBALS["lang"]['Passed'] = 'Pázis';

$GLOBALS["lang"]['Passive Optical Local Area Network'] = 'Pasiva Optika kohtvõrk';

$GLOBALS["lang"]['Password'] = 'Pasvorto';

$GLOBALS["lang"]['password'] = 'Pasvorto';

$GLOBALS["lang"]['password_changeable'] = 'Pasvorto';

$GLOBALS["lang"]['Password Changeable'] = 'Pasvorto';

$GLOBALS["lang"]['password_disabled'] = 'Pasvorto puudega';

$GLOBALS["lang"]['Password Disabled'] = 'Pasvorto puudega';

$GLOBALS["lang"]['password_expires'] = 'Pasvorto exacora';

$GLOBALS["lang"]['Password Expires'] = 'Pasvorto exacora';

$GLOBALS["lang"]['password_last_changed'] = 'Pasvorto Portuda';

$GLOBALS["lang"]['Password Last Changed'] = 'Pasvorto Portuda';

$GLOBALS["lang"]['password_required'] = 'Pasvorto recerido';

$GLOBALS["lang"]['Password Required'] = 'Pasvorto recerido';

$GLOBALS["lang"]['patch_panel'] = 'Paneeli de parche';

$GLOBALS["lang"]['Patch Panel'] = 'Paneeli de parche';

$GLOBALS["lang"]['patch_panel_port'] = 'Paikkapaneelin portti';

$GLOBALS["lang"]['Patch Panel Port'] = 'Paikkapaneelin portti';

$GLOBALS["lang"]['path'] = 'Vohó!';

$GLOBALS["lang"]['Path'] = 'Vohó!';

$GLOBALS["lang"]['Performance'] = 'Efikeco';

$GLOBALS["lang"]['Performed'] = 'Rezultis';

$GLOBALS["lang"]['Permission'] = 'Permiso';

$GLOBALS["lang"]['Permission Required'] = 'Permiso requerido';

$GLOBALS["lang"]['permissions'] = 'Permesoj';

$GLOBALS["lang"]['Permissions'] = 'Permesoj';

$GLOBALS["lang"]['Persian'] = 'La persa';

$GLOBALS["lang"]['Personal Area Network'] = 'Persona Areo Reto';

$GLOBALS["lang"]['Personal area network'] = 'Személyek';

$GLOBALS["lang"]['Peru'] = 'Pérou';

$GLOBALS["lang"]['Philippines'] = 'Filippinoj Filippinoj Filippinoj Filippinoj';

$GLOBALS["lang"]['phone'] = 'Telefon';

$GLOBALS["lang"]['Phone'] = 'Telefon';

$GLOBALS["lang"]['Physical CPUs'] = 'Fizika CPUoj';

$GLOBALS["lang"]['physical_count'] = 'Fizika kalkulo';

$GLOBALS["lang"]['Physical Count'] = 'Fizika kalkulo';

$GLOBALS["lang"]['physical_depth'] = 'Fizika sugavus';

$GLOBALS["lang"]['Physical Depth'] = 'Fizika sugavus';

$GLOBALS["lang"]['physical_height'] = 'Fizika';

$GLOBALS["lang"]['Physical Height'] = 'Fizika';

$GLOBALS["lang"]['physical_width'] = 'Fizika laius';

$GLOBALS["lang"]['Physical Width'] = 'Fizika laius';

$GLOBALS["lang"]['picture'] = 'Bildo';

$GLOBALS["lang"]['Picture'] = 'Bildo';

$GLOBALS["lang"]['pid'] = 'Pud';

$GLOBALS["lang"]['Pid'] = 'Pud';

$GLOBALS["lang"]['Pie Chart'] = 'Kuvaa de Pie';

$GLOBALS["lang"]['Pie charts must return name or my_name, description or my_description and count.'] = 'Tuhoaa pié- furorlisto Rendeni Nomonin. Epäiltyni sur Prescribon.';

$GLOBALS["lang"]['ping'] = 'Ping';

$GLOBALS["lang"]['Ping'] = 'Ping';

$GLOBALS["lang"]['Ping Target'] = 'Cela Celo';

$GLOBALS["lang"]['Pitcairn Islands'] = 'Pitcairn Coverloj';

$GLOBALS["lang"]['placement'] = 'Situo';

$GLOBALS["lang"]['Placement'] = 'Situo';

$GLOBALS["lang"]['Plan and conduct internal audits'] = 'Plano kaj konduto Internationalj revizioj';

$GLOBALS["lang"]['Please have an Open-AudIT administrator logon and upgrade the database.'] = 'Bonvolu havi Open- Audit adminisztrációs logon kaj... isdatigi la datumbazon.';

$GLOBALS["lang"]['Please log in and change these ASAP.'] = 'Bonvolu ensaluti kaj шan stabilisici tiaujn au plus vite.';

$GLOBALS["lang"]['Please log on to the Open-AudIT Server (either Windows or Linux) and run <code>nslookup IP_ADDRESS_OF_TARGET</code> in the command prompt or shell. It must be able to resolve the IP to a name.'] = 'Bonvolu ensaluti al la Open- Audit- Servilo (kahtlus Fenestroj a Kahtlus Linukso) <code>nslookup IP_ADDRESS_OF_TARGET</code> En la komanda interprestilo a megkönnyebbülés. .i povas solfi la IP al nomo.';

$GLOBALS["lang"]['Please note that the select box will override the text input box.'] = 'Bonvolu noti ke la fajna skatolo superregula la tekstan enirkeston.';

$GLOBALS["lang"]['Please see the FAQ'] = 'Bonvolu vidi la FAQ';

$GLOBALS["lang"]['Please send all three files to your support contact at Opmantek and describe your issue.'] = 'Bonvolu sami ';

$GLOBALS["lang"]['Please set using'] = 'Bonvolu agordi uzante';

$GLOBALS["lang"]['Please visit the homepage at'] = 'Bonvolu viziti la hejmpaεon clare';

$GLOBALS["lang"]['pod'] = 'Pod';

$GLOBALS["lang"]['Pod'] = 'Kapseli';

$GLOBALS["lang"]['Poland'] = 'Pollando';

$GLOBALS["lang"]['Policies'] = 'Politika';

$GLOBALS["lang"]['Policies have exceptions.'] = 'Politikoj havas esceptojn.';

$GLOBALS["lang"]['policy'] = 'Politika';

$GLOBALS["lang"]['Policy'] = 'Politika';

$GLOBALS["lang"]['policy_id'] = 'Politika';

$GLOBALS["lang"]['Policy ID'] = 'Politika';

$GLOBALS["lang"]['Policy Result'] = 'Politique de politique';

$GLOBALS["lang"]['Policy Results'] = 'Politika';

$GLOBALS["lang"]['Polish'] = 'La pola';

$GLOBALS["lang"]['Polite'] = 'Politika';

$GLOBALS["lang"]['Populate the with values provided below:'] = 'Populato la kun valoroj providonzitaj malsupre:';

$GLOBALS["lang"]['Populated by audit.'] = 'Je suis distita per revizio.';

$GLOBALS["lang"]['Populated by discovery and audit.'] = '[Nikolai Roerich]] püüdis mõista ja mõtestada [[inimese]] eksistenssi.';

$GLOBALS["lang"]['Populated dynamically.'] = 'Popularigita Dinamika.';

$GLOBALS["lang"]['Populated from DNS.'] = '.i estas distita de DNS.';

$GLOBALS["lang"]['Populated from SNMP discovery.'] = 'Popularigita de SNMP- eltrova.o.';

$GLOBALS["lang"]['Populated from device audits.'] = 'Apartigite de aparataj revizioj.';

$GLOBALS["lang"]['Populated from hostname.'] = 'La nomo de la mastro.';

$GLOBALS["lang"]['Populated from machine-id on Linux.'] = 'Je suis farita de ma apretin- produktita sur Linukso.';

$GLOBALS["lang"]['Populated from the IP for the default route or the IP detected in discovery.'] = 'Popularité de la IP por la deha guidlta itinero a. la IP detektita en eltrova.o.';

$GLOBALS["lang"]['Populated from the hostname command.'] = 'Suosikki de la mastro- nomkomando.';

$GLOBALS["lang"]['Populated with additional data from the external system, in a JSON representation.'] = 'Popularigite kun kromaj datenoj de la ekstera sistemo, en JSON- reprezentado.';

$GLOBALS["lang"]['port'] = 'N \'aie pas';

$GLOBALS["lang"]['Port'] = 'N \'aie pas';

$GLOBALS["lang"]['port_name'] = 'Portnomo';

$GLOBALS["lang"]['Port Name'] = 'Portnomo';

$GLOBALS["lang"]['port_number'] = 'Portnombro';

$GLOBALS["lang"]['Port Number'] = 'Portnombro';

$GLOBALS["lang"]['ports_in_order'] = 'Havenoj en ordo';

$GLOBALS["lang"]['Ports In Order'] = 'Havenoj en ordo';

$GLOBALS["lang"]['ports_stop_after'] = 'Portasin pysähdyspaika';

$GLOBALS["lang"]['Ports Stop After'] = 'Portasin pysähdyspaika';

$GLOBALS["lang"]['Portugal, Portuguese Republic'] = 'Portugalio, portugala respubliko';

$GLOBALS["lang"]['Portuguese'] = 'Portugália';

$GLOBALS["lang"]['Portuguese (Brazil)'] = 'Portugália (Brasilo)';

$GLOBALS["lang"]['position'] = 'Pozicio';

$GLOBALS["lang"]['Position'] = 'Pozicio';

$GLOBALS["lang"]['Post-Certification'] = 'Sertifitseerimisjärgne sertifitseerimiini';

$GLOBALS["lang"]['postcode'] = 'Poggtkodo';

$GLOBALS["lang"]['Postcode'] = 'Poggtkodo';

$GLOBALS["lang"]['power_circuit'] = 'Potenco';

$GLOBALS["lang"]['Power Circuit'] = 'Potenco';

$GLOBALS["lang"]['power_sockets'] = 'Potencoj';

$GLOBALS["lang"]['Power Sockets'] = 'Potencoj';

$GLOBALS["lang"]['Predictable'] = 'Anta...';

$GLOBALS["lang"]['Preferences'] = 'Preféré';

$GLOBALS["lang"]['Prepare for recertification every 3 years'] = 'Préparatio';

$GLOBALS["lang"]['Prerequisites'] = 'frrecisztin';

$GLOBALS["lang"]['Prerequisites and Tests'] = 'Anta';

$GLOBALS["lang"]['present'] = 'Donaco';

$GLOBALS["lang"]['Present'] = 'Donaco';

$GLOBALS["lang"]['previous_value'] = 'Anta';

$GLOBALS["lang"]['Previous Value'] = 'Anta';

$GLOBALS["lang"]['primary'] = 'Tunnistaja';

$GLOBALS["lang"]['Primary'] = 'Tunnistaja';

$GLOBALS["lang"]['Primary Key'] = 'La Čefa grilosilo';

$GLOBALS["lang"]['print_queue'] = 'Carga de impresisión';

$GLOBALS["lang"]['Print Queue'] = 'Carga de impresisión';

$GLOBALS["lang"]['printer_color'] = 'Imprimerilo Koloro';

$GLOBALS["lang"]['Printer Color'] = 'Imprimerilo Koloro';

$GLOBALS["lang"]['printer_duplex'] = 'Imprimirilo Duplex';

$GLOBALS["lang"]['Printer Duplex'] = 'Imprimirilo Duplex';

$GLOBALS["lang"]['printer_port_name'] = 'Nombre de puerto de impresszionnión';

$GLOBALS["lang"]['Printer Port Name'] = 'Nombre de puerto de impresszionnión';

$GLOBALS["lang"]['printer_shared'] = 'Impresora compartida';

$GLOBALS["lang"]['Printer Shared'] = 'Impresora compartida';

$GLOBALS["lang"]['printer_shared_name'] = 'Présidentta nomo';

$GLOBALS["lang"]['Printer Shared Name'] = 'Présidentta nomo';

$GLOBALS["lang"]['priority'] = 'Anta';

$GLOBALS["lang"]['Priority'] = 'Anta';

$GLOBALS["lang"]['Privacy Passphrase'] = 'Parolifraas privés';

$GLOBALS["lang"]['Privacy Protocol'] = 'Protocole privé';

$GLOBALS["lang"]['privileges_required'] = 'Privilegioj demandeis';

$GLOBALS["lang"]['Privileges Required'] = 'Privilegioj demandeis';

$GLOBALS["lang"]['processor'] = 'La Procesoro';

$GLOBALS["lang"]['Processor'] = 'La Procesoro';

$GLOBALS["lang"]['processor_count'] = 'Procesora kalkulo';

$GLOBALS["lang"]['Processor Count'] = 'Procesora kalkulo';

$GLOBALS["lang"]['processor_slot_count'] = 'Procezaro Ranura Conde';

$GLOBALS["lang"]['Processor Slot Count'] = 'Procezaro Ranura Conde';

$GLOBALS["lang"]['processor_type'] = 'Produitok';

$GLOBALS["lang"]['Processor Type'] = 'Produitok';

$GLOBALS["lang"]['Processors'] = 'La Procesoroj';

$GLOBALS["lang"]['product_name'] = 'Nomo Produkta';

$GLOBALS["lang"]['Product Name'] = 'Nomo Produkta';

$GLOBALS["lang"]['Product Name Match from CPE: '] = 'Nomo Produkta Match de CPE: ';

$GLOBALS["lang"]['products'] = 'Produitok';

$GLOBALS["lang"]['Products'] = 'Produitok';

$GLOBALS["lang"]['Professional'] = 'Profesiaj profesiauloj';

$GLOBALS["lang"]['profile'] = 'Profilo';

$GLOBALS["lang"]['Profile'] = 'Profilo';

$GLOBALS["lang"]['program'] = 'Ohjelma';

$GLOBALS["lang"]['Program'] = 'Ohjelma';

$GLOBALS["lang"]['Properties'] = 'Trajto';

$GLOBALS["lang"]['Proprietary. If you want to modify HighCharts you may require a'] = 'Propietario. Se vi volas modifi Altajn Katajn vi povas postuli';

$GLOBALS["lang"]['Protects confidentiality, integrity, and availability of information'] = 'Protektas konfidencon, integrecon, kaj hasblecon de informaoj';

$GLOBALS["lang"]['protocol'] = 'Protokolo de Protokolo';

$GLOBALS["lang"]['Protocol'] = 'Protokolo de Protokolo';

$GLOBALS["lang"]['Provide a description and select and expires duration.'] = 'Disponigi prospribon kaj selekti kaj eksvalidi... tempoda auditorron.';

$GLOBALS["lang"]['Provide a name - we humbly recommand Open-AudIT &#128512;, but you can name it anything you like.<br>From the Open-AudIT form, copy the value for the <i>Redirect URI</i> field and paste it into the <i>Sign-in redirect URIs</i> field in OKTA.<br>The Sign-out redirect URIs is optional, but if you want you can use open-audit/index.php/logout with your Open-AudIT servers http address, as per the screenshot.<br>Normally your Open-AudIT URL will look something like'] = 'Ni humile remkomando Ouvrir Audit...<br/>De la Open- Audit- formularo, kopias la valoron por la <i>Konszilu- URI</i> C \'est la raison pour laquelle la Commission a décidé d\' accorder une attention particulière à l \'amélioration de la qualité de l\' eau. <i>Kirjaudu sisään redirektas URIojn</i> Kampo en OKTA.<br/>La signo- eliro redirektas URIojn estas la guiddvola, sed se vi deziras ke vi povas uzi malferma- audit / index. php / logo kun via Open- Audit- serviloj http adreso, kiel per la ekranpafo.<br/>Normaali OpenAudit URL rigardos ioonkiel';

$GLOBALS["lang"]['Provided you have the correct credentials, Device Seed Discovery works as follows'] = 'Seemmned Discovery funkcias kiel sekvas';

$GLOBALS["lang"]['provider'] = 'Provizanto';

$GLOBALS["lang"]['Provider'] = 'Provizanto';

$GLOBALS["lang"]['published'] = 'Pakigita';

$GLOBALS["lang"]['Published'] = 'Pakigita';

$GLOBALS["lang"]['published_date'] = 'Publikigita dato';

$GLOBALS["lang"]['Published Date'] = 'Publikigita dato';

$GLOBALS["lang"]['publisher'] = 'Juhtkiri';

$GLOBALS["lang"]['Publisher'] = 'Juhtkiri';

$GLOBALS["lang"]['Puerto Rico'] = 'Porto- Riko';

$GLOBALS["lang"]['Purchase'] = 'Ačetu ačeton';

$GLOBALS["lang"]['purchase_amount'] = 'Ačeti suma';

$GLOBALS["lang"]['Purchase Amount'] = 'Ačeti suma';

$GLOBALS["lang"]['purchase_cost_center'] = 'Ačeto ulukeskus';

$GLOBALS["lang"]['Purchase Cost Center'] = 'Ačeto ulukeskus';

$GLOBALS["lang"]['purchase_count'] = 'Ačetu kalkulon';

$GLOBALS["lang"]['Purchase Count'] = 'Ačetu kalkulon';

$GLOBALS["lang"]['purchase_date'] = 'Ačetu Daton';

$GLOBALS["lang"]['Purchase Date'] = 'Ačetu Daton';

$GLOBALS["lang"]['purchase_invoice'] = 'Ačeto envo predisco';

$GLOBALS["lang"]['Purchase Invoice'] = 'Ačeto envo predisco';

$GLOBALS["lang"]['purchase_order'] = 'Ačeti ordon';

$GLOBALS["lang"]['Purchase Order'] = 'Ačeti ordon';

$GLOBALS["lang"]['purchase_order_number'] = 'Número de orden';

$GLOBALS["lang"]['Purchase Order Number'] = 'Número de orden';

$GLOBALS["lang"]['purchase_service_contract_number'] = 'Ačet- Servo kontrakto Nombro';

$GLOBALS["lang"]['Purchase Service Contract Number'] = 'Ačet- Servo kontrakto Nombro';

$GLOBALS["lang"]['purchase_vendor'] = 'Ačeti Valmistaja';

$GLOBALS["lang"]['Purchase Vendor'] = 'Ačeti Valmistaja';

$GLOBALS["lang"]['purpose'] = 'Cela celosa';

$GLOBALS["lang"]['Purpose'] = 'Cela celosa';

$GLOBALS["lang"]['Qatar'] = 'Kataro';

$GLOBALS["lang"]['queries'] = 'Käry';

$GLOBALS["lang"]['Queries'] = 'Käry';

$GLOBALS["lang"]['Queries are an important part of Open-AudIT. They are what enables you to get meaningful information from all the device data you have discovered. Along with summaries and groups, they provide a powerful mechanism to extract crucial information.'] = 'Päringud estas grava parto de Open- Audit. Ili estas kio rajtigas vin rizvi senchavajn informatojn de claruj aparatoj kiujn vi malkovris. Kune kun ressumuj kaj grupoj, ili disponigas regulcan mekanismon eltiri decidajn informatojn.';

$GLOBALS["lang"]['Queries for Groups should select only the'] = 'Päringud por grupoj devus selekti nur la';

$GLOBALS["lang"]['Query'] = 'Käry';

$GLOBALS["lang"]['Query this Active Directory attribute first to determine the users work unit.'] = 'Aktiva Adresaro unue attendues al uzantoj labourunuon.';

$GLOBALS["lang"]['Query this Active Directory attribute second to determine the users work unit.'] = 'Aktiva Adresaro atracias sekundon por determini la uzantojn labourunuon.';

$GLOBALS["lang"]['queue'] = 'Järjekord';

$GLOBALS["lang"]['Queue'] = 'Järjekord';

$GLOBALS["lang"]['Queue Limit'] = 'La jenaj paεoj ligas';

$GLOBALS["lang"]['Queued Device Audits'] = 'Auditorías de dispositivos en espera';

$GLOBALS["lang"]['Queued IP Scans'] = 'Eskaneos IP puestos en consultationa';

$GLOBALS["lang"]['Queued Items'] = 'Dokumentumok';

$GLOBALS["lang"]['RBAC for Active Directory and openLDAP'] = 'RBAC por Aktiva Adresaro kaj OpenLDAP';

$GLOBALS["lang"]['RU Start'] = 'KOMENCU RU';

$GLOBALS["lang"]['RX Bitrate'] = 'RX bittinopeus';

$GLOBALS["lang"]['RX Freq'] = 'RX Freq';

$GLOBALS["lang"]['RX Level'] = 'RX Nivelo';

$GLOBALS["lang"]['RX Power'] = 'RX';

$GLOBALS["lang"]['RX Profile'] = 'RX Profilo';

$GLOBALS["lang"]['Rack'] = 'Sac';

$GLOBALS["lang"]['rack_devices'] = 'Destinivos de cubierta';

$GLOBALS["lang"]['Rack Devices'] = 'Destinivos de cubierta';

$GLOBALS["lang"]['rack_id'] = 'Numero d \'identification';

$GLOBALS["lang"]['Rack ID'] = 'Numero d \'identification';

$GLOBALS["lang"]['Rack Management and Reporting'] = 'Radade hallamise kaj aruandlus';

$GLOBALS["lang"]['Racks'] = 'Rakettit';

$GLOBALS["lang"]['racks'] = 'Rakettit';

$GLOBALS["lang"]['radio'] = 'Rádió';

$GLOBALS["lang"]['Radio'] = 'Raadio';

$GLOBALS["lang"]['Radio MAC'] = 'Raadio MAC';

$GLOBALS["lang"]['rationale'] = 'Racio';

$GLOBALS["lang"]['Rationale'] = 'Racio';

$GLOBALS["lang"]['raw'] = 'Työkalut';

$GLOBALS["lang"]['Raw'] = 'Työkalut';

$GLOBALS["lang"]['read'] = 'Legu';

$GLOBALS["lang"]['Read'] = 'Legu';

$GLOBALS["lang"]['Read our online documentation on the Open-AudIT Wiki.'] = 'Legu nian retan dokumentadon pri la Open- Audit- Vikido.';

$GLOBALS["lang"]['Read through the log file at'] = 'Legu tra la tagalo dosiero';

$GLOBALS["lang"]['Received'] = 'Arroz';

$GLOBALS["lang"]['Recently we have been asked the question - do you consider Open-AudIT more secure than other similar programs? As with most things, the answer is <i>it depends</i>.<br><br>Open-AudIT can be operated in such a way as to be extremely secure. But as usual with computer-based security, the more secure you wish to make something, the more inconvenient it becomes to use. The old phrase <i>the most secure computer is one that is turned off and in the cupboard<i> comes to mind.<br><br>Below we will outline some options that can be used with Open-AudIT that will increase security. Like most items within Open-AudIT, these are options and not mandatory. How far you take security is up to you.'] = 'Licatempe ni estis demanditaj la demando -... u vi konsidras Open- AudIT pli sekura oleelij simpiaj programmoj? Kiel kun la pléj multaj aferoj, la responsabilité estas <i>Sôltlane</i>.<br/><br/>Ava- Aud Povas esti funkciigita la epäilty tia maniero kiel por esti ekstreme sekura. Sed kiel kutime kun kompution- bazita sekureco, la pli sekura vi deziras fari ioni, la pli malkonvena εi iεas uzi. La Malnova bratso <i>La pléj sekura komputilo estas unu kiu estas malakceptita kaj en la рranko.<i> Venas al Menso.<br/><br/>Malsupre ni skizas kelkajn opciojn kiuj povas et uzitaj kun Open- Audit kiu pliigos sekurecon. Kiel la pluj multaj eroj ene de Open- Audit, tiuj estas opcioj kaj ne devigaj. Kiom vi prenas sekurecon estas εis vi.</i></i>';

$GLOBALS["lang"]['Recertification:</strong> Required every three years'] = 'Reatestado: Poste Čiu trijaroj';

$GLOBALS["lang"]['Red Query'] = 'Demande de renseignements';

$GLOBALS["lang"]['Redirect URI'] = 'Konszilu- URI';

$GLOBALS["lang"]['redirect_uri'] = 'Konszilu- URI';

$GLOBALS["lang"]['Redirect Uri'] = 'Konszilu- URI';

$GLOBALS["lang"]['Reduces risk of data breaches and cyber threats'] = 'Redukki risqueon de datumoj romopj kaj ciberminacoj';

$GLOBALS["lang"]['references'] = 'Référence';

$GLOBALS["lang"]['References'] = 'Référence';

$GLOBALS["lang"]['region'] = 'Aluéo';

$GLOBALS["lang"]['Region'] = 'Aluéo';

$GLOBALS["lang"]['registered_user'] = 'Registre Uzanto';

$GLOBALS["lang"]['Registered User'] = 'Registre Uzanto';

$GLOBALS["lang"]['Rejected'] = 'Réjekciita';

$GLOBALS["lang"]['rel'] = 'Reili';

$GLOBALS["lang"]['Rel'] = 'Reili';

$GLOBALS["lang"]['Release'] = 'Liberté';

$GLOBALS["lang"]['remediation'] = 'Réparizáció';

$GLOBALS["lang"]['Remediation'] = 'Réparizáció';

$GLOBALS["lang"]['Remote'] = 'Forigo';

$GLOBALS["lang"]['remote_address'] = 'Origu la adreson';

$GLOBALS["lang"]['Remote Address'] = 'Origu la adreson';

$GLOBALS["lang"]['remote_port'] = 'Origu la havenon';

$GLOBALS["lang"]['Remote Port'] = 'Origu la havenon';

$GLOBALS["lang"]['Remove'] = 'Forigo';

$GLOBALS["lang"]['Remove Exception'] = 'Origu esepti';

$GLOBALS["lang"]['Repeat until you have a completely discovered and audited Windows PC.'] = 'Ripetu εis vi havas tute malkovritan kaj reviziitan Windows PC.';

$GLOBALS["lang"]['Report'] = 'Raporto';

$GLOBALS["lang"]['Report on your devices, networks and more'] = 'Raporto pri viaj aparatoj, retoj kaj pli';

$GLOBALS["lang"]['reportable'] = 'Raporto';

$GLOBALS["lang"]['Reportable'] = 'Raporto';

$GLOBALS["lang"]['Reports'] = 'Raportoj';

$GLOBALS["lang"]['request'] = 'Petu la Permeson';

$GLOBALS["lang"]['Request'] = 'Petu la Permeson';

$GLOBALS["lang"]['Request Method'] = 'Peta Metodo';

$GLOBALS["lang"]['Request Vulnerability'] = 'Petu haavatavus';

$GLOBALS["lang"]['Request a Specific CVE'] = 'Petu specifajn CVE';

$GLOBALS["lang"]['requested'] = 'Apró';

$GLOBALS["lang"]['Requested'] = 'Apró';

$GLOBALS["lang"]['require_port'] = 'Mi petas la hadénon';

$GLOBALS["lang"]['Require Port'] = 'Mi petas la hadénon';

$GLOBALS["lang"]['Require an Open Port'] = 'Le malade de Postuli Havre';

$GLOBALS["lang"]['Required'] = 'Postulo';

$GLOBALS["lang"]['Required AWS user permissions'] = 'Postulo AWS uzanto permesoj';

$GLOBALS["lang"]['Required Fields'] = 'Postulitaj Kampoj';

$GLOBALS["lang"]['Reset'] = 'Taasta lähtestamiini';

$GLOBALS["lang"]['Reset All Data'] = 'Anstata skeptigi Čiujn datumojn';

$GLOBALS["lang"]['Reset to Default'] = 'Reiri al Defa';

$GLOBALS["lang"]['resource'] = 'Rimedo';

$GLOBALS["lang"]['Resource'] = 'Rimedo';

$GLOBALS["lang"]['Resource Name'] = 'Nomo de la nomo';

$GLOBALS["lang"]['Resources'] = 'Resursoj';

$GLOBALS["lang"]['response'] = 'Vastaus';

$GLOBALS["lang"]['Response'] = 'Vastaus';

$GLOBALS["lang"]['responsibility'] = 'Ízlelés';

$GLOBALS["lang"]['Responsibility'] = 'Ízlelés';

$GLOBALS["lang"]['Restore my Licenses'] = 'Retenu miajn permesilojn';

$GLOBALS["lang"]['Restrict to Private'] = 'Restrikto al privata';

$GLOBALS["lang"]['Restrict to Subnet'] = 'Restrikko al Subnet';

$GLOBALS["lang"]['result'] = 'RÉSULTATS';

$GLOBALS["lang"]['Result'] = 'RÉSULTATS';

$GLOBALS["lang"]['Resulting Function'] = 'Retenanta Funkcio';

$GLOBALS["lang"]['Results'] = 'Rezultoj';

$GLOBALS["lang"]['Retrieve a list of devices in the'] = 'Lista de aparatoj en la';

$GLOBALS["lang"]['Retrieve a list of devices with OS Name like Windows 2008'] = 'Nouda lista de aparatoj kun Os Nimiiel Fenestroj 2008';

$GLOBALS["lang"]['Retrieve all details about the device with id 88.'] = 'lakóhelye: uj detaloj pri la aparatito kun id 88.';

$GLOBALS["lang"]['Retrieve all devices running Windows.'] = 'Mina sintoiuja paratoj kurante fenestrojn.';

$GLOBALS["lang"]['Retrieve all devices with the standard columns'] = 'Alternativaiuja paratoj kun laj kolonoj';

$GLOBALS["lang"]['Retrieve the first 10 devices running Windows ordered by hostname'] = 'Récupérer la unuaj 10 aparato prizorgantaj Fenestrojn ordonitaj fare de mastro- nomo';

$GLOBALS["lang"]['Retrieve the properties id, ip, hostname, domain, type from all devices'] = 'Récupérer la trajtoj id, ip, mastronomo, domajno, tipo de...';

$GLOBALS["lang"]['retrieved'] = 'Prenita';

$GLOBALS["lang"]['Retrieved'] = 'Prenita';

$GLOBALS["lang"]['retrieved_ident'] = 'Tunniste';

$GLOBALS["lang"]['Retrieved Ident'] = 'Tunniste';

$GLOBALS["lang"]['retrieved_name'] = 'Prenita nomo';

$GLOBALS["lang"]['Retrieved Name'] = 'Prenita nomo';

$GLOBALS["lang"]['Retrieved from the device - Windows:Win32_ComputerSystemProduct, Linux:dmidecode, MacOS:system_profiler, ESXi:vim-cmd hostsvc/hostsummary, HP-UX:machinfo, Solaris:smbios, AIX:uname.'] = 'Prenite de la aparato - Fenestroj: Win32 _ ComputerSystemProduit, Linukso: dmidecode MacOS: system _ profilar, ESXi: vim- cmd gastigantojvc / hostsummery, HP- UX: machinfo, Solaris: smbios, AIX: uname.';

$GLOBALS["lang"]['Retrieving a List of Credentials'] = 'Recherche Liste de Verificación de Poderes';

$GLOBALS["lang"]['Retrieving or Creating'] = 'Rekuperaator un Keado';

$GLOBALS["lang"]['Return a collection of devices with the default set of columns (devices.id, devices.icon, devices.type, devices.name, devices.ip, devices.dns_fqdn, devices.identification, devices.description, devices.manufacturer, devices.os_family, devices.status)'] = 'Reveno koletto de aparatoj kun la dapa deulta aro de kolonoj (laitteet.id, aparatoj.icon, aparatoj). tipo, aparatoj.name, aparatoj.ip, aparatoj.dns _ fqdn, aparatoj. tunnistus, aparatoj.priskribo, aparatoj.maker, aparatoj.os _ familio, aparatoj.status';

$GLOBALS["lang"]['Return a list of all Modules installed on Routers'] = 'Revenu lista de ';

$GLOBALS["lang"]['Return an individual device\\'] = 'Refeno de indica';

$GLOBALS["lang"]['Returns a list of {collection}.'] = 'Revenas listan de {kollection}.';

$GLOBALS["lang"]['Returns a {collection} details.'] = 'Revenoj de la detaloj.';

$GLOBALS["lang"]['Reunion'] = 'Reunuio';

$GLOBALS["lang"]['Review current practices against ISO 27001 requirements'] = 'Revizio aktualaj praktikoj kontra vastadavus ISO 27001 postuloj';

$GLOBALS["lang"]['revision'] = 'Revizio';

$GLOBALS["lang"]['Revision'] = 'Revizio';

$GLOBALS["lang"]['risk_assesment_result'] = 'Résultat de la evaluationación de riesgos';

$GLOBALS["lang"]['Risk Assesment Result'] = 'Résultat de la evaluationación de riesgos';

$GLOBALS["lang"]['Risk Assessment & Treatment'] = 'Risktakso Traktado';

$GLOBALS["lang"]['Risk Management'] = 'Risquea alkalmazása';

$GLOBALS["lang"]['Role'] = 'Rolo Rolo';

$GLOBALS["lang"]['roles'] = 'Roloj';

$GLOBALS["lang"]['Roles'] = 'Roloj';

$GLOBALS["lang"]['Roles can only be created and edited if you have an Open-AudIT Enterprise license. For most users, the default set of Roles should be all that is required.'] = 'Roloj povas nur esti kreitaj kaj redaktitaj se vi havas Open- Audit Enterprise licence. Por la pluj multaj uzantoj, la deva guidlta aro de Roloj devus esti Čiu kiu estas postulata.';

$GLOBALS["lang"]['Romania'] = 'Rumanio';

$GLOBALS["lang"]['Romanian'] = 'Rumana romana';

$GLOBALS["lang"]['Room'] = 'Tunnistaja';

$GLOBALS["lang"]['route'] = 'Itinéraire';

$GLOBALS["lang"]['Route'] = 'Itinéraire';

$GLOBALS["lang"]['Row'] = 'Malanta epäillyt';

$GLOBALS["lang"]['Row Count'] = 'Malanta kaa kakalulo';

$GLOBALS["lang"]['row_position'] = 'Pozicio';

$GLOBALS["lang"]['Row Position'] = 'Pozicio';

$GLOBALS["lang"]['Rows'] = 'La Dorsoj';

$GLOBALS["lang"]['ru_height'] = 'Ru Altura';

$GLOBALS["lang"]['Ru Height'] = 'Ru Altura';

$GLOBALS["lang"]['ru_start'] = 'Ru omencas';

$GLOBALS["lang"]['Ru Start'] = 'Ru omencas';

$GLOBALS["lang"]['rule_group'] = 'Regulo grupo';

$GLOBALS["lang"]['Rule Group'] = 'Regulo grupo';

$GLOBALS["lang"]['rules'] = 'Reguloj';

$GLOBALS["lang"]['Rules'] = 'Reguloj';

$GLOBALS["lang"]['Rules are created and run against a device when the device is discovered or an audit result is processed. Rules can be used to set a device attribute based on other attributes.<br><br>NOTE - At present we cannot delete a rule input or output that contains a /. This is because the framework is parsing the / as part of the URL and returning a 404, even before our code runs. The work-around for this is to delete the Rule itself, then recreate the inputs and outputs as required. Fortunately inputs and outputs that contain a / are rare (indeed, none exist by default).'] = 'Regeloj estas kreitaj kaj kuris kontra epäilty aparato kiam la aparato estas malkovrita epäilty reviziorezulto estas prilaborita. Regeloj povas esti uzitaj por atdistributi aparatdistributon bazitan sureliaj atinattoj.<br/><br/>NOTA -... Tio estas La labour- preksimume portio murs forigi la Regelon mem, tiam rekrei la eniga. Ojn kaj produkta.ojn kiel postulat. Bonne diversité eniga. Oj kaj produkta. oj kiuj enhavas / estas raraj (effektív, neniu eksistas dega.lte).';

$GLOBALS["lang"]['Run Discovery'] = 'Découverte de Valora';

$GLOBALS["lang"]['Run Discovery on Devices'] = 'Käivita Discovery sur merdmed';

$GLOBALS["lang"]['Run Your Discovery'] = 'Malkovro';

$GLOBALS["lang"]['Run a Command'] = 'Kuru Komando';

$GLOBALS["lang"]['Run a discovery and find out <b>Whats On Your Network?</b>'] = 'La malkovro kaj malkovro <b>Kio estas sur läbi reto?</b>';

$GLOBALS["lang"]['Run the script by typing <code>cscript test_windows_client.vbs</code> in the console.'] = 'La manikripto par tajpado <code>cscript test_windows_client.vbs</code> En la konzolo.';

$GLOBALS["lang"]['Run this Command'] = 'Tiu kommundo';

$GLOBALS["lang"]['runas'] = 'Runafélék';

$GLOBALS["lang"]['Runas'] = 'Runafélék';

$GLOBALS["lang"]['Running'] = 'Kurado';

$GLOBALS["lang"]['Running Open-AudIT Apache Service Under Windows'] = 'Kuranta Open Audit Apache Service Sub Fenestroj';

$GLOBALS["lang"]['Russian'] = 'Rusa Ruso';

$GLOBALS["lang"]['Russian Federation'] = 'Rusa Federacio';

$GLOBALS["lang"]['Rwanda'] = 'Ruando Ruando';

$GLOBALS["lang"]['rx_bitrate'] = 'Rx bittinopée';

$GLOBALS["lang"]['Rx Bitrate'] = 'Rx bittinopée';

$GLOBALS["lang"]['rx_freq'] = 'Rx Freq';

$GLOBALS["lang"]['Rx Freq'] = 'Rx Freq';

$GLOBALS["lang"]['rx_level'] = 'Rx Nivelo';

$GLOBALS["lang"]['Rx Level'] = 'Rx Nivelo';

$GLOBALS["lang"]['rx_power'] = 'Rx';

$GLOBALS["lang"]['Rx Power'] = 'Rx';

$GLOBALS["lang"]['rx_profile'] = 'Rx Profilo';

$GLOBALS["lang"]['Rx Profile'] = 'Rx Profilo';

$GLOBALS["lang"]['SAN Audit'] = 'SAN- tarkaste';

$GLOBALS["lang"]['SAN Auto-Discover'] = 'SAN Kahtlustusdistro';

$GLOBALS["lang"]['SELECT'] = 'VALINTA';

$GLOBALS["lang"]['SID'] = 'SID';

$GLOBALS["lang"]['SM Version'] = 'Versio de SM';

$GLOBALS["lang"]['SNMP (v1 / v2)'] = 'SNMP (v1 / v2)';

$GLOBALS["lang"]['SNMP Details'] = 'SNMP Detaloj';

$GLOBALS["lang"]['SNMP OID'] = 'OID SNMP';

$GLOBALS["lang"]['SNMP Version'] = 'SNMP- versio';

$GLOBALS["lang"]['SNMP v3'] = 'SNMP v3';

$GLOBALS["lang"]['SQL'] = 'SQL';

$GLOBALS["lang"]['SQL (Advanced)'] = 'SQL (täiustatud)';

$GLOBALS["lang"]['SQL Creation Statements'] = 'La jenaj artikoloj';

$GLOBALS["lang"]['SQL not containing this condition will result in the widget failing to be executed.'] = 'SQL ne enhavanta tiun Kontrircaon rezultigos la dracominon malsukcesantan esti efekkivigita.';

$GLOBALS["lang"]['SSH'] = 'SSH';

$GLOBALS["lang"]['SSH Key'] = 'SSH - Losilo';

$GLOBALS["lang"]['SW Revision'] = 'SW- revizio';

$GLOBALS["lang"]['Saint Barthelemy'] = 'Saint- Barthélemée Nom de la ville (facultatif, sans doute pas besoin de traduction)';

$GLOBALS["lang"]['Saint Helena'] = 'Sankta Heleno';

$GLOBALS["lang"]['Saint Kitts and Nevis'] = 'Saint- Kitts- et- Nevis';

$GLOBALS["lang"]['Saint Lucia'] = 'Sankta Lucio';

$GLOBALS["lang"]['Saint Martin'] = 'Sankta Marteno';

$GLOBALS["lang"]['Saint Pierre and Miquelon'] = 'Sankta Pierre kaj Miquelon';

$GLOBALS["lang"]['Saint Vincent and the Grenadines'] = 'Sankta Vincento kaj Granadinas';

$GLOBALS["lang"]['Samoa'] = 'Samoo';

$GLOBALS["lang"]['san'] = 'San Salvador';

$GLOBALS["lang"]['San'] = 'San Salvador';

$GLOBALS["lang"]['San Marino'] = 'San Martín';

$GLOBALS["lang"]['Sao Tome and Principe'] = 'Santo Tomé ja Príncipe';

$GLOBALS["lang"]['Saturday'] = 'Sabato sabati';

$GLOBALS["lang"]['Saudi Arabia'] = 'Saoud- Arabio';

$GLOBALS["lang"]['Save and run the file. Make sure you run the file as an Administrator in order to install it (right click, Run as Administrator).'] = 'Savi Kaj Prizorgi la dosiron. Certigu ke vi prizorgas la dosieron kiel administrateur por instali liquidin (deksstra klako, Run kiel administrateur).';

$GLOBALS["lang"]['Save as Default'] = 'Eviti kiel Deva';

$GLOBALS["lang"]['Save the downloaded file.'] = 'Evitu la el apretuitan dosieron.';

$GLOBALS["lang"]['scaling'] = 'Escalada';

$GLOBALS["lang"]['Scaling'] = 'Escalada';

$GLOBALS["lang"]['scan_options'] = 'Skanaj Elektoj';

$GLOBALS["lang"]['Scan Options'] = 'Skanaj Elektoj';

$GLOBALS["lang"]['Scan Options ID'] = 'Személyazonosító igazolvány száma: Skanaj Elektroj';

$GLOBALS["lang"]['Scan for this port(s) and if detected open, use this port for SSH communication. This is added to the list of Custom TCP Ports above (if not already included), so there is no need to include it in that list as well. Comma seperated, no spaces.'] = 'Skalo por tiu haveno (j) kaj se detektita malferma, uzas tiun hadenon por SSH- komunikado. Tio estas aldonita al la lista de Cutom TCP Ports supre (se ne jam inkludis), tien ke ekzistas neniu bezono inkludi εin en tiu lista ankai. Koma secesis, neniuj spacoj.';

$GLOBALS["lang"]['Scan the Nmap top number of TCP ports.'] = 'Ska la Nmap pinnombro de TCP- havenoj.';

$GLOBALS["lang"]['Scan the Nmap top number of UDP ports.'] = 'Ska la Nmap pinnombro de UDP- havenoj.';

$GLOBALS["lang"]['schedule'] = 'Horaro';

$GLOBALS["lang"]['Schedule'] = 'Horaro';

$GLOBALS["lang"]['Scheduled device discovery and reporting make Open-AudIT Professional an efficient solution for busy IT professionals looking to reduce overheads and increase insights.'] = 'Planita aparato- trova';

$GLOBALS["lang"]['Scheduling - discovery, reporting &amp; more'] = 'Program - eltrova';

$GLOBALS["lang"]['scope'] = 'Ambito';

$GLOBALS["lang"]['Scope'] = 'Ambito';

$GLOBALS["lang"]['Scope is known as Authorization Scope, representing whether a vulnerability affects resources beyond the original security authority of the vulnerable component.<br><br>The only two valid values for this attribute are'] = 'Hatály estas konata kiel Autoriseringu ulaitus, reprezentante .u vundebleco influenzas resursojn preter la origina sekurrecadministrastacio de la vundebla kompunto.<br/><br/>La nuraj du validaj valoroj por tiu atantion to estas';

$GLOBALS["lang"]['script_timeout'] = 'Prix Antalutsiit de la tempo';

$GLOBALS["lang"]['Script Timeout'] = 'Prix Antalutsiit de la tempo';

$GLOBALS["lang"]['scripts'] = 'Tekstoj';

$GLOBALS["lang"]['Scripts'] = 'Tekstoj';

$GLOBALS["lang"]['scsi'] = 'Scsi';

$GLOBALS["lang"]['Scsi'] = 'Scsi';

$GLOBALS["lang"]['scsi_bus'] = 'Svisobus';

$GLOBALS["lang"]['Scsi Bus'] = 'Svisobus';

$GLOBALS["lang"]['scsi_logical_unit'] = 'Scsi loogiline üksus';

$GLOBALS["lang"]['Scsi Logical Unit'] = 'Scsi loogiline üksus';

$GLOBALS["lang"]['scsi_port'] = 'N \'aie pas';

$GLOBALS["lang"]['Scsi Port'] = 'N \'aie pas';

$GLOBALS["lang"]['Search'] = 'Serveño';

$GLOBALS["lang"]['Search For a Device'] = 'Serčis';

$GLOBALS["lang"]['Searching Using DataTables'] = 'Serrugaante Uzante etmenetrend';

$GLOBALS["lang"]['Second'] = 'Dua sekundo';

$GLOBALS["lang"]['secondary'] = 'Sekundara';

$GLOBALS["lang"]['Secondary'] = 'Sekundara';

$GLOBALS["lang"]['Secondary Text'] = 'Sekundara Teksto';

$GLOBALS["lang"]['Secret Key'] = 'Sekreta ';

$GLOBALS["lang"]['section'] = 'Sekcio de Sekcio';

$GLOBALS["lang"]['Section'] = 'Sekcio de Sekcio';

$GLOBALS["lang"]['secure'] = 'Sekura sekureco';

$GLOBALS["lang"]['Secure'] = 'Sekura sekureco';

$GLOBALS["lang"]['Security Content Automation Protocol'] = 'Provincio de automatización del contenido de seguridad';

$GLOBALS["lang"]['Security Level'] = 'Sekureca nivelo';

$GLOBALS["lang"]['Security Name'] = 'Sekureco Nomo';

$GLOBALS["lang"]['Security Status'] = 'Sekureco';

$GLOBALS["lang"]['security_zone'] = 'Secureca Zono';

$GLOBALS["lang"]['Security Zone'] = 'Secureca Zono';

$GLOBALS["lang"]['See above. NOTE - This could also be caused by a self-signed certificate on the LDAP server. We are working to allow for this in a future release.'] = 'Du vide. Tio anka epäilty povus esti kazita de mem- subskribita aestilo sur la LDAP- servilo. Ni laboras por permesition en esta liberigo.';

$GLOBALS["lang"]['See our page on enabling'] = 'Vidu nian pa Ebliga';

$GLOBALS["lang"]['Seed Discoveries'] = 'Sesaj Eltrova';

$GLOBALS["lang"]['seed_ip'] = 'IP';

$GLOBALS["lang"]['Seed IP'] = 'IP';

$GLOBALS["lang"]['seed_ping'] = 'Ses Ping';

$GLOBALS["lang"]['Seed Ping'] = 'Ses Ping';

$GLOBALS["lang"]['seed_restrict_to_private'] = 'Seeme Restrikko al Privata';

$GLOBALS["lang"]['Seed Restrict To Private'] = 'Seeme Restrikko al Privata';

$GLOBALS["lang"]['seed_restrict_to_subnet'] = 'Sesita Restrikko al Subnet';

$GLOBALS["lang"]['Seed Restrict To Subnet'] = 'Sesita Restrikko al Subnet';

$GLOBALS["lang"]['Select'] = 'Elektu';

$GLOBALS["lang"]['Select Admin -> Tasks -> Create Task from the menu.'] = 'Elekti Admin - título Taskoj - titulado. Krei Tasko de la menuo.';

$GLOBALS["lang"]['Select All'] = 'Elektu Governanceiujn';

$GLOBALS["lang"]['Select All Devices'] = 'Elekti Roveriujn aparato';

$GLOBALS["lang"]['select_external_attribute'] = 'Elekti Eksteran Atributon';

$GLOBALS["lang"]['Select External Attribute'] = 'Elekti Eksteran Atributon';

$GLOBALS["lang"]['select_external_count'] = 'Elekti Eksteran kalkulon';

$GLOBALS["lang"]['Select External Count'] = 'Elekti Eksteran kalkulon';

$GLOBALS["lang"]['select_external_type'] = 'Elekti Eksteran Tipo';

$GLOBALS["lang"]['Select External Type'] = 'Elekti Eksteran Tipo';

$GLOBALS["lang"]['select_external_value'] = 'Elekti Eksteran Valora Valoro';

$GLOBALS["lang"]['Select External Value'] = 'Elekti Eksteran Valora Valoro';

$GLOBALS["lang"]['select_internal_attribute'] = 'Elekti Interna Atributo';

$GLOBALS["lang"]['Select Internal Attribute'] = 'Elekti Interna Atributo';

$GLOBALS["lang"]['select_internal_count'] = 'Elekti Internan kalkulon';

$GLOBALS["lang"]['Select Internal Count'] = 'Elekti Internan kalkulon';

$GLOBALS["lang"]['select_internal_type'] = 'Elekti Interna Tipo';

$GLOBALS["lang"]['Select Internal Type'] = 'Elekti Interna Tipo';

$GLOBALS["lang"]['select_internal_value'] = 'Elekti Interna Valora Valoro';

$GLOBALS["lang"]['Select Internal Value'] = 'Elekti Interna Valora Valoro';

$GLOBALS["lang"]['Select Menu -> Manage -> Baselines -> List Baselines.'] = 'Elektu menüun - confier Mana graduano - confier Bazlinioj - Lista lähtötilanteet.';

$GLOBALS["lang"]['Select a Table'] = 'Tablon Elektu';

$GLOBALS["lang"]['Select an accredited certification body'] = 'Elekti akreditan astadon';

$GLOBALS["lang"]['Select and apply appropriate controls (Annex A)'] = 'Elektti kaj apliki konvenajn kontrolojn (Alisa)';

$GLOBALS["lang"]['Select the <i>COM Security</i> tab<br><br>Click on Access Permissions Edit Default'] = 'Elektu <i>KOM Sekureco</i> kla retrave<br/><br/>Klaku sur Aliro Lubaduse Deva Editer...';

$GLOBALS["lang"]['Select the <i>Sign On</i> tab and copy the value for <i>Issuer</i> (just the URL itself). Paste this into the Open-AudIT <i>Issuer</i> field.'] = 'Elektu <i>Signo sur</i> Alklaku kaj kopii la Valon por <i>Parodiste</i> (La URL mem). En la malferma- Audit <i>Parodiste</i> C \'est Kampo.';

$GLOBALS["lang"]['Select the <i>This Account</i> checkbox and provide the account name and password.'] = 'Elektu <i>Firmado</i> Kontrou skatolo kaj suppezas la konto nomo kaj pasvorton.';

$GLOBALS["lang"]['Select the Start menu and type <i>services<.i>. Click the Services icon.'] = 'Elekti la Komencan menion kaj tipon <i>La servoj identificado.i confanza. Klaku la Servoj ikono.</i>';

$GLOBALS["lang"]['Select the type of Auth Menthod to create and input the relevant details.'] = 'Elekti la specon de Auth Menthod krei kaj enigi la signfajn detalojn.';

$GLOBALS["lang"]['Self Delete'] = 'Mémo Kustuta';

$GLOBALS["lang"]['Senegal'] = 'Sénegalo';

$GLOBALS["lang"]['sensitivity'] = 'Sensiveco';

$GLOBALS["lang"]['Sensitivity'] = 'Sensiveco';

$GLOBALS["lang"]['September'] = 'Septembro Septembro';

$GLOBALS["lang"]['Serbia'] = 'Serbio';

$GLOBALS["lang"]['serial'] = 'Série';

$GLOBALS["lang"]['Serial'] = 'Série';

$GLOBALS["lang"]['serial_imei'] = 'Seeria Imei';

$GLOBALS["lang"]['Serial Imei'] = 'Seeria Imei';

$GLOBALS["lang"]['serial_sim'] = 'Sarja';

$GLOBALS["lang"]['Serial Sim'] = 'Sarja';

$GLOBALS["lang"]['series'] = 'Serio de serio';

$GLOBALS["lang"]['Series'] = 'Serio de serio';

$GLOBALS["lang"]['server'] = 'Servilo';

$GLOBALS["lang"]['Server'] = 'Servilo';

$GLOBALS["lang"]['server_id'] = 'Servolon henkilókortti';

$GLOBALS["lang"]['Server ID'] = 'Servolon henkilókortti';

$GLOBALS["lang"]['Server Is'] = 'Servilo estas';

$GLOBALS["lang"]['server_item'] = 'Tema Servilo';

$GLOBALS["lang"]['Server Item'] = 'Tema Servilo';

$GLOBALS["lang"]['Server Status'] = 'Servilo';

$GLOBALS["lang"]['Servers'] = 'Serviloj';

$GLOBALS["lang"]['Servers Only'] = 'Serviloj nur';

$GLOBALS["lang"]['service'] = 'Servo';

$GLOBALS["lang"]['Service'] = 'Servo';

$GLOBALS["lang"]['service_identifier'] = 'Servon tunniste';

$GLOBALS["lang"]['Service Identifier'] = 'Servon tunniste';

$GLOBALS["lang"]['service_level_a'] = 'Servo- Nivelo';

$GLOBALS["lang"]['Service Level A'] = 'Servo- Nivelo';

$GLOBALS["lang"]['service_level_b'] = 'Servo Nivelo B';

$GLOBALS["lang"]['Service Level B'] = 'Servo Nivelo B';

$GLOBALS["lang"]['service_network'] = 'Servovõrk';

$GLOBALS["lang"]['Service Network'] = 'Servovõrk';

$GLOBALS["lang"]['service_number'] = 'Szerponombro';

$GLOBALS["lang"]['Service Number'] = 'Szerponombro';

$GLOBALS["lang"]['service_pack'] = 'Szervo- pako';

$GLOBALS["lang"]['Service Pack'] = 'Szervo- pako';

$GLOBALS["lang"]['service_plan'] = 'Servoplano';

$GLOBALS["lang"]['Service Plan'] = 'Servoplano';

$GLOBALS["lang"]['service_provider'] = 'Servo Provizanto';

$GLOBALS["lang"]['Service Provider'] = 'Servo Provizanto';

$GLOBALS["lang"]['service_tag'] = 'Servo Taga';

$GLOBALS["lang"]['Service Tag'] = 'Servo Taga';

$GLOBALS["lang"]['service_type'] = 'Servo Tipo';

$GLOBALS["lang"]['Service Type'] = 'Servo Tipo';

$GLOBALS["lang"]['Service Under Windows'] = 'Ala- ikkunat';

$GLOBALS["lang"]['service_version'] = 'Versio de la Servoj';

$GLOBALS["lang"]['Service Version'] = 'Versio de la Servoj';

$GLOBALS["lang"]['Set'] = 'Aro';

$GLOBALS["lang"]['set_by'] = 'Situo';

$GLOBALS["lang"]['Set By'] = 'Situo';

$GLOBALS["lang"]['Set by the Discovery function - do not normally set this manually.'] = 'Metita per la Discover -funkcio - ne normale metis tiun mane.';

$GLOBALS["lang"]['Set by the audit_domain or discover_domain scripts. Do not set.'] = 'Metite fare de la revizoro épäilty malkovri _ domain manikriptoj. Ne metu.';

$GLOBALS["lang"]['Set the external text to capitalized version of the internal data.'] = 'Meti la eksteran tekston al kapitaligita versio de la internationalj datenoj.';

$GLOBALS["lang"]['Set the external text to lowercase.'] = 'La ekstera teksto al miinusklo.';

$GLOBALS["lang"]['Set the external text to uppercase.'] = 'La ekstera teksto al supra puntto.';

$GLOBALS["lang"]['Set the size (normal or compact) of the tables on the List screens.'] = 'Aro la grandeco (normalalia epäiltyä kompakta) de la tabeloj sur la list- ekranoj.';

$GLOBALS["lang"]['Set this if you wish to insert systems from AD that may not be contactable, but have been seen by AD since that date.'] = 'Se vi deziras enigi sistemojn de AD kiu ne povas esti kontaktebla, sed estis vidita per AD ekde tiu dato.';

$GLOBALS["lang"]['Setting up Discovery on a subnet is almost identical to running a regular Discovery via the web interface. The only additional items are the scheduled hour and day(s) and a name for the Scheduled Task itself. You can take advantage of this to schedule multiple discoveries using different sets of credentials.<br><br>As per the Subnet Discovery, the Active Directory Discovery is also simply the same fields as a regular Active Directory Discovery with the addition of a day, hour(s) and name.<br><br>If the Open-AudIT Server has Collectors reporting to it, an additional drop down is provided. You can select this to specify which Collector the task should run on. Only Discovery tasks are supported for Collectors. Specify the same items as a regular Discovery, but provide the alternate Collector to run this task.'] = 'Juste de supreno Discovery sur subreto estas preskalucir identa al prizorgado dérégmentation Discovery per la interretinterfaco. La nuraj kromaj eroj estas la planita horo kaj tago (j) kaj nomo por la Planita Tasko nem. Vi povas ekspluatition por plani multoblajn eltrova<br/><br/>Kiel per la Subnet Discovery, la Aktiva Adresaro Découverte anka epäilty estas yksinkertainen la samaj kapoj kielregula Aktiva Adresaro Découverte kun la aldono de tago, horo (j) kaj nomo.<br/><br/>Se la Open- Audit- Servilo havas kolektantojn raportantajn al εi, kroma goto malsupren estas disponigita. L \'objectif est d\' améliorer la qualité de l \'eau et de l\' eau. Nur Discover -taskoj estas apogitaj por kolektantoj. Spektu la samajn erojn keileregator Discovery, sed disponigas la alternan kolektanton por prizorgi tiun tasmon.';

$GLOBALS["lang"]['severity'] = 'Severco';

$GLOBALS["lang"]['Severity'] = 'Severco';

$GLOBALS["lang"]['severity_text'] = 'La teksto de la teksto';

$GLOBALS["lang"]['Severity Text'] = 'La teksto de la teksto';

$GLOBALS["lang"]['Severity is calculated from the <code>base_score</code> and can be one of: None, Low, Medium, High, Critical.'] = 'Estas kalkita de la <code>base_score</code> Kaj povas esti unu el: Neniu, maltalta, medium, Alta, Kritika.';

$GLOBALS["lang"]['Seychelles'] = 'Sej diversaeloj';

$GLOBALS["lang"]['share'] = 'Dividi';

$GLOBALS["lang"]['Share'] = 'Dividi';

$GLOBALS["lang"]['Share Name'] = 'Suba nomo';

$GLOBALS["lang"]['shared'] = 'Dénomination';

$GLOBALS["lang"]['Shared'] = 'Dénomination';

$GLOBALS["lang"]['shared_name'] = 'Komuna nomo';

$GLOBALS["lang"]['Shared Name'] = 'Komuna nomo';

$GLOBALS["lang"]['shell'] = 'Kuori';

$GLOBALS["lang"]['Shell'] = 'Kuori';

$GLOBALS["lang"]['Ship Date'] = 'La tristeta Dato';

$GLOBALS["lang"]['Shipped are a set of default items. These can be found by going to menu'] = 'Laevatud estas aro decha. Tiuj povas esti trovitaj irante al menuoj';

$GLOBALS["lang"]['short'] = 'Malonga mallonga';

$GLOBALS["lang"]['Short'] = 'Malonga mallonga';

$GLOBALS["lang"]['Should I remove all non-current data from this device?'] = 'Como?';

$GLOBALS["lang"]['Should this file (or pattern) be used to exclude files from being reported. Normally, to audit files, this is set to <code>y</code>.'] = 'Se tiu dosiero (a... padrono) kutimas ekskludi dosierojn de esti raportita. Normale, por a guiddi dosierojn, tio estas atinacita al <code>y</code>.';

$GLOBALS["lang"]['Should this vendor be used when retrieving vulnerabilities from FirstWave.'] = 'Se tiu vendito estu uzita dum prenado de vundeblecoj de FirstWave.';

$GLOBALS["lang"]['Should we add devices from the remote service, locally.'] = 'Ni aldonu aparatojn de la malpreksima servo, loke.';

$GLOBALS["lang"]['Should we apply this license to the selected Org as well as the Orgs children?'] = '[Nincs magyar neve] Vous avez mismo kiel la infanoj de Orgs?';

$GLOBALS["lang"]['Should we audit a SAN if the management software is detected.'] = 'Se la administrateur programmaro estas detektita.';

$GLOBALS["lang"]['Should we audit mount points.'] = 'Mezcla ni reviziu la punktojn.';

$GLOBALS["lang"]['Should we audit netstat ports (yes, no, servers only).'] = 'Se ni reviziu retstat hasnojn (je, neniuj, serviloj nur).';

$GLOBALS["lang"]['Should we audit the installed software.'] = 'Ni Redonu la instalitan programmaron.';

$GLOBALS["lang"]['Should we consider a filtered port to be an open port - and therefore flag this IP as having a device attached?'] = 'Como?';

$GLOBALS["lang"]['Should we consider an open|filtered port to be an open port - and therefore flag this IP as having a device attached?'] = 'Como?';

$GLOBALS["lang"]['Should we convert the hostname to lowercase.'] = 'Ni konvertis la mastro- nomon al miinusklo.';

$GLOBALS["lang"]['Should we create a file based on the audit result.'] = 'Ni kreu dosiron bazitan sur la revizio rezulto.';

$GLOBALS["lang"]['Should we expose this group in the web interface.'] = 'Se ni eksponis tiun gruppon en la retinterfaco.';

$GLOBALS["lang"]['Should we expose this query in the list of reports under the Report menu in the web interface.'] = 'Se ni eksponis tiun atendon en la lista de raportoj sub la Report menuo en la interretinterfaco.';

$GLOBALS["lang"]['Should we expose this query in the list of reports under the Reports menu in the web interface.'] = 'Se ni eksponis tiun atendon en la lista de raportoj sub la Reports menuo en la interretinterfaco.';

$GLOBALS["lang"]['Should we hide the audit script window when executing.'] = 'Se ni ka agnu la a scepticatorian fanestronikiam oni ekzekutas.';

$GLOBALS["lang"]['Should we ignore an invalid or self signed SSL certificate and submit the result anyway.'] = 'Se ni dogtus malvalidan epäilty mem subskribis SSL aestilon kaj submetas la rezulton Čiuokaze.';

$GLOBALS["lang"]['Should we install Open-Scap on the target machine.'] = 'Ni instali Open- Scap sur la celma apretino.';

$GLOBALS["lang"]['Should we match a device based mac address even if its a known likely duplicate from VMware.'] = 'Se ni egalas aparaton bazitán makan adreson e. se εia konata verracna duplikato de VMware.';

$GLOBALS["lang"]['Should we match a device based on its DNS fqdn.'] = 'Se ni povas egali aparaton bazitan sur εia DNS fqdn.';

$GLOBALS["lang"]['Should we match a device based on its DNS hostname.'] = 'Se ni devus egalin bazitan sur εia DNS mastro- nomo.';

$GLOBALS["lang"]['Should we match a device based on its UUID.'] = 'Se ni grilosu aparaton bazitan sur εia UUID.';

$GLOBALS["lang"]['Should we match a device based on its dbus id.'] = 'Se ni povas egali aparaton bazitan sur εia dbus id.';

$GLOBALS["lang"]['Should we match a device based on its fqdn.'] = 'Se ni povas egali aparaton bazitan sur εia fqdn.';

$GLOBALS["lang"]['Should we match a device based on its hostname and UUID.'] = 'Se ni povas egali aparaton bazitan sur εia mastro- nomo kaj UUID.';

$GLOBALS["lang"]['Should we match a device based on its hostname and dbus id.'] = 'Se ni egalus aparaton bazitan sur εia mastro- nomo kaj dbus id.';

$GLOBALS["lang"]['Should we match a device based on its hostname and serial.'] = 'Se ni devus egalin bazitan sur εia mastro- nomo kaj seria.';

$GLOBALS["lang"]['Should we match a device based on its ip if we have an existing device with no data.'] = 'Se ni povas egali aparaton bazitan sur εia ip se ni havas ekzistan aparaton kun neniuj datennoj.';

$GLOBALS["lang"]['Should we match a device based on its ip.'] = 'Se ni grilosu aparaton bazitan sur εia ip.';

$GLOBALS["lang"]['Should we match a device based on its mac address.'] = 'Se ni grilosu aparaton bazitan sur εia maka adreso.';

$GLOBALS["lang"]['Should we match a device based on its serial and type.'] = 'Se ni devus egalin bazitan sur εia seria kaj tipo.';

$GLOBALS["lang"]['Should we match a device based on its serial number.'] = 'Se ni povas egali aparaton bazitan sur εia seria nombro.';

$GLOBALS["lang"]['Should we match a device based only on its SNMP sysName and serial.'] = 'Se ni povas egali aparaton bazitán nur sur εia SNMP- simpara kaj seria.';

$GLOBALS["lang"]['Should we match a device based only on its SNMP sysName.'] = 'Se ni povas egali aparaton bazitán nur sur εia SNMP- simmono.';

$GLOBALS["lang"]['Should we match a device based only on its hostname.'] = 'Se ni povas egali aparaton bazitán nur sur εia mastro- nomo.';

$GLOBALS["lang"]['Should we ping the IP before attempting to scan it? If it does not respond to the ping, skip this device.'] = '? Te Sientes Mal? Il n \'y a pas de réaction en ce qui concerne le ping, le transsaltu tiunn aparato.';

$GLOBALS["lang"]['Should we populate the external system from our local devices.'] = 'Se ni distonas la eksteran sistemon de niaj lokaj aparatoj.';

$GLOBALS["lang"]['Should we retrieve all DNS names'] = 'Ni prenu Governanceujn nomojn';

$GLOBALS["lang"]['Should we run an audit and submit it (y/n).'] = 'Se ni prenus revizion kaj submetu εin (jah / ei).';

$GLOBALS["lang"]['Should we test for SNMP using UDP port 161.'] = 'SNMP uzanta UDP- havennon 161.';

$GLOBALS["lang"]['Should we test for SSH using TCP port 22.'] = 'Se ni testu por SSH uzanta TCP- haven 22.';

$GLOBALS["lang"]['Should we test for WMI using TCP port 135.'] = 'WMI uzanta TCP- haven 135.';

$GLOBALS["lang"]['Should we uninstall the agent (y/n).'] = 'S. explicitalosu la agenton (jah / ei).';

$GLOBALS["lang"]['Should we use the system or user level proxy to submit the audit result.'] = 'Se ni uzu la sistemon epäilty uzantnivelan anstata...';

$GLOBALS["lang"]['Should we use the win32_product WMI class (not recommended by Microsoft) when retrieving installed software.'] = 'Se ni uzus la venkon32 _ produkto WMI klaso (ne remomendite fare de Mikrosofto) dum prenado de secretita softvaro.';

$GLOBALS["lang"]['Should we use this method to authenticate user credentials. Set to <code>y</code> or <code>n</code>.'] = 'Ni uzu tiun metodon al a guidlentikaj uzantkredita. Agordas <code>y</code> a <code>n</code>.';

$GLOBALS["lang"]['Should we use this method to populate a users roles. The field <code>use_auth</code> must be set to <code>y</code> to use this. Set to <code>y</code> or <code>n</code>.'] = 'Le metodon por popularigi uzantojn. La kampo <code>use_auth</code> murtaa esti metita al <code>y</code> Uzi εin. Agordas <code>y</code> a <code>n</code>.';

$GLOBALS["lang"]['Should we use this value to match external and internal devices. Our default Integration uses IP and UUID here. If either of these match between external and internal device, we consider them to be the same device.'] = 'Ni uzu tiun Valon por egali eksterajn kaj internationaljn aparatojn. Nia deha skeptidlta Integri Se ';

$GLOBALS["lang"]['Show All'] = 'Montri Runiujn';

$GLOBALS["lang"]['sid'] = 'Sidiεi';

$GLOBALS["lang"]['Sid'] = 'Sidiεi';

$GLOBALS["lang"]['sidebar'] = 'Sivusta';

$GLOBALS["lang"]['Sidebar'] = 'Sivusta';

$GLOBALS["lang"]['Sierra Leone'] = 'Siera- Leono';

$GLOBALS["lang"]['Singapore'] = 'Singapuri';

$GLOBALS["lang"]['Site A'] = 'retejo';

$GLOBALS["lang"]['Site B'] = 'Retejo';

$GLOBALS["lang"]['site_hours_a'] = 'Horoj A';

$GLOBALS["lang"]['Site Hours A'] = 'Horoj A';

$GLOBALS["lang"]['site_hours_b'] = 'Horoj B';

$GLOBALS["lang"]['Site Hours B'] = 'Horoj B';

$GLOBALS["lang"]['size'] = 'Tamaño';

$GLOBALS["lang"]['Size'] = 'Tamaño';

$GLOBALS["lang"]['slaves'] = '(Sklavoj)';

$GLOBALS["lang"]['Slaves'] = '(Sklavoj)';

$GLOBALS["lang"]['Slovak'] = 'La Slovaque';

$GLOBALS["lang"]['Slovakia (Slovak Republic)'] = 'Szlovákia';

$GLOBALS["lang"]['Slovenia'] = 'Szlovákia';

$GLOBALS["lang"]['Slovenian'] = 'La Slovane';

$GLOBALS["lang"]['Smart Status'] = 'Estado inteligente';

$GLOBALS["lang"]['smversion'] = 'Smversio';

$GLOBALS["lang"]['Smversion'] = 'Smversio';

$GLOBALS["lang"]['Sneaky'] = 'Ovela.';

$GLOBALS["lang"]['snmp_enterprise_id'] = 'Numero d \'identification';

$GLOBALS["lang"]['Snmp Enterprise ID'] = 'Numero d \'identification';

$GLOBALS["lang"]['snmp_enterprise_name'] = 'Nom de l \'entreprise Snmp';

$GLOBALS["lang"]['Snmp Enterprise Name'] = 'Nom de l \'entreprise Snmp';

$GLOBALS["lang"]['snmp_oid'] = 'Oid Smp';

$GLOBALS["lang"]['Snmp Oid'] = 'Oid Smp';

$GLOBALS["lang"]['snmp_timeout'] = 'Snmp aikakatkaisu';

$GLOBALS["lang"]['Snmp Timeout'] = 'Snmp aikakatkaisu';

$GLOBALS["lang"]['snmp_version'] = 'Snmp version';

$GLOBALS["lang"]['Snmp Version'] = 'Snmp version';

$GLOBALS["lang"]['So a script is not working on a recalcitrant device. Grrr. The scripts for Windows, Linux, and MacOS all accept the debugging argument. This can be set in the script itself, or provided on the command line. Run the script using that option set to 5 and you should see in which section of the script the failure occurs. For example'] = 'Tiel kézműves ne laboras pri rekalsitant aparato. La kézműves por Fenestroj, Linukso, kaj MacOS Čiuj akceptas la malkonstruan argumenton. Tio povas esti metita en la kézműves mem, epäilty disponigita sur la komandlinio. Run la manikripto uzanta tiun opcion metian al 5 kaj vi devus vidi en kiu sekcio de la manikripto kiun la fiasko okazas. Ekzample';

$GLOBALS["lang"]['So apart from a regular word, what other options are there - I am glad you asked! As per the standard Open-AudIT API, we have several operators for filtering. Operators that can precede the value are'] = 'Kromregul vorto, kion alfaj opcioj estas corbatas - mi εojas ke vi dementia! Kiel per la norma API Open- Audit, ni havas plurajn funkciigistojn por filtrado. Opérateuroj kiuj povas anta.i la Valon estas';

$GLOBALS["lang"]['So you have an issue providing Open-AudIT credentials to discover your devices. I have an answer - dont then! Sure, I mean, discovery is the best thing since sliced bread. You do not need to know ahead of time <i>Whats On Your Network</i>. But how can you extract data from devices without providing credentials?<br><br>In the case of computers, an easy option is to copy the appropriate audit script to the target machines and set it to execute on a schedule. More details on the wiki. The machines will send their data to Open-AudIT on that schedule, almost as if you were running discovery. The device simply runs the audit script on a schedule (again, you can read the audit script) as the user you tell it to and sends the output to the server. No credentials are involved at all.<br><br>And now we have Agents for Windows. The advantages of an actual installed Agent are'] = 'Tiel vi havas temon disponigantan Open- Audit- kredita.ojn por malkovri viajn aparatojn. Mi havas responsonon - ne plu! Mi pensas, ke malkovro estas la pléj bona a.o ekde tran. Vi ne bezonas scii antaluc <i>Kio estas sobre Via Reto</i>. Kiel vi povas eltiri datumojn de aparatoj sen providoni akredita...<br/><br/>Koncerne komputilojn, waste opcio dedes kopii la konvenan reviziomanuskripton al la celma negociainaj kaj meti εin por efektivigi horaron. Pli da detaloj sur la Vikio. La ma apretinoj sentos siajn datumojn al Open- Audit en tiu horaro, preska La aparato simply prizorgas la reviziomanuskripton en horaro (deno, vi povas legi la reviziomanuskripton) kiel la uzanto vi rakontas εin al kaj sendas la produkta. Neniuj akredita.oj estas implicitaj entute.<br/><br/>Nun ni havas agentojn por Vindozo. La avanta pilaoj de fakta secretita agento estas';

$GLOBALS["lang"]['socket'] = 'Sokke';

$GLOBALS["lang"]['Socket'] = 'Sokke';

$GLOBALS["lang"]['software'] = 'Mousseline';

$GLOBALS["lang"]['Software'] = 'Mousseline';

$GLOBALS["lang"]['Software Found Last 7 Days'] = 'Program de recherche la 7 Tagojn';

$GLOBALS["lang"]['Software Found Today'] = 'Hodia';

$GLOBALS["lang"]['Software Found Yesterday'] = 'La programmaro Trovis hiera';

$GLOBALS["lang"]['software_key'] = 'Mousseline';

$GLOBALS["lang"]['Software Key'] = 'Mousseline';

$GLOBALS["lang"]['Software License Reporting'] = 'Softvara permesilo';

$GLOBALS["lang"]['software_name'] = 'Mousseline Nom de la ville (facultatif, sans doute pas besoin de traduction)';

$GLOBALS["lang"]['Software Name'] = 'Mousseline Nom de la ville (facultatif, sans doute pas besoin de traduction)';

$GLOBALS["lang"]['Software Policies'] = 'Softvaro politika';

$GLOBALS["lang"]['software_revision'] = 'Softvaro- Revizio';

$GLOBALS["lang"]['Software Revision'] = 'Softvaro- Revizio';

$GLOBALS["lang"]['software_version'] = 'Mousseline';

$GLOBALS["lang"]['Software Version'] = 'Mousseline';

$GLOBALS["lang"]['Solaris'] = 'Solaris';

$GLOBALS["lang"]['Solomon Islands'] = 'Salomonoj';

$GLOBALS["lang"]['Somalia, Somali Republic'] = 'somalio, soma reguliko';

$GLOBALS["lang"]['Some collections can be executed - queries, etc - see below.'] = 'Kelkaj kolektoj povas esti efektivititaj - demandoj, ktp - Vidas malsupre.';

$GLOBALS["lang"]['Some examples are at the bottom of this page. All endpoints also have a minimum list of required fields. These are below.'] = 'Kelkaj ekzemoj estas Régie la fondo de tiu pa fusiono. Imitaiuj finpunktoj anka. havas miniman Figyelj de postulataj kampaj. Mina sentio malsupre.';

$GLOBALS["lang"]['Some of our templates support the new move to dataTables, using server side processing. This massivley improves load times.'] = 'Kelkaj el niaj раblanoj apogas la novan movon al datenabloj, uzante servilflankpredigon. Tiu Massivley plbonigas роде...';

$GLOBALS["lang"]['Some other error has occurred when attempting to bind to the LDAP server. It is contactable (ie, the <i>connect</i> above has worked), but for some other reason, binding has not occurred. Check the logs on the LDAP server.'] = 'Iu alias eraro okazis dum provado ligi al la LDAP- servilo. i estas kontaktebla (mi, la) <i>lizazidi</i> Supre laboris, sed pro iu alias kialo, ligado ne okazis. Kontrou la tagalojn sur la LDAP servilo.';

$GLOBALS["lang"]['Something has gone seriously wrong. Open-AudIT cannot read the <i>orgs</i> table.'] = 'Io fu apretado es serio. Audit ouvert ne povas legi la <i>Orgoj</i> Tablo.';

$GLOBALS["lang"]['Something has gone seriously wrong. Open-AudIT cannot read the <i>roles</i> table.'] = 'Io fu apretado es serio. Audit ouvert ne povas legi la <i>Les</i> Tablo.';

$GLOBALS["lang"]['Sometimes agentless discovery just does not fit your use-case. Maybe your PCs have tight firewalls. Maybe they are not on the network when your discoveries are scheduled. Maybe they are used by remote workers. Whatever the case, this is where an agent can help. Install it on the target machine and it will <i>check-in</i> with your Open-AudIT server on a schedule and accept tasks. The most common task the server requests is for the agent to audit itself and send the result.'] = 'Foje sensle... une eltrova... ne konvenas luun uzon. Eble via komputio havas striktajn fajromurojn. Eble ili ne estas en la reto kiam viaj malkovroj estas planitaj. Ili estas uzataj de malpreksimaj labouristoj. Kio ajn estas, tio estas kie agento povas helpi. Instali εin sur la celma apretino kaj εi <i>Kontrol- in</i> Kun via Open- Audit- servilo en horaro kaj akceptas takojn. La pléj ofta tako la servilpetoj estas por la agento por revizii sin kaj sendi la rezulton.';

$GLOBALS["lang"]['Sort'] = 'Sorčisto';

$GLOBALS["lang"]['sound'] = 'Sona Sono';

$GLOBALS["lang"]['Sound'] = 'Sona Sono';

$GLOBALS["lang"]['source'] = 'Fonto de la Fonto';

$GLOBALS["lang"]['Source'] = 'Fonto de la Fonto';

$GLOBALS["lang"]['South Africa'] = 'Sud- Afriko';

$GLOBALS["lang"]['South Georgia and the South Sandwich Islands'] = 'Suda Kartelio kaj la Suda Sandvi previstoonsuloj';

$GLOBALS["lang"]['Spain'] = 'Hispanio Hispanio';

$GLOBALS["lang"]['Spanish'] = 'Hispana hispano';

$GLOBALS["lang"]['Specific to Azure.'] = 'Specifo al Azure.';

$GLOBALS["lang"]['Specific to OKTA.'] = 'Specifo al OKTA.';

$GLOBALS["lang"]['Specifies a comma-separated list of targets (no spaces) to be excluded from the scan. The list you pass in uses normal Nmap syntax, so it can include hostnames, CIDR netblocks, octet ranges, etc.'] = 'Specifa komma- separita lista de celoj (neniuj spacoj) et ekskludita de la skanado. La lista vi pasas en uzo normala Nmap- sintakso, tien ke εi povas inkludi mastronomojn, CIDR- retblokojn, oktetintervalojn, ktp.';

$GLOBALS["lang"]['speed'] = 'Rapida Rapida Rapidaeco';

$GLOBALS["lang"]['Speed'] = 'Rapida Rapida Rapidaeco';

$GLOBALS["lang"]['speed_down_a'] = 'Rapida Malsupre A. A. A. A. A.';

$GLOBALS["lang"]['Speed Down A'] = 'Rapida Malsupre A. A. A. A. A.';

$GLOBALS["lang"]['speed_down_b'] = 'Rapideco Malsupre B';

$GLOBALS["lang"]['Speed Down B'] = 'Rapideco Malsupre B';

$GLOBALS["lang"]['speed_up_a'] = 'Rapidu supren la aavistus la';

$GLOBALS["lang"]['Speed Up A'] = 'Rapidu supren la aavistus la';

$GLOBALS["lang"]['speed_up_b'] = 'Rapideco sur B';

$GLOBALS["lang"]['Speed Up B'] = 'Rapideco sur B';

$GLOBALS["lang"]['sql'] = 'Sql';

$GLOBALS["lang"]['Sql'] = 'Sql';

$GLOBALS["lang"]['Sri Lanka'] = 'Srilanko';

$GLOBALS["lang"]['ssh_ports'] = 'Ssh sadamad';

$GLOBALS["lang"]['Ssh Ports'] = 'Ssh sadamad';

$GLOBALS["lang"]['ssh_timeout'] = 'Ssh aikakatkaisu';

$GLOBALS["lang"]['Ssh Timeout'] = 'Ssh aikakatkaisu';

$GLOBALS["lang"]['Stage 1: Documentation review'] = 'Tunnistaja 1: Dokumenta revizio';

$GLOBALS["lang"]['Stage 2: Implementation and effectiveness review'] = 'Scènejo 2: Efektivigo kaj efikecrevizio';

$GLOBALS["lang"]['Stand-Alone'] = 'Stando- Seul';

$GLOBALS["lang"]['Standard'] = 'Norme';

$GLOBALS["lang"]['standard_id'] = 'Normo- tunnus';

$GLOBALS["lang"]['Standard ID'] = 'Normo- tunnus';

$GLOBALS["lang"]['standards'] = 'Norvège';

$GLOBALS["lang"]['Standards'] = 'Norvège';

$GLOBALS["lang"]['standards_policies'] = 'Normoj Politikoj';

$GLOBALS["lang"]['Standards Policies'] = 'Normoj Politikoj';

$GLOBALS["lang"]['standards_results'] = 'Norvège';

$GLOBALS["lang"]['Standards Results'] = 'Norvège';

$GLOBALS["lang"]['start_date'] = 'Nom de la ville de Komencu Daton (facultatif, sans doute pas besoin d \'une traduction)';

$GLOBALS["lang"]['Start Date'] = 'Nom de la ville de Komencu Daton (facultatif, sans doute pas besoin d \'une traduction)';

$GLOBALS["lang"]['start_mode'] = 'Modo Komencu';

$GLOBALS["lang"]['Start Mode'] = 'Modo Komencu';

$GLOBALS["lang"]['Start a web browser and go to'] = 'Komencu retumonilon kaj iru al';

$GLOBALS["lang"]['started_date'] = 'Komenca dato';

$GLOBALS["lang"]['Started Date'] = 'Komenca dato';

$GLOBALS["lang"]['Starting June 2018 Google has implemented a pay-as-you-go pricing model for the Google Maps Platform APIs. Previously, most users with moderate usage could use Google Maps, which are embedded into opCharts and Open-AudIT Professional/Enterprise, for free. Googles new policy is outlined here,'] = 'Komencun lietto 2018 Google efektivigis salajro- kiel- you- agema preziga modelo por la Google Maps Plateforme API. Anta Google nova politiko estas skizita Či hulet,';

$GLOBALS["lang"]['Starts With'] = 'Komencu';

$GLOBALS["lang"]['state'] = 'Tato';

$GLOBALS["lang"]['State'] = 'Tato';

$GLOBALS["lang"]['Stats'] = 'Sztatoj';

$GLOBALS["lang"]['status'] = 'Tila';

$GLOBALS["lang"]['Status'] = 'Tila';

$GLOBALS["lang"]['Storage'] = 'Almacenamiento';

$GLOBALS["lang"]['storage_count'] = 'Conde de almacenamiento';

$GLOBALS["lang"]['Storage Count'] = 'Conde de almacenamiento';

$GLOBALS["lang"]['Storage area network'] = 'Retorno de almacinamiento';

$GLOBALS["lang"]['Storage-Area Network'] = 'Reto de la zona de almacenamiento';

$GLOBALS["lang"]['string'] = 'Kordo';

$GLOBALS["lang"]['String'] = 'Kordo';

$GLOBALS["lang"]['sub_resource_id'] = 'Numero d \'identification Suba Rimedo';

$GLOBALS["lang"]['Sub Resource ID'] = 'Numero d \'identification Suba Rimedo';

$GLOBALS["lang"]['sub_type'] = 'Subtipo';

$GLOBALS["lang"]['Sub Type'] = 'Subtipo';

$GLOBALS["lang"]['subject_key_ident'] = 'Sous- a';

$GLOBALS["lang"]['Subject Key Ident'] = 'Sous- a';

$GLOBALS["lang"]['Submit'] = 'Esita';

$GLOBALS["lang"]['Submit Online'] = 'Esitage en ligne';

$GLOBALS["lang"]['Submitted From'] = 'Sous- métite de';

$GLOBALS["lang"]['Subnet'] = 'Alivikko';

$GLOBALS["lang"]['Subnet Discoveries'] = 'Alamvõrgu avestius';

$GLOBALS["lang"]['Subscription ID'] = 'Sous- kribo- tunus';

$GLOBALS["lang"]['suburb'] = 'urelinna';

$GLOBALS["lang"]['Suburb'] = 'urelinna';

$GLOBALS["lang"]['Success'] = 'Sukceso Nom de la ville (facultatif, sans doute pas besoin de traduction)';

$GLOBALS["lang"]['Sudan'] = 'Sudano Sudano';

$GLOBALS["lang"]['Sudo Password'] = 'Szudo-parool';

$GLOBALS["lang"]['Sudo Password (optional)'] = 'Sudo parool (valikuliini)';

$GLOBALS["lang"]['suite'] = 'Serioj';

$GLOBALS["lang"]['Suite'] = 'Serioj';

$GLOBALS["lang"]['summaries'] = 'Résumé';

$GLOBALS["lang"]['Summaries'] = 'Résumé';

$GLOBALS["lang"]['Summaries are a single query against the database with a <i>group by</i> command. Using this simple method we can easily create a summary for virtually any attribute.<br><br>We no longer require a separate report for each <i>type</i> of a device. We now simply have a summary that groups by <i>devices.type</i> and shows the result. You can then click on a given type from the list and see the matching devices. In this case, one Summary replaces (potentially) 78 reports (there are 78 device types).<br><br>A summary is different to a query in that a summary is designed to group items by a given attribute then provide a <i>click through</i> link to the actual devices. A query is simply a list of items with no further links. As above - this of a Summary as a combined <i>report + subreport</i>, whereas a query is simply a single Report.<br><br>Summaries have a different collection template to the other resources within Open-AudIT. This template shows the Summary as you would expect and also shows buttons with counts of other resources. This page is designed to be the HomePage of Open-AudIT.'] = 'Résumés estas ununura atendo contra. La datumbazo kun datumbazo kun <i>Grupo de grupo</i> C \'est Komando. Uzante tiun simplan metodon ni povas facile krei repend por praktike ajna atantito.<br/><br/>Ni ne plu bezonas apartan raporton por <i>tipo</i> De aparato. Ni apáca egyszerű havas revolon kiu grupoj de <i>Paratoj. tipo tipo</i> Kaj montre la rezulton. Vi tiam povas klaki sur anta.fiksita tipo de la lista kaj vidi la egalajn aparatojn. En tiu kazo, unu Resumo anstata auditigamas (eble) 78 raportojn (ekzistas 78 aparatospecij).<br/><br/>Rezumo estas malsama al demando en tio ke regio estas dizajnita por grupigi erojn per antazarfiksita atpero to tiam disponigas attribution. <i>Klaku tra klako</i> Ali... I al la faktaj aparatoj. Sekva Kielin supre - tio de Resumo kiel Kombinita <i>Raporto + alamaruane</i>Dum atendo estas sencillas ununura Raporto.<br/><br/>Résúmenes havas malsaman kolkto apretablon al aliasj resursoj ene de Open- Audit. Tiu ðаblono montras la Resumon kiel vi atendus kaj ankai montras butonojn kun kalkuloj de aliasj resursoj. Tiu pa fusiono estas dizajnita por esti la Page d \'accueil de Open- Audit.';

$GLOBALS["lang"]['Summaries are designed to group items by a particular matching column and then to provide a link to individual devices. In the previous versions of Open-AudIT, this would have been two different items - a report and subreport. We have now bundled these into what we call a Summary.'] = 'Résúmenes estas dizajnitaj por grupigi erojn per speciala egala kolono kaj tiam por disponigi ligon al infinessduaj aparatoj. En la anta Ni apáca fascianis tiujn en kion ni nomas Ressumo.';

$GLOBALS["lang"]['Summaries provide drilldown reporting capabilities. Simple, intuitive, powerful.'] = 'Résúmenes disponigas Borillan raporkapablojn. Simpla, intuícia, intucia.';

$GLOBALS["lang"]['Summaries take the same arguments as Queries.'] = 'Kokkuvõte prenas la samajn argumentojn kiel Päringud.';

$GLOBALS["lang"]['Summary'] = 'Visszatérés';

$GLOBALS["lang"]['Sunday'] = 'Dimano';

$GLOBALS["lang"]['supplier'] = 'Provizanto';

$GLOBALS["lang"]['Supplier'] = 'Provizanto';

$GLOBALS["lang"]['Support'] = 'Sous- teno';

$GLOBALS["lang"]['Supported types are <code>subnet</code>, <code>seed</code> and <code>active directory</code>.'] = 'Subtenataj tipoj estas <code>subnet</code>, <code>seed</code> Kaj <code>active directory</code>.';

$GLOBALS["lang"]['Supports compliance with legal and regulatory requirements'] = 'Sous- ténoj konforme kun la auditleεaj kaj reguligaj postuloj';

$GLOBALS["lang"]['Suriname'] = 'Surinamo';

$GLOBALS["lang"]['Surveillance Audits:</strong> Annual audits to maintain certification'] = 'Auditorías de vigilancia: imitaiujaraj revizioj por konservi astadon';

$GLOBALS["lang"]['Svalbard & Jan Mayen Islands'] = 'Svalbardo et Jan Mayen Commerloj';

$GLOBALS["lang"]['Swaziland'] = 'Svazilando';

$GLOBALS["lang"]['Sweden'] = 'Svedio';

$GLOBALS["lang"]['Swedish'] = 'Sveda Sveda';

$GLOBALS["lang"]['switch_device_id'] = ' a.';

$GLOBALS["lang"]['Switch Device ID'] = ' a.';

$GLOBALS["lang"]['switch_port'] = ' C \'est pas vrai.';

$GLOBALS["lang"]['Switch Port'] = ' C \'est pas vrai.';

$GLOBALS["lang"]['Switzerland, Swiss Confederation'] = 'Svislando, Svisa Konfederacio';

$GLOBALS["lang"]['Symptom'] = 'Simbolo';

$GLOBALS["lang"]['Syrian Arab Republic'] = 'Siria Araba Respubliko';

$GLOBALS["lang"]['sysContact'] = 'SysContact';

$GLOBALS["lang"]['SysContact'] = 'SysContact';

$GLOBALS["lang"]['sysDescr'] = 'SysDescr';

$GLOBALS["lang"]['SysDescr'] = 'SysDescr';

$GLOBALS["lang"]['sysLocation'] = 'SysLocation';

$GLOBALS["lang"]['SysLocation'] = 'SysLocation';

$GLOBALS["lang"]['sysName'] = 'Nom Sys';

$GLOBALS["lang"]['SysName'] = 'Nom Sys';

$GLOBALS["lang"]['sysObjectID'] = 'SysObjectID';

$GLOBALS["lang"]['SysObjectID'] = 'SysObjectID';

$GLOBALS["lang"]['sysUpTime'] = 'Sys UpTime';

$GLOBALS["lang"]['SysUpTime'] = 'Sys UpTime';

$GLOBALS["lang"]['system_component'] = 'Sistemo Komsento';

$GLOBALS["lang"]['System Component'] = 'Sistemo Komsento';

$GLOBALS["lang"]['System-Area Network'] = 'Sistemo- alue Reto';

$GLOBALS["lang"]['TX Bitrate'] = 'TX bittinopeus';

$GLOBALS["lang"]['TX Freq'] = 'TX Freq';

$GLOBALS["lang"]['TX Level'] = 'TX- nivelo';

$GLOBALS["lang"]['TX Power'] = 'TX-PERCCO';

$GLOBALS["lang"]['TX Profile'] = 'TX Profilo';

$GLOBALS["lang"]['Table'] = 'Cuadro';

$GLOBALS["lang"]['tag'] = 'Étiquette';

$GLOBALS["lang"]['Tag'] = 'Étiquette';

$GLOBALS["lang"]['tag_1'] = '1 Etiqueta 1';

$GLOBALS["lang"]['Tag 1'] = '1 Etiqueta 1';

$GLOBALS["lang"]['tag_2'] = '2';

$GLOBALS["lang"]['Tag 2'] = '2';

$GLOBALS["lang"]['tag_3'] = '3 Silt 3';

$GLOBALS["lang"]['Tag 3'] = '3 Silt 3';

$GLOBALS["lang"]['Tagalog'] = 'La tagaloga tagaloga tagaloga';

$GLOBALS["lang"]['tags'] = 'Tagaoj';

$GLOBALS["lang"]['Tags'] = 'Tagaoj';

$GLOBALS["lang"]['Tags :: '] = 'La jenaj paεoj ligas al.: ';

$GLOBALS["lang"]['Taiwan'] = 'Tajvano Tajvano';

$GLOBALS["lang"]['Tajikistan'] = 'Taficialiko';

$GLOBALS["lang"]['Take note of all output and action each item as appropriate.'] = 'Prénu noton de ';

$GLOBALS["lang"]['Tanzania'] = 'Tanzanio Tanzanio';

$GLOBALS["lang"]['Target Computer'] = 'Celo Komputila Komputila';

$GLOBALS["lang"]['task'] = 'Tasso';

$GLOBALS["lang"]['Task'] = 'Tasso';

$GLOBALS["lang"]['tasks'] = 'Tâche';

$GLOBALS["lang"]['Tasks'] = 'Tâche';

$GLOBALS["lang"]['Tasks can be one of several distinct types: Baseline, Discovery, Report, Query, Summary or Collector.'] = 'Taskoj povas esti unu el pluraj apartaj tipoy: Bazlinio, Discovery, Raporto, Query, Yhteenveto épäilty kolektanto.';

$GLOBALS["lang"]['tcp_ports'] = 'Tcp Puertos';

$GLOBALS["lang"]['Tcp Ports'] = 'Tcp Puertos';

$GLOBALS["lang"]['Technical Details'] = 'Teknikaj detaloj';

$GLOBALS["lang"]['tenant'] = '10';

$GLOBALS["lang"]['Tenant'] = '10';

$GLOBALS["lang"]['Tenant ID'] = '→ Eventoj:';

$GLOBALS["lang"]['Tennant ID'] = '→ Eventoj:';

$GLOBALS["lang"]['ternary'] = 'Ternaro';

$GLOBALS["lang"]['Ternary'] = 'Ternaro';

$GLOBALS["lang"]['Test 1'] = '1 Essai 1';

$GLOBALS["lang"]['Test 2'] = 'Testi 2';

$GLOBALS["lang"]['Test 3'] = '3 Testo 3';

$GLOBALS["lang"]['Test Email'] = 'Recidato testa repo';

$GLOBALS["lang"]['test_minutes'] = 'Testaj protokoloj';

$GLOBALS["lang"]['Test Minutes'] = 'Testaj protokoloj';

$GLOBALS["lang"]['test_os'] = 'Testo Os';

$GLOBALS["lang"]['Test Os'] = 'Testo Os';

$GLOBALS["lang"]['test_subnet'] = 'Testo alamvõrk';

$GLOBALS["lang"]['Test Subnet'] = 'Testo alamvõrk';

$GLOBALS["lang"]['tests'] = 'Testoj';

$GLOBALS["lang"]['Tests'] = 'Testoj';

$GLOBALS["lang"]['Text'] = 'Teksto Teksto';

$GLOBALS["lang"]['Thai'] = 'Tajlandworld. kgm';

$GLOBALS["lang"]['Thailand'] = 'Tajlando Tajlando';

$GLOBALS["lang"]['Thank you for starting your journey with the best discovery and inventory tool around.'] = 'Dankon pro via voja financiacióno kun la plei bona malkovro kaj astaro.';

$GLOBALS["lang"]['Thanks to'] = 'Dankoni';

$GLOBALS["lang"]['Thats it! You have just edited the attributes of as many devices as you need to.'] = 'Autres Tío estas! Vi ';

$GLOBALS["lang"]['The <i>Roles</i> endpoint allows you to manage the set of permissions(Create, Read, Update, Delete) that are granted to the users and are applied to each endpoint.'] = 'La <i>Roloj</i> Endpoint permesas al vi administration la aron de permesoj (Loo, loe, uuenda, kustuta) kiuj estas konceditaj al la uzantoj kaj estas aplikitaj al claru finpunkto.';

$GLOBALS["lang"]['The API uses a cookie. You can request a cookie by sending a POST to the URL below, containing the username and password attributes and values:'] = 'La API uzas kuketojn.:';

$GLOBALS["lang"]['The Active Directory domain to retrieve a list of subnets from.'] = 'La Aktiva Adresardomajno por preni listan de subretoj de.';

$GLOBALS["lang"]['The Active Directory server to retrieve a list of subnets from.'] = 'La Aktiva Adresaro- servilo por preni listan de subretoj de.';

$GLOBALS["lang"]['The Applications endpoint allows you to define an application which you can then associate to a device (or devices).'] = 'La Aplicoj finpunkto permesas al vi difini petskribon kiun vi tiam povas asocii al aparato (a.a.)';

$GLOBALS["lang"]['The Attributes endpoint allows you to add customized values to different attributes in Open-AudIT, at the moment this feature works on the Class, Environment, Status and Type attributes on Devices, the Type attribute for both Locations and Orgs as well as the Menu Category for Queries. If you view an item of one of the prvious types (say view a Lkocation) you will notice the Type attribute must be selected from a drop-down box. This is where those values are stored. Hence, if you would like to add a new Type to be chosen for a Location, add it using the Attributes feature.'] = 'La Atributoj finpunkto permesas al vi aldoni adapttajn valorojn al malsamaj atinattoj en Open- Audit, en la momento tiu trajto laboras pri la klaso, Environment, Stato kaj Tipo atinary as sur Devices, la Tipo atinary as al kaj Lokoj kaj Orgs same kiel la Menu Kategorio por Päringud. Se vi rigardas eron de unu el prviosspectoj (dirvido Lkation) vi rimarkos ke la Tipo atantia as desges esti selektita el fal- falinta kesto. Tio estas kie tiau Valoroj estas stokitaj. Tial, se vi griatus aldoni novan Tipon por esti elektronita por Loko, aldoni εin uzante la Atributoj trajto.';

$GLOBALS["lang"]['The Automatable metric captures the answer to the question <strong>Can an attacker automate exploitation events for this vulnerability across multiple targets?</strong> based on steps 1-4 of the kill chain. These steps are reconnaissance, weaponization, delivery, and exploitation (Not Defined, No, Yes).'] = 'La A66AT Omatebla metrako kaptas la responseon al la demando <strong>? Te siientes mal por tiu vundebleco trans multoblaj celoj?</strong> Surbaze de рtupoj 1104 el la mortig urbaneno. Tiuj, armiligo, maksa. o kaj ekspluato (Ne Dinhed, No, Sí).';

$GLOBALS["lang"]['The CVE has been marked as invalid or withdrawn in the CVE List. It remains in the NVD but is excluded from default search results.'] = 'CVE estis markita kiel malvalida epäilty malparolema en la CVE- lista..';

$GLOBALS["lang"]['The CVE has been published to the CVE List and included in the NVD dataset. Initial ingestion only.'] = 'CVE estis publikigita al la CVE- listo kaj inkludita en la NVD datenserio. Komenca konsumado Nur.';

$GLOBALS["lang"]['The CVE has been updated after initial analysis. NVD enrichment data may have been revised.'] = 'La CVE estis γisdatigita post omenca analizo. NVD rigurdatenoj eble estis reviziitaj.';

$GLOBALS["lang"]['The CVE identifier.'] = 'La CVE- identigilo.';

$GLOBALS["lang"]['The CVE is actively being enriched with CVSS scores, CWE classifications, reference tags, and CPE applicability.'] = 'La CVE aktive estas ri.igita kun CVSS- dudekopo, CWE- klasifikoj, referencoetikedoj, kaj CPE- aplikbleco.';

$GLOBALS["lang"]['The CVE is not currently prioritized for enrichment due to resource constraints or other reasons.'] = 'La CVE ne estas nuntempe prioritatita pro rivisionigo pro rimedlimoj epäilty aliasj kialoj.';

$GLOBALS["lang"]['The CVE is queued for enrichment by NVD analysts. No detailed metadata yet.'] = 'La CVE estas copéditita por ri.igo fare de NVD analizistoj. Neniu detala metadatenoj ankora katlus.';

$GLOBALS["lang"]['The Cloud that owns this item. Links to <code>clouds.id</code>.'] = 'La nubo kiu preseas tiun objektton. Ligiloj al <code>clouds.id</code>.';

$GLOBALS["lang"]['The Device Seed Discovery type is the newest highly-effective method for network crawling, giving you the ability to target your network as narrowly or as broadly as you need. It is fast, it works and it is great.'] = 'La Device Seed Discovery- speco estas la plej nova tre efika metodo por reto rappanta, donante al vi la kapablon celi vian retoniel mallarεe a epäillytiel larεe kiel vi bezonas..';

$GLOBALS["lang"]['The Discovery Scan Options we ship are detailed in the table below. As above, Enterprise users can create more of these or edit the shipped items.'] = 'La Discovery Skandalo Opcioj, kiujn ni havas, estas depalaj en la tello malsupre. Kiel supre, Enterprise Uzantoj povas krei pli de tiauj aver redakki la ekspeditajn erojn.';

$GLOBALS["lang"]['The Elevated User query'] = 'Kőrgendatud kasutajapäring';

$GLOBALS["lang"]['The Executables feature scans the disk of a device as part of the audit and checks that every executable file is known to the package manager. Because it uses the package manager, the feature applies to Linux target devices only, and further than that, only rpm or deb based distributions. Anything Redhat or Debian based should work.'] = 'La Exécutables havas la disquete de aparato kiel parto de la revizio kaj... ekoj ke... Tämä päätös tulee voimaan päivänä, jona se hyväksytään. Kio ajn Redhat a. Debian bazigis devus labouri.';

$GLOBALS["lang"]['The FROM'] = 'La';

$GLOBALS["lang"]['The Group used to run the Baseline. Links to <code>groups.id</code>.'] = 'La Grupo Kulimis prizorgi la Bazlinion. Ligiloj al <code>groups.id</code>.';

$GLOBALS["lang"]['The ID from the devices table (the devices.name will be displayed) of the NTU at this end of the connection. Links to <code>devices.id</code>.'] = 'La ID de la paratoj tablo (la aparatoj). Nomo estos elmontrita de la NTU Če tiu fino de la ligo. Ligiloj al <code>devices.id</code>.';

$GLOBALS["lang"]['The ID from the imported benchmark policy.'] = 'La ID de la importita komparnormo politiko.';

$GLOBALS["lang"]['The ID from the locations table (the locations.name will be displayed) of this end of the connection. Links to <code>locations.id</code>. The A location is usually the <code>FROM</code> location.'] = 'La ID de la lokoj tallo (la lokoj). Nomo estos elmontrita de tiu fino de la ligo. Ligiloj al <code>locations.id</code>. La loko estas kutime la <code>FROM</code> Loko.';

$GLOBALS["lang"]['The ID from the locations table (the locations.name will be displayed) of this end of the connection. Links to <code>locations.id</code>. The B location is usually the <code>TO</code> location.'] = 'La ID de la lokoj tallo (la lokoj). Nomo estos elmontrita de tiu fino de la ligo. Ligiloj al <code>locations.id</code>. La B- loko estas kutime la <code>TO</code> Loko.';

$GLOBALS["lang"]['The ID of the associated device (if any). Links to <code>devices.id</code>.'] = 'La ID de la rilata aparato (se entute). Ligiloj al <code>devices.id</code>.';

$GLOBALS["lang"]['The ID of the associated discovery. Linked to <code>discoveries.id</code>'] = 'La ID de la rilata malkovro. Ali / 1993 / i <code>discoveries.id</code>';

$GLOBALS["lang"]['The ID of the item of the associated type.'] = 'La ID de la objectkto de la rilata tipo.';

$GLOBALS["lang"]['The ID of this orgs parent org. Linked to <code>orgs.id</code>'] = 'La ID de tiu orgegepatro org. Ali / 1993 / i <code>orgs.id</code>';

$GLOBALS["lang"]['The ID provided by the provider.'] = 'La ID disponigita fare de la provézanto.';

$GLOBALS["lang"]['The ID retrieved from a Cloud discovery.'] = 'La ID prenita de Nubo-trova.';

$GLOBALS["lang"]['The IP address of this collector used to communicate with the server.'] = 'La IP- adreso de tiu kolektanto kutimi komuniki kun la servilo.';

$GLOBALS["lang"]['The IP of the device to start a seed discovery with.'] = 'La IP de la aparato por numronci semotrova.';

$GLOBALS["lang"]['The IP of the external interface.'] = 'La IP de la extera interfaco.';

$GLOBALS["lang"]['The IP of the internal interface.'] = 'La IP de la interfaco.';

$GLOBALS["lang"]['The ISO/IEC 27001 certification process and its key elements.'] = 'ISO / IEC 27001 astadoprocezo kaj εiaj esencaj elementoj.';

$GLOBALS["lang"]['The ISP or Telco providing this link.'] = 'La PSI kaptlustab Telco disponiganta tiun ligon.';

$GLOBALS["lang"]['The JSON record from Mitre.'] = 'La JSON rekordo de Mitro.';

$GLOBALS["lang"]['The JSON record from the NVD feed.'] = 'La JSON rekordo de la NVD-sendo.';

$GLOBALS["lang"]['The LDAP OU of this user (if LDAP is used).'] = 'La LDAP OU de tiu uzanto (se LDAP estas uzita).';

$GLOBALS["lang"]['The LDAP server could not be connected to. At all. Check it is pingable from the Open-AudIT server. Check the correct port is open to the Open-AudIT server. An nmap from the Open-AudIT server will show this. Substitute your LDAP servers IP for $ip. Try:<code>nmap -vv $ip</code>'] = 'La LDAP- servilo ne povus estiligita al. Kontrau εin estas utila de la Open- Audit- servilo. Kontrau la εustan hasnon estas malferma al la Open- Audit servilo. Nmap de la Open - Audit- servilo Montros. LDAP- servilojn IP por ip. Tõestus:<code>nmap -vv $ip</code>';

$GLOBALS["lang"]['The LDAP server type is invalid. It should be either <i>active directory</i> or <i>openldap</i>.'] = 'La LDAP- servilspeco estas malvalida. Minä devus esti a Kahtlus <i>Aktiva direktoro</i> a <i>malfermado</i>.';

$GLOBALS["lang"]['The LDAP server was connected to and the user credentials accepted for bind.'] = 'La LDAP- servilo estis ligita al kaj la uzantkredita.oj akceptitaj por ligo.';

$GLOBALS["lang"]['The Linux Open-AudIT installer will test for and if required, install Open-AudITs dependencies from your distributions repository, including setting the Nmap SetUID. This is required for SNMP (UDP 161) detection by a non-root user. This is supported on RedHat/CentOS and Debian/Ubuntu. If you need to manually install Nmap:<br><br>For RedHat/CentOS do (NOTE - if you upgrade using yum, you will need to reapply this <i>chmod</i> setting).'] = 'La Linukso Open- Audit instalilo tetos por kaj se necesse, instala Open- Audit depodecajn de via distributio deponejo, inkluzive de metado de la Nmap SetuID. Tio estas postulata por SNMP (UDP 161) detekto de ne- radika uzanto. Tio estas apogita sur RedHat / CentOS kaj Debian / Ubuntu. L \'information sur l\' utilization de l \'eau est disponible sur le site web de la Commission.<br/><br/>(HU) <i>kemod</i> Metante.';

$GLOBALS["lang"]['The Location that contains this network. Links to <code>locations.id</code>.'] = 'Situo kiu enhavas tiun reton. Ligiloj al <code>locations.id</code>.';

$GLOBALS["lang"]['The NVD assigned base status.'] = 'La NVD asignes bazstatuson.';

$GLOBALS["lang"]['The National Institute of Standards and Technology is the federal technology agency. They advance official technology, measurement science and standards.'] = 'La Riikl Standardiinstituut (Nacia Instituto de Normoj) kaj Tekniko estas la föderacia teknologistanco. Ili avancas oficialan teknologion, mezursciencon kaj normojn.';

$GLOBALS["lang"]['The Network to Discover'] = 'La Reto por malkovri';

$GLOBALS["lang"]['The Nmap timing preset.'] = 'La Nmap tempigas otheradistatud.';

$GLOBALS["lang"]['The OS this package should be reported against. Blank for all. Use the percent sign % as a wildcard. Will be tested against os_group, os_family and os_name in that order.'] = 'La OS tiu paka.o devus esti raportita kontra épäilty. Pour Oni uzas la rean modon (AS- finajxon). Estos presente Kontra stide os _ group, os _ familio kaj ostnomo en tiu pesekvo.';

$GLOBALS["lang"]['The Open-AudIT API'] = 'API La OpenAudit';

$GLOBALS["lang"]['The Open-AudIT id of the linked cloud. Links to <code>clouds.id</code>.'] = 'La Open- Audit- identiga.o de laligita nubo. Ligiloj al <code>clouds.id</code>.';

$GLOBALS["lang"]['The Open-AudIT server code was exeucted within this file.'] = 'La Malferma- Aud imitai tiu servilo kodo est forigita ene de tiu dosiero.';

$GLOBALS["lang"]['The Open-AudIT server code was exeucted within this function.'] = 'La Malferma- Aud imitai tiu servilo kodo est forigita ene de tiu funkcio.';

$GLOBALS["lang"]['The OpenSCAP ecosystem provides multiple tools to assist administrators and auditors with assessment, measurement, and enforcement of security baselines including a wide variety of hardening guides and configuration baselines developed by the open source community, ensuring that you can choose a security policy which best suits the needs of your organization, regardless of its size.'] = 'La OpenSCAP ekositemo disponigas multoblajn ilojn por helpi administrationnnojn kaj revizorojn kun takso, mezurado, kaj devigo de sekurecbazlinioj inkluzive de vasta gamo de hardantaj gvidistoj konfiguraciobazlinioj epoliuigita';

$GLOBALS["lang"]['The OpenSCAP project is a collection of open source tools for implementing and enforcing this standard, and has been awarded the SCAP 1.2 certification by NIST in 2014.'] = 'La OpenSCAP projekto estas kolekto de malfermfontaj iloj por efektivigado kaj devigado de tiu normo, kaj estis alju bendita la SCAP 1.2 astado fare de NIST en 2014.';

$GLOBALS["lang"]['The Organisation that owns this item. Links to <code>orgs.id</code>.'] = 'La organiso kiu poseas tiun objectkton. Ligiloj al <code>orgs.id</code>.';

$GLOBALS["lang"]['The Process Identifier of the running associated discovery.'] = 'La Procezo Identificador de la kuranta rilata eltrova.';

$GLOBALS["lang"]['The RU positon of the top of this device.'] = 'La RU- pozito de la pinto de tiu aparato.';

$GLOBALS["lang"]['The Racks feature is used to manage and visualize your rack use with an Organisation, Location, Building, Floor, Room and Row.'] = 'La Racks- trajto kutimas administri kaj bildigi vian rako-uzon kun organiso, Loko, Konstrua.';

$GLOBALS["lang"]['The SCAP is a specification for expressing and manipulating security data in standardized ways. SCAP uses several individual specifications in concert to automate continuous monitoring, vulnerability management, and security policy compliance evaluation reporting'] = 'La SCAP estas specifo por espridado kaj manipulado de sekurrecdatenoj la epäilty normitaj manieroj. SCAP uzas plurajn indifuajn Specififojn en concerto por a sceptictomatgi kontinuan monitoringadon, vundbleco- properradon, kaj sekurrecpolitikobattakon raportantan raportadon';

$GLOBALS["lang"]['The SELECT'] = 'La SELECT';

$GLOBALS["lang"]['The SELECT section of the query should use full dot notation and also request the field with its full dot name. IE - SELECT devices.id AS `devices.id`. Each field should be selected in this fashion to enable GUI side attribute filtering.'] = 'La SELECT- sekcio de la atendo devus uzi plenan dotnotacion kaj anka. Peti la kampon kun φia plena puttnomo. IE - SELECT aparatoj. Kiel \'dispositivos.id\' imitaiu kampo devus esti selektita en tiu modo por ebligi GUI- flankan attribution filterntan.';

$GLOBALS["lang"]['The SELECT section of your SQL must contain fully qualified columns and specify certain columns.'] = 'La SELECT sekcio de via SQL tuhoaa enhavi plane kvalifikitaj n kolonojn kaj prezigi certajn kolonajn.';

$GLOBALS["lang"]['The SNMP community string.'] = 'La SNMP komuniumkordo.';

$GLOBALS["lang"]['The SNMP v3 Authentication Passphrase.'] = 'La SNMP v3 Autentimise parolifras.';

$GLOBALS["lang"]['The SNMP v3 Authentication Protocol.'] = 'La SNMP v3 Provincio de autenticación.';

$GLOBALS["lang"]['The SNMP v3 Privacy Passphrase.'] = 'La SNMP v3 Private Passfrase.';

$GLOBALS["lang"]['The SNMP v3 Privacy Protocol.'] = 'La SNMP v3 Protocole privé.';

$GLOBALS["lang"]['The SNMP v3 Security Level.'] = 'La SNMP v3 Turvatase.';

$GLOBALS["lang"]['The SNMP v3 Security Name.'] = 'La SNMP v3 Turvanimi.';

$GLOBALS["lang"]['The SNMPv3 context Engine ID (optional).'] = 'La SNMPv3 kunteksto Identificación de motor (valikuliini).';

$GLOBALS["lang"]['The SNMPv3 context Name (optional).'] = 'La SNMPv3 kuntekstonomo (valikuliini).';

$GLOBALS["lang"]['The SQL cannot contain <strong>WHERE @filter OR</strong>. That SQL will not be executed, however <strong>WHERE @filter AND</strong> queries are allowed.'] = 'La SQL ne povas enhavi <strong>Tunnistaja</strong>. Ke SQL ne estos ekzekutita, tamen <strong>Saluton [esprimas al vi] - [iu persono, kiu persono need] Blazio.</strong> les conditions de vie et de travail.';

$GLOBALS["lang"]['The SQL queries used in Open-AudIT require the use of the backtick - ` character and NOT the standard single quote for fields. On most US Windows keyboards the backtick key is located in the top-left of the keyboard along with the tilde ~. On a US Mac keyboard the backtick key is located next to the SHIFT key. The standard single quote is still used to enclose values as the examples below illustrate.'] = 'La SQL- demandoj uzitaj en Open- Audit postulas la uzon de la backtick - karaktero kaj NE la norma unununura cita. La plej multaj usonaj Fenestroj klavaroj la backtick calosilo situas en la pint- maldekstro de la klavaro kune la tilde. Sur US Mac klavaro la backtick calosilo situation as pléj preksime al la Shift- seplosilo. La norme ununura cita';

$GLOBALS["lang"]['The SQL query is essentially broken into three parts.'] = 'La SQL- query estas esence rompita en tri partojn.';

$GLOBALS["lang"]['The Standards functionality in Open-AudIT allows you to, ahead of time, complete the questions auditors require when completing ISO 27001 certification.'] = 'La Normoj- funkcieco en Open- Audit permesas al vi, annaa. tempo, kompletigi la demandojn reviziantoj postulas kiam kompletigi ISO 27001 aestadon.';

$GLOBALS["lang"]['The URL of the external system.'] = 'URL de la ekstera sistemo.';

$GLOBALS["lang"]['The URL of your Open-AudIT Server that this Collector will report to (no trailing slash).'] = 'URL de via Open- Audit Servilo kiun TIu kokonto raportos al (neiu malanta transfertran círregio).';

$GLOBALS["lang"]['The URL the audit scripts should submit their result to.'] = 'La URL- kézműves devus submeti sian rezulton.';

$GLOBALS["lang"]['The User endpoint allows you to manage user accounts within Open-AudIT.'] = 'La Uzanta finpunkto permesas al vi properr uzantkontojn ene de Open- Audit.';

$GLOBALS["lang"]['The WHERE'] = 'La Čielo estas';

$GLOBALS["lang"]['The WHERE section of your SQL <em>must</em> contain'] = 'La sekcio de via SQL <em>Dévas</em> enhava';

$GLOBALS["lang"]['The Windows'] = 'La fenestroj';

$GLOBALS["lang"]['The Windows log may say the following'] = 'La Fenestroj povas diri la sekvantan';

$GLOBALS["lang"]['The account must have a password; WMI does not allow blank passwords.'] = 'La raporto handa.o pasvorton. WMI ne permesas brilajn pasvortojn.';

$GLOBALS["lang"]['The account password must NOT contain \" (double quotes). This is because cscript (and wscript) cannot parse argument values containing double quotes. They are simply stripped. No (before you ask) escaping will not work. This is a cscript limitation and nothing to do with Open-AudIT.'] = 'La konto pasvorton ne tuhoaa enhavi "duoblajn citaa.ojn". Tio estas Ili estas simples nudikaatij. Neniu eskapi ne funkcias. Tio estas tipa limigo kaj nenio farenda.o kun Open- Audit.';

$GLOBALS["lang"]['The actual full name of this user.'] = 'La vera plena nomo de ';

$GLOBALS["lang"]['The address of the Open-AudIT server submit page.'] = 'La adreso de la Open- Audit- servilo submetas pa fuusion.';

$GLOBALS["lang"]['The administrator supplied credentials that were successfully used to bind to LDAP.'] = 'LDAP.';

$GLOBALS["lang"]['The administrator supplied credentials to bind to the LDAP server, but they have not been accepted by the LDAP sevrer. Double check the credentials work on the LDAP server, and then check (or reset them) in the Open-AudIT LDAP Server entry.'] = 'La administrationnto maksais akredita.ojn por ligi al la LDAP- servilo, sed ili ne estis akceptitaj fare de la LDAP sevrer. Duobla LDAP- servilo, kaj tiam Beko (kahtlane rekomencas ili) en la Open- Audit LDAP Server- eniro.';

$GLOBALS["lang"]['The agent and server are also intelligent enough to self-update the agent if a newer version is installed on the server (say after upgrading Open-AudIT).'] = 'La agento kaj servilo anka... nämä susfivisione inteligentaj por mem-... isdatigi la agenton se pli nova versio estas secretita sur la servilo (post...';

$GLOBALS["lang"]['The agent should download a fresh copy of the audit script, run it and submit the result to the server.'] = 'La agento devus el apretuti fre activati kopion de la reviziomanuskripto, prizorgi εin kaj submeti la rezulton al la servilo.';

$GLOBALS["lang"]['The application creates temporary audit scrtips here, copies them to the target machines, then deletes them.'] = 'La apliko kreas suppezorajn revizorojn Kopias ilin al la celma divertaiinoy, tiam forigas ilin.';

$GLOBALS["lang"]['The associated baseline. Links to <code>baselines.id</code>.'] = 'La rilata bazlinio. Ligiloj al <code>baselines.id</code>.';

$GLOBALS["lang"]['The associated discovery (if required). Links to <code>discoveries.id</code>.'] = 'La rilata malkovro (tarpeellinen vajalikud). Ligiloj al <code>discoveries.id</code>.';

$GLOBALS["lang"]['The attribute to test (from the <code>devices</code> table).'] = 'La contribution al testo (de la) <code>devices</code> Tablo.';

$GLOBALS["lang"]['The attribute to test (must match an external field name from below).'] = 'La atention to al testo (devas egali eksteran kampan nomon de malsupre).';

$GLOBALS["lang"]['The attributes for discovery scan options are as below.'] = 'La contribution por eltrova';

$GLOBALS["lang"]['The audit script upon which to base your customisations.'] = 'La revizio manikripto sur kiu bazigi viajn speciali fluidojn.';

$GLOBALS["lang"]['The audit script will use the files[ ] array and retrieve the file details.'] = 'La reviziomanuskripto uzos la dosierojn [] aron kaj prenas la dosierdetalojn.';

$GLOBALS["lang"]['The audit scripts all accept a debugging argument. You can run the script utilizing that and see in more detail what the issue is. And if you cannot figure it out - that is what we are here for! Open a support case and we will get things running in no time.'] = 'La reviziomanuskripto Iuj Akceptas malkonsturan argumenton. Vi povas prizorgi la manikripton utiligantation kaj vidi en pli da detalo kio la temo estas. Kaj se vi ne povas supozi εin, tio estas kion ni estas Malfermu subtenon, kaj ni havos a.ojn kurantajn en neniu tempo.';

$GLOBALS["lang"]['The base path from which to search for Users.'] = 'La bazo vojo de kiu ser previtoi uzantojn.';

$GLOBALS["lang"]['The below steps are not the fault of or unique to Open-AudIT and would affect <strong>any</strong> discovery application using remote WMI and/or Windows.'] = 'Sous рtupoj ne estas la faiglto de aignalunika al OpenAudit kaj influenzus <strong>Il n \'y a pas de</strong> Découverte apliko uzanta malpreksiman WMI kaj / a.';

$GLOBALS["lang"]['The benchmark type.'] = 'La kompranormo tipo.';

$GLOBALS["lang"]['The building the rack is located in.'] = 'La konsta';

$GLOBALS["lang"]['The calculated number of devices to be created externally.'] = 'La kalkita nombro daj por esti kreita ekstere.';

$GLOBALS["lang"]['The calculated number of devices to be created in Open-AudIT.'] = 'La kalkita nombro daj por esti kreita en Open- Audit.';

$GLOBALS["lang"]['The client ID is the ID of an Azure Active Directory application. The client secret is the key that you give that application.'] = 'La klivento ID estas la ID de Azure Aktiva Adresaro. La klivento sekreto estas la calosilo kiun vi donas al tiu aplika.';

$GLOBALS["lang"]['The collector is essentially a full install of Open-AudIT in <i>collector</i> mode. The collector is designed to run discovery upon the network it is situated in. It is not restricted to only that network, but ideally it would essentially be one collector per subnet where required. The collector is driven on a schedule by the server and runs discovery upon the network as specified.<br>When in Stand Alone mode the Collector acts as an independant server, simply forwarding all devices found to the main server.<br><br>Once installed and setup, control of the Collector is performed on the Server (not in Stand Alone mode).<br><br>The only required network ports between the collector and server are 80 or 443 (TCP connection established from the Collector to the Server). The Open-AudIT database is not (and cannot be) shared between these installs.<br><br>By default the collector (not in Stand Alone mode) will request from the server any discovery tasks every 5 minutes (you can configure this on the server for new Collectors using the configuration item collector_check_minutes) therefor any discovery tasks for the collector should be scheduled for 0, 5, 10, 15, etc minutes.'] = 'La kolektanto estas esence pena secretaoo de Open- Audit fr <i>koléktanto</i> De nuevo. La kolektanto estas dizajnita por prizorgi eltrova. sur la reton kiun εi estasituanta en. sedi ne estas limigiita al nur tiu reto, sed idéale εi esence estus unu kolektanto per subreto kie nesse. La kolektanto estas movita en horaro fare de la servilo kaj prizorgas eltrova<br/>Kiam en la Sola reprimimo la kolektanto funkcias kiel endelica servilo, simply plusendi <br/><br/>Post controlo de la kolektanto estas farita sur la Servilo (ne en Stand Alone- re.imo).<br/><br/>La nuraj postulataj sendostaciaj hasnoj inter la kolektanto kaj servilo estas 80 a Kaptlus 443 (TCP- ligo establita de la kolektanto εis la Servilo). La Open- Audit- datumbazo ne estas (kaj ne povas esti) distita inter tiuj installer.<br/><br/>deca... lte la kolektanto (nem disponible en Stand Alone)';

$GLOBALS["lang"]['The collector is essentially a full install of Open-AudIT in <i>collector</i> mode. This mode would reduce visible functionality in an effort to simplify and focus the application. It is designed to collect information about local networks and devices, where firewall and/or network traversal is an issue from the server.'] = 'La kolektanto estas esence pena secretaoo de Open- Audit fr <i>koléktanto</i> De nuevo. Tiu réfractionimo reduktus videblan funkciecon por simpligi kaj enfokusigi la apliki fason. ';

$GLOBALS["lang"]['The collectors internal IP used when it runs a discovery.'] = 'La kolektantoj International IP uzis kiam εi prizorgas eltrova.';

$GLOBALS["lang"]['The column name from the foreign table. Should be one of: class, environment, status, type or menu_category.'] = 'La kolonnomo de la fremda tablo. Devus esti unu el: klaso, medio, statuo, tipo epäillyn valikko _ luokka.';

$GLOBALS["lang"]['The command executed upon the target device or Open-AudIT server code executed during discovery.'] = 'La kommundo efektivigis sur la celaparato kaplus Open- Audit- servilkodo efektivigita dum eltrova.o.';

$GLOBALS["lang"]['The configuration of your cluster can be: <code>active/active</code>, <code>active/passive</code>, <code>N+1</code>, <code>N+M</code>, <code>N-to-1</code>, <code>N-to-N</code>, <code>other</code> or blank.'] = 'La agordo de via areto povas esti: <code>active/active</code>, <code>active/passive</code>, <code>N+1</code>, <code>N+M</code>, <code>N-to-1</code>, <code>N-to-N</code>, <code>other</code> Malplena.';

$GLOBALS["lang"]['The credentials password. If the credentials are an SSH Key, this is the password used to unlock the key and is optional.'] = 'La akredita.oj pasvorton. Se la akredita.oj estas SSH... losilo... tio estas la pasvorton...';

$GLOBALS["lang"]['The credentials supplied by the user have failed.'] = 'La akredita... oj suppezitaj fare de la uzanto malsukcesis.';

$GLOBALS["lang"]['The credentials username.'] = 'La akredita.oj uzantinomo.';

$GLOBALS["lang"]['The current date and time in the format: Y-m-d H:i:s.'] = 'La nuna dato kaj tempo en la forma: Oui.';

$GLOBALS["lang"]['The current date in Y-m-d format.'] = 'La nuna dato en format Y- m- d.';

$GLOBALS["lang"]['The current status of the Cloud Discovery.'] = 'La nuna stato de la Nubo Discovery.';

$GLOBALS["lang"]['The current status of the discovery.'] = 'La Nuna stato de la malkovro.';

$GLOBALS["lang"]['The dashboard that will be shown by default for this user. Links to <code>dashboards.id</code>.'] = 'La kojelauta kiu estos montreta dea... lte por tiu uzanto. Ligiloj al <code>dashboards.id</code>.';

$GLOBALS["lang"]['The data stored in the database is not showing in the application translated. We leave the data as it is. However, there is nothing to stop you, the user, changing the name (for example) of an item in the database to your language.'] = 'La datenoj stokitaj en la datumbazo ne montre en la aplikibreako tradukita. Ni lasas la datumojn kiel εi estas. Tamen, ekzistas nenio por malda.rigi vin, la uzanton, шan. Κante la nomon (ekzample) de objectkto en la datumbazo al via lingvo.';

$GLOBALS["lang"]['The data you input will be used in a <code>LIKE</code> clause, not (as per the API) an <code>equals</code> clause. Another example - if you input <code>comput</code>, it would still return all computers. And because we are using a <code>LIKE</code> clause, it is case-insensitive.'] = 'La datumoj, kiujn vi enigas, estos uzataj en <code>LIKE</code> paragrafo, ne (kiel par la API) <code>equals</code> Paragrafo. Alia eczempo - se vi eniras <code>comput</code>Tamen, én ankora. Revenos al. <code>LIKE</code> Paragrafo, εi estas kazo-incentema.';

$GLOBALS["lang"]['The database schema can be found in the application if the user has database::read permission by going to menu: Admin -> Database ->'] = 'La tietokannatkemo povas esti trovita en la apliki Legu permeson irante al menuo: Administrateur - título Datumbazo - confar';

$GLOBALS["lang"]['The database version and web version are inconsistent.'] = 'La datumbazo versio kaj retversio estas malkonsekvencaj';

$GLOBALS["lang"]['The date of license expiration.'] = 'La dato de permesilo eksvalidi pilaas.';

$GLOBALS["lang"]['The date the software is discontinued by the manufacturer. Usually replaced by a newer version. Maintenance may still be available.'] = 'La dato la programmaro estas nuligita de la fabrikanto. Kutime anstatalucigite par pli nova versio. Prizorgo povas esti disponebla.';

$GLOBALS["lang"]['The date the software no longer receives updates and is effectively discontinued altogether. Maintenance is discontinued.'] = 'La dato la programmaro jam ne rizvas εisdatigojn kaj estas efike nuligita entute. Prizorgo estas nuligita.';

$GLOBALS["lang"]['The date this item was changed or added (read only). NOTE - This is the timestamp from the server.'] = 'La dato tiu objectto estis дальна Tio estas la tempostapo de la servilo.';

$GLOBALS["lang"]['The date/time when this result was created.'] = 'La dato / temo kiam tiu rezulto estis kreita.';

$GLOBALS["lang"]['The day of the month when this task should execute (* for every day).'] = 'La tago de la Monato kiam tiu tapo devus efektivigi (* por... iu tago).';

$GLOBALS["lang"]['The day of the week when this task should execute (* for every day).'] = 'La tago de la semajno kiam tiu tapo devus efektivigi (* por... iu tago).';

$GLOBALS["lang"]['The debug level (will output to command prompt window). Lower means less output with 0 being no output.'] = 'La debug nivelo (volas kommundi prostan fanestroni). Pli malta signfas malpli produkta.';

$GLOBALS["lang"]['The default discovery scan option is the UltraFast set.'] = 'La deha skeptista eltrova.';

$GLOBALS["lang"]['The default language assigned to any user created by this method.'] = 'La deha skeptista lingvo alisignita al iu uzanto kreita per tiu metodo.';

$GLOBALS["lang"]['The device must respond to an Nmap ping before it is considered online.'] = 'La aparato murtaa reaktioni al Nmap ping anta. ol εi estas konsiderita rete.';

$GLOBALS["lang"]['The device within Open-AudIT. Links to <code>devices.id</code>.'] = 'La aparato ene de Open- Audit. Ligiloj al <code>devices.id</code>.';

$GLOBALS["lang"]['The direct link for the script is'] = 'La rekta ligo por la manikripto estas';

$GLOBALS["lang"]['The email address of the reciever'] = 'La retpo explota adreso de la recever';

$GLOBALS["lang"]['The enterprise binary from FirstWave is required for a license. Please download Open-AudIT from'] = 'La entrepreno binara de FirstWave estas postulata por licenco. Bonvolu el apretuti Open- Audit de';

$GLOBALS["lang"]['The entire associated baseline this result is from.'] = 'La tuta rilata bazlinio tiu rezulto estas de.';

$GLOBALS["lang"]['The exploited vulnerability can affect resources beyond the security authority of the vulnerable component. This usually means a privilege or trust boundary is crossed (for example, escaping from a container to the host OS).'] = 'La ekspluatita vundebleco povas infui resursojn preter la sekurrecadministrastacio de la vundebla kompunto. Tio kutime signfas saltan a fidolimon estas krucita (ekzample, eskapante de ujo εis la gastiganto Os).';

$GLOBALS["lang"]['The exploited vulnerability only impacts resources within the same security authority as the vulnerable component. In other words, the attacker’s actions stay within the original trust boundary.'] = 'La ekspluatita vundebleco nur trafas resonsojn ene de la sama sekurrecadministristracio kiel la vundebla kompunto. Esimerkiksi J vortoj, la agoj de la atakanto restas ene de la originea fidolim.';

$GLOBALS["lang"]['The externally referenced location ID. Usually populated by Cloud audits.'] = 'La ekstere referita loko ID. Kutime lo...';

$GLOBALS["lang"]['The fields associated with an Integration are stored in the database as a JSON array of objects. Each field has the following attributes'] = '# # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # # #';

$GLOBALS["lang"]['The first time that Open-AudIT retrieved details of this device.'] = 'La unua fojo ke Open- Audit prenis detalojn de tiu aparato.';

$GLOBALS["lang"]['The floor the rack is located on.'] = 'La planko sitas sur.';

$GLOBALS["lang"]['The foreign table to reference. Should be one of: devices, locations, orgs or queries.'] = 'La fremda tablo al referenco. Estu unu el: aparatoj, lokoj, orkoj a requideoj.';

$GLOBALS["lang"]['The format of your data should be in the form'] = 'La format de viaj datumoj brunces esti en la formo';

$GLOBALS["lang"]['The format used for the output to be emailed.'] = 'La forma uzita por la produkta';

$GLOBALS["lang"]['The fully qualified column upon which to group by. NOTE: When type = traffic, this represents the red query id.'] = 'La tute kvalifikita kolono sur kiu al grupo. Se tipo = trafiko, tio reprezentas la rugidaan kysely id.';

$GLOBALS["lang"]['The fully qualified name returned by the external system. EG: for NMIS we use configuration.roleType.'] = 'La tute kvalifikita nomo resendita per la ekstera sistemo. EG: por NMIS ni uzas konfiguracion. Rollolo Tipo.';

$GLOBALS["lang"]['The fully qualified table.column. Multiple may be provided, separated by a comma (no spaces).'] = 'La tute kvalifikita tablo. palsta. Multoblaj povas esti disponigitaj, apartigitaj per komo (neniuj spacoj).';

$GLOBALS["lang"]['The generated SQL query to test for this vulnerability. This field can be edited to correct the query as required.'] = 'La generita SQL- demande por testi pri tiu vundebleco. Tiu kapo povas esti redaktita por korekki la atendon kiel postulat.';

$GLOBALS["lang"]['The group of devices on which the baseline was run against.'] = 'La grupo de aparatoj sur kiuj la bazlinio estis prizorgita kontra katlustus.';

$GLOBALS["lang"]['The group that provides a list of devices for the integration. Links to <code>groups.id</code>.'] = 'La Grupo kiu disponigas Lisn de aparatoj por la integri <code>groups.id</code>.';

$GLOBALS["lang"]['The hour of the day when this task should execute (* for every hour).'] = 'La horo de la tago kiam tiu tapo murtaa efektivigi (* por... iu horo).';

$GLOBALS["lang"]['The id of the linked device. Links to <code>devices.id</code>'] = 'La ida.o de la ligita aparato. Ligiloj al <code>devices.id</code>';

$GLOBALS["lang"]['The identifier column (integer) in the database (read only).'] = 'La identilo (entier) en la datumbazo (legita nur).';

$GLOBALS["lang"]['The importance of this baseline (not used yet).'] = 'La tombeco de tiu bazlinio (ne uzis ankora kaptus).';

$GLOBALS["lang"]['The integer of severity.'] = 'La entjero de firmaco.';

$GLOBALS["lang"]['The internal value, reformatted in this format.'] = 'La International Valoro, reformita en tiu formaat.';

$GLOBALS["lang"]['The ip address of the Auth method.'] = 'La ip- adreso de la Auth- metodo.';

$GLOBALS["lang"]['The language to translate the web interface into for the user.'] = 'La lingvo traduki la retinterfacon en la uzanto.';

$GLOBALS["lang"]['The last date and time this item was executed (read only).'] = 'La lasta dato kaj tempo tii objekto estis efektivitita (legita nur).';

$GLOBALS["lang"]['The last time that Open-AudIT retrieved details of this device.'] = 'La Liquan fojon kiu Open- Audit prenis detalojn de tiu aparato.';

$GLOBALS["lang"]['The last time this benchmarks was executed.'] = 'La Liasan fojon tii kompranormo estis ekzekutita.';

$GLOBALS["lang"]['The last time this integration was run.'] = 'La litan fojon tiu integri rupturao estis prizorgita.';

$GLOBALS["lang"]['The license endpoint allows you to track the number of licenses found on your devices.'] = 'La licencia finpunkto permesas al vi printi la nombron da licencidojtrovitaj sur viaj aparatoj.';

$GLOBALS["lang"]['The line number assigned by the provider to the line at this end of the connection.'] = 'Lionombro asignita fare de la produezanto al la linio -Tiu fino de la ligo.';

$GLOBALS["lang"]['The location the rack is located in. Links to <code>locations.id</code>.'] = 'La loko kiun la rako situas fr. Ligiloj al <code>locations.id</code>.';

$GLOBALS["lang"]['The locations address.'] = 'La Lokoj Traktas.';

$GLOBALS["lang"]['The locations area.'] = 'Situo de lokoj.';

$GLOBALS["lang"]['The locations city.'] = 'L \'urbo de la lokoj.';

$GLOBALS["lang"]['The locations country.'] = 'La Lando.';

$GLOBALS["lang"]['The locations district.'] = 'La loka distrikto.';

$GLOBALS["lang"]['The locations latitude.'] = 'Lalatud de la lokoj.';

$GLOBALS["lang"]['The locations level.'] = 'La Loka Nivelo.';

$GLOBALS["lang"]['The locations longitude.'] = 'La lokoj wasudo.';

$GLOBALS["lang"]['The locations phone.'] = 'La Lokoj telefono.';

$GLOBALS["lang"]['The locations postcode.'] = 'La jenaj paεoj ligas.';

$GLOBALS["lang"]['The locations region.'] = 'La régiono de la lokoj.';

$GLOBALS["lang"]['The locations room.'] = 'La gouvernabro de la lokoj.';

$GLOBALS["lang"]['The locations state.'] = 'La lokoj deklaras.';

$GLOBALS["lang"]['The locations suburb.'] = 'La insulo anta. Urbo.';

$GLOBALS["lang"]['The locations suite.'] = 'La serio de lokoj.';

$GLOBALS["lang"]['The logic for device matching is contained in the devices_helper.php file, which on a Linux install can be found here'] = 'La logiko por aparato egala estas enhavita en la aparatoro. php dosiero, kiu sur Linukso- inspala.';

$GLOBALS["lang"]['The machine-default permission settings do not grant Local Activation permission for the COM Server application with'] = 'La ma apretin- deva guidstaj permesokontekstoj ne donas Local Activation- permeson por la COM- Servilo- aplika';

$GLOBALS["lang"]['The maximum physical weight (in KGs) this rack can hold.'] = 'La makimuma fizika pezo (en KG) tiu rako povas teni.';

$GLOBALS["lang"]['The maximum total BTUs this rack is rated for.'] = 'La makimuma totala BTUs tiu rako estas taksita por.';

$GLOBALS["lang"]['The minimum required attributes for attributes are'] = 'La minimmo postulis atregulojn por atreguloj estas';

$GLOBALS["lang"]['The minute of the hour when this task should execute (* for every minute).'] = 'La minuto de la horo kiam tiu tapo devus efektivigi (* por urbaniu minuto).';

$GLOBALS["lang"]['The month of the year when this task should execute (* for every month).'] = 'La monanato de la jaro kiam tiu tapo devus efektivigi (* por...';

$GLOBALS["lang"]['The name given to this item.'] = 'La nomo donita al tiu objektto.';

$GLOBALS["lang"]['The name given to this item. Ideally it should be unique.'] = 'La nomo donita al tiu objektto. Ideale εi devus esti unika.';

$GLOBALS["lang"]['The name given to this user (used to login). Ideally it should be unique.'] = 'La nomo donita al tiu uzanto (uzita por ensaluti). Ideale εi devus esti unika.';

$GLOBALS["lang"]['The name of the associated cloud (if required).'] = 'La nomo de la rilata nubo (ks.';

$GLOBALS["lang"]['The name of the software package, as audited by Open-AudIT. Use the percent sign % as a wildcard.'] = 'La nomo de la softvarpaka Oni uzas la realan modon (AS- finajxon).';

$GLOBALS["lang"]['The name of the user who last changed or added this item (read only).'] = 'La nomo de la uzanto kiu latte шanшi.';

$GLOBALS["lang"]['The name provided by the provider.'] = 'La nomo provizita de la provizanto.';

$GLOBALS["lang"]['The network in the format 192.168.1.0/24.'] = 'La reto en la forma 192.168.1.0 / 24.';

$GLOBALS["lang"]['The network subnet to execute the discovery on.'] = 'La sendostacia subreto por efektivigi la eltrova.';

$GLOBALS["lang"]['The new Agent runs a PowerShell version of the old audit script in preparation for the depreciation of VBScript (yes, it is coming).'] = 'La nova agento prizorgas Poder Shell version de la malnova reviziomanuskripto en preparo por la malpreco de VBScript (je, ';

$GLOBALS["lang"]['The number of RUs this device occupies.'] = 'La nombro da Ruoj tiu aparato okupas.';

$GLOBALS["lang"]['The number of associated locations. Links to <code>locations.cloud_id</code>.'] = 'La nombro de rilataj lokoj. Ligiloj al <code>locations.cloud_id</code>.';

$GLOBALS["lang"]['The number of associated networks. Links to <code>networks.cloud_id</code>.'] = 'La nombro de rilataj retoj. Ligiloj al <code>networks.cloud_id</code>.';

$GLOBALS["lang"]['The number of audited devices in this cloud. Links to <code>devices.cloud_id</code> and <code>devices.serial</code>.'] = 'La nombro de reviziitaj aparato en .i tiu nubo. Ligiloj al <code>devices.cloud_id</code> Kaj <code>devices.serial</code>.';

$GLOBALS["lang"]['The number of critical severity vulnerabilities held by FirstWave (not in your database).'] = 'La nombro da kritikaj firmacoj tenitaj fare de FirstWave (ne en via datumbazo).';

$GLOBALS["lang"]['The number of devices found by this discovery.'] = 'La nombro da aparatoj trovitaj per tiu eltrova.o.';

$GLOBALS["lang"]['The number of devices in the associated group.'] = 'La nombro da aparatoj en la rilata grupo.';

$GLOBALS["lang"]['The number of devices in this cloud with a state of running. Links to <code>devices.cloud_id</code> and <code>devices.instance_state</code>.'] = 'La nombro da aparatoj en tiu nubo kun stato de kurado. Ligiloj al <code>devices.cloud_id</code> Kaj <code>devices.instance_state</code>.';

$GLOBALS["lang"]['The number of devices in this cloud with a state of stopped. Links to <code>devices.cloud_id</code> and <code>devices.instance_state</code>.'] = 'La nombro da aparatoj en tiu nubo kun stato de stopo. Ligiloj al <code>devices.cloud_id</code> Kaj <code>devices.instance_state</code>.';

$GLOBALS["lang"]['The number of devices in this cloud. Links to <code>devices.cloud_id</code>.'] = 'La nombro de aparatoj en .i tiu nubo. Ligiloj al <code>devices.cloud_id</code>.';

$GLOBALS["lang"]['The number of devices this benchmark will be executed upon. Derived from <code>benchmarks.devices</code>.'] = 'La nombro da aparatoj tiu komparnormo estos efektivigita sur. Mortigita <code>benchmarks.devices</code>.';

$GLOBALS["lang"]['The number of devices to limit this discovery to.'] = 'La nombro da aparatoj por limigi tiun eltrova.';

$GLOBALS["lang"]['The number of high severity vulnerabilities held by FirstWave (not in your database).'] = 'La nombro daalta fairco vundeblecoj tenitaj fare de FirstWave (ne en via datumbazo).';

$GLOBALS["lang"]['The number of low severity vulnerabilities held by FirstWave (not in your database).'] = 'La nombro da malta graveco vundeblej tenitaj fare de FirstWave (ne en via datumbazo).';

$GLOBALS["lang"]['The number of medium severity vulnerabilities held by FirstWave (not in your database).'] = 'La nombro da mezaj firmacoj tenitaj fare de FirstWave (ne en via datumbazo).';

$GLOBALS["lang"]['The number of purchased licenses.'] = 'La nombro de a bordoetetaj licencoj.';

$GLOBALS["lang"]['The number of seconds to try and communicate with the target IP.'] = 'La nombro da sekundoj por providation kaj komuniki kun la celo IP.';

$GLOBALS["lang"]['The number of vulnerabilities without a severity held by FirstWave (not in your database).'] = 'La nombro da vundeblecoj sen firmasco tenita fare de FirstWave (ne en via datumbazo).';

$GLOBALS["lang"]['The offset is the count of devices you wish to return data from.'] = 'La ofseto estas la Kalkulo de aparatoj kiujn vi deziras resendi datennojn de.';

$GLOBALS["lang"]['The only required permission / policy name (in our testing) is'] = 'La nura postulata permeso / politiknomo (en nia testado) estas';

$GLOBALS["lang"]['The optional secondary column. NOTE: When type = traffic, this represents the yellow query id.'] = 'La failula sekudara kolono. Se tipo = trafiko, tio reprezentas la flavan kysely id.';

$GLOBALS["lang"]['The optional third column. NOTE: When type = traffic, this represents the green query id.'] = 'La failula tria kolumno. Se tipo = trafiko, tio reprezentas la verdan question id.';

$GLOBALS["lang"]['The order of information retrieval is snmp, ssh, wmi.'] = 'La ordo de informaj prenasal estas snmp, ssh, wmi.';

$GLOBALS["lang"]['The orientation of this device.'] = 'La orientale pilao de tiu aparato.';

$GLOBALS["lang"]['The password (if not using the user running the script).'] = 'La pasvorton (se ne uzante la uzanton prizorganin la manikripton).';

$GLOBALS["lang"]['The password for the dn_account attribute.'] = 'La pasvorton por la dn account attass.';

$GLOBALS["lang"]['The password used to access the external system.'] = 'La pasvorton uzata por aliri la eksteran sistemon.';

$GLOBALS["lang"]['The path to the file or directory.'] = 'La vojo al la dosiero a. dosierujo.';

$GLOBALS["lang"]['The path to the file or directory. Directories should end with a trailing slash.'] = 'La vojo al la dosiero a. dosierujo. Direktoroj murtaa finiditoi kun migrovojo.';

$GLOBALS["lang"]['The physical depth (in CMs) of the rack.'] = 'La fizika profundo (en CM) de la rako.';

$GLOBALS["lang"]['The physical height (in CMs) of the rack.'] = 'La fizika aliteco (fr CM) de la rako.';

$GLOBALS["lang"]['The physical weight (in KGs) of the rack at present.'] = 'La fizika pezo (en KGoj) de la rako nuntempe.';

$GLOBALS["lang"]['The physical weight (in KGs) of the rack when empty.'] = 'La fizika pezo (en KGoj) de la malplénigite du kiam rako.';

$GLOBALS["lang"]['The physical width (in CMs) of the rack.'] = 'La fizika larεo (fr CM) de la rako.';

$GLOBALS["lang"]['The pod (if any) that this rack is part of.'] = 'La balgo (se entute) ke tiu rako estas parto de.';

$GLOBALS["lang"]['The power circuit this rack attaches to.'] = 'La comecco cirkvito tiu rak alkro remomendaras.';

$GLOBALS["lang"]['The primary database table upon which to base this widget.'] = 'La primara datenartablo sur ciu bazigi tiun dra.';

$GLOBALS["lang"]['The primary method for authorization (what a user can do) is now based on the users Roles. Roles are defined as admin, org_admin, reporter, and user by default. Each role has a set of permissions (Create, Read, Update, Delete) for each endpoint. Standard roles as shipped should cover 99.9 percent of use-cases. The ability to define additional roles and edit existing roles is enabled in Open-AudIT Enterprise.'] = 'La primara metodo por aproso (kio uzanto povas fari) nun estas bazita sur la uzantroloj. Roloj estas difinitaj kiel admin, org _ admin, raportto, kaj uzanto déca. imitaiu rolo havas aron de permesoj (Crear, Leeri, Actualisar, Eliminar) por. Normaj roloj kiel ekspedite devus kovri 99,9 procentojn de uzo- kazoj. La kapablo difini kromajn rolojn kaj redakti ekzistajn rolojn estas ebligita en Open- Audit Enterprise.';

$GLOBALS["lang"]['The process identifier of this queue item.'] = 'La procezidentigilo de tiu atendospeco.';

$GLOBALS["lang"]['The process that was used last to retrieve details about the device'] = 'La procezo kiu estis uzita latte por preni detalojn pri la aparato';

$GLOBALS["lang"]['The purpose of this licensing page is to list the products and licenses included in Firstwave Commercial products including products based upon open source works.Open-AudIT is licensed from Firstwave under AGPLv3 or later with Enterprise and Professional functionality licensed under commercial terms.Open-AudIT when downloaded from FirstWave may include the following libraries and projects, which are supplied unmodified and licensed as indicated:'] = 'La celo de tiu licencadpa graduateo breacs listigi la produktojn kaj licencojn inkluditaj en Firstwave Commercial- produktoj inkluzive de produktoj bazitaj sur malfermfontecverkoj. Open- Audit estas licencita de Firstwave sub AGPLv3 a respect poste kun Enterprise kaj Profesia funkcieco licencita sub komercaj esprimej. Open- Audit kiam el apretutite de FirstWave povas inkludi la sekvajn bibliotekojn kaj projektojn, kiuj estas maksataj nemodifita kaj licencita kiel indikite:';

$GLOBALS["lang"]['The query that provides a list of devices for the integration. Links to <code>queries.id</code>.'] = 'La atendo kiu disponigas Figyelj de aparatoj por la integri / 1993 / o. Ligiloj al <code>queries.id</code>.';

$GLOBALS["lang"]['The rack asset number.'] = 'La radeta-aktiva nombro.';

$GLOBALS["lang"]['The rack asset tag.'] = 'La rac- aktivakedo.';

$GLOBALS["lang"]['The rack bar code.'] = 'La Trinkejo kodo.';

$GLOBALS["lang"]['The rack model.'] = 'La Rack - Malli.';

$GLOBALS["lang"]['The rack serial.'] = 'La rack sarjakuva.';

$GLOBALS["lang"]['The rack series.'] = 'La rack sarjakuva.';

$GLOBALS["lang"]['The rack this device is located in. Links to <code>racks.id</code>.'] = 'Tiu aparato sitas en Ligiloj al <code>racks.id</code>.';

$GLOBALS["lang"]['The recommended process of addressing and fixing identified security vulnerabilities. This typically involves applying patches, updates, or other measures to eliminate the risk posed by the vulnerabilities.'] = 'La remomendita procezo de traktado kaj fiksado identigis sekurrecvulsilojn. Tio tipe implicas apliki pecetojn, ';

$GLOBALS["lang"]['The regular domain notation of your directory. Eg - <code>open-audit.lan</code>.'] = 'Laregul domajna notacio de via adresaro. Esimerkiksi. <code>open-audit.lan</code>.';

$GLOBALS["lang"]['The requested properties should be in a comma-separated list. Properties should be fully qualified - ie, system.hostname (not just hostname).'] = 'La petite trajtoj devus esti en kom- separita lista. Trajtoj devus esti plene kvalifikitaj - teir, sistemo.';

$GLOBALS["lang"]['The result of the command.'] = 'La rezulto de la kommundo.';

$GLOBALS["lang"]['The room the rack is located in.'] = 'La Rundambro kiun la rako sitas.';

$GLOBALS["lang"]['The row the rack is located in.'] = 'La vico kiun la rako sitas fr.';

$GLOBALS["lang"]['The search for group on the LDAP server failed. Check the LDAP server logs. Have you created these groups (for roles and orgs) on the LDAP server and assigned LDAP users to them?'] = 'La ser orientalada por grupo sur la LDAP- servilo malsukcesis. Kontrou la LDAP- servilregistrojn. imitau vi kreis tiujn grupojn (por roloj kaj orkoj) sur la LDAP- servilo kaj asignis LDAP- uzantojn al ili?';

$GLOBALS["lang"]['The secret key used in conjunction with your AWS EC2 API key.'] = 'La sekreta calosilo uzita lige kun via AWS EC2 API Galosilo.';

$GLOBALS["lang"]['The software end-of-life date.'] = 'La programming fino de viva dato.';

$GLOBALS["lang"]['The software end-of-service-life date.'] = 'La programming fino de servo viva dato.';

$GLOBALS["lang"]['The specific database column from the specified database table.'] = 'La specifa datenarkolono de la prezigita base de donnécomo.';

$GLOBALS["lang"]['The specific database table.'] = 'La specifa tablo de datumbazo.';

$GLOBALS["lang"]['The standard Nmap timing options. Previously set at T4 (aggressive).'] = 'La Norma Nmap tempigas opciojn. Anta.e metita T4 (agresa).';

$GLOBALS["lang"]['The standard Nmap timing options. We usually use -T4 (Aggressive) as this is recommended for a decent broadband or ethernet connection.'] = 'La Norma Nmap tempigas opciojn. Ni kutime uzas - T4 (Agres) kiam tio estas rekomendita por deka larεbendo a limitált eteroligo.';

$GLOBALS["lang"]['The status of this integration'] = 'La statuo de tiu integriêo';

$GLOBALS["lang"]['The status of this queued item.'] = 'La stato de tiu queuita objektto.';

$GLOBALS["lang"]['The steps below outline the process.'] = 'La ť атитов sub skizas la procezon.';

$GLOBALS["lang"]['The target IP this log entry referers to (if any).'] = 'La celo IP kiun tiu tagalo enmetas al (se entute).';

$GLOBALS["lang"]['The target computer to audit. \".\" means localhost.'] = 'La celkomputio al revizio.';

$GLOBALS["lang"]['The template for the link to be generated per result line.'] = 'La griablono por la ligo por esti generita per rezulta linio.';

$GLOBALS["lang"]['The text for the bottom of the chart in a line chart (only).'] = 'La teksto por la fundo de la diotra en liniodiagramo (nur).';

$GLOBALS["lang"]['The text that is displayed.'] = 'La teksto kiu estas montrita.';

$GLOBALS["lang"]['The timestamp after which, this task should run. For example, run a task after the 1st June 2017 at 10am, set it to <code>2017-06-01 09:59:00</code>. This value should be zero padded (ie, 09, not 9). This value defaults to <code>2000-01-01 00:00:00</code> which means by default, a scheduled task will run at next scheduled execution time.'] = 'La tempostapo post kiu, tiu tapo devus kuri. Ekzample, prizorgas taspon post la unua junio 2017 10.00, metis <code>2017-06-01 09:59:00</code>. Tiu Valo devus esti nul remburita (mi, 09, ne 9). Tiu valoro deva <code>2000-01-01 00:00:00</code> Ciu signfas dea.lte, planita tako kuros Venonta planita ekzekuttemo.';

$GLOBALS["lang"]['The top 10, 100 or 1000 (or none) TCP ports commonly in use according to Nmap.'] = 'La supraj 10, 100 a. 1000 (a';

$GLOBALS["lang"]['The top 10, 100 or 1000 (or none) UDP ports commonly in use according to Nmap.'] = 'La supraj 10, 100 a. 1000 (a';

$GLOBALS["lang"]['The total BTU output by this rack.'] = 'La totala BTU- produkta.o de tiu rako.';

$GLOBALS["lang"]['The type of device.'] = 'La tipo de aparato.';

$GLOBALS["lang"]['The type of organisation.'] = 'La speco de organiso.';

$GLOBALS["lang"]['The type of rack (compute, power, network, etc).'] = 'La speco de rako (kompato, regico, reto, ktp).';

$GLOBALS["lang"]['The type of task to run. One of: baseline, benchmark, cloud discovery, discovery, integration, report, query.'] = 'La speco de tako por kuri. Unu el: bazlinio, kompranormo, nubtrova.o, eltrova.o, integri.o, raporto.';

$GLOBALS["lang"]['The type of the integration (usually named after the external system).'] = 'La speco de la integri.';

$GLOBALS["lang"]['The unfiltered state means that a port is accessible, but Nmap is unable to determine whether it is open or closed. Only the ACK scan, which is used to map firewall rulesets, classifies ports into this state. Scanning unfiltered ports with other scan types such as Window scan, SYN scan, or FIN scan, may help resolve whether the port is open.'] = 'La neperorita gritato signfas ke hasno estas alirebla, sed Nmap estas nekapabla determi -Estas malferma katlus fermita. Nur la ACK- skanado, kiu kutimas mapi fajromurajn reguletojn, klasifikas hasnojn en tiun quirestaton. Scanante nefilitajn hasnojn kun alfaj malabundaj tipoj kiel ekzample Fenestra skanado, SYN- skanado, katlus FIN- skanado, povas helpi solvi U la havenno estas malferma.';

$GLOBALS["lang"]['The unique identifier of this server.'] = 'La unika identificilo de tiu servilo.';

$GLOBALS["lang"]['The user account this collector uses. Links to <code>users.id</code>.'] = 'La uzanto responsecas pri tiu kolektanto uzas. Ligiloj al <code>users.id</code>.';

$GLOBALS["lang"]['The user in Active Directory / OpenLDAP must be a direct member of the required Open-AudIT groups for Roles and Orgs. A member of a group that is a member another group that is a member of the Open-AudIT group will not work.'] = 'La uzanto en Aktiva Adresaro / OpenLDAP murros et rekta membro de la postulataj Open- Audit- grupoj por Roloj kaj Orgs. Membro de grupo kiu estas membro teiste nimedega grupo kiu estas membro de la Open- Audit- grupo ne funkcias.';

$GLOBALS["lang"]['The user is in LDAP and their credentials are valid, but is not in any of the Open-AudIT LDAP groups for Orgs.'] = 'La uzanto estas en LDAP kaj iliaj akredita. oj estas validaj, sed ne estas en iuj da la Open- Audit LDAP- grupoj por Orgs.';

$GLOBALS["lang"]['The user is in LDAP and their credentials are valid, but is not in any of the Open-AudIT LDAP groups for Roles.'] = 'La uzanto estas en LDAP kaj iliaj akredita. Oj estas validaj, sed ne estas en iuj da la Open- Audit LDAP- grupoj por Roloj.';

$GLOBALS["lang"]['The user is in LDAP and their credentials are valid, but is not in any of the required Open-AudIT LDAP groups.'] = 'La uzanto estas en LDAP kaj iliaj akredita. Oj estas validaj, sed ne estas en iuj da la postulataj Open- Audit LDAP grupoj.';

$GLOBALS["lang"]['The user is in the LDAP group that matches this Org.'] = 'La uzanto estas en la LDAP- grupo kiu egalas tiun Org.';

$GLOBALS["lang"]['The user is in the LDAP group that matches this Role.'] = 'La uzanto estas en la LDAP- grupo kiu egalas tiun rolon.';

$GLOBALS["lang"]['The user is not in the LDAP group that matches this Org.'] = 'La uzanto ne estas en la LDAP- grupo kiu egalas tiun Org.';

$GLOBALS["lang"]['The user is not in the LDAP group that matches this Role.'] = 'La uzanto ne estas en la LDAP- grupo kiu egalas tiun rolon.';

$GLOBALS["lang"]['The user that was specified exists in LDAP, but Open-AudIT is not configured to consume the LDAP groups for roles and that user does not exist within Open-AudIT. Either select <i>Use LDAP for Roles</i> on the Open-AudIT LDAP Server screen or create this user within Open-AudIT and assign roles and orgs.'] = 'La uzanto kiu estis prezigita eksistas en LDAP, sed Open- Audit ne estas formita por konsumi la LDAP- grupojn por roloj kaj tiu uzanto ne ekzistas ene de Open- Audit. Kaphlususelekti <i>Uzu LDAP por Roloj</i> Sur la Open AudIT LDAP Servilkrano epäilty krei tien uzanton ene de Open- AudIT kaj alisignas rolojn kaj orgs.';

$GLOBALS["lang"]['The username (if not using the user running the script).'] = 'La uzantinomo (se ne uzante la uzanton prizorgantan la kézműves).';

$GLOBALS["lang"]['The username used to access the external system.'] = 'La uzantinomo kutimis aliri la eksteran sistemon.';

$GLOBALS["lang"]['The users details were not retrieved from LDAP. Check the LDAP server logs.'] = 'La uzantoj ne estis prenitaj de LDAP. Kontrou la LDAP- servilregistrojn.';

$GLOBALS["lang"]['The users details were retrieved from LDAP.'] = 'La uzantoj estis prenitaj de LDAP.';

$GLOBALS["lang"]['The users email address.'] = 'La uzantoj retpo explota adreso.';

$GLOBALS["lang"]['The usual hours of operation at this site.'] = 'La kuvamaj horoj de opéracio en .i tiu retejo.';

$GLOBALS["lang"]['The value assigned to the item.'] = 'La Valoro asignita al la objekto.';

$GLOBALS["lang"]['The value that is stored for this particular item.'] = 'La Valoro kiu estas stokita por tiu speciala objectko.';

$GLOBALS["lang"]['The vendor name as per CPE entries.'] = 'La vendistnomo kiel par CPE kontribooj.';

$GLOBALS["lang"]['The vendor taken from the CPE.'] = 'La Vendisto prenita de la CPE.';

$GLOBALS["lang"]['The web directory on the host that Open-AudIT is installed (requires a trailing slash).'] = 'La reto adresaro sur la gastiganto kiu Open- Audit estas secretita (postulas migrovojon).';

$GLOBALS["lang"]['The widget at position '] = 'La bara.o pozicio. ';

$GLOBALS["lang"]['The width of this device.'] = 'La larεo de tiu.';

$GLOBALS["lang"]['Their OrgIDs and their descendants'] = 'Iliaj OrgIDoj kaj iliaj posteuloj';

$GLOBALS["lang"]['Their OrgIDs only'] = 'La orgIDoj nur';

$GLOBALS["lang"]['Their OrgIDs, ascendants and descendants'] = 'Iliaj OrgIDoj, aspintoj kaj posteuloj';

$GLOBALS["lang"]['Then'] = 'Tiam la';

$GLOBALS["lang"]['Then create a new Auth method in Open-AudIT by going to menu -> Admin -> Auth Methods -> Create Auth. Provide a name and set the <i>type</i> to Entra.'] = 'Tiam krei novan Auth- metodon en Open- Audit irante al menuo - confar Admin - título Auth Metodoj - título Krei Auth. Prénu nomon kaj metis la <i>tipo</i> Al Entrar.';

$GLOBALS["lang"]['Then you can use Open-AudIT (unsupported) to receive audit data directly from the clients. Discovery <strong>will fail</strong>, but if youre not using Discovery (the main feature Open-AudIT was designed around), you can still get device data. You would need to run the audit scripts directly on the clients using cron, or use the Windows Agent feature (Enterprise only).'] = 'Tiam vi povas uzi Open- Audit (nepruvita) por rizvi reviziodatenojn rekte de la klientoj. Décuverte <strong>malsukcesos</strong>, sed se vi ne uzas Discovery (la Vi devus prizorgi la reviziomanuskriptojn rekte sur la klientoj uzantaj Kronon, a. uzi la Windows Agent trajton (Enterprizo nur).';

$GLOBALS["lang"]['There is a button to export to JSON. This will display only the device table of attributes. To export the device with all associated component tables, view the device details, then add'] = 'Eksistas butono por eksporti al JSON. Tio Montros nur la aparato tablon de atentioj. Por eksporti la aparaton kun ';

$GLOBALS["lang"]['There is absolutely no need to manually edit each individual device.'] = 'Eksistas absoluto neniu bezono mane redakki Čiun ininfuan aparaton.';

$GLOBALS["lang"]['There is no need to do anything if you are running Open-AudIT on a Linux server.<br><br>Windows clients are just fine and require no special actions, however.... to enable this feature the audit script must be run locally on the target Windows system. It cannot be run remotely as we do with WMI calls when running the audit script on one Windows machine, while targeting a second Windows machine. To do this we need to copy the audit script to the target Windows machine and then run it. Unfortunately the service account that Apache runs under is the Local System account. This account has no access to remote (network based) resources. To work around this issue the service must be run under another account. It is easiest to just use the local Administrator account, but you can try any account you like as long as it has the required privileges. The Local System account has as much local access as the local Administrator account.'] = 'Eksistas neniu bezono farenda.o io ajn se vi prizorgas Open- Audit sur Linukso- servilo.<br/><br/>Fenestroj estas justaj kaj postulas neniujn specialajn agojn, aliflanke... rajtigi tiun trajton la reviziomanuskripto provises et prizorgita loke sur la cel Windows- sistemon. Por farition ni murs kopii la reviziomanuskripton al la celo Windows- ma agotadono kaj tiam prizorgi εin. Beda auditrinde la servikonto ke apa planekuroj sub estas la Local System- konto. Tiu raporto havas neniun aliron al malpreksimaj (reto bazita) resursoj. Por labouri... irka epäilty tiu temo la servo brunces esti prizorgita sublison. Estas plej facile uzi la lokan Administrateur konton, sed vi povas providation ajnan raporton vi kiel lowe kiel εi havas la postulatajn saltjn. La Loka Sistemo- konto havas tien multe da loka aliro kiel la loka Administramento - koto.';

$GLOBALS["lang"]['These are only examples. You may need to adjust these attributes to suit your particular LDAP.'] = 'Tiuj estas nur ekzemoj. LDAP est un programme d \'éducation et de formation pour les jeunes.';

$GLOBALS["lang"]['These parameters enable you to audit only what is useful and relevant to you, saving processing time and allowing you to discover your network in an orderly manner.'] = 'Tiuj parametroj ebligas al vi revizii nur kio estas utila kaj inspecfa al vi, шparante pretigtempon kaj permesante al vi malkovri vin reton en bonorda maniero.';

$GLOBALS["lang"]['Thing'] = 'Aféro';

$GLOBALS["lang"]['Think of mail.domain1.com and mail.domain2.com - same hostname.'] = 'Pensu pri poéndoseto. domaine1.com kaj po diversato.domain2.com - sama mastronosomo.';

$GLOBALS["lang"]['Third'] = 'Triono';

$GLOBALS["lang"]['This CVE will be retrieved and overwrite the existing CVE if it exists.'] = 'Tiu CVE estos prenita kaj écrase la ekzistanta CVE se liukoinen eksistas.';

$GLOBALS["lang"]['This Org has no AD group specified. Check the roles details within Open-AudIT.'] = 'Tiu Org havas neniun AD- gruppon presizigitaani. Kontrou la rolojn detalojn ene de Open- Audit.';

$GLOBALS["lang"]['This Org has no AD group specified. Check the roles details within Open-AudIT. <span class=\"confluence-link\">Have you created these groups (for orgs) on the LDAP server and assigned LDAP users to them?'] = 'Tiu Org havas neniun AD- gruppon presizigitaani. Kontrou la rolojn detalojn ene de Open- Audit. <span class=\'\"confluence-link\"\'>Per orgoj sur la LDAP- servilo kaj asignis LDAP- uzantojn al ili?</span>';

$GLOBALS["lang"]['This Role has no AD group specified. Check the roles details within Open-AudIT.'] = 'Tiu rolo havas neniun AD- gruppon presizigitaani. Kontrou la rolojn detalojn ene de Open- Audit.';

$GLOBALS["lang"]['This attribute is stored as a JSON object. It is the list of all collections and contains the collection name along with <code>c</code>, <code>r</code>, <code>u</code> and,or <code>d</code> which represent create, read, update and delete. These are the actions a user can perform on items from that particular collection.'] = 'Tiu attent to estas stokita kiel JSON- objekto. Estas la lista de... <code>c</code>, <code>r</code>, <code>u</code> a <code>d</code> Kiuj reprezentas krei, legu, εisdatigi kaj forigi. Tiuj estas la agoj uzanto povas rezulti sur eroj de tiu speciala kolekto.';

$GLOBALS["lang"]['This can be either a varchar (a text field), a list (a list of values that can be selected) or a date.'] = 'Tio povas esti a spective varchar (tekskampo), lista (listo de valoroj kiuj povas et selektititaj) katluse dato.';

$GLOBALS["lang"]['This code relys on the great work done by the'] = 'Tiu kodo adpendenteas de la gra laboro farita per la';

$GLOBALS["lang"]['This collectors universally unique identifier.'] = 'Tiuj kuluttajantoj univerzale unika identilo.';

$GLOBALS["lang"]['This column is required by'] = 'Tiu kolono estas postulita';

$GLOBALS["lang"]['This column is required by '] = 'Tiu kolono estas postulita ';

$GLOBALS["lang"]['This description is auto-populated and should ideally be left as-is.'] = 'Tiu priskribo estas a stidetto lo innovadorita kaj devus idéale esti laseta kiel- estas.';

$GLOBALS["lang"]['This endpoint enables you to add the connections that are part of your network infrastructure, it allows you to customize a variety of attributes, specify where this connection is located and the organization that it belongs.'] = 'Tiu finpunkto rajtigas vin aldoni la ligojn kiuj estas parto de via retrastrukturo, εi permesas al vi adapti gamon da atigantoj, prezigi kie tiu ligo situas kaj la organiso ke εi apartenas.';

$GLOBALS["lang"]['This error indicates that SMB1 has been disabled or removed from the target machine. This is normal for modern version of Windows and you will only see this message when the SMB2 connection attempt has failed. If the SMB2 connection fails, we attempt SMB1 to enable discovery on old versions of Windows. If the target Windows machine <i>is</i> running an old version of Windows, it is likely your credentials have failed. In that case, see'] = 'Tiu eraro indikas ke SBB1 estes handikapita epäilty forigita de la celma apretino. Tio estas norma por moderna versio de Fenestroj kaj vi nur vidos tiun mesa graduateon kiam la SMB2- ligprovo malsukcesis. Se la SMB2-ligo malsukcesas, ni provas SBB1 por ebligi eltrova Se la celo de Windows <i>eszta</i> Sed vi havas malnovan version de Vindozo, verajne viaj akredita. En tia kazo, vidu';

$GLOBALS["lang"]['This error indicates that not enough virtual memory or paging file quota is available to complete the specified operation. You should try again later.'] = 'Tiu eraro indikas ke ne sufi previstoe virtuala memoro epäilty pa innovadora dosierkvoto estas hasbla kompletigi la prezigitan oopperacion. Vi murtaa dévove poste.';

$GLOBALS["lang"]['This error indicates the credentials used either are incorrect, do not exist or do not have sufficient privileges to log on remotely to the target Windows machine. You should verify the credentials and check the below.'] = 'Tiu eraro indikas ke la akredita... oj uzis a Vi devus kontroli la akredita';

$GLOBALS["lang"]['This example creates a list of all Modules marked as'] = 'Tiu ekzemplo kreas Listan de...';

$GLOBALS["lang"]['This example creates a list of devices and the open Ports, Protocols, and Programs found by the NMAP scan.'] = 'Tiu ekzemplo kreas Listn de aparatoj kaj la malfermaj Havenoj, Protokolaj, kaj Progmoj trovitaj per la NMAP-skanado.';

$GLOBALS["lang"]['This example creates a list of devices where the Function or Description fields are blank OR the Purchase Date is the default.'] = 'Tiu ekzemplo kreas Listn de aparatoj kie la Funkcio a Kaptlus Preskribo krip j estas brilaj VôI la Avisioneta.dato estas la dea deva skepto.';

$GLOBALS["lang"]['This example query retrieves a list of devices OVER 3 years old. The query uses today'] = 'Tiu ekzemplo kysely prenas listan de aparatoj sur 3 jerga a ritmoaj. La request hodia guzas';

$GLOBALS["lang"]['This example uses'] = 'Tiu ekzemplo uzas';

$GLOBALS["lang"]['This feature requires a Professional or an Enterprise license.'] = 'Tiu trajto postulas Profesian a.';

$GLOBALS["lang"]['This feature, because it has the ability to affect target devices more than usual must be manually enabled. To enable this feature, change the configuration item feature_executables to <i>yes</i>.'] = 'Tiu trajto, Por ebligi tiun trajton, рашива... <i>Jessus.</i>.';

$GLOBALS["lang"]['This file tells Linux to poll the application to determine if there are any scheduled tasks that should be run.'] = 'Tiu dosiero rakontas al Linukso sondi la pettsribon por determini Eksistas juj planitaj takoj kiuj devus esti prizorgitaj.';

$GLOBALS["lang"]['This form provides a simple way to get started discovering the devices on your network. For more (much more) detailed options, you can individually create'] = 'Tiu formo disponigas simplan manieron por domenci malkovri la aparatojn sur via reto. Por pli da (multe pli) detalaj opcioj, vi povas injalue krei';

$GLOBALS["lang"]['This is also the way that PAExec works.'] = 'Tio Anka';

$GLOBALS["lang"]['This is an optional configuration option, enabled by setting discovery_use_org_id_match in the global configuration.'] = 'Tio estas la auditvola konfiguracio opcio, ebligita metante Discovery _ use _ org _ id _ -mat previsoon en la tutmonda konfiguracio.';

$GLOBALS["lang"]['This is generally the primary column, unless otherwise configured. NOTE: When type = traffic, this represents the secondary text.'] = 'Tio estas εenerale la primara kolono, se alie formis. Se tipo = trafiko, tio reprezentas la sekundaran tekston.';

$GLOBALS["lang"]['This is likely due to MySQL time being off. MySQL typically uses the host devices time. You can check this by'] = 'Tio ver apretajne рuldi MySQL pointe utilogas la mastro- aparaton tempon. Vi povas kontroli';

$GLOBALS["lang"]['This is settable by users and so even though it should be globally unique, there is certainly no guarantee of this.'] = 'Tio estas metita fare de uzantoj kaj tien e previsto se εi devus esti tutmonde unika, eksistas certe neniu garantio detio.';

$GLOBALS["lang"]['This is the directory where we store any attachments to devices.'] = 'Tio estas la adresaro kie ni stokas jujn ajn aldonojn al aparatoj.';

$GLOBALS["lang"]['This is to be used as the first point of call when troubleshooting Open-AudIT issues. You can click the Export button on the top right to retrieve this as a JSON file (to be added to the support ticket / email.'] = 'Tio estas uzota kiel la unua punkto de voko kiam liquidenas Open- Audit- temojn. Vi povas klaki la Eksportbuton sur la supra rajto preniition kiel JSON- dosiero (por esti aldonita al la helpbileto / retpo chetto).';

$GLOBALS["lang"]['This issue is under investigation.'] = 'Tiu temo estas sub enketo.';

$GLOBALS["lang"]['This item must match the value of the attribute selected or contains the ID of the query to be used.'] = 'Tiu objekto murtaa egali la valoron de la atantia to selektita epäilty enhavas la ID de la atendo por esti uzita.';

$GLOBALS["lang"]['This item must match the value of the attribute selected.'] = 'Tiu objekto murtaa egali la Valon de la atentia to selektita.';

$GLOBALS["lang"]['This license expires on'] = 'Alternativai tiiu permesilo fini fluida sur';

$GLOBALS["lang"]['This security permission can be modified using the Component Services administrative tool.'] = 'Tiu sekurecpermeso povas esti modifita uzante la Component Services administrateur ilo.';

$GLOBALS["lang"]['This should be commented out after troubleshooting as debug mode will generate a lot of logs on the disk for no benefit.'] = 'Tio devus esti komentita post perturbado kiam debugre fusionimo generos multajn tagalojn en la disco por neniu utio.';

$GLOBALS["lang"]['This should be globally unique, but I have seen instances where it is not.'] = 'Tio devus esti tutmonde unika, sed mi vidis kazojn kie εi ne estas.';

$GLOBALS["lang"]['This should be set to either 1 or the height of the rack.'] = 'Tio devus esti metita al a';

$GLOBALS["lang"]['This should be the fully qualified field name in the database. Currently columns from the system, fields and credentials tables are supported. EG: system.nmis_role.'] = 'Tio devus esti la tute kvalifikita kampa nomo en la datumbazo. Nuntempe kolonoj de la simemo, kamopj kaj akredita. Oj estas apogitaj. EG: sistemo.nmis _ role.';

$GLOBALS["lang"]['This state is used when Nmap is unable to determine whether a port is closed or filtered. It is only used for the IP ID idle scan.'] = 'Tiu шgestas uzita kiam Nmap estas nekapabla determi Ei estas fermita a Kahtlusfilita. Estas nur uzita por la IP ID joutokäynti- skanado.';

$GLOBALS["lang"]['This will auto-populate.'] = '- Qué?';

$GLOBALS["lang"]['This will considerably slow the discovery scan.'] = 'Tio konsidrinde malapidigos la malkovron.';

$GLOBALS["lang"]['This will delete the current rows in the'] = 'Tio forigos la nunajn vicojn en la';

$GLOBALS["lang"]['This will permanently DELETE this license.'] = ' imitai tiu permesiloosi - Oui.';

$GLOBALS["lang"]['This will show you the Bulk Edit form. Any attributes you set on this form will be applied to all selected devices. You can set multiple attributes at once.'] = 'Tio montros al vi la Bulk Editer- formularon. Il s \'agit de l\' ensemble de l \'ensemble de l\' Union européenne.';

$GLOBALS["lang"]['Thursday'] = 'Káposztafélék';

$GLOBALS["lang"]['time_caption'] = 'Tempo pealdis';

$GLOBALS["lang"]['Time Caption'] = 'Tempo pealdis';

$GLOBALS["lang"]['time_daylight'] = 'La tempo de la tempo';

$GLOBALS["lang"]['Time Daylight'] = 'La tempo de la tempo';

$GLOBALS["lang"]['Time to Execute'] = 'La tempo la';

$GLOBALS["lang"]['timeout'] = 'Tempo de tempo';

$GLOBALS["lang"]['Timeout'] = 'Tempo de tempo';

$GLOBALS["lang"]['Timeout Per Target (Seconds)'] = 'Aegumine sihtmärgi kohta';

$GLOBALS["lang"]['Timeout per Target. Wait for X seconds for a target response.'] = 'Tempo por Celo. Atendu X sekundojn por celo.';

$GLOBALS["lang"]['Timesatamp'] = 'Prémipitáció';

$GLOBALS["lang"]['Timestamp'] = 'La tempo';

$GLOBALS["lang"]['timing'] = 'Timante';

$GLOBALS["lang"]['Timing'] = 'Timante';

$GLOBALS["lang"]['Timor-Leste'] = 'Ilä- Timor';

$GLOBALS["lang"]['Title'] = 'Titolo';

$GLOBALS["lang"]['To a new file named .env (in the same directory). Now edit that new file and uncomment (remove the #) the line below (line 17)'] = 'Al nova dosiero nomita .env (en la sama adresaro). Nun redaktu tiin novan dosieron kaj nerespekton (ecomedda la numero) la linion malsupre (linio 17)';

$GLOBALS["lang"]['To actually execute the query, append a /execute, thus /open-audit/index.php/queries/{$id}/execute.'] = 'Por fakte efektivigi la request, apendigas / ececute, tien / malfermi- audit / index. php / queries / {id} / eksecute.';

$GLOBALS["lang"]['To audit a machine, you must have credentials and administrator level access.'] = 'Por revizii ma apretinon, vi havenda.o akredita.ojn kaj administrateur nivelalir.';

$GLOBALS["lang"]['To audit a remote machine on an Active Directory domain, your supplied user (or if none provided, the user running the script) must be a member of the target machines Administrators group (or subgroup).'] = 'Por revizii malpreksiman ma dévolainon sur Aktiva Adresardomajno, via providozita uzanto (epäilty se neniu provézis, la uzanto prizorganta la manikripton) brunces esti membro de la celma explutainoj- administratornto- grupo (kahtlus subgrupo).';

$GLOBALS["lang"]['To audit a remote machine that is not in a domain, you must use the Administrator account (not <i>an</i> admin account, <i>the</i> Administrator account) on the target PC. #1 and #2'] = 'Revizii maltraksiman ma apretinon kiu ne estas en domajno, vi bus uzi la Administrateur- konton (ne ne en domajno, vi brunces uzi la Administratorn konton). <i>Les</i> Administrateur Konto <i>La</i> Administration pour répondreecas pri la celo PC. Numéro 1 kaj numéro 2';

$GLOBALS["lang"]['To audit localhost, any supplied credentials are disregarded and the connection is made using the details of the user running the script.'] = 'Por revizii lokanhost, ';

$GLOBALS["lang"]['To compare software we check the name and version. Because version numbers are not all standardised in format, when we receive an audit result we create a new attribute called software_padded which we store in the database along with the rest of the software details for each package. For this reason, baselines using software policies will not work when run against a device that has not been audited by 1.10 (at least). Software policies can test against the version being <i>equal to</i>, <i>greater than</i> or <i>equal to or greater than</i>.'] = 'Por kompari softvaron ni controlas la nomon kaj versioon. Identificar versio nombroj ne estas Tial, bazlinioj uzantaj softvarpolitikojn ne funkcias dum kuro kontra epäilty aparato kiu ne estis reviziita per 1.10 (almena kaptlus). Softvarpolitikoj povas testi contra epäilty la versio estanta <i>Égala al egala</i>, <i>unit description in lists</i> a <i>Égala al a pli gra ol</i>.';

$GLOBALS["lang"]['To create a new entry click the Create button in the upper right hand corner.'] = 'Por krei novan eniron klakas la Krean buton en la supra dekstra angulo.';

$GLOBALS["lang"]['To create a resource, you should POST the required data.'] = 'Por krei rimedon, vi devus fari la necessajn datumojn.';

$GLOBALS["lang"]['To enable a remote machine (Vista or above) to be audited that is not on a domain, by an account in the Administrators group, other than the actual Administrator account see the below section on UAC.'] = 'Por ebligi maltraksiman ma divonainon (Vista a guest supre) esti reviziitatio ne estas en domajno, per raporto en la administrationntoj grupo, krom la fakta administrationtokonto vidas la subsekcion sur UAC.';

$GLOBALS["lang"]['To enable this, create a new Auth item by going to menu -> Admin -> Auth -> Create Auth Method.'] = 'Por ebligation, krei novan Auth- objekton per irado al menuo - Admin - confizanza Auth - titulado Krei Auth Métodon.';

$GLOBALS["lang"]['To execute the Windows powershell script, open a command prompt as Administrator and use the following command'] = 'Por efektivigi la Fenestrojn, malfermi komand quistilon kiel administrationnto kaj uzi la sekvan kommundon';

$GLOBALS["lang"]['To execute the audit script, open a terminal and use the following command'] = 'Por efektivigi la reviziomanuskripton, malfermi terminalon kaj uzi la sekvan kommundon';

$GLOBALS["lang"]['To filter by a property value, use the property name. Operators that should precede the value are'] = 'Por filti per domvaloro, uzi la domnomon. Operatoroj kiuj devus anta.i la valoron estas';

$GLOBALS["lang"]['To install Nmap on Windows, visit the Nmap page at'] = 'Por instali Nmap sur Fenestroj, visiti la Nmap- pacienteon Tšehi';

$GLOBALS["lang"]['To make the change, just follow the steps below.'] = 'Por fori la шенуn ненний, nur sekku la pa apretojn malsupre.';

$GLOBALS["lang"]['To retrieve the Tenant ID. Open the Azure portal click on Azure Active Directory, Properties and the Tenant ID is displayed as your Directory ID - do not blame me for the name mismatch, that is how Microsoft roll.'] = 'Azonosítsa Akiri la Dekant. Malfermu la Azure- portalklakon sur Azure Aktiva Adresaro, Trajtoj kaj la Tenant ID estas elmontrita kiel via Adresaro ID - ne kulpigas min por la nomo misagordo, kiu estas kiel Microsoft- rulo.';

$GLOBALS["lang"]['To retrieve your key, log in to the AWS Console and select your username, then My Security Credentials.'] = 'Por preni vian grilosilon, logi enen al AWS Console kaj selekti vian uzantinomon, tiam Mi Seguridad Credenciales.';

$GLOBALS["lang"]['To return a specific component item.'] = 'Reiri al Specifa komponanto.';

$GLOBALS["lang"]['To return all items for a compnent type for a specific device.'] = 'Por resendi... iujn erojn por kompentspeco por specifa aparato.';

$GLOBALS["lang"]['To return all items for a component type. If you wanted all software you would use'] = 'Por resendi... Se vi deziras Roveriujn programmarojn vi uzus';

$GLOBALS["lang"]['To reverse sort, insert a minus, thus'] = 'Por inversigi specon, énigi minon, tyyl';

$GLOBALS["lang"]['To run the test script on the target Windows PC'] = 'Por prizorgi la testsartikripton sur la celo Windows PC';

$GLOBALS["lang"]['To select devices to be integrated, we use nmis_manage = y, but you might like (for example) type = router. You can also use a Group or Query if you prefer something more complex.'] = 'Por selekki aparatojn por esti integrita, ni uzas nmis _ management = y, sed vi eble choratas (ekzample) tipon = itineraton. C \'est vrai. Kysely se vi preferas ion pli kompleksan.';

$GLOBALS["lang"]['To sort by a database column, use'] = 'Por ordigi por datenarkolono, uzo';

$GLOBALS["lang"]['To use this Enterprise feature, you first need to create your user in Open-AudIT as per usual. Assigning a password is not necessary. You do have to assign Roles and Orgs. The username in Open-AudIT should match the Entra <i>preferred username</i> attribute. There is no need for a Full Name or Email - these will be populated from Entra. If you do not know your users <i>preferred username</i>, fear not. You can create the new Auth Method in Open-AudIT and the Enterprise Application in Entra and when a user attempts to sign-on to Open-AudIT without a pre-existing user, check the logs and you will see their <i>preferred username</i> logged for your convienence.'] = 'Por uzi tiun Enterprise trajton, vi unue murtaa krei vian uzanton en Open- Audit kiel per kutima. Necesas Pasvorton. La uzantinomo en Open- Audit devus egali la Entra <i>Préfiereasa uzantnomo</i> Tisztelet. Eksistas neniu bezono de plena nomo aprego chetto - tiaj estos lo fusionitaj de Entra. L \'Union européenne <i>Préfiereasa uzantnomo</i>Netimu. Entra kaj kiam uzanto provas subskribi al Open- AudIT sen sen anta advidekzista uzanto kontroli la tagalojn kaj vidos lian <i>Préfiereasa uzantnomo</i> Kaj vi venis al via Batalo.';

$GLOBALS["lang"]['To use this Enterprise feature, you first need to create your user in Open-AudIT as per usual. Assigning a password is not necessary. You do have to assign Roles and Orgs. The username in Open-AudIT should match the OKTA <i>name</i> attribute. There is no need for a Full Name or Email - these will be populated from OKTA. If you do not know your users <i>name<i>, fear not. You can create the new Auth Menthod in Open-AudIT and the Application in OKTA and when a user attempts to sign-on to Open-AudIT without a pre-existing user, check the logs and you will see their <i>name<i> logged for your convienence.<br></p><p>Then create a new Auth method in Open-AudIT by going to menu -> Admin -> Auth Methods -> Create Auth. Provide a name and set the <i>type</i> to Okta.'] = 'Por uzi tiun Enterprise trajton, vi unue murtaa krei vian uzanton en Open- Audit kiel per kutima. Necesas Pasvorton. La uzantinomo en Open- Audit devus egali la OKTA <i>nomo</i> Tisztelet. Eksistas neniu bezono de plena nomo a Se vi ne konas viajn uzantojn <i>nomo<i>Netimu. Vio povas krei la novan Auth menthod en Open- Audit kaj la Aplikiεon en OKTA kaj kiam uzanto provas subskribi al Open- Audit sen anta... eksista uzanto kontroli la tagalojn kaj vidos lian <i>nomo<i> Kaj vi venis al via Batalo.<br/><p>Tiam krei novan Auth- metodon en Open- Audit irante al menuo - confar Admin - título Auth Metodoj - título Krei Auth. Prénu nomon kaj metis la <i>tipo</i> Oui.</p></i></i></i></i>';

$GLOBALS["lang"]['To use this feature you must enable the configuration items match_mac (for AWS) and match_hostname (for Azure). This will be done automatically the first time a cloud discovery is executed. For more on Open-AudITs matching rules see HERE: Matching Devices'] = 'Por uzi Tio estas farita a limittomate la unuan fojon nubotrova.o estas efektivigita. Por pli sur Open- Audit- egalaj reguloj vidas clari seotud: Sobivad seadmed';

$GLOBALS["lang"]['To view the details of a query, the standard URL structure of /open-audit/index.php/queries/{$id} should be used.'] = 'Por rigardi la detalojn de question, la norma URL- strukturo de / open-audit / index. php / queries / {\ displaistile {1} devus esti uzitaj.';

$GLOBALS["lang"]['Togo'] = 'Togo';

$GLOBALS["lang"]['Tokelau'] = 'Tokélaou Nom de la ville (facultatif, sans doute pas besoin de traduction)';

$GLOBALS["lang"]['Tonga'] = 'Tongo';

$GLOBALS["lang"]['toolbar_style'] = 'Effillo de barra de herramientas';

$GLOBALS["lang"]['Toolbar Style'] = 'Effillo de barra de herramientas';

$GLOBALS["lang"]['Top Nmap TCP Ports'] = 'Top Nmap TCP Havenoj';

$GLOBALS["lang"]['Top Nmap TCP Ports. The top 10, 100, 1000 ports to scan as per Nmaps &quot;top ports&quot; options.'] = 'Top Nmap TCP Havenoj. La supraj 10, 100, 1000 hasnoj por skani kiel par Nmaps "pintaj hasnoj- opcioj.';

$GLOBALS["lang"]['Top Nmap UDP Ports'] = 'Ülemine Nmapin UDP- portti';

$GLOBALS["lang"]['Top Nmap UDP Ports. The top 10, 100, 1000 ports to scan as per Nmaps &quot;top ports&quot; options.'] = 'Top Nmap UDP Havenoj. La supraj 10, 100, 1000 hasnoj por skani kiel par Nmaps "pintaj hasnoj- opcioj.';

$GLOBALS["lang"]['Traditional Chinese'] = 'Tradicia Čina';

$GLOBALS["lang"]['Traffic Light'] = 'Trafika lumo';

$GLOBALS["lang"]['Trinidad and Tobago'] = 'Trinitéet- Tobago';

$GLOBALS["lang"]['Troubleshooting'] = 'Ongelma';

$GLOBALS["lang"]['Troubleshooting LDAP Logins'] = 'Ongelma de LDAP sisslogimiini';

$GLOBALS["lang"]['Try Open-AudIT Enterprise, on us without a time limit. All the features of Enterprise. Limited to 20 devices.'] = 'Malferma.o - Audit Enterprise, sur ni sen tempo limo. imitaiuj trajtoj de Enterprise. Limigita al 20 aparatoj.';

$GLOBALS["lang"]['Try all the latest features with a FREE 100 device license of Open-AudIT Enterprise. Please read the <a href=\"'] = 'A l \'heure actuelle, le taux de croissance de l\' emploi est passé de';

$GLOBALS["lang"]['Try logging in using an LDAP user. We are assuming this will fail (otherwise, why are you still reading this?). Next, comment out the line from ther file above.'] = 'Provu registradi en uzado de LDAP- uzantoj. Ni supozas ke tio malsukcesas (teise nimega kial vi ankora Venonta, komenta la lion de la dosiero supre.';

$GLOBALS["lang"]['Tuesday'] = 'Maroc';

$GLOBALS["lang"]['Tunisia'] = 'Tunizio';

$GLOBALS["lang"]['Turkey'] = 'Turquie';

$GLOBALS["lang"]['Turkish'] = 'Turquie';

$GLOBALS["lang"]['Turkmenistan'] = 'Turkmenio Turkmenio';

$GLOBALS["lang"]['Turks and Caicos Islands'] = 'Turko kaj Caïque Commerloj';

$GLOBALS["lang"]['Tuvalu'] = 'Tuvalo Tuvalo';

$GLOBALS["lang"]['tx_bitrate'] = 'Tx bittinopée';

$GLOBALS["lang"]['Tx Bitrate'] = 'Tx bittinopée';

$GLOBALS["lang"]['tx_freq'] = 'Tx Freq';

$GLOBALS["lang"]['Tx Freq'] = 'Tx Freq';

$GLOBALS["lang"]['tx_level'] = 'Tx Nivelo';

$GLOBALS["lang"]['Tx Level'] = 'Tx Nivelo';

$GLOBALS["lang"]['tx_power'] = 'Tx võimsus';

$GLOBALS["lang"]['Tx Power'] = 'Tx võimsus';

$GLOBALS["lang"]['tx_profile'] = 'Tx Profilo';

$GLOBALS["lang"]['Tx Profile'] = 'Tx Profilo';

$GLOBALS["lang"]['type'] = 'Tipo';

$GLOBALS["lang"]['Type'] = 'Tipo';

$GLOBALS["lang"]['Type: This can be either a varchar (a text field) or a List (a list of values that can be selected).'] = 'Tipo: Tio povas esti a sceptic varchar (tekstokampo) a sceptical Listo (listo de valoroj kiuj povas et selektititaj).';

$GLOBALS["lang"]['Types of Networks'] = 'Tipoj de retoj';

$GLOBALS["lang"]['URL'] = 'URL- i- URL- osoite';

$GLOBALS["lang"]['uuid'] = 'UUID';

$GLOBALS["lang"]['UUID'] = 'UUID';

$GLOBALS["lang"]['udp_ports'] = 'Puertos de Udp';

$GLOBALS["lang"]['Udp Ports'] = 'Puertos de Udp';

$GLOBALS["lang"]['Uganda'] = 'Ugando';

$GLOBALS["lang"]['Ukraine'] = 'Ukrainio';

$GLOBALS["lang"]['Ukrainian'] = 'Ukrajna';

$GLOBALS["lang"]['Undergo Stage 1 audit (documentation review)'] = 'Subgo Etapa 1 revizio (dokumentadrevizio)';

$GLOBALS["lang"]['Undergo Stage 2 audit (implementation review)'] = 'Subgo Etapa 2 revizio (efektiviga revizio)';

$GLOBALS["lang"]['Undergoing Analysis'] = 'Subiranta analizo';

$GLOBALS["lang"]['Unfiltered'] = 'Néperhita';

$GLOBALS["lang"]['uninstall'] = 'Désdelecación';

$GLOBALS["lang"]['Uninstall'] = 'Désdelecación';

$GLOBALS["lang"]['Uninstall the Agent'] = 'Désperemar el agente';

$GLOBALS["lang"]['United Arab Emirates'] = 'Le Président';

$GLOBALS["lang"]['United Kingdom'] = 'Unuiεinte Reεlando';

$GLOBALS["lang"]['United States Minor Outlying Islands'] = 'Usonaj Malgrandaj Commerloj';

$GLOBALS["lang"]['United States Virgin Islands'] = 'Usonaj Virgulininsulaj';

$GLOBALS["lang"]['United States of America'] = 'Norvège';

$GLOBALS["lang"]['Unknown'] = 'Nekonataoo Nekonata';

$GLOBALS["lang"]['unlock_pin'] = 'Mal Diffinalosi Pinne';

$GLOBALS["lang"]['Unlock Pin'] = 'Mal Diffinalosi Pinne';

$GLOBALS["lang"]['Unscheduled'] = 'Neplanita';

$GLOBALS["lang"]['Unused as at 5.2.0.'] = 'Unuigita kiel. E 5.2.0.';

$GLOBALS["lang"]['Unused.'] = 'Neparia.';

$GLOBALS["lang"]['Update'] = 'C \'est la première fois qu\' il s \'agit de';

$GLOBALS["lang"]['update_external_count'] = 'Maksimuma kalkulo';

$GLOBALS["lang"]['Update External Count'] = 'Maksimuma kalkulo';

$GLOBALS["lang"]['update_external_from_internal'] = 'Maksimumo de International';

$GLOBALS["lang"]['Update External From Internal'] = 'Maksimumo de International';

$GLOBALS["lang"]['update_internal_count'] = 'Distatigo Interna kalkulo';

$GLOBALS["lang"]['Update Internal Count'] = 'Distatigo Interna kalkulo';

$GLOBALS["lang"]['update_internal_from_external'] = 'Interna De Ekstere';

$GLOBALS["lang"]['Update Internal From External'] = 'Interna De Ekstere';

$GLOBALS["lang"]['Update NMIS Devices from Open-AudIT'] = 'NMIS Destinivos de Open- Audit';

$GLOBALS["lang"]['Update Open-AudIT Devices from '] = ' Aparatoj de ';

$GLOBALS["lang"]['Update Open-AudIT Devices from NMIS'] = 'Aparatoj de NMIS';

$GLOBALS["lang"]['Update Vulnerabilities'] = 'Distatigo de haavatavus';

$GLOBALS["lang"]['Update an attribute of a {collection} entry.'] = 'Isdatigu attribution de eniro.';

$GLOBALS["lang"]['Update attributes'] = 'Le Conseil de l \'Europe';

$GLOBALS["lang"]['Updated each time discovery has been executed with IPs detected to be responding.'] = '... Iun fojon eltrova';

$GLOBALS["lang"]['Updated each time discovery has been executed with IPs that have been scanned by Nmap.'] = 'C \'est le prix de Nmap.';

$GLOBALS["lang"]['Updated each time discovery has been executed with devices we were able to audit.'] = '... ';

$GLOBALS["lang"]['Updated each time discovery has been executed with devices we were able to query.'] = '... Sous- Finlande.org....:';

$GLOBALS["lang"]['Updated each time discovery has been executed.'] = '...';

$GLOBALS["lang"]['Updated each time the discovery has been executed.'] = '...';

$GLOBALS["lang"]['Updated each time the discovery has completed execution.'] = '..';

$GLOBALS["lang"]['Updating'] = ' est la fino';

$GLOBALS["lang"]['Upgrade'] = '...';

$GLOBALS["lang"]['Upload an audit result file'] = 'El apretargu revizion rezulta dosiero';

$GLOBALS["lang"]['Upper Case'] = 'Supra kazo';

$GLOBALS["lang"]['uptime'] = 'Nunna';

$GLOBALS["lang"]['Uptime'] = 'Nunna';

$GLOBALS["lang"]['Urdu'] = 'Urdua';

$GLOBALS["lang"]['url'] = 'Gépkocsi';

$GLOBALS["lang"]['Url'] = 'Gépkocsi';

$GLOBALS["lang"]['Uruguay, Eastern Republic of'] = 'Urugvajo, Orienta Respubliko de';

$GLOBALS["lang"]['usb'] = 'Usb';

$GLOBALS["lang"]['Usb'] = 'Usb';

$GLOBALS["lang"]['use'] = 'Uzo';

$GLOBALS["lang"]['Use'] = 'Uzo';

$GLOBALS["lang"]['use_authentication'] = 'Uzu kahtlusetentigon';

$GLOBALS["lang"]['Use Authentication'] = 'Uzu kahtlusetentigon';

$GLOBALS["lang"]['use_authorisation'] = 'Uzo de aprobo';

$GLOBALS["lang"]['Use Authorisation'] = 'Uzo de aprobo';

$GLOBALS["lang"]['Use Proxy'] = 'Uzu- proxy';

$GLOBALS["lang"]['Use SNMP'] = 'Uzu SNMP';

$GLOBALS["lang"]['Use SSH'] = 'Uzu SSH';

$GLOBALS["lang"]['Use Secure (LDAPS)'] = 'Utila (LDAPS)';

$GLOBALS["lang"]['Use Service Version Detection'] = 'Uzu la versiooni tuvastamiini';

$GLOBALS["lang"]['Use Service Version Detection. When a detected port is detected as open, if set to <i>y</i>, Nmap will query the target device in an attempt to determine the version of the service running on this port.<br>This can be useful when identifying unclassified devices. This was not previously used.'] = 'Uzu versión de la versio. Kiam detektita hasno estas detektita kiel malferma, se metite al <i>Oui.</i>Nmap request la celaparato en promo determi la version de la servo kuranta sur tiun hasnon.<br/>Tio povas esti utila kiam identigami nesekretajn aparatojn. Tio ne estis anta... uzata.';

$GLOBALS["lang"]['Use WMI'] = 'Uzu WMI';

$GLOBALS["lang"]['Use a <i>Sign-in method</i> of OIDC - OpenID Connect and an <i>Application Type</i> of Web Application. Click <i>Next</i>.'] = 'Uzu la <i>Métodoosi sisselogimiini</i> OIDC - OpenID Konektu kaj <i>Apliki tipon</i> Helyszín Web d \'mentségek. Klakou al Click <i>La Sekva</i>.';

$GLOBALS["lang"]['Use for Authentication'] = 'Uzo por Autentimiini';

$GLOBALS["lang"]['Use for Roles'] = 'Uzo por roloj';

$GLOBALS["lang"]['Use the standard install options when displayed and click the <i>I Agree</i>, <i>Next</i> and <i>Install</i> buttons to install Nmap.'] = 'Uzu la normajn installationjn opciojn kiam montrite kaj klakas la <i>Mi agras</i>, <i>La Sekva</i> Kaj <i>Instalgio</i> Butonoj por instali Nmap.';

$GLOBALS["lang"]['used'] = 'Uzita';

$GLOBALS["lang"]['Used'] = 'Uzita';

$GLOBALS["lang"]['used_count'] = 'Uzita kalkilo';

$GLOBALS["lang"]['Used Count'] = 'Uzita kalkilo';

$GLOBALS["lang"]['Used by OpenLDAP only.'] = 'Uzita fare de OpenLDAP nur.';

$GLOBALS["lang"]['Used internally when discovering a single device.'] = 'Uzita interne dum malkovrado de ununura aparatito.';

$GLOBALS["lang"]['Used internally when discovering a single device. Links to <code>devices.id</code>.'] = 'Uzita interne dum malkovrado de ununura aparatito. Ligiloj al <code>devices.id</code>.';

$GLOBALS["lang"]['Used when LDAP servers have been configured to populate a users details - this includes the Orgs to which they have access. If a user is in this LDAP group, they are assigned this org.'] = 'Uzita kiam LDAP- serviloj estis formitaj por popularigi uzantdetalojn - tio inkludas la Orgs al kiuj ili havas alron. LDAP- grupo, ili rivas tiun org.';

$GLOBALS["lang"]['Used when LDAP servers have been configured to populate a users details - this includes the Roles which they are assigned. If a user is in this LDAP group, they are assigned this role.'] = 'Uzita kiam LDAP- serviloj estis formitaj por popularigi uzantdetalojn -tio inkludas la rolojn kiujn ili rizvas. Se uzanto estas en tiu LDAP- grupo, ili rivas tiun rolon.';

$GLOBALS["lang"]['Used when searching OpenLDAP to match a users uid to a groups members. Default of <code>memberUid</code>. Used by OpenLDAP only.'] = 'Uzita dum ser revelado Le programme OpenLDAP por egali uzantojn kojn al grupoj membroj. Defa deutlto de <code>memberUid</code>. Uzita fare de OpenLDAP nur.';

$GLOBALS["lang"]['Used with Integrations and FirstWave monitoring applications.'] = 'Uzite kun Integri';

$GLOBALS["lang"]['Used with Integrations and FirstWave monitoring applications. Set to y if working SNMP detected by discovery.'] = 'Uzite kun Integri Metite al y se labouranta SNMP detektita per eltrova.o.';

$GLOBALS["lang"]['user'] = 'Uzanta Uzanto';

$GLOBALS["lang"]['User'] = 'Uzanta Uzanto';

$GLOBALS["lang"]['User DN'] = 'Üzanto DN';

$GLOBALS["lang"]['user_group'] = 'Uzanta gruppon';

$GLOBALS["lang"]['User Group'] = 'Uzanta gruppon';

$GLOBALS["lang"]['user_id'] = 'Uzanto- tunniste';

$GLOBALS["lang"]['User ID'] = 'Uzanto- tunniste';

$GLOBALS["lang"]['user_interaction'] = 'Gépkocsi';

$GLOBALS["lang"]['User Interaction'] = 'Gépkocsi';

$GLOBALS["lang"]['User Membership Attribute'] = 'Afrique. unit description in lists';

$GLOBALS["lang"]['user_name'] = 'Uzanomo Nom de la ville (facultatif, sans doute pas besoin de traduction)';

$GLOBALS["lang"]['User Name'] = 'Uzanomo Nom de la ville (facultatif, sans doute pas besoin de traduction)';

$GLOBALS["lang"]['User Policies'] = 'Uzanta Politikojn';

$GLOBALS["lang"]['Username'] = 'Uzanomo Nom de la ville (facultatif, sans doute pas besoin de traduction)';

$GLOBALS["lang"]['username'] = 'Uzanomo Nom de la ville (facultatif, sans doute pas besoin de traduction)';

$GLOBALS["lang"]['users'] = 'L \'Union européenne';

$GLOBALS["lang"]['Users'] = 'L \'Union européenne';

$GLOBALS["lang"]['Users work similar to Netstat Ports. If a user exists with a matching name, status and password details (changeable, expires, required) then the policy passes.'] = 'Uzantoj laboras simpiaj al Netstat Puertos. Se uzanto eksistas kun egala nomo, stato kaj pasvorton detaloj (publikaan progresssiveblaj, eksvalidias, postulis) tiam la politiko pasas.';

$GLOBALS["lang"]['Users, Roles and Orgs'] = 'Uzantoj, Roloj Kaj Orgs';

$GLOBALS["lang"]['Uses the CodeIgniter PHP Framework.'] = 'Uzu la kodon Igniter PHP raamistik.';

$GLOBALS["lang"]['Using'] = 'Urante nin';

$GLOBALS["lang"]['Using Entra for Auth'] = 'Urante entra por Auth';

$GLOBALS["lang"]['Using LDAPS'] = 'Üzbegisztán LDAPS';

$GLOBALS["lang"]['Using OKTA for Auth'] = 'Uzante OKTA por Aut';

$GLOBALS["lang"]['Using the format option is useful when using a web browser but you wish to see the result in JSON format. Adding format=json achieves this. Normally a web browser will set its accept header to HTML, so in that case, we return the rendered page. Using an API to retrieve JSON you should set the accept header to'] = 'Uzante la formatelekton estas utila dum uzado de retumililo sed vi deziras vidi la rezulton en JSON formaat. L \'objectif est d\' améliorer la qualité de l \'information. Normale tT- legilo metos sian akceptantan pli kapon al HTML, tieel en tiu kazo, ni resendas la igitan paεon. Uzante API por preni JSON vi devus meti la akceptantan kapon al';

$GLOBALS["lang"]['Usually Mbs, from Location A.'] = 'Kutime Mb / s, de Loko A.';

$GLOBALS["lang"]['Usually Mbs, from Location B.'] = 'Kutime Mb / s, de Loko B.';

$GLOBALS["lang"]['Usually Mbs, to Location A.'] = 'Kutime Mb / s, lokigi A.';

$GLOBALS["lang"]['Usually Mbs, to Location B.'] = 'Kutime Mb / s, al Loko B';

$GLOBALS["lang"]['Usually should be set to 3.'] = 'Kutime oni tuhoaa doni al 3.';

$GLOBALS["lang"]['Uzbekistan'] = 'Ouzbekio';

$GLOBALS["lang"]['VLAN'] = 'VLAN';

$GLOBALS["lang"]['VLAN ID'] = 'ID de VLAN';

$GLOBALS["lang"]['valid_from'] = 'Validea';

$GLOBALS["lang"]['Valid From'] = 'Validea';

$GLOBALS["lang"]['valid_from_raw'] = 'Anta skeptite fare de Raw';

$GLOBALS["lang"]['Valid From Raw'] = 'Anta skeptite fare de Raw';

$GLOBALS["lang"]['valid_to'] = 'Valida por';

$GLOBALS["lang"]['Valid To'] = 'Valida por';

$GLOBALS["lang"]['valid_to_raw'] = 'Valida al Raw';

$GLOBALS["lang"]['Valid To Raw'] = 'Valida al Raw';

$GLOBALS["lang"]['Valid Values'] = 'Validaj Valoroj';

$GLOBALS["lang"]['value'] = 'Valora Valoro';

$GLOBALS["lang"]['Value'] = 'Valora Valoro';

$GLOBALS["lang"]['Value Types'] = 'Valoroj';

$GLOBALS["lang"]['values'] = 'Valoroj';

$GLOBALS["lang"]['Values'] = 'Valoroj';

$GLOBALS["lang"]['Values: In the case of a <i>list</i> field, this should be a comma separated list of valid values.'] = 'Bonjour. En la kazo <i>Liste de Liste</i> Kampo, tio devus esti komm apartigita lista de validaj valoroj.';

$GLOBALS["lang"]['Vanuatu'] = 'Vanuatuo Vanuatuo';

$GLOBALS["lang"]['VarChar'] = 'Varo';

$GLOBALS["lang"]['Varchar'] = 'Varchar';

$GLOBALS["lang"]['variable'] = 'Varia varianteo';

$GLOBALS["lang"]['Variable'] = 'Varia varianteo';

$GLOBALS["lang"]['Various'] = 'Diversaj';

$GLOBALS["lang"]['vendor'] = 'Vendisto';

$GLOBALS["lang"]['Vendor'] = 'Vendisto';

$GLOBALS["lang"]['Vendor Report'] = 'Valmistaja';

$GLOBALS["lang"]['vendors'] = 'Vendristoj';

$GLOBALS["lang"]['Vendors'] = 'Vendristoj';

$GLOBALS["lang"]['Venezuela'] = 'Venezuelo';

$GLOBALS["lang"]['Version'] = 'Versio versio';

$GLOBALS["lang"]['version_padded'] = 'Versio pehmustettu';

$GLOBALS["lang"]['Version Padded'] = 'Versio pehmustettu';

$GLOBALS["lang"]['version_raw'] = 'Versio cru';

$GLOBALS["lang"]['Version Raw'] = 'Versio cru';

$GLOBALS["lang"]['version_string'] = 'Versio de kordoj';

$GLOBALS["lang"]['Version String'] = 'Versio de kordoj';

$GLOBALS["lang"]['video'] = 'Vidéo';

$GLOBALS["lang"]['Video'] = 'Vidéo';

$GLOBALS["lang"]['Vietnam'] = 'Vjetnama respubliko';

$GLOBALS["lang"]['Vietnamese'] = 'Vjetnama vjetnamanoj';

$GLOBALS["lang"]['View'] = 'Vido';

$GLOBALS["lang"]['View All'] = 'Riikardi Governanceujn';

$GLOBALS["lang"]['View Details'] = 'Vidu detalojn';

$GLOBALS["lang"]['View Device'] = 'Destitivo Vido';

$GLOBALS["lang"]['View Discovery'] = 'Découverte de la vido';

$GLOBALS["lang"]['View Policy'] = 'Politika';

$GLOBALS["lang"]['View Racks'] = 'Raquette Vidu';

$GLOBALS["lang"]['View the'] = 'Vitume';

$GLOBALS["lang"]['View the discovery in question, then click the Support button in the top right toolbar. This will provide the discovery settings, config items, the discovery device list as well as the logs for this particular discovery.'] = 'Rigardi la eltrova Tio disponigos la malkovro agorrdojn, konfig erojn, la malkovro- aparato- liston sama kieli la tagalojn por tiu speciala eltrova.';

$GLOBALS["lang"]['View the release notes on the'] = 'L \'Union européenne';

$GLOBALS["lang"]['Virtual Private Network'] = 'Virtuala Privata Reto';

$GLOBALS["lang"]['Virtual private network'] = 'Virta privata reto';

$GLOBALS["lang"]['Virtualisation'] = 'Virtualigo';

$GLOBALS["lang"]['Visit our YouTube channel for instructional videos.'] = 'Vizitu nian Yourr- kanalon por reguluaj videndoj.';

$GLOBALS["lang"]['vlan'] = 'Vlan';

$GLOBALS["lang"]['Vlan'] = 'Vlan';

$GLOBALS["lang"]['vlan_id'] = 'Azonosító';

$GLOBALS["lang"]['Vlan ID'] = 'Azonosító';

$GLOBALS["lang"]['vm'] = 'Vm';

$GLOBALS["lang"]['Vm'] = 'Vm';

$GLOBALS["lang"]['vm_device_id'] = 'Vm Seadmen henkilökortti';

$GLOBALS["lang"]['Vm Device ID'] = 'Vm Seadmen henkilökortti';

$GLOBALS["lang"]['vm_group'] = 'Vm grupp';

$GLOBALS["lang"]['Vm Group'] = 'Vm grupp';

$GLOBALS["lang"]['vm_ident'] = 'Azonosítás';

$GLOBALS["lang"]['Vm Ident'] = 'Azonosítás';

$GLOBALS["lang"]['vm_server_name'] = 'Nombre de servidor Vm';

$GLOBALS["lang"]['Vm Server Name'] = 'Nombre de servidor Vm';

$GLOBALS["lang"]['vm_vendor'] = 'C \'est à dire, en ce qui concerne les';

$GLOBALS["lang"]['Vm Vendor'] = 'C \'est à dire, en ce qui concerne les';

$GLOBALS["lang"]['vuln_status'] = 'Vulnstatuso';

$GLOBALS["lang"]['Vuln Status'] = 'Vulnstatuso';

$GLOBALS["lang"]['vulnerabilities'] = 'Vulnercoj';

$GLOBALS["lang"]['Vulnerabilities'] = 'Vulnercoj';

$GLOBALS["lang"]['vulnerabilities_cache'] = 'Vulnerabilidaadid';

$GLOBALS["lang"]['Vulnerabilities Cache'] = 'Vulnerabilidaadid';

$GLOBALS["lang"]['Vulnerabilities and Results'] = 'Vulnercoj kaj rezultoj';

$GLOBALS["lang"]['Vulnerabilities initially published before 1st January, 2025 (by default). We see no sense in returning vulnerabilities from years prior. This can be changed in the configuration.'] = 'Vulnerabilidades komence publikigis antaitis 1 tammikuuro 2025 (defa.lte). Ni Vidas neniun sencon en resendado de vundundblecoj de jaroj prio. Tio povas esti шшенннимita en la konfiguracio.';

$GLOBALS["lang"]['vulnerability_id'] = 'Személyazonosító szám';

$GLOBALS["lang"]['Vulnerability ID'] = 'Személyazonosító szám';

$GLOBALS["lang"]['Vulnerability Status'] = 'Estado de inverbilidad';

$GLOBALS["lang"]['WARNING - When creating a baseline using software policies, at present Centos and RedHat package the kernel using the names <i>kernel</i> and <i>kernel-devel</i>. There can be multiple packages with this name and different versions concurrently installed. Debian based distributions use names like <i>linux-image-3.13.0-24-generic</i>, note the version number is included in the package name. Because RedHat based operating systems use this format and subsequently have multiple identical package names with different versions we currently exclude <i>kernel</i> and <i>kernel-devel</i> from software policies. This may be addressed in a future update.'] = 'HOIATUS - Dum kreado de bazlinio uzanta softvarpolitikojn, <i>kerno</i> Kaj <i>kerno- devel</i>. Povas ekzisti multoblaj paka Debiano bazigis distributionojn utiligas nomojn kiel <i>Lin.-kuva- 3,33,0- 24- geneerinen</i>Notu ke la versionombro estas inkludita en la paka. Imitaar RedHat bazigis opéraciumojn uzas tiun forman kaj poste havas multoblajn identajn paka <i>kerno</i> Kaj <i>kerno- devel</i> de softvaraj politikoj. Tio povas esti traktita en estonta εisdatigo.';

$GLOBALS["lang"]['WHERE'] = '→ Eventoj:';

$GLOBALS["lang"]['WMI Credentials Requirements'] = 'WMI Crédenciales Postuloj';

$GLOBALS["lang"]['Wait for it to complete, then paste in this next line to install the Agent.'] = 'Atendu εin por kompletigi, poste en tiu venta linio por instali la agenton.';

$GLOBALS["lang"]['wall_port'] = 'Muro de la haveno';

$GLOBALS["lang"]['Wall Port'] = 'Muro de la haveno';

$GLOBALS["lang"]['Wallis and Futuna'] = 'Valiso kaj Futuna';

$GLOBALS["lang"]['Want to know more?'] = 'Como?';

$GLOBALS["lang"]['Warning'] = 'Averto';

$GLOBALS["lang"]['warranty'] = 'Milito';

$GLOBALS["lang"]['Warranty'] = 'Milito';

$GLOBALS["lang"]['warranty_duration'] = 'La milito';

$GLOBALS["lang"]['Warranty Duration'] = 'La milito';

$GLOBALS["lang"]['warranty_expires'] = 'Milito de milito';

$GLOBALS["lang"]['Warranty Expires'] = 'Milito de milito';

$GLOBALS["lang"]['warranty_status'] = 'Situanta statuo';

$GLOBALS["lang"]['Warranty Status'] = 'Situanta statuo';

$GLOBALS["lang"]['warranty_type'] = 'Anta...';

$GLOBALS["lang"]['Warranty Type'] = 'Anta...';

$GLOBALS["lang"]['We also have an option to Ping Before Scan (important for routers with long lived ARP caches). This is usually a good idea.'] = 'C \'est vrai. Tio estas kutime bona ideo.';

$GLOBALS["lang"]['We also have our action items (which are executed in the order below):'] = 'C \'est vrai.';

$GLOBALS["lang"]['We are often asked this question and the answer most definitely is <i>it depends</i>. It depends on the number of IPs to be scanned, the network connection speed, the speed of the devices being scanned, the type of devices being scanned, the number of different credentials being tested and the speed of the Open-AudIT server. We do not have a calculator that would allow us to input those variables and return a value. It is simply too complex. Generally I limit my discoveries to 256 IP addresses - ie, a /24 subnet. We have had customers scan /16 subnets (65k addresses) and it does work - but it can take a long time. You are much better off scanning in /24 blocks. If you simply do not know what your address ranges are, then this is a good case for a Seed discovery.'] = 'Ni oarte demandas tiun demandon kaj la reaktiono pléj sendube estas <i>Sôltlane</i>. Tämä asetus sur kaikilta osiltaan velvoittava, ja sitä sovelletaan sellaenaan kaikissa jäsenvaltioissa. Ni ne havas kalkulilon kiu permesus al ni enigi tiujn variablojn kaj resendi valoron. Estas Tro kompleksa. Ni havis klientojn skani / 16 subretojn (65k adresoj) kaj εi funkcias - sed εi povas preni longan tempon. Il s \'agit d\' un programme de formation à l \'intendation des jeunes. Se vi simply ne scias, kion viaj adresaroj estas, tiamtio estas bona kazo por Seita malkovro.';

$GLOBALS["lang"]['We have more detailed instructions on'] = 'Ni havas pli detalajn systukciojn pri';

$GLOBALS["lang"]['We have tests for:'] = 'Ni havas commerjn por:';

$GLOBALS["lang"]['We hope you find Open-AudIT as useful as we do.'] = 'Ni esperas ke vi tropos Open- Audit kiel utila kiel ni faras.';

$GLOBALS["lang"]['We initially setup the default list of scripts with the default options. The list of script is viewable at /scripts. These default scripts cannot be deleted. You can create additional scripts for use by you as required. Your script will be based on one of the existing scripts and have custom options applied. The scripts can then be downloaded from the list page at menu: Discover -> Audit Scripts -> List Audit Scripts.'] = 'Autres La lista de kézműves estas rigardebla Tiuj deha.ltaj kézműves ne povas esti forigitaj. Vi povas krei kromajn manikriptojn por uzo de vi kiel postulat. Via manikripto estos bazita sur unu el ekzistantaj manikriptoj kaj havas kutimo eblojn aplikitaj. La maniskriptoj tiam povas esti el apretutitaj de la listpa pila Valikko: Malkovru - titulado Scripts de auditía - Lista de scripts de auditía.';

$GLOBALS["lang"]['We need some credentials to be able to effectively talk to the devices on your network.'] = 'Ni bezonas jujn akredita. Ojn por povi efike paroli al la aparatoj sur via reto.';

$GLOBALS["lang"]['We only send the minimum amount of data and nothing of a sensitive nature. We send our license data (name, type, etc), our application data (name, version, platform, timezone, etc), any logged errors, a count of device types and a count of the features used. <i>Any</i> environment has devices and that is the only piece of your data we send. And only the type of device and a count. Not the manufacturer, not the model. We send nothing special. No networks. No IP addresses. No OS versions. No software names. The UUID and Server fields are sha256 encoded (so we do not know the value). We send just the data we need to improve the product. We hope you see the benefit to all of us with this information. It will provide us guided direction on where to focus improvements and new features in the product.'] = 'Ni nur sendas la miniman kvanton de datumoj kaj nénion de senima naturo. Ni sendas niajn licencedatenojn (nomo, tipo, ktp), niaj apliki <i>Il n \'y a pas de</i> Medio havas aparatojn kaj tio estas la nura peco de viaj datenoj kiujn ni sendas. Kaj nur la speco de aparato kaj kalkulo. Ne la produktanto, ne la modelo. Ni sendas nenion Specialen. Neniuj retoj. Neniu IP- adreso. Neniu versio de Os. La UID kaj Servilo kampraj estas sha256. Ni sendas nur la datumojn, kiujn ni bezonas plibonigi la produkton. Ni esperas, ke vidas la avanta fusion al Čiuj niaj informaj. ';

$GLOBALS["lang"]['We tend to use the Google Chrome extension called Postman for testing actual restful queries. You might like to install and test with that.'] = 'Ni emas uzi la Google Chrome etenda Les dispositions de l \'article 8 du règlement (CEE) no 1408 / 71 du Conseil, du 18 décembre 1971, relatif à l\' harmonisation des legislations des États membres reloges aux véhicules à moteur à moteur et des véhicules à moteur à moteur à moteur et à moteur à moteur à allumage par compression (JO L 347 du 31.12.31., 1. o.).';

$GLOBALS["lang"]['Web'] = 'Veebiveebi veebiveebileht';

$GLOBALS["lang"]['Web Application Routes'] = 'Rutas de aplicación web';

$GLOBALS["lang"]['Web Server Discovery'] = 'Veebiserveri- avastamiini';

$GLOBALS["lang"]['Webserver'] = 'Szolgálati web';

$GLOBALS["lang"]['Website'] = 'Retejo retejo';

$GLOBALS["lang"]['Wednesday'] = 'Merkredo Merkredo Merkredo';

$GLOBALS["lang"]['weight'] = 'Pezo';

$GLOBALS["lang"]['Weight'] = 'Pezo';

$GLOBALS["lang"]['weight_current'] = 'Peza kurento';

$GLOBALS["lang"]['Weight Current'] = 'Peza kurento';

$GLOBALS["lang"]['weight_empty'] = 'Peza malfekteco';

$GLOBALS["lang"]['Weight Empty'] = 'Peza malfekteco';

$GLOBALS["lang"]['weight_max'] = 'Peza';

$GLOBALS["lang"]['Weight Max'] = 'Peza';

$GLOBALS["lang"]['Welcome'] = 'Bonvenon Bonvenon';

$GLOBALS["lang"]['Welcome Dashboard'] = 'Tableau de bord Bonvenon';

$GLOBALS["lang"]['Welcome to'] = 'Bonvenon';

$GLOBALS["lang"]['Western Sahara'] = 'Okcidenta Saharo';

$GLOBALS["lang"]['What Can I Expect if I Have no Credentials'] = 'Kion mi povas atendi se mi havas neniujn kreantojn';

$GLOBALS["lang"]['What about fields that I want from NMIS that are not in Open-AudIT? We have got you covered. Any fields in the external system (NMIS) that do not exist in Open-AudIT will be automatically created as Open-AudIT Custom fields.'] = 'Kion mi volas de NMIS kiu ne estas en Open- Audit? Ni kovris vin. imitaiuj kampraj en la ekstera sistemo (NMIS) kiuj ne ekzistas en Open- Audit estas a skeptomate kreitaj kiel Open- Audit Custom kampraj.';

$GLOBALS["lang"]['What about other network devices? Think switches, routers, printers, etc. Obviously, it is best if you can provide some SNMP credentials for these devices. They only need <i>read-only</i> access. But if you do not want to do even that, there is nothing stopping you from running discovery, finding the devices, and making a rule or two to identify them (maybe use MAC Address prefix in combination with open ports, for example). You wont have much information, but you will know they are on the network, what they are, and when the last time they were seen was. You will also see if anything new appears on the network.'] = 'Kio prieliaj retaparatoj? C \'est la raison pour laquelle la Commission a adopté une prompt de directive concernant la protection des données à caractère staff. Ili nur bezonas <i>Legunur</i> Aliron. Sed se vi ne volas fari e agenda ke, ekzistas nenio .esanta vin de prizorgado de eltrova.o, Trovante la aparatojn, kaj farante regulon a reguld du identgi ilin (eble uzi MAC Adresse prefikson en Kombinao kun malfermaj havenoj, ekzample). Vi havas multe da informaoj, sed vi cios ke ili estas sur la reto, kion ili estas, kaj kiam lalla tempo ili estis viditaj estis. Vi ankai vidos -Nova aperas sur la reto.';

$GLOBALS["lang"]['What do we send?'] = 'Kion ni sendas?';

$GLOBALS["lang"]['What does this actually mean to you?'] = 'Kion tio signfas al vi?';

$GLOBALS["lang"]['What is the purpose of this rack.'] = 'Kio estas la celo de tiu rako.';

$GLOBALS["lang"]['What is the type of this location. Allowable types held in <code>attributes</code> table.'] = 'Kio estas la speco de tiu loko. Pour plus d \'informations: <code>attributes</code> Tablo.';

$GLOBALS["lang"]['When Open-AudIT on Linux discovers a Windows machine, in order to execute a remote command we use'] = 'Kiam Open- Aud IT sur Linukso malkovras Fenestrojn, por efektivigi malpreksiman kommundon kiun ni uzas.';

$GLOBALS["lang"]['When Open-AudIT on Windows discovers a Windows machine, in order to execute a remote command we use'] = 'Kiam Open- Audit sur Fenestroj malkovras Fenestrojn, por efektivigi malpreksiman kommundon ni uzas';

$GLOBALS["lang"]['When Open-AudIT receives data about a device, either by discovering the device during an audit run or by the user importing the device, it must determine if this discovered device matches a device that already exists within its database, or if it is a new device that should be added. Open-AudIT uses a series of twelve property matches to determine this. The Match Rules work as OR comparisons, not AND. This means the first rule that matches a field in the discovered device to one in the dB resolves as an existing device. All Matching Rules have to fail in order for a device to be new and result in a new record being created.'] = 'Kiam oni malfermis la Ricevas datenojn pri aparato, epäilty malkovrante la aparaton dum reviziokuro epäilty de la uzanto importor la aparaton, εi murros determini.. Open Audit utiliza skalden de dek du presea dumat La Match Rules funkcias kiel OR komparoj, ne kaj. Tio signfas la unuan regulon kiu egalas kampon en la malkovrita aparato al unu en la dB solvas kiel ekzistanta aparato. imitaiuj Sobivad reeglid murtaa malsukcesi por aparato por esti nova kaj rezulto en nova rekordo estanta kreita.';

$GLOBALS["lang"]['When POSTing data, you must include an access token. An access token is generated with every request type, so make a GET (for example) and Accept: application/json, parse the response for meta→access_token, and include that with your request. This should be placed in the field data[access_token], IE, the top level.'] = 'Kiam Posting datenoj, vi murtaa inkludi alir... Alir Tio devus esti metita en la kampampdatenojn [access _ membre], IE, la pintnivelo.';

$GLOBALS["lang"]['When a device is Discovered the audit script will be injected with the file (or directory) details. Both audit_linux.sh and audit_windows.vbs will be populated, regardless of the file path. If you are thinking <i>but putting a Linux path into a Windows machine will break things!</i>, it wont break, you just wont receive any data from that file or directory entry.<br>Retrieved details will be stored in the <i>file</i> database table and are stored like any other attribute. File details will be stored as any other attribute and generate alerts if any of the following attributes change - <i>full_name</i>, <i>hash</i>, <i>inode</i>, <i>last_changed</i>. The table contain a system_id, first_seen, last_seen and current columns as well as the file details.<br>Attributes recorded are:<br><ul><li>Windows - name, size, directory, SHA1 hash (of the file contents), last changed, permissions, owner, version (file permitting).</li><br><li>Linux - name, size, directory, SHA1 hash (of the file contents), last changed, meta data last changed, permissions, owner, group, inode.</li></ul>You will see a section in both the Windows and Linux audit scripts as below'] = 'Kiam aparato estas Avastatud la reviziomanuskripto estos injektita kun la dosiero (kahtlus adresaro) detaloj. Kaj reviziozlin epäilty.sh kaj a défingereddi _ windows.vbs estos lo fusionita, nekonsiderante la dosierpado. Se vi pensas <i>Sed meti Linukso- padon en Vindozo ma apretino rompos a! ojn!</i>.<br/>Prénitaj detaloj estos stokitaj en la <i>Dosiero</i> Datumbazo kaj estas stokita kiel iu alias atiguto. Dosiero detaloj estos stokitaj kiel iu alias attracto kaj suvut errojn se entute de la sekvaj attractoj <i>unit description in lists</i>, <i>havas</i>, <i>Inodo</i>, <i>La lasta рanшo</i>. La tablo enhavas system _ id, first _ seen, latta _ seen kaj nunajn kolonajn meme kiel la dosierdetalojn.<br/>Atributoj registritaj estas:<br/><ul><li>Fenestroj - nomo, grandeco, adresaro, SHA1 hah (de la dosierenhavo), latte деливатитива, permesojn, posanton, versión (dosiero permesante).</li><br/><li>Linukso - nomo, grandeco, adresaro, SHA1 hah (de la dosierenhavo), latte europa.ентивалинимis, metadatenoj latte ê аление Οилиние, permesoj, posanto, grupo, indo.</li></ul>Vidos sekcion en kaj la Fenestroj kaj Linukso reviziomanuskriptoj kiel malsupre';

$GLOBALS["lang"]['When a discovery is run, the relevant discovery scan option is chosen and those settings are used by Nmap to scan the target devices.  The scan options determine which ports nmap scans, how fast they scan and whether or not nmap ping is first used to determine if the IP is live or not.'] = 'Kiam eltrova La skanaj opcioj determinas kiuj hasnoj Nmap skanas, kiom rache ili skaans kaj. u ne ne Nmap- ping uneue kutimi determini claru la IP estas viva a skeptis ne.';

$GLOBALS["lang"]['When a discovery is run, the relevant discovery scan option is chosen and those settings used by Nmap to scan the target devices. If no option set is chosen, the default configuration item (discovery_default_scan_option) is selected and used. Open-AudIT Community will use the default options as per the configuration for all discoveries.'] = 'Kiam eltrova Se neniu opcio metita estas ektita, la deva... Open- Audit- komunumo uzos la deva...';

$GLOBALS["lang"]['When a subnet discovery is executed it first runs, if selected, an Nmap ping scan on the range or IP addresses. Any device responding will be port scanned. If an Nmap ping scan is not requested, each IP is individually port scanned. Which ports? That is determined by the'] = 'Sous- nettrova de kiam Se Nmap ping- skanado ne estas postuladita, Kiujn Hasnojn? Tio estas deterorita';

$GLOBALS["lang"]['When auditing a Linux device via SSH, some Linux distributions do not allow sudo commands to be passed without a TTY (which we are doing). To completely audit one of these linux distributions it is best to supply the root user credentials. If no root is supplied and sudo without a TTY is not possible, the audit script will be run but will not contain the amount of data as would otherwise. Subsequent audits using root (or run locally using sudo) will therefore provide extra details about the system and generate several <i>changes</i>.'] = 'Dum reviziado de Linukso- aparato per SSH, kelkaj Linukso- distributioj ne permesas al 115 kommundoj esti pasitaj sen TTY (kiu ni faras). L \'utility de l\' énergie nucléaire dans le secteur de l \'énergie est une condition préalable à l\' utility de l \'énergie nucléaire. Se neniu radiko estas provizita kaj eksterlande sen TTY ne estas ebla, la reviziomanuskripto estos prizorgita sed ne enhavas la kvanton de datenoj kiel alie. Postaj revizioj uzantaj radicon (katlusega kuro loke uzanta sekson) tiaal disponigas ekstrajn detalojn pri la simemo kaj suvut plurajn detalojn. <i>ранновоj</i>.';

$GLOBALS["lang"]['When combining devices, which system is the authoritative source for information.'] = 'Dum Kombinado de aparatoj, kiu sistemo estas la a skeptita fonto por informoj.';

$GLOBALS["lang"]['When complete, close the command window and you are done!'] = 'Kiam vi estas finita, fermu la kommundan fenestron kaj vi estas farita!';

$GLOBALS["lang"]['When creating a widget, if you select the <i>Advanced</i> button you will have the ability to upload your own custom SQL.'] = 'Voir la liste des produits <i>Progresinta Nom de la ville (facultatif, sans doute pas besoin de traduction)</i> Butono vi havos la kapablon al fleuti linnun propran kutimon SQL.';

$GLOBALS["lang"]['When integrating devices from the external system, if the device doesnt exist in Open-AudIT should we create it?'] = 'Dum integrado de aparatoj de la ekstera sistemo, se la aparato ne ekzistas en Open- Audit devus ni krei εin?';

$GLOBALS["lang"]['When integrating devices from the external system, if the device has been updated in the external system should we update it in Open-AudIT?'] = 'Dum integrado de aparatoj de la ekstera sistemo, se la aparato estis εisdatigita en la ekstera sistemo ni devus εisdatigi εin en Open- Audit?';

$GLOBALS["lang"]['When investigating a Discovery, support will request the Exported Discovery Logs. To retrieve these, go to menu -> Discoveries ->'] = 'Dum esplorado de Discovery, subteno petos la Eksportan Discovery Lokit. Por preni tiaujn, iru al menuo - Eltrova...';

$GLOBALS["lang"]['When matching a Linux based device, we prefer to use the Dbus id concatenated with the hostname. We can also use other options as per the below table, but we can retrieve the Dbus ID without root. To retrieve the UUID (from the motherboard), we need to run dmidecode, which does require root. Unfortunately, when you clone an ESXi guest, the Dbus ID does not get recreated - hence our concatenating this with the hostname. There is a good article linked here that details the <i>why</i> of hardware IDs.'] = 'Dum egalado de Linukso- bazita aparato, ni preferas uzi la Dbus- identigon akompanate kun la mastro- nomo. C \'est vrai. Por preni la UUID (de la patrintabulo), ni murs kuri dmidecode, kiu postulas radekon. Beda auditrinde, kiam vi klonas ESXi Gastan, la Dbus ID ne ricevas rekreitan - tial nia akompanantation kun la mastro-nomo. Ekzistas bona artikolo ligita <i>Kial Kial</i> Kahtlustustomobilaj identifiegiloj.';

$GLOBALS["lang"]['When requesting JSON, by default no limit is set. When requesting screen display, the limit is set to 1000 by default. This can be changed in the configuration. See the \\'] = 'Dum petado de JSON, deca.lte neniu limuzin estas metita. Dum petado de kranekrano, la limuzin estas metita al 1000 deca. Tio povas esti шшенннимita en la konfiguracio. Vitume';

$GLOBALS["lang"]['When retrieve an external device, should we run discovery upon it?'] = 'Kiam ni prenas eksteran aparaton Oletko Kunnossa?';

$GLOBALS["lang"]['When running Open-AudIT on Windows the Apache service account must be that of a <i>regular</i> user (or the Administrator). This is because the <i>Local System</i> account normally used to run Apache has no access to any network resources. IE - We cannot use Apache when running as the Local System account account to copy the audit script to Windows PCs.'] = 'Dum prizorgado de Open- Audit sur Fenestroj la apa previstoservkonto brunces et tiu de apa previstoo <i>Säädökset</i> uzanto (a la la administrationto). Tio estas Čar la <i>Loka sistemo Nom de la ville (facultatif, sans doute pas besoin de traduction)</i> Raporto normale uzita por prizorgi aparcaon havas neniun aliron al juj sendostaciaj resursoj. IE - Ni ne povas uzi apa recommäkkiam kurante kiel la Loka Sistemo- konto- koto por kopii la reviziomanuskripton al Fenestroj.';

$GLOBALS["lang"]['When the configuration option is set, we take this into account for devices for a certain defined subset of match rules where the configuration item has been enabled. These rules are:'] = 'Kiam la agorrdo opcio estas metita, ni prenastion en raporton por aparatoj por certa difinita subaro de matristaeguloj kie la konfiguraciobjektoj estis ebliglitaj. Tiuj reguloj estas:';

$GLOBALS["lang"]['When the rules run in discovery, any matching rules will appear in the discovery log. See below for an example.'] = 'Kiam la reguloj kuris en eltrova Vidou sube por ekzemplo.';

$GLOBALS["lang"]['When this benchmark is scheduled to be executed. Derived from the associated <code>tasks.type</code> and <code>tasks.sub_resource_id</code>.'] = 'Kiam tiu kompranormo estas planita por esti efektivitita. Tultatud de la rilata <code>tasks.type</code> Kaj <code>tasks.sub_resource_id</code>.';

$GLOBALS["lang"]['When this log was created.'] = 'Kiam la tagalo estis kreita.';

$GLOBALS["lang"]['When this queue item started processing.'] = 'Kiam tiu järjekord objekto domencis predigon.';

$GLOBALS["lang"]['When using Open-AudIT Professional or Enterprise, widgets are available and customisable to be displayed on Dashboards.'] = 'Dum uzado de Open- Audit Professional a. Enterprise, widgets estas hasblaj kaj aptitaj por esti elmontritaj sur Dashboard.';

$GLOBALS["lang"]['When we are converting an internally selected device to an object for the external system, what should the external data be. EG: integer, string, etc.'] = 'Kiam ni transformas interne elektitan aparaton al objektto por la ekstera sistemo, kio devolus la eksteraj datenoj esti. Entjero, grinuro, ktp.';

$GLOBALS["lang"]['When we execute this baseline, should we check for items on devices that are not in a policy for this baseline.'] = 'Kiam ni efektivigas tiun bazlinion, ni devus kontroli erojn sur aparato kiuj ne estas en politiko por tiu bazlinio.';

$GLOBALS["lang"]['When we receive an open port, should we attempt to test for the version of the service currently running upon it? This assists in confirming actual running services.'] = 'Kiam ni Ricevas malferman hasnon; Testasin por la versio de la servo nuntempe kurante sur εi? Tio auttas en konfirmado de faktaj kurantaj servoj.';

$GLOBALS["lang"]['When you are using Clouds to discover your Amazon AWS instances, you will need two credential items - key and secret key. Your key should already be known to you and your secret key as well. Of note is that you cannot retrieve your secret key using the AWS Console provided by Amazon. If you have misplaced it, you will need to generate a new one.'] = 'Kiam vi uzas Nubojn por malkovri viajn Amazon AwS- kazojn, vi bezonos du grandajn erojn - calosilon kaj sekretan calosilon. Via calosilo brunces esti konata ankareal vi kaj via sekreta calosilo. De noto estas ke vi ne povas preni vian sekretan calosilon uzante la AWS Console disponigitán fare de Amazono. Se vi mismetis εin, vi bezonos generi novan.';

$GLOBALS["lang"]['When you are using Clouds to discover your Microsoft Azure instances, you will need four credential items - subscription id, tenant id, client id and client secret.'] = 'Kiam vi uzas Nubojn por malkovri viajn Microsoft Azure- kazojn, vi bezonos kvar grandajn erojn - abonidentiga...';

$GLOBALS["lang"]['When you create a discovery you have an option to devices_assigned_to_org. This means that any devices discovered for this discovery will be assigned (have <code>devices.org_id</code> set to) your chosen Organisation.'] = 'Kiam vi kreas malkovron, vi havas opcion al aparazitoj. Tio signfas ke <code>devices.org_id</code> La ektita organiso.';

$GLOBALS["lang"]['When you create a new discovery if you click the Advanced button, you have many more options to change, one of them being the type of discovery.Types have always been Subnet (encompassing the above range, subnet, ip options) and Active Directory. As at v4.1, Open-AudIT has a new discovery type called Seed.'] = 'Kiam vi kreas novan eltrova Tipoj Aktivan Adresaron. Kiel ';

$GLOBALS["lang"]['When you enable a Query to be run on a schedule, the query is emailed to your chosen address. You must have set up email via menu -> Admin -> Enterprise -> Email Config. We also have a <i>test email<i> button on that page. Input your details, save it and then test it. You should have a modal box that informs you if it successful or not and obviously a test email should arrive if it is successful. Once you have email configured, your scheduled query can be configured.<br><br>Provide a name, optional description, choose <i>Query</i> type, select the desired query, provide an email address, choose a format and set the schedule.<br><br>Provide an hour (hour only, no minutes as yet), give the task a name (this is not the name of the actual scheduled query itself), select which days you would like the query run, choose which query you would like run, supply an email address and choose a query format and you are done.<br>Queries will be sent with an email body of the query (in html format) and the query attached in the requested format.'] = 'Kiam vi ebligas Query esti prizorgita en horaro, la atendo estas retpo aprettigita al via elektita adreso. L \'entreprise - Retpo divonato Konfig. Ankañni hava ankalükeemia <i>Recidato testa repo<i> Butono sur tiu paεo. Mémoru viajn detalojn, savi εin kaj poste present n liukoinen. Vi devus havi modalan skatolon kiu informas vin se liquicipei sukcesa a skept ne kaj extenente testpoto devus alveni se εi estas sukcesa. Post kiam vi havas retpo claroton formita, via planita atendo povas esti formita.<br/><br/>Kondio, la septvola priskribo, elektas <i>Käry</i> Tipo, selektas la deziratan atendon, disponigas repo explatan adreson, elektas forman kaj metis la horaron.<br/><br/>Disponigi horon (horo nur, neniuj minutoj kiel ankora epäilty), donas al la tapo nomon (tio ne estas la nomo de la fakta planita atendo mem), selektas kiu tegojn vi шatus la atendokuron, elekti kiu vi griatus kuri, maksa retpo claroton kaj elekti formato que<br/>Päringud estos senditaj kun retpo agotadokorpo de la atendo (en formato html) kaj la atendo ligita en la petita forma.</i></i>';

$GLOBALS["lang"]['When you enter text into one of the column headings, you can simply use a normal word. For example, when you enter <code>computer</code> into the search box above the <i>Type</i> column, the search will return all devices with the type of Computer. Essentially, Open-AudIT requests data using a URL like <code>devices?devices.type=computer</code>. Now there is one significant difference when using the dataTables search, versus the standard'] = 'Kiam vi eniras tekston en unu el la kolumnotolij, vi povas simply uzi normalan vorton. Ekzample, kiam vi eniras <code>computer</code> En la ser organizadakesto super la <i>Tipo</i> La ser laamada de Komputico. Esence, OpenAud Ni petas datumojn uzante URL kieli <code>devices?devices.type=computer</code>. Nun eksistas unu indicfa diferenco dum uzado de la daten Taulukot- ser previstoo, kontra. La normo';

$GLOBALS["lang"]['where'] = 'Kie Kie Kie';

$GLOBALS["lang"]['Where'] = 'Kie Kie Kie';

$GLOBALS["lang"]['Where $x is a number. This many LDAP entries are in the DB and have been retrieved.'] = 'Kie x estas nombro. Tiuj multaj LDAP- kontribouj estas en la DB kaj estis prenitaj.';

$GLOBALS["lang"]['Where on the Device Details screen you would like to see this field appear.'] = 'Kie sur la Device Detaloj eksrano vi gritatus vidi tiun kaperas.';

$GLOBALS["lang"]['Where the rack is in the row.'] = 'Kie la rako estas en la vico.';

$GLOBALS["lang"]['Whether the vulnerability affects components beyond its own using Impact, Availability and Confidentiality.'] = ' imitau la vundebleco influenzas kompentojn preter sia propra uzante Impact, Disponibilidad kaj Konfidentsiaalsus.';

$GLOBALS["lang"]['Whether user interaction is required (None, Passive, Active).'] = 'Mezcla uzantintergado estas postulata (puudub, passiivne, Aktiva).';

$GLOBALS["lang"]['Which OS this benchmark applies to.'] = 'Kiu OS tiu kompanormo valideeerib por.';

$GLOBALS["lang"]['Which devices should Open-AudIT create from the external system (if any). Using All, None or a given Attribute.'] = 'Kiuj aparatoj devus Open- Audit krei de la ekstera sistemo (se entute). Uzante, neniu, epäilty Attributo.';

$GLOBALS["lang"]['Which network should we discover. This should be in the format of'] = 'Kiun reton ni devus malkovri. Tio devus esti en la forme de form';

$GLOBALS["lang"]['Which sub-menu should we display this query in.'] = 'Kiun sous- menü ni murens montri tiun atendon fr.';

$GLOBALS["lang"]['Who made this rack.'] = 'Kiu Faris tiun rakon.';

$GLOBALS["lang"]['Why Windows Server Only?'] = 'Kial Vindozo nur funkcias?';

$GLOBALS["lang"]['Why do we exclude this policy?'] = 'Kial ni ekskludas tiun politikon?';

$GLOBALS["lang"]['Wide Area Network'] = 'Larεa pirkonnavõrk';

$GLOBALS["lang"]['Wide area network'] = 'Largidaa areoreto';

$GLOBALS["lang"]['Widget'] = 'Vidina';

$GLOBALS["lang"]['Widget #'] = 'Número de Antalucita';

$GLOBALS["lang"]['Widget # '] = 'Número de Antalucita ';

$GLOBALS["lang"]['Widget Type'] = 'Vidina Tipo';

$GLOBALS["lang"]['widgets'] = 'Vivinad';

$GLOBALS["lang"]['Widgets'] = 'Vivinad';

$GLOBALS["lang"]['Widgets are designed to be used on Dashboards. Enterprise users have complete freedom to create, update and delete widgets as required.'] = 'Vidinad estas dizajnita por esti uzita sur Dashboard. Enterprise uzantoj havas komplettan decrecon por krei, liquidialisdatigi kaj forigi vidinad kiel postulat.';

$GLOBALS["lang"]['width'] = 'Laius';

$GLOBALS["lang"]['Width'] = 'Laius';

$GLOBALS["lang"]['windows'] = 'Fenestroj';

$GLOBALS["lang"]['Windows'] = 'Fenestroj';

$GLOBALS["lang"]['Windows Packages'] = 'Paquetes de Windows';

$GLOBALS["lang"]['Windows Test Script'] = 'Windowsi teszt';

$GLOBALS["lang"]['Windows User Work Unit #1'] = 'Windows Uzanta Laboratorion numero 1';

$GLOBALS["lang"]['Windows User Work Unit #2'] = 'Windows Uzanta Laboratorion numero 2';

$GLOBALS["lang"]['Windows may also have blocked the service from starting. On the target start the Windows Security applet and ensure the WinExeSvc executable is allowed to run (click Allow on Device and then Start Actions).'] = 'Fenestroj anka... Eble Blokis la servon de omencado. Sur la celo kokencas la Windows Security- mu divertaon kaj certigi la WinExeSvc- efektivigon estas permesita kuri (klako Salli laite kaj tiam Käynnistä toiminnot).';

$GLOBALS["lang"]['Winexe page on Samba'] = 'Vinkilopa pila sur Samba';

$GLOBALS["lang"]['Winexe requires the following Windows services to be started and running: netlogon and rpc services to be running.<br><br>Please log on to the target Windows machine and check the services for netlogon and rpc are running.'] = 'Vinkilo postulas la sekvajn Fenestrojn esti komencita kaj kurante: netalogaj kaj rpcservoj por esti kurantaj.<br/><br/>Bonvolu ensaluti al la celo Windows ma apretino kaj kontroli la servojn por netalogo kaj rpc kuris.';

$GLOBALS["lang"]['Winexe uses the admin$ and RPC (net service start) to install and start a remote service (winexesvc). This service initializes a named pipe that is used to transport commands from the Open-AudIT server to the target and the output in the reverse way. When finished, the named pipe closes and the winexesvc waits for more connections or uninstalls (depending of the options given).'] = 'Vinkilo uzas la admin $kaj RPC (tiskoomenco) por instali kaj komenci malpreksiman serven (winexesvc). Tiu servo initiogas nomitan pipon kiu kutimas transporti kommundojn de la Open- Audit- servilo εis la celo kaj la produkta.o la slite la dorsvojo. Kiam fini, la nomita pipo fermi fusionas kaj la vinksesvc atendas pli da ligoj a désinstallation afficial (riippuen de la opcioj donitaj).';

$GLOBALS["lang"]['Wireless Local Area Network'] = 'Senkarna kohtvõrk';

$GLOBALS["lang"]['With the 3.3.0 release of Open-AudIT we have introduced the concept of a Cluster. This intuitively maps to the idea of a web cluster, database cluster or file cluster (or one of several other purposes) into a given type (high availability, redundancy, scaling, etc).<br><br>Depending on the purpose of cluster chosen, the reporting will be slightly different.<br><br>For example, if you create a Cluster with a purpose of virtualisation, when you have added devices to it you will also see the virtual machines on those devices.'] = 'Kun la 3.3.0 liberigo de Open- Audit ni lan curvais la koncepton de Cluster. Tiu intuicie mapas al la ideo de interretreto, base de donnéesa sur un epäillyn dosierato (unu el pluraj alfaj celoj) en anta.fiksitan tipon (alta havebleco, redundo, skalado, ktp.).<br/><br/>Riippuu de la celo de areto ektita, la raportado estos iomete malsama.<br/><br/>Ekzample, se vi kreas Cluster kun celo de virtualigo, kiam vi aldonis aparatojn al εi vi ankavidos la virtualajn mainojn sur tiauj aparatoj.';

$GLOBALS["lang"]['With the introduction of the Clouds feature, you can supply details of your cloud, Amazon AWS or Microsoft Azure, and Open-AudIT will use the relevant API to retrieve a list of locations, networks, and instances, then discover each of these instances.'] = 'Kun la enkonduko de la Nuboj trado, vi povas maksa detalojn de via nubo, Amazon AWS a spective Azure, kaj Open- Audit uzos la medifan API por preni listan de lokoj, retoj, kaj kazoj, tiam malkovri Čiun el tiauj kazoj.';

$GLOBALS["lang"]['wmi_fails'] = 'Nurjub';

$GLOBALS["lang"]['Wmi Fails'] = 'Nurjub';

$GLOBALS["lang"]['wmi_timeout'] = 'Áramszünet';

$GLOBALS["lang"]['Wmi Timeout'] = 'Áramszünet';

$GLOBALS["lang"]['workgroup'] = 'Laborgrupo';

$GLOBALS["lang"]['Workgroup'] = 'Laborgrupo';

$GLOBALS["lang"]['Working Credentials'] = 'Crédenciales Laboranta';

$GLOBALS["lang"]['Wrap Up'] = '→ Eventoj:';

$GLOBALS["lang"]['Written in the PHP scripting language.'] = 'Sribite en la PHP sribanta lingvon.';

$GLOBALS["lang"]['XML'] = 'XML XML XML';

$GLOBALS["lang"]['Yellow Query'] = 'Liekki';

$GLOBALS["lang"]['Yemen'] = 'Jemeno';

$GLOBALS["lang"]['Yes'] = 'Jessus.';

$GLOBALS["lang"]['You are able to define extra directories to be scanned as entries in the Executables collection. When defined, the directory and all sub-directories are scanned for files that are executable. You can also define directories and files to be excluded. When activated, these are injected into the linux audit script and performed whenever it is run (usually as part of a discovery). If you want these in a script you can manually copy to the target, use menu -> Discover -> Scripts -> List Scripts and download the script from there.'] = 'Vi povas dfini ekstrajn adresarojn por esti skanitaj kiel kontribouj en la Exécutables kolekto. Se dieter, la adresaro kaj † iuj sub- direktoj estas skanitaj por dosieroj kiuj estasvi efektigeblaj. V i ankai povas difini adresarojn kaj dosierojn esti ekskluditaj. Se aktivitite, tiaj estas injektitaj en la lin guidrevizian asseskripton kaj rezultis kiam ajn εi estas prizorgita (kutime kiel parto de eltrova.o). Se vi deziras tiujn en manikripto vi povas mane kopii al la celo, uzi menoon - Malkovru - título Lista Scripts kaj el sortutas la sarcripton de lie.';

$GLOBALS["lang"]['You are always free to modify the audit scripts themselves to suit your specific requirements. You will need to (re)incorporate those changes whenever you upgrade as they will be overwritten by the default scripts. I would suggest saving a master copy of your modified script, upgrading Open-AudIT, then running a diff between the new default script and your modified script and applying the differences. The audit scripts are native scripts (Windows is VBScript, all others are Bash). Simple and easy to modify - just make sure to have a copy of your changes before you upgrade.'] = 'Vi L \'utility de l\' énergie nucléaire dans l \'industrie de l\' électriité et de l \'électriité n\' est pas considérée comme un problème. Mi remomendas рpari majstran kopion de via modifita manikripto, εisdatigante Open- Audit, tiam kurante Fosaon inter la nova deva... La reviziomanuskriptoj estas indiilibleenaj manikript (Windows estas VBScript, Simpla kaj) por modifi - nur ceregu havi kopion de viaj рan pilaoj anta. Le taux d \'activité de l\' industrie de l \'Union européenne est passé de 2% à 2%.';

$GLOBALS["lang"]['You are running version'] = 'Vi kuras versio';

$GLOBALS["lang"]['You can access the collection using the normal Open-AudIT JSON based API. Just like any other collection. Please see'] = 'Vi povas aliri la kolekton uzante la normalan Open- Audit JSON bazigis API. El mismo kiel, teise nimega kolekto. Bonvolu vidi';

$GLOBALS["lang"]['You can also'] = 'Anka jättidavus vi povas';

$GLOBALS["lang"]['You can also see at the bottom of the page a table showing the devices the changes will be applied to.'] = 'Vi ankara pos vidi Čevae la fondo de la pa. o tablon montrantan la aparatojn kiujn la яарином oj estos aplikitaj al.';

$GLOBALS["lang"]['You can also specify properties using the below format.'] = '- Oui. Le rapport de la Commission sur l \'état de l\' environnement et de la santé dans la Communauté européenne, établi par le Conseil européen de Lisbonne, a été publié au Journal officiel de l \'Union européenne.';

$GLOBALS["lang"]['You can always run the Firstwave VM on your virtual infrastructure (ESX, Azure, et al). The Firstwave VM runs Debian linux and is free from OS licensing concerns and limitations. Or install on your own Linux distro of choice. We support Redhat 9, Ubuntu 20.04, 22.04 and 24.04 as well as Debian 11 and 12.'] = 'Vi La Firstwave VM prizorgas Debian lin A. instali sur kautta propra Linukso- distro de elekto. Ni apogas Redhat 9, Ubuntu 20.04, 22.04 kaj 24.04 el mismo kiel Debian 11 kaj 12.';

$GLOBALS["lang"]['You can assign devices to a location automatically using'] = 'Vio povas asigni aparatojn al loko a limittomate uzante';

$GLOBALS["lang"]['You can assign devices using custom'] = 'Vi povas asigni aparatojn uzante kutimon';

$GLOBALS["lang"]['You can audit a remote machine without the using the actual Administrator account by creating a registry key. Create the below key on every machine to be audited and make sure the user credentials used is a member of the Administrators group.'] = 'Vi povas revizii maltraksiman ma diversainon sen la uzado de la fakta Administramento -kon kreante registro divertalosilon. Kreu la sub felosilon sur ';

$GLOBALS["lang"]['You can certainly run a discovery without any valid credentials on the devices within the network, however, the information retrieved will be a very small subset of what Open-AudIT has the ability to retrieve <i>with</i> credentials.'] = 'Vi povas certe kuri eltrova <i>Kun</i> Akeditaoj.';

$GLOBALS["lang"]['You can create a baseline, run it against a group of devices and view the results, add scheduled execution, add more tables for comparison (currently only software, netstat ports and users are enabled), in place baseline editing, archiving of results and more.'] = 'Vi povas krei bazlinion, prizorgi εin kontrazorgi grupo de paratoj kaj rigardi la rezultojn, aldoni planitan ekzekuton, aldoni pli da tabloj por komparo (nuntempe nur softvaro, retstat havenoj kaj uzantoj estas ebligitaj), punane repliirkij';

$GLOBALS["lang"]['You can create a script with all the options for any of the existing audit scripts - not just Windows. AIX, ESX, Linux, OSX and Windows are all covered.'] = 'Vi povas krei maniskripton kun AIX, ESX, Linukso, OSX kaj Fenestroj estas...';

$GLOBALS["lang"]['You can customize the entire integration down to which system (NMIS or Open-AudIT) is the authority on a per field basis. There are options to create and/or update devices in Open-AudIT or NMIS. Should we run a discovery on a created or updated device and so much more. There are explanations for each item on the right side of the page.'] = 'Vi povas personecigi la tuta integriεo malsupren al kiu sistemo (NMIS epäilty Open- Audit) est la guidtoritato sur per kampumbazo. Eksistas opcioj krei kaj / aña... Se ni havas eltrova Ekzistas klarigoj por...';

$GLOBALS["lang"]['You can define an application and associate a device to this application. A device may be associated to more than one application. An application may be associated to more than one device.'] = 'Vio povas difini aplika... on kaj asocii aparaton al... i tiu aplika... Aparato povas esti asociita kun pli ol unu aplika. Apliko povas esti asosiita al pli ol unu aparatito.';

$GLOBALS["lang"]['You can edit the value of the Additional Field for each individual device on the device details page. View the device details screen, open the section containing the field and (if you have'] = 'Vi povas redakki la valoron de la additional Field por Vidu la aparaton detalekrano, malfermas la sekcion enhavantan la kampon kaj (se vi havas)';

$GLOBALS["lang"]['You can limit the Device Seed Discovery to fall within a strict set of parameters, including: <i>Restrict to Subnet</i> and <i>Restrict to Private</i>'] = 'Vi povas limigi la Device Seed Discovery por fali ene de strikta aro de parametroj, inkluzive de: <i>Restrikko al Subnet</i> Kaj <i>Restrikto al privata</i>';

$GLOBALS["lang"]['You can manually assign devices using'] = 'Vi povas mane asigni';

$GLOBALS["lang"]['You can override this by providing the format option in the URL.'] = 'Vi povas superregement disponigante la formatelekton en la URL.';

$GLOBALS["lang"]['You can select individual devices by clicking their check-boxes on the right side or selecting all devices clicking the checkbox on the top right of the table (underneath the Edit button that looks like a pencil).'] = 'Vi povas selekti indifuajn aparatojn klante iliajn kontrokestojn sur la dekstra silato a scepticus selektante ';

$GLOBALS["lang"]['You can select the devices to be integrated by choosing any attribute in the system (device) table and matching (see menu → Admin → Database → List Tables → system for a list of fields). An attribute match can only match a single value.'] = 'Vi povas selekti la aparatojn por esti integritaj elektante ajnan atplicon en la sistemo (seade) todlo kaj egala (vidu menoon → Admin → Datumbazo → Lista Tablas → sistemo por lista de kampraj. Attributmat círculo povas nur egali unuran Valon.';

$GLOBALS["lang"]['You can turn any server into a collector by going to menu -> Admin -> Collectors -> Make this install a Collector. You will need credentials to log on to the server this install will report in to.'] = 'Vi povas tourni ajnan servilon en kolektanton irante al menuo - Admin - confessional kolektantoj - confessional Faru Governi tiun instalin kolektanton. Vi bezonos akredita... ojn por ensaluiti al la servilo.';

$GLOBALS["lang"]['You can view by clicking on the blue view icon. You can also edit or delete if you have permissions.'] = 'Vi povas vidi per klakado sur la blua vido ikono. Vi povas reakti épäilty forigi se vi havas permeson.';

$GLOBALS["lang"]['You do not have the PHP MBString extension installed. This extension is required.'] = 'Vi ne havas la PHP MBSpring- etenda. Tiu etendaoo estos postulata.';

$GLOBALS["lang"]['You do not have the PHP SNMP extension installed. This extension is highly recommended.'] = 'L \'objectif de cette initiative est d\' améliorer la qualité de l \'information et de la communication. Tiu etendaoo estas tre remomendinda.';

$GLOBALS["lang"]['You may want to copy and paste this URL in an email to your staff.'] = 'Vi povas deziri kopii kaj pasi tiun URL en retpo apretto al via stato.';

$GLOBALS["lang"]['You may wish to have Active Directory or OpenLDAP authenticate your users, but not provide authorization. To do this, make sure <i>Use for Authentication</i> is set to Y and <i>Use for Roles</i> is set to N. The credentials will be validated by LDAP, but you will need to have the user already created and assigned Roles in Open-AudIT. This also <i>automatically</i> applies to'] = 'Vi povas deziri havi Aktivan Adresaron sur kaptlus OpenLDAP a skeptigi viajn uzantojn, sed ne disponigi apschon. Por farition, certigu <i>Uzo por Autentimiini</i> estas metita al Y kaj <i>Uzo por roloj</i> Estas metita al N. La akredita.oj estos konfirmitaj fare de LDAP, sed vi bezonos havi la uzanton jam kreita kaj asignis Rolojn en Open- Audit. Anka <i>a kaptlus, et kaptlustatakse</i> aplikaaatti';

$GLOBALS["lang"]['You might have noticed these match rules are for items that might not be globally unique. Some examples:'] = 'Vi eble rimarkis ke tiaj maduraoreguloj estas por eroj kiuj eble ne estas tutmonde unikaj. Kelkaj eczempoj:';

$GLOBALS["lang"]['You must delete your existing license before adding a new license.'] = 'Vi murtaa forigi vian ekzistanan permesilon anna... Aldoni novan permesilon.';

$GLOBALS["lang"]['You must have working SSH credentials to execute a benchmark. The following Operating Systems are currently supported: Centos 7, Debian 12, Redhat 7, Redhat 8, Redhat 9, SLES 15, Ubuntu 20.04, Ubuntu 22.04. We plan to expand on these with further releases.'] = 'Labouri SSH-akredita.ojn por efektivigi kombarnormon. La sekvaj Operation Systems estas nuntempe apogitaj: Centoj 7, Debian 12, Redhat 7, Redhat 8, Redhat 9, SLES 15, Ubuntu 20.04, Ubuntu 22.04. Ni planas desententilibrai sur tiuj kun plij eldonoj.';

$GLOBALS["lang"]['You should copy and paste the entire file into the textbox. In the case below, copy ALL the text.'] = 'Vi devus kopii kaj pasi la tutan dosieron en la tekstujon. En la kazo malsupre, kopii la tutan tekston.';

$GLOBALS["lang"]['You should not include the edited_by and edited_date fields. These will be automatically set.'] = 'Vi ne devus inkludi la redaktitan _ by- kaj redaktis _ datajn kampampjn. Tiuj ottaa vastaan epäillyn.';

$GLOBALS["lang"]['You should only change the second sentence of text, the'] = 'L \'évolution de l\' emploi dans la Communauté européenne';

$GLOBALS["lang"]['You should substitute the required column (eg, org_id) for ATTRIBUTE_NAME.'] = 'L \'auteur de l\' avis est M. Vi devus anstatalucigi la postulatan kolononon (ekz., org _ id) por ATTRIBUTE _ NIMETUS.';

$GLOBALS["lang"]['You should use a header line containing the names of the columns you wish to populate, then your data lines below that.'] = 'Vi devus uzi kapolinion enhavantan la nomojn de la kolonoj vi deziras popularigi, tiam viaj datenlinioj subtio.';

$GLOBALS["lang"]['You should use only those tables that contain attributes you need. I usually use a left join. For example'] = 'Devus uzi nur tiujn tabelojn kiuj enhavas atentojn vi bezonas. Mi kutime uzas maldekstran ali liquidon. Ekzample';

$GLOBALS["lang"]['You will need a'] = 'Vi bezonos';

$GLOBALS["lang"]['You will need the ports for WMI on the Windows firewall opened on each target Windows computer. For Windows Core servers, ensure you allow the firewall connections as per'] = 'Vi bezonos la havenojn por WMI sur la Fenestra fajromuro malfermita sur Por Vindozo Kernaj serviloj, certigu, ke vi permesas al fajromuraj ligoj kiel per';

$GLOBALS["lang"]['You will see a list of'] = 'Liste des vidéos';

$GLOBALS["lang"]['YouTube Tutorials'] = 'Tutoriels de YouTube';

$GLOBALS["lang"]['Your AWS EC2 API key.'] = 'Via AWS EC2 API Galosilo.';

$GLOBALS["lang"]['Your Google Compute credentials as JSON.'] = 'Google Compute akredita...';

$GLOBALS["lang"]['Your Host is'] = 'Via Gastiganto estas';

$GLOBALS["lang"]['Your Licenses'] = 'C \'est la première fois que l\' on parle de la';

$GLOBALS["lang"]['Your Microsoft Azure Client ID.'] = 'Microsoft Azure Kliendi.';

$GLOBALS["lang"]['Your Microsoft Azure Client Secret.'] = 'Microsoft Azure Kliento Secreto.';

$GLOBALS["lang"]['Your Microsoft Azure Subscription ID.'] = 'ID de suscripción de Microsoft Azure.';

$GLOBALS["lang"]['Your Microsoft Azure Tennant ID.'] = 'Microsoft Azure Tennant.';

$GLOBALS["lang"]['Your PHP version is'] = 'Par PHP versio estas';

$GLOBALS["lang"]['Your SQL to select attributes that will populate this query.'] = 'Via SQL por selekki ategortojn kiuj popularigos tiun atendon.';

$GLOBALS["lang"]['Your SQL to select devices that will populate this group.'] = 'Via SQL por selekki aparatojn kiuj popularigos tiun grupon.';

$GLOBALS["lang"]['Your SSH key.'] = 'SSH grilosilo kaudu.';

$GLOBALS["lang"]['Your access credentials, as per that clouds native API.'] = 'Via aliro akredita... oj, kiel per tiuj nuboj indilibleenaj API.';

$GLOBALS["lang"]['Your data is your data. You can extract it any time you like. We even helpfully provide exports to CSV, JSON and XML. And we have a JSON API. And you can write custom reports and have those output in CSV, XML, and JSON! Again, it is your data - not anyone else. You can be confident that the security of your data is in your hands.'] = 'Viaj datumoj estas viaj datumoj. Je ne sais pas. Il s \'agit de dispositions utiles telles que eksportojn al CSV, JSON kaj XML. API Ni Havas Json. C\' est ce qu \'on appelle "Kaj vi povas skribi kutimo raportoj kaj havi tiujn produkta"... ojn en CSV, XML, kaj JSON! Denove, εi estas via datumo - ne u alias. Vi povas esti certa, ke la sekureco de viaj datumoj estas en viaj manoj.';

$GLOBALS["lang"]['Your database platform is'] = 'Via datumbazo platformo estas';

$GLOBALS["lang"]['Your description of the status of this connection (provisioned, retired, etc).'] = 'Via priskribo de la stato de tiu ligo (anta.vidita, demisis, ktp).';

$GLOBALS["lang"]['Your description of this item.'] = 'Par priskribo de ';

$GLOBALS["lang"]['Your generic name for this piece of software'] = 'Via nomo por I tiu peco de programmaro';

$GLOBALS["lang"]['Your generic version for this piece of software'] = 'Via εenerala versio por Či tiu peco de programmearo';

$GLOBALS["lang"]['Your user should now be able to logon by clicking the <i>Logon with Entra</i> button on the Open-AudIT logon page. As mentioned above, if the logon fails, please check the logfile and verify the users <i>preferred username</i>.<br><br>And that should be all there is too it. Now your users should have one less set of credentials to remember!<br><br>As always, if you have troubles with this feature, please email'] = 'Via uzanto apáca povas logo klaki la <i>Kun Logon Entra</i> Butono sur la Open- Audit - tunnuksenoplasiao. Kiel menciite supre, se la logo malsukcesas, bonvolu kontroli la tagdosieron kaj konfirmi la uzantojn <i>Préfiereasa uzantnomo</i>.<br/><br/>Kaj tio devus esti. Nun viaj uzantoj devus havi unu malpli aron de akredita... oj por memori!<br/><br/>Kiel klaram, se vi havas problemojn kun ';

$GLOBALS["lang"]['Your user should now be able to logon by clicking the <i>Logon with OKTA</i> button on the Open-AudIT logon page. As mentioned above, if the logon fails, please check the logfile and verify the users <i>name</i>.<br><br>And that should be all there is too it. Now your users should have one less set of credentials to remember!<br><br>As always, if you have troubles with this feature, please email'] = 'Via uzanto apáca povas logo klaki la <i>Logon kun OKTA</i> Butono sur la Open- Audit - tunnuksenoplasiao. Kiel menciite supre, se la logo malsukcesas, bonvolu kontroli la tagdosieron kaj konfirmi la uzantojn <i>nomo</i>.<br/><br/>Kaj tio devus esti. Nun viaj uzantoj devus havi unu malpli aron de akredita... oj por memori!<br/><br/>Kiel klaram, se vi havas problemojn kun ';

$GLOBALS["lang"]['Your web server is'] = 'Via retejo servilo estas';

$GLOBALS["lang"]['Zambia'] = 'Zambio';

$GLOBALS["lang"]['Zimbabwe'] = 'Zimovo Zimovo';

$GLOBALS["lang"]['a String'] = 'Kordo';

$GLOBALS["lang"]['active'] = 'Aktiva aktiva aktiva';

$GLOBALS["lang"]['active directory'] = 'Aktiva direktoro';

$GLOBALS["lang"]['active/active'] = 'amount in units (real)';

$GLOBALS["lang"]['active/passive'] = 'Aktiva / pasiva';

$GLOBALS["lang"]['advertisement'] = 'REKLAMO';

$GLOBALS["lang"]['alert'] = 'atentaat';

$GLOBALS["lang"]['all'] = 'Čiuj';

$GLOBALS["lang"]['allocated'] = 'Situo';

$GLOBALS["lang"]['amazon'] = 'Amazono';

$GLOBALS["lang"]['an Integer'] = 'Täisarvu';

$GLOBALS["lang"]['and'] = 'Kaj';

$GLOBALS["lang"]['and / or'] = '/';

$GLOBALS["lang"]['and a support ticket will be created and actioned.'] = 'Kaj helpbileto estes kreita kaj farita.';

$GLOBALS["lang"]['and another'] = 'Kaj, alias';

$GLOBALS["lang"]['and download the Latest Release self-installer. You may need to scroll down the page to find it.'] = 'Kaj el sortu la Lasto- Liberigan memperemiston. Vio povas devi ruligi la pa';

$GLOBALS["lang"]['and go to Applications -> Enterprise Applications (far left menu), then click <i>New application</i>.'] = 'Kaj iru al Aplikoj - Propiedad Aplicaciones (menü maldekstro demalproduksima), tiam klakas <i>Nouvelle aplika</i>.';

$GLOBALS["lang"]['and it\\'] = 'kaj εi estas';

$GLOBALS["lang"]['and looks for a warranty expiration date prior to today.'] = 'Por dio en la Korran (Alaho), vidu Alahon de Zeki Saritoprak, lk.';

$GLOBALS["lang"]['and review what is possible.'] = 'Revizii kio eblas.';

$GLOBALS["lang"]['and the Sign-out redirect URI being'] = 'kaj la signo- eliro redirektas URI estantan';

$GLOBALS["lang"]['and the final lines will likely be of most interest. These lines should give you the exact point at which the login failed.'] = 'La finaj linioj ver sortajne estos de plei multe de la intereso. Tiuj linioj devus doni al vi la prezan punkton Malsukcesis.';

$GLOBALS["lang"]['antivirus'] = 'Internet';

$GLOBALS["lang"]['application'] = 'Aplika...';

$GLOBALS["lang"]['approved'] = 'aprobita';

$GLOBALS["lang"]['are required.'] = 'Este postulataj.';

$GLOBALS["lang"]['are used.'] = 'Estas uzata.';

$GLOBALS["lang"]['as a device responding on this port.<br>This has caused some customers issues where firewalls respond on behalf of a non-existing device, and hence cause false positive device detection. We now have this attribute available to set per scan.'] = 'Kiel aparato reaganta al tiu hasno.<br/>Tio kazis kelkajn klienttemojn kie fajromuroj respontas nome de neekzistanta aparato, kaj tie karegalveran pozitivan aparatodekton. Ni nun havas tiun attributon have bla al aro per skanado.';

$GLOBALS["lang"]['as the reference point and filters out all virtual machines via a check of the system.serial field for VM.'] = 'Kiel la referencopunkto kaj infiltas Čiujn virtualajn ma apretinojn per controlo de la sistemo. Seria kampo por VM.';

$GLOBALS["lang"]['assuming working and client populated DNS'] = 'Supozante lapi kaj kliento lo quicalis DNS';

$GLOBALS["lang"]['attribute'] = 'Hozzájárulás';

$GLOBALS["lang"]['auto'] = 'kaptlustusz';

$GLOBALS["lang"]['backup'] = 'Malanta épäilee Dorsoa';

$GLOBALS["lang"]['banned'] = 'malpermesata';

$GLOBALS["lang"]['blog'] = 'Blogo blogi blogi blogi blogi blogi';

$GLOBALS["lang"]['blue'] = 'Blua bleu';

$GLOBALS["lang"]['bottom'] = 'Fondos';

$GLOBALS["lang"]['building'] = 'Le président';

$GLOBALS["lang"]['can be used for user authentication (is the users name and password correct) as well as user authorization (what roles and orgs does a user have).<br><br>If a user is not in the configured LDAP but is in Open-AudIT (eg: the <i>admin</i> user), Open-AudIT will fallback to using itself for both authentication and authorization.<br><br>Open-AudIT uses specific LDAP groups for roles and orgs. A user must be a direct member of these group(s) in order for Open-AudIT to determine that users access.<br><br>When configured correctly, LDAP use can completely remove the need to create users in Open-AudIT. Simply configure Open-AudIT to use LDAP for both authentication and authorization. If the user does not exist in Open-AudIT but does exist in LDAP and their credentials are correct and they are a member of the required groups Open-AudIT will create the user account automatically.'] = 'ozita por uzanta<br/><br/>Se uzanto ne estas en la formita LDAP sed estas en Open- Audit (ekz). <i>Salé</i> Uzanto, Open- Audit- falos por uzi sin por kaj konfirmo kaj apro.<br/><br/>Open- Aud uzanto brunces esti rekta membro de tiuj grupo (j) por Open- AudIT por determini ke uzantoj aliras.<br/><br/>Kiam formita εuste, LDAP- uzo povas tute forigi la bezonon krei uzantojn en Open- Audit. Lihtne agordi Open- Audit por uzi LDAP por kaj konfirmo kaj approbo. Se la uzanto ne ekzistas en Open- Audit sed ekzistas en LDAP kaj iliaj akredita. Oj estas εustaj kaj ili estas membro de la postulataj grupoj Open- Audit kreos la uzantkonton katlusalune.';

$GLOBALS["lang"]['can now retrieve details about a file or directory of files and monitor these files for changes as per other attributes in the Open-AudIT database. This feature works out of the box for Linux Open-AudIT servers, but needs a change to the service account name under a Windows Open-AudIT server. Supported clients are Windows and Linux.'] = 'Nun povas preni detalojn pri dosiero a resaro de dosieroj kaj monitori tiujn dosierojn por рan Tiu trajto laboras el la kesto por Linukso Open- Audit- serviloj, sed bezonas ð аkorúak иваниминълAL la serkokonomo sub Windows Open- Audit- servilo. Subtenitaj kliventoj estas Fenestroj kaj Linukso.';

$GLOBALS["lang"]['changed'] = 'Nom de famille';

$GLOBALS["lang"]['chosen. From there if a port for WMI, SSH or SNMP is detected responding the device is further queried using '] = 'Elektita. De tie se hasno por WMI, SSH epäilty SNMP estas detektita responvente la aparaton estas plu souveraineandita uzante ';

$GLOBALS["lang"]['cloud'] = 'Nubo';

$GLOBALS["lang"]['code'] = 'Kodokodo';

$GLOBALS["lang"]['collections and details pages is an icon to execute.'] = 'Kolektaj kaj detaloj paεoj estasikono por efektivigi.';

$GLOBALS["lang"]['collector'] = 'koléktanto';

$GLOBALS["lang"]['collectors'] = 'Kolektantoj';

$GLOBALS["lang"]['column'] = 'Kolono';

$GLOBALS["lang"]['column will contain either <i>y</i> or <i>n</i>. This indicates if this row is currently present on the device. For example software may be installed (which would result in <i>software.current = y</i>), but on a subsequent audit it may not be detected. Open-AudIT will then change this rows current attribute to <i>n</i>.'] = 'La kolumno tekitab kaplust <i>Oui.</i> a <i>n</i>. Tio indikas se tiu vico clareestas nuntempe sur la aparato. Ekszárp, softvaro povas et secretita (kiu rezultivus en) <i>Komputio = y</i>Sed sur posta revizio εi ne povas esti detektita. OpenAudit tiam рan pilaos tiun vicojn aktualan attribution al <i>n</i>.';

$GLOBALS["lang"]['column. The'] = 'Kolono. La';

$GLOBALS["lang"]['compute'] = 'Komputufo';

$GLOBALS["lang"]['config'] = 'Öntöttvas';

$GLOBALS["lang"]['console'] = 'Konzolo';

$GLOBALS["lang"]['contains'] = 'enhava';

$GLOBALS["lang"]['create'] = 'krei';

$GLOBALS["lang"]['created'] = 'kreita';

$GLOBALS["lang"]['credentials'] = 'Akredita';

$GLOBALS["lang"]['critical'] = 'Kritika';

$GLOBALS["lang"]['cve'] = 'Č.';

$GLOBALS["lang"]['database'] = 'datumbatso';

$GLOBALS["lang"]['debug'] = 'Silumiste';

$GLOBALS["lang"]['delegated'] = 'Délégita';

$GLOBALS["lang"]['delete'] = 'Origu forigi';

$GLOBALS["lang"]['deleted'] = 'forigita';

$GLOBALS["lang"]['denied'] = 'roidi';

$GLOBALS["lang"]['details'] = 'Detaloj pri detaloj';

$GLOBALS["lang"]['devices'] = 'Paratoj';

$GLOBALS["lang"]['digitalocean'] = 'cifèreca oceano';

$GLOBALS["lang"]['discoveries'] = 'Malkovroj';

$GLOBALS["lang"]['documentation for further details.'] = 'Dokumentaro por plij detaloj.';

$GLOBALS["lang"]['does <strong>not</strong> provide vulnerability reports for the following'] = 'de loin <strong>Oui.</strong> Provizas volunblecojn raportojn por la sekvanta';

$GLOBALS["lang"]['does not equal'] = 'unit description in lists';

$GLOBALS["lang"]['emergency'] = 'urliblea krizo';

$GLOBALS["lang"]['entra'] = 'Entrada';

$GLOBALS["lang"]['equals'] = 'Egalaj';

$GLOBALS["lang"]['error'] = 'Eraro';

$GLOBALS["lang"]['established'] = 'Establita';

$GLOBALS["lang"]['excluded'] = 'ekskluditaj';

$GLOBALS["lang"]['expired'] = 'eksvalidi pilais eksvalidi';

$GLOBALS["lang"]['extreme - Without which, the organisation would fail.

very high - Functions that are essential for the organisations survival and must be restored immediately.

high - Important functions that should be restored quickly but may have a slightly longer recovery time.

medium - Functions that are necessary but can tolerate longer downtime.

low - Non-essential functions that can be delayed without significant impact.

unassigned - The default until set.'] = '- Senio, la organiza...

Tre altaj - funkcioj kiuj estas esencaj por la organisoj supervivo kaj brunces et reestigitaj tuj.

Gravaj funkcioj kiuj devus esti reestigitaj rache sed povas havi iomete pli longan normaligtempon.

Funkcioj kiuj estas necessaj sed povas toleri pli lowe.

Ne- sencaj funkcioj kiuj povas esti prekrasttaj sen medifa efiko.

La deha epäilee lto εis aro.';

$GLOBALS["lang"]['fail'] = 'malsukcesas';

$GLOBALS["lang"]['false'] = 'Falsaj';

$GLOBALS["lang"]['file'] = 'Dosiero';

$GLOBALS["lang"]['firewall'] = 'Fajromuro';

$GLOBALS["lang"]['first'] = 'Unia unua';

$GLOBALS["lang"]['fixed'] = 'Fiksita';

$GLOBALS["lang"]['floor'] = 'Planko';

$GLOBALS["lang"]['for'] = 'öntés';

$GLOBALS["lang"]['for authentication'] = 'Por konfirmo';

$GLOBALS["lang"]['for this information.'] = 'C \'est un informateur.';

$GLOBALS["lang"]['from Audit Script Result'] = 'Resultado del script de auditoría';

$GLOBALS["lang"]['from NMIS'] = 'NMIS';

$GLOBALS["lang"]['from address LocalHost (Using LRPC) running in the application container'] = 'de adreso LocalHost (LRPC kasutamiini) kuranta en la aplikiujo';

$GLOBALS["lang"]['front'] = 'Anta';

$GLOBALS["lang"]['front-left'] = 'Anta.-maldekstra.';

$GLOBALS["lang"]['front-right'] = 'Anta';

$GLOBALS["lang"]['github'] = 'Gitub';

$GLOBALS["lang"]['google'] = 'Google Google \'i Google';

$GLOBALS["lang"]['greater or equals'] = 'Pli grandaj a kahtlus egalaj';

$GLOBALS["lang"]['greater than'] = 'unit description in lists';

$GLOBALS["lang"]['group'] = 'Grupo de grupo';

$GLOBALS["lang"]['has not been set'] = 'ne estis metita';

$GLOBALS["lang"]['have a working reverse DNS resolvable IP to the target Windows PC.'] = 'havas laboron inversa DNS- solvebla IP al celo PC Windows.';

$GLOBALS["lang"]['have the ability to be executed. On the'] = 'Havas la kapablon esti efektivitita. Sur la';

$GLOBALS["lang"]['head'] = 'Kapo';

$GLOBALS["lang"]['here'] = 'Отели ва';

$GLOBALS["lang"]['high availability'] = 'Alta Hasbleco';

$GLOBALS["lang"]['howto'] = 'Kieli';

$GLOBALS["lang"]['if you clone a Linux virtual machine, unless you manually regenerate this (and in my experience, people do not) it will remain the same.'] = 'Se vi klonas Linukso virtuala ma apretino, se vi mane regenrastion (kaj en mia sperto, hooj ne) εi retos la sama.';

$GLOBALS["lang"]['ignored'] = 'li e';

$GLOBALS["lang"]['import the example device data'] = 'Importado de la eszemploy- aparato datenoj';

$GLOBALS["lang"]['in'] = 'en la';

$GLOBALS["lang"]['in Enterprise.'] = 'Chez Enterprise.';

$GLOBALS["lang"]['in Inputs can have the following values.'] = 'Inputoj povas havi la sekvajn Valojn.';

$GLOBALS["lang"]['in Outputs can have the following values.'] = 'En Outputs povas havi la sekvajn Valojn.';

$GLOBALS["lang"]['inactive'] = 'Neaktiva';

$GLOBALS["lang"]['incomplete'] = 'Nekompleta';

$GLOBALS["lang"]['info'] = 'Tájékoztatás';

$GLOBALS["lang"]['installer will test for the presence of Nmap in its standard install locations of'] = 'instalilo tetos por la ';

$GLOBALS["lang"]['int, text, bool (y/n), etc'] = 'Int, teksto, bool (jah / ei), ktp';

$GLOBALS["lang"]['is U.S. standard maintained by National Institute of Standards and Technology'] = 'L \'Institut national des normes (Nacia Instituto de Normoj)';

$GLOBALS["lang"]['is an international standard for managing information security. It provides a framework for establishing, implementing, maintaining, and continually improving an Information Security Management System (ISMS).'] = 'estas internationalcia normo por properrado de informasekureco. ';

$GLOBALS["lang"]['is based upon'] = 'estas bazita sur';

$GLOBALS["lang"]['is licensed to'] = 'estas licencita al';

$GLOBALS["lang"]['is next on the list and Open-AudIT can use password and key authentication. Open-AudIT can also use a sudo enabled user as opposed to the root use directly (although it can also use root). For best results, the root user or a sudo enabled user should be used (see Auditing Linux without root and Target Client Configuration on the wiki). Windows devices can also run ssh, however if Open-AudIT detects this it will stop the SSH queries and instead use WMI (assuming working WMI credentials).'] = 'La lista kaj Open- Aud Uzi pasvorton kaj esencan konfirmon. Audit ouvert anka Por plej bonaj rezultoj, la radika uzanto a plonliquido rajtigis uzanton devus esti uzitaj (vidu Auditing Linukson sen radiko kaj Target Client Configuration sur la Vikio). Fenestroj Anka';

$GLOBALS["lang"]['is the link to the'] = 'Estas la ligilo al la';

$GLOBALS["lang"]['item to view the specific tables and their columns. This will enable you to find exactly what you need, rather than trawling through the MySQL console of the schema creation script.'] = 'Viddu la specifajn tablojn kaj iliajn kolonojn. Tio ravitigos vin trovi precize kion vi bezonas, mieluummin ol travintri tra la MySQL- konzolo de la skemokrea manikripto.';

$GLOBALS["lang"]['key required to retrieve lat/long and display map. See'] = 'Vallosilo postulata por preni lat / longan kaj ekranmapon. Vitume';

$GLOBALS["lang"]['left'] = 'Maldekstre';

$GLOBALS["lang"]['less or equals'] = 'Malpli kahtlus egalaj';

$GLOBALS["lang"]['less than'] = 'Les maladies';

$GLOBALS["lang"]['license'] = 'engedély';

$GLOBALS["lang"]['licenses'] = 'licencoj';

$GLOBALS["lang"]['like'] = 'kiel plagia kiel';

$GLOBALS["lang"]['line'] = 'Liniolinio';

$GLOBALS["lang"]['list'] = 'Liste de Liste';

$GLOBALS["lang"]['list View, using the Create button'] = 'Vido, uzante la Krei butonon';

$GLOBALS["lang"]['load balancing'] = 'ekvilibrigo';

$GLOBALS["lang"]['location'] = 'Loko';

$GLOBALS["lang"]['locations'] = 'Lokoj';

$GLOBALS["lang"]['managed'] = 'adminisztrációs';

$GLOBALS["lang"]['methods'] = 'métadoj';

$GLOBALS["lang"]['microsoft'] = 'Mikrosoftmo';

$GLOBALS["lang"]['mount point'] = 'Montopunkki';

$GLOBALS["lang"]['must'] = 'Dévas';

$GLOBALS["lang"]['network'] = 'reto';

$GLOBALS["lang"]['news'] = 'Nouvelle.';

$GLOBALS["lang"]['no'] = 'Neniu';

$GLOBALS["lang"]['node'] = 'Neniu';

$GLOBALS["lang"]['none'] = 'Neniu';

$GLOBALS["lang"]['normal'] = 'normaln';

$GLOBALS["lang"]['not applicable'] = 'Nezebla Nom de la ville (facultatif, sans doute pas besoin de traduction)';

$GLOBALS["lang"]['not in'] = 'ne en';

$GLOBALS["lang"]['not like'] = 'griaták';

$GLOBALS["lang"]['notice'] = 'Rimarko';

$GLOBALS["lang"]['notification'] = 'Neificación';

$GLOBALS["lang"]['okta'] = 'Okta';

$GLOBALS["lang"]['on devices where'] = 'sur aparatoj';

$GLOBALS["lang"]['openldap'] = 'malfermado';

$GLOBALS["lang"]['optimized'] = 'Elektita';

$GLOBALS["lang"]['optionally '] = 'La Specidvola ';

$GLOBALS["lang"]['or'] = 'a';

$GLOBALS["lang"]['or the GitHub page at'] = 'a la GitHub-pacienteo Tšehi';

$GLOBALS["lang"]['other'] = 'dij';

$GLOBALS["lang"]['package'] = 'Pakaoj';

$GLOBALS["lang"]['page. Export your LDAP server from menu -> Admin -> LDAP Servers -> Details to JSON and save and include this data as well.'] = 'Paul. Eksportu vian LDAP- servion de menuo - confar Admin - título LDAP- Serviloj - título Detaloj al JSON kaj savo kaj inkludas tiujn datenojn anka.';

$GLOBALS["lang"]['partition'] = 'Départkcio';

$GLOBALS["lang"]['pass'] = 'enirpermesilo';

$GLOBALS["lang"]['pending'] = 'Sôltlane';

$GLOBALS["lang"]['performance'] = 'efikeco';

$GLOBALS["lang"]['performed'] = 'les rezultis';

$GLOBALS["lang"]['permission'] = 'Permeso';

$GLOBALS["lang"]['permissions required per endpoint'] = 'Permesoj postulitaj par finpunkto';

$GLOBALS["lang"]['pie'] = 'Tortue';

$GLOBALS["lang"]['planning'] = 'Planado';

$GLOBALS["lang"]['predictable'] = 'Anta';

$GLOBALS["lang"]['query'] = 'paringu';

$GLOBALS["lang"]['rear'] = 'Malanta';

$GLOBALS["lang"]['rear-left'] = 'Malanta epäillyt';

$GLOBALS["lang"]['rear-right'] = 'malantakahtilusega deksstra';

$GLOBALS["lang"]['regex'] = 'Régex';

$GLOBALS["lang"]['release'] = 'debrigo';

$GLOBALS["lang"]['removed from display, but has been set'] = 'Origite de ekrano, sed estis metita';

$GLOBALS["lang"]['reserved'] = 'Rezervita';

$GLOBALS["lang"]['right'] = 'dekstra rajto';

$GLOBALS["lang"]['rights) you can click on the field value to edit it.'] = 'Vi povas klaki sur la kampo valo redakki.';

$GLOBALS["lang"]['role'] = 'Rollrolo';

$GLOBALS["lang"]['room'] = 'Čambro Čambro';

$GLOBALS["lang"]['row'] = 'Linio';

$GLOBALS["lang"]['service failed to start due to the following error'] = 'servo ne domenci';

$GLOBALS["lang"]['so Open-AudIT knows to restrict your query to the appropriate Orgs.'] = 'Tiel Open- Audit scias limigi vian atendon al la konvenaj Orgs.';

$GLOBALS["lang"]['stand-alone'] = '→ Eventoj:';

$GLOBALS["lang"]['standard'] = 'Norme';

$GLOBALS["lang"]['starts with'] = 'komenciεas';

$GLOBALS["lang"]['storage'] = 'sztokado';

$GLOBALS["lang"]['subnet'] = 'Alivuokra';

$GLOBALS["lang"]['table'] = 'Tablo';

$GLOBALS["lang"]['table and insert the original rows.'] = 'Tablo kaj enmetas la origineajn vicojn.';

$GLOBALS["lang"]['team'] = 'Equipea Teamo';

$GLOBALS["lang"]['text. The first is the array index and should be left as-is. The index is used in the templates to lookup the translated text.'] = 'Teksto. La unua estas la aro- indekso kaj devus esti lasita kiel- estas. La Indekso estas uzita en la îалеblonoj por levi la tradukitan tekston.';

$GLOBALS["lang"]['then clicking on the details button for the table.'] = 'sobre sur; pri; je supérieur supra; рúdorso supérieur';

$GLOBALS["lang"]['then clicking on the details button for the table. Device details are stored in the'] = 'somre sur; pri; je superior supra; тudoutaso superior Destitivo detaloj estas stokitaj en la';

$GLOBALS["lang"]['timestamp'] = 'La tempo';

$GLOBALS["lang"]['to'] = 'Gépkocsi';

$GLOBALS["lang"]['to create an item of this type'] = 'Eron de ';

$GLOBALS["lang"]['to the URL, you will get the full database entry, including all component tables, of a given device.'] = 'Al la URL, vi rievos la plenan databasen eniron, inkluzive de... iuj kompontoj tabloj, de anta.fiksita aparato.';

$GLOBALS["lang"]['to the user'] = 'Al la uzanto';

$GLOBALS["lang"]['top'] = 'Plej supra pinto';

$GLOBALS["lang"]['top secret - Military / Government classification. Disclosure would cause exceptionally grave danger to national security.

secret - Military / Government classification. Disclosure would cause serious damage to national security.

confidential - Military / Government and Private Sector classification. Data that is confidential includes trade secrets, intellectual data, application programming code, and other data that could seriously affect the organization if unauthorized disclosure occurred. Data at this level would be available only to personnel in the organization whose work needs, or is directly related to, the accessed data. Access to confidential data usually requires authorization for each access.

private - Private Sector classification. Data that is private includes any information related to personnel, including human resources records, medical records, and salary information, that is used only within the organization.

sensitive - Military / Government and Private Sector classification. Data that is sensitive includes organizational financial information and requires extra measures to ensure its CIA and accuracy. Disclosure might harm national security.

public - Private Sector classification. Public data is data that is generally shared with the public and would not cause a negative impact on the organization. Examples of public data include how many people work in the organization and what products an organization manufactures or sells.

unclassified - Military / Government classification. Any information that can generally be distributed to the public without any threat to national interest.

unassigned - The default until set.'] = ' Imitaefa sekreto - Armea / registara klasifiko. Divulgación kaūs escete gravan danεeron al nacia sekureco.

Sekreto - Armea / registrara klasifiko. Divulgación kaūs gravan difekton en nacia sekureco.

Konfenencivo - Armea / registro kaj Secteur privado- klasifiko. Datenoj kiuj estas konfidencaj inkludas komercsekretojn, intelektajn datenojn, apliki confirmative aoprogramman kodon, kajelijn datennojn kiuj povis grave influenzi la organison se nealuctorizita rive okloazis. Datenoj sur tiu nivelo estus hasblaj nur al personaro en la organiso kies laborbezonoj, a. estas rekte rilatattaj al, la aliritaj datenoj. Aliro al konfidencaj datennoj kutime postulas apuron por

Privata sektoro. Datenoj kiuj estas privataj inkludas jujn ajn informatojn ligitaj al personaro, inkluzive de homarajtaj rekordoj, kuracistaj rekordoj, kaj salajroinformoj, kiu estas uzita nur ene de la organiso.

Sentema - Armea / registraro kaj Privatsektora klasifiko. Datenoj kiuj estas sentiemaj inkludas organizajn financajn informatojn kaj postulas ekstrajn iniciatojn certigi εian CIA kaj prezecon. Divulgación povas damaεi la nacian sekurecon.

Publika - privata sektoro. Publikaj datenoj estas datenoj kiuj estas Ekzemploj de publikaj datennoj inkludas kiom multaj homoj laboras en la organiso kaj jion produktoj organiso produktas a vendas.

Neklasifikita - Armea / registrara klasifiko. Mezclaiuj informaoj kiuj povas εenerale esti distributitaj al publico sen iu minaco al nacia intereso.

La deha epäilee lto εis aro.';

$GLOBALS["lang"]['traffic'] = 'Trafiko de trafiko';

$GLOBALS["lang"]['true'] = 'Vera Vero';

$GLOBALS["lang"]['true or false (in JSON context)'] = '(en JSON kunteksto)';

$GLOBALS["lang"]['unallocated'] = 'Nealirebla';

$GLOBALS["lang"]['unauthorised'] = 'Ei kaplusta';

$GLOBALS["lang"]['unchanged'] = 'szelén';

$GLOBALS["lang"]['unknown'] = 'mekonata';

$GLOBALS["lang"]['unmanaged'] = 'Neadminis';

$GLOBALS["lang"]['unused'] = 'Neuzata';

$GLOBALS["lang"]['update'] = 'unit description in lists';

$GLOBALS["lang"]['uses the data collected from your devices and matches the software installed with the value provided, it counts the matches calculates how many licenses have been used and how many are left. It allows the use of wildcards on the <i>match string</i> field which matches the software.name attribute.'] = 'La datenoj koletitaj de viaj aparatoj kaj matrugaoj la programmeraro instalia kun la Valoro providoita, εi kalkulas la mat agendezojn kalkuli kiam multaj permesiloj estis utiligitaj kaj kiam multaj estas forlasitaj. Permesas la uzon de sova stabilitykartoj sur la <i>Situo de Kordoj</i> Kampo kiu konguas kun la programmaro. Nomo attribútum.';

$GLOBALS["lang"]['using the main menu items.'] = 'Urante la ';

$GLOBALS["lang"]['valid'] = 'voimassa';

$GLOBALS["lang"]['version'] = 'versio versio versio versio';

$GLOBALS["lang"]['virtualisation'] = 'Virtualigo';

$GLOBALS["lang"]['warning'] = 'Averto';

$GLOBALS["lang"]['web'] = 'WEB WEB WEB WEB WEB';

$GLOBALS["lang"]['with Local and Remote access permissions set.'] = 'Kun lokaj kaj Remote- aliro permesoj metis.';

$GLOBALS["lang"]['with devices::update permission.'] = 'C \'est moi. Isdatermeso.';

$GLOBALS["lang"]['with the Sign-On Redirect URI being'] = 'La Sign- Sur- imitaefo- Amba.o';

$GLOBALS["lang"]['with the intention of providing simple and intuitive access in a manner familiar to developers. In addition to this API, the web interface will use the same request format and supply some additional actions (eg: HTML forms for creating items).'] = 'Kun la intenco de disponigado de simplia kaj intuicia aliro en maniero konata al programmistoj. Aldone al tiu API, la interretinterfaco uzos la saman peti formaton kaj supézos kalkajn kromajn agojn (ekz. HTML- formularoj por kreado de eroj).';

$GLOBALS["lang"]['yes'] = 'Jessus.';

$GLOBALS["lang"]['you do not require a HighCharts license to use Firstwave products. License'] = 'Vi ne postulas HighCharts- licencon uzi Firstwave produktojn. Engedély';

$GLOBALS["lang"]['you will assign any found devices to that Org or Location.'] = 'Asignaciones jujn ajn trovitajn aparatojn al tiu Org a Kahtlus Loko.';

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

