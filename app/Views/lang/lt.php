<?php
$GLOBALS["lang"][' Default, currently '] = ' Numatyta, šiuo metu ';

$GLOBALS["lang"][' is now supported with a language file. To change your user to use this language, click '] = ' dabar palaiko kalbos failą. Norėdami pakeisti vartotoją šia kalba, spustelėkite ';

$GLOBALS["lang"][' seconds'] = ' sekundės';

$GLOBALS["lang"]['10 Minutes'] = '10 minučių';

$GLOBALS["lang"]['15 Minutes'] = '15 minučių';

$GLOBALS["lang"]['30 Minutes'] = '30 minučių';

$GLOBALS["lang"]['5 Minutes'] = '5 Protokolai';

$GLOBALS["lang"]['<br> <strong>NOTE</strong> - You are accessing this URL from the local Open-AudIT server. The downloaded script will not be able to submit when run on any other machine. If you need to audit other machines, please download the script from any remote machine, not using a browser on the Open-AudIT server itself.'] = '<br/> <strong>PASTABA</strong> - Jūs pasiekiate šį URL iš vietinio Open- AudIT serverio. Atsisiųstas scenarijus negalės pateikti, kai veiks bet kurioje kitoje mašinoje. Jei jums reikia atlikti kitų mašinų auditą, atsisiųskite scenarijų iš bet kurios nuotolinės mašinos, nenaudodami naršyklės pačiame Open- AudIT serveryje.';

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

$GLOBALS["lang"]['A URL to a file to download.'] = 'Name';

$GLOBALS["lang"]['A calculated field that displays the number of times this piece of software was found on the computers in the selected Org (and its descendants if configured).'] = 'Apskaičiuotas laukas, rodantis, kiek kartų ši programinės įrangos dalis buvo rasta pasirinktame orge esančiuose kompiuteriuose (ir jo palikuonims, jei sukonfigūruoti).';

$GLOBALS["lang"]['A collector is either in Collector or Stand-Alone mode.'] = 'Kolektorius yra arba kolektoriaus arba Stand- Alone režimu.';

$GLOBALS["lang"]['A comma separated list of applicable CVEs.'] = 'Atskiras kablelių sąrašas, kuriame išvardyti taikytini KTĮ.';

$GLOBALS["lang"]['A comma separated list of values, one of which can be selected.'] = 'kableliais atskirtų reikšmių sąrašas, iš kurių vieną galima pasirinkti.';

$GLOBALS["lang"]['A command to run. When the agent is Windows based, this command is run from within the powershell agent.'] = 'Įsakymas paleisti. Kai agentas yra Windows pagrindu, ši komanda yra paleisti iš per galios agentas.';

$GLOBALS["lang"]['A list of custom TCP ports to scan (22 is SSH, 135 is WMI, 62078 is iPhone sync).'] = 'Pasirinktinių TCP prievadų, kuriuos galima nuskaityti, sąrašas (22 yra SSH, 135 yra WMI, 62078 yra iPhone sinchronizavimas).';

$GLOBALS["lang"]['A list of custom UDP ports to scan (161 is SNMP).'] = 'Pasirinktinių UDP prievadų, kuriuos reikia nuskaityti, sąrašas (161 yra SNMP).';

$GLOBALS["lang"]['A lower number means it will be applied before other rules.'] = 'Mažesnis skaičius reiškia, kad jis bus taikomas iki kitų taisyklių.';

$GLOBALS["lang"]['A lower number means it will be applied before other rules. The default weight is 100.'] = 'Mažesnis skaičius reiškia, kad jis bus taikomas iki kitų taisyklių. Numatytasis svoris yra 100.';

$GLOBALS["lang"]['A password (stored as a hash) that enables logon when using application authentication.'] = 'Name';

$GLOBALS["lang"]['A routing domain or address space where the IP addresses and MAC addresses are unique.'] = 'Maršruto domenas arba adresas, kuriame IP ir MAC adresai yra unikalūs.';

$GLOBALS["lang"]['A security zone is a administrative domain or policy domain within the Network Domain.'] = 'Saugumo zona yra tinklo srities administracinė arba politikos sritis.';

$GLOBALS["lang"]['A short description of the log entry.'] = 'Trumpas žurnalo įrašo aprašymas.';

$GLOBALS["lang"]['A string that matches the <code>software.name</code> attribute. You can use the standard SQL wildcard of percent (%) to match one or more characters.'] = 'Eilutė, kuri atitinka <code>software.name</code> atributas. Galite naudoti standartinę SQL laukinės kortelės procentų (%), kad atitiktų vieną ar daugiau simbolių.';

$GLOBALS["lang"]['A vulnerability affecting availability may allow attackers to disrupt services, crash systems, or cause denial-of-service (DoS) (None, Low, High).'] = 'Dėl pažeidžiamumo, turinčio įtakos prieinamumui, užpuolikai gali sutrikdyti paslaugas, avarijų sistemas arba sukelti netinkamą aptarnavimą (DoS) (nėra, žemas, aukštas).';

$GLOBALS["lang"]['A vulnerability affecting confidentiality may allow attackers to read sensitive data, such as personal information, credentials, or proprietary business data (None, Low, High).'] = 'Konfidencialumą pažeidžiantis pažeidžiamumas gali leisti užpuolikams skaityti slaptus duomenis, pavyzdžiui, asmeninę informaciją, įgaliojimus arba nuosavybinius verslo duomenis (nėra, žemas, aukštas).';

$GLOBALS["lang"]['A vulnerability affecting integrity may allow attackers to modify data, inject malicious code, or alter system configurations (None, Low, High).'] = 'Pažeidžiamumas, turintis įtakos vientisumui, gali leisti užpuolikams keisti duomenis, įšvirkšti kenkėjišką kodą arba pakeisti sistemos konfigūraciją (nėra, žemas, aukštas).';

$GLOBALS["lang"]['AD Group'] = 'AD grupė';

$GLOBALS["lang"]['ADSL, HFC, ISDN, etc.'] = 'ADSL, HFC, ISDN ir t. t.';

$GLOBALS["lang"]['AIX'] = 'AIX';

$GLOBALS["lang"]['ALL IPs'] = 'VISI IP';

$GLOBALS["lang"]['API / Web Access'] = 'API / Web prieiga';

$GLOBALS["lang"]['API Documentation'] = 'API dokumentacija';

$GLOBALS["lang"]['API Key required.'] = 'Reikalingas API raktas.';

$GLOBALS["lang"]['API Result'] = 'API rezultatas';

$GLOBALS["lang"]['About'] = 'Apie';

$GLOBALS["lang"]['Accept'] = 'Priimti';

$GLOBALS["lang"]['access_point'] = 'Prieigos taškas';

$GLOBALS["lang"]['Access Point'] = 'Prieigos taškas';

$GLOBALS["lang"]['access_token'] = 'Prieigos taškai';

$GLOBALS["lang"]['Access Token'] = 'Prieigos taškai';

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

$GLOBALS["lang"]['Add image'] = 'Pridėti paveikslėlį';

$GLOBALS["lang"]['additional_items'] = 'Papildomi punktai';

$GLOBALS["lang"]['Additional Items'] = 'Papildomi punktai';

$GLOBALS["lang"]['address'] = 'Adresas';

$GLOBALS["lang"]['Address'] = 'Adresas';

$GLOBALS["lang"]['Admin'] = 'Adminas';

$GLOBALS["lang"]['admin_status'] = 'Admin būsena';

$GLOBALS["lang"]['Admin Status'] = 'Admin būsena';

$GLOBALS["lang"]['advanced'] = 'Sudėtingesnė';

$GLOBALS["lang"]['Advanced'] = 'Sudėtingesnė';

$GLOBALS["lang"]['Afghanistan'] = 'Afganistanas';

$GLOBALS["lang"]['agents'] = 'Asmenys';

$GLOBALS["lang"]['Agents'] = 'Asmenys';

$GLOBALS["lang"]['Aggressive'] = 'Agresyvus';

$GLOBALS["lang"]['Aland Islands'] = 'Alandų salos';

$GLOBALS["lang"]['Albania'] = 'Albanija';

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

$GLOBALS["lang"]['Amazon AWS Fields'] = 'Amazon AWS Sritys';

$GLOBALS["lang"]['American Samoa'] = 'Amerikos Samoa';

$GLOBALS["lang"]['An array of <code>benchmarks.id</code>.'] = 'Daug <code>benchmarks.id</code>.';

$GLOBALS["lang"]['An array of <code>devices.id</code>.'] = 'Daug <code>devices.id</code>.';

$GLOBALS["lang"]['An array of object representing external links to more information.'] = 'Objekto masyvas atstovauja išorines nuorodas į daugiau informacijos.';

$GLOBALS["lang"]['An encrypted JSON document containing the required attributes depending on the <code>credentials.type</code>.'] = 'Užšifruotas JSON dokumentas, kuriame, priklausomai nuo <code>credentials.type</code>.';

$GLOBALS["lang"]['An indication of the level of service required by this site.'] = 'Nurodomas šioje svetainėje reikalaujamas paslaugos lygis.';

$GLOBALS["lang"]['An internal field that indicates if the discovery has completed.'] = 'Vidinis laukas, rodantis, ar atradimas baigtas.';

$GLOBALS["lang"]['An optional GeoCode'] = 'Neprivalomas geokodeksas';

$GLOBALS["lang"]['An optional password to use sudo.'] = 'Neprivalomas slaptažodis sudo naudojimui.';

$GLOBALS["lang"]['Andorra'] = 'Andora';

$GLOBALS["lang"]['Angola'] = 'Angola';

$GLOBALS["lang"]['Anguilla'] = 'Angilija';

$GLOBALS["lang"]['Antarctica'] = 'Antarktida';

$GLOBALS["lang"]['AntiVirus'] = 'Antivirusas';

$GLOBALS["lang"]['Antigua and Barbuda'] = 'Antigva ir Barbuda';

$GLOBALS["lang"]['Antivirus'] = 'Antivirusas';

$GLOBALS["lang"]['Any TCP ports (comma seperated, no spaces) you wish to exclude from this discovery. Only available when using Nmap 7+.'] = 'Visi TCP prievadai (kableliai, tarpai), kuriuos norite pašalinti iš šio atradimo. Galima tik naudojant Nmap 7 +.';

$GLOBALS["lang"]['Any UDP ports (comma seperated, no spaces) you wish to exclude from this discovery. Only available when using Nmap 7+.'] = 'Bet kurie UDP prievadai (kableliai, tarpai), kuriuos norite pašalinti iš šio atradimo. Galima tik naudojant Nmap 7 +.';

$GLOBALS["lang"]['Any additional documentation you need.'] = 'Papildomi dokumentai, kurių jums reikia.';

$GLOBALS["lang"]['Any additional notes you care to make.'] = 'Papildomos pastabos, kurias norėtumėte pateikti.';

$GLOBALS["lang"]['Any devices will be assigned to this Org when they run their audit script (if set). Links to <code>orgs.id</code>.'] = 'Visi įrenginiai bus priskirti šiam Org, kai jie paleisti savo audito scenarijų (jei nustatyta). Nuorodos į <code>orgs.id</code>.';

$GLOBALS["lang"]['Any discovered devices will be assigned to this Location if set. Links to <code>locations.id</code>.'] = 'Visi rasti įrenginiai bus priskirti šiai vietai, jei ji bus nustatyta. Nuorodos į <code>locations.id</code>.';

$GLOBALS["lang"]['Any discovered devices will be assigned to this Location when they run their audit script (if set). Links to <code>locations.id</code>.'] = 'Visi rasti įrenginiai bus priskirti šiai vietai, kai jie veikia savo audito scenarijų (jei nustatyta). Nuorodos į <code>locations.id</code>.';

$GLOBALS["lang"]['Any discovered devices will be assigned to this Org if set. If not set, they are assigned to the <code>org_id</code> of this discovery. Links to <code>orgs.id</code>.'] = 'Visi rasti įrenginiai bus priskirti šiam Orgui, jei bus nustatyti. Jei nenustatyta, jie priskiriami <code>org_id</code> šio atradimo. Nuorodos į <code>orgs.id</code>.';

$GLOBALS["lang"]['Any required filter. NOTE: When type = traffic, this represents the font-awesome icon.'] = 'Bet koks reikalingas filtras. PASTABA: Kai tipas = eismo, tai atspindi šrifto- awesome piktogramą.';

$GLOBALS["lang"]['Any specific TCP ports you wish tested (comma seperated, no spaces).'] = 'Bet kokie specifiniai TCP prievadai, kuriuos norite išbandyti (kableliais, be tarpų).';

$GLOBALS["lang"]['Any specific UDP ports you wish tested (comma seperated, no spaces).'] = 'Bet kokie konkretūs UDP prievadai, kuriuos norite išbandyti (kableliais, be tarpų).';

$GLOBALS["lang"]['Application'] = 'Taikymas';

$GLOBALS["lang"]['application_id'] = 'Prašymo ID';

$GLOBALS["lang"]['Application ID'] = 'Prašymo ID';

$GLOBALS["lang"]['Application Licenses'] = 'Paraiškos licencijos';

$GLOBALS["lang"]['Application, Operating System or Hardware.'] = 'Taikymas, operacinė sistema arba aparatinė įranga.';

$GLOBALS["lang"]['applications'] = 'Paraiškos';

$GLOBALS["lang"]['Applications'] = 'Paraiškos';

$GLOBALS["lang"]['applied'] = 'Taikomas';

$GLOBALS["lang"]['Applied'] = 'Taikomas';

$GLOBALS["lang"]['Approved'] = 'Patvirtinta';

$GLOBALS["lang"]['April'] = 'Balandis';

$GLOBALS["lang"]['architecture'] = 'Architektūra';

$GLOBALS["lang"]['Architecture'] = 'Architektūra';

$GLOBALS["lang"]['Are you sure you want to delete this input item?'] = 'Ar tikrai norite ištrinti šį įvesties elementą?';

$GLOBALS["lang"]['Are you sure you want to delete this output item?'] = 'Ar tikrai norite ištrinti šį išvesties elementą?';

$GLOBALS["lang"]['Are you sure? This will remove all queue entries and prevent the remaining IPs from being discovered.'] = 'Tikrai? Tai pašalins visus eilės įrašus ir neleis atrasti likusių IP.';

$GLOBALS["lang"]['Are you sure? This will reset the queue processing count and could cause load on the server.'] = 'Tikrai? Tai atstatys eilę apdorojimo skaičių ir gali sukelti apkrovos serveryje.';

$GLOBALS["lang"]['area'] = 'Zona';

$GLOBALS["lang"]['Area'] = 'Zona';

$GLOBALS["lang"]['Argentina'] = 'Argentina';

$GLOBALS["lang"]['Armenia'] = 'Armėnija';

$GLOBALS["lang"]['arp'] = 'Arp';

$GLOBALS["lang"]['Arp'] = 'Arp';

$GLOBALS["lang"]['Aruba'] = 'Aruba';

$GLOBALS["lang"]['As per the attributes for device environments. Production, Training, et al.'] = 'Pagal įrenginio aplinkos požymius. Gamyba, mokymas, et al.';

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

$GLOBALS["lang"]['Assign an Operator'] = 'Priskirti operatorių';

$GLOBALS["lang"]['Assigned To'] = 'Paskirta';

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

$GLOBALS["lang"]['Attribute'] = 'Požymis';

$GLOBALS["lang"]['attributes'] = 'Požymiai';

$GLOBALS["lang"]['Attributes'] = 'Požymiai';

$GLOBALS["lang"]['Audit'] = 'Auditas';

$GLOBALS["lang"]['Audit AIX'] = 'Auditas AIX';

$GLOBALS["lang"]['Audit ESXi'] = 'ESXi auditas';

$GLOBALS["lang"]['Audit Linux'] = 'Auditas Linux';

$GLOBALS["lang"]['audit_log'] = 'Audito žurnalas';

$GLOBALS["lang"]['Audit Log'] = 'Audito žurnalas';

$GLOBALS["lang"]['Audit My PC'] = 'Auditas Mano kompiuteris';

$GLOBALS["lang"]['Audit OSX'] = 'Auditas OSX';

$GLOBALS["lang"]['Audit Result Input'] = 'Audito rezultatų suvestinė';

$GLOBALS["lang"]['Audit Status'] = 'Audito būklė';

$GLOBALS["lang"]['Audit Windows'] = 'Audito Windows';

$GLOBALS["lang"]['Audit the Device'] = 'Prietaiso auditas';

$GLOBALS["lang"]['Audits'] = 'Auditas';

$GLOBALS["lang"]['August'] = 'Rugpjūtis';

$GLOBALS["lang"]['Australia'] = 'Australija';

$GLOBALS["lang"]['Austria'] = 'Austrija';

$GLOBALS["lang"]['Auth'] = 'Autas';

$GLOBALS["lang"]['auth'] = 'Autas';

$GLOBALS["lang"]['Authentication Passphrase'] = 'Autentikacijos slaptafrazė';

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

$GLOBALS["lang"]['Azerbaijan'] = 'Azerbaidžanas';

$GLOBALS["lang"]['BTU Max'] = 'unit description in lists';

$GLOBALS["lang"]['BTU Total'] = 'BTU iš viso';

$GLOBALS["lang"]['Backup'] = 'Kopijavimas';

$GLOBALS["lang"]['Bahamas the'] = 'Bahamos';

$GLOBALS["lang"]['Bahrain'] = 'Bahreinas';

$GLOBALS["lang"]['Bangladesh'] = 'Bangladešas';

$GLOBALS["lang"]['bank'] = 'Bankas';

$GLOBALS["lang"]['Bank'] = 'Bankas';

$GLOBALS["lang"]['Banned'] = 'Konservuoti';

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

$GLOBALS["lang"]['Basic'] = 'Pagrindinis';

$GLOBALS["lang"]['Belarus'] = 'Baltarusija';

$GLOBALS["lang"]['Belgium'] = 'Belgija';

$GLOBALS["lang"]['Belize'] = 'Belizas';

$GLOBALS["lang"]['Benchmark'] = 'Lyginamoji vertė';

$GLOBALS["lang"]['benchmark_id'] = 'Lyginamojo indekso ID';

$GLOBALS["lang"]['Benchmark ID'] = 'Lyginamojo indekso ID';

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

$GLOBALS["lang"]['Botswana'] = 'Botsvana';

$GLOBALS["lang"]['Bouvet Island (Bouvetoya)'] = 'Bouvet Island (Bouvetoya)';

$GLOBALS["lang"]['Brazil'] = 'Brazilija';

$GLOBALS["lang"]['Brazilian Portuguese'] = 'Brazilų portugalų';

$GLOBALS["lang"]['British Indian Ocean Territory (Chagos Archipelago)'] = 'Indijos vandenyno britų teritorija (Chagos salynas)';

$GLOBALS["lang"]['British Virgin Islands'] = 'Didžiosios Britanijos Mergelių Salos';

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

$GLOBALS["lang"]['Bulgaria'] = 'Bulgarija';

