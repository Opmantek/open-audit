<?php
$GLOBALS["lang"][' Default, currently '] = ' Numatyta, šiuo metu ';

$GLOBALS["lang"][' If something does not work as expected, your first thing to do is check the logs.'] = ' Jei kas nors neveikia taip, kaip tikėtasi, jūsų pirmasis dalykas padaryti yra patikrinti rąstų.';

$GLOBALS["lang"][' is now supported with a language file. To change your user to use this language, click '] = ' dabar palaiko kalbos failą. Norėdami pakeisti vartotoją šia kalba, spustelėkite ';

$GLOBALS["lang"][' seconds'] = ' sekundės';

$GLOBALS["lang"][', but will not need to remember a separate set of logon credentials.'] = ', bet nereikės prisiminti atskirą registracijos įgaliojimų rinkinį.';

$GLOBALS["lang"][', of which we supply over thirty as a default set. Professional users cannot alter these, but an Enterprise user has complete customisation abilities - including creating your own.'] = ', iš kurių mes tiekiame daugiau nei trisdešimt kaip numatytasis rinkinys. Profesionalūs vartotojai negali pakeisti šių, bet Enterprise vartotojas turi visiškai pritaikyti gebėjimus - įskaitant kurti savo.';

$GLOBALS["lang"][', you <i>must</i> be using https on your Open-AudIT server to use Entra for Auth. Please configure Apache to use <strong>https</strong> before configuring Entra for auth.'] = ', tu <i>turi</i> naudoti https savo Open- AudIT serveryje naudoti Entra Auth. @ info: tooltip <strong>https</strong> prieš konfigūruojant Entrą.';

$GLOBALS["lang"]['. To enable this, edit the configuration item for '] = '. Norėdami tai atlikti, redaguokite konfigūracijos elementą ';

$GLOBALS["lang"]['10 Minutes'] = '10 minučių';

$GLOBALS["lang"]['15 Minutes'] = '15 minučių';

$GLOBALS["lang"]['30 Minutes'] = '30 minučių';

$GLOBALS["lang"]['5 Minutes'] = '5 Protokolai';

$GLOBALS["lang"]['93 controls grouped into organizational, people, physical, and technological categories'] = '93 valdikliai suskirstyti į organizacines, žmonių, fizinių ir technologinių kategorijų';

$GLOBALS["lang"]['<br> <strong>NOTE</strong> - You are accessing this URL from the local Open-AudIT server. The downloaded script will not be able to submit when run on any other machine. If you need to audit other machines, please download the script from any remote machine, not using a browser on the Open-AudIT server itself.'] = '<br/><strong>PASTABA</strong> - Jūs pasiekiate šį URL iš vietinio Open- AudIT serverio. Atsisiųstas scenarijus negalės pateikti, kai veiks bet kurioje kitoje mašinoje. Jei jums reikia atlikti kitų mašinų auditą, atsisiųskite scenarijų iš bet kurios nuotolinės mašinos, nenaudodami naršyklės pačiame Open- AudIT serveryje.';

$GLOBALS["lang"]['<p></p>'] = '<p></p>';

$GLOBALS["lang"]['<p><strong class="text-danger">NOTE</strong> - You must have working SSH or SSH Key credentials to execute benchmarks upon a target device.</p>'] = '<p><strong class="text-danger">PASTABA</strong> - Jūs turite turėti darbo SSH arba SSH Pagrindiniai įgaliojimai vykdyti lyginamuosius indeksus tikslinės prietaisas.</p>';

$GLOBALS["lang"]['<p><strong>Baseline</strong> - The overarching document that contains the baseline definition and the individual policy tests.<br> <br> <strong>Policies</strong> - The individual tests contained within a Baseline. Each test is for a specific item. An example would be testing for SSH version 1.2.3.<br> <br> <strong>Details</strong> - Baselines can compare netstat ports, users and software.<br> <br> <strong>Software</strong> - To compare software we check the name and version. Because version numbers are not all standardised in format, when we receive an audit result we create a new attribute called software_padded which we store in the database along with the rest of the software details for each package. For this reason, baselines using software policies will not work when run against a device that has not been audited by 1.10 (at least). Software policies can test against the version being "equal to", "greater than" or "equal to or greater than".<br> <br> <strong>Netstat Ports</strong> - Netstat Ports use a combination of port number, protocol and program. If all are present the policy passes.<br> <br> <strong>Users</strong> - Users work similar to Netstat Ports. If a user exists with a matching name, status and password details (changeable, expires, required) then the policy passes.<br> <br> </p>'] = '<p><strong>Pradinis</strong> - Bendras dokumentas, kuriame yra pagrindinis apibrėžimas ir atskirų politikos testų.<br/> <br/> <strong>Politika</strong> - Individualūs tyrimai, esantys prieš pradedant tyrimą. Kiekvienas bandymas skirtas konkrečiam elementui. Pavyzdys būtų SSH 1.2.3 versijos bandymai.<br/> <br/> <strong>Išsami informacija</strong> - Pagrindai gali palyginti tinklo prievadus, vartotojus ir programinę įrangą.<br/> <br/> <strong>Programinė įranga</strong> - Norėdami palyginti programinę įrangą, mes patikrinti pavadinimą ir versiją. Nes versijų numeriai yra ne visi standartizuoti formatu, kai mes gauname audito rezultatą mes sukurti naują atributą, vadinamą programinės įrangos _ pided, kurį mes saugome duomenų bazėje kartu su programinės įrangos detales kiekvieno paketo poilsio. Dėl šios priežasties, pagrindas naudojant programinės įrangos politiką nebus veiksminga, kai veikia prieš prietaisą, kuris nebuvo audituotas 1.10 (bent). Programinės įrangos taisyklės gali patikrinti, ar versija yra "lygi", "didesnė" arba "lygi ar didesnė".<br/> <br/> <strong>Netstat prievadai</strong> - Netstat Ports naudoti uosto numerį, protokolas ir programa derinys. Jei visi yra pateikti politika eina.<br/> <br/> <strong>Naudotojai</strong> - Vartotojai dirba panašus į Netstat Ports. Jei vartotojas yra su atitikimo pavadinimą, statusą ir slaptažodį duomenis (keičiamų, baigiasi, reikia) tada politika eina.<br/> <br/> </p>';

$GLOBALS["lang"]['<p>A location is a physical address that can have devices associated with it.<br> <br>You can assign it coordinates (lat/long) and if there are devices assigned, the location will appear on the Open-AudIT Enterprise map.<br> <br></p>'] = '<p>Vieta yra fizinis adresas, kuris gali turėti prietaisų, susijusių su juo.<br/> <br/>Jūs galite priskirti ją koordinates (Platuma / ilgas) ir jei yra įrenginių priskirtas, vieta bus rodomas Open- AudIT Enterprise žemėlapyje.<br/> <br/></p>';

$GLOBALS["lang"]['<p>A network is derived from discovery entries and device attributes.<br> <br></p>'] = '<p>Tinklas yra kilęs iš atradimų įrašų ir įrenginio atributų.<br/> <br/></p>';

$GLOBALS["lang"]['<p>A summary will display a list of items, grouped by the distinct values of the attribute specified by the <code>table</code> and <code>column</code> attributes.<br> <br>When a summary is executed, the result will be a list of distinct values for that <code>table</code> and <code>column</code>. There will be links on the values that allow the user to see the matching devices.<br> <br>If the attribute of <code>extra_columns</code> is populated, the resulting page will contain these columns in addition to the standard device columns.<br> <br></p>'] = '<p>Santraukoje bus rodomas elementų sąrašas, sugrupuotas pagal skirtingas reikšmes atributo nurodyta <code>table</code> ir <code>column</code> atributai.<br/> <br/>Kai santrauka yra vykdoma, rezultatas bus atskirų verčių sąrašą, kad <code>table</code> ir <code>column</code>. Bus nuorodos į vertes, kurios leis vartotojui pamatyti atitikimo įrenginius.<br/> <br/>Jei atributas <code>extra_columns</code> yra apgyvendintas, gaunamas puslapis bus įtraukti šiuos stulpelius be standartinio prietaiso stulpelius.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Agents let you audit PCs without a discovery. Install the agent and it will check-in with the server each day and audit itself. It does not matter if your computers are firewalled, audit data will still appear in Open-AudIT.</p><p>When testing <strong>if</strong> an agent should perform actions, all three tests must pass (if the test is set). <strong>Then</strong> the actions are taken.</p>'] = '<p>Agentai leidžia jums audituoti kompiuterius be atradimo. Įdiekite agentas ir jis bus registruojami- su serveriu kiekvieną dieną ir pati auditą. Nesvarbu, ar jūsų kompiuteriai yra ugniasienės, audito duomenys vis dar bus rodomas Open- AudIT.</p><p>Kai atliekami bandymai <strong>jei</strong> agentas turėtų atlikti veiksmus, visi trys bandymai turi praeiti (jei bandymas yra nustatytas). <strong>Tada</strong> imamasi veiksmų.</p>';

$GLOBALS["lang"]['<p>Applications are defined by you, the user and stored for Open-AudIT to use and associate with devices.<br> <br></p>'] = '<p>Programos yra apibrėžtos jums, vartotojas ir saugomi Open- AudIT naudoti ir susieti su prietaisais.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Attributes are stored for Open-AudIT to use for particular fields.</p>'] = '<p>Požymiai saugomi Open- AudIT naudojimui tam tikruose laukuose.</p>';

$GLOBALS["lang"]['<p>Being able to determine which machines are configured the same is a major part of systems administration and auditing &ndash; and now reporting on that will be made simple and automated. Once you define your baseline it will automatically run against a set of devices on a predetermined schedule. The output of these executed baselines will be available for web viewing, importing into a third party system or even as a printed report.<br> <br> Baselines enable you to combine audit data with a set of attributes you have previously defined (your baseline) to determine compliance of devices.<br> <br> For example - you might create a baseline from a device running Centos 6 which acts as one of your apache servers in a cluster. You know this particular server is configured just the way you want it but you are unsure if other servers in the cluster are configured exactly the same. Baselines enables you to determine this.<br> <br> </p>'] = '<p>Gebėjimas nustatyti, kurios mašinos yra sukonfigūruotas tas pats yra didelė dalis sistemų administravimo ir audito - ir dabar ataskaitų apie tai bus paprasta ir automatizuota. Kai nustatysite savo bazinę liniją, ji automatiškai veiks prieš prietaisų rinkinį pagal iš anksto nustatytą grafiką. Šių atliktų bazinių linijų produkcija bus prieinama interneto peržiūrai, importui į trečiosios šalies sistemą ar net kaip spausdinta ataskaita.<br/> <br/> Pagrindai leidžia jums sujungti audito duomenis su anksčiau nustatytų požymių rinkiniu (jūsų bazinis), siekiant nustatyti, ar prietaisai atitinka reikalavimus.<br/> <br/> Pavyzdžiui - galite sukurti bazinę liniją iš įrenginio, valdomo Centos 6, kuris veikia kaip vienas iš jūsų Apache serverių klasteryje. Jūs žinote, kad šis konkretus serveris yra sukonfigūruotas taip, kaip norite, bet jūs nesate tikri, ar kiti serveriai klasteris yra sukonfigūruoti lygiai taip pat. Pagrindai leidžia jums nustatyti tai.<br/> <br/> </p>';

$GLOBALS["lang"]['<p>Clusters are stored in Open-AudIT to associate devices to better record, manage and estimate licensing costs.<br> <br></p>'] = '<p>Grupės yra saugomi Open- AudIT susieti įrenginius geriau įrašyti, valdyti ir įvertinti licencijavimo išlaidas.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Components is a generic term used for the tables that store the attributes for a device. Those tables are: access_point, arp, bios, certificate, cli_config, disk, dns, file, ip, license, log, memory, module, monitor, motherboard, netstat, network, nmap, optical, pagefile, partition, policy, print_queue, processor, radio, route, san, scsi, server, server_item, service, share, software, software_key, sound, task, usb, user, user_group, variable, video, vm, windows.</p><p> In addition we class the following tables also as device related: application, attachment, cluster, credential, image.</p>'] = '<p>Komponentai yra bendras terminas, naudojamas lentelėse, kuriose saugomos prietaiso savybės. Šios lentelės: prieiga _ taškas, arp, bios, sertifikatas, cli _ config, diskas, dns, failas, ip, licencija, žurnalas, atmintis, modulis, monitorius, plokštė, netstat, tinklas, nmap, optinis, paagefile, skaidymas, politika, print _ queue, procesorius, radijas, maršrutas, san, scsi, serveris, serveris _ item, servisas, dalis, programinė įranga, programinė įranga _ key, garsas, užduotis, usb, naudotojas, naudotojas, naudotojas _ group, kintamasis, vaizdo, vm, langai.</p><p> Be to, mes klasėje šias lenteles taip pat kaip prietaiso: taikymo, tvirtinimo, klasterio, pasitikėjimo, vaizdas.</p>';

$GLOBALS["lang"]['<p>Credentials are encrypted when stored in the database.<br> <br>When a Discovery is run, a device has its credentials retrieved and tested for connection first (from the <code>credential</code> table). If these fail, then credentials associated with the given Org <code>credentials.org_id</code> is also tested against the device. Working credentials are stored at an individual device level in the credential table (note - no "s" in the table name).<br> <br>SSH keys are tested before SSH username / password. When testing SSH, credentials will also be marked as working with sudo or being root.<br> <br>For ease of use, Windows passwords should not contain a single or double quote. This is a remote WMI limitation, not an Open-AudIT limitation.<br> <br></p>'] = '<p>Kreditai yra užšifruoti, kai saugomi duomenų bazėje.<br/> <br/>Kai Discovery veikia, įrenginys turi savo duomenis gauti ir išbandyti ryšį pirmas (iš <code>credential</code> lentelė). Jei jie nepavyksta, tada įgaliojimai, susiję su pateikta Org <code>credentials.org_id</code> taip pat išbandytas pagal prietaisą. Darbiniai požymiai yra saugomi atskiro įrenginio lygiu patikimumo lentelėje (pastaba - ne "s" lentelės pavadinime).<br/> <br/>SSH klavišai yra išbandyti prieš SSH naudotojo vardą / slaptažodį. Kai bandymai SSH, įgaliojimai taip pat bus pažymėti kaip darbo sudo arba šaknis.<br/> <br/>Kad būtų lengviau naudoti, Windows slaptažodžiai neturėtų turėti vienos ar dvigubos citatos. Tai nuotolinis WMI apribojimas, o ne Open- AudIT apribojimas.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Credentials are used to access devices.<br> <br>Configuring credentials should be one of the first things you do after installing Open-AudIT.<br> <br></p>'] = '<p>Kreditai naudojami prieigai prie įrenginių.<br/> <br/>Nustatymas įgaliojimai turėtų būti vienas iš pirmųjų dalykų, kuriuos jūs darote po įdiegimo Open- AudIT.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Define your racks and assign devices into their positions. You already have your devices in Open-AudIT and you know your locations. Open-AudIT extends this to allow you to create a rack and assign devices to it. Open-AudIT will even provide a visualisation of the rack and the devices contained within. If you provide a device picture, that picture will be used in the visualisation. You can look at the rack on the screen and see the same items you would see if you were standing in front of it.<br> <br></p>'] = '<p>Nustatykite savo lentynos ir priskirti prietaisus į savo pozicijas. Jūs jau turite savo prietaisus Open- AudIT ir žinote savo vietas. Open- AudIT išplečia tai leidžia jums sukurti stovą ir priskirti įrenginius. Open- AudIT bus net suteikti iš spintos ir prietaisų vizualizacija. Jei pateiksite prietaiso nuotrauką, ta nuotrauka bus naudojama vizualizacijai. Galite pažvelgti į roko ekrane ir pamatyti tuos pačius elementus, kuriuos pamatytumėte, jei stovėjote priešais jį.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Devices on your network need to be managed. But how do you keep your records up to date? A spreadsheet - defintley not. That will be out of date in hours, if not days. Why manually try to keep up. Use Open-AudIT to automatically scan your networks and record your devices - manufacturer, model, serial and more than 100 other attributes. Full lists of software, services, disks, open ports, users, etc. Automatically see if an attribute has been added, removed or changed.<br> <br>Once Open-AudIT is setup, you can sit back and relax. Have change reports emailed to you on a schedule, for example - what new devices did we discover this week? What new software was installed this week? Were there any hardware changes last month?<br> <br>Expand on the stored fields easily with your own custom attributes.<br> <br>Even add devices that are not connected to your network or those devices your Open-AudIT server cannot reach.<br> <br>Computers, switches, routers, printers or any other device on your network - Open-AudIT can audit them all.<br> <br></p>'] = '<p>Įrenginiai tinkle turi būti valdomi. Bet kaip tvarkyti įrašus? Lentelė - apibrėžtis ne. Tai pasibaigs valandomis, jei ne dienomis. Kodėl rankiniu būdu pasistenkite neatsilikti. Naudokite Open- AudIT automatiškai nuskaityti savo tinklus ir įrašyti savo įrenginius - gamintojas, modelis, serijos ir daugiau nei 100 kitų požymių. Išsamus programinės įrangos, paslaugų, diskų, atvirų uostų, vartotojų ir t. t. Automatiškai pamatyti, ar atributas buvo pridėtas, pašalintas ar pakeistas.<br/> <br/>Kai Open- AudIT yra nustatyti, galite sėdėti ir atsipalaiduoti. Ar pakeitimų ataskaitos buvo atsiųstos jums į tvarkaraštį, pavyzdžiui - kokius naujus įrenginius mes atradome šią savaitę? Kokia nauja programinė įranga buvo įdiegta šią savaitę? Ar praeitą mėnesį buvo kokių nors techninės įrangos pakeitimų?<br/> <br/>Išplėsti saugomus laukus lengvai su savo pasirinktiniais atributais.<br/> <br/>Net pridėkite įrenginių, kurie nėra prijungti prie jūsų tinklo, arba įrenginių, kurių Open- AudIT serveris nepasiekia.<br/> <br/>Kompiuteriai, jungikliai, maršrutizatoriai, spausdintuvai ar bet kuris kitas įrenginys jūsų tinkle - Open- AudIT gali juos visus patikrinti.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Discoveries are at the very heart of what Open-AudIT does.<br> <br>How else would you know "What is on my network?"<br> <br>Discoveries are prepared data items that enable you to run a discovery upon a network in a single click, without entering the details of that network each and every time.<br> <br></p>'] = '<p>Discoversies yra tai, ką Open- AudIT daro pačioje širdyje.<br/> <br/>Kaip kitaip žinotumėte "Kas yra mano tinkle?"<br/> <br/>Discoversies yra paruošti duomenų elementai, kurie leidžia jums paleisti atradimą tinkle vienu paspaudimu, neįvedant to tinklo detales kiekvieną kartą.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Discovery Options are a global setting changed in the <a href="../configuration?configuration.name=discovery_default_scan_option">configuration</a>. If you have an Open-AudIT Enterprise license these are settable per discovery and in addition futher customizable as required. Discovery Options are as follows (including an indicitave time to scan an individual IP):<br/><br><strong>UltraFast</strong>: <i>1 second</i>. Scan only the ports that Open-AudIT needs to use to talk to the device and detect an IOS device (WMI, SSH, SNMP, Apple Sync). An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is not considered open. Device must respond to an Nmap ping. Use aggressive timing.<br><br/><strong>SuperFast</strong>: <i>5 seconds</i>. Scan the top 10 TCP and UDP ports, as well as port 62078 (Apple IOS detection). An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is not considered open. Device must respond to an Nmap ping. Use aggressive timing.<br/><br/><strong>Fast</strong>: <i>40 seconds</i>. Scan the top 100 TCP and UDP ports, as well as port 62078 (Apple IOS detection). An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is not considered open. Device must respond to an Nmap ping. Use aggressive timing.<br/><br/><strong>Medium (Classic)</strong>: <i>90 seconds</i>. As close to a traditional Open-AudIT scan as we can make it. Scan the top 1000 TCP ports, as well as 62078 (Apple IOS detection) and UDP 161 (SNMP). An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is considered open (and will trigger device detection). Devices are scanned regardless of a response to an Nmap ping. Use aggressive timing.<br/><br/><strong>Medium</strong>: <i>100 seconds</i>. Scan the top 1000 TCP and top 100 UDP ports, as well as port 62078 (Apple IOS detection). An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is not considered open. Device must respond to an Nmap ping. Use aggressive timing.<br/><br/><strong>Slow</strong>: <i>4 minutes</i>. Scan the top 1000 TCP and top 100 UDP ports, as well as port 62078 (Apple IOS detection). Version detection enabled. An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is considered open (and will trigger device detection). Device must respond to an Nmap ping. Use normal timing.<br/><br/><strong>UltraSlow</strong>: <i>20 minutes</i>. Not recommended. Scan the top 1000 TCP and UDP ports, as well as port 62078 (Apple IOS detection). Devices are scanned regardless of a response to an Nmap ping. Version detection enabled. An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is considered open (and will trigger device detection). Use polite timing.<br/><br/><strong>Custom</strong>: <i>Unknown time</i>. When options other than as set by a standard discovery preset are altered.<br><br></p>'] = '<p>Discovery Galimybės yra pasaulinė aplinka pasikeitė <a href="../configuration?configuration.name=discovery_default_scan_option">konfigūracija</a>. Jei turite Open-AudIT Enterprise licenciją, tai yra nustatyti per atradimą ir papildomai toliau pritaikoma, kaip reikalaujama. Discovery Galimybės yra tokios (įskaitant indiktavimosi laikas nuskaityti individualų IP):<br/><br/><strong>UltraFast</strong>: <i>1 sekundė</i>. Skaitykite tik prievadus, kuriuos Open- AudIT reikia naudoti pokalbiui su prietaisu ir IOS įrenginio aptikimui (WMI, SSH, SNMP, Apple Sync). An <code>open|filtered</code> uostas laikomas atviru. A <code>filtered</code> uostas nėra laikomas atviru. Įrenginys turi reaguoti į Nmap ping. Naudokite agresyvų laiką.<br/><br><strong>SuperFast</strong>: <i>5 sekundės</i>. Skaitykite Top 10 TCP ir UDP prievadus, taip pat prievadą 62078 (Apple IOS nustatymas). An <code>open|filtered</code> uostas laikomas atviru. A <code>filtered</code> uostas nėra laikomas atviru. Įrenginys turi reaguoti į Nmap ping. Naudokite agresyvų laiką.<br><br/><strong>Greitas</strong>: <i>40 sekundžių</i>. Skaitykite top 100 TCP ir UDP prievadus, taip pat 62078 prievadą (Apple IOS nustatymas). An <code>open|filtered</code> uostas laikomas atviru. A <code>filtered</code> uostas nėra laikomas atviru. Įrenginys turi reaguoti į Nmap ping. Naudokite agresyvų laiką.<br/><br/><strong>Vidutinis (Classic)</strong>: <i>90 sekundžių</i>. Beveik tradicinis Open- AudIT skenuoti, kaip mes galime padaryti. Skaityti viršų 1000 TCP prievadus, taip pat 62078 (Apple IOS aptikimo) ir UDP 161 (SNMP). An <code>open|filtered</code> uostas laikomas atviru. A <code>filtered</code> Prievadas laikomas atviru (ir sukels įrenginio aptikimą). Prietaisai skenuojami nepriklausomai nuo atsako į Nmap ping. Naudokite agresyvų laiką.<br/><br/><strong>Vidutinis</strong>: <i>100 sekundžių</i>. Skaityti viršų 1000 TCP ir top 100 UDP prievadai, taip pat prievadas 62078 (Apple IOS aptikimo). An <code>open|filtered</code> uostas laikomas atviru. A <code>filtered</code> uostas nėra laikomas atviru. Įrenginys turi reaguoti į Nmap ping. Naudokite agresyvų laiką.<br/><br/><strong>Lėtas</strong>: <i>4 minutės</i>. Skaityti viršų 1000 TCP ir top 100 UDP prievadai, taip pat prievadas 62078 (Apple IOS aptikimo). Versijos aptikimas įjungtas. An <code>open|filtered</code> uostas laikomas atviru. A <code>filtered</code> Prievadas laikomas atviru (ir sukels įrenginio aptikimą). Įrenginys turi reaguoti į Nmap ping. Naudokite įprastą laiką.<br/><br/><strong>UltraSlow</strong>: <i>20 minučių</i>. Nerekomenduojama. Skaityti viršų 1000 TCP ir UDP prievadai, taip pat prievadas 62078 (Apple IOS aptikimo). Prietaisai skenuojami nepriklausomai nuo atsako į Nmap ping. Versijos aptikimas įjungtas. An <code>open|filtered</code> uostas laikomas atviru. A <code>filtered</code> Prievadas laikomas atviru (ir sukels įrenginio aptikimą). Naudoti mandagus laikas.<br/><br/><strong>Pasirinkta</strong>: <i>Nežinomas laikas</i>. Kai keičiamos kitos parinktys nei nustatytosios standartiniame paieškos apraše.<br/><br/></br></br></p>';

$GLOBALS["lang"]['<p>Groups are used as simple lists of devices that match the required conditions. If requested using JSON they return a list of <code>devices.id</code> only. If requested using the web interface, they return the standard column attribute list.<br> <br></p>'] = '<p>Grupės naudojamos kaip paprastas sąrašas prietaisų, kurie atitinka reikalaujamas sąlygas. Jei prašoma naudojant JSON, jie grąžina sąrašą <code>devices.id</code> tik. Jei prašoma naudojant Web sąsają su vartotoju, jie grąžina standartinį stulpelio atributų sąrašą.<br/> <br/></p>';

$GLOBALS["lang"]['<p>If the user logging on to Open-AudIT does not have the access to search LDAP (and you are using OpenLDAP), you can use another account which does have this access. Use the <code>ldap_dn_account</code> and <code>ldap_dn_password</code> to configure this.<br> <br><strong>Helpful Documentation</strong><br> <br>
        <a href="/index.php/auth/help">General Auth Help</a><br> <br>
        <a href="/index.php/faq?name=Using Entra for Auth">Using Entra for Auth</a><br> <br>
        <a href="/index.php/faq?name=Using OKTA for Auth">Using OKTA for Auth</a><br> <br>
        <a href="/index.php/faq?name=Troubleshooting LDAP Logins">Troubleshooting LDAP Logins</a><br> <br>
        <a href="/index.php/faq?name=Users, Roles and Orgs">Users, Roles and Orgs</a><br> <br></p>'] = '<p>Jei vartotojas prisijungia prie Open- AudIT neturi prieigos prie paieškos LDAP (ir jūs naudojate OpenLDAP), galite naudoti kitą paskyrą, kuri turi šią prieigą. Vartoti <code>ldap_dn_account</code> ir <code>ldap_dn_password</code> Sukonfigūruoti tai.<br/> <br/><strong>Pagalbos dokumentai</strong><br/> <br/><a href="/index.php/auth/help">General Auth Help</a><br/> <br/><a href="/index.php/faq?name=Using Entra for Auth">Entros naudojimas Autai</a><br/> <br/><a href="/index.php/faq?name=Using OKTA for Auth">OKTA naudojimas Autai</a><br/> <br/><a href="/index.php/faq?name=Troubleshooting LDAP Logins">Comment</a><br/> <br/><a href="/index.php/faq?name=Users, Roles and Orgs">Naudotojai, ritės ir orgai</a><br/> <br/></p>';

$GLOBALS["lang"]['<p>If you add a device type, to display the associated icon you will have to manually copy the .svg formatted file to the directory:<br><em>Linux</em>:/usr/local/open-audit/public/device_images<br><em>Windows</em>: c:\xampp\htdocs\open-audit\device_images<br> <br>If you add a location type, to display the associated icon you will have to manually copy the 32x32px icon to the directory:<br><em>Linux</em>:/usr/local/open-audit/public/images/map_icons<br><em>Windows</em>: c:\xampp\htdocs\open-audit\images\map_icons</p><p>When the <i>resource</i> is a <code>device</code>, valid <i>types</i> are: <code>class</code>, <code>environment</code>, <code>status</code> and <code>type</code>. If the <i>resource</i> is <code>locations</code> or <code>org</code> the only valid <i>type</i> is <code>type</code>. If the <i>resource</i> is a <code>query</code> the only valid <i>type</i> is <code>menu_category</code>.</p>'] = '<p>Jei pridedate įrenginio tipą, norėdami parodyti susijusią piktogramą turėsite rankiniu būdu nukopijuoti .svg suformatuotą failą į katalogą:<br/><em>Linux</em>: / usr / local / open- audit / public / device _ images<br/><em>Langai</em>: c:\ xampp\ htdocs\ open- audit\ device _ images<br/> <br/>Jei pridedate vietovės tipą, norėdami parodyti susijusią piktogramą turėsite rankiniu būdu nukopijuoti 32x32px piktogramą į katalogą:<br/><em>Linux</em>: / usr / local / open- audit / public / images / map _ ikons<br/><em>Langai</em>: c:\ xampp\ htdocs\ open- audit\ images\ map _ piktogramos</p><p>Kai <i>ištekliai</i> is <code>device</code>, galioja <i>rūšys</i> yra: <code>class</code>, <code>environment</code>, <code>status</code> ir <code>type</code>. Jei <i>ištekliai</i> yra <code>locations</code> arba <code>org</code> galioja <i>tipas</i> yra <code>type</code>. Jei <i>ištekliai</i> is <code>query</code> galioja <i>tipas</i> yra <code>menu_category</code>.</p>';

$GLOBALS["lang"]['<p>If you intend to completely audit your cloud machines, do not forget you will also need those credentials saved in Open-AudIT.</p><p>Make sure you allow the correct ports if you are using Microsoft Azure (22 for SSH, etc). Check your Virtual Machine -> Networking rules.<br> <br></p>'] = '<p>Jei ketinate visiškai audituoti savo debesų kompiuteriją, nepamirškite, kad jums taip pat reikės šių Open- AudIT išsaugotų duomenų.</p><p>Įsitikinkite, kad leidžiate teisingus prievadus, jei naudojate Microsoft Azure (22 SSH ir kt.). Patikrinkite savo virtualią mašiną - > Tinklų kūrimo taisyklės.<br/> <br/></p>';

$GLOBALS["lang"]['<p>If you select a List type, the "values" field will be enabled. You should put a comma separated list of selectable values here. These will display in a dropdown box whenever the field is edited.<br> <br>Like most other attributes, Fields can be bulk edited. Use the Bulk Edit function as you normally would and you will see the Fields are available for input.<br> <br>View the device details screen, open the section containing the field and (if you have sufficient access) you can click on the field value to edit it.<br> <br></p>'] = '<p>Jei pasirinksite sąrašo tipą, bus įjungtas "reikšmių" laukas. Jūs turėtumėte įdėti kablelį atskirtų pasirinktų reikšmių sąrašą čia. Jie bus rodomas išskleidžiamajame langelyje, kai laukas redaguojamas.<br/> <br/>Kaip ir dauguma kitų požymių, laukai gali būti urmu redaguoti. Naudokite urmu Redaguoti funkcija, kaip jūs paprastai būtų ir pamatysite laukai yra prieinami įvesties.<br/> <br/>Peržiūrėkite įrenginio informacijos ekraną, atidarykite lauką ir (jei turite pakankamą priėjimą) galite spustelėti lauko reikšmę, kad jį redaguotumėte.<br/> <br/></p>';

$GLOBALS["lang"]['<p>In the ever-changing world of computer security where new vulnerabilities are being discovered and patched every day, enforcing security compliance must be a continuous process. It also needs to include a way to make adjustments to policies, as well as periodic assessment and risk monitoring. The OpenSCAP ecosystem provides tools and customizable policies for a quick, cost-effective and flexible implementation of these processes.</p>'] = '<p>Pernelyg besikeičiančiame kompiuterių saugumo pasaulyje, kuriame kasdien randami ir kaupiami nauji trūkumai, saugumo reikalavimų laikymosi užtikrinimas turi būti nuolatinis procesas. Be to, reikia numatyti galimybę koreguoti politiką, taip pat periodiškai vertinti ir stebėti riziką. OpenSCAP ekosistema suteikia įrankius ir pritaikomas politikos priemones, kad šie procesai būtų greitai, ekonomiškai efektyvūs ir lankstūs.</p>';

$GLOBALS["lang"]['<p>Integrations allow you to setup device selection and schedules for Open-AudIT to talk to external systems.<br> <br></p>'] = '<p>Integravimas leidžia jums nustatyti įrenginių pasirinkimą ir tvarkaraščius Open- AudIT kalbėti su išorinėmis sistemomis.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Microsoft Windows desktop systems have network limitations that may impact the performance of Open-AudIT. The TCP/IP stack limits the number of simultaneous incomplete outbound TCP connection attempts. After the limit is reached, subsequent connection attempts are put in a queue and will be resolved at a fixed rate (10 per second). If too many enter the queue, they may be dropped. And finally, Apache will be restarted by the OS. For this reason, installing Open-AudIT on a Windows desktop operating system is not supported.<br><br>There is nothing wrong with the Open-AudIT code, nor can we do anything to address this issue on Windows client machines.'] = '<p>Microsoft Windows darbastalio sistemos turi tinklo apribojimus, kurie gali turėti įtakos Open- AudIT veiklos. TCP / IP stekas riboja vienu metu nebaigtų išeinančių TCP prijungimo bandymų skaičių. Pasiekus ribą, vėlesni prijungimo bandymai yra įdėti į eilę ir bus išspręsti fiksuota norma (10 per sekundę). Jei per daug patekti į eilę, jie gali būti numestas. Ir pagaliau, Apache bus paleistas OS. Dėl šios priežasties, įdiegti Open- AudIT Windows darbastalio operacinėje sistemoje nepalaikoma.<br/><br/>Nėra nieko blogo su Open- AudIT kodas, nei mes nieko padaryti, kad spręsti šį klausimą Windows kliento mašinos.</p>';

$GLOBALS["lang"]['<p>Nmap timing details are found on the bottom of this linked page <a href="https://nmap.org/book/man-performance.html" target="_blank">https://nmap.org/book/man-performance.html</a>. From that page:<br> <br><em>If you are on a decent broadband or ethernet connection, I would recommend always using -T4 (Aggressive). Some people love -T5 (Insane) though it is too aggressive for my taste. People sometimes specify -T2 (Polite) because they think it is less likely to crash hosts or because they consider themselves to be polite in general. They often do not realize just how slow -T2 really is. Their scan may take ten times longer than a default scan. Machine crashes and bandwidth problems are rare with the default timing options -T3 (Normal) and so I normally recommend that for cautious scanners. Omitting version detection is far more effective than playing with timing values at reducing these problems.</em><footer>Gordon <i>Fyodor</i> Lyon</footer><br> <br></p>'] = '<p>Žemėlapio laiko detalės randamos šio susieto puslapio apačioje <a href="https://nmap.org/book/man-performance.html" target="_blank">https: / / nmap.org / book / man- performance.html</a>. Iš šio puslapio:<br/> <br/><em>Jei esate padoraus plačiajuosčio ryšio ar ethernet ryšio, Aš rekomenduočiau visada naudoti -T4 (Agresyvus). Kai kurie žmonės mėgsta -T5 (Insane) nors tai per agresyvus mano skonį. Žmonės kartais nurodyti -T2 (mandagus), nes jie mano, kad tai yra mažiau tikėtina, kad avarijos šeimininkai arba todėl, kad jie mano, kad patys mandagus apskritai. Jie dažnai nesupranta, kaip lėtai -T2 tikrai yra. Jų skenavimas gali trukti dešimt kartų ilgiau nei numatytasis. Mašinų gedimai ir pralaidumo problemos yra retos su numatytuoju sinchronizavimo parinkčių -T3 (Normalus) ir todėl aš paprastai rekomenduoju, kad atsargūs skaitytuvai. Nepaisyti versijos nustatymo yra daug veiksmingesnis nei žaisti su laiko vertes sumažinti šias problemas.</em><footer>Gordonas <i>Fiodoras</i> Lionas</footer><br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT can be configured to use different methods to authenticate a user and in addition, to create a user account using assigned roles and orgs based on group membership.<br> <br></p>'] = '<p>Open- AudIT gali būti konfigūruotas naudoti skirtingus metodus, siekiant patvirtinti vartotojo tapatybę ir papildomai, sukurti vartotojo sąskaitą, naudojant priskirtas funkcijas ir orgus, remiantis grupės naryste.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT can retrieve details about a file or directory of files and monitor these files for changes as per other attributes in the Open-AudIT database.<br> <br>This feature works out of the box for Linux Open-AudIT servers, but needs a change to the service account name under a Windows Open-AudIT server.<br> <br>Supported clients are Windows and Linux.<br> <br></p>'] = '<p>Open- Aud IT gali gauti informaciją apie failą ar failų katalogą ir stebėti šiuos failus pakeitimus, kaip kitų požymių Open- AudIT duomenų bazėje.<br/> <br/>Ši funkcija veikia iš Linux Open- AudIT serverių dėžutės, bet reikia pakeisti paslaugų sąskaitos pavadinimą pagal Windows Open- AudIT serverį.<br/> <br/>Palaikomi klientai yra Windows ir Linux.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT can retrieve details about a file, ask the native package manager if they are known to it and monitor these files for changes as per other attributes in the Open-AudIT database.<br> <br>Supported clients are Linux only.<br> <br></p>'] = '<p>Open- Aud IT gali gauti informaciją apie failą, paklausti gimtoji paketo tvarkyklę, jei jie yra jai žinomi, ir stebėti šiuos failus pakeitimus, kaip už kitų požymių Open- AudIT duomenų bazėje.<br/> <br/>Palaikomi klientai yra tik Linux \'ai.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT can store information in custom fields that are associated with each device.<br> <br>Once an Additional Field has been created it can be used in queries and groups just like any other attribute in the database.<br> <br></p>'] = '<p>Open- Aud IT gali saugoti informaciją pasirinktuose laukuose, kurie yra susiję su kiekvienu prietaisu.<br/> <br/>Kai papildomas laukas buvo sukurtas, jis gali būti naudojamas užklausose ir grupėse kaip bet kuris kitas požymis duomenų bazėje.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT comes with many queries inbuilt. If you require a specific query and none of the pre-packaged queries fit your needs, it is quite easy to create a new one and load it into Open-AudIT for running.<br> <br></p>'] = '<p>Open- AudIT ateina su daug užklausų nustatytas. Jei jums reikia konkrečią užklausą ir nė vienas iš fasuotų užklausų atitinka jūsų poreikius, tai gana lengva sukurti naują ir įkelti jį į Open- AudIT veikia.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT comes with many summaries inbuilt. If you require a specific summary and none of the pre-packaged summaries fit your needs, it is quite easy to create a new one and load it into Open-AudIT for running.<br> <br></p>'] = '<p>Open- AudIT ateina su daug santraukų nustatytas. Jei jums reikia konkrečios santraukos ir nė viena iš anksto supakuotų santraukų atitinka jūsų poreikius, tai gana lengva sukurti naują ir įkelti jį į Open- AudIT veikia.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT is supported by FirstWave with an amazing level of support. If you prefer an active community of support givers, theres that as well. Where else can you talk directly to the developers and get a response within 24 hours? Just try that with other products! Amazing support. Full stop. You need support, we provide support. No ifs or buts. Great support. Period.<br> <br></p>'] = '<p>Open- AudIT palaiko FirstWave su nuostabų lygį paramos. Jei norite aktyvaus bendruomenės paramos davėjų, tai taip pat, kad. Kur dar galite pasikalbėti tiesiogiai su kūrėjais ir gauti atsakymą per 24 valandas? Tiesiog pabandykite tai su kitais produktais! Nuostabi parama. Visiškas sustojimas. Jums reikia paramos, mes teikiame paramą. Nėra if ar buts. Puiki parama. Laikotarpis.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT provides multi-tenancy out of the box!<br> <br>Orgs (organisations) in Open-AudIT are a key item. A user has a primary Org as well as a list of Orgs they can access. A user combines this with a list of assigned "Roles" that define what actions they can take on items assigned to the Orgs they have access to. The combination of a users "orgs" and "roles" define what they can and cannot do within Open-AudIT.<br> <br>Most items in Open-AudIT are assigned to an Org. Devices, Locations, Networks, etc.<br> <br>Orgs can have child Orgs. Think of an organisational chart (tree) structure. If a user has access to a specific Org, they also have access to that Orgs descendants. For more information, see this <a href="/index.php/faq?name=Users, Roles and Orgs">FAQ</a>.</p>'] = '<p>Open- AudIT suteikia multi- tenancy iš dėžutės!<br/> <br/>Orgai (organizacijos) Open- AudIT yra pagrindinis dalykas. Vartotojas turi pirminį Org, taip pat sąrašą Orgs jie gali pasiekti. Vartotojas sujungia tai su paskirtųjų "Roles" sąrašą, kuris nustato, kokių veiksmų jie gali imtis dėl elementų priskirtas į Orgs jie turi prieigą. Vartotojų "orgs" ir "vaidmenys" derinys apibrėžia, ką jie gali ir negali padaryti per Open- AudIT.<br/> <br/>Dauguma Open- AudIT elementų yra priskirti Org. Įrenginiai, Vietos, Tinklai ir tt<br/> <br/>Orgai gali turėti vaikų Orgų. Pagalvokite apie organizacinės diagramos (medis) struktūrą. Jei vartotojas turi prieigą prie konkretaus Org, jie taip pat turi prieigą prie, kad Orgs palikuonys. Daugiau informacijos rasite <a href="/index.php/faq?name=Users, Roles and Orgs">DUK</a>.</p>';

$GLOBALS["lang"]['<p>Open-AudIT provides multi-tenancy out of the box!<br> <br>Orgs (organisations) in Open-AudIT are a key item. A user has a primary Org as well as a list of Orgs they can access. A user combines this with a list of assigned "Roles" that define what actions they can take on items assigned to the Orgs they have access to. The combination of a users "orgs" and "roles" define what they can and cannot do within Open-AudIT.<br> <br>Most items in Open-AudIT are assigned to an Org. Devices, Locations, Networks, etc.<br> <br>Orgs can have child Orgs. Think of an organisational chart (tree) structure. If a user has access to a specific Org, they also have access to that Orgs descendants.</p>'] = '<p>Open- AudIT suteikia multi- tenancy iš dėžutės!<br/> <br/>Orgai (organizacijos) Open- AudIT yra pagrindinis dalykas. Vartotojas turi pirminį Org, taip pat sąrašą Orgs jie gali pasiekti. Vartotojas sujungia tai su paskirtųjų "Roles" sąrašą, kuris nustato, kokių veiksmų jie gali imtis dėl elementų priskirtas į Orgs jie turi prieigą. Vartotojų "orgs" ir "vaidmenys" derinys apibrėžia, ką jie gali ir negali padaryti per Open- AudIT.<br/> <br/>Dauguma Open- AudIT elementų yra priskirti Org. Įrenginiai, Vietos, Tinklai ir tt<br/> <br/>Orgai gali turėti vaikų Orgų. Pagalvokite apie organizacinės diagramos (medis) struktūrą. Jei vartotojas turi prieigą prie konkretaus Org, jie taip pat turi prieigą prie, kad Orgs palikuonys.</p>';

$GLOBALS["lang"]['<p>Quickly view the status of devices on your network.<br> <br></p>'] = '<p>Greitai peržiūrėti įrenginių būseną tinkle.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Roles in Open-AudIT are a key item. A user has a primary Org as well as a list of Orgs they can access. A user combines this with a list of assigned Roles that define what actions they can take on items assigned to the Orgs they have access to. The combination of a users "orgs" and "roles" define what they can and cannot do within Open-AudIT.<br> <br>
        Get the complete Open-AudIT Enterprise experience. Creating roles allows fine grained control over what your users can do within Open-AudIT.<br> <br>
        The primary method for authorisation (what a user can do) is based on the users Roles. Default roles are defined as admin, org_admin, reporter and user. Each role has a set of permissions (Create, Read, Update, Delete) for each endpoint. The ability to define additional roles and edit existing roles is enabled in Open-AudIT Enterprise.<br> <br>Roles can also be used with LDAP (Active Directory and OpenLDAP) authorisation. Enterprise licensed installations have the ability to customise the LDAP group for each defined role.<br> <br></p>'] = '<p>Roles in Open- Aud IT yra pagrindinis klausimas. Vartotojas turi pirminį Org, taip pat sąrašą Orgs jie gali pasiekti. Vartotojas sujungia tai su paskirtųjų Roles sąrašą, kuris nustato, kokius veiksmus jie gali imtis dėl elementų priskirtas Orgs jie turi prieigą prie. Vartotojų "orgs" ir "vaidmenys" derinys apibrėžia, ką jie gali ir negali padaryti per Open- AudIT.<br/> <br/>Gaukite visą Open- AudIT Enterprise patirtį. Kurti vaidmenis leidžia bauda grūdintas kontroliuoti, ką vartotojai gali padaryti per Open- AudIT.<br/> <br/>Pagrindinis būdas leidimui (ką vartotojas gali padaryti) yra pagrįstas vartotojų Roles. Numatytieji vaidmenys apibrėžiami kaip admin, org _ admin, reporteris ir vartotojas. Kiekvienas vaidmuo turi leidimų rinkinį (Sukurti, Skaityti, Atnaujinti, Išbraukti) kiekvienam rezultatui. Galimybė nustatyti papildomus vaidmenis ir redaguoti esamus vaidmenis yra įjungta Open- AudIT Enterprise.<br/> <br/>Relės taip pat gali būti naudojamos su LDAP (Active Directory and OpenLDAP) leidimu. Įmonių licencijuoti įrenginiai gali pritaikyti LDAP grupę kiekvienam apibrėžtam vaidmeniui.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Rules examine attributes and make cahnges based on the appropriate rule.</p>'] = '<p>Taisyklėse nagrinėjami požymiai ir nustatomos atitinkamos taisyklės.</p>';

$GLOBALS["lang"]['<p>Scanning options allow you to easily apply a set of options to a discovery.<br> <br></p>'] = '<p>Skenavimo parinktys leidžia lengvai pritaikyti parinkčių rinkinį atradimui.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Simple, intuitive, accurate geographic mapping provided by Google Maps. Open-AudIT leverages Google Maps to provide live, interactive geographic mapping of device locations. Automated conversion of street addresses to geocodes and longitude / latitude.<br> <br>
        </p>'] = '<p>Paprastas, intuityvus, tikslus geografinis kartografavimas pagal "Google Maps" žemėlapius. Open- AudIT svertai "Google" žemėlapiai, kuriuose pateikiamas tiesioginis interaktyvus geografinis įrenginių vietų kartografavimas. Automatinis gatvės adresų pertvarkymas į geokodus ir ilgumą bei platumą.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Software Packages are used to determine if antivirus, backup, firewall, approved or banned software is installed.<br> <br></p>'] = '<p>Programinės įrangos paketai naudojami nustatyti, ar įdiegta antivirusinė, atsarginė, ugniasienė, patvirtinta ar uždrausta programinė įranga.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Some examples of valid Subnet attributes are: 192.168.1.1 (a single IP address), 192.168.1.0/24 (a subnet), 192.168.1-3.1-20 (a range of IP addresses).<br> <br><em>NOTE</em> - Only a subnet (as per the examples - 192.168.1.0/24) will be able to automatically create a valid network for Open-AudIT. <br> <br>If you use an Active Directory type, make sure you have appropriate credentials to talk to your Domain Controller already in <a href="../credentials">credentials</a>.<br> <br></p>'] = '<p>Kai kurie galiojančių Subnet požymių pavyzdžiai yra: 192.168.1.1 (vienas IP adresas), 192.168.1.0 / 24 (subtinklas), 192.168.1-3.1-20 (IP adresų intervalas).<br/> <br/><em>PASTABA</em> - Tik potinklis (pagal pavyzdžius - 192.168.1.0 / 24) galės automatiškai sukurti galiojantį tinklą Open- AudIT. <br/> <br/>Jei naudojate Active Directory tipą, įsitikinkite, kad turite tinkamus įgaliojimus pasikalbėti su domeno valdytoju jau <a href="../credentials">įgaliojimai</a>.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Standards are stored in Open-AudIT.<br /><br /><br /><br /></p>'] = '<p>Standartai saugomi Open- AudIT.<br/><br/><br/><br/></p>';

$GLOBALS["lang"]['<p>Supported clients are Linux only.<br> <br></p>'] = '<p>Palaikomi klientai yra tik Linux \'ai.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Tasks have a schedule that mirrors the unix cron schedule. The attributes for minute, hour, day_of_month, month, day_of_week all act as per the cron definitions. You can select multiples of these using comma seperated values (no spaces). You can select every value using *.<br> <br>The <code>type</code> of the task can be one of: baselines, collectors, discoveries, queries, reports or summaries.<br> <br>If you wish to schedule a Baseline or Discovery, you will need to create these before creating the tasks. You must use the ID of the type of item in <code>sub_resource_id</code>. For example if you wish to schedule a Discovery, use that particular Discoveries ID in <code>sub_resource_id</code>.<br> <br>The value for <code>uuid</code> is specific to each Open-AudIT server. Your unique value can be found in the configuration.<br> <br>The <code>options</code> attribute is a JSON document containing any extra attributes required to run the task. The extra attributes for reports, queries and summaries are: <code>email_address</code> and <code>format</code>. The extra attribute for Bselines is <code>group_id</code>.<br> <br></p>'] = '<p>Užduotys turi tvarkaraštį, kuris atspindi unix Crons tvarkaraštį. Minutės, valandos, dienos _ mėnesio, mėnesio, dienos _ savaitės visi požymiai veikia kaip pagal cron apibrėžimus. Jūs galite pasirinkti kelis iš jų naudojant kablelis seperated reikšmes (be tarpų). Kiekvieną reikšmę galite pasirinkti naudodami *.<br/> <br/>4. 4 skyrių). <code>type</code> iš užduoties gali būti vienas iš: bazinių linijų, kolekcionavimo, atradimai, užklausos, ataskaitos ar santraukos.<br/> <br/>Jei norite planuoti Baseline ar Discovery, jums reikės sukurti juos prieš kuriant užduotis. Jūs turite naudoti elemento tipo ID <code>sub_resource_id</code>. Pavyzdžiui, jei norite suplanuoti Discovery, naudokite tam tikrą Discovery ID in <code>sub_resource_id</code>.<br/> <br/>Vertė <code>uuid</code> yra specifinis kiekvienam Open- AudIT serveriui. Jūsų unikalią reikšmę galima rasti konfigūracijoje.<br/> <br/>4. 4 skyrių). <code>options</code> atributas yra JSON dokumentas, kuriame yra visi papildomi požymiai, reikalingi užduočiai vykdyti. Pranešimų, užklausų ir santraukų papildomos savybės: <code>email_address</code> ir <code>format</code>. Papildomas atributas Bselines yra <code>group_id</code>.<br/> <br/></p>';

$GLOBALS["lang"]['<p>The <code>type</code> of the location will assign its icon.<br> <br></p>'] = '<p>4. 4 skyrių). <code>type</code> iš vietos bus priskirti savo piktogramą.<br/> <br/></p>';

$GLOBALS["lang"]['<p>The Attributes endpoint allows you to add customized values to different attributes in Open-AudIT, at the moment this feature works on the Class, Environment, Status and Type attributes on Devices, the Type attribute for both Locations and Orgs as well as the Menu Category for Queries. If you view an item of one of the prvious types (say view a Lkocation) you will notice the Type attribute must be selected from a drop-down box. This is where those values are stored. Hence, if you would like to add a new Type to be chosen for a Location, add it using the Attributes feature.</p>'] = '<p>Požymiai baigtis leidžia jums pridėti individualizuotas reikšmes į skirtingus atributus Open- AudIT, šiuo metu ši funkcija veikia ant klasės, Aplinkos, Statusas ir tipas atributus įrenginių, tipas atributas tiek vietų ir orgų, taip pat meniu Kategorija užklausų. Jei peržiūrite vieno iš gretimų tipų elementą (tarkim, peržiūrėkite Lkocking), Jūs pastebėsite, kad tipo atributas turi būti pasirinktas iš nuleisto langelio. Čia saugomos šios vertės. Taigi, jei norite pridėti naują tipą turi būti pasirinkta vieta, pridėti jį naudojant požymių funkcija.</p>';

$GLOBALS["lang"]['<p>The Collectors feature enables you to easily manage many "collector" computers that perform network discovery. All Collectors are centrally controlled from the Server. The only required network ports between the Collector and the Server are 80 and/or 443.<br> <br>It makes managing disparate networks quick, easy and simple. Open-AudIT Enterprise licensees get a single collector license included and have the option to buy more as required..<br> <br></p>'] = '<p>Kolektorių funkcija leidžia lengvai valdyti daugelį "kolektoriaus" kompiuterių, kurie atlieka tinklo atradimą. Visi kolektoriai yra centralizuotai kontroliuojami iš serverio. Vienintelis reikalingas tinklo prievadai tarp surinkimo ir serverio yra 80 ir / arba 443.<br/> <br/>Tai leidžia valdyti skirtingus tinklus greitai, lengvai ir paprastai. Open- AudIT Enterprise licencijų gavėjai gauti vieną kolektoriaus licenciją įtraukti ir turėti galimybę pirkti daugiau, kaip reikalaujama..<br/> <br/></p>';

$GLOBALS["lang"]['<p>The SELECT section of your SQL <em>must</em> contain fully qualified columns. IE - <code>SELECT devices.id AS `devices.id`, devices.name AS `devices.name` ...</code>.<br> <br>The WHERE section of your SQL <em>must</em> contain <code>WHERE @filter</code> so Open-AudIT knows to restrict your query to the appropriate Orgs. SQL not containing this condition will result in the query failing to be created, unless you have the Admin role.<br> <br>An example query SQL showing attributes on devices that have an <code>os_group</code> attribute of "Linux" - <br><code>SELECT devices.id AS `devices.id`, devices.icon AS `devices.icon`, devices.type AS `devices.type`, devices.name AS `devices.name`, devices.os_name AS `devices.os_name` FROM devices WHERE @filter AND devices.os_group = "Linux"</code><br> <br></p>'] = '<p>SELECT skyrius savo SQL <em>turi</em> yra visiškai kvalifikuotos skiltys. IE - <code>SELECT devices.id AS `devices.id`, devices.name AS `devices.name` ...</code>.<br/> <br/>Kuri jūsų SQL dalis <em>turi</em> turi <code>WHERE @filter</code> Taigi Open- AudIT žino apriboti savo užklausą į atitinkamus Orgs. SQL be šios sąlygos sukels užklausą nebus sukurta, nebent turite Admin vaidmenį.<br/> <br/>Name <code>os_group</code> atributas "Linux" - <br/><code>SELECT devices.id AS `devices.id`, devices.icon AS `devices.icon`, devices.type AS `devices.type`, devices.name AS `devices.name`, devices.os_name AS `devices.os_name` FROM devices WHERE @filter AND devices.os_group = "Linux"</code><br/> <br/></p>';

$GLOBALS["lang"]['<p>The SELECT section of your SQL <em>must</em> only contain <code>DISTINCT(devices.id)</code>.<br> <br>The WHERE section of your SQL <em>must</em> contain <code>WHERE @filter</code> so Open-AudIT knows to restrict your query to the appropriate Orgs. SQL not containing this condition will result in the group failing to be created.<br> <br>An example for SQL to select all devices running the Debian OS - <code>SELECT DISTINCT(devices.id) FROM devices WHERE @filter AND devices.os_family = "Debian"</code><br> <br></p>'] = '<p>SELECT skyrius savo SQL <em>turi</em> yra tik <code>DISTINCT(devices.id)</code>.<br/> <br/>Kuri jūsų SQL dalis <em>turi</em> turi <code>WHERE @filter</code> Taigi Open- AudIT žino apriboti savo užklausą į atitinkamus Orgs. SQL be šios sąlygos nulems, kad grupė nebus sukurta.<br/> <br/>Pavyzdys, kaip SQL pasirinkti visus Debian OS veikiančius įrenginius - <code>SELECT DISTINCT(devices.id) FROM devices WHERE @filter AND devices.os_family = "Debian"</code><br/> <br/></p>';

$GLOBALS["lang"]['<p>The license endpoint allows you to track the number of licenses found on your devices.<br> <br>To create an entry to track your licenses you <em>must</em> to provide a name, an organization, the number of licenses acquired and the name of the software. On the field <code>match_string</code> you must provide the name of the software that you want to track, you can use the percent sign (%) as a wildcard in the match_string.<br> <br></p>'] = '<p>Licencija baigtis leidžia jums sekti licencijų skaičių rasti savo įrenginiuose.<br/> <br/>Norėdami sukurti įrašą sekti savo licencijas jums <em>turi</em> pateikti pavadinimą, organizaciją, įgytų licencijų skaičių ir programinės įrangos pavadinimą. Lauke <code>match_string</code> turite nurodyti programinės įrangos, kurią norite sekti, pavadinimą, galite naudoti procentinį ženklą (%) kaip laukinę kortelę rungtynėse _ string.<br/> <br/></p>';

$GLOBALS["lang"]['<p>The network should be in the format 192.168.1.0/24.<br> <br></p>'] = '<p>Tinklo formatas turėtų būti 192.168.1.0 / 24.<br/> <br/></p>';

$GLOBALS["lang"]['<p>The primary and optional secondary items should be fully qualified - ie, devices.type or software.name.<br> <br></p>'] = '<p>Pagrindiniai ir neprivalomi antriniai elementai turėtų būti visiškai kvalifikuoti - t. y. prietaisai. tipą arba programinę įrangą. pavadinimas.<br/> <br/></p>';

$GLOBALS["lang"]['<p>There is no need to do anything if you are running Open-AudIT on a Linux server.<br>
<br>
Windows clients are just fine and require no special actions, however.... to enable this feature the audit script must be run locally on the target Windows system. It cannot be run remotely as we do with WMI calls when running the audit script on one Windows machine, while targeting a second Windows machine. To do this we need to copy the audit script to the target Windows machine and then run it. Unfortunately the service account that Apache runs under is the Local System account. This account has no access to remote (network based) resources. To work around this issue the service must be run under another account. It is easiest to just use the local Administrator account, but you can try any account you like as long as it has the required privileges. The Local System account has as much local access as the local Administrator account.<br>
<br>
See our page on enabling <a href="/index.php/faq?name=Running Open-AudIT Apache Service Under Windows">Running Open-AudIT Apache Service Under Windows</a></p>'] = '<p>Nėra reikalo nieko daryti, jei veikia Open- AudIT Linux serveryje.<br/><br/>"Windows" klientai yra tik gerai ir nereikia jokių specialių veiksmų, tačiau.... kad ši funkcija audito scenarijus turi būti vykdomas vietoje tikslinės Windows sistemos. Jis negali būti vykdomas nuotoliniu būdu, kaip mes WMI skambučius, kai veikia audito scenarijų vienoje Windows mašina, o taikantis į antrą Windows mašina. Norėdami tai padaryti, turime nukopijuoti audito scenarijų į tikslinės Windows mašinos ir tada paleisti jį. Deja, paslaugų sąskaitą, kad Apache veikia pagal vietos sistemos sąskaitą. Ši sąskaita neturi prieigos prie nuotolinių (tinklu pagrįstų) išteklių. Norint dirbti su šiuo klausimu, paslauga turi būti tvarkoma kitoje sąskaitoje. Paprasčiausiai naudotis vietine administratoriaus paskyra, bet galite išbandyti bet kokią norimą paskyrą, jei ji turi reikiamas privilegijas. Vietinės sistemos sąskaita turi tiek pat vietinės prieigos, kiek vietos administratoriaus sąskaita.<br/><br/>Žiūrėkite mūsų puslapį įjungus <a href="/index.php/faq?name=Running Open-AudIT Apache Service Under Windows">Vykdoma Open- AudIT Apache paslauga po Windows</a></p>';

$GLOBALS["lang"]['<p>These are the devices that live within a rack.<br> <br></p>'] = '<p>Tai įrenginiai, kurie gyvena stove.<br/> <br/></p>';

$GLOBALS["lang"]['<p>This endpoint enables you to add your cloud infrastructure details. Open-AudIT will then reach out to your clouds using their native API and return your servers, just like any other device in Open-AudIT.<br> <br><em>NOTE</em> - To use this feature, we <em>must</em> enable the configuration items match_mac (for AWS) and match_hostname (for Azure). This will be done automatically the first time a cloud discovery is executed.<br> <br>Credentials for your cloud (<a href="/index.php/faq?name=Credentials for Microsoft Azure used in Cloud Discovery">Azure</a> or <a href="/index.php/faq?name=Credentials for Amazon AWS used in Cloud Discovery">AWS</a>) are required.<br> <br></p>'] = '<p>Ši baigtis leidžia jums pridėti savo debesų infrastruktūros detales. Open- AudIT tada pasiekti debesis naudojant savo gimtąją API ir grąžinti savo serverius, kaip ir bet kuris kitas prietaisas Open- AudIT.<br/> <br/><em>PASTABA</em> - Norėdami naudoti šią funkciją, mes <em>turi</em> leisti konfigūracijos elementus rungtynės _ mac (AWS) ir mat _ hostname (Azure). Tai bus daroma automatiškai pirmą kartą, kai bus atliekamas debesis.<br/> <br/>Jūsų debesijos kreditai (<a href="/index.php/faq?name=Credentials for Microsoft Azure used in Cloud Discovery">Žvakės</a> arba <a href="/index.php/faq?name=Credentials for Amazon AWS used in Cloud Discovery">AWS</a>) reikalaujama.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Vulnerabilities reporting based on the NIST CVE feed.<br> <br></p>'] = '<p>Pažeidžiamumo pranešimai, pagrįsti NIST CVE pašaru.<br/> <br/></p>';

$GLOBALS["lang"]['<p>We initially setup the default list of scripts with the default options. These default scripts cannot be deleted. You can create additional scripts for use by you as required. Your script will be based on one of the existing scripts and have custom options applied. The scripts can then be downloaded from the list page at menu -> Discover -> Audit Scripts -> List Audit Scripts<br> <br></p>'] = '<p>Iš pradžių nustatysime numatytąjį scenarijų sąrašą numatytosiomis parinktimis. Šie numatytieji scenarijai negali būti ištrinti. Jūs galite sukurti papildomus scenarijus naudoti jums, kaip reikalaujama. Jūsų scenarijus bus pagrįstas vienu iš esamų scenarijų ir taikyti pasirinktines parinktis. Scenarijus galima atsisiųsti iš sąrašo puslapio meniu - > Atrasti - > Audito scenarijai - > Audito scenarijų sąrašas<br/> <br/></p>';

$GLOBALS["lang"]['<p>When using Regex for matching, a helpful page can be found on the <a href="https://www.php.net/manual/en/regexp.reference.meta.php" target="_blank"> PHP website</a>. Some differences to Perl Regex can be found <a href="https://www.php.net/manual/en/reference.pcre.pattern.differences.php" target="_blank">here</a>.</p>'] = '<p>Naudojant Regex atitikimo, naudingas puslapis galima rasti ant <a href="https://www.php.net/manual/en/regexp.reference.meta.php" target="_blank"> PHP svetainė</a>. Kai kurie skirtumai Perl Regex galima rasti <a href="https://www.php.net/manual/en/reference.pcre.pattern.differences.php" target="_blank">čia</a>.</p>';

$GLOBALS["lang"]['<p>Widgets can easily be created to show whatever is specific to your environment on your dashboards.<br> <br></p>'] = '<p>Elementai gali būti lengvai sukurtas parodyti, kas yra būdinga jūsų aplinkai ant savo prietaisų skydų.<br/> <br/></p>';

$GLOBALS["lang"]['<p>With Open-AudIT Professional and Enterprise you can automate and schedule discoveries, report generation, or baseline checks to run when you want, and as often as you need. Schedule your discoveries to run nightly and reports to be generated and emailed to key personnel each morning. Complex or simple schedules, device discovery and report generation is just a click away.<br> <br>Create individual discovery schedules for each subnet or AD controller, add in reports to be created for targeted audiences. Develop simple or complex schedules to support company needs, avoid backups or impact to operations, or simply to spread the load and speed-up audit completion.<br> <br></p>'] = '<p>Su Open- AudIT Profesionalus ir Enterprise galite automatizuoti ir tvarkaraštis atradimus, pranešti generavimas, arba pradinio lygio patikrinimus paleisti, kai norite, ir taip dažnai, kaip jums reikia. Tvarkaraštis savo atradimus paleisti naktį ir ataskaitos turi būti generuojami ir elektroniniu paštu į pagrindinius darbuotojus kiekvieną rytą. Sudėtingi ar paprasti grafikai, įrenginio atradimas ir pranešimas apie generavimą yra tiesiog spustelėkite toli.<br/> <br/>Sukurti atskirus atradimų tvarkaraščius kiekvienam subtinklui ar AD valdikliui, pridėti į ataskaitas, kurios bus sukurtos tikslinei auditorijai. Parengti paprastus arba sudėtingus tvarkaraščius, kad būtų patenkinti įmonės poreikiai, išvengta atsarginių kopijų ar poveikio veiklai, arba tiesiog paskirstyti krovinį ir paspartinti audito užbaigimą.<br/> <br/></p>';

$GLOBALS["lang"]['<p>You can create a script with all the options for any of the existing audit scripts - not just Windows. AIX, ESX, Linux, OSX and Windows are all covered.<br> <br></p>'] = '<p>Jūs galite sukurti scenarijų su visomis galimybėmis bet kuris iš esamų audito scenarijų - ne tik Windows. Visi AIX, ESX, Linux, OSX ir Windows yra padengti.<br/> <br/></p>';

$GLOBALS["lang"]['<p>You can use the percent % sign as a wildcard in the match_string.<br> <br></p>'] = '<p>Jūs galite naudoti% ženklą kaip laukinę kortelę rungtynių _ string.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Your racks help refine exactly where your devices are located.<br> <br></p>'] = '<p>Jūsų lentynos padeda tiksliai nustatyti, kur yra jūsų įrenginiai.<br/> <br/></p>';

$GLOBALS["lang"]['<strong>NOTE</strong> - You are accessing this URL from the local Open-AudIT server. The downloaded script will not be able to submit when run on any other machine. If you need to audit other machines, please download the script from any remote machine, not using a browser on the Open-AudIT server itself.'] = '<strong>PASTABA</strong> - Jūs pasiekiate šį URL iš vietinio Open- AudIT serverio. Atsisiųstas scenarijus negalės pateikti, kai veiks bet kurioje kitoje mašinoje. Jei jums reikia atlikti kitų mašinų auditą, atsisiųskite scenarijų iš bet kurios nuotolinės mašinos, nenaudodami naršyklės pačiame Open- AudIT serveryje.';

$GLOBALS["lang"]['A CVE item that does not contain a filter to determine the affected item(s).'] = 'CVE elementas, kuriame nėra filtro paveiktam (-iems) elementui (-ams) nustatyti.';

$GLOBALS["lang"]['A Google Maps API Key is required for this function.'] = '"Google" žemėlapiai API Raktas reikalingas šiai funkcijai.';

$GLOBALS["lang"]['A JSON array of device IDs that will have this benchmark executed.'] = 'JSON įrenginių identifikatorių grupė, kuriai bus įvykdytas šis lyginamasis indeksas.';

$GLOBALS["lang"]['A JSON array of objects matching the software name taken from the CVE, enriched with the software name retrieved by Open-AudIT.'] = 'JSON masyvas objektų, atitinkančių programinės įrangos pavadinimą, paimtą iš CVE, praturtintas programinės įrangos pavadinimą gauti Open- AudIT.';

$GLOBALS["lang"]['A JSON array of values to test for this vulnerability.'] = 'JSON sąrašas vertybių išbandyti šį pažeidžiamumą.';

$GLOBALS["lang"]['A JSON document containing the Orgs assigned to this user. IDs taken from <code>orgs.id</code>. If a user has access to an Org, they have access to that Orgs descendants.'] = 'JSON dokumentas, kuriame yra šiam naudotojui priskirti orgai. ID, paimti iš <code>orgs.id</code>. Jei naudotojas turi prieigą prie Orgo, jie turi prieigą prie to Orgo palikuonių.';

$GLOBALS["lang"]['A JSON document containing the required attributes depending on <code>scripts.type</code>.'] = 'JSON dokumentas, kuriame yra reikalaujami požymiai, priklausomai nuo <code>scripts.type</code>.';

$GLOBALS["lang"]['A JSON document containing the required attributes overriding the chosen discovery_scan_options.'] = 'JSON dokumentas, kuriame nurodyti būtini požymiai, viršesni už pasirinktus atradimo _ scan _ parinktis.';

$GLOBALS["lang"]['A JSON document containing the required attributes overriding the default device match options.'] = 'JSON dokumentas, kuriame nurodyti būtini požymiai, viršijantys numatytojo įrenginio atitikmenų parinktis.';

$GLOBALS["lang"]['A JSON document containing the roles assigned to this user. Role names taken from <code>roles.name</code>.'] = 'JSON dokumentas, kuriame nurodytos šiam naudotojui priskirtos funkcijos. Vaidmenų pavadinimai paimti iš <code>roles.name</code>.';

$GLOBALS["lang"]['A JSON object containing an array of attributes to change if the match occurs.'] = 'JSON objektas, kuriame yra įvairių požymių, kuriuos reikia pakeisti, jei įvyksta rungtynės.';

$GLOBALS["lang"]['A JSON object containing an array of attributes to match.'] = 'JSON objektas, turintis derinamų požymių rinkinį.';

$GLOBALS["lang"]['A JSON object containing collection specific options.'] = 'JSON objektas, kuriame yra kolekcijos specifinių variantų.';

$GLOBALS["lang"]['A JSON object populated via a Cloud discovery.'] = 'Name';

$GLOBALS["lang"]['A JSON representation containing the details of the queue item to be executed.'] = 'JSON vaizdas, kuriame pateikiama išsami informacija apie vykdytiną eilę.';

$GLOBALS["lang"]['A JSON representation of the fields for this integration.'] = 'JSON atstovavimas šios integracijos srityse.';

$GLOBALS["lang"]['A JSON representation of the individual tests and their results on all devices this baseline has been run against.'] = 'JSON reprezentavimas atskirų bandymų ir jų rezultatų visų prietaisų šis bazinis buvo paleistas prieš.';

$GLOBALS["lang"]['A JSON representation of the tests that make up this policy.'] = 'JSON atstovavimas testams, kurie sudaro šią politiką.';

$GLOBALS["lang"]['A LAN can be connected to a WAN using a router.'] = 'LAN galima prijungti prie WAN naudojant maršrutizatorių.';

$GLOBALS["lang"]['A Metropolitan area network (MAN) is a large computer network that usually spans a city or a large campus.'] = 'Metropolitan area network (MAN) yra didelis kompiuterinis tinklas, kuris paprastai apima miestą ar didelį miestelį.';

$GLOBALS["lang"]['A Seed discovery uses an initial IP to retrieve the IPs of any other devices it knows about, adds those IPs to the list and scans those - again asking for any IPs those additional devices knows about. Rinse and repeat. It is intelligent enough to know if it has already scanned a given IP in its execution and discards any already scanned (or even on the list to be scanned).'] = 'A Sėklos atradimas naudoja pradinį IP bet kokių kitų prietaisų IP gauti, prideda tuos IP į sąrašą ir nuskaito tuos - vėl prašo bet kokių IP tie papildomi prietaisai žino apie. Išskalaukite ir pakartokite. Jis yra pakankamai protingas žinoti, ar ji jau nuskenavo tam tikrą IP jo vykdymo metu ir išmesti į jūrą bet jau nuskaitytas (ar net į sąrašą turi būti nuskaityti).';

$GLOBALS["lang"]['A Subnet discovery will scan the IPs provided.'] = 'Subnet atradimas skenuos pateiktus IP.';

$GLOBALS["lang"]['A URL provided to the agent which will then download the file and store it on the local disk.'] = 'Name';

$GLOBALS["lang"]['A URL to a file to download.'] = 'Name';

$GLOBALS["lang"]['A backbone network is part of a computer network infrastructure that provides a path for the exchange of information between different LANs or sub-networks. A backbone can tie together diverse networks within the same building, across different buildings, or over a wide area.<br><br>For example, a large company might implement a backbone network to connect departments that are located around the world. The equipment that ties together the departmental networks constitutes the network backbone. When designing a network backbone, network performance and network congestion are critical factors to take into account. Normally, the backbone network capacity is greater than that of the individual networks connected to it.<br><br>Another example of a backbone network is the Internet backbone, which is the set of wide area networks (WANs) and core routers that tie together all networks connected to the Internet.'] = 'Pagrindinis tinklas yra kompiuterinio tinklo infrastruktūros dalis, kuri suteikia kelią keistis informacija tarp skirtingų LAN arba subtinklų. Pagrindas gali sujungti skirtingus tinklus tame pačiame pastate, skirtinguose pastatuose arba plačioje teritorijoje.<br/><br/>Pavyzdžiui, didelė bendrovė gali įdiegti pagrindinį tinklą, kad sujungtų visame pasaulyje esančius departamentus. Įrenginiai, sujungiantys departamentų tinklus, sudaro tinklo pagrindą. Kuriant pagrindinį tinklą, būtina atsižvelgti į tinklo veiklos rezultatus ir tinklo perkrovą. Paprastai pagrindinio tinklo pajėgumas yra didesnis už atskirų prie jo prijungtų tinklų pajėgumą.<br/><br/>Kitas pagrindinio tinklo pavyzdys yra interneto pagrindas, kuris yra plačių teritorinių tinklų (WANs) ir pagrindinių maršrutizatorių, kurie jungia visus prie interneto prijungtus tinklus, rinkinys.';

$GLOBALS["lang"]['A calculated field that displays the number of times this piece of software was found on the computers in the selected Org (and its descendants if configured).'] = 'Apskaičiuotas laukas, rodantis, kiek kartų ši programinės įrangos dalis buvo rasta pasirinktame orge esančiuose kompiuteriuose (ir jo palikuonims, jei sukonfigūruoti).';

$GLOBALS["lang"]['A campus area network (CAN) is made up of an interconnection of LANs within a limited geographical area. The networking equipment (switches, routers) and transmission media (optical fiber, copper plant, Cat5 cabling, etc.) are almost entirely owned by the campus tenant / owner (an enterprise, university, government, etc.).<br><br>For example, a university campus network is likely to link a variety of campus buildings to connect academic colleges or departments, the library, and student residence halls.'] = 'Stovyklavietės tinklą (CAN) sudaro LAN jungtis ribotoje geografinėje vietovėje. Tinklo įranga (jungikliai, maršrutizatoriai) ir perdavimo priemonės (optinis pluoštas, varinis įrenginys, Cat5 kabeliai ir kt.) beveik visiškai priklauso miestelio nuomininkui (savininkui) (įmonei, universitetui, vyriausybei ir kt.).<br/><br/>Pavyzdžiui, universiteto miestelių tinklas gali susieti įvairius miestelių pastatus, kad būtų sujungti akademiniai koledžai ar departamentai, biblioteka ir studentų gyvenamosios patalpos.';

$GLOBALS["lang"]['A closed port is accessible (it receives and responds to Nmap probe packets), but there is no application listening on it. They can be helpful in showing that a host is up on an IP address (host discovery, or ping scanning), and as part of OS detection. Because closed ports are reachable, it may be worth scanning later in case some open up. Administrators may want to consider blocking such ports with a firewall. Then they would appear in the filtered state, discussed next.'] = 'Uždaras prievadas yra prieinamas (jis gauna ir reaguoja į "Nmap" zondavimo paketus), bet nėra programos klausytis apie jį. Jie gali būti naudinga parodyti, kad priimančiosios yra ant IP adresą (priimančiosios atradimas, arba ping skenavimo), ir kaip dalis OS aptikimo. Kadangi uždarus uostus galima pasiekti, vėliau gali būti verta nuskaityti, jei kai kurie atsidaro. Administratoriai gali apsvarstyti galimybę blokuoti tokius uostus ugniasiene. Tada jie būtų rodomi filtruotos būsenos, aptartas toliau.';

$GLOBALS["lang"]['A collector is either in Collector or Stand-Alone mode.'] = 'Kolektorius yra arba kolektoriaus arba Stand- Alone režimu.';

$GLOBALS["lang"]['A comma separated list of applicable CVEs.'] = 'Atskiras kablelių sąrašas, kuriame išvardyti taikytini KTĮ.';

$GLOBALS["lang"]['A comma separated list of values, one of which can be selected.'] = 'kableliais atskirtų reikšmių sąrašas, iš kurių vieną galima pasirinkti.';

$GLOBALS["lang"]['A command to run. When the agent is Windows based, this command is run from within the powershell agent.'] = 'Įsakymas paleisti. Kai agentas yra Windows pagrindu, ši komanda yra paleisti iš per galios agentas.';

$GLOBALS["lang"]['A dashboard is made up of three columns and two rows of what we call <i>widgets</i>. A widget is very similar to a summary, only we take the summary concept a bit further. Widgets are created in a simple fashion using a couple of drop down boxes - or you can elect to use your own SQL for complete customisability.'] = 'Skydelis yra sudarytas iš trijų stulpelių ir dviejų eilučių tai, ką mes vadiname <i>Elementai</i>. Valdiklis yra labai panašus į santrauką, tik mes imtis santraukos koncepcija šiek tiek toliau. Elementai yra sukurta paprasta forma naudojant lašas dėžės pora - arba galite pasirinkti naudoti savo SQL visiškai pritaikomumas.';

$GLOBALS["lang"]['A filtered port is considered open (and will trigger device detection).'] = 'Filtruotas prievadas laikomas atviru (ir sukels įrenginio aptikimą).';

$GLOBALS["lang"]['A global area network (GAN) is a network used for supporting mobile across an arbitrary number of wireless LANs, satellite coverage areas, etc. The key challenge in mobile communications is handing off user communications from one local coverage area to the next. In IEEE Project 802, this involves a succession of terrestrial wireless LANs.'] = 'Pasaulinis tinklas (GAN) - tai tinklas, naudojamas palaikyti mobilųjį ryšį per savavališką belaidžių LAN, palydovinio ryšio aprėpties zonas ir kt. Pagrindinis judriojo ryšio uždavinys - iš vienos vietos aprėpties zonos į kitą perduoti naudotojų ryšį. IEEE projekte 802 tai apima antžeminio belaidžio LAN seką.';

$GLOBALS["lang"]['A home area network (HAN) is a residential LAN used for communication between digital devices typically deployed in the home, usually a small number of personal computers and accessories, such as printers and mobile computing devices. An important function is the sharing of Internet access, often a broadband service through a cable TV or digital subscriber line (DSL) provider.'] = 'Namų zonos tinklas (HAN) yra gyvenamasis LAN, naudojamas ryšiui tarp namuose paprastai naudojamų skaitmeninių prietaisų, paprastai nedaugelio asmeninių kompiuterių ir priedų, pvz., spausdintuvų ir mobiliųjų skaičiavimo prietaisų. Svarbi funkcija - dalytis interneto prieiga, dažnai plačiajuosčio ryšio paslauga per kabelinę televiziją arba skaitmeninės abonento linijos (DSL) teikėją.';

$GLOBALS["lang"]['A list of custom TCP ports to scan (22 is SSH, 135 is WMI, 62078 is iPhone sync).'] = 'Pasirinktinių TCP prievadų, kuriuos galima nuskaityti, sąrašas (22 yra SSH, 135 yra WMI, 62078 yra iPhone sinchronizavimas).';

$GLOBALS["lang"]['A list of custom UDP ports to scan (161 is SNMP).'] = 'Pasirinktinių UDP prievadų, kuriuos reikia nuskaityti, sąrašas (161 yra SNMP).';

$GLOBALS["lang"]['A local area network (LAN) is a network that connects computers and devices in a limited geographical area such as a home, school, office building, or closely positioned group of buildings. Each computer or device on the network is a node. Wired LANs are most likely based on Ethernet technology. Newer standards such as ITU-T G.hn also provide a way to create a wired LAN using existing wiring, such as coaxial cables, telephone lines, and power lines.<br><br>The defining characteristics of a LAN, in contrast to a wide area network (WAN), include higher data transfer rates, limited geographic range, and lack of reliance on leased lines to provide connectivity. Current Ethernet or other IEEE 802.3LAN technologies operate at data transfer rates up to 100 Gbit/s, standardized by IEEE in 2010. Currently, 400 Gbit/s Ethernet is being developed.'] = 'Vietinis tinklas (LAN) - tai tinklas, jungiantis kompiuterius ir įrenginius ribotoje geografinėje teritorijoje, pavyzdžiui, namuose, mokykloje, biurų pastate arba glaudžiai įrengtoje pastatų grupėje. Kiekvienas kompiuteris ar įrenginys tinkle yra mazgas. Laidiniai LAN greičiausiai remiasi Ethernet technologija. Naujesni standartai, pavyzdžiui, ITU- T G.hn taip pat suteikia galimybę sukurti laidinį LAN naudojant esamus laidus, pavyzdžiui, bendraašius kabelius, telefono linijas ir elektros linijas.<br/><br/>Skirtingai nuo plataus tinklo (WAN), LAN skiriamosios savybės apima didesnes duomenų perdavimo normas, ribotą geografinę sritį ir nepakankamą naudojimąsi skirtosiomis linijomis, kad būtų užtikrintas ryšys. Dabartinės Ethernet ar kitos IEEE 802.3LAN technologijos veikia duomenų perdavimo sparta iki 100 Gbps, standartizuota IEEE 2010 metais. Šiuo metu 400 Gbit / s Ethernet kuriamas.';

$GLOBALS["lang"]['A location is a physical address that can have devices associated with it. You can assign it coordinates and if there are devices assigned, the location will appear on the Map when you have an Open-AudIT Enterprise license.'] = 'Vieta yra fizinis adresas, kuris gali turėti prietaisų, susijusių su juo. Jūs galite priskirti jį koordinates ir jei yra įrenginių priskirtas, vieta bus rodomas žemėlapyje, kai turite Open- AudIT Enterprise licenciją.';

$GLOBALS["lang"]['A location name will help you to find these devices in the future.'] = 'Vietos pavadinimas padės jums rasti šiuos įrenginius ateityje.';

$GLOBALS["lang"]['A lower number means it will be applied before other rules.'] = 'Mažesnis skaičius reiškia, kad jis bus taikomas iki kitų taisyklių.';

$GLOBALS["lang"]['A lower number means it will be applied before other rules. The default weight is 100.'] = 'Mažesnis skaičius reiškia, kad jis bus taikomas iki kitų taisyklių. Numatytasis svoris yra 100.';

$GLOBALS["lang"]['A new user logged in to Open-AudIT and was authenticated and authorized by the LDAP sever. That user was then created in Open-AudIT and logged in. Success.'] = 'Naujas vartotojas prisijungęs prie Open- AudIT ir buvo patvirtintas ir patvirtintas LDAP sever. Tas vartotojas buvo tada sukurta Open- AudIT ir prisijungęs. Sėkmės.';

$GLOBALS["lang"]['A package is a piece of installed softare. A package has a type - antivirus, approved, backup, banned, cloud, firewall, ignored, license or other.'] = 'Paketas yra įdiegta softax gabalas. Paketas turi tipą - antivirusinis, patvirtintas, atsarginės kopijos, uždrausta, debesys, ugniasienė, ignoruoti, licencija ar kita.';

$GLOBALS["lang"]['A password (stored as a hash) that enables logon when using application authentication.'] = 'Name';

$GLOBALS["lang"]['A person has an account in the Open-AudIT application. Their user account has a list of associated Roles and Organizations. The roles the user has determines WHAT they can do. The Organizations a user has determines WHICH items they can act upon.<br><br>When a user requests to perform an operation (create, read, update, delete) on a collection item, the roles are consulted to see if they are allowed to perform that action, then the orgs are consulted to determine if the collection item belongs to an org the user has permission to act on.'] = 'Asmuo turi sąskaitą Open- AudIT paraiškoje. Jų vartotojo sąskaita turi susijusių roles ir organizacijas sąrašą. Vaidmenys, kuriuos vartotojas turi nustatyti, ką jie gali padaryti. Organizacijos vartotojas nustato, kurie elementai jie gali veikti.<br/><br/>Kai vartotojas prašo atlikti operaciją (sukurti, skaityti, atnaujinti, ištrinti) kolekcijos elemente, vaidmenys yra konsultuojamasi siekiant pamatyti, ar jiems leidžiama atlikti tą veiksmą, tada orgai yra konsultuojamasi siekiant nustatyti, ar kolekcijos elementas priklauso org vartotojas turi leidimą veikti.';

$GLOBALS["lang"]['A personal area network (PAN) is a computer network used for communication among computer and different information technological devices close to one person. Some examples of devices that are used in a PAN are personal computers, printers, fax machines, telephones, PDAs, scanners, and even video game consoles. A PAN may include wired and wireless devices. The reach of a PAN typically extends to 10 meters. A wired PAN is usually constructed with USB and FireWire connections while technologies such as Bluetooth and infrared communication typically form a wireless PAN.'] = 'Asmeninis tinklas (PAN) - tai kompiuterių tinklas, naudojamas komunikacijai tarp kompiuterio ir skirtingų informacinių technologinių prietaisų netoli vieno asmens. Kai kurie PAN naudojami prietaisai yra asmeniniai kompiuteriai, spausdintuvai, faksai, telefonai, PDA, skaitytuvai ir net vaizdo žaidimų pultai. PAN gali apimti laidinius ir belaidžius įrenginius. PAN pasiekiamumas paprastai siekia 10 metrų. Laidinis PAN paprastai kuriamas naudojant USB ir FireWire jungtis, o tokios technologijos kaip "Bluetooth" ir infraraudonųjų spindulių ryšys paprastai sudaro belaidį PAN.';

$GLOBALS["lang"]['A query is essentially a SQL statement. This statement is run against the database with the automatic addition of the limit, filtered to apply to only those requested items and only those items the user has permission to view. A Query can be created using menu -> Manage -> Queries -> Create Queries. Queries contain an org_id and are hence restricted to the appropriate users. A user must have the org_admin or reporter role(s) to create, update or delete a query. All users can execute a query. A query has a name attribute used for the menu item as well as a menu category attribute. This tells the Open-Audit GUI which submenu to place the query in. There is also menu display which should be set to <i>y</i> to enable the query in the GUI (<i>n</i> to prevent the query from appearing at all). The query would still run if called using its <code>id</code>, regardless of menu displays value.'] = 'Užklausa iš esmės yra SQL pareiškimas. Šis teiginys yra paleisti prieš duomenų bazę su automatiniu pridedant ribą, filtruotas taikyti tik tiems prašomiems elementams ir tik tie elementai, kuriuos vartotojas turi leidimą peržiūrėti. Užklausa gali būti sukurta naudojant meniu - > Tvarkyti - > Užklausos - > Sukurti užklausas. Užklausose yra org _ id ir todėl jos apsiriboja atitinkamais vartotojais. Naudotojas turi turėti org _ admin arba pranešėjo vaidmenį (-us), kad sukurtų, atnaujintų ar ištrintų užklausą. Visi vartotojai gali atlikti užklausą. Užklausa turi meniu elemento pavadinimo atributą bei meniu kategorijos požymį. Tai rodo Open- Audit GUI kuris submeniu įdėti užklausą. Taip pat yra meniu ekranas, kuris turėtų būti nustatytas <i>y</i> kad būtų galima užklausą GUI (<i>n</i> užkirsti kelią užklausai atsirasti). Užklausa vis dar būtų paleisti, jei skambinti naudojant savo <code>id</code>, nepriklausomai nuo meniu rodo vertę.';

$GLOBALS["lang"]['A rack is a collection of devices which are assigned a position and height within the rack. A device can optionally have a picture associated with it. A rack is placed in a row. We have created a very granular system for positioning of racks, which is as follows. At the top level (as always) is the Organisation (Org). An Org can have multiple locations (as has always been the case). With the addition of the Racks feature, a location can now contain one or more Buildings. A building can contain one or more Floors. A floor can contain one or more Rooms. A room can contain one or more Rows. This sounds like a lot of work, but defaults are created for you. Create a new Location and the sub-components will be automatically created for you. If you need more items (buildings, rooms, etc) you can add them as you like. A rack can also be part of a <i>pod</i> of racks. The pod attribute works as a tag, rather than a strict hierarchical inheritance model as per buildings, floors, etc.<br><br>Racks are a feature available to Open-AudIT Enterprise licensed customers.'] = 'Stogas yra įtaisų, kurie yra priskirti padėtį ir aukštį per stovą kolekcija. Įrenginys gali turėti su juo susijusį paveikslėlį. Statramstis dedamas į eilę. Mes sukūrėme labai granuliuotą stovų išdėstymo sistemą, kuri yra tokia. Aukščiausiu lygiu (kaip visada) yra organizacija (Org). Orgas gali turėti kelias vietas (kaip visada). Su Racks funkcija, vieta dabar gali būti vienas ar daugiau pastatų. Pastate gali būti viena ar daugiau grindų. Grindys gali turėti vieną ar daugiau kambarių. Kambaryje gali būti viena ar daugiau eilučių. Tai skamba kaip daug darbo, bet įsipareigojimų nevykdymo yra sukurta jums. Sukurti naują vietą ir subkomponentai bus automatiškai sukurta jums. Jei jums reikia daugiau daiktų (pastatų, kambarių ir kt.), galite juos pridėti kaip norite. Rokas taip pat gali būti dalis <i>unit description in lists</i> iš lentynos. Pod atributas veikia kaip žymė, o ne kaip griežtas hierarchinis paveldėjimo modelis pagal pastatus, grindis ir kt.<br/><br/>Rinkiniai yra funkcija prieinama Open- AudIT Enterprise licencijuotų klientų.';

$GLOBALS["lang"]['A routing domain or address space where the IP addresses and MAC addresses are unique.'] = 'Maršruto domenas arba adresas, kuriame IP ir MAC adresai yra unikalūs.';

$GLOBALS["lang"]['A sample cron file for Linux is below. This should be placed in'] = 'Linux \'o Crons failas yra žemiau. Tai turi būti įdėta į';

$GLOBALS["lang"]['A security zone is a administrative domain or policy domain within the Network Domain.'] = 'Saugumo zona yra tinklo srities administracinė arba politikos sritis.';

$GLOBALS["lang"]['A seed discovery is another type of discovery, where you provide the IP of a single <i>seed</i> device. This device is audited, and any IPs it knows are then added to the list of IPs to be audited. Then, those devices are audited and any IPs they know are also added to the list of IPs for auditing. This process then continues within the parameters configured by the user.'] = 'Sėklos atradimas yra kito tipo atradimas, kur jūs pateikiate vieno IP <i>Sėklos</i> prietaisas. Šis prietaisas yra audituojamas, o visi IP, kuriuos jis žino, yra įtraukiami į tikrintinų IP sąrašą. Tada šie prietaisai yra audituojami ir bet kokie jų žinomi IP taip pat įtraukiami į audito IP sąrašą. Šis procesas tęsiasi pagal vartotojo nustatytus parametrus.';

$GLOBALS["lang"]['A short description of the log entry.'] = 'Trumpas žurnalo įrašo aprašymas.';

$GLOBALS["lang"]['A storage area network (SAN) is a dedicated network that provides access to consolidated, block level data storage. SANs are primarily used to make storage devices, such as disk arrays, tape libraries, and optical jukeboxes, accessible to servers so that the devices appear like locally attached devices to the operating system. A SAN typically has its own network of storage devices that are generally not accessible through the local area network by other devices. The cost and complexity of SANs dropped in the early 2000s to levels allowing wider adoption across both enterprise and small to medium-sized business environments.'] = 'Saugojimo zonos tinklas (SAN) - tai specialus tinklas, suteikiantis prieigą prie konsoliduotos, bloko lygmens duomenų saugyklos. SOS visų pirma naudojamos serveriams prieinamoms atmintinėms, pvz., diskų matricoms, juostinėms bibliotekoms ir optinėms junginėms, gaminti, kad įrenginiai atrodytų kaip vietiniai prie operacinės sistemos prijungti įrenginiai. SAN paprastai turi nuosavą saugojimo įrenginių tinklą, kurio vietos tinkle paprastai negali pasiekti kiti įrenginiai. Nuo 2000 m. pradžios SANS sąnaudos ir sudėtingumas sumažėjo iki tokio lygio, kad būtų galima plačiau įsitvirtinti tiek įmonėse, tiek mažose ir vidutinio dydžio įmonėse.';

$GLOBALS["lang"]['A string that matches the <code>software.name</code> attribute. You can use the standard SQL wildcard of percent (%) to match one or more characters.'] = 'Eilutė, kuri atitinka <code>software.name</code> atributas. Galite naudoti standartinę SQL laukinės kortelės procentų (%), kad atitiktų vieną ar daugiau simbolių.';

$GLOBALS["lang"]['A structured system for managing sensitive information'] = 'Struktūruota neskelbtinos informacijos valdymo sistema';

$GLOBALS["lang"]['A timestamp.'] = 'Laiko žyma.';

$GLOBALS["lang"]['A user has a primary Org as well as a list of Orgs they can access. A user combines this with a list of assigned roles that define what actions they can take on items assigned to the Orgs they have access to. The combination of a users <i>orgs</i> and <i>roles</i> define what they can and cannot do within Open-AudIT.'] = 'Vartotojas turi pirminį Org, taip pat sąrašą Orgs jie gali pasiekti. Vartotojas sujungia tai su priskirtųjų vaidmenų sąrašą, kuris nustato, kokių veiksmų jie gali imtis dėl elementų priskirtas Orgs jie turi prieigą prie. Naudotojų derinys <i>orgai</i> ir <i>vaidmenys</i> apibrėžti, ką jie gali ir negali padaryti per Open- AudIT.';

$GLOBALS["lang"]['A user will have a list of associated organizations (orgs). Each org the user has will allow them to act upon items within that org as per their role(s).<br><br>All orgs except the default org have a parent. Think of an Org Chart. If a user has permission on an Org, they also have permission on any descendants of that Org.<br><br>Users are also allowed permission on a child org to see the items from parent orgs for certain collections. Those are: dashboards, discovery_scan_options, fields, files, groups, queries, reports, roles, rules, scripts, summaries, widgets.<br><br>Do not forget you have granular control over what users can see and do using Roles in Enterprise.'] = 'Vartotojas turės asocijuotų organizacijų sąrašą (orgai). Kiekvienas org vartotojas leis jiems veikti daiktų per tą org, kaip už savo vaidmenį (ai).<br/><br/>Visi orgai, išskyrus numatytąją org turi tėvų. Pagalvok apie Orgo žemėlapį. Jei naudotojas turi leidimą Orgui, jie taip pat turi leidimą bet kuriam to Orgo palikuoniui.<br/><br/>Naudotojams taip pat leidžiama vaiko org pamatyti elementus iš tėvų orgų tam tikrų kolekcijų. Tai: prietaisų skydai, atradimas _ scan _ options, laukai, failai, grupės, užklausos, ataskaitos, vaidmenys, taisyklės, scenarijus, santraukos, raštai.<br/><br/>Nepamirškite, kad turite granuliuotą kontrolę, ką vartotojai gali pamatyti ir daryti naudodami Roles in Enterprise.';

$GLOBALS["lang"]['A user will have a list of associated organizations (orgs). Each org the user has will allow them to act upon items within that org as per their role(s).<br><br>All orgs except the default org have a parent. Think of an Org Chart. If a user has permission on an Org, they also have permission on any descendants of that Org.<br><br>We have also allow a user with permission on a child org to see the items from parent orgs for certain collections. Those are: dashboards, discovery_scan_options, fields, files, groups, queries, roles, rules, scripts, summaries, widgets.<br><br>Do not forget you have granular control over what users can see and do using'] = 'Vartotojas turės asocijuotų organizacijų sąrašą (orgai). Kiekvienas org vartotojas leis jiems veikti daiktų per tą org, kaip už savo vaidmenį (ai).<br/><br/>Visi orgai, išskyrus numatytąją org turi tėvų. Pagalvok apie Orgo žemėlapį. Jei naudotojas turi leidimą Orgui, jie taip pat turi leidimą bet kuriam to Orgo palikuoniui.<br/><br/>Taip pat turime leisti vartotojui su leidimu vaikui org pamatyti elementus iš tėvų orgų tam tikrų kolekcijų. Tai: prietaisų skydai, atradimas _ scan _ options, laukai, failai, grupės, užklausos, vaidmenys, taisyklės, scenarijus, santraukos, raštai.<br/><br/>Nepamirškite, kad turite granules kontrolės, ką vartotojai gali pamatyti ir daryti naudojant';

$GLOBALS["lang"]['A virtual private network (VPN) is an overlay network in which some of the links between nodes are carried by open connections or virtual circuits in some larger network (e.g., the Internet) instead of by physical wires. The data link layer protocols of the virtual network are said to be tunneled through the larger network when this is the case. One common application is secure communications through the public Internet, but a VPN need not have explicit security features, such as authentication or content encryption. VPNs, for example, can be used to separate the traffic of different user communities over an underlying network with strong security features.<br><br>VPN may have best-effort performance, or may have a defined service level agreement (SLA) between the VPN customer and the VPN service provider. Generally, a VPN has a topology more complex than point-to-point.'] = 'Virtualus privatus tinklas (VPN) yra viršutinis tinklas, kuriame kai kurios jungtys tarp mazgų yra atviros jungtys arba virtualios grandinės kai kuriuose didesniuose tinkluose (pvz., internetas), o ne fiziniais laidais. Duomenų saito sluoksnio protokolai virtualaus tinklo yra teigiama, kad tunelis per didesnį tinklą, kai tai yra. Viena bendra programa yra saugus ryšys per viešąjį internetą, tačiau VPN nereikia turėti aiškių saugumo funkcijų, pvz., autentiškumo patvirtinimo ar turinio šifravimo. Pavyzdžiui, VPN gali būti naudojami atskirti skirtingų vartotojų bendruomenių srautą per pagrindinį tinklą su stipriomis apsaugos funkcijomis.<br/><br/>VPN gali turėti geriausias pastangas, arba gali turėti apibrėžtą paslaugų lygio susitarimą (SLA) tarp VPN kliento ir VPN paslaugų teikėjo. Paprastai VPN topologija yra sudėtingesnė nei taškinė.';

$GLOBALS["lang"]['A vulnerability affecting availability may allow attackers to disrupt services, crash systems, or cause denial-of-service (DoS) (None, Low, High).'] = 'Dėl pažeidžiamumo, turinčio įtakos prieinamumui, užpuolikai gali sutrikdyti paslaugas, avarijų sistemas arba sukelti netinkamą aptarnavimą (DoS) (nėra, žemas, aukštas).';

$GLOBALS["lang"]['A vulnerability affecting confidentiality may allow attackers to read sensitive data, such as personal information, credentials, or proprietary business data (None, Low, High).'] = 'Konfidencialumą pažeidžiantis pažeidžiamumas gali leisti užpuolikams skaityti slaptus duomenis, pavyzdžiui, asmeninę informaciją, įgaliojimus arba nuosavybinius verslo duomenis (nėra, žemas, aukštas).';

$GLOBALS["lang"]['A vulnerability affecting integrity may allow attackers to modify data, inject malicious code, or alter system configurations (None, Low, High).'] = 'Pažeidžiamumas, turintis įtakos vientisumui, gali leisti užpuolikams keisti duomenis, įšvirkšti kenkėjišką kodą arba pakeisti sistemos konfigūraciją (nėra, žemas, aukštas).';

$GLOBALS["lang"]['A vulnerability can be editied and more specific package names provided where the enrichment data is insufficient or the generated SQL is not quite correct.'] = 'Pažeidžiamumas gali būti derinamas ir konkretesni paketų pavadinimai, jei sodrinimo duomenų nepakanka arba sukurta SQL nėra visiškai teisinga.';

$GLOBALS["lang"]['A vulnerability item in Open-AudIT can be thought of as essentially a query against your database to determine your potential exposure to a given CVE report. A vulnerability is made up of the CVE report, along with enrichment data from FirstWave. These two items are combined to produce a suitable query that is automatically downloaded from FirstWave.'] = 'Pažeidžiamumo punktas Open- AudIT gali būti manoma, kaip iš esmės užklausa prieš savo duomenų bazę, siekiant nustatyti savo galimą poveikį tam tikrą CVE ataskaitą. Pažeidžiamumą sudaro CVE pranešimas ir FirstWave sodrinimo duomenys. Šie du elementai yra sujungti gaminti tinkamą užklausą, kuri yra automatiškai atsisiųsti iš FirstWave.';

$GLOBALS["lang"]['A wide area network (WAN) is a computer network that covers a large geographic area such as a city, country, or spans even intercontinental distances. A WAN uses a communications channel that combines many types of media such as telephone lines, cables, and air waves. A WAN often makes use of transmission facilities provided by common carriers, such as telephone companies. WAN technologies generally function at the lower three layers of the OSI reference model: the physical layer, the data link layer, and the network layer.'] = 'Plataus ploto tinklas (WAN) yra kompiuterinis tinklas, apimantis didelę geografinę teritoriją, pvz., miestą, šalį ar net tarpžemyninius atstumus. WAN naudoja ryšių kanalą, kuris sujungia įvairių rūšių žiniasklaidos, pavyzdžiui, telefono linijų, kabelių, ir oro bangų. WAN dažnai naudojasi perdavimo įrenginiais, kuriuos teikia bendri vežėjai, pavyzdžiui, telefono ryšio bendrovės. WAN technologijos paprastai veikia žemesniuose trijuose OSI etaloninio modelio sluoksniuose: fiziniame sluoksnyje, duomenų ryšio sluoksnyje ir tinklo sluoksnyje.';

$GLOBALS["lang"]['AD Group'] = 'AD grupė';

$GLOBALS["lang"]['ADSL, HFC, ISDN, etc.'] = 'ADSL, HFC, ISDN ir t. t.';

$GLOBALS["lang"]['AIX'] = 'AIX';

$GLOBALS["lang"]['ALL IPs'] = 'VISI IP';

$GLOBALS["lang"]['API / Web Access'] = 'API / Web prieiga';

$GLOBALS["lang"]['API Documentation'] = 'API dokumentacija';

$GLOBALS["lang"]['API Key required.'] = 'Reikalingas API raktas.';

$GLOBALS["lang"]['API Result'] = 'API rezultatas';

$GLOBALS["lang"]['About'] = 'Apie';

$GLOBALS["lang"]['Above are the only required items.'] = 'Aukščiau yra vieninteliai reikalaujami elementai.';

$GLOBALS["lang"]['Accept'] = 'Priimti';

$GLOBALS["lang"]['Access Model'] = 'Prieigos modelis';

$GLOBALS["lang"]['access_point'] = 'Prieigos taškas';

$GLOBALS["lang"]['Access Point'] = 'Prieigos taškas';

$GLOBALS["lang"]['access_token'] = 'Prieigos taškai';

$GLOBALS["lang"]['Access Token'] = 'Prieigos taškai';

$GLOBALS["lang"]['Access to the admin$ share and RPC uses the SMB2 protocol.'] = 'Prieiga prie admin $akcijų ir RPC naudoja 2 protokolas.';

$GLOBALS["lang"]['ack_by'] = 'Ack By';

$GLOBALS["lang"]['Ack By'] = 'Ack By';

$GLOBALS["lang"]['ack_date'] = 'Akto data';

$GLOBALS["lang"]['Ack Date'] = 'Akto data';

$GLOBALS["lang"]['ack_time'] = 'Ack laikas';

$GLOBALS["lang"]['Ack Time'] = 'Ack laikas';

$GLOBALS["lang"]['action'] = 'Veiksmai';

$GLOBALS["lang"]['Action'] = 'Veiksmai';

$GLOBALS["lang"]['action_audit'] = 'Veiksmų auditas';

$GLOBALS["lang"]['Action Audit'] = 'Veiksmų auditas';

$GLOBALS["lang"]['action_command'] = 'Veiksmo komanda';

$GLOBALS["lang"]['Action Command'] = 'Veiksmo komanda';

$GLOBALS["lang"]['action_date'] = 'Veiksmo data';

$GLOBALS["lang"]['Action Date'] = 'Veiksmo data';

$GLOBALS["lang"]['action_devices_assigned_to_location'] = 'Į vietą priskirti veiksmų įrenginiai';

$GLOBALS["lang"]['Action Devices Assigned To Location'] = 'Į vietą priskirti veiksmų įrenginiai';

$GLOBALS["lang"]['action_devices_assigned_to_org'] = 'Orgui priskirti veiksmų įrenginiai';

$GLOBALS["lang"]['Action Devices Assigned To Org'] = 'Orgui priskirti veiksmų įrenginiai';

$GLOBALS["lang"]['action_download'] = 'Veiksmų siuntimas';

$GLOBALS["lang"]['Action Download'] = 'Veiksmų siuntimas';

$GLOBALS["lang"]['action_uninstall'] = 'Veiksmas pašalintas';

$GLOBALS["lang"]['Action Uninstall'] = 'Veiksmas pašalintas';

$GLOBALS["lang"]['actioned'] = 'Įdiegta';

$GLOBALS["lang"]['Actioned'] = 'Įdiegta';

$GLOBALS["lang"]['actioned_by'] = 'Pagal';

$GLOBALS["lang"]['Actioned By'] = 'Pagal';

$GLOBALS["lang"]['actioned_date'] = 'Patvirtinta data';

$GLOBALS["lang"]['Actioned Date'] = 'Patvirtinta data';

$GLOBALS["lang"]['actions'] = 'Veiksmai';

$GLOBALS["lang"]['Actions'] = 'Veiksmai';

$GLOBALS["lang"]['Activate'] = 'Aktyvuoti';

$GLOBALS["lang"]['Activate Free License'] = 'Aktyvuoti laisvą licenciją';

$GLOBALS["lang"]['Activate Key'] = 'Aktyvuoti raktą';

$GLOBALS["lang"]['Activate a free Enterprise license'] = 'Aktyvuoti nemokamą "Enterprise" licenciją';

$GLOBALS["lang"]['Active'] = 'Aktyvus';

$GLOBALS["lang"]['Active / Active'] = 'Aktyvus / aktyvus';

$GLOBALS["lang"]['Active / Passive'] = 'Aktyvus / pasyvus';

$GLOBALS["lang"]['Active Directory'] = 'Aktyvus aplankas';

$GLOBALS["lang"]['Active Directory Domain'] = 'Aktyvus aplankų domenas';

$GLOBALS["lang"]['active_directory_ou'] = 'Aktyvus aplankas Ou';

$GLOBALS["lang"]['Active Directory Ou'] = 'Aktyvus aplankas Ou';

$GLOBALS["lang"]['Active Directory Server'] = 'Aktyvus aplankų serveris';

$GLOBALS["lang"]['Active Directory and OpenLDAP'] = 'Aktyvus aplankas ir OpenLDAP';

$GLOBALS["lang"]['ad_domain'] = 'Ad sritis';

$GLOBALS["lang"]['Ad Domain'] = 'Ad sritis';

$GLOBALS["lang"]['ad_group'] = 'Ad grupė';

$GLOBALS["lang"]['Ad Group'] = 'Ad grupė';

$GLOBALS["lang"]['ad_server'] = 'Ad serveris';

$GLOBALS["lang"]['Ad Server'] = 'Ad serveris';

$GLOBALS["lang"]['Add'] = 'Pridėti';

$GLOBALS["lang"]['Add Credentials'] = 'Pridėti kreditus';

$GLOBALS["lang"]['Add Device'] = 'Pridėti įrenginį';

$GLOBALS["lang"]['Add Device to Application'] = 'Įrenginio įtraukimas į programą';

$GLOBALS["lang"]['Add Device to Cluster'] = 'Pridėti įrenginį į klasterį';

$GLOBALS["lang"]['Add Exception'] = 'Pridėti išimtį';

$GLOBALS["lang"]['Add Field'] = 'Pridėti laukelį';

$GLOBALS["lang"]['Add If'] = 'Pridėti jei';

$GLOBALS["lang"]['Add Policies from Device'] = 'Pridėti politiką iš įrenginio';

$GLOBALS["lang"]['Add Policy'] = 'Pridėti politiką';

$GLOBALS["lang"]['Add Then'] = 'Pridėti tada';

$GLOBALS["lang"]['Add Your Credentials'] = 'Pridėti Jūsų kreditus';

$GLOBALS["lang"]['Add image'] = 'Pridėti paveikslėlį';

$GLOBALS["lang"]['additional_items'] = 'Papildomi punktai';

$GLOBALS["lang"]['Additional Items'] = 'Papildomi punktai';

$GLOBALS["lang"]['address'] = 'Adresas';

$GLOBALS["lang"]['Address'] = 'Adresas';

$GLOBALS["lang"]['Address any nonconformities'] = 'Adresas bet kokioms neatitiktims';

$GLOBALS["lang"]['Address audit findings and corrective actions'] = 'Spręsti audito išvadų ir taisomųjų veiksmų klausimus';

$GLOBALS["lang"]['Admin'] = 'Adminas';

$GLOBALS["lang"]['admin_status'] = 'Admin būsena';

$GLOBALS["lang"]['Admin Status'] = 'Admin būsena';

$GLOBALS["lang"]['advanced'] = 'Sudėtingesnė';

$GLOBALS["lang"]['Advanced'] = 'Sudėtingesnė';

$GLOBALS["lang"]['Afghanistan'] = 'Afganistanas';

$GLOBALS["lang"]['After an Integration has been created, when you view the details of an Integration you will notice a field named Debug. This is set to no by default. Changing it to yes provides extra logging when an Integration is executed. Debug should not be left as yes. This is because the debug output will contain everything retrieved from external systems - including items such as WMI and SNMP credentials. The debug option should be used only when an issue has occurred and you wish to dig deeper in to see if you can determine why.'] = 'Po to, kai Integracija buvo sukurta, kai jūs peržiūrėti integracijos detales, jūs pastebėsite lauką pavadinimu Derinimas. Pagal nutylėjimą tai nėra. Pakeitus jį taip, suteikiama papildoma medienos ruoša vykdant integraciją. Derinimas neturėtų būti paliktas kaip "taip". Taip yra todėl, kad derinimo išvestis apims viską, kas buvo gauta iš išorinių sistemų - įskaitant tokius elementus kaip WMI ir SNMP įgaliojimai. Derinimo parinktis turėtų būti naudojama tik tada, kai įvyksta problema ir norite kasti giliau, kad pamatytumėte, ar galite nustatyti kodėl.';

$GLOBALS["lang"]['After completing the above, uninstall the agent.'] = 'Užbaigę aukščiau, pašalinti agentas.';

$GLOBALS["lang"]['Agent? Discovery? Credentials?'] = 'Agente? Discovery? Kreditai?';

$GLOBALS["lang"]['agents'] = 'Asmenys';

$GLOBALS["lang"]['Agents'] = 'Asmenys';

$GLOBALS["lang"]['Agents entries can be created that specify a duration, a network and an operating system. If all tests match, the server then asks the agent to perform actions. If any test is not set, it is excluded from the <i>all must match</i> requirement.<br><br>You can create multiple agents and have the server check one or all agent entries. You might (for example) specify one agent that says <i>If the agent IP is in this subnet, set the location_id of the device</i>.<br><br>Another example might be not running an audit at all, rather download a script and run it. If the agent is installed with admin rights, you can now manage your machines without opening <strong>any</strong> ports from it to the world.</p><p>Enabling advanced agents means an agent can be instructed to download any file and execute any command. <strong>WARNING</strong>: This comes with security risks. This configuration will <strong>only</strong> function when running Open-AudIT using HTTPS and a valid (Certificate Authority provided) certificate for '] = 'Agentai įrašai gali būti sukurta, kad nurodyti trukmę, tinklą ir operacinę sistemą. Jei visi bandymai sutampa, serveris tada prašo agentas atlikti veiksmus. Jei kuris nors bandymas nėra nustatytas, jis pašalinamas iš <i>visi turi atitikti</i> reikalavimas.<br/><br/>Galite sukurti kelis agentus ir turėti serverį patikrinti vieną ar visus agento įrašus. Galite (pavyzdžiui) nurodyti vieną agentą, kuris sako: <i>Jei agentas IP yra šiame potinklyje, nustatyti įrenginio vietą _ id</i>.<br/><br/>Kitas pavyzdys gali būti ne paleisti auditą, o atsisiųsti scenarijų ir paleisti jį. Jei agentas yra įdiegta su admin teises, dabar galite valdyti savo mašinas be atidarymo <strong>bet</strong> uostai nuo jo iki pasaulio.<p>Pažangiųjų agentų įjungimas reiškia, kad agentui gali būti nurodyta atsisiųsti bet kokį failą ir vykdyti bet kokią komandą. <strong>ĮSPĖJIMAS</strong>: Tai kelia pavojų saugumui. Ši konfigūracija <strong>Tik</strong> veikia, kai veikia Open- AudIT naudojant HTTPS ir galiojantį (Sertifikavimo institucija nurodyta) sertifikatą </p>';

$GLOBALS["lang"]['Aggressive'] = 'Agresyvus';

$GLOBALS["lang"]['Aland Islands'] = 'Alandų salos';

$GLOBALS["lang"]['Albania'] = 'Albanija';

$GLOBALS["lang"]['Albanian'] = 'AlbanųName';

$GLOBALS["lang"]['alert_style'] = 'Įspėjimo stilius';

$GLOBALS["lang"]['Alert Style'] = 'Įspėjimo stilius';

$GLOBALS["lang"]['Algeria'] = 'Alžyras';

$GLOBALS["lang"]['algorithm'] = 'Algorithm';

$GLOBALS["lang"]['Algorithm'] = 'Algorithm';

$GLOBALS["lang"]['alias'] = 'Kita informacija';

$GLOBALS["lang"]['Alias'] = 'Kita informacija';

$GLOBALS["lang"]['All'] = 'Visi';

$GLOBALS["lang"]['All IPs'] = 'Visi IP';

$GLOBALS["lang"]['All Policies'] = 'Visos politikos sritys';

$GLOBALS["lang"]['All Queued Items'] = 'Visi įtraukti straipsniai';

$GLOBALS["lang"]['All collections URLs use the format'] = 'Visi rinkiniai URL naudoti formatą';

$GLOBALS["lang"]['All device sub-tables contain a couple of important columns.'] = 'Visi įrenginio postalai turi keletą svarbių stulpelių.';

$GLOBALS["lang"]['All devices with a type like computer.'] = 'Visi prietaisai su panašaus tipo kompiuteriu.';

$GLOBALS["lang"]['All devices with a type of computer or router.'] = 'Visi prietaisai su kompiuterio ar maršrutizatoriaus tipo.';

$GLOBALS["lang"]['All devices without a type of switch and printer.'] = 'Visi įrenginiai be jungiklio ir spausdintuvo tipo.';

$GLOBALS["lang"]['All devices without a type of switch and printer. Essentially the same as the above query.'] = 'Visi įrenginiai be jungiklio ir spausdintuvo tipo. Iš esmės tas pats kaip ir pirmiau paklausimas.';

$GLOBALS["lang"]['All regular discovery options are also available for use in Device Seed Discoveries.'] = 'Visi reguliarūs atradimo variantai taip pat yra prieinami naudoti prietaiso sėklų dezcoversies.';

$GLOBALS["lang"]['All tasks can be created the same in Windows and Linux. Tasks use the CRON method for scheduling execution.'] = 'Visos užduotys gali būti sukurtos tas pats Windows ir Linux. Užduotys naudoti CRON metodą planavimo vykdymo.';

$GLOBALS["lang"]['Along with this request for information, we send back to FirstWave datapoints that will give us some much needed information on feature use and your installation.'] = 'Kartu su šiuo informacijos prašymu, mes siunčiame atgal į FirstWave duomenų taškų, kurie suteiks mums labai reikalingą informaciją apie funkcijų naudojimą ir jūsų įdiegimą.';

$GLOBALS["lang"]['Also can be created from the'] = 'Taip pat gali būti sukurta iš';

$GLOBALS["lang"]['Alternatives'] = 'Alternatyvos';

$GLOBALS["lang"]['Amazon AWS Fields'] = 'Amazon AWS Sritys';

$GLOBALS["lang"]['American Samoa'] = 'Amerikos Samoa';

$GLOBALS["lang"]['An Active Directory discovery will query Active Directory for a list of networks and scan the associated IPs just like a regular Subnet discovery.'] = 'Aktyvus aplankas atradimas bus užklausa Active Directory tinklų sąrašą ir nuskaityti susijusius IP kaip reguliariai Subnet atradimas.';

$GLOBALS["lang"]['An Org (organization) is the owner of most items in collections within Open-AudIT. With the exception of global items like <i>configuration</i>, most items are assigned to (owned by) an Org. A user has access to those items in a collection, that below to an Org the user has permission on.'] = 'Org (organizacija) yra daugelio kolekcijų elementų savininkas Open- AudIT. Išskyrus tokius pasaulinius elementus kaip: <i>konfigūracija</i>, Dauguma daiktų yra priskirtas (priklauso) Org. Vartotojas turi prieigą prie tų elementų kolekcijoje, kad žemiau į Org vartotojas turi leidimą.';

$GLOBALS["lang"]['An application is actively accepting TCP connections, UDP datagrams or SCTP associations on this port. Finding these is often the primary goal of port scanning. Security-minded people know that each open port is an avenue for attack. Attackers and pen-testers want to exploit the open ports, while administrators try to close or protect them with firewalls without thwarting legitimate users. Open ports are also interesting for non-security scans because they show services available for use on the network.'] = 'Programa aktyviai priima TCP ryšius, UDP duomenų diagramos arba SCTP asociacijos į šį prievadą. Rasti juos dažnai yra pagrindinis tikslas uosto skenavimo. Saugaus mąstymo žmonės žino, kad kiekvienas atviras uostas yra puolimo kelias. Lankytojai ir pentesteriai nori išnaudoti atvirus uostus, o administratoriai stengiasi juos uždaryti arba apsaugoti ugniasienėmis nekliudydami teisėtiems vartotojams. Atviri uostai yra taip pat įdomu ne saugumo nuskaito, nes jie rodo paslaugas, kurias galima naudoti tinkle.';

$GLOBALS["lang"]['An array of <code>benchmarks.id</code>.'] = 'Daug <code>benchmarks.id</code>.';

$GLOBALS["lang"]['An array of <code>devices.id</code>.'] = 'Daug <code>devices.id</code>.';

$GLOBALS["lang"]['An array of object representing external links to more information.'] = 'Objekto masyvas atstovauja išorines nuorodas į daugiau informacijos.';

$GLOBALS["lang"]['An educated guess to the identity and type of device'] = 'Išsilavinęs spėjimas į prietaiso tapatybę ir tipą';

$GLOBALS["lang"]['An encrypted JSON document containing the required attributes depending on the <code>credentials.type</code>.'] = 'Užšifruotas JSON dokumentas, kuriame, priklausomai nuo <code>credentials.type</code>.';

$GLOBALS["lang"]['An enterprise private network is a network that a single organization builds to interconnect its office locations (e.g., production sites, head offices, remote offices, shops) so they can share computer resources.'] = 'Privatus įmonių tinklas - tai tinklas, kurį kuria viena organizacija, siekdama sujungti savo biurų vietas (pvz., gamybos vietas, pagrindines buveines, nuotolines buveines, parduotuves), kad galėtų dalytis kompiuteriniais ištekliais.';

$GLOBALS["lang"]['An entry can be created using the web interface if the current user logged in has a role that contains the'] = 'Įrašas gali būti sukurtas naudojant Web sąsają su vartotoju, jei dabartinis vartotojas prisijungęs vaidmenį, kuris yra';

$GLOBALS["lang"]['An example JSON POST body is below. This should be attached to the &quot;data&quot; form item.'] = 'Pavyzdys JSON POST kūnas yra žemiau. Tai turėtų būti pridedama prie "duomenų" formos straipsnio.';

$GLOBALS["lang"]['An example widget SQL showing devices counted per location.'] = 'Name';

$GLOBALS["lang"]['An existing Open-AudIT user was authenticated and authorized by the LDAP server. Success.'] = 'Esamas Open- AudIT naudotojas buvo patvirtintas LDAP serverio. Sėkmės.';

$GLOBALS["lang"]['An indication of the level of service required by this site.'] = 'Nurodomas šioje svetainėje reikalaujamas paslaugos lygis.';

$GLOBALS["lang"]['An internal field that indicates if the discovery has completed.'] = 'Vidinis laukas, rodantis, ar atradimas baigtas.';

$GLOBALS["lang"]['An open|filtered port is considered open (and will trigger device detection).<br>Previously, Open-AudIT considered an Nmap response of'] = 'Atvira 124. filtruota prievadas laikomas atvira (ir bus sukelti prietaiso aptikimo).<br/>Anksčiau, Open- Aud IT manė, Nmap atsakas';

$GLOBALS["lang"]['An optional GeoCode'] = 'Neprivalomas geokodeksas';

$GLOBALS["lang"]['An optional password to use sudo.'] = 'Neprivalomas slaptažodis sudo naudojimui.';

$GLOBALS["lang"]['Analyzed'] = 'Analizuojama';

$GLOBALS["lang"]['And finally, click Submit to execute this discovery.'] = 'Ir pagaliau, spustelėkite Pateikite atlikti šį atradimą.';

$GLOBALS["lang"]['And if Something Goes Wrong?'] = 'O jei kas nors suklystų?';

$GLOBALS["lang"]['And lastly click <i>Submit</i> to create your Open-AudIT Auth method for Entra.'] = 'Ir galiausiai spustelėkite <i>Pateikti</i> sukurti savo Open- AudIT Auth metodą Entra.';

$GLOBALS["lang"]['And lastly, not so much a security issue - more peace of mind. The data structures are open and documented. You can view them'] = 'Ir galiausiai, ne tiek saugumo klausimas - daugiau ramybės. Duomenų struktūros yra atviros ir dokumentuotos. Jūs galite peržiūrėti juos';

$GLOBALS["lang"]['And provide a name - we humbly recommend Open-AudIT &#128512;, but you can name it anything you like. Make sure the option for <i>Integrate any other application you do not find in the gallery (Non-gallery)</i> is selected. And then click <i>Create<i>.'] = 'Ir pateikti pavadinimą - mes nuolankiai rekomenduojame Open- AudIT, bet jūs galite jį pavadinti viską, kas jums patinka. Įsitikinkite, kad parinktis <i>Integruoti bet kurią kitą programą, kurios nerasite galerijoje (Ne galerija)</i> yra pasirinktas. Ir tada spustelėkite <i>Sukurti<i>.</i></i>';

$GLOBALS["lang"]['And so much more.'] = 'Ir daug daugiau.';

$GLOBALS["lang"]['Andorra'] = 'Andora';

$GLOBALS["lang"]['Angola'] = 'Angola';

$GLOBALS["lang"]['Anguilla'] = 'Angilija';

$GLOBALS["lang"]['Annex A Controls'] = 'A priedas Kontrolė';

$GLOBALS["lang"]['Antarctica'] = 'Antarktida';

$GLOBALS["lang"]['AntiVirus'] = 'Antivirusas';

$GLOBALS["lang"]['AntiVirus Packages'] = 'Antivirusinės pakuotės';

$GLOBALS["lang"]['Antigua and Barbuda'] = 'Antigva ir Barbuda';

$GLOBALS["lang"]['Antivirus'] = 'Antivirusas';

$GLOBALS["lang"]['Any TCP ports (comma seperated, no spaces) you wish to exclude from this discovery. Only available when using Nmap 7+.'] = 'Visi TCP prievadai (kableliai, tarpai), kuriuos norite pašalinti iš šio atradimo. Galima tik naudojant Nmap 7 +.';

$GLOBALS["lang"]['Any UDP ports (comma seperated, no spaces) you wish to exclude from this discovery. Only available when using Nmap 7+.'] = 'Bet kurie UDP prievadai (kableliai, tarpai), kuriuos norite pašalinti iš šio atradimo. Galima tik naudojant Nmap 7 +.';

$GLOBALS["lang"]['Any additional documentation you need.'] = 'Papildomi dokumentai, kurių jums reikia.';

$GLOBALS["lang"]['Any additional notes you care to make.'] = 'Papildomos pastabos, kurias norėtumėte pateikti.';

$GLOBALS["lang"]['Any attributes followed by a * indicate that CVSS data less than v4 was used to complete this field. By default, we attempt to use v4 fields, however if they are not populated we will fallback to the previous version(s) for attributes.'] = 'Visi požymiai, po kurių eina *, rodo, kad šiam laukeliui užpildyti buvo naudojami mažesni nei v4 CVSS duomenys. Pagal numatytuosius nustatymus, mes stengiamės naudoti v4 laukelius, tačiau jei jie nėra apgyvendinti, mes grįšime į ankstesnę (-as) versiją (-as) požymiams.';

$GLOBALS["lang"]['Any devices will be assigned to this Org when they run their audit script (if set).'] = 'Visi įrenginiai bus priskirti šiam Org, kai jie paleisti savo audito scenarijų (jei nustatyta).';

$GLOBALS["lang"]['Any devices will be assigned to this Org when they run their audit script (if set). Links to <code>orgs.id</code>.'] = 'Visi įrenginiai bus priskirti šiam Org, kai jie paleisti savo audito scenarijų (jei nustatyta). Nuorodos į <code>orgs.id</code>.';

$GLOBALS["lang"]['Any discovered devices will be assigned to this Location if set. Links to <code>locations.id</code>.'] = 'Visi rasti įrenginiai bus priskirti šiai vietai, jei ji bus nustatyta. Nuorodos į <code>locations.id</code>.';

$GLOBALS["lang"]['Any discovered devices will be assigned to this Location when they run their audit script (if set).'] = 'Visi rasti įrenginiai bus priskirti šiai vietai, kai jie veikia savo audito scenarijų (jei nustatyta).';

$GLOBALS["lang"]['Any discovered devices will be assigned to this Location when they run their audit script (if set). Links to <code>locations.id</code>.'] = 'Visi rasti įrenginiai bus priskirti šiai vietai, kai jie veikia savo audito scenarijų (jei nustatyta). Nuorodos į <code>locations.id</code>.';

$GLOBALS["lang"]['Any discovered devices will be assigned to this Org if set. If not set, they are assigned to the <code>org_id</code> of this discovery. Links to <code>orgs.id</code>.'] = 'Visi rasti įrenginiai bus priskirti šiam Orgui, jei bus nustatyti. Jei nenustatyta, jie priskiriami <code>org_id</code> šio atradimo. Nuorodos į <code>orgs.id</code>.';

$GLOBALS["lang"]['Any files found in this manner are stored in the <i>executable</i> table as per any other device component.'] = 'Visi tokiu būdu rasti failai yra saugomi <i>vykdomasis</i> lentelė kaip bet kuriai kitai įtaiso sudedamajai daliai.';

$GLOBALS["lang"]['Any required filter. NOTE: When type = traffic, this represents the font-awesome icon.'] = 'Bet koks reikalingas filtras. PASTABA: Kai tipas = eismo, tai atspindi šrifto- awesome piktogramą.';

$GLOBALS["lang"]['Any specific TCP ports you wish tested (comma seperated, no spaces).'] = 'Bet kokie specifiniai TCP prievadai, kuriuos norite išbandyti (kableliais, be tarpų).';

$GLOBALS["lang"]['Any specific UDP ports you wish tested (comma seperated, no spaces).'] = 'Bet kokie konkretūs UDP prievadai, kuriuos norite išbandyti (kableliais, be tarpų).';

$GLOBALS["lang"]['Any user uploaded images are placed here.'] = 'Visi naudotojo įkelti vaizdai yra pateikiami čia.';

$GLOBALS["lang"]['Application'] = 'Taikymas';

$GLOBALS["lang"]['Application Definitions'] = 'Taikymo apibrėžtys';

$GLOBALS["lang"]['application_id'] = 'Prašymo ID';

$GLOBALS["lang"]['Application ID'] = 'Prašymo ID';

$GLOBALS["lang"]['Application Licenses'] = 'Paraiškos licencijos';

$GLOBALS["lang"]['Application, Operating System or Hardware.'] = 'Taikymas, operacinė sistema arba aparatinė įranga.';

$GLOBALS["lang"]['applications'] = 'Paraiškos';

$GLOBALS["lang"]['Applications'] = 'Paraiškos';

$GLOBALS["lang"]['Applications are an Enterprise only feature.'] = 'Programos yra tik įmonės funkcija.';

$GLOBALS["lang"]['Applications are being introduced in Open-AudIT 2.2 with a view to expand on the concept as further development is made.'] = 'Paraiškos pateikiamos Open- AudIT 2.2, siekiant išplėsti koncepciją, nes ji toliau plėtojama.';

$GLOBALS["lang"]['applied'] = 'Taikomas';

$GLOBALS["lang"]['Applied'] = 'Taikomas';

$GLOBALS["lang"]['Approved'] = 'Patvirtinta';

$GLOBALS["lang"]['Approved Packages'] = 'Patvirtintos pakuotės';

$GLOBALS["lang"]['April'] = 'Balandis';

$GLOBALS["lang"]['Arabic'] = 'Arabų';

$GLOBALS["lang"]['architecture'] = 'Architektūra';

$GLOBALS["lang"]['Architecture'] = 'Architektūra';

$GLOBALS["lang"]['Are you sure you want to delete this input item?'] = 'Ar tikrai norite ištrinti šį įvesties elementą?';

$GLOBALS["lang"]['Are you sure you want to delete this output item?'] = 'Ar tikrai norite ištrinti šį išvesties elementą?';

$GLOBALS["lang"]['Are you sure?'] = 'Tikrai?';

$GLOBALS["lang"]['Are you sure? This will remove all queue entries and prevent the remaining IPs from being discovered.'] = 'Tikrai? Tai pašalins visus eilės įrašus ir neleis atrasti likusių IP.';

$GLOBALS["lang"]['Are you sure? This will reset the queue processing count and could cause load on the server.'] = 'Tikrai? Tai atstatys eilę apdorojimo skaičių ir gali sukelti apkrovos serveryje.';

$GLOBALS["lang"]['area'] = 'Zona';

$GLOBALS["lang"]['Area'] = 'Zona';

$GLOBALS["lang"]['Argentina'] = 'Argentina';

$GLOBALS["lang"]['Armenia'] = 'Armėnija';

$GLOBALS["lang"]['arp'] = 'Arp';

$GLOBALS["lang"]['Arp'] = 'Arp';

$GLOBALS["lang"]['Aruba'] = 'Aruba';

$GLOBALS["lang"]['As a reminder of how authorisations works in Open-AudIT, see'] = 'Kaip priminimas, kaip leidimai veikia Open- AudIT, žr.';

$GLOBALS["lang"]['As a result, we <strong>must</strong> have the admin$ share available to the discovery credentials user. Please check the target Windows machine provides <i>write</i> access for the discovery credentials user.<br>'] = 'Todėl mes <strong>turi</strong> turėti admin $akcija prieinama atradimo savybes vartotojui. Prašome patikrinti tikslinės Windows mašina suteikia <i>rašyti</i> prieiga paieškos žymenų naudotojui.<br/>';

$GLOBALS["lang"]['As mentioned above, the developers do not speak all the translation languages offered. This means we cannot review with acuracy, the translated text. We do try for a cursory review. If you see something that is not translated correctly, you can change it yourself. Edit the appropriate language file (as below) and find the text to be changed. Maybe it does not exist and you need to add it. Just change the text, save the file and refresh your we page. No need to restart any services/daemons for it to take effect. You might need to force refresh your browser.'] = 'Kaip jau minėta, kūrėjai nekalba visomis siūlomomis vertimo kalbomis. Tai reiškia, kad mes negalime peržiūrėti turinio, išversto teksto. Mes stengiamės, kad terminų apžvalga. Jei matote kažką, kas nėra teisingai išversta, galite ją pakeisti patys. Keisti atitinkamą kalbos failą (kaip nurodyta toliau) ir rasti tekstą, kuris turi būti pakeistas. Galbūt jis neegzistuoja ir jums reikia jį pridėti. Tiesiog pakeisti tekstą, išsaugoti failą ir atnaujinti savo mes puslapyje. Nereikia iš naujo paleisti jokių paslaugų / daemonų, kad tai įsigaliotų. Jums gali tekti priversti atnaujinti savo naršyklę.';

$GLOBALS["lang"]['As per the OpenSCAP benchmarks - <i>Do not attempt to implement any of the settings in this benchmark without first testing them in a non-operational environment. The creators of this benchmark assume no responsibility whatsoever for its use by other parties, and makes no guarantees, expressed or implied, about its quality, reliability, or any other characteristic.</i><br><br>Seriously, do not blindly start <i>fixing</i> issues revealed after running a benchmark without first thoroughly testing in a non-production, identical environment.'] = 'Kaip pagal OpenSCAP gaires - <i>Nebandykite įgyvendinti jokių nustatymų šiame santykiniame taršos rodiklyje prieš tai neišbandžius jų neveikiančioje aplinkoje. Šio lyginamojo indekso kūrėjai neprisiima jokios atsakomybės už tai, kaip jį naudoja kitos šalys, ir neteikia jokių garantijų, išreikštų ar numanomų, apie jo kokybę, patikimumą ar bet kokią kitą charakteristiką.</i><br/><br/>Rimtai, nepradėk aklai <i>nustatantis</i> problemos išryškėjo po to, kai veikia lyginamasis standartas be visų pirma kruopščiai išbandyti ne gamybai, identiška aplinka.';

$GLOBALS["lang"]['As per the attributes for device environments. Production, Training, et al.'] = 'Pagal įrenginio aplinkos požymius. Gamyba, mokymas, et al.';

$GLOBALS["lang"]['As the audit script uses bash, you can use the wildcard of * when you are defining directories and exclusions.'] = 'Kadangi audito scenarijus naudoja bash, galite naudoti laukinę kortelę *, kai esate apibrėžiant katalogus ir išimtis.';

$GLOBALS["lang"]['As usual, go to menu → Manage → Integrations → Create Integration. As above, if you are running on Linux and you have NMIS on the same server, you do not need to do anything other than click <i>Submit</i>. I cannot make it easier than that.'] = 'Kaip įprasta, eikite į meniu → Tvarkyti → Integracijos → Sukurti integraciją. Kaip nurodyta pirmiau, jei naudojate Linux ir turite NMIS tame pačiame serveryje, jums nereikia daryti nieko kito, išskyrus spustelėkite <i>Pateikti</i>. Negaliu palengvinti.';

$GLOBALS["lang"]['As we run Discoveries and collect device results we populate the list of networks. The Blessed Subnets feature uses this list of networks to only accept data from devices on those networks.'] = 'Kaip mes paleisti Discoversies ir rinkti įrenginio rezultatus mes populate tinklų sąrašą. Švč. Points funkcija naudoja šį tinklų sąrašą tik priimti duomenis iš įrenginių tuose tinkluose.';

$GLOBALS["lang"]['As you have Collectors registered, please choose where to execute this discovery.'] = 'Kaip jūs turite Kolekcijos registruoti, Prašome pasirinkti, kur atlikti šį atradimą.';

$GLOBALS["lang"]['Ask me later'] = 'Paklausk manęs vėliau';

$GLOBALS["lang"]['Ask the Community for help or contribute answers for others.'] = 'Klauskite Bendrijos pagalbos ar atsakymų kitiems.';

$GLOBALS["lang"]['aspect_ratio'] = 'Prospektas';

$GLOBALS["lang"]['Aspect Ratio'] = 'Prospektas';

$GLOBALS["lang"]['Asset ID'] = 'Turto identifikavimo kodas';

$GLOBALS["lang"]['asset_ident'] = 'Turtas';

$GLOBALS["lang"]['Asset Ident'] = 'Turtas';

$GLOBALS["lang"]['asset_number'] = 'Turto numeris';

$GLOBALS["lang"]['Asset Number'] = 'Turto numeris';

$GLOBALS["lang"]['asset_tag'] = 'Turto žyma';

$GLOBALS["lang"]['Asset Tag'] = 'Turto žyma';

$GLOBALS["lang"]['Assign Device to Application'] = 'Priskirti įrenginį programai';

$GLOBALS["lang"]['Assign Device to Cluster'] = 'Priskirti įrenginį klasteriui';

$GLOBALS["lang"]['Assign Device to Location'] = 'Priskirti įrenginį vietai';

$GLOBALS["lang"]['Assign Device to Organisation'] = 'Priskirti įrenginį organizacijai';

$GLOBALS["lang"]['Assign Devices to Location'] = 'Priskirti įrenginius vietai';

$GLOBALS["lang"]['Assign Devices to Organisation'] = 'Priskirti įrenginius organizacijai';

$GLOBALS["lang"]['Assign an ISMS manager or team'] = 'Priskirti ISMS vadovą arba komandą';

$GLOBALS["lang"]['Assign an Operator'] = 'Priskirti operatorių';

$GLOBALS["lang"]['Assign any audited devices to this Org. Leave blank to leave device in currently assigned Org (or to set default).'] = 'Priskirti audituotus įrenginius į šį Org. Palikite tuščią palikti įrenginį šiuo metu priskirtas Org (arba nustatyti numatytąją).';

$GLOBALS["lang"]['Assign the Device to a Location'] = 'Priskirti įrenginį vietai';

$GLOBALS["lang"]['Assign the device to an Org'] = 'Įrenginio priskyrimas orgui';

$GLOBALS["lang"]['Assigned To'] = 'Paskirta';

$GLOBALS["lang"]['Assigning Discovered Devices'] = 'Priskyrimas atsijungusiems įrenginiams';

$GLOBALS["lang"]['At present we can use netstat_ports, software and users.'] = 'Šiuo metu mes galime naudoti netstat _ ports, programinė įranga ir vartotojai.';

$GLOBALS["lang"]['attached_device_id'] = 'Pridedamas įrenginio ID';

$GLOBALS["lang"]['Attached Device ID'] = 'Pridedamas įrenginio ID';

$GLOBALS["lang"]['attached_to'] = 'Prikabinta';

$GLOBALS["lang"]['Attached To'] = 'Prikabinta';

$GLOBALS["lang"]['attachment'] = 'Priedas';

$GLOBALS["lang"]['Attachment'] = 'Priedas';

$GLOBALS["lang"]['attachments'] = 'Priedai';

$GLOBALS["lang"]['Attachments'] = 'Priedai';

$GLOBALS["lang"]['attack_complexity'] = 'Užpuola sudėtingumas';

$GLOBALS["lang"]['Attack Complexity'] = 'Užpuola sudėtingumas';

$GLOBALS["lang"]['attack_requirements'] = 'Attack reikalavimai';

$GLOBALS["lang"]['Attack Requirements'] = 'Attack reikalavimai';

$GLOBALS["lang"]['attack_vector'] = 'Name';

$GLOBALS["lang"]['Attack Vector'] = 'Name';

$GLOBALS["lang"]['Attempt to ping the device if we are not auditing localhost.'] = 'Stengiamės iškabinti prietaisą, jei neatliekame audito.';

$GLOBALS["lang"]['Attribute'] = 'Požymis';

$GLOBALS["lang"]['attributes'] = 'Požymiai';

$GLOBALS["lang"]['Attributes'] = 'Požymiai';

$GLOBALS["lang"]['Attributes are stored for Open-AudIT to use for particular fields, at present all fields are based on the devices, locations, orgs and queries tables. The attributes you can edit are associated with the following columns: Class, Environment, Status & Type.'] = 'Požymiai saugomi Open- AudIT naudoti tam tikruose laukuose, šiuo metu visi laukai yra pagrįsti įrenginiais, vietas, orgus ir užklausų lenteles. Požymiai, kuriuos galite redaguoti, yra susieti su šiais stulpeliais: Klasė, aplinka, būsena ir tipas.';

$GLOBALS["lang"]['Audit'] = 'Auditas';

$GLOBALS["lang"]['Audit AIX'] = 'Auditas AIX';

$GLOBALS["lang"]['Audit DNS'] = 'Audito DNS';

$GLOBALS["lang"]['Audit ESXi'] = 'ESXi auditas';

$GLOBALS["lang"]['Audit Linux'] = 'Auditas Linux';

$GLOBALS["lang"]['audit_log'] = 'Audito žurnalas';

$GLOBALS["lang"]['Audit Log'] = 'Audito žurnalas';

$GLOBALS["lang"]['Audit Mount Point'] = 'Audito montavimo taškas';

$GLOBALS["lang"]['Audit My PC'] = 'Auditas Mano kompiuteris';

$GLOBALS["lang"]['Audit Netstat'] = 'Auditas Netstat';

$GLOBALS["lang"]['Audit OSX'] = 'Auditas OSX';

$GLOBALS["lang"]['Audit Result Input'] = 'Audito rezultatų suvestinė';

$GLOBALS["lang"]['Audit Software'] = 'Audito programinė įranga';

$GLOBALS["lang"]['Audit Status'] = 'Audito būklė';

$GLOBALS["lang"]['Audit Win32 Product'] = 'Audito metas32 Produktas';

$GLOBALS["lang"]['Audit Windows'] = 'Audito Windows';

$GLOBALS["lang"]['Audit the Device'] = 'Prietaiso auditas';

$GLOBALS["lang"]['Audits'] = 'Auditas';

$GLOBALS["lang"]['August'] = 'Rugpjūtis';

$GLOBALS["lang"]['Australia'] = 'Australija';

$GLOBALS["lang"]['Austria'] = 'Austrija';

$GLOBALS["lang"]['Auth'] = 'Autas';

$GLOBALS["lang"]['auth'] = 'Autas';

$GLOBALS["lang"]['Auth Methods'] = 'Auth Methods';

$GLOBALS["lang"]['Authenticate only'] = 'Tik autentikuoti';

$GLOBALS["lang"]['Authentication Passphrase'] = 'Autentikacijos slaptafrazė';

$GLOBALS["lang"]['Authentication Protocol'] = 'Autentiškumo nustatymo protokolas';

$GLOBALS["lang"]['authority_key_ident'] = 'Institucijos pagrindiniai kriterijai';

$GLOBALS["lang"]['Authority Key Ident'] = 'Institucijos pagrindiniai kriterijai';

$GLOBALS["lang"]['Auto'] = 'Auto';

$GLOBALS["lang"]['auto_renew'] = 'Auto Renew';

$GLOBALS["lang"]['Auto Renew'] = 'Auto Renew';

$GLOBALS["lang"]['Auto populated by the Open-AudIT Server.'] = 'Automatiškai veikia Open- AudIT serveris.';

$GLOBALS["lang"]['AutoRenew'] = 'AutoRenew';

$GLOBALS["lang"]['automatable'] = 'Automatinis';

$GLOBALS["lang"]['Automatable'] = 'Automatinis';

$GLOBALS["lang"]['Automatically populated based on the Collectors OS.'] = 'Automatiškai apgyvendinta pagal Kolektorių OS.';

$GLOBALS["lang"]['availability'] = 'Prieinamumas';

$GLOBALS["lang"]['Availability'] = 'Prieinamumas';

$GLOBALS["lang"]['Available Benchmarks'] = 'Prieinami standartai';

$GLOBALS["lang"]['Awaiting Analysis'] = 'Laukimo analizė';

$GLOBALS["lang"]['Azerbaijan'] = 'Azerbaidžanas';

$GLOBALS["lang"]['Azerbaijani'] = 'Azerbaidžanas';

$GLOBALS["lang"]['Azure Active Directory'] = 'Azure aktyvus aplankas';

$GLOBALS["lang"]['BTU Max'] = 'unit description in lists';

$GLOBALS["lang"]['BTU Total'] = 'BTU iš viso';

$GLOBALS["lang"]['Backbone network'] = 'Backbone tinklas';

$GLOBALS["lang"]['Backup'] = 'Kopijavimas';

$GLOBALS["lang"]['Bahamas the'] = 'Bahamos';

$GLOBALS["lang"]['Bahrain'] = 'Bahreinas';

$GLOBALS["lang"]['Bangladesh'] = 'Bangladešas';

$GLOBALS["lang"]['bank'] = 'Bankas';

$GLOBALS["lang"]['Bank'] = 'Bankas';

$GLOBALS["lang"]['Banned'] = 'Konservuoti';

$GLOBALS["lang"]['Banned Packages'] = 'Konservuoti paketai';

$GLOBALS["lang"]['bar_code'] = 'Baro kodas';

$GLOBALS["lang"]['Bar Code'] = 'Baro kodas';

$GLOBALS["lang"]['Barbados'] = 'Barbadosas';

$GLOBALS["lang"]['Base DN'] = 'Pagrindinis DN';

$GLOBALS["lang"]['base_score'] = 'Bazinis balas';

$GLOBALS["lang"]['Base Score'] = 'Bazinis balas';

$GLOBALS["lang"]['base_severity'] = 'Pagrindinis sunkumas';

$GLOBALS["lang"]['Base Severity'] = 'Pagrindinis sunkumas';

$GLOBALS["lang"]['based_on'] = 'Remiantis';

$GLOBALS["lang"]['Based On'] = 'Remiantis';

$GLOBALS["lang"]['baseline'] = 'Pradinis';

$GLOBALS["lang"]['Baseline'] = 'Pradinis';

$GLOBALS["lang"]['baseline_id'] = 'Pradinis ID';

$GLOBALS["lang"]['Baseline ID'] = 'Pradinis ID';

$GLOBALS["lang"]['baselines'] = 'Bazinės linijos';

$GLOBALS["lang"]['Baselines'] = 'Bazinės linijos';

$GLOBALS["lang"]['baselines_policies'] = 'Pagrindinės politikos kryptys';

$GLOBALS["lang"]['Baselines Policies'] = 'Pagrindinės politikos kryptys';

$GLOBALS["lang"]['Baselines Policy'] = 'Pagrindų politika';

$GLOBALS["lang"]['Baselines Policy Details'] = 'Bazinės politikos detalės';

$GLOBALS["lang"]['baselines_results'] = 'Pagrindiniai rezultatai';

$GLOBALS["lang"]['Baselines Results'] = 'Pagrindiniai rezultatai';

$GLOBALS["lang"]['Baselines can compare netstat ports, users and software.'] = 'Pagrindai gali palyginti tinklo prievadus, vartotojus ir programinę įrangą.';

$GLOBALS["lang"]['Baselines enable you to combine audit data with a set of attributes you have previously defined (your baseline) to determine compliance of devices.'] = 'Pagrindai leidžia jums sujungti audito duomenis su anksčiau nustatytų požymių rinkiniu (jūsų bazinis), siekiant nustatyti, ar prietaisai atitinka reikalavimus.';

$GLOBALS["lang"]['Baselines for Device Comparison'] = 'Prietaisų palyginimo pagrindas';

$GLOBALS["lang"]['Basic'] = 'Pagrindinis';

$GLOBALS["lang"]['Basque'] = 'Baskų';

$GLOBALS["lang"]['Because we try to be as transparent as possible, here is your actual data that we send.'] = 'Nes mes stengiamės būti kuo skaidresni, čia yra jūsų faktiniai duomenys, kuriuos mes siunčiame.';

$GLOBALS["lang"]['Being able to determine which machines are configured in the same way is a major part of systems administration and auditing – and now reporting on that will be made simple and automated. Once you define your baseline it will automatically run against a set of devices on a predetermined schedule. The output of these executed baselines will be available for web viewing, importing into a third party system or even as a printed report.<br><br>For auditing and management purposes it can be advantageous to baseline individual devices against a fixed, known good device. Baselines enable you to combine audit data with a set of attributes you have previously defined (your baseline) to determine compliance of devices.'] = 'Gebėjimas nustatyti, kurios mašinos yra sukonfigūruotos tokiu pačiu būdu yra didelė dalis sistemų administravimo ir audito - o dabar ataskaitų apie tai bus paprasta ir automatizuota. Kai nustatysite savo bazinę liniją, ji automatiškai veiks prieš prietaisų rinkinį pagal iš anksto nustatytą grafiką. Šių atliktų bazinių linijų produkcija bus prieinama interneto peržiūrai, importui į trečiosios šalies sistemą ar net kaip spausdinta ataskaita.<br/><br/>Audito ir valdymo tikslais tai gali būti naudinga baziniams atskiriems prietaisams prieš fiksuotą, žinomą gerą prietaisą. Pagrindai leidžia jums sujungti audito duomenis su anksčiau nustatytų požymių rinkiniu (jūsų bazinis), siekiant nustatyti, ar prietaisai atitinka reikalavimus.';

$GLOBALS["lang"]['Belarus'] = 'Baltarusija';

$GLOBALS["lang"]['Belgium'] = 'Belgija';

$GLOBALS["lang"]['Belize'] = 'Belizas';

$GLOBALS["lang"]['Below is an example of the required csv format.'] = 'Žemiau yra reikiamo csv formato pavyzdys.';

$GLOBALS["lang"]['Below these lines are where the variables are injected into the script. Following on from our earlier example, the Linux audit script is populated with our directory like so'] = 'Žemiau šios linijos yra, kur kintamieji yra švirkščiamas į scenarijų. Po mūsų ankstesnio pavyzdžio, Linux audito scenarijus yra apgyvendintas mūsų katalogas kaip taip';

$GLOBALS["lang"]['Below you can see an example Org Chart. If a user has permission on the <i>Finance A</i> Org, they also have permission on the descendant Orgs of Dept A, B & C. This is regardless of the collection requested.<br><br>If the collection requested allows ascendants, then the user will also have access to Company #1 and Default Org items. This is for (as above) queries, groups, et al.<br><br>Note - A user may have access to a query from Default Org, but that is the query itself not the result. The result will only show devices that the user has access to - IE devices from Finance A and Dept A, B & C.'] = 'Žemiau galite pamatyti pavyzdį Org diagrama. Jei vartotojas turi leidimą <i>Finance A</i> Orgai, jie taip pat turi leidimą Dept A, B ir C palikuonims Tai nesvarbu, kokia kolekcija prašoma.<br/><br/>Jei prašoma kolekcija leidžia pakilimus, tada vartotojas taip pat turės prieigą prie Bendrovės # 1 ir Numatytasis Org elementai. Tai skirta (kaip pirmiau) užklausoms, grupėms, et al.<br/><br/>Pastaba - Vartotojas gali turėti prieigą prie užklausą iš numatytojo Org, bet tai pati užklausa ne rezultatas. Rezultatas parodys tik įrenginius, kad vartotojas turi prieigą prie - IE prietaisai iš Finance A ir Dept A, B & C';

$GLOBALS["lang"]['Benchmark'] = 'Lyginamoji vertė';

$GLOBALS["lang"]['benchmark_id'] = 'Lyginamojo indekso ID';

$GLOBALS["lang"]['Benchmark ID'] = 'Lyginamojo indekso ID';

$GLOBALS["lang"]['Benchmark Tasks are created automatically when a benchmark is created.'] = 'Lyginamojo indekso užduotys sukuriamos automatiškai, kai nustatomas lyginamasis indeksas.';

$GLOBALS["lang"]['Benchmark execution and processing can take a lengthy amount of time, hence the preference to schedule them and not run them ad-hoc.'] = 'Lyginamosios analizės vykdymas ir apdorojimas gali užtrukti ilgai, todėl pirmenybė teikiama jų planavimui, o ne vykdymui.';

$GLOBALS["lang"]['benchmarks'] = 'Lyginamieji standartai';

$GLOBALS["lang"]['Benchmarks'] = 'Lyginamieji standartai';

$GLOBALS["lang"]['benchmarks_exceptions'] = 'Lyginamųjų standartų išimtys';

$GLOBALS["lang"]['Benchmarks Exceptions'] = 'Lyginamųjų standartų išimtys';

$GLOBALS["lang"]['benchmarks_log'] = 'Lyginamųjų standartų žurnalas';

$GLOBALS["lang"]['Benchmarks Log'] = 'Lyginamųjų standartų žurnalas';

$GLOBALS["lang"]['benchmarks_policies'] = 'Lyginamoji politika';

$GLOBALS["lang"]['Benchmarks Policies'] = 'Lyginamoji politika';

$GLOBALS["lang"]['benchmarks_result'] = 'Lyginamųjų standartų rezultatas';

$GLOBALS["lang"]['Benchmarks Result'] = 'Lyginamųjų standartų rezultatas';

$GLOBALS["lang"]['Benchmarks are created by providing an operating system and Version, combined with a specific guide and a list of machines to execute it upon. After creation, benchmarks are executed against the list of machines on a schedule.'] = 'Lyginamieji indeksai yra sukurti teikiant operacinę sistemą ir Versija, kartu su konkrečiu vadovu ir mašinų sąrašą jį vykdyti. Sukūrus, lyginamieji indeksai atliekami pagal mašinų sąrašą pagal tvarkaraštį.';

$GLOBALS["lang"]['Benchmarks for Best Practise Configuration'] = 'Geriausios praktikos konfigūracijos gairės';

$GLOBALS["lang"]['Benchmarks provide security recommendations for your computers, utilising the OpenSCAP tools and policies.</p><p><i>From the OpenSCAP homepage:</i>  In the ever-changing world of computer security where new vulnerabilities are being discovered and patched every day, enforcing security compliance must be a continuous process. It also needs to include a way to make adjustments to policies, as well as periodic assessment and risk monitoring. The OpenSCAP ecosystem provides tools and customizable policies for a quick, cost-effective and flexible implementation of these processes.'] = 'Standartai teikia saugumo rekomendacijas kompiuteriams, naudodami OpenSCAP įrankius ir politiką.<p><i>Iš OpenSCAP pagrindinio puslapio:</i> Pernelyg besikeičiančiame kompiuterių saugumo pasaulyje, kuriame kasdien randami ir kaupiami nauji trūkumai, saugumo reikalavimų laikymosi užtikrinimas turi būti nuolatinis procesas. Be to, reikia numatyti galimybę koreguoti politiką, taip pat periodiškai vertinti ir stebėti riziką. OpenSCAP ekosistema suteikia įrankius ir pritaikomas politikos priemones, kad šie procesai būtų greitai, ekonomiškai efektyvūs ir lankstūs.</p>';

$GLOBALS["lang"]['Benefits'] = 'Išmokos';

$GLOBALS["lang"]['Bengali'] = 'Bengali';

$GLOBALS["lang"]['Benin'] = 'Beninas';

$GLOBALS["lang"]['Bermuda'] = 'Bermudai';

$GLOBALS["lang"]['best_practises'] = 'Geriausios praktikos';

$GLOBALS["lang"]['Best Practises'] = 'Geriausios praktikos';

$GLOBALS["lang"]['Bhutan'] = 'Butanas';

$GLOBALS["lang"]['bios'] = 'Bios';

$GLOBALS["lang"]['Bios'] = 'Bios';

$GLOBALS["lang"]['body'] = 'Kūnas';

$GLOBALS["lang"]['Body'] = 'Kūnas';

$GLOBALS["lang"]['Bolivia'] = 'Bolivija';

$GLOBALS["lang"]['Boolean'] = 'Loginis';

$GLOBALS["lang"]['Boolean 1/0'] = 'Loginis 1 / 0';

$GLOBALS["lang"]['Boolean y/n'] = 'Būlio y / n';

$GLOBALS["lang"]['boot_device'] = 'Comment';

$GLOBALS["lang"]['Boot Device'] = 'Comment';

$GLOBALS["lang"]['bootable'] = 'Laivasraigtis';

$GLOBALS["lang"]['Bootable'] = 'Laivasraigtis';

$GLOBALS["lang"]['Bosnia and Herzegovina'] = 'Bosnija ir Hercegovina';

$GLOBALS["lang"]['Both forms of'] = 'Abiejų formų';

$GLOBALS["lang"]['Botswana'] = 'Botsvana';

$GLOBALS["lang"]['Bouvet Island (Bouvetoya)'] = 'Bouvet Island (Bouvetoya)';

$GLOBALS["lang"]['Brazil'] = 'Brazilija';

$GLOBALS["lang"]['Brazilian Portuguese'] = 'Brazilų portugalų';

$GLOBALS["lang"]['Breaking it Down'] = 'Laužyti žemyn';

$GLOBALS["lang"]['British Indian Ocean Territory (Chagos Archipelago)'] = 'Indijos vandenyno britų teritorija (Chagos salynas)';

$GLOBALS["lang"]['British Virgin Islands'] = 'Didžiosios Britanijos Mergelių Salos';

$GLOBALS["lang"]['Browse down the tree to Console Root -> Component Services -> Computers -> My Computer<br><br>Right click on <i>My Computer</i> and select properties<br><br>Select the <i>Default Properties</i> tab'] = 'Naršykite žemyn medį į Console šaknis - > Komponentas Paslaugos - > Kompiuteriai - > Mano kompiuteris<br/><br/>Dešiniuoju pelės mygtuku spustelėkite <i>Mano kompiuteris</i> ir pasirinkti savybes<br/><br/>Pasirinkite <i>Numatytos savybės</i> skirtukas';

$GLOBALS["lang"]['Brunei Darussalam'] = 'Brunėjaus Darusalamas';

$GLOBALS["lang"]['btu_max'] = 'Btu Max';

$GLOBALS["lang"]['Btu Max'] = 'Btu Max';

$GLOBALS["lang"]['btu_total'] = 'Btu iš viso';

$GLOBALS["lang"]['Btu Total'] = 'Btu iš viso';

$GLOBALS["lang"]['build_number'] = 'Sukurti numerį';

$GLOBALS["lang"]['Build Number'] = 'Sukurti numerį';

$GLOBALS["lang"]['build_number_full'] = 'Sukurti numerį';

$GLOBALS["lang"]['Build Number Full'] = 'Sukurti numerį';

$GLOBALS["lang"]['Building'] = 'Pastatas';

$GLOBALS["lang"]['Builds trust with clients and partners'] = 'Sukuria pasitikėjimą klientais ir partneriais';

$GLOBALS["lang"]['Bulgaria'] = 'Bulgarija';

$GLOBALS["lang"]['Bulgarian'] = 'Bulgarų';

$GLOBALS["lang"]['Bulk Edit'] = '@ action: button';

$GLOBALS["lang"]['Bulk Edit Form'] = 'Birių redagavimo forma';

$GLOBALS["lang"]['Bulk Editing Device Attributes'] = 'Birių redagavimo įrenginių požymiai';

$GLOBALS["lang"]['Bulk edit selections wont stay selected after clicking next page.'] = 'Birių redaguoti pasirinkimus nieko likti pasirinktas po paspaudę kitą puslapį.';

$GLOBALS["lang"]['Burkina Faso'] = 'Burkina Fasas';

$GLOBALS["lang"]['Burundi'] = 'Burundis';

$GLOBALS["lang"]['business_requirements'] = 'Verslo reikalavimai';

$GLOBALS["lang"]['Business Requirements'] = 'Verslo reikalavimai';

$GLOBALS["lang"]['But I Only Have Windows Client Machines Available!'] = 'Bet aš tik turiu Windows klientų mašinos prieinama!';

$GLOBALS["lang"]['But I do not want to have to change the language file every time I update!'] = 'Bet aš nenoriu keisti kalbos failą kiekvieną kartą, kai aš atnaujinti!';

$GLOBALS["lang"]['Buy'] = 'Pirkti';

$GLOBALS["lang"]['Buy More'] = 'Pirkti daugiau';

$GLOBALS["lang"]['Buy More Licenses'] = 'Pirkti daugiau licencijų';

$GLOBALS["lang"]['By'] = 'Pagal';

$GLOBALS["lang"]['By default we integrate all devices with their nmis_manage attribute set to <i>y</i>. With 4.2.0 we also ship a Rule that says <i>If we discover a device and it has a valid SNMP OID, mark that device as managed by NMIS</i>. Obviously you can disable this if it is not what you want.'] = 'Pagal numatytuosius nustatymus integruojame visus įrenginius su jų nmis _ management atributu, nustatytu <i>y</i>. Su 4.2.0 mes taip pat laivo taisyklę, kuri sako <i>Jei mes atrasti įrenginį ir jis turi galiojantį SNMP OID, pažymėti, kad įrenginys kaip valdo NMIS</i>. Akivaizdu, kad galite tai išjungti, jei to nenorite.';

$GLOBALS["lang"]['By default, we skip certificate validation because customers tend to use self-signed certificates. To enable certificate validation, edit the file below'] = 'Pagal numatytuosius nustatymus, mes praleidžiame sertifikato patvirtinimą, nes klientai linkę naudoti patys pasirašytus sertifikatus. Kad būtų galima patvirtinti sertifikato patvirtinimą, redaguokite žemiau esantį failą';

$GLOBALS["lang"]['CIDR'] = 'CIDR';

$GLOBALS["lang"]['CIDR Mask'] = 'CIDR Kaukė';

$GLOBALS["lang"]['cli_config'] = 'CLI Konfigūracija';

$GLOBALS["lang"]['CLI Config'] = 'CLI Konfigūracija';

$GLOBALS["lang"]['CPU'] = 'CPU';

$GLOBALS["lang"]['CPUs'] = 'CPU';

$GLOBALS["lang"]['CSV'] = 'CSV';

$GLOBALS["lang"]['CVE'] = 'CVE';

$GLOBALS["lang"]['CVEs with a status of received, awaiting analysis, undergoing analysis, rejected. These CVEs (mostly) do not contain sufficient information to enable us to generate a correct SQL query.'] = 'CDE, kurių būklė, laukiant analizės, buvo gauta, atmesti. Šie KTĮ (daugiausia) neturi pakankamai informacijos, kad galėtume generuoti teisingą SQL užklausą.';

$GLOBALS["lang"]['Calculated from discovery.'] = 'Apskaičiuota pagal atradimą.';

$GLOBALS["lang"]['Calculated total number of valid IP addresses for this network.'] = 'Apskaičiuotas bendras šiam tinklui galiojančių IP adresų skaičius.';

$GLOBALS["lang"]['Calculated upon completion, the time taken to execute this item.'] = 'Apskaičiuojamas užbaigus šį elementą.';

$GLOBALS["lang"]['Calculated when integration is run and contains a JSON representation of the devices in this integration. Each links to <code>devices.id</code>.'] = 'Apskaičiuojama, kai integracija vyksta ir yra JSON reprezentavimo prietaisų į šią integraciją. Kiekviena nuoroda į <code>devices.id</code>.';

$GLOBALS["lang"]['Calculated when integration is run and contains a JSON representation of the locations in this integration. Each links to <code>locations.id</code>.'] = 'Apskaičiuojama, kai integracija vyksta ir yra JSON atstovavimas šios integracijos vietas. Kiekviena nuoroda į <code>locations.id</code>.';

$GLOBALS["lang"]['Calculated when integration is run and contains the number of devices selected from Open-AudIT.'] = 'Apskaičiuojama, kai integracija vyksta ir yra iš Open- AudIT pasirinktų įrenginių skaičius.';

$GLOBALS["lang"]['Calculated when integration is run and contains the number of devices selected the external system.'] = 'Apskaičiuojama, kai integruojama, ir nurodomas išorinės sistemos pasirinktų įtaisų skaičius.';

$GLOBALS["lang"]['Calculated when integration is run and contains the number of devices to be updated in the external system.'] = 'Apskaičiuojama, kai integruojama, ir nurodomas prietaisų, kurie turi būti atnaujinami išorinėje sistemoje, skaičius.';

$GLOBALS["lang"]['Calculated when integration is run and contains the number of devices updated in Open-AudIT.'] = 'Apskaičiuojama, kai integracija vyksta ir yra įrenginių, atnaujintų Open- AudIT skaičių.';

$GLOBALS["lang"]['Call up a command prompt by clicking Start and searching for <code>command</code>'] = 'Skambinti komandų skambutį spustelėjus Pradėti ir ieškant <code>command</code>';

$GLOBALS["lang"]['Cambodia'] = 'Kambodža';

$GLOBALS["lang"]['Cameroon'] = 'Kamerūnas';

$GLOBALS["lang"]['Campus Area Network'] = 'Campus Area Network';

$GLOBALS["lang"]['Campus area network'] = 'Kampo srities tinklas';

$GLOBALS["lang"]['Can be  <code>active</code>, <code>passive</code> or blank.'] = 'Gali būti <code>active</code>, <code>passive</code> arba neužpildyta.';

$GLOBALS["lang"]['Can be <code>application</code>, <code>compute</code>, <code>database</code>, <code>storage</code>, <code>virtualisation</code>, <code>web</code>, <code>other</code> or blank.'] = 'Gali būti <code>application</code>, <code>compute</code>, <code>database</code>, <code>storage</code>, <code>virtualisation</code>, <code>web</code>, <code>other</code> arba neužpildyta.';

$GLOBALS["lang"]['Can be <code>auto</code>, <code>fixed</code>, <code>other</code> or blank.'] = 'Gali būti <code>auto</code>, <code>fixed</code>, <code>other</code> arba neužpildyta.';

$GLOBALS["lang"]['Can be <code>high availability</code>, <code>load balancing</code>, <code>performance</code>, <code>storage</code>, <code>other</code> or blank.'] = 'Gali būti <code>high availability</code>, <code>load balancing</code>, <code>performance</code>, <code>storage</code>, <code>other</code> arba neužpildyta.';

$GLOBALS["lang"]['Can be <code>line</code>, <code>pie</code> or <code>traffic</code>.'] = 'Gali būti <code>line</code>, <code>pie</code> arba <code>traffic</code>.';

$GLOBALS["lang"]['Can be <code>user</code> or <code>collector</code>.'] = 'Gali būti <code>user</code> arba <code>collector</code>.';

$GLOBALS["lang"]['Can be set by discovery or user.'] = 'Gali būti nustatytas atradimas arba vartotojas.';

$GLOBALS["lang"]['Can be set by discovery or user. Uses the ID from the locations table.'] = 'Gali būti nustatytas atradimas arba vartotojas. Naudoja ID iš vietų lentelėje.';

$GLOBALS["lang"]['Can the user edit this item.'] = 'Ar vartotojas gali redaguoti šį elementą.';

$GLOBALS["lang"]['Canada'] = 'Kanada';

$GLOBALS["lang"]['Cancel'] = 'Atšaukti';

$GLOBALS["lang"]['capabilities'] = 'Pajėgumai';

$GLOBALS["lang"]['Capabilities'] = 'Pajėgumai';

$GLOBALS["lang"]['Capacity'] = 'Pajėgumas';

$GLOBALS["lang"]['Cape Verde'] = 'Žaliasis Kyšulys';

$GLOBALS["lang"]['Capitalise'] = 'Kapitalizuoti';

$GLOBALS["lang"]['caption'] = 'Antraštė';

$GLOBALS["lang"]['Caption'] = 'Antraštė';

$GLOBALS["lang"]['Catalan'] = 'Katalonų';

$GLOBALS["lang"]['Cayman Islands'] = 'Kaimanų Salos';

$GLOBALS["lang"]['Cellular Details'] = 'Elementai';

$GLOBALS["lang"]['Central African Republic'] = 'Centrinės Afrikos Respublika';

$GLOBALS["lang"]['certificate'] = 'Sertifikatas';

$GLOBALS["lang"]['Certificate'] = 'Sertifikatas';

$GLOBALS["lang"]['certificate_file'] = 'Sertifikato byla';

$GLOBALS["lang"]['Certificate File'] = 'Sertifikato byla';

$GLOBALS["lang"]['certificate_name'] = 'Sertifikato pavadinimas';

$GLOBALS["lang"]['Certificate Name'] = 'Sertifikato pavadinimas';

$GLOBALS["lang"]['certificates'] = 'Sertifikatai';

$GLOBALS["lang"]['Certificates'] = 'Sertifikatai';

$GLOBALS["lang"]['Certification'] = 'Sertifikavimas';

$GLOBALS["lang"]['Certification Audit'] = 'Sertifikavimo auditas';

$GLOBALS["lang"]['Certification Process'] = 'Sertifikavimo procesas';

$GLOBALS["lang"]['Chad'] = 'Čadas';

$GLOBALS["lang"]['Change'] = 'Pokytis';

$GLOBALS["lang"]['change_id'] = 'Pakeisti ID';

$GLOBALS["lang"]['Change ID'] = 'Pakeisti ID';

$GLOBALS["lang"]['change_log'] = 'Pakeisti žurnalą';

$GLOBALS["lang"]['Change Log'] = 'Pakeisti žurnalą';

$GLOBALS["lang"]['Change Logs'] = 'Keisti žurnalus';

$GLOBALS["lang"]['change_type'] = 'Pakeisti tipą';

$GLOBALS["lang"]['Change Type'] = 'Pakeisti tipą';

$GLOBALS["lang"]['check_minutes'] = 'Patikrinkite protokolą';

$GLOBALS["lang"]['Check Minutes'] = 'Patikrinkite protokolą';

$GLOBALS["lang"]['Check for SSH on these ports'] = 'Ieškoti SSH šiuose uostuose';

$GLOBALS["lang"]['Check this port for any SSH service.'] = 'Pažymėkite šį prievadą bet kuriai SSH paslaugai.';

$GLOBALS["lang"]['Chile'] = 'Čilė';

$GLOBALS["lang"]['China'] = 'Kinija';

$GLOBALS["lang"]['Chinese'] = 'Kinų';

$GLOBALS["lang"]['Chinese (traditional)'] = 'Kinų (tradicinė)';

$GLOBALS["lang"]['Choose'] = 'Pasirinkite';

$GLOBALS["lang"]['Choose (select OS first)'] = 'Pasirinkite (pirmiausia pasirinkite OS)';

$GLOBALS["lang"]['Choose a Device'] = 'Pasirinkite įrenginį';

$GLOBALS["lang"]['Choose a Table'] = 'Pasirinkite lentelę';

$GLOBALS["lang"]['Choose the type of the task from the first drop down. This will configure the additional fields required depending on the type of task.'] = 'Pasirinkite užduoties tipą nuo pirmojo lašo žemyn. Tai padės nustatyti papildomus laukus, reikalingus atsižvelgiant į užduoties tipą.';

$GLOBALS["lang"]['Christmas Island'] = 'Kalėdų sala';

$GLOBALS["lang"]['cidr'] = 'unit description in lists';

$GLOBALS["lang"]['Cidr'] = 'unit description in lists';

$GLOBALS["lang"]['circuit_count'] = 'Grandinių skaičius';

$GLOBALS["lang"]['Circuit Count'] = 'Grandinių skaičius';

$GLOBALS["lang"]['circuit_status'] = 'Grandinės būsena';

$GLOBALS["lang"]['Circuit Status'] = 'Grandinės būsena';

$GLOBALS["lang"]['city'] = 'Miestas';

$GLOBALS["lang"]['City'] = 'Miestas';

$GLOBALS["lang"]['class'] = 'klasė';

$GLOBALS["lang"]['Class'] = 'klasė';

$GLOBALS["lang"]['class_text'] = 'Klasės tekstas';

$GLOBALS["lang"]['Class Text'] = 'Klasės tekstas';

$GLOBALS["lang"]['Click <i>New client secret</i>.'] = 'Spustelėkite <i>Nauja kliento paslaptis</i>.';

$GLOBALS["lang"]['Click Submit to Execute'] = 'Spustelėkite Pateikti vykdyti';

$GLOBALS["lang"]['Click on <i>Properties</i> under the <i>Manage</i> header in the central menu column. Copy the <i>User Access URL</i>. Once copied, paste it into yout text editor. You will need to copy one section of this field.<br><br>Our example field looks like this<br><code>https://launcher.myapps.microsoft.com/api/signin/5d97003c-g24b-346e-9932-77db6470b939?tenantId=cf406343-1a96-4f7c-0cc6-46e86dddabf3</code>.<br><br>The section we need is <code>cf406343-1a96-4f7c-0cc6-46e86dddabf3</code> (the tenant ID). This is used in Open-AudIT as the <i>Tenant</i> field, so paste it in there.'] = 'Spauskite ant <i>Savybės</i> pagal <i>Tvarkyti</i> antraštė pagrindiniame meniu stulpelyje. Kopijuoti <i>Naudotojo prieigos URL</i>. Kai nukopijuotas, įklijuoti jį į yout teksto redaktorius. Jums reikės nukopijuoti vieną šio lauko skyrių.<br/><br/>Mūsų pavyzdys srityje atrodo taip<br/><code>https://launcher.myapps.microsoft.com/api/signin/5d97003c-g24b-346e-9932-77db6470b939?tenantId=cf406343-1a96-4f7c-0cc6-46e86dddabf3</code>.<br/><br/>Mums reikia sekcijos: <code>cf406343-1a96-4f7c-0cc6-46e86dddabf3</code> (nuomininko ID). Tai yra naudojama Open- AudIT kaip <i>Nuomininkas</i> lauko, todėl įklijuoti jį ten.';

$GLOBALS["lang"]['Click on App Registrations to create a new Application, then click New Application Registration. Give it a name (I used Open-AudIT), select Web app / API as the type and provide any URL (the URL is not important) and now click Create.'] = 'Spauskite ant App Registracija sukurti naują paraišką, tada spustelėkite Naujas paraiškos registracija. Nurodykite pavadinimą (Aš naudoju Open- AudIT), pasirinkite Web app / API kaip tipą ir pateikti bet URL (URL nėra svarbus) ir dabar spustelėkite Sukurti.';

$GLOBALS["lang"]['Click on OK and close the DCOMCNFG window.<br><br>The above changes will require a reboot to take effect.'] = 'Spustelėkite OK ir uždaryti DCOMCNFTG langą.<br/><br/>Pirmiau nurodyti pakeitimai turės įsigalioti iš naujo.';

$GLOBALS["lang"]['Click on the application you just created. The Application ID displayed is the Client ID.<br><br>To create the client secret, click Settings, then Keys. Provide a key name and select an appropriate expiry date, then click Save.<br><br>The value will be populated for you - this is the Client Secret.'] = 'Spauskite ant ką tik sukurtos programos. Programos ID rodomas kliento ID.<br/><br/>Norėdami sukurti kliento paslaptį, spustelėkite Parametrai, tada raktai. Nurodykite rakto vardą ir pasirinkite tinkamą galiojimo datą, tada spustelėkite Įrašyti.<br/><br/>Vertė bus apgyvendintas už jus - tai kliento paslaptis.';

$GLOBALS["lang"]['Click the Delete button to remove the example devices from Open-AudIT.<br>This will remove the below devices from the database. '] = 'Paspauskite mygtuką Trinti pašalinti pavyzdinį įrenginius iš Open- AudIT.<br/>Tai pašalins toliau nurodytus įrenginius iš duomenų bazės. ';

$GLOBALS["lang"]['Click the Edit button for <i>Basic SAML Configuration</i>.'] = 'Spustelėkite redagavimo mygtuką <i>Bazinis SAML Konfigūracija</i>.';

$GLOBALS["lang"]['Click the Import button below to populate Open-AudIT with example device data.'] = 'Spauskite importo mygtuką žemiau populate Open- AudIT su pavyzdžiu įrenginio duomenis.';

$GLOBALS["lang"]['Click the icon to the right of the field you wish to edit. Change the field and click the green icon to submit.'] = 'Paspauskite piktogramą dešinėje srityje, kurį norite redaguoti. Pakeisti lauką ir spustelėkite žalią piktogramą pateikti.';

$GLOBALS["lang"]['Client ID'] = 'Kliento ID';

$GLOBALS["lang"]['Client ID and Secret'] = 'Kliento ID ir slaptas';

$GLOBALS["lang"]['client_ident'] = 'Klientas';

$GLOBALS["lang"]['Client Ident'] = 'Klientas';

$GLOBALS["lang"]['client_secret'] = 'Klientas Slaptas';

$GLOBALS["lang"]['Client Secret'] = 'Klientas Slaptas';

$GLOBALS["lang"]['client_site_name'] = 'Kliento svetainės pavadinimas';

$GLOBALS["lang"]['Client Site Name'] = 'Kliento svetainės pavadinimas';

$GLOBALS["lang"]['Close'] = 'Užverti';

$GLOBALS["lang"]['Closed'] = 'Uždarytas';

$GLOBALS["lang"]['Cloud'] = 'Debesis';

$GLOBALS["lang"]['Cloud Details'] = 'Debesų informacija';

$GLOBALS["lang"]['Cloud Discovery'] = 'Debesis';

$GLOBALS["lang"]['Cloud Discovery and Auditing'] = 'Debesų paieškos ir auditas';

$GLOBALS["lang"]['cloud_id'] = 'Debesis ID';

$GLOBALS["lang"]['Cloud ID'] = 'Debesis ID';

$GLOBALS["lang"]['cloud_log'] = 'Debesis žurnalas';

$GLOBALS["lang"]['Cloud Log'] = 'Debesis žurnalas';

$GLOBALS["lang"]['cloud_name'] = 'Debesijos pavadinimas';

$GLOBALS["lang"]['Cloud Name'] = 'Debesijos pavadinimas';

$GLOBALS["lang"]['Cloud Network'] = 'Debesis tinklas';

$GLOBALS["lang"]['clouds'] = 'Debesys';

$GLOBALS["lang"]['Clouds'] = 'Debesys';

$GLOBALS["lang"]['Clouds are a feature available to Open-AudIT Enterprise licensed customers.'] = 'Debesys yra funkcija prieinama Open-AudIT Enterprise licencijuotų klientų.';

$GLOBALS["lang"]['cluster'] = 'Klasteris';

$GLOBALS["lang"]['Cluster'] = 'Klasteris';

$GLOBALS["lang"]['cluster_id'] = 'Grupės ID';

$GLOBALS["lang"]['Cluster ID'] = 'Grupės ID';

$GLOBALS["lang"]['cluster_name'] = 'Grupės pavadinimas';

$GLOBALS["lang"]['Cluster Name'] = 'Grupės pavadinimas';

$GLOBALS["lang"]['cluster_type'] = 'Klasterio tipas';

$GLOBALS["lang"]['Cluster Type'] = 'Klasterio tipas';

$GLOBALS["lang"]['clusters'] = 'Klasteriai';

$GLOBALS["lang"]['Clusters'] = 'Klasteriai';

$GLOBALS["lang"]['Clusters and Reporting'] = 'Grupės ir ataskaitos';

$GLOBALS["lang"]['Cocos (Keeling) Islands'] = 'Kokosų (Keelingo) salos';

$GLOBALS["lang"]['Collection'] = 'Kolekcija';

$GLOBALS["lang"]['Collections'] = 'Kolekcijos';

$GLOBALS["lang"]['Collector'] = 'Kolektorius';

$GLOBALS["lang"]['Collector (UUID)'] = 'Kolektorius (UUID)';

$GLOBALS["lang"]['Collector / Server is an Enterprise only feature. Enterprise customers receive one Collector license for free. Additional Collector licenses can be purchased as required.'] = 'Kolektorius / Serveris yra tik Enterprise funkcija. Įmonių klientai gauna vieną surinkimo licenciją nemokamai. Papildomos kolektoriaus licencijos gali būti perkamos, kaip reikalaujama.';

$GLOBALS["lang"]['Collector / Server is designed so that you can have a remote or <i>collector</i>  instance of Open-AudIT running on a remote machine. That collector instance might be in another security zone, subnet, cloud hosting instance or at a customer site.  The remote collector is then doing all the discovering and auditing of devices locally avoiding networking and firewalling complexity.  The Collector once it has registered is completely controlled by the <i>server</i>.  This means you only need an HTTP or HTTPS connection from that Collector to the Server.'] = 'Kolektorius / Serveris yra sukurtas taip, kad jūs galite turėti nuotolinio arba <i>kolektorius</i> pavyzdys Open- AudIT veikia nuotolinio aparato. Tas surinkėjas gali būti kitoje apsaugos zonoje, potinklyje, debesų prieglobos instancijoje arba kliento svetainėje. Nuotolinis kolektorius tada daro visus atradimus ir auditą įrenginių lokaliai išvengti tinklų ir ugniagesių sudėtingumo. Kolektorius, kai jis yra registruotas yra visiškai kontroliuojamas <i>serveris</i>. Tai reiškia, kad jums reikia tik HTTP arba HTTPS ryšį iš to surinkimo serverio.';

$GLOBALS["lang"]['Collector Dashboard'] = 'Kolektoriaus prietaisų skydelis';

$GLOBALS["lang"]['Collector Name'] = 'Kolektoriaus vardas';

$GLOBALS["lang"]['collector_uuid'] = 'Kolektorius Uuid';

$GLOBALS["lang"]['Collector Uuid'] = 'Kolektorius Uuid';

$GLOBALS["lang"]['Collector tasks are automatically setup when the collector feature is enabled. Collector tasks should not be created directly by users. Collector tasks can have their frequency edited after creation. If the Open-AudIT Server has Collectors reporting to it, an additional drop down is provided. You can select this to specify which Collector the task should run on. Only Discovery tasks are supported for Collectors.'] = 'Kolektoriaus užduotys automatiškai nustatomos, kai kolektoriaus funkcija yra įjungta. Rinkėjo užduotys neturėtų būti tiesiogiai kuriamos vartotojų. Kolektoriaus užduotys gali turėti jų dažnumas redaguotas po sukūrimo. Jei Open- AudIT Serveris turi Kolektoriai ataskaitų jam, papildomas lašas žemyn. Galite pasirinkti tai nurodyti, kuri Rinkėjas užduotis turėtų paleisti. Kolektoriams palaikomos tik paieškos užduotys.';

$GLOBALS["lang"]['Collectors'] = 'Kolektoriai';

$GLOBALS["lang"]['Collectors can operate in one of two modes: Collector and StandAlone. When in Collector mode, the instance of Open-AudIT is managed by the main server. When in Stand Alone mode, the instance is managed locally and forwards any found devices to the main server.'] = 'Kolektoriai gali veikti vienu iš dviejų režimų: surinkimo ir standAlone. Kai Collector režimu, Open- AudIT atvejis yra valdomas pagrindinio serverio. Kai Stand Alone režimu, egzempliorius yra valdomas lokaliai ir pirmyn visus rastus įrenginius į pagrindinį serverį.';

$GLOBALS["lang"]['Collectors for Remote Discovery'] = 'Nuotolinio paieškos rinkėjai';

$GLOBALS["lang"]['Colombia'] = 'Kolumbija';

$GLOBALS["lang"]['color'] = 'Spalva';

$GLOBALS["lang"]['Color'] = 'Spalva';

$GLOBALS["lang"]['Column'] = 'Stulpelis';

$GLOBALS["lang"]['Columns'] = 'Stulpeliai';

$GLOBALS["lang"]['command'] = 'Komanda';

$GLOBALS["lang"]['Command'] = 'Komanda';

$GLOBALS["lang"]['command_options'] = 'Komandų parinktys';

$GLOBALS["lang"]['Command Options'] = 'Komandų parinktys';

$GLOBALS["lang"]['command_output'] = 'Komandų išvestis';

$GLOBALS["lang"]['Command Output'] = 'Komandų išvestis';

$GLOBALS["lang"]['command_status'] = 'Komandų būsena';

$GLOBALS["lang"]['Command Status'] = 'Komandų būsena';

$GLOBALS["lang"]['command_time_to_execute'] = 'Komandinio laiko atlikimui';

$GLOBALS["lang"]['Command Time To Execute'] = 'Komandinio laiko atlikimui';

$GLOBALS["lang"]['comment'] = 'Komentaras';

$GLOBALS["lang"]['Comment'] = 'Komentaras';

$GLOBALS["lang"]['Comment out the below line (about line 49 or so). Just place a hash # at the start of the line.'] = 'Komentuokite žemiau esančią eilutę (apie 49 eilutę ar panašiai). Tiesiog padėkite maišelį # linijos pradžioje.';

$GLOBALS["lang"]['comments'] = 'Pastabos';

$GLOBALS["lang"]['Comments'] = 'Pastabos';

$GLOBALS["lang"]['commercial'] = 'Komercinis';

$GLOBALS["lang"]['Commercial'] = 'Komercinis';

$GLOBALS["lang"]['Commercial Support'] = 'Komercinė parama';

$GLOBALS["lang"]['common_name'] = 'Bendrinis pavadinimas';

$GLOBALS["lang"]['Common Name'] = 'Bendrinis pavadinimas';

$GLOBALS["lang"]['Commonly referred to as the clientId.'] = 'Dažniausiai vadinamas klientuId.';

$GLOBALS["lang"]['Commonly referred to as the clientSecret.'] = 'Dažniausiai vadinamas klientu Secret.';

$GLOBALS["lang"]['Community'] = 'Bendrija';

$GLOBALS["lang"]['Community Questions'] = 'Bendrijos klausimai';

$GLOBALS["lang"]['Community String'] = 'Bendrijos eilutė';

$GLOBALS["lang"]['Comoros the'] = 'Komorai';

$GLOBALS["lang"]['Compact'] = 'Kompaktiškas';

$GLOBALS["lang"]['Company'] = 'Bendrovė';

$GLOBALS["lang"]['Complete these steps.'] = 'Užbaikite šiuos veiksmus.';

$GLOBALS["lang"]['Complexity of the attack (Low or High).'] = 'Užpuolimo sudėtingumas (žemas arba aukštas).';

$GLOBALS["lang"]['Component Table'] = 'Komponento lentelė';

$GLOBALS["lang"]['Components (All Devices)'] = 'Komponentai (visi įtaisai)';

$GLOBALS["lang"]['Compute'] = 'Skaičiuoti';

$GLOBALS["lang"]['Condition'] = 'Sąlygos';

$GLOBALS["lang"]['Conduct a risk assessment'] = 'Atlikite rizikos vertinimą';

$GLOBALS["lang"]['Conduct awareness and training programs'] = 'Vykdyti sąmoningumo ugdymo ir mokymo programas';

$GLOBALS["lang"]['Conduct management review meetings'] = 'Elgesio valdymo peržiūros posėdžiai';

$GLOBALS["lang"]['Conduct regular surveillance audits (usually annually)'] = 'Atlikti reguliarius priežiūros auditus (paprastai kasmet)';

$GLOBALS["lang"]['Conducted by an accredited body in two stages'] = 'Akredituotos įstaigos atliktas dviem etapais';

$GLOBALS["lang"]['Config'] = 'Konfigūracija';

$GLOBALS["lang"]['Config Default, currently '] = 'Konfigūruoti numatytą, šiuo metu ';

$GLOBALS["lang"]['config_file'] = 'Konfigūruoti failą';

$GLOBALS["lang"]['Config File'] = 'Konfigūruoti failą';

$GLOBALS["lang"]['config_manager_error_code'] = 'Konfigūracijos valdyklės klaidos kodas';

$GLOBALS["lang"]['Config Manager Error Code'] = 'Konfigūracijos valdyklės klaidos kodas';

$GLOBALS["lang"]['Configurable Role Based Access Control (RBAC)'] = 'Name';

$GLOBALS["lang"]['configuration'] = 'Konfigūracija';

$GLOBALS["lang"]['Configuration'] = 'Konfigūracija';

$GLOBALS["lang"]['Configuration Change Detection and Reporting'] = 'Konfigūracijos pokyčių aptikimas ir ataskaitų teikimas';

$GLOBALS["lang"]['Configure'] = 'Konfigūruoti';

$GLOBALS["lang"]['Configure the agent server-side to perform audits on a schedule'] = 'Konfigūruoti agento server- side atlikti auditą pagal tvarkaraštį';

$GLOBALS["lang"]['Congo'] = 'Kongas';

$GLOBALS["lang"]['Congo the'] = 'Kongas';

$GLOBALS["lang"]['Connected To'] = 'Prisijungta prie';

$GLOBALS["lang"]['connection'] = 'Prisijungimas';

$GLOBALS["lang"]['Connection'] = 'Prisijungimas';

$GLOBALS["lang"]['Connection Options'] = 'Prisijungimo parinktys';

$GLOBALS["lang"]['connection_status'] = 'Prisijungimo būsena';

$GLOBALS["lang"]['Connection Status'] = 'Prisijungimo būsena';

$GLOBALS["lang"]['connections'] = 'Jungtys';

$GLOBALS["lang"]['Connections'] = 'Jungtys';

$GLOBALS["lang"]['Consider filtered Ports Open'] = 'Apsvarstyti filtruotą Atverti prievadus';

$GLOBALS["lang"]['Consider open|filtered Ports Open'] = 'Apsvarstyti atidarytą 124; filtruotas Atverti prievadus';

$GLOBALS["lang"]['Consulting, implementation and other services are available through'] = 'Konsultavimas, įgyvendinimas ir kitos paslaugos yra prieinamos per';

$GLOBALS["lang"]['contact'] = 'Kontaktai';

$GLOBALS["lang"]['Contact'] = 'Kontaktai';

$GLOBALS["lang"]['contact_name'] = 'Kontaktinis vardas';

$GLOBALS["lang"]['Contact Name'] = 'Kontaktinis vardas';

$GLOBALS["lang"]['contained_in'] = 'Pateikta';

$GLOBALS["lang"]['Contained In'] = 'Pateikta';

$GLOBALS["lang"]['Contains a JSON object details the associated widgets and their positions.'] = 'Sudėtyje yra JSON objektas išsamiai susiję raštai ir jų pozicijas.';

$GLOBALS["lang"]['Contains the fields that determine if we should use ssh, snmp and wmi discovery options. A JSON object.'] = 'Sudėtyje yra laukeliai, kurie nustato, ar mes turėtume naudoti ssh, snmp ir wmi atradimo galimybes. JSON objektas.';

$GLOBALS["lang"]['Context & Leadership'] = 'Kontekstas ir lyderystė';

$GLOBALS["lang"]['Context Engine ID'] = 'Konteksto variklio ID';

$GLOBALS["lang"]['Context Name'] = 'Konteksto pavadinimas';

$GLOBALS["lang"]['Continuously improve the ISMS'] = 'Nuolat tobulinti ISMS';

$GLOBALS["lang"]['contractual_obligations'] = 'Sutartiniai įsipareigojimai';

$GLOBALS["lang"]['Contractual Obligations'] = 'Sutartiniai įsipareigojimai';

$GLOBALS["lang"]['Cook Islands'] = 'Kuko Salos';

$GLOBALS["lang"]['Copy and paste an audit result'] = 'Audito rezultatų kopijavimas ir įdėjimas';

$GLOBALS["lang"]['Copy and paste the below to the forums, another instance of Open-AudIT or anywhere else you need to provide this item.'] = 'Kopijuoti ir įklijuoti žemiau į forumus, kitą Open- AudIT arba bet kur kitur jums reikia pateikti šį elementą.';

$GLOBALS["lang"]['Copy the <i>Application ID</i> field and paste it into the Open-AudIT <i>Client ID</i> field for the new Auth Method.'] = 'Kopijuoti <i>Prašymo ID</i> laukas ir įklijuoti jį į Open- AudIT <i>Kliento ID</i> laukas naujajam Auth metodui.';

$GLOBALS["lang"]['Copy the <i>Client ID</i> and paste it into the Open-AudIT <i>Client ID</i> field.<br>If there is no secret, click <i>Generate new secret</i>, then copy the value and paste it into the Open-AudIT <i>Client Secret</i> field.'] = 'Kopijuoti <i>Kliento ID</i> ir įklijuoti jį į Open- AudIT <i>Kliento ID</i> laukas.<br/>Jei nėra paslapties, spustelėkite <i>Generuoti naują paslaptį</i>, tada nukopijuoti vertę ir įklijuoti jį į Open- AudIT <i>Klientas Slaptas</i> laukas.';

$GLOBALS["lang"]['Copy the value and paste it into the Open-AudIT form for the <i>Client Secret</i> field.'] = 'Kopijuoti vertę ir įklijuoti jį į Open- AudIT formą už <i>Klientas Slaptas</i> laukas.';

$GLOBALS["lang"]['core_count'] = 'Pagrindinis skaičius';

$GLOBALS["lang"]['Core Count'] = 'Pagrindinis skaičius';

$GLOBALS["lang"]['Cores'] = 'Cores';

$GLOBALS["lang"]['cost_center'] = 'Išlaidų centras';

$GLOBALS["lang"]['Cost Center'] = 'Išlaidų centras';

$GLOBALS["lang"]['cost_code'] = 'Sąnaudų kodas';

$GLOBALS["lang"]['Cost Code'] = 'Sąnaudų kodas';

$GLOBALS["lang"]['Costa Rica'] = 'Kosta Rika';

$GLOBALS["lang"]['Cote d Ivoire'] = 'Cote d Iend';

$GLOBALS["lang"]['count'] = 'Skaičius';

$GLOBALS["lang"]['Count'] = 'Skaičius';

$GLOBALS["lang"]['country'] = 'Šalis';

$GLOBALS["lang"]['Country'] = 'Šalis';

$GLOBALS["lang"]['country_code'] = 'Šalies kodas';

$GLOBALS["lang"]['Country Code'] = 'Šalies kodas';

$GLOBALS["lang"]['cpu_count'] = 'Cpu grafas';

$GLOBALS["lang"]['Cpu Count'] = 'Cpu grafas';

$GLOBALS["lang"]['Create'] = 'Sukurti';

$GLOBALS["lang"]['Create Example Devices'] = 'Sukurti pavyzdinius įrenginius';

$GLOBALS["lang"]['create_external_count'] = 'Sukurti išorinį skaičių';

$GLOBALS["lang"]['Create External Count'] = 'Sukurti išorinį skaičių';

$GLOBALS["lang"]['create_external_from_internal'] = 'Sukurti išorę iš vidaus';

$GLOBALS["lang"]['Create External From Internal'] = 'Sukurti išorę iš vidaus';

$GLOBALS["lang"]['Create File'] = 'Sukurti failą';

$GLOBALS["lang"]['Create Geocode'] = 'Sukurti Geokodą';

$GLOBALS["lang"]['create_internal_count'] = 'Sukurti vidinį skaičių';

$GLOBALS["lang"]['Create Internal Count'] = 'Sukurti vidinį skaičių';

$GLOBALS["lang"]['create_internal_from_external'] = 'Sukurti Vidinį iš išorės';

$GLOBALS["lang"]['Create Internal From External'] = 'Sukurti Vidinį iš išorės';

$GLOBALS["lang"]['Create NMIS Devices from Open-AudIT'] = 'Sukurti NMIS įrenginius iš Open- AudIT';

$GLOBALS["lang"]['Create Open-AudIT Devices from '] = 'Sukurti Open- AudIT Įrenginiai ';

$GLOBALS["lang"]['Create Open-AudIT Devices from NMIS'] = 'Sukurti Open- AudIT NMIS prietaisai';

$GLOBALS["lang"]['Create a Baseline for the example device'] = '@ info: whatsthis';

$GLOBALS["lang"]['Create a Discovery'] = 'Sukurti paieškos failą';

$GLOBALS["lang"]['Create a Statement of Applicability (SoA)'] = 'Sukurti taikymo pareiškimą (SoA)';

$GLOBALS["lang"]['created_by'] = 'Sukurta';

$GLOBALS["lang"]['Created By'] = 'Sukurta';

$GLOBALS["lang"]['created_date'] = 'Sukurta data';

$GLOBALS["lang"]['Created Date'] = 'Sukurta data';

$GLOBALS["lang"]['Creating'] = 'Kuriamas';

$GLOBALS["lang"]['Creating Credentials'] = 'Kuriami kreditai';

$GLOBALS["lang"]['Creating Device'] = 'Kuriamas įrenginys';

$GLOBALS["lang"]['Creating Widgets'] = 'Kuriami valdikliai';

$GLOBALS["lang"]['Creating a Discovery Scan Options entry'] = 'Kurti paieškos programą Skaityti nustatymų įrašą';

$GLOBALS["lang"]['Creating a Query'] = 'Kuriama užklausa';

$GLOBALS["lang"]['Creating a SQL Statement for Groups'] = 'Sukurti SQL pareiškimą grupėms';

$GLOBALS["lang"]['Creating a SQL Statement for Queries'] = 'Kurti SQL pareiškimą užklausoms';

$GLOBALS["lang"]['Creating an Integration'] = 'Integracijos kūrimas';

$GLOBALS["lang"]['creator'] = 'Kūrėjas';

$GLOBALS["lang"]['Creator'] = 'Kūrėjas';

$GLOBALS["lang"]['credential'] = 'Kreditinė';

$GLOBALS["lang"]['Credential'] = 'Kreditinė';

$GLOBALS["lang"]['Credentials'] = 'Kreditai';

$GLOBALS["lang"]['Credentials Client ID'] = 'Kreditai Kliento ID';

$GLOBALS["lang"]['Credentials Subscription ID'] = 'Kreditų sąskaita ID';

$GLOBALS["lang"]['Credentials Tenant ID'] = 'Kreditų suteikimo data';

$GLOBALS["lang"]['Credentials are stored in the <i>credentials</i> database table. The actual credential information is encrypted in storage. When a Discovery is run, a device has its specific credentials retrieved from the database, decrypted and tested. If these fail the list of credentials is also retrieved, decrypted and then tested against the device starting with credentials known to have worked previously. Device specific credentials are stored at an individual device level in the <i>credential</i> table (note - no <i>s</i> in the table name). SSH keys are tested before SSH username / password. When testing SSH, credentials will also be marked as working with sudo or being root.'] = 'Kreditai yra saugomi <i>įgaliojimai</i> duomenų bazės lentelė. Faktinė informacija yra užšifruota saugykloje. Kai Discovery veikia, įrenginys turi savo specifinius duomenis gauti iš duomenų bazės, iššifruoti ir išbandyti. Jei jie nepavyksta, požymių sąrašas taip pat gauti, iššifruoti ir tada išbandyti su prietaisu pradedant su duomenimis, žinoma, kad dirbo anksčiau. Specifiniai įrenginio požymiai yra saugomi atskiro įrenginio lygiu <i>tipranaviras</i> lentelė (pastaba - ne <i>uo</i> lentelėje). SSH klavišai yra išbandyti prieš SSH naudotojo vardą / slaptažodį. Kai bandymai SSH, įgaliojimai taip pat bus pažymėti kaip darbo sudo arba šaknis.';

$GLOBALS["lang"]['Credentials can have one of a few different types - snmp v.1 / v.2, snmp v.3, ssh, ssh key, windows are all implemented. CAVEAT - ssh keys are not implemented for Windows Open-AudIT servers as yet.'] = 'Kreditoriai gali turėti vieną iš kelių skirtingų tipų - snmp v.1 / v.2, snmp v.3, ssh, ssh key, langai visi įgyvendinti. CAVEAT - ssh klavišai dar neįdiegti Windows Open- AudIT serveriams.';

$GLOBALS["lang"]['Credentials for Amazon AWS used in Cloud Discovery'] = '"Amazon" AWS kreditai, naudojami debesų kompiuteryje';

$GLOBALS["lang"]['Credentials for Microsoft Azure used in Cloud Discovery'] = 'Kreditai Microsoft Name';

$GLOBALS["lang"]['Critical'] = 'Kritinis';

$GLOBALS["lang"]['criticality'] = 'Kritika';

$GLOBALS["lang"]['Criticality'] = 'Kritika';

$GLOBALS["lang"]['Croatia'] = 'Kroatija';

$GLOBALS["lang"]['Cuba'] = 'Kuba';

$GLOBALS["lang"]['current'] = 'Dabartinis';

$GLOBALS["lang"]['Current'] = 'Dabartinis';

$GLOBALS["lang"]['Current Discovery Processes'] = 'Dabartiniai paieškos procesai';

$GLOBALS["lang"]['Current date & time is '] = 'Dabartinė data ir laikas yra ';

$GLOBALS["lang"]['Currently Installed'] = 'Šiuo metu įdiegta';

$GLOBALS["lang"]['Currently supported types are <code>snmp</code>, <code>snmp_v3</code>, <code>ssh</code>, <code>ssh_key</code> or <code>windows</code>.'] = 'Šiuo metu palaikomi tipai yra <code>snmp</code>, <code>snmp_v3</code>, <code>ssh</code>, <code>ssh_key</code> arba <code>windows</code>.';

$GLOBALS["lang"]['Custom Fields'] = 'Pasirinktiniai laukai';

$GLOBALS["lang"]['Custom TCP Ports'] = 'Pasirinktiniai TCP prievadai';

$GLOBALS["lang"]['Custom TCP Ports. Any specific ports we would liuke scanned in addition to the Top TCP Ports. Comma seperated, no spaces.'] = 'Pasirinktiniai TCP prievadai. Bet kokie specialūs uostai mes liuke nuskaitytas be viršų TCP uostų. Komanda susėdusi, jokių tarpų.';

$GLOBALS["lang"]['Custom UDP Ports'] = 'Pasirinktinis UDP Uostai';

$GLOBALS["lang"]['Custom UDP Ports. Any specific ports we would liuke scanned in addition to the Top UDP Ports. Comma seperated, no spaces.'] = 'Individualūs UDP prievadai. Bet kokie specialūs uostai mes liuke nuskaitytas be viršų UDP uostų. Komanda susėdusi, jokių tarpų.';

$GLOBALS["lang"]['Customisable Scanning Options per Discovery'] = 'Tinkamos skenavimo parinktys per paiešką';

$GLOBALS["lang"]['Cve'] = 'Cve';

$GLOBALS["lang"]['Cyprus'] = 'Kipras';

$GLOBALS["lang"]['Czech'] = 'Čekų';

$GLOBALS["lang"]['Czech Republic'] = 'Čekija';

$GLOBALS["lang"]['DHCP'] = 'DHCP';

$GLOBALS["lang"]['DN Account (optional)'] = 'DN paskyra (neprivaloma)';

$GLOBALS["lang"]['DN Password (optional)'] = 'DN slaptažodis (neprivaloma)';

$GLOBALS["lang"]['DNS FQDN'] = 'DNS FQDN';

$GLOBALS["lang"]['DNS Hostname'] = 'DNS centro pavadinimas';

$GLOBALS["lang"]['Danish'] = 'Danų';

$GLOBALS["lang"]['dashboard_id'] = 'Pašto dėžutės ID';

$GLOBALS["lang"]['Dashboard ID'] = 'Pašto dėžutės ID';

$GLOBALS["lang"]['Dashboard Widgets'] = 'Dashboard valdikliai';

$GLOBALS["lang"]['dashboards'] = 'Skydai';

$GLOBALS["lang"]['Dashboards'] = 'Skydai';

$GLOBALS["lang"]['Dashboards and Widgets allow Enterprise licensed customers to create, read, update and delete both of these collections to ensure their homepage is exactly what they need to see. Not only that, but a user is able to set a given dashboard as their own homepage. Everyone does not need to use the same homepage (dashboard), nor the same widgets on that dashboard. Professional licensed customers can choose between two predefined dashboards to set as their own homepage.'] = 'Dashboars ir Widgets leidžia Įmonių licencijuoti klientai kurti, skaityti, atnaujinti ir ištrinti abu šiuos rinkinius, siekiant užtikrinti, kad jų pagrindinis puslapis yra būtent tai, ką jie turi pamatyti. Ne tik tai, bet vartotojas gali nustatyti tam tikrą prietaisų skydelį kaip savo pagrindinį puslapį. Visiems nereikia naudoti to paties pagrindinio puslapio (prietaisų skydelio), nei to paties elemento toje prietaisų skydelyje. Profesionalūs licencijuoti klientai gali pasirinkti iš dviejų iš anksto apibrėžtų prietaisų skydelių, kad nustatytumėte savo pagrindinį puslapį.';

$GLOBALS["lang"]['Dashboards provide <i>at a glance</i> important visibility for changes occurring on your network as well as providing quick links to device types, manufacturers, and operating systems and so much more.'] = 'Dashboars device <i>trumpai</i> svarbus tinklo pokyčių matomumas, greitas ryšys su įrenginių tipais, gamintojais, operacinėmis sistemomis ir dar daugiau.';

$GLOBALS["lang"]['Dashboards use'] = 'Sąvartynų naudojimas';

$GLOBALS["lang"]['Data'] = 'Duomenys';

$GLOBALS["lang"]['Data Export - CSV, XML, JSON'] = 'Duomenų eksportas - CSV, XML, JSON';

$GLOBALS["lang"]['Data Retention'] = 'Duomenų saugojimas';

$GLOBALS["lang"]['Database'] = 'Duomenų bazė';

$GLOBALS["lang"]['db_action'] = 'Duomenų bazės veiksmas';

$GLOBALS["lang"]['Database Action'] = 'Duomenų bazės veiksmas';

$GLOBALS["lang"]['db_column'] = 'Duomenų bazės stulpelis';

$GLOBALS["lang"]['Database Column'] = 'Duomenų bazės stulpelis';

$GLOBALS["lang"]['Database Definition'] = 'Duomenų bazės apibrėžimas';

$GLOBALS["lang"]['db_row'] = 'Duomenų bazės eilutė';

$GLOBALS["lang"]['Database Row'] = 'Duomenų bazės eilutė';

$GLOBALS["lang"]['Database Schema'] = 'Duomenų bazės schema';

$GLOBALS["lang"]['Database Server Discovery'] = 'Duomenų bazės serverio paieškos';

$GLOBALS["lang"]['db_table'] = 'Duomenų bazės lentelė';

$GLOBALS["lang"]['Database Table'] = 'Duomenų bazės lentelė';

$GLOBALS["lang"]['Database Tables'] = 'Duomenų bazės lentelės';

$GLOBALS["lang"]['dataset_title'] = 'Duomenų rinkinio pavadinimas';

$GLOBALS["lang"]['Dataset Title'] = 'Duomenų rinkinio pavadinimas';

$GLOBALS["lang"]['date'] = 'Data';

$GLOBALS["lang"]['Date'] = 'Data';

$GLOBALS["lang"]['Date D-M-Y'] = 'Data D-M-Y';

$GLOBALS["lang"]['Date M-D-Y'] = 'Data M- D-Y';

$GLOBALS["lang"]['Date Now'] = 'Data dabar';

$GLOBALS["lang"]['date_of_manufacture'] = 'Gamybos data';

$GLOBALS["lang"]['Date Of Manufacture'] = 'Gamybos data';

$GLOBALS["lang"]['date_paid'] = 'Apmokėta data';

$GLOBALS["lang"]['Date Paid'] = 'Apmokėta data';

$GLOBALS["lang"]['date_received'] = 'Gaunama data';

$GLOBALS["lang"]['Date Received'] = 'Gaunama data';

$GLOBALS["lang"]['Date Y-M-D'] = 'Data - M-D';

$GLOBALS["lang"]['Date and time when the CVE was last updated.'] = 'CVE atnaujinimo data ir laikas.';

$GLOBALS["lang"]['Date and time when the CVE was published.'] = 'CVE paskelbimo data ir laikas.';

$GLOBALS["lang"]['Date when the CVE was published.'] = 'CVE paskelbimo data.';

$GLOBALS["lang"]['DateTime Now'] = 'DateTime dabar';

$GLOBALS["lang"]['DateTime Y-M-D H:M:S'] = 'DateTime Y- M- D H: M: S:';

$GLOBALS["lang"]['day_of_month'] = 'Mėnuo';

$GLOBALS["lang"]['Day Of Month'] = 'Mėnuo';

$GLOBALS["lang"]['day_of_week'] = 'Savaitės diena';

$GLOBALS["lang"]['Day Of Week'] = 'Savaitės diena';

$GLOBALS["lang"]['Day of Month'] = 'Mėnuo';

$GLOBALS["lang"]['dbus_identifier'] = 'Dbus identifikatorius';

$GLOBALS["lang"]['Dbus Identifier'] = 'Dbus identifikatorius';

$GLOBALS["lang"]['Debug'] = 'Derinti';

$GLOBALS["lang"]['Debugging'] = 'Derinimas';

$GLOBALS["lang"]['Debugging a Script'] = 'Derinamas scenarijus';

$GLOBALS["lang"]['December'] = 'Gruodis';

$GLOBALS["lang"]['Decommission'] = 'Atsisakymas';

$GLOBALS["lang"]['Default'] = 'Numatytas';

$GLOBALS["lang"]['Default Authentication Level - Set to Connect'] = 'Numatytasis autentiškumo nustatymas Lygis Nustatyti prisijungimui';

$GLOBALS["lang"]['Default Impersonation Level - Set to Identify'] = 'Numatytasis atvaizdavimas Lygis Nustatyti';

$GLOBALS["lang"]['Default Items'] = 'Numatyti elementai';

$GLOBALS["lang"]['Default Orgs Groups'] = 'Numatytosios orgų grupės';

$GLOBALS["lang"]['Default Roles Groups'] = 'Numatytosios reikšmės grupės';

$GLOBALS["lang"]['Default Value'] = 'Numatytoji reikšmė';

$GLOBALS["lang"]['Default of 389. Normally 636 used for Active Directory LDAPS.'] = 'Numatyta 389. Paprastai naudojamas Active Directory LDAPS.';

$GLOBALS["lang"]['Default of <code>3</code> for LDAP and Active Directory.'] = 'Numatyta <code>3</code> LDAP ir Active Directory.';

$GLOBALS["lang"]['Defaults'] = 'Numatytos priemonės';

$GLOBALS["lang"]['Deferred'] = 'Atidėta';

$GLOBALS["lang"]['Define project scope and objectives'] = 'Apibrėžti projekto apimtį ir tikslus';

$GLOBALS["lang"]['Define the ISMS scope'] = 'Apibrėžti ISMS taikymo sritį';

$GLOBALS["lang"]['Define the context of the organization (internal/external issues)'] = 'Apibrėžti organizacijos kontekstą (vidaus / išorės klausimai)';

$GLOBALS["lang"]['delay_minutes'] = 'Vėlavimo protokolas';

$GLOBALS["lang"]['Delay Minutes'] = 'Vėlavimo protokolas';

$GLOBALS["lang"]['Delete'] = 'Trinti';

$GLOBALS["lang"]['Delete Example Devices'] = 'Trinti pavyzdinius įrenginius';

$GLOBALS["lang"]['delete_external_from_internal'] = 'Ištrinti išorėje iš vidaus';

$GLOBALS["lang"]['Delete External From Internal'] = 'Ištrinti išorėje iš vidaus';

$GLOBALS["lang"]['Delete NMIS Devices if not in Open-AudIT'] = 'Trinti NMIS Įrenginiai, jei nėra Open- AudIT';

$GLOBALS["lang"]['Delete a {collection} entry.'] = 'Ištrinti {kolekcijos} įrašą.';

$GLOBALS["lang"]['Delete from Application'] = 'Ištrinti iš programos';

$GLOBALS["lang"]['Delete from Cluster'] = 'Ištrinti iš klasterio';

$GLOBALS["lang"]['Denmark'] = 'Danija';

$GLOBALS["lang"]['Derived by audit or manually set by user.'] = 'Pagaminta audito arba rankiniu būdu vartotojo.';

$GLOBALS["lang"]['Derived by audit.'] = 'Atliktas auditas.';

$GLOBALS["lang"]['Derived from <code>rack_devices.device_id</code>.'] = 'Išvestinės <code>rack_devices.device_id</code>.';

$GLOBALS["lang"]['Derived from <code>rack_devices.rack_id</code>.'] = 'Išvestinės <code>rack_devices.rack_id</code>.';

$GLOBALS["lang"]['Derived from Collector discovery.'] = 'Pagaminta iš kolektoriaus atradimo.';

$GLOBALS["lang"]['Derived from OS Name.'] = 'Išduota iš OS pavadinimo.';

$GLOBALS["lang"]['Derived from cloud discovery.'] = 'Gautas iš debesų paieškos.';

$GLOBALS["lang"]['Derived from device audits.'] = 'Parengta atlikus prietaisų auditą.';

$GLOBALS["lang"]['Derived from device type and OS.'] = 'Pagaminta iš prietaiso tipo ir OS.';

$GLOBALS["lang"]['Derived from discovery.'] = 'Išduota iš atradimo.';

$GLOBALS["lang"]['Derived from hostname, sysName, dns Hostname and IP in that order.'] = 'Išduota iš mazgo pavadinimo, sysName, dns Hostname ir IP ta pačia tvarka.';

$GLOBALS["lang"]['Derived from the integer severity.'] = 'Išvestinės pagal sveikąjį skaičių.';

$GLOBALS["lang"]['description'] = 'Aprašymas';

$GLOBALS["lang"]['Description'] = 'Aprašymas';

$GLOBALS["lang"]['destination'] = 'Paskirtis';

$GLOBALS["lang"]['Destination'] = 'Paskirtis';

$GLOBALS["lang"]['detail'] = 'Išsamiau';

$GLOBALS["lang"]['Detail'] = 'Išsamiau';

$GLOBALS["lang"]['Details'] = 'Išsami informacija';

$GLOBALS["lang"]['Details of who is usually contactable at this site.'] = 'Informacija apie tai, kas paprastai gali susisiekti šioje svetainėje.';

$GLOBALS["lang"]['Determine how often you want to run the Baseline check against the database and create a Scheduled Report'] = 'Nustatyti, kaip dažnai norite paleisti Pradinį patikrinimą pagal duomenų bazę ir sukurti tvarkaraštį ataskaitą';

$GLOBALS["lang"]['Determine risk treatment options'] = 'Nustatyti rizikos vertinimo galimybes';

$GLOBALS["lang"]['Develop a Risk Treatment Plan'] = 'Parengti rizikos valdymo planą';

$GLOBALS["lang"]['Develop policies, procedures, and controls'] = 'Plėtoti politiką, procedūras ir kontrolę';

$GLOBALS["lang"]['Develop required ISMS documentation (policies, procedures, etc.)'] = 'Parengti reikiamus ISMS dokumentus (politikos, procedūrų ir kt.)';

$GLOBALS["lang"]['device'] = 'Įrenginys';

$GLOBALS["lang"]['Device'] = 'Įrenginys';

$GLOBALS["lang"]['Device Audits'] = 'Įrenginio auditas';

$GLOBALS["lang"]['Device Component Names'] = 'Įrenginio komponentų pavadinimai';

$GLOBALS["lang"]['Device ID'] = 'Įrenginio ID';

$GLOBALS["lang"]['device_id'] = 'Įrenginio ID';

$GLOBALS["lang"]['device_id_a'] = 'Įrenginio ID A';

$GLOBALS["lang"]['Device ID A'] = 'Įrenginio ID A';

$GLOBALS["lang"]['device_id_b'] = 'Įrenginio ID B';

$GLOBALS["lang"]['Device ID B'] = 'Įrenginio ID B';

$GLOBALS["lang"]['Device Matching Rules'] = 'Įrenginio atitikties taisyklės';

$GLOBALS["lang"]['Device Name'] = 'Įrenginio pavadinimas';

$GLOBALS["lang"]['Device Result'] = 'Įrenginio rezultatas';

$GLOBALS["lang"]['Device Results'] = 'Įrenginio rezultatai';

$GLOBALS["lang"]['Device Seed'] = 'Įrenginio sėkla';

$GLOBALS["lang"]['Device Seed Discoveries are a good option if you know that your network consists of a range of subnets, but you are unsure what they are. Seed the discovery with a local router and watch your network unfold before your eyes.'] = 'Įrenginio sėkla Discoversies yra geras pasirinkimas, jei žinote, kad jūsų tinklas susideda iš potinklių asortimentą, bet jūs nesate tikri, kas jie yra. Įdėkite atradimą su vietiniu maršrutizatoriumi ir stebėkite tinklą prieš akis.';

$GLOBALS["lang"]['Device Seed IP'] = 'Įrenginio sėklų IP';

$GLOBALS["lang"]['Device Status'] = 'Įrenginio būsena';

$GLOBALS["lang"]['Device Types'] = 'Įrenginių tipai';

$GLOBALS["lang"]['Device and Software and Hardware Auditing'] = 'Įrenginių ir programinės įrangos bei aparatinės įrangos auditas';

$GLOBALS["lang"]['Device is in the Subnet'] = 'Įrenginys yra potinklyje';

$GLOBALS["lang"]['Devices'] = 'Įrenginiai';

$GLOBALS["lang"]['devices_assigned_to_location'] = 'Įrenginiai, priskirti vietovei';

$GLOBALS["lang"]['Devices Assigned To Location'] = 'Įrenginiai, priskirti vietovei';

$GLOBALS["lang"]['devices_assigned_to_org'] = 'Orgui priskirti įrenginiai';

$GLOBALS["lang"]['Devices Assigned To Org'] = 'Orgui priskirti įrenginiai';

$GLOBALS["lang"]['Devices Audited'] = 'Įrenginiai audituoti';

$GLOBALS["lang"]['Devices Collection'] = 'Įrenginių rinkinys';

$GLOBALS["lang"]['Devices Created in '] = 'Įrengta įrenginių ';

$GLOBALS["lang"]['Devices Created in Open-AudIT'] = 'Open- AudIT sukurti įrenginiai';

$GLOBALS["lang"]['devices_default_display_columns'] = 'Įrenginių numatytosios rodymo stulpeliai';

$GLOBALS["lang"]['Devices Default Display Columns'] = 'Įrenginių numatytosios rodymo stulpeliai';

$GLOBALS["lang"]['Devices Found Last 7 Days'] = 'Rasta įrenginių Paskutinės 7 dienos';

$GLOBALS["lang"]['Devices Found Today'] = 'Šiandien rasti įrenginiai';

$GLOBALS["lang"]['Devices Found Yesterday'] = 'Vakar rasti įrenginiai';

$GLOBALS["lang"]['Devices Missing Information'] = 'Trūksta informacijos apie įrenginius';

$GLOBALS["lang"]['Devices Not Audited'] = 'Įrenginiai neaudituoti';

$GLOBALS["lang"]['Devices Not Seen 30 Days'] = 'Įrenginiai nėra 30 dienų';

$GLOBALS["lang"]['Devices Not Seen 7 Days'] = 'Įrenginiai nėra 7 dienų';

$GLOBALS["lang"]['Devices Not Seen 90 Days'] = 'Prietaisai nėra matyti 90 dienų';

$GLOBALS["lang"]['Devices Older Than X'] = 'Įrenginiai Senesni nei X';

$GLOBALS["lang"]['Devices Retrieved via API'] = 'Įrenginiai, gauti per API';

$GLOBALS["lang"]['Devices Selected from '] = 'Pažymėti įrenginiai ';

$GLOBALS["lang"]['Devices Selected from Open-AudIT'] = 'Įrenginiai, pasirinkti iš Open- AudIT';

$GLOBALS["lang"]['Devices Updated in '] = 'Įrenginiai atnaujinti ';

$GLOBALS["lang"]['Devices Updated in Open-AudIT'] = 'Įrenginiai atnaujinti Open- AudIT';

$GLOBALS["lang"]['Devices are being benchmarked.'] = 'Prietaisai yra lyginami.';

$GLOBALS["lang"]['Devices are not being benchmarked.'] = 'Prietaisai nežymimi.';

$GLOBALS["lang"]['Devices could be benchmarked.'] = 'Prietaisai gali būti lyginami.';

$GLOBALS["lang"]['Devices from Open-AudIT'] = 'Įrenginiai iš Open- AudIT';

$GLOBALS["lang"]['Devices in Running State'] = 'Įrenginiai veikia';

$GLOBALS["lang"]['Devices in Stopped State'] = 'Įrenginiai sustabdytoje būsenoje';

$GLOBALS["lang"]['Devices in this'] = 'Įrenginiai';

$GLOBALS["lang"]['Devices will not be matched if their status is set to <i>deleted</i>. Any other status will allow a match to occur.'] = 'Įrenginiai nebus derinami, jei jų būsena nustatyta <i>išbraukta</i>. Bet koks kitas statusas leis įvykti rungtynėms.';

$GLOBALS["lang"]['Devices with Expired Warranties'] = 'Įrenginiai su išnaudotomis garantijomis';

$GLOBALS["lang"]['Devired from type or OS.'] = 'Atitinka tipą arba OS.';

$GLOBALS["lang"]['dhcp_enabled'] = 'Įjungta';

$GLOBALS["lang"]['Dhcp Enabled'] = 'Įjungta';

$GLOBALS["lang"]['dhcp_lease_expires'] = 'Dhcp Nuoma baigiasi';

$GLOBALS["lang"]['Dhcp Lease Expires'] = 'Dhcp Nuoma baigiasi';

$GLOBALS["lang"]['dhcp_lease_obtained'] = 'Dhcp nuoma gauta';

$GLOBALS["lang"]['Dhcp Lease Obtained'] = 'Dhcp nuoma gauta';

$GLOBALS["lang"]['dhcp_server'] = 'Dhcp serveris';

$GLOBALS["lang"]['Dhcp Server'] = 'Dhcp serveris';

$GLOBALS["lang"]['Did the command complete successfully and return expected data.'] = 'Ar komanda sėkmingai baigė ir grąžinti laukiamus duomenis.';

$GLOBALS["lang"]['direction'] = 'Kryptis';

$GLOBALS["lang"]['Direction'] = 'Kryptis';

$GLOBALS["lang"]['directory'] = 'Aplankas';

$GLOBALS["lang"]['Directory'] = 'Aplankas';

$GLOBALS["lang"]['disabled'] = 'Išjungtas';

$GLOBALS["lang"]['Disabled'] = 'Išjungtas';

$GLOBALS["lang"]['discard'] = 'Išmesti';

$GLOBALS["lang"]['Discard'] = 'Išmesti';

$GLOBALS["lang"]['Discover'] = 'Atrasti';

$GLOBALS["lang"]['Discoveries'] = 'Atradimas';

$GLOBALS["lang"]['Discoveries are at the very heart of what Open-AudIT does. How else would you know <i>Whats On Your Network?</i>'] = 'Discoversies yra tai, ką Open- AudIT daro pačioje širdyje. Kaip kitaip tu žinotum <i>Kas jūsų tinkle?</i>';

$GLOBALS["lang"]['Discoveries are entries that enable you to run a discovery upon a network in a single click, without entering the details of that network each and every time.'] = 'Discoversies yra įrašai, kurie leidžia jums paleisti atradimą tinkle vienu paspaudimu, neįvedant to tinklo detales kiekvieną kartą.';

$GLOBALS["lang"]['Discovery'] = 'Discovery';

$GLOBALS["lang"]['Discovery Change Logs'] = 'Atrasti pakeitimų žurnalus';

$GLOBALS["lang"]['Discovery Data Retention'] = 'Atpažinimo duomenų saugojimas';

$GLOBALS["lang"]['discovery_id'] = 'Atradimo ID';

$GLOBALS["lang"]['Discovery ID'] = 'Atradimo ID';

$GLOBALS["lang"]['Discovery Issues'] = 'Atradimo klausimai';

$GLOBALS["lang"]['discovery_log'] = 'Atrasti žurnalą';

$GLOBALS["lang"]['Discovery Log'] = 'Atrasti žurnalą';

$GLOBALS["lang"]['Discovery Match Options'] = 'Atradimo atitikmenų parinktys';

$GLOBALS["lang"]['Discovery Name'] = 'Atradimo vardas';

$GLOBALS["lang"]['Discovery Options'] = 'Atradimo parinktys';

$GLOBALS["lang"]['Discovery Queue Count'] = 'Atradimo eilių skaičius';

$GLOBALS["lang"]['Discovery Queue Limit'] = 'Discovery eilės riba';

$GLOBALS["lang"]['discovery_run'] = 'Atrasti paleisti';

$GLOBALS["lang"]['Discovery Run'] = 'Atrasti paleisti';

$GLOBALS["lang"]['discovery_scan_options'] = 'Discovery skaitymo parinktys';

$GLOBALS["lang"]['Discovery Scan Options'] = 'Discovery skaitymo parinktys';

$GLOBALS["lang"]['Discovery Scan Options are just another item collection. Enterprise users can create, read, update and delete entries as required. Professional users can read all entries, but not create new entries, update existing entries or delete entries. Community users have no GUI that allows access to this collection.'] = 'Discovery Scan Parinktys yra tik dar vienas elementas kolekcija. Įmonių vartotojai gali sukurti, skaityti, atnaujinti ir ištrinti įrašus, jei reikia. Profesionalūs vartotojai gali skaityti visus įrašus, bet nekurti naujų įrašų, atnaujinti esamus įrašus ar ištrinti įrašus. Bendrijos vartotojai neturi GUI, kuri leidžia prieigą prie šios kolekcijos.';

$GLOBALS["lang"]['Discovery Scan Types'] = 'Discovery Scan tipai';

$GLOBALS["lang"]['Discovery Support'] = 'Atradimo palaikymas';

$GLOBALS["lang"]['Discovery has stopped working'] = 'Discovery nustojo veikti';

$GLOBALS["lang"]['disk'] = 'Diskas';

$GLOBALS["lang"]['Disk'] = 'Diskas';

$GLOBALS["lang"]['display_version'] = 'Rodyti versiją';

$GLOBALS["lang"]['Display Version'] = 'Rodyti versiją';

$GLOBALS["lang"]['Display in Menu'] = 'Rodyti meniu';

$GLOBALS["lang"]['Displays a standard web form for submission to POST /{collection}.'] = 'Rodo standartinę internetinę formą, kurią reikia pateikti POST / {kolekcijai}.';

$GLOBALS["lang"]['Displays a standard web form for submission to POST /{collection}/import.'] = 'Rodo standartinę internetinę formą, kurią reikia pateikti POST / {kolekcija} / import.';

$GLOBALS["lang"]['district'] = 'District';

$GLOBALS["lang"]['District'] = 'District';

$GLOBALS["lang"]['Djibouti'] = 'Džibutis';

$GLOBALS["lang"]['dns'] = 'Dns';

$GLOBALS["lang"]['Dns'] = 'Dns';

$GLOBALS["lang"]['dns_domain'] = 'Dns sritis';

$GLOBALS["lang"]['Dns Domain'] = 'Dns sritis';

$GLOBALS["lang"]['dns_domain_reg_enabled'] = 'Name';

$GLOBALS["lang"]['Dns Domain Reg Enabled'] = 'Name';

$GLOBALS["lang"]['dns_fqdn'] = 'Dns Fqdn';

$GLOBALS["lang"]['Dns Fqdn'] = 'Dns Fqdn';

$GLOBALS["lang"]['dns_host_name'] = 'Dns mazgo vardas';

$GLOBALS["lang"]['Dns Host Name'] = 'Dns mazgo vardas';

$GLOBALS["lang"]['dns_hostname'] = 'Dns Hostname';

$GLOBALS["lang"]['Dns Hostname'] = 'Dns Hostname';

$GLOBALS["lang"]['dns_server'] = 'Dns serveris';

$GLOBALS["lang"]['Dns Server'] = 'Dns serveris';

$GLOBALS["lang"]['Do not forget about the Open-AudIT wiki for all your documentation.'] = 'Nepamirškite apie Open- AudIT wiki visus savo dokumentus.';

$GLOBALS["lang"]['Do not forget there is a mountain of documentation on the wiki'] = 'Nepamirškite, kad yra dokumentų kalnas wiki';

$GLOBALS["lang"]['Do not scan these TCP ports.'] = 'Neskenuokite šių TCP prievadų.';

$GLOBALS["lang"]['Do not scan these UDP ports.'] = 'Neskenuokite šių UDP prievadų.';

$GLOBALS["lang"]['Do not show me again'] = 'Daugiau man nerodyk';

$GLOBALS["lang"]['Do you have a perfect example of this configuration? Perhaps a device located in a lab environment or a workstation you use to clone workstation VMs from.'] = 'Ar turite puikų šios konfigūracijos pavyzdį? Galbūt įrenginys, esantis laboratorijos aplinkoje ar darbo vietoje jūs naudojate klonuoti darbo vietos VM iš.';

$GLOBALS["lang"]['Do you want to use secure transport (LDAPS) or regular unencrypted LDAP.'] = 'Ar norite naudoti saugų transportą (LDAPS) ar reguliarų nešifruotą LDAP.';

$GLOBALS["lang"]['Do you wish to see the standard sidebar on the left.'] = 'Ar norite pamatyti standartinę šoninę juostą kairėje.';

$GLOBALS["lang"]['documentation'] = 'Dokumentai';

$GLOBALS["lang"]['Documentation'] = 'Dokumentai';

$GLOBALS["lang"]['Documentation about a particular collection.'] = 'Dokumentai apie konkrečią kolekciją.';

$GLOBALS["lang"]['Does Not Equal'] = 'Nelygus';

$GLOBALS["lang"]['Does the license apply to child Orgs.'] = 'Ar licencija taikoma vaikiškiems Orgams.';

$GLOBALS["lang"]['domain'] = 'Sritis';

$GLOBALS["lang"]['Domain'] = 'Sritis';

$GLOBALS["lang"]['domain_controller_address'] = 'Srities valdiklio adresas';

$GLOBALS["lang"]['Domain Controller Address'] = 'Srities valdiklio adresas';

$GLOBALS["lang"]['domain_controller_name'] = 'Domeno valdiklis Pavadinimas';

$GLOBALS["lang"]['Domain Controller Name'] = 'Domeno valdiklis Pavadinimas';

$GLOBALS["lang"]['domain_role'] = 'Srities vaidmuo';

$GLOBALS["lang"]['Domain Role'] = 'Srities vaidmuo';

$GLOBALS["lang"]['domain_short'] = 'Srities trumpas';

$GLOBALS["lang"]['Domain Short'] = 'Srities trumpas';

$GLOBALS["lang"]['Dominica'] = 'Dominika';

$GLOBALS["lang"]['Dominican Republic'] = 'Dominikos Respublika';

$GLOBALS["lang"]['Dont hold my hand, I know what I am doing. No filter and the ability to join custom tables.'] = 'Nelaikyk mano rankos, žinau, ką darau. Nėra filtras ir gebėjimas prisijungti prie užsakymą lenteles.';

$GLOBALS["lang"]['Download'] = 'Parsisiųsti';

$GLOBALS["lang"]['Download a File'] = 'Parsisiųsti failą';

$GLOBALS["lang"]['Download a file from URL'] = 'Parsisiųsti failą iš URL';

$GLOBALS["lang"]['Download the test_windows_client.vbs script directly'] = 'Parsisiųsti test _ windows _ client.vbs scenarijų tiesiogiai';

$GLOBALS["lang"]['Download your updated version from'] = 'Atsisiųsti atnaujintą versiją iš';

$GLOBALS["lang"]['driver'] = 'Vairuotojas';

$GLOBALS["lang"]['Driver'] = 'Vairuotojas';

$GLOBALS["lang"]['duplex'] = 'Duplex';

$GLOBALS["lang"]['Duplex'] = 'Duplex';

$GLOBALS["lang"]['Duplicate Devices / Missing Devices'] = 'Dublikuoti įrenginius / trūkstamus įrenginius';

$GLOBALS["lang"]['duration'] = 'Trukmė';

$GLOBALS["lang"]['Duration'] = 'Trukmė';

$GLOBALS["lang"]['Dutch'] = 'Olandų';

$GLOBALS["lang"]['ESXi'] = 'ESXi';

$GLOBALS["lang"]['EULA'] = 'EULA';

$GLOBALS["lang"]['Each IP is scanned with the discovery configured options (see Discovery Scan Options and Discovery - Community vs Professional vs Enterprise on the wiki). In general, Nmap will test for ports 22 (ssh), 135 (wmi), 62078 (iPhone) and UDP 161 (snmp). If 22, 135 or 161 respond the credential list is retrieved and each credential tested in turn. The first working credentials are used for further queries directly from the device. Note - if a device has previously been discovered and has working credentials, those credentials are tested first. Only if those fail are the other credentials then attempted.'] = 'Kiekvienas IP nuskaitomas su paieškos sukonfigūruotomis parinktimis (žr. Discovery Scan Options ir Discovery - Community vs Professional vs Enterprise on the wiki). Apskritai, Nmap bus išbandyti 22 (ssh), 135 (wmi), 62078 (iPhone) ir UDP 161 (snmp) uostuose. Jei 22, 135 arba 161 atsakyti į patikinimą sąrašas yra paimtas ir kiekvienas patikinimas išbandyti paeiliui. Pirmieji darbo įgaliojimai yra naudojami kitiems užklausoms tiesiogiai iš prietaiso. Pastaba - jei prietaisas buvo anksčiau aptiktas ir turi darbinius įgaliojimus, tie įgaliojimai yra išbandyti pirmiausia. Tik jei tai žlugs yra kiti įgaliojimai tada bandė.';

$GLOBALS["lang"]['Each time a device is discovered or an audit result is processed, all rules are retrieved from the database and run against the attributes of the specific device. Rules run against one device at a time - there is no facility to say <i>Run the rules against all devices<i> or <i>Run the rules against these devices<i>. An individual rule will test one or more attributes of the device and if they match the rule, the result will be applied. Several attributes can be tested. Several attributes can be set. Think of this as an If This, Then That system for Open-AudIT.'] = 'Kiekvieną kartą, kai prietaisas yra atrasta arba audito rezultatas yra apdorojamas, visos taisyklės yra gaunami iš duomenų bazės ir paleisti prieš konkretaus prietaiso atributus. Taisyklės paleisti prieš vieną įrenginį vienu metu - nėra galimybės pasakyti <i>Vykdyti taisykles prieš visus prietaisus<i> arba <i>Vykdyti taisykles prieš šiuos prietaisus<i>. Atskiros taisyklės išbando vieną ar daugiau įtaiso požymių ir, jei jie atitinka taisyklę, rezultatas bus taikomas. Galima išbandyti keletą požymių. Galima nustatyti keletą požymių. Galvok apie tai, jei tai, tada, kad sistema Open- AudIT.</i></i></i></i>';

$GLOBALS["lang"]['Easily run a discovery upon a network in a single click, without entering the details of that network each and every time.'] = 'Lengvai paleisti atradimas tinkle vienu paspaudimu, neįvedant to tinklo detales kiekvieną kartą.';

$GLOBALS["lang"]['Ecuador'] = 'Ekvadoras';

$GLOBALS["lang"]['Edit'] = 'Keisti';

$GLOBALS["lang"]['edit_log'] = 'Keisti žurnalą';

$GLOBALS["lang"]['Edit Log'] = 'Keisti žurnalą';

$GLOBALS["lang"]['editable'] = 'Redaguoti';

$GLOBALS["lang"]['Editable'] = 'Redaguoti';

$GLOBALS["lang"]['edited_by'] = 'Redagavo';

$GLOBALS["lang"]['Edited By'] = 'Redagavo';

$GLOBALS["lang"]['edited_date'] = 'Redaguota data';

$GLOBALS["lang"]['Edited Date'] = 'Redaguota data';

$GLOBALS["lang"]['edition'] = 'Edition';

$GLOBALS["lang"]['Edition'] = 'Edition';

$GLOBALS["lang"]['Egypt'] = 'Egiptas';

$GLOBALS["lang"]['Either Amazon, Google or Microsoft.'] = '"Amazon", "Google" arba "Microsoft".';

$GLOBALS["lang"]['Either none or present.

<strong>None</strong> - The successful attack does not depend on the deployment and execution conditions of the vulnerable system. The attacker can expect to be able to reach the vulnerability and execute the exploit under all or most instances of the vulnerability.

<strong>Present</strong> - The successful attack depends on the presence of specific deployment and execution conditions of the vulnerable system that enable the attack. These include:

A race condition must be won to successfully exploit the vulnerability. The successfulness of the attack is conditioned on execution conditions that are not under full control of the attacker. The attack may need to be launched multiple times against a single target before being successful.

Network injection. The attacker must inject themselves into the logical network path between the target and the resource requested by the victim (e.g. vulnerabilities requiring an on-path attacker).'] = 'Arba nėra, arba yra.

<strong>Nėra</strong> - Sėkmingas ataka nepriklauso nuo dislokavimo ir vykdymo sąlygų pažeidžiamoje sistemoje. Užpuolikas gali tikėtis, kad galės pasiekti pažeidžiamumą ir vykdyti išnaudojimą pagal visus arba dauguma atvejų pažeidžiamumo.

<strong>Dabartis</strong> - Sėkmingas ataka priklauso nuo konkrečių dislokavimo ir vykdymo sąlygų pažeidžiamoje sistemoje, kuri leidžia ataka. Tokie veiksniai yra:

Lenktynių sąlyga turi būti laimėtas sėkmingai išnaudoti pažeidžiamumą. Užpuolimo sėkmė priklauso nuo vykdymo sąlygų, kurios nėra visiškai kontroliuojamos užpuoliko. Kad ataka būtų sėkminga, ją gali tekti pradėti kelis kartus prieš vieną taikinį.

Tinklo injekcija. Užpuolikas turi įsiskverbti į loginį tinklo kelią tarp tikslo ir išteklių, kurių prašo auka (pvz., pažeidžiamumas, dėl kurio reikia užpuoliko kelyje).';

$GLOBALS["lang"]['El Salvador'] = 'Salvadoras';

$GLOBALS["lang"]['email'] = 'E. paštas';

$GLOBALS["lang"]['Email'] = 'E. paštas';

$GLOBALS["lang"]['email_address'] = 'E. pašto adresas';

$GLOBALS["lang"]['Email Address'] = 'E. pašto adresas';

$GLOBALS["lang"]['Email Configuration'] = 'El. pašto konfigūracija';

$GLOBALS["lang"]['Email to send test to'] = '@ info: whatsthis';

$GLOBALS["lang"]['Enable'] = 'Įjungti';

$GLOBALS["lang"]['Enable Distributed COM on this computer - Option is checked'] = 'Įjungti paskirstytąjį COM šiame kompiuteryje - parinktis yra tikrinama';

$GLOBALS["lang"]['enabled'] = 'Įjungta';

$GLOBALS["lang"]['Enabled'] = 'Įjungta';

$GLOBALS["lang"]['Enabling the Feature Under Windows'] = 'Įjungti funkciją po langais';

$GLOBALS["lang"]['encryption'] = 'Šifravimas';

$GLOBALS["lang"]['Encryption'] = 'Šifravimas';

$GLOBALS["lang"]['encryption_method'] = 'Šifravimo metodas';

$GLOBALS["lang"]['Encryption Method'] = 'Šifravimo metodas';

$GLOBALS["lang"]['encryption_status'] = 'Šifravimo būsena';

$GLOBALS["lang"]['Encryption Status'] = 'Šifravimo būsena';

$GLOBALS["lang"]['end_date'] = 'Pabaigos data';

$GLOBALS["lang"]['End Date'] = 'Pabaigos data';

$GLOBALS["lang"]['End OF Life Product ID'] = 'Gyvavimo pabaigos produkto ID';

$GLOBALS["lang"]['end_of_life'] = 'Gyvenimo pabaiga';

$GLOBALS["lang"]['End Of Life'] = 'Gyvenimo pabaiga';

$GLOBALS["lang"]['end_of_production'] = 'Gamybos pabaiga';

$GLOBALS["lang"]['End Of Production'] = 'Gamybos pabaiga';

$GLOBALS["lang"]['end_of_service'] = 'Paslaugos pabaiga';

$GLOBALS["lang"]['End Of Service'] = 'Paslaugos pabaiga';

$GLOBALS["lang"]['end_of_service_life'] = 'Paslaugos pabaiga';

$GLOBALS["lang"]['End Of Service Life'] = 'Paslaugos pabaiga';

$GLOBALS["lang"]['Endpoint'] = 'Vertinamoji baigtis';

$GLOBALS["lang"]['English'] = 'Anglų';

$GLOBALS["lang"]['Enhances regulatory compliance'] = 'Pagerinti teisės aktų laikymąsi';

$GLOBALS["lang"]['Enrichment is complete. The CVE has full metadata and is considered stable.'] = 'Sodrinimas baigtas. CVE turi visus metaduomenis ir yra laikomas stabiliu.';

$GLOBALS["lang"]['Ensure documentation is controlled and accessible'] = 'Užtikrinti dokumentų kontrolę ir prieinamumą';

$GLOBALS["lang"]['enterprise'] = 'Įmonė';

$GLOBALS["lang"]['Enterprise'] = 'Įmonė';

$GLOBALS["lang"]['Enterprise Private Network'] = 'Įmonių privatusis tinklas';

$GLOBALS["lang"]['Enterprise private network'] = 'Įmonių privatusis tinklas';

$GLOBALS["lang"]['Entitlement Type'] = 'Teisių tipas';

$GLOBALS["lang"]['Entra'] = 'Entra';

$GLOBALS["lang"]['environment'] = 'Aplinka';

$GLOBALS["lang"]['Environment'] = 'Aplinka';

$GLOBALS["lang"]['Equal To'] = 'Lygiai';

$GLOBALS["lang"]['Equal To or Greater Than'] = 'Lygiai arba daugiau';

$GLOBALS["lang"]['Equal To or Less Than'] = 'Lygiai arba mažiau nei';

$GLOBALS["lang"]['Equals'] = 'Lygiagrečiai';

$GLOBALS["lang"]['Equatorial Guinea'] = 'Pusiaujo Gvinėja';

$GLOBALS["lang"]['Eritrea'] = 'Eritrėja';

$GLOBALS["lang"]['Error'] = 'Klaida';

$GLOBALS["lang"]['Error Code'] = 'Klaidos kodas';

$GLOBALS["lang"]['Esperanto'] = 'Esperanto';

$GLOBALS["lang"]['Establish a project plan and timeline'] = 'Sukurti projekto planą ir tvarkaraštį';

$GLOBALS["lang"]['Establish an information security policy'] = 'Sukurti informacijos saugumo politiką';

$GLOBALS["lang"]['Established'] = 'Įsteigimo metai';

$GLOBALS["lang"]['Estonia'] = 'Estija';

$GLOBALS["lang"]['Estonian'] = 'Estų';

$GLOBALS["lang"]['Ethernet MAC'] = 'Ethernet MAC';

$GLOBALS["lang"]['ethernet_mac'] = 'Ethernet Mac';

$GLOBALS["lang"]['Ethernet Mac'] = 'Ethernet Mac';

$GLOBALS["lang"]['Ethiopia'] = 'Etiopija';

$GLOBALS["lang"]['Evaluate the ISMS internally'] = 'Įvertinti ISMS viduje';

$GLOBALS["lang"]['Every'] = 'Kiekvienas';

$GLOBALS["lang"]['Every Day'] = 'Kiekvieną dieną';

$GLOBALS["lang"]['Example'] = 'Pavyzdys';

$GLOBALS["lang"]['Example Devices'] = 'Pavyzdiniai įrenginiai';

$GLOBALS["lang"]['Example Org Chart with Access'] = 'Pavyzdys Org diagrama su prieiga';

$GLOBALS["lang"]['Example text from'] = 'Pavyzdys tekstas iš';

$GLOBALS["lang"]['Examples'] = 'Pavyzdžiai';

$GLOBALS["lang"]['Exceptions'] = 'Išimtys';

$GLOBALS["lang"]['exclude'] = 'Išskyrus';

$GLOBALS["lang"]['Exclude'] = 'Išskyrus';

$GLOBALS["lang"]['exclude_ip'] = 'Išskyrus TL';

$GLOBALS["lang"]['Exclude IP'] = 'Išskyrus TL';

$GLOBALS["lang"]['Exclude IP Addresses'] = 'Išskyrus IP adresus';

$GLOBALS["lang"]['Exclude IP Addresses (individual IP - 192.168.1.20, ranges - 192.168.1.30-40 or subnets - 192.168.1.100/30) listed from being scanned. Comma seperated, no spaces.'] = 'Neįtraukti IP adresai (individualūs IP - 192.168.1.20, intervalai - 192.168.1.30- 40 arba parajoniai - 192.168.1.100 / 30), išvardyti kaip skenuojami. Komanda susėdusi, jokių tarpų.';

$GLOBALS["lang"]['Exclude TCP Ports'] = 'Išskyrus TCP uostus';

$GLOBALS["lang"]['exclude_tcp_ports'] = 'Išskyrus Tcp uostus';

$GLOBALS["lang"]['Exclude Tcp Ports'] = 'Išskyrus Tcp uostus';

$GLOBALS["lang"]['Exclude UDP Ports'] = 'Išskyrus UDP uostus';

$GLOBALS["lang"]['exclude_udp_ports'] = 'Išskyrus Udp uostus';

$GLOBALS["lang"]['Exclude Udp Ports'] = 'Išskyrus Udp uostus';

$GLOBALS["lang"]['Exclude any ports listed from being scanned. Comma seperated, no spaces.'] = 'Neįtraukti uostai, įtraukti į sąrašą dėl skenavimo. Komanda susėdusi, jokių tarpų.';

$GLOBALS["lang"]['Exclude these IP addresses from being Nmap scanned.'] = 'Neįtraukti šių IP adresų į Nmap skenavimą.';

$GLOBALS["lang"]['Excluded'] = 'Neįtraukta';

$GLOBALS["lang"]['exclusion_reasons'] = 'Įtraukimo į sąrašą priežastys';

$GLOBALS["lang"]['Exclusion Reasons'] = 'Įtraukimo į sąrašą priežastys';

$GLOBALS["lang"]['executable'] = 'Vykdomas failas';

$GLOBALS["lang"]['Executable'] = 'Vykdomas failas';

$GLOBALS["lang"]['executable_id'] = 'Vykdomas ID';

$GLOBALS["lang"]['Executable ID'] = 'Vykdomas ID';

$GLOBALS["lang"]['executables'] = 'Vykdomieji veiksmai';

$GLOBALS["lang"]['Executables'] = 'Vykdomieji veiksmai';

$GLOBALS["lang"]['Execute'] = 'Vykdyti';

$GLOBALS["lang"]['Executing'] = 'Vykdoma';

$GLOBALS["lang"]['exemption_reason'] = 'Išimties priežastis';

$GLOBALS["lang"]['Exemption Reason'] = 'Išimties priežastis';

$GLOBALS["lang"]['Existing Building'] = 'Esamas pastatas';

$GLOBALS["lang"]['Existing Floor'] = 'Esamas aukštis';

$GLOBALS["lang"]['Existing Room'] = 'Esamas kambarys';

$GLOBALS["lang"]['Existing Row'] = 'Esama eilutė';

$GLOBALS["lang"]['expire_date'] = 'Ištrinti datą';

$GLOBALS["lang"]['Expire Date'] = 'Ištrinti datą';

$GLOBALS["lang"]['expire_minutes'] = 'Ištrinti protokolą';

$GLOBALS["lang"]['Expire Minutes'] = 'Ištrinti protokolą';

$GLOBALS["lang"]['expires'] = 'Nustoja galioti';

$GLOBALS["lang"]['Expires'] = 'Nustoja galioti';

$GLOBALS["lang"]['expiry_date'] = 'Galiojimo pabaigos data';

$GLOBALS["lang"]['Expiry Date'] = 'Galiojimo pabaigos data';

$GLOBALS["lang"]['exploit_maturity'] = 'Išnaudoti terminą';

$GLOBALS["lang"]['Exploit Maturity'] = 'Išnaudoti terminą';

$GLOBALS["lang"]['Export'] = 'Eksportuoti';

$GLOBALS["lang"]['Export by Device'] = 'Eksportuoti pagal įrenginį';

$GLOBALS["lang"]['Export by Policy'] = 'Eksportuoti pagal politiką';

$GLOBALS["lang"]['Export data to'] = 'Eksportuoti duomenis į';

$GLOBALS["lang"]['Exporting a Device'] = 'Eksportuoti įrenginį';

$GLOBALS["lang"]['expose'] = 'Išeiti';

$GLOBALS["lang"]['Expose'] = 'Išeiti';

$GLOBALS["lang"]['External'] = 'Išorės';

$GLOBALS["lang"]['External Field Name'] = 'Išorinis lauko pavadinimas';

$GLOBALS["lang"]['External Field Type'] = 'Išorinio lauko tipas';

$GLOBALS["lang"]['External Field Types'] = 'Išoriniai lauko tipai';

$GLOBALS["lang"]['external_ident'] = 'Išorinis Identas';

$GLOBALS["lang"]['External Ident'] = 'Išorinis Identas';

$GLOBALS["lang"]['external_link'] = 'Išorinė sąsaja';

$GLOBALS["lang"]['External Link'] = 'Išorinė sąsaja';

$GLOBALS["lang"]['extra_columns'] = 'Papildomi stulpeliai';

$GLOBALS["lang"]['Extra Columns'] = 'Papildomi stulpeliai';

$GLOBALS["lang"]['Extra and Time based Reporting'] = 'Papildoma ir laiko informacija';

$GLOBALS["lang"]['Extra and more verbose logging is generated for troubleshooting.'] = 'Papildoma ir daugiau verbose medienos ruoša yra generuojama trikčių šalinimo.';

$GLOBALS["lang"]['FAQ'] = 'DUK';

$GLOBALS["lang"]['FQDN'] = 'FQDN';

$GLOBALS["lang"]['FW Revision'] = 'FW peržiūra';

$GLOBALS["lang"]['Fail'] = 'Gaila';

$GLOBALS["lang"]['Failed'] = 'Nepavyko';

$GLOBALS["lang"]['Failed Severity'] = 'Netinkamas sunkumas';

$GLOBALS["lang"]['Falkland Islands (Malvinas)'] = 'Folklando salos (Malvinas)';

$GLOBALS["lang"]['Family'] = 'Šeima';

$GLOBALS["lang"]['Faroe Islands'] = 'Farerų salos';

$GLOBALS["lang"]['Features'] = 'Savybės';

$GLOBALS["lang"]['February'] = 'Vasaris';

$GLOBALS["lang"]['field'] = 'Laukas';

$GLOBALS["lang"]['Field'] = 'Laukas';

$GLOBALS["lang"]['field_id'] = 'Laukelio ID';

$GLOBALS["lang"]['Field ID'] = 'Laukelio ID';

$GLOBALS["lang"]['Field Name'] = 'Laukelio pavadinimas';

$GLOBALS["lang"]['Field Type'] = 'Lauko tipas';

$GLOBALS["lang"]['Fields'] = 'Sritys';

$GLOBALS["lang"]['fields'] = 'Sritys';

$GLOBALS["lang"]['Fields attributes are'] = 'Failų atributai yra:';

$GLOBALS["lang"]['Fiji the Fiji Islands'] = 'Fidžis Fidžio Salos';

$GLOBALS["lang"]['File'] = 'Failas';

$GLOBALS["lang"]['File Auditing'] = 'Failų auditas';

$GLOBALS["lang"]['File Import'] = 'Failo importavimas';

$GLOBALS["lang"]['File Input'] = 'Failo įvestis';

$GLOBALS["lang"]['file_name'] = 'Failo pavadinimas';

$GLOBALS["lang"]['File Name'] = 'Failo pavadinimas';

$GLOBALS["lang"]['File Share Discovery'] = 'Failų bendrinimo paieška';

$GLOBALS["lang"]['file_size'] = 'Failo dydis';

$GLOBALS["lang"]['File Size'] = 'Failo dydis';

$GLOBALS["lang"]['filename'] = 'Failo pavadinimas';

$GLOBALS["lang"]['Filename'] = 'Failo pavadinimas';

$GLOBALS["lang"]['files'] = 'Failai';

$GLOBALS["lang"]['Files'] = 'Failai';

$GLOBALS["lang"]['files_id'] = 'Failų ID';

$GLOBALS["lang"]['Files ID'] = 'Failų ID';

$GLOBALS["lang"]['filter'] = 'Filtras';

$GLOBALS["lang"]['Filter'] = 'Filtras';

$GLOBALS["lang"]['filtered'] = 'Filtruota';

$GLOBALS["lang"]['Filtered'] = 'Filtruota';

$GLOBALS["lang"]['Filtered Ports'] = 'Filtruoti uostai';

$GLOBALS["lang"]['Finland'] = 'Suomija';

$GLOBALS["lang"]['Finnish'] = 'Suomių';

$GLOBALS["lang"]['Firewall'] = 'Ugniasienė';

$GLOBALS["lang"]['Firewall Packages'] = 'Ugniasienės paketai';

$GLOBALS["lang"]['firewall_rule'] = 'Ugniasienės taisyklė';

$GLOBALS["lang"]['Firewall Rule'] = 'Ugniasienės taisyklė';

$GLOBALS["lang"]['firmware'] = 'Firmware';

$GLOBALS["lang"]['Firmware'] = 'Firmware';

$GLOBALS["lang"]['firmware_revision'] = 'Firmware modifikacija';

$GLOBALS["lang"]['Firmware Revision'] = 'Firmware modifikacija';

$GLOBALS["lang"]['First'] = 'Pirmas';

$GLOBALS["lang"]['First Name'] = 'Vardas';

$GLOBALS["lang"]['first_run'] = 'Pirmas paleidimas';

$GLOBALS["lang"]['First Run'] = 'Pirmas paleidimas';

$GLOBALS["lang"]['first_seen'] = 'Pirmoji naktis';

$GLOBALS["lang"]['First Seen'] = 'Pirmoji naktis';

$GLOBALS["lang"]['First focus on what the end need is: are you trying to baseline software, users, or Netstat data? What is the important thing(s) to compare and report on?'] = 'Pirmas dėmesys, ką galutinis poreikis yra: ar jūs bandote bazinę programinę įrangą, vartotojai, ar Netstat duomenys? Koks (-ie) svarbus (-i) dalykas (-ai), apie kurį (-iuos) reikia palyginti ir apie kurį (-iuos) pranešti?';

$GLOBALS["lang"]['FirstWave'] = 'FirstWave';

$GLOBALS["lang"]['Fix'] = 'Fix';

$GLOBALS["lang"]['Fixed'] = 'Fiksuotas';

$GLOBALS["lang"]['Fixing the Issue'] = 'Emisijos nustatymas';

$GLOBALS["lang"]['Floor'] = 'Grindys';

$GLOBALS["lang"]['Follow any of the links below and discover how to use Open-AudIT to find out <b>Whats On Your Network?</b>'] = 'Sekite bet kurį iš žemiau esančių nuorodų ir atrasti, kaip naudoti Open- AudIT sužinoti <b>Kas jūsų tinkle?</b>';

$GLOBALS["lang"]['For'] = 'Už';

$GLOBALS["lang"]['For <i>Type</i> make sure to select Baseline, and for Group you should select a Group of devices, if applicable to this baseline, that best represent the devices to apply the baseline against. This will prevent erroneous entries.'] = 'Už <i>Tipas</i> Įsitikinkite, kad pasirinkite Baseline, ir grupės atveju turėtumėte pasirinkti įrenginių grupę, jei taikoma pagal šią bazinę liniją, kuri geriausiai atspindi įrenginius, kurie naudoja bazinę liniją. Tai padės išvengti klaidingų įrašų.';

$GLOBALS["lang"]['For Debian/Ubuntu run, including setting dpkg to remember your override so an apt-get upgrade will not break'] = 'Debian / Ubuntu paleisti, įskaitant nustatymą dpkg prisiminti savo override, todėl apt- gauti atnaujinimas nebus pertrauka';

$GLOBALS["lang"]['For SNMP Open-AudIT can use v1, v2 and v3 credentials. The device is queried regardless of it being a router, switch (regular network devices) or a computer (Linux and Windows often run SNMP for monitoring tools).'] = 'SNMP Open- AudIT gali naudoti v1, v2 ir v3 įgaliojimus. Įrenginys kelia užklausą, nesvarbu, ar jis yra maršrutizatorius, komutatorius (reguliarūs tinklo įrenginiai), ar kompiuteris (Linux ir Windows dažnai veikia SNMP stebėjimo įrankių).';

$GLOBALS["lang"]['For a primer on cron, see this Wikipedia page'] = 'Dėl ant cron gruntas, žr. šį Wikipedia puslapį';

$GLOBALS["lang"]['For a seed discovery, should I only discover IPs in the private IP address space.'] = 'Sėklos atradimui, jei aš atrasti IP tik privataus IP adreso erdvėje.';

$GLOBALS["lang"]['For a seed discovery, should I only discover IPs on the chosen subnet.'] = 'Sėklos atradimui aš turėčiau atrasti tik IP pasirinktame potinklyje.';

$GLOBALS["lang"]['For a seed discovery, should I ping the subnet before running the discovery.'] = 'Sėklos atradimui, jei prieš tai pakabinčiau potinklį.';

$GLOBALS["lang"]['For advanced entry of a raw SQL query. As per Queries, you must include <code>WHERE @filter AND<code> in your SQL.'] = 'Už pažangų įrašą neapdorotų SQL užklausos. Kaip per užklausas, turite įtraukti <code>WHERE @filter AND<code> in your SQL.</code></code>';

$GLOBALS["lang"]['For each spawned process, the below occurs.'] = 'Kiekvieno neršiančio produkto atveju:';

$GLOBALS["lang"]['For example - you might create a baseline from a device running Redhat 9 which acts as one of your Apache servers in a cluster. You know this particular server is configured just the way you want it but you are unsure if other servers in the cluster are configured exactly the same. Baselines enable you to determine this.'] = 'Pavyzdžiui - galite sukurti bazinį iš įrenginio, eksploatuojančio Redhat 9, kuris veikia kaip vienas iš jūsų Apache serverių klasteris. Jūs žinote, kad šis konkretus serveris yra sukonfigūruotas taip, kaip norite, bet jūs nesate tikri, ar kiti serveriai klasteris yra sukonfigūruoti lygiai taip pat. Pagrindai leidžia jums nustatyti tai.';

$GLOBALS["lang"]['For example - you might create a baseline from a device running Redhat 9 which acts as one of your Apache servers in a cluster. You know this particular server is configured just the way you want it but you are unsure if other servers in the cluster are configured exactly the same. Baselines enables you to determine this.'] = 'Pavyzdžiui - galite sukurti bazinį iš įrenginio, eksploatuojančio Redhat 9, kuris veikia kaip vienas iš jūsų Apache serverių klasteris. Jūs žinote, kad šis konkretus serveris yra sukonfigūruotas taip, kaip norite, bet jūs nesate tikri, ar kiti serveriai klasteris yra sukonfigūruoti lygiai taip pat. Pagrindai leidžia jums nustatyti tai.';

$GLOBALS["lang"]['For further details information, see the wiki.'] = 'Daugiau informacijos rasite wiki.';

$GLOBALS["lang"]['For licenses that are not perpetual, when does the license expire.'] = 'Licencijoms, kurios nėra perpetual, kai ji baigiasi.';

$GLOBALS["lang"]['For more detailed information, check the Open-AudIT Knowledge Base.'] = 'Išsamesnės informacijos ieškokite Open- AudIT žinių bazėje.';

$GLOBALS["lang"]['For more information please see the following guide which includes a video. Use'] = 'Daugiau informacijos rasite šiame vadove, kuriame yra vaizdo įrašas. Naudojimas';

$GLOBALS["lang"]['For more information, see'] = 'Daugiau informacijos rasite';

$GLOBALS["lang"]['form_factor'] = 'Formos faktorius';

$GLOBALS["lang"]['Form Factor'] = 'Formos faktorius';

$GLOBALS["lang"]['format'] = 'Formatas';

$GLOBALS["lang"]['Format'] = 'Formatas';

$GLOBALS["lang"]['Forth'] = 'Fortas';

$GLOBALS["lang"]['fqdn'] = 'Fqdn';

$GLOBALS["lang"]['Fqdn'] = 'Fqdn';

$GLOBALS["lang"]['France, French Republic'] = 'Prancūzija, Prancūzijos Respublika';

$GLOBALS["lang"]['free'] = 'Nemokama';

$GLOBALS["lang"]['Free'] = 'Nemokama';

$GLOBALS["lang"]['French'] = 'Prancūzų';

$GLOBALS["lang"]['French Guiana'] = 'Prancūzijos Gviana';

$GLOBALS["lang"]['French Polynesia'] = 'Prancūzijos Polinezija';

$GLOBALS["lang"]['French Southern Territories'] = 'Prancūzijos Pietų teritorijos';

$GLOBALS["lang"]['Frequently Asked Questions'] = 'Dažnai užduodami klausimai';

$GLOBALS["lang"]['Friday'] = 'Penktadienis';

$GLOBALS["lang"]['From 100 Devices'] = 'Nuo 100 įrenginių';

$GLOBALS["lang"]['From 500 Devices'] = 'Nuo 500 įrenginių';

$GLOBALS["lang"]['From that page'] = 'Iš šio puslapio';

$GLOBALS["lang"]['full_name'] = 'Visas pavadinimas';

$GLOBALS["lang"]['Full Name'] = 'Visas pavadinimas';

$GLOBALS["lang"]['Full cloud auditing with all the details from a regular Open-AudIT audit AND details such as the machine type and size.'] = 'Visas debesis auditas su visais duomenimis iš reguliaraus Open- Audit audito IR detalės, pavyzdžiui, mašinos tipas ir dydis.';

$GLOBALS["lang"]['function'] = 'Funkcija';

$GLOBALS["lang"]['Function'] = 'Funkcija';

$GLOBALS["lang"]['GROUP BY'] = 'GRUPĖ';

$GLOBALS["lang"]['Gabon'] = 'Gabonas';

$GLOBALS["lang"]['Galician'] = 'Galisasworld. kgm';

$GLOBALS["lang"]['Gambia the'] = 'Gambija';

$GLOBALS["lang"]['Gap Analysis (optional)'] = 'Tarpo analizė (neprivaloma)';

$GLOBALS["lang"]['gateway'] = 'Vartai';

$GLOBALS["lang"]['Gateway'] = 'Vartai';

$GLOBALS["lang"]['gateways'] = 'Gatvės';

$GLOBALS["lang"]['Gateways'] = 'Gatvės';

$GLOBALS["lang"]['Generated By'] = 'Pagaminta';

$GLOBALS["lang"]['geo'] = 'Geo';

$GLOBALS["lang"]['Geo'] = 'Geo';

$GLOBALS["lang"]['Geographical Maps'] = 'Geografiniai žemėlapiai';

$GLOBALS["lang"]['Georgia'] = 'Gruzija';

$GLOBALS["lang"]['German'] = 'Vokiečių';

$GLOBALS["lang"]['Germany'] = 'Vokietija';

$GLOBALS["lang"]['Get Lat/Long'] = 'Get Lat / Long';

$GLOBALS["lang"]['Get News'] = 'Gauti naujienas';

$GLOBALS["lang"]['Get Started'] = 'Pradėti';

$GLOBALS["lang"]['Get a Free License'] = 'Gauti nemokamą licenciją';

$GLOBALS["lang"]['Get familiar with the Open-AudIT platform and explore some of its features.'] = 'susipažinti su Open- AudIT platforma ir ištirti kai kurias jos funkcijas.';

$GLOBALS["lang"]['Getting Started'] = 'Pradžia';

$GLOBALS["lang"]['Ghana'] = 'Gana';

$GLOBALS["lang"]['Gibraltar'] = 'Gibraltaras';

$GLOBALS["lang"]['Github'] = 'Gitubas';

$GLOBALS["lang"]['Global Discovery Options'] = 'Visuotinės paieškos parinktys';

$GLOBALS["lang"]['Global area network'] = 'Pasaulinis tinklas';

$GLOBALS["lang"]['Go'] = 'Eiti';

$GLOBALS["lang"]['Go back to your Open-AudIT server and create a discovery with the target Windows computers IP Address as the subnet (this will save having to discover the entire subnet again). Run the discovery, taking note of any issues. For any issues found, take appropriate actions.'] = 'Grįžkite į savo Open- AudIT serverį ir sukurkite atradimą su tiksliniu "Windows" kompiuteriu IP adresu kaip potinkliu (tai išsaugos galimybę vėl atrasti visą potinklį). Vykdyti atradimą, atsižvelgiant į bet kokius klausimus. Nustačius bet kokius klausimus, imtis atitinkamų veiksmų.';

$GLOBALS["lang"]['Go the target Windows PC (or use RDP) and log on as the user used by your discovery credential set.'] = 'Eiti tikslinės Windows PC (arba naudoti RDP) ir prisijungti kaip vartotojas, naudojamas savo atradimo Įgūdžių rinkinys.';

$GLOBALS["lang"]['Go to menu'] = 'Eiti į meniu';

$GLOBALS["lang"]['Go to the <i>Applications</i> -> <i>App registrations</i> menu item on the far left. Search for Open-AudIT. Click the Open-AudIT entry in the list (assuming you named the app Open-AudIT).'] = 'Eiti į <i>Paraiškos</i> - > <i>Programėlių registracija</i> meniu punktas kairėje pusėje. Ieškoti Open- AudIT. Spustelėkite Open- AudIT įrašą sąraše (darant prielaidą, kad pavadinote programėlę Open- AudIT).';

$GLOBALS["lang"]['Go to the <i>Certificates and secrets</i> menu item under <i>Manage</i> in the center menu.'] = 'Eiti į <i>Sertifikatai ir paslaptys</i> meniu punktas po <i>Tvarkyti</i> centre meniu.';

$GLOBALS["lang"]['Go to the <i>Single sign-on</i> menu item and click SAML for <i>Select a single sign-on method</i>.'] = 'Eiti į <i>Vienas ženklas</i> meniu punktas ir spustelėkite SAML for <i>Parinkite vieno ženklo metodą</i>.';

$GLOBALS["lang"]['Google Compute Fields'] = 'Comment';

$GLOBALS["lang"]['Google JSON Credentials'] = 'Google JSON Kreditai';

$GLOBALS["lang"]['Google Maps API Key'] = 'Google Maps API Raktas';

$GLOBALS["lang"]['Great, then you can help! Send FirstWave the text shown in the GUI and what should be shown. We will include that in the language file so going forward, the translation is improved and you do not need to worry about updating it for every release!'] = 'Puiku, tada galite padėti! Siųsti pirmą Bandykite grafinėje sistemoje rodomą tekstą ir tai, ką reikia parodyti. Mes įtrauksime, kad į kalbos failą taip juda į priekį, vertimas yra patobulintas ir jums nereikia nerimauti atnaujinti jį už kiekvieną išleidimo!';

$GLOBALS["lang"]['Greater Than'] = 'Than';

$GLOBALS["lang"]['Greater Than or Equals'] = 'Didesnis nei arba lygus';

$GLOBALS["lang"]['Greece'] = 'Graikija';

$GLOBALS["lang"]['Greek'] = 'Graikų';

$GLOBALS["lang"]['Green Query'] = 'Žalia užklausa';

$GLOBALS["lang"]['Greenland'] = 'Grenlandija';

$GLOBALS["lang"]['Grenada'] = 'Grenada';

$GLOBALS["lang"]['Group'] = 'Grupė';

$GLOBALS["lang"]['group_by'] = 'Grupė pagal';

$GLOBALS["lang"]['Group By'] = 'Grupė pagal';

$GLOBALS["lang"]['group_id'] = 'Grupės ID';

$GLOBALS["lang"]['Group ID'] = 'Grupės ID';

$GLOBALS["lang"]['groups'] = 'Grupės';

$GLOBALS["lang"]['Groups'] = 'Grupės';

$GLOBALS["lang"]['Groups are used as simple lists of devices that match the required conditions. If requested using JSON they return a list of <i>devices.id</i> only. If requested using the web interface, they return the standard column attribute list. Groups can be used for Integrations, Baselines and other items.'] = 'Grupės naudojamos kaip paprastas sąrašas prietaisų, kurie atitinka reikalaujamas sąlygas. Jei prašoma naudojant JSON, jie grąžina sąrašą <i>devices.id</i> tik. Jei prašoma naudojant Web sąsają su vartotoju, jie grąžina standartinį stulpelio atributų sąrašą. Grupės gali būti naudojamos integracijoms, baziniams taškams ir kitiems objektams.';

$GLOBALS["lang"]['Guadeloupe'] = 'Gvadelupa';

$GLOBALS["lang"]['Guam'] = 'Guamas';

$GLOBALS["lang"]['Guatemala'] = 'Gvatemala';

$GLOBALS["lang"]['Guernsey'] = 'Gernsis';

$GLOBALS["lang"]['guest_device_id'] = 'Svečių įrenginio ID';

$GLOBALS["lang"]['Guest Device ID'] = 'Svečių įrenginio ID';

$GLOBALS["lang"]['guid'] = 'Gidas';

$GLOBALS["lang"]['Guid'] = 'Gidas';

$GLOBALS["lang"]['Guinea'] = 'Gvinėja';

$GLOBALS["lang"]['Guinea-Bissau'] = 'Bisau Gvinėja';

$GLOBALS["lang"]['Guyana'] = 'Gajana';

$GLOBALS["lang"]['HP-UX'] = 'HP-UX';

$GLOBALS["lang"]['HW Revision'] = 'HW patikslinimas';

$GLOBALS["lang"]['Haiti'] = 'Haitis';

$GLOBALS["lang"]['hard_drive_index'] = 'Kietųjų diskų indeksas';

$GLOBALS["lang"]['Hard Drive Index'] = 'Kietųjų diskų indeksas';

$GLOBALS["lang"]['Hardware'] = 'Aparatūra';

$GLOBALS["lang"]['hardware_revision'] = 'Aparatinės įrangos peržiūra';

$GLOBALS["lang"]['Hardware Revision'] = 'Aparatinės įrangos peržiūra';

$GLOBALS["lang"]['Has this policy been applied in this organization.'] = 'Ar ši politika buvo taikoma šioje organizacijoje.';

$GLOBALS["lang"]['hash'] = 'Raktažodis';

$GLOBALS["lang"]['Hash'] = 'Raktažodis';

$GLOBALS["lang"]['Have the agent always run the latest audit script (if you upgrade Open-AudIT and manually copy the scripts to the targets, then set cron - you will need to update these scripts for each upgrade).'] = 'Ar agentas visada paleisti naujausią audito scenarijų (jei jūs atnaujinate Open- AudIT ir rankiniu būdu nukopijuoti scenarijus į tikslus, tada nustatyti CRON - jums reikės atnaujinti šiuos scenarijus kiekvieno atnaujinimo).';

$GLOBALS["lang"]['Have your user open a command prompt (using <i>Run as Administrator</i>). Paste the below into the prompt to download the Agent.'] = 'Leisti vartotojui atverti komandos skambutį (naudojant <i>Vykdyti kaip administratorių</i>). Įdėti žemiau esantį į greitą atsisiųsti agentas.';

$GLOBALS["lang"]['Head'] = 'Galva';

$GLOBALS["lang"]['Heard Island and McDonald Islands'] = 'Heardo ir McDonaldo salos';

$GLOBALS["lang"]['Hebrew'] = 'Hebrajų';

$GLOBALS["lang"]['height'] = 'Aukštis';

$GLOBALS["lang"]['Height'] = 'Aukštis';

$GLOBALS["lang"]['Height in RU'] = 'Aukštis GĮ';

$GLOBALS["lang"]['Help'] = 'Pagalba';

$GLOBALS["lang"]['Help and Frequently Asked Questions'] = 'Pagalba ir dažnai užduodami klausimai';

$GLOBALS["lang"]['Helps manage and mitigate information security risks'] = 'Padeda valdyti ir mažinti informacijos saugumo riziką';

$GLOBALS["lang"]['Hide Audit Window'] = 'Slėpti audito langą';

$GLOBALS["lang"]['high'] = 'Aukšta';

$GLOBALS["lang"]['High'] = 'Aukšta';

$GLOBALS["lang"]['High Availability'] = 'Didelis prieinamumas';

$GLOBALS["lang"]['Hindi'] = 'Hindis';

$GLOBALS["lang"]['Holy See (Vatican City State)'] = 'Šventasis Sostas (Vatikano Miesto Valstybė)';

$GLOBALS["lang"]['Home'] = 'Namai';

$GLOBALS["lang"]['home'] = 'Namai';

$GLOBALS["lang"]['Home Area Network'] = 'Pagrindinis tinklas';

$GLOBALS["lang"]['Home area network'] = 'Pagrindinis tinklas';

$GLOBALS["lang"]['Honduras'] = 'Hondūras';

$GLOBALS["lang"]['Hong Kong'] = 'Honkongas';

$GLOBALS["lang"]['host'] = 'Mazgas';

$GLOBALS["lang"]['Host'] = 'Mazgas';

$GLOBALS["lang"]['hostname'] = 'Mazgas';

$GLOBALS["lang"]['Hostname'] = 'Mazgas';

$GLOBALS["lang"]['hour'] = 'Valanda';

$GLOBALS["lang"]['Hour'] = 'Valanda';

$GLOBALS["lang"]['How Does It Work?'] = 'Kaip tai veikia?';

$GLOBALS["lang"]['How Does it Work?'] = 'Kaip tai veikia?';

$GLOBALS["lang"]['How Long Does it Take'] = 'Kaip ilgai tai trunka';

$GLOBALS["lang"]['How and Why is'] = 'Kaip ir kodėl yra';

$GLOBALS["lang"]['How and Why is Open-AudIT More Secure'] = 'Kaip ir kodėl Open- AudIT Saugesnis';

$GLOBALS["lang"]['How do they work?'] = 'Kaip jie veikia?';

$GLOBALS["lang"]['How does a Device Seed Discovery find known IPs?'] = 'Kaip prietaisas sėklų paieškos rasti žinomų IP?';

$GLOBALS["lang"]['How long did the command take to execute.'] = 'Kiek laiko komanda užtruko.';

$GLOBALS["lang"]['How long should Nmap wait for a response, per device.'] = 'Kiek laiko Nmap turėtų laukti atsakymo, vienam įrenginiui.';

$GLOBALS["lang"]['How many circuit feed to this rack.'] = 'Kiek grandinės maitinasi šia lentyna.';

$GLOBALS["lang"]['How many policies results in a fail.'] = 'Kiek politikos krypčių nepavyksta įgyvendinti.';

$GLOBALS["lang"]['How many policies results in a pass.'] = 'Kiek politikos krypčių galima pasiekti.';

$GLOBALS["lang"]['How many power sockets in this rack.'] = 'Kiek galios lizdų šioje lentynoje.';

$GLOBALS["lang"]['How many rack units in height is this rack.'] = 'Kiek stovų aukštis yra šis stovas.';

$GLOBALS["lang"]['How often should the collector ask the server for a task.'] = 'Kaip dažnai kolektorius paprašyti serverio užduotį.';

$GLOBALS["lang"]['How should we select devices to be integrated (using an Attribute, Query or a Group).'] = 'Kaip turėtume pasirinkti integruotinus įrenginius (naudojant atributą, užklausą ar grupę).';

$GLOBALS["lang"]['How the vulnerability is exploited (e.g., Network, Adjacent, Local, Physical).'] = 'Kaip išnaudojamas pažeidžiamumas (pvz., tinklas, Adjudice, Vietinis, Fizinis).';

$GLOBALS["lang"]['How to compare'] = 'Kaip palyginti';

$GLOBALS["lang"]['Human-readable explanation of the vulnerability.'] = 'Humaniškai suprantamas pažeidžiamumo paaiškinimas.';

$GLOBALS["lang"]['Hungarian'] = 'Vengrų';

$GLOBALS["lang"]['Hungary'] = 'Vengrija';

$GLOBALS["lang"]['hw_cpe'] = 'Hw Cpe';

$GLOBALS["lang"]['Hw Cpe'] = 'Hw Cpe';

$GLOBALS["lang"]['hyperthreading'] = 'Hipertenzija';

$GLOBALS["lang"]['Hyperthreading'] = 'Hipertenzija';

$GLOBALS["lang"]['I have read the EULA.'] = 'Skaičiau EULA.';

$GLOBALS["lang"]['I hope this post has alleviated any concerns you have about Open-AudIT and Security. If you have any questions at all, please do not hesitate to reach out to us here at FirstWave. We are always happy to discuss your concerns and needs. And maybe if your question is not something I have addressed here, I can add it here for future users'] = 'Tikiuosi, kad šis postas palengvino jūsų susirūpinimą dėl Open- AudIT ir saugumo. Jei turite klausimų, prašome nedvejodami susisiekti su mumis čia FirstWave. Mes visada džiaugiamės galėdami aptarti jūsų rūpesčius ir poreikius. Ir galbūt, jei jūsų klausimas yra ne tai, į ką aš čia kreipėsi, galiu pridėti jį čia ateities vartotojams';

$GLOBALS["lang"]['id'] = 'ID';

$GLOBALS["lang"]['ID'] = 'ID';

$GLOBALS["lang"]['IF'] = 'IF';

$GLOBALS["lang"]['IMPORTANT'] = 'SVARBU';

$GLOBALS["lang"]['INPUTS'] = 'MOKESČIAI';

$GLOBALS["lang"]['IOS Version'] = 'IOS versija';

$GLOBALS["lang"]['IP'] = 'IP';

$GLOBALS["lang"]['ip'] = 'IP';

$GLOBALS["lang"]['IP Address'] = 'IP adresas';

$GLOBALS["lang"]['IP Addresses'] = 'IP adresai';

$GLOBALS["lang"]['IP Last Seen'] = 'IP paskutinis priesaga';

$GLOBALS["lang"]['IP Set By'] = 'IP rinkinys pagal';

$GLOBALS["lang"]['ISMS'] = 'ISMS';

$GLOBALS["lang"]['ISO 27001 only.'] = 'Tik ISO 27001.';

$GLOBALS["lang"]['Iceland'] = 'Islandija';

$GLOBALS["lang"]['icon'] = 'Ženkliukas';

$GLOBALS["lang"]['Icon'] = 'Ženkliukas';

$GLOBALS["lang"]['Icon and Text'] = 'Ženkliukas ir tekstas';

$GLOBALS["lang"]['Icon only, text only or icon and text.'] = 'Tik piktograma, tik tekstas arba piktograma ir tekstas.';

$GLOBALS["lang"]['id_internal'] = 'Id Vidaus';

$GLOBALS["lang"]['Id Internal'] = 'Id Vidaus';

$GLOBALS["lang"]['id_number'] = 'Id numeris';

$GLOBALS["lang"]['Id Number'] = 'Id numeris';

$GLOBALS["lang"]['identification'] = 'Identifikacija';

$GLOBALS["lang"]['Identification'] = 'Identifikacija';

$GLOBALS["lang"]['Identify information assets'] = 'Nurodyti informacijos turtą';

$GLOBALS["lang"]['Identify interested parties and their requirements'] = 'Nustatyti suinteresuotąsias šalis ir jų reikalavimus';

$GLOBALS["lang"]['Identify key stakeholders and assign roles'] = 'Nustatyti pagrindinius suinteresuotuosius subjektus ir priskirti vaidmenis';

$GLOBALS["lang"]['Identify the device(s) that are your exemplary, or <i>gold image</i> you want to compare similar devices against.'] = 'Nurodykite savo pavyzdinį (-ius) prietaisą (-us) arba <i>aukso atvaizdis</i> norite palyginti panašius įrenginius su.';

$GLOBALS["lang"]['Identifying and evaluating security risks'] = 'Saugumo rizikos nustatymas ir vertinimas';

$GLOBALS["lang"]['If'] = 'Jei';

$GLOBALS["lang"]['If a device is individually discovered using the <i>Discover Device</i> link on the device details page, we first check if this device has been discovered previously (by Discovery) and if so, use the discovery options from that scan. If it has not been previously discovered, we revert to the configuration item discovery_default_scan_option the settings.'] = 'Jei prietaisas yra atskirai atrado naudojant <i>Atrasti įrenginį</i> nuoroda prietaiso informacijos puslapyje, mes pirmiausia patikrinti, ar šis įrenginys buvo atrasta anksčiau (pagal Discovery) ir jei taip, naudoti paieškos parinktis iš to skenavimo. Jei jis anksčiau nebuvo atrastas, mes grįžtame prie konfigūracijos elemento atradimas _ numatytasis _ scan _ option nustatymai.';

$GLOBALS["lang"]['If a new Org is created, an LDAP group name is automatically derived from the name. For example, if a new Org is created and is named Test, the corresponding LDAP group will be named open-audit_orgs_test.'] = 'Jei sukuriamas naujas Org, LDAP grupės pavadinimas automatiškai gaunamas iš pavadinimo. Pavyzdžiui, jei naujas Org yra sukurtas ir pavadintas Test, atitinkama LDAP grupė bus pavadinta open- audit _ orgs _ test.';

$GLOBALS["lang"]['If a port responds with filtered, should we consider it available.'] = 'Jei prievadas reaguoja su filtru, jei mes manome, kad tai galima.';

$GLOBALS["lang"]['If a port responds with open|filtered, should we consider it available.'] = 'Jei prievadas reaguoja su atvira 124; filtruotas, jei mes manome, kad tai galima.';

$GLOBALS["lang"]['If a remote device does not exist in the Open-AudIT selected devices, should we delete it from the external system.'] = 'Jei Open- AudIT pasirinktuose įrenginiuose nėra nuotolinio įrenginio, jį reikėtų ištrinti iš išorinės sistemos.';

$GLOBALS["lang"]['If an Open-AudIT device has been changed, should we update the external system.'] = 'Jei Open- AudIT įrenginys buvo pakeistas, reikia atnaujinti išorinę sistemą.';

$GLOBALS["lang"]['If an Open-AudIT device is not on the external system, should we create it.'] = 'Jei Open- AudIT įrenginys nėra išorinėje sistemoje, mes jį sukurti.';

$GLOBALS["lang"]['If an agent reports its primary IP is in this subnet, perform the actions.'] = 'Jei agentas praneša apie savo pirminį IP yra šiame potinklyje, atlikti veiksmus.';

$GLOBALS["lang"]['If any of these (comma seperated, no spaces) ports are detected, assume SSH is running on them and use them for auditing. No need to add this port to the Custom TCP ports - it will be added automatically.'] = 'Jei kuris nors iš šių (kablelis, jokių tarpų) uostai yra aptinkami, manyti, SSH veikia juos ir naudoti juos audito. Nereikia pridėti šio prievado prie Custom TCP prievadų - jis bus pridėtas automatiškai.';

$GLOBALS["lang"]['If no operator is specified, the default is =. Properties should be fully qualified - ie, devices.hostname (not just hostname).'] = 'Jei nenurodomas operatorius, numatytoji vertė =. Savybės turėtų būti visiškai kvalifikuotas - ty, devices.hostname (ne tik mazgo pavadinimas).';

$GLOBALS["lang"]['If no value is present, supply this value. EG: for system.nmis_group / configuraion.group we use'] = 'Jei vertės nėra, pateikite šią vertę. EG: system.nmis _ group / confidaion. grupė, kurią naudojame';

$GLOBALS["lang"]['If set, holds a JSON array of specific device columns this user has chosen to see, other than the configuration default.'] = 'Jei nustatyta, turi JSON masyvą konkretaus įrenginio stulpelius, kuriuos naudotojas pasirinko matyti, išskyrus numatytąją konfigūraciją.';

$GLOBALS["lang"]['If the OS Family (as reported by the device) contains this item, pass.</li>'] = 'Jei OS šeima (kaip pranešė įrenginys) yra šis punktas, praeiti.';

$GLOBALS["lang"]['If the Open-AudIT Server has Collectors reporting to it, an additional drop down is provided. You can select this to specify which Collector the task should run on. Only Discovery tasks are supported for Collectors.'] = 'Jei Open- AudIT Serveris turi Kolektoriai ataskaitų jam, papildomas lašas žemyn. Galite pasirinkti tai nurodyti, kuri Rinkėjas užduotis turėtų paleisti. Kolektoriams palaikomos tik paieškos užduotys.';

$GLOBALS["lang"]['If the agent OS family (case insensitive) contains this string, perform the actions.'] = 'Jei agento OS šeimoje (byla nejautri) yra ši eilutė, atlikti veiksmus.';

$GLOBALS["lang"]['If the binary is not found in either of these locations, a warning message will be displayed in the installer.'] = 'Jei dvejetainis nerastas nė vienoje iš šių vietų, montuotoje bus rodomas įspėjamasis pranešimas.';

$GLOBALS["lang"]['If the following conditions are met:<br><ul><li>a Role has an assigned ad_group</li><li>an Org has an assigned ad_group</li><li>an LDAP Server has use_roles set to y</li><li>a user exists in LDAP (be it Active Directory or OpenLDAP) and is in the assigned ad_groups</li></ul>That user can log on to Open-AudIT without an account in Open-AudIT needing to be created. Open-AudIT will query the LDAP in question and if the user is in the required groups but not in Open-AudIT, their user attributes (name, full name, email,  roles, orgs, etc) within Open-AudIT will be automatically populated and they will be logged on.<br> <br>'] = 'Jei laikomasi šių sąlygų:<br/><ul><li>a Vaidmuo turi paskirtą ad _ group</li><li>Org turi priskirtą ad _ group</li><li>LDAP Serveris turi naudoti _ vaidmenis, nustatytus y</li><li>vartotojas yra LDAP (ar tai Active Directory arba OpenLDAP) ir priskirtas ad _ group</li></ul>Kad vartotojas gali prisijungti prie Open- AudIT be Open- AudIT sąskaitą reikia sukurti. Open- AudIT užduos klausimą aptariamam LDAP ir jei vartotojas yra reikalaujamose grupėse, bet ne Open- AudIT, jų vartotojo atributus (vardas, vardas, pavardė, el. paštas, vaidmenys, orgai ir tt) per Open- AudIT bus automatiškai apgyvendintas ir jie bus registruojami.<br/> <br/>';

$GLOBALS["lang"]['If the local field is true (bool) or y (string) or Y (string) or 1 (integer) then set the external data to 1.'] = 'Jei vietinis laukas yra tiesa (bool) arba y (string) arba Y (string) arba 1 (integer) tada nustatyti išorinius duomenis į 1.';

$GLOBALS["lang"]['If the local field is true (bool) or y (string) or Y (string) or 1 (integer) then set the external data to y.'] = 'Jei vietinis laukas yra tiesa (bul) arba y (string) arba Y (string) arba 1 (integer) tada nustatyti išorinius duomenis į y.';

$GLOBALS["lang"]['If the primary IP (as reported by the device) is in this subnet, pass.</li>'] = 'Jei pirminis IP (kaip pranešė įrenginys) yra šiame potinklyje, praeiti.';

$GLOBALS["lang"]['If the user account does not actually exist within Open-AudIT and <code>use_authorisation</code> is set, the user will be created. If it does exist, details such as email, full name, etc will be populated.'] = 'Jei vartotojo paskyros iš tikrųjų nėra Open- AudIT ir <code>use_authorisation</code> yra nustatytas, vartotojas bus sukurtas. Jei ji egzistuoja, duomenys, pavyzdžiui, el. paštas, visas pavadinimas, ir tt bus sudėti.';

$GLOBALS["lang"]['If the user either does not have valid credentials or is not in at least one Open-AudIT Role and Group (when using <code>use_authorisation</code>), Open-AudIT will fallback to using local Open-AudIT user details and attempt authentication and authorization there. Failing that, the user will be denied access.'] = 'Jei vartotojas arba neturi galiojančių požymių arba nėra bent viename Open- AudIT vaidmuo ir grupė (kai <code>use_authorisation</code>), Open- AudIT bus grįžti prie naudojant vietos Open- AudIT vartotojo duomenis ir bandyti autentifikavimo ir leidimo ten. To nepadarius, naudotojui nebus suteikta prieiga.';

$GLOBALS["lang"]['If the user logging on to Open-AudIT does not have the access to search LDAP, you can use another account which does have this access.'] = 'Jei vartotojas prisijungia prie Open- AudIT neturi prieigos prie paieškos LDAP, galite naudoti kitą paskyrą, kuri turi šią prieigą.';

$GLOBALS["lang"]['If the user logging on to Open-AudIT does not have the access to search OpenLDAP, you can use another account which does have this access. Use the dn_account and dn_password to configure this.'] = 'Jei vartotojas prisijungia prie Open- AudIT neturi prieigos prie paieškos OpenLDAP, galite naudoti kitą paskyrą, kuri turi šią prieigą. Norėdami tai nustatyti, naudokite dn _ account ir dn _ slaptažodį.';

$GLOBALS["lang"]['If the value is not set, the current timestamp will be used.'] = 'Jei vertė nenustatyta, bus naudojama dabartinė laiko žyma.';

$GLOBALS["lang"]['If the value is set, that timestamp value will be used.'] = 'Jei vertė yra nustatyta, kad laiko žyma vertė bus naudojama.';

$GLOBALS["lang"]['If this change does not work for you, all is not lost. We have added a configuration item (set to n by default, so it will use not this new option out of the box) called discovery_use_org_id_match. If you change it to y then the OrgID assigned to the device by the discovery will be used in the relevant match rules.'] = 'Jei šis pakeitimas neveiks jums, viskas nebus prarasta. Mes pridėjome konfigūracijos elementą (nustatyta n pagal nutylėjimą, todėl jis bus naudoti ne šį naują variantą iš dėžės) vadinamas atradimas _ use _ org _ id _ mach. Jei pakeisite jį į y tada OrgID priskirtas prietaiso atradimas bus naudojamas pagal atitinkamas rungtynių taisykles.';

$GLOBALS["lang"]['If this many minutes (or more) have passed since the server last saw the device, pass.</li>'] = 'Jei tai daug minučių (ar daugiau) praėjo nuo serverio paskutinį kartą matė įrenginį, perduoti.';

$GLOBALS["lang"]['If this many or more minutes have passed since the device contacted the server, perform the actions.'] = 'Jei praėjo daug ar daugiau minučių nuo to laiko, kai įrenginys susisiekė su serveriu, atlikite veiksmus.';

$GLOBALS["lang"]['If this occurs then the issue you are seeing is related to the table control being used on the webpage. It only stores in memory the state of the check boxes for the current page being viewed. If you make selections, then page forward/back those selections will be lost. You can, however, accomplish what you want by expanding the number of devices shown on each page. In the top-left corner is a drop-down labeled “records per page”; use this to expand the number of entries displayed until you see all you want to select for Bulk Edit.'] = 'Jei tai įvyksta tada klausimas, kurį matote yra susijęs su stalo kontrolės naudojamas svetainėje. Jis saugo tik atmintyje žymeklio būklę dabartiniame puslapyje yra žiūrima. Jei atliksite pasirinkimus, tada puslapis į priekį / atgal tie pasirinkimai bus prarasti. Tačiau galite pasiekti tai, ko norite, išplėsdami kiekviename puslapyje rodomų įrenginių skaičių. Viršutiniame kairiajame kampe yra žemyn pažymėtas "įrašai puslapyje"; naudoti tai išplėsti rodomų įrašų skaičių, kol pamatysite viską, ką norite pasirinkti urmu Redaguoti.';

$GLOBALS["lang"]['If we detect the san management software, should we run an auto-discover before the query.'] = 'Jei mes aptikti san valdymo programinė įranga, turėtų paleisti auto- atrasti prieš užklausą.';

$GLOBALS["lang"]['If you add a Location Type, add those icons to'] = 'Jei pridedate vietovės tipą, pridėti šias piktogramas į';

$GLOBALS["lang"]['If you add a device type, to display the associated icon you will have to manually copy the .svg formatted file to the directory'] = 'Jei pridedate įrenginio tipą, norėdami rodyti susijusią piktogramą turėsite rankiniu būdu nukopijuoti .svg suformatuotą failą į katalogą';

$GLOBALS["lang"]['If you are a supported FirstWave customer,a couple of items will make helping your easier. Open a support ticket with FirstWave and attach the logfile. Also include the output from the Support button on the upper right of the'] = 'Jei esate palaikoma FirstWave klientas, pora daiktų padės jums lengviau. Atidarykite palaikomąjį bilietą su FirstWave ir prijunkite registracijos failą. Taip pat įtraukti išvestį iš Palaikymo mygtuką viršutinėje dešinėje';

$GLOBALS["lang"]['If you are a supported customer and open a support ticket with FirstWave, please attach these files.'] = 'Jei esate palaikomas klientas ir atidarykite palaikomąjį bilietą su FirstWave, prašome pridėti šiuos failus.';

$GLOBALS["lang"]['If you are having issues with Google Maps API keys or your company does not have access to create Google Maps API keys, please contact the FirstWave support team.'] = 'Jei turite problemų su "Google Maps" API raktais arba jūsų įmonė neturi prieigos kurti "Google Maps API raktus, susisiekite su FirstWave palaikymo komanda.';

$GLOBALS["lang"]['If you are on Windows or your NMIS server is remote, you will need to supply the URL, username and password to access that server.'] = 'Jei esate Windows ar jūsų NMIS serveris yra nutolęs, jums reikės pateikti URL, vartotojo vardą ir slaptažodį, kad pasiekti tą serverį.';

$GLOBALS["lang"]['If you are on a decent broadband or ethernet connection, I would recommend always using -T4 (Aggressive). Some people love -T5 (Insane) though it is too aggressive for my taste. People sometimes specify -T2 (Polite) because they think it is less likely to crash hosts or because they consider themselves to be polite in general. They often do not realize just how slow -T2 really is. Their scan may take ten times longer than a default scan. Machine crashes and bandwidth problems are rare with the default timing options -T3 (Normal) and so I normally recommend that for cautious scanners. Omitting version detection is far more effective than playing with timing values at reducing these problems.'] = 'Jei esate padoraus plačiajuosčio ryšio ar ethernet ryšio, Aš rekomenduočiau visada naudoti -T4 (Agresyvus). Kai kurie žmonės mėgsta -T5 (Insane) nors tai per agresyvus mano skonį. Žmonės kartais nurodyti -T2 (mandagus), nes jie mano, kad tai yra mažiau tikėtina, kad avarijos šeimininkai arba todėl, kad jie mano, kad patys mandagus apskritai. Jie dažnai nesupranta, kaip lėtai -T2 tikrai yra. Jų skenavimas gali trukti dešimt kartų ilgiau nei numatytasis. Mašinų gedimai ir pralaidumo problemos yra retos su numatytuoju sinchronizavimo parinkčių -T3 (Normalus) ir todėl aš paprastai rekomenduoju, kad atsargūs skaitytuvai. Nepaisyti versijos nustatymo yra daug veiksmingesnis nei žaisti su laiko vertes sumažinti šias problemas.';

$GLOBALS["lang"]['If you are running a RedHat or Centos system and you have upgraded Nmap, please reset the SUID on the binary by'] = 'Jei naudojate RedHat arba Centos sistemą ir modernizavote Nmap, prašome iš naujo nustatyti SUID dvejetainį pagal';

$GLOBALS["lang"]['If you are running an Open-AudIT server on Linux, this does not affect you.'] = 'Jei naudojate Open- AudIT serverį Linux \'e, tai jūsų nepaveikia.';

$GLOBALS["lang"]['If you are using Open-AudIT on Windows or if your NMIS server is not on your Open-AudIT Server (in the case of some Linux installs), you will need to supply access credentials and a URL to the remote NMIS - but that is all! Yes - Integrations between NMIS and Open-AudIT even work with Windows based Open-AudIT now!'] = 'Jei naudojate Open- AudIT Windows arba jei jūsų NMIS serveris yra ne jūsų Open- AudIT serveris (kai Linux įdiegti), jums reikės pateikti prieigos duomenis ir URL į nutolusį NMIS - bet tai viskas! Taip - Integravimas tarp NMIS ir Open- AudIT net dirbti su Windows pagrindu Open- AudIT dabar!';

$GLOBALS["lang"]['If you choose a Collector, it will be scheduled to execute on the next 5 minute boundary.'] = 'Jei pasirinksite kolektorių, bus numatyta atlikti kitą 5 minučių ribą.';

$GLOBALS["lang"]['If you do normally set devices_assigned_to_org and the configuration item is enabled, then the OrgID will be used to further refine the match.'] = 'Jei Jūs paprastai nustatysite įrenginius _ assign _ to _ org ir konfigūracijos elementas yra įjungtas, tada OrgID bus naudojamas toliau tobulinti rungtynes.';

$GLOBALS["lang"]['If you do not normally set devices_assigned_to_org, then it will have no effect. We only check using the OrgID if it has been set in discovery (or manually in an audit script) and enabled in the configuration.'] = 'Jei jūs neturite paprastai nustatyti prietaisų _ asset _ to _ org, tai neturi poveikio. Mes tik patikrinti naudojant OrgID, jei jis buvo nustatytas atradimas (arba rankiniu būdu audito scenarijų) ir įjungtas konfigūracijos.';

$GLOBALS["lang"]['If you enable the configuration item, use discovery to assign an Org and then subsequently change the OrgID of a device after discovery then you will likely have a new device created the next time the discovery runs. In this instance, you should probably just unset devices_assigned_to_org before running subsequent discoveries. This is because (in this instance) you have told Open-AudIT <i>these devices from this discovery belong to Org X<i>, but then changed the Org of the device. You have changed the stored devices information. In this case - there is no no longer a device belonging to Org X, so we create a new one.'] = 'Jei įjungti konfigūracijos elementą, naudokite atradimą priskirti Org ir tada po atradimo pakeisti įrenginio OrgID tada greičiausiai turėsite naują įrenginį, sukurtą kitą kartą atradimas veikia. Šiuo atveju, jūs tikriausiai turėtų tiesiog išjungti įrenginius _ asset _ to _ org prieš paleisti vėlesnius atradimus. Taip yra todėl, kad (šiuo atveju) jūs pasakėte Open- AudIT <i>šie įrenginiai iš šio atradimo priklauso Org X<i>, bet tada pakeitė prietaiso Org. Jūs pakeitėte saugomų įrenginių informaciją. Šiuo atveju - nebėra įrenginio, priklausančio Org X, todėl mes kuriame naują įrenginį.</i></i>';

$GLOBALS["lang"]['If you have Anti-Virus software running, allowing the services of Opmantek (omkd), Apache (apache2.2) and MySQL (mysql) to auto start and run is essential. These services are used by Open-AudIT. You should only need to do this once. If your Anti-Virus program keeps prompting you about Open-AudIT, please post to the forums or send an email to support with the name and version of your Anti-Virus software.'] = 'Jei turite veikiančią antivirusinę programinę įrangą, leidžiančią automatiškai pradėti ir paleisti Opmantek (omkd), Apache (apache2.2) ir MySQL (mysql) paslaugas. Šias paslaugas naudoja Open- AudIT. Turėtum tai padaryti tik vieną kartą. Jei jūsų antivirusinė programa ir toliau skatina jus apie Open- AudIT, prašome rašyti į forumus arba siųsti elektroninį laišką su savo antivirusinės programinės įrangos pavadinimas ir versija.';

$GLOBALS["lang"]['If you have working credentials, you can expect the full amount of information possible.<br><br>Obviously, the best way to use Open-AudIT is to have working credentials for the devices being discovered (be they WMI, SSH, or SNMP credentials).<br><br>We also have a page on auditing without credentials.'] = 'Jei turite darbinių įgaliojimų, galite tikėtis visos įmanomos informacijos.<br/><br/>Akivaizdu, kad geriausias būdas naudoti Open- AudIT yra turėti darbo kredencialus įrenginių yra atrasta (ar jie WMI, SSH, ar SNMP įgaliojimus).<br/><br/>Taip pat turime puslapį apie auditą be įgaliojimų.';

$GLOBALS["lang"]['If you include the \"id\" field <strong>and</strong> set it with a number, that item will be updated rather than created.'] = 'Jei įtraukėte "id\" lauką <strong>ir</strong> nustatyti jį su numeriu, kad elementas bus atnaujintas, o ne sukurtas.';

$GLOBALS["lang"]['If you need to configure Active Directory access, you can usually use the example of <code>cn=Users,dc=your,dc=domain,dc=com</code> for your <code>base_dn</code>. There is no need to set <code>user_dn</code>.'] = 'Jei jums reikia konfigūruoti Active Directory prieigą, paprastai galite naudoti pavyzdį <code>cn=Users,dc=your,dc=domain,dc=com</code> Jums <code>base_dn</code>. Nėra reikalo nustatyti <code>user_dn</code>.';

$GLOBALS["lang"]['If you need to configure OpenLDAP access for your users and a given users access DN is normally <code>uid=username@domain,cn=People,dc=your,dc=domain,dc=com</code> then you should set <code>base_dn</code> to <code>dc=your,dc=domain,dc=com</code> and <code>user_dn</code> to <code>uid=@username@@domain,cn=People</code>. The special words <code>@username</code> and <code>@domain</code> will be replaced by the login details provided by your user on the login page.'] = 'Jei jums reikia konfigūruoti OpenLDAP prieigą savo vartotojams ir tam tikri vartotojai prieigą DN paprastai <code>uid=username@domain,cn=People,dc=your,dc=domain,dc=com</code> tada jums reikia nustatyti <code>base_dn</code> iki <code>dc=your,dc=domain,dc=com</code> ir <code>user_dn</code> iki <code>uid=@username@@domain,cn=People</code>. Specialūs žodžiai <code>@username</code> ir <code>@domain</code> bus pakeistas prisijungimo duomenis, kuriuos jūsų vartotojas pateikė prisijungimo puslapyje.';

$GLOBALS["lang"]['If you run discovery upon a subnet that the Server (or Collector) is directly installed on, you can expect the following for responding devices'] = 'Jei paleisti atradimas potinklyje, kad Serveris (arba Kolektorius) yra tiesiogiai įdiegta, galite tikėtis, kad šie atsako įrenginių';

$GLOBALS["lang"]['If you run discovery upon a subnet that your Server (or Collector) is not directly installed on, you can expect the following for responding devices'] = 'Jei paleisti atradimas potinklyje, kad jūsų serveris (ar Kolektorius) nėra tiesiogiai įdiegta, galite tikėtis, kad šie atsako įrenginių';

$GLOBALS["lang"]['If you select a List type, an additional field will appear called Values. You should put a comma separated list of selectable values here. These will display in a dropdown box whenever the field is edited.'] = 'Jei pasirinksite sąrašo tipą, atsiras papildomas laukas "Vertės". Jūs turėtumėte įdėti kablelį atskirtų pasirinktų reikšmių sąrašą čia. Jie bus rodomas išskleidžiamajame langelyje, kai laukas redaguojamas.';

$GLOBALS["lang"]['If you set the values for'] = 'Jei nustatėte reikšmes';

$GLOBALS["lang"]['If you want to force your Agents to use a particular configuration, you can supply the ID of the agents entry to use, as below (replace $id with the number of the Agents entry). When this Agent is installed, it will check-in with the sevrer and <strong>only</strong> check that one individual Agent entrys attributes (tests and actions). This may be useful if you are an MSP - create an Agents entry for a particular customer and have their devices all use this entry, which assigns them to an Org and Location.'] = 'Jei norite priversti savo agentai naudoti tam tikrą konfigūraciją, galite pateikti agentų įrašo ID naudoti, kaip žemiau (pakeisti $id su agentų įrašo numerį). Kai šis agentas bus įdiegta, ji bus registruojanti- su seprerio ir <strong>Tik</strong> patikrinti, ar vienas asmuo Agento entrys atributai (bandymai ir veiksmai). Tai gali būti naudinga, jei esate JSP - sukurti agentų įrašą konkrečiam klientui ir jų prietaisai visi naudoti šį įrašą, kuris priskiria juos org ir vieta.';

$GLOBALS["lang"]['If you wish to dig in and customize the Integration, click the Advanced button (and try not to be overwhelmed!).'] = 'Jei norite kasti ir pritaikyti Integracija, spustelėkite Išplėstinė mygtuką (ir bandykite ne būti užburtas!).';

$GLOBALS["lang"]['If you wish to run a Discovery on an externally provided device, select the option and when the Integration is created, so s the Discovery.'] = 'Jei norite paleisti paieškos iš išorės pateiktą įrenginį, pasirinkite parinktį ir kai Integracija yra sukurta, todėl s Discovery.';

$GLOBALS["lang"]['If you would like to use the script outside of Discovery we have created another endpoint called <i>scripts</i>. See the documentation'] = 'Jei norite naudoti scenarijų už Discovery mes sukūrėme kitą tikslą, vadinamą <i>scenarijus</i>. Žr. dokumentus';

$GLOBALS["lang"]['If your user does not have <i>Run as Administrator</i> rights, they can still download the agent (first command above) and run it to submit an audit as below. It will be a one-off audit without the Agent being installed or scheduled.'] = 'Jeigu Jūsų vartotojas neturi <i>Vykdyti kaip administratorių</i> teises, jie vis dar gali atsisiųsti agentas (pirmoji komanda aukščiau) ir paleisti jį pateikti auditą kaip toliau. Tai bus vienas-off auditas be agentas yra įdiegta ar suplanuota.';

$GLOBALS["lang"]['ifadminstatus'] = 'Ifadminstatus';

$GLOBALS["lang"]['Ifadminstatus'] = 'Ifadminstatus';

$GLOBALS["lang"]['iflastchange'] = 'Iflastchange';

$GLOBALS["lang"]['Iflastchange'] = 'Iflastchange';

$GLOBALS["lang"]['Ignore Invalid SSL'] = 'Ignoruoti klaidingą SSL';

$GLOBALS["lang"]['Ignored'] = 'Ignoruotas';

$GLOBALS["lang"]['image'] = 'Paveikslėlis';

$GLOBALS["lang"]['Image'] = 'Paveikslėlis';

$GLOBALS["lang"]['Images'] = 'Paveikslėliai';

$GLOBALS["lang"]['impact_availability'] = 'Smūgio galimybė';

$GLOBALS["lang"]['Impact Availability'] = 'Smūgio galimybė';

$GLOBALS["lang"]['impact_confidentiality'] = 'Poveikio konfidencialumas';

$GLOBALS["lang"]['Impact Confidentiality'] = 'Poveikio konfidencialumas';

$GLOBALS["lang"]['impact_integrity'] = 'Smūgio vientisumas';

$GLOBALS["lang"]['Impact Integrity'] = 'Smūgio vientisumas';

$GLOBALS["lang"]['Implement selected controls and procedures'] = 'Įgyvendinti pasirinktas kontrolės priemones ir procedūras';

$GLOBALS["lang"]['Implementation'] = 'Įgyvendinimas';

$GLOBALS["lang"]['implementation_notes'] = 'Įgyvendinimo pastabos';

$GLOBALS["lang"]['Implementation Notes'] = 'Įgyvendinimo pastabos';

$GLOBALS["lang"]['Import'] = 'Importuoti';

$GLOBALS["lang"]['Import Example Data'] = 'Importuoti pavyzdinius duomenis';

$GLOBALS["lang"]['Import multiple {collection} using a CSV.'] = 'Importuoti kelis {kolekciją} naudojant CSV.';

$GLOBALS["lang"]['improvement_opportunities'] = 'Gerinimo galimybės';

$GLOBALS["lang"]['Improvement Opportunities'] = 'Gerinimo galimybės';

$GLOBALS["lang"]['Improves business continuity and resilience'] = 'Didina veiklos tęstinumą ir atsparumą';

$GLOBALS["lang"]['In'] = 'Į';

$GLOBALS["lang"]['In a second tab or window go to your OKTA console and click <i>Create App Integration</i>.'] = 'Antroje kortelėje arba lange eikite į savo OKTA konsolę ir spustelėkite <i>Sukurti programėlių integravimą</i>.';

$GLOBALS["lang"]['In a second tab or window sign-on to your'] = 'Antroje kortelėje arba lange -';

$GLOBALS["lang"]['In my personal opinion, the best way to find and audit every single item on your network is a Seed Discovery for each subnet, restricted to that subnet (using credentials). Seed Discoveries use switch, router and computer MAC Address tables to not miss a single device. If it is connected to the network and uses TCP/IP, a switch/router/computer has to know it is there - thats just how TCP/IP works. Combine that with custom TCP and/or UDP ports and you should then be able to determine the device type as well. But thats just my personal preference'] = 'Mano asmenine nuomone, geriausias būdas rasti ir audituoti kiekvieną jūsų tinkle esantį elementą yra kiekvieno potinklio sėklų paieška, apsiribojant tuo potinkliu (naudojant duomenis). Seed Discoversies naudoja komutatorių, maršrutizatorių ir kompiuterį MAC adresų lenteles, kad nebūtų praleistas vienas įrenginys. Jei jis yra prijungtas prie tinklo ir naudoja TCP / IP, komutatorius / maršrutizatorius / kompiuteris turi žinoti, kad jis yra ten - tai kaip TCP / IP veikia. Sujungti, kad su pasirinktiniu TCP ir / arba UDP prievadus ir tada turėtų būti galima nustatyti įrenginio tipą, taip pat. Bet tai tik mano asmeninis prioritetas';

$GLOBALS["lang"]['In order for Open-AudIT to be able to apply user permissions on items, we mandate the user of <code>WHERE @filter</code>. If you do not use this format, the queryCreateForm will throw a warning. Only users with the Admin role are permitted to create queries that lack this attribute and even then, only after the configuration item for <i>advanced_queries</i> has been enabled.'] = 'Kad Open- AudIT galėtų taikyti vartotojo leidimus daiktų, mes įgaliojame vartotojo <code>WHERE @filter</code>. Jei nenaudojate šio formato, QueryCreateForm bus mesti įspėjimą. Tik vartotojai su admin vaidmenį leidžiama sukurti užklausas, kad trūksta šio požymio ir net tada, tik po konfigūracijos elementą <i>pažengusios _ užklausos</i> įjungta.';

$GLOBALS["lang"]['In order to enable Google Maps you will need to a Google API Key follow this link and log in with your Google account,'] = 'Norėdami įjungti "Google Maps" jums reikės "Google API Raktas sekti šią nuorodą ir prisijungti prie savo" Google "paskyra,';

$GLOBALS["lang"]['In order to use the Azure Rest API, you will need to create an Azure Active Directory Application that is used for authentication.'] = 'Norint naudoti Azure poilsio API, jums reikės sukurti Azure Active Directory programa, kuri yra naudojama autentifikavimo.';

$GLOBALS["lang"]['In order to use this functionality, it must be enabled in the configuration - click'] = 'Siekiant naudoti šią funkciją, ji turi būti įjungta konfigūracijos - spustelėkite';

$GLOBALS["lang"]['In the (comma seperated) list'] = '(kablelio seperuotas) sąraše';

$GLOBALS["lang"]['In the case of <code>in</code> and <code>notin</code>, you should enclose the values in round brackets and separate them using a comma (just a comma, not a comma, then space).<br><br>With these operators you can filter quite comprehensively.<br><br>When you add data and filter on multiple columns, those columns are combined using <strong>AND</strong>. You cannot filter using an <strong>OR</strong> condition. With the inclusion of <code>notin</code>, you should be able to get most searches working. And for those that do really require unsupported and complex selections, you can always write an actual query.'] = 'Jeigu: <code>in</code> ir <code>notin</code>, Jūs turėtumėte pridėti vertybes apvalių skliausteliuose ir atskirti juos naudojant kablelį (tik kablelis, o ne kablelis, tada erdvė).<br/><br/>Su šiais operatoriais galite filtruoti gana išsamiai.<br/><br/>Kai pridedate duomenis ir filtruojate keliose skiltyse, tos skiltys yra sujungtos naudojant <strong>IR</strong>. Negalima filtruoti naudojant <strong>ARBA</strong> būklė. Įtraukti <code>notin</code>, jums turėtų būti suteikta galimybė gauti daugiausia paieškos veikia. Ir tiems, kurie tikrai reikia nepalaikomos ir sudėtingos atrankos, visada galite parašyti tikrą užklausą.';

$GLOBALS["lang"]['In the case where we store several fields (usually in JSON format) inside a BIGTEXT MySQL field (eg: credentials.credentials - the credentials column in the credentials table), you should use the format'] = 'Tuo atveju, kai mes saugoti keletą laukų (paprastai JSON formatu) į BIGTEXT MySQL srityje (pvz.: įgaliojimai. įgaliojimai - įgaliojimai stulpelis į įgaliojimų lentelę), turėtumėte naudoti formatą';

$GLOBALS["lang"]['In the command prompt shell, navigate to the download directory (likely <code>cd Downloads</code>).'] = 'Komandinio skambučio apvalkale naršyti į atsisiuntimo katalogą (tikėtina <code>cd Downloads</code>).';

$GLOBALS["lang"]['Inactive'] = 'Neaktyvus';

$GLOBALS["lang"]['Incomplete'] = 'Nebaigta';

$GLOBALS["lang"]['Index'] = 'Indeksas';

$GLOBALS["lang"]['India'] = 'Indija';

$GLOBALS["lang"]['Indonesia'] = 'Indonezija';

$GLOBALS["lang"]['Indonesian'] = 'Indoneziečių';

$GLOBALS["lang"]['Info'] = 'Informacija';

$GLOBALS["lang"]['Information only.'] = 'Tik informacija.';

$GLOBALS["lang"]['Informational'] = 'Informacinė informacija';

$GLOBALS["lang"]['initial_size'] = 'Pradinis dydis';

$GLOBALS["lang"]['Initial Size'] = 'Pradinis dydis';

$GLOBALS["lang"]['Initial login credentials are'] = 'Pradiniai prisijungimo duomenys yra:';

$GLOBALS["lang"]['Initiation'] = 'Inicijavimas';

$GLOBALS["lang"]['inode'] = 'Imazgas';

$GLOBALS["lang"]['Inode'] = 'Imazgas';

$GLOBALS["lang"]['Input'] = 'Įvestis';

$GLOBALS["lang"]['Input Type'] = 'Įvesties tipas';

$GLOBALS["lang"]['inputs'] = 'Įvediniai';

$GLOBALS["lang"]['Inputs'] = 'Įvediniai';

$GLOBALS["lang"]['Insane'] = 'Insanas';

$GLOBALS["lang"]['Insert a new {collection} entry.'] = 'Įterpti naują {kolekcijos} įrašą.';

$GLOBALS["lang"]['Insert example data and discover all that Open-AudIT can tell you.'] = 'Įterpti pavyzdinius duomenis ir atrasti viską, kad Open- AudIT gali jums pasakyti.';

$GLOBALS["lang"]['Insert your Purchased license Key'] = 'Įterpti Įsigyta licencija Raktas';

$GLOBALS["lang"]['install'] = 'Įdiegti';

$GLOBALS["lang"]['Install'] = 'Įdiegti';

$GLOBALS["lang"]['install_date'] = 'Įdiegti datą';

$GLOBALS["lang"]['Install Date'] = 'Įdiegti datą';

$GLOBALS["lang"]['install_directory'] = 'Įdiegti aplanką';

$GLOBALS["lang"]['Install Directory'] = 'Įdiegti aplanką';

$GLOBALS["lang"]['Install OpenScap if required'] = 'Įdiegti OpenScap, jei reikia';

$GLOBALS["lang"]['install_source'] = 'Įdiegti šaltinį';

$GLOBALS["lang"]['Install Source'] = 'Įdiegti šaltinį';

$GLOBALS["lang"]['Install Support'] = 'Įdiegti palaikymą';

$GLOBALS["lang"]['installed_by'] = 'Įdiegta';

$GLOBALS["lang"]['Installed By'] = 'Įdiegta';

$GLOBALS["lang"]['installed_on'] = 'Įdiegta';

$GLOBALS["lang"]['Installed On'] = 'Įdiegta';

$GLOBALS["lang"]['Installing'] = 'Įdiegiama';

$GLOBALS["lang"]['Installing on Linux'] = 'Įdiegiama Linux';

$GLOBALS["lang"]['Installing on MacOS'] = 'Diegiama MacOS';

$GLOBALS["lang"]['Installing on Windows'] = 'Įdiegiama languose';

$GLOBALS["lang"]['instance'] = 'Pirmosios instancijos teismas';

$GLOBALS["lang"]['Instance'] = 'Pirmosios instancijos teismas';

$GLOBALS["lang"]['instance_ident'] = 'Pirmosios instancijos teismas';

$GLOBALS["lang"]['Instance Ident'] = 'Pirmosios instancijos teismas';

$GLOBALS["lang"]['instance_options'] = 'Parinktys';

$GLOBALS["lang"]['Instance Options'] = 'Parinktys';

$GLOBALS["lang"]['instance_provider'] = 'Pirmosios instancijos tiekėjas';

$GLOBALS["lang"]['Instance Provider'] = 'Pirmosios instancijos tiekėjas';

$GLOBALS["lang"]['instance_reservation_ident'] = 'Teismo nutartis Identas';

$GLOBALS["lang"]['Instance Reservation Ident'] = 'Teismo nutartis Identas';

$GLOBALS["lang"]['instance_state'] = 'Teismo valstybė';

$GLOBALS["lang"]['Instance State'] = 'Teismo valstybė';

$GLOBALS["lang"]['instance_tags'] = 'Comment';

$GLOBALS["lang"]['Instance Tags'] = 'Comment';

$GLOBALS["lang"]['instance_type'] = 'Kortelės tipas';

$GLOBALS["lang"]['Instance Type'] = 'Kortelės tipas';

$GLOBALS["lang"]['Integer'] = 'sveikasis skaičius';

$GLOBALS["lang"]['Integration'] = 'Integracija';

$GLOBALS["lang"]['integrations'] = 'Integravimas';

$GLOBALS["lang"]['Integrations'] = 'Integravimas';

$GLOBALS["lang"]['integrations_id'] = 'Integravimo ID';

$GLOBALS["lang"]['Integrations ID'] = 'Integravimo ID';

$GLOBALS["lang"]['integrations_log'] = 'Integravimo žurnalas';

$GLOBALS["lang"]['Integrations Log'] = 'Integravimo žurnalas';

$GLOBALS["lang"]['Integrations can be scheduled as desired. This is left to the user.'] = 'Integravimas gali būti suplanuotas pagal pageidavimą. Tai paliekama naudotojui.';

$GLOBALS["lang"]['Integrations can be scheduled as per Discoveries, Queries, et al.'] = 'Integravimas gali būti suplanuotas kaip per Discoversies, Užklausos, et al.';

$GLOBALS["lang"]['Interactive Dashboards'] = 'Interaktyvūs prietaisų skydai';

$GLOBALS["lang"]['Interactive dashboards provide instant visibility into the status of network inventory allowing IT teams to spot newly discovered devices and unusual device behaviour at a glance.'] = 'Interaktyvūs prietaisų skydai suteikia galimybę greitai matyti tinklo inventoriaus būklę, todėl IT komandos iš pirmo žvilgsnio gali pastebėti naujai atrastus įrenginius ir neįprastus įrenginio veiksmus.';

$GLOBALS["lang"]['interface'] = 'Sąsaja';

$GLOBALS["lang"]['Interface'] = 'Sąsaja';

$GLOBALS["lang"]['interface_id'] = 'Sąsajos ID';

$GLOBALS["lang"]['Interface ID'] = 'Sąsajos ID';

$GLOBALS["lang"]['interface_type'] = 'Sąsajos tipas';

$GLOBALS["lang"]['Interface Type'] = 'Sąsajos tipas';

$GLOBALS["lang"]['Internal'] = 'Vidaus';

$GLOBALS["lang"]['Internal Audit'] = 'Vidaus auditas';

$GLOBALS["lang"]['Internal Audit & Review'] = 'Vidaus auditas ir peržiūra';

$GLOBALS["lang"]['Internal Field Name'] = 'Vidaus lauko pavadinimas';

$GLOBALS["lang"]['Internal ID'] = 'Vidaus ID';

$GLOBALS["lang"]['Internal JSON array of valid access tokens for this user.'] = 'Vidinis JSON masyvas galiojančių prieigos žetonų šiam vartotojui.';

$GLOBALS["lang"]['Introduction'] = 'Įvadas';

$GLOBALS["lang"]['invoice'] = 'Sąskaita faktūra';

$GLOBALS["lang"]['Invoice'] = 'Sąskaita faktūra';

$GLOBALS["lang"]['invoice_id'] = 'Sąskaitos faktūros ID';

$GLOBALS["lang"]['Invoice ID'] = 'Sąskaitos faktūros ID';

$GLOBALS["lang"]['invoice_item'] = 'Sąskaitos faktūros punktas';

$GLOBALS["lang"]['Invoice Item'] = 'Sąskaitos faktūros punktas';

$GLOBALS["lang"]['ios_version'] = 'Ios versija';

$GLOBALS["lang"]['Ios Version'] = 'Ios versija';

$GLOBALS["lang"]['ip_address_external_a'] = 'Ip Adresas Išorės A';

$GLOBALS["lang"]['Ip Address External A'] = 'Ip Adresas Išorės A';

$GLOBALS["lang"]['ip_address_external_b'] = 'Ip Adresas Išorės B';

$GLOBALS["lang"]['Ip Address External B'] = 'Ip Adresas Išorės B';

$GLOBALS["lang"]['ip_address_internal_a'] = 'Ip Adresas Vidaus A';

$GLOBALS["lang"]['Ip Address Internal A'] = 'Ip Adresas Vidaus A';

$GLOBALS["lang"]['ip_address_internal_b'] = 'Ip Adresas Vidaus B';

$GLOBALS["lang"]['Ip Address Internal B'] = 'Ip Adresas Vidaus B';

$GLOBALS["lang"]['ip_all_count'] = 'Ip visi skaičiai';

$GLOBALS["lang"]['Ip All Count'] = 'Ip visi skaičiai';

$GLOBALS["lang"]['ip_audited_count'] = 'Ip audituotas skaičius';

$GLOBALS["lang"]['Ip Audited Count'] = 'Ip audituotas skaičius';

$GLOBALS["lang"]['ip_discovered_count'] = 'Ip nuskaitytas skaičius';

$GLOBALS["lang"]['Ip Discovered Count'] = 'Ip nuskaitytas skaičius';

$GLOBALS["lang"]['ip_enabled'] = 'Ip įjungta';

$GLOBALS["lang"]['Ip Enabled'] = 'Ip įjungta';

$GLOBALS["lang"]['ip_responding_count'] = 'Ip atsako skaičius';

$GLOBALS["lang"]['Ip Responding Count'] = 'Ip atsako skaičius';

$GLOBALS["lang"]['ip_scanned_count'] = 'Ip skenuotas skaičius';

$GLOBALS["lang"]['Ip Scanned Count'] = 'Ip skenuotas skaičius';

$GLOBALS["lang"]['Iran'] = 'Iranas';

$GLOBALS["lang"]['Iraq'] = 'Irakas';

$GLOBALS["lang"]['Ireland'] = 'Airija';

$GLOBALS["lang"]['Irish'] = 'Airių';

$GLOBALS["lang"]['Is FRU'] = 'FPB';

$GLOBALS["lang"]['is_fru'] = 'Ar Fru';

$GLOBALS["lang"]['Is Fru'] = 'Ar Fru';

$GLOBALS["lang"]['Is the NMIS server local (on this Open-AudIT server) or remote?'] = 'Ar NMIS serveris vietinis (šiame Open- AudIT serveryje) ar nutolęs?';

$GLOBALS["lang"]['Is this account active? If set to <code>n</code>, the user cannot logon.'] = 'Ar ši sąskaita aktyvi? Jei nustatyta <code>n</code>, vartotojas negali prisijungti.';

$GLOBALS["lang"]['Is this query restricted to licensed customers.'] = 'Ar ši užklausa skirta tik licencijuotiems klientams.';

$GLOBALS["lang"]['Is this task enabled (y/n).'] = 'Ar ši užduotis įjungta (y / n).';

$GLOBALS["lang"]['Isle of Man'] = 'Meno sala';

$GLOBALS["lang"]['Israel'] = 'Izraelis';

$GLOBALS["lang"]['Issue'] = 'Klausimas';

$GLOBALS["lang"]['issuer'] = 'Emitentas';

$GLOBALS["lang"]['Issuer'] = 'Emitentas';

$GLOBALS["lang"]['issuer_name'] = 'Emitento pavadinimas';

$GLOBALS["lang"]['Issuer Name'] = 'Emitento pavadinimas';

$GLOBALS["lang"]['Issues'] = 'Klausimai';

$GLOBALS["lang"]['It <i>Just Works</i> with NMIS'] = 'Vartoti per burną. <i>Tik veikia</i> su NMIS';

$GLOBALS["lang"]['It is available at Menu -> Help ->'] = 'Ji yra prieinama Meniu - > Pagalba - >';

$GLOBALS["lang"]['It is important to note that when Open-AudIT determines a match any properties set to <i>y</i> must match exactly (and not be blank) in order for Open-AudIT to determine that the discovered device matches a device already in the database. If none of the properties marked <i>y</i> match, then a new device entry will be created, which could result in duplicate device entries. In situations where properties are duplicated, for example a dbus_id is copied during a VM clone, then an existing device may incorrectly get overwritten/updated rather then a new entry being created resulting in missing devices.'] = 'Svarbu pažymėti, kad kai Open- AudIT nustato rungtynes bet kokios savybės nustatyti <i>y</i> turi tiksliai atitikti (o ne būti tuščias), kad Open- AudIT nustatyti, kad atrasta įrenginys atitinka įrenginį jau duomenų bazėje. Jei nepažymėta nė viena iš savybių <i>y</i> atitinka, tada bus sukurtas naujas įrenginys įrašas, kuris gali sukelti dubliuoti įrenginio įrašų. Tais atvejais, kai savybės yra dubliuojamos, pavyzdžiui, dbus _ id nukopijuojamas VM klono metu, esamas įrenginys gali neteisingai perrašyti / atnaujinti, o tada sukuriamas naujas įrašas, dėl kurio trūksta įrenginių.';

$GLOBALS["lang"]['It is not uncommon to have an overlapping address space in a given Organisation. Not ideal, but not uncommon.'] = 'Nėra neįprasta, kad konkrečioje organizacijoje iš dalies sutampa adresas. Ne idealus, bet nedažnas.';

$GLOBALS["lang"]['It is very common for second tier motherboard manufacturers to not set this, to set it to all <i>0</i>s or even all <i>F</i>s.'] = 'Antro lygio plokščių gamintojai labai įprasta, kad ne nustatyti, kad tai visiems <i>0</i>s arba net visi <i>F</i>c.';

$GLOBALS["lang"]['Italian'] = 'Italų';

$GLOBALS["lang"]['Italy'] = 'Italija';

$GLOBALS["lang"]['Items not in Baseline'] = 'Straipsniai, neįtraukti į pradinį tyrimą';

$GLOBALS["lang"]['JSON'] = 'JSON';

$GLOBALS["lang"]['JSON to Import'] = 'Importuoti JSON';

$GLOBALS["lang"]['Jamaica'] = 'Jamaika';

$GLOBALS["lang"]['January'] = 'Sausis';

$GLOBALS["lang"]['Japan'] = 'Japonija';

$GLOBALS["lang"]['Japanese'] = 'Japonų';

$GLOBALS["lang"]['Jersey'] = 'Džersis';

$GLOBALS["lang"]['Jordan'] = 'Jordanija';

$GLOBALS["lang"]['July'] = 'Liepa';

$GLOBALS["lang"]['June'] = 'Birželis';

$GLOBALS["lang"]['Kazakhstan'] = 'Kazachstanas';

$GLOBALS["lang"]['Kenya'] = 'Kenija';

$GLOBALS["lang"]['kernel_version'] = 'Branduolio versija';

$GLOBALS["lang"]['Kernel Version'] = 'Branduolio versija';

$GLOBALS["lang"]['Key'] = 'Raktas';

$GLOBALS["lang"]['Key Components'] = 'Pagrindiniai komponentai';

$GLOBALS["lang"]['Key Password (optional)'] = 'Pagrindinis slaptažodis (neprivaloma)';

$GLOBALS["lang"]['keys'] = 'Raktai';

$GLOBALS["lang"]['Keys'] = 'Raktai';

$GLOBALS["lang"]['Kiribati'] = 'Kiribatis';

$GLOBALS["lang"]['Korea'] = 'Korėja';

$GLOBALS["lang"]['Korean'] = 'Korėjiečių';

$GLOBALS["lang"]['Kuwait'] = 'Kuveitas';

$GLOBALS["lang"]['Kyrgyz'] = 'Kirgizija';

$GLOBALS["lang"]['Kyrgyz Republic'] = 'Kirgizijos Respublika';

$GLOBALS["lang"]['LDAP Group'] = 'LDAP grupė';

$GLOBALS["lang"]['LDAP was searched for this user and their account was found.'] = 'LDAP buvo ieškomas šiam naudotojui ir rasta jo paskyra.';

$GLOBALS["lang"]['LDAP was searched for this user and their account was not found. Check the LDAP server logs. The user credentials have worked, but the user was not found. Also check you have specified the correct Base DN attribute when you created the LDAP Server in Open-AudIT.'] = 'LDAP buvo ieškomas šiam naudotojui ir jo paskyra nerasta. Patikrinkite LDAP serverio žurnalus. Naudotojo įgaliojimai pasiteisino, bet vartotojas nebuvo rastas. Taip pat patikrinkite, ar nurodėte teisingą Base DN atributą, kai sukūrėte LDAP serverį Open- AudIT.';

$GLOBALS["lang"]['lang'] = 'Lang';

$GLOBALS["lang"]['Lang'] = 'Lang';

$GLOBALS["lang"]['language'] = 'Kalba';

$GLOBALS["lang"]['Language'] = 'Kalba';

$GLOBALS["lang"]['Lao'] = 'Laosas';

$GLOBALS["lang"]['last_changed'] = 'Paskutinis pakeitimas';

$GLOBALS["lang"]['Last Changed'] = 'Paskutinis pakeitimas';

$GLOBALS["lang"]['last_finished'] = 'Paskutinė pabaiga';

$GLOBALS["lang"]['Last Finished'] = 'Paskutinė pabaiga';

$GLOBALS["lang"]['last_logon'] = 'Paskutinė registracija';

$GLOBALS["lang"]['Last Logon'] = 'Paskutinė registracija';

$GLOBALS["lang"]['Last Name'] = 'Paskutinis pavadinimas';

$GLOBALS["lang"]['last_os_update'] = 'Paskutinieji įsipareigojimų atnaujinimai';

$GLOBALS["lang"]['Last Os Update'] = 'Paskutinieji įsipareigojimų atnaujinimai';

$GLOBALS["lang"]['last_result'] = 'Paskutinis rezultatas';

$GLOBALS["lang"]['Last Result'] = 'Paskutinis rezultatas';

$GLOBALS["lang"]['last_run'] = 'Paskutinis paleidimas';

$GLOBALS["lang"]['Last Run'] = 'Paskutinis paleidimas';

$GLOBALS["lang"]['last_seen'] = 'Paskutinė naktis';

$GLOBALS["lang"]['Last Seen'] = 'Paskutinė naktis';

$GLOBALS["lang"]['last_seen_by'] = 'Paskutinė naktis Pagal';

$GLOBALS["lang"]['Last Seen By'] = 'Paskutinė naktis Pagal';

$GLOBALS["lang"]['last_user'] = 'Paskutinis naudotojas';

$GLOBALS["lang"]['Last User'] = 'Paskutinis naudotojas';

$GLOBALS["lang"]['Last up is WMI. For Windows as in Linux, a user with Administrator level access is preferred (see Target Client Configuration on the wiki).'] = 'Paskutinis yra WMI. Windows, kaip Linux, vartotojas su administratoriaus lygio prieiga yra pageidautina (žr. Target kliento konfigūracija wiki).';

$GLOBALS["lang"]['lastModified'] = 'LastModifikuotas';

$GLOBALS["lang"]['LastModified'] = 'LastModifikuotas';

$GLOBALS["lang"]['latitude'] = 'Platuma';

$GLOBALS["lang"]['Latitude'] = 'Platuma';

$GLOBALS["lang"]['Latvia'] = 'Latvija';

$GLOBALS["lang"]['Latvian'] = 'Latvių';

$GLOBALS["lang"]['Layout'] = 'Išdėstymas';

$GLOBALS["lang"]['ldap'] = 'Ldap';

$GLOBALS["lang"]['Ldap'] = 'Ldap';

$GLOBALS["lang"]['ldap_base_dn'] = 'Ldap bazė Dn';

$GLOBALS["lang"]['Ldap Base Dn'] = 'Ldap bazė Dn';

$GLOBALS["lang"]['ldap_dn_account'] = 'Ldap Dn paskyra';

$GLOBALS["lang"]['Ldap Dn Account'] = 'Ldap Dn paskyra';

$GLOBALS["lang"]['ldap_dn_password'] = 'Ldap Dn slaptažodis';

$GLOBALS["lang"]['Ldap Dn Password'] = 'Ldap Dn slaptažodis';

$GLOBALS["lang"]['Learn About'] = 'Sužinokite apie';

$GLOBALS["lang"]['Learn More'] = 'Sužinokite daugiau';

$GLOBALS["lang"]['lease_expiry_date'] = 'Išlaikymo data';

$GLOBALS["lang"]['Lease Expiry Date'] = 'Išlaikymo data';

$GLOBALS["lang"]['Lebanon'] = 'Libanas';

$GLOBALS["lang"]['legal_requirements'] = 'Teisiniai reikalavimai';

$GLOBALS["lang"]['Legal Requirements'] = 'Teisiniai reikalavimai';

$GLOBALS["lang"]['Lesotho'] = 'Lesotas';

$GLOBALS["lang"]['Less Than'] = 'Mažiau nei';

$GLOBALS["lang"]['Less Than or Equals'] = 'Mažesnis nei arba lygus';

$GLOBALS["lang"]['Lets set the logging to debug. Copy the file:'] = 'Leidžia nustatyti registracijos derinimo. Kopijuoti failą:';

$GLOBALS["lang"]['level'] = 'Lygis';

$GLOBALS["lang"]['Level'] = 'Lygis';

$GLOBALS["lang"]['Level of privileges needed to exploit (None, Low, High).'] = 'Naudojimosi teisėmis lygis (nėra, žemas, aukštas).';

$GLOBALS["lang"]['Liberia'] = 'Liberija';

$GLOBALS["lang"]['Libraries (ie, code that another program might include). These are typically items like Wordpress extensions, drupal extensions, node.js libraries, Android / iPhone / Windows libraries, python libraries, etc.'] = 'Bibliotekos (ty, kodas, kad kita programa gali būti). Tai paprastai elementai, pavyzdžiui, WordPress plėtiniai, drupal plėtiniai, node.js bibliotekos, Android / iPhone / Windows bibliotekos, python bibliotekos, ir tt';

$GLOBALS["lang"]['Libyan Arab Jamahiriya'] = 'Libijos Arabų Džamahirija';

$GLOBALS["lang"]['License'] = 'Licencija';

$GLOBALS["lang"]['License Key'] = 'Licencijos raktas';

$GLOBALS["lang"]['License Required'] = 'Reikalinga licencija';

$GLOBALS["lang"]['Licensed users are free to add or modify the rules as you see fit. If you have a device with an SNMP OID that does not match a model already in the file - now you can add it easily. No more waiting for us to provide a patch and add it to the code base for you.<br><br>When you create a Rules entry, you will need to provide a name and a list of inputs and outputs. The inputs and outputs are stored as JSON arrays within the database.<br><br>Inputs have a table and attribute, an operator and a value. When executing the condition, it works thus: If $table . $attribute $operator $value then apply the outputs.<br><br>An example rule to match an SNMP OID and set the model is below.<br>'] = 'Licencijuoti vartotojai gali laisvai pridėti arba keisti taisykles, kaip jums atrodo tinkama. Jei turite įrenginį su SNMP OID, kuris neatitinka jau faile esančio modelio - dabar galite jį lengvai pridėti. Daugiau nebelaukiame, kol pateiksime pleistrą ir pridėsime jį prie kodo bazės.<br/><br/>Kai kuriate taisyklių įrašą, jums reikės pateikti pavadinimą ir įvedinių ir rezultatų sąrašą. Įėjimai ir išėjimai saugomi kaip JSON matricos duomenų bazėje.<br/><br/>Įėjimai turi lentelę ir atributą, operatorius ir vertė. Vykdant sąlygą, ji veikia taip: Jei $stalas. $atributas $operatorius $vertė tada taikyti rezultatus.<br/><br/>Pavyzdys taisyklė atitinka SNMP OID ir nustatyti modelį yra žemiau.<br/>';

$GLOBALS["lang"]['Licenses'] = 'Licencijos';

$GLOBALS["lang"]['Liechtenstein'] = 'Lichtenšteinas';

$GLOBALS["lang"]['Like'] = 'Kaip';

$GLOBALS["lang"]['Like most other attributes, Additional Fields can be bulk edited. Use the Bulk Edit function as you normally would and you will see the Additional Fields are available for input.'] = 'Kaip ir dauguma kitų požymių, Papildomi laukai gali būti urmu redaguoti. Naudokite urmu Redaguoti funkciją, kaip jūs paprastai būtų, ir pamatysite papildomų laukų yra prieinami įvesties.';

$GLOBALS["lang"]['Like versus Equals'] = 'Lygiai taip pat';

$GLOBALS["lang"]['limit'] = 'Riba';

$GLOBALS["lang"]['Limit'] = 'Riba';

$GLOBALS["lang"]['Limit the query to the first X items.'] = 'Užklausti tik pirmuosius X elementus.';

$GLOBALS["lang"]['Limited to 100 rows.'] = 'Tik 100 eilučių.';

$GLOBALS["lang"]['line_amount'] = 'Eilutės suma';

$GLOBALS["lang"]['Line Amount'] = 'Eilutės suma';

$GLOBALS["lang"]['Line Graph'] = 'Eilučių grafikas';

$GLOBALS["lang"]['line_number_a'] = 'Linijos numeris A';

$GLOBALS["lang"]['Line Number A'] = 'Linijos numeris A';

$GLOBALS["lang"]['line_number_b'] = 'Linijos numeris B';

$GLOBALS["lang"]['Line Number B'] = 'Linijos numeris B';

$GLOBALS["lang"]['line_text'] = 'Eilutės tekstas';

$GLOBALS["lang"]['Line Text'] = 'Eilutės tekstas';

$GLOBALS["lang"]['Line charts must return date or my_date, description or my_description and count.'] = 'Linijos diagramos turi grįžti datą arba mano _ data, aprašymas arba mano _ aprašymas ir skaičius.';

$GLOBALS["lang"]['link'] = 'Ryšys';

$GLOBALS["lang"]['Link'] = 'Ryšys';

$GLOBALS["lang"]['Link (Advanced)'] = 'Sąsaja (pažangi)';

$GLOBALS["lang"]['Linked Files'] = 'Susiję failai';

$GLOBALS["lang"]['links'] = 'Nuorodos';

$GLOBALS["lang"]['Links'] = 'Nuorodos';

$GLOBALS["lang"]['Links this discovery to the associated cloud (if required). Links to <code>clouds.id</code>.'] = 'Šis atradimas susiejamas su susijusiu debesiu (jei reikia). Nuorodos į <code>clouds.id</code>.';

$GLOBALS["lang"]['Links to <code>discovery_scan_options.id</code>.'] = 'Nuorodos į <code>discovery_scan_options.id</code>.';

$GLOBALS["lang"]['Links to <code>standards.id</code>'] = 'Nuorodos į <code>standards.id</code>';

$GLOBALS["lang"]['Links to <standards_policies.id</code>'] = 'Nuorodos į <standards_policies.id< code=""></standards_policies.id<>';

$GLOBALS["lang"]['Linux'] = 'Linux';

$GLOBALS["lang"]['Linux Packages'] = 'Linux paketai';

$GLOBALS["lang"]['List'] = 'Sąrašas';

$GLOBALS["lang"]['List All NMAP Ports, Protocols and Programs for Each Device'] = 'Sąrašas Visi NMAP prievadai, protokolai ir programos kiekvienam įrenginiui';

$GLOBALS["lang"]['List Devices'] = 'Įrenginių sąrašas';

$GLOBALS["lang"]['List Discoveries'] = 'Sąrašų atskleidimas';

$GLOBALS["lang"]['list_table_format'] = 'Sąrašo lentelės formatas';

$GLOBALS["lang"]['List Table Format'] = 'Sąrašo lentelės formatas';

$GLOBALS["lang"]['List Tables'] = 'Sąrašų lentelės';

$GLOBALS["lang"]['Lithuania'] = 'Lietuva';

$GLOBALS["lang"]['Lithuanian'] = 'Lietuvių';

$GLOBALS["lang"]['Load Balancing'] = 'Apkrovos balansavimas';

$GLOBALS["lang"]['Local'] = 'Vietinis';

$GLOBALS["lang"]['Local Area Network'] = 'Vietinis tinklas';

$GLOBALS["lang"]['local_port'] = 'Vietinis prievadas';

$GLOBALS["lang"]['Local Port'] = 'Vietinis prievadas';

$GLOBALS["lang"]['Local area network'] = 'Vietinis tinklas';

$GLOBALS["lang"]['Localhost'] = 'Localhost';

$GLOBALS["lang"]['Localisation'] = 'Vietovė';

$GLOBALS["lang"]['Location'] = 'Vieta';

$GLOBALS["lang"]['Location A'] = 'A vieta';

$GLOBALS["lang"]['Location B'] = 'B vieta';

$GLOBALS["lang"]['location_id'] = 'Vietovės ID';

$GLOBALS["lang"]['Location ID'] = 'Vietovės ID';

$GLOBALS["lang"]['location_id_a'] = 'A vietos kodas';

$GLOBALS["lang"]['Location ID A'] = 'A vietos kodas';

$GLOBALS["lang"]['location_id_b'] = 'B vietos kodas';

$GLOBALS["lang"]['Location ID B'] = 'B vietos kodas';

$GLOBALS["lang"]['location_latitude'] = 'Vietovės platuma';

$GLOBALS["lang"]['Location Latitude'] = 'Vietovės platuma';

$GLOBALS["lang"]['location_level'] = 'Vieta';

$GLOBALS["lang"]['Location Level'] = 'Vieta';

$GLOBALS["lang"]['location_longitude'] = 'Vieta Ilguma';

$GLOBALS["lang"]['Location Longitude'] = 'Vieta Ilguma';

$GLOBALS["lang"]['Location Name'] = 'Vietos pavadinimas';

$GLOBALS["lang"]['location_rack'] = 'Vietovės juosta';

$GLOBALS["lang"]['Location Rack'] = 'Vietovės juosta';

$GLOBALS["lang"]['location_rack_position'] = 'Vieta Rock padėtis';

$GLOBALS["lang"]['Location Rack Position'] = 'Vieta Rock padėtis';

$GLOBALS["lang"]['location_rack_size'] = 'Vieta Rock dydis';

$GLOBALS["lang"]['Location Rack Size'] = 'Vieta Rock dydis';

$GLOBALS["lang"]['location_room'] = 'Vieta Kambarys';

$GLOBALS["lang"]['Location Room'] = 'Vieta Kambarys';

$GLOBALS["lang"]['location_suite'] = 'Vietovė';

$GLOBALS["lang"]['Location Suite'] = 'Vietovė';

$GLOBALS["lang"]['Locations'] = 'Vieta';

$GLOBALS["lang"]['Locations in this'] = 'Vieta';

$GLOBALS["lang"]['log'] = 'Žurnalas';

$GLOBALS["lang"]['Log'] = 'Žurnalas';

$GLOBALS["lang"]['log_format'] = 'Žurnalo formatas';

$GLOBALS["lang"]['Log Format'] = 'Žurnalo formatas';

$GLOBALS["lang"]['Log Line'] = 'Žurnalo eilutė';

$GLOBALS["lang"]['log_path'] = 'Žurnalo kelias';

$GLOBALS["lang"]['Log Path'] = 'Žurnalo kelias';

$GLOBALS["lang"]['log_rotation'] = 'Žurnalo pasukimas';

$GLOBALS["lang"]['Log Rotation'] = 'Žurnalo pasukimas';

$GLOBALS["lang"]['log_status'] = 'Žurnalo būsena';

$GLOBALS["lang"]['Log Status'] = 'Žurnalo būsena';

$GLOBALS["lang"]['Logging in'] = 'Prisijungimas';

$GLOBALS["lang"]['Logical Cores '] = 'Loginės rūdos ';

$GLOBALS["lang"]['logical_count'] = 'Loginis skaičius';

$GLOBALS["lang"]['Logical Count'] = 'Loginis skaičius';

$GLOBALS["lang"]['Logout'] = 'Atsijungti';

$GLOBALS["lang"]['Logs'] = 'Žurnalai';

$GLOBALS["lang"]['longitude'] = 'Ilguma';

$GLOBALS["lang"]['Longitude'] = 'Ilguma';

$GLOBALS["lang"]['low'] = 'Žema';

$GLOBALS["lang"]['Low'] = 'Žema';

$GLOBALS["lang"]['Lower Case'] = 'Apatinė raidė';

$GLOBALS["lang"]['Lowercase Hostname'] = 'Mažasis Hostname';

$GLOBALS["lang"]['Luxembourg'] = 'Liuksemburgas';

$GLOBALS["lang"]['MAC Address'] = 'MAC adresas';

$GLOBALS["lang"]['MAC Manufacturer'] = 'MAC Gamintojas';

$GLOBALS["lang"]['mac'] = 'Mac';

$GLOBALS["lang"]['Mac'] = 'Mac';

$GLOBALS["lang"]['Mac Address'] = 'Mac adresas';

$GLOBALS["lang"]['MacOS'] = 'MacOS';

$GLOBALS["lang"]['MacOS Packages'] = 'MacOS paketai';

$GLOBALS["lang"]['Macao'] = 'Makao';

$GLOBALS["lang"]['Macedonia'] = 'Makedonija';

$GLOBALS["lang"]['Madagascar'] = 'Madagaskaras';

$GLOBALS["lang"]['Maintain records of risk assessments and treatments'] = 'Saugoti įrašus apie rizikos vertinimą ir gydymą';

$GLOBALS["lang"]['maintenance_expires'] = 'Išlaikymo trukmė';

$GLOBALS["lang"]['Maintenance Expires'] = 'Išlaikymo trukmė';

$GLOBALS["lang"]['Make My Default Dashboard'] = 'Padaryti numatytąją prietaisų skydelį';

$GLOBALS["lang"]['Make this install a Collector'] = 'Įdiegti kolektorių';

$GLOBALS["lang"]['Malawi'] = 'Malavis';

$GLOBALS["lang"]['Malay'] = 'MalajusCountry name';

$GLOBALS["lang"]['Malaysia'] = 'Malaizija';

$GLOBALS["lang"]['Maldives'] = 'Maldyvai';

$GLOBALS["lang"]['Mali'] = 'Malis';

$GLOBALS["lang"]['Malta'] = 'Malta';

$GLOBALS["lang"]['Manage'] = 'Tvarkyti';

$GLOBALS["lang"]['Manage Licenses'] = 'Tvarkyti licencijas';

$GLOBALS["lang"]['Manage in NMIS'] = 'Tvarkyti NMIS';

$GLOBALS["lang"]['Manage incidents and nonconformities'] = 'Incidentų ir neatitikčių tvarkymas';

$GLOBALS["lang"]['Managed'] = 'Valdoma';

$GLOBALS["lang"]['managed_by'] = 'Tvarkyti';

$GLOBALS["lang"]['Managed By'] = 'Tvarkyti';

$GLOBALS["lang"]['Manual Input'] = 'Rankinis įvestis';

$GLOBALS["lang"]['Manually set by user, defaults to Production.'] = 'Rankiniu būdu nustatyti vartotojo, numatytųjų gamybos.';

$GLOBALS["lang"]['Manually set by user.'] = 'Rankiniu būdu nustatyti vartotojo.';

$GLOBALS["lang"]['manufacture_date'] = 'Gamybos data';

$GLOBALS["lang"]['Manufacture Date'] = 'Gamybos data';

$GLOBALS["lang"]['manufacturer'] = 'Gamintojas';

$GLOBALS["lang"]['Manufacturer'] = 'Gamintojas';

$GLOBALS["lang"]['manufacturer_code'] = 'Gamintojo kodas';

$GLOBALS["lang"]['Manufacturer Code'] = 'Gamintojo kodas';

$GLOBALS["lang"]['Map'] = 'Žemėlapis';

$GLOBALS["lang"]['maps'] = 'Žemėlapis';

$GLOBALS["lang"]['Maps'] = 'Žemėlapis';

$GLOBALS["lang"]['March'] = 'Kovas';

$GLOBALS["lang"]['Marshall Islands'] = 'Maršalo Salos';

$GLOBALS["lang"]['Martinique'] = 'Martinika';

$GLOBALS["lang"]['mask'] = 'Kaukė';

$GLOBALS["lang"]['Mask'] = 'Kaukė';

$GLOBALS["lang"]['Match'] = 'Atitikti';

$GLOBALS["lang"]['match_options'] = 'Atitikimo parinktys';

$GLOBALS["lang"]['Match Options'] = 'Atitikimo parinktys';

$GLOBALS["lang"]['Match Order'] = 'Atitikimo tvarka';

$GLOBALS["lang"]['Match Process'] = 'Atitikimo procesas';

$GLOBALS["lang"]['match_string'] = 'Atitikti eilutę';

$GLOBALS["lang"]['Match String'] = 'Atitikti eilutę';

$GLOBALS["lang"]['Matching Attribute'] = 'Sutampantis atributas';

$GLOBALS["lang"]['Matching Devices - Including OrgID'] = 'Sutampantys įrenginiai - įskaitant organID';

$GLOBALS["lang"]['Matching Linux Devices'] = 'Sutampantys Linux įrenginiai';

$GLOBALS["lang"]['Matching is conducted in the following order'] = 'Atitiktis atliekama tokia tvarka:';

$GLOBALS["lang"]['maturity_level'] = 'Terminas';

$GLOBALS["lang"]['Maturity Level'] = 'Terminas';

$GLOBALS["lang"]['maturity_score'] = 'Terminas';

$GLOBALS["lang"]['Maturity Score'] = 'Terminas';

$GLOBALS["lang"]['Mauritania'] = 'Mauritanija';

$GLOBALS["lang"]['Mauritius'] = 'Mauricijus';

$GLOBALS["lang"]['max_file_size'] = 'Didžiausias failo dydis';

$GLOBALS["lang"]['Max File Size'] = 'Didžiausias failo dydis';

$GLOBALS["lang"]['Max Length'] = 'Didžiausias ilgis';

$GLOBALS["lang"]['max_size'] = 'Didžiausias dydis';

$GLOBALS["lang"]['Max Size'] = 'Didžiausias dydis';

$GLOBALS["lang"]['May'] = 'Gegužės mėn.';

$GLOBALS["lang"]['Mayotte'] = 'Majotas';

$GLOBALS["lang"]['Measures the likelihood of the vulnerability being attacked, and is based on the current state of exploit techniques, exploit code availability, or active, “in-the-wild” exploitation.'] = 'Matuoja pažeidžiamumo užpuolimo tikimybę ir remiasi dabartine technologijų naudojimo, kodo prieinamumo arba aktyvaus "laukinio" naudojimo būkle.';

$GLOBALS["lang"]['medium'] = 'Vidutinis';

$GLOBALS["lang"]['Medium'] = 'Vidutinis';

$GLOBALS["lang"]['members'] = 'Nariai';

$GLOBALS["lang"]['Members'] = 'Nariai';

$GLOBALS["lang"]['memory'] = 'Atmintis';

$GLOBALS["lang"]['Memory'] = 'Atmintis';

$GLOBALS["lang"]['memory_count'] = 'Atminties skaičius';

$GLOBALS["lang"]['Memory Count'] = 'Atminties skaičius';

$GLOBALS["lang"]['memory_slot_count'] = 'Atminties lizdų skaičius';

$GLOBALS["lang"]['Memory Slot Count'] = 'Atminties lizdų skaičius';

$GLOBALS["lang"]['menu_category'] = 'Meniu kategorija';

$GLOBALS["lang"]['Menu Category'] = 'Meniu kategorija';

$GLOBALS["lang"]['menu_display'] = 'Meniu ekranas';

$GLOBALS["lang"]['Menu Display'] = 'Meniu ekranas';

$GLOBALS["lang"]['message'] = 'Pranešimas';

$GLOBALS["lang"]['Message'] = 'Pranešimas';

$GLOBALS["lang"]['meta_last_changed'] = 'Meta paskutinį kartą pakeista';

$GLOBALS["lang"]['Meta Last Changed'] = 'Meta paskutinį kartą pakeista';

$GLOBALS["lang"]['metric'] = 'Metras';

$GLOBALS["lang"]['Metric'] = 'Metras';

$GLOBALS["lang"]['Metropolitan Area Network'] = 'Metropolinių zonų tinklas';

$GLOBALS["lang"]['Metropolitan area network'] = 'Metropolinių zonų tinklas';

$GLOBALS["lang"]['Mexico'] = 'Meksika';

$GLOBALS["lang"]['Micronesia'] = 'Mikronezija';

$GLOBALS["lang"]['Microsoft Azure Fields'] = 'Microsoft Azure laukai';

$GLOBALS["lang"]['microtime'] = 'Mikrolaikas';

$GLOBALS["lang"]['Microtime'] = 'Mikrolaikas';

$GLOBALS["lang"]['minute'] = 'Minutė';

$GLOBALS["lang"]['Minute'] = 'Minutė';

$GLOBALS["lang"]['Minutes'] = 'Protokolai';

$GLOBALS["lang"]['Minutes Since last Audit are Greater than'] = 'Protokolas Nuo paskutinio audito yra didesnis nei';

$GLOBALS["lang"]['model'] = 'Pavyzdys';

$GLOBALS["lang"]['Model'] = 'Pavyzdys';

$GLOBALS["lang"]['model_family'] = 'Modelis Šeima';

$GLOBALS["lang"]['Model Family'] = 'Modelis Šeima';

$GLOBALS["lang"]['Modified'] = 'Pakeista';

$GLOBALS["lang"]['Modifying an Existing Script'] = 'Esamo scenarijaus modifikavimas';

$GLOBALS["lang"]['module'] = 'Modulis';

$GLOBALS["lang"]['Module'] = 'Modulis';

$GLOBALS["lang"]['module_index'] = 'Modulio rodyklė';

$GLOBALS["lang"]['Module Index'] = 'Modulio rodyklė';

$GLOBALS["lang"]['Modules'] = 'Moduliai';

$GLOBALS["lang"]['Moldova'] = 'Moldova';

$GLOBALS["lang"]['Monaco'] = 'Monakas';

$GLOBALS["lang"]['Monday'] = 'Pirmadienis';

$GLOBALS["lang"]['Mongolia'] = 'Mongolija';

$GLOBALS["lang"]['monitor'] = 'Monitorius';

$GLOBALS["lang"]['Monitor'] = 'Monitorius';

$GLOBALS["lang"]['Monitor and measure ISMS performance'] = 'Stebėti ir vertinti ISMS veiklos rezultatus';

$GLOBALS["lang"]['Montenegro'] = 'Juodkalnija';

$GLOBALS["lang"]['month'] = 'Mėnuo';

$GLOBALS["lang"]['Month'] = 'Mėnuo';

$GLOBALS["lang"]['Montserrat'] = 'Montseratas';

$GLOBALS["lang"]['More Information'] = 'Daugiau informacijos';

$GLOBALS["lang"]['More Secure'] = 'Saugesnis';

$GLOBALS["lang"]['More elaborate SQL can used to group attributes within a range. Below shows the SQL for devices not seen in a pie chart grouped by last seen date ranges.'] = 'Išsamesnė SQL gali būti naudojamas grupuoti atributus diapazone. Žemiau rodomas SQL įrenginių, nematytų pyrago diagramos sugrupuotas paskutinį kartą matyti datos intervalus.';

$GLOBALS["lang"]['More information about debugging this can be found on a helpful Stack Overflow thread'] = 'Daugiau informacijos apie derinimo tai galima rasti naudinga kamino overflow siūlas';

$GLOBALS["lang"]['Morocco'] = 'Marokas';

$GLOBALS["lang"]['Most likely the Windows firewall (or a third party firewall) is denying the connection attempt.<br><br>Please log on to the target Windows machine and check the firewall settings.'] = 'Labiausiai tikėtina, kad Windows ugniasienė (arba trečiosios šalies ugniasienė) neigia prisijungimo bandymą.<br/><br/>Prašome prisijungti prie tikslinės Windows mašina ir patikrinti ugniasienės nustatymus.';

$GLOBALS["lang"]['Most of Open-AudIT is Licensed with GNU AGPL.'] = 'Didžioji dalis Open- AudiIT licencijų išduota GNU AGPL.';

$GLOBALS["lang"]['motherboard'] = 'Motherboard';

$GLOBALS["lang"]['Motherboard'] = 'Motherboard';

$GLOBALS["lang"]['mount_point'] = 'Montavimo taškas';

$GLOBALS["lang"]['Mount Point'] = 'Montavimo taškas';

$GLOBALS["lang"]['mount_type'] = 'Montavimo tipas';

$GLOBALS["lang"]['Mount Type'] = 'Montavimo tipas';

$GLOBALS["lang"]['Mozambique'] = 'Mozambikas';

$GLOBALS["lang"]['Must Respond To Ping. If set, Nmap will fist attempt to send and listen for an ICMP response. If the device does not respond, no further scanning will occur.<br>Previously a device did not have to respond to a ping for Open-AudIT to continue scanning.'] = 'Turi atsiliepti į Pingą. Jei nustatyta, Nmap bus kumštis bando siųsti ir klausytis ICMP atsakymą. Jei įrenginys nereaguoja, daugiau skenavimo nebus.<br/>Anksčiau prietaisas neturėjo reaguoti į ping Open- AudIT toliau skenuoti.';

$GLOBALS["lang"]['Must Respond to Ping'] = 'Turi reaguoti į Ping';

$GLOBALS["lang"]['My AntiVirus is prompting me to deny/allow things'] = 'Mano antivirusas skatina mane neigti / leisti dalykų';

$GLOBALS["lang"]['My time is off in Open-AudIT'] = 'Mano laikas išjungtas Open- AudIT';

$GLOBALS["lang"]['Myanmar'] = 'Mianmaras';

$GLOBALS["lang"]['N+1'] = 'N + 1';

$GLOBALS["lang"]['N+M'] = 'N + M';

$GLOBALS["lang"]['N-to-1'] = 'N- to-1';

$GLOBALS["lang"]['N-to-N'] = 'N-to- N';

$GLOBALS["lang"]['NMIS Business Service'] = 'NMIS verslo paslauga';

$GLOBALS["lang"]['NMIS Customer'] = 'NMIS klientas';

$GLOBALS["lang"]['NMIS Device Options'] = 'NMIS įrenginio parinktys';

$GLOBALS["lang"]['NMIS Device Selection'] = 'NMIS įrenginio pasirinkimas';

$GLOBALS["lang"]['NMIS Field Name'] = 'NMIS lauko pavadinimas';

$GLOBALS["lang"]['NMIS Field Type'] = 'NMIS lauko tipas';

$GLOBALS["lang"]['NMIS Group'] = 'NMIS grupė';

$GLOBALS["lang"]['NMIS Poller'] = 'NMIS Poller';

$GLOBALS["lang"]['NMIS Role'] = 'NMIS Vaidmuo';

$GLOBALS["lang"]['NOTE'] = 'PASTABA';

$GLOBALS["lang"]['NOTE #2'] = 'PASTABA Nr. 2';

$GLOBALS["lang"]['NOTE - For more info on DateTime formats, see'] = 'PASTABA - Daugiau informacijos apie DateTime formatus rasite';

$GLOBALS["lang"]['NOTE - If you request a downloaded CSV, XML or JSON format (either a single credential, or the complete collection) the actual credential details will be sent. Not the encrypted string, the actual username, password, community string, etc. Any sensitive details are not displayed in the web GUI, but are made available via other formats. To prevent this export a configuration item is available called decrypt_credentials.'] = 'PASTABA - Jei norite atsisiųsti CSV, XML arba JSON formatu (arba vieną patikinimą, arba visą kolekciją) faktiniai patikėjimo duomenys bus siunčiami. Ne šifruota eilutė, tikrasis naudotojo vardas, slaptažodis, bendruomenės eilutė ir kt. Bet kokie slapti duomenys nėra rodomi žiniatinklio naudotojo sąsaja, bet pateikiami kitais formatais. Siekiant išvengti šio eksporto konfigūracijos elementas yra žinomas vadinamas decrypt _ entities.';

$GLOBALS["lang"]['NOTE - The curly brackets in the data filed should be used as-is (not replaced as per other examples above).'] = 'PASTABA. Turėtų būti naudojami skliausteliuose pateikti duomenys (nepakeisti, kaip pirmiau nurodyta).';

$GLOBALS["lang"]['NOTE - You can prevent plain text credentials being displayed below by setting the configuration item for <code>decrypt_credentials</code> to <code>n</code>.'] = 'PASTABA - Jūs galite neleisti, kad žemiau būtų rodomi paprasto teksto požymiai nustatydami konfigūracijos elementą <code>decrypt_credentials</code> iki <code>n</code>.';

$GLOBALS["lang"]['name'] = 'Pavadinimas';

$GLOBALS["lang"]['Name'] = 'Pavadinimas';

$GLOBALS["lang"]['Name: The name you are giving to this field. Ideally it should be unique.'] = 'Pavadinimas: Vardas, kurį jūs pateikiate šiam laukui. Idealiu atveju ji turėtų būti unikali.';

$GLOBALS["lang"]['Namibia'] = 'Namibija';

$GLOBALS["lang"]['Nauru'] = 'Nauru';

$GLOBALS["lang"]['Nepal'] = 'Nepalas';

$GLOBALS["lang"]['net_index'] = 'Grynasis indeksas';

$GLOBALS["lang"]['Net Index'] = 'Grynasis indeksas';

$GLOBALS["lang"]['Netherlands Antilles'] = 'Nyderlandų Antilai';

$GLOBALS["lang"]['Netherlands the'] = 'Nyderlandai';

$GLOBALS["lang"]['netmask'] = 'Comment';

$GLOBALS["lang"]['Netmask'] = 'Comment';

$GLOBALS["lang"]['netstat'] = 'Netstat';

$GLOBALS["lang"]['Netstat'] = 'Netstat';

$GLOBALS["lang"]['Netstat Policies'] = 'Tinklo politika';

$GLOBALS["lang"]['Netstat Ports'] = 'Netstat prievadai';

$GLOBALS["lang"]['Netstat Ports use a combination of port number, protocol and program. If all are present the policy passes.'] = 'Netstat Ports naudoja prievado numerį, protokolą ir programą. Jei visi yra pateikti politika eina.';

$GLOBALS["lang"]['Network'] = 'Tinklas';

$GLOBALS["lang"]['network_address'] = 'Tinklo adresas';

$GLOBALS["lang"]['Network Address'] = 'Tinklo adresas';

$GLOBALS["lang"]['Network Discovery'] = 'Tinklo paieška';

$GLOBALS["lang"]['network_domain'] = 'Tinklo sritis';

$GLOBALS["lang"]['Network Domain'] = 'Tinklo sritis';

$GLOBALS["lang"]['Network Types'] = 'Tinklo tipai';

$GLOBALS["lang"]['Network type is set to Local Area Network by default, but can be changed by the user as they see fit. The types supported are below (with thanks to Wikipedia).<br><br>A network can be characterized by its physical capacity or its organizational purpose. Use of the network, including user authorization and access rights, differ accordingly.'] = 'Tinklo tipas nustatytas vietiniam tinklui pagal nutylėjimą, tačiau vartotojas gali jį pakeisti taip, kaip jis mano esant tinkamas. Palaikomi tipai yra žemiau (dėka Wikipedia).<br/><br/>Tinklui gali būti būdingas jo fizinis pajėgumas arba organizacinis tikslas. Tinklo naudojimas, įskaitant naudotojų leidimus ir prieigos teises, atitinkamai skiriasi.';

$GLOBALS["lang"]['networks'] = 'Tinklai';

$GLOBALS["lang"]['Networks'] = 'Tinklai';

$GLOBALS["lang"]['Networks Generated By'] = 'Tinklai, generuojami';

$GLOBALS["lang"]['Networks are updated with every discovery. Items such as IPs Available and IPs Used, along with Gateways, DHCP and DNS Servers are added as found.'] = 'Tinklai atnaujinami su kiekvienu atradimu. Pridedami tokie straipsniai kaip IP prieinami ir IP naudojami, kartu su Gateways, DHCP ir DNS serveriai, kaip nustatyta.';

$GLOBALS["lang"]['Networks respond differently depending on how they are configured. Some routers and/or firewalls can respond <i>on behalf</i> of IPs on the other side of their interfaces to the Open-AudIT Server. It is quite common to see Nmap report a probe for SNMP (UDP port 161) to respond as open|filtered for devices that do and do not exist. This is misleading as there is no device at that IP, yet it ends up with a device entry in the database. 99.9% of the time, it is not Open-AudIT, nor even Nmap, but the network causing this issue. Now that we have the options to treat open|filtered ports as either open or closed, we can eliminate a lot of this confusion. Enterprise users even have the option to change this on a per discovery basis (more than just using the Medium (Classic) item, as above).'] = 'Tinklai reaguoja skirtingai, priklausomai nuo to, kaip jie yra sukonfigūruoti. Kai maršrutizatoriai ir / arba ugniasienės gali reaguoti <i>vardu</i> iš IP kitoje pusėje jų sąsajų su Open- AudIT serverio. Tai gana įprasta matyti Nmap ataskaitą zondas SNMP (UDP prievadas 161) reaguoti kaip atvira 124; filtruotas įrenginiams, kurie daro ir neegzistuoja. Tai klaidinanti, nes nėra prietaiso tuo TL, tačiau jis baigiasi prietaiso įrašą į duomenų bazę. 99,9% laiko, tai ne Open- AudIT ar net Nmap, bet tinklas sukelia šią problemą. Dabar, kai mes turime galimybes gydyti atviras 124; filtruoti uostus arba atidaryti arba uždaryti, mes galime pašalinti daug šios painiavos. Įmonės vartotojai net turi galimybę pakeisti tai per atradimą (daugiau nei tik naudojant Medium (Classic) elementą, kaip pirmiau).';

$GLOBALS["lang"]['Networks using a CIDR Mask of'] = 'Tinklai, naudojantys CIDR kaukę';

$GLOBALS["lang"]['New Building Name'] = 'Naujas pastato pavadinimas';

$GLOBALS["lang"]['New Caledonia'] = 'Naujoji Kaledonija';

$GLOBALS["lang"]['New Floor Name'] = '@ info: whatsthis';

$GLOBALS["lang"]['New Room Name'] = 'Naujas kambario pavadinimas';

$GLOBALS["lang"]['New Row Name'] = 'Naujos eilutės pavadinimas';

$GLOBALS["lang"]['New Zealand'] = 'Naujoji Zelandija';

$GLOBALS["lang"]['News'] = 'Naujienos';

$GLOBALS["lang"]['News checks-in each time you login for updated queries & packages, configuration recommendations, release announcements, blog posts and more.'] = 'Naujienos patikrinimai- kiekvieną kartą jums prisijungti prie atnaujintų užklausų & paketai, konfigūracijos rekomendacijos, spaudai skelbimai, dienoraščio pranešimų ir daugiau.';

$GLOBALS["lang"]['News is our way of keeping you up-to-date with the latest fixes, announcements, query updates, software versions and more.<br><br>You do not need to keep on top of the wiki or check for new releases, we can send these to you!'] = 'Naujienos yra mūsų būdas išlaikyti jus up- to-date su naujausiais pataisymais, skelbimai, užklausų atnaujinimai, programinės įrangos versijos ir daugiau.<br/><br/>Jums nereikia laikyti ant wiki viršuje ar patikrinti naujų leidinių, mes galime siųsti juos jums!';

$GLOBALS["lang"]['next_hop'] = 'Kitas etapas';

$GLOBALS["lang"]['Next Hop'] = 'Kitas etapas';

$GLOBALS["lang"]['next_run'] = 'Kitas vykdymas';

$GLOBALS["lang"]['Next Run'] = 'Kitas vykdymas';

$GLOBALS["lang"]['Next click <i>Create your own application</i>.'] = 'Kitas spragtelėjimas <i>Sukurti savo programą</i>.';

$GLOBALS["lang"]['Next, click OK, then right click the Apache 2.4 service and click Restart. Done!'] = 'Kitas, spustelėkite Gerai, tada dešiniuoju spustelėkite Apache 2.4 tarnyba ir spustelėkite Restart. Baigta!';

$GLOBALS["lang"]['Next, right click the Apache2.4 service and select Properties, then click the Log On tab.'] = 'Kitas, dešiniuoju pelės mygtuku spustelėkite Apache2.4 paslaugą ir pasirinkite Savybės, tada spustelėkite Prisijungti ant skirtuką.';

$GLOBALS["lang"]['Nicaragua'] = 'Nikaragva';

$GLOBALS["lang"]['Niger'] = 'Nigeris';

$GLOBALS["lang"]['Nigeria'] = 'Nigerija';

$GLOBALS["lang"]['Niue'] = 'Niujė';

$GLOBALS["lang"]['nmap'] = 'Nmap';

$GLOBALS["lang"]['Nmap'] = 'Nmap';

$GLOBALS["lang"]['Nmap Port Scanning Responses'] = 'Nmap prievadų skenavimo atsakai';

$GLOBALS["lang"]['nmap_tcp_ports'] = 'Nmap Tcp prievadai';

$GLOBALS["lang"]['Nmap Tcp Ports'] = 'Nmap Tcp prievadai';

$GLOBALS["lang"]['nmap_udp_ports'] = 'Nmap Udp uostai';

$GLOBALS["lang"]['Nmap Udp Ports'] = 'Nmap Udp uostai';

$GLOBALS["lang"]['Nmap cannot determine whether the port is open because packet filtering prevents its probes from reaching the port. The filtering could be from a dedicated firewall device, router rules, or host-based firewall software. These ports frustrate attackers because they provide so little information. Sometimes they respond with ICMP error messages such as type 3 code 13 (destination unreachable: communication administratively prohibited), but filters that simply drop probes without responding are far more common. This forces Nmap to retry several times just in case the probe was dropped due to network congestion rather than filtering. This slows down the scan dramatically.'] = 'Nmap negali nustatyti, ar prievadas atidarytas, nes paketo filtravimas neleidžia jo zondams pasiekti prievado. Filtravimas galėtų būti atliekamas naudojant specialų ugniasienės įrenginį, maršrutizatoriaus taisykles arba užkardos programinę įrangą. Šie uostai erzina užpuolikus, nes jie suteikia tiek mažai informacijos. Kartais jie reaguoja su ICMP klaidų pranešimus, pavyzdžiui, tipas 3 kodas 13 (paskirties nepasiekiama: bendravimas administraciškai draudžiama), bet filtrai, kad tiesiog lašas zondai neatsako yra daug dažniau. Tai verčia Nmap pakartotinai išbandyti kelis kartus tik tuo atveju, jei zondas buvo numestas dėl tinklo perkrovos, o ne filtravimo. Tai dramatiškai sulėtina skenavimą.';

$GLOBALS["lang"]['Nmap places ports in this state when it is unable to determine whether a port is open or filtered. This occurs for scan types in which open ports give no response. The lack of response could also mean that a packet filter dropped the probe or any response it elicited. So Nmap does not know for sure whether the port is open or being filtered. The UDP, IP protocol, FIN, NULL, and Xmas scans classify ports this way.'] = 'Nmap nustato prievadus šioje būsenoje, kai ji negali nustatyti, ar prievadas yra atidarytas ar filtruotas. Tai atsitinka skenavimo tipų, kuriuose atidaryti prievadai nesuteikia jokio atsako. Atsako trūkumas taip pat gali reikšti, kad paketo filtras numetė zondą ar bet kokį atsaką, kurį jis sukėlė. Taigi, Nmap nežino, ar prievadas yra atidarytas, ar filtruojamas. UDP, IP protokolas, FIN, NULL, ir Xmas nuskaito prievadus šiuo būdu.';

$GLOBALS["lang"]['Nmap timing details are found on the bottom of this linked page'] = 'Žemėlapio laiko detalės randamos šio susieto puslapio apačioje';

$GLOBALS["lang"]['nmis_business_service'] = '"Nmis Business Service"';

$GLOBALS["lang"]['Nmis Business Service'] = '"Nmis Business Service"';

$GLOBALS["lang"]['nmis_customer'] = 'Nmis klientas';

$GLOBALS["lang"]['Nmis Customer'] = 'Nmis klientas';

$GLOBALS["lang"]['nmis_group'] = 'Nmis Group';

$GLOBALS["lang"]['Nmis Group'] = 'Nmis Group';

$GLOBALS["lang"]['nmis_manage'] = 'Comment';

$GLOBALS["lang"]['Nmis Manage'] = 'Comment';

$GLOBALS["lang"]['nmis_name'] = 'Nmis vardas';

$GLOBALS["lang"]['Nmis Name'] = 'Nmis vardas';

$GLOBALS["lang"]['nmis_notes'] = 'Nmis Pastabos';

$GLOBALS["lang"]['Nmis Notes'] = 'Nmis Pastabos';

$GLOBALS["lang"]['nmis_poller'] = 'Nmis Poller';

$GLOBALS["lang"]['Nmis Poller'] = 'Nmis Poller';

$GLOBALS["lang"]['nmis_poller_uuid'] = 'Nmis Poller Uuid';

$GLOBALS["lang"]['Nmis Poller Uuid'] = 'Nmis Poller Uuid';

$GLOBALS["lang"]['nmis_role'] = 'Nmis vaidmuo';

$GLOBALS["lang"]['Nmis Role'] = 'Nmis vaidmuo';

$GLOBALS["lang"]['No'] = 'Ne';

$GLOBALS["lang"]['No Devices Returned'] = 'Negrąžinta jokių įrenginių';

$GLOBALS["lang"]['No Google Maps API Key present, you will not be able to display the map.'] = 'Nėra "Google" žemėlapių API Raktų dovana, Jūs negalite rodyti žemėlapio.';

$GLOBALS["lang"]['No License for Professional or Enterprise'] = 'Nėra profesinės arba verslo licencijos';

$GLOBALS["lang"]['No Results'] = 'Rezultatų nėra';

$GLOBALS["lang"]['No data in License Key'] = 'Licencijos rakte duomenų nėra';

$GLOBALS["lang"]['No database upgrade required at this time.'] = 'Šiuo metu duomenų bazės atnaujinti nereikia.';

$GLOBALS["lang"]['No devices are in the database.'] = 'Duomenų bazėje įrenginių nėra.';

$GLOBALS["lang"]['Node'] = 'Mazgas';

$GLOBALS["lang"]['None'] = 'Nėra';

$GLOBALS["lang"]['Norfolk Island'] = 'Norfolko sala';

$GLOBALS["lang"]['Normal'] = 'Normalus';

$GLOBALS["lang"]['Northern Mariana Islands'] = 'Marianos šiaurinės Salos';

$GLOBALS["lang"]['Norway'] = 'Norvegija';

$GLOBALS["lang"]['Norwegian'] = 'Norvegų';

$GLOBALS["lang"]['Not Applicable'] = 'Netaikoma';

$GLOBALS["lang"]['Not Checked'] = 'Netikrinta';

$GLOBALS["lang"]['Not Equals'] = 'Ne vienodos';

$GLOBALS["lang"]['Not In'] = 'Ne';

$GLOBALS["lang"]['Not Like'] = 'Ne';

$GLOBALS["lang"]['Not Set'] = 'Nenustatyta';

$GLOBALS["lang"]['Not every computer will be able to successfully complete a benchmark. We have seen in some fail in testing for reasons beyond our control. The logs should help point you in the right direction for these items.'] = 'Ne kiekvienas kompiuteris galės sėkmingai užbaigti lyginamąjį standartą. Matėme kai kuriuos nesėkmingus bandymus dėl nuo mūsų nepriklausančių priežasčių. Rąstai turėtų padėti nukreipti jus teisinga kryptimi šių daiktų.';

$GLOBALS["lang"]['Not in the (comma seperated) list'] = 'Neįtraukta į (kablelių seperuotų) sąrašą';

$GLOBALS["lang"]['Not normally used. If set, this requires the device to have an open port (as per Scan Options) to be considered responding. A MAC address, arp response or ping response is not considered sufficient to be considered responding. Useful if a router or firewall between the Open-AudIT server and target IP is responding to port scans on the IPs behalf.'] = 'Įprastai nenaudojama. Jei nustatyta, tai reikalauja, kad įrenginys turėtų atvirą prievadą (kaip per Scan Options), kad būtų laikomas atsakingu. Laikoma, kad MAC adreso, arp atsako ar ping atsako nepakanka, kad būtų galima manyti, jog jis yra veiksmingas. Naudinga, jei maršrutizatorius arba ugniasienė tarp Open- AudIT serverio ir tikslinės IP reaguoja į uosto nuskaito IP vardu.';

$GLOBALS["lang"]['Note'] = 'Pastaba';

$GLOBALS["lang"]['Note - Selecting a parent will automatically provide access to its children (although it wont be shown here).'] = 'Pastaba - Tėvų pasirinkimas automatiškai suteiks priėjimą prie savo vaikų (nors jis bus rodomas čia).';

$GLOBALS["lang"]['Note that the 100 device Enterprise license does not include support.'] = 'Atkreipkite dėmesį, kad 100 įrenginys Enterprise licencija neapima paramos.';

$GLOBALS["lang"]['Note, you may need to make the script executable with'] = 'Pastaba, jums gali tekti padaryti scenarijų vykdomąjį su';

$GLOBALS["lang"]['Notes'] = 'Pastabos';

$GLOBALS["lang"]['notes'] = 'Pastabos';

$GLOBALS["lang"]['Notice'] = 'Pranešimas';

$GLOBALS["lang"]['notin'] = 'Notinas';

$GLOBALS["lang"]['Notin'] = 'Notinas';

$GLOBALS["lang"]['November'] = 'Lapkritis';

$GLOBALS["lang"]['Now for the Subscription ID, click All Services, Subscriptions and copy it.'] = 'Dabar prenumeratos ID, spustelėkite Visi Paslaugos, prenumeratos ir nukopijuoti.';

$GLOBALS["lang"]['Now we need to provide the Azure Active Directory application access to your subscription.<br><br>Click on Resource Groups and then the resource group you would like your Azure Active Directory Application to have access to.<br><br>Click Add. The role should be Contributor and then search for the app (Open-AudIT). Then click Save.<br><br>Now the application has access to the subscription, so we can make API calls. The API calls will be requested on behalf of the application, not your user.'] = 'Dabar mes turime suteikti Azure Active Directory programos prieigą prie jūsų prenumeratos.<br/><br/>Spauskite ant išteklių grupių ir tada išteklių grupė jums patiktų savo Azure Active Directory programa turėti prieigą prie.<br/><br/>Spustelėkite Pridėti. Vaidmuo turėtų būti pagalbininkas ir tada ieškoti programėlę (Open- AudIT). Tada spustelėkite Išsaugoti.<br/><br/>Dabar programa turi prieigą prie prenumeratos, todėl mes galime padaryti API skambučius. API skambučiai bus prašoma programos vardu, ne jūsų vartotojas.';

$GLOBALS["lang"]['nvd_json'] = 'Nvd Json';

$GLOBALS["lang"]['Nvd Json'] = 'Nvd Json';

$GLOBALS["lang"]['ORDER BY'] = 'NUTARTIS';

$GLOBALS["lang"]['OS'] = 'BI';

$GLOBALS["lang"]['OS Families'] = 'OS šeimos';

$GLOBALS["lang"]['OS Family'] = 'OS Šeima';

$GLOBALS["lang"]['OS Group'] = 'OS grupė';

$GLOBALS["lang"]['OUTPUTS'] = 'REZULTATAI';

$GLOBALS["lang"]['oae_manage'] = 'Obuolių tvarkymas';

$GLOBALS["lang"]['Oae Manage'] = 'Obuolių tvarkymas';

$GLOBALS["lang"]['object_ident'] = 'Objekto Identas';

$GLOBALS["lang"]['Object Ident'] = 'Objekto Identas';

$GLOBALS["lang"]['Obtain top management support'] = 'Gauti aukščiausios vadovybės paramą';

$GLOBALS["lang"]['October'] = 'Spalis';

$GLOBALS["lang"]['Offset'] = 'Išjungtas';

$GLOBALS["lang"]['Okta'] = 'Okta';

$GLOBALS["lang"]['Oman'] = 'Omanas';

$GLOBALS["lang"]['omk_uuid'] = 'Omk Uuid';

$GLOBALS["lang"]['Omk Uuid'] = 'Omk Uuid';

$GLOBALS["lang"]['On'] = 'Įjungta';

$GLOBALS["lang"]['On Windows, Open-AudIT uses WMI as it is primary method of auditing. Windows has a notorious reputation where remote WMI is concerned. It tends to either <i>just work</i> or some mystery item on the target requires changing. If you are experiencing difficulty auditing remote Windows PCs, we have created a script called test_windows_client.vbs. You can run this script <strong>locally</strong> on the machine in question, after signing on as the user that is used by Open-AudIT to perform the audit. The script makes <strong>no changes</strong> to the target devices. It checks most (not all) of the items below and generates PASS, FAIL and INFO tags for various properties. NOTE - If your target system is being audited correctly, you should not change any settings. Some of the below do not exist on Windows PCs that are able to be audited and some do exist. Only change settings if your discoveries on particular PCs are not working as intended.'] = 'Windows, Open- AudIT naudoja WMI, nes tai yra pagrindinis metodas audito. "Windows" turi pagarsėjusią reputaciją nuotolinio WMI atžvilgiu. Jis linkęs arba <i>Tik darbas</i> arba kažkoks paslaptingas punktas dėl tikslo reikalauja keisti. Jei jums sunku audituoti nutolusius Windows kompiuterius, mes sukūrėme scenarijų, vadinamą test _ windows _ client.vbs. Galite paleisti šį scenarijų <strong>lokaliai</strong> ant atitinkamos mašinos, po pasirašymo kaip vartotojas, kuris yra naudojamas Open- AudIT atlikti auditą. Scenarijus <strong>be pakeitimų</strong> į taikinius. Ji tikrina daugumą (ne visus) toliau išvardytų objektų ir generuoja PASS, FILL ir INFO žymenis įvairioms savybėms. PASTABA - Jei jūsų tikslinės sistemos auditas atliekamas teisingai, neturėtumėte keisti jokių nustatymų. Kai kurie iš toliau išvardytų nėra Windows PC, kurie gali būti audituoti, o kai kurie egzistuoja. Keisti nustatymus tik tuo atveju, jei jūsų atradimai tam tikruose kompiuteriuose neveikia taip, kaip buvo numatyta.';

$GLOBALS["lang"]['On the Tasks List page, click the <i>Add New</i> button to configure a task.'] = 'Užduočių sąrašo puslapyje spustelėkite <i>Pridėti naują</i> Mygtukas užduočiai konfigūruoti.';

$GLOBALS["lang"]['On the field <i>Match String</i> you should provide the name of the software that you want to track. You can use the percent sign (%) as a wildcard in where required.'] = 'Lauke <i>Atitikti eilutę</i> turėtumėte nurodyti programinės įrangos, kurią norite stebėti, pavadinimą. Jei reikia, galite naudoti procentinį ženklą (%) kaip laukinę kortelę.';

$GLOBALS["lang"]['On the next page you will be able to select Access Keys and see your key or create a new key.'] = 'Kitame puslapyje galėsite pasirinkti prieigos raktus ir pamatyti savo raktą arba sukurti naują raktą.';

$GLOBALS["lang"]['On the target Windows PC, run the DCOM utility and verify (or set) the below attributes. Start -> Run, Enter DCOMCNFG and press OK. This will open the DCOMCNFG window.'] = 'Dėl tikslinės Windows PC, paleisti DCOM įrankis ir patikrinti (arba nustatyti) žemiau požymius. Pradžia - > Paleisti, Įveskite DCOMCNFG ir paspauskite Gerai. Tai atvers DCOMCNFG langą.';

$GLOBALS["lang"]['On the top right (underneath the menu bar) you will see several buttons. These allow you to select another dashboard, set the current dashboard as your homepage (if it is not already) and edit the current dashboard (if you have permission).'] = 'Viršuje dešinėje (po meniu juosta) pamatysite keletą mygtukų. Tai leidžia jums pasirinkti kitą prietaisų skydelio, nustatyti esamą prietaisų skydelio kaip savo pagrindinį puslapį (jei jis dar nėra) ir redaguoti esamą prietaisų skydelio (jei turite leidimą).';

$GLOBALS["lang"]['On-Premise, Not Cloud'] = 'Tikimybė, ne debesys';

$GLOBALS["lang"]['Once an Additional Field has been created it can be used in queries and groups just like any other attribute in the database.'] = 'Kai papildomas laukas buvo sukurtas, jis gali būti naudojamas užklausose ir grupėse kaip bet kuris kitas požymis duomenų bazėje.';

$GLOBALS["lang"]['Once commented out, your certificate will be validated, but may also fail this validation if you are using self-signed certificates and have not configured your server correctly.'] = 'Kai komentarai, jūsų sertifikatas bus patvirtintas, bet taip pat gali nepavykti šį patvirtinimą, jei jūs naudojate savarankiškai pasirašytas sertifikatus ir nesukonfigūruoti savo serverį teisingai.';

$GLOBALS["lang"]['Once the script has run on a target, should the script delete itself.'] = 'Kai scenarijus paleisti į tikslą, jei scenarijus ištrinti save.';

$GLOBALS["lang"]['Once those initial queries (snmp, ssh, wmi) are complete, if the device is a supported by the audit scripts (Windows, Linux, OSX, AIX, HP-UX, Solaris and ESXi), the correct audit script will be copied to the target and executed. The audit script will self delete upon completion. The result will be stored on the target machine as an XML file. The Open-AudIT server will then retrieve the result file for processing and delete the result file on the target. The location the audit script is copied to on the target device (at least for SSH audits) is configurable by editing the discovery_linux_script_directory config item. By default it is set to /tmp/. This may need changing if /tmp has noexec set. The result file is then processed and the device details updated within Open-AudIT.'] = 'Kai tie pirminiai užklausos (snmp, ssh, wmi) yra baigtas, jei prietaisas yra palaikoma audito scenarijų (Windows, Linux, OBS, AIX, HP-UX, Solaris ir ESXi), teisingas audito scenarijus bus nukopijuotas į tikslą ir įvykdytas. Baigus auditą, audito scenarijus savaime ištrins. Rezultatai bus saugomi ant tikslinės mašinos kaip XML failas. Open- AudIT serveris tada gaus rezultato failą apdorojimui ir ištrins rezultato failą tiksle. Vieta audito scenarijus nukopijuojamas į tikslinį įrenginį (bent SSH auditų) yra konfigūruojamas redaguojant atradimo _ linux _ script _ katalogo konfigūravimo elementą. Pagal nutylėjimą jis yra nustatytas / tmp /. Tai gali tekti keisti, jei / tmp nėra nustatytas. Rezultato failas apdorojamas ir įrenginio duomenys atnaujinami per Open- AudIT.';

$GLOBALS["lang"]['Once you click the execute button, Open-AudIT will spawn a process to initiate the discovery and return the user to the discovery details page. The newly spawned process takes the configured discovery options and executes Nmap commands to determine the initial list of IP addresses to be scanned (or queries Active Directory if that type is used). Each IP to be scanned is placed into a queue. Once the initial process has completed (and there are IPs to be scanned in the queue) a number of processes will be spawned to further scan each IP in parallel. This number of processes is configurable in the configuration, edit the attribute <i>queue_limit</i>. By default this is set to 20.'] = 'Kai paspausite egzamino mygtuką, Open- AudIT bus paskatinti procesą inicijuoti atradimą ir grąžinti vartotojui atradimo detales puslapyje. Naujai neršiamas procesas atlieka sukonfigūruotas paieškos parinktis ir vykdo Nmap komandas, kad nustatytų pirminį nuskaitytinų IP adresų sąrašą (arba užklausas Active Directory, jei tas tipas yra naudojamas). Kiekvienas nuskaitytinas IP dedamas į eilę. Pasibaigus pradiniam procesui (ir kai kurie IP turi būti skenuojami eilėje), bus paimti keli procesai, kad būtų galima toliau lygiagrečiai skenuoti kiekvieną IP. Šis procesų skaičius konfigūravimui yra konfigūruojamas, redaguoti atributą <i>Eilutė _ limitas</i>. Pagal nutylėjimą tai yra 20.';

$GLOBALS["lang"]['Once you have chosen your devices to edit, click the pencil button on the top right of the table.'] = 'Kai pasirinksite savo prietaisus redaguoti, spustelėkite pieštuką mygtuką viršuje dešinėje lentelės pusėje.';

$GLOBALS["lang"]['Once you have done this, Open-AudIT will attempt to verify your user logon details against the configured Auth Method. If the user has valid credentials and <code>use_authorisation</code> is set, Open-AudIT will ask for the list of groups that the user belongs to. If the user is in the corresponding groups for Open-AudIT Roles and Orgs, those Roles and Orgs will be applied to that user.'] = 'Kai jūs tai padarėte, Open- AudIT bandys patikrinti savo vartotojo registracijos duomenis pagal sukonfigūruotą Auth metodą. Jei vartotojas turi galiojančius įgaliojimus ir <code>use_authorisation</code> yra nustatytas, Open- AudIT paprašys grupių, kurioms vartotojas priklauso sąrašą. Jei vartotojas yra atitinkamų grupių Open- AudIT Roles ir Orgs, tie Roles ir Orgs bus taikomas tam naudotojui.';

$GLOBALS["lang"]['Once you have generated a Baseline Definition you can schedule it to be run against a specified group of devices.'] = 'Kai sukūrėte pradinę apibrėžtį, galite planuoti ją paleisti prieš nurodytą įrenginių grupę.';

$GLOBALS["lang"]['Once you have those items, in Open-AudIT Enterprise you can go to menu -> Discover -> Clouds -> Create Clouds, select the <i>Amazon AWS</i> type and paste them in. Done.'] = 'Kai turite šiuos elementus, Open- AudIT Įmonės galite eiti į meniu - > Atrasti - > Debesys - > Sukurti Debesys, pasirinkite <i>Amazon AWS</i> įveskite ir įklijuokite juos. Baigta.';

$GLOBALS["lang"]['Once you have those items, in Open-AudIT Enterprise you can go to menu -> Discover -> Clouds -> Create Clouds, select the <i>Microsoft Azure</i> type and paste them in. Done.'] = 'Kai turite šiuos elementus, Open- AudIT Įmonės galite eiti į meniu - > Atrasti - > Debesys - > Sukurti Debesys, pasirinkite <i>Microsoft Azure</i> įveskite ir įklijuokite juos. Baigta.';

$GLOBALS["lang"]['Once you have your cloud credentials, it is merely a matter of creating a new cloud and running the discovery - or scheduling first/future discoveries. Make sure you also have the credentials required to log on to your cloud machines, and it is all done for you just like a regular discovery. Credentials for your cloud'] = 'Kai turite savo debesijos duomenis, tai tiesiog yra naujos debesijos sukūrimo ir atradimo valdymo klausimas - arba pirmųjų / būsimų atradimų planavimas. Įsitikinkite, kad jūs taip pat turite duomenis, reikalingus prisijungti prie savo debesijos mašinos, ir visa tai daroma jums tiesiog kaip reguliariai atradimas. Jūsų debesijos kreditai';

$GLOBALS["lang"]['One of <code>3x2</code>, <code>4x2</code>, <code>4x3</code> or <code>4x4</code>.'] = 'Vienas iš <code>3x2</code>, <code>4x2</code>, <code>4x3</code> arba <code>4x4</code>.';

$GLOBALS["lang"]['One of Campus Area Network, Cloud Network, Enterprise Private Network, Home Area Network, Local Area Network, Metropolitan Area Network, Passive Optical Local Area Network, Personal Area Network, Storage-Area Network, System-Area Network, Virtual Private Network, Wide Area Network, Wireless Local Area Network.'] = 'Vienas iš Campus Area Network, Cloud Network, Įmonių privatus tinklas, Pagrindinis Area Network, Metropolitan Area Network, Passive Optical Area Network, Passive Optical Area Network, Personal Area Network, Storage- Area Network, Virtualus Private Network, Wide Local Area Network.';

$GLOBALS["lang"]['One of Development, Disaster Recovery, Evaluation, Pre-Production, Production, Testing, Training, User Acceptance Testing'] = 'Vienas iš plėtros, Nelaimių atkūrimo, Įvertinimas, Išankstinė gamyba, Gamyba, Testavimas, Mokymas, Vartotojo Priėmimas Testavimas';

$GLOBALS["lang"]['One of allocated, delegated, planning, reserved, unallocated, unknown, unmanaged. Defaults to allocated.'] = 'Vienas iš paskirtų, deleguotų, suplanuotų, rezervuotų, nepaskirstytų, nežinomų, nesuvaldytų. Skirtinų įsipareigojimų neįvykdymo atvejų.';

$GLOBALS["lang"]['One of either <code>active directory</code> or <code>openldap</code>.'] = 'Vienas iš šių <code>active directory</code> arba <code>openldap</code>.';

$GLOBALS["lang"]['One of: antivirus, backup, firewall, approved, banned, ignored or other.'] = 'Vienas iš jų: antivirusinis, atsarginis, ugniasienė, patvirtintas, uždraustas, ignoruojamas ar kitas.';

$GLOBALS["lang"]['One other item to be careful of - make sure you use the hostname (or fqdn) of your LDAP Server that matches what is in the certificate (not just the LDAP Servers IP address) when creating the LDAP entry in Open-AudIT.'] = 'Dar vienas punktas, būti atsargūs - įsitikinkite, kad naudojate savo LDAP mazgo vardą (arba fqdn) Serveris, kuris atitinka tai, kas yra sertifikate (ne tik LDAP serverių IP adresas) kuriant LDAP įrašą Open- AudIT.';

$GLOBALS["lang"]['Online Documentation'] = 'Dokumentacija internete';

$GLOBALS["lang"]['Open'] = 'Atverti';

$GLOBALS["lang"]['Open Data'] = 'Atverti duomenis';

$GLOBALS["lang"]['Open Source'] = 'Atvirasis šaltinis';

$GLOBALS["lang"]['Open-AudIT'] = 'Open- AudIT';

$GLOBALS["lang"]['Open-AudIT Community source code is available on GitHub. You are encouraged to inspect any code you have concerns about, and because it is open source - you are also encouraged to ask us about any issues you have or report any findings. We are always more than happy to accept code contributions, vulnerability reports, or even simple questions. We are here to help.<br><br>The audit scripts themselves (Windows, Linux, MacOS, et al) are deliberately written in readable native shell script (VBScript for Windows, Bash for *nix). You can see exactly what commands are run. You can remove any commands you feel you do not need. You can ask a third party to inspect the code for you and (if you want to) report any findings.<br><br>Open-AudIT Enterprise performs the add-on commercial functions for Open-AudIT Community. It is included as a single compiled file with no external dependencies. Where Enterprise itself performs the function(s), if you are concerned with any issues Firstwave is happy to work through them with you - just ask! Try that with another commercial software vendor!'] = 'Open- AudIT Bendrijos šaltinio kodą galima rasti GitHub. Jūs esate skatinami patikrinti visus kodus turite susirūpinimą dėl, ir dėl to, kad tai yra atviras šaltinis - jūs taip pat skatinami paklausti mus apie bet kokius klausimus, kuriuos turite arba pranešti apie bet kokius rezultatus. Mes visada daugiau nei džiaugiamės galėdami priimti kodų įnašus, pažeidžiamumo ataskaitas ar net paprastus klausimus. Mes čia tam, kad padėtume.<br/><br/>Audito scenarijai patys (Windows, Linux, MacOS, et al) yra sąmoningai parašytas nuskaitoma gimtoji apvalkalo scenarijų (VBScript Windows, Bash for * nix). Jūs galite pamatyti, ką komandos veikia. Galite pašalinti visas komandas, kurias manote, kad jums nereikia. Galite paprašyti trečiosios šalies patikrinti kodą jums ir (jei norite) pranešti apie bet kokius rezultatus.<br/><br/>Open- AudIT Įmonė atlieka Open- AudIT bendruomenės komercines funkcijas. Jis įtraukiamas kaip vienas sudėtinis failas be išorinės priklausomybės. Jei įmonė pati atlieka funkciją (-as), jei jums rūpi kokie nors klausimai Firstbanga yra laimingas dirbti per juos su jumis - tiesiog paklausti! Pabandykite tai su kitu komercinės programinės įrangos pardavėjas!';

$GLOBALS["lang"]['Open-AudIT Device Selection'] = 'Open- AudIT įrenginio pasirinkimas';

$GLOBALS["lang"]['Open-AudIT Enterprise has the ability to choose from a pre-defined list of discovery scan options and also to customise individual options per discovery.'] = 'Open- AudIT Įmonė turi galimybę pasirinkti iš anksto nustatyto sąrašo atradimų skenavimo parinktis ir pritaikyti individualias parinktis kiekvienam atradimui.';

$GLOBALS["lang"]['Open-AudIT Enterprise. High-scale flexible discovery and audit solution for large networks. All the features of Professional plus: Baselines, File Auditing, Cloud Discovery, Rack Management, Configurable Role Based Access Control including Active Directory and LDAP.'] = 'AudIT Enterprise. Didelio masto lankstus didelių tinklų paieškos ir audito sprendimas. Visos Profesionalus plius funkcijos: Pagrindai, Failų Auditing, Debesis Discovery, Rack Management, Konfigūruojamas vaidmuo pagrįstas prieigos kontrolė, įskaitant Active Directory ir LDAP.';

$GLOBALS["lang"]['Open-AudIT Field Name'] = 'Open- AudIT lauko pavadinimas';

$GLOBALS["lang"]['Open-AudIT Licenses'] = 'Open- Audit Licences';

$GLOBALS["lang"]['Open-AudIT Options'] = 'Open- AudIT parinktys';

$GLOBALS["lang"]['Open-AudIT Professional and Enterprise include Enhanced Reporting features, including time-based, historical, and muti-query based reporting features in multiple formats.'] = 'Open- AudIT Professional ir Enterprise apima patobulintas ataskaitų teikimo funkcijas, įskaitant laike pagrįstas, istorines, ir muti- užklausa pagrįstas ataskaitų teikimo funkcijas įvairiais formatais.';

$GLOBALS["lang"]['Open-AudIT Professional has the ability to choose from a pre-defined list of discovery scan options, per discovery.'] = 'Open- AudIT Profesionalus turi galimybę pasirinkti iš anksto nustatyto sąrašo atradimų skenavimo parinkčių, per atradimą.';

$GLOBALS["lang"]['Open-AudIT Professional. The worlds'] = 'Open- AudIT Professional. Pasaulis\\';

$GLOBALS["lang"]['Open-AudIT can be configured to use LDAP servers (Microsoft Active Directory and/or OpenLDAP) to authenticate and authorize a user and in addition, to create a user account in Open-AudIT using assigned roles and orgs based on LDAP group membership. It can also use'] = 'Open- Aud IT gali būti konfigūruotas naudoti LDAP serverius (Microsoft Active Directory ir / arba OpenLDAP) patvirtinti ir leisti vartotojui ir be to, sukurti vartotojo sąskaitą Open- AudIT naudojant paskirtus vaidmenis ir orgus, remiantis LDAP grupės naryste. Jis taip pat gali';

$GLOBALS["lang"]['Open-AudIT can be run on your server in your data center. It does not need access to the internet at all. Even the installation on Linux where we use the distribution package manager for our prerequisites can be negated by you using an in-house and security team-approved package repository.<br><br>Open-AudIT does not store any of your data in the cloud. Even licensing information can be provided without having to access the internet from the Open-AudIT server.<br><br>Sure, it is easier to allow it to access the internet to download packages (including security fixes) for your distribution, but that is up to you and your security policies. Open-AudIT does not need the internet.'] = 'Open- Aud IT galima paleisti jūsų serveryje duomenų centre. Jai visiškai nereikia interneto prieigos. Net Linux įrenginio, kur mes naudojame platinimo paketų vadybininkas mūsų prielaidos gali būti paneigti naudojant namo ir apsaugos komanda patvirtintas paketų saugyklos.<br/><br/>Open- Aud IT nesaugo jokių duomenų debesyje. Net licencijavimo informacija gali būti teikiama be prieigos prie interneto iš Open- AudIT serverio.<br/><br/>Žinoma, tai yra lengviau leisti jam prisijungti prie interneto atsisiųsti paketus (įskaitant saugumo pataisas) savo platinimo, bet tai yra iki jūsų ir jūsų saugumo politika. Open- AudIT nereikia interneto.';

$GLOBALS["lang"]['Open-AudIT can download, parse and use NIST CVE Vulnerability reports.'] = 'Open- AudIT galite atsisiųsti, išnagrinėti ir naudoti NIST CVE pažeidžiamumo ataskaitas.';

$GLOBALS["lang"]['Open-AudIT can show in one of several languages. How you can improve this?'] = 'Open- Aud IT gali rodyti viena iš kelių kalbų. Kaip galite tai pagerinti?';

$GLOBALS["lang"]['Open-AudIT can store information in additional fields that are associated with each device.'] = 'Open- Aud IT gali saugoti informaciją papildomuose laukuose, susijusiuose su kiekvienu prietaisu.';

$GLOBALS["lang"]['Open-AudIT can use Microsoft Entra (previously known as Microsoft Azure Active Directory) as an authentication method. This means your user in Open-AudIT can click the Logon using Entra button on the logon page and use their Entra credentials to logon. That user will need to already exist within Open-AudIT (and be assigned'] = 'Open- AudIT gali naudoti "Microsoft Entra" (anksčiau žinomas kaip "Microsoft Azure Active Directory") kaip autentifikavimo metodą. Tai reiškia, kad jūsų vartotojas Open- AudIT gali spustelėkite Prisijungti naudojant Entra mygtuką ant žurnalo puslapyje ir naudoti savo Entra įgaliojimus prisijungti. Kad vartotojas turi jau egzistuoja per Open- AudIT (ir būti priskirtas';

$GLOBALS["lang"]['Open-AudIT can use OKTA as an authentication method. This means your user in Open-AudIT can click the Logon using OKTA button on the logon page and use their OKTA credentials to logon. That user will need to already exist within Open-AudIT (and be assigned Roles and Orgs), but will not need to remember a separate set of logon credentials.'] = 'Open- AudIT gali naudoti OKTA kaip autentifikavimo metodą. Tai reiškia, kad jūsų vartotojas Open- AudIT gali spustelėkite Prisijungti naudojant OKTA mygtuką ant žurnalo puslapyje ir naudoti savo OKTA duomenis prisijungti. Kad vartotojas turės jau egzistuoja per Open- AudIT (ir būti priskirtas Roles ir Orgs), bet nereikės prisiminti atskirą žurnalo įgaliojimus.';

$GLOBALS["lang"]['Open-AudIT comes with many queries inbuilt. If you require a specific query and none of the pre-packaged queries fit your needs, it is quite easy to create a new one and load it into Open-AudIT for running.'] = 'Open- AudIT ateina su daug užklausų nustatytas. Jei jums reikia konkrečią užklausą ir nė vienas iš fasuotų užklausų atitinka jūsų poreikius, tai gana lengva sukurti naują ir įkelti jį į Open- AudIT veikia.';

$GLOBALS["lang"]['Open-AudIT has a JSON Restful API to be used both in the web interface and via JSON requests.'] = 'Open- AudIT turi JSON Atkurti API naudoti tiek Web sąsaja ir per JSON prašymus.';

$GLOBALS["lang"]['Open-AudIT has a granular permissions system to determine what a user within Open-AudIT can do, and the items he can do it to. Open-AudIT can be entirely self-contained, or use Active Directory or OpenLDAP for authentication and/or authorization.<br><br>It is entirely up to the administrator of Open-AudIT how they would like the Role Based Access Control to work.'] = 'Open- Aud IT turi granuliuotą leidimų sistemą nustatyti, ką vartotojas per Open- AudIT gali padaryti, ir elementus, kuriuos jis gali tai padaryti. Open- AudIT gali būti visiškai savarankiškai, arba naudoti Active Directory arba OpenLDAP autentifikavimo ir / arba leidimo.<br/><br/>Tai visiškai Open- AudIT administratorius, kaip jie norėtų vaidmeniu pagrįstą prieigos kontrolės dirbti.';

$GLOBALS["lang"]['Open-AudIT has a powerful change detection engine. Any device attributes that are added, removed or changed will be detected and stored. These changes can be reported upon and the relevant data confirmed as to what was expected from your company change and release process.<br><br>When a device is audited, attributes are divided into sections which correspond to tables in the database.<br><br>Each device (computer, router, printer, et al) has an entry in the <code>devices</code> table. Each entry in the devices table has an <code>id</code> column. This value is unique - it is an auto-incrementing id.<br><br>When the audit result is processed, each item in each section has its audit result compared to what is in the database.<br><br>For each section, if the key columns (see below table) contain the identical values, it is considered already installed and has its <code>last_seen</code> attribute updated. No change_log entry is created.<br><br>If any of the key columns do not match, it is considered a new attribute and is inserted. A <code>change_log</code> entry is created if the device had other attributes already present in the table.<br><br>At the completion of the audit processing, any database items that have not been updated (or inserted) are considered to not be present. The <code>current</code> attribute for this item is set to <i>n</i> and a change_log entry is generated.<br><br>So, we can determine if something is currently installed - the current column is <i>y</i>.<br><br>We can determine when something was initially detected - the <i>first_seen</i>.<br><br>We can determine if something was installed after the initial audit - first seen will be different in the component and device tables.<br><br>We can determine if something is not currently installed, but previously was - current = <i>n</i>.<br><br>We can determine the last time we detected an item - last_seen.<br><br>At any given point, we can determine what was on a system - by using the audit_log table and selecting the relevant components based on first_seen and last_seen.<br><br>Each section and its matching key columns are below.<br><br>NOTE - There are some exceptions as detailed below.<br><br>*1 - For network cards, if the computer is a VMware Esx machine it also uses the net_index and connection columns.<br><br>*2 - For partitions, f the computer is an AIX machine, we use the partition name.'] = 'Open- Aud IT turi galingą pakeitimų aptikimo variklį. Visi įrenginio požymiai, kurie yra pridėti, pašalinti arba pakeisti, bus aptikti ir saugomi. Apie šiuos pakeitimus galima pranešti, o atitinkami duomenys patvirtina tai, ko tikėtasi iš jūsų įmonės pakeitimo ir išleidimo proceso.<br/><br/>Kai prietaiso auditas atliekamas, požymiai skirstomi į sekcijas, atitinkančias duomenų bazės lenteles.<br/><br/>Kiekvienas įrenginys (kompiuteris, maršrutizatorius, spausdintuvas, et al) turi įrašą į <code>devices</code> lentelė. Kiekvienas įrašas prietaisų lentelėje turi <code>id</code> stulpelis. Ši vertė yra unikali - ji yra automatiškai didėjanti id.<br/><br/>Kai audito rezultatas yra apdorojamas, kiekvieno skirsnio punktas turi savo audito rezultatus, palyginti su tuo, kas yra duomenų bazėje.<br/><br/>Jei kiekviename skirsnyje pagrindinės skiltys (žr. žemiau esančią lentelę) yra identiškos reikšmės, jos laikomos jau įdiegtomis ir <code>last_seen</code> atributas atnaujintas. Nekeisti _ žurnalo įrašo nėra.<br/><br/>Jei kuris nors iš raktų stulpelių nesutampa, jis laikomas nauju požymiu ir įterpiamas. A <code>change_log</code> įrašas yra sukurtas, jei įrenginys turi kitų požymių, jau esančių lentelėje.<br/><br/>Baigus auditą, laikoma, kad nėra duomenų bazės elementų, kurie nebuvo atnaujinti (arba įterpti). 4. 4 skyrių). <code>current</code> šio elemento atributas yra nustatytas <i>n</i> ir atsiranda pakeitimo _ žurnalo įrašas.<br/><br/>Taigi, mes galime nustatyti, ar kažkas yra šiuo metu įdiegta - dabartinė stulpelis <i>y</i>.<br/><br/>Mes galime nustatyti, kada kažkas buvo iš pradžių aptikta - <i>pirmas _ matomas</i>.<br/><br/>Mes galime nustatyti, ar kažkas buvo įdiegta po pradinio audito - pirmą kartą matyti bus skirtingi komponentų ir prietaisų lentelėse.<br/><br/>Mes galime nustatyti, ar kažkas nėra šiuo metu įdiegta, bet anksčiau buvo - dabartinė = <i>n</i>.<br/><br/>Mes galime nustatyti, kada paskutinį kartą mes aptikome elementą - paskutinis _ matė.<br/><br/>Bet kuriuo konkrečiu momentu, mes galime nustatyti, kas buvo dėl sistemos - naudojant audito _ log stalo ir pasirenkant atitinkamus komponentus, remiantis pirmasis _ seen ir paskutinis _ see.<br/><br/>Kiekvienas skirsnis ir jo atitikimo raktų stulpeliai yra žemiau.<br/><br/>PASTABA - Yra keletas išimčių, kaip nurodyta toliau.<br/><br/>* 1 - Tinklo kortelėms, jei kompiuteris yra VMware Esx mašina, ji taip pat naudoja tinklo _ indeksą ir ryšio stulpelius.<br/><br/>* 2 - Pertvaroms, jei kompiuteris yra AIX mašina, naudojamas pertvaros pavadinimas.';

$GLOBALS["lang"]['Open-AudIT is a program designed to track and report on your IT and related assets details and configuration. Open-AudIT can tell <i>What is On Your Network?</i>, how it is configured and if there have been any changes. Open-AudIT delivers a sleek, flexible and easy to use platform for device discovery, IT auditing and inventory management automation straight out of the box.'] = 'Open- AudIT yra programa skirta sekti ir pranešti apie savo IT ir susijusių turto detales ir konfigūraciją. Open- AudIT gali pasakyti <i>Kas yra Jūsų tinkle?</i>, kaip ji yra sukonfigūruota ir jei buvo kokių nors pakeitimų. Open- AudIT suteikia aptakus, lankstus ir lengvai naudojamas platforma įrenginių atradimas, IT audito ir atsargų valdymo automatizavimas tiesiai iš dėžutės.';

$GLOBALS["lang"]['Open-AudIT makes it easy to edit the attributes of multiple devices at once.'] = 'Open- Aud IT leidžia lengvai redaguoti daugelio prietaisų atributus vienu metu.';

$GLOBALS["lang"]['Open-AudIT needs specific directory permissions to be able to create files, upload results, etc. Please set as below.'] = 'Open- Aud IT reikia konkrečių katalogų leidimų, kad būtų galima sukurti failus, įkelti rezultatus ir kt. Nustatykite kaip nurodyta toliau.';

$GLOBALS["lang"]['Open-AudIT provides many built-in queries and makes it simple to create your own.'] = 'Open- AudIT suteikia daug statybų- į užklausas ir daro tai paprasta sukurti savo.';

$GLOBALS["lang"]['Open-AudIT ships with inbuilt roles for admin, org_admin and user.<br><br>Generally, a user who is an administrator of the Open-AudIT application itself should have admin and possible org_admin roles.<br><br>A user can have multiple roles. The permission will be applied at the most permissive level - IE, if a user has the roles of user and org_admin, they will be able to create locations because org_admin grants this permission, even though the user role does not.<br><br>The admin role allows access to collections such as configuration, database, groups, ldap servers, logs, queries and roles. Global items that affect the entire application.<br><br>The org_admin role usually allows create, read, update and delete actions for any collection that contains the org_id column. Virtually all data except some of the collections mentioned above will contain an <code>org_id</code> column.<br><br>The user role generally allows read only access to all items with an org_id column.'] = 'Open- Aud IT laivai su įrengtais vaidmenimis admin, org _ admin ir vartotojas.<br/><br/>Paprastai vartotojas, kuris yra pačios Open- AudIT programos administratorius, turėtų turėti admin ir galimų org _ admin vaidmenų.<br/><br/>Vartotojas gali turėti kelis vaidmenis. Leidimas bus taikomas labiausiai varginantis lygis - IE, jei vartotojas turi vartotojo vaidmenis ir org _ admin, jie galės sukurti vietas, nes org _ admin suteikia šį leidimą, nors vartotojo vaidmuo nėra.<br/><br/>Admin vaidmuo suteikia prieigą prie kolekcijų, tokių kaip konfigūracija, duomenų bazė, grupės, ldap serveriai, žurnalai, užklausos ir vaidmenys. Bendro pobūdžio elementai, turintys įtakos visai paraiškai.<br/><br/>org _ admin vaidmuo paprastai leidžia sukurti, skaityti, atnaujinti ir ištrinti veiksmus bet kolekcijoje, kurioje yra org _ id stulpelis. Beveik visi duomenys, išskyrus kai kuriuos iš pirmiau minėtų kolekcijų bus <code>org_id</code> stulpelis.<br/><br/>Vartotojo vaidmuo paprastai leidžia skaityti tik prieigą prie visų elementų su org _ id stulpelis.';

$GLOBALS["lang"]['Open-AudIT ships with inbuilt roles for admin, org_admin and user.<br><br>Generally, a user who is an administrator of the Open-AudIT application itself should have admin and possible org_admin roles.<br><br>A user can have multiple roles. The permission will be applied at the most permissive level - IE, if a user has the roles of user and org_admin, they will be able to create locations because org_admin grants this permission, even though the user role does not.<br><br>The admin role allows access to collections such as configuration, database, groups, ldap servers, logs, queries and roles. Global items that affect the entire application.<br><br>The org_admin role usually allows create, read, update and delete actions for any collection that contains the org_id column. Virtually all data except some of the collections mentioned above will contain an org_id column.<br><br>The user role generally allows read only access to all items with an org_id column.'] = 'Open- Aud IT laivai su įrengtais vaidmenimis admin, org _ admin ir vartotojas.<br/><br/>Paprastai vartotojas, kuris yra pačios Open- AudIT programos administratorius, turėtų turėti admin ir galimų org _ admin vaidmenų.<br/><br/>Vartotojas gali turėti kelis vaidmenis. Leidimas bus taikomas labiausiai varginantis lygis - IE, jei vartotojas turi vartotojo vaidmenis ir org _ admin, jie galės sukurti vietas, nes org _ admin suteikia šį leidimą, nors vartotojo vaidmuo nėra.<br/><br/>Admin vaidmuo suteikia prieigą prie kolekcijų, tokių kaip konfigūracija, duomenų bazė, grupės, ldap serveriai, žurnalai, užklausos ir vaidmenys. Bendro pobūdžio elementai, turintys įtakos visai paraiškai.<br/><br/>org _ admin vaidmuo paprastai leidžia sukurti, skaityti, atnaujinti ir ištrinti veiksmus bet kolekcijoje, kurioje yra org _ id stulpelis. Beveik visi duomenys, išskyrus kai kuriuos pirmiau minėtus rinkinius, turės org _ id stulpelį.<br/><br/>Vartotojo vaidmuo paprastai leidžia skaityti tik prieigą prie visų elementų su org _ id stulpelis.';

$GLOBALS["lang"]['Open-AudIT ships with several pre-configured Dashboards. If you are a Professional user, you can select between two of these and set it as your default page when you logon. If you are an Enterprise user, you can not only select between the five preconfigured Dashboards, but you also have the ability to create your own.'] = 'Open- AudIT laivai su keliais iš anksto sukonfigūruoti prietaisų skydai. Jei esate profesionalus vartotojas, galite pasirinkti tarp dviejų iš jų ir nustatyti jį kaip savo numatytąjį puslapį, kai prisijungsite. Jei esate Enterprise vartotojas, galite ne tik pasirinkti tarp penkių iš anksto sukonfigūruotų Dashboars, bet taip pat turite galimybę sukurti savo.';

$GLOBALS["lang"]['Open-AudIT should be installed on 64bit Windows <strong>Server</strong> systems only. Windows 10 and Windows 11 are <strong>not</strong> supported.'] = 'Open- AudIT turėtų būti įdiegta 64bit Windows <strong>Serveris</strong> tik sistemos. Windows 10 ir Windows 11 yra <strong>nėra</strong> remiamas.';

$GLOBALS["lang"]['Open-AudIT uses Nmap in its Discovery function. Nmap probes devices for open ports. Devices ideally should respond with open for working ports. Devices often do not respond with this. The varying responses are detailed below.'] = 'Open- AudIT naudoja Nmap savo paieškos funkciją. Nmap zondai įrenginiai atviruose uostuose. Įrenginiai turėtų reaguoti su atvira darbo uostuose. Įrenginiai dažnai į tai nereaguoja. Toliau pateikiami skirtingi atsakymai.';

$GLOBALS["lang"]['Open-AudIT uses Nmap in its Discovery function. Without Nmap, Open-AudIT will not function correctly. Every Open-AudIT install assumes Nmap is installed and will also test for it on the Discovery web pages. More information about Open-AudIT and Nmap is available here'] = 'Open- AudIT naudoja Nmap savo paieškos funkciją. Be Nmap, Open- AudIT neveikia teisingai. Kiekvienas Open- AudIT įdiegti mano, Nmap yra įdiegta ir taip pat išbandyti jį Discovery tinklalapiuose. Daugiau informacijos apie Open- AudIT ir Nmap galima rasti čia';

$GLOBALS["lang"]['Open-AudIT uses Nmap in its Discovery function. Without Nmap, Open-AudIT will not function correctly. Every Open-AudIT install assumes Nmap is installed and will test for it on the Discovery web pages.'] = 'Open- AudIT naudoja Nmap savo paieškos funkciją. Be Nmap, Open- AudIT neveikia teisingai. Kiekvienas Open- AudIT įdiegti mano Nmap yra įdiegta ir bus išbandyti jį Discovery tinklalapiuose.';

$GLOBALS["lang"]['Open-AudIT uses credentials to access your devices. These are encrypted and stored, just as you would expect.'] = 'Open- Aud IT naudoja prisijungimo prie jūsų įrenginių duomenis. Jie yra užšifruoti ir saugomi, kaip ir tikėjotės.';

$GLOBALS["lang"]['Open-AudIT was written by an English speaking Australian. Everything in the application uses English wording. However Open-AudIT has always supported multiple languages for display. These translations are not always correct, because the developers do not natively speak the language of every translation offered.<br><br>What can you do if something is not correct in the translation?'] = 'Open- AudIT parašė anglų kalba Australijos. Viskas paraiškoje naudoja anglų kalba. Tačiau Open- AudIT visada palaiko daug kalbų rodyti. Šie vertimai ne visada teisingas, nes kūrėjai ne gimtoji kalba kiekvieno siūlomo vertimo.<br/><br/>Ką galite padaryti, jei vertime kažkas negerai?';

$GLOBALS["lang"]['OpenLDAP'] = 'OpenLDAP';

$GLOBALS["lang"]['OpenScap is Installed'] = 'Įdiegtas OpenScap';

$GLOBALS["lang"]['Opening a Support Ticket?'] = 'Atidarei bilietą?';

$GLOBALS["lang"]['openldap_user_dn'] = 'Openldap Naudotojas Dn';

$GLOBALS["lang"]['Openldap User Dn'] = 'Openldap Naudotojas Dn';

$GLOBALS["lang"]['openldap_user_membership_attribute'] = 'Openldap naudotojo narystės atributas';

$GLOBALS["lang"]['Openldap User Membership Attribute'] = 'Openldap naudotojo narystės atributas';

$GLOBALS["lang"]['open|filtered'] = 'Atvira 124; filtruota';

$GLOBALS["lang"]['Open|filtered'] = 'Atvira 124; filtruota';

$GLOBALS["lang"]['Operating System'] = 'Operacinė sistema';

$GLOBALS["lang"]['Operating System Family Contains'] = 'Operacinės sistemos šeimoje yra';

$GLOBALS["lang"]['Operating Systems'] = 'Veikimo sistemos';

$GLOBALS["lang"]['Operators'] = 'Operatoriai';

$GLOBALS["lang"]['optical'] = 'Optiniai';

$GLOBALS["lang"]['Optical'] = 'Optiniai';

$GLOBALS["lang"]['Optimized'] = 'Optimizuotas';

$GLOBALS["lang"]['Option #1 - Change the data'] = 'Parinktis # 1 - Pakeisti duomenis';

$GLOBALS["lang"]['Option #2 - Change the translation file'] = '2 galimybė - pakeisti vertimo bylą';

$GLOBALS["lang"]['Optional Agent Based Auditing'] = 'Neprivalomas agentas pagrįstas auditas';

$GLOBALS["lang"]['Optional version as audited by Open-AudIT. Use the percent sign % as a wildcard.'] = 'Neprivaloma versija, kurią auditavo Open- AudIT. Naudoti procentinį ženklą% kaip laukinę kortelę.';

$GLOBALS["lang"]['options'] = 'Parinktys';

$GLOBALS["lang"]['Options'] = 'Parinktys';

$GLOBALS["lang"]['Options, options, options'] = 'Galimybės, galimybės, galimybės';

$GLOBALS["lang"]['Or'] = 'Arba';

$GLOBALS["lang"]['Or select from the below fields.'] = 'Arba pasirinkite iš žemiau esančių laukelių.';

$GLOBALS["lang"]['org_descendants'] = 'Org klausytojai';

$GLOBALS["lang"]['Org Descendants'] = 'Org klausytojai';

$GLOBALS["lang"]['org_id'] = 'Org ID';

$GLOBALS["lang"]['Org ID'] = 'Org ID';

$GLOBALS["lang"]['Organisation'] = 'Organizacija';

$GLOBALS["lang"]['organisation'] = 'Organizacija';

$GLOBALS["lang"]['Organisation Descendants'] = 'Organizacijos subjektai';

$GLOBALS["lang"]['Organisations'] = 'Organizacijos';

$GLOBALS["lang"]['Organisations can extend and enhance the level of detail that is stored against every discovered device using custom fields and the open core allows for easy integration into CMDB, event management and ticketing systems.'] = 'Organizacijos gali išplėsti ir padidinti detalumo lygį, kuris saugomas nuo kiekvieno atrado įrenginio naudojant pasirinktinius laukus, o atviras branduolys leidžia lengvai integruoti į CMDB, įvykių valdymo ir bilietų pardavimo sistemas.';

$GLOBALS["lang"]['orgs'] = 'Orgai';

$GLOBALS["lang"]['Orgs'] = 'Orgai';

$GLOBALS["lang"]['Orgs Name'] = 'Orgų pavadinimas';

$GLOBALS["lang"]['Orgs in Open-AudIT are a key item. A user has a primary Org as well as a list of Orgs they can access. A user combines this with a list of assigned roles that define what actions they can take on items assigned to the Orgs they have access to. The combination of a users <i>orgs</i> and <i>roles</i> define what they can and cannot do within Open-AudIT.<br><br>Most items in Open-AudIT are assigned to an Org. Devices, Locations, Networks, etc, etc.<br><br>Orgs can have child Orgs. Think of an organisational chart (tree) structure. If a user has access to a specific Org, most of the time (not always) they also have access to that Orgs descendants.'] = 'Orgai Open- AudIT yra pagrindinis elementas. Vartotojas turi pirminį Org, taip pat sąrašą Orgs jie gali pasiekti. Vartotojas sujungia tai su priskirtųjų vaidmenų sąrašą, kuris nustato, kokių veiksmų jie gali imtis dėl elementų priskirtas Orgs jie turi prieigą prie. Naudotojų derinys <i>orgai</i> ir <i>vaidmenys</i> apibrėžti, ką jie gali ir negali padaryti per Open- AudIT.<br/><br/>Dauguma Open- AudIT elementų yra priskirti Org. Įrenginiai, Vietos, Tinklai ir tt.<br/><br/>Orgai gali turėti vaikų Orgų. Pagalvokite apie organizacinės diagramos (medis) struktūrą. Jei vartotojas turi prieigą prie konkretaus Org, dauguma laiko (ne visada) jie taip pat turi prieigą prie, kad Orgs palikuonys.';

$GLOBALS["lang"]['orientation'] = 'Orientacija';

$GLOBALS["lang"]['Orientation'] = 'Orientacija';

$GLOBALS["lang"]['os'] = 'O';

$GLOBALS["lang"]['Os'] = 'O';

$GLOBALS["lang"]['os_arch'] = 'Os Arch';

$GLOBALS["lang"]['Os Arch'] = 'Os Arch';

$GLOBALS["lang"]['os_bit'] = 'Os bit';

$GLOBALS["lang"]['Os Bit'] = 'Os bit';

$GLOBALS["lang"]['os_cpe'] = 'Os Cpe';

$GLOBALS["lang"]['Os Cpe'] = 'Os Cpe';

$GLOBALS["lang"]['os_display_version'] = 'Name';

$GLOBALS["lang"]['Os Display Version'] = 'Name';

$GLOBALS["lang"]['os_family'] = 'O šeima';

$GLOBALS["lang"]['Os Family'] = 'O šeima';

$GLOBALS["lang"]['os_group'] = 'O grupė';

$GLOBALS["lang"]['Os Group'] = 'O grupė';

$GLOBALS["lang"]['os_installation_date'] = 'Os įrengimo data';

$GLOBALS["lang"]['Os Installation Date'] = 'Os įrengimo data';

$GLOBALS["lang"]['os_licence_expiry'] = 'O licencijos galiojimo pabaiga';

$GLOBALS["lang"]['Os Licence Expiry'] = 'O licencijos galiojimo pabaiga';

$GLOBALS["lang"]['os_license'] = 'O licencija';

$GLOBALS["lang"]['Os License'] = 'O licencija';

$GLOBALS["lang"]['os_license_code'] = 'Įsipareigojimų licencijos kodas';

$GLOBALS["lang"]['Os License Code'] = 'Įsipareigojimų licencijos kodas';

$GLOBALS["lang"]['os_license_mode'] = 'Os Licence veiksena';

$GLOBALS["lang"]['Os License Mode'] = 'Os Licence veiksena';

$GLOBALS["lang"]['os_license_type'] = 'O licencijos tipas';

$GLOBALS["lang"]['Os License Type'] = 'O licencijos tipas';

$GLOBALS["lang"]['os_name'] = 'O pavadinimas';

$GLOBALS["lang"]['Os Name'] = 'O pavadinimas';

$GLOBALS["lang"]['os_version'] = 'Os versija';

$GLOBALS["lang"]['Os Version'] = 'Os versija';

$GLOBALS["lang"]['Other'] = 'Kita';

$GLOBALS["lang"]['Other than that restriction, you are free to select attributes as required. It is a good idea to use the menu'] = 'Išskyrus tą apribojimą, Jūs galite pasirinkti požymius, kaip reikalaujama. Gera mintis naudoti meniu';

$GLOBALS["lang"]['Others'] = 'Kita';

$GLOBALS["lang"]['Our default Integration also enables a discovery on any externally supplied devices. So we ship a default discovery for the Default Integration out of the box. These use the default matching rules, but also enable matching on IP address.'] = 'Mūsų numatytoji integracija taip pat leidžia atrasti bet kokius iš išorės tiekiamus įrenginius. Taigi mes siunčiame numatytąjį atradimą numatytajai integracijai iš dėžutės. Jie naudoja numatytąsias derinimo taisykles, tačiau taip pat leidžia suderinti IP adresą.';

$GLOBALS["lang"]['Our examples will use the <i>type</i> column.'] = 'Mūsų pavyzdžiai bus panaudoti <i>tipas</i> stulpelis.';

$GLOBALS["lang"]['Our framework uploads files here for processing, then deletes them. Think submitted audit results, etc.'] = 'Mūsų sistema įkelia failus čia apdoroti, tada ištrina juos. Pagalvokite apie pateiktus audito rezultatus ir t. t.';

$GLOBALS["lang"]['Our goal with the initial integrations release was specifically for NMIS to Open-AudIT integration to <i>just work</i>. If you are using the programs on Linux, you can literally click a single button to execute the integration. Nothing more is required. Having said that, the integration itself is extremely configurable - so if something is not to your preference, it can easily be changed.'] = 'Mūsų tikslas su pradiniu integracijos išleidimo buvo specialiai NMIS Open- AudIT integracija į <i>Tik darbas</i>. Jei naudojate Linux programos, galite pažodžiui paspausti vieną mygtuką integracijos vykdymui. Daugiau nieko nereikia. Atsižvelgiant į tai, pati integracija yra labai konfigūruojama - todėl, jei kas nors nėra jūsų pageidavimui, ji gali būti lengvai pakeista.';

$GLOBALS["lang"]['Our new feature called Vulnerabilities gives you the ability to quickly determine if any devices are affected by any CVE (Common Vulnerability Exposure) - but how?<br><br>FirstWave constantly consumes the output from the Nist NVD feed. We take this and apply a few restrictions, then extract the affected programs and build a SQL query for reporting. Your Open-AudIT instance reaches out to FirstWave and requests any new vulnerabilities on a regular basis. When it receives a new vulnerability record, it is run against the database and the result stored. Each time a device is processed, all matching vulnerabilities are again executed and the result stored. This means when viewing a vulnerability list, we do not need to calculate all affected devices - we already have the result. When you view an individual vulnerability record, we do indeed recalculate the result for this singular vulnerability.<br><br>So, you are always up to date!<br><br>In addition to this, we also calculate the result of all vulnerabilities for all devices daily (usually at a quiet time, say 2am).<br><br>In your instance of Open-AudIT, we allow you to select which vendors you care about. i.e. there is no use retrieving vulnerability records from a vendor whose software you do not use or have installed. By default, our vendor list is Adobe, Apple, Cisco, Google, Microsoft, Mozilla, and Redhat.<br><br>This all sounds very simple, but behind the scenes a <b>lot</b> is going on. For instance, the CVE record contains a list of affected software - but those software names do not match what we receive when we audit a computer. A good example is Apache. Typically, a CVE record will say the affected software is http_server. In reality, this appears as apache2 (Ubuntu), httpd (Redhat), Apache HTTP Server (Windows) - and others. So, we have to first determine what is the actual name of the program we receive when we ask a computer, and there may be multiple names. After that we must parse the CVE record and create a matching SQL statement. Allowing for multiple program names as above, and multiple versions, version ranges, and even multiple different pieces of software (an example is Thunderbird and Firefox in a single CVE). And your instance of Open-AudIT must take this and apply Orgs filtering as well. And that is just a single CVE. What about determining which CVEs you have and do not have? What about adding a vendor to the list later? So many things to consider!<br><br>As well as the usual reporting, we also have a few new widgets available for Dashboards, based on Vulnerabilities data.'] = 'Mūsų naujas bruožas vadinamas Pažeidžiamumas suteikia jums galimybę greitai nustatyti, ar kurie nors prietaisai yra paveikti bet CVE (bendras pažeidžiamumo poveikis) - bet kaip?<br/><br/>FirstWave nuolat suvartoja produkciją iš Nist NVD pašarų. Mes imtis tai ir taikyti keletą apribojimų, tada išgauti paveiktas programas ir sukurti SQL užklausą ataskaitų. Jūsų Open- AudIT instancija pasiekia FirstWave ir reikalauja bet kokių naujų pažeidžiamumo reguliariai. Kai jis gauna naują pažeidžiamumo įrašą, jis veikia prieš duomenų bazę ir rezultatas saugomi. Kiekvieną kartą, kai įrenginys apdorojamas, visi atitikimo pažeidžiamumą vėl vykdomas ir rezultatas saugomi. Tai reiškia, kad kai žiūrime į pažeidžiamumo sąrašą, mums nereikia skaičiuoti visų paveiktų prietaisų - mes jau turime rezultatą. Kai žiūrite individualų pažeidžiamumą, mes iš tiesų perskaičiuojame šio pavienio pažeidžiamumo rezultatą.<br/><br/>Taigi, jūs visada naujausi!<br/><br/>Be to, mes taip pat apskaičiuoti visų pažeidžiamumą visų prietaisų kasdien rezultatas (paprastai ramiu laiku, tarkim 2am).<br/><br/>Jūsų atveju Open- AudIT, mes leidžiame jums pasirinkti, kurie pardavėjai jums rūpi. t. y. nėra jokios galimybės gauti pažeidžiamumo įrašus iš pardavėjo, kurio programinė įranga nenaudojama arba neįdiegta. Pagal nutylėjimą mūsų pardavėjų sąrašas yra Adobe, Apple, Cisco, Google, Microsoft, Mozilla ir Redhat.<br/><br/>Visa tai skamba labai paprasta, bet už scenų <b>partija</b> Vyksta. Pavyzdžiui, CVE įraše yra paveiktos programinės įrangos sąrašas - bet tie programinės įrangos pavadinimai neatitinka to, ką gauname audituodami kompiuterį. Geras pavyzdys yra Apache. Paprastai CVE įrašas pasakys, kad paveikta programinė įranga yra http _ server. Iš tikrųjų, tai atrodo kaip Apache2 (Ubuntu), "Pd (Redhat), Apache HTTP Server (Windows) - ir kiti. Taigi, mes pirmiausia turime nustatyti, kas yra tikrasis pavadinimas programos mes gauname, kai mes prašome kompiuterio, ir gali būti keletas pavadinimai. Po to mes turime išnagrinėti CVE įrašą ir sukurti atitinkamą SQL pareiškimą. Leidžia kelis programų pavadinimus, kaip pirmiau, ir daug versijų, versijų intervalai, ir net daug skirtingų vienetų programinės įrangos (pavyzdys yra Thunderbird ir Firefox į vieną CVE). Ir jūsų pavyzdys Open- AudIT turi imtis ir taikyti Orgs filtravimo taip pat. Ir tai tik viena CVE. O kaip nustatyti, kuriuos KGV turite ir neturite? O kaip dėl pardavėjo įtraukimo į sąrašą vėliau? Tiek daug ką apsvarstyti!<br/><br/>Kaip ir įprasta ataskaita, mes taip pat turime keletą naujų raštai prieinama Dashboars, remiantis pažeidžiamumo duomenis.';

$GLOBALS["lang"]['Our timeout for a SSH response'] = 'Mūsų laiko limitas SSH atsakymui';

$GLOBALS["lang"]['Our timeout for a WMI response'] = 'Mūsų laiko limitas WMI atsakymui';

$GLOBALS["lang"]['Our timeout for an SNMP response'] = 'Mūsų laiko limitas SNMP atsakymui';

$GLOBALS["lang"]['Our timeout for an audit script response'] = 'Mūsų laiko limitas audito scenarijaus atsakymui';

$GLOBALS["lang"]['output'] = 'Išvestis';

$GLOBALS["lang"]['Output'] = 'Išvestis';

$GLOBALS["lang"]['outputs'] = 'Išvestis';

$GLOBALS["lang"]['Outputs'] = 'Išvestis';

$GLOBALS["lang"]['Overall severity score (0–10).'] = 'Bendras sunkumo balas (0- 10).';

$GLOBALS["lang"]['overwrite'] = 'Perrašyti';

$GLOBALS["lang"]['Overwrite'] = 'Perrašyti';

$GLOBALS["lang"]['owner'] = 'Savininkas';

$GLOBALS["lang"]['Owner'] = 'Savininkas';

$GLOBALS["lang"]['PAExec is a freely-redistributable re-implementation of SysInternal/Microsofts popular PsExec program.  PAExec aims to be a drop in replacement for PsExec, so the command-line usage is identical, with additional options also supported.  This work was originally inspired by Talha Tariqs RemCom.'] = 'PAExec yra laisvai perskirstomas rerealizavimas SysVital / Microsofts populiarus PsExec programa. PAExec siekia būti pakeitimo PsExec, todėl commandiline naudojimas yra identiškas, su papildomomis galimybėmis taip pat palaiko. Šį darbą iš pradžių įkvėpė Talha Tariqs RemCom.';

$GLOBALS["lang"]['PHP'] = 'PHP';

$GLOBALS["lang"]['POD'] = 'POD';

$GLOBALS["lang"]['POSTing data'] = 'Siunčiamieji duomenys';

$GLOBALS["lang"]['Package'] = 'Paketas';

$GLOBALS["lang"]['packages'] = 'Pakuotės';

$GLOBALS["lang"]['Packages'] = 'Pakuotės';

$GLOBALS["lang"]['Packages are used to report on things such as <i>banned software</i>, AntiVirus on servers, etc.<br><br>Open-AudIT provides widgets that build upon also supplied repots to detemine the status of antivirus, firewall and other software.'] = 'Paketai yra naudojami pranešti apie tokius dalykus kaip <i>uždrausta programinė įranga</i>, Antivirusas serveriuose ir kt.<br/><br/>Open- AudIT suteikia raštai, kad sukurti taip pat tiekiamas repots detemine antivirusinių, ugniasienės ir kitos programinės įrangos statusą.';

$GLOBALS["lang"]['pagefile'] = 'Puslapio failas';

$GLOBALS["lang"]['Pagefile'] = 'Puslapio failas';

$GLOBALS["lang"]['Pakistan'] = 'Pakistanas';

$GLOBALS["lang"]['Palau'] = 'Palau';

$GLOBALS["lang"]['Palestinian Territory'] = 'Palestinos teritorija';

$GLOBALS["lang"]['Panama'] = 'Panama';

$GLOBALS["lang"]['Papua New Guinea'] = 'Papua Naujoji Gvinėja';

$GLOBALS["lang"]['Paraguay'] = 'Paragvajus';

$GLOBALS["lang"]['Parameters'] = 'Parametrai';

$GLOBALS["lang"]['Paranoid'] = 'Paranojikas';

$GLOBALS["lang"]['Parent'] = 'Tėvai';

$GLOBALS["lang"]['parent_id'] = 'Pirminio ID';

$GLOBALS["lang"]['Parent ID'] = 'Pirminio ID';

$GLOBALS["lang"]['parent_name'] = 'Tėvų vardas';

$GLOBALS["lang"]['Parent Name'] = 'Tėvų vardas';

$GLOBALS["lang"]['part_number'] = 'Dalies numeris';

$GLOBALS["lang"]['Part Number'] = 'Dalies numeris';

$GLOBALS["lang"]['part_of_domain'] = 'Srities dalis';

$GLOBALS["lang"]['Part Of Domain'] = 'Srities dalis';

$GLOBALS["lang"]['Partition'] = 'Skirstymas';

$GLOBALS["lang"]['partition_count'] = 'Skaidinių skaičius';

$GLOBALS["lang"]['Partition Count'] = 'Skaidinių skaičius';

$GLOBALS["lang"]['partition_disk_index'] = 'Pasiskirstymo indeksas';

$GLOBALS["lang"]['Partition Disk Index'] = 'Pasiskirstymo indeksas';

$GLOBALS["lang"]['Pass'] = 'Praeiti';

$GLOBALS["lang"]['Passed'] = 'Pravažiuota';

$GLOBALS["lang"]['Passive Optical Local Area Network'] = 'Pasyvusis optinis vietinis tinklas';

$GLOBALS["lang"]['Password'] = 'Slaptažodis';

$GLOBALS["lang"]['password'] = 'Slaptažodis';

$GLOBALS["lang"]['password_changeable'] = 'Slaptažodis keičiamas';

$GLOBALS["lang"]['Password Changeable'] = 'Slaptažodis keičiamas';

$GLOBALS["lang"]['password_disabled'] = 'Slaptažodis išjungtas';

$GLOBALS["lang"]['Password Disabled'] = 'Slaptažodis išjungtas';

$GLOBALS["lang"]['password_expires'] = 'Slaptažodis baigiasi';

$GLOBALS["lang"]['Password Expires'] = 'Slaptažodis baigiasi';

$GLOBALS["lang"]['password_last_changed'] = 'Slaptažodis paskutinį kartą pakeistas';

$GLOBALS["lang"]['Password Last Changed'] = 'Slaptažodis paskutinį kartą pakeistas';

$GLOBALS["lang"]['password_required'] = 'Reikalingas slaptažodis';

$GLOBALS["lang"]['Password Required'] = 'Reikalingas slaptažodis';

$GLOBALS["lang"]['patch_panel'] = 'Patch skydelis';

$GLOBALS["lang"]['Patch Panel'] = 'Patch skydelis';

$GLOBALS["lang"]['patch_panel_port'] = 'Patch Panel prievadas';

$GLOBALS["lang"]['Patch Panel Port'] = 'Patch Panel prievadas';

$GLOBALS["lang"]['path'] = 'Kelias';

$GLOBALS["lang"]['Path'] = 'Kelias';

$GLOBALS["lang"]['Performance'] = 'Veikla';

$GLOBALS["lang"]['Performed'] = 'Perforuotas';

$GLOBALS["lang"]['Permission'] = 'Leidimas';

$GLOBALS["lang"]['Permission Required'] = 'Reikalingas leidimas';

$GLOBALS["lang"]['permissions'] = 'Leidimai';

$GLOBALS["lang"]['Permissions'] = 'Leidimai';

$GLOBALS["lang"]['Persian'] = 'Persų';

$GLOBALS["lang"]['Personal Area Network'] = 'Asmeninės erdvės tinklas';

$GLOBALS["lang"]['Personal area network'] = 'Asmeninis tinklas';

$GLOBALS["lang"]['Peru'] = 'Peru';

$GLOBALS["lang"]['Philippines'] = 'Filipinai';

$GLOBALS["lang"]['phone'] = 'Telefonas';

$GLOBALS["lang"]['Phone'] = 'Telefonas';

$GLOBALS["lang"]['Physical CPUs'] = 'Fiziniai procesoriai';

$GLOBALS["lang"]['physical_count'] = 'Fizinis skaičius';

$GLOBALS["lang"]['Physical Count'] = 'Fizinis skaičius';

$GLOBALS["lang"]['physical_depth'] = 'Fizinis gylis';

$GLOBALS["lang"]['Physical Depth'] = 'Fizinis gylis';

$GLOBALS["lang"]['physical_height'] = 'Fizinis aukštis';

$GLOBALS["lang"]['Physical Height'] = 'Fizinis aukštis';

$GLOBALS["lang"]['physical_width'] = 'Fizinis plotis';

$GLOBALS["lang"]['Physical Width'] = 'Fizinis plotis';

$GLOBALS["lang"]['picture'] = 'Paveikslėlis';

$GLOBALS["lang"]['Picture'] = 'Paveikslėlis';

$GLOBALS["lang"]['pid'] = 'Pid';

$GLOBALS["lang"]['Pid'] = 'Pid';

$GLOBALS["lang"]['Pie Chart'] = 'Comment';

$GLOBALS["lang"]['Pie charts must return name or my_name, description or my_description and count.'] = 'Pie diagramos turi grąžinti vardą arba mano _ vardas, aprašymas arba mano _ aprašymas ir skaičius.';

$GLOBALS["lang"]['ping'] = 'Ping';

$GLOBALS["lang"]['Ping'] = 'Ping';

$GLOBALS["lang"]['Ping Target'] = 'Ping Target';

$GLOBALS["lang"]['Pitcairn Islands'] = 'Pitkerno salos';

$GLOBALS["lang"]['placement'] = 'Vieta';

$GLOBALS["lang"]['Placement'] = 'Vieta';

$GLOBALS["lang"]['Plan and conduct internal audits'] = 'Planuoti ir atlikti vidaus auditą';

$GLOBALS["lang"]['Please have an Open-AudIT administrator logon and upgrade the database.'] = 'Prašome turėti Open- AudIT administratoriaus logotipą ir atnaujinti duomenų bazę.';

$GLOBALS["lang"]['Please log in and change these ASAP.'] = 'Prašome prisijungti ir pakeisti šiuos ASAP.';

$GLOBALS["lang"]['Please log on to the Open-AudIT Server (either Windows or Linux) and run <code>nslookup IP_ADDRESS_OF_TARGET</code> in the command prompt or shell. It must be able to resolve the IP to a name.'] = 'Prašome prisijungti prie Open- AudIT serverio (arba Windows arba Linux) ir paleisti <code>nslookup IP_ADDRESS_OF_TARGET</code> komandoje arba apvalkale. Ji turi sugebėti išspręsti TL iki pavadinimo.';

$GLOBALS["lang"]['Please note that the select box will override the text input box.'] = 'Atkreipkite dėmesį, kad pažymėtasis langelis bus virš teksto įvesties laukelio.';

$GLOBALS["lang"]['Please see the FAQ'] = 'Žr. DUK';

$GLOBALS["lang"]['Please send all three files to your support contact at Opmantek and describe your issue.'] = 'Prašome siųsti visus tris failus į savo palaikymo kontaktą "Opmantek" ir apibūdinti savo problemą.';

$GLOBALS["lang"]['Please set using'] = 'Prašome nustatyti naudojant';

$GLOBALS["lang"]['Please visit the homepage at'] = 'Prašome apsilankyti pagrindiniame puslapyje';

$GLOBALS["lang"]['pod'] = 'Pod';

$GLOBALS["lang"]['Pod'] = 'Pod';

$GLOBALS["lang"]['Poland'] = 'Lenkija';

$GLOBALS["lang"]['Policies'] = 'Politika';

$GLOBALS["lang"]['Policies have exceptions.'] = 'Politikoje yra išimčių.';

$GLOBALS["lang"]['policy'] = 'Politika';

$GLOBALS["lang"]['Policy'] = 'Politika';

$GLOBALS["lang"]['policy_id'] = 'Politikos ID';

$GLOBALS["lang"]['Policy ID'] = 'Politikos ID';

$GLOBALS["lang"]['Policy Result'] = 'Politikos rezultatas';

$GLOBALS["lang"]['Policy Results'] = 'Politikos rezultatai';

$GLOBALS["lang"]['Polish'] = 'Lenkų';

$GLOBALS["lang"]['Polite'] = 'Politas';

$GLOBALS["lang"]['Populate the with values provided below:'] = 'Išpopuliarinti toliau pateiktas vertes:';

$GLOBALS["lang"]['Populated by audit.'] = 'Audito metu.';

$GLOBALS["lang"]['Populated by discovery and audit.'] = 'Vadovaujama atradimų ir audito.';

$GLOBALS["lang"]['Populated dynamically.'] = 'Dinamiškai pagausėjo.';

$GLOBALS["lang"]['Populated from DNS.'] = 'Pagamintas iš DNS.';

$GLOBALS["lang"]['Populated from SNMP discovery.'] = 'Išreikšta iš SNMP atradimo.';

$GLOBALS["lang"]['Populated from device audits.'] = 'Įrenginio auditų metu patvirtintas pavadinimas.';

$GLOBALS["lang"]['Populated from hostname.'] = 'Iš mazgo pavadinimo.';

$GLOBALS["lang"]['Populated from machine-id on Linux.'] = 'Pagamintas iš mašinos-id ant Linux.';

$GLOBALS["lang"]['Populated from the IP for the default route or the IP detected in discovery.'] = 'Iš IP paimtas numatytasis maršrutas arba aptiktas IP.';

$GLOBALS["lang"]['Populated from the hostname command.'] = 'Pagaminta iš hostname komandos.';

$GLOBALS["lang"]['Populated with additional data from the external system, in a JSON representation.'] = 'Su papildomais duomenimis iš išorės sistemos, JSON atstovavimas.';

$GLOBALS["lang"]['port'] = 'Uostas';

$GLOBALS["lang"]['Port'] = 'Uostas';

$GLOBALS["lang"]['port_name'] = 'Uosto pavadinimas';

$GLOBALS["lang"]['Port Name'] = 'Uosto pavadinimas';

$GLOBALS["lang"]['port_number'] = 'Uosto numeris';

$GLOBALS["lang"]['Port Number'] = 'Uosto numeris';

$GLOBALS["lang"]['ports_in_order'] = 'Uostai pagal tvarką';

$GLOBALS["lang"]['Ports In Order'] = 'Uostai pagal tvarką';

$GLOBALS["lang"]['ports_stop_after'] = 'Uostai sustoja po';

$GLOBALS["lang"]['Ports Stop After'] = 'Uostai sustoja po';

$GLOBALS["lang"]['Portugal, Portuguese Republic'] = 'Portugalija, Portugalijos Respublika';

$GLOBALS["lang"]['Portuguese'] = 'Portugalų';

$GLOBALS["lang"]['Portuguese (Brazil)'] = 'Portugalų (Brazilija)';

$GLOBALS["lang"]['position'] = 'Padėtis';

$GLOBALS["lang"]['Position'] = 'Padėtis';

$GLOBALS["lang"]['Post-Certification'] = 'Sertifikavimas po sertifikavimo';

$GLOBALS["lang"]['postcode'] = 'Pašto kodas';

$GLOBALS["lang"]['Postcode'] = 'Pašto kodas';

$GLOBALS["lang"]['power_circuit'] = 'Galios grandinė';

$GLOBALS["lang"]['Power Circuit'] = 'Galios grandinė';

$GLOBALS["lang"]['power_sockets'] = 'Maitinimo lizdai';

$GLOBALS["lang"]['Power Sockets'] = 'Maitinimo lizdai';

$GLOBALS["lang"]['Predictable'] = 'Numatomas';

$GLOBALS["lang"]['Preferences'] = 'Nustatymai';

$GLOBALS["lang"]['Prepare for recertification every 3 years'] = 'Pasirengti pakartotiniam atestavimui kas 3 metus';

$GLOBALS["lang"]['Prerequisites'] = 'Išankstinės sąlygos';

$GLOBALS["lang"]['Prerequisites and Tests'] = 'Būtinos sąlygos ir bandymai';

$GLOBALS["lang"]['present'] = 'Dabartis';

$GLOBALS["lang"]['Present'] = 'Dabartis';

$GLOBALS["lang"]['previous_value'] = 'Ankstesnė vertė';

$GLOBALS["lang"]['Previous Value'] = 'Ankstesnė vertė';

$GLOBALS["lang"]['primary'] = 'Pradinis';

$GLOBALS["lang"]['Primary'] = 'Pradinis';

$GLOBALS["lang"]['Primary Key'] = 'Pirminis raktas';

$GLOBALS["lang"]['print_queue'] = 'Spausdinti eilę';

$GLOBALS["lang"]['Print Queue'] = 'Spausdinti eilę';

$GLOBALS["lang"]['printer_color'] = 'Spausdintuvo spalva';

$GLOBALS["lang"]['Printer Color'] = 'Spausdintuvo spalva';

$GLOBALS["lang"]['printer_duplex'] = 'Spausdintuvas';

$GLOBALS["lang"]['Printer Duplex'] = 'Spausdintuvas';

$GLOBALS["lang"]['printer_port_name'] = 'Spausdintuvo uosto pavadinimas';

$GLOBALS["lang"]['Printer Port Name'] = 'Spausdintuvo uosto pavadinimas';

$GLOBALS["lang"]['printer_shared'] = 'Spausdintuvo bendrinimas';

$GLOBALS["lang"]['Printer Shared'] = 'Spausdintuvo bendrinimas';

$GLOBALS["lang"]['printer_shared_name'] = 'Spausdintuvo bendrinis pavadinimas';

$GLOBALS["lang"]['Printer Shared Name'] = 'Spausdintuvo bendrinis pavadinimas';

$GLOBALS["lang"]['priority'] = 'Prioritetas';

$GLOBALS["lang"]['Priority'] = 'Prioritetas';

$GLOBALS["lang"]['Privacy Passphrase'] = 'Privatumo slaptafrazė';

$GLOBALS["lang"]['Privacy Protocol'] = 'Privatumo protokolas';

$GLOBALS["lang"]['privileges_required'] = 'Reikalaujamos privilegijos';

$GLOBALS["lang"]['Privileges Required'] = 'Reikalaujamos privilegijos';

$GLOBALS["lang"]['processor'] = 'Procesorius';

$GLOBALS["lang"]['Processor'] = 'Procesorius';

$GLOBALS["lang"]['processor_count'] = 'Procesoriaus skaičius';

$GLOBALS["lang"]['Processor Count'] = 'Procesoriaus skaičius';

$GLOBALS["lang"]['processor_slot_count'] = 'Procesoriaus lizdų skaičius';

$GLOBALS["lang"]['Processor Slot Count'] = 'Procesoriaus lizdų skaičius';

$GLOBALS["lang"]['processor_type'] = 'Procesoriaus tipas';

$GLOBALS["lang"]['Processor Type'] = 'Procesoriaus tipas';

$GLOBALS["lang"]['Processors'] = 'Perdirbėjai';

$GLOBALS["lang"]['product_name'] = 'Produkto pavadinimas';

$GLOBALS["lang"]['Product Name'] = 'Produkto pavadinimas';

$GLOBALS["lang"]['Product Name Match from CPE: '] = 'Produkto pavadinimas Atitiktis iš CPE: ';

$GLOBALS["lang"]['products'] = 'Produktai';

$GLOBALS["lang"]['Products'] = 'Produktai';

$GLOBALS["lang"]['Professional'] = 'Profesionalus';

$GLOBALS["lang"]['profile'] = 'Profilis';

$GLOBALS["lang"]['Profile'] = 'Profilis';

$GLOBALS["lang"]['program'] = 'Programa';

$GLOBALS["lang"]['Program'] = 'Programa';

$GLOBALS["lang"]['Properties'] = 'Savybės';

$GLOBALS["lang"]['Proprietary. If you want to modify HighCharts you may require a'] = 'Patentuota. Jei norite keisti HighCharts jums gali prireikti';

$GLOBALS["lang"]['Protects confidentiality, integrity, and availability of information'] = 'Apsaugo informacijos konfidencialumą, vientisumą ir prieinamumą';

$GLOBALS["lang"]['protocol'] = 'Protokolas';

$GLOBALS["lang"]['Protocol'] = 'Protokolas';

$GLOBALS["lang"]['Provide a description and select and expires duration.'] = 'Pateikite aprašymą, pasirinkite ir baigsime galioti.';

$GLOBALS["lang"]['Provide a name - we humbly recommand Open-AudIT &#128512;, but you can name it anything you like.<br>From the Open-AudIT form, copy the value for the <i>Redirect URI</i> field and paste it into the <i>Sign-in redirect URIs</i> field in OKTA.<br>The Sign-out redirect URIs is optional, but if you want you can use open-audit/index.php/logout with your Open-AudIT servers http address, as per the screenshot.<br>Normally your Open-AudIT URL will look something like'] = 'Pateikite vardą - mes nuolankiai perkvalifikuoti Open- Audit ®, bet jūs galite jį pavadinti viską, kas jums patinka.<br/>Iš Open- AudIT formos nukopijuokite vertę <i>Grąžinti URI</i> ir įklijuoti į <i>Signalas nukreipimo URI</i> laukas OKTA.<br/>Sign- out nukreipti URI yra neprivalomas, bet jei norite, galite naudoti open- audit / index. php / išsiregistruoti su savo Open- AudIT serverių http adresas, kaip per ekrano.<br/>Paprastai Open- AudIT URL atrodys kažkas panašaus';

$GLOBALS["lang"]['Provided you have the correct credentials, Device Seed Discovery works as follows'] = 'Jei turite teisingus įgaliojimus, Įrenginys Seed Discovery veikia taip:';

$GLOBALS["lang"]['provider'] = 'Tiekėjas';

$GLOBALS["lang"]['Provider'] = 'Tiekėjas';

$GLOBALS["lang"]['published'] = 'Paskelbta';

$GLOBALS["lang"]['Published'] = 'Paskelbta';

$GLOBALS["lang"]['published_date'] = 'Paskelbta data';

$GLOBALS["lang"]['Published Date'] = 'Paskelbta data';

$GLOBALS["lang"]['publisher'] = 'Leidėjas';

$GLOBALS["lang"]['Publisher'] = 'Leidėjas';

$GLOBALS["lang"]['Puerto Rico'] = 'Puerto Rikas';

$GLOBALS["lang"]['Purchase'] = 'Pirkimas';

$GLOBALS["lang"]['purchase_amount'] = 'Pirkimo suma';

$GLOBALS["lang"]['Purchase Amount'] = 'Pirkimo suma';

$GLOBALS["lang"]['purchase_cost_center'] = 'Pirkimo išlaidų centras';

$GLOBALS["lang"]['Purchase Cost Center'] = 'Pirkimo išlaidų centras';

$GLOBALS["lang"]['purchase_count'] = 'Pirkimų skaičius';

$GLOBALS["lang"]['Purchase Count'] = 'Pirkimų skaičius';

$GLOBALS["lang"]['purchase_date'] = 'Pirkimo data';

$GLOBALS["lang"]['Purchase Date'] = 'Pirkimo data';

$GLOBALS["lang"]['purchase_invoice'] = 'Pirkimo sąskaita faktūra';

$GLOBALS["lang"]['Purchase Invoice'] = 'Pirkimo sąskaita faktūra';

$GLOBALS["lang"]['purchase_order'] = 'Pirkimo užsakymas';

$GLOBALS["lang"]['Purchase Order'] = 'Pirkimo užsakymas';

$GLOBALS["lang"]['purchase_order_number'] = 'Pirkimo užsakymo numeris';

$GLOBALS["lang"]['Purchase Order Number'] = 'Pirkimo užsakymo numeris';

$GLOBALS["lang"]['purchase_service_contract_number'] = 'Pirkimo paslaugų sutarties numeris';

$GLOBALS["lang"]['Purchase Service Contract Number'] = 'Pirkimo paslaugų sutarties numeris';

$GLOBALS["lang"]['purchase_vendor'] = 'Pirkimo pardavėjas';

$GLOBALS["lang"]['Purchase Vendor'] = 'Pirkimo pardavėjas';

$GLOBALS["lang"]['purpose'] = 'Tikslas';

$GLOBALS["lang"]['Purpose'] = 'Tikslas';

$GLOBALS["lang"]['Qatar'] = 'Kataras';

$GLOBALS["lang"]['queries'] = 'Užklausa';

$GLOBALS["lang"]['Queries'] = 'Užklausa';

$GLOBALS["lang"]['Queries are an important part of Open-AudIT. They are what enables you to get meaningful information from all the device data you have discovered. Along with summaries and groups, they provide a powerful mechanism to extract crucial information.'] = 'Užklausos yra svarbi Open- AudIT dalis. Tai yra tai, kas leidžia jums gauti prasmingą informaciją iš visų įrenginių duomenis, kuriuos atrasite. Kartu su santraukomis ir grupėmis, jie suteikia galingą mechanizmą, siekiant išgauti svarbią informaciją.';

$GLOBALS["lang"]['Queries for Groups should select only the'] = 'Užklausos grupėms turėtų pasirinkti tik';

$GLOBALS["lang"]['Query'] = 'Užklausa';

$GLOBALS["lang"]['Query this Active Directory attribute first to determine the users work unit.'] = 'Užklausti šį Active Directory atributas pirmiausia nustatyti vartotojų darbo vienetą.';

$GLOBALS["lang"]['Query this Active Directory attribute second to determine the users work unit.'] = 'Užklausti šį Active Directory atributas antra nustatyti vartotojų darbo vienetą.';

$GLOBALS["lang"]['queue'] = 'Eilutė';

$GLOBALS["lang"]['Queue'] = 'Eilutė';

$GLOBALS["lang"]['Queue Limit'] = 'Eilutės riba';

$GLOBALS["lang"]['Queued Device Audits'] = 'Eilėje esančių įrenginių auditas';

$GLOBALS["lang"]['Queued IP Scans'] = 'Queued IP skenavimas';

$GLOBALS["lang"]['Queued Items'] = 'Eilutė';

$GLOBALS["lang"]['RBAC for Active Directory and openLDAP'] = 'RBAC aktyviam katalogui ir openLDAP';

$GLOBALS["lang"]['RU Start'] = 'GĮ pradžia';

$GLOBALS["lang"]['RX Bitrate'] = 'RX bitų dažnis';

$GLOBALS["lang"]['RX Freq'] = 'RX Freq';

$GLOBALS["lang"]['RX Level'] = 'RX lygis';

$GLOBALS["lang"]['RX Power'] = 'RX galia';

$GLOBALS["lang"]['RX Profile'] = 'RX profilis';

$GLOBALS["lang"]['Rack'] = 'Rock';

$GLOBALS["lang"]['rack_devices'] = 'Rock įrenginiai';

$GLOBALS["lang"]['Rack Devices'] = 'Rock įrenginiai';

$GLOBALS["lang"]['rack_id'] = 'Rock ID';

$GLOBALS["lang"]['Rack ID'] = 'Rock ID';

$GLOBALS["lang"]['Rack Management and Reporting'] = 'Rock valdymas ir ataskaitų teikimas';

$GLOBALS["lang"]['Racks'] = 'Kėlikliai.';

$GLOBALS["lang"]['racks'] = 'Kėlikliai.';

$GLOBALS["lang"]['radio'] = 'Radijas';

$GLOBALS["lang"]['Radio'] = 'Radijas';

$GLOBALS["lang"]['Radio MAC'] = 'MAC radijas';

$GLOBALS["lang"]['rationale'] = 'Pagrindimas';

$GLOBALS["lang"]['Rationale'] = 'Pagrindimas';

$GLOBALS["lang"]['raw'] = 'Žaliavinis';

$GLOBALS["lang"]['Raw'] = 'Žaliavinis';

$GLOBALS["lang"]['read'] = 'Skaityti';

$GLOBALS["lang"]['Read'] = 'Skaityti';

$GLOBALS["lang"]['Read our online documentation on the Open-AudIT Wiki.'] = 'Perskaitykite mūsų internetinius dokumentus apie Open- AudIT Wiki.';

$GLOBALS["lang"]['Read through the log file at'] = 'Skaityti per žurnalo failą';

$GLOBALS["lang"]['Received'] = 'Gauta';

$GLOBALS["lang"]['Recently we have been asked the question - do you consider Open-AudIT more secure than other similar programs? As with most things, the answer is <i>it depends</i>.<br><br>Open-AudIT can be operated in such a way as to be extremely secure. But as usual with computer-based security, the more secure you wish to make something, the more inconvenient it becomes to use. The old phrase <i>the most secure computer is one that is turned off and in the cupboard<i> comes to mind.<br><br>Below we will outline some options that can be used with Open-AudIT that will increase security. Like most items within Open-AudIT, these are options and not mandatory. How far you take security is up to you.'] = 'Neseniai mums buvo užduotas klausimas - ar manote, kad Open- AudIT saugesnis nei kitos panašios programos? Kaip ir dauguma dalykų, atsakymas yra <i>priklauso</i>.<br/><br/>Open- Aud IT gali būti naudojama taip, kad būtų ypač saugi. Bet kaip įprasta su kompiuteriniu saugumu, tuo saugesnis norite kažką padaryti, tuo patogiau ji tampa naudoti. Senoji frazė <i>saugiausias kompiuteris yra toks, kuris yra išjungtas ir spintoje<i> Atėjus į galvą.<br/><br/>Žemiau mes aptarsime keletą variantų, kurie gali būti naudojami su Open- AudIT, kad bus padidinti saugumą. Kaip ir dauguma Open- AudIT straipsnių, tai yra pasirinktys ir nėra privalomos. Kaip toli jūs saugosit.</i></i>';

$GLOBALS["lang"]['Recertification:</strong> Required every three years'] = 'Pakartotinis sertifikavimas: Reikalaujama kas trejus metus';

$GLOBALS["lang"]['Red Query'] = 'Raudona užklausa';

$GLOBALS["lang"]['Redirect URI'] = 'Grąžinti URI';

$GLOBALS["lang"]['redirect_uri'] = 'Nukreipti Uri';

$GLOBALS["lang"]['Redirect Uri'] = 'Nukreipti Uri';

$GLOBALS["lang"]['Reduces risk of data breaches and cyber threats'] = 'Mažina duomenų pažeidimų ir kibernetinių grėsmių riziką';

$GLOBALS["lang"]['references'] = 'Nuorodos';

$GLOBALS["lang"]['References'] = 'Nuorodos';

$GLOBALS["lang"]['region'] = 'Regionas';

$GLOBALS["lang"]['Region'] = 'Regionas';

$GLOBALS["lang"]['registered_user'] = 'Registruotas naudotojas';

$GLOBALS["lang"]['Registered User'] = 'Registruotas naudotojas';

$GLOBALS["lang"]['Rejected'] = 'Atmesta';

$GLOBALS["lang"]['rel'] = 'Relis';

$GLOBALS["lang"]['Rel'] = 'Relis';

$GLOBALS["lang"]['Release'] = 'Išleidimas';

$GLOBALS["lang"]['remediation'] = 'Taisymas';

$GLOBALS["lang"]['Remediation'] = 'Taisymas';

$GLOBALS["lang"]['Remote'] = 'Nutolęs';

$GLOBALS["lang"]['remote_address'] = 'Nutolęs adresas';

$GLOBALS["lang"]['Remote Address'] = 'Nutolęs adresas';

$GLOBALS["lang"]['remote_port'] = 'Nutolęs prievadas';

$GLOBALS["lang"]['Remote Port'] = 'Nutolęs prievadas';

$GLOBALS["lang"]['Remove'] = 'Pašalinti';

$GLOBALS["lang"]['Remove Exception'] = 'Pašalinti išimtį';

$GLOBALS["lang"]['Repeat until you have a completely discovered and audited Windows PC.'] = 'Pakartokite, kol turite visiškai atrasta ir audituota Windows PC.';

$GLOBALS["lang"]['Report'] = 'Ataskaita';

$GLOBALS["lang"]['Report on your devices, networks and more'] = 'Praneškite apie savo įrenginius, tinklus ir daugiau';

$GLOBALS["lang"]['reportable'] = 'Praneština';

$GLOBALS["lang"]['Reportable'] = 'Praneština';

$GLOBALS["lang"]['Reports'] = 'Ataskaitos';

$GLOBALS["lang"]['request'] = 'Prašymas';

$GLOBALS["lang"]['Request'] = 'Prašymas';

$GLOBALS["lang"]['Request Method'] = 'Prašymo metodas';

$GLOBALS["lang"]['Request Vulnerability'] = 'Prašyti pažeidžiamumo';

$GLOBALS["lang"]['Request a Specific CVE'] = 'Prašyti specialaus CVE';

$GLOBALS["lang"]['requested'] = 'Prašyta';

$GLOBALS["lang"]['Requested'] = 'Prašyta';

$GLOBALS["lang"]['require_port'] = 'Reikalauti uosto';

$GLOBALS["lang"]['Require Port'] = 'Reikalauti uosto';

$GLOBALS["lang"]['Require an Open Port'] = 'Reikalauti atidaryti prievadą';

$GLOBALS["lang"]['Required'] = 'Reikalinga';

$GLOBALS["lang"]['Required AWS user permissions'] = 'Reikalingi AWS naudotojo leidimai';

$GLOBALS["lang"]['Required Fields'] = 'Reikalingi laukeliai';

$GLOBALS["lang"]['Reset'] = 'Atstatyti';

$GLOBALS["lang"]['Reset All Data'] = 'Atstatyti visus duomenis';

$GLOBALS["lang"]['Reset to Default'] = 'Atstatyti į numatytąją';

$GLOBALS["lang"]['resource'] = 'Ištekliai';

$GLOBALS["lang"]['Resource'] = 'Ištekliai';

$GLOBALS["lang"]['Resource Name'] = 'Ištekliaus pavadinimas';

$GLOBALS["lang"]['Resources'] = 'Ištekliai';

$GLOBALS["lang"]['response'] = 'Atsakas';

$GLOBALS["lang"]['Response'] = 'Atsakas';

$GLOBALS["lang"]['responsibility'] = 'Atsakomybė';

$GLOBALS["lang"]['Responsibility'] = 'Atsakomybė';

$GLOBALS["lang"]['Restore my Licenses'] = 'Atstatyti licencijas';

$GLOBALS["lang"]['Restrict to Private'] = 'Apriboti į privatų';

$GLOBALS["lang"]['Restrict to Subnet'] = 'Apriboti Subnet';

$GLOBALS["lang"]['result'] = 'Rezultatas';

$GLOBALS["lang"]['Result'] = 'Rezultatas';

$GLOBALS["lang"]['Resulting Function'] = 'Gaunama funkcija';

$GLOBALS["lang"]['Results'] = 'Rezultatai';

$GLOBALS["lang"]['Retrieve a list of devices in the'] = 'Gauti prietaisų sąrašą';

$GLOBALS["lang"]['Retrieve a list of devices with OS Name like Windows 2008'] = 'Gauti įrenginių sąrašą su OS pavadinimu kaip Windows 2008';

$GLOBALS["lang"]['Retrieve all details about the device with id 88.'] = 'Gaukite visą informaciją apie įrenginį su id 88.';

$GLOBALS["lang"]['Retrieve all devices running Windows.'] = 'Gauti visus įrenginius su Windows.';

$GLOBALS["lang"]['Retrieve all devices with the standard columns'] = 'Gauti visus įrenginius su standartiniais stulpeliais';

$GLOBALS["lang"]['Retrieve the first 10 devices running Windows ordered by hostname'] = 'Gauti pirmuosius 10 įrenginių, kuriuose veikia pagal mazgo vardą užsakyti Windows';

$GLOBALS["lang"]['Retrieve the properties id, ip, hostname, domain, type from all devices'] = 'Gauti savybes id, ip, mazgo vardas, domenas, tipas iš visų įrenginių';

$GLOBALS["lang"]['retrieved'] = 'Retrieted';

$GLOBALS["lang"]['Retrieved'] = 'Retrieted';

$GLOBALS["lang"]['retrieved_ident'] = 'Retrieved Ident';

$GLOBALS["lang"]['Retrieved Ident'] = 'Retrieved Ident';

$GLOBALS["lang"]['retrieved_name'] = 'Persiųstas pavadinimas';

$GLOBALS["lang"]['Retrieved Name'] = 'Persiųstas pavadinimas';

$GLOBALS["lang"]['Retrieved from the device - Windows:Win32_ComputerSystemProduct, Linux:dmidecode, MacOS:system_profiler, ESXi:vim-cmd hostsvc/hostsummary, HP-UX:machinfo, Solaris:smbios, AIX:uname.'] = 'Retrieved from the device - Windows: Win32 _ ComputerSystemProduct, Linux: dmidecode, MacOS: system _ profiler, ESXi: vim-cmd hostsvc / hostsummary, HP-UX: machinfo, Solaris: smbios, AIX: uname.';

$GLOBALS["lang"]['Retrieving a List of Credentials'] = 'Gaunamas kreditų sąrašas';

$GLOBALS["lang"]['Retrieving or Creating'] = 'Gaunama arba kuriama';

$GLOBALS["lang"]['Return a collection of devices with the default set of columns (devices.id, devices.icon, devices.type, devices.name, devices.ip, devices.dns_fqdn, devices.identification, devices.description, devices.manufacturer, devices.os_family, devices.status)'] = 'Grąžinti prietaisų rinkinį su numatytuoju stulpelių rinkiniu (devices.id, devices.icon, devices.type, devices.name, devices.ip, devices.dns _ fqdn, devices.identification, devices.description, devices.provider, devices.os _ family, devices.status)';

$GLOBALS["lang"]['Return a list of all Modules installed on Routers'] = 'Grąžinti visų Modulių, įdiegtų maršrutuose, sąrašą';

$GLOBALS["lang"]['Return an individual device details'] = 'Grąžinti atskirą įrenginį\\';

$GLOBALS["lang"]['Returns a list of {collection}.'] = 'Grąžina {kolekcijos} sąrašą.';

$GLOBALS["lang"]['Returns a {collection} details.'] = 'Grąžina {kolekcijos} detales.';

$GLOBALS["lang"]['Reunion'] = 'Reunjonas';

$GLOBALS["lang"]['Review current practices against ISO 27001 requirements'] = 'Peržiūrėti dabartinę praktiką pagal ISO 27001 reikalavimus';

$GLOBALS["lang"]['revision'] = 'Persvarstymas';

$GLOBALS["lang"]['Revision'] = 'Persvarstymas';

$GLOBALS["lang"]['risk_assesment_result'] = 'Rizikos vertinimo rezultatas';

$GLOBALS["lang"]['Risk Assesment Result'] = 'Rizikos vertinimo rezultatas';

$GLOBALS["lang"]['Risk Assessment & Treatment'] = 'Rizikos vertinimas ir gydymas';

$GLOBALS["lang"]['Risk Management'] = 'Rizikos valdymas';

$GLOBALS["lang"]['Role'] = 'Vaidmuo';

$GLOBALS["lang"]['roles'] = 'Vaidmenys';

$GLOBALS["lang"]['Roles'] = 'Vaidmenys';

$GLOBALS["lang"]['Roles can only be created and edited if you have an Open-AudIT Enterprise license. For most users, the default set of Roles should be all that is required.'] = 'Roles galima sukurti ir redaguoti tik jei turite Open- AudIT Enterprise licenciją. Daugumai vartotojų, numatytasis Roles rinkinys turėtų būti viskas, kad reikia.';

$GLOBALS["lang"]['Romania'] = 'Rumunija';

$GLOBALS["lang"]['Romanian'] = 'Rumunų';

$GLOBALS["lang"]['Room'] = 'Kambarys';

$GLOBALS["lang"]['route'] = 'Vartojimo būdas';

$GLOBALS["lang"]['Route'] = 'Vartojimo būdas';

$GLOBALS["lang"]['Row'] = 'Eilutė';

$GLOBALS["lang"]['Row Count'] = 'Eilučių skaičius';

$GLOBALS["lang"]['row_position'] = 'Eilutės pozicija';

$GLOBALS["lang"]['Row Position'] = 'Eilutės pozicija';

$GLOBALS["lang"]['Rows'] = 'Eilutės';

$GLOBALS["lang"]['ru_height'] = 'Ru aukštis';

$GLOBALS["lang"]['Ru Height'] = 'Ru aukštis';

$GLOBALS["lang"]['ru_start'] = 'Ru pradžia';

$GLOBALS["lang"]['Ru Start'] = 'Ru pradžia';

$GLOBALS["lang"]['rule_group'] = 'Taisyklių grupė';

$GLOBALS["lang"]['Rule Group'] = 'Taisyklių grupė';

$GLOBALS["lang"]['rules'] = 'Taisyklės';

$GLOBALS["lang"]['Rules'] = 'Taisyklės';

$GLOBALS["lang"]['Rules are created and run against a device when the device is discovered or an audit result is processed. Rules can be used to set a device attribute based on other attributes.<br><br>NOTE - At present we cannot delete a rule input or output that contains a /. This is because the framework is parsing the / as part of the URL and returning a 404, even before our code runs. The work-around for this is to delete the Rule itself, then recreate the inputs and outputs as required. Fortunately inputs and outputs that contain a / are rare (indeed, none exist by default).'] = 'Taisyklės yra sukurtos ir paleisti prieš įrenginį, kai prietaisas yra atrasta arba audito rezultatas yra apdorojamas. Taisyklės gali būti naudojamos nustatyti prietaiso atributą pagal kitus požymius.<br/><br/>PASTABA - Šiuo metu mes negalime ištrinti taisyklės įvesties ar išvesties, kurioje yra /. Taip yra todėl, kad sistema analizuoja / kaip dalis URL ir grąžinti 404, net prieš mūsų kodas veikia. Darbo aplink tai yra ištrinti pačią taisyklę, tada atkurti įvestis ir išvedinius, kaip reikalaujama. Laimei, įėjimai ir išvediniai, kurie yra / yra reti (iš tiesų, nė vienas nėra pagal nutylėjimą).';

$GLOBALS["lang"]['Run Discovery'] = 'Vykdyti paiešką';

$GLOBALS["lang"]['Run Discovery on Devices'] = 'Paleisti paieškos įrenginius';

$GLOBALS["lang"]['Run Your Discovery'] = 'Paleisti Jūsų paieškos';

$GLOBALS["lang"]['Run a Command'] = 'Vykdyti komandą';

$GLOBALS["lang"]['Run a discovery and find out <b>Whats On Your Network?</b>'] = 'Vykdyti atradimą ir sužinoti <b>Kas jūsų tinkle?</b>';

$GLOBALS["lang"]['Run the script by typing <code>cscript test_windows_client.vbs</code> in the console.'] = 'Vykdyti scenarijų įrašant <code>cscript test_windows_client.vbs</code> konsolėje.';

$GLOBALS["lang"]['Run this Command'] = 'Vykdyti šią komandą';

$GLOBALS["lang"]['runas'] = 'Runos';

$GLOBALS["lang"]['Runas'] = 'Runos';

$GLOBALS["lang"]['Running'] = 'Vykdoma';

$GLOBALS["lang"]['Running Open-AudIT Apache Service Under Windows'] = 'Vykdoma Open- AudIT Apache paslauga po Windows';

$GLOBALS["lang"]['Russian'] = 'Rusų';

$GLOBALS["lang"]['Russian Federation'] = 'Rusijos Federacija';

$GLOBALS["lang"]['Rwanda'] = 'Ruanda';

$GLOBALS["lang"]['rx_bitrate'] = 'Rx bitų dažnis';

$GLOBALS["lang"]['Rx Bitrate'] = 'Rx bitų dažnis';

$GLOBALS["lang"]['rx_freq'] = 'Rx Freq';

$GLOBALS["lang"]['Rx Freq'] = 'Rx Freq';

$GLOBALS["lang"]['rx_level'] = 'Rx lygis';

$GLOBALS["lang"]['Rx Level'] = 'Rx lygis';

$GLOBALS["lang"]['rx_power'] = 'Rx galia';

$GLOBALS["lang"]['Rx Power'] = 'Rx galia';

$GLOBALS["lang"]['rx_profile'] = 'Rx profilis';

$GLOBALS["lang"]['Rx Profile'] = 'Rx profilis';

$GLOBALS["lang"]['SAN Audit'] = 'SAN Audit';

$GLOBALS["lang"]['SAN Auto-Discover'] = 'SAN Auto- Discover';

$GLOBALS["lang"]['SELECT'] = 'SELECT';

$GLOBALS["lang"]['SID'] = 'SID';

$GLOBALS["lang"]['SM Version'] = 'SM versija';

$GLOBALS["lang"]['SNMP (v1 / v2)'] = 'SNMP (v1 / v2)';

$GLOBALS["lang"]['SNMP Details'] = 'SNMP Išsami informacija';

$GLOBALS["lang"]['SNMP OID'] = 'SNMP OID';

$GLOBALS["lang"]['SNMP Version'] = 'SNMP versija';

$GLOBALS["lang"]['SNMP v3'] = 'SNMP v3';

$GLOBALS["lang"]['SQL'] = 'SQL';

$GLOBALS["lang"]['SQL (Advanced)'] = 'SQL (pažangusis)';

$GLOBALS["lang"]['SQL Creation Statements'] = 'SQL kūrimo pareiškimai';

$GLOBALS["lang"]['SQL not containing this condition will result in the widget failing to be executed.'] = 'SQL be šios sąlygos sukels valdikliui negali būti įvykdyta.';

$GLOBALS["lang"]['SSH'] = 'SSH';

$GLOBALS["lang"]['SSH Key'] = 'SSH Raktas';

$GLOBALS["lang"]['SW Revision'] = 'SW peržiūra';

$GLOBALS["lang"]['Saint Barthelemy'] = 'Sent Bartelemis';

$GLOBALS["lang"]['Saint Helena'] = 'Elenos sala';

$GLOBALS["lang"]['Saint Kitts and Nevis'] = 'Sent Kitsas ir Nevis';

$GLOBALS["lang"]['Saint Lucia'] = 'Sent Lusija';

$GLOBALS["lang"]['Saint Martin'] = 'Sent Martinas';

$GLOBALS["lang"]['Saint Pierre and Miquelon'] = 'Sen Pjeras ir Mikelonas';

$GLOBALS["lang"]['Saint Vincent and the Grenadines'] = 'Sent Vinsentas ir Grenadinai';

$GLOBALS["lang"]['Samoa'] = 'Samoa';

$GLOBALS["lang"]['san'] = 'San';

$GLOBALS["lang"]['San'] = 'San';

$GLOBALS["lang"]['San Marino'] = 'San Marinas';

$GLOBALS["lang"]['Sao Tome and Principe'] = 'San Tomė ir Prinsipė';

$GLOBALS["lang"]['Saturday'] = 'Šeštadienis';

$GLOBALS["lang"]['Saudi Arabia'] = 'Saudo Arabija';

$GLOBALS["lang"]['Save and run the file. Make sure you run the file as an Administrator in order to install it (right click, Run as Administrator).'] = 'Įrašyti ir paleisti failą. Įsitikinkite, kad jums paleisti failą kaip administratorius, siekiant įdiegti (dešiniuoju pelės mygtuku spustelėkite, paleisti kaip administratorius).';

$GLOBALS["lang"]['Save as Default'] = 'Įrašyti kaip numatytąjį';

$GLOBALS["lang"]['Save the downloaded file.'] = 'Įrašyti atsiųstą failą.';

$GLOBALS["lang"]['scaling'] = 'Mastelis';

$GLOBALS["lang"]['Scaling'] = 'Mastelis';

$GLOBALS["lang"]['scan_options'] = 'Skaitymo parinktys';

$GLOBALS["lang"]['Scan Options'] = 'Skaitymo parinktys';

$GLOBALS["lang"]['Scan Options ID'] = 'Skaityti parinktis ID';

$GLOBALS["lang"]['Scan for this port(s) and if detected open, use this port for SSH communication. This is added to the list of Custom TCP Ports above (if not already included), so there is no need to include it in that list as well. Comma seperated, no spaces.'] = 'Šio (-ų) prievado (-ų) ir, jei aptikta atidaryta, šį prievadą naudokite SSH ryšiui. Tai yra įtraukta į pirmiau pateiktą Custom TCP uostų sąrašą (jei jis dar nėra įtrauktas), todėl jo taip pat nereikia įtraukti į tą sąrašą. Komanda susėdusi, jokių tarpų.';

$GLOBALS["lang"]['Scan the Nmap top number of TCP ports.'] = 'Skaityti Nmap viršų numerį TCP uostų.';

$GLOBALS["lang"]['Scan the Nmap top number of UDP ports.'] = 'Skaityti Nmap viršutinį UDP prievadų skaičių.';

$GLOBALS["lang"]['schedule'] = 'Tvarkaraštis';

$GLOBALS["lang"]['Schedule'] = 'Tvarkaraštis';

$GLOBALS["lang"]['Scheduled device discovery and reporting make Open-AudIT Professional an efficient solution for busy IT professionals looking to reduce overheads and increase insights.'] = 'Numatytas įrenginio atradimas ir ataskaitos padaryti Open- AudIT Professional efektyvus sprendimas užimtiems IT specialistams, siekiantiems sumažinti pridėtines išlaidas ir padidinti įžvalgas.';

$GLOBALS["lang"]['Scheduling - discovery, reporting &amp; more'] = 'Planavimas - atradimas, pranešimas ir daugiau';

$GLOBALS["lang"]['scope'] = 'Taikymo sritis';

$GLOBALS["lang"]['Scope'] = 'Taikymo sritis';

$GLOBALS["lang"]['Scope is known as Authorization Scope, representing whether a vulnerability affects resources beyond the original security authority of the vulnerable component.<br><br>The only two valid values for this attribute are'] = 'Taikymo sritis yra žinomas kaip leidimų taikymo sritis, nurodant, ar pažeidžiamumas turi įtakos ištekliams, išskyrus pirminę saugumo instituciją pažeidžiamo komponento.<br/><br/>Tik dvi galiojančios šio požymio reikšmės yra:';

$GLOBALS["lang"]['script_timeout'] = 'Scenarijaus data';

$GLOBALS["lang"]['Script Timeout'] = 'Scenarijaus data';

$GLOBALS["lang"]['scripts'] = 'Scenarijai';

$GLOBALS["lang"]['Scripts'] = 'Scenarijai';

$GLOBALS["lang"]['scsi'] = 'Scsi';

$GLOBALS["lang"]['Scsi'] = 'Scsi';

$GLOBALS["lang"]['scsi_bus'] = 'Comment';

$GLOBALS["lang"]['Scsi Bus'] = 'Comment';

$GLOBALS["lang"]['scsi_logical_unit'] = 'Scsi loginis vienetas';

$GLOBALS["lang"]['Scsi Logical Unit'] = 'Scsi loginis vienetas';

$GLOBALS["lang"]['scsi_port'] = 'Scsi prievadas';

$GLOBALS["lang"]['Scsi Port'] = 'Scsi prievadas';

$GLOBALS["lang"]['Search'] = 'Ieškoti';

$GLOBALS["lang"]['Search For a Device'] = 'Ieškoti įrenginio';

$GLOBALS["lang"]['Searching Using DataTables'] = 'Ieškoma duomenų lentelių';

$GLOBALS["lang"]['Second'] = 'Antra';

$GLOBALS["lang"]['secondary'] = 'Antrinis';

$GLOBALS["lang"]['Secondary'] = 'Antrinis';

$GLOBALS["lang"]['Secondary Text'] = 'Antrinis tekstas';

$GLOBALS["lang"]['Secret Key'] = 'Slaptas raktas';

$GLOBALS["lang"]['section'] = 'Skirsnis';

$GLOBALS["lang"]['Section'] = 'Skirsnis';

$GLOBALS["lang"]['secure'] = 'Saugi';

$GLOBALS["lang"]['Secure'] = 'Saugi';

$GLOBALS["lang"]['Security Content Automation Protocol'] = 'Saugumo turinio automatizavimo protokolas';

$GLOBALS["lang"]['Security Level'] = 'Saugumo lygis';

$GLOBALS["lang"]['Security Name'] = 'Saugumo pavadinimas';

$GLOBALS["lang"]['Security Status'] = 'Saugumo statusas';

$GLOBALS["lang"]['security_zone'] = 'Apsaugos zona';

$GLOBALS["lang"]['Security Zone'] = 'Apsaugos zona';

$GLOBALS["lang"]['See above. NOTE - This could also be caused by a self-signed certificate on the LDAP server. We are working to allow for this in a future release.'] = 'Žr. pirmiau. PASTABA - Tai taip pat gali sukelti savarankiškai pasirašytas sertifikatas LDAP serveryje. Mes dirbame, kad tai būtų galima padaryti ateityje.';

$GLOBALS["lang"]['See our page on enabling'] = 'Žiūrėkite mūsų puslapį įjungus';

$GLOBALS["lang"]['Seed Discoveries'] = 'Sėklų dengimas';

$GLOBALS["lang"]['seed_ip'] = 'Sėklos IP';

$GLOBALS["lang"]['Seed IP'] = 'Sėklos IP';

$GLOBALS["lang"]['seed_ping'] = 'Sėklinė sėklinė kurapka';

$GLOBALS["lang"]['Seed Ping'] = 'Sėklinė sėklinė kurapka';

$GLOBALS["lang"]['seed_restrict_to_private'] = 'Sėklos griežtumas privačiam';

$GLOBALS["lang"]['Seed Restrict To Private'] = 'Sėklos griežtumas privačiam';

$GLOBALS["lang"]['seed_restrict_to_subnet'] = 'Sėklos suvaržymas Subtinklui';

$GLOBALS["lang"]['Seed Restrict To Subnet'] = 'Sėklos suvaržymas Subtinklui';

$GLOBALS["lang"]['Select'] = 'Pasirinkti';

$GLOBALS["lang"]['Select Admin -> Tasks -> Create Task from the menu.'] = 'Pasirinkite administratorių - > Užduotys - > Sukurti Užduotis iš meniu.';

$GLOBALS["lang"]['Select All'] = 'Pažymėti viską';

$GLOBALS["lang"]['Select All Devices'] = 'Pažymėti visus įrenginius';

$GLOBALS["lang"]['select_external_attribute'] = 'Pažymėti išorinį atributą';

$GLOBALS["lang"]['Select External Attribute'] = 'Pažymėti išorinį atributą';

$GLOBALS["lang"]['select_external_count'] = 'Pažymėti išorinį skaičių';

$GLOBALS["lang"]['Select External Count'] = 'Pažymėti išorinį skaičių';

$GLOBALS["lang"]['select_external_type'] = 'Pažymėti išorę Tipas';

$GLOBALS["lang"]['Select External Type'] = 'Pažymėti išorę Tipas';

$GLOBALS["lang"]['select_external_value'] = 'Pažymėti išorę Vertė';

$GLOBALS["lang"]['Select External Value'] = 'Pažymėti išorę Vertė';

$GLOBALS["lang"]['select_internal_attribute'] = 'Pažymėti vidinį atributą';

$GLOBALS["lang"]['Select Internal Attribute'] = 'Pažymėti vidinį atributą';

$GLOBALS["lang"]['select_internal_count'] = 'Pasirinkite vidinį skaičių';

$GLOBALS["lang"]['Select Internal Count'] = 'Pasirinkite vidinį skaičių';

$GLOBALS["lang"]['select_internal_type'] = 'Pasirinkite vidinę Tipas';

$GLOBALS["lang"]['Select Internal Type'] = 'Pasirinkite vidinę Tipas';

$GLOBALS["lang"]['select_internal_value'] = 'Pasirinkite vidinę Vertė';

$GLOBALS["lang"]['Select Internal Value'] = 'Pasirinkite vidinę Vertė';

$GLOBALS["lang"]['Select Menu -> Manage -> Baselines -> List Baselines.'] = 'Pasirinkite meniu - > Tvarkyti - > Baziniai - > Sąrašo baziniai.';

$GLOBALS["lang"]['Select a Table'] = 'Pasirinkite lentelę';

$GLOBALS["lang"]['Select an accredited certification body'] = 'Parinkite akredituotą sertifikavimo įstaigą';

$GLOBALS["lang"]['Select and apply appropriate controls (Annex A)'] = 'Pasirinkti ir taikyti tinkamą kontrolę (A priedas)';

$GLOBALS["lang"]['Select the <i>COM Security</i> tab<br><br>Click on Access Permissions Edit Default'] = 'Pasirinkite <i>KOM Saugumas</i> skirtukas<br/><br/>Spauskite ant prieigos leidimų Keisti numatytą';

$GLOBALS["lang"]['Select the <i>Sign On</i> tab and copy the value for <i>Issuer</i> (just the URL itself). Paste this into the Open-AudIT <i>Issuer</i> field.'] = 'Pasirinkite <i>Pasirašyti įjungta</i> skirtuką ir kopijuoti vertę <i>Emitentas</i> (tik pats URL). Įdėkite tai į Open- AudIT <i>Emitentas</i> laukas.';

$GLOBALS["lang"]['Select the <i>This Account</i> checkbox and provide the account name and password.'] = 'Pasirinkite <i>Ši paskyra</i> žymimąjį langelį ir nurodyti paskyros pavadinimą ir slaptažodį.';

$GLOBALS["lang"]['Select the Start menu and type <i>services<.i>. Click the Services icon.'] = 'Pasirinkite pradžios meniu ir tipą <i>paslaugos < .i >. Spauskite Paslaugų piktogramą.</i>';

$GLOBALS["lang"]['Select the type of Auth Menthod to create and input the relevant details.'] = 'Parinkite Auth Menthod tipą, kad sukurtumėte ir įvestumėte atitinkamas detales.';

$GLOBALS["lang"]['Self Delete'] = 'Ištrinti';

$GLOBALS["lang"]['Senegal'] = 'Senegalas';

$GLOBALS["lang"]['sensitivity'] = 'Jautrumas';

$GLOBALS["lang"]['Sensitivity'] = 'Jautrumas';

$GLOBALS["lang"]['September'] = 'Rugsėjis';

$GLOBALS["lang"]['Serbia'] = 'Serbija';

$GLOBALS["lang"]['serial'] = 'Serijos';

$GLOBALS["lang"]['Serial'] = 'Serijos';

$GLOBALS["lang"]['serial_imei'] = 'Serijinis imei';

$GLOBALS["lang"]['Serial Imei'] = 'Serijinis imei';

$GLOBALS["lang"]['serial_sim'] = 'Serijinis sim';

$GLOBALS["lang"]['Serial Sim'] = 'Serijinis sim';

$GLOBALS["lang"]['series'] = 'Serija';

$GLOBALS["lang"]['Series'] = 'Serija';

$GLOBALS["lang"]['server'] = 'Serveris';

$GLOBALS["lang"]['Server'] = 'Serveris';

$GLOBALS["lang"]['server_id'] = 'Serverio ID';

$GLOBALS["lang"]['Server ID'] = 'Serverio ID';

$GLOBALS["lang"]['Server Is'] = 'Serveris yra';

$GLOBALS["lang"]['server_item'] = 'Serverio elementas';

$GLOBALS["lang"]['Server Item'] = 'Serverio elementas';

$GLOBALS["lang"]['Server Status'] = 'Serverio būsena';

$GLOBALS["lang"]['Servers'] = 'Serveriai';

$GLOBALS["lang"]['Servers Only'] = 'Tik serveriai';

$GLOBALS["lang"]['service'] = 'Paslauga';

$GLOBALS["lang"]['Service'] = 'Paslauga';

$GLOBALS["lang"]['service_identifier'] = 'Paslaugos identifikatorius';

$GLOBALS["lang"]['Service Identifier'] = 'Paslaugos identifikatorius';

$GLOBALS["lang"]['service_level_a'] = 'A paslaugos lygis';

$GLOBALS["lang"]['Service Level A'] = 'A paslaugos lygis';

$GLOBALS["lang"]['service_level_b'] = 'B paslaugų lygis';

$GLOBALS["lang"]['Service Level B'] = 'B paslaugų lygis';

$GLOBALS["lang"]['service_network'] = 'Paslaugų tinklas';

$GLOBALS["lang"]['Service Network'] = 'Paslaugų tinklas';

$GLOBALS["lang"]['service_number'] = 'Paslaugos numeris';

$GLOBALS["lang"]['Service Number'] = 'Paslaugos numeris';

$GLOBALS["lang"]['service_pack'] = 'Paslaugų paketas';

$GLOBALS["lang"]['Service Pack'] = 'Paslaugų paketas';

$GLOBALS["lang"]['service_plan'] = 'Paslaugų planas';

$GLOBALS["lang"]['Service Plan'] = 'Paslaugų planas';

$GLOBALS["lang"]['service_provider'] = 'Paslaugų teikėjas';

$GLOBALS["lang"]['Service Provider'] = 'Paslaugų teikėjas';

$GLOBALS["lang"]['service_tag'] = 'Paslaugos žyma';

$GLOBALS["lang"]['Service Tag'] = 'Paslaugos žyma';

$GLOBALS["lang"]['service_type'] = 'Paslaugos tipas';

$GLOBALS["lang"]['Service Type'] = 'Paslaugos tipas';

$GLOBALS["lang"]['Service Under Windows'] = 'Paslauga po Windows';

$GLOBALS["lang"]['service_version'] = 'Paslaugos versija';

$GLOBALS["lang"]['Service Version'] = 'Paslaugos versija';

$GLOBALS["lang"]['Set'] = 'Nustatyti';

$GLOBALS["lang"]['set_by'] = 'Nustatyti pagal';

$GLOBALS["lang"]['Set By'] = 'Nustatyti pagal';

$GLOBALS["lang"]['Set by the Discovery function - do not normally set this manually.'] = 'Nustatyti Discovery funkcija - paprastai nėra nustatyti tai rankiniu būdu.';

$GLOBALS["lang"]['Set by the audit_domain or discover_domain scripts. Do not set.'] = 'Nustatyti audito _ domeno arba atrasti _ domeno scenarijus. Nenustatyta.';

$GLOBALS["lang"]['Set the external text to capitalized version of the internal data.'] = 'Nustatyti išorinį tekstą į kapitalizuotą vidaus duomenų versiją.';

$GLOBALS["lang"]['Set the external text to lowercase.'] = 'Nustatyti išorinį tekstą mažosiomis raidėmis.';

$GLOBALS["lang"]['Set the external text to uppercase.'] = 'Nustatyti išorinį tekstą didžiosiomis raidėmis.';

$GLOBALS["lang"]['Set the size (normal or compact) of the tables on the List screens.'] = 'Nustatykite lentelių dydį (įprastas arba kompaktiškas) sąrašo ekranuose.';

$GLOBALS["lang"]['Set this if you wish to insert systems from AD that may not be contactable, but have been seen by AD since that date.'] = 'Pažymėkite šią parinktį, jei norite iš AD įterpti sistemas, kurios gali būti nepasiekiamos, bet nuo tos dienos yra matyti iš AD.';

$GLOBALS["lang"]['Setting up Discovery on a subnet is almost identical to running a regular Discovery via the web interface. The only additional items are the scheduled hour and day(s) and a name for the Scheduled Task itself. You can take advantage of this to schedule multiple discoveries using different sets of credentials.<br><br>As per the Subnet Discovery, the Active Directory Discovery is also simply the same fields as a regular Active Directory Discovery with the addition of a day, hour(s) and name.<br><br>If the Open-AudIT Server has Collectors reporting to it, an additional drop down is provided. You can select this to specify which Collector the task should run on. Only Discovery tasks are supported for Collectors. Specify the same items as a regular Discovery, but provide the alternate Collector to run this task.'] = 'Nustatyti Discovery potinklyje yra beveik identiškas veikia reguliariai Discovery per Web sąsaja. Vieninteliai papildomi elementai yra numatyta valanda ir diena (s) bei pačios suplanuotos užduoties pavadinimas. Jūs galite pasinaudoti šia galimybe, kad suplanuotumėte kelis atradimus, naudodami skirtingus įgaliojimų rinkinius.<br/><br/>Kaip per Subnet paieškos, Active Directory Discovery yra taip pat tiesiog tie patys laukai kaip reguliariai Active Directory Discovery su dienos, valandos (s) ir pavadinimas.<br/><br/>Jei Open- AudIT Serveris turi Kolektoriai ataskaitų jam, papildomas lašas žemyn. Galite pasirinkti tai nurodyti, kuri Rinkėjas užduotis turėtų paleisti. Kolektoriams palaikomos tik paieškos užduotys. Nurodykite tuos pačius elementus, kaip reguliariai Discovery, bet suteikti pakaitinį Kolektorius vykdyti šią užduotį.';

$GLOBALS["lang"]['severity'] = 'Sunkumas';

$GLOBALS["lang"]['Severity'] = 'Sunkumas';

$GLOBALS["lang"]['severity_text'] = 'Sunkumo tekstas';

$GLOBALS["lang"]['Severity Text'] = 'Sunkumo tekstas';

$GLOBALS["lang"]['Severity is calculated from the <code>base_score</code> and can be one of: None, Low, Medium, High, Critical.'] = 'Poveikio sunkumas apskaičiuojamas pagal <code>base_score</code> ir gali būti vienas iš: Nėra, Žemas, Vidutinis, Aukštas, Kritinis.';

$GLOBALS["lang"]['Seychelles'] = 'Seišeliai';

$GLOBALS["lang"]['share'] = 'Dalys';

$GLOBALS["lang"]['Share'] = 'Dalys';

$GLOBALS["lang"]['Share Name'] = 'Akcijos pavadinimas';

$GLOBALS["lang"]['shared'] = 'Bendras';

$GLOBALS["lang"]['Shared'] = 'Bendras';

$GLOBALS["lang"]['shared_name'] = 'Bendras pavadinimas';

$GLOBALS["lang"]['Shared Name'] = 'Bendras pavadinimas';

$GLOBALS["lang"]['shell'] = 'Apvalkalas';

$GLOBALS["lang"]['Shell'] = 'Apvalkalas';

$GLOBALS["lang"]['Ship Date'] = 'Laivo data';

$GLOBALS["lang"]['Shipped are a set of default items. These can be found by going to menu'] = 'Valdomas yra numatytųjų elementų rinkinys. Tai galima rasti einant į meniu';

$GLOBALS["lang"]['short'] = 'Trumpas';

$GLOBALS["lang"]['Short'] = 'Trumpas';

$GLOBALS["lang"]['Should I remove all non-current data from this device?'] = 'Ar turėčiau pašalinti visus neaktualius duomenis iš šio įrenginio?';

$GLOBALS["lang"]['Should this file (or pattern) be used to exclude files from being reported. Normally, to audit files, this is set to <code>y</code>.'] = 'Ar šis failas (arba šablonas) turėtų būti naudojamas, kad nebūtų pranešama apie failus. Paprastai, audito failus, tai yra nustatyta <code>y</code>.';

$GLOBALS["lang"]['Should this vendor be used when retrieving vulnerabilities from FirstWave.'] = 'Jeigu šis pardavėjas būtų naudojamas iš FirstWave gaunant pažeidžiamumą.';

$GLOBALS["lang"]['Should we add devices from the remote service, locally.'] = 'Ar turėtume pridėti įrenginius iš nuotolinės paslaugos, lokaliai.';

$GLOBALS["lang"]['Should we apply this license to the selected Org as well as the Orgs children?'] = 'Ar turėtume taikyti šią licenciją pasirinktam Orgui, taip pat Orgų vaikams?';

$GLOBALS["lang"]['Should we audit a SAN if the management software is detected.'] = 'Ar turėtume audituoti SAN, jei valdymo programinė įranga yra aptinkama.';

$GLOBALS["lang"]['Should we audit mount points.'] = 'Ar turėtume audituoti prijungimo taškus.';

$GLOBALS["lang"]['Should we audit netstat ports (yes, no, servers only).'] = 'Jei turėtume audituoti tinklo prievadus (taip, ne, tik serveriai).';

$GLOBALS["lang"]['Should we audit the installed software.'] = 'Ar turėtume audituoti įdiegtą programinę įrangą.';

$GLOBALS["lang"]['Should we consider a filtered port to be an open port - and therefore flag this IP as having a device attached?'] = 'Ar turėtume laikyti filtruotą prievadą atviru prievadu, todėl pažymėkite šį IP kaip turintį įrenginį?';

$GLOBALS["lang"]['Should we consider an open|filtered port to be an open port - and therefore flag this IP as having a device attached?'] = 'Ar turėtume laikyti atvirą 124; filtruotą prievadą atviru prievadu, todėl pažymėkite šį IP kaip turintį įrenginį?';

$GLOBALS["lang"]['Should we convert the hostname to lowercase.'] = 'Ar turėtume paversti nakvynės vardą mažosiomis.';

$GLOBALS["lang"]['Should we create a file based on the audit result.'] = 'Ar turėtume sukurti failą pagal audito rezultatą.';

$GLOBALS["lang"]['Should we expose this group in the web interface.'] = 'Ar turėtume atskleisti šią grupę žiniatinklio sąsajoje.';

$GLOBALS["lang"]['Should we expose this query in the list of reports under the Report menu in the web interface.'] = 'Jei mes atskleisti šį klausimą ataskaitų sąrašą pagal ataskaitą meniu Web sąsaja.';

$GLOBALS["lang"]['Should we expose this query in the list of reports under the Reports menu in the web interface.'] = 'Jei mes atskleisti šį klausimą ataskaitų sąrašą pagal ataskaitų meniu Web sąsaja.';

$GLOBALS["lang"]['Should we hide the audit script window when executing.'] = 'Ar mes turėtume slėpti audito scenarijų langą vykdant.';

$GLOBALS["lang"]['Should we ignore an invalid or self signed SSL certificate and submit the result anyway.'] = 'Jei mes ignoruoti negaliojantį arba savarankiškai pasirašytas SSL sertifikatą ir pateikti rezultatą vistiek.';

$GLOBALS["lang"]['Should we install Open-Scap on the target machine.'] = 'Ar turėtume įdiegti Open- Scap ant tikslinės mašinos.';

$GLOBALS["lang"]['Should we match a device based mac address even if its a known likely duplicate from VMware.'] = 'Ar mes turėtume suderinti prietaiso pagrindu Mac adresas, net jei jos žinomas tikėtina dublikatas iš VMware.';

$GLOBALS["lang"]['Should we match a device based on its DNS fqdn.'] = 'Ar turėtume suderinti įrenginį pagal jo DNS fqdn.';

$GLOBALS["lang"]['Should we match a device based on its DNS hostname.'] = 'Ar mes turėtume suderinti įrenginį pagal savo DNS mazgo vardą.';

$GLOBALS["lang"]['Should we match a device based on its UUID.'] = 'Ar turėtume suderinti įrenginį pagal jo UUID.';

$GLOBALS["lang"]['Should we match a device based on its dbus id.'] = 'Ar turėtume suderinti įrenginį pagal jo dbus id.';

$GLOBALS["lang"]['Should we match a device based on its fqdn.'] = 'Ar turėtume suderinti įrenginį pagal jo fqdn.';

$GLOBALS["lang"]['Should we match a device based on its hostname and UUID.'] = 'Ar mes turėtume suderinti įrenginį pagal savo mazgo vardą ir UUID.';

$GLOBALS["lang"]['Should we match a device based on its hostname and dbus id.'] = 'Ar mes turėtume suderinti įrenginį pagal savo mazgo vardą ir dbus id.';

$GLOBALS["lang"]['Should we match a device based on its hostname and serial.'] = 'Ar mes turėtume suderinti įrenginį pagal savo mazgo vardą ir serijos.';

$GLOBALS["lang"]['Should we match a device based on its ip if we have an existing device with no data.'] = 'Ar mes turėtume suderinti įrenginį pagal jo Ip, jei mes turime esamą įrenginį be duomenų.';

$GLOBALS["lang"]['Should we match a device based on its ip.'] = 'Ar turėtume suderinti įrenginį pagal jo IP.';

$GLOBALS["lang"]['Should we match a device based on its mac address.'] = 'Ar mes turėtume suderinti įrenginį pagal savo MAC adresą.';

$GLOBALS["lang"]['Should we match a device based on its serial and type.'] = 'Ar turėtume suderinti įrenginį pagal jo serijos ir tipo.';

$GLOBALS["lang"]['Should we match a device based on its serial number.'] = 'Ar mes turėtume suderinti įrenginį pagal jo serijos numerį.';

$GLOBALS["lang"]['Should we match a device based only on its SNMP sysName and serial.'] = 'Ar mes turėtume suderinti įrenginį remiantis tik jo SNMP sysName ir serijos.';

$GLOBALS["lang"]['Should we match a device based only on its SNMP sysName.'] = 'Ar mes turėtume suderinti įrenginį remiantis tik jo SNMP sysName.';

$GLOBALS["lang"]['Should we match a device based only on its hostname.'] = 'Ar mes turėtume suderinti įrenginį remiantis tik savo mazgo vardą.';

$GLOBALS["lang"]['Should we ping the IP before attempting to scan it? If it does not respond to the ping, skip this device.'] = 'Ar prieš bandydami nuskaityti, turėtume paskaityti IP? Jei jis nereaguoja į ping, praleisti šį įrenginį.';

$GLOBALS["lang"]['Should we populate the external system from our local devices.'] = 'Ar mes turėtume sukurti išorinę sistemą iš mūsų vietinių įrenginių.';

$GLOBALS["lang"]['Should we retrieve all DNS names'] = 'Ar turėtume gauti visus DNS vardus';

$GLOBALS["lang"]['Should we run an audit and submit it (y/n).'] = 'Ar turėtume atlikti auditą ir jį pateikti (y / n).';

$GLOBALS["lang"]['Should we test for SNMP using UDP port 161.'] = 'Ar turėtume išbandyti SNMP naudodami UDP 161 prievadą.';

$GLOBALS["lang"]['Should we test for SSH using TCP port 22.'] = 'Ar turėtume išbandyti SSH naudojant TCP prievadą 22.';

$GLOBALS["lang"]['Should we test for WMI using TCP port 135.'] = 'Turėtume išbandyti WMI naudodami TCP 135 prievadą.';

$GLOBALS["lang"]['Should we uninstall the agent (y/n).'] = 'Ar turėtume pašalinti agentą (y / n).';

$GLOBALS["lang"]['Should we use the system or user level proxy to submit the audit result.'] = 'Ar mes turėtume naudoti sistemą ar vartotojo lygio įgaliojimą pateikti audito rezultatą.';

$GLOBALS["lang"]['Should we use the win32_product WMI class (not recommended by Microsoft) when retrieving installed software.'] = 'Ar turėtume naudoti win32 _ product WMI klasę (nerekomenduojama Microsoft), kai gauname įdiegtą programinę įrangą.';

$GLOBALS["lang"]['Should we use this method to authenticate user credentials. Set to <code>y</code> or <code>n</code>.'] = 'Ar turėtume naudoti šį metodą, kad patvirtintume naudotojo tapatybę. Nustatyti į <code>y</code> arba <code>n</code>.';

$GLOBALS["lang"]['Should we use this method to populate a users roles. The field <code>use_auth</code> must be set to <code>y</code> to use this. Set to <code>y</code> or <code>n</code>.'] = 'Ar mes turėtume naudoti šį metodą populate vartotojų vaidmenis. Laukelis <code>use_auth</code> turi būti nustatyta: <code>y</code> naudoti tai. Nustatyti į <code>y</code> arba <code>n</code>.';

$GLOBALS["lang"]['Should we use this value to match external and internal devices. Our default Integration uses IP and UUID here. If either of these match between external and internal device, we consider them to be the same device.'] = 'Ar turėtume naudoti šią reikšmę, kad atitiktų išorinius ir vidinius įrenginius. Mūsų numatytoji Integravimas naudoja IP ir UUID čia. Jei kuris nors iš šių rungtynių tarp išorinio ir vidinio įrenginių, mes manome, kad jie yra tas pats įrenginys.';

$GLOBALS["lang"]['Show All'] = 'Rodyti visus';

$GLOBALS["lang"]['sid'] = 'Sid';

$GLOBALS["lang"]['Sid'] = 'Sid';

$GLOBALS["lang"]['sidebar'] = 'Sidebaras';

$GLOBALS["lang"]['Sidebar'] = 'Sidebaras';

$GLOBALS["lang"]['Sierra Leone'] = 'Siera Leonė';

$GLOBALS["lang"]['Singapore'] = 'Singapūras';

$GLOBALS["lang"]['Site A'] = 'A dalis';

$GLOBALS["lang"]['Site B'] = 'B vieta';

$GLOBALS["lang"]['site_hours_a'] = 'Svetainės valandos A';

$GLOBALS["lang"]['Site Hours A'] = 'Svetainės valandos A';

$GLOBALS["lang"]['site_hours_b'] = 'B vietos valandos';

$GLOBALS["lang"]['Site Hours B'] = 'B vietos valandos';

$GLOBALS["lang"]['size'] = 'Dydis';

$GLOBALS["lang"]['Size'] = 'Dydis';

$GLOBALS["lang"]['slaves'] = 'Vergai';

$GLOBALS["lang"]['Slaves'] = 'Vergai';

$GLOBALS["lang"]['Slovak'] = 'slovakų';

$GLOBALS["lang"]['Slovakia (Slovak Republic)'] = 'Slovakija (Slovakija)';

$GLOBALS["lang"]['Slovenia'] = 'Slovėnija';

$GLOBALS["lang"]['Slovenian'] = 'slovėnų';

$GLOBALS["lang"]['Smart Status'] = 'Išmanusis statusas';

$GLOBALS["lang"]['smversion'] = 'Smversion';

$GLOBALS["lang"]['Smversion'] = 'Smversion';

$GLOBALS["lang"]['Sneaky'] = 'Snaky';

$GLOBALS["lang"]['snmp_enterprise_id'] = 'Snmp Enterprise ID';

$GLOBALS["lang"]['Snmp Enterprise ID'] = 'Snmp Enterprise ID';

$GLOBALS["lang"]['snmp_enterprise_name'] = 'Snmp įmonės pavadinimas';

$GLOBALS["lang"]['Snmp Enterprise Name'] = 'Snmp įmonės pavadinimas';

$GLOBALS["lang"]['snmp_oid'] = 'Snmp alyva';

$GLOBALS["lang"]['Snmp Oid'] = 'Snmp alyva';

$GLOBALS["lang"]['snmp_timeout'] = 'Snmp laiko limitas';

$GLOBALS["lang"]['Snmp Timeout'] = 'Snmp laiko limitas';

$GLOBALS["lang"]['snmp_version'] = 'Snmp versija';

$GLOBALS["lang"]['Snmp Version'] = 'Snmp versija';

$GLOBALS["lang"]['So a script is not working on a recalcitrant device. Grrr. The scripts for Windows, Linux, and MacOS all accept the debugging argument. This can be set in the script itself, or provided on the command line. Run the script using that option set to 5 and you should see in which section of the script the failure occurs. For example'] = 'Scenarijus nedirba su perversmu. Grr. Windows, Linux ir MacOS scenarijai priima derinimo argumentą. Tai galima nustatyti pačiame scenarijuje arba pateikti komandų eilutėje. Vykdyti scenarijų naudojant šią parinktį nustatyti iki 5 ir turėtumėte pamatyti, kurioje scenarijaus skyriuje įvyksta nesėkmė. Pavyzdžiui';

$GLOBALS["lang"]['So apart from a regular word, what other options are there - I am glad you asked! As per the standard Open-AudIT API, we have several operators for filtering. Operators that can precede the value are'] = 'Taigi, be įprasto žodžio, kokie kiti variantai yra - džiaugiuosi, kad paklausėte! Pagal standartą Open- AudIT API, mes turime keletą operatorių filtravimo. Operatoriai, kurie gali prieš vertę yra';

$GLOBALS["lang"]['So you have an issue providing Open-AudIT credentials to discover your devices. I have an answer - dont then! Sure, I mean, discovery is the best thing since sliced bread. You do not need to know ahead of time <i>Whats On Your Network</i>. But how can you extract data from devices without providing credentials?<br><br>In the case of computers, an easy option is to copy the appropriate audit script to the target machines and set it to execute on a schedule. More details on the wiki. The machines will send their data to Open-AudIT on that schedule, almost as if you were running discovery. The device simply runs the audit script on a schedule (again, you can read the audit script) as the user you tell it to and sends the output to the server. No credentials are involved at all.<br><br>And now we have Agents for Windows. The advantages of an actual installed Agent are'] = 'Taigi jūs turite problemą, suteikiančią Open- AudIT įgaliojimus atrasti savo prietaisus. Aš turiu atsakymą. Žinoma, atradimas yra geriausias dalykas nuo pjaustytos duonos. Jums nereikia žinoti prieš laiką <i>Kas jūsų tinkle</i>. Bet kaip jūs galite išgauti duomenis iš įrenginių, neteikiant įgaliojimus?<br/><br/>Kompiuterių atveju, lengva galimybė yra nukopijuoti tinkamą audito scenarijų į tikslines mašinas ir nustatyti jį atlikti pagal tvarkaraštį. Daugiau informacijos apie wiki. Mašinos siųs savo duomenis į Open- AudIT tą tvarkaraštį, beveik taip, tarsi jūs buvo paleisti atradimas. Įrenginys tiesiog veikia audito scenarijų dėl grafiko (vėl, galite perskaityti audito scenarijų) kaip vartotojas, jums pasakyti jį ir siunčia išvesties į serverį. Jokių įgaliojimų nėra.<br/><br/>O dabar turime agentų Windows. Faktinio įdiegto agento privalumai yra:';

$GLOBALS["lang"]['socket'] = 'Lizdas';

$GLOBALS["lang"]['Socket'] = 'Lizdas';

$GLOBALS["lang"]['software'] = 'Programinė įranga';

$GLOBALS["lang"]['Software'] = 'Programinė įranga';

$GLOBALS["lang"]['Software Found Last 7 Days'] = 'Programinė įranga Rasta Paskutinės 7 dienos';

$GLOBALS["lang"]['Software Found Today'] = 'Programinė įranga Rasta šiandien';

$GLOBALS["lang"]['Software Found Yesterday'] = 'Programinė įranga Rasta vakar';

$GLOBALS["lang"]['software_key'] = 'Programinės įrangos raktas';

$GLOBALS["lang"]['Software Key'] = 'Programinės įrangos raktas';

$GLOBALS["lang"]['Software License Reporting'] = 'Programinės įrangos licencijos pranešimas';

$GLOBALS["lang"]['software_name'] = 'Programinė įranga';

$GLOBALS["lang"]['Software Name'] = 'Programinė įranga';

$GLOBALS["lang"]['Software Policies'] = 'Programinės įrangos politika';

$GLOBALS["lang"]['software_revision'] = 'Programinės įrangos peržiūra';

$GLOBALS["lang"]['Software Revision'] = 'Programinės įrangos peržiūra';

$GLOBALS["lang"]['software_version'] = 'Programinės įrangos versija';

$GLOBALS["lang"]['Software Version'] = 'Programinės įrangos versija';

$GLOBALS["lang"]['Solaris'] = 'Solaris';

$GLOBALS["lang"]['Solomon Islands'] = 'Saliamono Salos';

$GLOBALS["lang"]['Somalia, Somali Republic'] = 'Somalis, Somalio Respublika';

$GLOBALS["lang"]['Some collections can be executed - queries, etc - see below.'] = 'Kai kurias kolekcijas galima atlikti - užklausas ir t. t. - žr. toliau.';

$GLOBALS["lang"]['Some examples are at the bottom of this page. All endpoints also have a minimum list of required fields. These are below.'] = 'Keletas pavyzdžių yra šio puslapio apačioje. Visi rezultatai taip pat turi minimalų reikalaujamų laukų sąrašą. Jie yra žemiau.';

$GLOBALS["lang"]['Some of our templates support the new move to dataTables, using server side processing. This massivley improves load times.'] = 'Kai kurie mūsų šablonai palaiko naują perkėlimą į duomenų lenteles, naudojant serverio pusės apdorojimą. Šis masyvas pagerina pakrovimo laiką.';

$GLOBALS["lang"]['Some other error has occurred when attempting to bind to the LDAP server. It is contactable (ie, the <i>connect</i> above has worked), but for some other reason, binding has not occurred. Check the logs on the LDAP server.'] = 'Bandant prisijungti prie LDAP serverio įvyko kita klaida. Jis yra kontaktinis (ty, <i>prisijungti</i> pirmiau dirbo), tačiau dėl kai kurių kitų priežasčių, saistymas neįvyko. Patikrinkite žurnalus LDAP serveryje.';

$GLOBALS["lang"]['Something has gone seriously wrong. Open-AudIT cannot read the <i>orgs</i> table.'] = 'Kažkas atsitiko rimtai. Open- AudIT negali perskaityti <i>orgai</i> lentelė.';

$GLOBALS["lang"]['Something has gone seriously wrong. Open-AudIT cannot read the <i>roles</i> table.'] = 'Kažkas atsitiko rimtai. Open- AudIT negali perskaityti <i>vaidmenys</i> lentelė.';

$GLOBALS["lang"]['Sometimes agentless discovery just does not fit your use-case. Maybe your PCs have tight firewalls. Maybe they are not on the network when your discoveries are scheduled. Maybe they are used by remote workers. Whatever the case, this is where an agent can help. Install it on the target machine and it will <i>check-in</i> with your Open-AudIT server on a schedule and accept tasks. The most common task the server requests is for the agent to audit itself and send the result.'] = 'Kartais bejėgis atradimas tiesiog netinka jūsų naudojimui. Galbūt jūsų asmeniniai kompiuteriai turi griežtas ugniasienes. Galbūt jie nėra tinkle, kai jūsų atradimai yra suplanuoti. Galbūt juos naudoja nuotoliniai darbuotojai. Kad ir kas būtų, čia gali padėti agentas. Įdiekite jį į taikinį ir jis <i>registruoti- in</i> su savo Open- AudIT serveriu pagal tvarkaraštį ir priimti užduotis. Dažniausiai serveryje prašoma atlikti paties agento auditą ir išsiųsti rezultatą.';

$GLOBALS["lang"]['Sort'] = 'Rikiuoti';

$GLOBALS["lang"]['sound'] = 'Garsas';

$GLOBALS["lang"]['Sound'] = 'Garsas';

$GLOBALS["lang"]['source'] = 'Šaltinis';

$GLOBALS["lang"]['Source'] = 'Šaltinis';

$GLOBALS["lang"]['South Africa'] = 'Pietų Afrika';

$GLOBALS["lang"]['South Georgia and the South Sandwich Islands'] = 'Pietų Džordžija ir Pietų Sandvičo salos';

$GLOBALS["lang"]['Spain'] = 'Ispanija';

$GLOBALS["lang"]['Spanish'] = 'Ispanų';

$GLOBALS["lang"]['Specific to Azure.'] = 'Specifinis Azure.';

$GLOBALS["lang"]['Specific to OKTA.'] = 'Specifinis OKTA.';

$GLOBALS["lang"]['Specifies a comma-separated list of targets (no spaces) to be excluded from the scan. The list you pass in uses normal Nmap syntax, so it can include hostnames, CIDR netblocks, octet ranges, etc.'] = 'Nurodomas bendras atskirtų taikinių, kurie turi būti pašalinti iš skenavimo, sąrašas (tarpų nėra). Sąrašas jums perduoti naudoja įprastą Nmap sintaksė, todėl ji gali apimti hostnames, CIDR netblocks, aštuonkojų intervalai, ir tt.';

$GLOBALS["lang"]['speed'] = 'Greitis';

$GLOBALS["lang"]['Speed'] = 'Greitis';

$GLOBALS["lang"]['speed_down_a'] = 'Greitis žemyn A';

$GLOBALS["lang"]['Speed Down A'] = 'Greitis žemyn A';

$GLOBALS["lang"]['speed_down_b'] = 'Greitis žemyn B';

$GLOBALS["lang"]['Speed Down B'] = 'Greitis žemyn B';

$GLOBALS["lang"]['speed_up_a'] = 'A greitis';

$GLOBALS["lang"]['Speed Up A'] = 'A greitis';

$GLOBALS["lang"]['speed_up_b'] = 'B greitis';

$GLOBALS["lang"]['Speed Up B'] = 'B greitis';

$GLOBALS["lang"]['sql'] = 'Sql';

$GLOBALS["lang"]['Sql'] = 'Sql';

$GLOBALS["lang"]['Sri Lanka'] = 'Šri Lanka';

$GLOBALS["lang"]['ssh_ports'] = 'Ssh Ports';

$GLOBALS["lang"]['Ssh Ports'] = 'Ssh Ports';

$GLOBALS["lang"]['ssh_timeout'] = 'Comment';

$GLOBALS["lang"]['Ssh Timeout'] = 'Comment';

$GLOBALS["lang"]['Stage 1: Documentation review'] = '1 etapas. Dokumentų peržiūra';

$GLOBALS["lang"]['Stage 2: Implementation and effectiveness review'] = '2 etapas: Įgyvendinimas ir veiksmingumo peržiūra';

$GLOBALS["lang"]['Stand-Alone'] = '@ item: inlistbox';

$GLOBALS["lang"]['Standard'] = 'Standartinė';

$GLOBALS["lang"]['standard_id'] = 'Standartinis ID';

$GLOBALS["lang"]['Standard ID'] = 'Standartinis ID';

$GLOBALS["lang"]['standards'] = 'Standartai';

$GLOBALS["lang"]['Standards'] = 'Standartai';

$GLOBALS["lang"]['standards_policies'] = 'Standartų politika';

$GLOBALS["lang"]['Standards Policies'] = 'Standartų politika';

$GLOBALS["lang"]['standards_results'] = 'Standartų rezultatai';

$GLOBALS["lang"]['Standards Results'] = 'Standartų rezultatai';

$GLOBALS["lang"]['start_date'] = 'Pradžios data';

$GLOBALS["lang"]['Start Date'] = 'Pradžios data';

$GLOBALS["lang"]['start_mode'] = 'Pradžios veiksena';

$GLOBALS["lang"]['Start Mode'] = 'Pradžios veiksena';

$GLOBALS["lang"]['Start a web browser and go to'] = 'Pradėti žiniatinklio naršyklę ir eiti į';

$GLOBALS["lang"]['started_date'] = 'Pradedama data';

$GLOBALS["lang"]['Started Date'] = 'Pradedama data';

$GLOBALS["lang"]['Starting June 2018 Google has implemented a pay-as-you-go pricing model for the Google Maps Platform APIs. Previously, most users with moderate usage could use Google Maps, which are embedded into opCharts and Open-AudIT Professional/Enterprise, for free. Googles new policy is outlined here,'] = 'Nuo 2018 m. birželio mėn. "Google" įdiegė "pay-as- you-go" kainodaros modelį "Google Maps" platformos API. Anksčiau dauguma vartotojų su vidutinio naudojimo galėtų naudoti "Google" žemėlapius, kurie yra įtraukti į ofCharts ir Open- AudIT Professional / Enterprise, nemokamai. Čia pateikiama nauja "Google" politika,';

$GLOBALS["lang"]['Starts With'] = 'Pradeda su';

$GLOBALS["lang"]['state'] = 'Būsena';

$GLOBALS["lang"]['State'] = 'Būsena';

$GLOBALS["lang"]['Stats'] = 'Stotys';

$GLOBALS["lang"]['status'] = 'Būsena';

$GLOBALS["lang"]['Status'] = 'Būsena';

$GLOBALS["lang"]['Storage'] = 'Laikymas';

$GLOBALS["lang"]['storage_count'] = 'Saugyklų skaičius';

$GLOBALS["lang"]['Storage Count'] = 'Saugyklų skaičius';

$GLOBALS["lang"]['Storage area network'] = 'Saugojimo zonos tinklas';

$GLOBALS["lang"]['Storage-Area Network'] = 'Teritorijos tinklas';

$GLOBALS["lang"]['string'] = 'Eilutė';

$GLOBALS["lang"]['String'] = 'Eilutė';

$GLOBALS["lang"]['sub_resource_id'] = 'SubResource ID';

$GLOBALS["lang"]['Sub Resource ID'] = 'SubResource ID';

$GLOBALS["lang"]['sub_type'] = 'SubType';

$GLOBALS["lang"]['Sub Type'] = 'SubType';

$GLOBALS["lang"]['subject_key_ident'] = 'Dalykas';

$GLOBALS["lang"]['Subject Key Ident'] = 'Dalykas';

$GLOBALS["lang"]['Submit'] = 'Pateikti';

$GLOBALS["lang"]['Submit Online'] = 'Pateikite internete';

$GLOBALS["lang"]['Submitted From'] = 'Pateikta iš';

$GLOBALS["lang"]['Subnet'] = 'Subtinklas';

$GLOBALS["lang"]['Subnet Discoveries'] = 'Subneto dengimas';

$GLOBALS["lang"]['Subscription ID'] = 'Prenumeratos ID';

$GLOBALS["lang"]['suburb'] = 'Suturb';

$GLOBALS["lang"]['Suburb'] = 'Suturb';

$GLOBALS["lang"]['Success'] = 'Sėkmė';

$GLOBALS["lang"]['Sudan'] = 'Sudanas';

$GLOBALS["lang"]['Sudo Password'] = 'Sudo slaptažodis';

$GLOBALS["lang"]['Sudo Password (optional)'] = 'Sudo slaptažodis (neprivaloma)';

$GLOBALS["lang"]['suite'] = 'Siuitas';

$GLOBALS["lang"]['Suite'] = 'Siuitas';

$GLOBALS["lang"]['summaries'] = 'Santrumpos';

$GLOBALS["lang"]['Summaries'] = 'Santrumpos';

$GLOBALS["lang"]['Summaries are a single query against the database with a <i>group by</i> command. Using this simple method we can easily create a summary for virtually any attribute.<br><br>We no longer require a separate report for each <i>type</i> of a device. We now simply have a summary that groups by <i>devices.type</i> and shows the result. You can then click on a given type from the list and see the matching devices. In this case, one Summary replaces (potentially) 78 reports (there are 78 device types).<br><br>A summary is different to a query in that a summary is designed to group items by a given attribute then provide a <i>click through</i> link to the actual devices. A query is simply a list of items with no further links. As above - this of a Summary as a combined <i>report + subreport</i>, whereas a query is simply a single Report.<br><br>Summaries have a different collection template to the other resources within Open-AudIT. This template shows the Summary as you would expect and also shows buttons with counts of other resources. This page is designed to be the HomePage of Open-AudIT.'] = 'Santrumpos yra vienas užklausa prieš duomenų bazę su <i>grupė pagal</i> įsakymas. Naudojant šį paprastą metodą, mes galime lengvai sukurti santrauką beveik bet atributas.<br/><br/>Mums nebereikia atskiro pranešimo kiekvienam <i>tipas</i> prietaiso. Dabar mes tiesiog turime santrauką, kad grupės <i>prietaisai. tipas</i> ir rodo rezultatą. Tada galite paspausti ant tam tikro tipo iš sąrašo ir pamatyti atitikimo prietaisus. Šiuo atveju viena santrauka pakeičia (potencialiai) 78 ataskaitas (yra 78 įrenginių tipai).<br/><br/>Santrauka skiriasi nuo užklausos, kad santrauka yra skirta grupuoti elementus pagal tam tikrą požymį, tada pateikti <i>spustelėkite per</i> nuoroda į faktinius prietaisus. Užklausa yra tiesiog sąrašą daiktų, kurie neturi papildomų nuorodų. Kaip nurodyta pirmiau - tai santrauka kaip bendras <i>ataskaita + subataskaita</i>, o užklausa yra tik vienas pranešimas.<br/><br/>Santrumpos turi kitą surinkimo šabloną kitų išteklių per Open- AudIT. Šis šablonas rodo santrauką, kaip jūs tikitės, ir taip pat rodo mygtukus su skaičių kitų išteklių. Šis puslapis yra skirtas būti HomePage Open- AudIT.';

$GLOBALS["lang"]['Summaries are designed to group items by a particular matching column and then to provide a link to individual devices. In the previous versions of Open-AudIT, this would have been two different items - a report and subreport. We have now bundled these into what we call a Summary.'] = 'Santrumpos yra skirtos grupuoti elementus pagal tam tikrą atitikimo stulpelį ir tada pateikti nuorodą į atskirus prietaisus. Ankstesnėse Open- AudIT versijose tai būtų buvę du skirtingi punktai - ataskaita ir subataskaita. Dabar mes sujungėme juos į tai, ką vadiname santrauka.';

$GLOBALS["lang"]['Summaries provide drilldown reporting capabilities. Simple, intuitive, powerful.'] = 'Santrumpos suteikia parengties pranešimų teikimo galimybes. Paprastas, intuityvus, galingas.';

$GLOBALS["lang"]['Summaries take the same arguments as Queries.'] = 'Santrumpos remiasi tais pačiais argumentais kaip ir užklausos.';

$GLOBALS["lang"]['Summary'] = 'Santrauka';

$GLOBALS["lang"]['Sunday'] = 'Sekmadienis';

$GLOBALS["lang"]['supplier'] = 'Tiekėjas';

$GLOBALS["lang"]['Supplier'] = 'Tiekėjas';

$GLOBALS["lang"]['Support'] = 'Parama';

$GLOBALS["lang"]['Supported types are <code>subnet</code>, <code>seed</code> and <code>active directory</code>.'] = 'Palaikomi tipai: <code>subnet</code>, <code>seed</code> ir <code>active directory</code>.';

$GLOBALS["lang"]['Supports compliance with legal and regulatory requirements'] = 'Remia teisinių ir norminių reikalavimų laikymąsi';

$GLOBALS["lang"]['Suriname'] = 'Surinamas';

$GLOBALS["lang"]['Surveillance Audits:</strong> Annual audits to maintain certification'] = 'Priežiūros auditai: Metiniai auditai sertifikavimui išlaikyti';

$GLOBALS["lang"]['Svalbard & Jan Mayen Islands'] = 'Svalbard & Jan Mayen salos';

$GLOBALS["lang"]['Swaziland'] = 'Svazilandas';

$GLOBALS["lang"]['Sweden'] = 'Švedija';

$GLOBALS["lang"]['Swedish'] = 'Švedų';

$GLOBALS["lang"]['switch_device_id'] = 'Perjungti įrenginio ID';

$GLOBALS["lang"]['Switch Device ID'] = 'Perjungti įrenginio ID';

$GLOBALS["lang"]['switch_port'] = 'Perjungti prievadą';

$GLOBALS["lang"]['Switch Port'] = 'Perjungti prievadą';

$GLOBALS["lang"]['Switzerland, Swiss Confederation'] = 'Šveicarija, Šveicarijos Konfederacija';

$GLOBALS["lang"]['Symptom'] = 'Simptomas';

$GLOBALS["lang"]['Syrian Arab Republic'] = 'Sirijos Arabų Respublika';

$GLOBALS["lang"]['sysContact'] = 'Comment';

$GLOBALS["lang"]['SysContact'] = 'Comment';

$GLOBALS["lang"]['sysDescr'] = 'SysDescr';

$GLOBALS["lang"]['SysDescr'] = 'SysDescr';

$GLOBALS["lang"]['sysLocation'] = 'Comment';

$GLOBALS["lang"]['SysLocation'] = 'Comment';

$GLOBALS["lang"]['sysName'] = 'Comment';

$GLOBALS["lang"]['SysName'] = 'Comment';

$GLOBALS["lang"]['sysObjectID'] = 'SysObjectID';

$GLOBALS["lang"]['SysObjectID'] = 'SysObjectID';

$GLOBALS["lang"]['sysUpTime'] = 'Comment';

$GLOBALS["lang"]['SysUpTime'] = 'Comment';

$GLOBALS["lang"]['system_component'] = 'Sistemos komponentas';

$GLOBALS["lang"]['System Component'] = 'Sistemos komponentas';

$GLOBALS["lang"]['System-Area Network'] = 'Sistemos- Area tinklas';

$GLOBALS["lang"]['TX Bitrate'] = 'TX bitų dažnis';

$GLOBALS["lang"]['TX Freq'] = 'TX Freq';

$GLOBALS["lang"]['TX Level'] = 'TX lygis';

$GLOBALS["lang"]['TX Power'] = 'TX galia';

$GLOBALS["lang"]['TX Profile'] = 'TX profilis';

$GLOBALS["lang"]['Table'] = 'Lentelė';

$GLOBALS["lang"]['tag'] = 'Žyma';

$GLOBALS["lang"]['Tag'] = 'Žyma';

$GLOBALS["lang"]['tag_1'] = '1 žyma';

$GLOBALS["lang"]['Tag 1'] = '1 žyma';

$GLOBALS["lang"]['tag_2'] = '2 žyma';

$GLOBALS["lang"]['Tag 2'] = '2 žyma';

$GLOBALS["lang"]['tag_3'] = '3 žyma';

$GLOBALS["lang"]['Tag 3'] = '3 žyma';

$GLOBALS["lang"]['Tagalog'] = 'Tagalogas';

$GLOBALS["lang"]['tags'] = 'Žymos';

$GLOBALS["lang"]['Tags'] = 'Žymos';

$GLOBALS["lang"]['Tags :: '] = 'Žymos: ';

$GLOBALS["lang"]['Taiwan'] = 'Taivanas';

$GLOBALS["lang"]['Tajikistan'] = 'Tadžikistanas';

$GLOBALS["lang"]['Take note of all output and action each item as appropriate.'] = 'Atkreipkite dėmesį į visą produkciją ir atitinkamai atlikti kiekvieną elementą.';

$GLOBALS["lang"]['Tanzania'] = 'Tanzanija';

$GLOBALS["lang"]['Target Computer'] = 'Tikslinis kompiuteris';

$GLOBALS["lang"]['task'] = 'Užduotis';

$GLOBALS["lang"]['Task'] = 'Užduotis';

$GLOBALS["lang"]['tasks'] = 'Užduotys';

$GLOBALS["lang"]['Tasks'] = 'Užduotys';

$GLOBALS["lang"]['Tasks can be one of several distinct types: Baseline, Discovery, Report, Query, Summary or Collector.'] = 'Užduotys gali būti viena iš kelių skirtingų tipų: pradinis, paieškos, ataskaitos, užklausos, santraukos ar kolektoriaus.';

$GLOBALS["lang"]['tcp_ports'] = 'Tcp prievadai';

$GLOBALS["lang"]['Tcp Ports'] = 'Tcp prievadai';

$GLOBALS["lang"]['Technical Details'] = 'Techniniai duomenys';

$GLOBALS["lang"]['tenant'] = 'Nuomininkas';

$GLOBALS["lang"]['Tenant'] = 'Nuomininkas';

$GLOBALS["lang"]['Tenant ID'] = 'Data';

$GLOBALS["lang"]['Tennant ID'] = 'Tenanto ID';

$GLOBALS["lang"]['ternary'] = 'Pabaisa';

$GLOBALS["lang"]['Ternary'] = 'Pabaisa';

$GLOBALS["lang"]['Test 1'] = '1 bandymas';

$GLOBALS["lang"]['Test 2'] = '2 bandymas';

$GLOBALS["lang"]['Test 3'] = '3 bandymas';

$GLOBALS["lang"]['Test Email'] = 'Bandymo e. paštas';

$GLOBALS["lang"]['test_minutes'] = 'Bandymo protokolas';

$GLOBALS["lang"]['Test Minutes'] = 'Bandymo protokolas';

$GLOBALS["lang"]['test_os'] = 'Bandymo O';

$GLOBALS["lang"]['Test Os'] = 'Bandymo O';

$GLOBALS["lang"]['test_subnet'] = 'Bandymo posistemis';

$GLOBALS["lang"]['Test Subnet'] = 'Bandymo posistemis';

$GLOBALS["lang"]['tests'] = 'Bandymai';

$GLOBALS["lang"]['Tests'] = 'Bandymai';

$GLOBALS["lang"]['Text'] = 'Tekstas';

$GLOBALS["lang"]['Thai'] = 'Tajų';

$GLOBALS["lang"]['Thailand'] = 'Tailandas';

$GLOBALS["lang"]['Thank you for starting your journey with the best discovery and inventory tool around.'] = 'Dėkojame, kad pradėjote kelionę su geriausiu paieškos ir inventoriaus įrankiu.';

$GLOBALS["lang"]['Thanks to'] = 'Dėka';

$GLOBALS["lang"]['Thats it! You have just edited the attributes of as many devices as you need to.'] = 'Taip! Jūs ką tik redagavo tiek prietaisų atributus, kiek jums reikia.';

$GLOBALS["lang"]['The <i>Roles</i> endpoint allows you to manage the set of permissions(Create, Read, Update, Delete) that are granted to the users and are applied to each endpoint.'] = '4. 4 skyrių). <i>Vaidmenys</i> vertinamoji baigtis leidžia jums valdyti leidimų rinkinį (Sukurti, Skaityti, Atnaujinti, Trinti), kurie yra suteikti vartotojams ir taikomi kiekvienam rezultatui.';

$GLOBALS["lang"]['The API uses a cookie. You can request a cookie by sending a POST to the URL below, containing the username and password attributes and values:'] = 'API naudoja slapuką. Galite prašyti slapuko, išsiųsdami POST žemiau esančiame URL, kuriame yra naudotojo vardas ir slaptažodžio atributai bei reikšmės:';

$GLOBALS["lang"]['The Active Directory domain to retrieve a list of subnets from.'] = 'Active Directory domenas, iš kurio gauti potinklių sąrašą.';

$GLOBALS["lang"]['The Active Directory server to retrieve a list of subnets from.'] = 'Active Directory serveris, iš kurio galima gauti potinklių sąrašą.';

$GLOBALS["lang"]['The Applications endpoint allows you to define an application which you can then associate to a device (or devices).'] = 'Programos tikslas leidžia jums apibrėžti programą, kurią tada galite susieti su prietaisu (ar įrenginiais).';

$GLOBALS["lang"]['The Attributes endpoint allows you to add customized values to different attributes in Open-AudIT, at the moment this feature works on the Class, Environment, Status and Type attributes on Devices, the Type attribute for both Locations and Orgs as well as the Menu Category for Queries. If you view an item of one of the prvious types (say view a Lkocation) you will notice the Type attribute must be selected from a drop-down box. This is where those values are stored. Hence, if you would like to add a new Type to be chosen for a Location, add it using the Attributes feature.'] = 'Požymiai baigtis leidžia jums pridėti individualizuotas reikšmes į skirtingus atributus Open- AudIT, šiuo metu ši funkcija veikia ant klasės, Aplinkos, Statusas ir tipas atributus įrenginių, tipas atributas tiek vietų ir orgų, taip pat meniu Kategorija užklausų. Jei peržiūrite vieno iš gretimų tipų elementą (tarkim, peržiūrėkite Lkocking), Jūs pastebėsite, kad tipo atributas turi būti pasirinktas iš nuleisto langelio. Čia saugomos šios vertės. Taigi, jei norite pridėti naują tipą turi būti pasirinkta vieta, pridėti jį naudojant požymių funkcija.';

$GLOBALS["lang"]['The Automatable metric captures the answer to the question <strong>Can an attacker automate exploitation events for this vulnerability across multiple targets?</strong> based on steps 1-4 of the kill chain. These steps are reconnaissance, weaponization, delivery, and exploitation (Not Defined, No, Yes).'] = 'Automatinis metrinis fiksuoja atsakymą į klausimą <strong>Ar užpuolikas gali automatizuoti išnaudojimo įvykius dėl šio pažeidžiamumo daugelyje tikslų?</strong> remiantis 1-4 žingsniais žudymo grandinėje. Šie žingsniai yra žvalgyba, ginklavimas, pristatymas, ir išnaudojimas (Neapibrėžta, Ne, Taip).';

$GLOBALS["lang"]['The CVE has been marked as invalid or withdrawn in the CVE List. It remains in the NVD but is excluded from default search results.'] = 'CVE buvo pažymėta negaliojančia arba išbraukta iš CVE sąrašo. Ji išlieka NVD, bet nėra įtraukta į numatytuosius paieškos rezultatus.';

$GLOBALS["lang"]['The CVE has been published to the CVE List and included in the NVD dataset. Initial ingestion only.'] = 'CVE buvo paskelbta CVE sąraše ir įtraukta į NVD duomenų rinkinį. Tik prarijus.';

$GLOBALS["lang"]['The CVE has been updated after initial analysis. NVD enrichment data may have been revised.'] = 'CVE buvo atnaujintas po pradinės analizės. NVD sodrinimo duomenys galėjo būti peržiūrėti.';

$GLOBALS["lang"]['The CVE identifier.'] = 'CVE identifikatorius.';

$GLOBALS["lang"]['The CVE is actively being enriched with CVSS scores, CWE classifications, reference tags, and CPE applicability.'] = 'CVE yra aktyviai praturtintas CVSS balai, CWE klasifikacijos, nuorodos žymės, ir CPE pritaikomumas.';

$GLOBALS["lang"]['The CVE is not currently prioritized for enrichment due to resource constraints or other reasons.'] = 'Šiuo metu CVE nėra prioritetinė sodrinimo dėl išteklių trūkumo ar kitų priežasčių.';

$GLOBALS["lang"]['The CVE is queued for enrichment by NVD analysts. No detailed metadata yet.'] = 'CVE yra eilėje dėl praturtinimo NVD analitikai. Dar nėra išsamių metaduomenų.';

$GLOBALS["lang"]['The Cloud that owns this item. Links to <code>clouds.id</code>.'] = 'Debesis, kuriam priklauso šis daiktas. Nuorodos į <code>clouds.id</code>.';

$GLOBALS["lang"]['The Device Seed Discovery type is the newest highly-effective method for network crawling, giving you the ability to target your network as narrowly or as broadly as you need. It is fast, it works and it is great.'] = 'Prietaiso sėklų paieškos tipas yra naujausias itin veiksmingas metodas tinklo šliaužimui, suteikiantis galimybę nukreipti tinklą taip siaurai arba plačiai, kaip reikia. Jis greitas, veikia ir yra puikus.';

$GLOBALS["lang"]['The Discovery Scan Options we ship are detailed in the table below. As above, Enterprise users can create more of these or edit the shipped items.'] = 'Discovery skaitymas Parinktys, kurias mes laive yra išsamiai nurodyta lentelėje toliau. Kaip pirmiau, Įmonių vartotojai gali sukurti daugiau iš šių arba redaguoti išsiųstus elementus.';

$GLOBALS["lang"]['The Elevated User query'] = 'Padidėjusi vartotojo užklausa';

$GLOBALS["lang"]['The Executables feature scans the disk of a device as part of the audit and checks that every executable file is known to the package manager. Because it uses the package manager, the feature applies to Linux target devices only, and further than that, only rpm or deb based distributions. Anything Redhat or Debian based should work.'] = 'Executables funkcija nuskaito prietaiso diską kaip audito dalį ir tikrina, kad kiekvienas vykdomasis failas yra žinomas paketo valdytojui. Kadangi ji naudoja paketų tvarkyklę, ši funkcija taikoma tik Linux tiksliniams įrenginiams, ir toliau nei tai, tik per min-1 arba deb-based distributions. Bet kas Redhat ar Debian pagrindu turėtų veikti.';

$GLOBALS["lang"]['The FROM'] = 'IŠ';

$GLOBALS["lang"]['The Group used to run the Baseline. Links to <code>groups.id</code>.'] = 'Grupė veikė pagal bazinį scenarijų. Nuorodos į <code>groups.id</code>.';

$GLOBALS["lang"]['The ID from the devices table (the devices.name will be displayed) of the NTU at this end of the connection. Links to <code>devices.id</code>.'] = 'NTU ID iš prietaisų lentelės (bus rodomas devices.name) šiame ryšio gale. Nuorodos į <code>devices.id</code>.';

$GLOBALS["lang"]['The ID from the imported benchmark policy.'] = 'ID iš importuotos lyginamojo indekso politikos.';

$GLOBALS["lang"]['The ID from the locations table (the locations.name will be displayed) of this end of the connection. Links to <code>locations.id</code>. The A location is usually the <code>FROM</code> location.'] = 'Šio ryšio pabaigos ID iš vietos lentelės (vietovė. Pavadinimas bus rodomas). Nuorodos į <code>locations.id</code>. A vieta paprastai yra <code>FROM</code> vieta.';

$GLOBALS["lang"]['The ID from the locations table (the locations.name will be displayed) of this end of the connection. Links to <code>locations.id</code>. The B location is usually the <code>TO</code> location.'] = 'Šio ryšio pabaigos ID iš vietos lentelės (vietovė. Pavadinimas bus rodomas). Nuorodos į <code>locations.id</code>. B vieta paprastai yra <code>TO</code> vieta.';

$GLOBALS["lang"]['The ID of the associated device (if any). Links to <code>devices.id</code>.'] = 'Susijusio prietaiso ID (jei yra). Nuorodos į <code>devices.id</code>.';

$GLOBALS["lang"]['The ID of the associated discovery. Linked to <code>discoveries.id</code>'] = 'Susijusio atradimo ID. Susijęs su <code>discoveries.id</code>';

$GLOBALS["lang"]['The ID of the item of the associated type.'] = 'Atitinkamo tipo straipsnio ID.';

$GLOBALS["lang"]['The ID of this orgs parent org. Linked to <code>orgs.id</code>'] = 'Šio orgų tėvų org ID. Susijęs su <code>orgs.id</code>';

$GLOBALS["lang"]['The ID provided by the provider.'] = 'Paslaugų teikėjo suteiktas identifikatorius.';

$GLOBALS["lang"]['The ID retrieved from a Cloud discovery.'] = 'ID gautas iš paieškos debesyje.';

$GLOBALS["lang"]['The IP address of this collector used to communicate with the server.'] = 'Šio kolektoriaus IP adresas naudojamas bendrauti su serveriu.';

$GLOBALS["lang"]['The IP of the device to start a seed discovery with.'] = 'Įrenginio, kuriuo galima pradėti sėklų atradimą, IP.';

$GLOBALS["lang"]['The IP of the external interface.'] = 'Išorinės sąsajos IP.';

$GLOBALS["lang"]['The IP of the internal interface.'] = 'Vidinės sąsajos IP.';

$GLOBALS["lang"]['The ISO/IEC 27001 certification process and its key elements.'] = 'ISO / IEC 27001 sertifikavimo procesas ir jo pagrindiniai elementai.';

$GLOBALS["lang"]['The ISP or Telco providing this link.'] = 'IPT arba Telco teikia šią nuorodą.';

$GLOBALS["lang"]['The JSON record from Mitre.'] = 'JSON įrašas iš Mitro.';

$GLOBALS["lang"]['The JSON record from the NVD feed.'] = 'JSON rekordas iš NVD.';

$GLOBALS["lang"]['The LDAP OU of this user (if LDAP is used).'] = 'Šio naudotojo LDAP OU (jei naudojamas LDAP).';

$GLOBALS["lang"]['The LDAP server could not be connected to. At all. Check it is pingable from the Open-AudIT server. Check the correct port is open to the Open-AudIT server. An nmap from the Open-AudIT server will show this. Substitute your LDAP servers IP for $ip. Try:<code>nmap -vv $ip</code>'] = 'Su LDAP serveriu nepavyko prisijungti. Visiškai. Patikrinkite, ar jis yra pingable iš Open- AudIT serverio. Patikrinkite, ar teisingas prievadas yra atidarytas Open- AudIT serveryje. Tai parodys Open- AudIT serverio nžemėlapis. Pakeiskite savo LDAP serverius IP už $ip. Pabandykite:<code>nmap -vv $ip</code>';

$GLOBALS["lang"]['The LDAP server type is invalid. It should be either <i>active directory</i> or <i>openldap</i>.'] = 'LDAP serverio tipas neteisingas. Ji turi būti: <i>aktyvus aplankas</i> arba <i>openldapas</i>.';

$GLOBALS["lang"]['The LDAP server was connected to and the user credentials accepted for bind.'] = 'LDAP serveris buvo prijungtas prie ir vartotojo duomenys priimti surišimui.';

$GLOBALS["lang"]['The Linux Open-AudIT installer will test for and if required, install Open-AudITs dependencies from your distributions repository, including setting the Nmap SetUID. This is required for SNMP (UDP 161) detection by a non-root user. This is supported on RedHat/CentOS and Debian/Ubuntu. If you need to manually install Nmap:<br><br>For RedHat/CentOS do (NOTE - if you upgrade using yum, you will need to reapply this <i>chmod</i> setting).'] = 'Linux Open- AudIT įdiegėjas bus išbandyti ir, jei reikia, įdiegti Open- Audits priklausomybes nuo savo paskirstymo saugyklos, įskaitant nustatymą Nmap SetUID. Tai reikalinga SNMP (UDP 161) aptikimui naudojant ne šaknis. Tai palaikoma RedHat / Centos ir Debian / Ubuntu. Jei jums reikia rankiniu būdu įdiegti Nmap:<br/><br/>RedHat / Centos do (PASTABA - Jei atnaujinti naudojant yum, jums reikės iš naujo taikyti šį <i>chmod</i> pokyčių).';

$GLOBALS["lang"]['The Location that contains this network. Links to <code>locations.id</code>.'] = 'Vieta, kurioje yra šis tinklas. Nuorodos į <code>locations.id</code>.';

$GLOBALS["lang"]['The NVD assigned base status.'] = 'NVD priskirtas pagrindinis statusas.';

$GLOBALS["lang"]['The National Institute of Standards and Technology is the federal technology agency. They advance official technology, measurement science and standards.'] = 'Nacionalinis standartų ir technologijų institutas yra federalinė technologijų agentūra. Jie palaiko oficialias technologijas, matavimo mokslą ir standartus.';

$GLOBALS["lang"]['The Network to Discover'] = 'Atrasti tinklą';

$GLOBALS["lang"]['The Nmap timing preset.'] = 'Nmap laiko nustatymas.';

$GLOBALS["lang"]['The OS this package should be reported against. Blank for all. Use the percent sign % as a wildcard. Will be tested against os_group, os_family and os_name in that order.'] = 'Prieš BI šią pakuotę reikia nurodyti. Tuščias visiems. Naudoti procentinį ženklą% kaip laukinę kortelę. Bus išbandyta prieš os _ group, os _ family ir os _ name tokia tvarka.';

$GLOBALS["lang"]['The Open-AudIT API'] = 'Open- AudIT API';

$GLOBALS["lang"]['The Open-AudIT id of the linked cloud. Links to <code>clouds.id</code>.'] = 'Sąsajos "Open- AudIT" identifikatorius. Nuorodos į <code>clouds.id</code>.';

$GLOBALS["lang"]['The Open-AudIT server code was exeucted within this file.'] = 'Open- Aud IT serverio kodas buvo iškirpti šiame faile.';

$GLOBALS["lang"]['The Open-AudIT server code was exeucted within this function.'] = 'Open- Aud IT serverio kodas buvo iškirpti per šią funkciją.';

$GLOBALS["lang"]['The OpenSCAP ecosystem provides multiple tools to assist administrators and auditors with assessment, measurement, and enforcement of security baselines including a wide variety of hardening guides and configuration baselines developed by the open source community, ensuring that you can choose a security policy which best suits the needs of your organization, regardless of its size.'] = 'OpenSCAP ekosistema suteikia daug priemonių, padedančių administratoriams ir auditoriams įvertinti, išmatuoti ir užtikrinti saugumo bazes, įskaitant platų atviro kodo bendruomenės sukurtų griežtinimo vadovų ir konfigūracijos bazinių linijų pasirinkimą, užtikrinant, kad galite pasirinkti saugumo politiką, geriausiai atitinkančią jūsų organizacijos poreikius, nepriklausomai nuo jos dydžio.';

$GLOBALS["lang"]['The OpenSCAP project is a collection of open source tools for implementing and enforcing this standard, and has been awarded the SCAP 1.2 certification by NIST in 2014.'] = 'Projektas OpenSCAP - tai atvirojo kodo priemonių rinkinys, skirtas šiam standartui įgyvendinti ir įgyvendinti, ir 2014 m. NIST gavo SCAP 1.2 sertifikatą.';

$GLOBALS["lang"]['The Organisation that owns this item. Links to <code>orgs.id</code>.'] = 'Organizacija, kuriai priklauso šis punktas. Nuorodos į <code>orgs.id</code>.';

$GLOBALS["lang"]['The Process Identifier of the running associated discovery.'] = 'Veikiančio susijusio atradimo proceso identifikatorius.';

$GLOBALS["lang"]['The RU positon of the top of this device.'] = 'Šio įtaiso viršaus GĮ poziton.';

$GLOBALS["lang"]['The Racks feature is used to manage and visualize your rack use with an Organisation, Location, Building, Floor, Room and Row.'] = 'Rocking funkcija yra naudojama valdyti ir vizualizuoti savo stovą naudoti su organizacija, Vieta, Statyba, Grindys, Kambariai ir eilutė.';

$GLOBALS["lang"]['The SCAP is a specification for expressing and manipulating security data in standardized ways. SCAP uses several individual specifications in concert to automate continuous monitoring, vulnerability management, and security policy compliance evaluation reporting'] = 'SCAP yra specifikacija, skirta saugumo duomenims išreikšti ir manipuliuoti standartizuotais būdais. SCAP kartu naudoja keletą atskirų specifikacijų, kad automatizuotų nuolatinę stebėseną, pažeidžiamumo valdymą ir saugumo politikos atitikties vertinimo ataskaitas.';

$GLOBALS["lang"]['The SELECT'] = 'SELECT';

$GLOBALS["lang"]['The SELECT section of the query should use full dot notation and also request the field with its full dot name. IE - SELECT devices.id AS `devices.id`. Each field should be selected in this fashion to enable GUI side attribute filtering.'] = 'SELECT skyriuje užklausos turėtų naudoti pilną taškinį užrašymą ir taip pat prašyti lauką su savo pilną taškų pavadinimą. IE - SELECT prietaisai. id AS \'devices.id\'. Kiekvienas laukas turėtų būti pasirinktas tokiu būdu, kad būtų galima naudoti naudotojo sąsajos požymių filtravimą.';

$GLOBALS["lang"]['The SELECT section of your SQL must contain fully qualified columns and specify certain columns.'] = 'SELECT skyriuje savo SQL turi būti visiškai kvalifikuoti stulpeliai ir nurodyti tam tikrus stulpelius.';

$GLOBALS["lang"]['The SNMP community string.'] = 'SNMP bendruomenės eilutė.';

$GLOBALS["lang"]['The SNMP v3 Authentication Passphrase.'] = 'SNMP v3 autentikacijos slaptafrazė.';

$GLOBALS["lang"]['The SNMP v3 Authentication Protocol.'] = 'SNMP v3 autentiškumo patvirtinimo protokolas.';

$GLOBALS["lang"]['The SNMP v3 Privacy Passphrase.'] = 'SNMP v3 privatumo slaptafrazė.';

$GLOBALS["lang"]['The SNMP v3 Privacy Protocol.'] = 'SNMP v3 privatumo protokolas.';

$GLOBALS["lang"]['The SNMP v3 Security Level.'] = 'SNMP v3 saugumo lygis.';

$GLOBALS["lang"]['The SNMP v3 Security Name.'] = 'SNMP v3 saugumo vardas.';

$GLOBALS["lang"]['The SNMPv3 context Engine ID (optional).'] = 'Comment';

$GLOBALS["lang"]['The SNMPv3 context Name (optional).'] = 'SNMPv3 konteksto pavadinimas (neprivaloma).';

$GLOBALS["lang"]['The SQL cannot contain <strong>WHERE @filter OR</strong>. That SQL will not be executed, however <strong>WHERE @filter AND</strong> queries are allowed.'] = 'SQL negali būti <strong>Kai @ filter OR</strong>. Tačiau, kad SQL nebus įvykdytas <strong>Kur @ filter AND</strong> užklausas leidžiama.';

$GLOBALS["lang"]['The SQL queries used in Open-AudIT require the use of the backtick - ` character and NOT the standard single quote for fields. On most US Windows keyboards the backtick key is located in the top-left of the keyboard along with the tilde ~. On a US Mac keyboard the backtick key is located next to the SHIFT key. The standard single quote is still used to enclose values as the examples below illustrate.'] = 'SQL užklausos naudojamos Open- AudIT reikalauja naudoti backkeck - "pobūdžio ir NE standartinę vieną citata laukuose. Daugumoje JAV" Windows "klaviatūros klaviatūros klavišas yra viršuje kairėje kartu su pakrypimu ~. Dėl US Mac klaviatūros backkey klavišas yra šalia SHIFT klavišą. Kaip parodyta toliau pateiktuose pavyzdžiuose, vertės vis dar nurodomos standartine vienintele citata.';

$GLOBALS["lang"]['The SQL query is essentially broken into three parts.'] = 'SQL užklausa iš esmės suskirstyta į tris dalis.';

$GLOBALS["lang"]['The Standards functionality in Open-AudIT allows you to, ahead of time, complete the questions auditors require when completing ISO 27001 certification.'] = 'Standartai funkcionalumas Open- AudIT leidžia jums, prieš laiką, užbaigti klausimus auditoriai reikalauja, kai užpildyti ISO 27001 sertifikavimo.';

$GLOBALS["lang"]['The URL of the external system.'] = 'Išorinės sistemos URL.';

$GLOBALS["lang"]['The URL of your Open-AudIT Server that this Collector will report to (no trailing slash).'] = 'Jūsų Open- AudIT URL Serverio, kad šis rinkėjas praneš (ne apakinti snapas).';

$GLOBALS["lang"]['The URL the audit scripts should submit their result to.'] = 'URL audito scenarijus turėtų pateikti savo rezultatą.';

$GLOBALS["lang"]['The User endpoint allows you to manage user accounts within Open-AudIT.'] = 'Vartotojo baigtis leidžia jums valdyti vartotojo paskyras Open- AudIT.';

$GLOBALS["lang"]['The WHERE'] = 'KUR';

$GLOBALS["lang"]['The WHERE section of your SQL <em>must</em> contain'] = 'Kuri jūsų SQL dalis <em>turi</em> turi';

$GLOBALS["lang"]['The Windows'] = 'Langai';

$GLOBALS["lang"]['The Windows log may say the following'] = 'Windows žurnalas gali sakyti:';

$GLOBALS["lang"]['The account must have a password; WMI does not allow blank passwords.'] = 'Sąskaita turi turėti slaptažodį; WMI neleidžia tuščių slaptažodžių.';

$GLOBALS["lang"]['The account password must NOT contain \" (double quotes). This is because cscript (and wscript) cannot parse argument values containing double quotes. They are simply stripped. No (before you ask) escaping will not work. This is a cscript limitation and nothing to do with Open-AudIT.'] = 'Paskyros slaptažodyje neturi būti\ "(dvigubų kabučių). Taip yra todėl, kad cscript (ir wscript) negali interpretuoti argumento verčių, kuriose yra dvigubų kabučių. Jie tiesiog nuplėšti. Ne (prieš prašant) pabėgti nepavyks. Tai cscript apribojimas ir nieko bendro su Open- Audit.';

$GLOBALS["lang"]['The actual full name of this user.'] = 'Tikrasis pilnas šio naudotojo vardas.';

$GLOBALS["lang"]['The address of the Open-AudIT server submit page.'] = 'Open- AudIT serverio adresas pateikti puslapį.';

$GLOBALS["lang"]['The administrator supplied credentials that were successfully used to bind to LDAP.'] = 'Administratorius pateikė duomenis, kurie buvo sėkmingai panaudoti ryšiams su LDAP palaikyti.';

$GLOBALS["lang"]['The administrator supplied credentials to bind to the LDAP server, but they have not been accepted by the LDAP sevrer. Double check the credentials work on the LDAP server, and then check (or reset them) in the Open-AudIT LDAP Server entry.'] = 'Administratorius pateikė duomenis, kad prisijungtų prie LDAP serverio, tačiau LDAP severer jų nepriėmė. Dukart patikrinti duomenis dirbti LDAP serverio, ir tada patikrinti (arba iš naujo) Open- AudIT LDAP serverio įrašas.';

$GLOBALS["lang"]['The agent and server are also intelligent enough to self-update the agent if a newer version is installed on the server (say after upgrading Open-AudIT).'] = 'Agentas ir serveris taip pat yra pakankamai protingas savarankiškai atnaujinti agentas, jei naujesnė versija yra įdiegta serveryje (tarkime, po atnaujinimo Open- AudIT).';

$GLOBALS["lang"]['The agent should download a fresh copy of the audit script, run it and submit the result to the server.'] = 'Agentas turėtų atsisiųsti naują audito scenarijaus kopiją, paleisti ją ir pateikti rezultatą serveryje.';

$GLOBALS["lang"]['The application creates temporary audit scrtips here, copies them to the target machines, then deletes them.'] = 'Programa sukuria laikinus audito šantažus čia, kopijuoja juos į paskirties mašinos, tada ištrina juos.';

$GLOBALS["lang"]['The associated baseline. Links to <code>baselines.id</code>.'] = 'Susijęs pradinis rodmuo. Nuorodos į <code>baselines.id</code>.';

$GLOBALS["lang"]['The associated discovery (if required). Links to <code>discoveries.id</code>.'] = 'Susijęs atradimas (jei reikalaujama). Nuorodos į <code>discoveries.id</code>.';

$GLOBALS["lang"]['The attribute to test (from the <code>devices</code> table).'] = 'Išbandytinas atributas (iš <code>devices</code> lentelė).';

$GLOBALS["lang"]['The attribute to test (must match an external field name from below).'] = 'Bandymo atributas (turi atitikti išorinį lauko pavadinimą iš apačios).';

$GLOBALS["lang"]['The attributes for discovery scan options are as below.'] = 'Atradimo skenavimo parinkčių požymiai yra tokie:';

$GLOBALS["lang"]['The audit script upon which to base your customisations.'] = 'Audito scenarijų, pagal kurį pagrįsti savo tinkinimus.';

$GLOBALS["lang"]['The audit script will use the files[ ] array and retrieve the file details.'] = 'Audito scenarijus bus naudoti failus [] masyvas ir gauti failo duomenis.';

$GLOBALS["lang"]['The audit scripts all accept a debugging argument. You can run the script utilizing that and see in more detail what the issue is. And if you cannot figure it out - that is what we are here for! Open a support case and we will get things running in no time.'] = 'Visi audito scenarijai priima derinimo argumentą. Jūs galite paleisti scenarijų naudojant tai ir pamatyti išsamiau, kas problema yra. Ir jei jūs negalite to suprasti - būtent tam mes ir esame čia! Atidarykite paramos bylą ir mes nespėsime, kad viskas vyktų.';

$GLOBALS["lang"]['The base path from which to search for Users.'] = 'Pagrindinis kelias, nuo kurio ieškoti vartotojų.';

$GLOBALS["lang"]['The below steps are not the fault of or unique to Open-AudIT and would affect <strong>any</strong> discovery application using remote WMI and/or Windows.'] = 'Toliau žingsniai nėra kaltė arba unikalus Open- AudIT ir turėtų įtakos <strong>bet</strong> paieškos programa naudojant nuotolinį WMI ir (arba) Windows.';

$GLOBALS["lang"]['The benchmark type.'] = 'Lyginamojo indekso rūšis.';

$GLOBALS["lang"]['The building the rack is located in.'] = 'Pastatas stovas yra įsikūręs.';

$GLOBALS["lang"]['The calculated number of devices to be created externally.'] = 'Apskaičiuotas įtaisų, kurie turi būti sukurti išorėje, skaičius.';

$GLOBALS["lang"]['The calculated number of devices to be created in Open-AudIT.'] = 'Apskaičiuotas prietaisų, kurie bus sukurti Open- AudIT, skaičius.';

$GLOBALS["lang"]['The client ID is the ID of an Azure Active Directory application. The client secret is the key that you give that application.'] = 'Kliento ID yra Azure Active Directory programos ID. Kliento paslaptis yra raktas, kad jūs suteikiate tą paraišką.';

$GLOBALS["lang"]['The collector is essentially a full install of Open-AudIT in <i>collector</i> mode. The collector is designed to run discovery upon the network it is situated in. It is not restricted to only that network, but ideally it would essentially be one collector per subnet where required. The collector is driven on a schedule by the server and runs discovery upon the network as specified.<br>When in Stand Alone mode the Collector acts as an independant server, simply forwarding all devices found to the main server.<br><br>Once installed and setup, control of the Collector is performed on the Server (not in Stand Alone mode).<br><br>The only required network ports between the collector and server are 80 or 443 (TCP connection established from the Collector to the Server). The Open-AudIT database is not (and cannot be) shared between these installs.<br><br>By default the collector (not in Stand Alone mode) will request from the server any discovery tasks every 5 minutes (you can configure this on the server for new Collectors using the configuration item collector_check_minutes) therefor any discovery tasks for the collector should be scheduled for 0, 5, 10, 15, etc minutes.'] = 'Kolektorius yra iš esmės visiškai įdiegti Open- Audit <i>kolektorius</i> režimas. Kolektorius yra skirtas paleisti atradimas tinkle, jis yra įsikūręs. Jis neapsiriboja tik tuo tinklu, bet idealu, jei reikia, jis iš esmės būtų vienas iš kiekvieno subtinklo surinkėjas. Surinkėjas yra varomas pagal tvarkaraštį serverio ir veikia atradimas tinkle, kaip nurodyta.<br/>Kada stovėti Vienas režimas Kolektorius veikia kaip nepriklausomas serveris, tiesiog persiunčia visus įrenginius rasti į pagrindinį serverį.<br/><br/>Įdiegus ir konfigūravus, kolektoriaus valdymas atliekamas serveryje (ne stand Alone režimu).<br/><br/>Vieninteliai reikalingi tinklo prievadai tarp kolektoriaus ir serverio yra 80 arba 443 (TCP ryšys nustatytas nuo surinkimo iki serverio). Open- AudIT duomenų bazė nėra (ir negali būti) dalijamasi tarp šių įrengimų.<br/><br/>Pagal numatytuosius nustatymus kolektorius (ne Stand Alone režimu) paprašys iš serverio bet kokių paieškos užduočių kas 5 minutes (Jūs galite konfigūruoti tai naujų kolektorių serveryje naudojant konfigūracijos elemento kolektorius _ check _ minutes), todėl bet kokios paieškos užduotys kolektoriui turėtų būti numatytos 0, 5, 10, 15, ir tt.';

$GLOBALS["lang"]['The collector is essentially a full install of Open-AudIT in <i>collector</i> mode. This mode would reduce visible functionality in an effort to simplify and focus the application. It is designed to collect information about local networks and devices, where firewall and/or network traversal is an issue from the server.'] = 'Kolektorius yra iš esmės visiškai įdiegti Open- Audit <i>kolektorius</i> režimas. Šis režimas sumažintų matomą funkcionalumą siekiant supaprastinti ir sutelkti taikymą. Jis skirtas rinkti informaciją apie vietinius tinklus ir įrenginius, kur ugniasienė ir (arba) tinklo keliautojas yra problema iš serverio.';

$GLOBALS["lang"]['The collectors internal IP used when it runs a discovery.'] = 'Rinkėjai vidaus IP naudojamas, kai jis veikia atradimas.';

$GLOBALS["lang"]['The column name from the foreign table. Should be one of: class, environment, status, type or menu_category.'] = 'Stulpelio pavadinimas iš užsienio lentelės. Turėtų būti vienas iš: klasė, aplinka, statusas, tipas ar meniu _ kategorija.';

$GLOBALS["lang"]['The command executed upon the target device or Open-AudIT server code executed during discovery.'] = 'Komanda vykdoma tiksliniame įrenginyje arba Open- AudIT serverio kodas įvykdytas atradimo metu.';

$GLOBALS["lang"]['The configuration of your cluster can be: <code>active/active</code>, <code>active/passive</code>, <code>N+1</code>, <code>N+M</code>, <code>N-to-1</code>, <code>N-to-N</code>, <code>other</code> or blank.'] = 'Jūsų klasterio konfigūracija gali būti: <code>active/active</code>, <code>active/passive</code>, <code>N+1</code>, <code>N+M</code>, <code>N-to-1</code>, <code>N-to-N</code>, <code>other</code> arba neužpildyta.';

$GLOBALS["lang"]['The credentials password. If the credentials are an SSH Key, this is the password used to unlock the key and is optional.'] = 'Slaptumo slaptažodis. Jei įgaliojimai yra SSH raktas, tai yra slaptažodis naudojamas atrakinti raktą ir yra neprivalomas.';

$GLOBALS["lang"]['The credentials supplied by the user have failed.'] = 'Naudotojo pateikti duomenys nepavyko.';

$GLOBALS["lang"]['The credentials username.'] = 'Įgaliojimas naudotojo vardas.';

$GLOBALS["lang"]['The current date and time in the format: Y-m-d H:i:s.'] = 'Dabartinė data ir laikas formatu: Y- m- d H: i: s.';

$GLOBALS["lang"]['The current date in Y-m-d format.'] = 'Dabartinė data Y- m- d formatu.';

$GLOBALS["lang"]['The current status of the Cloud Discovery.'] = 'Dabartinė debesies paieškos būsena.';

$GLOBALS["lang"]['The current status of the discovery.'] = 'Dabartinė atradimo būsena.';

$GLOBALS["lang"]['The dashboard that will be shown by default for this user. Links to <code>dashboards.id</code>.'] = 'Dashboard, kuris pagal nutylėjimą bus rodomas šiam naudotojui. Nuorodos į <code>dashboards.id</code>.';

$GLOBALS["lang"]['The data stored in the database is not showing in the application translated. We leave the data as it is. However, there is nothing to stop you, the user, changing the name (for example) of an item in the database to your language.'] = 'Duomenų bazėje saugomi duomenys paraiškoje neišverčiami. Mes paliekame tokius duomenis. Tačiau nėra nieko, kas jus sustabdytų, vartotojas, pakeisdamas duomenų bazėje esančio elemento pavadinimą (pavyzdžiui) į jūsų kalbą.';

$GLOBALS["lang"]['The data you input will be used in a <code>LIKE</code> clause, not (as per the API) an <code>equals</code> clause. Another example - if you input <code>comput</code>, it would still return all computers. And because we are using a <code>LIKE</code> clause, it is case-insensitive.'] = 'Duomenys, kuriuos įvedėte bus naudojami <code>LIKE</code> sąlyga, ne (kaip API) <code>equals</code> punktas. Kitas pavyzdys - jei įvedėte <code>comput</code>Jis vis tiek grąžintų visus kompiuterius. Ir todėl, kad mes naudojame <code>LIKE</code> straipsnis, jis yra nejautrus.';

$GLOBALS["lang"]['The database schema can be found in the application if the user has database::read permission by going to menu: Admin -> Database ->'] = 'Duomenų bazės schemą galima rasti paraiškoje, jei vartotojas turi duomenų bazę: skaityti leidimą nuėjus į meniu: Admin - > Duomenų bazė - >';

$GLOBALS["lang"]['The database version and web version are inconsistent.'] = 'Duomenų bazės versija ir interneto versija yra nenuosekli.';

$GLOBALS["lang"]['The date of license expiration.'] = 'Licencijos galiojimo pabaigos data.';

$GLOBALS["lang"]['The date the software is discontinued by the manufacturer. Usually replaced by a newer version. Maintenance may still be available.'] = 'Data, kai gamintojas nutraukia programinės įrangos naudojimą. Paprastai pakeičiama naujesne versija. Techninė priežiūra vis dar gali būti prieinama.';

$GLOBALS["lang"]['The date the software no longer receives updates and is effectively discontinued altogether. Maintenance is discontinued.'] = 'Data, kai programinė įranga nebegauna naujinimų ir iš esmės visiškai nutraukiama. Palaikomasis gydymas nutraukiamas.';

$GLOBALS["lang"]['The date this item was changed or added (read only). NOTE - This is the timestamp from the server.'] = 'Data, kada šis punktas buvo pakeistas arba pridėtas (tik skaityti). PASTABA - Tai laiko žyma iš serverio.';

$GLOBALS["lang"]['The date/time when this result was created.'] = 'Data ir laikas, kai šis rezultatas buvo sukurtas.';

$GLOBALS["lang"]['The day of the month when this task should execute (* for every day).'] = 'Mėnesio, kurį ši užduotis turėtų būti įvykdyta, diena (* už kiekvieną dieną).';

$GLOBALS["lang"]['The day of the week when this task should execute (* for every day).'] = 'Savaitės diena, kada ši užduotis turėtų būti įvykdyta (* už kiekvieną dieną).';

$GLOBALS["lang"]['The debug level (will output to command prompt window). Lower means less output with 0 being no output.'] = 'Derinimo lygis (bus išvesti į komandinio iškvietimo langą). Apatinė reikšmė reiškia mažesnę išvestį, o 0 - ne.';

$GLOBALS["lang"]['The default discovery scan option is the UltraFast set.'] = 'Numatytoji paieškos skenavimo parinktis yra UltraFast rinkinys.';

$GLOBALS["lang"]['The default language assigned to any user created by this method.'] = 'Numatytoji kalba paskirta bet kuriam šiuo metodu sukurtam naudotojui.';

$GLOBALS["lang"]['The device must respond to an Nmap ping before it is considered online.'] = 'Įrenginys turi reaguoti į Nmap ping prieš tai, kai jis laikomas internete.';

$GLOBALS["lang"]['The device within Open-AudIT. Links to <code>devices.id</code>.'] = 'Įrenginys per Open- AudIT. Nuorodos į <code>devices.id</code>.';

$GLOBALS["lang"]['The direct link for the script is'] = 'Tiesioginė nuoroda scenarijų yra';

$GLOBALS["lang"]['The email address of the reciever'] = 'Gavėjo e. pašto adresas';

$GLOBALS["lang"]['The enterprise binary from FirstWave is required for a license. Please download Open-AudIT from'] = 'Įmonė dvejetainė iš FirstWave yra reikalinga licencijos. Atsisiųskite Open- AudIT iš';

$GLOBALS["lang"]['The entire associated baseline this result is from.'] = 'Visas susijęs pradinis rezultatas yra iš.';

$GLOBALS["lang"]['The exploited vulnerability can affect resources beyond the security authority of the vulnerable component. This usually means a privilege or trust boundary is crossed (for example, escaping from a container to the host OS).'] = 'Naudojamas pažeidžiamumas gali turėti įtakos ne tik pažeidžiamo komponento saugumo institucijai, bet ir ištekliams. Tai paprastai reiškia, kad privilegija arba pasitikėjimo riba yra peržengtas (pavyzdžiui, pabėgti iš konteinerio į priimančiosios OS).';

$GLOBALS["lang"]['The exploited vulnerability only impacts resources within the same security authority as the vulnerable component. In other words, the attacker’s actions stay within the original trust boundary.'] = 'Naudojamas pažeidžiamumas veikia tik išteklius toje pačioje saugumo institucijoje kaip ir pažeidžiamas komponentas. Kitaip tariant, užpuoliko veiksmai lieka originalios pasitikėjimo ribos ribose.';

$GLOBALS["lang"]['The externally referenced location ID. Usually populated by Cloud audits.'] = 'Išorės nuoroda vietos ID. Paprastai atliekamas nuotolinės kompiuterijos auditas.';

$GLOBALS["lang"]['The fields associated with an Integration are stored in the database as a JSON array of objects. Each field has the following attributes'] = 'Su integracija susiję laukai saugomi duomenų bazėje kaip JSON masyvas objektų. Kiekvienas laukas turi šiuos požymius:';

$GLOBALS["lang"]['The first time that Open-AudIT retrieved details of this device.'] = 'Pirmą kartą, kai Open- AudIT gavo duomenis apie šį įrenginį.';

$GLOBALS["lang"]['The floor the rack is located on.'] = 'Grindys stovas yra įsikūręs ant.';

$GLOBALS["lang"]['The foreign table to reference. Should be one of: devices, locations, orgs or queries.'] = 'Užsienio lentelė su nuoroda. Turėtų būti vienas iš: prietaisai, vietos, orgai ar užklausos.';

$GLOBALS["lang"]['The format of your data should be in the form'] = 'Jūsų duomenų formatas turėtų būti formos';

$GLOBALS["lang"]['The format used for the output to be emailed.'] = 'Elektroniniu paštu siunčiamų duomenų formatas.';

$GLOBALS["lang"]['The fully qualified column upon which to group by. NOTE: When type = traffic, this represents the red query id.'] = 'Pilnai kvalifikuotas stulpelis, pagal kurį grupuoti. PASTABA: Kai tipas = eismo, tai rodo raudoną užklausos ID.';

$GLOBALS["lang"]['The fully qualified name returned by the external system. EG: for NMIS we use configuration.roleType.'] = 'Išorinės sistemos grąžintas kvalifikuotas pavadinimas. EG: NMIS mes naudojame konfigūraciją. vaidmuo Tipas.';

$GLOBALS["lang"]['The fully qualified table.column. Multiple may be provided, separated by a comma (no spaces).'] = 'Kvalifikuota lentelė. Gali būti keli, atskirti kableliais (tarpais).';

$GLOBALS["lang"]['The generated SQL query to test for this vulnerability. This field can be edited to correct the query as required.'] = 'Sugeneruotas SQL užklausa išbandyti šį pažeidžiamumą. Šis laukas gali būti redaguota ištaisyti užklausą, kaip reikalaujama.';

$GLOBALS["lang"]['The group of devices on which the baseline was run against.'] = 'Įtaisų grupė, kuriai buvo taikomas bazinis dydis.';

$GLOBALS["lang"]['The group that provides a list of devices for the integration. Links to <code>groups.id</code>.'] = 'Grupė, pateikianti integravimo prietaisų sąrašą. Nuorodos į <code>groups.id</code>.';

$GLOBALS["lang"]['The hour of the day when this task should execute (* for every hour).'] = 'Dienos valanda, kada ši užduotis turėtų būti įvykdyta (* už kiekvieną valandą).';

$GLOBALS["lang"]['The id of the linked device. Links to <code>devices.id</code>'] = 'Sujungto įtaiso id. Nuorodos į <code>devices.id</code>';

$GLOBALS["lang"]['The identifier column (integer) in the database (read only).'] = 'Identifikavimo skiltis (sveikasis skaičius) duomenų bazėje (tik skaityti).';

$GLOBALS["lang"]['The importance of this baseline (not used yet).'] = 'Šio atskaitos taško svarba (dar neišnaudota).';

$GLOBALS["lang"]['The integer of severity.'] = 'Sunkumo sveikasis skaičius.';

$GLOBALS["lang"]['The internal value, reformatted in this format.'] = 'Vidinė reikšmė, pertvarkyta šiuo formatu.';

$GLOBALS["lang"]['The ip address of the Auth method.'] = 'Auth metodo ip adresas.';

$GLOBALS["lang"]['The language to translate the web interface into for the user.'] = 'Kalba išversti Web sąsają į vartotojui.';

$GLOBALS["lang"]['The last date and time this item was executed (read only).'] = 'Paskutinė data ir laikas, kai šis straipsnis buvo įvykdytas (tik skaityti).';

$GLOBALS["lang"]['The last time that Open-AudIT retrieved details of this device.'] = 'Paskutinį kartą, kai Open- AudIT gavo duomenis apie šį įrenginį.';

$GLOBALS["lang"]['The last time this benchmarks was executed.'] = 'Paskutinį kartą šie lyginamieji indeksai buvo įvykdyti.';

$GLOBALS["lang"]['The last time this integration was run.'] = 'Paskutinį kartą ši integracija buvo vykdoma.';

$GLOBALS["lang"]['The license endpoint allows you to track the number of licenses found on your devices.'] = 'Licencija baigtis leidžia jums sekti licencijų skaičių rasti savo įrenginiuose.';

$GLOBALS["lang"]['The line number assigned by the provider to the line at this end of the connection.'] = 'Linijos numeris, kurį teikėjas priskiria linijai šiame ryšio gale.';

$GLOBALS["lang"]['The location the rack is located in. Links to <code>locations.id</code>.'] = 'Vieta stovas yra įsikūręs. Nuorodos į <code>locations.id</code>.';

$GLOBALS["lang"]['The locations address.'] = 'Vietos adresas.';

$GLOBALS["lang"]['The locations area.'] = 'Vieta.';

$GLOBALS["lang"]['The locations city.'] = 'Miestas.';

$GLOBALS["lang"]['The locations country.'] = 'Vietos šalis.';

$GLOBALS["lang"]['The locations district.'] = 'Vietovių rajonas.';

$GLOBALS["lang"]['The locations latitude.'] = 'Vietos platuma.';

$GLOBALS["lang"]['The locations level.'] = 'Vietos lygis.';

$GLOBALS["lang"]['The locations longitude.'] = 'Vieta ilguma.';

$GLOBALS["lang"]['The locations phone.'] = 'Vietos telefonas.';

$GLOBALS["lang"]['The locations postcode.'] = 'Vietos pašto kodas.';

$GLOBALS["lang"]['The locations region.'] = 'Vietos regionas.';

$GLOBALS["lang"]['The locations room.'] = 'Vietos kambarys.';

$GLOBALS["lang"]['The locations state.'] = 'Vietos nurodytos.';

$GLOBALS["lang"]['The locations suburb.'] = 'Vieta priemiestyje.';

$GLOBALS["lang"]['The locations suite.'] = 'Vietovių rinkinys.';

$GLOBALS["lang"]['The logic for device matching is contained in the devices_helper.php file, which on a Linux install can be found here'] = 'Įrenginio atitikimo logika yra prietaisų _ helper.php failas, kuris dėl Linux įdiegti galima rasti čia';

$GLOBALS["lang"]['The machine-default permission settings do not grant Local Activation permission for the COM Server application with'] = 'Mašinų numatytieji leidimų nustatymai nesuteikia vietinio aktyvinimo leidimo COM serverio programai su';

$GLOBALS["lang"]['The maximum physical weight (in KGs) this rack can hold.'] = 'Kuo didesnis fizinis svoris (KG) šis stovas gali turėti.';

$GLOBALS["lang"]['The maximum total BTUs this rack is rated for.'] = 'Didžiausias bendras šios lentynos tūris.';

$GLOBALS["lang"]['The minimum required attributes for attributes are'] = 'Privalomi požymiai požymiams yra:';

$GLOBALS["lang"]['The minute of the hour when this task should execute (* for every minute).'] = 'Valandos, kurią turėtų atlikti ši užduotis, minutė (* už kiekvieną minutę).';

$GLOBALS["lang"]['The month of the year when this task should execute (* for every month).'] = 'Metų, kuriais ši užduotis turėtų būti įvykdyta, mėnuo (* už kiekvieną mėnesį).';

$GLOBALS["lang"]['The name given to this item.'] = 'Šio straipsnio pavadinimas.';

$GLOBALS["lang"]['The name given to this item. Ideally it should be unique.'] = 'Šio straipsnio pavadinimas. Idealiu atveju ji turėtų būti unikali.';

$GLOBALS["lang"]['The name given to this user (used to login). Ideally it should be unique.'] = 'Šiam naudotojui suteiktas vardas (naudojamas prisijungimui). Idealiu atveju ji turėtų būti unikali.';

$GLOBALS["lang"]['The name of the associated cloud (if required).'] = 'Susijusio debesies pavadinimas (jei reikia).';

$GLOBALS["lang"]['The name of the software package, as audited by Open-AudIT. Use the percent sign % as a wildcard.'] = 'Open- AudIT audituotos programinės įrangos paketo pavadinimas. Naudoti procentinį ženklą% kaip laukinę kortelę.';

$GLOBALS["lang"]['The name of the user who last changed or added this item (read only).'] = 'Naudotojo, kuris paskutinį kartą pakeitė ar pridėjo šį elementą, vardas (tik skaityti).';

$GLOBALS["lang"]['The name provided by the provider.'] = 'Paslaugų teikėjo suteiktas pavadinimas.';

$GLOBALS["lang"]['The network in the format 192.168.1.0/24.'] = 'Tinklo formatas 192.168.1.0 / 24.';

$GLOBALS["lang"]['The network subnet to execute the discovery on.'] = 'Tinklo potinklis atradimui atlikti.';

$GLOBALS["lang"]['The new Agent runs a PowerShell version of the old audit script in preparation for the depreciation of VBScript (yes, it is coming).'] = 'Naujasis agentas veikia PowerShell versija senas audito scenarijų rengiantis VBScript nuvertėjimo (taip, jis ateina).';

$GLOBALS["lang"]['The number of RUs this device occupies.'] = 'Šis įrenginys užima GĮ skaičių.';

$GLOBALS["lang"]['The number of associated locations. Links to <code>locations.cloud_id</code>.'] = 'Susijusių vietų skaičius. Nuorodos į <code>locations.cloud_id</code>.';

$GLOBALS["lang"]['The number of associated networks. Links to <code>networks.cloud_id</code>.'] = 'Susijusių tinklų skaičius. Nuorodos į <code>networks.cloud_id</code>.';

$GLOBALS["lang"]['The number of audited devices in this cloud. Links to <code>devices.cloud_id</code> and <code>devices.serial</code>.'] = 'Šiame debesyje esančių audituotų prietaisų skaičius. Nuorodos į <code>devices.cloud_id</code> ir <code>devices.serial</code>.';

$GLOBALS["lang"]['The number of critical severity vulnerabilities held by FirstWave (not in your database).'] = 'Kritinio sunkumo pažeidžiamumo FirstWave skaičius (ne jūsų duomenų bazėje).';

$GLOBALS["lang"]['The number of devices found by this discovery.'] = 'Šiame atradime rastų įrenginių skaičius.';

$GLOBALS["lang"]['The number of devices in the associated group.'] = 'Įrenginių skaičius susijusioje grupėje.';

$GLOBALS["lang"]['The number of devices in this cloud with a state of running. Links to <code>devices.cloud_id</code> and <code>devices.instance_state</code>.'] = 'Šiame debesyje esančių ir veikiančių prietaisų skaičius. Nuorodos į <code>devices.cloud_id</code> ir <code>devices.instance_state</code>.';

$GLOBALS["lang"]['The number of devices in this cloud with a state of stopped. Links to <code>devices.cloud_id</code> and <code>devices.instance_state</code>.'] = 'Šiame debesies esančių įrenginių, kurių būsena sustabdyta, skaičius. Nuorodos į <code>devices.cloud_id</code> ir <code>devices.instance_state</code>.';

$GLOBALS["lang"]['The number of devices in this cloud. Links to <code>devices.cloud_id</code>.'] = 'Įrenginių skaičius šiame debesyje. Nuorodos į <code>devices.cloud_id</code>.';

$GLOBALS["lang"]['The number of devices this benchmark will be executed upon. Derived from <code>benchmarks.devices</code>.'] = 'Prietaisų, kuriais bus vykdomas šis lyginamasis standartas, skaičius. Išvestinės <code>benchmarks.devices</code>.';

$GLOBALS["lang"]['The number of devices to limit this discovery to.'] = 'Įrenginių, kurie riboja šį atradimą, skaičius.';

$GLOBALS["lang"]['The number of high severity vulnerabilities held by FirstWave (not in your database).'] = 'Didelio sunkumo pažeidžiamumo FirstWave skaičius (ne jūsų duomenų bazėje).';

$GLOBALS["lang"]['The number of low severity vulnerabilities held by FirstWave (not in your database).'] = 'Mažo sunkumo pažeidžiamumo, turimų FirstWave skaičius (ne jūsų duomenų bazėje).';

$GLOBALS["lang"]['The number of medium severity vulnerabilities held by FirstWave (not in your database).'] = 'Vidutinio sunkumo pažeidžiamumo FirstWave skaičius (ne jūsų duomenų bazėje).';

$GLOBALS["lang"]['The number of purchased licenses.'] = 'Nupirktų licencijų skaičius.';

$GLOBALS["lang"]['The number of seconds to try and communicate with the target IP.'] = 'Kiek sekundžių bandyti bendrauti su tiksliniu IP.';

$GLOBALS["lang"]['The number of vulnerabilities without a severity held by FirstWave (not in your database).'] = 'Pažeidžiamumo be sunkumo skaičius turi FirstWave (ne jūsų duomenų bazėje).';

$GLOBALS["lang"]['The offset is the count of devices you wish to return data from.'] = 'Poslinkis yra įrenginių, kuriuos norite grąžinti duomenis skaičius.';

$GLOBALS["lang"]['The only required permission / policy name (in our testing) is'] = 'Vienintelis reikalingas leidimo / poliso pavadinimas (mūsų bandymų) yra';

$GLOBALS["lang"]['The optional secondary column. NOTE: When type = traffic, this represents the yellow query id.'] = 'Neprivaloma antrinė skiltis. PASTABA: Kai tipas = eismo, tai reiškia geltona užklausos id.';

$GLOBALS["lang"]['The optional third column. NOTE: When type = traffic, this represents the green query id.'] = 'Neprivaloma trečioji skiltis. PASTABA: Kai tipas = eismo, tai reiškia žalia užklausos ID.';

$GLOBALS["lang"]['The order of information retrieval is snmp, ssh, wmi.'] = 'Informacijos paieškos tvarka yra snmp, ssh, wmi.';

$GLOBALS["lang"]['The orientation of this device.'] = 'Šio įtaiso orientacija.';

$GLOBALS["lang"]['The password (if not using the user running the script).'] = 'Slaptažodis (jei nenaudoja scenarijaus naudotojo).';

$GLOBALS["lang"]['The password for the dn_account attribute.'] = 'Dn _ paskyros atributo slaptažodis.';

$GLOBALS["lang"]['The password used to access the external system.'] = 'Slaptažodis, naudojamas prieigai prie išorinės sistemos.';

$GLOBALS["lang"]['The path to the file or directory.'] = 'Kelias iki failo ar katalogo.';

$GLOBALS["lang"]['The path to the file or directory. Directories should end with a trailing slash.'] = 'Kelias iki failo ar katalogo. Aplankai turėtų baigtis sekančiu smukimu.';

$GLOBALS["lang"]['The physical depth (in CMs) of the rack.'] = 'Fizinis gylis (CM) stovas.';

$GLOBALS["lang"]['The physical height (in CMs) of the rack.'] = 'Fizinis aukštis (CM) stovas.';

$GLOBALS["lang"]['The physical weight (in KGs) of the rack at present.'] = 'Šiuo metu statinės fizinis svoris (KG).';

$GLOBALS["lang"]['The physical weight (in KGs) of the rack when empty.'] = 'Tuščia stovas fizinis svoris (KG).';

$GLOBALS["lang"]['The physical width (in CMs) of the rack.'] = 'Fizinis plotis (CM) stovas.';

$GLOBALS["lang"]['The pod (if any) that this rack is part of.'] = 'Pod (jei yra), kad šis stovas yra dalis.';

$GLOBALS["lang"]['The power circuit this rack attaches to.'] = 'Elektros grandinė prie šios lentynos prisitvirtina.';

$GLOBALS["lang"]['The primary database table upon which to base this widget.'] = 'Pirminė duomenų bazės lentelė, kuria remiantis šis valdiklis.';

$GLOBALS["lang"]['The primary method for authorization (what a user can do) is now based on the users Roles. Roles are defined as admin, org_admin, reporter, and user by default. Each role has a set of permissions (Create, Read, Update, Delete) for each endpoint. Standard roles as shipped should cover 99.9 percent of use-cases. The ability to define additional roles and edit existing roles is enabled in Open-AudIT Enterprise.'] = 'Pagrindinis būdas leidimų (ką vartotojas gali padaryti) dabar remiasi vartotojų Roles. Relės apibrėžiamos kaip admin, org _ admin, reporteris, ir vartotojas pagal nutylėjimą. Kiekvienas vaidmuo turi leidimų rinkinį (Sukurti, Skaityti, Atnaujinti, Išbraukti) kiekvienam rezultatui. Standartiniai vaidmenys, kaip siunčiami turėtų apimti 99,9% naudojimo atvejais. Galimybė nustatyti papildomus vaidmenis ir redaguoti esamus vaidmenis yra įjungta Open- AudIT Enterprise.';

$GLOBALS["lang"]['The process identifier of this queue item.'] = 'Šio eilės elemento proceso identifikatorius.';

$GLOBALS["lang"]['The process that was used last to retrieve details about the device'] = 'Procesas, kuris buvo naudojamas paskutinį kartą norint gauti informaciją apie įrenginį';

$GLOBALS["lang"]['The purpose of this licensing page is to list the products and licenses included in Firstwave Commercial products including products based upon open source works.Open-AudIT is licensed from Firstwave under AGPLv3 or later with Enterprise and Professional functionality licensed under commercial terms.Open-AudIT when downloaded from FirstWave may include the following libraries and projects, which are supplied unmodified and licensed as indicated:'] = 'Šio licencijavimo puslapio tikslas yra išvardyti produktus ir licencijas, įtrauktas į Firstwave Komerciniai produktai, įskaitant produktus, remiantis atviro kodo darbų. Open- AudIT yra licencijuotas iš Firstbave pagal AGPLv3 arba vėliau su Enterprise ir Professional funkcionalumas licencijuotas komercinėmis sąlygomis. Į Open- AudIT, atsisiunčiamą iš FirstWave, gali būti įtrauktos šios bibliotekos ir projektai, kurie tiekiami nemodifikuoti ir licencijuoti, kaip nurodyta:';

$GLOBALS["lang"]['The query that provides a list of devices for the integration. Links to <code>queries.id</code>.'] = 'Užklausa, kurioje pateikiamas integravimo įrenginių sąrašas. Nuorodos į <code>queries.id</code>.';

$GLOBALS["lang"]['The rack asset number.'] = 'Statramsčio numeris.';

$GLOBALS["lang"]['The rack asset tag.'] = 'Statinė turto žymė.';

$GLOBALS["lang"]['The rack bar code.'] = 'Roko baro kodas.';

$GLOBALS["lang"]['The rack model.'] = 'Roko modelis.';

$GLOBALS["lang"]['The rack serial.'] = 'Raketų serija.';

$GLOBALS["lang"]['The rack series.'] = 'Raketų serija.';

$GLOBALS["lang"]['The rack this device is located in. Links to <code>racks.id</code>.'] = 'Rakas šis įrenginys yra įsikūręs. Nuorodos į <code>racks.id</code>.';

$GLOBALS["lang"]['The recommended process of addressing and fixing identified security vulnerabilities. This typically involves applying patches, updates, or other measures to eliminate the risk posed by the vulnerabilities.'] = 'Rekomenduojamas nustatytų saugumo trūkumų šalinimo ir nustatymo procesas. Paprastai tam reikia taikyti pataisas, atnaujinimus ar kitas priemones pažeidžiamumo keliamai rizikai pašalinti.';

$GLOBALS["lang"]['The regular domain notation of your directory. Eg - <code>open-audit.lan</code>.'] = 'Reguliarus domeno žymėjimas jūsų aplanke. Eg - <code>open-audit.lan</code>.';

$GLOBALS["lang"]['The requested properties should be in a comma-separated list. Properties should be fully qualified - ie, system.hostname (not just hostname).'] = 'Prašomos savybės turėtų būti nurodytos atskirame sąraše. Savybės turėtų būti visiškai kvalifikuotas - ty, syst.hostname (ne tik mazgo pavadinimas).';

$GLOBALS["lang"]['The result of the command.'] = 'Įsakymo rezultatas.';

$GLOBALS["lang"]['The room the rack is located in.'] = 'Kambarys stovas yra įsikūręs.';

$GLOBALS["lang"]['The row the rack is located in.'] = 'Eilutė stovas yra įsikūręs.';

$GLOBALS["lang"]['The search for group on the LDAP server failed. Check the LDAP server logs. Have you created these groups (for roles and orgs) on the LDAP server and assigned LDAP users to them?'] = 'LDAP serverio grupės paieška nepavyko. Patikrinkite LDAP serverio žurnalus. Ar sukūrėte šias grupes (vaidmenims ir orgams) LDAP serveryje ir priskyrėte jiems LDAP vartotojus?';

$GLOBALS["lang"]['The secret key used in conjunction with your AWS EC2 API key.'] = 'Slaptas raktas naudojamas kartu su jūsų AWS EC2 API raktu.';

$GLOBALS["lang"]['The software end-of-life date.'] = 'Programinės įrangos galiojimo laikas.';

$GLOBALS["lang"]['The software end-of-service-life date.'] = 'Programinės įrangos naudojimo data.';

$GLOBALS["lang"]['The specific database column from the specified database table.'] = 'Konkrečios duomenų bazės skiltis iš nurodytos duomenų bazės lentelės.';

$GLOBALS["lang"]['The specific database table.'] = 'Konkrečios duomenų bazės lentelė.';

$GLOBALS["lang"]['The standard Nmap timing options. Previously set at T4 (aggressive).'] = 'Standartiniai Nmap laiko parinktys. Anksčiau nustatyta T4 (agresyvus).';

$GLOBALS["lang"]['The standard Nmap timing options. We usually use -T4 (Aggressive) as this is recommended for a decent broadband or ethernet connection.'] = 'Standartiniai Nmap laiko parinktys. Mes paprastai naudoti -T4 (Agresyvus), nes tai rekomenduojama padoraus plačiajuosčio ryšio ar ethernet ryšio.';

$GLOBALS["lang"]['The status of this integration'] = 'Šios integracijos statusas';

$GLOBALS["lang"]['The status of this queued item.'] = 'Šio eilės punkto statusas.';

$GLOBALS["lang"]['The steps below outline the process.'] = 'Toliau nurodyti etapai apibūdina procesą.';

$GLOBALS["lang"]['The target IP this log entry referers to (if any).'] = 'Tikslinis IP šis žurnalas replikuoja (jei yra).';

$GLOBALS["lang"]['The target computer to audit. \".\" means localhost.'] = 'Tikslinis kompiuteris auditui.\ "\" reiškia lokalhost.';

$GLOBALS["lang"]['The template for the link to be generated per result line.'] = 'Kiekvienai rezultatų eilutei sukurtinos nuorodos šablonas.';

$GLOBALS["lang"]['The text for the bottom of the chart in a line chart (only).'] = 'Iš diagramos apačioje eilutėje diagramos tekstas (tik).';

$GLOBALS["lang"]['The text that is displayed.'] = 'Rodomas tekstas.';

$GLOBALS["lang"]['The timestamp after which, this task should run. For example, run a task after the 1st June 2017 at 10am, set it to <code>2017-06-01 09:59:00</code>. This value should be zero padded (ie, 09, not 9). This value defaults to <code>2000-01-01 00:00:00</code> which means by default, a scheduled task will run at next scheduled execution time.'] = 'Laiko žyma po to, ši užduotis turėtų būti vykdoma. Pavyzdžiui, paleisti užduotį po 2017 m. birželio 1 d. 10val, nustatyti jį <code>2017-06-01 09:59:00</code>. Ši vertė turėtų būti lygi nuliui (ty, 09, o ne 9). @ info: whatsthis <code>2000-01-01 00:00:00</code> kuris reiškia, kad numatytoji užduotis bus vykdoma kitą numatytą vykdymo laiką.';

$GLOBALS["lang"]['The top 10, 100 or 1000 (or none) TCP ports commonly in use according to Nmap.'] = 'Top 10, 100 arba 1000 (arba nė vienas) TCP prievadai paprastai naudojamas pagal Nmap.';

$GLOBALS["lang"]['The top 10, 100 or 1000 (or none) UDP ports commonly in use according to Nmap.'] = 'Top 10, 100 arba 1000 (arba nė vienas) UDP prievadai paprastai naudojamas pagal Nmap.';

$GLOBALS["lang"]['The total BTU output by this rack.'] = 'Visa BTU produkcija iš šios lentynos.';

$GLOBALS["lang"]['The type of device.'] = 'Įtaiso tipas.';

$GLOBALS["lang"]['The type of organisation.'] = 'Organizacijos tipas.';

$GLOBALS["lang"]['The type of rack (compute, power, network, etc).'] = 'Statinės tipas (skaičiuoklė, galia, tinklas ir tt).';

$GLOBALS["lang"]['The type of task to run. One of: baseline, benchmark, cloud discovery, discovery, integration, report, query.'] = 'Vykdomos užduoties tipas. Vienas iš jų: pradinis lygis, lyginamasis standartas, debesų atradimas, atradimas, integracija, pranešimas, užklausa.';

$GLOBALS["lang"]['The type of the integration (usually named after the external system).'] = 'Integracijos tipas (paprastai pavadintas po išorės sistemos).';

$GLOBALS["lang"]['The unfiltered state means that a port is accessible, but Nmap is unable to determine whether it is open or closed. Only the ACK scan, which is used to map firewall rulesets, classifies ports into this state. Scanning unfiltered ports with other scan types such as Window scan, SYN scan, or FIN scan, may help resolve whether the port is open.'] = 'Nefiltruota būsena reiškia, kad prievadas yra prieinamas, bet Nmap negali nustatyti, ar jis atidarytas, ar uždarytas. Tik ACK nuskaitymas, kuris naudojamas ugniasienės taisyklių kartografavimui, klasifikuoja prievadus į šią būseną. Nefiltruotų prievadų skenavimas naudojant kitus skenavimo tipus, pvz., Windows scan, SYN scan arba FIN scan, gali padėti išspręsti, ar prievadas atidarytas.';

$GLOBALS["lang"]['The unique identifier of this server.'] = 'Šio serverio unikalus identifikatorius.';

$GLOBALS["lang"]['The user account this collector uses. Links to <code>users.id</code>.'] = 'Vartotojo sąskaitą šis kolektorius naudoja. Nuorodos į <code>users.id</code>.';

$GLOBALS["lang"]['The user in Active Directory / OpenLDAP must be a direct member of the required Open-AudIT groups for Roles and Orgs. A member of a group that is a member another group that is a member of the Open-AudIT group will not work.'] = 'Vartotojas Active Directory / OpenLDAP turi būti tiesioginis narys reikiamų Open- AudIT grupių Roles ir Orgs. Grupės narys, kuris yra narys, kita grupė, kuri yra Open- AudIT grupės narys, neveiks.';

$GLOBALS["lang"]['The user is in LDAP and their credentials are valid, but is not in any of the Open-AudIT LDAP groups for Orgs.'] = 'Vartotojas yra LDAP ir jų įgaliojimai galioja, bet nėra nė viena iš Open- AudIT LDAP grupių Orgs.';

$GLOBALS["lang"]['The user is in LDAP and their credentials are valid, but is not in any of the Open-AudIT LDAP groups for Roles.'] = 'Vartotojas yra LDAP ir jų duomenys galioja, bet nėra nei Open- AudIT LDAP grupių Roles.';

$GLOBALS["lang"]['The user is in LDAP and their credentials are valid, but is not in any of the required Open-AudIT LDAP groups.'] = 'Vartotojas yra LDAP ir jų duomenys galioja, bet nėra nė viena iš reikalaujamų Open- AudIT LDAP grupių.';

$GLOBALS["lang"]['The user is in the LDAP group that matches this Org.'] = 'Vartotojas yra LDAP grupėje, kuri atitinka šį Org.';

$GLOBALS["lang"]['The user is in the LDAP group that matches this Role.'] = 'Vartotojas yra LDAP grupėje, kuri atitinka šį vaidmenį.';

$GLOBALS["lang"]['The user is not in the LDAP group that matches this Org.'] = 'Vartotojas nėra LDAP grupėje, kuri atitinka šį Org.';

$GLOBALS["lang"]['The user is not in the LDAP group that matches this Role.'] = 'Vartotojas nėra LDAP grupėje, kuri atitinka šį vaidmenį.';

$GLOBALS["lang"]['The user that was specified exists in LDAP, but Open-AudIT is not configured to consume the LDAP groups for roles and that user does not exist within Open-AudIT. Either select <i>Use LDAP for Roles</i> on the Open-AudIT LDAP Server screen or create this user within Open-AudIT and assign roles and orgs.'] = 'Vartotojas, kuris buvo nurodytas, egzistuoja LDAP, bet Open- AudIT nėra konfigūruotas vartoti LDAP grupes vaidmenims ir kad vartotojas neegzistuoja Open- AudIT. Žymėti <i>Naudoti LDAP Roles</i> dėl Open- AudIT LDAP Serverio ekranas arba sukurti šį vartotoją per Open- AudIT ir priskirti vaidmenis ir orgus.';

$GLOBALS["lang"]['The username (if not using the user running the script).'] = 'Naudotojo vardas (jei nenaudojamas naudotojas, vykdantis scenarijų).';

$GLOBALS["lang"]['The username used to access the external system.'] = 'Naudotojo vardas, naudojamas prieigai prie išorinės sistemos.';

$GLOBALS["lang"]['The users details were not retrieved from LDAP. Check the LDAP server logs.'] = 'Iš LDAP vartotojų duomenų nebuvo gauta. Patikrinkite LDAP serverio žurnalus.';

$GLOBALS["lang"]['The users details were retrieved from LDAP.'] = 'Naudotojų duomenys gauti iš LDAP.';

$GLOBALS["lang"]['The users email address.'] = 'Naudotojų el. pašto adresas.';

$GLOBALS["lang"]['The usual hours of operation at this site.'] = 'Įprastos veikimo valandos šioje vietoje.';

$GLOBALS["lang"]['The value assigned to the item.'] = 'Straipsniui priskirta vertė.';

$GLOBALS["lang"]['The value that is stored for this particular item.'] = 'Šio konkretaus objekto vertė.';

$GLOBALS["lang"]['The vendor name as per CPE entries.'] = 'Pardavėjo pavadinimas pagal CPE įrašus.';

$GLOBALS["lang"]['The vendor taken from the CPE.'] = 'Pardavėjas paimtas iš CPE.';

$GLOBALS["lang"]['The web directory on the host that Open-AudIT is installed (requires a trailing slash).'] = 'Interneto katalogas ant kompiuterio, kad Open- AudIT yra įdiegta (reikia sekti snapas).';

$GLOBALS["lang"]['The widget at position '] = 'Elementas padėtyje ';

$GLOBALS["lang"]['The width of this device.'] = 'Šio įtaiso plotis.';

$GLOBALS["lang"]['Their OrgIDs and their descendants'] = 'Jų organai ir palikuonys';

$GLOBALS["lang"]['Their OrgIDs only'] = 'Tik jų organai';

$GLOBALS["lang"]['Their OrgIDs, ascendants and descendants'] = 'Jų organai, palikuonys ir palikuonys';

$GLOBALS["lang"]['Then'] = 'Tada';

$GLOBALS["lang"]['Then create a new Auth method in Open-AudIT by going to menu -> Admin -> Auth Methods -> Create Auth. Provide a name and set the <i>type</i> to Entra.'] = 'Tada sukurti naują Auth metodą Open- AudIT vyksta į meniu - > Admin - > Auth Methods - > Sukurti Autą. Nurodyti pavadinimą ir nustatyti <i>tipas</i> Entrai.';

$GLOBALS["lang"]['Then you can use Open-AudIT (unsupported) to receive audit data directly from the clients. Discovery <strong>will fail</strong>, but if youre not using Discovery (the main feature Open-AudIT was designed around), you can still get device data. You would need to run the audit scripts directly on the clients using cron, or use the Windows Agent feature (Enterprise only).'] = 'Tada galite naudoti Open- AudIT (nepalaikoma) gauti audito duomenis tiesiogiai iš klientų. Discovery <strong>nepavyks</strong>, bet jei jūsų nenaudoja Discovery (pagrindinė funkcija Open- AudIT buvo sukurta aplink), vis tiek galite gauti įrenginio duomenis. Jums reikės paleisti audito scenarijus tiesiogiai klientams naudojant cron, arba naudoti Windows Agent funkcija (Enterprise tik).';

$GLOBALS["lang"]['There is a button to export to JSON. This will display only the device table of attributes. To export the device with all associated component tables, view the device details, then add'] = 'Yra mygtukas eksportuoti į JSON. Čia bus rodoma tik įrenginio požymių lentelė. Eksportuoti prietaisą su visomis susijusiomis sudedamųjų dalių lentelėmis, peržiūrėti įrenginio duomenis, tada pridėti';

$GLOBALS["lang"]['There is absolutely no need to manually edit each individual device.'] = 'Nėra absoliučiai nereikia rankiniu būdu redaguoti kiekvieną atskirą įrenginį.';

$GLOBALS["lang"]['There is no need to do anything if you are running Open-AudIT on a Linux server.<br><br>Windows clients are just fine and require no special actions, however.... to enable this feature the audit script must be run locally on the target Windows system. It cannot be run remotely as we do with WMI calls when running the audit script on one Windows machine, while targeting a second Windows machine. To do this we need to copy the audit script to the target Windows machine and then run it. Unfortunately the service account that Apache runs under is the Local System account. This account has no access to remote (network based) resources. To work around this issue the service must be run under another account. It is easiest to just use the local Administrator account, but you can try any account you like as long as it has the required privileges. The Local System account has as much local access as the local Administrator account.'] = 'Nėra reikalo nieko daryti, jei veikia Open- AudIT Linux serveryje.<br/><br/>"Windows" klientai yra tik gerai ir nereikia jokių specialių veiksmų, tačiau.... kad ši funkcija audito scenarijus turi būti vykdomas vietoje tikslinės Windows sistemos. Jis negali būti vykdomas nuotoliniu būdu, kaip mes WMI skambučius, kai veikia audito scenarijų vienoje Windows mašina, o taikantis į antrą Windows mašina. Norėdami tai padaryti, turime nukopijuoti audito scenarijų į tikslinės Windows mašinos ir tada paleisti jį. Deja, paslaugų sąskaitą, kad Apache veikia pagal vietos sistemos sąskaitą. Ši sąskaita neturi prieigos prie nuotolinių (tinklu pagrįstų) išteklių. Norint dirbti su šiuo klausimu, paslauga turi būti tvarkoma kitoje sąskaitoje. Paprasčiausiai naudotis vietine administratoriaus paskyra, bet galite išbandyti bet kokią norimą paskyrą, jei ji turi reikiamas privilegijas. Vietinės sistemos sąskaita turi tiek pat vietinės prieigos, kiek vietos administratoriaus sąskaita.';

$GLOBALS["lang"]['These are only examples. You may need to adjust these attributes to suit your particular LDAP.'] = 'Tai tik pavyzdžiai. Jums gali tekti pritaikyti šias savybes, kad atitiktų jūsų konkretų LDAP.';

$GLOBALS["lang"]['These parameters enable you to audit only what is useful and relevant to you, saving processing time and allowing you to discover your network in an orderly manner.'] = 'Šie parametrai leidžia jums patikrinti tik tai, kas yra naudinga ir aktuali jums, sutaupyti apdorojimo laiką ir leidžia jums atrasti savo tinklą tvarkingai.';

$GLOBALS["lang"]['Thing'] = 'Dangtis';

$GLOBALS["lang"]['Think of mail.domain1.com and mail.domain2.com - same hostname.'] = 'Pagalvokite apie mail.domain1.com ir mail.domain2.com - tą patį mazgo vardą.';

$GLOBALS["lang"]['Third'] = 'Trečia';

$GLOBALS["lang"]['This CVE will be retrieved and overwrite the existing CVE if it exists.'] = 'Ši CVE bus gauta ir perrašyti esamą CVE, jei ji egzistuoja.';

$GLOBALS["lang"]['This Org has no AD group specified. Check the roles details within Open-AudIT.'] = 'Šis Org neturi nurodytos AD grupės. Patikrinkite vaidmenis per Open- AudIT.';

$GLOBALS["lang"]['This Org has no AD group specified. Check the roles details within Open-AudIT. <span class=\"confluence-link\">Have you created these groups (for orgs) on the LDAP server and assigned LDAP users to them?'] = 'Šis Org neturi nurodytos AD grupės. Patikrinkite vaidmenis per Open- AudIT. <span class=\'\"confluence-link\"\'>Ar sukūrėte šias grupes (orgams) LDAP serveryje ir paskyrėte LDAP vartotojus jiems?</span>';

$GLOBALS["lang"]['This Role has no AD group specified. Check the roles details within Open-AudIT.'] = 'Šis vaidmuo neturi AD grupės. Patikrinkite vaidmenis per Open- AudIT.';

$GLOBALS["lang"]['This attribute is stored as a JSON object. It is the list of all collections and contains the collection name along with <code>c</code>, <code>r</code>, <code>u</code> and,or <code>d</code> which represent create, read, update and delete. These are the actions a user can perform on items from that particular collection.'] = 'Šis atributas saugomas kaip JSON objektas. Tai visų kolekcijų sąrašas ir yra kolekcijos pavadinimas kartu su <code>c</code>, <code>r</code>, <code>u</code> ir arba <code>d</code> kurie atstovauja sukurti, skaityti, atnaujinti ir ištrinti. Tai yra veiksmai, kuriuos vartotojas gali atlikti dėl daiktų iš tos konkrečios kolekcijos.';

$GLOBALS["lang"]['This can be either a varchar (a text field), a list (a list of values that can be selected) or a date.'] = 'Tai gali būti varcharas (teksto laukas), sąrašas (reikšmių, kurias galima pasirinkti, sąrašas) arba data.';

$GLOBALS["lang"]['This code relys on the great work done by the'] = 'Šis kodas yra apie didelį darbą, kurį padarė';

$GLOBALS["lang"]['This collectors universally unique identifier.'] = 'Šis kolekcionavimas visuotinai unikalus identifikatorius.';

$GLOBALS["lang"]['This column is required by'] = 'Šis stulpelis reikalingas';

$GLOBALS["lang"]['This column is required by '] = 'Šis stulpelis reikalingas ';

$GLOBALS["lang"]['This description is auto-populated and should ideally be left as-is.'] = 'Šis aprašymas yra automatiškai apgyvendintas ir turėtų būti paliktas kaip yra.';

$GLOBALS["lang"]['This endpoint enables you to add the connections that are part of your network infrastructure, it allows you to customize a variety of attributes, specify where this connection is located and the organization that it belongs.'] = 'Ši baigtis leidžia jums pridėti jungtys, kurios yra dalis jūsų tinklo infrastruktūros, ji leidžia jums pritaikyti atributus įvairovė, nurodyti, kur šis ryšys yra ir organizacija, kad jis priklauso.';

$GLOBALS["lang"]['This error indicates that SMB1 has been disabled or removed from the target machine. This is normal for modern version of Windows and you will only see this message when the SMB2 connection attempt has failed. If the SMB2 connection fails, we attempt SMB1 to enable discovery on old versions of Windows. If the target Windows machine <i>is</i> running an old version of Windows, it is likely your credentials have failed. In that case, see'] = 'Ši klaida rodo, kad MP1 buvo išjungtas arba pašalintas iš tikslinės mašinos. Tai normalu šiuolaikinei Windows versijai ir jūs pamatysite šį pranešimą tik tada, kai HCT2 ryšio bandymas nepavyko. Jei 2 ryšys nepavyksta, mes bandome 1 įjungti atradimą senose Windows versijose. Jei taikinys Windows mašina <i>yra</i> veikia seną versiją Windows, tai greičiausiai jūsų įgaliojimai nepavyko. Tokiu atveju žr.';

$GLOBALS["lang"]['This error indicates that not enough virtual memory or paging file quota is available to complete the specified operation. You should try again later.'] = 'Ši klaida rodo, kad nėra pakankamai virtualios atminties ar kadrų rinkmenos kvotos nurodytai operacijai atlikti. Turėtum pamėginti vėliau.';

$GLOBALS["lang"]['This error indicates the credentials used either are incorrect, do not exist or do not have sufficient privileges to log on remotely to the target Windows machine. You should verify the credentials and check the below.'] = 'Ši klaida rodo, kad naudojami duomenys yra neteisingi, neegzistuoja arba neturi pakankamai privilegijų prisijungti nuotoliniu būdu prie tikslinės Windows mašinos. Jūs turėtumėte patikrinti įgaliojimus ir patikrinti žemiau.';

$GLOBALS["lang"]['This example creates a list of all Modules marked as'] = 'Šis pavyzdys sukuria visų modulių, pažymėtų kaip';

$GLOBALS["lang"]['This example creates a list of devices and the open Ports, Protocols, and Programs found by the NMAP scan.'] = 'Šis pavyzdys sukuria įrenginių ir atvirų uostų, protokolų ir programų sąrašą, rastą NMAP skenavimo.';

$GLOBALS["lang"]['This example creates a list of devices where the Function or Description fields are blank OR the Purchase Date is the default.'] = 'Šis pavyzdys sukuria sąrašą įrenginių, kur funkcija arba aprašymas laukai yra tušti ARBA pirkimo data yra numatytoji.';

$GLOBALS["lang"]['This example query retrieves a list of devices OVER 3 years old. The query uses today'] = 'Šis pavyzdys užklausa gauna prietaisų sąrašą OVER 3 metų. Užklausa naudoja šiandien';

$GLOBALS["lang"]['This example uses'] = 'Šis pavyzdys naudoja';

$GLOBALS["lang"]['This feature requires a Professional or an Enterprise license.'] = 'Ši funkcija reikalauja profesinės arba įmonės licencijos.';

$GLOBALS["lang"]['This feature, because it has the ability to affect target devices more than usual must be manually enabled. To enable this feature, change the configuration item feature_executables to <i>yes</i>.'] = 'Ši funkcija, nes ji turi galimybę paveikti taikinius daugiau nei įprasta, turi būti įjungta rankiniu būdu. Norėdami įjungti šią funkciją, pakeisti konfigūracijos elemento funkciją _ vykdomieji failai į <i>taip</i>.';

$GLOBALS["lang"]['This file tells Linux to poll the application to determine if there are any scheduled tasks that should be run.'] = 'Šiame faile Linux \'ui nurodoma apklausti programą, kad būtų nustatyta, ar yra numatytų užduočių, kurios turėtų būti vykdomos.';

$GLOBALS["lang"]['This form provides a simple way to get started discovering the devices on your network. For more (much more) detailed options, you can individually create'] = 'Ši forma suteikia paprastą būdą pradėti atrasti įrenginius jūsų tinkle. Daugiau (daug daugiau) Detalūs variantai, galite individualiai sukurti';

$GLOBALS["lang"]['This is also the way that PAExec works.'] = 'Taip veikia ir PAExec.';

$GLOBALS["lang"]['This is an optional configuration option, enabled by setting discovery_use_org_id_match in the global configuration.'] = 'Tai pasirenkama konfigūravimo parinktis, įjungta nustačius atradimą _ use _ org _ id _ mach pasaulinėje konfigūracijoje.';

$GLOBALS["lang"]['This is generally the primary column, unless otherwise configured. NOTE: When type = traffic, this represents the secondary text.'] = 'Tai paprastai yra pagrindinis stulpelis, jei nenurodyta kitaip. PASTABA: Kai tipas = eismo, tai atitinka antrinį tekstą.';

$GLOBALS["lang"]['This is likely due to MySQL time being off. MySQL typically uses the host devices time. You can check this by'] = 'Tikėtina, kad taip yra dėl to, kad MySQL laikas yra išjungtas. MySQL paprastai naudoja kompiuterio įrenginių laiką. Galite patikrinti tai iki';

$GLOBALS["lang"]['This is settable by users and so even though it should be globally unique, there is certainly no guarantee of this.'] = 'Jį nustato vartotojai, ir nors jis turėtų būti unikalus visame pasaulyje, tai tikrai negarantuojama.';

$GLOBALS["lang"]['This is the directory where we store any attachments to devices.'] = 'Tai katalogas, kuriame saugome visus priedus prie įrenginių.';

$GLOBALS["lang"]['This is to be used as the first point of call when troubleshooting Open-AudIT issues. You can click the Export button on the top right to retrieve this as a JSON file (to be added to the support ticket / email.'] = 'Tai turi būti naudojama kaip pirmasis skambučio taškas, kai trikčių paieškos Open- AudIT klausimus. Jūs galite spustelėkite Eksporto mygtuką viršuje teisę gauti tai kaip JSON failą (pridėti prie paramos bilietą / elektroninio pašto.';

$GLOBALS["lang"]['This issue is under investigation.'] = 'Šis klausimas nagrinėjamas.';

$GLOBALS["lang"]['This item must match the value of the attribute selected or contains the ID of the query to be used.'] = 'Šis punktas turi atitikti pasirinkto požymio vertę arba jame turi būti naudotino užklausos ID.';

$GLOBALS["lang"]['This item must match the value of the attribute selected.'] = 'Šis punktas turi atitikti pasirinkto požymio vertę.';

$GLOBALS["lang"]['This license expires on'] = 'Ši licencija nustoja galioti';

$GLOBALS["lang"]['This security permission can be modified using the Component Services administrative tool.'] = 'Šis saugumo leidimas gali būti pakeistas naudojant Sudedamųjų paslaugų administracinę priemonę.';

$GLOBALS["lang"]['This should be commented out after troubleshooting as debug mode will generate a lot of logs on the disk for no benefit.'] = 'Tai turėtų būti komentaras po trikčių šalinimo, kaip derinimo režimas generuos daug rąstų diske be jokios naudos.';

$GLOBALS["lang"]['This should be globally unique, but I have seen instances where it is not.'] = 'Tai turėtų būti unikalu visame pasaulyje, tačiau mačiau atvejų, kai taip nėra.';

$GLOBALS["lang"]['This should be set to either 1 or the height of the rack.'] = 'Tai turėtų būti nustatyta arba 1 arba stovas aukštis.';

$GLOBALS["lang"]['This should be the fully qualified field name in the database. Currently columns from the system, fields and credentials tables are supported. EG: system.nmis_role.'] = 'Tai turėtų būti visiškai kvalifikuotas lauko pavadinimas duomenų bazėje. Šiuo metu iš sistemos stulpeliai, laukai ir požymių lentelės yra palaikoma. EG: sistem.nmis _ role.';

$GLOBALS["lang"]['This state is used when Nmap is unable to determine whether a port is closed or filtered. It is only used for the IP ID idle scan.'] = 'Ši būsena naudojama, kai Nmap negali nustatyti, ar prievadas uždarytas, ar filtruotas. Jis naudojamas tik IP ID tuščiosios eigos skenavimui.';

$GLOBALS["lang"]['This will auto-populate.'] = 'Tai bus autopopas.';

$GLOBALS["lang"]['This will considerably slow the discovery scan.'] = 'Tai gerokai sulėtins atradimų skenavimą.';

$GLOBALS["lang"]['This will delete the current rows in the'] = 'Tai ištrins esamas eilutes';

$GLOBALS["lang"]['This will permanently DELETE this license.'] = 'Tai visam laikui DELETE šią licenciją.';

$GLOBALS["lang"]['This will show you the Bulk Edit form. Any attributes you set on this form will be applied to all selected devices. You can set multiple attributes at once.'] = 'Tai parodys jums urmu Redaguoti formą. Visi šioje formoje nustatyti požymiai bus taikomi visiems pasirinktiems įrenginiams. Jūs galite nustatyti keletą atributų vienu metu.';

$GLOBALS["lang"]['Thursday'] = 'Ketvirtadienis';

$GLOBALS["lang"]['time_caption'] = 'Laiko žymė';

$GLOBALS["lang"]['Time Caption'] = 'Laiko žymė';

$GLOBALS["lang"]['time_daylight'] = 'Dienos šviesa';

$GLOBALS["lang"]['Time Daylight'] = 'Dienos šviesa';

$GLOBALS["lang"]['Time to Execute'] = 'Laikas iki vykdymo';

$GLOBALS["lang"]['timeout'] = 'Laikotarpis';

$GLOBALS["lang"]['Timeout'] = 'Laikotarpis';

$GLOBALS["lang"]['Timeout Per Target (Seconds)'] = 'Laiko limitas vienam tikslui (sekundės)';

$GLOBALS["lang"]['Timeout per Target. Wait for X seconds for a target response.'] = 'Laikas pagal tikslą. Palaukite X sekundžių, kol bus pasiektas tikslinis atsakas.';

$GLOBALS["lang"]['Timesatamp'] = 'Laikmatis';

$GLOBALS["lang"]['Timestamp'] = 'Laikas';

$GLOBALS["lang"]['timing'] = 'Laikas';

$GLOBALS["lang"]['Timing'] = 'Laikas';

$GLOBALS["lang"]['Timor-Leste'] = 'Rytų Timoras';

$GLOBALS["lang"]['Title'] = 'Pavadinimas';

$GLOBALS["lang"]['To a new file named .env (in the same directory). Now edit that new file and uncomment (remove the #) the line below (line 17)'] = 'Į naują failą pavadintą .env (tame pačiame aplanke). Dabar redaguokite tą naują failą ir atkomentuokite (pašalinkite #) žemiau esančią eilutę (17 eilutė)';

$GLOBALS["lang"]['To actually execute the query, append a /execute, thus /open-audit/index.php/queries/{$id}/execute.'] = 'Faktiškai įvykdyti užklausą, pridėti / vykdyti, tokiu būdu / open- audit / index.php / užklausos / {$id} / vykdyti.';

$GLOBALS["lang"]['To audit a machine, you must have credentials and administrator level access.'] = 'Norėdami patikrinti mašiną, turite turėti įgaliojimus ir administratoriaus lygio prieigą.';

$GLOBALS["lang"]['To audit a remote machine on an Active Directory domain, your supplied user (or if none provided, the user running the script) must be a member of the target machines Administrators group (or subgroup).'] = 'Norėdami atlikti nuotolinės mašinos auditą Active Directory domene, jūsų pateiktas vartotojas (arba, jei nėra, naudotojas, vykdantis scenarijų) turi būti tikslinės mašinų administratorių grupės (arba pogrupio) narys.';

$GLOBALS["lang"]['To audit a remote machine that is not in a domain, you must use the Administrator account (not <i>an</i> admin account, <i>the</i> Administrator account) on the target PC. #1 and #2'] = 'Norėdami patikrinti nuotolinę mašiną, kuri nėra domene, turite naudoti administratoriaus sąskaitą (ne <i>a</i> administratoriaus sąskaita, <i>ir</i> Administratoriaus paskyra) tiksliniame kompiuteryje. # 1 ir # 2';

$GLOBALS["lang"]['To audit localhost, any supplied credentials are disregarded and the connection is made using the details of the user running the script.'] = 'Audito lokalhost, visi pateikti duomenys yra ignoruojami ir ryšys yra atliekamas naudojant vartotojo veikia scenarijų detales.';

$GLOBALS["lang"]['To compare software we check the name and version. Because version numbers are not all standardised in format, when we receive an audit result we create a new attribute called software_padded which we store in the database along with the rest of the software details for each package. For this reason, baselines using software policies will not work when run against a device that has not been audited by 1.10 (at least). Software policies can test against the version being <i>equal to</i>, <i>greater than</i> or <i>equal to or greater than</i>.'] = 'Norėdami palyginti programinę įrangą, mes patikrinti pavadinimą ir versiją. Nes versijų numeriai yra ne visi standartizuoti formatu, kai mes gauname audito rezultatą mes sukurti naują atributą, vadinamą programinės įrangos _ pided, kurį mes saugome duomenų bazėje kartu su programinės įrangos detales kiekvieno paketo poilsio. Dėl šios priežasties, pagrindas naudojant programinės įrangos politiką nebus veiksminga, kai veikia prieš prietaisą, kuris nebuvo audituotas 1.10 (bent). Programinės įrangos politika gali patikrinti prieš versiją yra <i>lygus</i>, <i>didesnis nei</i> arba <i>lygus arba didesnis nei</i>.';

$GLOBALS["lang"]['To create a new entry click the Create button in the upper right hand corner.'] = 'Norėdami sukurti naują įrašą spustelėkite "Sukurti mygtuką viršutiniame dešiniajame kampe.';

$GLOBALS["lang"]['To create a resource, you should POST the required data.'] = 'Norėdami sukurti resursą, turėtumėte POST reikiamus duomenis.';

$GLOBALS["lang"]['To enable a remote machine (Vista or above) to be audited that is not on a domain, by an account in the Administrators group, other than the actual Administrator account see the below section on UAC.'] = 'Kad nuotolinis aparatas (Vista arba aukščiau) būtų patikrintas ne domene, bet administratorių grupės sąskaitoje, išskyrus faktinę administratoriaus sąskaitą, žr. toliau skyrių UAC.';

$GLOBALS["lang"]['To enable this, create a new Auth item by going to menu -> Admin -> Auth -> Create Auth Method.'] = 'Norėdami tai įjungti, sukurkite naują Auth elementą nuėjus į meniu - > Admin - > Auth - > Sukurti Auth metodą.';

$GLOBALS["lang"]['To execute the Windows powershell script, open a command prompt as Administrator and use the following command'] = 'Norėdami vykdyti Windows powershell scenarijų, atidarykite komandą kaip administratorius ir naudokite šią komandą';

$GLOBALS["lang"]['To execute the audit script, open a terminal and use the following command'] = 'Atlikti audito scenarijų, atidaryti terminalą ir naudoti šią komandą';

$GLOBALS["lang"]['To filter by a property value, use the property name. Operators that should precede the value are'] = 'Filtruoti pagal savybę vertę, naudoti savybės pavadinimą. Operatoriai, kurie turėtų prieš vertę yra';

$GLOBALS["lang"]['To install Nmap on Windows, visit the Nmap page at'] = 'Norėdami įdiegti Nmap Windows, apsilankykite Nmap puslapyje';

$GLOBALS["lang"]['To make the change, just follow the steps below.'] = 'Norėdami padaryti pakeitimą, tiesiog atlikite toliau nurodytus veiksmus.';

$GLOBALS["lang"]['To retrieve the Tenant ID. Open the Azure portal click on Azure Active Directory, Properties and the Tenant ID is displayed as your Directory ID - do not blame me for the name mismatch, that is how Microsoft roll.'] = 'Norėdami gauti pasiūlymą ID. Atidarykite Azure portalas spustelėkite Azure Active Directory, Savybės ir nuomojamasis ID yra rodomas kaip jūsų katalogas ID - nekaltinkite mane dėl pavadinimo neatitikimo, tai yra, kaip Microsoft roll.';

$GLOBALS["lang"]['To retrieve your key, log in to the AWS Console and select your username, then My Security Credentials.'] = 'Norėdami gauti savo raktą, prisijunkite prie AWS konsolės ir pasirinkite savo vartotojo vardą, tada mano saugumo kreditai.';

$GLOBALS["lang"]['To return a specific component item.'] = 'Grąžinti konkretų komponentą.';

$GLOBALS["lang"]['To return all items for a compnent type for a specific device.'] = 'Grąžinti visus elementus tam tikram įrenginiui.';

$GLOBALS["lang"]['To return all items for a component type. If you wanted all software you would use'] = 'Grąžinti visus elementus į sudedamosios dalies tipą. Jei norėtumėte visos programinės įrangos, kurią naudotumėte';

$GLOBALS["lang"]['To reverse sort, insert a minus, thus'] = 'Norėdami pakeisti rūšiuoti, įterpti minuso, taigi';

$GLOBALS["lang"]['To run the test script on the target Windows PC'] = 'Name';

$GLOBALS["lang"]['To select devices to be integrated, we use nmis_manage = y, but you might like (for example) type = router. You can also use a Group or Query if you prefer something more complex.'] = 'Norėdami pasirinkti integruotinus įrenginius, naudojame nmis _ management = y, bet jums gali patikti (pavyzdžiui) tipas = maršrutizatorius. Taip pat galite naudoti grupę ar užklausą, jei norite ko nors sudėtingesnio.';

$GLOBALS["lang"]['To sort by a database column, use'] = 'Rikiuoti pagal duomenų bazės stulpelį, naudoti';

$GLOBALS["lang"]['To use this Enterprise feature, you first need to create your user in Open-AudIT as per usual. Assigning a password is not necessary. You do have to assign Roles and Orgs. The username in Open-AudIT should match the Entra <i>preferred username</i> attribute. There is no need for a Full Name or Email - these will be populated from Entra. If you do not know your users <i>preferred username</i>, fear not. You can create the new Auth Method in Open-AudIT and the Enterprise Application in Entra and when a user attempts to sign-on to Open-AudIT without a pre-existing user, check the logs and you will see their <i>preferred username</i> logged for your convienence.'] = 'Norėdami naudoti šią Enterprise funkciją, pirmiausia turite sukurti savo vartotoją Open- AudIT, kaip įprasta. Slaptažodžio priskyrimas nėra būtinas. Jūs turite priskirti Roles ir Orgs. Vartotojo vardas Open- AudIT turėtų atitikti Entrą <i>pageidaujamas naudotojo vardas</i> atributas. Pilno pavadinimo arba el. pašto nereikia - jie bus apgyvendinti Entra. Jei nežinote savo vartotojų <i>pageidaujamas naudotojo vardas</i>Nebijok. Jūs galite sukurti naują Auth metodą Open- AudIT ir Įmonių taikymo Entra ir kai vartotojas bando ženklinti- Open- AudIT be iš anksto esamas vartotojas, patikrinti rąstų ir pamatysite jų <i>pageidaujamas naudotojo vardas</i> prisijungęs už savo santarvės.';

$GLOBALS["lang"]['To use this Enterprise feature, you first need to create your user in Open-AudIT as per usual. Assigning a password is not necessary. You do have to assign Roles and Orgs. The username in Open-AudIT should match the OKTA <i>name</i> attribute. There is no need for a Full Name or Email - these will be populated from OKTA. If you do not know your users <i>name<i>, fear not. You can create the new Auth Menthod in Open-AudIT and the Application in OKTA and when a user attempts to sign-on to Open-AudIT without a pre-existing user, check the logs and you will see their <i>name<i> logged for your convienence.<br></p><p>Then create a new Auth method in Open-AudIT by going to menu -> Admin -> Auth Methods -> Create Auth. Provide a name and set the <i>type</i> to Okta.'] = 'Norėdami naudoti šią Enterprise funkciją, pirmiausia turite sukurti savo vartotoją Open- AudIT, kaip įprasta. Slaptažodžio priskyrimas nėra būtinas. Jūs turite priskirti Roles ir Orgs. Vartotojo vardas Open- AudIT turėtų atitikti OKTA <i>pavadinimas</i> atributas. Nėra būtina visą vardą ar el. laišką - jie bus apgyvendinti iš OKTA. Jei nežinote savo vartotojų <i>pavadinimas<i>Nebijok. Jūs galite sukurti naują Auth Menthod Open- AudIT ir paraiškos OKTA ir kai vartotojas bando ženklinti- Open- AudIT be iš anksto esamas vartotojas, patikrinti rąstų ir pamatysite jų <i>pavadinimas<i> prisijungęs už savo santarvės.<br/><p>Tada sukurti naują Auth metodą Open- AudIT vyksta į meniu - > Admin - > Auth Methods - > Sukurti Autą. Nurodyti pavadinimą ir nustatyti <i>tipas</i> į Oktą.</p></i></i></i></i>';

$GLOBALS["lang"]['To use this feature you must enable the configuration items match_mac (for AWS) and match_hostname (for Azure). This will be done automatically the first time a cloud discovery is executed. For more on Open-AudITs matching rules see HERE: Matching Devices'] = 'Norėdami naudoti šią funkciją, turite įjungti konfigūracijos elementus rungtynės _ mac (AWS) ir rungtynės _ hostname (Azure). Tai bus daroma automatiškai pirmą kartą, kai bus atliekamas debesis. Daugiau apie Open- Auditų atitikimo taisykles žr.';

$GLOBALS["lang"]['To view the details of a query, the standard URL structure of /open-audit/index.php/queries/{$id} should be used.'] = 'Norėdami peržiūrėti užklausos detales, standartinę URL struktūrą / open- audit / index. Turėtų būti naudojamas php / queries / {$id}.';

$GLOBALS["lang"]['Togo'] = 'Togas';

$GLOBALS["lang"]['Tokelau'] = 'Tokelau';

$GLOBALS["lang"]['Tonga'] = 'Tonga';

$GLOBALS["lang"]['toolbar_style'] = 'Įrankių juostos stilius';

$GLOBALS["lang"]['Toolbar Style'] = 'Įrankių juostos stilius';

$GLOBALS["lang"]['Top Nmap TCP Ports'] = 'Top Nmap TCP prievadai';

$GLOBALS["lang"]['Top Nmap TCP Ports. The top 10, 100, 1000 ports to scan as per Nmaps &quot;top ports&quot; options.'] = 'Top Nmap TCP Uostai. Top 10, 100, 1000 prievadai skenuoti kaip pagal Naps "viršų prievadai" variantų.';

$GLOBALS["lang"]['Top Nmap UDP Ports'] = 'Top Nmap UDP prievadai';

$GLOBALS["lang"]['Top Nmap UDP Ports. The top 10, 100, 1000 ports to scan as per Nmaps &quot;top ports&quot; options.'] = 'Top Nmap UDP Uostai. Top 10, 100, 1000 prievadai skenuoti kaip pagal Naps "viršų prievadai" variantų.';

$GLOBALS["lang"]['Traditional Chinese'] = 'Tradicinis kinų';

$GLOBALS["lang"]['Traffic Light'] = 'Eismo šviesa';

$GLOBALS["lang"]['Trinidad and Tobago'] = 'Trinidadas ir Tobagas';

$GLOBALS["lang"]['Troubleshooting'] = 'Trikčių šalinimas';

$GLOBALS["lang"]['Troubleshooting LDAP Logins'] = 'Comment';

$GLOBALS["lang"]['Try Open-AudIT Enterprise, on us without a time limit. All the features of Enterprise. Limited to 20 devices.'] = 'Išbandyti Open- AudIT Versle, neribotam laikui. Visi Enterprise bruožai. Tik 20 prietaisų.';

$GLOBALS["lang"]['Try all the latest features with a FREE 100 device license of Open-AudIT Enterprise. Please read the '] = 'Išbandykite visas naujausias funkcijas su NEMOKAMAI 100 įrenginys licenciją Open- AudIT Enterprise. Prašome perskaityti ';

$GLOBALS["lang"]['Try logging in using an LDAP user. We are assuming this will fail (otherwise, why are you still reading this?). Next, comment out the line from ther file above.'] = 'Pabandykite prisijungti naudojant LDAP vartotojo. Mes manome, kad tai nepavyks (kitaip, kodėl jūs vis dar tai skaitote?). Toliau komentuoti linija iš ther failo aukščiau.';

$GLOBALS["lang"]['Tuesday'] = 'Antradienis';

$GLOBALS["lang"]['Tunisia'] = 'Tunisas';

$GLOBALS["lang"]['Turkey'] = 'Turkija';

$GLOBALS["lang"]['Turkish'] = 'Turkų';

$GLOBALS["lang"]['Turkmenistan'] = 'Turkmėnistanas';

$GLOBALS["lang"]['Turks and Caicos Islands'] = 'Terkso ir Kaikoso salos';

$GLOBALS["lang"]['Tuvalu'] = 'Tuvalu';

$GLOBALS["lang"]['tx_bitrate'] = 'Tx bitų dažnis';

$GLOBALS["lang"]['Tx Bitrate'] = 'Tx bitų dažnis';

$GLOBALS["lang"]['tx_freq'] = 'Tx Freq';

$GLOBALS["lang"]['Tx Freq'] = 'Tx Freq';

$GLOBALS["lang"]['tx_level'] = 'Tx lygis';

$GLOBALS["lang"]['Tx Level'] = 'Tx lygis';

$GLOBALS["lang"]['tx_power'] = 'Tx galia';

$GLOBALS["lang"]['Tx Power'] = 'Tx galia';

$GLOBALS["lang"]['tx_profile'] = 'Tx profilis';

$GLOBALS["lang"]['Tx Profile'] = 'Tx profilis';

$GLOBALS["lang"]['type'] = 'Tipas';

$GLOBALS["lang"]['Type'] = 'Tipas';

$GLOBALS["lang"]['Type: This can be either a varchar (a text field) or a List (a list of values that can be selected).'] = 'Tipas: Tai gali būti varcharas (teksto laukas) arba sąrašas (sąrašas reikšmių, kurias galima pasirinkti).';

$GLOBALS["lang"]['Types of Networks'] = 'Tinklo tipai';

$GLOBALS["lang"]['URL'] = 'URL';

$GLOBALS["lang"]['uuid'] = 'UUID';

$GLOBALS["lang"]['UUID'] = 'UUID';

$GLOBALS["lang"]['udp_ports'] = 'Udp prievadai';

$GLOBALS["lang"]['Udp Ports'] = 'Udp prievadai';

$GLOBALS["lang"]['Uganda'] = 'Uganda';

$GLOBALS["lang"]['Ukraine'] = 'Ukraina';

$GLOBALS["lang"]['Ukrainian'] = 'Ukrainiečių';

$GLOBALS["lang"]['Undergo Stage 1 audit (documentation review)'] = 'Pradedamas 1 etapo auditas (dokumentų peržiūra)';

$GLOBALS["lang"]['Undergo Stage 2 audit (implementation review)'] = '2 etapo auditas (įgyvendinimo peržiūra)';

$GLOBALS["lang"]['Undergoing Analysis'] = 'Vykdoma analizė';

$GLOBALS["lang"]['Unfiltered'] = 'Nefiltruotas';

$GLOBALS["lang"]['uninstall'] = 'Pašalinti';

$GLOBALS["lang"]['Uninstall'] = 'Pašalinti';

$GLOBALS["lang"]['Uninstall the Agent'] = 'Pašalinti agentą';

$GLOBALS["lang"]['United Arab Emirates'] = 'Jungtiniai Arabų Emyratai';

$GLOBALS["lang"]['United Kingdom'] = 'Jungtinė Karalystė';

$GLOBALS["lang"]['United States Minor Outlying Islands'] = 'Jungtinių Amerikos Valstijų mažosios atokios salos';

$GLOBALS["lang"]['United States Virgin Islands'] = 'Jungtinių Valstijų Mergelių Salos';

$GLOBALS["lang"]['United States of America'] = 'Jungtinės Amerikos Valstijos';

$GLOBALS["lang"]['Unknown'] = 'Nežinoma';

$GLOBALS["lang"]['unlock_pin'] = 'Atrakinti PIN';

$GLOBALS["lang"]['Unlock Pin'] = 'Atrakinti PIN';

$GLOBALS["lang"]['Unscheduled'] = 'Nenumatytas';

$GLOBALS["lang"]['Unused as at 5.2.0.'] = 'Nenaudojama 5.2.0 punkte.';

$GLOBALS["lang"]['Unused.'] = 'Nenaudojama.';

$GLOBALS["lang"]['Update'] = 'Atnaujinti';

$GLOBALS["lang"]['update_external_count'] = 'Atnaujinti išorinį skaičių';

$GLOBALS["lang"]['Update External Count'] = 'Atnaujinti išorinį skaičių';

$GLOBALS["lang"]['update_external_from_internal'] = 'Atnaujinti iš vidaus';

$GLOBALS["lang"]['Update External From Internal'] = 'Atnaujinti iš vidaus';

$GLOBALS["lang"]['update_internal_count'] = 'Atnaujinti vidinį skaičių';

$GLOBALS["lang"]['Update Internal Count'] = 'Atnaujinti vidinį skaičių';

$GLOBALS["lang"]['update_internal_from_external'] = 'Atnaujinti iš išorės';

$GLOBALS["lang"]['Update Internal From External'] = 'Atnaujinti iš išorės';

$GLOBALS["lang"]['Update NMIS Devices from Open-AudIT'] = 'Atnaujinti NMIS įrenginius iš Open- AudIT';

$GLOBALS["lang"]['Update Open-AudIT Devices from '] = 'Atnaujinti Open- AudIT Įrenginiai ';

$GLOBALS["lang"]['Update Open-AudIT Devices from NMIS'] = 'Atnaujinti Open- AudIT NMIS prietaisai';

$GLOBALS["lang"]['Update Vulnerabilities'] = 'Atnaujinti pažeidžiamumą';

$GLOBALS["lang"]['Update an attribute of a {collection} entry.'] = 'Atnaujinti {kolekcijos} įrašo požymį.';

$GLOBALS["lang"]['Update attributes'] = 'Atnaujinti požymius';

$GLOBALS["lang"]['Updated each time discovery has been executed with IPs detected to be responding.'] = 'Atnaujinama kiekvieną kartą, kai nustatoma, kad IP yra reaguojantys.';

$GLOBALS["lang"]['Updated each time discovery has been executed with IPs that have been scanned by Nmap.'] = 'Atnaujintas kiekvieną kartą atradimas buvo atliktas IP, kurie buvo nuskaityti Nmap.';

$GLOBALS["lang"]['Updated each time discovery has been executed with devices we were able to audit.'] = 'Atnaujintas kiekvieną kartą atradimas buvo atliktas su prietaisais, mes galėjome audituoti.';

$GLOBALS["lang"]['Updated each time discovery has been executed with devices we were able to query.'] = 'Atnaujintas kiekvieną kartą atradimas buvo įvykdytas su įrenginiais, mes galėjome paklausti.';

$GLOBALS["lang"]['Updated each time discovery has been executed.'] = 'Atnaujinama kiekvieną kartą, kai atradimas buvo atliktas.';

$GLOBALS["lang"]['Updated each time the discovery has been executed.'] = 'Atnaujinama kiekvieną kartą, kai atradimas atliekamas.';

$GLOBALS["lang"]['Updated each time the discovery has completed execution.'] = 'Atnaujinama kiekvieną kartą, kai atradimas užbaigiamas.';

$GLOBALS["lang"]['Updating'] = 'Atnaujinimas';

$GLOBALS["lang"]['Upgrade'] = 'Atnaujinti';

$GLOBALS["lang"]['Upload an audit result file'] = 'Įkelti audito rezultatų failą';

$GLOBALS["lang"]['Upper Case'] = 'Viršutinis dėklas';

$GLOBALS["lang"]['uptime'] = 'Atnaujinimas';

$GLOBALS["lang"]['Uptime'] = 'Atnaujinimas';

$GLOBALS["lang"]['Urdu'] = 'Urdu';

$GLOBALS["lang"]['url'] = 'Url';

$GLOBALS["lang"]['Url'] = 'Url';

$GLOBALS["lang"]['Uruguay, Eastern Republic of'] = 'Urugvajus, Rytų Respublika';

$GLOBALS["lang"]['usb'] = 'Usb';

$GLOBALS["lang"]['Usb'] = 'Usb';

$GLOBALS["lang"]['use'] = 'Naudojimas';

$GLOBALS["lang"]['Use'] = 'Naudojimas';

$GLOBALS["lang"]['use_authentication'] = 'Naudoti autentiškumo nustatymą';

$GLOBALS["lang"]['Use Authentication'] = 'Naudoti autentiškumo nustatymą';

$GLOBALS["lang"]['use_authorisation'] = 'Naudojimo leidimas';

$GLOBALS["lang"]['Use Authorisation'] = 'Naudojimo leidimas';

$GLOBALS["lang"]['Use Proxy'] = 'Naudoti proxy';

$GLOBALS["lang"]['Use SNMP'] = 'Naudoti SNMP';

$GLOBALS["lang"]['Use SSH'] = 'Naudoti SSH';

$GLOBALS["lang"]['Use Secure (LDAPS)'] = 'Naudoti saugiai (LDAPS)';

$GLOBALS["lang"]['Use Service Version Detection'] = 'Naudoti Paslaugos versijos aptikimą';

$GLOBALS["lang"]['Use Service Version Detection. When a detected port is detected as open, if set to <i>y</i>, Nmap will query the target device in an attempt to determine the version of the service running on this port.<br>This can be useful when identifying unclassified devices. This was not previously used.'] = 'Naudoti Service Version Detection. Kai aptiktas prievadas yra atidarytas, jei nustatoma <i>y</i>, Nmap bus užklausa tikslinį įrenginį bandant nustatyti paslaugos versija veikia šiame prievade.<br/>Tai gali būti naudinga identifikuojant neįslaptintus prietaisus. Tai nebuvo anksčiau panaudota.';

$GLOBALS["lang"]['Use WMI'] = 'Naudoti WMI';

$GLOBALS["lang"]['Use a <i>Sign-in method</i> of OIDC - OpenID Connect and an <i>Application Type</i> of Web Application. Click <i>Next</i>.'] = 'Vartoti a <i>Sign- in metodas</i> of OIDC - OpenID Connect ir <i>Programos tipas</i> iš interneto programos. Spustelėkite <i>Kitas</i>.';

$GLOBALS["lang"]['Use for Authentication'] = 'Autentiškumo nustatymas';

$GLOBALS["lang"]['Use for Roles'] = 'Relių naudojimas';

$GLOBALS["lang"]['Use the standard install options when displayed and click the <i>I Agree</i>, <i>Next</i> and <i>Install</i> buttons to install Nmap.'] = 'Naudokite standartinę įdiegti galimybes, kai rodomas ir spustelėkite <i>Aš sutinku</i>, <i>Kitas</i> ir <i>Įdiegti</i> mygtukai įdiegti Nmap.';

$GLOBALS["lang"]['used'] = 'Naudota';

$GLOBALS["lang"]['Used'] = 'Naudota';

$GLOBALS["lang"]['used_count'] = 'Naudojamas skaičius';

$GLOBALS["lang"]['Used Count'] = 'Naudojamas skaičius';

$GLOBALS["lang"]['Used by OpenLDAP only.'] = 'Naudojama tik OpenLDAP.';

$GLOBALS["lang"]['Used internally when discovering a single device.'] = 'Naudojamas viduje, kai atrandamas vienas įrenginys.';

$GLOBALS["lang"]['Used internally when discovering a single device. Links to <code>devices.id</code>.'] = 'Naudojamas viduje, kai atrandamas vienas įrenginys. Nuorodos į <code>devices.id</code>.';

$GLOBALS["lang"]['Used when LDAP servers have been configured to populate a users details - this includes the Orgs to which they have access. If a user is in this LDAP group, they are assigned this org.'] = 'Naudojamas, kai LDAP serveriai yra konfigūruoti vartotojų informacijos populate - tai apima Orgs, prie kurių jie turi prieigą. Jei vartotojas yra šioje LDAP grupėje, jie priskiriami šiam org.';

$GLOBALS["lang"]['Used when LDAP servers have been configured to populate a users details - this includes the Roles which they are assigned. If a user is in this LDAP group, they are assigned this role.'] = 'Naudojamas, kai LDAP serveriai yra konfigūruoti vartotojų informacijos populate - tai apima vaidmenis, kuriuos jie yra priskirti. Jei vartotojas yra šioje LDAP grupėje, jie yra priskirti šį vaidmenį.';

$GLOBALS["lang"]['Used when searching OpenLDAP to match a users uid to a groups members. Default of <code>memberUid</code>. Used by OpenLDAP only.'] = 'Naudojama ieškant OpenLDAP, kad vartotojas atitiktų grupių narius. Numatyta <code>memberUid</code>. Naudojama tik OpenLDAP.';

$GLOBALS["lang"]['Used with Integrations and FirstWave monitoring applications.'] = 'Naudojamas su Integravations ir FirstWave stebėjimo programomis.';

$GLOBALS["lang"]['Used with Integrations and FirstWave monitoring applications. Set to y if working SNMP detected by discovery.'] = 'Naudojamas su Integravations ir FirstWave stebėjimo programomis. Nustatyti į y, jei veikia SNMP nustatytas atradimo.';

$GLOBALS["lang"]['user'] = 'Naudotojas';

$GLOBALS["lang"]['User'] = 'Naudotojas';

$GLOBALS["lang"]['User DN'] = 'Naudotojo DN';

$GLOBALS["lang"]['user_group'] = 'Naudotojų grupė';

$GLOBALS["lang"]['User Group'] = 'Naudotojų grupė';

$GLOBALS["lang"]['user_id'] = 'Naudotojo ID';

$GLOBALS["lang"]['User ID'] = 'Naudotojo ID';

$GLOBALS["lang"]['user_interaction'] = 'Vartotojo sąveika';

$GLOBALS["lang"]['User Interaction'] = 'Vartotojo sąveika';

$GLOBALS["lang"]['User Membership Attribute'] = 'Naudotojo narystės atributas';

$GLOBALS["lang"]['user_name'] = 'Naudotojo vardas';

$GLOBALS["lang"]['User Name'] = 'Naudotojo vardas';

$GLOBALS["lang"]['User Policies'] = 'Naudotojų politika';

$GLOBALS["lang"]['Username'] = 'Naudotojo vardas';

$GLOBALS["lang"]['username'] = 'Naudotojo vardas';

$GLOBALS["lang"]['users'] = 'Naudotojai';

$GLOBALS["lang"]['Users'] = 'Naudotojai';

$GLOBALS["lang"]['Users work similar to Netstat Ports. If a user exists with a matching name, status and password details (changeable, expires, required) then the policy passes.'] = 'Vartotojai dirba panašiai kaip Netstat Ports. Jei vartotojas yra su atitikimo pavadinimą, statusą ir slaptažodį duomenis (keičiamų, baigiasi, reikia) tada politika eina.';

$GLOBALS["lang"]['Users, Roles and Orgs'] = 'Naudotojai, ritės ir orgai';

$GLOBALS["lang"]['Uses the CodeIgniter PHP Framework.'] = 'Naudoja CodeIgniter PHP sistemą.';

$GLOBALS["lang"]['Using'] = 'Naudojimas';

$GLOBALS["lang"]['Using Entra for Auth'] = 'Entros naudojimas Autai';

$GLOBALS["lang"]['Using LDAPS'] = 'Naudojant LDAPS';

$GLOBALS["lang"]['Using OKTA for Auth'] = 'OKTA naudojimas Autai';

$GLOBALS["lang"]['Using the format option is useful when using a web browser but you wish to see the result in JSON format. Adding format=json achieves this. Normally a web browser will set its accept header to HTML, so in that case, we return the rendered page. Using an API to retrieve JSON you should set the accept header to'] = 'Naudojant formatą parinktis yra naudinga naudojant interneto naršyklę, bet jūs norite pamatyti rezultatą JSON formatu. Pridėti formatas = json pasiekia tai. Paprastai žiniatinklio naršyklė nustato savo priėmimo antraštę HTML, todėl tokiu atveju, mes grąžiname lydytą puslapį. Naudodami API gauti JSON turėtumėte nustatyti priėmimo antraštę';

$GLOBALS["lang"]['Usually Mbs, from Location A.'] = 'Paprastai Mbs, iš vietos A.';

$GLOBALS["lang"]['Usually Mbs, from Location B.'] = 'Paprastai Mbs, iš vietos B.';

$GLOBALS["lang"]['Usually Mbs, to Location A.'] = 'Paprastai Mbs, į vietą A.';

$GLOBALS["lang"]['Usually Mbs, to Location B.'] = 'Paprastai Mbs, į vietą B.';

$GLOBALS["lang"]['Usually should be set to 3.'] = 'Paprastai nustatoma 3.';

$GLOBALS["lang"]['Uzbekistan'] = 'Uzbekistanas';

$GLOBALS["lang"]['VLAN'] = 'VLAN';

$GLOBALS["lang"]['VLAN ID'] = 'VLAN ID';

$GLOBALS["lang"]['valid_from'] = 'Galioja nuo';

$GLOBALS["lang"]['Valid From'] = 'Galioja nuo';

$GLOBALS["lang"]['valid_from_raw'] = 'Galioja nuo žaliavos';

$GLOBALS["lang"]['Valid From Raw'] = 'Galioja nuo žaliavos';

$GLOBALS["lang"]['valid_to'] = 'Galioja iki';

$GLOBALS["lang"]['Valid To'] = 'Galioja iki';

$GLOBALS["lang"]['valid_to_raw'] = 'Galioja iki žaliavos';

$GLOBALS["lang"]['Valid To Raw'] = 'Galioja iki žaliavos';

$GLOBALS["lang"]['Valid Values'] = 'Galiojančios reikšmės';

$GLOBALS["lang"]['value'] = 'Vertė';

$GLOBALS["lang"]['Value'] = 'Vertė';

$GLOBALS["lang"]['Value Types'] = 'Vertės tipai';

$GLOBALS["lang"]['values'] = 'Vertės';

$GLOBALS["lang"]['Values'] = 'Vertės';

$GLOBALS["lang"]['Values: In the case of a <i>list</i> field, this should be a comma separated list of valid values.'] = 'Reikšmės: Jeigu: <i>sąrašas</i> laukas, tai turėtų būti kableliais atskirtas galiojančių reikšmių sąrašas.';

$GLOBALS["lang"]['Vanuatu'] = 'Vanuatu';

$GLOBALS["lang"]['VarChar'] = 'VaršasCity in Quebec Canada';

$GLOBALS["lang"]['Varchar'] = 'Varcharas';

$GLOBALS["lang"]['variable'] = 'Kintamasis';

$GLOBALS["lang"]['Variable'] = 'Kintamasis';

$GLOBALS["lang"]['Various'] = 'Įvairūs';

$GLOBALS["lang"]['vendor'] = 'Pardavėjas';

$GLOBALS["lang"]['Vendor'] = 'Pardavėjas';

$GLOBALS["lang"]['Vendor Report'] = 'Tiekėjo ataskaita';

$GLOBALS["lang"]['vendors'] = 'Pardavėjai';

$GLOBALS["lang"]['Vendors'] = 'Pardavėjai';

$GLOBALS["lang"]['Venezuela'] = 'Venesuela';

$GLOBALS["lang"]['Version'] = 'Versija';

$GLOBALS["lang"]['version_padded'] = 'Versija pridėta';

$GLOBALS["lang"]['Version Padded'] = 'Versija pridėta';

$GLOBALS["lang"]['version_raw'] = 'Versija neapdorota';

$GLOBALS["lang"]['Version Raw'] = 'Versija neapdorota';

$GLOBALS["lang"]['version_string'] = 'Versijos eilutė';

$GLOBALS["lang"]['Version String'] = 'Versijos eilutė';

$GLOBALS["lang"]['video'] = 'Vaizdo įrašas';

$GLOBALS["lang"]['Video'] = 'Vaizdo įrašas';

$GLOBALS["lang"]['Vietnam'] = 'Vietnamas';

$GLOBALS["lang"]['Vietnamese'] = 'Vietnamiečių';

$GLOBALS["lang"]['View'] = 'Rodymas';

$GLOBALS["lang"]['View All'] = 'Rodyti viską';

$GLOBALS["lang"]['View Details'] = 'Rodyti detales';

$GLOBALS["lang"]['View Device'] = 'Rodyti įrenginį';

$GLOBALS["lang"]['View Discovery'] = 'Rodyti paiešką';

$GLOBALS["lang"]['View Policy'] = 'Rodyti politiką';

$GLOBALS["lang"]['View Racks'] = 'Rodyti kortas';

$GLOBALS["lang"]['View the'] = 'Rodyti';

$GLOBALS["lang"]['View the discovery in question, then click the Support button in the top right toolbar. This will provide the discovery settings, config items, the discovery device list as well as the logs for this particular discovery.'] = 'Peržiūrėkite tą atradimą, tada spustelėkite mygtuką "Palaikymas" viršutinėje dešinėje įrankių juostoje. Tai suteiks atradimo nustatymus, konfigūruoti elementus, atradimo įrenginių sąrašą ir šio konkretaus atradimo žurnalus.';

$GLOBALS["lang"]['View the release notes on the'] = 'Rodyti paleidimo užrašus ant';

$GLOBALS["lang"]['Virtual Private Network'] = 'Virtualus privatus tinklas';

$GLOBALS["lang"]['Virtual private network'] = 'Virtualus privatus tinklas';

$GLOBALS["lang"]['Virtualisation'] = 'Virtualizacija';

$GLOBALS["lang"]['Visit our YouTube channel for instructional videos.'] = 'Aplankykite mūsų YouTube kanalą pamokomiesiems vaizdo įrašams.';

$GLOBALS["lang"]['vlan'] = 'Vlan';

$GLOBALS["lang"]['Vlan'] = 'Vlan';

$GLOBALS["lang"]['vlan_id'] = 'Vlan ID';

$GLOBALS["lang"]['Vlan ID'] = 'Vlan ID';

$GLOBALS["lang"]['vm'] = 'Vm';

$GLOBALS["lang"]['Vm'] = 'Vm';

$GLOBALS["lang"]['vm_device_id'] = 'Vm įrenginio ID';

$GLOBALS["lang"]['Vm Device ID'] = 'Vm įrenginio ID';

$GLOBALS["lang"]['vm_group'] = 'Vm grupė';

$GLOBALS["lang"]['Vm Group'] = 'Vm grupė';

$GLOBALS["lang"]['vm_ident'] = 'Vm Ident';

$GLOBALS["lang"]['Vm Ident'] = 'Vm Ident';

$GLOBALS["lang"]['vm_server_name'] = 'Vm serverio pavadinimas';

$GLOBALS["lang"]['Vm Server Name'] = 'Vm serverio pavadinimas';

$GLOBALS["lang"]['vm_vendor'] = 'Vm Pardavėjas';

$GLOBALS["lang"]['Vm Vendor'] = 'Vm Pardavėjas';

$GLOBALS["lang"]['vuln_status'] = 'Vuln status';

$GLOBALS["lang"]['Vuln Status'] = 'Vuln status';

$GLOBALS["lang"]['vulnerabilities'] = 'Pažeidžiamumas';

$GLOBALS["lang"]['Vulnerabilities'] = 'Pažeidžiamumas';

$GLOBALS["lang"]['vulnerabilities_cache'] = 'Pažeidžiamumo talpyklos';

$GLOBALS["lang"]['Vulnerabilities Cache'] = 'Pažeidžiamumo talpyklos';

$GLOBALS["lang"]['Vulnerabilities and Results'] = 'Pažeidžiamumas ir rezultatai';

$GLOBALS["lang"]['Vulnerabilities initially published before 1st January, 2025 (by default). We see no sense in returning vulnerabilities from years prior. This can be changed in the configuration.'] = 'Pažeidžiamumas iš pradžių paskelbtas iki 2025 m. sausio 1 d. (pagal nutylėjimą). Mes nematome prasmės grąžinti pažeidžiamumą iš prieš metus. Tai gali būti pakeista konfigūracija.';

$GLOBALS["lang"]['vulnerability_id'] = 'Pažeidžiamumo identifikatorius';

$GLOBALS["lang"]['Vulnerability ID'] = 'Pažeidžiamumo identifikatorius';

$GLOBALS["lang"]['Vulnerability Status'] = 'Pažeidžiamumo būklė';

$GLOBALS["lang"]['WARNING - When creating a baseline using software policies, at present Centos and RedHat package the kernel using the names <i>kernel</i> and <i>kernel-devel</i>. There can be multiple packages with this name and different versions concurrently installed. Debian based distributions use names like <i>linux-image-3.13.0-24-generic</i>, note the version number is included in the package name. Because RedHat based operating systems use this format and subsequently have multiple identical package names with different versions we currently exclude <i>kernel</i> and <i>kernel-devel</i> from software policies. This may be addressed in a future update.'] = 'ĮSPĖJIMAS - Kuriant bazinę naudojant programinės įrangos politiką, šiuo metu Centos ir RedHat paketas branduolys naudojant pavadinimus <i>branduolys</i> ir <i>Equine-devel</i>. Gali būti keletas paketų su šiuo vardu ir skirtingų versijų vienu metu įdiegta. Debian pagrindo distribucijos naudoja pavadinimus kaip <i>linux- image- 3.13.0- 24- generinis</i>, pažymėti versijos numerį yra įtrauktas į pakuotės pavadinimą. Kadangi RedHat pagrindu operacinės sistemos naudoti šį formatą ir vėliau turi keletą identiškų paketų pavadinimus su skirtingomis versijomis mes šiuo metu atmesti <i>branduolys</i> ir <i>Equine-devel</i> iš programinės įrangos politikos. Šis klausimas gali būti sprendžiamas ateityje atnaujinus direktyvą.';

$GLOBALS["lang"]['WHERE'] = 'KUR';

$GLOBALS["lang"]['WMI Credentials Requirements'] = 'WMI Kreditai Reikalavimai';

$GLOBALS["lang"]['Wait for it to complete, then paste in this next line to install the Agent.'] = 'Palaukite, kol jis bus baigtas, tada įklijuokite į kitą eilutę įdiegti agentas.';

$GLOBALS["lang"]['wall_port'] = 'Sieninis prievadas';

$GLOBALS["lang"]['Wall Port'] = 'Sieninis prievadas';

$GLOBALS["lang"]['Wallis and Futuna'] = 'Volisas ir Futūna';

$GLOBALS["lang"]['Want to know more?'] = 'Nori sužinoti daugiau?';

$GLOBALS["lang"]['Warning'] = 'Įspėjimas';

$GLOBALS["lang"]['warranty'] = 'Garantija';

$GLOBALS["lang"]['Warranty'] = 'Garantija';

$GLOBALS["lang"]['warranty_duration'] = 'Garantijos trukmė';

$GLOBALS["lang"]['Warranty Duration'] = 'Garantijos trukmė';

$GLOBALS["lang"]['warranty_expires'] = 'Garantija baigiasi';

$GLOBALS["lang"]['Warranty Expires'] = 'Garantija baigiasi';

$GLOBALS["lang"]['warranty_status'] = 'Garantijos statusas';

$GLOBALS["lang"]['Warranty Status'] = 'Garantijos statusas';

$GLOBALS["lang"]['warranty_type'] = 'Garantijos tipas';

$GLOBALS["lang"]['Warranty Type'] = 'Garantijos tipas';

$GLOBALS["lang"]['We also have an option to Ping Before Scan (important for routers with long lived ARP caches). This is usually a good idea.'] = 'Mes taip pat turime galimybę Ping Before Scan (svarbi maršrutizatoriai su ilgaamžiais ARP dėklai). Paprastai tai gera mintis.';

$GLOBALS["lang"]['We also have our action items (which are executed in the order below):'] = 'Mes taip pat turime mūsų veiksmų elementus (kurie vykdomi toliau nurodyta tvarka):';

$GLOBALS["lang"]['We are often asked this question and the answer most definitely is <i>it depends</i>. It depends on the number of IPs to be scanned, the network connection speed, the speed of the devices being scanned, the type of devices being scanned, the number of different credentials being tested and the speed of the Open-AudIT server. We do not have a calculator that would allow us to input those variables and return a value. It is simply too complex. Generally I limit my discoveries to 256 IP addresses - ie, a /24 subnet. We have had customers scan /16 subnets (65k addresses) and it does work - but it can take a long time. You are much better off scanning in /24 blocks. If you simply do not know what your address ranges are, then this is a good case for a Seed discovery.'] = 'Mes dažnai užduodami šį klausimą ir atsakymas neabejotinai yra <i>priklauso</i>. Tai priklauso nuo nuskaitytinų IP skaičiaus, tinklo ryšio greičio, skenuojamų prietaisų greičio, skenuojamų prietaisų tipo, išbandytų skirtingų parametrų skaičiaus ir Open- AudIT serverio greičio. Mes neturime skaičiuoklės, kuri leistų mums įvesti šiuos kintamuosius ir grąžinti vertę. Tai tiesiog per daug sudėtinga. Paprastai apriboju savo atradimus iki 256 IP adresų - ty, a / 24 subnet. Mes turime klientų skenuoti / 16 potinklių (65k adresai) ir tai veikia - bet tai gali užtrukti ilgai. Jūs esate daug geriau nuo skenavimo / 24 kvartalų. Jei tiesiog nežinote, kas yra jūsų adresų intervalai, tai yra geras atvejis Sėklos atradimui.';

$GLOBALS["lang"]['We have more detailed instructions on'] = 'Mes turime išsamesnių instrukcijų';

$GLOBALS["lang"]['We have tests for:'] = 'Mes turime bandymus:';

$GLOBALS["lang"]['We hope you find Open-AudIT as useful as we do.'] = 'Tikimės, kad jums rasti Open- AudIT kaip naudinga, kaip ir mes.';

$GLOBALS["lang"]['We initially setup the default list of scripts with the default options. The list of script is viewable at /scripts. These default scripts cannot be deleted. You can create additional scripts for use by you as required. Your script will be based on one of the existing scripts and have custom options applied. The scripts can then be downloaded from the list page at menu: Discover -> Audit Scripts -> List Audit Scripts.'] = 'Iš pradžių nustatysime numatytąjį scenarijų sąrašą numatytosiomis parinktimis. Scenarijaus sąrašas yra matomas / scenarijus. Šie numatytieji scenarijai negali būti ištrinti. Jūs galite sukurti papildomus scenarijus naudoti jums, kaip reikalaujama. Jūsų scenarijus bus pagrįstas vienu iš esamų scenarijų ir taikyti pasirinktines parinktis. Scenarijus galima atsisiųsti iš sąrašo puslapio meniu: Atraskite - > Audito Scenarijai - > Sąrašas Audito Scenarijai.';

$GLOBALS["lang"]['We need some credentials to be able to effectively talk to the devices on your network.'] = 'Mums reikia tam tikrų įgaliojimų, kad galėtume veiksmingai pasikalbėti su jūsų tinklo įrenginiais.';

$GLOBALS["lang"]['We only send the minimum amount of data and nothing of a sensitive nature. We send our license data (name, type, etc), our application data (name, version, platform, timezone, etc), any logged errors, a count of device types and a count of the features used. <i>Any</i> environment has devices and that is the only piece of your data we send. And only the type of device and a count. Not the manufacturer, not the model. We send nothing special. No networks. No IP addresses. No OS versions. No software names. The UUID and Server fields are sha256 encoded (so we do not know the value). We send just the data we need to improve the product. We hope you see the benefit to all of us with this information. It will provide us guided direction on where to focus improvements and new features in the product.'] = 'Mes siunčiame tik minimalų duomenų kiekį ir nieko jautraus pobūdžio. Mes siunčiame mūsų licencijos duomenis (pavadinimas, tipas, ir tt), mūsų paraiškos duomenis (vardas, versija, platforma, laiko zona, ir tt), bet kokių prisijungusių klaidų, įrenginių tipų ir naudojamų funkcijų skaičius. <i>Bet koks</i> aplinka turi įrenginius, ir tai yra vienintelė jūsų duomenų dalis, kurią mes siunčiame. Ir tik prietaiso tipas ir skaičius. Ne gamintojas, ne modelis. Mes nesiunčiame nieko ypatingo. Nėra tinklų. Nėra IP adresų. Nėra OS versijų. Nėra programinės įrangos vardų. UUID ir serverio laukai yra sha256 užkoduotas (todėl mes nežinome vertę). Mes siunčiame tik duomenis mums reikia pagerinti produktą. Tikimės, kad ši informacija bus naudinga mums visiems. Tai suteiks mums kryptį, kur sutelkti patobulinimus ir naujas funkcijas produkto.';

$GLOBALS["lang"]['We tend to use the Google Chrome extension called Postman for testing actual restful queries. You might like to install and test with that.'] = 'Mes linkę naudoti "Google Chrome" plėtinys vadinamas "Postman" išbandyti realius neramus užklausas. Jums gali patikti įdiegti ir išbandyti su tuo.';

$GLOBALS["lang"]['Web'] = 'Žiniatinklis';

$GLOBALS["lang"]['Web Application Routes'] = 'Web aplikacijų maršrutai';

$GLOBALS["lang"]['Web Server Discovery'] = 'Name';

$GLOBALS["lang"]['Webserver'] = 'Interneto serveris';

$GLOBALS["lang"]['Website'] = 'Interneto svetainė';

$GLOBALS["lang"]['Wednesday'] = 'Trečiadienis';

$GLOBALS["lang"]['weight'] = 'Svoris';

$GLOBALS["lang"]['Weight'] = 'Svoris';

$GLOBALS["lang"]['weight_current'] = 'Dabartinis svoris';

$GLOBALS["lang"]['Weight Current'] = 'Dabartinis svoris';

$GLOBALS["lang"]['weight_empty'] = 'Svorio tuščia';

$GLOBALS["lang"]['Weight Empty'] = 'Svorio tuščia';

$GLOBALS["lang"]['weight_max'] = 'Didžiausias svoris';

$GLOBALS["lang"]['Weight Max'] = 'Didžiausias svoris';

$GLOBALS["lang"]['Welcome'] = 'Oficialus pasveikinimas';

$GLOBALS["lang"]['Welcome Dashboard'] = 'Sveiki atvykę į prietaisų skydelį';

$GLOBALS["lang"]['Welcome to'] = 'Sveiki atvykę į';

$GLOBALS["lang"]['Western Sahara'] = 'Vakarų Sachara';

$GLOBALS["lang"]['What Can I Expect if I Have no Credentials'] = 'Ko aš galiu tikėtis, jei neturiu kreditų';

$GLOBALS["lang"]['What about fields that I want from NMIS that are not in Open-AudIT? We have got you covered. Any fields in the external system (NMIS) that do not exist in Open-AudIT will be automatically created as Open-AudIT Custom fields.'] = 'Kaip dėl laukų, kad aš noriu iš NMIS, kurie nėra Open- AudIT? Mes tave pridengėme. Visi išorinės sistemos (NMIS) laukai, kurie neegzistuoja Open- AudIT, bus automatiškai sukurti kaip Open- AudIT Custom laukeliai.';

$GLOBALS["lang"]['What about other network devices? Think switches, routers, printers, etc. Obviously, it is best if you can provide some SNMP credentials for these devices. They only need <i>read-only</i> access. But if you do not want to do even that, there is nothing stopping you from running discovery, finding the devices, and making a rule or two to identify them (maybe use MAC Address prefix in combination with open ports, for example). You wont have much information, but you will know they are on the network, what they are, and when the last time they were seen was. You will also see if anything new appears on the network.'] = 'Kaip dėl kitų tinklo įrenginių? Galvok apie jungiklius, maršrutizatorius, spausdintuvus ir kt. Akivaizdu, kad geriausia, jei galite pateikti kai kurie SNMP įgaliojimai šių įrenginių. Jiems tik reikia <i>Tik read-</i> prieiga. Bet jei nenorite net tai daryti, niekas netrukdo jums paleisti atradimų, rasti įrenginius, ir priėmimo taisyklę ar dvi juos nustatyti (galbūt naudoti MAC Address priešdėlis kartu su atvirų prievadų, pavyzdžiui). Jūs norite turėti daug informacijos, bet jūs žinosite, kad jie yra tinkle, kas jie yra, ir kada paskutinį kartą jie buvo matyti. Jūs taip pat pamatysite, ar kas nors nauja pasirodo tinkle.';

$GLOBALS["lang"]['What do we send?'] = 'Ką mes siunčiame?';

$GLOBALS["lang"]['What does this actually mean to you?'] = 'Ką tai tau reiškia?';

$GLOBALS["lang"]['What is the purpose of this rack.'] = 'Koks yra šios lentynos tikslas.';

$GLOBALS["lang"]['What is the type of this location. Allowable types held in <code>attributes</code> table.'] = 'Koks yra šios vietos tipas. Leistini tipai, laikomi <code>attributes</code> lentelė.';

$GLOBALS["lang"]['When Open-AudIT on Linux discovers a Windows machine, in order to execute a remote command we use'] = 'Kai Open- AudIT Linux atranda Windows mašiną, kad vykdyti nuotolinio komandą mes naudojame';

$GLOBALS["lang"]['When Open-AudIT on Windows discovers a Windows machine, in order to execute a remote command we use'] = 'Kai Open- AudIT "Windows" atranda Windows mašina, siekiant vykdyti nuotolinio komandą mes naudojame';

$GLOBALS["lang"]['When Open-AudIT receives data about a device, either by discovering the device during an audit run or by the user importing the device, it must determine if this discovered device matches a device that already exists within its database, or if it is a new device that should be added. Open-AudIT uses a series of twelve property matches to determine this. The Match Rules work as OR comparisons, not AND. This means the first rule that matches a field in the discovered device to one in the dB resolves as an existing device. All Matching Rules have to fail in order for a device to be new and result in a new record being created.'] = 'Kai Open- Aud IT gauna duomenis apie prietaisą, arba aptikdama prietaisą audito metu, arba jį importuojantis naudotojas, ji turi nustatyti, ar šis aptiktas prietaisas atitinka įrenginį, kuris jau yra jos duomenų bazėje, arba ar tai naujas prietaisas, kuris turėtų būti pridėtas. Open- AudIT naudoja dvylika nekilnojamojo turto rungtynių serija nustatyti tai. Atitikmenų taisyklės veikia kaip arba palyginimai, ne ir. Tai reiškia, kad pirmoji taisyklė, kuri atitinka atrado prietaiso lauką su vienu dB, kaip esamas įrenginys, išnyksta. Visos derinimo taisyklės turi žlugti, kad prietaisas būtų naujas ir būtų sukurtas naujas įrašas.';

$GLOBALS["lang"]['When POSTing data, you must include an access token. An access token is generated with every request type, so make a GET (for example) and Accept: application/json, parse the response for meta→access_token, and include that with your request. This should be placed in the field data[access_token], IE, the top level.'] = 'Kai POSTing duomenys, turite įtraukti prieigos žymą. Prieigos žetonas yra generuojamas su kiekvienu užklausos tipu, todėl padaryti GET (pavyzdžiui) ir Priimti: programa / json, išnagrinėti meta → access _ žetonas atsakymą, ir įtraukti, kad su jūsų prašymu. Tai turėtų būti pateikta lauko duomenis [access _ signate], IE, aukščiausio lygio.';

$GLOBALS["lang"]['When a device is Discovered the audit script will be injected with the file (or directory) details. Both audit_linux.sh and audit_windows.vbs will be populated, regardless of the file path. If you are thinking <i>but putting a Linux path into a Windows machine will break things!</i>, it wont break, you just wont receive any data from that file or directory entry.<br>Retrieved details will be stored in the <i>file</i> database table and are stored like any other attribute. File details will be stored as any other attribute and generate alerts if any of the following attributes change - <i>full_name</i>, <i>hash</i>, <i>inode</i>, <i>last_changed</i>. The table contain a system_id, first_seen, last_seen and current columns as well as the file details.<br>Attributes recorded are:<br><ul><li>Windows - name, size, directory, SHA1 hash (of the file contents), last changed, permissions, owner, version (file permitting).</li><br><li>Linux - name, size, directory, SHA1 hash (of the file contents), last changed, meta data last changed, permissions, owner, group, inode.</li></ul>You will see a section in both the Windows and Linux audit scripts as below'] = 'Kai įrenginys bus pašalintas, audito scenarijus bus įleistas su failo (arba katalogo) duomenimis. Tiek audito _ linux.sh ir audito _ windows.vbs bus apgyvendinta, nepriklausomai nuo failo kelio. Jeigu galvojate <i>bet Linux kelio įdėjimas į Windows mašiną sudaužys viską!</i>, ji wont pertrauka, jūs tiesiog wont gauti bet kokius duomenis iš to failo ar katalogo įrašo.<br/>Gauti duomenys bus saugomi <i>failas</i> duomenų bazės lentelė ir saugomi kaip bet kuris kitas požymis. Failo duomenys bus saugomi kaip bet kuris kitas požymis ir generuoti perspėjimus, jei kuris nors iš šių požymių pasikeičia - <i>_ vardas</i>, <i>hash</i>, <i>inodas</i>, <i>paskutinis _ pakeitimas</i>. Lentelėje yra sistema _ id, pirmas _ seen, paskutinis _ see ir dabartiniai stulpeliai, taip pat failo detales.<br/>Įrašomi šie požymiai:<br/><ul><li>Windows - pavadinimas, dydis, katalogas, SHA1 hash (failo turinio), paskutinį kartą pakeistas, leidimai, savininkas, versija (failo leidimas).</li><br/><li>Linux - pavadinimas, dydis, katalogas, SHA1 hash (failo turinio), paskutinį kartą pakeistas, meta duomenys paskutinį kartą pasikeitė, leidimai, savininkas, grupė, inode.</li></ul>Jūs pamatysite skyrių tiek Windows ir Linux audito scenarijus kaip žemiau';

$GLOBALS["lang"]['When a discovery is run, the relevant discovery scan option is chosen and those settings are used by Nmap to scan the target devices.  The scan options determine which ports nmap scans, how fast they scan and whether or not nmap ping is first used to determine if the IP is live or not.'] = 'Kai atliekamas atradimas, pasirenkama atitinkama paieškos skenavimo parinktis, o tuos nustatymus Nmap naudoja taikiniams skenuoti. Skenavimo parinktys nustatyti, kurie prievadai nmap nuskaito, kaip greitai jie skenuoja ir ar nmap ping pirmiausia naudojamas nustatyti, ar IP yra gyvas, ar ne.';

$GLOBALS["lang"]['When a discovery is run, the relevant discovery scan option is chosen and those settings used by Nmap to scan the target devices. If no option set is chosen, the default configuration item (discovery_default_scan_option) is selected and used. Open-AudIT Community will use the default options as per the configuration for all discoveries.'] = 'Kai atradimas atliekamas, pasirenkama atitinkama paieškos skenavimo parinktis ir tie parametrai, kuriuos Nmap naudoja taikiniams nuskaityti. Jei nėra parinktis nustatyta, numatytoji konfigūracija elementas (atradimas _ numatytasis _ scan _ option) yra pasirinktas ir naudojamas. Open- AudIT bendruomenė naudos numatytąsias parinktis pagal visų atradimų konfigūraciją.';

$GLOBALS["lang"]['When a subnet discovery is executed it first runs, if selected, an Nmap ping scan on the range or IP addresses. Any device responding will be port scanned. If an Nmap ping scan is not requested, each IP is individually port scanned. Which ports? That is determined by the'] = 'Kai subtinklas atradimas yra vykdomas, jis pirmą kartą veikia, jei pasirinktas, Nmap ping skenavimo diapazone arba IP adresus. Bet koks įrenginys reaguoja bus prievadų skenavimas. Jei Nmap ping skenuoti nereikia, kiekvienas IP yra atskirai prievado skenuojama. Kuriuose uostuose? Tai lemia';

$GLOBALS["lang"]['When auditing a Linux device via SSH, some Linux distributions do not allow sudo commands to be passed without a TTY (which we are doing). To completely audit one of these linux distributions it is best to supply the root user credentials. If no root is supplied and sudo without a TTY is not possible, the audit script will be run but will not contain the amount of data as would otherwise. Subsequent audits using root (or run locally using sudo) will therefore provide extra details about the system and generate several <i>changes</i>.'] = 'Kai audito Linux prietaisas per SSH, kai Linux distribucijos neleidžia sudo komandos turi būti perduota be TTY (kurį mes darome). Visiškai audituoti vieną iš šių Linux distribucijos tai geriausia pateikti šaknis vartotojo duomenis. Jei nėra root tiekiamas ir sudo be TTY neįmanoma, audito scenarijus bus vykdomas, bet nebus duomenų kiekis, kaip būtų kitaip. Todėl vėlesni auditai naudojant šaknis (arba paleisti vietoje naudojant sudo) suteiks papildomos informacijos apie sistemą ir sukurti keletą <i>pokyčiai</i>.';

$GLOBALS["lang"]['When combining devices, which system is the authoritative source for information.'] = 'Derinant prietaisus, kuri sistema yra patikimas informacijos šaltinis.';

$GLOBALS["lang"]['When complete, close the command window and you are done!'] = 'Kai baigsite, uždarykite komandų langą ir baigsite!';

$GLOBALS["lang"]['When creating a widget, if you select the <i>Advanced</i> button you will have the ability to upload your own custom SQL.'] = 'Kuriant valdiklį, jei pasirinksite <i>Sudėtingesnė</i> mygtuką turėsite galimybę įkelti savo užsakymą SQL.';

$GLOBALS["lang"]['When integrating devices from the external system, if the device doesnt exist in Open-AudIT should we create it?'] = 'Integravus įrenginius iš išorinės sistemos, jei įrenginys neegzistuoja Open- AudIT, ar turėtume jį sukurti?';

$GLOBALS["lang"]['When integrating devices from the external system, if the device has been updated in the external system should we update it in Open-AudIT?'] = 'Integravus įrenginius iš išorinės sistemos, jei įrenginys buvo atnaujintas išorinėje sistemoje, ar turėtume jį atnaujinti Open- AudIT?';

$GLOBALS["lang"]['When investigating a Discovery, support will request the Exported Discovery Logs. To retrieve these, go to menu -> Discoveries ->'] = 'Tiriant paieškos programą, parama prašys siunčiamų paieškos žurnalų. Norėdami juos gauti, eikite į meniu - > Discoversies - >';

$GLOBALS["lang"]['When matching a Linux based device, we prefer to use the Dbus id concatenated with the hostname. We can also use other options as per the below table, but we can retrieve the Dbus ID without root. To retrieve the UUID (from the motherboard), we need to run dmidecode, which does require root. Unfortunately, when you clone an ESXi guest, the Dbus ID does not get recreated - hence our concatenating this with the hostname. There is a good article linked here that details the <i>why</i> of hardware IDs.'] = 'Sutinkant Linux paremtą įrenginį, mes norėtume naudoti Dbus id concatenated su mazgo pavadinimu. Mes taip pat galime naudoti kitas galimybes, kaip per žemiau esančią lentelę, bet mes galime gauti Dbus ID be šaknų. Norėdami gauti UUID (iš plokštės), mes turime paleisti dmidecode, kuris reikalauja šaknų. Deja, kai jūs klonuoti ESXi svečias, Dbus ID negauna atkurti - todėl mūsų concatenating tai su hostname. Čia yra geras straipsnis, susijęs su <i>kodėl</i> techninės įrangos identifikatorių.';

$GLOBALS["lang"]['When requesting JSON, by default no limit is set. When requesting screen display, the limit is set to 1000 by default. This can be changed in the configuration. See the <i>page_size</i> item'] = 'Prašant JSON, pagal nutylėjimą nėra nustatyta jokių ribų. Kreipiantis į ekrano rodymą, numatytoji riba yra 1000. Tai gali būti pakeista konfigūracija. 4. 4 skyrių). <i>_ dydis</i> punktas';

$GLOBALS["lang"]['When retrieve an external device, should we run discovery upon it?'] = 'Kai gauname išorinį įrenginį, ar turėtume jį atrasti?';

$GLOBALS["lang"]['When running Open-AudIT on Windows the Apache service account must be that of a <i>regular</i> user (or the Administrator). This is because the <i>Local System</i> account normally used to run Apache has no access to any network resources. IE - We cannot use Apache when running as the Local System account account to copy the audit script to Windows PCs.'] = 'Kai veikia Open- AudIT Windows Apache paslaugos sąskaitą turi būti, kad <i>reguliarus</i> naudotojas (arba administratorius). Taip yra dėl to, kad <i>Vietinė sistema</i> paprastai naudojama "Apache" paskyra neturi prieigos prie jokių tinklo išteklių. IE - Mes negalime naudoti Apache, kai veikia kaip vietos sistemos sąskaitą nukopijuoti audito scenarijų Windows PC.';

$GLOBALS["lang"]['When the configuration option is set, we take this into account for devices for a certain defined subset of match rules where the configuration item has been enabled. These rules are:'] = 'Kai konfigūravimo parinktis yra nustatyta, mes atsižvelgti į tai įrenginių tam tikrą apibrėžtą atitikmenų taisyklių poaibis, kai konfigūracijos elementas buvo įjungtas. Šios taisyklės yra:';

$GLOBALS["lang"]['When the rules run in discovery, any matching rules will appear in the discovery log. See below for an example.'] = 'Kai taisyklės paleisti atradimas, bet atitikimo taisyklės bus rodomas atradimų žurnale. Pavyzdžiui, žr. toliau.';

$GLOBALS["lang"]['When this benchmark is scheduled to be executed. Derived from the associated <code>tasks.type</code> and <code>tasks.sub_resource_id</code>.'] = 'Kai šį lyginamąjį indeksą planuojama įgyvendinti. Išvestinės susijusios <code>tasks.type</code> ir <code>tasks.sub_resource_id</code>.';

$GLOBALS["lang"]['When this log was created.'] = 'Kai šis žurnalas buvo sukurtas.';

$GLOBALS["lang"]['When this queue item started processing.'] = 'Kai šis eilėje elementas pradėjo apdoroti.';

$GLOBALS["lang"]['When using Open-AudIT Professional or Enterprise, widgets are available and customisable to be displayed on Dashboards.'] = 'Naudojant Open- AudIT Professional arba Enterprise, raštai yra prieinami ir pritaikyti būti rodomas Dashboars.';

$GLOBALS["lang"]['When we are converting an internally selected device to an object for the external system, what should the external data be. EG: integer, string, etc.'] = 'Kai mes konvertuoti viduje pasirinktą įrenginį į išorės sistemos objektą, kas turėtų būti išoriniai duomenys. EG: sveikasis skaičius, eilutė ir t. t.';

$GLOBALS["lang"]['When we execute this baseline, should we check for items on devices that are not in a policy for this baseline.'] = 'Kai mes įgyvendiname šį bazinį, jei mes patikrinti, ar ant įrenginių, kurie nėra šios bazinės politikos.';

$GLOBALS["lang"]['When we receive an open port, should we attempt to test for the version of the service currently running upon it? This assists in confirming actual running services.'] = 'Kai gauname atvirą uostą, ar turėtume bandyti išbandyti šiuo metu juo besinaudojančios paslaugos versiją? Tai padeda patvirtinti tikrąsias paslaugas.';

$GLOBALS["lang"]['When you are using Clouds to discover your Amazon AWS instances, you will need two credential items - key and secret key. Your key should already be known to you and your secret key as well. Of note is that you cannot retrieve your secret key using the AWS Console provided by Amazon. If you have misplaced it, you will need to generate a new one.'] = 'Kai naudojate Clouds atrasti savo Amazon AWS atvejų, jums reikės dviejų patikimiausių daiktų - raktas ir slaptas raktas. Jūsų raktas jau turėtų būti žinomas jums ir jūsų slaptas raktas taip pat. Atkreipkite dėmesį, kad jūs negalite gauti savo slaptą raktą naudojant AWS konsolės pateikė Amazon. Jei jį pametėte, jums reikės sukurti naują.';

$GLOBALS["lang"]['When you are using Clouds to discover your Microsoft Azure instances, you will need four credential items - subscription id, tenant id, client id and client secret.'] = 'Kai naudojate Clouds atrasti savo Microsoft Azure pavyzdžių, jums reikės keturių patikimiausių elementų - prenumeratos id, nuomininko id, kliento id ir kliento paslaptis.';

$GLOBALS["lang"]['When you create a discovery you have an option to devices_assigned_to_org. This means that any devices discovered for this discovery will be assigned (have <code>devices.org_id</code> set to) your chosen Organisation.'] = 'Kai kuriate atradimą, turite parinktį įrenginiams _ asset _ to _ org. Tai reiškia, kad šiam atradimui bus paskirti visi atrasta įranga ( <code>devices.org_id</code> nustatyti) savo pasirinktą organizaciją.';

$GLOBALS["lang"]['When you create a new discovery if you click the Advanced button, you have many more options to change, one of them being the type of discovery.Types have always been Subnet (encompassing the above range, subnet, ip options) and Active Directory. As at v4.1, Open-AudIT has a new discovery type called Seed.'] = 'Kai sukursite naują atradimą, jei paspausite "Advanced" mygtuką, turėsite daug daugiau galimybių keistis, viena iš jų yra atradimo tipas. Tipai visada buvo Subnet (apimantis aukščiau diapazoną, subnet, Ip parinktys) ir Active Directory. Kaip v4.1, Open- AudIT turi naują atradimo tipas vadinamas Sėkla.';

$GLOBALS["lang"]['When you enable a Query to be run on a schedule, the query is emailed to your chosen address. You must have set up email via menu -> Admin -> Enterprise -> Email Config. We also have a <i>test email<i> button on that page. Input your details, save it and then test it. You should have a modal box that informs you if it successful or not and obviously a test email should arrive if it is successful. Once you have email configured, your scheduled query can be configured.<br><br>Provide a name, optional description, choose <i>Query</i> type, select the desired query, provide an email address, choose a format and set the schedule.<br><br>Provide an hour (hour only, no minutes as yet), give the task a name (this is not the name of the actual scheduled query itself), select which days you would like the query run, choose which query you would like run, supply an email address and choose a query format and you are done.<br>Queries will be sent with an email body of the query (in html format) and the query attached in the requested format.'] = 'Kai įgalinate užklausą paleisti pagal tvarkaraštį, užklausa siunčiama el. paštu Jūsų pasirinktu adresu. Jūs turite nustatyti laišką per meniu - > Admin - > Įmonė - > El. paštas Config. Mes taip pat turime <i>testo el. paštas<i> mygtukas tame puslapyje. Įveskite savo duomenis, išsaugokite jį ir tada išbandyti jį. Turėtumėte turėti modalinį langelį, kuris informuotų jus, jei jis sėkmingas, ar ne, ir akivaizdu, kad testo el. paštas turėtų atvykti, jei jis sėkmingas. Kai turite sukonfigūruotas pašto, jūsų suplanuota užklausa gali būti sukonfigūruotas.<br/><br/>Nurodyti pavadinimą, neprivalomą aprašymą, pasirinkti <i>Užklausa</i> įveskite, pasirinkite norimą užklausą, nurodykite el. pašto adresą, pasirinkite formatą ir nustatykite tvarkaraštį.<br/><br/>Pateikite valandą (tik valandą, ne minutes, kol kas), suteikti užduotį pavadinimą (tai nėra pats tikrasis planinis užklausos pavadinimas), pasirinkti, kurios dienos norėtumėte užklausos paleisti, pasirinkti, kuri užklausa norite paleisti, pateikti elektroninio pašto adresą ir pasirinkti užklausos formatą ir jūs esate padaryta.<br/>Užklausos bus siunčiamos su užklausos el. pašto adresu (html formatu) ir užklausa pridedama prašomu formatu.</i></i>';

$GLOBALS["lang"]['When you enter text into one of the column headings, you can simply use a normal word. For example, when you enter <code>computer</code> into the search box above the <i>Type</i> column, the search will return all devices with the type of Computer. Essentially, Open-AudIT requests data using a URL like <code>devices?devices.type=computer</code>. Now there is one significant difference when using the dataTables search, versus the standard'] = 'Kai įvesite tekstą į vieną iš stulpelių antraščių, galite tiesiog naudoti įprastą žodį. Pavyzdžiui, kai įvesite <code>computer</code> į paieškos langelį viršuje <i>Tipas</i> stulpelis, paieška bus grąžinti visus įrenginius su kompiuterio tipo. Iš esmės, Open- Aud IT prašo duomenų naudodami panašų URL <code>devices?devices.type=computer</code>. Dabar yra vienas reikšmingas skirtumas naudojant duomenų lenteles paieškos, palyginti su standartiniu';

$GLOBALS["lang"]['where'] = 'Kai';

$GLOBALS["lang"]['Where'] = 'Kai';

$GLOBALS["lang"]['Where $x is a number. This many LDAP entries are in the DB and have been retrieved.'] = 'Kur $x yra skaičius. Šie daug LDAP įrašų yra DB ir buvo gauti.';

$GLOBALS["lang"]['Where on the Device Details screen you would like to see this field appear.'] = 'Kur ekrane "Įrenginio informacija" norėtumėte matyti šį lauką.';

$GLOBALS["lang"]['Where the rack is in the row.'] = 'Kur stovas yra eilėje.';

$GLOBALS["lang"]['Whether the vulnerability affects components beyond its own using Impact, Availability and Confidentiality.'] = 'Ar pažeidžiamumas veikia komponentus už savo naudojant poveikį, Prieinamumas ir Konfidencialumas.';

$GLOBALS["lang"]['Whether user interaction is required (None, Passive, Active).'] = 'Ar naudotojo sąveika yra būtina (nėra, pasyvus, aktyvus).';

$GLOBALS["lang"]['Which OS this benchmark applies to.'] = 'Kuri OS šis santykinis taršos rodiklis taikomas.';

$GLOBALS["lang"]['Which devices should Open-AudIT create from the external system (if any). Using All, None or a given Attribute.'] = 'Kokie įrenginiai turėtų Open- AudIT sukurti iš išorės sistemos (jei yra). Naudojant visus, Nėra arba tam tikrą atributas.';

$GLOBALS["lang"]['Which network should we discover. This should be in the format of'] = 'Kurį tinklą turėtume atrasti. Tai turėtų būti tokios formos, kokia';

$GLOBALS["lang"]['Which sub-menu should we display this query in.'] = 'Kuris meniu turėtų rodyti šį užklausą.';

$GLOBALS["lang"]['Who made this rack.'] = 'Kas tai padarė?';

$GLOBALS["lang"]['Why Windows Server Only?'] = 'Kodėl Windows serveris tik?';

$GLOBALS["lang"]['Why do we exclude this policy?'] = 'Kodėl mes atsisakome šios politikos?';

$GLOBALS["lang"]['Wide Area Network'] = 'Platus tinklas';

$GLOBALS["lang"]['Wide area network'] = 'Platus tinklas';

$GLOBALS["lang"]['Widget'] = 'Valdiklis';

$GLOBALS["lang"]['Widget #'] = 'Valdiklis #';

$GLOBALS["lang"]['Widget # '] = 'Valdiklis # ';

$GLOBALS["lang"]['Widget Type'] = 'Valdiklio tipas';

$GLOBALS["lang"]['widgets'] = 'Elementai';

$GLOBALS["lang"]['Widgets'] = 'Elementai';

$GLOBALS["lang"]['Widgets are designed to be used on Dashboards. Enterprise users have complete freedom to create, update and delete widgets as required.'] = 'Valdikliai yra skirti naudoti prietaisų skyduose. Įmonių vartotojai turi visišką laisvę kurti, atnaujinti ir ištrinti raštus, kaip reikalaujama.';

$GLOBALS["lang"]['width'] = 'Plotis';

$GLOBALS["lang"]['Width'] = 'Plotis';

$GLOBALS["lang"]['windows'] = 'Langai';

$GLOBALS["lang"]['Windows'] = 'Langai';

$GLOBALS["lang"]['Windows Packages'] = 'Windows paketai';

$GLOBALS["lang"]['Windows Test Script'] = 'Windows testo scenarijus';

$GLOBALS["lang"]['Windows User Work Unit #1'] = 'Windows vartotojo darbo vienetas # 1';

$GLOBALS["lang"]['Windows User Work Unit #2'] = 'Windows vartotojo darbo vienetas # 2';

$GLOBALS["lang"]['Windows may also have blocked the service from starting. On the target start the Windows Security applet and ensure the WinExeSvc executable is allowed to run (click Allow on Device and then Start Actions).'] = 'Windows taip pat gali būti blokavo paslaugą nuo pradžios. Dėl tikslo pradėti Windows saugumo programa ir užtikrinti WinExeSvc vykdomąjį failą leidžiama paleisti (spustelėkite Leisti įrenginio ir tada pradėti veiksmus).';

$GLOBALS["lang"]['Winexe page on Samba'] = 'Winexe puslapis Samba';

$GLOBALS["lang"]['Winexe requires the following Windows services to be started and running: netlogon and rpc services to be running.<br><br>Please log on to the target Windows machine and check the services for netlogon and rpc are running.'] = 'Winexe reikalauja pradėti ir paleisti šias Windows paslaugas: netlogon ir rpc paslaugos turi būti paleisti.<br/><br/>Prašome prisijungti prie tikslinės Windows mašina ir patikrinkite, ar paslaugos netlogon ir rpc veikia.';

$GLOBALS["lang"]['Winexe uses the admin$ and RPC (net service start) to install and start a remote service (winexesvc). This service initializes a named pipe that is used to transport commands from the Open-AudIT server to the target and the output in the reverse way. When finished, the named pipe closes and the winexesvc waits for more connections or uninstalls (depending of the options given).'] = 'Winexe naudoja admin $ir RPC (neto paslaugos pradžia) įdiegti ir pradėti nuotolinę paslaugą (winexesvc). Ši paslauga inicijuoja pavadintą vamzdį, kuris yra naudojamas transportuoti komandas iš Open- AudIT serverio į tikslą ir išvesties atvirkščiai. Kai baigsite, pavadintas vamzdis užsidaro ir Winexesvc laukia daugiau jungčių ar nemontuojamas (priklausomai nuo pateiktų variantų).';

$GLOBALS["lang"]['Wireless Local Area Network'] = 'Belaidis vietinis tinklas';

$GLOBALS["lang"]['With the 3.3.0 release of Open-AudIT we have introduced the concept of a Cluster. This intuitively maps to the idea of a web cluster, database cluster or file cluster (or one of several other purposes) into a given type (high availability, redundancy, scaling, etc).<br><br>Depending on the purpose of cluster chosen, the reporting will be slightly different.<br><br>For example, if you create a Cluster with a purpose of virtualisation, when you have added devices to it you will also see the virtual machines on those devices.'] = 'Su 3.3.0 išleidimo Open- AudIT mes pristatėme klasterio koncepciją. Tai intuityviai atspindi interneto klasterio, duomenų bazių klasterio ar failų klasterio (arba vieno iš kelių kitų tikslų) idėją tam tikro tipo (didelio prieinamumo, perteklinio, mastelio ir kt.).<br/><br/>Priklausomai nuo pasirinkto grupės tikslo, ataskaitos bus šiek tiek skirtingos.<br/><br/>Pavyzdžiui, jei jūs sukurti klasteris su virtualizacijos tikslu, kai jūs įtraukėte įrenginius į jį, taip pat pamatysite virtualių mašinų ant tų prietaisų.';

$GLOBALS["lang"]['With the introduction of the Clouds feature, you can supply details of your cloud, Amazon AWS or Microsoft Azure, and Open-AudIT will use the relevant API to retrieve a list of locations, networks, and instances, then discover each of these instances.'] = 'Su Clouds funkcijos įvedimas, galite pateikti informaciją apie savo debesis, Amazon AWS arba Microsoft Azure, ir Open- AudIT bus naudoti atitinkamą API gauti vietų, tinklų ir atvejų sąrašą, tada atrasti kiekvieną iš šių atvejų.';

$GLOBALS["lang"]['wmi_fails'] = 'Wmi Fales';

$GLOBALS["lang"]['Wmi Fails'] = 'Wmi Fales';

$GLOBALS["lang"]['wmi_timeout'] = 'Wmi Timeout';

$GLOBALS["lang"]['Wmi Timeout'] = 'Wmi Timeout';

$GLOBALS["lang"]['workgroup'] = 'Darbo grupė';

$GLOBALS["lang"]['Workgroup'] = 'Darbo grupė';

$GLOBALS["lang"]['Working Credentials'] = 'Darbo kreditai';

$GLOBALS["lang"]['Wrap Up'] = 'Laužyti aukštyn';

$GLOBALS["lang"]['Written in the PHP scripting language.'] = 'Parašyta PHP scenarijų kalba.';

$GLOBALS["lang"]['XML'] = 'XML';

$GLOBALS["lang"]['Yellow Query'] = 'Geltona užklausa';

$GLOBALS["lang"]['Yemen'] = 'Jemenas';

$GLOBALS["lang"]['Yes'] = 'Taip';

$GLOBALS["lang"]['You are able to define extra directories to be scanned as entries in the Executables collection. When defined, the directory and all sub-directories are scanned for files that are executable. You can also define directories and files to be excluded. When activated, these are injected into the linux audit script and performed whenever it is run (usually as part of a discovery). If you want these in a script you can manually copy to the target, use menu -> Discover -> Scripts -> List Scripts and download the script from there.'] = 'Galite nustatyti papildomus aplankus, kurie bus nuskaitomi kaip įrašai Executables kolekcijoje. Kai nustatyta, aplankas ir visi poaplankiai nuskaitomi failams, kurie yra vykdomieji. Taip pat galite apibrėžti katalogus ir failus, kurie bus atmesti. Kai aktyvuota, jie įleidžiami į linux audito scenarijų ir atliekami, kai jis paleidžiamas (paprastai kaip atradimo dalis). Jei norite šių scenarijų galite rankiniu būdu nukopijuoti į tikslą, naudokite meniu - > Atraskite - > Skriptai - > Sąrašas Skriptai ir atsisiųsti scenarijų iš ten.';

$GLOBALS["lang"]['You are always free to modify the audit scripts themselves to suit your specific requirements. You will need to (re)incorporate those changes whenever you upgrade as they will be overwritten by the default scripts. I would suggest saving a master copy of your modified script, upgrading Open-AudIT, then running a diff between the new default script and your modified script and applying the differences. The audit scripts are native scripts (Windows is VBScript, all others are Bash). Simple and easy to modify - just make sure to have a copy of your changes before you upgrade.'] = 'Jūs visada galite patys keisti audito scenarijus, kad jie atitiktų jūsų konkrečius reikalavimus. Jums reikės (vėl) įtraukti tuos pakeitimus, kai jūs atnaujinti, kaip jie bus perrašyti numatytuosius scenarijus. Siūlyčiau išsaugoti jūsų pakeisto scenarijaus pagrindinę kopiją, atnaujinti Open- AudIT, tada paleisti skirtumą tarp naujo numatytojo scenarijaus ir jūsų modifikuoto scenarijaus ir taikyti skirtumus. Audito scenarijai yra gimti (Windows yra VBScript, visi kiti yra Bash). Paprasta ir lengva keisti - tiesiog įsitikinkite, kad turite savo pakeitimus kopiją prieš jums atnaujinti.';

$GLOBALS["lang"]['You are running version'] = 'Jūs atliekate versiją';

$GLOBALS["lang"]['You can access the collection using the normal Open-AudIT JSON based API. Just like any other collection. Please see'] = 'Jūs galite prieiti prie kolekcijos naudojant įprastą Open- AudIT JSON pagrindu API. Kaip ir bet kuri kita kolekcija. Prašom';

$GLOBALS["lang"]['You can also'] = 'Taip pat galite';

$GLOBALS["lang"]['You can also see at the bottom of the page a table showing the devices the changes will be applied to.'] = 'Puslapio apačioje taip pat galite pamatyti lentelę, rodančią prietaisus, kuriems bus taikomi pakeitimai.';

$GLOBALS["lang"]['You can also specify properties using the below format.'] = 'Taip pat galite nurodyti savybes, naudojant toliau pateiktą formatą.';

$GLOBALS["lang"]['You can always run the Firstwave VM on your virtual infrastructure (ESX, Azure, et al). The Firstwave VM runs Debian linux and is free from OS licensing concerns and limitations. Or install on your own Linux distro of choice. We support Redhat 9, Ubuntu 20.04, 22.04 and 24.04 as well as Debian 11 and 12.'] = 'Visada galite paleisti Firstwave VM virtualioje infrastruktūroje (ESX, Azure, et al). Firstwave VM valdo Debian linux ir yra laisvas nuo OS licencijavimo problemų ir apribojimų. Arba įdiegti savo Linux districo pasirinkimas. Mes palaikome Redhat 9, Ubuntu 20.04, 22.04 ir 24.04, taip pat Debian 11 ir 12.';

$GLOBALS["lang"]['You can assign devices to a location automatically using'] = 'Galite priskirti įrenginius į vietą automatiškai, naudojant';

$GLOBALS["lang"]['You can assign devices using custom'] = 'Galite priskirti įrenginius naudojant pasirinktinį';

$GLOBALS["lang"]['You can audit a remote machine without the using the actual Administrator account by creating a registry key. Create the below key on every machine to be audited and make sure the user credentials used is a member of the Administrators group.'] = 'Nuotolinio aparato auditą galite atlikti be faktinės administratoriaus paskyros, sukurdami registro raktą. Sukurkite žemiau esantį raktą ant kiekvienos mašinos, kuri bus audituojama, ir įsitikinkite, kad naudojami vartotojo duomenys yra administratorių grupės narys.';

$GLOBALS["lang"]['You can certainly run a discovery without any valid credentials on the devices within the network, however, the information retrieved will be a very small subset of what Open-AudIT has the ability to retrieve <i>with</i> credentials.'] = 'Jūs tikrai galite paleisti atradimą be jokių galiojančių duomenų apie įrenginius tinkle, tačiau gauta informacija bus labai mažas poaibis ką Open- AudIT turi galimybę gauti <i>su</i> įgaliojimus.';

$GLOBALS["lang"]['You can create a baseline, run it against a group of devices and view the results, add scheduled execution, add more tables for comparison (currently only software, netstat ports and users are enabled), in place baseline editing, archiving of results and more.'] = 'Galite sukurti bazinę liniją, paleisti ją prieš įrenginių grupę ir peržiūrėti rezultatus, pridėti suplanuotą vykdymą, pridėti daugiau lentelių palyginimui (šiuo metu įjungta tik programinė įranga, tinklo prievadai ir vartotojai), vietoje pradinio redagavimo, archyvavimo rezultatų ir daugiau.';

$GLOBALS["lang"]['You can create a script with all the options for any of the existing audit scripts - not just Windows. AIX, ESX, Linux, OSX and Windows are all covered.'] = 'Jūs galite sukurti scenarijų su visomis galimybėmis bet kuris iš esamų audito scenarijų - ne tik Windows. Visi AIX, ESX, Linux, OSX ir Windows yra padengti.';

$GLOBALS["lang"]['You can customize the entire integration down to which system (NMIS or Open-AudIT) is the authority on a per field basis. There are options to create and/or update devices in Open-AudIT or NMIS. Should we run a discovery on a created or updated device and so much more. There are explanations for each item on the right side of the page.'] = 'Galite pritaikyti visą integraciją žemyn į kurią sistemą (NMIS arba Open- AudIT) yra institucija pagal lauką pagrindu. Yra galimybių sukurti ir / arba atnaujinti įrenginius Open- AudIT arba NMIS. Ar turėtume paleisti atradimą sukurtame ar atnaujintame įrenginyje ir tiek daug daugiau. Dešinėje puslapio pusėje yra paaiškinimai dėl kiekvieno elemento.';

$GLOBALS["lang"]['You can define an application and associate a device to this application. A device may be associated to more than one application. An application may be associated to more than one device.'] = 'Galite nustatyti programą ir susieti įrenginį su šia programa. Prietaisas gali būti susietas su daugiau kaip viena programa. Programa gali būti susieta su daugiau nei vienu prietaisu.';

$GLOBALS["lang"]['You can edit the value of the Additional Field for each individual device on the device details page. View the device details screen, open the section containing the field and (if you have'] = 'Galite redaguoti kiekvieno atskiro prietaiso papildomo lauko vertę prietaiso informacijos puslapyje. Peržiūrėkite įrenginio informacijos ekraną, atidarykite lauką ir (jei turite';

$GLOBALS["lang"]['You can limit the Device Seed Discovery to fall within a strict set of parameters, including: <i>Restrict to Subnet</i> and <i>Restrict to Private</i>'] = 'Galite apriboti įrenginio sėklų aptikimo patenka į griežtus parametrus, įskaitant: <i>Apriboti Subnet</i> ir <i>Apriboti į privatų</i>';

$GLOBALS["lang"]['You can manually assign devices using'] = 'Galite rankiniu būdu priskirti įrenginius naudojant';

$GLOBALS["lang"]['You can override this by providing the format option in the URL.'] = 'Galite tai pakeisti, pateikdami URL formato parinktį.';

$GLOBALS["lang"]['You can select individual devices by clicking their check-boxes on the right side or selecting all devices clicking the checkbox on the top right of the table (underneath the Edit button that looks like a pencil).'] = 'Galite pasirinkti atskirus įrenginius, spustelėję jų žymimuosius langelius dešinėje pusėje arba pasirinkę visus įrenginius, paspaudusius žymimąjį langelį viršuje dešinėje stalo pusėje (po Edit mygtuku, kuris atrodo kaip pieštukas).';

$GLOBALS["lang"]['You can select the devices to be integrated by choosing any attribute in the system (device) table and matching (see menu → Admin → Database → List Tables → system for a list of fields). An attribute match can only match a single value.'] = 'Galite pasirinkti įrenginius, kurie bus integruoti, pasirinkdami bet kokį atributą sistemos (prietaiso) lentelėje ir suderindami (žr. meniu → Admin → Database → List Tables → System for the list of field). Požymio atitikmuo gali atitikti tik vieną reikšmę.';

$GLOBALS["lang"]['You can turn any server into a collector by going to menu -> Admin -> Collectors -> Make this install a Collector. You will need credentials to log on to the server this install will report in to.'] = 'Bet kurį serverį galite paversti kolektoriumi, eidami į meniu - > Admin - > Kolektoriai - > Padaryti tai įdiegti kolektorius. Jums reikės įgaliojimus prisijungti prie serverio šis įdiegti bus pranešti.';

$GLOBALS["lang"]['You can view by clicking on the blue view icon. You can also edit or delete if you have permissions.'] = 'Jūs galite peržiūrėti paspaudę mėlyno vaizdo piktogramą. Taip pat galite redaguoti arba ištrinti, jei turite leidimus.';

$GLOBALS["lang"]['You do not have the PHP MBString extension installed. This extension is required.'] = 'Jūs neturite įdiegta PHP MBString plėtinys. Šis pratęsimas yra būtinas.';

$GLOBALS["lang"]['You do not have the PHP SNMP extension installed. This extension is highly recommended.'] = 'Jūs neturite įdiegta PHP SNMP plėtinys. Šis pratęsimas yra labai rekomenduojama.';

$GLOBALS["lang"]['You may want to copy and paste this URL in an email to your staff.'] = 'Galite nukopijuoti ir įklijuoti šį URL el. paštu savo darbuotojams.';

$GLOBALS["lang"]['You may wish to have Active Directory or OpenLDAP authenticate your users, but not provide authorization. To do this, make sure <i>Use for Authentication</i> is set to Y and <i>Use for Roles</i> is set to N. The credentials will be validated by LDAP, but you will need to have the user already created and assigned Roles in Open-AudIT. This also <i>automatically</i> applies to'] = 'Jūs galite norėti turėti Active Directory arba OpenLDAP autentifikuoti savo vartotojus, bet ne suteikti leidimą. Norėdami tai padaryti, įsitikinkite, kad <i>Autentiškumo nustatymas</i> yra nustatytas Y ir <i>Relių naudojimas</i> N Įgaliojimas bus patvirtintas LDAP, bet jums reikės turėti vartotojo jau sukurtas ir priskirtas Roles Open- AudIT. Tai taip pat <i>automatiškai</i> taikoma';

$GLOBALS["lang"]['You might have noticed these match rules are for items that might not be globally unique. Some examples:'] = 'Jūs tikriausiai pastebėjote, kad šios rungtynės taisyklės yra skirtos prekėms, kurios gali būti ne pasaulyje unikalus. Keletas pavyzdžių:';

$GLOBALS["lang"]['You must delete your existing license before adding a new license.'] = 'Jūs turite ištrinti savo esamą licenciją prieš pridedant naują licenciją.';

$GLOBALS["lang"]['You must have working SSH credentials to execute a benchmark. The following Operating Systems are currently supported: Centos 7, Debian 12, Redhat 7, Redhat 8, Redhat 9, SLES 15, Ubuntu 20.04, Ubuntu 22.04. We plan to expand on these with further releases.'] = 'Jūs turite dirbti SSH įgaliojimus vykdyti lyginamąjį indeksą. Šiuo metu remiamos šios operacinės sistemos: Centos 7, Debian 12, Redhat 7, Redhat 8, Redhat 9, SLES 15, Ubuntu 20.04, Ubuntu 22.04. Planuojame juos išplėsti tolesniais leidiniais.';

$GLOBALS["lang"]['You should copy and paste the entire file into the textbox. In the case below, copy ALL the text.'] = 'Jūs turėtumėte nukopijuoti ir įklijuoti visą failą į textbox. Toliau nurodytu atveju nukopijuokite tekstą.';

$GLOBALS["lang"]['You should not include the edited_by and edited_date fields. These will be automatically set.'] = 'Jūs neturite įtraukti redaguoto _ by ir redaguoto _ date laukelių. Jie bus automatiškai nustatyti.';

$GLOBALS["lang"]['You should only change the second sentence of text, the'] = 'Jūs turėtumėte pakeisti tik antrąjį sakinį teksto,';

$GLOBALS["lang"]['You should substitute the required column (eg, org_id) for ATTRIBUTE_NAME.'] = 'Jūs turėtumėte pakeisti reikiamą stulpelį (pvz., org _ id) ATPLANTE _ NAME.';

$GLOBALS["lang"]['You should use a header line containing the names of the columns you wish to populate, then your data lines below that.'] = 'Jūs turėtumėte naudoti antraštę eilutę, kurioje yra stulpelių, kuriuos norite populate pavadinimai, tada jūsų duomenų eilutės žemiau.';

$GLOBALS["lang"]['You should use only those tables that contain attributes you need. I usually use a left join. For example'] = 'Jūs turėtumėte naudoti tik tas lenteles, kuriose yra požymių jums reikia. Paprastai aš naudoju kairiąją pusę. Pavyzdžiui';

$GLOBALS["lang"]['You will need a'] = 'Jums reikės';

$GLOBALS["lang"]['You will need the ports for WMI on the Windows firewall opened on each target Windows computer. For Windows Core servers, ensure you allow the firewall connections as per'] = 'Jums reikės uostus WMI "Windows" ugniasienės atidaryta ant kiekvieno tikslinio Windows kompiuterio. Langams Pagrindinis serveriai, užtikrinti jums leisti ugniasienės jungtis, kaip per';

$GLOBALS["lang"]['You will see a list of'] = 'Jūs pamatysite sąrašą';

$GLOBALS["lang"]['YouTube Tutorials'] = '"YouTube" turistai';

$GLOBALS["lang"]['Your AWS EC2 API key.'] = 'Jūsų AWS EC2 API raktas.';

$GLOBALS["lang"]['Your Google Compute credentials as JSON.'] = '"Google" skaičiuoja JSON.';

$GLOBALS["lang"]['Your Host is'] = 'Jūsų Mazgas yra';

$GLOBALS["lang"]['Your Licenses'] = 'Jūsų licencijos';

$GLOBALS["lang"]['Your Microsoft Azure Client ID.'] = 'Jūsų Microsoft Azure kliento ID.';

$GLOBALS["lang"]['Your Microsoft Azure Client Secret.'] = 'Jūsų Microsoft Azure Klientas slaptas.';

$GLOBALS["lang"]['Your Microsoft Azure Subscription ID.'] = 'Jūsų Microsoft Azure prenumeratos ID.';

$GLOBALS["lang"]['Your Microsoft Azure Tennant ID.'] = 'Jūsų Microsoft Azure Tennant ID.';

$GLOBALS["lang"]['Your PHP version is'] = 'Jūsų PHP versija yra';

$GLOBALS["lang"]['Your SQL to select attributes that will populate this query.'] = 'Jūsų SQL pasirinkti atributus, kurie bus popoulate šį užklausą.';

$GLOBALS["lang"]['Your SQL to select devices that will populate this group.'] = 'Jūsų SQL pasirinkti įrenginius, kurie bus populate šią grupę.';

$GLOBALS["lang"]['Your SSH key.'] = 'Tavo SSH raktas.';

$GLOBALS["lang"]['Your access credentials, as per that clouds native API.'] = 'Jūsų prieigos duomenys, kaip kad debesys vietinis API.';

$GLOBALS["lang"]['Your data is your data. You can extract it any time you like. We even helpfully provide exports to CSV, JSON and XML. And we have a JSON API. And you can write custom reports and have those output in CSV, XML, and JSON! Again, it is your data - not anyone else. You can be confident that the security of your data is in your hands.'] = 'Jūsų duomenys yra jūsų duomenys. Gali jį išgauti bet kada. Mes netgi naudingai teikiame eksportą į CSV, JSON ir XML. Ir mes turime JSON API. Ir jūs galite rašyti pagal užsakymą ataskaitas ir turėti tuos rezultatus CSV, XML, ir JSON! Vėlgi, tai jūsų duomenys - ne kas kitas. Galite būti tikri, kad jūsų duomenų saugumas yra jūsų rankose.';

$GLOBALS["lang"]['Your database platform is'] = 'Jūsų duomenų bazė platforma yra';

$GLOBALS["lang"]['Your description of the status of this connection (provisioned, retired, etc).'] = 'Jūsų aprašymas šio ryšio statusą (atidėjinys, pensinis ir tt).';

$GLOBALS["lang"]['Your description of this item.'] = 'Jūsų aprašymas šio elemento.';

$GLOBALS["lang"]['Your generic name for this piece of software'] = 'Šio programinės įrangos elemento bendrinis pavadinimas';

$GLOBALS["lang"]['Your generic version for this piece of software'] = 'Jūsų bendrinė versija šiam programinės įrangos elementui';

$GLOBALS["lang"]['Your user should now be able to logon by clicking the <i>Logon with Entra</i> button on the Open-AudIT logon page. As mentioned above, if the logon fails, please check the logfile and verify the users <i>preferred username</i>.<br><br>And that should be all there is too it. Now your users should have one less set of credentials to remember!<br><br>As always, if you have troubles with this feature, please email'] = 'Jūsų vartotojas dabar turėtų galėti prisijungti paspaudę <i>Prisijungti su Entra</i> mygtuką Open- AudIT žurnalo puslapyje. Kaip minėta pirmiau, jei registracijos nepavyko, patikrinkite registracijos failą ir patikrinti vartotojus <i>pageidaujamas naudotojo vardas</i>.<br/><br/>Ir tai turėtų būti viskas taip pat yra. Dabar jūsų vartotojai turėtų turėti vieną mažiau įgaliojimų prisiminti!<br/><br/>Kaip visada, jei turite problemų su šia funkcija, prašome siųsti';

$GLOBALS["lang"]['Your user should now be able to logon by clicking the <i>Logon with OKTA</i> button on the Open-AudIT logon page. As mentioned above, if the logon fails, please check the logfile and verify the users <i>name</i>.<br><br>And that should be all there is too it. Now your users should have one less set of credentials to remember!<br><br>As always, if you have troubles with this feature, please email'] = 'Jūsų vartotojas dabar turėtų galėti prisijungti paspaudę <i>Prisijungti su OKTA</i> mygtuką Open- AudIT žurnalo puslapyje. Kaip minėta pirmiau, jei registracijos nepavyko, patikrinkite registracijos failą ir patikrinti vartotojus <i>pavadinimas</i>.<br/><br/>Ir tai turėtų būti viskas taip pat yra. Dabar jūsų vartotojai turėtų turėti vieną mažiau įgaliojimų prisiminti!<br/><br/>Kaip visada, jei turite problemų su šia funkcija, prašome siųsti';

$GLOBALS["lang"]['Your web server is'] = 'Jūsų interneto serveris yra';

$GLOBALS["lang"]['Zambia'] = 'Zambija';

$GLOBALS["lang"]['Zimbabwe'] = 'Zimbabvė';

$GLOBALS["lang"]['a String'] = 'eilutė';

$GLOBALS["lang"]['active'] = 'aktyvus';

$GLOBALS["lang"]['active directory'] = 'aktyvus aplankas';

$GLOBALS["lang"]['active/active'] = 'Aktyvus / aktyvus';

$GLOBALS["lang"]['active/passive'] = 'Aktyvus / pasyvus';

$GLOBALS["lang"]['advertisement'] = 'reklama';

$GLOBALS["lang"]['alert'] = 'perspėjimas';

$GLOBALS["lang"]['all'] = 'visi';

$GLOBALS["lang"]['allocated'] = 'paskirta';

$GLOBALS["lang"]['amazon'] = 'amazonas';

$GLOBALS["lang"]['an Integer'] = 'sveikasis skaičius';

$GLOBALS["lang"]['and'] = 'ir';

$GLOBALS["lang"]['and / or'] = 'ir (arba)';

$GLOBALS["lang"]['and a support ticket will be created and actioned.'] = 'ir bus sukurtas ir priimtas paramos bilietas.';

$GLOBALS["lang"]['and another'] = 'ir kita';

$GLOBALS["lang"]['and download the Latest Release self-installer. You may need to scroll down the page to find it.'] = 'ir atsisiųsti naujausią Išleidimo savarankiškai montuotojas. Jums gali tekti slinkti žemyn puslapį rasti jį.';

$GLOBALS["lang"]['and go to Applications -> Enterprise Applications (far left menu), then click <i>New application</i>.'] = 'ir eiti į programas - > Įmonių programos (toli kairėje meniu), tada spustelėkite <i>Nauja paraiška</i>.';

$GLOBALS["lang"]['and its current time is'] = 'ir jo dabartinis laikas yra';

$GLOBALS["lang"]['and looks for a warranty expiration date prior to today.'] = 'ir ieško garantijos galiojimo terminas iki šiandien.';

$GLOBALS["lang"]['and review what is possible.'] = 'ir peržiūrėti, kas yra įmanoma.';

$GLOBALS["lang"]['and the Sign-out redirect URI being'] = 'ir "Sign- out" nukreipimo URI yra';

$GLOBALS["lang"]['and the final lines will likely be of most interest. These lines should give you the exact point at which the login failed.'] = 'ir galutinės linijos greičiausiai bus labiausiai domina. Šios eilutės turėtų nurodyti tikslų tašką, kuriuo nepavyko prisijungti.';

$GLOBALS["lang"]['antivirus'] = 'antivirusas';

$GLOBALS["lang"]['application'] = 'programa';

$GLOBALS["lang"]['approved'] = 'patvirtintas';

$GLOBALS["lang"]['are required.'] = 'būtina.';

$GLOBALS["lang"]['are used.'] = 'yra naudojami.';

$GLOBALS["lang"]['as a device responding on this port.<br>This has caused some customers issues where firewalls respond on behalf of a non-existing device, and hence cause false positive device detection. We now have this attribute available to set per scan.'] = 'kaip prietaisas reaguoja į šį prievadą.<br/>Tai sukėlė kai kurių klientų problemas, kai ugniasienės atsakyti ne egzistuojančio įrenginio vardu, ir taip sukelti klaidingą teigiamą prietaiso aptikimo. Dabar mes turime šį atributą galima nustatyti per skenavimo.';

$GLOBALS["lang"]['as the reference point and filters out all virtual machines via a check of the system.serial field for VM.'] = 'kaip atskaitos taškas ir filtruoja visas virtualias mašinas per sistemos patikrinimą. VM serijos laukas.';

$GLOBALS["lang"]['assuming working and client populated DNS'] = 'darant prielaidą, kad darbo ir kliento apgyvendinta DNS';

$GLOBALS["lang"]['attribute'] = 'atributas';

$GLOBALS["lang"]['auto'] = 'auto';

$GLOBALS["lang"]['backup'] = 'atsarginė kopija';

$GLOBALS["lang"]['banned'] = 'uždrausta';

$GLOBALS["lang"]['blog'] = 'Dienoraštis';

$GLOBALS["lang"]['blue'] = 'mėlyna';

$GLOBALS["lang"]['bottom'] = 'dugnas';

$GLOBALS["lang"]['building'] = 'pastatas';

$GLOBALS["lang"]['can be used for user authentication (is the users name and password correct) as well as user authorization (what roles and orgs does a user have).<br><br>If a user is not in the configured LDAP but is in Open-AudIT (eg: the <i>admin</i> user), Open-AudIT will fallback to using itself for both authentication and authorization.<br><br>Open-AudIT uses specific LDAP groups for roles and orgs. A user must be a direct member of these group(s) in order for Open-AudIT to determine that users access.<br><br>When configured correctly, LDAP use can completely remove the need to create users in Open-AudIT. Simply configure Open-AudIT to use LDAP for both authentication and authorization. If the user does not exist in Open-AudIT but does exist in LDAP and their credentials are correct and they are a member of the required groups Open-AudIT will create the user account automatically.'] = 'gali būti naudojamas vartotojo autentifikavimo (yra vartotojo vardas ir slaptažodis teisingas), taip pat vartotojo leidimą (ką vaidmenys ir orgai daro vartotojas).<br/><br/>Jei vartotojas nėra konfigūruotas LDAP, bet yra Open- AudIT (pvz.: <i>admin</i> vartotojas), Open- AudIT bus grįžti naudoti save tiek autentiškumo patvirtinimo ir leidimo.<br/><br/>Open- Aud IT naudoja specialias LDAP grupes vaidmenims ir orgams. Vartotojas turi būti tiesioginis narys šios grupės (-ų), kad Open- AudIT nustatyti, kad vartotojai prieigą.<br/><br/>Sukonfigūruotas teisingai, LDAP naudojimas gali visiškai pašalinti poreikį sukurti vartotojus Open- AudIT. Tiesiog konfigūruoti Open- AudIT naudoti LDAP tiek autentiškumo patvirtinimo ir leidimo. Jei vartotojas neegzistuoja Open- AudIT, bet egzistuoja LDAP ir jų duomenys yra teisingi ir jie yra reikalingų grupių Open- AudIT narys automatiškai sukurs vartotojo sąskaitą.';

$GLOBALS["lang"]['can now retrieve details about a file or directory of files and monitor these files for changes as per other attributes in the Open-AudIT database. This feature works out of the box for Linux Open-AudIT servers, but needs a change to the service account name under a Windows Open-AudIT server. Supported clients are Windows and Linux.'] = 'dabar gali gauti informaciją apie failą ar katalogą failų ir stebėti šiuos failus pakeitimus, kaip kitų požymių Open- AudIT duomenų bazėje. Ši funkcija veikia iš Linux Open- AudIT serverių dėžutės, bet reikia pakeisti paslaugų sąskaitos pavadinimą pagal Windows Open- AudIT serverį. Palaikomi klientai yra Windows ir Linux.';

$GLOBALS["lang"]['changed'] = 'pakeista';

$GLOBALS["lang"]['chosen. From there if a port for WMI, SSH or SNMP is detected responding the device is further queried using '] = 'pasirinkta. Iš ten, jei WMI, SSH arba SNMP prievadas aptinkamas atsakant į užklausą, įrenginys toliau klausinėjamas naudojant ';

$GLOBALS["lang"]['cloud'] = 'debesys';

$GLOBALS["lang"]['code'] = 'kodas';

$GLOBALS["lang"]['collections and details pages is an icon to execute.'] = 'kolekcijų ir detalių puslapiai yra piktograma, kurią reikia atlikti.';

$GLOBALS["lang"]['collector'] = 'kolektorius';

$GLOBALS["lang"]['collectors'] = 'kolektoriai';

$GLOBALS["lang"]['column'] = 'stulpelis';

$GLOBALS["lang"]['column will contain either <i>y</i> or <i>n</i>. This indicates if this row is currently present on the device. For example software may be installed (which would result in <i>software.current = y</i>), but on a subsequent audit it may not be detected. Open-AudIT will then change this rows current attribute to <i>n</i>.'] = 'stulpelyje bus: <i>y</i> arba <i>n</i>. Tai rodo, ar ši eilutė šiuo metu yra įrenginyje. Pavyzdžiui, programinė įranga gali būti įdiegta (kuri turėtų sukelti <i>software.current = y</i>), tačiau vėlesnio audito metu jo nustatyti negalima. Open- AudIT tada pakeis šią eilutę dabartinis atributas <i>n</i>.';

$GLOBALS["lang"]['column. The'] = 'stulpelis. 4. 4 skyrių).';

$GLOBALS["lang"]['compute'] = 'apskaičiuotas';

$GLOBALS["lang"]['config'] = 'config';

$GLOBALS["lang"]['console'] = 'konsolė';

$GLOBALS["lang"]['contains'] = 'susideda iš';

$GLOBALS["lang"]['create'] = 'sukurti';

$GLOBALS["lang"]['created'] = 'sukurta';

$GLOBALS["lang"]['credentials'] = 'įgaliojimai';

$GLOBALS["lang"]['critical'] = 'kritinė';

$GLOBALS["lang"]['cve'] = 'Cve';

$GLOBALS["lang"]['database'] = 'duomenų bazė';

$GLOBALS["lang"]['debug'] = 'derinimas';

$GLOBALS["lang"]['delegated'] = 'deleguota';

$GLOBALS["lang"]['delete'] = 'Pašalinti';

$GLOBALS["lang"]['deleted'] = 'išbraukta';

$GLOBALS["lang"]['denied'] = 'Nepatvirtinta';

$GLOBALS["lang"]['details'] = 'išsami informacija';

$GLOBALS["lang"]['devices'] = 'prietaisai';

$GLOBALS["lang"]['digitalocean'] = 'digitalocenas';

$GLOBALS["lang"]['discoveries'] = 'atradimai';

$GLOBALS["lang"]['documentation for further details.'] = 'dokumentai, kuriuose pateikiama daugiau informacijos.';

$GLOBALS["lang"]['does <strong>not</strong> provide vulnerability reports for the following'] = 'turi <strong>nėra</strong> teikti toliau nurodytų sričių pažeidžiamumo ataskaitas:';

$GLOBALS["lang"]['does not equal'] = 'nėra lygus';

$GLOBALS["lang"]['emergency'] = 'avariniai atvejai';

$GLOBALS["lang"]['entra'] = 'entra';

$GLOBALS["lang"]['equals'] = 'Lygiai';

$GLOBALS["lang"]['error'] = 'klaida';

$GLOBALS["lang"]['established'] = 'nustatytas';

$GLOBALS["lang"]['excluded'] = 'netaikoma';

$GLOBALS["lang"]['expired'] = 'pasibaigęs';

$GLOBALS["lang"]['extreme - Without which, the organisation would fail.

very high - Functions that are essential for the organisations survival and must be restored immediately.

high - Important functions that should be restored quickly but may have a slightly longer recovery time.

medium - Functions that are necessary but can tolerate longer downtime.

low - Non-essential functions that can be delayed without significant impact.

unassigned - The default until set.'] = 'ekstremalių - Be kurio, organizacija žlugtų.

labai aukštos - Funkcijos, kurios yra būtinos organizacijų išlikimui ir turi būti nedelsiant atkurta.

aukštos - Svarbios funkcijos, kurios turėtų būti greitai atkurtos, bet gali turėti šiek tiek ilgesnį atkūrimo laiką.

vidutinio - funkcijos, kurios yra būtinos, bet gali toleruoti ilgiau prastovų.

mažas - neesminių funkcijų, kurios gali būti atidėtos be didelio poveikio.

unased - Numatytasis iki nustatyti.';

$GLOBALS["lang"]['fail'] = 'nepakankamumas';

$GLOBALS["lang"]['false'] = 'false';

$GLOBALS["lang"]['file'] = 'failas';

$GLOBALS["lang"]['firewall'] = 'ugniasienė';

$GLOBALS["lang"]['first'] = 'pirmas';

$GLOBALS["lang"]['fixed'] = 'fiksuotas';

$GLOBALS["lang"]['floor'] = 'grindys';

$GLOBALS["lang"]['for'] = 'yra';

$GLOBALS["lang"]['for authentication'] = 'tapatumo nustatymui';

$GLOBALS["lang"]['for this information.'] = 'šiai informacijai.';

$GLOBALS["lang"]['from Audit Script Result'] = 'iš audito scenarijaus rezultatas';

$GLOBALS["lang"]['from NMIS'] = 'NMIS';

$GLOBALS["lang"]['from address LocalHost (Using LRPC) running in the application container'] = 'iš adreso LocalHost (naudojant LRPC) veikia programos konteineryje';

$GLOBALS["lang"]['front'] = 'priekyje';

$GLOBALS["lang"]['front-left'] = 'iš anksto kairėje';

$GLOBALS["lang"]['front-right'] = 'iš anksto dešinėje';

$GLOBALS["lang"]['github'] = 'gitubas';

$GLOBALS["lang"]['google'] = 'Google';

$GLOBALS["lang"]['greater or equals'] = 'Didesnė arba lygi';

$GLOBALS["lang"]['greater than'] = 'didesnis nei';

$GLOBALS["lang"]['group'] = 'grupė';

$GLOBALS["lang"]['has not been set'] = 'nebuvo nustatyta';

$GLOBALS["lang"]['have a working reverse DNS resolvable IP to the target Windows PC.'] = 'turi darbo atvirkštinis DNS išsprendžiamas IP į tikslinės Windows PC.';

$GLOBALS["lang"]['have the ability to be executed. On the'] = 'turėti galimybę būti įvykdytas. Dėl';

$GLOBALS["lang"]['head'] = 'galva';

$GLOBALS["lang"]['here'] = 'čia';

$GLOBALS["lang"]['high availability'] = 'didelis prieinamumas';

$GLOBALS["lang"]['howto'] = 'howto';

$GLOBALS["lang"]['if you clone a Linux virtual machine, unless you manually regenerate this (and in my experience, people do not) it will remain the same.'] = 'jei klonuojate Linux virtualią mašiną, nebent rankiniu būdu ją regeneruojate (ir mano patirtis rodo, kad žmonės to nedaro), ji liks ta pati.';

$GLOBALS["lang"]['ignored'] = 'ignoruojamas';

$GLOBALS["lang"]['import the example device data'] = 'Importuoti pavyzdinius prietaiso duomenis';

$GLOBALS["lang"]['in'] = 'yra';

$GLOBALS["lang"]['in Enterprise.'] = '"Enterprise".';

$GLOBALS["lang"]['in Inputs can have the following values.'] = 'Į Įvedimai gali turėti šias vertes.';

$GLOBALS["lang"]['in Outputs can have the following values.'] = 'į Išvestis gali turėti šias vertes.';

$GLOBALS["lang"]['inactive'] = 'neaktyvus';

$GLOBALS["lang"]['incomplete'] = 'nebaigta';

$GLOBALS["lang"]['info'] = 'informacija';

$GLOBALS["lang"]['installer will test for the presence of Nmap in its standard install locations of'] = 'montuotojas bus išbandyti dėl Nmap buvimą savo standartinę įdiegti vietose';

$GLOBALS["lang"]['int, text, bool (y/n), etc'] = 'int, text, bool (y / n) ir t. t.';

$GLOBALS["lang"]['is U.S. standard maintained by National Institute of Standards and Technology'] = 'yra JAV standartas palaiko National Institute of Standards and Technology';

$GLOBALS["lang"]['is an international standard for managing information security. It provides a framework for establishing, implementing, maintaining, and continually improving an Information Security Management System (ISMS).'] = 'yra tarptautinis informacijos saugumo valdymo standartas. Jame numatyta informacijos saugumo valdymo sistemos (ISMS) sukūrimo, įgyvendinimo, priežiūros ir nuolatinio tobulinimo sistema.';

$GLOBALS["lang"]['is based upon'] = 'yra pagrįstas';

$GLOBALS["lang"]['is licensed to'] = 'turi licenciją';

$GLOBALS["lang"]['is next on the list and Open-AudIT can use password and key authentication. Open-AudIT can also use a sudo enabled user as opposed to the root use directly (although it can also use root). For best results, the root user or a sudo enabled user should be used (see Auditing Linux without root and Target Client Configuration on the wiki). Windows devices can also run ssh, however if Open-AudIT detects this it will stop the SSH queries and instead use WMI (assuming working WMI credentials).'] = 'yra šalia sąraše ir Open- AudIT gali naudoti slaptažodį ir rakto autentifikavimo. Open- AudIT taip pat gali naudoti sudo įjungtas vartotojas, o ne šaknų naudoti tiesiogiai (nors ji taip pat gali naudoti šaknis). Siekiant geriausių rezultatų, turėtų būti naudojamas šaknies vartotojas arba sudo įjungtas vartotojas (žr. Auditing Linux be šaknies ir tikslinio kliento konfigūracija wiki). Windows prietaisai taip pat gali paleisti ssh, tačiau jei Open- AudIT aptinka tai ji sustabdys SSH užklausas ir vietoj naudoti WMI (darant prielaidą, kad darbo WMI įgaliojimai).';

$GLOBALS["lang"]['is the link to the'] = 'yra nuoroda į';

$GLOBALS["lang"]['item to view the specific tables and their columns. This will enable you to find exactly what you need, rather than trawling through the MySQL console of the schema creation script.'] = 'punktas peržiūrėti konkrečias lenteles ir jų stulpelius. Tai leis jums rasti būtent tai, ko jums reikia, o ne tralavimo per MySQL konsolės schemos kūrimo scenarijų.';

$GLOBALS["lang"]['key required to retrieve lat/long and display map. See'] = 'raktas reikalingas gauti lat / ilgas ir rodyti žemėlapį. Žr.';

$GLOBALS["lang"]['left'] = 'kairėje';

$GLOBALS["lang"]['less or equals'] = 'mažesnis arba lygus';

$GLOBALS["lang"]['less than'] = 'mažiau nei';

$GLOBALS["lang"]['license'] = 'licencija';

$GLOBALS["lang"]['licenses'] = 'licencijos';

$GLOBALS["lang"]['like'] = 'Kaip';

$GLOBALS["lang"]['line'] = 'eilutė';

$GLOBALS["lang"]['list'] = 'sąrašas';

$GLOBALS["lang"]['list View, using the Create button'] = 'sąrašo rodymas naudojant mygtuką "Sukurti"';

$GLOBALS["lang"]['load balancing'] = 'apkrovos balansavimas';

$GLOBALS["lang"]['location'] = 'vieta';

$GLOBALS["lang"]['locations'] = 'vietos';

$GLOBALS["lang"]['managed'] = 'valdomas';

$GLOBALS["lang"]['methods'] = 'metodai';

$GLOBALS["lang"]['microsoft'] = 'mikromolis';

$GLOBALS["lang"]['mount point'] = 'montavimo taškas';

$GLOBALS["lang"]['must'] = 'turi';

$GLOBALS["lang"]['network'] = 'tinklas';

$GLOBALS["lang"]['news'] = 'Naujienos';

$GLOBALS["lang"]['no'] = 'ne';

$GLOBALS["lang"]['node'] = 'mazgas';

$GLOBALS["lang"]['none'] = 'nėra';

$GLOBALS["lang"]['normal'] = 'normalus';

$GLOBALS["lang"]['not applicable'] = 'netaikoma';

$GLOBALS["lang"]['not in'] = 'nėra';

$GLOBALS["lang"]['not like'] = 'nepanašus';

$GLOBALS["lang"]['notice'] = 'pranešimas';

$GLOBALS["lang"]['notification'] = 'pranešimas';

$GLOBALS["lang"]['okta'] = 'okta';

$GLOBALS["lang"]['on devices where'] = 'ant įtaisų, kai';

$GLOBALS["lang"]['openldap'] = 'openldapas';

$GLOBALS["lang"]['optimized'] = 'optimizuotas';

$GLOBALS["lang"]['optionally '] = 'pasirinktinai ';

$GLOBALS["lang"]['or'] = 'arba';

$GLOBALS["lang"]['or the GitHub page at'] = 'arba GitHub puslapis at';

$GLOBALS["lang"]['other'] = 'Žalieji';

$GLOBALS["lang"]['package'] = 'pakuotė';

$GLOBALS["lang"]['page. Export your LDAP server from menu -> Admin -> LDAP Servers -> Details to JSON and save and include this data as well.'] = 'puslapis. Eksportuokite savo LDAP serverį iš meniu - > Admin - > LDAP serveriai - > Informacija JSON ir išsaugoti ir įtraukti šiuos duomenis taip pat.';

$GLOBALS["lang"]['partition'] = 'skaidinys';

$GLOBALS["lang"]['pass'] = 'praeiti';

$GLOBALS["lang"]['pending'] = 'laukiama';

$GLOBALS["lang"]['performance'] = 'veikimas';

$GLOBALS["lang"]['performed'] = 'atlikta';

$GLOBALS["lang"]['permission'] = 'leidimas';

$GLOBALS["lang"]['permissions required per endpoint'] = 'Leidimai, reikalingi kiekvienai pasekmei';

$GLOBALS["lang"]['pie'] = 'pyragas';

$GLOBALS["lang"]['planning'] = 'planavimas';

$GLOBALS["lang"]['predictable'] = 'numatomas';

$GLOBALS["lang"]['query'] = 'užklausa';

$GLOBALS["lang"]['rear'] = 'gale';

$GLOBALS["lang"]['rear-left'] = 'gale kairėje';

$GLOBALS["lang"]['rear-right'] = 'gale dešinėje';

$GLOBALS["lang"]['regex'] = 'regex';

$GLOBALS["lang"]['release'] = 'išlaisvinti';

$GLOBALS["lang"]['removed from display, but has been set'] = 'pašalinta iš ekrano, bet buvo nustatyta';

$GLOBALS["lang"]['reserved'] = 'rezervuota';

$GLOBALS["lang"]['right'] = 'dešinė';

$GLOBALS["lang"]['rights) you can click on the field value to edit it.'] = 'teises) galite paspausti ant lauko vertę ją redaguoti.';

$GLOBALS["lang"]['role'] = 'vaidmuo';

$GLOBALS["lang"]['room'] = 'kambarys';

$GLOBALS["lang"]['row'] = 'eilutė';

$GLOBALS["lang"]['service failed to start due to the following error'] = '@ info: whatsthis';

$GLOBALS["lang"]['so Open-AudIT knows to restrict your query to the appropriate Orgs.'] = 'Taigi Open- AudIT žino apriboti savo užklausą į atitinkamus Orgs.';

$GLOBALS["lang"]['stand-alone'] = 'vienas';

$GLOBALS["lang"]['standard'] = 'standartas';

$GLOBALS["lang"]['starts with'] = 'prasideda';

$GLOBALS["lang"]['storage'] = 'sandėliavimas';

$GLOBALS["lang"]['subnet'] = 'potinklis';

$GLOBALS["lang"]['table'] = 'lentelė';

$GLOBALS["lang"]['table and insert the original rows.'] = 'pateikti ir įterpti originalias eilutes.';

$GLOBALS["lang"]['team'] = 'komanda';

$GLOBALS["lang"]['text. The first is the array index and should be left as-is. The index is used in the templates to lookup the translated text.'] = 'tekstas. Pirmasis yra masyvo indeksas ir turėtų būti palikti as- yra. Rodyklė naudojama šablonuose verstam tekstui peržiūrėti.';

$GLOBALS["lang"]['then clicking on the details button for the table.'] = 'tada spustelėję ant stalo detaliųjų mygtukų.';

$GLOBALS["lang"]['then clicking on the details button for the table. Device details are stored in the'] = 'tada spustelėję ant stalo detaliųjų mygtukų. Įrenginio duomenys saugomi';

$GLOBALS["lang"]['timestamp'] = 'laiko žyma';

$GLOBALS["lang"]['to'] = 'iki';

$GLOBALS["lang"]['to create an item of this type'] = 'sukurti šio tipo elementą';

$GLOBALS["lang"]['to the URL, you will get the full database entry, including all component tables, of a given device.'] = 'į URL, gausite visą duomenų bazės įrašą, įskaitant visas sudedamąsias lenteles, tam tikro prietaiso.';

$GLOBALS["lang"]['to the user'] = 'naudotojui';

$GLOBALS["lang"]['top'] = 'viršus';

$GLOBALS["lang"]['top secret - Military / Government classification. Disclosure would cause exceptionally grave danger to national security.

secret - Military / Government classification. Disclosure would cause serious damage to national security.

confidential - Military / Government and Private Sector classification. Data that is confidential includes trade secrets, intellectual data, application programming code, and other data that could seriously affect the organization if unauthorized disclosure occurred. Data at this level would be available only to personnel in the organization whose work needs, or is directly related to, the accessed data. Access to confidential data usually requires authorization for each access.

private - Private Sector classification. Data that is private includes any information related to personnel, including human resources records, medical records, and salary information, that is used only within the organization.

sensitive - Military / Government and Private Sector classification. Data that is sensitive includes organizational financial information and requires extra measures to ensure its CIA and accuracy. Disclosure might harm national security.

public - Private Sector classification. Public data is data that is generally shared with the public and would not cause a negative impact on the organization. Examples of public data include how many people work in the organization and what products an organization manufactures or sells.

unclassified - Military / Government classification. Any information that can generally be distributed to the public without any threat to national interest.

unassigned - The default until set.'] = 'aukščiausia paslaptis - karinės / vyriausybės klasifikacija. Atskleidus informaciją kiltų ypač didelis pavojus nacionaliniam saugumui.

slapta - karinės / vyriausybės klasifikacija. Atskleidus informaciją būtų padaryta didelė žala nacionaliniam saugumui.

konfidencialu - Karinis / Vyriausybės ir privataus sektoriaus klasifikacija. Konfidencialūs duomenys apima komercines paslaptis, intelektinius duomenis, programos programavimo kodą ir kitus duomenis, kurie gali rimtai paveikti organizaciją, jei būtų atskleisti neleistini duomenys. Šio lygio duomenimis galėtų naudotis tik organizacijos darbuotojai, kurių darbui reikalingi arba tiesiogiai susiję su prieinamais duomenimis. Prieiga prie konfidencialių duomenų paprastai reikalauja leidimo kiekvienai prieigai.

Privataus sektoriaus klasifikacija. Privatūs duomenys apima visą informaciją, susijusią su personalu, įskaitant žmogiškųjų išteklių įrašus, medicininius įrašus ir informaciją apie atlyginimus, kuri naudojama tik organizacijoje.

jautrus - Karinis / Vyriausybės ir privataus sektoriaus klasifikacija. Duomenys, kurie yra jautrus apima organizacinė finansinė informacija ir reikalauja papildomų priemonių užtikrinti savo CŽV ir tikslumą. Atskleidimas gali pakenkti nacionaliniam saugumui.

viešojo - privataus sektoriaus klasifikacija. Vieši duomenys yra duomenys, kuriais paprastai dalijamasi su visuomene ir kurie neturėtų neigiamo poveikio organizacijai. Viešųjų duomenų pavyzdžiai apima, kiek žmonių dirba organizacijoje ir kokius produktus organizacija gamina ar parduoda.

neklasifikuojama - Karinė / Vyriausybės klasifikacija. Bet kokia informacija, kuri paprastai gali būti platinama visuomenei nekeliant grėsmės nacionaliniams interesams.

unased - Numatytasis iki nustatyti.';

$GLOBALS["lang"]['traffic'] = 'eismas';

$GLOBALS["lang"]['true'] = 'true';

$GLOBALS["lang"]['true or false (in JSON context)'] = 'Tikra arba klaidinga (JSON kontekste)';

$GLOBALS["lang"]['unallocated'] = 'nepaskirstytas';

$GLOBALS["lang"]['unauthorised'] = 'neteisėtas';

$GLOBALS["lang"]['unchanged'] = 'nepakeista';

$GLOBALS["lang"]['unknown'] = 'nežinoma';

$GLOBALS["lang"]['unmanaged'] = 'nevaldomas';

$GLOBALS["lang"]['unused'] = 'nepanaudotas';

$GLOBALS["lang"]['update'] = 'atnaujinimas';

$GLOBALS["lang"]['uses the data collected from your devices and matches the software installed with the value provided, it counts the matches calculates how many licenses have been used and how many are left. It allows the use of wildcards on the <i>match string</i> field which matches the software.name attribute.'] = 'naudoja duomenis, surinktus iš jūsų prietaisų ir atitinka įdiegtą programinę įrangą su nurodyta verte, ji skaičiuoja rungtynes apskaičiuoja, kiek licencijų buvo panaudota ir kiek liko. Jis leidžia laukinių kortelių naudoti <i>rungtynių eilutė</i> laukas, kuris atitinka programinę įrangą. pavadinimas atributas.';

$GLOBALS["lang"]['using the main menu items.'] = 'naudojant pagrindinius meniu elementus.';

$GLOBALS["lang"]['valid'] = 'galioja';

$GLOBALS["lang"]['version'] = 'versija';

$GLOBALS["lang"]['virtualisation'] = 'virtualizacija';

$GLOBALS["lang"]['warning'] = 'įspėjimas';

$GLOBALS["lang"]['web'] = 'web';

$GLOBALS["lang"]['with Local and Remote access permissions set.'] = 'su vietinės ir nuotolinės prieigos leidimais.';

$GLOBALS["lang"]['with devices::update permission.'] = 'su įtaisais: atnaujinti leidimą.';

$GLOBALS["lang"]['with the Sign-On Redirect URI being'] = 'su signalo nukreipimo URI';

$GLOBALS["lang"]['with the intention of providing simple and intuitive access in a manner familiar to developers. In addition to this API, the web interface will use the same request format and supply some additional actions (eg: HTML forms for creating items).'] = 'su ketinimu suteikti paprastą ir intuityvią prieigą taip, kaip susipažinę kūrėjai. Be šio API, Web sąsaja bus naudoti tą patį užklausos formatą ir pateikti kai kuriuos papildomus veiksmus (pvz.: HTML formos kuriant elementus).';

$GLOBALS["lang"]['yes'] = 'taip';

$GLOBALS["lang"]['you do not require a HighCharts license to use Firstwave products. License'] = 'jums nereikia HighCharts licencijos naudoti Firstwave produktus. Licencija';

$GLOBALS["lang"]['you will assign any found devices to that Org or Location.'] = 'jums priskirti visus rastus įrenginius, kad Org ar Vieta.';

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

