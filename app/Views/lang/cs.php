<?php
$GLOBALS["lang"][' Default, currently '] = ' Výchozí, v současnosti ';

$GLOBALS["lang"][' If something does not work as expected, your first thing to do is check the logs.'] = ' Pokud něco nefunguje tak, jak se očekávalo, vaše první věc, co udělat, je zkontrolovat protokoly.';

$GLOBALS["lang"][' is now supported with a language file. To change your user to use this language, click '] = ' je nyní podporován jazykovým souborem. Chcete-li změnit svého uživatele používat tento jazyk, klikněte ';

$GLOBALS["lang"][' seconds'] = ' sekund';

$GLOBALS["lang"][', but will not need to remember a separate set of logon credentials.'] = ', ale nebude muset pamatovat samostatný soubor logon pověření.';

$GLOBALS["lang"][', of which we supply over thirty as a default set. Professional users cannot alter these, but an Enterprise user has complete customisation abilities - including creating your own.'] = 'Z toho dodáváme přes třicet jako výchozí soubor. Profesionální uživatelé je nemohou změnit, ale uživatel Enterprise má kompletní přizpůsobovací schopnosti - včetně vytváření vlastních.';

$GLOBALS["lang"][', you <i>must</i> be using https on your Open-AudIT server to use Entra for Auth. Please configure Apache to use <strong>https</strong> before configuring Entra for auth.'] = 'Ty <i>musí</i> používat https na vašem Open- Audit serveru k použití Entra pro Auth. Prosím, nastavte Apache pro použití <strong>https</strong> před konfigurací Entra pro auth.';

$GLOBALS["lang"]['. To enable this, edit the configuration item for '] = '. Chcete-li to povolit, upravte konfigurační položku pro ';

$GLOBALS["lang"]['10 Minutes'] = '10 minut';

$GLOBALS["lang"]['15 Minutes'] = '15 minut';

$GLOBALS["lang"]['30 Minutes'] = '30 minut';

$GLOBALS["lang"]['5 Minutes'] = '5 minut';

$GLOBALS["lang"]['93 controls grouped into organizational, people, physical, and technological categories'] = '93 kontrol seskupených do organizačních, lidských, fyzických a technologických kategorií';

$GLOBALS["lang"]['<br> <strong>NOTE</strong> - You are accessing this URL from the local Open-AudIT server. The downloaded script will not be able to submit when run on any other machine. If you need to audit other machines, please download the script from any remote machine, not using a browser on the Open-AudIT server itself.'] = '<br/><strong>POZNÁMKA</strong> - Přistupujete k tomuto URL z místního Open- Audit serveru. Stáhnutý skript nebude schopen zaslat při spuštění na jiném stroji. Pokud potřebujete provést audit jiných strojů, stáhněte si prosím skript z libovolného vzdáleného stroje, nikoli pomocí prohlížeče na samotném serveru Open- Audit.';

$GLOBALS["lang"]['<p></p>'] = '<p></p>';

$GLOBALS["lang"]['<p><strong class="text-danger">NOTE</strong> - You must have working SSH or SSH Key credentials to execute benchmarks upon a target device.</p>'] = '<p><strong class="text-danger">POZNÁMKA</strong> - Musíte mít pracovní SSH nebo SSH Key pověření provádět referenční hodnoty na cílovém zařízení.</p>';

$GLOBALS["lang"]['<p><strong>Baseline</strong> - The overarching document that contains the baseline definition and the individual policy tests.<br> <br> <strong>Policies</strong> - The individual tests contained within a Baseline. Each test is for a specific item. An example would be testing for SSH version 1.2.3.<br> <br> <strong>Details</strong> - Baselines can compare netstat ports, users and software.<br> <br> <strong>Software</strong> - To compare software we check the name and version. Because version numbers are not all standardised in format, when we receive an audit result we create a new attribute called software_padded which we store in the database along with the rest of the software details for each package. For this reason, baselines using software policies will not work when run against a device that has not been audited by 1.10 (at least). Software policies can test against the version being "equal to", "greater than" or "equal to or greater than".<br> <br> <strong>Netstat Ports</strong> - Netstat Ports use a combination of port number, protocol and program. If all are present the policy passes.<br> <br> <strong>Users</strong> - Users work similar to Netstat Ports. If a user exists with a matching name, status and password details (changeable, expires, required) then the policy passes.<br> <br> </p>'] = '<p><strong>Výchozí</strong> - zastřešující dokument, který obsahuje základní definici a jednotlivé politické testy.<br/> <br/> <strong>Politika</strong> - Jednotlivé testy obsažené v základní linii. Každá zkouška je pro určitou položku. Příkladem by bylo testování SSH verze 1.2.3.<br/> <br/> <strong>Podrobnosti</strong> - Základní linie mohou porovnat porty netstat, uživatele a software.<br/> <br/> <strong>Software</strong> - Pro porovnání software jsme zkontrolovat jméno a verzi. Protože čísla verzí nejsou ve formátu standardizovaná, když obdržíme výsledek auditu, vytvoříme nový atribut nazvaný software _ padded, který uložíme do databáze spolu se zbytkem informací o softwaru pro každý balíček. Z tohoto důvodu nebude při provozu proti zařízení, které nebylo zkontrolováno podle bodu 1.10 (alespoň), fungovat základní linie využívající softwarové politiky. Zásady softwaru mohou testovat proti verzi, která je "rovna", "větší než" nebo "rovná se nebo větší než".<br/> <br/> <strong>Porty Netstat</strong> - Netstat Ports používají kombinaci čísla portu, protokolu a programu. Pokud jsou všichni přítomni, politika projde.<br/> <br/> <strong>Uživatelé</strong> - Uživatelé pracují podobně jako Netstat Ports. Existuje-li uživatel s odpovídajícím názvem, statusem a heslem podrobnosti (proměnlivé, vyprší, vyžaduje), pak politika projde.<br/> <br/> </p>';

$GLOBALS["lang"]['<p>A location is a physical address that can have devices associated with it.<br> <br>You can assign it coordinates (lat/long) and if there are devices assigned, the location will appear on the Open-AudIT Enterprise map.<br> <br></p>'] = '<p>Lokalita je fyzická adresa, která s tím může být spojena.<br/> <br/>Můžete ho přiřadit souřadnice (lat / long) a pokud jsou přiřazena zařízení, zobrazí se umístění na mapě Open- Audit Enterprise.<br/> <br/></p>';

$GLOBALS["lang"]['<p>A network is derived from discovery entries and device attributes.<br> <br></p>'] = '<p>Síť je odvozena z vyhledávacích položek a atributů zařízení.<br/> <br/></p>';

$GLOBALS["lang"]['<p>A summary will display a list of items, grouped by the distinct values of the attribute specified by the <code>table</code> and <code>column</code> attributes.<br> <br>When a summary is executed, the result will be a list of distinct values for that <code>table</code> and <code>column</code>. There will be links on the values that allow the user to see the matching devices.<br> <br>If the attribute of <code>extra_columns</code> is populated, the resulting page will contain these columns in addition to the standard device columns.<br> <br></p>'] = '<p>Souhrn zobrazí seznam položek seskupených podle odlišných hodnot atributu specifikovaného <code>table</code> a <code>column</code> atributy.<br/> <br/>Když je proveden souhrn, výsledek bude seznam odlišných hodnot pro tento <code>table</code> a <code>column</code>. Na hodnotách budou odkazy umožňující uživateli vidět odpovídající zařízení.<br/> <br/>Pokud atribut <code>extra_columns</code> je obsažen, výsledná stránka bude obsahovat tyto sloupce kromě standardních sloupců zařízení.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Agents let you audit PCs without a discovery. Install the agent and it will check-in with the server each day and audit itself. It does not matter if your computers are firewalled, audit data will still appear in Open-AudIT.</p><p>When testing <strong>if</strong> an agent should perform actions, all three tests must pass (if the test is set). <strong>Then</strong> the actions are taken.</p>'] = '<p>Agenti vám dovolili kontrolovat počítače bez odhalení. Nainstalujte agent a to bude check-in se serverem každý den a audit sám. Nezáleží na tom, zda jsou vaše počítače firewalled, auditní data se stále objeví v Open- Audit.</p><p>Při zkoušce <strong>pokud</strong> činidlo by mělo provádět kroky, všechny tři zkoušky musí projít (je-li zkouška nastavena). <strong>Pak</strong> jsou přijata opatření.</p>';

$GLOBALS["lang"]['<p>Applications are defined by you, the user and stored for Open-AudIT to use and associate with devices.<br> <br></p>'] = '<p>Aplikace jsou definovány vámi, uživatelem a uloženy pro Open- Audit pro použití a spojení se zařízeními.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Attributes are stored for Open-AudIT to use for particular fields.</p>'] = '<p>Atributy jsou uloženy pro Open- AudiT pro použití pro konkrétní pole.</p>';

$GLOBALS["lang"]['<p>Being able to determine which machines are configured the same is a major part of systems administration and auditing &ndash; and now reporting on that will be made simple and automated. Once you define your baseline it will automatically run against a set of devices on a predetermined schedule. The output of these executed baselines will be available for web viewing, importing into a third party system or even as a printed report.<br> <br> Baselines enable you to combine audit data with a set of attributes you have previously defined (your baseline) to determine compliance of devices.<br> <br> For example - you might create a baseline from a device running Centos 6 which acts as one of your apache servers in a cluster. You know this particular server is configured just the way you want it but you are unsure if other servers in the cluster are configured exactly the same. Baselines enables you to determine this.<br> <br> </p>'] = '<p>Být schopen určit, které stroje jsou nakonfigurovány stejně, je hlavní součástí správy systémů a auditu - a nyní bude podávání zpráv o tom bude jednoduché a automatizované. Jakmile definujete výchozí hodnotu, bude automaticky běžet proti sadě zařízení v předem stanoveném rozvrhu. Výstup těchto provedených základních linií bude k dispozici pro prohlížení webových stránek, import do systému třetích stran nebo dokonce jako tisková zpráva.<br/> <br/> Základní parametry vám umožní kombinovat auditní data se souborem atributů, které jste dříve definovali (základní) pro určení shody zařízení.<br/> <br/> Například - můžete vytvořit výchozí hodnotu ze zařízení spuštěného Centos 6, které funguje jako jeden ze serverů Apache v clusteru. Víte, že tento konkrétní server je nakonfigurován přesně tak, jak chcete, ale nejste si jisti, zda jsou ostatní servery v clusteru nakonfigurovány přesně stejně. Základní linie vám umožní určit toto.<br/> <br/> </p>';

$GLOBALS["lang"]['<p>Clusters are stored in Open-AudIT to associate devices to better record, manage and estimate licensing costs.<br> <br></p>'] = '<p>Clusters jsou uloženy v Open- Audit pro připojení zařízení pro lepší záznam, správu a odhad licenčních nákladů.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Components is a generic term used for the tables that store the attributes for a device. Those tables are: access_point, arp, bios, certificate, cli_config, disk, dns, file, ip, license, log, memory, module, monitor, motherboard, netstat, network, nmap, optical, pagefile, partition, policy, print_queue, processor, radio, route, san, scsi, server, server_item, service, share, software, software_key, sound, task, usb, user, user_group, variable, video, vm, windows.</p><p> In addition we class the following tables also as device related: application, attachment, cluster, credential, image.</p>'] = '<p>Komponenty je obecný výraz používaný pro tabulky, které ukládají atributy pro zařízení. Tyto tabulky jsou: access _ point, arp, bios, certifikát, cli _ config, disk, dns, file, ip, licence, log, paměť, modul, monitor, základní deska, netstat, síť, nmap, optické, pagefile, oddíl, politika, print _ front, procesor, rádio, route, san, scsi, server, server _ item, služba, sdílení, software, software _ key, zvuk, úkol, usb, uživatel, uživatel _ skupina, proměnná, video, vm, okna.</p><p> Kromě toho třídíme následující tabulky také jako související zařízení: aplikace, příloha, cluster, kreditní, obrázek.</p>';

$GLOBALS["lang"]['<p>Credentials are encrypted when stored in the database.<br> <br>When a Discovery is run, a device has its credentials retrieved and tested for connection first (from the <code>credential</code> table). If these fail, then credentials associated with the given Org <code>credentials.org_id</code> is also tested against the device. Working credentials are stored at an individual device level in the credential table (note - no "s" in the table name).<br> <br>SSH keys are tested before SSH username / password. When testing SSH, credentials will also be marked as working with sudo or being root.<br> <br>For ease of use, Windows passwords should not contain a single or double quote. This is a remote WMI limitation, not an Open-AudIT limitation.<br> <br></p>'] = '<p>Kredity jsou šifrovány, když jsou uloženy v databázi.<br/> <br/>Když běží Discovery, zařízení má své pověřovací listiny získané a testovány pro připojení jako první (z <code>credential</code> Tabulka). Pokud selžou, pak pověřovací listiny spojené s daným Org <code>credentials.org_id</code> je také testován proti zařízení. Pracovní údaje se ukládají na úrovni jednotlivých zařízení v kreditní tabulce (poznámka - ne "s" v názvu tabulky).<br/> <br/>SSH klíče jsou testovány před SSH uživatelské jméno / heslo. Při testování SSH budou pověřovací listiny také označeny jako práce se sudo nebo být kořen.<br/> <br/>Pro snadné použití by neměla Windows hesla obsahovat ani jednu nebo dvě citace. Toto je omezení WMI na dálku, ne omezení Open- Audit.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Credentials are used to access devices.<br> <br>Configuring credentials should be one of the first things you do after installing Open-AudIT.<br> <br></p>'] = '<p>Kredity se používají k přístupu k zařízením.<br/> <br/>Nastavení pověření by mělo být jednou z prvních věcí, kterou uděláte po instalaci Open- Audit.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Define your racks and assign devices into their positions. You already have your devices in Open-AudIT and you know your locations. Open-AudIT extends this to allow you to create a rack and assign devices to it. Open-AudIT will even provide a visualisation of the rack and the devices contained within. If you provide a device picture, that picture will be used in the visualisation. You can look at the rack on the screen and see the same items you would see if you were standing in front of it.<br> <br></p>'] = '<p>Definujte své regály a přiřaďte zařízení do jejich pozic. Už máte zařízení v Open- Auditu a znáte své pozice. Open- Audit rozšiřuje toto, aby vám umožnilo vytvořit rack a přiřadit zařízení k němu. Open- Audit bude dokonce poskytovat vizualizaci racku a zařízení obsažené uvnitř. Pokud poskytnete obrázek zařízení, bude tento obrázek použit při vizualizaci. Můžete se podívat na stojan na obrazovce a vidět stejné položky, které byste viděli, kdybyste stáli před ním.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Devices on your network need to be managed. But how do you keep your records up to date? A spreadsheet - defintley not. That will be out of date in hours, if not days. Why manually try to keep up. Use Open-AudIT to automatically scan your networks and record your devices - manufacturer, model, serial and more than 100 other attributes. Full lists of software, services, disks, open ports, users, etc. Automatically see if an attribute has been added, removed or changed.<br> <br>Once Open-AudIT is setup, you can sit back and relax. Have change reports emailed to you on a schedule, for example - what new devices did we discover this week? What new software was installed this week? Were there any hardware changes last month?<br> <br>Expand on the stored fields easily with your own custom attributes.<br> <br>Even add devices that are not connected to your network or those devices your Open-AudIT server cannot reach.<br> <br>Computers, switches, routers, printers or any other device on your network - Open-AudIT can audit them all.<br> <br></p>'] = '<p>Zařízení ve vaší síti je třeba spravovat. Ale jak se vaše záznamy aktualizují? Tabulka - ne definitivní. To bude zastaralé během hodin, ne-li dnů. Proč manuálně držet krok. Pomocí Open- Auditu automaticky skenujete sítě a zaznamenáváte zařízení - výrobce, model, sériový a více než 100 dalších atributů. Kompletní seznamy softwaru, služeb, disků, otevřených portů, uživatelů atd. Automaticky zjistit, zda atribut byl přidán, odstraněn nebo změněn.<br/> <br/>Jakmile je Open- Audit nastaven, můžete sedět a relaxovat. Mají změny zprávy e-mailem pro vás na rozvrhu, například - jaké nové zařízení jsme objevili tento týden? Jaký nový software byl nainstalován tento týden? Byly minulý měsíc nějaké změny hardwaru?<br/> <br/>Rozšiřte si uložená pole snadno pomocí vlastních vlastních atributů.<br/> <br/>Dokonce přidat zařízení, která nejsou připojena k vaší síti, nebo zařízení, ke kterým váš Open- Audit server nemůže dosáhnout.<br/> <br/>Počítače, spínače, routery, tiskárny nebo jakékoliv jiné zařízení ve vaší síti - Open- Audit je může všechny kontrolovat.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Discoveries are at the very heart of what Open-AudIT does.<br> <br>How else would you know "What is on my network?"<br> <br>Discoveries are prepared data items that enable you to run a discovery upon a network in a single click, without entering the details of that network each and every time.<br> <br></p>'] = '<p>Objevy jsou jádrem toho, co Open- Audit dělá.<br/> <br/>Jak jinak bys věděl, co je na mé síti?<br/> <br/>Objevy jsou připravené datové položky, které vám umožní spustit objev na síti jediným kliknutím, aniž byste pokaždé zadali podrobnosti této sítě.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Discovery Options are a global setting changed in the <a href="../configuration?configuration.name=discovery_default_scan_option">configuration</a>. If you have an Open-AudIT Enterprise license these are settable per discovery and in addition futher customizable as required. Discovery Options are as follows (including an indicitave time to scan an individual IP):<br/><br><strong>UltraFast</strong>: <i>1 second</i>. Scan only the ports that Open-AudIT needs to use to talk to the device and detect an IOS device (WMI, SSH, SNMP, Apple Sync). An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is not considered open. Device must respond to an Nmap ping. Use aggressive timing.<br><br/><strong>SuperFast</strong>: <i>5 seconds</i>. Scan the top 10 TCP and UDP ports, as well as port 62078 (Apple IOS detection). An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is not considered open. Device must respond to an Nmap ping. Use aggressive timing.<br/><br/><strong>Fast</strong>: <i>40 seconds</i>. Scan the top 100 TCP and UDP ports, as well as port 62078 (Apple IOS detection). An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is not considered open. Device must respond to an Nmap ping. Use aggressive timing.<br/><br/><strong>Medium (Classic)</strong>: <i>90 seconds</i>. As close to a traditional Open-AudIT scan as we can make it. Scan the top 1000 TCP ports, as well as 62078 (Apple IOS detection) and UDP 161 (SNMP). An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is considered open (and will trigger device detection). Devices are scanned regardless of a response to an Nmap ping. Use aggressive timing.<br/><br/><strong>Medium</strong>: <i>100 seconds</i>. Scan the top 1000 TCP and top 100 UDP ports, as well as port 62078 (Apple IOS detection). An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is not considered open. Device must respond to an Nmap ping. Use aggressive timing.<br/><br/><strong>Slow</strong>: <i>4 minutes</i>. Scan the top 1000 TCP and top 100 UDP ports, as well as port 62078 (Apple IOS detection). Version detection enabled. An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is considered open (and will trigger device detection). Device must respond to an Nmap ping. Use normal timing.<br/><br/><strong>UltraSlow</strong>: <i>20 minutes</i>. Not recommended. Scan the top 1000 TCP and UDP ports, as well as port 62078 (Apple IOS detection). Devices are scanned regardless of a response to an Nmap ping. Version detection enabled. An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is considered open (and will trigger device detection). Use polite timing.<br/><br/><strong>Custom</strong>: <i>Unknown time</i>. When options other than as set by a standard discovery preset are altered.<br><br></p>'] = '<p>Objevení Možnosti jsou globální nastavení změnil v <a href="../configuration?configuration.name=discovery_default_scan_option">konfigurace</a>. Máte-li Open- Audit Enterprise licence tyto jsou nastavitelné na objev a navíc futher přizpůsobitelné podle potřeby. Objevení Možnosti jsou následující (včetně indicitave času pro skenování individuální IP):<br/><br/><strong>UltraFast</strong>: <i>1 sekunda</i>. Vyhledat pouze porty, které Open- Audit potřebuje použít k komunikaci se zařízením a detekci zařízení IOS (WMI, SSH, SNMP, Apple Sync). An <code>open|filtered</code> port je považován za otevřený. A <code>filtered</code> přístav není považován za otevřený. Zařízení musí reagovat na ping Nmap. Použij agresivní načasování.<br/><br><strong>SuperFast</strong>: <i>5 sekund</i>. Prohledejte top 10 TCP a UDP portů, stejně jako port 62078 (detekce Apple IOS). An <code>open|filtered</code> port je považován za otevřený. A <code>filtered</code> přístav není považován za otevřený. Zařízení musí reagovat na ping Nmap. Použij agresivní načasování.<br><br/><strong>Rychle.</strong>: <i>40 sekund</i>. Skenujte horní 100 TCP a UDP portů, stejně jako port 62078 (detekce Apple IOS). An <code>open|filtered</code> port je považován za otevřený. A <code>filtered</code> přístav není považován za otevřený. Zařízení musí reagovat na ping Nmap. Použij agresivní načasování.<br/><br/><strong>Střední (Classic)</strong>: <i>90 sekund</i>. Tak blízko k tradičnímu Open- Auditskému skenu, jak jen to půjde. Skenujte top 1000 TCP portů, stejně jako 62078 (detekce Apple IOS) a UDP 161 (SNMP). An <code>open|filtered</code> port je považován za otevřený. A <code>filtered</code> port je považován za otevřený (a bude detekce spouštěcího zařízení). Zařízení jsou skenována bez ohledu na reakci na Nmapový ping. Použij agresivní načasování.<br/><br/><strong>Střední</strong>: <i>100 sekund</i>. Prohledej top 1000 TCP a 100 UDP portů, stejně jako port 62078 (detekce Apple IOS). An <code>open|filtered</code> port je považován za otevřený. A <code>filtered</code> přístav není považován za otevřený. Zařízení musí reagovat na ping Nmap. Použij agresivní načasování.<br/><br/><strong>Pomalu.</strong>: <i>4 minuty</i>. Prohledej top 1000 TCP a 100 UDP portů, stejně jako port 62078 (detekce Apple IOS). Detekce verzí povolena. An <code>open|filtered</code> port je považován za otevřený. A <code>filtered</code> port je považován za otevřený (a bude detekce spouštěcího zařízení). Zařízení musí reagovat na ping Nmap. Použijte normální načasování.<br/><br/><strong>UltraSlow</strong>: <i>20 minut</i>. Nedoporučuje se. Prohledej top 1000 TCP a UDP portů, stejně jako port 62078 (detekce Apple IOS). Zařízení jsou skenována bez ohledu na reakci na Nmapový ping. Detekce verzí povolena. An <code>open|filtered</code> port je považován za otevřený. A <code>filtered</code> port je považován za otevřený (a bude detekce spouštěcího zařízení). Použij slušné načasování.<br/><br/><strong>Vlastní</strong>: <i>Neznámý čas</i>. Pokud jsou změněny jiné možnosti, než které jsou nastaveny standardním přednastaveným objevem.<br/><br/></br></br></p>';

$GLOBALS["lang"]['<p>Groups are used as simple lists of devices that match the required conditions. If requested using JSON they return a list of <code>devices.id</code> only. If requested using the web interface, they return the standard column attribute list.<br> <br></p>'] = '<p>Skupiny se používají jako jednoduché seznamy zařízení, která odpovídají požadovaným podmínkám. Na požádání pomocí JSON vrátí seznam <code>devices.id</code> pouze. Na požádání pomocí webového rozhraní vrátí standardní seznam atributů sloupce.<br/> <br/></p>';

$GLOBALS["lang"]['<p>If the user logging on to Open-AudIT does not have the access to search LDAP (and you are using OpenLDAP), you can use another account which does have this access. Use the <code>ldap_dn_account</code> and <code>ldap_dn_password</code> to configure this.<br> <br><strong>Helpful Documentation</strong><br> <br>
        <a href="/index.php/auth/help">General Auth Help</a><br> <br>
        <a href="/index.php/faq?name=Using Entra for Auth">Using Entra for Auth</a><br> <br>
        <a href="/index.php/faq?name=Using OKTA for Auth">Using OKTA for Auth</a><br> <br>
        <a href="/index.php/faq?name=Troubleshooting LDAP Logins">Troubleshooting LDAP Logins</a><br> <br>
        <a href="/index.php/faq?name=Users, Roles and Orgs">Users, Roles and Orgs</a><br> <br></p>'] = '<p>Pokud uživatel přihlášení na Open- Audit nemá přístup k vyhledávání LDAP (a používáte OpenLDAP), můžete použít jiný účet, který má tento přístup. Použijte <code>ldap_dn_account</code> a <code>ldap_dn_password</code> Nastavit to.<br/> <br/><strong>Užitečná dokumentace</strong><br/> <br/><a href="/index.php/auth/help">Nápověda pro generála Autha</a><br/> <br/><a href="/index.php/faq?name=Using Entra for Auth">Použití Entra pro Auth</a><br/> <br/><a href="/index.php/faq?name=Using OKTA for Auth">Použití OKTA pro Auth</a><br/> <br/><a href="/index.php/faq?name=Troubleshooting LDAP Logins">Řešení problémů LDAP Logins</a><br/> <br/><a href="/index.php/faq?name=Users, Roles and Orgs">Uživatelé, Roles a Orgs</a><br/> <br/></p>';

$GLOBALS["lang"]['<p>If you add a device type, to display the associated icon you will have to manually copy the .svg formatted file to the directory:<br><em>Linux</em>:/usr/local/open-audit/public/device_images<br><em>Windows</em>: c:\xampp\htdocs\open-audit\device_images<br> <br>If you add a location type, to display the associated icon you will have to manually copy the 32x32px icon to the directory:<br><em>Linux</em>:/usr/local/open-audit/public/images/map_icons<br><em>Windows</em>: c:\xampp\htdocs\open-audit\images\map_icons</p><p>When the <i>resource</i> is a <code>device</code>, valid <i>types</i> are: <code>class</code>, <code>environment</code>, <code>status</code> and <code>type</code>. If the <i>resource</i> is <code>locations</code> or <code>org</code> the only valid <i>type</i> is <code>type</code>. If the <i>resource</i> is a <code>query</code> the only valid <i>type</i> is <code>menu_category</code>.</p>'] = '<p>Pokud přidáte typ zařízení, k zobrazení související ikony budete muset ručně zkopírovat soubor .svg formátovaný do adresáře:<br/><em>Linux</em>: / usr / local / open- audit / public / device _ images<br/><em>Okna</em>: c:\ xampp\ htdocs\ open-audit\ device _ images<br/> <br/>Pokud přidáte typ umístění, pro zobrazení související ikony budete muset ikonu 32x32px ručně zkopírovat do adresáře:<br/><em>Linux</em>: / usr / local / open- audit / public / images / map _ icons<br/><em>Okna</em>: c:\ xampp\ htdocs\ open- audit\ images\ map _ icons</p><p>Kdy <i>zdroj</i> je <code>device</code>, platné <i>typy</i> jsou: <code>class</code>, <code>environment</code>, <code>status</code> a <code>type</code>. Pokud <i>zdroj</i> vá <code>locations</code> nebo <code>org</code> jediná platná <i>typ</i> vá <code>type</code>. Pokud <i>zdroj</i> je <code>query</code> jediná platná <i>typ</i> vá <code>menu_category</code>.</p>';

$GLOBALS["lang"]['<p>If you intend to completely audit your cloud machines, do not forget you will also need those credentials saved in Open-AudIT.</p><p>Make sure you allow the correct ports if you are using Microsoft Azure (22 for SSH, etc). Check your Virtual Machine -> Networking rules.<br> <br></p>'] = '<p>Pokud máte v úmyslu provést kompletní audit svých cloudových strojů, nezapomeňte, že budete také potřebovat tyto pověřovací listiny uložené v Open- Auditu.</p><p>Ujistěte se, že povolíte správné porty, pokud používáte Microsoft Azure (22 pro SSH, atd.). Zkontrolujte si virtuální stroj - > Pravidla Networking.<br/> <br/></p>';

$GLOBALS["lang"]['<p>If you select a List type, the "values" field will be enabled. You should put a comma separated list of selectable values here. These will display in a dropdown box whenever the field is edited.<br> <br>Like most other attributes, Fields can be bulk edited. Use the Bulk Edit function as you normally would and you will see the Fields are available for input.<br> <br>View the device details screen, open the section containing the field and (if you have sufficient access) you can click on the field value to edit it.<br> <br></p>'] = '<p>Pokud zvolíte typ List, bude povoleno pole "value". Zde byste měli umístit oddělený seznam volitelných hodnot. Tyto budou zobrazeny v rozbalovací krabici pokaždé, když je pole editováno.<br/> <br/>Stejně jako většina jiných atributů, Fields lze volně upravovat. Použijte funkci Bulk Edit, jak byste normálně chtěli, a uvidíte, že pole jsou k dispozici pro vstup.<br/> <br/>Zobrazit obrazovku podrobností zařízení, otevřít sekci obsahující pole a (pokud máte dostatečný přístup) můžete kliknout na hodnotu pole pro jeho úpravu.<br/> <br/></p>';

$GLOBALS["lang"]['<p>In the ever-changing world of computer security where new vulnerabilities are being discovered and patched every day, enforcing security compliance must be a continuous process. It also needs to include a way to make adjustments to policies, as well as periodic assessment and risk monitoring. The OpenSCAP ecosystem provides tools and customizable policies for a quick, cost-effective and flexible implementation of these processes.</p>'] = '<p>V neustále se měnícím světě počítačové bezpečnosti, kde jsou objevována nová zranitelná místa a každý den je třeba vynucovat dodržování bezpečnosti, musí být nepřetržitý proces. Musí rovněž zahrnovat způsob, jak provádět úpravy politik, jakož i pravidelné hodnocení a sledování rizik. Ekosystém OpenSCAP poskytuje nástroje a přizpůsobitelné politiky pro rychlé, nákladově efektivní a flexibilní provádění těchto procesů.</p>';

$GLOBALS["lang"]['<p>Integrations allow you to setup device selection and schedules for Open-AudIT to talk to external systems.<br> <br></p>'] = '<p>Integrace vám umožní nastavit výběr zařízení a plány pro Open- AudiT pro komunikaci s externími systémy.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Microsoft Windows desktop systems have network limitations that may impact the performance of Open-AudIT. The TCP/IP stack limits the number of simultaneous incomplete outbound TCP connection attempts. After the limit is reached, subsequent connection attempts are put in a queue and will be resolved at a fixed rate (10 per second). If too many enter the queue, they may be dropped. And finally, Apache will be restarted by the OS. For this reason, installing Open-AudIT on a Windows desktop operating system is not supported.<br><br>There is nothing wrong with the Open-AudIT code, nor can we do anything to address this issue on Windows client machines.'] = '<p>Microsoft Desktopové systémy Windows mají síťová omezení, která mohou ovlivnit výkon Open- Audit. TCP / IP stack omezuje počet současných neúplných pokusů o připojení TCP. Po dosažení limitu jsou následující pokusy o připojení uvedeny do fronty a budou vyřešeny pevnou sazbou (10 za sekundu). Pokud jich do fronty vstoupí příliš mnoho, mohou být staženi. A nakonec, Apache bude restartován OS. Z tohoto důvodu není podporována instalace Open- Auditu na operační systém Windows.<br/><br/>S kódem Open- AudiT není nic v nepořádku, ani nemůžeme udělat nic pro řešení tohoto problému na počítačích Windows.</p>';

$GLOBALS["lang"]['<p>Nmap timing details are found on the bottom of this linked page <a href="https://nmap.org/book/man-performance.html" target="_blank">https://nmap.org/book/man-performance.html</a>. From that page:<br> <br><em>If you are on a decent broadband or ethernet connection, I would recommend always using -T4 (Aggressive). Some people love -T5 (Insane) though it is too aggressive for my taste. People sometimes specify -T2 (Polite) because they think it is less likely to crash hosts or because they consider themselves to be polite in general. They often do not realize just how slow -T2 really is. Their scan may take ten times longer than a default scan. Machine crashes and bandwidth problems are rare with the default timing options -T3 (Normal) and so I normally recommend that for cautious scanners. Omitting version detection is far more effective than playing with timing values at reducing these problems.</em><footer>Gordon <i>Fyodor</i> Lyon</footer><br> <br></p>'] = '<p>Informace o načasování Nmap naleznete v dolní části této připojené stránky <a href="https://nmap.org/book/man-performance.html" target="_blank">Viz poznámka pod čarou1.</a>. Z této stránky:<br/> <br/><em>Pokud jste na slušné širokopásmové nebo ethernetové připojení, doporučuji vždy používat -T4 (Agresivní). Někteří lidé milují -T5 (Insane), i když je příliš agresivní na můj vkus. Lidé někdy specifikují -T2 (Polite), protože si myslí, že je méně pravděpodobné, že havaruje hostitele nebo protože se považují za zdvořilé obecně. Často si neuvědomují, jak pomalé je -T2. Jejich sken může trvat desetkrát déle než standardní sken. Strojové zkraty a problémy s šířkou pásma jsou vzácné s výchozími možnostmi načasování -T3 (Normal), a proto obvykle doporučuji, aby pro opatrné skenery. Omitující detekce verzí je mnohem účinnější než hraní si s hodnotami načasování při snižování těchto problémů.</em><footer>Gordone. <i>Fjodor</i> Lyon</footer><br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT can be configured to use different methods to authenticate a user and in addition, to create a user account using assigned roles and orgs based on group membership.<br> <br></p>'] = '<p>Open-Audit lze konfigurovat tak, aby používal různé metody pro ověření uživatele a navíc vytvořil uživatelský účet pomocí přiřazených rolí a orgů založených na členství ve skupině.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT can retrieve details about a file or directory of files and monitor these files for changes as per other attributes in the Open-AudIT database.<br> <br>This feature works out of the box for Linux Open-AudIT servers, but needs a change to the service account name under a Windows Open-AudIT server.<br> <br>Supported clients are Windows and Linux.<br> <br></p>'] = '<p>Open- Aud IT může získat podrobnosti o souboru nebo adresáři souborů a sledovat tyto soubory pro změny podle jiných atributů v databázi Open- AudiT.<br/> <br/>Tato funkce funguje v rámečku pro Linux Open- Audit servery, ale potřebuje změnu názvu servisního účtu pod Windows Open- Audit serverem.<br/> <br/>Podporovanými klienty jsou Windows a Linux.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT can retrieve details about a file, ask the native package manager if they are known to it and monitor these files for changes as per other attributes in the Open-AudIT database.<br> <br>Supported clients are Linux only.<br> <br></p>'] = '<p>Open- Aud IT může získat podrobnosti o souboru, zeptat se místního správce balíků, zda jsou mu známy, a sledovat tyto soubory pro změny podle jiných atributů v databázi Open- AudiT.<br/> <br/>Podporovaní klienti jsou pouze Linux.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT can store information in custom fields that are associated with each device.<br> <br>Once an Additional Field has been created it can be used in queries and groups just like any other attribute in the database.<br> <br></p>'] = '<p>Open- Aud IT může ukládat informace do vlastních polí, která jsou spojena s každým zařízením.<br/> <br/>Jakmile bylo vytvořeno další pole, může být použito v dotazech a skupinách stejně jako jakýkoli jiný atribut v databázi.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT comes with many queries inbuilt. If you require a specific query and none of the pre-packaged queries fit your needs, it is quite easy to create a new one and load it into Open-AudIT for running.<br> <br></p>'] = '<p>Open- Audit je dodáván s mnoha dotazy. Pokud požadujete konkrétní dotaz a žádný z předem balených dotazů neodpovídá vašim potřebám, je poměrně snadné vytvořit nový a načíst jej do Open- Audit pro běh.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT comes with many summaries inbuilt. If you require a specific summary and none of the pre-packaged summaries fit your needs, it is quite easy to create a new one and load it into Open-AudIT for running.<br> <br></p>'] = '<p>Open- Audit je dodáván s mnoha shrnutími. Pokud potřebujete konkrétní shrnutí a žádný z předem balených souhrnů neodpovídá vašim potřebám, je poměrně snadné vytvořit nový a načíst jej do Open- Auditu pro běh.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT is supported by FirstWave with an amazing level of support. If you prefer an active community of support givers, theres that as well. Where else can you talk directly to the developers and get a response within 24 hours? Just try that with other products! Amazing support. Full stop. You need support, we provide support. No ifs or buts. Great support. Period.<br> <br></p>'] = '<p>Open- Audit je podporován firstWave s úžasnou úrovní podpory. Pokud dáváte přednost aktivní komunitě podpůrných dárců, pak také. Kde jinde můžete mluvit přímo s vývojáři a získat odpověď do 24 hodin? Jen to zkuste s jinými produkty! Úžasná podpora. Zastavit. Potřebujete podporu, my ji poskytujeme. Žádné jestli nebo ale. Skvělá podpora. Tečka.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT provides multi-tenancy out of the box!<br> <br>Orgs (organisations) in Open-AudIT are a key item. A user has a primary Org as well as a list of Orgs they can access. A user combines this with a list of assigned "Roles" that define what actions they can take on items assigned to the Orgs they have access to. The combination of a users "orgs" and "roles" define what they can and cannot do within Open-AudIT.<br> <br>Most items in Open-AudIT are assigned to an Org. Devices, Locations, Networks, etc.<br> <br>Orgs can have child Orgs. Think of an organisational chart (tree) structure. If a user has access to a specific Org, they also have access to that Orgs descendants. For more information, see this <a href="/index.php/faq?name=Users, Roles and Orgs">FAQ</a>.</p>'] = '<p>Open- Audit poskytuje multinájemnost z krabice!<br/> <br/>Klíčovou položkou jsou orgány (organizace) v Open- Audit. Uživatel má primární Org, stejně jako seznam Orgů, ke kterým může přístup. Uživatel to kombinuje se seznamem přiřazených "Roles", který definuje, jaké akce mohou přijmout na položky přidělené k Orgs mají přístup k. Kombinace uživatelských "orgs" a "rolí" definuje, co mohou a nemohou dělat v rámci Open- Auditu.<br/> <br/>Většina položek v Open- Audit jsou přiřazeny k Org. Zařízení, umístění, sítě, atd.<br/> <br/>Orgové můžou mít děti. Představte si organizační strukturu grafu (stromu). Pokud má uživatel přístup k určitému Orgu, má také přístup k potomkům těchto Orgů. Více informací naleznete zde. <a href="/index.php/faq?name=Users, Roles and Orgs">FAQ</a>.</p>';

$GLOBALS["lang"]['<p>Open-AudIT provides multi-tenancy out of the box!<br> <br>Orgs (organisations) in Open-AudIT are a key item. A user has a primary Org as well as a list of Orgs they can access. A user combines this with a list of assigned "Roles" that define what actions they can take on items assigned to the Orgs they have access to. The combination of a users "orgs" and "roles" define what they can and cannot do within Open-AudIT.<br> <br>Most items in Open-AudIT are assigned to an Org. Devices, Locations, Networks, etc.<br> <br>Orgs can have child Orgs. Think of an organisational chart (tree) structure. If a user has access to a specific Org, they also have access to that Orgs descendants.</p>'] = '<p>Open- Audit poskytuje multinájemnost z krabice!<br/> <br/>Klíčovou položkou jsou orgány (organizace) v Open- Audit. Uživatel má primární Org, stejně jako seznam Orgů, ke kterým může přístup. Uživatel to kombinuje se seznamem přiřazených "Roles", který definuje, jaké akce mohou přijmout na položky přidělené k Orgs mají přístup k. Kombinace uživatelských "orgs" a "rolí" definuje, co mohou a nemohou dělat v rámci Open- Auditu.<br/> <br/>Většina položek v Open- Audit jsou přiřazeny k Org. Zařízení, umístění, sítě, atd.<br/> <br/>Orgové můžou mít děti. Představte si organizační strukturu grafu (stromu). Pokud má uživatel přístup k určitému Orgu, má také přístup k potomkům těchto Orgů.</p>';

$GLOBALS["lang"]['<p>Quickly view the status of devices on your network.<br> <br></p>'] = '<p>Rychle si prohlédněte stav zařízení ve vaší síti.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Roles in Open-AudIT are a key item. A user has a primary Org as well as a list of Orgs they can access. A user combines this with a list of assigned Roles that define what actions they can take on items assigned to the Orgs they have access to. The combination of a users "orgs" and "roles" define what they can and cannot do within Open-AudIT.<br> <br>
        Get the complete Open-AudIT Enterprise experience. Creating roles allows fine grained control over what your users can do within Open-AudIT.<br> <br>
        The primary method for authorisation (what a user can do) is based on the users Roles. Default roles are defined as admin, org_admin, reporter and user. Each role has a set of permissions (Create, Read, Update, Delete) for each endpoint. The ability to define additional roles and edit existing roles is enabled in Open-AudIT Enterprise.<br> <br>Roles can also be used with LDAP (Active Directory and OpenLDAP) authorisation. Enterprise licensed installations have the ability to customise the LDAP group for each defined role.<br> <br></p>'] = '<p>Role v Open- Aud IT je klíčová položka. Uživatel má primární Org, stejně jako seznam Orgů, ke kterým může přístup. Uživatel to kombinuje se seznamem přiřazených Roles, které definují, jaké akce mohou přijmout na položky přidělené k Orgs, ke kterým mají přístup. Kombinace uživatelských "orgs" a "rolí" definuje, co mohou a nemohou dělat v rámci Open- Auditu.<br/> <br/>Získejte kompletní Open- Audit Enterprise zkušenosti. Vytvoření rolí umožňuje jemné zrnité ovládání nad tím, co vaši uživatelé mohou dělat v rámci Open- Audit.<br/> <br/>Primární metoda pro povolování (co může uživatel udělat) je založena na uživatelích Roles. Výchozí role jsou definovány jako admin, org _ admin, reporter a uživatel. Každá role má soubor oprávnění (Vytvořit, přečíst, Aktualizovat, Smazat) pro každý koncový bod. Schopnost definovat další role a upravovat stávající role je povolena v Open- Audit Enterprise.<br/> <br/>Roles lze také použít s povolením LDAP (Active Directory and OpenLDAP). Firma licencovaná zařízení mají schopnost přizpůsobit skupinu LDAP pro každou definovanou roli.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Rules examine attributes and make cahnges based on the appropriate rule.</p>'] = '<p>Pravidla zkoumají atributy a vytvářejí kahny na základě příslušného pravidla.</p>';

$GLOBALS["lang"]['<p>Scanning options allow you to easily apply a set of options to a discovery.<br> <br></p>'] = '<p>Skenování možností vám umožní snadno použít sadu možností k objevu.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Simple, intuitive, accurate geographic mapping provided by Google Maps. Open-AudIT leverages Google Maps to provide live, interactive geographic mapping of device locations. Automated conversion of street addresses to geocodes and longitude / latitude.<br> <br>
        </p>'] = '<p>Jednoduché, intuitivní, přesné geografické mapování poskytované Mapami Google. Open- Audit páky Mapy Google poskytují živé, interaktivní geografické mapování umístění zařízení. Automatická přeměna adresy ulic na geokódy a zeměpisnou délku / zeměpisnou šířku.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Software Packages are used to determine if antivirus, backup, firewall, approved or banned software is installed.<br> <br></p>'] = '<p>Software Packages se používají k určení, zda je nainstalován antivirový, záložní, firewall, schválený nebo zakázaný software.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Some examples of valid Subnet attributes are: 192.168.1.1 (a single IP address), 192.168.1.0/24 (a subnet), 192.168.1-3.1-20 (a range of IP addresses).<br> <br><em>NOTE</em> - Only a subnet (as per the examples - 192.168.1.0/24) will be able to automatically create a valid network for Open-AudIT. <br> <br>If you use an Active Directory type, make sure you have appropriate credentials to talk to your Domain Controller already in <a href="../credentials">credentials</a>.<br> <br></p>'] = '<p>Některé příklady platných atributů Subnet jsou: 192.168.1.1 (jedna IP adresa), 192.168.1.0 / 24 (a subnet), 192.168.1-3.1-20 (řada IP adres).<br/> <br/><em>POZNÁMKA</em> - Pouze podsíť (podle příkladů - 192.168.1.0 / 24) bude schopna automaticky vytvořit platnou síť pro Open- Audit. <br/> <br/>Pokud používáte typ Active Directory, ujistěte se, že máte příslušné pověřovací listiny, aby se vaše Domain Controller již v <a href="../credentials">pověření</a>.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Standards are stored in Open-AudIT.<br /><br /><br /><br /></p>'] = '<p>Standardy jsou uloženy v Open- Auditu.<br/><br/><br/><br/></p>';

$GLOBALS["lang"]['<p>Supported clients are Linux only.<br> <br></p>'] = '<p>Podporovaní klienti jsou pouze Linux.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Tasks have a schedule that mirrors the unix cron schedule. The attributes for minute, hour, day_of_month, month, day_of_week all act as per the cron definitions. You can select multiples of these using comma seperated values (no spaces). You can select every value using *.<br> <br>The <code>type</code> of the task can be one of: baselines, collectors, discoveries, queries, reports or summaries.<br> <br>If you wish to schedule a Baseline or Discovery, you will need to create these before creating the tasks. You must use the ID of the type of item in <code>sub_resource_id</code>. For example if you wish to schedule a Discovery, use that particular Discoveries ID in <code>sub_resource_id</code>.<br> <br>The value for <code>uuid</code> is specific to each Open-AudIT server. Your unique value can be found in the configuration.<br> <br>The <code>options</code> attribute is a JSON document containing any extra attributes required to run the task. The extra attributes for reports, queries and summaries are: <code>email_address</code> and <code>format</code>. The extra attribute for Bselines is <code>group_id</code>.<br> <br></p>'] = '<p>Úkoly mají plán, který odpovídá unixovému cron plánu. Atributy pro minutu, hodinu, den _ z _ měsíce, měsíc, den _ z _ týdne všechny fungují podle definice cron. Můžete si vybrat násobky z nich pomocí čárkově oddělených hodnot (bez mezer). Můžete si vybrat každou hodnotu pomocí *.<br/> <br/>• <code>type</code> Úkolem může být: základní linie, sběratelé, objevy, dotazy, zprávy nebo shrnutí.<br/> <br/>Chcete-li naplánovat výchozí nebo objevení, budete muset vytvořit tyto před vytvořením úkolů. Musíte použít ID typu položky v <code>sub_resource_id</code>. Například pokud chcete naplánovat Discovery, použijte tento konkrétní ID Objevení v <code>sub_resource_id</code>.<br/> <br/>Hodnota pro <code>uuid</code> je specifický pro každý Open- Audit server. Vaši jedinečnou hodnotu naleznete v konfiguraci.<br/> <br/>• <code>options</code> atribut je dokument JSON obsahující všechny další atributy potřebné pro spuštění úkolu. Další atributy pro zprávy, dotazy a shrnutí jsou: <code>email_address</code> a <code>format</code>. Další atribut pro Bselines je <code>group_id</code>.<br/> <br/></p>';

$GLOBALS["lang"]['<p>The <code>type</code> of the location will assign its icon.<br> <br></p>'] = '<p>• <code>type</code> umístění přiřadí ikonu.<br/> <br/></p>';

$GLOBALS["lang"]['<p>The Attributes endpoint allows you to add customized values to different attributes in Open-AudIT, at the moment this feature works on the Class, Environment, Status and Type attributes on Devices, the Type attribute for both Locations and Orgs as well as the Menu Category for Queries. If you view an item of one of the prvious types (say view a Lkocation) you will notice the Type attribute must be selected from a drop-down box. This is where those values are stored. Hence, if you would like to add a new Type to be chosen for a Location, add it using the Attributes feature.</p>'] = '<p>Konečný parametr Atributy vám umožní přidat vlastní hodnoty do různých atributů v Open- Audit, v současné době tato funkce funguje na atributy třídy, životního prostředí, stavu a typu na zařízení, atributu Typ jak pro umístění a Orgy, stejně jako kategorie nabídky pro dotazy. Pokud si prohlížíte položku jednoho z prchavých typů (řekněme pohled na Lkotion), všimnete si, že atribut Type musí být vybrán z krabičky "drop-down". Tady jsou tyto hodnoty uloženy. Proto, pokud byste chtěli přidat nový typ, který bude vybrán pro umístění, přidejte jej pomocí funkce Atributy.</p>';

$GLOBALS["lang"]['<p>The Collectors feature enables you to easily manage many "collector" computers that perform network discovery. All Collectors are centrally controlled from the Server. The only required network ports between the Collector and the Server are 80 and/or 443.<br> <br>It makes managing disparate networks quick, easy and simple. Open-AudIT Enterprise licensees get a single collector license included and have the option to buy more as required..<br> <br></p>'] = '<p>Funkce Collectors vám umožní snadno spravovat mnoho "kolektorů" počítačů, které provádějí objev sítě. Všichni sběratelé jsou centrálně ovládáni ze serveru. Jediné požadované síťové porty mezi Sběratelem a Serverem jsou80 a / nebo443.<br/> <br/>Díky tomu je řízení rozdílných sítí rychlé, snadné a jednoduché. Open- Audit Enterprise licensees získat jeden sběratelský licence v ceně a mají možnost koupit více podle potřeby..<br/> <br/></p>';

$GLOBALS["lang"]['<p>The SELECT section of your SQL <em>must</em> contain fully qualified columns. IE - <code>SELECT devices.id AS `devices.id`, devices.name AS `devices.name` ...</code>.<br> <br>The WHERE section of your SQL <em>must</em> contain <code>WHERE @filter</code> so Open-AudIT knows to restrict your query to the appropriate Orgs. SQL not containing this condition will result in the query failing to be created, unless you have the Admin role.<br> <br>An example query SQL showing attributes on devices that have an <code>os_group</code> attribute of "Linux" - <br><code>SELECT devices.id AS `devices.id`, devices.icon AS `devices.icon`, devices.type AS `devices.type`, devices.name AS `devices.name`, devices.os_name AS `devices.os_name` FROM devices WHERE @filter AND devices.os_group = "Linux"</code><br> <br></p>'] = '<p>Část SELECT vašeho SQL <em>musí</em> obsahují plně kvalifikované sloupce. IE - <code>SELECT devices.id AS `devices.id`, devices.name AS `devices.name` ...</code>.<br/> <br/>KDE část vašeho SQL <em>musí</em> obsahovat <code>WHERE @filter</code> Open- Audit ví, že váš dotaz má omezit na příslušné Orgy. SQL neobsahující tuto podmínku bude mít za následek, že dotaz nebude vytvořen, pokud nemáte roli admin.<br/> <br/>Příklad dotazu SQL zobrazující atributy na zařízeních, která mají <code>os_group</code> atribut "Linux" - <br/><code>SELECT devices.id AS `devices.id`, devices.icon AS `devices.icon`, devices.type AS `devices.type`, devices.name AS `devices.name`, devices.os_name AS `devices.os_name` FROM devices WHERE @filter AND devices.os_group = "Linux"</code><br/> <br/></p>';

$GLOBALS["lang"]['<p>The SELECT section of your SQL <em>must</em> only contain <code>DISTINCT(devices.id)</code>.<br> <br>The WHERE section of your SQL <em>must</em> contain <code>WHERE @filter</code> so Open-AudIT knows to restrict your query to the appropriate Orgs. SQL not containing this condition will result in the group failing to be created.<br> <br>An example for SQL to select all devices running the Debian OS - <code>SELECT DISTINCT(devices.id) FROM devices WHERE @filter AND devices.os_family = "Debian"</code><br> <br></p>'] = '<p>Část SELECT vašeho SQL <em>musí</em> pouze obsahovat <code>DISTINCT(devices.id)</code>.<br/> <br/>KDE část vašeho SQL <em>musí</em> obsahovat <code>WHERE @filter</code> Open- Audit ví, že váš dotaz má omezit na příslušné Orgy. SQL neobsahující tuto podmínku bude mít za následek, že skupina nebude vytvořena.<br/> <br/>Příklad pro SQL pro výběr všech zařízení spuštěných Debian OS - <code>SELECT DISTINCT(devices.id) FROM devices WHERE @filter AND devices.os_family = "Debian"</code><br/> <br/></p>';

$GLOBALS["lang"]['<p>The license endpoint allows you to track the number of licenses found on your devices.<br> <br>To create an entry to track your licenses you <em>must</em> to provide a name, an organization, the number of licenses acquired and the name of the software. On the field <code>match_string</code> you must provide the name of the software that you want to track, you can use the percent sign (%) as a wildcard in the match_string.<br> <br></p>'] = '<p>Endpoint licence vám umožní sledovat počet licencí nalezených na vašich zařízeních.<br/> <br/>Chcete-li vytvořit položku sledovat vaše licence <em>musí</em> poskytnout jméno, organizaci, počet nabytých licencí a název softwaru. Na hřišti <code>match_string</code> musíte poskytnout název softwaru, který chcete sledovat, můžete použít znak procenta (%) jako divokou kartu v match _ string.<br/> <br/></p>';

$GLOBALS["lang"]['<p>The network should be in the format 192.168.1.0/24.<br> <br></p>'] = '<p>Síť by měla být ve formátu 192.168.1.0 /24.<br/> <br/></p>';

$GLOBALS["lang"]['<p>The primary and optional secondary items should be fully qualified - ie, devices.type or software.name.<br> <br></p>'] = '<p>Primární a volitelné sekundární položky by měly být plně kvalifikovány - tj., zařízení. typ nebo software. jméno.<br/> <br/></p>';

$GLOBALS["lang"]['<p>There is no need to do anything if you are running Open-AudIT on a Linux server.<br>
<br>
Windows clients are just fine and require no special actions, however.... to enable this feature the audit script must be run locally on the target Windows system. It cannot be run remotely as we do with WMI calls when running the audit script on one Windows machine, while targeting a second Windows machine. To do this we need to copy the audit script to the target Windows machine and then run it. Unfortunately the service account that Apache runs under is the Local System account. This account has no access to remote (network based) resources. To work around this issue the service must be run under another account. It is easiest to just use the local Administrator account, but you can try any account you like as long as it has the required privileges. The Local System account has as much local access as the local Administrator account.<br>
<br>
See our page on enabling <a href="/index.php/faq?name=Running Open-AudIT Apache Service Under Windows">Running Open-AudIT Apache Service Under Windows</a></p>'] = '<p>Pokud provozujete Open- Audit na Linux serveru, není třeba nic dělat.<br/><br/>Klienti Windows jsou v pořádku a nevyžadují žádné speciální akce, nicméně.... pro umožnění této funkce musí být auditní skript spuštěn lokálně na cílovém systému Windows. Nemůže být spuštěn na dálku, jak to děláme s WMI hovory při spuštění auditního skriptu na jednom zařízení Windows, při cílení na druhý Windows stroj. K tomu potřebujeme zkopírovat kontrolní skript do cílového zařízení Windows a pak jej spustit. Bohužel servisní účet, pod kterým Apache běží, je účet Local System. Tento účet nemá přístup ke vzdáleným (síťovým) zdrojům. K řešení této otázky musí být služba vedena na jiném účtu. Nejjednodušší je použít účet místního správce, ale můžete zkusit jakýkoli účet, který se vám líbí, pokud má požadované výsady. Účet místního systému má stejný místní přístup jako účet místního správce.<br/><br/>Viz naše stránka o povolení <a href="/index.php/faq?name=Running Open-AudIT Apache Service Under Windows">Běh Open- Audit Apache Service pod Windows</a></p>';

$GLOBALS["lang"]['<p>These are the devices that live within a rack.<br> <br></p>'] = '<p>Tohle jsou zařízení, která žijí v regálu.<br/> <br/></p>';

$GLOBALS["lang"]['<p>This endpoint enables you to add your cloud infrastructure details. Open-AudIT will then reach out to your clouds using their native API and return your servers, just like any other device in Open-AudIT.<br> <br><em>NOTE</em> - To use this feature, we <em>must</em> enable the configuration items match_mac (for AWS) and match_hostname (for Azure). This will be done automatically the first time a cloud discovery is executed.<br> <br>Credentials for your cloud (<a href="/index.php/faq?name=Credentials for Microsoft Azure used in Cloud Discovery">Azure</a> or <a href="/index.php/faq?name=Credentials for Amazon AWS used in Cloud Discovery">AWS</a>) are required.<br> <br></p>'] = '<p>Tento koncový bod vám umožní přidat podrobnosti o vaší cloudové infrastruktuře. Open- Audit pak osloví vaše mraky pomocí jejich rodné API a vrátí vaše servery, stejně jako každé jiné zařízení v Open- Audit.<br/> <br/><em>POZNÁMKA</em> - Pro použití této funkce, jsme <em>musí</em> zapněte konfigurační položky match _ mac (pro AWS) a match _ hostname (pro Azure). To bude provedeno automaticky při prvním objevu mraků.<br/> <br/>Kredity pro váš cloud (<a href="/index.php/faq?name=Credentials for Microsoft Azure used in Cloud Discovery">Azure</a> nebo <a href="/index.php/faq?name=Credentials for Amazon AWS used in Cloud Discovery">AWS</a>) jsou povinné.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Vulnerabilities reporting based on the NIST CVE feed.<br> <br></p>'] = '<p>Zranitelnost se hlásí na základě NIST kanálu.<br/> <br/></p>';

$GLOBALS["lang"]['<p>We initially setup the default list of scripts with the default options. These default scripts cannot be deleted. You can create additional scripts for use by you as required. Your script will be based on one of the existing scripts and have custom options applied. The scripts can then be downloaded from the list page at menu -> Discover -> Audit Scripts -> List Audit Scripts<br> <br></p>'] = '<p>Zpočátku jsme nastavili výchozí seznam skriptů s výchozími možnostmi. Tyto výchozí skripty nelze smazat. Můžete vytvořit další skripty pro vaše použití dle potřeby. Váš skript bude založen na jednom ze stávajících skriptů a budou použity vlastní možnosti. Scénáře pak můžete stáhnout ze seznamu v menu - > Objevte - > Auditní skripty - > Seznam textů pro audit<br/> <br/></p>';

$GLOBALS["lang"]['<p>When using Regex for matching, a helpful page can be found on the <a href="https://www.php.net/manual/en/regexp.reference.meta.php" target="_blank"> PHP website</a>. Some differences to Perl Regex can be found <a href="https://www.php.net/manual/en/reference.pcre.pattern.differences.php" target="_blank">here</a>.</p>'] = '<p>Při použití Regex pro porovnání, užitečné stránky naleznete na <a href="https://www.php.net/manual/en/regexp.reference.meta.php" target="_blank"> Webová stránka PHP</a>. Některé rozdíly na Perl Regex lze nalézt <a href="https://www.php.net/manual/en/reference.pcre.pattern.differences.php" target="_blank">Tady.</a>.</p>';

$GLOBALS["lang"]['<p>Widgets can easily be created to show whatever is specific to your environment on your dashboards.<br> <br></p>'] = '<p>Widgety lze snadno vytvořit, aby se na přístrojových deskách ukázalo, co je specifické pro vaše prostředí.<br/> <br/></p>';

$GLOBALS["lang"]['<p>With Open-AudIT Professional and Enterprise you can automate and schedule discoveries, report generation, or baseline checks to run when you want, and as often as you need. Schedule your discoveries to run nightly and reports to be generated and emailed to key personnel each morning. Complex or simple schedules, device discovery and report generation is just a click away.<br> <br>Create individual discovery schedules for each subnet or AD controller, add in reports to be created for targeted audiences. Develop simple or complex schedules to support company needs, avoid backups or impact to operations, or simply to spread the load and speed-up audit completion.<br> <br></p>'] = '<p>S Open- Audit Profesionální a Enterprise můžete automatizovat a naplánovat objevy, hlásit generace, nebo základní kontroly spustit, když chcete, a tak často, jak budete potřebovat. Naplánujte si své objevy běžet v noci a zprávy, které mají být generovány a emailem klíčové personál každé ráno. Komplexní nebo jednoduché plány, objev zařízení a report generace je jen kliknutí.<br/> <br/>Vytvořit jednotlivé plány objevů pro každý subnet nebo AD regulátor, přidat ve zprávách, které mají být vytvořeny pro cílené publikum. Vypracovat jednoduché nebo složité plány na podporu potřeb společnosti, vyhnout se zálohám nebo dopad na operace, nebo jednoduše rozšířit zatížení a zrychlit dokončení auditu.<br/> <br/></p>';

$GLOBALS["lang"]['<p>You can create a script with all the options for any of the existing audit scripts - not just Windows. AIX, ESX, Linux, OSX and Windows are all covered.<br> <br></p>'] = '<p>Můžete vytvořit skript se všemi možnostmi pro některý ze stávajících skriptů - nejen Windows. AIX, ESX, Linux, OSX a Windows jsou pokryty.<br/> <br/></p>';

$GLOBALS["lang"]['<p>You can use the percent % sign as a wildcard in the match_string.<br> <br></p>'] = '<p>V match _ string můžete použít znak% jako divokou kartu.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Your racks help refine exactly where your devices are located.<br> <br></p>'] = '<p>Vaše regály pomáhají přesně určit, kde se vaše zařízení nacházejí.<br/> <br/></p>';

$GLOBALS["lang"]['<strong>NOTE</strong> - You are accessing this URL from the local Open-AudIT server. The downloaded script will not be able to submit when run on any other machine. If you need to audit other machines, please download the script from any remote machine, not using a browser on the Open-AudIT server itself.'] = '<strong>POZNÁMKA</strong> - Přistupujete k tomuto URL z místního Open- Audit serveru. Stáhnutý skript nebude schopen zaslat při spuštění na jiném stroji. Pokud potřebujete provést audit jiných strojů, stáhněte si prosím skript z libovolného vzdáleného stroje, nikoli pomocí prohlížeče na samotném serveru Open- Audit.';

$GLOBALS["lang"]['A CVE item that does not contain a filter to determine the affected item(s).'] = 'Položka CVE, která neobsahuje filtr pro určení dotčené položky (dotčených položek).';

$GLOBALS["lang"]['A Google Maps API Key is required for this function.'] = 'Mapy Google API Pro tuto funkci je nutný klíč.';

$GLOBALS["lang"]['A JSON array of device IDs that will have this benchmark executed.'] = 'JSON pole ID zařízení, které bude mít tuto referenční hodnotu provedeno.';

$GLOBALS["lang"]['A JSON array of objects matching the software name taken from the CVE, enriched with the software name retrieved by Open-AudIT.'] = 'JSON pole objektů odpovídající softwarové jméno převzaté z CVE, obohacené o softwarové jméno získané Open- Audit.';

$GLOBALS["lang"]['A JSON array of values to test for this vulnerability.'] = 'JSON pole hodnot pro testování této zranitelnosti.';

$GLOBALS["lang"]['A JSON document containing the Orgs assigned to this user. IDs taken from <code>orgs.id</code>. If a user has access to an Org, they have access to that Orgs descendants.'] = 'Dokument JSON obsahující Orgy přidělené tomuto uživateli. Průkazy totožnosti odebrané <code>orgs.id</code>. Pokud má uživatel přístup k Orgu, má přístup k potomkům Orgů.';

$GLOBALS["lang"]['A JSON document containing the required attributes depending on <code>scripts.type</code>.'] = 'Dokument JSON obsahující požadované atributy v závislosti na <code>scripts.type</code>.';

$GLOBALS["lang"]['A JSON document containing the required attributes overriding the chosen discovery_scan_options.'] = 'Dokument JSON obsahující požadované atributy převažující nad zvoleným objevem _ scan _ options.';

$GLOBALS["lang"]['A JSON document containing the required attributes overriding the default device match options.'] = 'Dokument JSON obsahující požadované atributy převažující nad výchozími možnostmi shody zařízení.';

$GLOBALS["lang"]['A JSON document containing the roles assigned to this user. Role names taken from <code>roles.name</code>.'] = 'Dokument JSON obsahující role přidělené tomuto uživateli. Název role převzatý z <code>roles.name</code>.';

$GLOBALS["lang"]['A JSON object containing an array of attributes to change if the match occurs.'] = 'JSON objekt obsahující řadu atributů pro změnu, pokud dojde k zápasu.';

$GLOBALS["lang"]['A JSON object containing an array of attributes to match.'] = 'JSON objekt obsahující řadu atributů, které se shodují.';

$GLOBALS["lang"]['A JSON object containing collection specific options.'] = 'JSON objekt obsahující specifické možnosti sběru.';

$GLOBALS["lang"]['A JSON object populated via a Cloud discovery.'] = 'Objekt JSON obývaný objevem Cloud.';

$GLOBALS["lang"]['A JSON representation containing the details of the queue item to be executed.'] = 'Zastoupení JSON obsahující podrobnosti o položce fronty, která má být provedena.';

$GLOBALS["lang"]['A JSON representation of the fields for this integration.'] = 'JSON reprezentuje pole pro tuto integraci.';

$GLOBALS["lang"]['A JSON representation of the individual tests and their results on all devices this baseline has been run against.'] = 'JSON reprezentace jednotlivých testů a jejich výsledky na všech zařízeních tato výchozí hodnota byla spuštěna proti.';

$GLOBALS["lang"]['A JSON representation of the tests that make up this policy.'] = 'JSON reprezentuje testy, které tvoří tuto politiku.';

$GLOBALS["lang"]['A LAN can be connected to a WAN using a router.'] = 'LAN lze připojit k WAN routerem.';

$GLOBALS["lang"]['A Metropolitan area network (MAN) is a large computer network that usually spans a city or a large campus.'] = 'Metropolitní síť (MAN) je velká počítačová síť, která obvykle zahrnuje město nebo velký kampus.';

$GLOBALS["lang"]['A Seed discovery uses an initial IP to retrieve the IPs of any other devices it knows about, adds those IPs to the list and scans those - again asking for any IPs those additional devices knows about. Rinse and repeat. It is intelligent enough to know if it has already scanned a given IP in its execution and discards any already scanned (or even on the list to be scanned).'] = 'A Objev semene využívá počáteční IP pro získání IP všech dalších zařízení, o kterých ví, přidává tyto IP do seznamu a skenuje je - znovu žádá o jakékoliv IP, o kterých tato další zařízení ví. Opláchněte a opakujte. Je dostatečně inteligentní na to, aby věděl, zda již skenoval dané IP zařízení při jeho provádění a vyřazuje jakékoliv již skenované (nebo dokonce na seznamu, který má být skenován).';

$GLOBALS["lang"]['A Subnet discovery will scan the IPs provided.'] = 'Objev podsítě prověří IP.';

$GLOBALS["lang"]['A URL provided to the agent which will then download the file and store it on the local disk.'] = 'URL poskytnuté agentovi, který pak soubor stáhne a uloží na místní disk.';

$GLOBALS["lang"]['A URL to a file to download.'] = 'URL do souboru ke stažení.';

$GLOBALS["lang"]['A backbone network is part of a computer network infrastructure that provides a path for the exchange of information between different LANs or sub-networks. A backbone can tie together diverse networks within the same building, across different buildings, or over a wide area.<br><br>For example, a large company might implement a backbone network to connect departments that are located around the world. The equipment that ties together the departmental networks constitutes the network backbone. When designing a network backbone, network performance and network congestion are critical factors to take into account. Normally, the backbone network capacity is greater than that of the individual networks connected to it.<br><br>Another example of a backbone network is the Internet backbone, which is the set of wide area networks (WANs) and core routers that tie together all networks connected to the Internet.'] = 'Síť páteře je součástí infrastruktury počítačové sítě, která poskytuje cestu k výměně informací mezi různými LAN nebo subsítěmi. páteř může spojit různé sítě v rámci téže budovy, napříč různými budovami nebo v celé oblasti.<br/><br/>Například velká společnost by mohla zavést páteřní síť pro propojení oddělení, která se nacházejí po celém světě. Zařízení, které spojuje sítě oddělení, tvoří páteř sítě. Při navrhování páteře sítě je třeba vzít v úvahu výkonnost sítě a přetížení sítě. Za normálních okolností je kapacita páteřní sítě větší než kapacita jednotlivých připojených sítí.<br/><br/>Dalším příkladem páteřní sítě je páteř internetu, což je soubor širokých sítí (WANS) a hlavních routerů, které spojují všechny sítě připojené k internetu.';

$GLOBALS["lang"]['A calculated field that displays the number of times this piece of software was found on the computers in the selected Org (and its descendants if configured).'] = 'Vypočítané pole, které zobrazuje počet případů, kdy byl tento kus softwaru nalezen na počítačích ve zvoleném Orgu (a jeho potomky, pokud jsou konfigurovány).';

$GLOBALS["lang"]['A campus area network (CAN) is made up of an interconnection of LANs within a limited geographical area. The networking equipment (switches, routers) and transmission media (optical fiber, copper plant, Cat5 cabling, etc.) are almost entirely owned by the campus tenant / owner (an enterprise, university, government, etc.).<br><br>For example, a university campus network is likely to link a variety of campus buildings to connect academic colleges or departments, the library, and student residence halls.'] = 'Síť areálu kampusu (CAN) je tvořena propojením LAN v omezené zeměpisné oblasti. Síťová zařízení (spínače, routery) a přenosová média (optická vlákna, měděné zařízení, kabeláž Cat5 atd.) jsou téměř výhradně ve vlastnictví nájemce / vlastníka kampusu (podnik, univerzita, vláda atd.).<br/><br/>Například síť univerzitních kampusu bude pravděpodobně spojovat různé budovy kampusu s cílem spojit akademické vysoké školy nebo oddělení, knihovnu a studentské rezidenční haly.';

$GLOBALS["lang"]['A closed port is accessible (it receives and responds to Nmap probe packets), but there is no application listening on it. They can be helpful in showing that a host is up on an IP address (host discovery, or ping scanning), and as part of OS detection. Because closed ports are reachable, it may be worth scanning later in case some open up. Administrators may want to consider blocking such ports with a firewall. Then they would appear in the filtered state, discussed next.'] = 'Je přístupný uzavřený port (přijímá a reaguje na pakety sond Nmap), ale není na něm žádná aplikace. Mohou být užitečné při ukazování, že hostitel je na IP adrese (objev hostitele, nebo ping skenování), a jako součást detekce OS. Vzhledem k tomu, uzavřené porty jsou dosažitelné, to může stát za kontrolu později v případě, že některé otevřené. Administrátoři by měli zvážit blokování těchto přístavů firewallem. Pak by se objevili v filtrovaném stavu a diskutovali o tom.';

$GLOBALS["lang"]['A collector is either in Collector or Stand-Alone mode.'] = 'Sběratel je buď v režimu Sběratel, nebo Stand- Alone.';

$GLOBALS["lang"]['A comma separated list of applicable CVEs.'] = 'Oddělený seznam platných CVEs čárka.';

$GLOBALS["lang"]['A comma separated list of values, one of which can be selected.'] = 'Samostatný seznam hodnot, z nichž jeden může být vybrán.';

$GLOBALS["lang"]['A command to run. When the agent is Windows based, this command is run from within the powershell agent.'] = 'Příkaz k útěku. Když je agent založen na Windows, je tento příkaz spuštěn zevnitř Powershell agenta.';

$GLOBALS["lang"]['A dashboard is made up of three columns and two rows of what we call <i>widgets</i>. A widget is very similar to a summary, only we take the summary concept a bit further. Widgets are created in a simple fashion using a couple of drop down boxes - or you can elect to use your own SQL for complete customisability.'] = 'Přístrojová deska se skládá ze tří sloupců a dvou řad toho, čemu říkáme <i>widgety</i>. Widget je velmi podobný shrnutí, jen jsme se shrnout koncept trochu dále. Widgety jsou vytvořeny jednoduchým způsobem pomocí několika schránek - nebo si můžete zvolit použít vlastní SQL pro kompletní přizpůsobivost.';

$GLOBALS["lang"]['A filtered port is considered open (and will trigger device detection).'] = 'Filtrovaný port je považován za otevřený (a spustí detekci spouštěcího zařízení).';

$GLOBALS["lang"]['A global area network (GAN) is a network used for supporting mobile across an arbitrary number of wireless LANs, satellite coverage areas, etc. The key challenge in mobile communications is handing off user communications from one local coverage area to the next. In IEEE Project 802, this involves a succession of terrestrial wireless LANs.'] = 'Síť globální oblasti (GAN) je síť sloužící k podpoře mobilních sítí přes libovolný počet bezdrátových LAN, oblastí družicového pokrytí atd. Klíčovým úkolem v mobilní komunikaci je předávání uživatelské komunikace z jedné místní oblasti pokrytí do druhé. V projektu IEEE 802 se jedná o řadu pozemních bezdrátových LAN.';

$GLOBALS["lang"]['A home area network (HAN) is a residential LAN used for communication between digital devices typically deployed in the home, usually a small number of personal computers and accessories, such as printers and mobile computing devices. An important function is the sharing of Internet access, often a broadband service through a cable TV or digital subscriber line (DSL) provider.'] = 'Síť domovské oblasti (HAN) je obytná síť LAN používaná pro komunikaci mezi digitálními zařízeními obvykle nasazenými v domácnosti, obvykle malý počet osobních počítačů a příslušenství, jako jsou tiskárny a mobilní výpočetní zařízení. Důležitou funkcí je sdílení přístupu k internetu, často širokopásmové služby prostřednictvím kabelové televize nebo digitální předplatné (DSL) poskytovatele.';

$GLOBALS["lang"]['A list of custom TCP ports to scan (22 is SSH, 135 is WMI, 62078 is iPhone sync).'] = 'Seznam vlastních TCP portů ke skenování (22 je SSH, 135 je WMI, 62078 je iPhone synchronizace).';

$GLOBALS["lang"]['A list of custom UDP ports to scan (161 is SNMP).'] = 'Seznam vlastních UDP portů ke skenování (161 je SNMP).';

$GLOBALS["lang"]['A local area network (LAN) is a network that connects computers and devices in a limited geographical area such as a home, school, office building, or closely positioned group of buildings. Each computer or device on the network is a node. Wired LANs are most likely based on Ethernet technology. Newer standards such as ITU-T G.hn also provide a way to create a wired LAN using existing wiring, such as coaxial cables, telephone lines, and power lines.<br><br>The defining characteristics of a LAN, in contrast to a wide area network (WAN), include higher data transfer rates, limited geographic range, and lack of reliance on leased lines to provide connectivity. Current Ethernet or other IEEE 802.3LAN technologies operate at data transfer rates up to 100 Gbit/s, standardized by IEEE in 2010. Currently, 400 Gbit/s Ethernet is being developed.'] = 'Místní síť (LAN) je síť, která spojuje počítače a zařízení v omezené zeměpisné oblasti, jako je domov, škola, kancelářská budova nebo úzce umístěná skupina budov. Každý počítač nebo zařízení v síti je nód. S největší pravděpodobností jsou Wired LAN založeny na technologii Ethernet. Novější normy, jako je ITU-T G.hn, také poskytují způsob, jak vytvořit kabelovou síť LAN pomocí stávajících kabelů, jako jsou koaxiální kabely, telefonní linky a napájecí vedení.<br/><br/>Definice charakteristik LAN, na rozdíl od široké sítě oblastí (WAN), zahrnují vyšší míru přenosu dat, omezený zeměpisný rozsah a nedostatek závislosti na pronajatých okruzích pro zajištění konektivity. Aktuální technologie Ethernet nebo jiné technologie IEEE 802.3LAN fungují při rychlosti přenosu dat až do 100 Gbit / s, standardizované IEEE v roce 2010. V současné době 400 Gbit / s Ethernet se vyvíjí.';

$GLOBALS["lang"]['A location is a physical address that can have devices associated with it. You can assign it coordinates and if there are devices assigned, the location will appear on the Map when you have an Open-AudIT Enterprise license.'] = 'Lokalita je fyzická adresa, která s tím může být spojena. Můžete ji přiřadit souřadnice a pokud jsou přiřazena zařízení, zobrazí se umístění na mapě, když máte licenci Open- Audit Enterprise.';

$GLOBALS["lang"]['A location name will help you to find these devices in the future.'] = 'Název umístění vám pomůže najít tato zařízení v budoucnosti.';

$GLOBALS["lang"]['A lower number means it will be applied before other rules.'] = 'Nižší počet znamená, že se použije před ostatními pravidly.';

$GLOBALS["lang"]['A lower number means it will be applied before other rules. The default weight is 100.'] = 'Nižší počet znamená, že se použije před ostatními pravidly. Výchozí hmotnost je100.';

$GLOBALS["lang"]['A new user logged in to Open-AudIT and was authenticated and authorized by the LDAP sever. That user was then created in Open-AudIT and logged in. Success.'] = 'Nový uživatel se přihlásil do Open- Auditu a byl ověřen a schválen LDAP severem. Tento uživatel byl pak vytvořen v Open- Audit a přihlášen. Úspěch.';

$GLOBALS["lang"]['A package is a piece of installed softare. A package has a type - antivirus, approved, backup, banned, cloud, firewall, ignored, license or other.'] = 'Balíček je kus nainstalovaného softaru. Balíček má typ - antivirus, schválen, zálohování, zakázáno, cloud, firewall, ignorován, licence nebo jiné.';

$GLOBALS["lang"]['A password (stored as a hash) that enables logon when using application authentication.'] = 'Heslo (uložené jako hash), které umožňuje přihlášení při použití autentizace aplikace.';

$GLOBALS["lang"]['A person has an account in the Open-AudIT application. Their user account has a list of associated Roles and Organizations. The roles the user has determines WHAT they can do. The Organizations a user has determines WHICH items they can act upon.<br><br>When a user requests to perform an operation (create, read, update, delete) on a collection item, the roles are consulted to see if they are allowed to perform that action, then the orgs are consulted to determine if the collection item belongs to an org the user has permission to act on.'] = 'Osoba má účet v aplikaci Open- Audit. Jejich uživatelský účet má seznam přidružených Roles a organizací. Role, které má uživatel určuje, co může dělat. Organizace, na které uživatel určí, na které položky může působit.<br/><br/>Když uživatel požádá o provedení operace (vytvořit, přečíst, aktualizovat, smazat) na sběratelské položce, jsou konzultovány role, aby zjistil, zda je jim dovoleno provádět tuto akci, pak jsou konzultovány orgs určit, zda sbírka položka patří do org uživatel má povolení jednat na.';

$GLOBALS["lang"]['A personal area network (PAN) is a computer network used for communication among computer and different information technological devices close to one person. Some examples of devices that are used in a PAN are personal computers, printers, fax machines, telephones, PDAs, scanners, and even video game consoles. A PAN may include wired and wireless devices. The reach of a PAN typically extends to 10 meters. A wired PAN is usually constructed with USB and FireWire connections while technologies such as Bluetooth and infrared communication typically form a wireless PAN.'] = 'Osobní síť oblasti (PAN) je počítačová síť používaná pro komunikaci mezi počítačem a různými informačními technologickými zařízeními blízkými jedné osobě. Některé příklady zařízení, které se používají v PAN jsou osobní počítače, tiskárny, faxové stroje, telefony, PDA, skenery, a dokonce i herní konzole. PAN může obsahovat drátová a bezdrátová zařízení. Rozsah PAN obvykle sahá až 10 metrů. Drátěný PAN je obvykle konstruován s USB a FireWire připojením, zatímco technologie jako Bluetooth a infračervená komunikace obvykle tvoří bezdrátový PAN.';

$GLOBALS["lang"]['A query is essentially a SQL statement. This statement is run against the database with the automatic addition of the limit, filtered to apply to only those requested items and only those items the user has permission to view. A Query can be created using menu -> Manage -> Queries -> Create Queries. Queries contain an org_id and are hence restricted to the appropriate users. A user must have the org_admin or reporter role(s) to create, update or delete a query. All users can execute a query. A query has a name attribute used for the menu item as well as a menu category attribute. This tells the Open-Audit GUI which submenu to place the query in. There is also menu display which should be set to <i>y</i> to enable the query in the GUI (<i>n</i> to prevent the query from appearing at all). The query would still run if called using its <code>id</code>, regardless of menu displays value.'] = 'Otázka je v podstatě SQL prohlášení. Tento výpis je spuštěn proti databázi s automatickým přidáním limitu, filtrovaný tak, aby se vztahoval pouze na ty požadované položky a pouze ty položky, které má uživatel povolení k prohlížení. Dotaz lze vytvořit pomocí menu - > Správa - > Dotazy - > Vytvořit dotazy. Dotazy obsahují org _ id a jsou proto omezeny na příslušné uživatele. Uživatel musí mít roli org _ admin nebo reporter (s) pro vytvoření, aktualizaci nebo smazání dotazu. Všichni uživatelé mohou provést dotaz. Dotaz má atribut názvu používaný pro položku menu i atribut kategorie menu. To ukazuje, Open- Audit GUI, které podmenu umístit dotaz. K dispozici je také zobrazení menu, které by mělo být nastaveno na <i>y</i> umožnit dotaz v GUI (<i>n</i> k zabránění tomu, aby se dotaz vůbec objevil). Dotaz by byl stále spuštěn, kdyby byl volán <code>id</code>, bez ohledu na nabídku zobrazuje hodnotu.';

$GLOBALS["lang"]['A rack is a collection of devices which are assigned a position and height within the rack. A device can optionally have a picture associated with it. A rack is placed in a row. We have created a very granular system for positioning of racks, which is as follows. At the top level (as always) is the Organisation (Org). An Org can have multiple locations (as has always been the case). With the addition of the Racks feature, a location can now contain one or more Buildings. A building can contain one or more Floors. A floor can contain one or more Rooms. A room can contain one or more Rows. This sounds like a lot of work, but defaults are created for you. Create a new Location and the sub-components will be automatically created for you. If you need more items (buildings, rooms, etc) you can add them as you like. A rack can also be part of a <i>pod</i> of racks. The pod attribute works as a tag, rather than a strict hierarchical inheritance model as per buildings, floors, etc.<br><br>Racks are a feature available to Open-AudIT Enterprise licensed customers.'] = 'Rack je sbírka zařízení, kterým je v racku přiřazena poloha a výška. Přístroj může mít volitelně s ním spojený obrázek. V řadě je umístěna police. Vytvořili jsme velmi zrnitý systém pro umístění regálů, který je následující. Na nejvyšší úrovni (jako vždy) je Organizace (Org). Org může mít více míst (jako vždy byl případ). S přidáním funkce Racks, umístění může nyní obsahovat jednu nebo více budov. Budova může obsahovat jednu nebo více Podlah. Podlaha může obsahovat jeden nebo více pokojů. Pokoj může obsahovat jeden nebo více Řádků. To zní jako hodně práce, ale chyby jsou vytvořeny pro vás. Vytvořit nové umístění a subkomponenty budou automaticky vytvořeny pro vás. Pokud potřebujete více položek (budovy, pokoje atd.), můžete je přidat, jak chcete. Rack může být také součástí <i>lup</i> z regálů. Atribut pod funguje jako značka, spíše než striktní hierarchické dědictví model na budovy, podlahy, atd.<br/><br/>Racks jsou funkce k dispozici pro Open- Audit Enterprise licencovaných zákazníků.';

$GLOBALS["lang"]['A routing domain or address space where the IP addresses and MAC addresses are unique.'] = 'Směrování domény nebo adresního prostoru, kde IP adresy a MAC adresy jsou jedinečné.';

$GLOBALS["lang"]['A sample cron file for Linux is below. This should be placed in'] = 'Vzorkový cron soubor pro Linux je níže. To by mělo být umístěno';

$GLOBALS["lang"]['A security zone is a administrative domain or policy domain within the Network Domain.'] = 'Bezpečnostní zóna je administrativní doménou nebo oblastí politiky v rámci domény sítě.';

$GLOBALS["lang"]['A seed discovery is another type of discovery, where you provide the IP of a single <i>seed</i> device. This device is audited, and any IPs it knows are then added to the list of IPs to be audited. Then, those devices are audited and any IPs they know are also added to the list of IPs for auditing. This process then continues within the parameters configured by the user.'] = 'Objev semen je jiný druh objevu, kde poskytnete IP jednoho <i>Semena</i> zařízení. Toto zařízení je zkontrolováno a všechny integrované projekty, o nichž ví, jsou poté přidány na seznam integrovaných projektů, které mají být zkontrolovány. Poté se tato zařízení podrobí auditu a všechny integrované projekty, které znají, se rovněž doplní na seznam integrovaných projektů pro audit. Tento proces pak pokračuje v rámci parametrů nakonfigurovaných uživatelem.';

$GLOBALS["lang"]['A short description of the log entry.'] = 'Krátký popis záznamu.';

$GLOBALS["lang"]['A storage area network (SAN) is a dedicated network that provides access to consolidated, block level data storage. SANs are primarily used to make storage devices, such as disk arrays, tape libraries, and optical jukeboxes, accessible to servers so that the devices appear like locally attached devices to the operating system. A SAN typically has its own network of storage devices that are generally not accessible through the local area network by other devices. The cost and complexity of SANs dropped in the early 2000s to levels allowing wider adoption across both enterprise and small to medium-sized business environments.'] = 'Síť úložných prostor (SAN) je vyhrazená síť, která poskytuje přístup k konsolidovanému ukládání dat na úrovni bloku. SN se používají především k tomu, aby se paměťová zařízení, jako jsou disková pole, kazetové knihovny a optické jukeboxy, dostala na servery tak, aby se zařízení jevila jako lokálně připojená zařízení k operačnímu systému. Společnost SAN má obvykle vlastní síť úložných zařízení, která nejsou prostřednictvím místní sítě přístupná jinými zařízeními. Náklady a složitost SN se na počátku roku 2000s snížily na úroveň umožňující širší přijetí jak v podnikatelském, tak v malém až středně velkém podnikatelském prostředí.';

$GLOBALS["lang"]['A string that matches the <code>software.name</code> attribute. You can use the standard SQL wildcard of percent (%) to match one or more characters.'] = 'Řetězec, který odpovídá <code>software.name</code> atribut. K porovnání jednoho nebo více znaků můžete použít standardní SQL divokou kartu procenta (%).';

$GLOBALS["lang"]['A structured system for managing sensitive information'] = 'Strukturovaný systém pro správu citlivých informací';

$GLOBALS["lang"]['A timestamp.'] = 'Časový údaj.';

$GLOBALS["lang"]['A user has a primary Org as well as a list of Orgs they can access. A user combines this with a list of assigned roles that define what actions they can take on items assigned to the Orgs they have access to. The combination of a users <i>orgs</i> and <i>roles</i> define what they can and cannot do within Open-AudIT.'] = 'Uživatel má primární Org, stejně jako seznam Orgů, ke kterým může přístup. Uživatel to kombinuje se seznamem přiřazených rolí, které definují, jaké akce mohou přijmout na položky přidělené k Orgs, ke kterým mají přístup. Kombinace uživatelů <i>orgy</i> a <i>role</i> definujte, co mohou a nemohou dělat v rámci Open- Audit.';

$GLOBALS["lang"]['A user will have a list of associated organizations (orgs). Each org the user has will allow them to act upon items within that org as per their role(s).<br><br>All orgs except the default org have a parent. Think of an Org Chart. If a user has permission on an Org, they also have permission on any descendants of that Org.<br><br>Users are also allowed permission on a child org to see the items from parent orgs for certain collections. Those are: dashboards, discovery_scan_options, fields, files, groups, queries, reports, roles, rules, scripts, summaries, widgets.<br><br>Do not forget you have granular control over what users can see and do using Roles in Enterprise.'] = 'Uživatel bude mít seznam přidružených organizací (orgs). Každý org, který uživatel má, jim umožní působit na položky uvnitř tohoto org podle jejich role (úloh).<br/><br/>Všechny orgy kromě výchozího org mají rodiče. Mysli na Orgův graf. Pokud má uživatel povolení na Org, má také povolení na jakékoli potomky tohoto Org.<br/><br/>Uživatelům je také povoleno povolit na dětském org vidět položky z rodičovských orgs pro některé sbírky. To jsou: dashboards, discan _ options, fields, files, group, questions, reports, roles, rules, scripts, summies, widgety.<br/><br/>Nezapomeňte, že máte granulární kontrolu nad tím, co uživatelé mohou vidět a dělat pomocí Roles in Enterprise.';

$GLOBALS["lang"]['A user will have a list of associated organizations (orgs). Each org the user has will allow them to act upon items within that org as per their role(s).<br><br>All orgs except the default org have a parent. Think of an Org Chart. If a user has permission on an Org, they also have permission on any descendants of that Org.<br><br>We have also allow a user with permission on a child org to see the items from parent orgs for certain collections. Those are: dashboards, discovery_scan_options, fields, files, groups, queries, roles, rules, scripts, summaries, widgets.<br><br>Do not forget you have granular control over what users can see and do using'] = 'Uživatel bude mít seznam přidružených organizací (orgs). Každý org, který uživatel má, jim umožní působit na položky uvnitř tohoto org podle jejich role (úloh).<br/><br/>Všechny orgy kromě výchozího org mají rodiče. Mysli na Orgův graf. Pokud má uživatel povolení na Org, má také povolení na jakékoli potomky tohoto Org.<br/><br/>Máme také umožnit uživateli se svolením na dětském org vidět položky z rodičovských orgs pro určité sbírky. To jsou: dashboards, discan _ options, fields, files, group, questions, roles, rules, scripts, summies, widgety.<br/><br/>Nezapomeňte, že máte granulární kontrolu nad tím, co uživatelé mohou vidět a dělat pomocí';

$GLOBALS["lang"]['A virtual private network (VPN) is an overlay network in which some of the links between nodes are carried by open connections or virtual circuits in some larger network (e.g., the Internet) instead of by physical wires. The data link layer protocols of the virtual network are said to be tunneled through the larger network when this is the case. One common application is secure communications through the public Internet, but a VPN need not have explicit security features, such as authentication or content encryption. VPNs, for example, can be used to separate the traffic of different user communities over an underlying network with strong security features.<br><br>VPN may have best-effort performance, or may have a defined service level agreement (SLA) between the VPN customer and the VPN service provider. Generally, a VPN has a topology more complex than point-to-point.'] = 'Virtuální soukromá síť (VPN) je síť, ve které jsou některé spoje mezi uzly přenášeny otevřenými spoji nebo virtuálními obvody v některé větší síti (např. Internet) namísto fyzických vodičů. Protokol o vrstvě datového spoje virtuální sítě se říká, že je-li tomu tak, je protlačován větší sítí. Jednou společnou aplikací je bezpečná komunikace prostřednictvím veřejného internetu, ale VPN nemusí mít explicitní bezpečnostní prvky, jako je autentizace nebo šifrování obsahu. Například VPN lze použít k oddělení provozu různých uživatelských komunit přes základní síť se silnými bezpečnostními prvky.<br/><br/>VPN může mít nejlepší výkon, nebo může mít definovanou smlouvu o úrovni služeb (SLA) mezi zákazníkem VPN a poskytovatelem služeb VPN. Obecně platí, že VPN má topologii složitější než point-to-point.';

$GLOBALS["lang"]['A vulnerability affecting availability may allow attackers to disrupt services, crash systems, or cause denial-of-service (DoS) (None, Low, High).'] = 'Nezranitelnost ovlivňující dostupnost může útočníkům umožnit narušit služby, havarijní systémy, nebo způsobit popírání služeb (DoS) (žádné, nízké, vysoké).';

$GLOBALS["lang"]['A vulnerability affecting confidentiality may allow attackers to read sensitive data, such as personal information, credentials, or proprietary business data (None, Low, High).'] = 'Nezranitelnost, která má vliv na důvěrnost, může útočníkům umožnit číst citlivé údaje, jako jsou osobní údaje, pověřovací listiny nebo proprietární obchodní údaje (žádné, nízké, vysoké).';

$GLOBALS["lang"]['A vulnerability affecting integrity may allow attackers to modify data, inject malicious code, or alter system configurations (None, Low, High).'] = 'Nezranitelnost ovlivňující integritu může útočníkům umožnit modifikovat data, aplikovat škodlivý kód nebo měnit konfigurace systému (Žádný, nízký, vysoký).';

$GLOBALS["lang"]['A vulnerability can be editied and more specific package names provided where the enrichment data is insufficient or the generated SQL is not quite correct.'] = 'Nezranitelnost může být poučena a konkrétnější názvy balíků za předpokladu, že údaje o obohacení jsou nedostatečné nebo generované SQL není zcela správné.';

$GLOBALS["lang"]['A vulnerability item in Open-AudIT can be thought of as essentially a query against your database to determine your potential exposure to a given CVE report. A vulnerability is made up of the CVE report, along with enrichment data from FirstWave. These two items are combined to produce a suitable query that is automatically downloaded from FirstWave.'] = 'Položka zranitelnosti v Open- Auditu může být považována v podstatě za dotaz proti vaší databázi pro určení vaší potenciální expozice dané zprávě CVE. Nezranitelnost je tvořena zprávou CVE, spolu s obohacením dat z FirstWave. Tyto dvě položky jsou kombinovány, aby vytvořily vhodný dotaz, který je automaticky stažen z FirstWave.';

$GLOBALS["lang"]['A wide area network (WAN) is a computer network that covers a large geographic area such as a city, country, or spans even intercontinental distances. A WAN uses a communications channel that combines many types of media such as telephone lines, cables, and air waves. A WAN often makes use of transmission facilities provided by common carriers, such as telephone companies. WAN technologies generally function at the lower three layers of the OSI reference model: the physical layer, the data link layer, and the network layer.'] = 'Široká síť oblastí (WAN) je počítačová síť, která pokrývá velkou zeměpisnou oblast, jako je město, země, nebo zahrnuje i mezikontinentální vzdálenosti. WAN používá komunikační kanál, který kombinuje mnoho typů médií, jako jsou telefonní linky, kabely a vzduchové vlny. WAN často využívá přenosových zařízení poskytovaných běžnými dopravci, jako jsou telefonní společnosti. Technologie WAN obecně fungují v nižších třech vrstvách referenčního modelu OSI: fyzikální vrstva, vrstva datového spoje a síťová vrstva.';

$GLOBALS["lang"]['AD Group'] = 'Skupina AD';

$GLOBALS["lang"]['ADSL, HFC, ISDN, etc.'] = 'ADSL, HFC, ISDN, atd.';

$GLOBALS["lang"]['AIX'] = 'AIX';

$GLOBALS["lang"]['ALL IPs'] = 'Všechny IP';

$GLOBALS["lang"]['API / Web Access'] = 'API / Web Access';

$GLOBALS["lang"]['API Documentation'] = 'Dokumentace API';

$GLOBALS["lang"]['API Key required.'] = 'Požadovaný API klíč.';

$GLOBALS["lang"]['API Result'] = 'Výsledek API';

$GLOBALS["lang"]['About'] = 'O';

$GLOBALS["lang"]['Above are the only required items.'] = 'Výše jsou pouze požadované položky.';

$GLOBALS["lang"]['Accept'] = 'Přijmout';

$GLOBALS["lang"]['Access Model'] = 'Přístupový model';

$GLOBALS["lang"]['access_point'] = 'Přístupový bod';

$GLOBALS["lang"]['Access Point'] = 'Přístupový bod';

$GLOBALS["lang"]['access_token'] = 'Přístup Token';

$GLOBALS["lang"]['Access Token'] = 'Přístup Token';

$GLOBALS["lang"]['Access to the admin$ share and RPC uses the SMB2 protocol.'] = 'Přístup k podílu admin $a RPC používá protokol SMB2.';

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

$GLOBALS["lang"]['action_date'] = 'Datum akce';

$GLOBALS["lang"]['Action Date'] = 'Datum akce';

$GLOBALS["lang"]['action_devices_assigned_to_location'] = 'Akční zařízení určená k umístění';

$GLOBALS["lang"]['Action Devices Assigned To Location'] = 'Akční zařízení určená k umístění';

$GLOBALS["lang"]['action_devices_assigned_to_org'] = 'Akční prostředky přidělené na Org';

$GLOBALS["lang"]['Action Devices Assigned To Org'] = 'Akční prostředky přidělené na Org';

$GLOBALS["lang"]['action_download'] = 'Stáhnout akci';

$GLOBALS["lang"]['Action Download'] = 'Stáhnout akci';

$GLOBALS["lang"]['action_uninstall'] = 'Odinstalovat akci';

$GLOBALS["lang"]['Action Uninstall'] = 'Odinstalovat akci';

$GLOBALS["lang"]['actioned'] = 'Zařízeno';

$GLOBALS["lang"]['Actioned'] = 'Zařízeno';

$GLOBALS["lang"]['actioned_by'] = 'Aced';

$GLOBALS["lang"]['Actioned By'] = 'Aced';

$GLOBALS["lang"]['actioned_date'] = 'Přijaté datum';

$GLOBALS["lang"]['Actioned Date'] = 'Přijaté datum';

$GLOBALS["lang"]['actions'] = 'Akce';

$GLOBALS["lang"]['Actions'] = 'Akce';

$GLOBALS["lang"]['Activate'] = 'Aktivovat';

$GLOBALS["lang"]['Activate Free License'] = 'Aktivovat licenci zdarma';

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

$GLOBALS["lang"]['Active Directory and OpenLDAP'] = 'Aktivní adresář a OpenLDAP';

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

$GLOBALS["lang"]['Add Your Credentials'] = 'Přidat kredity';

$GLOBALS["lang"]['Add image'] = 'Přidat obrázek';

$GLOBALS["lang"]['additional_items'] = 'Dodatečné položky';

$GLOBALS["lang"]['Additional Items'] = 'Dodatečné položky';

$GLOBALS["lang"]['address'] = 'Adresa';

$GLOBALS["lang"]['Address'] = 'Adresa';

$GLOBALS["lang"]['Address any nonconformities'] = 'Adresa jakékoli neshody';

$GLOBALS["lang"]['Address audit findings and corrective actions'] = 'Zjištění auditu adres a nápravná opatření';

$GLOBALS["lang"]['Admin'] = 'Admin';

$GLOBALS["lang"]['admin_status'] = 'Admin Status';

$GLOBALS["lang"]['Admin Status'] = 'Admin Status';

$GLOBALS["lang"]['advanced'] = 'Pokročilé';

$GLOBALS["lang"]['Advanced'] = 'Pokročilé';

$GLOBALS["lang"]['Afghanistan'] = 'Afghánistán';

$GLOBALS["lang"]['After an Integration has been created, when you view the details of an Integration you will notice a field named Debug. This is set to no by default. Changing it to yes provides extra logging when an Integration is executed. Debug should not be left as yes. This is because the debug output will contain everything retrieved from external systems - including items such as WMI and SNMP credentials. The debug option should be used only when an issue has occurred and you wish to dig deeper in to see if you can determine why.'] = 'Po vytvoření integrace, při pohledu na detaily integrace si všimnete pole s názvem Debug. Toto je nastaveno na ne ve výchozím nastavení. Změna na ano poskytuje extra logování při provádění integrace. Debug by neměl být ponechán jako ano. Je to proto, že výstup ladění bude obsahovat vše získané z externích systémů - včetně položek, jako jsou WMI a SNMP pověření. Volba ladění by měla být použita pouze v případě, že došlo k problému a vy chcete hlouběji zakopat, abyste zjistili, proč.';

$GLOBALS["lang"]['After completing the above, uninstall the agent.'] = 'Po dokončení výše uvedeného, odinstalovat agent.';

$GLOBALS["lang"]['Agent? Discovery? Credentials?'] = 'Agente? Objevení? Kredity?';

$GLOBALS["lang"]['agents'] = 'Agenti';

$GLOBALS["lang"]['Agents'] = 'Agenti';

$GLOBALS["lang"]['Agents entries can be created that specify a duration, a network and an operating system. If all tests match, the server then asks the agent to perform actions. If any test is not set, it is excluded from the <i>all must match</i> requirement.<br><br>You can create multiple agents and have the server check one or all agent entries. You might (for example) specify one agent that says <i>If the agent IP is in this subnet, set the location_id of the device</i>.<br><br>Another example might be not running an audit at all, rather download a script and run it. If the agent is installed with admin rights, you can now manage your machines without opening <strong>any</strong> ports from it to the world.</p><p>Enabling advanced agents means an agent can be instructed to download any file and execute any command. <strong>WARNING</strong>: This comes with security risks. This configuration will <strong>only</strong> function when running Open-AudIT using HTTPS and a valid (Certificate Authority provided) certificate for '] = 'Záznamy o činitelích lze vytvořit, které specifikují dobu trvání, síť a operační systém. Pokud se všechny testy shodují, server pak požádá agenta, aby provedl akce. Pokud není nastaven žádný test, je vyloučen z <i>všechny musí odpovídat</i> požadavek.<br/><br/>Můžete vytvořit více agentů a nechat server zkontrolovat jeden nebo všechny položky agenta. Můžete (například) určit jeden agent, který říká <i>Pokud je agent IP v této podsíti, nastavte lokaci _ id zařízení</i>.<br/><br/>Dalším příkladem nemusí být provedení auditu vůbec, spíše stáhnout scénář a spustit ho. Pokud je agent nainstalován s admin práva, můžete nyní spravovat své stroje bez otevření <strong>jakékoli</strong> z ní do světa.<p>Povolit pokročilým agentům znamená, že agent může být instruován, aby stáhl jakýkoliv soubor a vykonal jakýkoliv příkaz. <strong>UPOZORNĚNÍ</strong>: To souvisí s bezpečnostními riziky. Tato konfigurace bude <strong>pouze</strong> funkce při spuštění Open- Audit pomocí HTTPS a platné (Certificate Authority provided) osvědčení pro </p>';

$GLOBALS["lang"]['Aggressive'] = 'Agresivní';

$GLOBALS["lang"]['Aland Islands'] = 'Alandské ostrovy';

$GLOBALS["lang"]['Albania'] = 'Albánie';

$GLOBALS["lang"]['Albanian'] = 'Albánština';

$GLOBALS["lang"]['alert_style'] = 'Styl upozornění';

$GLOBALS["lang"]['Alert Style'] = 'Styl upozornění';

$GLOBALS["lang"]['Algeria'] = 'Alžírsko';

$GLOBALS["lang"]['algorithm'] = 'Algoritmus';

$GLOBALS["lang"]['Algorithm'] = 'Algoritmus';

$GLOBALS["lang"]['alias'] = 'Alias';

$GLOBALS["lang"]['Alias'] = 'Alias';

$GLOBALS["lang"]['All'] = 'Všechny';

$GLOBALS["lang"]['All IPs'] = 'Všechny IP';

$GLOBALS["lang"]['All Policies'] = 'Všechny politiky';

$GLOBALS["lang"]['All Queued Items'] = 'Všechny položky';

$GLOBALS["lang"]['All collections URLs use the format'] = 'Všechny kolekce URL používají formát';

$GLOBALS["lang"]['All device sub-tables contain a couple of important columns.'] = 'Všechny podtabulky zařízení obsahují několik důležitých sloupců.';

$GLOBALS["lang"]['All devices with a type like computer.'] = 'Všechna zařízení s typem počítače.';

$GLOBALS["lang"]['All devices with a type of computer or router.'] = 'Všechna zařízení s typem počítače nebo routeru.';

$GLOBALS["lang"]['All devices without a type of switch and printer.'] = 'Všechna zařízení bez typu spínače a tiskárny.';

$GLOBALS["lang"]['All devices without a type of switch and printer. Essentially the same as the above query.'] = 'Všechna zařízení bez typu spínače a tiskárny. V podstatě stejné jako výše uvedený dotaz.';

$GLOBALS["lang"]['All regular discovery options are also available for use in Device Seed Discoveries.'] = 'Všechny pravidelné možnosti objevení jsou také k dispozici pro použití v Device Seed Discovery.';

$GLOBALS["lang"]['All tasks can be created the same in Windows and Linux. Tasks use the CRON method for scheduling execution.'] = 'Všechny úkoly lze vytvořit ve Windows a Linuxu. Úkoly používají metodu CRON pro plánování provedení.';

$GLOBALS["lang"]['Along with this request for information, we send back to FirstWave datapoints that will give us some much needed information on feature use and your installation.'] = 'Spolu s tímto požadavkem na informace, posíláme zpět do FirstWave datových bodů, které nám poskytnou mnoho potřebných informací o používání funkcí a instalaci.';

$GLOBALS["lang"]['Also can be created from the'] = 'Také může být vytvořen z';

$GLOBALS["lang"]['Alternatives'] = 'Alternativy';

$GLOBALS["lang"]['Amazon AWS Fields'] = 'Amazon AWS Pole';

$GLOBALS["lang"]['American Samoa'] = 'Americká Samoa';

$GLOBALS["lang"]['An Active Directory discovery will query Active Directory for a list of networks and scan the associated IPs just like a regular Subnet discovery.'] = 'Active Directory objev bude dotaz Active Directory pro seznam sítí a skenovat související IP stejně jako pravidelný Subnet objev.';

$GLOBALS["lang"]['An Org (organization) is the owner of most items in collections within Open-AudIT. With the exception of global items like <i>configuration</i>, most items are assigned to (owned by) an Org. A user has access to those items in a collection, that below to an Org the user has permission on.'] = 'Org (organizace) je vlastníkem většiny položek ve sbírkách v rámci Open- Audit. S výjimkou globálních položek jako <i>konfigurace</i>, Většina položek jsou přiřazeny (vlastní) Org. Uživatel má přístup k těmto položkám ve sbírce, která je níže na Org uživatel má povolení na.';

$GLOBALS["lang"]['An application is actively accepting TCP connections, UDP datagrams or SCTP associations on this port. Finding these is often the primary goal of port scanning. Security-minded people know that each open port is an avenue for attack. Attackers and pen-testers want to exploit the open ports, while administrators try to close or protect them with firewalls without thwarting legitimate users. Open ports are also interesting for non-security scans because they show services available for use on the network.'] = 'Aplikace aktivně přijímá TCP připojení, UDP datagramy nebo SCTP sdružení na tomto portu. Nalezení těchto cílů je často hlavním cílem skenování portů. Security-smýšlející lidé vědí, že každý otevřený přístav je cesta k útoku. Útočníci a testovatelé chtějí využívat otevřené porty, zatímco administrátoři se je snaží uzavřít nebo chránit firewally, aniž by zmařili legitimní uživatele. Otevřené porty jsou také zajímavé pro nebezpečnostní skenování, protože ukazují služby dostupné pro použití v síti.';

$GLOBALS["lang"]['An array of <code>benchmarks.id</code>.'] = 'Soubor <code>benchmarks.id</code>.';

$GLOBALS["lang"]['An array of <code>devices.id</code>.'] = 'Soubor <code>devices.id</code>.';

$GLOBALS["lang"]['An array of object representing external links to more information.'] = 'Soubor objektů reprezentujících externí odkazy na více informací.';

$GLOBALS["lang"]['An educated guess to the identity and type of device'] = 'Vzdělaný odhad identity a typu zařízení';

$GLOBALS["lang"]['An encrypted JSON document containing the required attributes depending on the <code>credentials.type</code>.'] = 'Zašifrovaný JSON dokument obsahující požadované atributy v závislosti na <code>credentials.type</code>.';

$GLOBALS["lang"]['An enterprise private network is a network that a single organization builds to interconnect its office locations (e.g., production sites, head offices, remote offices, shops) so they can share computer resources.'] = 'Podnikatelská soukromá síť je síť, kterou jedna organizace buduje, aby propojila své kancelářské prostory (např. výrobní závody, ústředí, vzdálené kanceláře, obchody), takže mohou sdílet počítačové zdroje.';

$GLOBALS["lang"]['An entry can be created using the web interface if the current user logged in has a role that contains the'] = 'Zápis lze vytvořit pomocí webového rozhraní, pokud má současný uživatel přihlášenou roli, která obsahuje';

$GLOBALS["lang"]['An example JSON POST body is below. This should be attached to the &quot;data&quot; form item.'] = 'Příklad JSON POST tělo je níže. To by mělo být připojeno k položce formuláře "data".';

$GLOBALS["lang"]['An example widget SQL showing devices counted per location.'] = 'Příklad widget SQL zobrazující zařízení počítaná na každé místo.';

$GLOBALS["lang"]['An existing Open-AudIT user was authenticated and authorized by the LDAP server. Success.'] = 'Stávající Open- AudIT uživatel byl ověřen a autorizován LDAP serverem. Úspěch.';

$GLOBALS["lang"]['An indication of the level of service required by this site.'] = 'Uvedení úrovně služby požadované touto stránkou.';

$GLOBALS["lang"]['An internal field that indicates if the discovery has completed.'] = 'Vnitřní pole, které ukazuje, zda byl objev dokončen.';

$GLOBALS["lang"]['An open|filtered port is considered open (and will trigger device detection).<br>Previously, Open-AudIT considered an Nmap response of'] = 'Otevřený port 124; filtrovaný port je považován za otevřený (a spustí detekci zařízení).<br/>V minulých dílech jste viděli... IT považuje odpověď Nmap za odpověď';

$GLOBALS["lang"]['An optional GeoCode'] = 'Volitelný GeoCode';

$GLOBALS["lang"]['An optional password to use sudo.'] = 'Volitelné heslo pro sudo.';

$GLOBALS["lang"]['Analyzed'] = 'Analyzované';

$GLOBALS["lang"]['And finally, click Submit to execute this discovery.'] = 'A nakonec klepněte na tlačítko Odeslat provést tento objev.';

$GLOBALS["lang"]['And if Something Goes Wrong?'] = 'A když se něco pokazí?';

$GLOBALS["lang"]['And lastly click <i>Submit</i> to create your Open-AudIT Auth method for Entra.'] = 'A nakonec klikni <i>Odeslat</i> vytvořit metodu Open- Audit Auth pro Entra.';

$GLOBALS["lang"]['And lastly, not so much a security issue - more peace of mind. The data structures are open and documented. You can view them'] = 'A nakonec, ne tak bezpečnostní problém - větší klid mysli. Datové struktury jsou otevřené a zdokumentované. Můžete si je prohlédnout.';

$GLOBALS["lang"]['And provide a name - we humbly recommend Open-AudIT &#128512;, but you can name it anything you like. Make sure the option for <i>Integrate any other application you do not find in the gallery (Non-gallery)</i> is selected. And then click <i>Create<i>.'] = 'A poskytněte jméno - pokorně doporučujeme Open- Audit, ale můžete ho pojmenovat, jak chcete. Ujistěte se, že volba pro <i>Integrovat všechny další aplikace, které nenajdete v galerii (Non- gallery)</i> je vybrán. And then click <i>Vytvořit<i>.</i></i>';

$GLOBALS["lang"]['And so much more.'] = 'A mnohem víc.';

$GLOBALS["lang"]['Andorra'] = 'Andorra';

$GLOBALS["lang"]['Angola'] = 'Angola';

$GLOBALS["lang"]['Anguilla'] = 'Anguilla';

$GLOBALS["lang"]['Annex A Controls'] = 'Příloha A Kontroly';

$GLOBALS["lang"]['Antarctica'] = 'Antarktida';

$GLOBALS["lang"]['AntiVirus'] = 'Antivirus';

$GLOBALS["lang"]['AntiVirus Packages'] = 'Antivirové balíčky';

$GLOBALS["lang"]['Antigua and Barbuda'] = 'Antigua a Barbuda';

$GLOBALS["lang"]['Antivirus'] = 'Antivirus';

$GLOBALS["lang"]['Any TCP ports (comma seperated, no spaces) you wish to exclude from this discovery. Only available when using Nmap 7+.'] = 'Jakékoliv TCP porty (čárka oddělená, žádné mezery), které chcete z tohoto objevu vyloučit. K dispozici pouze při použití Nmap 7 +.';

$GLOBALS["lang"]['Any UDP ports (comma seperated, no spaces) you wish to exclude from this discovery. Only available when using Nmap 7+.'] = 'Jakékoliv UDP porty (čárka oddělená, žádné mezery), které chcete z tohoto objevu vyloučit. K dispozici pouze při použití Nmap 7 +.';

$GLOBALS["lang"]['Any additional documentation you need.'] = 'Každá další dokumentace, kterou potřebujete.';

$GLOBALS["lang"]['Any additional notes you care to make.'] = 'Jakékoliv další poznámky, které chcete udělat.';

$GLOBALS["lang"]['Any attributes followed by a * indicate that CVSS data less than v4 was used to complete this field. By default, we attempt to use v4 fields, however if they are not populated we will fallback to the previous version(s) for attributes.'] = 'Jakékoli atributy následované * naznačují, že k dokončení tohoto pole byly použity údaje CVSS menší než v4. Ve výchozím nastavení se pokusíme použít pole v4, ale pokud nejsou obsazena, vrátíme se k předchozí verzi (s) pro atributy.';

$GLOBALS["lang"]['Any devices will be assigned to this Org when they run their audit script (if set).'] = 'Všechna zařízení budou přiřazena k tomuto Orgu při spuštění jejich auditního skriptu (je-li nastaven).';

$GLOBALS["lang"]['Any devices will be assigned to this Org when they run their audit script (if set). Links to <code>orgs.id</code>.'] = 'Všechna zařízení budou přiřazena k tomuto Orgu při spuštění jejich auditního skriptu (je-li nastaven). Odkazy na <code>orgs.id</code>.';

$GLOBALS["lang"]['Any discovered devices will be assigned to this Location if set. Links to <code>locations.id</code>.'] = 'Všechna objevená zařízení budou přiřazena k tomuto místu, pokud budou nastavena. Odkazy na <code>locations.id</code>.';

$GLOBALS["lang"]['Any discovered devices will be assigned to this Location when they run their audit script (if set).'] = 'Veškerá objevená zařízení budou přiřazena k tomuto místu, jakmile spustí svůj auditní skript (je-li nastaven).';

$GLOBALS["lang"]['Any discovered devices will be assigned to this Location when they run their audit script (if set). Links to <code>locations.id</code>.'] = 'Veškerá objevená zařízení budou přiřazena k tomuto místu, jakmile spustí svůj auditní skript (je-li nastaven). Odkazy na <code>locations.id</code>.';

$GLOBALS["lang"]['Any discovered devices will be assigned to this Org if set. If not set, they are assigned to the <code>org_id</code> of this discovery. Links to <code>orgs.id</code>.'] = 'Všechna objevená zařízení budou přiřazena k tomuto Orgu, pokud budou nastavena. Pokud nejsou nastaveny, jsou přiřazeny k <code>org_id</code> tohoto objevu. Odkazy na <code>orgs.id</code>.';

$GLOBALS["lang"]['Any files found in this manner are stored in the <i>executable</i> table as per any other device component.'] = 'Všechny soubory nalezené tímto způsobem jsou uloženy v <i>spustitelný</i> tabulka podle všech ostatních součástí zařízení.';

$GLOBALS["lang"]['Any required filter. NOTE: When type = traffic, this represents the font-awesome icon.'] = 'Jakýkoliv požadovaný filtr. POZNÁMKA: Když typ = provoz, to představuje font- úžasné ikonu.';

$GLOBALS["lang"]['Any specific TCP ports you wish tested (comma seperated, no spaces).'] = 'Jakékoliv specifické TCP porty, které chcete testovat (čárka oddělena, žádné mezery).';

$GLOBALS["lang"]['Any specific UDP ports you wish tested (comma seperated, no spaces).'] = 'Jakékoliv specifické UDP porty, které chcete testovat (čárka oddělena, žádné prostory).';

$GLOBALS["lang"]['Any user uploaded images are placed here.'] = 'Každý uživatel nahrál obrázky jsou umístěny zde.';

$GLOBALS["lang"]['Application'] = 'Použití';

$GLOBALS["lang"]['Application Definitions'] = 'Definice použití';

$GLOBALS["lang"]['application_id'] = 'ID žádosti';

$GLOBALS["lang"]['Application ID'] = 'ID žádosti';

$GLOBALS["lang"]['Application Licenses'] = 'Licence';

$GLOBALS["lang"]['Application, Operating System or Hardware.'] = 'Aplikace, operační systém nebo hardware.';

$GLOBALS["lang"]['applications'] = 'Žádosti';

$GLOBALS["lang"]['Applications'] = 'Žádosti';

$GLOBALS["lang"]['Applications are an Enterprise only feature.'] = 'Aplikace jsou pouze pro Enterprise.';

$GLOBALS["lang"]['Applications are being introduced in Open-AudIT 2.2 with a view to expand on the concept as further development is made.'] = 'Aplikace jsou zaváděny v Open- Audit 2.2 s cílem rozšířit koncept s dalším vývojem.';

$GLOBALS["lang"]['applied'] = 'Použité';

$GLOBALS["lang"]['Applied'] = 'Použité';

$GLOBALS["lang"]['Approved'] = 'Schváleno';

$GLOBALS["lang"]['Approved Packages'] = 'Schválené balíčky';

$GLOBALS["lang"]['April'] = 'Duben';

$GLOBALS["lang"]['Arabic'] = 'Arabština';

$GLOBALS["lang"]['architecture'] = 'Architektura';

$GLOBALS["lang"]['Architecture'] = 'Architektura';

$GLOBALS["lang"]['Are you sure you want to delete this input item?'] = 'Opravdu chcete tuto vstupní položku smazat?';

$GLOBALS["lang"]['Are you sure you want to delete this output item?'] = 'Určitě chcete smazat tuto výstupní položku?';

$GLOBALS["lang"]['Are you sure?'] = 'Určitě?';

$GLOBALS["lang"]['Are you sure? This will remove all queue entries and prevent the remaining IPs from being discovered.'] = 'Určitě? Tím se odstraní všechny položky fronty a zabrání objevení zbývajících IP.';

$GLOBALS["lang"]['Are you sure? This will reset the queue processing count and could cause load on the server.'] = 'Určitě? Tím se resetuje počet zpracování front a může dojít k zatížení serveru.';

$GLOBALS["lang"]['area'] = 'Oblast';

$GLOBALS["lang"]['Area'] = 'Oblast';

$GLOBALS["lang"]['Argentina'] = 'Argentina';

$GLOBALS["lang"]['Armenia'] = 'Arménie';

$GLOBALS["lang"]['arp'] = 'Arp';

$GLOBALS["lang"]['Arp'] = 'Arp';

$GLOBALS["lang"]['Aruba'] = 'Aruba';

$GLOBALS["lang"]['As a reminder of how authorisations works in Open-AudIT, see'] = 'Jako připomínka k tomu, jak povolení fungují v Open- Auditu, viz';

$GLOBALS["lang"]['As a result, we <strong>must</strong> have the admin$ share available to the discovery credentials user. Please check the target Windows machine provides <i>write</i> access for the discovery credentials user.<br>'] = 'V důsledku toho <strong>musí</strong> mít admin $share k dispozici pro uživatele vyhledávací pověření. Prosím zkontrolujte cílový stroj Windows poskytuje <i>psát</i> přístup pro uživatele vyhledávacího pověření.<br/>';

$GLOBALS["lang"]['As mentioned above, the developers do not speak all the translation languages offered. This means we cannot review with acuracy, the translated text. We do try for a cursory review. If you see something that is not translated correctly, you can change it yourself. Edit the appropriate language file (as below) and find the text to be changed. Maybe it does not exist and you need to add it. Just change the text, save the file and refresh your we page. No need to restart any services/daemons for it to take effect. You might need to force refresh your browser.'] = 'Jak bylo uvedeno výše, vývojáři nemluví všemi nabízenými překladovými jazyky. To znamená, že nemůžeme hodnotit s akurátností, přeložený text. Snažíme se o zběžnou recenzi. Pokud uvidíte něco, co není správně přeloženo, můžete to změnit sami. Upravit příslušný jazykový soubor (jak je uvedeno níže) a najít text, který má být změněn. Možná to neexistuje a ty to musíš přidat. Stačí změnit text, uložit soubor a obnovit vaši stránku. Není třeba restartovat žádné služby / démony, aby to nabylo účinku. Možná budete muset vynutit obnovení prohlížeče.';

$GLOBALS["lang"]['As per the OpenSCAP benchmarks - <i>Do not attempt to implement any of the settings in this benchmark without first testing them in a non-operational environment. The creators of this benchmark assume no responsibility whatsoever for its use by other parties, and makes no guarantees, expressed or implied, about its quality, reliability, or any other characteristic.</i><br><br>Seriously, do not blindly start <i>fixing</i> issues revealed after running a benchmark without first thoroughly testing in a non-production, identical environment.'] = 'Podle referenčních hodnot OpenSCAP - <i>Nepokoušejte se zavést žádné z nastavení v této referenční hodnotě, aniž byste je nejprve testovali v neprovozním prostředí. Stvořitelé této referenční hodnoty nenesou žádnou odpovědnost za její použití jinými stranami a neposkytují žádné záruky, vyjádřené nebo implicitní, o její kvalitě, spolehlivosti nebo jakékoli jiné vlastnosti.</i><br/><br/>Vážně, nezačínej slepě. <i>stanovení</i> problémy odhalené po spuštění referenční hodnoty bez prvního důkladného testování v neprodukčním, totožném prostředí.';

$GLOBALS["lang"]['As per the attributes for device environments. Production, Training, et al.'] = 'Podle atributů pro prostředí zařízení. Produkce, školení, et al.';

$GLOBALS["lang"]['As the audit script uses bash, you can use the wildcard of * when you are defining directories and exclusions.'] = 'Jak auditní skript používá bash, můžete použít divokou kartu * při definování adresářů a vyloučení.';

$GLOBALS["lang"]['As usual, go to menu → Manage → Integrations → Create Integration. As above, if you are running on Linux and you have NMIS on the same server, you do not need to do anything other than click <i>Submit</i>. I cannot make it easier than that.'] = 'Jako obvykle, přejděte do menu → Správa → Integrace → Vytvořit integraci. Jak je uvedeno výše, pokud běží na Linux a máte NMIS na stejném serveru, nemusíte dělat nic jiného, než klepnout <i>Odeslat</i>. Nemůžu to udělat jednodušší.';

$GLOBALS["lang"]['As we run Discoveries and collect device results we populate the list of networks. The Blessed Subnets feature uses this list of networks to only accept data from devices on those networks.'] = 'Jak jsme spustit Objevy a sbírat výsledky zařízení jsme zalidnit seznam sítí. Funkce Požehnané podsítě využívá tento seznam sítí k přijímání pouze dat ze zařízení v těchto sítích.';

$GLOBALS["lang"]['As you have Collectors registered, please choose where to execute this discovery.'] = 'Jak jste zaregistrovali Sběratele, vyberte prosím, kde provést tento objev.';

$GLOBALS["lang"]['Ask me later'] = 'Zeptej se mě později.';

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

$GLOBALS["lang"]['Assign an ISMS manager or team'] = 'Přiřadit správce nebo tým ISMS';

$GLOBALS["lang"]['Assign an Operator'] = 'Přiřadit provozovatele';

$GLOBALS["lang"]['Assign any audited devices to this Org. Leave blank to leave device in currently assigned Org (or to set default).'] = 'Přiřadit všechna auditovaná zařízení do tohoto Orgu. Zanechat prázdné ponechat zařízení v aktuálně přiřazené Org (nebo nastavit výchozí).';

$GLOBALS["lang"]['Assign the Device to a Location'] = 'Přiřadit zařízení k umístění';

$GLOBALS["lang"]['Assign the device to an Org'] = 'Přiřadit zařízení k Orgu';

$GLOBALS["lang"]['Assigned To'] = 'Přiděleno';

$GLOBALS["lang"]['Assigning Discovered Devices'] = 'Přidělení objevených zařízení';

$GLOBALS["lang"]['At present we can use netstat_ports, software and users.'] = 'V současné době můžeme používat netstat _ ports, software a uživatele.';

$GLOBALS["lang"]['attached_device_id'] = 'Přiložené ID zařízení';

$GLOBALS["lang"]['Attached Device ID'] = 'Přiložené ID zařízení';

$GLOBALS["lang"]['attached_to'] = 'Přiložené k';

$GLOBALS["lang"]['Attached To'] = 'Přiložené k';

$GLOBALS["lang"]['attachment'] = 'Příloha';

$GLOBALS["lang"]['Attachment'] = 'Příloha';

$GLOBALS["lang"]['attachments'] = 'Přílohy';

$GLOBALS["lang"]['Attachments'] = 'Přílohy';

$GLOBALS["lang"]['attack_complexity'] = 'Útočná komplexita';

$GLOBALS["lang"]['Attack Complexity'] = 'Útočná komplexita';

$GLOBALS["lang"]['attack_requirements'] = 'Požadavky na útok';

$GLOBALS["lang"]['Attack Requirements'] = 'Požadavky na útok';

$GLOBALS["lang"]['attack_vector'] = 'Útočný vektor';

$GLOBALS["lang"]['Attack Vector'] = 'Útočný vektor';

$GLOBALS["lang"]['Attempt to ping the device if we are not auditing localhost.'] = 'Pokuste se to zařízení napíchnout, pokud nebudeme provádět audit.';

$GLOBALS["lang"]['Attribute'] = 'Atribut';

$GLOBALS["lang"]['attributes'] = 'Atributy';

$GLOBALS["lang"]['Attributes'] = 'Atributy';

$GLOBALS["lang"]['Attributes are stored for Open-AudIT to use for particular fields, at present all fields are based on the devices, locations, orgs and queries tables. The attributes you can edit are associated with the following columns: Class, Environment, Status & Type.'] = 'Atributy jsou uloženy pro Open- Audit pro použití pro konkrétní pole, v současné době jsou všechna pole založena na zařízení, umístění, orgy a dotazy tabulky. Atributy, které můžete editovat, jsou spojeny s následujícími sloupci: Třída, životní prostředí, stav a typ.';

$GLOBALS["lang"]['Audit'] = 'Audit';

$GLOBALS["lang"]['Audit AIX'] = 'Audit AIX';

$GLOBALS["lang"]['Audit DNS'] = 'Audit DNS';

$GLOBALS["lang"]['Audit ESXi'] = 'Audit ESXi';

$GLOBALS["lang"]['Audit Linux'] = 'Audit Linux';

$GLOBALS["lang"]['audit_log'] = 'Deník auditu';

$GLOBALS["lang"]['Audit Log'] = 'Deník auditu';

$GLOBALS["lang"]['Audit Mount Point'] = 'Audit Mount Point';

$GLOBALS["lang"]['Audit My PC'] = 'Audit mého PC';

$GLOBALS["lang"]['Audit Netstat'] = 'Audit Netstat';

$GLOBALS["lang"]['Audit OSX'] = 'Audit OSX';

$GLOBALS["lang"]['Audit Result Input'] = 'Výsledek auditu';

$GLOBALS["lang"]['Audit Software'] = 'Audit Software';

$GLOBALS["lang"]['Audit Status'] = 'Stav auditu';

$GLOBALS["lang"]['Audit Win32 Product'] = 'Audit Win32 Výrobek';

$GLOBALS["lang"]['Audit Windows'] = 'Audit Windows';

$GLOBALS["lang"]['Audit the Device'] = 'Audit zařízení';

$GLOBALS["lang"]['Audits'] = 'Audity';

$GLOBALS["lang"]['August'] = 'Srpen';

$GLOBALS["lang"]['Australia'] = 'Austrálie';

$GLOBALS["lang"]['Austria'] = 'Rakousko';

$GLOBALS["lang"]['Auth'] = 'Auth';

$GLOBALS["lang"]['auth'] = 'Auth';

$GLOBALS["lang"]['Auth Methods'] = 'Authské metody';

$GLOBALS["lang"]['Authenticate only'] = 'Pouze ověřit';

$GLOBALS["lang"]['Authentication Passphrase'] = 'Oprávnění Passprase';

$GLOBALS["lang"]['Authentication Protocol'] = 'Autentizační protokol';

$GLOBALS["lang"]['authority_key_ident'] = 'Ident klíče orgánu';

$GLOBALS["lang"]['Authority Key Ident'] = 'Ident klíče orgánu';

$GLOBALS["lang"]['Auto'] = 'Automaticky';

$GLOBALS["lang"]['auto_renew'] = 'Automaticky obnovit';

$GLOBALS["lang"]['Auto Renew'] = 'Automaticky obnovit';

$GLOBALS["lang"]['Auto populated by the Open-AudIT Server.'] = 'Auto obsazené Open- Audit Serverem.';

$GLOBALS["lang"]['AutoRenew'] = 'AutoRenew';

$GLOBALS["lang"]['automatable'] = 'Automatické';

$GLOBALS["lang"]['Automatable'] = 'Automatické';

$GLOBALS["lang"]['Automatically populated based on the Collectors OS.'] = 'Automaticky obydlené na základě systému Sběratelů.';

$GLOBALS["lang"]['availability'] = 'Dostupnost';

$GLOBALS["lang"]['Availability'] = 'Dostupnost';

$GLOBALS["lang"]['Available Benchmarks'] = 'Dostupné referenční hodnoty';

$GLOBALS["lang"]['Awaiting Analysis'] = 'Přečkávací analýza';

$GLOBALS["lang"]['Azerbaijan'] = 'Ázerbájdžán';

$GLOBALS["lang"]['Azerbaijani'] = 'Afghanani';

$GLOBALS["lang"]['Azure Active Directory'] = 'Azure Active Directory';

$GLOBALS["lang"]['BTU Max'] = 'BTU Max';

$GLOBALS["lang"]['BTU Total'] = 'BTU celkem';

$GLOBALS["lang"]['Backbone network'] = 'Síť páteře';

$GLOBALS["lang"]['Backup'] = 'Záloha';

$GLOBALS["lang"]['Bahamas the'] = 'Bahamy';

$GLOBALS["lang"]['Bahrain'] = 'Bahrajn';

$GLOBALS["lang"]['Bangladesh'] = 'Bangladéš';

$GLOBALS["lang"]['bank'] = 'Banka';

$GLOBALS["lang"]['Bank'] = 'Banka';

$GLOBALS["lang"]['Banned'] = 'Zakázáno';

$GLOBALS["lang"]['Banned Packages'] = 'Zakázané balíčky';

$GLOBALS["lang"]['bar_code'] = 'Čárový kód';

$GLOBALS["lang"]['Bar Code'] = 'Čárový kód';

$GLOBALS["lang"]['Barbados'] = 'Barbados';

$GLOBALS["lang"]['Base DN'] = 'Základna DN';

$GLOBALS["lang"]['base_score'] = 'Základní skóre';

$GLOBALS["lang"]['Base Score'] = 'Základní skóre';

$GLOBALS["lang"]['base_severity'] = 'Základna';

$GLOBALS["lang"]['Base Severity'] = 'Základna';

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

$GLOBALS["lang"]['Baselines can compare netstat ports, users and software.'] = 'Základní linie mohou porovnávat porty netstat, uživatele a software.';

$GLOBALS["lang"]['Baselines enable you to combine audit data with a set of attributes you have previously defined (your baseline) to determine compliance of devices.'] = 'Základní parametry vám umožní kombinovat auditní data se souborem atributů, které jste dříve definovali (základní) pro určení shody zařízení.';

$GLOBALS["lang"]['Baselines for Device Comparison'] = 'Základní linie pro porovnání zařízení';

$GLOBALS["lang"]['Basic'] = 'Základní';

$GLOBALS["lang"]['Basque'] = 'Baskicko';

$GLOBALS["lang"]['Because we try to be as transparent as possible, here is your actual data that we send.'] = 'Protože se snažíme být co nejtransparentnější, tady jsou vaše data, která posíláme.';

$GLOBALS["lang"]['Being able to determine which machines are configured in the same way is a major part of systems administration and auditing – and now reporting on that will be made simple and automated. Once you define your baseline it will automatically run against a set of devices on a predetermined schedule. The output of these executed baselines will be available for web viewing, importing into a third party system or even as a printed report.<br><br>For auditing and management purposes it can be advantageous to baseline individual devices against a fixed, known good device. Baselines enable you to combine audit data with a set of attributes you have previously defined (your baseline) to determine compliance of devices.'] = 'Být schopen určit, které stroje jsou nakonfigurovány stejným způsobem, je velkou součástí správy systémů a auditu - a nyní podávání zpráv o tom bude zjednodušeno a automatizované. Jakmile definujete výchozí hodnotu, bude automaticky běžet proti sadě zařízení v předem stanoveném rozvrhu. Výstup těchto provedených základních linií bude k dispozici pro prohlížení webových stránek, import do systému třetích stran nebo dokonce jako tisková zpráva.<br/><br/>Pro účely auditu a řízení může být výhodné pro základní jednotlivá zařízení proti pevnému, známému dobrému zařízení. Základní parametry vám umožní kombinovat auditní data se souborem atributů, které jste dříve definovali (základní) pro určení shody zařízení.';

$GLOBALS["lang"]['Belarus'] = 'Bělorusko';

$GLOBALS["lang"]['Belgium'] = 'Belgie';

$GLOBALS["lang"]['Belize'] = 'Belize';

$GLOBALS["lang"]['Below is an example of the required csv format.'] = 'Níže je uveden příklad požadovaného formátu csv.';

$GLOBALS["lang"]['Below these lines are where the variables are injected into the script. Following on from our earlier example, the Linux audit script is populated with our directory like so'] = 'Pod těmito řádky jsou proměnné injikovány do skriptu. V návaznosti na náš předchozí příklad, Linux audit skript je obsazen s naším adresářem jako takhle';

$GLOBALS["lang"]['Below you can see an example Org Chart. If a user has permission on the <i>Finance A</i> Org, they also have permission on the descendant Orgs of Dept A, B & C. This is regardless of the collection requested.<br><br>If the collection requested allows ascendants, then the user will also have access to Company #1 and Default Org items. This is for (as above) queries, groups, et al.<br><br>Note - A user may have access to a query from Default Org, but that is the query itself not the result. The result will only show devices that the user has access to - IE devices from Finance A and Dept A, B & C.'] = 'Níže naleznete příklad Org Graf. Pokud má uživatel povolení na <i>Finance A</i> Org, mají také povolení na potomky Orgs Dept A, B & C. Bez ohledu na požadovanou sbírku.<br/><br/>Pokud požadovaná sbírka umožňuje ascendents, pak bude mít uživatel také přístup ke společnosti # 1 a výchozím položkám. To je pro (jak je uvedeno výše) dotazy, skupiny, et al.<br/><br/>Poznámka - Uživatel může mít přístup k dotazu z výchozího portálu, ale to není výsledek dotazu samotného. Výsledek ukáže pouze zařízení, ke kterým má uživatel přístup - IE zařízení z Finance A a Dept A, B & C.';

$GLOBALS["lang"]['Benchmark'] = 'Referenční hodnota';

$GLOBALS["lang"]['benchmark_id'] = 'Referenční číslo';

$GLOBALS["lang"]['Benchmark ID'] = 'Referenční číslo';

$GLOBALS["lang"]['Benchmark Tasks are created automatically when a benchmark is created.'] = 'Při vytvoření referenční hodnoty se automaticky vytvářejí referenční hodnoty.';

$GLOBALS["lang"]['Benchmark execution and processing can take a lengthy amount of time, hence the preference to schedule them and not run them ad-hoc.'] = 'Provedení a zpracování benchmark může trvat delší dobu, proto preference k jejich plánování a ne spustit ad- hoc.';

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

$GLOBALS["lang"]['Benchmarks are created by providing an operating system and Version, combined with a specific guide and a list of machines to execute it upon. After creation, benchmarks are executed against the list of machines on a schedule.'] = 'Benchmarks jsou vytvořeny tak, že poskytují operační systém a verzi, v kombinaci se specifickým vodítkem a seznamem strojů k jeho provedení. Po vytvoření se referenční hodnoty provádějí podle seznamu strojů podle plánu.';

$GLOBALS["lang"]['Benchmarks for Best Practise Configuration'] = 'Benchmarks for Best Experise Configuration';

$GLOBALS["lang"]['Benchmarks provide security recommendations for your computers, utilising the OpenSCAP tools and policies.</p><p><i>From the OpenSCAP homepage:</i>  In the ever-changing world of computer security where new vulnerabilities are being discovered and patched every day, enforcing security compliance must be a continuous process. It also needs to include a way to make adjustments to policies, as well as periodic assessment and risk monitoring. The OpenSCAP ecosystem provides tools and customizable policies for a quick, cost-effective and flexible implementation of these processes.'] = 'Referenční hodnoty poskytují bezpečnostní doporučení pro vaše počítače, pomocí nástrojů a politik OpenSCAP.<p><i>Z domovské stránky OpenSCAP:</i> V neustále se měnícím světě počítačové bezpečnosti, kde jsou objevována nová zranitelná místa a každý den je třeba vynucovat dodržování bezpečnosti, musí být nepřetržitý proces. Musí rovněž zahrnovat způsob, jak provádět úpravy politik, jakož i pravidelné hodnocení a sledování rizik. Ekosystém OpenSCAP poskytuje nástroje a přizpůsobitelné politiky pro rychlé, nákladově efektivní a flexibilní provádění těchto procesů.</p>';

$GLOBALS["lang"]['Benefits'] = 'Dávky';

$GLOBALS["lang"]['Bengali'] = 'Bengálsko';

$GLOBALS["lang"]['Benin'] = 'Benin';

$GLOBALS["lang"]['Bermuda'] = 'Bermudy';

$GLOBALS["lang"]['best_practises'] = 'Nejlepší praxe';

$GLOBALS["lang"]['Best Practises'] = 'Nejlepší praxe';

$GLOBALS["lang"]['Bhutan'] = 'Bhútán';

$GLOBALS["lang"]['bios'] = 'Bios';

$GLOBALS["lang"]['Bios'] = 'Bios';

$GLOBALS["lang"]['body'] = 'Tělo';

$GLOBALS["lang"]['Body'] = 'Tělo';

$GLOBALS["lang"]['Bolivia'] = 'Bolívie';

$GLOBALS["lang"]['Boolean'] = 'Boolean';

$GLOBALS["lang"]['Boolean 1/0'] = 'Boolean 1 / 0';

$GLOBALS["lang"]['Boolean y/n'] = 'Boolean y / n';

$GLOBALS["lang"]['boot_device'] = 'Boot zařízení';

$GLOBALS["lang"]['Boot Device'] = 'Boot zařízení';

$GLOBALS["lang"]['bootable'] = 'Vykostěné';

$GLOBALS["lang"]['Bootable'] = 'Vykostěné';

$GLOBALS["lang"]['Bosnia and Herzegovina'] = 'Bosna a Hercegovina';

$GLOBALS["lang"]['Both forms of'] = 'Obě formy';

$GLOBALS["lang"]['Botswana'] = 'Botswana';

$GLOBALS["lang"]['Bouvet Island (Bouvetoya)'] = 'Bouvet Island (Bouvetoya)';

$GLOBALS["lang"]['Brazil'] = 'Brazílie';

$GLOBALS["lang"]['Brazilian Portuguese'] = 'Brazilský portugalský';

$GLOBALS["lang"]['Breaking it Down'] = 'Prolomení';

$GLOBALS["lang"]['British Indian Ocean Territory (Chagos Archipelago)'] = 'Britské území Indického oceánu (Chagos souostroví)';

$GLOBALS["lang"]['British Virgin Islands'] = 'Britské Panenské ostrovy';

$GLOBALS["lang"]['Browse down the tree to Console Root -> Component Services -> Computers -> My Computer<br><br>Right click on <i>My Computer</i> and select properties<br><br>Select the <i>Default Properties</i> tab'] = 'Projděte si strom na Console Root - > Komponentní služby - > Počítače - > Můj počítač<br/><br/>Klikněte pravým tlačítkem myši na <i>Můj počítač</i> a vybrat vlastnosti<br/><br/>Vyberte <i>Výchozí vlastnosti</i> tab';

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

$GLOBALS["lang"]['Builds trust with clients and partners'] = 'Buduje důvěru s klienty a partnery';

$GLOBALS["lang"]['Bulgaria'] = 'Bulharsko';

$GLOBALS["lang"]['Bulgarian'] = 'Bulharština';

$GLOBALS["lang"]['Bulk Edit'] = 'Name';

$GLOBALS["lang"]['Bulk Edit Form'] = 'Name';

$GLOBALS["lang"]['Bulk Editing Device Attributes'] = 'Atributy pro editování hromadných zařízení';

$GLOBALS["lang"]['Bulk edit selections wont stay selected after clicking next page.'] = 'Po kliknutí na další stránku nebude výběr editovat.';

$GLOBALS["lang"]['Burkina Faso'] = 'Burkina Faso';

$GLOBALS["lang"]['Burundi'] = 'Burundi';

$GLOBALS["lang"]['business_requirements'] = 'Obchodní požadavky';

$GLOBALS["lang"]['Business Requirements'] = 'Obchodní požadavky';

$GLOBALS["lang"]['But I Only Have Windows Client Machines Available!'] = 'Ale mám k dispozici pouze Windows Client Machines!';

$GLOBALS["lang"]['But I do not want to have to change the language file every time I update!'] = 'Ale já nechci měnit jazykové soubory pokaždé, když jsem aktualizovat!';

$GLOBALS["lang"]['Buy'] = 'Koupit';

$GLOBALS["lang"]['Buy More'] = 'Koupit více';

$GLOBALS["lang"]['Buy More Licenses'] = 'Koupit další licence';

$GLOBALS["lang"]['By'] = 'By';

$GLOBALS["lang"]['By default we integrate all devices with their nmis_manage attribute set to <i>y</i>. With 4.2.0 we also ship a Rule that says <i>If we discover a device and it has a valid SNMP OID, mark that device as managed by NMIS</i>. Obviously you can disable this if it is not what you want.'] = 'Ve výchozím nastavení integrujeme všechna zařízení s jejich nmis _ management atributem nastaveným na <i>y</i>. S 4.2.0 také dodáváme pravidlo, které říká <i>Pokud objevíme zařízení a má platný SNMP OID, označte toto zařízení jako řízené NMIS</i>. Samozřejmě to můžete vypnout, pokud to není to, co chcete.';

$GLOBALS["lang"]['By default, we skip certificate validation because customers tend to use self-signed certificates. To enable certificate validation, edit the file below'] = 'Ve výchozím nastavení přeskočíme validaci certifikátu, protože zákazníci mají tendenci používat automaticky podepsané certifikáty. Pro ověření certifikátu upravte níže uvedený soubor';

$GLOBALS["lang"]['CIDR'] = 'CIDR';

$GLOBALS["lang"]['CIDR Mask'] = 'CIDR Maska';

$GLOBALS["lang"]['cli_config'] = 'CLI Nastavení';

$GLOBALS["lang"]['CLI Config'] = 'CLI Nastavení';

$GLOBALS["lang"]['CPU'] = 'CPU';

$GLOBALS["lang"]['CPUs'] = 'CPU';

$GLOBALS["lang"]['CSV'] = 'CSV';

$GLOBALS["lang"]['CVE'] = 'CVE';

$GLOBALS["lang"]['CVEs with a status of received, awaiting analysis, undergoing analysis, rejected. These CVEs (mostly) do not contain sufficient information to enable us to generate a correct SQL query.'] = 'CVEs se statusem přijatého, očekávaného rozboru, podrobeného analýze, zamítnut. Tyto CVEs (většinou) neobsahují dostatečné informace, které by nám umožnily vytvořit správný SQL dotaz.';

$GLOBALS["lang"]['Calculated from discovery.'] = 'Vypočítaná z objevu.';

$GLOBALS["lang"]['Calculated total number of valid IP addresses for this network.'] = 'Vypočítaný celkový počet platných IP adres pro tuto síť.';

$GLOBALS["lang"]['Calculated upon completion, the time taken to execute this item.'] = 'Vypočteno po dokončení, čas potřebný k provedení této položky.';

$GLOBALS["lang"]['Calculated when integration is run and contains a JSON representation of the devices in this integration. Each links to <code>devices.id</code>.'] = 'Vypočteno při spuštění integrace a obsahuje JSON reprezentaci zařízení v této integraci. Každý odkaz na <code>devices.id</code>.';

$GLOBALS["lang"]['Calculated when integration is run and contains a JSON representation of the locations in this integration. Each links to <code>locations.id</code>.'] = 'Vypočteno při spuštění integrace a obsahuje JSON reprezentaci míst v této integraci. Každý odkaz na <code>locations.id</code>.';

$GLOBALS["lang"]['Calculated when integration is run and contains the number of devices selected from Open-AudIT.'] = 'Vypočteno při spuštění integrace a obsahuje počet zařízení vybraných z Open- Audit.';

$GLOBALS["lang"]['Calculated when integration is run and contains the number of devices selected the external system.'] = 'Vypočteno při spuštění integrace a obsahuje počet zařízení vybraných externím systémem.';

$GLOBALS["lang"]['Calculated when integration is run and contains the number of devices to be updated in the external system.'] = 'Vypočteno při spuštění integrace a obsahuje počet zařízení, která mají být aktualizována ve vnějším systému.';

$GLOBALS["lang"]['Calculated when integration is run and contains the number of devices updated in Open-AudIT.'] = 'Vypočteno při spuštění integrace a obsahuje počet zařízení aktualizovaných v Open- Audit.';

$GLOBALS["lang"]['Call up a command prompt by clicking Start and searching for <code>command</code>'] = 'Vyvolat příkazovou výzvu kliknutím na Start a vyhledávání <code>command</code>';

$GLOBALS["lang"]['Cambodia'] = 'Kambodžu';

$GLOBALS["lang"]['Cameroon'] = 'Kamerun';

$GLOBALS["lang"]['Campus Area Network'] = 'Campus Area Network';

$GLOBALS["lang"]['Campus area network'] = 'Síť areálu kampusu';

$GLOBALS["lang"]['Can be  <code>active</code>, <code>passive</code> or blank.'] = 'Může být <code>active</code>, <code>passive</code> nebo prázdné.';

$GLOBALS["lang"]['Can be <code>application</code>, <code>compute</code>, <code>database</code>, <code>storage</code>, <code>virtualisation</code>, <code>web</code>, <code>other</code> or blank.'] = 'Může být <code>application</code>, <code>compute</code>, <code>database</code>, <code>storage</code>, <code>virtualisation</code>, <code>web</code>, <code>other</code> nebo prázdné.';

$GLOBALS["lang"]['Can be <code>auto</code>, <code>fixed</code>, <code>other</code> or blank.'] = 'Může být <code>auto</code>, <code>fixed</code>, <code>other</code> nebo prázdné.';

$GLOBALS["lang"]['Can be <code>high availability</code>, <code>load balancing</code>, <code>performance</code>, <code>storage</code>, <code>other</code> or blank.'] = 'Může být <code>high availability</code>, <code>load balancing</code>, <code>performance</code>, <code>storage</code>, <code>other</code> nebo prázdné.';

$GLOBALS["lang"]['Can be <code>line</code>, <code>pie</code> or <code>traffic</code>.'] = 'Může být <code>line</code>, <code>pie</code> nebo <code>traffic</code>.';

$GLOBALS["lang"]['Can be <code>user</code> or <code>collector</code>.'] = 'Může být <code>user</code> nebo <code>collector</code>.';

$GLOBALS["lang"]['Can be set by discovery or user.'] = 'Lze nastavit objevem nebo uživatelem.';

$GLOBALS["lang"]['Can be set by discovery or user. Uses the ID from the locations table.'] = 'Lze nastavit objevem nebo uživatelem. Používá ID z tabulky lokací.';

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

$GLOBALS["lang"]['Catalan'] = 'Katalánština';

$GLOBALS["lang"]['Cayman Islands'] = 'Kajmanské ostrovy';

$GLOBALS["lang"]['Cellular Details'] = 'Buněčné detaily';

$GLOBALS["lang"]['Central African Republic'] = 'Středoafrická republika';

$GLOBALS["lang"]['certificate'] = 'Osvědčení';

$GLOBALS["lang"]['Certificate'] = 'Osvědčení';

$GLOBALS["lang"]['certificate_file'] = 'Soubor osvědčení';

$GLOBALS["lang"]['Certificate File'] = 'Soubor osvědčení';

$GLOBALS["lang"]['certificate_name'] = 'Jméno certifikátu';

$GLOBALS["lang"]['Certificate Name'] = 'Jméno certifikátu';

$GLOBALS["lang"]['certificates'] = 'Osvědčení';

$GLOBALS["lang"]['Certificates'] = 'Osvědčení';

$GLOBALS["lang"]['Certification'] = 'Osvědčení';

$GLOBALS["lang"]['Certification Audit'] = 'Audit certifikace';

$GLOBALS["lang"]['Certification Process'] = 'Certifikační proces';

$GLOBALS["lang"]['Chad'] = 'Čad';

$GLOBALS["lang"]['Change'] = 'Změna';

$GLOBALS["lang"]['change_id'] = 'Změnit ID';

$GLOBALS["lang"]['Change ID'] = 'Změnit ID';

$GLOBALS["lang"]['change_log'] = 'Změnit záznam';

$GLOBALS["lang"]['Change Log'] = 'Změnit záznam';

$GLOBALS["lang"]['Change Logs'] = 'Změnit záznamy';

$GLOBALS["lang"]['change_type'] = 'Typ změny';

$GLOBALS["lang"]['Change Type'] = 'Typ změny';

$GLOBALS["lang"]['check_minutes'] = 'Zkontrolovat zápis';

$GLOBALS["lang"]['Check Minutes'] = 'Zkontrolovat zápis';

$GLOBALS["lang"]['Check for SSH on these ports'] = 'Zkontrolujte SSH na těchto portech';

$GLOBALS["lang"]['Check this port for any SSH service.'] = 'Zkontrolujte tento port pro jakoukoliv SSH službu.';

$GLOBALS["lang"]['Chile'] = 'Chile';

$GLOBALS["lang"]['China'] = 'Čína';

$GLOBALS["lang"]['Chinese'] = 'Čínština';

$GLOBALS["lang"]['Chinese (traditional)'] = 'Čínský (tradiční)';

$GLOBALS["lang"]['Choose'] = 'Vyberte';

$GLOBALS["lang"]['Choose (select OS first)'] = 'Vyberte (vyberte OS jako první)';

$GLOBALS["lang"]['Choose a Device'] = 'Vyberte zařízení';

$GLOBALS["lang"]['Choose a Table'] = 'Vyberte si tabulku';

$GLOBALS["lang"]['Choose the type of the task from the first drop down. This will configure the additional fields required depending on the type of task.'] = 'Vyberte si typ úkolu od prvního poklesu. To nastaví další požadovaná pole v závislosti na typu úkolu.';

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

$GLOBALS["lang"]['Click <i>New client secret</i>.'] = 'Klikněte <i>Nové tajemství klienta</i>.';

$GLOBALS["lang"]['Click Submit to Execute'] = 'Klepněte na tlačítko Odeslat k provedení';

$GLOBALS["lang"]['Click on <i>Properties</i> under the <i>Manage</i> header in the central menu column. Copy the <i>User Access URL</i>. Once copied, paste it into yout text editor. You will need to copy one section of this field.<br><br>Our example field looks like this<br><code>https://launcher.myapps.microsoft.com/api/signin/5d97003c-g24b-346e-9932-77db6470b939?tenantId=cf406343-1a96-4f7c-0cc6-46e86dddabf3</code>.<br><br>The section we need is <code>cf406343-1a96-4f7c-0cc6-46e86dddabf3</code> (the tenant ID). This is used in Open-AudIT as the <i>Tenant</i> field, so paste it in there.'] = 'Klikněte na <i>Vlastnosti</i> v rámci <i>Správa</i> hlavička v centrálním sloupci menu. Kopírovat <i>URL přístupu uživatele</i>. Po zkopírování jej vložte do textového editoru yout. Budete muset zkopírovat jednu část tohoto pole.<br/><br/>Naše ukázkové pole vypadá takto.<br/><code>https://launcher.myapps.microsoft.com/api/signin/5d97003c-g24b-346e-9932-77db6470b939?tenantId=cf406343-1a96-4f7c-0cc6-46e86dddabf3</code>.<br/><br/>Sekce, kterou potřebujeme je <code>cf406343-1a96-4f7c-0cc6-46e86dddabf3</code> (ID nájemce). Používá se v Open- Auditu jako <i>Nájemník</i> pole, tak to tam vložte.';

$GLOBALS["lang"]['Click on App Registrations to create a new Application, then click New Application Registration. Give it a name (I used Open-AudIT), select Web app / API as the type and provide any URL (the URL is not important) and now click Create.'] = 'Kliknutím na registraci aplikací vytvoříte novou aplikaci, potom klepněte na novou registraci aplikace. Dejte mu jméno (Použil jsem Open- Audit), vyberte Web app / API jako typ a poskytnout jakékoli URL (URL není důležité) a nyní klikněte na Vytvořit.';

$GLOBALS["lang"]['Click on OK and close the DCOMCNFG window.<br><br>The above changes will require a reboot to take effect.'] = 'Klikněte na OK a zavřete okno DCOMCNFG.<br/><br/>Výše uvedené změny budou vyžadovat restart.';

$GLOBALS["lang"]['Click on the application you just created. The Application ID displayed is the Client ID.<br><br>To create the client secret, click Settings, then Keys. Provide a key name and select an appropriate expiry date, then click Save.<br><br>The value will be populated for you - this is the Client Secret.'] = 'Klikněte na aplikaci, kterou jste právě vytvořili. Zobrazeno ID aplikace je ID klienta.<br/><br/>Chcete-li vytvořit tajemství klienta, klikněte na Nastavení a pak Klíče. Uveďte název klíče a vyberte vhodné datum vypršení platnosti a potom klikněte na Uložit.<br/><br/>Hodnota bude obsazena pro vás - to je Client Secret.';

$GLOBALS["lang"]['Click the Delete button to remove the example devices from Open-AudIT.<br>This will remove the below devices from the database. '] = 'Kliknutím na tlačítko Smazat odstraníte příkladová zařízení z Open- Audit.<br/>Tím se odstraní níže uvedená zařízení z databáze. ';

$GLOBALS["lang"]['Click the Edit button for <i>Basic SAML Configuration</i>.'] = 'Klikněte na tlačítko Upravit pro <i>Základní vzorek vzorků Nastavení</i>.';

$GLOBALS["lang"]['Click the Import button below to populate Open-AudIT with example device data.'] = 'Kliknutím na tlačítko Import zalistujte Open- Audit s daty příkladového zařízení.';

$GLOBALS["lang"]['Click the icon to the right of the field you wish to edit. Change the field and click the green icon to submit.'] = 'Klikněte na ikonu vpravo od pole, které chcete upravit. Změňte pole a klikněte na zelenou ikonu pro odeslání.';

$GLOBALS["lang"]['Client ID'] = 'ID klienta';

$GLOBALS["lang"]['Client ID and Secret'] = 'ID a tajemství klienta';

$GLOBALS["lang"]['client_ident'] = 'Name';

$GLOBALS["lang"]['Client Ident'] = 'Name';

$GLOBALS["lang"]['client_secret'] = 'Tajemství klienta';

$GLOBALS["lang"]['Client Secret'] = 'Tajemství klienta';

$GLOBALS["lang"]['client_site_name'] = 'Název stránky klienta';

$GLOBALS["lang"]['Client Site Name'] = 'Název stránky klienta';

$GLOBALS["lang"]['Close'] = 'Zavřít';

$GLOBALS["lang"]['Closed'] = 'Zavřeno';

$GLOBALS["lang"]['Cloud'] = 'Cloud';

$GLOBALS["lang"]['Cloud Details'] = 'Podrobnosti o cloudu';

$GLOBALS["lang"]['Cloud Discovery'] = 'Objevení oblačnosti';

$GLOBALS["lang"]['Cloud Discovery and Auditing'] = 'Cloud Discovery a audit';

$GLOBALS["lang"]['cloud_id'] = 'Cloud ID';

$GLOBALS["lang"]['Cloud ID'] = 'Cloud ID';

$GLOBALS["lang"]['cloud_log'] = 'Záznam cloudu';

$GLOBALS["lang"]['Cloud Log'] = 'Záznam cloudu';

$GLOBALS["lang"]['cloud_name'] = 'Název cloudu';

$GLOBALS["lang"]['Cloud Name'] = 'Název cloudu';

$GLOBALS["lang"]['Cloud Network'] = 'Cloud Network';

$GLOBALS["lang"]['clouds'] = 'Mraky';

$GLOBALS["lang"]['Clouds'] = 'Mraky';

$GLOBALS["lang"]['Clouds are a feature available to Open-AudIT Enterprise licensed customers.'] = 'Mraky jsou funkce k dispozici Open- Audit Enterprise licencovaných zákazníků.';

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

$GLOBALS["lang"]['Clusters and Reporting'] = 'Seskupení projektů a podávání zpráv';

$GLOBALS["lang"]['Cocos (Keeling) Islands'] = 'Kokosové ostrovy';

$GLOBALS["lang"]['Collection'] = 'Sbírka';

$GLOBALS["lang"]['Collections'] = 'Sbírky';

$GLOBALS["lang"]['Collector'] = 'Sběratel';

$GLOBALS["lang"]['Collector (UUID)'] = 'Sběratel (UUID)';

$GLOBALS["lang"]['Collector / Server is an Enterprise only feature. Enterprise customers receive one Collector license for free. Additional Collector licenses can be purchased as required.'] = 'Sběratel / Server je pouze funkce Enterprise. Podnikatelé obdrží licenci Sběratele zdarma. Další licence Sběratele lze zakoupit dle potřeby.';

$GLOBALS["lang"]['Collector / Server is designed so that you can have a remote or <i>collector</i>  instance of Open-AudIT running on a remote machine. That collector instance might be in another security zone, subnet, cloud hosting instance or at a customer site.  The remote collector is then doing all the discovering and auditing of devices locally avoiding networking and firewalling complexity.  The Collector once it has registered is completely controlled by the <i>server</i>.  This means you only need an HTTP or HTTPS connection from that Collector to the Server.'] = 'Sběratel / Server je navržen tak, abyste měli ovladač nebo <i>kolektor</i> instance Open- Audit běží na vzdáleném stroji. Ten sběratelský instance by mohl být v jiné bezpečnostní zóně, podsíti, instanci cloud hosting nebo na zákaznické stránce. Vzdálený kolektor pak dělá všechny objevování a audit zařízení lokálně vyhnout vytváření sítí a firewalling složitosti. Sběratel je po registraci zcela ovládán <i>server</i>. To znamená, že potřebujete pouze HTTP nebo HTTPS připojení od Sběratele k serveru.';

$GLOBALS["lang"]['Collector Dashboard'] = 'Přístrojová deska sběratele';

$GLOBALS["lang"]['Collector Name'] = 'Název sběratele';

$GLOBALS["lang"]['collector_uuid'] = 'Name';

$GLOBALS["lang"]['Collector Uuid'] = 'Name';

$GLOBALS["lang"]['Collector tasks are automatically setup when the collector feature is enabled. Collector tasks should not be created directly by users. Collector tasks can have their frequency edited after creation. If the Open-AudIT Server has Collectors reporting to it, an additional drop down is provided. You can select this to specify which Collector the task should run on. Only Discovery tasks are supported for Collectors.'] = 'Při zapnutí funkce kolektoru se automaticky nastavují úkoly sběratele. Úkoly sběratele by neměli vytvářet přímo uživatelé. Úkoly sběratele mohou mít po vytvoření editovanou frekvenci. Pokud Open- Audit Server má Sběratele, je k dispozici další pokles. Toto můžete zvolit pro určení, na kterém Sběrateli by měl být úkol spuštěn. Pouze Discovery úkoly jsou podporovány pro sběratele.';

$GLOBALS["lang"]['Collectors'] = 'Sběratelé';

$GLOBALS["lang"]['Collectors can operate in one of two modes: Collector and StandAlone. When in Collector mode, the instance of Open-AudIT is managed by the main server. When in Stand Alone mode, the instance is managed locally and forwards any found devices to the main server.'] = 'Sběratelé mohou pracovat v jednom ze dvou režimů: Sběratel a Standalone. V režimu Sběratel je instance Open- Auditu řízena hlavním serverem. V režimu Stand Alone je instance řízena lokálně a přenese všechna nalezená zařízení na hlavní server.';

$GLOBALS["lang"]['Collectors for Remote Discovery'] = 'Sběratelé pro vzdálené objevování';

$GLOBALS["lang"]['Colombia'] = 'Kolumbie';

$GLOBALS["lang"]['color'] = 'Barva';

$GLOBALS["lang"]['Color'] = 'Barva';

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

$GLOBALS["lang"]['Comment out the below line (about line 49 or so). Just place a hash # at the start of the line.'] = 'Komentovat níže uvedený řádek (o řádku 49 nebo tak). Stačí umístit hašiš na začátek řady.';

$GLOBALS["lang"]['comments'] = 'Poznámky';

$GLOBALS["lang"]['Comments'] = 'Poznámky';

$GLOBALS["lang"]['commercial'] = 'Obchodní';

$GLOBALS["lang"]['Commercial'] = 'Obchodní';

$GLOBALS["lang"]['Commercial Support'] = 'Obchodní podpora';

$GLOBALS["lang"]['common_name'] = 'Obecný název';

$GLOBALS["lang"]['Common Name'] = 'Obecný název';

$GLOBALS["lang"]['Commonly referred to as the clientId.'] = 'Běžně označované jako klientId.';

$GLOBALS["lang"]['Commonly referred to as the clientSecret.'] = 'Běžně označované jako KlientSecret.';

$GLOBALS["lang"]['Community'] = 'Společenství';

$GLOBALS["lang"]['Community Questions'] = 'Otázky Společenství';

$GLOBALS["lang"]['Community String'] = 'Komunitní řetězec';

$GLOBALS["lang"]['Comoros the'] = 'Komory';

$GLOBALS["lang"]['Compact'] = 'Kompaktní';

$GLOBALS["lang"]['Company'] = 'Společnost';

$GLOBALS["lang"]['Complete these steps.'] = 'Dokončete tyto kroky.';

$GLOBALS["lang"]['Complexity of the attack (Low or High).'] = 'Komplex útoku (Low nebo High).';

$GLOBALS["lang"]['Component Table'] = 'Tabulka součástí';

$GLOBALS["lang"]['Components (All Devices)'] = 'Součásti (všechna zařízení)';

$GLOBALS["lang"]['Compute'] = 'Výpočet';

$GLOBALS["lang"]['Condition'] = 'Stav';

$GLOBALS["lang"]['Conduct a risk assessment'] = 'Provést posouzení rizik';

$GLOBALS["lang"]['Conduct awareness and training programs'] = 'Programy zvyšování povědomí a odborné přípravy';

$GLOBALS["lang"]['Conduct management review meetings'] = 'Schůze pro přezkum řízení chování';

$GLOBALS["lang"]['Conduct regular surveillance audits (usually annually)'] = 'Provádět pravidelné audity dohledu (obvykle ročně)';

$GLOBALS["lang"]['Conducted by an accredited body in two stages'] = 'Vedení akreditovaným orgánem ve dvou fázích';

$GLOBALS["lang"]['Config'] = 'Nastavení';

$GLOBALS["lang"]['Config Default, currently '] = 'Nastavení Výchozí, v současné době ';

$GLOBALS["lang"]['config_file'] = 'Nastavit soubor';

$GLOBALS["lang"]['Config File'] = 'Nastavit soubor';

$GLOBALS["lang"]['config_manager_error_code'] = 'Chyba správce nastavení';

$GLOBALS["lang"]['Config Manager Error Code'] = 'Chyba správce nastavení';

$GLOBALS["lang"]['Configurable Role Based Access Control (RBAC)'] = 'Konfigurovatelné řízení přístupu založeného na roli (RBAC)';

$GLOBALS["lang"]['configuration'] = 'Nastavení';

$GLOBALS["lang"]['Configuration'] = 'Nastavení';

$GLOBALS["lang"]['Configuration Change Detection and Reporting'] = 'Detekce a hlášení změn konfigurace';

$GLOBALS["lang"]['Configure'] = 'Nastavit';

$GLOBALS["lang"]['Configure the agent server-side to perform audits on a schedule'] = 'Nastavit server-side pro provedení auditů podle plánu';

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

$GLOBALS["lang"]['Consulting, implementation and other services are available through'] = 'Konzultace, realizace a další služby jsou k dispozici prostřednictvím';

$GLOBALS["lang"]['contact'] = 'Kontakt';

$GLOBALS["lang"]['Contact'] = 'Kontakt';

$GLOBALS["lang"]['contact_name'] = 'Kontaktní jméno';

$GLOBALS["lang"]['Contact Name'] = 'Kontaktní jméno';

$GLOBALS["lang"]['contained_in'] = 'Obsaženo v';

$GLOBALS["lang"]['Contained In'] = 'Obsaženo v';

$GLOBALS["lang"]['Contains a JSON object details the associated widgets and their positions.'] = 'Obsahuje JSON objekt detaily souvisejících widgety a jejich pozice.';

$GLOBALS["lang"]['Contains the fields that determine if we should use ssh, snmp and wmi discovery options. A JSON object.'] = 'Obsahuje pole, která určují, zda bychom měli použít možnosti ssh, snmp a wmi objevování. JSON objekt.';

$GLOBALS["lang"]['Context & Leadership'] = 'Kontext a vedení';

$GLOBALS["lang"]['Context Engine ID'] = 'ID kontextového motoru';

$GLOBALS["lang"]['Context Name'] = 'Název kontextu';

$GLOBALS["lang"]['Continuously improve the ISMS'] = 'Pokračovat ve zlepšování systému ISMS';

$GLOBALS["lang"]['contractual_obligations'] = 'Smluvní závazky';

$GLOBALS["lang"]['Contractual Obligations'] = 'Smluvní závazky';

$GLOBALS["lang"]['Cook Islands'] = 'Cookovy ostrovy';

$GLOBALS["lang"]['Copy and paste an audit result'] = 'Zkopírovat a vložit výsledek auditu';

$GLOBALS["lang"]['Copy and paste the below to the forums, another instance of Open-AudIT or anywhere else you need to provide this item.'] = 'Zkopírujte a vložte níže na fóra, další instanci Open- Audit nebo kdekoli jinde, kde potřebujete tuto položku poskytnout.';

$GLOBALS["lang"]['Copy the <i>Application ID</i> field and paste it into the Open-AudIT <i>Client ID</i> field for the new Auth Method.'] = 'Kopírovat <i>ID žádosti</i> pole a vložte jej do Open- Audit <i>ID klienta</i> pole pro novou metodu Auth.';

$GLOBALS["lang"]['Copy the <i>Client ID</i> and paste it into the Open-AudIT <i>Client ID</i> field.<br>If there is no secret, click <i>Generate new secret</i>, then copy the value and paste it into the Open-AudIT <i>Client Secret</i> field.'] = 'Kopírovat <i>ID klienta</i> a vložit do Open- Audit <i>ID klienta</i> Pole.<br/>Pokud není žádné tajemství, klikněte <i>Vytvořit nové tajemství</i>, pak zkopírovat hodnotu a vložit ji do Open- Audit <i>Tajemství klienta</i> Pole.';

$GLOBALS["lang"]['Copy the value and paste it into the Open-AudIT form for the <i>Client Secret</i> field.'] = 'Zkopírujte hodnotu a vložte ji do formuláře Open- Audit pro <i>Tajemství klienta</i> Pole.';

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

$GLOBALS["lang"]['Create File'] = 'Vytvořit soubor';

$GLOBALS["lang"]['Create Geocode'] = 'Vytvořit geokód';

$GLOBALS["lang"]['create_internal_count'] = 'Vytvořit vnitřní počet';

$GLOBALS["lang"]['Create Internal Count'] = 'Vytvořit vnitřní počet';

$GLOBALS["lang"]['create_internal_from_external'] = 'Vytvořit vnitřní z externího';

$GLOBALS["lang"]['Create Internal From External'] = 'Vytvořit vnitřní z externího';

$GLOBALS["lang"]['Create NMIS Devices from Open-AudIT'] = 'Vytvořit zařízení NMIS z Open- Audit';

$GLOBALS["lang"]['Create Open-AudIT Devices from '] = 'Vytvořit Open- Audit Zařízení ';

$GLOBALS["lang"]['Create Open-AudIT Devices from NMIS'] = 'Vytvořit Open- Audit Zařízení z NMIS';

$GLOBALS["lang"]['Create a Baseline for the example device'] = 'Vytvořit výchozí hodnotu pro příklad zařízení';

$GLOBALS["lang"]['Create a Discovery'] = 'Vytvořit objev';

$GLOBALS["lang"]['Create a Statement of Applicability (SoA)'] = 'Vytvořit prohlášení o použitelnosti (SoA)';

$GLOBALS["lang"]['created_by'] = 'Vytvořil';

$GLOBALS["lang"]['Created By'] = 'Vytvořil';

$GLOBALS["lang"]['created_date'] = 'Vytvořeno datum';

$GLOBALS["lang"]['Created Date'] = 'Vytvořeno datum';

$GLOBALS["lang"]['Creating'] = 'Vytváření';

$GLOBALS["lang"]['Creating Credentials'] = 'Vytvoření kreditů';

$GLOBALS["lang"]['Creating Device'] = 'Vytvoření zařízení';

$GLOBALS["lang"]['Creating Widgets'] = 'Vytváření widgetů';

$GLOBALS["lang"]['Creating a Discovery Scan Options entry'] = 'Vytvoření objevu Záznam volby skenování';

$GLOBALS["lang"]['Creating a Query'] = 'Vytvoření dotazu';

$GLOBALS["lang"]['Creating a SQL Statement for Groups'] = 'Vytvoření SQL prohlášení pro skupiny';

$GLOBALS["lang"]['Creating a SQL Statement for Queries'] = 'Vytvoření SQL prohlášení pro dotazy';

$GLOBALS["lang"]['Creating an Integration'] = 'Vytvoření integrace';

$GLOBALS["lang"]['creator'] = 'Stvořitel';

$GLOBALS["lang"]['Creator'] = 'Stvořitel';

$GLOBALS["lang"]['credential'] = 'Úvěr';

$GLOBALS["lang"]['Credential'] = 'Úvěr';

$GLOBALS["lang"]['Credentials'] = 'Úvěry';

$GLOBALS["lang"]['Credentials Client ID'] = 'Kredity ID klienta';

$GLOBALS["lang"]['Credentials Subscription ID'] = 'Předplatné kreditů ID';

$GLOBALS["lang"]['Credentials Tenant ID'] = 'Kredity ID';

$GLOBALS["lang"]['Credentials are stored in the <i>credentials</i> database table. The actual credential information is encrypted in storage. When a Discovery is run, a device has its specific credentials retrieved from the database, decrypted and tested. If these fail the list of credentials is also retrieved, decrypted and then tested against the device starting with credentials known to have worked previously. Device specific credentials are stored at an individual device level in the <i>credential</i> table (note - no <i>s</i> in the table name). SSH keys are tested before SSH username / password. When testing SSH, credentials will also be marked as working with sudo or being root.'] = 'Kredity jsou uloženy v <i>pověření</i> tabulka databáze. Skutečné úvěrové informace jsou šifrovány ve skladu. Když je spuštěn Discovery, zařízení má své specifické údaje získané z databáze, dešifrované a testované. Pokud tyto nevyhovují, je také získán seznam pověřovacích listin, dešifrován a poté testován proti zařízení začínajícímu s pověřovacími listy, o nichž je známo, že předtím fungovaly. Specifické údaje o zařízení jsou uloženy na úrovni jednotlivých zařízení v systému <i>úvěrový</i> tabulka (poznámka - ne <i>s</i> v názvu tabulky). SSH klíče jsou testovány před SSH uživatelské jméno / heslo. Při testování SSH budou pověřovací listiny také označeny jako práce se sudo nebo být kořen.';

$GLOBALS["lang"]['Credentials can have one of a few different types - snmp v.1 / v.2, snmp v.3, ssh, ssh key, windows are all implemented. CAVEAT - ssh keys are not implemented for Windows Open-AudIT servers as yet.'] = 'Kredity mohou mít jeden z několika různých typů - snmp v.1 / v.2, snmp v.3, ssh, ssh klíč, okna jsou implementovány. CAVEAT - ssh klávesy zatím nejsou implementovány pro Windows Open- Audit servery.';

$GLOBALS["lang"]['Credentials for Amazon AWS used in Cloud Discovery'] = 'Úvěry pro Amazon AWS používané v Cloud Discovery';

$GLOBALS["lang"]['Credentials for Microsoft Azure used in Cloud Discovery'] = 'Kredity pro Microsoft Azure použitý v Cloud Discovery';

$GLOBALS["lang"]['Critical'] = 'Kritický';

$GLOBALS["lang"]['criticality'] = 'Kritičnost';

$GLOBALS["lang"]['Criticality'] = 'Kritičnost';

$GLOBALS["lang"]['Croatia'] = 'Chorvatsko';

$GLOBALS["lang"]['Cuba'] = 'Kuba';

$GLOBALS["lang"]['current'] = 'Běžný měsíc';

$GLOBALS["lang"]['Current'] = 'Běžný měsíc';

$GLOBALS["lang"]['Current Discovery Processes'] = 'Aktuální práce na objevování';

$GLOBALS["lang"]['Current date & time is '] = 'Aktuální datum & čas je ';

$GLOBALS["lang"]['Currently Installed'] = 'Aktuálně nainstalovaný';

$GLOBALS["lang"]['Currently supported types are <code>snmp</code>, <code>snmp_v3</code>, <code>ssh</code>, <code>ssh_key</code> or <code>windows</code>.'] = 'V současné době podporované typy jsou <code>snmp</code>, <code>snmp_v3</code>, <code>ssh</code>, <code>ssh_key</code> nebo <code>windows</code>.';

$GLOBALS["lang"]['Custom Fields'] = 'Vlastní pole';

$GLOBALS["lang"]['Custom TCP Ports'] = 'Vlastní TCP porty';

$GLOBALS["lang"]['Custom TCP Ports. Any specific ports we would liuke scanned in addition to the Top TCP Ports. Comma seperated, no spaces.'] = 'Vlastní TCP porty. Jakékoliv specifické porty bychom liuke skenoval kromě Top TCP Ports. Koma oddělená, žádné mezery.';

$GLOBALS["lang"]['Custom UDP Ports'] = 'Vlastní UDP Přístavy';

$GLOBALS["lang"]['Custom UDP Ports. Any specific ports we would liuke scanned in addition to the Top UDP Ports. Comma seperated, no spaces.'] = 'Vlastní UDP Ports. Jakékoliv konkrétní porty bychom liuke skenoval kromě Top UDP Ports. Koma oddělená, žádné mezery.';

$GLOBALS["lang"]['Customisable Scanning Options per Discovery'] = 'Přizpůsobitelné možnosti skenování na Discovery';

$GLOBALS["lang"]['Cve'] = 'Cve';

$GLOBALS["lang"]['Cyprus'] = 'Kypr';

$GLOBALS["lang"]['Czech'] = 'Česká republika';

$GLOBALS["lang"]['Czech Republic'] = 'Česká republika';

$GLOBALS["lang"]['DHCP'] = 'DHCP';

$GLOBALS["lang"]['DN Account (optional)'] = 'DN účet (nepovinné)';

$GLOBALS["lang"]['DN Password (optional)'] = 'DN Heslo (nepovinné)';

$GLOBALS["lang"]['DNS FQDN'] = 'DNS FQDN';

$GLOBALS["lang"]['DNS Hostname'] = 'DNS Hostname';

$GLOBALS["lang"]['Danish'] = 'Dánské';

$GLOBALS["lang"]['dashboard_id'] = 'ID palubní desky';

$GLOBALS["lang"]['Dashboard ID'] = 'ID palubní desky';

$GLOBALS["lang"]['Dashboard Widgets'] = 'Widgety přístrojové desky';

$GLOBALS["lang"]['dashboards'] = 'Přístrojové desky';

$GLOBALS["lang"]['Dashboards'] = 'Přístrojové desky';

$GLOBALS["lang"]['Dashboards and Widgets allow Enterprise licensed customers to create, read, update and delete both of these collections to ensure their homepage is exactly what they need to see. Not only that, but a user is able to set a given dashboard as their own homepage. Everyone does not need to use the same homepage (dashboard), nor the same widgets on that dashboard. Professional licensed customers can choose between two predefined dashboards to set as their own homepage.'] = 'Přístrojové desky a Widgets umožňují zákazníkům s licencí Enterprise vytvářet, číst, aktualizovat a mazat obě tyto sbírky, aby se zajistilo, že jejich domovská stránka je přesně to, co potřebují vidět. Nejen to, ale uživatel je schopen nastavit danou palubní desku jako svou vlastní domovskou stránku. Každý nemusí používat stejnou domovskou stránku (palubní deska), ani stejné widgety na této palubní desce. Profesionální licencovaní zákazníci si mohou vybrat mezi dvěma předem definovanými přístrojovými deskami, aby si mohli nastavit vlastní domovskou stránku.';

$GLOBALS["lang"]['Dashboards provide <i>at a glance</i> important visibility for changes occurring on your network as well as providing quick links to device types, manufacturers, and operating systems and so much more.'] = 'Přístrojové desky poskytují <i>na první pohled</i> důležitá viditelnost pro změny, ke kterým dochází na vaší síti, stejně jako rychlé propojení s typy zařízení, výrobci a operačními systémy a mnoho dalšího.';

$GLOBALS["lang"]['Dashboards use'] = 'Použití přístrojových desek';

$GLOBALS["lang"]['Data'] = 'Údaje';

$GLOBALS["lang"]['Data Export - CSV, XML, JSON'] = 'Export dat - CSV, XML, JSON';

$GLOBALS["lang"]['Data Retention'] = 'Uchovávání údajů';

$GLOBALS["lang"]['Database'] = 'Databáze';

$GLOBALS["lang"]['db_action'] = 'Databázová akce';

$GLOBALS["lang"]['Database Action'] = 'Databázová akce';

$GLOBALS["lang"]['db_column'] = 'Sloupec databáze';

$GLOBALS["lang"]['Database Column'] = 'Sloupec databáze';

$GLOBALS["lang"]['Database Definition'] = 'Definice databáze';

$GLOBALS["lang"]['db_row'] = 'Databázový řádek';

$GLOBALS["lang"]['Database Row'] = 'Databázový řádek';

$GLOBALS["lang"]['Database Schema'] = 'Databázové schéma';

$GLOBALS["lang"]['Database Server Discovery'] = 'Database Server Discovery';

$GLOBALS["lang"]['db_table'] = 'Tabulka databáze';

$GLOBALS["lang"]['Database Table'] = 'Tabulka databáze';

$GLOBALS["lang"]['Database Tables'] = 'Databázové tabulky';

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

$GLOBALS["lang"]['Date and time when the CVE was last updated.'] = 'Datum a čas, kdy byla CVE naposledy aktualizována.';

$GLOBALS["lang"]['Date and time when the CVE was published.'] = 'Datum a čas zveřejnění CVE.';

$GLOBALS["lang"]['Date when the CVE was published.'] = 'Datum zveřejnění CVE.';

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

$GLOBALS["lang"]['Debugging'] = 'Ladění';

$GLOBALS["lang"]['Debugging a Script'] = 'Vyladit skript';

$GLOBALS["lang"]['December'] = 'prosinec';

$GLOBALS["lang"]['Decommission'] = 'Dekommise';

$GLOBALS["lang"]['Default'] = 'Výchozí';

$GLOBALS["lang"]['Default Authentication Level - Set to Connect'] = 'Výchozí ověření Úroveň - Nastavit na připojení';

$GLOBALS["lang"]['Default Impersonation Level - Set to Identify'] = 'Výchozí zosobnění Úroveň - Nastavit pro identifikaci';

$GLOBALS["lang"]['Default Items'] = 'Výchozí položky';

$GLOBALS["lang"]['Default Orgs Groups'] = 'Výchozí skupiny souborů';

$GLOBALS["lang"]['Default Roles Groups'] = 'Výchozí skupiny rolí';

$GLOBALS["lang"]['Default Value'] = 'Výchozí hodnota';

$GLOBALS["lang"]['Default of 389. Normally 636 used for Active Directory LDAPS.'] = 'Výchozí hodnota 389. Normálně 636 používá pro Active Directory LDAPS.';

$GLOBALS["lang"]['Default of <code>3</code> for LDAP and Active Directory.'] = 'Výchozí <code>3</code> pro LDAP a Active Directory.';

$GLOBALS["lang"]['Defaults'] = 'Výchozí';

$GLOBALS["lang"]['Deferred'] = 'Odložené';

$GLOBALS["lang"]['Define project scope and objectives'] = 'Definovat rozsah a cíle projektu';

$GLOBALS["lang"]['Define the ISMS scope'] = 'Definovat oblast působnosti ISMS';

$GLOBALS["lang"]['Define the context of the organization (internal/external issues)'] = 'Definovat kontext organizace (interní / externí otázky)';

$GLOBALS["lang"]['delay_minutes'] = 'Zpoždění zápisu';

$GLOBALS["lang"]['Delay Minutes'] = 'Zpoždění zápisu';

$GLOBALS["lang"]['Delete'] = 'Smazat';

$GLOBALS["lang"]['Delete Example Devices'] = 'Smazat ukázková zařízení';

$GLOBALS["lang"]['delete_external_from_internal'] = 'Smazat externí z vnitřní';

$GLOBALS["lang"]['Delete External From Internal'] = 'Smazat externí z vnitřní';

$GLOBALS["lang"]['Delete NMIS Devices if not in Open-AudIT'] = 'Smazat NMIS Zařízení, pokud není v Open- Audit';

$GLOBALS["lang"]['Delete a {collection} entry.'] = 'Smazat položku {collection}.';

$GLOBALS["lang"]['Delete from Application'] = 'Smazat z aplikace';

$GLOBALS["lang"]['Delete from Cluster'] = 'Smazat z Clusteru';

$GLOBALS["lang"]['Denmark'] = 'Dánsko';

$GLOBALS["lang"]['Derived by audit or manually set by user.'] = 'Odvozené auditem nebo ručně nastavené uživatelem.';

$GLOBALS["lang"]['Derived by audit.'] = 'Odvozené auditem.';

$GLOBALS["lang"]['Derived from <code>rack_devices.device_id</code>.'] = 'Odvozené od <code>rack_devices.device_id</code>.';

$GLOBALS["lang"]['Derived from <code>rack_devices.rack_id</code>.'] = 'Odvozené od <code>rack_devices.rack_id</code>.';

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

$GLOBALS["lang"]['Details of who is usually contactable at this site.'] = 'Podrobnosti o tom, kdo je obvykle kontaktní na těchto stránkách.';

$GLOBALS["lang"]['Determine how often you want to run the Baseline check against the database and create a Scheduled Report'] = 'Určete, jak často chcete spustit základní kontrolu v databázi a vytvořit plánovanou zprávu';

$GLOBALS["lang"]['Determine risk treatment options'] = 'Určete možnosti léčby rizik';

$GLOBALS["lang"]['Develop a Risk Treatment Plan'] = 'Vytvořit plán léčby rizik';

$GLOBALS["lang"]['Develop policies, procedures, and controls'] = 'Vypracovat politiky, postupy a kontroly';

$GLOBALS["lang"]['Develop required ISMS documentation (policies, procedures, etc.)'] = 'Vypracovat požadovanou dokumentaci systému ISMS (zásady, postupy atd.)';

$GLOBALS["lang"]['device'] = 'Zařízení';

$GLOBALS["lang"]['Device'] = 'Zařízení';

$GLOBALS["lang"]['Device Audits'] = 'Audity zařízení';

$GLOBALS["lang"]['Device Component Names'] = 'Názvy součástí zařízení';

$GLOBALS["lang"]['Device ID'] = 'ID zařízení';

$GLOBALS["lang"]['device_id'] = 'ID zařízení';

$GLOBALS["lang"]['device_id_a'] = 'ID zařízení A';

$GLOBALS["lang"]['Device ID A'] = 'ID zařízení A';

$GLOBALS["lang"]['device_id_b'] = 'ID zařízení B';

$GLOBALS["lang"]['Device ID B'] = 'ID zařízení B';

$GLOBALS["lang"]['Device Matching Rules'] = 'Pravidla pro shodnost zařízení';

$GLOBALS["lang"]['Device Name'] = 'Název zařízení';

$GLOBALS["lang"]['Device Result'] = 'Výsledek zařízení';

$GLOBALS["lang"]['Device Results'] = 'Výsledky zařízení';

$GLOBALS["lang"]['Device Seed'] = 'Zařízení Seed';

$GLOBALS["lang"]['Device Seed Discoveries are a good option if you know that your network consists of a range of subnets, but you are unsure what they are. Seed the discovery with a local router and watch your network unfold before your eyes.'] = 'Zařízení Seed Objevy jsou dobrou volbou, pokud víte, že vaše síť se skládá z řady podsítí, ale nejste si jisti, co jsou. Semínko objev s lokálním routeru a sledovat svou síť rozvinout před očima.';

$GLOBALS["lang"]['Device Seed IP'] = 'IP semeno zařízení';

$GLOBALS["lang"]['Device Status'] = 'Stav zařízení';

$GLOBALS["lang"]['Device Types'] = 'Typy zařízení';

$GLOBALS["lang"]['Device and Software and Hardware Auditing'] = 'Zařízení a software a Hardware Auditing';

$GLOBALS["lang"]['Device is in the Subnet'] = 'Zařízení je v podsíti';

$GLOBALS["lang"]['Devices'] = 'Zařízení';

$GLOBALS["lang"]['devices_assigned_to_location'] = 'Zařízení určená k umístění';

$GLOBALS["lang"]['Devices Assigned To Location'] = 'Zařízení určená k umístění';

$GLOBALS["lang"]['devices_assigned_to_org'] = 'Zařízení určená pro Org';

$GLOBALS["lang"]['Devices Assigned To Org'] = 'Zařízení určená pro Org';

$GLOBALS["lang"]['Devices Audited'] = 'Auditované zařízení';

$GLOBALS["lang"]['Devices Collection'] = 'Sbírka zařízení';

$GLOBALS["lang"]['Devices Created in '] = 'Zařízení vytvořená v ';

$GLOBALS["lang"]['Devices Created in Open-AudIT'] = 'Zařízení vytvořená v Open- Audit';

$GLOBALS["lang"]['devices_default_display_columns'] = 'Výchozí sloupce zobrazení zařízení';

$GLOBALS["lang"]['Devices Default Display Columns'] = 'Výchozí sloupce zobrazení zařízení';

$GLOBALS["lang"]['Devices Found Last 7 Days'] = 'Zařízení nalezená v posledních 7 dnech';

$GLOBALS["lang"]['Devices Found Today'] = 'Zařízení nalezená dnes';

$GLOBALS["lang"]['Devices Found Yesterday'] = 'Zařízení nalezená včera';

$GLOBALS["lang"]['Devices Missing Information'] = 'Zařízení Chybějící informace';

$GLOBALS["lang"]['Devices Not Audited'] = 'Neauditovaná zařízení';

$GLOBALS["lang"]['Devices Not Seen 30 Days'] = 'Zařízení, která nebyla viděna 30 dní';

$GLOBALS["lang"]['Devices Not Seen 7 Days'] = 'Zařízení, která nebyla viděna 7 dní';

$GLOBALS["lang"]['Devices Not Seen 90 Days'] = 'Zařízení, která nebyla viděna 90 dní';

$GLOBALS["lang"]['Devices Older Than X'] = 'Zařízení starší než X';

$GLOBALS["lang"]['Devices Retrieved via API'] = 'Zařízení retrieved via API';

$GLOBALS["lang"]['Devices Selected from '] = 'Vybraná zařízení ';

$GLOBALS["lang"]['Devices Selected from Open-AudIT'] = 'Zařízení vybraná z Open- Audit';

$GLOBALS["lang"]['Devices Updated in '] = 'Zařízení aktualizovaná ';

$GLOBALS["lang"]['Devices Updated in Open-AudIT'] = 'Aktualizovaná zařízení v Open- Audit';

$GLOBALS["lang"]['Devices are being benchmarked.'] = 'Zařízení jsou srovnávána.';

$GLOBALS["lang"]['Devices are not being benchmarked.'] = 'Zařízení nejsou srovnávána.';

$GLOBALS["lang"]['Devices could be benchmarked.'] = 'Zařízení může být srovnáváno.';

$GLOBALS["lang"]['Devices from Open-AudIT'] = 'Zařízení z Open- Audit';

$GLOBALS["lang"]['Devices in Running State'] = 'Zařízení v provozním stavu';

$GLOBALS["lang"]['Devices in Stopped State'] = 'Zařízení v zastavěném stavu';

$GLOBALS["lang"]['Devices in this'] = 'Zařízení v tomto';

$GLOBALS["lang"]['Devices will not be matched if their status is set to <i>deleted</i>. Any other status will allow a match to occur.'] = 'Zařízení nebudou porovnána, pokud je jejich stav nastaven na <i>odstraněno</i>. Jakýkoliv jiný stav umožní shodu.';

$GLOBALS["lang"]['Devices with Expired Warranties'] = 'Zařízení s platnými zárukami';

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

$GLOBALS["lang"]['Discoveries'] = 'Objevy';

$GLOBALS["lang"]['Discoveries are at the very heart of what Open-AudIT does. How else would you know <i>Whats On Your Network?</i>'] = 'Objevy jsou jádrem toho, co Open- Audit dělá. Jak jinak bys věděl, <i>Co je na vaší síti?</i>';

$GLOBALS["lang"]['Discoveries are entries that enable you to run a discovery upon a network in a single click, without entering the details of that network each and every time.'] = 'Objevy jsou položky, které vám umožní spustit objev na síti v jednom kliknutí, bez zadání podrobnosti této sítě pokaždé.';

$GLOBALS["lang"]['Discovery'] = 'Objevení';

$GLOBALS["lang"]['Discovery Change Logs'] = 'Záznamy o změně objevu';

$GLOBALS["lang"]['Discovery Data Retention'] = 'Retence údajů o objevení';

$GLOBALS["lang"]['discovery_id'] = 'ID objevu';

$GLOBALS["lang"]['Discovery ID'] = 'ID objevu';

$GLOBALS["lang"]['Discovery Issues'] = 'Objevení otázek';

$GLOBALS["lang"]['discovery_log'] = 'Log objevů';

$GLOBALS["lang"]['Discovery Log'] = 'Log objevů';

$GLOBALS["lang"]['Discovery Match Options'] = 'Možnosti vyhledávání shody';

$GLOBALS["lang"]['Discovery Name'] = 'Název objevu';

$GLOBALS["lang"]['Discovery Options'] = 'Možnosti vyhledávání';

$GLOBALS["lang"]['Discovery Queue Count'] = 'Počet zobrazených front';

$GLOBALS["lang"]['Discovery Queue Limit'] = 'Discovery Queue Limit';

$GLOBALS["lang"]['discovery_run'] = 'Spustit objev';

$GLOBALS["lang"]['Discovery Run'] = 'Spustit objev';

$GLOBALS["lang"]['discovery_scan_options'] = 'Možnosti vyhledávání';

$GLOBALS["lang"]['Discovery Scan Options'] = 'Možnosti vyhledávání';

$GLOBALS["lang"]['Discovery Scan Options are just another item collection. Enterprise users can create, read, update and delete entries as required. Professional users can read all entries, but not create new entries, update existing entries or delete entries. Community users have no GUI that allows access to this collection.'] = 'Discovery scan Možnosti jsou jen další sbírka položek. Uživatelé Enterprise mohou podle potřeby vytvářet, číst, aktualizovat a mazat položky. Profesionální uživatelé mohou číst všechny položky, ale ne vytvářet nové položky, aktualizovat stávající položky nebo smazat položky. Uživatelé ve Společenství nemají GUI, který by umožňoval přístup k této kolekci.';

$GLOBALS["lang"]['Discovery Scan Types'] = 'Typy vyhledávačů';

$GLOBALS["lang"]['Discovery Support'] = 'Podpora objevů';

$GLOBALS["lang"]['Discovery has stopped working'] = 'Objevení přestalo fungovat.';

$GLOBALS["lang"]['disk'] = 'Disk';

$GLOBALS["lang"]['Disk'] = 'Disk';

$GLOBALS["lang"]['display_version'] = 'Verze displeje';

$GLOBALS["lang"]['Display Version'] = 'Verze displeje';

$GLOBALS["lang"]['Display in Menu'] = 'Zobrazit v nabídce';

$GLOBALS["lang"]['Displays a standard web form for submission to POST /{collection}.'] = 'Zobrazí standardní webový formulář pro odevzdání do sbírky POST / {.';

$GLOBALS["lang"]['Displays a standard web form for submission to POST /{collection}/import.'] = 'Zobrazí standardní webový formulář pro odeslání do POST / {kolekce} / import.';

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

$GLOBALS["lang"]['Do not forget about the Open-AudIT wiki for all your documentation.'] = 'Nezapomeňte na Open- Audit wiki pro všechny vaše dokumentace.';

$GLOBALS["lang"]['Do not forget there is a mountain of documentation on the wiki'] = 'Nezapomeňte, že na wiki je hora dokumentace';

$GLOBALS["lang"]['Do not scan these TCP ports.'] = 'Neskenujte tyto TCP porty.';

$GLOBALS["lang"]['Do not scan these UDP ports.'] = 'Neskenujte tyto UDP porty.';

$GLOBALS["lang"]['Do not show me again'] = 'Už mi to neukazuj.';

$GLOBALS["lang"]['Do you have a perfect example of this configuration? Perhaps a device located in a lab environment or a workstation you use to clone workstation VMs from.'] = 'Máte perfektní příklad této konfigurace? Možná zařízení umístěné v laboratorním prostředí nebo pracovní stanici, kterou používáte pro klonování VM.';

$GLOBALS["lang"]['Do you want to use secure transport (LDAPS) or regular unencrypted LDAP.'] = 'Chcete použít zabezpečenou přepravu (LDAPS) nebo pravidelný nešifrovaný LDAP.';

$GLOBALS["lang"]['Do you wish to see the standard sidebar on the left.'] = 'Přejete si vidět standardní postranní lištu vlevo.';

$GLOBALS["lang"]['documentation'] = 'Dokumentace';

$GLOBALS["lang"]['Documentation'] = 'Dokumentace';

$GLOBALS["lang"]['Documentation about a particular collection.'] = 'Dokumentace o určité sbírce.';

$GLOBALS["lang"]['Does Not Equal'] = 'Nerovná se';

$GLOBALS["lang"]['Does the license apply to child Orgs.'] = 'Platí licence pro dětské Orgy?';

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

$GLOBALS["lang"]['Download a File'] = 'Stáhnout soubor';

$GLOBALS["lang"]['Download a file from URL'] = 'Stáhnout soubor z URL';

$GLOBALS["lang"]['Download the test_windows_client.vbs script directly'] = 'Stáhnout test _ windows _ client.vbs skript přímo';

$GLOBALS["lang"]['Download your updated version from'] = 'Stáhnout aktualizovanou verzi z';

$GLOBALS["lang"]['driver'] = 'Řidič';

$GLOBALS["lang"]['Driver'] = 'Řidič';

$GLOBALS["lang"]['duplex'] = 'Duplex';

$GLOBALS["lang"]['Duplex'] = 'Duplex';

$GLOBALS["lang"]['Duplicate Devices / Missing Devices'] = 'Duplicitní zařízení / chybějící zařízení';

$GLOBALS["lang"]['duration'] = 'Doba trvání';

$GLOBALS["lang"]['Duration'] = 'Doba trvání';

$GLOBALS["lang"]['Dutch'] = 'Nizozemsko';

$GLOBALS["lang"]['ESXi'] = 'ESXi';

$GLOBALS["lang"]['EULA'] = 'EULA';

$GLOBALS["lang"]['Each IP is scanned with the discovery configured options (see Discovery Scan Options and Discovery - Community vs Professional vs Enterprise on the wiki). In general, Nmap will test for ports 22 (ssh), 135 (wmi), 62078 (iPhone) and UDP 161 (snmp). If 22, 135 or 161 respond the credential list is retrieved and each credential tested in turn. The first working credentials are used for further queries directly from the device. Note - if a device has previously been discovered and has working credentials, those credentials are tested first. Only if those fail are the other credentials then attempted.'] = 'Každá IP je naskenována s možnostmi objevování nakonfigurovanými (viz možnost Discovery Scan a Discovery - Community vs Professional vs Enterprise on the wiki). Obecně platí, že Nmap bude testovat pro přístavy 22 (ssh), 135 (wmi), 62078 (iPhone) a UDP 161 (snmp). V případě odpovědi 22, 135 nebo 161 je úvěrový seznam získán a každý úvěrový testován v pořadí. První pracovní pověření se používají pro další dotazy přímo ze zařízení. Poznámka - pokud zařízení bylo dříve objeveno a má pracovní pověření, jsou tato pověření testována jako první. Jen pokud se o to pokusí ostatní.';

$GLOBALS["lang"]['Each time a device is discovered or an audit result is processed, all rules are retrieved from the database and run against the attributes of the specific device. Rules run against one device at a time - there is no facility to say <i>Run the rules against all devices<i> or <i>Run the rules against these devices<i>. An individual rule will test one or more attributes of the device and if they match the rule, the result will be applied. Several attributes can be tested. Several attributes can be set. Think of this as an If This, Then That system for Open-AudIT.'] = 'Pokaždé, když je zařízení objeveno nebo zpracován výsledek auditu, jsou všechna pravidla získána z databáze a běží proti atributům konkrétního zařízení. Pravidla běží proti jednomu zařízení najednou - není žádné zařízení říct <i>Spustit pravidla proti všem zařízením<i> nebo <i>Spustit pravidla proti těmto zařízením<i>. Individuální pravidlo bude testovat jeden nebo více atributů zařízení a pokud se shodují s pravidlem, použije se výsledek. Několik atributů lze testovat. Lze nastavit několik atributů. Berte to jako If This, pak ten systém pro Open- Audit.</i></i></i></i>';

$GLOBALS["lang"]['Easily run a discovery upon a network in a single click, without entering the details of that network each and every time.'] = 'Snadno spustit objev na síti v jediném kliknutí, bez zadání podrobnosti této sítě pokaždé.';

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

$GLOBALS["lang"]['Either none or present.

<strong>None</strong> - The successful attack does not depend on the deployment and execution conditions of the vulnerable system. The attacker can expect to be able to reach the vulnerability and execute the exploit under all or most instances of the vulnerability.

<strong>Present</strong> - The successful attack depends on the presence of specific deployment and execution conditions of the vulnerable system that enable the attack. These include:

A race condition must be won to successfully exploit the vulnerability. The successfulness of the attack is conditioned on execution conditions that are not under full control of the attacker. The attack may need to be launched multiple times against a single target before being successful.

Network injection. The attacker must inject themselves into the logical network path between the target and the resource requested by the victim (e.g. vulnerabilities requiring an on-path attacker).'] = 'Buď žádné nebo přítomné.

<strong>Žádné</strong> - Úspěšný útok nezávisí na podmínkách nasazení a provedení zranitelného systému. Útočník může očekávat, že bude schopen dosáhnout zranitelnosti a provést vykořisťování za všech nebo většiny případů zranitelnosti.

<strong>Přítomnost</strong> - Úspěšný útok závisí na přítomnosti konkrétních podmínek nasazení a provedení zranitelného systému, který útok umožňuje. Patří mezi ně:

Závodní podmínka musí být získána k úspěšnému využití zranitelnosti. Úspěch útoku je podmíněn podmínkami provedení, které nejsou pod plnou kontrolou útočníka. Útok může být třeba zahájit několikrát proti jedinému cíli, než bude úspěšný.

Síťový vstřik. Útočník se musí vpíchnout do logické sítě mezi cílem a zdrojem požadovaným obětí (např. zranitelnosti vyžadující útočníka na cestě).';

$GLOBALS["lang"]['El Salvador'] = 'Salvador';

$GLOBALS["lang"]['email'] = 'E-mail';

$GLOBALS["lang"]['Email'] = 'E-mail';

$GLOBALS["lang"]['email_address'] = 'E-mailová adresa';

$GLOBALS["lang"]['Email Address'] = 'E-mailová adresa';

$GLOBALS["lang"]['Email Configuration'] = 'Nastavení e-mailu';

$GLOBALS["lang"]['Email to send test to'] = 'Email pro odeslání testu na';

$GLOBALS["lang"]['Enable'] = 'Povolit';

$GLOBALS["lang"]['Enable Distributed COM on this computer - Option is checked'] = 'Povolit distribuovaný COM na tomto počítači - Opce je kontrolována';

$GLOBALS["lang"]['enabled'] = 'Povoleno';

$GLOBALS["lang"]['Enabled'] = 'Povoleno';

$GLOBALS["lang"]['Enabling the Feature Under Windows'] = 'Povolit funkci pod Windows';

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

$GLOBALS["lang"]['Endpoint'] = 'Konečný bod';

$GLOBALS["lang"]['English'] = 'Anglicky';

$GLOBALS["lang"]['Enhances regulatory compliance'] = 'Zlepšuje dodržování právních předpisů';

$GLOBALS["lang"]['Enrichment is complete. The CVE has full metadata and is considered stable.'] = 'Obohacení je kompletní. CVE má plná metadata a je považován za stabilní.';

$GLOBALS["lang"]['Ensure documentation is controlled and accessible'] = 'Zajistit, aby dokumentace byla kontrolována a přístupná';

$GLOBALS["lang"]['enterprise'] = 'Podniky';

$GLOBALS["lang"]['Enterprise'] = 'Podniky';

$GLOBALS["lang"]['Enterprise Private Network'] = 'Soukromá síť Enterprise';

$GLOBALS["lang"]['Enterprise private network'] = 'Soukromá podniková síť';

$GLOBALS["lang"]['Entitlement Type'] = 'Typ nároku';

$GLOBALS["lang"]['Entra'] = 'Entra';

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

$GLOBALS["lang"]['Esperanto'] = 'Esperanto';

$GLOBALS["lang"]['Establish a project plan and timeline'] = 'Vytvořit plán projektu a časovou osu';

$GLOBALS["lang"]['Establish an information security policy'] = 'Vytvořit politiku bezpečnosti informací';

$GLOBALS["lang"]['Established'] = 'Zřízení';

$GLOBALS["lang"]['Estonia'] = 'Estonsko';

$GLOBALS["lang"]['Estonian'] = 'Estonština';

$GLOBALS["lang"]['Ethernet MAC'] = 'Ethernet MAC';

$GLOBALS["lang"]['ethernet_mac'] = 'Ethernet Mac';

$GLOBALS["lang"]['Ethernet Mac'] = 'Ethernet Mac';

$GLOBALS["lang"]['Ethiopia'] = 'Etiopie';

$GLOBALS["lang"]['Evaluate the ISMS internally'] = 'Vyhodnotit ISMS interně';

$GLOBALS["lang"]['Every'] = 'Každý';

$GLOBALS["lang"]['Every Day'] = 'Každý den';

$GLOBALS["lang"]['Example'] = 'Příklad';

$GLOBALS["lang"]['Example Devices'] = 'Příklad zařízení';

$GLOBALS["lang"]['Example Org Chart with Access'] = 'Příklad Org Graf s přístupem';

$GLOBALS["lang"]['Example text from'] = 'Příklad textu z';

$GLOBALS["lang"]['Examples'] = 'Příklady';

$GLOBALS["lang"]['Exceptions'] = 'Výjimky';

$GLOBALS["lang"]['exclude'] = 'Vyloučení';

$GLOBALS["lang"]['Exclude'] = 'Vyloučení';

$GLOBALS["lang"]['exclude_ip'] = 'Vyloučení IP';

$GLOBALS["lang"]['Exclude IP'] = 'Vyloučení IP';

$GLOBALS["lang"]['Exclude IP Addresses'] = 'Vyloučení IP adres';

$GLOBALS["lang"]['Exclude IP Addresses (individual IP - 192.168.1.20, ranges - 192.168.1.30-40 or subnets - 192.168.1.100/30) listed from being scanned. Comma seperated, no spaces.'] = 'Kromě IP adres (individuální IP - 192.168.1.20, rozsahy - 192.168.1.30-40 nebo podsítě - 192.168.1.100 / 30) uvedených ze skenování. Koma oddělená, žádné mezery.';

$GLOBALS["lang"]['Exclude TCP Ports'] = 'Bez TCP portů';

$GLOBALS["lang"]['exclude_tcp_ports'] = 'Vyloučení přístavů Tcp';

$GLOBALS["lang"]['Exclude Tcp Ports'] = 'Vyloučení přístavů Tcp';

$GLOBALS["lang"]['Exclude UDP Ports'] = 'Vyloučení portů UDP';

$GLOBALS["lang"]['exclude_udp_ports'] = 'Exclude Udp Ports';

$GLOBALS["lang"]['Exclude Udp Ports'] = 'Exclude Udp Ports';

$GLOBALS["lang"]['Exclude any ports listed from being scanned. Comma seperated, no spaces.'] = 'Vyloučení všech přístavů uvedených v seznamu z skenování. Koma oddělená, žádné mezery.';

$GLOBALS["lang"]['Exclude these IP addresses from being Nmap scanned.'] = 'Vyjměte tyto IP adresy z skenování Nmap.';

$GLOBALS["lang"]['Excluded'] = 'Vyloučeno';

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

$GLOBALS["lang"]['expire_date'] = 'Datum ukončení';

$GLOBALS["lang"]['Expire Date'] = 'Datum ukončení';

$GLOBALS["lang"]['expire_minutes'] = 'Konec zápisu';

$GLOBALS["lang"]['Expire Minutes'] = 'Konec zápisu';

$GLOBALS["lang"]['expires'] = 'Platí';

$GLOBALS["lang"]['Expires'] = 'Platí';

$GLOBALS["lang"]['expiry_date'] = 'Datum skončení platnosti';

$GLOBALS["lang"]['Expiry Date'] = 'Datum skončení platnosti';

$GLOBALS["lang"]['exploit_maturity'] = 'Exploit maturity';

$GLOBALS["lang"]['Exploit Maturity'] = 'Exploit maturity';

$GLOBALS["lang"]['Export'] = 'Vývoz';

$GLOBALS["lang"]['Export by Device'] = 'Export by Device';

$GLOBALS["lang"]['Export by Policy'] = 'Vývoz podle politik';

$GLOBALS["lang"]['Export data to'] = 'Exportovat data do';

$GLOBALS["lang"]['Exporting a Device'] = 'Vývoz zařízení';

$GLOBALS["lang"]['expose'] = 'Odhalení';

$GLOBALS["lang"]['Expose'] = 'Odhalení';

$GLOBALS["lang"]['External'] = 'Vnější';

$GLOBALS["lang"]['External Field Name'] = 'Název vnějšího pole';

$GLOBALS["lang"]['External Field Type'] = 'Typ vnějšího pole';

$GLOBALS["lang"]['External Field Types'] = 'Typy vnějších polí';

$GLOBALS["lang"]['external_ident'] = 'Externí dent';

$GLOBALS["lang"]['External Ident'] = 'Externí dent';

$GLOBALS["lang"]['external_link'] = 'Externí odkaz';

$GLOBALS["lang"]['External Link'] = 'Externí odkaz';

$GLOBALS["lang"]['extra_columns'] = 'Extra sloupce';

$GLOBALS["lang"]['Extra Columns'] = 'Extra sloupce';

$GLOBALS["lang"]['Extra and Time based Reporting'] = 'Extra a time based Reporting';

$GLOBALS["lang"]['Extra and more verbose logging is generated for troubleshooting.'] = 'Extra a další logování verbózy je generován pro řešení problémů.';

$GLOBALS["lang"]['FAQ'] = 'FAQ';

$GLOBALS["lang"]['FQDN'] = 'FQDN';

$GLOBALS["lang"]['FW Revision'] = 'Revize FW';

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

$GLOBALS["lang"]['Fields attributes are'] = 'Pole atributy jsou';

$GLOBALS["lang"]['Fiji the Fiji Islands'] = 'Fidži Fidži';

$GLOBALS["lang"]['File'] = 'Soubor';

$GLOBALS["lang"]['File Auditing'] = 'Audit souborů';

$GLOBALS["lang"]['File Import'] = 'Importovat soubor';

$GLOBALS["lang"]['File Input'] = 'Vstup do souboru';

$GLOBALS["lang"]['file_name'] = 'Název souboru';

$GLOBALS["lang"]['File Name'] = 'Název souboru';

$GLOBALS["lang"]['File Share Discovery'] = 'Sdílet soubory Discovery';

$GLOBALS["lang"]['file_size'] = 'Velikost souboru';

$GLOBALS["lang"]['File Size'] = 'Velikost souboru';

$GLOBALS["lang"]['filename'] = 'Název souboru';

$GLOBALS["lang"]['Filename'] = 'Název souboru';

$GLOBALS["lang"]['files'] = 'Soubory';

$GLOBALS["lang"]['Files'] = 'Soubory';

$GLOBALS["lang"]['files_id'] = 'ID souborů';

$GLOBALS["lang"]['Files ID'] = 'ID souborů';

$GLOBALS["lang"]['filter'] = 'Filtr';

$GLOBALS["lang"]['Filter'] = 'Filtr';

$GLOBALS["lang"]['filtered'] = 'Filtrované';

$GLOBALS["lang"]['Filtered'] = 'Filtrované';

$GLOBALS["lang"]['Filtered Ports'] = 'Filtrované porty';

$GLOBALS["lang"]['Finland'] = 'Finsko';

$GLOBALS["lang"]['Finnish'] = 'Finština';

$GLOBALS["lang"]['Firewall'] = 'Firewall';

$GLOBALS["lang"]['Firewall Packages'] = 'Firewall Packages';

$GLOBALS["lang"]['firewall_rule'] = 'Pravidlo firewall';

$GLOBALS["lang"]['Firewall Rule'] = 'Pravidlo firewall';

$GLOBALS["lang"]['firmware'] = 'Firmware';

$GLOBALS["lang"]['Firmware'] = 'Firmware';

$GLOBALS["lang"]['firmware_revision'] = 'Revize firmwaru';

$GLOBALS["lang"]['Firmware Revision'] = 'Revize firmwaru';

$GLOBALS["lang"]['First'] = 'První';

$GLOBALS["lang"]['First Name'] = 'Jméno';

$GLOBALS["lang"]['first_run'] = 'První běh';

$GLOBALS["lang"]['First Run'] = 'První běh';

$GLOBALS["lang"]['first_seen'] = 'First Seen';

$GLOBALS["lang"]['First Seen'] = 'First Seen';

$GLOBALS["lang"]['First focus on what the end need is: are you trying to baseline software, users, or Netstat data? What is the important thing(s) to compare and report on?'] = 'Nejprve se zaměřte na to, co je nakonec potřeba: snažíte se základní software, uživatelé nebo Netstat data? Jaká je důležitá věc (y) k porovnání a podávání zpráv?';

$GLOBALS["lang"]['FirstWave'] = 'FirstWave';

$GLOBALS["lang"]['Fix'] = 'Oprava';

$GLOBALS["lang"]['Fixed'] = 'Pevné';

$GLOBALS["lang"]['Fixing the Issue'] = 'Oprava otázky';

$GLOBALS["lang"]['Floor'] = 'Podlaha';

$GLOBALS["lang"]['Follow any of the links below and discover how to use Open-AudIT to find out <b>Whats On Your Network?</b>'] = 'Postupujte podle některého z níže uvedených odkazů a zjistit, jak používat Open- Audit zjistit <b>Co je na vaší síti?</b>';

$GLOBALS["lang"]['For'] = 'Pro';

$GLOBALS["lang"]['For <i>Type</i> make sure to select Baseline, and for Group you should select a Group of devices, if applicable to this baseline, that best represent the devices to apply the baseline against. This will prevent erroneous entries.'] = 'Pro <i>Typ</i> Ujistěte se, že zvolíte výchozí bod, a pro skupinu byste měli zvolit skupinu zařízení, pokud je to vhodné pro tuto základní hodnotu, která nejlépe reprezentuje zařízení pro použití výchozí hodnoty proti. To zabrání chybným zápisům.';

$GLOBALS["lang"]['For Debian/Ubuntu run, including setting dpkg to remember your override so an apt-get upgrade will not break'] = 'Pro Debian / Ubuntu běh, včetně nastavení dpkg pro zapamatování vašeho ovládání, takže upgrade apt- get se nerozbije';

$GLOBALS["lang"]['For SNMP Open-AudIT can use v1, v2 and v3 credentials. The device is queried regardless of it being a router, switch (regular network devices) or a computer (Linux and Windows often run SNMP for monitoring tools).'] = 'Pro SNMP Open- Audit lze použít v1, v2 a v3 pověření. Zařízení je dotazováno bez ohledu na to, zda je router, přepínač (regulární síťová zařízení) nebo počítač (Linux a Windows často běží SNMP pro monitorovací nástroje).';

$GLOBALS["lang"]['For a primer on cron, see this Wikipedia page'] = 'Pro primer na cron, viz tato stránka Wikipedia';

$GLOBALS["lang"]['For a seed discovery, should I only discover IPs in the private IP address space.'] = 'Pro objev semen, bych měl objevit pouze IP v soukromém IP adresním prostoru.';

$GLOBALS["lang"]['For a seed discovery, should I only discover IPs on the chosen subnet.'] = 'Pro objev semen, bych měl objevit jen IP na zvolené podsíti.';

$GLOBALS["lang"]['For a seed discovery, should I ping the subnet before running the discovery.'] = 'Pro objev semen, bych měl ping podsíť před spuštěním objevu.';

$GLOBALS["lang"]['For advanced entry of a raw SQL query. As per Queries, you must include <code>WHERE @filter AND<code> in your SQL.'] = 'Pro pokročilý vstup syrového SQL dotazu. Podle dotazů, musíte zahrnovat <code>WHERE @filter AND<code> in your SQL.</code></code>';

$GLOBALS["lang"]['For each spawned process, the below occurs.'] = 'Pro každý zplozený proces se vyskytuje níže.';

$GLOBALS["lang"]['For example - you might create a baseline from a device running Redhat 9 which acts as one of your Apache servers in a cluster. You know this particular server is configured just the way you want it but you are unsure if other servers in the cluster are configured exactly the same. Baselines enable you to determine this.'] = 'Například - můžete vytvořit výchozí hodnotu ze zařízení s Redhat 9, které funguje jako jeden z vašich Apache serverů v clusteru. Víte, že tento konkrétní server je nakonfigurován přesně tak, jak chcete, ale nejste si jisti, zda jsou ostatní servery v clusteru nakonfigurovány přesně stejně. Základní linie vám umožní určit toto.';

$GLOBALS["lang"]['For example - you might create a baseline from a device running Redhat 9 which acts as one of your Apache servers in a cluster. You know this particular server is configured just the way you want it but you are unsure if other servers in the cluster are configured exactly the same. Baselines enables you to determine this.'] = 'Například - můžete vytvořit výchozí hodnotu ze zařízení s Redhat 9, které funguje jako jeden z vašich Apache serverů v clusteru. Víte, že tento konkrétní server je nakonfigurován přesně tak, jak chcete, ale nejste si jisti, zda jsou ostatní servery v clusteru nakonfigurovány přesně stejně. Základní linie vám umožní určit toto.';

$GLOBALS["lang"]['For further details information, see the wiki.'] = 'Další podrobnosti viz wiki.';

$GLOBALS["lang"]['For licenses that are not perpetual, when does the license expire.'] = 'Pro licence, které nejsou trvalé, kdy vyprší licence.';

$GLOBALS["lang"]['For more detailed information, check the Open-AudIT Knowledge Base.'] = 'Pro podrobnější informace zkontrolujte Znalostní základnu Open- Audit.';

$GLOBALS["lang"]['For more information please see the following guide which includes a video. Use'] = 'Další informace naleznete v následující příručce, která obsahuje video. Použití';

$GLOBALS["lang"]['For more information, see'] = 'Pro více informací viz';

$GLOBALS["lang"]['form_factor'] = 'Forma faktoru';

$GLOBALS["lang"]['Form Factor'] = 'Forma faktoru';

$GLOBALS["lang"]['format'] = 'Formát';

$GLOBALS["lang"]['Format'] = 'Formát';

$GLOBALS["lang"]['Forth'] = 'Forth';

$GLOBALS["lang"]['fqdn'] = 'Fqdn';

$GLOBALS["lang"]['Fqdn'] = 'Fqdn';

$GLOBALS["lang"]['France, French Republic'] = 'Francie, Francie';

$GLOBALS["lang"]['free'] = 'Volný';

$GLOBALS["lang"]['Free'] = 'Volný';

$GLOBALS["lang"]['French'] = 'Francouzština';

$GLOBALS["lang"]['French Guiana'] = 'Francouzská Guyana';

$GLOBALS["lang"]['French Polynesia'] = 'Francouzská Polynésie';

$GLOBALS["lang"]['French Southern Territories'] = 'Francouzská jižní území';

$GLOBALS["lang"]['Frequently Asked Questions'] = 'Často kladené otázky';

$GLOBALS["lang"]['Friday'] = 'Pátek';

$GLOBALS["lang"]['From 100 Devices'] = 'Od 100 zařízení';

$GLOBALS["lang"]['From 500 Devices'] = 'Z 500 zařízení';

$GLOBALS["lang"]['From that page'] = 'Z té stránky';

$GLOBALS["lang"]['full_name'] = 'Celé jméno';

$GLOBALS["lang"]['Full Name'] = 'Celé jméno';

$GLOBALS["lang"]['Full cloud auditing with all the details from a regular Open-AudIT audit AND details such as the machine type and size.'] = 'Kompletní audit cloud se všemi podrobnostmi z pravidelného Open- Audit auditu a podrobností, jako je typ a velikost stroje.';

$GLOBALS["lang"]['function'] = 'Funkce';

$GLOBALS["lang"]['Function'] = 'Funkce';

$GLOBALS["lang"]['GROUP BY'] = 'SKUPINA BY';

$GLOBALS["lang"]['Gabon'] = 'Gabon';

$GLOBALS["lang"]['Galician'] = 'Galician';

$GLOBALS["lang"]['Gambia the'] = 'Gambie.';

$GLOBALS["lang"]['Gap Analysis (optional)'] = 'Gap analýza (nepovinné)';

$GLOBALS["lang"]['gateway'] = 'Brána';

$GLOBALS["lang"]['Gateway'] = 'Brána';

$GLOBALS["lang"]['gateways'] = 'Brány';

$GLOBALS["lang"]['Gateways'] = 'Brány';

$GLOBALS["lang"]['Generated By'] = 'Generovaný';

$GLOBALS["lang"]['geo'] = 'Geo';

$GLOBALS["lang"]['Geo'] = 'Geo';

$GLOBALS["lang"]['Geographical Maps'] = 'Zeměpisné mapy';

$GLOBALS["lang"]['Georgia'] = 'Gruzie';

$GLOBALS["lang"]['German'] = 'Němčina';

$GLOBALS["lang"]['Germany'] = 'Německo';

$GLOBALS["lang"]['Get Lat/Long'] = 'Get Lat / Long';

$GLOBALS["lang"]['Get News'] = 'Získat zprávy';

$GLOBALS["lang"]['Get Started'] = 'Začít';

$GLOBALS["lang"]['Get a Free License'] = 'Získat licenci zdarma';

$GLOBALS["lang"]['Get familiar with the Open-AudIT platform and explore some of its features.'] = 'Seznamte se s platformou Open- Audit a prozkoumejte některé jeho funkce.';

$GLOBALS["lang"]['Getting Started'] = 'Začínáme';

$GLOBALS["lang"]['Ghana'] = 'Ghana';

$GLOBALS["lang"]['Gibraltar'] = 'Gibraltar';

$GLOBALS["lang"]['Github'] = 'Github';

$GLOBALS["lang"]['Global Discovery Options'] = 'Možnosti globálního odhalení';

$GLOBALS["lang"]['Global area network'] = 'Síť globální oblasti';

$GLOBALS["lang"]['Go'] = 'Běž.';

$GLOBALS["lang"]['Go back to your Open-AudIT server and create a discovery with the target Windows computers IP Address as the subnet (this will save having to discover the entire subnet again). Run the discovery, taking note of any issues. For any issues found, take appropriate actions.'] = 'Vraťte se na svůj Open- Audit server a vytvořte objev s cílovou IP adresou Windows jako podsítí (tím ušetříte na to, že budete muset znovu objevit celý podnet). Prověř ten objev a zaznamenej všechny problémy. V případě zjištěných problémů přijměte vhodná opatření.';

$GLOBALS["lang"]['Go the target Windows PC (or use RDP) and log on as the user used by your discovery credential set.'] = 'Přejděte na cílový Windows PC (nebo použijte RDP) a přihlaste se jako uživatel používaný vaší vyhledávací kreditní sady.';

$GLOBALS["lang"]['Go to menu'] = 'Přejít na menu';

$GLOBALS["lang"]['Go to the <i>Applications</i> -> <i>App registrations</i> menu item on the far left. Search for Open-AudIT. Click the Open-AudIT entry in the list (assuming you named the app Open-AudIT).'] = 'Jdi do <i>Žádosti</i> - > <i>Registrace aplikací</i> položka menu na levé straně. Hledejte Open- Audit. Klikněte na položku Open- Audit v seznamu (za předpokladu, že jste pojmenovali aplikaci Open- Audit).';

$GLOBALS["lang"]['Go to the <i>Certificates and secrets</i> menu item under <i>Manage</i> in the center menu.'] = 'Jdi do <i>Osvědčení a tajemství</i> položka menu pod <i>Správa</i> v hlavním menu.';

$GLOBALS["lang"]['Go to the <i>Single sign-on</i> menu item and click SAML for <i>Select a single sign-on method</i>.'] = 'Jdi do <i>Indikátor</i> položka menu a klikněte na SAML pro <i>Vyberte jednu metodu sign- on</i>.';

$GLOBALS["lang"]['Google Compute Fields'] = 'Google Compute Fields';

$GLOBALS["lang"]['Google JSON Credentials'] = 'Google JSON Úvěry';

$GLOBALS["lang"]['Google Maps API Key'] = 'Google Maps API Klíč';

$GLOBALS["lang"]['Great, then you can help! Send FirstWave the text shown in the GUI and what should be shown. We will include that in the language file so going forward, the translation is improved and you do not need to worry about updating it for every release!'] = 'Super, tak mi můžeš pomoct! Poslat první Zamávejte textem uvedeným v GUI a co by mělo být zobrazeno. Budeme zahrnovat, že v jazykovém souboru tak do budoucna, překlad se zlepšuje a nemusíte se starat o aktualizaci pro každé vydání!';

$GLOBALS["lang"]['Greater Than'] = 'Větší než';

$GLOBALS["lang"]['Greater Than or Equals'] = 'Větší než nebo rovna';

$GLOBALS["lang"]['Greece'] = 'Řecko';

$GLOBALS["lang"]['Greek'] = 'Řečtina';

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

$GLOBALS["lang"]['Groups are used as simple lists of devices that match the required conditions. If requested using JSON they return a list of <i>devices.id</i> only. If requested using the web interface, they return the standard column attribute list. Groups can be used for Integrations, Baselines and other items.'] = 'Skupiny se používají jako jednoduché seznamy zařízení, která odpovídají požadovaným podmínkám. Na požádání pomocí JSON vrátí seznam <i>devices.id</i> pouze. Na požádání pomocí webového rozhraní vrátí standardní seznam atributů sloupce. Skupiny lze použít pro integrace, základní linie a jiné položky.';

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

$GLOBALS["lang"]['Hardware'] = 'Hardware';

$GLOBALS["lang"]['hardware_revision'] = 'Revize hardwaru';

$GLOBALS["lang"]['Hardware Revision'] = 'Revize hardwaru';

$GLOBALS["lang"]['Has this policy been applied in this organization.'] = 'Byla tato politika uplatňována v této organizaci.';

$GLOBALS["lang"]['hash'] = 'Haš.';

$GLOBALS["lang"]['Hash'] = 'Haš.';

$GLOBALS["lang"]['Have the agent always run the latest audit script (if you upgrade Open-AudIT and manually copy the scripts to the targets, then set cron - you will need to update these scripts for each upgrade).'] = 'Mají agent vždy spustit nejnovější audit skript (pokud upgradujete Open- Audit a ručně kopírovat skripty do cílů, pak nastavit cron - budete muset aktualizovat tyto skripty pro každý upgrade).';

$GLOBALS["lang"]['Have your user open a command prompt (using <i>Run as Administrator</i>). Paste the below into the prompt to download the Agent.'] = 'Nechte svého uživatele otevřít příkaz (pomocí <i>Spustit jako správce</i>). Vložte níže do výzvy ke stažení Agent.';

$GLOBALS["lang"]['Head'] = 'Hlava';

$GLOBALS["lang"]['Heard Island and McDonald Islands'] = 'Heard Island and McDonald Islands';

$GLOBALS["lang"]['Hebrew'] = 'Hebrejsky';

$GLOBALS["lang"]['height'] = 'Výška';

$GLOBALS["lang"]['Height'] = 'Výška';

$GLOBALS["lang"]['Height in RU'] = 'Výška v ŽP';

$GLOBALS["lang"]['Help'] = 'Nápověda';

$GLOBALS["lang"]['Help and Frequently Asked Questions'] = 'Pomoc a často kladené otázky';

$GLOBALS["lang"]['Helps manage and mitigate information security risks'] = 'Pomáhá řídit a zmírňovat rizika pro bezpečnost informací';

$GLOBALS["lang"]['Hide Audit Window'] = 'Skrýt okno pro audit';

$GLOBALS["lang"]['high'] = 'Vysoká';

$GLOBALS["lang"]['High'] = 'Vysoká';

$GLOBALS["lang"]['High Availability'] = 'Vysoká dostupnost';

$GLOBALS["lang"]['Hindi'] = 'Hindština';

$GLOBALS["lang"]['Holy See (Vatican City State)'] = 'Svatý stolec (Vatikánský městský stát)';

$GLOBALS["lang"]['Home'] = 'Domů';

$GLOBALS["lang"]['home'] = 'Domů';

$GLOBALS["lang"]['Home Area Network'] = 'Síť domovské oblasti';

$GLOBALS["lang"]['Home area network'] = 'Domácí síť';

$GLOBALS["lang"]['Honduras'] = 'Honduras';

$GLOBALS["lang"]['Hong Kong'] = 'Hongkong';

$GLOBALS["lang"]['host'] = 'Hostitel';

$GLOBALS["lang"]['Host'] = 'Hostitel';

$GLOBALS["lang"]['hostname'] = 'Jméno hostitele';

$GLOBALS["lang"]['Hostname'] = 'Jméno hostitele';

$GLOBALS["lang"]['hour'] = 'Hodina';

$GLOBALS["lang"]['Hour'] = 'Hodina';

$GLOBALS["lang"]['How Does It Work?'] = 'Jak to funguje?';

$GLOBALS["lang"]['How Does it Work?'] = 'Jak to funguje?';

$GLOBALS["lang"]['How Long Does it Take'] = 'Jak dlouho to trvá?';

$GLOBALS["lang"]['How and Why is'] = 'Jak a proč je';

$GLOBALS["lang"]['How and Why is Open-AudIT More Secure'] = 'Jak a proč je Open- Audit bezpečnější';

$GLOBALS["lang"]['How do they work?'] = 'Jak fungují?';

$GLOBALS["lang"]['How does a Device Seed Discovery find known IPs?'] = 'Jak se zařízení Seed Discovery najít známé IP?';

$GLOBALS["lang"]['How long did the command take to execute.'] = 'Jak dlouho to velení trvalo.';

$GLOBALS["lang"]['How long should Nmap wait for a response, per device.'] = 'Jak dlouho by měl Nmap čekat na odpověď, na zařízení.';

$GLOBALS["lang"]['How many circuit feed to this rack.'] = 'Kolik obvodů vede do tohoto stojanu.';

$GLOBALS["lang"]['How many policies results in a fail.'] = 'Kolik politik má za následek selhání.';

$GLOBALS["lang"]['How many policies results in a pass.'] = 'Kolik politik má za následek průchod.';

$GLOBALS["lang"]['How many power sockets in this rack.'] = 'Kolik energetických zásuvek je v tomto stojanu.';

$GLOBALS["lang"]['How many rack units in height is this rack.'] = 'Kolik stojanů ve výšce je tenhle prut.';

$GLOBALS["lang"]['How often should the collector ask the server for a task.'] = 'Jak často by měl sběratel požádat server o úkol.';

$GLOBALS["lang"]['How should we select devices to be integrated (using an Attribute, Query or a Group).'] = 'Jak bychom měli vybrat zařízení, která mají být integrována (pomocí Atribute, Query nebo Group).';

$GLOBALS["lang"]['How the vulnerability is exploited (e.g., Network, Adjacent, Local, Physical).'] = 'Jak se využívá zranitelnost (např. síť, přilehlé, místní, fyzické).';

$GLOBALS["lang"]['How to compare'] = 'Jak porovnat';

$GLOBALS["lang"]['Human-readable explanation of the vulnerability.'] = 'Lidočitelné vysvětlení zranitelnosti.';

$GLOBALS["lang"]['Hungarian'] = 'maďarština';

$GLOBALS["lang"]['Hungary'] = 'Maďarsko';

$GLOBALS["lang"]['hw_cpe'] = 'Hw Cpe';

$GLOBALS["lang"]['Hw Cpe'] = 'Hw Cpe';

$GLOBALS["lang"]['hyperthreading'] = 'Hypertenze';

$GLOBALS["lang"]['Hyperthreading'] = 'Hypertenze';

$GLOBALS["lang"]['I have read the EULA.'] = 'Četl jsem EULA.';

$GLOBALS["lang"]['I hope this post has alleviated any concerns you have about Open-AudIT and Security. If you have any questions at all, please do not hesitate to reach out to us here at FirstWave. We are always happy to discuss your concerns and needs. And maybe if your question is not something I have addressed here, I can add it here for future users'] = 'Doufám, že tohle místo zmírnilo všechny vaše obavy ohledně Open- Auditu a bezpečnosti. Pokud máte nějaké dotazy, neváhejte nás kontaktovat zde v FirstWave. Vždy rádi diskutujeme o vašich obavách a potřebách. A možná pokud vaše otázka není něco, co jsem zde řešil, mohu ji přidat zde pro budoucí uživatele';

$GLOBALS["lang"]['id'] = 'ID';

$GLOBALS["lang"]['ID'] = 'ID';

$GLOBALS["lang"]['IF'] = 'IF';

$GLOBALS["lang"]['IMPORTANT'] = 'DŮLEŽITÉ';

$GLOBALS["lang"]['INPUTS'] = 'INPUTY';

$GLOBALS["lang"]['IOS Version'] = 'Verze IOS';

$GLOBALS["lang"]['IP'] = 'IP';

$GLOBALS["lang"]['ip'] = 'IP';

$GLOBALS["lang"]['IP Address'] = 'IP adresa';

$GLOBALS["lang"]['IP Addresses'] = 'IP adresy';

$GLOBALS["lang"]['IP Last Seen'] = 'Name';

$GLOBALS["lang"]['IP Set By'] = 'Nastavení IP podle';

$GLOBALS["lang"]['ISMS'] = 'ISMS';

$GLOBALS["lang"]['ISO 27001 only.'] = 'Pouze ISO27001.';

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

$GLOBALS["lang"]['Identify information assets'] = '1 písm. b) nařízení o kapitálových požadavcích.';

$GLOBALS["lang"]['Identify interested parties and their requirements'] = 'Identifikovat zúčastněné strany a jejich požadavky';

$GLOBALS["lang"]['Identify key stakeholders and assign roles'] = 'Identifikovat klíčové zúčastněné strany a přiřadit role';

$GLOBALS["lang"]['Identify the device(s) that are your exemplary, or <i>gold image</i> you want to compare similar devices against.'] = 'Identifikujte zařízení (zařízení), které je vaším příkladem, nebo <i>zlatá fotka</i> chcete porovnat podobná zařízení s.';

$GLOBALS["lang"]['Identifying and evaluating security risks'] = 'Identifikace a hodnocení bezpečnostních rizik';

$GLOBALS["lang"]['If'] = 'Pokud';

$GLOBALS["lang"]['If a device is individually discovered using the <i>Discover Device</i> link on the device details page, we first check if this device has been discovered previously (by Discovery) and if so, use the discovery options from that scan. If it has not been previously discovered, we revert to the configuration item discovery_default_scan_option the settings.'] = 'Pokud je zařízení objeveno individuálně pomocí <i>Objevte zařízení</i> odkaz na stránce podrobnosti zařízení, jsme nejprve zkontrolovat, zda toto zařízení bylo objeveno dříve (Discovery), a pokud ano, použijte možnosti objevení z tohoto skenu. Pokud to nebylo dříve objeveno, vrátíme se k objevení konfiguračního prvku _ default _ scan _ option nastavení.';

$GLOBALS["lang"]['If a new Org is created, an LDAP group name is automatically derived from the name. For example, if a new Org is created and is named Test, the corresponding LDAP group will be named open-audit_orgs_test.'] = 'Je-li vytvořen nový Org, automaticky se odvozuje název skupiny LDAP. Pokud je například vytvořen nový Org a je pojmenován Test, bude příslušná skupina LDAP pojmenována open-audit _ orgs _ test.';

$GLOBALS["lang"]['If a port responds with filtered, should we consider it available.'] = 'Pokud port reaguje s filtrem, měli bychom ho považovat za dostupný.';

$GLOBALS["lang"]['If a port responds with open|filtered, should we consider it available.'] = 'Pokud port reaguje s otevřeným current 124; filtrován, měli bychom ho považovat za dostupný.';

$GLOBALS["lang"]['If a remote device does not exist in the Open-AudIT selected devices, should we delete it from the external system.'] = 'Pokud vzdálené zařízení ve vybraných zařízeních Open- Audit neexistuje, měli bychom ho odstranit z vnějšího systému.';

$GLOBALS["lang"]['If an Open-AudIT device has been changed, should we update the external system.'] = 'Pokud bylo zařízení Open- AudIT změněno, měli bychom aktualizovat externí systém.';

$GLOBALS["lang"]['If an Open-AudIT device is not on the external system, should we create it.'] = 'Pokud zařízení Open- AudIT není na vnějším systému, měli bychom ho vytvořit.';

$GLOBALS["lang"]['If an agent reports its primary IP is in this subnet, perform the actions.'] = 'Pokud agent ohlásí, že jeho primární IP je v této podsíti, provede kroky.';

$GLOBALS["lang"]['If any of these (comma seperated, no spaces) ports are detected, assume SSH is running on them and use them for auditing. No need to add this port to the Custom TCP ports - it will be added automatically.'] = 'Pokud se zjistí některý z těchto portů (čárka oddělená, žádné mezery), předpokládejme, že na nich SSH běží a použije je pro audit. Není třeba přidávat tento port do vlastních TCP portů - bude přidán automaticky.';

$GLOBALS["lang"]['If no operator is specified, the default is =. Properties should be fully qualified - ie, devices.hostname (not just hostname).'] = 'Pokud není zadán žádný operátor, výchozí hodnota je =. Vlastnosti by měly být plně kvalifikovány - tj., devices.hostname (nejen jméno hostitele).';

$GLOBALS["lang"]['If no value is present, supply this value. EG: for system.nmis_group / configuraion.group we use'] = 'Pokud není přítomna žádná hodnota, uveďte tuto hodnotu. EG: pro systém.nmis _ group / configuraion. Skupina, kterou používáme';

$GLOBALS["lang"]['If set, holds a JSON array of specific device columns this user has chosen to see, other than the configuration default.'] = 'Pokud je nastaveno, má JSON pole specifických sloupců zařízení, které si zvolil tento uživatel vidět, kromě výchozího nastavení.';

$GLOBALS["lang"]['If the OS Family (as reported by the device) contains this item, pass.</li>'] = 'Pokud OS Family (podle hlášení zařízení) obsahuje tuto položku, projít.';

$GLOBALS["lang"]['If the Open-AudIT Server has Collectors reporting to it, an additional drop down is provided. You can select this to specify which Collector the task should run on. Only Discovery tasks are supported for Collectors.'] = 'Pokud Open- Audit Server má Sběratele, je k dispozici další pokles. Toto můžete zvolit pro určení, na kterém Sběrateli by měl být úkol spuštěn. Pouze Discovery úkoly jsou podporovány pro sběratele.';

$GLOBALS["lang"]['If the agent OS family (case insensitive) contains this string, perform the actions.'] = 'Pokud agent OS rodina (případ necitlivý) obsahuje tento řetězec, provést akce.';

$GLOBALS["lang"]['If the binary is not found in either of these locations, a warning message will be displayed in the installer.'] = 'Pokud se binární soubor nenajde v žádném z těchto míst, zobrazí se varovná zpráva v instalátoru.';

$GLOBALS["lang"]['If the following conditions are met:<br><ul><li>a Role has an assigned ad_group</li><li>an Org has an assigned ad_group</li><li>an LDAP Server has use_roles set to y</li><li>a user exists in LDAP (be it Active Directory or OpenLDAP) and is in the assigned ad_groups</li></ul>That user can log on to Open-AudIT without an account in Open-AudIT needing to be created. Open-AudIT will query the LDAP in question and if the user is in the required groups but not in Open-AudIT, their user attributes (name, full name, email,  roles, orgs, etc) within Open-AudIT will be automatically populated and they will be logged on.<br> <br>'] = 'Pokud jsou splněny tyto podmínky:<br/><ul><li>Role má přiřazenou ad _ group</li><li>Org má přidělenou ad _ skupinu</li><li>LDAP Server má nastavené _ role na y</li><li>uživatel existuje v LDAP (ať už je to Active Directory nebo OpenLDAP) a je v přiřazených ad _ groups</li></ul>Tento uživatel se může přihlásit na Open- Audit bez účtu v Open- Audit je třeba vytvořit. Open-Audit bude dotaz LDAP v daném a pokud je uživatel v požadovaných skupinách, ale ne v Open-Audit, jejich uživatelské atributy (jméno, celé jméno, e-mail, role, orgs, atd.) v rámci Open-Audit budou automaticky zalidněny a budou přihlášeny.<br/> <br/>';

$GLOBALS["lang"]['If the local field is true (bool) or y (string) or Y (string) or 1 (integer) then set the external data to 1.'] = 'Pokud je lokální pole pravdivé (bool) nebo y (string) nebo Y (string) nebo1 (integer) pak nastavte externí data na1.';

$GLOBALS["lang"]['If the local field is true (bool) or y (string) or Y (string) or 1 (integer) then set the external data to y.'] = 'Pokud je lokální pole pravdivé (bool) nebo y (string) nebo Y (string) nebo 1 (integer) pak nastavte externí data na y.';

$GLOBALS["lang"]['If the primary IP (as reported by the device) is in this subnet, pass.</li>'] = 'Pokud je primární IP (podle hlášení zařízení) v této podsíti, projít.';

$GLOBALS["lang"]['If the user account does not actually exist within Open-AudIT and <code>use_authorisation</code> is set, the user will be created. If it does exist, details such as email, full name, etc will be populated.'] = 'Pokud uživatelský účet ve skutečnosti neexistuje v rámci Open- Audit a <code>use_authorisation</code> je nastaveno, uživatel bude vytvořen. Pokud existuje, podrobnosti, jako je e-mail, celé jméno, atd.';

$GLOBALS["lang"]['If the user either does not have valid credentials or is not in at least one Open-AudIT Role and Group (when using <code>use_authorisation</code>), Open-AudIT will fallback to using local Open-AudIT user details and attempt authentication and authorization there. Failing that, the user will be denied access.'] = 'Pokud uživatel buď nemá platné pověření, nebo není v alespoň jedné Open- Audit Role a skupině (při použití <code>use_authorisation</code>), Open- Audit bude mít za následek použití místních uživatelských údajů Open- Audit a pokus o autentizaci a autorizaci zde. Pokud to nevyjde, bude uživateli odepřen přístup.';

$GLOBALS["lang"]['If the user logging on to Open-AudIT does not have the access to search LDAP, you can use another account which does have this access.'] = 'Pokud uživatel přihlášení na Open- Audit nemá přístup k vyhledávání LDAP, můžete použít jiný účet, který má tento přístup.';

$GLOBALS["lang"]['If the user logging on to Open-AudIT does not have the access to search OpenLDAP, you can use another account which does have this access. Use the dn_account and dn_password to configure this.'] = 'Pokud uživatel přihlášení na Open- Audit nemá přístup k vyhledávání OpenLDAP, můžete použít jiný účet, který má tento přístup. Pro konfiguraci použijte dn _ account a dn _ heslo.';

$GLOBALS["lang"]['If the value is not set, the current timestamp will be used.'] = 'Pokud není nastavena hodnota, použije se aktuální časové razítko.';

$GLOBALS["lang"]['If the value is set, that timestamp value will be used.'] = 'Je-li nastavena hodnota, použije se hodnota časového razítka.';

$GLOBALS["lang"]['If this change does not work for you, all is not lost. We have added a configuration item (set to n by default, so it will use not this new option out of the box) called discovery_use_org_id_match. If you change it to y then the OrgID assigned to the device by the discovery will be used in the relevant match rules.'] = 'Pokud tato změna nefunguje pro vás, vše není ztraceno. Přidali jsme konfigurační položku (nastavenou na n ve výchozím nastavení, takže nebude používat tuto novou volbu z pole) nazvanou discovery _ use _ org _ id _ match. Pokud jej změníte na y, pak se v příslušných pravidlech shody použije orgID přiřazený zařízení objevem.';

$GLOBALS["lang"]['If this many minutes (or more) have passed since the server last saw the device, pass.</li>'] = 'Pokud uplynulo tolik minut (nebo více) od doby, kdy server naposledy viděl zařízení, projít.';

$GLOBALS["lang"]['If this many or more minutes have passed since the device contacted the server, perform the actions.'] = 'Pokud uplynulo mnoho nebo více minut od okamžiku, kdy zařízení kontaktovalo server, provede akce.';

$GLOBALS["lang"]['If this occurs then the issue you are seeing is related to the table control being used on the webpage. It only stores in memory the state of the check boxes for the current page being viewed. If you make selections, then page forward/back those selections will be lost. You can, however, accomplish what you want by expanding the number of devices shown on each page. In the top-left corner is a drop-down labeled “records per page”; use this to expand the number of entries displayed until you see all you want to select for Bulk Edit.'] = 'Pokud k tomu dojde, pak problém, který vidíte, souvisí s ovládáním tabulky, které se používá na webové stránce. Uloží do paměti pouze stav zaškrtávacích políček pro zobrazení aktuální stránky. Pokud provedete výběr, pak stránku dopředu / zpět tyto volby budou ztraceny. Můžete však dosáhnout toho, co chcete rozšířením počtu zařízení uvedených na každé stránce. V levém horním rohu je kapka s nápisem "záznamy na stránku"; použijte to pro rozšíření počtu zobrazených záznamů, dokud neuvidíte vše, co chcete vybrat pro Bulk Edit.';

$GLOBALS["lang"]['If we detect the san management software, should we run an auto-discover before the query.'] = 'Pokud zjistíme software San Management, měli bychom spustit automatické objevování před dotazem.';

$GLOBALS["lang"]['If you add a Location Type, add those icons to'] = 'Pokud přidáte typ umístění, přidejte tyto ikony';

$GLOBALS["lang"]['If you add a device type, to display the associated icon you will have to manually copy the .svg formatted file to the directory'] = 'Pokud přidáte typ zařízení, pro zobrazení související ikony budete muset ručně zkopírovat .svg formátovaný soubor do adresáře';

$GLOBALS["lang"]['If you are a supported FirstWave customer,a couple of items will make helping your easier. Open a support ticket with FirstWave and attach the logfile. Also include the output from the Support button on the upper right of the'] = 'Pokud jste podporovaný zákazník FirstWave, pár položek vám pomůže snadněji. Otevřete podpůrný tip s firstWave a připojte logfile. Také obsahuje výstup z tlačítka Podpora na pravé horní straně';

$GLOBALS["lang"]['If you are a supported customer and open a support ticket with FirstWave, please attach these files.'] = 'Pokud jste podporovaný zákazník a otevřete podpůrnou jízdenku firstWave, připojte prosím tyto soubory.';

$GLOBALS["lang"]['If you are having issues with Google Maps API keys or your company does not have access to create Google Maps API keys, please contact the FirstWave support team.'] = 'Pokud máte problémy s klíči Google Maps API nebo vaše společnost nemá přístup k vytvoření kláves Google Maps API, kontaktujte prosím podpůrný tým FirstWave.';

$GLOBALS["lang"]['If you are on Windows or your NMIS server is remote, you will need to supply the URL, username and password to access that server.'] = 'Pokud jste na Windows nebo je Váš server NMIS vzdálený, budete muset zadat URL, uživatelské jméno a heslo pro přístup k tomuto serveru.';

$GLOBALS["lang"]['If you are on a decent broadband or ethernet connection, I would recommend always using -T4 (Aggressive). Some people love -T5 (Insane) though it is too aggressive for my taste. People sometimes specify -T2 (Polite) because they think it is less likely to crash hosts or because they consider themselves to be polite in general. They often do not realize just how slow -T2 really is. Their scan may take ten times longer than a default scan. Machine crashes and bandwidth problems are rare with the default timing options -T3 (Normal) and so I normally recommend that for cautious scanners. Omitting version detection is far more effective than playing with timing values at reducing these problems.'] = 'Pokud jste na slušné širokopásmové nebo ethernetové připojení, doporučuji vždy používat -T4 (Agresivní). Někteří lidé milují -T5 (Insane), i když je příliš agresivní na můj vkus. Lidé někdy specifikují -T2 (Polite), protože si myslí, že je méně pravděpodobné, že havaruje hostitele nebo protože se považují za zdvořilé obecně. Často si neuvědomují, jak pomalé je -T2. Jejich sken může trvat desetkrát déle než standardní sken. Strojové zkraty a problémy s šířkou pásma jsou vzácné s výchozími možnostmi načasování -T3 (Normal), a proto obvykle doporučuji, aby pro opatrné skenery. Omitující detekce verzí je mnohem účinnější než hraní si s hodnotami načasování při snižování těchto problémů.';

$GLOBALS["lang"]['If you are running a RedHat or Centos system and you have upgraded Nmap, please reset the SUID on the binary by'] = 'Pokud provozujete systém RedHat nebo Centos a máte aktualizovanou Nmap, prosím resetujte SUID na binárním';

$GLOBALS["lang"]['If you are running an Open-AudIT server on Linux, this does not affect you.'] = 'Pokud provozujete server Open- Audit na Linuxu, neovlivní vás to.';

$GLOBALS["lang"]['If you are using Open-AudIT on Windows or if your NMIS server is not on your Open-AudIT Server (in the case of some Linux installs), you will need to supply access credentials and a URL to the remote NMIS - but that is all! Yes - Integrations between NMIS and Open-AudIT even work with Windows based Open-AudIT now!'] = 'Pokud používáte Open- Audit na Windows nebo pokud váš NMIS server není na Vašem Open- Audit Serveru (v případě některých Linux instalací), budete muset dodat přístupové údaje a URL do vzdáleného NMIS - ale to je vše! Ano - Integrace mezi NMIS a Open- Audit dokonce pracují s Windows na bázi Open- Audit!';

$GLOBALS["lang"]['If you choose a Collector, it will be scheduled to execute on the next 5 minute boundary.'] = 'Pokud zvolíte Sběratele, bude plánován na dalších 5 minut.';

$GLOBALS["lang"]['If you do normally set devices_assigned_to_org and the configuration item is enabled, then the OrgID will be used to further refine the match.'] = 'Pokud normálně nastavíte zařízení _ commanded _ to _ org a konfigurační prvek je zapnut, pak bude Orgid použit pro další vylepšení shody.';

$GLOBALS["lang"]['If you do not normally set devices_assigned_to_org, then it will have no effect. We only check using the OrgID if it has been set in discovery (or manually in an audit script) and enabled in the configuration.'] = 'Pokud normálně nenastavíte zařízení _ přiřazená _ _ org, pak to nebude mít žádný efekt. Kontrolujeme pouze pomocí OrgID, pokud byl nastaven v objevu (nebo ručně v auditním skriptu) a povolen v konfiguraci.';

$GLOBALS["lang"]['If you enable the configuration item, use discovery to assign an Org and then subsequently change the OrgID of a device after discovery then you will likely have a new device created the next time the discovery runs. In this instance, you should probably just unset devices_assigned_to_org before running subsequent discoveries. This is because (in this instance) you have told Open-AudIT <i>these devices from this discovery belong to Org X<i>, but then changed the Org of the device. You have changed the stored devices information. In this case - there is no no longer a device belonging to Org X, so we create a new one.'] = 'Pokud povolíte konfigurační položku, použijte objev pro přiřazení Orgu a poté změňte orgID zařízení po objevení pak budete pravděpodobně mít nové zařízení vytvořené příště objev běží. V tomto případě byste pravděpodobně měli před spuštěním následných objevů odstartovat zařízení _ přiřazená _ do _ org. To proto, že (v tomto případě) jste Open- Audit <i>tato zařízení z tohoto objevu patří Org X<i>, ale pak změnil Org zařízení. Změnili jste informace o uložených zařízeních. V tomto případě - již neexistuje zařízení patřící Org X, takže vytvoříme nové.</i></i>';

$GLOBALS["lang"]['If you have Anti-Virus software running, allowing the services of Opmantek (omkd), Apache (apache2.2) and MySQL (mysql) to auto start and run is essential. These services are used by Open-AudIT. You should only need to do this once. If your Anti-Virus program keeps prompting you about Open-AudIT, please post to the forums or send an email to support with the name and version of your Anti-Virus software.'] = 'Pokud máte spuštěný software Anti- Virus, umožňující služby Opmantek (omkd), Apache (apache2.2) a MySQL (mysql) k automatickému spuštění a spuštění je nezbytné. Tyto služby využívá Open- Audit. Měl bys to udělat jen jednou. Pokud vás váš program Anti- Virus stále pobízí k Open- Audit, napište prosím na fóra nebo pošlete e-mail na podporu s názvem a verzí vašeho softwaru Anti- Virus.';

$GLOBALS["lang"]['If you have working credentials, you can expect the full amount of information possible.<br><br>Obviously, the best way to use Open-AudIT is to have working credentials for the devices being discovered (be they WMI, SSH, or SNMP credentials).<br><br>We also have a page on auditing without credentials.'] = 'Pokud máte pracovní pověření, můžete očekávat plné množství informací možné.<br/><br/>Je zřejmé, že nejlepší způsob, jak používat Open- Audit je mít pracovní pověření pro zařízení, která jsou objevena (ať už jsou to WMI, SSH, nebo SNMP pověření).<br/><br/>Máme také stránku o auditu bez pověření.';

$GLOBALS["lang"]['If you include the \"id\" field <strong>and</strong> set it with a number, that item will be updated rather than created.'] = 'Pokud zahrnujete pole\ "id\" <strong>a</strong> nastavte jej číslem, tato položka bude aktualizována spíše než vytvořena.';

$GLOBALS["lang"]['If you need to configure Active Directory access, you can usually use the example of <code>cn=Users,dc=your,dc=domain,dc=com</code> for your <code>base_dn</code>. There is no need to set <code>user_dn</code>.'] = 'Pokud potřebujete nastavit Active Directory přístup, můžete obvykle použít příklad <code>cn=Users,dc=your,dc=domain,dc=com</code> pro vaši <code>base_dn</code>. Není třeba nastavovat <code>user_dn</code>.';

$GLOBALS["lang"]['If you need to configure OpenLDAP access for your users and a given users access DN is normally <code>uid=username@domain,cn=People,dc=your,dc=domain,dc=com</code> then you should set <code>base_dn</code> to <code>dc=your,dc=domain,dc=com</code> and <code>user_dn</code> to <code>uid=@username@@domain,cn=People</code>. The special words <code>@username</code> and <code>@domain</code> will be replaced by the login details provided by your user on the login page.'] = 'Pokud potřebujete nastavit OpenLDAP přístup pro vaše uživatele a daný přístup uživatelů DN je obvykle <code>uid=username@domain,cn=People,dc=your,dc=domain,dc=com</code> Pak byste měli nastavit <code>base_dn</code> do <code>dc=your,dc=domain,dc=com</code> a <code>user_dn</code> do <code>uid=@username@@domain,cn=People</code>. Zvláštní slova <code>@username</code> a <code>@domain</code> budou nahrazeny přihlašovacími údaji poskytnutými uživatelem na přihlašovací stránce.';

$GLOBALS["lang"]['If you run discovery upon a subnet that the Server (or Collector) is directly installed on, you can expect the following for responding devices'] = 'Pokud na podsíti zjistíte, že server (nebo Sběratel) je nainstalován přímo, můžete pro responzivní zařízení očekávat následující';

$GLOBALS["lang"]['If you run discovery upon a subnet that your Server (or Collector) is not directly installed on, you can expect the following for responding devices'] = 'Pokud na podsíti zjistíte, že váš Server (nebo Sběratel) není přímo nainstalován, můžete u reagujících zařízení očekávat následující';

$GLOBALS["lang"]['If you select a List type, an additional field will appear called Values. You should put a comma separated list of selectable values here. These will display in a dropdown box whenever the field is edited.'] = 'Pokud zvolíte typ seznamu, objeví se další pole nazvané Hodnoty. Zde byste měli umístit oddělený seznam volitelných hodnot. Tyto budou zobrazeny v rozbalovací krabici pokaždé, když je pole editováno.';

$GLOBALS["lang"]['If you set the values for'] = 'Pokud nastavíte hodnoty pro';

$GLOBALS["lang"]['If you want to force your Agents to use a particular configuration, you can supply the ID of the agents entry to use, as below (replace $id with the number of the Agents entry). When this Agent is installed, it will check-in with the sevrer and <strong>only</strong> check that one individual Agent entrys attributes (tests and actions). This may be useful if you are an MSP - create an Agents entry for a particular customer and have their devices all use this entry, which assigns them to an Org and Location.'] = 'Pokud chcete přinutit své agenty k použití určité konfigurace, můžete zadat ID vstupu agentů k použití, jak je uvedeno níže (nahraďte $id číslem vstupu agentů). Když je tento Agent nainstalován, to bude check- in s sedmrer a <strong>pouze</strong> zkontrolovat, že jeden jedinec Atributy agenta Entris (testy a akce). To může být užitečné, pokud jste MSP - vytvořit položku Agents pro konkrétního zákazníka a mít jejich zařízení všechny používat tento záznam, který je přiřadí k Org a Umístění.';

$GLOBALS["lang"]['If you wish to dig in and customize the Integration, click the Advanced button (and try not to be overwhelmed!).'] = 'Pokud chcete kopat a přizpůsobit integraci, klikněte na tlačítko Advanced (a snažte se být přemožen!).';

$GLOBALS["lang"]['If you wish to run a Discovery on an externally provided device, select the option and when the Integration is created, so s the Discovery.'] = 'Pokud chcete spustit Discovery na externě poskytovaném zařízení, zvolte možnost a při vytvoření integrace, tedy Discovery.';

$GLOBALS["lang"]['If you would like to use the script outside of Discovery we have created another endpoint called <i>scripts</i>. See the documentation'] = 'Pokud byste chtěli použít skript mimo Discovery jsme vytvořili další koncový bod s názvem <i>skripty</i>. Viz dokumentace';

$GLOBALS["lang"]['If your user does not have <i>Run as Administrator</i> rights, they can still download the agent (first command above) and run it to submit an audit as below. It will be a one-off audit without the Agent being installed or scheduled.'] = 'Pokud váš uživatel nemá <i>Spustit jako správce</i> práva, stále mohou stáhnout agenta (první příkaz výše) a spustit jej předložit audit, jak je uvedeno níže. Bude to jednorázový audit, aniž by byl agent nainstalován nebo naplánován.';

$GLOBALS["lang"]['ifadminstatus'] = 'Ifadministrátorský status';

$GLOBALS["lang"]['Ifadminstatus'] = 'Ifadministrátorský status';

$GLOBALS["lang"]['iflastchange'] = 'Změny';

$GLOBALS["lang"]['Iflastchange'] = 'Změny';

$GLOBALS["lang"]['Ignore Invalid SSL'] = 'Ignorovat neplatný SSL';

$GLOBALS["lang"]['Ignored'] = 'Ignorovaný';

$GLOBALS["lang"]['image'] = 'Obrázek';

$GLOBALS["lang"]['Image'] = 'Obrázek';

$GLOBALS["lang"]['Images'] = 'Obrázky';

$GLOBALS["lang"]['impact_availability'] = 'Dostupnost dopadu';

$GLOBALS["lang"]['Impact Availability'] = 'Dostupnost dopadu';

$GLOBALS["lang"]['impact_confidentiality'] = 'Důvěrnost dopadu';

$GLOBALS["lang"]['Impact Confidentiality'] = 'Důvěrnost dopadu';

$GLOBALS["lang"]['impact_integrity'] = 'Integrita dopadu';

$GLOBALS["lang"]['Impact Integrity'] = 'Integrita dopadu';

$GLOBALS["lang"]['Implement selected controls and procedures'] = 'Provádět vybrané kontroly a postupy';

$GLOBALS["lang"]['Implementation'] = 'Provádění';

$GLOBALS["lang"]['implementation_notes'] = 'Prováděcí poznámky';

$GLOBALS["lang"]['Implementation Notes'] = 'Prováděcí poznámky';

$GLOBALS["lang"]['Import'] = 'Importovat';

$GLOBALS["lang"]['Import Example Data'] = 'Importovat ukázková data';

$GLOBALS["lang"]['Import multiple {collection} using a CSV.'] = 'Importovat více {kolekce} pomocí CSV.';

$GLOBALS["lang"]['improvement_opportunities'] = 'Zlepšení příležitostí';

$GLOBALS["lang"]['Improvement Opportunities'] = 'Zlepšení příležitostí';

$GLOBALS["lang"]['Improves business continuity and resilience'] = 'Zlepšuje kontinuitu provozu a odolnost';

$GLOBALS["lang"]['In'] = 'V';

$GLOBALS["lang"]['In a second tab or window go to your OKTA console and click <i>Create App Integration</i>.'] = 'Ve druhé kartě nebo okně přejděte na OKTA konzoli a klikněte na <i>Vytvořit integraci aplikací</i>.';

$GLOBALS["lang"]['In a second tab or window sign-on to your'] = 'Ve druhé kartě nebo okénku označte';

$GLOBALS["lang"]['In my personal opinion, the best way to find and audit every single item on your network is a Seed Discovery for each subnet, restricted to that subnet (using credentials). Seed Discoveries use switch, router and computer MAC Address tables to not miss a single device. If it is connected to the network and uses TCP/IP, a switch/router/computer has to know it is there - thats just how TCP/IP works. Combine that with custom TCP and/or UDP ports and you should then be able to determine the device type as well. But thats just my personal preference'] = 'Podle mého osobního názoru je nejlepším způsobem, jak najít a zkontrolovat každou položku ve vaší síti, Seed Discovery pro každou podsíť, která je omezena na tuto podsíť (pomocí pověřovacích listin). Seed Discover používá přepínač, router a počítače MAC Address tabulky, aby nevynechal jediné zařízení. Je-li připojen k síti a používá TCP / IP, musí spínací / směrovač / počítač vědět, že tam je - přesně tak TCP / IP funguje. Kombinujte to s vlastní TCP a / nebo UDP porty a pak byste měli být schopni určit typ zařízení stejně. Ale to je moje osobní preference.';

$GLOBALS["lang"]['In order for Open-AudIT to be able to apply user permissions on items, we mandate the user of <code>WHERE @filter</code>. If you do not use this format, the queryCreateForm will throw a warning. Only users with the Admin role are permitted to create queries that lack this attribute and even then, only after the configuration item for <i>advanced_queries</i> has been enabled.'] = 'Aby Open-Audit mohl uplatnit uživatelská oprávnění na položky, pověříme uživatele <code>WHERE @filter</code>. Pokud tento formát nepoužijete, queryCreateForm vyvolá varování. Pouze uživatelé s admin rolí mohou vytvářet dotazy, které tento atribut postrádají, a to i potom, pouze po konfigurační položce pro <i>Advanced _ questions</i> bylo povoleno.';

$GLOBALS["lang"]['In order to enable Google Maps you will need to a Google API Key follow this link and log in with your Google account,'] = 'Abyste mohli Google Maps, budete potřebovat Google API Key sledovat tento odkaz a přihlásit se ke svému Google účet,';

$GLOBALS["lang"]['In order to use the Azure Rest API, you will need to create an Azure Active Directory Application that is used for authentication.'] = 'Abyste mohli používat Azure Rest API, musíte vytvořit Azure Active Directory Application, která se používá pro autentizaci.';

$GLOBALS["lang"]['In order to use this functionality, it must be enabled in the configuration - click'] = 'Pro použití této funkce musí být zapnuto v konfiguraci - klikněte';

$GLOBALS["lang"]['In the (comma seperated) list'] = 'V (čárka oddělená) seznamu';

$GLOBALS["lang"]['In the case of <code>in</code> and <code>notin</code>, you should enclose the values in round brackets and separate them using a comma (just a comma, not a comma, then space).<br><br>With these operators you can filter quite comprehensively.<br><br>When you add data and filter on multiple columns, those columns are combined using <strong>AND</strong>. You cannot filter using an <strong>OR</strong> condition. With the inclusion of <code>notin</code>, you should be able to get most searches working. And for those that do really require unsupported and complex selections, you can always write an actual query.'] = 'V případě <code>in</code> a <code>notin</code>, měli byste uzavřít hodnoty v kruhových závorkách a oddělit je čárkou (jen čárka, ne čárka, pak prostor).<br/><br/>S těmito operátory můžete filtrovat poměrně komplexně.<br/><br/>Když přidáte data a filtr na více sloupcích, tyto sloupce se spojí pomocí <strong>A</strong>. Nemůžete filtrovat pomocí <strong>NEBO</strong> stav. se zahrnutím <code>notin</code>Měl bys být schopen zprovoznit většinu vyhledávání. A pro ty, kteří opravdu vyžadují nepodporované a složité volby, můžete vždy napsat skutečný dotaz.';

$GLOBALS["lang"]['In the case where we store several fields (usually in JSON format) inside a BIGTEXT MySQL field (eg: credentials.credentials - the credentials column in the credentials table), you should use the format'] = 'V případě, že ukládat několik polí (obvykle ve formátu JSON) uvnitř BIGTEXT MySQL pole (např.: pověření. pověření - sloupec pověření v tabulce pověření), měli byste použít formát';

$GLOBALS["lang"]['In the command prompt shell, navigate to the download directory (likely <code>cd Downloads</code>).'] = 'Ve shellu příkazového příkazu přejděte do adresáře stahování (pravděpodobně <code>cd Downloads</code>).';

$GLOBALS["lang"]['Inactive'] = 'Neaktivní';

$GLOBALS["lang"]['Incomplete'] = 'Nekompletní';

$GLOBALS["lang"]['Index'] = 'Index';

$GLOBALS["lang"]['India'] = 'Indie';

$GLOBALS["lang"]['Indonesia'] = 'Indonésie';

$GLOBALS["lang"]['Indonesian'] = 'Indonésie';

$GLOBALS["lang"]['Info'] = 'Informace';

$GLOBALS["lang"]['Information only.'] = 'Pouze informace.';

$GLOBALS["lang"]['Informational'] = 'Informace';

$GLOBALS["lang"]['initial_size'] = 'Počáteční velikost';

$GLOBALS["lang"]['Initial Size'] = 'Počáteční velikost';

$GLOBALS["lang"]['Initial login credentials are'] = 'Počáteční přihlašovací údaje jsou:';

$GLOBALS["lang"]['Initiation'] = 'Zahájení';

$GLOBALS["lang"]['inode'] = 'Inód';

$GLOBALS["lang"]['Inode'] = 'Inód';

$GLOBALS["lang"]['Input'] = 'Vstup';

$GLOBALS["lang"]['Input Type'] = 'Typ vstupu';

$GLOBALS["lang"]['inputs'] = 'Vstupy';

$GLOBALS["lang"]['Inputs'] = 'Vstupy';

$GLOBALS["lang"]['Insane'] = 'Šílený';

$GLOBALS["lang"]['Insert a new {collection} entry.'] = 'Vložte novou položku {collection}.';

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

$GLOBALS["lang"]['Install Support'] = 'Instalovat podporu';

$GLOBALS["lang"]['installed_by'] = 'Instalováno';

$GLOBALS["lang"]['Installed By'] = 'Instalováno';

$GLOBALS["lang"]['installed_on'] = 'Instalováno';

$GLOBALS["lang"]['Installed On'] = 'Instalováno';

$GLOBALS["lang"]['Installing'] = 'Instalace';

$GLOBALS["lang"]['Installing on Linux'] = 'Instalace na Linux';

$GLOBALS["lang"]['Installing on MacOS'] = 'Instalace na MacOS';

$GLOBALS["lang"]['Installing on Windows'] = 'Instalace na Windows';

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

$GLOBALS["lang"]['Integrations can be scheduled as desired. This is left to the user.'] = 'Integrace lze naplánovat dle potřeby. Toto je ponecháno uživateli.';

$GLOBALS["lang"]['Integrations can be scheduled as per Discoveries, Queries, et al.'] = 'Integrace lze naplánovat jako na Discovery, Queeries, et al.';

$GLOBALS["lang"]['Interactive Dashboards'] = 'Interaktivní Dashboardy';

$GLOBALS["lang"]['Interactive dashboards provide instant visibility into the status of network inventory allowing IT teams to spot newly discovered devices and unusual device behaviour at a glance.'] = 'Interaktivní palubní desky poskytují okamžitou viditelnost stavu síťové inventury umožňující IT týmům na první pohled rozpoznat nově objevená zařízení a neobvyklé chování zařízení.';

$GLOBALS["lang"]['interface'] = 'Rozhraní';

$GLOBALS["lang"]['Interface'] = 'Rozhraní';

$GLOBALS["lang"]['interface_id'] = 'ID rozhraní';

$GLOBALS["lang"]['Interface ID'] = 'ID rozhraní';

$GLOBALS["lang"]['interface_type'] = 'Typ rozhraní';

$GLOBALS["lang"]['Interface Type'] = 'Typ rozhraní';

$GLOBALS["lang"]['Internal'] = 'Vnitřní';

$GLOBALS["lang"]['Internal Audit'] = 'Interní audit';

$GLOBALS["lang"]['Internal Audit & Review'] = 'Interní audit a přezkum';

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

$GLOBALS["lang"]['Irish'] = 'Irština';

$GLOBALS["lang"]['Is FRU'] = 'Is FRU';

$GLOBALS["lang"]['is_fru'] = 'Is Fru';

$GLOBALS["lang"]['Is Fru'] = 'Is Fru';

$GLOBALS["lang"]['Is the NMIS server local (on this Open-AudIT server) or remote?'] = 'Je server NMIS lokální (na tomto Open- Audit serveru) nebo vzdálený?';

$GLOBALS["lang"]['Is this account active? If set to <code>n</code>, the user cannot logon.'] = 'Je ten účet aktivní? Pokud je nastaveno na <code>n</code>Uživatel se nemůže přihlásit.';

$GLOBALS["lang"]['Is this query restricted to licensed customers.'] = 'Je tento dotaz omezen na licencované zákazníky.';

$GLOBALS["lang"]['Is this task enabled (y/n).'] = 'Je tento úkol povolen (y / n).';

$GLOBALS["lang"]['Isle of Man'] = 'Ostrov Man';

$GLOBALS["lang"]['Israel'] = 'Izrael';

$GLOBALS["lang"]['Issue'] = 'Vydání';

$GLOBALS["lang"]['issuer'] = 'Emitent';

$GLOBALS["lang"]['Issuer'] = 'Emitent';

$GLOBALS["lang"]['issuer_name'] = 'Název emitenta';

$GLOBALS["lang"]['Issuer Name'] = 'Název emitenta';

$GLOBALS["lang"]['Issues'] = 'Otázky';

$GLOBALS["lang"]['It <i>Just Works</i> with NMIS'] = 'To <i>Prostě funguje.</i> s NMIS';

$GLOBALS["lang"]['It is available at Menu -> Help ->'] = 'Je k dispozici v nabídce - > Nápověda - >';

$GLOBALS["lang"]['It is important to note that when Open-AudIT determines a match any properties set to <i>y</i> must match exactly (and not be blank) in order for Open-AudIT to determine that the discovered device matches a device already in the database. If none of the properties marked <i>y</i> match, then a new device entry will be created, which could result in duplicate device entries. In situations where properties are duplicated, for example a dbus_id is copied during a VM clone, then an existing device may incorrectly get overwritten/updated rather then a new entry being created resulting in missing devices.'] = 'Je důležité poznamenat, že když Open- Audit určuje zápas <i>y</i> musí odpovídat přesně (a nemusí být prázdné), aby Open- Audit zjistil, že objevené zařízení odpovídá zařízení již v databázi. Pokud není vyznačena žádná z vlastností <i>y</i> zápas, pak bude vytvořen nový vstup zařízení, který by mohl mít za následek duplicitní položky zařízení. V situacích, kdy se vlastnosti duplikují, například dbus _ id se zkopíruje během klonu VM, pak může být existující zařízení nesprávně přepsáno / aktualizováno, a pak vznikne nová položka, která má za následek chybějící zařízení.';

$GLOBALS["lang"]['It is not uncommon to have an overlapping address space in a given Organisation. Not ideal, but not uncommon.'] = 'Není neobvyklé mít v dané organizaci překrývající se adresní prostor. Není to ideální, ale není to neobvyklé.';

$GLOBALS["lang"]['It is very common for second tier motherboard manufacturers to not set this, to set it to all <i>0</i>s or even all <i>F</i>s.'] = 'Pro výrobce základní desky druhého stupně je velmi běžné, že to nenastavují na všechny <i>0</i>nebo dokonce všechny <i>F</i>Položka 3A001.a.2. nezahrnuje:';

$GLOBALS["lang"]['Italian'] = 'Italština';

$GLOBALS["lang"]['Italy'] = 'Itálie';

$GLOBALS["lang"]['Items not in Baseline'] = 'Ustanovení čl.';

$GLOBALS["lang"]['JSON'] = 'JSON';

$GLOBALS["lang"]['JSON to Import'] = 'JSON importovat';

$GLOBALS["lang"]['Jamaica'] = 'Jamajka';

$GLOBALS["lang"]['January'] = 'Leden';

$GLOBALS["lang"]['Japan'] = 'Japonsko';

$GLOBALS["lang"]['Japanese'] = 'japonsky';

$GLOBALS["lang"]['Jersey'] = 'Jersey';

$GLOBALS["lang"]['Jordan'] = 'Jordánsko';

$GLOBALS["lang"]['July'] = 'červenec';

$GLOBALS["lang"]['June'] = 'Červen';

$GLOBALS["lang"]['Kazakhstan'] = 'Kazachstán';

$GLOBALS["lang"]['Kenya'] = 'Keňa';

$GLOBALS["lang"]['kernel_version'] = 'Verze jádra';

$GLOBALS["lang"]['Kernel Version'] = 'Verze jádra';

$GLOBALS["lang"]['Key'] = 'Klíč';

$GLOBALS["lang"]['Key Components'] = 'Klíčové komponenty';

$GLOBALS["lang"]['Key Password (optional)'] = 'Klíčové heslo (nepovinné)';

$GLOBALS["lang"]['keys'] = 'Klíče';

$GLOBALS["lang"]['Keys'] = 'Klíče';

$GLOBALS["lang"]['Kiribati'] = 'Kiribati';

$GLOBALS["lang"]['Korea'] = 'Korea';

$GLOBALS["lang"]['Korean'] = 'Korejské';

$GLOBALS["lang"]['Kuwait'] = 'Kuvajt';

$GLOBALS["lang"]['Kyrgyz'] = 'Kyrgyzfrance. kgm';

$GLOBALS["lang"]['Kyrgyz Republic'] = 'Kyrgyzská republika';

$GLOBALS["lang"]['LDAP Group'] = 'LDAP Group';

$GLOBALS["lang"]['LDAP was searched for this user and their account was found.'] = 'LDAP byl hledán pro tohoto uživatele a jejich účet byl nalezen.';

$GLOBALS["lang"]['LDAP was searched for this user and their account was not found. Check the LDAP server logs. The user credentials have worked, but the user was not found. Also check you have specified the correct Base DN attribute when you created the LDAP Server in Open-AudIT.'] = 'LDAP byl hledán pro tohoto uživatele a jejich účet nebyl nalezen. Zkontrolujte záznamy LDAP serveru. Uživatelské pověření funguje, ale uživatel nebyl nalezen. Při vytvoření LDAP Serveru v Open- Auditu jste také zadali správný atribut Base DN.';

$GLOBALS["lang"]['lang'] = 'Lang';

$GLOBALS["lang"]['Lang'] = 'Lang';

$GLOBALS["lang"]['language'] = 'Jazyk';

$GLOBALS["lang"]['Language'] = 'Jazyk';

$GLOBALS["lang"]['Lao'] = 'Lao.';

$GLOBALS["lang"]['last_changed'] = 'Poslední změna';

$GLOBALS["lang"]['Last Changed'] = 'Poslední změna';

$GLOBALS["lang"]['last_finished'] = 'Naposledy dokončeno';

$GLOBALS["lang"]['Last Finished'] = 'Naposledy dokončeno';

$GLOBALS["lang"]['last_logon'] = 'Poslední logon';

$GLOBALS["lang"]['Last Logon'] = 'Poslední logon';

$GLOBALS["lang"]['Last Name'] = 'Jméno';

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

$GLOBALS["lang"]['Last up is WMI. For Windows as in Linux, a user with Administrator level access is preferred (see Target Client Configuration on the wiki).'] = 'Poslední je WMI. Pro Windows jako v Linuxu je upřednostňován uživatel s přístupem na úrovni správce (viz Konfigurace Target Client na wiki).';

$GLOBALS["lang"]['lastModified'] = 'LastModifikované';

$GLOBALS["lang"]['LastModified'] = 'LastModifikované';

$GLOBALS["lang"]['latitude'] = 'Zeměpisná šířka';

$GLOBALS["lang"]['Latitude'] = 'Zeměpisná šířka';

$GLOBALS["lang"]['Latvia'] = 'Lotyšsko';

$GLOBALS["lang"]['Latvian'] = 'Lotyšsko';

$GLOBALS["lang"]['Layout'] = 'Rozvržení';

$GLOBALS["lang"]['ldap'] = 'Ldap';

$GLOBALS["lang"]['Ldap'] = 'Ldap';

$GLOBALS["lang"]['ldap_base_dn'] = 'Ldap Base Dn';

$GLOBALS["lang"]['Ldap Base Dn'] = 'Ldap Base Dn';

$GLOBALS["lang"]['ldap_dn_account'] = 'Ldap Dn účet';

$GLOBALS["lang"]['Ldap Dn Account'] = 'Ldap Dn účet';

$GLOBALS["lang"]['ldap_dn_password'] = 'Name';

$GLOBALS["lang"]['Ldap Dn Password'] = 'Name';

$GLOBALS["lang"]['Learn About'] = 'Přečtěte si o';

$GLOBALS["lang"]['Learn More'] = 'Přečtěte si více';

$GLOBALS["lang"]['lease_expiry_date'] = 'Datum vypršení leasingu';

$GLOBALS["lang"]['Lease Expiry Date'] = 'Datum vypršení leasingu';

$GLOBALS["lang"]['Lebanon'] = 'Libanon';

$GLOBALS["lang"]['legal_requirements'] = 'Právní požadavky';

$GLOBALS["lang"]['Legal Requirements'] = 'Právní požadavky';

$GLOBALS["lang"]['Lesotho'] = 'Lesotho';

$GLOBALS["lang"]['Less Than'] = 'Méně než';

$GLOBALS["lang"]['Less Than or Equals'] = 'Méně než nebo se rovná';

$GLOBALS["lang"]['Lets set the logging to debug. Copy the file:'] = 'Nastavíme záznam na ladění. Kopírovat soubor:';

$GLOBALS["lang"]['level'] = 'Úroveň';

$GLOBALS["lang"]['Level'] = 'Úroveň';

$GLOBALS["lang"]['Level of privileges needed to exploit (None, Low, High).'] = 'Úroveň privilegií potřebných k využití (žádná, nízká, vysoká).';

$GLOBALS["lang"]['Liberia'] = 'Libérie';

$GLOBALS["lang"]['Libraries (ie, code that another program might include). These are typically items like Wordpress extensions, drupal extensions, node.js libraries, Android / iPhone / Windows libraries, python libraries, etc.'] = 'Knihovny (tj. kód, který může obsahovat jiný program). To jsou typicky položky jako wordpress rozšíření, drupal rozšíření, node.js knihovny, Android / iPhone / Windows knihovny, Python knihovny, atd.';

$GLOBALS["lang"]['Libyan Arab Jamahiriya'] = 'Libyjská arabská jamajka';

$GLOBALS["lang"]['License'] = 'Licence';

$GLOBALS["lang"]['License Key'] = 'Licenční klíč';

$GLOBALS["lang"]['License Required'] = 'Vyžadovaná licence';

$GLOBALS["lang"]['Licensed users are free to add or modify the rules as you see fit. If you have a device with an SNMP OID that does not match a model already in the file - now you can add it easily. No more waiting for us to provide a patch and add it to the code base for you.<br><br>When you create a Rules entry, you will need to provide a name and a list of inputs and outputs. The inputs and outputs are stored as JSON arrays within the database.<br><br>Inputs have a table and attribute, an operator and a value. When executing the condition, it works thus: If $table . $attribute $operator $value then apply the outputs.<br><br>An example rule to match an SNMP OID and set the model is below.<br>'] = 'Licencovaní uživatelé mohou přidat nebo upravit pravidla, jak uznáte za vhodné. Pokud máte zařízení s SNMP OID, které neodpovídá modelu již v souboru - nyní jej můžete snadno přidat. Už žádné čekání na to, až vám zajistíme záplatu a přidáme ji do kódové základny.<br/><br/>Když vytvoříte položku Pravidla, budete muset poskytnout název a seznam vstupů a výstupů. Vstupy a výstupy jsou uloženy jako pole JSON v databázi.<br/><br/>Vstupy mají tabulku a atribut, operátor a hodnotu. Při plnění podmínky funguje takto: Pokud $table. $atribut $operátor $hodnota pak použít výstupy.<br/><br/>Příkladem pravidla pro porovnání SNMP OID a nastavení modelu je níže.<br/>';

$GLOBALS["lang"]['Licenses'] = 'Licence';

$GLOBALS["lang"]['Liechtenstein'] = 'Lichtenštejnsko';

$GLOBALS["lang"]['Like'] = 'Jako';

$GLOBALS["lang"]['Like most other attributes, Additional Fields can be bulk edited. Use the Bulk Edit function as you normally would and you will see the Additional Fields are available for input.'] = 'Stejně jako většina jiných atributů lze editovat další pole. Použijte funkci Bulk Edit, jak byste normálně použili, a uvidíte, že pro vstup jsou k dispozici další pole.';

$GLOBALS["lang"]['Like versus Equals'] = 'Like versus Equals';

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

$GLOBALS["lang"]['Line charts must return date or my_date, description or my_description and count.'] = 'Line grafy musí vrátit datum, nebo můj _ date, popis nebo můj _ popis a počítat.';

$GLOBALS["lang"]['link'] = 'Odkaz';

$GLOBALS["lang"]['Link'] = 'Odkaz';

$GLOBALS["lang"]['Link (Advanced)'] = 'Odkaz (Advanced)';

$GLOBALS["lang"]['Linked Files'] = 'Spojené soubory';

$GLOBALS["lang"]['links'] = 'Odkazy';

$GLOBALS["lang"]['Links'] = 'Odkazy';

$GLOBALS["lang"]['Links this discovery to the associated cloud (if required). Links to <code>clouds.id</code>.'] = 'Spojuje tento objev s souvisejícím cloudem (je-li vyžadováno). Odkazy na <code>clouds.id</code>.';

$GLOBALS["lang"]['Links to <code>discovery_scan_options.id</code>.'] = 'Odkazy na <code>discovery_scan_options.id</code>.';

$GLOBALS["lang"]['Links to <code>standards.id</code>'] = 'Odkazy na <code>standards.id</code>';

$GLOBALS["lang"]['Links to <standards_policies.id</code>'] = 'Odkazy na <standards_policies.id< code=""></standards_policies.id<>';

$GLOBALS["lang"]['Linux'] = 'Linux';

$GLOBALS["lang"]['Linux Packages'] = 'Linux Packages';

$GLOBALS["lang"]['List'] = 'Seznam';

$GLOBALS["lang"]['List All NMAP Ports, Protocols and Programs for Each Device'] = 'Seznam všech portů, protokolů a programů NMAP pro každé zařízení';

$GLOBALS["lang"]['List Devices'] = 'Seznam zařízení';

$GLOBALS["lang"]['List Discoveries'] = 'Seznam objevů';

$GLOBALS["lang"]['list_table_format'] = 'Formát tabulky';

$GLOBALS["lang"]['List Table Format'] = 'Formát tabulky';

$GLOBALS["lang"]['List Tables'] = 'Seznam tabulek';

$GLOBALS["lang"]['Lithuania'] = 'Litva';

$GLOBALS["lang"]['Lithuanian'] = 'Litva';

$GLOBALS["lang"]['Load Balancing'] = 'Vyvažování zatížení';

$GLOBALS["lang"]['Local'] = 'Místní';

$GLOBALS["lang"]['Local Area Network'] = 'Místní síť oblastí';

$GLOBALS["lang"]['local_port'] = 'Místní přístav';

$GLOBALS["lang"]['Local Port'] = 'Místní přístav';

$GLOBALS["lang"]['Local area network'] = 'Místní síť';

$GLOBALS["lang"]['Localhost'] = 'Localhost';

$GLOBALS["lang"]['Localisation'] = 'Lokalizace';

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

$GLOBALS["lang"]['Location Name'] = 'Název místa';

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

$GLOBALS["lang"]['Locations'] = 'Místa';

$GLOBALS["lang"]['Locations in this'] = 'Místa v tomto';

$GLOBALS["lang"]['log'] = 'Záznam';

$GLOBALS["lang"]['Log'] = 'Záznam';

$GLOBALS["lang"]['log_format'] = 'Formát záznamu';

$GLOBALS["lang"]['Log Format'] = 'Formát záznamu';

$GLOBALS["lang"]['Log Line'] = 'Linie záznamu';

$GLOBALS["lang"]['log_path'] = 'Cesta záznamu';

$GLOBALS["lang"]['Log Path'] = 'Cesta záznamu';

$GLOBALS["lang"]['log_rotation'] = 'Rotace záznamů';

$GLOBALS["lang"]['Log Rotation'] = 'Rotace záznamů';

$GLOBALS["lang"]['log_status'] = 'Stav záznamu';

$GLOBALS["lang"]['Log Status'] = 'Stav záznamu';

$GLOBALS["lang"]['Logging in'] = 'Přihlášení';

$GLOBALS["lang"]['Logical Cores '] = 'Logická jádra ';

$GLOBALS["lang"]['logical_count'] = 'Logický počet';

$GLOBALS["lang"]['Logical Count'] = 'Logický počet';

$GLOBALS["lang"]['Logout'] = 'Odhlášení';

$GLOBALS["lang"]['Logs'] = 'Záznamy';

$GLOBALS["lang"]['longitude'] = 'Délka';

$GLOBALS["lang"]['Longitude'] = 'Délka';

$GLOBALS["lang"]['low'] = 'Nízká';

$GLOBALS["lang"]['Low'] = 'Nízká';

$GLOBALS["lang"]['Lower Case'] = 'Nižší pouzdro';

$GLOBALS["lang"]['Lowercase Hostname'] = 'Lowercase Hostname';

$GLOBALS["lang"]['Luxembourg'] = 'Lucembursko';

$GLOBALS["lang"]['MAC Address'] = 'MAC adresa';

$GLOBALS["lang"]['MAC Manufacturer'] = 'MAC Výrobce';

$GLOBALS["lang"]['mac'] = 'Mac';

$GLOBALS["lang"]['Mac'] = 'Mac';

$GLOBALS["lang"]['Mac Address'] = 'Mac adresa';

$GLOBALS["lang"]['MacOS'] = 'MakOS';

$GLOBALS["lang"]['MacOS Packages'] = 'Balíčky MacOS';

$GLOBALS["lang"]['Macao'] = 'Macao';

$GLOBALS["lang"]['Macedonia'] = 'Makedonie';

$GLOBALS["lang"]['Madagascar'] = 'Madagaskar';

$GLOBALS["lang"]['Maintain records of risk assessments and treatments'] = 'Veďte záznamy o posouzení a léčbě rizik';

$GLOBALS["lang"]['maintenance_expires'] = 'Vyšetření údržby';

$GLOBALS["lang"]['Maintenance Expires'] = 'Vyšetření údržby';

$GLOBALS["lang"]['Make My Default Dashboard'] = 'Make My Výchozí Přístrojová deska';

$GLOBALS["lang"]['Make this install a Collector'] = 'Vytvořte tuto instalaci Sběratel';

$GLOBALS["lang"]['Malawi'] = 'Malawi';

$GLOBALS["lang"]['Malay'] = 'Malayworld. kgm';

$GLOBALS["lang"]['Malaysia'] = 'Malajsie';

$GLOBALS["lang"]['Maldives'] = 'Maledivy';

$GLOBALS["lang"]['Mali'] = 'Mali';

$GLOBALS["lang"]['Malta'] = 'Malta';

$GLOBALS["lang"]['Manage'] = 'Správa';

$GLOBALS["lang"]['Manage Licenses'] = 'Správa licencí';

$GLOBALS["lang"]['Manage in NMIS'] = 'Správa v NMIS';

$GLOBALS["lang"]['Manage incidents and nonconformities'] = 'Správa incidentů a nesouladu';

$GLOBALS["lang"]['Managed'] = 'Správa';

$GLOBALS["lang"]['managed_by'] = 'Správa';

$GLOBALS["lang"]['Managed By'] = 'Správa';

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

$GLOBALS["lang"]['Match Order'] = 'Pořadí shody';

$GLOBALS["lang"]['Match Process'] = 'Postup shody';

$GLOBALS["lang"]['match_string'] = 'Řetězec shody';

$GLOBALS["lang"]['Match String'] = 'Řetězec shody';

$GLOBALS["lang"]['Matching Attribute'] = 'Odpovídající atribut';

$GLOBALS["lang"]['Matching Devices - Including OrgID'] = 'Odpovídající zařízení - včetně orgID';

$GLOBALS["lang"]['Matching Linux Devices'] = 'Odpovídající Linux zařízení';

$GLOBALS["lang"]['Matching is conducted in the following order'] = 'Odpovídání se provádí v následujícím pořadí:';

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

$GLOBALS["lang"]['Measures the likelihood of the vulnerability being attacked, and is based on the current state of exploit techniques, exploit code availability, or active, “in-the-wild” exploitation.'] = 'Měří pravděpodobnost útoku na zranitelnost a vychází ze současného stavu technik využití, využije dostupnost kódů nebo aktivního využívání "v divočině".';

$GLOBALS["lang"]['medium'] = 'Střední';

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

$GLOBALS["lang"]['Metropolitan area network'] = 'Síť metropolitní oblasti';

$GLOBALS["lang"]['Mexico'] = 'Mexiko';

$GLOBALS["lang"]['Micronesia'] = 'Mikronésie';

$GLOBALS["lang"]['Microsoft Azure Fields'] = 'Microsoft Azure Fields';

$GLOBALS["lang"]['microtime'] = 'Mikročas';

$GLOBALS["lang"]['Microtime'] = 'Mikročas';

$GLOBALS["lang"]['minute'] = 'Minuta';

$GLOBALS["lang"]['Minute'] = 'Minuta';

$GLOBALS["lang"]['Minutes'] = 'Zápis';

$GLOBALS["lang"]['Minutes Since last Audit are Greater than'] = 'Zápisy od posledního auditu jsou větší než';

$GLOBALS["lang"]['model'] = 'Model';

$GLOBALS["lang"]['Model'] = 'Model';

$GLOBALS["lang"]['model_family'] = 'Modelová rodina';

$GLOBALS["lang"]['Model Family'] = 'Modelová rodina';

$GLOBALS["lang"]['Modified'] = 'Změněno';

$GLOBALS["lang"]['Modifying an Existing Script'] = 'Upravit existující skript';

$GLOBALS["lang"]['module'] = 'Modul';

$GLOBALS["lang"]['Module'] = 'Modul';

$GLOBALS["lang"]['module_index'] = 'Index modulu';

$GLOBALS["lang"]['Module Index'] = 'Index modulu';

$GLOBALS["lang"]['Modules'] = 'Moduly';

$GLOBALS["lang"]['Moldova'] = 'Moldavsko';

$GLOBALS["lang"]['Monaco'] = 'Monako';

$GLOBALS["lang"]['Monday'] = 'Pondělí';

$GLOBALS["lang"]['Mongolia'] = 'Mongolsko';

$GLOBALS["lang"]['monitor'] = 'Monitor';

$GLOBALS["lang"]['Monitor'] = 'Monitor';

$GLOBALS["lang"]['Monitor and measure ISMS performance'] = 'Monitorování a měření výkonu systému ISMS';

$GLOBALS["lang"]['Montenegro'] = 'Černá Hora';

$GLOBALS["lang"]['month'] = 'Měsíc';

$GLOBALS["lang"]['Month'] = 'Měsíc';

$GLOBALS["lang"]['Montserrat'] = 'Montserrat';

$GLOBALS["lang"]['More Information'] = 'Více informací';

$GLOBALS["lang"]['More Secure'] = 'Bezpečnější';

$GLOBALS["lang"]['More elaborate SQL can used to group attributes within a range. Below shows the SQL for devices not seen in a pie chart grouped by last seen date ranges.'] = 'Více propracovaný SQL může použít pro skupinové atributy v rámci rozsahu. Níže je uveden SQL pro zařízení, která nejsou v koláčovém grafu seskupena podle naposledy viděných datových rozsahů.';

$GLOBALS["lang"]['More information about debugging this can be found on a helpful Stack Overflow thread'] = 'Více informací o ladění lze nalézt na užitečné Stock Overflow vlákno';

$GLOBALS["lang"]['Morocco'] = 'Maroko';

$GLOBALS["lang"]['Most likely the Windows firewall (or a third party firewall) is denying the connection attempt.<br><br>Please log on to the target Windows machine and check the firewall settings.'] = 'Pravděpodobně firewall Windows (nebo firewall třetí strany) odmítá pokus o připojení.<br/><br/>Prosím přihlaste se k cílovému zařízení Windows a zkontrolujte nastavení firewall.';

$GLOBALS["lang"]['Most of Open-AudIT is Licensed with GNU AGPL.'] = 'Většina Open- Audit je licencována GNU AGPL.';

$GLOBALS["lang"]['motherboard'] = 'Základní deska';

$GLOBALS["lang"]['Motherboard'] = 'Základní deska';

$GLOBALS["lang"]['mount_point'] = 'Horní bod';

$GLOBALS["lang"]['Mount Point'] = 'Horní bod';

$GLOBALS["lang"]['mount_type'] = 'Typ zařízení';

$GLOBALS["lang"]['Mount Type'] = 'Typ zařízení';

$GLOBALS["lang"]['Mozambique'] = 'Mosambik';

$GLOBALS["lang"]['Must Respond To Ping. If set, Nmap will fist attempt to send and listen for an ICMP response. If the device does not respond, no further scanning will occur.<br>Previously a device did not have to respond to a ping for Open-AudIT to continue scanning.'] = 'Musím reagovat na Pinga. Pokud je nastaveno, Nmap se pokusí poslat a poslechnout ICMP odpověď. Pokud zařízení nereaguje, nedojde k dalšímu skenování.<br/>Dříve zařízení nemuselo reagovat na ping pro Open- AudiT pokračovat ve skenování.';

$GLOBALS["lang"]['Must Respond to Ping'] = 'Musí reagovat na Ping';

$GLOBALS["lang"]['My AntiVirus is prompting me to deny/allow things'] = 'Můj antivirus mě nutí popřít / povolit věci';

$GLOBALS["lang"]['My time is off in Open-AudIT'] = 'Můj čas vypršel v Open- Audit';

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

$GLOBALS["lang"]['NOTE'] = 'POZNÁMKA';

$GLOBALS["lang"]['NOTE #2'] = 'POZNÁMKA # 2';

$GLOBALS["lang"]['NOTE - For more info on DateTime formats, see'] = 'POZNÁMKA - Pro více informací o formátech DateTime, viz';

$GLOBALS["lang"]['NOTE - If you request a downloaded CSV, XML or JSON format (either a single credential, or the complete collection) the actual credential details will be sent. Not the encrypted string, the actual username, password, community string, etc. Any sensitive details are not displayed in the web GUI, but are made available via other formats. To prevent this export a configuration item is available called decrypt_credentials.'] = 'POZNÁMKA - Pokud požadujete stažený CSV, XML nebo JSON formát (buď jeden úvěr, nebo kompletní sbírka), budou zaslány aktuální úvěrové detaily. Ne šifrovaný řetězec, skutečné uživatelské jméno, heslo, komunitní řetězec atd. Jakékoli citlivé detaily nejsou zobrazeny na webu GUI, ale jsou zpřístupněny v jiných formátech. Aby se zabránilo tomuto exportu, je k dispozici konfigurační položka s názvem decrypt _ purities.';

$GLOBALS["lang"]['NOTE - The curly brackets in the data filed should be used as-is (not replaced as per other examples above).'] = 'POZNÁMKA - V uložených datech by se měly používat zakřivené závorky (nejsou nahrazeny podle jiných výše uvedených příkladů).';

$GLOBALS["lang"]['NOTE - You can prevent plain text credentials being displayed below by setting the configuration item for <code>decrypt_credentials</code> to <code>n</code>.'] = 'POZNÁMKA - Můžete zabránit tomu, aby níže byly zobrazeny jednoduché textové údaje nastavením konfigurační položky pro <code>decrypt_credentials</code> do <code>n</code>.';

$GLOBALS["lang"]['name'] = 'Název';

$GLOBALS["lang"]['Name'] = 'Název';

$GLOBALS["lang"]['Name: The name you are giving to this field. Ideally it should be unique.'] = 'Jméno: Jméno, které dáváte tomuto poli. V ideálním případě by to mělo být jedinečné.';

$GLOBALS["lang"]['Namibia'] = 'Namibie';

$GLOBALS["lang"]['Nauru'] = 'Nauru.';

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

$GLOBALS["lang"]['Netstat Ports'] = 'Porty Netstat';

$GLOBALS["lang"]['Netstat Ports use a combination of port number, protocol and program. If all are present the policy passes.'] = 'Netstat Ports používají kombinaci čísla portu, protokolu a programu. Pokud jsou všichni přítomni, politika projde.';

$GLOBALS["lang"]['Network'] = 'Síť';

$GLOBALS["lang"]['network_address'] = 'Síťová adresa';

$GLOBALS["lang"]['Network Address'] = 'Síťová adresa';

$GLOBALS["lang"]['Network Discovery'] = 'Objevení sítě';

$GLOBALS["lang"]['network_domain'] = 'Síťová doména';

$GLOBALS["lang"]['Network Domain'] = 'Síťová doména';

$GLOBALS["lang"]['Network Types'] = 'Typy sítí';

$GLOBALS["lang"]['Network type is set to Local Area Network by default, but can be changed by the user as they see fit. The types supported are below (with thanks to Wikipedia).<br><br>A network can be characterized by its physical capacity or its organizational purpose. Use of the network, including user authorization and access rights, differ accordingly.'] = 'Typ sítě je nastaven na Local Area Network ve výchozím nastavení, ale může být změněn uživatelem, jak uznají za vhodné. Podporované typy jsou níže (díky Wikipedii).<br/><br/>Síť může být charakterizována svou fyzickou kapacitou nebo organizačním účelem. Používání sítě, včetně oprávnění uživatelů a přístupových práv, se odpovídajícím způsobem liší.';

$GLOBALS["lang"]['networks'] = 'Sítě';

$GLOBALS["lang"]['Networks'] = 'Sítě';

$GLOBALS["lang"]['Networks Generated By'] = 'Sítě generované';

$GLOBALS["lang"]['Networks are updated with every discovery. Items such as IPs Available and IPs Used, along with Gateways, DHCP and DNS Servers are added as found.'] = 'Sítě jsou aktualizovány s každým objevem. Položky, jako jsou IP Dostupné a IP Použité, spolu s Gateways, DHCP a DNS Servers jsou přidány jako nalezený.';

$GLOBALS["lang"]['Networks respond differently depending on how they are configured. Some routers and/or firewalls can respond <i>on behalf</i> of IPs on the other side of their interfaces to the Open-AudIT Server. It is quite common to see Nmap report a probe for SNMP (UDP port 161) to respond as open|filtered for devices that do and do not exist. This is misleading as there is no device at that IP, yet it ends up with a device entry in the database. 99.9% of the time, it is not Open-AudIT, nor even Nmap, but the network causing this issue. Now that we have the options to treat open|filtered ports as either open or closed, we can eliminate a lot of this confusion. Enterprise users even have the option to change this on a per discovery basis (more than just using the Medium (Classic) item, as above).'] = 'Sítě reagují jinak v závislosti na tom, jak jsou konfigurovány. Některé routery a / nebo firewally mohou reagovat <i>jménem</i> IP na druhé straně jejich rozhraní s Open- Audit Serverem. Je docela běžné, že Nmap hlásí sondu pro SNMP (UDP port 161) reagovat jako otevřené 124; filtrované pro zařízení, která existují a neexistují. To je zavádějící, protože v té IP aplikaci není žádné zařízení, ale přesto končí se zadáním zařízení v databázi. 99,9% času, to není Open- Audit, ani Nmap, ale síť způsobuje tuto otázku. Nyní, když máme možnost zacházet s otevřenými porty 124; filtrované porty jako s otevřenými nebo uzavřenými, můžeme odstranit mnoho těchto zmatků. Uživatelé Enterprise mají dokonce možnost změnit to na základě objevu (více než jen pomocí položky Medium (Classic), jak je uvedeno výše).';

$GLOBALS["lang"]['Networks using a CIDR Mask of'] = 'Sítě používající masku CIDR';

$GLOBALS["lang"]['New Building Name'] = 'Název nové budovy';

$GLOBALS["lang"]['New Caledonia'] = 'Nová Kaledonie';

$GLOBALS["lang"]['New Floor Name'] = 'Název nového patra';

$GLOBALS["lang"]['New Room Name'] = 'Název nového pokoje';

$GLOBALS["lang"]['New Row Name'] = 'Název nového řádku';

$GLOBALS["lang"]['New Zealand'] = 'Nový Zéland';

$GLOBALS["lang"]['News'] = 'Zprávy';

$GLOBALS["lang"]['News checks-in each time you login for updated queries & packages, configuration recommendations, release announcements, blog posts and more.'] = 'Novinky checks-in pokaždé, když se přihlásíte pro aktualizované dotazy & balíčky, konfigurační doporučení, vydat oznámení, blog příspěvky a další.';

$GLOBALS["lang"]['News is our way of keeping you up-to-date with the latest fixes, announcements, query updates, software versions and more.<br><br>You do not need to keep on top of the wiki or check for new releases, we can send these to you!'] = 'Novinky jsou náš způsob, jak vás udržet v aktuálním stavu s nejnovějšími opravami, oznámeními, aktualizacemi dotazu, softwarovými verzemi a dalšími.<br/><br/>Nemusíte držet na vrcholu wiki nebo zkontrolovat nové verze, můžeme vám poslat!';

$GLOBALS["lang"]['next_hop'] = 'Další hop';

$GLOBALS["lang"]['Next Hop'] = 'Další hop';

$GLOBALS["lang"]['next_run'] = 'Další běh';

$GLOBALS["lang"]['Next Run'] = 'Další běh';

$GLOBALS["lang"]['Next click <i>Create your own application</i>.'] = 'Další kliknutí <i>Vytvořte si vlastní aplikaci</i>.';

$GLOBALS["lang"]['Next, click OK, then right click the Apache 2.4 service and click Restart. Done!'] = 'Dále klepněte na tlačítko OK, pak pravým tlačítkem myši na službu Apache 2.4 a klepněte na tlačítko Restartovat. Hotovo!';

$GLOBALS["lang"]['Next, right click the Apache2.4 service and select Properties, then click the Log On tab.'] = 'Dále klepněte pravým tlačítkem myši na službu Apache2.4 a vyberte Vlastnosti a potom klikněte na záložku Log On.';

$GLOBALS["lang"]['Nicaragua'] = 'Nikaragua';

$GLOBALS["lang"]['Niger'] = 'Niger';

$GLOBALS["lang"]['Nigeria'] = 'Nigérie';

$GLOBALS["lang"]['Niue'] = 'Niue';

$GLOBALS["lang"]['nmap'] = 'Nmap';

$GLOBALS["lang"]['Nmap'] = 'Nmap';

$GLOBALS["lang"]['Nmap Port Scanning Responses'] = 'Nmap Port Scanning Responses';

$GLOBALS["lang"]['nmap_tcp_ports'] = 'Nmap Tcp Ports';

$GLOBALS["lang"]['Nmap Tcp Ports'] = 'Nmap Tcp Ports';

$GLOBALS["lang"]['nmap_udp_ports'] = 'Nmap Udp Ports';

$GLOBALS["lang"]['Nmap Udp Ports'] = 'Nmap Udp Ports';

$GLOBALS["lang"]['Nmap cannot determine whether the port is open because packet filtering prevents its probes from reaching the port. The filtering could be from a dedicated firewall device, router rules, or host-based firewall software. These ports frustrate attackers because they provide so little information. Sometimes they respond with ICMP error messages such as type 3 code 13 (destination unreachable: communication administratively prohibited), but filters that simply drop probes without responding are far more common. This forces Nmap to retry several times just in case the probe was dropped due to network congestion rather than filtering. This slows down the scan dramatically.'] = 'Nmap nemůže určit, zda je port otevřen, protože filtrování paketů brání jeho sondám dosáhnout portu. Filtrace by mohla být z vyhrazeného firewall zařízení, router pravidla, nebo host- založené firewall software. Tyto přístavy frustrují útočníky, protože poskytují tak málo informací. Někdy reagují chybovými zprávami ICMP, jako je kód 13 typu 3 (nedostupný cíl: administrativně zakázán komunikace), ale filtry, které jednoduše upustí sondy bez odezvy, jsou mnohem běžnější. To nutí Nmap opakovat několikrát jen pro případ, že by sonda klesla kvůli přetížení sítě spíše než filtrování. To dramaticky zpomaluje sken.';

$GLOBALS["lang"]['Nmap places ports in this state when it is unable to determine whether a port is open or filtered. This occurs for scan types in which open ports give no response. The lack of response could also mean that a packet filter dropped the probe or any response it elicited. So Nmap does not know for sure whether the port is open or being filtered. The UDP, IP protocol, FIN, NULL, and Xmas scans classify ports this way.'] = 'Nmap umístí přístavy v tomto stavu, pokud není schopen určit, zda je port otevřen nebo filtrován. K tomu dochází u skenovacích typů, ve kterých otevřené porty neodpovídají. Nedostatek odezvy může také znamenat, že paketový filtr upustil sondu nebo jakoukoli reakci, kterou vyvolal. Takže Nmap neví jistě, zda je port otevřený nebo je filtrován. UDP, IP protokol, FIN, NULL a Xmas takto klasifikují porty.';

$GLOBALS["lang"]['Nmap timing details are found on the bottom of this linked page'] = 'Informace o načasování Nmap naleznete v dolní části této připojené stránky';

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

$GLOBALS["lang"]['No'] = 'Ne.';

$GLOBALS["lang"]['No Devices Returned'] = 'Žádná vrácená zařízení';

$GLOBALS["lang"]['No Google Maps API Key present, you will not be able to display the map.'] = 'Žádný Google Maps API Přítomnost klíče nebude schopna zobrazit mapu.';

$GLOBALS["lang"]['No License for Professional or Enterprise'] = 'Bez licence pro profesionální nebo podnikové';

$GLOBALS["lang"]['No Results'] = 'Žádné výsledky';

$GLOBALS["lang"]['No data in License Key'] = 'Žádné údaje v licenčním klíči';

$GLOBALS["lang"]['No database upgrade required at this time.'] = 'V tuto chvíli není potřeba žádná aktualizace databáze.';

$GLOBALS["lang"]['No devices are in the database.'] = 'V databázi nejsou žádná zařízení.';

$GLOBALS["lang"]['Node'] = 'Uzel';

$GLOBALS["lang"]['None'] = 'Žádné';

$GLOBALS["lang"]['Norfolk Island'] = 'Norfolk Island';

$GLOBALS["lang"]['Normal'] = 'Normální';

$GLOBALS["lang"]['Northern Mariana Islands'] = 'Severní Mariánské ostrovy';

$GLOBALS["lang"]['Norway'] = 'Norsko';

$GLOBALS["lang"]['Norwegian'] = 'Norsko';

$GLOBALS["lang"]['Not Applicable'] = 'Neuplatňuje se';

$GLOBALS["lang"]['Not Checked'] = 'Neověřeno';

$GLOBALS["lang"]['Not Equals'] = 'Nerovná se';

$GLOBALS["lang"]['Not In'] = 'Ne v';

$GLOBALS["lang"]['Not Like'] = 'Ne jako';

$GLOBALS["lang"]['Not Set'] = 'Nenastaveno';

$GLOBALS["lang"]['Not every computer will be able to successfully complete a benchmark. We have seen in some fail in testing for reasons beyond our control. The logs should help point you in the right direction for these items.'] = 'Ne každý počítač bude schopen úspěšně dokončit referenční hodnotu. V jistém neúspěchu jsme viděli testy z důvodů mimo naši kontrolu. Záznamy by vám měly pomoci nasměrovat tyto položky správným směrem.';

$GLOBALS["lang"]['Not in the (comma seperated) list'] = 'Není v seznamu (čárka oddělená)';

$GLOBALS["lang"]['Not normally used. If set, this requires the device to have an open port (as per Scan Options) to be considered responding. A MAC address, arp response or ping response is not considered sufficient to be considered responding. Useful if a router or firewall between the Open-AudIT server and target IP is responding to port scans on the IPs behalf.'] = 'Nepoužívá se normálně. Pokud je nastaveno, vyžaduje to, aby zařízení mělo otevřený port (podle možností skenování), který má být považován za odpovídající. MAC adresa, arp odezva nebo ping odezva není považována za dostatečnou pro to, aby byla považována za odpověď. Užitečné, pokud směrovač nebo firewall mezi Open- Audit serverem a cílovým IP reaguje na skenování portu jménem IP.';

$GLOBALS["lang"]['Note'] = 'Poznámka';

$GLOBALS["lang"]['Note - Selecting a parent will automatically provide access to its children (although it wont be shown here).'] = 'Poznámka - Výběr rodiče automaticky umožní přístup ke svým dětem (i když zde není zobrazen).';

$GLOBALS["lang"]['Note that the 100 device Enterprise license does not include support.'] = 'Všimněte si, že 100 zařízení Enterprise licence neobsahuje podporu.';

$GLOBALS["lang"]['Note, you may need to make the script executable with'] = 'Poznámka, možná budete muset provést skript spustitelný s';

$GLOBALS["lang"]['Notes'] = 'Poznámky';

$GLOBALS["lang"]['notes'] = 'Poznámky';

$GLOBALS["lang"]['Notice'] = 'Oznámení';

$GLOBALS["lang"]['notin'] = 'Notin';

$GLOBALS["lang"]['Notin'] = 'Notin';

$GLOBALS["lang"]['November'] = 'listopad';

$GLOBALS["lang"]['Now for the Subscription ID, click All Services, Subscriptions and copy it.'] = 'Nyní pro ID předplatného klikněte na All Services, Předplatné a zkopírujte jej.';

$GLOBALS["lang"]['Now we need to provide the Azure Active Directory application access to your subscription.<br><br>Click on Resource Groups and then the resource group you would like your Azure Active Directory Application to have access to.<br><br>Click Add. The role should be Contributor and then search for the app (Open-AudIT). Then click Save.<br><br>Now the application has access to the subscription, so we can make API calls. The API calls will be requested on behalf of the application, not your user.'] = 'Nyní musíme poskytnout aplikaci Azure Active Directory přístup k vašemu předplatného.<br/><br/>Klikněte na Skupiny zdrojů a pak na skupinu zdrojů, ke které chcete, aby vaše aplikace Azure Active Directory měla přístup.<br/><br/>Klikněte na Přidat. Role by měla být Contributor a pak hledat aplikaci (Open- Audit). Pak klepněte na tlačítko Uložit.<br/><br/>Nyní má aplikace přístup k předplatnému, takže můžeme volat API. Volání API bude vyžádáno jménem aplikace, ne vašeho uživatele.';

$GLOBALS["lang"]['nvd_json'] = 'Nvd Json';

$GLOBALS["lang"]['Nvd Json'] = 'Nvd Json';

$GLOBALS["lang"]['ORDER BY'] = 'USNESENÍ';

$GLOBALS["lang"]['OS'] = 'OS';

$GLOBALS["lang"]['OS Families'] = 'Rodiny OS';

$GLOBALS["lang"]['OS Family'] = 'OS Family';

$GLOBALS["lang"]['OS Group'] = 'Skupina OS';

$GLOBALS["lang"]['OUTPUTS'] = 'VÝHRADY';

$GLOBALS["lang"]['oae_manage'] = 'Oae Správa';

$GLOBALS["lang"]['Oae Manage'] = 'Oae Správa';

$GLOBALS["lang"]['object_ident'] = 'Ident objektu';

$GLOBALS["lang"]['Object Ident'] = 'Ident objektu';

$GLOBALS["lang"]['Obtain top management support'] = 'Získat špičkovou podporu managementu';

$GLOBALS["lang"]['October'] = 'Říjen';

$GLOBALS["lang"]['Offset'] = 'Offset';

$GLOBALS["lang"]['Okta'] = 'Okta';

$GLOBALS["lang"]['Oman'] = 'Omán';

$GLOBALS["lang"]['omk_uuid'] = 'Omk Uuid';

$GLOBALS["lang"]['Omk Uuid'] = 'Omk Uuid';

$GLOBALS["lang"]['On'] = 'Zapnout';

$GLOBALS["lang"]['On Windows, Open-AudIT uses WMI as it is primary method of auditing. Windows has a notorious reputation where remote WMI is concerned. It tends to either <i>just work</i> or some mystery item on the target requires changing. If you are experiencing difficulty auditing remote Windows PCs, we have created a script called test_windows_client.vbs. You can run this script <strong>locally</strong> on the machine in question, after signing on as the user that is used by Open-AudIT to perform the audit. The script makes <strong>no changes</strong> to the target devices. It checks most (not all) of the items below and generates PASS, FAIL and INFO tags for various properties. NOTE - If your target system is being audited correctly, you should not change any settings. Some of the below do not exist on Windows PCs that are able to be audited and some do exist. Only change settings if your discoveries on particular PCs are not working as intended.'] = 'Na Windows Open- Audit používá WMI jako primární metodu auditu. Windows má notorickou pověst, pokud jde o vzdálenou WMI. To má tendenci buď <i>Jen práce.</i> nebo nějaká záhadná věc na cíli vyžaduje změnu. Pokud máte potíže s auditováním vzdálených počítačů Windows, vytvořili jsme skript s názvem test _ windows _ client.vbs. Name Můžete spustit tento scénář <strong>lokálně</strong> na dotyčném stroji, po přihlášení jako uživatel, který používá Open- Audit k provedení auditu. Scénář dělá <strong>žádné změny</strong> k cílovým zařízením. Kontroluje většinu (ne všechny) položek níže a generuje PASS, FAIL a INFO značky pro různé vlastnosti. POZNÁMKA - Pokud je váš cílový systém správně kontrolován, neměli byste měnit žádná nastavení. Některé z níže uvedených údajů neexistují na počítačích Windows, které mohou být kontrolovány a některé existují. Změna nastavení pouze v případě, že vaše objevy na konkrétních PC nefungují tak, jak bylo zamýšleno.';

$GLOBALS["lang"]['On the Tasks List page, click the <i>Add New</i> button to configure a task.'] = 'Na stránce Seznam úloh klikněte na <i>Přidat nový</i> tlačítko pro konfiguraci úkolu.';

$GLOBALS["lang"]['On the field <i>Match String</i> you should provide the name of the software that you want to track. You can use the percent sign (%) as a wildcard in where required.'] = 'Na hřišti <i>Řetězec shody</i> měli byste poskytnout název softwaru, který chcete sledovat. Můžete použít procentuální znak (%) jako divokou kartu v případě potřeby.';

$GLOBALS["lang"]['On the next page you will be able to select Access Keys and see your key or create a new key.'] = 'Na další stránce budete moci vybrat přístupové klíče a vidět váš klíč nebo vytvořit nový klíč.';

$GLOBALS["lang"]['On the target Windows PC, run the DCOM utility and verify (or set) the below attributes. Start -> Run, Enter DCOMCNFG and press OK. This will open the DCOMCNFG window.'] = 'Na cílovém počítači Windows spusťte nástroj DCOM a ověřte (nebo nastavte) níže uvedené atributy. Start - > Spustit, Zadejte DCOMCNFG a stiskněte OK. Tohle otevře okno DCOMCNFG.';

$GLOBALS["lang"]['On the top right (underneath the menu bar) you will see several buttons. These allow you to select another dashboard, set the current dashboard as your homepage (if it is not already) and edit the current dashboard (if you have permission).'] = 'Vpravo nahoře (pod lištou menu) uvidíte několik tlačítek. Ty vám umožní vybrat jinou palubní desku, nastavit aktuální palubní desku jako domovskou stránku (pokud již není) a upravit aktuální palubní desku (pokud máte povolení).';

$GLOBALS["lang"]['On-Premise, Not Cloud'] = 'On- Premise, ne cloud';

$GLOBALS["lang"]['Once an Additional Field has been created it can be used in queries and groups just like any other attribute in the database.'] = 'Jakmile bylo vytvořeno další pole, může být použito v dotazech a skupinách stejně jako jakýkoli jiný atribut v databázi.';

$GLOBALS["lang"]['Once commented out, your certificate will be validated, but may also fail this validation if you are using self-signed certificates and have not configured your server correctly.'] = 'Jakmile je váš certifikát komentován, bude validován, ale může také selhat v tomto potvrzení, pokud používáte automaticky podepsané certifikáty a nenakonfigurovali jste svůj server správně.';

$GLOBALS["lang"]['Once the script has run on a target, should the script delete itself.'] = 'Jakmile je skript spuštěn na terč, má se skript smazat sám.';

$GLOBALS["lang"]['Once those initial queries (snmp, ssh, wmi) are complete, if the device is a supported by the audit scripts (Windows, Linux, OSX, AIX, HP-UX, Solaris and ESXi), the correct audit script will be copied to the target and executed. The audit script will self delete upon completion. The result will be stored on the target machine as an XML file. The Open-AudIT server will then retrieve the result file for processing and delete the result file on the target. The location the audit script is copied to on the target device (at least for SSH audits) is configurable by editing the discovery_linux_script_directory config item. By default it is set to /tmp/. This may need changing if /tmp has noexec set. The result file is then processed and the device details updated within Open-AudIT.'] = 'Jakmile jsou tyto počáteční dotazy (snmp, ssh, wmi) dokončeny, pokud je zařízení podporováno skripty pro audit (Windows, Linux, OSX, AIX, HP-UX, Solaris a ESXi), bude správný kontrolní skript zkopírován do cíle a proveden. Auditní skript se po dokončení sám vymaže. Výsledek bude uložen na cílový stroj jako XML soubor. Server Open- Audit pak získá výsledný soubor pro zpracování a smaže výsledný soubor na cílovém. Umístění, na které je auditní skript zkopírován na cílovém zařízení (alespoň pro SSH audity), je konfigurovatelné editací konfigurační položky objev _ linux _ script _ adresář. Ve výchozím nastavení je nastaven na / tmp /. To může vyžadovat změnu, pokud / tmp má noexec nastavena. Výsledek souboru je pak zpracováván a podrobnosti zařízení aktualizovány v rámci Open- Audit.';

$GLOBALS["lang"]['Once you click the execute button, Open-AudIT will spawn a process to initiate the discovery and return the user to the discovery details page. The newly spawned process takes the configured discovery options and executes Nmap commands to determine the initial list of IP addresses to be scanned (or queries Active Directory if that type is used). Each IP to be scanned is placed into a queue. Once the initial process has completed (and there are IPs to be scanned in the queue) a number of processes will be spawned to further scan each IP in parallel. This number of processes is configurable in the configuration, edit the attribute <i>queue_limit</i>. By default this is set to 20.'] = 'Jakmile kliknete na tlačítko execution, Open- Audit zplodí proces pro zahájení objevu a vrátí uživatele na stránku s detaily objevování. Nově vyvinutý proces vyžaduje konfigurované možnosti objevování a provádí příkazy Nmap pro určení počátečního seznamu IP adres, které mají být skenovány (nebo dotazy Active Directory, pokud je tento typ použit). Každá IP adresa, která má být naskenována, je umístěna ve frontě. Po dokončení počátečního procesu (a ve frontě je třeba naskenovat IP) bude počet procesů zploden k dalšímu skenování každé IP paralelně. Tento počet procesů je konfigurovatelný v konfiguraci, editovat atribut <i>fronta _ limit</i>. Ve výchozím nastavení je toto nastaveno na20.';

$GLOBALS["lang"]['Once you have chosen your devices to edit, click the pencil button on the top right of the table.'] = 'Jakmile si zvolíte zařízení pro úpravu, klikněte na tlačítko tužky na pravé horní části tabulky.';

$GLOBALS["lang"]['Once you have done this, Open-AudIT will attempt to verify your user logon details against the configured Auth Method. If the user has valid credentials and <code>use_authorisation</code> is set, Open-AudIT will ask for the list of groups that the user belongs to. If the user is in the corresponding groups for Open-AudIT Roles and Orgs, those Roles and Orgs will be applied to that user.'] = 'Jakmile jste to udělali, Open- Audit se pokusí ověřit vaše uživatelské logon detaily proti nakonfigurované Auth metody. Pokud má uživatel platné pověřovací listiny a <code>use_authorisation</code> je nastaveno, Open- Audit požádá o seznam skupin, do kterých uživatel patří. Je-li uživatel v odpovídajících skupinách pro Open- Audit Roles a Orgs, tyto Roles a Orgs budou aplikovány na tohoto uživatele.';

$GLOBALS["lang"]['Once you have generated a Baseline Definition you can schedule it to be run against a specified group of devices.'] = 'Jakmile vytvoříte definici výchozího stavu, můžete ji naplánovat tak, aby byla spuštěna proti určité skupině zařízení.';

$GLOBALS["lang"]['Once you have those items, in Open-AudIT Enterprise you can go to menu -> Discover -> Clouds -> Create Clouds, select the <i>Amazon AWS</i> type and paste them in. Done.'] = 'Jakmile máte tyto položky, v Open- Audit Enterprise můžete přejít na menu - > Objevte - > Mraky - > Vytvořit Mraky, vyberte <i>Amazon AWS</i> Napište a vložte je. Hotovo.';

$GLOBALS["lang"]['Once you have those items, in Open-AudIT Enterprise you can go to menu -> Discover -> Clouds -> Create Clouds, select the <i>Microsoft Azure</i> type and paste them in. Done.'] = 'Jakmile máte tyto položky, v Open- Audit Enterprise můžete přejít na menu - > Objevte - > Mraky - > Vytvořit Mraky, vyberte <i>Microsoft Azure</i> Napište a vložte je. Hotovo.';

$GLOBALS["lang"]['Once you have your cloud credentials, it is merely a matter of creating a new cloud and running the discovery - or scheduling first/future discoveries. Make sure you also have the credentials required to log on to your cloud machines, and it is all done for you just like a regular discovery. Credentials for your cloud'] = 'Jakmile máte své cloudové pověření, je to jen otázka vytvoření nového cloudu a spuštění objevu - nebo plánování první / budoucí objevy. Ujistěte se, že máte také doklady potřebné k přihlášení na vaše cloud stroje, a to vše pro vás stejně jako pravidelný objev. Kredity pro váš cloud';

$GLOBALS["lang"]['One of <code>3x2</code>, <code>4x2</code>, <code>4x3</code> or <code>4x4</code>.'] = 'Jeden z <code>3x2</code>, <code>4x2</code>, <code>4x3</code> nebo <code>4x4</code>.';

$GLOBALS["lang"]['One of Campus Area Network, Cloud Network, Enterprise Private Network, Home Area Network, Local Area Network, Metropolitan Area Network, Passive Optical Local Area Network, Personal Area Network, Storage-Area Network, System-Area Network, Virtual Private Network, Wide Area Network, Wireless Local Area Network.'] = 'Jeden z Campus Area Network, Cloud Network, Enterprise Private Network, Home Area Network, Local Area Network, Metropolitan Area Network, Pasivní Optical Local Area Network, Personal Area Network, Storage-Area Network, System- Area Network, Virtual Private Network, Wide Area Network, Wireless Local Area Network.';

$GLOBALS["lang"]['One of Development, Disaster Recovery, Evaluation, Pre-Production, Production, Testing, Training, User Acceptance Testing'] = 'Jeden z Development, Disaster Recovery, Evaluation, Pre- Production, Production, Testing, Training, User Acceptation Testing';

$GLOBALS["lang"]['One of allocated, delegated, planning, reserved, unallocated, unknown, unmanaged. Defaults to allocated.'] = 'Jeden z přidělených, delegovaných, plánovacích, vyhrazených, nepřidělených, neznámých, neřízených. Chyby přidělené.';

$GLOBALS["lang"]['One of either <code>active directory</code> or <code>openldap</code>.'] = 'Jeden z obou <code>active directory</code> nebo <code>openldap</code>.';

$GLOBALS["lang"]['One of: antivirus, backup, firewall, approved, banned, ignored or other.'] = 'Jeden z: antivirus, záložní, firewall, schválen, zakázán, ignorován nebo jiný.';

$GLOBALS["lang"]['One other item to be careful of - make sure you use the hostname (or fqdn) of your LDAP Server that matches what is in the certificate (not just the LDAP Servers IP address) when creating the LDAP entry in Open-AudIT.'] = 'Další položka, která má být opatrný - ujistěte se, že používáte hostitelské jméno (nebo fqdn) vašeho LDAP Server, který odpovídá tomu, co je v certifikátu (nejen IP adresa LDAP Servers) při vytvoření položky LDAP v Open- Auditu.';

$GLOBALS["lang"]['Online Documentation'] = 'Online dokumentace';

$GLOBALS["lang"]['Open'] = 'Otevřít';

$GLOBALS["lang"]['Open Data'] = 'Otevřít data';

$GLOBALS["lang"]['Open Source'] = 'Otevřít zdroj';

$GLOBALS["lang"]['Open-AudIT'] = 'Open- Audit';

$GLOBALS["lang"]['Open-AudIT Community source code is available on GitHub. You are encouraged to inspect any code you have concerns about, and because it is open source - you are also encouraged to ask us about any issues you have or report any findings. We are always more than happy to accept code contributions, vulnerability reports, or even simple questions. We are here to help.<br><br>The audit scripts themselves (Windows, Linux, MacOS, et al) are deliberately written in readable native shell script (VBScript for Windows, Bash for *nix). You can see exactly what commands are run. You can remove any commands you feel you do not need. You can ask a third party to inspect the code for you and (if you want to) report any findings.<br><br>Open-AudIT Enterprise performs the add-on commercial functions for Open-AudIT Community. It is included as a single compiled file with no external dependencies. Where Enterprise itself performs the function(s), if you are concerned with any issues Firstwave is happy to work through them with you - just ask! Try that with another commercial software vendor!'] = 'Open- Audit Na GitHubu je k dispozici zdrojový kód Společenství. Jste vybízeni, abyste zkontrolovali jakýkoliv kód, který vás znepokojuje, a protože je to otevřený zdroj - jste také vyzváni, abyste se nás zeptali na jakékoli otázky, které máte, nebo nahlásili všechna zjištění. Jsme vždy více než rádi, že přijímáme kódové příspěvky, zprávy o zranitelnosti nebo dokonce jednoduché otázky. Jsme tu, abychom pomohli.<br/><br/>Audit skripty sami (Windows, Linux, Macos, et al) jsou záměrně napsány v čitelné domácí shell skriptu (VBScript pro Windows, Bash pro * nix). Můžete přesně vidět, jaké příkazy jsou spuštěny. Můžete odstranit příkazy, které nepotřebujete. Můžete požádat třetí stranu o kontrolu kódu pro vás a (pokud chcete) hlásit všechny nálezy.<br/><br/>Open- Audit Podniky vykonávají add- on komerční funkce pro Open- Audit Community. Je zahrnut jako jeden soubor bez vnějších závislostí. Pokud sama Enterprise vykonává funkci (y), pokud se zabýváte jakýmikoli otázkami Firstwave je šťastná, že je s vámi může projít - stačí se zeptat! Zkuste to s jiným prodejcem komerčního softwaru!';

$GLOBALS["lang"]['Open-AudIT Device Selection'] = 'Výběr zařízení Open- Audit';

$GLOBALS["lang"]['Open-AudIT Enterprise has the ability to choose from a pre-defined list of discovery scan options and also to customise individual options per discovery.'] = 'Open- Audit Enterprise má možnost vybrat si z předem definovaného seznamu možností vyhledávání a také přizpůsobit jednotlivé možnosti na objev.';

$GLOBALS["lang"]['Open-AudIT Enterprise. High-scale flexible discovery and audit solution for large networks. All the features of Professional plus: Baselines, File Auditing, Cloud Discovery, Rack Management, Configurable Role Based Access Control including Active Directory and LDAP.'] = 'Audit Enterprise. Flexibilní řešení pro vyhledávání a audit velkých sítí. Všechny funkce Professional plus: Základní linie, Auditing souborů, Cloud Discovery, Rack Management, Konfigurovatelné Role založené řízení přístupu včetně Active Directory a LDAP.';

$GLOBALS["lang"]['Open-AudIT Field Name'] = 'Název pole Open- Audit';

$GLOBALS["lang"]['Open-AudIT Licenses'] = 'Open- Audit Licenses';

$GLOBALS["lang"]['Open-AudIT Options'] = 'Open- Audit Možnosti';

$GLOBALS["lang"]['Open-AudIT Professional and Enterprise include Enhanced Reporting features, including time-based, historical, and muti-query based reporting features in multiple formats.'] = 'Open- Audit Professional a Enterprise zahrnují vylepšené funkce reportingu, včetně časových, historických a znehodnocených funkcí reportingu ve více formátech.';

$GLOBALS["lang"]['Open-AudIT Professional has the ability to choose from a pre-defined list of discovery scan options, per discovery.'] = 'Open- Audit Profesionál má možnost vybrat si z předem definovaného seznamu možností vyhledávání, na objev.';

$GLOBALS["lang"]['Open-AudIT Professional. The worlds'] = 'Open- Audit Professional. Svět\\';

$GLOBALS["lang"]['Open-AudIT can be configured to use LDAP servers (Microsoft Active Directory and/or OpenLDAP) to authenticate and authorize a user and in addition, to create a user account in Open-AudIT using assigned roles and orgs based on LDAP group membership. It can also use'] = 'Open- Aud IT lze konfigurovat pro použití LDAP serverů (Microsoft Active Directory a / nebo OpenLDAP) k ověření a autorizaci uživatele a navíc k vytvoření uživatelského účtu v Open- Auditu pomocí přiřazených rolí a orgů na základě členství ve skupině LDAP. Může také použít';

$GLOBALS["lang"]['Open-AudIT can be run on your server in your data center. It does not need access to the internet at all. Even the installation on Linux where we use the distribution package manager for our prerequisites can be negated by you using an in-house and security team-approved package repository.<br><br>Open-AudIT does not store any of your data in the cloud. Even licensing information can be provided without having to access the internet from the Open-AudIT server.<br><br>Sure, it is easier to allow it to access the internet to download packages (including security fixes) for your distribution, but that is up to you and your security policies. Open-AudIT does not need the internet.'] = 'Open- Aud IT lze spustit na vašem serveru ve vašem datovém centru. Nepotřebuje vůbec přístup k internetu. Dokonce i instalace na Linuxu, kde používáme správce distribučních balíčků pro naše předpoklady, může být odepřena pomocí inhouse a bezpečnostní tým-schválené úložiště balíků.<br/><br/>Open- Aud IT neukládá žádná data do cloudu. Dokonce i licenční informace mohou být poskytovány bez nutnosti přístupu k internetu z Open- Audit serveru.<br/><br/>Jistě, je jednodušší umožnit mu přístup k internetu ke stažení balíčků (včetně bezpečnostních oprav) pro vaši distribuci, ale to je na vás a vašich bezpečnostních politik. Open- Audit nepotřebuje internet.';

$GLOBALS["lang"]['Open-AudIT can download, parse and use NIST CVE Vulnerability reports.'] = 'Open- Audit si může stáhnout, rozložit a používat NIST CVE zprávy o zranitelnosti.';

$GLOBALS["lang"]['Open-AudIT can show in one of several languages. How you can improve this?'] = 'Open- Aud IT se může zobrazit v jednom z několika jazyků. Jak to můžeš zlepšit?';

$GLOBALS["lang"]['Open-AudIT can store information in additional fields that are associated with each device.'] = 'Open- Aud IT může ukládat informace do dalších polí, která jsou spojena s každým zařízením.';

$GLOBALS["lang"]['Open-AudIT can use Microsoft Entra (previously known as Microsoft Azure Active Directory) as an authentication method. This means your user in Open-AudIT can click the Logon using Entra button on the logon page and use their Entra credentials to logon. That user will need to already exist within Open-AudIT (and be assigned'] = 'Open- Audit může používat Microsoft Entra (dříve známý jako Microsoft Azure Active Directory) jako autentizační metodu. To znamená, že váš uživatel v Open- Audit může kliknout na Logon pomocí tlačítka Entra na stránce logon a použít jejich Entra pověření pro logon. Tento uživatel bude muset již existovat v rámci Open- Audit (a být přiřazen';

$GLOBALS["lang"]['Open-AudIT can use OKTA as an authentication method. This means your user in Open-AudIT can click the Logon using OKTA button on the logon page and use their OKTA credentials to logon. That user will need to already exist within Open-AudIT (and be assigned Roles and Orgs), but will not need to remember a separate set of logon credentials.'] = 'Open- Audit může používat OKTA jako autentizační metodu. To znamená, že váš uživatel v Open- Audit může kliknout na Logon pomocí tlačítka OKTA na záložce Logon a použít jejich OKTA pověření k přihlášení. Tento uživatel bude muset již existovat v rámci Open- Audit (a být přiřazena Roles a Orgs), ale nebude muset pamatovat na samostatný soubor logon pověření.';

$GLOBALS["lang"]['Open-AudIT comes with many queries inbuilt. If you require a specific query and none of the pre-packaged queries fit your needs, it is quite easy to create a new one and load it into Open-AudIT for running.'] = 'Open- Audit je dodáván s mnoha dotazy. Pokud požadujete konkrétní dotaz a žádný z předem balených dotazů neodpovídá vašim potřebám, je poměrně snadné vytvořit nový a načíst jej do Open- Audit pro běh.';

$GLOBALS["lang"]['Open-AudIT has a JSON Restful API to be used both in the web interface and via JSON requests.'] = 'Open- Audit má JSON Restful API, které mají být použity jak na webovém rozhraní, tak přes požadavky JSON.';

$GLOBALS["lang"]['Open-AudIT has a granular permissions system to determine what a user within Open-AudIT can do, and the items he can do it to. Open-AudIT can be entirely self-contained, or use Active Directory or OpenLDAP for authentication and/or authorization.<br><br>It is entirely up to the administrator of Open-AudIT how they would like the Role Based Access Control to work.'] = 'Open- Aud IT má granulární autorizační systém k určení, co uživatel v rámci Open- Audit může dělat, a položky, kterým to může udělat. Open- Audit může být zcela samoobslužný, nebo použít Active Directory nebo OpenLDAP pro ověření a / nebo autorizaci.<br/><br/>Je zcela na administrátorovi Open- Auditu, jak by chtěli, aby přístup založený na úloze fungoval.';

$GLOBALS["lang"]['Open-AudIT has a powerful change detection engine. Any device attributes that are added, removed or changed will be detected and stored. These changes can be reported upon and the relevant data confirmed as to what was expected from your company change and release process.<br><br>When a device is audited, attributes are divided into sections which correspond to tables in the database.<br><br>Each device (computer, router, printer, et al) has an entry in the <code>devices</code> table. Each entry in the devices table has an <code>id</code> column. This value is unique - it is an auto-incrementing id.<br><br>When the audit result is processed, each item in each section has its audit result compared to what is in the database.<br><br>For each section, if the key columns (see below table) contain the identical values, it is considered already installed and has its <code>last_seen</code> attribute updated. No change_log entry is created.<br><br>If any of the key columns do not match, it is considered a new attribute and is inserted. A <code>change_log</code> entry is created if the device had other attributes already present in the table.<br><br>At the completion of the audit processing, any database items that have not been updated (or inserted) are considered to not be present. The <code>current</code> attribute for this item is set to <i>n</i> and a change_log entry is generated.<br><br>So, we can determine if something is currently installed - the current column is <i>y</i>.<br><br>We can determine when something was initially detected - the <i>first_seen</i>.<br><br>We can determine if something was installed after the initial audit - first seen will be different in the component and device tables.<br><br>We can determine if something is not currently installed, but previously was - current = <i>n</i>.<br><br>We can determine the last time we detected an item - last_seen.<br><br>At any given point, we can determine what was on a system - by using the audit_log table and selecting the relevant components based on first_seen and last_seen.<br><br>Each section and its matching key columns are below.<br><br>NOTE - There are some exceptions as detailed below.<br><br>*1 - For network cards, if the computer is a VMware Esx machine it also uses the net_index and connection columns.<br><br>*2 - For partitions, f the computer is an AIX machine, we use the partition name.'] = 'Open- Aud IT má výkonný systém detekce změn. Atributy zařízení, které budou přidány, odstraněny nebo změněny, budou detekovány a uloženy. Tyto změny mohou být hlášeny a příslušné údaje potvrzeny o tom, co se očekávalo od vaší společnosti změnit a uvolnit proces.<br/><br/>Při auditu zařízení jsou atributy rozděleny do sekcí, které odpovídají tabulkám v databázi.<br/><br/>Každé zařízení (počítač, router, tiskárna, et al) má záznam v <code>devices</code> Stůl. Každý záznam v tabulce zařízení má <code>id</code> sloupec. Tato hodnota je jedinečná - jedná se o automaticky se zvyšující id.<br/><br/>Je-li výsledek auditu zpracován, má každá položka v každé sekci svůj výsledek auditu ve srovnání s tím, co je v databázi.<br/><br/>Pro každý oddíl, pokud klíčové sloupce (viz níže tabulka) obsahují stejné hodnoty, je považován již nainstalován a má <code>last_seen</code> atribut aktualizován. Není vytvořen žádný záznam změny _ log.<br/><br/>Pokud některý z klíčových sloupců neodpovídá, je považován za nový atribut a je vložen. A <code>change_log</code> vstup je vytvořen, pokud zařízení má jiné atributy již přítomné v tabulce.<br/><br/>Po dokončení auditu se všechny položky databáze, které nebyly aktualizovány (nebo vloženy), považují za neexistující. • <code>current</code> atribut pro tuto položku je nastaven na <i>n</i> a je generován záznam změny _ log.<br/><br/>Takže můžeme zjistit, zda je něco nainstalováno - aktuální sloupec je <i>y</i>.<br/><br/>Můžeme určit, kdy něco bylo původně zjištěno - <i>První _ vidět</i>.<br/><br/>Můžeme zjistit, zda něco bylo nainstalováno po počátečním auditu - poprvé viděn bude jiný v tabulce komponenty a zařízení.<br/><br/>Můžeme zjistit, zda něco není v současné době nainstalován, ale dříve byl - proud = <i>n</i>.<br/><br/>Můžeme určit, kdy jsme naposledy zachytili položku - naposledy viděnou.<br/><br/>V každém daném bodě můžeme zjistit, co bylo na systému - pomocí tabulky audit _ log a výběrem příslušných komponentů na základě first _ see a last _ see.<br/><br/>Každý oddíl a jeho odpovídající klíčové sloupce jsou níže.<br/><br/>POZNÁMKA - Níže jsou uvedeny některé výjimky.<br/><br/>* 1 - Pro síťové karty, pokud je počítač VMware Esx stroj, používá také sloupy net _ index a připojení.<br/><br/>* 2 - Pro oddíly, f počítač je AIX stroj, používáme název oddílu.';

$GLOBALS["lang"]['Open-AudIT is a program designed to track and report on your IT and related assets details and configuration. Open-AudIT can tell <i>What is On Your Network?</i>, how it is configured and if there have been any changes. Open-AudIT delivers a sleek, flexible and easy to use platform for device discovery, IT auditing and inventory management automation straight out of the box.'] = 'Open- Audit je program určený ke sledování a hlášení Vašich IT a souvisejících údajů o aktivech a konfiguraci. Open- Audit to pozná <i>Co je na vaší síti?</i>, jak je konfigurován a pokud došlo ke změnám. Open- Audit nabízí elegantní, flexibilní a snadno ovladatelnou platformu pro objevování zařízení, IT audit a automatizaci řízení zásob přímo z krabice.';

$GLOBALS["lang"]['Open-AudIT makes it easy to edit the attributes of multiple devices at once.'] = 'Open- Aud IT usnadňuje editaci atributů více zařízení najednou.';

$GLOBALS["lang"]['Open-AudIT needs specific directory permissions to be able to create files, upload results, etc. Please set as below.'] = 'Open- Aud IT potřebuje konkrétní povolení adresáře, aby bylo možné vytvářet soubory, nahrávat výsledky atd. Nastavte prosím níže.';

$GLOBALS["lang"]['Open-AudIT provides many built-in queries and makes it simple to create your own.'] = 'Open- Audit poskytuje mnoho built- v dotazech a usnadňuje vytvoření vlastního.';

$GLOBALS["lang"]['Open-AudIT ships with inbuilt roles for admin, org_admin and user.<br><br>Generally, a user who is an administrator of the Open-AudIT application itself should have admin and possible org_admin roles.<br><br>A user can have multiple roles. The permission will be applied at the most permissive level - IE, if a user has the roles of user and org_admin, they will be able to create locations because org_admin grants this permission, even though the user role does not.<br><br>The admin role allows access to collections such as configuration, database, groups, ldap servers, logs, queries and roles. Global items that affect the entire application.<br><br>The org_admin role usually allows create, read, update and delete actions for any collection that contains the org_id column. Virtually all data except some of the collections mentioned above will contain an <code>org_id</code> column.<br><br>The user role generally allows read only access to all items with an org_id column.'] = 'Open- Aud IT lodě s vestavěnými rolemi pro admin, org _ admin a uživatele.<br/><br/>Obecně platí, že uživatel, který je správcem aplikace Open- AudiT sám, by měl mít admin a možné role org _ admin.<br/><br/>Uživatel může mít více rolí. Povolení bude uplatněno na nejvyšší přípustné úrovni - IE, pokud má uživatel role uživatele a org _ admin, budou moci vytvářet lokality, protože org _ admin toto svolení uděluje, i když uživatelská role ne.<br/><br/>Admin role umožňuje přístup ke sbírkám, jako je konfigurace, databáze, skupiny, ldap servery, protokoly, dotazy a role. Celkové položky, které ovlivňují celou aplikaci.<br/><br/>Funkce org _ admin obvykle umožňuje vytvářet, číst, aktualizovat a mazat akce pro každou sbírku, která obsahuje sloupec org _ id. Prakticky všechny údaje kromě některých výše uvedených sbírek budou obsahovat <code>org_id</code> sloupec.<br/><br/>Uživatelská role obecně umožňuje číst pouze přístup ke všem položkám se sloupcem org _ id.';

$GLOBALS["lang"]['Open-AudIT ships with inbuilt roles for admin, org_admin and user.<br><br>Generally, a user who is an administrator of the Open-AudIT application itself should have admin and possible org_admin roles.<br><br>A user can have multiple roles. The permission will be applied at the most permissive level - IE, if a user has the roles of user and org_admin, they will be able to create locations because org_admin grants this permission, even though the user role does not.<br><br>The admin role allows access to collections such as configuration, database, groups, ldap servers, logs, queries and roles. Global items that affect the entire application.<br><br>The org_admin role usually allows create, read, update and delete actions for any collection that contains the org_id column. Virtually all data except some of the collections mentioned above will contain an org_id column.<br><br>The user role generally allows read only access to all items with an org_id column.'] = 'Open- Aud IT lodě s vestavěnými rolemi pro admin, org _ admin a uživatele.<br/><br/>Obecně platí, že uživatel, který je správcem aplikace Open- AudiT sám, by měl mít admin a možné role org _ admin.<br/><br/>Uživatel může mít více rolí. Povolení bude uplatněno na nejvyšší přípustné úrovni - IE, pokud má uživatel role uživatele a org _ admin, budou moci vytvářet lokality, protože org _ admin toto svolení uděluje, i když uživatelská role ne.<br/><br/>Admin role umožňuje přístup ke sbírkám, jako je konfigurace, databáze, skupiny, ldap servery, protokoly, dotazy a role. Celkové položky, které ovlivňují celou aplikaci.<br/><br/>Funkce org _ admin obvykle umožňuje vytvářet, číst, aktualizovat a mazat akce pro každou sbírku, která obsahuje sloupec org _ id. Prakticky všechna data kromě některých výše uvedených sbírek budou obsahovat sloupec org _ id.<br/><br/>Uživatelská role obecně umožňuje číst pouze přístup ke všem položkám se sloupcem org _ id.';

$GLOBALS["lang"]['Open-AudIT ships with several pre-configured Dashboards. If you are a Professional user, you can select between two of these and set it as your default page when you logon. If you are an Enterprise user, you can not only select between the five preconfigured Dashboards, but you also have the ability to create your own.'] = 'Open- Audit lodí s několika přednastavenými Dashboardy. Pokud jste profesionální uživatel, můžete si vybrat mezi dvěma z nich a nastavit ji jako výchozí stránku při přihlášení. Pokud jste uživatel Enterprise, můžete nejen vybrat mezi pěti přednastavených Dashboardů, ale máte také možnost vytvořit vlastní.';

$GLOBALS["lang"]['Open-AudIT should be installed on 64bit Windows <strong>Server</strong> systems only. Windows 10 and Windows 11 are <strong>not</strong> supported.'] = 'Open- Audit by měl být nainstalován na 64bitových Windows <strong>Server</strong> pouze systémy. Windows 10 a Windows 11 jsou <strong>ne</strong> podporováno.';

$GLOBALS["lang"]['Open-AudIT uses Nmap in its Discovery function. Nmap probes devices for open ports. Devices ideally should respond with open for working ports. Devices often do not respond with this. The varying responses are detailed below.'] = 'Open- Audit používá Nmap ve své funkci Discovery. Nmap sondy zařízení pro otevřené porty. Přístroje by měly v ideálním případě reagovat s otevřeným přístupem pro pracovní porty. Zařízení s tím často nereagují. Různé odpovědi jsou uvedeny níže.';

$GLOBALS["lang"]['Open-AudIT uses Nmap in its Discovery function. Without Nmap, Open-AudIT will not function correctly. Every Open-AudIT install assumes Nmap is installed and will also test for it on the Discovery web pages. More information about Open-AudIT and Nmap is available here'] = 'Open- Audit používá Nmap ve své funkci Discovery. Bez Nmap nebude Open- Audit fungovat správně. Každá instalace Open- AudiT předpokládá, že je nainstalována Nmap a bude ji také testovat na webových stránkách Discovery. Více informací o Open- Auditu a Nmapu naleznete zde';

$GLOBALS["lang"]['Open-AudIT uses Nmap in its Discovery function. Without Nmap, Open-AudIT will not function correctly. Every Open-AudIT install assumes Nmap is installed and will test for it on the Discovery web pages.'] = 'Open- Audit používá Nmap ve své funkci Discovery. Bez Nmap nebude Open- Audit fungovat správně. Každá instalace Open- AudiT předpokládá, že je nainstalována Nmap a testuje ji na webových stránkách Discovery.';

$GLOBALS["lang"]['Open-AudIT uses credentials to access your devices. These are encrypted and stored, just as you would expect.'] = 'Open- Aud IT využívá pověření k přístupu k vašim zařízením. Tyhle jsou zašifrované a uložené, jak byste očekávali.';

$GLOBALS["lang"]['Open-AudIT was written by an English speaking Australian. Everything in the application uses English wording. However Open-AudIT has always supported multiple languages for display. These translations are not always correct, because the developers do not natively speak the language of every translation offered.<br><br>What can you do if something is not correct in the translation?'] = 'Open- Audit byl napsán anglicky mluvícím Australanem. Vše v aplikaci používá anglickou formulaci. Nicméně Open- Audit vždy podporoval více jazyků pro zobrazení. Tyto překlady nejsou vždy správné, protože vývojáři nemluví nativně jazykem každého nabízeného překladu.<br/><br/>Co můžete dělat, pokud něco není správně v překladu?';

$GLOBALS["lang"]['OpenLDAP'] = 'OpenLDAP';

$GLOBALS["lang"]['OpenScap is Installed'] = 'OpenScap je nainstalován';

$GLOBALS["lang"]['Opening a Support Ticket?'] = 'Otevírat podpůrný lístek?';

$GLOBALS["lang"]['openldap_user_dn'] = 'Uživatel Openldap Dn';

$GLOBALS["lang"]['Openldap User Dn'] = 'Uživatel Openldap Dn';

$GLOBALS["lang"]['openldap_user_membership_attribute'] = 'Atribut uživatele Openldap';

$GLOBALS["lang"]['Openldap User Membership Attribute'] = 'Atribut uživatele Openldap';

$GLOBALS["lang"]['open|filtered'] = 'Otevřené 124; filtrované';

$GLOBALS["lang"]['Open|filtered'] = 'Otevřené 124; filtrované';

$GLOBALS["lang"]['Operating System'] = 'Provozní systém';

$GLOBALS["lang"]['Operating System Family Contains'] = 'Obsahuje rodinu operačního systému';

$GLOBALS["lang"]['Operating Systems'] = 'Provozní systémy';

$GLOBALS["lang"]['Operators'] = 'Provozovatelé';

$GLOBALS["lang"]['optical'] = 'Optické';

$GLOBALS["lang"]['Optical'] = 'Optické';

$GLOBALS["lang"]['Optimized'] = 'Optimalizováno';

$GLOBALS["lang"]['Option #1 - Change the data'] = 'Možnost # 1 - Změnit data';

$GLOBALS["lang"]['Option #2 - Change the translation file'] = 'Možnost # 2 - Změna překladu souboru';

$GLOBALS["lang"]['Optional Agent Based Auditing'] = 'Nepovinné auditování na základě agenta';

$GLOBALS["lang"]['Optional version as audited by Open-AudIT. Use the percent sign % as a wildcard.'] = 'Volitelná verze, kterou ověřil Open- Audit. Použijte procento znaménka% jako divokou kartu.';

$GLOBALS["lang"]['options'] = 'Možnosti';

$GLOBALS["lang"]['Options'] = 'Možnosti';

$GLOBALS["lang"]['Options, options, options'] = 'Možnosti, možnosti, možnosti';

$GLOBALS["lang"]['Or'] = 'nebo';

$GLOBALS["lang"]['Or select from the below fields.'] = 'Nebo vyberte z níže uvedených polí.';

$GLOBALS["lang"]['org_descendants'] = 'Org Descendants';

$GLOBALS["lang"]['Org Descendants'] = 'Org Descendants';

$GLOBALS["lang"]['org_id'] = 'ID orgánu';

$GLOBALS["lang"]['Org ID'] = 'ID orgánu';

$GLOBALS["lang"]['Organisation'] = 'Organizace';

$GLOBALS["lang"]['organisation'] = 'Organizace';

$GLOBALS["lang"]['Organisation Descendants'] = 'Organizace';

$GLOBALS["lang"]['Organisations'] = 'Organizace';

$GLOBALS["lang"]['Organisations can extend and enhance the level of detail that is stored against every discovered device using custom fields and the open core allows for easy integration into CMDB, event management and ticketing systems.'] = 'Organizace mohou rozšířit a zvýšit úroveň detailů, které jsou uloženy proti každému nalezenému zařízení pomocí vlastních polí a otevřené jádro umožňuje snadnou integraci do CMDB, správy událostí a ticketingových systémů.';

$GLOBALS["lang"]['orgs'] = 'Orgy';

$GLOBALS["lang"]['Orgs'] = 'Orgy';

$GLOBALS["lang"]['Orgs Name'] = 'Název orgánů';

$GLOBALS["lang"]['Orgs in Open-AudIT are a key item. A user has a primary Org as well as a list of Orgs they can access. A user combines this with a list of assigned roles that define what actions they can take on items assigned to the Orgs they have access to. The combination of a users <i>orgs</i> and <i>roles</i> define what they can and cannot do within Open-AudIT.<br><br>Most items in Open-AudIT are assigned to an Org. Devices, Locations, Networks, etc, etc.<br><br>Orgs can have child Orgs. Think of an organisational chart (tree) structure. If a user has access to a specific Org, most of the time (not always) they also have access to that Orgs descendants.'] = 'Orgy v Open- Audit jsou klíčová položka. Uživatel má primární Org, stejně jako seznam Orgů, ke kterým může přístup. Uživatel to kombinuje se seznamem přiřazených rolí, které definují, jaké akce mohou přijmout na položky přidělené k Orgs, ke kterým mají přístup. Kombinace uživatelů <i>orgy</i> a <i>role</i> definujte, co mohou a nemohou dělat v rámci Open- Audit.<br/><br/>Většina položek v Open- Audit jsou přiřazeny k Org. Zařízení, umístění, sítě, atd.<br/><br/>Orgové můžou mít děti. Představte si organizační strukturu grafu (stromu). Pokud má uživatel přístup k určitému Orgu, většinou (ne vždy) má přístup i k potomkům tohoto Orgu.';

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

$GLOBALS["lang"]['os_display_version'] = 'Verze displeje Os';

$GLOBALS["lang"]['Os Display Version'] = 'Verze displeje Os';

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

$GLOBALS["lang"]['Other than that restriction, you are free to select attributes as required. It is a good idea to use the menu'] = 'Kromě tohoto omezení můžete dle potřeby zvolit atributy. Je to dobrý nápad použít menu.';

$GLOBALS["lang"]['Others'] = 'Ostatní';

$GLOBALS["lang"]['Our default Integration also enables a discovery on any externally supplied devices. So we ship a default discovery for the Default Integration out of the box. These use the default matching rules, but also enable matching on IP address.'] = 'Naše výchozí integrace také umožňuje objev na jakýchkoli externě dodávaných zařízeních. Takže posíláme výchozí objev pro výchozí integraci z krabice. Používají výchozí pravidla pro porovnávání, ale také umožňují porovnávání na IP adrese.';

$GLOBALS["lang"]['Our examples will use the <i>type</i> column.'] = 'Naše příklady budou používat <i>typ</i> sloupec.';

$GLOBALS["lang"]['Our framework uploads files here for processing, then deletes them. Think submitted audit results, etc.'] = 'Náš rámec nahrává soubory pro zpracování a pak je vymaže. Zamyslete se nad předloženými výsledky auditu atd.';

$GLOBALS["lang"]['Our goal with the initial integrations release was specifically for NMIS to Open-AudIT integration to <i>just work</i>. If you are using the programs on Linux, you can literally click a single button to execute the integration. Nothing more is required. Having said that, the integration itself is extremely configurable - so if something is not to your preference, it can easily be changed.'] = 'Naším cílem s počáteční integrace vydání bylo konkrétně pro NMIS Open- Audit integrace <i>Jen práce.</i>. Pokud používáte programy na Linuxu, můžete doslova kliknout na jedno tlačítko pro provedení integrace. Nic víc není potřeba. Poté, co řekl, že integrace sama o sobě je extrémně konfigurovatelné - takže pokud něco není podle vašich preferencí, lze to snadno změnit.';

$GLOBALS["lang"]['Our new feature called Vulnerabilities gives you the ability to quickly determine if any devices are affected by any CVE (Common Vulnerability Exposure) - but how?<br><br>FirstWave constantly consumes the output from the Nist NVD feed. We take this and apply a few restrictions, then extract the affected programs and build a SQL query for reporting. Your Open-AudIT instance reaches out to FirstWave and requests any new vulnerabilities on a regular basis. When it receives a new vulnerability record, it is run against the database and the result stored. Each time a device is processed, all matching vulnerabilities are again executed and the result stored. This means when viewing a vulnerability list, we do not need to calculate all affected devices - we already have the result. When you view an individual vulnerability record, we do indeed recalculate the result for this singular vulnerability.<br><br>So, you are always up to date!<br><br>In addition to this, we also calculate the result of all vulnerabilities for all devices daily (usually at a quiet time, say 2am).<br><br>In your instance of Open-AudIT, we allow you to select which vendors you care about. i.e. there is no use retrieving vulnerability records from a vendor whose software you do not use or have installed. By default, our vendor list is Adobe, Apple, Cisco, Google, Microsoft, Mozilla, and Redhat.<br><br>This all sounds very simple, but behind the scenes a <b>lot</b> is going on. For instance, the CVE record contains a list of affected software - but those software names do not match what we receive when we audit a computer. A good example is Apache. Typically, a CVE record will say the affected software is http_server. In reality, this appears as apache2 (Ubuntu), httpd (Redhat), Apache HTTP Server (Windows) - and others. So, we have to first determine what is the actual name of the program we receive when we ask a computer, and there may be multiple names. After that we must parse the CVE record and create a matching SQL statement. Allowing for multiple program names as above, and multiple versions, version ranges, and even multiple different pieces of software (an example is Thunderbird and Firefox in a single CVE). And your instance of Open-AudIT must take this and apply Orgs filtering as well. And that is just a single CVE. What about determining which CVEs you have and do not have? What about adding a vendor to the list later? So many things to consider!<br><br>As well as the usual reporting, we also have a few new widgets available for Dashboards, based on Vulnerabilities data.'] = 'Naše nová funkce s názvem Zranitelnost vám dává možnost rychle určit, zda nějaká zařízení jsou ovlivněny jakýmkoliv CVE (společná zranitelnost expozice) - ale jak?<br/><br/>FirstWave neustále spotřebovává výstup z kanálu Nist NVD. Vezmeme to a aplikujeme několik omezení, pak extrahovat postižené programy a vytvořit SQL dotaz pro hlášení. Váš Open- Audit instance osloví FirstWave a pravidelně požaduje nové slabiny. Když obdrží nový záznam zranitelnosti, běží proti databázi a uloženým výsledkům. Pokaždé, když je zařízení zpracováno, všechny odpovídající zranitelnosti jsou opět provedeny a výsledek uložen. To znamená, že při prohlížení seznamu zranitelnosti nemusíme počítat všechna postižená zařízení - výsledek už máme. Když se podíváte na individuální záznam zranitelnosti, skutečně přepočítáme výsledek této jedinečné zranitelnosti.<br/><br/>Takže, vy jste vždy aktuální!<br/><br/>Kromě toho, jsme také vypočítat výsledek všech zranitelnosti pro všechny zařízení denně (obvykle v tichém čase, řekněme 2am).<br/><br/>Ve vašem případě Open- Audit vám dovolujeme vybrat, na kterých prodejcích vám záleží. To znamená, že nemá smysl získávat záznamy o zranitelnosti od prodejce, jehož software nepoužíváte nebo jste nainstalovali. Výchozí je náš seznam prodejců Adobe, Apple, Cisco, Google, Microsoft, Mozilla a Redhat.<br/><br/>To vše zní velmi jednoduše, ale v zákulisí <b>lot</b> se děje. Například záznam CVE obsahuje seznam postiženého softwaru - ale tyto názvy softwaru neodpovídají tomu, co dostáváme při auditu počítače. Dobrým příkladem je Apache. Obvykle bude záznam CVE říkat, že ovlivněný software je http _ server. Ve skutečnosti se to jeví jako apache2 (Ubuntu), httpd (Redhat), Apache HTTP Server (Windows) - a další. Takže nejdřív musíme určit, jaké je skutečné jméno programu, který dostáváme, když se zeptáme počítače, a může tam být více jmen. Poté musíme zpracovat CVE záznam a vytvořit odpovídající SQL prohlášení. Umožňuje více jmen programů, jak je uvedeno výše, a více verzí, rozsah verzí, a dokonce více různých kousků softwaru (příklad je Thunderbird a Firefox v jednom CVE). A váš příklad Open- Audit to musí vzít a použít filtrování Orgů. A to je jen jedno CVE. A co určení, které CVEs máte a nemáte? A co přidat prodejce na seznam později? Tolik věcí k zvážení!<br/><br/>Stejně jako obvyklé hlášení, máme také několik nových widgety k dispozici pro Dashboards, na základě údajů o zranitelnosti.';

$GLOBALS["lang"]['Our timeout for a SSH response'] = 'Náš timeout pro SSH odpověď';

$GLOBALS["lang"]['Our timeout for a WMI response'] = 'Náš timeout pro odpověď WMI';

$GLOBALS["lang"]['Our timeout for an SNMP response'] = 'Náš timeout pro SNMP odpověď';

$GLOBALS["lang"]['Our timeout for an audit script response'] = 'Náš timeout pro auditní skript odpověď';

$GLOBALS["lang"]['output'] = 'Výstup';

$GLOBALS["lang"]['Output'] = 'Výstup';

$GLOBALS["lang"]['outputs'] = 'Výstupy';

$GLOBALS["lang"]['Outputs'] = 'Výstupy';

$GLOBALS["lang"]['Overall severity score (0–10).'] = 'Celkové skóre závažnosti (0- 10).';

$GLOBALS["lang"]['overwrite'] = 'Přepsat';

$GLOBALS["lang"]['Overwrite'] = 'Přepsat';

$GLOBALS["lang"]['owner'] = 'Majitel';

$GLOBALS["lang"]['Owner'] = 'Majitel';

$GLOBALS["lang"]['PAExec is a freely-redistributable re-implementation of SysInternal/Microsofts popular PsExec program.  PAExec aims to be a drop in replacement for PsExec, so the command-line usage is identical, with additional options also supported.  This work was originally inspired by Talha Tariqs RemCom.'] = 'PAExec je na volné noze-renovovatelný reimplementace SysInternal / Microsofts populární PsExec program. PAExec se snaží o pokles náhrady za PSExec, takže využití velitelské linky je identické, s dalšími možnostmi také podporováno. Tuto práci původně inspiroval Talha Tariqs RemCom.';

$GLOBALS["lang"]['PHP'] = 'PHP';

$GLOBALS["lang"]['POD'] = 'POD';

$GLOBALS["lang"]['POSTing data'] = 'POSTING data';

$GLOBALS["lang"]['Package'] = 'Balení';

$GLOBALS["lang"]['packages'] = 'Balení';

$GLOBALS["lang"]['Packages'] = 'Balení';

$GLOBALS["lang"]['Packages are used to report on things such as <i>banned software</i>, AntiVirus on servers, etc.<br><br>Open-AudIT provides widgets that build upon also supplied repots to detemine the status of antivirus, firewall and other software.'] = 'Balíčky se používají k podávání zpráv o věcech, jako je <i>zakázaný software</i>, AntiVirus na serverech, atd.<br/><br/>Open- Audit poskytuje widgety, které staví na také dodané repoty, aby se zabránilo stavu antiviru, firewall a další software.';

$GLOBALS["lang"]['pagefile'] = 'Pagefile';

$GLOBALS["lang"]['Pagefile'] = 'Pagefile';

$GLOBALS["lang"]['Pakistan'] = 'Pákistán';

$GLOBALS["lang"]['Palau'] = 'Palau';

$GLOBALS["lang"]['Palestinian Territory'] = 'Palestinské území';

$GLOBALS["lang"]['Panama'] = 'Panama';

$GLOBALS["lang"]['Papua New Guinea'] = 'Papua-Nová Guinea';

$GLOBALS["lang"]['Paraguay'] = 'Paraguay';

$GLOBALS["lang"]['Parameters'] = 'Parametry';

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

$GLOBALS["lang"]['Password'] = 'Heslo';

$GLOBALS["lang"]['password'] = 'Heslo';

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

$GLOBALS["lang"]['Performed'] = 'Vyrobeno';

$GLOBALS["lang"]['Permission'] = 'Povolení';

$GLOBALS["lang"]['Permission Required'] = 'Požadované povolení';

$GLOBALS["lang"]['permissions'] = 'Povolení';

$GLOBALS["lang"]['Permissions'] = 'Povolení';

$GLOBALS["lang"]['Persian'] = 'Perský';

$GLOBALS["lang"]['Personal Area Network'] = 'Síť osobní oblasti';

$GLOBALS["lang"]['Personal area network'] = 'Síť osobní oblasti';

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

$GLOBALS["lang"]['Pie charts must return name or my_name, description or my_description and count.'] = 'Pie grafy musí vrátit jméno nebo mé jméno, popis nebo můj _ popis a počítat.';

$GLOBALS["lang"]['ping'] = 'Ping';

$GLOBALS["lang"]['Ping'] = 'Ping';

$GLOBALS["lang"]['Ping Target'] = 'Ping cíl';

$GLOBALS["lang"]['Pitcairn Islands'] = 'Pitcairnovy ostrovy';

$GLOBALS["lang"]['placement'] = 'Umístění';

$GLOBALS["lang"]['Placement'] = 'Umístění';

$GLOBALS["lang"]['Plan and conduct internal audits'] = 'Plán a provádění interních auditů';

$GLOBALS["lang"]['Please have an Open-AudIT administrator logon and upgrade the database.'] = 'Prosím, mějte Open- Audit Administrátor Logon a upgrade databáze.';

$GLOBALS["lang"]['Please log in and change these ASAP.'] = 'Prosím přihlaste se a vyměňte je co nejdříve.';

$GLOBALS["lang"]['Please log on to the Open-AudIT Server (either Windows or Linux) and run <code>nslookup IP_ADDRESS_OF_TARGET</code> in the command prompt or shell. It must be able to resolve the IP to a name.'] = 'Prosím přihlaste se na Open- Audit Server (buď Windows nebo Linux) a spusťte <code>nslookup IP_ADDRESS_OF_TARGET</code> v příkazovém příkazu nebo shellu. Musí být schopen vyřešit IP na jméno.';

$GLOBALS["lang"]['Please note that the select box will override the text input box.'] = 'Vezměte prosím na vědomí, že zvolené pole přepíše textové vstupní pole.';

$GLOBALS["lang"]['Please see the FAQ'] = 'Prosím, podívejte se na FAQ';

$GLOBALS["lang"]['Please send all three files to your support contact at Opmantek and describe your issue.'] = 'Prosím, pošlete všechny tři soubory do vašeho podpůrného kontaktu v Opmantku a popište svůj problém.';

$GLOBALS["lang"]['Please set using'] = 'Prosím nastavte pomocí';

$GLOBALS["lang"]['Please visit the homepage at'] = 'Navštivte prosím domovskou stránku na';

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

$GLOBALS["lang"]['Polish'] = 'Polský';

$GLOBALS["lang"]['Polite'] = 'Politní';

$GLOBALS["lang"]['Populate the with values provided below:'] = 'Zveřejněte níže uvedené hodnoty:';

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

$GLOBALS["lang"]['Portuguese'] = 'Portugalština';

$GLOBALS["lang"]['Portuguese (Brazil)'] = 'Portugalština (Brazílie)';

$GLOBALS["lang"]['position'] = 'Poloha';

$GLOBALS["lang"]['Position'] = 'Poloha';

$GLOBALS["lang"]['Post-Certification'] = 'Post- certifikace';

$GLOBALS["lang"]['postcode'] = 'PSČ';

$GLOBALS["lang"]['Postcode'] = 'PSČ';

$GLOBALS["lang"]['power_circuit'] = 'Napájecí obvod';

$GLOBALS["lang"]['Power Circuit'] = 'Napájecí obvod';

$GLOBALS["lang"]['power_sockets'] = 'Power Sockets';

$GLOBALS["lang"]['Power Sockets'] = 'Power Sockets';

$GLOBALS["lang"]['Predictable'] = 'Předvídatelné';

$GLOBALS["lang"]['Preferences'] = 'Předvolby';

$GLOBALS["lang"]['Prepare for recertification every 3 years'] = 'Připravte se na recertifikaci každé 3 roky';

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

$GLOBALS["lang"]['Privacy Protocol'] = 'Protokol o ochraně soukromí';

$GLOBALS["lang"]['privileges_required'] = 'Požadované výsady';

$GLOBALS["lang"]['Privileges Required'] = 'Požadované výsady';

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

$GLOBALS["lang"]['Product Name Match from CPE: '] = 'Název výrobku Shoda z CPE: ';

$GLOBALS["lang"]['products'] = 'Produkty';

$GLOBALS["lang"]['Products'] = 'Produkty';

$GLOBALS["lang"]['Professional'] = 'Profesionální';

$GLOBALS["lang"]['profile'] = 'Profil';

$GLOBALS["lang"]['Profile'] = 'Profil';

$GLOBALS["lang"]['program'] = 'Program';

$GLOBALS["lang"]['Program'] = 'Program';

$GLOBALS["lang"]['Properties'] = 'Vlastnosti';

$GLOBALS["lang"]['Proprietary. If you want to modify HighCharts you may require a'] = 'Proprietární. Chcete-li změnit HighCharts můžete požadovat';

$GLOBALS["lang"]['Protects confidentiality, integrity, and availability of information'] = 'Ochrana důvěrnosti, integrity a dostupnosti informací';

$GLOBALS["lang"]['protocol'] = 'Protokol';

$GLOBALS["lang"]['Protocol'] = 'Protokol';

$GLOBALS["lang"]['Provide a description and select and expires duration.'] = 'Uveďte popis a vyberte a vyprší doba trvání.';

$GLOBALS["lang"]['Provide a name - we humbly recommand Open-AudIT &#128512;, but you can name it anything you like.<br>From the Open-AudIT form, copy the value for the <i>Redirect URI</i> field and paste it into the <i>Sign-in redirect URIs</i> field in OKTA.<br>The Sign-out redirect URIs is optional, but if you want you can use open-audit/index.php/logout with your Open-AudIT servers http address, as per the screenshot.<br>Normally your Open-AudIT URL will look something like'] = 'Poskytněte jméno - pokorně doporučujeme a Open- Audit, ale můžete ho pojmenovat, jak chcete.<br/>Z Open- Audit formuláře zkopírujte hodnotu pro <i>Přesměrovat URI</i> pole a vložit do <i>Sign- in redirect URI</i> Pole v OKTA.<br/>Sign- out přesměrování URI je volitelné, ale pokud chcete, můžete použít open-audit / index. php / logout s Open- Audit servery http adresou, podle screenshotu.<br/>Normálně Open- Audit URL bude vypadat nějak jako';

$GLOBALS["lang"]['Provided you have the correct credentials, Device Seed Discovery works as follows'] = 'Za předpokladu, že máte správné pověření, Zařízení Seed Discovery funguje takto:';

$GLOBALS["lang"]['provider'] = 'Poskytovatel';

$GLOBALS["lang"]['Provider'] = 'Poskytovatel';

$GLOBALS["lang"]['published'] = 'Zveřejněno';

$GLOBALS["lang"]['Published'] = 'Zveřejněno';

$GLOBALS["lang"]['published_date'] = 'Datum zveřejnění';

$GLOBALS["lang"]['Published Date'] = 'Datum zveřejnění';

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

$GLOBALS["lang"]['Queries are an important part of Open-AudIT. They are what enables you to get meaningful information from all the device data you have discovered. Along with summaries and groups, they provide a powerful mechanism to extract crucial information.'] = 'Dotazy jsou důležitou součástí Open- Audit. To je to, co vám umožní získat smysluplné informace ze všech dat zařízení, které jste objevili. Spolu se souhrny a skupinami poskytují silný mechanismus pro získání klíčových informací.';

$GLOBALS["lang"]['Queries for Groups should select only the'] = 'Dotazy pro skupiny by měly zvolit pouze';

$GLOBALS["lang"]['Query'] = 'Dotaz';

$GLOBALS["lang"]['Query this Active Directory attribute first to determine the users work unit.'] = 'Dotaz na tento atribut Active Directory jako první pro určení pracovní jednotky uživatelů.';

$GLOBALS["lang"]['Query this Active Directory attribute second to determine the users work unit.'] = 'Dotaz na tento atribut Active Directory druhý pro určení uživatelských pracovních jednotek.';

$GLOBALS["lang"]['queue'] = 'Fronta';

$GLOBALS["lang"]['Queue'] = 'Fronta';

$GLOBALS["lang"]['Queue Limit'] = 'Queue Limit';

$GLOBALS["lang"]['Queued Device Audits'] = 'Audity Queued Device';

$GLOBALS["lang"]['Queued IP Scans'] = 'Queued IP Scans';

$GLOBALS["lang"]['Queued Items'] = 'Kvótové položky';

$GLOBALS["lang"]['RBAC for Active Directory and openLDAP'] = 'RBAC pro Active Directory a OpenLDAP';

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

$GLOBALS["lang"]['Rack Management and Reporting'] = 'Správa a podávání zpráv';

$GLOBALS["lang"]['Racks'] = 'Uzávěry';

$GLOBALS["lang"]['racks'] = 'Uzávěry';

$GLOBALS["lang"]['radio'] = 'Rádio';

$GLOBALS["lang"]['Radio'] = 'Rádio';

$GLOBALS["lang"]['Radio MAC'] = 'Rádio MAC';

$GLOBALS["lang"]['rationale'] = 'Odvolání';

$GLOBALS["lang"]['Rationale'] = 'Odvolání';

$GLOBALS["lang"]['raw'] = 'Surové';

$GLOBALS["lang"]['Raw'] = 'Surové';

$GLOBALS["lang"]['read'] = 'Čtení';

$GLOBALS["lang"]['Read'] = 'Čtení';

$GLOBALS["lang"]['Read our online documentation on the Open-AudIT Wiki.'] = 'Přečtěte si naši online dokumentaci na Open- Audit Wiki.';

$GLOBALS["lang"]['Read through the log file at'] = 'Přečtěte si soubor záznamu na';

$GLOBALS["lang"]['Received'] = 'Přijato';

$GLOBALS["lang"]['Recently we have been asked the question - do you consider Open-AudIT more secure than other similar programs? As with most things, the answer is <i>it depends</i>.<br><br>Open-AudIT can be operated in such a way as to be extremely secure. But as usual with computer-based security, the more secure you wish to make something, the more inconvenient it becomes to use. The old phrase <i>the most secure computer is one that is turned off and in the cupboard<i> comes to mind.<br><br>Below we will outline some options that can be used with Open-AudIT that will increase security. Like most items within Open-AudIT, these are options and not mandatory. How far you take security is up to you.'] = 'Nedávno jsme dostali otázku - považujete Open- Audit za bezpečnější než jiné podobné programy? Stejně jako u většiny věcí, odpověď je <i>To záleží.</i>.<br/><br/>Open- Aud IT může být provozováno tak, aby bylo extrémně bezpečné. Ale jako obvykle s počítačovým zabezpečením, čím bezpečnější si přejete něco udělat, tím více se stane nepohodlnějším. Stará fráze <i>nejbezpečnější počítač je ten, který je vypnutý a ve skříni<i> Napadá mě to.<br/><br/>Níže budeme nastínit některé možnosti, které mohou být použity s Open- Audit, které zvýší bezpečnost. Stejně jako většina položek v rámci Open- Audit, to jsou možnosti a nejsou povinné. Jak daleko zajdete s ochrankou, je na vás.</i></i>';

$GLOBALS["lang"]['Recertification:</strong> Required every three years'] = 'Obnovení: Vyžaduje se každé tři roky';

$GLOBALS["lang"]['Red Query'] = 'Červený dotaz';

$GLOBALS["lang"]['Redirect URI'] = 'Přesměrovat URI';

$GLOBALS["lang"]['redirect_uri'] = 'Přesměrovat Uri';

$GLOBALS["lang"]['Redirect Uri'] = 'Přesměrovat Uri';

$GLOBALS["lang"]['Reduces risk of data breaches and cyber threats'] = 'Snižuje riziko narušení údajů a kybernetických hrozeb';

$GLOBALS["lang"]['references'] = 'Odkazy';

$GLOBALS["lang"]['References'] = 'Odkazy';

$GLOBALS["lang"]['region'] = 'Oblast';

$GLOBALS["lang"]['Region'] = 'Oblast';

$GLOBALS["lang"]['registered_user'] = 'Registrovaný uživatel';

$GLOBALS["lang"]['Registered User'] = 'Registrovaný uživatel';

$GLOBALS["lang"]['Rejected'] = 'Zamítnuto';

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

$GLOBALS["lang"]['Repeat until you have a completely discovered and audited Windows PC.'] = 'Opakujte, dokud nebudete mít zcela objevený a auditovaný Windows PC.';

$GLOBALS["lang"]['Report'] = 'Zpráva';

$GLOBALS["lang"]['Report on your devices, networks and more'] = 'Hlášení o vašich zařízeních, sítích a dalších';

$GLOBALS["lang"]['reportable'] = 'Oznamováno';

$GLOBALS["lang"]['Reportable'] = 'Oznamováno';

$GLOBALS["lang"]['Reports'] = 'Zprávy';

$GLOBALS["lang"]['request'] = 'Žádost';

$GLOBALS["lang"]['Request'] = 'Žádost';

$GLOBALS["lang"]['Request Method'] = 'Metoda žádosti';

$GLOBALS["lang"]['Request Vulnerability'] = 'Požadavek zranitelnosti';

$GLOBALS["lang"]['Request a Specific CVE'] = 'Žádost o zvláštní CVE';

$GLOBALS["lang"]['requested'] = 'Požadováno';

$GLOBALS["lang"]['Requested'] = 'Požadováno';

$GLOBALS["lang"]['require_port'] = 'Vyžadovat přístav';

$GLOBALS["lang"]['Require Port'] = 'Vyžadovat přístav';

$GLOBALS["lang"]['Require an Open Port'] = 'Vyžadovat otevřený port';

$GLOBALS["lang"]['Required'] = 'Požadováno';

$GLOBALS["lang"]['Required AWS user permissions'] = 'Požadovaná oprávnění uživatelů AWS';

$GLOBALS["lang"]['Required Fields'] = 'Požadovaná pole';

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

$GLOBALS["lang"]['Restore my Licenses'] = 'Obnovit mé licence';

$GLOBALS["lang"]['Restrict to Private'] = 'Omezení na soukromé';

$GLOBALS["lang"]['Restrict to Subnet'] = 'Omezení na subnet';

$GLOBALS["lang"]['result'] = 'Výsledek';

$GLOBALS["lang"]['Result'] = 'Výsledek';

$GLOBALS["lang"]['Resulting Function'] = 'Výsledná funkce';

$GLOBALS["lang"]['Results'] = 'Výsledky';

$GLOBALS["lang"]['Retrieve a list of devices in the'] = 'Získat seznam zařízení v';

$GLOBALS["lang"]['Retrieve a list of devices with OS Name like Windows 2008'] = 'Získat seznam zařízení s OS Název jako Windows 2008';

$GLOBALS["lang"]['Retrieve all details about the device with id 88.'] = 'Získejte všechny detaily o zařízení s ID88.';

$GLOBALS["lang"]['Retrieve all devices running Windows.'] = 'Získat všechna zařízení spuštěná Windows.';

$GLOBALS["lang"]['Retrieve all devices with the standard columns'] = 'Získat všechna zařízení se standardními sloupy';

$GLOBALS["lang"]['Retrieve the first 10 devices running Windows ordered by hostname'] = 'Retrieve prvních 10 zařízení běží Windows objednané hostname';

$GLOBALS["lang"]['Retrieve the properties id, ip, hostname, domain, type from all devices'] = 'Získat vlastnosti id, ip, hostname, domain, typ ze všech zařízení';

$GLOBALS["lang"]['retrieved'] = 'Získané zpět';

$GLOBALS["lang"]['Retrieved'] = 'Získané zpět';

$GLOBALS["lang"]['retrieved_ident'] = 'Name';

$GLOBALS["lang"]['Retrieved Ident'] = 'Name';

$GLOBALS["lang"]['retrieved_name'] = 'Získané jméno';

$GLOBALS["lang"]['Retrieved Name'] = 'Získané jméno';

$GLOBALS["lang"]['Retrieved from the device - Windows:Win32_ComputerSystemProduct, Linux:dmidecode, MacOS:system_profiler, ESXi:vim-cmd hostsvc/hostsummary, HP-UX:machinfo, Solaris:smbios, AIX:uname.'] = 'Získané ze zařízení - Windows: Win32 _ ComputerSystemProduct, Linux: dmidecode, MacOS: system _ profiler, ESXi: vim- cmd hostsvc / hostsummary, HP- UX: machinfo, Solaris: smbios, AIX: unname.';

$GLOBALS["lang"]['Retrieving a List of Credentials'] = 'Získání seznamu úvěrů';

$GLOBALS["lang"]['Retrieving or Creating'] = 'Získávání nebo vytváření';

$GLOBALS["lang"]['Return a collection of devices with the default set of columns (devices.id, devices.icon, devices.type, devices.name, devices.ip, devices.dns_fqdn, devices.identification, devices.description, devices.manufacturer, devices.os_family, devices.status)'] = 'Vrátit soubor zařízení s výchozím souborem sloupců (devices.id, devices.icon, devices.type, devices.name, devices.ip, devices.dns _ fqdn, devices.identification, devices.devices.devices.productor, devices.os _ family, devices.status)';

$GLOBALS["lang"]['Return a list of all Modules installed on Routers'] = 'Vrátit seznam všech modulů nainstalovaných na Routers';

$GLOBALS["lang"]['Return an individual device details'] = 'Vrátit jednotlivé zařízení\\';

$GLOBALS["lang"]['Returns a list of {collection}.'] = 'Vrací seznam {kolekce}.';

$GLOBALS["lang"]['Returns a {collection} details.'] = 'Vrací detaily {kolekce}.';

$GLOBALS["lang"]['Reunion'] = 'Sjednocení';

$GLOBALS["lang"]['Review current practices against ISO 27001 requirements'] = 'Přezkum stávajících postupů proti požadavkům normy ISO 27001';

$GLOBALS["lang"]['revision'] = 'Revize';

$GLOBALS["lang"]['Revision'] = 'Revize';

$GLOBALS["lang"]['risk_assesment_result'] = 'Výsledek hodnocení rizik';

$GLOBALS["lang"]['Risk Assesment Result'] = 'Výsledek hodnocení rizik';

$GLOBALS["lang"]['Risk Assessment & Treatment'] = 'Hodnocení rizik a léčba';

$GLOBALS["lang"]['Risk Management'] = 'Řízení rizik';

$GLOBALS["lang"]['Role'] = 'Úloha';

$GLOBALS["lang"]['roles'] = 'Role';

$GLOBALS["lang"]['Roles'] = 'Role';

$GLOBALS["lang"]['Roles can only be created and edited if you have an Open-AudIT Enterprise license. For most users, the default set of Roles should be all that is required.'] = 'Roles lze vytvořit a upravit pouze tehdy, pokud máte licenci Open- Audit Enterprise. Pro většinu uživatelů by výchozí sada Roles měla být vše, co je zapotřebí.';

$GLOBALS["lang"]['Romania'] = 'Rumunsko';

$GLOBALS["lang"]['Romanian'] = 'Rumunsko';

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

$GLOBALS["lang"]['Rules are created and run against a device when the device is discovered or an audit result is processed. Rules can be used to set a device attribute based on other attributes.<br><br>NOTE - At present we cannot delete a rule input or output that contains a /. This is because the framework is parsing the / as part of the URL and returning a 404, even before our code runs. The work-around for this is to delete the Rule itself, then recreate the inputs and outputs as required. Fortunately inputs and outputs that contain a / are rare (indeed, none exist by default).'] = 'Pravidla se vytvoří a poběží proti zařízení, když je zařízení objeveno nebo je zpracován výsledek auditu. Pravidla lze použít k nastavení atributu zařízení na základě jiných atributů.<br/><br/>POZNÁMKA - V současné době nemůžeme smazat vstup nebo výstup pravidla, které obsahuje a /. To je proto, že rámec je parsing / jako součást URL a vrácení 404, i před spuštěním našeho kódu. Práce na tom je smazat samotné Pravidlo, pak obnovit vstupy a výstupy podle potřeby. Naštěstí vstupy a výstupy, které obsahují / jsou vzácné (vlastně, žádné neexistují ve výchozím nastavení).';

$GLOBALS["lang"]['Run Discovery'] = 'Spustit vyhledávání';

$GLOBALS["lang"]['Run Discovery on Devices'] = 'Spustit vyhledávání na zařízeních';

$GLOBALS["lang"]['Run Your Discovery'] = 'Spustit svůj objev';

$GLOBALS["lang"]['Run a Command'] = 'Spustit příkaz';

$GLOBALS["lang"]['Run a discovery and find out <b>Whats On Your Network?</b>'] = 'Spusťte objev a zjistěte <b>Co je na vaší síti?</b>';

$GLOBALS["lang"]['Run the script by typing <code>cscript test_windows_client.vbs</code> in the console.'] = 'Spustit skript psaním <code>cscript test_windows_client.vbs</code> V konzoli.';

$GLOBALS["lang"]['Run this Command'] = 'Spustit tento příkaz';

$GLOBALS["lang"]['runas'] = 'Runy';

$GLOBALS["lang"]['Runas'] = 'Runy';

$GLOBALS["lang"]['Running'] = 'Běžící';

$GLOBALS["lang"]['Running Open-AudIT Apache Service Under Windows'] = 'Běh Open- Audit Apache Service pod Windows';

$GLOBALS["lang"]['Russian'] = 'Rusko';

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

$GLOBALS["lang"]['SAN Audit'] = 'SAN Audit';

$GLOBALS["lang"]['SAN Auto-Discover'] = 'SAN Automaticky objevovat';

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

$GLOBALS["lang"]['SQL not containing this condition will result in the widget failing to be executed.'] = 'SQL neobsahující tuto podmínku bude mít za následek, že widget selže být proveden.';

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

$GLOBALS["lang"]['Save and run the file. Make sure you run the file as an Administrator in order to install it (right click, Run as Administrator).'] = 'Uložit a spustit soubor. Ujistěte se, že jste spustili soubor jako správce za účelem jeho instalace (pravým tlačítkem myši, Spustit jako správce).';

$GLOBALS["lang"]['Save as Default'] = 'Uložit jako výchozí';

$GLOBALS["lang"]['Save the downloaded file.'] = 'Uložit stažený soubor.';

$GLOBALS["lang"]['scaling'] = 'Měření';

$GLOBALS["lang"]['Scaling'] = 'Měření';

$GLOBALS["lang"]['scan_options'] = 'Možnosti skenování';

$GLOBALS["lang"]['Scan Options'] = 'Možnosti skenování';

$GLOBALS["lang"]['Scan Options ID'] = 'Name';

$GLOBALS["lang"]['Scan for this port(s) and if detected open, use this port for SSH communication. This is added to the list of Custom TCP Ports above (if not already included), so there is no need to include it in that list as well. Comma seperated, no spaces.'] = 'Prohledej tento port (y) a pokud se zjistí, že je otevřen, použijte tento port pro SSH komunikaci. To je přidáno do seznamu vlastních TCP portů výše (není-li již zahrnuty), takže není třeba, aby se do tohoto seznamu také. Koma oddělená, žádné mezery.';

$GLOBALS["lang"]['Scan the Nmap top number of TCP ports.'] = 'Naskenujte Nmapový horní počet TCP portů.';

$GLOBALS["lang"]['Scan the Nmap top number of UDP ports.'] = 'Naskenujte horní číslo Nmap portů UDP.';

$GLOBALS["lang"]['schedule'] = 'Plán';

$GLOBALS["lang"]['Schedule'] = 'Plán';

$GLOBALS["lang"]['Scheduled device discovery and reporting make Open-AudIT Professional an efficient solution for busy IT professionals looking to reduce overheads and increase insights.'] = 'Plánovaný objev a hlášení zařízení, aby Open- Audit Professional efektivní řešení pro zaměstnané IT profesionály, kteří chtějí snížit režijní náklady a zvýšit poznatky.';

$GLOBALS["lang"]['Scheduling - discovery, reporting &amp; more'] = 'Plánování - objevování, hlášení a další';

$GLOBALS["lang"]['scope'] = 'Oblast působnosti';

$GLOBALS["lang"]['Scope'] = 'Oblast působnosti';

$GLOBALS["lang"]['Scope is known as Authorization Scope, representing whether a vulnerability affects resources beyond the original security authority of the vulnerable component.<br><br>The only two valid values for this attribute are'] = 'Oblast působnosti je známá jako Autorizační oblast, která představuje, zda zranitelnost ovlivňuje zdroje mimo původní bezpečnostní orgán zranitelné složky.<br/><br/>Pouze dvě platné hodnoty pro tento atribut jsou:';

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

$GLOBALS["lang"]['Searching Using DataTables'] = 'Vyhledávání pomocí datových tabulek';

$GLOBALS["lang"]['Second'] = 'Druhý';

$GLOBALS["lang"]['secondary'] = 'Sekundární';

$GLOBALS["lang"]['Secondary'] = 'Sekundární';

$GLOBALS["lang"]['Secondary Text'] = 'Sekundární text';

$GLOBALS["lang"]['Secret Key'] = 'Tajný klíč';

$GLOBALS["lang"]['section'] = 'Oddíl';

$GLOBALS["lang"]['Section'] = 'Oddíl';

$GLOBALS["lang"]['secure'] = 'Bezpečné';

$GLOBALS["lang"]['Secure'] = 'Bezpečné';

$GLOBALS["lang"]['Security Content Automation Protocol'] = 'Bezpečnostní protokol o automatizaci obsahu';

$GLOBALS["lang"]['Security Level'] = 'Úroveň bezpečnosti';

$GLOBALS["lang"]['Security Name'] = 'Bezpečnostní jméno';

$GLOBALS["lang"]['Security Status'] = 'Bezpečnostní status';

$GLOBALS["lang"]['security_zone'] = 'Bezpečnostní zóna';

$GLOBALS["lang"]['Security Zone'] = 'Bezpečnostní zóna';

$GLOBALS["lang"]['See above. NOTE - This could also be caused by a self-signed certificate on the LDAP server. We are working to allow for this in a future release.'] = 'Viz výše. POZNÁMKA - To může být způsobeno i autologem na LDAP serveru. Pracujeme na tom, abychom to umožnili v budoucnu.';

$GLOBALS["lang"]['See our page on enabling'] = 'Viz naše stránka o povolení';

$GLOBALS["lang"]['Seed Discoveries'] = 'Osivo Objevy';

$GLOBALS["lang"]['seed_ip'] = 'Osivo IP';

$GLOBALS["lang"]['Seed IP'] = 'Osivo IP';

$GLOBALS["lang"]['seed_ping'] = 'Semeno Ping';

$GLOBALS["lang"]['Seed Ping'] = 'Semeno Ping';

$GLOBALS["lang"]['seed_restrict_to_private'] = 'Osivo omezení na soukromé';

$GLOBALS["lang"]['Seed Restrict To Private'] = 'Osivo omezení na soukromé';

$GLOBALS["lang"]['seed_restrict_to_subnet'] = 'Omezení na podsíť osiva';

$GLOBALS["lang"]['Seed Restrict To Subnet'] = 'Omezení na podsíť osiva';

$GLOBALS["lang"]['Select'] = 'Vybrat';

$GLOBALS["lang"]['Select Admin -> Tasks -> Create Task from the menu.'] = 'Vybrat admin - > Úkoly - > Vytvořit Úkol z menu.';

$GLOBALS["lang"]['Select All'] = 'Vybrat vše';

$GLOBALS["lang"]['Select All Devices'] = 'Vybrat všechna zařízení';

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

$GLOBALS["lang"]['Select Menu -> Manage -> Baselines -> List Baselines.'] = 'Vybrat nabídku - > Správa - > Základní linie - > Seznam základních linií.';

$GLOBALS["lang"]['Select a Table'] = 'Vybrat tabulku';

$GLOBALS["lang"]['Select an accredited certification body'] = 'Vybrat akreditovaný certifikační orgán';

$GLOBALS["lang"]['Select and apply appropriate controls (Annex A)'] = 'Zvolte a použijte příslušné ovládací prvky (příloha A)';

$GLOBALS["lang"]['Select the <i>COM Security</i> tab<br><br>Click on Access Permissions Edit Default'] = 'Vyberte <i>KOM Bezpečnost</i> tab<br/><br/>Klikněte na přístupová oprávnění Upravit výchozí';

$GLOBALS["lang"]['Select the <i>Sign On</i> tab and copy the value for <i>Issuer</i> (just the URL itself). Paste this into the Open-AudIT <i>Issuer</i> field.'] = 'Vyberte <i>Zapnout podpis</i> kart a zkopírovat hodnotu pro <i>Emitent</i> (pouze samotné URL). Vložte to do Open- Audit <i>Emitent</i> Pole.';

$GLOBALS["lang"]['Select the <i>This Account</i> checkbox and provide the account name and password.'] = 'Vyberte <i>Tento účet</i> Zaškrtněte políčko a uveďte jméno účtu a heslo.';

$GLOBALS["lang"]['Select the Start menu and type <i>services<.i>. Click the Services icon.'] = 'Vyberte nabídku Start a typ <i>Služby < .i >. Klikněte na ikonu Služby.</i>';

$GLOBALS["lang"]['Select the type of Auth Menthod to create and input the relevant details.'] = 'Vyberte typ Auth Menthod pro vytvoření a zadání příslušných detailů.';

$GLOBALS["lang"]['Self Delete'] = 'Self Delete';

$GLOBALS["lang"]['Senegal'] = 'Senegal';

$GLOBALS["lang"]['sensitivity'] = 'Citlivost';

$GLOBALS["lang"]['Sensitivity'] = 'Citlivost';

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

$GLOBALS["lang"]['Server Status'] = 'Stav serveru';

$GLOBALS["lang"]['Servers'] = 'Servery';

$GLOBALS["lang"]['Servers Only'] = 'Pouze servery';

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

$GLOBALS["lang"]['Service Under Windows'] = 'Služba pod Windows';

$GLOBALS["lang"]['service_version'] = 'Verze služby';

$GLOBALS["lang"]['Service Version'] = 'Verze služby';

$GLOBALS["lang"]['Set'] = 'Nastavení';

$GLOBALS["lang"]['set_by'] = 'Nastavit podle';

$GLOBALS["lang"]['Set By'] = 'Nastavit podle';

$GLOBALS["lang"]['Set by the Discovery function - do not normally set this manually.'] = 'Nastavit funkcí Discovery - normálně jej nenastavujte ručně.';

$GLOBALS["lang"]['Set by the audit_domain or discover_domain scripts. Do not set.'] = 'Nastavit pomocí auditní _ domain nebo objevit _ domain skripty. Nezastavuj.';

$GLOBALS["lang"]['Set the external text to capitalized version of the internal data.'] = 'Nastavte externí text na kapitalizovanou verzi interních dat.';

$GLOBALS["lang"]['Set the external text to lowercase.'] = 'Nastavte vnější text na malé pouzdro.';

$GLOBALS["lang"]['Set the external text to uppercase.'] = 'Nastavte vnější text na horní rámeček.';

$GLOBALS["lang"]['Set the size (normal or compact) of the tables on the List screens.'] = 'Nastavte velikost (normální nebo kompaktní) tabulek na obrazovkách seznamu.';

$GLOBALS["lang"]['Set this if you wish to insert systems from AD that may not be contactable, but have been seen by AD since that date.'] = 'Nastavte jej, pokud si přejete vložit systémy z AD, které nemusí být kompatibilní, ale byly od tohoto data AD viděny.';

$GLOBALS["lang"]['Setting up Discovery on a subnet is almost identical to running a regular Discovery via the web interface. The only additional items are the scheduled hour and day(s) and a name for the Scheduled Task itself. You can take advantage of this to schedule multiple discoveries using different sets of credentials.<br><br>As per the Subnet Discovery, the Active Directory Discovery is also simply the same fields as a regular Active Directory Discovery with the addition of a day, hour(s) and name.<br><br>If the Open-AudIT Server has Collectors reporting to it, an additional drop down is provided. You can select this to specify which Collector the task should run on. Only Discovery tasks are supported for Collectors. Specify the same items as a regular Discovery, but provide the alternate Collector to run this task.'] = 'Nastavení Discovery na podsíti je téměř identické s provozem pravidelného Discovery přes webové rozhraní. Jedinou doplňkovou položkou jsou plánovaná hodina a den (y) a název samotného plánovaného úkolu. Můžete využít tohoto naplánovat více objevů pomocí různých souborů pověřovacích listin.<br/><br/>Jak na Subnet Discovery, Active Directory Discovery je také jednoduše stejné pole jako pravidelný Active Directory Discovery s přidáním dne, hodiny (s) a jméno.<br/><br/>Pokud Open- Audit Server má Sběratele, je k dispozici další pokles. Toto můžete zvolit pro určení, na kterém Sběrateli by měl být úkol spuštěn. Pouze Discovery úkoly jsou podporovány pro sběratele. Upřesněte stejné položky jako pravidelný Discovery, ale poskytněte alternativnímu Sběrateli, aby tento úkol spustil.';

$GLOBALS["lang"]['severity'] = 'Závažnost';

$GLOBALS["lang"]['Severity'] = 'Závažnost';

$GLOBALS["lang"]['severity_text'] = 'Závažnost Text';

$GLOBALS["lang"]['Severity Text'] = 'Závažnost Text';

$GLOBALS["lang"]['Severity is calculated from the <code>base_score</code> and can be one of: None, Low, Medium, High, Critical.'] = 'Závažnost se vypočítá z <code>base_score</code> a může být jedním z: žádný, nízký, střední, vysoký, kritický.';

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

$GLOBALS["lang"]['Shipped are a set of default items. These can be found by going to menu'] = 'Odeslána je sada výchozích položek. Tyto lze nalézt v menu';

$GLOBALS["lang"]['short'] = 'Krátké';

$GLOBALS["lang"]['Short'] = 'Krátké';

$GLOBALS["lang"]['Should I remove all non-current data from this device?'] = 'Mám odstranit všechna nesoučasná data z tohoto zařízení?';

$GLOBALS["lang"]['Should this file (or pattern) be used to exclude files from being reported. Normally, to audit files, this is set to <code>y</code>.'] = 'Je-li tento soubor (nebo vzor) použit k vyloučení souborů z hlášení. Normálně, k auditu souborů, to je nastaveno na <code>y</code>.';

$GLOBALS["lang"]['Should this vendor be used when retrieving vulnerabilities from FirstWave.'] = 'Měl by být tento prodejce použit při získávání slabých míst z FirstWave.';

$GLOBALS["lang"]['Should we add devices from the remote service, locally.'] = 'Měli bychom přidávat zařízení ze vzdálené služby, lokálně.';

$GLOBALS["lang"]['Should we apply this license to the selected Org as well as the Orgs children?'] = 'Měli bychom tuto licenci uplatnit na vybraný Org, stejně jako na děti Orgů?';

$GLOBALS["lang"]['Should we audit a SAN if the management software is detected.'] = 'Měli bychom zkontrolovat SAN, pokud je software pro správu detekován.';

$GLOBALS["lang"]['Should we audit mount points.'] = 'Měli bychom zkontrolovat body.';

$GLOBALS["lang"]['Should we audit netstat ports (yes, no, servers only).'] = 'Měli bychom provádět audit portů netstat (ano, ne, pouze servery).';

$GLOBALS["lang"]['Should we audit the installed software.'] = 'Měli bychom zkontrolovat nainstalovaný software.';

$GLOBALS["lang"]['Should we consider a filtered port to be an open port - and therefore flag this IP as having a device attached?'] = 'Měli bychom považovat filtrovaný port za otevřený port - a proto označit tuto IP jako zařízení?';

$GLOBALS["lang"]['Should we consider an open|filtered port to be an open port - and therefore flag this IP as having a device attached?'] = 'Měli bychom považovat otevřený port 124; filtrovaný port za otevřený port - a proto označit tuto IP jako zařízení s připojeným zařízením?';

$GLOBALS["lang"]['Should we convert the hostname to lowercase.'] = 'Měli bychom přeměnit jméno hostitele na malé.';

$GLOBALS["lang"]['Should we create a file based on the audit result.'] = 'Měli bychom vytvořit soubor založený na výsledku auditu.';

$GLOBALS["lang"]['Should we expose this group in the web interface.'] = 'Měli bychom tuto skupinu odhalit na webovém rozhraní.';

$GLOBALS["lang"]['Should we expose this query in the list of reports under the Report menu in the web interface.'] = 'Měli bychom tento dotaz zveřejnit v seznamu zpráv v nabídce Report v webovém rozhraní.';

$GLOBALS["lang"]['Should we expose this query in the list of reports under the Reports menu in the web interface.'] = 'Měli bychom tento dotaz zveřejnit v seznamu zpráv v nabídce Reports v webovém rozhraní.';

$GLOBALS["lang"]['Should we hide the audit script window when executing.'] = 'Měli bychom při provádění schovat okno skriptu auditu.';

$GLOBALS["lang"]['Should we ignore an invalid or self signed SSL certificate and submit the result anyway.'] = 'Pokud bychom ignorovali neplatný nebo sám podepsal SSL certifikát a předložit výsledek stejně.';

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

$GLOBALS["lang"]['Should we retrieve all DNS names'] = 'Měli bychom získat všechna jména DNS';

$GLOBALS["lang"]['Should we run an audit and submit it (y/n).'] = 'Měli bychom provést audit a předložit jej (y / n).';

$GLOBALS["lang"]['Should we test for SNMP using UDP port 161.'] = 'Měli bychom otestovat SNMP pomocí UDP portu161.';

$GLOBALS["lang"]['Should we test for SSH using TCP port 22.'] = 'Měli bychom testovat na SSH pomocí TCP portu22.';

$GLOBALS["lang"]['Should we test for WMI using TCP port 135.'] = 'Měli bychom otestovat WMI pomocí TCP portu135.';

$GLOBALS["lang"]['Should we uninstall the agent (y/n).'] = 'Měli bychom odinstalovat agenta (y / n).';

$GLOBALS["lang"]['Should we use the system or user level proxy to submit the audit result.'] = 'Pokud použijeme systém nebo uživatelskou proxy k předložení výsledku auditu.';

$GLOBALS["lang"]['Should we use the win32_product WMI class (not recommended by Microsoft) when retrieving installed software.'] = 'Měli bychom použít win32 _ produkt WMI třída (není doporučeno Microsoft) při získávání nainstalovaného softwaru.';

$GLOBALS["lang"]['Should we use this method to authenticate user credentials. Set to <code>y</code> or <code>n</code>.'] = 'Měli bychom použít tuto metodu k ověření uživatelských údajů. Nastavit na <code>y</code> nebo <code>n</code>.';

$GLOBALS["lang"]['Should we use this method to populate a users roles. The field <code>use_auth</code> must be set to <code>y</code> to use this. Set to <code>y</code> or <code>n</code>.'] = 'Použijeme tuto metodu k zalidnění uživatelských rolí. Pole <code>use_auth</code> musí být nastaveno na <code>y</code> použít tohle. Nastavit na <code>y</code> nebo <code>n</code>.';

$GLOBALS["lang"]['Should we use this value to match external and internal devices. Our default Integration uses IP and UUID here. If either of these match between external and internal device, we consider them to be the same device.'] = 'Použijeme tuto hodnotu k porovnání vnějších a vnitřních zařízení. Naše výchozí integrace využívá IP a UUID zde. Pokud se některý z nich shoduje mezi vnějším a vnitřním zařízením, považujeme je za stejné zařízení.';

$GLOBALS["lang"]['Show All'] = 'Zobrazit vše';

$GLOBALS["lang"]['sid'] = 'Side.';

$GLOBALS["lang"]['Sid'] = 'Side.';

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

$GLOBALS["lang"]['Slovak'] = 'Slovenský';

$GLOBALS["lang"]['Slovakia (Slovak Republic)'] = 'Slovensko (Slovensko)';

$GLOBALS["lang"]['Slovenia'] = 'Slovinsko';

$GLOBALS["lang"]['Slovenian'] = 'slovinština';

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

$GLOBALS["lang"]['So a script is not working on a recalcitrant device. Grrr. The scripts for Windows, Linux, and MacOS all accept the debugging argument. This can be set in the script itself, or provided on the command line. Run the script using that option set to 5 and you should see in which section of the script the failure occurs. For example'] = 'Takže scénář nefunguje na vzpurné zařízení. Grrr. Scénáře pro Windows, Linux a MacOS všechny akceptují argument ladění. To lze nastavit v samotném skriptu, nebo poskytnout na příkazovém řádku. Spustit skript pomocí této volby nastaven na 5 a měli byste vidět, v které části skriptu dojde k selhání. Například';

$GLOBALS["lang"]['So apart from a regular word, what other options are there - I am glad you asked! As per the standard Open-AudIT API, we have several operators for filtering. Operators that can precede the value are'] = 'Takže kromě pravidelného slova, jaké jiné možnosti existují - jsem rád, že jste se zeptal! Podle standardu Open- Audit API máme několik operátorů pro filtrování. Provozovatelé, kteří mohou předcházet hodnotě jsou';

$GLOBALS["lang"]['So you have an issue providing Open-AudIT credentials to discover your devices. I have an answer - dont then! Sure, I mean, discovery is the best thing since sliced bread. You do not need to know ahead of time <i>Whats On Your Network</i>. But how can you extract data from devices without providing credentials?<br><br>In the case of computers, an easy option is to copy the appropriate audit script to the target machines and set it to execute on a schedule. More details on the wiki. The machines will send their data to Open-AudIT on that schedule, almost as if you were running discovery. The device simply runs the audit script on a schedule (again, you can read the audit script) as the user you tell it to and sends the output to the server. No credentials are involved at all.<br><br>And now we have Agents for Windows. The advantages of an actual installed Agent are'] = 'Takže máte problém, který poskytuje Open- Audit pověření k objevování vašich zařízení. Mám odpověď - ne potom! Jasně, objev je nejlepší věc od krájeného chleba. Nemusíš to vědět předem. <i>Co je na vaší síti</i>. Ale jak můžete extrahovat data ze zařízení bez poskytnutí pověřovacích listin?<br/><br/>V případě počítačů je snadnou volbou kopírovat příslušný auditní skript cílovým strojům a nastavit jej tak, aby byl proveden podle plánu. Více informací o Wiki. Stroje budou posílat svá data do Open- Auditu podle tohoto rozvrhu, skoro jako byste prováděli objev. Zařízení jednoduše spustí auditní skript na harmonogramu (opět si můžete přečíst auditní skript) jako uživatel, kterému ho řeknete a odešle výstup na server. Nejsou tam vůbec žádné doklady.<br/><br/>A teď máme agenty pro Windows. Výhody skutečně nainstalovaného agenta jsou';

$GLOBALS["lang"]['socket'] = 'Socket';

$GLOBALS["lang"]['Socket'] = 'Socket';

$GLOBALS["lang"]['software'] = 'Software';

$GLOBALS["lang"]['Software'] = 'Software';

$GLOBALS["lang"]['Software Found Last 7 Days'] = 'Software Nalezeno Posledních 7 dní';

$GLOBALS["lang"]['Software Found Today'] = 'Software nalezený dnes';

$GLOBALS["lang"]['Software Found Yesterday'] = 'Software nalezený včera';

$GLOBALS["lang"]['software_key'] = 'Software Key';

$GLOBALS["lang"]['Software Key'] = 'Software Key';

$GLOBALS["lang"]['Software License Reporting'] = 'Hlášení softwarové licence';

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

$GLOBALS["lang"]['Some collections can be executed - queries, etc - see below.'] = 'Některé sbírky lze provést - dotazy, atd. - viz níže.';

$GLOBALS["lang"]['Some examples are at the bottom of this page. All endpoints also have a minimum list of required fields. These are below.'] = 'Některé příklady jsou v dolní části této stránky. Všechny koncové body mají také minimální seznam požadovaných polí. Tyhle jsou dole.';

$GLOBALS["lang"]['Some of our templates support the new move to dataTables, using server side processing. This massivley improves load times.'] = 'Některé z našich šablon podporují nový přesun do datatables, pomocí zpracování na straně serveru. Tento masiv zlepšuje časy naložení.';

$GLOBALS["lang"]['Some other error has occurred when attempting to bind to the LDAP server. It is contactable (ie, the <i>connect</i> above has worked), but for some other reason, binding has not occurred. Check the logs on the LDAP server.'] = 'Při pokusu o navázání na LDAP server došlo k nějaké další chybě. To je možné (tj., <i>připojit</i> výše uvedené funguje), ale z nějakého jiného důvodu k vazbě nedošlo. Zkontrolujte záznamy na LDAP serveru.';

$GLOBALS["lang"]['Something has gone seriously wrong. Open-AudIT cannot read the <i>orgs</i> table.'] = 'Něco se vážně pokazilo. Open- Audit nemůže číst <i>orgy</i> Stůl.';

$GLOBALS["lang"]['Something has gone seriously wrong. Open-AudIT cannot read the <i>roles</i> table.'] = 'Něco se vážně pokazilo. Open- Audit nemůže číst <i>role</i> Stůl.';

$GLOBALS["lang"]['Sometimes agentless discovery just does not fit your use-case. Maybe your PCs have tight firewalls. Maybe they are not on the network when your discoveries are scheduled. Maybe they are used by remote workers. Whatever the case, this is where an agent can help. Install it on the target machine and it will <i>check-in</i> with your Open-AudIT server on a schedule and accept tasks. The most common task the server requests is for the agent to audit itself and send the result.'] = 'Někdy bezúčelný objev prostě neodpovídá vašemu použitelnému případu. Možná vaše počítače mají těsné firewally. Možná nejsou v síti, když jsou vaše objevy naplánovány. Možná je používají odlehlí pracovníci. Ať je to jak chce, tady nám může agent pomoct. Nainstalujte ho na cílový stroj a bude <i>check- in</i> s Vaším Open- Audit serverem na programu a přijmout úkoly. Nejběžnějším úkolem, který server požaduje, je, aby se agent sám kontroloval a odeslal výsledek.';

$GLOBALS["lang"]['Sort'] = 'Třídit';

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

$GLOBALS["lang"]['Stage 1: Documentation review'] = 'Fáze 1: Přezkum dokumentace';

$GLOBALS["lang"]['Stage 2: Implementation and effectiveness review'] = 'Fáze 2: Provádění a přezkum účinnosti';

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

$GLOBALS["lang"]['Start a web browser and go to'] = 'Spustit webový prohlížeč a přejít na';

$GLOBALS["lang"]['started_date'] = 'Datum zahájení';

$GLOBALS["lang"]['Started Date'] = 'Datum zahájení';

$GLOBALS["lang"]['Starting June 2018 Google has implemented a pay-as-you-go pricing model for the Google Maps Platform APIs. Previously, most users with moderate usage could use Google Maps, which are embedded into opCharts and Open-AudIT Professional/Enterprise, for free. Googles new policy is outlined here,'] = 'Od června 2018 Společnost Google zavedla model poplatků za služby Google Maps Platform API. Dříve většina uživatelů s mírným využitím mohla používat Google Maps, které jsou vloženy do opCharts a Open- Audit Professional / Enterprise, zdarma. Je zde nastíněna nová politika,';

$GLOBALS["lang"]['Starts With'] = 'Začíná s';

$GLOBALS["lang"]['state'] = 'Stát';

$GLOBALS["lang"]['State'] = 'Stát';

$GLOBALS["lang"]['Stats'] = 'Staty';

$GLOBALS["lang"]['status'] = 'Stav';

$GLOBALS["lang"]['Status'] = 'Stav';

$GLOBALS["lang"]['Storage'] = 'Skladování';

$GLOBALS["lang"]['storage_count'] = 'Počet úložišť';

$GLOBALS["lang"]['Storage Count'] = 'Počet úložišť';

$GLOBALS["lang"]['Storage area network'] = 'Síť skladovacích prostor';

$GLOBALS["lang"]['Storage-Area Network'] = 'Storage- Area Network';

$GLOBALS["lang"]['string'] = 'Řetězec';

$GLOBALS["lang"]['String'] = 'Řetězec';

$GLOBALS["lang"]['sub_resource_id'] = 'ID dílčího zdroje';

$GLOBALS["lang"]['Sub Resource ID'] = 'ID dílčího zdroje';

$GLOBALS["lang"]['sub_type'] = 'Podtyp';

$GLOBALS["lang"]['Sub Type'] = 'Podtyp';

$GLOBALS["lang"]['subject_key_ident'] = 'Name';

$GLOBALS["lang"]['Subject Key Ident'] = 'Name';

$GLOBALS["lang"]['Submit'] = 'Odeslat';

$GLOBALS["lang"]['Submit Online'] = 'Odeslat online';

$GLOBALS["lang"]['Submitted From'] = 'Předáno';

$GLOBALS["lang"]['Subnet'] = 'Podsíť';

$GLOBALS["lang"]['Subnet Discoveries'] = 'Subnet Objevy';

$GLOBALS["lang"]['Subscription ID'] = 'ID předplatného';

$GLOBALS["lang"]['suburb'] = 'Suburb';

$GLOBALS["lang"]['Suburb'] = 'Suburb';

$GLOBALS["lang"]['Success'] = 'Úspěch';

$GLOBALS["lang"]['Sudan'] = 'Súdán';

$GLOBALS["lang"]['Sudo Password'] = 'Heslo Sudo';

$GLOBALS["lang"]['Sudo Password (optional)'] = 'Sudo Heslo (nepovinné)';

$GLOBALS["lang"]['suite'] = 'Suite';

$GLOBALS["lang"]['Suite'] = 'Suite';

$GLOBALS["lang"]['summaries'] = 'Shrnutí';

$GLOBALS["lang"]['Summaries'] = 'Shrnutí';

$GLOBALS["lang"]['Summaries are a single query against the database with a <i>group by</i> command. Using this simple method we can easily create a summary for virtually any attribute.<br><br>We no longer require a separate report for each <i>type</i> of a device. We now simply have a summary that groups by <i>devices.type</i> and shows the result. You can then click on a given type from the list and see the matching devices. In this case, one Summary replaces (potentially) 78 reports (there are 78 device types).<br><br>A summary is different to a query in that a summary is designed to group items by a given attribute then provide a <i>click through</i> link to the actual devices. A query is simply a list of items with no further links. As above - this of a Summary as a combined <i>report + subreport</i>, whereas a query is simply a single Report.<br><br>Summaries have a different collection template to the other resources within Open-AudIT. This template shows the Summary as you would expect and also shows buttons with counts of other resources. This page is designed to be the HomePage of Open-AudIT.'] = 'Shrnutí jsou jeden dotaz proti databázi s <i>skupina podle</i> Rozkaz. Pomocí této jednoduché metody můžeme snadno vytvořit shrnutí pro prakticky jakýkoli atribut.<br/><br/>Už nepožadujeme samostatnou zprávu pro každého <i>typ</i> zařízení. Nyní máme pouze shrnutí, které skupiny <i>zařízení. typ</i> a ukazuje výsledek. Poté můžete kliknout na daný typ ze seznamu a vidět odpovídající zařízení. V tomto případě jeden souhrn nahrazuje (potenciálně) 78 reportů (existuje 78 typů zařízení).<br/><br/>Shrnutí se liší od dotazu v tom, že shrnutí je navržen tak, aby skupina položek podle daného atributu pak poskytnout <i>kliknutím</i> odkaz na skutečná zařízení. Otázka je jednoduše seznam položek bez dalších odkazů. Jak je uvedeno výše - souhrn jako kombinace <i>zpráva + dílčí zpráva</i>, vzhledem k tomu, že dotaz je pouze jediná zpráva.<br/><br/>Shrnutí mají jinou šablonu sbírky než ostatní zdroje v rámci Open- Audit. Tato šablona zobrazuje souhrn, jak byste očekávali, a také zobrazí tlačítka s počtem jiných zdrojů. Tato stránka je určena jako HomePage Open- Audit.';

$GLOBALS["lang"]['Summaries are designed to group items by a particular matching column and then to provide a link to individual devices. In the previous versions of Open-AudIT, this would have been two different items - a report and subreport. We have now bundled these into what we call a Summary.'] = 'Souhrny jsou navrženy tak, aby seskupovaly položky podle konkrétního odpovídajícího sloupce a poté aby poskytovaly odkaz na jednotlivá zařízení. V předchozích verzích Open- Auditu by to byly dvě různé položky - zpráva a podzpráva. Nyní jsme je spojili do toho, čemu říkáme Souhrn.';

$GLOBALS["lang"]['Summaries provide drilldown reporting capabilities. Simple, intuitive, powerful.'] = 'Shrnutí poskytují schopnost hlášení vrtáků. Jednoduchý, intuitivní, silný.';

$GLOBALS["lang"]['Summaries take the same arguments as Queries.'] = 'Shrnutí mají stejné argumenty jako dotazy.';

$GLOBALS["lang"]['Summary'] = 'Shrnutí';

$GLOBALS["lang"]['Sunday'] = 'Neděle';

$GLOBALS["lang"]['supplier'] = 'Dodavatel';

$GLOBALS["lang"]['Supplier'] = 'Dodavatel';

$GLOBALS["lang"]['Support'] = 'Podpora';

$GLOBALS["lang"]['Supported types are <code>subnet</code>, <code>seed</code> and <code>active directory</code>.'] = 'Podporované typy jsou <code>subnet</code>, <code>seed</code> a <code>active directory</code>.';

$GLOBALS["lang"]['Supports compliance with legal and regulatory requirements'] = 'Podporuje dodržování právních a regulačních požadavků';

$GLOBALS["lang"]['Suriname'] = 'Surinam';

$GLOBALS["lang"]['Surveillance Audits:</strong> Annual audits to maintain certification'] = 'Kontrolní audity: Roční audity za účelem zachování certifikace';

$GLOBALS["lang"]['Svalbard & Jan Mayen Islands'] = 'Svalbard a ostrovy Jan Mayen';

$GLOBALS["lang"]['Swaziland'] = 'Svazijsko';

$GLOBALS["lang"]['Sweden'] = 'Švédsko';

$GLOBALS["lang"]['Swedish'] = 'Švédsko';

$GLOBALS["lang"]['switch_device_id'] = 'ID přepínače';

$GLOBALS["lang"]['Switch Device ID'] = 'ID přepínače';

$GLOBALS["lang"]['switch_port'] = 'Přepnout port';

$GLOBALS["lang"]['Switch Port'] = 'Přepnout port';

$GLOBALS["lang"]['Switzerland, Swiss Confederation'] = 'Švýcarsko, Švýcarská konfederace';

$GLOBALS["lang"]['Symptom'] = 'Příznaky';

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

$GLOBALS["lang"]['Table'] = 'Tabulka';

$GLOBALS["lang"]['tag'] = 'Značka';

$GLOBALS["lang"]['Tag'] = 'Značka';

$GLOBALS["lang"]['tag_1'] = 'Značka 1';

$GLOBALS["lang"]['Tag 1'] = 'Značka 1';

$GLOBALS["lang"]['tag_2'] = 'Štítek 2';

$GLOBALS["lang"]['Tag 2'] = 'Štítek 2';

$GLOBALS["lang"]['tag_3'] = 'Štítek 3';

$GLOBALS["lang"]['Tag 3'] = 'Štítek 3';

$GLOBALS["lang"]['Tagalog'] = 'Tagalog';

$GLOBALS["lang"]['tags'] = 'Značky';

$GLOBALS["lang"]['Tags'] = 'Značky';

$GLOBALS["lang"]['Tags :: '] = 'Tagy: ';

$GLOBALS["lang"]['Taiwan'] = 'Tchaj-wan';

$GLOBALS["lang"]['Tajikistan'] = 'Tádžikistán';

$GLOBALS["lang"]['Take note of all output and action each item as appropriate.'] = 'Vezměte na vědomí všechny výstupy a akce každé položky podle potřeby.';

$GLOBALS["lang"]['Tanzania'] = 'Tanzanie';

$GLOBALS["lang"]['Target Computer'] = 'Cílový počítač';

$GLOBALS["lang"]['task'] = 'Úkol';

$GLOBALS["lang"]['Task'] = 'Úkol';

$GLOBALS["lang"]['tasks'] = 'Úkoly';

$GLOBALS["lang"]['Tasks'] = 'Úkoly';

$GLOBALS["lang"]['Tasks can be one of several distinct types: Baseline, Discovery, Report, Query, Summary or Collector.'] = 'Úkoly mohou být jedním z několika odlišných typů: Baseline, Discovery, Report, Query, Summary nebo Sběratel.';

$GLOBALS["lang"]['tcp_ports'] = 'Tcp Ports';

$GLOBALS["lang"]['Tcp Ports'] = 'Tcp Ports';

$GLOBALS["lang"]['Technical Details'] = 'Technické podrobnosti';

$GLOBALS["lang"]['tenant'] = 'Nájemník';

$GLOBALS["lang"]['Tenant'] = 'Nájemník';

$GLOBALS["lang"]['Tenant ID'] = 'Identifikace nájemce';

$GLOBALS["lang"]['Tennant ID'] = 'Identifikace tennantu';

$GLOBALS["lang"]['ternary'] = 'Ternary';

$GLOBALS["lang"]['Ternary'] = 'Ternary';

$GLOBALS["lang"]['Test 1'] = 'Zkouška 1';

$GLOBALS["lang"]['Test 2'] = 'Zkouška 2';

$GLOBALS["lang"]['Test 3'] = 'Zkouška 3';

$GLOBALS["lang"]['Test Email'] = 'Test Email';

$GLOBALS["lang"]['test_minutes'] = 'Zkušební zápis';

$GLOBALS["lang"]['Test Minutes'] = 'Zkušební zápis';

$GLOBALS["lang"]['test_os'] = 'Zkouška Os';

$GLOBALS["lang"]['Test Os'] = 'Zkouška Os';

$GLOBALS["lang"]['test_subnet'] = 'Zkušební podsíť';

$GLOBALS["lang"]['Test Subnet'] = 'Zkušební podsíť';

$GLOBALS["lang"]['tests'] = 'Zkoušky';

$GLOBALS["lang"]['Tests'] = 'Zkoušky';

$GLOBALS["lang"]['Text'] = 'Text';

$GLOBALS["lang"]['Thai'] = 'Thajsko';

$GLOBALS["lang"]['Thailand'] = 'Thajsko';

$GLOBALS["lang"]['Thank you for starting your journey with the best discovery and inventory tool around.'] = 'Děkujeme za zahájení vaší cesty s nejlepším objevem a inventář nástroje kolem.';

$GLOBALS["lang"]['Thanks to'] = 'Díky';

$GLOBALS["lang"]['Thats it! You have just edited the attributes of as many devices as you need to.'] = 'To je ono! Právě jste upravili atributy tolika zařízení, kolik potřebujete.';

$GLOBALS["lang"]['The <i>Roles</i> endpoint allows you to manage the set of permissions(Create, Read, Update, Delete) that are granted to the users and are applied to each endpoint.'] = '• <i>Role</i> endpoint vám umožní spravovat sadu oprávnění (Vytvořit, číst, aktualizovat, Smazat), které jsou poskytovány uživatelům a jsou aplikovány na každý koncový bod.';

$GLOBALS["lang"]['The API uses a cookie. You can request a cookie by sending a POST to the URL below, containing the username and password attributes and values:'] = 'API používá sušenku. Cookie si můžete vyžádat zasláním POST na URL níže, obsahující uživatelské jméno a heslo atributy a hodnoty:';

$GLOBALS["lang"]['The Active Directory domain to retrieve a list of subnets from.'] = 'Doména Active Directory pro získání seznamu podsítí.';

$GLOBALS["lang"]['The Active Directory server to retrieve a list of subnets from.'] = 'Server Active Directory pro získání seznamu podsítí.';

$GLOBALS["lang"]['The Applications endpoint allows you to define an application which you can then associate to a device (or devices).'] = 'Konečný parametr Aplikace vám umožní definovat aplikaci, kterou pak můžete přiřadit k zařízení (nebo zařízením).';

$GLOBALS["lang"]['The Attributes endpoint allows you to add customized values to different attributes in Open-AudIT, at the moment this feature works on the Class, Environment, Status and Type attributes on Devices, the Type attribute for both Locations and Orgs as well as the Menu Category for Queries. If you view an item of one of the prvious types (say view a Lkocation) you will notice the Type attribute must be selected from a drop-down box. This is where those values are stored. Hence, if you would like to add a new Type to be chosen for a Location, add it using the Attributes feature.'] = 'Konečný parametr Atributy vám umožní přidat vlastní hodnoty do různých atributů v Open- Audit, v současné době tato funkce funguje na atributy třídy, životního prostředí, stavu a typu na zařízení, atributu Typ jak pro umístění a Orgy, stejně jako kategorie nabídky pro dotazy. Pokud si prohlížíte položku jednoho z prchavých typů (řekněme pohled na Lkotion), všimnete si, že atribut Type musí být vybrán z krabičky "drop-down". Tady jsou tyto hodnoty uloženy. Proto, pokud byste chtěli přidat nový typ, který bude vybrán pro umístění, přidejte jej pomocí funkce Atributy.';

$GLOBALS["lang"]['The Automatable metric captures the answer to the question <strong>Can an attacker automate exploitation events for this vulnerability across multiple targets?</strong> based on steps 1-4 of the kill chain. These steps are reconnaissance, weaponization, delivery, and exploitation (Not Defined, No, Yes).'] = 'Automatic metric zachycuje odpověď na otázku <strong>Může útočník automatizovat vykořisťovací akce pro tuto zranitelnost napříč více cíli?</strong> Na základě kroků 1-4 zabijáckého řetězce. Tyto kroky jsou průzkum, zbrojení, dodání a vykořisťování (Není určeno, Ne, Ano).';

$GLOBALS["lang"]['The CVE has been marked as invalid or withdrawn in the CVE List. It remains in the NVD but is excluded from default search results.'] = 'CVE bylo v seznamu CVE označeno jako neplatné nebo staženo. Zůstává v NVD, ale je vyloučen z výchozích výsledků vyhledávání.';

$GLOBALS["lang"]['The CVE has been published to the CVE List and included in the NVD dataset. Initial ingestion only.'] = 'CVE byl publikován na seznam CVE a je součástí souboru NVD. Pouze počáteční požití.';

$GLOBALS["lang"]['The CVE has been updated after initial analysis. NVD enrichment data may have been revised.'] = 'CVE bylo aktualizováno po počáteční analýze. Údaje o obohacování NVD mohly být revidovány.';

$GLOBALS["lang"]['The CVE identifier.'] = 'Identifikátor CVE.';

$GLOBALS["lang"]['The CVE is actively being enriched with CVSS scores, CWE classifications, reference tags, and CPE applicability.'] = 'CVE je aktivně obohacen o CVSS skóre, CWE klasifikace, referenční značky, a CPE použitelnost.';

$GLOBALS["lang"]['The CVE is not currently prioritized for enrichment due to resource constraints or other reasons.'] = 'CVE není v současné době prioritou pro obohacování zdrojů z důvodu omezení zdrojů nebo jiných důvodů.';

$GLOBALS["lang"]['The CVE is queued for enrichment by NVD analysts. No detailed metadata yet.'] = 'CVE je ve frontě na obohacení analytiky NVD. Zatím žádná podrobná metadata.';

$GLOBALS["lang"]['The Cloud that owns this item. Links to <code>clouds.id</code>.'] = 'Cloud, který vlastní tuto položku. Odkazy na <code>clouds.id</code>.';

$GLOBALS["lang"]['The Device Seed Discovery type is the newest highly-effective method for network crawling, giving you the ability to target your network as narrowly or as broadly as you need. It is fast, it works and it is great.'] = 'Typ Device Seed Discovery je nejnovější vysoce efektivní metoda pro síťové plazení, která vám umožní zaměřit se na vaši síť tak úzce nebo tak široce, jak potřebujete. Je to rychlé, funguje to a je to skvělé.';

$GLOBALS["lang"]['The Discovery Scan Options we ship are detailed in the table below. As above, Enterprise users can create more of these or edit the shipped items.'] = 'Discovery scan Možnosti, které posíláme, jsou podrobně uvedeny v tabulce níže. Jak je uvedeno výše, Uživatelé Enterprise mohou vytvořit více z nich nebo upravit odeslané položky.';

$GLOBALS["lang"]['The Elevated User query'] = 'Vyzdvižený dotaz uživatele';

$GLOBALS["lang"]['The Executables feature scans the disk of a device as part of the audit and checks that every executable file is known to the package manager. Because it uses the package manager, the feature applies to Linux target devices only, and further than that, only rpm or deb based distributions. Anything Redhat or Debian based should work.'] = 'Funkce Executables zobrazuje disk zařízení jako součást auditu a kontroluje, zda každý spustitelný soubor zná správce balíčku. Vzhledem k tomu, že používá správce balíků, funkce se vztahuje pouze na cílová zařízení Linux, a dále než to, pouze otáčky nebo rozdělení založené na deb. Cokoliv Redhat nebo Debian based by mělo fungovat.';

$GLOBALS["lang"]['The FROM'] = 'Z';

$GLOBALS["lang"]['The Group used to run the Baseline. Links to <code>groups.id</code>.'] = 'Skupina vedla Baseline. Odkazy na <code>groups.id</code>.';

$GLOBALS["lang"]['The ID from the devices table (the devices.name will be displayed) of the NTU at this end of the connection. Links to <code>devices.id</code>.'] = 'ID z tabulky zařízení (devices.name bude zobrazeno) NTU na tomto konci spojení. Odkazy na <code>devices.id</code>.';

$GLOBALS["lang"]['The ID from the imported benchmark policy.'] = 'Identifikátor z dovážené referenční politiky.';

$GLOBALS["lang"]['The ID from the locations table (the locations.name will be displayed) of this end of the connection. Links to <code>locations.id</code>. The A location is usually the <code>FROM</code> location.'] = 'ID z tabulky umístění (zobrazí se locations.name) tohoto konce spojení. Odkazy na <code>locations.id</code>. Umístění A je obvykle <code>FROM</code> Místo.';

$GLOBALS["lang"]['The ID from the locations table (the locations.name will be displayed) of this end of the connection. Links to <code>locations.id</code>. The B location is usually the <code>TO</code> location.'] = 'ID z tabulky umístění (zobrazí se locations.name) tohoto konce spojení. Odkazy na <code>locations.id</code>. B místo je obvykle <code>TO</code> Místo.';

$GLOBALS["lang"]['The ID of the associated device (if any). Links to <code>devices.id</code>.'] = 'Identifikace případného souvisejícího zařízení. Odkazy na <code>devices.id</code>.';

$GLOBALS["lang"]['The ID of the associated discovery. Linked to <code>discoveries.id</code>'] = 'Identifikace souvisejícího objevu. Spojen s <code>discoveries.id</code>';

$GLOBALS["lang"]['The ID of the item of the associated type.'] = 'Identifikátor položky přidruženého typu.';

$GLOBALS["lang"]['The ID of this orgs parent org. Linked to <code>orgs.id</code>'] = 'Identifikace tohoto orgs rodičovského org. Spojen s <code>orgs.id</code>';

$GLOBALS["lang"]['The ID provided by the provider.'] = 'Identifikátor poskytnutý poskytovatelem.';

$GLOBALS["lang"]['The ID retrieved from a Cloud discovery.'] = 'Identifikace byla získána z objevu Clouda.';

$GLOBALS["lang"]['The IP address of this collector used to communicate with the server.'] = 'IP adresa tohoto kolektoru slouží ke komunikaci se serverem.';

$GLOBALS["lang"]['The IP of the device to start a seed discovery with.'] = 'IP zařízení, se kterým začneme objevovat semena.';

$GLOBALS["lang"]['The IP of the external interface.'] = 'IP externího rozhraní.';

$GLOBALS["lang"]['The IP of the internal interface.'] = 'IP interního rozhraní.';

$GLOBALS["lang"]['The ISO/IEC 27001 certification process and its key elements.'] = 'Certifikační proces ISO / IEC 27001 a jeho klíčové prvky.';

$GLOBALS["lang"]['The ISP or Telco providing this link.'] = 'ISP nebo Telco poskytují tento odkaz.';

$GLOBALS["lang"]['The JSON record from Mitre.'] = 'Záznam JSON z Mitre.';

$GLOBALS["lang"]['The JSON record from the NVD feed.'] = 'Záznamy z NVD.';

$GLOBALS["lang"]['The LDAP OU of this user (if LDAP is used).'] = 'LDAP OU tohoto uživatele (je-li použit LDAP).';

$GLOBALS["lang"]['The LDAP server could not be connected to. At all. Check it is pingable from the Open-AudIT server. Check the correct port is open to the Open-AudIT server. An nmap from the Open-AudIT server will show this. Substitute your LDAP servers IP for $ip. Try:<code>nmap -vv $ip</code>'] = 'K serveru LDAP nelze připojit. Vůbec. Zkontrolujte, zda je pingable z Open- Audit serveru. Zkontrolujte, zda je správný port otevřen na Open- Audit serveru. Ukazuje se zde nmap z Open- Audit serveru. Nahradit vaše LDAP servery IP za $ip. Zkuste:<code>nmap -vv $ip</code>';

$GLOBALS["lang"]['The LDAP server type is invalid. It should be either <i>active directory</i> or <i>openldap</i>.'] = 'Typ serveru LDAP je neplatný. Mělo by to být buď <i>aktivní adresář</i> nebo <i>openldap</i>.';

$GLOBALS["lang"]['The LDAP server was connected to and the user credentials accepted for bind.'] = 'K serveru LDAP byl připojen a uživatelská pověření přijata pro vazbu.';

$GLOBALS["lang"]['The Linux Open-AudIT installer will test for and if required, install Open-AudITs dependencies from your distributions repository, including setting the Nmap SetUID. This is required for SNMP (UDP 161) detection by a non-root user. This is supported on RedHat/CentOS and Debian/Ubuntu. If you need to manually install Nmap:<br><br>For RedHat/CentOS do (NOTE - if you upgrade using yum, you will need to reapply this <i>chmod</i> setting).'] = 'Instalátor Linux Open- AudiT bude testovat a v případě potřeby nainstalovat závislost Open- Audity z Vašeho úložiště distribucí, včetně nastavení Nmap SetUID. To je nutné pro SNMP (UDP 161) detekci neroot uživatele. Toto je podporováno na RedHat / Centos a Debian / Ubuntu. Pokud potřebujete ručně nainstalovat Nmap:<br/><br/>Pro RedHat / Centos do (POZOR - pokud upgradujete pomocí yum, budete muset znovu použít <i>chmod</i> nastavení).';

$GLOBALS["lang"]['The Location that contains this network. Links to <code>locations.id</code>.'] = 'Poloha, která obsahuje tuto síť. Odkazy na <code>locations.id</code>.';

$GLOBALS["lang"]['The NVD assigned base status.'] = 'NVD přidělil status základny.';

$GLOBALS["lang"]['The National Institute of Standards and Technology is the federal technology agency. They advance official technology, measurement science and standards.'] = 'Národní institut norem a technologií je federální technologická agentura. Podporují oficiální technologii, měřící vědu a standardy.';

$GLOBALS["lang"]['The Network to Discover'] = 'Síť k odhalení';

$GLOBALS["lang"]['The Nmap timing preset.'] = 'Načasování Nmapu.';

$GLOBALS["lang"]['The OS this package should be reported against. Blank for all. Use the percent sign % as a wildcard. Will be tested against os_group, os_family and os_name in that order.'] = 'OS tento balíček by měl být hlášen proti. Prázdné pro všechny. Použijte procento znaménka% jako divokou kartu. V tomto pořadí budou testovány proti os _ group, os _ family a os _ name.';

$GLOBALS["lang"]['The Open-AudIT API'] = 'Open- Audit API';

$GLOBALS["lang"]['The Open-AudIT id of the linked cloud. Links to <code>clouds.id</code>.'] = 'Open- Audit ID propojeného cloudu. Odkazy na <code>clouds.id</code>.';

$GLOBALS["lang"]['The Open-AudIT server code was exeucted within this file.'] = 'Open- Aud Kód IT serveru byl exeucted v tomto souboru.';

$GLOBALS["lang"]['The Open-AudIT server code was exeucted within this function.'] = 'Open- Aud Kód IT serveru byl exeucted v rámci této funkce.';

$GLOBALS["lang"]['The OpenSCAP ecosystem provides multiple tools to assist administrators and auditors with assessment, measurement, and enforcement of security baselines including a wide variety of hardening guides and configuration baselines developed by the open source community, ensuring that you can choose a security policy which best suits the needs of your organization, regardless of its size.'] = 'Ekosystém OpenSCAP poskytuje několik nástrojů, které pomáhají administrátorům a auditorům při hodnocení, měření a prosazování základních bezpečnostních linií včetně široké škály utvrzovacích vodítek a základních konfiguračních linií vytvořených komunitou open source, čímž zajišťuje, že si můžete zvolit bezpečnostní politiku, která nejlépe vyhovuje potřebám vaší organizace, bez ohledu na její velikost.';

$GLOBALS["lang"]['The OpenSCAP project is a collection of open source tools for implementing and enforcing this standard, and has been awarded the SCAP 1.2 certification by NIST in 2014.'] = 'Projekt OpenSCAP je sbírkou nástrojů otevřených zdrojů pro provádění a prosazování této normy a v roce 2014 získal certifikaci SCAP 1.2 NIST.';

$GLOBALS["lang"]['The Organisation that owns this item. Links to <code>orgs.id</code>.'] = 'Organizace, která vlastní tuto položku. Odkazy na <code>orgs.id</code>.';

$GLOBALS["lang"]['The Process Identifier of the running associated discovery.'] = 'Identifikátor procesu příslušného objevu.';

$GLOBALS["lang"]['The RU positon of the top of this device.'] = 'RU poziton horní části tohoto zařízení.';

$GLOBALS["lang"]['The Racks feature is used to manage and visualize your rack use with an Organisation, Location, Building, Floor, Room and Row.'] = 'Funkce Racks se používá pro správu a vizualizaci použití racku s Organizací, Umístění, Building, Floor, Room and Row.';

$GLOBALS["lang"]['The SCAP is a specification for expressing and manipulating security data in standardized ways. SCAP uses several individual specifications in concert to automate continuous monitoring, vulnerability management, and security policy compliance evaluation reporting'] = 'SCAP je specifikace pro vyjádření a manipulaci s bezpečnostními údaji standardizovanými způsoby. SCAP používá několik individuálních specifikací v součinnosti s cílem automatizovat průběžné monitorování, řízení zranitelnosti a hodnocení dodržování bezpečnostních politik';

$GLOBALS["lang"]['The SELECT'] = 'SELECT';

$GLOBALS["lang"]['The SELECT section of the query should use full dot notation and also request the field with its full dot name. IE - SELECT devices.id AS `devices.id`. Each field should be selected in this fashion to enable GUI side attribute filtering.'] = 'V sekci SELECT dotazu by se měla použít celá tečka notace a také požádat o pole s celým tečkovým názvem. IE - SELECT zařízení. id AS "devices.id". Každé pole by mělo být zvoleno tímto způsobem, aby bylo umožněno filtrování atributů na straně GUI.';

$GLOBALS["lang"]['The SELECT section of your SQL must contain fully qualified columns and specify certain columns.'] = 'Část SELECT vašeho SQL musí obsahovat plně kvalifikované sloupce a specifikovat určité sloupce.';

$GLOBALS["lang"]['The SNMP community string.'] = 'Komunitní řetězec SNMP.';

$GLOBALS["lang"]['The SNMP v3 Authentication Passphrase.'] = 'SNMP v3 Authentication Passfrase.';

$GLOBALS["lang"]['The SNMP v3 Authentication Protocol.'] = 'SNMP v3 Authentication Protocol.';

$GLOBALS["lang"]['The SNMP v3 Privacy Passphrase.'] = 'SNMP v3 Privacy Passprase.';

$GLOBALS["lang"]['The SNMP v3 Privacy Protocol.'] = 'SNMP v3 Privacy Protocol.';

$GLOBALS["lang"]['The SNMP v3 Security Level.'] = 'Bezpečnostní stupeň SNMP v3.';

$GLOBALS["lang"]['The SNMP v3 Security Name.'] = 'Bezpečnostní jméno SNMP v3.';

$GLOBALS["lang"]['The SNMPv3 context Engine ID (optional).'] = 'Kontextové ID motoru SNMPv3 (nepovinné).';

$GLOBALS["lang"]['The SNMPv3 context Name (optional).'] = 'Kontextový název SNMPv3 (nepovinné).';

$GLOBALS["lang"]['The SQL cannot contain <strong>WHERE @filter OR</strong>. That SQL will not be executed, however <strong>WHERE @filter AND</strong> queries are allowed.'] = 'SQL nemůže obsahovat <strong>Where @ filter OR</strong>. SQL však nebude proveden. <strong>Where @ filter AND</strong> Dotazy jsou povoleny.';

$GLOBALS["lang"]['The SQL queries used in Open-AudIT require the use of the backtick - ` character and NOT the standard single quote for fields. On most US Windows keyboards the backtick key is located in the top-left of the keyboard along with the tilde ~. On a US Mac keyboard the backtick key is located next to the SHIFT key. The standard single quote is still used to enclose values as the examples below illustrate.'] = 'SQL dotazy používané v Open- Audit vyžadují použití backtick - \'znaku a NENÍ standardní jednotnou citaci pro pole. Na většině amerických klávesnice Windows je backtick klíč se nachází v horní levé části klávesnice spolu s tilde ~. Na klávesnici US Mac je backtick klíč umístěn vedle klávesy SHIFT. Standardní jednotná citace se stále používá k zahrnutí hodnot, jak ilustrují níže uvedené příklady.';

$GLOBALS["lang"]['The SQL query is essentially broken into three parts.'] = 'Otázka SQL je v podstatě rozdělena na tři části.';

$GLOBALS["lang"]['The Standards functionality in Open-AudIT allows you to, ahead of time, complete the questions auditors require when completing ISO 27001 certification.'] = 'Funkčnost standardů v Open- Auditu vám umožňuje, abyste v předstihu vyplnili otázky, které auditoři požadují při dokončení certifikace ISO27001.';

$GLOBALS["lang"]['The URL of the external system.'] = 'URL externího systému.';

$GLOBALS["lang"]['The URL of your Open-AudIT Server that this Collector will report to (no trailing slash).'] = 'URL vašeho Open- Audit Server, na který se tento Sběratel bude hlásit (žádné sledování lomítko).';

$GLOBALS["lang"]['The URL the audit scripts should submit their result to.'] = 'URL skripty pro audit by měly předložit svůj výsledek.';

$GLOBALS["lang"]['The User endpoint allows you to manage user accounts within Open-AudIT.'] = 'Uživatelský endpoint vám umožní spravovat uživatelské účty v rámci Open- Audit.';

$GLOBALS["lang"]['The WHERE'] = 'KDE';

$GLOBALS["lang"]['The WHERE section of your SQL <em>must</em> contain'] = 'KDE část vašeho SQL <em>musí</em> obsahovat';

$GLOBALS["lang"]['The Windows'] = 'Okna';

$GLOBALS["lang"]['The Windows log may say the following'] = 'Záznam Windows může říci následující';

$GLOBALS["lang"]['The account must have a password; WMI does not allow blank passwords.'] = 'Účet musí mít heslo; WMI neumožňuje prázdná hesla.';

$GLOBALS["lang"]['The account password must NOT contain \" (double quotes). This is because cscript (and wscript) cannot parse argument values containing double quotes. They are simply stripped. No (before you ask) escaping will not work. This is a cscript limitation and nothing to do with Open-AudIT.'] = 'Heslo účtu NESMÍ obsahovat\ "(dvojité uvozovky). Je to proto, že cscript (a wscript) nemůže rozdělovat hodnoty argumentu obsahující dvojité citace. Jsou jednoduše svléknuté. Žádný útěk nebude fungovat. Toto je omezení cscriptu a nemá to nic společného s Open- Audit.';

$GLOBALS["lang"]['The actual full name of this user.'] = 'Skutečné celé jméno tohoto uživatele.';

$GLOBALS["lang"]['The address of the Open-AudIT server submit page.'] = 'Adresa stránky Open- AudiT serveru.';

$GLOBALS["lang"]['The administrator supplied credentials that were successfully used to bind to LDAP.'] = 'Správce poskytl pověřovací listiny, které byly úspěšně použity k navázání na LDAP.';

$GLOBALS["lang"]['The administrator supplied credentials to bind to the LDAP server, but they have not been accepted by the LDAP sevrer. Double check the credentials work on the LDAP server, and then check (or reset them) in the Open-AudIT LDAP Server entry.'] = 'Správce dodal pověřovací listiny, které se vážou na LDAP server, ale nebyly přijaty LDAP sedmirer. Dvakrát zkontrolujte pověřovací listiny práce na LDAP serveru, a pak zkontrolovat (nebo resetovat) v Open- Audit LDAP Server záznamu.';

$GLOBALS["lang"]['The agent and server are also intelligent enough to self-update the agent if a newer version is installed on the server (say after upgrading Open-AudIT).'] = 'Agent a server jsou také dostatečně inteligentní pro samoaktualizaci agenta, pokud je na serveru nainstalována novější verze (řekněme po upgrade Open- Audit).';

$GLOBALS["lang"]['The agent should download a fresh copy of the audit script, run it and submit the result to the server.'] = 'Agent by měl stáhnout novou kopii auditního skriptu, spustit ho a předložit výsledek serveru.';

$GLOBALS["lang"]['The application creates temporary audit scrtips here, copies them to the target machines, then deletes them.'] = 'Aplikace zde vytvoří dočasné kontrolní škrabky, zkopíruje je do cílových strojů a pak je vymaže.';

$GLOBALS["lang"]['The associated baseline. Links to <code>baselines.id</code>.'] = 'Související výchozí hodnota. Odkazy na <code>baselines.id</code>.';

$GLOBALS["lang"]['The associated discovery (if required). Links to <code>discoveries.id</code>.'] = 'Související objev (v případě potřeby). Odkazy na <code>discoveries.id</code>.';

$GLOBALS["lang"]['The attribute to test (from the <code>devices</code> table).'] = 'Atribut k testování (od <code>devices</code> Tabulka).';

$GLOBALS["lang"]['The attribute to test (must match an external field name from below).'] = 'Atribut pro test (musí odpovídat názvu vnějšího pole níže).';

$GLOBALS["lang"]['The attributes for discovery scan options are as below.'] = 'Atributy pro možnosti vyhledávání jsou níže.';

$GLOBALS["lang"]['The audit script upon which to base your customisations.'] = 'Auditní skript, na kterém se zakládá vaše přizpůsobení.';

$GLOBALS["lang"]['The audit script will use the files[ ] array and retrieve the file details.'] = 'Auditní skript použije pole souborů [] a získá detaily souborů.';

$GLOBALS["lang"]['The audit scripts all accept a debugging argument. You can run the script utilizing that and see in more detail what the issue is. And if you cannot figure it out - that is what we are here for! Open a support case and we will get things running in no time.'] = 'Auditní scénáře všechny akceptují ladění argument. Můžete spustit skript pomocí toho a vidět podrobněji, co je problém. A pokud na to nemůžete přijít - proto jsme tady! Otevřete podpůrný případ a za chvíli to začne.';

$GLOBALS["lang"]['The base path from which to search for Users.'] = 'Základní cesta, ze které hledat uživatele.';

$GLOBALS["lang"]['The below steps are not the fault of or unique to Open-AudIT and would affect <strong>any</strong> discovery application using remote WMI and/or Windows.'] = 'Níže uvedené kroky nejsou chybou nebo unikátní Open- Audit a by ovlivnit <strong>jakékoli</strong> vyhledávací aplikace pomocí vzdáleného WMI a / nebo Windows.';

$GLOBALS["lang"]['The benchmark type.'] = 'Typ referenční hodnoty.';

$GLOBALS["lang"]['The building the rack is located in.'] = 'Budova rack se nachází v.';

$GLOBALS["lang"]['The calculated number of devices to be created externally.'] = 'Vypočítaný počet zařízení, která mají být vytvořena externě.';

$GLOBALS["lang"]['The calculated number of devices to be created in Open-AudIT.'] = 'Vypočítaný počet zařízení, která mají být vytvořena v Open- Audit.';

$GLOBALS["lang"]['The client ID is the ID of an Azure Active Directory application. The client secret is the key that you give that application.'] = 'ID klienta je ID aplikace Azure Active Directory. Klientské tajemství je klíčem k žádosti.';

$GLOBALS["lang"]['The collector is essentially a full install of Open-AudIT in <i>collector</i> mode. The collector is designed to run discovery upon the network it is situated in. It is not restricted to only that network, but ideally it would essentially be one collector per subnet where required. The collector is driven on a schedule by the server and runs discovery upon the network as specified.<br>When in Stand Alone mode the Collector acts as an independant server, simply forwarding all devices found to the main server.<br><br>Once installed and setup, control of the Collector is performed on the Server (not in Stand Alone mode).<br><br>The only required network ports between the collector and server are 80 or 443 (TCP connection established from the Collector to the Server). The Open-AudIT database is not (and cannot be) shared between these installs.<br><br>By default the collector (not in Stand Alone mode) will request from the server any discovery tasks every 5 minutes (you can configure this on the server for new Collectors using the configuration item collector_check_minutes) therefor any discovery tasks for the collector should be scheduled for 0, 5, 10, 15, etc minutes.'] = 'Sběratel je v podstatě kompletní instalace Open- Auditu v <i>kolektor</i> režim. Sběratel je určen pro spuštění objevu na síti, ve které se nachází. Není omezena pouze na tuto síť, ale v ideálním případě by to byl v podstatě jeden kolektor na podsíť, pokud je to požadováno. Sběratel je řízen podle plánu serverem a provádí objev na síti, jak je uvedeno.<br/>When in Stand Samostatný režim Sběratel funguje jako nezávislý server, jednoduše předává všechna nalezená zařízení na hlavní server.<br/><br/>Po instalaci a nastavení je ovládání Sběratele prováděno na serveru (nikoli v režimu Stand Alone).<br/><br/>Jediné požadované síťové porty mezi kolektorem a serverem jsou 80 nebo 443 (TCP spojení zavedeno ze Sběratele na Server). Databáze Open- AudiT není (a nemůže být) sdílena mezi těmito instalátory.<br/><br/>Ve výchozím nastavení si sběratel (ne v režimu Stand Alone) od serveru vyžádá jakékoli vyhledávací úkoly každých 5 minut (můžete jej nastavit na serveru pro nové sběratele pomocí konfiguračního sběratele _ check _ minutes), aby byly všechny vyhledávací úkoly pro sběratele naplánovány na 0, 5, 10, 15, atd.';

$GLOBALS["lang"]['The collector is essentially a full install of Open-AudIT in <i>collector</i> mode. This mode would reduce visible functionality in an effort to simplify and focus the application. It is designed to collect information about local networks and devices, where firewall and/or network traversal is an issue from the server.'] = 'Sběratel je v podstatě kompletní instalace Open- Auditu v <i>kolektor</i> režim. Tento režim by snížil viditelnou funkčnost ve snaze zjednodušit a zaměřit aplikaci. Je navržen tak, aby shromažďoval informace o místních sítích a zařízeních, kde firewall a / nebo síť traverse je problém ze serveru.';

$GLOBALS["lang"]['The collectors internal IP used when it runs a discovery.'] = 'Náběrčí vnitřní IP používá při spuštění objevu.';

$GLOBALS["lang"]['The column name from the foreign table. Should be one of: class, environment, status, type or menu_category.'] = 'Název sloupce ze zahraniční tabulky. Měl by být jedním z: třídy, prostředí, stavu, typu nebo menu _ kategorie.';

$GLOBALS["lang"]['The command executed upon the target device or Open-AudIT server code executed during discovery.'] = 'Příkaz proveden na cílovém zařízení nebo Open- Audit server kód proveden při objevování.';

$GLOBALS["lang"]['The configuration of your cluster can be: <code>active/active</code>, <code>active/passive</code>, <code>N+1</code>, <code>N+M</code>, <code>N-to-1</code>, <code>N-to-N</code>, <code>other</code> or blank.'] = 'Konfigurace vašeho clusteru může být: <code>active/active</code>, <code>active/passive</code>, <code>N+1</code>, <code>N+M</code>, <code>N-to-1</code>, <code>N-to-N</code>, <code>other</code> nebo prázdné.';

$GLOBALS["lang"]['The credentials password. If the credentials are an SSH Key, this is the password used to unlock the key and is optional.'] = 'Heslo. Pokud jsou pověřovací listiny SSH Key, toto je heslo používané k odemknutí klíče a je volitelné.';

$GLOBALS["lang"]['The credentials supplied by the user have failed.'] = 'Údaje poskytnuté uživatelem selhaly.';

$GLOBALS["lang"]['The credentials username.'] = 'Jméno uživatele.';

$GLOBALS["lang"]['The current date and time in the format: Y-m-d H:i:s.'] = 'Aktuální datum a čas ve formátu: Y- m- d H: i: s.';

$GLOBALS["lang"]['The current date in Y-m-d format.'] = 'Aktuální datum ve formátu Y-m-d.';

$GLOBALS["lang"]['The current status of the Cloud Discovery.'] = 'Současný stav Cloud Discovery.';

$GLOBALS["lang"]['The current status of the discovery.'] = 'Současný stav objevu.';

$GLOBALS["lang"]['The dashboard that will be shown by default for this user. Links to <code>dashboards.id</code>.'] = 'Přístrojová deska, která bude zobrazena ve výchozím nastavení pro tohoto uživatele. Odkazy na <code>dashboards.id</code>.';

$GLOBALS["lang"]['The data stored in the database is not showing in the application translated. We leave the data as it is. However, there is nothing to stop you, the user, changing the name (for example) of an item in the database to your language.'] = 'Data uložená v databázi nejsou uvedena v přeložené aplikaci. Zanecháváme data tak, jak jsou. Nicméně, není nic, co by vás, uživatele, zastavit, změna jména (například) položky v databázi na váš jazyk.';

$GLOBALS["lang"]['The data you input will be used in a <code>LIKE</code> clause, not (as per the API) an <code>equals</code> clause. Another example - if you input <code>comput</code>, it would still return all computers. And because we are using a <code>LIKE</code> clause, it is case-insensitive.'] = 'Údaje, které vložíte budou použity v <code>LIKE</code> doložka, ne (podle API) <code>equals</code> Doložka. Další příklad - pokud zadáte <code>comput</code>Pořád by to vrátilo všechny počítače. A protože používáme <code>LIKE</code> klauzule, je to případ-necitlivý.';

$GLOBALS["lang"]['The database schema can be found in the application if the user has database::read permission by going to menu: Admin -> Database ->'] = 'Databázové schéma lze nalézt v aplikaci, pokud má uživatel databázi:: načíst oprávnění v menu: Admin - > Databáze - >';

$GLOBALS["lang"]['The database version and web version are inconsistent.'] = 'Databázová verze a webová verze jsou nekonzistentní.';

$GLOBALS["lang"]['The date of license expiration.'] = 'Datum vypršení platnosti licence.';

$GLOBALS["lang"]['The date the software is discontinued by the manufacturer. Usually replaced by a newer version. Maintenance may still be available.'] = 'Datum ukončení platnosti softwaru výrobcem. Obvykle nahrazena novější verzí. Údržba může být stále k dispozici.';

$GLOBALS["lang"]['The date the software no longer receives updates and is effectively discontinued altogether. Maintenance is discontinued.'] = 'Datum, kdy software již neobdrží aktualizace a je účinně zcela přerušen. Udržování je přerušeno.';

$GLOBALS["lang"]['The date this item was changed or added (read only). NOTE - This is the timestamp from the server.'] = 'Datum, kdy byla tato položka změněna nebo přidána (pouze ke čtení). POZNÁMKA - Toto je časové razítko ze serveru.';

$GLOBALS["lang"]['The date/time when this result was created.'] = 'Datum / čas, kdy byl výsledek vytvořen.';

$GLOBALS["lang"]['The day of the month when this task should execute (* for every day).'] = 'Den měsíce, kdy má být tento úkol vykonán (* za každý den).';

$GLOBALS["lang"]['The day of the week when this task should execute (* for every day).'] = 'Den v týdnu, kdy má být tento úkol vykonán (* za každý den).';

$GLOBALS["lang"]['The debug level (will output to command prompt window). Lower means less output with 0 being no output.'] = 'Úroveň ladění (bude výstup pro příkazové okno). Nižší znamená menší výstup s 0 bez výstupu.';

$GLOBALS["lang"]['The default discovery scan option is the UltraFast set.'] = 'Výchozí volbou vyhledávání je UltraFast.';

$GLOBALS["lang"]['The default language assigned to any user created by this method.'] = 'Výchozí jazyk přidělený každému uživateli vytvořenému touto metodou.';

$GLOBALS["lang"]['The device must respond to an Nmap ping before it is considered online.'] = 'Zařízení musí reagovat na ping Nmap předtím, než je považováno za online.';

$GLOBALS["lang"]['The device within Open-AudIT. Links to <code>devices.id</code>.'] = 'Zařízení v Open- Audit. Odkazy na <code>devices.id</code>.';

$GLOBALS["lang"]['The direct link for the script is'] = 'Přímý odkaz pro skript je';

$GLOBALS["lang"]['The email address of the receiver'] = 'E-mailová adresa příjemce';

$GLOBALS["lang"]['The enterprise binary from FirstWave is required for a license. Please download Open-AudIT from'] = 'Pro licenci je vyžadována podniková binárka z FirstWave. Stáhněte si prosím Open- Audit z';

$GLOBALS["lang"]['The entire associated baseline this result is from.'] = 'Tento výsledek je odvozen z celé související výchozí hodnoty.';

$GLOBALS["lang"]['The exploited vulnerability can affect resources beyond the security authority of the vulnerable component. This usually means a privilege or trust boundary is crossed (for example, escaping from a container to the host OS).'] = 'Využívaná zranitelnost může ovlivnit zdroje mimo bezpečnostní orgán zranitelné složky. To obvykle znamená, že je překročena výsada nebo hranice důvěry (například, útěk z kontejneru do hostitelského OS).';

$GLOBALS["lang"]['The exploited vulnerability only impacts resources within the same security authority as the vulnerable component. In other words, the attacker’s actions stay within the original trust boundary.'] = 'Využívaná zranitelnost ovlivňuje pouze zdroje v rámci téhož bezpečnostního orgánu jako zranitelná složka. Jinými slovy, útočníkovy činy zůstávají v rámci původní hranice důvěry.';

$GLOBALS["lang"]['The externally referenced location ID. Usually populated by Cloud audits.'] = 'Identifikace externě odkazovaného místa. Obvykle osídlené audity v Cloudu.';

$GLOBALS["lang"]['The fields associated with an Integration are stored in the database as a JSON array of objects. Each field has the following attributes'] = 'Pole spojená s integrací jsou uložena v databázi jako JSON pole objektů. Každé pole má následující atributy';

$GLOBALS["lang"]['The first time that Open-AudIT retrieved details of this device.'] = 'Poprvé, kdy Open- Audit získal detaily tohoto zařízení.';

$GLOBALS["lang"]['The floor the rack is located on.'] = 'Podlaha racku se nachází na.';

$GLOBALS["lang"]['The foreign table to reference. Should be one of: devices, locations, orgs or queries.'] = 'Cizí tabulka k referenci. Měl by být jedním z: zařízení, umístění, orgy nebo dotazy.';

$GLOBALS["lang"]['The format of your data should be in the form'] = 'Formát Vašich dat by měl být ve formě';

$GLOBALS["lang"]['The format used for the output to be emailed.'] = 'Formát používaný pro emailový výstup.';

$GLOBALS["lang"]['The fully qualified column upon which to group by. NOTE: When type = traffic, this represents the red query id.'] = 'Plně kvalifikovaný sloupec, podle kterého se má seskupit. POZNÁMKA: Pokud typ = provoz, to představuje červený dotaz id.';

$GLOBALS["lang"]['The fully qualified name returned by the external system. EG: for NMIS we use configuration.roleType.'] = 'Plně kvalifikovaný název vrácený externím systémem. EG: pro NMIS používáme konfiguraci. role Typ.';

$GLOBALS["lang"]['The fully qualified table.column. Multiple may be provided, separated by a comma (no spaces).'] = 'Plně kvalifikovaný stůl. Násobek může být poskytnut, oddělený čárkou (bez mezer).';

$GLOBALS["lang"]['The generated SQL query to test for this vulnerability. This field can be edited to correct the query as required.'] = 'Vygenerovaný SQL dotaz pro testování této zranitelnosti. Toto pole lze upravit tak, aby bylo možné dotaz opravit podle potřeby.';

$GLOBALS["lang"]['The group of devices on which the baseline was run against.'] = 'Skupina zařízení, na nichž byla základní hodnota spuštěna proti.';

$GLOBALS["lang"]['The group that provides a list of devices for the integration. Links to <code>groups.id</code>.'] = 'Skupina, která poskytuje seznam zařízení pro integraci. Odkazy na <code>groups.id</code>.';

$GLOBALS["lang"]['The hour of the day when this task should execute (* for every hour).'] = 'Hodina dne, kdy má být tento úkol vykonán (* za každou hodinu).';

$GLOBALS["lang"]['The id of the linked device. Links to <code>devices.id</code>'] = 'Identifikace propojeného zařízení. Odkazy na <code>devices.id</code>';

$GLOBALS["lang"]['The identifier column (integer) in the database (read only).'] = 'Identifikátor sloupce (celé číslo) v databázi (pouze pro čtení).';

$GLOBALS["lang"]['The importance of this baseline (not used yet).'] = 'Význam této výchozí hodnoty (dosud se nepoužívá).';

$GLOBALS["lang"]['The integer of severity.'] = 'Celé číslo závažnosti.';

$GLOBALS["lang"]['The internal value, reformatted in this format.'] = 'Interní hodnota, reformátována v tomto formátu.';

$GLOBALS["lang"]['The ip address of the Auth method.'] = 'IP adresa metody Auth.';

$GLOBALS["lang"]['The language to translate the web interface into for the user.'] = 'Jazyk přeložit webové rozhraní do pro uživatele.';

$GLOBALS["lang"]['The last date and time this item was executed (read only).'] = 'Poslední datum a čas provedení této položky (pouze ke čtení).';

$GLOBALS["lang"]['The last time that Open-AudIT retrieved details of this device.'] = 'Naposledy, když Open- Audit získal detaily tohoto zařízení.';

$GLOBALS["lang"]['The last time this benchmarks was executed.'] = 'Naposledy byla tato měřítka provedena.';

$GLOBALS["lang"]['The last time this integration was run.'] = 'Naposledy byla tato integrace vedena.';

$GLOBALS["lang"]['The license endpoint allows you to track the number of licenses found on your devices.'] = 'Endpoint licence vám umožní sledovat počet licencí nalezených na vašich zařízeních.';

$GLOBALS["lang"]['The line number assigned by the provider to the line at this end of the connection.'] = 'Číslo řádku přidělené poskytovatelem na řádku na tomto konci spojení.';

$GLOBALS["lang"]['The location the rack is located in. Links to <code>locations.id</code>.'] = 'Umístění rack se nachází v. Odkazy na <code>locations.id</code>.';

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

$GLOBALS["lang"]['The logic for device matching is contained in the devices_helper.php file, which on a Linux install can be found here'] = 'Logika pro porovnávání zařízení je obsažena v souboru zařízení _ helper.php, který lze na instalaci Linux nalézt zde';

$GLOBALS["lang"]['The machine-default permission settings do not grant Local Activation permission for the COM Server application with'] = 'Nastavení stroj- default oprávnění neuděluje místnímu aktivaci oprávnění pro aplikaci COM Server';

$GLOBALS["lang"]['The maximum physical weight (in KGs) this rack can hold.'] = 'Maximální tělesná hmotnost (v KG), který tento rack vydrží.';

$GLOBALS["lang"]['The maximum total BTUs this rack is rated for.'] = 'Maximální celkový BTU tento rack je hodnocen pro.';

$GLOBALS["lang"]['The minimum required attributes for attributes are'] = 'Minimální požadované atributy pro atributy jsou';

$GLOBALS["lang"]['The minute of the hour when this task should execute (* for every minute).'] = 'Minuta hodiny, kdy by tento úkol měl být proveden (* za každou minutu).';

$GLOBALS["lang"]['The month of the year when this task should execute (* for every month).'] = 'Měsíc roku, kdy má být tento úkol vykonán (* za každý měsíc).';

$GLOBALS["lang"]['The name given to this item.'] = 'Název uvedený v této položce.';

$GLOBALS["lang"]['The name given to this item. Ideally it should be unique.'] = 'Název uvedený v této položce. V ideálním případě by to mělo být jedinečné.';

$GLOBALS["lang"]['The name given to this user (used to login). Ideally it should be unique.'] = 'Jméno dané tomuto uživateli (používá se k přihlášení). V ideálním případě by to mělo být jedinečné.';

$GLOBALS["lang"]['The name of the associated cloud (if required).'] = 'Název příslušného cloudu (je-li požadován).';

$GLOBALS["lang"]['The name of the software package, as audited by Open-AudIT. Use the percent sign % as a wildcard.'] = 'Název softwarového balíčku, který ověřil Open- Audit. Použijte procento znaménka% jako divokou kartu.';

$GLOBALS["lang"]['The name of the user who last changed or added this item (read only).'] = 'Jméno uživatele, který tuto položku naposledy změnil nebo přidal (pouze ke čtení).';

$GLOBALS["lang"]['The name provided by the provider.'] = 'Jméno poskytovatele.';

$GLOBALS["lang"]['The network in the format 192.168.1.0/24.'] = 'Síť ve formátu 192.168.1.0 /24.';

$GLOBALS["lang"]['The network subnet to execute the discovery on.'] = 'Síťová podsíť k provedení objevu.';

$GLOBALS["lang"]['The new Agent runs a PowerShell version of the old audit script in preparation for the depreciation of VBScript (yes, it is coming).'] = 'Nový agent běží PowerShell verzi starého auditního skriptu v přípravě na odpisy VBScript (ano, přichází).';

$GLOBALS["lang"]['The number of RUs this device occupies.'] = 'Počet ŽP, které toto zařízení využívá.';

$GLOBALS["lang"]['The number of associated locations. Links to <code>locations.cloud_id</code>.'] = 'Počet přidružených míst. Odkazy na <code>locations.cloud_id</code>.';

$GLOBALS["lang"]['The number of associated networks. Links to <code>networks.cloud_id</code>.'] = 'Počet přidružených sítí. Odkazy na <code>networks.cloud_id</code>.';

$GLOBALS["lang"]['The number of audited devices in this cloud. Links to <code>devices.cloud_id</code> and <code>devices.serial</code>.'] = 'Počet kontrolovaných zařízení v tomto cloudu. Odkazy na <code>devices.cloud_id</code> a <code>devices.serial</code>.';

$GLOBALS["lang"]['The number of critical severity vulnerabilities held by FirstWave (not in your database).'] = 'Počet kritických zranitelných míst v držení FirstWave (není ve vaší databázi).';

$GLOBALS["lang"]['The number of devices found by this discovery.'] = 'Počet zařízení nalezených tímto objevem.';

$GLOBALS["lang"]['The number of devices in the associated group.'] = 'Počet zařízení v přidružené skupině.';

$GLOBALS["lang"]['The number of devices in this cloud with a state of running. Links to <code>devices.cloud_id</code> and <code>devices.instance_state</code>.'] = 'Počet zařízení v tomto cloudu se stavem běhu. Odkazy na <code>devices.cloud_id</code> a <code>devices.instance_state</code>.';

$GLOBALS["lang"]['The number of devices in this cloud with a state of stopped. Links to <code>devices.cloud_id</code> and <code>devices.instance_state</code>.'] = 'Počet zařízení v tomto cloudu se stavu zastavil. Odkazy na <code>devices.cloud_id</code> a <code>devices.instance_state</code>.';

$GLOBALS["lang"]['The number of devices in this cloud. Links to <code>devices.cloud_id</code>.'] = 'Počet zařízení v tomto cloudu. Odkazy na <code>devices.cloud_id</code>.';

$GLOBALS["lang"]['The number of devices this benchmark will be executed upon. Derived from <code>benchmarks.devices</code>.'] = 'Počet zařízení, na která bude tato referenční hodnota provedena. Odvozené od <code>benchmarks.devices</code>.';

$GLOBALS["lang"]['The number of devices to limit this discovery to.'] = 'Počet zařízení k omezení tohoto objevu.';

$GLOBALS["lang"]['The number of high severity vulnerabilities held by FirstWave (not in your database).'] = 'Počet vysoce závažných zranitelných míst v držení FirstWave (není ve vaší databázi).';

$GLOBALS["lang"]['The number of low severity vulnerabilities held by FirstWave (not in your database).'] = 'Počet slabých míst nízké závažnosti v držení FirstWave (není ve vaší databázi).';

$GLOBALS["lang"]['The number of medium severity vulnerabilities held by FirstWave (not in your database).'] = 'Počet středně závažných zranitelností v držení FirstWave (není ve vaší databázi).';

$GLOBALS["lang"]['The number of purchased licenses.'] = 'Počet zakoupených licencí.';

$GLOBALS["lang"]['The number of seconds to try and communicate with the target IP.'] = 'Počet sekund pro pokus o komunikaci s cílovou IP.';

$GLOBALS["lang"]['The number of vulnerabilities without a severity held by FirstWave (not in your database).'] = 'Počet zranitelných míst bez závažnosti v držení FirstWave (není ve vaší databázi).';

$GLOBALS["lang"]['The offset is the count of devices you wish to return data from.'] = 'Odstupem je počet zařízení, ze kterých chcete vrátit data.';

$GLOBALS["lang"]['The only required permission / policy name (in our testing) is'] = 'Jediné požadované oprávnění / název politiky (v našem testování) je';

$GLOBALS["lang"]['The optional secondary column. NOTE: When type = traffic, this represents the yellow query id.'] = 'Volitelný sekundární sloupec. POZNÁMKA: Pokud typ = provoz, to představuje žlutý dotaz id.';

$GLOBALS["lang"]['The optional third column. NOTE: When type = traffic, this represents the green query id.'] = 'Volitelný třetí sloupec. POZNÁMKA: Pokud typ = provoz, to představuje zelený dotaz id.';

$GLOBALS["lang"]['The order of information retrieval is snmp, ssh, wmi.'] = 'Pořadí vyhledávání informací je snmp, ssh, wmi.';

$GLOBALS["lang"]['The orientation of this device.'] = 'Orientace tohoto zařízení.';

$GLOBALS["lang"]['The password (if not using the user running the script).'] = 'Heslo (není-li použit uživatel spuštěný skript).';

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

$GLOBALS["lang"]['The primary method for authorization (what a user can do) is now based on the users Roles. Roles are defined as admin, org_admin, reporter, and user by default. Each role has a set of permissions (Create, Read, Update, Delete) for each endpoint. Standard roles as shipped should cover 99.9 percent of use-cases. The ability to define additional roles and edit existing roles is enabled in Open-AudIT Enterprise.'] = 'Primární metoda pro autorizaci (co může uživatel udělat) je nyní založena na uživatelích Roles. Role jsou definovány jako admin, org _ admin, reportér, a uživatel ve výchozím nastavení. Každá role má soubor oprávnění (Vytvořit, přečíst, Aktualizovat, Smazat) pro každý koncový bod. Standardní role jako dodávané by měly pokrývat 99,9% uživatelských případů. Schopnost definovat další role a upravovat stávající role je povolena v Open- Audit Enterprise.';

$GLOBALS["lang"]['The process identifier of this queue item.'] = 'Identifikátor procesu této položky fronty.';

$GLOBALS["lang"]['The process that was used last to retrieve details about the device'] = 'Proces, který byl použit jako poslední k získání detailů o zařízení';

$GLOBALS["lang"]['The purpose of this licensing page is to list the products and licenses included in Firstwave Commercial products including products based upon open source works.Open-AudIT is licensed from Firstwave under AGPLv3 or later with Enterprise and Professional functionality licensed under commercial terms.Open-AudIT when downloaded from FirstWave may include the following libraries and projects, which are supplied unmodified and licensed as indicated:'] = 'Účelem této licenční stránky je seznam výrobků a licencí zahrnutých v firstwave Commercial products včetně výrobků založených na open source works. Open- Audit je licencován z Firstwave pod AGPLv3 nebo později s funkcí Enterprise a Professional licencované za komerčních podmínek. Open- Audit při stažení z FirstWave může zahrnovat následující knihovny a projekty, které jsou dodávány nemodifikované a licencované, jak je uvedeno:';

$GLOBALS["lang"]['The query that provides a list of devices for the integration. Links to <code>queries.id</code>.'] = 'Dotaz, který poskytuje seznam zařízení pro integraci. Odkazy na <code>queries.id</code>.';

$GLOBALS["lang"]['The rack asset number.'] = 'Číslo aktiva rack.';

$GLOBALS["lang"]['The rack asset tag.'] = 'Značka aktiva rack.';

$GLOBALS["lang"]['The rack bar code.'] = 'Kód věšáku.';

$GLOBALS["lang"]['The rack model.'] = 'Model racku.';

$GLOBALS["lang"]['The rack serial.'] = 'Série racků.';

$GLOBALS["lang"]['The rack series.'] = 'Série racků.';

$GLOBALS["lang"]['The rack this device is located in. Links to <code>racks.id</code>.'] = 'Věšák, ve kterém je to zařízení. Odkazy na <code>racks.id</code>.';

$GLOBALS["lang"]['The recommended process of addressing and fixing identified security vulnerabilities. This typically involves applying patches, updates, or other measures to eliminate the risk posed by the vulnerabilities.'] = 'Doporučený proces řešení a stanovení zjištěných bezpečnostních zranitelností. To obvykle zahrnuje použití náplastí, aktualizací nebo jiných opatření k odstranění rizika, které představují slabiny.';

$GLOBALS["lang"]['The regular domain notation of your directory. Eg - <code>open-audit.lan</code>.'] = 'Pravidelná notace domény vašeho adresáře. Eg... <code>open-audit.lan</code>.';

$GLOBALS["lang"]['The requested properties should be in a comma-separated list. Properties should be fully qualified - ie, system.hostname (not just hostname).'] = 'Požadované vlastnosti by měly být v seznamu odděleném od kommat. Vlastnosti by měly být plně kvalifikovány - tj., system.hostname (nejen jméno hostitele).';

$GLOBALS["lang"]['The result of the command.'] = 'Výsledek příkazu.';

$GLOBALS["lang"]['The room the rack is located in.'] = 'Pokoj rack se nachází v.';

$GLOBALS["lang"]['The row the rack is located in.'] = 'Řádek rack se nachází v.';

$GLOBALS["lang"]['The search for group on the LDAP server failed. Check the LDAP server logs. Have you created these groups (for roles and orgs) on the LDAP server and assigned LDAP users to them?'] = 'Hledání skupiny na LDAP serveru selhalo. Zkontrolujte záznamy LDAP serveru. Vytvořili jste tyto skupiny (pro role a orgy) na serveru LDAP a přiřadili jste jim uživatele LDAP?';

$GLOBALS["lang"]['The secret key used in conjunction with your AWS EC2 API key.'] = 'Tajný klíč použitý ve spojení s vaším AWS EC2 API klíčem.';

$GLOBALS["lang"]['The software end-of-life date.'] = 'Datum konce života.';

$GLOBALS["lang"]['The software end-of-service-life date.'] = 'Datum konce životnosti softwaru.';

$GLOBALS["lang"]['The specific database column from the specified database table.'] = 'Specifický sloupec databáze ze zadané tabulky databáze.';

$GLOBALS["lang"]['The specific database table.'] = 'Specifická tabulka databáze.';

$GLOBALS["lang"]['The standard Nmap timing options. Previously set at T4 (aggressive).'] = 'Standardní možnosti Nmap načasování. V minulých dílech jste viděli...';

$GLOBALS["lang"]['The standard Nmap timing options. We usually use -T4 (Aggressive) as this is recommended for a decent broadband or ethernet connection.'] = 'Standardní možnosti Nmap načasování. Obvykle používáme -T4 (Agresivní), protože to je doporučeno pro slušné širokopásmové nebo ethernetové připojení.';

$GLOBALS["lang"]['The status of this integration'] = 'Status této integrace';

$GLOBALS["lang"]['The status of this queued item.'] = 'Stav této položky.';

$GLOBALS["lang"]['The steps below outline the process.'] = 'Níže uvedené kroky nastiňují proces.';

$GLOBALS["lang"]['The target IP this log entry referers to (if any).'] = 'Cílový IP tento záznam referenti na (pokud existuje).';

$GLOBALS["lang"]['The target computer to audit. \".\" means localhost.'] = 'Cílový počítač pro audit.\. "\" znamená localhost.';

$GLOBALS["lang"]['The template for the link to be generated per result line.'] = 'Šablona pro odkaz, který má být vytvořen na řádek výsledku.';

$GLOBALS["lang"]['The text for the bottom of the chart in a line chart (only).'] = 'Text pro spodní část grafu v řádku grafu (pouze).';

$GLOBALS["lang"]['The text that is displayed.'] = 'Text, který je zobrazen.';

$GLOBALS["lang"]['The timestamp after which, this task should run. For example, run a task after the 1st June 2017 at 10am, set it to <code>2017-06-01 09:59:00</code>. This value should be zero padded (ie, 09, not 9). This value defaults to <code>2000-01-01 00:00:00</code> which means by default, a scheduled task will run at next scheduled execution time.'] = 'Časová známka, po které by měl tento úkol běžet. Například, spustit úkol po 1. června 2017 v 10 hodin, nastavit na <code>2017-06-01 09:59:00</code>. Tato hodnota by měla být nulová (tj. 09, ne 9). Tato hodnota selhává <code>2000-01-01 00:00:00</code> což znamená, že ve výchozím nastavení bude v příštím plánovaném čase provedení probíhat plánovaný úkol.';

$GLOBALS["lang"]['The top 10, 100 or 1000 (or none) TCP ports commonly in use according to Nmap.'] = 'Top 10, 100 nebo 1000 (nebo žádné) TCP portů běžně používané podle Nmap.';

$GLOBALS["lang"]['The top 10, 100 or 1000 (or none) UDP ports commonly in use according to Nmap.'] = 'Top 10, 100 nebo 1000 (nebo žádné) UDP portů běžně používané podle Nmap.';

$GLOBALS["lang"]['The total BTU output by this rack.'] = 'Celkový BTU výstup tímto rackem.';

$GLOBALS["lang"]['The type of device.'] = 'Typ zařízení.';

$GLOBALS["lang"]['The type of organisation.'] = 'Typ organizace.';

$GLOBALS["lang"]['The type of rack (compute, power, network, etc).'] = 'Typ racku (výpočet, výkon, síť, atd.).';

$GLOBALS["lang"]['The type of task to run. One of: baseline, benchmark, cloud discovery, discovery, integration, report, query.'] = 'Typ úkolu. Jeden z: základní, referenční, objev mraků, objev, integrace, zpráva, dotaz.';

$GLOBALS["lang"]['The type of the integration (usually named after the external system).'] = 'Typ integrace (obvykle pojmenovaný po vnějším systému).';

$GLOBALS["lang"]['The unfiltered state means that a port is accessible, but Nmap is unable to determine whether it is open or closed. Only the ACK scan, which is used to map firewall rulesets, classifies ports into this state. Scanning unfiltered ports with other scan types such as Window scan, SYN scan, or FIN scan, may help resolve whether the port is open.'] = 'Nefiltrovaný stav znamená, že port je přístupný, ale Nmap není schopen určit, zda je otevřen nebo uzavřen. Pouze ACK scan, který se používá k mapování pravidel firewall, klasifikuje porty do tohoto stavu. Skenování nefiltrovaných portů s jinými typy skenování, jako je skenování oken, skenování SYN nebo skenování FIN, může pomoci vyřešit, zda je port otevřený.';

$GLOBALS["lang"]['The unique identifier of this server.'] = 'Jedinečný identifikátor tohoto serveru.';

$GLOBALS["lang"]['The user account this collector uses. Links to <code>users.id</code>.'] = 'Uživatelský účet tohoto sběratele. Odkazy na <code>users.id</code>.';

$GLOBALS["lang"]['The user in Active Directory / OpenLDAP must be a direct member of the required Open-AudIT groups for Roles and Orgs. A member of a group that is a member another group that is a member of the Open-AudIT group will not work.'] = 'Uživatel v Active Directory / OpenLDAP musí být přímým členem požadovaných Open- AudiT skupin pro Roles a Orgs. Člen skupiny, která je členem jiné skupiny, která je členem skupiny Open- Audit, nebude fungovat.';

$GLOBALS["lang"]['The user is in LDAP and their credentials are valid, but is not in any of the Open-AudIT LDAP groups for Orgs.'] = 'Uživatel je v LDAP a jejich pověření jsou platná, ale není v žádné ze skupin Open- Audit LDAP pro Orgs.';

$GLOBALS["lang"]['The user is in LDAP and their credentials are valid, but is not in any of the Open-AudIT LDAP groups for Roles.'] = 'Uživatel je v LDAP a jejich pověření jsou platná, ale není v žádné ze skupin Open- Audit LDAP pro Roles.';

$GLOBALS["lang"]['The user is in LDAP and their credentials are valid, but is not in any of the required Open-AudIT LDAP groups.'] = 'Uživatel je v LDAP a jejich pověření jsou platná, ale není v žádné z požadovaných Open- Audit LDAP skupin.';

$GLOBALS["lang"]['The user is in the LDAP group that matches this Org.'] = 'Uživatel je ve skupině LDAP, která odpovídá tomuto Orgu.';

$GLOBALS["lang"]['The user is in the LDAP group that matches this Role.'] = 'Uživatel je ve skupině LDAP, která odpovídá této roli.';

$GLOBALS["lang"]['The user is not in the LDAP group that matches this Org.'] = 'Uživatel není ve skupině LDAP, která odpovídá tomuto Orgu.';

$GLOBALS["lang"]['The user is not in the LDAP group that matches this Role.'] = 'Uživatel není ve skupině LDAP, která odpovídá této roli.';

$GLOBALS["lang"]['The user that was specified exists in LDAP, but Open-AudIT is not configured to consume the LDAP groups for roles and that user does not exist within Open-AudIT. Either select <i>Use LDAP for Roles</i> on the Open-AudIT LDAP Server screen or create this user within Open-AudIT and assign roles and orgs.'] = 'Uživatel, který byl zadán, existuje v LDAP, ale Open- Audit není konfigurován tak, aby spotřebovával LDAP skupiny pro role a že uživatel v Open- Auditu neexistuje. Vybrat <i>Použít LDAP pro role</i> na Open- Audit LDAP Serverová obrazovka nebo vytvoření tohoto uživatele v rámci Open- Audit a přiřazení rolí a orgů.';

$GLOBALS["lang"]['The username (if not using the user running the script).'] = 'Uživatelské jméno (pokud není používáno uživatelem spuštěným skriptem).';

$GLOBALS["lang"]['The username used to access the external system.'] = 'Uživatelské jméno používané k přístupu do vnějšího systému.';

$GLOBALS["lang"]['The users details were not retrieved from LDAP. Check the LDAP server logs.'] = 'Uživatelské údaje nebyly získány z LDAP. Zkontrolujte záznamy LDAP serveru.';

$GLOBALS["lang"]['The users details were retrieved from LDAP.'] = 'Uživatelské údaje byly získány z LDAP.';

$GLOBALS["lang"]['The users email address.'] = 'Uživatelé e-mailovou adresu.';

$GLOBALS["lang"]['The usual hours of operation at this site.'] = 'Obvyklé hodiny provozu na tomto místě.';

$GLOBALS["lang"]['The value assigned to the item.'] = 'Hodnota přiřazená položce.';

$GLOBALS["lang"]['The value that is stored for this particular item.'] = 'Hodnota, která je uložena pro tuto konkrétní položku.';

$GLOBALS["lang"]['The vendor name as per CPE entries.'] = 'Jméno prodejce podle CPE záznamů.';

$GLOBALS["lang"]['The vendor taken from the CPE.'] = 'Prodejce z CPE.';

$GLOBALS["lang"]['The web directory on the host that Open-AudIT is installed (requires a trailing slash).'] = 'Webový adresář na hostiteli, který je nainstalován Open- AudiT (vyžaduje vlečné lomítko).';

$GLOBALS["lang"]['The widget at position '] = 'Widget v pozici ';

$GLOBALS["lang"]['The width of this device.'] = 'Šířka tohoto zařízení.';

$GLOBALS["lang"]['Their OrgIDs and their descendants'] = 'Jejich orgány a potomci';

$GLOBALS["lang"]['Their OrgIDs only'] = 'Pouze jejich orgány';

$GLOBALS["lang"]['Their OrgIDs, ascendants and descendants'] = 'Jejich orgány, ascendenti a potomci';

$GLOBALS["lang"]['Then'] = 'Pak';

$GLOBALS["lang"]['Then create a new Auth method in Open-AudIT by going to menu -> Admin -> Auth Methods -> Create Auth. Provide a name and set the <i>type</i> to Entra.'] = 'Poté vytvořte novou metodu Auth v Open- Auditu v menu - > Admin - > Authové metody - > Vytvořit Autha. Uveďte název a zadejte <i>typ</i> Entra.';

$GLOBALS["lang"]['Then you can use Open-AudIT (unsupported) to receive audit data directly from the clients. Discovery <strong>will fail</strong>, but if youre not using Discovery (the main feature Open-AudIT was designed around), you can still get device data. You would need to run the audit scripts directly on the clients using cron, or use the Windows Agent feature (Enterprise only).'] = 'Pak můžete použít Open- Audit (bez podpory) pro příjem auditních dat přímo od klientů. Objevení <strong>selže.</strong>, ale pokud nepoužíváte Discovery (hlavní funkce Open- Audit byl navržen kolem), můžete stále získat data zařízení. Budete muset spustit auditní skripty přímo na klientech pomocí cron, nebo použít funkci Windows Agent (pouze Enterprise).';

$GLOBALS["lang"]['There is a button to export to JSON. This will display only the device table of attributes. To export the device with all associated component tables, view the device details, then add'] = 'Je tu tlačítko pro export do JSON. Zobrazí se pouze tabulka atributů zařízení. Chcete-li exportovat zařízení se všemi souvisejícími tabulkami komponent, podívejte se na detaily zařízení, pak přidat';

$GLOBALS["lang"]['There is absolutely no need to manually edit each individual device.'] = 'Není absolutně nutné ručně upravovat každé jednotlivé zařízení.';

$GLOBALS["lang"]['There is no need to do anything if you are running Open-AudIT on a Linux server.<br><br>Windows clients are just fine and require no special actions, however.... to enable this feature the audit script must be run locally on the target Windows system. It cannot be run remotely as we do with WMI calls when running the audit script on one Windows machine, while targeting a second Windows machine. To do this we need to copy the audit script to the target Windows machine and then run it. Unfortunately the service account that Apache runs under is the Local System account. This account has no access to remote (network based) resources. To work around this issue the service must be run under another account. It is easiest to just use the local Administrator account, but you can try any account you like as long as it has the required privileges. The Local System account has as much local access as the local Administrator account.'] = 'Pokud provozujete Open- Audit na Linux serveru, není třeba nic dělat.<br/><br/>Klienti Windows jsou v pořádku a nevyžadují žádné speciální akce, nicméně.... pro umožnění této funkce musí být auditní skript spuštěn lokálně na cílovém systému Windows. Nemůže být spuštěn na dálku, jak to děláme s WMI hovory při spuštění auditního skriptu na jednom zařízení Windows, při cílení na druhý Windows stroj. K tomu potřebujeme zkopírovat kontrolní skript do cílového zařízení Windows a pak jej spustit. Bohužel servisní účet, pod kterým Apache běží, je účet Local System. Tento účet nemá přístup ke vzdáleným (síťovým) zdrojům. K řešení této otázky musí být služba vedena na jiném účtu. Nejjednodušší je použít účet místního správce, ale můžete zkusit jakýkoli účet, který se vám líbí, pokud má požadované výsady. Účet místního systému má stejný místní přístup jako účet místního správce.';

$GLOBALS["lang"]['These are only examples. You may need to adjust these attributes to suit your particular LDAP.'] = 'To jsou jen příklady. Možná budete muset upravit tyto atributy tak, aby vyhovovaly vašemu konkrétnímu LDAP.';

$GLOBALS["lang"]['These parameters enable you to audit only what is useful and relevant to you, saving processing time and allowing you to discover your network in an orderly manner.'] = 'Tyto parametry vám umožní provádět audit pouze toho, co je pro vás užitečné a důležité, ušetří vám čas zpracování a umožní vám řádně objevit vaši síť.';

$GLOBALS["lang"]['Thing'] = 'Věc';

$GLOBALS["lang"]['Think of mail.domain1.com and mail.domain2.com - same hostname.'] = 'Myslete na mail.domain1.com a mail.domain2.com - stejné jméno hostitele.';

$GLOBALS["lang"]['Third'] = 'Třetí';

$GLOBALS["lang"]['This CVE will be retrieved and overwrite the existing CVE if it exists.'] = 'Toto CVE bude získáno a přepsat existující CVE, pokud existuje.';

$GLOBALS["lang"]['This Org has no AD group specified. Check the roles details within Open-AudIT.'] = 'Tento Org nemá specifikovanou skupinu AD. Zkontrolujte podrobnosti o rolích v rámci Open- Audit.';

$GLOBALS["lang"]['This Org has no AD group specified. Check the roles details within Open-AudIT. <span class=\"confluence-link\">Have you created these groups (for orgs) on the LDAP server and assigned LDAP users to them?'] = 'Tento Org nemá specifikovanou skupinu AD. Zkontrolujte podrobnosti o rolích v rámci Open- Audit. <span class=\'\"confluence-link\"\'>Vytvořili jste tyto skupiny (pro orgs) na LDAP serveru a přiřadili jste jim uživatele LDAP?</span>';

$GLOBALS["lang"]['This Role has no AD group specified. Check the roles details within Open-AudIT.'] = 'Tato role nemá specifikovanou skupinu AD. Zkontrolujte podrobnosti o rolích v rámci Open- Audit.';

$GLOBALS["lang"]['This attribute is stored as a JSON object. It is the list of all collections and contains the collection name along with <code>c</code>, <code>r</code>, <code>u</code> and,or <code>d</code> which represent create, read, update and delete. These are the actions a user can perform on items from that particular collection.'] = 'Tento atribut je uložen jako JSON objekt. Je to seznam všech kolekcí a obsahuje název kolekce spolu s <code>c</code>, <code>r</code>, <code>u</code> a nebo <code>d</code> které představují vytvoření, čtení, aktualizaci a smazání. To jsou akce, které uživatel může provádět na položky z této konkrétní sbírky.';

$GLOBALS["lang"]['This can be either a varchar (a text field), a list (a list of values that can be selected) or a date.'] = 'Může to být buď varchar (textové pole), seznam (seznam hodnot, které lze vybrat) nebo datum.';

$GLOBALS["lang"]['This code relys on the great work done by the'] = 'Tento kód relys na velké práci provedené';

$GLOBALS["lang"]['This collectors universally unique identifier.'] = 'Tento sběratel univerzálně jedinečný identifikátor.';

$GLOBALS["lang"]['This column is required by'] = 'Tento sloupec je vyžadován';

$GLOBALS["lang"]['This column is required by '] = 'Tento sloupec je vyžadován ';

$GLOBALS["lang"]['This description is auto-populated and should ideally be left as-is.'] = 'Tento popis je automaticky obsazen a měl by být ideálně ponechán jako.';

$GLOBALS["lang"]['This endpoint enables you to add the connections that are part of your network infrastructure, it allows you to customize a variety of attributes, specify where this connection is located and the organization that it belongs.'] = 'Tento koncový bod vám umožní přidat spoje, které jsou součástí vaší síťové infrastruktury, umožňuje přizpůsobit různé atributy, specifikovat, kde se nachází toto spojení a organizaci, která k němu patří.';

$GLOBALS["lang"]['This error indicates that SMB1 has been disabled or removed from the target machine. This is normal for modern version of Windows and you will only see this message when the SMB2 connection attempt has failed. If the SMB2 connection fails, we attempt SMB1 to enable discovery on old versions of Windows. If the target Windows machine <i>is</i> running an old version of Windows, it is likely your credentials have failed. In that case, see'] = 'Tato chyba ukazuje, že SMB1 byla zakázána nebo odstraněna z cílového stroje. To je normální pro moderní verzi Windows a tuto zprávu uvidíte pouze v případě, že pokus o připojení SMB2 selhal. Pokud spojení SMB2 selže, pokusíme se SMB1 odhalit na starých verzích Windows. Pokud je cílový stroj Windows <i>vá</i> spuštěním staré verze Windows, je pravděpodobné, že vaše pověření selhaly. V tom případě viz';

$GLOBALS["lang"]['This error indicates that not enough virtual memory or paging file quota is available to complete the specified operation. You should try again later.'] = 'Tato chyba ukazuje, že není k dispozici dostatek virtuální paměti nebo paging souboru kvóty pro dokončení dané operace. Měl bys to zkusit později.';

$GLOBALS["lang"]['This error indicates the credentials used either are incorrect, do not exist or do not have sufficient privileges to log on remotely to the target Windows machine. You should verify the credentials and check the below.'] = 'Tato chyba ukazuje, že použité pověřovací listiny jsou buď nesprávné, neexistují, nebo nemají dostatek práv k přihlášení na dálku k cílovému zařízení Windows. Měl byste ověřit doklady a zkontrolovat níže.';

$GLOBALS["lang"]['This example creates a list of all Modules marked as'] = 'Tento příklad vytvoří seznam všech modulů označených jako';

$GLOBALS["lang"]['This example creates a list of devices and the open Ports, Protocols, and Programs found by the NMAP scan.'] = 'Tento příklad vytvoří seznam zařízení a otevřených portů, protokolů a programů nalezených v NMAP skenu.';

$GLOBALS["lang"]['This example creates a list of devices where the Function or Description fields are blank OR the Purchase Date is the default.'] = 'Tento příklad vytvoří seznam zařízení, kde jsou pole funkce nebo popisu prázdná nebo kdy je výchozí datum nákupu.';

$GLOBALS["lang"]['This example query retrieves a list of devices OVER 3 years old. The query uses today'] = 'Tento příklad si vyhrazuje seznam zařízení starších 3 let. Dotaz používá dnes';

$GLOBALS["lang"]['This example uses'] = 'Tento příklad používá';

$GLOBALS["lang"]['This feature requires a Professional or an Enterprise license.'] = 'Tato funkce vyžaduje profesionální nebo Enterprise licenci.';

$GLOBALS["lang"]['This feature, because it has the ability to affect target devices more than usual must be manually enabled. To enable this feature, change the configuration item feature_executables to <i>yes</i>.'] = 'Tato funkce, protože má schopnost ovlivňovat cílová zařízení více než obvykle, musí být ovládána ručně. Pro umožnění této funkce změňte funkci konfigurační položky _ spustitelné na <i>ano</i>.';

$GLOBALS["lang"]['This file tells Linux to poll the application to determine if there are any scheduled tasks that should be run.'] = 'Tento soubor říká Linuxu, aby ohodnotil aplikaci, aby zjistil, zda existují nějaké plánované úkoly, které by měly být spuštěny.';

$GLOBALS["lang"]['This form provides a simple way to get started discovering the devices on your network. For more (much more) detailed options, you can individually create'] = 'Tento formulář poskytuje jednoduchý způsob, jak začít objevovat zařízení ve vaší síti. Pro více (mnohem více) podrobných možností, můžete individuálně vytvořit';

$GLOBALS["lang"]['This is also the way that PAExec works.'] = 'To je také způsob, jakým PAExec funguje.';

$GLOBALS["lang"]['This is an optional configuration option, enabled by setting discovery_use_org_id_match in the global configuration.'] = 'Toto je volitelná volba konfigurace, která je povolena nastavením description _ use _ org _ id _ match v globální konfiguraci.';

$GLOBALS["lang"]['This is generally the primary column, unless otherwise configured. NOTE: When type = traffic, this represents the secondary text.'] = 'Toto je obvykle primární sloupec, není-li nakonfigurováno jinak. POZNÁMKA: Pokud typ = provoz, představuje to sekundární text.';

$GLOBALS["lang"]['This is likely due to MySQL time being off. MySQL typically uses the host devices time. You can check this by'] = 'To je pravděpodobně způsobeno tím, že MySQL čas je vypnutý. MySQL obvykle využívá čas hostitelských zařízení. Můžete to zkontrolovat';

$GLOBALS["lang"]['This is settable by users and so even though it should be globally unique, there is certainly no guarantee of this.'] = 'Uživatelé to mohou nastavit, takže i když by to mělo být celosvětově jedinečné, není to zaručeno.';

$GLOBALS["lang"]['This is the directory where we store any attachments to devices.'] = 'Toto je adresář, kde ukládáme jakékoli přílohy k zařízením.';

$GLOBALS["lang"]['This is to be used as the first point of call when troubleshooting Open-AudIT issues. You can click the Export button on the top right to retrieve this as a JSON file (to be added to the support ticket / email.'] = 'To se má použít jako první bod volání při řešení problémů Open- Audit. Kliknutím na tlačítko Export v pravém horním rohu získáte tento soubor jako JSON (přidejte jej do podpůrného tipu / e-mailu.';

$GLOBALS["lang"]['This issue is under investigation.'] = 'Tento problém je vyšetřován.';

$GLOBALS["lang"]['This item must match the value of the attribute selected or contains the ID of the query to be used.'] = 'Tato položka musí odpovídat hodnotě vybraného atributu nebo obsahuje ID otázky, která má být použita.';

$GLOBALS["lang"]['This item must match the value of the attribute selected.'] = 'Tato položka musí odpovídat hodnotě vybraného atributu.';

$GLOBALS["lang"]['This license expires on'] = 'Tato licence vyprší na';

$GLOBALS["lang"]['This security permission can be modified using the Component Services administrative tool.'] = 'Toto bezpečnostní povolení lze upravit pomocí administrativního nástroje Component Services.';

$GLOBALS["lang"]['This should be commented out after troubleshooting as debug mode will generate a lot of logs on the disk for no benefit.'] = 'To by mělo být komentováno po řešení problémů jako debug režim bude generovat spoustu protokolů na disku bez užitku.';

$GLOBALS["lang"]['This should be globally unique, but I have seen instances where it is not.'] = 'Mělo by to být celosvětově jedinečné, ale viděl jsem případy, kdy tomu tak není.';

$GLOBALS["lang"]['This should be set to either 1 or the height of the rack.'] = 'To by mělo být nastaveno buď na 1 nebo na výšku stojanu.';

$GLOBALS["lang"]['This should be the fully qualified field name in the database. Currently columns from the system, fields and credentials tables are supported. EG: system.nmis_role.'] = 'Toto by měl být plně kvalifikovaný název pole v databázi. V současné době jsou podporovány sloupce ze systému, pole a tabulky pověřovacích listin. EG: system.nmis _ role.';

$GLOBALS["lang"]['This state is used when Nmap is unable to determine whether a port is closed or filtered. It is only used for the IP ID idle scan.'] = 'Tento stav se použije, pokud Nmap není schopen určit, zda je port uzavřen nebo filtrován. Používá se pouze pro sken IP ID.';

$GLOBALS["lang"]['This will auto-populate.'] = 'Tohle bude mít vlastní populaci.';

$GLOBALS["lang"]['This will considerably slow the discovery scan.'] = 'Tohle značně zpomalí sken objevů.';

$GLOBALS["lang"]['This will delete the current rows in the'] = 'To smaže aktuální řádky v';

$GLOBALS["lang"]['This will permanently DELETE this license.'] = 'Tohle trvale zruší tuto licenci.';

$GLOBALS["lang"]['This will show you the Bulk Edit form. Any attributes you set on this form will be applied to all selected devices. You can set multiple attributes at once.'] = 'Tohle vám ukáže formu Bulk Edit. Všechny atributy, které na tomto formuláři nastavíte, budou aplikovány na všechna vybraná zařízení. Můžete nastavit více atributů najednou.';

$GLOBALS["lang"]['Thursday'] = 'Čtvrtek';

$GLOBALS["lang"]['time_caption'] = 'Časový záznam';

$GLOBALS["lang"]['Time Caption'] = 'Časový záznam';

$GLOBALS["lang"]['time_daylight'] = 'Denní světlo';

$GLOBALS["lang"]['Time Daylight'] = 'Denní světlo';

$GLOBALS["lang"]['Time to Execute'] = 'Čas provést';

$GLOBALS["lang"]['timeout'] = 'Timeout';

$GLOBALS["lang"]['Timeout'] = 'Timeout';

$GLOBALS["lang"]['Timeout Per Target (Seconds)'] = 'Timeout per target (Seconds)';

$GLOBALS["lang"]['Timeout per Target. Wait for X seconds for a target response.'] = 'Čas na cíl. Čekejte na X sekundy na cílovou odezvu.';

$GLOBALS["lang"]['Timesatamp'] = 'Časový plán';

$GLOBALS["lang"]['Timestamp'] = 'Časový údaj';

$GLOBALS["lang"]['timing'] = 'Načasování';

$GLOBALS["lang"]['Timing'] = 'Načasování';

$GLOBALS["lang"]['Timor-Leste'] = 'Timor- Leste';

$GLOBALS["lang"]['Title'] = 'Název';

$GLOBALS["lang"]['To a new file named .env (in the same directory). Now edit that new file and uncomment (remove the #) the line below (line 17)'] = 'Na nový soubor s názvem .env (ve stejném adresáři). Nyní upravte tento nový soubor a bez komentáře (odstranit #) řádek níže (řádek 17)';

$GLOBALS["lang"]['To actually execute the query, append a /execute, thus /open-audit/index.php/queries/{$id}/execute.'] = 'Chcete-li skutečně provést dotaz, append a / execution, tedy / open-audit / index.php / queries / {$id} / execution.';

$GLOBALS["lang"]['To audit a machine, you must have credentials and administrator level access.'] = 'Pro audit stroje, musíte mít pověření a administrátorský přístup.';

$GLOBALS["lang"]['To audit a remote machine on an Active Directory domain, your supplied user (or if none provided, the user running the script) must be a member of the target machines Administrators group (or subgroup).'] = 'Pro audit vzdáleného stroje na doméně Active Directory musí být dodaný uživatel (nebo není-li k dispozici žádný) členem cílové skupiny administrátorů (nebo podskupiny).';

$GLOBALS["lang"]['To audit a remote machine that is not in a domain, you must use the Administrator account (not <i>an</i> admin account, <i>the</i> Administrator account) on the target PC. #1 and #2'] = 'Pro audit vzdáleného stroje, který není v doméně, musíte použít účet správce (ne <i>n</i> admin účet, <i>s</i> Administrátorský účet) na cílovém PC. # 1 a # 2';

$GLOBALS["lang"]['To audit localhost, any supplied credentials are disregarded and the connection is made using the details of the user running the script.'] = 'Pro audit lokálního hostitele se nepřihlíží k poskytnutým pověřovacím listinám a připojení se provádí pomocí údajů o uživateli, který skript provozuje.';

$GLOBALS["lang"]['To compare software we check the name and version. Because version numbers are not all standardised in format, when we receive an audit result we create a new attribute called software_padded which we store in the database along with the rest of the software details for each package. For this reason, baselines using software policies will not work when run against a device that has not been audited by 1.10 (at least). Software policies can test against the version being <i>equal to</i>, <i>greater than</i> or <i>equal to or greater than</i>.'] = 'Pro porovnání software kontrolujeme název a verzi. Protože čísla verzí nejsou ve formátu standardizovaná, když obdržíme výsledek auditu, vytvoříme nový atribut nazvaný software _ padded, který uložíme do databáze spolu se zbytkem informací o softwaru pro každý balíček. Z tohoto důvodu nebude při provozu proti zařízení, které nebylo zkontrolováno podle bodu 1.10 (alespoň), fungovat základní linie využívající softwarové politiky. Software politiky mohou testovat proti verzi bytí <i>roven</i>, <i>větší než</i> nebo <i>rovnající se nebo větší než</i>.';

$GLOBALS["lang"]['To create a new entry click the Create button in the upper right hand corner.'] = 'Pro vytvoření nového záznamu klikněte na tlačítko Vytvořit v pravém horním rohu.';

$GLOBALS["lang"]['To create a resource, you should POST the required data.'] = 'Chcete-li vytvořit zdroj, měli byste POST požadovaná data.';

$GLOBALS["lang"]['To enable a remote machine (Vista or above) to be audited that is not on a domain, by an account in the Administrators group, other than the actual Administrator account see the below section on UAC.'] = 'Aby bylo možné provést audit vzdáleného stroje (Vista nebo vyšší), který není na doméně, na jiném účtu skupiny administrátorů než na skutečném účtu administrátora, viz níže oddíl UAC.';

$GLOBALS["lang"]['To enable this, create a new Auth item by going to menu -> Admin -> Auth -> Create Auth Method.'] = 'Chcete-li to povolit, vytvořte novou položku Auth přechodem do menu - > Admin - > Auth - > Vytvořit metodu Auth.';

$GLOBALS["lang"]['To execute the Windows powershell script, open a command prompt as Administrator and use the following command'] = 'Pro spuštění powershellu skriptu Windows otevřete příkaz administrátor a použijte následující příkaz';

$GLOBALS["lang"]['To execute the audit script, open a terminal and use the following command'] = 'Pro provedení auditního skriptu otevřete terminál a použijte následující příkaz';

$GLOBALS["lang"]['To filter by a property value, use the property name. Operators that should precede the value are'] = 'Pro filtrování hodnotou vlastnosti použijte název vlastnosti. Provozovatelé, kteří by měli předcházet hodnotě jsou';

$GLOBALS["lang"]['To install Nmap on Windows, visit the Nmap page at'] = 'Chcete-li nainstalovat Nmap na Windows, navštivte stránku Nmap na';

$GLOBALS["lang"]['To make the change, just follow the steps below.'] = 'Chcete-li provést změnu, jen postupujte podle níže uvedených kroků.';

$GLOBALS["lang"]['To retrieve the Tenant ID. Open the Azure portal click on Azure Active Directory, Properties and the Tenant ID is displayed as your Directory ID - do not blame me for the name mismatch, that is how Microsoft roll.'] = 'Získat Tenant ID. Otevřete portál Azure kliknutím na Azure Active Directory, Vlastnosti a ID Tenant se zobrazí jako ID adresáře - neobviňujte mě z nesouladu názvu, to je, jak Microsoft roll.';

$GLOBALS["lang"]['To retrieve your key, log in to the AWS Console and select your username, then My Security Credentials.'] = 'Chcete-li získat svůj klíč, přihlaste se do AWS Console a vyberte si uživatelské jméno, pak moje bezpečnostní kredity.';

$GLOBALS["lang"]['To return a specific component item.'] = 'Vrátit konkrétní složku.';

$GLOBALS["lang"]['To return all items for a compnent type for a specific device.'] = 'Chcete-li vrátit všechny položky pro kompaktní typ pro konkrétní zařízení.';

$GLOBALS["lang"]['To return all items for a component type. If you wanted all software you would use'] = 'Vrátit všechny položky pro typ komponenty. Pokud byste chtěli všechen software, který byste použili';

$GLOBALS["lang"]['To reverse sort, insert a minus, thus'] = 'Chcete-li přeřadit, vložte minus, takže';

$GLOBALS["lang"]['To run the test script on the target Windows PC'] = 'Spustit testovací skript na cílovém počítači Windows';

$GLOBALS["lang"]['To select devices to be integrated, we use nmis_manage = y, but you might like (for example) type = router. You can also use a Group or Query if you prefer something more complex.'] = 'Pro volbu zařízení, která mají být integrována, používáme nmis _ management = y, ale můžete chtít (například) typ = router. Můžete také použít skupinu nebo dotaz, pokud dáváte přednost něčemu složitější.';

$GLOBALS["lang"]['To sort by a database column, use'] = 'Pro třídění podle sloupce databáze použijte';

$GLOBALS["lang"]['To use this Enterprise feature, you first need to create your user in Open-AudIT as per usual. Assigning a password is not necessary. You do have to assign Roles and Orgs. The username in Open-AudIT should match the Entra <i>preferred username</i> attribute. There is no need for a Full Name or Email - these will be populated from Entra. If you do not know your users <i>preferred username</i>, fear not. You can create the new Auth Method in Open-AudIT and the Enterprise Application in Entra and when a user attempts to sign-on to Open-AudIT without a pre-existing user, check the logs and you will see their <i>preferred username</i> logged for your convienence.'] = 'Pro použití této funkce Enterprise musíte nejprve vytvořit svého uživatele v Open- Auditu jako obvykle. Přiřazení hesla není nutné. Musíš přiřadit Roles a Orgs. Uživatelské jméno v Open- Audit by mělo odpovídat Entra <i>preferované uživatelské jméno</i> atribut. Není třeba Plné jméno nebo e-mail - tyto budou obsazeny z Entra. Pokud neznáte své uživatele <i>preferované uživatelské jméno</i>Neboj se. Můžete vytvořit novou metodu Auth v Open- Audit a Enterprise Application v Entra a když se uživatel pokusí sign- on na Open- Audit bez předchozího uživatele, zkontrolujte protokoly a uvidíte jejich <i>preferované uživatelské jméno</i> Přihlášen pro vaši konvienci.';

$GLOBALS["lang"]['To use this Enterprise feature, you first need to create your user in Open-AudIT as per usual. Assigning a password is not necessary. You do have to assign Roles and Orgs. The username in Open-AudIT should match the OKTA <i>name</i> attribute. There is no need for a Full Name or Email - these will be populated from OKTA. If you do not know your users <i>name<i>, fear not. You can create the new Auth Menthod in Open-AudIT and the Application in OKTA and when a user attempts to sign-on to Open-AudIT without a pre-existing user, check the logs and you will see their <i>name<i> logged for your convienence.<br></p><p>Then create a new Auth method in Open-AudIT by going to menu -> Admin -> Auth Methods -> Create Auth. Provide a name and set the <i>type</i> to Okta.'] = 'Pro použití této funkce Enterprise musíte nejprve vytvořit svého uživatele v Open- Auditu jako obvykle. Přiřazení hesla není nutné. Musíš přiřadit Roles a Orgs. Uživatelské jméno v Open- Audit by mělo odpovídat OKTA <i>Název</i> atribut. Není třeba Plné jméno nebo e-mail - tyto budou obsazeny z OKTA. Pokud neznáte své uživatele <i>Název<i>Neboj se. Nový Auth Menthod můžete vytvořit v Open- Auditu a aplikaci v OKTA a když se uživatel pokusí přihlásit na Open- Audit bez předchozího uživatele, zkontrolujte protokoly a uvidíte jejich <i>Název<i> Přihlášen pro vaši konvienci.<br/><p>Poté vytvořte novou metodu Auth v Open- Auditu v menu - > Admin - > Authové metody - > Vytvořit Autha. Uveďte název a zadejte <i>typ</i> do Okty.</p></i></i></i></i>';

$GLOBALS["lang"]['To use this feature you must enable the configuration items match_mac (for AWS) and match_hostname (for Azure). This will be done automatically the first time a cloud discovery is executed. For more on Open-AudITs matching rules see HERE: Matching Devices'] = 'Pro použití této funkce musíte povolit konfigurační položky match _ mac (pro AWS) a match _ hostname (pro Azure). To bude provedeno automaticky při prvním objevu mraků. Pro více informací o Open- Auditech viz ZDE: Odpovídající zařízení';

$GLOBALS["lang"]['To view the details of a query, the standard URL structure of /open-audit/index.php/queries/{$id} should be used.'] = 'Chcete-li zobrazit podrobnosti dotazu, standardní URL struktura / open- audit / index. pp / dotazy / {$id} by měly být použity.';

$GLOBALS["lang"]['Togo'] = 'Togo';

$GLOBALS["lang"]['Tokelau'] = 'Tokelau';

$GLOBALS["lang"]['Tonga'] = 'Tonga';

$GLOBALS["lang"]['toolbar_style'] = 'Styl nástrojové lišty';

$GLOBALS["lang"]['Toolbar Style'] = 'Styl nástrojové lišty';

$GLOBALS["lang"]['Top Nmap TCP Ports'] = 'Top Nmap TCP porty';

$GLOBALS["lang"]['Top Nmap TCP Ports. The top 10, 100, 1000 ports to scan as per Nmaps &quot;top ports&quot; options.'] = 'Top Nmap TCP Ports. Top 10, 100, 1000 portů pro skenování podle možností Nmaps "top ports".';

$GLOBALS["lang"]['Top Nmap UDP Ports'] = 'Top Nmap UDP Ports';

$GLOBALS["lang"]['Top Nmap UDP Ports. The top 10, 100, 1000 ports to scan as per Nmaps &quot;top ports&quot; options.'] = 'Top Nmap UDP Ports. Top 10, 100, 1000 portů pro skenování podle možností Nmaps "top ports".';

$GLOBALS["lang"]['Traditional Chinese'] = 'Tradiční čínština';

$GLOBALS["lang"]['Traffic Light'] = 'Dopravní světlo';

$GLOBALS["lang"]['Trinidad and Tobago'] = 'Trinidad a Tobago';

$GLOBALS["lang"]['Troubleshooting'] = 'Řešení problémů';

$GLOBALS["lang"]['Troubleshooting LDAP Logins'] = 'Řešení problémů LDAP Logins';

$GLOBALS["lang"]['Try Open-AudIT Enterprise, on us without a time limit. All the features of Enterprise. Limited to 20 devices.'] = 'Zkuste Open- Audit Enterprise, na nás bez časového limitu. Všechny rysy Enterprise. Omezeno na 20 zařízení.';

$GLOBALS["lang"]['Try all the latest features with a FREE 100 device license of Open-AudIT Enterprise. Please read the '] = 'Vyzkoušejte všechny nejnovější funkce s licencí zařízení Open- Audit Enterprise ZDARMA 100. Prosím, přečtěte si ';

$GLOBALS["lang"]['Try logging in using an LDAP user. We are assuming this will fail (otherwise, why are you still reading this?). Next, comment out the line from ther file above.'] = 'Zkuste se přihlásit pomocí LDAP uživatele. Předpokládáme, že to selže (jinak, proč to stále čteš?). Dále, komentář k řádku z ther souboru výše.';

$GLOBALS["lang"]['Tuesday'] = 'Úterý';

$GLOBALS["lang"]['Tunisia'] = 'Tunisko';

$GLOBALS["lang"]['Turkey'] = 'Turecko';

$GLOBALS["lang"]['Turkish'] = 'Turecko';

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

$GLOBALS["lang"]['Type: This can be either a varchar (a text field) or a List (a list of values that can be selected).'] = 'Typ: Může to být buď varchar (textové pole) nebo List (seznam hodnot, které lze zvolit).';

$GLOBALS["lang"]['Types of Networks'] = 'Typy sítí';

$GLOBALS["lang"]['URL'] = 'URL';

$GLOBALS["lang"]['uuid'] = 'UUID';

$GLOBALS["lang"]['UUID'] = 'UUID';

$GLOBALS["lang"]['udp_ports'] = 'Udp Ports';

$GLOBALS["lang"]['Udp Ports'] = 'Udp Ports';

$GLOBALS["lang"]['Uganda'] = 'Uganda';

$GLOBALS["lang"]['Ukraine'] = 'Ukrajina';

$GLOBALS["lang"]['Ukrainian'] = 'Ukrajina';

$GLOBALS["lang"]['Undergo Stage 1 audit (documentation review)'] = 'Audit fáze Undergo 1 (přezkum dokumentace)';

$GLOBALS["lang"]['Undergo Stage 2 audit (implementation review)'] = 'Subgo audit fáze 2 (přezkum provádění)';

$GLOBALS["lang"]['Undergoing Analysis'] = 'Podpůrná analýza';

$GLOBALS["lang"]['Unfiltered'] = 'Nefiltrovaný';

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

$GLOBALS["lang"]['Update Open-AudIT Devices from '] = 'Aktualizovat Open- Audit Zařízení ';

$GLOBALS["lang"]['Update Open-AudIT Devices from NMIS'] = 'Aktualizovat Open- Audit Zařízení z NMIS';

$GLOBALS["lang"]['Update Vulnerabilities'] = 'Aktualizace zranitelnosti';

$GLOBALS["lang"]['Update an attribute of a {collection} entry.'] = 'Aktualizovat atribut položky {collection}.';

$GLOBALS["lang"]['Update attributes'] = 'Aktualizovat atributy';

$GLOBALS["lang"]['Updated each time discovery has been executed with IPs detected to be responding.'] = 'Aktualizováno pokaždé, když byl proveden objev s IP zjištěno, že reagují.';

$GLOBALS["lang"]['Updated each time discovery has been executed with IPs that have been scanned by Nmap.'] = 'Aktualizováno každé objevení bylo provedeno s IP, které byly skenovány Nmap.';

$GLOBALS["lang"]['Updated each time discovery has been executed with devices we were able to audit.'] = 'Aktualizováno pokaždé, když byl objev proveden pomocí zařízení, které jsme byli schopni zkontrolovat.';

$GLOBALS["lang"]['Updated each time discovery has been executed with devices we were able to query.'] = 'Aktualizováno pokaždé, když byl objev proveden pomocí zařízení, na které jsme se mohli zeptat.';

$GLOBALS["lang"]['Updated each time discovery has been executed.'] = 'Aktualizováno pokaždé, když byl proveden objev.';

$GLOBALS["lang"]['Updated each time the discovery has been executed.'] = 'Aktualizováno pokaždé, když byl objev popraven.';

$GLOBALS["lang"]['Updated each time the discovery has completed execution.'] = 'Aktualizováno pokaždé, když objev dokončil popravu.';

$GLOBALS["lang"]['Updating'] = 'Aktualizace';

$GLOBALS["lang"]['Upgrade'] = 'Aktualizovat';

$GLOBALS["lang"]['Upload an audit result file'] = 'Nahrát soubor výsledků auditu';

$GLOBALS["lang"]['Upper Case'] = 'Horní pouzdro';

$GLOBALS["lang"]['uptime'] = 'Aktualizace';

$GLOBALS["lang"]['Uptime'] = 'Aktualizace';

$GLOBALS["lang"]['Urdu'] = 'Urdu';

$GLOBALS["lang"]['url'] = 'Url';

$GLOBALS["lang"]['Url'] = 'Url';

$GLOBALS["lang"]['Uruguay, Eastern Republic of'] = 'Uruguay, Východní republika';

$GLOBALS["lang"]['usb'] = 'Usb';

$GLOBALS["lang"]['Usb'] = 'Usb';

$GLOBALS["lang"]['use'] = 'Použití';

$GLOBALS["lang"]['Use'] = 'Použití';

$GLOBALS["lang"]['use_authentication'] = 'Použít autentizaci';

$GLOBALS["lang"]['Use Authentication'] = 'Použít autentizaci';

$GLOBALS["lang"]['use_authorisation'] = 'Povolení používat';

$GLOBALS["lang"]['Use Authorisation'] = 'Povolení používat';

$GLOBALS["lang"]['Use Proxy'] = 'Použít proxy';

$GLOBALS["lang"]['Use SNMP'] = 'Použít SNMP';

$GLOBALS["lang"]['Use SSH'] = 'Použít SSH';

$GLOBALS["lang"]['Use Secure (LDAPS)'] = 'Používejte bezpečné (LDAPS)';

$GLOBALS["lang"]['Use Service Version Detection'] = 'Použít Service Version Detection';

$GLOBALS["lang"]['Use Service Version Detection. When a detected port is detected as open, if set to <i>y</i>, Nmap will query the target device in an attempt to determine the version of the service running on this port.<br>This can be useful when identifying unclassified devices. This was not previously used.'] = 'Použít Service Version Detection. Je-li detekován port jako otevřený, je-li nastaven <i>y</i>, Nmap bude dotazovat cílové zařízení ve snaze určit verzi služby běží na tomto portu.<br/>To může být užitečné při identifikaci neklasifikovaných zařízení. Tato látka nebyla dříve použita.';

$GLOBALS["lang"]['Use WMI'] = 'Použít WMI';

$GLOBALS["lang"]['Use a <i>Sign-in method</i> of OIDC - OpenID Connect and an <i>Application Type</i> of Web Application. Click <i>Next</i>.'] = 'Použít <i>Metoda sign- in</i> OIDC - OpenID Connect a <i>Typ aplikace</i> Web Application. Klikněte <i>Další</i>.';

$GLOBALS["lang"]['Use for Authentication'] = 'Použití pro ověření';

$GLOBALS["lang"]['Use for Roles'] = 'Použití pro roly';

$GLOBALS["lang"]['Use the standard install options when displayed and click the <i>I Agree</i>, <i>Next</i> and <i>Install</i> buttons to install Nmap.'] = 'Používejte standardní možnosti instalace při zobrazení a klepněte na tlačítko <i>Souhlasím.</i>, <i>Další</i> a <i>Instalovat</i> tlačítka pro instalaci Nmap.';

$GLOBALS["lang"]['used'] = 'Použité';

$GLOBALS["lang"]['Used'] = 'Použité';

$GLOBALS["lang"]['used_count'] = 'Použitý počet';

$GLOBALS["lang"]['Used Count'] = 'Použitý počet';

$GLOBALS["lang"]['Used by OpenLDAP only.'] = 'Používá pouze OpenLDAP.';

$GLOBALS["lang"]['Used internally when discovering a single device.'] = 'Používá se interně při objevování jediného zařízení.';

$GLOBALS["lang"]['Used internally when discovering a single device. Links to <code>devices.id</code>.'] = 'Používá se interně při objevování jediného zařízení. Odkazy na <code>devices.id</code>.';

$GLOBALS["lang"]['Used when LDAP servers have been configured to populate a users details - this includes the Orgs to which they have access. If a user is in this LDAP group, they are assigned this org.'] = 'Používá se při konfiguraci LDAP serverů pro zalidnění uživatelských detailů - to zahrnuje Orgs, k nimž mají přístup. Pokud je uživatel v této LDAP skupině, jsou přiřazeny tento org.';

$GLOBALS["lang"]['Used when LDAP servers have been configured to populate a users details - this includes the Roles which they are assigned. If a user is in this LDAP group, they are assigned this role.'] = 'Používá se při konfiguraci LDAP serverů pro zalidnění uživatelských detailů - to zahrnuje Roles, které jsou přiřazeny. Pokud je uživatel v této LDAP skupině, jsou přiřazeny tuto roli.';

$GLOBALS["lang"]['Used when searching OpenLDAP to match a users uid to a groups members. Default of <code>memberUid</code>. Used by OpenLDAP only.'] = 'Používá se při vyhledávání OpenLDAP pro porovnání uživatelů uid se členy skupin. Výchozí <code>memberUid</code>. Používá pouze OpenLDAP.';

$GLOBALS["lang"]['Used with Integrations and FirstWave monitoring applications.'] = 'Používá se s aplikací pro monitorování Integrations a FirstWave.';

$GLOBALS["lang"]['Used with Integrations and FirstWave monitoring applications. Set to y if working SNMP detected by discovery.'] = 'Používá se s aplikací pro monitorování Integrations a FirstWave. Nastavit na y, pokud pracuje SNMP detekován objevem.';

$GLOBALS["lang"]['user'] = 'Uživatel';

$GLOBALS["lang"]['User'] = 'Uživatel';

$GLOBALS["lang"]['User DN'] = 'Uživatel DN';

$GLOBALS["lang"]['user_group'] = 'Skupina uživatelů';

$GLOBALS["lang"]['User Group'] = 'Skupina uživatelů';

$GLOBALS["lang"]['user_id'] = 'ID uživatele';

$GLOBALS["lang"]['User ID'] = 'ID uživatele';

$GLOBALS["lang"]['user_interaction'] = 'Interakce uživatelů';

$GLOBALS["lang"]['User Interaction'] = 'Interakce uživatelů';

$GLOBALS["lang"]['User Membership Attribute'] = 'Atribut uživatele členství';

$GLOBALS["lang"]['user_name'] = 'Uživatelské jméno';

$GLOBALS["lang"]['User Name'] = 'Uživatelské jméno';

$GLOBALS["lang"]['User Policies'] = 'Uživatelské politiky';

$GLOBALS["lang"]['Username'] = 'Uživatelské jméno';

$GLOBALS["lang"]['username'] = 'Uživatelské jméno';

$GLOBALS["lang"]['users'] = 'Uživatelé';

$GLOBALS["lang"]['Users'] = 'Uživatelé';

$GLOBALS["lang"]['Users work similar to Netstat Ports. If a user exists with a matching name, status and password details (changeable, expires, required) then the policy passes.'] = 'Uživatelé pracují podobně jako Netstat Ports. Existuje-li uživatel s odpovídajícím názvem, statusem a heslem podrobnosti (proměnlivé, vyprší, vyžaduje), pak politika projde.';

$GLOBALS["lang"]['Users, Roles and Orgs'] = 'Uživatelé, Roles a Orgs';

$GLOBALS["lang"]['Uses the CodeIgniter PHP Framework.'] = 'Používá CodeIgniter PHP Framework.';

$GLOBALS["lang"]['Using'] = 'Použití';

$GLOBALS["lang"]['Using Entra for Auth'] = 'Použití Entra pro Auth';

$GLOBALS["lang"]['Using LDAPS'] = 'Použití LDAPS';

$GLOBALS["lang"]['Using OKTA for Auth'] = 'Použití OKTA pro Auth';

$GLOBALS["lang"]['Using the format option is useful when using a web browser but you wish to see the result in JSON format. Adding format=json achieves this. Normally a web browser will set its accept header to HTML, so in that case, we return the rendered page. Using an API to retrieve JSON you should set the accept header to'] = 'Použití možnosti formátu je užitečné při použití webového prohlížeče, ale chcete vidět výsledek ve formátu JSON. Přidání formátu = json toho dosáhne. Za normálních okolností webový prohlížeč nastaví svůj přijímací záhlaví na HTML, takže v tom případě vrátíme vykreslenou stránku. Pomocí API k získání JSON byste měli nastavit přijímací hlavičku';

$GLOBALS["lang"]['Usually Mbs, from Location A.'] = 'Obvykle Mbs, z Lokace A.';

$GLOBALS["lang"]['Usually Mbs, from Location B.'] = 'Obvykle Mbs, z Location B.';

$GLOBALS["lang"]['Usually Mbs, to Location A.'] = 'Obvykle Mbs, na místo A.';

$GLOBALS["lang"]['Usually Mbs, to Location B.'] = 'Obvykle Mbs, na místo B.';

$GLOBALS["lang"]['Usually should be set to 3.'] = 'Obvykle je třeba nastavit na3.';

$GLOBALS["lang"]['Uzbekistan'] = 'Uzbekistán';

$GLOBALS["lang"]['VLAN'] = 'VLAN';

$GLOBALS["lang"]['VLAN ID'] = 'VIN ID';

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

$GLOBALS["lang"]['Value Types'] = 'Typy hodnot';

$GLOBALS["lang"]['values'] = 'Hodnoty';

$GLOBALS["lang"]['Values'] = 'Hodnoty';

$GLOBALS["lang"]['Values: In the case of a <i>list</i> field, this should be a comma separated list of valid values.'] = 'Hodnoty: V případě <i>seznam</i> pole, toto by měl být oddělený seznam platných hodnot.';

$GLOBALS["lang"]['Vanuatu'] = 'Vanuatu';

$GLOBALS["lang"]['VarChar'] = 'VarChar';

$GLOBALS["lang"]['Varchar'] = 'Varchar';

$GLOBALS["lang"]['variable'] = 'Proměnná';

$GLOBALS["lang"]['Variable'] = 'Proměnná';

$GLOBALS["lang"]['Various'] = 'Různé';

$GLOBALS["lang"]['vendor'] = 'Prodejce';

$GLOBALS["lang"]['Vendor'] = 'Prodejce';

$GLOBALS["lang"]['Vendor Report'] = 'Zpráva o prodeji';

$GLOBALS["lang"]['vendors'] = 'Prodejci';

$GLOBALS["lang"]['Vendors'] = 'Prodejci';

$GLOBALS["lang"]['Venezuela'] = 'Venezuela';

$GLOBALS["lang"]['Version'] = 'Verze';

$GLOBALS["lang"]['version_padded'] = 'Name';

$GLOBALS["lang"]['Version Padded'] = 'Name';

$GLOBALS["lang"]['version_raw'] = 'Verze syrová';

$GLOBALS["lang"]['Version Raw'] = 'Verze syrová';

$GLOBALS["lang"]['version_string'] = 'Verze String';

$GLOBALS["lang"]['Version String'] = 'Verze String';

$GLOBALS["lang"]['video'] = 'Video';

$GLOBALS["lang"]['Video'] = 'Video';

$GLOBALS["lang"]['Vietnam'] = 'Vietnam';

$GLOBALS["lang"]['Vietnamese'] = 'Vietnamština';

$GLOBALS["lang"]['View'] = 'Pohled';

$GLOBALS["lang"]['View All'] = 'Zobrazit vše';

$GLOBALS["lang"]['View Details'] = 'Zobrazit detaily';

$GLOBALS["lang"]['View Device'] = 'Zobrazit zařízení';

$GLOBALS["lang"]['View Discovery'] = 'Zobrazit Discovery';

$GLOBALS["lang"]['View Policy'] = 'Zobrazit podmínky';

$GLOBALS["lang"]['View Racks'] = 'View Racks';

$GLOBALS["lang"]['View the'] = 'Zobrazit';

$GLOBALS["lang"]['View the discovery in question, then click the Support button in the top right toolbar. This will provide the discovery settings, config items, the discovery device list as well as the logs for this particular discovery.'] = 'Podívejte se na daný objev a pak klikněte na tlačítko Podpora v pravé horní nástrojové liště. To poskytne nastavení objevů, konfigurační položky, seznam objevovacích zařízení, stejně jako protokoly pro tento konkrétní objev.';

$GLOBALS["lang"]['View the release notes on the'] = 'Zobrazit poznámky k vydání na';

$GLOBALS["lang"]['Virtual Private Network'] = 'Virtuální privátní síť';

$GLOBALS["lang"]['Virtual private network'] = 'Virtuální soukromá síť';

$GLOBALS["lang"]['Virtualisation'] = 'Virtualizace';

$GLOBALS["lang"]['Visit our YouTube channel for instructional videos.'] = 'Navštivte náš kanál YouTube pro instruktážní videa.';

$GLOBALS["lang"]['vlan'] = 'Vlan';

$GLOBALS["lang"]['Vlan'] = 'Vlan';

$GLOBALS["lang"]['vlan_id'] = 'Vlan ID';

$GLOBALS["lang"]['Vlan ID'] = 'Vlan ID';

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

$GLOBALS["lang"]['vm_vendor'] = 'Vm Vendor';

$GLOBALS["lang"]['Vm Vendor'] = 'Vm Vendor';

$GLOBALS["lang"]['vuln_status'] = 'Stav vulnu';

$GLOBALS["lang"]['Vuln Status'] = 'Stav vulnu';

$GLOBALS["lang"]['vulnerabilities'] = 'Zranitelnost';

$GLOBALS["lang"]['Vulnerabilities'] = 'Zranitelnost';

$GLOBALS["lang"]['vulnerabilities_cache'] = 'Cache zranitelnosti';

$GLOBALS["lang"]['Vulnerabilities Cache'] = 'Cache zranitelnosti';

$GLOBALS["lang"]['Vulnerabilities and Results'] = 'Zranitelnost a výsledky';

$GLOBALS["lang"]['Vulnerabilities initially published before 1st January, 2025 (by default). We see no sense in returning vulnerabilities from years prior. This can be changed in the configuration.'] = 'Zranitelnost původně zveřejněna před 1. lednem 2025 (ve výchozím nastavení). Nevidíme žádný smysl pro návrat zranitelnosti z předchozích let. Toto lze změnit v konfiguraci.';

$GLOBALS["lang"]['vulnerability_id'] = 'Identifikace zranitelnosti';

$GLOBALS["lang"]['Vulnerability ID'] = 'Identifikace zranitelnosti';

$GLOBALS["lang"]['Vulnerability Status'] = 'Stav zranitelnosti';

$GLOBALS["lang"]['WARNING - When creating a baseline using software policies, at present Centos and RedHat package the kernel using the names <i>kernel</i> and <i>kernel-devel</i>. There can be multiple packages with this name and different versions concurrently installed. Debian based distributions use names like <i>linux-image-3.13.0-24-generic</i>, note the version number is included in the package name. Because RedHat based operating systems use this format and subsequently have multiple identical package names with different versions we currently exclude <i>kernel</i> and <i>kernel-devel</i> from software policies. This may be addressed in a future update.'] = 'VAROVÁNÍ - Při vytváření výchozí hodnoty pomocí softwarových politik, v současné době Centos a RedHat balíček jádro pomocí jmen <i>jádra</i> a <i>kernel- devel</i>. K dispozici může být více balíků s tímto názvem a různé verze současně nainstalovány. Distribuce založené na Debianu používají názvy jako <i>linux- image- 3.13.0-24- generikum</i>, Poznámka číslo verze je uvedeno v názvu balíčku. Protože operační systémy na bázi RedHat používají tento formát a následně mají více identických názvů balíčků s různými verzemi, které v současné době vylučujeme <i>jádra</i> a <i>kernel- devel</i> od softwarových politik. To lze řešit v budoucí aktualizaci.';

$GLOBALS["lang"]['WHERE'] = 'KDE';

$GLOBALS["lang"]['WMI Credentials Requirements'] = 'Požadavky na kredity WMI';

$GLOBALS["lang"]['Wait for it to complete, then paste in this next line to install the Agent.'] = 'Počkejte, až to dokončí, pak vložte do této další řádky nainstalovat Agent.';

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

$GLOBALS["lang"]['We also have an option to Ping Before Scan (important for routers with long lived ARP caches). This is usually a good idea.'] = 'Máme také možnost Ping Before Scan (důležité pro routery s dlouhou životností ARP cache). Tohle je obvykle dobrý nápad.';

$GLOBALS["lang"]['We also have our action items (which are executed in the order below):'] = 'Máme také naše akční položky (které jsou provedeny v následujícím pořadí):';

$GLOBALS["lang"]['We are often asked this question and the answer most definitely is <i>it depends</i>. It depends on the number of IPs to be scanned, the network connection speed, the speed of the devices being scanned, the type of devices being scanned, the number of different credentials being tested and the speed of the Open-AudIT server. We do not have a calculator that would allow us to input those variables and return a value. It is simply too complex. Generally I limit my discoveries to 256 IP addresses - ie, a /24 subnet. We have had customers scan /16 subnets (65k addresses) and it does work - but it can take a long time. You are much better off scanning in /24 blocks. If you simply do not know what your address ranges are, then this is a good case for a Seed discovery.'] = 'Často se na tuto otázku ptáme a odpověď je rozhodně <i>To záleží.</i>. Záleží na počtu IP, které mají být skenovány, rychlosti připojení sítě, rychlosti skenovaných zařízení, typu skenovaných zařízení, počtu testovaných průkazů a rychlosti Open- Audit serveru. Nemáme kalkulačku, která by nám umožnila zadat tyto proměnné a vrátit hodnotu. Je to prostě příliš složité. Obecně omezuji své objevy na 256 IP adres - tj. subnet a / 24. Máme zákazníky skenovat / 16 podsítě (65k adresy) a to funguje - ale to může trvat dlouho. Jste mnohem lepší na skenování v / 24 bloků. Pokud prostě nevíte, jaké jsou vaše rozsahy adres, pak je to dobrý případ pro objev semene.';

$GLOBALS["lang"]['We have more detailed instructions on'] = 'Máme podrobnější instrukce';

$GLOBALS["lang"]['We have tests for:'] = 'Máme testy na:';

$GLOBALS["lang"]['We hope you find Open-AudIT as useful as we do.'] = 'Doufáme, že Open- Audit bude stejně užitečný jako my.';

$GLOBALS["lang"]['We initially setup the default list of scripts with the default options. The list of script is viewable at /scripts. These default scripts cannot be deleted. You can create additional scripts for use by you as required. Your script will be based on one of the existing scripts and have custom options applied. The scripts can then be downloaded from the list page at menu: Discover -> Audit Scripts -> List Audit Scripts.'] = 'Zpočátku jsme nastavili výchozí seznam skriptů s výchozími možnostmi. Seznam skriptů je viditelný na / skripty. Tyto výchozí skripty nelze smazat. Můžete vytvořit další skripty pro vaše použití dle potřeby. Váš skript bude založen na jednom ze stávajících skriptů a budou použity vlastní možnosti. Scénáře pak můžete stáhnout ze seznamu v menu: Objevte - > Audit Písma - > Seznam Audit Písma.';

$GLOBALS["lang"]['We need some credentials to be able to effectively talk to the devices on your network.'] = 'Potřebujeme nějaké pověřovací listiny, abychom mohli efektivně mluvit se zařízeními ve vaší síti.';

$GLOBALS["lang"]['We only send the minimum amount of data and nothing of a sensitive nature. We send our license data (name, type, etc), our application data (name, version, platform, timezone, etc), any logged errors, a count of device types and a count of the features used. <i>Any</i> environment has devices and that is the only piece of your data we send. And only the type of device and a count. Not the manufacturer, not the model. We send nothing special. No networks. No IP addresses. No OS versions. No software names. The UUID and Server fields are sha256 encoded (so we do not know the value). We send just the data we need to improve the product. We hope you see the benefit to all of us with this information. It will provide us guided direction on where to focus improvements and new features in the product.'] = 'Posíláme jen minimální množství dat a nic citlivého. Posíláme naše licenční data (jméno, typ, atd.), naše aplikační data (jméno, verze, platforma, časové pásmo, atd.), jakékoli přihlašované chyby, počet typů zařízení a počet použitých funkcí. <i>Jakékoliv</i> prostředí má zařízení a to je jediný kus vašich dat, které posíláme. A jen typ zařízení a počet. Ani výrobce, ani model. Neposíláme nic zvláštního. Žádné sítě. Žádné IP adresy. Žádné verze OS. Žádná jména softwaru. Pole UUID a Server jsou zakódována sha256 (takže neznáme hodnotu). Posíláme jen data, která potřebujeme ke zlepšení produktu. Doufáme, že s těmito informacemi uvidíte výhody pro nás všechny. Poskytne nám pokyny, kam zaměřit vylepšení a nové funkce ve výrobku.';

$GLOBALS["lang"]['We tend to use the Google Chrome extension called Postman for testing actual restful queries. You might like to install and test with that.'] = 'Máme tendenci používat Google Chrome rozšíření volal Postman pro testování skutečných klidných dotazů. Možná bys to rád nainstaloval a otestoval.';

$GLOBALS["lang"]['Web'] = 'Web';

$GLOBALS["lang"]['Web Application Routes'] = 'Web Application Routes';

$GLOBALS["lang"]['Web Server Discovery'] = 'Web Server Discovery';

$GLOBALS["lang"]['Webserver'] = 'Webserver';

$GLOBALS["lang"]['Website'] = 'Internetová stránka';

$GLOBALS["lang"]['Wednesday'] = 'Středa';

$GLOBALS["lang"]['weight'] = 'Hmotnost';

$GLOBALS["lang"]['Weight'] = 'Hmotnost';

$GLOBALS["lang"]['weight_current'] = 'Hmotnost proudění';

$GLOBALS["lang"]['Weight Current'] = 'Hmotnost proudění';

$GLOBALS["lang"]['weight_empty'] = 'Hmotnost prázdná';

$GLOBALS["lang"]['Weight Empty'] = 'Hmotnost prázdná';

$GLOBALS["lang"]['weight_max'] = 'Hmotnost Max';

$GLOBALS["lang"]['Weight Max'] = 'Hmotnost Max';

$GLOBALS["lang"]['Welcome'] = 'Vítejte.';

$GLOBALS["lang"]['Welcome Dashboard'] = 'Vítejte na palubní desce';

$GLOBALS["lang"]['Welcome to'] = 'Vítejte.';

$GLOBALS["lang"]['Western Sahara'] = 'Západní Sahara';

$GLOBALS["lang"]['What Can I Expect if I Have no Credentials'] = 'Co mohu očekávat, když nemám žádné kredity';

$GLOBALS["lang"]['What about fields that I want from NMIS that are not in Open-AudIT? We have got you covered. Any fields in the external system (NMIS) that do not exist in Open-AudIT will be automatically created as Open-AudIT Custom fields.'] = 'A co pole, která chci od NMIS, která nejsou v Open- Audit? Kryjeme tě. Všechna pole v externím systému (NMIS), která v Open- Audit neexistují, budou automaticky vytvořena jako pole Open- Audit Custom.';

$GLOBALS["lang"]['What about other network devices? Think switches, routers, printers, etc. Obviously, it is best if you can provide some SNMP credentials for these devices. They only need <i>read-only</i> access. But if you do not want to do even that, there is nothing stopping you from running discovery, finding the devices, and making a rule or two to identify them (maybe use MAC Address prefix in combination with open ports, for example). You wont have much information, but you will know they are on the network, what they are, and when the last time they were seen was. You will also see if anything new appears on the network.'] = 'A co ostatní síťová zařízení? Přepínače, routery, tiskárny atd. Samozřejmě, že je nejlepší, pokud můžete poskytnout některé SNMP pověření pro tato zařízení. Potřebují jen <i>read- only</i> přístup. Ale pokud nechcete dělat ani to, není nic, co by vám zabránilo spustit objev, najít zařízení, a dělat pravidlo nebo dva pro jejich identifikaci (možná použít MAC Address prefix v kombinaci s otevřenými porty, například). Nebudete mít mnoho informací, ale budete vědět, že jsou v síti, co jsou, a kdy naposledy byli viděni. Uvidíte, jestli se v síti objeví něco nového.';

$GLOBALS["lang"]['What do we send?'] = 'Co pošleme?';

$GLOBALS["lang"]['What does this actually mean to you?'] = 'Co to pro tebe vlastně znamená?';

$GLOBALS["lang"]['What is the purpose of this rack.'] = 'Jaký je účel tohoto stojanu.';

$GLOBALS["lang"]['What is the type of this location. Allowable types held in <code>attributes</code> table.'] = 'Jaký je typ tohoto místa. Povolené typy držené v <code>attributes</code> Stůl.';

$GLOBALS["lang"]['When Open-AudIT on Linux discovers a Windows machine, in order to execute a remote command we use'] = 'Když Open- Audit na Linuxu objeví stroj Windows, pro provedení vzdáleného příkazu používáme';

$GLOBALS["lang"]['When Open-AudIT on Windows discovers a Windows machine, in order to execute a remote command we use'] = 'Když Open- Audit na Windows objeví stroj Windows, za účelem provedení vzdáleného příkazu používáme';

$GLOBALS["lang"]['When Open-AudIT receives data about a device, either by discovering the device during an audit run or by the user importing the device, it must determine if this discovered device matches a device that already exists within its database, or if it is a new device that should be added. Open-AudIT uses a series of twelve property matches to determine this. The Match Rules work as OR comparisons, not AND. This means the first rule that matches a field in the discovered device to one in the dB resolves as an existing device. All Matching Rules have to fail in order for a device to be new and result in a new record being created.'] = 'Když Open- Aud IT přijímá data o zařízení, buď objevením zařízení během auditu, nebo uživatelem dovážejícím zařízení, musí určit, zda se toto zařízení shoduje se zařízením, které již existuje v jeho databázi, nebo zda je to nové zařízení, které by mělo být přidáno. Open- Audit používá k určení tohoto souboru 12 zápasů. Pravidla shody fungují jako nebo srovnání, ne A. To znamená, že první pravidlo, které odpovídá poli v objeveném zařízení jednomu v dB, se vyřeší jako stávající zařízení. Všechna odpovídající pravidla musí selhat, aby zařízení bylo nové a vedlo k vytvoření nového záznamu.';

$GLOBALS["lang"]['When POSTing data, you must include an access token. An access token is generated with every request type, so make a GET (for example) and Accept: application/json, parse the response for meta→access_token, and include that with your request. This should be placed in the field data[access_token], IE, the top level.'] = 'Pokud jsou údaje POSTing, musíte obsahovat přístupový symbol. Přístupový token je generován s každým typem žádosti, takže GET (například) a přijmout: aplikace / json, parse odpověď na meta → access _ token, a zahrnout to s vaší žádostí. To by mělo být umístěno v poli data [access _ token], IE, nejvyšší úroveň.';

$GLOBALS["lang"]['When a device is Discovered the audit script will be injected with the file (or directory) details. Both audit_linux.sh and audit_windows.vbs will be populated, regardless of the file path. If you are thinking <i>but putting a Linux path into a Windows machine will break things!</i>, it wont break, you just wont receive any data from that file or directory entry.<br>Retrieved details will be stored in the <i>file</i> database table and are stored like any other attribute. File details will be stored as any other attribute and generate alerts if any of the following attributes change - <i>full_name</i>, <i>hash</i>, <i>inode</i>, <i>last_changed</i>. The table contain a system_id, first_seen, last_seen and current columns as well as the file details.<br>Attributes recorded are:<br><ul><li>Windows - name, size, directory, SHA1 hash (of the file contents), last changed, permissions, owner, version (file permitting).</li><br><li>Linux - name, size, directory, SHA1 hash (of the file contents), last changed, meta data last changed, permissions, owner, group, inode.</li></ul>You will see a section in both the Windows and Linux audit scripts as below'] = 'Když je zařízení objeveno, bude do skriptu vložen soubor (nebo adresář). Oba audit _ linux.sh a audit _ windows.vbs budou zalidněny, bez ohledu na cestu souboru. Pokud si myslíte, <i>ale dát linuxovou cestu do Windows stroje rozbije věci!</i>, to se nerozbije, prostě neobdržíte žádná data z tohoto souboru nebo položky adresáře.<br/>Získané údaje budou uloženy v <i>soubor</i> tabulka databáze a jsou uloženy jako každý jiný atribut. Údaje o souboru budou uloženy jako jakýkoli jiný atribut a generovat záznamy, pokud se některý z následujících atributů změní - <i>plné _ jméno</i>, <i>hash</i>, <i>inod</i>, <i>last _ changed</i>. Tabulka obsahuje systémové _ id, first _ seen, last _ seen a aktuální sloupce, stejně jako údaje o souboru.<br/>Zaznamenané atributy jsou:<br/><ul><li>Windows - název, velikost, adresář, SHA1 hash (obsahu souboru), naposledy změněný, oprávnění, majitel, verze (umožňuje soubor).</li><br/><li>Linux - název, velikost, adresář, SHA1 hash (obsahu souboru), poslední změna, metadata poslední změna, oprávnění, majitel, skupina, inode.</li></ul>Ve skriptech pro audit Windows i Linux uvidíte sekci níže';

$GLOBALS["lang"]['When a discovery is run, the relevant discovery scan option is chosen and those settings are used by Nmap to scan the target devices.  The scan options determine which ports nmap scans, how fast they scan and whether or not nmap ping is first used to determine if the IP is live or not.'] = 'Při spuštění objevu je zvolena příslušná volba skenování objevu a tato nastavení používá Nmap ke skenování cílových zařízení. Možnosti skenování určují, které porty nmap skenují, jak rychle skenují a zda je nmapový ping poprvé použit k určení, zda IP je nebo není živý.';

$GLOBALS["lang"]['When a discovery is run, the relevant discovery scan option is chosen and those settings used by Nmap to scan the target devices. If no option set is chosen, the default configuration item (discovery_default_scan_option) is selected and used. Open-AudIT Community will use the default options as per the configuration for all discoveries.'] = 'Při spuštění objevu je zvolena příslušná volba skenování objevů a nastavení používaná Nmap pro skenování cílových zařízení. Pokud není zvolena volba, je zvolena a použita výchozí konfigurační položka (default _ default _ scan _ option). Open-Audit Community použije výchozí volby podle konfigurace pro všechny objevy.';

$GLOBALS["lang"]['When a subnet discovery is executed it first runs, if selected, an Nmap ping scan on the range or IP addresses. Any device responding will be port scanned. If an Nmap ping scan is not requested, each IP is individually port scanned. Which ports? That is determined by the'] = 'Když je proveden objev podsítě, poprvé běží, je-li vybrán, Nmap ping scan na rozsahu nebo IP adres. Jakékoliv zařízení bude skenováno. Pokud není vyžadováno Nmap ping scan, každá IP je individuálně skenována portem. Které přístavy? To je určeno';

$GLOBALS["lang"]['When auditing a Linux device via SSH, some Linux distributions do not allow sudo commands to be passed without a TTY (which we are doing). To completely audit one of these linux distributions it is best to supply the root user credentials. If no root is supplied and sudo without a TTY is not possible, the audit script will be run but will not contain the amount of data as would otherwise. Subsequent audits using root (or run locally using sudo) will therefore provide extra details about the system and generate several <i>changes</i>.'] = 'Při auditu Linuxového zařízení přes SSH některé Linuxové distribuce neumožňují předat sudo příkazy bez TTY (což děláme). Pro kompletní audit jednoho z těchto linux distribucí je nejlepší dodat kořenové uživatelské pověření. Pokud není kořen dodán a sudo bez TTY není možné, bude spuštěn audit skript, ale nebude obsahovat množství dat, jak by jinak. Následné audity pomocí root (nebo spustit lokálně pomocí sudo) proto poskytne další podrobnosti o systému a generovat několik <i>změny</i>.';

$GLOBALS["lang"]['When combining devices, which system is the authoritative source for information.'] = 'Při kombinování zařízení, který systém je autoritativním zdrojem informací.';

$GLOBALS["lang"]['When complete, close the command window and you are done!'] = 'Po dokončení zavřete příkazové okno a hotovo!';

$GLOBALS["lang"]['When creating a widget, if you select the <i>Advanced</i> button you will have the ability to upload your own custom SQL.'] = 'Při vytváření widget, pokud zvolíte <i>Pokročilé</i> tlačítko budete mít možnost nahrát vlastní SQL.';

$GLOBALS["lang"]['When integrating devices from the external system, if the device doesnt exist in Open-AudIT should we create it?'] = 'Při integraci zařízení z externího systému, pokud zařízení neexistuje v Open- Audit bychom měli vytvořit?';

$GLOBALS["lang"]['When integrating devices from the external system, if the device has been updated in the external system should we update it in Open-AudIT?'] = 'Při integraci zařízení z externího systému, pokud bylo zařízení aktualizováno v externím systému, měli bychom ho aktualizovat v Open- Auditu?';

$GLOBALS["lang"]['When investigating a Discovery, support will request the Exported Discovery Logs. To retrieve these, go to menu -> Discoveries ->'] = 'Při vyšetřování Discovery bude podpora vyžadovat Exportované Discovery Logy. Chcete-li získat tyto, přejděte do menu - > Objevy - >';

$GLOBALS["lang"]['When matching a Linux based device, we prefer to use the Dbus id concatenated with the hostname. We can also use other options as per the below table, but we can retrieve the Dbus ID without root. To retrieve the UUID (from the motherboard), we need to run dmidecode, which does require root. Unfortunately, when you clone an ESXi guest, the Dbus ID does not get recreated - hence our concatenating this with the hostname. There is a good article linked here that details the <i>why</i> of hardware IDs.'] = 'Při porovnávání Linux zařízení, preferujeme používat Dbus id concatenated s hostname. Můžeme použít i jiné možnosti podle níže uvedené tabulky, ale můžeme získat ID Dbus bez kořene. Chcete-li získat UUID (z základní desky), musíme spustit dmidecode, který vyžaduje kořen. Bohužel, když klonujete hosta ESXi, ID Dbus se neobnoví - proto jsme to spojili s hostitelským jménem. Existuje dobrý článek, který je zde spojen, který podrobně popisuje <i>Proč?</i> hardwarových ID.';

$GLOBALS["lang"]['When requesting JSON, by default no limit is set. When requesting screen display, the limit is set to 1000 by default. This can be changed in the configuration. See the <i>page_size</i> item'] = 'Při žádosti o JSON, ve výchozím nastavení není stanoven žádný limit. Pokud požadujete zobrazení obrazovky, limit je ve výchozím nastavení 1000. Toto lze změnit v konfiguraci. Viz <i>strana _ size</i> položka';

$GLOBALS["lang"]['When retrieve an external device, should we run discovery upon it?'] = 'Až získáme externí zařízení, měli bychom na něj spustit objev?';

$GLOBALS["lang"]['When running Open-AudIT on Windows the Apache service account must be that of a <i>regular</i> user (or the Administrator). This is because the <i>Local System</i> account normally used to run Apache has no access to any network resources. IE - We cannot use Apache when running as the Local System account account to copy the audit script to Windows PCs.'] = 'Při spuštění Open- Audit na Windows musí být účet služby Apache účet <i>pravidelné</i> uživatel (nebo správce). To proto, že <i>Místní systém</i> účet běžně používaný pro provoz Apache nemá přístup k žádným síťovým zdrojům. IE - Při spuštění účtu Local System nemůžeme použít Apache pro kopírování skriptu do Windows PC.';

$GLOBALS["lang"]['When the configuration option is set, we take this into account for devices for a certain defined subset of match rules where the configuration item has been enabled. These rules are:'] = 'Když je nastavena volba konfigurace, bereme to v úvahu pro zařízení pro určitou definovanou podmnožinu pravidel shody, kde byla konfigurační položka povolena. Tato pravidla jsou:';

$GLOBALS["lang"]['When the rules run in discovery, any matching rules will appear in the discovery log. See below for an example.'] = 'Když pravidla běží v objevu, všechny odpovídající pravidla se objeví v záznamu objevů. Viz příklad níže.';

$GLOBALS["lang"]['When this benchmark is scheduled to be executed. Derived from the associated <code>tasks.type</code> and <code>tasks.sub_resource_id</code>.'] = 'Pokud má být tato referenční hodnota provedena. Odvozené od přidružených <code>tasks.type</code> a <code>tasks.sub_resource_id</code>.';

$GLOBALS["lang"]['When this log was created.'] = 'Když byl tento záznam vytvořen.';

$GLOBALS["lang"]['When this queue item started processing.'] = 'Když tato fronta položka začala zpracovávat.';

$GLOBALS["lang"]['When using Open-AudIT Professional or Enterprise, widgets are available and customisable to be displayed on Dashboards.'] = 'Při použití Open- Audit Professional nebo Enterprise jsou k dispozici widgety, které lze na Dashboardech zobrazit.';

$GLOBALS["lang"]['When we are converting an internally selected device to an object for the external system, what should the external data be. EG: integer, string, etc.'] = 'Když měníme interně vybrané zařízení na objekt pro externí systém, jaká by měla být externí data. EG: integer, string, atd.';

$GLOBALS["lang"]['When we execute this baseline, should we check for items on devices that are not in a policy for this baseline.'] = 'Při provádění této základní hodnoty, měli bychom zkontrolovat položky na zařízeních, které nejsou v politice pro tuto základní hodnotu.';

$GLOBALS["lang"]['When we receive an open port, should we attempt to test for the version of the service currently running upon it? This assists in confirming actual running services.'] = 'Když obdržíme otevřený port, měli bychom se pokusit otestovat verzi služby, která na něm právě probíhá? To pomáhá při potvrzení skutečné služby provozu.';

$GLOBALS["lang"]['When you are using Clouds to discover your Amazon AWS instances, you will need two credential items - key and secret key. Your key should already be known to you and your secret key as well. Of note is that you cannot retrieve your secret key using the AWS Console provided by Amazon. If you have misplaced it, you will need to generate a new one.'] = 'Pokud používáte Clouds k objevování instancí Amazon AWS, budete potřebovat dvě úvěrové položky - klíč a tajný klíč. Tvůj klíč by už měl být znám i tobě a tvému tajnému klíči. Poznámka je, že nemůžete získat svůj tajný klíč pomocí AWS Console poskytované Amazon. Pokud jste ji špatně umístili, budete muset vytvořit novou.';

$GLOBALS["lang"]['When you are using Clouds to discover your Microsoft Azure instances, you will need four credential items - subscription id, tenant id, client id and client secret.'] = 'Pokud používáte Clouds k objevování instancí Microsoft Azure, budete potřebovat čtyři přihlašovací položky - předplatné, ID nájemce, ID klienta a klientské tajemství.';

$GLOBALS["lang"]['When you create a discovery you have an option to devices_assigned_to_org. This means that any devices discovered for this discovery will be assigned (have <code>devices.org_id</code> set to) your chosen Organisation.'] = 'Když vytvoříte objev, máte možnost přiřadit zařízení _ přiřazené _ do _ org. To znamená, že všechna zařízení objevená pro tento objev budou přiděleny (mít <code>devices.org_id</code> nastaveno na) zvolenou organizaci.';

$GLOBALS["lang"]['When you create a new discovery if you click the Advanced button, you have many more options to change, one of them being the type of discovery.Types have always been Subnet (encompassing the above range, subnet, ip options) and Active Directory. As at v4.1, Open-AudIT has a new discovery type called Seed.'] = 'Když vytvoříte nový objev, pokud kliknete na tlačítko Advanced, máte mnoho dalších možností, které můžete změnit, jeden z nich je typ objevu. Typy byly vždy Subnet (zahrnující výše uvedený rozsah, subnet, ip volby) a Active Directory. Stejně jako v v4.1, Open- Audit má nový typ objevu zvaný Seed.';

$GLOBALS["lang"]['When you enable a Query to be run on a schedule, the query is emailed to your chosen address. You must have set up email via menu -> Admin -> Enterprise -> Email Config. We also have a <i>test email<i> button on that page. Input your details, save it and then test it. You should have a modal box that informs you if it successful or not and obviously a test email should arrive if it is successful. Once you have email configured, your scheduled query can be configured.<br><br>Provide a name, optional description, choose <i>Query</i> type, select the desired query, provide an email address, choose a format and set the schedule.<br><br>Provide an hour (hour only, no minutes as yet), give the task a name (this is not the name of the actual scheduled query itself), select which days you would like the query run, choose which query you would like run, supply an email address and choose a query format and you are done.<br>Queries will be sent with an email body of the query (in html format) and the query attached in the requested format.'] = 'Pokud povolíte, aby byl dotaz spuštěn podle harmonogramu, je dotaz emailem na zvolenou adresu. Museli jste nastavit e-mail přes menu - > Admin - > Enterprise - > Email Config. Máme také <i>zkušební e-mail<i> na té stránce. Vložte své detaily, uložte je a otestujte je. Měli byste mít modální box, který vás informuje, zda je úspěšný nebo ne, a samozřejmě by měl přijít zkušební e-mail, pokud je úspěšný. Jakmile máte nakonfigurovaný e-mail, Váš plánovaný dotaz může být nastaven.<br/><br/>Uveďte název, volitelný popis, vyberte <i>Dotaz</i> typ, vyberte požadovaný dotaz, poskytnout e-mailovou adresu, vybrat formát a nastavit harmonogram.<br/><br/>Poskytněte hodinu (pouze hodinu, žádné minuty dosud), dát úkol jméno (to není název aktuálního plánovaného dotazu sám), vyberte, které dny byste chtěli dotaz spustit, vyberte, který dotaz chcete spustit, dodat e-mailovou adresu a vybrat formát dotazu a jste hotovi.<br/>Dotazy budou zaslány s e-mailovým subjektem dotazu (ve formátu html) a dotazem připojeným v požadovaném formátu.</i></i>';

$GLOBALS["lang"]['When you enter text into one of the column headings, you can simply use a normal word. For example, when you enter <code>computer</code> into the search box above the <i>Type</i> column, the search will return all devices with the type of Computer. Essentially, Open-AudIT requests data using a URL like <code>devices?devices.type=computer</code>. Now there is one significant difference when using the dataTables search, versus the standard'] = 'Když zadáte text do jednoho z sloupců, můžete jednoduše použít normální slovo. Například, když zadáte <code>computer</code> do vyhledávacího pole nad <i>Typ</i> Sloupec, vyhledávání vrátí všechna zařízení s typem počítače. V podstatě, Open- Aud IT požaduje data pomocí URL jako <code>devices?devices.type=computer</code>. Nyní je zde jeden významný rozdíl při použití vyhledávání v tabulkách, oproti standardu';

$GLOBALS["lang"]['where'] = 'Kde';

$GLOBALS["lang"]['Where'] = 'Kde';

$GLOBALS["lang"]['Where $x is a number. This many LDAP entries are in the DB and have been retrieved.'] = 'Kde $x je číslo. Toto množství LDAP záznamů jsou v DB a byly získány.';

$GLOBALS["lang"]['Where on the Device Details screen you would like to see this field appear.'] = 'Kde na obrazovce Device Details Details chcete vidět toto pole.';

$GLOBALS["lang"]['Where the rack is in the row.'] = 'Kde je věšák v řadě.';

$GLOBALS["lang"]['Whether the vulnerability affects components beyond its own using Impact, Availability and Confidentiality.'] = 'Zda zranitelnost ovlivňuje komponenty mimo její vlastní použití Impact, Dostupnost a důvěrnost.';

$GLOBALS["lang"]['Whether user interaction is required (None, Passive, Active).'] = 'Zda je vyžadována interakce uživatelů (žádná, pasivní, aktivní).';

$GLOBALS["lang"]['Which OS this benchmark applies to.'] = 'Na který OS se tato referenční hodnota vztahuje.';

$GLOBALS["lang"]['Which devices should Open-AudIT create from the external system (if any). Using All, None or a given Attribute.'] = 'Která zařízení by měla Open- Audit vytvořit z externího systému (pokud existuje). Použití All, Žádný nebo daný Atribut.';

$GLOBALS["lang"]['Which network should we discover. This should be in the format of'] = 'Kterou síť bychom měli objevit. To by mělo být ve formátu';

$GLOBALS["lang"]['Which sub-menu should we display this query in.'] = 'V jakém podmenu bychom měli tento dotaz zobrazit.';

$GLOBALS["lang"]['Who made this rack.'] = 'Kdo to udělal?';

$GLOBALS["lang"]['Why Windows Server Only?'] = 'Proč jen Windows Server?';

$GLOBALS["lang"]['Why do we exclude this policy?'] = 'Proč tuto politiku vylučujeme?';

$GLOBALS["lang"]['Wide Area Network'] = 'Široká síť oblastí';

$GLOBALS["lang"]['Wide area network'] = 'Široká síť';

$GLOBALS["lang"]['Widget'] = 'Widget';

$GLOBALS["lang"]['Widget #'] = 'Widget #';

$GLOBALS["lang"]['Widget # '] = 'Widget # ';

$GLOBALS["lang"]['Widget Type'] = 'Typ widgetu';

$GLOBALS["lang"]['widgets'] = 'Widgety';

$GLOBALS["lang"]['Widgets'] = 'Widgety';

$GLOBALS["lang"]['Widgets are designed to be used on Dashboards. Enterprise users have complete freedom to create, update and delete widgets as required.'] = 'Widgety jsou navrženy pro použití na Dashboardech. Uživatelé Enterprise mají úplnou svobodu vytvářet, aktualizovat a mazat widgety podle potřeby.';

$GLOBALS["lang"]['width'] = 'Šířka';

$GLOBALS["lang"]['Width'] = 'Šířka';

$GLOBALS["lang"]['windows'] = 'Okna';

$GLOBALS["lang"]['Windows'] = 'Okna';

$GLOBALS["lang"]['Windows Packages'] = 'Balíčky Windows';

$GLOBALS["lang"]['Windows Test Script'] = 'Name';

$GLOBALS["lang"]['Windows User Work Unit #1'] = 'Pracovní jednotka pro uživatele Windows # 1';

$GLOBALS["lang"]['Windows User Work Unit #2'] = 'Uživatelská jednotka Windows # 2';

$GLOBALS["lang"]['Windows may also have blocked the service from starting. On the target start the Windows Security applet and ensure the WinExeSvc executable is allowed to run (click Allow on Device and then Start Actions).'] = 'Windows může také zablokovat službu od spuštění. Na cílovém spuštění Windows Security applet a zajistit, aby WinExeSvc spustitelný je povoleno spustit (klepněte na tlačítko Povolit na zařízení a pak Start Actions).';

$GLOBALS["lang"]['Winexe page on Samba'] = 'Winexe stránka na Samba';

$GLOBALS["lang"]['Winexe requires the following Windows services to be started and running: netlogon and rpc services to be running.<br><br>Please log on to the target Windows machine and check the services for netlogon and rpc are running.'] = 'Winexe vyžaduje, aby byly spuštěny a spuštěny následující služby Windows: spuštěné služby netlogon a rpc.<br/><br/>Prosím přihlaste se na cílový Windows stroj a zkontrolujte služby pro netlogon a rpc běží.';

$GLOBALS["lang"]['Winexe uses the admin$ and RPC (net service start) to install and start a remote service (winexesvc). This service initializes a named pipe that is used to transport commands from the Open-AudIT server to the target and the output in the reverse way. When finished, the named pipe closes and the winexesvc waits for more connections or uninstalls (depending of the options given).'] = 'Winexe používá admin $a RPC (netto start služby) k instalaci a spuštění vzdálené služby (winexesvc). Tato služba inicializuje pojmenovanou trubku, která se používá k transportu příkazů ze serveru Open- Audit do cíle a výstupu obráceně. Po dokončení, pojmenovaná trubka zavře a winexesvc čeká na více spojení nebo rozbalování (v závislosti na daných možnostech).';

$GLOBALS["lang"]['Wireless Local Area Network'] = 'Bezdrátová síť místních oblastí';

$GLOBALS["lang"]['With the 3.3.0 release of Open-AudIT we have introduced the concept of a Cluster. This intuitively maps to the idea of a web cluster, database cluster or file cluster (or one of several other purposes) into a given type (high availability, redundancy, scaling, etc).<br><br>Depending on the purpose of cluster chosen, the reporting will be slightly different.<br><br>For example, if you create a Cluster with a purpose of virtualisation, when you have added devices to it you will also see the virtual machines on those devices.'] = 'S 3.3.0 vydání Open- Audit jsme představili koncept Cluster. Tato intuitivně mapuje na myšlenku webového clusteru, databázového clusteru nebo souboru clusteru (nebo jednoho z několika dalších účelů) do daného typu (vysoká dostupnost, redundance, škálování atd.).<br/><br/>V závislosti na účelu zvoleného seskupení bude podávání zpráv mírně odlišné.<br/><br/>Pokud například vytvoříte Cluster s cílem virtualizace, když k němu přidáte zařízení, uvidíte také virtuální stroje na těchto zařízeních.';

$GLOBALS["lang"]['With the introduction of the Clouds feature, you can supply details of your cloud, Amazon AWS or Microsoft Azure, and Open-AudIT will use the relevant API to retrieve a list of locations, networks, and instances, then discover each of these instances.'] = 'Se zavedením funkce Clouds, můžete dodat podrobnosti o vašem cloudu, Amazon AWS nebo Microsoft Azure, a Open- Audit použije příslušný API pro získání seznamu míst, sítí a instancí, pak objeví každý z těchto instancí.';

$GLOBALS["lang"]['wmi_fails'] = 'Wmi fails';

$GLOBALS["lang"]['Wmi Fails'] = 'Wmi fails';

$GLOBALS["lang"]['wmi_timeout'] = 'Wmi Timeout';

$GLOBALS["lang"]['Wmi Timeout'] = 'Wmi Timeout';

$GLOBALS["lang"]['workgroup'] = 'Pracovní skupina';

$GLOBALS["lang"]['Workgroup'] = 'Pracovní skupina';

$GLOBALS["lang"]['Working Credentials'] = 'Pracovní úvěry';

$GLOBALS["lang"]['Wrap Up'] = 'Zabalit';

$GLOBALS["lang"]['Written in the PHP scripting language.'] = 'Napsáno v jazyce skriptu PHP.';

$GLOBALS["lang"]['XML'] = 'XML';

$GLOBALS["lang"]['Yellow Query'] = 'Žlutý dotaz';

$GLOBALS["lang"]['Yemen'] = 'Jemen';

$GLOBALS["lang"]['Yes'] = 'Ano.';

$GLOBALS["lang"]['You are able to define extra directories to be scanned as entries in the Executables collection. When defined, the directory and all sub-directories are scanned for files that are executable. You can also define directories and files to be excluded. When activated, these are injected into the linux audit script and performed whenever it is run (usually as part of a discovery). If you want these in a script you can manually copy to the target, use menu -> Discover -> Scripts -> List Scripts and download the script from there.'] = 'Jste schopni definovat další adresáře, které mají být skenovány jako položky ve sbírce Executables. Pokud je definováno, adresář a všechny podadresáře jsou skenovány pro soubory, které jsou spustitelné. Můžete také definovat adresáře a soubory, které mají být vyloučeny. Po aktivaci se tyto injekce aplikují do skriptu pro audit linux a provádějí se vždy, když je spuštěn (obvykle jako součást objevu). Chcete-li je ve skriptu, můžete je ručně zkopírovat na cíl, použijte menu - > Objevte - > Písma - > Seznam Písma a stáhněte si skript odtamtud.';

$GLOBALS["lang"]['You are always free to modify the audit scripts themselves to suit your specific requirements. You will need to (re)incorporate those changes whenever you upgrade as they will be overwritten by the default scripts. I would suggest saving a master copy of your modified script, upgrading Open-AudIT, then running a diff between the new default script and your modified script and applying the differences. The audit scripts are native scripts (Windows is VBScript, all others are Bash). Simple and easy to modify - just make sure to have a copy of your changes before you upgrade.'] = 'Vždy můžete změnit vlastní skripty pro audit tak, aby vyhovovaly vašim specifickým požadavkům. Budete muset (re) začlenit tyto změny pokaždé, když upgradujete, jak budou přepsány výchozí skripty. Doporučil bych uložit hlavní kopii vašeho upraveného skriptu, upgradovat Open- Audit, pak spustit rozdíl mezi novým výchozím skriptem a modifikovaným skriptem a použít rozdíly. Auditní skripty jsou nativní skripty (Windows je VBScript, všechny ostatní jsou Bash). Jednoduché a snadné úpravy - před upgradem se ujistěte, že máte kopii změn.';

$GLOBALS["lang"]['You are running version'] = 'Spouštíš verzi';

$GLOBALS["lang"]['You can access the collection using the normal Open-AudIT JSON based API. Just like any other collection. Please see'] = 'K kolekci můžete přistupovat pomocí normálního API na bázi Open- Audit JSON. Jako každá jiná sbírka. Prosím viz';

$GLOBALS["lang"]['You can also'] = 'Můžete také';

$GLOBALS["lang"]['You can also see at the bottom of the page a table showing the devices the changes will be applied to.'] = 'V dolní části stránky můžete také vidět tabulku ukazující zařízení, na která se budou změny aplikovat.';

$GLOBALS["lang"]['You can also specify properties using the below format.'] = 'Vlastnosti můžete také zadat pomocí níže uvedeného formátu.';

$GLOBALS["lang"]['You can always run the Firstwave VM on your virtual infrastructure (ESX, Azure, et al). The Firstwave VM runs Debian linux and is free from OS licensing concerns and limitations. Or install on your own Linux distro of choice. We support Redhat 9, Ubuntu 20.04, 22.04 and 24.04 as well as Debian 11 and 12.'] = 'Na virtuální infrastruktuře (ESX, Azure, et al) můžete vždy spustit VM Firstwave. Firstwave VM běží Debian linux a je bez problémů a omezení licencí OS. Nebo nainstalujte na vlastní Linux disco volby. Podporujeme Redhat9, Ubuntu 20.04, 22.04 a 24.04 a Debian11 a12.';

$GLOBALS["lang"]['You can assign devices to a location automatically using'] = 'Zařízení můžete přiřadit na místo automaticky pomocí';

$GLOBALS["lang"]['You can assign devices using custom'] = 'Zařízení můžete přiřadit na míru';

$GLOBALS["lang"]['You can audit a remote machine without the using the actual Administrator account by creating a registry key. Create the below key on every machine to be audited and make sure the user credentials used is a member of the Administrators group.'] = 'Můžete provést audit vzdáleného stroje bez použití aktuálního účtu správce vytvořením klávesy registru. Vytvořte níže uvedený klíč na každém stroji, který má být kontrolován, a ujistěte se, že použité uživatelské pověření je členem skupiny Administrátorů.';

$GLOBALS["lang"]['You can certainly run a discovery without any valid credentials on the devices within the network, however, the information retrieved will be a very small subset of what Open-AudIT has the ability to retrieve <i>with</i> credentials.'] = 'Můžete určitě spustit objev bez platných pověřovacích listin na zařízeních v síti, nicméně, informace získané bude velmi malý podmnožina toho, co Open- Audit má schopnost získat <i>s</i> pověření.';

$GLOBALS["lang"]['You can create a baseline, run it against a group of devices and view the results, add scheduled execution, add more tables for comparison (currently only software, netstat ports and users are enabled), in place baseline editing, archiving of results and more.'] = 'Můžete vytvořit výchozí hodnotu, spustit ji proti skupině zařízení a zobrazit výsledky, přidat plánované provedení, přidat více tabulek pro porovnání (v současné době jsou povoleny pouze software, porty netstat a uživatelé), v místě základní úpravy, archivace výsledků a další.';

$GLOBALS["lang"]['You can create a script with all the options for any of the existing audit scripts - not just Windows. AIX, ESX, Linux, OSX and Windows are all covered.'] = 'Můžete vytvořit skript se všemi možnostmi pro některý ze stávajících skriptů - nejen Windows. AIX, ESX, Linux, OSX a Windows jsou pokryty.';

$GLOBALS["lang"]['You can customize the entire integration down to which system (NMIS or Open-AudIT) is the authority on a per field basis. There are options to create and/or update devices in Open-AudIT or NMIS. Should we run a discovery on a created or updated device and so much more. There are explanations for each item on the right side of the page.'] = 'Můžete přizpůsobit celou integraci podle toho, který systém (NMIS nebo Open- Audit) je autoritou na základě pole. V Open- Auditu nebo v NMIS jsou možnosti vytváření a / nebo aktualizace zařízení. Měli bychom spustit objev na vytvořené nebo aktualizované zařízení a mnohem více. Existují vysvětlení pro každou položku na pravé straně stránky.';

$GLOBALS["lang"]['You can define an application and associate a device to this application. A device may be associated to more than one application. An application may be associated to more than one device.'] = 'Můžete definovat aplikaci a přiřadit zařízení k této aplikaci. Zařízení může být spojeno s více než jednou aplikací. Aplikace může být spojena s více než jedním zařízením.';

$GLOBALS["lang"]['You can edit the value of the Additional Field for each individual device on the device details page. View the device details screen, open the section containing the field and (if you have'] = 'V záložce Detaily zařízení můžete upravit hodnotu dodatečného pole. Zobrazit obrazovku detailů zařízení, otevřete sekci obsahující pole a (pokud máte';

$GLOBALS["lang"]['You can limit the Device Seed Discovery to fall within a strict set of parameters, including: <i>Restrict to Subnet</i> and <i>Restrict to Private</i>'] = 'Device Seed Discovery můžete omezit tak, aby splňovaly přísné parametry, včetně: <i>Omezení na subnet</i> a <i>Omezení na soukromé</i>';

$GLOBALS["lang"]['You can manually assign devices using'] = 'Můžete ručně přiřadit zařízení pomocí';

$GLOBALS["lang"]['You can override this by providing the format option in the URL.'] = 'Toto můžete přepsat poskytnutím možnosti formátu v URL.';

$GLOBALS["lang"]['You can select individual devices by clicking their check-boxes on the right side or selecting all devices clicking the checkbox on the top right of the table (underneath the Edit button that looks like a pencil).'] = 'Můžete si vybrat jednotlivá zařízení kliknutím na jejich check-boxy na pravé straně nebo výběrem všech zařízení kliknutím na zaškrtávací pole na pravé horní straně tabulky (pod tlačítkem Edit, které vypadá jako tužka).';

$GLOBALS["lang"]['You can select the devices to be integrated by choosing any attribute in the system (device) table and matching (see menu → Admin → Database → List Tables → system for a list of fields). An attribute match can only match a single value.'] = 'Zařízení, která mají být integrována, můžete zvolit libovolný atribut v tabulce systému (zařízení) a odpovídající (viz menu → Admin → Databáze → Seznam tabulek → systém pro seznam polí). Atribut match může odpovídat pouze jedné hodnotě.';

$GLOBALS["lang"]['You can turn any server into a collector by going to menu -> Admin -> Collectors -> Make this install a Collector. You will need credentials to log on to the server this install will report in to.'] = 'Můžete proměnit jakýkoliv server na sběratele tím, že jdete do menu - > Admin - > Sběratelé - > Udělejte tuto instalaci Sběratele. K přihlášení na server budete potřebovat pověřovací listiny.';

$GLOBALS["lang"]['You can view by clicking on the blue view icon. You can also edit or delete if you have permissions.'] = 'Můžete zobrazit kliknutím na ikonu modrého zobrazení. Můžete také upravit nebo smazat, pokud máte oprávnění.';

$GLOBALS["lang"]['You do not have the PHP MBString extension installed. This extension is required.'] = 'Není nainstalováno rozšíření PHP MBString. Toto prodloužení je vyžadováno.';

$GLOBALS["lang"]['You do not have the PHP SNMP extension installed. This extension is highly recommended.'] = 'Není nainstalováno rozšíření PHP SNMP. Toto rozšíření je vysoce doporučeno.';

$GLOBALS["lang"]['You may want to copy and paste this URL in an email to your staff.'] = 'Můžete chtít zkopírovat a vložit tuto URL v e-mailu pro své zaměstnance.';

$GLOBALS["lang"]['You may wish to have Active Directory or OpenLDAP authenticate your users, but not provide authorization. To do this, make sure <i>Use for Authentication</i> is set to Y and <i>Use for Roles</i> is set to N. The credentials will be validated by LDAP, but you will need to have the user already created and assigned Roles in Open-AudIT. This also <i>automatically</i> applies to'] = 'Můžete si přát mít Active Directory nebo OpenLDAP ověřovat své uživatele, ale ne poskytnout oprávnění. Ujisti se, že to uděláš. <i>Použití pro ověření</i> je nastaveno na Y a <i>Použití pro roly</i> je nastaveno na N. Údaje budou validovány LDAP, ale budete muset mít uživatele již vytvořené a přiřazené Roles v Open- Audit. Toto také <i>automaticky</i> platí pro';

$GLOBALS["lang"]['You might have noticed these match rules are for items that might not be globally unique. Some examples:'] = 'Možná jste si všimli, že tato pravidla jsou pro věci, které nemusí být celosvětově jedinečné. Některé příklady:';

$GLOBALS["lang"]['You must delete your existing license before adding a new license.'] = 'Před přidáním nové licence musíte odstranit stávající licenci.';

$GLOBALS["lang"]['You must have working SSH credentials to execute a benchmark. The following Operating Systems are currently supported: Centos 7, Debian 12, Redhat 7, Redhat 8, Redhat 9, SLES 15, Ubuntu 20.04, Ubuntu 22.04. We plan to expand on these with further releases.'] = 'Musíte mít pracovní SSH pověření k provedení referenční hodnoty. V současné době jsou podporovány následující operační systémy: Centos 7, Debian 12, Redhat 7, Redhat 8, Redhat 9, SLES 15, Ubuntu 20.04, Ubuntu 22.04. Plánujeme na ně rozšířit s dalšími úniky.';

$GLOBALS["lang"]['You should copy and paste the entire file into the textbox. In the case below, copy ALL the text.'] = 'Měli byste zkopírovat a vložit celý soubor do textboxu. V níže uvedeném případě zkopírujte VŠECHNY text.';

$GLOBALS["lang"]['You should not include the edited_by and edited_date fields. These will be automatically set.'] = 'Neměli byste zahrnovat editovaná _ by a editovaná _ date pole. Tyto budou nastaveny automaticky.';

$GLOBALS["lang"]['You should only change the second sentence of text, the'] = 'Měli byste změnit pouze druhou větu textu,';

$GLOBALS["lang"]['You should substitute the required column (eg, org_id) for ATTRIBUTE_NAME.'] = 'Požadovaný sloupec (např. org _ id) byste měli nahradit ATTRIBUTE _ NAME.';

$GLOBALS["lang"]['You should use a header line containing the names of the columns you wish to populate, then your data lines below that.'] = 'Měli byste použít hlavičku obsahující jména sloupců, které chcete zalidnit, pak vaše datové řádky pod nimi.';

$GLOBALS["lang"]['You should use only those tables that contain attributes you need. I usually use a left join. For example'] = 'Měli byste použít pouze ty tabulky, které obsahují atributy, které potřebujete. Obvykle používám levý spoj. Například';

$GLOBALS["lang"]['You will need a'] = 'Budete potřebovat';

$GLOBALS["lang"]['You will need the ports for WMI on the Windows firewall opened on each target Windows computer. For Windows Core servers, ensure you allow the firewall connections as per'] = 'Budete potřebovat porty pro WMI na firewallu Windows otevřeném na každém cílovém počítači Windows. Pro Windows Hlavní servery, ujistěte se, že umožňují připojení firewall jako per';

$GLOBALS["lang"]['You will see a list of'] = 'Uvidíte seznam';

$GLOBALS["lang"]['YouTube Tutorials'] = 'YouTube Tutorials';

$GLOBALS["lang"]['Your AWS EC2 API key.'] = 'Váš AWS EC2 API klíč.';

$GLOBALS["lang"]['Your Google Compute credentials as JSON.'] = 'Vaše Google Compute pověření jako JSON.';

$GLOBALS["lang"]['Your Host is'] = 'Vaše Hostitel je';

$GLOBALS["lang"]['Your Licenses'] = 'Vaše licence';

$GLOBALS["lang"]['Your Microsoft Azure Client ID.'] = 'Váš Microsoft Azure Client ID.';

$GLOBALS["lang"]['Your Microsoft Azure Client Secret.'] = 'Vaše Microsoft Azure Client Secret.';

$GLOBALS["lang"]['Your Microsoft Azure Subscription ID.'] = 'Váš Microsoft Azure Subscription ID.';

$GLOBALS["lang"]['Your Microsoft Azure Tennant ID.'] = 'Váš Microsoft Azure Tennant ID.';

$GLOBALS["lang"]['Your PHP version is'] = 'Vaše verze PHP je';

$GLOBALS["lang"]['Your SQL to select attributes that will populate this query.'] = 'Váš SQL vybrat atributy, které budou zalidnit tento dotaz.';

$GLOBALS["lang"]['Your SQL to select devices that will populate this group.'] = 'Váš SQL vybrat zařízení, které bude zalidnit tuto skupinu.';

$GLOBALS["lang"]['Your SSH key.'] = 'Váš SSH klíč.';

$GLOBALS["lang"]['Your access credentials, as per that clouds native API.'] = 'Vaše přístupové doklady, podle toho, co zamlžuje původní API.';

$GLOBALS["lang"]['Your data is your data. You can extract it any time you like. We even helpfully provide exports to CSV, JSON and XML. And we have a JSON API. And you can write custom reports and have those output in CSV, XML, and JSON! Again, it is your data - not anyone else. You can be confident that the security of your data is in your hands.'] = 'Vaše data jsou vaše data. Můžeš ho extrahovat kdykoliv budeš chtít. Dokonce i úspěšně poskytujeme export do CSV, JSON a XML. A máme JSON API. A můžete psát vlastní zprávy a mít tyto výstupy v CSV, XML, a JSON! Znovu, jsou to vaše data - nikdo jiný. Můžete si být jisti, že zabezpečení vašich dat je ve vašich rukou.';

$GLOBALS["lang"]['Your database platform is'] = 'Vaše databázová platforma je';

$GLOBALS["lang"]['Your description of the status of this connection (provisioned, retired, etc).'] = 'Váš popis stavu tohoto spojení (zajištěné, v důchodu atd.).';

$GLOBALS["lang"]['Your description of this item.'] = 'Váš popis této položky.';

$GLOBALS["lang"]['Your generic name for this piece of software'] = 'Vaše obecné jméno pro tento kus softwaru';

$GLOBALS["lang"]['Your generic version for this piece of software'] = 'Vaše generická verze pro tento kus softwaru';

$GLOBALS["lang"]['Your user should now be able to logon by clicking the <i>Logon with Entra</i> button on the Open-AudIT logon page. As mentioned above, if the logon fails, please check the logfile and verify the users <i>preferred username</i>.<br><br>And that should be all there is too it. Now your users should have one less set of credentials to remember!<br><br>As always, if you have troubles with this feature, please email'] = 'Váš uživatel by měl být nyní schopen se přihlásit kliknutím na <i>Logon s Entrou</i> tlačítko na stránce Open- Audit logon. Jak je uvedeno výše, pokud Logon selže, zkontrolujte prosím logfile a ověřte uživatele <i>preferované uživatelské jméno</i>.<br/><br/>A to by mělo být všechno. Nyní by vaši uživatelé měli mít o jeden soubor pověřovacích listin méně pamatovat!<br/><br/>Jako vždy, pokud máte problémy s touto funkcí, prosím e-mail';

$GLOBALS["lang"]['Your user should now be able to logon by clicking the <i>Logon with OKTA</i> button on the Open-AudIT logon page. As mentioned above, if the logon fails, please check the logfile and verify the users <i>name</i>.<br><br>And that should be all there is too it. Now your users should have one less set of credentials to remember!<br><br>As always, if you have troubles with this feature, please email'] = 'Váš uživatel by měl být nyní schopen se přihlásit kliknutím na <i>Logon s OKTA</i> tlačítko na stránce Open- Audit logon. Jak je uvedeno výše, pokud Logon selže, zkontrolujte prosím logfile a ověřte uživatele <i>Název</i>.<br/><br/>A to by mělo být všechno. Nyní by vaši uživatelé měli mít o jeden soubor pověřovacích listin méně pamatovat!<br/><br/>Jako vždy, pokud máte problémy s touto funkcí, prosím e-mail';

$GLOBALS["lang"]['Your web server is'] = 'Váš webový server je';

$GLOBALS["lang"]['Zambia'] = 'Zambie';

$GLOBALS["lang"]['Zimbabwe'] = 'Zimbabwe';

$GLOBALS["lang"]['a String'] = 'řetězec';

$GLOBALS["lang"]['active'] = 'aktivní';

$GLOBALS["lang"]['active directory'] = 'aktivní adresář';

$GLOBALS["lang"]['active/active'] = 'aktivní / aktivní';

$GLOBALS["lang"]['active/passive'] = 'aktivní / pasivní';

$GLOBALS["lang"]['advertisement'] = 'reklama';

$GLOBALS["lang"]['alert'] = 'Varování';

$GLOBALS["lang"]['all'] = 'všechny';

$GLOBALS["lang"]['allocated'] = 'přiděleno';

$GLOBALS["lang"]['amazon'] = 'amazon';

$GLOBALS["lang"]['an Integer'] = 'Integer';

$GLOBALS["lang"]['and'] = 'a';

$GLOBALS["lang"]['and / or'] = 'a / nebo';

$GLOBALS["lang"]['and a support ticket will be created and actioned.'] = 'a podpůrná jízdenka bude vytvořena a uspořádána.';

$GLOBALS["lang"]['and another'] = 'a další';

$GLOBALS["lang"]['and download the Latest Release self-installer. You may need to scroll down the page to find it.'] = 'a stáhnout si nainstalátor Nejnovější verze. Možná budete muset posunout dolů stránku najít.';

$GLOBALS["lang"]['and go to Applications -> Enterprise Applications (far left menu), then click <i>New application</i>.'] = 'a přejděte na Aplikace - > Enterprise Applications (daleko levé menu), potom klepněte na tlačítko <i>Nová aplikace</i>.';

$GLOBALS["lang"]['and its current time is'] = 'a jeho aktuální čas je';

$GLOBALS["lang"]['and looks for a warranty expiration date prior to today.'] = 'a hledá záruční datum vypršení záruky před dneškem.';

$GLOBALS["lang"]['and review what is possible.'] = 'a přezkoumat, co je možné.';

$GLOBALS["lang"]['and the Sign-out redirect URI being'] = 'a Sign- out přesměrovat URI je';

$GLOBALS["lang"]['and the final lines will likely be of most interest. These lines should give you the exact point at which the login failed.'] = 'a konečné linie budou pravděpodobně nejvíce zajímavé. Tyto řádky by vám měly dát přesný bod, ve kterém přihlášení selhalo.';

$GLOBALS["lang"]['antivirus'] = 'antivirus';

$GLOBALS["lang"]['application'] = 'žádost';

$GLOBALS["lang"]['approved'] = 'schváleno';

$GLOBALS["lang"]['are required.'] = 'jsou povinné.';

$GLOBALS["lang"]['are used.'] = 'jsou použity.';

$GLOBALS["lang"]['as a device responding on this port.<br>This has caused some customers issues where firewalls respond on behalf of a non-existing device, and hence cause false positive device detection. We now have this attribute available to set per scan.'] = 'jako zařízení reagující na tento port.<br/>To způsobilo některé problémy zákazníků, kde firewally reagují jménem neexistujícího zařízení, a proto způsobit falešnou pozitivní detekci zařízení. Nyní máme tento atribut k dispozici pro nastavení na jeden sken.';

$GLOBALS["lang"]['as the reference point and filters out all virtual machines via a check of the system.serial field for VM.'] = 'jako referenční bod a filtruje všechny virtuální stroje pomocí kontroly systému. Sériové pole pro VM.';

$GLOBALS["lang"]['assuming working and client populated DNS'] = 'za předpokladu pracovní a klient zalidněný DNS';

$GLOBALS["lang"]['attribute'] = 'atribut';

$GLOBALS["lang"]['auto'] = 'auto';

$GLOBALS["lang"]['backup'] = 'zálohování';

$GLOBALS["lang"]['banned'] = 'zakázáno';

$GLOBALS["lang"]['blog'] = 'blog';

$GLOBALS["lang"]['blue'] = 'modrá';

$GLOBALS["lang"]['bottom'] = 'dole';

$GLOBALS["lang"]['building'] = 'budova';

$GLOBALS["lang"]['can be used for user authentication (is the users name and password correct) as well as user authorization (what roles and orgs does a user have).<br><br>If a user is not in the configured LDAP but is in Open-AudIT (eg: the <i>admin</i> user), Open-AudIT will fallback to using itself for both authentication and authorization.<br><br>Open-AudIT uses specific LDAP groups for roles and orgs. A user must be a direct member of these group(s) in order for Open-AudIT to determine that users access.<br><br>When configured correctly, LDAP use can completely remove the need to create users in Open-AudIT. Simply configure Open-AudIT to use LDAP for both authentication and authorization. If the user does not exist in Open-AudIT but does exist in LDAP and their credentials are correct and they are a member of the required groups Open-AudIT will create the user account automatically.'] = 'lze použít pro autentizaci uživatele (je správné jméno uživatele a heslo), stejně jako autorizaci uživatele (jaké role a orgs má uživatel).<br/><br/>Pokud uživatel není v nakonfigurované LDAP, ale je v Open- Audit (např.: <i>admin</i> Uživatel), Open- Audit se vrátí k použití jak pro autentizaci, tak pro autorizaci.<br/><br/>Open- Aud IT používá specifické LDAP skupiny pro role a orgs. Uživatel musí být přímým členem této skupiny (skupin), aby mohl Open- AudiT určit, že uživatelé mají přístup.<br/><br/>Při správném nastavení může použití LDAP zcela odstranit potřebu vytvářet uživatele v Open- Auditu. Jednoduše nakonfigurujte Open- Audit pro použití LDAP pro autentizaci i autorizaci. Pokud uživatel v Open- Auditu neexistuje, ale existuje v LDAP a jejich pověřovací listiny jsou správné a jsou členem požadovaných skupin Open- AudiT automaticky vytvoří uživatelský účet.';

$GLOBALS["lang"]['can now retrieve details about a file or directory of files and monitor these files for changes as per other attributes in the Open-AudIT database. This feature works out of the box for Linux Open-AudIT servers, but needs a change to the service account name under a Windows Open-AudIT server. Supported clients are Windows and Linux.'] = 'nyní mohou získat podrobnosti o souboru nebo adresáři souborů a sledovat tyto soubory pro změny podle jiných atributů v databázi Open- AudiT. Tato funkce funguje v rámečku pro Linux Open- Audit servery, ale potřebuje změnu názvu servisního účtu pod Windows Open- Audit serverem. Podporovanými klienty jsou Windows a Linux.';

$GLOBALS["lang"]['changed'] = 'změna';

$GLOBALS["lang"]['chosen. From there if a port for WMI, SSH or SNMP is detected responding the device is further queried using '] = 'Vybraný. Odtud, pokud je detekován port pro WMI, SSH nebo SNMP reagující na zařízení, je dále dotazován pomocí ';

$GLOBALS["lang"]['cloud'] = 'oblak';

$GLOBALS["lang"]['code'] = 'Kód';

$GLOBALS["lang"]['collections and details pages is an icon to execute.'] = 'sbírky a detaily stránky je ikona k provedení.';

$GLOBALS["lang"]['collector'] = 'kolektor';

$GLOBALS["lang"]['collectors'] = 'sběratelé';

$GLOBALS["lang"]['column'] = 'sloupec';

$GLOBALS["lang"]['column will contain either <i>y</i> or <i>n</i>. This indicates if this row is currently present on the device. For example software may be installed (which would result in <i>software.current = y</i>), but on a subsequent audit it may not be detected. Open-AudIT will then change this rows current attribute to <i>n</i>.'] = 'sloupec bude obsahovat buď <i>y</i> nebo <i>n</i>. To znamená, zda je tento řádek v zařízení. Například software může být nainstalován (což by vedlo k <i>software.proud = y</i>), ale při následném auditu nemusí být zjištěna. Open- Audit pak změní tento aktuální atribut na <i>n</i>.';

$GLOBALS["lang"]['column. The'] = 'sloupec. •';

$GLOBALS["lang"]['compute'] = 'výpočet';

$GLOBALS["lang"]['config'] = 'config';

$GLOBALS["lang"]['console'] = 'konzole';

$GLOBALS["lang"]['contains'] = 'obsahuje';

$GLOBALS["lang"]['create'] = 'vytvořit';

$GLOBALS["lang"]['created'] = 'vytvořeno';

$GLOBALS["lang"]['credentials'] = 'pověření';

$GLOBALS["lang"]['critical'] = 'kritický';

$GLOBALS["lang"]['cve'] = 'cve';

$GLOBALS["lang"]['database'] = 'databáze';

$GLOBALS["lang"]['debug'] = 'ladění';

$GLOBALS["lang"]['delegated'] = 'přeneseno';

$GLOBALS["lang"]['delete'] = 'smazat';

$GLOBALS["lang"]['deleted'] = 'odstraněno';

$GLOBALS["lang"]['denied'] = 'zamítnuto';

$GLOBALS["lang"]['details'] = 'podrobnosti';

$GLOBALS["lang"]['devices'] = 'zařízení';

$GLOBALS["lang"]['digitalocean'] = 'digitalocean';

$GLOBALS["lang"]['discoveries'] = 'objevy';

$GLOBALS["lang"]['documentation for further details.'] = 'dokumentaci pro další podrobnosti.';

$GLOBALS["lang"]['does <strong>not</strong> provide vulnerability reports for the following'] = 'dělá <strong>ne</strong> poskytovat zprávy o zranitelnosti pro:';

$GLOBALS["lang"]['does not equal'] = 'se nerovná';

$GLOBALS["lang"]['emergency'] = 'nouzové';

$GLOBALS["lang"]['entra'] = 'entra';

$GLOBALS["lang"]['equals'] = 'rovná se';

$GLOBALS["lang"]['error'] = 'chyba';

$GLOBALS["lang"]['established'] = 'stanovené';

$GLOBALS["lang"]['excluded'] = 'vyloučena';

$GLOBALS["lang"]['expired'] = 'vypršela';

$GLOBALS["lang"]['extreme - Without which, the organisation would fail.

very high - Functions that are essential for the organisations survival and must be restored immediately.

high - Important functions that should be restored quickly but may have a slightly longer recovery time.

medium - Functions that are necessary but can tolerate longer downtime.

low - Non-essential functions that can be delayed without significant impact.

unassigned - The default until set.'] = 'extreme - Bez toho by organizace neuspěla.

velmi vysoká - funkce, které jsou nezbytné pro přežití organizací a musí být okamžitě obnoveny.

vysoká - Důležité funkce, které by měly být obnoveny rychle, ale mohou mít mírně delší dobu zotavení.

medium - funkce, které jsou nezbytné, ale mohou tolerovat delší prostoje.

nízké - Non- základní funkce, které mohou být odloženy bez výrazného dopadu.

unaloshed - Výchozí až do nastavení.';

$GLOBALS["lang"]['fail'] = 'selhání';

$GLOBALS["lang"]['false'] = 'false';

$GLOBALS["lang"]['file'] = 'soubor';

$GLOBALS["lang"]['firewall'] = 'firewall';

$GLOBALS["lang"]['first'] = 'první';

$GLOBALS["lang"]['fixed'] = 'pevný';

$GLOBALS["lang"]['floor'] = 'Podlaha';

$GLOBALS["lang"]['for'] = 'pro';

$GLOBALS["lang"]['for authentication'] = 'pro ověření';

$GLOBALS["lang"]['for this information.'] = 'pro tuto informaci.';

$GLOBALS["lang"]['from Audit Script Result'] = 'z Audit Script Výsledek';

$GLOBALS["lang"]['from NMIS'] = 'z NMIS';

$GLOBALS["lang"]['from address LocalHost (Using LRPC) running in the application container'] = 'z adresy LocalHost (Using LRPC) běžící v aplikačním kontejneru';

$GLOBALS["lang"]['front'] = 'vpředu';

$GLOBALS["lang"]['front-left'] = 'přední - vlevo';

$GLOBALS["lang"]['front-right'] = 'přední strana vpravo';

$GLOBALS["lang"]['github'] = 'github';

$GLOBALS["lang"]['google'] = 'Google';

$GLOBALS["lang"]['greater or equals'] = 'větší nebo rovno';

$GLOBALS["lang"]['greater than'] = 'větší než';

$GLOBALS["lang"]['group'] = 'skupina';

$GLOBALS["lang"]['has not been set'] = 'nebyla stanovena';

$GLOBALS["lang"]['have a working reverse DNS resolvable IP to the target Windows PC.'] = 'mít funkční reverzní DNS resolubilní IP do cílového počítače Windows.';

$GLOBALS["lang"]['have the ability to be executed. On the'] = 'mít schopnost být popraven. Na';

$GLOBALS["lang"]['head'] = 'hlava';

$GLOBALS["lang"]['here'] = 'Tady.';

$GLOBALS["lang"]['high availability'] = 'vysoká dostupnost';

$GLOBALS["lang"]['howto'] = 'Jak';

$GLOBALS["lang"]['if you clone a Linux virtual machine, unless you manually regenerate this (and in my experience, people do not) it will remain the same.'] = 'Pokud klonujete virtuální stroj Linux, pokud ho ručně nezregenerujete (a podle mých zkušeností lidé ne), zůstane stejný.';

$GLOBALS["lang"]['ignored'] = 'ignorováno';

$GLOBALS["lang"]['import the example device data'] = 'importovat data příkladového zařízení';

$GLOBALS["lang"]['in'] = 'n';

$GLOBALS["lang"]['in Enterprise.'] = 'na Enterprise.';

$GLOBALS["lang"]['in Inputs can have the following values.'] = 'v Vstupech mohou mít následující hodnoty.';

$GLOBALS["lang"]['in Outputs can have the following values.'] = 'v Výstupy mohou mít následující hodnoty.';

$GLOBALS["lang"]['inactive'] = 'neaktivní';

$GLOBALS["lang"]['incomplete'] = 'neúplná';

$GLOBALS["lang"]['info'] = 'info';

$GLOBALS["lang"]['installer will test for the presence of Nmap in its standard install locations of'] = 'instalátor bude testovat na přítomnost Nmap ve své standardní instalace umístění';

$GLOBALS["lang"]['int, text, bool (y/n), etc'] = 'int, text, bool (y / n) atd.';

$GLOBALS["lang"]['is U.S. standard maintained by National Institute of Standards and Technology'] = 'je standardem USA udržovaným Národním institutem norem a technologií';

$GLOBALS["lang"]['is an international standard for managing information security. It provides a framework for establishing, implementing, maintaining, and continually improving an Information Security Management System (ISMS).'] = 'je mezinárodní normou pro řízení bezpečnosti informací. Poskytuje rámec pro zřízení, provádění, udržování a neustálé zlepšování systému řízení bezpečnosti informací (ISMS).';

$GLOBALS["lang"]['is based upon'] = 'je založena na';

$GLOBALS["lang"]['is licensed to'] = 'je licencován';

$GLOBALS["lang"]['is next on the list and Open-AudIT can use password and key authentication. Open-AudIT can also use a sudo enabled user as opposed to the root use directly (although it can also use root). For best results, the root user or a sudo enabled user should be used (see Auditing Linux without root and Target Client Configuration on the wiki). Windows devices can also run ssh, however if Open-AudIT detects this it will stop the SSH queries and instead use WMI (assuming working WMI credentials).'] = 'je další na seznamu a Open- Audit může použít heslo a autorizaci klíče. Open- Audit může také použít sudo povoleného uživatele na rozdíl od root použití přímo (i když to může také používat root). Pro nejlepší výsledky by měl být použit root user nebo sudo povolený uživatel (viz Auditing Linux bez root a Target Client Konfigurace na wiki). Zařízení Windows mohou také spustit ssh, ale pokud to Open- Audit zjistí, zastaví dotazy SSH a místo toho použije WMI (za předpokladu pracovní WMI pověření).';

$GLOBALS["lang"]['is the link to the'] = 'je odkaz na';

$GLOBALS["lang"]['item to view the specific tables and their columns. This will enable you to find exactly what you need, rather than trawling through the MySQL console of the schema creation script.'] = 'položka pro zobrazení konkrétních tabulek a jejich sloupců. To vám umožní najít přesně to, co potřebujete, spíše než vlečení přes MySQL konzoli schématu vytvoření skriptu.';

$GLOBALS["lang"]['key required to retrieve lat/long and display map. See'] = 'klíč potřebný k získání lat / long a zobrazení mapy. Viz';

$GLOBALS["lang"]['left'] = 'vlevo';

$GLOBALS["lang"]['less or equals'] = 'méně nebo rovno';

$GLOBALS["lang"]['less than'] = 'méně než';

$GLOBALS["lang"]['license'] = 'licence';

$GLOBALS["lang"]['licenses'] = 'Licence';

$GLOBALS["lang"]['like'] = 'Jako';

$GLOBALS["lang"]['line'] = 'řádek';

$GLOBALS["lang"]['list'] = 'seznam';

$GLOBALS["lang"]['list View, using the Create button'] = 'seznam Zobrazit, pomocí tlačítka Vytvořit';

$GLOBALS["lang"]['load balancing'] = 'vyvažování nákladu';

$GLOBALS["lang"]['location'] = 'místo';

$GLOBALS["lang"]['locations'] = 'umístění';

$GLOBALS["lang"]['managed'] = 'řízeno';

$GLOBALS["lang"]['methods'] = 'metody';

$GLOBALS["lang"]['microsoft'] = 'microsoft';

$GLOBALS["lang"]['mount point'] = 'bod montáže';

$GLOBALS["lang"]['must'] = 'musí';

$GLOBALS["lang"]['network'] = 'síť';

$GLOBALS["lang"]['news'] = 'novinky';

$GLOBALS["lang"]['no'] = 'ne';

$GLOBALS["lang"]['node'] = 'uzel';

$GLOBALS["lang"]['none'] = 'žádný';

$GLOBALS["lang"]['normal'] = 'normální';

$GLOBALS["lang"]['not applicable'] = 'nepoužije se';

$GLOBALS["lang"]['not in'] = 'není v';

$GLOBALS["lang"]['not like'] = 'ne jako';

$GLOBALS["lang"]['notice'] = 'oznámení';

$GLOBALS["lang"]['notification'] = 'oznámení';

$GLOBALS["lang"]['okta'] = 'okta';

$GLOBALS["lang"]['on devices where'] = 'na zařízeních, kde';

$GLOBALS["lang"]['openldap'] = 'openldap';

$GLOBALS["lang"]['optimized'] = 'optimalizováno';

$GLOBALS["lang"]['optionally '] = 'volitelně ';

$GLOBALS["lang"]['or'] = 'nebo';

$GLOBALS["lang"]['or the GitHub page at'] = 'nebo GitHub stránku na';

$GLOBALS["lang"]['other'] = 'ostatní';

$GLOBALS["lang"]['package'] = 'balíček';

$GLOBALS["lang"]['page. Export your LDAP server from menu -> Admin -> LDAP Servers -> Details to JSON and save and include this data as well.'] = 'strana. Exportovat LDAP server z menu - > Admin - > LDAP Servers - > Podrobnosti pro JSON a uložit a zahrnout tyto údaje stejně.';

$GLOBALS["lang"]['partition'] = 'oddíl';

$GLOBALS["lang"]['pass'] = 'projít';

$GLOBALS["lang"]['pending'] = 'Probíhající';

$GLOBALS["lang"]['performance'] = 'výkon';

$GLOBALS["lang"]['performed'] = 'provedeno';

$GLOBALS["lang"]['permission'] = 'povolení';

$GLOBALS["lang"]['permissions required per endpoint'] = 'požadovaná oprávnění na jeden cílový parametr';

$GLOBALS["lang"]['pie'] = 'koláč';

$GLOBALS["lang"]['planning'] = 'plánování';

$GLOBALS["lang"]['predictable'] = 'předvídatelné';

$GLOBALS["lang"]['query'] = 'dotaz';

$GLOBALS["lang"]['rear'] = 'zadní';

$GLOBALS["lang"]['rear-left'] = 'vlevo vzadu';

$GLOBALS["lang"]['rear-right'] = 'vpravo dozadu';

$GLOBALS["lang"]['regex'] = 'regex';

$GLOBALS["lang"]['release'] = 'uvolnění';

$GLOBALS["lang"]['removed from display, but has been set'] = 'odstraněn z displeje, ale byl nastaven';

$GLOBALS["lang"]['reserved'] = 'vyhrazeno';

$GLOBALS["lang"]['right'] = 'Správně.';

$GLOBALS["lang"]['rights) you can click on the field value to edit it.'] = 'práva) můžete kliknout na hodnotu pole a upravit ji.';

$GLOBALS["lang"]['role'] = 'role';

$GLOBALS["lang"]['room'] = 'pokoj';

$GLOBALS["lang"]['row'] = 'řádek';

$GLOBALS["lang"]['service failed to start due to the following error'] = 'služba nebyla spuštěna kvůli následující chybě';

$GLOBALS["lang"]['so Open-AudIT knows to restrict your query to the appropriate Orgs.'] = 'Open- Audit ví, že váš dotaz má omezit na příslušné Orgy.';

$GLOBALS["lang"]['stand-alone'] = 'stand- alone';

$GLOBALS["lang"]['standard'] = 'standardní';

$GLOBALS["lang"]['starts with'] = 'začíná s';

$GLOBALS["lang"]['storage'] = 'skladování';

$GLOBALS["lang"]['subnet'] = 'subnet';

$GLOBALS["lang"]['table'] = 'tabulka';

$GLOBALS["lang"]['table and insert the original rows.'] = 'tabulky a vložte původní řádky.';

$GLOBALS["lang"]['team'] = 'tým';

$GLOBALS["lang"]['text. The first is the array index and should be left as-is. The index is used in the templates to lookup the translated text.'] = 'text. První je index pole a měl by být ponechán as- je. Index se používá v šablonách k vyhledání přeloženého textu.';

$GLOBALS["lang"]['then clicking on the details button for the table.'] = 'pak klikněte na tlačítko podrobnosti pro tabulku.';

$GLOBALS["lang"]['then clicking on the details button for the table. Device details are stored in the'] = 'pak klikněte na tlačítko podrobnosti pro tabulku. Detaily zařízení jsou uloženy v';

$GLOBALS["lang"]['timestamp'] = 'časové razítko';

$GLOBALS["lang"]['to'] = 'do';

$GLOBALS["lang"]['to create an item of this type'] = 'vytvořit položku tohoto typu';

$GLOBALS["lang"]['to the URL, you will get the full database entry, including all component tables, of a given device.'] = 'na URL, dostanete plnou položku databáze, včetně všech dílčích tabulek, daného zařízení.';

$GLOBALS["lang"]['to the user'] = 'uživateli';

$GLOBALS["lang"]['top'] = 'nahoře';

$GLOBALS["lang"]['top secret - Military / Government classification. Disclosure would cause exceptionally grave danger to national security.

secret - Military / Government classification. Disclosure would cause serious damage to national security.

confidential - Military / Government and Private Sector classification. Data that is confidential includes trade secrets, intellectual data, application programming code, and other data that could seriously affect the organization if unauthorized disclosure occurred. Data at this level would be available only to personnel in the organization whose work needs, or is directly related to, the accessed data. Access to confidential data usually requires authorization for each access.

private - Private Sector classification. Data that is private includes any information related to personnel, including human resources records, medical records, and salary information, that is used only within the organization.

sensitive - Military / Government and Private Sector classification. Data that is sensitive includes organizational financial information and requires extra measures to ensure its CIA and accuracy. Disclosure might harm national security.

public - Private Sector classification. Public data is data that is generally shared with the public and would not cause a negative impact on the organization. Examples of public data include how many people work in the organization and what products an organization manufactures or sells.

unclassified - Military / Government classification. Any information that can generally be distributed to the public without any threat to national interest.

unassigned - The default until set.'] = 'přísně tajné - vojensko-vládní klasifikace. Zveřejnění by způsobilo mimořádně vážné nebezpečí pro národní bezpečnost.

tajné - vojensko-vládní klasifikace. Zveřejnění by způsobilo vážnou škodu národní bezpečnosti.

důvěrné - klasifikace vojenského / vládního a soukromého sektoru. Mezi důvěrné údaje patří obchodní tajemství, intelektuální data, programovací kód aplikace a další údaje, které by mohly vážně ovlivnit organizaci, pokud by došlo k neoprávněnému zveřejnění. Údaje na této úrovni by byly k dispozici pouze pracovníkům v organizaci, jejichž pracovní potřeby nebo s nimi přímo souvisí. Přístup k důvěrným údajům obvykle vyžaduje povolení pro každý přístup.

klasifikace soukromého sektoru. Údaje, které jsou soukromé, zahrnují veškeré informace týkající se personálu, včetně záznamů o lidských zdrojích, lékařských záznamů a mzdových informací, které se používají pouze v rámci organizace.

citlivé - klasifikace vojenského / vládního a soukromého sektoru. Údaje, které jsou citlivé, zahrnují organizační finanční informace a vyžadují další opatření k zajištění její CIA a přesnosti. Zveřejnění by mohlo poškodit národní bezpečnost.

veřejná - klasifikace soukromého sektoru. Veřejná data jsou obecně sdílená s veřejností a nemají negativní dopad na organizaci. Příklady veřejných údajů zahrnují, kolik lidí pracuje v organizaci a jaké produkty organizace vyrábí nebo prodává.

neklasifikované - vojenské / vládní klasifikace. Veškeré informace, které mohou být obecně distribuovány veřejnosti bez ohrožení národního zájmu.

unaloshed - Výchozí až do nastavení.';

$GLOBALS["lang"]['traffic'] = 'provoz';

$GLOBALS["lang"]['true'] = 'pravda';

$GLOBALS["lang"]['true or false (in JSON context)'] = 'true nebo false (v kontextu JSON)';

$GLOBALS["lang"]['unallocated'] = 'nepřiděleno';

$GLOBALS["lang"]['unauthorised'] = 'nepovolené';

$GLOBALS["lang"]['unchanged'] = 'nezměněno';

$GLOBALS["lang"]['unknown'] = 'neznámý';

$GLOBALS["lang"]['unmanaged'] = 'neřízený';

$GLOBALS["lang"]['unused'] = 'nepoužité';

$GLOBALS["lang"]['update'] = 'aktualizace';

$GLOBALS["lang"]['uses the data collected from your devices and matches the software installed with the value provided, it counts the matches calculates how many licenses have been used and how many are left. It allows the use of wildcards on the <i>match string</i> field which matches the software.name attribute.'] = 'používá data shromážděná z vašich zařízení a shoduje se s nainstalovaným softwarem s poskytnutou hodnotou, počítá zápasy spočítá, kolik licencí bylo použito a kolik jich zůstalo. Umožňuje použití divokých karet na <i>match string</i> pole, které odpovídá softwaru. atribut jména.';

$GLOBALS["lang"]['using the main menu items.'] = 'pomocí hlavních položek menu.';

$GLOBALS["lang"]['valid'] = 'platné';

$GLOBALS["lang"]['version'] = 'verze';

$GLOBALS["lang"]['virtualisation'] = 'virtualizace';

$GLOBALS["lang"]['warning'] = 'upozornění';

$GLOBALS["lang"]['web'] = 'web';

$GLOBALS["lang"]['with Local and Remote access permissions set.'] = 's lokálním a vzdáleným přístupovým povolením.';

$GLOBALS["lang"]['with devices::update permission.'] = 'se zařízeními:: aktualizovat oprávnění.';

$GLOBALS["lang"]['with the Sign-On Redirect URI being'] = 's Sign- On Redirect URI je';

$GLOBALS["lang"]['with the intention of providing simple and intuitive access in a manner familiar to developers. In addition to this API, the web interface will use the same request format and supply some additional actions (eg: HTML forms for creating items).'] = 's úmyslem poskytnout jednoduchý a intuitivní přístup způsobem, který je vývojářům znám. Kromě tohoto API, webové rozhraní bude používat stejný formát žádosti a dodat některé další akce (např.: HTML formuláře pro vytváření položek).';

$GLOBALS["lang"]['yes'] = 'ano';

$GLOBALS["lang"]['you do not require a HighCharts license to use Firstwave products. License'] = 'k použití produktů Firstwave nepotřebujete licenci HighCharts. Licence';

$GLOBALS["lang"]['you will assign any found devices to that Org or Location.'] = 'přiřadíte všechna nalezená zařízení k tomuto Orgu nebo místu.';

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