$GLOBALS["lang"]['Bulk Edit'] = '@ action: button';

$GLOBALS["lang"]['Bulk Editing Device Attributes'] = 'Birių redagavimo įrenginių požymiai';

$GLOBALS["lang"]['Burkina Faso'] = 'Burkina Fasas';

$GLOBALS["lang"]['Burundi'] = 'Burundis';

$GLOBALS["lang"]['business_requirements'] = 'Verslo reikalavimai';

$GLOBALS["lang"]['Business Requirements'] = 'Verslo reikalavimai';

$GLOBALS["lang"]['Buy'] = 'Pirkti';

$GLOBALS["lang"]['Buy More'] = 'Pirkti daugiau';

$GLOBALS["lang"]['Buy More Licenses'] = 'Pirkti daugiau licencijų';

$GLOBALS["lang"]['By'] = 'Pagal';

$GLOBALS["lang"]['CIDR'] = 'CIDR';

$GLOBALS["lang"]['CIDR Mask'] = 'CIDR Kaukė';

$GLOBALS["lang"]['cli_config'] = 'CLI Konfigūracija';

$GLOBALS["lang"]['CLI Config'] = 'CLI Konfigūracija';

$GLOBALS["lang"]['CPU'] = 'CPU';

$GLOBALS["lang"]['CPUs'] = 'CPU';

$GLOBALS["lang"]['CSV'] = 'CSV';

$GLOBALS["lang"]['CVE'] = 'CVE';

$GLOBALS["lang"]['Calculated from discovery.'] = 'Apskaičiuota pagal atradimą.';

$GLOBALS["lang"]['Calculated total number of valid IP addresses for this network.'] = 'Apskaičiuotas bendras šiam tinklui galiojančių IP adresų skaičius.';

$GLOBALS["lang"]['Calculated upon completion, the time taken to execute this item.'] = 'Apskaičiuojamas užbaigus šį elementą.';

$GLOBALS["lang"]['Calculated when integration is run and contains a JSON representation of the devices in this integration. Each links to <code>devices.id</code>.'] = 'Apskaičiuojama, kai integracija vyksta ir yra JSON reprezentavimo prietaisų į šią integraciją. Kiekviena nuoroda į <code>devices.id</code>.';

$GLOBALS["lang"]['Calculated when integration is run and contains a JSON representation of the locations in this integration. Each links to <code>locations.id</code>.'] = 'Apskaičiuojama, kai integracija vyksta ir yra JSON atstovavimas šios integracijos vietas. Kiekviena nuoroda į <code>locations.id</code>.';

$GLOBALS["lang"]['Calculated when integration is run and contains the number of devices selected from Open-AudIT.'] = 'Apskaičiuojama, kai integracija vyksta ir yra iš Open- AudIT pasirinktų įrenginių skaičius.';

$GLOBALS["lang"]['Calculated when integration is run and contains the number of devices selected the external system.'] = 'Apskaičiuojama, kai integruojama, ir nurodomas išorinės sistemos pasirinktų įtaisų skaičius.';

$GLOBALS["lang"]['Calculated when integration is run and contains the number of devices to be updated in the external system.'] = 'Apskaičiuojama, kai integruojama, ir nurodomas prietaisų, kurie turi būti atnaujinami išorinėje sistemoje, skaičius.';

$GLOBALS["lang"]['Calculated when integration is run and contains the number of devices updated in Open-AudIT.'] = 'Apskaičiuojama, kai integracija vyksta ir yra įrenginių, atnaujintų Open- AudIT skaičių.';

$GLOBALS["lang"]['Cambodia'] = 'Kambodža';

$GLOBALS["lang"]['Cameroon'] = 'Kamerūnas';

$GLOBALS["lang"]['Campus Area Network'] = 'Campus Area Network';

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

$GLOBALS["lang"]['Chad'] = 'Čadas';

$GLOBALS["lang"]['change_id'] = 'Pakeisti ID';

$GLOBALS["lang"]['Change ID'] = 'Pakeisti ID';

$GLOBALS["lang"]['change_log'] = 'Pakeisti žurnalą';

$GLOBALS["lang"]['Change Log'] = 'Pakeisti žurnalą';

$GLOBALS["lang"]['change_type'] = 'Pakeisti tipą';

$GLOBALS["lang"]['Change Type'] = 'Pakeisti tipą';

$GLOBALS["lang"]['check_minutes'] = 'Patikrinkite protokolą';

$GLOBALS["lang"]['Check Minutes'] = 'Patikrinkite protokolą';

$GLOBALS["lang"]['Check for SSH on these ports'] = 'Ieškoti SSH šiuose uostuose';

$GLOBALS["lang"]['Check this port for any SSH service.'] = 'Pažymėkite šį prievadą bet kuriai SSH paslaugai.';

$GLOBALS["lang"]['Chile'] = 'Čilė';

$GLOBALS["lang"]['China'] = 'Kinija';

$GLOBALS["lang"]['Choose'] = 'Pasirinkite';

$GLOBALS["lang"]['Choose (select OS first)'] = 'Pasirinkite (pirmiausia pasirinkite OS)';

$GLOBALS["lang"]['Choose a Device'] = 'Pasirinkite įrenginį';

$GLOBALS["lang"]['Choose a Table'] = 'Pasirinkite lentelę';

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

$GLOBALS["lang"]['Click the Delete button to remove the example devices from Open-AudIT.<br>This will remove the below devices from the database. '] = 'Paspauskite mygtuką Trinti pašalinti pavyzdinį įrenginius iš Open- AudIT.<br/>Tai pašalins toliau nurodytus įrenginius iš duomenų bazės. ';

$GLOBALS["lang"]['Click the Import button below to populate Open-AudIT with example device data.'] = 'Spauskite importo mygtuką žemiau populate Open- AudIT su pavyzdžiu įrenginio duomenis.';

$GLOBALS["lang"]['Client ID'] = 'Kliento ID';

$GLOBALS["lang"]['client_ident'] = 'Klientas';

$GLOBALS["lang"]['Client Ident'] = 'Klientas';

$GLOBALS["lang"]['client_secret'] = 'Klientas Slaptas';

$GLOBALS["lang"]['Client Secret'] = 'Klientas Slaptas';

$GLOBALS["lang"]['client_site_name'] = 'Kliento svetainės pavadinimas';

$GLOBALS["lang"]['Client Site Name'] = 'Kliento svetainės pavadinimas';

$GLOBALS["lang"]['Close'] = 'Užverti';

$GLOBALS["lang"]['Cloud'] = 'Debesis';

$GLOBALS["lang"]['Cloud Details'] = 'Debesų informacija';

$GLOBALS["lang"]['Cloud Discovery'] = 'Debesis';

$GLOBALS["lang"]['cloud_id'] = 'Debesis ID';

$GLOBALS["lang"]['Cloud ID'] = 'Debesis ID';

$GLOBALS["lang"]['cloud_log'] = 'Debesis žurnalas';

$GLOBALS["lang"]['Cloud Log'] = 'Debesis žurnalas';

$GLOBALS["lang"]['cloud_name'] = 'Debesijos pavadinimas';

$GLOBALS["lang"]['Cloud Name'] = 'Debesijos pavadinimas';

$GLOBALS["lang"]['Cloud Network'] = 'Debesis tinklas';

$GLOBALS["lang"]['clouds'] = 'Debesys';

$GLOBALS["lang"]['Clouds'] = 'Debesys';

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

$GLOBALS["lang"]['Cocos (Keeling) Islands'] = 'Kokosų (Keelingo) salos';

$GLOBALS["lang"]['Collector'] = 'Kolektorius';

$GLOBALS["lang"]['Collector (UUID)'] = 'Kolektorius (UUID)';

$GLOBALS["lang"]['Collector Name'] = 'Kolektoriaus vardas';

$GLOBALS["lang"]['collector_uuid'] = 'Kolektorius Uuid';

$GLOBALS["lang"]['Collector Uuid'] = 'Kolektorius Uuid';

$GLOBALS["lang"]['collectors'] = 'Kolektoriai';

$GLOBALS["lang"]['Collectors'] = 'Kolektoriai';

$GLOBALS["lang"]['Colombia'] = 'Kolumbija';

$GLOBALS["lang"]['color'] = 'Spalva';

$GLOBALS["lang"]['Color'] = 'Spalva';

$GLOBALS["lang"]['column'] = 'Stulpelis';

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

$GLOBALS["lang"]['comments'] = 'Pastabos';

$GLOBALS["lang"]['Comments'] = 'Pastabos';

$GLOBALS["lang"]['commercial'] = 'Komercinis';

$GLOBALS["lang"]['Commercial'] = 'Komercinis';

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

$GLOBALS["lang"]['Complexity of the attack (Low or High).'] = 'Užpuolimo sudėtingumas (žemas arba aukštas).';

$GLOBALS["lang"]['Component Table'] = 'Komponento lentelė';

$GLOBALS["lang"]['Components (All Devices)'] = 'Komponentai (visi įtaisai)';

$GLOBALS["lang"]['Compute'] = 'Skaičiuoti';

$GLOBALS["lang"]['Condition'] = 'Sąlygos';

$GLOBALS["lang"]['Config'] = 'Konfigūracija';

$GLOBALS["lang"]['Config Default, currently '] = 'Konfigūruoti numatytą, šiuo metu ';

$GLOBALS["lang"]['config_file'] = 'Konfigūruoti failą';

$GLOBALS["lang"]['Config File'] = 'Konfigūruoti failą';

$GLOBALS["lang"]['config_manager_error_code'] = 'Konfigūracijos valdyklės klaidos kodas';

$GLOBALS["lang"]['Config Manager Error Code'] = 'Konfigūracijos valdyklės klaidos kodas';

$GLOBALS["lang"]['configuration'] = 'Konfigūracija';

$GLOBALS["lang"]['Configuration'] = 'Konfigūracija';

$GLOBALS["lang"]['Configure'] = 'Konfigūruoti';

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

$GLOBALS["lang"]['contact'] = 'Kontaktai';

$GLOBALS["lang"]['Contact'] = 'Kontaktai';

$GLOBALS["lang"]['contact_name'] = 'Kontaktinis vardas';

$GLOBALS["lang"]['Contact Name'] = 'Kontaktinis vardas';

$GLOBALS["lang"]['contained_in'] = 'Pateikta';

$GLOBALS["lang"]['Contained In'] = 'Pateikta';

$GLOBALS["lang"]['Contains a JSON object details the associated widgets and their positions.'] = 'Sudėtyje yra JSON objektas išsamiai susiję raštai ir jų pozicijas.';

$GLOBALS["lang"]['Contains the fields that determine if we should use ssh, snmp and wmi discovery options. A JSON object.'] = 'Sudėtyje yra laukeliai, kurie nustato, ar mes turėtume naudoti ssh, snmp ir wmi atradimo galimybes. JSON objektas.';

$GLOBALS["lang"]['Context Engine ID'] = 'Konteksto variklio ID';

$GLOBALS["lang"]['Context Name'] = 'Konteksto pavadinimas';

$GLOBALS["lang"]['contractual_obligations'] = 'Sutartiniai įsipareigojimai';

$GLOBALS["lang"]['Contractual Obligations'] = 'Sutartiniai įsipareigojimai';

$GLOBALS["lang"]['Cook Islands'] = 'Kuko Salos';

$GLOBALS["lang"]['Copy and paste an audit result'] = 'Audito rezultatų kopijavimas ir įdėjimas';

$GLOBALS["lang"]['Copy and paste the below to the forums, another instance of Open-AudIT or anywhere else you need to provide this item.'] = 'Kopijuoti ir įklijuoti žemiau į forumus, kitą Open- AudIT arba bet kur kitur jums reikia pateikti šį elementą.';

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

$GLOBALS["lang"]['Create Geocode'] = 'Sukurti Geokodą';

$GLOBALS["lang"]['create_internal_count'] = 'Sukurti vidinį skaičių';

$GLOBALS["lang"]['Create Internal Count'] = 'Sukurti vidinį skaičių';

$GLOBALS["lang"]['create_internal_from_external'] = 'Sukurti Vidinį iš išorės';

$GLOBALS["lang"]['Create Internal From External'] = 'Sukurti Vidinį iš išorės';

$GLOBALS["lang"]['Create NMIS Devices from Open-AudIT'] = 'Sukurti NMIS įrenginius iš Open- AudIT';

$GLOBALS["lang"]['Create Open-AudIT Devices from '] = 'Sukurti Open- AudIT Įrenginiai ';

$GLOBALS["lang"]['Create Open-AudIT Devices from NMIS'] = 'Sukurti Open- AudIT NMIS prietaisai';

$GLOBALS["lang"]['created_by'] = 'Sukurta';

$GLOBALS["lang"]['Created By'] = 'Sukurta';

$GLOBALS["lang"]['created_date'] = 'Sukurta data';

$GLOBALS["lang"]['Created Date'] = 'Sukurta data';

$GLOBALS["lang"]['Creating'] = 'Kuriamas';

$GLOBALS["lang"]['Creating Device'] = 'Kuriamas įrenginys';

$GLOBALS["lang"]['Creating a Query'] = 'Kuriama užklausa';

$GLOBALS["lang"]['creator'] = 'Kūrėjas';

$GLOBALS["lang"]['Creator'] = 'Kūrėjas';

$GLOBALS["lang"]['credential'] = 'Kreditinė';

$GLOBALS["lang"]['Credential'] = 'Kreditinė';

$GLOBALS["lang"]['credentials'] = 'Kreditai';

$GLOBALS["lang"]['Credentials'] = 'Kreditai';

$GLOBALS["lang"]['Credentials Client ID'] = 'Kreditai Kliento ID';

$GLOBALS["lang"]['Credentials Subscription ID'] = 'Kreditų sąskaita ID';

$GLOBALS["lang"]['Credentials Tenant ID'] = 'Kreditų suteikimo data';

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

$GLOBALS["lang"]['Custom TCP Ports'] = 'Pasirinktiniai TCP prievadai';

$GLOBALS["lang"]['Custom UDP Ports'] = 'Pasirinktinis UDP Uostai';

$GLOBALS["lang"]['Cve'] = 'Cve';

$GLOBALS["lang"]['Cyprus'] = 'Kipras';

$GLOBALS["lang"]['Czech'] = 'Čekų';

$GLOBALS["lang"]['Czech Republic'] = 'Čekija';

$GLOBALS["lang"]['DHCP'] = 'DHCP';

$GLOBALS["lang"]['DN Account (optional)'] = 'DN paskyra (neprivaloma)';

$GLOBALS["lang"]['DN Password (optional)'] = 'DN slaptažodis (neprivaloma)';

$GLOBALS["lang"]['DNS FQDN'] = 'DNS FQDN';

$GLOBALS["lang"]['DNS Hostname'] = 'DNS centro pavadinimas';

$GLOBALS["lang"]['dashboard_id'] = 'Pašto dėžutės ID';

$GLOBALS["lang"]['Dashboard ID'] = 'Pašto dėžutės ID';

$GLOBALS["lang"]['dashboards'] = 'Skydai';

$GLOBALS["lang"]['Dashboards'] = 'Skydai';

$GLOBALS["lang"]['Database'] = 'Duomenų bazė';

$GLOBALS["lang"]['db_action'] = 'Duomenų bazės veiksmas';

$GLOBALS["lang"]['Database Action'] = 'Duomenų bazės veiksmas';

$GLOBALS["lang"]['db_column'] = 'Duomenų bazės stulpelis';

$GLOBALS["lang"]['Database Column'] = 'Duomenų bazės stulpelis';

$GLOBALS["lang"]['Database Definition'] = 'Duomenų bazės apibrėžimas';

$GLOBALS["lang"]['db_row'] = 'Duomenų bazės eilutė';

$GLOBALS["lang"]['Database Row'] = 'Duomenų bazės eilutė';

$GLOBALS["lang"]['Database Schema'] = 'Duomenų bazės schema';

$GLOBALS["lang"]['db_table'] = 'Duomenų bazės lentelė';

$GLOBALS["lang"]['Database Table'] = 'Duomenų bazės lentelė';

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

$GLOBALS["lang"]['December'] = 'Gruodis';

$GLOBALS["lang"]['Default'] = 'Numatytas';

$GLOBALS["lang"]['Default Items'] = 'Numatyti elementai';

$GLOBALS["lang"]['Default Value'] = 'Numatytoji reikšmė';

$GLOBALS["lang"]['Default of 389. Normally 636 used for Active Directory LDAPS.'] = 'Numatyta 389. Paprastai naudojamas Active Directory LDAPS.';

$GLOBALS["lang"]['Default of <code>3</code> for LDAP and Active Directory.'] = 'Numatyta <code>3</code> LDAP ir Active Directory.';

$GLOBALS["lang"]['Defaults'] = 'Numatytos priemonės';

$GLOBALS["lang"]['delay_minutes'] = 'Vėlavimo protokolas';

$GLOBALS["lang"]['Delay Minutes'] = 'Vėlavimo protokolas';

$GLOBALS["lang"]['Delete'] = 'Trinti';

$GLOBALS["lang"]['Delete Example Devices'] = 'Trinti pavyzdinius įrenginius';

$GLOBALS["lang"]['delete_external_from_internal'] = 'Ištrinti išorėje iš vidaus';

$GLOBALS["lang"]['Delete External From Internal'] = 'Ištrinti išorėje iš vidaus';

$GLOBALS["lang"]['Delete NMIS Devices if not in Open-AudIT'] = 'Trinti NMIS Įrenginiai, jei nėra Open- AudIT';

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

$GLOBALS["lang"]['details'] = 'Išsami informacija';

$GLOBALS["lang"]['Details of who is usually contactable at this site.'] = 'Informacija apie tai, kas paprastai gali susisiekti šioje svetainėje.';

$GLOBALS["lang"]['device'] = 'Įrenginys';

$GLOBALS["lang"]['Device'] = 'Įrenginys';

$GLOBALS["lang"]['Device Audits'] = 'Įrenginio auditas';

$GLOBALS["lang"]['Device ID'] = 'Įrenginio ID';

$GLOBALS["lang"]['device_id'] = 'Įrenginio ID';

$GLOBALS["lang"]['device_id_a'] = 'Įrenginio ID A';

$GLOBALS["lang"]['Device ID A'] = 'Įrenginio ID A';

$GLOBALS["lang"]['device_id_b'] = 'Įrenginio ID B';

$GLOBALS["lang"]['Device ID B'] = 'Įrenginio ID B';

$GLOBALS["lang"]['Device Name'] = 'Įrenginio pavadinimas';

$GLOBALS["lang"]['Device Result'] = 'Įrenginio rezultatas';

$GLOBALS["lang"]['Device Results'] = 'Įrenginio rezultatai';

$GLOBALS["lang"]['Device Seed'] = 'Įrenginio sėkla';

$GLOBALS["lang"]['Device Seed IP'] = 'Įrenginio sėklų IP';

$GLOBALS["lang"]['Device Status'] = 'Įrenginio būsena';

$GLOBALS["lang"]['Device Types'] = 'Įrenginių tipai';

