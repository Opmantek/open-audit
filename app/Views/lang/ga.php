<?php
$GLOBALS["lang"][' Default, currently '] = ' Réamhshocrú, faoi láthair ';

$GLOBALS["lang"][' If something does not work as expected, your first thing to do is check the logs.'] = ' Más rud é nach bhfuil rud éigin ag obair mar súil, tá do chéad rud a dhéanamh seiceáil na logs.';

$GLOBALS["lang"][' is now supported with a language file. To change your user to use this language, click '] = ' Tá tacaíocht anois le comhad teanga. Chun d\'úsáideoir a athrú chun an teanga seo a úsáid, cliceáil ';

$GLOBALS["lang"][' seconds'] = ' soicind beag';

$GLOBALS["lang"][', but will not need to remember a separate set of logon credentials.'] = ', ach ní bheidh gá a mheabhrú sraith ar leith de dintiúir logon.';

$GLOBALS["lang"][', of which we supply over thirty as a default set. Professional users cannot alter these, but an Enterprise user has complete customisation abilities - including creating your own.'] = ', a sholáthar againn níos mó ná tríocha mar a leagtar réamhshocraithe. Ní féidir le húsáideoirí gairmiúla iad seo a athrú, ach tá cumas saincheaptha críochnaithe ag úsáideoir Fiontraíochta - lena n-áirítear do chuid féin a chruthú.';

$GLOBALS["lang"][', you <i>must</i> be using https on your Open-AudIT server to use Entra for Auth. Please configure Apache to use <strong>https</strong> before configuring Entra for auth.'] = ', tú <i>ní mór</i> a bheith ag baint úsáide as https ar do fhreastalaí Open-AudIT a úsáid Entra do Auth. Cuir chumrú Apache a úsáid <strong>taiseachas aeir: fliuch</strong> roimh chumrú Entra le haghaidh auth.';

$GLOBALS["lang"]['. To enable this, edit the configuration item for '] = '. Chun cur ar chumas seo, in eagar an mhír chumraíocht do ';

$GLOBALS["lang"]['10 Minutes'] = 'Miontuairiscí an Choiste';

$GLOBALS["lang"]['15 Minutes'] = 'Miontuairiscí an Choiste';

$GLOBALS["lang"]['30 Minutes'] = 'Miontuairiscí an Choiste';

$GLOBALS["lang"]['5 Minutes'] = 'Miontuairiscí an Choiste';

$GLOBALS["lang"]['93 controls grouped into organizational, people, physical, and technological categories'] = '93 rialuithe grúpáilte i gcatagóirí eagraíochtúla, daoine, fisiciúil, agus teicneolaíochta';

$GLOBALS["lang"]['<br> <strong>NOTE</strong> - You are accessing this URL from the local Open-AudIT server. The downloaded script will not be able to submit when run on any other machine. If you need to audit other machines, please download the script from any remote machine, not using a browser on the Open-AudIT server itself.'] = '<br/><strong>Amharc ar gach eolas</strong> - Tá tú ag teacht ar an URL ón bhfreastalaí áitiúil Open-AudIT. Ní bheidh an script íoslódáil in ann a chur isteach nuair a reáchtáil ar aon mheaisín eile. Más gá duit a iniúchadh meaisíní eile, le do thoil íoslódáil an script ó aon mheaisín iargúlta, gan úsáid a bhaint as bhrabhsálaí ar an bhfreastalaí Open-AudIT féin.';

$GLOBALS["lang"]['<p></p>'] = '<p></p>';

$GLOBALS["lang"]['<p><strong class="text-danger">NOTE</strong> - You must have working SSH or SSH Key credentials to execute benchmarks upon a target device.</p>'] = '<p><strong class="text-danger">Amharc ar gach eolas</strong> - Ní mór duit a bheith ag obair SSH nó SSH dintiúir Eochair chun tagarmharcanna a fhorghníomhú ar gléas sprioc.</p>';

$GLOBALS["lang"]['<p><strong>Baseline</strong> - The overarching document that contains the baseline definition and the individual policy tests.<br> <br> <strong>Policies</strong> - The individual tests contained within a Baseline. Each test is for a specific item. An example would be testing for SSH version 1.2.3.<br> <br> <strong>Details</strong> - Baselines can compare netstat ports, users and software.<br> <br> <strong>Software</strong> - To compare software we check the name and version. Because version numbers are not all standardised in format, when we receive an audit result we create a new attribute called software_padded which we store in the database along with the rest of the software details for each package. For this reason, baselines using software policies will not work when run against a device that has not been audited by 1.10 (at least). Software policies can test against the version being "equal to", "greater than" or "equal to or greater than".<br> <br> <strong>Netstat Ports</strong> - Netstat Ports use a combination of port number, protocol and program. If all are present the policy passes.<br> <br> <strong>Users</strong> - Users work similar to Netstat Ports. If a user exists with a matching name, status and password details (changeable, expires, required) then the policy passes.<br> <br> </p>'] = '<p><strong>Bunaithe ar</strong> - An doiciméad uileghabhálach ina bhfuil an sainmhíniú bonnlíne agus na tástálacha beartais aonair.<br/> <br/> <strong>irl - Library Service</strong> - Na tástálacha aonair atá laistigh de bhonnlíne. Tá gach tástáil le haghaidh mír ar leith. Bheadh sampla a thástáil le haghaidh leagan SSH 1.2.3.<br/> <br/> <strong>Sonraí Teagmhála</strong> - Is féidir le Baselines a chur i gcomparáid calafoirt glanstat, úsáideoirí agus bogearraí.<br/> <br/> <strong>Bogearraí Bogearraí</strong> - Chun bogearraí a chur i gcomparáid seiceáil muid an t-ainm agus leagan. Toisc nach bhfuil uimhreacha leagan caighdeánaithe go léir i bhformáid, nuair a fhaigheann muid toradh iniúchóireachta a chruthú againn tréith nua ar a dtugtar software_padded a stóráil muid sa bhunachar sonraí chomh maith leis an gcuid eile de na sonraí bogearraí do gach pacáiste. Ar an gcúis seo, ní bheidh bunlínte ag baint úsáide as polasaithe bogearraí ag obair nuair a reáchtáiltear i gcoinne gléas nach bhfuil iniúchta ag 1.10 (ar a laghad). Is féidir le beartais bogearraí a thástáil i gcoinne an leagan a bheith "cothrom le", "níos mó ná" nó "cothrom le nó níos mó ná".<br/> <br/> <strong>Seirbhís do Chustaiméirí</strong> - Ports Netstat úsáid meascán de líon calafort, prótacal agus clár. Má tá gach duine a théann an polasaí i láthair.<br/> <br/> <strong>Úsáideoirí</strong> - Oibríonn úsáideoirí cosúil le Calafoirt Netstat. Má tá úsáideoir le ainm meaitseáil, sonraí stádas agus focal faire (athrú, éagann, ag teastáil) ansin Gabhann an polasaí.<br/> <br/> </p>';

$GLOBALS["lang"]['<p>A location is a physical address that can have devices associated with it.<br> <br>You can assign it coordinates (lat/long) and if there are devices assigned, the location will appear on the Open-AudIT Enterprise map.<br> <br></p>'] = '<p>Is seoladh fisiceach é suíomh a d\'fhéadfadh feistí a bhaineann leis.<br/> <br/>Is féidir leat a shannadh comhordanáidí (lat / fada) agus má tá feistí a shanntar, beidh an suíomh le feiceáil ar an léarscáil Fiontraíochta Open-AudIT.<br/> <br/></p>';

$GLOBALS["lang"]['<p>A network is derived from discovery entries and device attributes.<br> <br></p>'] = '<p>Tá líonra a dhíorthaítear ó iontrálacha fionnachtana agus tréithe gléas.<br/> <br/></p>';

$GLOBALS["lang"]['<p>A summary will display a list of items, grouped by the distinct values of the attribute specified by the <code>table</code> and <code>column</code> attributes.<br> <br>When a summary is executed, the result will be a list of distinct values for that <code>table</code> and <code>column</code>. There will be links on the values that allow the user to see the matching devices.<br> <br>If the attribute of <code>extra_columns</code> is populated, the resulting page will contain these columns in addition to the standard device columns.<br> <br></p>'] = '<p>Beidh achoimre a thaispeáint liosta na n-ítimí, grúpáilte ag na luachanna ar leith ar an tréith atá sonraithe ag an <code>table</code> agus <code>column</code> tréithe.<br/> <br/>Nuair a dhéantar achoimre a fhorghníomhú, beidh an toradh ina liosta de luachanna ar leith don <code>table</code> agus <code>column</code>. Beidh naisc ar na luachanna a chuireann ar chumas an t-úsáideoir a fheiceáil ar na feistí meaitseáil.<br/> <br/>Má tá an tréith <code>extra_columns</code> Tá daonra, beidh an leathanach mar thoradh ar na colúin seo chomh maith leis na colúin gléas caighdeánach.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Agents let you audit PCs without a discovery. Install the agent and it will check-in with the server each day and audit itself. It does not matter if your computers are firewalled, audit data will still appear in Open-AudIT.</p><p>When testing <strong>if</strong> an agent should perform actions, all three tests must pass (if the test is set). <strong>Then</strong> the actions are taken.</p>'] = '<p>Gníomhairí lig tú ríomhairí pearsanta a iniúchadh gan fionnachtain. Suiteáil an gníomhaire agus beidh sé seiceáil-i leis an bhfreastalaí gach lá agus iniúchadh féin. Ní chuireann sé cuma má tá do ríomhairí firewalled, beidh sonraí iniúchóireachta le feiceáil fós i Open-AudIT.</p><p>Nuair a thástáil <strong>más rud é</strong> ba cheart do ghníomhaire gníomhartha a dhéanamh, ní mór do gach trí thástáil pas a fháil (má tá an tástáil leagtha síos). <strong>Ansin</strong> na gníomhartha a glacadh.</p>';

$GLOBALS["lang"]['<p>Applications are defined by you, the user and stored for Open-AudIT to use and associate with devices.<br> <br></p>'] = '<p>Tá iarratais sainithe ag tú, an t-úsáideoir agus a stóráil le haghaidh Open-AudIT a úsáid agus a chomhlachú le feistí.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Attributes are stored for Open-AudIT to use for particular fields.</p>'] = '<p>Tá comharthaí stóráilte le haghaidh Open-AudIT a úsáid le haghaidh réimsí áirithe.</p>';

$GLOBALS["lang"]['<p>Being able to determine which machines are configured the same is a major part of systems administration and auditing &ndash; and now reporting on that will be made simple and automated. Once you define your baseline it will automatically run against a set of devices on a predetermined schedule. The output of these executed baselines will be available for web viewing, importing into a third party system or even as a printed report.<br> <br> Baselines enable you to combine audit data with a set of attributes you have previously defined (your baseline) to determine compliance of devices.<br> <br> For example - you might create a baseline from a device running Centos 6 which acts as one of your apache servers in a cluster. You know this particular server is configured just the way you want it but you are unsure if other servers in the cluster are configured exactly the same. Baselines enables you to determine this.<br> <br> </p>'] = '<p>Bheith in ann a chinneadh a meaisíní atá cumraithe mar an gcéanna is cuid mhór de riarachán córais agus iniúchóireacht - agus anois tuairisciú ar a dhéanamh simplí agus uathoibrithe. Nuair a bheidh tú a shainiú do baseline beidh sé ar siúl go huathoibríoch i gcoinne sraith de feistí ar sceideal réamhshocraithe. Beidh an t-aschur de na bunlínte chun báis ar fáil le haghaidh féachana gréasáin, allmhairiú isteach i gcóras tríú páirtí nó fiú mar thuairisc chlóite.<br/> <br/> Cuireann Baselines ar chumas tú sonraí iniúchóireachta a chur le chéile le sraith tréithe atá sainithe agat roimhe seo (do bunlíne) chun comhlíonadh feistí a chinneadh.<br/> <br/> Mar shampla - d\'fhéadfá a chruthú bunlíne ó gléas ag rith Centos 6 a ghníomhaíonn mar cheann de do freastalaithe apache i mbraisle. Tá a fhios agat go bhfuil an freastalaí ar leith cumraithe díreach ar an mbealach is mian leat é ach tá tú cinnte má freastalaithe eile sa bhraisle atá cumraithe go díreach mar an gcéanna. Cuireann Baselines ar chumas tú a chinneadh seo.<br/> <br/> </p>';

$GLOBALS["lang"]['<p>Clusters are stored in Open-AudIT to associate devices to better record, manage and estimate licensing costs.<br> <br></p>'] = '<p>Stóráiltear cnuasaigh in Open-AudIT chun feistí a cheangal chun costais cheadúnúcháin a thaifeadadh, a bhainistiú agus a mheas níos fearr.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Components is a generic term used for the tables that store the attributes for a device. Those tables are: access_point, arp, bios, certificate, cli_config, disk, dns, file, ip, license, log, memory, module, monitor, motherboard, netstat, network, nmap, optical, pagefile, partition, policy, print_queue, processor, radio, route, san, scsi, server, server_item, service, share, software, software_key, sound, task, usb, user, user_group, variable, video, vm, windows.</p><p> In addition we class the following tables also as device related: application, attachment, cluster, credential, image.</p>'] = '<p>Is Comhpháirteanna téarma cineálach a úsáidtear le haghaidh na táblaí a stóráil na tréithe le haghaidh gléas. Tá na táblaí: access_point, arp, bios, deimhniú, cli_config, diosca, dns, comhad, ip, ceadúnas, logáil, cuimhne, modúl, monatóireacht a dhéanamh, motherboard, netstat, líonra, nmap, optúil, comhaid leathanach, laindéal, polasaí, print_queue, próiseálaí, raidió, bealach, san, scsi, freastalaí, freastalaí_item, seirbhís, roinnt, bogearraí, bogearraí_key, fuaim, tasc, usb, úsáideoir_group, athróg, físeán, vm, fuinneoga.</p><p> Ina theannta sin rang muid na táblaí seo a leanas chomh maith mar a bhaineann gléas: iarratas, ceangaltán, braisle, dintiúir, íomhá.</p>';

$GLOBALS["lang"]['<p>Credentials are encrypted when stored in the database.<br> <br>When a Discovery is run, a device has its credentials retrieved and tested for connection first (from the <code>credential</code> table). If these fail, then credentials associated with the given Org <code>credentials.org_id</code> is also tested against the device. Working credentials are stored at an individual device level in the credential table (note - no "s" in the table name).<br> <br>SSH keys are tested before SSH username / password. When testing SSH, credentials will also be marked as working with sudo or being root.<br> <br>For ease of use, Windows passwords should not contain a single or double quote. This is a remote WMI limitation, not an Open-AudIT limitation.<br> <br></p>'] = '<p>Credentials criptithe nuair a stóráil sa bhunachar sonraí.<br/> <br/>Nuair a Discovery rith, tá gléas a dintiúir aisghabháil agus a thástáil le haghaidh nasc ar dtús (ón <code>credential</code> tábla). Má theipeann orthu sin, ansin dintiúir a bhaineann leis an Org a tugadh <code>credentials.org_id</code> a thástáil freisin i gcoinne an gléas. Déantar dintiúir oibre a stóráil ag leibhéal feiste aonair sa tábla dintiúir (nóta - aon "s" in ainm an tábla).<br/> <br/>eochracha SSH a thástáil roimh ainm úsáideora SSH / focal faire. Nuair a thástáil SSH, beidh dintiúir a mharcáil freisin mar obair le sudo nó a bheith fréimhe.<br/> <br/>Chun éasca le húsáid, níor chóir go mbeadh ceanglófar amháin nó dúbailte ag pasfhocail Windows. Is é seo an teorainn WMI iargúlta, Ní teorann Oscailte-AudIT.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Credentials are used to access devices.<br> <br>Configuring credentials should be one of the first things you do after installing Open-AudIT.<br> <br></p>'] = '<p>Úsáidtear dintiúir chun feistí a rochtain.<br/> <br/>Ba chóir go mbeadh dintiúir ag teacht le chéile ar cheann de na chéad rudaí a dhéanann tú tar éis a shuiteáil Open-AudIT.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Define your racks and assign devices into their positions. You already have your devices in Open-AudIT and you know your locations. Open-AudIT extends this to allow you to create a rack and assign devices to it. Open-AudIT will even provide a visualisation of the rack and the devices contained within. If you provide a device picture, that picture will be used in the visualisation. You can look at the rack on the screen and see the same items you would see if you were standing in front of it.<br> <br></p>'] = '<p>Sainmhínigh do racaí agus feistí a shannadh isteach ina seasaimh. Tá tú cheana féin do feistí i Open-AudIT agus tá a fhios agat do áiteanna. Open-AudIT Síneann sé seo chun ligean duit a chruthú raca agus feistí a shannadh dó. Beidh Open-AudIT ar fáil fiú amharcléiriú ar an raca agus na feistí atá laistigh. Má sholáthraíonn tú pictiúr feiste, úsáidfear an pictiúr sin san amharcléiriú. Is féidir leat breathnú ar an raca ar an scáileán agus a fheiceáil na míreanna céanna a bheadh tú a fheiceáil má bhí tú ag seasamh os comhair é.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Devices on your network need to be managed. But how do you keep your records up to date? A spreadsheet - defintley not. That will be out of date in hours, if not days. Why manually try to keep up. Use Open-AudIT to automatically scan your networks and record your devices - manufacturer, model, serial and more than 100 other attributes. Full lists of software, services, disks, open ports, users, etc. Automatically see if an attribute has been added, removed or changed.<br> <br>Once Open-AudIT is setup, you can sit back and relax. Have change reports emailed to you on a schedule, for example - what new devices did we discover this week? What new software was installed this week? Were there any hardware changes last month?<br> <br>Expand on the stored fields easily with your own custom attributes.<br> <br>Even add devices that are not connected to your network or those devices your Open-AudIT server cannot reach.<br> <br>Computers, switches, routers, printers or any other device on your network - Open-AudIT can audit them all.<br> <br></p>'] = '<p>Ní mór feistí ar do líonra a bhainistiú. Ach conas a choinníonn tú do thaifid suas go dtí seo? Bileog scaipthe - gan a bheith cinnte. Beidh sé sin as dáta in uaireanta, más rud é nach laethanta. Cén fáth iarracht de láimh a choinneáil suas. Bain úsáid as Open-AudIT a scanadh go huathoibríoch do líonraí agus taifead do feistí - monaróir, múnla, sraitheach agus níos mó ná 100 tréithe eile. Liostaí iomlána de bhogearraí, seirbhísí, dioscaí, calafoirt oscailte, úsáideoirí, etc. Go huathoibríoch a fheiceáil má tá tréith curtha leis, a bhaint nó a athrú.<br/> <br/>Nuair a bhíonn Open-AudIT thus, is féidir leat suí ar ais agus scíth a ligean. An bhfuil tuarascálacha athrú ríomhphost a thabhairt duit ar sceideal, mar shampla - cad iad na feistí nua a fuair muid amach an tseachtain seo? Cad iad na bogearraí nua suiteáilte an tseachtain seo? An raibh aon athruithe crua-earraí an mhí seo caite?<br/> <br/>Leathnaigh ar na réimsí a stóráil go héasca le do tréithe saincheaptha féin.<br/> <br/>Fiú feistí nach bhfuil ceangailte le do líonra nó na feistí nach féidir le do fhreastalaí Open-AudIT teacht.<br/> <br/>Ríomhairí, lasca, ródairí, printéirí nó aon fheiste eile ar do líonra - Is féidir Open-AudIT iniúchadh a dhéanamh orthu go léir.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Discoveries are at the very heart of what Open-AudIT does.<br> <br>How else would you know "What is on my network?"<br> <br>Discoveries are prepared data items that enable you to run a discovery upon a network in a single click, without entering the details of that network each and every time.<br> <br></p>'] = '<p>Tá fionnachtana ag croílár an méid a dhéanann Open-AudIT.<br/> <br/>Conas eile a bheadh a fhios agat "Cad é ar mo líonra?"<br/> <br/>Discoveries ullmhaithe míreanna sonraí a chuireann ar chumas tú a reáchtáil fionnachtain ar líonra i cliceáil amháin, gan dul isteach ar na sonraí ar an líonra gach agus gach uair.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Discovery Options are a global setting changed in the <a href="../configuration?configuration.name=discovery_default_scan_option">configuration</a>. If you have an Open-AudIT Enterprise license these are settable per discovery and in addition futher customizable as required. Discovery Options are as follows (including an indicitave time to scan an individual IP):<br/><br><strong>UltraFast</strong>: <i>1 second</i>. Scan only the ports that Open-AudIT needs to use to talk to the device and detect an IOS device (WMI, SSH, SNMP, Apple Sync). An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is not considered open. Device must respond to an Nmap ping. Use aggressive timing.<br><br/><strong>SuperFast</strong>: <i>5 seconds</i>. Scan the top 10 TCP and UDP ports, as well as port 62078 (Apple IOS detection). An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is not considered open. Device must respond to an Nmap ping. Use aggressive timing.<br/><br/><strong>Fast</strong>: <i>40 seconds</i>. Scan the top 100 TCP and UDP ports, as well as port 62078 (Apple IOS detection). An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is not considered open. Device must respond to an Nmap ping. Use aggressive timing.<br/><br/><strong>Medium (Classic)</strong>: <i>90 seconds</i>. As close to a traditional Open-AudIT scan as we can make it. Scan the top 1000 TCP ports, as well as 62078 (Apple IOS detection) and UDP 161 (SNMP). An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is considered open (and will trigger device detection). Devices are scanned regardless of a response to an Nmap ping. Use aggressive timing.<br/><br/><strong>Medium</strong>: <i>100 seconds</i>. Scan the top 1000 TCP and top 100 UDP ports, as well as port 62078 (Apple IOS detection). An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is not considered open. Device must respond to an Nmap ping. Use aggressive timing.<br/><br/><strong>Slow</strong>: <i>4 minutes</i>. Scan the top 1000 TCP and top 100 UDP ports, as well as port 62078 (Apple IOS detection). Version detection enabled. An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is considered open (and will trigger device detection). Device must respond to an Nmap ping. Use normal timing.<br/><br/><strong>UltraSlow</strong>: <i>20 minutes</i>. Not recommended. Scan the top 1000 TCP and UDP ports, as well as port 62078 (Apple IOS detection). Devices are scanned regardless of a response to an Nmap ping. Version detection enabled. An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is considered open (and will trigger device detection). Use polite timing.<br/><br/><strong>Custom</strong>: <i>Unknown time</i>. When options other than as set by a standard discovery preset are altered.<br><br></p>'] = '<p>riachtanais uisce: measartha Roghanna Tá suíomh domhanda athrú sa <a href="../configuration?configuration.name=discovery_default_scan_option">chumraíocht chumraíocht</a>. Má tá ceadúnas Fiontraíochta Open-AudIT agat tá siad seo in aghaidh an fhionnachtain agus ina theannta sin futher customizable de réir mar is gá. riachtanais uisce: measartha Seo a leanas na roghanna (lena n-áirítear am indicitave chun IP aonair a scanadh):<br/><br/><strong>Taithí ghairmiúil</strong>: <i>1 dara</i>. Scan ach na calafoirt gur gá Open-AudIT a úsáid chun labhairt leis an gléas agus a bhrath gléas IOS (WMI, SSH, SNMP, Apple Sync). An bhfuil <code>open|filtered</code> Meastar go bhfuil calafort oscailte. Amharc ar gach eolas <code>filtered</code> Ní mheastar go bhfuil calafort oscailte. Ní mór don ghléas freagra a thabhairt ar ping Nmap. Úsáid uainiú ionsaitheach.<br/><br><strong>Caitheamh Aimsire</strong>: <i>5 soicind</i>. Scan an barr 10 TCP agus calafoirt UDP, chomh maith le calafort 62078 (Apple IOS bhrath). An bhfuil <code>open|filtered</code> Meastar go bhfuil calafort oscailte. Amharc ar gach eolas <code>filtered</code> Ní mheastar go bhfuil calafort oscailte. Ní mór don ghléas freagra a thabhairt ar ping Nmap. Úsáid uainiú ionsaitheach.<br><br/><strong>Go tapa</strong>: <i>40 soicind</i>. Scan an barr 100 TCP agus UDP calafoirt, chomh maith le calafort 62078 (Apple IOS bhrath). An bhfuil <code>open|filtered</code> Meastar go bhfuil calafort oscailte. Amharc ar gach eolas <code>filtered</code> Ní mheastar go bhfuil calafort oscailte. Ní mór don ghléas freagra a thabhairt ar ping Nmap. Úsáid uainiú ionsaitheach.<br/><br/><strong>Meánach (Classic)</strong>: <i>90 soicind</i>. Mar gar do scanadh traidisiúnta Oscailte-AudIT mar is féidir linn é a dhéanamh. Scan an barr 1000 calafoirt TCP, chomh maith le 62078 (Apple IOS bhrath) agus UDP 161 (SNMP). An bhfuil <code>open|filtered</code> Meastar go bhfuil calafort oscailte. Amharc ar gach eolas <code>filtered</code> Meastar go bhfuil calafort oscailte (agus beidh a bhrath gléas a spreagadh). Gléasanna scanadh beag beann ar fhreagra ar ping Nmap. Úsáid uainiú ionsaitheach.<br/><br/><strong>Meán Fómhair 2014</strong>: <i>100 soicind</i>. Scan an barr 1000 TCP agus barr 100 calafoirt UDP, chomh maith le calafort 62078 (Apple IOS bhrath). An bhfuil <code>open|filtered</code> Meastar go bhfuil calafort oscailte. Amharc ar gach eolas <code>filtered</code> Ní mheastar go bhfuil calafort oscailte. Ní mór don ghléas freagra a thabhairt ar ping Nmap. Úsáid uainiú ionsaitheach.<br/><br/><strong>Sreabhadh Sreabhadh</strong>: <i>4 nóiméad</i>. Scan an barr 1000 TCP agus barr 100 calafoirt UDP, chomh maith le calafort 62078 (Apple IOS bhrath). Leagan bhrath ar chumas. An bhfuil <code>open|filtered</code> Meastar go bhfuil calafort oscailte. Amharc ar gach eolas <code>filtered</code> Meastar go bhfuil calafort oscailte (agus beidh a bhrath gléas a spreagadh). Ní mór don ghléas freagra a thabhairt ar ping Nmap. Úsáid uainiú gnáth.<br/><br/><strong>Uisce agus Séarachas</strong>: <i>20 nóiméad</i>. Ní mholtar. Scan an barr 1000 TCP agus calafoirt UDP, chomh maith le calafort 62078 (Apple IOS bhrath). Gléasanna scanadh beag beann ar fhreagra ar ping Nmap. Leagan bhrath ar chumas. An bhfuil <code>open|filtered</code> Meastar go bhfuil calafort oscailte. Amharc ar gach eolas <code>filtered</code> Meastar go bhfuil calafort oscailte (agus beidh a bhrath gléas a spreagadh). Úsáid uainiú dea-bhéasach.<br/><br/><strong>Saincheaptha Saincheaptha</strong>: <i>Am ar eolas</i>. Nuair roghanna eile seachas mar atá leagtha síos ag réamhshocraithe fionnachtana caighdeánach a athrú.<br/><br/></br></br></p>';

$GLOBALS["lang"]['<p>Groups are used as simple lists of devices that match the required conditions. If requested using JSON they return a list of <code>devices.id</code> only. If requested using the web interface, they return the standard column attribute list.<br> <br></p>'] = '<p>Úsáidtear grúpaí mar liostaí simplí feistí a mheaitseáil leis na coinníollacha is gá. Má iarrtar ag baint úsáide as JSON siad ar ais liosta de <code>devices.id</code> ach amháin. Má iarrtar ort an comhéadan gréasáin a úsáid, filleann siad an liosta tréith colún caighdeánach.<br/> <br/></p>';

$GLOBALS["lang"]['<p>If the user logging on to Open-AudIT does not have the access to search LDAP (and you are using OpenLDAP), you can use another account which does have this access. Use the <code>ldap_dn_account</code> and <code>ldap_dn_password</code> to configure this.<br> <br><strong>Helpful Documentation</strong><br> <br>
        <a href="/index.php/auth/help">General Auth Help</a><br> <br>
        <a href="/index.php/faq?name=Using Entra for Auth">Using Entra for Auth</a><br> <br>
        <a href="/index.php/faq?name=Using OKTA for Auth">Using OKTA for Auth</a><br> <br>
        <a href="/index.php/faq?name=Troubleshooting LDAP Logins">Troubleshooting LDAP Logins</a><br> <br>
        <a href="/index.php/faq?name=Users, Roles and Orgs">Users, Roles and Orgs</a><br> <br></p>'] = '<p>Más rud é nach bhfuil rochtain ag an úsáideoir logáil isteach ar Open-AudIT ar LDAP cuardaigh (agus go bhfuil tú ag baint úsáide as OpenLDAP), is féidir leat cuntas eile a úsáid a bhfuil an rochtain seo aige. Úsáid an <code>ldap_dn_account</code> agus <code>ldap_dn_password</code> a chumrú seo.<br/> <br/><strong>Cáipéis Chabhrach</strong><br/> <br/><a href="/index.php/auth/help">Cúnamh ginearálta</a><br/> <br/><a href="/index.php/faq?name=Using Entra for Auth">Ag baint úsáide as Entra do Auth</a><br/> <br/><a href="/index.php/faq?name=Using OKTA for Auth">Ag baint úsáide as OKTA do Auth</a><br/> <br/><a href="/index.php/faq?name=Troubleshooting LDAP Logins">Fabhtcheartú LDAP Logins</a><br/> <br/><a href="/index.php/faq?name=Users, Roles and Orgs">Úsáideoirí, Róil agus Orgs</a><br/> <br/></p>';

$GLOBALS["lang"]['<p>If you add a device type, to display the associated icon you will have to manually copy the .svg formatted file to the directory:<br><em>Linux</em>:/usr/local/open-audit/public/device_images<br><em>Windows</em>: c:\xampp\htdocs\open-audit\device_images<br> <br>If you add a location type, to display the associated icon you will have to manually copy the 32x32px icon to the directory:<br><em>Linux</em>:/usr/local/open-audit/public/images/map_icons<br><em>Windows</em>: c:\xampp\htdocs\open-audit\images\map_icons</p><p>When the <i>resource</i> is a <code>device</code>, valid <i>types</i> are: <code>class</code>, <code>environment</code>, <code>status</code> and <code>type</code>. If the <i>resource</i> is <code>locations</code> or <code>org</code> the only valid <i>type</i> is <code>type</code>. If the <i>resource</i> is a <code>query</code> the only valid <i>type</i> is <code>menu_category</code>.</p>'] = '<p>Má chuireann tú cineál gléas, a thaispeáint ar an deilbhín a bhaineann beidh ort a chóipeáil de láimh an .svg comhad formáidithe chuig an eolaire:<br/><em>Linux</em>:/usr/local/open-audit/public/device_images<br/><em>Windows Windows Windows</em>: c: Ghnóthú &amp; Athchúrsáil<br/> <br/>Má chuireann tú cineál suíomh, a thaispeáint ar an deilbhín a bhaineann beidh ort a chóipeáil de láimh an deilbhín 32x32px leis an eolaire:<br/><em>Linux</em>:/usr/local/open-audit/public/images/map_icons<br/><em>Windows Windows Windows</em>: c:\xampp\htdocs\\'open-audit\images\map_icons</p><p>Nuair a bheidh an <i>Eochairfhocal resource</i> Is maith liom é <code>device</code>, bailí <i>cineálacha cineálacha</i> Tá: <code>class</code>, <code>environment</code>, <code>status</code> agus <code>type</code>. Má tá an <i>Eochairfhocal resource</i> Is maith liom <code>locations</code> nó <code>org</code> an t-aon bailí <i>cineál gas: in airde</i> Is maith liom <code>type</code>. Má tá an <i>Eochairfhocal resource</i> Is maith liom é <code>query</code> an t-aon bailí <i>cineál gas: in airde</i> Is maith liom <code>menu_category</code>.</p>';

$GLOBALS["lang"]['<p>If you intend to completely audit your cloud machines, do not forget you will also need those credentials saved in Open-AudIT.</p><p>Make sure you allow the correct ports if you are using Microsoft Azure (22 for SSH, etc). Check your Virtual Machine -> Networking rules.<br> <br></p>'] = '<p>Má tá sé ar intinn agat a iniúchadh go hiomlán do meaisíní scamall, ná déan dearmad go mbeidh ort freisin na dintiúir a shábháil i Open-AudIT.</p><p>Bí cinnte go gceadaíonn tú na calafoirt cheart má tá tú ag baint úsáide as Microsoft Azure (22 do SSH, etc. Seiceáil do Meaisín Fíorúil - ^ Rialacha líonraithe.<br/> <br/></p>';

$GLOBALS["lang"]['<p>If you select a List type, the "values" field will be enabled. You should put a comma separated list of selectable values here. These will display in a dropdown box whenever the field is edited.<br> <br>Like most other attributes, Fields can be bulk edited. Use the Bulk Edit function as you normally would and you will see the Fields are available for input.<br> <br>View the device details screen, open the section containing the field and (if you have sufficient access) you can click on the field value to edit it.<br> <br></p>'] = '<p>Má roghnaíonn tú cineál Liosta, beidh an "luachanna" réimse a chumasú. Ba chóir duit liosta scartha de luachanna inroghnaithe a chur anseo. Beidh siad seo a thaispeáint i mbosca anuas aon uair a bhfuil an réimse in eagar.<br/> <br/>Cosúil le tréithe is mó eile, is féidir le Réimsí a chur in eagar ar an mórchóir. Bain úsáid as an fheidhm Bulk Edit mar a bheadh tú de ghnáth agus feicfidh tú go bhfuil na Réimsí ar fáil le haghaidh ionchur.<br/> <br/>Féach ar an scáileán sonraí gléas, oscailt an chuid ina bhfuil an réimse agus (má tá tú rochtain leordhóthanach) is féidir leat cliceáil ar an luach réimse a chur in eagar air.<br/> <br/></p>';

$GLOBALS["lang"]['<p>In the ever-changing world of computer security where new vulnerabilities are being discovered and patched every day, enforcing security compliance must be a continuous process. It also needs to include a way to make adjustments to policies, as well as periodic assessment and risk monitoring. The OpenSCAP ecosystem provides tools and customizable policies for a quick, cost-effective and flexible implementation of these processes.</p>'] = '<p>Sa domhan shíorathrú slándála ríomhaire áit a bhfuil leochaileachtaí nua á fhionnadh agus patched gach lá, Ní mór a chur i bhfeidhm comhlíonadh slándála a bheith ina phróiseas leanúnach. Ní mór bealach a chur san áireamh freisin chun coigeartuithe a dhéanamh ar bheartais, chomh maith le measúnú tréimhsiúil agus faireachán riosca. Soláthraíonn an éiceachóras OpenSCAP uirlisí agus beartais customizable le haghaidh chur i bhfeidhm tapa, éifeachtach ó thaobh costais agus solúbtha de na próisis.</p>';

$GLOBALS["lang"]['<p>Integrations allow you to setup device selection and schedules for Open-AudIT to talk to external systems.<br> <br></p>'] = '<p>Ceadaíonn Comhtháthú leat a roghnú gléas thus agus sceidil do Open-AudIT chun labhairt le córais seachtracha.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Microsoft Windows desktop systems have network limitations that may impact the performance of Open-AudIT. The TCP/IP stack limits the number of simultaneous incomplete outbound TCP connection attempts. After the limit is reached, subsequent connection attempts are put in a queue and will be resolved at a fixed rate (10 per second). If too many enter the queue, they may be dropped. And finally, Apache will be restarted by the OS. For this reason, installing Open-AudIT on a Windows desktop operating system is not supported.<br><br>There is nothing wrong with the Open-AudIT code, nor can we do anything to address this issue on Windows client machines.'] = '<p>Microsoft Microsoft Tá teorainneacha líonra ag córais deisce Windows a d\'fhéadfadh tionchar a imirt ar fheidhmíocht Open-AudIT. An TCP / IP Stack teorainneacha an líon comhuaineach neamhiomlán iarrachtaí nasc TCP outbound. Tar éis an teorainn bainte amach, iarrachtaí nasc ina dhiaidh sin a chur i scuaine agus beidh réiteach ag ráta seasta (10 in aghaidh an dara). Má tá an iomarca dul isteach sa scuaine, is féidir iad a thit. Agus ar deireadh, beidh Apache atosú ag an OS. Ar an gcúis seo, ní thacaítear le suiteáil Open-AudIT ar chóras oibriúcháin deisce Windows.<br/><br/>Níl aon rud cearr leis an cód Open-AudIT, ná ní féidir linn aon rud a dhéanamh chun aghaidh a thabhairt ar an tsaincheist seo ar mheaisíní cliant Windows.</p>';

$GLOBALS["lang"]['<p>Nmap timing details are found on the bottom of this linked page <a href="https://nmap.org/book/man-performance.html" target="_blank">https://nmap.org/book/man-performance.html</a>. From that page:<br> <br><em>If you are on a decent broadband or ethernet connection, I would recommend always using -T4 (Aggressive). Some people love -T5 (Insane) though it is too aggressive for my taste. People sometimes specify -T2 (Polite) because they think it is less likely to crash hosts or because they consider themselves to be polite in general. They often do not realize just how slow -T2 really is. Their scan may take ten times longer than a default scan. Machine crashes and bandwidth problems are rare with the default timing options -T3 (Normal) and so I normally recommend that for cautious scanners. Omitting version detection is far more effective than playing with timing values at reducing these problems.</em><footer>Gordon <i>Fyodor</i> Lyon</footer><br> <br></p>'] = '<p>Nmap sonraí uainiú fáil ar bun an leathanach nasctha <a href="https://nmap.org/book/man-performance.html" target="_blank">https://nmap.org / leabhar / fear-fheidhmíocht.html</a>. Ón leathanach sin:<br/> <br/><em>Má tá tú ar leathanbhanda réasúnta nó nasc ethernet, ba mhaith liom a mholadh i gcónaí ag baint úsáide as -T4 (Aggressive). Is breá le roinnt daoine -T5 (Insane) cé go bhfuil sé ró-ionsaitheach le haghaidh mo blas. Daoine a shonrú uaireanta -T2 (Polite) mar a cheapann siad go bhfuil sé níos lú seans a tuairteanna hóstach nó mar a mheasann siad iad féin a bheith dea-bhéasach i gcoitinne. Is minic nach dtuigeann siad cé chomh mall -T2 i ndáiríre. Is féidir a scanadh a ghlacadh deich n-uaire níos faide ná scanadh réamhshocraithe. Tá tuairteanna meaisín agus fadhbanna bandaleithead annamh leis na roghanna uainiú réamhshocraithe -T3 (Normal) agus mar sin a mholadh de ghnáth go do scanóirí aireach. Tá a bhrath leagan a fhágáil i bhfad níos éifeachtaí ná ag imirt le luachanna uainiú ag laghdú na fadhbanna.</em><footer>Gordon <i>Bréagach</i> Féach ar Léarscáileanna</footer><br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT can be configured to use different methods to authenticate a user and in addition, to create a user account using assigned roles and orgs based on group membership.<br> <br></p>'] = '<p>Is féidir Open-AudIT a chumrú chun modhanna éagsúla a úsáid chun úsáideoir a fhíordheimhniú agus ina theannta sin, cuntas úsáideora a chruthú ag baint úsáide as róil sannta agus orgs bunaithe ar bhallraíocht grúpa.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT can retrieve details about a file or directory of files and monitor these files for changes as per other attributes in the Open-AudIT database.<br> <br>This feature works out of the box for Linux Open-AudIT servers, but needs a change to the service account name under a Windows Open-AudIT server.<br> <br>Supported clients are Windows and Linux.<br> <br></p>'] = '<p>Amharc ar gach eolas Is féidir TF sonraí a aisghabháil faoi chomhad nó eolaire de chomhaid agus monatóireacht a dhéanamh ar na comhaid le haghaidh athruithe de réir tréithe eile sa bhunachar sonraí Open-AudIT.<br/> <br/>Oibríonn an ghné seo as an mbosca le haghaidh freastalaithe Open-AudIT Linux, ach ní mór athrú a dhéanamh ar ainm an chuntais seirbhíse faoi fhreastalaí Windows Open-AudIT.<br/> <br/>Tá cliaint tacaíocht Windows agus Linux.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT can retrieve details about a file, ask the native package manager if they are known to it and monitor these files for changes as per other attributes in the Open-AudIT database.<br> <br>Supported clients are Linux only.<br> <br></p>'] = '<p>Amharc ar gach eolas Is féidir TF sonraí a aisghabháil faoi chomhad, a iarraidh ar an mbainisteoir pacáiste dúchais má tá siad ar eolas dó agus monatóireacht a dhéanamh ar na comhaid le haghaidh athruithe de réir tréithe eile sa bhunachar sonraí Open-AudIT.<br/> <br/>Tá cliaint tacaíocht Linux amháin.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT can store information in custom fields that are associated with each device.<br> <br>Once an Additional Field has been created it can be used in queries and groups just like any other attribute in the database.<br> <br></p>'] = '<p>Amharc ar gach eolas Is féidir TF faisnéis a stóráil i réimsí saincheaptha a bhaineann le gach feiste.<br/> <br/>Nuair a bheidh Réimse Breise cruthaithe is féidir é a úsáid i ceisteanna agus grúpaí díreach cosúil le aon tréith eile sa bhunachar sonraí.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT comes with many queries inbuilt. If you require a specific query and none of the pre-packaged queries fit your needs, it is quite easy to create a new one and load it into Open-AudIT for running.<br> <br></p>'] = '<p>Tagann Open-AudIT le go leor ceisteanna inbuilt. Má éilíonn tú ceist ar leith agus aon cheann de na ceisteanna réamhphacáistithe oiriúnach do riachtanais, tá sé éasca go leor a chruthú ceann nua agus é a luchtú isteach Open-AudIT do reáchtáil.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT comes with many summaries inbuilt. If you require a specific summary and none of the pre-packaged summaries fit your needs, it is quite easy to create a new one and load it into Open-AudIT for running.<br> <br></p>'] = '<p>Tagann Open-AudIT le go leor achoimrí inbuilt. Má theastaíonn achoimre ar leith agus aon cheann de na hachoimrí réamhphacáistithe oiriúnach do chuid riachtanas, tá sé éasca go leor ceann nua a chruthú agus é a luchtú isteach i Open-AudIT do reáchtáil.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT is supported by FirstWave with an amazing level of support. If you prefer an active community of support givers, theres that as well. Where else can you talk directly to the developers and get a response within 24 hours? Just try that with other products! Amazing support. Full stop. You need support, we provide support. No ifs or buts. Great support. Period.<br> <br></p>'] = '<p>Open-AudIT tacaíocht ag FirstWave le leibhéal iontach tacaíochta. Más fearr leat pobal gníomhach de lucht tacaíochta, tá go chomh maith. Cá háit eile is féidir leat labhairt go díreach leis na forbróirí agus freagra a fháil laistigh de 24 uair an chloig? Just a iarracht go bhfuil le táirgí eile! Tacaíocht iontach. Stop iomlán. Teastaíonn tacaíocht uait, cuirimid tacaíocht ar fáil. Uimh. Tacaíocht mhór. Tréimhse.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT provides multi-tenancy out of the box!<br> <br>Orgs (organisations) in Open-AudIT are a key item. A user has a primary Org as well as a list of Orgs they can access. A user combines this with a list of assigned "Roles" that define what actions they can take on items assigned to the Orgs they have access to. The combination of a users "orgs" and "roles" define what they can and cannot do within Open-AudIT.<br> <br>Most items in Open-AudIT are assigned to an Org. Devices, Locations, Networks, etc.<br> <br>Orgs can have child Orgs. Think of an organisational chart (tree) structure. If a user has access to a specific Org, they also have access to that Orgs descendants. For more information, see this <a href="/index.php/faq?name=Users, Roles and Orgs">FAQ</a>.</p>'] = '<p>Soláthraíonn Open-AudIT il-tionóntacht as an mbosca!<br/> <br/>Is mír thábhachtach iad Orgs (eagraíochtaí) in Open-AudIT. Tá úsáideoir Org bunscoile chomh maith le liosta de Orgs féidir leo rochtain. Comhcheanglaíonn úsáideoir seo le liosta de "Roles" a shanntar a shainiú cad iad na gníomhartha is féidir leo a ghlacadh ar míreanna a shanntar do na Orgs bhfuil rochtain acu orthu. An meascán na n-úsáideoirí "orgs" agus "ráillí" sainmhíniú cad is féidir leo agus ní féidir a dhéanamh laistigh Open-AudIT.<br/> <br/>An chuid is mó míreanna i Open-AudIT sannta do Org. Gléasanna, Suíomhanna, Líonraí, etc.<br/> <br/>Is féidir go mbeadh Orgs leanbh. Smaoinigh ar chairt eagraíochtúil (crann) struchtúr. Má tá rochtain ag úsáideoir ar Org ar leith, tá rochtain acu freisin ar shliocht Orgs. Le haghaidh tuilleadh eolais, féach seo <a href="/index.php/faq?name=Users, Roles and Orgs">Ceisteanna Coitianta</a>.</p>';

$GLOBALS["lang"]['<p>Open-AudIT provides multi-tenancy out of the box!<br> <br>Orgs (organisations) in Open-AudIT are a key item. A user has a primary Org as well as a list of Orgs they can access. A user combines this with a list of assigned "Roles" that define what actions they can take on items assigned to the Orgs they have access to. The combination of a users "orgs" and "roles" define what they can and cannot do within Open-AudIT.<br> <br>Most items in Open-AudIT are assigned to an Org. Devices, Locations, Networks, etc.<br> <br>Orgs can have child Orgs. Think of an organisational chart (tree) structure. If a user has access to a specific Org, they also have access to that Orgs descendants.</p>'] = '<p>Soláthraíonn Open-AudIT il-tionóntacht as an mbosca!<br/> <br/>Is mír thábhachtach iad Orgs (eagraíochtaí) in Open-AudIT. Tá úsáideoir Org bunscoile chomh maith le liosta de Orgs féidir leo rochtain. Comhcheanglaíonn úsáideoir seo le liosta de "Roles" a shanntar a shainiú cad iad na gníomhartha is féidir leo a ghlacadh ar míreanna a shanntar do na Orgs bhfuil rochtain acu orthu. An meascán na n-úsáideoirí "orgs" agus "ráillí" sainmhíniú cad is féidir leo agus ní féidir a dhéanamh laistigh Open-AudIT.<br/> <br/>An chuid is mó míreanna i Open-AudIT sannta do Org. Gléasanna, Suíomhanna, Líonraí, etc.<br/> <br/>Is féidir go mbeadh Orgs leanbh. Smaoinigh ar chairt eagraíochtúil (crann) struchtúr. Má tá rochtain ag úsáideoir ar Org ar leith, tá rochtain acu freisin ar shliocht Orgs.</p>';

$GLOBALS["lang"]['<p>Quickly view the status of devices on your network.<br> <br></p>'] = '<p>Féach go tapa ar stádas feistí ar do líonra.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Roles in Open-AudIT are a key item. A user has a primary Org as well as a list of Orgs they can access. A user combines this with a list of assigned Roles that define what actions they can take on items assigned to the Orgs they have access to. The combination of a users "orgs" and "roles" define what they can and cannot do within Open-AudIT.<br> <br>
        Get the complete Open-AudIT Enterprise experience. Creating roles allows fine grained control over what your users can do within Open-AudIT.<br> <br>
        The primary method for authorisation (what a user can do) is based on the users Roles. Default roles are defined as admin, org_admin, reporter and user. Each role has a set of permissions (Create, Read, Update, Delete) for each endpoint. The ability to define additional roles and edit existing roles is enabled in Open-AudIT Enterprise.<br> <br>Roles can also be used with LDAP (Active Directory and OpenLDAP) authorisation. Enterprise licensed installations have the ability to customise the LDAP group for each defined role.<br> <br></p>'] = '<p>Róil i Open-Aud Tá TF mír eochair. Tá úsáideoir Org bunscoile chomh maith le liosta de Orgs féidir leo rochtain. Comhcheanglaíonn úsáideoir seo le liosta de Róil a shanntar a shainiú cad iad na gníomhartha is féidir leo a ghlacadh ar míreanna a shanntar do na Orgs bhfuil rochtain acu orthu. An meascán na n-úsáideoirí "orgs" agus "ráillí" sainmhíniú cad is féidir leo agus ní féidir a dhéanamh laistigh Open-AudIT.<br/> <br/>Faigh an taithí iomlán Fiontraíochta Open-AudIT. Ceadaíonn róil a chruthú rialú gránáilte fíneáil ar cad is féidir le do úsáideoirí a dhéanamh laistigh Open-AudIT.<br/> <br/>Tá an modh príomha le haghaidh údaraithe (cad is féidir le húsáideoir a dhéanamh) bunaithe ar Róil na n-úsáideoirí. róil réamhshocraithe a shainmhínítear mar admin, org_admin, tuairisceoir agus úsáideoir. Tá gach ról sraith de cheadanna (Cruthaigh, Léigh, Nuashonrú, Scrios) do gach críochphointe. Tá an cumas a shainiú róil breise agus rólanna atá ann cheana in eagar ar chumas i Fiontraíocht Open-AudIT.<br/> <br/>Is féidir róil a úsáid freisin le húdarú LDAP ( Eolaire Gníomhach agus OpenLDAP). Tá cumas ag suiteálacha ceadúnaithe Fiontair an grúpa LDAP a shaincheapadh do gach ról sainithe.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Rules examine attributes and make cahnges based on the appropriate rule.</p>'] = '<p>Scrúdaíonn na rialacha tréithe agus déanann siad cahnges bunaithe ar an riail chuí.</p>';

$GLOBALS["lang"]['<p>Scanning options allow you to easily apply a set of options to a discovery.<br> <br></p>'] = '<p>Ligeann roghanna scanadh duit sraith roghanna a chur i bhfeidhm go héasca le fionnachtana.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Simple, intuitive, accurate geographic mapping provided by Google Maps. Open-AudIT leverages Google Maps to provide live, interactive geographic mapping of device locations. Automated conversion of street addresses to geocodes and longitude / latitude.<br> <br>
        </p>'] = '<p>Simplí, iomasach, léarscáiliú geografach cruinn ar fáil ag Google Maps. giarálacha oscailte-AudIT Google Maps a chur ar fáil beo, léarscáiliú geografach idirghníomhach de láithreacha feistí. Comhshó uathoibrithe seoltaí sráide chuig geocodes agus domhanfhad / domhanleithead.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Software Packages are used to determine if antivirus, backup, firewall, approved or banned software is installed.<br> <br></p>'] = '<p>Pacáistí Bogearraí a úsáidtear chun a chinneadh an bhfuil antivirus, cúltaca, balla dóiteáin, bogearraí ceadaithe nó toirmeasc suiteáilte.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Some examples of valid Subnet attributes are: 192.168.1.1 (a single IP address), 192.168.1.0/24 (a subnet), 192.168.1-3.1-20 (a range of IP addresses).<br> <br><em>NOTE</em> - Only a subnet (as per the examples - 192.168.1.0/24) will be able to automatically create a valid network for Open-AudIT. <br> <br>If you use an Active Directory type, make sure you have appropriate credentials to talk to your Domain Controller already in <a href="../credentials">credentials</a>.<br> <br></p>'] = '<p>Tá roinnt samplaí de tréithe Subnet bailí: 192.168.1.1 (seoladh IP amháin), 192.168.1.24 (a subnet), 192.168.1-3.1-20 (réimse seoltaí IP).<br/> <br/><em>Amharc ar gach eolas</em> - Ní bheidh ach folíon (de réir na samplaí - 192.168.1.0/24) in ann gréasán bailí a chruthú go huathoibríoch le haghaidh Open-AudIT. <br/> <br/>Má úsáideann tú cineál Eolaire Gníomhach, déan cinnte go bhfuil tú dintiúir cuí chun labhairt le do Rialaitheoir Fearann cheana féin i <a href="../credentials">dintiúir</a>.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Standards are stored in Open-AudIT.<br /><br /><br /><br /></p>'] = '<p>Caighdeáin a stóráil i Open-AudIT.<br/><br/><br/><br/></p>';

$GLOBALS["lang"]['<p>Supported clients are Linux only.<br> <br></p>'] = '<p>Tá cliaint tacaíocht Linux amháin.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Tasks have a schedule that mirrors the unix cron schedule. The attributes for minute, hour, day_of_month, month, day_of_week all act as per the cron definitions. You can select multiples of these using comma seperated values (no spaces). You can select every value using *.<br> <br>The <code>type</code> of the task can be one of: baselines, collectors, discoveries, queries, reports or summaries.<br> <br>If you wish to schedule a Baseline or Discovery, you will need to create these before creating the tasks. You must use the ID of the type of item in <code>sub_resource_id</code>. For example if you wish to schedule a Discovery, use that particular Discoveries ID in <code>sub_resource_id</code>.<br> <br>The value for <code>uuid</code> is specific to each Open-AudIT server. Your unique value can be found in the configuration.<br> <br>The <code>options</code> attribute is a JSON document containing any extra attributes required to run the task. The extra attributes for reports, queries and summaries are: <code>email_address</code> and <code>format</code>. The extra attribute for Bselines is <code>group_id</code>.<br> <br></p>'] = '<p>Tascanna Tá sceideal go scátháin an sceideal cron unix. Na tréithe le haghaidh nóiméad, uair an chloig, day_of_month, day_of_week gach gníomh de réir na sainmhínithe cron. Is féidir leat a roghnú iolraí de na ag baint úsáide as luachanna camchuairte (aon spásanna). Is féidir leat a roghnú gach luach ag baint úsáide as *.<br/> <br/>An bhfuil <code>type</code> Is féidir leis an tasc a bheith ar cheann de na bunlínte, bailitheoirí, fionnachtana, ceisteanna, tuarascálacha nó achoimrí.<br/> <br/>Más mian leat a sceideal a Baseline nó Discovery, beidh ort a chruthú ar na roimh a chruthú na tascanna. Ní mór duit ID an chineáil earra a úsáid i <code>sub_resource_id</code>. Mar shampla más mian leat a sceideal Discovery, úsáid a bhaint go áirithe Discoveries ID i <code>sub_resource_id</code>.<br/> <br/>An luach le haghaidh <code>uuid</code> Is sonrach do gach freastalaí Open-AudIT. Is féidir do luach uathúil a fháil sa chumraíocht.<br/> <br/>An bhfuil <code>options</code> Is tréith doiciméad JSON ina bhfuil aon tréithe breise is gá a reáchtáil an tasc. Is iad na tréithe breise le haghaidh tuarascálacha, fiosruithe agus achoimrí ná: <code>email_address</code> agus <code>format</code>. Is é an tréith bhreise do Bselines <code>group_id</code>.<br/> <br/></p>';

$GLOBALS["lang"]['<p>The <code>type</code> of the location will assign its icon.<br> <br></p>'] = '<p>An bhfuil <code>type</code> Beidh an suíomh a shannadh a deilbhín.<br/> <br/></p>';

$GLOBALS["lang"]['<p>The Attributes endpoint allows you to add customized values to different attributes in Open-AudIT, at the moment this feature works on the Class, Environment, Status and Type attributes on Devices, the Type attribute for both Locations and Orgs as well as the Menu Category for Queries. If you view an item of one of the prvious types (say view a Lkocation) you will notice the Type attribute must be selected from a drop-down box. This is where those values are stored. Hence, if you would like to add a new Type to be chosen for a Location, add it using the Attributes feature.</p>'] = '<p>Ceadaíonn an endpoint ómós duit luachanna saincheaptha a chur le tréithe éagsúla i Open-AudIT, faoi láthair oibríonn an ghné seo ar an Aicme, Comhshaol, Stádas agus tréithe Cineál ar Gléasanna, an tréith Cineál don dá Suíomhanna agus Orgs chomh maith leis an Catagóir Roghchlár do Sraitheanna. Má fhéachann tú ar mhír de cheann de na cineálacha prvious (amharc ar Lkocation) tabharfaidh tú faoi deara nach mór an tréith Cineál a roghnú ó bhosca anuas. Tá sé seo nuair a stóráiltear na luachanna sin. Dá réir sin, más mian leat Cineál nua a roghnú le haghaidh Suíomh, cuir é ag baint úsáide as gné na nAspal.</p>';

$GLOBALS["lang"]['<p>The Collectors feature enables you to easily manage many "collector" computers that perform network discovery. All Collectors are centrally controlled from the Server. The only required network ports between the Collector and the Server are 80 and/or 443.<br> <br>It makes managing disparate networks quick, easy and simple. Open-AudIT Enterprise licensees get a single collector license included and have the option to buy more as required..<br> <br></p>'] = '<p>Cuireann an gné Bailitheoirí ar chumas tú a bhainistiú go héasca go leor "bailitheoir" ríomhairí a dhéanann fionnachtana líonra. Gach Bailitheoirí á rialú go lárnach ón Freastalaí. Is iad na calafoirt líonra amháin ag teastáil idir an Bailitheoir agus an Freastalaí 80 agus / nó 443.<br/> <br/>Déanann sé a bhainistiú líonraí éagsúla tapa, éasca agus simplí. ceadúnaithe Fiontraíochta Open-AudIT fháil ceadúnas bailitheoir amháin san áireamh agus tá an rogha a cheannach níos mó de réir mar is gá..<br/> <br/></p>';

$GLOBALS["lang"]['<p>The SELECT section of your SQL <em>must</em> contain fully qualified columns. IE - <code>SELECT devices.id AS `devices.id`, devices.name AS `devices.name` ...</code>.<br> <br>The WHERE section of your SQL <em>must</em> contain <code>WHERE @filter</code> so Open-AudIT knows to restrict your query to the appropriate Orgs. SQL not containing this condition will result in the query failing to be created, unless you have the Admin role.<br> <br>An example query SQL showing attributes on devices that have an <code>os_group</code> attribute of "Linux" - <br><code>SELECT devices.id AS `devices.id`, devices.icon AS `devices.icon`, devices.type AS `devices.type`, devices.name AS `devices.name`, devices.os_name AS `devices.os_name` FROM devices WHERE @filter AND devices.os_group = "Linux"</code><br> <br></p>'] = '<p>An chuid SELECT de do SQL <em>ní mór</em> colúin láncháilithe a bheith iontu. IE - <code>SELECT devices.id AS `devices.id`, devices.name AS `devices.name` ...</code>.<br/> <br/>An chuid WHERE de do SQL <em>ní mór</em> go bhfuil <code>WHERE @filter</code> mar sin Open-AudIT fhios a shrianadh do cheist chuig na Orgs cuí. Beidh SQL nach bhfuil an coinníoll seo mar thoradh ar an cheist gan a chruthú, mura bhfuil tú an ról Riarachán.<br/> <br/>Sampla ceisteanna tréithe a léiríonn SQL ar fheistí a bhfuil <code>os_group</code> tréith "Linux" - <br/><code>SELECT devices.id AS `devices.id`, devices.icon AS `devices.icon`, devices.type AS `devices.type`, devices.name AS `devices.name`, devices.os_name AS `devices.os_name` FROM devices WHERE @filter AND devices.os_group = "Linux"</code><br/> <br/></p>';

$GLOBALS["lang"]['<p>The SELECT section of your SQL <em>must</em> only contain <code>DISTINCT(devices.id)</code>.<br> <br>The WHERE section of your SQL <em>must</em> contain <code>WHERE @filter</code> so Open-AudIT knows to restrict your query to the appropriate Orgs. SQL not containing this condition will result in the group failing to be created.<br> <br>An example for SQL to select all devices running the Debian OS - <code>SELECT DISTINCT(devices.id) FROM devices WHERE @filter AND devices.os_family = "Debian"</code><br> <br></p>'] = '<p>An chuid SELECT de do SQL <em>ní mór</em> ach go bhfuil <code>DISTINCT(devices.id)</code>.<br/> <br/>An chuid WHERE de do SQL <em>ní mór</em> go bhfuil <code>WHERE @filter</code> mar sin Open-AudIT fhios a shrianadh do cheist chuig na Orgs cuí. Beidh SQL nach bhfuil an coinníoll seo mar thoradh ar an ngrúpa gan a chruthú.<br/> <br/>Sampla do SQL a roghnú gach feiste ag rith an OS Debian - <code>SELECT DISTINCT(devices.id) FROM devices WHERE @filter AND devices.os_family = "Debian"</code><br/> <br/></p>';

$GLOBALS["lang"]['<p>The license endpoint allows you to track the number of licenses found on your devices.<br> <br>To create an entry to track your licenses you <em>must</em> to provide a name, an organization, the number of licenses acquired and the name of the software. On the field <code>match_string</code> you must provide the name of the software that you want to track, you can use the percent sign (%) as a wildcard in the match_string.<br> <br></p>'] = '<p>Ceadaíonn an endpoint ceadúnas tú a rianú ar líon na gceadúnas le fáil ar do feistí.<br/> <br/>A chruthú iontráil a rianú do cheadúnais tú <em>ní mór</em> a chur ar fáil ainm, eagraíocht, líon na gceadúnas a fuarthas agus ainm na bogearraí. Ar an réimse <code>match_string</code> ní mór duit an t-ainm ar na bogearraí gur mian leat a rianú, is féidir leat úsáid a bhaint as an comhartha faoin gcéad (%) mar chárta fiáin sa match_string.<br/> <br/></p>';

$GLOBALS["lang"]['<p>The network should be in the format 192.168.1.0/24.<br> <br></p>'] = '<p>Ba chóir go mbeadh an líonra i bhformáid 192.168.1.0/24.<br/> <br/></p>';

$GLOBALS["lang"]['<p>The primary and optional secondary items should be fully qualified - ie, devices.type or software.name.<br> <br></p>'] = '<p>Ba cheart na hítimí tánaisteacha bunscoile agus roghnacha a bheith cáilithe go hiomlán - ie, feistí. cineál nó bogearraí. ainm.<br/> <br/></p>';

$GLOBALS["lang"]['<p>There is no need to do anything if you are running Open-AudIT on a Linux server.<br>
<br>
Windows clients are just fine and require no special actions, however.... to enable this feature the audit script must be run locally on the target Windows system. It cannot be run remotely as we do with WMI calls when running the audit script on one Windows machine, while targeting a second Windows machine. To do this we need to copy the audit script to the target Windows machine and then run it. Unfortunately the service account that Apache runs under is the Local System account. This account has no access to remote (network based) resources. To work around this issue the service must be run under another account. It is easiest to just use the local Administrator account, but you can try any account you like as long as it has the required privileges. The Local System account has as much local access as the local Administrator account.<br>
<br>
See our page on enabling <a href="/index.php/faq?name=Running Open-AudIT Apache Service Under Windows">Running Open-AudIT Apache Service Under Windows</a></p>'] = '<p>Níl aon ghá aon rud a dhéanamh má tá tú ag rith Open-AudIT ar fhreastalaí Linux.<br/><br/>Tá cliaint Windows ach fíneáil agus a cheangal ar aon ghníomhartha speisialta, áfach.... chun cur ar chumas an ghné seo ní mór an script iniúchóireachta a reáchtáil go háitiúil ar an sprioc Windows córas. Ní féidir é a reáchtáil go cianda mar a dhéanann muid le glaonna WMI nuair a reáchtáil an script iniúchóireachta ar cheann meaisín Windows, agus ag díriú ar an dara meaisín Windows. Chun seo a dhéanamh ní mór dúinn a chóipeáil an script iniúchóireachta chuig an sprioc Windows meaisín agus ansin é a reáchtáil. Ar an drochuair, is é an cuntas seirbhíse a ritheann Apache faoi chuntas an Chórais Áitiúil. Níl aon rochtain ag an gcuntas seo ar acmhainní iargúlta (líonra bunaithe). Ní mór an tseirbhís a reáchtáil faoi chuntas eile chun obair a dhéanamh timpeall na heisiúna seo. Is éasca a úsáid ach an cuntas Riarthóir áitiúil, ach is féidir leat triail aon chuntas is mian leat chomh fada agus a bhfuil sé na pribhléidí is gá. Tá an oiread rochtana áitiúil ag an gcuntas Córas Áitiúil mar chuntas an Riarthóra áitiúil.<br/><br/>Féach ar ár leathanach ar chumas <a href="/index.php/faq?name=Running Open-AudIT Apache Service Under Windows">Rith Seirbhís Apache Oscailte faoi Windows</a></p>';

$GLOBALS["lang"]['<p>These are the devices that live within a rack.<br> <br></p>'] = '<p>Is iad seo na feistí a bhfuil cónaí orthu laistigh de raca.<br/> <br/></p>';

$GLOBALS["lang"]['<p>This endpoint enables you to add your cloud infrastructure details. Open-AudIT will then reach out to your clouds using their native API and return your servers, just like any other device in Open-AudIT.<br> <br><em>NOTE</em> - To use this feature, we <em>must</em> enable the configuration items match_mac (for AWS) and match_hostname (for Azure). This will be done automatically the first time a cloud discovery is executed.<br> <br>Credentials for your cloud (<a href="/index.php/faq?name=Credentials for Microsoft Azure used in Cloud Discovery">Azure</a> or <a href="/index.php/faq?name=Credentials for Amazon AWS used in Cloud Discovery">AWS</a>) are required.<br> <br></p>'] = '<p>Cuireann an bpointe deiridh seo ar do chumas sonraí bonneagair scamall a chur leis. Beidh Open-AudIT a bhaint amach ansin do scamaill ag baint úsáide as a n-API dúchais agus ar ais do freastalaithe, díreach cosúil le haon fheiste eile i Open-AudIT.<br/> <br/><em>Amharc ar gach eolas</em> - Chun an ghné seo a úsáid, táimid <em>ní mór</em> ar chumas na míreanna chumraíocht match_mac (do AWS) agus match_hostname (do Azure). Déanfar é seo go huathoibríoch an chéad uair a dhéantar fionnachtain scamall a fhorghníomhú.<br/> <br/>Credentials do do scamall (<a href="/index.php/faq?name=Credentials for Microsoft Azure used in Cloud Discovery">Azure</a> nó <a href="/index.php/faq?name=Credentials for Amazon AWS used in Cloud Discovery">Amharc ar gach eolas</a>) ag teastáil.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Vulnerabilities reporting based on the NIST CVE feed.<br> <br></p>'] = '<p>Vulnerability tuairisciú bunaithe ar an NIST CVE beatha.<br/> <br/></p>';

$GLOBALS["lang"]['<p>We initially setup the default list of scripts with the default options. These default scripts cannot be deleted. You can create additional scripts for use by you as required. Your script will be based on one of the existing scripts and have custom options applied. The scripts can then be downloaded from the list page at menu -> Discover -> Audit Scripts -> List Audit Scripts<br> <br></p>'] = '<p>Táimid thus ar dtús ar an liosta réamhshocraithe de scripteanna leis na roghanna réamhshocraithe. Ní féidir na scripteanna réamhshocraithe a scriosadh. Is féidir leat a chruthú scripteanna breise le húsáid ag tú mar is gá. Beidh do script a bheith bunaithe ar cheann de na scripteanna atá ann cheana agus tá roghanna saincheaptha i bhfeidhm. Is féidir na scripteanna a íoslódáil ansin ón leathanach liosta ag an roghchlár - × Faigh amach - uaire Scripteanna Iniúchta - × Scripteanna Iniúchta Liosta<br/> <br/></p>';

$GLOBALS["lang"]['<p>When using Regex for matching, a helpful page can be found on the <a href="https://www.php.net/manual/en/regexp.reference.meta.php" target="_blank"> PHP website</a>. Some differences to Perl Regex can be found <a href="https://www.php.net/manual/en/reference.pcre.pattern.differences.php" target="_blank">here</a>.</p>'] = '<p>Nuair a úsáid Regex do meaitseáil, Is féidir le leathanach cabhrach a fháil ar <a href="https://www.php.net/manual/en/regexp.reference.meta.php" target="_blank"> láithreán gréasáin PHP</a>. Is féidir roinnt difríochtaí le Perl Regex a fháil <a href="https://www.php.net/manual/en/reference.pcre.pattern.differences.php" target="_blank">anseo</a>.</p>';

$GLOBALS["lang"]['<p>Widgets can easily be created to show whatever is specific to your environment on your dashboards.<br> <br></p>'] = '<p>Is féidir le Giuirléidí a chruthú go héasca a thaispeáint is cuma cad is sonrach do do thimpeallacht ar do Painéal na nIonstraimí.<br/> <br/></p>';

$GLOBALS["lang"]['<p>With Open-AudIT Professional and Enterprise you can automate and schedule discoveries, report generation, or baseline checks to run when you want, and as often as you need. Schedule your discoveries to run nightly and reports to be generated and emailed to key personnel each morning. Complex or simple schedules, device discovery and report generation is just a click away.<br> <br>Create individual discovery schedules for each subnet or AD controller, add in reports to be created for targeted audiences. Develop simple or complex schedules to support company needs, avoid backups or impact to operations, or simply to spread the load and speed-up audit completion.<br> <br></p>'] = '<p>Le Open-AudIT Gairmiúla agus Fiontair is féidir leat uathoibriú agus fionnachtana sceideal, giniúint tuarascáil, nó seiceálacha bonnlíne a reáchtáil nuair is mian leat, agus chomh minic agus is gá duit. Sceideal do fionnachtana a reáchtáil oíche agus tuarascálacha a ghiniúint agus a ríomhphost chuig pearsanra eochair gach maidin. Tá sceidil Coimpléasc nó simplí, fionnachtain gléas agus giniúint tuarascáil ach cliceáil ar shiúl.<br/> <br/>Cruthaigh sceidil fionnachtana aonair do gach subnet nó rialtóir AD, cuir i dtuarascálacha a chruthú do lucht féachana spriocdhírithe. sceidil shimplí nó casta a fhorbairt chun tacú le riachtanais na cuideachta, a sheachaint backups nó tionchar ar oibríochtaí, nó go simplí a scaipeadh an t-ualach agus críochnú iniúchóireachta luas-suas.<br/> <br/></p>';

$GLOBALS["lang"]['<p>You can create a script with all the options for any of the existing audit scripts - not just Windows. AIX, ESX, Linux, OSX and Windows are all covered.<br> <br></p>'] = '<p>Is féidir leat a chruthú script leis na roghanna le haghaidh aon cheann de na scripteanna iniúchóireachta atá ann cheana - ní hamháin Windows. AIX, ESX, Linux, OSX agus Windows atá clúdaithe go léir.<br/> <br/></p>';

$GLOBALS["lang"]['<p>You can use the percent % sign as a wildcard in the match_string.<br> <br></p>'] = '<p>Is féidir leat úsáid a bhaint as an comhartha faoin gcéad% mar chárta fiáin sa match_string.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Your racks help refine exactly where your devices are located.<br> <br></p>'] = '<p>Do racaí cabhrú le scagadh go díreach i gcás ina bhfuil do feistí suite.<br/> <br/></p>';

$GLOBALS["lang"]['<strong>NOTE</strong> - You are accessing this URL from the local Open-AudIT server. The downloaded script will not be able to submit when run on any other machine. If you need to audit other machines, please download the script from any remote machine, not using a browser on the Open-AudIT server itself.'] = '<strong>Amharc ar gach eolas</strong> - Tá tú ag teacht ar an URL ón bhfreastalaí áitiúil Open-AudIT. Ní bheidh an script íoslódáil in ann a chur isteach nuair a reáchtáil ar aon mheaisín eile. Más gá duit a iniúchadh meaisíní eile, le do thoil íoslódáil an script ó aon mheaisín iargúlta, gan úsáid a bhaint as bhrabhsálaí ar an bhfreastalaí Open-AudIT féin.';

$GLOBALS["lang"]['A CVE item that does not contain a filter to determine the affected item(s).'] = 'A CVE mír nach bhfuil scagaire a chinneadh an mhír(s).';

$GLOBALS["lang"]['A Google Maps API Key is required for this function.'] = 'A Google Maps API Tá eochair ag teastáil don fheidhm seo.';

$GLOBALS["lang"]['A JSON array of device IDs that will have this benchmark executed.'] = 'A sraith JSON de IDs gléas a mbeidh an tagarmharc fhorghníomhú.';

$GLOBALS["lang"]['A JSON array of objects matching the software name taken from the CVE, enriched with the software name retrieved by Open-AudIT.'] = 'A sraith JSON de rudaí meaitseáil an t-ainm bogearraí a tógadh ón CVE, saibhrithe leis an ainm bogearraí aisghabháil ag Open-AudIT.';

$GLOBALS["lang"]['A JSON array of values to test for this vulnerability.'] = 'A sraith JSON de luachanna a thástáil le haghaidh an leochaileacht.';

$GLOBALS["lang"]['A JSON document containing the Orgs assigned to this user. IDs taken from <code>orgs.id</code>. If a user has access to an Org, they have access to that Orgs descendants.'] = 'Doiciméad JSON ina bhfuil na Orgs shanntar don úsáideoir seo. IDs a tógadh ó <code>orgs.id</code>. Má tá rochtain ag úsáideoir ar Org, tá rochtain acu ar shliocht Orgs.';

$GLOBALS["lang"]['A JSON document containing the required attributes depending on <code>scripts.type</code>.'] = 'Doiciméad JSON ina bhfuil na tréithe is gá ag brath ar <code>scripts.type</code>.';

$GLOBALS["lang"]['A JSON document containing the required attributes overriding the chosen discovery_scan_options.'] = 'Doiciméad JSON ina bhfuil na tréithe is gá overriding na fionnachtana roghnaithe_scan_options.';

$GLOBALS["lang"]['A JSON document containing the required attributes overriding the default device match options.'] = 'Doiciméad JSON ina bhfuil na tréithe is gá overriding na roghanna a mheaitseáil gléas réamhshocraithe.';

$GLOBALS["lang"]['A JSON document containing the roles assigned to this user. Role names taken from <code>roles.name</code>.'] = 'Doiciméad JSON ina bhfuil na róil a shanntar don úsáideoir seo. Ról ainmneacha a tógadh ó <code>roles.name</code>.';

$GLOBALS["lang"]['A JSON object containing an array of attributes to change if the match occurs.'] = 'A réad JSON ina bhfuil sraith de tréithe a athrú má tharlaíonn an cluiche.';

$GLOBALS["lang"]['A JSON object containing an array of attributes to match.'] = 'A réad JSON ina bhfuil sraith de tréithe a mheaitseáil.';

$GLOBALS["lang"]['A JSON object containing collection specific options.'] = 'A JSON réad ina bhfuil bailiú roghanna sonracha.';

$GLOBALS["lang"]['A JSON object populated via a Cloud discovery.'] = 'A réad JSON daonra trí fionnachtain Cloud.';

$GLOBALS["lang"]['A JSON representation containing the details of the queue item to be executed.'] = 'A ionadaíocht JSON ina bhfuil na sonraí ar an mír scuaine a fhorghníomhú.';

$GLOBALS["lang"]['A JSON representation of the fields for this integration.'] = 'Ionadaíocht JSON na réimsí don chomhtháthú seo.';

$GLOBALS["lang"]['A JSON representation of the individual tests and their results on all devices this baseline has been run against.'] = 'Tá ionadaíocht JSON de na tástálacha aonair agus a gcuid torthaí ar gach feiste an bonnlíne seo á reáchtáil in aghaidh.';

$GLOBALS["lang"]['A JSON representation of the tests that make up this policy.'] = 'Ionadaíocht JSON de na tástálacha a dhéanann suas an polasaí seo.';

$GLOBALS["lang"]['A LAN can be connected to a WAN using a router.'] = 'Is féidir LAN a nascadh le WAN ag baint úsáide as ródaire.';

$GLOBALS["lang"]['A Metropolitan area network (MAN) is a large computer network that usually spans a city or a large campus.'] = 'Tá líonra limistéar Cathrach (MAN) líonra ríomhaire mór a chuimsíonn de ghnáth chathair nó ar champas mór.';

$GLOBALS["lang"]['A Seed discovery uses an initial IP to retrieve the IPs of any other devices it knows about, adds those IPs to the list and scans those - again asking for any IPs those additional devices knows about. Rinse and repeat. It is intelligent enough to know if it has already scanned a given IP in its execution and discards any already scanned (or even on the list to be scanned).'] = 'Amharc ar gach eolas Úsáideann fionnachtain Seed IP tosaigh a fháil ar an IP aon feistí eile a fhios aige faoi, Cuireann na IPanna ar an liosta agus scans iad siúd - arís ag iarraidh ar aon IPs na feistí breise a fhios faoi. Sruthlaigh agus arís. Tá sé cliste go leor a fhios má tá sé scanadh cheana IP ar leith ina fhorghníomhú agus colfairtí aon scanadh cheana féin (nó fiú ar an liosta a scanadh).';

$GLOBALS["lang"]['A Subnet discovery will scan the IPs provided.'] = 'Beidh fionnachtain Subnet scanadh na IPanna ar fáil.';

$GLOBALS["lang"]['A URL provided to the agent which will then download the file and store it on the local disk.'] = 'A URL ar fáil don ghníomhaire a íoslódáil ansin an comhad agus é a stóráil ar an diosca áitiúil.';

$GLOBALS["lang"]['A URL to a file to download.'] = 'A URL chun comhad a íoslódáil.';

$GLOBALS["lang"]['A backbone network is part of a computer network infrastructure that provides a path for the exchange of information between different LANs or sub-networks. A backbone can tie together diverse networks within the same building, across different buildings, or over a wide area.<br><br>For example, a large company might implement a backbone network to connect departments that are located around the world. The equipment that ties together the departmental networks constitutes the network backbone. When designing a network backbone, network performance and network congestion are critical factors to take into account. Normally, the backbone network capacity is greater than that of the individual networks connected to it.<br><br>Another example of a backbone network is the Internet backbone, which is the set of wide area networks (WANs) and core routers that tie together all networks connected to the Internet.'] = 'Tá líonra cnámh droma mar chuid de bhonneagar líonra ríomhaire a sholáthraíonn cosán do mhalartú faisnéise idir LANanna éagsúla nó fo-líon oibreacha. Is féidir le cnámh droma líonraí éagsúla a cheangal le chéile laistigh den fhoirgneamh céanna, thar fhoirgnimh éagsúla, nó thar limistéar leathan.<br/><br/>Mar shampla, d\'fhéadfadh cuideachta mhór a chur i bhfeidhm líonra cnámh droma a nascadh ranna atá suite ar fud an domhain. Is é an trealamh a nascann le chéile na líonraí roinne an cnámh droma líonra. Nuair a dhearadh cnámh droma líonra, feidhmíocht líonra agus brú tráchta líonra fachtóirí criticiúla a chur san áireamh. De ghnáth, tá an cumas líonra cnámh droma níos mó ná sin de na líonraí aonair a bhaineann leis.<br/><br/>Sampla eile de líonra cnámh droma Is é an cnámh droma Idirlín, a bhfuil an sraith de líonraí limistéar leathan (WANs) agus ródairí croí a cheangal le chéile gach líonraí a bhaineann leis an Idirlíon.';

$GLOBALS["lang"]['A calculated field that displays the number of times this piece of software was found on the computers in the selected Org (and its descendants if configured).'] = 'Fuarthas réimse a ríomh a thaispeánann líon na n-amanna seo píosa bogearraí ar na ríomhairí sa Org roghnaithe (agus a sliocht má cumraithe).';

$GLOBALS["lang"]['A campus area network (CAN) is made up of an interconnection of LANs within a limited geographical area. The networking equipment (switches, routers) and transmission media (optical fiber, copper plant, Cat5 cabling, etc.) are almost entirely owned by the campus tenant / owner (an enterprise, university, government, etc.).<br><br>For example, a university campus network is likely to link a variety of campus buildings to connect academic colleges or departments, the library, and student residence halls.'] = 'Tá líonra limistéar an champais (CAN) comhdhéanta de idirnascadh LAN laistigh de limistéar geografach teoranta. Tá an trealamh líonraithe (lasca, ródairí) agus na meáin tarchuir (snáithín optúla, gléasra copar, Cat5 á gcur faoi thalamh, etc) beagnach faoi úinéireacht go hiomlán ag an tionónta gcampas / úinéir (fiontar, ollscoil, rialtas, etc).<br/><br/>Mar shampla, Is líonra gcampas ollscoil dócha a nascadh ar éagsúlacht na foirgnimh gcampas chun ceangal coláistí acadúla nó ranna, an leabharlann, agus hallaí cónaithe mac léinn.';

$GLOBALS["lang"]['A closed port is accessible (it receives and responds to Nmap probe packets), but there is no application listening on it. They can be helpful in showing that a host is up on an IP address (host discovery, or ping scanning), and as part of OS detection. Because closed ports are reachable, it may be worth scanning later in case some open up. Administrators may want to consider blocking such ports with a firewall. Then they would appear in the filtered state, discussed next.'] = 'Tá calafort dúnta inrochtana (faigheann sé agus freagraíonn sé ar phaicéid probe léarscáil), ach níl aon iarratas ag éisteacht air. Is féidir leo a bheith cabhrach a léiríonn go bhfuil óstach suas ar sheoladh IP (fionnachtain óstach, nó scanadh ping), agus mar chuid de bhrath OS. Toisc go bhfuil calafoirt dúnta reachable, d\'fhéadfadh sé a bheith fiú scanadh níos déanaí i gcás roinnt oscailt suas. D\'fhéadfadh riarthóirí ag iarraidh a mheas blocála calafoirt den sórt sin le balla dóiteáin. Ansin, bheadh siad le feiceáil sa stát scagtha, a pléadh chugainn.';

$GLOBALS["lang"]['A collector is either in Collector or Stand-Alone mode.'] = 'Tá bailitheoir i Bhailitheoir nó Stand-Alone mód.';

$GLOBALS["lang"]['A comma separated list of applicable CVEs.'] = 'Liosta scartha de CVE infheidhme.';

$GLOBALS["lang"]['A comma separated list of values, one of which can be selected.'] = 'Liosta de luachanna coma scartha, ar féidir ceann amháin díobh a roghnú.';

$GLOBALS["lang"]['A command to run. When the agent is Windows based, this command is run from within the powershell agent.'] = 'Ordú a reáchtáil. Nuair a bhíonn an gníomhaire Windows bunaithe, tá an t-ordú ar siúl ó laistigh den ghníomhaire powershell.';

$GLOBALS["lang"]['A dashboard is made up of three columns and two rows of what we call <i>widgets</i>. A widget is very similar to a summary, only we take the summary concept a bit further. Widgets are created in a simple fashion using a couple of drop down boxes - or you can elect to use your own SQL for complete customisability.'] = 'Tá Painéal na nIonstraimí déanta suas de thrí cholún agus dhá shraith de cad a ghlaonn muid <i>giuirléidí</i>. Tá ghiuirléid an-chosúil le achoimre, ach a chur againn ar an gcoincheap achoimre le beagán eile. Dearthóirí a cruthaíodh i bhealach simplí ag baint úsáide as cúpla titim síos boscaí - nó is féidir leat a roghnú a úsáid do SQL féin le haghaidh customisability iomlán.';

$GLOBALS["lang"]['A filtered port is considered open (and will trigger device detection).'] = 'Meastar go bhfuil calafort scagtha oscailte (agus spreagfaidh sé brath ar ghléas).';

$GLOBALS["lang"]['A global area network (GAN) is a network used for supporting mobile across an arbitrary number of wireless LANs, satellite coverage areas, etc. The key challenge in mobile communications is handing off user communications from one local coverage area to the next. In IEEE Project 802, this involves a succession of terrestrial wireless LANs.'] = 'Is líonra limistéar domhanda (GAN) líonra a úsáidtear chun tacú le soghluaiste thar líon treallach LANanna gan sreang, limistéir clúdach satailíte, etc. Tá an dúshlán lárnach i gcumarsáidí soghluaiste ag tabhairt cumarsáidí úsáideora ó limistéar clúdach áitiúil amháin go dtí an chéad cheann eile. I dTionscadal IEEE 802, baineann sé seo le comharbas LANanna gan sreang trastíre.';

$GLOBALS["lang"]['A home area network (HAN) is a residential LAN used for communication between digital devices typically deployed in the home, usually a small number of personal computers and accessories, such as printers and mobile computing devices. An important function is the sharing of Internet access, often a broadband service through a cable TV or digital subscriber line (DSL) provider.'] = 'Is líonra limistéar baile (HAN) LAN cónaithe a úsáidtear le haghaidh cumarsáide idir feistí digiteacha imscaradh de ghnáth sa bhaile, de ghnáth ar líon beag de ríomhairí pearsanta agus gabhálais, ar nós printéirí agus gléasanna ríomhaireachta soghluaiste. Is feidhm thábhachtach a roinnt rochtain Idirlín, go minic seirbhís leathanbhanda trí theilifís cábla nó líne síntiúsóra digiteach (DSL) soláthraí.';

$GLOBALS["lang"]['A list of custom TCP ports to scan (22 is SSH, 135 is WMI, 62078 is iPhone sync).'] = 'Tá liosta de na calafoirt TCP saincheaptha a scanadh (22 SSH, 135 Is WMI, 62078 iPhone sync).';

$GLOBALS["lang"]['A list of custom UDP ports to scan (161 is SNMP).'] = 'Tá liosta de na calafoirt UDP saincheaptha a scanadh (161 Is SNMP).';

$GLOBALS["lang"]['A local area network (LAN) is a network that connects computers and devices in a limited geographical area such as a home, school, office building, or closely positioned group of buildings. Each computer or device on the network is a node. Wired LANs are most likely based on Ethernet technology. Newer standards such as ITU-T G.hn also provide a way to create a wired LAN using existing wiring, such as coaxial cables, telephone lines, and power lines.<br><br>The defining characteristics of a LAN, in contrast to a wide area network (WAN), include higher data transfer rates, limited geographic range, and lack of reliance on leased lines to provide connectivity. Current Ethernet or other IEEE 802.3LAN technologies operate at data transfer rates up to 100 Gbit/s, standardized by IEEE in 2010. Currently, 400 Gbit/s Ethernet is being developed.'] = 'Is líonra limistéar áitiúil (LAN) a nascann ríomhairí agus feistí i limistéar geografach teoranta ar nós baile, scoil, foirgneamh oifige, nó grúpa suite go dlúth de foirgnimh. Tá gach ríomhaire nó gléas ar an líonra nód. Tá LANanna Wired is dócha bunaithe ar an teicneolaíocht Ethernet. Caighdeáin níos nuaí ar nós ITU-T G.hn ar fáil freisin ar bhealach a chruthú LAN sreangaithe ag baint úsáide as sreangú atá ann cheana féin, ar nós cáblaí comhaiseach, línte teileafóin, agus línte cumhachta.<br/><br/>I measc na saintréithe a shainiú LAN, i gcodarsnacht le líonra réimse leathan (WAN), tá rátaí aistrithe sonraí níos airde, raon geografach teoranta, agus easpa iontaoibhe ar línte léasaithe nascacht a chur ar fáil. Feidhmíonn teicneolaíochtaí Ethernet Reatha nó IEEE 802.3LAN eile ag rátaí aistrithe sonraí suas go dtí 100 Gbit / s, chaighdeánaithe ag IEEE i 2010. Faoi láthair, 400 Gbit / s Tá Ethernet á fhorbairt.';

$GLOBALS["lang"]['A location is a physical address that can have devices associated with it. You can assign it coordinates and if there are devices assigned, the location will appear on the Map when you have an Open-AudIT Enterprise license.'] = 'Is seoladh fisiceach é suíomh a d\'fhéadfadh feistí a bhaineann leis. Is féidir leat a shannadh comhordanáidí agus má tá feistí a shanntar, beidh an suíomh le feiceáil ar an Léarscáil nuair a bhfuil tú ceadúnas Fiontraíochta Oscailte-AudIT.';

$GLOBALS["lang"]['A location name will help you to find these devices in the future.'] = 'Cabhróidh ainm suímh leat na feistí seo a aimsiú sa todhchaí.';

$GLOBALS["lang"]['A lower number means it will be applied before other rules.'] = 'Ciallaíonn líon níos ísle go gcuirfear i bhfeidhm é roimh rialacha eile.';

$GLOBALS["lang"]['A lower number means it will be applied before other rules. The default weight is 100.'] = 'Ciallaíonn líon níos ísle go gcuirfear i bhfeidhm é roimh rialacha eile. Is é an meáchan réamhshocraithe 100.';

$GLOBALS["lang"]['A new user logged in to Open-AudIT and was authenticated and authorized by the LDAP sever. That user was then created in Open-AudIT and logged in. Success.'] = 'A úsáideoir nua logáilte isteach chun Open-AudIT agus bhí fíordheimhnithe agus údaraithe ag an LDAP sever. Cruthaíodh an t-úsáideoir sin ansin i Open-AudIT agus logáilte isteach. Rath.';

$GLOBALS["lang"]['A package is a piece of installed softare. A package has a type - antivirus, approved, backup, banned, cloud, firewall, ignored, license or other.'] = 'Tá pacáiste píosa de softare suiteáilte. Tá pacáiste cineál - antivirus, ceadaithe, cúltaca, toirmeasc, scamall, balla dóiteáin, neamhaird, ceadúnas nó eile.';

$GLOBALS["lang"]['A password (stored as a hash) that enables logon when using application authentication.'] = 'A focal faire (arna stóráil mar hash) a chuireann ar chumas logon nuair a úsáid fíordheimhnithe iarratas.';

$GLOBALS["lang"]['A person has an account in the Open-AudIT application. Their user account has a list of associated Roles and Organizations. The roles the user has determines WHAT they can do. The Organizations a user has determines WHICH items they can act upon.<br><br>When a user requests to perform an operation (create, read, update, delete) on a collection item, the roles are consulted to see if they are allowed to perform that action, then the orgs are consulted to determine if the collection item belongs to an org the user has permission to act on.'] = 'Tá cuntas ag duine san iarratas Open-AudIT. Tá a gcuntas úsáideora liosta de Róil agus Eagraíochtaí gaolmhara. Cinneann na róil atá ag an úsáideoir WHAT is féidir leo a dhéanamh. Na hEagraíochtaí úsáideoir chinneann míreanna WHICH féidir leo gníomhú ar.<br/><br/>Nuair a iarrann úsáideoir oibríocht a dhéanamh (a chruthú, a léamh, a thabhairt cothrom le dáta, a scriosadh) ar mhír bailiúcháin, rachfar i gcomhairle leis na róil a fheiceáil má tá cead acu an ghníomhaíocht sin a dhéanamh, ansin rachfar i gcomhairle leis na orgs chun a chinneadh an mbaineann an mhír bailiúcháin le húsáideoir nóg.';

$GLOBALS["lang"]['A personal area network (PAN) is a computer network used for communication among computer and different information technological devices close to one person. Some examples of devices that are used in a PAN are personal computers, printers, fax machines, telephones, PDAs, scanners, and even video game consoles. A PAN may include wired and wireless devices. The reach of a PAN typically extends to 10 meters. A wired PAN is usually constructed with USB and FireWire connections while technologies such as Bluetooth and infrared communication typically form a wireless PAN.'] = 'Tá líonra limistéar pearsanta (PAN) líonra ríomhaire a úsáidtear le haghaidh cumarsáide i measc ríomhaire agus feistí teicneolaíochta faisnéise éagsúla gar do dhuine amháin. Tá roinnt samplaí de feistí a úsáidtear i PAN ríomhairí pearsanta, printéirí, meaisíní facs, teileafóin, PDAs, scanóirí, agus fiú Consóil cluiche físeán. Féadfaidh feistí sreinge agus gan sreang a bheith san áireamh i PAN. Síneann an teacht ar PAN de ghnáth go 10 méadar. Tá PAN sreangaithe tógtha de ghnáth le naisc USB agus FireWire cé go bhfuil teicneolaíochtaí ar nós Bluetooth agus cumarsáid infridhearg de ghnáth PAN gan sreang.';

$GLOBALS["lang"]['A query is essentially a SQL statement. This statement is run against the database with the automatic addition of the limit, filtered to apply to only those requested items and only those items the user has permission to view. A Query can be created using menu -> Manage -> Queries -> Create Queries. Queries contain an org_id and are hence restricted to the appropriate users. A user must have the org_admin or reporter role(s) to create, update or delete a query. All users can execute a query. A query has a name attribute used for the menu item as well as a menu category attribute. This tells the Open-Audit GUI which submenu to place the query in. There is also menu display which should be set to <i>y</i> to enable the query in the GUI (<i>n</i> to prevent the query from appearing at all). The query would still run if called using its <code>id</code>, regardless of menu displays value.'] = 'Tá ceist bunúsach ráiteas SQL. Tá an ráiteas seo ar siúl i gcoinne an bhunachar sonraí leis an Chomh maith uathoibríoch an teorainn, scagtha a chur i bhfeidhm ach amháin na míreanna a iarrtar agus gan ach na míreanna sin tá cead ag an úsáideoir a fheiceáil. Is féidir Query a chruthú ag baint úsáide as roghchlár - ^ Bainistiú - uaire Cén fáth? Tá org_id i gceist le fiosruithe agus tá siad srianta dá bhrí sin do na húsáideoirí cuí. Ní mór d’úsáideoir an ról org_admin nó tuairisceoir a bheith aige/aici chun ceist a chruthú, a nuashonrú nó a scriosadh. Is féidir le gach úsáideoir a fhorghníomhú ceist. Tá ceist tréith ainm a úsáidtear le haghaidh an mhír roghchlár chomh maith le tréith catagóir roghchlár. Insíonn sé seo an GUI Open-Audit a submenu chun an cheist i. Tá freisin taispeáint roghchlár ba chóir a shocrú <i>y</i> a chur ar chumas an cheist sa GUI (<i>n</i> chun cosc a chur ar an gceist ó láithriú ar chor ar bith). Bheadh an cheist ar siúl go fóill má iarrtar ag baint úsáide as a <code>id</code>, beag beann ar taispeáint roghchlár luach.';

$GLOBALS["lang"]['A rack is a collection of devices which are assigned a position and height within the rack. A device can optionally have a picture associated with it. A rack is placed in a row. We have created a very granular system for positioning of racks, which is as follows. At the top level (as always) is the Organisation (Org). An Org can have multiple locations (as has always been the case). With the addition of the Racks feature, a location can now contain one or more Buildings. A building can contain one or more Floors. A floor can contain one or more Rooms. A room can contain one or more Rows. This sounds like a lot of work, but defaults are created for you. Create a new Location and the sub-components will be automatically created for you. If you need more items (buildings, rooms, etc) you can add them as you like. A rack can also be part of a <i>pod</i> of racks. The pod attribute works as a tag, rather than a strict hierarchical inheritance model as per buildings, floors, etc.<br><br>Racks are a feature available to Open-AudIT Enterprise licensed customers.'] = 'Tá raca bailiúchán de feistí a shanntar seasamh agus airde laistigh den raca. Is féidir le gléas a bheith roghnach pictiúr a bhaineann leis. Cuirtear raca i ndiaidh a chéile. Táimid tar éis a chruthaigh córas an-ghránna do shuíomh racaí, a bhfuil mar seo a leanas. Ag an leibhéal barr (mar i gcónaí) Is é an Eagraíocht (Org). Is féidir le Org a bheith suímh éagsúla (mar a bhí i gcónaí ar an gcás). Le gné na Racks a chur leis, is féidir go bhfuil foirgneamh amháin nó níos mó i suíomh anois. Is féidir le foirgneamh amháin nó níos mó Urlár a bheith ann. Is féidir Seomra amháin nó níos mó a bheith in urlár. Is féidir le seomra amháin nó níos mó Rows. Fuaimeanna seo cosúil le go leor oibre, ach déantar mainneachtainí a chruthú duit. Cruthaigh Suíomh nua agus beidh na fo-chomhpháirtithe a chruthú go huathoibríoch ar do shon. Más gá duit míreanna níos mó (foirgnimh, seomraí, srl) is féidir leat iad a chur mar is mian leat. Is féidir le raca a bheith mar chuid de <i>taiseachas aeir: fliuch</i> de racaí. Oibríonn an tréith pod mar chlib, seachas múnla oidhreacht ordlathach dian de réir foirgnimh, urlár, etc.<br/><br/>Is gné atá ar fáil do chustaiméirí ceadúnaithe Fiontraíochta Open-AudIT.';

$GLOBALS["lang"]['A routing domain or address space where the IP addresses and MAC addresses are unique.'] = 'Fearann routing nó spás seoladh ina bhfuil na seoltaí IP agus seoltaí MAC uathúil.';

$GLOBALS["lang"]['A sample cron file for Linux is below. This should be placed in'] = 'Tá comhad cron sampla do Linux thíos. Ba chóir é seo a chur isteach';

$GLOBALS["lang"]['A security zone is a administrative domain or policy domain within the Network Domain.'] = 'Is réimse riaracháin nó réimse beartais laistigh den Líonra Fearainn é crios slándála.';

$GLOBALS["lang"]['A seed discovery is another type of discovery, where you provide the IP of a single <i>seed</i> device. This device is audited, and any IPs it knows are then added to the list of IPs to be audited. Then, those devices are audited and any IPs they know are also added to the list of IPs for auditing. This process then continues within the parameters configured by the user.'] = 'Is cineál eile fionnachtana é fionnachtain síolta, áit a soláthraíonn tú IP amháin <i>síológ</i> gléas. Tá an gléas iniúchta, agus aon IPanna a fhios aige a chur ansin leis an liosta de IPanna a iniúchadh. Ansin, déantar iniúchadh ar na feistí sin agus cuirtear aon IPanna a bhfuil a fhios acu leis an liosta de IPanna le haghaidh iniúchóireachta. Leanann an próiseas seo ansin laistigh de na paraiméadair atá cumraithe ag an úsáideoir.';

$GLOBALS["lang"]['A short description of the log entry.'] = 'Tuairisc ghearr ar an iontráil logála.';

$GLOBALS["lang"]['A storage area network (SAN) is a dedicated network that provides access to consolidated, block level data storage. SANs are primarily used to make storage devices, such as disk arrays, tape libraries, and optical jukeboxes, accessible to servers so that the devices appear like locally attached devices to the operating system. A SAN typically has its own network of storage devices that are generally not accessible through the local area network by other devices. The cost and complexity of SANs dropped in the early 2000s to levels allowing wider adoption across both enterprise and small to medium-sized business environments.'] = 'Is líonra tiomnaithe é líonra limistéar stórála (SAN) a sholáthraíonn rochtain ar stóráil sonraí chomhdhlúite, bloc-leibhéal. Úsáidtear SANs go príomha chun feistí stórála a dhéanamh, mar shampla eagar diosca, leabharlanna téip, agus jukeboxes optúla, inrochtana do fhreastalaithe ionas go mbeidh na feistí cosúil le feistí atá ceangailte go háitiúil leis an gcóras oibriúcháin. Tá a líonra féin ag SAN de ghnáth ar fheistí stórála nach bhfuil inrochtana go ginearálta trí líonra an limistéir áitiúil le feistí eile. Thit costas agus castacht SANs go luath sna 2000í chun leibhéil a ligeann glacadh níos leithne ar fud an fhiontair agus timpeallachtaí gnó beag go meánmhéide.';

$GLOBALS["lang"]['A string that matches the <code>software.name</code> attribute. You can use the standard SQL wildcard of percent (%) to match one or more characters.'] = 'A teaghrán a oireann an <code>software.name</code> tréith. Is féidir leat úsáid a bhaint as an SQL caighdeánach wildcard faoin gcéad (%) a mheaitseáil le ceann amháin nó níos mó carachtair.';

$GLOBALS["lang"]['A structured system for managing sensitive information'] = 'Córas struchtúrtha chun faisnéis íogair a bhainistiú';

$GLOBALS["lang"]['A timestamp.'] = 'Amstamp.';

$GLOBALS["lang"]['A user has a primary Org as well as a list of Orgs they can access. A user combines this with a list of assigned roles that define what actions they can take on items assigned to the Orgs they have access to. The combination of a users <i>orgs</i> and <i>roles</i> define what they can and cannot do within Open-AudIT.'] = 'Tá úsáideoir Org bunscoile chomh maith le liosta de Orgs féidir leo rochtain. Comhcheanglaíonn úsáideoir seo le liosta de na róil a shanntar a shainiú cad iad na gníomhartha is féidir leo a ghlacadh ar míreanna a shanntar do na Orgs bhfuil rochtain acu orthu. An meascán na n-úsáideoirí <i>soilse loingseoireachta E</i> agus <i>Róil</i> shainiú cad is féidir leo agus ní féidir a dhéanamh laistigh Open-AudIT.';

$GLOBALS["lang"]['A user will have a list of associated organizations (orgs). Each org the user has will allow them to act upon items within that org as per their role(s).<br><br>All orgs except the default org have a parent. Think of an Org Chart. If a user has permission on an Org, they also have permission on any descendants of that Org.<br><br>Users are also allowed permission on a child org to see the items from parent orgs for certain collections. Those are: dashboards, discovery_scan_options, fields, files, groups, queries, reports, roles, rules, scripts, summaries, widgets.<br><br>Do not forget you have granular control over what users can see and do using Roles in Enterprise.'] = 'Beidh liosta eagraíochtaí gaolmhara ag úsáideoir (orgs). Beidh gach org an t-úsáideoir a cheadú dóibh gníomhú ar míreanna laistigh den org sin de réir a ról(s).<br/><br/>Gach orgs ach amháin go bhfuil an org réamhshocraithe tuismitheoir. Smaoinigh ar Cairt Org. Má tá cead ag úsáideoir ar Org, tá cead acu freisin ar aon sliocht den Org sin.<br/><br/>Ceadaítear cead d\'úsáideoirí freisin ar leanbh nóg na míreanna ó thuismitheoir nó ó chigeanna a fheiceáil le haghaidh bailiúcháin áirithe. Glacfar iad: Painéal na nIonstraimí, fionnachtain_scan_options, réimsí, comhaid, grúpaí, ceisteanna, tuarascálacha, róil, rialacha, scripteanna, achoimrí, giuirléidí.<br/><br/>Ná déan dearmad go bhfuil tú rialú gráinneach ar cad is féidir le húsáideoirí a fheiceáil agus a dhéanamh ag baint úsáide as Róil i Fiontraíocht.';

$GLOBALS["lang"]['A user will have a list of associated organizations (orgs). Each org the user has will allow them to act upon items within that org as per their role(s).<br><br>All orgs except the default org have a parent. Think of an Org Chart. If a user has permission on an Org, they also have permission on any descendants of that Org.<br><br>We have also allow a user with permission on a child org to see the items from parent orgs for certain collections. Those are: dashboards, discovery_scan_options, fields, files, groups, queries, roles, rules, scripts, summaries, widgets.<br><br>Do not forget you have granular control over what users can see and do using'] = 'Beidh liosta eagraíochtaí gaolmhara ag úsáideoir (orgs). Beidh gach org an t-úsáideoir a cheadú dóibh gníomhú ar míreanna laistigh den org sin de réir a ról(s).<br/><br/>Gach orgs ach amháin go bhfuil an org réamhshocraithe tuismitheoir. Smaoinigh ar Cairt Org. Má tá cead ag úsáideoir ar Org, tá cead acu freisin ar aon sliocht den Org sin.<br/><br/>Táimid tar éis cead a thabhairt d\'úsáideoir le cead ar leanbh nóg na míreanna ó thuismitheoir nó ó chigeanna a fheiceáil le haghaidh bailiúcháin áirithe. Glacfar iad: Painéal na nIonstraimí, fionnachtain_scan_options, réimsí, comhaid, grúpaí, ceisteanna, róil, rialacha, scripteanna, achoimrí, giuirléidí.<br/><br/>Ná déan dearmad go bhfuil tú rialú gráinneach ar cad is féidir le húsáideoirí a fheiceáil agus a dhéanamh ag baint úsáide as';

$GLOBALS["lang"]['A virtual private network (VPN) is an overlay network in which some of the links between nodes are carried by open connections or virtual circuits in some larger network (e.g., the Internet) instead of by physical wires. The data link layer protocols of the virtual network are said to be tunneled through the larger network when this is the case. One common application is secure communications through the public Internet, but a VPN need not have explicit security features, such as authentication or content encryption. VPNs, for example, can be used to separate the traffic of different user communities over an underlying network with strong security features.<br><br>VPN may have best-effort performance, or may have a defined service level agreement (SLA) between the VPN customer and the VPN service provider. Generally, a VPN has a topology more complex than point-to-point.'] = 'Tá líonra príobháideach fíorúil (VPN) líonra overlay ina bhfuil roinnt de na naisc idir nóid a dhéantar ag naisc oscailte nó ciorcaid fíorúil i roinnt líonra níos mó (m.sh., an Idirlíon) in ionad ag sreanga fisiceacha. Na prótacail ciseal nasc sonraí an líonra fíorúil a rá a bheith tolláin tríd an líonra níos mó nuair is é seo an cás. Is é an t-iarratas coiteann amháin cumarsáid slán tríd an Idirlíon poiblí, ach ní gá go mbeadh gnéithe slándála follasach ag VPN, mar shampla fíordheimhnithe nó criptithe ábhair. Is féidir VPNs, mar shampla, a úsáid chun trácht na bpobal úsáideoirí éagsúla a scaradh thar líonra bunúsach le gnéithe slándála láidre.<br/><br/>D\'fhéadfadh feidhmíocht is fearr a bheith ag VPN, nó d\'fhéadfadh comhaontú sainiúil leibhéal seirbhíse (SLA) a bheith aige idir an custaiméir VPN agus an soláthraí seirbhíse VPN. Go ginearálta, tá topology níos casta ag VPN ná pointe go pointe.';

$GLOBALS["lang"]['A vulnerability affecting availability may allow attackers to disrupt services, crash systems, or cause denial-of-service (DoS) (None, Low, High).'] = 'D\'fhéadfadh leochaileacht a dhéanann difear infhaighteacht ligean d\'ionsaithe seirbhísí, córais tuairteála, nó a chur faoi deara denial-of-service (DoS) (Níl, Íseal, Ard).';

$GLOBALS["lang"]['A vulnerability affecting confidentiality may allow attackers to read sensitive data, such as personal information, credentials, or proprietary business data (None, Low, High).'] = 'D\'fhéadfadh leochaileacht a dhéanann difear do rúndacht deis a thabhairt d\'ionsaithe sonraí íogaire a léamh, mar shampla faisnéis phearsanta, dintiúir, nó sonraí gnó dílseánaigh (Níl, Íseal, Ard).';

$GLOBALS["lang"]['A vulnerability affecting integrity may allow attackers to modify data, inject malicious code, or alter system configurations (None, Low, High).'] = 'D\'fhéadfadh leochaileacht a dhéanann difear ionracas deis a thabhairt d\'ionsaithe sonraí a mhodhnú, instealladh cód mailíseach, nó cumraíochtaí córas a athrú (Níl, Íseal, Ard).';

$GLOBALS["lang"]['A vulnerability can be editied and more specific package names provided where the enrichment data is insufficient or the generated SQL is not quite correct.'] = 'Is féidir leochaileacht a chur in eagar agus níos mó ainmneacha pacáiste ar leith ar fáil i gcás nach bhfuil na sonraí saibhrithe leordhóthanach nó nach bhfuil an SQL a ghintear ceart go leor.';

$GLOBALS["lang"]['A vulnerability item in Open-AudIT can be thought of as essentially a query against your database to determine your potential exposure to a given CVE report. A vulnerability is made up of the CVE report, along with enrichment data from FirstWave. These two items are combined to produce a suitable query that is automatically downloaded from FirstWave.'] = 'Is féidir le mír leochaileacht i Open-AudIT a shíl mar go bunúsach ceist i gcoinne do bhunachar sonraí a chinneadh do nochtadh féideartha le tuarascáil CVE ar leith. Tá leochaileacht déanta suas den tuarascáil CVE, chomh maith le sonraí saibhrithe ó FirstWave. Tá an dá mhír le chéile a thabhairt ar aird ceist oiriúnach go bhfuil íoslódáil go huathoibríoch ó FirstWave.';

$GLOBALS["lang"]['A wide area network (WAN) is a computer network that covers a large geographic area such as a city, country, or spans even intercontinental distances. A WAN uses a communications channel that combines many types of media such as telephone lines, cables, and air waves. A WAN often makes use of transmission facilities provided by common carriers, such as telephone companies. WAN technologies generally function at the lower three layers of the OSI reference model: the physical layer, the data link layer, and the network layer.'] = 'Tá líonra réimse leathan (WAN) líonra ríomhaire a chlúdaíonn limistéar geografach mór ar nós chathair, tír, nó spans fiú faid idir-chríochach. Úsáideann A WAN cainéal cumarsáide a chomhcheanglaíonn go leor cineálacha de na meáin ar nós línte teileafóin, cáblaí, agus tonnta aeir. Is minic a úsáideann WAN áiseanna tarchuir arna soláthar ag iompróirí coiteanna, amhail cuideachtaí teileafóin. Feidhmíonn teicneolaíochtaí WAN go ginearálta ag na trí shraith níos ísle den mhúnla tagartha OSI: an ciseal fisiceach, an ciseal nasc sonraí, agus an ciseal líonra.';

$GLOBALS["lang"]['AD Group'] = 'Grúpa AD';

$GLOBALS["lang"]['ADSL, HFC, ISDN, etc.'] = 'ADSL, HFC, ISDN, etc.';

$GLOBALS["lang"]['AIX'] = 'Amharc ar gach eolas';

$GLOBALS["lang"]['ALL IPs'] = 'GACH IPs';

$GLOBALS["lang"]['API / Web Access'] = 'API / Rochtain Gréasáin';

$GLOBALS["lang"]['API Documentation'] = 'Doiciméadú API';

$GLOBALS["lang"]['API Key required.'] = 'API Eochair ag teastáil.';

$GLOBALS["lang"]['API Result'] = 'Toradh API';

$GLOBALS["lang"]['About'] = 'Maidir le';

$GLOBALS["lang"]['Above are the only required items.'] = 'Os cionn iad na míreanna is gá amháin.';

$GLOBALS["lang"]['Accept'] = 'Glacadh le';

$GLOBALS["lang"]['Access Model'] = 'múnla Rochtain';

$GLOBALS["lang"]['access_point'] = 'Pointe Rochtana';

$GLOBALS["lang"]['Access Point'] = 'Pointe Rochtana';

$GLOBALS["lang"]['access_token'] = 'Rochtain a fháil ar chomhartha';

$GLOBALS["lang"]['Access Token'] = 'Rochtain a fháil ar chomhartha';

$GLOBALS["lang"]['Access to the admin$ share and RPC uses the SMB2 protocol.'] = 'Rochtain ar an sciar admin $ agus RPC Úsáideann an prótacal SMB2.';

$GLOBALS["lang"]['ack_by'] = 'Ac trí';

$GLOBALS["lang"]['Ack By'] = 'Ac trí';

$GLOBALS["lang"]['ack_date'] = 'Ack Dáta';

$GLOBALS["lang"]['Ack Date'] = 'Ack Dáta';

$GLOBALS["lang"]['ack_time'] = 'Am Ac';

$GLOBALS["lang"]['Ack Time'] = 'Am Ac';

$GLOBALS["lang"]['action'] = 'Gníomhaíocht';

$GLOBALS["lang"]['Action'] = 'Gníomhaíocht';

$GLOBALS["lang"]['action_audit'] = 'Plean Gníomhaíochta don Oideachas';

$GLOBALS["lang"]['Action Audit'] = 'Plean Gníomhaíochta don Oideachas';

$GLOBALS["lang"]['action_command'] = 'Ordú Gnímh';

$GLOBALS["lang"]['Action Command'] = 'Ordú Gnímh';

$GLOBALS["lang"]['action_date'] = 'Amharc ar gach eolas';

$GLOBALS["lang"]['Action Date'] = 'Amharc ar gach eolas';

$GLOBALS["lang"]['action_devices_assigned_to_location'] = 'Gléasanna Gníomhaíochta Sannta go Suíomh';

$GLOBALS["lang"]['Action Devices Assigned To Location'] = 'Gléasanna Gníomhaíochta Sannta go Suíomh';

$GLOBALS["lang"]['action_devices_assigned_to_org'] = 'Gléasanna Gníomhaíochta Sannta chun Org';

$GLOBALS["lang"]['Action Devices Assigned To Org'] = 'Gléasanna Gníomhaíochta Sannta chun Org';

$GLOBALS["lang"]['action_download'] = 'Amharc ar gach eolas';

$GLOBALS["lang"]['Action Download'] = 'Amharc ar gach eolas';

$GLOBALS["lang"]['action_uninstall'] = 'Tráth na gCeist';

$GLOBALS["lang"]['Action Uninstall'] = 'Tráth na gCeist';

$GLOBALS["lang"]['actioned'] = 'Gníomhaithe';

$GLOBALS["lang"]['Actioned'] = 'Gníomhaithe';

$GLOBALS["lang"]['actioned_by'] = 'Gníomhaithe ag';

$GLOBALS["lang"]['Actioned By'] = 'Gníomhaithe ag';

$GLOBALS["lang"]['actioned_date'] = 'Dáta Gníomhaíochta';

$GLOBALS["lang"]['Actioned Date'] = 'Dáta Gníomhaíochta';

$GLOBALS["lang"]['actions'] = 'Gníomhartha';

$GLOBALS["lang"]['Actions'] = 'Gníomhartha';

$GLOBALS["lang"]['Activate'] = 'Achtú';

$GLOBALS["lang"]['Activate Free License'] = 'Ceadúnas Gníomhacha Saor in Aisce';

$GLOBALS["lang"]['Activate Key'] = 'Gníomhachtaigh Key';

$GLOBALS["lang"]['Activate a free Enterprise license'] = 'Gníomhachtaigh ceadúnas Fiontraíochta saor in aisce';

$GLOBALS["lang"]['Active'] = 'Gníomhachtaigh';

$GLOBALS["lang"]['Active / Active'] = 'Gníomhacha / Gníomhach';

$GLOBALS["lang"]['Active / Passive'] = 'Gníomhach / éighníomhach';

$GLOBALS["lang"]['Active Directory'] = 'Eolaire Gníomhach';

$GLOBALS["lang"]['Active Directory Domain'] = 'Gníomhach Eolaire Fearainn';

$GLOBALS["lang"]['active_directory_ou'] = 'Eolaire Gníomhach Ou';

$GLOBALS["lang"]['Active Directory Ou'] = 'Eolaire Gníomhach Ou';

$GLOBALS["lang"]['Active Directory Server'] = 'Gníomhach Eolaire Freastalaí';

$GLOBALS["lang"]['Active Directory and OpenLDAP'] = 'Eolaire Gníomhach agus OpenLDAP';

$GLOBALS["lang"]['ad_domain'] = 'Fearainn ad';

$GLOBALS["lang"]['Ad Domain'] = 'Fearainn ad';

$GLOBALS["lang"]['ad_group'] = 'Grúpa Ad';

$GLOBALS["lang"]['Ad Group'] = 'Grúpa Ad';

$GLOBALS["lang"]['ad_server'] = 'Freastalaí ad';

$GLOBALS["lang"]['Ad Server'] = 'Freastalaí ad';

$GLOBALS["lang"]['Add'] = 'Déan teagmháil linn';

$GLOBALS["lang"]['Add Credentials'] = 'Amharc ar gach eolas';

$GLOBALS["lang"]['Add Device'] = 'Cuir le Gléas';

$GLOBALS["lang"]['Add Device to Application'] = 'Cuir Gléas le Iarratas';

$GLOBALS["lang"]['Add Device to Cluster'] = 'Cuir Gléas le Braisle';

$GLOBALS["lang"]['Add Exception'] = 'Cuir Eisceacht';

$GLOBALS["lang"]['Add Field'] = 'Tuilleadh eolais';

$GLOBALS["lang"]['Add If'] = 'Cuir le do thoil';

$GLOBALS["lang"]['Add Policies from Device'] = 'Polasaithe a chur le Gléas';

$GLOBALS["lang"]['Add Policy'] = 'An bhfuil a fhios agat?';

$GLOBALS["lang"]['Add Then'] = 'Cuir isteach ansin';

$GLOBALS["lang"]['Add Your Credentials'] = 'Cuir Do Dintiúirí';

$GLOBALS["lang"]['Add image'] = 'Cuir íomhá leis';

$GLOBALS["lang"]['additional_items'] = 'Míreanna breise';

$GLOBALS["lang"]['Additional Items'] = 'Míreanna breise';

$GLOBALS["lang"]['address'] = 'Seoladh:';

$GLOBALS["lang"]['Address'] = 'Seoladh:';

$GLOBALS["lang"]['Address any nonconformities'] = 'Seoladh aon neamhchinnteacht';

$GLOBALS["lang"]['Address audit findings and corrective actions'] = 'Seoladh torthaí iniúchóireachta agus gníomhartha ceartaitheacha';

$GLOBALS["lang"]['Admin'] = 'Amharc ar gach eolas';

$GLOBALS["lang"]['admin_status'] = 'Stádas Riarachán';

$GLOBALS["lang"]['Admin Status'] = 'Stádas Riarachán';

$GLOBALS["lang"]['advanced'] = 'bláthanna cumhra: cumhráin';

$GLOBALS["lang"]['Advanced'] = 'bláthanna cumhra: cumhráin';

$GLOBALS["lang"]['Afghanistan'] = 'An Afganastáin';

$GLOBALS["lang"]['After an Integration has been created, when you view the details of an Integration you will notice a field named Debug. This is set to no by default. Changing it to yes provides extra logging when an Integration is executed. Debug should not be left as yes. This is because the debug output will contain everything retrieved from external systems - including items such as WMI and SNMP credentials. The debug option should be used only when an issue has occurred and you wish to dig deeper in to see if you can determine why.'] = 'Tar éis Comhtháthú a cruthaíodh, nuair a fhéachann tú na sonraí ar Comhtháthú beidh tú faoi deara réimse ainmnithe Debug. Níl an Tweet seo ar fáil. Athrú sé go yes Soláthraíonn logáil breise nuair a Comhtháthú chun báis. Níor chóir Debug a fhágáil mar tá. Tá sé seo toisc go mbeidh an t-aschur debug gach rud a aisghabháil ó chórais seachtracha - lena n-áirítear míreanna ar nós WMI agus dintiúir SNMP. Ba chóir an rogha debug a úsáid ach amháin nuair a tharla saincheist agus is mian leat a tochailt níos doimhne i a fheiceáil más féidir leat a chinneadh cén fáth.';

$GLOBALS["lang"]['After completing the above, uninstall the agent.'] = 'Tar éis an méid thuas a chríochnú, an gníomhaire a dhíshuiteáil.';

$GLOBALS["lang"]['Agent? Discovery? Credentials?'] = 'Gníomhaire? Discovery? Dintiúirí?';

$GLOBALS["lang"]['agents'] = 'Gníomhairí';

$GLOBALS["lang"]['Agents'] = 'Gníomhairí';

$GLOBALS["lang"]['Agents entries can be created that specify a duration, a network and an operating system. If all tests match, the server then asks the agent to perform actions. If any test is not set, it is excluded from the <i>all must match</i> requirement.<br><br>You can create multiple agents and have the server check one or all agent entries. You might (for example) specify one agent that says <i>If the agent IP is in this subnet, set the location_id of the device</i>.<br><br>Another example might be not running an audit at all, rather download a script and run it. If the agent is installed with admin rights, you can now manage your machines without opening <strong>any</strong> ports from it to the world.</p><p>Enabling advanced agents means an agent can be instructed to download any file and execute any command. <strong>WARNING</strong>: This comes with security risks. This configuration will <strong>only</strong> function when running Open-AudIT using HTTPS and a valid (Certificate Authority provided) certificate for '] = 'Is féidir le gníomhairí iontrálacha a chruthú a shonraíonn ré, líonra agus córas oibriúcháin. Má mheaitseáil gach tástálacha, iarrann an freastalaí ansin ar an gníomhaire chun gníomhartha a dhéanamh. Mura bhfuil aon tástáil leagtha síos, tá sé eisiata ó <i>ní mór gach mheaitseáil</i> ceanglas.<br/><br/>Is féidir leat a chruthú gníomhairí éagsúla agus an freastalaí seiceáil amháin nó gach iontrálacha gníomhaire. D\'fhéadfá (mar shampla, a shonrú gníomhaire amháin a deir <i>Má tá an IP gníomhaire sa subnet seo, socraigh an suíomh_id na feiste</i>.<br/><br/>D\'fhéadfadh sampla eile a bheith ag rith iniúchadh ar chor ar bith, in áit a íoslódáil script agus é a reáchtáil. Má tá an gníomhaire suiteáilte le cearta admin, is féidir leat a bhainistiú anois do mheaisíní gan oscailt <strong>aon duine</strong> calafoirt ó sé ar fud an domhain.<p>Is féidir le gníomhairí chun cinn a chumasú gníomhaire a threorú chun aon chomhad a íoslódáil agus aon ordú a fhorghníomhú. <strong>RAON FEIDHME</strong>: Tagann sé seo le rioscaí slándála. Beidh an chumraíocht seo <strong>ach amháin</strong> feidhm nuair a reáchtáil Open-AudIT ag baint úsáide as HTTPS agus deimhniú bailí (Údarás Deimhniúcháin curtha ar fáil) le haghaidh </p>';

$GLOBALS["lang"]['Aggressive'] = 'Ionsaitheach agus Ionsaitheach';

$GLOBALS["lang"]['Aland Islands'] = 'Oileáin na hÉireann';

$GLOBALS["lang"]['Albania'] = 'Albáinis Albáinis';

$GLOBALS["lang"]['Albanian'] = 'An Albáinis';

$GLOBALS["lang"]['alert_style'] = 'Amharc ar gach eolas';

$GLOBALS["lang"]['Alert Style'] = 'Amharc ar gach eolas';

$GLOBALS["lang"]['Algeria'] = 'Ailgéir na hAilgéire';

$GLOBALS["lang"]['algorithm'] = 'Algartam';

$GLOBALS["lang"]['Algorithm'] = 'Algartam';

$GLOBALS["lang"]['alias'] = 'Cónaidhm na Rúise';

$GLOBALS["lang"]['Alias'] = 'Cónaidhm na Rúise';

$GLOBALS["lang"]['All'] = 'Gach duine';

$GLOBALS["lang"]['All IPs'] = 'Gach IPs';

$GLOBALS["lang"]['All Policies'] = 'Gach náisiúntacht';

$GLOBALS["lang"]['All Queued Items'] = 'Gach Míreanna Queued';

$GLOBALS["lang"]['All collections URLs use the format'] = 'Gach bailiúchán URLanna úsáid as an bhformáid';

$GLOBALS["lang"]['All device sub-tables contain a couple of important columns.'] = 'Tá gach fo-tábla gléas cúpla colúin tábhachtacha.';

$GLOBALS["lang"]['All devices with a type like computer.'] = 'Gach feistí le cineál cosúil le ríomhaire.';

$GLOBALS["lang"]['All devices with a type of computer or router.'] = 'Gach feistí le cineál ríomhaire nó ródaire.';

$GLOBALS["lang"]['All devices without a type of switch and printer.'] = 'Gach feistí gan cineál lasc agus printéir.';

$GLOBALS["lang"]['All devices without a type of switch and printer. Essentially the same as the above query.'] = 'Gach feistí gan cineál lasc agus printéir. Go bunúsach mar an gcéanna leis an gceist thuas.';

$GLOBALS["lang"]['All regular discovery options are also available for use in Device Seed Discoveries.'] = 'Tá gach roghanna fionnachtana rialta ar fáil freisin lena n-úsáid i bhFionnachtana Gléas Seed.';

$GLOBALS["lang"]['All tasks can be created the same in Windows and Linux. Tasks use the CRON method for scheduling execution.'] = 'Is féidir gach tascanna a chruthú mar an gcéanna i Windows agus Linux. Tascanna a úsáid ar an modh CRON le haghaidh fhorghníomhú sceidealú.';

$GLOBALS["lang"]['Along with this request for information, we send back to FirstWave datapoints that will give us some much needed information on feature use and your installation.'] = 'Chomh maith leis an iarratas seo le haghaidh faisnéise, cuirimid ar ais go dtí FirstWave datapoints a thabhairt dúinn roinnt eolais i bhfad ag teastáil ar úsáid gné agus do shuiteáil.';

$GLOBALS["lang"]['Also can be created from the'] = 'Chomh maith leis sin is féidir a chruthú as an';

$GLOBALS["lang"]['Alternatives'] = 'Roghanna eile';

$GLOBALS["lang"]['Amazon AWS Fields'] = 'Amazon AWS Réimsí';

$GLOBALS["lang"]['American Samoa'] = 'Meiriceánach Samoa';

$GLOBALS["lang"]['An Active Directory discovery will query Active Directory for a list of networks and scan the associated IPs just like a regular Subnet discovery.'] = 'Beidh teacht Eolaire Gníomhach cheist Eolaire Gníomhach le haghaidh liosta de líonraí agus scanadh na IPanna a bhaineann díreach cosúil le fionnachtain Subnet rialta.';

$GLOBALS["lang"]['An Org (organization) is the owner of most items in collections within Open-AudIT. With the exception of global items like <i>configuration</i>, most items are assigned to (owned by) an Org. A user has access to those items in a collection, that below to an Org the user has permission on.'] = 'An Org (orgánach) Is é an t-úinéir na n-ítimí is mó i mbailiúcháin laistigh Open-AudIT. Cé is moite de míreanna domhanda cosúil <i>chumraíocht chumraíocht</i>, an chuid is mó míreanna a shanntar do (úinéireacht ag) Org. Tá rochtain ag úsáideoir ar na míreanna sin i mbailiúchán, go bhfuil cead ag an úsáideoir faoi bhun Org.';

$GLOBALS["lang"]['An application is actively accepting TCP connections, UDP datagrams or SCTP associations on this port. Finding these is often the primary goal of port scanning. Security-minded people know that each open port is an avenue for attack. Attackers and pen-testers want to exploit the open ports, while administrators try to close or protect them with firewalls without thwarting legitimate users. Open ports are also interesting for non-security scans because they show services available for use on the network.'] = 'Tá iarratas ag glacadh go gníomhach naisc TCP, datagrams UDP nó cumainn SCTP ar an gcalafort. Is é seo a aimsiú go minic an príomhchuspóir a scanadh port. Slándáil-minded daoine a fhios go bhfuil gach calafort oscailte ascaill le haghaidh ionsaí. Agtackers agus pen-testers ag iarraidh a shaothrú na calafoirt oscailte, cé go iarracht riarthóirí a dhúnadh nó iad a chosaint le ballaí dóiteáin gan thwarting úsáideoirí dlisteanacha. Tá calafoirt oscailte suimiúil freisin le haghaidh scans neamhshlándála toisc go léiríonn siad seirbhísí atá ar fáil lena n-úsáid ar an líonra.';

$GLOBALS["lang"]['An array of <code>benchmarks.id</code>.'] = 'Sraith de <code>benchmarks.id</code>.';

$GLOBALS["lang"]['An array of <code>devices.id</code>.'] = 'Sraith de <code>devices.id</code>.';

$GLOBALS["lang"]['An array of object representing external links to more information.'] = 'Tá sraith de réad a léiríonn naisc seachtracha chun tuilleadh eolais a fháil.';

$GLOBALS["lang"]['An educated guess to the identity and type of device'] = 'Buille faoi thuairim oilte ar chéannacht agus ar chineál na feiste';

$GLOBALS["lang"]['An encrypted JSON document containing the required attributes depending on the <code>credentials.type</code>.'] = 'Doiciméad JSON criptithe ina bhfuil na tréithe is gá ag brath ar an <code>credentials.type</code>.';

$GLOBALS["lang"]['An enterprise private network is a network that a single organization builds to interconnect its office locations (e.g., production sites, head offices, remote offices, shops) so they can share computer resources.'] = 'Is líonra príobháideach fiontar a thógann eagraíocht amháin a idirnasc a láithreacha oifige (m.sh., láithreáin táirgthe, oifigí ceann, oifigí iargúlta, siopaí) ionas gur féidir leo acmhainní ríomhaireachta a roinnt.';

$GLOBALS["lang"]['An entry can be created using the web interface if the current user logged in has a role that contains the'] = 'Is féidir iontráil a chruthú ag baint úsáide as an comhéadan gréasáin má tá ról ag an úsáideoir reatha logáilte isteach ina bhfuil an';

$GLOBALS["lang"]['An example JSON POST body is below. This should be attached to the &quot;data&quot; form item.'] = 'Tá sampla JSON POST comhlacht thíos. Ba cheart é seo a cheangal leis an mír fhoirm "sonraí".';

$GLOBALS["lang"]['An example widget SQL showing devices counted per location.'] = 'Sampla ghiuirléid SQL feistí taispeáint chomhaireamh in aghaidh an suíomh.';

$GLOBALS["lang"]['An existing Open-AudIT user was authenticated and authorized by the LDAP server. Success.'] = 'Fíordheimhnigh úsáideoir Open-AudIT atá ann cheana féin agus d\'údaraigh an freastalaí LDAP. Rath.';

$GLOBALS["lang"]['An indication of the level of service required by this site.'] = 'Tá léiriú ar an leibhéal seirbhíse a theastaíonn ón láithreán seo.';

$GLOBALS["lang"]['An internal field that indicates if the discovery has completed.'] = 'Réimse inmheánach a léiríonn má tá an fionnachtain críochnaithe.';

$GLOBALS["lang"]['An open|filtered port is considered open (and will trigger device detection).<br>Previously, Open-AudIT considered an Nmap response of'] = 'Meastar go bhfuil calafort oscailte scagtha oscailte oscailte (agus cuirfidh sé brú ar fheiste).<br/>Roimhe seo, Open-Aud Bhreithnigh TF freagra ar léarscáil';

$GLOBALS["lang"]['An optional GeoCode'] = 'GeoCode roghnach';

$GLOBALS["lang"]['An optional password to use sudo.'] = 'Focal faire roghnach a úsáid sudo.';

$GLOBALS["lang"]['Analyzed'] = 'Anailíseoir';

$GLOBALS["lang"]['And finally, click Submit to execute this discovery.'] = 'Agus ar deireadh, cliceáil Cuir chun an fionnachtain seo a fhorghníomhú.';

$GLOBALS["lang"]['And if Something Goes Wrong?'] = 'Agus má Goes rud éigin Wrong?';

$GLOBALS["lang"]['And lastly click <i>Submit</i> to create your Open-AudIT Auth method for Entra.'] = 'Agus cliceáil ar deireadh <i>Cuir isteach</i> a chruthú do Oscailte-AudIT Auth modh do Entra.';

$GLOBALS["lang"]['And lastly, not so much a security issue - more peace of mind. The data structures are open and documented. You can view them'] = 'Agus ar deireadh, ní ceist slándála an oiread sin - síocháin níos mó intinne. Tá na struchtúir sonraí oscailte agus doiciméadaithe. Is féidir leat féachaint orthu';

$GLOBALS["lang"]['And provide a name - we humbly recommend Open-AudIT &#128512;, but you can name it anything you like. Make sure the option for <i>Integrate any other application you do not find in the gallery (Non-gallery)</i> is selected. And then click <i>Create<i>.'] = 'Agus ainm a chur ar fáil - molaimid humbly Open-AudIT ın, ach is féidir leat aon rud is mian leat a ainm. Bí cinnte an rogha le haghaidh <i>Comhtháthú aon iarratas eile nach bhfuil tú ag teacht ar an gailearaí (Non-gallery)</i> roghnaithe. Agus ansin cliceáil <i>tréimhse saoil: ilbhliantúil<i>.</i></i>';

$GLOBALS["lang"]['And so much more.'] = 'Agus an oiread sin níos mó.';

$GLOBALS["lang"]['Andorra'] = 'taiseachas aeir: fliuch';

$GLOBALS["lang"]['Angola'] = 'An tSraith Shinsearach';

$GLOBALS["lang"]['Anguilla'] = 'cineál gas: in airde';

$GLOBALS["lang"]['Annex A Controls'] = 'Iarscríbhinn A Rialuithe';

$GLOBALS["lang"]['Antarctica'] = 'taiseachas aeir: fliuch';

$GLOBALS["lang"]['AntiVirus'] = 'Frithvíreas';

$GLOBALS["lang"]['AntiVirus Packages'] = 'AntiVirus Pacáistí';

$GLOBALS["lang"]['Antigua and Barbuda'] = 'Antigua agus Barbuda';

$GLOBALS["lang"]['Antivirus'] = 'Antivirus';

$GLOBALS["lang"]['Any TCP ports (comma seperated, no spaces) you wish to exclude from this discovery. Only available when using Nmap 7+.'] = 'Aon calafoirt TCP (comma seperated, aon spásanna) mian leat a eisiamh as an fionnachtain. Níl ach ar fáil nuair a úsáideann Nmap 7+.';

$GLOBALS["lang"]['Any UDP ports (comma seperated, no spaces) you wish to exclude from this discovery. Only available when using Nmap 7+.'] = 'Aon calafoirt UDP (comóradh seperated, aon spásanna) mian leat a eisiamh as an fionnachtain. Níl ach ar fáil nuair a úsáideann Nmap 7+.';

$GLOBALS["lang"]['Any additional documentation you need.'] = 'Aon doiciméadú breise is gá duit.';

$GLOBALS["lang"]['Any additional notes you care to make.'] = 'Aon nótaí breise a thugann tú aire a dhéanamh.';

$GLOBALS["lang"]['Any attributes followed by a * indicate that CVSS data less than v4 was used to complete this field. By default, we attempt to use v4 fields, however if they are not populated we will fallback to the previous version(s) for attributes.'] = 'Léiríonn aon tréithe ina dhiaidh sin * gur úsáideadh sonraí CVSS níos lú ná v4 chun an réimse seo a chur i gcrích. De réir réamhshocraithe, iarracht muid a úsáid v4 réimsí, áfach, más rud é nach bhfuil siad daonra beidh muid ag fallback go dtí an leagan roimhe seo(s) le haghaidh tréithe.';

$GLOBALS["lang"]['Any devices will be assigned to this Org when they run their audit script (if set).'] = 'Beidh aon feistí a shannadh don Org nuair a ritheann siad a script iniúchóireachta (má leagtar).';

$GLOBALS["lang"]['Any devices will be assigned to this Org when they run their audit script (if set). Links to <code>orgs.id</code>.'] = 'Beidh aon feistí a shannadh don Org nuair a ritheann siad a script iniúchóireachta (má leagtar). Naisc go dtí <code>orgs.id</code>.';

$GLOBALS["lang"]['Any discovered devices will be assigned to this Location if set. Links to <code>locations.id</code>.'] = 'Sannfar aon ghléasanna a aimsíodh don Suíomh seo má shocraítear iad. Naisc go dtí <code>locations.id</code>.';

$GLOBALS["lang"]['Any discovered devices will be assigned to this Location when they run their audit script (if set).'] = 'Beidh aon feistí amach a shannadh chuig an Suíomh nuair a ritheann siad a script iniúchóireachta (má leagtar).';

$GLOBALS["lang"]['Any discovered devices will be assigned to this Location when they run their audit script (if set). Links to <code>locations.id</code>.'] = 'Beidh aon feistí amach a shannadh chuig an Suíomh nuair a ritheann siad a script iniúchóireachta (má leagtar). Naisc go dtí <code>locations.id</code>.';

$GLOBALS["lang"]['Any discovered devices will be assigned to this Org if set. If not set, they are assigned to the <code>org_id</code> of this discovery. Links to <code>orgs.id</code>.'] = 'Beidh aon feistí amach a shannadh don Org má leagtar. Mura bhfuil siad leagtha síos, tá siad sannta don <code>org_id</code> den fhionnachtain seo. Naisc go dtí <code>orgs.id</code>.';

$GLOBALS["lang"]['Any files found in this manner are stored in the <i>executable</i> table as per any other device component.'] = 'Aon chomhaid a fhaightear ar an mbealach seo a stóráil sa <i>inrite</i> tábla de réir aon chomhpháirt feiste eile.';

$GLOBALS["lang"]['Any required filter. NOTE: When type = traffic, this represents the font-awesome icon.'] = 'Aon scagaire ag teastáil. TABHAIR FAOI DEARA: Nuair a cineál = trácht, léiríonn sé seo an deilbhín cló-awesome.';

$GLOBALS["lang"]['Any specific TCP ports you wish tested (comma seperated, no spaces).'] = 'Aon calafoirt TCP ar leith is mian leat tástáil (comma seperated, aon spásanna).';

$GLOBALS["lang"]['Any specific UDP ports you wish tested (comma seperated, no spaces).'] = 'Aon calafoirt UDP ar leith mian leat a thástáil (comma seperated, aon spásanna).';

$GLOBALS["lang"]['Any user uploaded images are placed here.'] = 'Cuirtear íomhánna uaslódáilte aon úsáideora anseo.';

$GLOBALS["lang"]['Application'] = 'Iarratas a Dhéanamh';

$GLOBALS["lang"]['Application Definitions'] = 'Amharc ar gach eolas';

$GLOBALS["lang"]['application_id'] = 'ID Iarratais';

$GLOBALS["lang"]['Application ID'] = 'ID Iarratais';

$GLOBALS["lang"]['Application Licenses'] = 'Ceadúnas Iarratais';

$GLOBALS["lang"]['Application, Operating System or Hardware.'] = 'Iarratas, Córas Oibriúcháin nó Crua-earraí.';

$GLOBALS["lang"]['applications'] = 'Amharc ar gach eolas';

$GLOBALS["lang"]['Applications'] = 'Amharc ar gach eolas';

$GLOBALS["lang"]['Applications are an Enterprise only feature.'] = 'Is gné Fiontraíochta amháin iad na hiarratais.';

$GLOBALS["lang"]['Applications are being introduced in Open-AudIT 2.2 with a view to expand on the concept as further development is made.'] = 'Tá iarratais á dtabhairt isteach in Open-AudIT 2.2 d’fhonn leathnú ar an gcoincheap mar go ndéantar tuilleadh forbartha.';

$GLOBALS["lang"]['applied'] = 'Feidhmeach';

$GLOBALS["lang"]['Applied'] = 'Feidhmeach';

$GLOBALS["lang"]['Approved'] = 'Ceadaithe';

$GLOBALS["lang"]['Approved Packages'] = 'Pacáiste Ceadaithe';

$GLOBALS["lang"]['April'] = 'Aibreán 2018';

$GLOBALS["lang"]['Arabic'] = 'Araibis Araibis';

$GLOBALS["lang"]['architecture'] = 'Ailtireacht';

$GLOBALS["lang"]['Architecture'] = 'Ailtireacht';

$GLOBALS["lang"]['Are you sure you want to delete this input item?'] = 'An bhfuil tú cinnte gur mhaith leat an mhír ionchuir seo a scriosadh?';

$GLOBALS["lang"]['Are you sure you want to delete this output item?'] = 'An bhfuil tú cinnte gur mhaith leat an mhír aschur seo a scriosadh?';

$GLOBALS["lang"]['Are you sure?'] = 'An bhfuil tú cinnte?';

$GLOBALS["lang"]['Are you sure? This will remove all queue entries and prevent the remaining IPs from being discovered.'] = 'An bhfuil tú cinnte? Beidh sé seo a bhaint gach iontrálacha scuaine agus cosc a chur ar na IPanna atá fágtha ó bheith amach.';

$GLOBALS["lang"]['Are you sure? This will reset the queue processing count and could cause load on the server.'] = 'An bhfuil tú cinnte? Beidh sé seo athshocrú an líon próiseála scuaine agus d\'fhéadfadh a chur faoi deara ualach ar an bhfreastalaí.';

$GLOBALS["lang"]['area'] = 'Amharc ar gach eolas';

$GLOBALS["lang"]['Area'] = 'Amharc ar gach eolas';

$GLOBALS["lang"]['Argentina'] = 'An Airgintín';

$GLOBALS["lang"]['Armenia'] = 'cineál gas: in airde';

$GLOBALS["lang"]['arp'] = 'taiseachas aeir: fliuch';

$GLOBALS["lang"]['Arp'] = 'taiseachas aeir: fliuch';

$GLOBALS["lang"]['Aruba'] = 'cineál gas: in airde';

$GLOBALS["lang"]['As a reminder of how authorisations works in Open-AudIT, see'] = 'Mar mheabhrúchán ar an gcaoi a n-oibríonn údaruithe in Open-AudIT, féach';

$GLOBALS["lang"]['As a result, we <strong>must</strong> have the admin$ share available to the discovery credentials user. Please check the target Windows machine provides <i>write</i> access for the discovery credentials user.<br>'] = 'Mar thoradh air sin, táimid <strong>ní mór</strong> Tá an sciar admin$ ar fáil don úsáideoir dintiúir fionnachtana. Déan seiceáil ar an sprioc Windows meaisín Soláthraíonn <i>scríobh</i> rochtain don úsáideoir dintiúir fionnachtana.<br/>';

$GLOBALS["lang"]['As mentioned above, the developers do not speak all the translation languages offered. This means we cannot review with acuracy, the translated text. We do try for a cursory review. If you see something that is not translated correctly, you can change it yourself. Edit the appropriate language file (as below) and find the text to be changed. Maybe it does not exist and you need to add it. Just change the text, save the file and refresh your we page. No need to restart any services/daemons for it to take effect. You might need to force refresh your browser.'] = 'Mar a luadh thuas, ní dhéanann na forbróirí labhairt go léir na teangacha aistriúcháin ar fáil. Ciallaíonn sé seo nach féidir linn athbhreithniú a dhéanamh le acuracy, an téacs aistrithe. Déanaimid iarracht athbhreithniú leigheas a dhéanamh. Má fheiceann tú rud éigin nach bhfuil aistrithe i gceart, is féidir leat é féin a athrú. Cuir an comhad teanga chuí in eagar (mar atá thíos) agus faigh an téacs le hathrú. B\'fhéidir nach bhfuil sé ann agus is gá duit é a chur leis. Just a athrú ar an téacs, a shábháil ar an comhad agus a athnuachan do leathanach againn. Ní gá aon seirbhísí / taispeántais atosú chun éifeacht a ghlacadh. D\'fhéadfá a bheith i bhfeidhm athnuachan do bhrabhsálaí.';

$GLOBALS["lang"]['As per the OpenSCAP benchmarks - <i>Do not attempt to implement any of the settings in this benchmark without first testing them in a non-operational environment. The creators of this benchmark assume no responsibility whatsoever for its use by other parties, and makes no guarantees, expressed or implied, about its quality, reliability, or any other characteristic.</i><br><br>Seriously, do not blindly start <i>fixing</i> issues revealed after running a benchmark without first thoroughly testing in a non-production, identical environment.'] = 'De réir na dtagarmharcanna OpenSCAP - <i>Ná déan iarracht aon cheann de na socruithe sa tagarmharc seo a chur chun feidhme gan iad a thástáil ar dtús i dtimpeallacht neamhoibríochtúil. Glacann cruthaitheoirí an tagarmhairc seo aon fhreagracht ar bith as a úsáid ag páirtithe eile, agus ní dhéanann sé aon ráthaíochtaí, sainráite nó intuigthe, faoina cháilíocht, a iontaofacht, nó aon tréith eile.</i><br/><br/>Go hiontach, ná tosú go dall <i>a shocrú</i> saincheisteanna a nochtadh tar éis tagarmharc a rith gan an chéad tástáil go maith i dtimpeallacht neamhtháirgthe, comhionann.';

$GLOBALS["lang"]['As per the attributes for device environments. Production, Training, et al.'] = 'De réir na tréithe do thimpeallachtaí gléas. Táirgeadh, Oiliúint, agus al.';

$GLOBALS["lang"]['As the audit script uses bash, you can use the wildcard of * when you are defining directories and exclusions.'] = 'Mar a úsáideann an script iniúchóireachta bash, is féidir leat an cárta fiáin de * a úsáid nuair a bhíonn tú ag sainiú eolairí agus eisiamh.';

$GLOBALS["lang"]['As usual, go to menu → Manage → Integrations → Create Integration. As above, if you are running on Linux and you have NMIS on the same server, you do not need to do anything other than click <i>Submit</i>. I cannot make it easier than that.'] = 'Mar is gnách, téigh go dtí roghchlár → Comhtháthú → Cruthaigh Comhtháthú. Mar atá thuas, má tá tú ag rith ar Linux agus tá tú NMIS ar an bhfreastalaí céanna, ní gá duit aon rud eile a dhéanamh seachas cliceáil <i>Cuir isteach</i>. Ní féidir liom é a dhéanamh níos éasca ná sin.';

$GLOBALS["lang"]['As we run Discoveries and collect device results we populate the list of networks. The Blessed Subnets feature uses this list of networks to only accept data from devices on those networks.'] = 'Mar a reáchtáil againn Discoveries agus a bhailiú torthaí gléas populate muid an liosta de líonraí. Úsáideann gné na Subnets Beannaithe an liosta seo de líonraí a ghlacadh ach amháin sonraí ó feistí ar na líonraí sin.';

$GLOBALS["lang"]['As you have Collectors registered, please choose where to execute this discovery.'] = 'Mar tá tú Bailitheoirí cláraithe, le do thoil a roghnú nuair a fhorghníomhú an fionnachtain.';

$GLOBALS["lang"]['Ask me later'] = 'Iarr mé níos déanaí';

$GLOBALS["lang"]['Ask the Community for help or contribute answers for others.'] = 'Iarr ar an gComhphobal cabhrú le daoine eile nó freagraí a thabhairt orthu.';

$GLOBALS["lang"]['aspect_ratio'] = 'PATIO ionchas';

$GLOBALS["lang"]['Aspect Ratio'] = 'PATIO ionchas';

$GLOBALS["lang"]['Asset ID'] = 'ID sócmhainní';

$GLOBALS["lang"]['asset_ident'] = 'Aitheantas Sócmhainní';

$GLOBALS["lang"]['Asset Ident'] = 'Aitheantas Sócmhainní';

$GLOBALS["lang"]['asset_number'] = 'Uimhir Aitheantais';

$GLOBALS["lang"]['Asset Number'] = 'Uimhir Aitheantais';

$GLOBALS["lang"]['asset_tag'] = 'Clib Sócmhainní';

$GLOBALS["lang"]['Asset Tag'] = 'Clib Sócmhainní';

$GLOBALS["lang"]['Assign Device to Application'] = 'Gléas a shannadh chun Iarratas';

$GLOBALS["lang"]['Assign Device to Cluster'] = 'Gléas Sannadh le Braisle';

$GLOBALS["lang"]['Assign Device to Location'] = 'Gléas a shannadh do Suíomh';

$GLOBALS["lang"]['Assign Device to Organisation'] = 'Gléas a shannadh don Eagraíocht';

$GLOBALS["lang"]['Assign Devices to Location'] = 'Gléasanna a shannadh chuig Suíomh';

$GLOBALS["lang"]['Assign Devices to Organisation'] = 'Gléasanna a shannadh don Eagraíocht';

$GLOBALS["lang"]['Assign an ISMS manager or team'] = 'Sannadh bainisteoir ISMS nó foireann';

$GLOBALS["lang"]['Assign an Operator'] = 'Ceoltóir a shannadh';

$GLOBALS["lang"]['Assign any audited devices to this Org. Leave blank to leave device in currently assigned Org (or to set default).'] = 'Sannadh aon feistí iniúchta chuig an Org seo. Fág folamh gléas a fhágáil i Org atá sannta faoi láthair (nó mainneachtain a shocrú).';

$GLOBALS["lang"]['Assign the Device to a Location'] = 'An Gléas a shannadh chuig Suíomh';

$GLOBALS["lang"]['Assign the device to an Org'] = 'An gléas a shannadh chuig Org';

$GLOBALS["lang"]['Assigned To'] = 'Sannadh Chun';

$GLOBALS["lang"]['Assigning Discovered Devices'] = 'Gléasanna Discovered a shannadh';

$GLOBALS["lang"]['At present we can use netstat_ports, software and users.'] = 'Faoi láthair is féidir linn a úsáid netstat_ports, bogearraí agus úsáideoirí.';

$GLOBALS["lang"]['attached_device_id'] = 'ID Gléas scoite';

$GLOBALS["lang"]['Attached Device ID'] = 'ID Gléas scoite';

$GLOBALS["lang"]['attached_to'] = 'Ceangailte le';

$GLOBALS["lang"]['Attached To'] = 'Ceangailte le';

$GLOBALS["lang"]['attachment'] = 'Ceangailteacha';

$GLOBALS["lang"]['Attachment'] = 'Ceangailteacha';

$GLOBALS["lang"]['attachments'] = 'Ceangailteacha';

$GLOBALS["lang"]['Attachments'] = 'Ceangailteacha';

$GLOBALS["lang"]['attack_complexity'] = 'Coimpléascacht ionsaí';

$GLOBALS["lang"]['Attack Complexity'] = 'Coimpléascacht ionsaí';

$GLOBALS["lang"]['attack_requirements'] = 'Riachtanais ionsaí';

$GLOBALS["lang"]['Attack Requirements'] = 'Riachtanais ionsaí';

$GLOBALS["lang"]['attack_vector'] = 'ionsaí Veicteoir';

$GLOBALS["lang"]['Attack Vector'] = 'ionsaí Veicteoir';

$GLOBALS["lang"]['Attempt to ping the device if we are not auditing localhost.'] = 'Attempt chun ping an gléas mura bhfuil muid ag iniúchadh localhost.';

$GLOBALS["lang"]['Attribute'] = 'Ag tagairt';

$GLOBALS["lang"]['attributes'] = 'Ranníocaí';

$GLOBALS["lang"]['Attributes'] = 'Ranníocaí';

$GLOBALS["lang"]['Attributes are stored for Open-AudIT to use for particular fields, at present all fields are based on the devices, locations, orgs and queries tables. The attributes you can edit are associated with the following columns: Class, Environment, Status & Type.'] = 'Tá comharthaí stóráilte le haghaidh Open-AudIT a úsáid le haghaidh réimsí áirithe, faoi láthair tá gach réimse bunaithe ar na feistí, suímh, orgs agus táblaí ceisteanna. Na tréithe is féidir leat in eagar a bhaineann leis na colúin seo a leanas: Aicme, Comhshaol, Stádas agus Cineál.';

$GLOBALS["lang"]['Audit'] = 'irl - Library Service';

$GLOBALS["lang"]['Audit AIX'] = 'Iniúchadh a dhéanamh';

$GLOBALS["lang"]['Audit DNS'] = 'Iniúchadh DNS';

$GLOBALS["lang"]['Audit ESXi'] = 'Iniúchadh ESXi';

$GLOBALS["lang"]['Audit Linux'] = 'Iniúchóireacht Linux';

$GLOBALS["lang"]['audit_log'] = 'Logáil isteach';

$GLOBALS["lang"]['Audit Log'] = 'Logáil isteach';

$GLOBALS["lang"]['Audit Mount Point'] = 'Iniúchadh Mount Point';

$GLOBALS["lang"]['Audit My PC'] = 'Iniúchadh Mo ríomhaire';

$GLOBALS["lang"]['Audit Netstat'] = 'Iniúchadh Netstat';

$GLOBALS["lang"]['Audit OSX'] = 'Iniúchadh OSX';

$GLOBALS["lang"]['Audit Result Input'] = 'Toradh Iniúchta Ionchur';

$GLOBALS["lang"]['Audit Software'] = 'Bogearraí Iniúchadh';

$GLOBALS["lang"]['Audit Status'] = 'Stádas Iniúchóireachta';

$GLOBALS["lang"]['Audit Win32 Product'] = 'Plean Gníomhaíochta don Oideachas Táirge Táirge';

$GLOBALS["lang"]['Audit Windows'] = 'Iniúchadh Windows';

$GLOBALS["lang"]['Audit the Device'] = 'Iniúchadh an Gléas';

$GLOBALS["lang"]['Audits'] = 'Iniúchóireacht';

$GLOBALS["lang"]['August'] = 'Amharc ar gach seirbhís';

$GLOBALS["lang"]['Australia'] = 'taiseachas aeir: fliuch';

$GLOBALS["lang"]['Austria'] = 'an Ostair';

$GLOBALS["lang"]['Auth'] = 'Uisce agus Séarachas';

$GLOBALS["lang"]['auth'] = 'Uisce agus Séarachas';

$GLOBALS["lang"]['Auth Methods'] = 'Auth Modhanna';

$GLOBALS["lang"]['Authenticate only'] = 'Fíordheimhniú amháin';

$GLOBALS["lang"]['Authentication Passphrase'] = 'Fíordheimhniú Passphrase';

$GLOBALS["lang"]['Authentication Protocol'] = 'Prótacal Fíordheimhniú';

$GLOBALS["lang"]['authority_key_ident'] = 'An tÚdarás Keydent';

$GLOBALS["lang"]['Authority Key Ident'] = 'An tÚdarás Keydent';

$GLOBALS["lang"]['Auto'] = 'Auto Auto Auto Auto Auto';

$GLOBALS["lang"]['auto_renew'] = 'Auto Renew';

$GLOBALS["lang"]['Auto Renew'] = 'Auto Renew';

$GLOBALS["lang"]['Auto populated by the Open-AudIT Server.'] = 'Auto daonra ag an Freastalaí Oscailte-AudIT.';

$GLOBALS["lang"]['AutoRenew'] = 'Déan Teagmháil Linn';

$GLOBALS["lang"]['automatable'] = 'Uathoibríoch';

$GLOBALS["lang"]['Automatable'] = 'Uathoibríoch';

$GLOBALS["lang"]['Automatically populated based on the Collectors OS.'] = 'Go huathoibríoch daonra bunaithe ar an Bailitheoirí OS.';

$GLOBALS["lang"]['availability'] = '. Infhaighteacht';

$GLOBALS["lang"]['Availability'] = '. Infhaighteacht';

$GLOBALS["lang"]['Available Benchmarks'] = 'Benchmarks ar fáil';

$GLOBALS["lang"]['Awaiting Analysis'] = 'Ag fanacht Anailís';

$GLOBALS["lang"]['Azerbaijan'] = 'an Ríocht Aontaithe';

$GLOBALS["lang"]['Azerbaijani'] = 'An Asarbaiseáin';

$GLOBALS["lang"]['Azure Active Directory'] = 'Eolaire Gníomhach Azure';

$GLOBALS["lang"]['BTU Max'] = 'BTU Max';

$GLOBALS["lang"]['BTU Total'] = 'BTU Iomlán';

$GLOBALS["lang"]['Backbone network'] = 'Líonra cnámh droma';

$GLOBALS["lang"]['Backup'] = 'Cúltaca an Gharda Síochána';

$GLOBALS["lang"]['Bahamas the'] = 'Bahamas an';

$GLOBALS["lang"]['Bahrain'] = 'taiseachas aeir: fliuch';

$GLOBALS["lang"]['Bangladesh'] = 'An bhfuil a fhios agat?';

$GLOBALS["lang"]['bank'] = 'Banc an Bhainc';

$GLOBALS["lang"]['Bank'] = 'Banc an Bhainc';

$GLOBALS["lang"]['Banned'] = 'Toir agus Crainn';

$GLOBALS["lang"]['Banned Packages'] = 'Plean Gníomhaíochta don Oideachas';

$GLOBALS["lang"]['bar_code'] = 'Cód Barr';

$GLOBALS["lang"]['Bar Code'] = 'Cód Barr';

$GLOBALS["lang"]['Barbados'] = 'riachtanais uisce: measartha';

$GLOBALS["lang"]['Base DN'] = 'Bonn DN';

$GLOBALS["lang"]['base_score'] = 'Scór bonn';

$GLOBALS["lang"]['Base Score'] = 'Scór bonn';

$GLOBALS["lang"]['base_severity'] = 'Bonn Severity';

$GLOBALS["lang"]['Base Severity'] = 'Bonn Severity';

$GLOBALS["lang"]['based_on'] = 'Bunaithe ar';

$GLOBALS["lang"]['Based On'] = 'Bunaithe ar';

$GLOBALS["lang"]['baseline'] = 'Bunaithe ar';

$GLOBALS["lang"]['Baseline'] = 'Bunaithe ar';

$GLOBALS["lang"]['baseline_id'] = 'ID bonnlíne';

$GLOBALS["lang"]['Baseline ID'] = 'ID bonnlíne';

$GLOBALS["lang"]['baselines'] = 'Bunús agus';

$GLOBALS["lang"]['Baselines'] = 'Bunús agus';

$GLOBALS["lang"]['baselines_policies'] = 'Plean Gníomhaíochta don Oideachas';

$GLOBALS["lang"]['Baselines Policies'] = 'Plean Gníomhaíochta don Oideachas';

$GLOBALS["lang"]['Baselines Policy'] = 'Polasaí Bunaithe';

$GLOBALS["lang"]['Baselines Policy Details'] = 'Sonraí an Bheartais Bunaithe';

$GLOBALS["lang"]['baselines_results'] = 'Torthaí Bunaithe';

$GLOBALS["lang"]['Baselines Results'] = 'Torthaí Bunaithe';

$GLOBALS["lang"]['Baselines can compare netstat ports, users and software.'] = 'Is féidir le Baselines a chur i gcomparáid calafoirt glanstat, úsáideoirí agus bogearraí.';

$GLOBALS["lang"]['Baselines enable you to combine audit data with a set of attributes you have previously defined (your baseline) to determine compliance of devices.'] = 'Cuireann Baselines ar chumas tú sonraí iniúchóireachta a chur le chéile le sraith tréithe atá sainithe agat roimhe seo (do bunlíne) chun comhlíonadh feistí a chinneadh.';

$GLOBALS["lang"]['Baselines for Device Comparison'] = 'Baselines for Gléas Comparáid';

$GLOBALS["lang"]['Basic'] = 'Bunúsach';

$GLOBALS["lang"]['Basque'] = 'taiseachas aeir: fliuch';

$GLOBALS["lang"]['Because we try to be as transparent as possible, here is your actual data that we send.'] = 'Toisc go iarracht muid a bheith chomh trédhearcach agus is féidir, tá anseo do shonraí iarbhír a sheoladh againn.';

$GLOBALS["lang"]['Being able to determine which machines are configured in the same way is a major part of systems administration and auditing – and now reporting on that will be made simple and automated. Once you define your baseline it will automatically run against a set of devices on a predetermined schedule. The output of these executed baselines will be available for web viewing, importing into a third party system or even as a printed report.<br><br>For auditing and management purposes it can be advantageous to baseline individual devices against a fixed, known good device. Baselines enable you to combine audit data with a set of attributes you have previously defined (your baseline) to determine compliance of devices.'] = 'Bheith in ann a chinneadh cé na meaisíní atá cumraithe ar an mbealach céanna is cuid mhór de na córais riaracháin agus iniúchóireacht - agus anois tuairisciú ar sin a dhéanamh simplí agus uathoibrithe. Nuair a bheidh tú a shainiú do baseline beidh sé ar siúl go huathoibríoch i gcoinne sraith de feistí ar sceideal réamhshocraithe. Beidh an t-aschur de na bunlínte chun báis ar fáil le haghaidh féachana gréasáin, allmhairiú isteach i gcóras tríú páirtí nó fiú mar thuairisc chlóite.<br/><br/>Chun críocha iniúchóireachta agus bainistíochta is féidir é a bheith buntáisteach do feistí aonair bonnlíne i gcoinne gléas seasta, ar a dtugtar maith. Cuireann Baselines ar chumas tú sonraí iniúchóireachta a chur le chéile le sraith tréithe atá sainithe agat roimhe seo (do bunlíne) chun comhlíonadh feistí a chinneadh.';

$GLOBALS["lang"]['Belarus'] = 'bláthanna cumhra: cumhráin';

$GLOBALS["lang"]['Belgium'] = 'An Bheilg';

$GLOBALS["lang"]['Belize'] = 'Belize';

$GLOBALS["lang"]['Below is an example of the required csv format.'] = 'Anseo thíos tá sampla den fhormáid csv ag teastáil.';

$GLOBALS["lang"]['Below these lines are where the variables are injected into the script. Following on from our earlier example, the Linux audit script is populated with our directory like so'] = 'Anseo thíos tá na línte áit a bhfuil na hathróga instealladh isteach sa script. Tar éis as ár sampla níos luaithe, tá an script iniúchóireachta Linux daonra lenár eolaire mar sin';

$GLOBALS["lang"]['Below you can see an example Org Chart. If a user has permission on the <i>Finance A</i> Org, they also have permission on the descendant Orgs of Dept A, B & C. This is regardless of the collection requested.<br><br>If the collection requested allows ascendants, then the user will also have access to Company #1 and Default Org items. This is for (as above) queries, groups, et al.<br><br>Note - A user may have access to a query from Default Org, but that is the query itself not the result. The result will only show devices that the user has access to - IE devices from Finance A and Dept A, B & C.'] = 'Thíos is féidir leat a fheiceáil mar shampla Org Chart. Má tá cead ag úsáideoir ar an <i>Amharc ar gach eolas</i> Org, tá cead acu freisin ar sliocht Orgs na Roinne A, B &amp; C. Is beag beann ar an mbailiúchán a iarrtar.<br/><br/>Má cheadaíonn an bailiúchán a iarrtar ascendants, ansin beidh an t-úsáideoir freisin rochtain ar Chuideachta #1 agus Default Org míreanna. Tá sé seo le haghaidh (mar atá thuas) ceisteanna, grúpaí, agus al.<br/><br/>Tabhair faoi deara - D\'fhéadfadh go mbeadh rochtain ag úsáideoir ar cheist ó Default Org, ach is é sin an cheist féin nach bhfuil an toradh. Taispeánfaidh an toradh ach feistí go bhfuil rochtain ag an úsáideoir ar - feistí IE ó Airgeadas A agus Doimhneacht A, B &amp; C.';

$GLOBALS["lang"]['Benchmark'] = 'Benchmark';

$GLOBALS["lang"]['benchmark_id'] = 'Benchmark ID';

$GLOBALS["lang"]['Benchmark ID'] = 'Benchmark ID';

$GLOBALS["lang"]['Benchmark Tasks are created automatically when a benchmark is created.'] = 'Cruthaítear Tascanna tagarmharc go huathoibríoch nuair a chruthaítear tagarmharc.';

$GLOBALS["lang"]['Benchmark execution and processing can take a lengthy amount of time, hence the preference to schedule them and not run them ad-hoc.'] = 'Is féidir le forghníomhú agus próiseáil Benchmark a ghlacadh méid fada ama, dá bhrí sin, an rogha a sceideal iad agus ní reáchtáil iad ad-hoc.';

$GLOBALS["lang"]['benchmarks'] = 'Tagarmharcanna';

$GLOBALS["lang"]['Benchmarks'] = 'Tagarmharcanna';

$GLOBALS["lang"]['benchmarks_exceptions'] = 'Benchmarks Eisceachtaí';

$GLOBALS["lang"]['Benchmarks Exceptions'] = 'Benchmarks Eisceachtaí';

$GLOBALS["lang"]['benchmarks_log'] = 'cliceáil grianghraf a mhéadú';

$GLOBALS["lang"]['Benchmarks Log'] = 'cliceáil grianghraf a mhéadú';

$GLOBALS["lang"]['benchmarks_policies'] = 'Polasaithe tagarmharcanna';

$GLOBALS["lang"]['Benchmarks Policies'] = 'Polasaithe tagarmharcanna';

$GLOBALS["lang"]['benchmarks_result'] = 'Toradh tagarmharcanna';

$GLOBALS["lang"]['Benchmarks Result'] = 'Toradh tagarmharcanna';

$GLOBALS["lang"]['Benchmarks are created by providing an operating system and Version, combined with a specific guide and a list of machines to execute it upon. After creation, benchmarks are executed against the list of machines on a schedule.'] = 'Benchmarks a cruthaíodh trí chóras oibriúcháin agus Leagan, in éineacht le treoir ar leith agus liosta de na meaisíní a fhorghníomhú air. Tar éis a chruthú, déantar tagarmharcanna a fhorghníomhú i gcoinne liosta na meaisíní ar sceideal.';

$GLOBALS["lang"]['Benchmarks for Best Practise Configuration'] = 'Benchmarks do Cumraíocht Practise Fearr';

$GLOBALS["lang"]['Benchmarks provide security recommendations for your computers, utilising the OpenSCAP tools and policies.</p><p><i>From the OpenSCAP homepage:</i>  In the ever-changing world of computer security where new vulnerabilities are being discovered and patched every day, enforcing security compliance must be a continuous process. It also needs to include a way to make adjustments to policies, as well as periodic assessment and risk monitoring. The OpenSCAP ecosystem provides tools and customizable policies for a quick, cost-effective and flexible implementation of these processes.'] = 'Soláthraíonn tagarmharcanna moltaí slándála do do ríomhairí, ag baint úsáide as uirlisí agus beartais OpenSCAP.<p><i>Ón leathanach baile OpenSCAP:</i> Sa domhan shíorathrú slándála ríomhaire áit a bhfuil leochaileachtaí nua á fhionnadh agus patched gach lá, Ní mór a chur i bhfeidhm comhlíonadh slándála a bheith ina phróiseas leanúnach. Ní mór bealach a chur san áireamh freisin chun coigeartuithe a dhéanamh ar bheartais, chomh maith le measúnú tréimhsiúil agus faireachán riosca. Soláthraíonn an éiceachóras OpenSCAP uirlisí agus beartais customizable le haghaidh chur i bhfeidhm tapa, éifeachtach ó thaobh costais agus solúbtha de na próisis.</p>';

$GLOBALS["lang"]['Benefits'] = 'An bhfuil a fhios agat na buntáistí a bhaineann...';

$GLOBALS["lang"]['Bengali'] = 'Bengali';

$GLOBALS["lang"]['Benin'] = 'Benin';

$GLOBALS["lang"]['Bermuda'] = 'Toir agus Crainn';

$GLOBALS["lang"]['best_practises'] = 'Déan teagmháil anois';

$GLOBALS["lang"]['Best Practises'] = 'Déan teagmháil anois';

$GLOBALS["lang"]['Bhutan'] = 'taiseachas aeir: fliuch';

$GLOBALS["lang"]['bios'] = 'taiseachas aeir: fliuch';

$GLOBALS["lang"]['Bios'] = 'taiseachas aeir: fliuch';

$GLOBALS["lang"]['body'] = 'Comhlacht';

$GLOBALS["lang"]['Body'] = 'Comhlacht';

$GLOBALS["lang"]['Bolivia'] = 'an Ríocht Aontaithe';

$GLOBALS["lang"]['Boolean'] = 'Boole';

$GLOBALS["lang"]['Boolean 1/0'] = 'Boole 1/0';

$GLOBALS["lang"]['Boolean y/n'] = 'Boole y/n';

$GLOBALS["lang"]['boot_device'] = 'Gléas teanndáileog';

$GLOBALS["lang"]['Boot Device'] = 'Gléas teanndáileog';

$GLOBALS["lang"]['bootable'] = 'Bootable';

$GLOBALS["lang"]['Bootable'] = 'Bootable';

$GLOBALS["lang"]['Bosnia and Herzegovina'] = 'An Bhoisnia agus an Heirseagaivéin';

$GLOBALS["lang"]['Both forms of'] = 'An dá chineál';

$GLOBALS["lang"]['Botswana'] = 'cliceáil grianghraf a mhéadú';

$GLOBALS["lang"]['Bouvet Island (Bouvetoya)'] = 'cliceáil grianghraf a mhéadú';

$GLOBALS["lang"]['Brazil'] = 'taiseachas aeir: fliuch';

$GLOBALS["lang"]['Brazilian Portuguese'] = 'bláthanna cumhra: cumhráin';

$GLOBALS["lang"]['Breaking it Down'] = 'Briseadh sé an Dúin';

$GLOBALS["lang"]['British Indian Ocean Territory (Chagos Archipelago)'] = 'Na Breataine Aigéan Indiach Críoch (Chagos Archipelago)';

$GLOBALS["lang"]['British Virgin Islands'] = 'Oileáin Mhaighdean na Breataine';

$GLOBALS["lang"]['Browse down the tree to Console Root -> Component Services -> Computers -> My Computer<br><br>Right click on <i>My Computer</i> and select properties<br><br>Select the <i>Default Properties</i> tab'] = 'Brabhsáil síos an crann a Console Root - lí Seirbhísí Comhpháirteanna - × Ríomhairí - × Mo Ríomhaire<br/><br/>cliceáil ar dheis ar <i>Mo Ríomhaire</i> agus airíonna a roghnú<br/><br/>Roghnaigh an <i>Díroghnaigh gach rud</i> cluaisín tab';

$GLOBALS["lang"]['Brunei Darussalam'] = 'Brunei Darussalam';

$GLOBALS["lang"]['btu_max'] = 'Uasmhéid';

$GLOBALS["lang"]['Btu Max'] = 'Uasmhéid';

$GLOBALS["lang"]['btu_total'] = 'Btu Iomlán';

$GLOBALS["lang"]['Btu Total'] = 'Btu Iomlán';

$GLOBALS["lang"]['build_number'] = 'Uimhir Thógtha';

$GLOBALS["lang"]['Build Number'] = 'Uimhir Thógtha';

$GLOBALS["lang"]['build_number_full'] = 'Tógáil Uimhir Iomlán';

$GLOBALS["lang"]['Build Number Full'] = 'Tógáil Uimhir Iomlán';

$GLOBALS["lang"]['Building'] = 'Foirgneamh a thógáil';

$GLOBALS["lang"]['Builds trust with clients and partners'] = 'Tógann muinín le cliaint agus comhpháirtithe';

$GLOBALS["lang"]['Bulgaria'] = 'an Bhulgáir';

$GLOBALS["lang"]['Bulgarian'] = 'riachtanais uisce: measartha';

$GLOBALS["lang"]['Bulk Edit'] = 'Toir agus Crainn bláthanna';

$GLOBALS["lang"]['Bulk Edit Form'] = 'Plean Gníomhaíochta don Oideachas';

$GLOBALS["lang"]['Bulk Editing Device Attributes'] = 'Eagarthóireacht Gléas';

$GLOBALS["lang"]['Bulk edit selections wont stay selected after clicking next page.'] = 'Beidh rogha eagarthóireachta Bulk fanacht roghnaithe tar éis cliceáil ar an chéad leathanach eile.';

$GLOBALS["lang"]['Burkina Faso'] = 'cliceáil grianghraf a mhéadú';

$GLOBALS["lang"]['Burundi'] = 'Bhí an t-eolas úsáideach';

$GLOBALS["lang"]['business_requirements'] = 'Riachtanais Ghnó';

$GLOBALS["lang"]['Business Requirements'] = 'Riachtanais Ghnó';

$GLOBALS["lang"]['But I Only Have Windows Client Machines Available!'] = 'Ach tá mé ach Meaisíní Cliant Windows Ar fáil!';

$GLOBALS["lang"]['But I do not want to have to change the language file every time I update!'] = 'Ach ní féidir liom a bheith ag iarraidh a athrú ar an comhad teanga gach uair cothrom le dáta mé!';

$GLOBALS["lang"]['Buy'] = 'Ceannaigh Ceannaigh Ceannaigh';

$GLOBALS["lang"]['Buy More'] = 'Ceannaigh níos mó';

$GLOBALS["lang"]['Buy More Licenses'] = 'Ceannaigh Ceadúnais níos mó';

$GLOBALS["lang"]['By'] = 'De réir';

$GLOBALS["lang"]['By default we integrate all devices with their nmis_manage attribute set to <i>y</i>. With 4.2.0 we also ship a Rule that says <i>If we discover a device and it has a valid SNMP OID, mark that device as managed by NMIS</i>. Obviously you can disable this if it is not what you want.'] = 'De réir réamhshocraithe a chomhtháthú againn go léir feistí lena n-tréithe nmis_manage leagtha síos <i>y</i>. Le 4.2.0 long muid freisin Riail a deir <i>Má fhaigheann muid amach gléas agus tá sé bailí SNMP OID, marc an gléas sin mar atá á bhainistiú ag NMIS</i>. Is léir gur féidir leat é seo a dhíchumasú mura bhfuil sé cad ba mhaith leat.';

$GLOBALS["lang"]['By default, we skip certificate validation because customers tend to use self-signed certificates. To enable certificate validation, edit the file below'] = 'De réir réamhshocraithe, scipeáil againn bailíochtú deimhniú mar gheall ar claonadh custaiméirí a úsáid deimhnithe féin-sínithe. Chun bailíochtú deimhniú a chumasú, in eagar an comhad thíos';

$GLOBALS["lang"]['CIDR'] = 'CIDR';

$GLOBALS["lang"]['CIDR Mask'] = 'CIDR ollscoileanna eile';

$GLOBALS["lang"]['cli_config'] = 'Slí an Atlantaigh Config';

$GLOBALS["lang"]['CLI Config'] = 'Slí an Atlantaigh Config';

$GLOBALS["lang"]['CPU'] = 'LAP LAP LAP';

$GLOBALS["lang"]['CPUs'] = 'LAPanna';

$GLOBALS["lang"]['CSV'] = 'Seirbhís do Chustaiméirí';

$GLOBALS["lang"]['CVE'] = 'taiseachas aeir: fliuch';

$GLOBALS["lang"]['CVEs with a status of received, awaiting analysis, undergoing analysis, rejected. These CVEs (mostly) do not contain sufficient information to enable us to generate a correct SQL query.'] = 'CVE le stádas a fuarthas, ag fanacht anailís, ag dul faoi anailís, dhiúltaigh. Níl faisnéis leordhóthanach sna CVE (den chuid is mó) chun cur ar ár gcumas ceist SQL ceart a ghiniúint.';

$GLOBALS["lang"]['Calculated from discovery.'] = 'Arna ríomh ó fhionnachtain.';

$GLOBALS["lang"]['Calculated total number of valid IP addresses for this network.'] = 'Líon iomlán na seoltaí IP bailí a ríomh don líonra seo.';

$GLOBALS["lang"]['Calculated upon completion, the time taken to execute this item.'] = 'Arna ríomh ar chríochnú, an t-am a glacadh chun an mhír seo a fhorghníomhú.';

$GLOBALS["lang"]['Calculated when integration is run and contains a JSON representation of the devices in this integration. Each links to <code>devices.id</code>.'] = 'Ríomh nuair a bhíonn comhtháthú reáchtáil agus tá ionadaíocht JSON na feistí sa chomhtháthú seo. Gach nasc chuig <code>devices.id</code>.';

$GLOBALS["lang"]['Calculated when integration is run and contains a JSON representation of the locations in this integration. Each links to <code>locations.id</code>.'] = 'Ríomh nuair a bhíonn comhtháthú reáchtáil agus tá ionadaíocht JSON de na suímh sa chomhtháthú seo. Gach nasc chuig <code>locations.id</code>.';

$GLOBALS["lang"]['Calculated when integration is run and contains the number of devices selected from Open-AudIT.'] = 'Ríomh nuair a bhíonn comhtháthú reáchtáil agus tá líon na feistí roghnaithe ó Open-AudIT.';

$GLOBALS["lang"]['Calculated when integration is run and contains the number of devices selected the external system.'] = 'Ríomh nuair a bhíonn comhtháthú reáchtáil agus tá líon na feistí roghnaithe an córas seachtrach.';

$GLOBALS["lang"]['Calculated when integration is run and contains the number of devices to be updated in the external system.'] = 'Ríomh nuair a bhíonn comhtháthú reáchtáil agus tá líon na feistí atá le nuashonrú sa chóras seachtrach.';

$GLOBALS["lang"]['Calculated when integration is run and contains the number of devices updated in Open-AudIT.'] = 'Ríomh nuair a bhíonn comhtháthú reáchtáil agus tá líon na feistí cothrom le dáta i Open-AudIT.';

$GLOBALS["lang"]['Call up a command prompt by clicking Start and searching for <code>command</code>'] = 'Glaoigh suas ordú pras trí chliceáil Tosaigh agus cuardach le haghaidh <code>command</code>';

$GLOBALS["lang"]['Cambodia'] = 'taiseachas aeir: fliuch';

$GLOBALS["lang"]['Cameroon'] = 'Camarún Camarún';

$GLOBALS["lang"]['Campus Area Network'] = 'Clár na dToghthóirí';

$GLOBALS["lang"]['Campus area network'] = 'Líonra réimse Campas';

$GLOBALS["lang"]['Can be  <code>active</code>, <code>passive</code> or blank.'] = 'An féidir a bheith <code>active</code>, <code>passive</code> nó bán.';

$GLOBALS["lang"]['Can be <code>application</code>, <code>compute</code>, <code>database</code>, <code>storage</code>, <code>virtualisation</code>, <code>web</code>, <code>other</code> or blank.'] = 'An féidir a bheith <code>application</code>, <code>compute</code>, <code>database</code>, <code>storage</code>, <code>virtualisation</code>, <code>web</code>, <code>other</code> nó bán.';

$GLOBALS["lang"]['Can be <code>auto</code>, <code>fixed</code>, <code>other</code> or blank.'] = 'An féidir a bheith <code>auto</code>, <code>fixed</code>, <code>other</code> nó bán.';

$GLOBALS["lang"]['Can be <code>high availability</code>, <code>load balancing</code>, <code>performance</code>, <code>storage</code>, <code>other</code> or blank.'] = 'An féidir a bheith <code>high availability</code>, <code>load balancing</code>, <code>performance</code>, <code>storage</code>, <code>other</code> nó bán.';

$GLOBALS["lang"]['Can be <code>line</code>, <code>pie</code> or <code>traffic</code>.'] = 'An féidir a bheith <code>line</code>, <code>pie</code> nó <code>traffic</code>.';

$GLOBALS["lang"]['Can be <code>user</code> or <code>collector</code>.'] = 'An féidir a bheith <code>user</code> nó <code>collector</code>.';

$GLOBALS["lang"]['Can be set by discovery or user.'] = 'Is féidir a shocrú trí fhionnachtain nó úsáideoir.';

$GLOBALS["lang"]['Can be set by discovery or user. Uses the ID from the locations table.'] = 'Is féidir a shocrú trí fhionnachtain nó úsáideoir. Úsáidí an ID ón tábla suímh.';

$GLOBALS["lang"]['Can the user edit this item.'] = 'An féidir leis an úsáideoir in eagar an mhír seo.';

$GLOBALS["lang"]['Canada'] = 'taiseachas aeir: fliuch';

$GLOBALS["lang"]['Cancel'] = 'Cealaigh';

$GLOBALS["lang"]['capabilities'] = 'Cumas';

$GLOBALS["lang"]['Capabilities'] = 'Cumas';

$GLOBALS["lang"]['Capacity'] = 'Cumas Cumas';

$GLOBALS["lang"]['Cape Verde'] = 'riachtanais uisce: measartha';

$GLOBALS["lang"]['Capitalise'] = 'Príomhchathair';

$GLOBALS["lang"]['caption'] = 'Teideal';

$GLOBALS["lang"]['Caption'] = 'Teideal';

$GLOBALS["lang"]['Catalan'] = 'Catalóinis Catalóinis ealaín';

$GLOBALS["lang"]['Cayman Islands'] = 'Oileáin Chaiman';

$GLOBALS["lang"]['Cellular Details'] = 'Sonraí Cellular';

$GLOBALS["lang"]['Central African Republic'] = 'Poblacht na hAfraice Láir';

$GLOBALS["lang"]['certificate'] = 'Deimhniú Deimhnithe';

$GLOBALS["lang"]['Certificate'] = 'Deimhniú Deimhnithe';

$GLOBALS["lang"]['certificate_file'] = 'Comhad Teastas';

$GLOBALS["lang"]['Certificate File'] = 'Comhad Teastas';

$GLOBALS["lang"]['certificate_name'] = 'Ainm an Teastais';

$GLOBALS["lang"]['Certificate Name'] = 'Ainm an Teastais';

$GLOBALS["lang"]['certificates'] = 'Deimhniúcháin';

$GLOBALS["lang"]['Certificates'] = 'Deimhniúcháin';

$GLOBALS["lang"]['Certification'] = 'Deimhniú Réadlann';

$GLOBALS["lang"]['Certification Audit'] = 'Iniúchóireacht';

$GLOBALS["lang"]['Certification Process'] = 'Próiseas Deimhniúcháin';

$GLOBALS["lang"]['Chad'] = 'tréimhse saoil: ilbhliantúil';

$GLOBALS["lang"]['Change'] = 'Athraigh agus Athraigh';

$GLOBALS["lang"]['change_id'] = 'Athrú Aitheantais';

$GLOBALS["lang"]['Change ID'] = 'Athrú Aitheantais';

$GLOBALS["lang"]['change_log'] = 'cliceáil grianghraf a mhéadú';

$GLOBALS["lang"]['Change Log'] = 'cliceáil grianghraf a mhéadú';

$GLOBALS["lang"]['Change Logs'] = 'Naisc ábhartha eile';

$GLOBALS["lang"]['change_type'] = 'Cineál Athrú';

$GLOBALS["lang"]['Change Type'] = 'Cineál Athrú';

$GLOBALS["lang"]['check_minutes'] = 'Miontuairiscí an tSuímh';

$GLOBALS["lang"]['Check Minutes'] = 'Miontuairiscí an tSuímh';

$GLOBALS["lang"]['Check for SSH on these ports'] = 'Seiceáil SSH ar na calafoirt';

$GLOBALS["lang"]['Check this port for any SSH service.'] = 'Seiceáil an calafort seo le haghaidh aon seirbhís SSH.';

$GLOBALS["lang"]['Chile'] = 'An tSile';

$GLOBALS["lang"]['China'] = 'An tSín tSín tSín';

$GLOBALS["lang"]['Chinese'] = 'Sínis Sínis Sínis';

$GLOBALS["lang"]['Chinese (traditional)'] = 'Sínis (traditional)';

$GLOBALS["lang"]['Choose'] = 'Roghnaigh';

$GLOBALS["lang"]['Choose (select OS first)'] = 'Roghnaigh (roghnaigh OS chéad)';

$GLOBALS["lang"]['Choose a Device'] = 'Roghnaigh Gléas';

$GLOBALS["lang"]['Choose a Table'] = 'Roghnaigh Tábla';

$GLOBALS["lang"]['Choose the type of the task from the first drop down. This will configure the additional fields required depending on the type of task.'] = 'Roghnaigh an cineál an tasc ón gcéad titim síos. Beidh sé seo a chumrú na réimsí breise ag teastáil ag brath ar an gcineál tasc.';

$GLOBALS["lang"]['Christmas Island'] = 'Oileán na Nollag';

$GLOBALS["lang"]['cidr'] = 'taiseachas aeir: fliuch';

$GLOBALS["lang"]['Cidr'] = 'taiseachas aeir: fliuch';

$GLOBALS["lang"]['circuit_count'] = 'Clár na dToghthóirí';

$GLOBALS["lang"]['Circuit Count'] = 'Clár na dToghthóirí';

$GLOBALS["lang"]['circuit_status'] = 'Stádas na Gaeilge';

$GLOBALS["lang"]['Circuit Status'] = 'Stádas na Gaeilge';

$GLOBALS["lang"]['city'] = 'Cathair na Mart';

$GLOBALS["lang"]['City'] = 'Cathair na Mart';

$GLOBALS["lang"]['class'] = 'Rang a hAon';

$GLOBALS["lang"]['Class'] = 'Rang a hAon';

$GLOBALS["lang"]['class_text'] = 'Aicme Téacs';

$GLOBALS["lang"]['Class Text'] = 'Aicme Téacs';

$GLOBALS["lang"]['Click <i>New client secret</i>.'] = 'Cliceáil anseo <i>rún cliant nua</i>.';

$GLOBALS["lang"]['Click Submit to Execute'] = 'Cliceáil Cuir isteach chun Rith';

$GLOBALS["lang"]['Click on <i>Properties</i> under the <i>Manage</i> header in the central menu column. Copy the <i>User Access URL</i>. Once copied, paste it into yout text editor. You will need to copy one section of this field.<br><br>Our example field looks like this<br><code>https://launcher.myapps.microsoft.com/api/signin/5d97003c-g24b-346e-9932-77db6470b939?tenantId=cf406343-1a96-4f7c-0cc6-46e86dddabf3</code>.<br><br>The section we need is <code>cf406343-1a96-4f7c-0cc6-46e86dddabf3</code> (the tenant ID). This is used in Open-AudIT as the <i>Tenant</i> field, so paste it in there.'] = 'Cliceáil ar <i>Díroghnaigh gach rud</i> faoi na <i>Bainistíocht</i> header sa cholún roghchlár lárnach. Cóip an <i>Úsáideoir Rochtain URL</i>. Nuair a chóipeáil, greamaigh sé isteach eagarthóir téacs yout. Beidh ort a chóipeáil alt amháin den réimse seo.<br/><br/>Breathnaíonn ár réimse sampla cosúil leis seo<br/><code>https://launcher.myapps.microsoft.com/api/signin/5d97003c-g24b-346e-9932-77db6470b939?tenantId=cf406343-1a96-4f7c-0cc6-46e86dddabf3</code>.<br/><br/>Is é an chuid is gá dúinn <code>cf406343-1a96-4f7c-0cc6-46e86dddabf3</code> (an ID tionónta). Úsáidtear é seo i Open-AudIT mar <i>Tionóntaí</i> réimse, mar sin greamaigh sé ann.';

$GLOBALS["lang"]['Click on App Registrations to create a new Application, then click New Application Registration. Give it a name (I used Open-AudIT), select Web app / API as the type and provide any URL (the URL is not important) and now click Create.'] = 'Cliceáil ar Chlárúcháin App chun Iarratas nua a chruthú, ansin cliceáil ar Chlárú Iarratais Nua. Tabhair ainm (úsáid mé Open-AudIT), roghnaigh app Gréasáin / API mar an cineál agus a chur ar fáil ar aon URL (nach bhfuil an URL tábhachtach) agus anois cliceáil Cruthaigh.';

$GLOBALS["lang"]['Click on OK and close the DCOMCNFG window.<br><br>The above changes will require a reboot to take effect.'] = 'Cliceáil ar OK agus an fhuinneog DCOMCNFG a dhúnadh.<br/><br/>Beidh na hathruithe thuas a cheangal ar reboot a chur i bhfeidhm.';

$GLOBALS["lang"]['Click on the application you just created. The Application ID displayed is the Client ID.<br><br>To create the client secret, click Settings, then Keys. Provide a key name and select an appropriate expiry date, then click Save.<br><br>The value will be populated for you - this is the Client Secret.'] = 'Cliceáil ar an iarratas a chruthaigh tú díreach. Is é an ID Iarratais taispeáint an ID Cliant.<br/><br/>A chruthú ar an rún cliant, cliceáil Socruithe, ansin Keys. Príomh-ainm a sholáthar agus dáta éaga cuí a roghnú, ansin cliceáil Sábháil.<br/><br/>Beidh an luach a daonra ar do shon - is é seo an Rúnda Cliant.';

$GLOBALS["lang"]['Click the Delete button to remove the example devices from Open-AudIT.<br>This will remove the below devices from the database. '] = 'Cliceáil ar an gcnaipe Scrios a bhaint as na feistí sampla ó Open-AudIT.<br/>Bainfidh sé seo na feistí thíos as an mbunachar sonraí. ';

$GLOBALS["lang"]['Click the Edit button for <i>Basic SAML Configuration</i>.'] = 'Cliceáil ar an gcnaipe Edit le haghaidh <i>Eolas Bunúsach Cumraíocht</i>.';

$GLOBALS["lang"]['Click the Import button below to populate Open-AudIT with example device data.'] = 'Cliceáil ar an gcnaipe Iompórtáil thíos a populate Open-AudIT le sonraí gléas sampla.';

$GLOBALS["lang"]['Click the icon to the right of the field you wish to edit. Change the field and click the green icon to submit.'] = 'Cliceáil ar an deilbhín chun an ceart an réimse is mian leat a chur in eagar. Athraigh an réimse agus cliceáil ar an deilbhín glas a chur isteach.';

$GLOBALS["lang"]['Client ID'] = 'ID Cliant';

$GLOBALS["lang"]['Client ID and Secret'] = 'ID Cliant agus Rúnda';

$GLOBALS["lang"]['client_ident'] = 'Amharc ar gach eolas';

$GLOBALS["lang"]['Client Ident'] = 'Amharc ar gach eolas';

$GLOBALS["lang"]['client_secret'] = 'Cliant Rúnda';

$GLOBALS["lang"]['Client Secret'] = 'Cliant Rúnda';

$GLOBALS["lang"]['client_site_name'] = 'Ainm an tSuímh';

$GLOBALS["lang"]['Client Site Name'] = 'Ainm an tSuímh';

$GLOBALS["lang"]['Close'] = 'Dún na nGall';

$GLOBALS["lang"]['Closed'] = 'Dúnta';

$GLOBALS["lang"]['Cloud'] = 'Cloud Cloud Cloud';

$GLOBALS["lang"]['Cloud Details'] = 'Sonraí Cloud';

$GLOBALS["lang"]['Cloud Discovery'] = 'Scamaill Discovery';

$GLOBALS["lang"]['Cloud Discovery and Auditing'] = 'Cloud Discovery agus Iniúchóireacht';

$GLOBALS["lang"]['cloud_id'] = 'ID scamall';

$GLOBALS["lang"]['Cloud ID'] = 'ID scamall';

$GLOBALS["lang"]['cloud_log'] = 'Logáil isteach Cloud';

$GLOBALS["lang"]['Cloud Log'] = 'Logáil isteach Cloud';

$GLOBALS["lang"]['cloud_name'] = 'Ainm na Cloud';

$GLOBALS["lang"]['Cloud Name'] = 'Ainm na Cloud';

$GLOBALS["lang"]['Cloud Network'] = 'Líonra Cloud';

$GLOBALS["lang"]['clouds'] = 'Amharc ar gach eolas';

$GLOBALS["lang"]['Clouds'] = 'Amharc ar gach eolas';

$GLOBALS["lang"]['Clouds are a feature available to Open-AudIT Enterprise licensed customers.'] = 'Is gné ar fáil do chustaiméirí ceadúnaithe Fiontraíochta Open-AudIT.';

$GLOBALS["lang"]['cluster'] = 'bláthanna cumhra: cumhráin';

$GLOBALS["lang"]['Cluster'] = 'bláthanna cumhra: cumhráin';

$GLOBALS["lang"]['cluster_id'] = 'ID braisle';

$GLOBALS["lang"]['Cluster ID'] = 'ID braisle';

$GLOBALS["lang"]['cluster_name'] = 'Ainm an Bhrú';

$GLOBALS["lang"]['Cluster Name'] = 'Ainm an Bhrú';

$GLOBALS["lang"]['cluster_type'] = 'Cineál braisle';

$GLOBALS["lang"]['Cluster Type'] = 'Cineál braisle';

$GLOBALS["lang"]['clusters'] = 'bláthanna cumhra: cumhráin';

$GLOBALS["lang"]['Clusters'] = 'bláthanna cumhra: cumhráin';

$GLOBALS["lang"]['Clusters and Reporting'] = 'Cnuasaigh agus Tuairisciú';

$GLOBALS["lang"]['Cocos (Keeling) Islands'] = 'Cocos (Keeling) Oileáin';

$GLOBALS["lang"]['Collection'] = 'Bailiúchán na Comhairle Contae';

$GLOBALS["lang"]['Collections'] = 'Bailiúcháin agus Bailiúcháin';

$GLOBALS["lang"]['Collector'] = 'Bailitheoirí agus Bailitheoirí';

$GLOBALS["lang"]['Collector (UUID)'] = 'Bailitheoir (Úsáid)';

$GLOBALS["lang"]['Collector / Server is an Enterprise only feature. Enterprise customers receive one Collector license for free. Additional Collector licenses can be purchased as required.'] = 'Is Bhailitheoir / Freastalaí gné Fiontraíochta amháin. Faigheann custaiméirí Fiontraíochta ceadúnas Bailitheoir amháin saor in aisce. Is féidir le ceadúnais bhailitheora bhreise a cheannach mar is gá.';

$GLOBALS["lang"]['Collector / Server is designed so that you can have a remote or <i>collector</i>  instance of Open-AudIT running on a remote machine. That collector instance might be in another security zone, subnet, cloud hosting instance or at a customer site.  The remote collector is then doing all the discovering and auditing of devices locally avoiding networking and firewalling complexity.  The Collector once it has registered is completely controlled by the <i>server</i>.  This means you only need an HTTP or HTTPS connection from that Collector to the Server.'] = 'Bailitheoir / Freastalaí atá deartha ionas gur féidir leat a bheith iargúlta nó <i>lucht siúil</i> mar shampla Oscailte-AudIT ag rith ar mheaisín iargúlta. D\'fhéadfadh sin mar shampla bailitheoir a bheith i gcrios slándála eile, subnet, cás scamall óstáil nó ar láithreán do chustaiméirí. Tá an bailitheoir iargúlta ag déanamh ansin go léir an fhionnadh agus iniúchadh feistí a sheachaint go háitiúil líonraithe agus firewalling castacht. Tá an Bailitheoir nuair a chláraigh sé á rialú go hiomlán ag an <i>freastalaí freastalaí</i>. Ciallaíonn sé seo ní gá duit ach nasc HTTP nó HTTPS ón mBailitheoir sin chuig an Freastalaí.';

$GLOBALS["lang"]['Collector Dashboard'] = 'Bailitheoir Dashboard';

$GLOBALS["lang"]['Collector Name'] = 'Bailitheoir Ainm';

$GLOBALS["lang"]['collector_uuid'] = 'Bailitheoir Uuid';

$GLOBALS["lang"]['Collector Uuid'] = 'Bailitheoir Uuid';

$GLOBALS["lang"]['Collector tasks are automatically setup when the collector feature is enabled. Collector tasks should not be created directly by users. Collector tasks can have their frequency edited after creation. If the Open-AudIT Server has Collectors reporting to it, an additional drop down is provided. You can select this to specify which Collector the task should run on. Only Discovery tasks are supported for Collectors.'] = 'Tá tascanna Bailitheoir thus go huathoibríoch nuair a bhíonn an gné bailitheoir ar chumas. Níor cheart d\'úsáideoirí cúraimí bailitheora a chruthú go díreach. Is féidir le tascanna Bailitheoir a minicíocht eagarthóireacht tar éis a chruthú. Má tá an Freastalaí Open-AudIT Bailitheoirí tuairisciú dó, tá titim breise ar fáil. Is féidir leat é seo a roghnú a shonrú ar chóir do Bhailitheoir an tasc a reáchtáil ar. Níl ach tascanna Discovery tacaíocht do Bailitheoirí.';

$GLOBALS["lang"]['Collectors'] = 'Bailitheoirí';

$GLOBALS["lang"]['Collectors can operate in one of two modes: Collector and StandAlone. When in Collector mode, the instance of Open-AudIT is managed by the main server. When in Stand Alone mode, the instance is managed locally and forwards any found devices to the main server.'] = 'Is féidir le Bailitheoirí oibriú i gceann de dhá mhodh: Bailitheoir agus StandAlone. Nuair a i mód Bailitheoir, tá an cás Open-AudIT bhainistiú ag an bhfreastalaí is mó. Nuair a bheidh i Stand Alone mód, tá an cás a bhainistiú go háitiúil agus ar aghaidh aon feistí le fáil ar an bhfreastalaí is mó.';

$GLOBALS["lang"]['Collectors for Remote Discovery'] = 'Bailitheoirí le haghaidh cianda Discovery';

$GLOBALS["lang"]['Colombia'] = 'taiseachas aeir: fliuch';

$GLOBALS["lang"]['color'] = 'Dath Dath';

$GLOBALS["lang"]['Color'] = 'Dath Dath';

$GLOBALS["lang"]['Column'] = 'taiseachas aeir: fliuch';

$GLOBALS["lang"]['Columns'] = 'taiseachas aeir: fliuch';

$GLOBALS["lang"]['command'] = 'Ordú an Orduithe';

$GLOBALS["lang"]['Command'] = 'Ordú an Orduithe';

$GLOBALS["lang"]['command_options'] = 'Roghanna Ordú';

$GLOBALS["lang"]['Command Options'] = 'Roghanna Ordú';

$GLOBALS["lang"]['command_output'] = 'Ordú Aschur';

$GLOBALS["lang"]['Command Output'] = 'Ordú Aschur';

$GLOBALS["lang"]['command_status'] = 'Stádas i gCeannas';

$GLOBALS["lang"]['Command Status'] = 'Stádas i gCeannas';

$GLOBALS["lang"]['command_time_to_execute'] = 'Am Ordú a Rith';

$GLOBALS["lang"]['Command Time To Execute'] = 'Am Ordú a Rith';

$GLOBALS["lang"]['comment'] = 'Comment';

$GLOBALS["lang"]['Comment'] = 'Comment';

$GLOBALS["lang"]['Comment out the below line (about line 49 or so). Just place a hash # at the start of the line.'] = 'Comment an líne thíos (thart ar líne 49 nó mar sin). Just a chur ar hash # ag tús na líne.';

$GLOBALS["lang"]['comments'] = 'Tuairimí Comments';

$GLOBALS["lang"]['Comments'] = 'Tuairimí Comments';

$GLOBALS["lang"]['commercial'] = 'Trácht a dhéanamh';

$GLOBALS["lang"]['Commercial'] = 'Trácht a dhéanamh';

$GLOBALS["lang"]['Commercial Support'] = 'Tacaíocht Tráchtála';

$GLOBALS["lang"]['common_name'] = 'Ainm an Choitinn';

$GLOBALS["lang"]['Common Name'] = 'Ainm an Choitinn';

$GLOBALS["lang"]['Commonly referred to as the clientId.'] = 'Go coitianta dá ngairtear an clientId.';

$GLOBALS["lang"]['Commonly referred to as the clientSecret.'] = 'Go coitianta dá ngairtear an cliantSecret.';

$GLOBALS["lang"]['Community'] = 'Pobail agus Fiontair';

$GLOBALS["lang"]['Community Questions'] = 'Amharc ar gach eolas';

$GLOBALS["lang"]['Community String'] = 'cineál gas: in airde';

$GLOBALS["lang"]['Comoros the'] = 'Comoros an';

$GLOBALS["lang"]['Compact'] = 'Compact';

$GLOBALS["lang"]['Company'] = 'Cuideachta na Cuideachta';

$GLOBALS["lang"]['Complete these steps.'] = 'Comhlánaigh na céimeanna seo.';

$GLOBALS["lang"]['Complexity of the attack (Low or High).'] = 'Coimpléascacht an ionsaí (Low nó Ard).';

$GLOBALS["lang"]['Component Table'] = 'Tábla Comhpháirt';

$GLOBALS["lang"]['Components (All Devices)'] = 'Comhpháirteanna (Gach Gléasanna)';

$GLOBALS["lang"]['Compute'] = 'Ríomhaireacht';

$GLOBALS["lang"]['Condition'] = 'Coinníoll';

$GLOBALS["lang"]['Conduct a risk assessment'] = 'Measúnú riosca a dhéanamh';

$GLOBALS["lang"]['Conduct awareness and training programs'] = 'Déan feasacht agus cláir oiliúna';

$GLOBALS["lang"]['Conduct management review meetings'] = 'Cruinnithe athbhreithnithe bainistíochta';

$GLOBALS["lang"]['Conduct regular surveillance audits (usually annually)'] = 'Déan iniúchtaí faireachais rialta (de ghnáth gach bliain)';

$GLOBALS["lang"]['Conducted by an accredited body in two stages'] = 'Arna stiúradh ag comhlacht creidiúnaithe in dhá chéim';

$GLOBALS["lang"]['Config'] = 'Config';

$GLOBALS["lang"]['Config Default, currently '] = 'Config Réamhshocrú, faoi láthair ';

$GLOBALS["lang"]['config_file'] = 'Comhtháthaithe Comhad';

$GLOBALS["lang"]['Config File'] = 'Comhtháthaithe Comhad';

$GLOBALS["lang"]['config_manager_error_code'] = 'Bainisteoir Config Cód Earráid';

$GLOBALS["lang"]['Config Manager Error Code'] = 'Bainisteoir Config Cód Earráid';

$GLOBALS["lang"]['Configurable Role Based Access Control (RBAC)'] = 'Ról Inchumraithe Rialú Rochtana Bunaithe (RBAC)';

$GLOBALS["lang"]['configuration'] = 'Cumraíocht';

$GLOBALS["lang"]['Configuration'] = 'Cumraíocht';

$GLOBALS["lang"]['Configuration Change Detection and Reporting'] = 'Athrú Cumraíochta Brath agus Tuairisciú';

$GLOBALS["lang"]['Configure'] = 'Cumraigh';

$GLOBALS["lang"]['Configure the agent server-side to perform audits on a schedule'] = 'Cumraigh an freastalaí-taobh gníomhaire iniúchtaí a dhéanamh ar sceideal';

$GLOBALS["lang"]['Congo'] = 'An Chongó';

$GLOBALS["lang"]['Congo the'] = 'An Chongó';

$GLOBALS["lang"]['Connected To'] = 'Ceangailte le';

$GLOBALS["lang"]['connection'] = 'Naisc ábhartha eile';

$GLOBALS["lang"]['Connection'] = 'Naisc ábhartha eile';

$GLOBALS["lang"]['Connection Options'] = 'Roghanna Nasctha';

$GLOBALS["lang"]['connection_status'] = 'Stádas Ceangal';

$GLOBALS["lang"]['Connection Status'] = 'Stádas Ceangal';

$GLOBALS["lang"]['connections'] = 'Naisc agus naisc';

$GLOBALS["lang"]['Connections'] = 'Naisc agus naisc';

$GLOBALS["lang"]['Consider filtered Ports Open'] = 'Smaoinigh scagtha Naisc go dtí suíomhanna eile';

$GLOBALS["lang"]['Consider open|filtered Ports Open'] = 'Smaoinigh ar openfiltered Naisc go dtí suíomhanna eile';

$GLOBALS["lang"]['Consulting, implementation and other services are available through'] = 'Tá seirbhísí comhairliúcháin, cur chun feidhme agus eile ar fáil trí';

$GLOBALS["lang"]['contact'] = 'Déan teagmháil linn';

$GLOBALS["lang"]['Contact'] = 'Déan teagmháil linn';

$GLOBALS["lang"]['contact_name'] = 'Déan Teagmháil Linn';

$GLOBALS["lang"]['Contact Name'] = 'Déan Teagmháil Linn';

$GLOBALS["lang"]['contained_in'] = 'I seilbh';

$GLOBALS["lang"]['Contained In'] = 'I seilbh';

$GLOBALS["lang"]['Contains a JSON object details the associated widgets and their positions.'] = 'Tá sonraí réad JSON na giuirléidí gaolmhara agus a seasaimh.';

$GLOBALS["lang"]['Contains the fields that determine if we should use ssh, snmp and wmi discovery options. A JSON object.'] = 'Tá na réimsí a chinneadh más rud é ba chóir dúinn a úsáid ssh, snmp agus wmi roghanna fionnachtana. A réad JSON.';

$GLOBALS["lang"]['Context & Leadership'] = 'Comhthéacs agus Ceannaireacht';

$GLOBALS["lang"]['Context Engine ID'] = 'ID Inneall comhthéacs';

$GLOBALS["lang"]['Context Name'] = 'Ainm an Chomhaid';

$GLOBALS["lang"]['Continuously improve the ISMS'] = 'Feabhsú leanúnach ar an ISMS';

$GLOBALS["lang"]['contractual_obligations'] = 'Oibleagáidí conarthacha';

$GLOBALS["lang"]['Contractual Obligations'] = 'Oibleagáidí conarthacha';

$GLOBALS["lang"]['Cook Islands'] = 'Oileáin Cook';

$GLOBALS["lang"]['Copy and paste an audit result'] = 'Cóipeáil agus greamaigh toradh iniúchóireachta';

$GLOBALS["lang"]['Copy and paste the below to the forums, another instance of Open-AudIT or anywhere else you need to provide this item.'] = 'Cóipeáil agus greamaigh an thíos leis na fóraim, cás eile de Open-AudIT nó áit ar bith eile is gá duit a chur ar fáil an mhír seo.';

$GLOBALS["lang"]['Copy the <i>Application ID</i> field and paste it into the Open-AudIT <i>Client ID</i> field for the new Auth Method.'] = 'Cóip an <i>ID Iarratais</i> réimse agus greamaigh sé isteach sa Open-AudIT <i>ID Cliant</i> réimse don Modh Auth nua.';

$GLOBALS["lang"]['Copy the <i>Client ID</i> and paste it into the Open-AudIT <i>Client ID</i> field.<br>If there is no secret, click <i>Generate new secret</i>, then copy the value and paste it into the Open-AudIT <i>Client Secret</i> field.'] = 'Cóip an <i>ID Cliant</i> agus greamaigh sé isteach sa Open-AudIT <i>ID Cliant</i> réimse.<br/>Mura bhfuil aon rún, cliceáil <i>Gin rúnda nua</i>, ansin an luach a chóipeáil agus é a ghreamú isteach sa Open-AudIT <i>Cliant Rúnda</i> réimse.';

$GLOBALS["lang"]['Copy the value and paste it into the Open-AudIT form for the <i>Client Secret</i> field.'] = 'Cóipeáil an luach agus é a ghreamú isteach san fhoirm Open-AudIT don <i>Cliant Rúnda</i> réimse.';

$GLOBALS["lang"]['core_count'] = 'Contae an Chláir';

$GLOBALS["lang"]['Core Count'] = 'Contae an Chláir';

$GLOBALS["lang"]['Cores'] = 'riachtanais uisce: measartha';

$GLOBALS["lang"]['cost_center'] = 'Ionad Costas';

$GLOBALS["lang"]['Cost Center'] = 'Ionad Costas';

$GLOBALS["lang"]['cost_code'] = 'An Cód Cleachtais';

$GLOBALS["lang"]['Cost Code'] = 'An Cód Cleachtais';

$GLOBALS["lang"]['Costa Rica'] = 'Féach ar an bpróifíl';

$GLOBALS["lang"]['Cote d Ivoire'] = 'Déan teagmháil linn';

$GLOBALS["lang"]['count'] = 'Contae an Chontae';

$GLOBALS["lang"]['Count'] = 'Contae an Chontae';

$GLOBALS["lang"]['country'] = 'cineál gas: in airde';

$GLOBALS["lang"]['Country'] = 'cineál gas: in airde';

$GLOBALS["lang"]['country_code'] = 'Clár na dToghthóirí';

$GLOBALS["lang"]['Country Code'] = 'Clár na dToghthóirí';

$GLOBALS["lang"]['cpu_count'] = 'Clár na dToghthóirí';

$GLOBALS["lang"]['Cpu Count'] = 'Clár na dToghthóirí';

$GLOBALS["lang"]['Create'] = 'tréimhse saoil: ilbhliantúil';

$GLOBALS["lang"]['Create Example Devices'] = 'Cruthaigh Gléasanna Sampla';

$GLOBALS["lang"]['create_external_count'] = 'Cruthaigh Contae Seachtrach';

$GLOBALS["lang"]['Create External Count'] = 'Cruthaigh Contae Seachtrach';

$GLOBALS["lang"]['create_external_from_internal'] = 'Cruthaigh Seachtracha Ó Inmheánach';

$GLOBALS["lang"]['Create External From Internal'] = 'Cruthaigh Seachtracha Ó Inmheánach';

$GLOBALS["lang"]['Create File'] = 'Déan teagmháil linn';

$GLOBALS["lang"]['Create Geocode'] = 'Cruthaigh Geocode';

$GLOBALS["lang"]['create_internal_count'] = 'Cruthaigh Comhaireamh Inmheánach';

$GLOBALS["lang"]['Create Internal Count'] = 'Cruthaigh Comhaireamh Inmheánach';

$GLOBALS["lang"]['create_internal_from_external'] = 'Cruthaigh Inmheánach Ó Seachtracha';

$GLOBALS["lang"]['Create Internal From External'] = 'Cruthaigh Inmheánach Ó Seachtracha';

$GLOBALS["lang"]['Create NMIS Devices from Open-AudIT'] = 'Cruthaigh Feistí NMIS ó Open-AudIT';

$GLOBALS["lang"]['Create Open-AudIT Devices from '] = 'Cruthaigh Open-AudIT Gléasanna ó ';

$GLOBALS["lang"]['Create Open-AudIT Devices from NMIS'] = 'Cruthaigh Open-AudIT Feistí ó NMIS';

$GLOBALS["lang"]['Create a Baseline for the example device'] = 'Cruthaigh Bunlíne le haghaidh an gléas sampla';

$GLOBALS["lang"]['Create a Discovery'] = 'Cruthaigh Discovery';

$GLOBALS["lang"]['Create a Statement of Applicability (SoA)'] = 'Ráiteas Infheidhmeachta a chruthú (SoA)';

$GLOBALS["lang"]['created_by'] = 'Cruthaithe ag';

$GLOBALS["lang"]['Created By'] = 'Cruthaithe ag';

$GLOBALS["lang"]['created_date'] = 'Cruthaithe Dáta';

$GLOBALS["lang"]['Created Date'] = 'Cruthaithe Dáta';

$GLOBALS["lang"]['Creating'] = 'Ag cruthú';

$GLOBALS["lang"]['Creating Credentials'] = 'Credentials chruthú';

$GLOBALS["lang"]['Creating Device'] = 'Gléas a chruthú';

$GLOBALS["lang"]['Creating Widgets'] = 'Ag cruthú Giuirléidí';

$GLOBALS["lang"]['Creating a Discovery Scan Options entry'] = 'Ag cruthú Discovery Roghanna Scan iontráil';

$GLOBALS["lang"]['Creating a Query'] = 'Ag cruthú Ceist';

$GLOBALS["lang"]['Creating a SQL Statement for Groups'] = 'Ráiteas SQL a chruthú do Ghrúpaí';

$GLOBALS["lang"]['Creating a SQL Statement for Queries'] = 'Ráiteas SQL a chruthú do Shraith';

$GLOBALS["lang"]['Creating an Integration'] = 'Comhtháthú a chruthú';

$GLOBALS["lang"]['creator'] = 'Cruthaitheoir';

$GLOBALS["lang"]['Creator'] = 'Cruthaitheoir';

$GLOBALS["lang"]['credential'] = 'Credential';

$GLOBALS["lang"]['Credential'] = 'Credential';

$GLOBALS["lang"]['Credentials'] = 'Credentials';

$GLOBALS["lang"]['Credentials Client ID'] = 'Credentials ID Cliant';

$GLOBALS["lang"]['Credentials Subscription ID'] = 'Síntiús don Nuachtlitir ID';

$GLOBALS["lang"]['Credentials Tenant ID'] = 'Credentials ID Tionónta';

$GLOBALS["lang"]['Credentials are stored in the <i>credentials</i> database table. The actual credential information is encrypted in storage. When a Discovery is run, a device has its specific credentials retrieved from the database, decrypted and tested. If these fail the list of credentials is also retrieved, decrypted and then tested against the device starting with credentials known to have worked previously. Device specific credentials are stored at an individual device level in the <i>credential</i> table (note - no <i>s</i> in the table name). SSH keys are tested before SSH username / password. When testing SSH, credentials will also be marked as working with sudo or being root.'] = 'Credentials a stóráil sa <i>dintiúir</i> tábla bunachar sonraí. Tá an t-eolas dintiúir iarbhír criptithe i stóráil. Nuair a bhíonn Discovery reáchtáil, tá gléas a dintiúir ar leith aisghabháil ón mbunachar sonraí, decrypted agus a thástáil. Má theipeann orthu seo an liosta dintiúir a aisghabháil freisin, decrypted agus ansin tástáil i gcoinne an gléas ag tosú le dintiúir ar eolas a bheith ag obair roimhe sin. Stóráiltear dintiúir ar leith ar ghléas ar leibhéal aonair sa <i>india</i> tábla (nóta) <i>s s</i> in ainm an tábla). eochracha SSH a thástáil roimh ainm úsáideora SSH / focal faire. Nuair a thástáil SSH, beidh dintiúir a mharcáil freisin mar obair le sudo nó a bheith fréimhe.';

$GLOBALS["lang"]['Credentials can have one of a few different types - snmp v.1 / v.2, snmp v.3, ssh, ssh key, windows are all implemented. CAVEAT - ssh keys are not implemented for Windows Open-AudIT servers as yet.'] = 'Is féidir le dintiúir a bheith ar cheann de roinnt cineálacha éagsúla - snmp v.1 / v.2, snmp v.3, ssh, eochair ssh, fuinneoga i bhfeidhm go léir. CAVEAT - nach bhfuil eochracha ssh i bhfeidhm le haghaidh freastalaithe Windows Open-AudIT mar go fóill.';

$GLOBALS["lang"]['Credentials for Amazon AWS used in Cloud Discovery'] = 'Credentials do Amazon AWS a úsáidtear i Cloud Discovery';

$GLOBALS["lang"]['Credentials for Microsoft Azure used in Cloud Discovery'] = 'Dianuithe do Microsoft Azure a úsáidtear i Cloud Discovery';

$GLOBALS["lang"]['Critical'] = 'Léirmheasanna';

$GLOBALS["lang"]['criticality'] = 'Scríbhneoireacht';

$GLOBALS["lang"]['Criticality'] = 'Scríbhneoireacht';

$GLOBALS["lang"]['Croatia'] = 'an Chróit';

$GLOBALS["lang"]['Cuba'] = 'taiseachas aeir: fliuch';

$GLOBALS["lang"]['current'] = 'Bláthanna faoi dhíon';

$GLOBALS["lang"]['Current'] = 'Bláthanna faoi dhíon';

$GLOBALS["lang"]['Current Discovery Processes'] = 'Próisis Discovery Reatha';

$GLOBALS["lang"]['Current date & time is '] = 'Tá an dáta reatha agus am ';

$GLOBALS["lang"]['Currently Installed'] = 'Faoi láthair Suiteáilte';

$GLOBALS["lang"]['Currently supported types are <code>snmp</code>, <code>snmp_v3</code>, <code>ssh</code>, <code>ssh_key</code> or <code>windows</code>.'] = 'Tá cineálacha tacaithe faoi láthair <code>snmp</code>, <code>snmp_v3</code>, <code>ssh</code>, <code>ssh_key</code> nó <code>windows</code>.';

$GLOBALS["lang"]['Custom Fields'] = 'Réimsí saincheaptha';

$GLOBALS["lang"]['Custom TCP Ports'] = 'Calafoirt TCP saincheaptha';

$GLOBALS["lang"]['Custom TCP Ports. Any specific ports we would liuke scanned in addition to the Top TCP Ports. Comma seperated, no spaces.'] = 'Calafoirt TCP saincheaptha. Aon calafoirt ar leith ba mhaith linn a scanadh liuke chomh maith leis na Calafoirt TCP Barr. Tiomsaithe, gan aon spásanna.';

$GLOBALS["lang"]['Custom UDP Ports'] = 'Saincheaptha UDP Amharc ar gach eolas';

$GLOBALS["lang"]['Custom UDP Ports. Any specific ports we would liuke scanned in addition to the Top UDP Ports. Comma seperated, no spaces.'] = 'Calafoirt UDP Saincheaptha. Aon calafoirt ar leith ba mhaith linn a scanadh liuke chomh maith leis na Calafoirt Barr UDP. Tiomsaithe, gan aon spásanna.';

$GLOBALS["lang"]['Customisable Scanning Options per Discovery'] = 'Roghanna Scanning Customisable in aghaidh Discover';

$GLOBALS["lang"]['Cve'] = 'comhla Caidéal';

$GLOBALS["lang"]['Cyprus'] = 'An Chipir';

$GLOBALS["lang"]['Czech'] = 'taiseachas aeir: fliuch';

$GLOBALS["lang"]['Czech Republic'] = 'Poblacht na Seice';

$GLOBALS["lang"]['DHCP'] = 'DHAOINE';

$GLOBALS["lang"]['DN Account (optional)'] = 'DN Cuntas (roghnach)';

$GLOBALS["lang"]['DN Password (optional)'] = 'DN Pasfhocal (roghnach)';

$GLOBALS["lang"]['DNS FQDN'] = 'DNS FQN';

$GLOBALS["lang"]['DNS Hostname'] = 'DNS Hostname';

$GLOBALS["lang"]['Danish'] = 'cineál gas: in airde';

$GLOBALS["lang"]['dashboard_id'] = 'Dashboard ID';

$GLOBALS["lang"]['Dashboard ID'] = 'Dashboard ID';

$GLOBALS["lang"]['Dashboard Widgets'] = 'Dashboard Widgets';

$GLOBALS["lang"]['dashboards'] = 'Seirbhís do Chustaiméirí';

$GLOBALS["lang"]['Dashboards'] = 'Seirbhís do Chustaiméirí';

$GLOBALS["lang"]['Dashboards and Widgets allow Enterprise licensed customers to create, read, update and delete both of these collections to ensure their homepage is exactly what they need to see. Not only that, but a user is able to set a given dashboard as their own homepage. Everyone does not need to use the same homepage (dashboard), nor the same widgets on that dashboard. Professional licensed customers can choose between two predefined dashboards to set as their own homepage.'] = 'Ligeann Dashboards agus Widgets do chustaiméirí ceadúnaithe Fiontraíochta an dá cheann de na bailiúcháin seo a chruthú, a léamh, a nuashonrú agus a scriosadh chun a chinntiú go bhfuil a leathanach baile díreach cad is gá dóibh a fheiceáil. Ní amháin go, ach tá úsáideoir in ann a shocrú Painéal na nIonstraimí ar leith mar a n-leathanach baile féin. Níl ag gach duine gá a bhaint as an leathanach baile céanna (dashboard), ná na giuirléidí céanna ar an Painéal na nIonstraimí. Is féidir le custaiméirí ceadúnaithe gairmiúla a roghnú idir dhá dashboards réamhshainithe a shocrú mar a leathanach baile féin.';

$GLOBALS["lang"]['Dashboards provide <i>at a glance</i> important visibility for changes occurring on your network as well as providing quick links to device types, manufacturers, and operating systems and so much more.'] = 'Cuireann cláir airgid ar fáil <i>ag amharc</i> infheictheacht tábhachtach d\'athruithe a tharlaíonn ar do líonra chomh maith le naisc tapaidh a sholáthar do chineálacha gléas, monaróirí, agus córais oibriúcháin agus an oiread sin níos mó.';

$GLOBALS["lang"]['Dashboards use'] = 'Dashboards úsáid';

$GLOBALS["lang"]['Data'] = 'Sonraí Teagmhála';

$GLOBALS["lang"]['Data Export - CSV, XML, JSON'] = 'Easpórtáil Sonraí - CSV, XML, JSON';

$GLOBALS["lang"]['Data Retention'] = 'Sonraí a choinneáil';

$GLOBALS["lang"]['Database'] = 'Bunachar Sonraí';

$GLOBALS["lang"]['db_action'] = 'Amharc ar gach eolas';

$GLOBALS["lang"]['Database Action'] = 'Amharc ar gach eolas';

$GLOBALS["lang"]['db_column'] = 'Plean Gníomhaíochta don Oideachas';

$GLOBALS["lang"]['Database Column'] = 'Plean Gníomhaíochta don Oideachas';

$GLOBALS["lang"]['Database Definition'] = 'Sainmhíniú ar Bhunachar Sonraí';

$GLOBALS["lang"]['db_row'] = 'Clár na dToghthóirí';

$GLOBALS["lang"]['Database Row'] = 'Clár na dToghthóirí';

$GLOBALS["lang"]['Database Schema'] = 'Scéim Foilseacháin ITBÁC';

$GLOBALS["lang"]['Database Server Discovery'] = 'Database Server Discovery';

$GLOBALS["lang"]['db_table'] = 'Bunachar Sonraí';

$GLOBALS["lang"]['Database Table'] = 'Bunachar Sonraí';

$GLOBALS["lang"]['Database Tables'] = 'Naisc go dtí suíomhanna eile';

$GLOBALS["lang"]['dataset_title'] = 'Teideal an tSuímh';

$GLOBALS["lang"]['Dataset Title'] = 'Teideal an tSuímh';

$GLOBALS["lang"]['date'] = 'Dáta Tuairimí Ré';

$GLOBALS["lang"]['Date'] = 'Dáta Tuairimí Ré';

$GLOBALS["lang"]['Date D-M-Y'] = 'Sonraí Teagmhála';

$GLOBALS["lang"]['Date M-D-Y'] = 'Dáta M-D-Y';

$GLOBALS["lang"]['Date Now'] = 'Dáta Anois';

$GLOBALS["lang"]['date_of_manufacture'] = 'Dáta na Déantóireachta';

$GLOBALS["lang"]['Date Of Manufacture'] = 'Dáta na Déantóireachta';

$GLOBALS["lang"]['date_paid'] = 'Dáta an Cháisc';

$GLOBALS["lang"]['Date Paid'] = 'Dáta an Cháisc';

$GLOBALS["lang"]['date_received'] = 'Dáta a Fuarthas';

$GLOBALS["lang"]['Date Received'] = 'Dáta a Fuarthas';

$GLOBALS["lang"]['Date Y-M-D'] = 'Sonraí Teagmhála';

$GLOBALS["lang"]['Date and time when the CVE was last updated.'] = 'Dáta agus am nuair a tugadh an CVE cothrom le dáta deireanach.';

$GLOBALS["lang"]['Date and time when the CVE was published.'] = 'Dáta agus am nuair a foilsíodh an CVE.';

$GLOBALS["lang"]['Date when the CVE was published.'] = 'Dáta nuair a foilsíodh an CVE.';

$GLOBALS["lang"]['DateTime Now'] = 'Dáta Taispeáin';

$GLOBALS["lang"]['DateTime Y-M-D H:M:S'] = 'Gach ceart ar cosaint. Y-M-D H:M:S';

$GLOBALS["lang"]['day_of_month'] = 'Lá na Mí';

$GLOBALS["lang"]['Day Of Month'] = 'Lá na Mí';

$GLOBALS["lang"]['day_of_week'] = 'Lá na Seachtaine';

$GLOBALS["lang"]['Day Of Week'] = 'Lá na Seachtaine';

$GLOBALS["lang"]['Day of Month'] = 'Lá na Mí';

$GLOBALS["lang"]['dbus_identifier'] = 'Dbus Aitheantas';

$GLOBALS["lang"]['Dbus Identifier'] = 'Dbus Aitheantas';

$GLOBALS["lang"]['Debug'] = 'Déan Teagmháil Linn';

$GLOBALS["lang"]['Debugging'] = 'Debugging';

$GLOBALS["lang"]['Debugging a Script'] = 'Debugging Script';

$GLOBALS["lang"]['December'] = 'Nollaig na Nollag';

$GLOBALS["lang"]['Decommission'] = 'Amharc ar gach eolas';

$GLOBALS["lang"]['Default'] = 'Réamhshocrú';

$GLOBALS["lang"]['Default Authentication Level - Set to Connect'] = 'Réamhshocrú Fíordheimhniú Leibhéal - Leibhéal Socraigh chun Ceangail';

$GLOBALS["lang"]['Default Impersonation Level - Set to Identify'] = 'Réamhshocrú Impersonation Leibhéal - Leibhéal Socraigh a aithint';

$GLOBALS["lang"]['Default Items'] = 'Míreanna réamhshocraithe';

$GLOBALS["lang"]['Default Orgs Groups'] = 'Déan teagmháil Linn';

$GLOBALS["lang"]['Default Roles Groups'] = 'Déan Teagmháil Linn';

$GLOBALS["lang"]['Default Value'] = 'Luach réamhshocraithe';

$GLOBALS["lang"]['Default of 389. Normally 636 used for Active Directory LDAPS.'] = 'Réamhshocrú an 389. De ghnáth 636 a úsáidtear le haghaidh Eolaire Gníomhach LDAPS.';

$GLOBALS["lang"]['Default of <code>3</code> for LDAP and Active Directory.'] = 'Réamhshocrú <code>3</code> do LDAP agus Eolaire Gníomhach.';

$GLOBALS["lang"]['Defaults'] = 'Réamhshocrú';

$GLOBALS["lang"]['Deferred'] = 'Cur siar';

$GLOBALS["lang"]['Define project scope and objectives'] = 'Sainmhínigh raon feidhme tionscadail agus cuspóirí';

$GLOBALS["lang"]['Define the ISMS scope'] = 'Sainmhínigh an raon feidhme ISMS';

$GLOBALS["lang"]['Define the context of the organization (internal/external issues)'] = 'Sainmhínigh comhthéacs na heagraíochta (shaincheisteanna inmheánacha / seachtracha)';

$GLOBALS["lang"]['delay_minutes'] = 'Miontuairiscí an tSuímh';

$GLOBALS["lang"]['Delay Minutes'] = 'Miontuairiscí an tSuímh';

$GLOBALS["lang"]['Delete'] = 'Scriosta';

$GLOBALS["lang"]['Delete Example Devices'] = 'Scrios Gléasanna Sampla';

$GLOBALS["lang"]['delete_external_from_internal'] = 'Scrios Seachtrach Ó Inmheánaigh';

$GLOBALS["lang"]['Delete External From Internal'] = 'Scrios Seachtrach Ó Inmheánaigh';

$GLOBALS["lang"]['Delete NMIS Devices if not in Open-AudIT'] = 'Scrios NMIS Gléasanna mura bhfuil siad i Open-AudIT';

$GLOBALS["lang"]['Delete a {collection} entry.'] = 'Scrios iontráil {bailíocht}.';

$GLOBALS["lang"]['Delete from Application'] = 'Scriosadh an Iarratas';

$GLOBALS["lang"]['Delete from Cluster'] = 'Scriosadh ó Cluster';

$GLOBALS["lang"]['Denmark'] = 'an Danmhairg';

$GLOBALS["lang"]['Derived by audit or manually set by user.'] = 'Díorthaithe trí iniúchadh nó de láimh atá leagtha síos ag an úsáideoir.';

$GLOBALS["lang"]['Derived by audit.'] = 'Díorthaigh trí iniúchadh.';

$GLOBALS["lang"]['Derived from <code>rack_devices.device_id</code>.'] = 'Díorthaigh ó <code>rack_devices.device_id</code>.';

$GLOBALS["lang"]['Derived from <code>rack_devices.rack_id</code>.'] = 'Díorthaigh ó <code>rack_devices.rack_id</code>.';

$GLOBALS["lang"]['Derived from Collector discovery.'] = 'Díorthaithe ó fhionnachtain Bailitheoir.';

$GLOBALS["lang"]['Derived from OS Name.'] = 'Díorthaithe ó OS Ainm.';

$GLOBALS["lang"]['Derived from cloud discovery.'] = 'Díorthaithe ó fhionnachtain scamall.';

$GLOBALS["lang"]['Derived from device audits.'] = 'Díorthú ó iniúchtaí gléas.';

$GLOBALS["lang"]['Derived from device type and OS.'] = 'Díorthaithe ó chineál gléas agus OS.';

$GLOBALS["lang"]['Derived from discovery.'] = 'Díorthaithe ó fhionnachtain.';

$GLOBALS["lang"]['Derived from hostname, sysName, dns Hostname and IP in that order.'] = 'Díorthaithe ó hostname, sysName, dns Hostname agus IP san ord sin.';

$GLOBALS["lang"]['Derived from the integer severity.'] = 'Díorthaithe ón déine slánuimhir.';

$GLOBALS["lang"]['description'] = 'Cur síos ar an Táirge';

$GLOBALS["lang"]['Description'] = 'Cur síos ar an Táirge';

$GLOBALS["lang"]['destination'] = 'Deireadh an chomhrá';

$GLOBALS["lang"]['Destination'] = 'Deireadh an chomhrá';

$GLOBALS["lang"]['detail'] = 'Sonraí Teagmhála';

$GLOBALS["lang"]['Detail'] = 'Sonraí Teagmhála';

$GLOBALS["lang"]['Details'] = 'Sonraí Teagmhála';

$GLOBALS["lang"]['Details of who is usually contactable at this site.'] = 'Sonraí ar a bhfuil de ghnáth i dteagmháil ar an suíomh seo.';

$GLOBALS["lang"]['Determine how often you want to run the Baseline check against the database and create a Scheduled Report'] = 'Socraigh cé chomh minic is mian leat a reáchtáil an Seiceáil Baseline i gcoinne an bhunachar sonraí agus a chruthú Tuarascáil Sceidealta';

$GLOBALS["lang"]['Determine risk treatment options'] = 'Roghanna cóireála riosca a chinneadh';

$GLOBALS["lang"]['Develop a Risk Treatment Plan'] = 'Plean Cóireála Riosca a fhorbairt';

$GLOBALS["lang"]['Develop policies, procedures, and controls'] = 'Beartais, nósanna imeachta, agus rialuithe a fhorbairt';

$GLOBALS["lang"]['Develop required ISMS documentation (policies, procedures, etc.)'] = 'Doiciméid ISMS (polasaithe, nósanna imeachta, etc.) a fhorbairt';

$GLOBALS["lang"]['device'] = 'Gléas Gléas';

$GLOBALS["lang"]['Device'] = 'Gléas Gléas';

$GLOBALS["lang"]['Device Audits'] = 'Iniúchóireacht Feistí';

$GLOBALS["lang"]['Device Component Names'] = 'Ainmneacha Comhpháirteanna Gléas';

$GLOBALS["lang"]['Device ID'] = 'Gléas ID';

$GLOBALS["lang"]['device_id'] = 'Gléas ID';

$GLOBALS["lang"]['device_id_a'] = 'Gléas ID A';

$GLOBALS["lang"]['Device ID A'] = 'Gléas ID A';

$GLOBALS["lang"]['device_id_b'] = 'Gléas ID B';

$GLOBALS["lang"]['Device ID B'] = 'Gléas ID B';

$GLOBALS["lang"]['Device Matching Rules'] = 'Rialacha comhoiriúnachta Gléas';

$GLOBALS["lang"]['Device Name'] = 'Ainm an táirge';

$GLOBALS["lang"]['Device Result'] = 'Toradh na feiste';

$GLOBALS["lang"]['Device Results'] = 'Torthaí na feiste';

$GLOBALS["lang"]['Device Seed'] = 'Gléas Sílte';

$GLOBALS["lang"]['Device Seed Discoveries are a good option if you know that your network consists of a range of subnets, but you are unsure what they are. Seed the discovery with a local router and watch your network unfold before your eyes.'] = 'Gléas Sílte Tá fionnachtana rogha maith má tá a fhios agat go bhfuil do líonra comhdhéanta de raon de subnets, ach tá tú cinnte cad tá siad. Seed an fionnachtain le ródaire áitiúil agus féachaint ar do líonra unfold roimh do shúile.';

$GLOBALS["lang"]['Device Seed IP'] = 'Gléas Sábháil IP';

$GLOBALS["lang"]['Device Status'] = 'Stádas Feistí';

$GLOBALS["lang"]['Device Types'] = 'Cineálacha Gléas';

$GLOBALS["lang"]['Device and Software and Hardware Auditing'] = 'Gléas agus Bogearraí agus Crua-earraí Iniúchadh';

$GLOBALS["lang"]['Device is in the Subnet'] = 'Tá an gléas sa Subnet';

$GLOBALS["lang"]['Devices'] = 'Feistí';

$GLOBALS["lang"]['devices_assigned_to_location'] = 'Feistí atá sannta do shuíomh';

$GLOBALS["lang"]['Devices Assigned To Location'] = 'Feistí atá sannta do shuíomh';

$GLOBALS["lang"]['devices_assigned_to_org'] = 'Gléasanna atá sannta do Org';

$GLOBALS["lang"]['Devices Assigned To Org'] = 'Gléasanna atá sannta do Org';

$GLOBALS["lang"]['Devices Audited'] = 'Feistí iniúchta';

$GLOBALS["lang"]['Devices Collection'] = 'Bailiúchán Feistí';

$GLOBALS["lang"]['Devices Created in '] = 'Gléasanna Cruthaithe i ';

$GLOBALS["lang"]['Devices Created in Open-AudIT'] = 'Gléasanna Cruthaithe i Open-AudIT';

$GLOBALS["lang"]['devices_default_display_columns'] = 'Gléasanna Lochtanna Taispeáin';

$GLOBALS["lang"]['Devices Default Display Columns'] = 'Gléasanna Lochtanna Taispeáin';

$GLOBALS["lang"]['Devices Found Last 7 Days'] = 'Gléasanna Bunaithe 7 Lá anuas';

$GLOBALS["lang"]['Devices Found Today'] = 'Gléasanna Bunaithe inniu';

$GLOBALS["lang"]['Devices Found Yesterday'] = 'Gléasanna Bunaithe Inné';

$GLOBALS["lang"]['Devices Missing Information'] = 'Feistí Eolas ar Iarraidh';

$GLOBALS["lang"]['Devices Not Audited'] = 'Feistí nach bhfuil Iniúchóirithe';

$GLOBALS["lang"]['Devices Not Seen 30 Days'] = 'Feistí nach bhfaca 30 Laethanta';

$GLOBALS["lang"]['Devices Not Seen 7 Days'] = 'Feistí nach bhfaca 7 Laethanta';

$GLOBALS["lang"]['Devices Not Seen 90 Days'] = 'Feistí nach bhfaca 90 Laethanta';

$GLOBALS["lang"]['Devices Older Than X'] = 'Gléasanna níos sine ná X';

$GLOBALS["lang"]['Devices Retrieved via API'] = 'Gléasanna a aisghabhtar trí API';

$GLOBALS["lang"]['Devices Selected from '] = 'Gléasanna roghnaithe ó ';

$GLOBALS["lang"]['Devices Selected from Open-AudIT'] = 'Gléasanna roghnaithe ó Open-AudIT';

$GLOBALS["lang"]['Devices Updated in '] = 'Gléasanna Nuashonraithe i ';

$GLOBALS["lang"]['Devices Updated in Open-AudIT'] = 'Gléasanna Nuashonraithe in Open-AudIT';

$GLOBALS["lang"]['Devices are being benchmarked.'] = 'Tá feistí á dtagarmharcáil.';

$GLOBALS["lang"]['Devices are not being benchmarked.'] = 'Níl feistí á tagarmharcáil.';

$GLOBALS["lang"]['Devices could be benchmarked.'] = 'D\'fhéadfaí feistí a thagarmharcáil.';

$GLOBALS["lang"]['Devices from Open-AudIT'] = 'Feistí ó Open-AudIT';

$GLOBALS["lang"]['Devices in Running State'] = 'Feistí i Rith Stáit';

$GLOBALS["lang"]['Devices in Stopped State'] = 'Feistí i Stát Stoptha';

$GLOBALS["lang"]['Devices in this'] = 'Gléasanna sa';

$GLOBALS["lang"]['Devices will not be matched if their status is set to <i>deleted</i>. Any other status will allow a match to occur.'] = 'Ní mheaitseáilfear feistí má tá a stádas leagtha amach <i>scriostar</i>. Beidh aon stádas eile ar chumas cluiche a tharlóidh.';

$GLOBALS["lang"]['Devices with Expired Warranties'] = 'Feistí le Barántas Éagsúla';

$GLOBALS["lang"]['Devired from type or OS.'] = 'Devired ó chineál nó OS.';

$GLOBALS["lang"]['dhcp_enabled'] = 'Dlúthdhioscaí Cumasaithe';

$GLOBALS["lang"]['Dhcp Enabled'] = 'Dlúthdhioscaí Cumasaithe';

$GLOBALS["lang"]['dhcp_lease_expires'] = 'Seirbhís do Chustaiméirí';

$GLOBALS["lang"]['Dhcp Lease Expires'] = 'Seirbhís do Chustaiméirí';

$GLOBALS["lang"]['dhcp_lease_obtained'] = 'Léas a Choimeád';

$GLOBALS["lang"]['Dhcp Lease Obtained'] = 'Léas a Choimeád';

$GLOBALS["lang"]['dhcp_server'] = 'Freastalaí PVC';

$GLOBALS["lang"]['Dhcp Server'] = 'Freastalaí PVC';

$GLOBALS["lang"]['Did the command complete successfully and return expected data.'] = 'An raibh an t-ordú críochnaithe go rathúil agus sonraí a bhfuiltear ag súil leo ar ais.';

$GLOBALS["lang"]['direction'] = 'Treoir maidir le Treoir';

$GLOBALS["lang"]['Direction'] = 'Treoir maidir le Treoir';

$GLOBALS["lang"]['directory'] = 'irl - Library Service';

$GLOBALS["lang"]['Directory'] = 'irl - Library Service';

$GLOBALS["lang"]['disabled'] = 'Daoine faoi Mhíchumas';

$GLOBALS["lang"]['Disabled'] = 'Daoine faoi Mhíchumas';

$GLOBALS["lang"]['discard'] = 'Díroghnaigh gach rud';

$GLOBALS["lang"]['Discard'] = 'Díroghnaigh gach rud';

$GLOBALS["lang"]['Discover'] = 'Faigh amach níos mó';

$GLOBALS["lang"]['Discoveries'] = 'Nuacht agus Imeachtaí';

$GLOBALS["lang"]['Discoveries are at the very heart of what Open-AudIT does. How else would you know <i>Whats On Your Network?</i>'] = 'Tá fionnachtana ag croílár an méid a dhéanann Open-AudIT. Conas eile a bheadh a fhios agat <i>Cad ar Do Líonra?</i>';

$GLOBALS["lang"]['Discoveries are entries that enable you to run a discovery upon a network in a single click, without entering the details of that network each and every time.'] = 'Tá Discoveries iontrálacha a chuireann ar chumas tú a reáchtáil fionnachtain ar líonra i cliceáil amháin, gan dul isteach ar na sonraí ar an líonra gach agus gach uair.';

$GLOBALS["lang"]['Discovery'] = 'riachtanais uisce: measartha';

$GLOBALS["lang"]['Discovery Change Logs'] = 'Cuardaigh le haghaidh:';

$GLOBALS["lang"]['Discovery Data Retention'] = 'Coinneáil sonraí Discovery';

$GLOBALS["lang"]['discovery_id'] = 'Discovery ID';

$GLOBALS["lang"]['Discovery ID'] = 'Discovery ID';

$GLOBALS["lang"]['Discovery Issues'] = 'Ceisteanna Discovery';

$GLOBALS["lang"]['discovery_log'] = 'cliceáil grianghraf a mhéadú';

$GLOBALS["lang"]['Discovery Log'] = 'cliceáil grianghraf a mhéadú';

$GLOBALS["lang"]['Discovery Match Options'] = 'Roghanna Meaitseála Discovery';

$GLOBALS["lang"]['Discovery Name'] = 'Ainm Discovery';

$GLOBALS["lang"]['Discovery Options'] = 'Roghanna Discovery';

$GLOBALS["lang"]['Discovery Queue Count'] = 'Tuilleadh eolais';

$GLOBALS["lang"]['Discovery Queue Limit'] = 'Faigh amach níos mó';

$GLOBALS["lang"]['discovery_run'] = 'Nuacht agus Imeachtaí';

$GLOBALS["lang"]['Discovery Run'] = 'Nuacht agus Imeachtaí';

$GLOBALS["lang"]['discovery_scan_options'] = 'Roghanna Scan Discovery';

$GLOBALS["lang"]['Discovery Scan Options'] = 'Roghanna Scan Discovery';

$GLOBALS["lang"]['Discovery Scan Options are just another item collection. Enterprise users can create, read, update and delete entries as required. Professional users can read all entries, but not create new entries, update existing entries or delete entries. Community users have no GUI that allows access to this collection.'] = 'cliceáil grianghraf a mhéadú Roghanna Tá ach bailiúchán eile mír. Is féidir le húsáideoirí Fiontair iontrálacha a chruthú, a léamh, a nuashonrú agus a scriosadh de réir mar is gá. Is féidir le húsáideoirí gairmiúla gach iontráil a léamh, ach ní iontrálacha nua a chruthú, iontrálacha atá ann cheana a nuashonrú nó iontrálacha a scriosadh. Níl aon GUI ag úsáideoirí Comhphobail a cheadaíonn rochtain ar an mbailiúchán seo.';

$GLOBALS["lang"]['Discovery Scan Types'] = 'Cineálacha Scan Discovery';

$GLOBALS["lang"]['Discovery Support'] = 'Tacaíocht Discovery';

$GLOBALS["lang"]['Discovery has stopped working'] = 'Discovery Tá stop ag obair';

$GLOBALS["lang"]['disk'] = 'Díroghnaigh gach rud';

$GLOBALS["lang"]['Disk'] = 'Díroghnaigh gach rud';

$GLOBALS["lang"]['display_version'] = 'Leagann Taispeáin';

$GLOBALS["lang"]['Display Version'] = 'Leagann Taispeáin';

$GLOBALS["lang"]['Display in Menu'] = 'Taispeáin i Roghchlár';

$GLOBALS["lang"]['Displays a standard web form for submission to POST /{collection}.'] = 'Taispeánann foirm chaighdeánach gréasáin le haghaidh aighneacht chuig POST / {Bailiú}.';

$GLOBALS["lang"]['Displays a standard web form for submission to POST /{collection}/import.'] = 'Taispeáin foirm chaighdeánach gréasáin le haghaidh aighneacht chuig POST / {Bailiú}/allmhairiú.';

$GLOBALS["lang"]['district'] = 'Ceantar Iomlán Bhaile nó Ceantar Iomlán';

$GLOBALS["lang"]['District'] = 'Ceantar Iomlán Bhaile nó Ceantar Iomlán';

$GLOBALS["lang"]['Djibouti'] = 'Seirbhís do Chustaiméirí';

$GLOBALS["lang"]['dns'] = 'Duilleoga';

$GLOBALS["lang"]['Dns'] = 'Duilleoga';

$GLOBALS["lang"]['dns_domain'] = 'Dns Fearainn';

$GLOBALS["lang"]['Dns Domain'] = 'Dns Fearainn';

$GLOBALS["lang"]['dns_domain_reg_enabled'] = 'Dns Fearann Enabled Reg';

$GLOBALS["lang"]['Dns Domain Reg Enabled'] = 'Dns Fearann Enabled Reg';

$GLOBALS["lang"]['dns_fqdn'] = 'Dns FIC';

$GLOBALS["lang"]['Dns Fqdn'] = 'Dns FIC';

$GLOBALS["lang"]['dns_host_name'] = 'Dns Ainm Óstach';

$GLOBALS["lang"]['Dns Host Name'] = 'Dns Ainm Óstach';

$GLOBALS["lang"]['dns_hostname'] = 'Dns Hostname';

$GLOBALS["lang"]['Dns Hostname'] = 'Dns Hostname';

$GLOBALS["lang"]['dns_server'] = 'Freastalaí Dns';

$GLOBALS["lang"]['Dns Server'] = 'Freastalaí Dns';

$GLOBALS["lang"]['Do not forget about the Open-AudIT wiki for all your documentation.'] = 'Ná déan dearmad faoi na wiki Oscailte-AudIT do gach do cháipéisíocht.';

$GLOBALS["lang"]['Do not forget there is a mountain of documentation on the wiki'] = 'Ná déan dearmad go bhfuil sliabh doiciméadú ar an wiki';

$GLOBALS["lang"]['Do not scan these TCP ports.'] = 'Ná scanadh na calafoirt TCP.';

$GLOBALS["lang"]['Do not scan these UDP ports.'] = 'Ná scanadh na calafoirt UDP.';

$GLOBALS["lang"]['Do not show me again'] = 'Ná thaispeáint dom arís';

$GLOBALS["lang"]['Do you have a perfect example of this configuration? Perhaps a device located in a lab environment or a workstation you use to clone workstation VMs from.'] = 'An bhfuil tú sampla foirfe den chumraíocht? B\'fhéidir gléas atá suite i dtimpeallacht saotharlainne nó stáisiún oibre a úsáideann tú chun VMs stáisiún oibre Clón ó.';

$GLOBALS["lang"]['Do you want to use secure transport (LDAPS) or regular unencrypted LDAP.'] = 'Ar mhaith leat iompar slán (LDAPS) nó LDAP neamhchriptithe rialta a úsáid.';

$GLOBALS["lang"]['Do you wish to see the standard sidebar on the left.'] = 'An mian leat a fheiceáil ar an sidebar caighdeánach ar chlé.';

$GLOBALS["lang"]['documentation'] = 'Cáipéisí';

$GLOBALS["lang"]['Documentation'] = 'Cáipéisí';

$GLOBALS["lang"]['Documentation about a particular collection.'] = 'Doiciméadú faoi bhailiúchán áirithe.';

$GLOBALS["lang"]['Does Not Equal'] = 'Nach bhfuil Comhionann';

$GLOBALS["lang"]['Does the license apply to child Orgs.'] = 'An mbaineann an ceadúnas le Orgs leanbh.';

$GLOBALS["lang"]['domain'] = 'Fearainn';

$GLOBALS["lang"]['Domain'] = 'Fearainn';

$GLOBALS["lang"]['domain_controller_address'] = 'Fearann Rialaitheoir Seoladh';

$GLOBALS["lang"]['Domain Controller Address'] = 'Fearann Rialaitheoir Seoladh';

$GLOBALS["lang"]['domain_controller_name'] = 'Rialaitheoir Fearann Ainm an ainm';

$GLOBALS["lang"]['Domain Controller Name'] = 'Rialaitheoir Fearann Ainm an ainm';

$GLOBALS["lang"]['domain_role'] = 'Ról an duine';

$GLOBALS["lang"]['Domain Role'] = 'Ról an duine';

$GLOBALS["lang"]['domain_short'] = 'Gearradh an leathanaigh';

$GLOBALS["lang"]['Domain Short'] = 'Gearradh an leathanaigh';

$GLOBALS["lang"]['Dominica'] = 'tréimhse saoil: ilbhliantúil';

$GLOBALS["lang"]['Dominican Republic'] = 'Poblacht na Dhoiminiceach';

$GLOBALS["lang"]['Dont hold my hand, I know what I am doing. No filter and the ability to join custom tables.'] = 'Ná shealbhú mo lámh, Tá a fhios agam cad tá mé ag déanamh. Uimh scagaire agus an cumas a bheith páirteach táblaí saincheaptha.';

$GLOBALS["lang"]['Download'] = 'Íoslódáil';

$GLOBALS["lang"]['Download a File'] = 'Íoslódáil Comhad';

$GLOBALS["lang"]['Download a file from URL'] = 'Íoslódáil comhad ó URL';

$GLOBALS["lang"]['Download the test_windows_client.vbs script directly'] = 'Íoslódáil an script test_windows_client.vbs díreach';

$GLOBALS["lang"]['Download your updated version from'] = 'Íoslódáil do leagan nuashonraithe ó';

$GLOBALS["lang"]['driver'] = 'Tiománaí Tiomána';

$GLOBALS["lang"]['Driver'] = 'Tiománaí Tiomána';

$GLOBALS["lang"]['duplex'] = 'Duplex';

$GLOBALS["lang"]['Duplex'] = 'Duplex';

$GLOBALS["lang"]['Duplicate Devices / Missing Devices'] = 'Gléasanna Dúblacha / Gléasanna Míthreorach';

$GLOBALS["lang"]['duration'] = 'Fad an ama';

$GLOBALS["lang"]['Duration'] = 'Fad an ama';

$GLOBALS["lang"]['Dutch'] = 'cineál gas: in airde';

$GLOBALS["lang"]['ESXi'] = 'ESXi';

$GLOBALS["lang"]['EULA'] = 'EULA';

$GLOBALS["lang"]['Each IP is scanned with the discovery configured options (see Discovery Scan Options and Discovery - Community vs Professional vs Enterprise on the wiki). In general, Nmap will test for ports 22 (ssh), 135 (wmi), 62078 (iPhone) and UDP 161 (snmp). If 22, 135 or 161 respond the credential list is retrieved and each credential tested in turn. The first working credentials are used for further queries directly from the device. Note - if a device has previously been discovered and has working credentials, those credentials are tested first. Only if those fail are the other credentials then attempted.'] = 'Tá gach IP scanadh leis na roghanna fionnachtana chumraithe (féach Roghanna Scan Discovery agus Discovery - Pobail vs Gairmiúla Fiontar vs ar an wiki). Go ginearálta, beidh Nmap tástála do chalafoirt 22 (ssh), 135 (wmi), 62078 (iPhone) agus UDP 161 (snmp). Má 22, 135 nó 161 freagra a thabhairt ar an liosta dintiúir a aisghabháil agus gach dintiúir tástáil ina dhiaidh sin. Úsáidtear na chéad dintiúir oibre le haghaidh fiosruithe breise go díreach ón bhfeiste. Tabhair faoi deara - má tá gléas aimsithe roimhe seo agus má tá dintiúir oibre aige, déantar tástáil ar na dintiúirí sin ar dtús. Ach amháin má tá na dintiúir eile iarracht ansin.';

$GLOBALS["lang"]['Each time a device is discovered or an audit result is processed, all rules are retrieved from the database and run against the attributes of the specific device. Rules run against one device at a time - there is no facility to say <i>Run the rules against all devices<i> or <i>Run the rules against these devices<i>. An individual rule will test one or more attributes of the device and if they match the rule, the result will be applied. Several attributes can be tested. Several attributes can be set. Think of this as an If This, Then That system for Open-AudIT.'] = 'Gach uair a aimsítear feiste nó déantar toradh iniúchóireachta a phróiseáil, déantar gach riail a aisghabháil ón mbunachar sonraí agus a reáchtáil i gcoinne tréithe na feiste ar leith. Rialacha a reáchtáil i gcoinne feiste amháin ag an am - níl aon áis le rá <i>Rith na rialacha i gcoinne gach feiste<i> nó <i>Rith na rialacha i gcoinne na feistí<i>. Beidh riail aonair tástáil tréithe amháin nó níos mó den fheiste agus má mheaitseáil siad an riail, cuirfear an toradh i bhfeidhm. Is féidir roinnt tréithe a thástáil. Is féidir roinnt tréithe a shocrú. Smaoinigh ar seo mar Má seo, ansin an córas sin le haghaidh Open-AudIT.</i></i></i></i>';

$GLOBALS["lang"]['Easily run a discovery upon a network in a single click, without entering the details of that network each and every time.'] = 'Go héasca a reáchtáil fionnachtain ar líonra i cliceáil amháin, gan dul isteach ar na sonraí ar an líonra gach agus gach uair.';

$GLOBALS["lang"]['Ecuador'] = 'Déan Teagmháil Linn';

$GLOBALS["lang"]['Edit'] = 'Toir agus Crainn bláthanna';

$GLOBALS["lang"]['edit_log'] = 'Ceadúnas Madraí ar Líne';

$GLOBALS["lang"]['Edit Log'] = 'Ceadúnas Madraí ar Líne';

$GLOBALS["lang"]['editable'] = 'Eagarthóireacht';

$GLOBALS["lang"]['Editable'] = 'Eagarthóireacht';

$GLOBALS["lang"]['edited_by'] = 'Cuir in eagar ag';

$GLOBALS["lang"]['Edited By'] = 'Cuir in eagar ag';

$GLOBALS["lang"]['edited_date'] = 'Dáta tosaithe';

$GLOBALS["lang"]['Edited Date'] = 'Dáta tosaithe';

$GLOBALS["lang"]['edition'] = 'Eagrán teoranta';

$GLOBALS["lang"]['Edition'] = 'Eagrán teoranta';

$GLOBALS["lang"]['Egypt'] = 'An Éigipt';

$GLOBALS["lang"]['Either Amazon, Google or Microsoft.'] = 'Ceachtar Amazon, Google nó Microsoft.';

$GLOBALS["lang"]['Either none or present.

<strong>None</strong> - The successful attack does not depend on the deployment and execution conditions of the vulnerable system. The attacker can expect to be able to reach the vulnerability and execute the exploit under all or most instances of the vulnerability.

<strong>Present</strong> - The successful attack depends on the presence of specific deployment and execution conditions of the vulnerable system that enable the attack. These include:

A race condition must be won to successfully exploit the vulnerability. The successfulness of the attack is conditioned on execution conditions that are not under full control of the attacker. The attack may need to be launched multiple times against a single target before being successful.

Network injection. The attacker must inject themselves into the logical network path between the target and the resource requested by the victim (e.g. vulnerabilities requiring an on-path attacker).'] = 'Ceachtar aon cheann nó i láthair.

<strong>Gan a bheith ráite</strong> - Ní bhíonn an t-ionsaí rathúil ag brath ar dhálaí imscaradh agus forghníomhaithe an chórais leochaileacha. Is féidir leis an ionsaitheoir ag súil a bheith in ann teacht ar an leochaileacht agus a fhorghníomhú an leas a bhaint as faoi gach nó an chuid is mó cásanna an leochaileacht.

<strong>Déan teagmháil anois</strong> - Braitheann an t-ionsaí rathúil ar láithreacht coinníollacha imlonnaithe agus forghníomhaithe sonracha an chórais leochaileacha a chuireann ar chumas an ionsaí. Áirítear orthu seo:

Ní mór coinníoll cine a bhuaigh a shaothrú go rathúil ar an leochaileacht. Tá rath an ionsaí coinníollaithe ar choinníollacha fhorghníomhú nach bhfuil faoi rialú iomlán an ionsaitheoir. Is féidir leis an ionsaí gá a sheoladh amanna éagsúla i gcoinne sprioc amháin roimh a bheith rathúil.

Instealladh líonra. Ní mór don ionsaitheoir iad féin a instealladh isteach sa chonair líonra loighciúil idir an sprioc agus an acmhainn a iarrann an t-íospartach (m.sh. leochaileachtaí a éilíonn ionsaí ar an gcosán).';

$GLOBALS["lang"]['El Salvador'] = 'Sraith an Domhain';

$GLOBALS["lang"]['email'] = 'Ríomhphoist';

$GLOBALS["lang"]['Email'] = 'Ríomhphoist';

$GLOBALS["lang"]['email_address'] = 'Seoladh Ríomhphoist';

$GLOBALS["lang"]['Email Address'] = 'Seoladh Ríomhphoist';

$GLOBALS["lang"]['Email Configuration'] = 'Ríomhphost Cumraíocht';

$GLOBALS["lang"]['Email to send test to'] = 'Ríomhphost tástála a sheoladh chuig';

$GLOBALS["lang"]['Enable'] = 'Cumasaigh';

$GLOBALS["lang"]['Enable Distributed COM on this computer - Option is checked'] = 'Cumas Dáil COIM ar an ríomhaire - Tá Rogha a sheiceáil';

$GLOBALS["lang"]['enabled'] = 'Cumasaigh';

$GLOBALS["lang"]['Enabled'] = 'Cumasaigh';

$GLOBALS["lang"]['Enabling the Feature Under Windows'] = 'Cumasaigh an Gné Faoi Windows';

$GLOBALS["lang"]['encryption'] = 'Criptiú';

$GLOBALS["lang"]['Encryption'] = 'Criptiú';

$GLOBALS["lang"]['encryption_method'] = 'Modh Criptithe';

$GLOBALS["lang"]['Encryption Method'] = 'Modh Criptithe';

$GLOBALS["lang"]['encryption_status'] = 'Stádas Criptithe';

$GLOBALS["lang"]['Encryption Status'] = 'Stádas Criptithe';

$GLOBALS["lang"]['end_date'] = 'Deireadh an chomhrá';

$GLOBALS["lang"]['End Date'] = 'Deireadh an chomhrá';

$GLOBALS["lang"]['End OF Life Product ID'] = 'Deireadh ID Táirge Saol';

$GLOBALS["lang"]['end_of_life'] = 'Deireadh na Beatha';

$GLOBALS["lang"]['End Of Life'] = 'Deireadh na Beatha';

$GLOBALS["lang"]['end_of_production'] = 'Deireadh le Táirgeadh';

$GLOBALS["lang"]['End Of Production'] = 'Deireadh le Táirgeadh';

$GLOBALS["lang"]['end_of_service'] = 'Deireadh na Seirbhíse';

$GLOBALS["lang"]['End Of Service'] = 'Deireadh na Seirbhíse';

$GLOBALS["lang"]['end_of_service_life'] = 'Deireadh an tSeirbhÁse Saol';

$GLOBALS["lang"]['End Of Service Life'] = 'Deireadh an tSeirbhÁse Saol';

$GLOBALS["lang"]['Endpoint'] = 'Deireadh an chomhrá';

$GLOBALS["lang"]['English'] = 'Béarla Béarla Béarla';

$GLOBALS["lang"]['Enhances regulatory compliance'] = 'Feabhsaíonn comhlíonadh rialála';

$GLOBALS["lang"]['Enrichment is complete. The CVE has full metadata and is considered stable.'] = 'Tá saibhriú iomlán. Tá meiteashonraí iomlána ag an CVE agus meastar go bhfuil sé cobhsaí.';

$GLOBALS["lang"]['Ensure documentation is controlled and accessible'] = 'Tá doiciméadú rialaithe agus inrochtana';

$GLOBALS["lang"]['enterprise'] = 'Gnó Áitiúil a Aimsiú';

$GLOBALS["lang"]['Enterprise'] = 'Gnó Áitiúil a Aimsiú';

$GLOBALS["lang"]['Enterprise Private Network'] = 'Líonra Fiontar Poiblí';

$GLOBALS["lang"]['Enterprise private network'] = 'Líonra Fiontar príobháideach';

$GLOBALS["lang"]['Entitlement Type'] = 'Cineál Teidlíochtaí';

$GLOBALS["lang"]['Entra'] = 'Inis dúinn, le do thoil...';

$GLOBALS["lang"]['environment'] = 'Comhshaol agus Aeráid';

$GLOBALS["lang"]['Environment'] = 'Comhshaol agus Aeráid';

$GLOBALS["lang"]['Equal To'] = 'Comhionannas';

$GLOBALS["lang"]['Equal To or Greater Than'] = 'Comhionann le nó níos mó ná';

$GLOBALS["lang"]['Equal To or Less Than'] = 'Comhionann le nó níos lú ná';

$GLOBALS["lang"]['Equals'] = 'Comhionannas';

$GLOBALS["lang"]['Equatorial Guinea'] = 'An Ghuine Mheánchriosach';

$GLOBALS["lang"]['Eritrea'] = 'Amharc ar gach eolas';

$GLOBALS["lang"]['Error'] = 'Amharc ar gach eolas';

$GLOBALS["lang"]['Error Code'] = 'Clár na dToghthóirí';

$GLOBALS["lang"]['Esperanto'] = 'riachtanais uisce: measartha';

$GLOBALS["lang"]['Establish a project plan and timeline'] = 'Plean tionscadail agus amlíne a bhunú';

$GLOBALS["lang"]['Establish an information security policy'] = 'Beartas slándála faisnéise a bhunú';

$GLOBALS["lang"]['Established'] = 'Bunaithe';

$GLOBALS["lang"]['Estonia'] = 'cineál gas: in airde';

$GLOBALS["lang"]['Estonian'] = 'riachtanais uisce: measartha';

$GLOBALS["lang"]['Ethernet MAC'] = 'Ethernet MAC';

$GLOBALS["lang"]['ethernet_mac'] = 'Sonraí Teagmhála';

$GLOBALS["lang"]['Ethernet Mac'] = 'Sonraí Teagmhála';

$GLOBALS["lang"]['Ethiopia'] = 'An Aetóip';

$GLOBALS["lang"]['Evaluate the ISMS internally'] = 'Déan measúnú ar an ISMS go hinmheánach';

$GLOBALS["lang"]['Every'] = 'Gach';

$GLOBALS["lang"]['Every Day'] = 'Gach Lá';

$GLOBALS["lang"]['Example'] = 'Samplaí';

$GLOBALS["lang"]['Example Devices'] = 'Sampla Gléasanna';

$GLOBALS["lang"]['Example Org Chart with Access'] = 'Sampla Org Chart le Rochtain';

$GLOBALS["lang"]['Example text from'] = 'Sampla téacs ó';

$GLOBALS["lang"]['Examples'] = 'Samplaí';

$GLOBALS["lang"]['Exceptions'] = 'Eisceachtaí';

$GLOBALS["lang"]['exclude'] = 'Eisiamh';

$GLOBALS["lang"]['Exclude'] = 'Eisiamh';

$GLOBALS["lang"]['exclude_ip'] = 'Cuir IP san áireamh';

$GLOBALS["lang"]['Exclude IP'] = 'Cuir IP san áireamh';

$GLOBALS["lang"]['Exclude IP Addresses'] = 'Seoladh IP a eisiamh';

$GLOBALS["lang"]['Exclude IP Addresses (individual IP - 192.168.1.20, ranges - 192.168.1.30-40 or subnets - 192.168.1.100/30) listed from being scanned. Comma seperated, no spaces.'] = 'Eisiamh seoltaí IP (IP aonair - 192.168.1.20, raonta - 192.168.1.30-40 nó subnets - 192.168.1.100/30) liostaithe ó bheith scanta. Tiomsaithe, gan aon spásanna.';

$GLOBALS["lang"]['Exclude TCP Ports'] = 'Cuir TCP Calafoirt';

$GLOBALS["lang"]['exclude_tcp_ports'] = 'Cuir Calafoirt Tcp san áireamh';

$GLOBALS["lang"]['Exclude Tcp Ports'] = 'Cuir Calafoirt Tcp san áireamh';

$GLOBALS["lang"]['Exclude UDP Ports'] = 'Cuir Calafoirt UDP';

$GLOBALS["lang"]['exclude_udp_ports'] = 'Cuir Calafoirt Udp san áireamh';

$GLOBALS["lang"]['Exclude Udp Ports'] = 'Cuir Calafoirt Udp san áireamh';

$GLOBALS["lang"]['Exclude any ports listed from being scanned. Comma seperated, no spaces.'] = 'Ní áirítear aon chalafoirt atá liostaithe ó bheith scanta. Tiomsaithe, gan aon spásanna.';

$GLOBALS["lang"]['Exclude these IP addresses from being Nmap scanned.'] = 'Cuir na seoltaí IP ó bheith Nmap scanadh.';

$GLOBALS["lang"]['Excluded'] = 'Eisiata';

$GLOBALS["lang"]['exclusion_reasons'] = 'Cúiseanna Eisiaimh';

$GLOBALS["lang"]['Exclusion Reasons'] = 'Cúiseanna Eisiaimh';

$GLOBALS["lang"]['executable'] = 'inrite';

$GLOBALS["lang"]['Executable'] = 'inrite';

$GLOBALS["lang"]['executable_id'] = 'ID inrite';

$GLOBALS["lang"]['Executable ID'] = 'ID inrite';

$GLOBALS["lang"]['executables'] = 'Inrite';

$GLOBALS["lang"]['Executables'] = 'Inrite';

$GLOBALS["lang"]['Execute'] = 'Déan Teagmháil Linn';

$GLOBALS["lang"]['Executing'] = 'Amharc ar gach eolas';

$GLOBALS["lang"]['exemption_reason'] = 'Cén fáth ar chóir dom';

$GLOBALS["lang"]['Exemption Reason'] = 'Cén fáth ar chóir dom';

$GLOBALS["lang"]['Existing Building'] = 'Foirgneamh atá ann cheana';

$GLOBALS["lang"]['Existing Floor'] = 'An tUrlár atá ann faoi láthair';

$GLOBALS["lang"]['Existing Room'] = 'An Seomra Reatha';

$GLOBALS["lang"]['Existing Row'] = 'Row láthair';

$GLOBALS["lang"]['expire_date'] = 'Dáta an tSuímh';

$GLOBALS["lang"]['Expire Date'] = 'Dáta an tSuímh';

$GLOBALS["lang"]['expire_minutes'] = 'Miontuairiscí an tSuímh';

$GLOBALS["lang"]['Expire Minutes'] = 'Miontuairiscí an tSuímh';

$GLOBALS["lang"]['expires'] = 'taiseachas aeir: fliuch';

$GLOBALS["lang"]['Expires'] = 'taiseachas aeir: fliuch';

$GLOBALS["lang"]['expiry_date'] = 'Dáta éaga';

$GLOBALS["lang"]['Expiry Date'] = 'Dáta éaga';

$GLOBALS["lang"]['exploit_maturity'] = 'Dioplóma sa Ghaeilge';

$GLOBALS["lang"]['Exploit Maturity'] = 'Dioplóma sa Ghaeilge';

$GLOBALS["lang"]['Export'] = 'Easpórtáil';

$GLOBALS["lang"]['Export by Device'] = 'Easpórtáil ag Gléas';

$GLOBALS["lang"]['Export by Policy'] = 'Easpórtáil de réir Polasaí';

$GLOBALS["lang"]['Export data to'] = 'Sonraí a onnmhairiú chuig';

$GLOBALS["lang"]['Exporting a Device'] = 'Easpórtáil Gléas';

$GLOBALS["lang"]['expose'] = 'Eolas faoin gComhlacht';

$GLOBALS["lang"]['Expose'] = 'Eolas faoin gComhlacht';

$GLOBALS["lang"]['External'] = 'Amharc ar gach eolas';

$GLOBALS["lang"]['External Field Name'] = 'Ainm Réimse seachtrach';

$GLOBALS["lang"]['External Field Type'] = 'Cineál Réimse seachtrach';

$GLOBALS["lang"]['External Field Types'] = 'Cineálacha Réimse Seachtracha';

$GLOBALS["lang"]['external_ident'] = 'Aitheantas seachtrach';

$GLOBALS["lang"]['External Ident'] = 'Aitheantas seachtrach';

$GLOBALS["lang"]['external_link'] = 'Nasc seachtrach';

$GLOBALS["lang"]['External Link'] = 'Nasc seachtrach';

$GLOBALS["lang"]['extra_columns'] = 'Coláistí Breise';

$GLOBALS["lang"]['Extra Columns'] = 'Coláistí Breise';

$GLOBALS["lang"]['Extra and Time based Reporting'] = 'Tuairisciú Breise agus Ambhunaithe';

$GLOBALS["lang"]['Extra and more verbose logging is generated for troubleshooting.'] = 'Tá logáil verbose breise agus níos mó a ghintear le haghaidh fabhtcheartú.';

$GLOBALS["lang"]['FAQ'] = 'Ceisteanna Coitianta';

$GLOBALS["lang"]['FQDN'] = 'FQDN';

$GLOBALS["lang"]['FW Revision'] = 'Amharc ar gach eolas';

$GLOBALS["lang"]['Fail'] = 'Fáil ar an láthair';

$GLOBALS["lang"]['Failed'] = 'Failed';

$GLOBALS["lang"]['Failed Severity'] = 'Severity Failed';

$GLOBALS["lang"]['Falkland Islands (Malvinas)'] = 'Oileáin Fháclainne (Malvinas)';

$GLOBALS["lang"]['Family'] = 'Teaghlaigh an Teaghlaigh';

$GLOBALS["lang"]['Faroe Islands'] = 'Oileáin Fharó';

$GLOBALS["lang"]['Features'] = 'Gnéithe';

$GLOBALS["lang"]['February'] = 'Feabhra 2014';

$GLOBALS["lang"]['field'] = 'Réimse beartas Réimse';

$GLOBALS["lang"]['Field'] = 'Réimse beartas Réimse';

$GLOBALS["lang"]['field_id'] = 'ID Réimse';

$GLOBALS["lang"]['Field ID'] = 'ID Réimse';

$GLOBALS["lang"]['Field Name'] = 'Ainm an réimse';

$GLOBALS["lang"]['Field Type'] = 'Cineál Allamuigh';

$GLOBALS["lang"]['Fields'] = 'Réimsí';

$GLOBALS["lang"]['fields'] = 'Réimsí';

$GLOBALS["lang"]['Fields attributes are'] = 'Tá tréithe Réimsí';

$GLOBALS["lang"]['Fiji the Fiji Islands'] = 'Fiji na hOileáin Fhiji';

$GLOBALS["lang"]['File'] = 'Déan Teagmháil Linn';

$GLOBALS["lang"]['File Auditing'] = 'Iniúchóireacht Comhad';

$GLOBALS["lang"]['File Import'] = 'Iompórtáil Comhad';

$GLOBALS["lang"]['File Input'] = 'Ionchur Comhad';

$GLOBALS["lang"]['file_name'] = 'Ainm an Chomhaid';

$GLOBALS["lang"]['File Name'] = 'Ainm an Chomhaid';

$GLOBALS["lang"]['File Share Discovery'] = 'Comhad Roinn Discovery';

$GLOBALS["lang"]['file_size'] = 'Méid an Chomhaid';

$GLOBALS["lang"]['File Size'] = 'Méid an Chomhaid';

$GLOBALS["lang"]['filename'] = 'Ainm an chomhaid';

$GLOBALS["lang"]['Filename'] = 'Ainm an chomhaid';

$GLOBALS["lang"]['files'] = 'Amharc ar gach eolas';

$GLOBALS["lang"]['Files'] = 'Amharc ar gach eolas';

$GLOBALS["lang"]['files_id'] = 'Comhaid ID';

$GLOBALS["lang"]['Files ID'] = 'Comhaid ID';

$GLOBALS["lang"]['filter'] = 'Scagaire Scagaire';

$GLOBALS["lang"]['Filter'] = 'Scagaire Scagaire';

$GLOBALS["lang"]['filtered'] = 'Scagtha';

$GLOBALS["lang"]['Filtered'] = 'Scagtha';

$GLOBALS["lang"]['Filtered Ports'] = 'Seirbhís do Chustaiméirí';

$GLOBALS["lang"]['Finland'] = 'taiseachas aeir: fliuch';

$GLOBALS["lang"]['Finnish'] = 'Fionlainnis Fionlainnis';

$GLOBALS["lang"]['Firewall'] = 'balla dóiteáin';

$GLOBALS["lang"]['Firewall Packages'] = 'Pacáistí balla dóiteáin';

$GLOBALS["lang"]['firewall_rule'] = 'Riail balla dóiteáin';

$GLOBALS["lang"]['Firewall Rule'] = 'Riail balla dóiteáin';

$GLOBALS["lang"]['firmware'] = 'Firmware';

$GLOBALS["lang"]['Firmware'] = 'Firmware';

$GLOBALS["lang"]['firmware_revision'] = 'Athbhreithniú Firmware';

$GLOBALS["lang"]['Firmware Revision'] = 'Athbhreithniú Firmware';

$GLOBALS["lang"]['First'] = 'An Chéad Chéad';

$GLOBALS["lang"]['First Name'] = 'An Chéad Ainm';

$GLOBALS["lang"]['first_run'] = 'An Chéad Rith';

$GLOBALS["lang"]['First Run'] = 'An Chéad Rith';

$GLOBALS["lang"]['first_seen'] = 'An chéad Seen';

$GLOBALS["lang"]['First Seen'] = 'An chéad Seen';

$GLOBALS["lang"]['First focus on what the end need is: are you trying to baseline software, users, or Netstat data? What is the important thing(s) to compare and report on?'] = 'An chéad díriú ar cad is gá an deireadh: An bhfuil tú ag iarraidh a bogearraí bonnlíne, úsáideoirí, nó sonraí Netstat? Cad é an rud is tábhachtaí (í) a chur i gcomparáid agus a thuairisciú ar?';

$GLOBALS["lang"]['FirstWave'] = 'An Chéad Uair';

$GLOBALS["lang"]['Fix'] = 'An bhfuil a fhios agat';

$GLOBALS["lang"]['Fixed'] = 'Seasta Seasta';

$GLOBALS["lang"]['Fixing the Issue'] = 'An cheist a Shocrú';

$GLOBALS["lang"]['Floor'] = 'Uisce agus Séarachas';

$GLOBALS["lang"]['Follow any of the links below and discover how to use Open-AudIT to find out <b>Whats On Your Network?</b>'] = 'Lean aon cheann de na naisc thíos agus a fháil amach conas a úsáid Open-AudIT a fháil amach <b>Cad ar Do Líonra?</b>';

$GLOBALS["lang"]['For'] = 'Le haghaidh';

$GLOBALS["lang"]['For <i>Type</i> make sure to select Baseline, and for Group you should select a Group of devices, if applicable to this baseline, that best represent the devices to apply the baseline against. This will prevent erroneous entries.'] = 'Le haghaidh <i>Cineál Cineál Cineál Cineál</i> a dhéanamh cinnte a roghnú Baseline, agus le haghaidh Grúpa ba chóir duit a roghnú Grúpa feistí, más infheidhme maidir leis an mbonnlíne, is fearr ionadaíocht a dhéanamh ar na feistí a chur i bhfeidhm ar an bonnlíne i gcoinne. Cuirfidh sé seo cosc ar iontrálacha earráideacha.';

$GLOBALS["lang"]['For Debian/Ubuntu run, including setting dpkg to remember your override so an apt-get upgrade will not break'] = 'Do Debian / Ubuntu reáchtáil, lena n-áirítear dpkg leagan chun cuimhneamh do override mar sin ní bheidh uasghrádú apt-get bhriseadh';

$GLOBALS["lang"]['For SNMP Open-AudIT can use v1, v2 and v3 credentials. The device is queried regardless of it being a router, switch (regular network devices) or a computer (Linux and Windows often run SNMP for monitoring tools).'] = 'Do SNMP Open-AudIT Is féidir úsáid a bhaint v1, v2 agus v3 dintiúir. Tá an gléas queried beag beann ar é a bheith ina ródaire, athrú (feistí líonra neamhrialta) nó ríomhaire (Linux agus Windows reáchtáil go minic SNMP le haghaidh uirlisí monatóireachta).';

$GLOBALS["lang"]['For a primer on cron, see this Wikipedia page'] = 'Le haghaidh primer ar cron, féach ar an leathanach Vicipéid';

$GLOBALS["lang"]['For a seed discovery, should I only discover IPs in the private IP address space.'] = 'Le haghaidh fionnachtain síolta, ba chóir dom a fháil amach ach IP sa spás seoladh IP príobháideach.';

$GLOBALS["lang"]['For a seed discovery, should I only discover IPs on the chosen subnet.'] = 'Le haghaidh fionnachtain síolta, ba chóir dom a fháil amach ach IPanna ar an subnet roghnaithe.';

$GLOBALS["lang"]['For a seed discovery, should I ping the subnet before running the discovery.'] = 'Le haghaidh fionnachtain síolta, ba chóir dom ping an subnet roimh rith an fionnachtain.';

$GLOBALS["lang"]['For advanced entry of a raw SQL query. As per Queries, you must include <code>WHERE @filter AND<code> in your SQL.'] = 'Chun iontráil chun cinn ceist SQL amh. De réir Fiosruithe, ní mór duit a chur san áireamh <code>WHERE @filter AND<code> in your SQL.</code></code>';

$GLOBALS["lang"]['For each spawned process, the below occurs.'] = 'I gcás gach próiseas sceite, tarlaíonn an méid seo thíos.';

$GLOBALS["lang"]['For example - you might create a baseline from a device running Redhat 9 which acts as one of your Apache servers in a cluster. You know this particular server is configured just the way you want it but you are unsure if other servers in the cluster are configured exactly the same. Baselines enable you to determine this.'] = 'Mar shampla - d\'fhéadfá a chruthú bonnlíne ó gléas ag rith Redhat 9 a ghníomhaíonn mar cheann de do freastalaithe Apache i mbraisle. Tá a fhios agat go bhfuil an freastalaí ar leith cumraithe díreach ar an mbealach is mian leat é ach tá tú cinnte má freastalaithe eile sa bhraisle atá cumraithe go díreach mar an gcéanna. Baselines ar chumas tú a chinneadh seo.';

$GLOBALS["lang"]['For example - you might create a baseline from a device running Redhat 9 which acts as one of your Apache servers in a cluster. You know this particular server is configured just the way you want it but you are unsure if other servers in the cluster are configured exactly the same. Baselines enables you to determine this.'] = 'Mar shampla - d\'fhéadfá a chruthú bonnlíne ó gléas ag rith Redhat 9 a ghníomhaíonn mar cheann de do freastalaithe Apache i mbraisle. Tá a fhios agat go bhfuil an freastalaí ar leith cumraithe díreach ar an mbealach is mian leat é ach tá tú cinnte má freastalaithe eile sa bhraisle atá cumraithe go díreach mar an gcéanna. Cuireann Baselines ar chumas tú a chinneadh seo.';

$GLOBALS["lang"]['For further details information, see the wiki.'] = 'Chun tuilleadh eolais a fháil, féach ar an wiki.';

$GLOBALS["lang"]['For licenses that are not perpetual, when does the license expire.'] = 'I gcás ceadúnais nach bhfuil suthain, nuair a dhéanann an ceadúnas in éag.';

$GLOBALS["lang"]['For more detailed information, check the Open-AudIT Knowledge Base.'] = 'Le haghaidh tuilleadh eolais mhionsonraithe, seiceáil an Bonn Eolais Oscailte-AudIT.';

$GLOBALS["lang"]['For more information please see the following guide which includes a video. Use'] = 'Le haghaidh tuilleadh eolais féach an treoir seo a leanas lena n-áirítear físeán. Úsáid Úsáid Úsáidte';

$GLOBALS["lang"]['For more information, see'] = 'Le haghaidh tuilleadh eolais, féach';

$GLOBALS["lang"]['form_factor'] = 'Foirm Iarratais';

$GLOBALS["lang"]['Form Factor'] = 'Foirm Iarratais';

$GLOBALS["lang"]['format'] = 'Amharc ar gach eolas';

$GLOBALS["lang"]['Format'] = 'Amharc ar gach eolas';

$GLOBALS["lang"]['Forth'] = 'Toir agus Crainn';

$GLOBALS["lang"]['fqdn'] = 'Seirbhís do Chustaiméirí';

$GLOBALS["lang"]['Fqdn'] = 'Seirbhís do Chustaiméirí';

$GLOBALS["lang"]['France, French Republic'] = 'An Fhrainc, Poblacht na Fraince';

$GLOBALS["lang"]['free'] = 'Saor in aisce';

$GLOBALS["lang"]['Free'] = 'Saor in aisce';

$GLOBALS["lang"]['French'] = 'Franc na hEilvéise';

$GLOBALS["lang"]['French Guiana'] = 'Cónaidhm na Rúise';

$GLOBALS["lang"]['French Polynesia'] = 'cliceáil grianghraf a mhéadú';

$GLOBALS["lang"]['French Southern Territories'] = 'Críocha an Deiscirt na Fraince';

$GLOBALS["lang"]['Frequently Asked Questions'] = 'Ceisteanna Coitianta';

$GLOBALS["lang"]['Friday'] = 'Dé hAoine';

$GLOBALS["lang"]['From 100 Devices'] = 'Ó 100 Gléasanna';

$GLOBALS["lang"]['From 500 Devices'] = 'Ó 500 Gléasanna';

$GLOBALS["lang"]['From that page'] = 'Ón leathanach seo';

$GLOBALS["lang"]['full_name'] = 'Ainm iomlán';

$GLOBALS["lang"]['Full Name'] = 'Ainm iomlán';

$GLOBALS["lang"]['Full cloud auditing with all the details from a regular Open-AudIT audit AND details such as the machine type and size.'] = 'iniúchadh scamall iomlán leis na sonraí go léir ó iniúchadh rialta Open-AudIT agus sonraí ar nós an cineál meaisín agus méid.';

$GLOBALS["lang"]['function'] = 'Feidhmchlár: Feidhm';

$GLOBALS["lang"]['Function'] = 'Feidhmchlár: Feidhm';

$GLOBALS["lang"]['GROUP BY'] = 'Féachaint ar Fholúntais';

$GLOBALS["lang"]['Gabon'] = 'Inis dúinn, le do thoil...';

$GLOBALS["lang"]['Galician'] = 'riachtanais uisce: measartha';

$GLOBALS["lang"]['Gambia the'] = 'Gambia an';

$GLOBALS["lang"]['Gap Analysis (optional)'] = 'Anailís Gap (roghnach)';

$GLOBALS["lang"]['gateway'] = 'Féach ar Léarscáileanna';

$GLOBALS["lang"]['Gateway'] = 'Féach ar Léarscáileanna';

$GLOBALS["lang"]['gateways'] = 'irl - Library Service';

$GLOBALS["lang"]['Gateways'] = 'irl - Library Service';

$GLOBALS["lang"]['Generated By'] = 'Cineálach De réir';

$GLOBALS["lang"]['geo'] = 'Féachaint ar Fholúntais';

$GLOBALS["lang"]['Geo'] = 'Féachaint ar Fholúntais';

$GLOBALS["lang"]['Geographical Maps'] = 'Léarscáileanna Tíreolaíochta';

$GLOBALS["lang"]['Georgia'] = 'taiseachas aeir: fliuch';

$GLOBALS["lang"]['German'] = 'Gearmáinis';

$GLOBALS["lang"]['Germany'] = 'an Ghearmáin';

$GLOBALS["lang"]['Get Lat/Long'] = 'Faigh Lat / Fad';

$GLOBALS["lang"]['Get News'] = 'Faigh amach níos mó';

$GLOBALS["lang"]['Get Started'] = 'Faigh Tosaigh';

$GLOBALS["lang"]['Get a Free License'] = 'Faigh Ceadúnas Saor in Aisce';

$GLOBALS["lang"]['Get familiar with the Open-AudIT platform and explore some of its features.'] = 'Faigh eolas ar an ardán Open-AudIT agus iniúchadh a dhéanamh ar roinnt de na gnéithe.';

$GLOBALS["lang"]['Getting Started'] = 'Ag tosú';

$GLOBALS["lang"]['Ghana'] = 'riachtanais uisce: measartha';

$GLOBALS["lang"]['Gibraltar'] = 'irl - Library Service';

$GLOBALS["lang"]['Github'] = 'Gluaiseacht Bunaithe: Uimh';

$GLOBALS["lang"]['Global Discovery Options'] = 'Roghanna Discover Domhanda';

$GLOBALS["lang"]['Global area network'] = 'Líonra limistéar domhanda';

$GLOBALS["lang"]['Go'] = 'Go raibh maith agat';

$GLOBALS["lang"]['Go back to your Open-AudIT server and create a discovery with the target Windows computers IP Address as the subnet (this will save having to discover the entire subnet again). Run the discovery, taking note of any issues. For any issues found, take appropriate actions.'] = 'Téigh ar ais chuig do fhreastalaí Open-AudIT agus a chruthú fionnachtain leis an sprioc Windows ríomhairí IP Seoladh mar an subnet (beidh sé seo a shábháil a bheith a fháil amach ar an subnet ar fad arís). Rith an fionnachtain, ag cur faoi deara aon saincheisteanna. I gcás aon saincheisteanna a fhaightear, gníomhartha iomchuí a ghlacadh.';

$GLOBALS["lang"]['Go the target Windows PC (or use RDP) and log on as the user used by your discovery credential set.'] = 'Téigh an sprioc Windows PC (nó úsáid a bhaint as RDP) agus logáil isteach ar mar an t-úsáideoir a úsáidtear ag do sraith dintiúir fionnachtana.';

$GLOBALS["lang"]['Go to menu'] = 'Téigh go dtí roghchlár';

$GLOBALS["lang"]['Go to the <i>Applications</i> -> <i>App registrations</i> menu item on the far left. Search for Open-AudIT. Click the Open-AudIT entry in the list (assuming you named the app Open-AudIT).'] = 'Téigh go dtí an <i>Amharc ar gach eolas</i> - ú <i>Cláir App</i> mír roghchlár ar an bhfad fágtha. Cuardaigh le haghaidh Open-AudIT. Cliceáil ar an iontráil Open-AudIT sa liosta (ag glacadh leis ainmnithe tú an app Open-AudIT).';

$GLOBALS["lang"]['Go to the <i>Certificates and secrets</i> menu item under <i>Manage</i> in the center menu.'] = 'Téigh go dtí an <i>Deimhnithe agus rúin</i> mír roghchlár faoi <i>Bainistíocht</i> sa roghchlár lár.';

$GLOBALS["lang"]['Go to the <i>Single sign-on</i> menu item and click SAML for <i>Select a single sign-on method</i>.'] = 'Téigh go dtí an <i>Sínigh aonair ar</i> mír roghchlár agus cliceáil SAML le haghaidh <i>Roghnaigh modh sínithe aonair ar</i>.';

$GLOBALS["lang"]['Google Compute Fields'] = 'Google Compute Fields';

$GLOBALS["lang"]['Google JSON Credentials'] = 'Google JSON Credentials';

$GLOBALS["lang"]['Google Maps API Key'] = 'Google Maps API Príomhscéalta an Iarthair';

$GLOBALS["lang"]['Great, then you can help! Send FirstWave the text shown in the GUI and what should be shown. We will include that in the language file so going forward, the translation is improved and you do not need to worry about updating it for every release!'] = 'Mór, ansin is féidir leat cabhrú! Seol an nasc seo chugainn An bhfuil an téacs a thaispeántar sa GUI agus cad ba chóir a thaispeáint. Beidh muid san áireamh go sa chomhad teanga ag dul ar aghaidh, Tá an t-aistriúchán feabhsaithe agus ní gá duit a bheith buartha faoi thabhairt cothrom le dáta é do gach scaoileadh!';

$GLOBALS["lang"]['Greater Than'] = 'Níos mó ná';

$GLOBALS["lang"]['Greater Than or Equals'] = 'Níos mó ná nó Comhionann';

$GLOBALS["lang"]['Greece'] = 'an Ghréig';

$GLOBALS["lang"]['Greek'] = 'cineál gas: in airde';

$GLOBALS["lang"]['Green Query'] = 'An tSraith Shinsearach';

$GLOBALS["lang"]['Greenland'] = 'Amharc ar gach eolas';

$GLOBALS["lang"]['Grenada'] = 'riachtanais uisce: measartha';

$GLOBALS["lang"]['Group'] = 'Grúpa an Ghrúpa';

$GLOBALS["lang"]['group_by'] = 'Grúpa By';

$GLOBALS["lang"]['Group By'] = 'Grúpa By';

$GLOBALS["lang"]['group_id'] = 'Grúpa ID';

$GLOBALS["lang"]['Group ID'] = 'Grúpa ID';

$GLOBALS["lang"]['groups'] = 'Grúpaí agus grúpaí';

$GLOBALS["lang"]['Groups'] = 'Grúpaí agus grúpaí';

$GLOBALS["lang"]['Groups are used as simple lists of devices that match the required conditions. If requested using JSON they return a list of <i>devices.id</i> only. If requested using the web interface, they return the standard column attribute list. Groups can be used for Integrations, Baselines and other items.'] = 'Úsáidtear grúpaí mar liostaí simplí feistí a mheaitseáil leis na coinníollacha is gá. Má iarrtar ag baint úsáide as JSON siad ar ais liosta de <i>feistí.id</i> ach amháin. Má iarrtar ort an comhéadan gréasáin a úsáid, filleann siad an liosta tréith colún caighdeánach. Is féidir le grúpaí a úsáid le haghaidh Integrations, Baselines agus míreanna eile.';

$GLOBALS["lang"]['Guadeloupe'] = 'cineál gas: in airde';

$GLOBALS["lang"]['Guam'] = 'Amharc ar gach eolas';

$GLOBALS["lang"]['Guatemala'] = 'Guatamala';

$GLOBALS["lang"]['Guernsey'] = 'Amharc ar gach eolas';

$GLOBALS["lang"]['guest_device_id'] = 'ID Gléas Aoi';

$GLOBALS["lang"]['Guest Device ID'] = 'ID Gléas Aoi';

$GLOBALS["lang"]['guid'] = 'Bhí an t-eolas mícheart nó as dáta';

$GLOBALS["lang"]['Guid'] = 'Bhí an t-eolas mícheart nó as dáta';

$GLOBALS["lang"]['Guinea'] = 'cineál gas: in airde';

$GLOBALS["lang"]['Guinea-Bissau'] = 'cliceáil grianghraf a mhéadú';

$GLOBALS["lang"]['Guyana'] = 'cineál gas: in airde';

$GLOBALS["lang"]['HP-UX'] = 'HP-UX';

$GLOBALS["lang"]['HW Revision'] = 'Athbhreithniú WW';

$GLOBALS["lang"]['Haiti'] = 'Bhí an t-eolas úsáideach';

$GLOBALS["lang"]['hard_drive_index'] = 'Innéacs Drive crua';

$GLOBALS["lang"]['Hard Drive Index'] = 'Innéacs Drive crua';

$GLOBALS["lang"]['Hardware'] = 'Crua-earraí';

$GLOBALS["lang"]['hardware_revision'] = 'Athbhreithniú Crua-earraí';

$GLOBALS["lang"]['Hardware Revision'] = 'Athbhreithniú Crua-earraí';

$GLOBALS["lang"]['Has this policy been applied in this organization.'] = 'An bhfuil an polasaí seo i bhfeidhm san eagraíocht seo.';

$GLOBALS["lang"]['hash'] = 'Níl an Tweet seo ar fáil';

$GLOBALS["lang"]['Hash'] = 'Níl an Tweet seo ar fáil';

$GLOBALS["lang"]['Have the agent always run the latest audit script (if you upgrade Open-AudIT and manually copy the scripts to the targets, then set cron - you will need to update these scripts for each upgrade).'] = 'An bhfuil an gníomhaire a reáchtáil i gcónaí ar an script iniúchóireachta is déanaí (má tá tú ag uasghrádú Open-AudIT agus de láimh na scripteanna a chóipeáil ar na spriocanna, ansin a leagtar cron - beidh ort a thabhairt cothrom le dáta na scripteanna do gach uasghrádú).';

$GLOBALS["lang"]['Have your user open a command prompt (using <i>Run as Administrator</i>). Paste the below into the prompt to download the Agent.'] = 'An bhfuil do úsáideoir oscailt ordú pras (ag baint úsáide as <i>Rith mar Riarthóir</i>). Greamaigh an thíos isteach sa pras a íoslódáil an Gníomhaire.';

$GLOBALS["lang"]['Head'] = 'Ceann na gCeann';

$GLOBALS["lang"]['Heard Island and McDonald Islands'] = 'Heard Island and McDonald Islands';

$GLOBALS["lang"]['Hebrew'] = 'Eabhrais';

$GLOBALS["lang"]['height'] = 'Sean agus óg';

$GLOBALS["lang"]['Height'] = 'Sean agus óg';

$GLOBALS["lang"]['Height in RU'] = 'Airde i RU';

$GLOBALS["lang"]['Help'] = 'Cabhair';

$GLOBALS["lang"]['Help and Frequently Asked Questions'] = 'Cabhair agus Ceisteanna Coitianta';

$GLOBALS["lang"]['Helps manage and mitigate information security risks'] = 'Cuidíonn rioscaí slándála faisnéise a bhainistiú agus a mhaolú';

$GLOBALS["lang"]['Hide Audit Window'] = 'Folaigh Fuinneog Iniúchadh';

$GLOBALS["lang"]['high'] = 'Ard-luas';

$GLOBALS["lang"]['High'] = 'Ard-luas';

$GLOBALS["lang"]['High Availability'] = '. Infhaighteacht Ard';

$GLOBALS["lang"]['Hindi'] = 'Déan teagmháil linn';

$GLOBALS["lang"]['Holy See (Vatican City State)'] = 'Féach Naofa (Stát Chathair na Vatacáine)';

$GLOBALS["lang"]['Home'] = 'Baile Átha Cliath';

$GLOBALS["lang"]['home'] = 'Baile Átha Cliath';

$GLOBALS["lang"]['Home Area Network'] = 'Baile an Líonra';

$GLOBALS["lang"]['Home area network'] = 'líonra limistéar Baile';

$GLOBALS["lang"]['Honduras'] = 'Déan teagmháil linn';

$GLOBALS["lang"]['Hong Kong'] = 'Hong Cong';

$GLOBALS["lang"]['host'] = 'Óstach';

$GLOBALS["lang"]['Host'] = 'Óstach';

$GLOBALS["lang"]['hostname'] = 'Ainm an Bhrú';

$GLOBALS["lang"]['Hostname'] = 'Ainm an Bhrú';

$GLOBALS["lang"]['hour'] = 'Uair an chloig';

$GLOBALS["lang"]['Hour'] = 'Uair an chloig';

$GLOBALS["lang"]['How Does It Work?'] = 'Conas a oibríonn sé?';

$GLOBALS["lang"]['How Does it Work?'] = 'Conas a oibríonn sé?';

$GLOBALS["lang"]['How Long Does it Take'] = 'Conas a thógann sé';

$GLOBALS["lang"]['How and Why is'] = 'Conas agus Cén fáth go bhfuil';

$GLOBALS["lang"]['How and Why is Open-AudIT More Secure'] = 'Conas agus Cén fáth go bhfuil Oscailte-AudIT níos Slán';

$GLOBALS["lang"]['How do they work?'] = 'Conas a oibríonn siad?';

$GLOBALS["lang"]['How does a Device Seed Discovery find known IPs?'] = 'Cén chaoi a bhfaigheann Discovery Gléas ar eolas IPanna?';

$GLOBALS["lang"]['How long did the command take to execute.'] = 'Cé chomh fada a rinne an t-ordú a ghlacadh a fhorghníomhú.';

$GLOBALS["lang"]['How long should Nmap wait for a response, per device.'] = 'Cé chomh fada ba chóir Nmap fanacht le haghaidh freagra, in aghaidh an gléas.';

$GLOBALS["lang"]['How many circuit feed to this rack.'] = 'Cé mhéad ciorcad beatha leis an raca seo.';

$GLOBALS["lang"]['How many policies results in a fail.'] = 'Cé mhéad beartas a eascraíonn i teip.';

$GLOBALS["lang"]['How many policies results in a pass.'] = 'Cé mhéad torthaí beartais i pas.';

$GLOBALS["lang"]['How many power sockets in this rack.'] = 'Cé mhéad soicéid cumhachta sa raca seo.';

$GLOBALS["lang"]['How many rack units in height is this rack.'] = 'Cé mhéad aonad raca ar airde é seo raca.';

$GLOBALS["lang"]['How often should the collector ask the server for a task.'] = 'Cé chomh minic ba chóir an bailitheoir a iarraidh ar an bhfreastalaí le haghaidh tasc.';

$GLOBALS["lang"]['How should we select devices to be integrated (using an Attribute, Query or a Group).'] = 'Conas ba chóir dúinn feistí a roghnú le bheith comhtháite (ag baint úsáide as ómós, Query nó Grúpa).';

$GLOBALS["lang"]['How the vulnerability is exploited (e.g., Network, Adjacent, Local, Physical).'] = 'Conas a dhéantar an leochaileacht a shaothrú (m.sh., Líonra, Adjacent, Áitiúil, Fisiciúil).';

$GLOBALS["lang"]['How to compare'] = 'Conas a chur i gcomparáid';

$GLOBALS["lang"]['Human-readable explanation of the vulnerability.'] = 'Míniú inléite an duine ar an leochaileacht.';

$GLOBALS["lang"]['Hungarian'] = 'foirm duille: oval';

$GLOBALS["lang"]['Hungary'] = 'An Ungáir';

$GLOBALS["lang"]['hw_cpe'] = 'cineál gas: in airde';

$GLOBALS["lang"]['Hw Cpe'] = 'cineál gas: in airde';

$GLOBALS["lang"]['hyperthreading'] = 'Hyperthreading';

$GLOBALS["lang"]['Hyperthreading'] = 'Hyperthreading';

$GLOBALS["lang"]['I have read the EULA.'] = 'Léigh mé an EULA.';

$GLOBALS["lang"]['I hope this post has alleviated any concerns you have about Open-AudIT and Security. If you have any questions at all, please do not hesitate to reach out to us here at FirstWave. We are always happy to discuss your concerns and needs. And maybe if your question is not something I have addressed here, I can add it here for future users'] = 'Tá súil agam go bhfuil an post seo a mhaolú aon imní agat faoi Open-AudIT agus Slándáil. Má tá aon cheist agat ar chor ar bith, ná bíodh aon leisce ort a bhaint amach dúinn anseo ag FirstWave. Táimid sásta i gcónaí do imní agus do riachtanais a phlé. Agus b\'fhéidir más rud é nach bhfuil do cheist rud éigin mé aghaidh anseo, Is féidir liom é a chur anseo le haghaidh úsáideoirí sa todhchaí';

$GLOBALS["lang"]['id'] = 'ID';

$GLOBALS["lang"]['ID'] = 'ID';

$GLOBALS["lang"]['IF'] = 'IARRATAS';

$GLOBALS["lang"]['IMPORTANT'] = 'TÁBHACHTACH';

$GLOBALS["lang"]['INPUTS'] = 'Seirbhís do Chustaiméirí';

$GLOBALS["lang"]['IOS Version'] = 'Leagan IOS';

$GLOBALS["lang"]['IP'] = 'IP IP IP IP';

$GLOBALS["lang"]['ip'] = 'IP IP IP IP';

$GLOBALS["lang"]['IP Address'] = 'Seoladh IP';

$GLOBALS["lang"]['IP Addresses'] = 'Seoladh IP';

$GLOBALS["lang"]['IP Last Seen'] = 'IP Last Seeing';

$GLOBALS["lang"]['IP Set By'] = 'Socraigh IP ag';

$GLOBALS["lang"]['ISMS'] = 'Seirbhís do Chustaiméirí';

$GLOBALS["lang"]['ISO 27001 only.'] = 'ISO 27001 amháin.';

$GLOBALS["lang"]['Iceland'] = 'An oslainn';

$GLOBALS["lang"]['icon'] = 'cineál gas in airde';

$GLOBALS["lang"]['Icon'] = 'cineál gas in airde';

$GLOBALS["lang"]['Icon and Text'] = 'Icon agus Téacs';

$GLOBALS["lang"]['Icon only, text only or icon and text.'] = 'Icon ach, téacs amháin nó deilbhín agus téacs.';

$GLOBALS["lang"]['id_internal'] = 'Id Inmheánach';

$GLOBALS["lang"]['Id Internal'] = 'Id Inmheánach';

$GLOBALS["lang"]['id_number'] = 'Uimhir a hAon';

$GLOBALS["lang"]['Id Number'] = 'Uimhir a hAon';

$GLOBALS["lang"]['identification'] = 'Amharc ar gach eolas';

$GLOBALS["lang"]['Identification'] = 'Amharc ar gach eolas';

$GLOBALS["lang"]['Identify information assets'] = 'Sainaithin sócmhainní faisnéise';

$GLOBALS["lang"]['Identify interested parties and their requirements'] = 'páirtithe leasmhara agus a riachtanais a aithint';

$GLOBALS["lang"]['Identify key stakeholders and assign roles'] = 'Sainaithin príomhpháirtithe leasmhara agus rólanna a shannadh';

$GLOBALS["lang"]['Identify the device(s) that are your exemplary, or <i>gold image</i> you want to compare similar devices against.'] = 'Sainaithin an gléas(s) go bhfuil do eiseamláireach, nó <i>íomhá óir</i> ba mhaith leat a chur i gcomparáid feistí den chineál céanna i gcoinne.';

$GLOBALS["lang"]['Identifying and evaluating security risks'] = 'Rioscaí slándála a aithint agus a mheas';

$GLOBALS["lang"]['If'] = 'Más rud é';

$GLOBALS["lang"]['If a device is individually discovered using the <i>Discover Device</i> link on the device details page, we first check if this device has been discovered previously (by Discovery) and if so, use the discovery options from that scan. If it has not been previously discovered, we revert to the configuration item discovery_default_scan_option the settings.'] = 'Má tá gléas aimsithe ina n-aonar ag baint úsáide as an <i>Gléas Discover</i> nasc ar an leathanach sonraí gléas, seiceáil muid ar dtús má tá an gléas seo aimsithe roimhe seo (ag Discovery) agus más amhlaidh, bain úsáid as na roghanna fionnachtana ón scanadh. Más rud é nach bhfuil sé fuair sé amach roimhe seo, ar ais muid go dtí an cumraíocht mír fionnachtana_default_scan_option na socruithe.';

$GLOBALS["lang"]['If a new Org is created, an LDAP group name is automatically derived from the name. For example, if a new Org is created and is named Test, the corresponding LDAP group will be named open-audit_orgs_test.'] = 'Má tá Org nua cruthaithe, tá ainm grúpa LDAP díorthaithe go huathoibríoch ón ainm. Mar shampla, má tá Org nua a cruthaíodh agus tá sé ainmnithe Tástáil, beidh an grúpa LDAP comhfhreagrach ainmnithe oscailte-audit_orgs_test.';

$GLOBALS["lang"]['If a port responds with filtered, should we consider it available.'] = 'Má fhreagraíonn calafort le scagadh, ba cheart dúinn é a mheas ar fáil.';

$GLOBALS["lang"]['If a port responds with open|filtered, should we consider it available.'] = 'Má fhreagraíonn calafort le taisceadh oscailte, ba cheart dúinn é a mheas ar fáil.';

$GLOBALS["lang"]['If a remote device does not exist in the Open-AudIT selected devices, should we delete it from the external system.'] = 'Mura bhfuil feiste iargúlta ann sna feistí roghnaithe Open-AudIT, ba cheart dúinn é a scriosadh ón gcóras seachtrach.';

$GLOBALS["lang"]['If an Open-AudIT device has been changed, should we update the external system.'] = 'Má athraíodh gléas Open-AudIT, ba chóir dúinn an córas seachtrach a nuashonrú.';

$GLOBALS["lang"]['If an Open-AudIT device is not on the external system, should we create it.'] = 'Más rud é nach bhfuil gléas Open-AudIT ar an gcóras seachtrach, ba chóir dúinn é a chruthú.';

$GLOBALS["lang"]['If an agent reports its primary IP is in this subnet, perform the actions.'] = 'Má thuairiscíonn gníomhaire go bhfuil a IP bunscoile sa subnet, a dhéanamh ar na gníomhartha.';

$GLOBALS["lang"]['If any of these (comma seperated, no spaces) ports are detected, assume SSH is running on them and use them for auditing. No need to add this port to the Custom TCP ports - it will be added automatically.'] = 'Má tá aon cheann de na (comparáid, aon spásanna) calafoirt a bhrath, glacadh SSH ag rith orthu agus iad a úsáid le haghaidh iniúchadh. Ní gá an calafort seo a chur leis na calafoirt TCP Saincheaptha - cuirfear é go huathoibríoch.';

$GLOBALS["lang"]['If no operator is specified, the default is =. Properties should be fully qualified - ie, devices.hostname (not just hostname).'] = 'Má tá aon oibreoir sonraithe, is é an réamhshocraithe =. Ba chóir go mbeadh airíonna cáilithe go hiomlán - ie, feistí.hostname (ní hamháin óstáil).';

$GLOBALS["lang"]['If no value is present, supply this value. EG: for system.nmis_group / configuraion.group we use'] = 'Mura bhfuil aon luach i láthair, tabhair an luach seo. EG: le haghaidh system.nmis_group / configuraion. grúpa a úsáideann muid';

$GLOBALS["lang"]['If set, holds a JSON array of specific device columns this user has chosen to see, other than the configuration default.'] = 'Má leagtar, Tá sraith JSON de colúin gléas ar leith tá an t-úsáideoir roghnaithe a fheiceáil, seachas an réamhshocraithe chumraíocht.';

$GLOBALS["lang"]['If the OS Family (as reported by the device) contains this item, pass.</li>'] = 'Má tá an mhír seo sa Teaghlach OS (arna thuairisciú ag an bhfeiste).';

$GLOBALS["lang"]['If the Open-AudIT Server has Collectors reporting to it, an additional drop down is provided. You can select this to specify which Collector the task should run on. Only Discovery tasks are supported for Collectors.'] = 'Má tá an Freastalaí Open-AudIT Bailitheoirí tuairisciú dó, tá titim breise ar fáil. Is féidir leat é seo a roghnú a shonrú ar chóir do Bhailitheoir an tasc a reáchtáil ar. Níl ach tascanna Discovery tacaíocht do Bailitheoirí.';

$GLOBALS["lang"]['If the agent OS family (case insensitive) contains this string, perform the actions.'] = 'Má tá an gníomhaire OS teaghlaigh (cás neamhíogair) an teaghrán, a dhéanamh ar na gníomhartha.';

$GLOBALS["lang"]['If the binary is not found in either of these locations, a warning message will be displayed in the installer.'] = 'Mura bhfuil an dénártha le fáil i gceachtar de na suímh seo, beidh teachtaireacht rabhaidh a chur ar taispeáint sa suiteálaí.';

$GLOBALS["lang"]['If the following conditions are met:<br><ul><li>a Role has an assigned ad_group</li><li>an Org has an assigned ad_group</li><li>an LDAP Server has use_roles set to y</li><li>a user exists in LDAP (be it Active Directory or OpenLDAP) and is in the assigned ad_groups</li></ul>That user can log on to Open-AudIT without an account in Open-AudIT needing to be created. Open-AudIT will query the LDAP in question and if the user is in the required groups but not in Open-AudIT, their user attributes (name, full name, email,  roles, orgs, etc) within Open-AudIT will be automatically populated and they will be logged on.<br> <br>'] = 'Má chomhlíontar na coinníollacha seo a leanas:<br/><ul><li>Ról Tá ad_group sannta</li><li>Tá ad_group sannta ag Org</li><li>LDAP Freastalaí Tá use_roles leagtha chun y</li><li>Tá úsáideoir i LDAP (beidh sé Eolaire Gníomhach nó OpenLDAP) agus tá sé sa ad_groups sannta</li></ul>Is féidir leis an úsáideoir logáil isteach ar a Open-AudIT gan cuntas i Open-AudIT gá a chruthú. Beidh Open-AudIT cheist an LDAP atá i gceist agus má tá an t-úsáideoir sna grúpaí is gá ach ní i Open-AudIT, a n-tréithe úsáideora (ainm, ainm iomlán, r-phost, róil, orgs, etc) laistigh Open-AudIT a daonra go huathoibríoch agus beidh siad logáilte ar.<br/> <br/>';

$GLOBALS["lang"]['If the local field is true (bool) or y (string) or Y (string) or 1 (integer) then set the external data to 1.'] = 'Má tá an réimse áitiúil fíor (bool) nó y (teaghrán) nó Y (teaghrán) nó 1 (lánuimhir) a leagtar ansin na sonraí seachtracha go 1.';

$GLOBALS["lang"]['If the local field is true (bool) or y (string) or Y (string) or 1 (integer) then set the external data to y.'] = 'Má tá an réimse áitiúil fíor (bool) nó y (teaghrán) nó Y (teaghrán) nó 1 (lánuimhir) a leagtar ansin na sonraí seachtracha a y.';

$GLOBALS["lang"]['If the primary IP (as reported by the device) is in this subnet, pass.</li>'] = 'Má tá an IP bunscoile (mar a thuairiscigh an gléas) sa subnet, pas a fháil.';

$GLOBALS["lang"]['If the user account does not actually exist within Open-AudIT and <code>use_authorisation</code> is set, the user will be created. If it does exist, details such as email, full name, etc will be populated.'] = 'Mura bhfuil an cuntas úsáideora ann i ndáiríre laistigh Open-AudIT agus <code>use_authorisation</code> Tá leagtha síos, beidh an t-úsáideoir a chruthú. Má tá sé ann, beidh sonraí ar nós ríomhphost, ainm iomlán, srl a daonra.';

$GLOBALS["lang"]['If the user either does not have valid credentials or is not in at least one Open-AudIT Role and Group (when using <code>use_authorisation</code>), Open-AudIT will fallback to using local Open-AudIT user details and attempt authentication and authorization there. Failing that, the user will be denied access.'] = 'Más rud é nach bhfuil dintiúir bailí ag an úsáideoir nó nach bhfuil sé i Ról agus Grúpa Oscailte amháin ar a laghad (nuair a bhíonn sé ag úsáid <code>use_authorisation</code>), Beidh Open-AudIT fallback a úsáid áitiúil Oscailte-AudIT sonraí úsáideora agus barántúlacht iarracht agus údarú ann. Mar sin féin, beidh an t-úsáideoir a dhiúltú rochtain.';

$GLOBALS["lang"]['If the user logging on to Open-AudIT does not have the access to search LDAP, you can use another account which does have this access.'] = 'Más rud é nach bhfuil rochtain ag an úsáideoir logáil isteach ar Open-AudIT ar LDAP cuardaigh, is féidir leat cuntas eile a úsáid a bhfuil an rochtain seo aige.';

$GLOBALS["lang"]['If the user logging on to Open-AudIT does not have the access to search OpenLDAP, you can use another account which does have this access. Use the dn_account and dn_password to configure this.'] = 'Más rud é nach bhfuil rochtain ag an úsáideoir ar Open-AudIT ar OpenLDAP a chuardach, is féidir leat cuntas eile a úsáid a bhfuil an rochtain seo aige. Bain úsáid as an dn_chuntas agus dn_password a chumrú seo.';

$GLOBALS["lang"]['If the value is not set, the current timestamp will be used.'] = 'Mura bhfuil an luach socraithe, úsáidfear an t-amstamp reatha.';

$GLOBALS["lang"]['If the value is set, that timestamp value will be used.'] = 'Má tá an luach socraithe, úsáidfear an luach ama sin.';

$GLOBALS["lang"]['If this change does not work for you, all is not lost. We have added a configuration item (set to n by default, so it will use not this new option out of the box) called discovery_use_org_id_match. If you change it to y then the OrgID assigned to the device by the discovery will be used in the relevant match rules.'] = 'Mura n-oibríonn an t-athrú seo duit, níl gach caillte. Táimid tar éis a leanas mír chumraíocht (a leagtar go n de réir réamhshocraithe, mar sin beidh sé úsáid nach bhfuil an rogha nua amach as an mbosca) ar a dtugtar fionnachtain_use_org_id_match. Má athraíonn tú é a y ansin úsáidfear an OrgID a shanntar don fheiste leis an bhfionnachtain sna rialacha comhoiriúnacha ábhartha.';

$GLOBALS["lang"]['If this many minutes (or more) have passed since the server last saw the device, pass.</li>'] = 'Má tá an nóiméad go leor (nó níos mó) a rith ó chonaic an freastalaí seo caite an gléas, pas a fháil.';

$GLOBALS["lang"]['If this many or more minutes have passed since the device contacted the server, perform the actions.'] = 'Má tá an nóiméad go leor nó níos mó a rith ó chuaigh an gléas i dteagmháil leis an bhfreastalaí, a dhéanamh ar na gníomhartha.';

$GLOBALS["lang"]['If this occurs then the issue you are seeing is related to the table control being used on the webpage. It only stores in memory the state of the check boxes for the current page being viewed. If you make selections, then page forward/back those selections will be lost. You can, however, accomplish what you want by expanding the number of devices shown on each page. In the top-left corner is a drop-down labeled “records per page”; use this to expand the number of entries displayed until you see all you want to select for Bulk Edit.'] = 'Má tharlaíonn sé seo ansin tá an cheist a bhfuil tú ag féachaint a bhaineann leis an rialú tábla á úsáid ar an leathanach gréasáin. siopaí sé ach amháin i gcuimhne ar staid na boscaí seiceáil don leathanach reatha á fheiceáil. Má dhéanann tú roghnúcháin, ansin leathanach ar aghaidh / ar ais beidh na roghanna a bheith caillte. Is féidir leat, áfach, a chur i gcrích cad ba mhaith leat ag leathnú ar líon na feistí a thaispeántar ar gach leathanach. Sa chúinne barr-chlé lipéadaithe anuas “taifeadtaí in aghaidh an leathanaigh”; úsáid seo a leathnú ar líon na n-iontrálacha taispeáint go dtí go bhfeiceann tú go léir is mian leat a roghnú le haghaidh Bulk Edit.';

$GLOBALS["lang"]['If we detect the san management software, should we run an auto-discover before the query.'] = 'Má bhraitheann muid na bogearraí bainistíochta san, ba chóir dúinn a reáchtáil uathoibríoch-aisghabháil roimh an cheist.';

$GLOBALS["lang"]['If you add a Location Type, add those icons to'] = 'Má chuireann tú Cineál Suíomh, cuir na deilbhíní sin leis';

$GLOBALS["lang"]['If you add a device type, to display the associated icon you will have to manually copy the .svg formatted file to the directory'] = 'Má chuireann tú cineál gléas, a thaispeáint ar an deilbhín a bhaineann beidh ort a chóipeáil de láimh an .svg comhad formáidithe chuig an eolaire';

$GLOBALS["lang"]['If you are a supported FirstWave customer,a couple of items will make helping your easier. Open a support ticket with FirstWave and attach the logfile. Also include the output from the Support button on the upper right of the'] = 'Má tá tú ag tacú le custaiméirí FirstWave, beidh cúpla míreanna a dhéanamh cabhrú le do níos éasca. Oscail ticéad tacaíochta le FirstWave agus a cheangal ar an logfile. Chomh maith leis sin san áireamh an t-aschur ón gcnaipe Tacaíochta ar dheis uachtarach an';

$GLOBALS["lang"]['If you are a supported customer and open a support ticket with FirstWave, please attach these files.'] = 'Má tá tú ag custaiméir tacaíocht agus a oscailt ticéad tacaíochta le FirstWave, le do thoil ag gabháil leis na comhaid.';

$GLOBALS["lang"]['If you are having issues with Google Maps API keys or your company does not have access to create Google Maps API keys, please contact the FirstWave support team.'] = 'Má tá saincheisteanna agat le heochracha API Google Maps nó nach bhfuil rochtain ag do chuideachta chun eochracha Google Maps API a chruthú, téigh i dteagmháil leis an bhfoireann tacaíochta FirstWave.';

$GLOBALS["lang"]['If you are on Windows or your NMIS server is remote, you will need to supply the URL, username and password to access that server.'] = 'Má tá tú ar Windows nó do fhreastalaí NMIS iargúlta, beidh ort a sholáthar ar an URL, ainm úsáideora agus focal faire chun rochtain a fháil ar an bhfreastalaí.';

$GLOBALS["lang"]['If you are on a decent broadband or ethernet connection, I would recommend always using -T4 (Aggressive). Some people love -T5 (Insane) though it is too aggressive for my taste. People sometimes specify -T2 (Polite) because they think it is less likely to crash hosts or because they consider themselves to be polite in general. They often do not realize just how slow -T2 really is. Their scan may take ten times longer than a default scan. Machine crashes and bandwidth problems are rare with the default timing options -T3 (Normal) and so I normally recommend that for cautious scanners. Omitting version detection is far more effective than playing with timing values at reducing these problems.'] = 'Má tá tú ar leathanbhanda réasúnta nó nasc ethernet, ba mhaith liom a mholadh i gcónaí ag baint úsáide as -T4 (Aggressive). Is breá le roinnt daoine -T5 (Insane) cé go bhfuil sé ró-ionsaitheach le haghaidh mo blas. Daoine a shonrú uaireanta -T2 (Polite) mar a cheapann siad go bhfuil sé níos lú seans a tuairteanna hóstach nó mar a mheasann siad iad féin a bheith dea-bhéasach i gcoitinne. Is minic nach dtuigeann siad cé chomh mall -T2 i ndáiríre. Is féidir a scanadh a ghlacadh deich n-uaire níos faide ná scanadh réamhshocraithe. Tá tuairteanna meaisín agus fadhbanna bandaleithead annamh leis na roghanna uainiú réamhshocraithe -T3 (Normal) agus mar sin a mholadh de ghnáth go do scanóirí aireach. Tá a bhrath leagan a fhágáil i bhfad níos éifeachtaí ná ag imirt le luachanna uainiú ag laghdú na fadhbanna.';

$GLOBALS["lang"]['If you are running a RedHat or Centos system and you have upgraded Nmap, please reset the SUID on the binary by'] = 'Má tá tú ag rith córas RedHat nó Centos agus tá tú ag uasghrádú Nmap, le do thoil athshocrú an SUID ar an dénártha ag';

$GLOBALS["lang"]['If you are running an Open-AudIT server on Linux, this does not affect you.'] = 'Má tá freastalaí Open-AudIT á reáchtáil agat ar Linux, ní dhéanann sé seo difear duit.';

$GLOBALS["lang"]['If you are using Open-AudIT on Windows or if your NMIS server is not on your Open-AudIT Server (in the case of some Linux installs), you will need to supply access credentials and a URL to the remote NMIS - but that is all! Yes - Integrations between NMIS and Open-AudIT even work with Windows based Open-AudIT now!'] = 'Má tá tú ag baint úsáide as Open-AudIT ar Windows nó mura bhfuil do fhreastalaí NMIS ar do Freastalaí Oscailte-AudIT (i gcás roinnt installs Linux), beidh ort dintiúir rochtana agus URL a sholáthar don NMIS iargúlta - ach go bhfuil gach! Sea - Comhtháthú idir NMIS agus Open-AudIT fiú ag obair le Windows bunaithe Open-AudIT anois!';

$GLOBALS["lang"]['If you choose a Collector, it will be scheduled to execute on the next 5 minute boundary.'] = 'Má roghnaíonn tú Bailitheoir, beidh sé sceidealta a fhorghníomhú ar an teorainn 5 nóiméad eile.';

$GLOBALS["lang"]['If you do normally set devices_assigned_to_org and the configuration item is enabled, then the OrgID will be used to further refine the match.'] = 'Má dhéanann tú a leagtar de ghnáth feistí_assigned_to_org agus tá an mhír chumraíocht ar chumas, ansin beidh an OrgID a úsáid chun tuilleadh a bheachtú ar an gcluiche.';

$GLOBALS["lang"]['If you do not normally set devices_assigned_to_org, then it will have no effect. We only check using the OrgID if it has been set in discovery (or manually in an audit script) and enabled in the configuration.'] = 'Más rud é nach bhfuil tú a leagtar de ghnáth feistí_assigned_to_org, ansin beidh sé aon éifeacht. Táimid seiceáil ach ag baint úsáide as an OrgID má tá sé leagtha i bhfionnachtain (nó de láimh i script iniúchóireachta) agus ar chumas sa chumraíocht.';

$GLOBALS["lang"]['If you enable the configuration item, use discovery to assign an Org and then subsequently change the OrgID of a device after discovery then you will likely have a new device created the next time the discovery runs. In this instance, you should probably just unset devices_assigned_to_org before running subsequent discoveries. This is because (in this instance) you have told Open-AudIT <i>these devices from this discovery belong to Org X<i>, but then changed the Org of the device. You have changed the stored devices information. In this case - there is no no longer a device belonging to Org X, so we create a new one.'] = 'Má chuireann tú ar chumas an mhír chumraíocht, bain úsáid as fionnachtain a shannadh Org agus ansin a athrú ina dhiaidh sin ar an OrgID gléas tar éis fionnachtain ansin beidh ort dócha gléas nua a cruthaíodh an chéad uair eile ritheann an fionnachtain. Sa chás seo, ba chóir duit dócha feistí unset_assigned_to_org roimh rith fionnachtana ina dhiaidh sin. Tá sé seo mar gheall ar (sa chás seo) a dúirt tú Oscailte-AudIT <i>Baineann na feistí seo ón bhfionnachtain seo le Org X<i>, ach ansin d\'athraigh an Org na feiste. Tá tú athrú ar an eolas feistí a stóráil. Sa chás seo - níl feiste a bhaineann le Org X a thuilleadh, mar sin cruthaímid ceann nua.</i></i>';

$GLOBALS["lang"]['If you have Anti-Virus software running, allowing the services of Opmantek (omkd), Apache (apache2.2) and MySQL (mysql) to auto start and run is essential. These services are used by Open-AudIT. You should only need to do this once. If your Anti-Virus program keeps prompting you about Open-AudIT, please post to the forums or send an email to support with the name and version of your Anti-Virus software.'] = 'Má tá tú Frith-Virus bogearraí ag rith, ag ligean na seirbhísí de Opmantek (omkd), Apache (apache2.2) agus MySQL (mysql) chun tús uathoibríoch agus reáchtáil riachtanach. Úsáideann Open-AudIT na seirbhísí seo. Ba chóir duit ach é seo a dhéanamh uair amháin. Má choinníonn do chlár Frith-Víreas leideanna tú faoi Open-AudIT, le do thoil post chuig na fóraim nó ríomhphost a sheoladh chun tacú leis an ainm agus leagan de do bogearraí Anti-Virus.';

$GLOBALS["lang"]['If you have working credentials, you can expect the full amount of information possible.<br><br>Obviously, the best way to use Open-AudIT is to have working credentials for the devices being discovered (be they WMI, SSH, or SNMP credentials).<br><br>We also have a page on auditing without credentials.'] = 'Má tá dintiúir oibre agat, is féidir leat a bheith ag súil leis an méid iomlán faisnéise is féidir.<br/><br/>Ar ndóigh, is é an bealach is fearr chun úsáid a bhaint Open-AudIT a bheith dintiúir oibre do na feistí atá á fháil amach (bhí siad WMI, SSH, nó dintiúir SNMP).<br/><br/>Tá leathanach againn freisin ar iniúchadh gan dintiúir.';

$GLOBALS["lang"]['If you include the \"id\" field <strong>and</strong> set it with a number, that item will be updated rather than created.'] = 'Má tá réimse \ "id\" san áireamh <strong>agus</strong> a leagtar é le roinnt, Beidh an mhír sin a thabhairt cothrom le dáta seachas a cruthaíodh.';

$GLOBALS["lang"]['If you need to configure Active Directory access, you can usually use the example of <code>cn=Users,dc=your,dc=domain,dc=com</code> for your <code>base_dn</code>. There is no need to set <code>user_dn</code>.'] = 'Más gá duit rochtain Eolaire Gníomhach a chumrú, is féidir leat an sampla a úsáid de ghnáth <code>cn=Users,dc=your,dc=domain,dc=com</code> le haghaidh do <code>base_dn</code>. Níl aon ghá a shocrú <code>user_dn</code>.';

$GLOBALS["lang"]['If you need to configure OpenLDAP access for your users and a given users access DN is normally <code>uid=username@domain,cn=People,dc=your,dc=domain,dc=com</code> then you should set <code>base_dn</code> to <code>dc=your,dc=domain,dc=com</code> and <code>user_dn</code> to <code>uid=@username@@domain,cn=People</code>. The special words <code>@username</code> and <code>@domain</code> will be replaced by the login details provided by your user on the login page.'] = 'Más gá duit a chumrú rochtain OpenLDAP do do úsáideoirí agus úsáideoirí ar leith rochtain DN de ghnáth <code>uid=username@domain,cn=People,dc=your,dc=domain,dc=com</code> ansin ba chóir duit a leagtar <code>base_dn</code> go dtí <code>dc=your,dc=domain,dc=com</code> agus <code>user_dn</code> go dtí <code>uid=@username@@domain,cn=People</code>. Na focail speisialta <code>@username</code> agus <code>@domain</code> a chur in ionad na sonraí logála isteach ar fáil ag do úsáideoir ar an leathanach logáil isteach.';

$GLOBALS["lang"]['If you run discovery upon a subnet that the Server (or Collector) is directly installed on, you can expect the following for responding devices'] = 'Má ritheann tú fionnachtain ar subnet go bhfuil an Freastalaí (nó Bailitheoir) suiteáilte go díreach ar, is féidir leat a bheith ag súil leis an méid seo a leanas le haghaidh feistí freagra';

$GLOBALS["lang"]['If you run discovery upon a subnet that your Server (or Collector) is not directly installed on, you can expect the following for responding devices'] = 'Má ritheann tú fionnachtain ar subnet nach bhfuil do Freastalaí (nó Bailitheoir) suiteáilte go díreach ar, is féidir leat a bheith ag súil leis an méid seo a leanas le haghaidh feistí freagra';

$GLOBALS["lang"]['If you select a List type, an additional field will appear called Values. You should put a comma separated list of selectable values here. These will display in a dropdown box whenever the field is edited.'] = 'Má roghnaíonn tú cineál Liosta, beidh réimse breise le feiceáil ar a dtugtar Luachanna. Ba chóir duit liosta scartha de luachanna inroghnaithe a chur anseo. Beidh siad seo a thaispeáint i mbosca anuas aon uair a bhfuil an réimse in eagar.';

$GLOBALS["lang"]['If you set the values for'] = 'Má shocraíonn tú na luachanna le haghaidh';

$GLOBALS["lang"]['If you want to force your Agents to use a particular configuration, you can supply the ID of the agents entry to use, as below (replace $id with the number of the Agents entry). When this Agent is installed, it will check-in with the sevrer and <strong>only</strong> check that one individual Agent entrys attributes (tests and actions). This may be useful if you are an MSP - create an Agents entry for a particular customer and have their devices all use this entry, which assigns them to an Org and Location.'] = 'Más mian leat a bhfeidhm do Gníomhairí a úsáid chumraíocht ar leith, is féidir leat a sholáthar ar an ID na gníomhairí iontráil a úsáid, mar atá thíos (áit $ leis an líon na Gníomhairí teacht). Nuair a bheidh an Gníomhaire suiteáilte, beidh sé seiceáil-i leis an sevrer agus <strong>ach amháin</strong> seiceáil go duine aonair amháin tréithe iontrála gníomhairí (tástálacha agus gníomhaíochtaí). D\'fhéadfadh sé seo a bheith úsáideach más MSP thú - iontráil Gníomhairí a chruthú do chustaiméir ar leith agus úsáid a bhaint as a gcuid feistí go léir an iontráil seo, rud a shann iad chuig Org agus Suíomh.';

$GLOBALS["lang"]['If you wish to dig in and customize the Integration, click the Advanced button (and try not to be overwhelmed!).'] = 'Más mian leat an Comhtháthú a thochailt agus a shaincheapadh, cliceáil ar an gcnaipe Ard (agus déan iarracht gan a bheith faoi léigear).';

$GLOBALS["lang"]['If you wish to run a Discovery on an externally provided device, select the option and when the Integration is created, so s the Discovery.'] = 'Más mian leat Discovery a reáchtáil ar ghléas a sholáthraítear go seachtrach, roghnaigh an rogha agus nuair a chruthaítear an Comhtháthú, mar sin s an Discovery.';

$GLOBALS["lang"]['If you would like to use the script outside of Discovery we have created another endpoint called <i>scripts</i>. See the documentation'] = 'Más mian leat úsáid a bhaint as an script taobh amuigh de Discovery ní mór dúinn a cruthaíodh endpoint eile ar a dtugtar <i>scripteanna</i>. Féach ar an doiciméadacht';

$GLOBALS["lang"]['If your user does not have <i>Run as Administrator</i> rights, they can still download the agent (first command above) and run it to submit an audit as below. It will be a one-off audit without the Agent being installed or scheduled.'] = 'Mura bhfuil d\'úsáideoir <i>Rith mar Riarthóir</i> cearta, is féidir leo a íoslódáil go fóill ar an gníomhaire (an chéad ordú thuas) agus é a reáchtáil chun iniúchadh a chur isteach mar atá thíos. Beidh sé ina iniúchadh aonuaire gan an Gníomhaire a bheith suiteáilte nó sceidealta.';

$GLOBALS["lang"]['ifadminstatus'] = 'An Roinn Sláinte';

$GLOBALS["lang"]['Ifadminstatus'] = 'An Roinn Sláinte';

$GLOBALS["lang"]['iflastchange'] = 'Díroghnaigh gach rud';

$GLOBALS["lang"]['Iflastchange'] = 'Díroghnaigh gach rud';

$GLOBALS["lang"]['Ignore Invalid SSL'] = 'An bhfuil a fhios agat na buntáistí a bhaineann...';

$GLOBALS["lang"]['Ignored'] = 'riachtanais uisce: measartha';

$GLOBALS["lang"]['image'] = 'Amharc ar gach eolas';

$GLOBALS["lang"]['Image'] = 'Amharc ar gach eolas';

$GLOBALS["lang"]['Images'] = 'Amharc ar gach eolas';

$GLOBALS["lang"]['impact_availability'] = 'Fáil ar an tionchar';

$GLOBALS["lang"]['Impact Availability'] = 'Fáil ar an tionchar';

$GLOBALS["lang"]['impact_confidentiality'] = 'Rúndacht Tionchair';

$GLOBALS["lang"]['Impact Confidentiality'] = 'Rúndacht Tionchair';

$GLOBALS["lang"]['impact_integrity'] = 'Comhtháthú tionchair';

$GLOBALS["lang"]['Impact Integrity'] = 'Comhtháthú tionchair';

$GLOBALS["lang"]['Implement selected controls and procedures'] = 'Rialuithe agus nósanna imeachta roghnaithe a chur chun feidhme';

$GLOBALS["lang"]['Implementation'] = 'Curaclam agus Measúnú';

$GLOBALS["lang"]['implementation_notes'] = 'Plean Gníomhaíochta don Oideachas';

$GLOBALS["lang"]['Implementation Notes'] = 'Plean Gníomhaíochta don Oideachas';

$GLOBALS["lang"]['Import'] = 'Allmhairiú Allamuigh';

$GLOBALS["lang"]['Import Example Data'] = 'Iompórtáil Sampla Sonraí';

$GLOBALS["lang"]['Import multiple {collection} using a CSV.'] = 'Iompórtáil il {bailíocht} ag baint úsáide as CSV.';

$GLOBALS["lang"]['improvement_opportunities'] = 'Amharc ar gach eolas';

$GLOBALS["lang"]['Improvement Opportunities'] = 'Amharc ar gach eolas';

$GLOBALS["lang"]['Improves business continuity and resilience'] = 'Feabhsaíonn leanúnachas gnó agus athléimneacht';

$GLOBALS["lang"]['In'] = 'I';

$GLOBALS["lang"]['In a second tab or window go to your OKTA console and click <i>Create App Integration</i>.'] = 'Sa dara cluaisín nó fuinneog téigh go dtí do console OKTA agus cliceáil <i>Cruthaigh Comhtháthú App</i>.';

$GLOBALS["lang"]['In a second tab or window sign-on to your'] = 'Sa dara cluaisín nó fuinneog comhartha-ar do';

$GLOBALS["lang"]['In my personal opinion, the best way to find and audit every single item on your network is a Seed Discovery for each subnet, restricted to that subnet (using credentials). Seed Discoveries use switch, router and computer MAC Address tables to not miss a single device. If it is connected to the network and uses TCP/IP, a switch/router/computer has to know it is there - thats just how TCP/IP works. Combine that with custom TCP and/or UDP ports and you should then be able to determine the device type as well. But thats just my personal preference'] = 'I mo thuairim phearsanta, Is é an bealach is fearr a aimsiú agus a iniúchadh gach mír amháin ar do líonra Discovery Seed do gach subnet, srianta leis an subnet (ag baint úsáide as dintiúir). Seed Discoveries úsáid lasc, ródaire agus ríomhaire MAC Seoladh táblaí a chailleann gléas amháin. Má tá sé ceangailte leis an líonra agus a úsáideann TCP / IP, tá athrú / ríomhaire a fhios go bhfuil sé ann - thats ach conas a oibríonn TCP / IP. Chomhcheangail go bhfuil le TCP saincheaptha agus / nó calafoirt UDP agus ba chóir duit a bheith ansin in ann a chinneadh an cineál gléas chomh maith. Ach thats ach mo rogha pearsanta';

$GLOBALS["lang"]['In order for Open-AudIT to be able to apply user permissions on items, we mandate the user of <code>WHERE @filter</code>. If you do not use this format, the queryCreateForm will throw a warning. Only users with the Admin role are permitted to create queries that lack this attribute and even then, only after the configuration item for <i>advanced_queries</i> has been enabled.'] = 'D\'fhonn Open-AudIT a bheith in ann ceadanna úsáideoirí a chur i bhfeidhm ar mhíreanna, sainordú againn an t-úsáideoir <code>WHERE @filter</code>. Mura n-úsáideann tú an fhormáid seo, caithfidh an cheistCreateForm rabhadh. Ní cheadaítear ach d\'úsáideoirí a bhfuil ról an Aimiréil acu fiosruithe a chruthú nach bhfuil an tréith seo ann agus fiú ansin, ach amháin tar éis an mhír chumraíochta don <i>Déan Teagmháil Linn</i> curtha ar chumas.';

$GLOBALS["lang"]['In order to enable Google Maps you will need to a Google API Key follow this link and log in with your Google account,'] = 'D\'fhonn a chumasú Google Maps beidh ort a Google API Key leanúint an nasc agus logáil isteach le do Cuntas Google,';

$GLOBALS["lang"]['In order to use the Azure Rest API, you will need to create an Azure Active Directory Application that is used for authentication.'] = 'Chun úsáid a bhaint as an Azure Rest API, beidh ort a chruthú Iarratas Eolaire Gníomhach Azure a úsáidtear le haghaidh fíordheimhnithe.';

$GLOBALS["lang"]['In order to use this functionality, it must be enabled in the configuration - click'] = 'D\'fhonn an fheidhmiúlacht seo a úsáid, ní mór é a chumasú sa chumraíocht - cliceáil';

$GLOBALS["lang"]['In the (comma seperated) list'] = 'Sa liosta (comma seperated)';

$GLOBALS["lang"]['In the case of <code>in</code> and <code>notin</code>, you should enclose the values in round brackets and separate them using a comma (just a comma, not a comma, then space).<br><br>With these operators you can filter quite comprehensively.<br><br>When you add data and filter on multiple columns, those columns are combined using <strong>AND</strong>. You cannot filter using an <strong>OR</strong> condition. With the inclusion of <code>notin</code>, you should be able to get most searches working. And for those that do really require unsupported and complex selections, you can always write an actual query.'] = 'I gcás <code>in</code> agus <code>notin</code>, ba chóir duit na luachanna i lúibíní babhta a chur faoi iamh agus iad a dheighilt ag baint úsáide as camóg (ach camóg, ní camóg, ansin spás).<br/><br/>Leis na hoibreoirí seo is féidir leat scagadh go cuimsitheach.<br/><br/>Nuair a chuireann tú sonraí agus scagaire ar cholúin iolracha, tá na colúin le chéile ag baint úsáide as <strong>agus</strong>. Ní féidir leat scagaire ag baint úsáide as <strong>OR:</strong> coinníoll. Leis an áireamh <code>notin</code>, ba chóir duit a bheith in ann a fháil cuardaigh is mó ag obair. Agus dóibh siúd a dhéanann a cheangal i ndáiríre roghnúcháin gan tacaíocht agus casta, is féidir leat scríobh i gcónaí ceist iarbhír.';

$GLOBALS["lang"]['In the case where we store several fields (usually in JSON format) inside a BIGTEXT MySQL field (eg: credentials.credentials - the credentials column in the credentials table), you should use the format'] = 'Sa chás ina stóráil againn réimsí éagsúla (de ghnáth i bhformáid JSON) taobh istigh de réimse BIGTEXT MySQL (m.sh.: dintiúir. dintiúir - an colún dintiúir sa tábla dintiúir), ba chóir duit an fhormáid a úsáid';

$GLOBALS["lang"]['In the command prompt shell, navigate to the download directory (likely <code>cd Downloads</code>).'] = 'Sa bhlaosc ordú pras, nascleanúint a dhéanamh chuig an eolaire íoslódáil (beag <code>cd Downloads</code>).';

$GLOBALS["lang"]['Inactive'] = 'Go gníomhach';

$GLOBALS["lang"]['Incomplete'] = 'Incomplete';

$GLOBALS["lang"]['Index'] = 'Innéacs';

$GLOBALS["lang"]['India'] = 'An India';

$GLOBALS["lang"]['Indonesia'] = 'cineál gas: in airde';

$GLOBALS["lang"]['Indonesian'] = 'Indinéisis';

$GLOBALS["lang"]['Info'] = 'Eolas faoin Aontas';

$GLOBALS["lang"]['Information only.'] = 'Eolas amháin.';

$GLOBALS["lang"]['Informational'] = 'Eolas ar fáil';

$GLOBALS["lang"]['initial_size'] = 'Méid tosaigh';

$GLOBALS["lang"]['Initial Size'] = 'Méid tosaigh';

$GLOBALS["lang"]['Initial login credentials are'] = 'Tá dintiúir logáil isteach tosaigh';

$GLOBALS["lang"]['Initiation'] = 'Tús a chur le';

$GLOBALS["lang"]['inode'] = 'Uisce agus Séarachas';

$GLOBALS["lang"]['Inode'] = 'Uisce agus Séarachas';

$GLOBALS["lang"]['Input'] = 'Ionchur';

$GLOBALS["lang"]['Input Type'] = 'Cineál ionchuir';

$GLOBALS["lang"]['inputs'] = 'Ionchuir';

$GLOBALS["lang"]['Inputs'] = 'Ionchuir';

$GLOBALS["lang"]['Insane'] = 'Uisce agus Séarachas';

$GLOBALS["lang"]['Insert a new {collection} entry.'] = 'Cuir iontráil nua {bailíocht} isteach.';

$GLOBALS["lang"]['Insert example data and discover all that Open-AudIT can tell you.'] = 'Cuir isteach sonraí sampla agus a fháil amach go léir gur féidir Open-AudIT insint duit.';

$GLOBALS["lang"]['Insert your Purchased license Key'] = 'Cuir isteach do Ceadúnas ceannaithe Príomhscéalta an Iarthair';

$GLOBALS["lang"]['install'] = 'Suiteáil';

$GLOBALS["lang"]['Install'] = 'Suiteáil';

$GLOBALS["lang"]['install_date'] = 'Suiteáil Dáta';

$GLOBALS["lang"]['Install Date'] = 'Suiteáil Dáta';

$GLOBALS["lang"]['install_directory'] = 'Suiteáil Eolaire';

$GLOBALS["lang"]['Install Directory'] = 'Suiteáil Eolaire';

$GLOBALS["lang"]['Install OpenScap if required'] = 'Suiteáil OpenScap más gá';

$GLOBALS["lang"]['install_source'] = 'Suiteáil Foinse';

$GLOBALS["lang"]['Install Source'] = 'Suiteáil Foinse';

$GLOBALS["lang"]['Install Support'] = 'Suiteáil Tacaíocht';

$GLOBALS["lang"]['installed_by'] = 'Suiteáilte ag';

$GLOBALS["lang"]['Installed By'] = 'Suiteáilte ag';

$GLOBALS["lang"]['installed_on'] = 'Suiteáilte Ar';

$GLOBALS["lang"]['Installed On'] = 'Suiteáilte Ar';

$GLOBALS["lang"]['Installing'] = 'Shuiteáil';

$GLOBALS["lang"]['Installing on Linux'] = 'Suiteáil ar Linux';

$GLOBALS["lang"]['Installing on MacOS'] = 'Suiteáil ar MacOS';

$GLOBALS["lang"]['Installing on Windows'] = 'Suiteáil ar Windows';

$GLOBALS["lang"]['instance'] = 'Sonraí a bhailiú';

$GLOBALS["lang"]['Instance'] = 'Sonraí a bhailiú';

$GLOBALS["lang"]['instance_ident'] = 'Amharc ar gach eolas';

$GLOBALS["lang"]['Instance Ident'] = 'Amharc ar gach eolas';

$GLOBALS["lang"]['instance_options'] = 'Roghanna eile';

$GLOBALS["lang"]['Instance Options'] = 'Roghanna eile';

$GLOBALS["lang"]['instance_provider'] = 'Soláthar Ginearálta';

$GLOBALS["lang"]['Instance Provider'] = 'Soláthar Ginearálta';

$GLOBALS["lang"]['instance_reservation_ident'] = 'Forchoimeádas Ginearálta Aitheantas';

$GLOBALS["lang"]['Instance Reservation Ident'] = 'Forchoimeádas Ginearálta Aitheantas';

$GLOBALS["lang"]['instance_state'] = 'An Stát';

$GLOBALS["lang"]['Instance State'] = 'An Stát';

$GLOBALS["lang"]['instance_tags'] = 'Ginearálta Clibeanna';

$GLOBALS["lang"]['Instance Tags'] = 'Ginearálta Clibeanna';

$GLOBALS["lang"]['instance_type'] = 'Cineál Gluaiseacht';

$GLOBALS["lang"]['Instance Type'] = 'Cineál Gluaiseacht';

$GLOBALS["lang"]['Integer'] = 'Toir agus Crainn';

$GLOBALS["lang"]['Integration'] = 'Comhtháthú';

$GLOBALS["lang"]['integrations'] = 'Comhtháthú';

$GLOBALS["lang"]['Integrations'] = 'Comhtháthú';

$GLOBALS["lang"]['integrations_id'] = 'Comhtháthú ID';

$GLOBALS["lang"]['Integrations ID'] = 'Comhtháthú ID';

$GLOBALS["lang"]['integrations_log'] = 'Imeascadh Logáil isteach';

$GLOBALS["lang"]['Integrations Log'] = 'Imeascadh Logáil isteach';

$GLOBALS["lang"]['Integrations can be scheduled as desired. This is left to the user.'] = 'Is féidir le comhtháthú a bheith sceidealta mar atá ag teastáil. Tá sé seo fágtha don úsáideoir.';

$GLOBALS["lang"]['Integrations can be scheduled as per Discoveries, Queries, et al.'] = 'Is féidir le comhtháthú a sceidealta de réir Discoveries, Queries, et al.';

$GLOBALS["lang"]['Interactive Dashboards'] = 'Dashboards Idirghníomhach';

$GLOBALS["lang"]['Interactive dashboards provide instant visibility into the status of network inventory allowing IT teams to spot newly discovered devices and unusual device behaviour at a glance.'] = 'Soláthraíonn Painéal na nIonstraimí Idirghníomhacha infheictheacht láithreach isteach i stádas fardail líonra a ligeann d\'fhoirne TF feistí nua-aimsithe agus iompar gléas neamhghnách a chur ar an láthair ar amharc.';

$GLOBALS["lang"]['interface'] = 'Comhéadan comhéadan';

$GLOBALS["lang"]['Interface'] = 'Comhéadan comhéadan';

$GLOBALS["lang"]['interface_id'] = 'ID comhéadan';

$GLOBALS["lang"]['Interface ID'] = 'ID comhéadan';

$GLOBALS["lang"]['interface_type'] = 'Cineál comhéadan';

$GLOBALS["lang"]['Interface Type'] = 'Cineál comhéadan';

$GLOBALS["lang"]['Internal'] = 'Inrochtaineacht';

$GLOBALS["lang"]['Internal Audit'] = 'Iniúchadh Inmheánach';

$GLOBALS["lang"]['Internal Audit & Review'] = 'Iniúchadh Inmheánach agus Athbhreithniú';

$GLOBALS["lang"]['Internal Field Name'] = 'Ainm an Réimse Inmheánach';

$GLOBALS["lang"]['Internal ID'] = 'ID inmheánach';

$GLOBALS["lang"]['Internal JSON array of valid access tokens for this user.'] = 'JSON Inmheánach sraith de comharthaí rochtana bailí don úsáideoir seo.';

$GLOBALS["lang"]['Introduction'] = 'Réamhrá';

$GLOBALS["lang"]['invoice'] = 'Roghnaigh gach rud';

$GLOBALS["lang"]['Invoice'] = 'Roghnaigh gach rud';

$GLOBALS["lang"]['invoice_id'] = 'ID sonraisc';

$GLOBALS["lang"]['Invoice ID'] = 'ID sonraisc';

$GLOBALS["lang"]['invoice_item'] = 'Mír sonraisc';

$GLOBALS["lang"]['Invoice Item'] = 'Mír sonraisc';

$GLOBALS["lang"]['ios_version'] = 'Leagan Ios';

$GLOBALS["lang"]['Ios Version'] = 'Leagan Ios';

$GLOBALS["lang"]['ip_address_external_a'] = 'Seoladh Coigríche A';

$GLOBALS["lang"]['Ip Address External A'] = 'Seoladh Coigríche A';

$GLOBALS["lang"]['ip_address_external_b'] = 'Ip Seoladh seachtrach B';

$GLOBALS["lang"]['Ip Address External B'] = 'Ip Seoladh seachtrach B';

$GLOBALS["lang"]['ip_address_internal_a'] = 'Ip Seoladh Inmheánach A';

$GLOBALS["lang"]['Ip Address Internal A'] = 'Ip Seoladh Inmheánach A';

$GLOBALS["lang"]['ip_address_internal_b'] = 'Ip Seoladh Inmheánach B';

$GLOBALS["lang"]['Ip Address Internal B'] = 'Ip Seoladh Inmheánach B';

$GLOBALS["lang"]['ip_all_count'] = 'Ip Gach Contae';

$GLOBALS["lang"]['Ip All Count'] = 'Ip Gach Contae';

$GLOBALS["lang"]['ip_audited_count'] = 'Ip Iniúchóireacht Contae';

$GLOBALS["lang"]['Ip Audited Count'] = 'Ip Iniúchóireacht Contae';

$GLOBALS["lang"]['ip_discovered_count'] = 'Ip Discover Contae';

$GLOBALS["lang"]['Ip Discovered Count'] = 'Ip Discover Contae';

$GLOBALS["lang"]['ip_enabled'] = 'Ip Cumasaithe';

$GLOBALS["lang"]['Ip Enabled'] = 'Ip Cumasaithe';

$GLOBALS["lang"]['ip_responding_count'] = 'Comhaireamh Freagrach';

$GLOBALS["lang"]['Ip Responding Count'] = 'Comhaireamh Freagrach';

$GLOBALS["lang"]['ip_scanned_count'] = 'Ip Líon Scanned';

$GLOBALS["lang"]['Ip Scanned Count'] = 'Ip Líon Scanned';

$GLOBALS["lang"]['Iran'] = 'An Iaráin';

$GLOBALS["lang"]['Iraq'] = 'an Ríocht Aontaithe';

$GLOBALS["lang"]['Ireland'] = 'Ã ireannach';

$GLOBALS["lang"]['Irish'] = 'Gaeilge na hÉireann';

$GLOBALS["lang"]['Is FRU'] = 'Is maith liom é';

$GLOBALS["lang"]['is_fru'] = 'Is maith liom é';

$GLOBALS["lang"]['Is Fru'] = 'Is maith liom é';

$GLOBALS["lang"]['Is the NMIS server local (on this Open-AudIT server) or remote?'] = 'An bhfuil an freastalaí NMIS áitiúil (ar an bhfreastalaí Open-AudIT) nó iargúlta?';

$GLOBALS["lang"]['Is this account active? If set to <code>n</code>, the user cannot logon.'] = 'An bhfuil an cuntas seo gníomhach? Má leagtar <code>n</code>, ní féidir leis an úsáideoir logon.';

$GLOBALS["lang"]['Is this query restricted to licensed customers.'] = 'An bhfuil an cheist seo teoranta do chustaiméirí ceadúnaithe.';

$GLOBALS["lang"]['Is this task enabled (y/n).'] = 'An bhfuil an tasc ar chumas (y/n).';

$GLOBALS["lang"]['Isle of Man'] = 'Oileán Mhanann';

$GLOBALS["lang"]['Israel'] = 'Iosraelach';

$GLOBALS["lang"]['Issue'] = 'Amharc ar gach eolas';

$GLOBALS["lang"]['issuer'] = 'Amharc ar gach eolas';

$GLOBALS["lang"]['Issuer'] = 'Amharc ar gach eolas';

$GLOBALS["lang"]['issuer_name'] = 'Ainm an eisitheora';

$GLOBALS["lang"]['Issuer Name'] = 'Ainm an eisitheora';

$GLOBALS["lang"]['Issues'] = 'Ceisteanna Coitianta';

$GLOBALS["lang"]['It <i>Just Works</i> with NMIS'] = 'Tá sé <i>Féach ar Léarscáileanna</i> le NMIS';

$GLOBALS["lang"]['It is available at Menu -> Help ->'] = 'Tá sé ar fáil ag Roghchlár - lí Cabhair - lí';

$GLOBALS["lang"]['It is important to note that when Open-AudIT determines a match any properties set to <i>y</i> must match exactly (and not be blank) in order for Open-AudIT to determine that the discovered device matches a device already in the database. If none of the properties marked <i>y</i> match, then a new device entry will be created, which could result in duplicate device entries. In situations where properties are duplicated, for example a dbus_id is copied during a VM clone, then an existing device may incorrectly get overwritten/updated rather then a new entry being created resulting in missing devices.'] = 'Tá sé tábhachtach a thabhairt faoi deara nuair a chinneann Open-AudIT mheaitseáil aon airíonna atá leagtha síos <i>y</i> Ní mór a mheaitseáil go díreach (agus ní a bheith bán) d\'fhonn Open-AudIT chun a chinneadh go oireann an gléas amach gléas cheana féin sa bhunachar sonraí. Mura bhfuil aon cheann de na hairíonna marcáilte <i>y</i> mheaitseáil, ansin beidh iontráil gléas nua a chruthú, a d\'fhéadfadh mar thoradh ar iontrálacha feistí dúblach. I gcásanna ina bhfuil airíonna dhúbailte, mar shampla tá dbus_id chóipeáil le linn Clón VM, ansin d\'fhéadfadh gléas atá ann cheana féin a fháil go mícheart overwritten / suas in áit ansin iontráil nua a chruthú mar thoradh ar feistí in easnamh.';

$GLOBALS["lang"]['It is not uncommon to have an overlapping address space in a given Organisation. Not ideal, but not uncommon.'] = 'Níl sé neamhchoitianta spás suaitheanta a bheith ag Eagraíocht ar leith. Níl sé oiriúnach, ach ní neamhchoitianta.';

$GLOBALS["lang"]['It is very common for second tier motherboard manufacturers to not set this, to set it to all <i>0</i>s or even all <i>F</i>s.'] = 'Tá sé an-choitianta do mhonaróirí dara sraith motherboard gan é seo a shocrú, chun é a shocrú do gach <i>0 0 0</i>s nó fiú go léir <i>Fuaimniú</i>s.';

$GLOBALS["lang"]['Italian'] = 'Iodáilis porn';

$GLOBALS["lang"]['Italy'] = 'An Iodáil';

$GLOBALS["lang"]['Items not in Baseline'] = 'Míreanna nach bhfuil i Baseline';

$GLOBALS["lang"]['JSON'] = 'JSON';

$GLOBALS["lang"]['JSON to Import'] = 'JSON go Iompórtáil';

$GLOBALS["lang"]['Jamaica'] = 'taiseachas aeir: fliuch';

$GLOBALS["lang"]['January'] = 'irl - Library Service';

$GLOBALS["lang"]['Japan'] = 'An tSeapáin An tSeapáin';

$GLOBALS["lang"]['Japanese'] = 'cineál gas: in airde';

$GLOBALS["lang"]['Jersey'] = 'Seirbhís do Chustaiméirí';

$GLOBALS["lang"]['Jordan'] = 'an Ríocht Aontaithe';

$GLOBALS["lang"]['July'] = 'irl - Library Service';

$GLOBALS["lang"]['June'] = 'Meitheamh 2015';

$GLOBALS["lang"]['Kazakhstan'] = 'An Chasacstáin';

$GLOBALS["lang"]['Kenya'] = 'cliceáil grianghraf a mhéadú';

$GLOBALS["lang"]['kernel_version'] = 'Clár na dToghthóirí';

$GLOBALS["lang"]['Kernel Version'] = 'Clár na dToghthóirí';

$GLOBALS["lang"]['Key'] = 'Príomhscéalta an Iarthair';

$GLOBALS["lang"]['Key Components'] = 'Príomhchomhpháirteanna';

$GLOBALS["lang"]['Key Password (optional)'] = 'Key Password (roghnach)';

$GLOBALS["lang"]['keys'] = 'Amharc ar gach eolas';

$GLOBALS["lang"]['Keys'] = 'Amharc ar gach eolas';

$GLOBALS["lang"]['Kiribati'] = 'riachtanais uisce: measartha';

$GLOBALS["lang"]['Korea'] = 'An Chóiré Theas';

$GLOBALS["lang"]['Korean'] = 'Bláthanna Gairdín';

$GLOBALS["lang"]['Kuwait'] = 'Déan Teagmháil Linn';

$GLOBALS["lang"]['Kyrgyz'] = 'cliceáil grianghraf a mhéadú';

$GLOBALS["lang"]['Kyrgyz Republic'] = 'cineál gas: in airde';

$GLOBALS["lang"]['LDAP Group'] = 'Grúpa LDAP';

$GLOBALS["lang"]['LDAP was searched for this user and their account was found.'] = 'Rinneadh cuardach LDAP don úsáideoir seo agus fuarthas a gcuntas.';

$GLOBALS["lang"]['LDAP was searched for this user and their account was not found. Check the LDAP server logs. The user credentials have worked, but the user was not found. Also check you have specified the correct Base DN attribute when you created the LDAP Server in Open-AudIT.'] = 'Rinneadh cuardach LDAP don úsáideoir seo agus ní bhfuarthas a gcuntas. Seiceáil na logs freastalaí LDAP. D\'oibrigh na dintiúir úsáideora, ach ní bhfuarthas an t-úsáideoir. Chomh maith leis sin seiceáil go bhfuil tú a shonraítear an bonn ceart DN tréith nuair a chruthaigh tú an Freastalaí LDAP i Open-AudIT.';

$GLOBALS["lang"]['lang'] = 'Déan teagmháil linn';

$GLOBALS["lang"]['Lang'] = 'Déan teagmháil linn';

$GLOBALS["lang"]['language'] = 'Teanga na Gaeilge';

$GLOBALS["lang"]['Language'] = 'Teanga na Gaeilge';

$GLOBALS["lang"]['Lao'] = 'Lámhaigh';

$GLOBALS["lang"]['last_changed'] = 'Athraigh Last';

$GLOBALS["lang"]['Last Changed'] = 'Athraigh Last';

$GLOBALS["lang"]['last_finished'] = 'Last Críochnaithe';

$GLOBALS["lang"]['Last Finished'] = 'Last Críochnaithe';

$GLOBALS["lang"]['last_logon'] = 'Lógó Last';

$GLOBALS["lang"]['Last Logon'] = 'Lógó Last';

$GLOBALS["lang"]['Last Name'] = 'An t-ainm deiridh';

$GLOBALS["lang"]['last_os_update'] = 'An Nuashonrú Deireanach';

$GLOBALS["lang"]['Last Os Update'] = 'An Nuashonrú Deireanach';

$GLOBALS["lang"]['last_result'] = 'Toradh deireanach';

$GLOBALS["lang"]['Last Result'] = 'Toradh deireanach';

$GLOBALS["lang"]['last_run'] = 'Déan Teagmháil Linn';

$GLOBALS["lang"]['Last Run'] = 'Déan Teagmháil Linn';

$GLOBALS["lang"]['last_seen'] = 'An bhfaca tú';

$GLOBALS["lang"]['Last Seen'] = 'An bhfaca tú';

$GLOBALS["lang"]['last_seen_by'] = 'An bhfaca tú De réir';

$GLOBALS["lang"]['Last Seen By'] = 'An bhfaca tú De réir';

$GLOBALS["lang"]['last_user'] = 'An t-úsáideoir deiridh';

$GLOBALS["lang"]['Last User'] = 'An t-úsáideoir deiridh';

$GLOBALS["lang"]['Last up is WMI. For Windows as in Linux, a user with Administrator level access is preferred (see Target Client Configuration on the wiki).'] = 'Ar deireadh suas WMI. I gcás Windows mar atá i Linux, tá úsáideoir le rochtain leibhéal Riarthóir fearr (féach Sprioc Cliant Cumraíocht ar an wiki).';

$GLOBALS["lang"]['lastModified'] = 'Díroghnaigh gach rud';

$GLOBALS["lang"]['LastModified'] = 'Díroghnaigh gach rud';

$GLOBALS["lang"]['latitude'] = 'Amharc ar gach eolas';

$GLOBALS["lang"]['Latitude'] = 'Amharc ar gach eolas';

$GLOBALS["lang"]['Latvia'] = 'an Ríocht Aontaithe';

$GLOBALS["lang"]['Latvian'] = 'taiseachas aeir: fliuch';

$GLOBALS["lang"]['Layout'] = 'Leagan Amach';

$GLOBALS["lang"]['ldap'] = 'taiseachas aeir: fliuch';

$GLOBALS["lang"]['Ldap'] = 'taiseachas aeir: fliuch';

$GLOBALS["lang"]['ldap_base_dn'] = 'Dlúthdhiosca Bunaithe';

$GLOBALS["lang"]['Ldap Base Dn'] = 'Dlúthdhiosca Bunaithe';

$GLOBALS["lang"]['ldap_dn_account'] = 'Cuntas Línéadaigh';

$GLOBALS["lang"]['Ldap Dn Account'] = 'Cuntas Línéadaigh';

$GLOBALS["lang"]['ldap_dn_password'] = 'Ldap Dn Pasfhocal';

$GLOBALS["lang"]['Ldap Dn Password'] = 'Ldap Dn Pasfhocal';

$GLOBALS["lang"]['Learn About'] = 'Foghlaim faoi';

$GLOBALS["lang"]['Learn More'] = 'Foghlaim níos mó';

$GLOBALS["lang"]['lease_expiry_date'] = 'Dáta éaga Léas';

$GLOBALS["lang"]['Lease Expiry Date'] = 'Dáta éaga Léas';

$GLOBALS["lang"]['Lebanon'] = 'An Liobáin';

$GLOBALS["lang"]['legal_requirements'] = 'Riachtanais Dlí';

$GLOBALS["lang"]['Legal Requirements'] = 'Riachtanais Dlí';

$GLOBALS["lang"]['Lesotho'] = 'Seirbhís do Chustaiméirí';

$GLOBALS["lang"]['Less Than'] = 'Níos lú ná';

$GLOBALS["lang"]['Less Than or Equals'] = 'Níos lú ná nó Comhionann';

$GLOBALS["lang"]['Lets set the logging to debug. Copy the file:'] = 'Ligeann leagtha an logáil chun debug. Cóipeáil an comhad:';

$GLOBALS["lang"]['level'] = 'Leibhéal Leibhéal Leibhéal Leibhéal';

$GLOBALS["lang"]['Level'] = 'Leibhéal Leibhéal Leibhéal Leibhéal';

$GLOBALS["lang"]['Level of privileges needed to exploit (None, Low, High).'] = 'Leibhéal na bpribhléidí is gá chun leas a bhaint (Níl, Íseal, Ard).';

$GLOBALS["lang"]['Liberia'] = 'riachtanais uisce: measartha';

$GLOBALS["lang"]['Libraries (ie, code that another program might include). These are typically items like Wordpress extensions, drupal extensions, node.js libraries, Android / iPhone / Windows libraries, python libraries, etc.'] = 'Leabharlanna (ie, cód go bhféadfadh clár eile san áireamh). Is iad seo de ghnáth míreanna cosúil le síntí Wordpress, síntí drupal, leabharlanna node.js, Android / iPhone / leabharlanna Windows, leabharlanna python, etc.';

$GLOBALS["lang"]['Libyan Arab Jamahiriya'] = 'cliceáil grianghraf a mhéadú';

$GLOBALS["lang"]['License'] = 'Ceadúnas Madraí ar Líne';

$GLOBALS["lang"]['License Key'] = 'Ceadúnas Eochair';

$GLOBALS["lang"]['License Required'] = 'Ceadúnas ag teastáil';

$GLOBALS["lang"]['Licensed users are free to add or modify the rules as you see fit. If you have a device with an SNMP OID that does not match a model already in the file - now you can add it easily. No more waiting for us to provide a patch and add it to the code base for you.<br><br>When you create a Rules entry, you will need to provide a name and a list of inputs and outputs. The inputs and outputs are stored as JSON arrays within the database.<br><br>Inputs have a table and attribute, an operator and a value. When executing the condition, it works thus: If $table . $attribute $operator $value then apply the outputs.<br><br>An example rule to match an SNMP OID and set the model is below.<br>'] = 'Tá úsáideoirí ceadúnaithe saor in aisce a chur nó a mhodhnú na rialacha mar a fheiceann tú oiriúnach. Má tá tú gléas le SNMP OID nach mheaitseáil samhail cheana féin sa chomhad - anois is féidir leat é a chur go héasca. Níl níos mó ag fanacht linn a chur ar fáil paiste agus é a chur leis an bonn cód ar do shon.<br/><br/>Nuair a chruthaíonn tú iontráil Rialacha, beidh ort ainm agus liosta ionchuir agus aschuir a chur ar fáil. Na hionchuir agus aschuir a stóráil mar arrays JSON laistigh den bhunachar sonraí.<br/><br/>Tá tábla agus tréith ag Ionchuir, oibreoir agus luach. Agus an coinníoll á fhorghníomhú, oibríonn sé dá bhrí sin: $ ómós $ operator $ luach i bhfeidhm ansin an aschur.<br/><br/>riail sampla a mheaitseáil OID SNMP agus leagtar an tsamhail thíos.<br/>';

$GLOBALS["lang"]['Licenses'] = 'Ceadúnas';

$GLOBALS["lang"]['Liechtenstein'] = 'Lichtinstéin';

$GLOBALS["lang"]['Like'] = 'Cosúil le';

$GLOBALS["lang"]['Like most other attributes, Additional Fields can be bulk edited. Use the Bulk Edit function as you normally would and you will see the Additional Fields are available for input.'] = 'Cosúil le tréithe eile is féidir, Réimsí breise a chur in eagar ar an mórchóir. Bain úsáid as an fheidhm Bulk Edit mar a bheadh tú de ghnáth agus feicfidh tú na Réimsí breise ar fáil le haghaidh ionchur.';

$GLOBALS["lang"]['Like versus Equals'] = 'Cosúil le Comhionannais';

$GLOBALS["lang"]['limit'] = 'Teorainn';

$GLOBALS["lang"]['Limit'] = 'Teorainn';

$GLOBALS["lang"]['Limit the query to the first X items.'] = 'Teorainn an cheist leis na chéad míreanna X.';

$GLOBALS["lang"]['Limited to 100 rows.'] = 'Teoranta le 100 sraitheanna.';

$GLOBALS["lang"]['line_amount'] = 'Méid Líne';

$GLOBALS["lang"]['Line Amount'] = 'Méid Líne';

$GLOBALS["lang"]['Line Graph'] = 'Líne Graf';

$GLOBALS["lang"]['line_number_a'] = 'Uimhir Líne A';

$GLOBALS["lang"]['Line Number A'] = 'Uimhir Líne A';

$GLOBALS["lang"]['line_number_b'] = 'Uimhir Líne B';

$GLOBALS["lang"]['Line Number B'] = 'Uimhir Líne B';

$GLOBALS["lang"]['line_text'] = 'Líne Téacs';

$GLOBALS["lang"]['Line Text'] = 'Líne Téacs';

$GLOBALS["lang"]['Line charts must return date or my_date, description or my_description and count.'] = 'Ní mór cairteacha líne ar ais dáta nó mo_date, tuairisc nó my_description agus comhaireamh.';

$GLOBALS["lang"]['link'] = 'Naisc ábhartha eile';

$GLOBALS["lang"]['Link'] = 'Naisc ábhartha eile';

$GLOBALS["lang"]['Link (Advanced)'] = 'Nasc (Advanced)';

$GLOBALS["lang"]['Linked Files'] = 'Comhaid Nasctha';

$GLOBALS["lang"]['links'] = 'Naisc go dtí suíomhanna eile';

$GLOBALS["lang"]['Links'] = 'Naisc go dtí suíomhanna eile';

$GLOBALS["lang"]['Links this discovery to the associated cloud (if required). Links to <code>clouds.id</code>.'] = 'Naisc an fionnachtain chuig an scamall a bhaineann (más gá). Naisc go dtí <code>clouds.id</code>.';

$GLOBALS["lang"]['Links to <code>discovery_scan_options.id</code>.'] = 'Naisc go dtí <code>discovery_scan_options.id</code>.';

$GLOBALS["lang"]['Links to <code>standards.id</code>'] = 'Naisc go dtí <code>standards.id</code>';

$GLOBALS["lang"]['Links to <standards_policies.id</code>'] = 'Naisc go dtí <standards_policies.id< code=""></standards_policies.id<>';

$GLOBALS["lang"]['Linux'] = 'Linux';

$GLOBALS["lang"]['Linux Packages'] = 'Comhaid Linux';

$GLOBALS["lang"]['List'] = 'Liosta de na Liostaí';

$GLOBALS["lang"]['List All NMAP Ports, Protocols and Programs for Each Device'] = 'Liosta Gach Calafoirt NMAP, Prótacail agus Cláir do gach Gléas';

$GLOBALS["lang"]['List Devices'] = 'Liosta Feistí';

$GLOBALS["lang"]['List Discoveries'] = 'Féach ar Léarscáileanna';

$GLOBALS["lang"]['list_table_format'] = 'Liosta de na foirmeacha';

$GLOBALS["lang"]['List Table Format'] = 'Liosta de na foirmeacha';

$GLOBALS["lang"]['List Tables'] = 'Liosta Táblaí';

$GLOBALS["lang"]['Lithuania'] = 'An Liotuáin';

$GLOBALS["lang"]['Lithuanian'] = 'An Liotuáin';

$GLOBALS["lang"]['Load Balancing'] = 'Luchtaigh a Chothromú';

$GLOBALS["lang"]['Local'] = 'Amharc ar gach eolas';

$GLOBALS["lang"]['Local Area Network'] = 'Clár na dToghthóirí';

$GLOBALS["lang"]['local_port'] = 'Amharc ar gach eolas';

$GLOBALS["lang"]['Local Port'] = 'Amharc ar gach eolas';

$GLOBALS["lang"]['Local area network'] = 'Líonra limistéar áitiúil';

$GLOBALS["lang"]['Localhost'] = 'An t-óstach áitiúil';

$GLOBALS["lang"]['Localisation'] = 'Amharc ar gach eolas';

$GLOBALS["lang"]['Location'] = 'Suíomh Gréasáin';

$GLOBALS["lang"]['Location A'] = 'Amharc ar gach eolas';

$GLOBALS["lang"]['Location B'] = 'Suíomh B';

$GLOBALS["lang"]['location_id'] = 'Suíomh ID';

$GLOBALS["lang"]['Location ID'] = 'Suíomh ID';

$GLOBALS["lang"]['location_id_a'] = 'Suíomh ID A';

$GLOBALS["lang"]['Location ID A'] = 'Suíomh ID A';

$GLOBALS["lang"]['location_id_b'] = 'Suíomh ID B';

$GLOBALS["lang"]['Location ID B'] = 'Suíomh ID B';

$GLOBALS["lang"]['location_latitude'] = 'Suíomh Domhantarraingt';

$GLOBALS["lang"]['Location Latitude'] = 'Suíomh Domhantarraingt';

$GLOBALS["lang"]['location_level'] = 'Suíomh Gréasáin';

$GLOBALS["lang"]['Location Level'] = 'Suíomh Gréasáin';

$GLOBALS["lang"]['location_longitude'] = 'Suíomh Fadtéarmach';

$GLOBALS["lang"]['Location Longitude'] = 'Suíomh Fadtéarmach';

$GLOBALS["lang"]['Location Name'] = 'Ainm an tSuímh';

$GLOBALS["lang"]['location_rack'] = 'Suíomh Raca';

$GLOBALS["lang"]['Location Rack'] = 'Suíomh Raca';

$GLOBALS["lang"]['location_rack_position'] = 'Suíomh Réadmhaoin Post';

$GLOBALS["lang"]['Location Rack Position'] = 'Suíomh Réadmhaoin Post';

$GLOBALS["lang"]['location_rack_size'] = 'Suíomh Méid Raca';

$GLOBALS["lang"]['Location Rack Size'] = 'Suíomh Méid Raca';

$GLOBALS["lang"]['location_room'] = 'Suíomh Gréasáin';

$GLOBALS["lang"]['Location Room'] = 'Suíomh Gréasáin';

$GLOBALS["lang"]['location_suite'] = 'Suíomh Gréasáin';

$GLOBALS["lang"]['Location Suite'] = 'Suíomh Gréasáin';

$GLOBALS["lang"]['Locations'] = 'Suíomhanna';

$GLOBALS["lang"]['Locations in this'] = 'Suíomhanna sa';

$GLOBALS["lang"]['log'] = 'Logáil isteach';

$GLOBALS["lang"]['Log'] = 'Logáil isteach';

$GLOBALS["lang"]['log_format'] = 'Naisc go dtí suíomhanna eile';

$GLOBALS["lang"]['Log Format'] = 'Naisc go dtí suíomhanna eile';

$GLOBALS["lang"]['Log Line'] = 'Líne Logáil isteach';

$GLOBALS["lang"]['log_path'] = 'Logáil isteach Conair';

$GLOBALS["lang"]['Log Path'] = 'Logáil isteach Conair';

$GLOBALS["lang"]['log_rotation'] = 'Logáil Rothlach';

$GLOBALS["lang"]['Log Rotation'] = 'Logáil Rothlach';

$GLOBALS["lang"]['log_status'] = 'Stádas na Gaeilge';

$GLOBALS["lang"]['Log Status'] = 'Stádas na Gaeilge';

$GLOBALS["lang"]['Logging in'] = 'Logáil isteach';

$GLOBALS["lang"]['Logical Cores '] = 'Seirbhís do Chustaiméirí ';

$GLOBALS["lang"]['logical_count'] = 'Clár na dToghthóirí';

$GLOBALS["lang"]['Logical Count'] = 'Clár na dToghthóirí';

$GLOBALS["lang"]['Logout'] = 'Logáil isteach';

$GLOBALS["lang"]['Logs'] = 'taiseachas aeir: fliuch';

$GLOBALS["lang"]['longitude'] = 'Fad an tsaoil';

$GLOBALS["lang"]['Longitude'] = 'Fad an tsaoil';

$GLOBALS["lang"]['low'] = 'Íseal Íseal';

$GLOBALS["lang"]['Low'] = 'Íseal Íseal';

$GLOBALS["lang"]['Lower Case'] = 'Cás Íochtarach';

$GLOBALS["lang"]['Lowercase Hostname'] = 'Ainm an Bhrú';

$GLOBALS["lang"]['Luxembourg'] = 'bláthanna cumhra: cumhráin';

$GLOBALS["lang"]['MAC Address'] = 'Seoladh MAC';

$GLOBALS["lang"]['MAC Manufacturer'] = 'MAC Déan teagmháil Linn';

$GLOBALS["lang"]['mac'] = 'Mac an Duine';

$GLOBALS["lang"]['Mac'] = 'Mac an Duine';

$GLOBALS["lang"]['Mac Address'] = 'Seoladh:';

$GLOBALS["lang"]['MacOS'] = 'Sonraí Teagmhála';

$GLOBALS["lang"]['MacOS Packages'] = 'MacOS Pacáistí';

$GLOBALS["lang"]['Macao'] = 'cliceáil grianghraf a mhéadú';

$GLOBALS["lang"]['Macedonia'] = 'cineál gas: in airde';

$GLOBALS["lang"]['Madagascar'] = 'cineál gas: in airde';

$GLOBALS["lang"]['Maintain records of risk assessments and treatments'] = 'Taifid a choinneáil ar mheasúnuithe riosca agus cóireálacha';

$GLOBALS["lang"]['maintenance_expires'] = 'Uisce agus Séarachas';

$GLOBALS["lang"]['Maintenance Expires'] = 'Uisce agus Séarachas';

$GLOBALS["lang"]['Make My Default Dashboard'] = 'Déan mo Réamhshocrú Painéal';

$GLOBALS["lang"]['Make this install a Collector'] = 'Déan seo a shuiteáil Bailitheoir';

$GLOBALS["lang"]['Malawi'] = 'riachtanais uisce: measartha';

$GLOBALS["lang"]['Malay'] = 'cineál gas: in airde';

$GLOBALS["lang"]['Malaysia'] = 'cineál gas: in airde';

$GLOBALS["lang"]['Maldives'] = 'Díroghnaigh gach rud';

$GLOBALS["lang"]['Mali'] = 'Toir agus Crainn';

$GLOBALS["lang"]['Malta'] = 'Málta Málta';

$GLOBALS["lang"]['Manage'] = 'Bainistíocht';

$GLOBALS["lang"]['Manage Licenses'] = 'Ceadúnas Bainistíochta';

$GLOBALS["lang"]['Manage in NMIS'] = 'Bainistiú i NMIS';

$GLOBALS["lang"]['Manage incidents and nonconformities'] = 'Bainistiú teagmhais agus neamh-chomhréireachtaí';

$GLOBALS["lang"]['Managed'] = 'Bainistithe';

$GLOBALS["lang"]['managed_by'] = 'Bainistithe ag';

$GLOBALS["lang"]['Managed By'] = 'Bainistithe ag';

$GLOBALS["lang"]['Manual Input'] = 'Ionchur Lámhleabhar';

$GLOBALS["lang"]['Manually set by user, defaults to Production.'] = 'Leag an t-úsáideoir de láimh, mainneachtainí Táirgeadh.';

$GLOBALS["lang"]['Manually set by user.'] = 'Leag an t-úsáideoir de láimh.';

$GLOBALS["lang"]['manufacture_date'] = 'Dáta monaraithe';

$GLOBALS["lang"]['Manufacture Date'] = 'Dáta monaraithe';

$GLOBALS["lang"]['manufacturer'] = 'Déan teagmháil Linn';

$GLOBALS["lang"]['Manufacturer'] = 'Déan teagmháil Linn';

$GLOBALS["lang"]['manufacturer_code'] = 'Cód Táirge';

$GLOBALS["lang"]['Manufacturer Code'] = 'Cód Táirge';

$GLOBALS["lang"]['Map'] = 'Léarscáil an tSuímh';

$GLOBALS["lang"]['maps'] = 'Léarscáileanna';

$GLOBALS["lang"]['Maps'] = 'Léarscáileanna';

$GLOBALS["lang"]['March'] = 'Ba mhaith liom...';

$GLOBALS["lang"]['Marshall Islands'] = 'Oileáin Marshall';

$GLOBALS["lang"]['Martinique'] = 'Déan Teagmháil Linn';

$GLOBALS["lang"]['mask'] = 'ollscoileanna eile';

$GLOBALS["lang"]['Mask'] = 'ollscoileanna eile';

$GLOBALS["lang"]['Match'] = 'Comhoiriúnacht';

$GLOBALS["lang"]['match_options'] = 'Roghanna comhoiriúnacha';

$GLOBALS["lang"]['Match Options'] = 'Roghanna comhoiriúnacha';

$GLOBALS["lang"]['Match Order'] = 'Ordú comhoiriúnach';

$GLOBALS["lang"]['Match Process'] = 'Próiseas Match';

$GLOBALS["lang"]['match_string'] = 'Match Curtain';

$GLOBALS["lang"]['Match String'] = 'Match Curtain';

$GLOBALS["lang"]['Matching Attribute'] = 'Tabhairt le chéile';

$GLOBALS["lang"]['Matching Devices - Including OrgID'] = 'Gléasanna Meaitseála - lena n-áirítear OrgID';

$GLOBALS["lang"]['Matching Linux Devices'] = 'Gléasanna Linux a mheaitseáil';

$GLOBALS["lang"]['Matching is conducted in the following order'] = 'Déantar meaitseáil san ord seo a leanas';

$GLOBALS["lang"]['maturity_level'] = 'Leibhéal aibíochta';

$GLOBALS["lang"]['Maturity Level'] = 'Leibhéal aibíochta';

$GLOBALS["lang"]['maturity_score'] = 'Scór aibithe';

$GLOBALS["lang"]['Maturity Score'] = 'Scór aibithe';

$GLOBALS["lang"]['Mauritania'] = 'An tOirdheisceart';

$GLOBALS["lang"]['Mauritius'] = 'An tSraith Shinsearach';

$GLOBALS["lang"]['max_file_size'] = 'Méid Uasta Comhad';

$GLOBALS["lang"]['Max File Size'] = 'Méid Uasta Comhad';

$GLOBALS["lang"]['Max Length'] = 'Fad Max';

$GLOBALS["lang"]['max_size'] = 'Méid Max';

$GLOBALS["lang"]['Max Size'] = 'Méid Max';

$GLOBALS["lang"]['May'] = 'Bealtaine 2016';

$GLOBALS["lang"]['Mayotte'] = 'Comhairle Contae Mhaigh Eo';

$GLOBALS["lang"]['Measures the likelihood of the vulnerability being attacked, and is based on the current state of exploit techniques, exploit code availability, or active, “in-the-wild” exploitation.'] = 'Bearta an dóchúlacht go bhfuil an leochaileacht á ionsaí, agus tá sé bunaithe ar an staid reatha na teicnící a shaothrú, leas a bhaint as infhaighteacht cód, nó gníomhach, "in-an-wild" shaothrú.';

$GLOBALS["lang"]['medium'] = 'Meán Fómhair 2014';

$GLOBALS["lang"]['Medium'] = 'Meán Fómhair 2014';

$GLOBALS["lang"]['members'] = 'Ba mhaith liom...';

$GLOBALS["lang"]['Members'] = 'Ba mhaith liom...';

$GLOBALS["lang"]['memory'] = 'Cuimhne';

$GLOBALS["lang"]['Memory'] = 'Cuimhne';

$GLOBALS["lang"]['memory_count'] = 'Comhaireamh Cuimhne';

$GLOBALS["lang"]['Memory Count'] = 'Comhaireamh Cuimhne';

$GLOBALS["lang"]['memory_slot_count'] = 'Cuimhne Líon na Sliotán';

$GLOBALS["lang"]['Memory Slot Count'] = 'Cuimhne Líon na Sliotán';

$GLOBALS["lang"]['menu_category'] = 'Catagóir';

$GLOBALS["lang"]['Menu Category'] = 'Catagóir';

$GLOBALS["lang"]['menu_display'] = 'Taispeáin Roghchlár';

$GLOBALS["lang"]['Menu Display'] = 'Taispeáin Roghchlár';

$GLOBALS["lang"]['message'] = 'TeachtaireachtaÃ odh';

$GLOBALS["lang"]['Message'] = 'TeachtaireachtaÃ odh';

$GLOBALS["lang"]['meta_last_changed'] = 'Meta Athrú Last';

$GLOBALS["lang"]['Meta Last Changed'] = 'Meta Athrú Last';

$GLOBALS["lang"]['metric'] = 'riachtanais uisce: measartha';

$GLOBALS["lang"]['Metric'] = 'riachtanais uisce: measartha';

$GLOBALS["lang"]['Metropolitan Area Network'] = 'Líonra Ceantair na Cathrach';

$GLOBALS["lang"]['Metropolitan area network'] = 'Líonra limistéar na Cathrach';

$GLOBALS["lang"]['Mexico'] = 'taiseachas aeir: fliuch';

$GLOBALS["lang"]['Micronesia'] = 'riachtanais uisce: measartha';

$GLOBALS["lang"]['Microsoft Azure Fields'] = 'Microsoft Azure Réimsí';

$GLOBALS["lang"]['microtime'] = 'Micrimhilseogra';

$GLOBALS["lang"]['Microtime'] = 'Micrimhilseogra';

$GLOBALS["lang"]['minute'] = 'cineál gas: in airde';

$GLOBALS["lang"]['Minute'] = 'cineál gas: in airde';

$GLOBALS["lang"]['Minutes'] = 'Miontuairiscí na Comhairle';

$GLOBALS["lang"]['Minutes Since last Audit are Greater than'] = 'Miontuairiscí Ós rud é go bhfuil Iniúchóir deireanach níos mó ná';

$GLOBALS["lang"]['model'] = 'múnla múnla múnla';

$GLOBALS["lang"]['Model'] = 'múnla múnla múnla';

$GLOBALS["lang"]['model_family'] = 'Samhail Teaghlaigh';

$GLOBALS["lang"]['Model Family'] = 'Samhail Teaghlaigh';

$GLOBALS["lang"]['Modified'] = 'Athraithe';

$GLOBALS["lang"]['Modifying an Existing Script'] = 'Script atá ann cheana a mhodhnú';

$GLOBALS["lang"]['module'] = 'Amharc ar gach eolas';

$GLOBALS["lang"]['Module'] = 'Amharc ar gach eolas';

$GLOBALS["lang"]['module_index'] = 'Naisc go dtí suíomhanna eile';

$GLOBALS["lang"]['Module Index'] = 'Naisc go dtí suíomhanna eile';

$GLOBALS["lang"]['Modules'] = 'Amharc ar gach eolas';

$GLOBALS["lang"]['Moldova'] = 'taiseachas aeir: fliuch';

$GLOBALS["lang"]['Monaco'] = 'Déan Teagmháil Linn';

$GLOBALS["lang"]['Monday'] = 'Dé Luain';

$GLOBALS["lang"]['Mongolia'] = 'Mongóil Mhongóil';

$GLOBALS["lang"]['monitor'] = 'Monatóireacht a dhéanamh ar Monatóireacht';

$GLOBALS["lang"]['Monitor'] = 'Monatóireacht a dhéanamh ar Monatóireacht';

$GLOBALS["lang"]['Monitor and measure ISMS performance'] = 'Monatóireacht a dhéanamh ar agus feidhmíocht ISMS thomhas';

$GLOBALS["lang"]['Montenegro'] = 'cineál gas: in airde';

$GLOBALS["lang"]['month'] = 'Míosa agus Mí';

$GLOBALS["lang"]['Month'] = 'Míosa agus Mí';

$GLOBALS["lang"]['Montserrat'] = 'cliceáil grianghraf a mhéadú';

$GLOBALS["lang"]['More Information'] = 'Tuilleadh eolais';

$GLOBALS["lang"]['More Secure'] = 'Tuilleadh eolais';

$GLOBALS["lang"]['More elaborate SQL can used to group attributes within a range. Below shows the SQL for devices not seen in a pie chart grouped by last seen date ranges.'] = 'Is féidir SQL níos ilchasta a úsáid chun tréithe grúpa laistigh de raon. Anseo thíos léiríonn an SQL le haghaidh feistí nach bhfuil le feiceáil i gcairt pie grúpáilte ag raonta dáta le feiceáil go deireanach.';

$GLOBALS["lang"]['More information about debugging this can be found on a helpful Stack Overflow thread'] = 'Is féidir tuilleadh eolais faoi dhíbugging seo a fháil ar shnáithe ró-sreabhadh Stack cabhrach';

$GLOBALS["lang"]['Morocco'] = 'Maracó Maracó';

$GLOBALS["lang"]['Most likely the Windows firewall (or a third party firewall) is denying the connection attempt.<br><br>Please log on to the target Windows machine and check the firewall settings.'] = 'Is dócha go bhfuil an balla dóiteáin Windows (nó balla dóiteáin tríú páirtí) dhiúltú an iarracht nasc.<br/><br/>Cuir logáil isteach ar an sprioc Windows meaisín agus seiceáil na socruithe balla dóiteáin.';

$GLOBALS["lang"]['Most of Open-AudIT is Licensed with GNU AGPL.'] = 'Tá an chuid is mó de Open-AudIT ceadúnaithe le GNU AGPL.';

$GLOBALS["lang"]['motherboard'] = 'Seirbhís do Chustaiméirí';

$GLOBALS["lang"]['Motherboard'] = 'Seirbhís do Chustaiméirí';

$GLOBALS["lang"]['mount_point'] = 'Mount Pointe';

$GLOBALS["lang"]['Mount Point'] = 'Mount Pointe';

$GLOBALS["lang"]['mount_type'] = 'Cineál Mount';

$GLOBALS["lang"]['Mount Type'] = 'Cineál Mount';

$GLOBALS["lang"]['Mozambique'] = 'Déan Teagmháil Linn';

$GLOBALS["lang"]['Must Respond To Ping. If set, Nmap will fist attempt to send and listen for an ICMP response. If the device does not respond, no further scanning will occur.<br>Previously a device did not have to respond to a ping for Open-AudIT to continue scanning.'] = 'Ní mór Freagairt Chun Ping. Má leagtar, Beidh Nmap iarracht dhorn a sheoladh agus éisteacht le haghaidh freagra ICMP. Mura bhfreagraíonn an gléas, ní tharlóidh aon scanadh breise.<br/>Roimhe seo ní raibh gléas chun freagra a thabhairt ar ping do Open-AudIT chun leanúint ar aghaidh scanadh.';

$GLOBALS["lang"]['Must Respond to Ping'] = 'Ní mór Freagairt do Ping';

$GLOBALS["lang"]['My AntiVirus is prompting me to deny/allow things'] = 'Is é mo AntiVirus pras dom a dhiúltú / rudaí a cheadú';

$GLOBALS["lang"]['My time is off in Open-AudIT'] = 'Tá mo chuid ama amach i Open-AudIT';

$GLOBALS["lang"]['Myanmar'] = 'riachtanais uisce: measartha';

$GLOBALS["lang"]['N+1'] = 'N + 1';

$GLOBALS["lang"]['N+M'] = 'N + M';

$GLOBALS["lang"]['N-to-1'] = 'N-go-1';

$GLOBALS["lang"]['N-to-N'] = 'N-go-N';

$GLOBALS["lang"]['NMIS Business Service'] = 'NMIS Business Service';

$GLOBALS["lang"]['NMIS Customer'] = 'NMIS Chustaiméirí';

$GLOBALS["lang"]['NMIS Device Options'] = 'Roghanna Gléas NMIS';

$GLOBALS["lang"]['NMIS Device Selection'] = 'Roghnú Gléas NMIS';

$GLOBALS["lang"]['NMIS Field Name'] = 'NMIS Ainm Réimse';

$GLOBALS["lang"]['NMIS Field Type'] = 'NMIS Cineál Réimse';

$GLOBALS["lang"]['NMIS Group'] = 'NMIS Group';

$GLOBALS["lang"]['NMIS Poller'] = 'NMIS Pollán';

$GLOBALS["lang"]['NMIS Role'] = 'NMIS Ról na Gaeilge';

$GLOBALS["lang"]['NOTE'] = 'Amharc ar gach eolas';

$GLOBALS["lang"]['NOTE #2'] = 'Tuilleadh eolais';

$GLOBALS["lang"]['NOTE - For more info on DateTime formats, see'] = 'NÓTA - Le haghaidh tuilleadh eolais ar formáidí DateTime, féach';

$GLOBALS["lang"]['NOTE - If you request a downloaded CSV, XML or JSON format (either a single credential, or the complete collection) the actual credential details will be sent. Not the encrypted string, the actual username, password, community string, etc. Any sensitive details are not displayed in the web GUI, but are made available via other formats. To prevent this export a configuration item is available called decrypt_credentials.'] = 'NÓTA - Má iarrann tú CSV íoslódáil, XML nó JSON formáid (cintiúr amháin, nó an bailiúchán iomlán) Beidh na sonraí dintiúir iarbhír a sheoladh. Gan an teaghrán criptithe, an ainm úsáideora iarbhír, focal faire, teaghrán pobail, etc. Níl aon sonraí íogair ar taispeáint sa GUI gréasáin, ach tá siad ar fáil trí formáidí eile. Chun cosc a chur ar an onnmhairiú mír chumraíocht ar fáil ar a dtugtar decrypt_credentials.';

$GLOBALS["lang"]['NOTE - The curly brackets in the data filed should be used as-is (not replaced as per other examples above).'] = 'NÓTA - Ba chóir na lúibíní curly sna sonraí a comhdaíodh a úsáid mar-is (nach bhfuil in ionad de réir samplaí eile thuas).';

$GLOBALS["lang"]['NOTE - You can prevent plain text credentials being displayed below by setting the configuration item for <code>decrypt_credentials</code> to <code>n</code>.'] = 'NÓTA - Is féidir leat cosc a chur dintiúir téacs plain atá ar taispeáint thíos ag leagan an mhír chumraíocht do <code>decrypt_credentials</code> go dtí <code>n</code>.';

$GLOBALS["lang"]['name'] = 'Ainm an ainm';

$GLOBALS["lang"]['Name'] = 'Ainm an ainm';

$GLOBALS["lang"]['Name: The name you are giving to this field. Ideally it should be unique.'] = 'Ainm: An t-ainm atá tú ag tabhairt don réimse seo. Go hidéalach ba chóir é a bheith uathúil.';

$GLOBALS["lang"]['Namibia'] = 'Déan teagmháil linn';

$GLOBALS["lang"]['Nauru'] = 'Déan teagmháil linn';

$GLOBALS["lang"]['Nepal'] = 'riachtanais uisce: measartha';

$GLOBALS["lang"]['net_index'] = 'Innéacs Glan';

$GLOBALS["lang"]['Net Index'] = 'Innéacs Glan';

$GLOBALS["lang"]['Netherlands Antilles'] = 'Aintillí na hÍsiltíre';

$GLOBALS["lang"]['Netherlands the'] = 'an Ísiltír';

$GLOBALS["lang"]['netmask'] = 'Seirbhís do Chustaiméirí';

$GLOBALS["lang"]['Netmask'] = 'Seirbhís do Chustaiméirí';

$GLOBALS["lang"]['netstat'] = 'Glantóir';

$GLOBALS["lang"]['Netstat'] = 'Glantóir';

$GLOBALS["lang"]['Netstat Policies'] = 'Polasaí Netstat';

$GLOBALS["lang"]['Netstat Ports'] = 'Seirbhís do Chustaiméirí';

$GLOBALS["lang"]['Netstat Ports use a combination of port number, protocol and program. If all are present the policy passes.'] = 'Netstat Ports úsáid meascán de uimhir port, prótacal agus clár. Má tá gach duine a théann an polasaí i láthair.';

$GLOBALS["lang"]['Network'] = 'Líonra na Líonraí';

$GLOBALS["lang"]['network_address'] = 'Seoladh an Líonra';

$GLOBALS["lang"]['Network Address'] = 'Seoladh an Líonra';

$GLOBALS["lang"]['Network Discovery'] = 'Líonra Discovery';

$GLOBALS["lang"]['network_domain'] = 'Líonra Fearainn';

$GLOBALS["lang"]['Network Domain'] = 'Líonra Fearainn';

$GLOBALS["lang"]['Network Types'] = 'Cineálacha Líonra';

$GLOBALS["lang"]['Network type is set to Local Area Network by default, but can be changed by the user as they see fit. The types supported are below (with thanks to Wikipedia).<br><br>A network can be characterized by its physical capacity or its organizational purpose. Use of the network, including user authorization and access rights, differ accordingly.'] = 'Tá cineál Líonra leagtha chuig Líonra Ceantair Áitiúil de réir réamhshocraithe, ach is féidir leis an úsáideoir a athrú mar a fheiceann siad oiriúnach. Tá na cineálacha tacaíocht thíos (le buíochas le Vicipéid).<br/><br/>Is féidir le líonra a tréithriú ag a chumas fisiciúil nó a chuspóir eagrúcháin. Úsáid an líonra, lena n-áirítear údarú úsáideora agus cearta rochtana, difriúil dá réir sin.';

$GLOBALS["lang"]['networks'] = 'Líonraí';

$GLOBALS["lang"]['Networks'] = 'Líonraí';

$GLOBALS["lang"]['Networks Generated By'] = 'Líonraí Ginnithe ag';

$GLOBALS["lang"]['Networks are updated with every discovery. Items such as IPs Available and IPs Used, along with Gateways, DHCP and DNS Servers are added as found.'] = 'Líonraí cothrom le dáta le gach fionnachtana. Míreanna ar nós IPs ar fáil agus IPs Úsáidte, chomh maith le Gateways, DHCP agus Freastalaithe DNS a leanas mar a fhaightear.';

$GLOBALS["lang"]['Networks respond differently depending on how they are configured. Some routers and/or firewalls can respond <i>on behalf</i> of IPs on the other side of their interfaces to the Open-AudIT Server. It is quite common to see Nmap report a probe for SNMP (UDP port 161) to respond as open|filtered for devices that do and do not exist. This is misleading as there is no device at that IP, yet it ends up with a device entry in the database. 99.9% of the time, it is not Open-AudIT, nor even Nmap, but the network causing this issue. Now that we have the options to treat open|filtered ports as either open or closed, we can eliminate a lot of this confusion. Enterprise users even have the option to change this on a per discovery basis (more than just using the Medium (Classic) item, as above).'] = 'Líonraí freagra difriúil ag brath ar an gcaoi a bhfuil siad cumraithe. Is féidir le roinnt ródairí agus/nó ballaí dóiteáin freagra a thabhairt <i>thar ceann</i> de IPanna ar an taobh eile dá gcomhéadan chuig an Freastalaí Oscailte-AudIT. Tá sé coitianta go leor a fheiceáil tuarascáil Nmap probe do SNMP (UDP port 161) chun freagra a thabhairt mar openfiltered le haghaidh feistí a dhéanann agus nach bhfuil ann. Tá sé seo míthreorach mar nach bhfuil aon fheiste ag IP, ach críochnaíonn sé suas le iontráil gléas sa bhunachar sonraí. 99.9% den am, nach bhfuil sé Open-AudIT, ná fiú Nmap, ach an líonra is cúis leis an gceist seo. Anois go bhfuil na roghanna againn chun calafoirt oscailte a chóireáil mar atá oscailte nó dúnta, is féidir linn a lán den mearbhall seo a dhíchur. Tá rogha ag úsáideoirí fiontraíochta é seo a athrú ar bhonn in aghaidh an fhionnachtain (níos mó ná an mhír Meánach (Aicme) a úsáid, mar atá thuas).';

$GLOBALS["lang"]['Networks using a CIDR Mask of'] = 'Líonraí ag baint úsáide as Masc CIDR';

$GLOBALS["lang"]['New Building Name'] = 'Ainm Foirgníochta Nua';

$GLOBALS["lang"]['New Caledonia'] = 'cliceáil grianghraf a mhéadú';

$GLOBALS["lang"]['New Floor Name'] = 'Ainm an Urlár Nua';

$GLOBALS["lang"]['New Room Name'] = 'Ainm an Seomra Nua';

$GLOBALS["lang"]['New Row Name'] = 'Ainm an Bhrú';

$GLOBALS["lang"]['New Zealand'] = 'An Nua-Shéalainn';

$GLOBALS["lang"]['News'] = 'Nuacht agus Imeachtaí';

$GLOBALS["lang"]['News checks-in each time you login for updated queries & packages, configuration recommendations, release announcements, blog posts and more.'] = 'Nuacht seiceálacha-i ngach uair a logáil tú isteach le haghaidh ceisteanna cothrom le dáta agus pacáistí, moltaí chumraíocht, fógraí scaoileadh, blog post agus níos mó.';

$GLOBALS["lang"]['News is our way of keeping you up-to-date with the latest fixes, announcements, query updates, software versions and more.<br><br>You do not need to keep on top of the wiki or check for new releases, we can send these to you!'] = 'Is é an nuacht ár mbealach a choinneáil tú suas chun dáta leis na fixes is déanaí, fógraí, nuashonruithe cheist, leaganacha bogearraí agus níos mó.<br/><br/>Ní gá duit a choinneáil ar bharr an wiki nó seiceáil le haghaidh scaoileadh nua, is féidir linn seo a sheoladh chugat!';

$GLOBALS["lang"]['next_hop'] = 'Ar Aghaidh';

$GLOBALS["lang"]['Next Hop'] = 'Ar Aghaidh';

$GLOBALS["lang"]['next_run'] = 'Ar Aghaidh Rith';

$GLOBALS["lang"]['Next Run'] = 'Ar Aghaidh Rith';

$GLOBALS["lang"]['Next click <i>Create your own application</i>.'] = 'cliceáil grianghraf a mhéadú <i>Cruthaigh d\'iarratas féin</i>.';

$GLOBALS["lang"]['Next, click OK, then right click the Apache 2.4 service and click Restart. Done!'] = 'Next, cliceáil OK, ansin cliceáil ar dheis an tseirbhís Apache 2.4 agus cliceáil Atosaigh. Arna dhéanamh!';

$GLOBALS["lang"]['Next, right click the Apache2.4 service and select Properties, then click the Log On tab.'] = 'Next, ceart cliceáil ar an tseirbhís Apache2.4 agus roghnaigh Airíonna, ansin cliceáil ar an Log Ar tab.';

$GLOBALS["lang"]['Nicaragua'] = 'riachtanais uisce: measartha';

$GLOBALS["lang"]['Niger'] = 'Níl an Tweet seo ar fáil';

$GLOBALS["lang"]['Nigeria'] = 'An Nigéir';

$GLOBALS["lang"]['Niue'] = 'riachtanais uisce: measartha';

$GLOBALS["lang"]['nmap'] = 'Nmap';

$GLOBALS["lang"]['Nmap'] = 'Nmap';

$GLOBALS["lang"]['Nmap Port Scanning Responses'] = 'Nmap Port Scanning Responses';

$GLOBALS["lang"]['nmap_tcp_ports'] = 'Nmap Ports Tcp';

$GLOBALS["lang"]['Nmap Tcp Ports'] = 'Nmap Ports Tcp';

$GLOBALS["lang"]['nmap_udp_ports'] = 'Déan Teagmháil Linn';

$GLOBALS["lang"]['Nmap Udp Ports'] = 'Déan Teagmháil Linn';

$GLOBALS["lang"]['Nmap cannot determine whether the port is open because packet filtering prevents its probes from reaching the port. The filtering could be from a dedicated firewall device, router rules, or host-based firewall software. These ports frustrate attackers because they provide so little information. Sometimes they respond with ICMP error messages such as type 3 code 13 (destination unreachable: communication administratively prohibited), but filters that simply drop probes without responding are far more common. This forces Nmap to retry several times just in case the probe was dropped due to network congestion rather than filtering. This slows down the scan dramatically.'] = 'Ní féidir le léarscáil a chinneadh an bhfuil an calafort oscailte toisc go gcuireann scagadh paicéad cosc ar a chuid probes as teacht ar an gcalafort. D\'fhéadfadh an scagadh a bheith ó gléas balla dóiteáin tiomanta, rialacha ródaire, nó óstáil-bhunaithe bogearraí balla dóiteáin. Na calafoirt ionsaithe frustrate toisc go soláthraíonn siad faisnéis chomh beag. Uaireanta fhreagraíonn siad le teachtaireachtaí earráid ICMP nós cineál 3 cód 13 (críochnú unreachable: cumarsáid cosc riaracháin), ach scagairí a titim go simplí probes gan freagra i bhfad níos coitianta. Seo fórsaí Nmap chun retry arís agus arís eile i gcás go raibh thit an probe mar gheall ar brú tráchta líonra seachas scagadh. Seo slows síos an scanadh mór tagtha ar.';

$GLOBALS["lang"]['Nmap places ports in this state when it is unable to determine whether a port is open or filtered. This occurs for scan types in which open ports give no response. The lack of response could also mean that a packet filter dropped the probe or any response it elicited. So Nmap does not know for sure whether the port is open or being filtered. The UDP, IP protocol, FIN, NULL, and Xmas scans classify ports this way.'] = 'Nmap áiteanna calafoirt sa stát seo nuair nach bhfuil sé in ann a chinneadh an bhfuil calafort oscailte nó scagtha. Tarlaíonn sé seo le haghaidh cineálacha scanadh ina dtugann calafoirt oscailte aon fhreagra. D\'fhéadfadh an easpa freagartha a chiallaíonn freisin gur thit scagaire paicéad an probe nó aon fhreagra elicited sé. Mar sin, níl a fhios ag Nmap go cinnte an bhfuil an calafort oscailte nó á scagadh. An UDP, IP prótacal, FIN, NULL, agus Xmas scans rangú calafoirt ar an mbealach seo.';

$GLOBALS["lang"]['Nmap timing details are found on the bottom of this linked page'] = 'Nmap sonraí uainiú fáil ar bun an leathanach nasctha';

$GLOBALS["lang"]['nmis_business_service'] = 'An tSeirbhís Gnó';

$GLOBALS["lang"]['Nmis Business Service'] = 'An tSeirbhís Gnó';

$GLOBALS["lang"]['nmis_customer'] = 'Déan teagmháil Linn';

$GLOBALS["lang"]['Nmis Customer'] = 'Déan teagmháil Linn';

$GLOBALS["lang"]['nmis_group'] = 'Grúpa na Stát Aontaithe';

$GLOBALS["lang"]['Nmis Group'] = 'Grúpa na Stát Aontaithe';

$GLOBALS["lang"]['nmis_manage'] = 'Bainistíocht Nmis';

$GLOBALS["lang"]['Nmis Manage'] = 'Bainistíocht Nmis';

$GLOBALS["lang"]['nmis_name'] = 'Ainm an Stáit';

$GLOBALS["lang"]['Nmis Name'] = 'Ainm an Stáit';

$GLOBALS["lang"]['nmis_notes'] = 'Nmis Nótaí';

$GLOBALS["lang"]['Nmis Notes'] = 'Nmis Nótaí';

$GLOBALS["lang"]['nmis_poller'] = 'Nmis Polling';

$GLOBALS["lang"]['Nmis Poller'] = 'Nmis Polling';

$GLOBALS["lang"]['nmis_poller_uuid'] = 'Seirbhís do Chustaiméirí';

$GLOBALS["lang"]['Nmis Poller Uuid'] = 'Seirbhís do Chustaiméirí';

$GLOBALS["lang"]['nmis_role'] = 'NPPR Oidhreacht';

$GLOBALS["lang"]['Nmis Role'] = 'NPPR Oidhreacht';

$GLOBALS["lang"]['No'] = 'Níl an Tweet seo ar fáil';

$GLOBALS["lang"]['No Devices Returned'] = 'Uimh Gléasanna ar ais';

$GLOBALS["lang"]['No Google Maps API Key present, you will not be able to display the map.'] = 'Níl Google Maps API Key láthair, ní bheidh tú in ann a thaispeáint ar an léarscáil.';

$GLOBALS["lang"]['No License for Professional or Enterprise'] = 'Uimh Ceadúnas le haghaidh Gairmiúla nó Fiontair';

$GLOBALS["lang"]['No Results'] = 'Gan a bheith ráite';

$GLOBALS["lang"]['No data in License Key'] = 'Níl aon sonraí i Eochair Ceadúnas';

$GLOBALS["lang"]['No database upgrade required at this time.'] = 'Níl aon uasghrádú bunachar ag teastáil ag an am seo.';

$GLOBALS["lang"]['No devices are in the database.'] = 'Níl aon feistí sa bhunachar sonraí.';

$GLOBALS["lang"]['Node'] = 'riachtanais uisce: measartha';

$GLOBALS["lang"]['None'] = 'Gan a bheith ráite';

$GLOBALS["lang"]['Norfolk Island'] = 'tréimhse de chuid eile: aon';

$GLOBALS["lang"]['Normal'] = 'De ghnáth,';

$GLOBALS["lang"]['Northern Mariana Islands'] = 'Tuaisceart Oileáin Mariana';

$GLOBALS["lang"]['Norway'] = 'cineál gas: in airde';

$GLOBALS["lang"]['Norwegian'] = 'cineál gas: in airde';

$GLOBALS["lang"]['Not Applicable'] = 'Níl Infheidhme';

$GLOBALS["lang"]['Not Checked'] = 'Gan Seiceáil';

$GLOBALS["lang"]['Not Equals'] = 'Níl Comhionann';

$GLOBALS["lang"]['Not In'] = 'Nach bhfuil i';

$GLOBALS["lang"]['Not Like'] = 'Gan a bheith ráite';

$GLOBALS["lang"]['Not Set'] = 'Níl an Tweet seo ar fáil';

$GLOBALS["lang"]['Not every computer will be able to successfully complete a benchmark. We have seen in some fail in testing for reasons beyond our control. The logs should help point you in the right direction for these items.'] = 'Ní bheidh gach ríomhaire in ann tagarmharc a chomhlánú go rathúil. Táimid tar éis feiceáil i roinnt theipeann i tástáil ar chúiseanna níos faide ná ár rialú. Ba chóir na logaí cabhrú pointe tú sa treo ceart do na míreanna.';

$GLOBALS["lang"]['Not in the (comma seperated) list'] = 'Nach bhfuil sa liosta (comma seperated)';

$GLOBALS["lang"]['Not normally used. If set, this requires the device to have an open port (as per Scan Options) to be considered responding. A MAC address, arp response or ping response is not considered sufficient to be considered responding. Useful if a router or firewall between the Open-AudIT server and target IP is responding to port scans on the IPs behalf.'] = 'Gan a úsáidtear de ghnáth. Má leagtar, éilíonn sé seo go bhfuil calafort oscailte (de réir Roghanna Scan) a mheas ag freagairt. Ní mheastar go bhfuil seoladh MAC, freagra arp nó freagra ping leordhóthanach le bheith ag freagairt. Úsáideacha má tá ródaire nó balla dóiteáin idir an freastalaí Open-AudIT agus sprioc IP ag freagairt do scans port ar son IP.';

$GLOBALS["lang"]['Note'] = 'Tabhair faoi deara';

$GLOBALS["lang"]['Note - Selecting a parent will automatically provide access to its children (although it wont be shown here).'] = 'Tabhair faoi deara - Roghnaigh tuismitheoir a chur ar fáil go huathoibríoch rochtain ar a leanaí (cé go mbeidh sé a thaispeáint anseo).';

$GLOBALS["lang"]['Note that the 100 device Enterprise license does not include support.'] = 'Tabhair faoi deara nach bhfuil an ceadúnas 100 gléas Fiontair áireamh tacaíocht.';

$GLOBALS["lang"]['Note, you may need to make the script executable with'] = 'Tabhair faoi deara, is féidir leat a dhéanamh ar an script executable le';

$GLOBALS["lang"]['Notes'] = 'Nótaí';

$GLOBALS["lang"]['notes'] = 'Nótaí';

$GLOBALS["lang"]['Notice'] = 'Fógraí agus Fógraí';

$GLOBALS["lang"]['notin'] = 'Gan a bheith ráite';

$GLOBALS["lang"]['Notin'] = 'Gan a bheith ráite';

$GLOBALS["lang"]['November'] = 'Samhain 2015';

$GLOBALS["lang"]['Now for the Subscription ID, click All Services, Subscriptions and copy it.'] = 'Anois le haghaidh an ID Síntiús, cliceáil Gach Seirbhísí, Síntiúis agus é a chóipeáil.';

$GLOBALS["lang"]['Now we need to provide the Azure Active Directory application access to your subscription.<br><br>Click on Resource Groups and then the resource group you would like your Azure Active Directory Application to have access to.<br><br>Click Add. The role should be Contributor and then search for the app (Open-AudIT). Then click Save.<br><br>Now the application has access to the subscription, so we can make API calls. The API calls will be requested on behalf of the application, not your user.'] = 'Anois, ní mór dúinn a chur ar fáil ar an Azure Gníomhach Eolaire rochtain ar do síntiús.<br/><br/>Cliceáil ar Ghrúpaí Acmhainní agus ansin an grúpa acmhainní ba mhaith leat do Iarratas Eolaire Gníomhach Azure chun rochtain a fháil ar.<br/><br/>Cliceáil Add. Ba chóir go mbeadh an ról Contributor agus ansin cuardach a dhéanamh ar an app (Open-AudIT). Ansin cliceáil shábháil.<br/><br/>Anois tá rochtain ag an iarratas ar an síntiús, ionas gur féidir linn glaonna API a dhéanamh. Iarrfar ar ghlaonna API thar ceann an iarratais, ní d\'úsáideoir.';

$GLOBALS["lang"]['nvd_json'] = 'Déan teagmháil linn';

$GLOBALS["lang"]['Nvd Json'] = 'Déan teagmháil linn';

$GLOBALS["lang"]['ORDER BY'] = 'AN SCEIDEAL';

$GLOBALS["lang"]['OS'] = 'OSPS';

$GLOBALS["lang"]['OS Families'] = 'Seirbhísí ar líne';

$GLOBALS["lang"]['OS Family'] = 'OS Teaghlaigh';

$GLOBALS["lang"]['OS Group'] = 'Grúpa OS';

$GLOBALS["lang"]['OUTPUTS'] = 'Uirlisí ilchuspóireacha';

$GLOBALS["lang"]['oae_manage'] = 'An tSeirbhís Dóiteáin';

$GLOBALS["lang"]['Oae Manage'] = 'An tSeirbhís Dóiteáin';

$GLOBALS["lang"]['object_ident'] = 'Cuspóir Aitheanta';

$GLOBALS["lang"]['Object Ident'] = 'Cuspóir Aitheanta';

$GLOBALS["lang"]['Obtain top management support'] = 'Tacaíocht bainistíochta barr';

$GLOBALS["lang"]['October'] = 'Deireadh Fómhair 2015';

$GLOBALS["lang"]['Offset'] = 'Tairiscint';

$GLOBALS["lang"]['Okta'] = 'Seirbhís do Chustaiméirí';

$GLOBALS["lang"]['Oman'] = 'Amharc ar gach eolas';

$GLOBALS["lang"]['omk_uuid'] = 'Uisce agus Séarachas';

$GLOBALS["lang"]['Omk Uuid'] = 'Uisce agus Séarachas';

$GLOBALS["lang"]['On'] = 'Ar an tsráid';

$GLOBALS["lang"]['On Windows, Open-AudIT uses WMI as it is primary method of auditing. Windows has a notorious reputation where remote WMI is concerned. It tends to either <i>just work</i> or some mystery item on the target requires changing. If you are experiencing difficulty auditing remote Windows PCs, we have created a script called test_windows_client.vbs. You can run this script <strong>locally</strong> on the machine in question, after signing on as the user that is used by Open-AudIT to perform the audit. The script makes <strong>no changes</strong> to the target devices. It checks most (not all) of the items below and generates PASS, FAIL and INFO tags for various properties. NOTE - If your target system is being audited correctly, you should not change any settings. Some of the below do not exist on Windows PCs that are able to be audited and some do exist. Only change settings if your discoveries on particular PCs are not working as intended.'] = 'Ar Windows, Úsáideann Open-AudIT WMI mar go bhfuil sé modh príomha iniúchta. Tá clú suntasach ag Windows nuair a bhíonn WMI iargúlta i gceist. Claontaíonn sé le ceachtar <i>obair amháin</i> nó roinnt mír Mystery ar an sprioc éilíonn athrú. Má tá tú ag fulaingt deacracht iniúchadh ríomhairí Windows iargúlta, ní mór dúinn a cruthaíodh script ar a dtugtar test_windows_client.vbs. Is féidir leat a reáchtáil an script <strong>go háitiúil</strong> ar an meaisín atá i gceist, tar éis síniú mar an t-úsáideoir a úsáideann Open-AudIT chun an t-iniúchadh a dhéanamh. Déanann an script <strong>aon athruithe</strong> go dtí na feistí sprioc. Seiceálacha sé an chuid is mó (ní go léir) de na míreanna thíos agus gineann PASS, FAIL agus clibeanna INFO le haghaidh airíonna éagsúla. NÓTA - Má tá do spriocchóras á iniúchadh i gceart, níor chóir duit aon socruithe a athrú. Níl cuid de na thíos ann ar ríomhairí pearsanta Windows atá in ann a iniúchadh agus tá cuid acu ann. Níl ach suímh athraithe mura bhfuil do chuid fionnachtana ar ríomhairí pearsanta ag obair mar atá beartaithe.';

$GLOBALS["lang"]['On the Tasks List page, click the <i>Add New</i> button to configure a task.'] = 'Ar an leathanach Liosta Tascanna, cliceáil ar an <i>Tuilleadh eolais</i> cnaipe a chumrú tasc.';

$GLOBALS["lang"]['On the field <i>Match String</i> you should provide the name of the software that you want to track. You can use the percent sign (%) as a wildcard in where required.'] = 'Ar an réimse <i>Match Curtain</i> ba chóir duit a chur ar fáil ar an ainm na bogearraí gur mian leat a rian. Is féidir leat úsáid a bhaint as an comhartha faoin gcéad (%) mar chárta fiáin i gcás inar gá.';

$GLOBALS["lang"]['On the next page you will be able to select Access Keys and see your key or create a new key.'] = 'Ar an chéad leathanach eile beidh tú in ann a roghnú Keys Rochtain agus a fheiceáil do eochair nó a chruthú eochair nua.';

$GLOBALS["lang"]['On the target Windows PC, run the DCOM utility and verify (or set) the below attributes. Start -> Run, Enter DCOMCNFG and press OK. This will open the DCOMCNFG window.'] = 'Ar an sprioc Windows PC, reáchtáil an fóntais DCOM agus a fhíorú (nó a leagtar) na tréithe thíos. Tosaigh - lí Rith, Cuir isteach DCOMCNFG agus brúigh OK. Osclóidh sé seo fuinneog DCOMCNFG.';

$GLOBALS["lang"]['On the top right (underneath the menu bar) you will see several buttons. These allow you to select another dashboard, set the current dashboard as your homepage (if it is not already) and edit the current dashboard (if you have permission).'] = 'Ar an ceart barr (faoin mbonn roghchlár) feicfidh tú roinnt cnaipí. Ligeann siad seo duit a roghnú Painéal na nIonstraimí eile, leagtar an Painéal na nIonstraimí reatha mar do leathanach baile (mura bhfuil sé cheana féin) agus in eagar an Painéal na nIonstraimí reatha (má tá cead agat).';

$GLOBALS["lang"]['On-Premise, Not Cloud'] = 'Ar-Bhuel, Ní Cloud';

$GLOBALS["lang"]['Once an Additional Field has been created it can be used in queries and groups just like any other attribute in the database.'] = 'Nuair a bheidh Réimse Breise cruthaithe is féidir é a úsáid i ceisteanna agus grúpaí díreach cosúil le aon tréith eile sa bhunachar sonraí.';

$GLOBALS["lang"]['Once commented out, your certificate will be validated, but may also fail this validation if you are using self-signed certificates and have not configured your server correctly.'] = 'Nuair a dúirt sé amach, beidh do dheimhniú a bhailíochtú, ach d\'fhéadfadh theipeann freisin an bailíochtú má tá tú ag baint úsáide as deimhnithe féin-sínithe agus nach bhfuil chumrú do fhreastalaí i gceart.';

$GLOBALS["lang"]['Once the script has run on a target, should the script delete itself.'] = 'Nuair a bheidh an script reáchtáil ar sprioc, Ba chóir an script a scriosadh féin.';

$GLOBALS["lang"]['Once those initial queries (snmp, ssh, wmi) are complete, if the device is a supported by the audit scripts (Windows, Linux, OSX, AIX, HP-UX, Solaris and ESXi), the correct audit script will be copied to the target and executed. The audit script will self delete upon completion. The result will be stored on the target machine as an XML file. The Open-AudIT server will then retrieve the result file for processing and delete the result file on the target. The location the audit script is copied to on the target device (at least for SSH audits) is configurable by editing the discovery_linux_script_directory config item. By default it is set to /tmp/. This may need changing if /tmp has noexec set. The result file is then processed and the device details updated within Open-AudIT.'] = 'Nuair a bheidh na ceisteanna tosaigh (snmp, ssh, wmi) críochnaithe, má tá an gléas tacaíocht ó na scripteanna iniúchóireachta (Windows, Linux, OSX, AIX, HP-UX, Solaris agus ESXi), beidh an script iniúchóireachta ceart a chóipeáil chuig an sprioc agus a fhorghníomhú. Beidh an script iniúchóireachta féin a scriosadh ar chríochnú. Déanfar an toradh a stóráil ar an meaisín sprioc mar chomhad XML. Gheobhaidh an freastalaí Open-AudIT ansin an comhad toradh le haghaidh próiseála agus scrios an comhad toradh ar an sprioc. Tá an suíomh an script iniúchóireachta chóipeáil ar an ngléas sprioc (ar a laghad le haghaidh iniúchtaí SSH) configurable ag eagarthóireacht ar an mhír fionnachtain_linux_script_directory config. De réir réamhshocraithe tá sé leagtha go / tmp /. D\'fhéadfadh sé seo ag teastáil athrú má tá / cnáib leagtha noexec. Tá an comhad toradh a phróiseáil ansin agus na sonraí gléas cothrom le dáta laistigh Open-AudIT.';

$GLOBALS["lang"]['Once you click the execute button, Open-AudIT will spawn a process to initiate the discovery and return the user to the discovery details page. The newly spawned process takes the configured discovery options and executes Nmap commands to determine the initial list of IP addresses to be scanned (or queries Active Directory if that type is used). Each IP to be scanned is placed into a queue. Once the initial process has completed (and there are IPs to be scanned in the queue) a number of processes will be spawned to further scan each IP in parallel. This number of processes is configurable in the configuration, edit the attribute <i>queue_limit</i>. By default this is set to 20.'] = 'Nuair a chliceálann tú an cnaipe a fhorghníomhú, beidh Open-AudIT sceite próiseas chun an fionnachtain a thionscnamh agus an t-úsáideoir ar ais chuig an leathanach sonraí fionnachtana. Tógann an próiseas nua sceite na roghanna fionnachtana cumraithe agus forghníomhaíonn orduithe Nmap a chinneadh an liosta tosaigh de seoltaí IP a scanadh (nó fiosruithe Eolaire Gníomhach má tá an cineál a úsáidtear). Tá gach IP a scanadh a chur isteach i scuaine. Nuair a bheidh an próiseas tosaigh curtha i gcrích (agus tá IPanna a scanadh sa scuaine) Beidh roinnt próiseas sceite a scanadh breise gach IP i gcomhthráth. Tá an líon de na próisis configurable sa chumraíocht, in eagar an tréith <i>scuaine agus teorainn</i>. De réir réamhshocraithe tá sé seo leagtha go 20.';

$GLOBALS["lang"]['Once you have chosen your devices to edit, click the pencil button on the top right of the table.'] = 'Nuair a roghnaigh tú do feistí a chur in eagar, cliceáil ar an gcnaipe peann luaidhe ar an ceart barr an tábla.';

$GLOBALS["lang"]['Once you have done this, Open-AudIT will attempt to verify your user logon details against the configured Auth Method. If the user has valid credentials and <code>use_authorisation</code> is set, Open-AudIT will ask for the list of groups that the user belongs to. If the user is in the corresponding groups for Open-AudIT Roles and Orgs, those Roles and Orgs will be applied to that user.'] = 'Nuair a bheidh tú seo a dhéanamh, Beidh Open-AudIT iarracht a fhíorú do shonraí logon úsáideora i gcoinne an Modh Auth cumraithe. Má tá dintiúir bailí ag an úsáideoir agus <code>use_authorisation</code> Tá sé leagtha, Beidh Open-AudIT iarraidh ar an liosta de na grúpaí a bhaineann leis an úsáideoir. Má tá an t-úsáideoir sna grúpaí comhfhreagracha le haghaidh Róil Oscailte-AudIT agus Orgs, beidh na Róil agus Orgs a chur i bhfeidhm ar an úsáideoir.';

$GLOBALS["lang"]['Once you have generated a Baseline Definition you can schedule it to be run against a specified group of devices.'] = 'Nuair a bheidh tú a ghintear Sainmhíniú Baseline féidir leat é a sceideal a reáchtáil i gcoinne grúpa sonraithe feistí.';

$GLOBALS["lang"]['Once you have those items, in Open-AudIT Enterprise you can go to menu -> Discover -> Clouds -> Create Clouds, select the <i>Amazon AWS</i> type and paste them in. Done.'] = 'Nuair a bheidh na míreanna sin agat, i Open-AudIT Fiontraíocht is féidir leat dul go dtí an roghchlár - ^ Faigh amach - uaire Scamaill - uaire tréimhse saoil: ilbhliantúil Clouds, roghnaigh an <i>Amazon AWS</i> cineál agus greamaigh iad i. Arna dhéanamh sa Bhruiséil.';

$GLOBALS["lang"]['Once you have those items, in Open-AudIT Enterprise you can go to menu -> Discover -> Clouds -> Create Clouds, select the <i>Microsoft Azure</i> type and paste them in. Done.'] = 'Nuair a bheidh na míreanna sin agat, i Open-AudIT Fiontraíocht is féidir leat dul go dtí an roghchlár - ^ Faigh amach - uaire Scamaill - uaire tréimhse saoil: ilbhliantúil Clouds, roghnaigh an <i>Microsoft Azure</i> cineál agus greamaigh iad i. Arna dhéanamh sa Bhruiséil.';

$GLOBALS["lang"]['Once you have your cloud credentials, it is merely a matter of creating a new cloud and running the discovery - or scheduling first/future discoveries. Make sure you also have the credentials required to log on to your cloud machines, and it is all done for you just like a regular discovery. Credentials for your cloud'] = 'Nuair a bheidh tú do dintiúir scamall, tá sé ach ábhar a chruthú scamall nua agus ag rith an fionnachtain - nó sceidealú fionnachtana chéad / todhchaí. Bí cinnte go bhfuil tú freisin ar an dintiúir is gá chun logáil isteach ar do meaisíní scamall, agus tá sé ar fad a dhéanamh ar do shon díreach cosúil le fionnachtain rialta. Credentials do do scamall';

$GLOBALS["lang"]['One of <code>3x2</code>, <code>4x2</code>, <code>4x3</code> or <code>4x4</code>.'] = 'Ceann de na <code>3x2</code>, <code>4x2</code>, <code>4x3</code> nó <code>4x4</code>.';

$GLOBALS["lang"]['One of Campus Area Network, Cloud Network, Enterprise Private Network, Home Area Network, Local Area Network, Metropolitan Area Network, Passive Optical Local Area Network, Personal Area Network, Storage-Area Network, System-Area Network, Virtual Private Network, Wide Area Network, Wireless Local Area Network.'] = 'Ceann de Líonra Ceantair Champais, Líonra Cloud, Líonra Príobháideach Fiontraíochta, Líonra Ceantair Baile, Líonra Ceantair Áitiúil, Líonra Ceantair Cathrach, Líonra Ceantair Áitiúil éighníomhach Optúil, Líonra Limistéar Pearsanta, Líonra Limistéar Stórála-Area, Líonra Córas-Area, Líonra Príobháideach Fíorúil, Líonra Limistéar Leathan, Líonra Limistéir Gan Sreang Áitiúil.';

$GLOBALS["lang"]['One of Development, Disaster Recovery, Evaluation, Pre-Production, Production, Testing, Training, User Acceptance Testing'] = 'Ceann de na Forbairt, Aisghabháil Tubaiste, Meastóireacht, Réamh-Production, Táirgeadh, Tástáil, Oiliúint, Tástáil Glacadh Úsáideoir';

$GLOBALS["lang"]['One of allocated, delegated, planning, reserved, unallocated, unknown, unmanaged. Defaults to allocated.'] = 'Ceann de na leithdháilte, tarmligthe, pleanáil, forchoimeádta, neamh-leithdháilte, anaithnid, gan a bheith i gceist. Réamhaisnéisí a leithroinnt.';

$GLOBALS["lang"]['One of either <code>active directory</code> or <code>openldap</code>.'] = 'Ceann de cheachtar <code>active directory</code> nó <code>openldap</code>.';

$GLOBALS["lang"]['One of: antivirus, backup, firewall, approved, banned, ignored or other.'] = 'Ceann de na: antivirus, cúltaca, balla dóiteáin, ceadaithe, toirmeasc, neamhaird nó eile.';

$GLOBALS["lang"]['One other item to be careful of - make sure you use the hostname (or fqdn) of your LDAP Server that matches what is in the certificate (not just the LDAP Servers IP address) when creating the LDAP entry in Open-AudIT.'] = 'Mír amháin eile a bheith cúramach - déan cinnte go n-úsáideann tú an hostname (nó fqdn) de do LDAP Freastalaí a oireann cad atá sa deimhniú (ní hamháin an LDAP Freastalaithe IP seoladh) nuair a chruthú ar an iontráil LDAP i Open-AudIT.';

$GLOBALS["lang"]['Online Documentation'] = 'Doiciméadú ar líne';

$GLOBALS["lang"]['Open'] = 'Oscailt Oscailte';

$GLOBALS["lang"]['Open Data'] = 'Sonraí Oscailte';

$GLOBALS["lang"]['Open Source'] = 'Foinse Oscailte';

$GLOBALS["lang"]['Open-AudIT'] = 'Oifig na Gaeilge';

$GLOBALS["lang"]['Open-AudIT Community source code is available on GitHub. You are encouraged to inspect any code you have concerns about, and because it is open source - you are also encouraged to ask us about any issues you have or report any findings. We are always more than happy to accept code contributions, vulnerability reports, or even simple questions. We are here to help.<br><br>The audit scripts themselves (Windows, Linux, MacOS, et al) are deliberately written in readable native shell script (VBScript for Windows, Bash for *nix). You can see exactly what commands are run. You can remove any commands you feel you do not need. You can ask a third party to inspect the code for you and (if you want to) report any findings.<br><br>Open-AudIT Enterprise performs the add-on commercial functions for Open-AudIT Community. It is included as a single compiled file with no external dependencies. Where Enterprise itself performs the function(s), if you are concerned with any issues Firstwave is happy to work through them with you - just ask! Try that with another commercial software vendor!'] = 'Oifig na Gaeilge Tá cód foinse an Chomhphobail ar fáil ar GitHub. Moltar duit iniúchadh a dhéanamh ar aon chód a bhfuil imní ort faoi, agus toisc go bhfuil sé foinse oscailte - moltar duit freisin iarraidh orainn faoi aon saincheisteanna a bhfuil tú nó aon torthaí a thuairisciú. Táimid i gcónaí níos mó ná sásta glacadh le ranníocaíochtaí cód, tuarascálacha leochaileacht, nó fiú ceisteanna simplí. Táimid anseo chun cabhrú.<br/><br/>Tá na scripteanna iniúchóireachta féin (Windows, Linux, MacOS, et al) scríofa d\'aon ghnó i script bhlaosc dúchais inléite (VBScript do Windows, Bash for *nix). Is féidir leat a fheiceáil go díreach cad orduithe atá á reáchtáil. Is féidir leat a bhaint aon orduithe a bhraitheann tú nach gá duit. Is féidir leat iarraidh ar thríú páirtí an cód a iniúchadh duit féin agus (más mian leat) aon torthaí a thuairisciú.<br/><br/>Oifig na Gaeilge Déanann Fiontraíocht na feidhmeanna tráchtála breise do Phobal Oscailte-AudIT. Tá sé san áireamh mar chomhad tiomsaithe amháin gan aon spleáchas seachtrach. Sa chás go gcomhlíonann Fiontraíocht féin an fheidhm nó na feidhmeanna, má tá tú i gceist le haon saincheisteanna Tá an chéad tonn sásta a bheith ag obair trí iad a bhfuil tú - ach a iarraidh! Bain triail as go bhfuil le díoltóir bogearraí tráchtála eile!';

$GLOBALS["lang"]['Open-AudIT Device Selection'] = 'Roghnú Gléas Oscailte';

$GLOBALS["lang"]['Open-AudIT Enterprise has the ability to choose from a pre-defined list of discovery scan options and also to customise individual options per discovery.'] = 'Oifig na Gaeilge Tá Fiontraíocht an cumas a roghnú ó liosta réamhshainithe de roghanna scanadh fionnachtana agus freisin chun roghanna aonair in aghaidh na fionnachtana a shaincheapadh.';

$GLOBALS["lang"]['Open-AudIT Enterprise. High-scale flexible discovery and audit solution for large networks. All the features of Professional plus: Baselines, File Auditing, Cloud Discovery, Rack Management, Configurable Role Based Access Control including Active Directory and LDAP.'] = 'Fiontraíocht Oscailte-AudIT. Réiteach solúbtha agus iniúchóireachta ar scála ard do líonraí móra. Gach na gnéithe de Gairmiúla móide: Baselines, Iniúchóireacht Comhad, Cloud Discovery, Bainistíocht Raca, Rialú Rochtana Inchumraithe Ról Bunaithe lena n-áirítear Eolaire Gníomhach agus LDAP.';

$GLOBALS["lang"]['Open-AudIT Field Name'] = 'Oscailt Ainm Réimse';

$GLOBALS["lang"]['Open-AudIT Licenses'] = 'Ceadúnas Oscailte-AudIT';

$GLOBALS["lang"]['Open-AudIT Options'] = 'Roghanna Oscailte';

$GLOBALS["lang"]['Open-AudIT Professional and Enterprise include Enhanced Reporting features, including time-based, historical, and muti-query based reporting features in multiple formats.'] = 'Áirítear Oscailte-AudIT Gairmiúla agus Fiontraíocht gnéithe Tuairiscithe Feabhsaithe, lena n-áirítear gnéithe tuairiscithe ama-bhunaithe, stairiúil, agus só-cúrsaí bunaithe i bhformáidí éagsúla.';

$GLOBALS["lang"]['Open-AudIT Professional has the ability to choose from a pre-defined list of discovery scan options, per discovery.'] = 'Oifig na Gaeilge Tá Gairmiúla an cumas a roghnú as liosta réamh-shainithe de roghanna scanadh fionnachtana, in aghaidh fionnachtain.';

$GLOBALS["lang"]['Open-AudIT Professional. The world\\'] = 'Gairmiúil Oscailte-AudIT. An domhan \';

$GLOBALS["lang"]['Open-AudIT Professional. The worlds most flexible network discovery and audit solution. All the features of Community plus: Interactive Dashboards, Geographical Maps, Scheduled Time-based or Historical Reporting, Commercial Support.'] = 'Gairmiúil Oscailte-AudIT. An domhan fionnachtana líonra is solúbtha agus réiteach iniúchóireachta. Gnéithe uile an Chomhphobail móide: Dashboards Idirghníomhach, Léarscáileanna Geografacha, Tuairisciú Sceidealta Ambhunaithe nó Stairiúil, Tacaíocht Tráchtála.';

$GLOBALS["lang"]['Open-AudIT can be configured to use LDAP servers (Microsoft Active Directory and/or OpenLDAP) to authenticate and authorize a user and in addition, to create a user account in Open-AudIT using assigned roles and orgs based on LDAP group membership. It can also use'] = 'Amharc ar gach eolas Is féidir TF a chumrú a úsáid freastalaithe LDAP (Microsoft Eolaire Gníomhach agus / nó OpenLDAP) a fhíordheimhniú agus a údarú úsáideora agus ina theannta sin, a chruthú cuntas úsáideora i Open-AudIT ag baint úsáide as róil sannta agus orgs bunaithe ar bhallraíocht grúpa LDAP. Is féidir é a úsáid freisin';

$GLOBALS["lang"]['Open-AudIT can be run on your server in your data center. It does not need access to the internet at all. Even the installation on Linux where we use the distribution package manager for our prerequisites can be negated by you using an in-house and security team-approved package repository.<br><br>Open-AudIT does not store any of your data in the cloud. Even licensing information can be provided without having to access the internet from the Open-AudIT server.<br><br>Sure, it is easier to allow it to access the internet to download packages (including security fixes) for your distribution, but that is up to you and your security policies. Open-AudIT does not need the internet.'] = 'Amharc ar gach eolas Is féidir TF a reáchtáil ar do fhreastalaí i d\'ionad sonraí. Ní gá rochtain a fháil ar an idirlíon ar chor ar bith. Fiú an tsuiteáil ar Linux áit a n-úsáideann muid an bainisteoir pacáiste dáileacháin dár réamhriachtanais is féidir a negated ag baint úsáide as tú ag úsáid stór pacáiste in-tí agus slándála foirne-cheadaithe.<br/><br/>Amharc ar gach eolas Ní IT stóráil aon cheann de do chuid sonraí sa scamall. Is féidir fiú faisnéis cheadúnúcháin a chur ar fáil gan rochtain a fháil ar an idirlíon ón bhfreastalaí Open-AudIT.<br/><br/>Cinnte, tá sé níos éasca a ligean dó rochtain a fháil ar an idirlíon chun pacáistí a íoslódáil (lena n-áirítear daingneáin slándála) do dháileadh, ach go bhfuil suas chun tú féin agus do bheartais slándála. Ní gá Open-AudIT an idirlíon.';

$GLOBALS["lang"]['Open-AudIT can download, parse and use NIST CVE Vulnerability reports.'] = 'Is féidir le Open-AudIT tuarascálacha Vulnerability NIST a íoslódáil, a pharsáil agus a úsáid.';

$GLOBALS["lang"]['Open-AudIT can show in one of several languages. How you can improve this?'] = 'Amharc ar gach eolas Is féidir TF a thaispeáint i gceann de roinnt teangacha. Conas is féidir leat é seo a fheabhsú?';

$GLOBALS["lang"]['Open-AudIT can store information in additional fields that are associated with each device.'] = 'Amharc ar gach eolas Is féidir TF faisnéis a stóráil i réimsí breise a bhaineann le gach feiste.';

$GLOBALS["lang"]['Open-AudIT can use Microsoft Entra (previously known as Microsoft Azure Active Directory) as an authentication method. This means your user in Open-AudIT can click the Logon using Entra button on the logon page and use their Entra credentials to logon. That user will need to already exist within Open-AudIT (and be assigned'] = 'Is féidir le Open-AudIT Microsoft Entra (ar a dtugtar Microsoft Eolaire Gníomhach Azure) a úsáid mar mhodh fíordheimhnithe. Ciallaíonn sé seo gur féidir le d\'úsáideoir i Open-AudIT cliceáil ar an Lógó ag baint úsáide as cnaipe Entra ar an leathanach logon agus a n-dintiúir Entra a úsáid chun lógón. Beidh an t-úsáideoir a bheith ann cheana féin laistigh Open-AudIT (agus a shannadh';

$GLOBALS["lang"]['Open-AudIT can use OKTA as an authentication method. This means your user in Open-AudIT can click the Logon using OKTA button on the logon page and use their OKTA credentials to logon. That user will need to already exist within Open-AudIT (and be assigned Roles and Orgs), but will not need to remember a separate set of logon credentials.'] = 'Is féidir le Open-AudIT OKTA a úsáid mar mhodh fíordheimhnithe. Ciallaíonn sé seo gur féidir le d\'úsáideoir i Open-AudIT cliceáil ar an Lógó ag baint úsáide as OKTA cnaipe ar an leathanach logon agus a n- dintiúir OKTA a úsáid chun lógón. Beidh an t-úsáideoir a bheith ann cheana féin laistigh Open-AudIT (agus a shannadh Róil agus Orgs), ach ní bheidh gá a mheabhrú sraith ar leith de dintiúir logon.';

$GLOBALS["lang"]['Open-AudIT comes with many queries inbuilt. If you require a specific query and none of the pre-packaged queries fit your needs, it is quite easy to create a new one and load it into Open-AudIT for running.'] = 'Tagann Open-AudIT le go leor ceisteanna inbuilt. Má éilíonn tú ceist ar leith agus aon cheann de na ceisteanna réamhphacáistithe oiriúnach do riachtanais, tá sé éasca go leor a chruthú ceann nua agus é a luchtú isteach Open-AudIT do reáchtáil.';

$GLOBALS["lang"]['Open-AudIT has a JSON Restful API to be used both in the web interface and via JSON requests.'] = 'Open-AudIT Tá JSON API Restful a bheidh le húsáid araon sa chomhéadan gréasáin agus trí iarrataí JSON.';

$GLOBALS["lang"]['Open-AudIT has a granular permissions system to determine what a user within Open-AudIT can do, and the items he can do it to. Open-AudIT can be entirely self-contained, or use Active Directory or OpenLDAP for authentication and/or authorization.<br><br>It is entirely up to the administrator of Open-AudIT how they would like the Role Based Access Control to work.'] = 'Amharc ar gach eolas Tá córas ceadanna gráinneach TF a chinneadh cad is féidir le úsáideoir laistigh Open-AudIT a dhéanamh, agus na míreanna is féidir leis é a dhéanamh. Is féidir Open-AudIT a bheith go hiomlán féin-atá, nó a úsáid Eolaire Gníomhach nó OpenLDAP le haghaidh fíordheimhnithe agus / nó údarú.<br/><br/>Tá sé go hiomlán suas go dtí an riarthóir Open-AudIT conas ba mhaith leo an Ról Bunaithe Rialú Rochtana a bheith ag obair.';

$GLOBALS["lang"]['Open-AudIT has a powerful change detection engine. Any device attributes that are added, removed or changed will be detected and stored. These changes can be reported upon and the relevant data confirmed as to what was expected from your company change and release process.<br><br>When a device is audited, attributes are divided into sections which correspond to tables in the database.<br><br>Each device (computer, router, printer, et al) has an entry in the <code>devices</code> table. Each entry in the devices table has an <code>id</code> column. This value is unique - it is an auto-incrementing id.<br><br>When the audit result is processed, each item in each section has its audit result compared to what is in the database.<br><br>For each section, if the key columns (see below table) contain the identical values, it is considered already installed and has its <code>last_seen</code> attribute updated. No change_log entry is created.<br><br>If any of the key columns do not match, it is considered a new attribute and is inserted. A <code>change_log</code> entry is created if the device had other attributes already present in the table.<br><br>At the completion of the audit processing, any database items that have not been updated (or inserted) are considered to not be present. The <code>current</code> attribute for this item is set to <i>n</i> and a change_log entry is generated.<br><br>So, we can determine if something is currently installed - the current column is <i>y</i>.<br><br>We can determine when something was initially detected - the <i>first_seen</i>.<br><br>We can determine if something was installed after the initial audit - first seen will be different in the component and device tables.<br><br>We can determine if something is not currently installed, but previously was - current = <i>n</i>.<br><br>We can determine the last time we detected an item - last_seen.<br><br>At any given point, we can determine what was on a system - by using the audit_log table and selecting the relevant components based on first_seen and last_seen.<br><br>Each section and its matching key columns are below.<br><br>NOTE - There are some exceptions as detailed below.<br><br>*1 - For network cards, if the computer is a VMware Esx machine it also uses the net_index and connection columns.<br><br>*2 - For partitions, f the computer is an AIX machine, we use the partition name.'] = 'Amharc ar gach eolas Tá TF inneall braite athrú cumhachtach. Aon tréithe gléas a chuirtear leis, a bhaint nó a athrú a bhrath agus a stóráil. Is féidir na hathruithe seo a thuairisciú agus na sonraí ábhartha a dhaingniú maidir leis an méid a bhí ag súil ó do phróiseas athraithe agus scaoilte cuideachta.<br/><br/>Nuair a dhéantar iniúchadh ar fheiste, déantar tréithe a roinnt ina ranna a fhreagraíonn do tháblaí sa bhunachar sonraí.<br/><br/>Tá gach gléas (ríomhaire, ródaire, printéir, et al) iontráil sa <code>devices</code> tábla. Tá gach iontráil sa tábla feistí <code>id</code> colún. Tá an luach uathúil - tá sé id uathoibríoch-incriminteach.<br/><br/>Nuair a dhéantar an toradh iniúchóireachta a phróiseáil, tá toradh iniúchóireachta ag gach mír i ngach roinn i gcomparáid leis an méid atá sa bhunachar sonraí.<br/><br/>I gcás gach roinn, má tá na luachanna comhionanna sna colúin lárnacha (féach thíos), meastar go bhfuil sé suiteáilte cheana féin agus go bhfuil a <code>last_seen</code> tréith cothrom le dáta. Níl aon iontráil Change_log cruthaithe.<br/><br/>Más rud é nach bhfuil aon cheann de na colúin eochair mheaitseáil, meastar gur tréith nua é agus cuirtear isteach é. Amharc ar gach eolas <code>change_log</code> Tá iontráil a cruthaíodh má bhí an gléas tréithe eile i láthair cheana féin sa tábla.<br/><br/>Nuair a bheidh an phróiseáil iniúchóireachta críochnaithe, meastar nach bhfuil aon míreanna bunachar sonraí nár tugadh cothrom le dáta (nó a cuireadh isteach) i láthair. An bhfuil <code>current</code> tréith don mhír seo leagtha síos <i>n</i> agus tá iontráil Change_log ghintear.<br/><br/>Mar sin, is féidir linn a chinneadh an bhfuil rud éigin suiteáilte faoi láthair - tá an colún reatha <i>y</i>.<br/><br/>Is féidir linn a chinneadh nuair a braitheadh rud éigin ar dtús - an <i>An chéad uair</i>.<br/><br/>Is féidir linn a chinneadh má suiteáladh rud éigin tar éis an iniúchta tosaigh - beidh an chéad le feiceáil difriúil sna táblaí comhpháirte agus gléas.<br/><br/>Is féidir linn a chinneadh mura bhfuil rud éigin suiteáilte faoi láthair, ach bhí roimhe seo - reatha = <i>n</i>.<br/><br/>Is féidir linn a chinneadh an uair dheireanach a bhraitear againn mír - last_seen.<br/><br/>Ag aon phointe áirithe, is féidir linn a chinneadh cad a bhí ar chóras - ag baint úsáide as an tábla audit_log agus a roghnú na comhpháirteanna ábhartha bunaithe ar first_seen agus last_seen.<br/><br/>Tá gach roinn agus a príomhcholúin meaitseáil thíos.<br/><br/>NÓTA - Tá roinnt eisceachtaí mar atá sonraithe thíos.<br/><br/>* 1 - I gcás cártaí líonra, má tá an ríomhaire meaisín VMware Esx úsáideann sé freisin an net_index agus colúin nasc.<br/><br/>* 2 - Do dheighiltí, f Is é an ríomhaire meaisín AIX, úsáidimid an t-ainm laindéal.';

$GLOBALS["lang"]['Open-AudIT is a program designed to track and report on your IT and related assets details and configuration. Open-AudIT can tell <i>What is On Your Network?</i>, how it is configured and if there have been any changes. Open-AudIT delivers a sleek, flexible and easy to use platform for device discovery, IT auditing and inventory management automation straight out of the box.'] = 'Is clár é Open-AudIT atá deartha chun do shonraí agus do chumraíocht a rianú agus tuairisc a thabhairt orthu. Is féidir le Open-AudIT insint <i>Cad é ar Do Líonra?</i>, conas atá sé cumraithe agus má bhí aon athruithe. Soláthraíonn Open-AudIT ardán sleek, solúbtha agus éasca le húsáid le haghaidh fionnachtain gléas, iniúchóireacht TF agus uathoibriú bainistíochta fardail díreach amach as an mbosca.';

$GLOBALS["lang"]['Open-AudIT makes it easy to edit the attributes of multiple devices at once.'] = 'Amharc ar gach eolas Déanann TF sé éasca a chur in eagar na tréithe feistí il ag an am céanna.';

$GLOBALS["lang"]['Open-AudIT needs specific directory permissions to be able to create files, upload results, etc. Please set as below.'] = 'Amharc ar gach eolas Ní mór TF ceadanna eolaire ar leith a bheith in ann a chruthú comhaid, torthaí a uaslódáil, etc. Le do thoil leagtha mar atá thíos.';

$GLOBALS["lang"]['Open-AudIT provides many built-in queries and makes it simple to create your own.'] = 'Soláthraíonn Open-AudIT go leor ceisteanna tógtha isteach agus déanann sé simplí a chruthú do chuid féin.';

$GLOBALS["lang"]['Open-AudIT ships with inbuilt roles for admin, org_admin and user.<br><br>Generally, a user who is an administrator of the Open-AudIT application itself should have admin and possible org_admin roles.<br><br>A user can have multiple roles. The permission will be applied at the most permissive level - IE, if a user has the roles of user and org_admin, they will be able to create locations because org_admin grants this permission, even though the user role does not.<br><br>The admin role allows access to collections such as configuration, database, groups, ldap servers, logs, queries and roles. Global items that affect the entire application.<br><br>The org_admin role usually allows create, read, update and delete actions for any collection that contains the org_id column. Virtually all data except some of the collections mentioned above will contain an <code>org_id</code> column.<br><br>The user role generally allows read only access to all items with an org_id column.'] = 'Amharc ar gach eolas longa TF le róil inbuilt do admin, org_admin agus úsáideoir.<br/><br/>Go ginearálta, ba cheart go mbeadh ról riaracháin agus féideartha nóg_admin úsáideoir atá ina riarthóir ar an iarratas Open-AudIT féin.<br/><br/>Is féidir le húsáideoir a bhfuil róil éagsúla. Cuirfear an cead i bhfeidhm ag an leibhéal is tarraingtí - IE, má tá ról úsáideora agus org_admin ag úsáideoir, beidh siad in ann suímh a chruthú toisc go ndeonaíonn org_admin an cead seo, cé nach ndéanann an ról úsáideora.<br/><br/>Ceadaíonn an ról admin rochtain ar bhailiúcháin ar nós chumraíocht, bunachar sonraí, grúpaí, freastalaithe Ldap, logs, ceisteanna agus róil. Míreanna domhanda a théann i bhfeidhm ar an iarratas ar fad.<br/><br/>De ghnáth, is féidir leis an ról org_admin gníomhartha a chruthú, a léamh, a nuashonrú agus a scriosadh le haghaidh aon bhailiúchán ina bhfuil an colún org_id. Beidh beagnach gach sonraí ach amháin roinnt de na bailiúcháin a luaitear thuas go bhfuil <code>org_id</code> colún.<br/><br/>Is féidir leis an ról úsáideora a léamh go ginearálta ach rochtain ar gach mír le colún org_id.';

$GLOBALS["lang"]['Open-AudIT ships with inbuilt roles for admin, org_admin and user.<br><br>Generally, a user who is an administrator of the Open-AudIT application itself should have admin and possible org_admin roles.<br><br>A user can have multiple roles. The permission will be applied at the most permissive level - IE, if a user has the roles of user and org_admin, they will be able to create locations because org_admin grants this permission, even though the user role does not.<br><br>The admin role allows access to collections such as configuration, database, groups, ldap servers, logs, queries and roles. Global items that affect the entire application.<br><br>The org_admin role usually allows create, read, update and delete actions for any collection that contains the org_id column. Virtually all data except some of the collections mentioned above will contain an org_id column.<br><br>The user role generally allows read only access to all items with an org_id column.'] = 'Amharc ar gach eolas longa TF le róil inbuilt do admin, org_admin agus úsáideoir.<br/><br/>Go ginearálta, ba cheart go mbeadh ról riaracháin agus féideartha nóg_admin úsáideoir atá ina riarthóir ar an iarratas Open-AudIT féin.<br/><br/>Is féidir le húsáideoir a bhfuil róil éagsúla. Cuirfear an cead i bhfeidhm ag an leibhéal is tarraingtí - IE, má tá ról úsáideora agus org_admin ag úsáideoir, beidh siad in ann suímh a chruthú toisc go ndeonaíonn org_admin an cead seo, cé nach ndéanann an ról úsáideora.<br/><br/>Ceadaíonn an ról admin rochtain ar bhailiúcháin ar nós chumraíocht, bunachar sonraí, grúpaí, freastalaithe Ldap, logs, ceisteanna agus róil. Míreanna domhanda a théann i bhfeidhm ar an iarratas ar fad.<br/><br/>De ghnáth, is féidir leis an ról org_admin gníomhartha a chruthú, a léamh, a nuashonrú agus a scriosadh le haghaidh aon bhailiúchán ina bhfuil an colún org_id. Beidh beagnach gach sonraí ach amháin roinnt de na bailiúcháin a luaitear thuas colún org_id.<br/><br/>Is féidir leis an ról úsáideora a léamh go ginearálta ach rochtain ar gach mír le colún org_id.';

$GLOBALS["lang"]['Open-AudIT ships with several pre-configured Dashboards. If you are a Professional user, you can select between two of these and set it as your default page when you logon. If you are an Enterprise user, you can not only select between the five preconfigured Dashboards, but you also have the ability to create your own.'] = 'Longa oscailte-AudIT le roinnt Dashboards réamh-chumraithe. Má tá tú ag úsáideoir Gairmiúla, is féidir leat a roghnú idir dhá cheann de na agus é a leagan mar do leathanach réamhshocraithe nuair a logon tú. Má tá tú ag úsáideoir Fiontraíochta, ní féidir leat a roghnú ach idir na cúig Dashboards preconfigured, ach tá tú freisin ar an gcumas a chruthú do chuid féin.';

$GLOBALS["lang"]['Open-AudIT should be installed on 64bit Windows <strong>Server</strong> systems only. Windows 10 and Windows 11 are <strong>not</strong> supported.'] = 'Ba chóir Open-AudIT a shuiteáil ar Windows 64bit <strong>Freastalaí Freastalaí</strong> córais amháin. Windows 10 agus Windows 11 iad <strong>bláthanna cumhra: aon cumhráin</strong> tacaíocht.';

$GLOBALS["lang"]['Open-AudIT uses Nmap in its Discovery function. Nmap probes devices for open ports. Devices ideally should respond with open for working ports. Devices often do not respond with this. The varying responses are detailed below.'] = 'Úsáideann Open-AudIT Nmap ina fheidhm Discovery. Nmap feistí probes do chalafoirt oscailte. Ba chóir go bhfreagródh feistí go hidéalach le calafoirt oibre. Is minic nach bhfreagraíonn feistí leis seo. Tá na freagraí éagsúla mionsonraithe thíos.';

$GLOBALS["lang"]['Open-AudIT uses Nmap in its Discovery function. Without Nmap, Open-AudIT will not function correctly. Every Open-AudIT install assumes Nmap is installed and will also test for it on the Discovery web pages. More information about Open-AudIT and Nmap is available here'] = 'Úsáideann Open-AudIT Nmap ina fheidhm Discovery. Gan léarscáil, ní fheidhmeoidh Open-AudIT i gceart. Glacann gach shuiteáil Open-AudIT Nmap suiteáilte agus beidh tástáil freisin chun é ar na leathanaigh ghréasáin Discovery. Tá tuilleadh eolais faoi Open-AudIT agus Nmap ar fáil anseo';

$GLOBALS["lang"]['Open-AudIT uses Nmap in its Discovery function. Without Nmap, Open-AudIT will not function correctly. Every Open-AudIT install assumes Nmap is installed and will test for it on the Discovery web pages.'] = 'Úsáideann Open-AudIT Nmap ina fheidhm Discovery. Gan léarscáil, ní fheidhmeoidh Open-AudIT i gceart. Glacann gach shuiteáil Open-AudIT Nmap suiteáilte agus beidh tástáil chun é ar na leathanaigh ghréasáin Discovery.';

$GLOBALS["lang"]['Open-AudIT uses credentials to access your devices. These are encrypted and stored, just as you would expect.'] = 'Amharc ar gach eolas Úsáideann TF dintiúir chun rochtain a fháil ar do feistí. Tá na criptithe agus a stóráil, díreach mar a bheadh tú ag súil.';

$GLOBALS["lang"]['Open-AudIT was written by an English speaking Australian. Everything in the application uses English wording. However Open-AudIT has always supported multiple languages for display. These translations are not always correct, because the developers do not natively speak the language of every translation offered.<br><br>What can you do if something is not correct in the translation?'] = 'Scríobhadh Open-AudIT ag na hAstráile Béarla ag labhairt. Úsáideann gach rud san iarratas foclaíocht Béarla. Mar sin féin Open-AudIT tacaíocht i gcónaí teangacha éagsúla le taispeáint. Níl na haistriúcháin ceart i gcónaí, toisc nach bhfuil na forbróirí labhairt ó dhúchas ar an teanga de gach aistriúchán ar fáil.<br/><br/>Cad is féidir leat a dhéanamh mura bhfuil rud éigin ceart san aistriúchán?';

$GLOBALS["lang"]['OpenLDAP'] = 'Amharc ar gach eolas';

$GLOBALS["lang"]['OpenScap is Installed'] = 'Tá OpenScap suiteáilte';

$GLOBALS["lang"]['Opening a Support Ticket?'] = 'Oscailt Ticéad Tacaíochta?';

$GLOBALS["lang"]['openldap_user_dn'] = 'Oscailte Dn Úsáideoir';

$GLOBALS["lang"]['Openldap User Dn'] = 'Oscailte Dn Úsáideoir';

$GLOBALS["lang"]['openldap_user_membership_attribute'] = 'Openldap Úsáideoir Ballraíocht';

$GLOBALS["lang"]['Openldap User Membership Attribute'] = 'Openldap Úsáideoir Ballraíocht';

$GLOBALS["lang"]['open|filtered'] = 'Openfiltered';

$GLOBALS["lang"]['Open|filtered'] = 'Openfiltered';

$GLOBALS["lang"]['Operating System'] = 'Córas Oibriúcháin';

$GLOBALS["lang"]['Operating System Family Contains'] = 'Córas Oibriúcháin Tá Teaghlaigh';

$GLOBALS["lang"]['Operating Systems'] = 'Córais stiúrtha';

$GLOBALS["lang"]['Operators'] = 'OibritheoirÃ';

$GLOBALS["lang"]['optical'] = 'Oifig na Gaeilge';

$GLOBALS["lang"]['Optical'] = 'Oifig na Gaeilge';

$GLOBALS["lang"]['Optimized'] = 'Optamaithe';

$GLOBALS["lang"]['Option #1 - Change the data'] = 'Rogha #1 - Athraigh na sonraí';

$GLOBALS["lang"]['Option #2 - Change the translation file'] = 'Rogha #2 - Athraigh an comhad aistriúcháin';

$GLOBALS["lang"]['Optional Agent Based Auditing'] = 'Gníomhaire Roghnach Bunaithe Iniúchta';

$GLOBALS["lang"]['Optional version as audited by Open-AudIT. Use the percent sign % as a wildcard.'] = 'Leagan Roghnach mar iniúchta ag Open-AudIT. Bain úsáid as an % comhartha faoin gcéad mar chárta fiáin.';

$GLOBALS["lang"]['options'] = 'Roghanna eile';

$GLOBALS["lang"]['Options'] = 'Roghanna eile';

$GLOBALS["lang"]['Options, options, options'] = 'Roghanna, roghanna, roghanna';

$GLOBALS["lang"]['Or'] = 'Nó';

$GLOBALS["lang"]['Or select from the below fields.'] = 'Nó roghnaigh ó na réimsí thíos.';

$GLOBALS["lang"]['org_descendants'] = 'Díroghnaigh gach rud';

$GLOBALS["lang"]['Org Descendants'] = 'Díroghnaigh gach rud';

$GLOBALS["lang"]['org_id'] = 'Org ID';

$GLOBALS["lang"]['Org ID'] = 'Org ID';

$GLOBALS["lang"]['Organisation'] = 'Amharc ar gach eolas';

$GLOBALS["lang"]['organisation'] = 'Amharc ar gach eolas';

$GLOBALS["lang"]['Organisation Descendants'] = 'Descendants Eagraíocht';

$GLOBALS["lang"]['Organisations'] = 'Amharc ar gach eolas';

$GLOBALS["lang"]['Organisations can extend and enhance the level of detail that is stored against every discovered device using custom fields and the open core allows for easy integration into CMDB, event management and ticketing systems.'] = 'Is féidir le heagraíochtaí leathnú agus feabhas a chur ar an leibhéal sonraí atá stóráilte i gcoinne gach gléas aimsithe ag baint úsáide as réimsí saincheaptha agus ceadaíonn an croí oscailte do chomhtháthú éasca isteach CMDB, bainistíocht ócáid agus córais ticéadaithe.';

$GLOBALS["lang"]['orgs'] = 'Seirbhís do Chustaiméirí';

$GLOBALS["lang"]['Orgs'] = 'Seirbhís do Chustaiméirí';

$GLOBALS["lang"]['Orgs Name'] = 'Ainm an mhéara';

$GLOBALS["lang"]['Orgs in Open-AudIT are a key item. A user has a primary Org as well as a list of Orgs they can access. A user combines this with a list of assigned roles that define what actions they can take on items assigned to the Orgs they have access to. The combination of a users <i>orgs</i> and <i>roles</i> define what they can and cannot do within Open-AudIT.<br><br>Most items in Open-AudIT are assigned to an Org. Devices, Locations, Networks, etc, etc.<br><br>Orgs can have child Orgs. Think of an organisational chart (tree) structure. If a user has access to a specific Org, most of the time (not always) they also have access to that Orgs descendants.'] = 'Is mír thábhachtach iad Orgs in Open-AudIT. Tá úsáideoir Org bunscoile chomh maith le liosta de Orgs féidir leo rochtain. Comhcheanglaíonn úsáideoir seo le liosta de na róil a shanntar a shainiú cad iad na gníomhartha is féidir leo a ghlacadh ar míreanna a shanntar do na Orgs bhfuil rochtain acu orthu. An meascán na n-úsáideoirí <i>soilse loingseoireachta E</i> agus <i>Róil</i> shainiú cad is féidir leo agus ní féidir a dhéanamh laistigh Open-AudIT.<br/><br/>An chuid is mó míreanna i Open-AudIT sannta do Org. Gléasanna, Suíomhanna, Líonraí, etc, etc.<br/><br/>Is féidir go mbeadh Orgs leanbh. Smaoinigh ar chairt eagraíochtúil (crann) struchtúr. Má tá rochtain ag úsáideoir ar Org ar leith, an chuid is mó den am (ní i gcónaí) tá rochtain acu freisin ar sliocht Orgs.';

$GLOBALS["lang"]['orientation'] = 'Treoshuíomh';

$GLOBALS["lang"]['Orientation'] = 'Treoshuíomh';

$GLOBALS["lang"]['os'] = 'Os cionn';

$GLOBALS["lang"]['Os'] = 'Os cionn';

$GLOBALS["lang"]['os_arch'] = 'Seans go mbeidh ort:';

$GLOBALS["lang"]['Os Arch'] = 'Seans go mbeidh ort:';

$GLOBALS["lang"]['os_bit'] = 'Os cionn';

$GLOBALS["lang"]['Os Bit'] = 'Os cionn';

$GLOBALS["lang"]['os_cpe'] = 'Os a choinne';

$GLOBALS["lang"]['Os Cpe'] = 'Os a choinne';

$GLOBALS["lang"]['os_display_version'] = 'Os Taispeáin Leagan';

$GLOBALS["lang"]['Os Display Version'] = 'Os Taispeáin Leagan';

$GLOBALS["lang"]['os_family'] = 'Os cionn Teaghlaigh';

$GLOBALS["lang"]['Os Family'] = 'Os cionn Teaghlaigh';

$GLOBALS["lang"]['os_group'] = 'Grúpa Os cionn';

$GLOBALS["lang"]['Os Group'] = 'Grúpa Os cionn';

$GLOBALS["lang"]['os_installation_date'] = 'Dáta Suiteála Os';

$GLOBALS["lang"]['Os Installation Date'] = 'Dáta Suiteála Os';

$GLOBALS["lang"]['os_licence_expiry'] = 'Ceadúnas Oisrí';

$GLOBALS["lang"]['Os Licence Expiry'] = 'Ceadúnas Oisrí';

$GLOBALS["lang"]['os_license'] = 'Ceadúnas os cionn';

$GLOBALS["lang"]['Os License'] = 'Ceadúnas os cionn';

$GLOBALS["lang"]['os_license_code'] = 'Os cionn Cód Ceadúnas';

$GLOBALS["lang"]['Os License Code'] = 'Os cionn Cód Ceadúnas';

$GLOBALS["lang"]['os_license_mode'] = 'Os Mód Ceadúnas';

$GLOBALS["lang"]['Os License Mode'] = 'Os Mód Ceadúnas';

$GLOBALS["lang"]['os_license_type'] = 'Os Cineál Ceadúnas';

$GLOBALS["lang"]['Os License Type'] = 'Os Cineál Ceadúnas';

$GLOBALS["lang"]['os_name'] = 'Ainm an Choláiste';

$GLOBALS["lang"]['Os Name'] = 'Ainm an Choláiste';

$GLOBALS["lang"]['os_version'] = 'Os cionn Leagan';

$GLOBALS["lang"]['Os Version'] = 'Os cionn Leagan';

$GLOBALS["lang"]['Other'] = 'Eile eile (1)';

$GLOBALS["lang"]['Other than that restriction, you are free to select attributes as required. It is a good idea to use the menu'] = 'Seachas an srian sin, tá tú saor chun tréithe a roghnú mar is gá. Is smaoineamh maith é an roghchlár a úsáid';

$GLOBALS["lang"]['Others'] = 'Daoine eile';

$GLOBALS["lang"]['Our default Integration also enables a discovery on any externally supplied devices. So we ship a default discovery for the Default Integration out of the box. These use the default matching rules, but also enable matching on IP address.'] = 'Cuireann ár Comhtháthú réamhshocraithe ar chumas fionnachtain ar aon feistí a sholáthraítear go seachtrach. Mar sin, long againn fionnachtain réamhshocraithe le haghaidh an Comhtháthú Réamhshocrú as an mbosca. Úsáid na rialacha meaitseála réamhshocraithe, ach freisin ar chumas meaitseáil ar seoladh IP.';

$GLOBALS["lang"]['Our examples will use the <i>type</i> column.'] = 'Úsáidfidh ár samplaí <i>cineál gas: in airde</i> colún.';

$GLOBALS["lang"]['Our framework uploads files here for processing, then deletes them. Think submitted audit results, etc.'] = 'Ár creat uaslódáil comhaid anseo le haghaidh próiseála, ansin iad a scriosadh. Smaoinigh isteach torthaí iniúchóireachta, etc.';

$GLOBALS["lang"]['Our goal with the initial integrations release was specifically for NMIS to Open-AudIT integration to <i>just work</i>. If you are using the programs on Linux, you can literally click a single button to execute the integration. Nothing more is required. Having said that, the integration itself is extremely configurable - so if something is not to your preference, it can easily be changed.'] = 'Ár sprioc leis an scaoileadh comhtháthú tosaigh a bhí go sonrach le haghaidh NMIS chun comhtháthú Oscailte-AudIT a <i>obair amháin</i>. Má tá tú ag baint úsáide as na cláir ar Linux, is féidir leat cliceáil literally cnaipe amháin a fhorghníomhú an comhtháthú. Ní gá aon ní níos mó. Ag rá go bhfuil an comhtháthú féin thar a bheith configurable - mar sin más rud é nach bhfuil rud éigin le do rogha, is féidir é a athrú go héasca.';

$GLOBALS["lang"]['Our new feature called Vulnerabilities gives you the ability to quickly determine if any devices are affected by any CVE (Common Vulnerability Exposure) - but how?<br><br>FirstWave constantly consumes the output from the Nist NVD feed. We take this and apply a few restrictions, then extract the affected programs and build a SQL query for reporting. Your Open-AudIT instance reaches out to FirstWave and requests any new vulnerabilities on a regular basis. When it receives a new vulnerability record, it is run against the database and the result stored. Each time a device is processed, all matching vulnerabilities are again executed and the result stored. This means when viewing a vulnerability list, we do not need to calculate all affected devices - we already have the result. When you view an individual vulnerability record, we do indeed recalculate the result for this singular vulnerability.<br><br>So, you are always up to date!<br><br>In addition to this, we also calculate the result of all vulnerabilities for all devices daily (usually at a quiet time, say 2am).<br><br>In your instance of Open-AudIT, we allow you to select which vendors you care about. i.e. there is no use retrieving vulnerability records from a vendor whose software you do not use or have installed. By default, our vendor list is Adobe, Apple, Cisco, Google, Microsoft, Mozilla, and Redhat.<br><br>This all sounds very simple, but behind the scenes a <b>lot</b> is going on. For instance, the CVE record contains a list of affected software - but those software names do not match what we receive when we audit a computer. A good example is Apache. Typically, a CVE record will say the affected software is http_server. In reality, this appears as apache2 (Ubuntu), httpd (Redhat), Apache HTTP Server (Windows) - and others. So, we have to first determine what is the actual name of the program we receive when we ask a computer, and there may be multiple names. After that we must parse the CVE record and create a matching SQL statement. Allowing for multiple program names as above, and multiple versions, version ranges, and even multiple different pieces of software (an example is Thunderbird and Firefox in a single CVE). And your instance of Open-AudIT must take this and apply Orgs filtering as well. And that is just a single CVE. What about determining which CVEs you have and do not have? What about adding a vendor to the list later? So many things to consider!<br><br>As well as the usual reporting, we also have a few new widgets available for Dashboards, based on Vulnerabilities data.'] = 'Tugann ár gné nua ar a dtugtar leochaileachtaí duit an cumas a chinneadh go tapa má tá aon feistí tionchar ag aon CVE (Cumarsáid leochaileacht Comónta) - ach conas?<br/><br/>FirstWave itheann i gcónaí an t-aschur ón Nist beatha NVD. Glacann muid seo agus cuirimid roinnt srianta i bhfeidhm, ansin na cláir atá buailte a bhaint agus ceist SQL a thógáil le haghaidh tuairisciú. Sroicheann do chás Open-AudIT amach go FirstWave agus iarrann aon leochaileachtaí nua ar bhonn rialta. Nuair a fhaigheann sé taifead leochaileachta nua, tá sé ar siúl i gcoinne an bhunachar sonraí agus an toradh a stóráil. Gach uair a dhéantar feiste a phróiseáil, déantar gach leochaileachtaí comhoiriúnacha a fhorghníomhú arís agus an toradh a stóráiltear. Ciallaíonn sé seo nuair a bhíonn liosta leochaileachta á bhreathnú, ní gá dúinn gach feiste atá buailte a ríomh - tá an toradh againn cheana féin. Nuair a fhéachann tú ar thaifead leochaileachta aonair, déanaimid an toradh a athríomh go deimhin don leochaileacht uatha seo.<br/><br/>Mar sin, tá tú i gcónaí suas chun dáta!<br/><br/>Chomh maith leis sin, ríomhfaimid toradh gach leochaileachta do gach feiste go laethúil (de ghnáth ag am ciúin, a rá 2am).<br/><br/>I do chás de Open-AudIT, ligimid duit a roghnú a díoltóirí tú cúram faoi. i.e. níl aon úsáid a bhaint as taifid leochaileachta aisghabháil ó díoltóir a bhfuil a bogearraí nach bhfuil tú ag úsáid nó a bhfuil suiteáilte. De réir réamhshocraithe, is é ár liosta díoltóir Adobe, Apple, Cisco, Google, Microsoft, Mozilla, agus Redhat.<br/><br/>Fuaimeanna seo go léir an-simplí, ach taobh thiar de na radhairc a <b>crann tor</b> ag dul ar aghaidh. Mar shampla, tá an taifead CVE liosta de na bogearraí difear - ach nach bhfuil na hainmneacha bogearraí mheaitseáil cad a fhaigheann muid nuair a iniúchadh againn ar ríomhaire. Is sampla maith Apache. De ghnáth, beidh taifead CVE rá go bhfuil na bogearraí difear http_server. I ndáiríre, is cosúil seo mar apache2 (Ubuntu), httpd (Redhat), Apache HTTP Server (Windows) - agus daoine eile. Mar sin, ní mór dúinn a chinneadh ar dtús cad é an t-ainm iarbhír an chláir a fhaighimid nuair a iarraimid ar ríomhaire, agus d\'fhéadfadh go mbeadh ainmneacha il. Tar éis sin ní mór dúinn parse an taifead CVE agus ráiteas SQL meaitseáil chruthú. Ag ligean d\'ainmneacha clár éagsúla mar atá thuas, agus leaganacha éagsúla, raonta leagan, agus fiú píosaí éagsúla de bhogearraí (Is sampla Thunderbird agus Firefox i CVE amháin). Agus ní mór do do shampla Open-AudIT a ghlacadh seo agus Orgs scagadh a chur i bhfeidhm chomh maith. Agus is é sin ach CVE amháin. Cad mar gheall ar a chinneadh a bhfuil tú agus nach bhfuil? Cad mar gheall ar a chur le díoltóir ar an liosta níos déanaí? Mar sin, go leor rudaí a mheas!<br/><br/>Chomh maith leis an tuairisciú is gnách, ní mór dúinn freisin roinnt giuirléidí nua ar fáil do Dashboards, bunaithe ar shonraí Vulnerability.';

$GLOBALS["lang"]['Our timeout for a SSH response'] = 'Ár timeout le haghaidh freagra SSH';

$GLOBALS["lang"]['Our timeout for a WMI response'] = 'Ár timeout le haghaidh freagra WMI';

$GLOBALS["lang"]['Our timeout for an SNMP response'] = 'Ár timeout le haghaidh freagra SNMP';

$GLOBALS["lang"]['Our timeout for an audit script response'] = 'Ár timeout le haghaidh freagra script iniúchóireachta';

$GLOBALS["lang"]['output'] = 'Aschur';

$GLOBALS["lang"]['Output'] = 'Aschur';

$GLOBALS["lang"]['outputs'] = 'Aschur';

$GLOBALS["lang"]['Outputs'] = 'Aschur';

$GLOBALS["lang"]['Overall severity score (0–10).'] = 'Scór déine foriomlán (0–10).';

$GLOBALS["lang"]['overwrite'] = 'Thar scríobh';

$GLOBALS["lang"]['Overwrite'] = 'Thar scríobh';

$GLOBALS["lang"]['owner'] = 'Amharc ar gach eolas';

$GLOBALS["lang"]['Owner'] = 'Amharc ar gach eolas';

$GLOBALS["lang"]['PAExec is a freely-redistributable re-implementation of SysInternal/Microsofts popular PsExec program.  PAExec aims to be a drop in replacement for PsExec, so the command-line usage is identical, with additional options also supported.  This work was originally inspired by Talha Tariqs RemCom.'] = 'Is PAExec clár ath-inroinnte saor in aisce de SysInternal / Microsofts tóir PsExec. Tá sé mar aidhm ag PAExec a bheith ina titim in ionad PsExec, mar sin tá an úsáid ordú-líne comhionann, le roghanna breise tacaíocht freisin. Bhí an obair seo spreagtha ar dtús ag Talha Tariqs RemCom.';

$GLOBALS["lang"]['PHP'] = 'PHP';

$GLOBALS["lang"]['POD'] = 'POBAIL';

$GLOBALS["lang"]['POSTing data'] = 'Sonraí a bhrú';

$GLOBALS["lang"]['Package'] = 'Pacáiste Pacáiste';

$GLOBALS["lang"]['packages'] = 'Pacáistí';

$GLOBALS["lang"]['Packages'] = 'Pacáistí';

$GLOBALS["lang"]['Packages are used to report on things such as <i>banned software</i>, AntiVirus on servers, etc.<br><br>Open-AudIT provides widgets that build upon also supplied repots to detemine the status of antivirus, firewall and other software.'] = 'Pacáistí a úsáidtear chun tuairisciú ar rudaí ar nós <i>bogearraí toirmeasc</i>, AntiVirus ar fhreastalaithe, etc.<br/><br/>Open-AudIT Soláthraíonn giuirléidí a thógáil ar fáil freisin repots a detemine an stádas antivirus, balla dóiteáin agus bogearraí eile.';

$GLOBALS["lang"]['pagefile'] = 'Clár na dToghthóirí';

$GLOBALS["lang"]['Pagefile'] = 'Clár na dToghthóirí';

$GLOBALS["lang"]['Pakistan'] = 'an Ríocht Aontaithe';

$GLOBALS["lang"]['Palau'] = 'riachtanais uisce: measartha';

$GLOBALS["lang"]['Palestinian Territory'] = 'Stair na Palaistíne';

$GLOBALS["lang"]['Panama'] = 'riachtanais uisce: measartha';

$GLOBALS["lang"]['Papua New Guinea'] = 'Féachaint ar Fholúntais';

$GLOBALS["lang"]['Paraguay'] = 'riachtanais uisce: measartha';

$GLOBALS["lang"]['Parameters'] = 'Paraiméadair';

$GLOBALS["lang"]['Paranoid'] = 'Paraisiúit';

$GLOBALS["lang"]['Parent'] = 'Tuismitheora';

$GLOBALS["lang"]['parent_id'] = 'ID Tuismitheora';

$GLOBALS["lang"]['Parent ID'] = 'ID Tuismitheora';

$GLOBALS["lang"]['parent_name'] = 'Ainm Tuismitheora';

$GLOBALS["lang"]['Parent Name'] = 'Ainm Tuismitheora';

$GLOBALS["lang"]['part_number'] = 'Uimhir na Coda seo';

$GLOBALS["lang"]['Part Number'] = 'Uimhir na Coda seo';

$GLOBALS["lang"]['part_of_domain'] = 'Cuid de Fearainn';

$GLOBALS["lang"]['Part Of Domain'] = 'Cuid de Fearainn';

$GLOBALS["lang"]['Partition'] = 'An Roinn';

$GLOBALS["lang"]['partition_count'] = 'Comhaireamh Rannpháirteach';

$GLOBALS["lang"]['Partition Count'] = 'Comhaireamh Rannpháirteach';

$GLOBALS["lang"]['partition_disk_index'] = 'Innéacs Diosca Rannpháirteach';

$GLOBALS["lang"]['Partition Disk Index'] = 'Innéacs Diosca Rannpháirteach';

$GLOBALS["lang"]['Pass'] = 'Pas pas a fháil';

$GLOBALS["lang"]['Passed'] = 'Pasáilte';

$GLOBALS["lang"]['Passive Optical Local Area Network'] = 'Líonra Limistéir Áitiúil éighníomhach';

$GLOBALS["lang"]['Password'] = 'Post a fhógairt';

$GLOBALS["lang"]['password'] = 'Post a fhógairt';

$GLOBALS["lang"]['password_changeable'] = 'Pasfhocal Athraithe';

$GLOBALS["lang"]['Password Changeable'] = 'Pasfhocal Athraithe';

$GLOBALS["lang"]['password_disabled'] = 'Pasfhocal faoi Mhíchumas';

$GLOBALS["lang"]['Password Disabled'] = 'Pasfhocal faoi Mhíchumas';

$GLOBALS["lang"]['password_expires'] = 'Taiscéalaíocht an Phasfhocal';

$GLOBALS["lang"]['Password Expires'] = 'Taiscéalaíocht an Phasfhocal';

$GLOBALS["lang"]['password_last_changed'] = 'Pasfhocal Athrú Last';

$GLOBALS["lang"]['Password Last Changed'] = 'Pasfhocal Athrú Last';

$GLOBALS["lang"]['password_required'] = 'Pasfhocal ag teastáil';

$GLOBALS["lang"]['Password Required'] = 'Pasfhocal ag teastáil';

$GLOBALS["lang"]['patch_panel'] = 'Painéal Patch';

$GLOBALS["lang"]['Patch Panel'] = 'Painéal Patch';

$GLOBALS["lang"]['patch_panel_port'] = 'Painéal Paiste Port';

$GLOBALS["lang"]['Patch Panel Port'] = 'Painéal Paiste Port';

$GLOBALS["lang"]['path'] = 'Toir agus Crainn';

$GLOBALS["lang"]['Path'] = 'Toir agus Crainn';

$GLOBALS["lang"]['Performance'] = 'Feidhmíochta';

$GLOBALS["lang"]['Performed'] = 'Déan teagmháil linn';

$GLOBALS["lang"]['Permission'] = 'Ceadúnas Madraí ar Líne';

$GLOBALS["lang"]['Permission Required'] = 'Cead ag teastáil';

$GLOBALS["lang"]['permissions'] = 'Ceadúnas Madraí ar Líne';

$GLOBALS["lang"]['Permissions'] = 'Ceadúnas Madraí ar Líne';

$GLOBALS["lang"]['Persian'] = 'cineál gas: in airde';

$GLOBALS["lang"]['Personal Area Network'] = 'Líonra Limistéir Áitiúil';

$GLOBALS["lang"]['Personal area network'] = 'Líonra limistéar pearsanta';

$GLOBALS["lang"]['Peru'] = 'Plandaí faoi dhíon';

$GLOBALS["lang"]['Philippines'] = 'bláthanna cumhra: cumhráin';

$GLOBALS["lang"]['phone'] = 'Fón Póca';

$GLOBALS["lang"]['Phone'] = 'Fón Póca';

$GLOBALS["lang"]['Physical CPUs'] = 'LAPanna Fisiciúla';

$GLOBALS["lang"]['physical_count'] = 'Líon na bhFíor';

$GLOBALS["lang"]['Physical Count'] = 'Líon na bhFíor';

$GLOBALS["lang"]['physical_depth'] = 'Doimhneacht Fhisiciúil';

$GLOBALS["lang"]['Physical Depth'] = 'Doimhneacht Fhisiciúil';

$GLOBALS["lang"]['physical_height'] = 'Fhisiciúil Airde';

$GLOBALS["lang"]['Physical Height'] = 'Fhisiciúil Airde';

$GLOBALS["lang"]['physical_width'] = 'Fisiciúil Leithead';

$GLOBALS["lang"]['Physical Width'] = 'Fisiciúil Leithead';

$GLOBALS["lang"]['picture'] = 'Pictiúrlanna';

$GLOBALS["lang"]['Picture'] = 'Pictiúrlanna';

$GLOBALS["lang"]['pid'] = 'taiseachas aeir: fliuch';

$GLOBALS["lang"]['Pid'] = 'taiseachas aeir: fliuch';

$GLOBALS["lang"]['Pie Chart'] = 'Cairt Píosa';

$GLOBALS["lang"]['Pie charts must return name or my_name, description or my_description and count.'] = 'Ní mór cairteacha Pie ar ais ainm nó my_name, tuairisc nó my_description agus comhaireamh.';

$GLOBALS["lang"]['ping'] = 'Pinging';

$GLOBALS["lang"]['Ping'] = 'Pinging';

$GLOBALS["lang"]['Ping Target'] = 'Sprioc Ping';

$GLOBALS["lang"]['Pitcairn Islands'] = 'Inis dúinn, le do thoil...';

$GLOBALS["lang"]['placement'] = 'An tSeirbhís Dóiteáin';

$GLOBALS["lang"]['Placement'] = 'An tSeirbhís Dóiteáin';

$GLOBALS["lang"]['Plan and conduct internal audits'] = 'Iniúchtaí inmheánacha a phleanáil agus a sheoladh';

$GLOBALS["lang"]['Please have an Open-AudIT administrator logon and upgrade the database.'] = 'Le do thoil tá Lógó riarthóir Open-AudIT agus an bunachar sonraí a uasghrádú.';

$GLOBALS["lang"]['Please log in and change these ASAP.'] = 'Le do thoil logáil isteach agus a athrú ar an ASAP.';

$GLOBALS["lang"]['Please log on to the Open-AudIT Server (either Windows or Linux) and run <code>nslookup IP_ADDRESS_OF_TARGET</code> in the command prompt or shell. It must be able to resolve the IP to a name.'] = 'Logáil isteach ar an Freastalaí Open-AudIT ( Windows nó Linux) agus reáchtáil <code>nslookup IP_ADDRESS_OF_TARGET</code> sa ordú pras nó bhlaosc. Caithfidh sé a bheith in ann an IP a réiteach go dtí ainm.';

$GLOBALS["lang"]['Please note that the select box will override the text input box.'] = 'Tabhair faoi deara go sáróidh an bosca roghnaithe an bosca ionchuir téacs.';

$GLOBALS["lang"]['Please see the FAQ'] = 'Féach an Ceisteanna Coitianta';

$GLOBALS["lang"]['Please send all three files to your support contact at Opmantek and describe your issue.'] = 'Cuir gach trí chomhad chuig do theagmháil tacaíochta ag Opmantek agus cur síos ar do cheist.';

$GLOBALS["lang"]['Please set using'] = 'Le do thoil leagtha amach ag';

$GLOBALS["lang"]['Please visit the homepage at'] = 'Tabhair cuairt ar an leathanach baile ag';

$GLOBALS["lang"]['pod'] = 'taiseachas aeir: fliuch';

$GLOBALS["lang"]['Pod'] = 'taiseachas aeir: fliuch';

$GLOBALS["lang"]['Poland'] = 'cineál gas: in airde';

$GLOBALS["lang"]['Policies'] = 'irl - Library Service';

$GLOBALS["lang"]['Policies have exceptions.'] = 'Tá eisceachtaí ag beartais.';

$GLOBALS["lang"]['policy'] = 'Polasaí Polasaí';

$GLOBALS["lang"]['Policy'] = 'Polasaí Polasaí';

$GLOBALS["lang"]['policy_id'] = 'ID Polasaí';

$GLOBALS["lang"]['Policy ID'] = 'ID Polasaí';

$GLOBALS["lang"]['Policy Result'] = 'Toradh beartais';

$GLOBALS["lang"]['Policy Results'] = 'Torthaí an Pholasaí';

$GLOBALS["lang"]['Polish'] = 'cineál gas: in airde';

$GLOBALS["lang"]['Polite'] = 'taiseachas aeir: fliuch';

$GLOBALS["lang"]['Populate the with values provided below:'] = 'Populate na luachanna ar fáil thíos:';

$GLOBALS["lang"]['Populated by audit.'] = 'daonra le hiniúchadh.';

$GLOBALS["lang"]['Populated by discovery and audit.'] = 'daonra trí fhionnachtain agus iniúchadh.';

$GLOBALS["lang"]['Populated dynamically.'] = 'daonra dinimiciúil.';

$GLOBALS["lang"]['Populated from DNS.'] = 'daonra ó DNS.';

$GLOBALS["lang"]['Populated from SNMP discovery.'] = 'Populated ó SNMP fionnachtain.';

$GLOBALS["lang"]['Populated from device audits.'] = 'daonra ó iniúchtaí gléas.';

$GLOBALS["lang"]['Populated from hostname.'] = 'Populated ó hostname.';

$GLOBALS["lang"]['Populated from machine-id on Linux.'] = 'Populated ó meaisín-id ar Linux.';

$GLOBALS["lang"]['Populated from the IP for the default route or the IP detected in discovery.'] = 'daonra ón IP don bhealach réamhshocraithe nó an IP a braitheadh i bhfionnachtain.';

$GLOBALS["lang"]['Populated from the hostname command.'] = 'Populated as an ordú hostname.';

$GLOBALS["lang"]['Populated with additional data from the external system, in a JSON representation.'] = 'daonra le sonraí breise ón gcóras seachtrach, i ionadaíocht JSON.';

$GLOBALS["lang"]['port'] = 'Port Láirge';

$GLOBALS["lang"]['Port'] = 'Port Láirge';

$GLOBALS["lang"]['port_name'] = 'Ainm an Chalafoirt';

$GLOBALS["lang"]['Port Name'] = 'Ainm an Chalafoirt';

$GLOBALS["lang"]['port_number'] = 'Uimhir an Phoirt';

$GLOBALS["lang"]['Port Number'] = 'Uimhir an Phoirt';

$GLOBALS["lang"]['ports_in_order'] = 'Ports in Ordú';

$GLOBALS["lang"]['Ports In Order'] = 'Ports in Ordú';

$GLOBALS["lang"]['ports_stop_after'] = 'Ports Stop Tar éis';

$GLOBALS["lang"]['Ports Stop After'] = 'Ports Stop Tar éis';

$GLOBALS["lang"]['Portugal, Portuguese Republic'] = 'an Phortaingéil, Poblacht na Portaingéile';

$GLOBALS["lang"]['Portuguese'] = 'Bláthanna faoi dhíon';

$GLOBALS["lang"]['Portuguese (Brazil)'] = 'Portaingéilis (Brazil)';

$GLOBALS["lang"]['position'] = 'Post a fhógairt';

$GLOBALS["lang"]['Position'] = 'Post a fhógairt';

$GLOBALS["lang"]['Post-Certification'] = 'Iar-Deimhniú';

$GLOBALS["lang"]['postcode'] = 'Post a fhógairt';

$GLOBALS["lang"]['Postcode'] = 'Post a fhógairt';

$GLOBALS["lang"]['power_circuit'] = 'Ciorcad cumhachta';

$GLOBALS["lang"]['Power Circuit'] = 'Ciorcad cumhachta';

$GLOBALS["lang"]['power_sockets'] = 'Seirbhís do Chustaiméirí';

$GLOBALS["lang"]['Power Sockets'] = 'Seirbhís do Chustaiméirí';

$GLOBALS["lang"]['Predictable'] = 'Predictable';

$GLOBALS["lang"]['Preferences'] = 'Tosaíochtaí';

$GLOBALS["lang"]['Prepare for recertification every 3 years'] = 'A ullmhú le haghaidh recertification gach 3 bliana';

$GLOBALS["lang"]['Prerequisites'] = 'Réamhriachtanas';

$GLOBALS["lang"]['Prerequisites and Tests'] = 'Réamhriachtanas agus Tástáil';

$GLOBALS["lang"]['present'] = 'Déan teagmháil anois';

$GLOBALS["lang"]['Present'] = 'Déan teagmháil anois';

$GLOBALS["lang"]['previous_value'] = 'Luach roimhe seo';

$GLOBALS["lang"]['Previous Value'] = 'Luach roimhe seo';

$GLOBALS["lang"]['primary'] = 'Bunoideachas Iarbhunoideachas';

$GLOBALS["lang"]['Primary'] = 'Bunoideachas Iarbhunoideachas';

$GLOBALS["lang"]['Primary Key'] = 'Príomhscéalta na Gaeilge';

$GLOBALS["lang"]['print_queue'] = 'Déan Teagmháil Linn';

$GLOBALS["lang"]['Print Queue'] = 'Déan Teagmháil Linn';

$GLOBALS["lang"]['printer_color'] = 'Priontáil Dath';

$GLOBALS["lang"]['Printer Color'] = 'Priontáil Dath';

$GLOBALS["lang"]['printer_duplex'] = 'Priontáil Duplex';

$GLOBALS["lang"]['Printer Duplex'] = 'Priontáil Duplex';

$GLOBALS["lang"]['printer_port_name'] = 'Priontáil Ainm Port';

$GLOBALS["lang"]['Printer Port Name'] = 'Priontáil Ainm Port';

$GLOBALS["lang"]['printer_shared'] = 'Priontáil Roinnte';

$GLOBALS["lang"]['Printer Shared'] = 'Priontáil Roinnte';

$GLOBALS["lang"]['printer_shared_name'] = 'Priontáil Ainm roinnte';

$GLOBALS["lang"]['Printer Shared Name'] = 'Priontáil Ainm roinnte';

$GLOBALS["lang"]['priority'] = 'Amharc ar gach eolas';

$GLOBALS["lang"]['Priority'] = 'Amharc ar gach eolas';

$GLOBALS["lang"]['Privacy Passphrase'] = 'Polasaí Príobháideachta';

$GLOBALS["lang"]['Privacy Protocol'] = 'Prótacal um Príobháideachas';

$GLOBALS["lang"]['privileges_required'] = 'Pribhléidí ag teastáil';

$GLOBALS["lang"]['Privileges Required'] = 'Pribhléidí ag teastáil';

$GLOBALS["lang"]['processor'] = 'Próiseas';

$GLOBALS["lang"]['Processor'] = 'Próiseas';

$GLOBALS["lang"]['processor_count'] = 'Comhaireamh Próiseála';

$GLOBALS["lang"]['Processor Count'] = 'Comhaireamh Próiseála';

$GLOBALS["lang"]['processor_slot_count'] = 'Próiseas Líon Sliotán';

$GLOBALS["lang"]['Processor Slot Count'] = 'Próiseas Líon Sliotán';

$GLOBALS["lang"]['processor_type'] = 'Cineál Próiseas';

$GLOBALS["lang"]['Processor Type'] = 'Cineál Próiseas';

$GLOBALS["lang"]['Processors'] = 'Próisis';

$GLOBALS["lang"]['product_name'] = 'Ainm Táirge';

$GLOBALS["lang"]['Product Name'] = 'Ainm Táirge';

$GLOBALS["lang"]['Product Name Match from CPE: '] = 'Ainm Táirge Match ó CPE: ';

$GLOBALS["lang"]['products'] = 'Táirgí do Soilse linn snámha faoi stiúir';

$GLOBALS["lang"]['Products'] = 'Táirgí do Soilse linn snámha faoi stiúir';

$GLOBALS["lang"]['Professional'] = 'Gairmiúla Gairmiúla';

$GLOBALS["lang"]['profile'] = 'Próifíl na Cuideachta';

$GLOBALS["lang"]['Profile'] = 'Próifíl na Cuideachta';

$GLOBALS["lang"]['program'] = 'Clár na dToghthóirí';

$GLOBALS["lang"]['Program'] = 'Clár na dToghthóirí';

$GLOBALS["lang"]['Properties'] = 'Díroghnaigh gach rud';

$GLOBALS["lang"]['Proprietary. If you want to modify HighCharts you may require a'] = 'Díroghnaigh gach rud Más mian leat a mhodhnú HighCharts féidir leat a cheangal ar';

$GLOBALS["lang"]['Protects confidentiality, integrity, and availability of information'] = 'Cosnaíonn rúndacht, sláine, agus infhaighteacht faisnéise';

$GLOBALS["lang"]['protocol'] = 'Prótacal an Phrótacail';

$GLOBALS["lang"]['Protocol'] = 'Prótacal an Phrótacail';

$GLOBALS["lang"]['Provide a description and select and expires duration.'] = 'Cur síos a chur ar fáil agus ré a roghnú agus a rachaidh in éag.';

$GLOBALS["lang"]['Provide a name - we humbly recommand Open-AudIT &#128512;, but you can name it anything you like.<br>From the Open-AudIT form, copy the value for the <i>Redirect URI</i> field and paste it into the <i>Sign-in redirect URIs</i> field in OKTA.<br>The Sign-out redirect URIs is optional, but if you want you can use open-audit/index.php/logout with your Open-AudIT servers http address, as per the screenshot.<br>Normally your Open-AudIT URL will look something like'] = 'A chur ar fáil ainm - táimid ag recommand humbly Open-AudIT ğ, ach is féidir leat é a ainm rud ar bith is mian leat.<br/>Ón bhfoirm Open-AudIT, cóip an luach don <i>Amharc ar gach eolas</i> réimse agus greamaigh sé isteach sa <i>Cláraigh-i atreorú URIs</i> réimse i OKTA.<br/>Is é an URIs Comharthaí-amach atreorú roghnach, ach más mian leat is féidir leat úsáid a bhaint as oscailte-audit / innéacs. php / logout le do fhreastalaithe Open-AudIT http seoladh, de réir an scáileán.<br/>De ghnáth do Beidh URL Open-AudIT cuma rud éigin cosúil';

$GLOBALS["lang"]['Provided you have the correct credentials, Device Seed Discovery works as follows'] = 'Ar choinníoll go bhfuil na dintiúir ceart agat, Oibríonn Discovery Gléas Seed mar seo a leanas';

$GLOBALS["lang"]['provider'] = 'Soláthar';

$GLOBALS["lang"]['Provider'] = 'Soláthar';

$GLOBALS["lang"]['published'] = 'Foilsithe';

$GLOBALS["lang"]['Published'] = 'Foilsithe';

$GLOBALS["lang"]['published_date'] = 'Dáta foilsithe';

$GLOBALS["lang"]['Published Date'] = 'Dáta foilsithe';

$GLOBALS["lang"]['publisher'] = 'Amharc ar gach eolas';

$GLOBALS["lang"]['Publisher'] = 'Amharc ar gach eolas';

$GLOBALS["lang"]['Puerto Rico'] = 'cliceáil grianghraf a mhéadú';

$GLOBALS["lang"]['Purchase'] = 'irl - Library Service';

$GLOBALS["lang"]['purchase_amount'] = 'Méid an Cheannach';

$GLOBALS["lang"]['Purchase Amount'] = 'Méid an Cheannach';

$GLOBALS["lang"]['purchase_cost_center'] = 'An tIonad Costas Ceannaigh';

$GLOBALS["lang"]['Purchase Cost Center'] = 'An tIonad Costas Ceannaigh';

$GLOBALS["lang"]['purchase_count'] = 'Contae an Chontae';

$GLOBALS["lang"]['Purchase Count'] = 'Contae an Chontae';

$GLOBALS["lang"]['purchase_date'] = 'Naisc ábhartha eile';

$GLOBALS["lang"]['Purchase Date'] = 'Naisc ábhartha eile';

$GLOBALS["lang"]['purchase_invoice'] = 'Roghnaigh gach rud';

$GLOBALS["lang"]['Purchase Invoice'] = 'Roghnaigh gach rud';

$GLOBALS["lang"]['purchase_order'] = 'Ceadúnas Madraí ar Líne';

$GLOBALS["lang"]['Purchase Order'] = 'Ceadúnas Madraí ar Líne';

$GLOBALS["lang"]['purchase_order_number'] = 'Uimhir an Orduithe Ceannaigh';

$GLOBALS["lang"]['Purchase Order Number'] = 'Uimhir an Orduithe Ceannaigh';

$GLOBALS["lang"]['purchase_service_contract_number'] = 'Uimhir Chonartha na Seirbhíse Poiblí';

$GLOBALS["lang"]['Purchase Service Contract Number'] = 'Uimhir Chonartha na Seirbhíse Poiblí';

$GLOBALS["lang"]['purchase_vendor'] = 'Seirbhís do Chustaiméirí';

$GLOBALS["lang"]['Purchase Vendor'] = 'Seirbhís do Chustaiméirí';

$GLOBALS["lang"]['purpose'] = 'Cuspóir an togra';

$GLOBALS["lang"]['Purpose'] = 'Cuspóir an togra';

$GLOBALS["lang"]['Qatar'] = 'riachtanais uisce: measartha';

$GLOBALS["lang"]['queries'] = 'Céimeanna an doiciméid sa chruinniú iomlánach';

$GLOBALS["lang"]['Queries'] = 'Céimeanna an doiciméid sa chruinniú iomlánach';

$GLOBALS["lang"]['Queries are an important part of Open-AudIT. They are what enables you to get meaningful information from all the device data you have discovered. Along with summaries and groups, they provide a powerful mechanism to extract crucial information.'] = 'Tá Fiosrúcháin mar chuid thábhachtach de Open-AudIT. Tá siad cad is féidir leat a fháil eolas bríoch ó na sonraí gléas a fuair tú amach. Chomh maith le hachoimrí agus grúpaí, soláthraíonn siad meicníocht chumhachtach chun faisnéis ríthábhachtach a bhaint.';

$GLOBALS["lang"]['Queries for Groups should select only the'] = 'Níor chóir go roghnófaí ceisteanna do Ghrúpaí ach amháin';

$GLOBALS["lang"]['Query'] = 'Inis dúinn, le do thoil...';

$GLOBALS["lang"]['Query this Active Directory attribute first to determine the users work unit.'] = 'Déan an tréith Eolaire Gníomhach seo ar dtús chun aonad oibre na n-úsáideoirí a chinneadh.';

$GLOBALS["lang"]['Query this Active Directory attribute second to determine the users work unit.'] = 'Query seo Eolaire Gníomhacha tréith dara chun a chinneadh an t-aonad oibre úsáideoirí.';

$GLOBALS["lang"]['queue'] = 'Déan teagmháil linn';

$GLOBALS["lang"]['Queue'] = 'Déan teagmháil linn';

$GLOBALS["lang"]['Queue Limit'] = 'Teorainn na gCuimhneachán';

$GLOBALS["lang"]['Queued Device Audits'] = 'Iniúchóireacht Feistí oiriúnaithe';

$GLOBALS["lang"]['Queued IP Scans'] = 'Scans IP Queued';

$GLOBALS["lang"]['Queued Items'] = 'Míreanna oiriúnaithe';

$GLOBALS["lang"]['RBAC for Active Directory and openLDAP'] = 'RBAC do Eolaire Gníomhach agus OpenLDAP';

$GLOBALS["lang"]['RU Start'] = 'RU Tosaigh';

$GLOBALS["lang"]['RX Bitrate'] = 'RX Bitrate';

$GLOBALS["lang"]['RX Freq'] = 'Seirbhís do Chustaiméirí';

$GLOBALS["lang"]['RX Level'] = 'Leibhéal RX';

$GLOBALS["lang"]['RX Power'] = 'Cumhacht RX';

$GLOBALS["lang"]['RX Profile'] = 'Próifíl RX';

$GLOBALS["lang"]['Rack'] = 'Réadmhaoin';

$GLOBALS["lang"]['rack_devices'] = 'Gléasanna Raca';

$GLOBALS["lang"]['Rack Devices'] = 'Gléasanna Raca';

$GLOBALS["lang"]['rack_id'] = 'Rack ID';

$GLOBALS["lang"]['Rack ID'] = 'Rack ID';

$GLOBALS["lang"]['Rack Management and Reporting'] = 'Bainistíocht Raca agus Tuairisciú';

$GLOBALS["lang"]['Racks'] = 'Saighdiúirí';

$GLOBALS["lang"]['racks'] = 'Saighdiúirí';

$GLOBALS["lang"]['radio'] = 'Raidió na Gaeltachta';

$GLOBALS["lang"]['Radio'] = 'Raidió na Gaeltachta';

$GLOBALS["lang"]['Radio MAC'] = 'Raidió MAC';

$GLOBALS["lang"]['rationale'] = 'Rationale';

$GLOBALS["lang"]['Rationale'] = 'Rationale';

$GLOBALS["lang"]['raw'] = 'amh';

$GLOBALS["lang"]['Raw'] = 'amh';

$GLOBALS["lang"]['read'] = 'Léigh ar aghaidh';

$GLOBALS["lang"]['Read'] = 'Léigh ar aghaidh';

$GLOBALS["lang"]['Read our online documentation on the Open-AudIT Wiki.'] = 'Léigh ár ndoiciméadacht ar líne ar an Wiki Open-AudIT.';

$GLOBALS["lang"]['Read through the log file at'] = 'Léigh tríd an gcomhad logála ag';

$GLOBALS["lang"]['Received'] = 'Faighte';

$GLOBALS["lang"]['Recently we have been asked the question - do you consider Open-AudIT more secure than other similar programs? As with most things, the answer is <i>it depends</i>.<br><br>Open-AudIT can be operated in such a way as to be extremely secure. But as usual with computer-based security, the more secure you wish to make something, the more inconvenient it becomes to use. The old phrase <i>the most secure computer is one that is turned off and in the cupboard<i> comes to mind.<br><br>Below we will outline some options that can be used with Open-AudIT that will increase security. Like most items within Open-AudIT, these are options and not mandatory. How far you take security is up to you.'] = 'Le déanaí iarradh orainn an cheist - an bhfuil tú ag smaoineamh Open-AudIT níos sábháilte ná cláir eile den chineál céanna? Mar is amhlaidh leis an chuid is mó rudaí, is é an freagra <i>braitheann sé</i>.<br/><br/>Amharc ar gach eolas Is féidir TF a oibriú ar bhealach a bheith thar a bheith slán. Ach mar is gnách le slándáil ríomhaire-bhunaithe, an níos mó slán is mian leat rud éigin a dhéanamh, is é an níos neamhchinntiúla a thiocfaidh sé a úsáid. An seanfhocal <i>Is é an ríomhaire is sábháilte ar cheann go bhfuil iompú amach agus sa cupboard<i> a thagann chun cuimhne.<br/><br/>Anseo thíos cuirfimid síos ar roinnt roghanna is féidir a úsáid le Open-AudIT a mhéadóidh slándáil. Cosúil le formhór na n-ítimí laistigh Open-AudIT, is roghanna iad seo agus ní éigeantach. Cé chomh fada a ghlacann tú go bhfuil slándáil suas chun tú.</i></i>';

$GLOBALS["lang"]['Recertification:</strong> Required every three years'] = 'Athdheimhniú: Riachtanach gach trí bliana';

$GLOBALS["lang"]['Red Query'] = 'taiseachas aeir: fliuch';

$GLOBALS["lang"]['Redirect URI'] = 'Amharc ar gach eolas';

$GLOBALS["lang"]['redirect_uri'] = 'Atreorú Uri';

$GLOBALS["lang"]['Redirect Uri'] = 'Atreorú Uri';

$GLOBALS["lang"]['Reduces risk of data breaches and cyber threats'] = 'Laghdaíonn riosca sáruithe sonraí agus bagairtí cibe';

$GLOBALS["lang"]['references'] = 'Tagarthaí';

$GLOBALS["lang"]['References'] = 'Tagarthaí';

$GLOBALS["lang"]['region'] = 'Réigiún an Réigiúin';

$GLOBALS["lang"]['Region'] = 'Réigiún an Réigiúin';

$GLOBALS["lang"]['registered_user'] = 'Úsáideoir cláraithe';

$GLOBALS["lang"]['Registered User'] = 'Úsáideoir cláraithe';

$GLOBALS["lang"]['Rejected'] = 'Aistrigh';

$GLOBALS["lang"]['rel'] = 'Déan Teagmháil Linn';

$GLOBALS["lang"]['Rel'] = 'Déan Teagmháil Linn';

$GLOBALS["lang"]['Release'] = 'Nuacht agus Imeachtaí';

$GLOBALS["lang"]['remediation'] = 'An tSeirbhís Dóiteáin';

$GLOBALS["lang"]['Remediation'] = 'An tSeirbhís Dóiteáin';

$GLOBALS["lang"]['Remote'] = 'cianda';

$GLOBALS["lang"]['remote_address'] = 'Seoladh cianda';

$GLOBALS["lang"]['Remote Address'] = 'Seoladh cianda';

$GLOBALS["lang"]['remote_port'] = 'Port cianda';

$GLOBALS["lang"]['Remote Port'] = 'Port cianda';

$GLOBALS["lang"]['Remove'] = 'Bain úsáid as';

$GLOBALS["lang"]['Remove Exception'] = 'Bain Eisceacht';

$GLOBALS["lang"]['Repeat until you have a completely discovered and audited Windows PC.'] = 'Repeat go dtí go bhfuil tú go hiomlán amach agus iniúchta Windows PC.';

$GLOBALS["lang"]['Report'] = 'Tuarascáil Bhliantúil';

$GLOBALS["lang"]['Report on your devices, networks and more'] = 'Tuarascáil ar do feistí, líonraí agus níos mó';

$GLOBALS["lang"]['reportable'] = 'Intuigthe';

$GLOBALS["lang"]['Reportable'] = 'Intuigthe';

$GLOBALS["lang"]['Reports'] = 'Tuarascáil Bhliantúil';

$GLOBALS["lang"]['request'] = 'Iarratas a Dhéanamh';

$GLOBALS["lang"]['Request'] = 'Iarratas a Dhéanamh';

$GLOBALS["lang"]['Request Method'] = 'Iarratas a Dhéanamh';

$GLOBALS["lang"]['Request Vulnerability'] = 'Iarratas Vulability';

$GLOBALS["lang"]['Request a Specific CVE'] = 'Iarraidh Sainiúil taiseachas aeir: fliuch';

$GLOBALS["lang"]['requested'] = 'Iarraidh';

$GLOBALS["lang"]['Requested'] = 'Iarraidh';

$GLOBALS["lang"]['require_port'] = 'Port a Fhiosrú';

$GLOBALS["lang"]['Require Port'] = 'Port a Fhiosrú';

$GLOBALS["lang"]['Require an Open Port'] = 'A cheangal ar Port Oscailte';

$GLOBALS["lang"]['Required'] = 'Riachtanais Riachtanach';

$GLOBALS["lang"]['Required AWS user permissions'] = 'Ceadanna úsáideoir AWS ag teastáil';

$GLOBALS["lang"]['Required Fields'] = 'Réimsí Riachtanach';

$GLOBALS["lang"]['Reset'] = 'Athshocraigh';

$GLOBALS["lang"]['Reset All Data'] = 'Athshocraigh Gach Sonraí';

$GLOBALS["lang"]['Reset to Default'] = 'Athshocrú go Réamhshocrú';

$GLOBALS["lang"]['resource'] = 'Acmhainní Daonna';

$GLOBALS["lang"]['Resource'] = 'Acmhainní Daonna';

$GLOBALS["lang"]['Resource Name'] = 'Ainm an Chomhlachta';

$GLOBALS["lang"]['Resources'] = 'Acmhainní Daonna';

$GLOBALS["lang"]['response'] = 'Plandaí faoi dhíon';

$GLOBALS["lang"]['Response'] = 'Plandaí faoi dhíon';

$GLOBALS["lang"]['responsibility'] = 'Freagracht as';

$GLOBALS["lang"]['Responsibility'] = 'Freagracht as';

$GLOBALS["lang"]['Restore my Licenses'] = 'Athchóirigh mo Cheadúnais';

$GLOBALS["lang"]['Restrict to Private'] = 'Srian le Príobháideacha';

$GLOBALS["lang"]['Restrict to Subnet'] = 'Srian le Subnet';

$GLOBALS["lang"]['result'] = 'Toradh agus Toradh';

$GLOBALS["lang"]['Result'] = 'Toradh agus Toradh';

$GLOBALS["lang"]['Resulting Function'] = 'Toradh Feidhme';

$GLOBALS["lang"]['Results'] = 'Torthaí agus Torthaí';

$GLOBALS["lang"]['Retrieve a list of devices in the'] = 'Retrieve liosta feistí sa';

$GLOBALS["lang"]['Retrieve a list of devices with OS Name like Windows 2008'] = 'Retrieve liosta feistí le OS Ainm cosúil le Windows 2008';

$GLOBALS["lang"]['Retrieve all details about the device with id 88.'] = 'Retrieve na sonraí go léir mar gheall ar an gléas le id 88.';

$GLOBALS["lang"]['Retrieve all devices running Windows.'] = 'Retrieve gach feiste ag rith Windows.';

$GLOBALS["lang"]['Retrieve all devices with the standard columns'] = 'Retrieve gach feiste leis na colúin caighdeánach';

$GLOBALS["lang"]['Retrieve the first 10 devices running Windows ordered by hostname'] = 'Retrieve an chéad 10 feistí ag rith Windows ordaithe ag hostname';

$GLOBALS["lang"]['Retrieve the properties id, ip, hostname, domain, type from all devices'] = 'Retrieve na hairíonna id, ip, hostname, fearainn, cineál ó gach feiste';

$GLOBALS["lang"]['retrieved'] = 'Aisghabhadh';

$GLOBALS["lang"]['Retrieved'] = 'Aisghabhadh';

$GLOBALS["lang"]['retrieved_ident'] = 'Aiseolas';

$GLOBALS["lang"]['Retrieved Ident'] = 'Aiseolas';

$GLOBALS["lang"]['retrieved_name'] = 'Ainm a aisghabháil';

$GLOBALS["lang"]['Retrieved Name'] = 'Ainm a aisghabháil';

$GLOBALS["lang"]['Retrieved from the device - Windows:Win32_ComputerSystemProduct, Linux:dmidecode, MacOS:system_profiler, ESXi:vim-cmd hostsvc/hostsummary, HP-UX:machinfo, Solaris:smbios, AIX:uname.'] = 'Retrieved as an gléas - Windows: Win32_ComputerSystemProduct, Linux:dmidecode, MacOS:system_profiler, ESXi: óstach ard-cmithe / óstáil, HP-UX:machinfo, Solaris: Smbios, AIX: ainm.';

$GLOBALS["lang"]['Retrieving a List of Credentials'] = 'Liosta Dintiúirí a aisghabháil';

$GLOBALS["lang"]['Retrieving or Creating'] = 'Aistarraingt nó a chruthú';

$GLOBALS["lang"]['Return a collection of devices with the default set of columns (devices.id, devices.icon, devices.type, devices.name, devices.ip, devices.dns_fqdn, devices.identification, devices.description, devices.manufacturer, devices.os_family, devices.status)'] = 'Tuairisceán bailiúchán feistí leis an tsraith réamhshocraithe de cholúin (feistis.id, devices.icon, devices.type, devices.name, devices.ip, devices.dns_fqdn, devices.identification, devices.description, devices.manufacturer, devices.os_family, devices.status)';

$GLOBALS["lang"]['Return a list of all Modules installed on Routers'] = 'Tuairisceán liosta de gach Modúl suiteáilte ar Ródairí';

$GLOBALS["lang"]['Return an individual device details.'] = 'Sonraí feistí aonair a thabhairt ar ais.';

$GLOBALS["lang"]['Returns a list of {collection}.'] = 'Tuairisceáin liosta de {bailíocht}.';

$GLOBALS["lang"]['Returns a {collection} details.'] = 'Tuairisceáin sonraí {bailíocht}.';

$GLOBALS["lang"]['Reunion'] = 'Aiseolas';

$GLOBALS["lang"]['Review current practices against ISO 27001 requirements'] = 'Athbhreithniú a dhéanamh ar chleachtais reatha i gcoinne riachtanais ISO 27001';

$GLOBALS["lang"]['revision'] = 'Athbhreithniú Luach ar Airgead';

$GLOBALS["lang"]['Revision'] = 'Athbhreithniú Luach ar Airgead';

$GLOBALS["lang"]['risk_assesment_result'] = 'Toradh an Mheasúnaithe Riosca';

$GLOBALS["lang"]['Risk Assesment Result'] = 'Toradh an Mheasúnaithe Riosca';

$GLOBALS["lang"]['Risk Assessment & Treatment'] = 'Measúnú Riosca agus Cóireáil';

$GLOBALS["lang"]['Risk Management'] = 'Bainistíocht Riosca';

$GLOBALS["lang"]['Role'] = 'Ról na Gaeilge';

$GLOBALS["lang"]['roles'] = 'Róil';

$GLOBALS["lang"]['Roles'] = 'Róil';

$GLOBALS["lang"]['Roles can only be created and edited if you have an Open-AudIT Enterprise license. For most users, the default set of Roles should be all that is required.'] = 'Is féidir Róil a chruthú agus a chur in eagar ach amháin má tá tú ceadúnas Fiontraíochta Oscailte-AudIT. Maidir le formhór na n-úsáideoirí, ba cheart go mbeadh an tacar réamhshocraithe Róil go léir a theastaíonn.';

$GLOBALS["lang"]['Romania'] = 'an Rómáin';

$GLOBALS["lang"]['Romanian'] = 'An Rómáin';

$GLOBALS["lang"]['Room'] = 'Seomra an tSuímh';

$GLOBALS["lang"]['route'] = 'Bealach na Bhealaí';

$GLOBALS["lang"]['Route'] = 'Bealach na Bhealaí';

$GLOBALS["lang"]['Row'] = 'riachtanais uisce: measartha';

$GLOBALS["lang"]['Row Count'] = 'Contae an Chláir';

$GLOBALS["lang"]['row_position'] = 'Post a Thomhas';

$GLOBALS["lang"]['Row Position'] = 'Post a Thomhas';

$GLOBALS["lang"]['Rows'] = 'Uisce agus Séarachas';

$GLOBALS["lang"]['ru_height'] = 'Ru Airde';

$GLOBALS["lang"]['Ru Height'] = 'Ru Airde';

$GLOBALS["lang"]['ru_start'] = 'Tús a chur le';

$GLOBALS["lang"]['Ru Start'] = 'Tús a chur le';

$GLOBALS["lang"]['rule_group'] = 'Grúpa Riail';

$GLOBALS["lang"]['Rule Group'] = 'Grúpa Riail';

$GLOBALS["lang"]['rules'] = 'Rialacha agus Rialacha';

$GLOBALS["lang"]['Rules'] = 'Rialacha agus Rialacha';

$GLOBALS["lang"]['Rules are created and run against a device when the device is discovered or an audit result is processed. Rules can be used to set a device attribute based on other attributes.<br><br>NOTE - At present we cannot delete a rule input or output that contains a /. This is because the framework is parsing the / as part of the URL and returning a 404, even before our code runs. The work-around for this is to delete the Rule itself, then recreate the inputs and outputs as required. Fortunately inputs and outputs that contain a / are rare (indeed, none exist by default).'] = 'Cruthaítear agus cuirtear rialacha i gcoinne feiste nuair a aimsítear an fheiste nó nuair a dhéantar toradh iniúchóireachta a phróiseáil. Is féidir rialacha a úsáid a shocrú tréith gléas bunaithe ar tréithe eile.<br/><br/>NÓTA - Faoi láthair ní féidir linn ionchur riail nó aschur go bhfuil a /. Tá sé seo toisc go bhfuil an creat parsáil an / mar chuid den URL agus ag filleadh 404, fiú sula ritheann ár cód. Is é an obair a bhaineann leis seo ná an Riail féin a scriosadh, ansin na hionchuir agus na haschuir a athchruthú de réir mar is gá. Ionchuir Fortunately agus aschuir go bhfuil / tá annamh (i ndáiríre, níl aon cheann de réir réamhshocraithe).';

$GLOBALS["lang"]['Run Discovery'] = 'Rith Discovery';

$GLOBALS["lang"]['Run Discovery on Devices'] = 'Rith Discovery ar Gléasanna';

$GLOBALS["lang"]['Run Your Discovery'] = 'Rith Do Discovery';

$GLOBALS["lang"]['Run a Command'] = 'Rith Ordú';

$GLOBALS["lang"]['Run a discovery and find out <b>Whats On Your Network?</b>'] = 'Rith fionnachtana agus a fháil amach <b>Cad ar Do Líonra?</b>';

$GLOBALS["lang"]['Run the script by typing <code>cscript test_windows_client.vbs</code> in the console.'] = 'Rith an script ag clóscríobh <code>cscript test_windows_client.vbs</code> sa console.';

$GLOBALS["lang"]['Run this Command'] = 'Rith an Ordú seo';

$GLOBALS["lang"]['runas'] = 'Seirbhís do Chustaiméirí';

$GLOBALS["lang"]['Runas'] = 'Seirbhís do Chustaiméirí';

$GLOBALS["lang"]['Running'] = 'Rith';

$GLOBALS["lang"]['Running Open-AudIT Apache Service Under Windows'] = 'Rith Seirbhís Apache Oscailte faoi Windows';

$GLOBALS["lang"]['Russian'] = 'Rúisis porn';

$GLOBALS["lang"]['Russian Federation'] = 'Cónaidhm na Rúise';

$GLOBALS["lang"]['Rwanda'] = 'minicíocht uisce: flúirseach';

$GLOBALS["lang"]['rx_bitrate'] = 'Rx Bitrate';

$GLOBALS["lang"]['Rx Bitrate'] = 'Rx Bitrate';

$GLOBALS["lang"]['rx_freq'] = 'Seirbhís do Chustaiméirí';

$GLOBALS["lang"]['Rx Freq'] = 'Seirbhís do Chustaiméirí';

$GLOBALS["lang"]['rx_level'] = 'Leibhéal Rx';

$GLOBALS["lang"]['Rx Level'] = 'Leibhéal Rx';

$GLOBALS["lang"]['rx_power'] = 'Cumhacht Rx';

$GLOBALS["lang"]['Rx Power'] = 'Cumhacht Rx';

$GLOBALS["lang"]['rx_profile'] = 'Próifíl Rx';

$GLOBALS["lang"]['Rx Profile'] = 'Próifíl Rx';

$GLOBALS["lang"]['SAN Audit'] = 'Iniúchóireacht SAN';

$GLOBALS["lang"]['SAN Auto-Discover'] = 'SAN Auto-Discover';

$GLOBALS["lang"]['SELECT'] = 'SELECT';

$GLOBALS["lang"]['SID'] = 'SEIF SEIF';

$GLOBALS["lang"]['SM Version'] = 'Leagan SM';

$GLOBALS["lang"]['SNMP (v1 / v2)'] = 'SNMP (v1 / v2)';

$GLOBALS["lang"]['SNMP Details'] = 'SNMP Sonraí Teagmhála';

$GLOBALS["lang"]['SNMP OID'] = 'SNMP OID';

$GLOBALS["lang"]['SNMP Version'] = 'SNMP Leagan';

$GLOBALS["lang"]['SNMP v3'] = 'SNMP v3';

$GLOBALS["lang"]['SQL'] = 'SQL';

$GLOBALS["lang"]['SQL (Advanced)'] = 'SQL (Advanced)';

$GLOBALS["lang"]['SQL Creation Statements'] = 'Plean Gníomhaíochta don Oideachas';

$GLOBALS["lang"]['SQL not containing this condition will result in the widget failing to be executed.'] = 'SQL nach bhfuil an coinníoll seo mar thoradh ar an ghiuirléid gan a fhorghníomhú.';

$GLOBALS["lang"]['SSH'] = 'SSH';

$GLOBALS["lang"]['SSH Key'] = 'SSH Príomhscéalta an Iarthair';

$GLOBALS["lang"]['SW Revision'] = 'Athbhreithniú ar Shonraí';

$GLOBALS["lang"]['Saint Barthelemy'] = 'Saint Barthelemy';

$GLOBALS["lang"]['Saint Helena'] = 'bláthanna cumhra: cumhráin';

$GLOBALS["lang"]['Saint Kitts and Nevis'] = 'Saint Kitts agus Nevis';

$GLOBALS["lang"]['Saint Lucia'] = 'Naomh Lucia';

$GLOBALS["lang"]['Saint Martin'] = 'Naomh Máirtín';

$GLOBALS["lang"]['Saint Pierre and Miquelon'] = 'Saint Pierre agus Miquelon';

$GLOBALS["lang"]['Saint Vincent and the Grenadines'] = 'Saint Vincent agus na Grenadines';

$GLOBALS["lang"]['Samoa'] = 'Samoa';

$GLOBALS["lang"]['san'] = 'San áireamh';

$GLOBALS["lang"]['San'] = 'San áireamh';

$GLOBALS["lang"]['San Marino'] = 'San áireamh';

$GLOBALS["lang"]['Sao Tome and Principe'] = 'Sao Tome agus Principe';

$GLOBALS["lang"]['Saturday'] = 'Dé hAoine';

$GLOBALS["lang"]['Saudi Arabia'] = 'An Araib Shádach';

$GLOBALS["lang"]['Save and run the file. Make sure you run the file as an Administrator in order to install it (right click, Run as Administrator).'] = 'Sábháil agus a reáchtáil an comhad. Bí cinnte go ritheann tú an comhad mar Riarthóir chun é a shuiteáil (cliceáil ar dheis, Rith mar Riarthóir).';

$GLOBALS["lang"]['Save as Default'] = 'Sábháil mar Réamhshocrú';

$GLOBALS["lang"]['Save the downloaded file.'] = 'Sábháil an comhad a íoslódáil.';

$GLOBALS["lang"]['scaling'] = 'Scaling';

$GLOBALS["lang"]['Scaling'] = 'Scaling';

$GLOBALS["lang"]['scan_options'] = 'Roghanna Scan';

$GLOBALS["lang"]['Scan Options'] = 'Roghanna Scan';

$GLOBALS["lang"]['Scan Options ID'] = 'Scan Roghanna ID';

$GLOBALS["lang"]['Scan for this port(s) and if detected open, use this port for SSH communication. This is added to the list of Custom TCP Ports above (if not already included), so there is no need to include it in that list as well. Comma seperated, no spaces.'] = 'Scan don chalafort seo agus má aimsítear é oscailte, bain úsáid as an gcalafort seo le haghaidh cumarsáide SSH. Cuirtear é seo leis an liosta de Chalafoirt TCP an Chustaim thuas (mura n-áirítear cheana féin), mar sin níl aon ghá é a chur san áireamh sa liosta sin chomh maith. Tiomsaithe, gan aon spásanna.';

$GLOBALS["lang"]['Scan the Nmap top number of TCP ports.'] = 'Scan an líon barr Nmap na calafoirt TCP.';

$GLOBALS["lang"]['Scan the Nmap top number of UDP ports.'] = 'Scan an líon barr Nmap de chalafoirt UDP.';

$GLOBALS["lang"]['schedule'] = 'Sceideal an tSeanaid';

$GLOBALS["lang"]['Schedule'] = 'Sceideal an tSeanaid';

$GLOBALS["lang"]['Scheduled device discovery and reporting make Open-AudIT Professional an efficient solution for busy IT professionals looking to reduce overheads and increase insights.'] = 'fhionnachtain gléas Sceidealta agus tuairisciú a dhéanamh Open-AudIT Gairmiúla réiteach éifeachtach do ghairmithe TF gnóthach ag iarraidh a laghdú forchostais agus léargais a mhéadú.';

$GLOBALS["lang"]['Scheduling - discovery, reporting &amp; more'] = 'Scheduling - fionnachtain, tuairisciú agus níos mó';

$GLOBALS["lang"]['scope'] = 'Raon feidhme';

$GLOBALS["lang"]['Scope'] = 'Raon feidhme';

$GLOBALS["lang"]['Scope is known as Authorization Scope, representing whether a vulnerability affects resources beyond the original security authority of the vulnerable component.<br><br>The only two valid values for this attribute are'] = 'Tugtar Raon Feidhme Údarúcháin ar raon feidhme, a dhéanann ionadaíocht ar cé acu a dhéanann leochaileacht difear d\'acmhainní thar údarás slándála bunaidh na comhpháirte leochailí.<br/><br/>Tá an t-aon dá luachanna bailí don tréith seo';

$GLOBALS["lang"]['script_timeout'] = 'Amharc ar gach eolas';

$GLOBALS["lang"]['Script Timeout'] = 'Amharc ar gach eolas';

$GLOBALS["lang"]['scripts'] = 'Scripteanna';

$GLOBALS["lang"]['Scripts'] = 'Scripteanna';

$GLOBALS["lang"]['scsi'] = 'Scríbhneoir';

$GLOBALS["lang"]['Scsi'] = 'Scríbhneoir';

$GLOBALS["lang"]['scsi_bus'] = 'Roghnaigh gach rud';

$GLOBALS["lang"]['Scsi Bus'] = 'Roghnaigh gach rud';

$GLOBALS["lang"]['scsi_logical_unit'] = 'Aonad Logáil Scsi';

$GLOBALS["lang"]['Scsi Logical Unit'] = 'Aonad Logáil Scsi';

$GLOBALS["lang"]['scsi_port'] = 'Seirbhís do Chustaiméirí';

$GLOBALS["lang"]['Scsi Port'] = 'Seirbhís do Chustaiméirí';

$GLOBALS["lang"]['Search'] = 'Cuardaigh Cuardaigh Cuardaigh';

$GLOBALS["lang"]['Search For a Device'] = 'Cuardaigh le haghaidh Gléas';

$GLOBALS["lang"]['Searching Using DataTables'] = 'Ag baint úsáide as Cáblaí Sonraí';

$GLOBALS["lang"]['Second'] = 'Dara dul síos';

$GLOBALS["lang"]['secondary'] = 'Meánscoileanna';

$GLOBALS["lang"]['Secondary'] = 'Meánscoileanna';

$GLOBALS["lang"]['Secondary Text'] = 'Téacs dara leibhéal';

$GLOBALS["lang"]['Secret Key'] = 'Gach ceart ar cosaint.';

$GLOBALS["lang"]['section'] = 'An Roinn';

$GLOBALS["lang"]['Section'] = 'An Roinn';

$GLOBALS["lang"]['secure'] = 'Amharc ar gach eolas';

$GLOBALS["lang"]['Secure'] = 'Amharc ar gach eolas';

$GLOBALS["lang"]['Security Content Automation Protocol'] = 'Prótacal Uathoibriú Ábhar Slándáil';

$GLOBALS["lang"]['Security Level'] = 'Leibhéal slándála';

$GLOBALS["lang"]['Security Name'] = 'Ainm an tSlándáil';

$GLOBALS["lang"]['Security Status'] = 'Stádas Slándáil';

$GLOBALS["lang"]['security_zone'] = 'Slándáil Crios';

$GLOBALS["lang"]['Security Zone'] = 'Slándáil Crios';

$GLOBALS["lang"]['See above. NOTE - This could also be caused by a self-signed certificate on the LDAP server. We are working to allow for this in a future release.'] = 'Féach thuas. NÓTA - D\'fhéadfadh deimhniú féin-sínithe a bheith mar thoradh air seo ar an bhfreastalaí LDAP. Táimid ag obair chun ligean seo i scaoileadh amach anseo.';

$GLOBALS["lang"]['See our page on enabling'] = 'Féach ar ár leathanach ar chumas';

$GLOBALS["lang"]['Seed Discoveries'] = 'Inis dúinn, le do thoil...';

$GLOBALS["lang"]['seed_ip'] = 'IP Seed';

$GLOBALS["lang"]['Seed IP'] = 'IP Seed';

$GLOBALS["lang"]['seed_ping'] = 'Seirbhís do Chustaiméirí';

$GLOBALS["lang"]['Seed Ping'] = 'Seirbhís do Chustaiméirí';

$GLOBALS["lang"]['seed_restrict_to_private'] = 'Srianta le Príobháideacha';

$GLOBALS["lang"]['Seed Restrict To Private'] = 'Srianta le Príobháideacha';

$GLOBALS["lang"]['seed_restrict_to_subnet'] = 'Srianta le Subnet';

$GLOBALS["lang"]['Seed Restrict To Subnet'] = 'Srianta le Subnet';

$GLOBALS["lang"]['Select'] = 'Roghnaigh gach rud';

$GLOBALS["lang"]['Select Admin -> Tasks -> Create Task from the menu.'] = 'Roghnaigh Riarachán - uaire Tascanna - × tréimhse saoil: ilbhliantúil Tasc ón roghchlár.';

$GLOBALS["lang"]['Select All'] = 'Roghnaigh gach rud';

$GLOBALS["lang"]['Select All Devices'] = 'Roghnaigh gach Gléas';

$GLOBALS["lang"]['select_external_attribute'] = 'Roghnaigh ómós seachtrach';

$GLOBALS["lang"]['Select External Attribute'] = 'Roghnaigh ómós seachtrach';

$GLOBALS["lang"]['select_external_count'] = 'Roghnaigh Contae na Gaillimhe';

$GLOBALS["lang"]['Select External Count'] = 'Roghnaigh Contae na Gaillimhe';

$GLOBALS["lang"]['select_external_type'] = 'Roghnaigh seachtrach Cineál Cineál Cineál Cineál';

$GLOBALS["lang"]['Select External Type'] = 'Roghnaigh seachtrach Cineál Cineál Cineál Cineál';

$GLOBALS["lang"]['select_external_value'] = 'Roghnaigh seachtrach Luach';

$GLOBALS["lang"]['Select External Value'] = 'Roghnaigh seachtrach Luach';

$GLOBALS["lang"]['select_internal_attribute'] = 'Roghnaigh ómós inmheánach';

$GLOBALS["lang"]['Select Internal Attribute'] = 'Roghnaigh ómós inmheánach';

$GLOBALS["lang"]['select_internal_count'] = 'Roghnaigh Comhaireamh Inmheánach';

$GLOBALS["lang"]['Select Internal Count'] = 'Roghnaigh Comhaireamh Inmheánach';

$GLOBALS["lang"]['select_internal_type'] = 'Roghnaigh inmheánach Cineál Cineál Cineál Cineál';

$GLOBALS["lang"]['Select Internal Type'] = 'Roghnaigh inmheánach Cineál Cineál Cineál Cineál';

$GLOBALS["lang"]['select_internal_value'] = 'Roghnaigh inmheánach Luach';

$GLOBALS["lang"]['Select Internal Value'] = 'Roghnaigh inmheánach Luach';

$GLOBALS["lang"]['Select Menu -> Manage -> Baselines -> List Baselines.'] = 'Roghnaigh Roghchlár - lí Bainistiú - uaire Baselines - × Liosta Baselines.';

$GLOBALS["lang"]['Select a Table'] = 'Roghnaigh Tábla';

$GLOBALS["lang"]['Select an accredited certification body'] = 'Roghnaigh comhlacht deimhniúcháin creidiúnaithe';

$GLOBALS["lang"]['Select and apply appropriate controls (Annex A)'] = 'Roghnaigh agus cuir rialuithe iomchuí i bhfeidhm (Iarscríbhinn A)';

$GLOBALS["lang"]['Select the <i>COM Security</i> tab<br><br>Click on Access Permissions Edit Default'] = 'Roghnaigh an <i>COM COIM COM Slándáil agus Slándáil</i> cluaisín tab<br/><br/>Cliceáil ar Cheadanna Rochtana Déan teagmháil';

$GLOBALS["lang"]['Select the <i>Sign On</i> tab and copy the value for <i>Issuer</i> (just the URL itself). Paste this into the Open-AudIT <i>Issuer</i> field.'] = 'Roghnaigh an <i>Cláraigh Ar Aghaidh</i> tab agus cóip an luach le haghaidh <i>Amharc ar gach eolas</i> (ach an URL féin). Greamaigh seo isteach sa Open-AudIT <i>Amharc ar gach eolas</i> réimse.';

$GLOBALS["lang"]['Select the <i>This Account</i> checkbox and provide the account name and password.'] = 'Roghnaigh an <i>An Cuntas seo</i> bosca seiceála agus an t-ainm cuntais agus focal faire a chur ar fáil.';

$GLOBALS["lang"]['Select the Start menu and type <i>services<.i>. Click the Services icon.'] = 'Roghnaigh an roghchlár Tosaigh agus cineál <i>seirbhísí .i. Cliceáil ar an deilbhín Seirbhísí.</i>';

$GLOBALS["lang"]['Select the type of Auth Menthod to create and input the relevant details.'] = 'Roghnaigh an cineál Auth Menthod a chruthú agus ionchur na sonraí ábhartha.';

$GLOBALS["lang"]['Self Delete'] = 'Conas a Scriosadh';

$GLOBALS["lang"]['Senegal'] = 'An tSeineagáil';

$GLOBALS["lang"]['sensitivity'] = 'Íogaireacht';

$GLOBALS["lang"]['Sensitivity'] = 'Íogaireacht';

$GLOBALS["lang"]['September'] = 'Meán Fómhair 2015';

$GLOBALS["lang"]['Serbia'] = 'an tSeirbia';

$GLOBALS["lang"]['serial'] = 'Sraithuimhir';

$GLOBALS["lang"]['Serial'] = 'Sraithuimhir';

$GLOBALS["lang"]['serial_imei'] = 'Sraith an Domhain Ainmhithe';

$GLOBALS["lang"]['Serial Imei'] = 'Sraith an Domhain Ainmhithe';

$GLOBALS["lang"]['serial_sim'] = 'Sraithuimhir Sim';

$GLOBALS["lang"]['Serial Sim'] = 'Sraithuimhir Sim';

$GLOBALS["lang"]['series'] = 'Sraith an Domhain Ainmhithe';

$GLOBALS["lang"]['Series'] = 'Sraith an Domhain Ainmhithe';

$GLOBALS["lang"]['server'] = 'Freastalaí Freastalaí';

$GLOBALS["lang"]['Server'] = 'Freastalaí Freastalaí';

$GLOBALS["lang"]['server_id'] = 'Freastalaí ID';

$GLOBALS["lang"]['Server ID'] = 'Freastalaí ID';

$GLOBALS["lang"]['Server Is'] = 'Is maith liom é';

$GLOBALS["lang"]['server_item'] = 'Mír Freastalaí';

$GLOBALS["lang"]['Server Item'] = 'Mír Freastalaí';

$GLOBALS["lang"]['Server Status'] = 'Stádas Freastalaí';

$GLOBALS["lang"]['Servers'] = 'Freastalaithe';

$GLOBALS["lang"]['Servers Only'] = 'Freastalaithe ach amháin';

$GLOBALS["lang"]['service'] = 'Seirbhís do Chustaiméirí';

$GLOBALS["lang"]['Service'] = 'Seirbhís do Chustaiméirí';

$GLOBALS["lang"]['service_identifier'] = 'Seirbhís Aitheantas';

$GLOBALS["lang"]['Service Identifier'] = 'Seirbhís Aitheantas';

$GLOBALS["lang"]['service_level_a'] = 'Leibhéal Seirbhíse A';

$GLOBALS["lang"]['Service Level A'] = 'Leibhéal Seirbhíse A';

$GLOBALS["lang"]['service_level_b'] = 'Leibhéal na Seirbhíse B';

$GLOBALS["lang"]['Service Level B'] = 'Leibhéal na Seirbhíse B';

$GLOBALS["lang"]['service_network'] = 'Líonra na Seirbhíse';

$GLOBALS["lang"]['Service Network'] = 'Líonra na Seirbhíse';

$GLOBALS["lang"]['service_number'] = 'Uimhir na Seirbhíse';

$GLOBALS["lang"]['Service Number'] = 'Uimhir na Seirbhíse';

$GLOBALS["lang"]['service_pack'] = 'Seirbhís do Chustaiméirí';

$GLOBALS["lang"]['Service Pack'] = 'Seirbhís do Chustaiméirí';

$GLOBALS["lang"]['service_plan'] = 'Naisc ábhartha eile';

$GLOBALS["lang"]['Service Plan'] = 'Naisc ábhartha eile';

$GLOBALS["lang"]['service_provider'] = 'Soláthairtí Seirbhíse';

$GLOBALS["lang"]['Service Provider'] = 'Soláthairtí Seirbhíse';

$GLOBALS["lang"]['service_tag'] = 'Seirbhís do Chustaiméirí';

$GLOBALS["lang"]['Service Tag'] = 'Seirbhís do Chustaiméirí';

$GLOBALS["lang"]['service_type'] = 'Cineál seirbhíse';

$GLOBALS["lang"]['Service Type'] = 'Cineál seirbhíse';

$GLOBALS["lang"]['Service Under Windows'] = 'Seirbhís Faoi Windows';

$GLOBALS["lang"]['service_version'] = 'Leagan seirbhíse';

$GLOBALS["lang"]['Service Version'] = 'Leagan seirbhíse';

$GLOBALS["lang"]['Set'] = 'Socraigh Socraigh Socraigh';

$GLOBALS["lang"]['set_by'] = 'Socraigh de réir';

$GLOBALS["lang"]['Set By'] = 'Socraigh de réir';

$GLOBALS["lang"]['Set by the Discovery function - do not normally set this manually.'] = 'Socraigh ag an fheidhm Discovery - ná a leagtar de ghnáth seo de láimh.';

$GLOBALS["lang"]['Set by the audit_domain or discover_domain scripts. Do not set.'] = 'Socraigh ag an iniúchadh_domain nó scripteanna discover_domain. Ná leagtar.';

$GLOBALS["lang"]['Set the external text to capitalized version of the internal data.'] = 'Socraigh an téacs seachtrach go leagan caipitlithe de na sonraí inmheánacha.';

$GLOBALS["lang"]['Set the external text to lowercase.'] = 'Socraigh an téacs seachtrach a ísliú.';

$GLOBALS["lang"]['Set the external text to uppercase.'] = 'Socraigh an téacs seachtrach go uachtair.';

$GLOBALS["lang"]['Set the size (normal or compact) of the tables on the List screens.'] = 'Socraigh an méid (gnáth nó dlúth) de na táblaí ar na scáileáin Liosta.';

$GLOBALS["lang"]['Set this if you wish to insert systems from AD that may not be contactable, but have been seen by AD since that date.'] = 'Socraigh seo más mian leat córais a chur isteach ó AD nach féidir teagmháil a dhéanamh leo, ach tá siad le feiceáil ag AD ón dáta sin.';

$GLOBALS["lang"]['Setting up Discovery on a subnet is almost identical to running a regular Discovery via the web interface. The only additional items are the scheduled hour and day(s) and a name for the Scheduled Task itself. You can take advantage of this to schedule multiple discoveries using different sets of credentials.<br><br>As per the Subnet Discovery, the Active Directory Discovery is also simply the same fields as a regular Active Directory Discovery with the addition of a day, hour(s) and name.<br><br>If the Open-AudIT Server has Collectors reporting to it, an additional drop down is provided. You can select this to specify which Collector the task should run on. Only Discovery tasks are supported for Collectors. Specify the same items as a regular Discovery, but provide the alternate Collector to run this task.'] = 'Dul suas Discovery ar subnet beagnach comhionann a reáchtáil Discovery rialta tríd an comhéadan gréasáin. Is iad na míreanna breise amháin an uair sceidealta agus an lá/na laethanta agus ainm don Tasc Sceidealta féin. Is féidir leat leas a bhaint as seo a sceideal fionnachtana il ag baint úsáide as sraitheanna éagsúla dintiúir.<br/><br/>De réir an Discovery Subnet, is é an Eolaire Gníomhach Discovery freisin ach na réimsí céanna mar Eolaire Gníomhach rialta Discovery leis an Chomh maith le lá, uair an chloig (í) agus ainm.<br/><br/>Má tá an Freastalaí Open-AudIT Bailitheoirí tuairisciú dó, tá titim breise ar fáil. Is féidir leat é seo a roghnú a shonrú ar chóir do Bhailitheoir an tasc a reáchtáil ar. Níl ach tascanna Discovery tacaíocht do Bailitheoirí. Sonraigh na míreanna céanna mar Discovery rialta, ach a chur ar fáil don Bhailitheoir malartach a reáchtáil an tasc seo.';

$GLOBALS["lang"]['severity'] = 'Severity';

$GLOBALS["lang"]['Severity'] = 'Severity';

$GLOBALS["lang"]['severity_text'] = 'Severity Téacs';

$GLOBALS["lang"]['Severity Text'] = 'Severity Téacs';

$GLOBALS["lang"]['Severity is calculated from the <code>base_score</code> and can be one of: None, Low, Medium, High, Critical.'] = 'Déantar Severity a ríomh ón <code>base_score</code> agus is féidir a bheith ar cheann de: None, Íseal, Meánach, Ard, Critical.';

$GLOBALS["lang"]['Seychelles'] = 'riachtanais uisce: measartha';

$GLOBALS["lang"]['share'] = 'Comhroinn an leathanach';

$GLOBALS["lang"]['Share'] = 'Comhroinn an leathanach';

$GLOBALS["lang"]['Share Name'] = 'Comhroinn an leathanach';

$GLOBALS["lang"]['shared'] = 'Roinnte';

$GLOBALS["lang"]['Shared'] = 'Roinnte';

$GLOBALS["lang"]['shared_name'] = 'Roinnte Ainm';

$GLOBALS["lang"]['Shared Name'] = 'Roinnte Ainm';

$GLOBALS["lang"]['shell'] = 'An tSeirbhís Dóiteáin';

$GLOBALS["lang"]['Shell'] = 'An tSeirbhís Dóiteáin';

$GLOBALS["lang"]['Ship Date'] = 'Dáta na Long';

$GLOBALS["lang"]['Shipped are a set of default items. These can be found by going to menu'] = 'Tá Shipped sraith de míreanna réamhshocraithe. Is féidir iad seo a fháil ag dul go dtí roghchlár';

$GLOBALS["lang"]['short'] = 'Gearr-theideal.';

$GLOBALS["lang"]['Short'] = 'Gearr-theideal.';

$GLOBALS["lang"]['Should I remove all non-current data from this device?'] = 'Ar chóir dom na sonraí neamh-reatha go léir a bhaint as an bhfeiste seo?';

$GLOBALS["lang"]['Should this file (or pattern) be used to exclude files from being reported. Normally, to audit files, this is set to <code>y</code>.'] = 'Ba chóir an comhad seo (nó patrún) a úsáid chun comhaid a eisiamh ó bheith tuairiscithe. De ghnáth, chun comhaid a iniúchadh, tá sé seo leagtha chun <code>y</code>.';

$GLOBALS["lang"]['Should this vendor be used when retrieving vulnerabilities from FirstWave.'] = 'Ba chóir an díoltóir a úsáid nuair a retrieving leochaileachtaí ó FirstWave.';

$GLOBALS["lang"]['Should we add devices from the remote service, locally.'] = 'Ar chóir dúinn feistí a chur as an tseirbhís iargúlta, go háitiúil.';

$GLOBALS["lang"]['Should we apply this license to the selected Org as well as the Orgs children?'] = 'Ar chóir dúinn an ceadúnas seo a chur i bhfeidhm ar an Org roghnaithe chomh maith leis na páistí Orgs?';

$GLOBALS["lang"]['Should we audit a SAN if the management software is detected.'] = 'Ar chóir dúinn iniúchadh a dhéanamh ar SAN má bhraitear na bogearraí bainistíochta.';

$GLOBALS["lang"]['Should we audit mount points.'] = 'Ar chóir dúinn iniúchadh pointí mount.';

$GLOBALS["lang"]['Should we audit netstat ports (yes, no, servers only).'] = 'Ar chóir dúinn iniúchadh calafoirt glanstat (tá, aon, freastalaithe amháin).';

$GLOBALS["lang"]['Should we audit the installed software.'] = 'Ar chóir dúinn iniúchadh a dhéanamh ar na bogearraí suiteáilte.';

$GLOBALS["lang"]['Should we consider a filtered port to be an open port - and therefore flag this IP as having a device attached?'] = 'Ar chóir dúinn a mheas port scagtha a bheith ina calafort oscailte - agus dá bhrí sin bratach an IP mar a bhfuil gléas ceangailte?';

$GLOBALS["lang"]['Should we consider an open|filtered port to be an open port - and therefore flag this IP as having a device attached?'] = 'Ar chóir dúinn a mheas ar port cláraithe oscailte a bheith ina port oscailte - agus dá bhrí sin, bratach an IP mar a bhfuil gléas ceangailte?';

$GLOBALS["lang"]['Should we convert the hostname to lowercase.'] = 'Ar chóir dúinn an t-ainm ósta a thiontú go níos ísle.';

$GLOBALS["lang"]['Should we create a file based on the audit result.'] = 'Ar chóir dúinn comhad a chruthú bunaithe ar an toradh iniúchóireachta.';

$GLOBALS["lang"]['Should we expose this group in the web interface.'] = 'Ba chóir dúinn a nochtadh an grúpa seo sa chomhéadan gréasáin.';

$GLOBALS["lang"]['Should we expose this query in the list of reports under the Report menu in the web interface.'] = 'Ba chóir dúinn an cheist seo a nochtadh i liosta na dtuarascálacha faoin roghchlár Tuarascála sa chomhéadan gréasáin.';

$GLOBALS["lang"]['Should we expose this query in the list of reports under the Reports menu in the web interface.'] = 'Ba chóir dúinn an cheist seo a nochtadh i liosta na dtuarascálacha faoin roghchlár Tuarascálacha sa chomhéadan gréasáin.';

$GLOBALS["lang"]['Should we hide the audit script window when executing.'] = 'Ba chóir dúinn a cheilt ar an fhuinneog script iniúchóireachta nuair a forghníomhaitheach.';

$GLOBALS["lang"]['Should we ignore an invalid or self signed SSL certificate and submit the result anyway.'] = 'Ba chóir dúinn neamhaird a dhéanamh ar an deimhniú SSL neamhbhailí nó féin sínithe agus a chur isteach ar an toradh ar aon nós.';

$GLOBALS["lang"]['Should we install Open-Scap on the target machine.'] = 'Ar chóir dúinn a shuiteáil Open-Scap ar an meaisín sprioc.';

$GLOBALS["lang"]['Should we match a device based mac address even if its a known likely duplicate from VMware.'] = 'Ba chóir dúinn a mheaitseáil le seoladh mac bunaithe gléas fiú má tá a dúblach is dócha ar eolas ó VMware.';

$GLOBALS["lang"]['Should we match a device based on its DNS fqdn.'] = 'Ba chóir dúinn a mheaitseáil gléas bunaithe ar a fqdn DNS.';

$GLOBALS["lang"]['Should we match a device based on its DNS hostname.'] = 'Ba chóir dúinn a mheaitseáil gléas bunaithe ar a hostname DNS.';

$GLOBALS["lang"]['Should we match a device based on its UUID.'] = 'Ar chóir dúinn a mheaitseáil gléas bunaithe ar a UUID.';

$GLOBALS["lang"]['Should we match a device based on its dbus id.'] = 'Ba chóir dúinn a mheaitseáil gléas bunaithe ar a dbus id.';

$GLOBALS["lang"]['Should we match a device based on its fqdn.'] = 'Ba chóir dúinn a mheaitseáil gléas bunaithe ar a fqdn.';

$GLOBALS["lang"]['Should we match a device based on its hostname and UUID.'] = 'Ba chóir dúinn a mheaitseáil gléas bunaithe ar a hostname agus UUID.';

$GLOBALS["lang"]['Should we match a device based on its hostname and dbus id.'] = 'Ba chóir dúinn a mheaitseáil gléas bunaithe ar a hostname agus dbus id.';

$GLOBALS["lang"]['Should we match a device based on its hostname and serial.'] = 'Ba chóir dúinn a mheaitseáil gléas bunaithe ar a hostname agus sraitheach.';

$GLOBALS["lang"]['Should we match a device based on its ip if we have an existing device with no data.'] = 'Ar chóir dúinn gléas a mheaitseáil bunaithe ar a ip má tá gléas atá ann cheana féin againn gan aon sonraí.';

$GLOBALS["lang"]['Should we match a device based on its ip.'] = 'Ba chóir dúinn a mheaitseáil gléas bunaithe ar a ip.';

$GLOBALS["lang"]['Should we match a device based on its mac address.'] = 'Ar chóir dúinn gléas a mheaitseáil bunaithe ar a sheoladh mac.';

$GLOBALS["lang"]['Should we match a device based on its serial and type.'] = 'Ba chóir dúinn a mheaitseáil gléas bunaithe ar a sraitheach agus cineál.';

$GLOBALS["lang"]['Should we match a device based on its serial number.'] = 'Ba chóir dúinn a mheaitseáil gléas bunaithe ar a sraithuimhir.';

$GLOBALS["lang"]['Should we match a device based only on its SNMP sysName and serial.'] = 'Ba chóir dúinn a mheaitseáil gléas bunaithe ach amháin ar a sysName SNMP agus sraitheach.';

$GLOBALS["lang"]['Should we match a device based only on its SNMP sysName.'] = 'Ba chóir dúinn a mheaitseáil gléas bunaithe ach amháin ar a sysName SNMP.';

$GLOBALS["lang"]['Should we match a device based only on its hostname.'] = 'Ba chóir dúinn a mheaitseáil gléas bunaithe ach amháin ar a hostname.';

$GLOBALS["lang"]['Should we ping the IP before attempting to scan it? If it does not respond to the ping, skip this device.'] = 'Ar chóir dúinn ping an IP roimh iarracht a scanadh é? Mura bhfreagraíonn sé don ping, skip an gléas seo.';

$GLOBALS["lang"]['Should we populate the external system from our local devices.'] = 'Ba chóir dúinn populate an córas seachtrach ó ár feistí áitiúla.';

$GLOBALS["lang"]['Should we retrieve all DNS names'] = 'Ar chóir dúinn a aisghabháil go léir ainmneacha DNS';

$GLOBALS["lang"]['Should we run an audit and submit it (y/n).'] = 'Ar chóir dúinn a reáchtáil iniúchadh agus é a chur isteach (y/n).';

$GLOBALS["lang"]['Should we test for SNMP using UDP port 161.'] = 'Ar chóir dúinn tástáil do SNMP ag baint úsáide as UDP port 161.';

$GLOBALS["lang"]['Should we test for SSH using TCP port 22.'] = 'Ba chóir dúinn tástáil do SSH ag baint úsáide as TCP port 22.';

$GLOBALS["lang"]['Should we test for WMI using TCP port 135.'] = 'Ba chóir dúinn tástáil do WMI ag baint úsáide as TCP port 135.';

$GLOBALS["lang"]['Should we uninstall the agent (y/n).'] = 'Ba chóir dúinn a dhíshuiteáil an gníomhaire (y/n).';

$GLOBALS["lang"]['Should we use the system or user level proxy to submit the audit result.'] = 'Ar cheart dúinn an córas nó seachfhreastalaí leibhéal an úsáideora a úsáid chun an toradh iniúchóireachta a chur isteach.';

$GLOBALS["lang"]['Should we use the win32_product WMI class (not recommended by Microsoft) when retrieving installed software.'] = 'Ba chóir dúinn a bhaint as an rang WMI win32_product (nach bhfuil molta ag Microsoft) nuair a aisghabháil bogearraí suiteáilte.';

$GLOBALS["lang"]['Should we use this method to authenticate user credentials. Set to <code>y</code> or <code>n</code>.'] = 'Ba chóir dúinn an modh seo a úsáid chun dintiúir úsáideora a fhíordheimhniú. Socraigh le <code>y</code> nó <code>n</code>.';

$GLOBALS["lang"]['Should we use this method to populate a users roles. The field <code>use_auth</code> must be set to <code>y</code> to use this. Set to <code>y</code> or <code>n</code>.'] = 'Ba chóir dúinn úsáid a bhaint as an modh seo a populate róil úsáideoirí. An réimse <code>use_auth</code> Ní mór a shocrú <code>y</code> seo a úsáid. Socraigh le <code>y</code> nó <code>n</code>.';

$GLOBALS["lang"]['Should we use this value to match external and internal devices. Our default Integration uses IP and UUID here. If either of these match between external and internal device, we consider them to be the same device.'] = 'Ar cheart dúinn an luach seo a úsáid chun feistí seachtracha agus inmheánacha a mheaitseáil. Úsáideann ár Comhtháthú réamhshocraithe IP agus UUID anseo. Má tá ceachtar de na mheaitseáil idir gléas seachtrach agus inmheánach, a mheasamar iad a bheith ar an ngléas céanna.';

$GLOBALS["lang"]['Show All'] = 'Taispeáin Gach';

$GLOBALS["lang"]['sid'] = 'Síceolaí';

$GLOBALS["lang"]['Sid'] = 'Síceolaí';

$GLOBALS["lang"]['sidebar'] = 'Sidebar';

$GLOBALS["lang"]['Sidebar'] = 'Sidebar';

$GLOBALS["lang"]['Sierra Leone'] = 'Seirbhís do Chustaiméirí';

$GLOBALS["lang"]['Singapore'] = 'tréimhse saoil: ilbhliantúil';

$GLOBALS["lang"]['Site A'] = 'Suíomh:';

$GLOBALS["lang"]['Site B'] = 'Láithreán B';

$GLOBALS["lang"]['site_hours_a'] = 'Uaireanta an Láithreáin';

$GLOBALS["lang"]['Site Hours A'] = 'Uaireanta an Láithreáin';

$GLOBALS["lang"]['site_hours_b'] = 'Uaireanta Láithreán B';

$GLOBALS["lang"]['Site Hours B'] = 'Uaireanta Láithreán B';

$GLOBALS["lang"]['size'] = 'Méid an Méid';

$GLOBALS["lang"]['Size'] = 'Méid an Méid';

$GLOBALS["lang"]['slaves'] = 'Sclábhaithe';

$GLOBALS["lang"]['Slaves'] = 'Sclábhaithe';

$GLOBALS["lang"]['Slovak'] = 'An tSlÃ3ivéin';

$GLOBALS["lang"]['Slovakia (Slovak Republic)'] = 'an tSlóvaic (an tSlóvaic)';

$GLOBALS["lang"]['Slovenia'] = 'an tSlóivéin';

$GLOBALS["lang"]['Slovenian'] = 'Slóivéinis agus';

$GLOBALS["lang"]['Smart Status'] = 'Stádas Cliste';

$GLOBALS["lang"]['smversion'] = 'Smachtbhlianta';

$GLOBALS["lang"]['Smversion'] = 'Smachtbhlianta';

$GLOBALS["lang"]['Sneaky'] = 'riachtanais uisce: measartha';

$GLOBALS["lang"]['snmp_enterprise_id'] = 'Snmp Fiontraíocht ID';

$GLOBALS["lang"]['Snmp Enterprise ID'] = 'Snmp Fiontraíocht ID';

$GLOBALS["lang"]['snmp_enterprise_name'] = 'Ainm Fiontraíochta Cnáib';

$GLOBALS["lang"]['Snmp Enterprise Name'] = 'Ainm Fiontraíochta Cnáib';

$GLOBALS["lang"]['snmp_oid'] = 'Seirbhís do Chustaiméirí';

$GLOBALS["lang"]['Snmp Oid'] = 'Seirbhís do Chustaiméirí';

$GLOBALS["lang"]['snmp_timeout'] = 'Snmp Timeout';

$GLOBALS["lang"]['Snmp Timeout'] = 'Snmp Timeout';

$GLOBALS["lang"]['snmp_version'] = 'Leagan cnáib';

$GLOBALS["lang"]['Snmp Version'] = 'Leagan cnáib';

$GLOBALS["lang"]['So a script is not working on a recalcitrant device. Grrr. The scripts for Windows, Linux, and MacOS all accept the debugging argument. This can be set in the script itself, or provided on the command line. Run the script using that option set to 5 and you should see in which section of the script the failure occurs. For example'] = 'Mar sin, nach bhfuil script ag obair ar ghléas recalcitrant. Grróir. Na scripteanna do Windows, Linux, agus MacOS glacadh go léir leis an argóint debugging. Is féidir é seo a shocrú sa script féin, nó ar fáil ar an líne ordú. Rith an script ag baint úsáide as an rogha a leagtar go 5 agus ba chóir duit a fheiceáil ina alt ar an script a tharlaíonn an teip. Mar shampla';

$GLOBALS["lang"]['So apart from a regular word, what other options are there - I am glad you asked! As per the standard Open-AudIT API, we have several operators for filtering. Operators that can precede the value are'] = 'Mar sin, seachas focal rialta, cad iad na roghanna eile ann - Tá mé sásta d\'iarr tú! De réir an caighdeán Open-AudIT API, ní mór dúinn roinnt oibreoirí le haghaidh scagadh. Oibreoirí is féidir roimh an luach atá';

$GLOBALS["lang"]['So you have an issue providing Open-AudIT credentials to discover your devices. I have an answer - dont then! Sure, I mean, discovery is the best thing since sliced bread. You do not need to know ahead of time <i>Whats On Your Network</i>. But how can you extract data from devices without providing credentials?<br><br>In the case of computers, an easy option is to copy the appropriate audit script to the target machines and set it to execute on a schedule. More details on the wiki. The machines will send their data to Open-AudIT on that schedule, almost as if you were running discovery. The device simply runs the audit script on a schedule (again, you can read the audit script) as the user you tell it to and sends the output to the server. No credentials are involved at all.<br><br>And now we have Agents for Windows. The advantages of an actual installed Agent are'] = 'Mar sin, tá tú ceist ag soláthar dintiúir Oscailte-AudIT a fháil amach do feistí. Tá freagra agam - ná ansin! Cinnte, ciallóidh mé, is é fionnachtain an rud is fearr ó arán slisnithe. Ní gá duit fios a bheith agat roimh am <i>Cad é ar Do Líonra</i>. Ach conas is féidir leat sonraí a bhaint as feistí gan dintiúir a sholáthar?<br/><br/>I gcás ríomhairí, Is rogha éasca a chóipeáil an script iniúchóireachta cuí leis na meaisíní sprioc agus é a shocrú a fhorghníomhú ar sceideal. Tuilleadh sonraí ar an wiki. Beidh na meaisíní a gcuid sonraí a sheoladh chuig Open-AudIT ar an sceideal sin, beagnach mar má bhí tú ag rith fionnachtain. Ritheann an gléas ach an script iniúchóireachta ar sceideal (arís, is féidir leat a léamh an script iniúchóireachta) mar an t-úsáideoir a insint duit é a agus cuireann an t-aschur chuig an bhfreastalaí. Níl aon dintiúir páirteach ar chor ar bith.<br/><br/>Agus anois ní mór dúinn Gníomhairí do Windows. Tá na buntáistí a bhaineann le Gníomhaire suiteáilte iarbhír';

$GLOBALS["lang"]['socket'] = 'Soicéad';

$GLOBALS["lang"]['Socket'] = 'Soicéad';

$GLOBALS["lang"]['software'] = 'Bogearraí Bogearraí';

$GLOBALS["lang"]['Software'] = 'Bogearraí Bogearraí';

$GLOBALS["lang"]['Software Found Last 7 Days'] = 'Bogearraí Bunaithe 7 Lá anuas';

$GLOBALS["lang"]['Software Found Today'] = 'Bogearraí Bunaithe Sa lá atá inniu';

$GLOBALS["lang"]['Software Found Yesterday'] = 'Bogearraí Bunaithe Inné';

$GLOBALS["lang"]['software_key'] = 'Bogearraí Bogearraí';

$GLOBALS["lang"]['Software Key'] = 'Bogearraí Bogearraí';

$GLOBALS["lang"]['Software License Reporting'] = 'Bogearraí Ceadúnas Tuairisciú';

$GLOBALS["lang"]['software_name'] = 'Ainm Bogearraí';

$GLOBALS["lang"]['Software Name'] = 'Ainm Bogearraí';

$GLOBALS["lang"]['Software Policies'] = 'Polasaithe Bogearraí';

$GLOBALS["lang"]['software_revision'] = 'Athbhreithniú Bogearraí';

$GLOBALS["lang"]['Software Revision'] = 'Athbhreithniú Bogearraí';

$GLOBALS["lang"]['software_version'] = 'Leagan Bogearraí';

$GLOBALS["lang"]['Software Version'] = 'Leagan Bogearraí';

$GLOBALS["lang"]['Solaris'] = 'Gréine agus tionscal';

$GLOBALS["lang"]['Solomon Islands'] = 'Oileáin Shona';

$GLOBALS["lang"]['Somalia, Somali Republic'] = 'Somalia, Poblacht Somali';

$GLOBALS["lang"]['Some collections can be executed - queries, etc - see below.'] = 'Is féidir roinnt bailiúcháin a fhorghníomhú - ceisteanna, etc - féach thíos.';

$GLOBALS["lang"]['Some examples are at the bottom of this page. All endpoints also have a minimum list of required fields. These are below.'] = 'Tá roinnt samplaí ag bun an leathanaigh seo. Tá gach endpoints freisin liosta íosta de na réimsí is gá. Tá siad seo thíos.';

$GLOBALS["lang"]['Some of our templates support the new move to dataTables, using server side processing. This massivley improves load times.'] = 'Cuid de ár teimpléid tacú leis an aistriú nua chuig dataTables, ag baint úsáide as próiseáil taobh freastalaí. Feabhsaíonn an massivley amanna ualach.';

$GLOBALS["lang"]['Some other error has occurred when attempting to bind to the LDAP server. It is contactable (ie, the <i>connect</i> above has worked), but for some other reason, binding has not occurred. Check the logs on the LDAP server.'] = 'Tá roinnt earráid eile a tharla nuair iarracht a ceangal leis an bhfreastalaí LDAP. Tá sé i dteagmháil (ie, an <i>nasc nasc nasc nasc</i> thuas d\'oibrigh), ach ar chúis éigin eile, nár tharla ceangailteach. Seiceáil na logaí ar an bhfreastalaí LDAP.';

$GLOBALS["lang"]['Something has gone seriously wrong. Open-AudIT cannot read the <i>orgs</i> table.'] = 'Tá rud éigin imithe go dona mícheart. Ní féidir Open-AudIT léamh an <i>soilse loingseoireachta E</i> tábla.';

$GLOBALS["lang"]['Something has gone seriously wrong. Open-AudIT cannot read the <i>roles</i> table.'] = 'Tá rud éigin imithe go dona mícheart. Ní féidir Open-AudIT léamh an <i>Róil</i> tábla.';

$GLOBALS["lang"]['Sometimes agentless discovery just does not fit your use-case. Maybe your PCs have tight firewalls. Maybe they are not on the network when your discoveries are scheduled. Maybe they are used by remote workers. Whatever the case, this is where an agent can help. Install it on the target machine and it will <i>check-in</i> with your Open-AudIT server on a schedule and accept tasks. The most common task the server requests is for the agent to audit itself and send the result.'] = 'Uaireanta nach bhfuil fionnachtain agentless oiriúnach ach do úsáid-cás. B\'fhéidir go bhfuil do ríomhairí pearsanta ballaí dóiteáin daingean. B\'fhéidir nach bhfuil siad ar an líonra nuair a bhíonn do fionnachtana sceidealta. B\'fhéidir go bhfuil siad in úsáid ag oibrithe iargúlta. Cibé an cás, is é seo nuair is féidir le gníomhaire cabhrú. Suiteáil sé ar an meaisín sprioc agus beidh sé <i>seiceáil isteach</i> le do fhreastalaí Open-AudIT ar sceideal agus tascanna a ghlacadh. Is é an tasc is coitianta na hiarratais freastalaí don ghníomhaire a iniúchadh féin agus an toradh a sheoladh.';

$GLOBALS["lang"]['Sort'] = 'Sórtáil';

$GLOBALS["lang"]['sound'] = 'Fuaim Fuaim';

$GLOBALS["lang"]['Sound'] = 'Fuaim Fuaim';

$GLOBALS["lang"]['source'] = 'Foinse do bhfianaise faoi stiúir glan';

$GLOBALS["lang"]['Source'] = 'Foinse do bhfianaise faoi stiúir glan';

$GLOBALS["lang"]['South Africa'] = 'An Afraic Theas';

$GLOBALS["lang"]['South Georgia and the South Sandwich Islands'] = 'An tSeoirsia Theas agus na hOileáin Sandwich Theas';

$GLOBALS["lang"]['Spain'] = 'An Spáinn';

$GLOBALS["lang"]['Spanish'] = 'taiseachas aeir: fliuch';

$GLOBALS["lang"]['Specific to Azure.'] = 'Sonracha go Azure.';

$GLOBALS["lang"]['Specific to OKTA.'] = 'Sonracha go OKTA.';

$GLOBALS["lang"]['Specifies a comma-separated list of targets (no spaces) to be excluded from the scan. The list you pass in uses normal Nmap syntax, so it can include hostnames, CIDR netblocks, octet ranges, etc.'] = 'Sonraítear liosta de na spriocanna (aon spásanna) atá le heisiamh ón scanadh. An liosta a théann tú in úsáidí gnáth-nósannach, ionas gur féidir é a chur san áireamh Hostnames, CIDR netblocks, raonta octet, etc.';

$GLOBALS["lang"]['speed'] = 'Luas Luas';

$GLOBALS["lang"]['Speed'] = 'Luas Luas';

$GLOBALS["lang"]['speed_down_a'] = 'Luas an Dúin Amharc ar gach eolas';

$GLOBALS["lang"]['Speed Down A'] = 'Luas an Dúin Amharc ar gach eolas';

$GLOBALS["lang"]['speed_down_b'] = 'Luas síos B';

$GLOBALS["lang"]['Speed Down B'] = 'Luas síos B';

$GLOBALS["lang"]['speed_up_a'] = 'Luas suas A';

$GLOBALS["lang"]['Speed Up A'] = 'Luas suas A';

$GLOBALS["lang"]['speed_up_b'] = 'Luas suas B';

$GLOBALS["lang"]['Speed Up B'] = 'Luas suas B';

$GLOBALS["lang"]['sql'] = 'Seirbhís do Chustaiméirí';

$GLOBALS["lang"]['Sql'] = 'Seirbhís do Chustaiméirí';

$GLOBALS["lang"]['Sri Lanka'] = 'Srí Lanca';

$GLOBALS["lang"]['ssh_ports'] = 'Seirbhís do Chustaiméirí';

$GLOBALS["lang"]['Ssh Ports'] = 'Seirbhís do Chustaiméirí';

$GLOBALS["lang"]['ssh_timeout'] = 'Ssh Timeout';

$GLOBALS["lang"]['Ssh Timeout'] = 'Ssh Timeout';

$GLOBALS["lang"]['Stage 1: Documentation review'] = 'Céim 1: Athbhreithniú doiciméadú';

$GLOBALS["lang"]['Stage 2: Implementation and effectiveness review'] = 'Céim 2: Athbhreithniú ar chur chun feidhme agus éifeachtacht';

$GLOBALS["lang"]['Stand-Alone'] = 'Stand-Alone';

$GLOBALS["lang"]['Standard'] = 'Caighdeán Caighdeánach';

$GLOBALS["lang"]['standard_id'] = 'ID Caighdeánach';

$GLOBALS["lang"]['Standard ID'] = 'ID Caighdeánach';

$GLOBALS["lang"]['standards'] = 'Caighdeáin agus Caighdeáin';

$GLOBALS["lang"]['Standards'] = 'Caighdeáin agus Caighdeáin';

$GLOBALS["lang"]['standards_policies'] = 'irl - Library Service';

$GLOBALS["lang"]['Standards Policies'] = 'irl - Library Service';

$GLOBALS["lang"]['standards_results'] = 'Naisc ábhartha eile';

$GLOBALS["lang"]['Standards Results'] = 'Naisc ábhartha eile';

$GLOBALS["lang"]['start_date'] = 'Dáta tosaithe';

$GLOBALS["lang"]['Start Date'] = 'Dáta tosaithe';

$GLOBALS["lang"]['start_mode'] = 'Roghnaigh gach rud';

$GLOBALS["lang"]['Start Mode'] = 'Roghnaigh gach rud';

$GLOBALS["lang"]['Start a web browser and go to'] = 'Tosaigh bhrabhsálaí gréasáin agus téigh go dtí';

$GLOBALS["lang"]['started_date'] = 'Dáta tosaithe';

$GLOBALS["lang"]['Started Date'] = 'Dáta tosaithe';

$GLOBALS["lang"]['Starting June 2018 Google has implemented a pay-as-you-go pricing model for the Google Maps Platform APIs. Previously, most users with moderate usage could use Google Maps, which are embedded into opCharts and Open-AudIT Professional/Enterprise, for free. Googles new policy is outlined here,'] = 'Ag tosú Meitheamh 2018 Google curtha i bhfeidhm múnla praghsála pá-mar-túsa do na APIs Ardán Google Maps. Roimhe seo, d\'fhéadfadh an chuid is mó úsáideoirí a bhfuil úsáid measartha úsáid a bhaint as Google Maps, atá leabaithe i opCharts agus Open-AudIT Gairmiúla / Iontas, saor in aisce. Tá polasaí nua Google leagtha amach anseo,';

$GLOBALS["lang"]['Starts With'] = 'Tosaíonn Le';

$GLOBALS["lang"]['state'] = 'Stáit Aontaithe Mheiriceá';

$GLOBALS["lang"]['State'] = 'Stáit Aontaithe Mheiriceá';

$GLOBALS["lang"]['Stats'] = 'Gach stádas pósta';

$GLOBALS["lang"]['status'] = 'Stádas Stádas';

$GLOBALS["lang"]['Status'] = 'Stádas Stádas';

$GLOBALS["lang"]['Storage'] = 'Stóráil stórála';

$GLOBALS["lang"]['storage_count'] = 'Líon na cealla';

$GLOBALS["lang"]['Storage Count'] = 'Líon na cealla';

$GLOBALS["lang"]['Storage area network'] = 'Líonra limistéar stórála';

$GLOBALS["lang"]['Storage-Area Network'] = 'Líonra Stóráil-Conradh';

$GLOBALS["lang"]['string'] = 'String';

$GLOBALS["lang"]['String'] = 'String';

$GLOBALS["lang"]['sub_resource_id'] = 'ID Sub Acmhainní';

$GLOBALS["lang"]['Sub Resource ID'] = 'ID Sub Acmhainní';

$GLOBALS["lang"]['sub_type'] = 'Cineál Fo';

$GLOBALS["lang"]['Sub Type'] = 'Cineál Fo';

$GLOBALS["lang"]['subject_key_ident'] = 'Amharc ar gach eolas';

$GLOBALS["lang"]['Subject Key Ident'] = 'Amharc ar gach eolas';

$GLOBALS["lang"]['Submit'] = 'Cuir isteach';

$GLOBALS["lang"]['Submit Online'] = 'Cuir isteach ar líne';

$GLOBALS["lang"]['Submitted From'] = 'Ceadaithe Ó';

$GLOBALS["lang"]['Subnet'] = 'Fóirdheontas';

$GLOBALS["lang"]['Subnet Discoveries'] = 'Faigh amach faoi Shonraí';

$GLOBALS["lang"]['Subscription ID'] = 'ID síntiúis';

$GLOBALS["lang"]['suburb'] = 'Fóirithint';

$GLOBALS["lang"]['Suburb'] = 'Fóirithint';

$GLOBALS["lang"]['Success'] = 'Rath agus Rath';

$GLOBALS["lang"]['Sudan'] = 'An tSlÃ3ivéin';

$GLOBALS["lang"]['Sudo Password'] = 'Sudo Pasfhocal';

$GLOBALS["lang"]['Sudo Password (optional)'] = 'Sudo Pasfhocal (roghnach)';

$GLOBALS["lang"]['suite'] = 'Déan Teagmháil Linn';

$GLOBALS["lang"]['Suite'] = 'Déan Teagmháil Linn';

$GLOBALS["lang"]['summaries'] = 'Amharc ar gach eolas';

$GLOBALS["lang"]['Summaries'] = 'Amharc ar gach eolas';

$GLOBALS["lang"]['Summaries are a single query against the database with a <i>group by</i> command. Using this simple method we can easily create a summary for virtually any attribute.<br><br>We no longer require a separate report for each <i>type</i> of a device. We now simply have a summary that groups by <i>devices.type</i> and shows the result. You can then click on a given type from the list and see the matching devices. In this case, one Summary replaces (potentially) 78 reports (there are 78 device types).<br><br>A summary is different to a query in that a summary is designed to group items by a given attribute then provide a <i>click through</i> link to the actual devices. A query is simply a list of items with no further links. As above - this of a Summary as a combined <i>report + subreport</i>, whereas a query is simply a single Report.<br><br>Summaries have a different collection template to the other resources within Open-AudIT. This template shows the Summary as you would expect and also shows buttons with counts of other resources. This page is designed to be the HomePage of Open-AudIT.'] = 'Tá Achoimrí ceist amháin i gcoinne an bhunachar sonraí le <i>grúpa de réir</i> ordú. Ag baint úsáide as an modh simplí is féidir linn a chruthú go héasca achoimre do beagnach aon tréith.<br/><br/>Ní mór dúinn a thuilleadh tuarascáil ar leith do gach <i>cineál gas: in airde</i> de gléas. Táimid anois ach achoimre go grúpaí ag <i>feistí. cineál gas: in airde</i> agus léiríonn an toradh. Is féidir leat cliceáil ansin ar chineál áirithe ón liosta agus féach ar na feistí meaitseáil. Sa chás seo, cuirtear Achoimre amháin in ionad (a d\'fhéadfadh a bheith ann) 78 tuarascáil (tá 78 cineál feiste ann).<br/><br/>Tá achoimre difriúil le ceist sa mhéid is go bhfuil achoimre deartha chun míreanna a ghrúpáil le tréith áirithe a chur ar fáil ansin <i>cliceáil trí</i> nasc chuig na feistí iarbhír. Tá ceist ach liosta de na míreanna gan aon naisc eile. Mar atá thuas - seo de Achoimre mar a chéile <i>tuarascáil + subport</i>, cé go bhfuil ceist ach Tuarascáil amháin.<br/><br/>Tá Achoimrí teimpléad bailiúchán éagsúla do na hacmhainní eile laistigh Open-AudIT. Léiríonn an teimpléad seo an Achoimre mar a bheadh tú ag súil agus léiríonn freisin cnaipí le comhaireamh na n-acmhainní eile. Tá an leathanach seo deartha chun bheith ar an HomePage de Open-AudIT.';

$GLOBALS["lang"]['Summaries are designed to group items by a particular matching column and then to provide a link to individual devices. In the previous versions of Open-AudIT, this would have been two different items - a report and subreport. We have now bundled these into what we call a Summary.'] = 'Dearadh achoimrí chun míreanna a ghrúpáil le colún meaitseáil áirithe agus ansin nasc a chur ar fáil d\'fheistí aonair. Sna leaganacha roimhe seo de Open-AudIT, bheadh sé seo dhá mhír éagsúla - tuarascáil agus fo-thuairisc. Táimid tar éis cuachta anois na isteach cad a ghlaonn muid Achoimre.';

$GLOBALS["lang"]['Summaries provide drilldown reporting capabilities. Simple, intuitive, powerful.'] = 'Soláthraíonn Achoimrí cumais tuairiscithe dhruileála. Simplí, iomasach, cumhachtach.';

$GLOBALS["lang"]['Summaries take the same arguments as Queries.'] = 'Achoimrí a chur ar na hargóintí céanna le Queries.';

$GLOBALS["lang"]['Summary'] = 'Amharc ar gach eolas';

$GLOBALS["lang"]['Sunday'] = 'Domhnach Dé Domhnaigh';

$GLOBALS["lang"]['supplier'] = 'Soláthróirí agus Soláthróirí';

$GLOBALS["lang"]['Supplier'] = 'Soláthróirí agus Soláthróirí';

$GLOBALS["lang"]['Support'] = 'Tacaíocht do Thacaíocht';

$GLOBALS["lang"]['Supported types are <code>subnet</code>, <code>seed</code> and <code>active directory</code>.'] = 'Tá cineálacha tacaíochta <code>subnet</code>, <code>seed</code> agus <code>active directory</code>.';

$GLOBALS["lang"]['Supports compliance with legal and regulatory requirements'] = 'Tacaíochtaí comhlíonadh ceanglas dlíthiúil agus rialála';

$GLOBALS["lang"]['Suriname'] = 'Amharc ar gach eolas';

$GLOBALS["lang"]['Surveillance Audits:</strong> Annual audits to maintain certification'] = 'Iniúchtaí faireachais: iniúchtaí bliantúla ar dheimhniúchán a choimeád';

$GLOBALS["lang"]['Svalbard & Jan Mayen Islands'] = 'Svalbard agus Jan Mayen Oileáin';

$GLOBALS["lang"]['Swaziland'] = 'taiseachas aeir: fliuch';

$GLOBALS["lang"]['Sweden'] = 'An tSualainn';

$GLOBALS["lang"]['Swedish'] = 'Sualainnis Sualainnis';

$GLOBALS["lang"]['switch_device_id'] = 'Athraigh ID Gléas';

$GLOBALS["lang"]['Switch Device ID'] = 'Athraigh ID Gléas';

$GLOBALS["lang"]['switch_port'] = 'taiseachas aeir: fliuch';

$GLOBALS["lang"]['Switch Port'] = 'taiseachas aeir: fliuch';

$GLOBALS["lang"]['Switzerland, Swiss Confederation'] = 'An Eilvéis, Cónaidhm na hEilvéise';

$GLOBALS["lang"]['Symptom'] = 'Comharthaí';

$GLOBALS["lang"]['Syrian Arab Republic'] = 'Poblacht na Siria';

$GLOBALS["lang"]['sysContact'] = 'SysConact';

$GLOBALS["lang"]['SysContact'] = 'SysConact';

$GLOBALS["lang"]['sysDescr'] = 'Seirbhís do Chustaiméirí';

$GLOBALS["lang"]['SysDescr'] = 'Seirbhís do Chustaiméirí';

$GLOBALS["lang"]['sysLocation'] = 'Seirbhís do Chustaiméirí';

$GLOBALS["lang"]['SysLocation'] = 'Seirbhís do Chustaiméirí';

$GLOBALS["lang"]['sysName'] = 'Seirbhís do Chustaiméirí';

$GLOBALS["lang"]['SysName'] = 'Seirbhís do Chustaiméirí';

$GLOBALS["lang"]['sysObjectID'] = 'SysObjectID';

$GLOBALS["lang"]['SysObjectID'] = 'SysObjectID';

$GLOBALS["lang"]['sysUpTime'] = 'Seirbhís do Chustaiméirí';

$GLOBALS["lang"]['SysUpTime'] = 'Seirbhís do Chustaiméirí';

$GLOBALS["lang"]['system_component'] = 'Córas Comhpháirtithe';

$GLOBALS["lang"]['System Component'] = 'Córas Comhpháirtithe';

$GLOBALS["lang"]['System-Area Network'] = 'Córas-Area Líonra';

$GLOBALS["lang"]['TX Bitrate'] = 'TX Bitrate';

$GLOBALS["lang"]['TX Freq'] = 'Seirbhís do Chustaiméirí';

$GLOBALS["lang"]['TX Level'] = 'Leibhéal TX';

$GLOBALS["lang"]['TX Power'] = 'Cumhacht TX';

$GLOBALS["lang"]['TX Profile'] = 'Próifíl TX';

$GLOBALS["lang"]['Table'] = 'Tábla Tábla';

$GLOBALS["lang"]['tag'] = 'Clib Clib';

$GLOBALS["lang"]['Tag'] = 'Clib Clib';

$GLOBALS["lang"]['tag_1'] = 'Clib 1';

$GLOBALS["lang"]['Tag 1'] = 'Clib 1';

$GLOBALS["lang"]['tag_2'] = 'Clib 2';

$GLOBALS["lang"]['Tag 2'] = 'Clib 2';

$GLOBALS["lang"]['tag_3'] = 'Clib 3';

$GLOBALS["lang"]['Tag 3'] = 'Clib 3';

$GLOBALS["lang"]['Tagalog'] = 'Féach ar Léarscáileanna';

$GLOBALS["lang"]['tags'] = 'Clibeanna';

$GLOBALS["lang"]['Tags'] = 'Clibeanna';

$GLOBALS["lang"]['Tags :: '] = 'Clibeanna: ';

$GLOBALS["lang"]['Taiwan'] = 'Cónaidhm na Rúise';

$GLOBALS["lang"]['Tajikistan'] = 'taiseachas aeir: fliuch';

$GLOBALS["lang"]['Take note of all output and action each item as appropriate.'] = 'Tabhair faoi deara gach aschur agus gníomh gach mír de réir mar is cuí.';

$GLOBALS["lang"]['Tanzania'] = 'taiseachas aeir: fliuch';

$GLOBALS["lang"]['Target Computer'] = 'Sprioc Ríomhaireachta';

$GLOBALS["lang"]['task'] = 'Tascfhórsa';

$GLOBALS["lang"]['Task'] = 'Tascfhórsa';

$GLOBALS["lang"]['tasks'] = 'Tascanna';

$GLOBALS["lang"]['Tasks'] = 'Tascanna';

$GLOBALS["lang"]['Tasks can be one of several distinct types: Baseline, Discovery, Report, Query, Summary or Collector.'] = 'Is féidir le tascanna a bheith ar cheann de chineálacha éagsúla ar leith: Baseline, Discovery, Tuarascáil, Query, Achoimre nó Bailitheoir.';

$GLOBALS["lang"]['tcp_ports'] = 'Seirbhís do Chustaiméirí';

$GLOBALS["lang"]['Tcp Ports'] = 'Seirbhís do Chustaiméirí';

$GLOBALS["lang"]['Technical Details'] = 'Sonraí teicniúla';

$GLOBALS["lang"]['tenant'] = 'Tionóntaí';

$GLOBALS["lang"]['Tenant'] = 'Tionóntaí';

$GLOBALS["lang"]['Tenant ID'] = 'ID Tionónta';

$GLOBALS["lang"]['Tennant ID'] = 'ID Tennant';

$GLOBALS["lang"]['ternary'] = 'riachtanais uisce: measartha';

$GLOBALS["lang"]['Ternary'] = 'riachtanais uisce: measartha';

$GLOBALS["lang"]['Test 1'] = 'Tástáil 1';

$GLOBALS["lang"]['Test 2'] = 'Tástáil 2';

$GLOBALS["lang"]['Test 3'] = 'Tástáil 3';

$GLOBALS["lang"]['Test Email'] = 'Tástáil Ríomhphost';

$GLOBALS["lang"]['test_minutes'] = 'Miontuairiscí tástála';

$GLOBALS["lang"]['Test Minutes'] = 'Miontuairiscí tástála';

$GLOBALS["lang"]['test_os'] = 'Tástáil Os';

$GLOBALS["lang"]['Test Os'] = 'Tástáil Os';

$GLOBALS["lang"]['test_subnet'] = 'Tástáil Subnet';

$GLOBALS["lang"]['Test Subnet'] = 'Tástáil Subnet';

$GLOBALS["lang"]['tests'] = 'Tástáil';

$GLOBALS["lang"]['Tests'] = 'Tástáil';

$GLOBALS["lang"]['Text'] = 'Téacs';

$GLOBALS["lang"]['Thai'] = 'Téalainnis';

$GLOBALS["lang"]['Thailand'] = 'cineál gas: in airde';

$GLOBALS["lang"]['Thank you for starting your journey with the best discovery and inventory tool around.'] = 'Go raibh maith agat as do thuras a thosú leis an uirlis fionnachtana agus fardal is fearr timpeall.';

$GLOBALS["lang"]['Thanks to'] = 'Go raibh maith agat';

$GLOBALS["lang"]['Thats it! You have just edited the attributes of as many devices as you need to.'] = 'Sin é! Tá tú in eagar ach na tréithe de na feistí oiread agus is gá duit a.';

$GLOBALS["lang"]['The <i>Roles</i> endpoint allows you to manage the set of permissions(Create, Read, Update, Delete) that are granted to the users and are applied to each endpoint.'] = 'An bhfuil <i>Róil</i> endpoint is féidir leat a bhainistiú ar an sraith de cheadanna (Cruthaigh, Léigh, Nuashonrú, Scrios) a dheonaítear do na húsáideoirí agus a chuirtear i bhfeidhm ar gach endpoint.';

$GLOBALS["lang"]['The API uses a cookie. You can request a cookie by sending a POST to the URL below, containing the username and password attributes and values:'] = 'Úsáideann an API fianán. Is féidir leat fianán a iarraidh trí POST a sheoladh chuig an URL thíos, ina bhfuil tréithe agus luachanna an ainm úsáideora agus an pasfhocal:';

$GLOBALS["lang"]['The Active Directory domain to retrieve a list of subnets from.'] = 'An fearann Eolaire Gníomhach a fháil ar liosta de subnets ó.';

$GLOBALS["lang"]['The Active Directory server to retrieve a list of subnets from.'] = 'An freastalaí Eolaire Gníomhach a fháil ar liosta de subnets ó.';

$GLOBALS["lang"]['The Applications endpoint allows you to define an application which you can then associate to a device (or devices).'] = 'Ceadaíonn an deireadhphointe Iarratais duit iarratas a shainmhíniú ar féidir leat a cheangal ansin le gléas (nó feistí).';

$GLOBALS["lang"]['The Attributes endpoint allows you to add customized values to different attributes in Open-AudIT, at the moment this feature works on the Class, Environment, Status and Type attributes on Devices, the Type attribute for both Locations and Orgs as well as the Menu Category for Queries. If you view an item of one of the prvious types (say view a Lkocation) you will notice the Type attribute must be selected from a drop-down box. This is where those values are stored. Hence, if you would like to add a new Type to be chosen for a Location, add it using the Attributes feature.'] = 'Ceadaíonn an endpoint ómós duit luachanna saincheaptha a chur le tréithe éagsúla i Open-AudIT, faoi láthair oibríonn an ghné seo ar an Aicme, Comhshaol, Stádas agus tréithe Cineál ar Gléasanna, an tréith Cineál don dá Suíomhanna agus Orgs chomh maith leis an Catagóir Roghchlár do Sraitheanna. Má fhéachann tú ar mhír de cheann de na cineálacha prvious (amharc ar Lkocation) tabharfaidh tú faoi deara nach mór an tréith Cineál a roghnú ó bhosca anuas. Tá sé seo nuair a stóráiltear na luachanna sin. Dá réir sin, más mian leat Cineál nua a roghnú le haghaidh Suíomh, cuir é ag baint úsáide as gné na nAspal.';

$GLOBALS["lang"]['The Automatable metric captures the answer to the question <strong>Can an attacker automate exploitation events for this vulnerability across multiple targets?</strong> based on steps 1-4 of the kill chain. These steps are reconnaissance, weaponization, delivery, and exploitation (Not Defined, No, Yes).'] = 'Gabhann an méadrach Uathoibríoch an freagra ar an gceist <strong>An féidir le himeachtaí a shaothrú uathoibriú ionsaitheoir don leochaileacht seo ar fud spriocanna éagsúla?</strong> bunaithe ar chéimeanna 1-4 den slabhra mharú. Tá na céimeanna a athchóiriú, armú, seachadadh, agus saothrú (Nach bhfuil Cinnte, Uimh, Tá).';

$GLOBALS["lang"]['The CVE has been marked as invalid or withdrawn in the CVE List. It remains in the NVD but is excluded from default search results.'] = 'Tá an CVE marcáilte mar neamhbhailí nó tarraingthe siar sa Liosta CVE. Tá sé fós sa NVD ach tá sé eisiata ó thorthaí cuardaigh réamhshocraithe.';

$GLOBALS["lang"]['The CVE has been published to the CVE List and included in the NVD dataset. Initial ingestion only.'] = 'Foilsíodh an CVE chuig an Liosta CVE agus bhí sé san áireamh sa tacar sonraí NVD. Ionghabháil tosaigh amháin.';

$GLOBALS["lang"]['The CVE has been updated after initial analysis. NVD enrichment data may have been revised.'] = 'Tá an CVE cothrom le dáta tar éis anailís tosaigh. D\'fhéadfaí sonraí saibhrithe NVD a athbhreithniú.';

$GLOBALS["lang"]['The CVE identifier.'] = 'An t-aitheantóir CVE.';

$GLOBALS["lang"]['The CVE is actively being enriched with CVSS scores, CWE classifications, reference tags, and CPE applicability.'] = 'Tá an CVE á shaibhriú go gníomhach le scóir CVSS, aicmithe CWE, clibeanna tagartha, agus infheidhmeacht CPE.';

$GLOBALS["lang"]['The CVE is not currently prioritized for enrichment due to resource constraints or other reasons.'] = 'Níl an CVE tosaíocht faoi láthair le haghaidh saibhriú mar gheall ar shrianta acmhainne nó ar chúiseanna eile.';

$GLOBALS["lang"]['The CVE is queued for enrichment by NVD analysts. No detailed metadata yet.'] = 'Tá an CVE scuaine do shaibhriú ag anailísithe NVD. Níl meiteashonraí mionsonraithe fós.';

$GLOBALS["lang"]['The Cloud that owns this item. Links to <code>clouds.id</code>.'] = 'An Cloud go úinéireacht an mhír seo. Naisc go dtí <code>clouds.id</code>.';

$GLOBALS["lang"]['The Device Seed Discovery type is the newest highly-effective method for network crawling, giving you the ability to target your network as narrowly or as broadly as you need. It is fast, it works and it is great.'] = 'Is é an cineál Gléas Seed Discovery an modh is nua-éifeachtach le haghaidh crawling líonra, a thabhairt duit an cumas chun díriú ar do líonra chomh caol nó chomh leathan agus is gá duit. Tá sé go tapa, oibríonn sé agus tá sé iontach.';

$GLOBALS["lang"]['The Discovery Scan Options we ship are detailed in the table below. As above, Enterprise users can create more of these or edit the shipped items.'] = 'An Scan Discovery Roghanna táimid long mionsonraithe sa tábla thíos. Mar atá thuas, is féidir le húsáideoirí Fiontraíochta níos mó de na nithe seo a chruthú nó na míreanna shipped a chur in eagar.';

$GLOBALS["lang"]['The Elevated User query'] = 'An cheist Úsáideoir Elevated';

$GLOBALS["lang"]['The Executables feature scans the disk of a device as part of the audit and checks that every executable file is known to the package manager. Because it uses the package manager, the feature applies to Linux target devices only, and further than that, only rpm or deb based distributions. Anything Redhat or Debian based should work.'] = 'An Executables gné scanadh an diosca na feiste mar chuid den iniúchadh agus seiceálacha go bhfuil gach comhad inrite ar eolas ag an mbainisteoir pacáiste. Toisc go n-úsáideann sé an bainisteoir pacáiste, baineann an gné le feistí sprioc Linux amháin, agus níos faide ná sin, ach rpm nó dáiltí deb bunaithe. Ba chóir Rud ar bith Redhat nó Debian bunaithe ag obair.';

$GLOBALS["lang"]['The FROM'] = 'An Ó';

$GLOBALS["lang"]['The Group used to run the Baseline. Links to <code>groups.id</code>.'] = 'An Grúpa a úsáidtear chun an Baseline a reáchtáil. Naisc go dtí <code>groups.id</code>.';

$GLOBALS["lang"]['The ID from the devices table (the devices.name will be displayed) of the NTU at this end of the connection. Links to <code>devices.id</code>.'] = 'An ID ó na feistí tábla (beidh na feistí.ainm a thaispeáint) an NTU ag an deireadh an nasc. Naisc go dtí <code>devices.id</code>.';

$GLOBALS["lang"]['The ID from the imported benchmark policy.'] = 'An ID ón mbeartas tagarmhairc allmhairithe.';

$GLOBALS["lang"]['The ID from the locations table (the locations.name will be displayed) of this end of the connection. Links to <code>locations.id</code>. The A location is usually the <code>FROM</code> location.'] = 'An ID ó na suímh tábla (beidh an logainmneacha a thaispeáint) ar an deireadh an nasc. Naisc go dtí <code>locations.id</code>. Is é an suíomh de ghnáth ar an <code>FROM</code> suíomh.';

$GLOBALS["lang"]['The ID from the locations table (the locations.name will be displayed) of this end of the connection. Links to <code>locations.id</code>. The B location is usually the <code>TO</code> location.'] = 'An ID ó na suímh tábla (beidh an logainmneacha a thaispeáint) ar an deireadh an nasc. Naisc go dtí <code>locations.id</code>. Is é an suíomh B de ghnáth ar an <code>TO</code> suíomh.';

$GLOBALS["lang"]['The ID of the associated device (if any). Links to <code>devices.id</code>.'] = 'ID na feiste comhlachaithe (más ann di). Naisc go dtí <code>devices.id</code>.';

$GLOBALS["lang"]['The ID of the associated discovery. Linked to <code>discoveries.id</code>'] = 'ID na fionnachtana gaolmhara. Nasctha le <code>discoveries.id</code>';

$GLOBALS["lang"]['The ID of the item of the associated type.'] = 'ID ítim an chineáil a bhaineann leis.';

$GLOBALS["lang"]['The ID of this orgs parent org. Linked to <code>orgs.id</code>'] = 'An ID seo org tuismitheoir org. Nasctha le <code>orgs.id</code>';

$GLOBALS["lang"]['The ID provided by the provider.'] = 'An ID ar fáil ag an soláthraí.';

$GLOBALS["lang"]['The ID retrieved from a Cloud discovery.'] = 'An ID aisghabháil ó fionnachtain Cloud.';

$GLOBALS["lang"]['The IP address of this collector used to communicate with the server.'] = 'An seoladh IP an bailitheoir a úsáidtear chun cumarsáid a dhéanamh leis an bhfreastalaí.';

$GLOBALS["lang"]['The IP of the device to start a seed discovery with.'] = 'An IP an gléas chun tús a chur le fionnachtain síolta le.';

$GLOBALS["lang"]['The IP of the external interface.'] = 'IP an chomhéadan seachtrach.';

$GLOBALS["lang"]['The IP of the internal interface.'] = 'IP an chomhéadan inmheánach.';

$GLOBALS["lang"]['The ISO/IEC 27001 certification process and its key elements.'] = 'An ISO / IEC 27001 próiseas deimhniúcháin agus a phríomhghnéithe.';

$GLOBALS["lang"]['The ISP or Telco providing this link.'] = 'An ISP nó Telco ag soláthar an nasc seo.';

$GLOBALS["lang"]['The JSON record from Mitre.'] = 'An taifead JSON ó Mitre.';

$GLOBALS["lang"]['The JSON record from the NVD feed.'] = 'An taifead JSON ó na beatha NVD.';

$GLOBALS["lang"]['The LDAP OU of this user (if LDAP is used).'] = 'An LDAP OU an t-úsáideoir (má úsáidtear LDAP).';

$GLOBALS["lang"]['The LDAP server could not be connected to. At all. Check it is pingable from the Open-AudIT server. Check the correct port is open to the Open-AudIT server. An nmap from the Open-AudIT server will show this. Substitute your LDAP servers IP for $ip. Try:<code>nmap -vv $ip</code>'] = 'Ní fhéadfaí an freastalaí LDAP a nascadh le. Ar chor ar bith. Seiceáil go bhfuil sé pingable ón bhfreastalaí Open-AudIT. Seiceáil go bhfuil an calafort ceart oscailte don fhreastalaí Open-AudIT. Beidh léarscáil ón bhfreastalaí Open-AudIT thaispeáint seo. Cuir do fhreastalaithe LDAP IP le haghaidh $ip. Bain triail as:<code>nmap -vv $ip</code>';

$GLOBALS["lang"]['The LDAP server type is invalid. It should be either <i>active directory</i> or <i>openldap</i>.'] = 'Tá an cineál freastalaí LDAP neamhbhailí. Ba chóir go mbeadh sé <i>foirm duille: líneach</i> nó <i>taiseachas aeir: fliuch</i>.';

$GLOBALS["lang"]['The LDAP server was connected to and the user credentials accepted for bind.'] = 'Bhí baint ag an bhfreastalaí LDAP agus ghlac na dintiúir úsáideora le ceangal.';

$GLOBALS["lang"]['The Linux Open-AudIT installer will test for and if required, install Open-AudITs dependencies from your distributions repository, including setting the Nmap SetUID. This is required for SNMP (UDP 161) detection by a non-root user. This is supported on RedHat/CentOS and Debian/Ubuntu. If you need to manually install Nmap:<br><br>For RedHat/CentOS do (NOTE - if you upgrade using yum, you will need to reapply this <i>chmod</i> setting).'] = 'Beidh an suiteálaí Open-AudIT Linux tástáil le haghaidh agus más gá, shuiteáil spleáchais Open-AudITs ó do stór dáiltí, lena n-áirítear leagan síos an SetUID Nmap. Tá sé seo ag teastáil le haghaidh SNMP (UDP 161) bhrath ag úsáideoir neamh-fréamh. Tá sé seo tacaíocht ar RedHat / CentOS agus Debian / Ubuntu. Más gá duit a shuiteáil de láimh Nmap:<br/><br/>Do RedHat / CentOS dhéanamh (NOTE - má tá tú ag uasghrádú ag baint úsáide as yum, beidh ort a chur i bhfeidhm arís seo <i>taiseachas aeir: fliuch</i> leagan síos).';

$GLOBALS["lang"]['The Location that contains this network. Links to <code>locations.id</code>.'] = 'An Suíomh ina bhfuil an líonra. Naisc go dtí <code>locations.id</code>.';

$GLOBALS["lang"]['The NVD assigned base status.'] = 'An stádas bonn NVD sannta.';

$GLOBALS["lang"]['The National Institute of Standards and Technology is the federal technology agency. They advance official technology, measurement science and standards.'] = 'Is é an Institiúid Náisiúnta Caighdeán agus Teicneolaíocht an ghníomhaireacht teicneolaíochta cónaidhme. Cuireann siad teicneolaíocht oifigiúil, eolaíocht tomhais agus caighdeáin chun cinn.';

$GLOBALS["lang"]['The Network to Discover'] = 'An Líonra chun Discover';

$GLOBALS["lang"]['The Nmap timing preset.'] = 'An réamhshocraithe uainiú Nmap.';

$GLOBALS["lang"]['The OS this package should be reported against. Blank for all. Use the percent sign % as a wildcard. Will be tested against os_group, os_family and os_name in that order.'] = 'Ba chóir an OS pacáiste seo a thuairisciú i gcoinne. Blank do chách. Bain úsáid as an % comhartha faoin gcéad mar chárta fiáin. An mbeidh a thástáil i gcoinne os_group, os_teaghlach agus os_name san ord sin.';

$GLOBALS["lang"]['The Open-AudIT API'] = 'An API Oscailte-AudIT';

$GLOBALS["lang"]['The Open-AudIT id of the linked cloud. Links to <code>clouds.id</code>.'] = 'An Open-AudIT id an scamall nasctha. Naisc go dtí <code>clouds.id</code>.';

$GLOBALS["lang"]['The Open-AudIT server code was exeucted within this file.'] = 'An Oscailte-Aud Bhí exeucted cód freastalaí TF laistigh den chomhad seo.';

$GLOBALS["lang"]['The Open-AudIT server code was exeucted within this function.'] = 'An Oscailte-Aud Eisíodh cód freastalaí TF laistigh den fheidhm seo.';

$GLOBALS["lang"]['The OpenSCAP ecosystem provides multiple tools to assist administrators and auditors with assessment, measurement, and enforcement of security baselines including a wide variety of hardening guides and configuration baselines developed by the open source community, ensuring that you can choose a security policy which best suits the needs of your organization, regardless of its size.'] = 'Soláthraíonn an éiceachóras OpenSCAP uirlisí éagsúla chun cabhrú le riarthóirí agus iniúchóirí le measúnú, tomhas, agus forfheidhmiú bunlínte slándála lena n-áirítear raon leathan de treoracha cruaite agus bunlínte cumraíochta arna bhforbairt ag an bpobal foinse oscailte, ag cinntiú gur féidir leat a roghnú polasaí slándála a oireann is fearr do riachtanais d\'eagraíocht, beag beann ar a mhéid.';

$GLOBALS["lang"]['The OpenSCAP project is a collection of open source tools for implementing and enforcing this standard, and has been awarded the SCAP 1.2 certification by NIST in 2014.'] = 'Is bailiúchán d\'uirlisí foinse oscailte é an tionscadal OpenSCAP chun an caighdeán seo a chur i bhfeidhm agus a fhorfheidhmiú, agus bronnadh deimhniú SCAP 1.2 air in 2014.';

$GLOBALS["lang"]['The Organisation that owns this item. Links to <code>orgs.id</code>.'] = 'An Eagraíocht a bhfuil an mhír seo ar úinéireacht aici. Naisc go dtí <code>orgs.id</code>.';

$GLOBALS["lang"]['The Process Identifier of the running associated discovery.'] = 'An Aitheantóir Próiseas na fionnachtana a bhaineann le reáchtáil.';

$GLOBALS["lang"]['The RU positon of the top of this device.'] = 'An positon RU de bharr an gléas seo.';

$GLOBALS["lang"]['The Racks feature is used to manage and visualize your rack use with an Organisation, Location, Building, Floor, Room and Row.'] = 'Úsáidtear an ghné Racks chun do úsáid raca a bhainistiú agus a shamhlú le hEagraíocht, Suíomh, Foirgneamh, Urlár, Seomra agus Row.';

$GLOBALS["lang"]['The SCAP is a specification for expressing and manipulating security data in standardized ways. SCAP uses several individual specifications in concert to automate continuous monitoring, vulnerability management, and security policy compliance evaluation reporting'] = 'Is é an SCAP sonraíocht le haghaidh sonraí slándála in iúl agus ionramháil ar bhealaí caighdeánaithe. Úsáideann SCAP roinnt sonraíochtaí aonair i gceolchoirm chun monatóireacht leanúnach, bainistíocht leochaileachta, agus meastóireacht ar chomhlíonadh beartais slándála a uathoibriú';

$GLOBALS["lang"]['The SELECT'] = 'An SELECT';

$GLOBALS["lang"]['The SELECT section of the query should use full dot notation and also request the field with its full dot name. IE - SELECT devices.id AS `devices.id`. Each field should be selected in this fashion to enable GUI side attribute filtering.'] = 'Ba chóir go n-úsáidfeadh an chuid SELECT den cheist nodaireacht iomlán agus go n-iarrfaidh sé an réimse lena ainm dot iomlán. IE - feistí SELECT. id AS `feistis.id ` . Ba chóir gach réimse a roghnú sa bhealach seo chun cur ar chumas GUI tréith scagadh.';

$GLOBALS["lang"]['The SELECT section of your SQL must contain fully qualified columns and specify certain columns.'] = 'Ní mór colúin láncháilithe a bheith sa chuid SELECT de do SQL agus colúin áirithe a shonrú.';

$GLOBALS["lang"]['The SNMP community string.'] = 'An teaghrán pobail SNMP.';

$GLOBALS["lang"]['The SNMP v3 Authentication Passphrase.'] = 'An v3 SNMP Fíordheimhniú Pasfhocal.';

$GLOBALS["lang"]['The SNMP v3 Authentication Protocol.'] = 'An Prótacal Fíordheimhniú SNMP v3.';

$GLOBALS["lang"]['The SNMP v3 Privacy Passphrase.'] = 'An v3 SNMP Príobháideacht Pasfhocal.';

$GLOBALS["lang"]['The SNMP v3 Privacy Protocol.'] = 'An SNMP v3 Prótacal Príobháideachta.';

$GLOBALS["lang"]['The SNMP v3 Security Level.'] = 'An SNMP v3 Slándáil Leibhéal.';

$GLOBALS["lang"]['The SNMP v3 Security Name.'] = 'An SNMP v3 Slándáil Ainm.';

$GLOBALS["lang"]['The SNMPv3 context Engine ID (optional).'] = 'An SNMPv3 ID Inneall comhthéacs (roghnach).';

$GLOBALS["lang"]['The SNMPv3 context Name (optional).'] = 'An Ainm comhthéacs SNMPv3 (roghnach).';

$GLOBALS["lang"]['The SQL cannot contain <strong>WHERE @filter OR</strong>. That SQL will not be executed, however <strong>WHERE @filter AND</strong> queries are allowed.'] = 'Ní féidir leis an SQL go bhfuil <strong>WHERE Cuntas deimhnithe</strong>. Ní bheidh SQL a fhorghníomhú, áfach, <strong>WHERE Cuntas deimhnithe</strong> ceadaítear fiosruithe.';

$GLOBALS["lang"]['The SQL queries used in Open-AudIT require the use of the backtick - ` character and NOT the standard single quote for fields. On most US Windows keyboards the backtick key is located in the top-left of the keyboard along with the tilde ~. On a US Mac keyboard the backtick key is located next to the SHIFT key. The standard single quote is still used to enclose values as the examples below illustrate.'] = 'Éilíonn na ceisteanna SQL a úsáidtear i Open-AudIT úsáid a bhaint as an backtick - carachtar ` agus NACH an ceanglófar amháin caighdeánach do réimsí. Ar an chuid is mó de na Stáit Aontaithe Méarchláir Windows Tá an eochair backtick suite i barr-chlé an méarchlár chomh maith leis an tilde ~. Ar mhéarchlár Mac na Stát Aontaithe tá an eochair backtick suite in aice leis an eochair SHIFT. Tá an ceanglófar amháin caighdeánach a úsáidtear fós chun luachanna faoi iamh mar na samplaí thíos léaráidí.';

$GLOBALS["lang"]['The SQL query is essentially broken into three parts.'] = 'Tá an cheist SQL briste go bunúsach i dtrí chuid.';

$GLOBALS["lang"]['The Standards functionality in Open-AudIT allows you to, ahead of time, complete the questions auditors require when completing ISO 27001 certification.'] = 'Ceadaíonn an fheidhmiúlacht Caighdeáin i Open-AudIT duit, roimh an am, a chomhlánú na hiniúchóirí ceisteanna a cheangal nuair a chomhlánú ISO 27001 deimhniúcháin.';

$GLOBALS["lang"]['The URL of the external system.'] = 'URL an chórais sheachtraigh.';

$GLOBALS["lang"]['The URL of your Open-AudIT Server that this Collector will report to (no trailing slash).'] = 'An URL de do Oscailte-AudIT Freastalaí go mbeidh an Bailitheoir tuarascáil a dhéanamh ar (gan aon Slais trailing).';

$GLOBALS["lang"]['The URL the audit scripts should submit their result to.'] = 'An URL Ba chóir na scripteanna iniúchta a chur isteach a dtoradh.';

$GLOBALS["lang"]['The User endpoint allows you to manage user accounts within Open-AudIT.'] = 'Ceadaíonn an endpoint Úsáideoir tú a bhainistiú cuntais úsáideora laistigh Open-AudIT.';

$GLOBALS["lang"]['The WHERE'] = 'An WHERE';

$GLOBALS["lang"]['The WHERE section of your SQL <em>must</em> contain'] = 'An chuid WHERE de do SQL <em>ní mór</em> go bhfuil';

$GLOBALS["lang"]['The Windows'] = 'An Windows';

$GLOBALS["lang"]['The Windows log may say the following'] = 'Is féidir leis an logáil Windows rá seo a leanas';

$GLOBALS["lang"]['The account must have a password; WMI does not allow blank passwords.'] = 'Ní mór go mbeadh pasfhocal ag an gcuntas; ní cheadaíonn WMI pasfhocail bána.';

$GLOBALS["lang"]['The account password must NOT contain \" (double quotes). This is because cscript (and wscript) cannot parse argument values containing double quotes. They are simply stripped. No (before you ask) escaping will not work. This is a cscript limitation and nothing to do with Open-AudIT.'] = 'Ní mór an focal faire cuntas NACH bhfuil \ " (ceanglófar dúbailte). Tá sé seo toisc nach féidir cscript (agus wscript) parse luachanna argóint ina bhfuil Sleachta dúbailte. Tá siad stripped go simplí. Uimh (roimh iarraidh ort) Ní bheidh éalú ag obair. Is é seo an teorainn cscript agus aon rud a dhéanamh le Open-AudIT.';

$GLOBALS["lang"]['The actual full name of this user.'] = 'An t-ainm iarbhír iomlán an úsáideora.';

$GLOBALS["lang"]['The address of the Open-AudIT server submit page.'] = 'An seoladh an fhreastalaí Open-AudIT isteach leathanach.';

$GLOBALS["lang"]['The administrator supplied credentials that were successfully used to bind to LDAP.'] = 'Thug an riarthóir dintiúir a úsáideadh go rathúil chun ceangal a dhéanamh ar LDAP.';

$GLOBALS["lang"]['The administrator supplied credentials to bind to the LDAP server, but they have not been accepted by the LDAP sevrer. Double check the credentials work on the LDAP server, and then check (or reset them) in the Open-AudIT LDAP Server entry.'] = 'Thug an riarthóir dintiúir chun ceangal leis an bhfreastalaí LDAP, ach níor ghlac an LDAP sevrer leo. Double seiceáil an dintiúir obair ar an bhfreastalaí LDAP, agus ansin seiceáil (nó iad a athshocrú) sa Open-AudIT LDAP Freastalaí iontráil.';

$GLOBALS["lang"]['The agent and server are also intelligent enough to self-update the agent if a newer version is installed on the server (say after upgrading Open-AudIT).'] = 'Tá an gníomhaire agus an freastalaí cliste freisin go leor chun an gníomhaire a thabhairt cothrom le dáta má tá leagan níos nuaí suiteáilte ar an bhfreastalaí (rá tar éis uasghrádú Open-AudIT).';

$GLOBALS["lang"]['The agent should download a fresh copy of the audit script, run it and submit the result to the server.'] = 'Ba chóir don ghníomhaire cóip úr den script iniúchóireachta a íoslódáil, é a reáchtáil agus an toradh a chur faoi bhráid an fhreastalaí.';

$GLOBALS["lang"]['The application creates temporary audit scrtips here, copies them to the target machines, then deletes them.'] = 'Cruthaíonn an t-iarratas grinnscrúdú ar iniúchadh sealadach anseo, cóipeanna a dhéanamh díobh leis na sprioc-innill, ansin iad a scriosadh.';

$GLOBALS["lang"]['The associated baseline. Links to <code>baselines.id</code>.'] = 'An bonnlíne a bhaineann leis. Naisc go dtí <code>baselines.id</code>.';

$GLOBALS["lang"]['The associated discovery (if required). Links to <code>discoveries.id</code>.'] = 'An fionnachtain a bhaineann leis (más gá). Naisc go dtí <code>discoveries.id</code>.';

$GLOBALS["lang"]['The attribute to test (from the <code>devices</code> table).'] = 'An tréith a thástáil (ón <code>devices</code> tábla).';

$GLOBALS["lang"]['The attribute to test (must match an external field name from below).'] = 'An tréith a thástáil (Ní mór a mheaitseáil ainm réimse seachtrach ó thíos).';

$GLOBALS["lang"]['The attributes for discovery scan options are as below.'] = 'Is iad na tréithe le haghaidh roghanna scanadh fionnachtana mar atá thíos.';

$GLOBALS["lang"]['The audit script upon which to base your customisations.'] = 'An script iniúchta ar a bhunú do customizations.';

$GLOBALS["lang"]['The audit script will use the files[ ] array and retrieve the file details.'] = 'Bainfidh an script iniúchóireachta úsáid as na comhaid[] eagar agus na sonraí comhaid a aisghabháil.';

$GLOBALS["lang"]['The audit scripts all accept a debugging argument. You can run the script utilizing that and see in more detail what the issue is. And if you cannot figure it out - that is what we are here for! Open a support case and we will get things running in no time.'] = 'Na scripteanna iniúchóireachta glacadh go léir argóint debugging. Is féidir leat a reáchtáil ar an script ag baint úsáide as sin agus a fheiceáil níos mine cad é an cheist. Agus mura féidir leat é a fhigiúr amach - is é sin an méid atá againn anseo le haghaidh! Oscail cás tacaíochta agus beidh muid a fháil rudaí ag rith in aon am.';

$GLOBALS["lang"]['The base path from which to search for Users.'] = 'An cosán bonn as a chuardach le haghaidh Úsáideoirí.';

$GLOBALS["lang"]['The below steps are not the fault of or unique to Open-AudIT and would affect <strong>any</strong> discovery application using remote WMI and/or Windows.'] = 'Níl na céimeanna thíos an locht nó uathúil a Open-AudIT agus go mbeadh tionchar acu <strong>aon duine</strong> iarratas fionnachtana ag baint úsáide as WMI iargúlta agus / nó Windows.';

$GLOBALS["lang"]['The benchmark type.'] = 'An cineál tagarmhairc.';

$GLOBALS["lang"]['The building the rack is located in.'] = 'Tá an foirgneamh an raca suite i.';

$GLOBALS["lang"]['The calculated number of devices to be created externally.'] = 'An líon arna ríomh feistí a bheidh le cruthú go seachtrach.';

$GLOBALS["lang"]['The calculated number of devices to be created in Open-AudIT.'] = 'An líon a ríomh na feistí a bheidh le cruthú in Open-AudIT.';

$GLOBALS["lang"]['The client ID is the ID of an Azure Active Directory application. The client secret is the key that you give that application.'] = 'Is é an ID cliant an ID ar iarratas Eolaire Gníomhach Azure. Is é an rún cliant an eochair a thabhairt duit an t-iarratas.';

$GLOBALS["lang"]['The collector is essentially a full install of Open-AudIT in <i>collector</i> mode. The collector is designed to run discovery upon the network it is situated in. It is not restricted to only that network, but ideally it would essentially be one collector per subnet where required. The collector is driven on a schedule by the server and runs discovery upon the network as specified.<br>When in Stand Alone mode the Collector acts as an independant server, simply forwarding all devices found to the main server.<br><br>Once installed and setup, control of the Collector is performed on the Server (not in Stand Alone mode).<br><br>The only required network ports between the collector and server are 80 or 443 (TCP connection established from the Collector to the Server). The Open-AudIT database is not (and cannot be) shared between these installs.<br><br>By default the collector (not in Stand Alone mode) will request from the server any discovery tasks every 5 minutes (you can configure this on the server for new Collectors using the configuration item collector_check_minutes) therefor any discovery tasks for the collector should be scheduled for 0, 5, 10, 15, etc minutes.'] = 'Tá an bailitheoir go bunúsach a shuiteáil iomlán de Open-AudIT in <i>lucht siúil</i> modh. Tá an bailitheoir deartha chun fionnachtain a reáchtáil ar an líonra atá sé suite i. Níl sé teoranta ach an líonra sin, ach go hidéalach bheadh sé go bunúsach bailitheoir amháin in aghaidh an subnet nuair is gá. Tá an bailitheoir thiomáint ar sceideal ag an bhfreastalaí agus ritheann fionnachtain ar an líonra mar atá sonraithe.<br/>Nuair a i Stand Modh amháin gníomhaíonn an Bailitheoir mar fhreastalaí neamhchinnte, ach ar aghaidh go léir feistí le fáil ar an bhfreastalaí is mó.<br/><br/>Chomh luath agus suiteáilte agus thus, déantar rialú an Bhailitheoir ar an Freastalaí (ní i modh Stand Alone).<br/><br/>Is iad na calafoirt líonra amháin ag teastáil idir an bailitheoir agus freastalaí 80 nó 443 (nasc TCP bunaithe ón mBailitheoir chuig an Freastalaí). Níl an bunachar sonraí Open-AudIT (agus ní féidir é a) roinnte idir na installs.<br/><br/>De réir réamhshocraithe beidh an bailitheoir (nach bhfuil i Stand Alone mód) a iarraidh ar an bhfreastalaí aon tascanna fionnachtana gach 5 nóiméad (is féidir leat a chumrú seo ar an bhfreastalaí do Bailitheoirí nua ag baint úsáide as an mír chumraíocht bailitheoir_check_minutes) le haghaidh Ba chóir aon tascanna fionnachtana don bailitheoir a sceidealta le haghaidh 0, 5, 10, 15, etc nóiméad.';

$GLOBALS["lang"]['The collector is essentially a full install of Open-AudIT in <i>collector</i> mode. This mode would reduce visible functionality in an effort to simplify and focus the application. It is designed to collect information about local networks and devices, where firewall and/or network traversal is an issue from the server.'] = 'Tá an bailitheoir go bunúsach a shuiteáil iomlán de Open-AudIT in <i>lucht siúil</i> modh. Laghdódh an modh seo feidhmiúlacht infheicthe in iarracht chun an t-iarratas a shimpliú agus a dhíriú. Tá sé deartha chun faisnéis a bhailiú faoi líonraí agus feistí áitiúla, áit a bhfuil balla dóiteáin agus / nó traversal líonra ceist ón bhfreastalaí.';

$GLOBALS["lang"]['The collectors internal IP used when it runs a discovery.'] = 'Na bailitheoirí IP inmheánach a úsáidtear nuair a ritheann sé fionnachtain.';

$GLOBALS["lang"]['The column name from the foreign table. Should be one of: class, environment, status, type or menu_category.'] = 'An t-ainm colún ón tábla coigríche. Ba chóir a bheith ar cheann de na: rang, timpeallacht, stádas, cineál nó roghchlár_catagóir.';

$GLOBALS["lang"]['The command executed upon the target device or Open-AudIT server code executed during discovery.'] = 'An t-ordú chun báis ar an gléas sprioc nó cód freastalaí Open-AudIT chun báis le linn fionnachtana.';

$GLOBALS["lang"]['The configuration of your cluster can be: <code>active/active</code>, <code>active/passive</code>, <code>N+1</code>, <code>N+M</code>, <code>N-to-1</code>, <code>N-to-N</code>, <code>other</code> or blank.'] = 'Is féidir leis an chumraíocht do braisle a bheith: <code>active/active</code>, <code>active/passive</code>, <code>N+1</code>, <code>N+M</code>, <code>N-to-1</code>, <code>N-to-N</code>, <code>other</code> nó bán.';

$GLOBALS["lang"]['The credentials password. If the credentials are an SSH Key, this is the password used to unlock the key and is optional.'] = 'An faire dintiúir. Má tá na dintiúir Eochair SSH, is é seo an focal faire a úsáidtear a dhíghlasáil an eochair agus tá sé roghnach.';

$GLOBALS["lang"]['The credentials supplied by the user have failed.'] = 'Theip ar na dintiúir a sholáthraíonn an t-úsáideoir.';

$GLOBALS["lang"]['The credentials username.'] = 'An ainm úsáideora dintiúir.';

$GLOBALS["lang"]['The current date and time in the format: Y-m-d H:i:s.'] = 'An dáta agus an t-am reatha san fhormáid: Y-m-d H:i:s.';

$GLOBALS["lang"]['The current date in Y-m-d format.'] = 'An dáta reatha i bhformáid Y-m-d.';

$GLOBALS["lang"]['The current status of the Cloud Discovery.'] = 'Stádas reatha na Cloud Discovery.';

$GLOBALS["lang"]['The current status of the discovery.'] = 'Stádas reatha na fionnachtana.';

$GLOBALS["lang"]['The dashboard that will be shown by default for this user. Links to <code>dashboards.id</code>.'] = 'An Painéal na nIonstraimí a thaispeánfar de réir réamhshocraithe don úsáideoir seo. Naisc go dtí <code>dashboards.id</code>.';

$GLOBALS["lang"]['The data stored in the database is not showing in the application translated. We leave the data as it is. However, there is nothing to stop you, the user, changing the name (for example) of an item in the database to your language.'] = 'Níl na sonraí atá stóráilte sa bhunachar sonraí a léiríonn san iarratas aistrithe. Fágfaimid na sonraí mar go bhfuil sé. Mar sin féin, níl aon rud a stopadh tú, an t-úsáideoir, ag athrú an t-ainm (mar shampla) ar mhír sa bhunachar sonraí do do theanga.';

$GLOBALS["lang"]['The data you input will be used in a <code>LIKE</code> clause, not (as per the API) an <code>equals</code> clause. Another example - if you input <code>comput</code>, it would still return all computers. And because we are using a <code>LIKE</code> clause, it is case-insensitive.'] = 'Úsáidfear na sonraí a ionchuireann tú i <code>LIKE</code> clásal, ní (de réir an API) <code>equals</code> clásal. Sampla eile - má ionchur tú <code>comput</code>, bheadh sé ar ais go fóill gach ríomhairí. Agus toisc go bhfuil muid ag baint úsáide as <code>LIKE</code> clásal, tá sé cás-íogair.';

$GLOBALS["lang"]['The database schema can be found in the application if the user has database::read permission by going to menu: Admin -> Database ->'] = 'Is féidir leis an scéimre bunachar sonraí a fháil san iarratas má tá an t-úsáideoir bunachar sonraí: cead a léamh ag dul go dtí roghchlár: Riarachán - × Bunachar Sonraí - ×';

$GLOBALS["lang"]['The database version and web version are inconsistent.'] = 'Tá an leagan bunachar sonraí agus leagan gréasáin ar neamhréir.';

$GLOBALS["lang"]['The date of license expiration.'] = 'Dáta éagtha an cheadúnais.';

$GLOBALS["lang"]['The date the software is discontinued by the manufacturer. Usually replaced by a newer version. Maintenance may still be available.'] = 'An dáta a bhfuil deireadh leis na bogearraí ag an monaróir. De ghnáth, in ionad leagan níos nuaí. D\'fhéadfadh cothabháil a bheith ar fáil fós.';

$GLOBALS["lang"]['The date the software no longer receives updates and is effectively discontinued altogether. Maintenance is discontinued.'] = 'An dáta a fhaigheann na bogearraí a thuilleadh nuashonruithe agus tá sé scortha go héifeachtach ar fad. Cuirtear deireadh le cothabháil.';

$GLOBALS["lang"]['The date this item was changed or added (read only). NOTE - This is the timestamp from the server.'] = 'Athraíodh nó cuireadh an mhír seo (léamh amháin). NÓTA - Is é seo an lasc ama ón bhfreastalaí.';

$GLOBALS["lang"]['The date/time when this result was created.'] = 'An dáta/am nuair a cruthaíodh an toradh seo.';

$GLOBALS["lang"]['The day of the month when this task should execute (* for every day).'] = 'Lá na míosa nuair ba chóir an tasc seo a fhorghníomhú (* do gach lá).';

$GLOBALS["lang"]['The day of the week when this task should execute (* for every day).'] = 'Lá na seachtaine nuair ba chóir an tasc seo a fhorghníomhú (* do gach lá).';

$GLOBALS["lang"]['The debug level (will output to command prompt window). Lower means less output with 0 being no output.'] = 'An leibhéal debug (Beidh aschur a ordú fuinneog pras). Ciallaíonn níos ísle aschur níos lú le 0 a bheith aon aschur.';

$GLOBALS["lang"]['The default discovery scan option is the UltraFast set.'] = 'Is é an rogha scanadh fionnachtana réamhshocraithe an tacar UltraFast.';

$GLOBALS["lang"]['The default language assigned to any user created by this method.'] = 'An teanga réamhshocraithe a shanntar d\'aon úsáideoir a cruthaíodh leis an modh seo.';

$GLOBALS["lang"]['The device must respond to an Nmap ping before it is considered online.'] = 'Ní mór don fheiste freagra a thabhairt ar ping Nmap sula meastar ar líne é.';

$GLOBALS["lang"]['The device within Open-AudIT. Links to <code>devices.id</code>.'] = 'An gléas laistigh Open-AudIT. Naisc go dtí <code>devices.id</code>.';

$GLOBALS["lang"]['The direct link for the script is'] = 'Is é an nasc díreach don script';

$GLOBALS["lang"]['The email address of the reciever'] = 'Seoladh ríomhphoist an reciever';

$GLOBALS["lang"]['The enterprise binary from FirstWave is required for a license. Please download Open-AudIT from'] = 'Tá an dénártha fiontraíochta ó FirstWave ag teastáil le haghaidh ceadúnas. Íoslódáil Open-AudIT ó';

$GLOBALS["lang"]['The entire associated baseline this result is from.'] = 'Is é an bonnlíne a bhaineann leis an toradh seo ó.';

$GLOBALS["lang"]['The exploited vulnerability can affect resources beyond the security authority of the vulnerable component. This usually means a privilege or trust boundary is crossed (for example, escaping from a container to the host OS).'] = 'Is féidir leis an leochaileacht a shaothraítear tionchar a imirt ar acmhainní thar údarás slándála na comhpháirte leochailí. Ciallaíonn sé seo de ghnáth go bhfuil teorainn pribhléide nó iontaobhais thrasnaigh (mar shampla, éalú ó choimeádán chuig an OS óstach).';

$GLOBALS["lang"]['The exploited vulnerability only impacts resources within the same security authority as the vulnerable component. In other words, the attacker’s actions stay within the original trust boundary.'] = 'Ní dhéanann an leochaileacht a shaothraítear tionchar ach ar acmhainní laistigh den údarás slándála céanna leis an gcomhpháirt leochaileach. I bhfocail eile, fanann gníomhartha an ionsaitheoir laistigh den teorainn iontaobhais bunaidh.';

$GLOBALS["lang"]['The externally referenced location ID. Usually populated by Cloud audits.'] = 'An ID suíomh seachtrach tagairt. De ghnáth daonra ag iniúchtaí Cloud.';

$GLOBALS["lang"]['The fields associated with an Integration are stored in the database as a JSON array of objects. Each field has the following attributes'] = 'Na réimsí a bhaineann le Comhtháthú atá stóráilte sa bhunachar sonraí mar sraith JSON de rudaí. Tá gach réimse na tréithe seo a leanas';

$GLOBALS["lang"]['The first time that Open-AudIT retrieved details of this device.'] = 'An chéad uair a Open-AudIT aisghabháil sonraí ar an ngléas seo.';

$GLOBALS["lang"]['The floor the rack is located on.'] = 'Tá an t-urlár an raca suite ar.';

$GLOBALS["lang"]['The foreign table to reference. Should be one of: devices, locations, orgs or queries.'] = 'An tábla coigríche chun tagairt. Ba chóir a bheith ar cheann de na: feistí, suímh, orgs nó ceisteanna.';

$GLOBALS["lang"]['The format of your data should be in the form'] = 'Ba chóir go mbeadh formáid do shonraí i bhfoirm';

$GLOBALS["lang"]['The format used for the output to be emailed.'] = 'An fhormáid a úsáidtear le haghaidh an t-aschur a ríomhphost.';

$GLOBALS["lang"]['The fully qualified column upon which to group by. NOTE: When type = traffic, this represents the red query id.'] = 'An colún lán-cháilithe ar a bhfuil do ghrúpa ag. NÓTA: Nuair cineál = tráchta, léiríonn sé seo an cheist dearg id.';

$GLOBALS["lang"]['The fully qualified name returned by the external system. EG: for NMIS we use configuration.roleType.'] = 'An t-ainm atá cáilithe go hiomlán ar ais ag an gcóras seachtrach. EG: le haghaidh NMIS úsáid againn chumraíocht. Ról na Gaeilge Cineál.';

$GLOBALS["lang"]['The fully qualified table.column. Multiple may be provided, separated by a comma (no spaces).'] = 'An tábla cáilithe go hiomlán.column. Is féidir il a chur ar fáil, scartha ag camóg (aon spásanna).';

$GLOBALS["lang"]['The generated SQL query to test for this vulnerability. This field can be edited to correct the query as required.'] = 'An cheist SQL ghintear a thástáil le haghaidh an leochaileacht. Is féidir an réimse seo a chur in eagar a cheartú an cheist mar is gá.';

$GLOBALS["lang"]['The group of devices on which the baseline was run against.'] = 'An grúpa feistí ar a raibh an bonnlíne ar siúl i gcoinne.';

$GLOBALS["lang"]['The group that provides a list of devices for the integration. Links to <code>groups.id</code>.'] = 'An grúpa a sholáthraíonn liosta de na feistí don chomhtháthú. Naisc go dtí <code>groups.id</code>.';

$GLOBALS["lang"]['The hour of the day when this task should execute (* for every hour).'] = 'An uair an chloig den lá nuair ba chóir an tasc seo a fhorghníomhú (* do gach uair an chloig).';

$GLOBALS["lang"]['The id of the linked device. Links to <code>devices.id</code>'] = 'An id na feiste nasctha. Naisc go dtí <code>devices.id</code>';

$GLOBALS["lang"]['The identifier column (integer) in the database (read only).'] = 'An colún aitheantóir (lánuimhir) sa bhunachar sonraí (léamh amháin).';

$GLOBALS["lang"]['The importance of this baseline (not used yet).'] = 'An tábhacht a bhaineann leis an mbonnlíne seo (ní úsáidtear go fóill).';

$GLOBALS["lang"]['The integer of severity.'] = 'An slánuimhir déine.';

$GLOBALS["lang"]['The internal value, reformatted in this format.'] = 'An luach inmheánach, reformatted san fhormáid seo.';

$GLOBALS["lang"]['The ip address of the Auth method.'] = 'Seoladh ip an mhodha Auth.';

$GLOBALS["lang"]['The language to translate the web interface into for the user.'] = 'An teanga a aistriú an comhéadan gréasáin isteach don úsáideoir.';

$GLOBALS["lang"]['The last date and time this item was executed (read only).'] = 'An dáta deireanach agus am a fhorghníomhú an mhír seo (léamh amháin).';

$GLOBALS["lang"]['The last time that Open-AudIT retrieved details of this device.'] = 'An uair dheireanach a aisghabháil Open-AudIT sonraí ar an ngléas seo.';

$GLOBALS["lang"]['The last time this benchmarks was executed.'] = 'An uair dheireanach a cuireadh na tagarmharcanna seo i gcrích.';

$GLOBALS["lang"]['The last time this integration was run.'] = 'An uair dheireanach a bhí an comhtháthú ar siúl.';

$GLOBALS["lang"]['The license endpoint allows you to track the number of licenses found on your devices.'] = 'Ceadaíonn an endpoint ceadúnas tú a rianú ar líon na gceadúnas le fáil ar do feistí.';

$GLOBALS["lang"]['The line number assigned by the provider to the line at this end of the connection.'] = 'An uimhir líne arna sannadh ag an soláthraí don líne ag an bpointe seo den nasc.';

$GLOBALS["lang"]['The location the rack is located in. Links to <code>locations.id</code>.'] = 'Tá an suíomh an raca suite i. Naisc go dtí <code>locations.id</code>.';

$GLOBALS["lang"]['The locations address.'] = 'Seoladh na suíomhanna.';

$GLOBALS["lang"]['The locations area.'] = 'An limistéar suímh.';

$GLOBALS["lang"]['The locations city.'] = 'An chathair suímh.';

$GLOBALS["lang"]['The locations country.'] = 'An tír suímh.';

$GLOBALS["lang"]['The locations district.'] = 'Na háiteanna dúiche.';

$GLOBALS["lang"]['The locations latitude.'] = 'An domhanleithead suímh.';

$GLOBALS["lang"]['The locations level.'] = 'An leibhéal suímh.';

$GLOBALS["lang"]['The locations longitude.'] = 'An domhanfhad na suíomhanna.';

$GLOBALS["lang"]['The locations phone.'] = 'Na suímh fón.';

$GLOBALS["lang"]['The locations postcode.'] = 'An postchód suímh.';

$GLOBALS["lang"]['The locations region.'] = 'An réigiún suímh.';

$GLOBALS["lang"]['The locations room.'] = 'An seomra suímh.';

$GLOBALS["lang"]['The locations state.'] = 'An stát suímh.';

$GLOBALS["lang"]['The locations suburb.'] = 'Na háiteanna bruachbhaile.';

$GLOBALS["lang"]['The locations suite.'] = 'An seomra suímh.';

$GLOBALS["lang"]['The logic for device matching is contained in the devices_helper.php file, which on a Linux install can be found here'] = 'Tá an loighic le haghaidh meaitseáil gléas atá sa chomhad devices_helper.php, ar féidir a shuiteáil Linux a fháil anseo';

$GLOBALS["lang"]['The machine-default permission settings do not grant Local Activation permission for the COM Server application with'] = 'Ní dhéanann na socruithe ceada meaisín-mhainneachtana cead Gníomhachtaithe Áitiúil a dheonú don iarratas Freastalaí COM le';

$GLOBALS["lang"]['The maximum physical weight (in KGs) this rack can hold.'] = 'Is féidir leis an meáchan fisiciúil uasta (i KGs) seo raca a shealbhú.';

$GLOBALS["lang"]['The maximum total BTUs this rack is rated for.'] = 'Is é an BTUs iomlán uasta seo raca rátáil le haghaidh.';

$GLOBALS["lang"]['The minimum required attributes for attributes are'] = 'Is iad na tréithe íosta ag teastáil le haghaidh tréithe';

$GLOBALS["lang"]['The minute of the hour when this task should execute (* for every minute).'] = 'An nóiméad na huaire nuair ba chóir an tasc seo a fhorghníomhú (* do gach nóiméad).';

$GLOBALS["lang"]['The month of the year when this task should execute (* for every month).'] = 'Mí na bliana nuair ba chóir an tasc seo a fhorghníomhú (* do gach mí).';

$GLOBALS["lang"]['The name given to this item.'] = 'An t-ainm a thugtar don mhír seo.';

$GLOBALS["lang"]['The name given to this item. Ideally it should be unique.'] = 'An t-ainm a thugtar don mhír seo. Go hidéalach ba chóir é a bheith uathúil.';

$GLOBALS["lang"]['The name given to this user (used to login). Ideally it should be unique.'] = 'An t-ainm a thugtar don úsáideoir seo (a úsáidtear chun logáil isteach). Go hidéalach ba chóir é a bheith uathúil.';

$GLOBALS["lang"]['The name of the associated cloud (if required).'] = 'Ainm an scamall gaolmhar (más gá).';

$GLOBALS["lang"]['The name of the software package, as audited by Open-AudIT. Use the percent sign % as a wildcard.'] = 'Ainm an phacáiste bogearraí, mar atá iniúchta ag Open-AudIT. Bain úsáid as an % comhartha faoin gcéad mar chárta fiáin.';

$GLOBALS["lang"]['The name of the user who last changed or added this item (read only).'] = 'Ainm an úsáideora a d\'athraigh nó a chuir an mhír seo (léigh amháin).';

$GLOBALS["lang"]['The name provided by the provider.'] = 'An t-ainm a sholáthraíonn an soláthraí.';

$GLOBALS["lang"]['The network in the format 192.168.1.0/24.'] = 'An líonra san fhormáid 192.168.1.0/24.';

$GLOBALS["lang"]['The network subnet to execute the discovery on.'] = 'An líonra subnet a fhorghníomhú an fionnachtain ar.';

$GLOBALS["lang"]['The new Agent runs a PowerShell version of the old audit script in preparation for the depreciation of VBScript (yes, it is coming).'] = 'Ritheann an Gníomhaire nua leagan PowerShell den sean script iniúchóireachta in ullmhú le haghaidh dímheas VBScript (tá, tá sé ag teacht).';

$GLOBALS["lang"]['The number of RUs this device occupies.'] = 'Líon na RUs áitíonn an gléas seo.';

$GLOBALS["lang"]['The number of associated locations. Links to <code>locations.cloud_id</code>.'] = 'Líon na láithreacha gaolmhara. Naisc go dtí <code>locations.cloud_id</code>.';

$GLOBALS["lang"]['The number of associated networks. Links to <code>networks.cloud_id</code>.'] = 'Líon na líonraí gaolmhara. Naisc go dtí <code>networks.cloud_id</code>.';

$GLOBALS["lang"]['The number of audited devices in this cloud. Links to <code>devices.cloud_id</code> and <code>devices.serial</code>.'] = 'Líon na bhfeistí iniúchta sa scamall seo. Naisc go dtí <code>devices.cloud_id</code> agus <code>devices.serial</code>.';

$GLOBALS["lang"]['The number of critical severity vulnerabilities held by FirstWave (not in your database).'] = 'Líon na leochaileachtaí déine criticiúil i seilbh FirstWave (ní i do bhunachar sonraí).';

$GLOBALS["lang"]['The number of devices found by this discovery.'] = 'An líon feistí le fáil ag an fionnachtain.';

$GLOBALS["lang"]['The number of devices in the associated group.'] = 'Líon na bhfeistí sa ghrúpa comhlachaithe.';

$GLOBALS["lang"]['The number of devices in this cloud with a state of running. Links to <code>devices.cloud_id</code> and <code>devices.instance_state</code>.'] = 'Líon na bhfeistí sa scamall seo le staid reatha. Naisc go dtí <code>devices.cloud_id</code> agus <code>devices.instance_state</code>.';

$GLOBALS["lang"]['The number of devices in this cloud with a state of stopped. Links to <code>devices.cloud_id</code> and <code>devices.instance_state</code>.'] = 'Líon na feistí sa scamall seo le stát de stop. Naisc go dtí <code>devices.cloud_id</code> agus <code>devices.instance_state</code>.';

$GLOBALS["lang"]['The number of devices in this cloud. Links to <code>devices.cloud_id</code>.'] = 'Líon na bhfeistí sa scamall seo. Naisc go dtí <code>devices.cloud_id</code>.';

$GLOBALS["lang"]['The number of devices this benchmark will be executed upon. Derived from <code>benchmarks.devices</code>.'] = 'Beidh líon na bhfeistí an tagarmharc seo a fhorghníomhú ar. Díorthaigh ó <code>benchmarks.devices</code>.';

$GLOBALS["lang"]['The number of devices to limit this discovery to.'] = 'Líon na bhfeistí chun teorainn a chur leis an bhfionnachtain seo.';

$GLOBALS["lang"]['The number of high severity vulnerabilities held by FirstWave (not in your database).'] = 'Líon na leochaileachtaí déine ard i seilbh FirstWave (ní i do bhunachar sonraí).';

$GLOBALS["lang"]['The number of low severity vulnerabilities held by FirstWave (not in your database).'] = 'Líon na leochaileachtaí déine íseal i seilbh FirstWave (ní i do bhunachar sonraí).';

$GLOBALS["lang"]['The number of medium severity vulnerabilities held by FirstWave (not in your database).'] = 'Líon na leochaileachtaí déine meánach i seilbh FirstWave (nach bhfuil i do bhunachar sonraí).';

$GLOBALS["lang"]['The number of purchased licenses.'] = 'Líon na gceadúnas ceannaithe.';

$GLOBALS["lang"]['The number of seconds to try and communicate with the target IP.'] = 'Líon na soicind chun iarracht a dhéanamh agus cumarsáid a dhéanamh leis an sprioc IP.';

$GLOBALS["lang"]['The number of vulnerabilities without a severity held by FirstWave (not in your database).'] = 'Líon na leochaileachtaí gan déine i seilbh FirstWave (nach bhfuil i do bhunachar sonraí).';

$GLOBALS["lang"]['The offset is the count of devices you wish to return data from.'] = 'Is é an fhritháireamh an líon feistí ar mian leat sonraí a thabhairt ar ais ó.';

$GLOBALS["lang"]['The only required permission / policy name (in our testing) is'] = 'Is é an t-aon chead riachtanach / ainm beartais (in ár dtástáil)';

$GLOBALS["lang"]['The optional secondary column. NOTE: When type = traffic, this represents the yellow query id.'] = 'An colún roghnach tánaisteach. NÓTA: Nuair a cineál = trácht, léiríonn sé seo an cheist buí id.';

$GLOBALS["lang"]['The optional third column. NOTE: When type = traffic, this represents the green query id.'] = 'An tríú colún roghnach. NÓTA: Nuair cineál = trácht, léiríonn sé seo an cheist glas id.';

$GLOBALS["lang"]['The order of information retrieval is snmp, ssh, wmi.'] = 'Is é an t-ordú aisghabháil faisnéise snmp, ssh, wmi.';

$GLOBALS["lang"]['The orientation of this device.'] = 'Treoshuíomh na feiste seo.';

$GLOBALS["lang"]['The password (if not using the user running the script).'] = 'An focal faire (mura bhfuil ag baint úsáide as an t-úsáideoir ag rith an script).';

$GLOBALS["lang"]['The password for the dn_account attribute.'] = 'An focal faire don tréith dn_account.';

$GLOBALS["lang"]['The password used to access the external system.'] = 'An focal faire a úsáidtear chun rochtain a fháil ar an gcóras seachtrach.';

$GLOBALS["lang"]['The path to the file or directory.'] = 'An cosán ar an gcomhad nó eolaire.';

$GLOBALS["lang"]['The path to the file or directory. Directories should end with a trailing slash.'] = 'An cosán ar an gcomhad nó eolaire. Ba chóir go deireadh le sracadh rian.';

$GLOBALS["lang"]['The physical depth (in CMs) of the rack.'] = 'An doimhneacht fhisiciúil (i CMs) an raca.';

$GLOBALS["lang"]['The physical height (in CMs) of the rack.'] = 'An airde fisiciúil (i CMs) an raca.';

$GLOBALS["lang"]['The physical weight (in KGs) of the rack at present.'] = 'An meáchan fisiciúil (i KGs) an raca faoi láthair.';

$GLOBALS["lang"]['The physical weight (in KGs) of the rack when empty.'] = 'An meáchan fisiciúil (i KGs) an raca nuair folamh.';

$GLOBALS["lang"]['The physical width (in CMs) of the rack.'] = 'An leithead fisiciúil (i CMs) an raca.';

$GLOBALS["lang"]['The pod (if any) that this rack is part of.'] = 'An pod (más ann) go bhfuil an raca seo mar chuid de.';

$GLOBALS["lang"]['The power circuit this rack attaches to.'] = 'Cuireann an ciorcad cumhachta an raca seo le.';

$GLOBALS["lang"]['The primary database table upon which to base this widget.'] = 'An tábla bunachar sonraí bunscoile ar a bhfuil a bhunú an ghiuirléid.';

$GLOBALS["lang"]['The primary method for authorization (what a user can do) is now based on the users Roles. Roles are defined as admin, org_admin, reporter, and user by default. Each role has a set of permissions (Create, Read, Update, Delete) for each endpoint. Standard roles as shipped should cover 99.9 percent of use-cases. The ability to define additional roles and edit existing roles is enabled in Open-AudIT Enterprise.'] = 'Tá an modh príomha le haghaidh údaraithe (cad is féidir le húsáideoir a dhéanamh) bunaithe anois ar na Róil úsáideoirí. Rólanna a shainmhínítear mar admin, org_admin, tuairisceoir, agus úsáideoir de réir réamhshocraithe. Tá gach ról sraith de cheadanna (Cruthaigh, Léigh, Nuashonrú, Scrios) do gach críochphointe. Ba chóir róil chaighdeánacha mar shipped chlúdach 99.9 faoin gcéad de chásanna úsáide. Tá an cumas a shainiú róil breise agus rólanna atá ann cheana in eagar ar chumas i Fiontraíocht Open-AudIT.';

$GLOBALS["lang"]['The process identifier of this queue item.'] = 'An t-aitheantóir próiseas an mhír scuaine seo.';

$GLOBALS["lang"]['The process that was used last to retrieve details about the device'] = 'An próiseas a úsáideadh go deireanach chun sonraí a aisghabháil faoin bhfeiste';

$GLOBALS["lang"]['The purpose of this licensing page is to list the products and licenses included in Firstwave Commercial products including products based upon open source works.Open-AudIT is licensed from Firstwave under AGPLv3 or later with Enterprise and Professional functionality licensed under commercial terms.Open-AudIT when downloaded from FirstWave may include the following libraries and projects, which are supplied unmodified and licensed as indicated:'] = 'Is é cuspóir an leathanaigh seo ceadúnú ná na táirgí agus na ceadúnais atá san áireamh i dtáirgí Tráchtála Firstwave lena n-áirítear táirgí atá bunaithe ar oibreacha foinse oscailte. Tá Open-AudIT ceadúnaithe ó Firstwave faoi AGPLv3 nó níos déanaí le feidhmiúlacht Fiontair agus Ghairmiúil ceadúnaithe faoi théarmaí tráchtála. Féadfaidh na leabharlanna agus na tionscadail seo a leanas a bheith san áireamh i Open-AudIT nuair a íoslódáiltear iad ó FirstWave:';

$GLOBALS["lang"]['The query that provides a list of devices for the integration. Links to <code>queries.id</code>.'] = 'An cheist a sholáthraíonn liosta de na feistí don chomhtháthú. Naisc go dtí <code>queries.id</code>.';

$GLOBALS["lang"]['The rack asset number.'] = 'An uimhir sócmhainní raca.';

$GLOBALS["lang"]['The rack asset tag.'] = 'An chlib sócmhainn raca.';

$GLOBALS["lang"]['The rack bar code.'] = 'An cód barra raca.';

$GLOBALS["lang"]['The rack model.'] = 'An tsamhail raca.';

$GLOBALS["lang"]['The rack serial.'] = 'An tsraith raca.';

$GLOBALS["lang"]['The rack series.'] = 'An tsraith raca.';

$GLOBALS["lang"]['The rack this device is located in. Links to <code>racks.id</code>.'] = 'Tá an raca an gléas seo lonnaithe i. Naisc go dtí <code>racks.id</code>.';

$GLOBALS["lang"]['The recommended process of addressing and fixing identified security vulnerabilities. This typically involves applying patches, updates, or other measures to eliminate the risk posed by the vulnerabilities.'] = 'An próiseas molta chun aghaidh a thabhairt agus a shocrú leochaileachtaí slándála aitheanta. Baineann sé seo de ghnáth i bhfeidhm paistí, nuashonruithe, nó bearta eile chun deireadh a chur leis an riosca a bhaineann leis na leochaileachtaí.';

$GLOBALS["lang"]['The regular domain notation of your directory. Eg - <code>open-audit.lan</code>.'] = 'An nodaireacht fearainn rialta ar do eolaire. Eg - <code>open-audit.lan</code>.';

$GLOBALS["lang"]['The requested properties should be in a comma-separated list. Properties should be fully qualified - ie, system.hostname (not just hostname).'] = 'Ba cheart na hairíonna a iarrtar a bheith i liosta camóg-scartha. Ba chóir go mbeadh airíonna cáilithe go hiomlán - ie, system.hostname (ní hamháin ósta).';

$GLOBALS["lang"]['The result of the command.'] = 'Mar thoradh ar an ordú.';

$GLOBALS["lang"]['The room the rack is located in.'] = 'Tá an seomra an raca suite i.';

$GLOBALS["lang"]['The row the rack is located in.'] = 'Tá an raca suite i ndiaidh a chéile.';

$GLOBALS["lang"]['The search for group on the LDAP server failed. Check the LDAP server logs. Have you created these groups (for roles and orgs) on the LDAP server and assigned LDAP users to them?'] = 'Theip ar an gcuardach grúpa ar an bhfreastalaí LDAP. Seiceáil na logs freastalaí LDAP. An chruthaigh tú na grúpaí seo (do róil agus orgs) ar an bhfreastalaí LDAP agus úsáideoirí LDAP sannta dóibh?';

$GLOBALS["lang"]['The secret key used in conjunction with your AWS EC2 API key.'] = 'An eochair rúnda a úsáidtear i gcomhar le do eochair AWS EC2 API.';

$GLOBALS["lang"]['The software end-of-life date.'] = 'An dáta bogearraí deireadh-saoil.';

$GLOBALS["lang"]['The software end-of-service-life date.'] = 'An dáta deiridh bogearraí seirbhíse-saoil.';

$GLOBALS["lang"]['The specific database column from the specified database table.'] = 'An colún bunachar sonraí sonrach ón tábla bunachar sonraí sonraithe.';

$GLOBALS["lang"]['The specific database table.'] = 'An tábla bunachar sonraí ar leith.';

$GLOBALS["lang"]['The standard Nmap timing options. Previously set at T4 (aggressive).'] = 'Na roghanna uainiú caighdeánach Nmap. Leagtar síos roimhe seo ag T4 (ionsclaíocha).';

$GLOBALS["lang"]['The standard Nmap timing options. We usually use -T4 (Aggressive) as this is recommended for a decent broadband or ethernet connection.'] = 'Na roghanna uainiú caighdeánach Nmap. Táimid ag úsáid de ghnáth -T4 (Aggressive) mar go bhfuil sé seo molta do leathanbhanda réasúnta nó nasc ethernet.';

$GLOBALS["lang"]['The status of this integration'] = 'Stádas an lánpháirtithe seo';

$GLOBALS["lang"]['The status of this queued item.'] = 'Stádas an mhír scuaine seo.';

$GLOBALS["lang"]['The steps below outline the process.'] = 'Léiríonn na céimeanna thíos an próiseas.';

$GLOBALS["lang"]['The target IP this log entry referers to (if any).'] = 'An sprioc IP Tagraíonn an iontráil seo logáil isteach (más ann).';

$GLOBALS["lang"]['The target computer to audit. \".\" means localhost.'] = 'Ciallaíonn an sprioc-ríomhaire chun iniúchadh a dhéanamh. \".';

$GLOBALS["lang"]['The template for the link to be generated per result line.'] = 'An teimpléad don nasc a ghintear in aghaidh an líne toradh.';

$GLOBALS["lang"]['The text for the bottom of the chart in a line chart (only).'] = 'An téacs do bun an chairt i gcairt líne (amháin).';

$GLOBALS["lang"]['The text that is displayed.'] = 'An téacs atá ar taispeáint.';

$GLOBALS["lang"]['The timestamp after which, this task should run. For example, run a task after the 1st June 2017 at 10am, set it to <code>2017-06-01 09:59:00</code>. This value should be zero padded (ie, 09, not 9). This value defaults to <code>2000-01-01 00:00:00</code> which means by default, a scheduled task will run at next scheduled execution time.'] = 'An timestamp ina dhiaidh sin, ba chóir an tasc seo a reáchtáil. Mar shampla, reáchtáil tasc tar éis an 1 Meitheamh 2017 ag 10am, é a shocrú chun <code>2017-06-01 09:59:00</code>. Ba cheart an luach seo a bheith nialasach (ie, 09, ní 9). An luach mainneachtainí a <code>2000-01-01 00:00:00</code> a chiallaíonn de réir réamhshocraithe, beidh tasc sceidealta ar siúl ag an chéad uair eile a fhorghníomhú sceidealta.';

$GLOBALS["lang"]['The top 10, 100 or 1000 (or none) TCP ports commonly in use according to Nmap.'] = 'An barr 10, 100 nó 1000 (nó aon cheann) TCP calafoirt go coitianta in úsáid de réir Nmap.';

$GLOBALS["lang"]['The top 10, 100 or 1000 (or none) UDP ports commonly in use according to Nmap.'] = 'An barr 10, 100 nó 1000 (nó aon cheann) calafoirt UDP go coitianta in úsáid de réir Nmap.';

$GLOBALS["lang"]['The total BTU output by this rack.'] = 'An t-aschur iomlán BTU ag an raca.';

$GLOBALS["lang"]['The type of device.'] = 'An cineál feiste.';

$GLOBALS["lang"]['The type of organisation.'] = 'An cineál eagraíochta.';

$GLOBALS["lang"]['The type of rack (compute, power, network, etc).'] = 'An cineál raca (compute, cumhacht, líonra, etc).';

$GLOBALS["lang"]['The type of task to run. One of: baseline, benchmark, cloud discovery, discovery, integration, report, query.'] = 'An cineál tasc a reáchtáil. Ceann de na: bunlíne, tagarmharc, fionnachtain scamall, fionnachtain, comhtháthú, tuarascáil, ceist.';

$GLOBALS["lang"]['The type of the integration (usually named after the external system).'] = 'An cineál comhtháthú (ainmnithe de ghnáth tar éis an córas seachtrach).';

$GLOBALS["lang"]['The unfiltered state means that a port is accessible, but Nmap is unable to determine whether it is open or closed. Only the ACK scan, which is used to map firewall rulesets, classifies ports into this state. Scanning unfiltered ports with other scan types such as Window scan, SYN scan, or FIN scan, may help resolve whether the port is open.'] = 'Ciallaíonn an stát neamhfhilteáilte go bhfuil calafort inrochtana, ach níl sé in ann a chinneadh an bhfuil sé oscailte nó dúnta. Níl ach an scanadh ACK, a úsáidtear chun léarscáil na rialacha balla dóiteáin, rangaíonn calafoirt isteach sa stát seo. Is féidir Scanning calafoirt unfiltered le cineálacha scanadh eile, mar shampla scanadh Fuinneog, scanadh SYN, nó scanadh FIN, cabhrú le réiteach cibé an bhfuil an calafort oscailte.';

$GLOBALS["lang"]['The unique identifier of this server.'] = 'An t-aitheantóir uathúil an fhreastalaí.';

$GLOBALS["lang"]['The user account this collector uses. Links to <code>users.id</code>.'] = 'An cuntas úsáideora Úsáideann an bailitheoir. Naisc go dtí <code>users.id</code>.';

$GLOBALS["lang"]['The user in Active Directory / OpenLDAP must be a direct member of the required Open-AudIT groups for Roles and Orgs. A member of a group that is a member another group that is a member of the Open-AudIT group will not work.'] = 'Ní mór don úsáideoir i Eolaire Gníomhach / OpenLDAP a bheith ina bhall díreach de na grúpaí Open-AudIT riachtanach do Róil agus Orgs. Ní oibreoidh ball de ghrúpa atá ina bhall de ghrúpa eile atá ina bhall den ghrúpa Open-AudIT.';

$GLOBALS["lang"]['The user is in LDAP and their credentials are valid, but is not in any of the Open-AudIT LDAP groups for Orgs.'] = 'Tá an t-úsáideoir i LDAP agus tá a gcuid dintiúir bailí, ach níl sé in aon cheann de na grúpaí LDAP Open-AudIT do Orgs.';

$GLOBALS["lang"]['The user is in LDAP and their credentials are valid, but is not in any of the Open-AudIT LDAP groups for Roles.'] = 'Tá an t-úsáideoir i LDAP agus tá a gcuid dintiúir bailí, ach níl sé in aon cheann de na grúpaí LDAP Open-AudIT do Róil.';

$GLOBALS["lang"]['The user is in LDAP and their credentials are valid, but is not in any of the required Open-AudIT LDAP groups.'] = 'Tá an t-úsáideoir i LDAP agus tá a gcuid dintiúir bailí, ach níl sé in aon cheann de na grúpaí LDAP Oscailte-AudIT is gá.';

$GLOBALS["lang"]['The user is in the LDAP group that matches this Org.'] = 'Tá an t-úsáideoir sa ghrúpa LDAP a oireann an Org seo.';

$GLOBALS["lang"]['The user is in the LDAP group that matches this Role.'] = 'Tá an t-úsáideoir sa ghrúpa LDAP a oireann an ról seo.';

$GLOBALS["lang"]['The user is not in the LDAP group that matches this Org.'] = 'Níl an t-úsáideoir sa ghrúpa LDAP a oireann an Org seo.';

$GLOBALS["lang"]['The user is not in the LDAP group that matches this Role.'] = 'Níl an t-úsáideoir sa ghrúpa LDAP a oireann an ról seo.';

$GLOBALS["lang"]['The user that was specified exists in LDAP, but Open-AudIT is not configured to consume the LDAP groups for roles and that user does not exist within Open-AudIT. Either select <i>Use LDAP for Roles</i> on the Open-AudIT LDAP Server screen or create this user within Open-AudIT and assign roles and orgs.'] = 'An t-úsáideoir a bhí sonraithe ann i LDAP, ach nach bhfuil Open-AudIT cumraithe a ithe na grúpaí LDAP do róil agus nach bhfuil an t-úsáideoir ann laistigh Open-AudIT. Roghnaigh <i>Úsáid LDAP do Róil</i> ar an LDAP Oscailte-AudIT scáileán Freastalaí nó an t-úsáideoir seo a chruthú laistigh Open-AudIT agus róil agus orgs shannadh.';

$GLOBALS["lang"]['The username (if not using the user running the script).'] = 'An ainm úsáideora (mura n-úsáideann an t-úsáideoir ag rith an script).';

$GLOBALS["lang"]['The username used to access the external system.'] = 'An ainm úsáideora a úsáidtear chun rochtain a fháil ar an gcóras seachtrach.';

$GLOBALS["lang"]['The users details were not retrieved from LDAP. Check the LDAP server logs.'] = 'Ní raibh na sonraí úsáideoirí aisghabháil ó LDAP. Seiceáil na logs freastalaí LDAP.';

$GLOBALS["lang"]['The users details were retrieved from LDAP.'] = 'Aisghabhadh na sonraí úsáideoirí ó LDAP.';

$GLOBALS["lang"]['The users email address.'] = 'Seoladh ríomhphoist na n-úsáideoirí.';

$GLOBALS["lang"]['The usual hours of operation at this site.'] = 'Na huaireanta gnáth oibríochta ar an suíomh seo.';

$GLOBALS["lang"]['The value assigned to the item.'] = 'An luach a shanntar don mhír.';

$GLOBALS["lang"]['The value that is stored for this particular item.'] = 'An luach atá stóráilte don mhír áirithe seo.';

$GLOBALS["lang"]['The vendor name as per CPE entries.'] = 'Ainm an díoltóra de réir iontrálacha CPE.';

$GLOBALS["lang"]['The vendor taken from the CPE.'] = 'An díoltóir a glacadh as an CPE.';

$GLOBALS["lang"]['The web directory on the host that Open-AudIT is installed (requires a trailing slash).'] = 'An t-eolaire gréasáin ar an óstach go bhfuil Open-AudIT suiteáilte (ag teastáil Slais rian).';

$GLOBALS["lang"]['The widget at position '] = 'An ghiuirléid ag seasamh ';

$GLOBALS["lang"]['The width of this device.'] = 'Leithead an gléas seo.';

$GLOBALS["lang"]['Their OrgIDs and their descendants'] = 'A n- OrgIDs agus a sliocht';

$GLOBALS["lang"]['Their OrgIDs only'] = 'A n- OrgIDs amháin';

$GLOBALS["lang"]['Their OrgIDs, ascendants and descendants'] = 'A n- OrgIDs, ascendants agus sliocht';

$GLOBALS["lang"]['Then'] = 'Ansin';

$GLOBALS["lang"]['Then create a new Auth method in Open-AudIT by going to menu -> Admin -> Auth Methods -> Create Auth. Provide a name and set the <i>type</i> to Entra.'] = 'Ansin a chruthú modh Auth nua i Open-AudIT ag dul go dtí roghchlár - ^ Riarachán - uaire Modhanna Auth - ^ Cruthaigh Auth. A chur ar fáil ainm agus a leagtar ar an <i>cineál gas: in airde</i> go Entra.';

$GLOBALS["lang"]['Then you can use Open-AudIT (unsupported) to receive audit data directly from the clients. Discovery <strong>will fail</strong>, but if youre not using Discovery (the main feature Open-AudIT was designed around), you can still get device data. You would need to run the audit scripts directly on the clients using cron, or use the Windows Agent feature (Enterprise only).'] = 'Ansin, is féidir leat úsáid a bhaint Open-AudIT (neamhtacaíocht) chun sonraí iniúchóireachta a fháil go díreach ó na cliaint. riachtanais uisce: measartha <strong>beidh teip</strong>, ach más rud é nach bhfuil tú ag baint úsáide as Discovery (bhí an ghné is mó Open-AudIT deartha timpeall), is féidir leat a fháil fós sonraí gléas. Ba mhaith leat a reáchtáil na scripteanna iniúchóireachta go díreach ar na cliaint ag baint úsáide as cron, nó a bhaint as an gné Gníomhaire Windows (Fiontraíocht amháin).';

$GLOBALS["lang"]['There is a button to export to JSON. This will display only the device table of attributes. To export the device with all associated component tables, view the device details, then add'] = 'Tá cnaipe a onnmhairiú go dtí JSON. Beidh sé seo a thaispeáint ach an tábla gléas na tréithe. Chun an gléas a onnmhairiú le gach tábla comhpháirte gaolmhara, féach ar na sonraí gléas, ansin cuir';

$GLOBALS["lang"]['There is absolutely no need to manually edit each individual device.'] = 'Níl fíor aon ghá a chur in eagar de láimh gach gléas aonair.';

$GLOBALS["lang"]['There is no need to do anything if you are running Open-AudIT on a Linux server.<br><br>Windows clients are just fine and require no special actions, however.... to enable this feature the audit script must be run locally on the target Windows system. It cannot be run remotely as we do with WMI calls when running the audit script on one Windows machine, while targeting a second Windows machine. To do this we need to copy the audit script to the target Windows machine and then run it. Unfortunately the service account that Apache runs under is the Local System account. This account has no access to remote (network based) resources. To work around this issue the service must be run under another account. It is easiest to just use the local Administrator account, but you can try any account you like as long as it has the required privileges. The Local System account has as much local access as the local Administrator account.'] = 'Níl aon ghá aon rud a dhéanamh má tá tú ag rith Open-AudIT ar fhreastalaí Linux.<br/><br/>Tá cliaint Windows ach fíneáil agus a cheangal ar aon ghníomhartha speisialta, áfach.... chun cur ar chumas an ghné seo ní mór an script iniúchóireachta a reáchtáil go háitiúil ar an sprioc Windows córas. Ní féidir é a reáchtáil go cianda mar a dhéanann muid le glaonna WMI nuair a reáchtáil an script iniúchóireachta ar cheann meaisín Windows, agus ag díriú ar an dara meaisín Windows. Chun seo a dhéanamh ní mór dúinn a chóipeáil an script iniúchóireachta chuig an sprioc Windows meaisín agus ansin é a reáchtáil. Ar an drochuair, is é an cuntas seirbhíse a ritheann Apache faoi chuntas an Chórais Áitiúil. Níl aon rochtain ag an gcuntas seo ar acmhainní iargúlta (líonra bunaithe). Ní mór an tseirbhís a reáchtáil faoi chuntas eile chun obair a dhéanamh timpeall na heisiúna seo. Is éasca a úsáid ach an cuntas Riarthóir áitiúil, ach is féidir leat triail aon chuntas is mian leat chomh fada agus a bhfuil sé na pribhléidí is gá. Tá an oiread rochtana áitiúil ag an gcuntas Córas Áitiúil mar chuntas an Riarthóra áitiúil.';

$GLOBALS["lang"]['These are only examples. You may need to adjust these attributes to suit your particular LDAP.'] = 'Is iad seo ach samplaí. D\'fhéadfá a choigeartú na tréithe a oireann do LDAP áirithe.';

$GLOBALS["lang"]['These parameters enable you to audit only what is useful and relevant to you, saving processing time and allowing you to discover your network in an orderly manner.'] = 'Cuireann na paraiméadair seo ar do chumas iniúchadh a dhéanamh ach an méid atá úsáideach agus ábhartha duit féin, am próiseála a shábháil agus ligean duit do líonra a fháil amach ar bhealach ordúil.';

$GLOBALS["lang"]['Thing'] = 'Thing';

$GLOBALS["lang"]['Think of mail.domain1.com and mail.domain2.com - same hostname.'] = 'Smaoinigh ar mail.domain1.com agus mail.domain2.com - hostname céanna.';

$GLOBALS["lang"]['Third'] = 'Tríú Tríú';

$GLOBALS["lang"]['This CVE will be retrieved and overwrite the existing CVE if it exists.'] = 'Beidh an CVE a aisghabháil agus scríobh an CVE atá ann cheana má tá sé ann.';

$GLOBALS["lang"]['This Org has no AD group specified. Check the roles details within Open-AudIT.'] = 'Níl grúpa AD sonraithe ag an Org seo. Seiceáil na róil sonraí laistigh Open-AudIT.';

$GLOBALS["lang"]['This Org has no AD group specified. Check the roles details within Open-AudIT. <span class=\"confluence-link\">Have you created these groups (for orgs) on the LDAP server and assigned LDAP users to them?'] = 'Níl grúpa AD sonraithe ag an Org seo. Seiceáil na róil sonraí laistigh Open-AudIT. <span class=\'\"confluence-link\"\'>An chruthaigh tú na grúpaí seo (do orgs) ar an bhfreastalaí LDAP agus úsáideoirí LDAP sannta dóibh?</span>';

$GLOBALS["lang"]['This Role has no AD group specified. Check the roles details within Open-AudIT.'] = 'Níl aon ghrúpa AD sonraithe ag an Ról seo. Seiceáil na róil sonraí laistigh Open-AudIT.';

$GLOBALS["lang"]['This attribute is stored as a JSON object. It is the list of all collections and contains the collection name along with <code>c</code>, <code>r</code>, <code>u</code> and,or <code>d</code> which represent create, read, update and delete. These are the actions a user can perform on items from that particular collection.'] = 'Tá an tréith a stóráil mar réad JSON. Is é an liosta de na bailiúcháin go léir agus tá an t-ainm a bhailiú chomh maith le <code>c</code>, <code>r</code>, <code>u</code> agus, nó <code>d</code> a léiríonn a chruthú, a léamh, a thabhairt cothrom le dáta agus a scriosadh. Is iad seo na gníomhartha is féidir le húsáideoir a dhéanamh ar míreanna ón mbailiúchán áirithe sin.';

$GLOBALS["lang"]['This can be either a varchar (a text field), a list (a list of values that can be selected) or a date.'] = 'Is féidir é seo a bheith ina varchar (réimse téacs), liosta (liosta de luachanna is féidir a roghnú) nó dáta.';

$GLOBALS["lang"]['This code relys on the great work done by the'] = 'Tá an cód seo ag brath ar an obair mhór a rinne an';

$GLOBALS["lang"]['This collectors universally unique identifier.'] = 'Seo bailitheoirí aitheantóir uathúil uilíoch.';

$GLOBALS["lang"]['This column is required by'] = 'Tá an colún ag teastáil de réir';

$GLOBALS["lang"]['This column is required by '] = 'Tá an colún ag teastáil de réir ';

$GLOBALS["lang"]['This description is auto-populated and should ideally be left as-is.'] = 'Tá an cur síos uathoibríoch-populated agus ba chóir go hidéalach a fhágáil mar-is.';

$GLOBALS["lang"]['This endpoint enables you to add the connections that are part of your network infrastructure, it allows you to customize a variety of attributes, specify where this connection is located and the organization that it belongs.'] = 'Cuireann an endpoint tú a chur leis na naisc atá mar chuid de do bhonneagar líonra, ceadaíonn sé duit a shaincheapadh ar éagsúlacht na tréithe, a shonrú i gcás ina bhfuil an nasc seo suite agus an eagraíocht go mbaineann sé.';

$GLOBALS["lang"]['This error indicates that SMB1 has been disabled or removed from the target machine. This is normal for modern version of Windows and you will only see this message when the SMB2 connection attempt has failed. If the SMB2 connection fails, we attempt SMB1 to enable discovery on old versions of Windows. If the target Windows machine <i>is</i> running an old version of Windows, it is likely your credentials have failed. In that case, see'] = 'Léiríonn an earráid seo go bhfuil SMB1 faoi mhíchumas nó a bhaint as an meaisín sprioc. Tá sé seo gnáth le haghaidh leagan nua-aimseartha de Windows agus beidh tú a fheiceáil ach an teachtaireacht nuair a bhíonn an iarracht nasc SMB2 theip. Má theipeann ar an nasc SMB2, iarracht muid SMB1 a chur ar chumas fionnachtana ar seanleaganacha Windows. Má tá an sprioc Windows meaisín <i>Is maith liom</i> ag rith leagan d\'aois de Windows, is dócha gur theip ar do dintiúir. Sa chás sin, féach';

$GLOBALS["lang"]['This error indicates that not enough virtual memory or paging file quota is available to complete the specified operation. You should try again later.'] = 'Léiríonn an earráid seo nach bhfuil go leor cuimhne fíorúil nó cuóta comhad paging ar fáil chun an oibríocht shonraithe a chur i gcrích. Ba chóir duit iarracht arís ina dhiaidh sin.';

$GLOBALS["lang"]['This error indicates the credentials used either are incorrect, do not exist or do not have sufficient privileges to log on remotely to the target Windows machine. You should verify the credentials and check the below.'] = 'Léiríonn an earráid seo na dintiúir a úsáidtear ceachtar mícheart, nach bhfuil ann nó nach bhfuil pribhléidí leordhóthanach chun logáil isteach go cianda leis an sprioc Windows meaisín. Ba chóir duit na dintiúir a fhíorú agus an thíos a sheiceáil.';

$GLOBALS["lang"]['This example creates a list of all Modules marked as'] = 'Cruthaíonn an sampla liosta de gach Modúl marcáilte mar';

$GLOBALS["lang"]['This example creates a list of devices and the open Ports, Protocols, and Programs found by the NMAP scan.'] = 'Cruthaíonn an sampla liosta feistí agus na Calafoirt oscailte, Prótacail, agus Cláir le fáil ag an scanadh NMAP.';

$GLOBALS["lang"]['This example creates a list of devices where the Function or Description fields are blank OR the Purchase Date is the default.'] = 'Cruthaíonn an sampla liosta feistí ina bhfuil na réimsí Feidhm nó Cur síos bán NÓ go bhfuil an Dáta Ceannaigh an réamhshocraithe.';

$GLOBALS["lang"]['This example query retrieves a list of devices OVER 3 years old. The query uses today'] = 'Faigheann an cheist sampla liosta de na feistí OVER 3 bliana d\'aois. Úsáideann an cheist inniu';

$GLOBALS["lang"]['This example uses'] = 'Úsáideann an sampla seo';

$GLOBALS["lang"]['This feature requires a Professional or an Enterprise license.'] = 'Éilíonn an ghné seo ceadúnas Gairmiúla nó Fiontraíochta.';

$GLOBALS["lang"]['This feature, because it has the ability to affect target devices more than usual must be manually enabled. To enable this feature, change the configuration item feature_executables to <i>yes</i>.'] = 'Ní mór an ghné seo, toisc go bhfuil sé an cumas chun difear a dhéanamh feistí sprioc níos mó ná mar is gnách a chumasú de láimh. Chun cur ar chumas an ghné seo, athrú ar an mír chumraíocht feature_executables a <i>cineál gas: in airde</i>.';

$GLOBALS["lang"]['This file tells Linux to poll the application to determine if there are any scheduled tasks that should be run.'] = 'Insíonn an comhad Linux chun vótaíocht an t-iarratas a chinneadh an bhfuil aon tascanna sceidealta ba chóir a reáchtáil.';

$GLOBALS["lang"]['This form provides a simple way to get started discovering the devices on your network. For more (much more) detailed options, you can individually create'] = 'Soláthraíonn an fhoirm seo ar bhealach simplí chun tús a fháil amach na feistí ar do líonra. Le haghaidh níos mó (i bhfad níos mó) roghanna mionsonraithe, is féidir leat a chruthú ina n-aonar';

$GLOBALS["lang"]['This is also the way that PAExec works.'] = 'Tá sé seo freisin ar an mbealach a oibríonn PAExec.';

$GLOBALS["lang"]['This is an optional configuration option, enabled by setting discovery_use_org_id_match in the global configuration.'] = 'Is é seo an rogha cumraíochta roghnach, ar chumas trí leagan amach_use_org_id_match sa chumraíocht domhanda.';

$GLOBALS["lang"]['This is generally the primary column, unless otherwise configured. NOTE: When type = traffic, this represents the secondary text.'] = 'Is é seo go ginearálta an colún bunscoile, mura bhfuil a mhalairt cumraithe. NÓTA: Nuair a cineál = trácht, is ionann é seo agus an téacs tánaisteach.';

$GLOBALS["lang"]['This is likely due to MySQL time being off. MySQL typically uses the host devices time. You can check this by'] = 'Tá sé seo dócha mar gheall ar am MySQL a bheith as. Úsáideann MySQL de ghnáth an t-am feistí óstach. Is féidir leat é seo a sheiceáil ag';

$GLOBALS["lang"]['This is settable by users and so even though it should be globally unique, there is certainly no guarantee of this.'] = 'Tá sé seo settable ag úsáideoirí agus mar sin cé gur chóir é a bheith ar fud an domhain ar leith, tá cinnte aon ráthaíocht seo.';

$GLOBALS["lang"]['This is the directory where we store any attachments to devices.'] = 'Is é seo an eolaire nuair a stóráil againn aon ceangaltáin le feistí.';

$GLOBALS["lang"]['This is to be used as the first point of call when troubleshooting Open-AudIT issues. You can click the Export button on the top right to retrieve this as a JSON file (to be added to the support ticket / email.'] = 'Tá sé seo le húsáid mar an chéad phointe glaonna nuair fadhbanna saincheisteanna Open-AudIT. Is féidir leat cliceáil ar an gcnaipe Onnmhairithe ar an ceart barr a fháil seo mar chomhad JSON (a chur leis an ticéad tacaíochta / ríomhphost.';

$GLOBALS["lang"]['This issue is under investigation.'] = 'Tá an cheist seo faoi imscrúdú.';

$GLOBALS["lang"]['This item must match the value of the attribute selected or contains the ID of the query to be used.'] = 'Ní mór an mhír seo a mheaitseáil le luach na tréithe a roghnaíodh nó tá ID an cheist atá le húsáid.';

$GLOBALS["lang"]['This item must match the value of the attribute selected.'] = 'Ní mór an mhír seo a mheaitseáil le luach na tréithe a roghnaíodh.';

$GLOBALS["lang"]['This license expires on'] = 'Téann an ceadúnas seo in éag ar';

$GLOBALS["lang"]['This security permission can be modified using the Component Services administrative tool.'] = 'Is féidir an cead slándála a mhodhnú ag baint úsáide as an uirlis riaracháin Seirbhísí Comhpháirt.';

$GLOBALS["lang"]['This should be commented out after troubleshooting as debug mode will generate a lot of logs on the disk for no benefit.'] = 'Ba chóir é seo a trácht amach tar éis fabhtcheartú mar go mbeidh modh debug ghiniúint a lán de logaí ar an diosca chun aon sochar.';

$GLOBALS["lang"]['This should be globally unique, but I have seen instances where it is not.'] = 'Ba chóir é seo a bheith ar fud an domhain ar leith, ach tá mé le feiceáil cásanna nuair nach bhfuil sé.';

$GLOBALS["lang"]['This should be set to either 1 or the height of the rack.'] = 'Ba chóir é seo a shocrú go dtí 1 nó ar airde an raca.';

$GLOBALS["lang"]['This should be the fully qualified field name in the database. Currently columns from the system, fields and credentials tables are supported. EG: system.nmis_role.'] = 'Ba chóir go mbeadh sé seo an t-ainm réimse láncháilithe sa bhunachar sonraí. Faoi láthair tá colúin ón gcóras, réimsí agus táblaí dintiúir tacaíocht. EG: system.nmis_role.';

$GLOBALS["lang"]['This state is used when Nmap is unable to determine whether a port is closed or filtered. It is only used for the IP ID idle scan.'] = 'Úsáidtear an stát seo nuair nach féidir le Nmap a chinneadh an bhfuil calafort dúnta nó scagtha. Tá sé a úsáidtear ach amháin le haghaidh an scanadh IP ID díomhaoin.';

$GLOBALS["lang"]['This will auto-populate.'] = 'Beidh sé seo auto-populate.';

$GLOBALS["lang"]['This will considerably slow the discovery scan.'] = 'Beidh sé seo go mór mall an scanadh fionnachtana.';

$GLOBALS["lang"]['This will delete the current rows in the'] = 'Scriosfaidh sé seo na sraitheanna reatha sna';

$GLOBALS["lang"]['This will permanently DELETE this license.'] = 'Beidh sé seo go buan DELETE an ceadúnas seo.';

$GLOBALS["lang"]['This will show you the Bulk Edit form. Any attributes you set on this form will be applied to all selected devices. You can set multiple attributes at once.'] = 'Taispeánfaidh sé seo duit an fhoirm Bulk Edit. Déanfar aon tréithe a shocraíonn tú ar an bhfoirm seo a chur i bhfeidhm ar gach feiste roghnaithe. Is féidir leat a leagtar tréithe éagsúla ag an am céanna.';

$GLOBALS["lang"]['Thursday'] = 'Déardaoin';

$GLOBALS["lang"]['time_caption'] = 'Am Caption';

$GLOBALS["lang"]['Time Caption'] = 'Am Caption';

$GLOBALS["lang"]['time_daylight'] = 'Am Crios ama shamplála';

$GLOBALS["lang"]['Time Daylight'] = 'Am Crios ama shamplála';

$GLOBALS["lang"]['Time to Execute'] = 'Am a Rith';

$GLOBALS["lang"]['timeout'] = 'Amuigh faoin aer';

$GLOBALS["lang"]['Timeout'] = 'Amuigh faoin aer';

$GLOBALS["lang"]['Timeout Per Target (Seconds)'] = 'Timeout Per Target (An Dara)';

$GLOBALS["lang"]['Timeout per Target. Wait for X seconds for a target response.'] = 'Timeout in aghaidh an Sprioc. Fan ar feadh X soicind le haghaidh freagra sprioc.';

$GLOBALS["lang"]['Timesatamp'] = 'Amharc ar gach eolas';

$GLOBALS["lang"]['Timestamp'] = 'Déan teagmháil linn';

$GLOBALS["lang"]['timing'] = 'uainiú bláthanna: meitheamh';

$GLOBALS["lang"]['Timing'] = 'uainiú bláthanna: meitheamh';

$GLOBALS["lang"]['Timor-Leste'] = 'Uisce agus Séarachas';

$GLOBALS["lang"]['Title'] = 'Teideal';

$GLOBALS["lang"]['To a new file named .env (in the same directory). Now edit that new file and uncomment (remove the #) the line below (line 17)'] = 'Chun comhad nua ainmnithe .env (sa eolaire céanna). Anois in eagar go comhad nua agus uncomment (aistriú an #) an líne thíos (líne 17)';

$GLOBALS["lang"]['To actually execute the query, append a /execute, thus /open-audit/index.php/queries/{$id}/execute.'] = 'A fhorghníomhú iarbhír an cheist, a chur i gceangal / execute, dá bhrí sin / oscailte-audit / innéacs.php / queries / {$}/execute.';

$GLOBALS["lang"]['To audit a machine, you must have credentials and administrator level access.'] = 'Chun iniúchadh a dhéanamh ar mheaisín, ní mór duit dintiúir agus rochtain ar leibhéal an riarthóra.';

$GLOBALS["lang"]['To audit a remote machine on an Active Directory domain, your supplied user (or if none provided, the user running the script) must be a member of the target machines Administrators group (or subgroup).'] = 'Chun iniúchadh a dhéanamh ar mheaisín iargúlta ar fhearann Eolaire Gníomhach, ní mór do d\'úsáideoir ar fáil (nó más rud é nach bhfuil ar fáil, an t-úsáideoir ag rith an script) a bheith ina bhall den spriocghrúpa Riarthóirí meaisíní (nó foghrúpa).';

$GLOBALS["lang"]['To audit a remote machine that is not in a domain, you must use the Administrator account (not <i>an</i> admin account, <i>the</i> Administrator account) on the target PC. #1 and #2'] = 'Chun iniúchadh a dhéanamh ar mheaisín iargúlta nach bhfuil i bhfearann, ní mór duit an cuntas Riarthóir a úsáid (ní <i>ar an</i> cuntas admin, <i>an</i> Cuntas Riarthóir) ar an ríomhaire sprioc. #1 agus #2';

$GLOBALS["lang"]['To audit localhost, any supplied credentials are disregarded and the connection is made using the details of the user running the script.'] = 'Chun iniúchadh a dhéanamh ar localhost, aon dintiúir a sholáthraítear neamhaird agus tá an nasc déanta ag baint úsáide as na sonraí ar an úsáideoir ag rith an script.';

$GLOBALS["lang"]['To compare software we check the name and version. Because version numbers are not all standardised in format, when we receive an audit result we create a new attribute called software_padded which we store in the database along with the rest of the software details for each package. For this reason, baselines using software policies will not work when run against a device that has not been audited by 1.10 (at least). Software policies can test against the version being <i>equal to</i>, <i>greater than</i> or <i>equal to or greater than</i>.'] = 'Chun bogearraí a chur i gcomparáid seiceáil muid an t-ainm agus leagan. Toisc nach bhfuil uimhreacha leagan caighdeánaithe go léir i bhformáid, nuair a fhaigheann muid toradh iniúchóireachta a chruthú againn tréith nua ar a dtugtar software_padded a stóráil muid sa bhunachar sonraí chomh maith leis an gcuid eile de na sonraí bogearraí do gach pacáiste. Ar an gcúis seo, ní bheidh bunlínte ag baint úsáide as polasaithe bogearraí ag obair nuair a reáchtáiltear i gcoinne gléas nach bhfuil iniúchta ag 1.10 (ar a laghad). Is féidir le beartais bogearraí tástáil i gcoinne an leagan á <i>comhionann le</i>, <i>níos mó ná</i> nó <i>comhionann le nó níos mó ná</i>.';

$GLOBALS["lang"]['To create a new entry click the Create button in the upper right hand corner.'] = 'Chun iontráil nua a chruthú cliceáil ar an gcnaipe Cruthaigh sa chúinne láimhe uachtarach.';

$GLOBALS["lang"]['To create a resource, you should POST the required data.'] = 'Chun acmhainn a chruthú, ba chóir duit na sonraí is gá a POST.';

$GLOBALS["lang"]['To enable a remote machine (Vista or above) to be audited that is not on a domain, by an account in the Administrators group, other than the actual Administrator account see the below section on UAC.'] = 'Chun a chur ar chumas meaisín iargúlta (Vista nó os a chionn) a iniúchadh nach bhfuil ar bhfearann, ag cuntas i ngrúpa na Riarthóirí, seachas an cuntas Riarthóir iarbhír a fheiceáil ar an alt thíos ar UAC.';

$GLOBALS["lang"]['To enable this, create a new Auth item by going to menu -> Admin -> Auth -> Create Auth Method.'] = 'Chun cur ar chumas seo, a chruthú mír Auth nua ag dul go dtí roghchlár - ^ Riarachán - uaire Auth - ^ Cruthaigh Modh Auth.';

$GLOBALS["lang"]['To execute the Windows powershell script, open a command prompt as Administrator and use the following command'] = 'A fhorghníomhú an script powershell Windows, oscailt ordú pras mar Riarthóir agus an t-ordú seo a leanas a úsáid';

$GLOBALS["lang"]['To execute the audit script, open a terminal and use the following command'] = 'A fhorghníomhú an script iniúchóireachta, oscailt críochfort agus an t-ordú seo a leanas a úsáid';

$GLOBALS["lang"]['To filter by a property value, use the property name. Operators that should precede the value are'] = 'Chun scagadh a dhéanamh ar luach maoine, bain úsáid as an ainm maoine. Oibreoirí ar chóir roimh an luach atá';

$GLOBALS["lang"]['To install Nmap on Windows, visit the Nmap page at'] = 'A shuiteáil Nmap ar Windows, tabhair cuairt ar an leathanach Nmap ag';

$GLOBALS["lang"]['To make the change, just follow the steps below.'] = 'Chun an t-athrú a dhéanamh, ach lean na céimeanna thíos.';

$GLOBALS["lang"]['To retrieve the Tenant ID. Open the Azure portal click on Azure Active Directory, Properties and the Tenant ID is displayed as your Directory ID - do not blame me for the name mismatch, that is how Microsoft roll.'] = 'A fháil ar an ID Tionónta. Oscail an tairseach Azure cliceáil ar Eolaire Gníomhach Azure, Airíonna agus an ID Tionónta taispeáint mar do ID Eolaire - ná milleán dom le haghaidh an mí-oiriúnacht ainm, is é sin conas rolla Microsoft.';

$GLOBALS["lang"]['To retrieve your key, log in to the AWS Console and select your username, then My Security Credentials.'] = 'Chun a fháil do eochair, logáil isteach ar an Console AWS agus roghnaigh do ainm úsáideora, ansin mo Dintiúir Slándáil.';

$GLOBALS["lang"]['To return a specific component item.'] = 'Chun mír chomhpháirte ar leith a thabhairt ar ais.';

$GLOBALS["lang"]['To return all items for a compnent type for a specific device.'] = 'A thabhairt ar ais gach mír le haghaidh cineál compnent le haghaidh gléas ar leith.';

$GLOBALS["lang"]['To return all items for a component type. If you wanted all software you would use'] = 'A thabhairt ar ais gach mír do chineál a chomhdhéanann í. Má bhí tú gach bogearraí a bheadh tú ag úsáid';

$GLOBALS["lang"]['To reverse sort, insert a minus, thus'] = 'A athrú saghas, cuir isteach lúide, dá bhrí sin';

$GLOBALS["lang"]['To run the test script on the target Windows PC'] = 'A reáchtáil an script tástála ar an sprioc Windows PC';

$GLOBALS["lang"]['To select devices to be integrated, we use nmis_manage = y, but you might like (for example) type = router. You can also use a Group or Query if you prefer something more complex.'] = 'Chun feistí a roghnú le bheith comhtháite, bainimid úsáid as nmis_manage = y, ach d\'fhéadfadh tú mhaith (mar shampla) cineál = ródaire. Is féidir leat úsáid a bhaint freisin Grúpa nó Query más fearr leat rud éigin níos casta.';

$GLOBALS["lang"]['To sort by a database column, use'] = 'A shórtáil ag colún bunachar sonraí, úsáid';

$GLOBALS["lang"]['To use this Enterprise feature, you first need to create your user in Open-AudIT as per usual. Assigning a password is not necessary. You do have to assign Roles and Orgs. The username in Open-AudIT should match the Entra <i>preferred username</i> attribute. There is no need for a Full Name or Email - these will be populated from Entra. If you do not know your users <i>preferred username</i>, fear not. You can create the new Auth Method in Open-AudIT and the Enterprise Application in Entra and when a user attempts to sign-on to Open-AudIT without a pre-existing user, check the logs and you will see their <i>preferred username</i> logged for your convienence.'] = 'Chun an ghné Fiontair seo a úsáid, ní mór duit d\'úsáideoir a chruthú in Open-AudIT de réir mar is gnách. Ní gá pasfhocal a shannadh. Tá tú a shannadh Róil agus Orgs. Ba chóir an t-ainm úsáideora i Open-AudIT mheaitseáil leis an Entra <i>ainm úsáideora</i> tréith. Níl aon ghá le Ainm Iomlán nó Ríomhphost - beidh siad seo a daonra ó Entra. Mura bhfuil a fhios agat d\'úsáideoirí <i>ainm úsáideora</i>, eagla nach bhfuil. Is féidir leat a chruthú ar an Modh Auth nua i Open-AudIT agus an tIarratas Fiontraíochta i Entra agus nuair a iarrachtaí úsáideoir a shíniú-ar a Open-AudIT gan úsáideoir a bhí ann cheana féin, seiceáil na logs agus beidh tú a fheiceáil a n- <i>ainm úsáideora</i> logáilte do do chiontú.';

$GLOBALS["lang"]['To use this Enterprise feature, you first need to create your user in Open-AudIT as per usual. Assigning a password is not necessary. You do have to assign Roles and Orgs. The username in Open-AudIT should match the OKTA <i>name</i> attribute. There is no need for a Full Name or Email - these will be populated from OKTA. If you do not know your users <i>name<i>, fear not. You can create the new Auth Menthod in Open-AudIT and the Application in OKTA and when a user attempts to sign-on to Open-AudIT without a pre-existing user, check the logs and you will see their <i>name<i> logged for your convienence.<br></p><p>Then create a new Auth method in Open-AudIT by going to menu -> Admin -> Auth Methods -> Create Auth. Provide a name and set the <i>type</i> to Okta.'] = 'Chun an ghné Fiontair seo a úsáid, ní mór duit d\'úsáideoir a chruthú in Open-AudIT de réir mar is gnách. Ní gá pasfhocal a shannadh. Tá tú a shannadh Róil agus Orgs. Ba chóir an t-ainm úsáideora i Open-AudIT mheaitseáil leis an OKTA <i>ainm ainm</i> tréith. Níl aon ghá le Ainm Iomlán nó Ríomhphost - beidh siad seo a daonra ó OKTA. Mura bhfuil a fhios agat d\'úsáideoirí <i>ainm ainm<i>, eagla nach bhfuil. Is féidir leat a chruthú ar an Menthod Auth nua i Open-AudIT agus an t-Iarratas i OKTA agus nuair a iarrachtaí úsáideoir a shíniú-ar a Open-AudIT gan úsáideoir a bhí ann cheana féin, seiceáil na logs agus beidh tú a fheiceáil a n- <i>ainm ainm<i> logáilte do do chiontú.<br/><p>Ansin a chruthú modh Auth nua i Open-AudIT ag dul go dtí roghchlár - ^ Riarachán - uaire Modhanna Auth - ^ Cruthaigh Auth. A chur ar fáil ainm agus a leagtar ar an <i>cineál gas: in airde</i> go Okta.</p></i></i></i></i>';

$GLOBALS["lang"]['To use this feature you must enable the configuration items match_mac (for AWS) and match_hostname (for Azure). This will be done automatically the first time a cloud discovery is executed. For more on Open-AudITs matching rules see HERE: Matching Devices'] = 'Chun an ghné seo a úsáid ní mór duit na míreanna cumraíochta match_mac (do AWS) agus match_hostname (do Azure). Déanfar é seo go huathoibríoch an chéad uair a dhéantar fionnachtain scamall a fhorghníomhú. Chun tuilleadh eolais a fháil ar rialacha comhoiriúnachta Open-AudIT féach ANSEO: Gléasanna Meaitseála';

$GLOBALS["lang"]['To view the details of a query, the standard URL structure of /open-audit/index.php/queries/{$id} should be used.'] = 'Chun féachaint ar na sonraí ar cheist, an struchtúr URL caighdeánach de / oscailte-audit / innéacs. Ba chóir php / queries / {$) a úsáid.';

$GLOBALS["lang"]['Togo'] = 'Go raibh maith agat';

$GLOBALS["lang"]['Tokelau'] = 'Uisce agus Séarachas';

$GLOBALS["lang"]['Tonga'] = 'Tonga';

$GLOBALS["lang"]['toolbar_style'] = 'Stíl Uirlisí';

$GLOBALS["lang"]['Toolbar Style'] = 'Stíl Uirlisí';

$GLOBALS["lang"]['Top Nmap TCP Ports'] = 'Barr Nmap Calafoirt TCP';

$GLOBALS["lang"]['Top Nmap TCP Ports. The top 10, 100, 1000 ports to scan as per Nmaps &quot;top ports&quot; options.'] = 'Barr Nmap Calafoirt TCP. An barr 10, 100, 1000 calafoirt a scanadh de réir Nmaps " calafoirt barr" roghanna.';

$GLOBALS["lang"]['Top Nmap UDP Ports'] = 'Barr Nmap Calafoirt UDP';

$GLOBALS["lang"]['Top Nmap UDP Ports. The top 10, 100, 1000 ports to scan as per Nmaps &quot;top ports&quot; options.'] = 'Barr Nmap Calafoirt UDP. An barr 10, 100, 1000 calafoirt a scanadh de réir Nmaps " calafoirt barr" roghanna.';

$GLOBALS["lang"]['Traditional Chinese'] = 'Sínis Traidisiúnta';

$GLOBALS["lang"]['Traffic Light'] = 'Solas an tSuímh';

$GLOBALS["lang"]['Trinidad and Tobago'] = 'Trinidad agus Tobago';

$GLOBALS["lang"]['Troubleshooting'] = 'Fabhtcheartú';

$GLOBALS["lang"]['Troubleshooting LDAP Logins'] = 'Fabhtcheartú LDAP Logins';

$GLOBALS["lang"]['Try Open-AudIT Enterprise, on us without a time limit. All the features of Enterprise. Limited to 20 devices.'] = 'Bain triail as Oscailte Fiontraíocht, ar dúinn gan teorainn ama. Gach na gnéithe de Fiontar. Teoranta le 20 feiste.';

$GLOBALS["lang"]['Try all the latest features with a FREE 100 device license of Open-AudIT Enterprise. Please read the '] = 'Bain triail as na gnéithe is déanaí le ceadúnas gléas SAOR IN AISCE 100 de Fiontar Oscailte-AudIT. Léigh le do thoil an ';

$GLOBALS["lang"]['Try logging in using an LDAP user. We are assuming this will fail (otherwise, why are you still reading this?). Next, comment out the line from ther file above.'] = 'Bain triail as logáil isteach ag baint úsáide as LDAP úsáideoir. Táimid ag glacadh leis seo theipeann (ar shlí eile, cén fáth go bhfuil tú ag léamh go fóill seo?). Next, trácht a dhéanamh ar an líne ón gcomhad r thuas.';

$GLOBALS["lang"]['Tuesday'] = 'Dé hAoine';

$GLOBALS["lang"]['Tunisia'] = 'Túinéis agus Túinéis';

$GLOBALS["lang"]['Turkey'] = 'Tuirc';

$GLOBALS["lang"]['Turkish'] = 'Tuircis';

$GLOBALS["lang"]['Turkmenistan'] = 'An Tuircméanastáin';

$GLOBALS["lang"]['Turks and Caicos Islands'] = 'Oileáin na dTurcach agus Caicos';

$GLOBALS["lang"]['Tuvalu'] = 'Uisce agus Séarachas';

$GLOBALS["lang"]['tx_bitrate'] = 'Tx Bitrate';

$GLOBALS["lang"]['Tx Bitrate'] = 'Tx Bitrate';

$GLOBALS["lang"]['tx_freq'] = 'Seirbhís do Chustaiméirí';

$GLOBALS["lang"]['Tx Freq'] = 'Seirbhís do Chustaiméirí';

$GLOBALS["lang"]['tx_level'] = 'Leibhéal Tacsaithe';

$GLOBALS["lang"]['Tx Level'] = 'Leibhéal Tacsaithe';

$GLOBALS["lang"]['tx_power'] = 'Cumhacht Tx';

$GLOBALS["lang"]['Tx Power'] = 'Cumhacht Tx';

$GLOBALS["lang"]['tx_profile'] = 'Próifíl na Cuideachta';

$GLOBALS["lang"]['Tx Profile'] = 'Próifíl na Cuideachta';

$GLOBALS["lang"]['type'] = 'Cineál Cineál Cineál Cineál';

$GLOBALS["lang"]['Type'] = 'Cineál Cineál Cineál Cineál';

$GLOBALS["lang"]['Type: This can be either a varchar (a text field) or a List (a list of values that can be selected).'] = 'Cineál: Is féidir é seo a bheith ina varchar (réimse téacs) nó Liosta (liosta de luachanna is féidir a roghnú).';

$GLOBALS["lang"]['Types of Networks'] = 'Cineálacha Líonraí';

$GLOBALS["lang"]['URL'] = 'URL';

$GLOBALS["lang"]['uuid'] = 'UISCE';

$GLOBALS["lang"]['UUID'] = 'UISCE';

$GLOBALS["lang"]['udp_ports'] = 'Seirbhís do Chustaiméirí';

$GLOBALS["lang"]['Udp Ports'] = 'Seirbhís do Chustaiméirí';

$GLOBALS["lang"]['Uganda'] = 'Uganda';

$GLOBALS["lang"]['Ukraine'] = 'Cónaidhm na Rúise';

$GLOBALS["lang"]['Ukrainian'] = 'bláthanna cumhra: cumhráin';

$GLOBALS["lang"]['Undergo Stage 1 audit (documentation review)'] = 'Fochéim 1 iniúchadh (athbhreithniú doiciméadú)';

$GLOBALS["lang"]['Undergo Stage 2 audit (implementation review)'] = 'Fochéim 2 iniúchadh (athbhreithniú cur chun feidhme)';

$GLOBALS["lang"]['Undergoing Analysis'] = 'Anailís Tosaithe';

$GLOBALS["lang"]['Unfiltered'] = 'Díroghnaigh gach rud';

$GLOBALS["lang"]['uninstall'] = 'Díroghnaigh gach rud';

$GLOBALS["lang"]['Uninstall'] = 'Díroghnaigh gach rud';

$GLOBALS["lang"]['Uninstall the Agent'] = 'Díshuiteáil an Gníomhaire';

$GLOBALS["lang"]['United Arab Emirates'] = 'Cónaidhm na Rúise';

$GLOBALS["lang"]['United Kingdom'] = 'an Ríocht Aontaithe';

$GLOBALS["lang"]['United States Minor Outlying Islands'] = 'Stáit Aontaithe Mion-Oileáin Amach';

$GLOBALS["lang"]['United States Virgin Islands'] = 'Stáit Aontaithe Mhaighdean Oileáin';

$GLOBALS["lang"]['United States of America'] = 'Stáit Aontaithe Mheiriceá';

$GLOBALS["lang"]['Unknown'] = 'Ar an eolas';

$GLOBALS["lang"]['unlock_pin'] = 'Díroghnaigh gach rud';

$GLOBALS["lang"]['Unlock Pin'] = 'Díroghnaigh gach rud';

$GLOBALS["lang"]['Unscheduled'] = 'Díroghnaigh gach rud';

$GLOBALS["lang"]['Unused as at 5.2.0.'] = 'Gan úsáid mar ag 5.2.0.';

$GLOBALS["lang"]['Unused.'] = 'Gan úsáid.';

$GLOBALS["lang"]['Update'] = 'Déan Teagmháil Linn';

$GLOBALS["lang"]['update_external_count'] = 'Tuilleadh eolais';

$GLOBALS["lang"]['Update External Count'] = 'Tuilleadh eolais';

$GLOBALS["lang"]['update_external_from_internal'] = 'Nuashonraigh Seachtrach Ó Inmheánaigh';

$GLOBALS["lang"]['Update External From Internal'] = 'Nuashonraigh Seachtrach Ó Inmheánaigh';

$GLOBALS["lang"]['update_internal_count'] = 'Tuilleadh eolais';

$GLOBALS["lang"]['Update Internal Count'] = 'Tuilleadh eolais';

$GLOBALS["lang"]['update_internal_from_external'] = 'Nuashonraigh Inmheánach';

$GLOBALS["lang"]['Update Internal From External'] = 'Nuashonraigh Inmheánach';

$GLOBALS["lang"]['Update NMIS Devices from Open-AudIT'] = 'Nuashonraigh Feistí NMIS ó Open-AudIT';

$GLOBALS["lang"]['Update Open-AudIT Devices from '] = 'Íoslódáil Adobe Reader Gléasanna ó ';

$GLOBALS["lang"]['Update Open-AudIT Devices from NMIS'] = 'Íoslódáil Adobe Reader Feistí ó NMIS';

$GLOBALS["lang"]['Update Vulnerabilities'] = 'Dliteanais Nuashonraigh';

$GLOBALS["lang"]['Update an attribute of a {collection} entry.'] = 'Nuashonraigh tréith de {bailíocht} iontráil.';

$GLOBALS["lang"]['Update attributes'] = 'Nuashonraigh tréithe';

$GLOBALS["lang"]['Updated each time discovery has been executed with IPs detected to be responding.'] = 'Nuashonraigh gach fionnachtain am curtha chun báis le IPanna a braitheadh a bheith ag freagairt.';

$GLOBALS["lang"]['Updated each time discovery has been executed with IPs that have been scanned by Nmap.'] = 'Nuashonraigh gach fionnachtain ama curtha chun báis le IPanna a scanadh ag Nmap.';

$GLOBALS["lang"]['Updated each time discovery has been executed with devices we were able to audit.'] = 'Nuashonraigh gach fionnachtain am curtha chun báis le feistí a bhí muid in ann a iniúchadh.';

$GLOBALS["lang"]['Updated each time discovery has been executed with devices we were able to query.'] = 'Nuashonraigh gach fionnachtain am curtha chun báis le feistí a bhí muid in ann a chuardach.';

$GLOBALS["lang"]['Updated each time discovery has been executed.'] = 'Nuashonraigh gach fionnachtain am curtha chun báis.';

$GLOBALS["lang"]['Updated each time the discovery has been executed.'] = 'Nuashonraigh gach uair go bhfuil an fionnachtain curtha chun báis.';

$GLOBALS["lang"]['Updated each time the discovery has completed execution.'] = 'Nuashonraigh gach uair go bhfuil an fionnachtain críochnaithe fhorghníomhú.';

$GLOBALS["lang"]['Updating'] = 'Uasdátú';

$GLOBALS["lang"]['Upgrade'] = 'Uasghrádú';

$GLOBALS["lang"]['Upload an audit result file'] = 'Uaslódáil comhad toradh iniúchóireachta';

$GLOBALS["lang"]['Upper Case'] = 'Cás Ã seal';

$GLOBALS["lang"]['uptime'] = 'Uair an chloig';

$GLOBALS["lang"]['Uptime'] = 'Uair an chloig';

$GLOBALS["lang"]['Urdu'] = 'riachtanais uisce: measartha';

$GLOBALS["lang"]['url'] = 'Urláir';

$GLOBALS["lang"]['Url'] = 'Urláir';

$GLOBALS["lang"]['Uruguay, Eastern Republic of'] = 'Uruguay, Poblacht an Oirthir';

$GLOBALS["lang"]['usb'] = 'Seirbhís do Chustaiméirí';

$GLOBALS["lang"]['Usb'] = 'Seirbhís do Chustaiméirí';

$GLOBALS["lang"]['use'] = 'Úsáid Úsáid Úsáidte';

$GLOBALS["lang"]['Use'] = 'Úsáid Úsáid Úsáidte';

$GLOBALS["lang"]['use_authentication'] = 'Úsáid Fíordheimhniú';

$GLOBALS["lang"]['Use Authentication'] = 'Úsáid Fíordheimhniú';

$GLOBALS["lang"]['use_authorisation'] = 'Úsáid Údarú';

$GLOBALS["lang"]['Use Authorisation'] = 'Úsáid Údarú';

$GLOBALS["lang"]['Use Proxy'] = 'Úsáid Proxy';

$GLOBALS["lang"]['Use SNMP'] = 'Úsáid SNMP';

$GLOBALS["lang"]['Use SSH'] = 'Úsáid SSH';

$GLOBALS["lang"]['Use Secure (LDAPS)'] = 'Úsáid Secure (LDAPS)';

$GLOBALS["lang"]['Use Service Version Detection'] = 'Úsáid Seirbhís Leagan Braiteoir';

$GLOBALS["lang"]['Use Service Version Detection. When a detected port is detected as open, if set to <i>y</i>, Nmap will query the target device in an attempt to determine the version of the service running on this port.<br>This can be useful when identifying unclassified devices. This was not previously used.'] = 'Úsáid Seirbhís Leagan Brathadh. Nuair a bhraitear calafort mar oscailt, má leagtar a <i>y</i>, Beidh Nmap cheist an gléas sprioc in iarracht a chinneadh an leagan den tseirbhís ag rith ar an gcalafort.<br/>Is féidir é seo a bheith úsáideach nuair a aithint feistí unclassified. Níor úsáideadh é seo roimhe seo.';

$GLOBALS["lang"]['Use WMI'] = 'Úsáid WMI';

$GLOBALS["lang"]['Use a <i>Sign-in method</i> of OIDC - OpenID Connect and an <i>Application Type</i> of Web Application. Click <i>Next</i>.'] = 'Úsáid a bhaint as <i>Modh Comharthaí i</i> de OIDC - OpenID Connect agus <i>Cineál iarratais</i> de Iarratais Gréasáin. Cliceáil anseo <i>Ar Aghaidh</i>.';

$GLOBALS["lang"]['Use for Authentication'] = 'Úsáid le haghaidh Fíordheimhniú';

$GLOBALS["lang"]['Use for Roles'] = 'Úsáid le haghaidh Róil';

$GLOBALS["lang"]['Use the standard install options when displayed and click the <i>I Agree</i>, <i>Next</i> and <i>Install</i> buttons to install Nmap.'] = 'Bain úsáid as na roghanna a shuiteáil caighdeánach nuair a thaispeántar agus cliceáil ar an <i>I Suim</i>, <i>Ar Aghaidh</i> agus <i>Suiteáil</i> cnaipí a shuiteáil Nmap.';

$GLOBALS["lang"]['used'] = 'Úsáidte';

$GLOBALS["lang"]['Used'] = 'Úsáidte';

$GLOBALS["lang"]['used_count'] = 'Contae Úsáidte';

$GLOBALS["lang"]['Used Count'] = 'Contae Úsáidte';

$GLOBALS["lang"]['Used by OpenLDAP only.'] = 'Úsáidte ag OpenLDAP amháin.';

$GLOBALS["lang"]['Used internally when discovering a single device.'] = 'Úsáidte go hinmheánach nuair a aimsiú gléas amháin.';

$GLOBALS["lang"]['Used internally when discovering a single device. Links to <code>devices.id</code>.'] = 'Úsáidte go hinmheánach nuair a aimsiú gléas amháin. Naisc go dtí <code>devices.id</code>.';

$GLOBALS["lang"]['Used when LDAP servers have been configured to populate a users details - this includes the Orgs to which they have access. If a user is in this LDAP group, they are assigned this org.'] = 'Úsáidte nuair a bhíonn freastalaithe LDAP cumraithe chun sonraí úsáideoirí a populate - áirítear leis seo na Orgs a bhfuil rochtain acu orthu. Má tá úsáideoir sa ghrúpa LDAP seo, tugtar an org seo dóibh.';

$GLOBALS["lang"]['Used when LDAP servers have been configured to populate a users details - this includes the Roles which they are assigned. If a user is in this LDAP group, they are assigned this role.'] = 'Úsáidte nuair a bheidh freastalaithe LDAP cumraithe a populate sonraí úsáideoirí - áirítear leis seo na Róil a bhfuil siad sannta. Má tá úsáideoir sa ghrúpa LDAP seo, tugtar an ról seo dóibh.';

$GLOBALS["lang"]['Used when searching OpenLDAP to match a users uid to a groups members. Default of <code>memberUid</code>. Used by OpenLDAP only.'] = 'Úsáidte nuair a chuardach OpenLDAP a mheaitseáil le húsáideoirí uid do bhaill grúpaí. Réamhshocrú <code>memberUid</code>. Úsáidte ag OpenLDAP amháin.';

$GLOBALS["lang"]['Used with Integrations and FirstWave monitoring applications.'] = 'Úsáidte le Integrations agus iarratais monatóireachta FirstWave.';

$GLOBALS["lang"]['Used with Integrations and FirstWave monitoring applications. Set to y if working SNMP detected by discovery.'] = 'Úsáidte le Integrations agus iarratais monatóireachta FirstWave. Socraigh go y má obair SNMP braitheadh trí fionnachtain.';

$GLOBALS["lang"]['user'] = 'Úsáideora';

$GLOBALS["lang"]['User'] = 'Úsáideora';

$GLOBALS["lang"]['User DN'] = 'Úsáideoir DN';

$GLOBALS["lang"]['user_group'] = 'Grúpa Úsáideoir';

$GLOBALS["lang"]['User Group'] = 'Grúpa Úsáideoir';

$GLOBALS["lang"]['user_id'] = 'ID úsáideora';

$GLOBALS["lang"]['User ID'] = 'ID úsáideora';

$GLOBALS["lang"]['user_interaction'] = 'Idirghníomhú úsáideora';

$GLOBALS["lang"]['User Interaction'] = 'Idirghníomhú úsáideora';

$GLOBALS["lang"]['User Membership Attribute'] = 'Úsáideoir Ballraíocht ómós';

$GLOBALS["lang"]['user_name'] = 'Ainm an úsáideora';

$GLOBALS["lang"]['User Name'] = 'Ainm an úsáideora';

$GLOBALS["lang"]['User Policies'] = 'Amharc ar gach eolas';

$GLOBALS["lang"]['Username'] = 'Ainm úsáideora';

$GLOBALS["lang"]['username'] = 'Ainm úsáideora';

$GLOBALS["lang"]['users'] = 'Úsáideoirí';

$GLOBALS["lang"]['Users'] = 'Úsáideoirí';

$GLOBALS["lang"]['Users work similar to Netstat Ports. If a user exists with a matching name, status and password details (changeable, expires, required) then the policy passes.'] = 'Oibríonn úsáideoirí cosúil le Calafoirt Netstat. Má tá úsáideoir le ainm meaitseáil, sonraí stádas agus focal faire (athrú, éagann, ag teastáil) ansin Gabhann an polasaí.';

$GLOBALS["lang"]['Users, Roles and Orgs'] = 'Úsáideoirí, Róil agus Orgs';

$GLOBALS["lang"]['Uses the CodeIgniter PHP Framework.'] = 'Úsáideann an Creat CodeIgniter PHP.';

$GLOBALS["lang"]['Using'] = 'Ag baint úsáide as';

$GLOBALS["lang"]['Using Entra for Auth'] = 'Ag baint úsáide as Entra do Auth';

$GLOBALS["lang"]['Using LDAPS'] = 'Ag úsáid LDAPS';

$GLOBALS["lang"]['Using OKTA for Auth'] = 'Ag baint úsáide as OKTA do Auth';

$GLOBALS["lang"]['Using the format option is useful when using a web browser but you wish to see the result in JSON format. Adding format=json achieves this. Normally a web browser will set its accept header to HTML, so in that case, we return the rendered page. Using an API to retrieve JSON you should set the accept header to'] = 'Ag baint úsáide as an rogha formáid úsáideach nuair a úsáid bhrabhsálaí gréasáin ach is mian leat a fheiceáil ar an toradh i bhformáid JSON. formáid bainise = json bhaint amach seo. De ghnáth beidh bhrabhsálaí gréasáin a shocrú ar a header glacadh le HTML, mar sin sa chás sin, ar ais againn ar an leathanach a rinneadh. Ag baint úsáide as API a fháil JSON ba chóir duit a leagtar ar an header glacadh le';

$GLOBALS["lang"]['Usually Mbs, from Location A.'] = 'De ghnáth Mbs, ó Suíomh A.';

$GLOBALS["lang"]['Usually Mbs, from Location B.'] = 'De ghnáth Mbs, ó Suíomh B.';

$GLOBALS["lang"]['Usually Mbs, to Location A.'] = 'De ghnáth, Mbs, go Suíomh A.';

$GLOBALS["lang"]['Usually Mbs, to Location B.'] = 'De ghnáth Mbs, go Suíomh B.';

$GLOBALS["lang"]['Usually should be set to 3.'] = 'Ba chóir, de ghnáth, a shocrú go 3.';

$GLOBALS["lang"]['Uzbekistan'] = 'riachtanais uisce: measartha';

$GLOBALS["lang"]['VLAN'] = 'Vótáil';

$GLOBALS["lang"]['VLAN ID'] = 'VLAN ID';

$GLOBALS["lang"]['valid_from'] = 'Bailí Ó';

$GLOBALS["lang"]['Valid From'] = 'Bailí Ó';

$GLOBALS["lang"]['valid_from_raw'] = 'Bailí Ó amh';

$GLOBALS["lang"]['Valid From Raw'] = 'Bailí Ó amh';

$GLOBALS["lang"]['valid_to'] = 'Bailí Chun';

$GLOBALS["lang"]['Valid To'] = 'Bailí Chun';

$GLOBALS["lang"]['valid_to_raw'] = 'Bailí a Raw';

$GLOBALS["lang"]['Valid To Raw'] = 'Bailí a Raw';

$GLOBALS["lang"]['Valid Values'] = 'Luachanna bailí';

$GLOBALS["lang"]['value'] = 'Luach';

$GLOBALS["lang"]['Value'] = 'Luach';

$GLOBALS["lang"]['Value Types'] = 'Cineálacha Luach';

$GLOBALS["lang"]['values'] = 'Luachanna';

$GLOBALS["lang"]['Values'] = 'Luachanna';

$GLOBALS["lang"]['Values: In the case of a <i>list</i> field, this should be a comma separated list of valid values.'] = 'Luachanna: I gcás <i>liosta de na liosta</i> réimse, ba chóir é seo a bheith ina liosta scartha de luachanna bailí.';

$GLOBALS["lang"]['Vanuatu'] = 'tréimhse saoil: ilbhliantúil';

$GLOBALS["lang"]['VarChar'] = 'Athraigh';

$GLOBALS["lang"]['Varchar'] = 'riachtanais uisce: measartha';

$GLOBALS["lang"]['variable'] = 'Athrógach';

$GLOBALS["lang"]['Variable'] = 'Athrógach';

$GLOBALS["lang"]['Various'] = 'Éagsúla Éagsúla';

$GLOBALS["lang"]['vendor'] = 'Seirbhís do Chustaiméirí';

$GLOBALS["lang"]['Vendor'] = 'Seirbhís do Chustaiméirí';

$GLOBALS["lang"]['Vendor Report'] = 'Clár na dToghthóirí';

$GLOBALS["lang"]['vendors'] = 'Seirbhís do Chustaiméirí';

$GLOBALS["lang"]['Vendors'] = 'Seirbhís do Chustaiméirí';

$GLOBALS["lang"]['Venezuela'] = 'taiseachas aeir: fliuch';

$GLOBALS["lang"]['Version'] = 'Leagan Gaeilge';

$GLOBALS["lang"]['version_padded'] = 'Leagan Padded';

$GLOBALS["lang"]['Version Padded'] = 'Leagan Padded';

$GLOBALS["lang"]['version_raw'] = 'Leagan Raw';

$GLOBALS["lang"]['Version Raw'] = 'Leagan Raw';

$GLOBALS["lang"]['version_string'] = 'Leagan Amach';

$GLOBALS["lang"]['Version String'] = 'Leagan Amach';

$GLOBALS["lang"]['video'] = 'Físeán i caighdeán maith';

$GLOBALS["lang"]['Video'] = 'Físeán i caighdeán maith';

$GLOBALS["lang"]['Vietnam'] = 'Vítneam';

$GLOBALS["lang"]['Vietnamese'] = 'Vítneaimis Víneaimis';

$GLOBALS["lang"]['View'] = 'Féach ar an roghchlár';

$GLOBALS["lang"]['View All'] = 'Féach ar gach';

$GLOBALS["lang"]['View Details'] = 'Féach ar na sonraí';

$GLOBALS["lang"]['View Device'] = 'Féach ar an Gléas';

$GLOBALS["lang"]['View Discovery'] = 'Féach ar Discovery';

$GLOBALS["lang"]['View Policy'] = 'Féach ar an bpolasaí';

$GLOBALS["lang"]['View Racks'] = 'Féach ar Raic';

$GLOBALS["lang"]['View the'] = 'Féach ar an';

$GLOBALS["lang"]['View the discovery in question, then click the Support button in the top right toolbar. This will provide the discovery settings, config items, the discovery device list as well as the logs for this particular discovery.'] = 'Féach ar an bhfionnachtain atá i gceist, cliceáil ar an gcnaipe Tacaíochta sa bharra uirlisí ceart. Cuirfidh sé seo na socruithe fionnachtain, míreanna config, an liosta gléas fionnachtain chomh maith leis na logaí don fhionnachtain áirithe seo.';

$GLOBALS["lang"]['View the release notes on the'] = 'Féach ar na nótaí scaoilte ar an';

$GLOBALS["lang"]['Virtual Private Network'] = 'Líonra Virtual Príobháideacha';

$GLOBALS["lang"]['Virtual private network'] = 'Líonra príobháideach fíorúil';

$GLOBALS["lang"]['Virtualisation'] = 'Fíordheimhniú';

$GLOBALS["lang"]['Visit our YouTube channel for instructional videos.'] = 'Tabhair cuairt ar ár gcainéal YouTube le haghaidh físeáin teagaisc.';

$GLOBALS["lang"]['vlan'] = 'riachtanais uisce: measartha';

$GLOBALS["lang"]['Vlan'] = 'riachtanais uisce: measartha';

$GLOBALS["lang"]['vlan_id'] = 'Vlan ID';

$GLOBALS["lang"]['Vlan ID'] = 'Vlan ID';

$GLOBALS["lang"]['vm'] = 'VAM';

$GLOBALS["lang"]['Vm'] = 'VAM';

$GLOBALS["lang"]['vm_device_id'] = 'ID Gléas Vm';

$GLOBALS["lang"]['Vm Device ID'] = 'ID Gléas Vm';

$GLOBALS["lang"]['vm_group'] = 'Grúpa Vam';

$GLOBALS["lang"]['Vm Group'] = 'Grúpa Vam';

$GLOBALS["lang"]['vm_ident'] = 'Vm aitheantais';

$GLOBALS["lang"]['Vm Ident'] = 'Vm aitheantais';

$GLOBALS["lang"]['vm_server_name'] = 'Ainm Freastalaí Vm';

$GLOBALS["lang"]['Vm Server Name'] = 'Ainm Freastalaí Vm';

$GLOBALS["lang"]['vm_vendor'] = 'Seirbhís do Chustaiméirí';

$GLOBALS["lang"]['Vm Vendor'] = 'Seirbhís do Chustaiméirí';

$GLOBALS["lang"]['vuln_status'] = 'Stádas Vuling';

$GLOBALS["lang"]['Vuln Status'] = 'Stádas Vuling';

$GLOBALS["lang"]['vulnerabilities'] = 'Dliteanais';

$GLOBALS["lang"]['Vulnerabilities'] = 'Dliteanais';

$GLOBALS["lang"]['vulnerabilities_cache'] = 'Vulnerability Cache';

$GLOBALS["lang"]['Vulnerabilities Cache'] = 'Vulnerability Cache';

$GLOBALS["lang"]['Vulnerabilities and Results'] = 'Vulnerability agus Torthaí';

$GLOBALS["lang"]['Vulnerabilities initially published before 1st January, 2025 (by default). We see no sense in returning vulnerabilities from years prior. This can be changed in the configuration.'] = 'Leochaileachtaí a foilsíodh ar dtús roimh 1 Eanáir, 2025 (de réir réamhshocraithe). Feicimid aon chiall i leochaileachtaí filleadh ó bhlianta roimh ré. Is féidir é seo a athrú sa chumraíocht.';

$GLOBALS["lang"]['vulnerability_id'] = 'Vulnerability ID';

$GLOBALS["lang"]['Vulnerability ID'] = 'Vulnerability ID';

$GLOBALS["lang"]['Vulnerability Status'] = 'Stádas inmharthanachta';

$GLOBALS["lang"]['WARNING - When creating a baseline using software policies, at present Centos and RedHat package the kernel using the names <i>kernel</i> and <i>kernel-devel</i>. There can be multiple packages with this name and different versions concurrently installed. Debian based distributions use names like <i>linux-image-3.13.0-24-generic</i>, note the version number is included in the package name. Because RedHat based operating systems use this format and subsequently have multiple identical package names with different versions we currently exclude <i>kernel</i> and <i>kernel-devel</i> from software policies. This may be addressed in a future update.'] = 'WARNING - Nuair a chruthú bunlíne ag baint úsáide as polasaithe bogearraí, faoi láthair Centos agus RedHat pacáiste an eithne ag baint úsáide as na hainmneacha <i>eithneoireacht</i> agus <i>eithne-devel</i>. Is féidir go mbeadh pacáistí il leis an ainm seo agus leaganacha éagsúla suiteáilte i gcomhthráth. dáiltí bunaithe Debian úsáid ainmneacha cosúil le <i>cliceáil grianghraf a mhéadú</i>, tabhair faoi deara go bhfuil an uimhir leagan san áireamh in ainm an phacáiste. Toisc go n-úsáideann córais oibriúcháin atá bunaithe ar RedHat an fhormáid seo agus ina dhiaidh sin tá ainmneacha pacáiste il comhionann le leaganacha éagsúla againn faoi láthair eisiamh <i>eithneoireacht</i> agus <i>eithne-devel</i> ó bheartais bogearraí. Féadfar é seo a dhíriú i nuashonrú sa todhchaí.';

$GLOBALS["lang"]['WHERE'] = 'CÚRSAÍ';

$GLOBALS["lang"]['WMI Credentials Requirements'] = 'WMI Credentials Riachtanais';

$GLOBALS["lang"]['Wait for it to complete, then paste in this next line to install the Agent.'] = 'Fan chun é a chur i gcrích, greamaigh ansin sa chéad líne eile a shuiteáil ar an Gníomhaire.';

$GLOBALS["lang"]['wall_port'] = 'Port na Gréine';

$GLOBALS["lang"]['Wall Port'] = 'Port na Gréine';

$GLOBALS["lang"]['Wallis and Futuna'] = 'Wallis agus Futuna';

$GLOBALS["lang"]['Want to know more?'] = 'Want a fhios níos mó?';

$GLOBALS["lang"]['Warning'] = 'Ag dul i ngleic';

$GLOBALS["lang"]['warranty'] = 'Barántas';

$GLOBALS["lang"]['Warranty'] = 'Barántas';

$GLOBALS["lang"]['warranty_duration'] = 'Barántas Fad';

$GLOBALS["lang"]['Warranty Duration'] = 'Barántas Fad';

$GLOBALS["lang"]['warranty_expires'] = 'Barántas Expires';

$GLOBALS["lang"]['Warranty Expires'] = 'Barántas Expires';

$GLOBALS["lang"]['warranty_status'] = 'Stádas bharántas';

$GLOBALS["lang"]['Warranty Status'] = 'Stádas bharántas';

$GLOBALS["lang"]['warranty_type'] = 'Cineál bharántas';

$GLOBALS["lang"]['Warranty Type'] = 'Cineál bharántas';

$GLOBALS["lang"]['We also have an option to Ping Before Scan (important for routers with long lived ARP caches). This is usually a good idea.'] = 'Tá rogha againn freisin Ping Roimh Scan (tábhachtach do ródairí a bhfuil coinní ARP ina gcónaí fada). Is smaoineamh maith é seo de ghnáth.';

$GLOBALS["lang"]['We also have our action items (which are executed in the order below):'] = 'Tá ár n-ítimí gníomhaíochta (a fhorghníomhú san ord thíos):';

$GLOBALS["lang"]['We are often asked this question and the answer most definitely is <i>it depends</i>. It depends on the number of IPs to be scanned, the network connection speed, the speed of the devices being scanned, the type of devices being scanned, the number of different credentials being tested and the speed of the Open-AudIT server. We do not have a calculator that would allow us to input those variables and return a value. It is simply too complex. Generally I limit my discoveries to 256 IP addresses - ie, a /24 subnet. We have had customers scan /16 subnets (65k addresses) and it does work - but it can take a long time. You are much better off scanning in /24 blocks. If you simply do not know what your address ranges are, then this is a good case for a Seed discovery.'] = 'Táimid ag iarraidh go minic an cheist seo agus an freagra is cinnte <i>braitheann sé</i>. Braitheann sé ar líon na IPanna a scanadh, an luas nasc líonra, an luas na feistí á scanadh, an cineál feistí á scanadh, an líon na dintiúir éagsúla á thástáil agus an luas an fhreastalaí Open-AudIT. Ní chuirimid bhfuil áireamhán a bheadh ar ár gcumas a ionchur na hathróga agus ar ais luach. Tá sé ach ró-chasta. Go ginearálta teorainn mé mo fionnachtana a 256 seoltaí IP - ie, a / 24 subnet. Tá custaiméirí scanadh / 16 subnets (seolta 65k) agus a dhéanann sé ag obair - ach is féidir é a ghlacadh i bhfad. Tá tú i bhfad níos fearr as scanadh i / 24 bloic. Más rud é nach bhfuil a fhios agat ach cad iad na raonta do sheoladh, is cás maith é seo le haghaidh fionnachtain Seed.';

$GLOBALS["lang"]['We have more detailed instructions on'] = 'Tá treoracha níos mionsonraithe againn maidir le';

$GLOBALS["lang"]['We have tests for:'] = 'Tá tástálacha le haghaidh:';

$GLOBALS["lang"]['We hope you find Open-AudIT as useful as we do.'] = 'Tá súil againn go bhfaighidh tú Open-AudIT mar úsáideach mar a dhéanaimid.';

$GLOBALS["lang"]['We initially setup the default list of scripts with the default options. The list of script is viewable at /scripts. These default scripts cannot be deleted. You can create additional scripts for use by you as required. Your script will be based on one of the existing scripts and have custom options applied. The scripts can then be downloaded from the list page at menu: Discover -> Audit Scripts -> List Audit Scripts.'] = 'Táimid thus ar dtús ar an liosta réamhshocraithe de scripteanna leis na roghanna réamhshocraithe. Is é an liosta de script viewable ag / scripteanna. Ní féidir na scripteanna réamhshocraithe a scriosadh. Is féidir leat a chruthú scripteanna breise le húsáid ag tú mar is gá. Beidh do script a bheith bunaithe ar cheann de na scripteanna atá ann cheana agus tá roghanna saincheaptha i bhfeidhm. Is féidir na scripteanna a íoslódáil ansin ón leathanach liosta ag an roghchlár: Discover - ^ Scripteanna Iniúchóireachta - × Liosta Scripteanna Iniúchta.';

$GLOBALS["lang"]['We need some credentials to be able to effectively talk to the devices on your network.'] = 'Ní mór dúinn roinnt dintiúir a bheith in ann labhairt go héifeachtach leis na feistí ar do líonra.';

$GLOBALS["lang"]['We only send the minimum amount of data and nothing of a sensitive nature. We send our license data (name, type, etc), our application data (name, version, platform, timezone, etc), any logged errors, a count of device types and a count of the features used. <i>Any</i> environment has devices and that is the only piece of your data we send. And only the type of device and a count. Not the manufacturer, not the model. We send nothing special. No networks. No IP addresses. No OS versions. No software names. The UUID and Server fields are sha256 encoded (so we do not know the value). We send just the data we need to improve the product. We hope you see the benefit to all of us with this information. It will provide us guided direction on where to focus improvements and new features in the product.'] = 'Cuirimid ach an méid íosta sonraí agus aon rud de chineál íogair. Cuirimid ár sonraí ceadúnais (ainm, cineál, srl), ár sonraí iarratais (ainm, leagan, ardán, crios ama, etc), aon earráidí logáilte, comhaireamh de chineálacha feistí agus comhaireamh na gnéithe a úsáidtear. <i>Aon duine</i> Tá an timpeallacht feistí agus go bhfuil an píosa amháin de do shonraí a sheolann muid. Agus ach an cineál feiste agus comhaireamh. Gan an monaróir, ní an tsamhail. Cuirimid rud ar bith speisialta. Uimh líonraí. Uimh seoltaí IP. Uimh leaganacha OS. Uimh ainmneacha bogearraí. Is iad na réimsí UUID agus Freastalaí sha256 ionchódaithe (mar sin níl a fhios againn an luach). Cuirimid ach na sonraí is gá dúinn chun feabhas a chur ar an táirge. Tá súil againn go bhfeiceann tú an sochar do gach duine againn leis an eolas seo. Cuirfidh sé treoir treoraithe ar fáil dúinn maidir le feabhsuithe agus gnéithe nua sa táirge a dhíriú.';

$GLOBALS["lang"]['We tend to use the Google Chrome extension called Postman for testing actual restful queries. You might like to install and test with that.'] = 'Is iondúil go n-úsáideann muid an síneadh Google Chrome ar a dtugtar Postman chun ceisteanna sosa iarbhír a thástáil. D\'fhéadfá buíochas a shuiteáil agus a thástáil leis sin.';

$GLOBALS["lang"]['Web'] = 'Láithreán Gréasáin';

$GLOBALS["lang"]['Web Application Routes'] = 'Bealaí Iarratais Gréasáin';

$GLOBALS["lang"]['Web Server Discovery'] = 'Web Server Discovery';

$GLOBALS["lang"]['Webserver'] = 'Láithreán Gréasáin';

$GLOBALS["lang"]['Website'] = 'Láithreán Gréasáin';

$GLOBALS["lang"]['Wednesday'] = 'Dé Céadaoin';

$GLOBALS["lang"]['weight'] = 'Meáchan Meáchan';

$GLOBALS["lang"]['Weight'] = 'Meáchan Meáchan';

$GLOBALS["lang"]['weight_current'] = 'Meáchan Reatha';

$GLOBALS["lang"]['Weight Current'] = 'Meáchan Reatha';

$GLOBALS["lang"]['weight_empty'] = 'Meáchan Folamh';

$GLOBALS["lang"]['Weight Empty'] = 'Meáchan Folamh';

$GLOBALS["lang"]['weight_max'] = 'Meáchan Max';

$GLOBALS["lang"]['Weight Max'] = 'Meáchan Max';

$GLOBALS["lang"]['Welcome'] = 'Fáilte roimh chách';

$GLOBALS["lang"]['Welcome Dashboard'] = 'Déan teagmháil linn';

$GLOBALS["lang"]['Welcome to'] = 'Fáilte go dtí';

$GLOBALS["lang"]['Western Sahara'] = 'Sahára an Iarthair';

$GLOBALS["lang"]['What Can I Expect if I Have no Credentials'] = 'Cad is féidir liom a bheith ag súil má tá mé aon Dintiúir';

$GLOBALS["lang"]['What about fields that I want from NMIS that are not in Open-AudIT? We have got you covered. Any fields in the external system (NMIS) that do not exist in Open-AudIT will be automatically created as Open-AudIT Custom fields.'] = 'Cad faoi réimsí gur mian liom ó NMIS nach bhfuil i Open-AudIT? Táimid tar éis a fuair tú clúdaithe. Beidh aon réimsí sa chóras seachtrach (NMIS) nach bhfuil ann i Open-AudIT a chruthú go huathoibríoch mar Oscailte-AudIT réimsí an Chustaim.';

$GLOBALS["lang"]['What about other network devices? Think switches, routers, printers, etc. Obviously, it is best if you can provide some SNMP credentials for these devices. They only need <i>read-only</i> access. But if you do not want to do even that, there is nothing stopping you from running discovery, finding the devices, and making a rule or two to identify them (maybe use MAC Address prefix in combination with open ports, for example). You wont have much information, but you will know they are on the network, what they are, and when the last time they were seen was. You will also see if anything new appears on the network.'] = 'Cad faoi feistí líonra eile? Smaoinigh ar lasca, ródairí, printéirí, etc. Ar ndóigh, tá sé is fearr más féidir leat a chur ar fáil roinnt dintiúir SNMP do na feistí. Ní gá dóibh ach <i>léamh amháin</i> rochtain. Ach más rud é nach bhfuil tú ag iarraidh a dhéanamh fiú go, níl aon rud ag stopadh tú ó fhionnachtain a reáchtáil, aimsiú na feistí, agus riail nó dhó a dhéanamh chun iad a aithint (b\'fhéidir úsáid a bhaint as MAC Seoladh réimír i gcomhar le calafoirt oscailte, mar shampla). Ní bheidh ort eolas i bhfad, ach beidh a fhios agat go bhfuil siad ar an líonra, cad tá siad, agus nuair a bhí an uair dheireanach a bhí siad le feiceáil. Feicfidh tú freisin má tá aon rud nua le feiceáil ar an líonra.';

$GLOBALS["lang"]['What do we send?'] = 'Cad a dhéanaimid a sheoladh?';

$GLOBALS["lang"]['What does this actually mean to you?'] = 'Cad a chiallaíonn sé seo i ndáiríre a thabhairt duit?';

$GLOBALS["lang"]['What is the purpose of this rack.'] = 'Cad é cuspóir an raca seo.';

$GLOBALS["lang"]['What is the type of this location. Allowable types held in <code>attributes</code> table.'] = 'Cad é an cineál suíomh seo. Cineálacha incheadaithe ar siúl <code>attributes</code> tábla.';

$GLOBALS["lang"]['When Open-AudIT on Linux discovers a Windows machine, in order to execute a remote command we use'] = 'Nuair a fhaigheann Open-AudIT ar Linux meaisín Windows, d\'fhonn ordú iargúlta a úsáid againn a fhorghníomhú';

$GLOBALS["lang"]['When Open-AudIT on Windows discovers a Windows machine, in order to execute a remote command we use'] = 'Nuair a Open-AudIT ar Windows discovers meaisín Windows, d\'fhonn a fhorghníomhú ordú iargúlta a úsáid againn';

$GLOBALS["lang"]['When Open-AudIT receives data about a device, either by discovering the device during an audit run or by the user importing the device, it must determine if this discovered device matches a device that already exists within its database, or if it is a new device that should be added. Open-AudIT uses a series of twelve property matches to determine this. The Match Rules work as OR comparisons, not AND. This means the first rule that matches a field in the discovered device to one in the dB resolves as an existing device. All Matching Rules have to fail in order for a device to be new and result in a new record being created.'] = 'Nuair a Oscailte-Aud Faigheann TF sonraí faoi fheiste, trí fhionnadh a dhéanamh ar an bhfeiste le linn reáchtáil iniúchóireachta nó ag an úsáideoir a iompórtálann an fheiste, ní mór dó a chinneadh an oireann an gléas aimsithe seo gléas atá ann cheana féin laistigh dá bhunachar sonraí, nó más feiste nua é ba cheart a chur leis. Úsáideann Open-AudIT sraith de dhá chluiche maoine chun é seo a chinneadh. Oibríonn na Rialacha Match mar chomparáidí NÓ, ní AGUS. Ciallaíonn sé seo an chéad riail a oireann réimse sa gléas amach go ceann amháin sa dB réiteach mar gléas atá ann cheana. Ní mór do gach Rialacha Meaitseála teip a dhéanamh d\'fhonn gléas a bheith nua agus mar thoradh air sin tá taifead nua á chruthú.';

$GLOBALS["lang"]['When POSTing data, you must include an access token. An access token is generated with every request type, so make a GET (for example) and Accept: application/json, parse the response for meta→access_token, and include that with your request. This should be placed in the field data[access_token], IE, the top level.'] = 'Nuair a shonraí POSTing, ní mór duit a chur san áireamh le chomhartha rochtana. Tá comhartha rochtana a ghintear le gach cineál iarratais, mar sin a dhéanamh GET (mar shampla) agus Glac: iarratas / json, parse an freagra le haghaidh metaaccess_token, agus tá sé sin le d\'iarratas. Ba cheart é sin a chur sna sonraí réimse[access_token], IE, an leibhéal is airde.';

$GLOBALS["lang"]['When a device is Discovered the audit script will be injected with the file (or directory) details. Both audit_linux.sh and audit_windows.vbs will be populated, regardless of the file path. If you are thinking <i>but putting a Linux path into a Windows machine will break things!</i>, it wont break, you just wont receive any data from that file or directory entry.<br>Retrieved details will be stored in the <i>file</i> database table and are stored like any other attribute. File details will be stored as any other attribute and generate alerts if any of the following attributes change - <i>full_name</i>, <i>hash</i>, <i>inode</i>, <i>last_changed</i>. The table contain a system_id, first_seen, last_seen and current columns as well as the file details.<br>Attributes recorded are:<br><ul><li>Windows - name, size, directory, SHA1 hash (of the file contents), last changed, permissions, owner, version (file permitting).</li><br><li>Linux - name, size, directory, SHA1 hash (of the file contents), last changed, meta data last changed, permissions, owner, group, inode.</li></ul>You will see a section in both the Windows and Linux audit scripts as below'] = 'Nuair a gléas Discovered beidh an script iniúchóireachta a instealladh leis an comhad (nó eolaire) sonraí. Beidh an dá iniúchóireacht_linux.sh agus iniúchadh_windows.vbs a daonra, beag beann ar an cosán comhad. Má tá tú ag smaoineamh <i>ach beidh a chur cosán Linux isteach i meaisín Windows rudaí a bhriseadh!</i>, wont sé sos, gheobhaidh tú ach aon sonraí ón gcomhad nó iontráil eolaire.<br/>Déanfar sonraí a aisghabháil a stóráil sa <i>comhad comhad</i> tábla bunachar sonraí agus a stóráil mar aon tréith eile. Déanfar sonraí comhaid a stóráil mar aon tréith eile agus foláirimh a ghiniúint má athraíonn aon cheann de na tréithe seo a leanas - <i>iomlán</i>, <i>Tá sé</i>, <i>india</i>, <i>an t-am deireanach</i>. Tá an tábla a system_id, first_seen, colúin last_seen agus reatha chomh maith leis na sonraí comhad.<br/>Tá tréithe a taifeadadh:<br/><ul><li>Windows - ainm, méid, eolaire, SHA1 hash (an t-ábhar comhaid), athraigh seo caite, ceadanna, úinéir, leagan (comhad a cheadú).</li><br/><li>Linux - ainm, méid, eolaire, SHA1 hash (an t-ábhar comhaid), athraigh seo caite, sonraí meta athraigh seo caite, ceadanna, úinéir, grúpa, inode.</li></ul>Feicfidh tú alt i scripteanna iniúchta Windows agus Linux araon mar atá thíos';

$GLOBALS["lang"]['When a discovery is run, the relevant discovery scan option is chosen and those settings are used by Nmap to scan the target devices.  The scan options determine which ports nmap scans, how fast they scan and whether or not nmap ping is first used to determine if the IP is live or not.'] = 'Nuair a bhíonn fionnachtain á reáchtáil, roghnaítear an rogha scanadh fionnachtana ábhartha agus úsáidtear na socruithe sin ag Nmap chun na feistí sprioc a scanadh. Cinneann na roghanna scanadh a scanann calafoirt nmap, cé chomh tapa a scanadh siad agus cibé an bhfuil nó nach bhfuil ping nmap úsáidtear den chéad uair chun a chinneadh an bhfuil an IP beo nó nach bhfuil.';

$GLOBALS["lang"]['When a discovery is run, the relevant discovery scan option is chosen and those settings used by Nmap to scan the target devices. If no option set is chosen, the default configuration item (discovery_default_scan_option) is selected and used. Open-AudIT Community will use the default options as per the configuration for all discoveries.'] = 'Nuair a bhíonn fionnachtain á reáchtáil, roghnaítear an rogha scanadh fionnachtana ábhartha agus na socruithe sin a úsáideann Nmap chun na feistí sprioc a scanadh. Má tá aon rogha a leagtar roghnaithe, an mhír chumraíocht réamhshocraithe (discovery_default_scan_option) a roghnú agus a úsáid. Beidh Oscailte-AudIT Pobail a bhaint as na roghanna réamhshocraithe de réir an chumraíocht do gach fionnachtana.';

$GLOBALS["lang"]['When a subnet discovery is executed it first runs, if selected, an Nmap ping scan on the range or IP addresses. Any device responding will be port scanned. If an Nmap ping scan is not requested, each IP is individually port scanned. Which ports? That is determined by the'] = 'Nuair a bhíonn fionnachtain subnet fhorghníomhú ritheann sé ar dtús, más rud é roghnaithe, scanadh ping Nmap ar an raon nó seoltaí IP. Beidh aon fheiste a fhreagairt a scanadh port. Más rud é nach bhfuil scanadh ping Nmap iarr, tá gach IP scanadh port ina n-aonar. Cén calafoirt? Is é sin a chinnfidh an';

$GLOBALS["lang"]['When auditing a Linux device via SSH, some Linux distributions do not allow sudo commands to be passed without a TTY (which we are doing). To completely audit one of these linux distributions it is best to supply the root user credentials. If no root is supplied and sudo without a TTY is not possible, the audit script will be run but will not contain the amount of data as would otherwise. Subsequent audits using root (or run locally using sudo) will therefore provide extra details about the system and generate several <i>changes</i>.'] = 'Nuair a iniúchadh gléas Linux via SSH, Ní roinnt dáiltí Linux cead orduithe sudo a rith gan TTY (a bhfuil muid ag déanamh). Chun iniúchadh a dhéanamh go hiomlán ar cheann de na dáiltí linux is fearr na dintiúir úsáideora fréimhe a sholáthar. Más rud é nach bhfuil aon fhréamh ar fáil agus sudo gan TTY indéanta, beidh an script iniúchóireachta ar siúl ach ní bheidh an méid sonraí a bheadh murach sin. Dá bhrí sin, beidh iniúchtaí ina dhiaidh sin ag baint úsáide as fréamh (nó a reáchtáil go háitiúil ag baint úsáide as sudo) sonraí breise a sholáthar faoin gcóras agus roinnt a ghiniúint <i>athruithe ar athruithe</i>.';

$GLOBALS["lang"]['When combining devices, which system is the authoritative source for information.'] = 'Nuair a chéile feistí, a bhfuil córas an fhoinse údarásach le haghaidh faisnéise.';

$GLOBALS["lang"]['When complete, close the command window and you are done!'] = 'Nuair a chomhlánú, dhúnadh an fhuinneog ordú agus tú ag déanamh!';

$GLOBALS["lang"]['When creating a widget, if you select the <i>Advanced</i> button you will have the ability to upload your own custom SQL.'] = 'Nuair a chruthú ghiuirléid, má roghnaíonn tú an <i>bláthanna cumhra: cumhráin</i> cnaipe beidh ort an cumas a uaslódáil do SQL saincheaptha féin.';

$GLOBALS["lang"]['When integrating devices from the external system, if the device doesnt exist in Open-AudIT should we create it?'] = 'Nuair a chomhtháthú feistí ón gcóras seachtrach, más rud é nach bhfuil an gléas ann i Open-AudIT ba chóir dúinn é a chruthú?';

$GLOBALS["lang"]['When integrating devices from the external system, if the device has been updated in the external system should we update it in Open-AudIT?'] = 'Nuair a bheidh feistí a chomhtháthú ón gcóras seachtrach, má tá an gléas tugtha cothrom le dáta sa chóras seachtrach ba cheart dúinn é a thabhairt cothrom le dáta i Open-AudIT?';

$GLOBALS["lang"]['When investigating a Discovery, support will request the Exported Discovery Logs. To retrieve these, go to menu -> Discoveries ->'] = 'Nuair a bheidh imscrúdú Discovery, beidh tacaíocht a iarraidh ar an Easpórtálacha Discovery. Chun iad seo a aisghabháil, téigh go dtí roghchlár - ^ Fionnachtana - uaire';

$GLOBALS["lang"]['When matching a Linux based device, we prefer to use the Dbus id concatenated with the hostname. We can also use other options as per the below table, but we can retrieve the Dbus ID without root. To retrieve the UUID (from the motherboard), we need to run dmidecode, which does require root. Unfortunately, when you clone an ESXi guest, the Dbus ID does not get recreated - hence our concatenating this with the hostname. There is a good article linked here that details the <i>why</i> of hardware IDs.'] = 'Nuair a mheaitseáil gléas bunaithe ar Linux, is fearr linn an Dbus a úsáid id concatenated leis an hostname. Is féidir linn a úsáid freisin roghanna eile de réir an tábla thíos, ach is féidir linn a fháil ar an ID Dbus gan fhréamh. A fháil ar an UUID (ón motherboard), ní mór dúinn a reáchtáil dmidecode, a dhéanann gá fréimhe. Ar an drochuair, nuair a chlone tú aoi ESXi, ní dhéanann an ID Dbus a fháil recreated - dá bhrí sin, ár concatenating seo leis an hostname. Tá alt maith nasctha anseo go sonraíonn na <i>cén fáth</i> de IDs crua-earraí.';

$GLOBALS["lang"]['When requesting JSON, by default no limit is set. When requesting screen display, the limit is set to 1000 by default. This can be changed in the configuration. See the <i>page_size</i> item'] = 'Nuair a iarraidh JSON, de réir réamhshocraithe níl aon teorainn leagtha. Nuair a iarraidh taispeáint scáileán, tá an teorainn leagtha go 1000 de réir réamhshocraithe. Is féidir é seo a athrú sa chumraíocht. Féach an <i>leathanach_size</i> mír bronntanas';

$GLOBALS["lang"]['When retrieve an external device, should we run discovery upon it?'] = 'Nuair a aisghabháil gléas seachtrach, ba chóir dúinn a reáchtáil fionnachtana ar sé?';

$GLOBALS["lang"]['When running Open-AudIT on Windows the Apache service account must be that of a <i>regular</i> user (or the Administrator). This is because the <i>Local System</i> account normally used to run Apache has no access to any network resources. IE - We cannot use Apache when running as the Local System account account to copy the audit script to Windows PCs.'] = 'Nuair a reáchtáil Open-AudIT ar Windows ní mór an cuntas seirbhíse Apache a bheith sin de <i>rialta</i> úsáideoir (nó an Riarthóir). Níl an Tweet seo ar fáil <i>Plean Gníomhaíochta don Oideachas</i> Tá cuntas a úsáidtear de ghnáth a reáchtáil Apache aon rochtain ar aon acmhainní líonra. IE - Ní féidir linn Apache a úsáid nuair a bhíonn siad ag rith mar chuntas an Chórais Áitiúil chun an script iniúchóireachta a chóipeáil chuig ríomhairí pearsanta Windows.';

$GLOBALS["lang"]['When the configuration option is set, we take this into account for devices for a certain defined subset of match rules where the configuration item has been enabled. These rules are:'] = 'Nuair a bhíonn an rogha cumraíochta leagtha, cuirimid san áireamh seo le haghaidh feistí le haghaidh fo-thacar sainithe áirithe de rialacha meaitseála ina bhfuil an mhír chumraíochta curtha ar chumas. Is iad na rialacha seo:';

$GLOBALS["lang"]['When the rules run in discovery, any matching rules will appear in the discovery log. See below for an example.'] = 'Nuair a bheidh na rialacha a reáchtáil i bhfionnachtain, beidh aon rialacha meaitseáil le feiceáil sa logáil fionnachtana. Féach thíos mar shampla.';

$GLOBALS["lang"]['When this benchmark is scheduled to be executed. Derived from the associated <code>tasks.type</code> and <code>tasks.sub_resource_id</code>.'] = 'Nuair a bheidh sé beartaithe an tagarmharc seo a fhorghníomhú. Díorthaithe ón gcomhlachas <code>tasks.type</code> agus <code>tasks.sub_resource_id</code>.';

$GLOBALS["lang"]['When this log was created.'] = 'Nuair a cruthaíodh an logáil.';

$GLOBALS["lang"]['When this queue item started processing.'] = 'Nuair a thosaigh an mhír scuaine a phróiseáil.';

$GLOBALS["lang"]['When using Open-AudIT Professional or Enterprise, widgets are available and customisable to be displayed on Dashboards.'] = 'Nuair a úsáid Open-AudIT Gairmiúla nó Fiontraíocht, Tá giuirléidí ar fáil agus customisable a chur ar taispeáint ar Dashboards.';

$GLOBALS["lang"]['When we are converting an internally selected device to an object for the external system, what should the external data be. EG: integer, string, etc.'] = 'Nuair a bhíonn gléas roghnaithe go hinmheánach á thiontú go rud don chóras seachtrach, cad ba cheart do na sonraí seachtracha a bheith. EG: slánuimhir, teaghrán, etc.';

$GLOBALS["lang"]['When we execute this baseline, should we check for items on devices that are not in a policy for this baseline.'] = 'Nuair a fhorghníomhú muid an bonnlíne, ba chóir dúinn a sheiceáil le haghaidh míreanna ar feistí nach bhfuil i bpolasaí don bunlíne.';

$GLOBALS["lang"]['When we receive an open port, should we attempt to test for the version of the service currently running upon it? This assists in confirming actual running services.'] = 'Nuair a fhaighimid calafort oscailte, ba cheart dúinn iarracht a dhéanamh tástáil a dhéanamh ar leagan na seirbhíse atá á reáchtáil faoi láthair air? Cabhraíonn sé seo le seirbhísí reatha iarbhír a dheimhniú.';

$GLOBALS["lang"]['When you are using Clouds to discover your Amazon AWS instances, you will need two credential items - key and secret key. Your key should already be known to you and your secret key as well. Of note is that you cannot retrieve your secret key using the AWS Console provided by Amazon. If you have misplaced it, you will need to generate a new one.'] = 'Nuair a bheidh tú ag baint úsáide as Clouds a fháil amach do cásanna Amazon AWS, beidh ort dhá míreanna dintiúir - eochair agus eochair rúnda. Ba chóir do eochair a bheith ar eolas agat cheana féin agus do eochair rúnda chomh maith. Tá nóta nach féidir leat a fháil do eochair rúnda ag baint úsáide as an Console AWS ar fáil ag Amazon. Má tá tú misplaced é, beidh ort a ghiniúint ceann nua.';

$GLOBALS["lang"]['When you are using Clouds to discover your Microsoft Azure instances, you will need four credential items - subscription id, tenant id, client id and client secret.'] = 'Nuair a bhíonn tú ag baint úsáide as Clouds a fháil amach do cásanna Microsoft Azure, beidh ort ceithre míreanna dintiúir - síntiús id, tionónta id, cliant agus rún cliant.';

$GLOBALS["lang"]['When you create a discovery you have an option to devices_assigned_to_org. This means that any devices discovered for this discovery will be assigned (have <code>devices.org_id</code> set to) your chosen Organisation.'] = 'Nuair a chruthú duit fionnachtain bhfuil tú rogha chun feistí_assigned_to_org. Ciallaíonn sé seo go mbeidh aon feistí amach le haghaidh an fionnachtain a shannadh (tá <code>devices.org_id</code> a leagtar chuig) d’eagraíocht roghnaithe.';

$GLOBALS["lang"]['When you create a new discovery if you click the Advanced button, you have many more options to change, one of them being the type of discovery.Types have always been Subnet (encompassing the above range, subnet, ip options) and Active Directory. As at v4.1, Open-AudIT has a new discovery type called Seed.'] = 'Nuair a chruthú duit fionnachtain nua má tá tú cliceáil ar an gcnaipe Casta, tá tú go leor roghanna níos mó a athrú, ar cheann acu a bheith ar an gcineál fionnachtana. Cineálacha a bheith i gcónaí Subnet (a sheachaint ar an raon thuas, subnet, roghanna ip) agus Eolaire Gníomhach. Mar ag v4.1, Open-AudIT Tá cineál fionnachtana nua ar a dtugtar Seed.';

$GLOBALS["lang"]['When you enable a Query to be run on a schedule, the query is emailed to your chosen address. You must have set up email via menu -> Admin -> Enterprise -> Email Config. We also have a <i>test email<i> button on that page. Input your details, save it and then test it. You should have a modal box that informs you if it successful or not and obviously a test email should arrive if it is successful. Once you have email configured, your scheduled query can be configured.<br><br>Provide a name, optional description, choose <i>Query</i> type, select the desired query, provide an email address, choose a format and set the schedule.<br><br>Provide an hour (hour only, no minutes as yet), give the task a name (this is not the name of the actual scheduled query itself), select which days you would like the query run, choose which query you would like run, supply an email address and choose a query format and you are done.<br>Queries will be sent with an email body of the query (in html format) and the query attached in the requested format.'] = 'Nuair a chuireann tú ar chumas Query a reáchtáil ar sceideal, tá an cheist ríomhphost chuig do sheoladh roghnaithe. Ní mór duit ríomhphost a chur ar bun tríd an roghchlár - ^ Riarachán - uaire Fiontraíocht - r-phost Config. Tá muid freisin <i>r-phost tástála<i> cnaipe ar an leathanach sin. Cuir do chuid sonraí, é a shábháil agus ansin é a thástáil. Ba chóir duit a bheith bosca modal a chuireann in iúl duit má rathúil sé nó nach agus ar ndóigh ba chóir ríomhphost tástála teacht má tá sé rathúil. Nuair a bheidh tú ríomhphost cumraithe, is féidir do cheist sceidealta a chumrú.<br/><br/>Tabhair ainm, tuairisc roghnach, roghnaigh <i>Inis dúinn, le do thoil...</i> cineál, roghnaigh an cheist atá ag teastáil, a chur ar fáil seoladh ríomhphoist, roghnaigh formáid agus a leagtar ar an sceideal.<br/><br/>A chur ar fáil uair an chloig (uair an chloig amháin, aon nóiméad mar go fóill), a thabhairt ar an tasc ainm (nach bhfuil sé seo an t-ainm ar an cheist iarbhír sceidealta féin), roghnaigh a laethanta mhaith leat an rith cheist, roghnú a cheist ba mhaith leat a reáchtáil, a sholáthar seoladh ríomhphoist agus a roghnú formáid cheist agus tú ag déanamh.<br/>Seolfar ceisteanna le comhlacht ríomhphoist an cheist (i bhformáid html) agus an cheist a ghabhann leis an bhformáid a iarrtar.</i></i>';

$GLOBALS["lang"]['When you enter text into one of the column headings, you can simply use a normal word. For example, when you enter <code>computer</code> into the search box above the <i>Type</i> column, the search will return all devices with the type of Computer. Essentially, Open-AudIT requests data using a URL like <code>devices?devices.type=computer</code>. Now there is one significant difference when using the dataTables search, versus the standard'] = 'Nuair a théann tú téacs isteach i gceann de na ceannteidil colún, is féidir leat focal gnáth a úsáid. Mar shampla, nuair a théann tú isteach <code>computer</code> isteach sa bhosca cuardaigh os cionn an <i>Cineál Cineál Cineál Cineál</i> colún, beidh an cuardach ar ais gach feiste leis an gcineál Ríomhaire. Go bunúsach, Oscailte-Aud iarratais TF sonraí ag baint úsáide as URL cosúil <code>devices?devices.type=computer</code>. Anois tá difríocht shuntasach amháin nuair a úsáideann tú an cuardach sonraí, i gcomparáid leis an gcaighdeán';

$GLOBALS["lang"]['where'] = 'Más rud é';

$GLOBALS["lang"]['Where'] = 'Más rud é';

$GLOBALS["lang"]['Where $x is a number. This many LDAP entries are in the DB and have been retrieved.'] = 'Cá bhfuil $x uimhir. Tá na hiontrálacha LDAP go leor sa DB agus a bheith aisghabháil.';

$GLOBALS["lang"]['Where on the Device Details screen you would like to see this field appear.'] = 'Cá háit ar an scáileán Sonraí Gléas ba mhaith leat a fheiceáil réimse seo le feiceáil.';

$GLOBALS["lang"]['Where the rack is in the row.'] = 'Sa chás go bhfuil an raca sa tsraith.';

$GLOBALS["lang"]['Whether the vulnerability affects components beyond its own using Impact, Availability and Confidentiality.'] = 'Cibé an ndéanann an leochaileacht difear do chomhpháirteanna thar a Tionchar, Infhaighteacht agus Rúndacht féin.';

$GLOBALS["lang"]['Whether user interaction is required (None, Passive, Active).'] = 'Cibé an bhfuil idirghníomhaíocht úsáideora ag teastáil (Níl, éighníomhach, Gníomhach).';

$GLOBALS["lang"]['Which OS this benchmark applies to.'] = 'Cén feidhm a bhaineann leis an tagarmharc seo.';

$GLOBALS["lang"]['Which devices should Open-AudIT create from the external system (if any). Using All, None or a given Attribute.'] = 'Cén feistí ba chóir Open-AudIT chruthú as an gcóras seachtrach (más ann). Ag baint úsáide as Gach, None nó ómós ar leith.';

$GLOBALS["lang"]['Which network should we discover. This should be in the format of'] = 'Cén líonra ba chóir dúinn a fháil amach. Ba cheart é seo a bheith i bhformáid';

$GLOBALS["lang"]['Which sub-menu should we display this query in.'] = 'Cén fo-menu ba chóir dúinn a thaispeáint an cheist i.';

$GLOBALS["lang"]['Who made this rack.'] = 'Cé a rinne an raca seo.';

$GLOBALS["lang"]['Why Windows Server Only?'] = 'Cén fáth Freastalaí Windows Amháin?';

$GLOBALS["lang"]['Why do we exclude this policy?'] = 'Cén fáth a n-eisiaaimid an polasaí seo?';

$GLOBALS["lang"]['Wide Area Network'] = 'Líonra Limistéir Leathanaigh';

$GLOBALS["lang"]['Wide area network'] = 'Líonra limistéar leathan';

$GLOBALS["lang"]['Widget'] = 'taiseachas aeir: fliuch';

$GLOBALS["lang"]['Widget #'] = 'Tuilleadh eolais';

$GLOBALS["lang"]['Widget # '] = 'Tuilleadh eolais ';

$GLOBALS["lang"]['Widget Type'] = 'Cineál táirge';

$GLOBALS["lang"]['widgets'] = 'bláthanna cumhra: cumhráin';

$GLOBALS["lang"]['Widgets'] = 'bláthanna cumhra: cumhráin';

$GLOBALS["lang"]['Widgets are designed to be used on Dashboards. Enterprise users have complete freedom to create, update and delete widgets as required.'] = 'Deartar bogaigh le húsáid ar na Dashboards. Tá úsáideoirí Fiontair saoirse iomlán a chruthú, a thabhairt cothrom le dáta agus a scriosadh giuirléidí mar is gá.';

$GLOBALS["lang"]['width'] = 'Leithead';

$GLOBALS["lang"]['Width'] = 'Leithead';

$GLOBALS["lang"]['windows'] = 'Windows Windows Windows';

$GLOBALS["lang"]['Windows'] = 'Windows Windows Windows';

$GLOBALS["lang"]['Windows Packages'] = 'Windows Pacáistí';

$GLOBALS["lang"]['Windows Test Script'] = 'Script Tástála Windows';

$GLOBALS["lang"]['Windows User Work Unit #1'] = 'Aonad Oibre Úsáideora Windows #1';

$GLOBALS["lang"]['Windows User Work Unit #2'] = 'Aonad Oibre Úsáideora Windows #2';

$GLOBALS["lang"]['Windows may also have blocked the service from starting. On the target start the Windows Security applet and ensure the WinExeSvc executable is allowed to run (click Allow on Device and then Start Actions).'] = 'D\'fhéadfadh Windows bheith bac freisin ar an tseirbhís ó thús. Ar an sprioc tús an úlla Slándáil Windows agus a chinntiú go bhfuil an executable WinExeSvc ceadaithe a reáchtáil (cliceáil Ceadaigh ar Gléas agus ansin Gníomhartha Tosaigh).';

$GLOBALS["lang"]['Winexe page on Samba'] = 'Winexe leathanach ar Samba';

$GLOBALS["lang"]['Winexe requires the following Windows services to be started and running: netlogon and rpc services to be running.<br><br>Please log on to the target Windows machine and check the services for netlogon and rpc are running.'] = 'Winexe Éilíonn na seirbhísí Windows seo a leanas a thosú agus a reáchtáil: netlogon agus seirbhísí rpc a bheith ag rith.<br/><br/>Le do thoil logáil isteach ar an sprioc Windows meaisín agus seiceáil na seirbhísí do netlogon agus rpc ag rith.';

$GLOBALS["lang"]['Winexe uses the admin$ and RPC (net service start) to install and start a remote service (winexesvc). This service initializes a named pipe that is used to transport commands from the Open-AudIT server to the target and the output in the reverse way. When finished, the named pipe closes and the winexesvc waits for more connections or uninstalls (depending of the options given).'] = 'Úsáideann Winexe an admin $ agus RPC (thosaigh seirbhís idirlín) a shuiteáil agus a thosú seirbhís iargúlta (winexesvc). Cuireann an tseirbhís seo tús le píopa ainmnithe a úsáidtear chun orduithe a iompar ón bhfreastalaí Oscailte-AudIT chuig an sprioc agus an t-aschur ar an mbealach droim ar ais. Nuair a chríochnaigh, dúnann an píopa ainmnithe agus fanann an winexesvc le haghaidh níos mó naisc nó díshuiteáil (ag brath ar na roghanna a thugtar).';

$GLOBALS["lang"]['Wireless Local Area Network'] = 'Líonra Limistéir Gan Sreang';

$GLOBALS["lang"]['With the 3.3.0 release of Open-AudIT we have introduced the concept of a Cluster. This intuitively maps to the idea of a web cluster, database cluster or file cluster (or one of several other purposes) into a given type (high availability, redundancy, scaling, etc).<br><br>Depending on the purpose of cluster chosen, the reporting will be slightly different.<br><br>For example, if you create a Cluster with a purpose of virtualisation, when you have added devices to it you will also see the virtual machines on those devices.'] = 'Leis an scaoileadh 3.3.0 de Open-AudIT mór dúinn a thabhairt isteach ar an gcoincheap de Cluster. Seo mapaí iomasach leis an smaoineamh braisle gréasáin, braisle bunachar sonraí nó braisle comhad (nó ceann de roinnt críocha eile) i gcineál áirithe (infhaighteacht ard, iomarcaíocht, scálú, srl).<br/><br/>Ag brath ar chuspóir na braisle a roghnaítear, beidh an tuairisciú beagán difriúil.<br/><br/>Mar shampla, má chruthaíonn tú Cluster le cuspóir an fíorúilithe, nuair a chuir tú feistí leis, feicfidh tú na meaisíní fíorúil ar na feistí sin freisin.';

$GLOBALS["lang"]['With the introduction of the Clouds feature, you can supply details of your cloud, Amazon AWS or Microsoft Azure, and Open-AudIT will use the relevant API to retrieve a list of locations, networks, and instances, then discover each of these instances.'] = 'Le tabhairt isteach gné na Clouds, is féidir leat sonraí a sholáthar ar do scamall, Amazon AWS nó Microsoft Azure, agus beidh Open-AudIT úsáid a bhaint as an API ábhartha a fháil liosta de láithreacha, líonraí, agus cásanna, ansin amach gach ceann de na cásanna.';

$GLOBALS["lang"]['wmi_fails'] = 'Seirbhís do Chustaiméirí';

$GLOBALS["lang"]['Wmi Fails'] = 'Seirbhís do Chustaiméirí';

$GLOBALS["lang"]['wmi_timeout'] = 'Wmi Timeout';

$GLOBALS["lang"]['Wmi Timeout'] = 'Wmi Timeout';

$GLOBALS["lang"]['workgroup'] = 'An grúpa oibre';

$GLOBALS["lang"]['Workgroup'] = 'An grúpa oibre';

$GLOBALS["lang"]['Working Credentials'] = 'Credentials Oibre';

$GLOBALS["lang"]['Wrap Up'] = 'Wrap suas';

$GLOBALS["lang"]['Written in the PHP scripting language.'] = 'Scríofa sa teanga scriptithe PHP.';

$GLOBALS["lang"]['XML'] = 'XML';

$GLOBALS["lang"]['Yellow Query'] = 'riachtanais uisce: measartha';

$GLOBALS["lang"]['Yemen'] = 'An tSraith Shinsearach';

$GLOBALS["lang"]['Yes'] = 'Tá sé';

$GLOBALS["lang"]['You are able to define extra directories to be scanned as entries in the Executables collection. When defined, the directory and all sub-directories are scanned for files that are executable. You can also define directories and files to be excluded. When activated, these are injected into the linux audit script and performed whenever it is run (usually as part of a discovery). If you want these in a script you can manually copy to the target, use menu -> Discover -> Scripts -> List Scripts and download the script from there.'] = 'Tá tú in ann a shainiú eolairí breise a scanadh mar iontrálacha sa bhailiúchán inrite. Nuair a shainmhínítear, an eolaire agus gach fo-stiúrthóirí scanadh do chomhaid atá inrite. Is féidir leat a shainiú freisin eolairí agus comhaid a eisiamh. Nuair a ghníomhachtú, déantar iad seo a instealladh isteach sa script iniúchóireachta linux agus a dhéantar aon uair a reáchtáiltear é (de ghnáth mar chuid d\'fhionnachtain). Más mian leat iad seo i script is féidir leat cóip de láimh leis an sprioc, úsáid a bhaint as roghchlár - ^ Faigh amach - × Scripteanna - × Liosta Scripteanna agus íoslódáil an script ó ann.';

$GLOBALS["lang"]['You are always free to modify the audit scripts themselves to suit your specific requirements. You will need to (re)incorporate those changes whenever you upgrade as they will be overwritten by the default scripts. I would suggest saving a master copy of your modified script, upgrading Open-AudIT, then running a diff between the new default script and your modified script and applying the differences. The audit scripts are native scripts (Windows is VBScript, all others are Bash). Simple and easy to modify - just make sure to have a copy of your changes before you upgrade.'] = 'Tá tú i gcónaí saor in aisce a mhodhnú na scripteanna iniúchóireachta féin a oireann do do riachtanais ar leith. Beidh ort a (re) ionchorprú na hathruithe aon uair a uasghrádú tú mar beidh siad a overwritten ag na scripteanna réamhshocraithe. Ba mhaith liom a mholadh a shábháil cóip máistir de do script mhodhnú, uasghrádú Open-AudIT, ansin ag rith diff idir an script réamhshocraithe nua agus do script mhodhnú agus na difríochtaí i bhfeidhm. Is iad na scripteanna iniúchóireachta scripteanna dúchais (Windows VBScript, tá gach duine eile Bash). Simplí agus éasca a mhodhnú - ach déan cinnte go bhfuil cóip de do chuid athruithe sula uasghrádú tú.';

$GLOBALS["lang"]['You are running version'] = 'Tá tú ag rith leagan';

$GLOBALS["lang"]['You can access the collection using the normal Open-AudIT JSON based API. Just like any other collection. Please see'] = 'Is féidir leat rochtain a fháil ar an bailiúchán ag baint úsáide as an gnáth Oscailte-AudIT JSON bunaithe API. Díreach cosúil le haon bhailiúchán eile. Féach ar Sonraigh';

$GLOBALS["lang"]['You can also'] = 'Is féidir leat freisin';

$GLOBALS["lang"]['You can also see at the bottom of the page a table showing the devices the changes will be applied to.'] = 'Is féidir leat a fheiceáil freisin ag bun an leathanaigh tábla a léiríonn na feistí beidh na hathruithe a chur i bhfeidhm ar.';

$GLOBALS["lang"]['You can also specify properties using the below format.'] = 'Is féidir leat a shonrú freisin airíonna ag baint úsáide as an bhformáid thíos.';

$GLOBALS["lang"]['You can always run the Firstwave VM on your virtual infrastructure (ESX, Azure, et al). The Firstwave VM runs Debian linux and is free from OS licensing concerns and limitations. Or install on your own Linux distro of choice. We support Redhat 9, Ubuntu 20.04, 22.04 and 24.04 as well as Debian 11 and 12.'] = 'Is féidir leat a reáchtáil i gcónaí ar an VM Firstwave ar do bhonneagar fíorúil (ESX, Azure, et al). Ritheann an VM Firstwave Debian linux agus tá sé saor ó imní agus teorainneacha ceadúnaithe OS. Nó a shuiteáil ar do distro Linux féin de rogha. Tacaímid le Redhat 9, Ubuntu 20.04, 22.04 agus 24.04 chomh maith le Debian 11 agus 12.';

$GLOBALS["lang"]['You can assign devices to a location automatically using'] = 'Is féidir leat feistí a shannadh chuig suíomh go huathoibríoch ag baint úsáide as';

$GLOBALS["lang"]['You can assign devices using custom'] = 'Is féidir leat feistí a shannadh ag baint úsáide as saincheaptha';

$GLOBALS["lang"]['You can audit a remote machine without the using the actual Administrator account by creating a registry key. Create the below key on every machine to be audited and make sure the user credentials used is a member of the Administrators group.'] = 'Is féidir leat iniúchadh a dhéanamh ar mheaisín iargúlta gan an cuntas Riarthóir iarbhír a úsáid trí eochair chlárlainne a chruthú. Cruthaigh an eochair thíos ar gach meaisín le hiniúchadh agus déan cinnte go bhfuil na dintiúir úsáideora a úsáidtear ina bhall de ghrúpa na Riarthóirí.';

$GLOBALS["lang"]['You can certainly run a discovery without any valid credentials on the devices within the network, however, the information retrieved will be a very small subset of what Open-AudIT has the ability to retrieve <i>with</i> credentials.'] = 'Is féidir leat a reáchtáil cinnte fionnachtana gan aon dintiúir bailí ar na feistí laistigh den líonra, áfach, beidh an t-eolas aisghabháil a bheith ina fo-thacar an-bheag de cad Open-AudIT bhfuil an cumas a fháil <i>le</i> dintiúir.';

$GLOBALS["lang"]['You can create a baseline, run it against a group of devices and view the results, add scheduled execution, add more tables for comparison (currently only software, netstat ports and users are enabled), in place baseline editing, archiving of results and more.'] = 'Is féidir leat bonnlíne a chruthú, é a reáchtáil i gcoinne grúpa feistí agus na torthaí a fheiceáil, cuir forghníomhú sceidealta, cuir táblaí níos mó le haghaidh comparáide (bogearraí amháin faoi láthair, calafoirt glanstat agus úsáideoirí ar chumas), i bhfeidhm eagarthóireacht bunlíne, cartlannú torthaí agus níos mó.';

$GLOBALS["lang"]['You can create a script with all the options for any of the existing audit scripts - not just Windows. AIX, ESX, Linux, OSX and Windows are all covered.'] = 'Is féidir leat a chruthú script leis na roghanna le haghaidh aon cheann de na scripteanna iniúchóireachta atá ann cheana - ní hamháin Windows. AIX, ESX, Linux, OSX agus Windows atá clúdaithe go léir.';

$GLOBALS["lang"]['You can customize the entire integration down to which system (NMIS or Open-AudIT) is the authority on a per field basis. There are options to create and/or update devices in Open-AudIT or NMIS. Should we run a discovery on a created or updated device and so much more. There are explanations for each item on the right side of the page.'] = 'Is féidir leat a shaincheapadh ar an comhtháthú ar fad síos a bhfuil córas (NMIS nó Open-AudIT) an t-údarás ar bhonn in aghaidh an réimse. Tá roghanna a chruthú agus / nó feistí cothrom le dáta i Open-AudIT nó NMIS. Ba chóir dúinn a reáchtáil fionnachtain ar gléas cruthaithe nó suas chun dáta agus an oiread sin níos mó. Tá mínithe do gach mír ar an taobh dheis den leathanach.';

$GLOBALS["lang"]['You can define an application and associate a device to this application. A device may be associated to more than one application. An application may be associated to more than one device.'] = 'Is féidir leat iarratas a shainiú agus gléas a chomhlachú leis an iarratas seo. Féadfaidh feiste a bheith bainteach le níos mó ná iarratas amháin. Féadfar baint a bheith ag iarratas le níos mó ná feiste amháin.';

$GLOBALS["lang"]['You can edit the value of the Additional Field for each individual device on the device details page. View the device details screen, open the section containing the field and (if you have'] = 'Is féidir leat a chur in eagar ar an luach an Réimse Breise do gach gléas aonair ar an leathanach sonraí gléas. Féach ar an scáileán sonraí gléas, oscailt an chuid ina bhfuil an réimse agus (má tá tú';

$GLOBALS["lang"]['You can limit the Device Seed Discovery to fall within a strict set of parameters, including: <i>Restrict to Subnet</i> and <i>Restrict to Private</i>'] = 'Is féidir leat teorainn a chur leis an Fhionnachtana Seed Gléas titim laistigh de shraith dhian de pharaiméadair, lena n-áirítear: <i>Srian le Subnet</i> agus <i>Srian le Príobháideacha</i>';

$GLOBALS["lang"]['You can manually assign devices using'] = 'Is féidir leat a shannadh de láimh feistí ag baint úsáide as';

$GLOBALS["lang"]['You can override this by providing the format option in the URL.'] = 'Is féidir leat override seo trí sholáthar an rogha formáid sa URL.';

$GLOBALS["lang"]['You can select individual devices by clicking their check-boxes on the right side or selecting all devices clicking the checkbox on the top right of the table (underneath the Edit button that looks like a pencil).'] = 'Is féidir leat feistí aonair a roghnú trí chliceáil ar a n-seiceáil-bhoscaí ar an taobh dheis nó trí na feistí go léir a roghnú cliceáil ar an mbosca seiceála ar dheis barr an tábla (an cnaipe Edit a bhreathnaíonn ar nós peann luaidhe).';

$GLOBALS["lang"]['You can select the devices to be integrated by choosing any attribute in the system (device) table and matching (see menu → Admin → Database → List Tables → system for a list of fields). An attribute match can only match a single value.'] = 'Is féidir leat a roghnú na feistí a bheidh comhtháite ag roghnú aon tréith sa chóras (feiste) tábla agus meaitseáil (féach roghchlár → Bunachar Sonraí → Táblaí Liosta → córas le haghaidh liosta de na réimsí). Is féidir le cluiche tréith mheaitseáil ach luach amháin.';

$GLOBALS["lang"]['You can turn any server into a collector by going to menu -> Admin -> Collectors -> Make this install a Collector. You will need credentials to log on to the server this install will report in to.'] = 'Is féidir leat dul ar aon fhreastalaí isteach i bailitheoir ag dul go dtí roghchlár - ^ Riarachán - uaire Bailitheoirí - uaire Déan seo a shuiteáil Bailitheoir. Beidh ort dintiúir a logáil isteach ar an bhfreastalaí beidh sé seo a shuiteáil tuarascáil isteach.';

$GLOBALS["lang"]['You can view by clicking on the blue view icon. You can also edit or delete if you have permissions.'] = 'Is féidir leat féachaint trí chliceáil ar an deilbhín dearcadh gorm. Is féidir leat a chur in eagar nó a scriosadh freisin má tá cead agat.';

$GLOBALS["lang"]['You do not have the PHP MBString extension installed. This extension is required.'] = 'Ní gá duit an síneadh MBString PHP suiteáilte. Tá an síneadh ag teastáil.';

$GLOBALS["lang"]['You do not have the PHP SNMP extension installed. This extension is highly recommended.'] = 'Ní gá duit an síneadh PHP SNMP suiteáilte. Moltar an síneadh seo go mór.';

$GLOBALS["lang"]['You may want to copy and paste this URL in an email to your staff.'] = 'B\'fhéidir gur mhaith leat an URL seo a chóipeáil agus a ghreamú i ríomhphost chuig d\'fhoireann.';

$GLOBALS["lang"]['You may wish to have Active Directory or OpenLDAP authenticate your users, but not provide authorization. To do this, make sure <i>Use for Authentication</i> is set to Y and <i>Use for Roles</i> is set to N. The credentials will be validated by LDAP, but you will need to have the user already created and assigned Roles in Open-AudIT. This also <i>automatically</i> applies to'] = 'Is féidir leat a bheith Eolaire Gníomhach nó OpenLDAP fhíordheimhniú do úsáideoirí, ach ní a chur ar fáil údarú. Chun seo a dhéanamh, déan cinnte <i>Úsáid le haghaidh Fíordheimhniú</i> atá leagtha chuig Y agus <i>Úsáid le haghaidh Róil</i> Tá sé leagtha go N. Beidh na dintiúir a bhailíochtú ag LDAP, ach beidh ort a bheith ar an t-úsáideoir a cruthaíodh cheana féin agus a shanntar Róil i Open-AudIT. Seo freisin <i>go huathoibríoch</i> iarratas a dhéanamh ar';

$GLOBALS["lang"]['You might have noticed these match rules are for items that might not be globally unique. Some examples:'] = 'D\'fhéadfá a bheith faoi deara go bhfuil na rialacha cluiche le haghaidh míreanna nach bhféadfadh a bheith ar fud an domhain ar leith. Roinnt samplaí:';

$GLOBALS["lang"]['You must delete your existing license before adding a new license.'] = 'Ní mór duit do cheadúnas atá ann cheana a scriosadh sula gcuireann tú ceadúnas nua.';

$GLOBALS["lang"]['You must have working SSH credentials to execute a benchmark. The following Operating Systems are currently supported: Centos 7, Debian 12, Redhat 7, Redhat 8, Redhat 9, SLES 15, Ubuntu 20.04, Ubuntu 22.04. We plan to expand on these with further releases.'] = 'Ní mór duit dintiúir SSH a bheith ag obair chun tagarmharc a fhorghníomhú. Na Córais Oibriúcháin seo a leanas tacaíocht faoi láthair: Centos 7, Debian 12, Redhat 7, Redhat 8, Redhat 9, SLES 15, Ubuntu 20.04, Ubuntu 22.04. Tá sé i gceist againn leathnú ar na le heisiúintí breise.';

$GLOBALS["lang"]['You should copy and paste the entire file into the textbox. In the case below, copy ALL the text.'] = 'Ba chóir duit an comhad ar fad a chóipeáil agus a ghreamú isteach sa bhosca téacs. Sa chás thíos, cóip GACH an téacs.';

$GLOBALS["lang"]['You should not include the edited_by and edited_date fields. These will be automatically set.'] = 'Níor chóir duit a chur san áireamh ar an eagarthóireacht_by agus eagarthóireacht_date réimsí. Beidh siad seo a shocrú go huathoibríoch.';

$GLOBALS["lang"]['You should only change the second sentence of text, the'] = 'Ba chóir duit ach an dara habairt téacs a athrú, an';

$GLOBALS["lang"]['You should substitute the required column (eg, org_id) for ATTRIBUTE_NAME.'] = 'Ba chóir duit an colún riachtanach (m.sh., org_id) a chur in ionad ATTRIBUTE_NAME.';

$GLOBALS["lang"]['You should use a header line containing the names of the columns you wish to populate, then your data lines below that.'] = 'Ba chóir duit úsáid a bhaint as líne header ina bhfuil ainmneacha na colúin mian leat a populate, ansin do línte sonraí thíos sin.';

$GLOBALS["lang"]['You should use only those tables that contain attributes you need. I usually use a left join. For example'] = 'Ba chóir duit a úsáid ach amháin na táblaí a bhfuil tréithe is gá duit. Úsáid mé de ghnáth ar chlé a bheith páirteach. Mar shampla';

$GLOBALS["lang"]['You will need a'] = 'Beidh ort';

$GLOBALS["lang"]['You will need the ports for WMI on the Windows firewall opened on each target Windows computer. For Windows Core servers, ensure you allow the firewall connections as per'] = 'Beidh ort na calafoirt do WMI ar an balla dóiteáin Windows oscail ar gach sprioc Windows ríomhaire. Do Windows freastalaithe Core, a chinntiú go gceadaíonn tú na naisc balla dóiteáin de réir';

$GLOBALS["lang"]['You will see a list of'] = 'Feicfidh tú liosta de';

$GLOBALS["lang"]['YouTube Tutorials'] = 'Ranganna Teagaisc YouTube';

$GLOBALS["lang"]['Your AWS EC2 API key.'] = 'Do eochair API AWS EC2.';

$GLOBALS["lang"]['Your Google Compute credentials as JSON.'] = 'Do dintiúir Google Ríomh mar JSON.';

$GLOBALS["lang"]['Your Host is'] = 'Do chuid oibre Tá Óstach';

$GLOBALS["lang"]['Your Licenses'] = 'Do Ceadúnais';

$GLOBALS["lang"]['Your Microsoft Azure Client ID.'] = 'Do ID Cliant Microsoft Azure.';

$GLOBALS["lang"]['Your Microsoft Azure Client Secret.'] = 'Do Microsoft Azure Rúnda Cliant.';

$GLOBALS["lang"]['Your Microsoft Azure Subscription ID.'] = 'Do ID Tuairisciú Microsoft Azure.';

$GLOBALS["lang"]['Your Microsoft Azure Tennant ID.'] = 'Do Microsoft Azure ID Tennant.';

$GLOBALS["lang"]['Your PHP version is'] = 'Tá do leagan PHP';

$GLOBALS["lang"]['Your SQL to select attributes that will populate this query.'] = 'Do SQL a roghnú tréithe a populate an cheist seo.';

$GLOBALS["lang"]['Your SQL to select devices that will populate this group.'] = 'Do SQL a roghnú feistí a populate an grúpa seo.';

$GLOBALS["lang"]['Your SSH key.'] = 'Do eochair SSH.';

$GLOBALS["lang"]['Your access credentials, as per that clouds native API.'] = 'Do dintiúir rochtana, de réir mar a scamaill API dúchais.';

$GLOBALS["lang"]['Your data is your data. You can extract it any time you like. We even helpfully provide exports to CSV, JSON and XML. And we have a JSON API. And you can write custom reports and have those output in CSV, XML, and JSON! Again, it is your data - not anyone else. You can be confident that the security of your data is in your hands.'] = 'Tá do shonraí do shonraí. Is féidir leat é a bhaint am ar bith is mian leat. Cuirimid onnmhairí fiú go cabhrach ar fáil do CSV, JSON agus XML. Agus ní mór dúinn API JSON. Agus is féidir leat tuarascálacha saincheaptha a scríobh agus iad siúd a aschur i CSV, XML, agus JSON! Arís, tá sé do shonraí - ní duine ar bith eile. Is féidir leat a bheith muiníneach go bhfuil slándáil do chuid sonraí i do lámha.';

$GLOBALS["lang"]['Your database platform is'] = 'Is é do ardán bunachar sonraí';

$GLOBALS["lang"]['Your description of the status of this connection (provisioned, retired, etc).'] = 'Do thuairisc ar stádas an naisc seo (arna soláthar, ar scor, etc).';

$GLOBALS["lang"]['Your description of this item.'] = 'Do cur síos ar an mír seo.';

$GLOBALS["lang"]['Your generic name for this piece of software'] = 'Do ainm cineálach le haghaidh an píosa bogearraí';

$GLOBALS["lang"]['Your generic version for this piece of software'] = 'Do leagan cineálach le haghaidh an píosa bogearraí';

$GLOBALS["lang"]['Your user should now be able to logon by clicking the <i>Logon with Entra</i> button on the Open-AudIT logon page. As mentioned above, if the logon fails, please check the logfile and verify the users <i>preferred username</i>.<br><br>And that should be all there is too it. Now your users should have one less set of credentials to remember!<br><br>As always, if you have troubles with this feature, please email'] = 'Ba chóir do úsáideoir a bheith in ann a logon anois trí chliceáil ar an <i>Lógó le Entra</i> cnaipe ar an leathanach lógó Open-AudIT. Mar a luadh thuas, má theipeann ar an logon, le do thoil seiceáil an logáil isteach agus na húsáideoirí a fhíorú <i>ainm úsáideora</i>.<br/><br/>Agus ba chóir go mbeadh go léir ann freisin. Anois ba chóir do úsáideoirí a bheith sraith amháin níos lú de dintiúir a mheabhrú!<br/><br/>Mar i gcónaí, má tá tú Trioblóidí leis an ngné seo, le do thoil ríomhphost';

$GLOBALS["lang"]['Your user should now be able to logon by clicking the <i>Logon with OKTA</i> button on the Open-AudIT logon page. As mentioned above, if the logon fails, please check the logfile and verify the users <i>name</i>.<br><br>And that should be all there is too it. Now your users should have one less set of credentials to remember!<br><br>As always, if you have troubles with this feature, please email'] = 'Ba chóir do úsáideoir a bheith in ann a logon anois trí chliceáil ar an <i>Lógó le OKTA</i> cnaipe ar an leathanach lógó Open-AudIT. Mar a luadh thuas, má theipeann ar an logon, le do thoil seiceáil an logáil isteach agus na húsáideoirí a fhíorú <i>ainm ainm</i>.<br/><br/>Agus ba chóir go mbeadh go léir ann freisin. Anois ba chóir do úsáideoirí a bheith sraith amháin níos lú de dintiúir a mheabhrú!<br/><br/>Mar i gcónaí, má tá tú Trioblóidí leis an ngné seo, le do thoil ríomhphost';

$GLOBALS["lang"]['Your web server is'] = 'Tá do fhreastalaí gréasáin';

$GLOBALS["lang"]['Zambia'] = 'Amharc ar gach eolas';

$GLOBALS["lang"]['Zimbabwe'] = 'An tSiombáib';

$GLOBALS["lang"]['a String'] = 'Bhí an t-eolas úsáideach';

$GLOBALS["lang"]['active'] = 'gníomhach gníomhach';

$GLOBALS["lang"]['active directory'] = 'foirm duille: líneach';

$GLOBALS["lang"]['active/active'] = 'gníomhach / gníomhach';

$GLOBALS["lang"]['active/passive'] = 'gníomhach / éighníomhach';

$GLOBALS["lang"]['advertisement'] = 'internet marketing';

$GLOBALS["lang"]['alert'] = 'airdeall';

$GLOBALS["lang"]['all'] = 'go léir';

$GLOBALS["lang"]['allocated'] = 'Leithdháilte Leithdháilte';

$GLOBALS["lang"]['amazon'] = 'taiseachas aeir: fliuch';

$GLOBALS["lang"]['an Integer'] = 'Integer';

$GLOBALS["lang"]['and'] = 'agus';

$GLOBALS["lang"]['and / or'] = 'agus / nó';

$GLOBALS["lang"]['and a support ticket will be created and actioned.'] = 'agus cruthófar ticéad tacaíochta agus gníomhófar é.';

$GLOBALS["lang"]['and another'] = 'agus eile';

$GLOBALS["lang"]['and download the Latest Release self-installer. You may need to scroll down the page to find it.'] = 'agus íoslódáil an Scaoileadh is déanaí féin-suiteálaí. D\'fhéadfá a scrollaigh síos an leathanach chun é a aimsiú.';

$GLOBALS["lang"]['and go to Applications -> Enterprise Applications (far left menu), then click <i>New application</i>.'] = 'agus téigh go dtí Iarratais - ^ Iarratais Fiontraíochta (roghchlár ar chlé), cliceáil ansin <i>Iarratas nua</i>.';

$GLOBALS["lang"]['and its current time is'] = 'agus tá a chuid ama reatha';

$GLOBALS["lang"]['and looks for a warranty expiration date prior to today.'] = 'agus breathnaíonn ar dháta éagtha baránta roimh lá atá inniu ann.';

$GLOBALS["lang"]['and review what is possible.'] = 'agus athbhreithniú a dhéanamh ar cad is féidir.';

$GLOBALS["lang"]['and the Sign-out redirect URI being'] = 'agus an URI Comharthaí-amach atreorú á';

$GLOBALS["lang"]['and the final lines will likely be of most interest. These lines should give you the exact point at which the login failed.'] = 'agus is dócha go mbeidh an chuid is mó spéise ag na línte deiridh. Ba chóir na línte a thabhairt duit an pointe cruinn ag ar theip ar an logáil isteach.';

$GLOBALS["lang"]['antivirus'] = 'antivirus';

$GLOBALS["lang"]['application'] = 'iarratas a dhéanamh';

$GLOBALS["lang"]['approved'] = 'ceadaithe';

$GLOBALS["lang"]['are required.'] = 'ag teastáil.';

$GLOBALS["lang"]['are used.'] = 'a úsáidtear.';

$GLOBALS["lang"]['as a device responding on this port.<br>This has caused some customers issues where firewalls respond on behalf of a non-existing device, and hence cause false positive device detection. We now have this attribute available to set per scan.'] = 'mar fheiste ag freagairt ar an gcalafort seo.<br/>Tá sé seo ba chúis le roinnt saincheisteanna custaiméirí i gcás ina bhfreagróidh ballaí dóiteáin thar ceann gléas neamh-a bhí ann, agus dá bhrí sin a chur faoi deara bhrath gléas dearfach bréagach. Tá an tréith ar fáil anois a shocrú in aghaidh an scanadh.';

$GLOBALS["lang"]['as the reference point and filters out all virtual machines via a check of the system.serial field for VM.'] = 'mar an pointe tagartha agus scagairí amach gach meaisíní fíorúil trí sheiceáil an chórais. réimse sraitheach do VM.';

$GLOBALS["lang"]['assuming working and client populated DNS'] = 'glacadh ag obair agus cliant daonra DNS';

$GLOBALS["lang"]['attribute'] = 'tréith';

$GLOBALS["lang"]['auto'] = 'cineál gas: in airde';

$GLOBALS["lang"]['backup'] = 'cúltaca cúltaca';

$GLOBALS["lang"]['banned'] = 'toirmeasc ar';

$GLOBALS["lang"]['blog'] = 'a blog';

$GLOBALS["lang"]['blue'] = 'gorm éadrom';

$GLOBALS["lang"]['bottom'] = 'bun an leathanaigh';

$GLOBALS["lang"]['building'] = 'foirgneamh tógála';

$GLOBALS["lang"]['can be used for user authentication (is the users name and password correct) as well as user authorization (what roles and orgs does a user have).<br><br>If a user is not in the configured LDAP but is in Open-AudIT (eg: the <i>admin</i> user), Open-AudIT will fallback to using itself for both authentication and authorization.<br><br>Open-AudIT uses specific LDAP groups for roles and orgs. A user must be a direct member of these group(s) in order for Open-AudIT to determine that users access.<br><br>When configured correctly, LDAP use can completely remove the need to create users in Open-AudIT. Simply configure Open-AudIT to use LDAP for both authentication and authorization. If the user does not exist in Open-AudIT but does exist in LDAP and their credentials are correct and they are a member of the required groups Open-AudIT will create the user account automatically.'] = 'Is féidir é a úsáid le haghaidh fíordheimhnithe úsáideora (Is é an t-ainm úsáideoirí agus focal faire ceart) chomh maith le húdarú úsáideora (cad rólanna agus orgs bhfuil úsáideoir).<br/><br/>Mura bhfuil úsáideoir sa LDAP cumraithe ach tá sé i Open-AudIT (m.sh.: an <i>admin sa Spáinn</i> úsáideoir), Beidh Open-AudIT fallback a úsáid féin le haghaidh fíordheimhnithe agus údarú araon.<br/><br/>Amharc ar gach eolas Úsáideann TF grúpaí sonracha LDAP le haghaidh róil agus orgs. Ní mór d’úsáideoir a bheith ina bhall díreach de na grúpa/na grúpaí seo d’fhonn Open-AudIT chun a chinneadh go bhfuil rochtain ag úsáideoirí.<br/><br/>Nuair a chumrú i gceart, is féidir úsáid LDAP bhaint go hiomlán ar an ngá le húsáideoirí a chruthú i Open-AudIT. Níl ort ach a chumrú Open-AudIT a úsáid LDAP le haghaidh an dá fíordheimhnithe agus údarú. Más rud é nach bhfuil an t-úsáideoir ann i Open-AudIT ach tá sé ann i LDAP agus tá a n- dintiúir ceart agus tá siad ina bhall de na grúpaí is gá Open-AudIT a chruthú ar an gcuntas úsáideora go huathoibríoch.';

$GLOBALS["lang"]['can now retrieve details about a file or directory of files and monitor these files for changes as per other attributes in the Open-AudIT database. This feature works out of the box for Linux Open-AudIT servers, but needs a change to the service account name under a Windows Open-AudIT server. Supported clients are Windows and Linux.'] = 'Is féidir a fháil anois sonraí faoi comhad nó eolaire de chomhaid agus monatóireacht a dhéanamh ar na comhaid le haghaidh athruithe de réir tréithe eile sa bhunachar sonraí Open-AudIT. Oibríonn an ghné seo as an mbosca le haghaidh freastalaithe Open-AudIT Linux, ach ní mór athrú a dhéanamh ar ainm an chuntais seirbhíse faoi fhreastalaí Windows Open-AudIT. Tá cliaint tacaíocht Windows agus Linux.';

$GLOBALS["lang"]['changed'] = 'athrú';

$GLOBALS["lang"]['chosen. From there if a port for WMI, SSH or SNMP is detected responding the device is further queried using '] = 'roghnaithe. Ó ann má tá calafort do WMI, SSH nó SNMP braitheadh ag freagairt go bhfuil an gléas a chuardach tuilleadh ag baint úsáide as ';

$GLOBALS["lang"]['cloud'] = 'scamall scamall';

$GLOBALS["lang"]['code'] = 'cód cód cód';

$GLOBALS["lang"]['collections and details pages is an icon to execute.'] = 'bailiúchán agus sonraí leathanaigh icon a fhorghníomhú.';

$GLOBALS["lang"]['collector'] = 'lucht siúil';

$GLOBALS["lang"]['collectors'] = 'taiseachas aeir: fliuch';

$GLOBALS["lang"]['column'] = 'colún colún colún';

$GLOBALS["lang"]['column will contain either <i>y</i> or <i>n</i>. This indicates if this row is currently present on the device. For example software may be installed (which would result in <i>software.current = y</i>), but on a subsequent audit it may not be detected. Open-AudIT will then change this rows current attribute to <i>n</i>.'] = 'Beidh colún ann <i>y</i> nó <i>n</i>. Léiríonn sé seo má tá an tsraith seo i láthair faoi láthair ar an bhfeiste. Mar shampla is féidir bogearraí a shuiteáil (a bheadh mar thoradh ar <i>bogearraí.current = y</i>), ach ar iniúchadh ina dhiaidh sin ní féidir é a bhrath. Beidh Open-AudIT athrú ansin na sraitheanna tréith reatha a <i>n</i>.';

$GLOBALS["lang"]['column. The'] = 'colún. An bhfuil';

$GLOBALS["lang"]['compute'] = 'cineál gas: in airde';

$GLOBALS["lang"]['config'] = 'ar fud an domhain';

$GLOBALS["lang"]['console'] = 'console console';

$GLOBALS["lang"]['contains'] = 'Tá an';

$GLOBALS["lang"]['create'] = 'chruthú a chruthú';

$GLOBALS["lang"]['created'] = 'cruthaithe';

$GLOBALS["lang"]['credentials'] = 'dintiúir';

$GLOBALS["lang"]['critical'] = 'criticiúil';

$GLOBALS["lang"]['cve'] = 'soilse loingseoireachta E';

$GLOBALS["lang"]['database'] = 'bunachar sonraí';

$GLOBALS["lang"]['debug'] = 'Déan teagmháil linn';

$GLOBALS["lang"]['delegated'] = 'tarmligthe a glacadh';

$GLOBALS["lang"]['delete'] = 'scriosadh scriosadh';

$GLOBALS["lang"]['deleted'] = 'scriostar';

$GLOBALS["lang"]['denied'] = 'cineál gas: in airde';

$GLOBALS["lang"]['details'] = 'data recovery';

$GLOBALS["lang"]['devices'] = 'feistí leighis';

$GLOBALS["lang"]['digitalocean'] = 'web development';

$GLOBALS["lang"]['discoveries'] = 'fionnachtana';

$GLOBALS["lang"]['documentation for further details.'] = 'doiciméadú le haghaidh tuilleadh sonraí.';

$GLOBALS["lang"]['does <strong>not</strong> provide vulnerability reports for the following'] = 'a dhéanann <strong>bláthanna cumhra: aon cumhráin</strong> tuarascálacha leochaileachta a sholáthar do na nithe seo a leanas';

$GLOBALS["lang"]['does not equal'] = 'nach bhfuil comhionann';

$GLOBALS["lang"]['emergency'] = 'éigeandála éigeandála';

$GLOBALS["lang"]['entra'] = 'cineál gas: in airde';

$GLOBALS["lang"]['equals'] = 'comhionanna';

$GLOBALS["lang"]['error'] = 'earráid earráid';

$GLOBALS["lang"]['established'] = 'bunaithe ar';

$GLOBALS["lang"]['excluded'] = 'eisiata';

$GLOBALS["lang"]['expired'] = 'dul in éag';

$GLOBALS["lang"]['extreme - Without which, the organisation would fail.

very high - Functions that are essential for the organisations survival and must be restored immediately.

high - Important functions that should be restored quickly but may have a slightly longer recovery time.

medium - Functions that are necessary but can tolerate longer downtime.

low - Non-essential functions that can be delayed without significant impact.

unassigned - The default until set.'] = 'mhór - Gan a, bheadh an eagraíocht theipeann.

an-ard - Feidhmeanna atá riachtanach do mharthanas na n-eagraíochtaí agus ní mór iad a thabhairt ar ais láithreach.

ard - Feidhmeanna tábhachtacha ba chóir a athchóiriú go tapa ach d\'fhéadfadh go mbeadh am a ghnóthú beagán níos faide.

meán - Feidhmeanna atá riachtanach ach is féidir a fhulaingt níos faide downtime.

feidhmeanna íseal - Neamh-riachtanach is féidir a moill gan tionchar suntasach.

unassigned - An réamhshocraithe go dtí a leagtar.';

$GLOBALS["lang"]['fail'] = 'minicíocht uisce: flúirseach';

$GLOBALS["lang"]['false'] = 'foirm duille: oval';

$GLOBALS["lang"]['file'] = 'comhad comhad';

$GLOBALS["lang"]['firewall'] = 'balla dóiteáin';

$GLOBALS["lang"]['first'] = 'chéad chéad uair';

$GLOBALS["lang"]['fixed'] = 'seasta seasta';

$GLOBALS["lang"]['floor'] = 'urlár an urlár';

$GLOBALS["lang"]['for'] = 'le haghaidh';

$GLOBALS["lang"]['for authentication'] = 'le haghaidh fíordheimhnithe';

$GLOBALS["lang"]['for this information.'] = 'don fhaisnéis seo.';

$GLOBALS["lang"]['from Audit Script Result'] = 'ó Thoradh Iniúchadh';

$GLOBALS["lang"]['from NMIS'] = 'ó NMIS';

$GLOBALS["lang"]['from address LocalHost (Using LRPC) running in the application container'] = 'ó seoladh LocalHost (Using LRPC) ag rith sa choimeádán iarratais';

$GLOBALS["lang"]['front'] = 'tosaigh';

$GLOBALS["lang"]['front-left'] = 'tosaigh ar chlé';

$GLOBALS["lang"]['front-right'] = 'tosaigh ceart';

$GLOBALS["lang"]['github'] = 'tréimhse saoil: ilbhliantúil';

$GLOBALS["lang"]['google'] = 'google';

$GLOBALS["lang"]['greater or equals'] = 'níos mó nó comhionanna';

$GLOBALS["lang"]['greater than'] = 'níos mó ná';

$GLOBALS["lang"]['group'] = 'cineál gas: in airde';

$GLOBALS["lang"]['has not been set'] = 'nach bhfuil leagtha síos';

$GLOBALS["lang"]['have a working reverse DNS resolvable IP to the target Windows PC.'] = 'a bheith ag obair droim ar ais IP inréitithe DNS chuig an sprioc Windows PC.';

$GLOBALS["lang"]['have the ability to be executed. On the'] = 'go bhfuil an cumas a fhorghníomhú. Ar an';

$GLOBALS["lang"]['head'] = 'ceann amháin';

$GLOBALS["lang"]['here'] = 'anseo';

$GLOBALS["lang"]['high availability'] = 'infhaighteacht ard';

$GLOBALS["lang"]['howto'] = 'riachtanais uisce: measartha';

$GLOBALS["lang"]['if you clone a Linux virtual machine, unless you manually regenerate this (and in my experience, people do not) it will remain the same.'] = 'má tá tú clone meaisín fíorúil Linux, ach amháin má athghiniúint tú de láimh seo (agus i mo thaithí, daoine nach) beidh sé fós mar an gcéanna.';

$GLOBALS["lang"]['ignored'] = 'neamhaird a dhéanamh de';

$GLOBALS["lang"]['import the example device data'] = 'allmhairiú sonraí gléas sampla';

$GLOBALS["lang"]['in'] = 'i';

$GLOBALS["lang"]['in Enterprise.'] = 'i bhFiontar.';

$GLOBALS["lang"]['in Inputs can have the following values.'] = 'Is féidir in Ionchuir bhfuil na luachanna seo a leanas.';

$GLOBALS["lang"]['in Outputs can have the following values.'] = 'Is féidir i Aschuir bhfuil na luachanna seo a leanas.';

$GLOBALS["lang"]['inactive'] = 'inactive';

$GLOBALS["lang"]['incomplete'] = 'tréimhse saoil ilbhliantúil';

$GLOBALS["lang"]['info'] = 'info';

$GLOBALS["lang"]['installer will test for the presence of Nmap in its standard install locations of'] = 'Beidh suiteálaí tástáil le haghaidh láithreacht Nmap ina suímh shuiteáil caighdeánach de';

$GLOBALS["lang"]['int, text, bool (y/n), etc'] = 'int, téacs, bool (y/n), srl';

$GLOBALS["lang"]['is U.S. standard maintained by National Institute of Standards and Technology'] = 'Is caighdeán na Stát Aontaithe á chothabháil ag an Institiúid Náisiúnta Caighdeán agus Teicneolaíocht';

$GLOBALS["lang"]['is an international standard for managing information security. It provides a framework for establishing, implementing, maintaining, and continually improving an Information Security Management System (ISMS).'] = 'caighdeán idirnáisiúnta chun slándáil faisnéise a bhainistiú. Soláthraíonn sé creat chun Córas Bainistíochta Slándála Faisnéise a bhunú, a chur chun feidhme, a chothabháil, agus a fheabhsú go leanúnach.';

$GLOBALS["lang"]['is based upon'] = 'bunaithe ar';

$GLOBALS["lang"]['is licensed to'] = 'atá ceadúnaithe chun';

$GLOBALS["lang"]['is next on the list and Open-AudIT can use password and key authentication. Open-AudIT can also use a sudo enabled user as opposed to the root use directly (although it can also use root). For best results, the root user or a sudo enabled user should be used (see Auditing Linux without root and Target Client Configuration on the wiki). Windows devices can also run ssh, however if Open-AudIT detects this it will stop the SSH queries and instead use WMI (assuming working WMI credentials).'] = 'Is é seo chugainn ar an liosta agus is féidir Open-AudIT úsáid focal faire agus fíordheimhnithe eochair. Is féidir le Open-AudIT úsáid a bhaint freisin úsáideoir sudo cumasaithe i gcomparáid leis an úsáid fhréamh go díreach (cé gur féidir é a úsáid freisin fréimhe). Chun na torthaí is fearr, ba cheart an t-úsáideoir fréimhe nó úsáideoir sudo cumasaithe a úsáid (féach Iniúchadh Linux gan fhréamh agus Sprioc Cumraíocht Cliant ar an wiki). Is féidir le feistí Windows reáchtáil freisin ssh, áfach, má bhraitheann Open-AudIT seo beidh sé stop a chur leis na ceisteanna SSH agus ina ionad sin úsáid WMI (ag glacadh le dintiúir WMI ag obair).';

$GLOBALS["lang"]['is the link to the'] = 'Is é an nasc chuig an';

$GLOBALS["lang"]['item to view the specific tables and their columns. This will enable you to find exactly what you need, rather than trawling through the MySQL console of the schema creation script.'] = 'mír chun féachaint ar na táblaí sonracha agus a colúin. Beidh sé seo ar chumas tú a fháil go díreach cad is gá duit, seachas trál tríd an consól MySQL an script a chruthú scéimre.';

$GLOBALS["lang"]['key required to retrieve lat/long and display map. See'] = 'eochair is gá a fháil lat / léarscáil ar fad agus a thaispeáint. Féach ar';

$GLOBALS["lang"]['left'] = 'fágtha';

$GLOBALS["lang"]['less or equals'] = 'níos lú nó comhionanna';

$GLOBALS["lang"]['less than'] = 'níos lú ná';

$GLOBALS["lang"]['license'] = 'free';

$GLOBALS["lang"]['licenses'] = 'custom service';

$GLOBALS["lang"]['like'] = 'maith liom';

$GLOBALS["lang"]['line'] = 'líne líne líne';

$GLOBALS["lang"]['list'] = 'liosta de na liosta';

$GLOBALS["lang"]['list View, using the Create button'] = 'Féach ar, ag baint úsáide as an Cruthaigh cnaipe';

$GLOBALS["lang"]['load balancing'] = 'cothromaíocht';

$GLOBALS["lang"]['location'] = 'suíomh monarchan seomra geal';

$GLOBALS["lang"]['locations'] = 'suíomh na n-áiteanna';

$GLOBALS["lang"]['managed'] = 'custom management';

$GLOBALS["lang"]['methods'] = 'modhanna modhanna';

$GLOBALS["lang"]['microsoft'] = 'microsoft bog';

$GLOBALS["lang"]['mount point'] = 'pointe mount';

$GLOBALS["lang"]['must'] = 'ní mór';

$GLOBALS["lang"]['network'] = 'web development';

$GLOBALS["lang"]['news'] = 'Nuacht agus Imeachtaí';

$GLOBALS["lang"]['no'] = 'Níl an Tweet seo ar fáil';

$GLOBALS["lang"]['node'] = 'cineál gas: in airde';

$GLOBALS["lang"]['none'] = 'cineál gas: in airde';

$GLOBALS["lang"]['normal'] = 'gnáth';

$GLOBALS["lang"]['not applicable'] = 'gan a bheith infheidhme';

$GLOBALS["lang"]['not in'] = 'nach bhfuil i';

$GLOBALS["lang"]['not like'] = 'Ní maith liom';

$GLOBALS["lang"]['notice'] = 'fógra';

$GLOBALS["lang"]['notification'] = 'fógra a thabhairt';

$GLOBALS["lang"]['okta'] = 'taiseachas aeir: fliuch';

$GLOBALS["lang"]['on devices where'] = 'maidir le feistí';

$GLOBALS["lang"]['openldap'] = 'taiseachas aeir: fliuch';

$GLOBALS["lang"]['optimized'] = 'Optamaithe';

$GLOBALS["lang"]['optionally '] = 'roghnach ';

$GLOBALS["lang"]['or'] = 'nó';

$GLOBALS["lang"]['or the GitHub page at'] = 'nó an leathanach GitHub ar';

$GLOBALS["lang"]['other'] = 'eile seachas eile';

$GLOBALS["lang"]['package'] = 'pacáiste pacáiste';

$GLOBALS["lang"]['page. Export your LDAP server from menu -> Admin -> LDAP Servers -> Details to JSON and save and include this data as well.'] = 'leathanach. Easpórtáil do fhreastalaí LDAP ó roghchlár - ^ Riarachán - uaire Freastalaithe LDAP - ^ Sonraí JSON agus a shábháil agus a chur san áireamh na sonraí chomh maith.';

$GLOBALS["lang"]['partition'] = 'laindéal';

$GLOBALS["lang"]['pass'] = 'pas a fháil';

$GLOBALS["lang"]['pending'] = 'ar feitheamh';

$GLOBALS["lang"]['performance'] = 'feidhmíocht feidhmíochta';

$GLOBALS["lang"]['performed'] = 'a rinneadh';

$GLOBALS["lang"]['permission'] = 'cead cead pleanála';

$GLOBALS["lang"]['permissions required per endpoint'] = 'ceadanna ag teastáil in aghaidh an phointe deiridh';

$GLOBALS["lang"]['pie'] = 'pie pie';

$GLOBALS["lang"]['planning'] = 'pleanála teanga';

$GLOBALS["lang"]['predictable'] = 'intuartha';

$GLOBALS["lang"]['query'] = 'search engine marketing';

$GLOBALS["lang"]['rear'] = 'cúil cúil cúil';

$GLOBALS["lang"]['rear-left'] = 'cúil ar chlé';

$GLOBALS["lang"]['rear-right'] = 'cúil-ceart';

$GLOBALS["lang"]['regex'] = 'riachtanais uisce: measartha';

$GLOBALS["lang"]['release'] = 'scaoileadh saor';

$GLOBALS["lang"]['removed from display, but has been set'] = 'a bhaint as taispeáint, ach tá leagtha';

$GLOBALS["lang"]['reserved'] = 'forchoimeádta';

$GLOBALS["lang"]['right'] = 'ceart go leor';

$GLOBALS["lang"]['rights) you can click on the field value to edit it.'] = 'cearta) is féidir leat cliceáil ar an luach réimse a chur in eagar air.';

$GLOBALS["lang"]['role'] = 'Ról na Gaeilge';

$GLOBALS["lang"]['room'] = 'seomra folctha';

$GLOBALS["lang"]['row'] = 'sraith';

$GLOBALS["lang"]['service failed to start due to the following error'] = 'theip ar sheirbhís tosú mar gheall ar an earráid seo a leanas';

$GLOBALS["lang"]['so Open-AudIT knows to restrict your query to the appropriate Orgs.'] = 'mar sin Open-AudIT fhios a shrianadh do cheist chuig na Orgs cuí.';

$GLOBALS["lang"]['stand-alone'] = 'foirm duille: líneach';

$GLOBALS["lang"]['standard'] = 'caighdeán caighdeánach';

$GLOBALS["lang"]['starts with'] = 'Tosaíonn le';

$GLOBALS["lang"]['storage'] = 'stóráil stórála';

$GLOBALS["lang"]['subnet'] = 'subnet';

$GLOBALS["lang"]['table'] = 'tábla tábla tábla tábla';

$GLOBALS["lang"]['table and insert the original rows.'] = 'tábla agus cuir isteach na sraitheanna bunaidh.';

$GLOBALS["lang"]['team'] = 'foireann foirne';

$GLOBALS["lang"]['text. The first is the array index and should be left as-is. The index is used in the templates to lookup the translated text.'] = 'téacs. Is é an chéad an t-innéacs eagar agus ba chóir a fhágáil mar-is. Úsáidtear an t-innéacs sna teimpléid chun an téacs aistrithe a chuardach.';

$GLOBALS["lang"]['then clicking on the details button for the table.'] = 'ansin cliceáil ar an gcnaipe sonraí don tábla.';

$GLOBALS["lang"]['then clicking on the details button for the table. Device details are stored in the'] = 'ansin cliceáil ar an gcnaipe sonraí don tábla. Stóráiltear sonraí feistí sa';

$GLOBALS["lang"]['timestamp'] = 'taiseachas aeir: fliuch';

$GLOBALS["lang"]['to'] = 'go dtí';

$GLOBALS["lang"]['to create an item of this type'] = 'a chruthú mír den chineál seo';

$GLOBALS["lang"]['to the URL, you will get the full database entry, including all component tables, of a given device.'] = 'leis an URL, beidh tú a fháil ar an iontráil bunachar sonraí iomlán, lena n-áirítear gach tábla a chomhdhéanann í, de gléas ar leith.';

$GLOBALS["lang"]['to the user'] = 'chuig an úsáideoir';

$GLOBALS["lang"]['top'] = 'barr barr barr';

$GLOBALS["lang"]['top secret - Military / Government classification. Disclosure would cause exceptionally grave danger to national security.

secret - Military / Government classification. Disclosure would cause serious damage to national security.

confidential - Military / Government and Private Sector classification. Data that is confidential includes trade secrets, intellectual data, application programming code, and other data that could seriously affect the organization if unauthorized disclosure occurred. Data at this level would be available only to personnel in the organization whose work needs, or is directly related to, the accessed data. Access to confidential data usually requires authorization for each access.

private - Private Sector classification. Data that is private includes any information related to personnel, including human resources records, medical records, and salary information, that is used only within the organization.

sensitive - Military / Government and Private Sector classification. Data that is sensitive includes organizational financial information and requires extra measures to ensure its CIA and accuracy. Disclosure might harm national security.

public - Private Sector classification. Public data is data that is generally shared with the public and would not cause a negative impact on the organization. Examples of public data include how many people work in the organization and what products an organization manufactures or sells.

unclassified - Military / Government classification. Any information that can generally be distributed to the public without any threat to national interest.

unassigned - The default until set.'] = 'rún barr - aicmiú Míleata / Rialtais. Bheadh nochtadh ina chúis le baol tromchúiseach don tslándáil náisiúnta.

rún - aicmiú Míleata / Rialtais. Bheadh nochtadh ina chúis le damáiste tromchúiseach don tslándáil náisiúnta.

aicmiú na hEarnála Míleata / Rialtais agus Príobháideacha faoi rún. Sonraí atá faoi rún Áirítear rúin trádála, sonraí intleachtúil, cód clárúcháin iarratais, agus sonraí eile a d\'fhéadfadh difear mór don eagraíocht má tharla nochtadh neamhúdaraithe. Ní bheadh sonraí ag an leibhéal seo ar fáil ach do phearsanra san eagraíocht a bhfuil riachtanais oibre acu, nó a bhfuil baint dhíreach aige leis na sonraí rochtana. De ghnáth, éilíonn rochtain ar shonraí rúnda údarú do gach rochtain.

aicmiú na hEarnála príobháidí. Áirítear le sonraí atá príobháideach aon fhaisnéis a bhaineann le pearsanra, lena n-áirítear taifid acmhainní daonna, taifid leighis, agus faisnéis tuarastail, a úsáidtear ach amháin laistigh den eagraíocht.

aicmiú na hEarnála Míleata / Rialtais agus Príobháideacha. Áirítear sonraí atá íogair faisnéis airgeadais eagrúcháin agus éilíonn bearta breise a chinntiú a CIA agus cruinneas. D’fhéadfadh nochtadh dochar a dhéanamh don tslándáil náisiúnta.

poiblí - aicmiú na hEarnála príobháidí. Is sonraí poiblí atá roinnte go ginearálta leis an bpobal agus ní bheadh tionchar diúltach ar an eagraíocht. I measc na samplaí de shonraí poiblí cé mhéad duine a oibríonn san eagraíocht agus cad táirgí a dhéanann eagraíocht nó a dhíolann.

aontaithe - aicmiú Míleata / Rialtais. Aon fhaisnéis is féidir a dháileadh go ginearálta ar an bpobal gan aon bhagairt ar leas náisiúnta.

unassigned - An réamhshocraithe go dtí a leagtar.';

$GLOBALS["lang"]['traffic'] = 'tráchtaireacht tráchta';

$GLOBALS["lang"]['true'] = 'fíor fíor';

$GLOBALS["lang"]['true or false (in JSON context)'] = 'fíor nó bréagach (i gcomhthéacs JSON)';

$GLOBALS["lang"]['unallocated'] = 'unallocated';

$GLOBALS["lang"]['unauthorised'] = 'free';

$GLOBALS["lang"]['unchanged'] = 'cineál gas: in airde';

$GLOBALS["lang"]['unknown'] = 'taiseachas aeir: fliuch';

$GLOBALS["lang"]['unmanaged'] = 'taiseachas aeir: fliuch';

$GLOBALS["lang"]['unused'] = 'neamhúsáidte';

$GLOBALS["lang"]['update'] = 'thabhairt cothrom le dáta';

$GLOBALS["lang"]['uses the data collected from your devices and matches the software installed with the value provided, it counts the matches calculates how many licenses have been used and how many are left. It allows the use of wildcards on the <i>match string</i> field which matches the software.name attribute.'] = 'Úsáideann na sonraí a bailíodh ó do feistí agus oireann na bogearraí suiteáilte leis an luach ar fáil, chomhaireamh sé na cluichí ríomhann cé mhéad ceadúnas a úsáideadh agus cé mhéad atá fágtha. Ceadaíonn sé úsáid a bhaint as cártaí fiáine ar na <i>mheaitseáil teaghrán</i> réimse a oireann na bogearraí. tréith ainm.';

$GLOBALS["lang"]['using the main menu items.'] = 'ag baint úsáide as na príomh míreanna roghchlár.';

$GLOBALS["lang"]['valid'] = 'bailí';

$GLOBALS["lang"]['version'] = 'leagan leagan';

$GLOBALS["lang"]['virtualisation'] = 'Eochairfhocal virtual';

$GLOBALS["lang"]['warning'] = 'rabhadh';

$GLOBALS["lang"]['web'] = 'web development';

$GLOBALS["lang"]['with Local and Remote access permissions set.'] = 'le ceadanna rochtana áitiúla agus cianda leagtha.';

$GLOBALS["lang"]['with devices::update permission.'] = 'le feistí:: cead cothrom le dáta.';

$GLOBALS["lang"]['with the Sign-On Redirect URI being'] = 'leis an URI Comharthaí-Ar Atreorú á';

$GLOBALS["lang"]['with the intention of providing simple and intuitive access in a manner familiar to developers. In addition to this API, the web interface will use the same request format and supply some additional actions (eg: HTML forms for creating items).'] = 'le hintinn rochtain shimplí agus iomasach a sholáthar ar bhealach atá eolach ar fhorbróirí. Chomh maith leis an API, úsáidfidh an comhéadan gréasáin an fhormáid iarratais chéanna agus soláthróidh sé roinnt gníomhartha breise (m.sh.: foirmeacha HTML chun míreanna a chruthú).';

$GLOBALS["lang"]['yes'] = 'cineál gas: in airde';

$GLOBALS["lang"]['you do not require a HighCharts license to use Firstwave products. License'] = 'ní gá duit ceadúnas HighCharts a úsáid táirgí Firstwave. Ceadúnas Madraí ar Líne';

$GLOBALS["lang"]['you will assign any found devices to that Org or Location.'] = 'beidh tú a shannadh aon feistí le fáil go Org nó Suíomh.';

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

