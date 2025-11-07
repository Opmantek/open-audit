<?php
$GLOBALS["lang"][' Default, currently '] = ' Difino, nuntempe ';

$GLOBALS["lang"][' is now supported with a language file. To change your user to use this language, click '] = ' Nun estas apogita per lingvodosiero. Por ŝanĝi vian uzanton por uzi tiun lingvon, klaki ';

$GLOBALS["lang"][' seconds'] = ' sekundoj';

$GLOBALS["lang"]['10 Minutes'] = '10 minutoj';

$GLOBALS["lang"]['15 Minutes'] = '15 Minutoj';

$GLOBALS["lang"]['30 Minutes'] = '30 Minutoj';

$GLOBALS["lang"]['5 Minutes'] = '5 Minutoj';

$GLOBALS["lang"]['<br> <strong>NOTE</strong> - You are accessing this URL from the local Open-AudIT server. The downloaded script will not be able to submit when run on any other machine. If you need to audit other machines, please download the script from any remote machine, not using a browser on the Open-AudIT server itself.'] = '<br/> <strong>Ne</strong> Vi aliris ĉi tiun URL de la loka Open-AudIT servilo. La elŝutita manuskripto ne povas submetiĝi kiam funkcii per iu alia maŝino. Se vi bezonas revizii aliajn maŝinojn, bonvolu elŝuti la manuskripton de iu malproksima maŝino, ne uzante retumilon sur la Open-AudIT-servilo mem.';

$GLOBALS["lang"]['<p></p>'] = '<p></p>';

$GLOBALS["lang"]['<p><strong class="text-danger">NOTE</strong> - You must have working SSH or SSH Key credentials to execute benchmarks upon a target device.</p>'] = '<p><strong class="text-danger">Ne</strong> Vi havendaĵo laboranta SSH aŭ SSH Esencaj akreditaĵoj por efektivigi komparnormojn sur celaparato.</p>';

$GLOBALS["lang"]['<p><strong>Baseline</strong> - The overarching document that contains the baseline definition and the individual policy tests.<br> <br> <strong>Policies</strong> - The individual tests contained within a Baseline. Each test is for a specific item. An example would be testing for SSH version 1.2.3.<br> <br> <strong>Details</strong> - Baselines can compare netstat ports, users and software.<br> <br> <strong>Software</strong> - To compare software we check the name and version. Because version numbers are not all standardised in format, when we receive an audit result we create a new attribute called software_padded which we store in the database along with the rest of the software details for each package. For this reason, baselines using software policies will not work when run against a device that has not been audited by 1.10 (at least). Software policies can test against the version being "equal to", "greater than" or "equal to or greater than".<br> <br> <strong>Netstat Ports</strong> - Netstat Ports use a combination of port number, protocol and program. If all are present the policy passes.<br> <br> <strong>Users</strong> - Users work similar to Netstat Ports. If a user exists with a matching name, status and password details (changeable, expires, required) then the policy passes.<br> <br> </p>'] = '<p><strong>Bazlinio</strong> La superarkaddokumento kiu enhavas la bazliniodifinon kaj la individuajn strategitestojn.<br/> <br/> <strong>Politikoj</strong> La individuaj testoj enhavitaj ene de Bazlinio. Ĉiu testo estas por specifa objekto. Ekzemplo estus testanta pri SSH-versio 1.2.3.<br/> <br/> <strong>Detaloj</strong> Bazlinioj povas kompari retstat havenojn, uzantojn kaj softvaron.<br/> <br/> <strong>Softvaro</strong> Por kompari softvaron ni kontrolas la nomon kaj version. Ĉar versio nombroj ne estas ĉiuj normigitaj en formato, kiam ni ricevas reviziorezulton ni kreas novan atributon nomitan softvaripentrita kiun ni stokas en la datumbazo kune kun la resto de la softvardetaloj por ĉiu pakaĵo. Tial, bazlinioj uzantaj softvarpolitikojn ne funkcias dum kuro kontraŭ aparato kiu ne estis reviziita per 1.10 (almenaŭ). Softvarpolitikoj povas testi kontraŭ la versio estanta "egalaj al", "pli granda ol" aŭ "egala al aŭ pli granda ol".<br/> <br/> <strong>Netstat Ports</strong> Netstat Ports uzas kombinaĵon de havennombro, protokolo kaj programo. Se ĉiuj estas la politiko pasas.<br/> <br/> <strong>Uzantoj de uzantoj</strong> Uzantoj laboras similaj al Netstat Ports. Se uzanto ekzistas kun egala nomo, statuso kaj pasvorton detaloj (ŝanĝeblaj, eksvalidiĝas, postulis) tiam la politiko pasas.<br/> <br/> </p>';

$GLOBALS["lang"]['<p>A location is a physical address that can have devices associated with it.<br> <br>You can assign it coordinates (lat/long) and if there are devices assigned, the location will appear on the Open-AudIT Enterprise map.<br> <br></p>'] = '<p>Loko estas fizika adreso kiu povas havi aparatojn asociitajn kun ĝi.<br/> <br/>Vi povas asigni ĝin koordinatoj (lat/long) kaj se ekzistas aparatoj asignitaj, la loko aperos sur la Open-AudIT Enterprise mapo.<br/> <br/></p>';

$GLOBALS["lang"]['<p>A network is derived from discovery entries and device attributes.<br> <br></p>'] = '<p>Reto estas derivita de eltrovaĵo kontribuoj kaj aparato atribuas.<br/> <br/></p>';

$GLOBALS["lang"]['<p>A summary will display a list of items, grouped by the distinct values of the attribute specified by the <code>table</code> and <code>column</code> attributes.<br> <br>When a summary is executed, the result will be a list of distinct values for that <code>table</code> and <code>column</code>. There will be links on the values that allow the user to see the matching devices.<br> <br>If the attribute of <code>extra_columns</code> is populated, the resulting page will contain these columns in addition to the standard device columns.<br> <br></p>'] = '<p>Resumo montros liston de eroj, grupigitaj per la apartaj valoroj de la atributo precizigita per la <code>table</code> kaj <code>column</code> atributoj.<br/> <br/>Kiam resumo estas efektivigita, la rezulto estos listo de apartaj valoroj por tio. <code>table</code> kaj <code>column</code>. Ekzistas ligiloj sur la valoroj kiuj permesas al la uzanto vidi la egalajn aparatojn.<br/> <br/>Se la atributo de <code>extra_columns</code> La rezulta paĝo enhavos tiujn kolonojn aldone al la normaj aparatokolonoj.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Agents let you audit PCs without a discovery. Install the agent and it will check-in with the server each day and audit itself. It does not matter if your computers are firewalled, audit data will still appear in Open-AudIT.</p><p>When testing <strong>if</strong> an agent should perform actions, all three tests must pass (if the test is set). <strong>Then</strong> the actions are taken.</p>'] = '<p>Agentoj lasas vin aŭdi Komputilojn sen malkovro. Instali la agenton kaj ĝi kontrolus kun la servilo ĉiun tagon kaj revizion mem. Ne gravas se viaj komputiloj estas firewalled, revizio datumoj ankoraŭ aperos en Open-AudIT.</p><p>Kiam oni testas <strong>Se</strong> agento devus elfari agojn, ĉiuj tri testoj devas pasi (se la testo estas metita). <strong>Tiam la</strong> La agoj estas prenitaj.</p>';

$GLOBALS["lang"]['<p>Applications are defined by you, the user and stored for Open-AudIT to use and associate with devices.<br> <br></p>'] = '<p>Aplikoj estas difinitaj fare de vi, la uzanto kaj stokita por Open-AudIT por uzi kaj asocii kun aparatoj.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Attributes are stored for Open-AudIT to use for particular fields.</p>'] = '<p>Atributoj estas stokitaj por Open-AudIT por uzi por specialaj kampoj.</p>';

$GLOBALS["lang"]['<p>Being able to determine which machines are configured the same is a major part of systems administration and auditing &ndash; and now reporting on that will be made simple and automated. Once you define your baseline it will automatically run against a set of devices on a predetermined schedule. The output of these executed baselines will be available for web viewing, importing into a third party system or even as a printed report.<br> <br> Baselines enable you to combine audit data with a set of attributes you have previously defined (your baseline) to determine compliance of devices.<br> <br> For example - you might create a baseline from a device running Centos 6 which acts as one of your apache servers in a cluster. You know this particular server is configured just the way you want it but you are unsure if other servers in the cluster are configured exactly the same. Baselines enables you to determine this.<br> <br> </p>'] = '<p>Povas determini kiuj maŝinoj estas formitaj la sama estas grava parto de sistemadministracio kaj revizio - kaj nun raportante pri tio estos farita simpla kaj aŭtomatigita. Post kiam vi difinas vian bazlinion ĝi aŭtomate kuros kontraŭ aro de aparatoj en predetermined horaro. La produktado de tiuj efektivigitaj bazlinioj estos havebla por interretspektado, importante en trian partian sistemon aŭ eĉ kiel presita raporto.<br/> <br/> Bazlinioj rajtigas vin kombini reviziodatenojn kun aro de atributoj kiujn vi antaŭe difinis (via bazlinio) determini observon de aparatoj.<br/> <br/> Ekzemple, vi eble kreos bazlinion de aparato prizorganta Centojn 6 kiu funkcias kiel unu el viaj apaĉserviloj en areto. Vi scias ke ĉi tiu speciala servilo estas formita nur la vojo vi volas, sed vi estas necerta se aliaj serviloj en la areto estas formita precize la sama. Bazlinioj permesas al vi determini tion.<br/> <br/> </p>';

$GLOBALS["lang"]['<p>Clusters are stored in Open-AudIT to associate devices to better record, manage and estimate licensing costs.<br> <br></p>'] = '<p>Aretoj estas stokitaj en Open-AudIT por asocii aparatojn al pli bona rekordo, administri kaj taksi licencadkostojn.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Components is a generic term used for the tables that store the attributes for a device. Those tables are: access_point, arp, bios, certificate, cli_config, disk, dns, file, ip, license, log, memory, module, monitor, motherboard, netstat, network, nmap, optical, pagefile, partition, policy, print_queue, processor, radio, route, san, scsi, server, server_item, service, share, software, software_key, sound, task, usb, user, user_group, variable, video, vm, windows.</p><p> In addition we class the following tables also as device related: application, attachment, cluster, credential, image.</p>'] = '<p>Komponentoj estas komunnomo uzita por la tabloj kiuj stokas la atributojn por aparato. Tiuj tabloj estas: alirpunkto, arp, bioj, atestilo, cli_config, disko, dns, dosiero, ip, licenco, tagalo, memoro, modulo, ekrano, patrintabulo, retstato, reto, reto, Nmap, optika, paĝodosiero, sekcio, politiko, presaĵ_queue, procesoro, radio, itinero, sano, servilo, servilo, servo, akcio, programaro, programaro, programaro, programaro, programaro, programaro, programaro, ktp.</p><p> Krome ni klasifikas la sekvajn tabelojn ankaŭ kiel aparaton ligitan: aplikiĝo, alligitaĵo, areto, lunarko, bildo.</p>';

$GLOBALS["lang"]['<p>Credentials are encrypted when stored in the database.<br> <br>When a Discovery is run, a device has its credentials retrieved and tested for connection first (from the <code>credential</code> table). If these fail, then credentials associated with the given Org <code>credentials.org_id</code> is also tested against the device. Working credentials are stored at an individual device level in the credential table (note - no "s" in the table name).<br> <br>SSH keys are tested before SSH username / password. When testing SSH, credentials will also be marked as working with sudo or being root.<br> <br>For ease of use, Windows passwords should not contain a single or double quote. This is a remote WMI limitation, not an Open-AudIT limitation.<br> <br></p>'] = '<p>Credentials estas ĉifrita kiam stokite en la datumbazo.<br/> <br/>Kiam Discovery estas prizorgita, aparato havas siajn akreditaĵojn prenitajn kaj testis pri ligo unue (de la <code>credential</code> tablo). Se tiuj malsukcesas, tiam akreditaĵoj asociitaj kun la antaŭfiksita Org <code>credentials.org_id</code> Ĝi ankaŭ estas testita kontraŭ la aparato. Laboraj akreditaĵoj estas stokitaj sur individua aparatnivelo en la lunarktablo (noto - neniuj "j" en la tablonomo).<br/> <br/>SSH-ŝlosiloj estas testitaj antaŭ SSH- uzantnomo / pasvorton. Dum testado de SSH, akreditaĵoj ankaŭ estos markitaj kiel laborado kun sekso aŭ esti radiko.<br/> <br/>Por facileco de uzo, Fenestroj ne devus enhavi ununuran aŭ duoblan citaĵon. Tio estas malproksima WMI-limigo, ne Open-AudIT limigo.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Credentials are used to access devices.<br> <br>Configuring credentials should be one of the first things you do after installing Open-AudIT.<br> <br></p>'] = '<p>Credentials kutimas aliri aparatojn.<br/> <br/>Konfiguraj akreditaĵoj devus esti unu el la unuaj aĵoj kiujn vi faras post instalado de Open-AudIT.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Define your racks and assign devices into their positions. You already have your devices in Open-AudIT and you know your locations. Open-AudIT extends this to allow you to create a rack and assign devices to it. Open-AudIT will even provide a visualisation of the rack and the devices contained within. If you provide a device picture, that picture will be used in the visualisation. You can look at the rack on the screen and see the same items you would see if you were standing in front of it.<br> <br></p>'] = '<p>Difini viajn rakojn kaj asigni aparatojn en iliajn poziciojn. Vi jam havas viajn aparatojn en Open-AudIT kaj vi scias viajn lokojn. Open-AudIT etendas tion por permesi al vi krei rakon kaj asigni aparatojn al ĝi. Open-AudIT eĉ provizos bildigon de la rako kaj la aparatoj enhavitaj ene. Se vi disponigas aparatobildon, tiu bildo estos uzita en la bildigo. Vi povas rigardi la rakon sur la ekrano kaj vidi la samajn erojn vi vidus se vi staris antaŭ ĝi.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Devices on your network need to be managed. But how do you keep your records up to date? A spreadsheet - defintley not. That will be out of date in hours, if not days. Why manually try to keep up. Use Open-AudIT to automatically scan your networks and record your devices - manufacturer, model, serial and more than 100 other attributes. Full lists of software, services, disks, open ports, users, etc. Automatically see if an attribute has been added, removed or changed.<br> <br>Once Open-AudIT is setup, you can sit back and relax. Have change reports emailed to you on a schedule, for example - what new devices did we discover this week? What new software was installed this week? Were there any hardware changes last month?<br> <br>Expand on the stored fields easily with your own custom attributes.<br> <br>Even add devices that are not connected to your network or those devices your Open-AudIT server cannot reach.<br> <br>Computers, switches, routers, printers or any other device on your network - Open-AudIT can audit them all.<br> <br></p>'] = '<p>Aplikas via reto devas esti administrita. Kiel vi tenas viajn diskojn ĝis nun? Ekskurseto - defintley ne. Tio estos el dato en horoj, se ne tagoj. Kial vi provas ellitiĝi. Uzu Open-AudIT por aŭtomate skani viajn retojn kaj registri viajn aparatojn - produktanton, modelon, serian kaj pli ol 100 aliajn atributojn. Plenaj listoj de softvaro, servoj, diskoj, malfermaj havenoj, uzantoj, ktp. Aŭtomata vido se atributo estis aldonita, forigita aŭ ŝanĝita.<br/> <br/>Post kiam Open-AudIT estas aranĝo, vi povas sidi malantaŭa kaj malstreĉiĝi. Ĉu ŝanĝo raportoj retpoŝtis al vi en horaro, ekzemple - kion novaj aparatoj ni malkovris tiun semajnon? Kio nova programaro estis instalita ĉi-semajne? Ĉu ekzistas iu aparataro, kiun ŝanĝoj lastmonate?<br/> <br/>Aplikita sur la stokitaj kampoj facile kun via propra kutimo atribuas.<br/> <br/>Eĉ aldoni aparatojn kiuj ne estas ligitaj al via reto aŭ tiuj aparatoj via Open-AudIT servilo ne povas atingi.<br/> <br/>Komputiloj, ŝaltiloj, alkuristoj, printiloj aŭ ajna alia aparato sur via reto - Open-AudIT povas revizii ilin ĉiuj.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Discoveries are at the very heart of what Open-AudIT does.<br> <br>How else would you know "What is on my network?"<br> <br>Discoveries are prepared data items that enable you to run a discovery upon a network in a single click, without entering the details of that network each and every time.<br> <br></p>'] = '<p>Eltrovaĵoj estas ĉe la koro de kiu Open-AudIT faras.<br/> <br/>Kiel vi scias "Kio estas sur mia reto?"<br/> <br/>Eltrovaĵoj estas pretaj datenpecaĵoj kiuj rajtigas vin prizorgi eltrovaĵon sur reton en ununura klako, sen enirado de la detaloj de tiu reto ĉiun kaj ĉiun fojon.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Discovery Options are a global setting changed in the <a href="../configuration?configuration.name=discovery_default_scan_option">configuration</a>. If you have an Open-AudIT Enterprise license these are settable per discovery and in addition futher customizable as required. Discovery Options are as follows (including an indicitave time to scan an individual IP):<br/><br><strong>UltraFast</strong>: <i>1 second</i>. Scan only the ports that Open-AudIT needs to use to talk to the device and detect an IOS device (WMI, SSH, SNMP, Apple Sync). An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is not considered open. Device must respond to an Nmap ping. Use aggressive timing.<br><br/><strong>SuperFast</strong>: <i>5 seconds</i>. Scan the top 10 TCP and UDP ports, as well as port 62078 (Apple IOS detection). An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is not considered open. Device must respond to an Nmap ping. Use aggressive timing.<br/><br/><strong>Fast</strong>: <i>40 seconds</i>. Scan the top 100 TCP and UDP ports, as well as port 62078 (Apple IOS detection). An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is not considered open. Device must respond to an Nmap ping. Use aggressive timing.<br/><br/><strong>Medium (Classic)</strong>: <i>90 seconds</i>. As close to a traditional Open-AudIT scan as we can make it. Scan the top 1000 TCP ports, as well as 62078 (Apple IOS detection) and UDP 161 (SNMP). An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is considered open (and will trigger device detection). Devices are scanned regardless of a response to an Nmap ping. Use aggressive timing.<br/><br/><strong>Medium</strong>: <i>100 seconds</i>. Scan the top 1000 TCP and top 100 UDP ports, as well as port 62078 (Apple IOS detection). An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is not considered open. Device must respond to an Nmap ping. Use aggressive timing.<br/><br/><strong>Slow</strong>: <i>4 minutes</i>. Scan the top 1000 TCP and top 100 UDP ports, as well as port 62078 (Apple IOS detection). Version detection enabled. An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is considered open (and will trigger device detection). Device must respond to an Nmap ping. Use normal timing.<br/><br/><strong>UltraSlow</strong>: <i>20 minutes</i>. Not recommended. Scan the top 1000 TCP and UDP ports, as well as port 62078 (Apple IOS detection). Devices are scanned regardless of a response to an Nmap ping. Version detection enabled. An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is considered open (and will trigger device detection). Use polite timing.<br/><br/><strong>Custom</strong>: <i>Unknown time</i>. When options other than as set by a standard discovery preset are altered.<br><br></p>'] = '<p>Discovery Discovery Opcioj estas tutmonda scenaro ŝanĝita en la <a href="../configuration?configuration.name=discovery_default_scan_option">konfiguracio</a>. Se vi havas Open-AudIT Enterprise licencon tiuj estas aroblaj per eltrovaĵo kaj krome kunfandas kiel postulate. Discovery Discovery Opcioj estas kiel sekvas (inkluzive de pulvtempo por skani individuan IP):<br/><br/><strong>UltraFast</strong>: <i>1 sekundo</i>. Skalo nur la havenoj kiuj Open-AudIT devas uzi por paroli al la aparato kaj detekti IOS-aparaton (WMI, SSH, SNMP, Apple Sync). An An An An <code>open|filtered</code> haveno estas konsiderata malferma. A. A. A <code>filtered</code> haveno ne estas konsiderata malferma. Device devas respondi al Nmap ping. Uzu agreseman tempigon.<br/><br><strong>SuperFast</strong>: <i>5 sekundoj</i>. Ska la supraj 10 TCP kaj UDP-havenoj, same kiel haveno 62078 ( Apple IOS-detekto). An An An An <code>open|filtered</code> haveno estas konsiderata malferma. A. A. A <code>filtered</code> haveno ne estas konsiderata malferma. Device devas respondi al Nmap ping. Uzu agreseman tempigon.<br><br/><strong>Rapida Rapida Rapida Rapida</strong>: <i>40 sekundoj</i>. Ska la supraj 100 TCP kaj UDP-havenoj, same kiel haveno 62078 ( Apple IOS-detekto). An An An An <code>open|filtered</code> haveno estas konsiderata malferma. A. A. A <code>filtered</code> haveno ne estas konsiderata malferma. Device devas respondi al Nmap ping. Uzu agreseman tempigon.<br/><br/><strong>Medium (klasika)</strong>: <i>90 sekundoj</i>. Kiel proksima al tradicia Open-AudIT-skanado kiam ni povas fari ĝin. Scan la supraj 1000 TCP-havenoj, same kiel 62078 ( Apple IOS-detekto) kaj UDP 161 (SNMP). An An An An <code>open|filtered</code> haveno estas konsiderata malferma. A. A. A <code>filtered</code> haveno estas konsiderita malferma (kaj ellasos aparatodetekton). Aparatoj estas skanitaj nekonsiderante respondo al Nmap-ping. Uzu agreseman tempigon.<br/><br/><strong>Medium</strong>: <i>100 sekundoj</i>. Ska la supraj 1000 TCP kaj supraj 100 UDP-havenoj, same kiel haveno 62078 ( Apple IOS-detekto). An An An An <code>open|filtered</code> haveno estas konsiderata malferma. A. A. A <code>filtered</code> haveno ne estas konsiderata malferma. Device devas respondi al Nmap ping. Uzu agreseman tempigon.<br/><br/><strong>malrapide</strong>: <i>4 minutoj</i>. Ska la supraj 1000 TCP kaj supraj 100 UDP-havenoj, same kiel haveno 62078 ( Apple IOS-detekto). Versio-detekto ebligis. An An An An <code>open|filtered</code> haveno estas konsiderata malferma. A. A. A <code>filtered</code> haveno estas konsiderita malferma (kaj ellasos aparatodetekton). Device devas respondi al Nmap ping. Uzu normalan tempigon.<br/><br/><strong>UltraSlow</strong>: <i>20 minutoj</i>. Ne rekomendinda. Ska la supraj 1000 TCP kaj UDP-havenoj, same kiel haveno 62078 ( Apple IOS-detekto). Aparatoj estas skanitaj nekonsiderante respondo al Nmap-ping. Versio-detekto ebligis. An An An An <code>open|filtered</code> haveno estas konsiderata malferma. A. A. A <code>filtered</code> haveno estas konsiderita malferma (kaj ellasos aparatodetekton). Uzu bonan tempigon.<br/><br/><strong>kutimo</strong>: <i>Nekonata tempo</i>. Kiam opcioj krom kiel metite per norma eltrovaĵo preset estas ŝanĝitaj.<br/><br/></br></br></p>';

$GLOBALS["lang"]['<p>Groups are used as simple lists of devices that match the required conditions. If requested using JSON they return a list of <code>devices.id</code> only. If requested using the web interface, they return the standard column attribute list.<br> <br></p>'] = '<p>Grupoj estas utiligitaj kiel simplaj listoj de aparatoj kiuj egalas la postulatajn kondiĉojn. Se demandite uzante JSON ili resendas liston de <code>devices.id</code> nur. Se postuladite uzante la interretinterfacon, ili resendas la norman kolumnon atribuas liston.<br/> <br/></p>';

$GLOBALS["lang"]['<p>If the user logging on to Open-AudIT does not have the access to search LDAP (and you are using OpenLDAP), you can use another account which does have this access. Use the <code>ldap_dn_account</code> and <code>ldap_dn_password</code> to configure this.<br> <br><strong>Helpful Documentation</strong><br> <br>
        <a href="/index.php/auth/help">General Auth Help</a><br> <br>
        <a href="/index.php/faq?name=Using Entra for Auth">Using Entra for Auth</a><br> <br>
        <a href="/index.php/faq?name=Using OKTA for Auth">Using OKTA for Auth</a><br> <br>
        <a href="/index.php/faq?name=Troubleshooting LDAP Logins">Troubleshooting LDAP Logins</a><br> <br>
        <a href="/index.php/faq?name=Users, Roles and Orgs">Users, Roles and Orgs</a><br> <br></p>'] = '<p>Se la uzanto registradanta al Open-AudIT ne havas la aliron serĉi LDAP (kaj vi uzas OpenLDAP), vi povas uzi alian raporton kiu havas tiun aliron. Uzu la <code>ldap_dn_account</code> kaj <code>ldap_dn_password</code> por agordi ĉi tion.<br/> <br/><strong>Helpema dokumentado</strong><br/> <br/><a href="/index.php/auth/help">Ĝenerala Auth Helpas</a><br/> <br/><a href="/index.php/faq?name=Using Entra for Auth">Uzante entra por Auth</a><br/> <br/><a href="/index.php/faq?name=Using OKTA for Auth">Uzante OKTA por Auth</a><br/> <br/><a href="/index.php/faq?name=Troubleshooting LDAP Logins">Problemo de LDAP Logins</a><br/> <br/><a href="/index.php/faq?name=Users, Roles and Orgs">Uzantoj, Roloj kaj Orgs</a><br/> <br/></p>';

$GLOBALS["lang"]['<p>If you add a device type, to display the associated icon you will have to manually copy the .svg formatted file to the directory:<br><em>Linux</em>:/usr/local/open-audit/public/device_images<br><em>Windows</em>: c:\xampp\htdocs\open-audit\device_images<br> <br>If you add a location type, to display the associated icon you will have to manually copy the 32x32px icon to the directory:<br><em>Linux</em>:/usr/local/open-audit/public/images/map_icons<br><em>Windows</em>: c:\xampp\htdocs\open-audit\images\map_icons</p><p>When the <i>resource</i> is a <code>device</code>, valid <i>types</i> are: <code>class</code>, <code>environment</code>, <code>status</code> and <code>type</code>. If the <i>resource</i> is <code>locations</code> or <code>org</code> the only valid <i>type</i> is <code>type</code>. If the <i>resource</i> is a <code>query</code> the only valid <i>type</i> is <code>menu_category</code>.</p>'] = '<p>Se vi aldonas aparatospecon, por elmontri la rilatan ikonon vi devas mane kopii la .svg formatis dosieron al la adresaro:<br/><em>Linukso</em>/usr/loka/ malferma-audit/ publika/ devicen_images<br/><em>Fenestroj</em>c: \'\xampp\'htdocs\'open-audit\device_images<br/> <br/>Se vi aldonas lokspecon, por elmontri la rilatan ikonon vi devas mane kopii la 32x32px ikonon al la adresaro:<br/><em>Linukso</em>/usr/ loka/ malferma-audit/ publika/ bildo / map_icons<br/><em>Fenestroj</em>c: \'\xampp\'htdocs\'open-audit\images\map_icons</p><p>Kiam la <i>rimedresurso</i> estas <code>device</code>, valida <i>tipoj tipoj</i> estas: <code>class</code>, <code>environment</code>, <code>status</code> kaj <code>type</code>. Se la <i>rimedresurso</i> estas <code>locations</code> aŭ aŭ <code>org</code> La sola valida <i>tipo tipo tipo tipo</i> estas <code>type</code>. Se la <i>rimedresurso</i> estas <code>query</code> La sola valida <i>tipo tipo tipo tipo</i> estas <code>menu_category</code>.</p>';

$GLOBALS["lang"]['<p>If you intend to completely audit your cloud machines, do not forget you will also need those credentials saved in Open-AudIT.</p><p>Make sure you allow the correct ports if you are using Microsoft Azure (22 for SSH, etc). Check your Virtual Machine -> Networking rules.<br> <br></p>'] = '<p>Se vi intencas tute revizii viajn nubajn maŝinojn, ne forgesu ke vi ankaŭ bezonos tiujn akreditaĵojn savitajn en Open-AudIT.</p><p>Certigu ke vi permesas la ĝustajn havenojn se vi uzas Microsoft Azure (22 por SSH, ktp.). Kontrolu vian virtualan maŝinon - Retaj reguloj.<br/> <br/></p>';

$GLOBALS["lang"]['<p>If you select a List type, the "values" field will be enabled. You should put a comma separated list of selectable values here. These will display in a dropdown box whenever the field is edited.<br> <br>Like most other attributes, Fields can be bulk edited. Use the Bulk Edit function as you normally would and you will see the Fields are available for input.<br> <br>View the device details screen, open the section containing the field and (if you have sufficient access) you can click on the field value to edit it.<br> <br></p>'] = '<p>Se vi elektas List tipon, la "valoroj" kampo estos ebligitaj. Vi devus meti komon apartigita listo de fajnaj valoroj ĉi tie. Tiuj elmontros en guto-kesto kiam la kampo estas redaktita.<br/> <br/>Kiel la plej multaj aliaj atributoj, Kampoj povas esti grocaj redaktis. Uzu la Bulk Edit-funkcion kiam vi normale faris kaj vi vidos ke la Kampoj estas haveblaj por enigaĵo.<br/> <br/>Vidante la aparaton detalekrano, malfermi la sekcion enhavantan la kampon kaj (se vi havas sufiĉan aliron) vi povas klaki sur la kampovaloro por redakti ĝin.<br/> <br/></p>';

$GLOBALS["lang"]['<p>In the ever-changing world of computer security where new vulnerabilities are being discovered and patched every day, enforcing security compliance must be a continuous process. It also needs to include a way to make adjustments to policies, as well as periodic assessment and risk monitoring. The OpenSCAP ecosystem provides tools and customizable policies for a quick, cost-effective and flexible implementation of these processes.</p>'] = '<p>En la iam-ajna-varia mondo de komputilsekureco kie novaj vundeblecoj estas malkovritaj kaj pecetigitaj ĉiun tagon, devigi sekurecobservon devas esti kontinua procezo. Ĝi ankaŭ devas inkludi manieron fari alĝustigojn al politikoj, same kiel periodan takson kaj riskmonitoradon. La OpenSCAP ekosistemo disponigas ilojn kaj adaptitajn politikojn por rapida, kostefika kaj fleksebla efektivigo de tiuj procezoj.</p>';

$GLOBALS["lang"]['<p>Integrations allow you to setup device selection and schedules for Open-AudIT to talk to external systems.<br> <br></p>'] = '<p>Integriĝoj permesas al vi instali aparatoselektadon kaj horarojn por Open-AudIT por paroli al eksteraj sistemoj.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Nmap timing details are found on the bottom of this linked page <a href="https://nmap.org/book/man-performance.html" target="_blank">https://nmap.org/book/man-performance.html</a>. From that page:<br> <br><em>If you are on a decent broadband or ethernet connection, I would recommend always using -T4 (Aggressive). Some people love -T5 (Insane) though it is too aggressive for my taste. People sometimes specify -T2 (Polite) because they think it is less likely to crash hosts or because they consider themselves to be polite in general. They often do not realize just how slow -T2 really is. Their scan may take ten times longer than a default scan. Machine crashes and bandwidth problems are rare with the default timing options -T3 (Normal) and so I normally recommend that for cautious scanners. Omitting version detection is far more effective than playing with timing values at reducing these problems.</em><footer>Gordon <i>Fyodor</i> Lyon</footer><br> <br></p>'] = '<p>Nmap tempigas detalojn estas trovitaj sur la fundo de tiu ligita paĝo <a href="https://nmap.org/book/man-performance.html" target="_blank">https:/nmap.org/libro/man-performance.html</a>. de tiu paĝo:<br/> <br/><em>Se vi estas sur deca larĝbendo aŭ etero ligo, mi rekomendus ĉiam uzi - T4 (Agres). Kelkaj homoj amas - T5 (Insane) kvankam ĝi estas tro agresema por mia gusto. Homoj foje precizigas - T2 (Polite) ĉar ili opinias ke estas malpli verŝajne trafi gastigantojn aŭ ĉar ili pripensas sin esti ĝentilaj ĝenerale. Ili ofte ne ekkomprenas ekzakte kiom malrapida - T2 vere estas. Ilia skanado povas preni dek fojojn pli longe ol defaŭlta skanado. Maŝinkraŝoj kaj bendolarĝproblemoj estas raraj kun la defaŭltaj tempigelektoj - T3 (Normal) kaj tiel mi normale rekomendas tion por singardaj skaniloj. Uzanta versio detekto estas multe pli efika ol ludado kun tempigvaloroj ĉe reduktado de tiuj problemoj.</em><footer>Gordon Gordon <i>Fjodor</i> Lyon</footer><br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT can be configured to use different methods to authenticate a user and in addition, to create a user account using assigned roles and orgs based on group membership.<br> <br></p>'] = '<p>Open-AudIT povas esti formita por uzi malsamajn metodojn por aŭtentikigi uzanton kaj krome, krei uzantkonton uzantan rolojn kaj orgojn bazitajn sur grupmembreco.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT can retrieve details about a file or directory of files and monitor these files for changes as per other attributes in the Open-AudIT database.<br> <br>This feature works out of the box for Linux Open-AudIT servers, but needs a change to the service account name under a Windows Open-AudIT server.<br> <br>Supported clients are Windows and Linux.<br> <br></p>'] = '<p>Open-Aud Ĝi povas preni detalojn pri dosiero aŭ adresaro de dosieroj kaj monitori tiujn dosierojn por ŝanĝoj kiel per aliaj atributoj en la Open-AudIT-datumbazo.<br/> <br/>Tiu trajto laboras el la kesto por Linukso Open-AudIT-serviloj, sed bezonas ŝanĝon al la servokontonomo sub Windows Open-AudIT-servilo.<br/> <br/>Subtenitaj klientoj estas Fenestroj kaj Linukso.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT can retrieve details about a file, ask the native package manager if they are known to it and monitor these files for changes as per other attributes in the Open-AudIT database.<br> <br>Supported clients are Linux only.<br> <br></p>'] = '<p>Open-Aud Ĝi povas preni detalojn pri dosiero, demandi la indiĝenan pakaĵmanaĝeron se ili estas konataj al ĝi kaj monitori tiujn dosierojn por ŝanĝoj kiel per aliaj atributoj en la Open-AudIT-datumbazo.<br/> <br/>Subtenitaj klientoj estas Linukso nur.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT can store information in custom fields that are associated with each device.<br> <br>Once an Additional Field has been created it can be used in queries and groups just like any other attribute in the database.<br> <br></p>'] = '<p>Open-Aud Ĝi povas stoki informojn en specialadaptitaj kampoj kiuj estas rilataj al ĉiu aparato.<br/> <br/>Post kiam Additional Field estis kreita ĝi povas esti uzita en demandoj kaj grupoj ekzakte kiel iu alia atributo en la datumbazo.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT comes with many queries inbuilt. If you require a specific query and none of the pre-packaged queries fit your needs, it is quite easy to create a new one and load it into Open-AudIT for running.<br> <br></p>'] = '<p>Open-AudIT venas kun multaj demandoj enkonstruitaj. Se vi postulas specifan atendon kaj neniu el la antaŭ-pakitaj demandoj konvenas viajn bezonojn, estas tre facile krei novan kaj ŝarĝi ĝin en Open-AudIT por kurado.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT comes with many summaries inbuilt. If you require a specific summary and none of the pre-packaged summaries fit your needs, it is quite easy to create a new one and load it into Open-AudIT for running.<br> <br></p>'] = '<p>Open-AudIT venas kun multaj resumoj enkonstruitaj. Se vi postulas specifan resumon kaj neniu el la antaŭ-pakitaj resumoj konvenas viajn bezonojn, estas tre facile krei novan kaj ŝarĝi ĝin en Open-AudIT por kurado.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT is supported by FirstWave with an amazing level of support. If you prefer an active community of support givers, theres that as well. Where else can you talk directly to the developers and get a response within 24 hours? Just try that with other products! Amazing support. Full stop. You need support, we provide support. No ifs or buts. Great support. Period.<br> <br></p>'] = '<p>Open-AudIT estas apogita fare de FirstWave kun mirinda nivelo de subteno. Se vi preferas aktivan komunumon de subteno, tie ankaŭ. Kie vi povas paroli rekte al la programistoj kaj ricevi respondon ene de 24 horoj? Provu tion kun aliaj produktoj! Frapanta subteno. Plena halto. Vi bezonas subtenon, ni provizas subtenon. Neniu ses aŭ pugo. Granda subteno. Periodo.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT provides multi-tenancy out of the box!<br> <br>Orgs (organisations) in Open-AudIT are a key item. A user has a primary Org as well as a list of Orgs they can access. A user combines this with a list of assigned "Roles" that define what actions they can take on items assigned to the Orgs they have access to. The combination of a users "orgs" and "roles" define what they can and cannot do within Open-AudIT.<br> <br>Most items in Open-AudIT are assigned to an Org. Devices, Locations, Networks, etc.<br> <br>Orgs can have child Orgs. Think of an organisational chart (tree) structure. If a user has access to a specific Org, they also have access to that Orgs descendants. For more information, see this <a href="/index.php/faq?name=Users, Roles and Orgs">FAQ</a>.</p>'] = '<p>Open-AudIT disponigas multi-tenancy el la skatolo!<br/> <br/>Orgs (organizoj) en Open-AudIT estas esenca objekto. Uzantoj havas primaran Org same kiel liston de Orgs kiun ili povas aliri. uzanto kombinas tion kun listo de asignitaj "Roles" kiuj difinas kion agoj ili povas preni erojn asignitajn al la Orgs kiujn ili havas aliron al. La kombinaĵo de uzantoj "orgoj" kaj "roluloj" difinas kion ili povas kaj ne povas fari ene de Open-AudIT.<br/> <br/>La plej multaj eroj en Open-AudIT estas asignitaj al Org. Devices, Lokoj, Retoj, ktp.<br/> <br/>Orgoj povas havi infanon Orgs. Pensu pri organiza diagramo (arbo) strukturo. Se uzanto havas aliron al specifa Org, ili ankaŭ havas aliron al tiu Orgs posteuloj. Por pli da informoj, vidu tion <a href="/index.php/faq?name=Users, Roles and Orgs">FAQ demandoj</a>.</p>';

$GLOBALS["lang"]['<p>Open-AudIT provides multi-tenancy out of the box!<br> <br>Orgs (organisations) in Open-AudIT are a key item. A user has a primary Org as well as a list of Orgs they can access. A user combines this with a list of assigned "Roles" that define what actions they can take on items assigned to the Orgs they have access to. The combination of a users "orgs" and "roles" define what they can and cannot do within Open-AudIT.<br> <br>Most items in Open-AudIT are assigned to an Org. Devices, Locations, Networks, etc.<br> <br>Orgs can have child Orgs. Think of an organisational chart (tree) structure. If a user has access to a specific Org, they also have access to that Orgs descendants.</p>'] = '<p>Open-AudIT disponigas multi-tenancy el la skatolo!<br/> <br/>Orgs (organizoj) en Open-AudIT estas esenca objekto. Uzantoj havas primaran Org same kiel liston de Orgs kiun ili povas aliri. uzanto kombinas tion kun listo de asignitaj "Roles" kiuj difinas kion agoj ili povas preni erojn asignitajn al la Orgs kiujn ili havas aliron al. La kombinaĵo de uzantoj "orgoj" kaj "roluloj" difinas kion ili povas kaj ne povas fari ene de Open-AudIT.<br/> <br/>La plej multaj eroj en Open-AudIT estas asignitaj al Org. Devices, Lokoj, Retoj, ktp.<br/> <br/>Orgoj povas havi infanon Orgs. Pensu pri organiza diagramo (arbo) strukturo. Se uzanto havas aliron al specifa Org, ili ankaŭ havas aliron al tiu Orgs posteuloj.</p>';

$GLOBALS["lang"]['<p>Quickly view the status of devices on your network.<br> <br></p>'] = '<p>Rapide rigardi la statuson de aparatoj sur via reto.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Roles in Open-AudIT are a key item. A user has a primary Org as well as a list of Orgs they can access. A user combines this with a list of assigned Roles that define what actions they can take on items assigned to the Orgs they have access to. The combination of a users "orgs" and "roles" define what they can and cannot do within Open-AudIT.<br> <br>
        Get the complete Open-AudIT Enterprise experience. Creating roles allows fine grained control over what your users can do within Open-AudIT.<br> <br>
        The primary method for authorisation (what a user can do) is based on the users Roles. Default roles are defined as admin, org_admin, reporter and user. Each role has a set of permissions (Create, Read, Update, Delete) for each endpoint. The ability to define additional roles and edit existing roles is enabled in Open-AudIT Enterprise.<br> <br>Roles can also be used with LDAP (Active Directory and OpenLDAP) authorisation. Enterprise licensed installations have the ability to customise the LDAP group for each defined role.<br> <br></p>'] = '<p>Roloj en Open-Aud Ĝi estas esenca objekto. Uzantoj havas primaran Org same kiel liston de Orgs kiun ili povas aliri. uzanto kombinas tion kun listo de asignitaj roloj kiuj difinas kiuj agojn ili povas preni erojn asignitajn al la Orgs kiujn ili havas aliron al. La kombinaĵo de uzantoj "orgoj" kaj "roluloj" difinas kion ili povas kaj ne povas fari ene de Open-AudIT.<br/> <br/>Akiri la kompletan Open-AudIT Enterprise sperton. Kreante rolojn permesas al bona grenita kontrolo de kion viaj uzantoj povas fari ene de Open-AudIT.<br/> <br/>La primara metodo por aprobo (kio uzanto povas fari) estas bazita sur la uzantroloj. Defaŭltaj roloj estas difinitaj kiel admin, org_admin, raportisto kaj uzanto. Ĉiu rolo havas aron de permesoj (Create, Read, Update, Delete) por ĉiu finpunkto. La kapablo difini kromajn rolojn kaj redakti ekzistantajn rolojn estas ebligita en Open-AudIT Enterprise.<br/> <br/>Roloj ankaŭ povas esti uzitaj kun LDAP (Active Directory kaj OpenLDAP) aprobo. Enterprise licencis instalaĵojn havas la kapablon adapti la LDAP-grupon por ĉiu difinita rolo.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Rules examine attributes and make cahnges based on the appropriate rule.</p>'] = '<p>Regularo ekzamenas atributojn kaj faras cahnges bazitan sur la konvena regulo.</p>';

$GLOBALS["lang"]['<p>Scanning options allow you to easily apply a set of options to a discovery.<br> <br></p>'] = '<p>Skanaj opcioj permesas al vi facile apliki aron de opcioj al eltrovaĵo.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Simple, intuitive, accurate geographic mapping provided by Google Maps. Open-AudIT leverages Google Maps to provide live, interactive geographic mapping of device locations. Automated conversion of street addresses to geocodes and longitude / latitude.<br> <br>
        </p>'] = '<p>Simpla, intuicia, preciza geografia mapado disponigita per Google Maps. Open-AudIT-fortuloj Google Maps por disponigi vivan, interagan geografian mapadon de aparatolokoj. Aŭtomata konvertiĝo de stratadresoj al geokodoj kaj longitudo / latitudo.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Software Packages are used to determine if antivirus, backup, firewall, approved or banned software is installed.<br> <br></p>'] = '<p>Softvarpakadoj kutimas determini ĉu kontraŭvirus, rezervo, fajromuro, aprobita aŭ malpermesita softvaro estas instalita.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Some examples of valid Subnet attributes are: 192.168.1.1 (a single IP address), 192.168.1.0/24 (a subnet), 192.168.1-3.1-20 (a range of IP addresses).<br> <br><em>NOTE</em> - Only a subnet (as per the examples - 192.168.1.0/24) will be able to automatically create a valid network for Open-AudIT. <br> <br>If you use an Active Directory type, make sure you have appropriate credentials to talk to your Domain Controller already in <a href="../credentials">credentials</a>.<br> <br></p>'] = '<p>Kelkaj ekzemploj de validaj Subnet atributoj estas: 192.168.1.1 (unuopaĵo IP-adreso), 192.168.1.0/24 (subreto), 192.168.1-3.1-20 (intervalo de IP-adresoj).<br/> <br/><em>Ne</em> Nur subreto (kiel per la ekzemploj - 192.168.1.0/24) povos aŭtomate krei validan reton por Open-AudIT. <br/> <br/>Se vi uzas Aktivan Adresarspecon, certigu ke vi havas konvenajn akreditaĵojn por paroli al via Domain Controller jam en <a href="../credentials">Akreditaĵoj</a>.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Standards are stored in Open-AudIT.<br /><br /><br /><br /></p>'] = '<p>Normoj estas stokitaj en Open-AudIT.<br/><br/><br/><br/></p>';

$GLOBALS["lang"]['<p>Supported clients are Linux only.<br> <br></p>'] = '<p>Subtenitaj klientoj estas Linukso nur.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Tasks have a schedule that mirrors the unix cron schedule. The attributes for minute, hour, day_of_month, month, day_of_week all act as per the cron definitions. You can select multiples of these using comma seperated values (no spaces). You can select every value using *.<br> <br>The <code>type</code> of the task can be one of: baselines, collectors, discoveries, queries, reports or summaries.<br> <br>If you wish to schedule a Baseline or Discovery, you will need to create these before creating the tasks. You must use the ID of the type of item in <code>sub_resource_id</code>. For example if you wish to schedule a Discovery, use that particular Discoveries ID in <code>sub_resource_id</code>.<br> <br>The value for <code>uuid</code> is specific to each Open-AudIT server. Your unique value can be found in the configuration.<br> <br>The <code>options</code> attribute is a JSON document containing any extra attributes required to run the task. The extra attributes for reports, queries and summaries are: <code>email_address</code> and <code>format</code>. The extra attribute for Bselines is <code>group_id</code>.<br> <br></p>'] = '<p>Taskoj havas horaron kiu spegulas la unix kron horaron. La atributoj por minuto, horo, tag_of_monato, monato, tag_of_semajno ĉiu funkcias kiel per la kno difinoj. Vi povas selekti multoblojn de tiuj uzantaj komma seperitajn valorojn (neniuj spacoj). Vi povas elekti ĉiun valoron uzante *.<br/> <br/>La <code>type</code> La tasko povas esti unu el: bazlinioj, kolektantoj, eltrovaĵoj, demandoj, raportoj aŭ resumoj.<br/> <br/>Se vi deziras plani Bazlinion aŭ Discovery, vi bezonos krei tiujn antaŭ kreado de la taskoj. Vi devas uzi la ID de la tipo de objekto en <code>sub_resource_id</code>. Ekzemple se vi deziras plani Discovery, uzi tiun specialan Malkovron <code>sub_resource_id</code>.<br/> <br/>La valoro por <code>uuid</code> Estas specifa por ĉiu Open-AudIT-servilo. Via unika valoro povas esti trovita en la konfiguracio.<br/> <br/>La <code>options</code> Atributo estas JSON dokumento enhavanta iujn ajn ekstrajn atributojn postulatajn por prizorgi la taskon. La ekstraj atributoj por raportoj, demandoj kaj resumoj estas: <code>email_address</code> kaj <code>format</code>. La ekstra atributo por Bselines estas <code>group_id</code>.<br/> <br/></p>';

$GLOBALS["lang"]['<p>The <code>type</code> of the location will assign its icon.<br> <br></p>'] = '<p>La <code>type</code> La loko asignas sian ikonon.<br/> <br/></p>';

$GLOBALS["lang"]['<p>The Attributes endpoint allows you to add customized values to different attributes in Open-AudIT, at the moment this feature works on the Class, Environment, Status and Type attributes on Devices, the Type attribute for both Locations and Orgs as well as the Menu Category for Queries. If you view an item of one of the prvious types (say view a Lkocation) you will notice the Type attribute must be selected from a drop-down box. This is where those values are stored. Hence, if you would like to add a new Type to be chosen for a Location, add it using the Attributes feature.</p>'] = '<p>La Atributoj finpunkto permesas al vi aldoni adaptitajn valorojn al malsamaj atributoj en Open-AudIT, en la momento tiu trajto laboras pri la klaso, Environment, Statuso kaj Tipo atribuas sur Devices, la Tipo atribuas al kaj Lokoj kaj Orgs same kiel la Menu Kategorio por Queries. Se vi rigardas eron de unu el la prviospecoj (dirvido Lkocation) vi rimarkos ke la Tipo atribuas devas esti selektita el fal-falinta kesto. Tio estas kie tiuj valoroj estas stokitaj. Tial, se vi ŝatus aldoni novan Tipon por esti elektita por Loko, aldoni ĝin uzante la Atributoj trajto.</p>';

$GLOBALS["lang"]['<p>The Collectors feature enables you to easily manage many "collector" computers that perform network discovery. All Collectors are centrally controlled from the Server. The only required network ports between the Collector and the Server are 80 and/or 443.<br> <br>It makes managing disparate networks quick, easy and simple. Open-AudIT Enterprise licensees get a single collector license included and have the option to buy more as required..<br> <br></p>'] = '<p>La kolektantoj igas vin facile administri multajn "kolektilon" komputilojn kiuj elfaras sendostacian eltrovaĵon. Ĉiuj kolektantoj estas centre kontrolitaj de la Servilo. La nuraj postulataj rethavenoj inter la kolektanto kaj la Servilo estas 80 kaj/aŭ 443.<br/> <br/>Ĝi produktas malsimilajn retojn rapidaj, facila kaj simpla. Open-AudIT Enterprise licencoj ricevas ununuran kolektantlicencon inkludis kaj havas la opcion por aĉeti pli kiel postulate.<br/> <br/></p>';

$GLOBALS["lang"]['<p>The SELECT section of your SQL <em>must</em> contain fully qualified columns. IE - <code>SELECT devices.id AS `devices.id`, devices.name AS `devices.name` ...</code>.<br> <br>The WHERE section of your SQL <em>must</em> contain <code>WHERE @filter</code> so Open-AudIT knows to restrict your query to the appropriate Orgs. SQL not containing this condition will result in the query failing to be created, unless you have the Admin role.<br> <br>An example query SQL showing attributes on devices that have an <code>os_group</code> attribute of "Linux" - <br><code>SELECT devices.id AS `devices.id`, devices.icon AS `devices.icon`, devices.type AS `devices.type`, devices.name AS `devices.name`, devices.os_name AS `devices.os_name` FROM devices WHERE @filter AND devices.os_group = "Linux"</code><br> <br></p>'] = '<p>La SELECT sekcio de via SQL <em>Devas</em> enhavas plene kvalifikitajn kolonojn. IE - IE <code>SELECT devices.id AS `devices.id`, devices.name AS `devices.name` ...</code>.<br/> <br/>La sekcio de via SQL <em>Devas</em> enhavas <code>WHERE @filter</code> Tiel Open-AudIT scias limigi vian atendon al la konvenaj Orgs. SQL ne enhavanta tiun kondiĉon rezultigos la atendon malsukcesantan esti kreita, se vi havas la Admin rolon.<br/> <br/>Ekzemplo query SQL montranta atributojn sur aparatoj kiuj havas <code>os_group</code> "Linukso" - <br/><code>SELECT devices.id AS `devices.id`, devices.icon AS `devices.icon`, devices.type AS `devices.type`, devices.name AS `devices.name`, devices.os_name AS `devices.os_name` FROM devices WHERE @filter AND devices.os_group = "Linux"</code><br/> <br/></p>';

$GLOBALS["lang"]['<p>The SELECT section of your SQL <em>must</em> only contain <code>DISTINCT(devices.id)</code>.<br> <br>The WHERE section of your SQL <em>must</em> contain <code>WHERE @filter</code> so Open-AudIT knows to restrict your query to the appropriate Orgs. SQL not containing this condition will result in the group failing to be created.<br> <br>An example for SQL to select all devices running the Debian OS - <code>SELECT DISTINCT(devices.id) FROM devices WHERE @filter AND devices.os_family = "Debian"</code><br> <br></p>'] = '<p>La SELECT sekcio de via SQL <em>Devas</em> nur enhavas <code>DISTINCT(devices.id)</code>.<br/> <br/>La sekcio de via SQL <em>Devas</em> enhavas <code>WHERE @filter</code> Tiel Open-AudIT scias limigi vian atendon al la konvenaj Orgs. SQL ne enhavanta tiun kondiĉon rezultigos la grupon malsukcesantan esti kreita.<br/> <br/>Ekzemplo por SQL selekti ĉiujn aparatojn kurantajn la Debian Os - <code>SELECT DISTINCT(devices.id) FROM devices WHERE @filter AND devices.os_family = "Debian"</code><br/> <br/></p>';

$GLOBALS["lang"]['<p>The license endpoint allows you to track the number of licenses found on your devices.<br> <br>To create an entry to track your licenses you <em>must</em> to provide a name, an organization, the number of licenses acquired and the name of the software. On the field <code>match_string</code> you must provide the name of the software that you want to track, you can use the percent sign (%) as a wildcard in the match_string.<br> <br></p>'] = '<p>La licenca finpunkto permesas al vi spuri la nombron da licencoj trovitaj sur viaj aparatoj.<br/> <br/>Por krei eniron por spuri viajn licencojn vi <em>Devas</em> Por disponigi nomon, organizon, la nombro da licencoj akiris kaj la nomon de la softvaro. Sur la kampo <code>match_string</code> Vi devas provizi la nomon de la programaro kiun vi volas spuri, vi povas uzi la procentan signon (%) kiel sovaĝan karton en la matĉo.<br/> <br/></p>';

$GLOBALS["lang"]['<p>The network should be in the format 192.168.1.0/24.<br> <br></p>'] = '<p>La reto devus esti en la formato 192.168.1.0/24.<br/> <br/></p>';

$GLOBALS["lang"]['<p>The primary and optional secondary items should be fully qualified - ie, devices.type or software.name.<br> <br></p>'] = '<p>La primaraj kaj laŭvolaj sekundaraj eroj devus esti plene kvalifikitaj - t.e., aparatoj. tipo aŭ programaro. nomo.<br/> <br/></p>';

$GLOBALS["lang"]['<p>There is no need to do anything if you are running Open-AudIT on a Linux server.<br>
<br>
Windows clients are just fine and require no special actions, however.... to enable this feature the audit script must be run locally on the target Windows system. It cannot be run remotely as we do with WMI calls when running the audit script on one Windows machine, while targeting a second Windows machine. To do this we need to copy the audit script to the target Windows machine and then run it. Unfortunately the service account that Apache runs under is the Local System account. This account has no access to remote (network based) resources. To work around this issue the service must be run under another account. It is easiest to just use the local Administrator account, but you can try any account you like as long as it has the required privileges. The Local System account has as much local access as the local Administrator account.<br>
<br>
See our page on enabling <a href="/index.php/faq?name=Running Open-AudIT Apache Service Under Windows">Running Open-AudIT Apache Service Under Windows</a></p>'] = '<p>Ekzistas neniu bezono farendaĵo io ajn se vi prizorgas Open-AudIT sur Linukso-servilo.<br/><br/>Fenestroj estas justaj kaj postulas neniujn specialajn agojn, aliflanke ... rajtigi tiun trajton la reviziomanuskripto devas esti prizorgita loke sur la cel Windows-sistemon. Ĝi ne povas esti prizorgita malproksime kiel ni faras kun WMI-vokoj dum prizorgado de la reviziomanuskripto sur unu Fenestrojn, celante duan Fenestrojn. Por fari tion ni devas kopii la reviziomanuskripton al la celo Windows-maŝino kaj tiam prizorgi ĝin. Bedaŭrinde la servokonto ke apaĉkuroj sub estas la Local System-konto. Tiu raporto havas neniun aliron al malproksimaj (reto bazita) resursoj. Por labori ĉirkaŭ tiu temo la servo devas esti prizorgita sub alian raporton. Estas plej facile uzi la lokan Administran konton, sed vi povas provi ajnan raporton vi kiel longe kiel ĝi havas la postulatajn privilegiojn. La Loka Sistemo-konto havas tiel multe da loka aliro kiel la loka Administranto-konto.<br/><br/>Vidu nian paĝon ebliga <a href="/index.php/faq?name=Running Open-AudIT Apache Service Under Windows">Kuranta Open-AudIT Apache Service Sub Fenestroj</a></p>';

$GLOBALS["lang"]['<p>These are the devices that live within a rack.<br> <br></p>'] = '<p>Tiuj estas la aparatoj kiuj vivas ene de rako.<br/> <br/></p>';

$GLOBALS["lang"]['<p>This endpoint enables you to add your cloud infrastructure details. Open-AudIT will then reach out to your clouds using their native API and return your servers, just like any other device in Open-AudIT.<br> <br><em>NOTE</em> - To use this feature, we <em>must</em> enable the configuration items match_mac (for AWS) and match_hostname (for Azure). This will be done automatically the first time a cloud discovery is executed.<br> <br>Credentials for your cloud (<a href="/index.php/faq?name=Credentials for Microsoft Azure used in Cloud Discovery">Azure</a> or <a href="/index.php/faq?name=Credentials for Amazon AWS used in Cloud Discovery">AWS</a>) are required.<br> <br></p>'] = '<p>Ĉi tiu punkto ebligas al vi aldoni viajn nubajn infrastrukturajn detalojn. Open-AudIT tiam atingos viajn nubojn uzante ilian indiĝenan API kaj revenos viajn servilojn, same kiel iu alia aparato en Open-AudIT.<br/> <br/><em>Ne</em> Por uzi tiun trajton, ni <em>Devas</em> ebligi la agordon erojn matĉo_mac (por AWS) kaj matĉo_hostname (por Azure). Tio estos farita aŭtomate la unuan fojon nubotrovaĵo estas efektivigita.<br/> <br/>Saluton [esprimas al vi] - [iu persono, kiu persono estas] Blazio.<a href="/index.php/faq?name=Credentials for Microsoft Azure used in Cloud Discovery">Azure Azure</a> aŭ aŭ <a href="/index.php/faq?name=Credentials for Amazon AWS used in Cloud Discovery">AWS</a>estas postulataj.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Vulnerabilities reporting based on the NIST CVE feed.<br> <br></p>'] = '<p>Vulnerabilities raportado bazita sur la NIST CVE-sendo.<br/> <br/></p>';

$GLOBALS["lang"]['<p>We initially setup the default list of scripts with the default options. These default scripts cannot be deleted. You can create additional scripts for use by you as required. Your script will be based on one of the existing scripts and have custom options applied. The scripts can then be downloaded from the list page at menu -> Discover -> Audit Scripts -> List Audit Scripts<br> <br></p>'] = '<p>Ni komence aranĝos la defaŭltan liston de manuskriptoj kun la defaŭltaj opcioj. Tiuj defaŭltaj manuskriptoj ne povas esti forigitaj. Vi povas krei kromajn manuskriptojn por uzo de vi kiel postulate. Via manuskripto estos bazita sur unu el la ekzistantaj manuskriptoj kaj havas kutimo eblojn aplikitaj. La manuskriptoj tiam povas esti elŝutitaj de la listpaĝo ĉe menuo -> Malkovro -> Audit Scripts -> Listo de Audit Scripts<br/> <br/></p>';

$GLOBALS["lang"]['<p>When using Regex for matching, a helpful page can be found on the <a href="https://www.php.net/manual/en/regexp.reference.meta.php" target="_blank"> PHP website</a>. Some differences to Perl Regex can be found <a href="https://www.php.net/manual/en/reference.pcre.pattern.differences.php" target="_blank">here</a>.</p>'] = '<p>Dum uzado de Regex por egalado, utila paĝo povas esti trovita sur la <a href="https://www.php.net/manual/en/regexp.reference.meta.php" target="_blank"> PHP retejo</a>. Kelkaj diferencoj al Perl Regex povas esti trovitaj <a href="https://www.php.net/manual/en/reference.pcre.pattern.differences.php" target="_blank">Ĉi tie ĉi</a>.</p>';

$GLOBALS["lang"]['<p>Widgets can easily be created to show whatever is specific to your environment on your dashboards.<br> <br></p>'] = '<p>Widgets povas facile esti kreita por montri kio ajn estas specifa por via medio sur via dashboards.<br/> <br/></p>';

$GLOBALS["lang"]['<p>With Open-AudIT Professional and Enterprise you can automate and schedule discoveries, report generation, or baseline checks to run when you want, and as often as you need. Schedule your discoveries to run nightly and reports to be generated and emailed to key personnel each morning. Complex or simple schedules, device discovery and report generation is just a click away.<br> <br>Create individual discovery schedules for each subnet or AD controller, add in reports to be created for targeted audiences. Develop simple or complex schedules to support company needs, avoid backups or impact to operations, or simply to spread the load and speed-up audit completion.<br> <br></p>'] = '<p>Kun Open-AudIT Profesia kaj Enterprise vi povas aŭtomatigi kaj plani eltrovaĵojn, raporti generacion, aŭ bazliniajn ĉekojn por kuri kiam vi deziras, kaj tiel ofte kiel vi bezonas. Horaro your eltrovaĵoj por kuri nokta kaj raportoj por esti generitaj kaj retpoŝtigitaj al esenca personaro ĉiun matenon. Kompleksa aŭ simpla horaro, aparattrovaĵo kaj raportogeneracio estas nur klako for.<br/> <br/>Krei individuajn eltrovaĵohorarojn por ĉiu subreto aŭ AD-kontrolisto, aldoni en raportoj por esti kreitaj por laŭcelaj spektantaroj. Evoluigi simplajn aŭ kompleksajn horarojn por apogi firmaobezonojn, eviti rezervaĵojn aŭ efikon al operacioj, aŭ simple por disvastigi la ŝarĝon kaj rapid-supren reviziokompletigon.<br/> <br/></p>';

$GLOBALS["lang"]['<p>You can create a script with all the options for any of the existing audit scripts - not just Windows. AIX, ESX, Linux, OSX and Windows are all covered.<br> <br></p>'] = '<p>Vi povas krei manuskripton kun ĉiuj opcioj por iuj da la ekzistantaj reviziomanuskriptoj - ne ĵus Fenestroj. AIX, ESX, Linukso, OSX kaj Fenestroj estas ĉiuj kovritaj.<br/> <br/></p>';

$GLOBALS["lang"]['<p>You can use the percent % sign as a wildcard in the match_string.<br> <br></p>'] = '<p>Vi povas uzi la %-signon kiel sovaĝan karton en la matĉo.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Your racks help refine exactly where your devices are located.<br> <br></p>'] = '<p>Viaj rakoj helpas rafini precize kie viaj aparatoj situas.<br/> <br/></p>';

$GLOBALS["lang"]['A Google Maps API Key is required for this function.'] = 'Google Mapoj API API Ŝlosilo estas necesa por tiu funkcio.';

$GLOBALS["lang"]['A JSON array of device IDs that will have this benchmark executed.'] = 'JSON aro de aparato IDoj kiuj havos tiun komparnormon efektivigita.';

$GLOBALS["lang"]['A JSON array of objects matching the software name taken from the CVE, enriched with the software name retrieved by Open-AudIT.'] = 'JSON aro de objektoj egalante la softvarnomon prenitan de la CVE, riĉigita kun la softvarnomo prenita fare de Open-AudIT.';

$GLOBALS["lang"]['A JSON array of values to test for this vulnerability.'] = 'JSON aro de valoroj por testi pri tiu vundebleco.';

$GLOBALS["lang"]['A JSON document containing the Orgs assigned to this user. IDs taken from <code>orgs.id</code>. If a user has access to an Org, they have access to that Orgs descendants.'] = 'JSON-dokumento enhavanta la Orgs asignita al tiu uzanto. La jenaj paĝoj ligas al <code>orgs.id</code>. Se uzanto havas aliron al Org, ili havas aliron al tiu Orgs posteuloj.';

$GLOBALS["lang"]['A JSON document containing the required attributes depending on <code>scripts.type</code>.'] = 'JSON-dokumento enhavanta la postulatajn atributojn depende de <code>scripts.type</code>.';

$GLOBALS["lang"]['A JSON document containing the required attributes overriding the chosen discovery_scan_options.'] = 'JSON-dokumento enhavanta la postulatajn atributojn superregante la elektitajn malkovrojn.';

$GLOBALS["lang"]['A JSON document containing the required attributes overriding the default device match options.'] = 'JSON-dokumento enhavanta la postulatajn atributojn superregante la defaŭltan aparaton matĉo opcioj.';

$GLOBALS["lang"]['A JSON document containing the roles assigned to this user. Role names taken from <code>roles.name</code>.'] = 'JSON dokumento enhavanta la rolojn asignitajn al tiu uzanto. Rolnomoj prenitaj de <code>roles.name</code>.';

$GLOBALS["lang"]['A JSON object containing an array of attributes to change if the match occurs.'] = 'JSON-objekto enhavanta aron de atributoj por ŝanĝiĝi se la matĉo okazas.';

$GLOBALS["lang"]['A JSON object containing an array of attributes to match.'] = 'JSON-objekto enhavanta aron de atributoj por egali.';

$GLOBALS["lang"]['A JSON object containing collection specific options.'] = 'JSON-objekto enhavanta kolekton specifajn opciojn.';

$GLOBALS["lang"]['A JSON object populated via a Cloud discovery.'] = 'JSON-objekto loĝita per Nubo-trovaĵo.';

$GLOBALS["lang"]['A JSON representation containing the details of the queue item to be executed.'] = 'JSON-reprezentado enhavanta la detalojn de la atendospeco por esti efektivigita.';

$GLOBALS["lang"]['A JSON representation of the fields for this integration.'] = 'JSON-reprezentado de la kampoj por tiu integriĝo.';

$GLOBALS["lang"]['A JSON representation of the individual tests and their results on all devices this baseline has been run against.'] = 'JSON-reprezentado de la individuaj testoj kaj iliaj rezultoj sur ĉiuj aparatoj tiu bazlinio estis prizorgita kontraŭ.';

$GLOBALS["lang"]['A JSON representation of the tests that make up this policy.'] = 'JSON-reprezentado de la testoj kiuj konsistigas tiun politikon.';

$GLOBALS["lang"]['A URL to a file to download.'] = 'URL al dosiero elŝuti.';

$GLOBALS["lang"]['A calculated field that displays the number of times this piece of software was found on the computers in the selected Org (and its descendants if configured).'] = 'kalkulis kampon kiu elmontras la nombron da tempoj tiu peco de softvaro estis trovita sur la komputiloj en la elektita Org (kaj ĝiaj posteuloj se aranĝite).';

$GLOBALS["lang"]['A collector is either in Collector or Stand-Alone mode.'] = 'kolektanto estas aŭ en kolektanto aŭ Stand-Alone-reĝimo.';

$GLOBALS["lang"]['A comma separated list of applicable CVEs.'] = 'Komo apartigis liston de uzeblaj CVEoj.';

$GLOBALS["lang"]['A comma separated list of values, one of which can be selected.'] = 'Komo apartigis liston de valoroj, unu el kiuj povas esti selektita.';

$GLOBALS["lang"]['A command to run. When the agent is Windows based, this command is run from within the powershell agent.'] = 'komando por kuri. Kiam la agento estas Fenestroj bazita, tiu komando estas prizorgita de ene de la Powershell agento.';

$GLOBALS["lang"]['A list of custom TCP ports to scan (22 is SSH, 135 is WMI, 62078 is iPhone sync).'] = 'Listo de kutimo TCP-havenoj por skani (22 estas SSH, 135 estas WMI, 62078 estas iPhono-sinkrono.';

$GLOBALS["lang"]['A list of custom UDP ports to scan (161 is SNMP).'] = 'Listo de kutimo UDP-havenoj por skani (161 estas SNMP).';

$GLOBALS["lang"]['A lower number means it will be applied before other rules.'] = 'Pli malalta nombro signifas ke ĝi estos aplikita antaŭ aliaj reguloj.';

$GLOBALS["lang"]['A lower number means it will be applied before other rules. The default weight is 100.'] = 'Pli malalta nombro signifas ke ĝi estos aplikita antaŭ aliaj reguloj. La defaŭlta pezo estas 100.';

$GLOBALS["lang"]['A password (stored as a hash) that enables logon when using application authentication.'] = 'pasvorton (venkita kiel hash) kiu rajtigas emblemon dum uzado de aplikiĝaŭtentigo.';

$GLOBALS["lang"]['A routing domain or address space where the IP addresses and MAC addresses are unique.'] = 'Turnanta domajno aŭ adresspaco kie la IP-adresoj kaj MAC-adresoj estas unikaj.';

$GLOBALS["lang"]['A security zone is a administrative domain or policy domain within the Network Domain.'] = 'Sekureco-zono estas administra domajno aŭ strategiodomajno ene de la Reto-Domain.';

$GLOBALS["lang"]['A short description of the log entry.'] = 'Mallonga priskribo de la loga eniro.';

$GLOBALS["lang"]['A string that matches the <code>software.name</code> attribute. You can use the standard SQL wildcard of percent (%) to match one or more characters.'] = 'Akordo kiu egalas la <code>software.name</code> atribu. Vi povas uzi la norman SQL-sovaĝan karton de procentoj (%) por egali unu aŭ pluraj karakteroj.';

$GLOBALS["lang"]['A vulnerability affecting availability may allow attackers to disrupt services, crash systems, or cause denial-of-service (DoS) (None, Low, High).'] = 'vundebleco influanta haveblecon povas permesi al atakantoj interrompi servojn, kraŝsistemojn, aŭ kaŭzi neo-de-servon (DoS) ( None, Low, High).';

$GLOBALS["lang"]['A vulnerability affecting confidentiality may allow attackers to read sensitive data, such as personal information, credentials, or proprietary business data (None, Low, High).'] = 'vundebleco influanta konfidencon povas permesi al atakantoj legi sentemajn datenojn, kiel ekzemple personaj informoj, akreditaĵoj, aŭ proprietajn komercdatenojn ( None, Low, High).';

$GLOBALS["lang"]['A vulnerability affecting integrity may allow attackers to modify data, inject malicious code, or alter system configurations (None, Low, High).'] = 'vundebleco influanta integrecon povas permesi al atakantoj modifi datenojn, injekcii malican kodon, aŭ ŝanĝi sistemkonfiguraciojn ( None, Low, High).';

$GLOBALS["lang"]['AD Group'] = 'AD Group';

$GLOBALS["lang"]['ADSL, HFC, ISDN, etc.'] = 'ADSL, HFC, ISDN, ktp.';

$GLOBALS["lang"]['AIX'] = 'AIXAIX';

$GLOBALS["lang"]['ALL IPs'] = 'Ĉiuj IPj';

$GLOBALS["lang"]['API / Web Access'] = 'API / Web Access';

$GLOBALS["lang"]['API Documentation'] = 'API Dokumentado';

$GLOBALS["lang"]['API Key required.'] = 'API Ŝlosilo postulis.';

$GLOBALS["lang"]['API Result'] = 'API Result';

$GLOBALS["lang"]['About'] = 'Ĉirkaŭ';

$GLOBALS["lang"]['Accept'] = 'Akcepto';

$GLOBALS["lang"]['access_point'] = 'Aliro Point';

$GLOBALS["lang"]['Access Point'] = 'Aliro Point';

$GLOBALS["lang"]['access_token'] = 'Aliro Token';

$GLOBALS["lang"]['Access Token'] = 'Aliro Token';

$GLOBALS["lang"]['ack_by'] = 'Ack By';

$GLOBALS["lang"]['Ack By'] = 'Ack By';

$GLOBALS["lang"]['ack_date'] = 'Ack Dato';

$GLOBALS["lang"]['Ack Date'] = 'Ack Dato';

$GLOBALS["lang"]['ack_time'] = 'Ack Tempo';

$GLOBALS["lang"]['Ack Time'] = 'Ack Tempo';

$GLOBALS["lang"]['action'] = 'Ago de Ago';

$GLOBALS["lang"]['Action'] = 'Ago de Ago';

$GLOBALS["lang"]['action_audit'] = 'Action Audit';

$GLOBALS["lang"]['Action Audit'] = 'Action Audit';

$GLOBALS["lang"]['action_command'] = 'Action Command';

$GLOBALS["lang"]['Action Command'] = 'Action Command';

$GLOBALS["lang"]['action_date'] = 'Ago Dato de Ago';

$GLOBALS["lang"]['Action Date'] = 'Ago Dato de Ago';

$GLOBALS["lang"]['action_devices_assigned_to_location'] = 'Ago Devices Assigned al Loko';

$GLOBALS["lang"]['Action Devices Assigned To Location'] = 'Ago Devices Assigned al Loko';

$GLOBALS["lang"]['action_devices_assigned_to_org'] = 'Ago Devices Assigned al Org';

$GLOBALS["lang"]['Action Devices Assigned To Org'] = 'Ago Devices Assigned al Org';

$GLOBALS["lang"]['action_download'] = 'Elŝutiĝo';

$GLOBALS["lang"]['Action Download'] = 'Elŝutiĝo';

$GLOBALS["lang"]['action_uninstall'] = 'Ago Uninstall';

$GLOBALS["lang"]['Action Uninstall'] = 'Ago Uninstall';

$GLOBALS["lang"]['actioned'] = 'Agordi';

$GLOBALS["lang"]['Actioned'] = 'Agordi';

$GLOBALS["lang"]['actioned_by'] = 'Agita per';

$GLOBALS["lang"]['Actioned By'] = 'Agita per';

$GLOBALS["lang"]['actioned_date'] = 'Agita Dato';

$GLOBALS["lang"]['Actioned Date'] = 'Agita Dato';

$GLOBALS["lang"]['actions'] = 'Agoj';

$GLOBALS["lang"]['Actions'] = 'Agoj';

$GLOBALS["lang"]['Activate'] = 'Activate';

$GLOBALS["lang"]['Activate Free License'] = 'Activate Free License';

$GLOBALS["lang"]['Activate Key'] = 'Activate Ŝlosilo';

$GLOBALS["lang"]['Activate a free Enterprise license'] = 'Activate libera Enterprise licenco';

$GLOBALS["lang"]['Active'] = 'Aktivaĵo';

$GLOBALS["lang"]['Active / Active'] = 'Aktiva / aktiva';

$GLOBALS["lang"]['Active / Passive'] = 'Aktiva / Passive';

$GLOBALS["lang"]['Active Directory'] = 'Aktiva Adresaro';

$GLOBALS["lang"]['Active Directory Domain'] = 'Aktiva Adresaro Domain';

$GLOBALS["lang"]['active_directory_ou'] = 'Aktiva Adresaro';

$GLOBALS["lang"]['Active Directory Ou'] = 'Aktiva Adresaro';

$GLOBALS["lang"]['Active Directory Server'] = 'Aktiva Adresaro-Servilo';

$GLOBALS["lang"]['ad_domain'] = 'Ad Domain';

$GLOBALS["lang"]['Ad Domain'] = 'Ad Domain';

$GLOBALS["lang"]['ad_group'] = 'Ad Group';

$GLOBALS["lang"]['Ad Group'] = 'Ad Group';

$GLOBALS["lang"]['ad_server'] = 'AdServilo';

$GLOBALS["lang"]['Ad Server'] = 'AdServilo';

$GLOBALS["lang"]['Add'] = 'Aldonu aldoni';

$GLOBALS["lang"]['Add Credentials'] = 'Aldonu kreantojn';

$GLOBALS["lang"]['Add Device'] = 'Aldonu al la';

$GLOBALS["lang"]['Add Device to Application'] = 'Aldonu al aplikaĵo';

$GLOBALS["lang"]['Add Device to Cluster'] = 'Aldonu al Cluster';

$GLOBALS["lang"]['Add Exception'] = 'Aldonu escepton';

$GLOBALS["lang"]['Add Field'] = 'Aldonu la kampon';

$GLOBALS["lang"]['Add If'] = 'Aldonu se';

$GLOBALS["lang"]['Add Policies from Device'] = 'Aldonu Politikojn de Device';

$GLOBALS["lang"]['Add Policy'] = 'Aldonu politikon';

$GLOBALS["lang"]['Add Then'] = 'Aldonu la';

$GLOBALS["lang"]['Add image'] = 'Aldonu bildon';

$GLOBALS["lang"]['additional_items'] = 'Kroma ĝi';

$GLOBALS["lang"]['Additional Items'] = 'Kroma ĝi';

$GLOBALS["lang"]['address'] = 'Adreso';

$GLOBALS["lang"]['Address'] = 'Adreso';

$GLOBALS["lang"]['Admin'] = 'Admin';

$GLOBALS["lang"]['admin_status'] = 'Admin-statuso';

$GLOBALS["lang"]['Admin Status'] = 'Admin-statuso';

$GLOBALS["lang"]['advanced'] = 'Progresinta';

$GLOBALS["lang"]['Advanced'] = 'Progresinta';

$GLOBALS["lang"]['Afghanistan'] = 'Afganio Afganio';

$GLOBALS["lang"]['agents'] = 'Agentoj';

$GLOBALS["lang"]['Agents'] = 'Agentoj';

$GLOBALS["lang"]['Aggressive'] = 'Agreso';

$GLOBALS["lang"]['Aland Islands'] = 'Alandinsuloj';

$GLOBALS["lang"]['Albania'] = 'Albanio Albanio Albanio Albanio';

$GLOBALS["lang"]['alert_style'] = 'Alert Style';

$GLOBALS["lang"]['Alert Style'] = 'Alert Style';

$GLOBALS["lang"]['Algeria'] = 'Alĝerio';

$GLOBALS["lang"]['algorithm'] = 'Algorithm';

$GLOBALS["lang"]['Algorithm'] = 'Algorithm';

$GLOBALS["lang"]['alias'] = 'Aliaj';

$GLOBALS["lang"]['Alias'] = 'Aliaj';

$GLOBALS["lang"]['All'] = 'Ĉiuj ĉiuj';

$GLOBALS["lang"]['All IPs'] = 'Ĉiuj IPj';

$GLOBALS["lang"]['All Policies'] = 'Ĉiuj Politikoj';

$GLOBALS["lang"]['All Queued Items'] = 'Ĉio Queued Items';

$GLOBALS["lang"]['Amazon AWS Fields'] = 'Amazon AWS Kampoj';

$GLOBALS["lang"]['American Samoa'] = 'Usona Samoo';

$GLOBALS["lang"]['An array of <code>benchmarks.id</code>.'] = 'Situo de <code>benchmarks.id</code>.';

$GLOBALS["lang"]['An array of <code>devices.id</code>.'] = 'Situo de <code>devices.id</code>.';

$GLOBALS["lang"]['An array of object representing external links to more information.'] = 'Aro de objekto reprezentanta eksterajn ligilojn al pli da informoj.';

$GLOBALS["lang"]['An encrypted JSON document containing the required attributes depending on the <code>credentials.type</code>.'] = 'ĉifrita JSON-dokumento enhavanta la postulatajn atributojn depende de la <code>credentials.type</code>.';

$GLOBALS["lang"]['An indication of the level of service required by this site.'] = 'Indiko de la nivelo de servo postulita fare de tiu ejo.';

$GLOBALS["lang"]['An internal field that indicates if the discovery has completed.'] = 'Interna kampo kiu indikas se la eltrovaĵo kompletigis.';

$GLOBALS["lang"]['An optional GeoCode'] = 'Laŭvola GeoCode';

$GLOBALS["lang"]['An optional password to use sudo.'] = 'Laŭvola pasvorto por uzi la usonan.';

$GLOBALS["lang"]['Andorra'] = 'Andoro';

$GLOBALS["lang"]['Angola'] = 'Angolo';

$GLOBALS["lang"]['Anguilla'] = 'Anguilla';

$GLOBALS["lang"]['Antarctica'] = 'Antarkto';

$GLOBALS["lang"]['AntiVirus'] = 'AntiVirus';

$GLOBALS["lang"]['Antigua and Barbuda'] = 'Antigvo kaj Barbuda';

$GLOBALS["lang"]['Antivirus'] = 'Kontraŭvirus';

$GLOBALS["lang"]['Any TCP ports (comma seperated, no spaces) you wish to exclude from this discovery. Only available when using Nmap 7+.'] = 'Ĉiuj TCP-havenoj (komma seperated, neniuj spacoj) vi deziras ekskludi de tiu eltrovaĵo. Nur havebla dum uzado de Nmap 7+.';

$GLOBALS["lang"]['Any UDP ports (comma seperated, no spaces) you wish to exclude from this discovery. Only available when using Nmap 7+.'] = 'Ĉiuj UDP-havenoj (komma seperite, neniuj spacoj) vi deziras ekskludi de tiu eltrovaĵo. Nur havebla dum uzado de Nmap 7+.';

$GLOBALS["lang"]['Any additional documentation you need.'] = 'Ĉiu alia dokumento, kiun vi bezonas.';

$GLOBALS["lang"]['Any additional notes you care to make.'] = 'Ĉiuj aliaj notoj vi zorgas fari.';

$GLOBALS["lang"]['Any devices will be assigned to this Org when they run their audit script (if set). Links to <code>orgs.id</code>.'] = 'Ĉiuj aparatoj estos asignitaj al tiu Org kiam ili prizorgas sian reviziomanuskripton (se aro). Ligiloj al <code>orgs.id</code>.';

$GLOBALS["lang"]['Any discovered devices will be assigned to this Location if set. Links to <code>locations.id</code>.'] = 'Ĉiuj malkovritaj aparatoj estos asignitaj al tiu loko se aro. Ligiloj al <code>locations.id</code>.';

$GLOBALS["lang"]['Any discovered devices will be assigned to this Location when they run their audit script (if set). Links to <code>locations.id</code>.'] = 'Ĉiuj malkovritaj aparatoj estos asignitaj al tiu loko kiam ili prizorgas sian reviziomanuskripton (se aro). Ligiloj al <code>locations.id</code>.';

$GLOBALS["lang"]['Any discovered devices will be assigned to this Org if set. If not set, they are assigned to the <code>org_id</code> of this discovery. Links to <code>orgs.id</code>.'] = 'Ĉiuj malkovritaj aparatoj estos asignitaj al tiu Org se aro. Se ne, ili estas asignitaj al la <code>org_id</code> de tiu malkovro. Ligiloj al <code>orgs.id</code>.';

$GLOBALS["lang"]['Any required filter. NOTE: When type = traffic, this represents the font-awesome icon.'] = 'Ĉiu bezonata filtrilo. NOTO: Kiam tipo = trafiko, tio reprezentas la tiparon-fortan ikonon.';

$GLOBALS["lang"]['Any specific TCP ports you wish tested (comma seperated, no spaces).'] = 'Ĉiuj specifaj TCP-havenoj vi deziras testitajn (komma seperite, neniuj spacoj).';

$GLOBALS["lang"]['Any specific UDP ports you wish tested (comma seperated, no spaces).'] = 'Ĉiuj specifaj UDP-havenoj vi deziras testitan (komma seperita, neniuj spacoj).';

$GLOBALS["lang"]['Application'] = 'Apliko';

$GLOBALS["lang"]['application_id'] = 'Identigi ID';

$GLOBALS["lang"]['Application ID'] = 'Identigi ID';

$GLOBALS["lang"]['Application Licenses'] = 'Apliki licencojn';

$GLOBALS["lang"]['Application, Operating System or Hardware.'] = 'Apliki, Funkciigante Sistemon aŭ Hardvaron.';

$GLOBALS["lang"]['applications'] = 'Aplikoj';

$GLOBALS["lang"]['Applications'] = 'Aplikoj';

$GLOBALS["lang"]['applied'] = 'Applied';

$GLOBALS["lang"]['Applied'] = 'Applied';

$GLOBALS["lang"]['Approved'] = 'Aplikita';

$GLOBALS["lang"]['April'] = 'April April aprilo';

$GLOBALS["lang"]['architecture'] = 'Arkitekturo Arkitekturo';

$GLOBALS["lang"]['Architecture'] = 'Arkitekturo Arkitekturo';

$GLOBALS["lang"]['Are you sure you want to delete this input item?'] = 'Ĉu vi scias, ke vi volas forigi ĉi tiun eniraĵon?';

$GLOBALS["lang"]['Are you sure you want to delete this output item?'] = 'Ĉu vi volas forigi tiun produktaĵon?';

$GLOBALS["lang"]['Are you sure? This will remove all queue entries and prevent the remaining IPs from being discovered.'] = 'Ĉu vi certas? Tio forigos ĉiujn atendovicojn kaj malhelpas la ceterajn IPojn esti malkovrita.';

$GLOBALS["lang"]['Are you sure? This will reset the queue processing count and could cause load on the server.'] = 'Ĉu vi certas? Tio rekomencos la atendoprenpretigokalkulon kaj povis kaŭzi ŝarĝon sur la servilo.';

$GLOBALS["lang"]['area'] = 'Areo';

$GLOBALS["lang"]['Area'] = 'Areo';

$GLOBALS["lang"]['Argentina'] = 'Argentino';

$GLOBALS["lang"]['Armenia'] = 'Armenio Armenio Armenio';

$GLOBALS["lang"]['arp'] = 'Arp';

$GLOBALS["lang"]['Arp'] = 'Arp';

$GLOBALS["lang"]['Aruba'] = 'Arubo';

$GLOBALS["lang"]['As per the attributes for device environments. Production, Training, et al.'] = 'Kiel per la atributoj por maŝinmedioj. Produktado, trejnado, et al.';

$GLOBALS["lang"]['As you have Collectors registered, please choose where to execute this discovery.'] = 'Kiel vi havas kolektantojn registritaj, bonvolu elekti kie efektivigi tiun eltrovaĵon.';

$GLOBALS["lang"]['Ask me later'] = 'Demandu min poste';

$GLOBALS["lang"]['Ask the Community for help or contribute answers for others.'] = 'Demandu la Komunumon por helpi aŭ kontribui respondojn al aliaj.';

$GLOBALS["lang"]['aspect_ratio'] = 'Aspekto Ratio';

$GLOBALS["lang"]['Aspect Ratio'] = 'Aspekto Ratio';

$GLOBALS["lang"]['Asset ID'] = 'Kiel instali ID';

$GLOBALS["lang"]['asset_ident'] = 'Ident';

$GLOBALS["lang"]['Asset Ident'] = 'Ident';

$GLOBALS["lang"]['asset_number'] = 'Asset Number';

$GLOBALS["lang"]['Asset Number'] = 'Asset Number';

$GLOBALS["lang"]['asset_tag'] = 'Asset Tag';

$GLOBALS["lang"]['Asset Tag'] = 'Asset Tag';

$GLOBALS["lang"]['Assign Device to Application'] = 'Assign Device al Apliko';

$GLOBALS["lang"]['Assign Device to Cluster'] = 'Assign Device al Cluster';

$GLOBALS["lang"]['Assign Device to Location'] = 'Assign Device al Loko';

$GLOBALS["lang"]['Assign Device to Organisation'] = 'Assign Device al organizo';

$GLOBALS["lang"]['Assign Devices to Location'] = 'Assignaj aparatoj al loko';

$GLOBALS["lang"]['Assign Devices to Organisation'] = 'Assignaj aparatoj al organizo';

$GLOBALS["lang"]['Assign an Operator'] = 'Suba maldekstra butono [戻る] estas por [送信] por [Sendi].';

$GLOBALS["lang"]['Assigned To'] = 'Subskribita al';

$GLOBALS["lang"]['At present we can use netstat_ports, software and users.'] = 'Nun ni povas uzi retstat_port, programaro kaj uzantoj.';

$GLOBALS["lang"]['attached_device_id'] = 'Atedita Device ID';

$GLOBALS["lang"]['Attached Device ID'] = 'Atedita Device ID';

$GLOBALS["lang"]['attached_to'] = 'Alkroĉita al';

$GLOBALS["lang"]['Attached To'] = 'Alkroĉita al';

$GLOBALS["lang"]['attachment'] = 'Ĉetachment';

$GLOBALS["lang"]['Attachment'] = 'Ĉetachment';

$GLOBALS["lang"]['attachments'] = 'Atutoj';

$GLOBALS["lang"]['Attachments'] = 'Atutoj';

$GLOBALS["lang"]['attack_complexity'] = 'Atako-komplekseco';

$GLOBALS["lang"]['Attack Complexity'] = 'Atako-komplekseco';

$GLOBALS["lang"]['attack_requirements'] = 'Atako-postuloj';

$GLOBALS["lang"]['Attack Requirements'] = 'Atako-postuloj';

$GLOBALS["lang"]['attack_vector'] = 'Atako Vector';

$GLOBALS["lang"]['Attack Vector'] = 'Atako Vector';

$GLOBALS["lang"]['Attribute'] = 'Atributoj';

$GLOBALS["lang"]['attributes'] = 'Atributoj';

$GLOBALS["lang"]['Attributes'] = 'Atributoj';

$GLOBALS["lang"]['Audit'] = 'Audit';

$GLOBALS["lang"]['Audit AIX'] = 'AIX AIX';

$GLOBALS["lang"]['Audit ESXi'] = 'Audit ESXi';

$GLOBALS["lang"]['Audit Linux'] = 'Audit Linux';

$GLOBALS["lang"]['audit_log'] = 'Disponebla dosiero';

$GLOBALS["lang"]['Audit Log'] = 'Disponebla dosiero';

$GLOBALS["lang"]['Audit My PC'] = 'Aŭdi mian komputilon';

$GLOBALS["lang"]['Audit OSX'] = 'Audit OSX';

$GLOBALS["lang"]['Audit Result Input'] = 'Audit Result Input';

$GLOBALS["lang"]['Audit Status'] = 'Aŭtomata statuso';

$GLOBALS["lang"]['Audit Windows'] = 'Disponigi fenestrojn';

$GLOBALS["lang"]['Audit the Device'] = 'Aŭdi la Device';

$GLOBALS["lang"]['Audits'] = 'Audits';

$GLOBALS["lang"]['August'] = 'Aŭgusto Aŭgusto Aŭgusto';

$GLOBALS["lang"]['Australia'] = 'Aŭstralio';

$GLOBALS["lang"]['Austria'] = 'Aŭstrio';

$GLOBALS["lang"]['Auth'] = 'Auth';

$GLOBALS["lang"]['auth'] = 'Auth';

$GLOBALS["lang"]['Authentication Passphrase'] = 'Aŭtentigo Passphrase';

$GLOBALS["lang"]['authority_key_ident'] = 'Aŭtoritato Ŝlosilo Ident';

$GLOBALS["lang"]['Authority Key Ident'] = 'Aŭtoritato Ŝlosilo Ident';

$GLOBALS["lang"]['Auto'] = 'Aŭto';

$GLOBALS["lang"]['auto_renew'] = 'Aŭto Renew';

$GLOBALS["lang"]['Auto Renew'] = 'Aŭto Renew';

$GLOBALS["lang"]['Auto populated by the Open-AudIT Server.'] = 'Aŭto loĝita fare de la Open-AudIT-Servilo.';

$GLOBALS["lang"]['AutoRenew'] = 'Aŭtorenovigo';

$GLOBALS["lang"]['automatable'] = 'Aŭtomatebla';

$GLOBALS["lang"]['Automatable'] = 'Aŭtomatebla';

$GLOBALS["lang"]['Automatically populated based on the Collectors OS.'] = 'Aŭtike loĝita surbaze de la kolektantoj Os.';

$GLOBALS["lang"]['availability'] = 'Availability';

$GLOBALS["lang"]['Availability'] = 'Availability';

$GLOBALS["lang"]['Azerbaijan'] = 'Azerbajĝano Azerbajĝano';

$GLOBALS["lang"]['BTU Max'] = 'BTU Max';

$GLOBALS["lang"]['BTU Total'] = 'BTU Totala';

$GLOBALS["lang"]['Backup'] = 'Malantaŭa dorso';

$GLOBALS["lang"]['Bahamas the'] = 'Bahamoj';

$GLOBALS["lang"]['Bahrain'] = 'Barejno Barejno';

$GLOBALS["lang"]['Bangladesh'] = 'Bangladeŝo Bangladeŝo';

$GLOBALS["lang"]['bank'] = 'Banka Banko';

$GLOBALS["lang"]['Bank'] = 'Banka Banko';

$GLOBALS["lang"]['Banned'] = 'Banned';

$GLOBALS["lang"]['bar_code'] = 'Bar Code';

$GLOBALS["lang"]['Bar Code'] = 'Bar Code';

$GLOBALS["lang"]['Barbados'] = 'Barbado';

$GLOBALS["lang"]['Base DN'] = 'Bazo DN';

$GLOBALS["lang"]['base_score'] = 'Ĉefa artikolo';

$GLOBALS["lang"]['Base Score'] = 'Ĉefa artikolo';

$GLOBALS["lang"]['base_severity'] = 'Bazo Severity';

$GLOBALS["lang"]['Base Severity'] = 'Bazo Severity';

$GLOBALS["lang"]['based_on'] = 'Surbaze de';

$GLOBALS["lang"]['Based On'] = 'Surbaze de';

$GLOBALS["lang"]['baseline'] = 'Bazlinio';

$GLOBALS["lang"]['Baseline'] = 'Bazlinio';

$GLOBALS["lang"]['baseline_id'] = 'Bazlinio ID';

$GLOBALS["lang"]['Baseline ID'] = 'Bazlinio ID';

$GLOBALS["lang"]['baselines'] = 'Bazoj';

$GLOBALS["lang"]['Baselines'] = 'Bazoj';

$GLOBALS["lang"]['baselines_policies'] = 'Bazlinioj Politikoj';

$GLOBALS["lang"]['Baselines Policies'] = 'Bazlinioj Politikoj';

$GLOBALS["lang"]['Baselines Policy'] = 'Bazoj Politiko';

$GLOBALS["lang"]['Baselines Policy Details'] = 'Bazlinio-Politiko-Detaloj';

$GLOBALS["lang"]['baselines_results'] = 'Bazaj rezultoj';

$GLOBALS["lang"]['Baselines Results'] = 'Bazaj rezultoj';

$GLOBALS["lang"]['Basic'] = 'Baza Baza Baza Baza';

$GLOBALS["lang"]['Belarus'] = 'Belorusio';

$GLOBALS["lang"]['Belgium'] = 'Belgio Belgio';

$GLOBALS["lang"]['Belize'] = 'Belizo Belizo';

$GLOBALS["lang"]['Benchmark'] = 'Benchmark';

$GLOBALS["lang"]['benchmark_id'] = 'Benchmark ID';

$GLOBALS["lang"]['Benchmark ID'] = 'Benchmark ID';

$GLOBALS["lang"]['benchmarks'] = 'Benchmarks';

$GLOBALS["lang"]['Benchmarks'] = 'Benchmarks';

$GLOBALS["lang"]['benchmarks_exceptions'] = 'Benchmarks Esceptoj';

$GLOBALS["lang"]['Benchmarks Exceptions'] = 'Benchmarks Esceptoj';

$GLOBALS["lang"]['benchmarks_log'] = 'Benchmarks Logs';

$GLOBALS["lang"]['Benchmarks Log'] = 'Benchmarks Logs';

$GLOBALS["lang"]['benchmarks_policies'] = 'Benchmarks Politikoj';

$GLOBALS["lang"]['Benchmarks Policies'] = 'Benchmarks Politikoj';

$GLOBALS["lang"]['benchmarks_result'] = 'Benchmarks Result';

$GLOBALS["lang"]['Benchmarks Result'] = 'Benchmarks Result';

$GLOBALS["lang"]['Benin'] = 'Benino';

$GLOBALS["lang"]['Bermuda'] = 'Bermudo Bermuda';

$GLOBALS["lang"]['best_practises'] = 'Plej bona Practises';

$GLOBALS["lang"]['Best Practises'] = 'Plej bona Practises';

$GLOBALS["lang"]['Bhutan'] = 'Butano';

$GLOBALS["lang"]['bios'] = 'Bioj';

$GLOBALS["lang"]['Bios'] = 'Bioj';

$GLOBALS["lang"]['body'] = 'korpo';

$GLOBALS["lang"]['Body'] = 'korpo';

$GLOBALS["lang"]['Bolivia'] = 'Bolivio Bolivio';

$GLOBALS["lang"]['Boolean'] = 'Boolean';

$GLOBALS["lang"]['Boolean 1/0'] = '1/0';

$GLOBALS["lang"]['Boolean y/n'] = 'Boolean y/n';

$GLOBALS["lang"]['boot_device'] = '→ Eventoj:';

$GLOBALS["lang"]['Boot Device'] = '→ Eventoj:';

$GLOBALS["lang"]['bootable'] = '→ Eventoj:';

$GLOBALS["lang"]['Bootable'] = '→ Eventoj:';

$GLOBALS["lang"]['Bosnia and Herzegovina'] = 'Bosnio kaj Hercegovino';

$GLOBALS["lang"]['Botswana'] = 'Bocvano Bocvano';

$GLOBALS["lang"]['Bouvet Island (Bouvetoya)'] = 'Bouvet Island (Bouvetoya)';

$GLOBALS["lang"]['Brazil'] = 'Brazilo';

$GLOBALS["lang"]['Brazilian Portuguese'] = 'Brazila portugala';

$GLOBALS["lang"]['British Indian Ocean Territory (Chagos Archipelago)'] = 'Brita Hinda Oceana Teritorio (Chagos Arkipelago)';

$GLOBALS["lang"]['British Virgin Islands'] = 'Britaj Virgulininsuloj';

$GLOBALS["lang"]['Brunei Darussalam'] = 'Brunejo Darussalam';

$GLOBALS["lang"]['btu_max'] = 'Btu Max';

$GLOBALS["lang"]['Btu Max'] = 'Btu Max';

$GLOBALS["lang"]['btu_total'] = 'Btu Totala';

$GLOBALS["lang"]['Btu Total'] = 'Btu Totala';

$GLOBALS["lang"]['build_number'] = 'Konstrui Nombron';

$GLOBALS["lang"]['Build Number'] = 'Konstrui Nombron';

$GLOBALS["lang"]['build_number_full'] = 'Konstrui Nombron Plena';

$GLOBALS["lang"]['Build Number Full'] = 'Konstrui Nombron Plena';

$GLOBALS["lang"]['Building'] = 'Konstruaĵoj';

$GLOBALS["lang"]['Bulgaria'] = 'Bulgario';

$GLOBALS["lang"]['Bulk Edit'] = 'Bulk Edit';

$GLOBALS["lang"]['Bulk Editing Device Attributes'] = 'Bulk Editing Device Atributoj';

$GLOBALS["lang"]['Burkina Faso'] = 'Burkino';

$GLOBALS["lang"]['Burundi'] = 'Burundo';

$GLOBALS["lang"]['business_requirements'] = 'Komercaj postuloj';

$GLOBALS["lang"]['Business Requirements'] = 'Komercaj postuloj';

$GLOBALS["lang"]['Buy'] = 'Aĉeti aĉetojn';

$GLOBALS["lang"]['Buy More'] = 'Aĉetu pli';

$GLOBALS["lang"]['Buy More Licenses'] = 'Aĉetu pli da permesiloj';

$GLOBALS["lang"]['By'] = 'Antaŭite per';

$GLOBALS["lang"]['CIDR'] = 'GCS';

$GLOBALS["lang"]['CIDR Mask'] = 'GCS Masko';

$GLOBALS["lang"]['cli_config'] = 'CLI Config';

$GLOBALS["lang"]['CLI Config'] = 'CLI Config';

$GLOBALS["lang"]['CPU'] = 'CPU';

$GLOBALS["lang"]['CPUs'] = 'CPUoj';

$GLOBALS["lang"]['CSV'] = 'CSV';

$GLOBALS["lang"]['CVE'] = 'CVE';

$GLOBALS["lang"]['Calculated from discovery.'] = 'Kalkulis la malkovron.';

$GLOBALS["lang"]['Calculated total number of valid IP addresses for this network.'] = 'Kalkulis totalan nombron da validaj IP-adresoj por tiu reto.';

$GLOBALS["lang"]['Calculated upon completion, the time taken to execute this item.'] = 'La tempo prenita por efektivigi tiun objekton.';

$GLOBALS["lang"]['Calculated when integration is run and contains a JSON representation of the devices in this integration. Each links to <code>devices.id</code>.'] = 'Kalkuli kiam integriĝo estas prizorgita kaj enhavas JSON-reprezentadon de la aparatoj en tiu integriĝo. Ĉiuj ligiloj al <code>devices.id</code>.';

$GLOBALS["lang"]['Calculated when integration is run and contains a JSON representation of the locations in this integration. Each links to <code>locations.id</code>.'] = 'Kalkulis kiam integriĝo estas prizorgita kaj enhavas JSON reprezentadon de la lokoj en tiu integriĝo. Ĉiuj ligiloj al <code>locations.id</code>.';

$GLOBALS["lang"]['Calculated when integration is run and contains the number of devices selected from Open-AudIT.'] = 'Kalkuli kiam integriĝo estas prizorgita kaj enhavas la nombron da aparatoj selektitaj de Open-AudIT.';

$GLOBALS["lang"]['Calculated when integration is run and contains the number of devices selected the external system.'] = 'Kalkuli kiam integriĝo estas prizorgita kaj enhavas la nombron da aparatoj selektis la eksteran sistemon.';

$GLOBALS["lang"]['Calculated when integration is run and contains the number of devices to be updated in the external system.'] = 'Kalkuli kiam integriĝo estas prizorgita kaj enhavas la nombron da aparatoj por esti ĝisdatigita en la ekstera sistemo.';

$GLOBALS["lang"]['Calculated when integration is run and contains the number of devices updated in Open-AudIT.'] = 'Kalkuli kiam integriĝo estas prizorgita kaj enhavas la nombron da aparatoj ĝisdatigitaj en Open-AudIT.';

$GLOBALS["lang"]['Cambodia'] = 'Kamboĝo';

$GLOBALS["lang"]['Cameroon'] = 'Kamerunio Kamerunio Kamerunio';

$GLOBALS["lang"]['Campus Area Network'] = 'Campus Area Network';

$GLOBALS["lang"]['Can be  <code>active</code>, <code>passive</code> or blank.'] = 'Povas esti <code>active</code>, <code>passive</code> aŭ malplena.';

$GLOBALS["lang"]['Can be <code>application</code>, <code>compute</code>, <code>database</code>, <code>storage</code>, <code>virtualisation</code>, <code>web</code>, <code>other</code> or blank.'] = 'Povas esti <code>application</code>, <code>compute</code>, <code>database</code>, <code>storage</code>, <code>virtualisation</code>, <code>web</code>, <code>other</code> aŭ malplena.';

$GLOBALS["lang"]['Can be <code>auto</code>, <code>fixed</code>, <code>other</code> or blank.'] = 'Povas esti <code>auto</code>, <code>fixed</code>, <code>other</code> aŭ malplena.';

$GLOBALS["lang"]['Can be <code>high availability</code>, <code>load balancing</code>, <code>performance</code>, <code>storage</code>, <code>other</code> or blank.'] = 'Povas esti <code>high availability</code>, <code>load balancing</code>, <code>performance</code>, <code>storage</code>, <code>other</code> aŭ malplena.';

$GLOBALS["lang"]['Can be <code>line</code>, <code>pie</code> or <code>traffic</code>.'] = 'Povas esti <code>line</code>, <code>pie</code> aŭ aŭ <code>traffic</code>.';

$GLOBALS["lang"]['Can be <code>user</code> or <code>collector</code>.'] = 'Povas esti <code>user</code> aŭ aŭ <code>collector</code>.';

$GLOBALS["lang"]['Can be set by discovery or user.'] = 'Povas esti metita per eltrovaĵo aŭ uzanto.';

$GLOBALS["lang"]['Can be set by discovery or user. Uses the ID from the locations table.'] = 'Povas esti metita per eltrovaĵo aŭ uzanto. Uzu la ID de la tablo de la lokoj.';

$GLOBALS["lang"]['Can the user edit this item.'] = 'La uzanto povas redakti tiun objekton.';

$GLOBALS["lang"]['Canada'] = 'Kanado';

$GLOBALS["lang"]['Cancel'] = 'Cancel';

$GLOBALS["lang"]['capabilities'] = 'Kapabloj';

$GLOBALS["lang"]['Capabilities'] = 'Kapabloj';

$GLOBALS["lang"]['Capacity'] = 'Kapacito';

$GLOBALS["lang"]['Cape Verde'] = 'Kabo-Verdo';

$GLOBALS["lang"]['Capitalise'] = 'ĉefurbo';

$GLOBALS["lang"]['caption'] = 'Kaptaĵo';

$GLOBALS["lang"]['Caption'] = 'Kaptaĵo';

$GLOBALS["lang"]['Cayman Islands'] = 'Kajmana Insularo';

$GLOBALS["lang"]['Cellular Details'] = 'Ĉelaj detaloj';

$GLOBALS["lang"]['Central African Republic'] = 'Centafrika Respubliko';

$GLOBALS["lang"]['certificate'] = 'Atestilo';

$GLOBALS["lang"]['Certificate'] = 'Atestilo';

$GLOBALS["lang"]['certificate_file'] = 'Atestilo-Dosiero';

$GLOBALS["lang"]['Certificate File'] = 'Atestilo-Dosiero';

$GLOBALS["lang"]['certificate_name'] = 'Atestilo';

$GLOBALS["lang"]['Certificate Name'] = 'Atestilo';

$GLOBALS["lang"]['certificates'] = 'Atestiloj';

$GLOBALS["lang"]['Certificates'] = 'Atestiloj';

$GLOBALS["lang"]['Chad'] = 'Ĉadio';

$GLOBALS["lang"]['change_id'] = 'Ŝanĝo ID';

$GLOBALS["lang"]['Change ID'] = 'Ŝanĝo ID';

$GLOBALS["lang"]['change_log'] = 'Ŝanĝoj';

$GLOBALS["lang"]['Change Log'] = 'Ŝanĝoj';

$GLOBALS["lang"]['change_type'] = 'Ŝanĝi tipon';

$GLOBALS["lang"]['Change Type'] = 'Ŝanĝi tipon';

$GLOBALS["lang"]['check_minutes'] = 'Kontrolu protokolojn';

$GLOBALS["lang"]['Check Minutes'] = 'Kontrolu protokolojn';

$GLOBALS["lang"]['Check for SSH on these ports'] = 'Kontrolu por SSH sur tiuj havenoj';

$GLOBALS["lang"]['Check this port for any SSH service.'] = 'Kontrolu tiun havenon por iu SSH-servo.';

$GLOBALS["lang"]['Chile'] = 'Ĉilio';

$GLOBALS["lang"]['China'] = 'Ĉinio';

$GLOBALS["lang"]['Choose'] = 'Elektu elekti';

$GLOBALS["lang"]['Choose (select OS first)'] = 'Elektu (select OS unue)';

$GLOBALS["lang"]['Choose a Device'] = 'Elekti Device';

$GLOBALS["lang"]['Choose a Table'] = 'Elektu tablon';

$GLOBALS["lang"]['Christmas Island'] = 'Kristnaskinsulo';

$GLOBALS["lang"]['cidr'] = 'Cidr';

$GLOBALS["lang"]['Cidr'] = 'Cidr';

$GLOBALS["lang"]['circuit_count'] = 'Cirkvito Count';

$GLOBALS["lang"]['Circuit Count'] = 'Cirkvito Count';

$GLOBALS["lang"]['circuit_status'] = 'Cirkvito';

$GLOBALS["lang"]['Circuit Status'] = 'Cirkvito';

$GLOBALS["lang"]['city'] = 'Urbo City City';

$GLOBALS["lang"]['City'] = 'Urbo City City';

$GLOBALS["lang"]['class'] = 'Klaso de Klaso';

$GLOBALS["lang"]['Class'] = 'Klaso de Klaso';

$GLOBALS["lang"]['class_text'] = 'Klasa Teksto';

$GLOBALS["lang"]['Class Text'] = 'Klasa Teksto';

$GLOBALS["lang"]['Click the Delete button to remove the example devices from Open-AudIT.<br>This will remove the below devices from the database. '] = 'Klaku la Delete butono por forigi la ekzemplo aparatojn de Open-AudIT.<br/>Tio forigos la sub aparatoj de la datumbazo. ';

$GLOBALS["lang"]['Click the Import button below to populate Open-AudIT with example device data.'] = 'Klaku la Importbuton malsupre al populate Open-AudIT kun ekzemplo-aparatodatenoj.';

$GLOBALS["lang"]['Client ID'] = 'Kliento ID';

$GLOBALS["lang"]['client_ident'] = 'Kliento Ident';

$GLOBALS["lang"]['Client Ident'] = 'Kliento Ident';

$GLOBALS["lang"]['client_secret'] = 'La sekreta kliento';

$GLOBALS["lang"]['Client Secret'] = 'La sekreta kliento';

$GLOBALS["lang"]['client_site_name'] = 'Kliento retejo nomo';

$GLOBALS["lang"]['Client Site Name'] = 'Kliento retejo nomo';

$GLOBALS["lang"]['Close'] = 'Fermu proksime';

$GLOBALS["lang"]['Cloud'] = 'nubo';

$GLOBALS["lang"]['Cloud Details'] = 'Nu, Detaloj';

$GLOBALS["lang"]['Cloud Discovery'] = 'nubo Discovery';

$GLOBALS["lang"]['cloud_id'] = 'Nu, la nubo';

$GLOBALS["lang"]['Cloud ID'] = 'Nu, la nubo';

$GLOBALS["lang"]['cloud_log'] = 'Cloud Log';

$GLOBALS["lang"]['Cloud Log'] = 'Cloud Log';

$GLOBALS["lang"]['cloud_name'] = 'Nubo nomo';

$GLOBALS["lang"]['Cloud Name'] = 'Nubo nomo';

$GLOBALS["lang"]['Cloud Network'] = 'Cloud Network';

$GLOBALS["lang"]['clouds'] = 'nuboj';

$GLOBALS["lang"]['Clouds'] = 'nuboj';

$GLOBALS["lang"]['cluster'] = 'Cluster';

$GLOBALS["lang"]['Cluster'] = 'Cluster';

$GLOBALS["lang"]['cluster_id'] = 'Aŭtomata identigilo';

$GLOBALS["lang"]['Cluster ID'] = 'Aŭtomata identigilo';

$GLOBALS["lang"]['cluster_name'] = 'Cluster nomo';

$GLOBALS["lang"]['Cluster Name'] = 'Cluster nomo';

$GLOBALS["lang"]['cluster_type'] = 'Cluster Tipo';

$GLOBALS["lang"]['Cluster Type'] = 'Cluster Tipo';

$GLOBALS["lang"]['clusters'] = 'Clusters';

$GLOBALS["lang"]['Clusters'] = 'Clusters';

$GLOBALS["lang"]['Cocos (Keeling) Islands'] = 'Cocos (Keeling) Insuloj';

$GLOBALS["lang"]['Collector'] = 'kolektanto';

$GLOBALS["lang"]['Collector (UUID)'] = 'kolektanto (UID)';

$GLOBALS["lang"]['Collector Name'] = 'Kolektu nomon';

$GLOBALS["lang"]['collector_uuid'] = 'Uuid';

$GLOBALS["lang"]['Collector Uuid'] = 'Uuid';

$GLOBALS["lang"]['collectors'] = 'kolektantoj';

$GLOBALS["lang"]['Collectors'] = 'kolektantoj';

$GLOBALS["lang"]['Colombia'] = 'Kolombio Kolombio';

$GLOBALS["lang"]['color'] = 'Koloro';

$GLOBALS["lang"]['Color'] = 'Koloro';

$GLOBALS["lang"]['column'] = 'Kolono';

$GLOBALS["lang"]['Column'] = 'Kolono';

$GLOBALS["lang"]['Columns'] = 'Kolonoj';

$GLOBALS["lang"]['command'] = 'Komando';

$GLOBALS["lang"]['Command'] = 'Komando';

$GLOBALS["lang"]['command_options'] = 'Komandoj';

$GLOBALS["lang"]['Command Options'] = 'Komandoj';

$GLOBALS["lang"]['command_output'] = 'Komando';

$GLOBALS["lang"]['Command Output'] = 'Komando';

$GLOBALS["lang"]['command_status'] = 'Komando';

$GLOBALS["lang"]['Command Status'] = 'Komando';

$GLOBALS["lang"]['command_time_to_execute'] = 'La tempo al la tempo';

$GLOBALS["lang"]['Command Time To Execute'] = 'La tempo al la tempo';

$GLOBALS["lang"]['comment'] = 'komentoj';

$GLOBALS["lang"]['Comment'] = 'komentoj';

$GLOBALS["lang"]['comments'] = 'komentoj';

$GLOBALS["lang"]['Comments'] = 'komentoj';

$GLOBALS["lang"]['commercial'] = 'Komerca komerco';

$GLOBALS["lang"]['Commercial'] = 'Komerca komerco';

$GLOBALS["lang"]['common_name'] = 'Ofta nomo';

$GLOBALS["lang"]['Common Name'] = 'Ofta nomo';

$GLOBALS["lang"]['Commonly referred to as the clientId.'] = 'Ofte referite kiel la kliento.';

$GLOBALS["lang"]['Commonly referred to as the clientSecret.'] = 'Ofte referite kiel la kliento.';

$GLOBALS["lang"]['Community'] = 'Komunumo';

$GLOBALS["lang"]['Community Questions'] = 'Komunumaj demandoj';

$GLOBALS["lang"]['Community String'] = 'Kordo';

$GLOBALS["lang"]['Comoros the'] = 'Comoros';

$GLOBALS["lang"]['Compact'] = 'Kompaktujo';

$GLOBALS["lang"]['Company'] = 'Firmao';

$GLOBALS["lang"]['Complexity of the attack (Low or High).'] = 'Komplekseco de la atako (Low aŭ Alta).';

$GLOBALS["lang"]['Component Table'] = 'Komponento';

$GLOBALS["lang"]['Components (All Devices)'] = 'Komponentoj (All Devices)';

$GLOBALS["lang"]['Compute'] = 'Komputilo';

$GLOBALS["lang"]['Condition'] = 'Kondiĉa kondiĉo';

$GLOBALS["lang"]['Config'] = 'Config';

$GLOBALS["lang"]['Config Default, currently '] = 'Konfig Defaŭl, nuntempe ';

$GLOBALS["lang"]['config_file'] = 'Config File';

$GLOBALS["lang"]['Config File'] = 'Config File';

$GLOBALS["lang"]['config_manager_error_code'] = 'Config Manager Eraro Code';

$GLOBALS["lang"]['Config Manager Error Code'] = 'Config Manager Eraro Code';

$GLOBALS["lang"]['configuration'] = 'Konfiguracio';

$GLOBALS["lang"]['Configuration'] = 'Konfiguracio';

$GLOBALS["lang"]['Configure'] = 'La jenaj paĝoj ligas';

$GLOBALS["lang"]['Congo'] = 'Kongo';

$GLOBALS["lang"]['Congo the'] = 'Kongo';

$GLOBALS["lang"]['Connected To'] = 'Konektita al';

$GLOBALS["lang"]['connection'] = 'Ligo de Ligo';

$GLOBALS["lang"]['Connection'] = 'Ligo de Ligo';

$GLOBALS["lang"]['Connection Options'] = 'Ligo de Elektoj';

$GLOBALS["lang"]['connection_status'] = 'Situacio';

$GLOBALS["lang"]['Connection Status'] = 'Situacio';

$GLOBALS["lang"]['connections'] = 'Ligoj';

$GLOBALS["lang"]['Connections'] = 'Ligoj';

$GLOBALS["lang"]['Consider filtered Ports Open'] = 'Konsideru filtrilon Havenoj Malfermas';

$GLOBALS["lang"]['Consider open|filtered Ports Open'] = 'Konsideru malferman Havenoj Malfermas';

$GLOBALS["lang"]['contact'] = 'Kontaktu kontakton';

$GLOBALS["lang"]['Contact'] = 'Kontaktu kontakton';

$GLOBALS["lang"]['contact_name'] = 'Kontakta nomo';

$GLOBALS["lang"]['Contact Name'] = 'Kontakta nomo';

$GLOBALS["lang"]['contained_in'] = 'Enhavas en';

$GLOBALS["lang"]['Contained In'] = 'Enhavas en';

$GLOBALS["lang"]['Contains a JSON object details the associated widgets and their positions.'] = 'Enhavas JSON-objekton detaligas la rilatajn barĝojn kaj iliajn poziciojn.';

$GLOBALS["lang"]['Contains the fields that determine if we should use ssh, snmp and wmi discovery options. A JSON object.'] = 'Enhavas la kampojn kiuj determinas se ni devus uzi ssh, snmp kaj wmi-eltrovaĵo opcioj. JSON-objekto.';

$GLOBALS["lang"]['Context Engine ID'] = 'La motoro';

$GLOBALS["lang"]['Context Name'] = 'Nomoj';

$GLOBALS["lang"]['contractual_obligations'] = 'kontraktaj kondiĉoj';

$GLOBALS["lang"]['Contractual Obligations'] = 'kontraktaj kondiĉoj';

$GLOBALS["lang"]['Cook Islands'] = 'Cook Insuloj';

$GLOBALS["lang"]['Copy and paste an audit result'] = 'Kopio kaj pasto revizio';

$GLOBALS["lang"]['Copy and paste the below to the forums, another instance of Open-AudIT or anywhere else you need to provide this item.'] = 'Kopio kaj pasto la malsupre al la forumoj, alia kazo de Open-AudIT aŭ Anywhere else vi devas disponigi tiun objekton.';

$GLOBALS["lang"]['core_count'] = 'Kerna kalkulo';

$GLOBALS["lang"]['Core Count'] = 'Kerna kalkulo';

$GLOBALS["lang"]['Cores'] = 'Kernoj';

$GLOBALS["lang"]['cost_center'] = 'Kosto Centro';

$GLOBALS["lang"]['Cost Center'] = 'Kosto Centro';

$GLOBALS["lang"]['cost_code'] = 'Kosto Kodo';

$GLOBALS["lang"]['Cost Code'] = 'Kosto Kodo';

$GLOBALS["lang"]['Costa Rica'] = 'Kostariko';

$GLOBALS["lang"]['Cote d Ivoire'] = 'Cote d Ivoire';

$GLOBALS["lang"]['count'] = 'kalkulo';

$GLOBALS["lang"]['Count'] = 'kalkulo';

$GLOBALS["lang"]['country'] = 'Lando';

$GLOBALS["lang"]['Country'] = 'Lando';

$GLOBALS["lang"]['country_code'] = 'Landa Kodo';

$GLOBALS["lang"]['Country Code'] = 'Landa Kodo';

$GLOBALS["lang"]['cpu_count'] = 'Cpu Count';

$GLOBALS["lang"]['Cpu Count'] = 'Cpu Count';

$GLOBALS["lang"]['Create'] = 'Krei';

$GLOBALS["lang"]['Create Example Devices'] = 'Krei ekzemplojn';

$GLOBALS["lang"]['create_external_count'] = 'Krei Eksteran kalkulon';

$GLOBALS["lang"]['Create External Count'] = 'Krei Eksteran kalkulon';

$GLOBALS["lang"]['create_external_from_internal'] = 'Kreu Eksteren De Interna';

$GLOBALS["lang"]['Create External From Internal'] = 'Kreu Eksteren De Interna';

$GLOBALS["lang"]['Create Geocode'] = 'Krei Geocode';

$GLOBALS["lang"]['create_internal_count'] = 'Krei Internan kalkulon';

$GLOBALS["lang"]['Create Internal Count'] = 'Krei Internan kalkulon';

$GLOBALS["lang"]['create_internal_from_external'] = 'Kreu interne de Ekstera';

$GLOBALS["lang"]['Create Internal From External'] = 'Kreu interne de Ekstera';

$GLOBALS["lang"]['Create NMIS Devices from Open-AudIT'] = 'Krei NMIS Devices de Open-AudIT';

$GLOBALS["lang"]['Create Open-AudIT Devices from '] = 'Krei Open-AudIT Aparatoj de ';

$GLOBALS["lang"]['Create Open-AudIT Devices from NMIS'] = 'Krei Open-AudIT Aparatoj de NMIS';

$GLOBALS["lang"]['created_by'] = 'Kreita de';

$GLOBALS["lang"]['Created By'] = 'Kreita de';

$GLOBALS["lang"]['created_date'] = 'Kreita dato';

$GLOBALS["lang"]['Created Date'] = 'Kreita dato';

$GLOBALS["lang"]['Creating'] = 'Krei';

$GLOBALS["lang"]['Creating Device'] = 'Krei Device';

$GLOBALS["lang"]['Creating a Query'] = 'Kreante Query';

$GLOBALS["lang"]['creator'] = 'Kreinto';

$GLOBALS["lang"]['Creator'] = 'Kreinto';

$GLOBALS["lang"]['credential'] = 'Credential';

$GLOBALS["lang"]['Credential'] = 'Credential';

$GLOBALS["lang"]['credentials'] = 'Credentials';

$GLOBALS["lang"]['Credentials'] = 'Credentials';

$GLOBALS["lang"]['Credentials Client ID'] = 'Credentials Kliento ID';

$GLOBALS["lang"]['Credentials Subscription ID'] = 'Credentials Subscription ID';

$GLOBALS["lang"]['Credentials Tenant ID'] = 'Credentials Tenant ID';

$GLOBALS["lang"]['Credentials for Amazon AWS used in Cloud Discovery'] = 'Credentials por Amazon AWS uzita en Cloud Discovery';

$GLOBALS["lang"]['Credentials for Microsoft Azure used in Cloud Discovery'] = 'Credentials por Microsoft Azure uzis en Cloud Discovery';

$GLOBALS["lang"]['Critical'] = 'Kritika kritikeco';

$GLOBALS["lang"]['criticality'] = 'Kritika kritikeco';

$GLOBALS["lang"]['Criticality'] = 'Kritika kritikeco';

$GLOBALS["lang"]['Croatia'] = 'Kroatio';

$GLOBALS["lang"]['Cuba'] = 'Kubo';

$GLOBALS["lang"]['current'] = 'Nuna fluo';

$GLOBALS["lang"]['Current'] = 'Nuna fluo';

$GLOBALS["lang"]['Current Discovery Processes'] = 'Nuna Discovery Processes';

$GLOBALS["lang"]['Current date & time is '] = 'Nuna dato kaj tempo estas ';

$GLOBALS["lang"]['Currently Installed'] = 'Nuntempe oni Ins';

$GLOBALS["lang"]['Currently supported types are <code>snmp</code>, <code>snmp_v3</code>, <code>ssh</code>, <code>ssh_key</code> or <code>windows</code>.'] = 'Nuntempe apogitaj tipoj estas <code>snmp</code>, <code>snmp_v3</code>, <code>ssh</code>, <code>ssh_key</code> aŭ aŭ <code>windows</code>.';

$GLOBALS["lang"]['Custom TCP Ports'] = 'Kutimo TCP Havenoj';

$GLOBALS["lang"]['Custom UDP Ports'] = 'UDP Havenoj';

$GLOBALS["lang"]['Cve'] = 'Cve';

$GLOBALS["lang"]['Cyprus'] = 'Kipro Kipro';

$GLOBALS["lang"]['Czech'] = 'Ĉeĥa';

$GLOBALS["lang"]['Czech Republic'] = 'Ĉeĥa Respubliko';

$GLOBALS["lang"]['DHCP'] = 'DHCP';

$GLOBALS["lang"]['DN Account (optional)'] = 'DN-konto (optional)';

$GLOBALS["lang"]['DN Password (optional)'] = 'DN Password (optional)';

$GLOBALS["lang"]['DNS FQDN'] = 'DNS FQDN';

$GLOBALS["lang"]['DNS Hostname'] = 'DNS Gastignomo';

$GLOBALS["lang"]['dashboard_id'] = 'Dashboard ID';

$GLOBALS["lang"]['Dashboard ID'] = 'Dashboard ID';

$GLOBALS["lang"]['dashboards'] = 'Dashboards';

$GLOBALS["lang"]['Dashboards'] = 'Dashboards';

$GLOBALS["lang"]['Database'] = 'Datumbazo Datumbazo';

$GLOBALS["lang"]['db_action'] = 'Datumbazo';

$GLOBALS["lang"]['Database Action'] = 'Datumbazo';

$GLOBALS["lang"]['db_column'] = 'Kolono Datumbazo';

$GLOBALS["lang"]['Database Column'] = 'Kolono Datumbazo';

$GLOBALS["lang"]['Database Definition'] = 'Datuma Difino';

$GLOBALS["lang"]['db_row'] = 'Datumbazo';

$GLOBALS["lang"]['Database Row'] = 'Datumbazo';

$GLOBALS["lang"]['Database Schema'] = 'Datumbazo';

$GLOBALS["lang"]['db_table'] = 'Datuma tabelo';

$GLOBALS["lang"]['Database Table'] = 'Datuma tabelo';

$GLOBALS["lang"]['dataset_title'] = 'Ĉefa artikolo';

$GLOBALS["lang"]['Dataset Title'] = 'Ĉefa artikolo';

$GLOBALS["lang"]['date'] = 'Dato de la dato';

$GLOBALS["lang"]['Date'] = 'Dato de la dato';

$GLOBALS["lang"]['Date D-M-Y'] = 'D-M-Y';

$GLOBALS["lang"]['Date M-D-Y'] = 'Dato M-D-Y';

$GLOBALS["lang"]['Date Now'] = 'Dato nun';

$GLOBALS["lang"]['date_of_manufacture'] = 'Dato de fabrikado';

$GLOBALS["lang"]['Date Of Manufacture'] = 'Dato de fabrikado';

$GLOBALS["lang"]['date_paid'] = 'Dato Paid';

$GLOBALS["lang"]['Date Paid'] = 'Dato Paid';

$GLOBALS["lang"]['date_received'] = 'La dato ricevis';

$GLOBALS["lang"]['Date Received'] = 'La dato ricevis';

$GLOBALS["lang"]['Date Y-M-D'] = 'Dato Y-M-D';

$GLOBALS["lang"]['Date and time when the CVE was last updated.'] = 'Dato kaj tempo kiam la CVE laste estis ĝisdatigita.';

$GLOBALS["lang"]['Date and time when the CVE was published.'] = 'Dato kaj tempo kiam la CVE estis publikigita.';

$GLOBALS["lang"]['Date when the CVE was published.'] = 'Dato kiam la CVE estis publikigita.';

$GLOBALS["lang"]['DateTime Now'] = 'Dato de tempo nun';

$GLOBALS["lang"]['DateTime Y-M-D H:M:S'] = 'Dato de tempo Y-M-D H: M: S';

$GLOBALS["lang"]['day_of_month'] = 'Tago de Monato';

$GLOBALS["lang"]['Day Of Month'] = 'Tago de Monato';

$GLOBALS["lang"]['day_of_week'] = 'Tago de semajno';

$GLOBALS["lang"]['Day Of Week'] = 'Tago de semajno';

$GLOBALS["lang"]['Day of Month'] = 'Tago de Monato';

$GLOBALS["lang"]['dbus_identifier'] = 'Dbus Identifier';

$GLOBALS["lang"]['Dbus Identifier'] = 'Dbus Identifier';

$GLOBALS["lang"]['Debug'] = 'Debug';

$GLOBALS["lang"]['December'] = 'Decembro Decembro Decembro';

$GLOBALS["lang"]['Default'] = 'Defaŭlta';

$GLOBALS["lang"]['Default Items'] = 'Defaŭlta ĝi';

$GLOBALS["lang"]['Default Value'] = 'Defaŭlta Valoro';

$GLOBALS["lang"]['Default of 389. Normally 636 used for Active Directory LDAPS.'] = '389. Normale 636 uzis por Aktiva Adresaro LDAPS.';

$GLOBALS["lang"]['Default of <code>3</code> for LDAP and Active Directory.'] = 'Defaŭlto de <code>3</code> Por LDAP kaj Aktiva Adresaro.';

$GLOBALS["lang"]['Defaults'] = 'Defaŭloj';

$GLOBALS["lang"]['delay_minutes'] = 'Delay Minutes';

$GLOBALS["lang"]['Delay Minutes'] = 'Delay Minutes';

$GLOBALS["lang"]['Delete'] = 'Delete';

$GLOBALS["lang"]['Delete Example Devices'] = 'Ekzemple, laŭvolaj aparatoj';

$GLOBALS["lang"]['delete_external_from_internal'] = 'Forigi Eksteren De Interna';

$GLOBALS["lang"]['Delete External From Internal'] = 'Forigi Eksteren De Interna';

$GLOBALS["lang"]['Delete NMIS Devices if not in Open-AudIT'] = 'Forigi NMIS Aplikas se ne en Open-AudIT';

$GLOBALS["lang"]['Delete from Application'] = 'Forigi de aplikaĵo';

$GLOBALS["lang"]['Delete from Cluster'] = 'For de Cluster';

$GLOBALS["lang"]['Denmark'] = 'Danio';

$GLOBALS["lang"]['Derived by audit or manually set by user.'] = 'Derived per revizio aŭ mane metita fare de uzanto.';

$GLOBALS["lang"]['Derived by audit.'] = 'Mortigite per revizio.';

$GLOBALS["lang"]['Derived from <code>rack_devices.device_id</code>.'] = 'Mortigita de <code>rack_devices.device_id</code>.';

$GLOBALS["lang"]['Derived from <code>rack_devices.rack_id</code>.'] = 'Mortigita de <code>rack_devices.rack_id</code>.';

$GLOBALS["lang"]['Derived from Collector discovery.'] = 'Derivite de kolektanta eltrovaĵo.';

$GLOBALS["lang"]['Derived from OS Name.'] = 'Mortigita de Os Name.';

$GLOBALS["lang"]['Derived from cloud discovery.'] = 'Mortigita de nuba malkovro.';

$GLOBALS["lang"]['Derived from device audits.'] = 'Mortigita de aparataj revizioj.';

$GLOBALS["lang"]['Derived from device type and OS.'] = 'Delikita de aparato tajpas kaj Os.';

$GLOBALS["lang"]['Derived from discovery.'] = 'Mortigita el la malkovro.';

$GLOBALS["lang"]['Derived from hostname, sysName, dns Hostname and IP in that order.'] = 'Derived de mastro-nomo, sisName, dns Hostname kaj IP en tiu sinsekvo.';

$GLOBALS["lang"]['Derived from the integer severity.'] = 'Derivite de la entjer severeco.';

$GLOBALS["lang"]['description'] = 'Priskribo Priskribo';

$GLOBALS["lang"]['Description'] = 'Priskribo Priskribo';

$GLOBALS["lang"]['destination'] = 'Destination';

$GLOBALS["lang"]['Destination'] = 'Destination';

$GLOBALS["lang"]['detail'] = 'Detalo';

$GLOBALS["lang"]['Detail'] = 'Detalo';

$GLOBALS["lang"]['Details'] = 'Detaloj';

$GLOBALS["lang"]['details'] = 'Detaloj';

$GLOBALS["lang"]['Details of who is usually contactable at this site.'] = 'Detaloj de kiuj estas kutime kontakteblaj en tiu retejo.';

$GLOBALS["lang"]['device'] = 'Device';

$GLOBALS["lang"]['Device'] = 'Device';

$GLOBALS["lang"]['Device Audits'] = 'Device Audits';

$GLOBALS["lang"]['Device ID'] = '→ Eventoj:';

$GLOBALS["lang"]['device_id'] = '→ Eventoj:';

$GLOBALS["lang"]['device_id_a'] = '→ Eventoj:';

$GLOBALS["lang"]['Device ID A'] = '→ Eventoj:';

$GLOBALS["lang"]['device_id_b'] = 'D-ro B';

$GLOBALS["lang"]['Device ID B'] = 'D-ro B';

$GLOBALS["lang"]['Device Name'] = 'Nomo de la nomo';

$GLOBALS["lang"]['Device Result'] = 'Device Result';

$GLOBALS["lang"]['Device Results'] = 'Device Rezultoj';

$GLOBALS["lang"]['Device Seed'] = 'Device Seed';

$GLOBALS["lang"]['Device Seed IP'] = 'Device Seed IP';

$GLOBALS["lang"]['Device Status'] = 'Situacio';

$GLOBALS["lang"]['Device Types'] = 'Device Tipoj';

$GLOBALS["lang"]['Device is in the Subnet'] = 'Device estas en la Subnet';

$GLOBALS["lang"]['Devices'] = 'Aparatoj';

$GLOBALS["lang"]['devices_assigned_to_location'] = 'Aplikas al la loko';

$GLOBALS["lang"]['Devices Assigned To Location'] = 'Aplikas al la loko';

$GLOBALS["lang"]['devices_assigned_to_org'] = 'Aplikas al Org';

$GLOBALS["lang"]['Devices Assigned To Org'] = 'Aplikas al Org';

$GLOBALS["lang"]['Devices Audited'] = 'Aplikis';

$GLOBALS["lang"]['Devices Created in '] = 'Aparatoj kreitaj en ';

$GLOBALS["lang"]['Devices Created in Open-AudIT'] = 'Aplikas en Open-AudIT';

$GLOBALS["lang"]['devices_default_display_columns'] = 'Devices Default Display Kolonoj';

$GLOBALS["lang"]['Devices Default Display Columns'] = 'Devices Default Display Kolonoj';

$GLOBALS["lang"]['Devices Found Last 7 Days'] = 'Aparatoj trovis la lastajn 7 tagojn';

$GLOBALS["lang"]['Devices Found Today'] = 'Antaŭite fare de aparatoj';

$GLOBALS["lang"]['Devices Found Yesterday'] = 'Aparatoj trovis hieraŭ';

$GLOBALS["lang"]['Devices Not Audited'] = 'Aparatoj ne reviziis';

$GLOBALS["lang"]['Devices Not Seen 30 Days'] = 'Ne videblas 30 tagoj';

$GLOBALS["lang"]['Devices Not Seen 7 Days'] = 'Ne videblas 7 Tagoj';

$GLOBALS["lang"]['Devices Not Seen 90 Days'] = 'Ne videblas 90 tagoj';

$GLOBALS["lang"]['Devices Retrieved via API'] = 'Aparatoj Prenitaj per API';

$GLOBALS["lang"]['Devices Selected from '] = 'Aplikitaj de ';

$GLOBALS["lang"]['Devices Selected from Open-AudIT'] = 'Deviceso Elektita de Open-AudIT';

$GLOBALS["lang"]['Devices Updated in '] = 'Aplikitaj en ';

$GLOBALS["lang"]['Devices Updated in Open-AudIT'] = 'Aplikitaj en Open-AudIT';

$GLOBALS["lang"]['Devices are being benchmarked.'] = 'Devices estas komparnormo.';

$GLOBALS["lang"]['Devices are not being benchmarked.'] = 'Aparatoj ne estas komparnormoj.';

$GLOBALS["lang"]['Devices could be benchmarked.'] = 'Devus esti komparnormo.';

$GLOBALS["lang"]['Devices in Running State'] = 'Aparatoj en Kuranta Ŝtato';

$GLOBALS["lang"]['Devices in Stopped State'] = 'Aparatoj en Stopped State';

$GLOBALS["lang"]['Devices in this'] = 'Apliki en tio';

$GLOBALS["lang"]['Devired from type or OS.'] = 'Aplikita de tipo aŭ Os.';

$GLOBALS["lang"]['dhcp_enabled'] = 'Dhcp Enabled';

$GLOBALS["lang"]['Dhcp Enabled'] = 'Dhcp Enabled';

$GLOBALS["lang"]['dhcp_lease_expires'] = 'Dhcp Lease Expires';

$GLOBALS["lang"]['Dhcp Lease Expires'] = 'Dhcp Lease Expires';

$GLOBALS["lang"]['dhcp_lease_obtained'] = 'Dhcp Lease Obtained';

$GLOBALS["lang"]['Dhcp Lease Obtained'] = 'Dhcp Lease Obtained';

$GLOBALS["lang"]['dhcp_server'] = 'Dhcp Server';

$GLOBALS["lang"]['Dhcp Server'] = 'Dhcp Server';

$GLOBALS["lang"]['Did the command complete successfully and return expected data.'] = 'La komando kompletigis sukcese kaj resendis atendatajn datenojn.';

$GLOBALS["lang"]['direction'] = 'Direkto';

$GLOBALS["lang"]['Direction'] = 'Direkto';

$GLOBALS["lang"]['directory'] = 'Adresaro';

$GLOBALS["lang"]['Directory'] = 'Adresaro';

$GLOBALS["lang"]['disabled'] = 'Handikapita';

$GLOBALS["lang"]['Disabled'] = 'Handikapita';

$GLOBALS["lang"]['discard'] = 'Disĵetas';

$GLOBALS["lang"]['Discard'] = 'Disĵetas';

$GLOBALS["lang"]['Discover'] = 'Malkovro';

$GLOBALS["lang"]['discoveries'] = 'Eltrovaĵoj';

$GLOBALS["lang"]['Discoveries'] = 'Eltrovaĵoj';

$GLOBALS["lang"]['Discovery'] = 'Discovery Discovery';

$GLOBALS["lang"]['Discovery Change Logs'] = 'Discovery Change Logs';

$GLOBALS["lang"]['Discovery Data Retention'] = 'Discovery Data Retention';

$GLOBALS["lang"]['discovery_id'] = 'Discovery ID';

$GLOBALS["lang"]['Discovery ID'] = 'Discovery ID';

$GLOBALS["lang"]['Discovery Issues'] = 'Discovery Issues';

$GLOBALS["lang"]['discovery_log'] = 'Discovery Logo';

$GLOBALS["lang"]['Discovery Log'] = 'Discovery Logo';

$GLOBALS["lang"]['Discovery Match Options'] = 'Discovery Match Opcioj';

$GLOBALS["lang"]['Discovery Name'] = 'Discovery Nomo';

$GLOBALS["lang"]['Discovery Options'] = 'Discovery Opcioj';

$GLOBALS["lang"]['Discovery Queue Count'] = 'Discovery Queue Count';

$GLOBALS["lang"]['Discovery Queue Limit'] = 'Discovery Queue Limit';

$GLOBALS["lang"]['discovery_run'] = 'Discovery Run';

$GLOBALS["lang"]['Discovery Run'] = 'Discovery Run';

$GLOBALS["lang"]['discovery_scan_options'] = 'Discovery Scan Opcioj';

$GLOBALS["lang"]['Discovery Scan Options'] = 'Discovery Scan Opcioj';

$GLOBALS["lang"]['disk'] = 'Disk';

$GLOBALS["lang"]['Disk'] = 'Disk';

$GLOBALS["lang"]['display_version'] = 'Aparta versio';

$GLOBALS["lang"]['Display Version'] = 'Aparta versio';

$GLOBALS["lang"]['Display in Menu'] = 'Ludu en Menu';

$GLOBALS["lang"]['district'] = 'Distriktodistrikto';

$GLOBALS["lang"]['District'] = 'Distriktodistrikto';

$GLOBALS["lang"]['Djibouti'] = 'Ĝibutbuto';

$GLOBALS["lang"]['dns'] = 'Dns';

$GLOBALS["lang"]['Dns'] = 'Dns';

$GLOBALS["lang"]['dns_domain'] = 'Dns domain';

$GLOBALS["lang"]['Dns Domain'] = 'Dns domain';

$GLOBALS["lang"]['dns_domain_reg_enabled'] = 'Dns Domain Reg Enabled';

$GLOBALS["lang"]['Dns Domain Reg Enabled'] = 'Dns Domain Reg Enabled';

$GLOBALS["lang"]['dns_fqdn'] = 'Dns Fqdn';

$GLOBALS["lang"]['Dns Fqdn'] = 'Dns Fqdn';

$GLOBALS["lang"]['dns_host_name'] = 'Dns Gastigas nomon';

$GLOBALS["lang"]['Dns Host Name'] = 'Dns Gastigas nomon';

$GLOBALS["lang"]['dns_hostname'] = 'Dns Hostname';

$GLOBALS["lang"]['Dns Hostname'] = 'Dns Hostname';

$GLOBALS["lang"]['dns_server'] = 'Dns Server';

$GLOBALS["lang"]['Dns Server'] = 'Dns Server';

$GLOBALS["lang"]['Do not scan these TCP ports.'] = 'Ne skanas tiujn TCP-havenojn.';

$GLOBALS["lang"]['Do not scan these UDP ports.'] = 'Ne skanas tiujn UDP-havenojn.';

$GLOBALS["lang"]['Do not show me again'] = 'Ne montru al mi denove';

$GLOBALS["lang"]['Do you want to use secure transport (LDAPS) or regular unencrypted LDAP.'] = 'Ĉu vi volas uzi sekuran transporton (LDAPS) aŭ regulan neĉifritan LDAP.';

$GLOBALS["lang"]['Do you wish to see the standard sidebar on the left.'] = 'Ĉu vi volas vidi la norman flankon maldekstre.';

$GLOBALS["lang"]['documentation'] = 'Dokumentado';

$GLOBALS["lang"]['Documentation'] = 'Dokumentado';

$GLOBALS["lang"]['Does the license apply to child Orgs.'] = 'La permesilo validas por infanoj.';

$GLOBALS["lang"]['domain'] = 'Do restas';

$GLOBALS["lang"]['Domain'] = 'Do restas';

$GLOBALS["lang"]['domain_controller_address'] = 'Domain Controller Address';

$GLOBALS["lang"]['Domain Controller Address'] = 'Domain Controller Address';

$GLOBALS["lang"]['domain_controller_name'] = 'Domain Controller Nomo nomo';

$GLOBALS["lang"]['Domain Controller Name'] = 'Domain Controller Nomo nomo';

$GLOBALS["lang"]['domain_role'] = 'Domain Rolo';

$GLOBALS["lang"]['Domain Role'] = 'Domain Rolo';

$GLOBALS["lang"]['domain_short'] = 'Estas mallonga';

$GLOBALS["lang"]['Domain Short'] = 'Estas mallonga';

$GLOBALS["lang"]['Dominica'] = 'Dominiko';

$GLOBALS["lang"]['Dominican Republic'] = 'Dominika Respubliko';

$GLOBALS["lang"]['Dont hold my hand, I know what I am doing. No filter and the ability to join custom tables.'] = 'Ne tenu mian manon, mi scias kion mi faras. Neniu filtrilo kaj kapablo aliĝi al kutimo tabloj.';

$GLOBALS["lang"]['Download'] = 'Elŝutu';

$GLOBALS["lang"]['Download a file from URL'] = 'Elŝutu dosieron de URL';

$GLOBALS["lang"]['driver'] = 'Ŝoforo';

$GLOBALS["lang"]['Driver'] = 'Ŝoforo';

$GLOBALS["lang"]['duplex'] = 'Dupleksa';

$GLOBALS["lang"]['Duplex'] = 'Dupleksa';

$GLOBALS["lang"]['duration'] = 'Tempodaŭro';

$GLOBALS["lang"]['Duration'] = 'Tempodaŭro';

$GLOBALS["lang"]['ESXi'] = 'ESXi';

$GLOBALS["lang"]['EULA'] = 'Eŭropa Unio';

$GLOBALS["lang"]['Ecuador'] = 'Ekvadoro';

$GLOBALS["lang"]['Edit'] = 'Edit Edit Edit';

$GLOBALS["lang"]['edit_log'] = 'Edit Log Log';

$GLOBALS["lang"]['Edit Log'] = 'Edit Log Log';

$GLOBALS["lang"]['editable'] = 'Editable';

$GLOBALS["lang"]['Editable'] = 'Editable';

$GLOBALS["lang"]['edited_by'] = 'Antaŭite fare de';

$GLOBALS["lang"]['Edited By'] = 'Antaŭite fare de';

$GLOBALS["lang"]['edited_date'] = 'Redaktita dato';

$GLOBALS["lang"]['Edited Date'] = 'Redaktita dato';

$GLOBALS["lang"]['edition'] = 'Eldono';

$GLOBALS["lang"]['Edition'] = 'Eldono';

$GLOBALS["lang"]['Egypt'] = 'Egiptujo';

$GLOBALS["lang"]['Either Amazon, Google or Microsoft.'] = 'Amazon, Google aŭ Microsoft.';

$GLOBALS["lang"]['Either none or present.

<strong>None</strong> - The successful attack does not depend on the deployment and execution conditions of the vulnerable system. The attacker can expect to be able to reach the vulnerability and execute the exploit under all or most instances of the vulnerability.

<strong>Present</strong> - The successful attack depends on the presence of specific deployment and execution conditions of the vulnerable system that enable the attack. These include:

A race condition must be won to successfully exploit the vulnerability. The successfulness of the attack is conditioned on execution conditions that are not under full control of the attacker. The attack may need to be launched multiple times against a single target before being successful.

Network injection. The attacker must inject themselves into the logical network path between the target and the resource requested by the victim (e.g. vulnerabilities requiring an on-path attacker).'] = 'Neniu aŭ nuna.

<strong>Neniu</strong> La sukcesa atako ne dependas de la deplojo kaj ekzekutkondiĉoj de la vundebla sistemo. La atakanto povas atendi povi atingi la vundeblecon kaj efektivigi la atingojn sub ĉiuj aŭ la plej multaj kazoj de la vundebleco.

<strong>Donaco</strong> La sukcesa atako dependas de la ĉeesto de specifa deplojo kaj ekzekutkondiĉoj de la vundebla sistemo kiu rajtigas la atakon. Tiuj inkludas:

Vetkuro-kondiĉo devas esti gajnita por sukcese ekspluati la vundeblecon. La sukceseco de la atako estas kondiĉigita de ekzekutkondiĉoj kiuj ne estas sub plena kontrolo de la atakanto. La atako povas devi esti lanĉita multoblaj tempoj kontraŭ ununura celo antaŭ esti sukcesa.

Reta injekto. La atakanto devas injekti sin en la logikan retpadon inter la celo kaj la rimedo postuladita fare de la viktimo (ekz. vundeblecoj postulantaj sur-pafilan atakanton).';

$GLOBALS["lang"]['El Salvador'] = 'Salvadoro';

$GLOBALS["lang"]['email'] = 'retpoŝto';

$GLOBALS["lang"]['Email'] = 'retpoŝto';

$GLOBALS["lang"]['email_address'] = 'retpoŝto';

$GLOBALS["lang"]['Email Address'] = 'retpoŝto';

$GLOBALS["lang"]['Email Configuration'] = 'Retpoŝto Konfiguracio';

$GLOBALS["lang"]['Email to send test to'] = 'retpoŝto por sendi teston al';

$GLOBALS["lang"]['Enable'] = 'Enable';

$GLOBALS["lang"]['enabled'] = 'Enabled';

$GLOBALS["lang"]['Enabled'] = 'Enabled';

$GLOBALS["lang"]['encryption'] = 'Akription';

$GLOBALS["lang"]['Encryption'] = 'Akription';

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

$GLOBALS["lang"]['English'] = 'Angla angla';

$GLOBALS["lang"]['enterprise'] = 'Enterprise Enterprise';

$GLOBALS["lang"]['Enterprise'] = 'Enterprise Enterprise';

$GLOBALS["lang"]['Enterprise Private Network'] = 'Enterprise Privata Reto';

$GLOBALS["lang"]['Entitlement Type'] = 'Entitlement Tipo';

$GLOBALS["lang"]['environment'] = 'Medio';

$GLOBALS["lang"]['Environment'] = 'Medio';

$GLOBALS["lang"]['Equal To'] = 'Egala al';

$GLOBALS["lang"]['Equal To or Greater Than'] = 'Egala aŭ pli granda ol';

$GLOBALS["lang"]['Equal To or Less Than'] = 'Egala aŭ malpli ol';

$GLOBALS["lang"]['Equals'] = 'Egaluloj';

$GLOBALS["lang"]['Equatorial Guinea'] = 'Ekvatora Gvineo';

$GLOBALS["lang"]['Eritrea'] = 'Eritreo';

$GLOBALS["lang"]['Error'] = 'Eraro';

$GLOBALS["lang"]['Error Code'] = 'Eraro Kodo';

$GLOBALS["lang"]['Established'] = 'Establite';

$GLOBALS["lang"]['Estonia'] = 'Estonio';

$GLOBALS["lang"]['Ethernet MAC'] = 'Ethernet MAC';

$GLOBALS["lang"]['ethernet_mac'] = 'Ethernet Mac';

$GLOBALS["lang"]['Ethernet Mac'] = 'Ethernet Mac';

$GLOBALS["lang"]['Ethiopia'] = 'Etiopio';

$GLOBALS["lang"]['Every'] = 'Ĉiu ĉiu';

$GLOBALS["lang"]['Every Day'] = 'Ĉiu tago';

$GLOBALS["lang"]['Exceptions'] = 'Esceptoj';

$GLOBALS["lang"]['exclude'] = 'Ekskluzo';

$GLOBALS["lang"]['Exclude'] = 'Ekskluzo';

$GLOBALS["lang"]['exclude_ip'] = 'Exclude IP';

$GLOBALS["lang"]['Exclude IP'] = 'Exclude IP';

$GLOBALS["lang"]['Exclude IP Addresses'] = 'Exclude IP Adresoj';

$GLOBALS["lang"]['Exclude TCP Ports'] = 'Exclude TCP Havenoj';

$GLOBALS["lang"]['exclude_tcp_ports'] = 'Exclude Tcp Ports';

$GLOBALS["lang"]['Exclude Tcp Ports'] = 'Exclude Tcp Ports';

$GLOBALS["lang"]['Exclude UDP Ports'] = 'UDP Havenoj';

$GLOBALS["lang"]['exclude_udp_ports'] = 'Udp Ports';

$GLOBALS["lang"]['Exclude Udp Ports'] = 'Udp Ports';

$GLOBALS["lang"]['Exclude these IP addresses from being Nmap scanned.'] = 'Exclude tiuj IP-adresoj de esti Nmap skanita.';

$GLOBALS["lang"]['Excluded'] = 'Ekskludita';

$GLOBALS["lang"]['exclusion_reasons'] = 'Kaŭzo de kialoj';

$GLOBALS["lang"]['Exclusion Reasons'] = 'Kaŭzo de kialoj';

$GLOBALS["lang"]['executable'] = 'Eksplusebla';

$GLOBALS["lang"]['Executable'] = 'Eksplusebla';

$GLOBALS["lang"]['executable_id'] = 'Executable ID';

$GLOBALS["lang"]['Executable ID'] = 'Executable ID';

$GLOBALS["lang"]['executables'] = 'Eksplusoj';

$GLOBALS["lang"]['Executables'] = 'Eksplusoj';

$GLOBALS["lang"]['Execute'] = 'Efekto';

$GLOBALS["lang"]['Executing'] = 'Eksplicita';

$GLOBALS["lang"]['exemption_reason'] = 'Kaŭzo de racio';

$GLOBALS["lang"]['Exemption Reason'] = 'Kaŭzo de racio';

$GLOBALS["lang"]['Existing Building'] = 'Ekskluzivanta Konstruaĵo';

$GLOBALS["lang"]['Existing Floor'] = 'Ekzistanta etaĝo';

$GLOBALS["lang"]['Existing Room'] = 'Existing Room';

$GLOBALS["lang"]['Existing Row'] = 'Ekskluziva Row';

$GLOBALS["lang"]['expire_date'] = 'Expire Date';

$GLOBALS["lang"]['Expire Date'] = 'Expire Date';

$GLOBALS["lang"]['expire_minutes'] = 'Expire Minutes';

$GLOBALS["lang"]['Expire Minutes'] = 'Expire Minutes';

$GLOBALS["lang"]['expires'] = '→ Eventoj:';

$GLOBALS["lang"]['Expires'] = '→ Eventoj:';

$GLOBALS["lang"]['expiry_date'] = 'Eksplua dato';

$GLOBALS["lang"]['Expiry Date'] = 'Eksplua dato';

$GLOBALS["lang"]['exploit_maturity'] = 'Exploit Maturity';

$GLOBALS["lang"]['Exploit Maturity'] = 'Exploit Maturity';

$GLOBALS["lang"]['Export'] = 'Eksporto';

$GLOBALS["lang"]['Export by Device'] = 'Eksporto de Device';

$GLOBALS["lang"]['Export by Policy'] = 'Eksporto de politiko';

$GLOBALS["lang"]['Export data to'] = 'Eksporti datumojn al';

$GLOBALS["lang"]['expose'] = 'Internacia ekspozicio';

$GLOBALS["lang"]['Expose'] = 'Internacia ekspozicio';

$GLOBALS["lang"]['External'] = 'Ekstera ekstera';

$GLOBALS["lang"]['External Field Name'] = 'Ekstera kamponomo';

$GLOBALS["lang"]['External Field Type'] = 'Ekstera kampo Tipo';

$GLOBALS["lang"]['external_ident'] = 'Ekstera Ident';

$GLOBALS["lang"]['External Ident'] = 'Ekstera Ident';

$GLOBALS["lang"]['external_link'] = 'Ekstera ligo';

$GLOBALS["lang"]['External Link'] = 'Ekstera ligo';

$GLOBALS["lang"]['extra_columns'] = 'ekstraj kolonoj';

$GLOBALS["lang"]['Extra Columns'] = 'ekstraj kolonoj';

$GLOBALS["lang"]['Extra and more verbose logging is generated for troubleshooting.'] = 'Ekstra kaj pli multvorta arbodehakado estas generita por mishokado.';

$GLOBALS["lang"]['FAQ'] = 'FAQ demandoj';

$GLOBALS["lang"]['FQDN'] = 'FQDN';

$GLOBALS["lang"]['FW Revision'] = 'FW-Revizio';

$GLOBALS["lang"]['Fail'] = 'Fajlo';

$GLOBALS["lang"]['Failed'] = 'Malsukcesis';

$GLOBALS["lang"]['Failed Severity'] = 'Malsukcesas plurajn';

$GLOBALS["lang"]['Falkland Islands (Malvinas)'] = 'Falklandinsuloj (Malvinaj)';

$GLOBALS["lang"]['Family'] = 'Familia familio';

$GLOBALS["lang"]['Faroe Islands'] = 'Feroaj Insuloj';

$GLOBALS["lang"]['Features'] = 'Plendoj';

$GLOBALS["lang"]['February'] = 'Februaro Februaro Februaro Februaro';

$GLOBALS["lang"]['field'] = 'Kampo';

$GLOBALS["lang"]['Field'] = 'Kampo';

$GLOBALS["lang"]['field_id'] = 'Kampo ID';

$GLOBALS["lang"]['Field ID'] = 'Kampo ID';

$GLOBALS["lang"]['Field Name'] = 'Kamponomo';

$GLOBALS["lang"]['Field Type'] = 'Kampo Tipo';

$GLOBALS["lang"]['Fields'] = 'Kampoj';

$GLOBALS["lang"]['fields'] = 'Kampoj';

$GLOBALS["lang"]['Fiji the Fiji Islands'] = 'Fiĝioj la Fiĝioj Insuloj';

$GLOBALS["lang"]['File'] = 'Dosiero';

$GLOBALS["lang"]['File Import'] = 'Dosieroj';

$GLOBALS["lang"]['File Input'] = 'Dosiero en';

$GLOBALS["lang"]['file_name'] = 'Dosiero';

$GLOBALS["lang"]['File Name'] = 'Dosiero';

$GLOBALS["lang"]['file_size'] = 'Dosieroj';

$GLOBALS["lang"]['File Size'] = 'Dosieroj';

$GLOBALS["lang"]['filename'] = 'Dosiero';

$GLOBALS["lang"]['Filename'] = 'Dosiero';

$GLOBALS["lang"]['files'] = 'Dosieroj';

$GLOBALS["lang"]['Files'] = 'Dosieroj';

$GLOBALS["lang"]['files_id'] = 'Dosieroj ID';

$GLOBALS["lang"]['Files ID'] = 'Dosieroj ID';

$GLOBALS["lang"]['filter'] = 'Filtero';

$GLOBALS["lang"]['Filter'] = 'Filtero';

$GLOBALS["lang"]['filtered'] = 'Filtris';

$GLOBALS["lang"]['Filtered'] = 'Filtris';

$GLOBALS["lang"]['Finland'] = 'Finnlando Finnlando';

$GLOBALS["lang"]['Firewall'] = 'Fajromuro';

$GLOBALS["lang"]['firewall_rule'] = 'Fajromuro';

$GLOBALS["lang"]['Firewall Rule'] = 'Fajromuro';

$GLOBALS["lang"]['firmware'] = 'firmao';

$GLOBALS["lang"]['Firmware'] = 'firmao';

$GLOBALS["lang"]['firmware_revision'] = 'La firmao de la firmao';

$GLOBALS["lang"]['Firmware Revision'] = 'La firmao de la firmao';

$GLOBALS["lang"]['First Name'] = 'Unua nomo';

$GLOBALS["lang"]['first_run'] = 'Unua Kuro';

$GLOBALS["lang"]['First Run'] = 'Unua Kuro';

$GLOBALS["lang"]['first_seen'] = 'Unue vidu';

$GLOBALS["lang"]['First Seen'] = 'Unue vidu';

$GLOBALS["lang"]['FirstWave'] = 'Unua virino';

$GLOBALS["lang"]['Fix'] = 'Fix';

$GLOBALS["lang"]['Fixed'] = 'Fiksita Fido';

$GLOBALS["lang"]['Floor'] = 'etaĝo';

$GLOBALS["lang"]['Follow any of the links below and discover how to use Open-AudIT to find out <b>Whats On Your Network?</b>'] = 'Sekvu iujn ajn da la ligiloj malsupre kaj malkovri kiel uzi Open-AudIT por malkovri <b>Kio estas sur via reto?</b>';

$GLOBALS["lang"]['For a seed discovery, should I only discover IPs in the private IP address space.'] = 'Por semtrovaĵo, mi devus nur malkovri IPojn en la privata IP-adresospaco.';

$GLOBALS["lang"]['For a seed discovery, should I only discover IPs on the chosen subnet.'] = 'Por semtrovaĵo, mi devus nur malkovri IPojn sur la elektita subreto.';

$GLOBALS["lang"]['For a seed discovery, should I ping the subnet before running the discovery.'] = 'Por semtrovaĵo, mi devus ping la subreto antaŭ prizorgado de la eltrovaĵo.';

$GLOBALS["lang"]['For advanced entry of a raw SQL query. As per Queries, you must include <code>WHERE @filter AND<code> in your SQL.'] = 'Por progresinta eniro de kruda SQL-query. Kiel ĉe Queries, vi devas inkluzivi <code>WHERE @filter AND<code> in your SQL.</code></code>';

$GLOBALS["lang"]['For licenses that are not perpetual, when does the license expire.'] = 'Por licencoj kiuj ne estas eternaj, kiam la licenco eksvalidiĝas.';

$GLOBALS["lang"]['form_factor'] = 'Formo Factor';

$GLOBALS["lang"]['Form Factor'] = 'Formo Factor';

$GLOBALS["lang"]['format'] = 'Pormatoj';

$GLOBALS["lang"]['Format'] = 'Pormatoj';

$GLOBALS["lang"]['fqdn'] = 'Fqdn';

$GLOBALS["lang"]['Fqdn'] = 'Fqdn';

$GLOBALS["lang"]['France, French Republic'] = 'Francio, franca respubliko';

$GLOBALS["lang"]['free'] = 'Libera Libera Libero';

$GLOBALS["lang"]['Free'] = 'Libera Libera Libero';

$GLOBALS["lang"]['French'] = 'Franca franca';

$GLOBALS["lang"]['French Guiana'] = 'Franca Gvajanio';

$GLOBALS["lang"]['French Polynesia'] = 'Franca Polinezio';

$GLOBALS["lang"]['French Southern Territories'] = 'Franca Suda Territories';

$GLOBALS["lang"]['Frequently Asked Questions'] = 'Ofte demanditaj demandoj';

$GLOBALS["lang"]['Friday'] = 'vendrede';

$GLOBALS["lang"]['From 100 Devices'] = 'De 100 Aparatoj';

$GLOBALS["lang"]['From 500 Devices'] = 'De 500 aparatoj';

$GLOBALS["lang"]['full_name'] = 'Plena nomo';

$GLOBALS["lang"]['Full Name'] = 'Plena nomo';

$GLOBALS["lang"]['function'] = 'Funkcio';

$GLOBALS["lang"]['Function'] = 'Funkcio';

$GLOBALS["lang"]['GROUP BY'] = 'GROUP BY';

$GLOBALS["lang"]['Gabon'] = 'Gabono Gabono';

$GLOBALS["lang"]['Gambia the'] = 'Gambio';

$GLOBALS["lang"]['gateway'] = 'Gateway';

$GLOBALS["lang"]['Gateway'] = 'Gateway';

$GLOBALS["lang"]['gateways'] = 'Gateways';

$GLOBALS["lang"]['Gateways'] = 'Gateways';

$GLOBALS["lang"]['Generated By'] = 'Generita de';

$GLOBALS["lang"]['geo'] = 'Geogeo';

$GLOBALS["lang"]['Geo'] = 'Geogeo';

$GLOBALS["lang"]['Georgia'] = 'Kartvelio Kartvelio';

$GLOBALS["lang"]['German'] = 'Germana germana germano';

$GLOBALS["lang"]['Germany'] = 'Germanio';

$GLOBALS["lang"]['Get Lat/Long'] = 'Get Lat/Long';

$GLOBALS["lang"]['Get Started'] = 'Komencu komenci';

$GLOBALS["lang"]['Get a Free License'] = 'Akiri Liberan Permesilon';

$GLOBALS["lang"]['Getting Started'] = 'Komencu komenci';

$GLOBALS["lang"]['Ghana'] = 'Ganao';

$GLOBALS["lang"]['Gibraltar'] = 'Ĝibraltaro';

$GLOBALS["lang"]['Global Discovery Options'] = 'Tutmonda Discovery Opcioj';

$GLOBALS["lang"]['Go'] = 'Iru';

$GLOBALS["lang"]['Google Compute Fields'] = 'Google Compute Fields';

$GLOBALS["lang"]['Google Maps API Key'] = 'Google Maps API Ŝlosilo';

$GLOBALS["lang"]['Greater Than'] = 'Pli granda ol';

$GLOBALS["lang"]['Greater Than or Equals'] = 'Pli granda ol aŭ egalaj';

$GLOBALS["lang"]['Greece'] = 'Grekio Grekio';

$GLOBALS["lang"]['Green Query'] = 'Verda Query';

$GLOBALS["lang"]['Greenland'] = 'Gronlando';

$GLOBALS["lang"]['Grenada'] = 'Grenado';

$GLOBALS["lang"]['Group'] = 'Grupo de grupo';

$GLOBALS["lang"]['group_by'] = 'Grupo de grupo';

$GLOBALS["lang"]['Group By'] = 'Grupo de grupo';

$GLOBALS["lang"]['group_id'] = 'Grupo ID';

$GLOBALS["lang"]['Group ID'] = 'Grupo ID';

$GLOBALS["lang"]['groups'] = 'Grupoj';

$GLOBALS["lang"]['Groups'] = 'Grupoj';

$GLOBALS["lang"]['Guadeloupe'] = 'Guadeloupe';

$GLOBALS["lang"]['Guam'] = 'Gvamo';

$GLOBALS["lang"]['Guatemala'] = 'Gvatemalo Gvatemalo Gvatemalo';

$GLOBALS["lang"]['Guernsey'] = 'Ĝerzjako';

$GLOBALS["lang"]['guest_device_id'] = 'Gasto de bloko';

$GLOBALS["lang"]['Guest Device ID'] = 'Gasto de bloko';

$GLOBALS["lang"]['guid'] = 'Guid';

$GLOBALS["lang"]['Guid'] = 'Guid';

$GLOBALS["lang"]['Guinea'] = 'Gvineo Gvineo Gvineo';

$GLOBALS["lang"]['Guinea-Bissau'] = 'Gvineo Bisaŭa';

$GLOBALS["lang"]['Guyana'] = 'Gujano';

$GLOBALS["lang"]['HP-UX'] = 'HP-UX';

$GLOBALS["lang"]['HW Revision'] = 'HW-Revizio';

$GLOBALS["lang"]['Haiti'] = 'Haitio';

$GLOBALS["lang"]['hard_drive_index'] = 'Malmola Indekso';

$GLOBALS["lang"]['Hard Drive Index'] = 'Malmola Indekso';

$GLOBALS["lang"]['hardware_revision'] = 'Hardware Revision';

$GLOBALS["lang"]['Hardware Revision'] = 'Hardware Revision';

$GLOBALS["lang"]['Has this policy been applied in this organization.'] = 'Tiu politiko estis aplikita en tiu organizo.';

$GLOBALS["lang"]['hash'] = 'Haŝiŝ';

$GLOBALS["lang"]['Hash'] = 'Haŝiŝ';

$GLOBALS["lang"]['Head'] = 'Kapo';

$GLOBALS["lang"]['Heard Island and McDonald Islands'] = 'Heard Island kaj McDonald Insuloj';

$GLOBALS["lang"]['height'] = 'Li';

$GLOBALS["lang"]['Height'] = 'Li';

$GLOBALS["lang"]['Height in RU'] = 'La vero en RU';

$GLOBALS["lang"]['Help'] = 'Helpo helpo';

$GLOBALS["lang"]['Help and Frequently Asked Questions'] = 'Helpo kaj Ofte demanditaj demandoj';

$GLOBALS["lang"]['high'] = 'Alta';

$GLOBALS["lang"]['High'] = 'Alta';

$GLOBALS["lang"]['High Availability'] = 'Alta Kapablo';

$GLOBALS["lang"]['Holy See (Vatican City State)'] = 'Holy See (Vatican City State)';

$GLOBALS["lang"]['Home'] = 'hejmo';

$GLOBALS["lang"]['home'] = 'hejmo';

$GLOBALS["lang"]['Home Area Network'] = 'Home Area Network';

$GLOBALS["lang"]['Honduras'] = 'Honduro';

$GLOBALS["lang"]['Hong Kong'] = 'Honkongo';

$GLOBALS["lang"]['host'] = 'Gastiganto';

$GLOBALS["lang"]['Host'] = 'Gastiganto';

$GLOBALS["lang"]['hostname'] = 'Gastignomo';

$GLOBALS["lang"]['Hostname'] = 'Gastignomo';

$GLOBALS["lang"]['hour'] = 'Horo';

$GLOBALS["lang"]['Hour'] = 'Horo';

$GLOBALS["lang"]['How and Why is Open-AudIT More Secure'] = 'Kiel kaj kial estas Open-AudIT Pli Sekura';

$GLOBALS["lang"]['How long did the command take to execute.'] = 'Kiom longe la komando sukcesis efektivigi.';

$GLOBALS["lang"]['How long should Nmap wait for a response, per device.'] = 'Kiom longe ni devas atendi respondon, per aparato.';

$GLOBALS["lang"]['How many circuit feed to this rack.'] = 'Kiom da cirkvito manĝas al tiu rako.';

$GLOBALS["lang"]['How many policies results in a fail.'] = 'Kiom da politikoj rezultas en malsukceso.';

$GLOBALS["lang"]['How many policies results in a pass.'] = 'Kiom da politikoj rezultigas enirpermesilon.';

$GLOBALS["lang"]['How many power sockets in this rack.'] = 'Kiom da potenco ĵetas en tiu rako.';

$GLOBALS["lang"]['How many rack units in height is this rack.'] = 'Kiom da rakunuoj en alteco estas tiu rako.';

$GLOBALS["lang"]['How often should the collector ask the server for a task.'] = 'Kiel ofte la kolektanto petas la servilon por tasko.';

$GLOBALS["lang"]['How should we select devices to be integrated (using an Attribute, Query or a Group).'] = 'Kiel ni elektas aparatojn por esti integritaj (uzante Atributon, Query aŭ grupon).';

$GLOBALS["lang"]['How the vulnerability is exploited (e.g., Network, Adjacent, Local, Physical).'] = 'Kiel la vundebleco estas ekspluatita (ekz., Reto, Adjacent, lokulo, Fizika).';

$GLOBALS["lang"]['How to compare'] = 'Kiel kompari';

$GLOBALS["lang"]['Human-readable explanation of the vulnerability.'] = 'Homa-legebla klarigo de la vundebleco.';

$GLOBALS["lang"]['Hungary'] = 'Hungario Hungario Hungario Hungario';

$GLOBALS["lang"]['hw_cpe'] = 'Hw Cpe';

$GLOBALS["lang"]['Hw Cpe'] = 'Hw Cpe';

$GLOBALS["lang"]['hyperthreading'] = 'Hyperthreading';

$GLOBALS["lang"]['Hyperthreading'] = 'Hyperthreading';

$GLOBALS["lang"]['I have read the EULA.'] = 'Mi legis la EULA.';

$GLOBALS["lang"]['id'] = 'ID';

$GLOBALS["lang"]['ID'] = 'ID';

$GLOBALS["lang"]['IF'] = 'IF';

$GLOBALS["lang"]['IOS Version'] = 'Versio de IOS';

$GLOBALS["lang"]['IP'] = 'IP IP';

$GLOBALS["lang"]['ip'] = 'IP IP';

$GLOBALS["lang"]['IP Address'] = 'IP-adreso';

$GLOBALS["lang"]['IP Addresses'] = 'IP Adresoj';

$GLOBALS["lang"]['IP Last Seen'] = 'IP Last Seen';

$GLOBALS["lang"]['IP Set By'] = 'IP';

$GLOBALS["lang"]['ISO 27001 only.'] = 'ISO 27001.';

$GLOBALS["lang"]['Iceland'] = 'Islando';

$GLOBALS["lang"]['icon'] = 'Ikono';

$GLOBALS["lang"]['Icon'] = 'Ikono';

$GLOBALS["lang"]['Icon and Text'] = 'Ikono kaj Teksto';

$GLOBALS["lang"]['Icon only, text only or icon and text.'] = 'Ikono nur, teksto nur aŭ ikono kaj teksto.';

$GLOBALS["lang"]['id_internal'] = 'La interna';

$GLOBALS["lang"]['Id Internal'] = 'La interna';

$GLOBALS["lang"]['id_number'] = 'Id Number';

$GLOBALS["lang"]['Id Number'] = 'Id Number';

$GLOBALS["lang"]['identification'] = 'Identigaĵo';

$GLOBALS["lang"]['Identification'] = 'Identigaĵo';

$GLOBALS["lang"]['If'] = 'Se';

$GLOBALS["lang"]['If a port responds with filtered, should we consider it available.'] = 'Se haveno respondas per filtrita, ni konsideru ĝin disponebla.';

$GLOBALS["lang"]['If a port responds with open|filtered, should we consider it available.'] = 'Se haveno respondas kun malfermado, ni konsideru ĝin disponebla.';

$GLOBALS["lang"]['If a remote device does not exist in the Open-AudIT selected devices, should we delete it from the external system.'] = 'Se malproksima aparato ne ekzistas en la Open-AudIT elektitaj aparatoj, ni devus forigi ĝin de la ekstera sistemo.';

$GLOBALS["lang"]['If an Open-AudIT device has been changed, should we update the external system.'] = 'Se Open-AudIT-aparato estis ŝanĝita, ni devus ĝisdatigi la eksteran sistemon.';

$GLOBALS["lang"]['If an Open-AudIT device is not on the external system, should we create it.'] = 'Se Open-AudIT-aparato ne estas sur la ekstera sistemo, ni devus krei ĝin.';

$GLOBALS["lang"]['If an agent reports its primary IP is in this subnet, perform the actions.'] = 'Se agento raportas sian primaran IP estas en tiu subreto, elfaras la agojn.';

$GLOBALS["lang"]['If any of these (comma seperated, no spaces) ports are detected, assume SSH is running on them and use them for auditing. No need to add this port to the Custom TCP ports - it will be added automatically.'] = 'Se iu el tiuj (komma seperitaj, neniuj spacoj) havenoj estas detektitaj, supozas SSH kuras sur ilin kaj uzas ilin por reviziado. Neniu bezono aldoni tiun havenon al la Custom TCP-havenoj - ĝi estos aldonita aŭtomate.';

$GLOBALS["lang"]['If set, holds a JSON array of specific device columns this user has chosen to see, other than the configuration default.'] = 'Se aro, tenas JSON aron de specifaj aparatokolonoj tiu uzanto elektis vidi, krom la konfiguraciodefaŭlto.';

$GLOBALS["lang"]['If the agent OS family (case insensitive) contains this string, perform the actions.'] = 'Se la agento Os familio (kazo imuna) enhavas tiun kordon, elfaras la agojn.';

$GLOBALS["lang"]['If the following conditions are met:<br><ul><li>a Role has an assigned ad_group</li><li>an Org has an assigned ad_group</li><li>an LDAP Server has use_roles set to y</li><li>a user exists in LDAP (be it Active Directory or OpenLDAP) and is in the assigned ad_groups</li></ul>That user can log on to Open-AudIT without an account in Open-AudIT needing to be created. Open-AudIT will query the LDAP in question and if the user is in the required groups but not in Open-AudIT, their user attributes (name, full name, email,  roles, orgs, etc) within Open-AudIT will be automatically populated and they will be logged on.<br> <br>'] = 'Se la sekvaj kondiĉoj estas renkontitaj:<br/><ul><li>Rolo havas asignitan ad_group</li><li>Org havas asignitan ad_group</li><li>LDAP Servilo havas la uzon de yroles al y</li><li>uzanto ekzistas en LDAP (estu ĝi Aktiva Adresaro aŭ OpenLDAP) kaj estas en la asignita ad_grupoj.</li></ul>Tiu uzanto povas ensaluti al Open-AudIT sen raporto en Open-AudIT-bezono esti kreita. Open-AudIT demandos la LDAP koncerne kaj se la uzanto estas en la postulataj grupoj sed ne en Open-AudIT, iliaj uzant atributoj (nomo, plena nomo, retpoŝto, roloj, orgoj, ktp.) ene de Open-AudIT estos aŭtomate loĝitaj kaj ili estos registraditaj.<br/> <br/>';

$GLOBALS["lang"]['If the user logging on to Open-AudIT does not have the access to search LDAP, you can use another account which does have this access.'] = 'Se la uzanto registradanta al Open-AudIT ne havas la aliron serĉi LDAP, vi povas uzi alian raporton kiu havas tiun aliron.';

$GLOBALS["lang"]['If this many or more minutes have passed since the device contacted the server, perform the actions.'] = 'Se tio multaj aŭ pli da minutoj pasis ĉar la aparato kontaktis la servilon, elfaras la agojn.';

$GLOBALS["lang"]['If you choose a Collector, it will be scheduled to execute on the next 5 minute boundary.'] = 'Se vi elektas kolektanton, ĝi estos planita por efektivigi sur la venonta 5 minuto limo.';

$GLOBALS["lang"]['ifadminstatus'] = 'Seadminstatus';

$GLOBALS["lang"]['Ifadminstatus'] = 'Seadminstatus';

$GLOBALS["lang"]['iflastchange'] = 'Se la lasta ŝanĝo';

$GLOBALS["lang"]['Iflastchange'] = 'Se la lasta ŝanĝo';

$GLOBALS["lang"]['Ignored'] = 'Nescio';

$GLOBALS["lang"]['image'] = 'Bildo';

$GLOBALS["lang"]['Image'] = 'Bildo';

$GLOBALS["lang"]['Images'] = 'Bildoj';

$GLOBALS["lang"]['impact_availability'] = 'Efiko de la availeblo';

$GLOBALS["lang"]['Impact Availability'] = 'Efiko de la availeblo';

$GLOBALS["lang"]['impact_confidentiality'] = 'Efiko de la konfidenco';

$GLOBALS["lang"]['Impact Confidentiality'] = 'Efiko de la konfidenco';

$GLOBALS["lang"]['impact_integrity'] = 'Efiko';

$GLOBALS["lang"]['Impact Integrity'] = 'Efiko';

$GLOBALS["lang"]['implementation_notes'] = 'Efektivigo Notaĵoj';

$GLOBALS["lang"]['Implementation Notes'] = 'Efektivigo Notaĵoj';

$GLOBALS["lang"]['Import'] = 'Importado';

$GLOBALS["lang"]['Import Example Data'] = 'Gravaj datenoj';

$GLOBALS["lang"]['improvement_opportunities'] = 'Plibonigo Opportunities';

$GLOBALS["lang"]['Improvement Opportunities'] = 'Plibonigo Opportunities';

$GLOBALS["lang"]['In'] = 'En';

$GLOBALS["lang"]['Inactive'] = 'Iniciata';

$GLOBALS["lang"]['Include'] = 'Inkludas';

$GLOBALS["lang"]['Incomplete'] = 'En kompleta';

$GLOBALS["lang"]['Index'] = 'Indekso de Indekso';

$GLOBALS["lang"]['India'] = 'Hindio';

$GLOBALS["lang"]['Indonesia'] = 'Indonezio';

$GLOBALS["lang"]['Info'] = 'Info';

$GLOBALS["lang"]['Informational'] = 'Informa Informo';

$GLOBALS["lang"]['initial_size'] = 'Komenca Size';

$GLOBALS["lang"]['Initial Size'] = 'Komenca Size';

$GLOBALS["lang"]['inode'] = 'Inode';

$GLOBALS["lang"]['Inode'] = 'Inode';

$GLOBALS["lang"]['Input Type'] = 'Inputa Tipo';

$GLOBALS["lang"]['inputs'] = 'Inputoj';

$GLOBALS["lang"]['Inputs'] = 'Inputoj';

$GLOBALS["lang"]['Insane'] = 'Ensane';

$GLOBALS["lang"]['Insert example data and discover all that Open-AudIT can tell you.'] = 'Insertaj ekzemploj datenoj kaj malkovras ke Open-AudIT povas rakonti al vi.';

$GLOBALS["lang"]['Insert your Purchased license Key'] = 'Enmetu vian Aĉetita permesilo Ŝlosilo';

$GLOBALS["lang"]['install'] = 'Instalgio';

$GLOBALS["lang"]['Install'] = 'Instalgio';

$GLOBALS["lang"]['install_date'] = 'Instali Daton';

$GLOBALS["lang"]['Install Date'] = 'Instali Daton';

$GLOBALS["lang"]['install_directory'] = 'Instalaĵa Adresaro';

$GLOBALS["lang"]['Install Directory'] = 'Instalaĵa Adresaro';

$GLOBALS["lang"]['Install OpenScap if required'] = 'Instali OpenScap se necese';

$GLOBALS["lang"]['install_source'] = 'Instali Fonto';

$GLOBALS["lang"]['Install Source'] = 'Instali Fonto';

$GLOBALS["lang"]['installed_by'] = 'Instalita per';

$GLOBALS["lang"]['Installed By'] = 'Instalita per';

$GLOBALS["lang"]['installed_on'] = 'Instalita sur';

$GLOBALS["lang"]['Installed On'] = 'Instalita sur';

$GLOBALS["lang"]['Installing on Linux'] = 'Instali en Linukso';

$GLOBALS["lang"]['Installing on MacOS'] = 'Instali en MacOS';

$GLOBALS["lang"]['Installing on Windows'] = 'Instali sur Vindozo';

$GLOBALS["lang"]['instance'] = 'Instance';

$GLOBALS["lang"]['Instance'] = 'Instance';

$GLOBALS["lang"]['instance_ident'] = 'Instance Ident';

$GLOBALS["lang"]['Instance Ident'] = 'Instance Ident';

$GLOBALS["lang"]['instance_options'] = 'Instance Opcioj';

$GLOBALS["lang"]['Instance Options'] = 'Instance Opcioj';

$GLOBALS["lang"]['instance_provider'] = 'Instance Provider';

$GLOBALS["lang"]['Instance Provider'] = 'Instance Provider';

$GLOBALS["lang"]['instance_reservation_ident'] = 'Instance rezervado Ident';

$GLOBALS["lang"]['Instance Reservation Ident'] = 'Instance rezervado Ident';

$GLOBALS["lang"]['instance_state'] = 'Instance State';

$GLOBALS["lang"]['Instance State'] = 'Instance State';

$GLOBALS["lang"]['instance_tags'] = 'Instance Tags';

$GLOBALS["lang"]['Instance Tags'] = 'Instance Tags';

$GLOBALS["lang"]['instance_type'] = 'Instance Type';

$GLOBALS["lang"]['Instance Type'] = 'Instance Type';

$GLOBALS["lang"]['Integer'] = 'Integer';

$GLOBALS["lang"]['Integration'] = 'Integriĝo';

$GLOBALS["lang"]['integrations'] = 'integriĝoj';

$GLOBALS["lang"]['Integrations'] = 'integriĝoj';

$GLOBALS["lang"]['integrations_id'] = 'Integri la identigilojn';

$GLOBALS["lang"]['Integrations ID'] = 'Integri la identigilojn';

$GLOBALS["lang"]['integrations_log'] = 'Integriĝoj';

$GLOBALS["lang"]['Integrations Log'] = 'Integriĝoj';

$GLOBALS["lang"]['interface'] = 'Intervizaĝo';

$GLOBALS["lang"]['Interface'] = 'Intervizaĝo';

$GLOBALS["lang"]['interface_id'] = 'Intervizaĝo ID';

$GLOBALS["lang"]['Interface ID'] = 'Intervizaĝo ID';

$GLOBALS["lang"]['interface_type'] = 'Interface Tipo';

$GLOBALS["lang"]['Interface Type'] = 'Interface Tipo';

$GLOBALS["lang"]['Internal'] = 'Interna Interna Interna';

$GLOBALS["lang"]['Internal Field Name'] = 'Interna kamponomo';

$GLOBALS["lang"]['Internal ID'] = 'Interna ID';

$GLOBALS["lang"]['Internal JSON array of valid access tokens for this user.'] = 'Interna JSON aro de valida aliro al ĵetonoj por tiu uzanto.';

$GLOBALS["lang"]['Introduction'] = 'Enkonduko';

$GLOBALS["lang"]['invoice'] = 'La fakturo';

$GLOBALS["lang"]['Invoice'] = 'La fakturo';

$GLOBALS["lang"]['invoice_id'] = 'Inkluzivas ID';

$GLOBALS["lang"]['Invoice ID'] = 'Inkluzivas ID';

$GLOBALS["lang"]['invoice_item'] = '→ Eventoj:';

$GLOBALS["lang"]['Invoice Item'] = '→ Eventoj:';

$GLOBALS["lang"]['ios_version'] = 'Versio de Ios';

$GLOBALS["lang"]['Ios Version'] = 'Versio de Ios';

$GLOBALS["lang"]['ip_address_external_a'] = 'Ip Address Ekstera A';

$GLOBALS["lang"]['Ip Address External A'] = 'Ip Address Ekstera A';

$GLOBALS["lang"]['ip_address_external_b'] = 'Ip Adreso Ekstera B';

$GLOBALS["lang"]['Ip Address External B'] = 'Ip Adreso Ekstera B';

$GLOBALS["lang"]['ip_address_internal_a'] = 'Ip Address Internal A';

$GLOBALS["lang"]['Ip Address Internal A'] = 'Ip Address Internal A';

$GLOBALS["lang"]['ip_address_internal_b'] = 'Ip Address Internal B';

$GLOBALS["lang"]['Ip Address Internal B'] = 'Ip Address Internal B';

$GLOBALS["lang"]['ip_all_count'] = 'Ip All Count';

$GLOBALS["lang"]['Ip All Count'] = 'Ip All Count';

$GLOBALS["lang"]['ip_audited_count'] = 'Ip Audited Count';

$GLOBALS["lang"]['Ip Audited Count'] = 'Ip Audited Count';

$GLOBALS["lang"]['ip_discovered_count'] = 'Ip malkovris kalkulon';

$GLOBALS["lang"]['Ip Discovered Count'] = 'Ip malkovris kalkulon';

$GLOBALS["lang"]['ip_enabled'] = 'Ip Enabled';

$GLOBALS["lang"]['Ip Enabled'] = 'Ip Enabled';

$GLOBALS["lang"]['ip_responding_count'] = 'Ip Respondis kalkulon';

$GLOBALS["lang"]['Ip Responding Count'] = 'Ip Respondis kalkulon';

$GLOBALS["lang"]['ip_scanned_count'] = 'Ip Scanned Count';

$GLOBALS["lang"]['Ip Scanned Count'] = 'Ip Scanned Count';

$GLOBALS["lang"]['Iran'] = 'Irano';

$GLOBALS["lang"]['Iraq'] = 'Irako Irako';

$GLOBALS["lang"]['Ireland'] = 'Irlando Irlando';

$GLOBALS["lang"]['Is FRU'] = 'Estas FRU';

$GLOBALS["lang"]['is_fru'] = 'Estas Fru';

$GLOBALS["lang"]['Is Fru'] = 'Estas Fru';

$GLOBALS["lang"]['Is the NMIS server local (on this Open-AudIT server) or remote?'] = 'Ĉu la NMIS-servilo loka (sur tiu Open-AudIT-servilo) aŭ malproksima?';

$GLOBALS["lang"]['Is this account active? If set to <code>n</code>, the user cannot logon.'] = 'Ĉu tio estas aktiva? Se vi metis al <code>n</code>La uzanto ne povas logon.';

$GLOBALS["lang"]['Is this query restricted to licensed customers.'] = 'Tio estas limigita al aprobitaj klientoj.';

$GLOBALS["lang"]['Is this task enabled (y/n).'] = 'Tiu tasko estas ebligita (y/n).';

$GLOBALS["lang"]['Isle of Man'] = 'Situo de MAN';

$GLOBALS["lang"]['Israel'] = 'Israelo';

$GLOBALS["lang"]['Issue'] = 'La afero';

$GLOBALS["lang"]['issuer'] = 'Issuer';

$GLOBALS["lang"]['Issuer'] = 'Issuer';

$GLOBALS["lang"]['issuer_name'] = 'Ĉefa nomo';

$GLOBALS["lang"]['Issuer Name'] = 'Ĉefa nomo';

$GLOBALS["lang"]['Issues'] = 'Temoj';

$GLOBALS["lang"]['Italy'] = 'Italio Italio';

$GLOBALS["lang"]['Items not in Baseline'] = 'Ĝi ne estas en bazo';

$GLOBALS["lang"]['JSON'] = 'JSON';

$GLOBALS["lang"]['JSON to Import'] = '→ Eventoj:';

$GLOBALS["lang"]['Jamaica'] = 'Jamajko';

$GLOBALS["lang"]['January'] = 'Januaro Januaro Januaro Januaro';

$GLOBALS["lang"]['Japan'] = 'Japanio Japanio';

$GLOBALS["lang"]['Jersey'] = 'Ĵerzo';

$GLOBALS["lang"]['Jordan'] = 'Jordano';

$GLOBALS["lang"]['July'] = 'Julio Julio';

$GLOBALS["lang"]['June'] = 'Junio Junio Junio';

$GLOBALS["lang"]['Kazakhstan'] = 'Kazaĥio';

$GLOBALS["lang"]['Kenya'] = 'Kenjo';

$GLOBALS["lang"]['kernel_version'] = 'Kerna versio';

$GLOBALS["lang"]['Kernel Version'] = 'Kerna versio';

$GLOBALS["lang"]['Key'] = 'Ŝlosilo';

$GLOBALS["lang"]['Key Password (optional)'] = 'Ŝlosilo Pasvorto (optional)';

$GLOBALS["lang"]['keys'] = 'Ŝlosiloj';

$GLOBALS["lang"]['Keys'] = 'Ŝlosiloj';

$GLOBALS["lang"]['Kiribati'] = 'Kiribato';

$GLOBALS["lang"]['Korea'] = 'Koreio';

$GLOBALS["lang"]['Kuwait'] = 'Kuvajto';

$GLOBALS["lang"]['Kyrgyz Republic'] = 'Kirgizoj Respubliko';

$GLOBALS["lang"]['lang'] = 'Lang Lang';

$GLOBALS["lang"]['Lang'] = 'Lang Lang';

$GLOBALS["lang"]['language'] = 'Lingvo';

$GLOBALS["lang"]['Language'] = 'Lingvo';

$GLOBALS["lang"]['Lao'] = 'Lao';

$GLOBALS["lang"]['last_changed'] = 'La lasta ŝanĝo';

$GLOBALS["lang"]['Last Changed'] = 'La lasta ŝanĝo';

$GLOBALS["lang"]['last_finished'] = 'La lasta';

$GLOBALS["lang"]['Last Finished'] = 'La lasta';

$GLOBALS["lang"]['last_logon'] = 'Last Logon';

$GLOBALS["lang"]['Last Logon'] = 'Last Logon';

$GLOBALS["lang"]['Last Name'] = 'Lasta nomo';

$GLOBALS["lang"]['last_os_update'] = 'Last Os Update';

$GLOBALS["lang"]['Last Os Update'] = 'Last Os Update';

$GLOBALS["lang"]['last_result'] = 'La lasta rezulto';

$GLOBALS["lang"]['Last Result'] = 'La lasta rezulto';

$GLOBALS["lang"]['last_run'] = 'Lasta Kuro';

$GLOBALS["lang"]['Last Run'] = 'Lasta Kuro';

$GLOBALS["lang"]['last_seen'] = 'La lasta rigardo';

$GLOBALS["lang"]['Last Seen'] = 'La lasta rigardo';

$GLOBALS["lang"]['last_seen_by'] = 'La lasta rigardo Antaŭite per';

$GLOBALS["lang"]['Last Seen By'] = 'La lasta rigardo Antaŭite per';

$GLOBALS["lang"]['last_user'] = 'Lasta Uzanto';

$GLOBALS["lang"]['Last User'] = 'Lasta Uzanto';

$GLOBALS["lang"]['lastModified'] = 'LastModified';

$GLOBALS["lang"]['LastModified'] = 'LastModified';

$GLOBALS["lang"]['latitude'] = 'Latitudo';

$GLOBALS["lang"]['Latitude'] = 'Latitudo';

$GLOBALS["lang"]['Latvia'] = 'Latvio';

$GLOBALS["lang"]['Layout'] = 'Lavit';

$GLOBALS["lang"]['ldap'] = 'Ldap';

$GLOBALS["lang"]['Ldap'] = 'Ldap';

$GLOBALS["lang"]['ldap_base_dn'] = 'Ldap Base Dn';

$GLOBALS["lang"]['Ldap Base Dn'] = 'Ldap Base Dn';

$GLOBALS["lang"]['ldap_dn_account'] = 'Ldap Dn Account';

$GLOBALS["lang"]['Ldap Dn Account'] = 'Ldap Dn Account';

$GLOBALS["lang"]['ldap_dn_password'] = 'Ldap Dn Password';

$GLOBALS["lang"]['Ldap Dn Password'] = 'Ldap Dn Password';

$GLOBALS["lang"]['Learn About'] = 'Lernu pri';

$GLOBALS["lang"]['Learn More'] = 'Lernu pli';

$GLOBALS["lang"]['lease_expiry_date'] = 'Lease Expiry Date';

$GLOBALS["lang"]['Lease Expiry Date'] = 'Lease Expiry Date';

$GLOBALS["lang"]['Lebanon'] = 'Libano Libano';

$GLOBALS["lang"]['legal_requirements'] = 'Laŭleĝaj Postuloj';

$GLOBALS["lang"]['Legal Requirements'] = 'Laŭleĝaj Postuloj';

$GLOBALS["lang"]['Lesotho'] = 'Lesoto';

$GLOBALS["lang"]['Less Than'] = 'malpli ol';

$GLOBALS["lang"]['Less Than or Equals'] = 'Malpli ol aŭ egalaj';

$GLOBALS["lang"]['level'] = 'Nivelo';

$GLOBALS["lang"]['Level'] = 'Nivelo';

$GLOBALS["lang"]['Level of privileges needed to exploit (None, Low, High).'] = 'Nivelo de privilegioj necesaj por ekspluati (None, Low, High).';

$GLOBALS["lang"]['Liberia'] = 'Liberio';

$GLOBALS["lang"]['Libyan Arab Jamahiriya'] = 'Libia araba Jamahiriya';

$GLOBALS["lang"]['License'] = 'Licenco';

$GLOBALS["lang"]['License Key'] = 'Licenco Ŝlosilo';

$GLOBALS["lang"]['License Required'] = 'Licenco Postulo';

$GLOBALS["lang"]['licenses'] = 'permesiloj';

$GLOBALS["lang"]['Licenses'] = 'permesiloj';

$GLOBALS["lang"]['Liechtenstein'] = 'Liĥtenŝtejno';

$GLOBALS["lang"]['Like'] = 'Kiel';

$GLOBALS["lang"]['limit'] = 'Limoj';

$GLOBALS["lang"]['Limit'] = 'Limoj';

$GLOBALS["lang"]['Limit the query to the first X items.'] = 'Limigi la atendon al la unuaj Xaj eroj.';

$GLOBALS["lang"]['Limited to 100 rows.'] = 'Limigita al 100 vicoj.';

$GLOBALS["lang"]['line_amount'] = 'Linio Amount';

$GLOBALS["lang"]['Line Amount'] = 'Linio Amount';

$GLOBALS["lang"]['Line Graph'] = 'Linio Graph';

$GLOBALS["lang"]['line_number_a'] = 'Linio Nombro A';

$GLOBALS["lang"]['Line Number A'] = 'Linio Nombro A';

$GLOBALS["lang"]['line_number_b'] = 'Linio Nombro B';

$GLOBALS["lang"]['Line Number B'] = 'Linio Nombro B';

$GLOBALS["lang"]['line_text'] = 'Linio Teksto';

$GLOBALS["lang"]['Line Text'] = 'Linio Teksto';

$GLOBALS["lang"]['link'] = 'Ligiloj';

$GLOBALS["lang"]['Link'] = 'Ligiloj';

$GLOBALS["lang"]['Link (Advanced)'] = 'L[redakti]';

$GLOBALS["lang"]['Linked Files'] = 'Lizita Dosieroj';

$GLOBALS["lang"]['links'] = 'Ligiloj';

$GLOBALS["lang"]['Links'] = 'Ligiloj';

$GLOBALS["lang"]['Links this discovery to the associated cloud (if required). Links to <code>clouds.id</code>.'] = 'Ligiloj tiu eltrovaĵo al la rilata nubo (se necese). Ligiloj al <code>clouds.id</code>.';

$GLOBALS["lang"]['Links to <code>discovery_scan_options.id</code>.'] = 'Ligiloj al <code>discovery_scan_options.id</code>.';

$GLOBALS["lang"]['Links to <code>standards.id</code>'] = 'Ligiloj al <code>standards.id</code>';

$GLOBALS["lang"]['Links to <standards_policies.id</code>'] = 'Ligiloj al <standards_policies.id< code=""></standards_policies.id<>';

$GLOBALS["lang"]['Linux'] = 'Linukso';

$GLOBALS["lang"]['List'] = 'Listo de Listo';

$GLOBALS["lang"]['list_table_format'] = 'Listo de Table Format';

$GLOBALS["lang"]['List Table Format'] = 'Listo de Table Format';

$GLOBALS["lang"]['Lithuania'] = 'Litovio';

$GLOBALS["lang"]['Load Balancing'] = 'Load Balancing';

$GLOBALS["lang"]['Local'] = 'Lokaj lokaj';

$GLOBALS["lang"]['Local Area Network'] = 'Loka Area Network';

$GLOBALS["lang"]['local_port'] = 'Loka Haveno';

$GLOBALS["lang"]['Local Port'] = 'Loka Haveno';

$GLOBALS["lang"]['Localhost'] = 'Lokulo';

$GLOBALS["lang"]['Localisation'] = 'Lokalizo';

$GLOBALS["lang"]['Location'] = 'Situo';

$GLOBALS["lang"]['Location A'] = 'Situo';

$GLOBALS["lang"]['Location B'] = 'Situo B';

$GLOBALS["lang"]['location_id'] = 'Situo';

$GLOBALS["lang"]['Location ID'] = 'Situo';

$GLOBALS["lang"]['location_id_a'] = 'Situo';

$GLOBALS["lang"]['Location ID A'] = 'Situo';

$GLOBALS["lang"]['location_id_b'] = 'Situo de B';

$GLOBALS["lang"]['Location ID B'] = 'Situo de B';

$GLOBALS["lang"]['location_latitude'] = 'Situo de latitudo';

$GLOBALS["lang"]['Location Latitude'] = 'Situo de latitudo';

$GLOBALS["lang"]['location_level'] = 'Situo de la nivelo';

$GLOBALS["lang"]['Location Level'] = 'Situo de la nivelo';

$GLOBALS["lang"]['location_longitude'] = 'Situo Longitudo';

$GLOBALS["lang"]['Location Longitude'] = 'Situo Longitudo';

$GLOBALS["lang"]['location_rack'] = 'Situo de Rack';

$GLOBALS["lang"]['Location Rack'] = 'Situo de Rack';

$GLOBALS["lang"]['location_rack_position'] = 'Situo de Rack';

$GLOBALS["lang"]['Location Rack Position'] = 'Situo de Rack';

$GLOBALS["lang"]['location_rack_size'] = 'Situo de Rack Size';

$GLOBALS["lang"]['Location Rack Size'] = 'Situo de Rack Size';

$GLOBALS["lang"]['location_room'] = 'Situo Ĉambro';

$GLOBALS["lang"]['Location Room'] = 'Situo Ĉambro';

$GLOBALS["lang"]['location_suite'] = 'Situo';

$GLOBALS["lang"]['Location Suite'] = 'Situo';

$GLOBALS["lang"]['locations'] = 'Situo';

$GLOBALS["lang"]['Locations'] = 'Situo';

$GLOBALS["lang"]['Locations in this'] = 'Situo en tio';

$GLOBALS["lang"]['log'] = 'Registro';

$GLOBALS["lang"]['Log'] = 'Registro';

$GLOBALS["lang"]['log_format'] = 'Registri Pormat';

$GLOBALS["lang"]['Log Format'] = 'Registri Pormat';

$GLOBALS["lang"]['log_path'] = 'Registri la vojon';

$GLOBALS["lang"]['Log Path'] = 'Registri la vojon';

$GLOBALS["lang"]['log_rotation'] = 'Logo Rotacio';

$GLOBALS["lang"]['Log Rotation'] = 'Logo Rotacio';

$GLOBALS["lang"]['log_status'] = 'Registri Status';

$GLOBALS["lang"]['Log Status'] = 'Registri Status';

$GLOBALS["lang"]['Logical Cores '] = 'Logiko Kernas ';

$GLOBALS["lang"]['logical_count'] = 'Logika kalkulo';

$GLOBALS["lang"]['Logical Count'] = 'Logika kalkulo';

$GLOBALS["lang"]['Logout'] = 'Diskuto';

$GLOBALS["lang"]['Logs'] = 'Registroj';

$GLOBALS["lang"]['longitude'] = 'Longitudo';

$GLOBALS["lang"]['Longitude'] = 'Longitudo';

$GLOBALS["lang"]['low'] = 'malalta';

$GLOBALS["lang"]['Low'] = 'malalta';

$GLOBALS["lang"]['Lower Case'] = 'Pli malalta kazo';

$GLOBALS["lang"]['Luxembourg'] = 'Luksemburgio';

$GLOBALS["lang"]['MAC Address'] = 'MAC-adreso';

$GLOBALS["lang"]['MAC Manufacturer'] = 'MAC Fabrikisto';

$GLOBALS["lang"]['mac'] = 'Mac Mac Mac';

$GLOBALS["lang"]['Mac'] = 'Mac Mac Mac';

$GLOBALS["lang"]['Mac Address'] = 'Mac Address';

$GLOBALS["lang"]['MacOS'] = 'MacOS';

$GLOBALS["lang"]['Macao'] = 'Macao';

$GLOBALS["lang"]['Macedonia'] = 'Makedonio Makedonio';

$GLOBALS["lang"]['Madagascar'] = 'Madagaskaro';

$GLOBALS["lang"]['maintenance_expires'] = 'Prizorgado de elspezoj';

$GLOBALS["lang"]['Maintenance Expires'] = 'Prizorgado de elspezoj';

$GLOBALS["lang"]['Make My Default Dashboard'] = 'Faru mian Defaŭltan Dashboard';

$GLOBALS["lang"]['Make this install a Collector'] = 'Faru tion instali kolektantan kolektanton';

$GLOBALS["lang"]['Malawi'] = 'Malavia';

$GLOBALS["lang"]['Malaysia'] = 'Malajzio';

$GLOBALS["lang"]['Maldives'] = 'Maldivoj';

$GLOBALS["lang"]['Mali'] = 'Malio Malio';

$GLOBALS["lang"]['Malta'] = 'Malto';

$GLOBALS["lang"]['Manage'] = 'Manaĝo';

$GLOBALS["lang"]['Manage Licenses'] = 'Manaĝlicencoj';

$GLOBALS["lang"]['Manage in NMIS'] = 'Manaĝo en NMIS';

$GLOBALS["lang"]['Managed'] = 'Administranto';

$GLOBALS["lang"]['managed_by'] = 'Administrata de';

$GLOBALS["lang"]['Managed By'] = 'Administrata de';

$GLOBALS["lang"]['Manual Input'] = 'Manlibro en';

$GLOBALS["lang"]['Manually set by user, defaults to Production.'] = 'Mane metita fare de uzanto, defaŭltas al Produktado.';

$GLOBALS["lang"]['Manually set by user.'] = 'Ĝi estas farita de uzanto.';

$GLOBALS["lang"]['manufacture_date'] = 'Fabrika Dato';

$GLOBALS["lang"]['Manufacture Date'] = 'Fabrika Dato';

$GLOBALS["lang"]['manufacturer'] = 'Fabrikisto';

$GLOBALS["lang"]['Manufacturer'] = 'Fabrikisto';

$GLOBALS["lang"]['manufacturer_code'] = 'Manufacturer Code';

$GLOBALS["lang"]['Manufacturer Code'] = 'Manufacturer Code';

$GLOBALS["lang"]['Map'] = 'Mapo mapo';

$GLOBALS["lang"]['maps'] = 'Mapoj';

$GLOBALS["lang"]['Maps'] = 'Mapoj';

$GLOBALS["lang"]['March'] = 'Marto de marto';

$GLOBALS["lang"]['Marshall Islands'] = 'Marŝala Insularo';

$GLOBALS["lang"]['Martinique'] = 'Martiniko';

$GLOBALS["lang"]['mask'] = 'Masko';

$GLOBALS["lang"]['Mask'] = 'Masko';

$GLOBALS["lang"]['Match'] = 'Match Match';

$GLOBALS["lang"]['match_options'] = 'Match Opcioj';

$GLOBALS["lang"]['Match Options'] = 'Match Opcioj';

$GLOBALS["lang"]['match_string'] = 'Match String';

$GLOBALS["lang"]['Match String'] = 'Match String';

$GLOBALS["lang"]['Matching Attribute'] = 'Matching Attribute';

$GLOBALS["lang"]['maturity_level'] = 'Maturity Level';

$GLOBALS["lang"]['Maturity Level'] = 'Maturity Level';

$GLOBALS["lang"]['maturity_score'] = 'Maturity Score';

$GLOBALS["lang"]['Maturity Score'] = 'Maturity Score';

$GLOBALS["lang"]['Mauritania'] = 'Maŭritanio';

$GLOBALS["lang"]['Mauritius'] = 'Maŭricio Maŭricio';

$GLOBALS["lang"]['max_file_size'] = 'Max File Size';

$GLOBALS["lang"]['Max File Size'] = 'Max File Size';

$GLOBALS["lang"]['Max Length'] = 'Max Length';

$GLOBALS["lang"]['max_size'] = 'Max Size';

$GLOBALS["lang"]['Max Size'] = 'Max Size';

$GLOBALS["lang"]['May'] = 'Majo Majo Majo Majo';

$GLOBALS["lang"]['Mayotte'] = 'Mayotte';

$GLOBALS["lang"]['Measures the likelihood of the vulnerability being attacked, and is based on the current state of exploit techniques, exploit code availability, or active, “in-the-wild” exploitation.'] = 'Mezuras la verŝajnecon de la vundebleco estanta atakita, kaj estas bazita sur la nuna stato de ekspluati teknikojn, ekspluati kodhaveblecon, aŭ aktivan, "en-la-sovaĝan" ekspluaton.';

$GLOBALS["lang"]['medium'] = 'Medium';

$GLOBALS["lang"]['Medium'] = 'Medium';

$GLOBALS["lang"]['members'] = 'Membroj de membroj';

$GLOBALS["lang"]['Members'] = 'Membroj de membroj';

$GLOBALS["lang"]['memory'] = 'Memoro';

$GLOBALS["lang"]['Memory'] = 'Memoro';

$GLOBALS["lang"]['memory_count'] = 'Memoro Count';

$GLOBALS["lang"]['Memory Count'] = 'Memoro Count';

$GLOBALS["lang"]['memory_slot_count'] = 'Memoro Slot';

$GLOBALS["lang"]['Memory Slot Count'] = 'Memoro Slot';

$GLOBALS["lang"]['menu_category'] = 'Menu Kategorio';

$GLOBALS["lang"]['Menu Category'] = 'Menu Kategorio';

$GLOBALS["lang"]['menu_display'] = 'Menu Display';

$GLOBALS["lang"]['Menu Display'] = 'Menu Display';

$GLOBALS["lang"]['message'] = 'Mesaĝo';

$GLOBALS["lang"]['Message'] = 'Mesaĝo';

$GLOBALS["lang"]['meta_last_changed'] = 'La lasta ŝanĝo';

$GLOBALS["lang"]['Meta Last Changed'] = 'La lasta ŝanĝo';

$GLOBALS["lang"]['metric'] = 'Metric';

$GLOBALS["lang"]['Metric'] = 'Metric';

$GLOBALS["lang"]['Metropolitan Area Network'] = 'Metropolitan Area Network';

$GLOBALS["lang"]['Mexico'] = 'Meksiko';

$GLOBALS["lang"]['Micronesia'] = 'Mikronezio';

$GLOBALS["lang"]['Microsoft Azure Fields'] = 'Microsoft Azure Fields';

$GLOBALS["lang"]['microtime'] = 'Mikrotempo';

$GLOBALS["lang"]['Microtime'] = 'Mikrotempo';

$GLOBALS["lang"]['minute'] = 'Protokolo';

$GLOBALS["lang"]['Minute'] = 'Protokolo';

$GLOBALS["lang"]['Minutes Since last Audit are Greater than'] = 'Minutoj ĉar lasta revizio estas pli grandaj ol';

$GLOBALS["lang"]['model'] = 'Modelo';

$GLOBALS["lang"]['Model'] = 'Modelo';

$GLOBALS["lang"]['model_family'] = 'Modelo de la familio';

$GLOBALS["lang"]['Model Family'] = 'Modelo de la familio';

$GLOBALS["lang"]['module'] = 'Modulo';

$GLOBALS["lang"]['Module'] = 'Modulo';

$GLOBALS["lang"]['module_index'] = 'Module Indekso';

$GLOBALS["lang"]['Module Index'] = 'Module Indekso';

$GLOBALS["lang"]['Modules'] = 'Moduloj';

$GLOBALS["lang"]['Moldova'] = 'Moldavio';

$GLOBALS["lang"]['Monaco'] = 'Monako';

$GLOBALS["lang"]['Monday'] = 'lundo lunde';

$GLOBALS["lang"]['Mongolia'] = 'Mongolio';

$GLOBALS["lang"]['monitor'] = 'ekrano';

$GLOBALS["lang"]['Monitor'] = 'ekrano';

$GLOBALS["lang"]['Montenegro'] = 'Montenegro';

$GLOBALS["lang"]['month'] = 'Monato';

$GLOBALS["lang"]['Month'] = 'Monato';

$GLOBALS["lang"]['Montserrat'] = 'Montserrat';

$GLOBALS["lang"]['Morocco'] = 'Maroko';

$GLOBALS["lang"]['motherboard'] = 'Motherboard';

$GLOBALS["lang"]['Motherboard'] = 'Motherboard';

$GLOBALS["lang"]['mount_point'] = 'Monto de Monto';

$GLOBALS["lang"]['Mount Point'] = 'Monto de Monto';

$GLOBALS["lang"]['mount_type'] = 'Monto Tipo';

$GLOBALS["lang"]['Mount Type'] = 'Monto Tipo';

$GLOBALS["lang"]['Mozambique'] = 'Mozambiko';

$GLOBALS["lang"]['Must Respond to Ping'] = 'Respondu al Ping';

$GLOBALS["lang"]['Myanmar'] = 'Mjanmao';

$GLOBALS["lang"]['N+1'] = 'N+1';

$GLOBALS["lang"]['N+M'] = 'N+M';

$GLOBALS["lang"]['N-to-1'] = 'N-al-1';

$GLOBALS["lang"]['N-to-N'] = 'N-al-N';

$GLOBALS["lang"]['NMIS Business Service'] = 'NMIS Komerca Servo';

$GLOBALS["lang"]['NMIS Customer'] = 'NMIS Kliento';

$GLOBALS["lang"]['NMIS Device Options'] = 'NMIS Device Opcioj';

$GLOBALS["lang"]['NMIS Device Selection'] = 'NMIS Device Selection';

$GLOBALS["lang"]['NMIS Field Name'] = 'NMIS Field Name';

$GLOBALS["lang"]['NMIS Field Type'] = 'NMIS-kampo';

$GLOBALS["lang"]['NMIS Group'] = 'NMIS-grupo';

$GLOBALS["lang"]['NMIS Poller'] = 'NMIS Poller';

$GLOBALS["lang"]['NMIS Role'] = 'NMIS Rolo Rolo';

$GLOBALS["lang"]['NOTE - You can prevent plain text credentials being displayed below by setting the configuration item for <code>decrypt_credentials</code> to <code>n</code>.'] = 'NEE - Vi povas malhelpi simplajn tekstajn akreditaĵojn esti elmontritaj malsupre metante la konfiguracion objekto por <code>decrypt_credentials</code> al la <code>n</code>.';

$GLOBALS["lang"]['name'] = 'Nomo nomo';

$GLOBALS["lang"]['Name'] = 'Nomo nomo';

$GLOBALS["lang"]['Namibia'] = 'Namibio';

$GLOBALS["lang"]['Nauru'] = 'Nauro';

$GLOBALS["lang"]['Nepal'] = 'Nepalo Nepalo';

$GLOBALS["lang"]['net_index'] = 'Net Index';

$GLOBALS["lang"]['Net Index'] = 'Net Index';

$GLOBALS["lang"]['Netherlands Antilles'] = 'Nederlandaj Antiloj';

$GLOBALS["lang"]['Netherlands the'] = 'Nederlando';

$GLOBALS["lang"]['netmask'] = 'Netmask';

$GLOBALS["lang"]['Netmask'] = 'Netmask';

$GLOBALS["lang"]['netstat'] = 'Netstat';

$GLOBALS["lang"]['Netstat'] = 'Netstat';

$GLOBALS["lang"]['Netstat Policies'] = 'Netstat Politikoj';

$GLOBALS["lang"]['Network'] = 'Reto';

$GLOBALS["lang"]['network_address'] = 'Reta Adreso';

$GLOBALS["lang"]['Network Address'] = 'Reta Adreso';

$GLOBALS["lang"]['network_domain'] = 'Reto Domain';

$GLOBALS["lang"]['Network Domain'] = 'Reto Domain';

$GLOBALS["lang"]['Network Types'] = 'Reto Tipoj';

$GLOBALS["lang"]['networks'] = 'Retoj';

$GLOBALS["lang"]['Networks'] = 'Retoj';

$GLOBALS["lang"]['Networks Generated By'] = 'Retoj Generitaj per';

$GLOBALS["lang"]['Networks using a CIDR Mask of'] = 'Retoj uzantaj CIDR Maskon de';

$GLOBALS["lang"]['New Building Name'] = 'Nova konstruaĵo';

$GLOBALS["lang"]['New Caledonia'] = 'Nov-Kaledonio';

$GLOBALS["lang"]['New Floor Name'] = 'Nova Floor Name';

$GLOBALS["lang"]['New Room Name'] = 'Nova Ĉambro';

$GLOBALS["lang"]['New Row Name'] = 'Nova Row Name';

$GLOBALS["lang"]['New Zealand'] = 'Nov-Zelando';

$GLOBALS["lang"]['News'] = 'Novaĵoj';

$GLOBALS["lang"]['next_hop'] = 'Sekvan vesperon';

$GLOBALS["lang"]['Next Hop'] = 'Sekvan vesperon';

$GLOBALS["lang"]['next_run'] = 'Sekvantaro';

$GLOBALS["lang"]['Next Run'] = 'Sekvantaro';

$GLOBALS["lang"]['Nicaragua'] = 'Nikaragvo';

$GLOBALS["lang"]['Niger'] = 'Niĝerio';

$GLOBALS["lang"]['Nigeria'] = 'Niĝerio';

$GLOBALS["lang"]['Niue'] = 'Niuo';

$GLOBALS["lang"]['nmap'] = 'Nmap';

$GLOBALS["lang"]['Nmap'] = 'Nmap';

$GLOBALS["lang"]['Nmap Port Scanning Responses'] = 'Nmap Port Scanning Responses';

$GLOBALS["lang"]['nmap_tcp_ports'] = 'Nmap Tcp Ports';

$GLOBALS["lang"]['Nmap Tcp Ports'] = 'Nmap Tcp Ports';

$GLOBALS["lang"]['nmap_udp_ports'] = 'Nmap Udp Ports';

$GLOBALS["lang"]['Nmap Udp Ports'] = 'Nmap Udp Ports';

$GLOBALS["lang"]['nmis_business_service'] = 'Nmis Business Service';

$GLOBALS["lang"]['Nmis Business Service'] = 'Nmis Business Service';

$GLOBALS["lang"]['nmis_customer'] = 'La Klientoj';

$GLOBALS["lang"]['Nmis Customer'] = 'La Klientoj';

$GLOBALS["lang"]['nmis_group'] = 'Nmis Group';

$GLOBALS["lang"]['Nmis Group'] = 'Nmis Group';

$GLOBALS["lang"]['nmis_manage'] = 'Nmis Manage';

$GLOBALS["lang"]['Nmis Manage'] = 'Nmis Manage';

$GLOBALS["lang"]['nmis_name'] = 'Nomo de Nmis';

$GLOBALS["lang"]['Nmis Name'] = 'Nomo de Nmis';

$GLOBALS["lang"]['nmis_notes'] = 'Nmis Notoj';

$GLOBALS["lang"]['Nmis Notes'] = 'Nmis Notoj';

$GLOBALS["lang"]['nmis_poller'] = 'Nmis Poller';

$GLOBALS["lang"]['Nmis Poller'] = 'Nmis Poller';

$GLOBALS["lang"]['nmis_poller_uuid'] = 'Nmis Poller Uuid';

$GLOBALS["lang"]['Nmis Poller Uuid'] = 'Nmis Poller Uuid';

$GLOBALS["lang"]['nmis_role'] = 'Nmis Ro';

$GLOBALS["lang"]['Nmis Role'] = 'Nmis Ro';

$GLOBALS["lang"]['No'] = 'Neniu';

$GLOBALS["lang"]['No Devices Returned'] = 'Neniu rimedo revenis';

$GLOBALS["lang"]['No Google Maps API Key present, you will not be able to display the map.'] = 'Neniu Google Maps API Vi ne povas montri la mapon.';

$GLOBALS["lang"]['No License for Professional or Enterprise'] = 'Neniu permesilo por Profesia aŭ Enterprise';

$GLOBALS["lang"]['No Results'] = 'Neniuj rezultoj';

$GLOBALS["lang"]['No data in License Key'] = 'Neniuj datenoj en License Key';

$GLOBALS["lang"]['No database upgrade required at this time.'] = 'Neniu database ĝisdatigo postulita en tiu tempo.';

$GLOBALS["lang"]['Node'] = 'Neniu';

$GLOBALS["lang"]['None'] = 'Neniu';

$GLOBALS["lang"]['Norfolk Island'] = 'Norfolkinsulo';

$GLOBALS["lang"]['Normal'] = 'Normala normo';

$GLOBALS["lang"]['Northern Mariana Islands'] = 'Nord-Marianoj';

$GLOBALS["lang"]['Norway'] = 'Norvegio Norvegio';

$GLOBALS["lang"]['Not Applicable'] = 'Ne aplikebla';

$GLOBALS["lang"]['Not Checked'] = 'Ne kontrolis';

$GLOBALS["lang"]['Not Equals'] = 'Ne egalaj';

$GLOBALS["lang"]['Not In'] = 'Ne en';

$GLOBALS["lang"]['Not Like'] = 'ne ŝatas';

$GLOBALS["lang"]['Not Set'] = 'Ne estas aro';

$GLOBALS["lang"]['Not normally used. If set, this requires the device to have an open port (as per Scan Options) to be considered responding. A MAC address, arp response or ping response is not considered sufficient to be considered responding. Useful if a router or firewall between the Open-AudIT server and target IP is responding to port scans on the IPs behalf.'] = 'Ne normale uzata. Se aro, tio postulas la aparaton havi malferman havenon (kiel per Scan Options) esti konsiderita respondado. MAC-adreso, arprespondo aŭ pingrespondo ne estas konsideritaj sufiĉaj esti konsideritaj respondantaj. Utila se itineranto aŭ fajromuro inter la Open-AudIT-servilo kaj celo IP respondas al havenskanadoj sur la IPs-nomo.';

$GLOBALS["lang"]['Note'] = 'Notu';

$GLOBALS["lang"]['Note - Selecting a parent will automatically provide access to its children (although it wont be shown here).'] = 'Notu: Elekti gepatron aŭtomate disponigos aliron al siaj infanoj (kvankam ĝi ne estos montrita ĉi tie).';

$GLOBALS["lang"]['Notes'] = 'Notaĵoj';

$GLOBALS["lang"]['notes'] = 'Notaĵoj';

$GLOBALS["lang"]['Notice'] = 'Aŭtoroj';

$GLOBALS["lang"]['notin'] = 'Notin';

$GLOBALS["lang"]['Notin'] = 'Notin';

$GLOBALS["lang"]['November'] = 'Novembro Novembro Novembro Novembro';

$GLOBALS["lang"]['nvd_json'] = 'Nvd Json';

$GLOBALS["lang"]['Nvd Json'] = 'Nvd Json';

$GLOBALS["lang"]['ORDER BY'] = 'ORD';

$GLOBALS["lang"]['OS'] = 'OS';

$GLOBALS["lang"]['OS Families'] = 'OS familioj';

$GLOBALS["lang"]['OS Family'] = 'Familio';

$GLOBALS["lang"]['OS Group'] = 'Os Group';

$GLOBALS["lang"]['oae_manage'] = 'Oae Manage';

$GLOBALS["lang"]['Oae Manage'] = 'Oae Manage';

$GLOBALS["lang"]['object_ident'] = 'Objektoj Ident';

$GLOBALS["lang"]['Object Ident'] = 'Objektoj Ident';

$GLOBALS["lang"]['October'] = 'Oktobro Oktobro Oktobro Oktobro';

$GLOBALS["lang"]['Oman'] = 'Omano Omano';

$GLOBALS["lang"]['omk_uuid'] = 'Omk Uuid';

$GLOBALS["lang"]['Omk Uuid'] = 'Omk Uuid';

$GLOBALS["lang"]['On'] = 'Sur sur la';

$GLOBALS["lang"]['One of <code>3x2</code>, <code>4x2</code>, <code>4x3</code> or <code>4x4</code>.'] = 'Unu el la <code>3x2</code>, <code>4x2</code>, <code>4x3</code> aŭ aŭ <code>4x4</code>.';

$GLOBALS["lang"]['One of Campus Area Network, Cloud Network, Enterprise Private Network, Home Area Network, Local Area Network, Metropolitan Area Network, Passive Optical Local Area Network, Personal Area Network, Storage-Area Network, System-Area Network, Virtual Private Network, Wide Area Network, Wireless Local Area Network.'] = 'Unu el Campus Area Network, Cloud Network, Enterprise Private Network, Home Area Network, Local Area Network, Metropolitan Area Network, Passive Optical Local Area Network, Personal Area Network, Storage-Area Network, System-Area Network, Virtual Private Network, Wide Area Network, Local Area Network.';

$GLOBALS["lang"]['One of Development, Disaster Recovery, Evaluation, Pre-Production, Production, Testing, Training, User Acceptance Testing'] = 'Unu el Evoluo, Disaster Recovery, Evaluation, Pre-Production, Production, Testing, Training, Uzanto Acceptance Testing';

$GLOBALS["lang"]['One of allocated, delegated, planning, reserved, unallocated, unknown, unmanaged. Defaults to allocated.'] = 'Unu el asignita, delegita, planado, rezervita, neallokita, nekonata, neadminis. Defaŭloj por asigni.';

$GLOBALS["lang"]['One of either <code>active directory</code> or <code>openldap</code>.'] = 'Unu el ambaŭ <code>active directory</code> aŭ aŭ <code>openldap</code>.';

$GLOBALS["lang"]['One of: antivirus, backup, firewall, approved, banned, ignored or other.'] = 'Unu el: kontraŭvirus, sekurmuro, aprobita, malpermesita, ignoris aŭ alian.';

$GLOBALS["lang"]['Online Documentation'] = 'Reta dokumentado';

$GLOBALS["lang"]['Open-AudIT'] = 'Open-AudIT';

$GLOBALS["lang"]['Open-AudIT Community'] = 'Open-AudIT-komunumo';

$GLOBALS["lang"]['Open-AudIT Device Selection'] = 'Open-AudIT Device Selection';

$GLOBALS["lang"]['Open-AudIT Enterprise'] = 'Open-AudIT Enterprise';

$GLOBALS["lang"]['Open-AudIT Enterprise. High-scale flexible discovery and audit solution for large networks. All the features of Professional plus: Baselines, File Auditing, Cloud Discovery, Rack Management, Configurable Role Based Access Control including Active Directory and LDAP.'] = 'Open-AudIT Enterprise. Alt-skala fleksebla eltrovaĵo kaj reviziosolvo por grandaj retoj. Ĉiuj ecoj de Profesia pluso: Bazlinioj, File Auditing, Cloud Discovery, Rack Management, Configurable Role Based Access Control inkluzive de Aktiva Adresaro kaj LDAP.';

$GLOBALS["lang"]['Open-AudIT Field Name'] = 'Open-AudIT-kamponomo';

$GLOBALS["lang"]['Open-AudIT Licenses'] = 'Open-AudIT-licencoj';

$GLOBALS["lang"]['Open-AudIT Options'] = 'Open-AudIT Opcioj';

$GLOBALS["lang"]['Open-AudIT Professional'] = 'Open-AudIT Professional';

$GLOBALS["lang"]['Open-AudIT Professional. The world\\'] = 'Open-AudIT Professional. La mondo estas';

$GLOBALS["lang"]['Open-AudIT and Nmap'] = 'Open-AudIT kaj Nmap';

$GLOBALS["lang"]['OpenScap is Installed'] = 'OpenScap estas Insstalita';

$GLOBALS["lang"]['openldap_user_dn'] = 'Malferma Uzanto Dn';

$GLOBALS["lang"]['Openldap User Dn'] = 'Malferma Uzanto Dn';

$GLOBALS["lang"]['openldap_user_membership_attribute'] = 'Openldap Uzanto Membreco Atributo';

$GLOBALS["lang"]['Openldap User Membership Attribute'] = 'Openldap Uzanto Membreco Atributo';

$GLOBALS["lang"]['open|filtered'] = 'Malfermita (filtrita)';

$GLOBALS["lang"]['Open|filtered'] = 'Malfermita (filtrita)';

$GLOBALS["lang"]['Operating System'] = 'Funkciiga sistemo';

$GLOBALS["lang"]['Operating System Family Contains'] = 'Funkciiga Sistemo-familio Enhavas';

$GLOBALS["lang"]['Operating Systems'] = 'Funkciigaj Sistemoj';

$GLOBALS["lang"]['optical'] = 'Optika';

$GLOBALS["lang"]['Optical'] = 'Optika';

$GLOBALS["lang"]['Optimized'] = 'Optimigita';

$GLOBALS["lang"]['Optional version as audited by Open-AudIT. Use the percent sign % as a wildcard.'] = 'Opcia versio kiel reviziite fare de Open-AudIT. Oni uzas la realan modon (AS-finajxon).';

$GLOBALS["lang"]['options'] = 'Elektoj';

$GLOBALS["lang"]['Options'] = 'Elektoj';

$GLOBALS["lang"]['Or select from the below fields.'] = 'aŭ elekti de la subaj kampoj.';

$GLOBALS["lang"]['org_descendants'] = 'Org Descendants';

$GLOBALS["lang"]['Org Descendants'] = 'Org Descendants';

$GLOBALS["lang"]['org_id'] = 'Aŭg ID';

$GLOBALS["lang"]['Org ID'] = 'Aŭg ID';

$GLOBALS["lang"]['Organisation'] = 'Organizo por organizo';

$GLOBALS["lang"]['organisation'] = 'Organizo por organizo';

$GLOBALS["lang"]['Organisation Descendants'] = 'Organizo de Descendants';

$GLOBALS["lang"]['Organisations'] = 'Organizoj';

$GLOBALS["lang"]['orgs'] = 'Orgoj';

$GLOBALS["lang"]['Orgs'] = 'Orgoj';

$GLOBALS["lang"]['Orgs Name'] = 'Orgs nomo';

$GLOBALS["lang"]['orientation'] = 'Orientiĝo';

$GLOBALS["lang"]['Orientation'] = 'Orientiĝo';

$GLOBALS["lang"]['os'] = 'Os';

$GLOBALS["lang"]['Os'] = 'Os';

$GLOBALS["lang"]['os_arch'] = 'Os Arch';

$GLOBALS["lang"]['Os Arch'] = 'Os Arch';

$GLOBALS["lang"]['os_bit'] = 'Os Bit';

$GLOBALS["lang"]['Os Bit'] = 'Os Bit';

$GLOBALS["lang"]['os_cpe'] = 'Os Cpe';

$GLOBALS["lang"]['Os Cpe'] = 'Os Cpe';

$GLOBALS["lang"]['os_display_version'] = 'Os Display Versio';

$GLOBALS["lang"]['Os Display Version'] = 'Os Display Versio';

$GLOBALS["lang"]['os_family'] = 'Os Family';

$GLOBALS["lang"]['Os Family'] = 'Os Family';

$GLOBALS["lang"]['os_group'] = 'Os Group';

$GLOBALS["lang"]['Os Group'] = 'Os Group';

$GLOBALS["lang"]['os_installation_date'] = 'Os Installation Dateno';

$GLOBALS["lang"]['Os Installation Date'] = 'Os Installation Dateno';

$GLOBALS["lang"]['os_licence_expiry'] = 'Os Licence Expiry';

$GLOBALS["lang"]['Os Licence Expiry'] = 'Os Licence Expiry';

$GLOBALS["lang"]['os_license'] = 'Os License';

$GLOBALS["lang"]['Os License'] = 'Os License';

$GLOBALS["lang"]['os_license_code'] = 'Os License Code';

$GLOBALS["lang"]['Os License Code'] = 'Os License Code';

$GLOBALS["lang"]['os_license_mode'] = 'Os License Mode';

$GLOBALS["lang"]['Os License Mode'] = 'Os License Mode';

$GLOBALS["lang"]['os_license_type'] = 'Os License Type';

$GLOBALS["lang"]['Os License Type'] = 'Os License Type';

$GLOBALS["lang"]['os_name'] = 'Os Name';

$GLOBALS["lang"]['Os Name'] = 'Os Name';

$GLOBALS["lang"]['os_version'] = 'Versio de Os';

$GLOBALS["lang"]['Os Version'] = 'Versio de Os';

$GLOBALS["lang"]['Other'] = 'Aliaj aliaj';

$GLOBALS["lang"]['Others'] = 'Aliaj aliaj';

$GLOBALS["lang"]['Our timeout for a SSH response'] = 'Nia tempo por SSH-respondo';

$GLOBALS["lang"]['Our timeout for a WMI response'] = 'Nia tempigo por WMI-respondo';

$GLOBALS["lang"]['Our timeout for an SNMP response'] = 'Nia tempo por SNMP-respondo';

$GLOBALS["lang"]['Our timeout for an audit script response'] = 'Nia tempo por revizio manuskriptorespondo';

$GLOBALS["lang"]['output'] = 'Ekstere';

$GLOBALS["lang"]['Output'] = 'Ekstere';

$GLOBALS["lang"]['outputs'] = 'eksteruloj';

$GLOBALS["lang"]['Outputs'] = 'eksteruloj';

$GLOBALS["lang"]['Overall severity score (0–10).'] = 'Totala severeco gajnas (0-10).';

$GLOBALS["lang"]['overwrite'] = 'Aŭtoro';

$GLOBALS["lang"]['Overwrite'] = 'Aŭtoro';

$GLOBALS["lang"]['owner'] = 'Posedanto';

$GLOBALS["lang"]['Owner'] = 'Posedanto';

$GLOBALS["lang"]['PHP'] = 'PHP PHP';

$GLOBALS["lang"]['POD'] = 'POD';

$GLOBALS["lang"]['Package'] = 'Pakaĵo';

$GLOBALS["lang"]['packages'] = 'Pakaĵoj';

$GLOBALS["lang"]['Packages'] = 'Pakaĵoj';

$GLOBALS["lang"]['pagefile'] = 'Paĝo';

$GLOBALS["lang"]['Pagefile'] = 'Paĝo';

$GLOBALS["lang"]['Pakistan'] = 'Pakistano';

$GLOBALS["lang"]['Palau'] = 'Palaŭo';

$GLOBALS["lang"]['Palestinian Territory'] = 'Palestina Teritorio';

$GLOBALS["lang"]['Panama'] = 'Panamo Panamo';

$GLOBALS["lang"]['Papua New Guinea'] = 'Papuo-Nov-Gvineo';

$GLOBALS["lang"]['Paraguay'] = 'Paragvajo Paragvajo Paragvajo';

$GLOBALS["lang"]['Paranoid'] = 'Paranoid';

$GLOBALS["lang"]['Parent'] = 'Gepatro';

$GLOBALS["lang"]['parent_id'] = 'Gepatro';

$GLOBALS["lang"]['Parent ID'] = 'Gepatro';

$GLOBALS["lang"]['parent_name'] = 'Gepatronomo';

$GLOBALS["lang"]['Parent Name'] = 'Gepatronomo';

$GLOBALS["lang"]['part_number'] = 'Parto-nombro';

$GLOBALS["lang"]['Part Number'] = 'Parto-nombro';

$GLOBALS["lang"]['part_of_domain'] = 'Parto de Domain';

$GLOBALS["lang"]['Part Of Domain'] = 'Parto de Domain';

$GLOBALS["lang"]['Partition'] = 'Dispartigo';

$GLOBALS["lang"]['partition_count'] = 'Sekcio de kalkulo';

$GLOBALS["lang"]['Partition Count'] = 'Sekcio de kalkulo';

$GLOBALS["lang"]['partition_disk_index'] = 'Disk Indekso';

$GLOBALS["lang"]['Partition Disk Index'] = 'Disk Indekso';

$GLOBALS["lang"]['Pass'] = 'Enirpermesilo';

$GLOBALS["lang"]['Passed'] = 'Pasis';

$GLOBALS["lang"]['Passive Optical Local Area Network'] = 'Pasiva Optika Local Area Network';

$GLOBALS["lang"]['Password'] = 'Pasvorto';

$GLOBALS["lang"]['password'] = 'Pasvorto';

$GLOBALS["lang"]['password_changeable'] = 'Pasvorto ŝanĝiĝas';

$GLOBALS["lang"]['Password Changeable'] = 'Pasvorto ŝanĝiĝas';

$GLOBALS["lang"]['password_disabled'] = 'Pasvorto Disabled';

$GLOBALS["lang"]['Password Disabled'] = 'Pasvorto Disabled';

$GLOBALS["lang"]['password_expires'] = 'Pasvorto Expires';

$GLOBALS["lang"]['Password Expires'] = 'Pasvorto Expires';

$GLOBALS["lang"]['password_last_changed'] = 'Pasvorto Lasta Ŝanĝita';

$GLOBALS["lang"]['Password Last Changed'] = 'Pasvorto Lasta Ŝanĝita';

$GLOBALS["lang"]['password_required'] = 'Pasvorto Required';

$GLOBALS["lang"]['Password Required'] = 'Pasvorto Required';

$GLOBALS["lang"]['patch_panel'] = 'Patch Panel';

$GLOBALS["lang"]['Patch Panel'] = 'Patch Panel';

$GLOBALS["lang"]['patch_panel_port'] = 'Patch Panel Port';

$GLOBALS["lang"]['Patch Panel Port'] = 'Patch Panel Port';

$GLOBALS["lang"]['path'] = 'Vojo';

$GLOBALS["lang"]['Path'] = 'Vojo';

$GLOBALS["lang"]['Performance'] = 'Efikeco';

$GLOBALS["lang"]['Performed'] = 'Rezultis';

$GLOBALS["lang"]['permission'] = 'Permission';

$GLOBALS["lang"]['Permission'] = 'Permission';

$GLOBALS["lang"]['permissions'] = 'Permesoj';

$GLOBALS["lang"]['Permissions'] = 'Permesoj';

$GLOBALS["lang"]['Personal Area Network'] = 'Persona Areo Reto';

$GLOBALS["lang"]['Peru'] = 'Peruo';

$GLOBALS["lang"]['Philippines'] = 'Filipinoj Filipinoj Filipinoj';

$GLOBALS["lang"]['phone'] = 'Telefono';

$GLOBALS["lang"]['Phone'] = 'Telefono';

$GLOBALS["lang"]['Physical CPUs'] = 'Fizika CPUoj';

$GLOBALS["lang"]['physical_count'] = 'Fizika kalkulo';

$GLOBALS["lang"]['Physical Count'] = 'Fizika kalkulo';

$GLOBALS["lang"]['physical_depth'] = 'Fizika Depth';

$GLOBALS["lang"]['Physical Depth'] = 'Fizika Depth';

$GLOBALS["lang"]['physical_height'] = 'Fizika';

$GLOBALS["lang"]['Physical Height'] = 'Fizika';

$GLOBALS["lang"]['physical_width'] = 'Fizika Width';

$GLOBALS["lang"]['Physical Width'] = 'Fizika Width';

$GLOBALS["lang"]['picture'] = 'Bildo';

$GLOBALS["lang"]['Picture'] = 'Bildo';

$GLOBALS["lang"]['pid'] = 'Pid';

$GLOBALS["lang"]['Pid'] = 'Pid';

$GLOBALS["lang"]['Pie Chart'] = 'Pie Diagramo';

$GLOBALS["lang"]['ping'] = 'Ping';

$GLOBALS["lang"]['Ping'] = 'Ping';

$GLOBALS["lang"]['Pitcairn Islands'] = 'Pitcairn Insuloj';

$GLOBALS["lang"]['placement'] = 'Situo';

$GLOBALS["lang"]['Placement'] = 'Situo';

$GLOBALS["lang"]['Please have an Open-AudIT administrator logon and upgrade the database.'] = 'Bonvolu havi Open-AudIT administranto emblemon kaj ĝisdatigi la datumbazon.';

$GLOBALS["lang"]['Please note that the select box will override the text input box.'] = 'Bonvolu noti ke la fajna skatolo superregu la tekstan enirkeston.';

$GLOBALS["lang"]['Please set using'] = 'Bonvolu agordi uzante';

$GLOBALS["lang"]['pod'] = 'Pod Pod';

$GLOBALS["lang"]['Pod'] = 'Pod Pod';

$GLOBALS["lang"]['Poland'] = 'Pollando';

$GLOBALS["lang"]['Policies'] = 'Politikoj';

$GLOBALS["lang"]['Policies have exceptions.'] = 'Politikoj havas esceptojn.';

$GLOBALS["lang"]['policy'] = 'Politiko';

$GLOBALS["lang"]['Policy'] = 'Politiko';

$GLOBALS["lang"]['policy_id'] = 'Politiko ID';

$GLOBALS["lang"]['Policy ID'] = 'Politiko ID';

$GLOBALS["lang"]['Policy Result'] = 'Politiko de politiko';

$GLOBALS["lang"]['Policy Results'] = 'Politikaj rezultoj';

$GLOBALS["lang"]['Polite'] = 'Polite';

$GLOBALS["lang"]['Populated by audit.'] = 'Ĝi estas dividita per revizio.';

$GLOBALS["lang"]['Populated by discovery and audit.'] = 'la [[maldekstro (politiko)|maldekstran mondbildon]].';

$GLOBALS["lang"]['Populated dynamically.'] = 'Popularigita dinamika.';

$GLOBALS["lang"]['Populated from DNS.'] = 'Ĝi estas dividita de DNS.';

$GLOBALS["lang"]['Populated from SNMP discovery.'] = 'Popularigita de SNMP-eltrovaĵo.';

$GLOBALS["lang"]['Populated from device audits.'] = 'Apartigite de aparataj revizioj.';

$GLOBALS["lang"]['Populated from hostname.'] = 'La nomo de la mastro.';

$GLOBALS["lang"]['Populated from machine-id on Linux.'] = 'Ĝi estas farita de maŝin-produktita sur Linukso.';

$GLOBALS["lang"]['Populated from the IP for the default route or the IP detected in discovery.'] = 'Popularigite de la IP por la defaŭlta itinero aŭ la IP detektita en eltrovaĵo.';

$GLOBALS["lang"]['Populated from the hostname command.'] = 'Popularigite de la mastro-nomkomando.';

$GLOBALS["lang"]['Populated with additional data from the external system, in a JSON representation.'] = 'Popularigite kun kromaj datenoj de la ekstera sistemo, en JSON-reprezentado.';

$GLOBALS["lang"]['port'] = 'Haveno';

$GLOBALS["lang"]['Port'] = 'Haveno';

$GLOBALS["lang"]['port_name'] = 'Portnomo';

$GLOBALS["lang"]['Port Name'] = 'Portnomo';

$GLOBALS["lang"]['port_number'] = 'Portnombro';

$GLOBALS["lang"]['Port Number'] = 'Portnombro';

$GLOBALS["lang"]['ports_in_order'] = 'Havenoj en ordo';

$GLOBALS["lang"]['Ports In Order'] = 'Havenoj en ordo';

$GLOBALS["lang"]['ports_stop_after'] = 'Portas halti post';

$GLOBALS["lang"]['Ports Stop After'] = 'Portas halti post';

$GLOBALS["lang"]['Portugal, Portuguese Republic'] = 'Portugalio, portugala respubliko';

$GLOBALS["lang"]['position'] = 'Pozicio';

$GLOBALS["lang"]['Position'] = 'Pozicio';

$GLOBALS["lang"]['postcode'] = 'Poŝtkodo';

$GLOBALS["lang"]['Postcode'] = 'Poŝtkodo';

$GLOBALS["lang"]['power_circuit'] = 'Potenco';

$GLOBALS["lang"]['Power Circuit'] = 'Potenco';

$GLOBALS["lang"]['power_sockets'] = 'Potencoj';

$GLOBALS["lang"]['Power Sockets'] = 'Potencoj';

$GLOBALS["lang"]['Predictable'] = 'Antaŭdirebla';

$GLOBALS["lang"]['Preferences'] = 'Preferoj';

$GLOBALS["lang"]['Prerequisites'] = 'Prerequisites';

$GLOBALS["lang"]['Prerequisites and Tests'] = 'Antaŭuloj kaj testoj';

$GLOBALS["lang"]['present'] = 'Donaco';

$GLOBALS["lang"]['Present'] = 'Donaco';

$GLOBALS["lang"]['previous_value'] = 'Antaŭa valoro';

$GLOBALS["lang"]['Previous Value'] = 'Antaŭa valoro';

$GLOBALS["lang"]['primary'] = 'Ĉefa artikolo';

$GLOBALS["lang"]['Primary'] = 'Ĉefa artikolo';

$GLOBALS["lang"]['Primary Key'] = 'La ĉefa ŝlosilo';

$GLOBALS["lang"]['print_queue'] = 'Print Queue';

$GLOBALS["lang"]['Print Queue'] = 'Print Queue';

$GLOBALS["lang"]['printer_color'] = 'Printilo Koloro';

$GLOBALS["lang"]['Printer Color'] = 'Printilo Koloro';

$GLOBALS["lang"]['printer_duplex'] = 'Printilo Duplex';

$GLOBALS["lang"]['Printer Duplex'] = 'Printilo Duplex';

$GLOBALS["lang"]['printer_port_name'] = 'Printer Port Name';

$GLOBALS["lang"]['Printer Port Name'] = 'Printer Port Name';

$GLOBALS["lang"]['printer_shared'] = 'Printer Shared';

$GLOBALS["lang"]['Printer Shared'] = 'Printer Shared';

$GLOBALS["lang"]['printer_shared_name'] = 'Presita nomo';

$GLOBALS["lang"]['Printer Shared Name'] = 'Presita nomo';

$GLOBALS["lang"]['priority'] = 'Antaŭeco';

$GLOBALS["lang"]['Priority'] = 'Antaŭeco';

$GLOBALS["lang"]['Privacy Passphrase'] = 'Privateco Passphrase';

$GLOBALS["lang"]['privileges_required'] = 'Privilegioj demandis';

$GLOBALS["lang"]['Privileges Required'] = 'Privilegioj demandis';

$GLOBALS["lang"]['processor'] = 'La procesoro';

$GLOBALS["lang"]['Processor'] = 'La procesoro';

$GLOBALS["lang"]['processor_count'] = 'Procesora kalkulo';

$GLOBALS["lang"]['Processor Count'] = 'Procesora kalkulo';

$GLOBALS["lang"]['processor_slot_count'] = 'Procezaro Slot Count';

$GLOBALS["lang"]['Processor Slot Count'] = 'Procezaro Slot Count';

$GLOBALS["lang"]['processor_type'] = 'Procesorspeco';

$GLOBALS["lang"]['Processor Type'] = 'Procesorspeco';

$GLOBALS["lang"]['Processors'] = 'La procesoroj';

$GLOBALS["lang"]['product_name'] = 'Produkta nomo';

$GLOBALS["lang"]['Product Name'] = 'Produkta nomo';

$GLOBALS["lang"]['Product Name Match from CPE: '] = 'Produkta nomo Match de CPE: ';

$GLOBALS["lang"]['products'] = 'Produktoj';

$GLOBALS["lang"]['Products'] = 'Produktoj';

$GLOBALS["lang"]['profile'] = 'Profilo';

$GLOBALS["lang"]['Profile'] = 'Profilo';

$GLOBALS["lang"]['program'] = 'Programo de programoj';

$GLOBALS["lang"]['Program'] = 'Programo de programoj';

$GLOBALS["lang"]['protocol'] = 'Protokolo de Protokolo';

$GLOBALS["lang"]['Protocol'] = 'Protokolo de Protokolo';

$GLOBALS["lang"]['provider'] = 'Provizanto';

$GLOBALS["lang"]['Provider'] = 'Provizanto';

$GLOBALS["lang"]['published'] = 'Publikigita';

$GLOBALS["lang"]['Published'] = 'Publikigita';

$GLOBALS["lang"]['published_date'] = 'Publikigita dato';

$GLOBALS["lang"]['Published Date'] = 'Publikigita dato';

$GLOBALS["lang"]['publisher'] = 'Publisher';

$GLOBALS["lang"]['Publisher'] = 'Publisher';

$GLOBALS["lang"]['Puerto Rico'] = 'Porto-Riko';

$GLOBALS["lang"]['Purchase'] = 'Aĉetu aĉeton';

$GLOBALS["lang"]['purchase_amount'] = 'Aĉeti Amount';

$GLOBALS["lang"]['Purchase Amount'] = 'Aĉeti Amount';

$GLOBALS["lang"]['purchase_cost_center'] = 'Aĉeto Cost Center';

$GLOBALS["lang"]['Purchase Cost Center'] = 'Aĉeto Cost Center';

$GLOBALS["lang"]['purchase_count'] = 'Aĉetu kalkulon';

$GLOBALS["lang"]['Purchase Count'] = 'Aĉetu kalkulon';

$GLOBALS["lang"]['purchase_date'] = 'Aĉetu Daton';

$GLOBALS["lang"]['Purchase Date'] = 'Aĉetu Daton';

$GLOBALS["lang"]['purchase_invoice'] = 'Aĉeto envoĉo';

$GLOBALS["lang"]['Purchase Invoice'] = 'Aĉeto envoĉo';

$GLOBALS["lang"]['purchase_order'] = 'Aĉeti ordon';

$GLOBALS["lang"]['Purchase Order'] = 'Aĉeti ordon';

$GLOBALS["lang"]['purchase_order_number'] = 'Aĉeti Order Number';

$GLOBALS["lang"]['Purchase Order Number'] = 'Aĉeti Order Number';

$GLOBALS["lang"]['purchase_service_contract_number'] = 'Aĉeto-Servo kontrakto Nombro';

$GLOBALS["lang"]['Purchase Service Contract Number'] = 'Aĉeto-Servo kontrakto Nombro';

$GLOBALS["lang"]['purchase_vendor'] = 'Aĉeti Vendor';

$GLOBALS["lang"]['Purchase Vendor'] = 'Aĉeti Vendor';

$GLOBALS["lang"]['purpose'] = 'Cela celo';

$GLOBALS["lang"]['Purpose'] = 'Cela celo';

$GLOBALS["lang"]['Qatar'] = 'Kataro';

$GLOBALS["lang"]['queries'] = 'Query';

$GLOBALS["lang"]['Queries'] = 'Query';

$GLOBALS["lang"]['Query'] = 'Query';

$GLOBALS["lang"]['queue'] = 'Queue';

$GLOBALS["lang"]['Queue'] = 'Queue';

$GLOBALS["lang"]['Queue Limit'] = 'La jenaj paĝoj ligas';

$GLOBALS["lang"]['Queued Device Audits'] = 'Queued Device Audits';

$GLOBALS["lang"]['Queued IP Scans'] = 'Queued IP Scans';

$GLOBALS["lang"]['Queued Items'] = 'Queued Items';

$GLOBALS["lang"]['RU Start'] = 'RU Komencu';

$GLOBALS["lang"]['RX Bitrate'] = 'RX Bitrate';

$GLOBALS["lang"]['RX Freq'] = 'RX Freq';

$GLOBALS["lang"]['RX Level'] = 'RX Nivelo';

$GLOBALS["lang"]['RX Power'] = 'RX Power';

$GLOBALS["lang"]['RX Profile'] = 'RX Profilo';

$GLOBALS["lang"]['Rack'] = 'Rack';

$GLOBALS["lang"]['rack_devices'] = 'Rack Devices';

$GLOBALS["lang"]['Rack Devices'] = 'Rack Devices';

$GLOBALS["lang"]['rack_id'] = 'Rack ID';

$GLOBALS["lang"]['Rack ID'] = 'Rack ID';

$GLOBALS["lang"]['Racks'] = 'Racks';

$GLOBALS["lang"]['racks'] = 'Racks';

$GLOBALS["lang"]['radio'] = 'Radio Radio';

$GLOBALS["lang"]['Radio'] = 'Radio Radio';

$GLOBALS["lang"]['Radio MAC'] = 'Radio MAC';

$GLOBALS["lang"]['rationale'] = 'Racio';

$GLOBALS["lang"]['Rationale'] = 'Racio';

$GLOBALS["lang"]['raw'] = 'Raw Raw';

$GLOBALS["lang"]['Raw'] = 'Raw Raw';

$GLOBALS["lang"]['read'] = 'Legu';

$GLOBALS["lang"]['Read'] = 'Legu';

$GLOBALS["lang"]['Read our online documentation on the Open-AudIT Wiki.'] = 'Legu nian retan dokumentadon pri la Open-AudIT-Vikido.';

$GLOBALS["lang"]['Red Query'] = 'Ruĝa Query';

$GLOBALS["lang"]['Redirect URI'] = 'Konsilu URI';

$GLOBALS["lang"]['redirect_uri'] = 'Konsilu URI';

$GLOBALS["lang"]['Redirect Uri'] = 'Konsilu URI';

$GLOBALS["lang"]['references'] = 'Referencoj';

$GLOBALS["lang"]['References'] = 'Referencoj';

$GLOBALS["lang"]['region'] = 'Regiono Regiono';

$GLOBALS["lang"]['Region'] = 'Regiono Regiono';

$GLOBALS["lang"]['registered_user'] = 'Registrita Uzanto';

$GLOBALS["lang"]['Registered User'] = 'Registrita Uzanto';

$GLOBALS["lang"]['rel'] = 'Rel';

$GLOBALS["lang"]['Rel'] = 'Rel';

$GLOBALS["lang"]['Release'] = 'Liberigo';

$GLOBALS["lang"]['remediation'] = 'Remediation';

$GLOBALS["lang"]['Remediation'] = 'Remediation';

$GLOBALS["lang"]['Remote'] = 'Forigo';

$GLOBALS["lang"]['remote_address'] = 'Forigu la adreson';

$GLOBALS["lang"]['Remote Address'] = 'Forigu la adreson';

$GLOBALS["lang"]['remote_port'] = 'Forigu la havenon';

$GLOBALS["lang"]['Remote Port'] = 'Forigu la havenon';

$GLOBALS["lang"]['Remove'] = 'Forigo';

$GLOBALS["lang"]['Remove Exception'] = 'Forigu escepton';

$GLOBALS["lang"]['Report'] = 'Raporto';

$GLOBALS["lang"]['Report on your devices, networks and more'] = 'Raporto pri viaj aparatoj, retoj kaj pli';

$GLOBALS["lang"]['reportable'] = 'Raporto';

$GLOBALS["lang"]['Reportable'] = 'Raporto';

$GLOBALS["lang"]['Reports'] = 'Raportoj';

$GLOBALS["lang"]['request'] = 'Petu la permeson';

$GLOBALS["lang"]['Request'] = 'Petu la permeson';

$GLOBALS["lang"]['Request a Specific CVE'] = 'Petu specifajn CVE';

$GLOBALS["lang"]['requested'] = 'Petita';

$GLOBALS["lang"]['Requested'] = 'Petita';

$GLOBALS["lang"]['require_port'] = 'Mi petas la havenon';

$GLOBALS["lang"]['Require Port'] = 'Mi petas la havenon';

$GLOBALS["lang"]['Require an Open Port'] = 'Postuli malferman Havenon';

$GLOBALS["lang"]['Required'] = 'Postulo';

$GLOBALS["lang"]['Reset'] = 'Reset';

$GLOBALS["lang"]['Reset All Data'] = 'Anstataŭigi ĉiujn datumojn';

$GLOBALS["lang"]['Reset to Default'] = 'Reiri al Defaŭl';

$GLOBALS["lang"]['resource'] = 'Rimedo';

$GLOBALS["lang"]['Resource'] = 'Rimedo';

$GLOBALS["lang"]['Resource Name'] = 'Nomo de la nomo';

$GLOBALS["lang"]['Resources'] = 'Resursoj';

$GLOBALS["lang"]['response'] = 'Respondo';

$GLOBALS["lang"]['Response'] = 'Respondo';

$GLOBALS["lang"]['responsibility'] = 'Respondecrespondeco';

$GLOBALS["lang"]['Responsibility'] = 'Respondecrespondeco';

$GLOBALS["lang"]['Restore my Licenses'] = 'Retenu miajn permesilojn';

$GLOBALS["lang"]['Restrict to Private'] = 'Restrikto al privata';

$GLOBALS["lang"]['Restrict to Subnet'] = 'Restrikto al Subnet';

$GLOBALS["lang"]['result'] = 'RESult';

$GLOBALS["lang"]['Result'] = 'RESult';

$GLOBALS["lang"]['Results'] = 'Rezultoj';

$GLOBALS["lang"]['retrieved'] = 'Prenita Prenita';

$GLOBALS["lang"]['Retrieved'] = 'Prenita Prenita';

$GLOBALS["lang"]['retrieved_ident'] = 'Ident';

$GLOBALS["lang"]['Retrieved Ident'] = 'Ident';

$GLOBALS["lang"]['retrieved_name'] = 'Prenita nomo';

$GLOBALS["lang"]['Retrieved Name'] = 'Prenita nomo';

$GLOBALS["lang"]['Retrieved from the device - Windows:Win32_ComputerSystemProduct, Linux:dmidecode, MacOS:system_profiler, ESXi:vim-cmd hostsvc/hostsummary, HP-UX:machinfo, Solaris:smbios, AIX:uname.'] = 'Prenite de la aparato - Fenestroj:Win32_ComputerSystemProduct, Linukso:dmidecode, MacOS:system_profilar, ESXi:vim-cmd gastigantojvc/hostsummary, HP-UX:machinfo, Solaris:smbios, AIX:uname.';

$GLOBALS["lang"]['Reunion'] = 'Reunuiĝo';

$GLOBALS["lang"]['revision'] = 'Revizio';

$GLOBALS["lang"]['Revision'] = 'Revizio';

$GLOBALS["lang"]['risk_assesment_result'] = 'Risko Assesment Result';

$GLOBALS["lang"]['Risk Assesment Result'] = 'Risko Assesment Result';

$GLOBALS["lang"]['role'] = 'Rolo Rolo';

$GLOBALS["lang"]['Role'] = 'Rolo Rolo';

$GLOBALS["lang"]['roles'] = 'Roloj';

$GLOBALS["lang"]['Roles'] = 'Roloj';

$GLOBALS["lang"]['Romania'] = 'Rumanio';

$GLOBALS["lang"]['Room'] = 'Ĉambro';

$GLOBALS["lang"]['route'] = 'Itinero';

$GLOBALS["lang"]['Route'] = 'Itinero';

$GLOBALS["lang"]['Row'] = 'Malantaŭa';

$GLOBALS["lang"]['Row Count'] = 'Malantaŭa kalkulo';

$GLOBALS["lang"]['row_position'] = 'Pozicio';

$GLOBALS["lang"]['Row Position'] = 'Pozicio';

$GLOBALS["lang"]['Rows'] = 'La dorsoj';

$GLOBALS["lang"]['ru_height'] = 'Ru Height';

$GLOBALS["lang"]['Ru Height'] = 'Ru Height';

$GLOBALS["lang"]['ru_start'] = 'Ru komencas';

$GLOBALS["lang"]['Ru Start'] = 'Ru komencas';

$GLOBALS["lang"]['rule_group'] = 'Regulo grupo';

$GLOBALS["lang"]['Rule Group'] = 'Regulo grupo';

$GLOBALS["lang"]['rules'] = 'Reguloj';

$GLOBALS["lang"]['Rules'] = 'Reguloj';

$GLOBALS["lang"]['Run Discovery'] = 'Valora Discovery';

$GLOBALS["lang"]['Run Discovery on Devices'] = 'Run Discovery sur Devices';

$GLOBALS["lang"]['Run a discovery and find out <b>Whats On Your Network?</b>'] = 'La malkovro kaj malkovro <b>Kio estas sur via reto?</b>';

$GLOBALS["lang"]['Run this Command'] = 'Tiu komando';

$GLOBALS["lang"]['runas'] = 'Runas';

$GLOBALS["lang"]['Runas'] = 'Runas';

$GLOBALS["lang"]['Running Open-AudIT Apache Service Under Windows'] = 'Kuranta Open-AudIT Apache Service Sub Fenestroj';

$GLOBALS["lang"]['Russian Federation'] = 'Rusa Federacio';

$GLOBALS["lang"]['Rwanda'] = 'Ruando Ruando';

$GLOBALS["lang"]['rx_bitrate'] = 'Rx Bitrate';

$GLOBALS["lang"]['Rx Bitrate'] = 'Rx Bitrate';

$GLOBALS["lang"]['rx_freq'] = 'Rx Freq';

$GLOBALS["lang"]['Rx Freq'] = 'Rx Freq';

$GLOBALS["lang"]['rx_level'] = 'Rx Nivelo';

$GLOBALS["lang"]['Rx Level'] = 'Rx Nivelo';

$GLOBALS["lang"]['rx_power'] = 'Rx Power';

$GLOBALS["lang"]['Rx Power'] = 'Rx Power';

$GLOBALS["lang"]['rx_profile'] = 'Rx Profilo';

$GLOBALS["lang"]['Rx Profile'] = 'Rx Profilo';

$GLOBALS["lang"]['SELECT'] = 'SELECT';

$GLOBALS["lang"]['SID'] = 'SID';

$GLOBALS["lang"]['SM Version'] = 'Versio de SM';

$GLOBALS["lang"]['SNMP (v1 / v2)'] = 'SNMP (v1 / v2)';

$GLOBALS["lang"]['SNMP Details'] = 'SNMP Detaloj';

$GLOBALS["lang"]['SNMP OID'] = 'SNMP OID';

$GLOBALS["lang"]['SNMP Version'] = 'SNMP-versio';

$GLOBALS["lang"]['SNMP v3'] = 'SNMP v3';

$GLOBALS["lang"]['SQL'] = 'SQL';

$GLOBALS["lang"]['SQL (Advanced)'] = 'SQL (Advanced)';

$GLOBALS["lang"]['SQL Creation Statements'] = 'La jenaj artikoloj';

$GLOBALS["lang"]['SSH'] = 'SSH';

$GLOBALS["lang"]['SSH Key'] = 'SSH Ŝlosilo';

$GLOBALS["lang"]['SW Revision'] = 'SW-revizio';

$GLOBALS["lang"]['Saint Barthelemy'] = 'Saint Barthelemy';

$GLOBALS["lang"]['Saint Helena'] = 'Sankta Heleno';

$GLOBALS["lang"]['Saint Kitts and Nevis'] = 'Saint Kitts kaj Neviso';

$GLOBALS["lang"]['Saint Lucia'] = 'Sankta Lucio';

$GLOBALS["lang"]['Saint Martin'] = 'Sankta Marteno';

$GLOBALS["lang"]['Saint Pierre and Miquelon'] = 'Sankta Pierre kaj Miquelon';

$GLOBALS["lang"]['Saint Vincent and the Grenadines'] = 'Sankta Vincento kaj Grenadines';

$GLOBALS["lang"]['Samoa'] = 'Samoo';

$GLOBALS["lang"]['san'] = 'San San San';

$GLOBALS["lang"]['San'] = 'San San San';

$GLOBALS["lang"]['San Marino'] = 'San-Marino';

$GLOBALS["lang"]['Sao Tome and Principe'] = 'Sao Tome kaj Principe';

$GLOBALS["lang"]['Saturday'] = 'Sabato sabate';

$GLOBALS["lang"]['Saudi Arabia'] = 'Saud-Arabio';

$GLOBALS["lang"]['Save as Default'] = 'Eviti kiel Defaŭl';

$GLOBALS["lang"]['scaling'] = 'Scaling';

$GLOBALS["lang"]['Scaling'] = 'Scaling';

$GLOBALS["lang"]['scan_options'] = 'Skanaj Elektoj';

$GLOBALS["lang"]['Scan Options'] = 'Skanaj Elektoj';

$GLOBALS["lang"]['Scan Options ID'] = 'Skanaj Elektoj ID';

$GLOBALS["lang"]['Scan the Nmap top number of TCP ports.'] = 'Ska la Nmap pintnombro de TCP-havenoj.';

$GLOBALS["lang"]['Scan the Nmap top number of UDP ports.'] = 'Ska la Nmap pintnombro de UDP-havenoj.';

$GLOBALS["lang"]['schedule'] = 'Horaro';

$GLOBALS["lang"]['Schedule'] = 'Horaro';

$GLOBALS["lang"]['scope'] = 'Scope';

$GLOBALS["lang"]['Scope'] = 'Scope';

$GLOBALS["lang"]['script_timeout'] = 'Antaŭite fare de la tempo';

$GLOBALS["lang"]['Script Timeout'] = 'Antaŭite fare de la tempo';

$GLOBALS["lang"]['scripts'] = 'Tekstoj';

$GLOBALS["lang"]['Scripts'] = 'Tekstoj';

$GLOBALS["lang"]['scsi'] = 'Scsi';

$GLOBALS["lang"]['Scsi'] = 'Scsi';

$GLOBALS["lang"]['scsi_bus'] = 'Sviso Bus';

$GLOBALS["lang"]['Scsi Bus'] = 'Sviso Bus';

$GLOBALS["lang"]['scsi_logical_unit'] = 'Scsi Logical Unit';

$GLOBALS["lang"]['Scsi Logical Unit'] = 'Scsi Logical Unit';

$GLOBALS["lang"]['scsi_port'] = 'Scsi Haveno';

$GLOBALS["lang"]['Scsi Port'] = 'Scsi Haveno';

$GLOBALS["lang"]['Search'] = 'Serĉo';

$GLOBALS["lang"]['Search For a Device'] = 'Serĉis por';

$GLOBALS["lang"]['Search for Device'] = 'Serĉado de Device';

$GLOBALS["lang"]['Searching Using DataTables'] = 'Serĉante Uzante DataTables';

$GLOBALS["lang"]['secondary'] = 'Sekundara';

$GLOBALS["lang"]['Secondary'] = 'Sekundara';

$GLOBALS["lang"]['Secondary Text'] = 'Sekundara Teksto';

$GLOBALS["lang"]['section'] = 'Sekcio de Sekcio';

$GLOBALS["lang"]['Section'] = 'Sekcio de Sekcio';

$GLOBALS["lang"]['secure'] = 'sekura sekureco';

$GLOBALS["lang"]['Secure'] = 'sekura sekureco';

$GLOBALS["lang"]['Security Name'] = 'Sekureco Nomo';

$GLOBALS["lang"]['Security Status'] = 'Sekureco';

$GLOBALS["lang"]['security_zone'] = 'Sekureca Zono';

$GLOBALS["lang"]['Security Zone'] = 'Sekureca Zono';

$GLOBALS["lang"]['seed_ip'] = 'Ses IP';

$GLOBALS["lang"]['Seed IP'] = 'Ses IP';

$GLOBALS["lang"]['seed_ping'] = 'Ses Ping';

$GLOBALS["lang"]['Seed Ping'] = 'Ses Ping';

$GLOBALS["lang"]['seed_restrict_to_private'] = 'Seed Restrikto al Privata';

$GLOBALS["lang"]['Seed Restrict To Private'] = 'Seed Restrikto al Privata';

$GLOBALS["lang"]['seed_restrict_to_subnet'] = 'Sesita Restrikto al Subnet';

$GLOBALS["lang"]['Seed Restrict To Subnet'] = 'Sesita Restrikto al Subnet';

$GLOBALS["lang"]['Select'] = 'Elektu';

$GLOBALS["lang"]['Select All'] = 'Elektu ĉiujn';

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

$GLOBALS["lang"]['Select a Table'] = 'Elektu tablon';

$GLOBALS["lang"]['Senegal'] = 'Senegalo';

$GLOBALS["lang"]['sensitivity'] = 'Sensiveco';

$GLOBALS["lang"]['Sensitivity'] = 'Sensiveco';

$GLOBALS["lang"]['September'] = 'Septembro Septembro Septembro Septembro';

$GLOBALS["lang"]['Serbia'] = 'Serbio Serbio';

$GLOBALS["lang"]['serial'] = 'Serial';

$GLOBALS["lang"]['Serial'] = 'Serial';

$GLOBALS["lang"]['serial_imei'] = 'Serial Imei';

$GLOBALS["lang"]['Serial Imei'] = 'Serial Imei';

$GLOBALS["lang"]['serial_sim'] = 'Serial Sim';

$GLOBALS["lang"]['Serial Sim'] = 'Serial Sim';

$GLOBALS["lang"]['series'] = 'Serio de serio';

$GLOBALS["lang"]['Series'] = 'Serio de serio';

$GLOBALS["lang"]['server'] = 'Servilo';

$GLOBALS["lang"]['Server'] = 'Servilo';

$GLOBALS["lang"]['server_id'] = 'Servilo ID';

$GLOBALS["lang"]['Server ID'] = 'Servilo ID';

$GLOBALS["lang"]['Server Is'] = 'Servilo estas';

$GLOBALS["lang"]['server_item'] = 'Servilo Item';

$GLOBALS["lang"]['Server Item'] = 'Servilo Item';

$GLOBALS["lang"]['Server Status'] = 'Servilo';

$GLOBALS["lang"]['Servers'] = 'Serviloj';

$GLOBALS["lang"]['service'] = 'Servo';

$GLOBALS["lang"]['Service'] = 'Servo';

$GLOBALS["lang"]['service_identifier'] = 'Servo Identifier';

$GLOBALS["lang"]['Service Identifier'] = 'Servo Identifier';

$GLOBALS["lang"]['service_level_a'] = 'Servo-Nivelo';

$GLOBALS["lang"]['Service Level A'] = 'Servo-Nivelo';

$GLOBALS["lang"]['service_level_b'] = 'Servo Nivelo B';

$GLOBALS["lang"]['Service Level B'] = 'Servo Nivelo B';

$GLOBALS["lang"]['service_network'] = 'Servo Network';

$GLOBALS["lang"]['Service Network'] = 'Servo Network';

$GLOBALS["lang"]['service_number'] = 'Servonombro';

$GLOBALS["lang"]['Service Number'] = 'Servonombro';

$GLOBALS["lang"]['service_pack'] = 'Servo-pako';

$GLOBALS["lang"]['Service Pack'] = 'Servo-pako';

$GLOBALS["lang"]['service_plan'] = 'Servoplano';

$GLOBALS["lang"]['Service Plan'] = 'Servoplano';

$GLOBALS["lang"]['service_provider'] = 'Servo Provizanto';

$GLOBALS["lang"]['Service Provider'] = 'Servo Provizanto';

$GLOBALS["lang"]['service_tag'] = 'Servo Taga';

$GLOBALS["lang"]['Service Tag'] = 'Servo Taga';

$GLOBALS["lang"]['service_type'] = 'Servo Tipo';

$GLOBALS["lang"]['Service Type'] = 'Servo Tipo';

$GLOBALS["lang"]['service_version'] = 'Versio de la Servoj';

$GLOBALS["lang"]['Service Version'] = 'Versio de la Servoj';

$GLOBALS["lang"]['Set'] = 'Aro';

$GLOBALS["lang"]['set_by'] = 'Situo de';

$GLOBALS["lang"]['Set By'] = 'Situo de';

$GLOBALS["lang"]['Set the size (normal or compact) of the tables on the List screens.'] = 'Aro la grandeco (normala aŭ kompakta) de la tabeloj sur la List-ekranoj.';

$GLOBALS["lang"]['severity'] = 'Severeco';

$GLOBALS["lang"]['Severity'] = 'Severeco';

$GLOBALS["lang"]['severity_text'] = 'La teksto de la teksto';

$GLOBALS["lang"]['Severity Text'] = 'La teksto de la teksto';

$GLOBALS["lang"]['Severity is calculated from the <code>base_score</code> and can be one of: None, Low, Medium, High, Critical.'] = 'Severeco estas kalkulita de la <code>base_score</code> Kaj povas esti unu el: Neniu, malalta, Medium, Alta, Kritika.';

$GLOBALS["lang"]['Seychelles'] = 'Sejŝeloj';

$GLOBALS["lang"]['share'] = 'Dividi';

$GLOBALS["lang"]['Share'] = 'Dividi';

$GLOBALS["lang"]['Share Name'] = 'Suba nomo';

$GLOBALS["lang"]['shared'] = 'Ŝarĝita';

$GLOBALS["lang"]['Shared'] = 'Ŝarĝita';

$GLOBALS["lang"]['shared_name'] = 'Komuna nomo';

$GLOBALS["lang"]['Shared Name'] = 'Komuna nomo';

$GLOBALS["lang"]['shell'] = 'Shell';

$GLOBALS["lang"]['Shell'] = 'Shell';

$GLOBALS["lang"]['Ship Date'] = 'La ŝipo Dato';

$GLOBALS["lang"]['short'] = 'Mallonga mallonga';

$GLOBALS["lang"]['Short'] = 'Mallonga mallonga';

$GLOBALS["lang"]['Should I remove all non-current data from this device?'] = 'Ĉu mi devas forigi ĉiujn ne-nunajn datumojn de ĉi tiu aparato?';

$GLOBALS["lang"]['Should this file (or pattern) be used to exclude files from being reported. Normally, to audit files, this is set to <code>y</code>.'] = 'Se tiu dosiero (aŭ padrono) kutimas ekskludi dosierojn de esti raportita. Normale, por aŭdi dosierojn, tio estas atribuita al <code>y</code>.';

$GLOBALS["lang"]['Should this vendor be used when retrieving vulnerabilities from FirstWave.'] = 'Se tiu vendisto estu uzita dum prenado de vundeblecoj de FirstWave.';

$GLOBALS["lang"]['Should we add devices from the remote service, locally.'] = 'Ni aldonu aparatojn de la malproksima servo, loke.';

$GLOBALS["lang"]['Should we apply this license to the selected Org as well as the Orgs children?'] = 'Ĉu ni apliki ĉi tiun permesilon al la elektita Org same kiel la infanoj de Orgs?';

$GLOBALS["lang"]['Should we consider a filtered port to be an open port - and therefore flag this IP as having a device attached?'] = 'Ĉu ni pripensas filtritan havenon por esti malferma haveno - kaj tial flago tiu IP kiel havado de aparato fiksita?';

$GLOBALS["lang"]['Should we consider an open|filtered port to be an open port - and therefore flag this IP as having a device attached?'] = 'Ĉu ni pripensas malferman havenon por esti malferma haveno - kaj tial flago tiu IP kiel havado de aparato fiksita?';

$GLOBALS["lang"]['Should we expose this group in the web interface.'] = 'Se ni eksponis tiun grupon en la retinterfaco.';

$GLOBALS["lang"]['Should we expose this query in the list of reports under the Report menu in the web interface.'] = 'Se ni eksponis tiun atendon en la listo de raportoj sub la Report menuo en la interretinterfaco.';

$GLOBALS["lang"]['Should we expose this query in the list of reports under the Reports menu in the web interface.'] = 'Se ni eksponis tiun atendon en la listo de raportoj sub la Reports menuo en la interretinterfaco.';

$GLOBALS["lang"]['Should we install Open-Scap on the target machine.'] = 'Ni instali Open-Scap sur la celmaŝino.';

$GLOBALS["lang"]['Should we match a device based mac address even if its a known likely duplicate from VMware.'] = 'Se ni egalas aparaton bazitan makan adreson eĉ se ĝia konata verŝajna duplikato de VMware.';

$GLOBALS["lang"]['Should we match a device based on its DNS fqdn.'] = 'Se ni povas egali aparaton bazitan sur ĝia DNS fqdn.';

$GLOBALS["lang"]['Should we match a device based on its DNS hostname.'] = 'Se ni devus egali aparaton bazitan sur ĝia DNS mastro-nomo.';

$GLOBALS["lang"]['Should we match a device based on its UUID.'] = 'Se ni ŝlosu aparaton bazitan sur ĝia UUID.';

$GLOBALS["lang"]['Should we match a device based on its dbus id.'] = 'Se ni povas egali aparaton bazitan sur ĝia dbus id.';

$GLOBALS["lang"]['Should we match a device based on its fqdn.'] = 'Se ni povas egali aparaton bazitan sur ĝia fqdn.';

$GLOBALS["lang"]['Should we match a device based on its hostname and UUID.'] = 'Se ni povas egali aparaton bazitan sur ĝia mastro-nomo kaj UUID.';

$GLOBALS["lang"]['Should we match a device based on its hostname and dbus id.'] = 'Se ni egalus aparaton bazitan sur ĝia mastro-nomo kaj dbus id.';

$GLOBALS["lang"]['Should we match a device based on its hostname and serial.'] = 'Se ni devus egali aparaton bazitan sur ĝia mastro-nomo kaj seria.';

$GLOBALS["lang"]['Should we match a device based on its ip if we have an existing device with no data.'] = 'Se ni povas egali aparaton bazitan sur ĝia ip se ni havas ekzistantan aparaton kun neniuj datenoj.';

$GLOBALS["lang"]['Should we match a device based on its ip.'] = 'Se ni ŝlosu aparaton bazitan sur ĝia ip.';

$GLOBALS["lang"]['Should we match a device based on its mac address.'] = 'Se ni ŝlosu aparaton bazitan sur ĝia maka adreso.';

$GLOBALS["lang"]['Should we match a device based on its serial and type.'] = 'Se ni devus egali aparaton bazitan sur ĝia seria kaj tipo.';

$GLOBALS["lang"]['Should we match a device based on its serial number.'] = 'Se ni povas egali aparaton bazitan sur ĝia seria nombro.';

$GLOBALS["lang"]['Should we match a device based only on its SNMP sysName and serial.'] = 'Se ni povas egali aparaton bazitan nur sur ĝia SNMP-simpara kaj seria.';

$GLOBALS["lang"]['Should we match a device based only on its SNMP sysName.'] = 'Se ni povas egali aparaton bazitan nur sur ĝia SNMP-simmono.';

$GLOBALS["lang"]['Should we match a device based only on its hostname.'] = 'Se ni povas egali aparaton bazitan nur sur ĝia mastro-nomo.';

$GLOBALS["lang"]['Should we ping the IP before attempting to scan it? If it does not respond to the ping, skip this device.'] = 'Ĉu ni povus fari la IP antaŭ provi skani ĝin? Se ĝi ne respondas al la ping, transsaltu tiun aparaton.';

$GLOBALS["lang"]['Should we populate the external system from our local devices.'] = 'Se ni disdonas la eksteran sistemon de niaj lokaj aparatoj.';

$GLOBALS["lang"]['Should we run an audit and submit it (y/n).'] = 'Se ni prenus revizion kaj submetu ĝin (y/n).';

$GLOBALS["lang"]['Should we test for SNMP using UDP port 161.'] = 'Se ni testu por SNMP uzanta UDP-havenon 161.';

$GLOBALS["lang"]['Should we test for SSH using TCP port 22.'] = 'Se ni testu por SSH uzanta TCP-havenon 22.';

$GLOBALS["lang"]['Should we test for WMI using TCP port 135.'] = 'Se ni testu por WMI uzanta TCP-havenon 135.';

$GLOBALS["lang"]['Should we uninstall the agent (y/n).'] = 'Se ni malŝlosu la agenton (y/n).';

$GLOBALS["lang"]['Should we use this method to authenticate user credentials. Set to <code>y</code> or <code>n</code>.'] = 'Ni uzu tiun metodon al aŭtentikaj uzantkreditaĵoj. Agordas <code>y</code> aŭ aŭ <code>n</code>.';

$GLOBALS["lang"]['Should we use this method to populate a users roles. The field <code>use_auth</code> must be set to <code>y</code> to use this. Set to <code>y</code> or <code>n</code>.'] = 'Se ni uzu tiun metodon por popularigi uzantojn. La kampo <code>use_auth</code> devas esti metita al <code>y</code> uzi ĝin. Agordas <code>y</code> aŭ aŭ <code>n</code>.';

$GLOBALS["lang"]['Show All'] = 'Montri ĉiujn';

$GLOBALS["lang"]['sid'] = 'Sidiĝi';

$GLOBALS["lang"]['Sid'] = 'Sidiĝi';

$GLOBALS["lang"]['sidebar'] = 'flanko de flanko';

$GLOBALS["lang"]['Sidebar'] = 'flanko de flanko';

$GLOBALS["lang"]['Sierra Leone'] = 'Siera-Leono';

$GLOBALS["lang"]['Singapore'] = 'Singapuro Singapuro';

$GLOBALS["lang"]['Site A'] = 'retejo';

$GLOBALS["lang"]['Site B'] = 'Retejo B';

$GLOBALS["lang"]['site_hours_a'] = 'Horoj A';

$GLOBALS["lang"]['Site Hours A'] = 'Horoj A';

$GLOBALS["lang"]['site_hours_b'] = 'Horoj B';

$GLOBALS["lang"]['Site Hours B'] = 'Horoj B';

$GLOBALS["lang"]['size'] = 'Size';

$GLOBALS["lang"]['Size'] = 'Size';

$GLOBALS["lang"]['slaves'] = 'sklavoj';

$GLOBALS["lang"]['Slaves'] = 'sklavoj';

$GLOBALS["lang"]['Slovakia (Slovak Republic)'] = 'Slovakio ( Slovaka respubliko)';

$GLOBALS["lang"]['Slovenia'] = 'Slovenio Slovenio';

$GLOBALS["lang"]['Smart Status'] = 'Smart Status';

$GLOBALS["lang"]['smversion'] = 'Smversion';

$GLOBALS["lang"]['Smversion'] = 'Smversion';

$GLOBALS["lang"]['Sneaky'] = 'Sneaky';

$GLOBALS["lang"]['snmp_enterprise_id'] = 'Snmp Enterprise ID';

$GLOBALS["lang"]['Snmp Enterprise ID'] = 'Snmp Enterprise ID';

$GLOBALS["lang"]['snmp_enterprise_name'] = 'Snmp Enterprise Nomo';

$GLOBALS["lang"]['Snmp Enterprise Name'] = 'Snmp Enterprise Nomo';

$GLOBALS["lang"]['snmp_oid'] = 'Snmp Oid';

$GLOBALS["lang"]['Snmp Oid'] = 'Snmp Oid';

$GLOBALS["lang"]['snmp_timeout'] = 'Snmp Timeout';

$GLOBALS["lang"]['Snmp Timeout'] = 'Snmp Timeout';

$GLOBALS["lang"]['snmp_version'] = 'Snmp Version';

$GLOBALS["lang"]['Snmp Version'] = 'Snmp Version';

$GLOBALS["lang"]['socket'] = 'Socket';

$GLOBALS["lang"]['Socket'] = 'Socket';

$GLOBALS["lang"]['software'] = 'Softvaro';

$GLOBALS["lang"]['Software'] = 'Softvaro';

$GLOBALS["lang"]['Software Found Last 7 Days'] = 'Programaro trovis la 7 Tagojn';

$GLOBALS["lang"]['Software Found Today'] = 'Hodiaŭ la programaro';

$GLOBALS["lang"]['Software Found Yesterday'] = 'La programaro trovis hieraŭ';

$GLOBALS["lang"]['software_key'] = 'Softvaro';

$GLOBALS["lang"]['Software Key'] = 'Softvaro';

$GLOBALS["lang"]['software_name'] = 'Softvarnomo';

$GLOBALS["lang"]['Software Name'] = 'Softvarnomo';

$GLOBALS["lang"]['Software Policies'] = 'Softvaro Policies';

$GLOBALS["lang"]['software_revision'] = 'Softvaro-Revizio';

$GLOBALS["lang"]['Software Revision'] = 'Softvaro-Revizio';

$GLOBALS["lang"]['software_version'] = 'Softvaro';

$GLOBALS["lang"]['Software Version'] = 'Softvaro';

$GLOBALS["lang"]['Solaris'] = 'Solaris';

$GLOBALS["lang"]['Solomon Islands'] = 'Salomonoj';

$GLOBALS["lang"]['Somalia, Somali Republic'] = 'Somalio, somala respubliko';

$GLOBALS["lang"]['sound'] = 'Sona Sono';

$GLOBALS["lang"]['Sound'] = 'Sona Sono';

$GLOBALS["lang"]['source'] = 'Fonto de la Fonto';

$GLOBALS["lang"]['Source'] = 'Fonto de la Fonto';

$GLOBALS["lang"]['South Africa'] = 'Sud-Afriko';

$GLOBALS["lang"]['South Georgia and the South Sandwich Islands'] = 'Suda Kartvelio kaj la Suda Sandviĉinsuloj';

$GLOBALS["lang"]['Spain'] = 'Hispanio Hispanio';

$GLOBALS["lang"]['Spanish'] = 'Hispana hispano';

$GLOBALS["lang"]['Specific to Azure.'] = 'Specifo al Azure.';

$GLOBALS["lang"]['Specific to OKTA.'] = 'Specifo al OKTA.';

$GLOBALS["lang"]['Specifies a comma-separated list of targets (no spaces) to be excluded from the scan. The list you pass in uses normal Nmap syntax, so it can include hostnames, CIDR netblocks, octet ranges, etc.'] = 'Specifa komma-separita listo de celoj (neniuj spacoj) esti ekskludita de la skanado. La listo vi pasas en uzo normala Nmap-sintakso, tiel ke ĝi povas inkludi mastronomojn, CIDR-retblokojn, oktetintervalojn, ktp.';

$GLOBALS["lang"]['speed'] = 'Rapida Rapideco';

$GLOBALS["lang"]['Speed'] = 'Rapida Rapideco';

$GLOBALS["lang"]['speed_down_a'] = 'Rapida Malsupre A. A. A';

$GLOBALS["lang"]['Speed Down A'] = 'Rapida Malsupre A. A. A';

$GLOBALS["lang"]['speed_down_b'] = 'Rapideco Malsupre B';

$GLOBALS["lang"]['Speed Down B'] = 'Rapideco Malsupre B';

$GLOBALS["lang"]['speed_up_a'] = 'Rapidu supren laŭ la';

$GLOBALS["lang"]['Speed Up A'] = 'Rapidu supren laŭ la';

$GLOBALS["lang"]['speed_up_b'] = 'Rapideco sur B';

$GLOBALS["lang"]['Speed Up B'] = 'Rapideco sur B';

$GLOBALS["lang"]['sql'] = 'Sql';

$GLOBALS["lang"]['Sql'] = 'Sql';

$GLOBALS["lang"]['Sri Lanka'] = 'Srilanko';

$GLOBALS["lang"]['ssh_ports'] = 'Ssh Ports';

$GLOBALS["lang"]['Ssh Ports'] = 'Ssh Ports';

$GLOBALS["lang"]['ssh_timeout'] = 'Ssh Timeout';

$GLOBALS["lang"]['Ssh Timeout'] = 'Ssh Timeout';

$GLOBALS["lang"]['Stand-Alone'] = 'Stando-Alone';

$GLOBALS["lang"]['Standard'] = 'Normo';

$GLOBALS["lang"]['standard_id'] = 'Normo ID';

$GLOBALS["lang"]['Standard ID'] = 'Normo ID';

$GLOBALS["lang"]['standards'] = 'Normoj';

$GLOBALS["lang"]['Standards'] = 'Normoj';

$GLOBALS["lang"]['standards_policies'] = 'Normoj Politikoj';

$GLOBALS["lang"]['Standards Policies'] = 'Normoj Politikoj';

$GLOBALS["lang"]['standards_results'] = 'Normoj';

$GLOBALS["lang"]['Standards Results'] = 'Normoj';

$GLOBALS["lang"]['start_date'] = 'Komencu Daton';

$GLOBALS["lang"]['Start Date'] = 'Komencu Daton';

$GLOBALS["lang"]['start_mode'] = 'Komencu Mode';

$GLOBALS["lang"]['Start Mode'] = 'Komencu Mode';

$GLOBALS["lang"]['started_date'] = 'Komenca dato';

$GLOBALS["lang"]['Started Date'] = 'Komenca dato';

$GLOBALS["lang"]['state'] = 'Ŝtato Ŝtato';

$GLOBALS["lang"]['State'] = 'Ŝtato Ŝtato';

$GLOBALS["lang"]['Stats'] = 'Statoj';

$GLOBALS["lang"]['status'] = 'Statuso';

$GLOBALS["lang"]['Status'] = 'Statuso';

$GLOBALS["lang"]['Storage'] = 'Storage';

$GLOBALS["lang"]['storage_count'] = 'Storage Count';

$GLOBALS["lang"]['Storage Count'] = 'Storage Count';

$GLOBALS["lang"]['Storage-Area Network'] = 'Storage-Area Reto';

$GLOBALS["lang"]['string'] = 'Kordo';

$GLOBALS["lang"]['String'] = 'Kordo';

$GLOBALS["lang"]['sub_resource_id'] = 'Suba Rimedo ID';

$GLOBALS["lang"]['Sub Resource ID'] = 'Suba Rimedo ID';

$GLOBALS["lang"]['sub_type'] = 'Sub Tipo';

$GLOBALS["lang"]['Sub Type'] = 'Sub Tipo';

$GLOBALS["lang"]['subject_key_ident'] = 'Suba Ŝlosilo Ident';

$GLOBALS["lang"]['Subject Key Ident'] = 'Suba Ŝlosilo Ident';

$GLOBALS["lang"]['Submit'] = 'Submit';

$GLOBALS["lang"]['Submitted From'] = 'Submetite de';

$GLOBALS["lang"]['subnet'] = 'Subnet';

$GLOBALS["lang"]['Subnet'] = 'Subnet';

$GLOBALS["lang"]['Subscription ID'] = 'Subskribo ID';

$GLOBALS["lang"]['suburb'] = 'Suburb';

$GLOBALS["lang"]['Suburb'] = 'Suburb';

$GLOBALS["lang"]['Success'] = 'Sukceso';

$GLOBALS["lang"]['Sudan'] = 'Sudano Sudano';

$GLOBALS["lang"]['Sudo Password'] = 'Sudo Password';

$GLOBALS["lang"]['Sudo Password (optional)'] = 'Sudo Password (optional)';

$GLOBALS["lang"]['suite'] = 'Serioj';

$GLOBALS["lang"]['Suite'] = 'Serioj';

$GLOBALS["lang"]['summaries'] = 'Resumoj';

$GLOBALS["lang"]['Summaries'] = 'Resumoj';

$GLOBALS["lang"]['Summary'] = 'Resumo';

$GLOBALS["lang"]['Sunday'] = 'Dimanĉo';

$GLOBALS["lang"]['supplier'] = 'Provizanto';

$GLOBALS["lang"]['Supplier'] = 'Provizanto';

$GLOBALS["lang"]['Support'] = 'Subteno';

$GLOBALS["lang"]['Supported types are <code>subnet</code>, <code>seed</code> and <code>active directory</code>.'] = 'Subtenataj tipoj estas <code>subnet</code>, <code>seed</code> kaj <code>active directory</code>.';

$GLOBALS["lang"]['Suriname'] = 'Surinamo';

$GLOBALS["lang"]['Svalbard & Jan Mayen Islands'] = 'Svalbardo & Jan Mayen Insuloj';

$GLOBALS["lang"]['Swaziland'] = 'Svazilando';

$GLOBALS["lang"]['Sweden'] = 'Svedio Svedio';

$GLOBALS["lang"]['switch_device_id'] = 'Ŝanĝu la identigilon';

$GLOBALS["lang"]['Switch Device ID'] = 'Ŝanĝu la identigilon';

$GLOBALS["lang"]['switch_port'] = 'Ŝanĝita Haveno';

$GLOBALS["lang"]['Switch Port'] = 'Ŝanĝita Haveno';

$GLOBALS["lang"]['Switzerland, Swiss Confederation'] = 'Svislando, Svisa Konfederacio';

$GLOBALS["lang"]['Syrian Arab Republic'] = 'Siria Araba Respubliko';

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

$GLOBALS["lang"]['sysUpTime'] = 'Sys UpTime';

$GLOBALS["lang"]['SysUpTime'] = 'Sys UpTime';

$GLOBALS["lang"]['system_component'] = 'Sistemo Komponento';

$GLOBALS["lang"]['System Component'] = 'Sistemo Komponento';

$GLOBALS["lang"]['System-Area Network'] = 'Sistemo-Area Reto';

$GLOBALS["lang"]['TX Bitrate'] = 'TX Bitrate';

$GLOBALS["lang"]['TX Freq'] = 'TX Freq';

$GLOBALS["lang"]['TX Level'] = 'TX-nivelo';

$GLOBALS["lang"]['TX Power'] = 'TX-potenco';

$GLOBALS["lang"]['TX Profile'] = 'TX Profilo';

$GLOBALS["lang"]['table'] = 'Table Table Table Table';

$GLOBALS["lang"]['Table'] = 'Table Table Table Table';

$GLOBALS["lang"]['tag'] = 'Tagaĵo';

$GLOBALS["lang"]['Tag'] = 'Tagaĵo';

$GLOBALS["lang"]['tag_1'] = '1 Tag 1';

$GLOBALS["lang"]['Tag 1'] = '1 Tag 1';

$GLOBALS["lang"]['tag_2'] = '2';

$GLOBALS["lang"]['Tag 2'] = '2';

$GLOBALS["lang"]['tag_3'] = '3 Tag 3';

$GLOBALS["lang"]['Tag 3'] = '3 Tag 3';

$GLOBALS["lang"]['tags'] = 'Tagaĵoj';

$GLOBALS["lang"]['Tags'] = 'Tagaĵoj';

$GLOBALS["lang"]['Tags :: '] = 'La jenaj paĝoj ligas al: ';

$GLOBALS["lang"]['Taiwan'] = 'Tajvano Tajvano';

$GLOBALS["lang"]['Tajikistan'] = 'Taĝikio';

$GLOBALS["lang"]['Tanzania'] = 'Tanzanio Tanzanio';

$GLOBALS["lang"]['task'] = 'Tasko';

$GLOBALS["lang"]['Task'] = 'Tasko';

$GLOBALS["lang"]['tasks'] = 'Taskoj';

$GLOBALS["lang"]['Tasks'] = 'Taskoj';

$GLOBALS["lang"]['tcp_ports'] = 'Tcp Ports';

$GLOBALS["lang"]['Tcp Ports'] = 'Tcp Ports';

$GLOBALS["lang"]['tenant'] = '10';

$GLOBALS["lang"]['Tenant'] = '10';

$GLOBALS["lang"]['ternary'] = 'Ternaro';

$GLOBALS["lang"]['Ternary'] = 'Ternaro';

$GLOBALS["lang"]['Test 1'] = '1 Testo 1';

$GLOBALS["lang"]['Test 2'] = '2 Testo 2';

$GLOBALS["lang"]['Test 3'] = '3 Testo 3';

$GLOBALS["lang"]['test_minutes'] = 'Testaj protokoloj';

$GLOBALS["lang"]['Test Minutes'] = 'Testaj protokoloj';

$GLOBALS["lang"]['test_os'] = 'Testo Os';

$GLOBALS["lang"]['Test Os'] = 'Testo Os';

$GLOBALS["lang"]['test_subnet'] = 'Testo Subnet';

$GLOBALS["lang"]['Test Subnet'] = 'Testo Subnet';

$GLOBALS["lang"]['tests'] = 'Testoj';

$GLOBALS["lang"]['Tests'] = 'Testoj';

$GLOBALS["lang"]['Text'] = 'Teksto teksto';

$GLOBALS["lang"]['Thailand'] = 'Tajlando Tajlando';

$GLOBALS["lang"]['The Active Directory domain to retrieve a list of subnets from.'] = 'La Aktiva Adresardomajno por preni liston de subretoj de.';

$GLOBALS["lang"]['The Active Directory server to retrieve a list of subnets from.'] = 'La Aktiva Adresaro-servilo por preni liston de subretoj de.';

$GLOBALS["lang"]['The Automatable metric captures the answer to the question <strong>Can an attacker automate exploitation events for this vulnerability across multiple targets?</strong> based on steps 1-4 of the kill chain. These steps are reconnaissance, weaponization, delivery, and exploitation (Not Defined, No, Yes).'] = 'La Aŭtomatebla metriko kaptas la respondon al la demando <strong>Ĉu atakanto aŭtomatigas ekspluatokazaĵojn por tiu vundebleco trans multoblaj celoj?</strong> surbaze de ŝtupoj 1-4 el la mortigĉeno. Tiuj ŝtupoj estas sciigo, armiligo, liveraĵo, kaj ekspluato (Ne Difined, No, Yes).';

$GLOBALS["lang"]['The CVE identifier.'] = 'La CVE-identigilo.';

$GLOBALS["lang"]['The Cloud that owns this item. Links to <code>clouds.id</code>.'] = 'La nubo kiu posedas tiun objekton. Ligiloj al <code>clouds.id</code>.';

$GLOBALS["lang"]['The Group used to run the Baseline. Links to <code>groups.id</code>.'] = 'La grupo kutimis prizorgi la Bazlinion. Ligiloj al <code>groups.id</code>.';

$GLOBALS["lang"]['The ID from the devices table (the devices.name will be displayed) of the NTU at this end of the connection. Links to <code>devices.id</code>.'] = 'La ID de la aparatoj tablo (la aparatoj. nomo estos elmontrita) de la NTU ĉe tiu fino de la ligo. Ligiloj al <code>devices.id</code>.';

$GLOBALS["lang"]['The ID from the imported benchmark policy.'] = 'La ID de la importita komparnormo politiko.';

$GLOBALS["lang"]['The ID from the locations table (the locations.name will be displayed) of this end of the connection. Links to <code>locations.id</code>. The A location is usually the <code>FROM</code> location.'] = 'La ID de la lokoj tablo (la lokoj. nomo estos elmontrita) de tiu fino de la ligo. Ligiloj al <code>locations.id</code>. La loko estas kutime la <code>FROM</code> loko.';

$GLOBALS["lang"]['The ID from the locations table (the locations.name will be displayed) of this end of the connection. Links to <code>locations.id</code>. The B location is usually the <code>TO</code> location.'] = 'La ID de la lokoj tablo (la lokoj. nomo estos elmontrita) de tiu fino de la ligo. Ligiloj al <code>locations.id</code>. La B-loko estas kutime la <code>TO</code> loko.';

$GLOBALS["lang"]['The ID of the associated device (if any). Links to <code>devices.id</code>.'] = 'La ID de la rilata aparato (se entute). Ligiloj al <code>devices.id</code>.';

$GLOBALS["lang"]['The ID of the associated discovery. Linked to <code>discoveries.id</code>'] = 'La ID de la rilata malkovro. Aliĝi al <code>discoveries.id</code>';

$GLOBALS["lang"]['The ID of the item of the associated type.'] = 'La ID de la objekto de la rilata tipo.';

$GLOBALS["lang"]['The ID of this orgs parent org. Linked to <code>orgs.id</code>'] = 'La ID de tiu orggepatro org. Aliĝi al <code>orgs.id</code>';

$GLOBALS["lang"]['The ID provided by the provider.'] = 'La ID disponigita fare de la provizanto.';

$GLOBALS["lang"]['The ID retrieved from a Cloud discovery.'] = 'La ID prenita de Nubo-trovaĵo.';

$GLOBALS["lang"]['The IP address of this collector used to communicate with the server.'] = 'La IP-adreso de tiu kolektanto kutimis komuniki kun la servilo.';

$GLOBALS["lang"]['The IP of the device to start a seed discovery with.'] = 'La IP de la aparato por komenci semotrovaĵon kun.';

$GLOBALS["lang"]['The IP of the external interface.'] = 'La IP de la ekstera interfaco.';

$GLOBALS["lang"]['The IP of the internal interface.'] = 'La IP de la interna interfaco.';

$GLOBALS["lang"]['The ISP or Telco providing this link.'] = 'La ISP aŭ Telco disponiganta tiun ligon.';

$GLOBALS["lang"]['The JSON record from Mitre.'] = 'La JSON rekordo de Mitro.';

$GLOBALS["lang"]['The JSON record from the NVD feed.'] = 'La JSON rekordo de la NVD-sendo.';

$GLOBALS["lang"]['The LDAP OU of this user (if LDAP is used).'] = 'La LDAP OU de tiu uzanto (se LDAP estas uzita).';

$GLOBALS["lang"]['The Location that contains this network. Links to <code>locations.id</code>.'] = 'Situo kiu enhavas tiun reton. Ligiloj al <code>locations.id</code>.';

$GLOBALS["lang"]['The NVD assigned base status.'] = 'La NVD asignis bazstatuson.';

$GLOBALS["lang"]['The Nmap timing preset.'] = 'La Nmap tempigas preset.';

$GLOBALS["lang"]['The OS this package should be reported against. Blank for all. Use the percent sign % as a wildcard. Will be tested against os_group, os_family and os_name in that order.'] = 'La OS tiu pakaĵo devus esti raportita kontraŭ. por ĉiuj. Oni uzas la realan modon (AS-finajxon). estos testita kontraŭ os_group, os_familio kaj ostnomo en tiu sinsekvo.';

$GLOBALS["lang"]['The Open-AudIT API'] = 'La Open-AudIT API';

$GLOBALS["lang"]['The Open-AudIT id of the linked cloud. Links to <code>clouds.id</code>.'] = 'La Open-AudIT-identigaĵo de la ligita nubo. Ligiloj al <code>clouds.id</code>.';

$GLOBALS["lang"]['The Open-AudIT server code was exeucted within this file.'] = 'La Malferma-Aud Ĉi tiu servilo kodo estis forigita ene de tiu dosiero.';

$GLOBALS["lang"]['The Open-AudIT server code was exeucted within this function.'] = 'La Malferma-Aud Ĉi tiu servilo kodo estis forigita ene de tiu funkcio.';

$GLOBALS["lang"]['The Organisation that owns this item. Links to <code>orgs.id</code>.'] = 'La organizo kiu posedas tiun objekton. Ligiloj al <code>orgs.id</code>.';

$GLOBALS["lang"]['The Process Identifier of the running associated discovery.'] = 'La Procezo Identifier de la kuranta rilata eltrovaĵo.';

$GLOBALS["lang"]['The RU positon of the top of this device.'] = 'La RU-pozito de la pinto de tiu aparato.';

$GLOBALS["lang"]['The SNMP community string.'] = 'La SNMP komunumkordo.';

$GLOBALS["lang"]['The SNMP v3 Authentication Passphrase.'] = 'La SNMP v3 Authentication Passphrase.';

$GLOBALS["lang"]['The SNMP v3 Authentication Protocol.'] = 'La SNMP v3 Authentication Protocol.';

$GLOBALS["lang"]['The SNMP v3 Privacy Passphrase.'] = 'La SNMP v3 Private Passphrase.';

$GLOBALS["lang"]['The SNMP v3 Privacy Protocol.'] = 'La SNMP v3 Private Protocol.';

$GLOBALS["lang"]['The SNMP v3 Security Level.'] = 'La SNMP v3 Security Level.';

$GLOBALS["lang"]['The SNMP v3 Security Name.'] = 'La SNMP v3 Security Name.';

$GLOBALS["lang"]['The SNMPv3 context Engine ID (optional).'] = 'La SNMPv3 kunteksto Motor ID (optional).';

$GLOBALS["lang"]['The SNMPv3 context Name (optional).'] = 'La SNMPv3 kuntekstonomo (optional).';

$GLOBALS["lang"]['The URL of the external system.'] = 'URL de la ekstera sistemo.';

$GLOBALS["lang"]['The URL of your Open-AudIT Server that this Collector will report to (no trailing slash).'] = 'URL de via Open-AudIT Servilo kiun tiu kolektanto raportos al (neniu malantaŭtranĉo).';

$GLOBALS["lang"]['The URL the audit scripts should submit their result to.'] = 'La URL-manuskriptoj devus submeti sian rezulton.';

$GLOBALS["lang"]['The actual full name of this user.'] = 'La vera plena nomo de ĉi tiu uzanto.';

$GLOBALS["lang"]['The associated baseline. Links to <code>baselines.id</code>.'] = 'La rilata bazlinio. Ligiloj al <code>baselines.id</code>.';

$GLOBALS["lang"]['The associated discovery (if required). Links to <code>discoveries.id</code>.'] = 'La rilata malkovro (se necese). Ligiloj al <code>discoveries.id</code>.';

$GLOBALS["lang"]['The attribute to test (from the <code>devices</code> table).'] = 'La atributo al testo (de la <code>devices</code> tablo).';

$GLOBALS["lang"]['The attribute to test (must match an external field name from below).'] = 'La atributo al testo (devas egali eksteran kampan nomon de malsupre).';

$GLOBALS["lang"]['The audit script upon which to base your customisations.'] = 'La revizio manuskripto sur kiu bazigi viajn specialiĝojn.';

$GLOBALS["lang"]['The base path from which to search for Users.'] = 'La bazo vojo de kiu serĉi uzantojn.';

$GLOBALS["lang"]['The benchmark type.'] = 'La komparnormo tipo.';

$GLOBALS["lang"]['The building the rack is located in.'] = 'La konstruaĵo kiun la rako situas en.';

$GLOBALS["lang"]['The calculated number of devices to be created externally.'] = 'La kalkulita nombro da aparatoj por esti kreita ekstere.';

$GLOBALS["lang"]['The calculated number of devices to be created in Open-AudIT.'] = 'La kalkulita nombro da aparatoj por esti kreita en Open-AudIT.';

$GLOBALS["lang"]['The collectors internal IP used when it runs a discovery.'] = 'La kolektantoj interna IP uzis kiam ĝi prizorgas eltrovaĵon.';

$GLOBALS["lang"]['The column name from the foreign table. Should be one of: class, environment, status, type or menu_category.'] = 'La kolonnomo de la fremda tablo. Devus esti unu el: klaso, medio, statuso, tipo aŭ menu_category.';

$GLOBALS["lang"]['The command executed upon the target device or Open-AudIT server code executed during discovery.'] = 'La komando efektivigis sur la celaparato aŭ Open-AudIT-servilkodo efektivigita dum eltrovaĵo.';

$GLOBALS["lang"]['The configuration of your cluster can be: <code>active/active</code>, <code>active/passive</code>, <code>N+1</code>, <code>N+M</code>, <code>N-to-1</code>, <code>N-to-N</code>, <code>other</code> or blank.'] = 'La agordo de via areto povas esti: <code>active/active</code>, <code>active/passive</code>, <code>N+1</code>, <code>N+M</code>, <code>N-to-1</code>, <code>N-to-N</code>, <code>other</code> aŭ malplena.';

$GLOBALS["lang"]['The credentials password. If the credentials are an SSH Key, this is the password used to unlock the key and is optional.'] = 'La akreditaĵoj pasvorton. Se la akreditaĵoj estas SSH Ŝlosilo, tio estas la pasvorton uzita por malŝlosi la ŝlosilon kaj estas laŭvola.';

$GLOBALS["lang"]['The credentials username.'] = 'La akreditaĵoj uzantnomo.';

$GLOBALS["lang"]['The current status of the Cloud Discovery.'] = 'La nuna statuso de la Nubo Discovery.';

$GLOBALS["lang"]['The current status of the discovery.'] = 'La nuna statuso de la malkovro.';

$GLOBALS["lang"]['The dashboard that will be shown by default for this user. Links to <code>dashboards.id</code>.'] = 'La dashboard kiu estos montrita defaŭlte por tiu uzanto. Ligiloj al <code>dashboards.id</code>.';

$GLOBALS["lang"]['The database version and web version are inconsistent.'] = 'La datumbazo versio kaj retversio estas malkonsekvencaj.';

$GLOBALS["lang"]['The date of license expiration.'] = 'La dato de permesilo eksvalidiĝas.';

$GLOBALS["lang"]['The date the software is discontinued by the manufacturer. Usually replaced by a newer version. Maintenance may still be available.'] = 'La dato la programaro estas nuligita de la fabrikanto. Kutime anstataŭigite per pli nova versio. Prizorgo povas esti disponebla.';

$GLOBALS["lang"]['The date the software no longer receives updates and is effectively discontinued altogether. Maintenance is discontinued.'] = 'La dato la programaro jam ne ricevas ĝisdatigojn kaj estas efike nuligita entute. Prizorgo estas nuligita.';

$GLOBALS["lang"]['The date this item was changed or added (read only). NOTE - This is the timestamp from the server.'] = 'La dato tiu objekto estis ŝanĝita aŭ aldonita (legita nur). Tio estas la tempostampo de la servilo.';

$GLOBALS["lang"]['The date/time when this result was created.'] = 'La dato/tempo kiam tiu rezulto estis kreita.';

$GLOBALS["lang"]['The day of the month when this task should execute (* for every day).'] = 'La tago de la monato kiam tiu tasko devus efektivigi (* por ĉiu tago).';

$GLOBALS["lang"]['The day of the week when this task should execute (* for every day).'] = 'La tago de la semajno kiam tiu tasko devus efektivigi (* por ĉiu tago).';

$GLOBALS["lang"]['The default language assigned to any user created by this method.'] = 'La defaŭlta lingvo asignita al iu uzanto kreita per tiu metodo.';

$GLOBALS["lang"]['The device must respond to an Nmap ping before it is considered online.'] = 'La aparato devas respondi al Nmap ping antaŭ ol ĝi estas konsiderita rete.';

$GLOBALS["lang"]['The device within Open-AudIT. Links to <code>devices.id</code>.'] = 'La aparato ene de Open-AudIT. Ligiloj al <code>devices.id</code>.';

$GLOBALS["lang"]['The direct link for the script is'] = 'La rekta ligo por la manuskripto estas';

$GLOBALS["lang"]['The email address of the reciever'] = 'La retpoŝta adreso de la reciever';

$GLOBALS["lang"]['The enterprise binary from FirstWave is required for a license. Please download Open-AudIT from'] = 'La entrepreno binara de FirstWave estas postulata por licenco. Bonvolu elŝuti Open-AudIT de';

$GLOBALS["lang"]['The entire associated baseline this result is from.'] = 'La tuta rilata bazlinio tiu rezulto estas de.';

$GLOBALS["lang"]['The externally referenced location ID. Usually populated by Cloud audits.'] = 'La ekstere referenceita loko ID. Kutime loĝita fare de Nubo-revizioj.';

$GLOBALS["lang"]['The first time that Open-AudIT retrieved details of this device.'] = 'La unua fojo ke Open-AudIT prenis detalojn de tiu aparato.';

$GLOBALS["lang"]['The floor the rack is located on.'] = 'La planko situas sur.';

$GLOBALS["lang"]['The foreign table to reference. Should be one of: devices, locations, orgs or queries.'] = 'La fremda tablo al referenco. Estu unu el: aparatoj, lokoj, orkoj aŭ demandoj.';

$GLOBALS["lang"]['The format used for the output to be emailed.'] = 'La formato uzita por la produktaĵo por esti retpoŝtigita.';

$GLOBALS["lang"]['The fully qualified column upon which to group by. NOTE: When type = traffic, this represents the red query id.'] = 'La tute kvalifikita kolono sur kiu al grupo. Se tipo = trafiko, tio reprezentas la ruĝan query id.';

$GLOBALS["lang"]['The fully qualified table.column. Multiple may be provided, separated by a comma (no spaces).'] = 'La tute kvalifikita tablo.column. Multoblaj povas esti disponigitaj, apartigitaj per komo (neniuj spacoj).';

$GLOBALS["lang"]['The generated SQL query to test for this vulnerability. This field can be edited to correct the query as required.'] = 'La generita SQL-demando por testi pri tiu vundebleco. Tiu kampo povas esti redaktita por korekti la atendon kiel postulate.';

$GLOBALS["lang"]['The group of devices on which the baseline was run against.'] = 'La grupo de aparatoj sur kiuj la bazlinio estis prizorgita kontraŭ.';

$GLOBALS["lang"]['The group that provides a list of devices for the integration. Links to <code>groups.id</code>.'] = 'La grupo kiu disponigas liston de aparatoj por la integriĝo. Ligiloj al <code>groups.id</code>.';

$GLOBALS["lang"]['The hour of the day when this task should execute (* for every hour).'] = 'La horo de la tago kiam tiu tasko devas efektivigi (* por ĉiu horo).';

$GLOBALS["lang"]['The id of the linked device. Links to <code>devices.id</code>'] = 'La idaĵo de la ligita aparato. Ligiloj al <code>devices.id</code>';

$GLOBALS["lang"]['The identifier column (integer) in the database (read only).'] = 'La identigilo (integer) en la datumbazo (legita nur).';

$GLOBALS["lang"]['The importance of this baseline (not used yet).'] = 'La graveco de tiu bazlinio (ne uzis ankoraŭ).';

$GLOBALS["lang"]['The integer of severity.'] = 'La entjero de severeco.';

$GLOBALS["lang"]['The ip address of the Auth method.'] = 'La ip-adreso de la Auth-metodo.';

$GLOBALS["lang"]['The language to translate the web interface into for the user.'] = 'La lingvo traduki la retinterfacon en la uzanto.';

$GLOBALS["lang"]['The last date and time this item was executed (read only).'] = 'La lasta dato kaj tempo tiu objekto estis efektivigita (legita nur).';

$GLOBALS["lang"]['The last time that Open-AudIT retrieved details of this device.'] = 'La lastan fojon kiu Open-AudIT prenis detalojn de tiu aparato.';

$GLOBALS["lang"]['The last time this benchmarks was executed.'] = 'La lastan fojon tiu komparnormo estis ekzekutita.';

$GLOBALS["lang"]['The last time this integration was run.'] = 'La lastan fojon tiu integriĝo estis prizorgita.';

$GLOBALS["lang"]['The line number assigned by the provider to the line at this end of the connection.'] = 'La linionombro asignita fare de la provizanto al la linio ĉe tiu fino de la ligo.';

$GLOBALS["lang"]['The location the rack is located in. Links to <code>locations.id</code>.'] = 'La loko kiun la rako situas en. Ligiloj al <code>locations.id</code>.';

$GLOBALS["lang"]['The locations address.'] = 'La lokoj traktas.';

$GLOBALS["lang"]['The locations area.'] = 'Situo de lokoj.';

$GLOBALS["lang"]['The locations city.'] = 'La urbo de la lokoj.';

$GLOBALS["lang"]['The locations country.'] = 'La lando.';

$GLOBALS["lang"]['The locations district.'] = 'La loka distrikto.';

$GLOBALS["lang"]['The locations latitude.'] = 'La latitudo de la lokoj.';

$GLOBALS["lang"]['The locations level.'] = 'La loka nivelo.';

$GLOBALS["lang"]['The locations longitude.'] = 'La lokoj longitudo.';

$GLOBALS["lang"]['The locations phone.'] = 'La lokoj telefono.';

$GLOBALS["lang"]['The locations postcode.'] = 'La jenaj paĝoj ligas.';

$GLOBALS["lang"]['The locations region.'] = 'La regiono de la lokoj.';

$GLOBALS["lang"]['The locations room.'] = 'La ĉambro de la lokoj.';

$GLOBALS["lang"]['The locations state.'] = 'La lokoj deklaras.';

$GLOBALS["lang"]['The locations suburb.'] = 'La insulo antaŭurbo.';

$GLOBALS["lang"]['The locations suite.'] = 'La serio de lokoj.';

$GLOBALS["lang"]['The maximum physical weight (in KGs) this rack can hold.'] = 'La maksimuma fizika pezo (en KGs) tiu rako povas teni.';

$GLOBALS["lang"]['The maximum total BTUs this rack is rated for.'] = 'La maksimuma totala BTUs tiu rako estas taksita por.';

$GLOBALS["lang"]['The minute of the hour when this task should execute (* for every minute).'] = 'La minuto de la horo kiam tiu tasko devus efektivigi (* por ĉiu minuto).';

$GLOBALS["lang"]['The month of the year when this task should execute (* for every month).'] = 'La monato de la jaro kiam tiu tasko devus efektivigi (* por ĉiu monato).';

$GLOBALS["lang"]['The name given to this item.'] = 'La nomo donita al tiu objekto.';

$GLOBALS["lang"]['The name given to this item. Ideally it should be unique.'] = 'La nomo donita al tiu objekto. Ideale ĝi devus esti unika.';

$GLOBALS["lang"]['The name given to this user (used to login). Ideally it should be unique.'] = 'La nomo donita al tiu uzanto (uzita por ensaluti). Ideale ĝi devus esti unika.';

$GLOBALS["lang"]['The name of the associated cloud (if required).'] = 'La nomo de la rilata nubo (se necese).';

$GLOBALS["lang"]['The name of the software package, as audited by Open-AudIT. Use the percent sign % as a wildcard.'] = 'La nomo de la softvarpakaĵo, kiel reviziite fare de Open-AudIT. Oni uzas la realan modon (AS-finajxon).';

$GLOBALS["lang"]['The name of the user who last changed or added this item (read only).'] = 'La nomo de la uzanto kiu laste ŝanĝiĝis aŭ aldonis tiun objekton (leganta nur).';

$GLOBALS["lang"]['The name provided by the provider.'] = 'La nomo provizita de la provizanto.';

$GLOBALS["lang"]['The network in the format 192.168.1.0/24.'] = 'La reto en la formato 192.168.1.0/24.';

$GLOBALS["lang"]['The network subnet to execute the discovery on.'] = 'La sendostacia subreto por efektivigi la eltrovaĵon sur.';

$GLOBALS["lang"]['The number of RUs this device occupies.'] = 'La nombro da RUoj tiu aparato okupas.';

$GLOBALS["lang"]['The number of associated locations. Links to <code>locations.cloud_id</code>.'] = 'La nombro de rilataj lokoj. Ligiloj al <code>locations.cloud_id</code>.';

$GLOBALS["lang"]['The number of associated networks. Links to <code>networks.cloud_id</code>.'] = 'La nombro de rilataj retoj. Ligiloj al <code>networks.cloud_id</code>.';

$GLOBALS["lang"]['The number of audited devices in this cloud. Links to <code>devices.cloud_id</code> and <code>devices.serial</code>.'] = 'La nombro de reviziitaj aparatoj en ĉi tiu nubo. Ligiloj al <code>devices.cloud_id</code> kaj <code>devices.serial</code>.';

$GLOBALS["lang"]['The number of critical severity vulnerabilities held by FirstWave (not in your database).'] = 'La nombro da kritikaj severecoj tenitaj fare de FirstWave (ne en via datumbazo).';

$GLOBALS["lang"]['The number of devices found by this discovery.'] = 'La nombro da aparatoj trovitaj per tiu eltrovaĵo.';

$GLOBALS["lang"]['The number of devices in the associated group.'] = 'La nombro da aparatoj en la rilata grupo.';

$GLOBALS["lang"]['The number of devices in this cloud with a state of running. Links to <code>devices.cloud_id</code> and <code>devices.instance_state</code>.'] = 'La nombro da aparatoj en tiu nubo kun stato de kurado. Ligiloj al <code>devices.cloud_id</code> kaj <code>devices.instance_state</code>.';

$GLOBALS["lang"]['The number of devices in this cloud with a state of stopped. Links to <code>devices.cloud_id</code> and <code>devices.instance_state</code>.'] = 'La nombro da aparatoj en tiu nubo kun stato de halto. Ligiloj al <code>devices.cloud_id</code> kaj <code>devices.instance_state</code>.';

$GLOBALS["lang"]['The number of devices in this cloud. Links to <code>devices.cloud_id</code>.'] = 'La nombro de aparatoj en ĉi tiu nubo. Ligiloj al <code>devices.cloud_id</code>.';

$GLOBALS["lang"]['The number of devices this benchmark will be executed upon. Derived from <code>benchmarks.devices</code>.'] = 'La nombro da aparatoj tiu komparnormo estos efektivigita sur. Mortigita de <code>benchmarks.devices</code>.';

$GLOBALS["lang"]['The number of devices to limit this discovery to.'] = 'La nombro da aparatoj por limigi tiun eltrovaĵon.';

$GLOBALS["lang"]['The number of high severity vulnerabilities held by FirstWave (not in your database).'] = 'La nombro da alta severeco vundeblecoj tenitaj fare de FirstWave (ne en via datumbazo).';

$GLOBALS["lang"]['The number of low severity vulnerabilities held by FirstWave (not in your database).'] = 'La nombro da malalta severeco vundeblecoj tenitaj fare de FirstWave (ne en via datumbazo).';

$GLOBALS["lang"]['The number of medium severity vulnerabilities held by FirstWave (not in your database).'] = 'La nombro da mezaj severecoj tenitaj fare de FirstWave (ne en via datumbazo).';

$GLOBALS["lang"]['The number of purchased licenses.'] = 'La nombro de aĉetitaj licencoj.';

$GLOBALS["lang"]['The number of seconds to try and communicate with the target IP.'] = 'La nombro da sekundoj por provi kaj komuniki kun la celo IP.';

$GLOBALS["lang"]['The number of vulnerabilities without a severity held by FirstWave (not in your database).'] = 'La nombro da vundeblecoj sen severeco tenita fare de FirstWave (ne en via datumbazo).';

$GLOBALS["lang"]['The optional secondary column. NOTE: When type = traffic, this represents the yellow query id.'] = 'La laŭvola sekundara kolono. Se tipo = trafiko, tio reprezentas la flavan query id.';

$GLOBALS["lang"]['The optional third column. NOTE: When type = traffic, this represents the green query id.'] = 'La laŭvola tria kolumno. Se tipo = trafiko, tio reprezentas la verdan query id.';

$GLOBALS["lang"]['The orientation of this device.'] = 'La orientiĝo de tiu aparato.';

$GLOBALS["lang"]['The password for the dn_account attribute.'] = 'La pasvorton por la dn_account atribuas.';

$GLOBALS["lang"]['The password used to access the external system.'] = 'La pasvorton uzata por aliri la eksteran sistemon.';

$GLOBALS["lang"]['The path to the file or directory.'] = 'La vojo al la dosiero aŭ dosierujo.';

$GLOBALS["lang"]['The path to the file or directory. Directories should end with a trailing slash.'] = 'La vojo al la dosiero aŭ dosierujo. Direktoroj devas finiĝi kun migrovojo.';

$GLOBALS["lang"]['The physical depth (in CMs) of the rack.'] = 'La fizika profundo (en CM) de la rako.';

$GLOBALS["lang"]['The physical height (in CMs) of the rack.'] = 'La fizika alteco (en CM) de la rako.';

$GLOBALS["lang"]['The physical weight (in KGs) of the rack at present.'] = 'La fizika pezo (en KGoj) de la rako nuntempe.';

$GLOBALS["lang"]['The physical weight (in KGs) of the rack when empty.'] = 'La fizika pezo (en KGoj) de la rako kiam malplenigite.';

$GLOBALS["lang"]['The physical width (in CMs) of the rack.'] = 'La fizika larĝo (en CM) de la rako.';

$GLOBALS["lang"]['The pod (if any) that this rack is part of.'] = 'La balgo (se entute) ke tiu rako estas parto de.';

$GLOBALS["lang"]['The power circuit this rack attaches to.'] = 'La potenco cirkvito tiu rak alkroĉas.';

$GLOBALS["lang"]['The primary database table upon which to base this widget.'] = 'La primara datenartablo sur kiu bazigi tiun draĝon.';

$GLOBALS["lang"]['The process identifier of this queue item.'] = 'La procezidentigilo de tiu atendospeco.';

$GLOBALS["lang"]['The process that was used last to retrieve details about the device'] = 'La procezo kiu estis uzita laste por preni detalojn pri la aparato';

$GLOBALS["lang"]['The query that provides a list of devices for the integration. Links to <code>queries.id</code>.'] = 'La atendo kiu disponigas liston de aparatoj por la integriĝo. Ligiloj al <code>queries.id</code>.';

$GLOBALS["lang"]['The rack asset number.'] = 'La rack-aktiva nombro.';

$GLOBALS["lang"]['The rack asset tag.'] = 'La rack-aktivaĵetikedo.';

$GLOBALS["lang"]['The rack bar code.'] = 'La rack trinkejo kodo.';

$GLOBALS["lang"]['The rack model.'] = 'La rack modelo.';

$GLOBALS["lang"]['The rack serial.'] = 'La rack serialo.';

$GLOBALS["lang"]['The rack series.'] = 'La rack serialo.';

$GLOBALS["lang"]['The rack this device is located in. Links to <code>racks.id</code>.'] = 'Tiu aparato situas en. Ligiloj al <code>racks.id</code>.';

$GLOBALS["lang"]['The recommended process of addressing and fixing identified security vulnerabilities. This typically involves applying patches, updates, or other measures to eliminate the risk posed by the vulnerabilities.'] = 'La rekomendita procezo de traktado kaj fiksado identigis sekurecvulsilojn. Tio tipe implikas apliki pecetojn, ĝisdatigojn, aŭ aliajn iniciatojn elimini la riskon prezentitan per la vundeblecoj.';

$GLOBALS["lang"]['The regular domain notation of your directory. Eg - <code>open-audit.lan</code>.'] = 'La regula domajna notacio de via adresaro. Eg - <code>open-audit.lan</code>.';

$GLOBALS["lang"]['The result of the command.'] = 'La rezulto de la komando.';

$GLOBALS["lang"]['The room the rack is located in.'] = 'La ĉambro kiun la rako situas.';

$GLOBALS["lang"]['The row the rack is located in.'] = 'La vico kiun la rako situas en.';

$GLOBALS["lang"]['The secret key used in conjunction with your AWS EC2 API key.'] = 'La sekreta ŝlosilo uzita lige kun via AWS EC2 API ŝlosilo.';

$GLOBALS["lang"]['The software end-of-life date.'] = 'La programaro fino-de-viva dato.';

$GLOBALS["lang"]['The software end-of-service-life date.'] = 'La programaro fino-de-servo-viva dato.';

$GLOBALS["lang"]['The specific database column from the specified database table.'] = 'La specifa datenarkolono de la precizigita databasetablo.';

$GLOBALS["lang"]['The specific database table.'] = 'La specifa tablo de datumbazo.';

$GLOBALS["lang"]['The standard Nmap timing options. We usually use -T4 (Aggressive) as this is recommended for a decent broadband or ethernet connection.'] = 'La norma Nmap tempigas opciojn. Ni kutime uzas - T4 (Agres) kiam tio estas rekomendita por deca larĝbendo aŭ eteroligo.';

$GLOBALS["lang"]['The status of this integration'] = 'La statuso de tiu integriĝo';

$GLOBALS["lang"]['The status of this queued item.'] = 'La statuso de tiu queuita objekto.';

$GLOBALS["lang"]['The target IP this log entry referers to (if any).'] = 'La celo IP kiun tiu tagalo enmetas al (se entute).';

$GLOBALS["lang"]['The template for the link to be generated per result line.'] = 'La ŝablono por la ligo por esti generita per rezulta linio.';

$GLOBALS["lang"]['The text for the bottom of the chart in a line chart (only).'] = 'La teksto por la fundo de la diagramo en liniodiagramo (nur).';

$GLOBALS["lang"]['The text that is displayed.'] = 'La teksto kiu estas montrita.';

$GLOBALS["lang"]['The timestamp after which, this task should run. For example, run a task after the 1st June 2017 at 10am, set it to <code>2017-06-01 09:59:00</code>. This value should be zero padded (ie, 09, not 9). This value defaults to <code>2000-01-01 00:00:00</code> which means by default, a scheduled task will run at next scheduled execution time.'] = 'La tempostampo post kiu, tiu tasko devus kuri. Ekzemple, prizorgas taskon post la unua junio 2017 ĉe 10am, metis ĝin al <code>2017-06-01 09:59:00</code>. Tiu valoro devus esti nul remburita (mi, 09, ne 9). Tiu valoro defaŭltas al <code>2000-01-01 00:00:00</code> kiu signifas defaŭlte, planita tasko kuros ĉe venonta planita ekzekuttempo.';

$GLOBALS["lang"]['The top 10, 100 or 1000 (or none) TCP ports commonly in use according to Nmap.'] = 'La supraj 10, 100 aŭ 1000 (aŭ neniu) TCP-havenoj ofte en uzo laŭ Nmap.';

$GLOBALS["lang"]['The top 10, 100 or 1000 (or none) UDP ports commonly in use according to Nmap.'] = 'La supraj 10, 100 aŭ 1000 (aŭ neniu) UDP-havenoj ofte en uzo laŭ Nmap.';

$GLOBALS["lang"]['The total BTU output by this rack.'] = 'La totala BTU-produktaĵo de tiu rako.';

$GLOBALS["lang"]['The type of device.'] = 'La tipo de aparato.';

$GLOBALS["lang"]['The type of organisation.'] = 'La speco de organizo.';

$GLOBALS["lang"]['The type of rack (compute, power, network, etc).'] = 'La speco de rako (kompato, potenco, reto, ktp.).';

$GLOBALS["lang"]['The type of task to run. One of: baseline, benchmark, cloud discovery, discovery, integration, report, query.'] = 'La speco de tasko por kuri. Unu el: bazlinio, komparnormo, nubtrovaĵo, eltrovaĵo, integriĝo, raporto, atendo.';

$GLOBALS["lang"]['The type of the integration (usually named after the external system).'] = 'La speco de la integriĝo (kutime nomita laŭ la ekstera sistemo).';

$GLOBALS["lang"]['The unique identifier of this server.'] = 'La unika identigilo de tiu servilo.';

$GLOBALS["lang"]['The user account this collector uses. Links to <code>users.id</code>.'] = 'La uzanto respondecas pri tiu kolektanto uzas. Ligiloj al <code>users.id</code>.';

$GLOBALS["lang"]['The username used to access the external system.'] = 'La uzantnomo kutimis aliri la eksteran sistemon.';

$GLOBALS["lang"]['The users email address.'] = 'La uzantoj retpoŝta adreso.';

$GLOBALS["lang"]['The usual hours of operation at this site.'] = 'La kutimaj horoj de operacio en ĉi tiu retejo.';

$GLOBALS["lang"]['The value assigned to the item.'] = 'La valoro asignita al la objekto.';

$GLOBALS["lang"]['The value that is stored for this particular item.'] = 'La valoro kiu estas stokita por tiu speciala objekto.';

$GLOBALS["lang"]['The vendor name as per CPE entries.'] = 'La vendistnomo kiel per CPE kontribuoj.';

$GLOBALS["lang"]['The vendor taken from the CPE.'] = 'La vendisto prenita de la CPE.';

$GLOBALS["lang"]['The web directory on the host that Open-AudIT is installed (requires a trailing slash).'] = 'La reto adresaro sur la gastiganto kiu Open-AudIT estas instalita (postulas migrovojon).';

$GLOBALS["lang"]['The widget at position '] = 'La baraĵo ĉe pozicio ';

$GLOBALS["lang"]['The width of this device.'] = 'La larĝo de tiu aparato.';

$GLOBALS["lang"]['Then'] = 'Tiam la';

$GLOBALS["lang"]['This CVE will be retrieved and overwrite the existing CVE if it exists.'] = 'Tiu CVE estos prenita kaj overwrite la ekzistanta CVE se ĝi ekzistas.';

$GLOBALS["lang"]['This attribute is stored as a JSON object. It is the list of all collections and contains the collection name along with <code>c</code>, <code>r</code>, <code>u</code> and,or <code>d</code> which represent create, read, update and delete. These are the actions a user can perform on items from that particular collection.'] = 'Tiu atributo estas stokita kiel JSON-objekto. Ĝi estas la listo de ĉiuj kolektoj kaj enhavas la kolektonomon kune kun <code>c</code>, <code>r</code>, <code>u</code> aŭ <code>d</code> kiuj reprezentas krei, legu, ĝisdatigi kaj forigi. Tiuj estas la agoj uzanto povas rezulti sur eroj de tiu speciala kolekto.';

$GLOBALS["lang"]['This can be either a varchar (a text field), a list (a list of values that can be selected) or a date.'] = 'Tio povas esti aŭ varchar ( tekstkampo), listo (listo de valoroj kiuj povas esti selektitaj) aŭ dato.';

$GLOBALS["lang"]['This collectors universally unique identifier.'] = 'Tiuj kolektantoj universale unika identigilo.';

$GLOBALS["lang"]['This description is auto-populated and should ideally be left as-is.'] = 'Tiu priskribo estas aŭto-loĝita kaj devus ideale esti lasita kiel-estas.';

$GLOBALS["lang"]['This feature requires a Professional or an Enterprise license.'] = 'Tiu trajto postulas Profesian aŭ Enterprise licencon.';

$GLOBALS["lang"]['This is generally the primary column, unless otherwise configured. NOTE: When type = traffic, this represents the secondary text.'] = 'Tio estas ĝenerale la primara kolono, se alie formis. Se tipo = trafiko, tio reprezentas la sekundaran tekston.';

$GLOBALS["lang"]['This item must match the value of the attribute selected or contains the ID of the query to be used.'] = 'Tiu objekto devas egali la valoron de la atributo selektita aŭ enhavas la ID de la atendo por esti uzita.';

$GLOBALS["lang"]['This item must match the value of the attribute selected.'] = 'Tiu objekto devas egali la valoron de la atributo selektita.';

$GLOBALS["lang"]['This license expires on'] = 'Ĉi tiu permesilo finiĝas sur';

$GLOBALS["lang"]['This should be set to either 1 or the height of the rack.'] = 'Tio devus esti metita al aŭ 1 aŭ la alteco de la rako.';

$GLOBALS["lang"]['This will auto-populate.'] = 'Ĉi tiu funkcios.';

$GLOBALS["lang"]['This will considerably slow the discovery scan.'] = 'Tio konsiderinde malrapidigos la malkovron.';

$GLOBALS["lang"]['Thursday'] = 'ĵaŭdon';

$GLOBALS["lang"]['time_caption'] = 'Tempo Caption';

$GLOBALS["lang"]['Time Caption'] = 'Tempo Caption';

$GLOBALS["lang"]['time_daylight'] = 'La tempo de la tempo';

$GLOBALS["lang"]['Time Daylight'] = 'La tempo de la tempo';

$GLOBALS["lang"]['Time to Execute'] = 'La tempo por la';

$GLOBALS["lang"]['timeout'] = 'Tempo de tempo';

$GLOBALS["lang"]['Timeout'] = 'Tempo de tempo';

$GLOBALS["lang"]['Timeout Per Target (Seconds)'] = 'Timeout Per Target (Seconds)';

$GLOBALS["lang"]['Timesatamp'] = 'Timesatamp';

$GLOBALS["lang"]['Timestamp'] = 'La tempo';

$GLOBALS["lang"]['timing'] = 'Timante';

$GLOBALS["lang"]['Timing'] = 'Timante';

$GLOBALS["lang"]['Timor-Leste'] = 'Timor-Leste';

$GLOBALS["lang"]['Title'] = 'Titolo';

$GLOBALS["lang"]['Togo'] = 'Togo';

$GLOBALS["lang"]['Tokelau'] = 'Tokelau';

$GLOBALS["lang"]['Tonga'] = 'Tongo';

$GLOBALS["lang"]['toolbar_style'] = 'Toolbar Style';

$GLOBALS["lang"]['Toolbar Style'] = 'Toolbar Style';

$GLOBALS["lang"]['Top Nmap TCP Ports'] = 'Top Nmap TCP Havenoj';

$GLOBALS["lang"]['Top Nmap UDP Ports'] = 'Top Nmap UDP Ports';

$GLOBALS["lang"]['Traditional Chinese'] = 'Tradicia ĉina';

$GLOBALS["lang"]['Traffic Light'] = 'Trafika lumo';

$GLOBALS["lang"]['Trinidad and Tobago'] = 'Trinidado kaj Tobago';

$GLOBALS["lang"]['Troubleshooting LDAP Logins'] = 'Problemo de LDAP Logins';

$GLOBALS["lang"]['Try all the latest features with a FREE 100 device license of Open-AudIT Enterprise. Please read the <a href=\"'] = 'Provu ĉiujn plej malfruajn ecojn kun libera 100-aparato licenco de Open-AudIT Enterprise. Bonvolu legi la <a href';

$GLOBALS["lang"]['Tuesday'] = 'Marŝi marde';

$GLOBALS["lang"]['Tunisia'] = 'Tunizio';

$GLOBALS["lang"]['Turkey'] = 'Turkio Turkio';

$GLOBALS["lang"]['Turkmenistan'] = 'Turkmenio Turkmenio';

$GLOBALS["lang"]['Turks and Caicos Islands'] = 'Turko kaj Caicos Insuloj';

$GLOBALS["lang"]['Tuvalu'] = 'Tuvalo Tuvalo';

$GLOBALS["lang"]['tx_bitrate'] = 'Tx Bitrate';

$GLOBALS["lang"]['Tx Bitrate'] = 'Tx Bitrate';

$GLOBALS["lang"]['tx_freq'] = 'Tx Freq';

$GLOBALS["lang"]['Tx Freq'] = 'Tx Freq';

$GLOBALS["lang"]['tx_level'] = 'Tx Nivelo';

$GLOBALS["lang"]['Tx Level'] = 'Tx Nivelo';

$GLOBALS["lang"]['tx_power'] = 'Tx Power';

$GLOBALS["lang"]['Tx Power'] = 'Tx Power';

$GLOBALS["lang"]['tx_profile'] = 'Tx Profilo';

$GLOBALS["lang"]['Tx Profile'] = 'Tx Profilo';

$GLOBALS["lang"]['type'] = 'Tipo';

$GLOBALS["lang"]['Type'] = 'Tipo';

$GLOBALS["lang"]['URL'] = 'URL URL URL URL';

$GLOBALS["lang"]['uuid'] = 'UUID';

$GLOBALS["lang"]['UUID'] = 'UUID';

$GLOBALS["lang"]['udp_ports'] = 'Udp Ports';

$GLOBALS["lang"]['Udp Ports'] = 'Udp Ports';

$GLOBALS["lang"]['Uganda'] = 'Ugando';

$GLOBALS["lang"]['Ukraine'] = 'Ukrainio';

$GLOBALS["lang"]['uninstall'] = 'Uninstall';

$GLOBALS["lang"]['Uninstall'] = 'Uninstall';

$GLOBALS["lang"]['Uninstall the Agent'] = 'Uninstall la agento';

$GLOBALS["lang"]['United Arab Emirates'] = 'Unuiĝintaj Arabaj Emirlandoj';

$GLOBALS["lang"]['United Kingdom'] = 'Unuiĝinta Reĝlando';

$GLOBALS["lang"]['United States Minor Outlying Islands'] = 'Usonaj Malgrandaj Insuloj';

$GLOBALS["lang"]['United States Virgin Islands'] = 'Usonaj Virgulininsuloj';

$GLOBALS["lang"]['United States of America'] = 'Usono de Ameriko';

$GLOBALS["lang"]['Unknown'] = 'Nekonataĵo Nekonataĵo';

$GLOBALS["lang"]['unlock_pin'] = 'Malŝlosi Pin';

$GLOBALS["lang"]['Unlock Pin'] = 'Malŝlosi Pin';

$GLOBALS["lang"]['Unscheduled'] = 'Neplanita';

$GLOBALS["lang"]['Unused as at 5.2.0.'] = 'Unuigita kiel ĉe 5.2.0.';

$GLOBALS["lang"]['Unused.'] = 'Nepartia.';

$GLOBALS["lang"]['Update'] = 'Ĝisdatigo';

$GLOBALS["lang"]['update_external_count'] = 'Maksimuma kalkulo';

$GLOBALS["lang"]['Update External Count'] = 'Maksimuma kalkulo';

$GLOBALS["lang"]['update_external_from_internal'] = 'Maksimumo de interna';

$GLOBALS["lang"]['Update External From Internal'] = 'Maksimumo de interna';

$GLOBALS["lang"]['update_internal_count'] = 'Ĝisdatigo Interna kalkulo';

$GLOBALS["lang"]['Update Internal Count'] = 'Ĝisdatigo Interna kalkulo';

$GLOBALS["lang"]['update_internal_from_external'] = 'Ĝisdatigo Interna De Ekstere';

$GLOBALS["lang"]['Update Internal From External'] = 'Ĝisdatigo Interna De Ekstere';

$GLOBALS["lang"]['Update NMIS Devices from Open-AudIT'] = 'Ĝisdatigo NMIS Devices de Open-AudIT';

$GLOBALS["lang"]['Update Open-AudIT Devices from '] = 'Ĝisdatigo de Open-AudIT Aparatoj de ';

$GLOBALS["lang"]['Update Open-AudIT Devices from NMIS'] = 'Ĝisdatigo de Open-AudIT Aparatoj de NMIS';

$GLOBALS["lang"]['Updated each time discovery has been executed with IPs detected to be responding.'] = 'Ĝisdatigita ĉiun fojon eltrovaĵo estis efektivigita kun IPs detektita por esti respondanta.';

$GLOBALS["lang"]['Updated each time discovery has been executed with IPs that have been scanned by Nmap.'] = 'Ĝisdatigita ĉiun fojon eltrovaĵo estis efektivigita kun IPoj kiuj estis skanitaj fare de Nmap.';

$GLOBALS["lang"]['Updated each time discovery has been executed with devices we were able to audit.'] = 'Ĝisdatigita ĉiun fojon eltrovaĵo estis efektivigita kun aparatoj kiujn ni povis revizii.';

$GLOBALS["lang"]['Updated each time discovery has been executed with devices we were able to query.'] = 'Ĝisdatigita ĉiun fojon eltrovaĵo estis efektivigita kun aparatoj kiujn ni povis pridemandi.';

$GLOBALS["lang"]['Updated each time discovery has been executed.'] = 'Ĝisdatigite ĉiun fojon eltrovaĵo estis efektivigita.';

$GLOBALS["lang"]['Updated each time the discovery has been executed.'] = 'Ĝisdatigite ĉiun fojon la eltrovaĵo estis efektivigita.';

$GLOBALS["lang"]['Updated each time the discovery has completed execution.'] = 'Ĝisdatigite ĉiun fojon la eltrovaĵo kompletigis ekzekuton.';

$GLOBALS["lang"]['Updating'] = 'Ĝis la fino';

$GLOBALS["lang"]['Upgrade'] = 'Ĝisdatiĝi';

$GLOBALS["lang"]['Upload an audit result file'] = 'Elŝargu revizion rezulta dosiero';

$GLOBALS["lang"]['Upper Case'] = 'Supra kazo';

$GLOBALS["lang"]['uptime'] = 'Ĝis nun';

$GLOBALS["lang"]['Uptime'] = 'Ĝis nun';

$GLOBALS["lang"]['url'] = 'Url';

$GLOBALS["lang"]['Url'] = 'Url';

$GLOBALS["lang"]['Uruguay, Eastern Republic of'] = 'Urugvajo, Orienta Respubliko de';

$GLOBALS["lang"]['usb'] = 'Usb';

$GLOBALS["lang"]['Usb'] = 'Usb';

$GLOBALS["lang"]['use'] = 'Uzo de uzo';

$GLOBALS["lang"]['Use'] = 'Uzo de uzo';

$GLOBALS["lang"]['use_authentication'] = 'Uzu aŭtentigon';

$GLOBALS["lang"]['Use Authentication'] = 'Uzu aŭtentigon';

$GLOBALS["lang"]['use_authorisation'] = 'Uzo de aprobo';

$GLOBALS["lang"]['Use Authorisation'] = 'Uzo de aprobo';

$GLOBALS["lang"]['Use SNMP'] = 'Uzu SNMP';

$GLOBALS["lang"]['Use SSH'] = 'Uzu SSH';

$GLOBALS["lang"]['Use Secure (LDAPS)'] = 'Utila (LDAPS)';

$GLOBALS["lang"]['Use Service Version Detection'] = 'Uzu la version Detection';

$GLOBALS["lang"]['Use WMI'] = 'Uzu WMI';

$GLOBALS["lang"]['Use for Authentication'] = 'Uzo por Authentication';

$GLOBALS["lang"]['Use for Roles'] = 'Uzo por roloj';

$GLOBALS["lang"]['used'] = 'Uzita';

$GLOBALS["lang"]['Used'] = 'Uzita';

$GLOBALS["lang"]['used_count'] = 'Uzita kalkulo';

$GLOBALS["lang"]['Used Count'] = 'Uzita kalkulo';

$GLOBALS["lang"]['Used by OpenLDAP only.'] = 'Uzita fare de OpenLDAP nur.';

$GLOBALS["lang"]['Used internally when discovering a single device.'] = 'Uzita interne dum malkovrado de ununura aparato.';

$GLOBALS["lang"]['Used internally when discovering a single device. Links to <code>devices.id</code>.'] = 'Uzita interne dum malkovrado de ununura aparato. Ligiloj al <code>devices.id</code>.';

$GLOBALS["lang"]['Used when LDAP servers have been configured to populate a users details - this includes the Orgs to which they have access. If a user is in this LDAP group, they are assigned this org.'] = 'Uzita kiam LDAP-serviloj estis formitaj por popularigi uzantdetalojn - tio inkludas la Orgs al kiuj ili havas aliron. Se uzanto estas en tiu LDAP-grupo, ili ricevas tiun org.';

$GLOBALS["lang"]['Used when LDAP servers have been configured to populate a users details - this includes the Roles which they are assigned. If a user is in this LDAP group, they are assigned this role.'] = 'Uzita kiam LDAP-serviloj estis formitaj por popularigi uzantdetalojn - tio inkludas la rolojn kiujn ili ricevas. Se uzanto estas en tiu LDAP-grupo, ili ricevas tiun rolon.';

$GLOBALS["lang"]['Used when searching OpenLDAP to match a users uid to a groups members. Default of <code>memberUid</code>. Used by OpenLDAP only.'] = 'Uzita dum serĉado OpenLDAP por egali uzantojn kojn al grupoj membroj. Defaŭlto de <code>memberUid</code>. Uzita fare de OpenLDAP nur.';

$GLOBALS["lang"]['Used with Integrations and FirstWave monitoring applications.'] = 'Uzite kun Integriĝoj kaj FirstWave monitoradaplikoj.';

$GLOBALS["lang"]['Used with Integrations and FirstWave monitoring applications. Set to y if working SNMP detected by discovery.'] = 'Uzite kun Integriĝoj kaj FirstWave monitoradaplikoj. Metite al y se laboranta SNMP detektita per eltrovaĵo.';

$GLOBALS["lang"]['user'] = 'Uzanta Uzanto';

$GLOBALS["lang"]['User'] = 'Uzanta Uzanto';

$GLOBALS["lang"]['User DN'] = 'Uzanto DN';

$GLOBALS["lang"]['user_group'] = 'Uzanta grupon';

$GLOBALS["lang"]['User Group'] = 'Uzanta grupon';

$GLOBALS["lang"]['user_id'] = 'Uzanto ID';

$GLOBALS["lang"]['User ID'] = 'Uzanto ID';

$GLOBALS["lang"]['user_interaction'] = 'Uzanta Interaction';

$GLOBALS["lang"]['User Interaction'] = 'Uzanta Interaction';

$GLOBALS["lang"]['User Membership Attribute'] = 'Uzanta membrecon';

$GLOBALS["lang"]['user_name'] = 'Uzantnomo';

$GLOBALS["lang"]['User Name'] = 'Uzantnomo';

$GLOBALS["lang"]['User Policies'] = 'Uzanta Politikojn';

$GLOBALS["lang"]['Username'] = 'Uzantnomo';

$GLOBALS["lang"]['username'] = 'Uzantnomo';

$GLOBALS["lang"]['users'] = 'Uzantoj de uzantoj';

$GLOBALS["lang"]['Users'] = 'Uzantoj de uzantoj';

$GLOBALS["lang"]['Users, Roles and Orgs'] = 'Uzantoj, Roloj kaj Orgs';

$GLOBALS["lang"]['Using Entra for Auth'] = 'Uzante entra por Auth';

$GLOBALS["lang"]['Using OKTA for Auth'] = 'Uzante OKTA por Auth';

$GLOBALS["lang"]['Usually Mb/s, from Location A.'] = 'Kutime Mb/s, de Loko A.';

$GLOBALS["lang"]['Usually Mb/s, from Location B.'] = 'Kutime Mb/s, de Loko B.';

$GLOBALS["lang"]['Usually Mb/s, to Location A.'] = 'Kutime Mb/s, lokigi A.';

$GLOBALS["lang"]['Usually Mb/s, to Location B.'] = 'Kutime Mb/s, al Loko B.';

$GLOBALS["lang"]['Uzbekistan'] = 'Uzbekio';

$GLOBALS["lang"]['VLAN'] = 'VLAN';

$GLOBALS["lang"]['VLAN ID'] = 'VLAN ID';

$GLOBALS["lang"]['valid_from'] = 'Valida de';

$GLOBALS["lang"]['Valid From'] = 'Valida de';

$GLOBALS["lang"]['valid_from_raw'] = 'Antaŭite fare de Raw';

$GLOBALS["lang"]['Valid From Raw'] = 'Antaŭite fare de Raw';

$GLOBALS["lang"]['valid_to'] = 'Valida por';

$GLOBALS["lang"]['Valid To'] = 'Valida por';

$GLOBALS["lang"]['valid_to_raw'] = 'Valida al Raw';

$GLOBALS["lang"]['Valid To Raw'] = 'Valida al Raw';

$GLOBALS["lang"]['Valid Values'] = 'Validaj valoroj';

$GLOBALS["lang"]['value'] = 'Valora Valoro';

$GLOBALS["lang"]['Value'] = 'Valora Valoro';

$GLOBALS["lang"]['values'] = 'Valoroj';

$GLOBALS["lang"]['Values'] = 'Valoroj';

$GLOBALS["lang"]['Vanuatu'] = 'Vanuatuo Vanuatuo';

$GLOBALS["lang"]['VarChar'] = 'Varo';

$GLOBALS["lang"]['Varchar'] = 'Varchar';

$GLOBALS["lang"]['variable'] = 'Varia varianto';

$GLOBALS["lang"]['Variable'] = 'Varia varianto';

$GLOBALS["lang"]['vendor'] = 'Vendisto';

$GLOBALS["lang"]['Vendor'] = 'Vendisto';

$GLOBALS["lang"]['vendors'] = 'Vendistoj';

$GLOBALS["lang"]['Vendors'] = 'Vendistoj';

$GLOBALS["lang"]['Venezuela'] = 'Venezuelo Venezuelo';

$GLOBALS["lang"]['version'] = 'Versio versio';

$GLOBALS["lang"]['Version'] = 'Versio versio';

$GLOBALS["lang"]['version_padded'] = 'Versio Padded';

$GLOBALS["lang"]['Version Padded'] = 'Versio Padded';

$GLOBALS["lang"]['version_raw'] = 'Versio Raw';

$GLOBALS["lang"]['Version Raw'] = 'Versio Raw';

$GLOBALS["lang"]['version_string'] = 'Versio de kordoj';

$GLOBALS["lang"]['Version String'] = 'Versio de kordoj';

$GLOBALS["lang"]['video'] = 'Video';

$GLOBALS["lang"]['Video'] = 'Video';

$GLOBALS["lang"]['Vietnam'] = 'Vjetnama respubliko';

$GLOBALS["lang"]['View'] = 'Vido';

$GLOBALS["lang"]['View All'] = 'Rigardi ĉiujn';

$GLOBALS["lang"]['View Details'] = 'Vidu detalojn';

$GLOBALS["lang"]['View Device'] = 'Vido Device';

$GLOBALS["lang"]['View Discovery'] = 'Vido Discovery';

$GLOBALS["lang"]['View Policy'] = 'Vidu politikon';

$GLOBALS["lang"]['Virtual Private Network'] = 'Virtuala Privata Reto';

$GLOBALS["lang"]['Virtualisation'] = 'Virtualigo';

$GLOBALS["lang"]['Visit our YouTube channel for instructional videos.'] = 'Vizitu nian YouTube-kanalon por instruaj vidbendoj.';

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

$GLOBALS["lang"]['vm_server_name'] = 'Vm Server Name';

$GLOBALS["lang"]['Vm Server Name'] = 'Vm Server Name';

$GLOBALS["lang"]['vm_vendor'] = 'Vm Vendor';

$GLOBALS["lang"]['Vm Vendor'] = 'Vm Vendor';

$GLOBALS["lang"]['vuln_status'] = 'Vulnstatuso';

$GLOBALS["lang"]['Vuln Status'] = 'Vulnstatuso';

$GLOBALS["lang"]['vulnerabilities'] = 'Vulnercoj';

$GLOBALS["lang"]['Vulnerabilities'] = 'Vulnercoj';

$GLOBALS["lang"]['vulnerabilities_cache'] = 'Vulnerabilities Cache';

$GLOBALS["lang"]['Vulnerabilities Cache'] = 'Vulnerabilities Cache';

$GLOBALS["lang"]['vulnerability_id'] = 'Vulnerability ID';

$GLOBALS["lang"]['Vulnerability ID'] = 'Vulnerability ID';

$GLOBALS["lang"]['WHERE'] = '→ Eventoj:';

$GLOBALS["lang"]['wall_port'] = 'Muro de la haveno';

$GLOBALS["lang"]['Wall Port'] = 'Muro de la haveno';

$GLOBALS["lang"]['Wallis and Futuna'] = 'Valiso kaj Futuna';

$GLOBALS["lang"]['Want to know more?'] = 'Ĉu vi volas scii pli?';

$GLOBALS["lang"]['Warning'] = 'Averto';

$GLOBALS["lang"]['warranty'] = 'Milito';

$GLOBALS["lang"]['Warranty'] = 'Milito';

$GLOBALS["lang"]['warranty_duration'] = 'La milito';

$GLOBALS["lang"]['Warranty Duration'] = 'La milito';

$GLOBALS["lang"]['warranty_expires'] = 'Milito de milito';

$GLOBALS["lang"]['Warranty Expires'] = 'Milito de milito';

$GLOBALS["lang"]['warranty_status'] = 'Situanta statuso';

$GLOBALS["lang"]['Warranty Status'] = 'Situanta statuso';

$GLOBALS["lang"]['warranty_type'] = 'Antaŭa Antaŭa tipo';

$GLOBALS["lang"]['Warranty Type'] = 'Antaŭa Antaŭa tipo';

$GLOBALS["lang"]['Web'] = 'Web Web Web Web';

$GLOBALS["lang"]['Webserver'] = 'Webserver';

$GLOBALS["lang"]['Website'] = 'Retejo retejo';

$GLOBALS["lang"]['Wednesday'] = 'merkredo merkredo merkredo';

$GLOBALS["lang"]['weight'] = 'Pezo';

$GLOBALS["lang"]['Weight'] = 'Pezo';

$GLOBALS["lang"]['weight_current'] = 'Peza kurento';

$GLOBALS["lang"]['Weight Current'] = 'Peza kurento';

$GLOBALS["lang"]['weight_empty'] = 'Peza malfekteco';

$GLOBALS["lang"]['Weight Empty'] = 'Peza malfekteco';

$GLOBALS["lang"]['weight_max'] = 'Peza Max';

$GLOBALS["lang"]['Weight Max'] = 'Peza Max';

$GLOBALS["lang"]['Welcome'] = 'Bonvenon Bonvenon';

$GLOBALS["lang"]['Welcome Dashboard'] = 'Bonvenon Dashboard';

$GLOBALS["lang"]['Welcome to FirstWave Open-AudIT'] = 'Bonvenon al FirstWave Open-AudIT';

$GLOBALS["lang"]['Western Sahara'] = 'Okcidenta Saharo';

$GLOBALS["lang"]['What Can I Expect if I Have no Credentials'] = 'Kion mi povas atendi se mi havas neniujn kreantojn';

$GLOBALS["lang"]['What is the purpose of this rack.'] = 'Kio estas la celo de tiu rako.';

$GLOBALS["lang"]['What is the type of this location. Allowable types held in <code>attributes</code> table.'] = 'Kio estas la speco de tiu loko. Permeseblaj tipoj tenitaj en <code>attributes</code> tablo.';

$GLOBALS["lang"]['When integrating devices from the external system, if the device doesnt exist in Open-AudIT should we create it?'] = 'Dum integrado de aparatoj de la ekstera sistemo, se la aparato ne ekzistas en Open-AudIT devus ni krei ĝin?';

$GLOBALS["lang"]['When integrating devices from the external system, if the device has been updated in the external system should we update it in Open-AudIT?'] = 'Dum integrado de aparatoj de la ekstera sistemo, se la aparato estis ĝisdatigita en la ekstera sistemo ni devus ĝisdatigi ĝin en Open-AudIT?';

$GLOBALS["lang"]['When retrieve an external device, should we run discovery upon it?'] = 'Kiam ni prenas eksteran aparaton, ĉu ni devus trovi malkovron sur ĝi?';

$GLOBALS["lang"]['When this benchmark is scheduled to be executed. Derived from the associated <code>tasks.type</code> and <code>tasks.sub_resource_id</code>.'] = 'Kiam tiu komparnormo estas planita por esti efektivigita. Derived de la rilata <code>tasks.type</code> kaj <code>tasks.sub_resource_id</code>.';

$GLOBALS["lang"]['When this log was created.'] = 'Kiam la tagalo estis kreita.';

$GLOBALS["lang"]['When this queue item started processing.'] = 'Kiam tiu queue objekto komencis pretigon.';

$GLOBALS["lang"]['When we execute this baseline, should we check for items on devices that are not in a policy for this baseline.'] = 'Kiam ni efektivigas tiun bazlinion, ni devus kontroli erojn sur aparatoj kiuj ne estas en politiko por tiu bazlinio.';

$GLOBALS["lang"]['When we receive an open port, should we attempt to test for the version of the service currently running upon it? This assists in confirming actual running services.'] = 'Kiam ni ricevas malferman havenon, ĉu ni provas testi por la versio de la servo nuntempe kurante sur ĝi? Tio helpas en konfirmado de faktaj kurantaj servoj.';

$GLOBALS["lang"]['where'] = 'Kie kie Kies';

$GLOBALS["lang"]['Where'] = 'Kie kie Kies';

$GLOBALS["lang"]['Where on the Device Details screen you would like to see this field appear.'] = 'Kie sur la Device Detaloj ekrano vi ŝatus vidi tiun kampon ekaperas.';

$GLOBALS["lang"]['Where the rack is in the row.'] = 'Kie la rako estas en la vico.';

$GLOBALS["lang"]['Whether the vulnerability affects components beyond its own using Impact, Availability and Confidentiality.'] = 'Ĉu la vundebleco influas komponentojn preter sia propra uzante Impact, Availability kaj Confidentiality.';

$GLOBALS["lang"]['Whether user interaction is required (None, Passive, Active).'] = 'Ĉu uzantinteragado estas postulata (None, Passive, Aktiva).';

$GLOBALS["lang"]['Which OS this benchmark applies to.'] = 'kiu OS tiu komparnormo validas por.';

$GLOBALS["lang"]['Which devices should Open-AudIT create from the external system (if any). Using All, None or a given Attribute.'] = 'Kiuj aparatoj devus Open-AudIT krei de la ekstera sistemo (se entute). Uzante ĉion, neniu aŭ antaŭfiksita Atributo.';

$GLOBALS["lang"]['Which sub-menu should we display this query in.'] = 'kiun sub-menu ni devas montri tiun atendon en.';

$GLOBALS["lang"]['Who made this rack.'] = 'Kiu faris tiun rakon.';

$GLOBALS["lang"]['Why Windows Server Only?'] = 'Kial Vindozo nur funkcias?';

$GLOBALS["lang"]['Why do we exclude this policy?'] = 'Kial ni ekskludas tiun politikon?';

$GLOBALS["lang"]['Wide Area Network'] = 'Larĝa Area Network';

$GLOBALS["lang"]['Widget'] = 'Widget';

$GLOBALS["lang"]['Widget # '] = 'Antaŭite numero ';

$GLOBALS["lang"]['Widget Type'] = 'Widget Tipo';

$GLOBALS["lang"]['widgets'] = 'Widgets';

$GLOBALS["lang"]['Widgets'] = 'Widgets';

$GLOBALS["lang"]['width'] = 'Width';

$GLOBALS["lang"]['Width'] = 'Width';

$GLOBALS["lang"]['windows'] = 'Fenestroj';

$GLOBALS["lang"]['Windows'] = 'Fenestroj';

$GLOBALS["lang"]['Windows Test Script'] = 'Windows Test Script';

$GLOBALS["lang"]['Wireless Local Area Network'] = 'Senkarna Local Area Network';

$GLOBALS["lang"]['wmi_fails'] = 'Wmi Fails';

$GLOBALS["lang"]['Wmi Fails'] = 'Wmi Fails';

$GLOBALS["lang"]['wmi_timeout'] = 'Wmi Tempoout';

$GLOBALS["lang"]['Wmi Timeout'] = 'Wmi Tempoout';

$GLOBALS["lang"]['workgroup'] = 'Laborgrupo';

$GLOBALS["lang"]['Workgroup'] = 'Laborgrupo';

$GLOBALS["lang"]['Working Credentials'] = 'Laboranta Credentials';

$GLOBALS["lang"]['XML'] = 'XML XML XML';

$GLOBALS["lang"]['Yellow Query'] = 'Flava Query';

$GLOBALS["lang"]['Yemen'] = 'Jemeno';

$GLOBALS["lang"]['Yes'] = 'Jes, jes';

$GLOBALS["lang"]['You may want to copy and paste this URL in an email to your staff.'] = 'Vi povas deziri kopii kaj pasi tiun URL en retpoŝto al via stabo.';

$GLOBALS["lang"]['You must delete your existing license before adding a new license.'] = 'Vi devas forigi vian ekzistantan permesilon antaŭ aldoni novan permesilon.';

$GLOBALS["lang"]['YouTube Tutorials'] = 'YouTube Tutorials';

$GLOBALS["lang"]['Your AWS EC2 API key.'] = 'Via AWS EC2 API ŝlosilo.';

$GLOBALS["lang"]['Your Google Compute credentials as JSON.'] = 'Google Compute akreditaĵoj kiel JSON.';

$GLOBALS["lang"]['Your Licenses'] = 'Viaj permesiloj';

$GLOBALS["lang"]['Your Microsoft Azure Client ID.'] = 'Microsoft Azure Kliento ID.';

$GLOBALS["lang"]['Your Microsoft Azure Client Secret.'] = 'Microsoft Azure Kliento Sekreto.';

$GLOBALS["lang"]['Your Microsoft Azure Subscription ID.'] = 'Microsoft Azure Subscription ID.';

$GLOBALS["lang"]['Your Microsoft Azure Tennant ID.'] = 'Microsoft Azure Tennant ID.';

$GLOBALS["lang"]['Your SQL to select attributes that will populate this query.'] = 'Via SQL por selekti atributojn kiuj popularigos tiun atendon.';

$GLOBALS["lang"]['Your SQL to select devices that will populate this group.'] = 'Via SQL por selekti aparatojn kiuj popularigos tiun grupon.';

$GLOBALS["lang"]['Your SSH key.'] = 'Via SSH ŝlosilo.';

$GLOBALS["lang"]['Your access credentials, as per that clouds native API.'] = 'Via aliro akreditaĵoj, kiel per tiuj nuboj indiĝenaj API.';

$GLOBALS["lang"]['Your description of the status of this connection (provisioned, retired, etc).'] = 'Via priskribo de la statuso de tiu ligo (antaŭvidita, demisiis, ktp.).';

$GLOBALS["lang"]['Your description of this item.'] = 'Via priskribo de ĉi tiu objekto.';

$GLOBALS["lang"]['Your generic name for this piece of software'] = 'Via nomo por ĉi tiu peco de programaro';

$GLOBALS["lang"]['Your generic version for this piece of software'] = 'Via ĝenerala versio por ĉi tiu peco de programaro';

$GLOBALS["lang"]['Zambia'] = 'Zambio Zambio';

$GLOBALS["lang"]['Zimbabwe'] = 'Zimbabvo Zimbabvo';

$GLOBALS["lang"]['active'] = 'aktiva aktiva aktiva aktiva';

$GLOBALS["lang"]['active directory'] = 'aktiva direktoro';

$GLOBALS["lang"]['active/active'] = 'aktiva/aktiva';

$GLOBALS["lang"]['active/passive'] = 'aktiva/pasiva';

$GLOBALS["lang"]['advertisement'] = 'Reklamo';

$GLOBALS["lang"]['alert'] = 'atentema';

$GLOBALS["lang"]['all'] = 'Ĉiuj ĉiuj ĉiuj';

$GLOBALS["lang"]['allocated'] = 'Situo';

$GLOBALS["lang"]['amazon'] = 'Amazono';

$GLOBALS["lang"]['antivirus'] = 'antivirus';

$GLOBALS["lang"]['application'] = 'aplikaĵo';

$GLOBALS["lang"]['approved'] = 'aprobita';

$GLOBALS["lang"]['attribute'] = 'Atributoj';

$GLOBALS["lang"]['auto'] = 'aŭto';

$GLOBALS["lang"]['backup'] = 'Malantaŭa dorso';

$GLOBALS["lang"]['banned'] = 'malpermesata';

$GLOBALS["lang"]['blog'] = 'Blogo blogo blogo blogo';

$GLOBALS["lang"]['bottom'] = 'fundo';

$GLOBALS["lang"]['browser_lang'] = 'retumilo';

$GLOBALS["lang"]['building'] = 'Konstruaĵo de konstruaĵo';

$GLOBALS["lang"]['cloud'] = 'nubo nubo';

$GLOBALS["lang"]['code'] = 'kodokodo';

$GLOBALS["lang"]['collector'] = 'kolektanto';

$GLOBALS["lang"]['compute'] = 'Komputilo';

$GLOBALS["lang"]['config'] = 'Konfig';

$GLOBALS["lang"]['contains'] = 'enhavas';

$GLOBALS["lang"]['create'] = 'krei';

$GLOBALS["lang"]['created'] = 'kreita kreita';

$GLOBALS["lang"]['critical'] = 'Kritika kritika';

$GLOBALS["lang"]['cve'] = 'ĉ.';

$GLOBALS["lang"]['database'] = 'datumbazo';

$GLOBALS["lang"]['debug'] = 'debug';

$GLOBALS["lang"]['delegated'] = 'Delegita';

$GLOBALS["lang"]['delete'] = 'Forigu forigi';

$GLOBALS["lang"]['deleted'] = 'forigita';

$GLOBALS["lang"]['denied'] = 'neis';

$GLOBALS["lang"]['devices'] = 'aparatoj';

$GLOBALS["lang"]['digitalocean'] = 'cifereca oceano';

$GLOBALS["lang"]['does not equal'] = 'ne egalas';

$GLOBALS["lang"]['emergency'] = 'urĝa krizo';

$GLOBALS["lang"]['entra'] = 'Entra';

$GLOBALS["lang"]['equals'] = 'egalaj';

$GLOBALS["lang"]['error'] = 'eraro';

$GLOBALS["lang"]['established'] = 'establita';

$GLOBALS["lang"]['excluded'] = 'ekskluditaj';

$GLOBALS["lang"]['expired'] = 'eksvalidiĝis eksvalidiĝis';

$GLOBALS["lang"]['extreme - Without which, the organisation would fail.

very high - Functions that are essential for the organisations survival and must be restored immediately.

high - Important functions that should be restored quickly but may have a slightly longer recovery time.

medium - Functions that are necessary but can tolerate longer downtime.

low - Non-essential functions that can be delayed without significant impact.

unassigned - The default until set.'] = '— Sen tio, la organizaĵo ne malsukcesos.

Tre altaj - funkcioj kiuj estas esencaj por la organizoj supervivo kaj devas esti reestigitaj tuj.

Gravaj funkcioj kiuj devus esti reestigitaj rapide sed povas havi iomete pli longan normaligtempon.

Funkcioj kiuj estas necesaj sed povas toleri pli longe.

Ne-esencaj funkcioj kiuj povas esti prokrastitaj sen signifa efiko.

La defaŭlto ĝis aro.';

$GLOBALS["lang"]['fail'] = 'malsukcesas';

$GLOBALS["lang"]['false'] = 'falsaj falsaj';

$GLOBALS["lang"]['file'] = 'dosiero';

$GLOBALS["lang"]['firewall'] = 'Fajromuro';

$GLOBALS["lang"]['fixed'] = 'fiksita';

$GLOBALS["lang"]['floor'] = 'planko';

$GLOBALS["lang"]['front'] = 'Antaŭ fronto';

$GLOBALS["lang"]['front-left'] = 'Antaŭ-maldekstra';

$GLOBALS["lang"]['front-right'] = 'Antaŭ-dekstra';

$GLOBALS["lang"]['github'] = 'Gitub';

$GLOBALS["lang"]['google'] = 'Google Google Google';

$GLOBALS["lang"]['greater or equals'] = 'Pli grandaj aŭ egalaj';

$GLOBALS["lang"]['greater than'] = 'pli granda ol';

$GLOBALS["lang"]['group'] = 'Grupo de grupo';

$GLOBALS["lang"]['head'] = 'kapo';

$GLOBALS["lang"]['here'] = 'Ĉi tie ĉi';

$GLOBALS["lang"]['high availability'] = 'alta havebleco';

$GLOBALS["lang"]['howto'] = 'Kiel';

$GLOBALS["lang"]['ignored'] = 'ignoris ignoris';

$GLOBALS["lang"]['in'] = 'en la';

$GLOBALS["lang"]['inactive'] = 'neaktiva';

$GLOBALS["lang"]['incomplete'] = 'nekompleta nekompleta';

$GLOBALS["lang"]['info'] = 'Informaj informoj';

$GLOBALS["lang"]['int, text, bool (y/n), etc'] = 'Int, teksto, bool (y/n), ktp';

$GLOBALS["lang"]['is licensed to'] = 'estas licencita al';

$GLOBALS["lang"]['left'] = 'maldekstre';

$GLOBALS["lang"]['less or equals'] = 'malpli aŭ egalaj';

$GLOBALS["lang"]['less than'] = 'malpli ol malpli ol';

$GLOBALS["lang"]['license'] = 'licenco';

$GLOBALS["lang"]['like'] = 'kiel plaĉas kiel';

$GLOBALS["lang"]['line'] = 'Liniolinio';

$GLOBALS["lang"]['load balancing'] = 'ekvilibrigo';

$GLOBALS["lang"]['location'] = 'loko';

$GLOBALS["lang"]['managed'] = 'administris administritan';

$GLOBALS["lang"]['microsoft'] = 'Mikrosoftmo';

$GLOBALS["lang"]['mount point'] = 'montopunkto';

$GLOBALS["lang"]['network'] = 'reto';

$GLOBALS["lang"]['news'] = 'novaĵoj';

$GLOBALS["lang"]['no'] = 'Neniu';

$GLOBALS["lang"]['node'] = 'Neniu';

$GLOBALS["lang"]['none'] = 'Neniu';

$GLOBALS["lang"]['normal'] = 'normala normalo';

$GLOBALS["lang"]['not applicable'] = 'Ne uzebla';

$GLOBALS["lang"]['not in'] = 'ne en';

$GLOBALS["lang"]['not like'] = 'ne ŝatas';

$GLOBALS["lang"]['notice'] = 'rimarko';

$GLOBALS["lang"]['notification'] = 'Neification';

$GLOBALS["lang"]['okta'] = 'Okta';

$GLOBALS["lang"]['openldap'] = 'malfermado';

$GLOBALS["lang"]['optimized'] = 'Elektita';

$GLOBALS["lang"]['optionally '] = 'Laŭvola ';

$GLOBALS["lang"]['other'] = 'aliaj aliaj';

$GLOBALS["lang"]['package'] = 'pakaĵoj';

$GLOBALS["lang"]['partition'] = 'Dispartisekcio';

$GLOBALS["lang"]['pass'] = 'enirpermesilo';

$GLOBALS["lang"]['pending'] = 'depende de';

$GLOBALS["lang"]['performance'] = 'efikeco';

$GLOBALS["lang"]['performed'] = 'rezultis';

$GLOBALS["lang"]['pie'] = 'torto';

$GLOBALS["lang"]['planning'] = 'planado';

$GLOBALS["lang"]['predictable'] = 'Antaŭvidebla';

$GLOBALS["lang"]['query'] = 'query';

$GLOBALS["lang"]['rear'] = 'Malantaŭa malantaŭa';

$GLOBALS["lang"]['rear-left'] = 'Malantaŭa maldekstra';

$GLOBALS["lang"]['rear-right'] = 'malantaŭ-dekstra';

$GLOBALS["lang"]['regex'] = 'regex';

$GLOBALS["lang"]['release'] = 'liberigo';

$GLOBALS["lang"]['reserved'] = 'rezervita rezervita';

$GLOBALS["lang"]['right'] = 'dekstra rajto';

$GLOBALS["lang"]['room'] = 'ĉambro ĉambro ĉambro';

$GLOBALS["lang"]['row'] = 'Linio';

$GLOBALS["lang"]['stand-alone'] = '→ Eventoj:';

$GLOBALS["lang"]['standard'] = 'normo';

$GLOBALS["lang"]['starts with'] = 'komenciĝas per';

$GLOBALS["lang"]['storage'] = 'stokado';

$GLOBALS["lang"]['timestamp'] = 'La tempo';

$GLOBALS["lang"]['top'] = 'Plej supra pinto';

$GLOBALS["lang"]['top secret - Military / Government classification. Disclosure would cause exceptionally grave danger to national security.

secret - Military / Government classification. Disclosure would cause serious damage to national security.

confidential - Military / Government and Private Sector classification. Data that is confidential includes trade secrets, intellectual data, application programming code, and other data that could seriously affect the organization if unauthorized disclosure occurred. Data at this level would be available only to personnel in the organization whose work needs, or is directly related to, the accessed data. Access to confidential data usually requires authorization for each access.

private - Private Sector classification. Data that is private includes any information related to personnel, including human resources records, medical records, and salary information, that is used only within the organization.

sensitive - Military / Government and Private Sector classification. Data that is sensitive includes organizational financial information and requires extra measures to ensure its CIA and accuracy. Disclosure might harm national security.

public - Private Sector classification. Public data is data that is generally shared with the public and would not cause a negative impact on the organization. Examples of public data include how many people work in the organization and what products an organization manufactures or sells.

unclassified - Military / Government classification. Any information that can generally be distributed to the public without any threat to national interest.

unassigned - The default until set.'] = 'Ĉefa sekreto - Armea/registara klasifiko. Disclosure kaŭzus escepte gravan danĝeron al nacia sekureco.

Sekreto - Armea/registara klasifiko. Disclosure kaŭzus gravan difekton en nacia sekureco.

Konfidencivo - Armea/registaro kaj Private Sector-klasifiko. Datenoj kiuj estas konfidencaj inkludas komercsekretojn, intelektajn datenojn, aplikiĝoprograman kodon, kaj aliajn datenojn kiuj povis grave influi la organizon se neaŭtorizita rivelo okazis. Datenoj sur tiu nivelo estus haveblaj nur al personaro en la organizo kies laborbezonoj, aŭ estas rekte rilatitaj al, la aliritaj datenoj. Aliro al konfidencaj datenoj kutime postulas aprobon por ĉiu aliro.

Privata sektoro. Datenoj kiuj estas privataj inkludas iujn ajn informojn ligitajn al personaro, inkluzive de homarajtajj rekordoj, kuracistaj rekordoj, kaj salajroinformoj, kiu estas uzita nur ene de la organizo.

sentema - Armea/registaro kaj Privatsektora klasifiko. Datenoj kiuj estas sentemaj inkludas organizajn financajn informojn kaj postulas ekstrajn iniciatojn certigi ĝian CIA kaj precizecon. Disclosure povas damaĝi la nacian sekurecon.

Publika - privata sektoro. Publikaj datenoj estas datenoj kiuj estas ĝenerale partumitaj kun publiko kaj ne kaŭzus negativan efikon al la organizo. Ekzemploj de publikaj datenoj inkludas kiom multaj homoj laboras en la organizo kaj kion produktoj organizo produktas aŭ vendas.

Neklasifikita - Armea/registara klasifiko. Ĉiuj informoj kiuj povas ĝenerale esti distribuitaj al publiko sen iu minaco al nacia intereso.

La defaŭlto ĝis aro.';

$GLOBALS["lang"]['traffic'] = 'trafiko de trafiko';

$GLOBALS["lang"]['true'] = 'Vera vero';

$GLOBALS["lang"]['unallocated'] = 'nealirebla';

$GLOBALS["lang"]['unauthorised'] = 'neaŭtoritate';

$GLOBALS["lang"]['unknown'] = 'nekonata nekonataĵo';

$GLOBALS["lang"]['unmanaged'] = 'neadminis';

$GLOBALS["lang"]['unused'] = 'neuzata';

$GLOBALS["lang"]['update'] = 'ĝisdatigo';

$GLOBALS["lang"]['valid'] = 'valida valida';

$GLOBALS["lang"]['virtualisation'] = 'virtualigo';

$GLOBALS["lang"]['warning'] = 'averto';

$GLOBALS["lang"]['web'] = 'WEB WEB WEB WEB WEB';

$GLOBALS["lang"]['yes'] = 'jes, jes, jes';

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