$GLOBALS["lang"]['Device is in the Subnet'] = 'Įrenginys yra potinklyje';

$GLOBALS["lang"]['Devices'] = 'Įrenginiai';

$GLOBALS["lang"]['devices_assigned_to_location'] = 'Įrenginiai, priskirti vietovei';

$GLOBALS["lang"]['Devices Assigned To Location'] = 'Įrenginiai, priskirti vietovei';

$GLOBALS["lang"]['devices_assigned_to_org'] = 'Orgui priskirti įrenginiai';

$GLOBALS["lang"]['Devices Assigned To Org'] = 'Orgui priskirti įrenginiai';

$GLOBALS["lang"]['Devices Audited'] = 'Įrenginiai audituoti';

$GLOBALS["lang"]['Devices Created in '] = 'Įrengta įrenginių ';

$GLOBALS["lang"]['Devices Created in Open-AudIT'] = 'Open- AudIT sukurti įrenginiai';

$GLOBALS["lang"]['devices_default_display_columns'] = 'Įrenginių numatytosios rodymo stulpeliai';

$GLOBALS["lang"]['Devices Default Display Columns'] = 'Įrenginių numatytosios rodymo stulpeliai';

$GLOBALS["lang"]['Devices Found Last 7 Days'] = 'Rasta įrenginių Paskutinės 7 dienos';

$GLOBALS["lang"]['Devices Found Today'] = 'Šiandien rasti įrenginiai';

$GLOBALS["lang"]['Devices Found Yesterday'] = 'Vakar rasti įrenginiai';

$GLOBALS["lang"]['Devices Not Audited'] = 'Įrenginiai neaudituoti';

$GLOBALS["lang"]['Devices Not Seen 30 Days'] = 'Įrenginiai nėra 30 dienų';

$GLOBALS["lang"]['Devices Not Seen 7 Days'] = 'Įrenginiai nėra 7 dienų';

$GLOBALS["lang"]['Devices Not Seen 90 Days'] = 'Prietaisai nėra matyti 90 dienų';

$GLOBALS["lang"]['Devices Retrieved via API'] = 'Įrenginiai, gauti per API';

$GLOBALS["lang"]['Devices Selected from '] = 'Pažymėti įrenginiai ';

$GLOBALS["lang"]['Devices Selected from Open-AudIT'] = 'Įrenginiai, pasirinkti iš Open- AudIT';

$GLOBALS["lang"]['Devices Updated in '] = 'Įrenginiai atnaujinti ';

$GLOBALS["lang"]['Devices Updated in Open-AudIT'] = 'Įrenginiai atnaujinti Open- AudIT';

$GLOBALS["lang"]['Devices are being benchmarked.'] = 'Prietaisai yra lyginami.';

$GLOBALS["lang"]['Devices are not being benchmarked.'] = 'Prietaisai nežymimi.';

$GLOBALS["lang"]['Devices could be benchmarked.'] = 'Prietaisai gali būti lyginami.';

$GLOBALS["lang"]['Devices in Running State'] = 'Įrenginiai veikia';

$GLOBALS["lang"]['Devices in Stopped State'] = 'Įrenginiai sustabdytoje būsenoje';

$GLOBALS["lang"]['Devices in this'] = 'Įrenginiai';

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

$GLOBALS["lang"]['discoveries'] = 'Atradimas';

$GLOBALS["lang"]['Discoveries'] = 'Atradimas';

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

$GLOBALS["lang"]['disk'] = 'Diskas';

$GLOBALS["lang"]['Disk'] = 'Diskas';

$GLOBALS["lang"]['display_version'] = 'Rodyti versiją';

$GLOBALS["lang"]['Display Version'] = 'Rodyti versiją';

$GLOBALS["lang"]['Display in Menu'] = 'Rodyti meniu';

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

$GLOBALS["lang"]['Do not scan these TCP ports.'] = 'Neskenuokite šių TCP prievadų.';

$GLOBALS["lang"]['Do not scan these UDP ports.'] = 'Neskenuokite šių UDP prievadų.';

$GLOBALS["lang"]['Do not show me again'] = 'Daugiau man nerodyk';

$GLOBALS["lang"]['Do you want to use secure transport (LDAPS) or regular unencrypted LDAP.'] = 'Ar norite naudoti saugų transportą (LDAPS) ar reguliarų nešifruotą LDAP.';

$GLOBALS["lang"]['Do you wish to see the standard sidebar on the left.'] = 'Ar norite pamatyti standartinę šoninę juostą kairėje.';

$GLOBALS["lang"]['documentation'] = 'Dokumentai';

$GLOBALS["lang"]['Documentation'] = 'Dokumentai';

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

$GLOBALS["lang"]['Download a file from URL'] = 'Parsisiųsti failą iš URL';

$GLOBALS["lang"]['driver'] = 'Vairuotojas';

$GLOBALS["lang"]['Driver'] = 'Vairuotojas';

$GLOBALS["lang"]['duplex'] = 'Duplex';

$GLOBALS["lang"]['Duplex'] = 'Duplex';

$GLOBALS["lang"]['duration'] = 'Trukmė';

$GLOBALS["lang"]['Duration'] = 'Trukmė';

$GLOBALS["lang"]['ESXi'] = 'ESXi';

$GLOBALS["lang"]['EULA'] = 'EULA';

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

$GLOBALS["lang"]['enabled'] = 'Įjungta';

$GLOBALS["lang"]['Enabled'] = 'Įjungta';

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

$GLOBALS["lang"]['English'] = 'Anglų';

$GLOBALS["lang"]['enterprise'] = 'Įmonė';

$GLOBALS["lang"]['Enterprise'] = 'Įmonė';

$GLOBALS["lang"]['Enterprise Private Network'] = 'Įmonių privatusis tinklas';

$GLOBALS["lang"]['Entitlement Type'] = 'Teisių tipas';

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

$GLOBALS["lang"]['Established'] = 'Įsteigimo metai';

$GLOBALS["lang"]['Estonia'] = 'Estija';

$GLOBALS["lang"]['Ethernet MAC'] = 'Ethernet MAC';

$GLOBALS["lang"]['ethernet_mac'] = 'Ethernet Mac';

$GLOBALS["lang"]['Ethernet Mac'] = 'Ethernet Mac';

$GLOBALS["lang"]['Ethiopia'] = 'Etiopija';

$GLOBALS["lang"]['Every'] = 'Kiekvienas';

$GLOBALS["lang"]['Every Day'] = 'Kiekvieną dieną';

$GLOBALS["lang"]['Exceptions'] = 'Išimtys';

$GLOBALS["lang"]['exclude'] = 'Išskyrus';

$GLOBALS["lang"]['Exclude'] = 'Išskyrus';

$GLOBALS["lang"]['exclude_ip'] = 'Išskyrus TL';

$GLOBALS["lang"]['Exclude IP'] = 'Išskyrus TL';

$GLOBALS["lang"]['Exclude IP Addresses'] = 'Išskyrus IP adresus';

$GLOBALS["lang"]['Exclude TCP Ports'] = 'Išskyrus TCP uostus';

$GLOBALS["lang"]['exclude_tcp_ports'] = 'Išskyrus Tcp uostus';

$GLOBALS["lang"]['Exclude Tcp Ports'] = 'Išskyrus Tcp uostus';

$GLOBALS["lang"]['Exclude UDP Ports'] = 'Išskyrus UDP uostus';

$GLOBALS["lang"]['exclude_udp_ports'] = 'Išskyrus Udp uostus';

$GLOBALS["lang"]['Exclude Udp Ports'] = 'Išskyrus Udp uostus';

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

$GLOBALS["lang"]['expose'] = 'Išeiti';

$GLOBALS["lang"]['Expose'] = 'Išeiti';

$GLOBALS["lang"]['External'] = 'Išorės';

$GLOBALS["lang"]['External Field Name'] = 'Išorinis lauko pavadinimas';

$GLOBALS["lang"]['External Field Type'] = 'Išorinio lauko tipas';

$GLOBALS["lang"]['external_ident'] = 'Išorinis Identas';

$GLOBALS["lang"]['External Ident'] = 'Išorinis Identas';

$GLOBALS["lang"]['external_link'] = 'Išorinė sąsaja';

$GLOBALS["lang"]['External Link'] = 'Išorinė sąsaja';

$GLOBALS["lang"]['extra_columns'] = 'Papildomi stulpeliai';

$GLOBALS["lang"]['Extra Columns'] = 'Papildomi stulpeliai';

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

$GLOBALS["lang"]['Fiji the Fiji Islands'] = 'Fidžis Fidžio Salos';

$GLOBALS["lang"]['File'] = 'Failas';

$GLOBALS["lang"]['File Import'] = 'Failo importavimas';

$GLOBALS["lang"]['File Input'] = 'Failo įvestis';

$GLOBALS["lang"]['file_name'] = 'Failo pavadinimas';

$GLOBALS["lang"]['File Name'] = 'Failo pavadinimas';

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

$GLOBALS["lang"]['Finland'] = 'Suomija';

$GLOBALS["lang"]['Firewall'] = 'Ugniasienė';

$GLOBALS["lang"]['firewall_rule'] = 'Ugniasienės taisyklė';

$GLOBALS["lang"]['Firewall Rule'] = 'Ugniasienės taisyklė';

$GLOBALS["lang"]['firmware'] = 'Firmware';

$GLOBALS["lang"]['Firmware'] = 'Firmware';

$GLOBALS["lang"]['firmware_revision'] = 'Firmware modifikacija';

$GLOBALS["lang"]['Firmware Revision'] = 'Firmware modifikacija';

$GLOBALS["lang"]['First Name'] = 'Vardas';

$GLOBALS["lang"]['first_run'] = 'Pirmas paleidimas';

$GLOBALS["lang"]['First Run'] = 'Pirmas paleidimas';

$GLOBALS["lang"]['first_seen'] = 'Pirmoji naktis';

$GLOBALS["lang"]['First Seen'] = 'Pirmoji naktis';

$GLOBALS["lang"]['FirstWave'] = 'FirstWave';

$GLOBALS["lang"]['Fix'] = 'Fix';

$GLOBALS["lang"]['Fixed'] = 'Fiksuotas';

$GLOBALS["lang"]['Floor'] = 'Grindys';

$GLOBALS["lang"]['Follow any of the links below and discover how to use Open-AudIT to find out <b>Whats On Your Network?</b>'] = 'Sekite bet kurį iš žemiau esančių nuorodų ir atrasti, kaip naudoti Open- AudIT sužinoti <b>Kas jūsų tinkle?</b>';

$GLOBALS["lang"]['For a seed discovery, should I only discover IPs in the private IP address space.'] = 'Sėklos atradimui, jei aš atrasti IP tik privataus IP adreso erdvėje.';

$GLOBALS["lang"]['For a seed discovery, should I only discover IPs on the chosen subnet.'] = 'Sėklos atradimui aš turėčiau atrasti tik IP pasirinktame potinklyje.';

$GLOBALS["lang"]['For a seed discovery, should I ping the subnet before running the discovery.'] = 'Sėklos atradimui, jei prieš tai pakabinčiau potinklį.';

$GLOBALS["lang"]['For advanced entry of a raw SQL query. As per Queries, you must include <code>WHERE @filter AND<code> in your SQL.'] = 'Už pažangų įrašą neapdorotų SQL užklausos. Kaip per užklausas, turite įtraukti <code>WHERE @filter AND<code> in your SQL.</code></code>';

$GLOBALS["lang"]['For licenses that are not perpetual, when does the license expire.'] = 'Licencijoms, kurios nėra perpetual, kai ji baigiasi.';

$GLOBALS["lang"]['form_factor'] = 'Formos faktorius';

$GLOBALS["lang"]['Form Factor'] = 'Formos faktorius';

$GLOBALS["lang"]['format'] = 'Formatas';

$GLOBALS["lang"]['Format'] = 'Formatas';

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

$GLOBALS["lang"]['full_name'] = 'Visas pavadinimas';

$GLOBALS["lang"]['Full Name'] = 'Visas pavadinimas';

$GLOBALS["lang"]['function'] = 'Funkcija';

$GLOBALS["lang"]['Function'] = 'Funkcija';

$GLOBALS["lang"]['GROUP BY'] = 'GRUPĖ';

$GLOBALS["lang"]['Gabon'] = 'Gabonas';

$GLOBALS["lang"]['Gambia the'] = 'Gambija';

$GLOBALS["lang"]['gateway'] = 'Vartai';

$GLOBALS["lang"]['Gateway'] = 'Vartai';

$GLOBALS["lang"]['gateways'] = 'Gatvės';

$GLOBALS["lang"]['Gateways'] = 'Gatvės';

$GLOBALS["lang"]['Generated By'] = 'Pagaminta';

$GLOBALS["lang"]['geo'] = 'Geo';

$GLOBALS["lang"]['Geo'] = 'Geo';

$GLOBALS["lang"]['Georgia'] = 'Gruzija';

$GLOBALS["lang"]['German'] = 'Vokiečių';

$GLOBALS["lang"]['Germany'] = 'Vokietija';

$GLOBALS["lang"]['Get Lat/Long'] = 'Get Lat / Long';

$GLOBALS["lang"]['Get Started'] = 'Pradėti';

$GLOBALS["lang"]['Get a Free License'] = 'Gauti nemokamą licenciją';

$GLOBALS["lang"]['Getting Started'] = 'Pradžia';

$GLOBALS["lang"]['Ghana'] = 'Gana';

$GLOBALS["lang"]['Gibraltar'] = 'Gibraltaras';

$GLOBALS["lang"]['Global Discovery Options'] = 'Visuotinės paieškos parinktys';

$GLOBALS["lang"]['Go'] = 'Eiti';

$GLOBALS["lang"]['Google Compute Fields'] = 'Comment';

$GLOBALS["lang"]['Google Maps API Key'] = 'Google Maps API Raktas';

$GLOBALS["lang"]['Greater Than'] = 'Than';

$GLOBALS["lang"]['Greater Than or Equals'] = 'Didesnis nei arba lygus';

$GLOBALS["lang"]['Greece'] = 'Graikija';

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

$GLOBALS["lang"]['hardware_revision'] = 'Aparatinės įrangos peržiūra';

$GLOBALS["lang"]['Hardware Revision'] = 'Aparatinės įrangos peržiūra';

$GLOBALS["lang"]['Has this policy been applied in this organization.'] = 'Ar ši politika buvo taikoma šioje organizacijoje.';

$GLOBALS["lang"]['hash'] = 'Raktažodis';

$GLOBALS["lang"]['Hash'] = 'Raktažodis';

$GLOBALS["lang"]['Head'] = 'Galva';

$GLOBALS["lang"]['Heard Island and McDonald Islands'] = 'Heardo ir McDonaldo salos';

$GLOBALS["lang"]['height'] = 'Aukštis';

$GLOBALS["lang"]['Height'] = 'Aukštis';

$GLOBALS["lang"]['Height in RU'] = 'Aukštis GĮ';

$GLOBALS["lang"]['Help'] = 'Pagalba';

$GLOBALS["lang"]['Help and Frequently Asked Questions'] = 'Pagalba ir dažnai užduodami klausimai';

$GLOBALS["lang"]['high'] = 'Aukšta';

$GLOBALS["lang"]['High'] = 'Aukšta';

$GLOBALS["lang"]['High Availability'] = 'Didelis prieinamumas';

$GLOBALS["lang"]['Holy See (Vatican City State)'] = 'Šventasis Sostas (Vatikano Miesto Valstybė)';

$GLOBALS["lang"]['Home'] = 'Namai';

$GLOBALS["lang"]['home'] = 'Namai';

$GLOBALS["lang"]['Home Area Network'] = 'Pagrindinis tinklas';

$GLOBALS["lang"]['Honduras'] = 'Hondūras';

$GLOBALS["lang"]['Hong Kong'] = 'Honkongas';

$GLOBALS["lang"]['host'] = 'Mazgas';

$GLOBALS["lang"]['Host'] = 'Mazgas';

$GLOBALS["lang"]['hostname'] = 'Mazgas';

$GLOBALS["lang"]['Hostname'] = 'Mazgas';

$GLOBALS["lang"]['hour'] = 'Valanda';

$GLOBALS["lang"]['Hour'] = 'Valanda';

$GLOBALS["lang"]['How and Why is Open-AudIT More Secure'] = 'Kaip ir kodėl Open- AudIT Saugesnis';

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

$GLOBALS["lang"]['Hungary'] = 'Vengrija';

$GLOBALS["lang"]['hw_cpe'] = 'Hw Cpe';

$GLOBALS["lang"]['Hw Cpe'] = 'Hw Cpe';

$GLOBALS["lang"]['hyperthreading'] = 'Hipertenzija';

$GLOBALS["lang"]['Hyperthreading'] = 'Hipertenzija';

$GLOBALS["lang"]['I have read the EULA.'] = 'Skaičiau EULA.';

$GLOBALS["lang"]['id'] = 'ID';

$GLOBALS["lang"]['ID'] = 'ID';

$GLOBALS["lang"]['IF'] = 'IF';

$GLOBALS["lang"]['IOS Version'] = 'IOS versija';

$GLOBALS["lang"]['IP'] = 'IP';

$GLOBALS["lang"]['ip'] = 'IP';

$GLOBALS["lang"]['IP Address'] = 'IP adresas';

$GLOBALS["lang"]['IP Addresses'] = 'IP adresai';

$GLOBALS["lang"]['IP Last Seen'] = 'IP paskutinis priesaga';

$GLOBALS["lang"]['IP Set By'] = 'IP rinkinys pagal';

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

$GLOBALS["lang"]['If'] = 'Jei';

$GLOBALS["lang"]['If a port responds with filtered, should we consider it available.'] = 'Jei prievadas reaguoja su filtru, jei mes manome, kad tai galima.';

$GLOBALS["lang"]['If a port responds with open|filtered, should we consider it available.'] = 'Jei prievadas reaguoja su atvira 124; filtruotas, jei mes manome, kad tai galima.';

$GLOBALS["lang"]['If a remote device does not exist in the Open-AudIT selected devices, should we delete it from the external system.'] = 'Jei Open- AudIT pasirinktuose įrenginiuose nėra nuotolinio įrenginio, jį reikėtų ištrinti iš išorinės sistemos.';

$GLOBALS["lang"]['If an Open-AudIT device has been changed, should we update the external system.'] = 'Jei Open- AudIT įrenginys buvo pakeistas, reikia atnaujinti išorinę sistemą.';

$GLOBALS["lang"]['If an Open-AudIT device is not on the external system, should we create it.'] = 'Jei Open- AudIT įrenginys nėra išorinėje sistemoje, mes jį sukurti.';

$GLOBALS["lang"]['If an agent reports its primary IP is in this subnet, perform the actions.'] = 'Jei agentas praneša apie savo pirminį IP yra šiame potinklyje, atlikti veiksmus.';

