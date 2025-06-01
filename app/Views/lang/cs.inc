<?php

$GLOBALS["lang"][' Default, currently '] = 'Výchozí, v současnosti';

$GLOBALS["lang"][' is now supported with a language file. To change your user to use this language, click '] = 'je nyní podporován jazykovým souborem. Chcete-li změnit svého uživatele používat tento jazyk, klikněte';

$GLOBALS["lang"][' seconds'] = 'sekund';

$GLOBALS["lang"]['10 Minutes'] = '10 minut';

$GLOBALS["lang"]['15 Minutes'] = '15 minut';

$GLOBALS["lang"]['30 Minutes'] = '30 minut';

$GLOBALS["lang"]['5 Minutes'] = '5 minut';

$GLOBALS["lang"]['<br> <strong>NOTE</strong> - You are accessing this URL from the local Open-AudIT server. The downloaded script will not be able to submit when run on any other machine. If you need to audit other machines, please download the script from any remote machine, not using a browser on the Open-AudIT server itself.'] = '< br > < strong > POZOR < / strong > - Přistupujete k tomuto URL z místního Open- Audit serveru. Stáhnutý skript nebude schopen zaslat při spuštění na jiném stroji. Pokud potřebujete provést audit jiných strojů, stáhněte si prosím skript z libovolného vzdáleného stroje, nikoli pomocí prohlížeče na samotném serveru Open- Audit.';

$GLOBALS["lang"]['<p><strong class="text-danger">NOTE</strong> - You must have working SSH or SSH Key credentials to execute benchmarks upon a target device.</p>'] = '< p > < silná třída = "text- dangement" > POZNÁMKA < / strong > - Pro provedení referenčních hodnot na cílovém zařízení musíte mít pracovní SSH nebo SSH Key. < / p >';

$GLOBALS["lang"]['<p><strong>Baseline</strong> - The overarching document that contains the baseline definition and the individual policy tests.<br> <br> <strong>Policies</strong> - The individual tests contained within a Baseline. Each test is for a specific item. An example would be testing for SSH version 1.2.3.<br> <br> <strong>Details</strong> - Baselines can compare netstat ports, users and software.<br> <br> <strong>Software</strong> - To compare software we check the name and version. Because version numbers are not all standardised in format, when we receive an audit result we create a new attribute called software_padded which we store in the database along with the rest of the software details for each package. For this reason, baselines using software policies will not work when run against a device that has not been audited by 1.10 (at least). Software policies can test against the version being "equal to", "greater than" or "equal to or greater than".<br> <br> <strong>Netstat Ports</strong> - Netstat Ports use a combination of port number, protocol and program. If all are present the policy passes.<br> <br> <strong>Users</strong> - Users work similar to Netstat Ports. If a user exists with a matching name, status and password details (changeable, expires, required) then the policy passes.<br> <br> </p>'] = '< p > < silný > výchozí hodnota < / silný > - zastřešující dokument, který obsahuje základní definici a jednotlivé politické testy. < br > < brr > < silný > politika < / silný > - Jednotlivé testy obsažené v výchozí hodnotě. Každá zkouška je pro určitou položku. Příkladem by bylo testování SSH verze 1.2.3. < br > < br > < strong > Details < / strong > - Základnice mohou porovnat porty netstat, uživatele a software. < br > < br > < strong > Software < / strong > - Pro porovnání softwaru zkontroluje název a verzi. Protože čísla verzí nejsou ve formátu standardizovaná, když obdržíme výsledek auditu, vytvoříme nový atribut nazvaný software _ padded, který uložíme do databáze spolu se zbytkem informací o softwaru pro každý balíček. Z tohoto důvodu nebude při provozu proti zařízení, které nebylo zkontrolováno podle bodu 1.10 (alespoň), fungovat základní linie využívající softwarové politiky. Zásady softwaru mohou testovat proti verzi, která je "rovna", "větší než" nebo "rovna nebo větší než". < br > < br > < silný > Netstat Ports < / silný > - Netstat Ports používají kombinaci čísla portu, protokolu a programu. Pokud jsou všechny přítomny, politika projde. < br > < br > < silný > Uživatelé < / silný > - Uživatelé pracují podobně jako Netstat Ports. Existuje-li uživatel se shodným názvem, statusem a heslem (proměnlivé, vyprší, vyžaduje), politika projde. < br > < br > < / p >';

$GLOBALS["lang"]['<p>A location is a physical address that can have devices associated with it.<br> <br>You can assign it coordinates (lat/long) and if there are devices assigned, the location will appear on the Open-AudIT Enterprise map.<br> <br></p>'] = '< p > Umístění je fyzická adresa, která může mít zařízení s ním spojená. < br > < br > Můžete ji přiřadit souřadnice (lat / long) a pokud jsou přiřazena zařízení, zobrazí se umístění na mapě Open- Audit Enterprise. < br > < br > < / p >';

$GLOBALS["lang"]['<p>A network is derived from discovery entries and device attributes.<br> <br>Open-AudIT can be configured to only accept audit results from the networks contained here. To set this go to the configuration and set the attribute <code>blessed_subnets_use</code>.<br> <br></p>'] = '< p > Síť je odvozena z vyhledávacích položek a atributů zařízení. < br > < br > Open- Audit lze konfigurovat pouze pro přijetí výsledků auditu ze sítí zde obsažených. Chcete-li to nastavit, přejděte do konfigurace a nastavte atribut < kód > požehnaný _ subnets _ use < / code >. < br > < br > < / p >';

$GLOBALS["lang"]['<p>A summary will display a list of items, grouped by the distinct values of the attribute specified by the <code>table</code> and <code>column</code> attributes.<br> <br>When a summary is executed, the result will be a list of distinct values for that <code>table</code> and <code>column</code>. There will be links on the values that allow the user to see the matching devices.<br> <br>If the attribute of <code>extra_columns</code> is populated, the resulting page will contain these columns in addition to the standard device columns.<br> <br></p>'] = '< p > Souhrn zobrazí seznam položek, seskupených podle odlišných hodnot atributu specifikovaných v tabulce < / kód > a < kód > sloupec < / kód > atributy. < br > < br > Při provedení shrnutí bude výsledkem seznam odlišných hodnot pro tento < kód > tabulku < / kód > a < kód > sloupec < / kód >. Na hodnotách budou odkazy, které umožní uživateli vidět odpovídající zařízení. < br > < br > Pokud je atribut < code > extra _ columns < / code > obsažen, výsledná stránka bude obsahovat tyto sloupce kromě standardních sloupců zařízení. < br > < br > < / p >';

$GLOBALS["lang"]['<p>Agents let you audit PCs without a discovery. Install the agent and it will check-in with the server each day and audit itself. It does not matter if your computers are firewalled, audit data will still appear in Open-AudIT.</p><p>When testing <strong>if</strong> an agent should perform actions, all three tests must pass (if the test is set). <strong>Then</strong> the actions are taken.</p>'] = '< p > Agenti vám umožní audit PC bez objevu. Nainstalujte agent a to bude check-in se serverem každý den a audit sám. Nezáleží na tom, zda jsou vaše počítače firewalled, auditní data se stále objeví v Open- Audit. < / p > < p > Při zkoušce < silné > pokud < / silné > činidlo by mělo provádět kroky, všechny tři zkoušky musí projít (je-li zkouška nastavena). < silný > Pak < / silný > opatření byla přijata. < / p >';

$GLOBALS["lang"]['<p>Applications are defined by you, the user and stored for Open-AudIT to use and associate with devices.<br> <br></p>'] = '< p > Aplikace jsou definovány vámi, uživatelem a uloženy pro Open- AudiT pro použití a spojení se zařízeními. < br > < br > < / p >';

$GLOBALS["lang"]['<p>Attributes are stored for Open-AudIT to use for particular fields.</p>'] = '< p > Atributy jsou uloženy pro Open- AudiT pro použití pro konkrétní pole. < / p >';

$GLOBALS["lang"]['<p>Being able to determine which machines are configured the same is a major part of systems administration and auditing &ndash; and now reporting on that will be made simple and automated. Once you define your baseline it will automatically run against a set of devices on a predetermined schedule. The output of these executed baselines will be available for web viewing, importing into a third party system or even as a printed report.<br> <br> Baselines enable you to combine audit data with a set of attributes you have previously defined (your baseline) to determine compliance of devices.<br> <br> For example - you might create a baseline from a device running Centos 6 which acts as one of your apache servers in a cluster. You know this particular server is configured just the way you want it but you are unsure if other servers in the cluster are configured exactly the same. Baselines enables you to determine this.<br> <br> </p>'] = '< p > Být schopen určit, které stroje jsou nakonfigurovány stejně, je hlavní součástí správy systémů a auditu & ndash; a nyní podávání zpráv o tom bude jednoduché a automatizované. Jakmile definujete výchozí hodnotu, bude automaticky běžet proti sadě zařízení v předem stanoveném rozvrhu. Výstup těchto provedených základních linií bude k dispozici pro prohlížení webových stránek, import do systému třetích stran nebo dokonce jako tisková zpráva. < br > < br > Základy vám umožní kombinovat auditní data se souborem atributů, které jste dříve definovali (vaše základní) pro určení shody zařízení. < br > < br > Například - můžete vytvořit výchozí hodnotu ze zařízení spuštěného Centos 6, které funguje jako jeden z vašich apache serverů ve clusteru. Víte, že tento konkrétní server je nakonfigurován přesně tak, jak chcete, ale nejste si jisti, zda jsou ostatní servery v clusteru nakonfigurovány přesně stejně. Základní linie vám umožní určit toto. < br > < br > < / p >';

$GLOBALS["lang"]['<p>Clusters are stored in Open-AudIT to associate devices to better record, manage and estimate licensing costs.<br> <br></p>'] = '< p > Clusters jsou uloženy v Open- Audit pro propojení zařízení pro lepší zaznamenávání, správu a odhad licenčních nákladů. < br > < br > < / p >';

$GLOBALS["lang"]['<p>Components is a generic term used for the tables that store the attributes for a device. Those tables are: access_point, arp, bios, certificate, cli_config, disk, dns, file, ip, log, memory, module, monitor, motherboard, netstat, network, nmap, optical, pagefile, partition, policy, print_queue, processor, radio, route, san, scsi, server, server_item, service, share, software, software_key, sound, task, usb, user, user_group, variable, video, vm, windows.</p><p> In addition we class the following tables also as device related: application, attachment, cluster, credential, image.</p>'] = '< p > Komponenty je obecný výraz používaný pro tabulky, které ukládají atributy pro zařízení. Tyto tabulky jsou: access _ point, arp, bios, certifikát, cli _ config, disk, dns, file, ip, log, paměť, modul, monitor, základní deska, netstat, síť, nmap, optické, pagefile, oddíl, politika, tisk _ fronta, procesor, rádio, route, san, scsi, server, server _ prvek, služba, sdílení, software, software _ key, zvuk, úkol, usb, uživatel, uživatel _ skupina, proměnná, video, vm, windows. < / p > < p > Kromě toho třídíme následující tabulky také jako související zařízení: aplikace, připojení, cluster, kreditní, obrázek. < / p >';

$GLOBALS["lang"]['<p>Credentials are encrypted when stored in the database.<br> <br>When a Discovery is run, a device has its credentials retrieved and tested for connection first (from the <code>credential</code> table). If these fail, then credentials associated with the given Org <code>credentials.org_id</code> is also tested against the device. Working credentials are stored at an individual device level in the credential table (note - no "s" in the table name).<br> <br>SSH keys are tested before SSH username / password. When testing SSH, credentials will also be marked as working with sudo or being root.<br> <br>For ease of use, Windows passwords should not contain a single or double quote. This is a remote WMI limitation, not an Open-AudIT limitation.<br> <br></p>'] = '< p > Kredity jsou šifrovány, pokud jsou uloženy v databázi. < br > < br > Když je spuštěn Discovery, zařízení má své pověřovací listiny získané a testované pro připojení jako první (z tabulky < code > credential < / code >). Pokud selžou, pak se proti zařízení také zkouší pověřovací listina spojená s daným Org < code > creditials.org _ id < / code >. Pracovní údaje jsou uloženy na úrovni jednotlivých zařízení v kreditní tabulce (poznámka - ne "s" v názvu tabulky). < br > < br > SSH klávesy jsou testovány před SSH uživatelské jméno / heslo. Při testování SSH budou údaje označeny také jako práce se sudo nebo je root. < br > < br > Pro snadné použití by neměla Windows hesla obsahovat ani jednu nebo dvojitou citaci. Toto je omezení WMI na dálku, ne omezení Open- Audit. < br > < br > < / p >';

$GLOBALS["lang"]['<p>Credentials are used to access devices.<br> <br>Configuring credentials should be one of the first things you do after installing Open-AudIT.<br> <br></p>'] = '< p > Kredity se používají pro přístup k zařízením. < br > < br > Konfigurační pověření by měla být jednou z prvních věcí, kterou uděláte po instalaci Open- AudiT. < br > < br > < / p >';

$GLOBALS["lang"]['<p>Define your racks and assign devices into their positions. You already have your devices in Open-AudIT and you know your locations. Open-AudIT extends this to allow you to create a rack and assign devices to it. Open-AudIT will even provide a visualisation of the rack and the devices contained within. If you provide a device picture, that picture will be used in the visualisation. You can look at the rack on the screen and see the same items you would see if you were standing in front of it.<br> <br></p>'] = '< p > Definujte své regály a přiřaďte zařízení do jejich pozic. Už máte zařízení v Open- Auditu a znáte své pozice. Open- Audit rozšiřuje toto, aby vám umožnilo vytvořit rack a přiřadit zařízení k němu. Open- Audit bude dokonce poskytovat vizualizaci racku a zařízení obsažené uvnitř. Pokud poskytnete obrázek zařízení, bude tento obrázek použit při vizualizaci. Můžete se podívat na stojan na obrazovce a vidět stejné položky, které byste viděli, kdybyste stáli před ním. < br > < br > < / p >';

$GLOBALS["lang"]['<p>Devices on your network need to be managed. But how do you keep your records up to date? A spreadsheet - defintley not. That will be out of date in hours, if not days. Why manually try to keep up. Use Open-AudIT to automatically scan your networks and record your devices - manufacturer, model, serial and more than 100 other attributes. Full lists of software, services, disks, open ports, users, etc. Automatically see if an attribute has been added, removed or changed.<br> <br>Once Open-AudIT is setup, you can sit back and relax. Have change reports emailed to you on a schedule, for example - what new devices did we discover this week? What new software was installed this week? Were there any hardware changes last month?<br> <br>Expand on the stored fields easily with your own custom attributes.<br> <br>Even add devices that are not connected to your network or those devices your Open-AudIT server cannot reach.<br> <br>Computers, switches, routers, printers or any other device on your network - Open-AudIT can audit them all.<br> <br></p>'] = '< p > Zařízení ve Vaší síti je třeba spravovat. Ale jak se vaše záznamy aktualizují? Tabulka - ne definitivní. To bude zastaralé během hodin, ne-li dnů. Proč manuálně držet krok. Pomocí Open- Auditu automaticky skenujete sítě a zaznamenáváte zařízení - výrobce, model, sériový a více než 100 dalších atributů. Kompletní seznamy softwaru, služeb, disků, otevřených portů, uživatelů atd. Automaticky zjistit, zda atribut byl přidán, odstraněn nebo změněn. < br > < br > Po nastavení Open- Audit, můžete sedět a relaxovat. Mají změny zprávy e-mailem pro vás na rozvrhu, například - jaké nové zařízení jsme objevili tento týden? Jaký nový software byl nainstalován tento týden? Byly v minulém měsíci nějaké změny hardwaru? < br > < br > Expand na uložených polích snadno s vašimi vlastními atributy. < br > < br > Dokonce přidat zařízení, která nejsou připojena k vaší síti nebo zařízení, kam váš Open- AudiT server nemůže dosáhnout. < br > < br > Počítače, spínače, routery, tiskárny nebo jakékoli jiné zařízení ve vaší síti - Open- Audit je může všechny ověřit. < br > < br > < / p >';

$GLOBALS["lang"]['<p>Discoveries are at the very heart of what Open-AudIT does.<br> <br>How else would you know "What is on my network?"<br> <br>Discoveries are prepared data items that enable you to run a discovery upon a network in a single click, without entering the details of that network each and every time.<br> <br></p>'] = '< p > Discovery jsou jádrem toho, co Open- Audit dělá. < br > < br > Jak jinak byste věděli "Co je v mé síti?" < br > < br > Discovery jsou připravené datové položky, které vám umožní spustit objev na síti jediným kliknutím, aniž byste pokaždé zadali podrobnosti této sítě. < br > < br > < / p >';

$GLOBALS["lang"]['<p>Discovery Options are a global setting changed in the <a href="../configuration?configuration.name=discovery_default_scan_option">configuration</a>. If you have an Open-AudIT Enterprise license these are settable per discovery and in addition futher customizable as required. Discovery Options are as follows (including an indicitave time to scan an individual IP):<br/><br><strong>UltraFast</strong>: <i>1 second</i>. Scan only the ports that Open-AudIT needs to use to talk to the device and detect an IOS device (WMI, SSH, SNMP, Apple Sync). An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is not considered open. Device must respond to an Nmap ping. Use aggressive timing.<br><br/><strong>SuperFast</strong>: <i>5 seconds</i>. Scan the top 10 TCP and UDP ports, as well as port 62078 (Apple IOS detection). An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is not considered open. Device must respond to an Nmap ping. Use aggressive timing.<br/><br/><strong>Fast</strong>: <i>40 seconds</i>. Scan the top 100 TCP and UDP ports, as well as port 62078 (Apple IOS detection). An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is not considered open. Device must respond to an Nmap ping. Use aggressive timing.<br/><br/><strong>Medium (Classic)</strong>: <i>90 seconds</i>. As close to a traditional Open-AudIT scan as we can make it. Scan the top 1000 TCP ports, as well as 62078 (Apple IOS detection) and UDP 161 (SNMP). An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is considered open (and will trigger device detection). Devices are scanned regardless of a response to an Nmap ping. Use aggressive timing.<br/><br/><strong>Medium</strong>: <i>100 seconds</i>. Scan the top 1000 TCP and top 100 UDP ports, as well as port 62078 (Apple IOS detection). An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is not considered open. Device must respond to an Nmap ping. Use aggressive timing.<br/><br/><strong>Slow</strong>: <i>4 minutes</i>. Scan the top 1000 TCP and top 100 UDP ports, as well as port 62078 (Apple IOS detection). Version detection enabled. An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is considered open (and will trigger device detection). Device must respond to an Nmap ping. Use normal timing.<br/><br/><strong>UltraSlow</strong>: <i>20 minutes</i>. Not recommended. Scan the top 1000 TCP and UDP ports, as well as port 62078 (Apple IOS detection). Devices are scanned regardless of a response to an Nmap ping. Version detection enabled. An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is considered open (and will trigger device detection). Use polite timing.<br/><br/><strong>Custom</strong>: <i>Unknown time</i>. When options other than as set by a standard discovery preset are altered.<br><br></p>'] = '< p > Objevení Možnosti jsou globální nastavení změněné v konfiguraci < a href =.. "/ konfiguration.name = discovery _ default _ scan _ option" > konfigurace < / a >. Máte-li Open- Audit Enterprise licence tyto jsou nastavitelné na objev a navíc futher přizpůsobitelné podle potřeby. Objevení Volby jsou následující (včetně indicitave time to scan an an individual IP): < br / > < br > < strong > UltraFast < / strong >: < i > 1 sekunda < / i >. Vyhledat pouze porty, které Open- Audit potřebuje použít k komunikaci se zařízením a detekci zařízení IOS (WMI, SSH, SNMP, Apple Sync). < code > open code 124; filtrovaný < / code > port je považován za otevřený. < kód > filtrovaný < / kód > port není považován za otevřený. Zařízení musí reagovat na ping Nmap. Použijte agresivní načasování. Prohledejte top 10 TCP a UDP portů, stejně jako port 62078 (detekce Apple IOS). < code > open code 124; filtrovaný < / code > port je považován za otevřený. < kód > filtrovaný < / kód > port není považován za otevřený. Zařízení musí reagovat na ping Nmap. Použijte agresivní načasování. Skenujte horní 100 TCP a UDP portů, stejně jako port 62078 (detekce Apple IOS). < code > open code 124; filtrovaný < / code > port je považován za otevřený. < kód > filtrovaný < / kód > port není považován za otevřený. Zařízení musí reagovat na ping Nmap. Použijte agresivní načasování. < br / > < br / > < silné > střední (Classic) < / silné >: < i > 90 sekund < / i >. Tak blízko k tradičnímu Open- Auditskému skenu, jak jen to půjde. Skenujte top 1000 TCP portů, stejně jako 62078 (detekce Apple IOS) a UDP 161 (SNMP). < code > open code 124; filtrovaný < / code > port je považován za otevřený. < kód > filtrovaný < / kód > port je považován za otevřený (a bude detekce spouštěcího zařízení). Zařízení jsou skenována bez ohledu na reakci na Nmapový ping. Použijte agresivní načasování. Prohledej top 1000 TCP a 100 UDP portů, stejně jako port 62078 (detekce Apple IOS). < code > open code 124; filtrovaný < / code > port je považován za otevřený. < kód > filtrovaný < / kód > port není považován za otevřený. Zařízení musí reagovat na ping Nmap. Použijte agresivní načasování. Prohledej top 1000 TCP a 100 UDP portů, stejně jako port 62078 (detekce Apple IOS). Detekce verzí povolena. < code > open code 124; filtrovaný < / code > port je považován za otevřený. < kód > filtrovaný < / kód > port je považován za otevřený (a bude detekce spouštěcího zařízení). Zařízení musí reagovat na ping Nmap. Použijte normální načasování. Nedoporučuje se. Prohledej top 1000 TCP a UDP portů, stejně jako port 62078 (detekce Apple IOS). Zařízení jsou skenována bez ohledu na reakci na Nmapový ping. Detekce verzí povolena. < code > open code 124; filtrovaný < / code > port je považován za otevřený. < kód > filtrovaný < / kód > port je považován za otevřený (a bude detekce spouštěcího zařízení). Použijte slušné načasování. < br / > < br / > < silné > Vlastní < / silné >: < i > Neznámý čas < / i >. Pokud jsou změněny jiné možnosti než nastavené standardním přednastaveným objevem. < br > < br > < / p >';

$GLOBALS["lang"]['<p>Groups are used as simple lists of devices that match the required conditions. If requested using JSON they return a list of <code>devices.id</code> only. If requested using the web interface, they return the standard column attribute list.<br> <br></p>'] = '< p > Skupiny se používají jako jednoduché seznamy zařízení, která odpovídají požadovaným podmínkám. Na požádání pomocí JSON vrátí pouze seznam kódů < > devices.id < / code >. Na požádání pomocí webového rozhraní vrátí standardní seznam atributů sloupce. < br > < br > < / p >';

$GLOBALS["lang"]['<p>If the user logging on to Open-AudIT does not have the access to search LDAP (and you are using OpenLDAP), you can use another account which does have this access. Use the <code>ldap_dn_account</code> and <code>ldap_dn_password</code> to configure this.<br> <br><strong>Helpful Documentation</strong><br> <br>
        <a href="/index.php/auth/help">General Auth Help</a><br> <br>
        <a href="/index.php/faq?name=Using Entra for Auth">Using Entra for Auth</a><br> <br>
        <a href="/index.php/faq?name=Using OKTA for Auth">Using OKTA for Auth</a><br> <br>
        <a href="/index.php/faq?name=Troubleshooting LDAP Logins">Troubleshooting LDAP Logins</a><br> <br>
        <a href="/index.php/faq?name=Users, Roles and Orgs">Users, Roles and Orgs</a><br> <br></p>'] = '< p > Pokud uživatel přihlášení na Open- Audit nemá přístup k vyhledávání LDAP (a používáte OpenLDAP), můžete použít jiný účet, který má tento přístup. Použijte < kód > ldap _ dn _ account < / code > a < kód > ldap _ dn _ hesla < / code > pro konfiguraci tohoto. < br > < br > < silný > Užitečná dokumentace < / silný > < br > < br >
< a href = "/ index.php / auth / help" > General Auth Help < / a > < br > < br >
< a href = "/ index.php / faq? name = Using Entra for Auth" > Using Entra for Auth < / a > < br > < br >
< a href = "/ index.php / faq? name = Using OKTA for Auth" > Using OKTA for Auth < / a > < br > < br >
< a href = "/ index.php / faq? name = Troubleshooting LDAP Logins" > Troubleshooting LDAP Logins < / a > < br > < br >
< a href = "/ index.php / faq? name = Users, Roles and Orgs" > Users, Roles and Orgs < / a > < br > < br > < / p >';

$GLOBALS["lang"]['<p>If you add a device type, to display the associated icon you will have to manually copy the .svg formatted file to the directory:<br><em>Linux</em>:/usr/local/open-audit/public/device_images<br><em>Windows</em>: c:\xampp\htdocs\open-audit\device_images<br> <br>If you add a location type, to display the associated icon you will have to manually copy the 32x32px icon to the directory:<br><em>Linux</em>:/usr/local/open-audit/public/images/map_icons<br><em>Windows</em>: c:\xampp\htdocs\open-audit\images\map_icons</p><p>When the <i>resource</i> is a <code>device</code>, valid <i>types</i> are: <code>class</code>, <code>environment</code>, <code>status</code> and <code>type</code>. If the <i>resource</i> is <code>locations</code> or <code>org</code> the only valid <i>type</i> is <code>type</code>. If the <i>resource</i> is a <code>query</code> the only valid <i>type</i> is <code>menu_category</code>.</p>'] = '< p > Pokud přidáte typ zařízení, k zobrazení přidružené ikony budete muset ručně zkopírovat soubor .svg formátted do adresáře: < br > < em > Linux < / em >: / usr / local / open- audit / public / device _ images < br > < em > Windows < / em >: c:\ xampp\ htdocs\ open- audit\ device _ images < br > < br > Pokud přidáte typ umístění, zobrazíte příslušnou ikonu, abyste mohli ručně kopírovat ikonu 32x32px do adresáře: < br > < em > Linux < / em >: / usr / local / open- audit / public > br > < em > Pokud < i > zdroj < / i > je < kód > zařízení < / kód >, platí < i > typy < / i > jsou: < kód > třída < / kód >, < kód > prostředí < / kód >, < kód > stav < / kód > a < kód > typ < / kód >. Pokud < i > zdroj < / i > je < kód > umístění < / kód > nebo < kód > org < / kód > pouze platný < i > typ < / i > je < kód > typ < / kód >. Pokud < i > zdroj < / i > je < kód > dotaz < / kód > pouze platný < i > typ < / i > je < kód > menu _ kategorie < / kód >. < / p >';

$GLOBALS["lang"]['<p>If you intend to completely audit your cloud machines, do not forget you will also need those credentials saved in Open-AudIT.</p><p>Make sure you allow the correct ports if you are using Microsoft Azure (22 for SSH, etc). Check your Virtual Machine -> Networking rules.<br> <br></p>'] = '< p > Pokud máte v úmyslu provést kompletní audit svých cloudových strojů, nezapomeňte, že budete také potřebovat tyto pověřovací listiny uložené v Open- Auditu. < / p > < p > Ujistěte se, že povolíte správné porty, pokud používáte Microsoft Azure (22 pro SSH, atd.). Zkontrolujte si pravidla virtuálního stroje - > Networking. < br > < br > < / p >';

$GLOBALS["lang"]['<p>If you select a List type, the "values" field will be enabled. You should put a comma separated list of selectable values here. These will display in a dropdown box whenever the field is edited.<br> <br>Like most other attributes, Fields can be bulk edited. Use the Bulk Edit function as you normally would and you will see the Fields are available for input.<br> <br>View the device details screen, open the section containing the field and (if you have sufficient access) you can click on the field value to edit it.<br> <br></p>'] = '< p > Pokud zvolíte typ seznamu, bude povoleno pole "value". Zde byste měli umístit oddělený seznam volitelných hodnot. Tyto budou zobrazeny v rozbalovacím poli vždy, když je pole editováno. < br > < br > Jako většina jiných atributů, Pole lze editovat volně. Použijte funkci Bulk Edit jako obvykle a uvidíte, že pole jsou k dispozici pro vstup. < br > < br > Zobrazit obrazovku podrobnosti zařízení, otevřete sekci obsahující pole a (pokud máte dostatečný přístup) můžete kliknout na hodnotu pole pro jeho úpravu. < br > < br > < / p >';

$GLOBALS["lang"]['<p>In the ever-changing world of computer security where new vulnerabilities are being discovered and patched every day, enforcing security compliance must be a continuous process. It also needs to include a way to make adjustments to policies, as well as periodic assessment and risk monitoring. The OpenSCAP ecosystem provides tools and customizable policies for a quick, cost-effective and flexible implementation of these processes.</p>'] = '< p > V neustále se měnícím světě počítačové bezpečnosti, kde jsou objevována nová zranitelná místa a každý den opravována, musí být prosazování dodržování bezpečnosti nepřetržitým procesem. Musí rovněž zahrnovat způsob, jak provádět úpravy politik, jakož i pravidelné hodnocení a sledování rizik. Ekosystém OpenSCAP poskytuje nástroje a přizpůsobitelné politiky pro rychlé, nákladově efektivní a flexibilní provádění těchto procesů. < / p >';

$GLOBALS["lang"]['<p>Integrations allow you to setup device selection and schedules for Open-AudIT to talk to external systems.<br> <br></p>'] = '< p > Integrace vám umožní nastavit výběr zařízení a plány pro Open- AudiT pro komunikaci s vnějšími systémy. < br > < br > < / p >';

$GLOBALS["lang"]['<p>It is easy to see reports over time are extremely useful. Not only can you see the Open-AudIT data, but now what it has seen over time. All the devices discovered last week, last month or any other period. New software found. What about devices that have not been seen - where are they? How useful to be able to specify these items over time.<br> <br></p>'] = '< p > Je snadné vidět, že zprávy v průběhu času jsou velmi užitečné. Nejen, že můžete vidět Open- Audit data, ale nyní to, co viděl v průběhu času. Všechna zařízení byla objevena minulý týden, minulý měsíc nebo jiné období. Našel se nový software. A co zařízení, která nebyla viděna - kde jsou? Jak užitečné je určit tyto položky v čase. < br > < br > < / p >';

$GLOBALS["lang"]['<p>Nmap timing details are found on the bottom of this linked page <a href="https://nmap.org/book/man-performance.html" target="_blank">https://nmap.org/book/man-performance.html</a>. From that page:<br> <br><em>If you are on a decent broadband or ethernet connection, I would recommend always using -T4 (Aggressive). Some people love -T5 (Insane) though it is too aggressive for my taste. People sometimes specify -T2 (Polite) because they think it is less likely to crash hosts or because they consider themselves to be polite in general. They often do not realize just how slow -T2 really is. Their scan may take ten times longer than a default scan. Machine crashes and bandwidth problems are rare with the default timing options -T3 (Normal) and so I normally recommend that for cautious scanners. Omitting version detection is far more effective than playing with timing values at reducing these problems.</em><footer>Gordon <i>Fyodor</i> Lyon</footer><br> <br></p>'] = '< p > Načasování Nmap se nachází v dolní části této propojené stránky < a href = "https: / / nmap.org / book / man-execumente.html" target = "_ blank" > https: / / nmap.org / book / man-execumence.html < / a >. Z této stránky: < br > < br > < em > Pokud jste na slušném širokopásmovém připojení nebo ethernet připojení, doporučuji vždy používat -T4 (Agresivní). Někteří lidé milují -T5 (Insane), i když je příliš agresivní na můj vkus. Lidé někdy specifikují -T2 (Polite), protože si myslí, že je méně pravděpodobné, že havaruje hostitele nebo protože se považují za zdvořilé obecně. Často si neuvědomují, jak pomalé je -T2. Jejich sken může trvat desetkrát déle než standardní sken. Strojové zkraty a problémy s šířkou pásma jsou vzácné s výchozími možnostmi načasování -T3 (Normal), a proto obvykle doporučuji, aby pro opatrné skenery. Detekce omitující verze je mnohem účinnější než hraní s časovými hodnotami při snižování těchto problémů. < / em > < footer > Gordon < i > Fjodor < / i > Lyon < / footer > < br > < br > < / p >';

$GLOBALS["lang"]['<p>Open-AudIT can be configured to use different methods to authenticate a user and in addition, to create a user account using assigned roles and orgs based on group membership.<br> <br></p>'] = '< p > Open- Audit lze konfigurovat tak, aby používaly různé metody k ověření pravosti uživatele a kromě toho vytvořily uživatelský účet pomocí přiřazených rolí a orgů založených na členství ve skupině. < br > < br > < / p >';

$GLOBALS["lang"]['<p>Open-AudIT can retrieve details about a file or directory of files and monitor these files for changes as per other attributes in the Open-AudIT database.<br> <br>This feature works out of the box for Linux Open-AudIT servers, but needs a change to the service account name under a Windows Open-AudIT server.<br> <br>Supported clients are Windows and Linux.<br> <br></p>'] = '< p > Open- Aud IT může získat podrobnosti o souboru nebo adresáři souborů a sledovat tyto soubory pro změny podle jiných atributů v databázi Open- AudiT. < br > < br > Tato funkce funguje v krabici pro servery Linux Open- AudiT, ale potřebuje změnu názvu servisního účtu pod serverem Windows Open- AudiT. < br > < br > Podporované klienty jsou Windows a Linux. < br > < br > < / p >';

$GLOBALS["lang"]['<p>Open-AudIT can retrieve details about a file, ask the native package manager if they are known to it and monitor these files for changes as per other attributes in the Open-AudIT database.<br> <br>Supported clients are Linux only.<br> <br></p>'] = '< p > Open- Aud IT může získat podrobnosti o souboru, zeptat se místního správce balíku, zda jsou mu známy, a sledovat tyto soubory pro změny podle jiných atributů v databázi Open- AudiT. < br > < br > Podporované klienty jsou pouze Linux. < br > < br > < / p >';

$GLOBALS["lang"]['<p>Open-AudIT can store information in custom fields that are associated with each device.<br> <br>Once an Additional Field has been created it can be used in queries and groups just like any other attribute in the database.<br> <br></p>'] = '< p > Open- Audit může ukládat informace do vlastních polí, která jsou spojena s každým zařízením. < br > < br > Jakmile bylo vytvořeno dodatečné pole, může být použito v dotazech a skupinách stejně jako jakýkoli jiný atribut v databázi. < br > < br > < / p >';

$GLOBALS["lang"]['<p>Open-AudIT comes with many queries inbuilt. If you require a specific query and none of the pre-packaged queries fit your needs, it is quite easy to create a new one and load it into Open-AudIT for running.<br> <br></p>'] = '< p > Open- Aud IT přichází s mnoha dotazy zabudované. Pokud požadujete konkrétní dotaz a žádný z předem balených dotazů neodpovídá vašim potřebám, je poměrně snadné vytvořit nový a načíst jej do Open- AudiT pro běh. < br > < br > < / p >';

$GLOBALS["lang"]['<p>Open-AudIT comes with many summaries inbuilt. If you require a specific summary and none of the pre-packaged summaries fit your needs, it is quite easy to create a new one and load it into Open-AudIT for running.<br> <br></p>'] = '< p > Open- Aud IT přichází s mnoha souhrny zabudované. Pokud potřebujete konkrétní souhrn a žádný z předem balených souhrnů neodpovídá vašim potřebám, je poměrně snadné vytvořit nový a načíst jej do Open- AudiT pro běh. < br > < br > < / p >';

$GLOBALS["lang"]['<p>Open-AudIT is supported by FirstWave with an amazing level of support. If you prefer an active community of support givers, theres that as well. Where else can you talk directly to the developers and get a response within 24 hours? Just try that with other products! Amazing support. Full stop. You need support, we provide support. No ifs or buts. Great support. Period.<br> <br></p>'] = '< p > Open- Audit je podporován firstWave s úžasnou úrovní podpory. Pokud dáváte přednost aktivní komunitě podpůrných dárců, pak také. Kde jinde můžete mluvit přímo s vývojáři a získat odpověď do 24 hodin? Jen to zkuste s jinými produkty! Úžasná podpora. Zastavit. Potřebujete podporu, my ji poskytujeme. Žádné jestli nebo ale. Skvělá podpora. Období. < br > < br > < / p >';

$GLOBALS["lang"]['<p>Open-AudIT provides multi-tenancy out of the box!<br> <br>Orgs (organisations) in Open-AudIT are a key item. A user has a primary Org as well as a list of Orgs they can access. A user combines this with a list of assigned "Roles" that define what actions they can take on items assigned to the Orgs they have access to. The combination of a users "orgs" and "roles" define what they can and cannot do within Open-AudIT.<br> <br>Most items in Open-AudIT are assigned to an Org. Devices, Locations, Networks, etc.<br> <br>Orgs can have child Orgs. Think of an organisational chart (tree) structure. If a user has access to a specific Org, they also have access to that Orgs descendants. For more information, see this <a href="/index.php/faq?name=Users, Roles and Orgs">FAQ</a>.</p>'] = '< p > Open- Audit poskytuje multi- tenancy mimo box! < br > < br > Orgs (organizace) v Open- Audit jsou klíčové položky. Uživatel má primární Org, stejně jako seznam Orgů, ke kterým může přístup. Uživatel to kombinuje se seznamem přiřazených "Roles", který definuje, jaké akce mohou přijmout na položky přidělené k Orgs mají přístup k. Kombinace uživatelů "orgs" a "roles" definují, co mohou a nemohou dělat v rámci Open- Audit. < br > < br > Většina položek v Open- Audit jsou přiřazeny k Org. Zařízení, umístění, sítě, atd. < br > < br > Orgs mohou mít dětské Orgy. Představte si organizační strukturu grafu (stromu). Pokud má uživatel přístup k určitému Orgu, má také přístup k potomkům těchto Orgů. Více informací naleznete zde < a href = "/ index.php / faq? name = Users, Roles and Orgs" > FAQ < / a >. < / p >';

$GLOBALS["lang"]['<p>Open-AudIT provides multi-tenancy out of the box!<br> <br>Orgs (organisations) in Open-AudIT are a key item. A user has a primary Org as well as a list of Orgs they can access. A user combines this with a list of assigned "Roles" that define what actions they can take on items assigned to the Orgs they have access to. The combination of a users "orgs" and "roles" define what they can and cannot do within Open-AudIT.<br> <br>Most items in Open-AudIT are assigned to an Org. Devices, Locations, Networks, etc.<br> <br>Orgs can have child Orgs. Think of an organisational chart (tree) structure. If a user has access to a specific Org, they also have access to that Orgs descendants.</p>'] = '< p > Open- Audit poskytuje multi- tenancy mimo box! < br > < br > Orgs (organizace) v Open- Audit jsou klíčové položky. Uživatel má primární Org, stejně jako seznam Orgů, ke kterým může přístup. Uživatel to kombinuje se seznamem přiřazených "Roles", který definuje, jaké akce mohou přijmout na položky přidělené k Orgs mají přístup k. Kombinace uživatelů "orgs" a "roles" definují, co mohou a nemohou dělat v rámci Open- Audit. < br > < br > Většina položek v Open- Audit jsou přiřazeny k Org. Zařízení, umístění, sítě, atd. < br > < br > Orgs mohou mít dětské Orgy. Představte si organizační strukturu grafu (stromu). Pokud má uživatel přístup k určitému Orgu, má také přístup k potomkům těchto Orgů. < / p >';

$GLOBALS["lang"]['<p>Quickly view the status of devices on your network.<br> <br></p>'] = '< p > Rychlé zobrazení stavu zařízení ve Vaší síti. < br > < br > < / p >';

$GLOBALS["lang"]['<p>Roles in Open-AudIT are a key item. A user has a primary Org as well as a list of Orgs they can access. A user combines this with a list of assigned Roles that define what actions they can take on items assigned to the Orgs they have access to. The combination of a users "orgs" and "roles" define what they can and cannot do within Open-AudIT.<br> <br>
        Get the complete Open-AudIT Enterprise experience. Creating roles allows fine grained control over what your users can do within Open-AudIT.<br> <br>
        The primary method for authorisation (what a user can do) is based on the users Roles. Default roles are defined as admin, org_admin, reporter and user. Each role has a set of permissions (Create, Read, Update, Delete) for each endpoint. The ability to define additional roles and edit existing roles is enabled in Open-AudIT Enterprise.<br> <br>Roles can also be used with LDAP (Active Directory and OpenLDAP) authorisation. Enterprise licensed installations have the ability to customise the LDAP group for each defined role.<br> <br></p>'] = '< p > Role v Open- Aud IT je klíčová položka. Uživatel má primární Org, stejně jako seznam Orgů, ke kterým může přístup. Uživatel to kombinuje se seznamem přiřazených Roles, které definují, jaké akce mohou přijmout na položky přidělené k Orgs, ke kterým mají přístup. Kombinace uživatelů "orgs" a "roles" definují, co mohou a nemohou dělat v rámci Open- Audit. < br > < br >
Získejte kompletní Open- Audit Enterprise zkušenosti. Vytvoření rolí umožňuje jemné zrnité ovládání nad tím, co vaši uživatelé mohou dělat v rámci Open- Audit. < br > < br >
Primární metoda pro povolování (co může uživatel udělat) je založena na uživatelích Roles. Výchozí role jsou definovány jako admin, org _ admin, reporter a uživatel. Každá role má soubor oprávnění (Vytvořit, přečíst, Aktualizovat, Smazat) pro každý koncový bod. Schopnost definovat další role a upravovat stávající role je povolena v Open- Audit Enterprise. < br > < br > Roles lze použít také s povolením LDAP (Active Directory and OpenLDAP). Podniky licencované instalace mají schopnost přizpůsobit skupinu LDAP pro každou definovanou roli. < br > < br > < / p >';

$GLOBALS["lang"]['<p>Rules examine attributes and make cahnges based on the appropriate rule.</p>'] = '< p > Pravidla zkoumají atributy a dělají kahnges na základě příslušného pravidla. < / p >';

$GLOBALS["lang"]['<p>Scanning options allow you to easily apply a set of options to a discovery.<br> <br></p>'] = '< p > Možnosti skenování vám umožní snadno použít sadu možností k objevení. < br > < br > < / p >';

$GLOBALS["lang"]['<p>Simple, intuitive, accurate geographic mapping provided by Google Maps. Open-AudIT leverages Google Maps to provide live, interactive geographic mapping of device locations. Automated conversion of street addresses to geocodes and longitude / latitude.<br> <br>
        </p>'] = '< p > Jednoduché, intuitivní, přesné geografické mapování poskytované mapami Google. Open- Audit páky Mapy Google poskytují živé, interaktivní geografické mapování umístění zařízení. Automatická přeměna adresy ulic na geokódy a zeměpisnou délku / zeměpisnou šířku. < br > < br >
< / p >';

$GLOBALS["lang"]['<p>Software Packages are used to determine if antivirus, backup, firewall, approved or banned software is installed.<br> <br></p>'] = '< p > Software Packages se používají k určení, zda je nainstalován antivirový, záložní, firewall, schválený nebo zakázaný software. < br > < br > < / p >';

$GLOBALS["lang"]['<p>Some examples of valid Subnet attributes are: 192.168.1.1 (a single IP address), 192.168.1.0/24 (a subnet), 192.168.1-3.1-20 (a range of IP addresses).<br> <br><em>NOTE</em> - Only a subnet (as per the examples - 192.168.1.0/24) will be able to automatically create a valid network for Open-AudIT. <br> <br>If you use an Active Directory type, make sure you have appropriate credentials to talk to your Domain Controller already in <a href="../credentials">credentials</a>.<br> <br></p>'] = '< p > Některé příklady platných atributů Subnet jsou: 192.168.1.1 (jednotná IP adresa), 192.168.1.0 / 24 (a subnet), 192.168.1-3.1-20 (řada IP adres). < br > < br > < em > NOTE < / em > - Pouze subnet (podle příkladů - 192.168.1.0 / 24) bude moci automaticky vytvořit platnou síť pro Open- Audit. < br > < br > Pokud používáte typ Active Directory, ujistěte se, že máte příslušné pověřovací listiny, abyste mohli mluvit se svým ovladačem domény již v < a href =. "/ pověření" > pověření < / a >. < br > < br > < / p >';

$GLOBALS["lang"]['<p>Supported clients are Linux only.<br> <br></p>'] = '< p > Podporovaní klienti jsou pouze Linux. < br > < br > < / p >';

$GLOBALS["lang"]['<p>Tasks have a schedule that mirrors the unix cron schedule. The attributes for minute, hour, day_of_month, month, day_of_week all act as per the cron definitions. You can select multiples of these using comma seperated values (no spaces). You can select every value using *.<br> <br>The <code>type</code> of the task can be one of: baselines, collectors, discoveries, queries, reports or summaries.<br> <br>If you wish to schedule a Baseline or Discovery, you will need to create these before creating the tasks. You must use the ID of the type of item in <code>sub_resource_id</code>. For example if you wish to schedule a Discovery, use that particular Discoveries ID in <code>sub_resource_id</code>.<br> <br>The value for <code>uuid</code> is specific to each Open-AudIT server. Your unique value can be found in the configuration.<br> <br>The <code>options</code> attribute is a JSON document containing any extra attributes required to run the task. The extra attributes for reports, queries and summaries are: <code>email_address</code> and <code>format</code>. The extra attribute for Bselines is <code>group_id</code>.<br> <br></p>'] = '< p > Úkoly mají plán, který odráží unix cron plán. Atributy pro minutu, hodinu, den _ z _ měsíce, měsíc, den _ z _ týdne všechny fungují podle definice cron. Můžete si vybrat násobky z nich pomocí čárkově oddělených hodnot (bez mezer). Můžete si vybrat každou hodnotu pomocí *. < br > < br > The < code > type < / code > of the job can be one of: baseline, collectors, objevies, questions, reports or summary. < br > < br > Pokud si přejete naplánovat výchozí hodnotu nebo Discovery, budete je muset vytvořit před vytvořením úkolů. Musíte použít ID typu položky v < kódu > sub _ resource _ id < / code >. Pokud si například přejete naplánovat Discovery, použijte konkrétní ID Discovery v < code > sub _ resource _ id < / code >. < br > < br > Hodnota pro < code > uid < / code > je specifická pro každý Open- Audit server. Vaši jedinečnou hodnotu naleznete v konfiguraci. < br > < br > Možnosti < / code > atribut je dokument JSON obsahující jakékoli další atributy potřebné pro spuštění úkolu. Další atributy pro zprávy, dotazy a shrnutí jsou: < code > email _ address < / code > a < code > format < / code >. Přídavný atribut pro Bselines je < kód > skupina _ id < / kód >. < br > < br > < / p >';

$GLOBALS["lang"]['<p>The <code>type</code> of the location will assign its icon.<br> <br></p>'] = '< p > < kód > typ < / kód > umístění přiřadí svou ikonu. < br > < br > < / p >';

$GLOBALS["lang"]['<p>The Attributes endpoint allows you to add customized values to different attributes in Open-AudIT, at the moment this feature works on the Class, Environment, Status and Type attributes on Devices, the Type attribute for both Locations and Orgs as well as the Menu Category for Queries. If you view an item of one of the prvious types (say view a Lkocation) you will notice the Type attribute must be selected from a drop-down box. This is where those values are stored. Hence, if you would like to add a new Type to be chosen for a Location, add it using the Attributes feature.</p>'] = '< p > Konečný parametr Atributy vám umožní přidat vlastní hodnoty do různých atributů v Open- Audit, v současné době tato funkce funguje na atributy třídy, životního prostředí, stavu a typu na zařízení, atributu Typ jak pro umístění a Orgy, stejně jako kategorie nabídky pro dotazy. Pokud si prohlížíte položku jednoho z prchavých typů (řekněme pohled na Lkotion), všimnete si, že atribut Type musí být vybrán z krabičky "drop-down". Tady jsou tyto hodnoty uloženy. Proto, pokud byste chtěli přidat nový typ, který bude vybrán pro umístění, přidejte jej pomocí funkce Atributy. < / p >';

$GLOBALS["lang"]['<p>The Collectors feature enables you to easily manage many "collector" computers that perform network discovery. All Collectors are centrally controlled from the Server. The only required network ports between the Collector and the Server are 80 and/or 443.<br> <br>It makes managing disparate networks quick, easy and simple. Open-AudIT Enterprise licensees get a single collector license included and have the option to buy more as required..<br> <br></p>'] = '< p > Funkce Collectors vám umožní snadno spravovat mnoho "kolektorů" počítačů, které provádějí objev sítě. Všichni sběratelé jsou centrálně ovládáni ze serveru. Jediné požadované síťové porty mezi Sběratelem a Serverem jsou 80 a / nebo 443. < br > < br > Díky tomu je řízení různých sítí rychlé, snadné a jednoduché. Open- Audit Enterprise licensees get a single collector licence included and have the option to buy more as required.. < br > < br > < / p >';

$GLOBALS["lang"]['<p>The SELECT section of your SQL <em>must</em> contain fully qualified columns. IE - <code>SELECT devices.id AS `devices.id`, devices.name AS `devices.name` ...</code>.<br> <br>The WHERE section of your SQL <em>must</em> contain <code>WHERE @filter</code> so Open-AudIT knows to restrict your query to the appropriate Orgs. SQL not containing this condition will result in the query failing to be created, unless you have the Admin role.<br> <br>An example query SQL showing attributes on devices that have an <code>os_group</code> attribute of "Linux" - <br><code>SELECT devices.id AS `devices.id`, devices.icon AS `devices.icon`, devices.type AS `devices.type`, devices.name AS `devices.name`, devices.os_name AS `devices.os_name` FROM devices WHERE @filter AND devices.os_group = "Linux"</code><br> <br></p>'] = '< p > Část SELECT vašeho SQL < em > musí < / em > obsahovat plně kvalifikované sloupce. IE - < kód > SELECT devices.id AS "devices.id", devices.name AS \'devices.name "... < / code >. < br > < br > KDE část vašeho SQL < em > must < / em > contact < code > Where @ filter < / code > so Open- Audit knows to limit your query to the approval orgs. SQL neobsahující tuto podmínku povede k selhání dotazu, pokud nemáte admin roli. < br > < br > Příklad dotazu SQL zobrazující atributy na zařízeních, která mají < kód > os _ group < / code > atribut" Linux "- < br > < kód > SELECT devices.id AS\' devices.id \', devices.icon AS\' devices.icon \', zařízení. typ AS\' devices.type \', devices.name AS\' devices.name \', devices.os _ name AS\' devices.os _ name \'From ectives Where @ filter AND devices.os _ group =" Linux "< / code > < br > < br > < / p >';

$GLOBALS["lang"]['<p>The SELECT section of your SQL <em>must</em> only contain <code>DISTINCT(devices.id)</code>.<br> <br>The WHERE section of your SQL <em>must</em> contain <code>WHERE @filter</code> so Open-AudIT knows to restrict your query to the appropriate Orgs. SQL not containing this condition will result in the group failing to be created.<br> <br>An example for SQL to select all devices running the Debian OS - <code>SELECT DISTINCT(devices.id) FROM devices WHERE @filter AND devices.os_family = "Debian"</code><br> <br></p>'] = '< p > Část SELECT vašeho SQL < em > musí < / em > obsahuje pouze < kód > DISTINCT (devices.id) < / kód >. < br > < br > KDE část vašeho SQL < em > musí < / em > obsahovat < kód > Where @ filter < / code >, takže Open- Audit ví omezit váš dotaz na příslušné Orgy. SQL neobsahující tuto podmínku povede k tomu, že skupina nebude vytvořena. < br > < br > Příklad pro SQL pro výběr všech zařízení spuštěných Debian OS - < kód > SELECT DISTINCT (devices.id) Ze zařízení Where @ filter AND devices.os _ family = "Debian" < / code > < br > < br > < / p >';

$GLOBALS["lang"]['<p>The license endpoint allows you to track the number of licenses found on your devices.<br> <br>To create an entry to track your licenses you <em>must</em> to provide a name, an organization, the number of licenses acquired and the name of the software. On the field <code>match_string</code> you must provide the name of the software that you want to track, you can use the percent sign (%) as a wildcard in the match_string.<br> <br></p>'] = '< p > Licenční endpoint vám umožní sledovat počet licencí nalezených na vašich zařízeních. < br > < br > Chcete-li vytvořit záznam pro sledování licencí, které < em > musí < / em > poskytnout jméno, organizaci, počet nabytých licencí a název softwaru. Na poli < kód > match _ string < / code > musíte uvést název softwaru, který chcete sledovat, můžete použít znak procenta (%) jako divokou kartu v match _ string. < br > < br > < / p >';

$GLOBALS["lang"]['<p>The network should be in the format 192.168.1.0/24.<br> <br></p>'] = '< p > Síť by měla být ve formátu 192.168.1.0 /24';

$GLOBALS["lang"]['<p>The primary and optional secondary items should be fully qualified - ie, devices.type or software.name.<br> <br></p>'] = '< p > Primární a volitelné sekundární položky by měly být plně kvalifikovány - tj., zařízení. typ nebo software.name. < br > < br > < / p >';

$GLOBALS["lang"]['<p>There is no need to do anything if you are running Open-AudIT on a Linux server.<br>
<br>
Windows clients are just fine and require no special actions, however.... to enable this feature the audit script must be run locally on the target Windows system. It cannot be run remotely as we do with WMI calls when running the audit script on one Windows machine, while targeting a second Windows machine. To do this we need to copy the audit script to the target Windows machine and then run it. Unfortunately the service account that Apache runs under is the Local System account. This account has no access to remote (network based) resources. To work around this issue the service must be run under another account. It is easiest to just use the local Administrator account, but you can try any account you like as long as it has the required privileges. The Local System account has as much local access as the local Administrator account.<br>
<br>
See our page on enabling <a href="/index.php/faq?name=Running Open-AudIT Apache Service Under Windows">Running Open-AudIT Apache Service Under Windows</a></p>'] = '< p > Pokud provozujete Open- Audit na Linuxovém serveru, není třeba nic dělat. < br >
< br >
Klienti Windows jsou v pořádku a nevyžadují žádné speciální akce, nicméně.... pro umožnění této funkce musí být auditní skript spuštěn lokálně na cílovém systému Windows. Nemůže být spuštěn na dálku, jak to děláme s WMI hovory při spuštění auditního skriptu na jednom zařízení Windows, při cílení na druhý Windows stroj. K tomu potřebujeme zkopírovat kontrolní skript do cílového zařízení Windows a pak jej spustit. Bohužel servisní účet, pod kterým Apache běží, je účet Local System. Tento účet nemá přístup ke vzdáleným (síťovým) zdrojům. K řešení této otázky musí být služba vedena na jiném účtu. Nejjednodušší je použít účet místního správce, ale můžete zkusit jakýkoli účet, který se vám líbí, pokud má požadované výsady. Účet místního systému má stejný místní přístup jako účet místního správce. < br >
< br >
Viz naše stránka o povolení < a href = "/ index.php / faq? name = Spustit Open- Audit Apache Service Under Windows" > Spustit Open- Audit Apache Service Under Windows < / a > < / p >';

$GLOBALS["lang"]['<p>These are the devices that live within a rack.<br> <br></p>'] = '< p > Jedná se o zařízení, která žijí uvnitř stojanu. < br > < br > < / p >';

$GLOBALS["lang"]['<p>This endpoint enables you to add your cloud infrastructure details. Open-AudIT will then reach out to your clouds using their native API and return your servers, just like any other device in Open-AudIT.<br> <br><em>NOTE</em> - To use this feature, we <em>must</em> enable the configuration items match_mac (for AWS) and match_hostname (for Azure). This will be done automatically the first time a cloud discovery is executed.<br> <br>Credentials for your cloud (<a href="/index.php/faq?name=Credentials for Microsoft Azure used in Cloud Discovery">Azure</a> or <a href="/index.php/faq?name=Credentials for Amazon AWS used in Cloud Discovery">AWS</a>) are required.<br> <br></p>'] = '< p > Tento koncový bod vám umožní přidat podrobnosti o vaší cloudové infrastruktuře. Open- Audit pak osloví vaše mraky pomocí jejich nativní API a vrátí vaše servery, stejně jako každé jiné zařízení v Open- Auditu. < br > < br > < em > POZOR < / em > - Pro použití této funkce, musíme < / em > umožnit konfigurační položky shodovat _ mac (pro AWS) a match _ hostname (pro Azure). To bude provedeno automaticky při prvním provedení objevu cloudu. < br > < br > Kredity pro váš cloud (< a href = "/ index.php / faq? name = Kredity pro Microsoft Azure used in Cloud Discovery" > Azure < / a > or < a href = "/ index.php / faq? name = Creditionals for Amazon AWS used in Cloud Discovery" > AWS < / a >) jsou povinné. < br > < br > < / p >';

$GLOBALS["lang"]['<p>We initially setup the default list of scripts with the default options. These default scripts cannot be deleted. You can create additional scripts for use by you as required. Your script will be based on one of the existing scripts and have custom options applied. The scripts can then be downloaded from the list page at menu -> Discover -> Audit Scripts -> List Audit Scripts<br> <br></p>'] = '< p > Nejprve nastavíme výchozí seznam skriptů s výchozími možnostmi. Tyto výchozí skripty nelze smazat. Můžete vytvořit další skripty pro vaše použití dle potřeby. Váš skript bude založen na jednom ze stávajících skriptů a budou použity vlastní možnosti. Scénáře pak můžete stáhnout ze seznamu v menu - > Objevte - > Auditní skripty - > Seznam Auditní skripty < br > < br > < / p >';

$GLOBALS["lang"]['<p>When using Regex for matching, a helpful page can be found on the <a href="https://www.php.net/manual/en/regexp.reference.meta.php" target="_blank"> PHP website</a>. Some differences to Perl Regex can be found <a href="https://www.php.net/manual/en/reference.pcre.pattern.differences.php" target="_blank">here</a>.</p>'] = '< p > Při použití Regex pro porovnání, užitečné stránky lze nalézt na < a href = "https: / / www.php.net / manual / en / regefp.reference.meta.php" target = "_ blank" > Webová stránka PHP < / a >. Některé rozdíly od Perl Regex lze nalézt < a href = "https: / / www.php.net / manual / en / reference.pcre.pattern.differences.php" target = "_ blank" > zde < / a >. < / p >';

$GLOBALS["lang"]['<p>Widgets can easily be created to show whatever is specific to your environment on your dashboards.<br> <br></p>'] = '< p > Widgets lze snadno vytvořit tak, aby na přístrojových deskách zobrazovalo vše, co je specifické pro Vaše prostředí. < br > < br > < / p >';

$GLOBALS["lang"]['<p>With Open-AudIT Professional and Enterprise you can automate and schedule discoveries, report generation, or baseline checks to run when you want, and as often as you need. Schedule your discoveries to run nightly and reports to be generated and emailed to key personnel each morning. Complex or simple schedules, device discovery and report generation is just a click away.<br> <br>Create individual discovery schedules for each subnet or AD controller, add in reports to be created for targeted audiences. Develop simple or complex schedules to support company needs, avoid backups or impact to operations, or simply to spread the load and speed-up audit completion.<br> <br></p>'] = '< p > S Open- Audit Profesionální a Enterprise můžete automatizovat a naplánovat objevy, hlásit generace, nebo základní kontroly spustit, když chcete, a tak často, jak budete potřebovat. Naplánujte si své objevy běžet v noci a zprávy, které mají být generovány a emailem klíčové personál každé ráno. Komplexní nebo jednoduché plány, objevování zařízení a generování hlášení je jen kliknutí. < br > < br > Vytvořit individuální plány objevů pro každý subnet nebo AD regulátor, přidat ve zprávách, které mají být vytvořeny pro cílené publikum. Vypracovat jednoduché nebo složité plány na podporu potřeb společnosti, vyhnout se zálohám nebo dopadu na provoz, nebo jednoduše rozšířit zatížení a zrychlit dokončení auditu. < br > < br > < / p >';

$GLOBALS["lang"]['<p>You can create a script with all the options for any of the existing audit scripts - not just Windows. AIX, ESX, Linux, OSX and Windows are all covered.<br> <br></p>'] = '< p > Můžete vytvořit skript se všemi možnostmi pro některý ze stávajících skriptů - nejen Windows. AIX, ESX, Linux, OSX a Windows jsou pokryty. < br > < br > < / p >';

$GLOBALS["lang"]['<p>You can use the percent % sign as a wildcard in the match_string.<br> <br></p>'] = '< p > Můžete použít znak% jako divokou kartu v match _ string. < br > < br > < / p >';

$GLOBALS["lang"]['<p>Your racks help refine exactly where your devices are located.<br> <br></p>'] = '< p > Vaše regály pomáhají přesně určit, kde jsou vaše zařízení umístěna. < br > < br > < / p >';

$GLOBALS["lang"]['A Google Maps API Key is required for this function.'] = 'Mapy Google API Pro tuto funkci je nutný klíč.';

$GLOBALS["lang"]['A JSON array of device IDs that will have this benchmark executed.'] = 'JSON pole ID zařízení, které bude mít tuto referenční hodnotu provedeno.';

$GLOBALS["lang"]['A JSON document containing the Orgs assigned to this user. IDs taken from <code>orgs.id</code>. If a user has access to an Org, they have access to that Orgs descendants.'] = 'Dokument JSON obsahující Orgy přidělené tomuto uživateli. Identifikátory odebrané z < kódu > orgs.id < / kód >. Pokud má uživatel přístup k Orgu, má přístup k potomkům Orgů.';

$GLOBALS["lang"]['A JSON document containing the required attributes depending on <code>scripts.type</code>.'] = 'Dokument JSON obsahující požadované atributy podle kódu < > scripts.type < / code >.';

$GLOBALS["lang"]['A JSON document containing the required attributes overriding the chosen discovery_scan_options.'] = 'Dokument JSON obsahující požadované atributy převažující nad zvoleným objevem _ scan _ options.';

$GLOBALS["lang"]['A JSON document containing the required attributes overriding the default device match options.'] = 'Dokument JSON obsahující požadované atributy převažující nad výchozími možnostmi shody zařízení.';

$GLOBALS["lang"]['A JSON document containing the roles assigned to this user. Role names taken from <code>roles.name</code>.'] = 'Dokument JSON obsahující role přidělené tomuto uživateli. Název role převzatý z < kódu > roles.name < / kód >.';

$GLOBALS["lang"]['A JSON object containing an array of attributes to change if the match occurs.'] = 'JSON objekt obsahující řadu atributů pro změnu, pokud dojde k zápasu.';

$GLOBALS["lang"]['A JSON object containing an array of attributes to match.'] = 'JSON objekt obsahující řadu atributů, které se shodují.';

$GLOBALS["lang"]['A JSON object containing collection specific options.'] = 'JSON objekt obsahující specifické možnosti sběru.';

$GLOBALS["lang"]['A JSON object populated via a Cloud discovery.'] = 'Objekt JSON obývaný objevem Cloud.';

$GLOBALS["lang"]['A JSON representation containing the details of the queue item to be executed.'] = 'Zastoupení JSON obsahující podrobnosti o položce fronty, která má být provedena.';

$GLOBALS["lang"]['A JSON representation of the fields for this integration.'] = 'JSON reprezentuje pole pro tuto integraci.';

$GLOBALS["lang"]['A JSON representation of the individual tests and their results on all devices this baseline has been run against.'] = 'JSON reprezentace jednotlivých testů a jejich výsledky na všech zařízeních tato výchozí hodnota byla spuštěna proti.';

$GLOBALS["lang"]['A JSON representation of the tests that make up this policy.'] = 'JSON reprezentuje testy, které tvoří tuto politiku.';

$GLOBALS["lang"]['A URL to a file to download.'] = 'URL do souboru ke stažení.';

$GLOBALS["lang"]['A calculated field that displays the number of times this piece of software was found on the computers in the selected Org (and its descendants if configured).'] = 'Vypočítané pole, které zobrazuje počet případů, kdy byl tento kus softwaru nalezen na počítačích ve zvoleném Orgu (a jeho potomky, pokud jsou konfigurovány).';

$GLOBALS["lang"]['A collector is either in Collector or Stand-Alone mode.'] = 'Sběratel je buď v režimu Sběratel, nebo Stand- Alone.';

$GLOBALS["lang"]['A comma separated list of values, one of which can be selected.'] = 'Samostatný seznam hodnot, z nichž jeden může být vybrán.';

$GLOBALS["lang"]['A command to run. When the agent is Windows based, this command is run from within the powershell agent.'] = 'Příkaz k útěku. Když je agent založen na Windows, je tento příkaz spuštěn zevnitř Powershell agenta.';

$GLOBALS["lang"]['A list of custom TCP ports to scan (22 is SSH, 135 is WMI, 62078 is iPhone sync).'] = 'Seznam vlastních TCP portů ke skenování (22 je SSH, 135 je WMI, 62078 je iPhone synchronizace).';

$GLOBALS["lang"]['A list of custom UDP ports to scan (161 is SNMP).'] = 'Seznam vlastních UDP portů ke skenování (161 je SNMP).';

$GLOBALS["lang"]['A lower number means it will be applied before other rules.'] = 'Nižší počet znamená, že se použije před ostatními pravidly.';

$GLOBALS["lang"]['A lower number means it will be applied before other rules. The default weight is 100.'] = 'Nižší počet znamená, že se použije před ostatními pravidly. Výchozí hmotnost je100.';

$GLOBALS["lang"]['A password (stored as a hash) that enables logon when using application authentication.'] = 'Heslo (uložené jako hash), které umožňuje přihlášení při použití autentizace aplikace.';

$GLOBALS["lang"]['A routing domain or address space where the IP addresses and MAC addresses are unique.'] = 'Směrování domény nebo adresního prostoru, kde IP adresy a MAC adresy jsou jedinečné.';

$GLOBALS["lang"]['A security zone is a administrative domain or policy domain within the Network Domain.'] = 'Bezpečnostní zóna je administrativní doménou nebo oblastí politiky v rámci domény sítě.';

$GLOBALS["lang"]['A short description of the log entry.'] = 'Krátký popis záznamu.';

$GLOBALS["lang"]['A string that matches the <code>software.name</code> attribute. You can use the standard SQL wildcard of percent (%) to match one or more characters.'] = 'Řetězec, který odpovídá atributu < code > software.name < / code >. K porovnání jednoho nebo více znaků můžete použít standardní SQL divokou kartu procenta (%).';

$GLOBALS["lang"]['AD Group'] = 'Skupina AD';

$GLOBALS["lang"]['ADSL, HFC, ISDN, etc.'] = 'ADSL, HFC, ISDN, atd.';

$GLOBALS["lang"]['AIX'] = 'AIX';

$GLOBALS["lang"]['ALL IPs'] = 'Všechny IP';

$GLOBALS["lang"]['API / Web Access'] = 'API / Web Access';

$GLOBALS["lang"]['API Key required.'] = 'Požadovaný API klíč.';

$GLOBALS["lang"]['API Result'] = 'Výsledek API';

$GLOBALS["lang"]['About'] = 'O';

$GLOBALS["lang"]['Accept'] = 'Přijmout';

$GLOBALS["lang"]['access_point'] = 'Přístupový bod';

$GLOBALS["lang"]['Access Point'] = 'Přístupový bod';

$GLOBALS["lang"]['access_token'] = 'Přístup Token';

$GLOBALS["lang"]['Access Token'] = 'Přístup Token';

$GLOBALS["lang"]['ack_by'] = 'Ack by';

$GLOBALS["lang"]['Ack By'] = 'Ack by';

$GLOBALS["lang"]['ack_date'] = 'Aktivní datum';

$GLOBALS["lang"]['Ack Date'] = 'Aktivní datum';

$GLOBALS["lang"]['ack_time'] = 'Čas akku';

$GLOBALS["lang"]['Ack Time'] = 'Čas akku';

$GLOBALS["lang"]['action'] = 'Akce';

$GLOBALS["lang"]['Action'] = 'Akce';

$GLOBALS["lang"]['action_audit'] = 'Akční audit';

$GLOBALS["lang"]['Action Audit'] = 'Akční audit';

$GLOBALS["lang"]['action_command'] = 'Akční příkaz';

$GLOBALS["lang"]['Action Command'] = 'Akční příkaz';

$GLOBALS["lang"]['action_devices_assigned_to_location'] = 'Akční zařízení určená k umístění';

$GLOBALS["lang"]['Action Devices Assigned To Location'] = 'Akční zařízení určená k umístění';

$GLOBALS["lang"]['action_devices_assigned_to_org'] = 'Akční prostředky přidělené na Org';

$GLOBALS["lang"]['Action Devices Assigned To Org'] = 'Akční prostředky přidělené na Org';

$GLOBALS["lang"]['action_download'] = 'Stáhnout akci';

$GLOBALS["lang"]['Action Download'] = 'Stáhnout akci';

$GLOBALS["lang"]['action_uninstall'] = 'Odinstalovat akci';

$GLOBALS["lang"]['Action Uninstall'] = 'Odinstalovat akci';

$GLOBALS["lang"]['actions'] = 'Akce';

$GLOBALS["lang"]['Actions'] = 'Akce';

$GLOBALS["lang"]['Activate'] = 'Aktivovat';

$GLOBALS["lang"]['Activate Key'] = 'Aktivovat klíč';

$GLOBALS["lang"]['Activate a free Enterprise license'] = 'Aktivovat licenci Enterprise zdarma';

$GLOBALS["lang"]['Active'] = 'Aktivní';

$GLOBALS["lang"]['Active / Active'] = 'Aktivní / aktivní';

$GLOBALS["lang"]['Active / Passive'] = 'Aktivní / pasivní';

$GLOBALS["lang"]['Active Directory'] = 'Aktivní adresář';

$GLOBALS["lang"]['Active Directory Domain'] = 'Aktivní adresář domény';

$GLOBALS["lang"]['active_directory_ou'] = 'Aktivní adresář';

$GLOBALS["lang"]['Active Directory Ou'] = 'Aktivní adresář';

$GLOBALS["lang"]['Active Directory Server'] = 'Aktivní adresářový server';

$GLOBALS["lang"]['ad_domain'] = 'Name';

$GLOBALS["lang"]['Ad Domain'] = 'Name';

$GLOBALS["lang"]['ad_group'] = 'Skupina Ad';

$GLOBALS["lang"]['Ad Group'] = 'Skupina Ad';

$GLOBALS["lang"]['ad_server'] = 'Ad server';

$GLOBALS["lang"]['Ad Server'] = 'Ad server';

$GLOBALS["lang"]['Add'] = 'Přidat';

$GLOBALS["lang"]['Add Credentials'] = 'Přidat kredity';

$GLOBALS["lang"]['Add Device'] = 'Přidat zařízení';

$GLOBALS["lang"]['Add Device to Application'] = 'Přidat zařízení do aplikace';

$GLOBALS["lang"]['Add Device to Cluster'] = 'Přidat zařízení do Clusteru';

$GLOBALS["lang"]['Add Exception'] = 'Přidat výjimku';

$GLOBALS["lang"]['Add Field'] = 'Přidat pole';

$GLOBALS["lang"]['Add If'] = 'Přidat pokud';

$GLOBALS["lang"]['Add Policies from Device'] = 'Přidat politiky ze zařízení';

$GLOBALS["lang"]['Add Policy'] = 'Přidat pravidla';

$GLOBALS["lang"]['Add Then'] = 'Přidat pak';

$GLOBALS["lang"]['Add image'] = 'Přidat obrázek';

$GLOBALS["lang"]['additional_items'] = 'Dodatečné položky';

$GLOBALS["lang"]['Additional Items'] = 'Dodatečné položky';

$GLOBALS["lang"]['address'] = 'Adresa';

$GLOBALS["lang"]['Address'] = 'Adresa';

$GLOBALS["lang"]['admin_status'] = 'Admin Status';

$GLOBALS["lang"]['Admin Status'] = 'Admin Status';

$GLOBALS["lang"]['advanced'] = 'Pokročilé';

$GLOBALS["lang"]['Advanced'] = 'Pokročilé';

$GLOBALS["lang"]['Afghanistan'] = 'Afghánistán';

$GLOBALS["lang"]['agents'] = 'Agenti';

$GLOBALS["lang"]['Agents'] = 'Agenti';

$GLOBALS["lang"]['Aggressive'] = 'Agresivní';

$GLOBALS["lang"]['Aland Islands'] = 'Alandské ostrovy';

$GLOBALS["lang"]['Albania'] = 'Albánie';

$GLOBALS["lang"]['Algeria'] = 'Alžírsko';

$GLOBALS["lang"]['algorithm'] = 'Algoritmus';

$GLOBALS["lang"]['Algorithm'] = 'Algoritmus';

$GLOBALS["lang"]['alias'] = 'Alias';

$GLOBALS["lang"]['Alias'] = 'Alias';

$GLOBALS["lang"]['All'] = 'Všechny';

$GLOBALS["lang"]['All IPs'] = 'Všechny IP';

$GLOBALS["lang"]['All Policies'] = 'Všechny politiky';

$GLOBALS["lang"]['All Queued Items'] = 'Všechny položky';

$GLOBALS["lang"]['Amazon AWS Fields'] = 'Amazon AWS Pole';

$GLOBALS["lang"]['American Samoa'] = 'Americká Samoa';

$GLOBALS["lang"]['An array of <code>benchmarks.id</code>.'] = 'Pole < kód > benchmarks.id < / kód >.';

$GLOBALS["lang"]['An array of <code>devices.id</code>.'] = 'Pole < kód > devices.id < / kód >.';

$GLOBALS["lang"]['An encrypted JSON document containing the required attributes depending on the <code>credentials.type</code>.'] = 'Zašifrovaný dokument JSON obsahující požadované atributy v závislosti na < code > crestials.type < / code >.';

$GLOBALS["lang"]['An indication of the level of service required by this site.'] = 'Uvedení úrovně služby požadované touto stránkou.';

$GLOBALS["lang"]['An internal field that indicates if the discovery has completed.'] = 'Vnitřní pole, které ukazuje, zda byl objev dokončen.';

$GLOBALS["lang"]['An optional GeoCode'] = 'Volitelný GeoCode';

$GLOBALS["lang"]['An optional password to use sudo.'] = 'Volitelné heslo pro sudo.';

$GLOBALS["lang"]['Andorra'] = 'Andorra';

$GLOBALS["lang"]['Angola'] = 'Angola';

$GLOBALS["lang"]['Anguilla'] = 'Anguilla';

$GLOBALS["lang"]['Antarctica'] = 'Antarktida';

$GLOBALS["lang"]['AntiVirus'] = 'Antivirus';

$GLOBALS["lang"]['Antigua and Barbuda'] = 'Antigua a Barbuda';

$GLOBALS["lang"]['Antivirus'] = 'Antivirus';

$GLOBALS["lang"]['Any TCP ports (comma seperated, no spaces) you wish to exclude from this discovery. Only available when using Nmap 7+.'] = 'Jakékoliv TCP porty (čárka oddělená, žádné mezery), které chcete z tohoto objevu vyloučit. K dispozici pouze při použití Nmap 7 +.';

$GLOBALS["lang"]['Any UDP ports (comma seperated, no spaces) you wish to exclude from this discovery. Only available when using Nmap 7+.'] = 'Jakékoliv UDP porty (čárka oddělená, žádné mezery), které chcete z tohoto objevu vyloučit. K dispozici pouze při použití Nmap 7 +.';

$GLOBALS["lang"]['Any additional documentation you need.'] = 'Každá další dokumentace, kterou potřebujete.';

$GLOBALS["lang"]['Any additional notes you care to make.'] = 'Jakékoliv další poznámky, které chcete udělat.';

$GLOBALS["lang"]['Any devices will be assigned to this Org when they run their audit script (if set). Links to <code>orgs.id</code>.'] = 'Všechna zařízení budou přiřazena k tomuto Orgu při spuštění jejich auditního skriptu (je-li nastaven). Odkazy na < kód > orgs.id < / kód >.';

$GLOBALS["lang"]['Any discovered devices will be assigned to this Location if set. Links to <code>locations.id</code>.'] = 'Všechna objevená zařízení budou přiřazena k tomuto místu, pokud budou nastavena. Odkazy na < kód > locations.id < / kód >.';

$GLOBALS["lang"]['Any discovered devices will be assigned to this Location when they run their audit script (if set). Links to <code>locations.id</code>.'] = 'Veškerá objevená zařízení budou přiřazena k tomuto místu, jakmile spustí svůj auditní skript (je-li nastaven). Odkazy na < kód > locations.id < / kód >.';

$GLOBALS["lang"]['Any discovered devices will be assigned to this Org if set. If not set, they are assigned to the <code>org_id</code> of this discovery. Links to <code>orgs.id</code>.'] = 'Všechna objevená zařízení budou přiřazena k tomuto Orgu, pokud budou nastavena. Pokud nejsou nastaveny, jsou přiřazeny < kód > org _ id < / kód > tohoto objevu. Odkazy na < kód > orgs.id < / kód >.';

$GLOBALS["lang"]['Any required filter. NOTE: When type = traffic, this represents the font-awesome icon.'] = 'Jakýkoliv požadovaný filtr. POZNÁMKA: Když typ = provoz, to představuje font- úžasné ikonu.';

$GLOBALS["lang"]['Any specific TCP ports you wish tested (comma seperated, no spaces).'] = 'Jakékoliv specifické TCP porty, které chcete testovat (čárka oddělena, žádné mezery).';

$GLOBALS["lang"]['Any specific UDP ports you wish tested (comma seperated, no spaces).'] = 'Jakékoliv specifické UDP porty, které chcete testovat (čárka oddělena, žádné prostory).';

$GLOBALS["lang"]['Application'] = 'Použití';

$GLOBALS["lang"]['application_id'] = 'ID žádosti';

$GLOBALS["lang"]['Application ID'] = 'ID žádosti';

$GLOBALS["lang"]['Application Licenses'] = 'Licence';

$GLOBALS["lang"]['applications'] = 'Žádosti';

$GLOBALS["lang"]['Applications'] = 'Žádosti';

$GLOBALS["lang"]['applied'] = 'Použité';

$GLOBALS["lang"]['Applied'] = 'Použité';

$GLOBALS["lang"]['Approved'] = 'Schváleno';

$GLOBALS["lang"]['April'] = 'Duben';

$GLOBALS["lang"]['architecture'] = 'Architektura';

$GLOBALS["lang"]['Architecture'] = 'Architektura';

$GLOBALS["lang"]['Are you sure you want to delete this input item?'] = 'Opravdu chcete tuto vstupní položku smazat?';

$GLOBALS["lang"]['Are you sure you want to delete this output item?'] = 'Určitě chcete smazat tuto výstupní položku?';

$GLOBALS["lang"]['Are you sure? This will remove all queue entries and prevent the remaining IPs from being discovered.'] = 'Určitě? Tím se odstraní všechny položky fronty a zabrání objevení zbývajících IP.';

$GLOBALS["lang"]['Are you sure? This will reset the queue processing count and could cause load on the server.'] = 'Určitě? Tím se resetuje počet zpracování front a může dojít k zatížení serveru.';

$GLOBALS["lang"]['area'] = 'Oblast';

$GLOBALS["lang"]['Area'] = 'Oblast';

$GLOBALS["lang"]['Argentina'] = 'Argentina';

$GLOBALS["lang"]['Armenia'] = 'Arménie';

$GLOBALS["lang"]['arp'] = 'Arp';

$GLOBALS["lang"]['Arp'] = 'Arp';

$GLOBALS["lang"]['Aruba'] = 'Aruba';

$GLOBALS["lang"]['As per the attributes for device environments. Production, Training, et al.'] = 'Podle atributů pro prostředí zařízení. Produkce, školení, et al.';

$GLOBALS["lang"]['As you have Collectors registered, please choose where to execute this discovery.'] = 'Jak jste zaregistrovali Sběratele, vyberte prosím, kde provést tento objev.';

$GLOBALS["lang"]['Ask me later'] = 'Zeptej se mě později';

$GLOBALS["lang"]['Ask the Community for help or contribute answers for others.'] = 'Požádejte Společenství o pomoc nebo přispívejte odpověďmi pro ostatní.';

$GLOBALS["lang"]['aspect_ratio'] = 'Poměr stran';

$GLOBALS["lang"]['Aspect Ratio'] = 'Poměr stran';

$GLOBALS["lang"]['Asset ID'] = 'Identifikace aktiva';

$GLOBALS["lang"]['asset_ident'] = 'Ident aktiva';

$GLOBALS["lang"]['Asset Ident'] = 'Ident aktiva';

$GLOBALS["lang"]['asset_number'] = 'Číslo aktiva';

$GLOBALS["lang"]['Asset Number'] = 'Číslo aktiva';

$GLOBALS["lang"]['asset_tag'] = 'Značka aktiva';

$GLOBALS["lang"]['Asset Tag'] = 'Značka aktiva';

$GLOBALS["lang"]['Assign Device to Application'] = 'Přiřadit zařízení k aplikaci';

$GLOBALS["lang"]['Assign Device to Cluster'] = 'Přiřadit zařízení do clusteru';

$GLOBALS["lang"]['Assign Device to Location'] = 'Přiřadit zařízení k umístění';

$GLOBALS["lang"]['Assign Device to Organisation'] = 'Přidělení zařízení organizaci';

$GLOBALS["lang"]['Assign Devices to Location'] = 'Přiřadit zařízení k umístění';

$GLOBALS["lang"]['Assign Devices to Organisation'] = 'Přiřazování zařízení k organizaci';

$GLOBALS["lang"]['Assign an Operator'] = 'Přiřadit provozovatele';

$GLOBALS["lang"]['Assigned To'] = 'Přiděleno';

$GLOBALS["lang"]['At present we can use netstat_ports, software and users.'] = 'V současné době můžeme používat netstat _ ports, software a uživatele.';

$GLOBALS["lang"]['attached_device_id'] = 'Přiložené ID zařízení';

$GLOBALS["lang"]['Attached Device ID'] = 'Přiložené ID zařízení';

$GLOBALS["lang"]['attached_to'] = 'Přiložené k';

$GLOBALS["lang"]['Attached To'] = 'Přiložené k';

$GLOBALS["lang"]['attachment'] = 'Příloha';

$GLOBALS["lang"]['Attachment'] = 'Příloha';

$GLOBALS["lang"]['attachments'] = 'Přílohy';

$GLOBALS["lang"]['Attachments'] = 'Přílohy';

$GLOBALS["lang"]['Attribute'] = 'Atribut';

$GLOBALS["lang"]['attributes'] = 'Atributy';

$GLOBALS["lang"]['Attributes'] = 'Atributy';

$GLOBALS["lang"]['Audit'] = 'Audit';

$GLOBALS["lang"]['Audit AIX'] = 'Audit AIX';

$GLOBALS["lang"]['Audit ESXi'] = 'Audit ESXi';

$GLOBALS["lang"]['Audit Linux'] = 'Audit Linux';

$GLOBALS["lang"]['audit_log'] = 'Deník auditu';

$GLOBALS["lang"]['Audit Log'] = 'Deník auditu';

$GLOBALS["lang"]['Audit My PC'] = 'Audit mého PC';

$GLOBALS["lang"]['Audit OSX'] = 'Audit OSX';

$GLOBALS["lang"]['Audit Result Input'] = 'Výsledek auditu';

$GLOBALS["lang"]['Audit Status'] = 'Stav auditu';

$GLOBALS["lang"]['Audit Windows'] = 'Audit Windows';

$GLOBALS["lang"]['Audit the Device'] = 'Audit zařízení';

$GLOBALS["lang"]['Audits'] = 'Audity';

$GLOBALS["lang"]['August'] = 'Srpen';

$GLOBALS["lang"]['Australia'] = 'Austrálie';

$GLOBALS["lang"]['Austria'] = 'Rakousko';

$GLOBALS["lang"]['auth'] = 'Auth';

$GLOBALS["lang"]['Auth'] = 'Auth';

$GLOBALS["lang"]['Authentication Passphrase'] = 'Oprávnění Passprase';

$GLOBALS["lang"]['Auto'] = 'Automaticky';

$GLOBALS["lang"]['Auto populated by the Open-AudIT Server.'] = 'Auto obsazené Open- Audit Serverem.';

$GLOBALS["lang"]['Automatically populated based on the Collectors OS.'] = 'Automaticky obydlené na základě systému Sběratelů.';

$GLOBALS["lang"]['availability'] = 'Dostupnost';

$GLOBALS["lang"]['Availability'] = 'Dostupnost';

$GLOBALS["lang"]['Azerbaijan'] = 'Ázerbájdžán';

$GLOBALS["lang"]['BTU Max'] = 'BTU Max';

$GLOBALS["lang"]['BTU Total'] = 'BTU celkem';

$GLOBALS["lang"]['Backup'] = 'Záloha';

$GLOBALS["lang"]['Bahamas the'] = 'Bahamy';

$GLOBALS["lang"]['Bahrain'] = 'Bahrajn';

$GLOBALS["lang"]['Bangladesh'] = 'Bangladéš';

$GLOBALS["lang"]['bank'] = 'Banka';

$GLOBALS["lang"]['Bank'] = 'Banka';

$GLOBALS["lang"]['Banned'] = 'Zakázáno';

$GLOBALS["lang"]['bar_code'] = 'Čárový kód';

$GLOBALS["lang"]['Bar Code'] = 'Čárový kód';

$GLOBALS["lang"]['Barbados'] = 'Barbados';

$GLOBALS["lang"]['Base DN'] = 'Základna DN';

$GLOBALS["lang"]['based_on'] = 'Na základě';

$GLOBALS["lang"]['Based On'] = 'Na základě';

$GLOBALS["lang"]['baseline'] = 'Výchozí';

$GLOBALS["lang"]['Baseline'] = 'Výchozí';

$GLOBALS["lang"]['baseline_id'] = 'Výchozí ID';

$GLOBALS["lang"]['Baseline ID'] = 'Výchozí ID';

$GLOBALS["lang"]['baselines'] = 'Základní linie';

$GLOBALS["lang"]['Baselines'] = 'Základní linie';

$GLOBALS["lang"]['baselines_policies'] = 'Základní zásady';

$GLOBALS["lang"]['Baselines Policies'] = 'Základní zásady';

$GLOBALS["lang"]['Baselines Policy'] = 'Základní politika';

$GLOBALS["lang"]['Baselines Policy Details'] = 'Základní informace o politice';

$GLOBALS["lang"]['baselines_results'] = 'Základní výsledky';

$GLOBALS["lang"]['Baselines Results'] = 'Základní výsledky';

$GLOBALS["lang"]['Basic'] = 'Základní';

$GLOBALS["lang"]['batch'] = 'Č. š.:';

$GLOBALS["lang"]['Batch'] = 'Č. š.:';

$GLOBALS["lang"]['Belarus'] = 'Bělorusko';

$GLOBALS["lang"]['Belgium'] = 'Belgie';

$GLOBALS["lang"]['Belize'] = 'Belize';

$GLOBALS["lang"]['Benchmark'] = 'Referenční hodnota';

$GLOBALS["lang"]['benchmark_id'] = 'Referenční číslo';

$GLOBALS["lang"]['Benchmark ID'] = 'Referenční číslo';

$GLOBALS["lang"]['benchmarks'] = 'Referenční hodnoty';

$GLOBALS["lang"]['Benchmarks'] = 'Referenční hodnoty';

$GLOBALS["lang"]['benchmarks_exceptions'] = 'Referenční hodnoty Výjimky';

$GLOBALS["lang"]['Benchmarks Exceptions'] = 'Referenční hodnoty Výjimky';

$GLOBALS["lang"]['benchmarks_log'] = 'Záznamy referenčních hodnot';

$GLOBALS["lang"]['Benchmarks Log'] = 'Záznamy referenčních hodnot';

$GLOBALS["lang"]['benchmarks_policies'] = 'Referenční hodnoty';

$GLOBALS["lang"]['Benchmarks Policies'] = 'Referenční hodnoty';

$GLOBALS["lang"]['benchmarks_result'] = 'Referenční hodnoty';

$GLOBALS["lang"]['Benchmarks Result'] = 'Referenční hodnoty';

$GLOBALS["lang"]['Benin'] = 'Benin';

$GLOBALS["lang"]['Bermuda'] = 'Bermudy';

$GLOBALS["lang"]['best_practises'] = 'Nejlepší praxe';

$GLOBALS["lang"]['Best Practises'] = 'Nejlepší praxe';

$GLOBALS["lang"]['Bhutan'] = 'Bhútán';

$GLOBALS["lang"]['bios'] = 'Bios';

$GLOBALS["lang"]['Bios'] = 'Bios';

$GLOBALS["lang"]['Bolivia'] = 'Bolívie';

$GLOBALS["lang"]['Boolean'] = 'Boolean';

$GLOBALS["lang"]['Boolean 1/0'] = 'Boolean 1 / 0';

$GLOBALS["lang"]['Boolean y/n'] = 'Boolean y / n';

$GLOBALS["lang"]['boot_device'] = 'Boot zařízení';

$GLOBALS["lang"]['Boot Device'] = 'Boot zařízení';

$GLOBALS["lang"]['bootable'] = 'Vykostěné';

$GLOBALS["lang"]['Bootable'] = 'Vykostěné';

$GLOBALS["lang"]['Bosnia and Herzegovina'] = 'Bosna a Hercegovina';

$GLOBALS["lang"]['Botswana'] = 'Botswana';

$GLOBALS["lang"]['Bouvet Island (Bouvetoya)'] = 'Bouvet Island (Bouvetoya)';

$GLOBALS["lang"]['Brazil'] = 'Brazílie';

$GLOBALS["lang"]['Brazilian Portuguese'] = 'Brazilský portugalský';

$GLOBALS["lang"]['British Indian Ocean Territory (Chagos Archipelago)'] = 'Britské území Indického oceánu (Chagos souostroví)';

$GLOBALS["lang"]['British Virgin Islands'] = 'Britské Panenské ostrovy';

$GLOBALS["lang"]['Brunei Darussalam'] = 'Brunej Darussalam';

$GLOBALS["lang"]['btu_max'] = 'Btu Max';

$GLOBALS["lang"]['Btu Max'] = 'Btu Max';

$GLOBALS["lang"]['btu_total'] = 'Btu Celkem';

$GLOBALS["lang"]['Btu Total'] = 'Btu Celkem';

$GLOBALS["lang"]['build_number'] = 'Stavební číslo';

$GLOBALS["lang"]['Build Number'] = 'Stavební číslo';

$GLOBALS["lang"]['build_number_full'] = 'Vytvořit celé číslo';

$GLOBALS["lang"]['Build Number Full'] = 'Vytvořit celé číslo';

$GLOBALS["lang"]['Building'] = 'Budova';

$GLOBALS["lang"]['Bulgaria'] = 'Bulharsko';

$GLOBALS["lang"]['Bulk Edit'] = 'Name';

$GLOBALS["lang"]['Burkina Faso'] = 'Burkina Faso';

$GLOBALS["lang"]['Burundi'] = 'Burundi';

$GLOBALS["lang"]['business_requirements'] = 'Obchodní požadavky';

$GLOBALS["lang"]['Business Requirements'] = 'Obchodní požadavky';

$GLOBALS["lang"]['Buy'] = 'Koupit';

$GLOBALS["lang"]['Buy More'] = 'Koupit více';

$GLOBALS["lang"]['By'] = 'By';

$GLOBALS["lang"]['CIDR'] = 'CIDR';

$GLOBALS["lang"]['CIDR Mask'] = 'CIDR Maska';

$GLOBALS["lang"]['cli_config'] = 'CLI Nastavení';

$GLOBALS["lang"]['CLI Config'] = 'CLI Nastavení';

$GLOBALS["lang"]['CPU'] = 'CPU';

$GLOBALS["lang"]['CPUs'] = 'CPU';

$GLOBALS["lang"]['CSV'] = 'CSV';

$GLOBALS["lang"]['Calculated from discovery.'] = 'Vypočítaná z objevu.';

$GLOBALS["lang"]['Calculated total number of valid IP addresses for this network.'] = 'Vypočítaný celkový počet platných IP adres pro tuto síť.';

$GLOBALS["lang"]['Calculated upon completion, the time taken to execute this item.'] = 'Vypočteno po dokončení, čas potřebný k provedení této položky.';

$GLOBALS["lang"]['Calculated when integration is run and contains a JSON representation of the devices in this integration. Each links to <code>devices.id</code>.'] = 'Vypočteno při spuštění integrace a obsahuje JSON reprezentaci zařízení v této integraci. Každý odkaz na < kód > devices.id < / kód >.';

$GLOBALS["lang"]['Calculated when integration is run and contains a JSON representation of the locations in this integration. Each links to <code>locations.id</code>.'] = 'Vypočteno při spuštění integrace a obsahuje JSON reprezentaci míst v této integraci. Každý odkaz na < kód > locations.id < / kód >.';

$GLOBALS["lang"]['Calculated when integration is run and contains the number of devices selected from Open-AudIT.'] = 'Vypočteno při spuštění integrace a obsahuje počet zařízení vybraných z Open- Audit.';

$GLOBALS["lang"]['Calculated when integration is run and contains the number of devices selected the external system.'] = 'Vypočteno při spuštění integrace a obsahuje počet zařízení vybraných externím systémem.';

$GLOBALS["lang"]['Calculated when integration is run and contains the number of devices to be updated in the external system.'] = 'Vypočteno při spuštění integrace a obsahuje počet zařízení, která mají být aktualizována ve vnějším systému.';

$GLOBALS["lang"]['Calculated when integration is run and contains the number of devices updated in Open-AudIT.'] = 'Vypočteno při spuštění integrace a obsahuje počet zařízení aktualizovaných v Open- Audit.';

$GLOBALS["lang"]['Cambodia'] = 'Kambodžu';

$GLOBALS["lang"]['Cameroon'] = 'Kamerun';

$GLOBALS["lang"]['Campus Area Network'] = 'Campus Area Network';

$GLOBALS["lang"]['Can be  <code>active</code>, <code>passive</code> or blank.'] = 'Může být < kód > aktivní < / kód >, < kód > pasivní < / kód > nebo prázdný.';

$GLOBALS["lang"]['Can be <code>application</code>, <code>compute</code>, <code>database</code>, <code>storage</code>, <code>virtualisation</code>, <code>web</code>, <code>other</code> or blank.'] = 'Může být < kód > aplikace < / kód >, < kód > vypočítat < / kód >, < kód > databáze < / kód >, < kód > uložení < / kód >, < kód > virtualizace < / kód >, < kód > web < / kód >, < kód >, < kód > ostatní < / kód > nebo prázdný.';

$GLOBALS["lang"]['Can be <code>auto</code>, <code>fixed</code>, <code>other</code> or blank.'] = 'Může být < kód > auto < / kód >, < kód > pevný < / kód >, < kód > ostatní < / kód > nebo prázdný.';

$GLOBALS["lang"]['Can be <code>high availability</code>, <code>load balancing</code>, <code>performance</code>, <code>storage</code>, <code>other</code> or blank.'] = 'Může být < kód > vysoká dostupnost < / kód >, < kód > vyvažování nákladu < / kód >, < kód > výkonnost < / kód >, < kód > uložení < / kód >, < kód > ostatní < / kód > nebo prázdný.';

$GLOBALS["lang"]['Can be <code>line</code>, <code>pie</code> or <code>traffic</code>.'] = 'Může být < kód > řádek < / kód >, < kód > pie < / kód > nebo < kód > provoz < / kód >.';

$GLOBALS["lang"]['Can be <code>user</code> or <code>collector</code>.'] = 'Může být < kód > uživatel < / kód > nebo < kód > kolektor < / kód >.';

$GLOBALS["lang"]['Can be set by discovery or user.'] = 'Lze nastavit objevem nebo uživatelem.';

$GLOBALS["lang"]['Can the user edit this item.'] = 'Může uživatel upravit tuto položku.';

$GLOBALS["lang"]['Canada'] = 'Kanada';

$GLOBALS["lang"]['Cancel'] = 'Zrušit';

$GLOBALS["lang"]['capabilities'] = 'Schopnosti';

$GLOBALS["lang"]['Capabilities'] = 'Schopnosti';

$GLOBALS["lang"]['Capacity'] = 'Kapacita';

$GLOBALS["lang"]['Cape Verde'] = 'Kapverdy';

$GLOBALS["lang"]['Capitalise'] = 'Kapitalizace';

$GLOBALS["lang"]['caption'] = 'Titulek';

$GLOBALS["lang"]['Caption'] = 'Titulek';

$GLOBALS["lang"]['Cayman Islands'] = 'Kajmanské ostrovy';

$GLOBALS["lang"]['Cellular Details'] = 'Buněčné detaily';

$GLOBALS["lang"]['Central African Republic'] = 'Středoafrická republika';

$GLOBALS["lang"]['certificate'] = 'Osvědčení';

$GLOBALS["lang"]['Certificate'] = 'Osvědčení';

$GLOBALS["lang"]['certificates'] = 'Osvědčení';

$GLOBALS["lang"]['Certificates'] = 'Osvědčení';

$GLOBALS["lang"]['Chad'] = 'Čad';

$GLOBALS["lang"]['change_id'] = 'Změnit ID';

$GLOBALS["lang"]['Change ID'] = 'Změnit ID';

$GLOBALS["lang"]['change_log'] = 'Změnit záznam';

$GLOBALS["lang"]['Change Log'] = 'Změnit záznam';

$GLOBALS["lang"]['change_type'] = 'Typ změny';

$GLOBALS["lang"]['Change Type'] = 'Typ změny';

$GLOBALS["lang"]['chart'] = 'Graf';

$GLOBALS["lang"]['Chart'] = 'Graf';

$GLOBALS["lang"]['check_minutes'] = 'Zkontrolovat zápis';

$GLOBALS["lang"]['Check Minutes'] = 'Zkontrolovat zápis';

$GLOBALS["lang"]['Check for SSH on these ports'] = 'Zkontrolujte SSH na těchto portech';

$GLOBALS["lang"]['Check this port for any SSH service.'] = 'Zkontrolujte tento port pro jakoukoliv SSH službu.';

$GLOBALS["lang"]['Chile'] = 'Chile';

$GLOBALS["lang"]['China'] = 'Čína';

$GLOBALS["lang"]['Choose'] = 'Vyberte';

$GLOBALS["lang"]['Choose (select OS first)'] = 'Vyberte (vyberte OS jako první)';

$GLOBALS["lang"]['Choose a Device'] = 'Vyberte zařízení';

$GLOBALS["lang"]['Choose a Table'] = 'Vyberte si tabulku';

$GLOBALS["lang"]['Christmas Island'] = 'Vánoční ostrov';

$GLOBALS["lang"]['cidr'] = 'Cidr';

$GLOBALS["lang"]['Cidr'] = 'Cidr';

$GLOBALS["lang"]['circuit_count'] = 'Počet obvodů';

$GLOBALS["lang"]['Circuit Count'] = 'Počet obvodů';

$GLOBALS["lang"]['circuit_status'] = 'Stav obvodu';

$GLOBALS["lang"]['Circuit Status'] = 'Stav obvodu';

$GLOBALS["lang"]['city'] = 'Město';

$GLOBALS["lang"]['City'] = 'Město';

$GLOBALS["lang"]['class'] = 'Třída';

$GLOBALS["lang"]['Class'] = 'Třída';

$GLOBALS["lang"]['class_text'] = 'Třída Text';

$GLOBALS["lang"]['Class Text'] = 'Třída Text';

$GLOBALS["lang"]['Click the Delete button to remove the example devices from Open-AudIT.<br>This will remove the below devices from the database. '] = 'Kliknutím na tlačítko Smazat odstraníte ukázková zařízení z Open- Audit. < br > Tím se odstraní níže uvedená zařízení z databáze.';

$GLOBALS["lang"]['Click the Import button below to populate Open-AudIT with example device data.'] = 'Kliknutím na tlačítko Import zalistujte Open- Audit s daty příkladového zařízení.';

$GLOBALS["lang"]['Client ID'] = 'ID klienta';

$GLOBALS["lang"]['client_ident'] = 'Name';

$GLOBALS["lang"]['Client Ident'] = 'Name';

$GLOBALS["lang"]['client_secret'] = 'Tajemství klienta';

$GLOBALS["lang"]['Client Secret'] = 'Tajemství klienta';

$GLOBALS["lang"]['client_site_name'] = 'Název stránky klienta';

$GLOBALS["lang"]['Client Site Name'] = 'Název stránky klienta';

$GLOBALS["lang"]['Close'] = 'Zavřít';

$GLOBALS["lang"]['Cloud'] = 'Cloud';

$GLOBALS["lang"]['Cloud Details'] = 'Podrobnosti o cloudu';

$GLOBALS["lang"]['Cloud Discovery'] = 'Objevení oblačnosti';

$GLOBALS["lang"]['cloud_id'] = 'Cloud ID';

$GLOBALS["lang"]['Cloud ID'] = 'Cloud ID';

$GLOBALS["lang"]['cloud_log'] = 'Záznam cloudu';

$GLOBALS["lang"]['Cloud Log'] = 'Záznam cloudu';

$GLOBALS["lang"]['cloud_name'] = 'Název cloudu';

$GLOBALS["lang"]['Cloud Name'] = 'Název cloudu';

$GLOBALS["lang"]['Cloud Network'] = 'Cloud Network';

$GLOBALS["lang"]['clouds'] = 'Mraky';

$GLOBALS["lang"]['Clouds'] = 'Mraky';

$GLOBALS["lang"]['cluster'] = 'Sestava';

$GLOBALS["lang"]['Cluster'] = 'Sestava';

$GLOBALS["lang"]['cluster_id'] = 'ID clusteru';

$GLOBALS["lang"]['Cluster ID'] = 'ID clusteru';

$GLOBALS["lang"]['cluster_name'] = 'Název clusteru';

$GLOBALS["lang"]['Cluster Name'] = 'Název clusteru';

$GLOBALS["lang"]['cluster_type'] = 'Typ sestavy';

$GLOBALS["lang"]['Cluster Type'] = 'Typ sestavy';

$GLOBALS["lang"]['clusters'] = 'Klastry';

$GLOBALS["lang"]['Clusters'] = 'Klastry';

$GLOBALS["lang"]['Cocos (Keeling) Islands'] = 'Kokosové ostrovy';

$GLOBALS["lang"]['Collector'] = 'Sběratel';

$GLOBALS["lang"]['Collector (UUID)'] = 'Sběratel (UUID)';

$GLOBALS["lang"]['Collector Name'] = 'Název sběratele';

$GLOBALS["lang"]['collector_uuid'] = 'Name';

$GLOBALS["lang"]['Collector Uuid'] = 'Name';

$GLOBALS["lang"]['collectors'] = 'Sběratelé';

$GLOBALS["lang"]['Collectors'] = 'Sběratelé';

$GLOBALS["lang"]['Colombia'] = 'Kolumbie';

$GLOBALS["lang"]['color'] = 'Barva';

$GLOBALS["lang"]['Color'] = 'Barva';

$GLOBALS["lang"]['column'] = 'Sloupec';

$GLOBALS["lang"]['Column'] = 'Sloupec';

$GLOBALS["lang"]['Columns'] = 'Sloupce';

$GLOBALS["lang"]['command'] = 'Příkaz';

$GLOBALS["lang"]['Command'] = 'Příkaz';

$GLOBALS["lang"]['command_options'] = 'Možnosti příkazu';

$GLOBALS["lang"]['Command Options'] = 'Možnosti příkazu';

$GLOBALS["lang"]['command_output'] = 'Příkazový výstup';

$GLOBALS["lang"]['Command Output'] = 'Příkazový výstup';

$GLOBALS["lang"]['command_status'] = 'Stav příkazu';

$GLOBALS["lang"]['Command Status'] = 'Stav příkazu';

$GLOBALS["lang"]['command_time_to_execute'] = 'Příkazový čas k provedení';

$GLOBALS["lang"]['Command Time To Execute'] = 'Příkazový čas k provedení';

$GLOBALS["lang"]['comment'] = 'Komentář';

$GLOBALS["lang"]['Comment'] = 'Komentář';

$GLOBALS["lang"]['comments'] = 'Poznámky';

$GLOBALS["lang"]['Comments'] = 'Poznámky';

$GLOBALS["lang"]['Commonly referred to as the clientId.'] = 'Běžně označované jako klientId.';

$GLOBALS["lang"]['Commonly referred to as the clientSecret.'] = 'Běžně označované jako KlientSecret.';

$GLOBALS["lang"]['Community'] = 'Společenství';

$GLOBALS["lang"]['Community Questions'] = 'Otázky Společenství';

$GLOBALS["lang"]['Community String'] = 'Komunitní řetězec';

$GLOBALS["lang"]['Comoros the'] = 'Komory';

$GLOBALS["lang"]['Compact'] = 'Kompaktní';

$GLOBALS["lang"]['Component Table'] = 'Tabulka součástí';

$GLOBALS["lang"]['Components (All Devices)'] = 'Součásti (všechna zařízení)';

$GLOBALS["lang"]['Compute'] = 'Výpočet';

$GLOBALS["lang"]['Condition'] = 'Stav';

$GLOBALS["lang"]['config'] = 'Nastavení';

$GLOBALS["lang"]['Config'] = 'Nastavení';

$GLOBALS["lang"]['Config Default, currently '] = 'Nastavení Výchozí, v současné době';

$GLOBALS["lang"]['config_file'] = 'Nastavit soubor';

$GLOBALS["lang"]['Config File'] = 'Nastavit soubor';

$GLOBALS["lang"]['config_manager_error_code'] = 'Chyba správce nastavení';

$GLOBALS["lang"]['Config Manager Error Code'] = 'Chyba správce nastavení';

$GLOBALS["lang"]['configuration'] = 'Nastavení';

$GLOBALS["lang"]['Configuration'] = 'Nastavení';

$GLOBALS["lang"]['Congo'] = 'Kongo';

$GLOBALS["lang"]['Congo the'] = 'Kongo';

$GLOBALS["lang"]['Connected To'] = 'Připojeno k';

$GLOBALS["lang"]['connection'] = 'Připojení';

$GLOBALS["lang"]['Connection'] = 'Připojení';

$GLOBALS["lang"]['Connection Options'] = 'Možnosti připojení';

$GLOBALS["lang"]['connection_status'] = 'Stav připojení';

$GLOBALS["lang"]['Connection Status'] = 'Stav připojení';

$GLOBALS["lang"]['connections'] = 'Připojení';

$GLOBALS["lang"]['Connections'] = 'Připojení';

$GLOBALS["lang"]['Consider filtered Ports Open'] = 'Zvažte filtrování Ports Open';

$GLOBALS["lang"]['Consider open|filtered Ports Open'] = 'Považujte otevřené 124; filtrované Ports Open';

$GLOBALS["lang"]['contact'] = 'Kontakt';

$GLOBALS["lang"]['Contact'] = 'Kontakt';

$GLOBALS["lang"]['contact_name'] = 'Kontaktní jméno';

$GLOBALS["lang"]['Contact Name'] = 'Kontaktní jméno';

$GLOBALS["lang"]['contained_in'] = 'Obsaženo v';

$GLOBALS["lang"]['Contained In'] = 'Obsaženo v';

$GLOBALS["lang"]['Contains a JSON object details the associated widgets and their positions.'] = 'Obsahuje JSON objekt detaily souvisejících widgety a jejich pozice.';

$GLOBALS["lang"]['Contains the fields that determine if we should use ssh, snmp and wmi discovery options. A JSON object.'] = 'Obsahuje pole, která určují, zda bychom měli použít možnosti ssh, snmp a wmi objevování. JSON objekt.';

$GLOBALS["lang"]['Context Engine ID'] = 'ID kontextového motoru';

$GLOBALS["lang"]['Context Name'] = 'Název kontextu';

$GLOBALS["lang"]['contractual_obligations'] = 'Smluvní závazky';

$GLOBALS["lang"]['Contractual Obligations'] = 'Smluvní závazky';

$GLOBALS["lang"]['Cook Islands'] = 'Cookovy ostrovy';

$GLOBALS["lang"]['Copy and paste an audit result'] = 'Zkopírovat a vložit výsledek auditu';

$GLOBALS["lang"]['Copy and paste the below to the forums, another instance of Open-AudIT or anywhere else you need to provide this item.'] = 'Zkopírujte a vložte níže na fóra, další instanci Open- Audit nebo kdekoli jinde, kde potřebujete tuto položku poskytnout.';

$GLOBALS["lang"]['core_count'] = 'Základní počet';

$GLOBALS["lang"]['Core Count'] = 'Základní počet';

$GLOBALS["lang"]['Cores'] = 'Jádra';

$GLOBALS["lang"]['cost_center'] = 'Centrála nákladů';

$GLOBALS["lang"]['Cost Center'] = 'Centrála nákladů';

$GLOBALS["lang"]['cost_code'] = 'Kód nákladů';

$GLOBALS["lang"]['Cost Code'] = 'Kód nákladů';

$GLOBALS["lang"]['Costa Rica'] = 'Kostarika';

$GLOBALS["lang"]['Cote d Ivoire'] = 'Cote d Itish';

$GLOBALS["lang"]['count'] = 'Počet';

$GLOBALS["lang"]['Count'] = 'Počet';

$GLOBALS["lang"]['country'] = 'Země';

$GLOBALS["lang"]['Country'] = 'Země';

$GLOBALS["lang"]['country_code'] = 'Kód země';

$GLOBALS["lang"]['Country Code'] = 'Kód země';

$GLOBALS["lang"]['cpu_count'] = 'Počet Cpu';

$GLOBALS["lang"]['Cpu Count'] = 'Počet Cpu';

$GLOBALS["lang"]['Create'] = 'Vytvořit';

$GLOBALS["lang"]['Create Example Devices'] = 'Vytvořit ukázková zařízení';

$GLOBALS["lang"]['create_external_count'] = 'Vytvořit externí počet';

$GLOBALS["lang"]['Create External Count'] = 'Vytvořit externí počet';

$GLOBALS["lang"]['create_external_from_internal'] = 'Vytvořit externí z vnitřní';

$GLOBALS["lang"]['Create External From Internal'] = 'Vytvořit externí z vnitřní';

$GLOBALS["lang"]['Create Geocode'] = 'Vytvořit geokód';

$GLOBALS["lang"]['create_internal_count'] = 'Vytvořit vnitřní počet';

$GLOBALS["lang"]['Create Internal Count'] = 'Vytvořit vnitřní počet';

$GLOBALS["lang"]['create_internal_from_external'] = 'Vytvořit vnitřní z externího';

$GLOBALS["lang"]['Create Internal From External'] = 'Vytvořit vnitřní z externího';

$GLOBALS["lang"]['Create NMIS Devices from Open-AudIT'] = 'Vytvořit zařízení NMIS z Open- Audit';

$GLOBALS["lang"]['Create Open-AudIT Devices from '] = 'Vytvořit Open- Audit Zařízení';

$GLOBALS["lang"]['Create Open-AudIT Devices from NMIS'] = 'Vytvořit Open- Audit Zařízení z NMIS';

$GLOBALS["lang"]['created_at'] = 'Vytvořeno v';

$GLOBALS["lang"]['Created At'] = 'Vytvořeno v';

$GLOBALS["lang"]['created_by'] = 'Vytvořil';

$GLOBALS["lang"]['Created By'] = 'Vytvořil';

$GLOBALS["lang"]['created_date'] = 'Vytvořeno datum';

$GLOBALS["lang"]['Created Date'] = 'Vytvořeno datum';

$GLOBALS["lang"]['Creating'] = 'Vytváření';

$GLOBALS["lang"]['creator'] = 'Stvořitel';

$GLOBALS["lang"]['Creator'] = 'Stvořitel';

$GLOBALS["lang"]['credential'] = 'Úvěr';

$GLOBALS["lang"]['Credential'] = 'Úvěr';

$GLOBALS["lang"]['credentials'] = 'Úvěry';

$GLOBALS["lang"]['Credentials'] = 'Úvěry';

$GLOBALS["lang"]['Croatia'] = 'Chorvatsko';

$GLOBALS["lang"]['Cuba'] = 'Kuba';

$GLOBALS["lang"]['current'] = 'Běžný měsíc';

$GLOBALS["lang"]['Current'] = 'Běžný měsíc';

$GLOBALS["lang"]['Current Discovery Processes'] = 'Aktuální práce na objevování';

$GLOBALS["lang"]['Current date & time is '] = 'Aktuální datum & čas je';

$GLOBALS["lang"]['Currently supported types are <code>snmp</code>, <code>snmp_v3</code>, <code>ssh</code>, <code>ssh_key</code> or <code>windows</code>.'] = 'V současnosti podporované typy jsou < kód > snmp < / kód >, < kód > snmp _ v3 < / kód >, < kód > ssh < / kód >, < kód > ssh _ key < / kód > nebo < kód > okna < / kód >.';

$GLOBALS["lang"]['Custom TCP Ports'] = 'Vlastní TCP porty';

$GLOBALS["lang"]['Custom UDP Ports'] = 'Vlastní UDP Přístavy';

$GLOBALS["lang"]['Cyprus'] = 'Kypr';

$GLOBALS["lang"]['Czech'] = 'Česká republika';

$GLOBALS["lang"]['Czech Republic'] = 'Česká republika';

$GLOBALS["lang"]['DHCP'] = 'DHCP';

$GLOBALS["lang"]['DN Account (optional)'] = 'DN účet (nepovinné)';

$GLOBALS["lang"]['DN Password (optional)'] = 'DN Heslo (nepovinné)';

$GLOBALS["lang"]['DNS FQDN'] = 'DNS FQDN';

$GLOBALS["lang"]['DNS Hostname'] = 'DNS Hostname';

$GLOBALS["lang"]['dashboard_id'] = 'ID palubní desky';

$GLOBALS["lang"]['Dashboard ID'] = 'ID palubní desky';

$GLOBALS["lang"]['dashboards'] = 'Přístrojové desky';

$GLOBALS["lang"]['Dashboards'] = 'Přístrojové desky';

$GLOBALS["lang"]['Database'] = 'Databáze';

$GLOBALS["lang"]['db_action'] = 'Databázová akce';

$GLOBALS["lang"]['Database Action'] = 'Databázová akce';

$GLOBALS["lang"]['db_column'] = 'Sloupec databáze';

$GLOBALS["lang"]['Database Column'] = 'Sloupec databáze';

$GLOBALS["lang"]['Database Definition'] = 'Definice databáze';

$GLOBALS["lang"]['db_row'] = 'Databázový řádek';

$GLOBALS["lang"]['Database Row'] = 'Databázový řádek';

$GLOBALS["lang"]['Database Schema'] = 'Databázové schéma';

$GLOBALS["lang"]['db_table'] = 'Tabulka databáze';

$GLOBALS["lang"]['Database Table'] = 'Tabulka databáze';

$GLOBALS["lang"]['dataset_title'] = 'Název datového souboru';

$GLOBALS["lang"]['Dataset Title'] = 'Název datového souboru';

$GLOBALS["lang"]['date'] = 'Datum';

$GLOBALS["lang"]['Date'] = 'Datum';

$GLOBALS["lang"]['Date D-M-Y'] = 'Datum D- M- Y';

$GLOBALS["lang"]['Date M-D-Y'] = 'Datum M- D- Y';

$GLOBALS["lang"]['Date Now'] = 'Datum nyní';

$GLOBALS["lang"]['date_of_manufacture'] = 'Datum výroby';

$GLOBALS["lang"]['Date Of Manufacture'] = 'Datum výroby';

$GLOBALS["lang"]['date_paid'] = 'Placené datum';

$GLOBALS["lang"]['Date Paid'] = 'Placené datum';

$GLOBALS["lang"]['date_received'] = 'Datum přijetí';

$GLOBALS["lang"]['Date Received'] = 'Datum přijetí';

$GLOBALS["lang"]['Date Y-M-D'] = 'Datum Y- M- D';

$GLOBALS["lang"]['DateTime Now'] = 'DateTime Now';

$GLOBALS["lang"]['DateTime Y-M-D H:M:S'] = 'DateTime Y- M- D M: S';

$GLOBALS["lang"]['day_of_month'] = 'Den měsíce';

$GLOBALS["lang"]['Day Of Month'] = 'Den měsíce';

$GLOBALS["lang"]['day_of_week'] = 'Den týdne';

$GLOBALS["lang"]['Day Of Week'] = 'Den týdne';

$GLOBALS["lang"]['Day of Month'] = 'Den měsíce';

$GLOBALS["lang"]['dbus_identifier'] = 'Identifikátor Dbus';

$GLOBALS["lang"]['Dbus Identifier'] = 'Identifikátor Dbus';

$GLOBALS["lang"]['Debug'] = 'Vyladit';

$GLOBALS["lang"]['December'] = 'Prosinec';

$GLOBALS["lang"]['Default'] = 'Výchozí';

$GLOBALS["lang"]['Default Items'] = 'Výchozí položky';

$GLOBALS["lang"]['Default Value'] = 'Výchozí hodnota';

$GLOBALS["lang"]['Default of 389. Normally 636 used for Active Directory LDAPS.'] = 'Výchozí hodnota 389. Normálně 636 používá pro Active Directory LDAPS.';

$GLOBALS["lang"]['Default of <code>3</code> for LDAP and Active Directory.'] = 'Výchozí hodnota < kódu > 3 < / kód > pro LDAP a aktivní adresář.';

$GLOBALS["lang"]['delay_minutes'] = 'Zpoždění zápisu';

$GLOBALS["lang"]['Delay Minutes'] = 'Zpoždění zápisu';

$GLOBALS["lang"]['Delete'] = 'Smazat';

$GLOBALS["lang"]['Delete Example Devices'] = 'Smazat ukázková zařízení';

$GLOBALS["lang"]['delete_external_from_internal'] = 'Smazat externí z vnitřní';

$GLOBALS["lang"]['Delete External From Internal'] = 'Smazat externí z vnitřní';

$GLOBALS["lang"]['Delete NMIS Devices if not in Open-AudIT'] = 'Smazat NMIS Zařízení, pokud není v Open- Audit';

$GLOBALS["lang"]['Delete from Application'] = 'Smazat z aplikace';

$GLOBALS["lang"]['Delete from Cluster'] = 'Smazat z Clusteru';

$GLOBALS["lang"]['deleted_at'] = 'Vymazáno na';

$GLOBALS["lang"]['Deleted At'] = 'Vymazáno na';

$GLOBALS["lang"]['Denmark'] = 'Dánsko';

$GLOBALS["lang"]['Derived by audit or manually set by user.'] = 'Odvozené auditem nebo ručně nastavené uživatelem.';

$GLOBALS["lang"]['Derived by audit.'] = 'Odvozené auditem.';

$GLOBALS["lang"]['Derived from <code>rack_devices.device_id</code>.'] = 'Odvozené z < kódu > rack _ devices.device _ id < / code >.';

$GLOBALS["lang"]['Derived from <code>rack_devices.rack_id</code>.'] = 'Odvozené z < kódu > rack _ devices.rack _ id < / code >.';

$GLOBALS["lang"]['Derived from Collector discovery.'] = 'Odvozené z objevu Sběratele.';

$GLOBALS["lang"]['Derived from OS Name.'] = 'Odvozené z OS Name.';

$GLOBALS["lang"]['Derived from cloud discovery.'] = 'Odvozené z objevu mraků.';

$GLOBALS["lang"]['Derived from device audits.'] = 'Odvozené z auditů zařízení.';

$GLOBALS["lang"]['Derived from device type and OS.'] = 'Odvozené z typu zařízení a OS.';

$GLOBALS["lang"]['Derived from discovery.'] = 'Odvozené z objevu.';

$GLOBALS["lang"]['Derived from hostname, sysName, dns Hostname and IP in that order.'] = 'Odvozené z hostitelského jména, sysName, dns Hostname a IP v tomto pořadí.';

$GLOBALS["lang"]['Derived from the integer severity.'] = 'Odvozené z celé závažnosti.';

$GLOBALS["lang"]['description'] = 'Popis';

$GLOBALS["lang"]['Description'] = 'Popis';

$GLOBALS["lang"]['destination'] = 'Země určení';

$GLOBALS["lang"]['Destination'] = 'Země určení';

$GLOBALS["lang"]['detail'] = 'Detaily';

$GLOBALS["lang"]['Detail'] = 'Detaily';

$GLOBALS["lang"]['Details'] = 'Podrobnosti';

$GLOBALS["lang"]['details'] = 'Podrobnosti';

$GLOBALS["lang"]['Details of who is usually contactable at this site.'] = 'Podrobnosti o tom, kdo je obvykle kontaktní na těchto stránkách.';

$GLOBALS["lang"]['device'] = 'Zařízení';

$GLOBALS["lang"]['Device'] = 'Zařízení';

$GLOBALS["lang"]['Device Audits'] = 'Audity zařízení';

$GLOBALS["lang"]['device_id'] = 'ID zařízení';

$GLOBALS["lang"]['Device ID'] = 'ID zařízení';

$GLOBALS["lang"]['device_id_a'] = 'ID zařízení A';

$GLOBALS["lang"]['Device ID A'] = 'ID zařízení A';

$GLOBALS["lang"]['device_id_b'] = 'ID zařízení B';

$GLOBALS["lang"]['Device ID B'] = 'ID zařízení B';

$GLOBALS["lang"]['Device Name'] = 'Název zařízení';

$GLOBALS["lang"]['Device Result'] = 'Výsledek zařízení';

$GLOBALS["lang"]['Device Results'] = 'Výsledky zařízení';

$GLOBALS["lang"]['Device Seed'] = 'Zařízení Seed';

$GLOBALS["lang"]['Device Seed IP'] = 'IP semeno zařízení';

$GLOBALS["lang"]['Device Status'] = 'Stav zařízení';

$GLOBALS["lang"]['Device Types'] = 'Typy zařízení';

$GLOBALS["lang"]['Device is in the Subnet'] = 'Zařízení je v podsíti';

$GLOBALS["lang"]['Devices'] = 'Zařízení';

$GLOBALS["lang"]['devices_assigned_to_location'] = 'Zařízení určená k umístění';

$GLOBALS["lang"]['Devices Assigned To Location'] = 'Zařízení určená k umístění';

$GLOBALS["lang"]['devices_assigned_to_org'] = 'Zařízení určená pro Org';

$GLOBALS["lang"]['Devices Assigned To Org'] = 'Zařízení určená pro Org';

$GLOBALS["lang"]['Devices Audited'] = 'Auditované zařízení';

$GLOBALS["lang"]['Devices Created in '] = 'Zařízení vytvořená v';

$GLOBALS["lang"]['Devices Created in Open-AudIT'] = 'Zařízení vytvořená v Open- Audit';

$GLOBALS["lang"]['devices_default_display_columns'] = 'Výchozí sloupce zobrazení zařízení';

$GLOBALS["lang"]['Devices Default Display Columns'] = 'Výchozí sloupce zobrazení zařízení';

$GLOBALS["lang"]['Devices Found Last 7 Days'] = 'Zařízení nalezená v posledních 7 dnech';

$GLOBALS["lang"]['Devices Found Today'] = 'Zařízení nalezená dnes';

$GLOBALS["lang"]['Devices Found Yesterday'] = 'Zařízení nalezená včera';

$GLOBALS["lang"]['Devices Not Audited'] = 'Neauditovaná zařízení';

$GLOBALS["lang"]['Devices Not Seen 30 Days'] = 'Zařízení, která nebyla viděna 30 dní';

$GLOBALS["lang"]['Devices Not Seen 7 Days'] = 'Zařízení, která nebyla viděna 7 dní';

$GLOBALS["lang"]['Devices Not Seen 90 Days'] = 'Zařízení, která nebyla viděna 90 dní';

$GLOBALS["lang"]['Devices Retrieved via API'] = 'Zařízení retrieved via API';

$GLOBALS["lang"]['Devices Selected from '] = 'Vybraná zařízení';

$GLOBALS["lang"]['Devices Selected from Open-AudIT'] = 'Zařízení vybraná z Open- Audit';

$GLOBALS["lang"]['Devices Updated in '] = 'Zařízení aktualizovaná';

$GLOBALS["lang"]['Devices Updated in Open-AudIT'] = 'Aktualizovaná zařízení v Open- Audit';

$GLOBALS["lang"]['Devices are being benchmarked.'] = 'Zařízení jsou srovnávána.';

$GLOBALS["lang"]['Devices are not being benchmarked.'] = 'Zařízení nejsou srovnávána.';

$GLOBALS["lang"]['Devices could be benchmarked.'] = 'Zařízení může být srovnáváno.';

$GLOBALS["lang"]['Devices in Running State'] = 'Zařízení v provozním stavu';

$GLOBALS["lang"]['Devices in Stopped State'] = 'Zařízení v zastavěném stavu';

$GLOBALS["lang"]['Devices in this'] = 'Zařízení v tomto';

$GLOBALS["lang"]['Devired from type or OS.'] = 'Odevzdáno z typu nebo OS.';

$GLOBALS["lang"]['dhcp_enabled'] = 'Name';

$GLOBALS["lang"]['Dhcp Enabled'] = 'Name';

$GLOBALS["lang"]['dhcp_lease_expires'] = 'Dhcp Lease expires';

$GLOBALS["lang"]['Dhcp Lease Expires'] = 'Dhcp Lease expires';

$GLOBALS["lang"]['dhcp_lease_obtained'] = 'Dhcp leasing Obdržen';

$GLOBALS["lang"]['Dhcp Lease Obtained'] = 'Dhcp leasing Obdržen';

$GLOBALS["lang"]['dhcp_server'] = 'Dhcp server';

$GLOBALS["lang"]['Dhcp Server'] = 'Dhcp server';

$GLOBALS["lang"]['Did the command complete successfully and return expected data.'] = 'Dokončil příkaz úspěšně a vrátil očekávaná data.';

$GLOBALS["lang"]['direction'] = 'Směr';

$GLOBALS["lang"]['Direction'] = 'Směr';

$GLOBALS["lang"]['directory'] = 'Adresář';

$GLOBALS["lang"]['Directory'] = 'Adresář';

$GLOBALS["lang"]['disabled'] = 'Zakázáno';

$GLOBALS["lang"]['Disabled'] = 'Zakázáno';

$GLOBALS["lang"]['discard'] = 'Zlikvidujte';

$GLOBALS["lang"]['Discard'] = 'Zlikvidujte';

$GLOBALS["lang"]['Discover'] = 'Objevte';

$GLOBALS["lang"]['discoveries'] = 'Objevy';

$GLOBALS["lang"]['Discoveries'] = 'Objevy';

$GLOBALS["lang"]['Discovery'] = 'Objevení';

$GLOBALS["lang"]['discovery_id'] = 'ID objevu';

$GLOBALS["lang"]['Discovery ID'] = 'ID objevu';

$GLOBALS["lang"]['Discovery Issues'] = 'Objevení otázek';

$GLOBALS["lang"]['discovery_log'] = 'Log objevů';

$GLOBALS["lang"]['Discovery Log'] = 'Log objevů';

$GLOBALS["lang"]['Discovery Name'] = 'Název objevu';

$GLOBALS["lang"]['Discovery Options'] = 'Možnosti vyhledávání';

$GLOBALS["lang"]['Discovery Queue Count'] = 'Počet zobrazených front';

$GLOBALS["lang"]['Discovery Queue Limit'] = 'Discovery Queue Limit';

$GLOBALS["lang"]['discovery_run'] = 'Spustit objev';

$GLOBALS["lang"]['Discovery Run'] = 'Spustit objev';

$GLOBALS["lang"]['discovery_scan_options'] = 'Možnosti vyhledávání';

$GLOBALS["lang"]['Discovery Scan Options'] = 'Možnosti vyhledávání';

$GLOBALS["lang"]['disk'] = 'Disk';

$GLOBALS["lang"]['Disk'] = 'Disk';

$GLOBALS["lang"]['Display in Menu'] = 'Zobrazit v nabídce';

$GLOBALS["lang"]['district'] = 'Oblast';

$GLOBALS["lang"]['District'] = 'Oblast';

$GLOBALS["lang"]['Djibouti'] = 'Džibutsko';

$GLOBALS["lang"]['dns'] = 'Dns';

$GLOBALS["lang"]['Dns'] = 'Dns';

$GLOBALS["lang"]['dns_domain'] = 'Dns Domain';

$GLOBALS["lang"]['Dns Domain'] = 'Dns Domain';

$GLOBALS["lang"]['dns_domain_reg_enabled'] = 'Dns Domain Reg povoleno';

$GLOBALS["lang"]['Dns Domain Reg Enabled'] = 'Dns Domain Reg povoleno';

$GLOBALS["lang"]['dns_fqdn'] = 'Dns Fqdn';

$GLOBALS["lang"]['Dns Fqdn'] = 'Dns Fqdn';

$GLOBALS["lang"]['dns_host_name'] = 'Jméno hostitele Dns';

$GLOBALS["lang"]['Dns Host Name'] = 'Jméno hostitele Dns';

$GLOBALS["lang"]['dns_hostname'] = 'Dns Hostname';

$GLOBALS["lang"]['Dns Hostname'] = 'Dns Hostname';

$GLOBALS["lang"]['dns_server'] = 'Dns Server';

$GLOBALS["lang"]['Dns Server'] = 'Dns Server';

$GLOBALS["lang"]['Do not scan these TCP ports.'] = 'Neskenujte tyto TCP porty.';

$GLOBALS["lang"]['Do not scan these UDP ports.'] = 'Neskenujte tyto UDP porty.';

$GLOBALS["lang"]['Do not show me again'] = 'Už mi to neukazuj';

$GLOBALS["lang"]['Do you want to use secure transport (LDAPS) or regular unencrypted LDAP.'] = 'Chcete použít zabezpečenou přepravu (LDAPS) nebo pravidelný nešifrovaný LDAP.';

$GLOBALS["lang"]['Do you wish to see the standard sidebar on the left.'] = 'Přejete si vidět standardní postranní lištu vlevo.';

$GLOBALS["lang"]['documentation'] = 'Dokumentace';

$GLOBALS["lang"]['Documentation'] = 'Dokumentace';

$GLOBALS["lang"]['Does the license apply to child Orgs.'] = 'Platí licence pro dětské Orgy.';

$GLOBALS["lang"]['domain'] = 'Oblast';

$GLOBALS["lang"]['Domain'] = 'Oblast';

$GLOBALS["lang"]['domain_controller_address'] = 'Adresa správce domény';

$GLOBALS["lang"]['Domain Controller Address'] = 'Adresa správce domény';

$GLOBALS["lang"]['domain_controller_name'] = 'Správce domén Název';

$GLOBALS["lang"]['Domain Controller Name'] = 'Správce domén Název';

$GLOBALS["lang"]['domain_role'] = 'Úloha domény';

$GLOBALS["lang"]['Domain Role'] = 'Úloha domény';

$GLOBALS["lang"]['domain_short'] = 'Doména krátká';

$GLOBALS["lang"]['Domain Short'] = 'Doména krátká';

$GLOBALS["lang"]['Dominica'] = 'Dominika';

$GLOBALS["lang"]['Dominican Republic'] = 'Dominikánská republika';

$GLOBALS["lang"]['Dont hold my hand, I know what I am doing. No filter and the ability to join custom tables.'] = 'Nedrž mě za ruku, vím, co dělám. Žádný filtr a schopnost připojit se k vlastním stolům.';

$GLOBALS["lang"]['Download'] = 'Stáhnout';

$GLOBALS["lang"]['Download a file from URL'] = 'Stáhnout soubor z URL';

$GLOBALS["lang"]['driver'] = 'Řidič';

$GLOBALS["lang"]['Driver'] = 'Řidič';

$GLOBALS["lang"]['duplex'] = 'Duplex';

$GLOBALS["lang"]['Duplex'] = 'Duplex';

$GLOBALS["lang"]['duration'] = 'Doba trvání';

$GLOBALS["lang"]['Duration'] = 'Doba trvání';

$GLOBALS["lang"]['ESXi'] = 'ESXi';

$GLOBALS["lang"]['EULA'] = 'EULA';

$GLOBALS["lang"]['Ecuador'] = 'Ekvádor';

$GLOBALS["lang"]['Edit'] = 'Upravit';

$GLOBALS["lang"]['edit_log'] = 'Upravit záznam';

$GLOBALS["lang"]['Edit Log'] = 'Upravit záznam';

$GLOBALS["lang"]['editable'] = 'EditName';

$GLOBALS["lang"]['Editable'] = 'EditName';

$GLOBALS["lang"]['edited_by'] = 'Edited';

$GLOBALS["lang"]['Edited By'] = 'Edited';

$GLOBALS["lang"]['edited_date'] = 'Datum úpravy';

$GLOBALS["lang"]['Edited Date'] = 'Datum úpravy';

$GLOBALS["lang"]['edition'] = 'Vydání';

$GLOBALS["lang"]['Edition'] = 'Vydání';

$GLOBALS["lang"]['Egypt'] = 'Egypt';

$GLOBALS["lang"]['Either Amazon, Google or Microsoft.'] = 'Buď Amazon, Google nebo Microsoft.';

$GLOBALS["lang"]['El Salvador'] = 'Salvador';

$GLOBALS["lang"]['email'] = 'E-mail';

$GLOBALS["lang"]['Email'] = 'E-mail';

$GLOBALS["lang"]['email_address'] = 'E-mailová adresa';

$GLOBALS["lang"]['Email Address'] = 'E-mailová adresa';

$GLOBALS["lang"]['Email to send test to'] = 'Email pro odeslání testu na';

$GLOBALS["lang"]['Enable'] = 'Povolit';

$GLOBALS["lang"]['enabled'] = 'Povoleno';

$GLOBALS["lang"]['Enabled'] = 'Povoleno';

$GLOBALS["lang"]['encryption'] = 'Šifrování';

$GLOBALS["lang"]['Encryption'] = 'Šifrování';

$GLOBALS["lang"]['encryption_method'] = 'Metoda šifrování';

$GLOBALS["lang"]['Encryption Method'] = 'Metoda šifrování';

$GLOBALS["lang"]['encryption_status'] = 'Stav šifrování';

$GLOBALS["lang"]['Encryption Status'] = 'Stav šifrování';

$GLOBALS["lang"]['end_date'] = 'Datum ukončení';

$GLOBALS["lang"]['End Date'] = 'Datum ukončení';

$GLOBALS["lang"]['End OF Life Product ID'] = 'Identifikace výrobku na konci životnosti';

$GLOBALS["lang"]['end_of_life'] = 'Konec života';

$GLOBALS["lang"]['End Of Life'] = 'Konec života';

$GLOBALS["lang"]['end_of_production'] = 'Konec výroby';

$GLOBALS["lang"]['End Of Production'] = 'Konec výroby';

$GLOBALS["lang"]['end_of_service'] = 'Konec služby';

$GLOBALS["lang"]['End Of Service'] = 'Konec služby';

$GLOBALS["lang"]['end_of_service_life'] = 'Konec životnosti služby';

$GLOBALS["lang"]['End Of Service Life'] = 'Konec životnosti služby';

$GLOBALS["lang"]['English'] = 'Anglicky';

$GLOBALS["lang"]['enterprise'] = 'Podniky';

$GLOBALS["lang"]['Enterprise'] = 'Podniky';

$GLOBALS["lang"]['Enterprise Private Network'] = 'Soukromá síť Enterprise';

$GLOBALS["lang"]['Entitlement Type'] = 'Typ nároku';

$GLOBALS["lang"]['environment'] = 'Životní prostředí';

$GLOBALS["lang"]['Environment'] = 'Životní prostředí';

$GLOBALS["lang"]['Equal To'] = 'Rovné s';

$GLOBALS["lang"]['Equal To or Greater Than'] = 'Rovné nebo větší než';

$GLOBALS["lang"]['Equal To or Less Than'] = 'Rovné nebo nižší než';

$GLOBALS["lang"]['Equals'] = 'Rovnice';

$GLOBALS["lang"]['Equatorial Guinea'] = 'Rovníková Guinea';

$GLOBALS["lang"]['Eritrea'] = 'Eritrea';

$GLOBALS["lang"]['Error'] = 'Chyba';

$GLOBALS["lang"]['Error Code'] = 'Kód chyby';

$GLOBALS["lang"]['Estonia'] = 'Estonsko';

$GLOBALS["lang"]['Ethernet MAC'] = 'Ethernet MAC';

$GLOBALS["lang"]['ethernet_mac'] = 'Ethernet Mac';

$GLOBALS["lang"]['Ethernet Mac'] = 'Ethernet Mac';

$GLOBALS["lang"]['Ethiopia'] = 'Etiopie';

$GLOBALS["lang"]['Every'] = 'Každý';

$GLOBALS["lang"]['Every Day'] = 'Každý den';

$GLOBALS["lang"]['Exceptions'] = 'Výjimky';

$GLOBALS["lang"]['exclude'] = 'Vyloučení';

$GLOBALS["lang"]['Exclude'] = 'Vyloučení';

$GLOBALS["lang"]['exclude_ip'] = 'Vyloučení IP';

$GLOBALS["lang"]['Exclude IP'] = 'Vyloučení IP';

$GLOBALS["lang"]['Exclude IP Addresses'] = 'Vyloučení IP adres';

$GLOBALS["lang"]['Exclude TCP Ports'] = 'Bez TCP portů';

$GLOBALS["lang"]['exclude_tcp_ports'] = 'Vyloučení přístavů Tcp';

$GLOBALS["lang"]['Exclude Tcp Ports'] = 'Vyloučení přístavů Tcp';

$GLOBALS["lang"]['Exclude UDP Ports'] = 'Vyloučení portů UDP';

$GLOBALS["lang"]['exclude_udp_ports'] = 'Exclude Udp Ports';

$GLOBALS["lang"]['Exclude Udp Ports'] = 'Exclude Udp Ports';

$GLOBALS["lang"]['Exclude these IP addresses from being Nmap scanned.'] = 'Vyjměte tyto IP adresy z skenování Nmap.';

$GLOBALS["lang"]['exclusion_reasons'] = 'Důvody vyloučení';

$GLOBALS["lang"]['Exclusion Reasons'] = 'Důvody vyloučení';

$GLOBALS["lang"]['executable'] = 'Spustitelné';

$GLOBALS["lang"]['Executable'] = 'Spustitelné';

$GLOBALS["lang"]['executable_id'] = 'Spustitelné ID';

$GLOBALS["lang"]['Executable ID'] = 'Spustitelné ID';

$GLOBALS["lang"]['executables'] = 'Provedení';

$GLOBALS["lang"]['Executables'] = 'Provedení';

$GLOBALS["lang"]['Execute'] = 'Provést';

$GLOBALS["lang"]['Executing'] = 'Provedení';

$GLOBALS["lang"]['exemption_reason'] = 'Důvod osvobození';

$GLOBALS["lang"]['Exemption Reason'] = 'Důvod osvobození';

$GLOBALS["lang"]['Existing Building'] = 'Stávající budova';

$GLOBALS["lang"]['Existing Floor'] = 'Stávající patro';

$GLOBALS["lang"]['Existing Room'] = 'Existující místnost';

$GLOBALS["lang"]['Existing Row'] = 'Stávající řádek';

$GLOBALS["lang"]['expire_minutes'] = 'Konec zápisu';

$GLOBALS["lang"]['Expire Minutes'] = 'Konec zápisu';

$GLOBALS["lang"]['expiry_date'] = 'Datum skončení platnosti';

$GLOBALS["lang"]['Expiry Date'] = 'Datum skončení platnosti';

$GLOBALS["lang"]['Export CSV'] = 'Exportovat CSV';

$GLOBALS["lang"]['Export JSON'] = 'Exportovat JSON';

$GLOBALS["lang"]['Export by Device'] = 'Export by Device';

$GLOBALS["lang"]['Export by Policy'] = 'Vývoz podle politik';

$GLOBALS["lang"]['Export data to'] = 'Exportovat data do';

$GLOBALS["lang"]['expose'] = 'Odhalení';

$GLOBALS["lang"]['Expose'] = 'Odhalení';

$GLOBALS["lang"]['External'] = 'Vnější';

$GLOBALS["lang"]['External Field Name'] = 'Název vnějšího pole';

$GLOBALS["lang"]['External Field Type'] = 'Typ vnějšího pole';

$GLOBALS["lang"]['external_ident'] = 'Externí dent';

$GLOBALS["lang"]['External Ident'] = 'Externí dent';

$GLOBALS["lang"]['external_link'] = 'Externí odkaz';

$GLOBALS["lang"]['External Link'] = 'Externí odkaz';

$GLOBALS["lang"]['extra_columns'] = 'Extra sloupce';

$GLOBALS["lang"]['Extra Columns'] = 'Extra sloupce';

$GLOBALS["lang"]['Extra and more verbose logging is generated for troubleshooting.'] = 'Extra a další logování verbózy je generován pro řešení problémů.';

$GLOBALS["lang"]['FQDN'] = 'FQDN';

$GLOBALS["lang"]['FW Revision'] = 'Revize FW';

$GLOBALS["lang"]['factories'] = 'Továrny';

$GLOBALS["lang"]['Factories'] = 'Továrny';

$GLOBALS["lang"]['Fail'] = 'Selhání';

$GLOBALS["lang"]['Failed'] = 'Selhalo';

$GLOBALS["lang"]['Failed Severity'] = 'Selhávající závažnost';

$GLOBALS["lang"]['Falkland Islands (Malvinas)'] = 'Falklandské ostrovy (Malvinas)';

$GLOBALS["lang"]['Family'] = 'Rodina';

$GLOBALS["lang"]['Faroe Islands'] = 'Faerské ostrovy';

$GLOBALS["lang"]['Features'] = 'Vlastnosti';

$GLOBALS["lang"]['February'] = 'Únor';

$GLOBALS["lang"]['field'] = 'Pole';

$GLOBALS["lang"]['Field'] = 'Pole';

$GLOBALS["lang"]['field_id'] = 'ID pole';

$GLOBALS["lang"]['Field ID'] = 'ID pole';

$GLOBALS["lang"]['Field Name'] = 'Název pole';

$GLOBALS["lang"]['Field Type'] = 'Typ pole';

$GLOBALS["lang"]['Fields'] = 'Pole';

$GLOBALS["lang"]['fields'] = 'Pole';

$GLOBALS["lang"]['Fiji the Fiji Islands'] = 'Fidži Fidži';

$GLOBALS["lang"]['file'] = 'Soubor';

$GLOBALS["lang"]['File'] = 'Soubor';

$GLOBALS["lang"]['File Import'] = 'Importovat soubor';

$GLOBALS["lang"]['File Input'] = 'Vstup do souboru';

$GLOBALS["lang"]['file_name'] = 'Název souboru';

$GLOBALS["lang"]['File Name'] = 'Název souboru';

$GLOBALS["lang"]['file_size'] = 'Velikost souboru';

$GLOBALS["lang"]['File Size'] = 'Velikost souboru';

$GLOBALS["lang"]['filename'] = 'Název souboru';

$GLOBALS["lang"]['Filename'] = 'Název souboru';

$GLOBALS["lang"]['files'] = 'Soubory';

$GLOBALS["lang"]['Files'] = 'Soubory';

$GLOBALS["lang"]['files_id'] = 'ID souborů';

$GLOBALS["lang"]['Files ID'] = 'ID souborů';

$GLOBALS["lang"]['filtered'] = 'Filtrované';

$GLOBALS["lang"]['Filtered'] = 'Filtrované';

$GLOBALS["lang"]['Finland'] = 'Finsko';

$GLOBALS["lang"]['Firewall'] = 'Firewall';

$GLOBALS["lang"]['firewall_rule'] = 'Pravidlo firewall';

$GLOBALS["lang"]['Firewall Rule'] = 'Pravidlo firewall';

$GLOBALS["lang"]['firmware'] = 'Firmware';

$GLOBALS["lang"]['Firmware'] = 'Firmware';

$GLOBALS["lang"]['firmware_revision'] = 'Revize firmwaru';

$GLOBALS["lang"]['Firmware Revision'] = 'Revize firmwaru';

$GLOBALS["lang"]['first_run'] = 'První běh';

$GLOBALS["lang"]['First Run'] = 'První běh';

$GLOBALS["lang"]['first_seen'] = 'First Seen';

$GLOBALS["lang"]['First Seen'] = 'First Seen';

$GLOBALS["lang"]['FirstWave'] = 'FirstWave';

$GLOBALS["lang"]['Fix'] = 'Oprava';

$GLOBALS["lang"]['Fixed'] = 'Pevné';

$GLOBALS["lang"]['Floor'] = 'Podlaha';

$GLOBALS["lang"]['Follow any of the links below and discover how to use Open-AudIT to find out <b>Whats On Your Network?</b>'] = 'Následujte některý z níže uvedených odkazů a zjistěte, jak používat Open- Audit, abyste zjistili < b > Co je na Vaší síti? < / b >';

$GLOBALS["lang"]['For a seed discovery, should I only discover IPs in the private IP address space.'] = 'Pro objev semen, bych měl objevit pouze IP v soukromém IP adresním prostoru.';

$GLOBALS["lang"]['For a seed discovery, should I only discover IPs on the chosen subnet.'] = 'Pro objev semen, bych měl objevit jen IP na zvolené podsíti.';

$GLOBALS["lang"]['For a seed discovery, should I ping the subnet before running the discovery.'] = 'Pro objev semen, bych měl ping podsíť před spuštěním objevu.';

$GLOBALS["lang"]['For advanced entry of a raw SQL query. As per Queries, you must include <code>WHERE @filter AND<code> in your SQL.'] = 'Pro pokročilý vstup syrového SQL dotazu. Podle dotazů musíte do svého SQL zahrnout < kód > Where @ filter A < kód >.';

$GLOBALS["lang"]['For licenses that are not perpetual, when does the license expire.'] = 'Pro licence, které nejsou trvalé, kdy vyprší licence.';

$GLOBALS["lang"]['form_factor'] = 'Forma faktoru';

$GLOBALS["lang"]['Form Factor'] = 'Forma faktoru';

$GLOBALS["lang"]['format'] = 'Formát';

$GLOBALS["lang"]['Format'] = 'Formát';

$GLOBALS["lang"]['fqdn'] = 'Fqdn';

$GLOBALS["lang"]['Fqdn'] = 'Fqdn';

$GLOBALS["lang"]['France, French Republic'] = 'Francie, Francie';

$GLOBALS["lang"]['free'] = 'Volný';

$GLOBALS["lang"]['Free'] = 'Volný';

$GLOBALS["lang"]['free_percent'] = 'Volné procento';

$GLOBALS["lang"]['Free Percent'] = 'Volné procento';

$GLOBALS["lang"]['French'] = 'Francouzština';

$GLOBALS["lang"]['French Guiana'] = 'Francouzská Guyana';

$GLOBALS["lang"]['French Polynesia'] = 'Francouzská Polynésie';

$GLOBALS["lang"]['French Southern Territories'] = 'Francouzská jižní území';

$GLOBALS["lang"]['Frequently Asked Questions'] = 'Často kladené otázky';

$GLOBALS["lang"]['Friday'] = 'Pátek';

$GLOBALS["lang"]['From 100 Devices'] = 'Od 100 zařízení';

$GLOBALS["lang"]['From 500 Devices'] = 'Z 500 zařízení';

$GLOBALS["lang"]['full_name'] = 'Celé jméno';

$GLOBALS["lang"]['Full Name'] = 'Celé jméno';

$GLOBALS["lang"]['function'] = 'Funkce';

$GLOBALS["lang"]['Function'] = 'Funkce';

$GLOBALS["lang"]['GROUP BY'] = 'SKUPINA BY';

$GLOBALS["lang"]['Gabon'] = 'Gabon';

$GLOBALS["lang"]['Gambia the'] = 'Gambie';

$GLOBALS["lang"]['gateway'] = 'Brána';

$GLOBALS["lang"]['Gateway'] = 'Brána';

$GLOBALS["lang"]['gateways'] = 'Brány';

$GLOBALS["lang"]['Gateways'] = 'Brány';

$GLOBALS["lang"]['Generated By'] = 'Generovaný';

$GLOBALS["lang"]['geo'] = 'Geo';

$GLOBALS["lang"]['Geo'] = 'Geo';

$GLOBALS["lang"]['Georgia'] = 'Gruzie';

$GLOBALS["lang"]['German'] = 'Němčina';

$GLOBALS["lang"]['Germany'] = 'Německo';

$GLOBALS["lang"]['Get Lat/Long'] = 'Get Lat / Long';

$GLOBALS["lang"]['Get Started'] = 'Začít';

$GLOBALS["lang"]['Get a Free License'] = 'Získat licenci zdarma';

$GLOBALS["lang"]['Getting Started'] = 'Začínáme';

$GLOBALS["lang"]['Ghana'] = 'Ghana';

$GLOBALS["lang"]['Gibraltar'] = 'Gibraltar';

$GLOBALS["lang"]['Go'] = 'Běž';

$GLOBALS["lang"]['Google Compute Fields'] = 'Google Compute Fields';

$GLOBALS["lang"]['graph'] = 'Graf';

$GLOBALS["lang"]['Graph'] = 'Graf';

$GLOBALS["lang"]['Greater Than'] = 'Větší než';

$GLOBALS["lang"]['Greater Than or Equals'] = 'Větší než nebo rovna';

$GLOBALS["lang"]['Greece'] = 'Řecko';

$GLOBALS["lang"]['Green Query'] = 'Zelený dotaz';

$GLOBALS["lang"]['Greenland'] = 'Grónsko';

$GLOBALS["lang"]['Grenada'] = 'Grenada';

$GLOBALS["lang"]['Group'] = 'Skupina';

$GLOBALS["lang"]['group_by'] = 'Skupina podle';

$GLOBALS["lang"]['Group By'] = 'Skupina podle';

$GLOBALS["lang"]['group_id'] = 'Identifikace skupiny';

$GLOBALS["lang"]['Group ID'] = 'Identifikace skupiny';

$GLOBALS["lang"]['groups'] = 'Skupiny';

$GLOBALS["lang"]['Groups'] = 'Skupiny';

$GLOBALS["lang"]['Guadeloupe'] = 'Guadeloupe';

$GLOBALS["lang"]['Guam'] = 'Guam';

$GLOBALS["lang"]['Guatemala'] = 'Guatemala';

$GLOBALS["lang"]['Guernsey'] = 'Guernsey';

$GLOBALS["lang"]['guest_device_id'] = 'ID zařízení pro hosty';

$GLOBALS["lang"]['Guest Device ID'] = 'ID zařízení pro hosty';

$GLOBALS["lang"]['guid'] = 'Guide';

$GLOBALS["lang"]['Guid'] = 'Guide';

$GLOBALS["lang"]['Guinea'] = 'Guinea';

$GLOBALS["lang"]['Guinea-Bissau'] = 'Guinea- Bissau';

$GLOBALS["lang"]['Guyana'] = 'Guyana';

$GLOBALS["lang"]['HP-UX'] = 'HP- UX';

$GLOBALS["lang"]['HW Revision'] = 'HW Revize';

$GLOBALS["lang"]['Haiti'] = 'Haiti';

$GLOBALS["lang"]['hard_drive_index'] = 'Index pevného disku';

$GLOBALS["lang"]['Hard Drive Index'] = 'Index pevného disku';

$GLOBALS["lang"]['hardware_revision'] = 'Revize hardwaru';

$GLOBALS["lang"]['Hardware Revision'] = 'Revize hardwaru';

$GLOBALS["lang"]['hash'] = 'Haš';

$GLOBALS["lang"]['Hash'] = 'Haš';

$GLOBALS["lang"]['Head'] = 'Hlava';

$GLOBALS["lang"]['Heard Island and McDonald Islands'] = 'Heard Island and McDonald Islands';

$GLOBALS["lang"]['height'] = 'Výška';

$GLOBALS["lang"]['Height'] = 'Výška';

$GLOBALS["lang"]['Height in RU'] = 'Výška v ŽP';

$GLOBALS["lang"]['Help'] = 'Nápověda';

$GLOBALS["lang"]['High'] = 'Vysoká';

$GLOBALS["lang"]['High Availability'] = 'Vysoká dostupnost';

$GLOBALS["lang"]['Holy See (Vatican City State)'] = 'Svatý stolec (Vatikánský městský stát)';

$GLOBALS["lang"]['home'] = 'Domů';

$GLOBALS["lang"]['Home'] = 'Domů';

$GLOBALS["lang"]['Home Area Network'] = 'Síť domovské oblasti';

$GLOBALS["lang"]['Honduras'] = 'Honduras';

$GLOBALS["lang"]['Hong Kong'] = 'Hongkong';

$GLOBALS["lang"]['host'] = 'Hostitel';

$GLOBALS["lang"]['Host'] = 'Hostitel';

$GLOBALS["lang"]['hostname'] = 'Jméno hostitele';

$GLOBALS["lang"]['Hostname'] = 'Jméno hostitele';

$GLOBALS["lang"]['hour'] = 'Hodina';

$GLOBALS["lang"]['Hour'] = 'Hodina';

$GLOBALS["lang"]['How long did the command take to execute.'] = 'Jak dlouho to velení trvalo.';

$GLOBALS["lang"]['How long should Nmap wait for a response, per device.'] = 'Jak dlouho by měl Nmap čekat na odpověď, na zařízení.';

$GLOBALS["lang"]['How many circuit feed to this rack.'] = 'Kolik obvodů vede do tohoto stojanu.';

$GLOBALS["lang"]['How many policies results in a fail.'] = 'Kolik politik má za následek selhání.';

$GLOBALS["lang"]['How many policies results in a pass.'] = 'Kolik politik má za následek průchod.';

$GLOBALS["lang"]['How many power sockets in this rack.'] = 'Kolik energetických zásuvek je v tomto stojanu.';

$GLOBALS["lang"]['How many rack units in height is this rack.'] = 'Kolik stojanů ve výšce je tenhle prut.';

$GLOBALS["lang"]['How often should the collector ask the server for a task.'] = 'Jak často by měl sběratel požádat server o úkol.';

$GLOBALS["lang"]['How should we select devices to be integrated (using an Attribute, Query or a Group).'] = 'Jak bychom měli vybrat zařízení, která mají být integrována (pomocí Atribute, Query nebo Group).';

$GLOBALS["lang"]['How to compare'] = 'Jak porovnat';

$GLOBALS["lang"]['Hungary'] = 'Maďarsko';

$GLOBALS["lang"]['hyperthreading'] = 'Hypertenze';

$GLOBALS["lang"]['Hyperthreading'] = 'Hypertenze';

$GLOBALS["lang"]['id'] = 'ID';

$GLOBALS["lang"]['ID'] = 'ID';

$GLOBALS["lang"]['IF'] = 'IF';

$GLOBALS["lang"]['IOS Version'] = 'Verze IOS';

$GLOBALS["lang"]['ip'] = 'IP';

$GLOBALS["lang"]['IP'] = 'IP';

$GLOBALS["lang"]['IP Address'] = 'IP adresa';

$GLOBALS["lang"]['IP Addresses'] = 'IP adresy';

$GLOBALS["lang"]['IP Last Seen'] = 'Name';

$GLOBALS["lang"]['IP Set By'] = 'Nastavení IP podle';

$GLOBALS["lang"]['Iceland'] = 'Island';

$GLOBALS["lang"]['icon'] = 'Ikona';

$GLOBALS["lang"]['Icon'] = 'Ikona';

$GLOBALS["lang"]['Icon and Text'] = 'Ikona a text';

$GLOBALS["lang"]['Icon only, text only or icon and text.'] = 'Pouze ikona, pouze text nebo ikona a text.';

$GLOBALS["lang"]['id_internal'] = 'Id vnitřní';

$GLOBALS["lang"]['Id Internal'] = 'Id vnitřní';

$GLOBALS["lang"]['id_number'] = 'Identifikační číslo';

$GLOBALS["lang"]['Id Number'] = 'Identifikační číslo';

$GLOBALS["lang"]['identification'] = 'Identifikace';

$GLOBALS["lang"]['Identification'] = 'Identifikace';

$GLOBALS["lang"]['If'] = 'Pokud';

$GLOBALS["lang"]['If a port responds with filtered, should we consider it available.'] = 'Pokud port reaguje s filtrem, měli bychom ho považovat za dostupný.';

$GLOBALS["lang"]['If a port responds with open|filtered, should we consider it available.'] = 'Pokud port reaguje s otevřeným current 124; filtrován, měli bychom ho považovat za dostupný.';

$GLOBALS["lang"]['If a remote device does not exist in the Open-AudIT selected devices, should we delete it from the external system.'] = 'Pokud vzdálené zařízení ve vybraných zařízeních Open- Audit neexistuje, měli bychom ho odstranit z vnějšího systému.';

$GLOBALS["lang"]['If an Open-AudIT device has been changed, should we update the external system.'] = 'Pokud bylo zařízení Open- AudIT změněno, měli bychom aktualizovat externí systém.';

$GLOBALS["lang"]['If an Open-AudIT device is not on the external system, should we create it.'] = 'Pokud zařízení Open- AudIT není na vnějším systému, měli bychom ho vytvořit.';

$GLOBALS["lang"]['If an agent reports its primary IP is in this subnet, perform the actions.'] = 'Pokud agent ohlásí, že jeho primární IP je v této podsíti, provede kroky.';

$GLOBALS["lang"]['If any of these (comma seperated, no spaces) ports are detected, assume SSH is running on them and use them for auditing. No need to add this port to the Custom TCP ports - it will be added automatically.'] = 'Pokud se zjistí některý z těchto portů (čárka oddělená, žádné mezery), předpokládejme, že na nich SSH běží a použije je pro audit. Není třeba přidávat tento port do vlastních TCP portů - bude přidán automaticky.';

$GLOBALS["lang"]['If set, holds a JSON array of specific device columns this user has chosen to see, other than the configuration default.'] = 'Pokud je nastaveno, má JSON pole specifických sloupců zařízení, které si zvolil tento uživatel vidět, kromě výchozího nastavení.';

$GLOBALS["lang"]['If the agent OS family (case insensitive) contains this string, perform the actions.'] = 'Pokud agent OS rodina (případ necitlivý) obsahuje tento řetězec, provést akce.';

$GLOBALS["lang"]['If the following conditions are met:<br><ul><li>a Role has an assigned ad_group</li><li>an Org has an assigned ad_group</li><li>an LDAP Server has use_roles set to y</li><li>a user exists in LDAP (be it Active Directory or OpenLDAP) and is in the assigned ad_groups</li></ul>That user can log on to Open-AudIT without an account in Open-AudIT needing to be created. Open-AudIT will query the LDAP in question and if the user is in the required groups but not in Open-AudIT, their user attributes (name, full name, email,  roles, orgs, etc) within Open-AudIT will be automatically populated and they will be logged on.<br> <br>'] = 'Pokud jsou splněny tyto podmínky: < br > < ul > < li > a Role má přidělenou ad _ group < / li > < li > Org má přiděleno ad _ group < / li > < li > LDAP Server používá _ role nastavené na y < / li > < li > uživatel existuje v LDAP (ať už je to Active Directory nebo OpenLDAP) a je v přiřazených ad _ groups < / li > < / ul > Tento uživatel se může přihlásit na Open- Audit bez účtu v Open- Audit je třeba vytvořit. Open- Audit bude dotaz LDAP v daném případě a pokud je uživatel v požadovaných skupinách, ale ne v Open- Audit, jejich uživatelské atributy (jméno, celé jméno, e-mail, role, orgs, atd.) v rámci Open- Auditu budou automaticky zalidněny a budou přihlášeny. < br > < br >';

$GLOBALS["lang"]['If the user logging on to Open-AudIT does not have the access to search LDAP, you can use another account which does have this access.'] = 'Pokud uživatel přihlášení na Open- Audit nemá přístup k vyhledávání LDAP, můžete použít jiný účet, který má tento přístup.';

$GLOBALS["lang"]['If this many or more minutes have passed since the device contacted the server, perform the actions.'] = 'Pokud uplynulo mnoho nebo více minut od okamžiku, kdy zařízení kontaktovalo server, provede akce.';

$GLOBALS["lang"]['If you choose a Collector, it will be scheduled to execute on the next 5 minute boundary.'] = 'Pokud zvolíte Sběratele, bude plánován na dalších 5 minut.';

$GLOBALS["lang"]['ifadminstatus'] = 'Ifadministrátorský status';

$GLOBALS["lang"]['Ifadminstatus'] = 'Ifadministrátorský status';

$GLOBALS["lang"]['iflastchange'] = 'Změny';

$GLOBALS["lang"]['Iflastchange'] = 'Změny';

$GLOBALS["lang"]['Ignored'] = 'Ignorovaný';

$GLOBALS["lang"]['image'] = 'Obrázek';

$GLOBALS["lang"]['Image'] = 'Obrázek';

$GLOBALS["lang"]['Images'] = 'Obrázky';

$GLOBALS["lang"]['implementation_notes'] = 'Prováděcí poznámky';

$GLOBALS["lang"]['Implementation Notes'] = 'Prováděcí poznámky';

$GLOBALS["lang"]['Import'] = 'Importovat';

$GLOBALS["lang"]['Import CSV'] = 'Importovat CSV';

$GLOBALS["lang"]['Import Example Data'] = 'Importovat ukázková data';

$GLOBALS["lang"]['Import JSON'] = 'Importovat JSON';

$GLOBALS["lang"]['improvement_opportunities'] = 'Zlepšení příležitostí';

$GLOBALS["lang"]['Improvement Opportunities'] = 'Zlepšení příležitostí';

$GLOBALS["lang"]['In'] = 'V';

$GLOBALS["lang"]['Inactive'] = 'Neaktivní';

$GLOBALS["lang"]['Include'] = 'Zahrnout';

$GLOBALS["lang"]['Index'] = 'Index';

$GLOBALS["lang"]['India'] = 'Indie';

$GLOBALS["lang"]['Indonesia'] = 'Indonésie';

$GLOBALS["lang"]['Info'] = 'Informace';

$GLOBALS["lang"]['Informational'] = 'Informace';

$GLOBALS["lang"]['initial_size'] = 'Počáteční velikost';

$GLOBALS["lang"]['Initial Size'] = 'Počáteční velikost';

$GLOBALS["lang"]['inode'] = 'Inód';

$GLOBALS["lang"]['Inode'] = 'Inód';

$GLOBALS["lang"]['Input Type'] = 'Typ vstupu';

$GLOBALS["lang"]['inputs'] = 'Vstupy';

$GLOBALS["lang"]['Inputs'] = 'Vstupy';

$GLOBALS["lang"]['Insane'] = 'Šílený';

$GLOBALS["lang"]['Insert example data and discover all that Open-AudIT can tell you.'] = 'Vložte ukázková data a zjistěte vše, co vám Open- Audit řekne.';

$GLOBALS["lang"]['Insert your Purchased license Key'] = 'Vložte Zakoupená licence Klíč';

$GLOBALS["lang"]['install'] = 'Instalovat';

$GLOBALS["lang"]['Install'] = 'Instalovat';

$GLOBALS["lang"]['install_date'] = 'Nainstalovat datum';

$GLOBALS["lang"]['Install Date'] = 'Nainstalovat datum';

$GLOBALS["lang"]['install_directory'] = 'Instalovat adresář';

$GLOBALS["lang"]['Install Directory'] = 'Instalovat adresář';

$GLOBALS["lang"]['Install OpenScap if required'] = 'Nainstalujte OpenScap v případě potřeby';

$GLOBALS["lang"]['install_source'] = 'Nainstalovat zdroj';

$GLOBALS["lang"]['Install Source'] = 'Nainstalovat zdroj';

$GLOBALS["lang"]['installed_by'] = 'Instalováno';

$GLOBALS["lang"]['Installed By'] = 'Instalováno';

$GLOBALS["lang"]['installed_on'] = 'Instalováno';

$GLOBALS["lang"]['Installed On'] = 'Instalováno';

$GLOBALS["lang"]['Installing'] = 'Instalace';

$GLOBALS["lang"]['instance'] = 'Soud';

$GLOBALS["lang"]['Instance'] = 'Soud';

$GLOBALS["lang"]['instance_ident'] = 'Ident instance';

$GLOBALS["lang"]['Instance Ident'] = 'Ident instance';

$GLOBALS["lang"]['instance_options'] = 'Možnosti';

$GLOBALS["lang"]['Instance Options'] = 'Možnosti';

$GLOBALS["lang"]['instance_provider'] = 'Poskytovatel opatření';

$GLOBALS["lang"]['Instance Provider'] = 'Poskytovatel opatření';

$GLOBALS["lang"]['instance_reservation_ident'] = 'Výhrada instance Name';

$GLOBALS["lang"]['Instance Reservation Ident'] = 'Výhrada instance Name';

$GLOBALS["lang"]['instance_state'] = 'Stát instance';

$GLOBALS["lang"]['Instance State'] = 'Stát instance';

$GLOBALS["lang"]['instance_tags'] = 'Instance Tags';

$GLOBALS["lang"]['Instance Tags'] = 'Instance Tags';

$GLOBALS["lang"]['instance_type'] = 'Typ návodu';

$GLOBALS["lang"]['Instance Type'] = 'Typ návodu';

$GLOBALS["lang"]['Integer'] = 'Integer';

$GLOBALS["lang"]['Integration'] = 'Integrace';

$GLOBALS["lang"]['integrations'] = 'Integrace';

$GLOBALS["lang"]['Integrations'] = 'Integrace';

$GLOBALS["lang"]['integrations_id'] = 'ID integrace';

$GLOBALS["lang"]['Integrations ID'] = 'ID integrace';

$GLOBALS["lang"]['integrations_log'] = 'Záznam integrace';

$GLOBALS["lang"]['Integrations Log'] = 'Záznam integrace';

$GLOBALS["lang"]['interface'] = 'Rozhraní';

$GLOBALS["lang"]['Interface'] = 'Rozhraní';

$GLOBALS["lang"]['interface_id'] = 'ID rozhraní';

$GLOBALS["lang"]['Interface ID'] = 'ID rozhraní';

$GLOBALS["lang"]['interface_type'] = 'Typ rozhraní';

$GLOBALS["lang"]['Interface Type'] = 'Typ rozhraní';

$GLOBALS["lang"]['Internal'] = 'Vnitřní';

$GLOBALS["lang"]['Internal Field Name'] = 'Název vnitřního pole';

$GLOBALS["lang"]['Internal ID'] = 'Vnitřní ID';

$GLOBALS["lang"]['Internal JSON array of valid access tokens for this user.'] = 'Interní JSON pole platných přístupových klíčů pro tohoto uživatele.';

$GLOBALS["lang"]['Introduction'] = 'Úvod';

$GLOBALS["lang"]['invoice'] = 'Faktura';

$GLOBALS["lang"]['Invoice'] = 'Faktura';

$GLOBALS["lang"]['invoice_id'] = 'ID faktury';

$GLOBALS["lang"]['Invoice ID'] = 'ID faktury';

$GLOBALS["lang"]['invoice_item'] = 'Položka faktury';

$GLOBALS["lang"]['Invoice Item'] = 'Položka faktury';

$GLOBALS["lang"]['ios_version'] = 'Verze Ios';

$GLOBALS["lang"]['Ios Version'] = 'Verze Ios';

$GLOBALS["lang"]['ip_address_external_a'] = 'Ip adresa Externí A';

$GLOBALS["lang"]['Ip Address External A'] = 'Ip adresa Externí A';

$GLOBALS["lang"]['ip_address_external_b'] = 'Ip adresa Externí B';

$GLOBALS["lang"]['Ip Address External B'] = 'Ip adresa Externí B';

$GLOBALS["lang"]['ip_address_internal_a'] = 'Ip adresa vnitřní A';

$GLOBALS["lang"]['Ip Address Internal A'] = 'Ip adresa vnitřní A';

$GLOBALS["lang"]['ip_address_internal_b'] = 'Ip adresa Internal B';

$GLOBALS["lang"]['Ip Address Internal B'] = 'Ip adresa Internal B';

$GLOBALS["lang"]['ip_all_count'] = 'Ip All Count';

$GLOBALS["lang"]['Ip All Count'] = 'Ip All Count';

$GLOBALS["lang"]['ip_audited_count'] = 'Ip auditovaný počet';

$GLOBALS["lang"]['Ip Audited Count'] = 'Ip auditovaný počet';

$GLOBALS["lang"]['ip_discovered_count'] = 'Ip Objevený počet';

$GLOBALS["lang"]['Ip Discovered Count'] = 'Ip Objevený počet';

$GLOBALS["lang"]['ip_enabled'] = 'Ip povoleno';

$GLOBALS["lang"]['Ip Enabled'] = 'Ip povoleno';

$GLOBALS["lang"]['ip_responding_count'] = 'Ip Responding Count';

$GLOBALS["lang"]['Ip Responding Count'] = 'Ip Responding Count';

$GLOBALS["lang"]['ip_scanned_count'] = 'Ip skenovaný počet';

$GLOBALS["lang"]['Ip Scanned Count'] = 'Ip skenovaný počet';

$GLOBALS["lang"]['Iran'] = 'Írán';

$GLOBALS["lang"]['Iraq'] = 'Irák';

$GLOBALS["lang"]['Ireland'] = 'Irsko';

$GLOBALS["lang"]['Is FRU'] = 'Is FRU';

$GLOBALS["lang"]['is_fru'] = 'Is Fru';

$GLOBALS["lang"]['Is Fru'] = 'Is Fru';

$GLOBALS["lang"]['Is the NMIS server local (on this Open-AudIT server) or remote?'] = 'Je server NMIS lokální (na tomto Open- Audit serveru) nebo vzdálený?';

$GLOBALS["lang"]['Is this account active? If set to <code>n</code>, the user cannot logon.'] = 'Je ten účet aktivní? Pokud je nastaveno na < kód > n < / kód >, uživatel se nemůže přihlásit.';

$GLOBALS["lang"]['Is this task enabled (y/n).'] = 'Je tento úkol povolen (y / n).';

$GLOBALS["lang"]['Isle of Man'] = 'Ostrov Man';

$GLOBALS["lang"]['Israel'] = 'Izrael';

$GLOBALS["lang"]['Issue'] = 'Vydání';

$GLOBALS["lang"]['issuer'] = 'Emitent';

$GLOBALS["lang"]['Issuer'] = 'Emitent';

$GLOBALS["lang"]['Issues'] = 'Otázky';

$GLOBALS["lang"]['Italy'] = 'Itálie';

$GLOBALS["lang"]['JSON'] = 'JSON';

$GLOBALS["lang"]['JSON to Import'] = 'JSON importovat';

$GLOBALS["lang"]['Jamaica'] = 'Jamajka';

$GLOBALS["lang"]['January'] = 'Leden';

$GLOBALS["lang"]['Japan'] = 'Japonsko';

$GLOBALS["lang"]['Jersey'] = 'Jersey';

$GLOBALS["lang"]['Jordan'] = 'Jordánsko';

$GLOBALS["lang"]['July'] = 'Červenec';

$GLOBALS["lang"]['June'] = 'Červen';

$GLOBALS["lang"]['Kazakhstan'] = 'Kazachstán';

$GLOBALS["lang"]['Kenya'] = 'Keňa';

$GLOBALS["lang"]['kernel_version'] = 'Verze jádra';

$GLOBALS["lang"]['Kernel Version'] = 'Verze jádra';

$GLOBALS["lang"]['Key'] = 'Klíč';

$GLOBALS["lang"]['Key Password (optional)'] = 'Klíčové heslo (nepovinné)';

$GLOBALS["lang"]['keys'] = 'Klíče';

$GLOBALS["lang"]['Keys'] = 'Klíče';

$GLOBALS["lang"]['Kiribati'] = 'Kiribati';

$GLOBALS["lang"]['Korea'] = 'Korea';

$GLOBALS["lang"]['Kuwait'] = 'Kuvajt';

$GLOBALS["lang"]['Kyrgyz Republic'] = 'Kyrgyzská republika';

$GLOBALS["lang"]['lang'] = 'Lang';

$GLOBALS["lang"]['Lang'] = 'Lang';

$GLOBALS["lang"]['language'] = 'Jazyk';

$GLOBALS["lang"]['Language'] = 'Jazyk';

$GLOBALS["lang"]['Lao'] = 'Lao';

$GLOBALS["lang"]['last_changed'] = 'Poslední změna';

$GLOBALS["lang"]['Last Changed'] = 'Poslední změna';

$GLOBALS["lang"]['last_finished'] = 'Naposledy dokončeno';

$GLOBALS["lang"]['Last Finished'] = 'Naposledy dokončeno';

$GLOBALS["lang"]['last_logon'] = 'Poslední logon';

$GLOBALS["lang"]['Last Logon'] = 'Poslední logon';

$GLOBALS["lang"]['last_os_update'] = 'Poslední aktualizace Os';

$GLOBALS["lang"]['Last Os Update'] = 'Poslední aktualizace Os';

$GLOBALS["lang"]['last_result'] = 'Poslední výsledek';

$GLOBALS["lang"]['Last Result'] = 'Poslední výsledek';

$GLOBALS["lang"]['last_run'] = 'Poslední běh';

$GLOBALS["lang"]['Last Run'] = 'Poslední běh';

$GLOBALS["lang"]['last_seen'] = 'Naposledy viděn';

$GLOBALS["lang"]['Last Seen'] = 'Naposledy viděn';

$GLOBALS["lang"]['last_seen_by'] = 'Naposledy viděn By';

$GLOBALS["lang"]['Last Seen By'] = 'Naposledy viděn By';

$GLOBALS["lang"]['last_user'] = 'Poslední uživatel';

$GLOBALS["lang"]['Last User'] = 'Poslední uživatel';

$GLOBALS["lang"]['latitude'] = 'Zeměpisná šířka';

$GLOBALS["lang"]['Latitude'] = 'Zeměpisná šířka';

$GLOBALS["lang"]['Latvia'] = 'Lotyšsko';

$GLOBALS["lang"]['Layout'] = 'Rozvržení';

$GLOBALS["lang"]['ldap'] = 'Ldap';

$GLOBALS["lang"]['Ldap'] = 'Ldap';

$GLOBALS["lang"]['ldap_base_dn'] = 'Ldap Base Dn';

$GLOBALS["lang"]['Ldap Base Dn'] = 'Ldap Base Dn';

$GLOBALS["lang"]['ldap_dn_account'] = 'Ldap Dn účet';

$GLOBALS["lang"]['Ldap Dn Account'] = 'Ldap Dn účet';

$GLOBALS["lang"]['ldap_dn_password'] = 'Name';

$GLOBALS["lang"]['Ldap Dn Password'] = 'Name';

$GLOBALS["lang"]['lease_expiry_date'] = 'Datum vypršení leasingu';

$GLOBALS["lang"]['Lease Expiry Date'] = 'Datum vypršení leasingu';

$GLOBALS["lang"]['Lebanon'] = 'Libanon';

$GLOBALS["lang"]['legal_requirements'] = 'Právní požadavky';

$GLOBALS["lang"]['Legal Requirements'] = 'Právní požadavky';

$GLOBALS["lang"]['Lesotho'] = 'Lesotho';

$GLOBALS["lang"]['Less Than'] = 'Méně než';

$GLOBALS["lang"]['Less Than or Equals'] = 'Méně než nebo se rovná';

$GLOBALS["lang"]['level'] = 'Úroveň';

$GLOBALS["lang"]['Level'] = 'Úroveň';

$GLOBALS["lang"]['Liberia'] = 'Libérie';

$GLOBALS["lang"]['Libyan Arab Jamahiriya'] = 'Libyjská arabská jamajka';

$GLOBALS["lang"]['License'] = 'Licence';

$GLOBALS["lang"]['License Key'] = 'Licenční klíč';

$GLOBALS["lang"]['License Required'] = 'Vyžadovaná licence';

$GLOBALS["lang"]['licenses'] = 'Licence';

$GLOBALS["lang"]['Licenses'] = 'Licence';

$GLOBALS["lang"]['Liechtenstein'] = 'Lichtenštejnsko';

$GLOBALS["lang"]['Like'] = 'Jako';

$GLOBALS["lang"]['limit'] = 'Omezení';

$GLOBALS["lang"]['Limit'] = 'Omezení';

$GLOBALS["lang"]['Limit the query to the first X items.'] = 'Omezte dotaz na první X položky.';

$GLOBALS["lang"]['Limited to 100 rows.'] = 'Omezeno na 100 řad.';

$GLOBALS["lang"]['line_amount'] = 'Částka řádku';

$GLOBALS["lang"]['Line Amount'] = 'Částka řádku';

$GLOBALS["lang"]['Line Graph'] = 'Graf čáry';

$GLOBALS["lang"]['line_number_a'] = 'Číslo řádku A';

$GLOBALS["lang"]['Line Number A'] = 'Číslo řádku A';

$GLOBALS["lang"]['line_number_b'] = 'Číslo řádku B';

$GLOBALS["lang"]['Line Number B'] = 'Číslo řádku B';

$GLOBALS["lang"]['line_text'] = 'Text řádku';

$GLOBALS["lang"]['Line Text'] = 'Text řádku';

$GLOBALS["lang"]['link'] = 'Odkaz';

$GLOBALS["lang"]['Link'] = 'Odkaz';

$GLOBALS["lang"]['Link (Advanced)'] = 'Odkaz (Advanced)';

$GLOBALS["lang"]['linked_row'] = 'Související řádek';

$GLOBALS["lang"]['Linked Row'] = 'Související řádek';

$GLOBALS["lang"]['linked_table'] = 'Propojená tabulka';

$GLOBALS["lang"]['Linked Table'] = 'Propojená tabulka';

$GLOBALS["lang"]['links'] = 'Odkazy';

$GLOBALS["lang"]['Links'] = 'Odkazy';

$GLOBALS["lang"]['Links this discovery to the associated cloud (if required). Links to <code>clouds.id</code>.'] = 'Spojuje tento objev s souvisejícím cloudem (je-li vyžadováno). Odkazy na < kód > clouds.id < / kód >.';

$GLOBALS["lang"]['Links to <code>discovery_scan_options.id</code>.'] = 'Odkazy na < kód > objev _ scan _ options.id < / kód >.';

$GLOBALS["lang"]['Linux'] = 'Linux';

$GLOBALS["lang"]['List'] = 'Seznam';

$GLOBALS["lang"]['list_table_format'] = 'Formát tabulky';

$GLOBALS["lang"]['List Table Format'] = 'Formát tabulky';

$GLOBALS["lang"]['Lithuania'] = 'Litva';

$GLOBALS["lang"]['Load Balancing'] = 'Vyvažování zatížení';

$GLOBALS["lang"]['Local'] = 'Místní';

$GLOBALS["lang"]['Local Area Network'] = 'Místní síť oblastí';

$GLOBALS["lang"]['local_port'] = 'Místní přístav';

$GLOBALS["lang"]['Local Port'] = 'Místní přístav';

$GLOBALS["lang"]['Localhost'] = 'Localhost';

$GLOBALS["lang"]['Location'] = 'Umístění';

$GLOBALS["lang"]['Location A'] = 'Umístění A';

$GLOBALS["lang"]['Location B'] = 'Umístění B';

$GLOBALS["lang"]['location_id'] = 'Identifikace místa';

$GLOBALS["lang"]['Location ID'] = 'Identifikace místa';

$GLOBALS["lang"]['location_id_a'] = 'Identifikace místa A';

$GLOBALS["lang"]['Location ID A'] = 'Identifikace místa A';

$GLOBALS["lang"]['location_id_b'] = 'Identifikační kód místa B';

$GLOBALS["lang"]['Location ID B'] = 'Identifikační kód místa B';

$GLOBALS["lang"]['location_latitude'] = 'Zeměpisná šířka';

$GLOBALS["lang"]['Location Latitude'] = 'Zeměpisná šířka';

$GLOBALS["lang"]['location_level'] = 'Úroveň umístění';

$GLOBALS["lang"]['Location Level'] = 'Úroveň umístění';

$GLOBALS["lang"]['location_longitude'] = 'Zeměpisná délka umístění';

$GLOBALS["lang"]['Location Longitude'] = 'Zeměpisná délka umístění';

$GLOBALS["lang"]['location_rack'] = 'Location Rack';

$GLOBALS["lang"]['Location Rack'] = 'Location Rack';

$GLOBALS["lang"]['location_rack_position'] = 'Umístění Rack Poloha';

$GLOBALS["lang"]['Location Rack Position'] = 'Umístění Rack Poloha';

$GLOBALS["lang"]['location_rack_size'] = 'Velikost umístění racku';

$GLOBALS["lang"]['Location Rack Size'] = 'Velikost umístění racku';

$GLOBALS["lang"]['location_room'] = 'Umístění místnosti';

$GLOBALS["lang"]['Location Room'] = 'Umístění místnosti';

$GLOBALS["lang"]['location_suite'] = 'Poloha Suite';

$GLOBALS["lang"]['Location Suite'] = 'Poloha Suite';

$GLOBALS["lang"]['locations'] = 'Místa';

$GLOBALS["lang"]['Locations'] = 'Místa';

$GLOBALS["lang"]['Locations in this'] = 'Místa v tomto';

$GLOBALS["lang"]['log'] = 'Záznam';

$GLOBALS["lang"]['Log'] = 'Záznam';

$GLOBALS["lang"]['log_format'] = 'Formát záznamu';

$GLOBALS["lang"]['Log Format'] = 'Formát záznamu';

$GLOBALS["lang"]['log_path'] = 'Cesta záznamu';

$GLOBALS["lang"]['Log Path'] = 'Cesta záznamu';

$GLOBALS["lang"]['log_rotation'] = 'Rotace záznamů';

$GLOBALS["lang"]['Log Rotation'] = 'Rotace záznamů';

$GLOBALS["lang"]['log_status'] = 'Stav záznamu';

$GLOBALS["lang"]['Log Status'] = 'Stav záznamu';

$GLOBALS["lang"]['Logical Cores '] = 'Logická jádra';

$GLOBALS["lang"]['logical_count'] = 'Logický počet';

$GLOBALS["lang"]['Logical Count'] = 'Logický počet';

$GLOBALS["lang"]['Logs'] = 'Záznamy';

$GLOBALS["lang"]['longitude'] = 'Délka';

$GLOBALS["lang"]['Longitude'] = 'Délka';

$GLOBALS["lang"]['Low'] = 'Nízká';

$GLOBALS["lang"]['Lower Case'] = 'Nižší pouzdro';

$GLOBALS["lang"]['Luxembourg'] = 'Lucembursko';

$GLOBALS["lang"]['MAC Address'] = 'MAC adresa';

$GLOBALS["lang"]['MAC Manufacturer'] = 'MAC Výrobce';

$GLOBALS["lang"]['mac'] = 'Mac';

$GLOBALS["lang"]['Mac'] = 'Mac';

$GLOBALS["lang"]['Mac Address'] = 'Mac adresa';

$GLOBALS["lang"]['MacOS'] = 'MakOS';

$GLOBALS["lang"]['Macao'] = 'Macao';

$GLOBALS["lang"]['Macedonia'] = 'Makedonie';

$GLOBALS["lang"]['Madagascar'] = 'Madagaskar';

$GLOBALS["lang"]['maintenance_expires'] = 'Vyšetření údržby';

$GLOBALS["lang"]['Maintenance Expires'] = 'Vyšetření údržby';

$GLOBALS["lang"]['Malawi'] = 'Malawi';

$GLOBALS["lang"]['Malaysia'] = 'Malajsie';

$GLOBALS["lang"]['Maldives'] = 'Maledivy';

$GLOBALS["lang"]['Mali'] = 'Mali';

$GLOBALS["lang"]['Malta'] = 'Malta';

$GLOBALS["lang"]['Manage in NMIS'] = 'Správa v NMIS';

$GLOBALS["lang"]['Manual Input'] = 'Ruční vstup';

$GLOBALS["lang"]['Manually set by user, defaults to Production.'] = 'Ručně nastaveno uživatelem, selhává při výrobě.';

$GLOBALS["lang"]['Manually set by user.'] = 'Ručně nastaveno uživatelem.';

$GLOBALS["lang"]['manufacture_date'] = 'Datum výroby';

$GLOBALS["lang"]['Manufacture Date'] = 'Datum výroby';

$GLOBALS["lang"]['manufacturer'] = 'Výrobce';

$GLOBALS["lang"]['Manufacturer'] = 'Výrobce';

$GLOBALS["lang"]['manufacturer_code'] = 'Kód výrobce';

$GLOBALS["lang"]['Manufacturer Code'] = 'Kód výrobce';

$GLOBALS["lang"]['Map'] = 'Mapa';

$GLOBALS["lang"]['maps'] = 'Mapy';

$GLOBALS["lang"]['Maps'] = 'Mapy';

$GLOBALS["lang"]['March'] = 'Březen';

$GLOBALS["lang"]['Marshall Islands'] = 'Marshallovy ostrovy';

$GLOBALS["lang"]['Martinique'] = 'Martinik';

$GLOBALS["lang"]['mask'] = 'Maska';

$GLOBALS["lang"]['Mask'] = 'Maska';

$GLOBALS["lang"]['Match'] = 'Shoda';

$GLOBALS["lang"]['match_options'] = 'Možnosti shody';

$GLOBALS["lang"]['Match Options'] = 'Možnosti shody';

$GLOBALS["lang"]['match_string'] = 'Řetězec shody';

$GLOBALS["lang"]['Match String'] = 'Řetězec shody';

$GLOBALS["lang"]['Matching Attribute'] = 'Odpovídající atribut';

$GLOBALS["lang"]['maturity_level'] = 'Úroveň splatnosti';

$GLOBALS["lang"]['Maturity Level'] = 'Úroveň splatnosti';

$GLOBALS["lang"]['maturity_score'] = 'Skóre splatnosti';

$GLOBALS["lang"]['Maturity Score'] = 'Skóre splatnosti';

$GLOBALS["lang"]['Mauritania'] = 'Mauritánie';

$GLOBALS["lang"]['Mauritius'] = 'Mauricius';

$GLOBALS["lang"]['max_file_size'] = 'Maximální velikost souboru';

$GLOBALS["lang"]['Max File Size'] = 'Maximální velikost souboru';

$GLOBALS["lang"]['Max Length'] = 'Maximální délka';

$GLOBALS["lang"]['max_size'] = 'Maximální velikost';

$GLOBALS["lang"]['Max Size'] = 'Maximální velikost';

$GLOBALS["lang"]['May'] = 'May';

$GLOBALS["lang"]['Mayotte'] = 'Mayotte';

$GLOBALS["lang"]['Medium'] = 'Střední';

$GLOBALS["lang"]['members'] = 'Členové';

$GLOBALS["lang"]['Members'] = 'Členové';

$GLOBALS["lang"]['memory'] = 'Paměť';

$GLOBALS["lang"]['Memory'] = 'Paměť';

$GLOBALS["lang"]['memory_count'] = 'Počet pamětí';

$GLOBALS["lang"]['Memory Count'] = 'Počet pamětí';

$GLOBALS["lang"]['memory_slot_count'] = 'Počet výloh paměti';

$GLOBALS["lang"]['Memory Slot Count'] = 'Počet výloh paměti';

$GLOBALS["lang"]['menu_category'] = 'Kategorie nabídky';

$GLOBALS["lang"]['Menu Category'] = 'Kategorie nabídky';

$GLOBALS["lang"]['menu_display'] = 'Zobrazení nabídky';

$GLOBALS["lang"]['Menu Display'] = 'Zobrazení nabídky';

$GLOBALS["lang"]['message'] = 'Zpráva';

$GLOBALS["lang"]['Message'] = 'Zpráva';

$GLOBALS["lang"]['meta_last_changed'] = 'MetaLast changed';

$GLOBALS["lang"]['Meta Last Changed'] = 'MetaLast changed';

$GLOBALS["lang"]['metric'] = 'Metrické';

$GLOBALS["lang"]['Metric'] = 'Metrické';

$GLOBALS["lang"]['Metropolitan Area Network'] = 'Síť metropolitní oblasti';

$GLOBALS["lang"]['Mexico'] = 'Mexiko';

$GLOBALS["lang"]['Micronesia'] = 'Mikronésie';

$GLOBALS["lang"]['Microsoft Azure Fields'] = 'Microsoft Azure Fields';

$GLOBALS["lang"]['microtime'] = 'Mikročas';

$GLOBALS["lang"]['Microtime'] = 'Mikročas';

$GLOBALS["lang"]['migrations'] = 'Migrace';

$GLOBALS["lang"]['Migrations'] = 'Migrace';

$GLOBALS["lang"]['minute'] = 'Minuta';

$GLOBALS["lang"]['Minute'] = 'Minuta';

$GLOBALS["lang"]['Minutes Since last Audit are Greater than'] = 'Zápisy od posledního auditu jsou větší než';

$GLOBALS["lang"]['model'] = 'Model';

$GLOBALS["lang"]['Model'] = 'Model';

$GLOBALS["lang"]['model_family'] = 'Modelová rodina';

$GLOBALS["lang"]['Model Family'] = 'Modelová rodina';

$GLOBALS["lang"]['module'] = 'Modul';

$GLOBALS["lang"]['Module'] = 'Modul';

$GLOBALS["lang"]['module_index'] = 'Index modulu';

$GLOBALS["lang"]['Module Index'] = 'Index modulu';

$GLOBALS["lang"]['Moldova'] = 'Moldavsko';

$GLOBALS["lang"]['Monaco'] = 'Monako';

$GLOBALS["lang"]['Monday'] = 'Pondělí';

$GLOBALS["lang"]['Mongolia'] = 'Mongolsko';

$GLOBALS["lang"]['monitor'] = 'Monitor';

$GLOBALS["lang"]['Monitor'] = 'Monitor';

$GLOBALS["lang"]['Montenegro'] = 'Černá Hora';

$GLOBALS["lang"]['month'] = 'Měsíc';

$GLOBALS["lang"]['Month'] = 'Měsíc';

$GLOBALS["lang"]['Montserrat'] = 'Montserrat';

$GLOBALS["lang"]['Morocco'] = 'Maroko';

$GLOBALS["lang"]['motherboard'] = 'Základní deska';

$GLOBALS["lang"]['Motherboard'] = 'Základní deska';

$GLOBALS["lang"]['mount_point'] = 'Horní bod';

$GLOBALS["lang"]['Mount Point'] = 'Horní bod';

$GLOBALS["lang"]['mount_type'] = 'Typ zařízení';

$GLOBALS["lang"]['Mount Type'] = 'Typ zařízení';

$GLOBALS["lang"]['Mozambique'] = 'Mosambik';

$GLOBALS["lang"]['Must Respond to Ping'] = 'Musí reagovat na Ping';

$GLOBALS["lang"]['Myanmar'] = 'Myanmar';

$GLOBALS["lang"]['N+1'] = 'N + 1';

$GLOBALS["lang"]['N+M'] = 'N + M';

$GLOBALS["lang"]['N-to-1'] = 'N-to-1';

$GLOBALS["lang"]['N-to-N'] = 'N-to-N';

$GLOBALS["lang"]['NMIS Business Service'] = 'NMIS Business Service';

$GLOBALS["lang"]['NMIS Customer'] = 'Zákazník NMIS';

$GLOBALS["lang"]['NMIS Device Options'] = 'Možnosti zařízení NMIS';

$GLOBALS["lang"]['NMIS Device Selection'] = 'Výběr zařízení NMIS';

$GLOBALS["lang"]['NMIS Field Name'] = 'Název pole NMIS';

$GLOBALS["lang"]['NMIS Field Type'] = 'Typ pole NMIS';

$GLOBALS["lang"]['NMIS Group'] = 'Skupina NMIS';

$GLOBALS["lang"]['NMIS Poller'] = 'NIS Poller';

$GLOBALS["lang"]['NMIS Role'] = 'NIS Úloha';

$GLOBALS["lang"]['NOTE - You can prevent plain text credentials being displayed below by setting the configuration item for <code>decrypt_credentials</code> to <code>n</code>.'] = 'POZNÁMKA - Níže můžete zabránit zobrazení jednoduchých textových údajů nastavením konfigurační položky pro < code > decrypt _ entifications < / code > na < code > n < / code >.';

$GLOBALS["lang"]['name'] = 'Název';

$GLOBALS["lang"]['Name'] = 'Název';

$GLOBALS["lang"]['namespace'] = 'Name';

$GLOBALS["lang"]['Namespace'] = 'Name';

$GLOBALS["lang"]['Namibia'] = 'Namibie';

$GLOBALS["lang"]['Nauru'] = 'Nauru';

$GLOBALS["lang"]['Nepal'] = 'Nepál';

$GLOBALS["lang"]['net_index'] = 'Čistý index';

$GLOBALS["lang"]['Net Index'] = 'Čistý index';

$GLOBALS["lang"]['Netherlands Antilles'] = 'Nizozemské Antily';

$GLOBALS["lang"]['Netherlands the'] = 'Nizozemsko';

$GLOBALS["lang"]['netmask'] = 'Netmask';

$GLOBALS["lang"]['Netmask'] = 'Netmask';

$GLOBALS["lang"]['netstat'] = 'Netstat';

$GLOBALS["lang"]['Netstat'] = 'Netstat';

$GLOBALS["lang"]['Netstat Policies'] = 'Politika Netstat';

$GLOBALS["lang"]['Network'] = 'Síť';

$GLOBALS["lang"]['network_address'] = 'Síťová adresa';

$GLOBALS["lang"]['Network Address'] = 'Síťová adresa';

$GLOBALS["lang"]['network_domain'] = 'Síťová doména';

$GLOBALS["lang"]['Network Domain'] = 'Síťová doména';

$GLOBALS["lang"]['Network Types'] = 'Typy sítí';

$GLOBALS["lang"]['networks'] = 'Sítě';

$GLOBALS["lang"]['Networks'] = 'Sítě';

$GLOBALS["lang"]['Networks Generated By'] = 'Sítě generované';

$GLOBALS["lang"]['Networks using a CIDR Mask of'] = 'Sítě používající masku CIDR';

$GLOBALS["lang"]['New Building Name'] = 'Název nové budovy';

$GLOBALS["lang"]['New Caledonia'] = 'Nová Kaledonie';

$GLOBALS["lang"]['New Floor Name'] = 'Název nového patra';

$GLOBALS["lang"]['New Room Name'] = 'Název nového pokoje';

$GLOBALS["lang"]['New Row Name'] = 'Název nového řádku';

$GLOBALS["lang"]['New Zealand'] = 'Nový Zéland';

$GLOBALS["lang"]['next_hop'] = 'Další hop';

$GLOBALS["lang"]['Next Hop'] = 'Další hop';

$GLOBALS["lang"]['next_run'] = 'Další běh';

$GLOBALS["lang"]['Next Run'] = 'Další běh';

$GLOBALS["lang"]['Nicaragua'] = 'Nikaragua';

$GLOBALS["lang"]['Niger'] = 'Niger';

$GLOBALS["lang"]['Nigeria'] = 'Nigérie';

$GLOBALS["lang"]['Niue'] = 'Niue';

$GLOBALS["lang"]['nmap'] = 'Nmap';

$GLOBALS["lang"]['Nmap'] = 'Nmap';

$GLOBALS["lang"]['nmap_tcp_ports'] = 'Nmap Tcp Ports';

$GLOBALS["lang"]['Nmap Tcp Ports'] = 'Nmap Tcp Ports';

$GLOBALS["lang"]['nmap_udp_ports'] = 'Nmap Udp Ports';

$GLOBALS["lang"]['Nmap Udp Ports'] = 'Nmap Udp Ports';

$GLOBALS["lang"]['nmis_business_service'] = 'Nmis Business Service';

$GLOBALS["lang"]['Nmis Business Service'] = 'Nmis Business Service';

$GLOBALS["lang"]['nmis_customer'] = 'Zákazník Nmis';

$GLOBALS["lang"]['Nmis Customer'] = 'Zákazník Nmis';

$GLOBALS["lang"]['nmis_group'] = 'Skupina Nmis';

$GLOBALS["lang"]['Nmis Group'] = 'Skupina Nmis';

$GLOBALS["lang"]['nmis_manage'] = 'Správa Nmis';

$GLOBALS["lang"]['Nmis Manage'] = 'Správa Nmis';

$GLOBALS["lang"]['nmis_name'] = 'Název Nmis';

$GLOBALS["lang"]['Nmis Name'] = 'Název Nmis';

$GLOBALS["lang"]['nmis_notes'] = 'Poznámky';

$GLOBALS["lang"]['Nmis Notes'] = 'Poznámky';

$GLOBALS["lang"]['nmis_poller'] = 'Nmis Poller';

$GLOBALS["lang"]['Nmis Poller'] = 'Nmis Poller';

$GLOBALS["lang"]['nmis_poller_uuid'] = 'Nmis Poller Uuid';

$GLOBALS["lang"]['Nmis Poller Uuid'] = 'Nmis Poller Uuid';

$GLOBALS["lang"]['nmis_role'] = 'Nmis Role';

$GLOBALS["lang"]['Nmis Role'] = 'Nmis Role';

$GLOBALS["lang"]['No'] = 'Ne';

$GLOBALS["lang"]['No Devices Returned'] = 'Žádná vrácená zařízení';

$GLOBALS["lang"]['No Google Maps API Key present, you will not be able to display the map.'] = 'Žádný Google Maps API Přítomnost klíče nebude schopna zobrazit mapu.';

$GLOBALS["lang"]['No License for Professional or Enterprise'] = 'Bez licence pro profesionální nebo podnikové';

$GLOBALS["lang"]['No Results'] = 'Žádné výsledky';

$GLOBALS["lang"]['No data in License Key'] = 'Žádné údaje v licenčním klíči';

$GLOBALS["lang"]['No database upgrade required at this time.'] = 'V tuto chvíli není potřeba žádná aktualizace databáze.';

$GLOBALS["lang"]['Node'] = 'Uzel';

$GLOBALS["lang"]['None'] = 'Žádné';

$GLOBALS["lang"]['Norfolk Island'] = 'Norfolk Island';

$GLOBALS["lang"]['Normal'] = 'Normální';

$GLOBALS["lang"]['Northern Mariana Islands'] = 'Severní Mariánské ostrovy';

$GLOBALS["lang"]['Norway'] = 'Norsko';

$GLOBALS["lang"]['Not Applicable'] = 'Neuplatňuje se';

$GLOBALS["lang"]['Not Checked'] = 'Neověřeno';

$GLOBALS["lang"]['Not Equals'] = 'Nerovná se';

$GLOBALS["lang"]['Not In'] = 'Ne v';

$GLOBALS["lang"]['Not Like'] = 'Ne jako';

$GLOBALS["lang"]['Not Set'] = 'Nenastaveno';

$GLOBALS["lang"]['Not normally used. If set, this requires the device to have an open port (as per Scan Options) to be considered responding. A MAC address, arp response or ping response is not considered sufficient to be considered responding. Useful if a router or firewall between the Open-AudIT server and target IP is responding to port scans on the IPs behalf.'] = 'Nepoužívá se normálně. Pokud je nastaveno, vyžaduje to, aby zařízení mělo otevřený port (podle možností skenování), který má být považován za odpovídající. MAC adresa, arp odezva nebo ping odezva není považována za dostatečnou pro to, aby byla považována za odpověď. Užitečné, pokud směrovač nebo firewall mezi Open- Audit serverem a cílovým IP reaguje na skenování portu jménem IP.';

$GLOBALS["lang"]['Note'] = 'Poznámka';

$GLOBALS["lang"]['Note - Selecting a parent will automatically provide access to its children (although it wont be shown here).'] = 'Poznámka - Výběr rodiče automaticky umožní přístup ke svým dětem (i když zde není zobrazen).';

$GLOBALS["lang"]['Notes'] = 'Poznámky';

$GLOBALS["lang"]['notes'] = 'Poznámky';

$GLOBALS["lang"]['Notice'] = 'Oznámení';

$GLOBALS["lang"]['November'] = 'Listopad';

$GLOBALS["lang"]['ORDER BY'] = 'USNESENÍ';

$GLOBALS["lang"]['OS'] = 'OS';

$GLOBALS["lang"]['OS Families'] = 'Rodiny OS';

$GLOBALS["lang"]['OS Family'] = 'OS Family';

$GLOBALS["lang"]['OS Group'] = 'Skupina OS';

$GLOBALS["lang"]['oae_manage'] = 'Oae Správa';

$GLOBALS["lang"]['Oae Manage'] = 'Oae Správa';

$GLOBALS["lang"]['object_ident'] = 'Ident objektu';

$GLOBALS["lang"]['Object Ident'] = 'Ident objektu';

$GLOBALS["lang"]['October'] = 'Říjen';

$GLOBALS["lang"]['Oman'] = 'Omán';

$GLOBALS["lang"]['omk_uuid'] = 'Omk Uuid';

$GLOBALS["lang"]['Omk Uuid'] = 'Omk Uuid';

$GLOBALS["lang"]['On'] = 'Zapnout';

$GLOBALS["lang"]['One of <code>3x2</code>, <code>4x2</code>, <code>4x3</code> or <code>4x4</code>.'] = 'Jeden z < kódu > 3x2 < / kód >, < kód > 4x2 < / kód >, < kód > 4x3 < / kód > nebo < kód > 4x4 < / kód >.';

$GLOBALS["lang"]['One of Campus Area Network, Cloud Network, Enterprise Private Network, Home Area Network, Local Area Network, Metropolitan Area Network, Passive Optical Local Area Network, Personal Area Network, Storage-Area Network, System-Area Network, Virtual Private Network, Wide Area Network, Wireless Local Area Network.'] = 'Jeden z Campus Area Network, Cloud Network, Enterprise Private Network, Home Area Network, Local Area Network, Metropolitan Area Network, Pasivní Optical Local Area Network, Personal Area Network, Storage-Area Network, System- Area Network, Virtual Private Network, Wide Area Network, Wireless Local Area Network.';

$GLOBALS["lang"]['One of Development, Disaster Recovery, Evaluation, Pre-Production, Production, Testing, Training, User Acceptance Testing'] = 'Jeden z Development, Disaster Recovery, Evaluation, Pre- Production, Production, Testing, Training, User Acceptation Testing';

$GLOBALS["lang"]['One of allocated, delegated, planning, reserved, unallocated, unknown, unmanaged. Defaults to allocated.'] = 'Jeden z přidělených, delegovaných, plánovacích, vyhrazených, nepřidělených, neznámých, neřízených. Chyby přidělené.';

$GLOBALS["lang"]['One of either <code>active directory</code> or <code>openldap</code>.'] = 'Jeden z < kódu > aktivní adresář < / kód > nebo < kód > openldap < / kód >.';

$GLOBALS["lang"]['One of: antivirus, backup, firewall, approved, banned, ignored or other.'] = 'Jeden z: antivirus, záložní, firewall, schválen, zakázán, ignorován nebo jiný.';

$GLOBALS["lang"]['Online Documentation'] = 'Online dokumentace';

$GLOBALS["lang"]['Open-AudIT'] = 'Open- Audit';

$GLOBALS["lang"]['Open-AudIT Community'] = 'Open- Audit Community';

$GLOBALS["lang"]['Open-AudIT Device Selection'] = 'Výběr zařízení Open- Audit';

$GLOBALS["lang"]['Open-AudIT Enterprise'] = 'Open- Audit Enterprise';

$GLOBALS["lang"]['Open-AudIT Field Name'] = 'Název pole Open- Audit';

$GLOBALS["lang"]['Open-AudIT Licenses'] = 'Open- Audit Licenses';

$GLOBALS["lang"]['Open-AudIT Options'] = 'Open- Audit Možnosti';

$GLOBALS["lang"]['Open-AudIT Professional'] = 'Open- Audit Professional';

$GLOBALS["lang"]['OpenScap is Installed'] = 'OpenScap je nainstalován';

$GLOBALS["lang"]['openldap_user_dn'] = 'Uživatel Openldap Dn';

$GLOBALS["lang"]['Openldap User Dn'] = 'Uživatel Openldap Dn';

$GLOBALS["lang"]['openldap_user_membership_attribute'] = 'Atribut uživatele Openldap';

$GLOBALS["lang"]['Openldap User Membership Attribute'] = 'Atribut uživatele Openldap';

$GLOBALS["lang"]['open|filtered'] = 'Otevřené 124; filtrované';

$GLOBALS["lang"]['Open|filtered'] = 'Otevřené 124; filtrované';

$GLOBALS["lang"]['Operating System'] = 'Provozní systém';

$GLOBALS["lang"]['Operating System Family Contains'] = 'Obsahuje rodinu operačního systému';

$GLOBALS["lang"]['Operating Systems'] = 'Provozní systémy';

$GLOBALS["lang"]['optical'] = 'Optické';

$GLOBALS["lang"]['Optical'] = 'Optické';

$GLOBALS["lang"]['Optional version as audited by Open-AudIT. Use the percent sign % as a wildcard.'] = 'Volitelná verze, kterou ověřil Open- Audit. Použijte procento znaménka% jako divokou kartu.';

$GLOBALS["lang"]['options'] = 'Možnosti';

$GLOBALS["lang"]['Options'] = 'Možnosti';

$GLOBALS["lang"]['Or select from the below fields.'] = 'Nebo vyberte z níže uvedených polí.';

$GLOBALS["lang"]['org_descendants'] = 'Org Descendants';

$GLOBALS["lang"]['Org Descendants'] = 'Org Descendants';

$GLOBALS["lang"]['org_id'] = 'ID orgánu';

$GLOBALS["lang"]['Org ID'] = 'ID orgánu';

$GLOBALS["lang"]['Organisation'] = 'Organizace';

$GLOBALS["lang"]['organisation'] = 'Organizace';

$GLOBALS["lang"]['Organisation Descendants'] = 'Organizace';

$GLOBALS["lang"]['orgs'] = 'Orgy';

$GLOBALS["lang"]['Orgs'] = 'Orgy';

$GLOBALS["lang"]['orientation'] = 'Orientace';

$GLOBALS["lang"]['Orientation'] = 'Orientace';

$GLOBALS["lang"]['os'] = 'Os';

$GLOBALS["lang"]['Os'] = 'Os';

$GLOBALS["lang"]['os_arch'] = 'Os Arch';

$GLOBALS["lang"]['Os Arch'] = 'Os Arch';

$GLOBALS["lang"]['os_bit'] = 'Os Bit';

$GLOBALS["lang"]['Os Bit'] = 'Os Bit';

$GLOBALS["lang"]['os_cpe'] = 'Os Cpe';

$GLOBALS["lang"]['Os Cpe'] = 'Os Cpe';

$GLOBALS["lang"]['os_family'] = 'Rodina Os';

$GLOBALS["lang"]['Os Family'] = 'Rodina Os';

$GLOBALS["lang"]['os_group'] = 'Skupina Os';

$GLOBALS["lang"]['Os Group'] = 'Skupina Os';

$GLOBALS["lang"]['os_installation_date'] = 'Datum instalace Os';

$GLOBALS["lang"]['Os Installation Date'] = 'Datum instalace Os';

$GLOBALS["lang"]['os_licence_expiry'] = 'Konec platnosti licence Os';

$GLOBALS["lang"]['Os Licence Expiry'] = 'Konec platnosti licence Os';

$GLOBALS["lang"]['os_license'] = 'Licence Os';

$GLOBALS["lang"]['Os License'] = 'Licence Os';

$GLOBALS["lang"]['os_license_code'] = 'Licenční kód Os';

$GLOBALS["lang"]['Os License Code'] = 'Licenční kód Os';

$GLOBALS["lang"]['os_license_mode'] = 'Licenční režim Os';

$GLOBALS["lang"]['Os License Mode'] = 'Licenční režim Os';

$GLOBALS["lang"]['os_license_type'] = 'Typ licence Os';

$GLOBALS["lang"]['Os License Type'] = 'Typ licence Os';

$GLOBALS["lang"]['os_name'] = 'Jméno';

$GLOBALS["lang"]['Os Name'] = 'Jméno';

$GLOBALS["lang"]['os_version'] = 'Verze Os';

$GLOBALS["lang"]['Os Version'] = 'Verze Os';

$GLOBALS["lang"]['Other'] = 'Ostatní';

$GLOBALS["lang"]['Others'] = 'Ostatní';

$GLOBALS["lang"]['Our timeout for a SSH response'] = 'Náš timeout pro SSH odpověď';

$GLOBALS["lang"]['Our timeout for a WMI response'] = 'Náš timeout pro odpověď WMI';

$GLOBALS["lang"]['Our timeout for an SNMP response'] = 'Náš timeout pro SNMP odpověď';

$GLOBALS["lang"]['Our timeout for an audit script response'] = 'Náš timeout pro auditní skript odpověď';

$GLOBALS["lang"]['output'] = 'Výstup';

$GLOBALS["lang"]['Output'] = 'Výstup';

$GLOBALS["lang"]['outputs'] = 'Výstupy';

$GLOBALS["lang"]['Outputs'] = 'Výstupy';

$GLOBALS["lang"]['overwrite'] = 'Přepsat';

$GLOBALS["lang"]['Overwrite'] = 'Přepsat';

$GLOBALS["lang"]['owner'] = 'Majitel';

$GLOBALS["lang"]['Owner'] = 'Majitel';

$GLOBALS["lang"]['PHP'] = 'PHP';

$GLOBALS["lang"]['POD'] = 'POD';

$GLOBALS["lang"]['package'] = 'Balení';

$GLOBALS["lang"]['Package'] = 'Balení';

$GLOBALS["lang"]['packages'] = 'Balení';

$GLOBALS["lang"]['Packages'] = 'Balení';

$GLOBALS["lang"]['pagefile'] = 'Pagefile';

$GLOBALS["lang"]['Pagefile'] = 'Pagefile';

$GLOBALS["lang"]['Pakistan'] = 'Pákistán';

$GLOBALS["lang"]['Palau'] = 'Palau';

$GLOBALS["lang"]['Palestinian Territory'] = 'Palestinské území';

$GLOBALS["lang"]['Panama'] = 'Panama';

$GLOBALS["lang"]['Papua New Guinea'] = 'Papua-Nová Guinea';

$GLOBALS["lang"]['Paraguay'] = 'Paraguay';

$GLOBALS["lang"]['Paranoid'] = 'Paranoid';

$GLOBALS["lang"]['Parent'] = 'Rodiče';

$GLOBALS["lang"]['parent_id'] = 'Identifikace rodiče';

$GLOBALS["lang"]['Parent ID'] = 'Identifikace rodiče';

$GLOBALS["lang"]['parent_name'] = 'Jméno rodiče';

$GLOBALS["lang"]['Parent Name'] = 'Jméno rodiče';

$GLOBALS["lang"]['part_number'] = 'Číslo části';

$GLOBALS["lang"]['Part Number'] = 'Číslo části';

$GLOBALS["lang"]['part_of_domain'] = 'Část domény';

$GLOBALS["lang"]['Part Of Domain'] = 'Část domény';

$GLOBALS["lang"]['Partition'] = 'Rozdělení';

$GLOBALS["lang"]['partition_count'] = 'Počet oddílů';

$GLOBALS["lang"]['Partition Count'] = 'Počet oddílů';

$GLOBALS["lang"]['partition_disk_index'] = 'Index disků pro rozdělení';

$GLOBALS["lang"]['Partition Disk Index'] = 'Index disků pro rozdělení';

$GLOBALS["lang"]['Pass'] = 'Projít';

$GLOBALS["lang"]['Passed'] = 'Prošlo';

$GLOBALS["lang"]['Passive Optical Local Area Network'] = 'Pasivní optická lokální síť';

$GLOBALS["lang"]['password'] = 'Heslo';

$GLOBALS["lang"]['Password'] = 'Heslo';

$GLOBALS["lang"]['password_changeable'] = 'Heslo Měnitelné';

$GLOBALS["lang"]['Password Changeable'] = 'Heslo Měnitelné';

$GLOBALS["lang"]['password_disabled'] = 'Heslo zakázáno';

$GLOBALS["lang"]['Password Disabled'] = 'Heslo zakázáno';

$GLOBALS["lang"]['password_expires'] = 'Heslo platí';

$GLOBALS["lang"]['Password Expires'] = 'Heslo platí';

$GLOBALS["lang"]['password_last_changed'] = 'Heslo Poslední změna';

$GLOBALS["lang"]['Password Last Changed'] = 'Heslo Poslední změna';

$GLOBALS["lang"]['password_required'] = 'Požadované heslo';

$GLOBALS["lang"]['Password Required'] = 'Požadované heslo';

$GLOBALS["lang"]['patch_panel'] = 'Panel záhybů';

$GLOBALS["lang"]['Patch Panel'] = 'Panel záhybů';

$GLOBALS["lang"]['patch_panel_port'] = 'Port Patch Panel';

$GLOBALS["lang"]['Patch Panel Port'] = 'Port Patch Panel';

$GLOBALS["lang"]['path'] = 'Cesta';

$GLOBALS["lang"]['Path'] = 'Cesta';

$GLOBALS["lang"]['Performance'] = 'Výkonnost';

$GLOBALS["lang"]['permission'] = 'Povolení';

$GLOBALS["lang"]['Permission'] = 'Povolení';

$GLOBALS["lang"]['permissions'] = 'Povolení';

$GLOBALS["lang"]['Permissions'] = 'Povolení';

$GLOBALS["lang"]['Personal Area Network'] = 'Síť osobní oblasti';

$GLOBALS["lang"]['Peru'] = 'Peru';

$GLOBALS["lang"]['Philippines'] = 'Filipíny';

$GLOBALS["lang"]['phone'] = 'Telefon';

$GLOBALS["lang"]['Phone'] = 'Telefon';

$GLOBALS["lang"]['Physical CPUs'] = 'Fyzické CPU';

$GLOBALS["lang"]['physical_count'] = 'Fyzický počet';

$GLOBALS["lang"]['Physical Count'] = 'Fyzický počet';

$GLOBALS["lang"]['physical_depth'] = 'Fyzická hloubka';

$GLOBALS["lang"]['Physical Depth'] = 'Fyzická hloubka';

$GLOBALS["lang"]['physical_height'] = 'Fyzická výška';

$GLOBALS["lang"]['Physical Height'] = 'Fyzická výška';

$GLOBALS["lang"]['physical_width'] = 'Fyzická šířka';

$GLOBALS["lang"]['Physical Width'] = 'Fyzická šířka';

$GLOBALS["lang"]['picture'] = 'Obrázek';

$GLOBALS["lang"]['Picture'] = 'Obrázek';

$GLOBALS["lang"]['pid'] = 'Pid';

$GLOBALS["lang"]['Pid'] = 'Pid';

$GLOBALS["lang"]['Pie Chart'] = 'Pie Graf';

$GLOBALS["lang"]['ping'] = 'Ping';

$GLOBALS["lang"]['Ping'] = 'Ping';

$GLOBALS["lang"]['Pitcairn Islands'] = 'Pitcairnovy ostrovy';

$GLOBALS["lang"]['placement'] = 'Umístění';

$GLOBALS["lang"]['Placement'] = 'Umístění';

$GLOBALS["lang"]['Please have an Open-AudIT administrator logon and upgrade the database.'] = 'Prosím, mějte Open- Audit Administrátor Logon a upgrade databáze.';

$GLOBALS["lang"]['Please note that the select box will override the text input box.'] = 'Vezměte prosím na vědomí, že zvolené pole přepíše textové vstupní pole.';

$GLOBALS["lang"]['Please set using'] = 'Prosím nastavte pomocí';

$GLOBALS["lang"]['pod'] = 'Pod';

$GLOBALS["lang"]['Pod'] = 'Pod';

$GLOBALS["lang"]['Poland'] = 'Polsko';

$GLOBALS["lang"]['Policies'] = 'Politika';

$GLOBALS["lang"]['Policies have exceptions.'] = 'Politiky mají výjimky.';

$GLOBALS["lang"]['policy'] = 'Politika';

$GLOBALS["lang"]['Policy'] = 'Politika';

$GLOBALS["lang"]['policy_id'] = 'Identifikace politiky';

$GLOBALS["lang"]['Policy ID'] = 'Identifikace politiky';

$GLOBALS["lang"]['Policy Result'] = 'Výsledek politiky';

$GLOBALS["lang"]['Policy Results'] = 'Výsledky politiky';

$GLOBALS["lang"]['Polite'] = 'Politní';

$GLOBALS["lang"]['Populated by audit.'] = 'Opuštěný auditem.';

$GLOBALS["lang"]['Populated by discovery and audit.'] = 'Opuštěný objevem a auditem.';

$GLOBALS["lang"]['Populated dynamically.'] = 'Dynamicky ochromená.';

$GLOBALS["lang"]['Populated from DNS.'] = 'Opuštěný z DNS.';

$GLOBALS["lang"]['Populated from SNMP discovery.'] = 'Vypukl z objevu SNMP.';

$GLOBALS["lang"]['Populated from device audits.'] = 'Vyloučeno z auditů zařízení.';

$GLOBALS["lang"]['Populated from hostname.'] = 'Opuštěný z hostitelského jména.';

$GLOBALS["lang"]['Populated from machine-id on Linux.'] = 'Opuštěný z machine- id na Linux.';

$GLOBALS["lang"]['Populated from the IP for the default route or the IP detected in discovery.'] = 'Opuštěný z IP pro výchozí trasu nebo IP zjištěný v objevu.';

$GLOBALS["lang"]['Populated from the hostname command.'] = 'Opuštěný z příkazu hostitele.';

$GLOBALS["lang"]['Populated with additional data from the external system, in a JSON representation.'] = 'Opuštěné dalšími údaji z externího systému, v reprezentaci JSON.';

$GLOBALS["lang"]['port'] = 'Přístav';

$GLOBALS["lang"]['Port'] = 'Přístav';

$GLOBALS["lang"]['port_name'] = 'Název přístavu';

$GLOBALS["lang"]['Port Name'] = 'Název přístavu';

$GLOBALS["lang"]['port_number'] = 'Číslo přístavu';

$GLOBALS["lang"]['Port Number'] = 'Číslo přístavu';

$GLOBALS["lang"]['ports_in_order'] = 'Přístavy v pořadí';

$GLOBALS["lang"]['Ports In Order'] = 'Přístavy v pořadí';

$GLOBALS["lang"]['ports_stop_after'] = 'Ports Stop after';

$GLOBALS["lang"]['Ports Stop After'] = 'Ports Stop after';

$GLOBALS["lang"]['Portugal, Portuguese Republic'] = 'Portugalsko, Portugalská republika';

$GLOBALS["lang"]['position'] = 'Poloha';

$GLOBALS["lang"]['Position'] = 'Poloha';

$GLOBALS["lang"]['postcode'] = 'PSČ';

$GLOBALS["lang"]['Postcode'] = 'PSČ';

$GLOBALS["lang"]['power_circuit'] = 'Napájecí obvod';

$GLOBALS["lang"]['Power Circuit'] = 'Napájecí obvod';

$GLOBALS["lang"]['power_sockets'] = 'Power Sockets';

$GLOBALS["lang"]['Power Sockets'] = 'Power Sockets';

$GLOBALS["lang"]['Prerequisites'] = 'Předpoklady';

$GLOBALS["lang"]['Prerequisites and Tests'] = 'Předpoklady a zkoušky';

$GLOBALS["lang"]['present'] = 'Přítomnost';

$GLOBALS["lang"]['Present'] = 'Přítomnost';

$GLOBALS["lang"]['previous_value'] = 'Předchozí hodnota';

$GLOBALS["lang"]['Previous Value'] = 'Předchozí hodnota';

$GLOBALS["lang"]['primary'] = 'Primární';

$GLOBALS["lang"]['Primary'] = 'Primární';

$GLOBALS["lang"]['Primary Key'] = 'Primární klíč';

$GLOBALS["lang"]['print_queue'] = 'Vytisknout frontu';

$GLOBALS["lang"]['Print Queue'] = 'Vytisknout frontu';

$GLOBALS["lang"]['printer_color'] = 'Barva tiskárny';

$GLOBALS["lang"]['Printer Color'] = 'Barva tiskárny';

$GLOBALS["lang"]['printer_duplex'] = 'Tiskárna Duplex';

$GLOBALS["lang"]['Printer Duplex'] = 'Tiskárna Duplex';

$GLOBALS["lang"]['printer_port_name'] = 'Název portu tiskárny';

$GLOBALS["lang"]['Printer Port Name'] = 'Název portu tiskárny';

$GLOBALS["lang"]['printer_shared'] = 'Sdílená tiskárna';

$GLOBALS["lang"]['Printer Shared'] = 'Sdílená tiskárna';

$GLOBALS["lang"]['printer_shared_name'] = 'Sdílené jméno tiskárny';

$GLOBALS["lang"]['Printer Shared Name'] = 'Sdílené jméno tiskárny';

$GLOBALS["lang"]['priority'] = 'Priorita';

$GLOBALS["lang"]['Priority'] = 'Priorita';

$GLOBALS["lang"]['Privacy Passphrase'] = 'Privacy Passprase';

$GLOBALS["lang"]['processor'] = 'Procesor';

$GLOBALS["lang"]['Processor'] = 'Procesor';

$GLOBALS["lang"]['processor_count'] = 'Počet zpracovatelů';

$GLOBALS["lang"]['Processor Count'] = 'Počet zpracovatelů';

$GLOBALS["lang"]['processor_slot_count'] = 'Počet výloh procesoru';

$GLOBALS["lang"]['Processor Slot Count'] = 'Počet výloh procesoru';

$GLOBALS["lang"]['processor_type'] = 'Typ procesoru';

$GLOBALS["lang"]['Processor Type'] = 'Typ procesoru';

$GLOBALS["lang"]['Processors'] = 'Zpracovatelé';

$GLOBALS["lang"]['product_name'] = 'Název produktu';

$GLOBALS["lang"]['Product Name'] = 'Název produktu';

$GLOBALS["lang"]['profile'] = 'Profil';

$GLOBALS["lang"]['Profile'] = 'Profil';

$GLOBALS["lang"]['program'] = 'Program';

$GLOBALS["lang"]['Program'] = 'Program';

$GLOBALS["lang"]['protocol'] = 'Protokol';

$GLOBALS["lang"]['Protocol'] = 'Protokol';

$GLOBALS["lang"]['provider'] = 'Poskytovatel';

$GLOBALS["lang"]['Provider'] = 'Poskytovatel';

$GLOBALS["lang"]['publisher'] = 'Vydavatel';

$GLOBALS["lang"]['Publisher'] = 'Vydavatel';

$GLOBALS["lang"]['Puerto Rico'] = 'Portoriko';

$GLOBALS["lang"]['Purchase'] = 'Nákup';

$GLOBALS["lang"]['purchase_amount'] = 'Nákupní částka';

$GLOBALS["lang"]['Purchase Amount'] = 'Nákupní částka';

$GLOBALS["lang"]['purchase_cost_center'] = 'Nákupní nákladové centrum';

$GLOBALS["lang"]['Purchase Cost Center'] = 'Nákupní nákladové centrum';

$GLOBALS["lang"]['purchase_count'] = 'Počet nákupů';

$GLOBALS["lang"]['Purchase Count'] = 'Počet nákupů';

$GLOBALS["lang"]['purchase_date'] = 'Datum nákupu';

$GLOBALS["lang"]['Purchase Date'] = 'Datum nákupu';

$GLOBALS["lang"]['purchase_invoice'] = 'Nákupní faktura';

$GLOBALS["lang"]['Purchase Invoice'] = 'Nákupní faktura';

$GLOBALS["lang"]['purchase_order'] = 'Objednávka nákupu';

$GLOBALS["lang"]['Purchase Order'] = 'Objednávka nákupu';

$GLOBALS["lang"]['purchase_order_number'] = 'Číslo objednávky';

$GLOBALS["lang"]['Purchase Order Number'] = 'Číslo objednávky';

$GLOBALS["lang"]['purchase_service_contract_number'] = 'Číslo smlouvy o kupní službě';

$GLOBALS["lang"]['Purchase Service Contract Number'] = 'Číslo smlouvy o kupní službě';

$GLOBALS["lang"]['purchase_vendor'] = 'Prodejce nákupu';

$GLOBALS["lang"]['Purchase Vendor'] = 'Prodejce nákupu';

$GLOBALS["lang"]['purpose'] = 'Účel';

$GLOBALS["lang"]['Purpose'] = 'Účel';

$GLOBALS["lang"]['Qatar'] = 'Katar';

$GLOBALS["lang"]['queries'] = 'Dotazy';

$GLOBALS["lang"]['Queries'] = 'Dotazy';

$GLOBALS["lang"]['Query'] = 'Dotaz';

$GLOBALS["lang"]['queue'] = 'Fronta';

$GLOBALS["lang"]['Queue'] = 'Fronta';

$GLOBALS["lang"]['Queue Limit'] = 'Queue Limit';

$GLOBALS["lang"]['Queued Device Audits'] = 'Audity Queued Device';

$GLOBALS["lang"]['Queued IP Scans'] = 'Queued IP Scans';

$GLOBALS["lang"]['Queued Items'] = 'Kvótové položky';

$GLOBALS["lang"]['RU Start'] = 'ŽP Start';

$GLOBALS["lang"]['RX Bitrate'] = 'RX datový tok';

$GLOBALS["lang"]['RX Freq'] = 'RX Freq';

$GLOBALS["lang"]['RX Level'] = 'Úroveň RX';

$GLOBALS["lang"]['RX Power'] = 'RX výkon';

$GLOBALS["lang"]['RX Profile'] = 'RX profil';

$GLOBALS["lang"]['Rack'] = 'Rack';

$GLOBALS["lang"]['rack_devices'] = 'Rack zařízení';

$GLOBALS["lang"]['Rack Devices'] = 'Rack zařízení';

$GLOBALS["lang"]['rack_id'] = 'Průkaz totožnosti';

$GLOBALS["lang"]['Rack ID'] = 'Průkaz totožnosti';

$GLOBALS["lang"]['racks'] = 'Uzávěry';

$GLOBALS["lang"]['Racks'] = 'Uzávěry';

$GLOBALS["lang"]['radio'] = 'Rádio';

$GLOBALS["lang"]['Radio'] = 'Rádio';

$GLOBALS["lang"]['Radio MAC'] = 'Rádio MAC';

$GLOBALS["lang"]['rationale'] = 'Odvolání';

$GLOBALS["lang"]['Rationale'] = 'Odvolání';

$GLOBALS["lang"]['Read'] = 'Čtení';

$GLOBALS["lang"]['Read our online documentation on the Open-AudIT Wiki.'] = 'Přečtěte si naši online dokumentaci na Open- Audit Wiki.';

$GLOBALS["lang"]['Red Query'] = 'Červený dotaz';

$GLOBALS["lang"]['Redirect URI'] = 'Přesměrovat URI';

$GLOBALS["lang"]['redirect_uri'] = 'Přesměrovat Uri';

$GLOBALS["lang"]['Redirect Uri'] = 'Přesměrovat Uri';

$GLOBALS["lang"]['region'] = 'Oblast';

$GLOBALS["lang"]['Region'] = 'Oblast';

$GLOBALS["lang"]['registered_user'] = 'Registrovaný uživatel';

$GLOBALS["lang"]['Registered User'] = 'Registrovaný uživatel';

$GLOBALS["lang"]['rel'] = 'Rel';

$GLOBALS["lang"]['Rel'] = 'Rel';

$GLOBALS["lang"]['Release'] = 'Uvolnit';

$GLOBALS["lang"]['remediation'] = 'Remediation';

$GLOBALS["lang"]['Remediation'] = 'Remediation';

$GLOBALS["lang"]['Remote'] = 'Vzdálené';

$GLOBALS["lang"]['remote_address'] = 'Vzdálená adresa';

$GLOBALS["lang"]['Remote Address'] = 'Vzdálená adresa';

$GLOBALS["lang"]['remote_port'] = 'Vzdálený port';

$GLOBALS["lang"]['Remote Port'] = 'Vzdálený port';

$GLOBALS["lang"]['Remove'] = 'Odstranit';

$GLOBALS["lang"]['Remove Exception'] = 'Odstranit výjimku';

$GLOBALS["lang"]['Report'] = 'Zpráva';

$GLOBALS["lang"]['Report on your devices, networks and more'] = 'Hlášení o vašich zařízeních, sítích a dalších';

$GLOBALS["lang"]['reportable'] = 'Oznamováno';

$GLOBALS["lang"]['Reportable'] = 'Oznamováno';

$GLOBALS["lang"]['request'] = 'Žádost';

$GLOBALS["lang"]['Request'] = 'Žádost';

$GLOBALS["lang"]['require_port'] = 'Vyžadovat přístav';

$GLOBALS["lang"]['Require Port'] = 'Vyžadovat přístav';

$GLOBALS["lang"]['Require an Open Port'] = 'Vyžadovat otevřený port';

$GLOBALS["lang"]['Required'] = 'Požadováno';

$GLOBALS["lang"]['Reset'] = 'Obnovit';

$GLOBALS["lang"]['Reset All Data'] = 'Obnovit všechna data';

$GLOBALS["lang"]['Reset to Default'] = 'Obnovit na výchozí';

$GLOBALS["lang"]['resource'] = 'Zdroj';

$GLOBALS["lang"]['Resource'] = 'Zdroj';

$GLOBALS["lang"]['Resource Name'] = 'Název zdroje';

$GLOBALS["lang"]['Resources'] = 'Zdroje';

$GLOBALS["lang"]['response'] = 'Odpověď';

$GLOBALS["lang"]['Response'] = 'Odpověď';

$GLOBALS["lang"]['responsibility'] = 'Odpovědnost';

$GLOBALS["lang"]['Responsibility'] = 'Odpovědnost';

$GLOBALS["lang"]['Restrict to Private'] = 'Omezení na soukromé';

$GLOBALS["lang"]['Restrict to Subnet'] = 'Omezení na subnet';

$GLOBALS["lang"]['result'] = 'Výsledek';

$GLOBALS["lang"]['Result'] = 'Výsledek';

$GLOBALS["lang"]['Results'] = 'Výsledky';

$GLOBALS["lang"]['retrieved'] = 'Získané zpět';

$GLOBALS["lang"]['Retrieved'] = 'Získané zpět';

$GLOBALS["lang"]['retrieved_ident'] = 'Name';

$GLOBALS["lang"]['Retrieved Ident'] = 'Name';

$GLOBALS["lang"]['retrieved_name'] = 'Získané jméno';

$GLOBALS["lang"]['Retrieved Name'] = 'Získané jméno';

$GLOBALS["lang"]['Retrieved from the device - Windows:Win32_ComputerSystemProduct, Linux:dmidecode, MacOS:system_profiler, ESXi:vim-cmd hostsvc/hostsummary, HP-UX:machinfo, Solaris:smbios, AIX:uname.'] = 'Získané ze zařízení - Windows: Win32 _ ComputerSystemProduct, Linux: dmidecode, MacOS: system _ profiler, ESXi: vim- cmd hostsvc / hostsummary, HP- UX: machinfo, Solaris: smbios, AIX: unname.';

$GLOBALS["lang"]['Reunion'] = 'Sjednocení';

$GLOBALS["lang"]['revision'] = 'Revize';

$GLOBALS["lang"]['Revision'] = 'Revize';

$GLOBALS["lang"]['risk_assesment_result'] = 'Výsledek hodnocení rizik';

$GLOBALS["lang"]['Risk Assesment Result'] = 'Výsledek hodnocení rizik';

$GLOBALS["lang"]['role'] = 'Úloha';

$GLOBALS["lang"]['Role'] = 'Úloha';

$GLOBALS["lang"]['roles'] = 'Role';

$GLOBALS["lang"]['Roles'] = 'Role';

$GLOBALS["lang"]['Romania'] = 'Rumunsko';

$GLOBALS["lang"]['Room'] = 'Pokoj';

$GLOBALS["lang"]['route'] = 'Cesta';

$GLOBALS["lang"]['Route'] = 'Cesta';

$GLOBALS["lang"]['Row'] = 'Řádek';

$GLOBALS["lang"]['Row Count'] = 'Počet řádků';

$GLOBALS["lang"]['row_position'] = 'Poloha řádku';

$GLOBALS["lang"]['Row Position'] = 'Poloha řádku';

$GLOBALS["lang"]['Rows'] = 'Řádky';

$GLOBALS["lang"]['ru_height'] = 'Ru výška';

$GLOBALS["lang"]['Ru Height'] = 'Ru výška';

$GLOBALS["lang"]['ru_start'] = 'Ru Start';

$GLOBALS["lang"]['Ru Start'] = 'Ru Start';

$GLOBALS["lang"]['rule_group'] = 'Článek skupina';

$GLOBALS["lang"]['Rule Group'] = 'Článek skupina';

$GLOBALS["lang"]['rules'] = 'Pravidla';

$GLOBALS["lang"]['Rules'] = 'Pravidla';

$GLOBALS["lang"]['Run Discovery'] = 'Spustit vyhledávání';

$GLOBALS["lang"]['Run Discovery on Devices'] = 'Spustit vyhledávání na zařízeních';

$GLOBALS["lang"]['Run a discovery and find out <b>Whats On Your Network?</b>'] = 'Spustit objev a zjistit < b > Co na vaší síti? < / b >';

$GLOBALS["lang"]['Run this Command'] = 'Spustit tento příkaz';

$GLOBALS["lang"]['runas'] = 'Runy';

$GLOBALS["lang"]['Runas'] = 'Runy';

$GLOBALS["lang"]['Russian Federation'] = 'Ruská federace';

$GLOBALS["lang"]['Rwanda'] = 'Rwanda';

$GLOBALS["lang"]['rx_bitrate'] = 'Rx Bitrate';

$GLOBALS["lang"]['Rx Bitrate'] = 'Rx Bitrate';

$GLOBALS["lang"]['rx_freq'] = 'Rx Freq';

$GLOBALS["lang"]['Rx Freq'] = 'Rx Freq';

$GLOBALS["lang"]['rx_level'] = 'Úroveň Rx';

$GLOBALS["lang"]['Rx Level'] = 'Úroveň Rx';

$GLOBALS["lang"]['rx_power'] = 'Rx výkon';

$GLOBALS["lang"]['Rx Power'] = 'Rx výkon';

$GLOBALS["lang"]['rx_profile'] = 'Profil Rx';

$GLOBALS["lang"]['Rx Profile'] = 'Profil Rx';

$GLOBALS["lang"]['SELECT'] = 'VÝBĚR';

$GLOBALS["lang"]['SID'] = 'SID';

$GLOBALS["lang"]['SM Version'] = 'Verze SM';

$GLOBALS["lang"]['SNMP (v1 / v2)'] = 'SNMP (v1 / v2)';

$GLOBALS["lang"]['SNMP Details'] = 'SNMP Podrobnosti';

$GLOBALS["lang"]['SNMP OID'] = 'SNMP OID';

$GLOBALS["lang"]['SNMP Version'] = 'SNMP verze';

$GLOBALS["lang"]['SNMP v3'] = 'SNMP v3';

$GLOBALS["lang"]['SQL'] = 'SQL';

$GLOBALS["lang"]['SQL (Advanced)'] = 'SQL (Advanced)';

$GLOBALS["lang"]['SQL Creation Statements'] = 'Prohlášení SQL o vytvoření';

$GLOBALS["lang"]['SSH'] = 'SSH';

$GLOBALS["lang"]['SSH Key'] = 'SSH Klíč';

$GLOBALS["lang"]['SW Revision'] = 'Revize SW';

$GLOBALS["lang"]['Saint Barthelemy'] = 'Saint Barthelemy';

$GLOBALS["lang"]['Saint Helena'] = 'Svatá Helena';

$GLOBALS["lang"]['Saint Kitts and Nevis'] = 'Svatý Kryštof a Nevis';

$GLOBALS["lang"]['Saint Lucia'] = 'Svatá Lucie';

$GLOBALS["lang"]['Saint Martin'] = 'Svatý Martin';

$GLOBALS["lang"]['Saint Pierre and Miquelon'] = 'Saint Pierre a Miquelon';

$GLOBALS["lang"]['Saint Vincent and the Grenadines'] = 'Svatý Vincenc a Grenadiny';

$GLOBALS["lang"]['Samoa'] = 'Samoa';

$GLOBALS["lang"]['san'] = 'San';

$GLOBALS["lang"]['San'] = 'San';

$GLOBALS["lang"]['San Marino'] = 'San Marino';

$GLOBALS["lang"]['Sao Tome and Principe'] = 'Sao Tome a Principe';

$GLOBALS["lang"]['Saturday'] = 'Sobota';

$GLOBALS["lang"]['Saudi Arabia'] = 'Saúdská Arábie';

$GLOBALS["lang"]['Save as Default'] = 'Uložit jako výchozí';

$GLOBALS["lang"]['scaling'] = 'Měření';

$GLOBALS["lang"]['Scaling'] = 'Měření';

$GLOBALS["lang"]['scan_options'] = 'Možnosti skenování';

$GLOBALS["lang"]['Scan Options'] = 'Možnosti skenování';

$GLOBALS["lang"]['Scan the Nmap top number of TCP ports.'] = 'Naskenujte Nmapový horní počet TCP portů.';

$GLOBALS["lang"]['Scan the Nmap top number of UDP ports.'] = 'Naskenujte horní číslo Nmap portů UDP.';

$GLOBALS["lang"]['schedule'] = 'Plán';

$GLOBALS["lang"]['Schedule'] = 'Plán';

$GLOBALS["lang"]['script_timeout'] = 'Timeout skriptu';

$GLOBALS["lang"]['Script Timeout'] = 'Timeout skriptu';

$GLOBALS["lang"]['scripts'] = 'Písma';

$GLOBALS["lang"]['Scripts'] = 'Písma';

$GLOBALS["lang"]['scsi'] = 'Scsi';

$GLOBALS["lang"]['Scsi'] = 'Scsi';

$GLOBALS["lang"]['scsi_bus'] = 'Sběrnice Scsi';

$GLOBALS["lang"]['Scsi Bus'] = 'Sběrnice Scsi';

$GLOBALS["lang"]['scsi_logical_unit'] = 'Logická jednotka Scsi';

$GLOBALS["lang"]['Scsi Logical Unit'] = 'Logická jednotka Scsi';

$GLOBALS["lang"]['scsi_port'] = 'Name';

$GLOBALS["lang"]['Scsi Port'] = 'Name';

$GLOBALS["lang"]['Search'] = 'Hledat';

$GLOBALS["lang"]['Search For a Device'] = 'Hledat zařízení';

$GLOBALS["lang"]['Search for Device'] = 'Hledat zařízení';

$GLOBALS["lang"]['secondary'] = 'Sekundární';

$GLOBALS["lang"]['Secondary'] = 'Sekundární';

$GLOBALS["lang"]['Secondary Text'] = 'Sekundární text';

$GLOBALS["lang"]['section'] = 'Oddíl';

$GLOBALS["lang"]['Section'] = 'Oddíl';

$GLOBALS["lang"]['secure'] = 'Bezpečné';

$GLOBALS["lang"]['Secure'] = 'Bezpečné';

$GLOBALS["lang"]['Security Name'] = 'Bezpečnostní jméno';

$GLOBALS["lang"]['Security Status'] = 'Bezpečnostní status';

$GLOBALS["lang"]['security_zone'] = 'Bezpečnostní zóna';

$GLOBALS["lang"]['Security Zone'] = 'Bezpečnostní zóna';

$GLOBALS["lang"]['seed_ip'] = 'Osivo IP';

$GLOBALS["lang"]['Seed IP'] = 'Osivo IP';

$GLOBALS["lang"]['seed_ping'] = 'Semeno Ping';

$GLOBALS["lang"]['Seed Ping'] = 'Semeno Ping';

$GLOBALS["lang"]['seed_restrict_to_private'] = 'Osivo omezení na soukromé';

$GLOBALS["lang"]['Seed Restrict To Private'] = 'Osivo omezení na soukromé';

$GLOBALS["lang"]['seed_restrict_to_subnet'] = 'Omezení na podsíť osiva';

$GLOBALS["lang"]['Seed Restrict To Subnet'] = 'Omezení na podsíť osiva';

$GLOBALS["lang"]['Select'] = 'Vybrat';

$GLOBALS["lang"]['Select All'] = 'Vybrat vše';

$GLOBALS["lang"]['select_external_attribute'] = 'Vybrat vnější atribut';

$GLOBALS["lang"]['Select External Attribute'] = 'Vybrat vnější atribut';

$GLOBALS["lang"]['select_external_count'] = 'Vybrat externí počet';

$GLOBALS["lang"]['Select External Count'] = 'Vybrat externí počet';

$GLOBALS["lang"]['select_external_type'] = 'Vybrat externí Typ';

$GLOBALS["lang"]['Select External Type'] = 'Vybrat externí Typ';

$GLOBALS["lang"]['select_external_value'] = 'Vybrat externí Hodnota';

$GLOBALS["lang"]['Select External Value'] = 'Vybrat externí Hodnota';

$GLOBALS["lang"]['select_internal_attribute'] = 'Vybrat vnitřní atribut';

$GLOBALS["lang"]['Select Internal Attribute'] = 'Vybrat vnitřní atribut';

$GLOBALS["lang"]['select_internal_count'] = 'Vybrat vnitřní počet';

$GLOBALS["lang"]['Select Internal Count'] = 'Vybrat vnitřní počet';

$GLOBALS["lang"]['select_internal_type'] = 'Vybrat vnitřní Typ';

$GLOBALS["lang"]['Select Internal Type'] = 'Vybrat vnitřní Typ';

$GLOBALS["lang"]['select_internal_value'] = 'Vybrat vnitřní Hodnota';

$GLOBALS["lang"]['Select Internal Value'] = 'Vybrat vnitřní Hodnota';

$GLOBALS["lang"]['Select a Table'] = 'Vybrat tabulku';

$GLOBALS["lang"]['Senegal'] = 'Senegal';

$GLOBALS["lang"]['September'] = 'Září';

$GLOBALS["lang"]['Serbia'] = 'Srbsko';

$GLOBALS["lang"]['serial'] = 'Pořadové';

$GLOBALS["lang"]['Serial'] = 'Pořadové';

$GLOBALS["lang"]['serial_imei'] = 'Name';

$GLOBALS["lang"]['Serial Imei'] = 'Name';

$GLOBALS["lang"]['serial_sim'] = 'Sériová sim';

$GLOBALS["lang"]['Serial Sim'] = 'Sériová sim';

$GLOBALS["lang"]['series'] = 'Soubor';

$GLOBALS["lang"]['Series'] = 'Soubor';

$GLOBALS["lang"]['server'] = 'Server';

$GLOBALS["lang"]['Server'] = 'Server';

$GLOBALS["lang"]['server_id'] = 'ID serveru';

$GLOBALS["lang"]['Server ID'] = 'ID serveru';

$GLOBALS["lang"]['Server Is'] = 'Server je';

$GLOBALS["lang"]['server_item'] = 'Položka serveru';

$GLOBALS["lang"]['Server Item'] = 'Položka serveru';

$GLOBALS["lang"]['Servers'] = 'Servery';

$GLOBALS["lang"]['service'] = 'Služba';

$GLOBALS["lang"]['Service'] = 'Služba';

$GLOBALS["lang"]['service_identifier'] = 'Identifikátor služby';

$GLOBALS["lang"]['Service Identifier'] = 'Identifikátor služby';

$GLOBALS["lang"]['service_level_a'] = 'Úroveň služeb A';

$GLOBALS["lang"]['Service Level A'] = 'Úroveň služeb A';

$GLOBALS["lang"]['service_level_b'] = 'Úroveň služeb B';

$GLOBALS["lang"]['Service Level B'] = 'Úroveň služeb B';

$GLOBALS["lang"]['service_network'] = 'Síť služeb';

$GLOBALS["lang"]['Service Network'] = 'Síť služeb';

$GLOBALS["lang"]['service_number'] = 'Číslo služby';

$GLOBALS["lang"]['Service Number'] = 'Číslo služby';

$GLOBALS["lang"]['service_pack'] = 'Service Pack';

$GLOBALS["lang"]['Service Pack'] = 'Service Pack';

$GLOBALS["lang"]['service_plan'] = 'Plán služeb';

$GLOBALS["lang"]['Service Plan'] = 'Plán služeb';

$GLOBALS["lang"]['service_provider'] = 'Poskytovatel služeb';

$GLOBALS["lang"]['Service Provider'] = 'Poskytovatel služeb';

$GLOBALS["lang"]['service_tag'] = 'Service Tag';

$GLOBALS["lang"]['Service Tag'] = 'Service Tag';

$GLOBALS["lang"]['service_type'] = 'Typ služby';

$GLOBALS["lang"]['Service Type'] = 'Typ služby';

$GLOBALS["lang"]['service_version'] = 'Verze služby';

$GLOBALS["lang"]['Service Version'] = 'Verze služby';

$GLOBALS["lang"]['Set'] = 'Nastavení';

$GLOBALS["lang"]['set_by'] = 'Nastavit podle';

$GLOBALS["lang"]['Set By'] = 'Nastavit podle';

$GLOBALS["lang"]['Set the size (normal or compact) of the tables on the List screens.'] = 'Nastavte velikost (normální nebo kompaktní) tabulek na obrazovkách seznamu.';

$GLOBALS["lang"]['severity'] = 'Závažnost';

$GLOBALS["lang"]['Severity'] = 'Závažnost';

$GLOBALS["lang"]['severity_text'] = 'Závažnost Text';

$GLOBALS["lang"]['Severity Text'] = 'Závažnost Text';

$GLOBALS["lang"]['Seychelles'] = 'Seychely';

$GLOBALS["lang"]['share'] = 'Podíl';

$GLOBALS["lang"]['Share'] = 'Podíl';

$GLOBALS["lang"]['Share Name'] = 'Název sdílení';

$GLOBALS["lang"]['shared'] = 'Sdílené';

$GLOBALS["lang"]['Shared'] = 'Sdílené';

$GLOBALS["lang"]['shared_name'] = 'Sdílené jméno';

$GLOBALS["lang"]['Shared Name'] = 'Sdílené jméno';

$GLOBALS["lang"]['shell'] = 'Shell';

$GLOBALS["lang"]['Shell'] = 'Shell';

$GLOBALS["lang"]['Ship Date'] = 'Datum přepravy';

$GLOBALS["lang"]['Should I remove all non-current data from this device?'] = 'Mám odstranit všechna nesoučasná data z tohoto zařízení?';

$GLOBALS["lang"]['Should this file (or pattern) be used to exclude files from being reported. Normally, to audit files, this is set to <code>y</code>.'] = 'Je-li tento soubor (nebo vzor) použit k vyloučení souborů z hlášení. Pro audit souborů je to nastaveno na < kód > y < / kód >.';

$GLOBALS["lang"]['Should we add devices from the remote service, locally.'] = 'Měli bychom přidávat zařízení ze vzdálené služby, lokálně.';

$GLOBALS["lang"]['Should we apply this license to the selected Org as well as the Orgs children?'] = 'Měli bychom tuto licenci uplatnit na vybraný Org, stejně jako na děti Orgů?';

$GLOBALS["lang"]['Should we consider a filtered port to be an open port - and therefore flag this IP as having a device attached?'] = 'Měli bychom považovat filtrovaný port za otevřený port - a proto označit tuto IP jako zařízení?';

$GLOBALS["lang"]['Should we consider an open|filtered port to be an open port - and therefore flag this IP as having a device attached?'] = 'Měli bychom považovat otevřený port 124; filtrovaný port za otevřený port - a proto označit tuto IP jako zařízení s připojeným zařízením?';

$GLOBALS["lang"]['Should we expose this group in the web interface.'] = 'Měli bychom tuto skupinu odhalit na webovém rozhraní.';

$GLOBALS["lang"]['Should we expose this query in the list of reports under the Report menu in the web interface.'] = 'Měli bychom tento dotaz zveřejnit v seznamu zpráv v nabídce Report v webovém rozhraní.';

$GLOBALS["lang"]['Should we expose this query in the list of reports under the Reports menu in the web interface.'] = 'Měli bychom tento dotaz zveřejnit v seznamu zpráv v nabídce Reports v webovém rozhraní.';

$GLOBALS["lang"]['Should we install Open-Scap on the target machine.'] = 'Měli bychom nainstalovat Open- Scap na cílový stroj.';

$GLOBALS["lang"]['Should we match a device based mac address even if its a known likely duplicate from VMware.'] = 'Shodujeme-li se s mac adresou zařízení, i když je to známý pravděpodobně duplikát z VMware.';

$GLOBALS["lang"]['Should we match a device based on its DNS fqdn.'] = 'Měli bychom porovnat zařízení založené na jeho DNS fqdn.';

$GLOBALS["lang"]['Should we match a device based on its DNS hostname.'] = 'Měli bychom se shodovat se zařízením založeným na jeho hostname DNS.';

$GLOBALS["lang"]['Should we match a device based on its UUID.'] = 'Měli bychom porovnat zařízení založené na UUID.';

$GLOBALS["lang"]['Should we match a device based on its dbus id.'] = 'Měli bychom porovnat zařízení založené na jeho ID dbus.';

$GLOBALS["lang"]['Should we match a device based on its fqdn.'] = 'Měli bychom porovnat zařízení založené na jeho fqdn.';

$GLOBALS["lang"]['Should we match a device based on its hostname and UUID.'] = 'Měli bychom porovnat zařízení založené na jeho hostitelském jménu a UUID.';

$GLOBALS["lang"]['Should we match a device based on its hostname and dbus id.'] = 'Měli bychom porovnat zařízení založené na jeho hostitelské jméno a dbus ID.';

$GLOBALS["lang"]['Should we match a device based on its hostname and serial.'] = 'Měli bychom porovnat zařízení založené na jeho hostitelském jménu a sériovém.';

$GLOBALS["lang"]['Should we match a device based on its ip if we have an existing device with no data.'] = 'Měli bychom porovnat zařízení založené na jeho IP, pokud máme existující zařízení bez dat.';

$GLOBALS["lang"]['Should we match a device based on its ip.'] = 'Měli bychom porovnat zařízení založené na jeho ip.';

$GLOBALS["lang"]['Should we match a device based on its mac address.'] = 'Měli bychom porovnat zařízení na základě jeho Macu adresy.';

$GLOBALS["lang"]['Should we match a device based on its serial and type.'] = 'Měli bychom porovnat zařízení založené na jeho sériovém a typu.';

$GLOBALS["lang"]['Should we match a device based on its serial number.'] = 'Měli bychom porovnat zařízení na základě jeho sériového čísla.';

$GLOBALS["lang"]['Should we match a device based only on its SNMP sysName and serial.'] = 'Měli bychom porovnat zařízení založené pouze na jeho SNMP sysName a sériové.';

$GLOBALS["lang"]['Should we match a device based only on its SNMP sysName.'] = 'Měli bychom porovnat zařízení založené pouze na jeho SNMP sysName.';

$GLOBALS["lang"]['Should we match a device based only on its hostname.'] = 'Měli bychom porovnat zařízení založené pouze na jeho hostitelském jménu.';

$GLOBALS["lang"]['Should we ping the IP before attempting to scan it? If it does not respond to the ping, skip this device.'] = 'Měli bychom zjistit IP adresu, než to zkusíme naskenovat? Pokud nereaguje na ping, vynechte toto zařízení.';

$GLOBALS["lang"]['Should we populate the external system from our local devices.'] = 'Měli bychom zalidnit vnější systém z našich lokálních zařízení.';

$GLOBALS["lang"]['Should we run an audit and submit it (y/n).'] = 'Měli bychom provést audit a předložit jej (y / n).';

$GLOBALS["lang"]['Should we test for SNMP using UDP port 161.'] = 'Měli bychom otestovat SNMP pomocí UDP portu161.';

$GLOBALS["lang"]['Should we test for SSH using TCP port 22.'] = 'Měli bychom testovat na SSH pomocí TCP portu22.';

$GLOBALS["lang"]['Should we test for WMI using TCP port 135.'] = 'Měli bychom otestovat WMI pomocí TCP portu135.';

$GLOBALS["lang"]['Should we uninstall the agent (y/n).'] = 'Měli bychom odinstalovat agenta (y / n).';

$GLOBALS["lang"]['Should we use this method to authenticate user credentials. Set to <code>y</code> or <code>n</code>.'] = 'Měli bychom použít tuto metodu k ověření uživatelských údajů. Nastavit na < kód > y < / kód > nebo < kód > n < / kód >.';

$GLOBALS["lang"]['Should we use this method to populate a users roles. The field <code>use_auth</code> must be set to <code>y</code> to use this. Set to <code>y</code> or <code>n</code>.'] = 'Použijeme tuto metodu k zalidnění uživatelských rolí. Pole < kód > use _ auth < / kód > musí být nastaveno na < kód > y < / kód >, aby se toto používalo. Nastavit na < kód > y < / kód > nebo < kód > n < / kód >.';

$GLOBALS["lang"]['Show All'] = 'Zobrazit vše';

$GLOBALS["lang"]['sid'] = 'Side';

$GLOBALS["lang"]['Sid'] = 'Side';

$GLOBALS["lang"]['sidebar'] = 'Sidebar';

$GLOBALS["lang"]['Sidebar'] = 'Sidebar';

$GLOBALS["lang"]['Sierra Leone'] = 'Sierra Leone';

$GLOBALS["lang"]['Singapore'] = 'Singapur';

$GLOBALS["lang"]['Site A'] = 'Místo A';

$GLOBALS["lang"]['Site B'] = 'Místo B';

$GLOBALS["lang"]['site_hours_a'] = 'Stránky Hodiny A';

$GLOBALS["lang"]['Site Hours A'] = 'Stránky Hodiny A';

$GLOBALS["lang"]['site_hours_b'] = 'Stránky Hodiny B';

$GLOBALS["lang"]['Site Hours B'] = 'Stránky Hodiny B';

$GLOBALS["lang"]['size'] = 'Velikost';

$GLOBALS["lang"]['Size'] = 'Velikost';

$GLOBALS["lang"]['slaves'] = 'Otroci';

$GLOBALS["lang"]['Slaves'] = 'Otroci';

$GLOBALS["lang"]['Slovakia (Slovak Republic)'] = 'Slovensko (Slovensko)';

$GLOBALS["lang"]['Slovenia'] = 'Slovinsko';

$GLOBALS["lang"]['Smart Status'] = 'Chytrý stav';

$GLOBALS["lang"]['smversion'] = 'SmaversiName';

$GLOBALS["lang"]['Smversion'] = 'SmaversiName';

$GLOBALS["lang"]['Sneaky'] = 'Sneaky';

$GLOBALS["lang"]['snmp_enterprise_id'] = 'Snmp Enterprise ID';

$GLOBALS["lang"]['Snmp Enterprise ID'] = 'Snmp Enterprise ID';

$GLOBALS["lang"]['snmp_enterprise_name'] = 'Snmp Enterprise Name';

$GLOBALS["lang"]['Snmp Enterprise Name'] = 'Snmp Enterprise Name';

$GLOBALS["lang"]['snmp_oid'] = 'Snmp Oid';

$GLOBALS["lang"]['Snmp Oid'] = 'Snmp Oid';

$GLOBALS["lang"]['snmp_timeout'] = 'Snmp Timeout';

$GLOBALS["lang"]['Snmp Timeout'] = 'Snmp Timeout';

$GLOBALS["lang"]['snmp_version'] = 'Snmp verze';

$GLOBALS["lang"]['Snmp Version'] = 'Snmp verze';

$GLOBALS["lang"]['socket'] = 'Socket';

$GLOBALS["lang"]['Socket'] = 'Socket';

$GLOBALS["lang"]['software'] = 'Software';

$GLOBALS["lang"]['Software'] = 'Software';

$GLOBALS["lang"]['Software Found Last 7 Days'] = 'Software Nalezeno Posledních 7 dní';

$GLOBALS["lang"]['Software Found Today'] = 'Software nalezený dnes';

$GLOBALS["lang"]['Software Found Yesterday'] = 'Software nalezený včera';

$GLOBALS["lang"]['software_key'] = 'Software Key';

$GLOBALS["lang"]['Software Key'] = 'Software Key';

$GLOBALS["lang"]['software_name'] = 'Název softwaru';

$GLOBALS["lang"]['Software Name'] = 'Název softwaru';

$GLOBALS["lang"]['Software Policies'] = 'Zásady softwaru';

$GLOBALS["lang"]['software_revision'] = 'Revize softwaru';

$GLOBALS["lang"]['Software Revision'] = 'Revize softwaru';

$GLOBALS["lang"]['software_version'] = 'Software Version';

$GLOBALS["lang"]['Software Version'] = 'Software Version';

$GLOBALS["lang"]['Solaris'] = 'Solaris';

$GLOBALS["lang"]['Solomon Islands'] = 'Šalamounovy ostrovy';

$GLOBALS["lang"]['Somalia, Somali Republic'] = 'Somálsko, Somálská republika';

$GLOBALS["lang"]['sound'] = 'Zvuk';

$GLOBALS["lang"]['Sound'] = 'Zvuk';

$GLOBALS["lang"]['source'] = 'Zdroj';

$GLOBALS["lang"]['Source'] = 'Zdroj';

$GLOBALS["lang"]['South Africa'] = 'Jižní Afrika';

$GLOBALS["lang"]['South Georgia and the South Sandwich Islands'] = 'Jižní Georgie a Jižní Sandwichovy ostrovy';

$GLOBALS["lang"]['Spain'] = 'Španělsko';

$GLOBALS["lang"]['Spanish'] = 'Španělština';

$GLOBALS["lang"]['Specific to Azure.'] = 'Speciálně pro Azure.';

$GLOBALS["lang"]['Specific to OKTA.'] = 'Specifické pro OKTA.';

$GLOBALS["lang"]['Specifies a comma-separated list of targets (no spaces) to be excluded from the scan. The list you pass in uses normal Nmap syntax, so it can include hostnames, CIDR netblocks, octet ranges, etc.'] = 'Uvádí seznam cílů (bez mezer), které mají být ze skenování vyloučeny. Seznam, který projdete používá normální Nmap syntaxe, takže to může zahrnovat jména hostitelů, CIDR netblocks, oktetové rozsahy, atd.';

$GLOBALS["lang"]['speed'] = 'Rychlost';

$GLOBALS["lang"]['Speed'] = 'Rychlost';

$GLOBALS["lang"]['speed_down_a'] = 'Rychlost dolů A';

$GLOBALS["lang"]['Speed Down A'] = 'Rychlost dolů A';

$GLOBALS["lang"]['speed_down_b'] = 'Rychlost dolů B';

$GLOBALS["lang"]['Speed Down B'] = 'Rychlost dolů B';

$GLOBALS["lang"]['speed_up_a'] = 'Rychlost A';

$GLOBALS["lang"]['Speed Up A'] = 'Rychlost A';

$GLOBALS["lang"]['speed_up_b'] = 'Rychlost nahoru B';

$GLOBALS["lang"]['Speed Up B'] = 'Rychlost nahoru B';

$GLOBALS["lang"]['sql'] = 'Sql';

$GLOBALS["lang"]['Sql'] = 'Sql';

$GLOBALS["lang"]['Sri Lanka'] = 'Srí Lanka';

$GLOBALS["lang"]['ssh_ports'] = 'Ssh Ports';

$GLOBALS["lang"]['Ssh Ports'] = 'Ssh Ports';

$GLOBALS["lang"]['ssh_timeout'] = 'Ssh Timeout';

$GLOBALS["lang"]['Ssh Timeout'] = 'Ssh Timeout';

$GLOBALS["lang"]['Stand-Alone'] = 'Stand-Alone';

$GLOBALS["lang"]['Standard'] = 'Standardní';

$GLOBALS["lang"]['standard_id'] = 'Standardní ID';

$GLOBALS["lang"]['Standard ID'] = 'Standardní ID';

$GLOBALS["lang"]['standards'] = 'Normy';

$GLOBALS["lang"]['Standards'] = 'Normy';

$GLOBALS["lang"]['standards_policies'] = 'Normy';

$GLOBALS["lang"]['Standards Policies'] = 'Normy';

$GLOBALS["lang"]['standards_results'] = 'Výsledky standardů';

$GLOBALS["lang"]['Standards Results'] = 'Výsledky standardů';

$GLOBALS["lang"]['start_date'] = 'Datum zahájení';

$GLOBALS["lang"]['Start Date'] = 'Datum zahájení';

$GLOBALS["lang"]['start_mode'] = 'Spustit režim';

$GLOBALS["lang"]['Start Mode'] = 'Spustit režim';

$GLOBALS["lang"]['started_date'] = 'Datum zahájení';

$GLOBALS["lang"]['Started Date'] = 'Datum zahájení';

$GLOBALS["lang"]['state'] = 'Stát';

$GLOBALS["lang"]['State'] = 'Stát';

$GLOBALS["lang"]['Stats'] = 'Staty';

$GLOBALS["lang"]['status'] = 'Stav';

$GLOBALS["lang"]['Status'] = 'Stav';

$GLOBALS["lang"]['Storage'] = 'Skladování';

$GLOBALS["lang"]['storage_count'] = 'Počet úložišť';

$GLOBALS["lang"]['Storage Count'] = 'Počet úložišť';

$GLOBALS["lang"]['Storage-Area Network'] = 'Storage- Area Network';

$GLOBALS["lang"]['string'] = 'Řetězec';

$GLOBALS["lang"]['String'] = 'Řetězec';

$GLOBALS["lang"]['sub_resource_id'] = 'ID dílčího zdroje';

$GLOBALS["lang"]['Sub Resource ID'] = 'ID dílčího zdroje';

$GLOBALS["lang"]['sub_type'] = 'Podtyp';

$GLOBALS["lang"]['Sub Type'] = 'Podtyp';

$GLOBALS["lang"]['Submit'] = 'Odeslat';

$GLOBALS["lang"]['Submitted From'] = 'Předáno';

$GLOBALS["lang"]['subnet'] = 'Podsíť';

$GLOBALS["lang"]['Subnet'] = 'Podsíť';

$GLOBALS["lang"]['Subscription ID'] = 'ID předplatného';

$GLOBALS["lang"]['suburb'] = 'Suburb';

$GLOBALS["lang"]['Suburb'] = 'Suburb';

$GLOBALS["lang"]['Success'] = 'Úspěch';

$GLOBALS["lang"]['Sudan'] = 'Súdán';

$GLOBALS["lang"]['Sudo Password (optional)'] = 'Sudo Heslo (nepovinné)';

$GLOBALS["lang"]['suite'] = 'Suite';

$GLOBALS["lang"]['Suite'] = 'Suite';

$GLOBALS["lang"]['summaries'] = 'Shrnutí';

$GLOBALS["lang"]['Summaries'] = 'Shrnutí';

$GLOBALS["lang"]['summary'] = 'Shrnutí';

$GLOBALS["lang"]['Summary'] = 'Shrnutí';

$GLOBALS["lang"]['Sunday'] = 'Neděle';

$GLOBALS["lang"]['supplier'] = 'Dodavatel';

$GLOBALS["lang"]['Supplier'] = 'Dodavatel';

$GLOBALS["lang"]['Supported types are <code>subnet</code>, <code>seed</code> and <code>active directory</code>.'] = 'Podporované typy jsou < kód > subnet < / kód >, < kód > osivo < / kód > a < kód > aktivní adresář < / kód >.';

$GLOBALS["lang"]['Suriname'] = 'Surinam';

$GLOBALS["lang"]['Svalbard & Jan Mayen Islands'] = 'Svalbard a ostrovy Jan Mayen';

$GLOBALS["lang"]['Swaziland'] = 'Svazijsko';

$GLOBALS["lang"]['Sweden'] = 'Švédsko';

$GLOBALS["lang"]['switch_device_id'] = 'ID přepínače';

$GLOBALS["lang"]['Switch Device ID'] = 'ID přepínače';

$GLOBALS["lang"]['switch_port'] = 'Přepnout port';

$GLOBALS["lang"]['Switch Port'] = 'Přepnout port';

$GLOBALS["lang"]['Switzerland, Swiss Confederation'] = 'Švýcarsko, Švýcarská konfederace';

$GLOBALS["lang"]['Syrian Arab Republic'] = 'Sýrie';

$GLOBALS["lang"]['sysContact'] = 'SysKontakt';

$GLOBALS["lang"]['SysContact'] = 'SysKontakt';

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

$GLOBALS["lang"]['system_component'] = 'Součást systému';

$GLOBALS["lang"]['System Component'] = 'Součást systému';

$GLOBALS["lang"]['System-Area Network'] = 'System- Area Network';

$GLOBALS["lang"]['TX Bitrate'] = 'TX Bitrate';

$GLOBALS["lang"]['TX Freq'] = 'TX Freq';

$GLOBALS["lang"]['TX Level'] = 'Úroveň TX';

$GLOBALS["lang"]['TX Power'] = 'TX výkon';

$GLOBALS["lang"]['TX Profile'] = 'TX profil';

$GLOBALS["lang"]['table'] = 'Tabulka';

$GLOBALS["lang"]['Table'] = 'Tabulka';

$GLOBALS["lang"]['tag'] = 'Značka';

$GLOBALS["lang"]['Tag'] = 'Značka';

$GLOBALS["lang"]['tag_1'] = 'Značka 1';

$GLOBALS["lang"]['Tag 1'] = 'Značka 1';

$GLOBALS["lang"]['tag_2'] = 'Štítek 2';

$GLOBALS["lang"]['Tag 2'] = 'Štítek 2';

$GLOBALS["lang"]['tag_3'] = 'Štítek 3';

$GLOBALS["lang"]['Tag 3'] = 'Štítek 3';

$GLOBALS["lang"]['tags'] = 'Značky';

$GLOBALS["lang"]['Tags'] = 'Značky';

$GLOBALS["lang"]['Tags :: '] = 'Tagy:';

$GLOBALS["lang"]['Taiwan'] = 'Tchaj-wan';

$GLOBALS["lang"]['Tajikistan'] = 'Tádžikistán';

$GLOBALS["lang"]['Tanzania'] = 'Tanzanie';

$GLOBALS["lang"]['task'] = 'Úkol';

$GLOBALS["lang"]['Task'] = 'Úkol';

$GLOBALS["lang"]['tasks'] = 'Úkoly';

$GLOBALS["lang"]['Tasks'] = 'Úkoly';

$GLOBALS["lang"]['tcp_ports'] = 'Tcp Ports';

$GLOBALS["lang"]['Tcp Ports'] = 'Tcp Ports';

$GLOBALS["lang"]['tenant'] = 'Nájemník';

$GLOBALS["lang"]['Tenant'] = 'Nájemník';

$GLOBALS["lang"]['ternary'] = 'Ternary';

$GLOBALS["lang"]['Ternary'] = 'Ternary';

$GLOBALS["lang"]['Test 1'] = 'Zkouška 1';

$GLOBALS["lang"]['Test 2'] = 'Zkouška 2';

$GLOBALS["lang"]['Test 3'] = 'Zkouška 3';

$GLOBALS["lang"]['test_minutes'] = 'Zkušební zápis';

$GLOBALS["lang"]['Test Minutes'] = 'Zkušební zápis';

$GLOBALS["lang"]['test_os'] = 'Zkouška Os';

$GLOBALS["lang"]['Test Os'] = 'Zkouška Os';

$GLOBALS["lang"]['test_subnet'] = 'Zkušební podsíť';

$GLOBALS["lang"]['Test Subnet'] = 'Zkušební podsíť';

$GLOBALS["lang"]['tests'] = 'Zkoušky';

$GLOBALS["lang"]['Tests'] = 'Zkoušky';

$GLOBALS["lang"]['Text'] = 'Text';

$GLOBALS["lang"]['Thailand'] = 'Thajsko';

$GLOBALS["lang"]['The Active Directory domain to retrieve a list of subnets from.'] = 'Doména Active Directory pro získání seznamu podsítí.';

$GLOBALS["lang"]['The Active Directory server to retrieve a list of subnets from.'] = 'Server Active Directory pro získání seznamu podsítí.';

$GLOBALS["lang"]['The Cloud that owns this item. Links to <code>clouds.id</code>.'] = 'Cloud, který vlastní tuto položku. Odkazy na < kód > clouds.id < / kód >.';

$GLOBALS["lang"]['The Group used to run the Baseline. Links to <code>groups.id</code>.'] = 'Skupina vedla Baseline. Odkazy na < kód > groups.id < / kód >.';

$GLOBALS["lang"]['The ID from the devices table (the devices.name will be displayed) of the NTU at this end of the connection. Links to <code>devices.id</code>.'] = 'ID z tabulky zařízení (devices.name bude zobrazeno) NTU na tomto konci spojení. Odkazy na < kód > devices.id < / kód >.';

$GLOBALS["lang"]['The ID from the imported benchmark policy.'] = 'Identifikátor z dovážené referenční politiky.';

$GLOBALS["lang"]['The ID from the locations table (the locations.name will be displayed) of this end of the connection. Links to <code>locations.id</code>. The A location is usually the <code>FROM</code> location.'] = 'ID z tabulky umístění (zobrazí se locations.name) tohoto konce spojení. Odkazy na < kód > locations.id < / kód >. Umístění A je obvykle < kód > OD < / kód > místo.';

$GLOBALS["lang"]['The ID from the locations table (the locations.name will be displayed) of this end of the connection. Links to <code>locations.id</code>. The B location is usually the <code>TO</code> location.'] = 'ID z tabulky umístění (zobrazí se locations.name) tohoto konce spojení. Odkazy na < kód > locations.id < / kód >. Umístění B je obvykle < kód > TO < / kód > umístění.';

$GLOBALS["lang"]['The ID of the associated device (if any). Links to <code>devices.id</code>.'] = 'Identifikace případného souvisejícího zařízení. Odkazy na < kód > devices.id < / kód >.';

$GLOBALS["lang"]['The ID of the associated discovery. Linked to <code>discoveries.id</code>'] = 'Identifikace souvisejícího objevu. Odkaz na < kód > objevies.id < / kód >';

$GLOBALS["lang"]['The ID of the item of the associated type.'] = 'Identifikátor položky přidruženého typu.';

$GLOBALS["lang"]['The ID of this orgs parent org. Linked to <code>orgs.id</code>'] = 'Identifikace tohoto orgs rodičovského org. Odkaz na < kód > orgs.id < / kód >';

$GLOBALS["lang"]['The ID provided by the provider.'] = 'Identifikátor poskytnutý poskytovatelem.';

$GLOBALS["lang"]['The ID retrieved from a Cloud discovery.'] = 'Identifikace byla získána z objevu Clouda.';

$GLOBALS["lang"]['The IP address of this collector used to communicate with the server.'] = 'IP adresa tohoto kolektoru slouží ke komunikaci se serverem.';

$GLOBALS["lang"]['The IP of the device to start a seed discovery with.'] = 'IP zařízení, se kterým začneme objevovat semena.';

$GLOBALS["lang"]['The IP of the external interface.'] = 'IP externího rozhraní.';

$GLOBALS["lang"]['The IP of the internal interface.'] = 'IP interního rozhraní.';

$GLOBALS["lang"]['The ISP or Telco providing this link.'] = 'ISP nebo Telco poskytují tento odkaz.';

$GLOBALS["lang"]['The LDAP OU of this user (if LDAP is used).'] = 'LDAP OU tohoto uživatele (je-li použit LDAP).';

$GLOBALS["lang"]['The Location that contains this network. Links to <code>locations.id</code>.'] = 'Poloha, která obsahuje tuto síť. Odkazy na < kód > locations.id < / kód >.';

$GLOBALS["lang"]['The Nmap timing preset.'] = 'Načasování Nmapu.';

$GLOBALS["lang"]['The OS this package should be reported against. Blank for all. Use the percent sign % as a wildcard. Will be tested against os_group, os_family and os_name in that order.'] = 'OS tento balíček by měl být hlášen proti. Prázdné pro všechny. Použijte procento znaménka% jako divokou kartu. V tomto pořadí budou testovány proti os _ group, os _ family a os _ name.';

$GLOBALS["lang"]['The Open-AudIT API'] = 'Open- Audit API';

$GLOBALS["lang"]['The Open-AudIT id of the linked cloud. Links to <code>clouds.id</code>.'] = 'Open- Audit ID propojeného cloudu. Odkazy na < kód > clouds.id < / kód >.';

$GLOBALS["lang"]['The Open-AudIT server code was exeucted within this file.'] = 'Open- Aud Kód IT serveru byl exeucted v tomto souboru.';

$GLOBALS["lang"]['The Open-AudIT server code was exeucted within this function.'] = 'Open- Aud Kód IT serveru byl exeucted v rámci této funkce.';

$GLOBALS["lang"]['The Organisation that owns this item. Links to <code>orgs.id</code>.'] = 'Organizace, která vlastní tuto položku. Odkazy na < kód > orgs.id < / kód >.';

$GLOBALS["lang"]['The Process Identifier of the running associated discovery.'] = 'Identifikátor procesu příslušného objevu.';

$GLOBALS["lang"]['The RU positon of the top of this device.'] = 'RU poziton horní části tohoto zařízení.';

$GLOBALS["lang"]['The SNMP community string.'] = 'Komunitní řetězec SNMP.';

$GLOBALS["lang"]['The SNMP v3 Authentication Passphrase.'] = 'SNMP v3 Authentication Passfrase.';

$GLOBALS["lang"]['The SNMP v3 Authentication Protocol.'] = 'SNMP v3 Authentication Protocol.';

$GLOBALS["lang"]['The SNMP v3 Privacy Passphrase.'] = 'SNMP v3 Privacy Passprase.';

$GLOBALS["lang"]['The SNMP v3 Privacy Protocol.'] = 'SNMP v3 Privacy Protocol.';

$GLOBALS["lang"]['The SNMP v3 Security Level.'] = 'Bezpečnostní stupeň SNMP v3.';

$GLOBALS["lang"]['The SNMP v3 Security Name.'] = 'Bezpečnostní jméno SNMP v3.';

$GLOBALS["lang"]['The SNMPv3 context Engine ID (optional).'] = 'Kontextové ID motoru SNMPv3 (nepovinné).';

$GLOBALS["lang"]['The SNMPv3 context Name (optional).'] = 'Kontextový název SNMPv3 (nepovinné).';

$GLOBALS["lang"]['The URL of the external system.'] = 'URL externího systému.';

$GLOBALS["lang"]['The URL of your Open-AudIT Server that this Collector will report to (no trailing slash).'] = 'URL vašeho Open- Audit Server, na který se tento Sběratel bude hlásit (žádné sledování lomítko).';

$GLOBALS["lang"]['The URL the audit scripts should submit their result to.'] = 'URL skripty pro audit by měly předložit svůj výsledek.';

$GLOBALS["lang"]['The actual full name of this user.'] = 'Skutečné celé jméno tohoto uživatele.';

$GLOBALS["lang"]['The associated baseline. Links to <code>baselines.id</code>.'] = 'Související výchozí hodnota. Odkazy na < kód > baselines.id < / kód >.';

$GLOBALS["lang"]['The associated discovery (if required). Links to <code>discoveries.id</code>.'] = 'Související objev (v případě potřeby). Odkazy na < kód > objevies.id < / kód >.';

$GLOBALS["lang"]['The attribute to test (from the <code>devices</code> table).'] = 'Atribut k testování (z tabulky < kód > zařízení < / kód >).';

$GLOBALS["lang"]['The attribute to test (must match an external field name from below).'] = 'Atribut pro test (musí odpovídat názvu vnějšího pole níže).';

$GLOBALS["lang"]['The audit script upon which to base your customisations.'] = 'Auditní skript, na kterém se zakládá vaše přizpůsobení.';

$GLOBALS["lang"]['The base path from which to search for Users.'] = 'Základní cesta, ze které hledat uživatele.';

$GLOBALS["lang"]['The benchmark type.'] = 'Typ referenční hodnoty.';

$GLOBALS["lang"]['The building the rack is located in.'] = 'Budova rack se nachází v.';

$GLOBALS["lang"]['The calculated number of devices to be created externally.'] = 'Vypočítaný počet zařízení, která mají být vytvořena externě.';

$GLOBALS["lang"]['The calculated number of devices to be created in Open-AudIT.'] = 'Vypočítaný počet zařízení, která mají být vytvořena v Open- Audit.';

$GLOBALS["lang"]['The collectors internal IP used when it runs a discovery.'] = 'Náběrčí vnitřní IP používá při spuštění objevu.';

$GLOBALS["lang"]['The column name from the foreign table. Should be one of: class, environment, status, type or menu_category.'] = 'Název sloupce ze zahraniční tabulky. Měl by být jedním z: třídy, prostředí, stavu, typu nebo menu _ kategorie.';

$GLOBALS["lang"]['The command executed upon the target device or Open-AudIT server code executed during discovery.'] = 'Příkaz proveden na cílovém zařízení nebo Open- Audit server kód proveden při objevování.';

$GLOBALS["lang"]['The configuration of your cluster can be: <code>active/active</code>, <code>active/passive</code>, <code>N+1</code>, <code>N+M</code>, <code>N-to-1</code>, <code>N-to-N</code>, <code>other</code> or blank.'] = 'Konfigurace vašeho seskupení může být: < kód > aktivní / aktivní < / kód >, < kód > aktivní / pasivní < / kód >, < kód > N + 1 < / kód >, < kód > N + M < / kód >, < kód > N-to-1 < / kód >, < kód > N-to-N < / kód >, < kód > ostatní < / kód > nebo prázdný.';

$GLOBALS["lang"]['The credentials password. If the credentials are an SSH Key, this is the password used to unlock the key and is optional.'] = 'Heslo. Pokud jsou pověřovací listiny SSH Key, toto je heslo používané k odemknutí klíče a je volitelné.';

$GLOBALS["lang"]['The credentials username.'] = 'Jméno uživatele.';

$GLOBALS["lang"]['The current status of the Cloud Discovery.'] = 'Současný stav Cloud Discovery.';

$GLOBALS["lang"]['The current status of the discovery.'] = 'Současný stav objevu.';

$GLOBALS["lang"]['The dashboard that will be shown by default for this user. Links to <code>dashboards.id</code>.'] = 'Přístrojová deska, která bude zobrazena ve výchozím nastavení pro tohoto uživatele. Odkazy na < kód > dashboards.id < / kód >.';

$GLOBALS["lang"]['The database version and web version are inconsistent.'] = 'Databázová verze a webová verze jsou nekonzistentní.';

$GLOBALS["lang"]['The date of license expiration.'] = 'Datum vypršení platnosti licence.';

$GLOBALS["lang"]['The date the software is discontinued by the manufacturer. Usually replaced by a newer version. Maintenance may still be available.'] = 'Datum ukončení platnosti softwaru výrobcem. Obvykle nahrazena novější verzí. Údržba může být stále k dispozici.';

$GLOBALS["lang"]['The date the software no longer receives updates and is effectively discontinued altogether. Maintenance is discontinued.'] = 'Datum, kdy software již neobdrží aktualizace a je účinně zcela přerušen. Udržování je přerušeno.';

$GLOBALS["lang"]['The date this item was changed or added (read only). NOTE - This is the timestamp from the server.'] = 'Datum, kdy byla tato položka změněna nebo přidána (pouze ke čtení). POZNÁMKA - Toto je časové razítko ze serveru.';

$GLOBALS["lang"]['The date/time when this result was created.'] = 'Datum / čas, kdy byl výsledek vytvořen.';

$GLOBALS["lang"]['The day of the month when this task should execute (* for every day).'] = 'Den měsíce, kdy má být tento úkol vykonán (* za každý den).';

$GLOBALS["lang"]['The day of the week when this task should execute (* for every day).'] = 'Den v týdnu, kdy má být tento úkol vykonán (* za každý den).';

$GLOBALS["lang"]['The default language assigned to any user created by this method.'] = 'Výchozí jazyk přidělený každému uživateli vytvořenému touto metodou.';

$GLOBALS["lang"]['The device must respond to an Nmap ping before it is considered online.'] = 'Zařízení musí reagovat na ping Nmap předtím, než je považováno za online.';

$GLOBALS["lang"]['The device within Open-AudIT. Links to <code>devices.id</code>.'] = 'Zařízení v Open- Audit. Odkazy na < kód > devices.id < / kód >.';

$GLOBALS["lang"]['The direct link for the script is'] = 'Přímý odkaz pro skript je';

$GLOBALS["lang"]['The email address of the reciever'] = 'E-mailová adresa příjemce';

$GLOBALS["lang"]['The entire associated baseline this result is from.'] = 'Tento výsledek je odvozen z celé související výchozí hodnoty.';

$GLOBALS["lang"]['The externally referenced location ID. Usually populated by Cloud audits.'] = 'Identifikace externě odkazovaného místa. Obvykle osídlené audity v Cloudu.';

$GLOBALS["lang"]['The first time that Open-AudIT retrieved details of this device.'] = 'Poprvé, kdy Open- Audit získal detaily tohoto zařízení.';

$GLOBALS["lang"]['The floor the rack is located on.'] = 'Podlaha racku se nachází na.';

$GLOBALS["lang"]['The foreign table to reference. Should be one of: devices, locations, orgs or queries.'] = 'Cizí tabulka k referenci. Měl by být jedním z: zařízení, umístění, orgy nebo dotazy.';

$GLOBALS["lang"]['The format used for the output to be emailed.'] = 'Formát používaný pro emailový výstup.';

$GLOBALS["lang"]['The fully qualified column upon which to group by. NOTE: When type = traffic, this represents the red query id.'] = 'Plně kvalifikovaný sloupec, podle kterého se má seskupit. POZNÁMKA: Pokud typ = provoz, to představuje červený dotaz id.';

$GLOBALS["lang"]['The fully qualified table.column. Multiple may be provided, separated by a comma (no spaces).'] = 'Plně kvalifikovaný stůl. Násobek může být poskytnut, oddělený čárkou (bez mezer).';

$GLOBALS["lang"]['The group of devices on which the baseline was run against.'] = 'Skupina zařízení, na nichž byla základní hodnota spuštěna proti.';

$GLOBALS["lang"]['The group that provides a list of devices for the integration. Links to <code>groups.id</code>.'] = 'Skupina, která poskytuje seznam zařízení pro integraci. Odkazy na < kód > groups.id < / kód >.';

$GLOBALS["lang"]['The hour of the day when this task should execute (* for every hour).'] = 'Hodina dne, kdy má být tento úkol vykonán (* za každou hodinu).';

$GLOBALS["lang"]['The id of the linked device. Links to <code>devices.id</code>'] = 'Identifikace propojeného zařízení. Odkazy na < kód > device.id < / kód >';

$GLOBALS["lang"]['The identifier column (integer) in the database (read only).'] = 'Identifikátor sloupce (celé číslo) v databázi (pouze pro čtení).';

$GLOBALS["lang"]['The importance of this baseline (not used yet).'] = 'Význam této výchozí hodnoty (dosud se nepoužívá).';

$GLOBALS["lang"]['The integer of severity.'] = 'Celé číslo závažnosti.';

$GLOBALS["lang"]['The ip address of the Auth method.'] = 'IP adresa metody Auth.';

$GLOBALS["lang"]['The language to translate the web interface into for the user.'] = 'Jazyk přeložit webové rozhraní do pro uživatele.';

$GLOBALS["lang"]['The last date and time this item was executed (read only).'] = 'Poslední datum a čas provedení této položky (pouze ke čtení).';

$GLOBALS["lang"]['The last time that Open-AudIT retrieved details of this device.'] = 'Naposledy, když Open- Audit získal detaily tohoto zařízení.';

$GLOBALS["lang"]['The last time this benchmarks was executed.'] = 'Naposledy byla tato měřítka provedena.';

$GLOBALS["lang"]['The last time this integration was run.'] = 'Naposledy byla tato integrace vedena.';

$GLOBALS["lang"]['The line number assigned by the provider to the line at this end of the connection.'] = 'Číslo řádku přidělené poskytovatelem na řádku na tomto konci spojení.';

$GLOBALS["lang"]['The location the rack is located in. Links to <code>locations.id</code>.'] = 'Umístění rack se nachází v. Odkazy na < kód > locations.id < / kód >.';

$GLOBALS["lang"]['The locations address.'] = 'Adresa míst.';

$GLOBALS["lang"]['The locations area.'] = 'Místo.';

$GLOBALS["lang"]['The locations city.'] = 'Město lokací.';

$GLOBALS["lang"]['The locations country.'] = 'Místo země.';

$GLOBALS["lang"]['The locations district.'] = 'Oblast lokací.';

$GLOBALS["lang"]['The locations latitude.'] = 'Lokalita je široká.';

$GLOBALS["lang"]['The locations level.'] = 'Poloha.';

$GLOBALS["lang"]['The locations longitude.'] = 'Místo délky.';

$GLOBALS["lang"]['The locations phone.'] = 'Telefon.';

$GLOBALS["lang"]['The locations postcode.'] = 'PSČ míst.';

$GLOBALS["lang"]['The locations region.'] = 'Oblast lokací.';

$GLOBALS["lang"]['The locations room.'] = 'Místnost míst.';

$GLOBALS["lang"]['The locations state.'] = 'Místo stavu.';

$GLOBALS["lang"]['The locations suburb.'] = 'Na předměstí.';

$GLOBALS["lang"]['The locations suite.'] = 'Lokace apartmá.';

$GLOBALS["lang"]['The maximum physical weight (in KGs) this rack can hold.'] = 'Maximální tělesná hmotnost (v KG), který tento rack vydrží.';

$GLOBALS["lang"]['The maximum total BTUs this rack is rated for.'] = 'Maximální celkový BTU tento rack je hodnocen pro.';

$GLOBALS["lang"]['The minute of the hour when this task should execute (* for every minute).'] = 'Minuta hodiny, kdy by tento úkol měl být proveden (* za každou minutu).';

$GLOBALS["lang"]['The month of the year when this task should execute (* for every month).'] = 'Měsíc roku, kdy má být tento úkol vykonán (* za každý měsíc).';

$GLOBALS["lang"]['The name given to this item. Ideally it should be unique.'] = 'Název uvedený v této položce. V ideálním případě by to mělo být jedinečné.';

$GLOBALS["lang"]['The name given to this user (used to login). Ideally it should be unique.'] = 'Jméno dané tomuto uživateli (používá se k přihlášení). V ideálním případě by to mělo být jedinečné.';

$GLOBALS["lang"]['The name of the associated cloud (if required).'] = 'Název příslušného cloudu (je-li požadován).';

$GLOBALS["lang"]['The name of the software package, as audited by Open-AudIT. Use the percent sign % as a wildcard.'] = 'Název softwarového balíčku, který ověřil Open- Audit. Použijte procento znaménka% jako divokou kartu.';

$GLOBALS["lang"]['The name of the user who last changed or added this item (read only).'] = 'Jméno uživatele, který tuto položku naposledy změnil nebo přidal (pouze ke čtení).';

$GLOBALS["lang"]['The name provided by the provider.'] = 'Jméno poskytovatele.';

$GLOBALS["lang"]['The network in the format 192.168.1.0/24.'] = 'Síť ve formátu 192.168.1.0 /24.';

$GLOBALS["lang"]['The network subnet to execute the discovery on.'] = 'Síťová podsíť k provedení objevu.';

$GLOBALS["lang"]['The number of RUs this device occupies.'] = 'Počet ŽP, které toto zařízení využívá.';

$GLOBALS["lang"]['The number of associated locations. Links to <code>locations.cloud_id</code>.'] = 'Počet přidružených míst. Odkazy na < kód > locations.cloud _ id < / kód >.';

$GLOBALS["lang"]['The number of associated networks. Links to <code>networks.cloud_id</code>.'] = 'Počet přidružených sítí. Odkazy na < code > networks.cloud _ id < / code >.';

$GLOBALS["lang"]['The number of audited devices in this cloud. Links to <code>devices.cloud_id</code> and <code>devices.serial</code>.'] = 'Počet kontrolovaných zařízení v tomto cloudu. Odkazy na < code > devices.cloud _ id < / code > a < code > devices.serial < / code >.';

$GLOBALS["lang"]['The number of devices found by this discovery.'] = 'Počet zařízení nalezených tímto objevem.';

$GLOBALS["lang"]['The number of devices in the associated group.'] = 'Počet zařízení v přidružené skupině.';

$GLOBALS["lang"]['The number of devices in this cloud with a state of running. Links to <code>devices.cloud_id</code> and <code>devices.instance_state</code>.'] = 'Počet zařízení v tomto cloudu se stavem běhu. Odkazy na < code > devices.cloud _ id < / code > a < code > devices.instance _ state < / code >.';

$GLOBALS["lang"]['The number of devices in this cloud with a state of stopped. Links to <code>devices.cloud_id</code> and <code>devices.instance_state</code>.'] = 'Počet zařízení v tomto cloudu se stavu zastavil. Odkazy na < code > devices.cloud _ id < / code > a < code > devices.instance _ state < / code >.';

$GLOBALS["lang"]['The number of devices in this cloud. Links to <code>devices.cloud_id</code>.'] = 'Počet zařízení v tomto cloudu. Odkazy na < kód > devices.cloud _ id < / kód >.';

$GLOBALS["lang"]['The number of devices this benchmark will be executed upon. Derived from <code>benchmarks.devices</code>.'] = 'Počet zařízení, na která bude tato referenční hodnota provedena. Odvozené z < kódu > benchmarks.setts < / kód >.';

$GLOBALS["lang"]['The number of devices to limit this discovery to.'] = 'Počet zařízení k omezení tohoto objevu.';

$GLOBALS["lang"]['The number of purchased licenses.'] = 'Počet zakoupených licencí.';

$GLOBALS["lang"]['The number of seconds to try and communicate with the target IP.'] = 'Počet sekund pro pokus o komunikaci s cílovou IP.';

$GLOBALS["lang"]['The optional secondary column. NOTE: When type = traffic, this represents the yellow query id.'] = 'Volitelný sekundární sloupec. POZNÁMKA: Pokud typ = provoz, to představuje žlutý dotaz id.';

$GLOBALS["lang"]['The optional third column. NOTE: When type = traffic, this represents the green query id.'] = 'Volitelný třetí sloupec. POZNÁMKA: Pokud typ = provoz, to představuje zelený dotaz id.';

$GLOBALS["lang"]['The orientation of this device.'] = 'Orientace tohoto zařízení.';

$GLOBALS["lang"]['The password for the dn_account attribute.'] = 'Heslo pro atribut dn _ account.';

$GLOBALS["lang"]['The password used to access the external system.'] = 'Heslo používané pro přístup k externímu systému.';

$GLOBALS["lang"]['The path to the file or directory.'] = 'Cesta do souboru nebo adresáře.';

$GLOBALS["lang"]['The path to the file or directory. Directories should end with a trailing slash.'] = 'Cesta do souboru nebo adresáře. Adresáře by měly skončit stopáním.';

$GLOBALS["lang"]['The physical depth (in CMs) of the rack.'] = 'Fyzická hloubka (v CM) racku.';

$GLOBALS["lang"]['The physical height (in CMs) of the rack.'] = 'Fyzická výška racku.';

$GLOBALS["lang"]['The physical weight (in KGs) of the rack at present.'] = 'Fyzická hmotnost (v kg) racku v současné době.';

$GLOBALS["lang"]['The physical weight (in KGs) of the rack when empty.'] = 'Fyzická hmotnost (v kg) stojanu, když je prázdný.';

$GLOBALS["lang"]['The physical width (in CMs) of the rack.'] = 'Fyzická šířka (v CM) racku.';

$GLOBALS["lang"]['The pod (if any) that this rack is part of.'] = 'Modul (pokud existuje), že tento rack je součástí.';

$GLOBALS["lang"]['The power circuit this rack attaches to.'] = 'Napájecí obvod, ke kterému se tento rack váže.';

$GLOBALS["lang"]['The primary database table upon which to base this widget.'] = 'Primární tabulka databáze, na které se zakládá tento widget.';

$GLOBALS["lang"]['The process identifier of this queue item.'] = 'Identifikátor procesu této položky fronty.';

$GLOBALS["lang"]['The process that was used last to retrieve details about the device'] = 'Proces, který byl použit jako poslední k získání detailů o zařízení';

$GLOBALS["lang"]['The query that provides a list of devices for the integration. Links to <code>queries.id</code>.'] = 'Dotaz, který poskytuje seznam zařízení pro integraci. Odkazy na < kód > queries.id < / kód >.';

$GLOBALS["lang"]['The rack asset number.'] = 'Číslo aktiva rack.';

$GLOBALS["lang"]['The rack asset tag.'] = 'Značka aktiva rack.';

$GLOBALS["lang"]['The rack bar code.'] = 'Kód věšáku.';

$GLOBALS["lang"]['The rack model.'] = 'Model racku.';

$GLOBALS["lang"]['The rack serial.'] = 'Série racků.';

$GLOBALS["lang"]['The rack series.'] = 'Série racků.';

$GLOBALS["lang"]['The rack this device is located in. Links to <code>racks.id</code>.'] = 'Věšák, ve kterém je to zařízení. Odkazy na < kód > criss.id < / kód >.';

$GLOBALS["lang"]['The regular domain notation of your directory. Eg - <code>open-audit.lan</code>.'] = 'Pravidelná notace domény vašeho adresáře. Eg - < kód > open- audit.lan < / kód >.';

$GLOBALS["lang"]['The result of the command.'] = 'Výsledek příkazu.';

$GLOBALS["lang"]['The room the rack is located in.'] = 'Pokoj rack se nachází v.';

$GLOBALS["lang"]['The row the rack is located in.'] = 'Řádek rack se nachází v.';

$GLOBALS["lang"]['The secret key used in conjunction with your AWS EC2 API key.'] = 'Tajný klíč použitý ve spojení s vaším AWS EC2 API klíčem.';

$GLOBALS["lang"]['The software end-of-life date.'] = 'Datum konce života.';

$GLOBALS["lang"]['The software end-of-service-life date.'] = 'Datum konce životnosti softwaru.';

$GLOBALS["lang"]['The specific database column from the specified database table.'] = 'Specifický sloupec databáze ze zadané tabulky databáze.';

$GLOBALS["lang"]['The specific database table.'] = 'Specifická tabulka databáze.';

$GLOBALS["lang"]['The standard Nmap timing options. We usually use -T4 (Aggressive) as this is recommended for a decent broadband or ethernet connection.'] = 'Standardní možnosti Nmap načasování. Obvykle používáme -T4 (Agresivní), protože to je doporučeno pro slušné širokopásmové nebo ethernetové připojení.';

$GLOBALS["lang"]['The status of this integration'] = 'Status této integrace';

$GLOBALS["lang"]['The status of this queued item.'] = 'Stav této položky.';

$GLOBALS["lang"]['The target IP this log entry referers to (if any).'] = 'Cílový IP tento záznam referenti na (pokud existuje).';

$GLOBALS["lang"]['The template for the link to be generated per result line.'] = 'Šablona pro odkaz, který má být vytvořen na řádek výsledku.';

$GLOBALS["lang"]['The text for the bottom of the chart in a line chart (only).'] = 'Text pro spodní část grafu v řádku grafu (pouze).';

$GLOBALS["lang"]['The text that is displayed.'] = 'Text, který je zobrazen.';

$GLOBALS["lang"]['The timestamp after which, this task should run. For example, run a task after the 1st June 2017 at 10am, set it to <code>2017-06-01 09:59:00</code>. This value should be zero padded (ie, 09, not 9). This value defaults to <code>2001-01-01 00:00:00</code> which means by default, a scheduled task will run at next scheduled execution time.'] = 'Časová známka, po které by měl tento úkol běžet. Například spustit úkol po 1. červnu 2017 v 10 hodin, nastavit na < kód > 2017-06-01 09: 59: 00 < / kód >. Tato hodnota by měla být nulová (tj. 09, ne 9). Tato hodnota selže na < code > 2001-01-01 00: 00: 00 < / code >, což znamená, že ve výchozím nastavení, bude plánovaný úkol probíhat v příštím plánovaném čase provedení.';

$GLOBALS["lang"]['The top 10, 100 or 1000 (or none) TCP ports commonly in use according to Nmap.'] = 'Top 10, 100 nebo 1000 (nebo žádné) TCP portů běžně používané podle Nmap.';

$GLOBALS["lang"]['The top 10, 100 or 1000 (or none) UDP ports commonly in use according to Nmap.'] = 'Top 10, 100 nebo 1000 (nebo žádné) UDP portů běžně používané podle Nmap.';

$GLOBALS["lang"]['The total BTU output by this rack.'] = 'Celkový BTU výstup tímto rackem.';

$GLOBALS["lang"]['The type of device.'] = 'Typ zařízení.';

$GLOBALS["lang"]['The type of organisation.'] = 'Typ organizace.';

$GLOBALS["lang"]['The type of rack (compute, power, network, etc).'] = 'Typ racku (výpočet, výkon, síť, atd.).';

$GLOBALS["lang"]['The type of task to run. One of: baseline, benchmark, cloud discovery, discovery, integration, report, query.'] = 'Typ úkolu. Jeden z: základní, referenční, objev mraků, objev, integrace, zpráva, dotaz.';

$GLOBALS["lang"]['The type of the integration (usually named after the external system).'] = 'Typ integrace (obvykle pojmenovaný po vnějším systému).';

$GLOBALS["lang"]['The unique identifier of this server.'] = 'Jedinečný identifikátor tohoto serveru.';

$GLOBALS["lang"]['The user account this collector uses. Links to <code>users.id</code>.'] = 'Uživatelský účet tohoto sběratele. Odkazy na < kód > users.id < / kód >.';

$GLOBALS["lang"]['The username used to access the external system.'] = 'Uživatelské jméno používané k přístupu do vnějšího systému.';

$GLOBALS["lang"]['The users email address.'] = 'Uživatelé e-mailovou adresu.';

$GLOBALS["lang"]['The usual hours of operation at this site.'] = 'Obvyklé hodiny provozu na tomto místě.';

$GLOBALS["lang"]['The value assigned to the item.'] = 'Hodnota přiřazená položce.';

$GLOBALS["lang"]['The value that is stored for this particular item.'] = 'Hodnota, která je uložena pro tuto konkrétní položku.';

$GLOBALS["lang"]['The web directory on the host that Open-AudIT is installed (requires a trailing slash).'] = 'Webový adresář na hostiteli, který je nainstalován Open- AudiT (vyžaduje vlečné lomítko).';

$GLOBALS["lang"]['The widget at position '] = 'Widget v pozici';

$GLOBALS["lang"]['The width of this device.'] = 'Šířka tohoto zařízení.';

$GLOBALS["lang"]['Then'] = 'Pak';

$GLOBALS["lang"]['This attribute is stored as a JSON object. It is the list of all collections and contains the collection name along with <code>c</code>, <code>r</code>, <code>u</code> and,or <code>d</code> which represent create, read, update and delete. These are the actions a user can perform on items from that particular collection.'] = 'Tento atribut je uložen jako JSON objekt. Jedná se o seznam všech sbírek a obsahuje název sbírky spolu s < kódem > c < / kód >, < kód > r < / kód >, < kód > u < / kód > a, nebo < kód > d < / kód >, který představuje vytvoření, čtení, aktualizaci a odstranění. To jsou akce, které uživatel může provádět na položky z této konkrétní sbírky.';

$GLOBALS["lang"]['This can be either a varchar (a text field), a list (a list of values that can be selected) or a date.'] = 'Může to být buď varchar (textové pole), seznam (seznam hodnot, které lze vybrat) nebo datum.';

$GLOBALS["lang"]['This collectors universally unique identifier.'] = 'Tento sběratel univerzálně jedinečný identifikátor.';

$GLOBALS["lang"]['This description is auto-populated and should ideally be left as-is.'] = 'Tento popis je automaticky obsazen a měl by být ideálně ponechán jako.';

$GLOBALS["lang"]['This feature requires a Professional or an Enterprise license.'] = 'Tato funkce vyžaduje profesionální nebo Enterprise licenci.';

$GLOBALS["lang"]['This is generally the primary column, unless otherwise configured. NOTE: When type = traffic, this represents the secondary text.'] = 'Toto je obvykle primární sloupec, není-li nakonfigurováno jinak. POZNÁMKA: Pokud typ = provoz, představuje to sekundární text.';

$GLOBALS["lang"]['This item must match the value of the attribute selected or contains the ID of the query to be used.'] = 'Tato položka musí odpovídat hodnotě vybraného atributu nebo obsahuje ID otázky, která má být použita.';

$GLOBALS["lang"]['This item must match the value of the attribute selected.'] = 'Tato položka musí odpovídat hodnotě vybraného atributu.';

$GLOBALS["lang"]['This license expires on'] = 'Tato licence vyprší na';

$GLOBALS["lang"]['This should be set to either 1 or the height of the rack.'] = 'To by mělo být nastaveno buď na 1 nebo na výšku stojanu.';

$GLOBALS["lang"]['This will auto-populate.'] = 'Tohle bude mít vlastní populaci.';

$GLOBALS["lang"]['This will considerably slow the discovery scan.'] = 'Tohle značně zpomalí sken objevů.';

$GLOBALS["lang"]['Thursday'] = 'Čtvrtek';

$GLOBALS["lang"]['time'] = 'Čas';

$GLOBALS["lang"]['Time'] = 'Čas';

$GLOBALS["lang"]['time_caption'] = 'Časový záznam';

$GLOBALS["lang"]['Time Caption'] = 'Časový záznam';

$GLOBALS["lang"]['time_daylight'] = 'Denní světlo';

$GLOBALS["lang"]['Time Daylight'] = 'Denní světlo';

$GLOBALS["lang"]['Time to Execute'] = 'Čas provést';

$GLOBALS["lang"]['timeout'] = 'Timeout';

$GLOBALS["lang"]['Timeout'] = 'Timeout';

$GLOBALS["lang"]['Timeout Per Target (Seconds)'] = 'Timeout per target (Seconds)';

$GLOBALS["lang"]['Timesatamp'] = 'Časový plán';

$GLOBALS["lang"]['Timestamp'] = 'Časový údaj';

$GLOBALS["lang"]['timing'] = 'Načasování';

$GLOBALS["lang"]['Timing'] = 'Načasování';

$GLOBALS["lang"]['Timor-Leste'] = 'Timor- Leste';

$GLOBALS["lang"]['Title'] = 'Název';

$GLOBALS["lang"]['Togo'] = 'Togo';

$GLOBALS["lang"]['Tokelau'] = 'Tokelau';

$GLOBALS["lang"]['Tonga'] = 'Tonga';

$GLOBALS["lang"]['toolbar_style'] = 'Styl nástrojové lišty';

$GLOBALS["lang"]['Toolbar Style'] = 'Styl nástrojové lišty';

$GLOBALS["lang"]['Top Nmap TCP Ports'] = 'Top Nmap TCP porty';

$GLOBALS["lang"]['Top Nmap UDP Ports'] = 'Top Nmap UDP Ports';

$GLOBALS["lang"]['Traditional Chinese'] = 'Tradiční čínština';

$GLOBALS["lang"]['Traffic Light'] = 'Dopravní světlo';

$GLOBALS["lang"]['Trinidad and Tobago'] = 'Trinidad a Tobago';

$GLOBALS["lang"]['Tuesday'] = 'Úterý';

$GLOBALS["lang"]['Tunisia'] = 'Tunisko';

$GLOBALS["lang"]['Turkey'] = 'Turecko';

$GLOBALS["lang"]['Turkmenistan'] = 'Turkmenistán';

$GLOBALS["lang"]['Turks and Caicos Islands'] = 'Turks a Caicos';

$GLOBALS["lang"]['Tuvalu'] = 'Tuvalu';

$GLOBALS["lang"]['tx_bitrate'] = 'Tx Bitrate';

$GLOBALS["lang"]['Tx Bitrate'] = 'Tx Bitrate';

$GLOBALS["lang"]['tx_freq'] = 'Tx Freq';

$GLOBALS["lang"]['Tx Freq'] = 'Tx Freq';

$GLOBALS["lang"]['tx_level'] = 'Úroveň Tx';

$GLOBALS["lang"]['Tx Level'] = 'Úroveň Tx';

$GLOBALS["lang"]['tx_power'] = 'Tx výkon';

$GLOBALS["lang"]['Tx Power'] = 'Tx výkon';

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

$GLOBALS["lang"]['uid'] = 'Uid';

$GLOBALS["lang"]['Uid'] = 'Uid';

$GLOBALS["lang"]['Ukraine'] = 'Ukrajina';

$GLOBALS["lang"]['uninstall'] = 'Odinstalovat';

$GLOBALS["lang"]['Uninstall'] = 'Odinstalovat';

$GLOBALS["lang"]['Uninstall the Agent'] = 'Odinstalovat agent';

$GLOBALS["lang"]['United Arab Emirates'] = 'Spojené arabské emiráty';

$GLOBALS["lang"]['United Kingdom'] = 'Spojené království';

$GLOBALS["lang"]['United States Minor Outlying Islands'] = 'Menší odlehlé ostrovy Spojených států amerických';

$GLOBALS["lang"]['United States Virgin Islands'] = 'Spojené státy americké Panenské ostrovy';

$GLOBALS["lang"]['United States of America'] = 'Spojené státy americké';

$GLOBALS["lang"]['Unknown'] = 'Neznámé';

$GLOBALS["lang"]['unlock_pin'] = 'Odemknout Pin';

$GLOBALS["lang"]['Unlock Pin'] = 'Odemknout Pin';

$GLOBALS["lang"]['Unscheduled'] = 'Neplánované';

$GLOBALS["lang"]['Unused as at 5.2.0.'] = 'Nevyužito jako 5.2.0.';

$GLOBALS["lang"]['Unused.'] = 'Nevyužito.';

$GLOBALS["lang"]['Update'] = 'Aktualizovat';

$GLOBALS["lang"]['update_external_count'] = 'Aktualizovat externí počet';

$GLOBALS["lang"]['Update External Count'] = 'Aktualizovat externí počet';

$GLOBALS["lang"]['update_external_from_internal'] = 'Aktualizovat externí z vnitřní';

$GLOBALS["lang"]['Update External From Internal'] = 'Aktualizovat externí z vnitřní';

$GLOBALS["lang"]['update_internal_count'] = 'Aktualizovat vnitřní počet';

$GLOBALS["lang"]['Update Internal Count'] = 'Aktualizovat vnitřní počet';

$GLOBALS["lang"]['update_internal_from_external'] = 'Aktualizovat interní z externího';

$GLOBALS["lang"]['Update Internal From External'] = 'Aktualizovat interní z externího';

$GLOBALS["lang"]['Update NMIS Devices from Open-AudIT'] = 'Aktualizace zařízení NMIS z Open- Audit';

$GLOBALS["lang"]['Update Open-AudIT Devices from '] = 'Aktualizovat Open- Audit Zařízení';

$GLOBALS["lang"]['Update Open-AudIT Devices from NMIS'] = 'Aktualizovat Open- Audit Zařízení z NMIS';

$GLOBALS["lang"]['updated_at'] = 'Aktualizováno';

$GLOBALS["lang"]['Updated At'] = 'Aktualizováno';

$GLOBALS["lang"]['Updated each time discovery has been executed with IPs detected to be responding.'] = 'Aktualizováno pokaždé, když byl proveden objev s IP zjištěno, že reagují.';

$GLOBALS["lang"]['Updated each time discovery has been executed with IPs that have been scanned by Nmap.'] = 'Aktualizováno každé objevení bylo provedeno s IP, které byly skenovány Nmap.';

$GLOBALS["lang"]['Updated each time discovery has been executed with devices we were able to audit.'] = 'Aktualizováno pokaždé, když byl objev proveden pomocí zařízení, které jsme byli schopni zkontrolovat.';

$GLOBALS["lang"]['Updated each time discovery has been executed with devices we were able to query.'] = 'Aktualizováno pokaždé, když byl objev proveden pomocí zařízení, na které jsme se mohli zeptat.';

$GLOBALS["lang"]['Updated each time discovery has been executed.'] = 'Aktualizováno pokaždé, když byl proveden objev.';

$GLOBALS["lang"]['Updated each time the discovery has been executed.'] = 'Aktualizováno pokaždé, když byl objev popraven.';

$GLOBALS["lang"]['Updated each time the discovery has completed execution.'] = 'Aktualizováno pokaždé, když objev dokončil popravu.';

$GLOBALS["lang"]['Upgrade'] = 'Aktualizovat';

$GLOBALS["lang"]['Upload an audit result file'] = 'Nahrát soubor výsledků auditu';

$GLOBALS["lang"]['Upper Case'] = 'Horní pouzdro';

$GLOBALS["lang"]['uptime'] = 'Aktualizace';

$GLOBALS["lang"]['Uptime'] = 'Aktualizace';

$GLOBALS["lang"]['url'] = 'Url';

$GLOBALS["lang"]['Url'] = 'Url';

$GLOBALS["lang"]['Uruguay, Eastern Republic of'] = 'Uruguay, Východní republika';

$GLOBALS["lang"]['usb'] = 'Usb';

$GLOBALS["lang"]['Usb'] = 'Usb';

$GLOBALS["lang"]['use_authentication'] = 'Použít autentizaci';

$GLOBALS["lang"]['Use Authentication'] = 'Použít autentizaci';

$GLOBALS["lang"]['use_authorisation'] = 'Povolení používat';

$GLOBALS["lang"]['Use Authorisation'] = 'Povolení používat';

$GLOBALS["lang"]['Use SNMP'] = 'Použít SNMP';

$GLOBALS["lang"]['Use SSH'] = 'Použít SSH';

$GLOBALS["lang"]['Use Secure (LDAPS)'] = 'Používejte bezpečné (LDAPS)';

$GLOBALS["lang"]['Use Service Version Detection'] = 'Použít Service Version Detection';

$GLOBALS["lang"]['Use WMI'] = 'Použít WMI';

$GLOBALS["lang"]['Use for Authentication'] = 'Použití pro ověření';

$GLOBALS["lang"]['Use for Roles'] = 'Použití pro roly';

$GLOBALS["lang"]['used'] = 'Použité';

$GLOBALS["lang"]['Used'] = 'Použité';

$GLOBALS["lang"]['used_count'] = 'Použitý počet';

$GLOBALS["lang"]['Used Count'] = 'Použitý počet';

$GLOBALS["lang"]['used_percent'] = 'Použitý procentní podíl';

$GLOBALS["lang"]['Used Percent'] = 'Použitý procentní podíl';

$GLOBALS["lang"]['Used by OpenLDAP only.'] = 'Používá pouze OpenLDAP.';

$GLOBALS["lang"]['Used internally when discovering a single device.'] = 'Používá se interně při objevování jediného zařízení.';

$GLOBALS["lang"]['Used internally when discovering a single device. Links to <code>devices.id</code>.'] = 'Používá se interně při objevování jediného zařízení. Odkazy na < kód > devices.id < / kód >.';

$GLOBALS["lang"]['Used when LDAP servers have been configured to populate a users details - this includes the Orgs to which they have access. If a user is in this LDAP group, they are assigned this org.'] = 'Používá se při konfiguraci LDAP serverů pro zalidnění uživatelských detailů - to zahrnuje Orgs, k nimž mají přístup. Pokud je uživatel v této LDAP skupině, jsou přiřazeny tento org.';

$GLOBALS["lang"]['Used when LDAP servers have been configured to populate a users details - this includes the Roles which they are assigned. If a user is in this LDAP group, they are assigned this role.'] = 'Používá se při konfiguraci LDAP serverů pro zalidnění uživatelských detailů - to zahrnuje Roles, které jsou přiřazeny. Pokud je uživatel v této LDAP skupině, jsou přiřazeny tuto roli.';

$GLOBALS["lang"]['Used when searching OpenLDAP to match a users uid to a groups members. Default of <code>memberUid</code>. Used by OpenLDAP only.'] = 'Používá se při vyhledávání OpenLDAP pro porovnání uživatelů uid se členy skupin. Výchozí < kód > memberUid < / kód >. Používá pouze OpenLDAP.';

$GLOBALS["lang"]['Used with Integrations and FirstWave monitoring applications.'] = 'Používá se s aplikací pro monitorování Integrations a FirstWave.';

$GLOBALS["lang"]['Used with Integrations and FirstWave monitoring applications. Set to y if working SNMP detected by discovery.'] = 'Používá se s aplikací pro monitorování Integrations a FirstWave. Nastavit na y, pokud pracuje SNMP detekován objevem.';

$GLOBALS["lang"]['user'] = 'Uživatel';

$GLOBALS["lang"]['User'] = 'Uživatel';

$GLOBALS["lang"]['User DN'] = 'Uživatel DN';

$GLOBALS["lang"]['user_group'] = 'Skupina uživatelů';

$GLOBALS["lang"]['User Group'] = 'Skupina uživatelů';

$GLOBALS["lang"]['user_id'] = 'ID uživatele';

$GLOBALS["lang"]['User ID'] = 'ID uživatele';

$GLOBALS["lang"]['User Membership Attribute'] = 'Atribut uživatele členství';

$GLOBALS["lang"]['user_name'] = 'Uživatelské jméno';

$GLOBALS["lang"]['User Name'] = 'Uživatelské jméno';

$GLOBALS["lang"]['User Policies'] = 'Uživatelské politiky';

$GLOBALS["lang"]['username'] = 'Uživatelské jméno';

$GLOBALS["lang"]['Username'] = 'Uživatelské jméno';

$GLOBALS["lang"]['users'] = 'Uživatelé';

$GLOBALS["lang"]['Users'] = 'Uživatelé';

$GLOBALS["lang"]['Usually Mb/s, from Location A.'] = 'Obvykle Mb / s, z Location A.';

$GLOBALS["lang"]['Usually Mb/s, from Location B.'] = 'Obvykle Mb / s, z Location B.';

$GLOBALS["lang"]['Usually Mb/s, to Location A.'] = 'Obvykle Mb / s, na místo A.';

$GLOBALS["lang"]['Usually Mb/s, to Location B.'] = 'Obvykle Mb / s, na místo B.';

$GLOBALS["lang"]['Uzbekistan'] = 'Uzbekistán';

$GLOBALS["lang"]['valid_from'] = 'Platné od';

$GLOBALS["lang"]['Valid From'] = 'Platné od';

$GLOBALS["lang"]['valid_from_raw'] = 'Platné od syrového';

$GLOBALS["lang"]['Valid From Raw'] = 'Platné od syrového';

$GLOBALS["lang"]['valid_to'] = 'Platné do';

$GLOBALS["lang"]['Valid To'] = 'Platné do';

$GLOBALS["lang"]['valid_to_raw'] = 'Platné pro syrové';

$GLOBALS["lang"]['Valid To Raw'] = 'Platné pro syrové';

$GLOBALS["lang"]['Valid Values'] = 'Platné hodnoty';

$GLOBALS["lang"]['value'] = 'Hodnota';

$GLOBALS["lang"]['Value'] = 'Hodnota';

$GLOBALS["lang"]['values'] = 'Hodnoty';

$GLOBALS["lang"]['Values'] = 'Hodnoty';

$GLOBALS["lang"]['Vanuatu'] = 'Vanuatu';

$GLOBALS["lang"]['VarChar'] = 'VarChar';

$GLOBALS["lang"]['Varchar'] = 'Varchar';

$GLOBALS["lang"]['variable'] = 'Proměnná';

$GLOBALS["lang"]['Variable'] = 'Proměnná';

$GLOBALS["lang"]['vendor'] = 'Prodejce';

$GLOBALS["lang"]['Vendor'] = 'Prodejce';

$GLOBALS["lang"]['Venezuela'] = 'Venezuela';

$GLOBALS["lang"]['version'] = 'Verze';

$GLOBALS["lang"]['Version'] = 'Verze';

$GLOBALS["lang"]['version_padded'] = 'Name';

$GLOBALS["lang"]['Version Padded'] = 'Name';

$GLOBALS["lang"]['version_string'] = 'Verze String';

$GLOBALS["lang"]['Version String'] = 'Verze String';

$GLOBALS["lang"]['video'] = 'Video';

$GLOBALS["lang"]['Video'] = 'Video';

$GLOBALS["lang"]['Vietnam'] = 'Vietnam';

$GLOBALS["lang"]['View'] = 'Pohled';

$GLOBALS["lang"]['View All'] = 'Zobrazit vše';

$GLOBALS["lang"]['View Details'] = 'Zobrazit detaily';

$GLOBALS["lang"]['View Device'] = 'Zobrazit zařízení';

$GLOBALS["lang"]['View Discovery'] = 'Zobrazit Discovery';

$GLOBALS["lang"]['View Policy'] = 'Zobrazit podmínky';

$GLOBALS["lang"]['Virtual Private Network'] = 'Virtuální privátní síť';

$GLOBALS["lang"]['Virtualisation'] = 'Virtualizace';

$GLOBALS["lang"]['Visit our YouTube channel for instructional videos.'] = 'Navštivte náš kanál YouTube pro instruktážní videa.';

$GLOBALS["lang"]['vm'] = 'Vm';

$GLOBALS["lang"]['Vm'] = 'Vm';

$GLOBALS["lang"]['vm_device_id'] = 'Vm ID zařízení';

$GLOBALS["lang"]['Vm Device ID'] = 'Vm ID zařízení';

$GLOBALS["lang"]['vm_group'] = 'Skupina Vm';

$GLOBALS["lang"]['Vm Group'] = 'Skupina Vm';

$GLOBALS["lang"]['vm_ident'] = 'Vm Ident';

$GLOBALS["lang"]['Vm Ident'] = 'Vm Ident';

$GLOBALS["lang"]['vm_server_name'] = 'Name';

$GLOBALS["lang"]['Vm Server Name'] = 'Name';

$GLOBALS["lang"]['WHERE'] = 'KDE';

$GLOBALS["lang"]['wall_port'] = 'Name';

$GLOBALS["lang"]['Wall Port'] = 'Name';

$GLOBALS["lang"]['Wallis and Futuna'] = 'Wallis a Futuna';

$GLOBALS["lang"]['Want to know more?'] = 'Chceš vědět víc?';

$GLOBALS["lang"]['Warning'] = 'Varování';

$GLOBALS["lang"]['warranty'] = 'Záruka';

$GLOBALS["lang"]['Warranty'] = 'Záruka';

$GLOBALS["lang"]['warranty_duration'] = 'Doba trvání záruky';

$GLOBALS["lang"]['Warranty Duration'] = 'Doba trvání záruky';

$GLOBALS["lang"]['warranty_expires'] = 'Záruční operace';

$GLOBALS["lang"]['Warranty Expires'] = 'Záruční operace';

$GLOBALS["lang"]['warranty_status'] = 'Stav záruky';

$GLOBALS["lang"]['Warranty Status'] = 'Stav záruky';

$GLOBALS["lang"]['warranty_type'] = 'Typ záruky';

$GLOBALS["lang"]['Warranty Type'] = 'Typ záruky';

$GLOBALS["lang"]['Web'] = 'Web';

$GLOBALS["lang"]['Webserver'] = 'Webserver';

$GLOBALS["lang"]['Wednesday'] = 'Středa';

$GLOBALS["lang"]['weight'] = 'Hmotnost';

$GLOBALS["lang"]['Weight'] = 'Hmotnost';

$GLOBALS["lang"]['weight_current'] = 'Hmotnost proudění';

$GLOBALS["lang"]['Weight Current'] = 'Hmotnost proudění';

$GLOBALS["lang"]['weight_empty'] = 'Hmotnost prázdná';

$GLOBALS["lang"]['Weight Empty'] = 'Hmotnost prázdná';

$GLOBALS["lang"]['weight_max'] = 'Hmotnost Max';

$GLOBALS["lang"]['Weight Max'] = 'Hmotnost Max';

$GLOBALS["lang"]['Welcome'] = 'Vítejte';

$GLOBALS["lang"]['Welcome Dashboard'] = 'Vítejte na palubní desce';

$GLOBALS["lang"]['Welcome to FirstWave Open-AudIT'] = 'Vítejte v FirstWave Open- Audit';

$GLOBALS["lang"]['Western Sahara'] = 'Západní Sahara';

$GLOBALS["lang"]['what'] = 'Co';

$GLOBALS["lang"]['What'] = 'Co';

$GLOBALS["lang"]['What is the purpose of this rack.'] = 'Jaký je účel tohoto stojanu.';

$GLOBALS["lang"]['What is the type of this location. Allowable types held in <code>attributes</code> table.'] = 'Jaký je typ tohoto místa. Povolené typy v tabulce < kód > atributy < / kód >.';

$GLOBALS["lang"]['when'] = 'Kdy';

$GLOBALS["lang"]['When'] = 'Kdy';

$GLOBALS["lang"]['When integrating devices from the external system, if the device doesnt exist in Open-AudIT should we create it?'] = 'Při integraci zařízení z externího systému, pokud zařízení neexistuje v Open- Audit bychom měli vytvořit?';

$GLOBALS["lang"]['When integrating devices from the external system, if the device has been updated in the external system should we update it in Open-AudIT?'] = 'Při integraci zařízení z externího systému, pokud bylo zařízení aktualizováno v externím systému, měli bychom ho aktualizovat v Open- Auditu?';

$GLOBALS["lang"]['When retrieve an external device, should we run discovery upon it?'] = 'Až získáme externí zařízení, měli bychom na něj spustit objev?';

$GLOBALS["lang"]['When this benchmark is scheduled to be executed. Derived from the associated <code>tasks.type</code> and <code>tasks.sub_resource_id</code>.'] = 'Pokud má být tato referenční hodnota provedena. Odvozené z přidruženého < code > tasks.type < / code > a < code > tacks.sub _ resource _ id < / code >.';

$GLOBALS["lang"]['When this log was created.'] = 'Když byl tento záznam vytvořen.';

$GLOBALS["lang"]['When this queue item started processing.'] = 'Když tato fronta položka začala zpracovávat.';

$GLOBALS["lang"]['When we receive an open port, should we attempt to test for the version of the service currently running upon it? This assists in confirming actual running services.'] = 'Když obdržíme otevřený port, měli bychom se pokusit otestovat verzi služby, která na něm právě probíhá? To pomáhá při potvrzení skutečné služby provozu.';

$GLOBALS["lang"]['where'] = 'Kde';

$GLOBALS["lang"]['Where'] = 'Kde';

$GLOBALS["lang"]['Where on the Device Details screen you would like to see this field appear.'] = 'Kde na obrazovce Device Details Details chcete vidět toto pole.';

$GLOBALS["lang"]['Where the rack is in the row.'] = 'Kde je věšák v řadě.';

$GLOBALS["lang"]['Which OS this benchmark applies to.'] = 'Na který OS se tato referenční hodnota vztahuje.';

$GLOBALS["lang"]['Which devices should Open-AudIT create from the external system (if any). Using All, None or a given Attribute.'] = 'Která zařízení by měla Open- Audit vytvořit z externího systému (pokud existuje). Použití All, Žádný nebo daný Atribut.';

$GLOBALS["lang"]['Which sub-menu should we display this query in.'] = 'V jakém podmenu bychom měli tento dotaz zobrazit.';

$GLOBALS["lang"]['Who made this rack.'] = 'Kdo to udělal.';

$GLOBALS["lang"]['Why do we exclude this policy?'] = 'Proč tuto politiku vylučujeme?';

$GLOBALS["lang"]['Wide Area Network'] = 'Široká síť oblastí';

$GLOBALS["lang"]['Widget'] = 'Widget';

$GLOBALS["lang"]['Widget # '] = 'Widget #';

$GLOBALS["lang"]['Widget Type'] = 'Typ widgetu';

$GLOBALS["lang"]['widgets'] = 'Widgety';

$GLOBALS["lang"]['Widgets'] = 'Widgety';

$GLOBALS["lang"]['width'] = 'Šířka';

$GLOBALS["lang"]['Width'] = 'Šířka';

$GLOBALS["lang"]['windows'] = 'Okna';

$GLOBALS["lang"]['Windows'] = 'Okna';

$GLOBALS["lang"]['Wireless Local Area Network'] = 'Bezdrátová síť místních oblastí';

$GLOBALS["lang"]['wmi_fails'] = 'Wmi fails';

$GLOBALS["lang"]['Wmi Fails'] = 'Wmi fails';

$GLOBALS["lang"]['wmi_timeout'] = 'Wmi Timeout';

$GLOBALS["lang"]['Wmi Timeout'] = 'Wmi Timeout';

$GLOBALS["lang"]['workgroup'] = 'Pracovní skupina';

$GLOBALS["lang"]['Workgroup'] = 'Pracovní skupina';

$GLOBALS["lang"]['Working Credentials'] = 'Pracovní úvěry';

$GLOBALS["lang"]['XML'] = 'XML';

$GLOBALS["lang"]['Yellow Query'] = 'Žlutý dotaz';

$GLOBALS["lang"]['Yemen'] = 'Jemen';

$GLOBALS["lang"]['Yes'] = 'Ano';

$GLOBALS["lang"]['You may want to copy and paste this URL in an email to your staff.'] = 'Můžete chtít zkopírovat a vložit tuto URL v e-mailu pro své zaměstnance.';

$GLOBALS["lang"]['You must delete your existing license before adding a new license.'] = 'Před přidáním nové licence musíte odstranit stávající licenci.';

$GLOBALS["lang"]['YouTube Tutorials'] = 'YouTube Tutorials';

$GLOBALS["lang"]['Your AWS EC2 API key.'] = 'Váš AWS EC2 API klíč.';

$GLOBALS["lang"]['Your Google Compute credentials as JSON.'] = 'Vaše Google Compute pověření jako JSON.';

$GLOBALS["lang"]['Your Licenses'] = 'Vaše licence';

$GLOBALS["lang"]['Your Microsoft Azure Client ID.'] = 'Váš Microsoft Azure Client ID.';

$GLOBALS["lang"]['Your Microsoft Azure Client Secret.'] = 'Vaše Microsoft Azure Client Secret.';

$GLOBALS["lang"]['Your Microsoft Azure Subscription ID.'] = 'Váš Microsoft Azure Subscription ID.';

$GLOBALS["lang"]['Your Microsoft Azure Tennant ID.'] = 'Váš Microsoft Azure Tennant ID.';

$GLOBALS["lang"]['Your SQL to select attributes that will populate this query.'] = 'Váš SQL vybrat atributy, které budou zalidnit tento dotaz.';

$GLOBALS["lang"]['Your SQL to select devices that will populate this group.'] = 'Váš SQL vybrat zařízení, které bude zalidnit tuto skupinu.';

$GLOBALS["lang"]['Your SSH key.'] = 'Váš SSH klíč.';

$GLOBALS["lang"]['Your access credentials, as per that clouds native API.'] = 'Vaše přístupové doklady, podle toho, co zamlžuje původní API.';

$GLOBALS["lang"]['Your description of the status of this connection (provisioned, retired, etc).'] = 'Váš popis stavu tohoto spojení (zajištěné, v důchodu atd.).';

$GLOBALS["lang"]['Your description of this item.'] = 'Váš popis této položky.';

$GLOBALS["lang"]['Your generic name for this piece of software'] = 'Vaše obecné jméno pro tento kus softwaru';

$GLOBALS["lang"]['Your generic version for this piece of software'] = 'Vaše generická verze pro tento kus softwaru';

$GLOBALS["lang"]['Zambia'] = 'Zambie';

$GLOBALS["lang"]['Zimbabwe'] = 'Zimbabwe';

$GLOBALS["lang"]['active'] = 'aktivní';

$GLOBALS["lang"]['active directory'] = 'aktivní adresář';

$GLOBALS["lang"]['active/active'] = 'aktivní / aktivní';

$GLOBALS["lang"]['active/passive'] = 'aktivní / pasivní';

$GLOBALS["lang"]['ad hoc'] = 'ad hoc';

$GLOBALS["lang"]['alert'] = 'varování';

$GLOBALS["lang"]['all'] = 'všechny';

$GLOBALS["lang"]['allocated'] = 'přiděleno';

$GLOBALS["lang"]['amazon'] = 'amazon';

$GLOBALS["lang"]['antivirus'] = 'antivirus';

$GLOBALS["lang"]['application'] = 'žádost';

$GLOBALS["lang"]['approved'] = 'schváleno';

$GLOBALS["lang"]['attribute'] = 'atribut';

$GLOBALS["lang"]['auto'] = 'auto';

$GLOBALS["lang"]['backup'] = 'zálohování';

$GLOBALS["lang"]['banned'] = 'zakázáno';

$GLOBALS["lang"]['bottom'] = 'dole';

$GLOBALS["lang"]['building'] = 'budova';

$GLOBALS["lang"]['cloud'] = 'oblak';

$GLOBALS["lang"]['collector'] = 'kolektor';

$GLOBALS["lang"]['compute'] = 'výpočet';

$GLOBALS["lang"]['contains'] = 'obsahuje';

$GLOBALS["lang"]['create'] = 'vytvořit';

$GLOBALS["lang"]['created'] = 'vytvořeno';

$GLOBALS["lang"]['critical'] = 'kritický';

$GLOBALS["lang"]['database'] = 'databáze';

$GLOBALS["lang"]['debug'] = 'ladění';

$GLOBALS["lang"]['defined process'] = 'definovaný proces';

$GLOBALS["lang"]['delegated'] = 'přeneseno';

$GLOBALS["lang"]['delete'] = 'smazat';

$GLOBALS["lang"]['deleted'] = 'odstraněno';

$GLOBALS["lang"]['denied'] = 'zamítnuto';

$GLOBALS["lang"]['devices'] = 'zařízení';

$GLOBALS["lang"]['digitalocean'] = 'digitalocean';

$GLOBALS["lang"]['does not equal'] = 'se nerovná';

$GLOBALS["lang"]['emergency'] = 'nouzové';

$GLOBALS["lang"]['entra'] = 'entra';

$GLOBALS["lang"]['equals'] = 'rovná se';

$GLOBALS["lang"]['error'] = 'chyba';

$GLOBALS["lang"]['excluded'] = 'vyloučena';

$GLOBALS["lang"]['expired'] = 'vypršela';

$GLOBALS["lang"]['fail'] = 'selhání';

$GLOBALS["lang"]['false'] = 'false';

$GLOBALS["lang"]['firewall'] = 'firewall';

$GLOBALS["lang"]['fixed'] = 'pevný';

$GLOBALS["lang"]['floor'] = 'podlaha';

$GLOBALS["lang"]['front'] = 'vpředu';

$GLOBALS["lang"]['front-left'] = 'přední - vlevo';

$GLOBALS["lang"]['front-right'] = 'přední strana vpravo';

$GLOBALS["lang"]['github'] = 'github';

$GLOBALS["lang"]['google'] = 'google';

$GLOBALS["lang"]['greater or equals'] = 'větší nebo rovno';

$GLOBALS["lang"]['greater than'] = 'větší než';

$GLOBALS["lang"]['group'] = 'skupina';

$GLOBALS["lang"]['head'] = 'hlava';

$GLOBALS["lang"]['here'] = 'tady';

$GLOBALS["lang"]['high availability'] = 'vysoká dostupnost';

$GLOBALS["lang"]['ignored'] = 'ignorováno';

$GLOBALS["lang"]['in'] = 'n';

$GLOBALS["lang"]['inactive'] = 'neaktivní';

$GLOBALS["lang"]['info'] = 'info';

$GLOBALS["lang"]['int, text, bool (y/n), etc'] = 'int, text, bool (y / n) atd';

$GLOBALS["lang"]['is licensed to'] = 'je licencován';

$GLOBALS["lang"]['left'] = 'vlevo';

$GLOBALS["lang"]['less or equals'] = 'méně nebo rovno';

$GLOBALS["lang"]['less than'] = 'méně než';

$GLOBALS["lang"]['license'] = 'licence';

$GLOBALS["lang"]['like'] = 'jako';

$GLOBALS["lang"]['line'] = 'řádek';

$GLOBALS["lang"]['load balancing'] = 'vyvažování nákladu';

$GLOBALS["lang"]['location'] = 'místo';

$GLOBALS["lang"]['managed and measurable'] = 'řízený a měřitelný';

$GLOBALS["lang"]['microsoft'] = 'microsoft';

$GLOBALS["lang"]['mount point'] = 'bod montáže';

$GLOBALS["lang"]['network'] = 'síť';

$GLOBALS["lang"]['no'] = 'ne';

$GLOBALS["lang"]['node'] = 'uzel';

$GLOBALS["lang"]['non-existent'] = 'neexistující';

$GLOBALS["lang"]['none'] = 'žádný';

$GLOBALS["lang"]['normal'] = 'normální';

$GLOBALS["lang"]['not applicable'] = 'nepoužije se';

$GLOBALS["lang"]['not in'] = 'není v';

$GLOBALS["lang"]['not like'] = 'ne jako';

$GLOBALS["lang"]['notice'] = 'oznámení';

$GLOBALS["lang"]['okta'] = 'okta';

$GLOBALS["lang"]['openldap'] = 'openldap';

$GLOBALS["lang"]['optimized'] = 'optimalizováno';

$GLOBALS["lang"]['optionally '] = 'volitelně';

$GLOBALS["lang"]['other'] = 'ostatní';

$GLOBALS["lang"]['partition'] = 'oddíl';

$GLOBALS["lang"]['pass'] = 'projít';

$GLOBALS["lang"]['pending'] = 'probíhající';

$GLOBALS["lang"]['performance'] = 'výkon';

$GLOBALS["lang"]['pie'] = 'koláč';

$GLOBALS["lang"]['planning'] = 'plánování';

$GLOBALS["lang"]['query'] = 'dotaz';

$GLOBALS["lang"]['rear'] = 'zadní';

$GLOBALS["lang"]['rear-left'] = 'vlevo vzadu';

$GLOBALS["lang"]['rear-right'] = 'vpravo dozadu';

$GLOBALS["lang"]['regex'] = 'regex';

$GLOBALS["lang"]['repeatable but intuitive'] = 'opakovatelné, ale intuitivní';

$GLOBALS["lang"]['reserved'] = 'vyhrazeno';

$GLOBALS["lang"]['right'] = 'správně';

$GLOBALS["lang"]['room'] = 'pokoj';

$GLOBALS["lang"]['row'] = 'řádek';

$GLOBALS["lang"]['stand-alone'] = 'stand- alone';

$GLOBALS["lang"]['standard'] = 'standardní';

$GLOBALS["lang"]['starts with'] = 'začíná s';

$GLOBALS["lang"]['storage'] = 'skladování';

$GLOBALS["lang"]['timestamp'] = 'časové razítko';

$GLOBALS["lang"]['top'] = 'nahoře';

$GLOBALS["lang"]['traffic'] = 'provoz';

$GLOBALS["lang"]['true'] = 'pravda';

$GLOBALS["lang"]['unallocated'] = 'nepřiděleno';

$GLOBALS["lang"]['unauthorised'] = 'nepovolené';

$GLOBALS["lang"]['unknown'] = 'neznámý';

$GLOBALS["lang"]['unmanaged'] = 'neřízený';

$GLOBALS["lang"]['unused'] = 'nepoužité';

$GLOBALS["lang"]['update'] = 'aktualizace';

$GLOBALS["lang"]['valid'] = 'platné';

$GLOBALS["lang"]['virtualisation'] = 'virtualizace';

$GLOBALS["lang"]['warning'] = 'upozornění';

$GLOBALS["lang"]['web'] = 'web';

$GLOBALS["lang"]['yes'] = 'ano';

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