$GLOBALS["lang"]['If any of these (comma seperated, no spaces) ports are detected, assume SSH is running on them and use them for auditing. No need to add this port to the Custom TCP ports - it will be added automatically.'] = 'Jei kuris nors iš šių (kablelis, jokių tarpų) uostai yra aptinkami, manyti, SSH veikia juos ir naudoti juos audito. Nereikia pridėti šio prievado prie Custom TCP prievadų - jis bus pridėtas automatiškai.';

$GLOBALS["lang"]['If set, holds a JSON array of specific device columns this user has chosen to see, other than the configuration default.'] = 'Jei nustatyta, turi JSON masyvą konkretaus įrenginio stulpelius, kuriuos naudotojas pasirinko matyti, išskyrus numatytąją konfigūraciją.';

$GLOBALS["lang"]['If the agent OS family (case insensitive) contains this string, perform the actions.'] = 'Jei agento OS šeimoje (byla nejautri) yra ši eilutė, atlikti veiksmus.';

$GLOBALS["lang"]['If the following conditions are met:<br><ul><li>a Role has an assigned ad_group</li><li>an Org has an assigned ad_group</li><li>an LDAP Server has use_roles set to y</li><li>a user exists in LDAP (be it Active Directory or OpenLDAP) and is in the assigned ad_groups</li></ul>That user can log on to Open-AudIT without an account in Open-AudIT needing to be created. Open-AudIT will query the LDAP in question and if the user is in the required groups but not in Open-AudIT, their user attributes (name, full name, email,  roles, orgs, etc) within Open-AudIT will be automatically populated and they will be logged on.<br> <br>'] = 'Jei laikomasi šių sąlygų:<br/><ul><li>a Vaidmuo turi paskirtą ad _ group</li><li>Org turi priskirtą ad _ group</li><li>LDAP Serveris turi naudoti _ vaidmenis, nustatytus y</li><li>vartotojas yra LDAP (ar tai Active Directory arba OpenLDAP) ir priskirtas ad _ group</li></ul>Kad vartotojas gali prisijungti prie Open- AudIT be Open- AudIT sąskaitą reikia sukurti. Open- AudIT užduos klausimą aptariamam LDAP ir jei vartotojas yra reikalaujamose grupėse, bet ne Open- AudIT, jų vartotojo atributus (vardas, vardas, pavardė, el. paštas, vaidmenys, orgai ir tt) per Open- AudIT bus automatiškai apgyvendintas ir jie bus registruojami.<br/> <br/>';

$GLOBALS["lang"]['If the user logging on to Open-AudIT does not have the access to search LDAP, you can use another account which does have this access.'] = 'Jei vartotojas prisijungia prie Open- AudIT neturi prieigos prie paieškos LDAP, galite naudoti kitą paskyrą, kuri turi šią prieigą.';

$GLOBALS["lang"]['If this many or more minutes have passed since the device contacted the server, perform the actions.'] = 'Jei praėjo daug ar daugiau minučių nuo to laiko, kai įrenginys susisiekė su serveriu, atlikite veiksmus.';

$GLOBALS["lang"]['If you choose a Collector, it will be scheduled to execute on the next 5 minute boundary.'] = 'Jei pasirinksite kolektorių, bus numatyta atlikti kitą 5 minučių ribą.';

$GLOBALS["lang"]['ifadminstatus'] = 'Ifadminstatus';

$GLOBALS["lang"]['Ifadminstatus'] = 'Ifadminstatus';

$GLOBALS["lang"]['iflastchange'] = 'Iflastchange';

$GLOBALS["lang"]['Iflastchange'] = 'Iflastchange';

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

$GLOBALS["lang"]['implementation_notes'] = 'Įgyvendinimo pastabos';

$GLOBALS["lang"]['Implementation Notes'] = 'Įgyvendinimo pastabos';

$GLOBALS["lang"]['Import'] = 'Importuoti';

$GLOBALS["lang"]['Import Example Data'] = 'Importuoti pavyzdinius duomenis';

$GLOBALS["lang"]['improvement_opportunities'] = 'Gerinimo galimybės';

$GLOBALS["lang"]['Improvement Opportunities'] = 'Gerinimo galimybės';

$GLOBALS["lang"]['In'] = 'Į';

$GLOBALS["lang"]['Inactive'] = 'Neaktyvus';

$GLOBALS["lang"]['Include'] = 'Įtraukti';

$GLOBALS["lang"]['Incomplete'] = 'Nebaigta';

$GLOBALS["lang"]['Index'] = 'Indeksas';

$GLOBALS["lang"]['India'] = 'Indija';

$GLOBALS["lang"]['Indonesia'] = 'Indonezija';

$GLOBALS["lang"]['Info'] = 'Informacija';

$GLOBALS["lang"]['Informational'] = 'Informacinė informacija';

$GLOBALS["lang"]['initial_size'] = 'Pradinis dydis';

$GLOBALS["lang"]['Initial Size'] = 'Pradinis dydis';

$GLOBALS["lang"]['inode'] = 'Imazgas';

$GLOBALS["lang"]['Inode'] = 'Imazgas';

$GLOBALS["lang"]['Input Type'] = 'Įvesties tipas';

$GLOBALS["lang"]['inputs'] = 'Įvediniai';

$GLOBALS["lang"]['Inputs'] = 'Įvediniai';

$GLOBALS["lang"]['Insane'] = 'Insanas';

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

$GLOBALS["lang"]['installed_by'] = 'Įdiegta';

$GLOBALS["lang"]['Installed By'] = 'Įdiegta';

$GLOBALS["lang"]['installed_on'] = 'Įdiegta';

$GLOBALS["lang"]['Installed On'] = 'Įdiegta';

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

$GLOBALS["lang"]['interface'] = 'Sąsaja';

$GLOBALS["lang"]['Interface'] = 'Sąsaja';

$GLOBALS["lang"]['interface_id'] = 'Sąsajos ID';

$GLOBALS["lang"]['Interface ID'] = 'Sąsajos ID';

$GLOBALS["lang"]['interface_type'] = 'Sąsajos tipas';

$GLOBALS["lang"]['Interface Type'] = 'Sąsajos tipas';

$GLOBALS["lang"]['Internal'] = 'Vidaus';

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

$GLOBALS["lang"]['Italy'] = 'Italija';

$GLOBALS["lang"]['Items not in Baseline'] = 'Straipsniai, neįtraukti į pradinį tyrimą';

$GLOBALS["lang"]['JSON'] = 'JSON';

$GLOBALS["lang"]['JSON to Import'] = 'Importuoti JSON';

$GLOBALS["lang"]['Jamaica'] = 'Jamaika';

$GLOBALS["lang"]['January'] = 'Sausis';

$GLOBALS["lang"]['Japan'] = 'Japonija';

$GLOBALS["lang"]['Jersey'] = 'Džersis';

$GLOBALS["lang"]['Jordan'] = 'Jordanija';

$GLOBALS["lang"]['July'] = 'Liepa';

$GLOBALS["lang"]['June'] = 'Birželis';

$GLOBALS["lang"]['Kazakhstan'] = 'Kazachstanas';

$GLOBALS["lang"]['Kenya'] = 'Kenija';

$GLOBALS["lang"]['kernel_version'] = 'Branduolio versija';

$GLOBALS["lang"]['Kernel Version'] = 'Branduolio versija';

$GLOBALS["lang"]['Key'] = 'Raktas';

$GLOBALS["lang"]['Key Password (optional)'] = 'Pagrindinis slaptažodis (neprivaloma)';

$GLOBALS["lang"]['keys'] = 'Raktai';

$GLOBALS["lang"]['Keys'] = 'Raktai';

$GLOBALS["lang"]['Kiribati'] = 'Kiribatis';

$GLOBALS["lang"]['Korea'] = 'Korėja';

$GLOBALS["lang"]['Kuwait'] = 'Kuveitas';

$GLOBALS["lang"]['Kyrgyz Republic'] = 'Kirgizijos Respublika';

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

$GLOBALS["lang"]['lastModified'] = 'LastModifikuotas';

$GLOBALS["lang"]['LastModified'] = 'LastModifikuotas';

$GLOBALS["lang"]['latitude'] = 'Platuma';

$GLOBALS["lang"]['Latitude'] = 'Platuma';

$GLOBALS["lang"]['Latvia'] = 'Latvija';

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

$GLOBALS["lang"]['level'] = 'Lygis';

$GLOBALS["lang"]['Level'] = 'Lygis';

$GLOBALS["lang"]['Level of privileges needed to exploit (None, Low, High).'] = 'Naudojimosi teisėmis lygis (nėra, žemas, aukštas).';

$GLOBALS["lang"]['Liberia'] = 'Liberija';

$GLOBALS["lang"]['Libyan Arab Jamahiriya'] = 'Libijos Arabų Džamahirija';

$GLOBALS["lang"]['License'] = 'Licencija';

$GLOBALS["lang"]['License Key'] = 'Licencijos raktas';

$GLOBALS["lang"]['License Required'] = 'Reikalinga licencija';

$GLOBALS["lang"]['licenses'] = 'Licencijos';

$GLOBALS["lang"]['Licenses'] = 'Licencijos';

$GLOBALS["lang"]['Liechtenstein'] = 'Lichtenšteinas';

$GLOBALS["lang"]['Like'] = 'Kaip';

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

$GLOBALS["lang"]['List'] = 'Sąrašas';

$GLOBALS["lang"]['list_table_format'] = 'Sąrašo lentelės formatas';

$GLOBALS["lang"]['List Table Format'] = 'Sąrašo lentelės formatas';

$GLOBALS["lang"]['Lithuania'] = 'Lietuva';

$GLOBALS["lang"]['Load Balancing'] = 'Apkrovos balansavimas';

$GLOBALS["lang"]['Local'] = 'Vietinis';

$GLOBALS["lang"]['Local Area Network'] = 'Vietinis tinklas';

$GLOBALS["lang"]['local_port'] = 'Vietinis prievadas';

$GLOBALS["lang"]['Local Port'] = 'Vietinis prievadas';

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

$GLOBALS["lang"]['locations'] = 'Vieta';

$GLOBALS["lang"]['Locations'] = 'Vieta';

$GLOBALS["lang"]['Locations in this'] = 'Vieta';

$GLOBALS["lang"]['log'] = 'Žurnalas';

$GLOBALS["lang"]['Log'] = 'Žurnalas';

$GLOBALS["lang"]['log_format'] = 'Žurnalo formatas';

$GLOBALS["lang"]['Log Format'] = 'Žurnalo formatas';

$GLOBALS["lang"]['log_path'] = 'Žurnalo kelias';

$GLOBALS["lang"]['Log Path'] = 'Žurnalo kelias';

$GLOBALS["lang"]['log_rotation'] = 'Žurnalo pasukimas';

$GLOBALS["lang"]['Log Rotation'] = 'Žurnalo pasukimas';

$GLOBALS["lang"]['log_status'] = 'Žurnalo būsena';

$GLOBALS["lang"]['Log Status'] = 'Žurnalo būsena';

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

$GLOBALS["lang"]['Luxembourg'] = 'Liuksemburgas';

$GLOBALS["lang"]['MAC Address'] = 'MAC adresas';

$GLOBALS["lang"]['MAC Manufacturer'] = 'MAC Gamintojas';

$GLOBALS["lang"]['mac'] = 'Mac';

$GLOBALS["lang"]['Mac'] = 'Mac';

$GLOBALS["lang"]['Mac Address'] = 'Mac adresas';

$GLOBALS["lang"]['MacOS'] = 'MacOS';

$GLOBALS["lang"]['Macao'] = 'Makao';

$GLOBALS["lang"]['Macedonia'] = 'Makedonija';

$GLOBALS["lang"]['Madagascar'] = 'Madagaskaras';

$GLOBALS["lang"]['maintenance_expires'] = 'Išlaikymo trukmė';

$GLOBALS["lang"]['Maintenance Expires'] = 'Išlaikymo trukmė';

$GLOBALS["lang"]['Make My Default Dashboard'] = 'Padaryti numatytąją prietaisų skydelį';

$GLOBALS["lang"]['Make this install a Collector'] = 'Įdiegti kolektorių';

$GLOBALS["lang"]['Malawi'] = 'Malavis';

$GLOBALS["lang"]['Malaysia'] = 'Malaizija';

$GLOBALS["lang"]['Maldives'] = 'Maldyvai';

$GLOBALS["lang"]['Mali'] = 'Malis';

$GLOBALS["lang"]['Malta'] = 'Malta';

$GLOBALS["lang"]['Manage'] = 'Tvarkyti';

$GLOBALS["lang"]['Manage Licenses'] = 'Tvarkyti licencijas';

$GLOBALS["lang"]['Manage in NMIS'] = 'Tvarkyti NMIS';

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

$GLOBALS["lang"]['match_string'] = 'Atitikti eilutę';

$GLOBALS["lang"]['Match String'] = 'Atitikti eilutę';

$GLOBALS["lang"]['Matching Attribute'] = 'Sutampantis atributas';

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

$GLOBALS["lang"]['Mexico'] = 'Meksika';

$GLOBALS["lang"]['Micronesia'] = 'Mikronezija';

$GLOBALS["lang"]['Microsoft Azure Fields'] = 'Microsoft Azure laukai';

$GLOBALS["lang"]['microtime'] = 'Mikrolaikas';

$GLOBALS["lang"]['Microtime'] = 'Mikrolaikas';

$GLOBALS["lang"]['minute'] = 'Minutė';

$GLOBALS["lang"]['Minute'] = 'Minutė';

$GLOBALS["lang"]['Minutes Since last Audit are Greater than'] = 'Protokolas Nuo paskutinio audito yra didesnis nei';

$GLOBALS["lang"]['model'] = 'Pavyzdys';

$GLOBALS["lang"]['Model'] = 'Pavyzdys';

$GLOBALS["lang"]['model_family'] = 'Modelis Šeima';

$GLOBALS["lang"]['Model Family'] = 'Modelis Šeima';

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

$GLOBALS["lang"]['Montenegro'] = 'Juodkalnija';

$GLOBALS["lang"]['month'] = 'Mėnuo';

$GLOBALS["lang"]['Month'] = 'Mėnuo';

$GLOBALS["lang"]['Montserrat'] = 'Montseratas';

$GLOBALS["lang"]['Morocco'] = 'Marokas';

$GLOBALS["lang"]['motherboard'] = 'Motherboard';

$GLOBALS["lang"]['Motherboard'] = 'Motherboard';

$GLOBALS["lang"]['mount_point'] = 'Montavimo taškas';

$GLOBALS["lang"]['Mount Point'] = 'Montavimo taškas';

$GLOBALS["lang"]['mount_type'] = 'Montavimo tipas';

$GLOBALS["lang"]['Mount Type'] = 'Montavimo tipas';

$GLOBALS["lang"]['Mozambique'] = 'Mozambikas';

$GLOBALS["lang"]['Must Respond to Ping'] = 'Turi reaguoti į Ping';

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

$GLOBALS["lang"]['NOTE - You can prevent plain text credentials being displayed below by setting the configuration item for <code>decrypt_credentials</code> to <code>n</code>.'] = 'PASTABA - Jūs galite neleisti, kad žemiau būtų rodomi paprasto teksto požymiai nustatydami konfigūracijos elementą <code>decrypt_credentials</code> iki <code>n</code>.';

$GLOBALS["lang"]['name'] = 'Pavadinimas';

$GLOBALS["lang"]['Name'] = 'Pavadinimas';

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

$GLOBALS["lang"]['Network'] = 'Tinklas';

$GLOBALS["lang"]['network_address'] = 'Tinklo adresas';

$GLOBALS["lang"]['Network Address'] = 'Tinklo adresas';

$GLOBALS["lang"]['network_domain'] = 'Tinklo sritis';

$GLOBALS["lang"]['Network Domain'] = 'Tinklo sritis';

$GLOBALS["lang"]['Network Types'] = 'Tinklo tipai';

$GLOBALS["lang"]['networks'] = 'Tinklai';

$GLOBALS["lang"]['Networks'] = 'Tinklai';

$GLOBALS["lang"]['Networks Generated By'] = 'Tinklai, generuojami';

$GLOBALS["lang"]['Networks using a CIDR Mask of'] = 'Tinklai, naudojantys CIDR kaukę';

$GLOBALS["lang"]['New Building Name'] = 'Naujas pastato pavadinimas';

$GLOBALS["lang"]['New Caledonia'] = 'Naujoji Kaledonija';

$GLOBALS["lang"]['New Floor Name'] = '@ info: whatsthis';

$GLOBALS["lang"]['New Room Name'] = 'Naujas kambario pavadinimas';

$GLOBALS["lang"]['New Row Name'] = 'Naujos eilutės pavadinimas';

$GLOBALS["lang"]['New Zealand'] = 'Naujoji Zelandija';

$GLOBALS["lang"]['News'] = 'Naujienos';

$GLOBALS["lang"]['next_hop'] = 'Kitas etapas';

$GLOBALS["lang"]['Next Hop'] = 'Kitas etapas';

$GLOBALS["lang"]['next_run'] = 'Kitas vykdymas';

$GLOBALS["lang"]['Next Run'] = 'Kitas vykdymas';

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

$GLOBALS["lang"]['Node'] = 'Mazgas';

$GLOBALS["lang"]['None'] = 'Nėra';

$GLOBALS["lang"]['Norfolk Island'] = 'Norfolko sala';

$GLOBALS["lang"]['Normal'] = 'Normalus';

$GLOBALS["lang"]['Northern Mariana Islands'] = 'Marianos šiaurinės Salos';

$GLOBALS["lang"]['Norway'] = 'Norvegija';

$GLOBALS["lang"]['Not Applicable'] = 'Netaikoma';

$GLOBALS["lang"]['Not Checked'] = 'Netikrinta';

$GLOBALS["lang"]['Not Equals'] = 'Ne vienodos';

$GLOBALS["lang"]['Not In'] = 'Ne';

$GLOBALS["lang"]['Not Like'] = 'Ne';

$GLOBALS["lang"]['Not Set'] = 'Nenustatyta';

$GLOBALS["lang"]['Not normally used. If set, this requires the device to have an open port (as per Scan Options) to be considered responding. A MAC address, arp response or ping response is not considered sufficient to be considered responding. Useful if a router or firewall between the Open-AudIT server and target IP is responding to port scans on the IPs behalf.'] = 'Įprastai nenaudojama. Jei nustatyta, tai reikalauja, kad įrenginys turėtų atvirą prievadą (kaip per Scan Options), kad būtų laikomas atsakingu. Laikoma, kad MAC adreso, arp atsako ar ping atsako nepakanka, kad būtų galima manyti, jog jis yra veiksmingas. Naudinga, jei maršrutizatorius arba ugniasienė tarp Open- AudIT serverio ir tikslinės IP reaguoja į uosto nuskaito IP vardu.';

$GLOBALS["lang"]['Note'] = 'Pastaba';

$GLOBALS["lang"]['Note - Selecting a parent will automatically provide access to its children (although it wont be shown here).'] = 'Pastaba - Tėvų pasirinkimas automatiškai suteiks priėjimą prie savo vaikų (nors jis bus rodomas čia).';

$GLOBALS["lang"]['Notes'] = 'Pastabos';

$GLOBALS["lang"]['notes'] = 'Pastabos';

$GLOBALS["lang"]['Notice'] = 'Pranešimas';

$GLOBALS["lang"]['notin'] = 'Notinas';

$GLOBALS["lang"]['Notin'] = 'Notinas';

$GLOBALS["lang"]['November'] = 'Lapkritis';

$GLOBALS["lang"]['nvd_json'] = 'Nvd Json';

$GLOBALS["lang"]['Nvd Json'] = 'Nvd Json';

$GLOBALS["lang"]['ORDER BY'] = 'NUTARTIS';

$GLOBALS["lang"]['OS'] = 'BI';

$GLOBALS["lang"]['OS Families'] = 'OS šeimos';

$GLOBALS["lang"]['OS Family'] = 'OS Šeima';

$GLOBALS["lang"]['OS Group'] = 'OS grupė';

$GLOBALS["lang"]['oae_manage'] = 'Obuolių tvarkymas';

$GLOBALS["lang"]['Oae Manage'] = 'Obuolių tvarkymas';

$GLOBALS["lang"]['object_ident'] = 'Objekto Identas';

$GLOBALS["lang"]['Object Ident'] = 'Objekto Identas';

$GLOBALS["lang"]['October'] = 'Spalis';

$GLOBALS["lang"]['Oman'] = 'Omanas';

$GLOBALS["lang"]['omk_uuid'] = 'Omk Uuid';

$GLOBALS["lang"]['Omk Uuid'] = 'Omk Uuid';

$GLOBALS["lang"]['On'] = 'Įjungta';

$GLOBALS["lang"]['One of <code>3x2</code>, <code>4x2</code>, <code>4x3</code> or <code>4x4</code>.'] = 'Vienas iš <code>3x2</code>, <code>4x2</code>, <code>4x3</code> arba <code>4x4</code>.';

$GLOBALS["lang"]['One of Campus Area Network, Cloud Network, Enterprise Private Network, Home Area Network, Local Area Network, Metropolitan Area Network, Passive Optical Local Area Network, Personal Area Network, Storage-Area Network, System-Area Network, Virtual Private Network, Wide Area Network, Wireless Local Area Network.'] = 'Vienas iš Campus Area Network, Cloud Network, Įmonių privatus tinklas, Pagrindinis Area Network, Metropolitan Area Network, Passive Optical Area Network, Passive Optical Area Network, Personal Area Network, Storage- Area Network, Virtualus Private Network, Wide Local Area Network.';

$GLOBALS["lang"]['One of Development, Disaster Recovery, Evaluation, Pre-Production, Production, Testing, Training, User Acceptance Testing'] = 'Vienas iš plėtros, Nelaimių atkūrimo, Įvertinimas, Išankstinė gamyba, Gamyba, Testavimas, Mokymas, Vartotojo Priėmimas Testavimas';

$GLOBALS["lang"]['One of allocated, delegated, planning, reserved, unallocated, unknown, unmanaged. Defaults to allocated.'] = 'Vienas iš paskirtų, deleguotų, suplanuotų, rezervuotų, nepaskirstytų, nežinomų, nesuvaldytų. Skirtinų įsipareigojimų neįvykdymo atvejų.';

$GLOBALS["lang"]['One of either <code>active directory</code> or <code>openldap</code>.'] = 'Vienas iš šių <code>active directory</code> arba <code>openldap</code>.';

$GLOBALS["lang"]['One of: antivirus, backup, firewall, approved, banned, ignored or other.'] = 'Vienas iš jų: antivirusinis, atsarginis, ugniasienė, patvirtintas, uždraustas, ignoruojamas ar kitas.';

$GLOBALS["lang"]['Online Documentation'] = 'Dokumentacija internete';

$GLOBALS["lang"]['Open-AudIT'] = 'Open- AudIT';

$GLOBALS["lang"]['Open-AudIT Community'] = 'Open- AudIT bendruomenė';

$GLOBALS["lang"]['Open-AudIT Device Selection'] = 'Open- AudIT įrenginio pasirinkimas';

$GLOBALS["lang"]['Open-AudIT Enterprise'] = 'Open- AudIT Enterprise';

$GLOBALS["lang"]['Open-AudIT Enterprise. High-scale flexible discovery and audit solution for large networks. All the features of Professional plus: Baselines, File Auditing, Cloud Discovery, Rack Management, Configurable Role Based Access Control including Active Directory and LDAP.'] = 'AudIT Enterprise. Didelio masto lankstus didelių tinklų paieškos ir audito sprendimas. Visos Profesionalus plius funkcijos: Pagrindai, Failų Auditing, Debesis Discovery, Rack Management, Konfigūruojamas vaidmuo pagrįstas prieigos kontrolė, įskaitant Active Directory ir LDAP.';

$GLOBALS["lang"]['Open-AudIT Field Name'] = 'Open- AudIT lauko pavadinimas';

$GLOBALS["lang"]['Open-AudIT Licenses'] = 'Open- Audit Licences';

$GLOBALS["lang"]['Open-AudIT Options'] = 'Open- AudIT parinktys';

$GLOBALS["lang"]['Open-AudIT Professional'] = 'Open- AudIT Professional';

$GLOBALS["lang"]['Open-AudIT Professional. The world\\'] = 'Open- AudIT Professional. Pasaulis\\';

$GLOBALS["lang"]['Open-AudIT and Nmap'] = 'Open- AudIT ir Nmap';

$GLOBALS["lang"]['OpenScap is Installed'] = 'Įdiegtas OpenScap';

$GLOBALS["lang"]['openldap_user_dn'] = 'Openldap Naudotojas Dn';

$GLOBALS["lang"]['Openldap User Dn'] = 'Openldap Naudotojas Dn';

$GLOBALS["lang"]['openldap_user_membership_attribute'] = 'Openldap naudotojo narystės atributas';

$GLOBALS["lang"]['Openldap User Membership Attribute'] = 'Openldap naudotojo narystės atributas';

$GLOBALS["lang"]['open|filtered'] = 'Atvira 124; filtruota';

$GLOBALS["lang"]['Open|filtered'] = 'Atvira 124; filtruota';

$GLOBALS["lang"]['Operating System'] = 'Operacinė sistema';

$GLOBALS["lang"]['Operating System Family Contains'] = 'Operacinės sistemos šeimoje yra';

$GLOBALS["lang"]['Operating Systems'] = 'Veikimo sistemos';

$GLOBALS["lang"]['optical'] = 'Optiniai';

$GLOBALS["lang"]['Optical'] = 'Optiniai';

$GLOBALS["lang"]['Optimized'] = 'Optimizuotas';

$GLOBALS["lang"]['Optional version as audited by Open-AudIT. Use the percent sign % as a wildcard.'] = 'Neprivaloma versija, kurią auditavo Open- AudIT. Naudoti procentinį ženklą% kaip laukinę kortelę.';

$GLOBALS["lang"]['options'] = 'Parinktys';

$GLOBALS["lang"]['Options'] = 'Parinktys';

$GLOBALS["lang"]['Or select from the below fields.'] = 'Arba pasirinkite iš žemiau esančių laukelių.';

$GLOBALS["lang"]['org_descendants'] = 'Org klausytojai';

$GLOBALS["lang"]['Org Descendants'] = 'Org klausytojai';

$GLOBALS["lang"]['org_id'] = 'Org ID';

$GLOBALS["lang"]['Org ID'] = 'Org ID';

$GLOBALS["lang"]['Organisation'] = 'Organizacija';

$GLOBALS["lang"]['organisation'] = 'Organizacija';

$GLOBALS["lang"]['Organisation Descendants'] = 'Organizacijos subjektai';

$GLOBALS["lang"]['Organisations'] = 'Organizacijos';

$GLOBALS["lang"]['orgs'] = 'Orgai';

$GLOBALS["lang"]['Orgs'] = 'Orgai';

$GLOBALS["lang"]['Orgs Name'] = 'Orgų pavadinimas';

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

$GLOBALS["lang"]['Others'] = 'Kita';

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

$GLOBALS["lang"]['PHP'] = 'PHP';

$GLOBALS["lang"]['POD'] = 'POD';

$GLOBALS["lang"]['Package'] = 'Paketas';

$GLOBALS["lang"]['packages'] = 'Pakuotės';

$GLOBALS["lang"]['Packages'] = 'Pakuotės';

$GLOBALS["lang"]['pagefile'] = 'Puslapio failas';

$GLOBALS["lang"]['Pagefile'] = 'Puslapio failas';

$GLOBALS["lang"]['Pakistan'] = 'Pakistanas';

$GLOBALS["lang"]['Palau'] = 'Palau';

$GLOBALS["lang"]['Palestinian Territory'] = 'Palestinos teritorija';

$GLOBALS["lang"]['Panama'] = 'Panama';

$GLOBALS["lang"]['Papua New Guinea'] = 'Papua Naujoji Gvinėja';

$GLOBALS["lang"]['Paraguay'] = 'Paragvajus';

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

$GLOBALS["lang"]['permission'] = 'Leidimas';

$GLOBALS["lang"]['Permission'] = 'Leidimas';

$GLOBALS["lang"]['permissions'] = 'Leidimai';

$GLOBALS["lang"]['Permissions'] = 'Leidimai';

$GLOBALS["lang"]['Personal Area Network'] = 'Asmeninės erdvės tinklas';

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

$GLOBALS["lang"]['ping'] = 'Ping';

$GLOBALS["lang"]['Ping'] = 'Ping';

$GLOBALS["lang"]['Pitcairn Islands'] = 'Pitkerno salos';

$GLOBALS["lang"]['placement'] = 'Vieta';

$GLOBALS["lang"]['Placement'] = 'Vieta';

$GLOBALS["lang"]['Please have an Open-AudIT administrator logon and upgrade the database.'] = 'Prašome turėti Open- AudIT administratoriaus logotipą ir atnaujinti duomenų bazę.';

$GLOBALS["lang"]['Please note that the select box will override the text input box.'] = 'Atkreipkite dėmesį, kad pažymėtasis langelis bus virš teksto įvesties laukelio.';

$GLOBALS["lang"]['Please set using'] = 'Prašome nustatyti naudojant';

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

$GLOBALS["lang"]['Polite'] = 'Politas';

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

$GLOBALS["lang"]['position'] = 'Padėtis';

$GLOBALS["lang"]['Position'] = 'Padėtis';

$GLOBALS["lang"]['postcode'] = 'Pašto kodas';

$GLOBALS["lang"]['Postcode'] = 'Pašto kodas';

$GLOBALS["lang"]['power_circuit'] = 'Galios grandinė';

$GLOBALS["lang"]['Power Circuit'] = 'Galios grandinė';

$GLOBALS["lang"]['power_sockets'] = 'Maitinimo lizdai';

$GLOBALS["lang"]['Power Sockets'] = 'Maitinimo lizdai';

$GLOBALS["lang"]['Predictable'] = 'Numatomas';

$GLOBALS["lang"]['Preferences'] = 'Nustatymai';

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

$GLOBALS["lang"]['profile'] = 'Profilis';

$GLOBALS["lang"]['Profile'] = 'Profilis';

$GLOBALS["lang"]['program'] = 'Programa';

$GLOBALS["lang"]['Program'] = 'Programa';

$GLOBALS["lang"]['protocol'] = 'Protokolas';

$GLOBALS["lang"]['Protocol'] = 'Protokolas';

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

$GLOBALS["lang"]['Query'] = 'Užklausa';

$GLOBALS["lang"]['queue'] = 'Eilutė';

$GLOBALS["lang"]['Queue'] = 'Eilutė';

$GLOBALS["lang"]['Queue Limit'] = 'Eilutės riba';

$GLOBALS["lang"]['Queued Device Audits'] = 'Eilėje esančių įrenginių auditas';

$GLOBALS["lang"]['Queued IP Scans'] = 'Queued IP skenavimas';

$GLOBALS["lang"]['Queued Items'] = 'Eilutė';

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

$GLOBALS["lang"]['Red Query'] = 'Raudona užklausa';

$GLOBALS["lang"]['Redirect URI'] = 'Grąžinti URI';

$GLOBALS["lang"]['redirect_uri'] = 'Nukreipti Uri';

$GLOBALS["lang"]['Redirect Uri'] = 'Nukreipti Uri';

$GLOBALS["lang"]['references'] = 'Nuorodos';

$GLOBALS["lang"]['References'] = 'Nuorodos';

$GLOBALS["lang"]['region'] = 'Regionas';

$GLOBALS["lang"]['Region'] = 'Regionas';

$GLOBALS["lang"]['registered_user'] = 'Registruotas naudotojas';

$GLOBALS["lang"]['Registered User'] = 'Registruotas naudotojas';

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

$GLOBALS["lang"]['Report'] = 'Ataskaita';

$GLOBALS["lang"]['Report on your devices, networks and more'] = 'Praneškite apie savo įrenginius, tinklus ir daugiau';

$GLOBALS["lang"]['reportable'] = 'Praneština';

$GLOBALS["lang"]['Reportable'] = 'Praneština';

$GLOBALS["lang"]['Reports'] = 'Ataskaitos';

$GLOBALS["lang"]['request'] = 'Prašymas';

$GLOBALS["lang"]['Request'] = 'Prašymas';

$GLOBALS["lang"]['Request a Specific CVE'] = 'Prašyti specialaus CVE';

$GLOBALS["lang"]['requested'] = 'Prašyta';

$GLOBALS["lang"]['Requested'] = 'Prašyta';

$GLOBALS["lang"]['require_port'] = 'Reikalauti uosto';

$GLOBALS["lang"]['Require Port'] = 'Reikalauti uosto';

$GLOBALS["lang"]['Require an Open Port'] = 'Reikalauti atidaryti prievadą';

$GLOBALS["lang"]['Required'] = 'Reikalinga';

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

$GLOBALS["lang"]['Results'] = 'Rezultatai';

$GLOBALS["lang"]['retrieved'] = 'Retrieted';

$GLOBALS["lang"]['Retrieved'] = 'Retrieted';

$GLOBALS["lang"]['retrieved_ident'] = 'Retrieved Ident';

$GLOBALS["lang"]['Retrieved Ident'] = 'Retrieved Ident';

$GLOBALS["lang"]['retrieved_name'] = 'Persiųstas pavadinimas';

$GLOBALS["lang"]['Retrieved Name'] = 'Persiųstas pavadinimas';

$GLOBALS["lang"]['Retrieved from the device - Windows:Win32_ComputerSystemProduct, Linux:dmidecode, MacOS:system_profiler, ESXi:vim-cmd hostsvc/hostsummary, HP-UX:machinfo, Solaris:smbios, AIX:uname.'] = 'Retrieved from the device - Windows: Win32 _ ComputerSystemProduct, Linux: dmidecode, MacOS: system _ profiler, ESXi: vim-cmd hostsvc / hostsummary, HP-UX: machinfo, Solaris: smbios, AIX: uname.';

$GLOBALS["lang"]['Reunion'] = 'Reunjonas';

$GLOBALS["lang"]['revision'] = 'Persvarstymas';

$GLOBALS["lang"]['Revision'] = 'Persvarstymas';

$GLOBALS["lang"]['risk_assesment_result'] = 'Rizikos vertinimo rezultatas';

$GLOBALS["lang"]['Risk Assesment Result'] = 'Rizikos vertinimo rezultatas';

$GLOBALS["lang"]['role'] = 'Vaidmuo';

$GLOBALS["lang"]['Role'] = 'Vaidmuo';

$GLOBALS["lang"]['roles'] = 'Vaidmenys';

$GLOBALS["lang"]['Roles'] = 'Vaidmenys';

$GLOBALS["lang"]['Romania'] = 'Rumunija';

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

$GLOBALS["lang"]['Run Discovery'] = 'Vykdyti paiešką';

$GLOBALS["lang"]['Run Discovery on Devices'] = 'Paleisti paieškos įrenginius';

$GLOBALS["lang"]['Run a discovery and find out <b>Whats On Your Network?</b>'] = 'Vykdyti atradimą ir sužinoti <b>Kas jūsų tinkle?</b>';

$GLOBALS["lang"]['Run this Command'] = 'Vykdyti šią komandą';

$GLOBALS["lang"]['runas'] = 'Runos';

$GLOBALS["lang"]['Runas'] = 'Runos';

$GLOBALS["lang"]['Running Open-AudIT Apache Service Under Windows'] = 'Vykdoma Open- AudIT Apache paslauga po Windows';

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

$GLOBALS["lang"]['Save as Default'] = 'Įrašyti kaip numatytąjį';

$GLOBALS["lang"]['scaling'] = 'Mastelis';

$GLOBALS["lang"]['Scaling'] = 'Mastelis';

$GLOBALS["lang"]['scan_options'] = 'Skaitymo parinktys';

$GLOBALS["lang"]['Scan Options'] = 'Skaitymo parinktys';

$GLOBALS["lang"]['Scan Options ID'] = 'Skaityti parinktis ID';

$GLOBALS["lang"]['Scan the Nmap top number of TCP ports.'] = 'Skaityti Nmap viršų numerį TCP uostų.';

$GLOBALS["lang"]['Scan the Nmap top number of UDP ports.'] = 'Skaityti Nmap viršutinį UDP prievadų skaičių.';

$GLOBALS["lang"]['schedule'] = 'Tvarkaraštis';

$GLOBALS["lang"]['Schedule'] = 'Tvarkaraštis';

$GLOBALS["lang"]['scope'] = 'Taikymo sritis';

$GLOBALS["lang"]['Scope'] = 'Taikymo sritis';

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

$GLOBALS["lang"]['Search for Device'] = 'Ieškoti įrenginio';

$GLOBALS["lang"]['Searching Using DataTables'] = 'Ieškoma duomenų lentelių';

$GLOBALS["lang"]['secondary'] = 'Antrinis';

$GLOBALS["lang"]['Secondary'] = 'Antrinis';

$GLOBALS["lang"]['Secondary Text'] = 'Antrinis tekstas';

$GLOBALS["lang"]['section'] = 'Skirsnis';

$GLOBALS["lang"]['Section'] = 'Skirsnis';

$GLOBALS["lang"]['secure'] = 'Saugi';

$GLOBALS["lang"]['Secure'] = 'Saugi';

$GLOBALS["lang"]['Security Name'] = 'Saugumo pavadinimas';

$GLOBALS["lang"]['Security Status'] = 'Saugumo statusas';

$GLOBALS["lang"]['security_zone'] = 'Apsaugos zona';

$GLOBALS["lang"]['Security Zone'] = 'Apsaugos zona';

$GLOBALS["lang"]['seed_ip'] = 'Sėklos IP';

$GLOBALS["lang"]['Seed IP'] = 'Sėklos IP';

$GLOBALS["lang"]['seed_ping'] = 'Sėklinė sėklinė kurapka';

$GLOBALS["lang"]['Seed Ping'] = 'Sėklinė sėklinė kurapka';

$GLOBALS["lang"]['seed_restrict_to_private'] = 'Sėklos griežtumas privačiam';

$GLOBALS["lang"]['Seed Restrict To Private'] = 'Sėklos griežtumas privačiam';

$GLOBALS["lang"]['seed_restrict_to_subnet'] = 'Sėklos suvaržymas Subtinklui';

$GLOBALS["lang"]['Seed Restrict To Subnet'] = 'Sėklos suvaržymas Subtinklui';

$GLOBALS["lang"]['Select'] = 'Pasirinkti';

$GLOBALS["lang"]['Select All'] = 'Pažymėti viską';

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

$GLOBALS["lang"]['Select a Table'] = 'Pasirinkite lentelę';

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

$GLOBALS["lang"]['service_version'] = 'Paslaugos versija';

$GLOBALS["lang"]['Service Version'] = 'Paslaugos versija';

$GLOBALS["lang"]['Set'] = 'Nustatyti';

$GLOBALS["lang"]['set_by'] = 'Nustatyti pagal';

$GLOBALS["lang"]['Set By'] = 'Nustatyti pagal';

$GLOBALS["lang"]['Set the size (normal or compact) of the tables on the List screens.'] = 'Nustatykite lentelių dydį (įprastas arba kompaktiškas) sąrašo ekranuose.';

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

$GLOBALS["lang"]['short'] = 'Trumpas';

$GLOBALS["lang"]['Short'] = 'Trumpas';

$GLOBALS["lang"]['Should I remove all non-current data from this device?'] = 'Ar turėčiau pašalinti visus neaktualius duomenis iš šio įrenginio?';

$GLOBALS["lang"]['Should this file (or pattern) be used to exclude files from being reported. Normally, to audit files, this is set to <code>y</code>.'] = 'Ar šis failas (arba šablonas) turėtų būti naudojamas, kad nebūtų pranešama apie failus. Paprastai, audito failus, tai yra nustatyta <code>y</code>.';

$GLOBALS["lang"]['Should this vendor be used when retrieving vulnerabilities from FirstWave.'] = 'Jeigu šis pardavėjas būtų naudojamas iš FirstWave gaunant pažeidžiamumą.';

$GLOBALS["lang"]['Should we add devices from the remote service, locally.'] = 'Ar turėtume pridėti įrenginius iš nuotolinės paslaugos, lokaliai.';

$GLOBALS["lang"]['Should we apply this license to the selected Org as well as the Orgs children?'] = 'Ar turėtume taikyti šią licenciją pasirinktam Orgui, taip pat Orgų vaikams?';

$GLOBALS["lang"]['Should we consider a filtered port to be an open port - and therefore flag this IP as having a device attached?'] = 'Ar turėtume laikyti filtruotą prievadą atviru prievadu, todėl pažymėkite šį IP kaip turintį įrenginį?';

$GLOBALS["lang"]['Should we consider an open|filtered port to be an open port - and therefore flag this IP as having a device attached?'] = 'Ar turėtume laikyti atvirą 124; filtruotą prievadą atviru prievadu, todėl pažymėkite šį IP kaip turintį įrenginį?';

$GLOBALS["lang"]['Should we expose this group in the web interface.'] = 'Ar turėtume atskleisti šią grupę žiniatinklio sąsajoje.';

$GLOBALS["lang"]['Should we expose this query in the list of reports under the Report menu in the web interface.'] = 'Jei mes atskleisti šį klausimą ataskaitų sąrašą pagal ataskaitą meniu Web sąsaja.';

$GLOBALS["lang"]['Should we expose this query in the list of reports under the Reports menu in the web interface.'] = 'Jei mes atskleisti šį klausimą ataskaitų sąrašą pagal ataskaitų meniu Web sąsaja.';

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

$GLOBALS["lang"]['Should we run an audit and submit it (y/n).'] = 'Ar turėtume atlikti auditą ir jį pateikti (y / n).';

$GLOBALS["lang"]['Should we test for SNMP using UDP port 161.'] = 'Ar turėtume išbandyti SNMP naudodami UDP 161 prievadą.';

$GLOBALS["lang"]['Should we test for SSH using TCP port 22.'] = 'Ar turėtume išbandyti SSH naudojant TCP prievadą 22.';

$GLOBALS["lang"]['Should we test for WMI using TCP port 135.'] = 'Turėtume išbandyti WMI naudodami TCP 135 prievadą.';

$GLOBALS["lang"]['Should we uninstall the agent (y/n).'] = 'Ar turėtume pašalinti agentą (y / n).';

$GLOBALS["lang"]['Should we use this method to authenticate user credentials. Set to <code>y</code> or <code>n</code>.'] = 'Ar turėtume naudoti šį metodą, kad patvirtintume naudotojo tapatybę. Nustatyti į <code>y</code> arba <code>n</code>.';

$GLOBALS["lang"]['Should we use this method to populate a users roles. The field <code>use_auth</code> must be set to <code>y</code> to use this. Set to <code>y</code> or <code>n</code>.'] = 'Ar mes turėtume naudoti šį metodą populate vartotojų vaidmenis. Laukelis <code>use_auth</code> turi būti nustatyta: <code>y</code> naudoti tai. Nustatyti į <code>y</code> arba <code>n</code>.';

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

$GLOBALS["lang"]['Slovakia (Slovak Republic)'] = 'Slovakija (Slovakija)';

$GLOBALS["lang"]['Slovenia'] = 'Slovėnija';

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

$GLOBALS["lang"]['socket'] = 'Lizdas';

$GLOBALS["lang"]['Socket'] = 'Lizdas';

$GLOBALS["lang"]['software'] = 'Programinė įranga';

$GLOBALS["lang"]['Software'] = 'Programinė įranga';

$GLOBALS["lang"]['Software Found Last 7 Days'] = 'Programinė įranga Rasta Paskutinės 7 dienos';

$GLOBALS["lang"]['Software Found Today'] = 'Programinė įranga Rasta šiandien';

$GLOBALS["lang"]['Software Found Yesterday'] = 'Programinė įranga Rasta vakar';

$GLOBALS["lang"]['software_key'] = 'Programinės įrangos raktas';

$GLOBALS["lang"]['Software Key'] = 'Programinės įrangos raktas';

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

$GLOBALS["lang"]['started_date'] = 'Pradedama data';

$GLOBALS["lang"]['Started Date'] = 'Pradedama data';

$GLOBALS["lang"]['state'] = 'Būsena';

$GLOBALS["lang"]['State'] = 'Būsena';

$GLOBALS["lang"]['Stats'] = 'Stotys';

$GLOBALS["lang"]['status'] = 'Būsena';

$GLOBALS["lang"]['Status'] = 'Būsena';

$GLOBALS["lang"]['Storage'] = 'Laikymas';

$GLOBALS["lang"]['storage_count'] = 'Saugyklų skaičius';

$GLOBALS["lang"]['Storage Count'] = 'Saugyklų skaičius';

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

$GLOBALS["lang"]['Submitted From'] = 'Pateikta iš';

$GLOBALS["lang"]['subnet'] = 'Subtinklas';

$GLOBALS["lang"]['Subnet'] = 'Subtinklas';

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

$GLOBALS["lang"]['Summary'] = 'Santrauka';

$GLOBALS["lang"]['Sunday'] = 'Sekmadienis';

$GLOBALS["lang"]['supplier'] = 'Tiekėjas';

$GLOBALS["lang"]['Supplier'] = 'Tiekėjas';

$GLOBALS["lang"]['Support'] = 'Parama';

$GLOBALS["lang"]['Supported types are <code>subnet</code>, <code>seed</code> and <code>active directory</code>.'] = 'Palaikomi tipai: <code>subnet</code>, <code>seed</code> ir <code>active directory</code>.';

$GLOBALS["lang"]['Suriname'] = 'Surinamas';

$GLOBALS["lang"]['Svalbard & Jan Mayen Islands'] = 'Svalbard & Jan Mayen salos';

$GLOBALS["lang"]['Swaziland'] = 'Svazilandas';

$GLOBALS["lang"]['Sweden'] = 'Švedija';

$GLOBALS["lang"]['switch_device_id'] = 'Perjungti įrenginio ID';

$GLOBALS["lang"]['Switch Device ID'] = 'Perjungti įrenginio ID';

$GLOBALS["lang"]['switch_port'] = 'Perjungti prievadą';

$GLOBALS["lang"]['Switch Port'] = 'Perjungti prievadą';

$GLOBALS["lang"]['Switzerland, Swiss Confederation'] = 'Šveicarija, Šveicarijos Konfederacija';

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

$GLOBALS["lang"]['table'] = 'Lentelė';

$GLOBALS["lang"]['Table'] = 'Lentelė';

$GLOBALS["lang"]['tag'] = 'Žyma';

$GLOBALS["lang"]['Tag'] = 'Žyma';

$GLOBALS["lang"]['tag_1'] = '1 žyma';

$GLOBALS["lang"]['Tag 1'] = '1 žyma';

$GLOBALS["lang"]['tag_2'] = '2 žyma';

$GLOBALS["lang"]['Tag 2'] = '2 žyma';

$GLOBALS["lang"]['tag_3'] = '3 žyma';

$GLOBALS["lang"]['Tag 3'] = '3 žyma';

$GLOBALS["lang"]['tags'] = 'Žymos';

$GLOBALS["lang"]['Tags'] = 'Žymos';

$GLOBALS["lang"]['Tags :: '] = 'Žymos: ';

$GLOBALS["lang"]['Taiwan'] = 'Taivanas';

$GLOBALS["lang"]['Tajikistan'] = 'Tadžikistanas';

$GLOBALS["lang"]['Tanzania'] = 'Tanzanija';

$GLOBALS["lang"]['task'] = 'Užduotis';

$GLOBALS["lang"]['Task'] = 'Užduotis';

$GLOBALS["lang"]['tasks'] = 'Užduotys';

$GLOBALS["lang"]['Tasks'] = 'Užduotys';

$GLOBALS["lang"]['tcp_ports'] = 'Tcp prievadai';

$GLOBALS["lang"]['Tcp Ports'] = 'Tcp prievadai';

$GLOBALS["lang"]['tenant'] = 'Nuomininkas';

$GLOBALS["lang"]['Tenant'] = 'Nuomininkas';

$GLOBALS["lang"]['ternary'] = 'Pabaisa';

$GLOBALS["lang"]['Ternary'] = 'Pabaisa';

$GLOBALS["lang"]['Test 1'] = '1 bandymas';

$GLOBALS["lang"]['Test 2'] = '2 bandymas';

$GLOBALS["lang"]['Test 3'] = '3 bandymas';

$GLOBALS["lang"]['test_minutes'] = 'Bandymo protokolas';

$GLOBALS["lang"]['Test Minutes'] = 'Bandymo protokolas';

$GLOBALS["lang"]['test_os'] = 'Bandymo O';

$GLOBALS["lang"]['Test Os'] = 'Bandymo O';

$GLOBALS["lang"]['test_subnet'] = 'Bandymo posistemis';

$GLOBALS["lang"]['Test Subnet'] = 'Bandymo posistemis';

$GLOBALS["lang"]['tests'] = 'Bandymai';

$GLOBALS["lang"]['Tests'] = 'Bandymai';

$GLOBALS["lang"]['Text'] = 'Tekstas';

$GLOBALS["lang"]['Thailand'] = 'Tailandas';

$GLOBALS["lang"]['The Active Directory domain to retrieve a list of subnets from.'] = 'Active Directory domenas, iš kurio gauti potinklių sąrašą.';

$GLOBALS["lang"]['The Active Directory server to retrieve a list of subnets from.'] = 'Active Directory serveris, iš kurio galima gauti potinklių sąrašą.';

$GLOBALS["lang"]['The Automatable metric captures the answer to the question <strong>Can an attacker automate exploitation events for this vulnerability across multiple targets?</strong> based on steps 1-4 of the kill chain. These steps are reconnaissance, weaponization, delivery, and exploitation (Not Defined, No, Yes).'] = 'Automatinis metrinis fiksuoja atsakymą į klausimą <strong>Ar užpuolikas gali automatizuoti išnaudojimo įvykius dėl šio pažeidžiamumo daugelyje tikslų?</strong> remiantis 1-4 žingsniais žudymo grandinėje. Šie žingsniai yra žvalgyba, ginklavimas, pristatymas, ir išnaudojimas (Neapibrėžta, Ne, Taip).';

$GLOBALS["lang"]['The CVE identifier.'] = 'CVE identifikatorius.';

$GLOBALS["lang"]['The Cloud that owns this item. Links to <code>clouds.id</code>.'] = 'Debesis, kuriam priklauso šis daiktas. Nuorodos į <code>clouds.id</code>.';

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

$GLOBALS["lang"]['The ISP or Telco providing this link.'] = 'IPT arba Telco teikia šią nuorodą.';

$GLOBALS["lang"]['The JSON record from Mitre.'] = 'JSON įrašas iš Mitro.';

$GLOBALS["lang"]['The JSON record from the NVD feed.'] = 'JSON rekordas iš NVD.';

$GLOBALS["lang"]['The LDAP OU of this user (if LDAP is used).'] = 'Šio naudotojo LDAP OU (jei naudojamas LDAP).';

$GLOBALS["lang"]['The Location that contains this network. Links to <code>locations.id</code>.'] = 'Vieta, kurioje yra šis tinklas. Nuorodos į <code>locations.id</code>.';

$GLOBALS["lang"]['The NVD assigned base status.'] = 'NVD priskirtas pagrindinis statusas.';

$GLOBALS["lang"]['The Nmap timing preset.'] = 'Nmap laiko nustatymas.';

$GLOBALS["lang"]['The OS this package should be reported against. Blank for all. Use the percent sign % as a wildcard. Will be tested against os_group, os_family and os_name in that order.'] = 'Prieš BI šią pakuotę reikia nurodyti. Tuščias visiems. Naudoti procentinį ženklą% kaip laukinę kortelę. Bus išbandyta prieš os _ group, os _ family ir os _ name tokia tvarka.';

$GLOBALS["lang"]['The Open-AudIT API'] = 'Open- AudIT API';

$GLOBALS["lang"]['The Open-AudIT id of the linked cloud. Links to <code>clouds.id</code>.'] = 'Sąsajos "Open- AudIT" identifikatorius. Nuorodos į <code>clouds.id</code>.';

$GLOBALS["lang"]['The Open-AudIT server code was exeucted within this file.'] = 'Open- Aud IT serverio kodas buvo iškirpti šiame faile.';

$GLOBALS["lang"]['The Open-AudIT server code was exeucted within this function.'] = 'Open- Aud IT serverio kodas buvo iškirpti per šią funkciją.';

$GLOBALS["lang"]['The Organisation that owns this item. Links to <code>orgs.id</code>.'] = 'Organizacija, kuriai priklauso šis punktas. Nuorodos į <code>orgs.id</code>.';

$GLOBALS["lang"]['The Process Identifier of the running associated discovery.'] = 'Veikiančio susijusio atradimo proceso identifikatorius.';

$GLOBALS["lang"]['The RU positon of the top of this device.'] = 'Šio įtaiso viršaus GĮ poziton.';

$GLOBALS["lang"]['The SNMP community string.'] = 'SNMP bendruomenės eilutė.';

$GLOBALS["lang"]['The SNMP v3 Authentication Passphrase.'] = 'SNMP v3 autentikacijos slaptafrazė.';

$GLOBALS["lang"]['The SNMP v3 Authentication Protocol.'] = 'SNMP v3 autentiškumo patvirtinimo protokolas.';

$GLOBALS["lang"]['The SNMP v3 Privacy Passphrase.'] = 'SNMP v3 privatumo slaptafrazė.';

$GLOBALS["lang"]['The SNMP v3 Privacy Protocol.'] = 'SNMP v3 privatumo protokolas.';

$GLOBALS["lang"]['The SNMP v3 Security Level.'] = 'SNMP v3 saugumo lygis.';

$GLOBALS["lang"]['The SNMP v3 Security Name.'] = 'SNMP v3 saugumo vardas.';

$GLOBALS["lang"]['The SNMPv3 context Engine ID (optional).'] = 'Comment';

$GLOBALS["lang"]['The SNMPv3 context Name (optional).'] = 'SNMPv3 konteksto pavadinimas (neprivaloma).';

$GLOBALS["lang"]['The URL of the external system.'] = 'Išorinės sistemos URL.';

$GLOBALS["lang"]['The URL of your Open-AudIT Server that this Collector will report to (no trailing slash).'] = 'Jūsų Open- AudIT URL Serverio, kad šis rinkėjas praneš (ne apakinti snapas).';

$GLOBALS["lang"]['The URL the audit scripts should submit their result to.'] = 'URL audito scenarijus turėtų pateikti savo rezultatą.';

$GLOBALS["lang"]['The actual full name of this user.'] = 'Tikrasis pilnas šio naudotojo vardas.';

$GLOBALS["lang"]['The associated baseline. Links to <code>baselines.id</code>.'] = 'Susijęs pradinis rodmuo. Nuorodos į <code>baselines.id</code>.';

$GLOBALS["lang"]['The associated discovery (if required). Links to <code>discoveries.id</code>.'] = 'Susijęs atradimas (jei reikalaujama). Nuorodos į <code>discoveries.id</code>.';

$GLOBALS["lang"]['The attribute to test (from the <code>devices</code> table).'] = 'Išbandytinas atributas (iš <code>devices</code> lentelė).';

$GLOBALS["lang"]['The attribute to test (must match an external field name from below).'] = 'Bandymo atributas (turi atitikti išorinį lauko pavadinimą iš apačios).';

$GLOBALS["lang"]['The audit script upon which to base your customisations.'] = 'Audito scenarijų, pagal kurį pagrįsti savo tinkinimus.';

$GLOBALS["lang"]['The base path from which to search for Users.'] = 'Pagrindinis kelias, nuo kurio ieškoti vartotojų.';

$GLOBALS["lang"]['The benchmark type.'] = 'Lyginamojo indekso rūšis.';

$GLOBALS["lang"]['The building the rack is located in.'] = 'Pastatas stovas yra įsikūręs.';

$GLOBALS["lang"]['The calculated number of devices to be created externally.'] = 'Apskaičiuotas įtaisų, kurie turi būti sukurti išorėje, skaičius.';

$GLOBALS["lang"]['The calculated number of devices to be created in Open-AudIT.'] = 'Apskaičiuotas prietaisų, kurie bus sukurti Open- AudIT, skaičius.';

$GLOBALS["lang"]['The collectors internal IP used when it runs a discovery.'] = 'Rinkėjai vidaus IP naudojamas, kai jis veikia atradimas.';

$GLOBALS["lang"]['The column name from the foreign table. Should be one of: class, environment, status, type or menu_category.'] = 'Stulpelio pavadinimas iš užsienio lentelės. Turėtų būti vienas iš: klasė, aplinka, statusas, tipas ar meniu _ kategorija.';

$GLOBALS["lang"]['The command executed upon the target device or Open-AudIT server code executed during discovery.'] = 'Komanda vykdoma tiksliniame įrenginyje arba Open- AudIT serverio kodas įvykdytas atradimo metu.';

$GLOBALS["lang"]['The configuration of your cluster can be: <code>active/active</code>, <code>active/passive</code>, <code>N+1</code>, <code>N+M</code>, <code>N-to-1</code>, <code>N-to-N</code>, <code>other</code> or blank.'] = 'Jūsų klasterio konfigūracija gali būti: <code>active/active</code>, <code>active/passive</code>, <code>N+1</code>, <code>N+M</code>, <code>N-to-1</code>, <code>N-to-N</code>, <code>other</code> arba neužpildyta.';

$GLOBALS["lang"]['The credentials password. If the credentials are an SSH Key, this is the password used to unlock the key and is optional.'] = 'Slaptumo slaptažodis. Jei įgaliojimai yra SSH raktas, tai yra slaptažodis naudojamas atrakinti raktą ir yra neprivalomas.';

$GLOBALS["lang"]['The credentials username.'] = 'Įgaliojimas naudotojo vardas.';

$GLOBALS["lang"]['The current status of the Cloud Discovery.'] = 'Dabartinė debesies paieškos būsena.';

$GLOBALS["lang"]['The current status of the discovery.'] = 'Dabartinė atradimo būsena.';

$GLOBALS["lang"]['The dashboard that will be shown by default for this user. Links to <code>dashboards.id</code>.'] = 'Dashboard, kuris pagal nutylėjimą bus rodomas šiam naudotojui. Nuorodos į <code>dashboards.id</code>.';

$GLOBALS["lang"]['The database version and web version are inconsistent.'] = 'Duomenų bazės versija ir interneto versija yra nenuosekli.';

$GLOBALS["lang"]['The date of license expiration.'] = 'Licencijos galiojimo pabaigos data.';

$GLOBALS["lang"]['The date the software is discontinued by the manufacturer. Usually replaced by a newer version. Maintenance may still be available.'] = 'Data, kai gamintojas nutraukia programinės įrangos naudojimą. Paprastai pakeičiama naujesne versija. Techninė priežiūra vis dar gali būti prieinama.';

$GLOBALS["lang"]['The date the software no longer receives updates and is effectively discontinued altogether. Maintenance is discontinued.'] = 'Data, kai programinė įranga nebegauna naujinimų ir iš esmės visiškai nutraukiama. Palaikomasis gydymas nutraukiamas.';

$GLOBALS["lang"]['The date this item was changed or added (read only). NOTE - This is the timestamp from the server.'] = 'Data, kada šis punktas buvo pakeistas arba pridėtas (tik skaityti). PASTABA - Tai laiko žyma iš serverio.';

$GLOBALS["lang"]['The date/time when this result was created.'] = 'Data ir laikas, kai šis rezultatas buvo sukurtas.';

$GLOBALS["lang"]['The day of the month when this task should execute (* for every day).'] = 'Mėnesio, kurį ši užduotis turėtų būti įvykdyta, diena (* už kiekvieną dieną).';

$GLOBALS["lang"]['The day of the week when this task should execute (* for every day).'] = 'Savaitės diena, kada ši užduotis turėtų būti įvykdyta (* už kiekvieną dieną).';

$GLOBALS["lang"]['The default language assigned to any user created by this method.'] = 'Numatytoji kalba paskirta bet kuriam šiuo metodu sukurtam naudotojui.';

$GLOBALS["lang"]['The device must respond to an Nmap ping before it is considered online.'] = 'Įrenginys turi reaguoti į Nmap ping prieš tai, kai jis laikomas internete.';

$GLOBALS["lang"]['The device within Open-AudIT. Links to <code>devices.id</code>.'] = 'Įrenginys per Open- AudIT. Nuorodos į <code>devices.id</code>.';

$GLOBALS["lang"]['The direct link for the script is'] = 'Tiesioginė nuoroda scenarijų yra';

$GLOBALS["lang"]['The email address of the reciever'] = 'Gavėjo e. pašto adresas';

$GLOBALS["lang"]['The enterprise binary from FirstWave is required for a license. Please download Open-AudIT from'] = 'Įmonė dvejetainė iš FirstWave yra reikalinga licencijos. Atsisiųskite Open- AudIT iš';

$GLOBALS["lang"]['The entire associated baseline this result is from.'] = 'Visas susijęs pradinis rezultatas yra iš.';

$GLOBALS["lang"]['The externally referenced location ID. Usually populated by Cloud audits.'] = 'Išorės nuoroda vietos ID. Paprastai atliekamas nuotolinės kompiuterijos auditas.';

$GLOBALS["lang"]['The first time that Open-AudIT retrieved details of this device.'] = 'Pirmą kartą, kai Open- AudIT gavo duomenis apie šį įrenginį.';

$GLOBALS["lang"]['The floor the rack is located on.'] = 'Grindys stovas yra įsikūręs ant.';

$GLOBALS["lang"]['The foreign table to reference. Should be one of: devices, locations, orgs or queries.'] = 'Užsienio lentelė su nuoroda. Turėtų būti vienas iš: prietaisai, vietos, orgai ar užklausos.';

$GLOBALS["lang"]['The format used for the output to be emailed.'] = 'Elektroniniu paštu siunčiamų duomenų formatas.';

$GLOBALS["lang"]['The fully qualified column upon which to group by. NOTE: When type = traffic, this represents the red query id.'] = 'Pilnai kvalifikuotas stulpelis, pagal kurį grupuoti. PASTABA: Kai tipas = eismo, tai rodo raudoną užklausos ID.';

$GLOBALS["lang"]['The fully qualified table.column. Multiple may be provided, separated by a comma (no spaces).'] = 'Kvalifikuota lentelė. Gali būti keli, atskirti kableliais (tarpais).';

$GLOBALS["lang"]['The generated SQL query to test for this vulnerability. This field can be edited to correct the query as required.'] = 'Sugeneruotas SQL užklausa išbandyti šį pažeidžiamumą. Šis laukas gali būti redaguota ištaisyti užklausą, kaip reikalaujama.';

$GLOBALS["lang"]['The group of devices on which the baseline was run against.'] = 'Įtaisų grupė, kuriai buvo taikomas bazinis dydis.';

$GLOBALS["lang"]['The group that provides a list of devices for the integration. Links to <code>groups.id</code>.'] = 'Grupė, pateikianti integravimo prietaisų sąrašą. Nuorodos į <code>groups.id</code>.';

$GLOBALS["lang"]['The hour of the day when this task should execute (* for every hour).'] = 'Dienos valanda, kada ši užduotis turėtų būti įvykdyta (* už kiekvieną valandą).';

$GLOBALS["lang"]['The id of the linked device. Links to <code>devices.id</code>'] = 'Sujungto įtaiso id. Nuorodos į <code>devices.id</code>';

$GLOBALS["lang"]['The identifier column (integer) in the database (read only).'] = 'Identifikavimo skiltis (sveikasis skaičius) duomenų bazėje (tik skaityti).';

$GLOBALS["lang"]['The importance of this baseline (not used yet).'] = 'Šio atskaitos taško svarba (dar neišnaudota).';

$GLOBALS["lang"]['The integer of severity.'] = 'Sunkumo sveikasis skaičius.';

$GLOBALS["lang"]['The ip address of the Auth method.'] = 'Auth metodo ip adresas.';

$GLOBALS["lang"]['The language to translate the web interface into for the user.'] = 'Kalba išversti Web sąsają į vartotojui.';

$GLOBALS["lang"]['The last date and time this item was executed (read only).'] = 'Paskutinė data ir laikas, kai šis straipsnis buvo įvykdytas (tik skaityti).';

$GLOBALS["lang"]['The last time that Open-AudIT retrieved details of this device.'] = 'Paskutinį kartą, kai Open- AudIT gavo duomenis apie šį įrenginį.';

$GLOBALS["lang"]['The last time this benchmarks was executed.'] = 'Paskutinį kartą šie lyginamieji indeksai buvo įvykdyti.';

$GLOBALS["lang"]['The last time this integration was run.'] = 'Paskutinį kartą ši integracija buvo vykdoma.';

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

$GLOBALS["lang"]['The maximum physical weight (in KGs) this rack can hold.'] = 'Kuo didesnis fizinis svoris (KG) šis stovas gali turėti.';

$GLOBALS["lang"]['The maximum total BTUs this rack is rated for.'] = 'Didžiausias bendras šios lentynos tūris.';

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

$GLOBALS["lang"]['The optional secondary column. NOTE: When type = traffic, this represents the yellow query id.'] = 'Neprivaloma antrinė skiltis. PASTABA: Kai tipas = eismo, tai reiškia geltona užklausos id.';

$GLOBALS["lang"]['The optional third column. NOTE: When type = traffic, this represents the green query id.'] = 'Neprivaloma trečioji skiltis. PASTABA: Kai tipas = eismo, tai reiškia žalia užklausos ID.';

$GLOBALS["lang"]['The orientation of this device.'] = 'Šio įtaiso orientacija.';

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

$GLOBALS["lang"]['The process identifier of this queue item.'] = 'Šio eilės elemento proceso identifikatorius.';

$GLOBALS["lang"]['The process that was used last to retrieve details about the device'] = 'Procesas, kuris buvo naudojamas paskutinį kartą norint gauti informaciją apie įrenginį';

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

$GLOBALS["lang"]['The result of the command.'] = 'Įsakymo rezultatas.';

$GLOBALS["lang"]['The room the rack is located in.'] = 'Kambarys stovas yra įsikūręs.';

$GLOBALS["lang"]['The row the rack is located in.'] = 'Eilutė stovas yra įsikūręs.';

$GLOBALS["lang"]['The secret key used in conjunction with your AWS EC2 API key.'] = 'Slaptas raktas naudojamas kartu su jūsų AWS EC2 API raktu.';

$GLOBALS["lang"]['The software end-of-life date.'] = 'Programinės įrangos galiojimo laikas.';

$GLOBALS["lang"]['The software end-of-service-life date.'] = 'Programinės įrangos naudojimo data.';

$GLOBALS["lang"]['The specific database column from the specified database table.'] = 'Konkrečios duomenų bazės skiltis iš nurodytos duomenų bazės lentelės.';

$GLOBALS["lang"]['The specific database table.'] = 'Konkrečios duomenų bazės lentelė.';

$GLOBALS["lang"]['The standard Nmap timing options. We usually use -T4 (Aggressive) as this is recommended for a decent broadband or ethernet connection.'] = 'Standartiniai Nmap laiko parinktys. Mes paprastai naudoti -T4 (Agresyvus), nes tai rekomenduojama padoraus plačiajuosčio ryšio ar ethernet ryšio.';

$GLOBALS["lang"]['The status of this integration'] = 'Šios integracijos statusas';

$GLOBALS["lang"]['The status of this queued item.'] = 'Šio eilės punkto statusas.';

$GLOBALS["lang"]['The target IP this log entry referers to (if any).'] = 'Tikslinis IP šis žurnalas replikuoja (jei yra).';

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

$GLOBALS["lang"]['The unique identifier of this server.'] = 'Šio serverio unikalus identifikatorius.';

$GLOBALS["lang"]['The user account this collector uses. Links to <code>users.id</code>.'] = 'Vartotojo sąskaitą šis kolektorius naudoja. Nuorodos į <code>users.id</code>.';

$GLOBALS["lang"]['The username used to access the external system.'] = 'Naudotojo vardas, naudojamas prieigai prie išorinės sistemos.';

$GLOBALS["lang"]['The users email address.'] = 'Naudotojų el. pašto adresas.';

$GLOBALS["lang"]['The usual hours of operation at this site.'] = 'Įprastos veikimo valandos šioje vietoje.';

$GLOBALS["lang"]['The value assigned to the item.'] = 'Straipsniui priskirta vertė.';

$GLOBALS["lang"]['The value that is stored for this particular item.'] = 'Šio konkretaus objekto vertė.';

$GLOBALS["lang"]['The vendor name as per CPE entries.'] = 'Pardavėjo pavadinimas pagal CPE įrašus.';

$GLOBALS["lang"]['The vendor taken from the CPE.'] = 'Pardavėjas paimtas iš CPE.';

$GLOBALS["lang"]['The web directory on the host that Open-AudIT is installed (requires a trailing slash).'] = 'Interneto katalogas ant kompiuterio, kad Open- AudIT yra įdiegta (reikia sekti snapas).';

$GLOBALS["lang"]['The widget at position '] = 'Elementas padėtyje ';

$GLOBALS["lang"]['The width of this device.'] = 'Šio įtaiso plotis.';

$GLOBALS["lang"]['Then'] = 'Tada';

$GLOBALS["lang"]['This CVE will be retrieved and overwrite the existing CVE if it exists.'] = 'Ši CVE bus gauta ir perrašyti esamą CVE, jei ji egzistuoja.';

$GLOBALS["lang"]['This attribute is stored as a JSON object. It is the list of all collections and contains the collection name along with <code>c</code>, <code>r</code>, <code>u</code> and,or <code>d</code> which represent create, read, update and delete. These are the actions a user can perform on items from that particular collection.'] = 'Šis atributas saugomas kaip JSON objektas. Tai visų kolekcijų sąrašas ir yra kolekcijos pavadinimas kartu su <code>c</code>, <code>r</code>, <code>u</code> ir arba <code>d</code> kurie atstovauja sukurti, skaityti, atnaujinti ir ištrinti. Tai yra veiksmai, kuriuos vartotojas gali atlikti dėl daiktų iš tos konkrečios kolekcijos.';

$GLOBALS["lang"]['This can be either a varchar (a text field), a list (a list of values that can be selected) or a date.'] = 'Tai gali būti varcharas (teksto laukas), sąrašas (reikšmių, kurias galima pasirinkti, sąrašas) arba data.';

$GLOBALS["lang"]['This collectors universally unique identifier.'] = 'Šis kolekcionavimas visuotinai unikalus identifikatorius.';

$GLOBALS["lang"]['This description is auto-populated and should ideally be left as-is.'] = 'Šis aprašymas yra automatiškai apgyvendintas ir turėtų būti paliktas kaip yra.';

$GLOBALS["lang"]['This feature requires a Professional or an Enterprise license.'] = 'Ši funkcija reikalauja profesinės arba įmonės licencijos.';

$GLOBALS["lang"]['This is generally the primary column, unless otherwise configured. NOTE: When type = traffic, this represents the secondary text.'] = 'Tai paprastai yra pagrindinis stulpelis, jei nenurodyta kitaip. PASTABA: Kai tipas = eismo, tai atitinka antrinį tekstą.';

$GLOBALS["lang"]['This item must match the value of the attribute selected or contains the ID of the query to be used.'] = 'Šis punktas turi atitikti pasirinkto požymio vertę arba jame turi būti naudotino užklausos ID.';

$GLOBALS["lang"]['This item must match the value of the attribute selected.'] = 'Šis punktas turi atitikti pasirinkto požymio vertę.';

$GLOBALS["lang"]['This license expires on'] = 'Ši licencija nustoja galioti';

$GLOBALS["lang"]['This should be set to either 1 or the height of the rack.'] = 'Tai turėtų būti nustatyta arba 1 arba stovas aukštis.';

$GLOBALS["lang"]['This will auto-populate.'] = 'Tai bus autopopas.';

$GLOBALS["lang"]['This will considerably slow the discovery scan.'] = 'Tai gerokai sulėtins atradimų skenavimą.';

$GLOBALS["lang"]['Thursday'] = 'Ketvirtadienis';

$GLOBALS["lang"]['time_caption'] = 'Laiko žymė';

$GLOBALS["lang"]['Time Caption'] = 'Laiko žymė';

$GLOBALS["lang"]['time_daylight'] = 'Dienos šviesa';

$GLOBALS["lang"]['Time Daylight'] = 'Dienos šviesa';

$GLOBALS["lang"]['Time to Execute'] = 'Laikas iki vykdymo';

$GLOBALS["lang"]['timeout'] = 'Laikotarpis';

$GLOBALS["lang"]['Timeout'] = 'Laikotarpis';

$GLOBALS["lang"]['Timeout Per Target (Seconds)'] = 'Laiko limitas vienam tikslui (sekundės)';

$GLOBALS["lang"]['Timesatamp'] = 'Laikmatis';

$GLOBALS["lang"]['Timestamp'] = 'Laikas';

$GLOBALS["lang"]['timing'] = 'Laikas';

$GLOBALS["lang"]['Timing'] = 'Laikas';

$GLOBALS["lang"]['Timor-Leste'] = 'Rytų Timoras';

$GLOBALS["lang"]['Title'] = 'Pavadinimas';

$GLOBALS["lang"]['Togo'] = 'Togas';

$GLOBALS["lang"]['Tokelau'] = 'Tokelau';

$GLOBALS["lang"]['Tonga'] = 'Tonga';

$GLOBALS["lang"]['toolbar_style'] = 'Įrankių juostos stilius';

$GLOBALS["lang"]['Toolbar Style'] = 'Įrankių juostos stilius';

$GLOBALS["lang"]['Top Nmap TCP Ports'] = 'Top Nmap TCP prievadai';

$GLOBALS["lang"]['Top Nmap UDP Ports'] = 'Top Nmap UDP prievadai';

$GLOBALS["lang"]['Traditional Chinese'] = 'Tradicinis kinų';

$GLOBALS["lang"]['Traffic Light'] = 'Eismo šviesa';

$GLOBALS["lang"]['Trinidad and Tobago'] = 'Trinidadas ir Tobagas';

$GLOBALS["lang"]['Troubleshooting LDAP Logins'] = 'Comment';

$GLOBALS["lang"]['Try all the latest features with a FREE 100 device license of Open-AudIT Enterprise. Please read the <a href=\"'] = 'Išbandykite visas naujausias funkcijas su NEMOKAMAI 100 įrenginys licenciją Open- AudIT Enterprise. Prašome perskaityti < href =\ "';

$GLOBALS["lang"]['Tuesday'] = 'Antradienis';

$GLOBALS["lang"]['Tunisia'] = 'Tunisas';

$GLOBALS["lang"]['Turkey'] = 'Turkija';

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

$GLOBALS["lang"]['URL'] = 'URL';

$GLOBALS["lang"]['uuid'] = 'UUID';

$GLOBALS["lang"]['UUID'] = 'UUID';

$GLOBALS["lang"]['udp_ports'] = 'Udp prievadai';

$GLOBALS["lang"]['Udp Ports'] = 'Udp prievadai';

$GLOBALS["lang"]['Uganda'] = 'Uganda';

$GLOBALS["lang"]['Ukraine'] = 'Ukraina';

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

$GLOBALS["lang"]['Use SNMP'] = 'Naudoti SNMP';

$GLOBALS["lang"]['Use SSH'] = 'Naudoti SSH';

$GLOBALS["lang"]['Use Secure (LDAPS)'] = 'Naudoti saugiai (LDAPS)';

$GLOBALS["lang"]['Use Service Version Detection'] = 'Naudoti Paslaugos versijos aptikimą';

$GLOBALS["lang"]['Use WMI'] = 'Naudoti WMI';

$GLOBALS["lang"]['Use for Authentication'] = 'Autentiškumo nustatymas';

$GLOBALS["lang"]['Use for Roles'] = 'Relių naudojimas';

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

$GLOBALS["lang"]['Users, Roles and Orgs'] = 'Naudotojai, ritės ir orgai';

$GLOBALS["lang"]['Using Entra for Auth'] = 'Entros naudojimas Autai';

$GLOBALS["lang"]['Using OKTA for Auth'] = 'OKTA naudojimas Autai';

$GLOBALS["lang"]['Usually Mb/s, from Location A.'] = 'Paprastai Mb / s, iš A vietos';

$GLOBALS["lang"]['Usually Mb/s, from Location B.'] = 'Paprastai Mb / s, iš B vietos';

$GLOBALS["lang"]['Usually Mb/s, to Location A.'] = 'Paprastai Mb / s, į vietą A.';

$GLOBALS["lang"]['Usually Mb/s, to Location B.'] = 'Paprastai Mb / s, į vietą B.';

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

$GLOBALS["lang"]['values'] = 'Vertės';

$GLOBALS["lang"]['Values'] = 'Vertės';

$GLOBALS["lang"]['Vanuatu'] = 'Vanuatu';

$GLOBALS["lang"]['VarChar'] = 'VaršasCity in Quebec Canada';

$GLOBALS["lang"]['Varchar'] = 'Varcharas';

$GLOBALS["lang"]['variable'] = 'Kintamasis';

$GLOBALS["lang"]['Variable'] = 'Kintamasis';

$GLOBALS["lang"]['vendor'] = 'Pardavėjas';

$GLOBALS["lang"]['Vendor'] = 'Pardavėjas';

$GLOBALS["lang"]['vendors'] = 'Pardavėjai';

$GLOBALS["lang"]['Vendors'] = 'Pardavėjai';

$GLOBALS["lang"]['Venezuela'] = 'Venesuela';

$GLOBALS["lang"]['version'] = 'Versija';

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

$GLOBALS["lang"]['View'] = 'Rodymas';

$GLOBALS["lang"]['View All'] = 'Rodyti viską';

$GLOBALS["lang"]['View Details'] = 'Rodyti detales';

$GLOBALS["lang"]['View Device'] = 'Rodyti įrenginį';

$GLOBALS["lang"]['View Discovery'] = 'Rodyti paiešką';

$GLOBALS["lang"]['View Policy'] = 'Rodyti politiką';

$GLOBALS["lang"]['Virtual Private Network'] = 'Virtualus privatus tinklas';

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

$GLOBALS["lang"]['vulnerability_id'] = 'Pažeidžiamumo identifikatorius';

$GLOBALS["lang"]['Vulnerability ID'] = 'Pažeidžiamumo identifikatorius';

$GLOBALS["lang"]['WHERE'] = 'KUR';

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

$GLOBALS["lang"]['Web'] = 'Žiniatinklis';

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

$GLOBALS["lang"]['Welcome to FirstWave Open-AudIT'] = 'Sveiki atvykę į FirstWave Open- AudIT';

$GLOBALS["lang"]['Western Sahara'] = 'Vakarų Sachara';

$GLOBALS["lang"]['What Can I Expect if I Have no Credentials'] = 'Ko aš galiu tikėtis, jei neturiu kreditų';

$GLOBALS["lang"]['What is the purpose of this rack.'] = 'Koks yra šios lentynos tikslas.';

$GLOBALS["lang"]['What is the type of this location. Allowable types held in <code>attributes</code> table.'] = 'Koks yra šios vietos tipas. Leistini tipai, laikomi <code>attributes</code> lentelė.';

$GLOBALS["lang"]['When integrating devices from the external system, if the device doesnt exist in Open-AudIT should we create it?'] = 'Integravus įrenginius iš išorinės sistemos, jei įrenginys neegzistuoja Open- AudIT, ar turėtume jį sukurti?';

$GLOBALS["lang"]['When integrating devices from the external system, if the device has been updated in the external system should we update it in Open-AudIT?'] = 'Integravus įrenginius iš išorinės sistemos, jei įrenginys buvo atnaujintas išorinėje sistemoje, ar turėtume jį atnaujinti Open- AudIT?';

$GLOBALS["lang"]['When retrieve an external device, should we run discovery upon it?'] = 'Kai gauname išorinį įrenginį, ar turėtume jį atrasti?';

$GLOBALS["lang"]['When this benchmark is scheduled to be executed. Derived from the associated <code>tasks.type</code> and <code>tasks.sub_resource_id</code>.'] = 'Kai šį lyginamąjį indeksą planuojama įgyvendinti. Išvestinės susijusios <code>tasks.type</code> ir <code>tasks.sub_resource_id</code>.';

$GLOBALS["lang"]['When this log was created.'] = 'Kai šis žurnalas buvo sukurtas.';

$GLOBALS["lang"]['When this queue item started processing.'] = 'Kai šis eilėje elementas pradėjo apdoroti.';

$GLOBALS["lang"]['When we execute this baseline, should we check for items on devices that are not in a policy for this baseline.'] = 'Kai mes įgyvendiname šį bazinį, jei mes patikrinti, ar ant įrenginių, kurie nėra šios bazinės politikos.';

$GLOBALS["lang"]['When we receive an open port, should we attempt to test for the version of the service currently running upon it? This assists in confirming actual running services.'] = 'Kai gauname atvirą uostą, ar turėtume bandyti išbandyti šiuo metu juo besinaudojančios paslaugos versiją? Tai padeda patvirtinti tikrąsias paslaugas.';

$GLOBALS["lang"]['where'] = 'Kai';

$GLOBALS["lang"]['Where'] = 'Kai';

$GLOBALS["lang"]['Where on the Device Details screen you would like to see this field appear.'] = 'Kur ekrane "Įrenginio informacija" norėtumėte matyti šį lauką.';

$GLOBALS["lang"]['Where the rack is in the row.'] = 'Kur stovas yra eilėje.';

$GLOBALS["lang"]['Whether the vulnerability affects components beyond its own using Impact, Availability and Confidentiality.'] = 'Ar pažeidžiamumas veikia komponentus už savo naudojant poveikį, Prieinamumas ir Konfidencialumas.';

$GLOBALS["lang"]['Whether user interaction is required (None, Passive, Active).'] = 'Ar naudotojo sąveika yra būtina (nėra, pasyvus, aktyvus).';

$GLOBALS["lang"]['Which OS this benchmark applies to.'] = 'Kuri OS šis santykinis taršos rodiklis taikomas.';

$GLOBALS["lang"]['Which devices should Open-AudIT create from the external system (if any). Using All, None or a given Attribute.'] = 'Kokie įrenginiai turėtų Open- AudIT sukurti iš išorės sistemos (jei yra). Naudojant visus, Nėra arba tam tikrą atributas.';

$GLOBALS["lang"]['Which sub-menu should we display this query in.'] = 'Kuris meniu turėtų rodyti šį užklausą.';

$GLOBALS["lang"]['Who made this rack.'] = 'Kas tai padarė?';

$GLOBALS["lang"]['Why Windows Server Only?'] = 'Kodėl Windows serveris tik?';

$GLOBALS["lang"]['Why do we exclude this policy?'] = 'Kodėl mes atsisakome šios politikos?';

$GLOBALS["lang"]['Wide Area Network'] = 'Platus tinklas';

$GLOBALS["lang"]['Widget'] = 'Valdiklis';

$GLOBALS["lang"]['Widget # '] = 'Valdiklis # ';

$GLOBALS["lang"]['Widget Type'] = 'Valdiklio tipas';

$GLOBALS["lang"]['widgets'] = 'Elementai';

$GLOBALS["lang"]['Widgets'] = 'Elementai';

$GLOBALS["lang"]['width'] = 'Plotis';

$GLOBALS["lang"]['Width'] = 'Plotis';

$GLOBALS["lang"]['windows'] = 'Langai';

$GLOBALS["lang"]['Windows'] = 'Langai';

$GLOBALS["lang"]['Windows Test Script'] = 'Windows testo scenarijus';

$GLOBALS["lang"]['Wireless Local Area Network'] = 'Belaidis vietinis tinklas';

$GLOBALS["lang"]['wmi_fails'] = 'Wmi Fales';

$GLOBALS["lang"]['Wmi Fails'] = 'Wmi Fales';

$GLOBALS["lang"]['wmi_timeout'] = 'Wmi Timeout';

$GLOBALS["lang"]['Wmi Timeout'] = 'Wmi Timeout';

$GLOBALS["lang"]['workgroup'] = 'Darbo grupė';

$GLOBALS["lang"]['Workgroup'] = 'Darbo grupė';

$GLOBALS["lang"]['Working Credentials'] = 'Darbo kreditai';

$GLOBALS["lang"]['XML'] = 'XML';

$GLOBALS["lang"]['Yellow Query'] = 'Geltona užklausa';

$GLOBALS["lang"]['Yemen'] = 'Jemenas';

$GLOBALS["lang"]['Yes'] = 'Taip';

$GLOBALS["lang"]['You may want to copy and paste this URL in an email to your staff.'] = 'Galite nukopijuoti ir įklijuoti šį URL el. paštu savo darbuotojams.';

$GLOBALS["lang"]['You must delete your existing license before adding a new license.'] = 'Jūs turite ištrinti savo esamą licenciją prieš pridedant naują licenciją.';

$GLOBALS["lang"]['YouTube Tutorials'] = '"YouTube" turistai';

$GLOBALS["lang"]['Your AWS EC2 API key.'] = 'Jūsų AWS EC2 API raktas.';

$GLOBALS["lang"]['Your Google Compute credentials as JSON.'] = '"Google" skaičiuoja JSON.';

$GLOBALS["lang"]['Your Licenses'] = 'Jūsų licencijos';

$GLOBALS["lang"]['Your Microsoft Azure Client ID.'] = 'Jūsų Microsoft Azure kliento ID.';

$GLOBALS["lang"]['Your Microsoft Azure Client Secret.'] = 'Jūsų Microsoft Azure Klientas slaptas.';

$GLOBALS["lang"]['Your Microsoft Azure Subscription ID.'] = 'Jūsų Microsoft Azure prenumeratos ID.';

$GLOBALS["lang"]['Your Microsoft Azure Tennant ID.'] = 'Jūsų Microsoft Azure Tennant ID.';

$GLOBALS["lang"]['Your SQL to select attributes that will populate this query.'] = 'Jūsų SQL pasirinkti atributus, kurie bus popoulate šį užklausą.';

$GLOBALS["lang"]['Your SQL to select devices that will populate this group.'] = 'Jūsų SQL pasirinkti įrenginius, kurie bus populate šią grupę.';

$GLOBALS["lang"]['Your SSH key.'] = 'Tavo SSH raktas.';

$GLOBALS["lang"]['Your access credentials, as per that clouds native API.'] = 'Jūsų prieigos duomenys, kaip kad debesys vietinis API.';

$GLOBALS["lang"]['Your description of the status of this connection (provisioned, retired, etc).'] = 'Jūsų aprašymas šio ryšio statusą (atidėjinys, pensinis ir tt).';

$GLOBALS["lang"]['Your description of this item.'] = 'Jūsų aprašymas šio elemento.';

$GLOBALS["lang"]['Your generic name for this piece of software'] = 'Šio programinės įrangos elemento bendrinis pavadinimas';

$GLOBALS["lang"]['Your generic version for this piece of software'] = 'Jūsų bendrinė versija šiam programinės įrangos elementui';

$GLOBALS["lang"]['Zambia'] = 'Zambija';

$GLOBALS["lang"]['Zimbabwe'] = 'Zimbabvė';

$GLOBALS["lang"]['active'] = 'aktyvus';

$GLOBALS["lang"]['active directory'] = 'aktyvus aplankas';

$GLOBALS["lang"]['active/active'] = 'Aktyvus / aktyvus';

$GLOBALS["lang"]['active/passive'] = 'Aktyvus / pasyvus';

$GLOBALS["lang"]['advertisement'] = 'reklama';

$GLOBALS["lang"]['alert'] = 'perspėjimas';

$GLOBALS["lang"]['all'] = 'visi';

$GLOBALS["lang"]['allocated'] = 'paskirta';

$GLOBALS["lang"]['amazon'] = 'amazonas';

$GLOBALS["lang"]['antivirus'] = 'antivirusas';

$GLOBALS["lang"]['application'] = 'programa';

$GLOBALS["lang"]['approved'] = 'patvirtintas';

$GLOBALS["lang"]['attribute'] = 'atributas';

$GLOBALS["lang"]['auto'] = 'auto';

$GLOBALS["lang"]['backup'] = 'atsarginė kopija';

$GLOBALS["lang"]['banned'] = 'uždrausta';

$GLOBALS["lang"]['blog'] = 'Dienoraštis';

$GLOBALS["lang"]['bottom'] = 'dugnas';

$GLOBALS["lang"]['browser_lang'] = 'naršyklės _ lang';

$GLOBALS["lang"]['building'] = 'pastatas';

$GLOBALS["lang"]['cloud'] = 'debesys';

$GLOBALS["lang"]['code'] = 'kodas';

$GLOBALS["lang"]['collector'] = 'kolektorius';

$GLOBALS["lang"]['compute'] = 'apskaičiuotas';

$GLOBALS["lang"]['config'] = 'config';

$GLOBALS["lang"]['contains'] = 'susideda iš';

$GLOBALS["lang"]['create'] = 'sukurti';

$GLOBALS["lang"]['created'] = 'sukurta';

$GLOBALS["lang"]['critical'] = 'kritinė';

$GLOBALS["lang"]['cve'] = 'Cve';

$GLOBALS["lang"]['database'] = 'duomenų bazė';

$GLOBALS["lang"]['debug'] = 'derinimas';

$GLOBALS["lang"]['delegated'] = 'deleguota';

$GLOBALS["lang"]['delete'] = 'Pašalinti';

$GLOBALS["lang"]['deleted'] = 'išbraukta';

$GLOBALS["lang"]['denied'] = 'Nepatvirtinta';

$GLOBALS["lang"]['devices'] = 'prietaisai';

$GLOBALS["lang"]['digitalocean'] = 'digitalocenas';

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

$GLOBALS["lang"]['fixed'] = 'fiksuotas';

$GLOBALS["lang"]['floor'] = 'grindys';

$GLOBALS["lang"]['front'] = 'priekyje';

$GLOBALS["lang"]['front-left'] = 'iš anksto kairėje';

$GLOBALS["lang"]['front-right'] = 'iš anksto dešinėje';

$GLOBALS["lang"]['github'] = 'gitubas';

$GLOBALS["lang"]['google'] = 'Google';

$GLOBALS["lang"]['greater or equals'] = 'Didesnė arba lygi';

$GLOBALS["lang"]['greater than'] = 'didesnis nei';

$GLOBALS["lang"]['group'] = 'grupė';

$GLOBALS["lang"]['head'] = 'galva';

$GLOBALS["lang"]['here'] = 'čia';

$GLOBALS["lang"]['high availability'] = 'didelis prieinamumas';

$GLOBALS["lang"]['howto'] = 'howto';

$GLOBALS["lang"]['ignored'] = 'ignoruojamas';

$GLOBALS["lang"]['in'] = 'yra';

$GLOBALS["lang"]['inactive'] = 'neaktyvus';

$GLOBALS["lang"]['incomplete'] = 'nebaigta';

$GLOBALS["lang"]['info'] = 'informacija';

$GLOBALS["lang"]['int, text, bool (y/n), etc'] = 'int, text, bool (y / n) ir t. t.';

$GLOBALS["lang"]['is licensed to'] = 'turi licenciją';

$GLOBALS["lang"]['left'] = 'kairėje';

$GLOBALS["lang"]['less or equals'] = 'mažesnis arba lygus';

$GLOBALS["lang"]['less than'] = 'mažiau nei';

$GLOBALS["lang"]['license'] = 'licencija';

$GLOBALS["lang"]['like'] = 'Kaip';

$GLOBALS["lang"]['line'] = 'eilutė';

$GLOBALS["lang"]['load balancing'] = 'apkrovos balansavimas';

$GLOBALS["lang"]['location'] = 'vieta';

$GLOBALS["lang"]['managed'] = 'valdomas';

$GLOBALS["lang"]['microsoft'] = 'mikromolis';

$GLOBALS["lang"]['mount point'] = 'montavimo taškas';

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

$GLOBALS["lang"]['openldap'] = 'openldapas';

$GLOBALS["lang"]['optimized'] = 'optimizuotas';

$GLOBALS["lang"]['optionally '] = 'pasirinktinai ';

$GLOBALS["lang"]['other'] = 'Žalieji';

$GLOBALS["lang"]['package'] = 'pakuotė';

$GLOBALS["lang"]['partition'] = 'skaidinys';

$GLOBALS["lang"]['pass'] = 'praeiti';

$GLOBALS["lang"]['pending'] = 'laukiama';

$GLOBALS["lang"]['performance'] = 'veikimas';

$GLOBALS["lang"]['performed'] = 'atlikta';

$GLOBALS["lang"]['pie'] = 'pyragas';

$GLOBALS["lang"]['planning'] = 'planavimas';

$GLOBALS["lang"]['predictable'] = 'numatomas';

$GLOBALS["lang"]['query'] = 'užklausa';

$GLOBALS["lang"]['rear'] = 'gale';

$GLOBALS["lang"]['rear-left'] = 'gale kairėje';

$GLOBALS["lang"]['rear-right'] = 'gale dešinėje';

$GLOBALS["lang"]['regex'] = 'regex';

$GLOBALS["lang"]['release'] = 'išlaisvinti';

$GLOBALS["lang"]['reserved'] = 'rezervuota';

$GLOBALS["lang"]['right'] = 'dešinė';

$GLOBALS["lang"]['room'] = 'kambarys';

$GLOBALS["lang"]['row'] = 'eilutė';

$GLOBALS["lang"]['stand-alone'] = 'vienas';

$GLOBALS["lang"]['standard'] = 'standartas';

$GLOBALS["lang"]['starts with'] = 'prasideda';

$GLOBALS["lang"]['storage'] = 'sandėliavimas';

$GLOBALS["lang"]['timestamp'] = 'laiko žyma';

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

$GLOBALS["lang"]['unallocated'] = 'nepaskirstytas';

$GLOBALS["lang"]['unauthorised'] = 'neteisėtas';

$GLOBALS["lang"]['unknown'] = 'nežinoma';

$GLOBALS["lang"]['unmanaged'] = 'nevaldomas';

$GLOBALS["lang"]['unused'] = 'nepanaudotas';

$GLOBALS["lang"]['update'] = 'atnaujinimas';

$GLOBALS["lang"]['valid'] = 'galioja';

$GLOBALS["lang"]['virtualisation'] = 'virtualizacija';

$GLOBALS["lang"]['warning'] = 'įspėjimas';

$GLOBALS["lang"]['web'] = 'web';

$GLOBALS["lang"]['yes'] = 'taip';

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

