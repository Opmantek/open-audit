<?php
$GLOBALS["lang"][' Default, currently '] = ' Alapértelmezés, jelenleg ';

$GLOBALS["lang"][' is now supported with a language file. To change your user to use this language, click '] = ' most támogatja egy nyelvi fájl. A felhasználó megváltoztatásához kattintson erre a nyelvre ';

$GLOBALS["lang"][' seconds'] = ' másodperc';

$GLOBALS["lang"]['10 Minutes'] = '10 perc';

$GLOBALS["lang"]['15 Minutes'] = '15 perc';

$GLOBALS["lang"]['30 Minutes'] = '30 perc';

$GLOBALS["lang"]['5 Minutes'] = '5 perc';

$GLOBALS["lang"]['<br> <strong>NOTE</strong> - You are accessing this URL from the local Open-AudIT server. The downloaded script will not be able to submit when run on any other machine. If you need to audit other machines, please download the script from any remote machine, not using a browser on the Open-AudIT server itself.'] = '<br/> <strong>MEGJEGYZÉS</strong> - Ezt az URL-t a helyi Open- AudIT szerverről lehet elérni. A letöltött szkript nem lesz képes más gépen futtatni. Ha más gépeket kell ellenőriznie, kérjük, töltse le a szkriptet bármilyen távoli gépről, és ne használja a böngészőt az Open- AudIT szerveren.';

$GLOBALS["lang"]['<p></p>'] = '<p></p>';

$GLOBALS["lang"]['<p><strong class="text-danger">NOTE</strong> - You must have working SSH or SSH Key credentials to execute benchmarks upon a target device.</p>'] = '<p><strong class="text-danger">MEGJEGYZÉS</strong> - Biztos van működő SSH vagy SSH Key hitelesítő, hogy végrehajtsa a referenciaértékeket a cél eszköz.</p>';

$GLOBALS["lang"]['<p><strong>Baseline</strong> - The overarching document that contains the baseline definition and the individual policy tests.<br> <br> <strong>Policies</strong> - The individual tests contained within a Baseline. Each test is for a specific item. An example would be testing for SSH version 1.2.3.<br> <br> <strong>Details</strong> - Baselines can compare netstat ports, users and software.<br> <br> <strong>Software</strong> - To compare software we check the name and version. Because version numbers are not all standardised in format, when we receive an audit result we create a new attribute called software_padded which we store in the database along with the rest of the software details for each package. For this reason, baselines using software policies will not work when run against a device that has not been audited by 1.10 (at least). Software policies can test against the version being "equal to", "greater than" or "equal to or greater than".<br> <br> <strong>Netstat Ports</strong> - Netstat Ports use a combination of port number, protocol and program. If all are present the policy passes.<br> <br> <strong>Users</strong> - Users work similar to Netstat Ports. If a user exists with a matching name, status and password details (changeable, expires, required) then the policy passes.<br> <br> </p>'] = '<p><strong>Kiindulási</strong> - Az átfogó dokumentum, amely tartalmazza az alapmeghatározás és az egyes szakpolitikai tesztek.<br/> <br/> <strong>Politika</strong> - Az egyes tesztek egy alapvonalon belül voltak. Minden vizsgálat egy adott tételre vonatkozik. Példa erre az SSH 1.2.3 verziójának tesztelése.<br/> <br/> <strong>Részletek</strong> - Alapok összehasonlítani Netstat ports, felhasználók és szoftver.<br/> <br/> <strong>Szoftver</strong> - A szoftver összehasonlításához ellenőrizzük a nevet és a verziót. Mivel a verziószámok nem mind szabványosított formátumúak, amikor audit eredményt kapunk, létrehozunk egy új attribútumot, a szoftvert _ padded-et, amelyet az adatbázisban tárolunk az egyes csomagok szoftverének részleteivel együtt. Ezért a szoftverpolitikát használó alapvonalak nem fognak működni, ha egy olyan eszközzel futnak, amelyet nem ellenőriztek 1.10-ig (legalább). Szoftverpolitika lehet tesztelni a verzió "egyenlő", "nagyobb", vagy "egyenlő vagy nagyobb, mint".<br/> <br/> <strong>Netstat Ports</strong> - A Netstat Ports portszám, protokoll és program kombinációját használja. Ha mindenki jelen van, a politika érvényesül.<br/> <br/> <strong>Felhasználók</strong> - A felhasználók ugyanúgy dolgoznak, mint a Netstat Ports. Ha a felhasználó létezik egy egyező név, állapot és jelszó részleteket (cserélhető, lejár, szükséges), akkor a házirendet.<br/> <br/> </p>';

$GLOBALS["lang"]['<p>A location is a physical address that can have devices associated with it.<br> <br>You can assign it coordinates (lat/long) and if there are devices assigned, the location will appear on the Open-AudIT Enterprise map.<br> <br></p>'] = '<p>A helyszín egy fizikai cím, amely a hozzá kapcsolódó eszközöket.<br/> <br/>A koordinátákat (lat / long) hozzá lehet rendelni, és ha vannak hozzárendelt eszközök, a helyszín megjelenik az Open- AudIT Enterprise térképen.<br/> <br/></p>';

$GLOBALS["lang"]['<p>A network is derived from discovery entries and device attributes.<br> <br></p>'] = '<p>A hálózat a felfedezések bejegyzéseiből és eszközjellemzőkből származik.<br/> <br/></p>';

$GLOBALS["lang"]['<p>A summary will display a list of items, grouped by the distinct values of the attribute specified by the <code>table</code> and <code>column</code> attributes.<br> <br>When a summary is executed, the result will be a list of distinct values for that <code>table</code> and <code>column</code>. There will be links on the values that allow the user to see the matching devices.<br> <br>If the attribute of <code>extra_columns</code> is populated, the resulting page will contain these columns in addition to the standard device columns.<br> <br></p>'] = '<p>Az összefoglaló tartalmazza a tételek listáját, csoportosítva az attribútum egyedi értékei által meghatározott <code>table</code> és <code>column</code> jellemzők.<br/> <br/>Ha egy összefoglaló kerül végrehajtásra, az eredmény lesz egy lista a különböző értékek <code>table</code> és <code>column</code>. Vannak linkek az értékek, amelyek lehetővé teszik a felhasználó számára, hogy lássa a megfelelő eszközök.<br/> <br/>Ha az attribútum: <code>extra_columns</code> lakott, az így kapott oldal ezeket az oszlopokat a szabványos eszközoszlopokon kívül tartalmazza.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Agents let you audit PCs without a discovery. Install the agent and it will check-in with the server each day and audit itself. It does not matter if your computers are firewalled, audit data will still appear in Open-AudIT.</p><p>When testing <strong>if</strong> an agent should perform actions, all three tests must pass (if the test is set). <strong>Then</strong> the actions are taken.</p>'] = '<p>Az ügynökök megengedik, hogy felfedezés nélkül ellenőrizze a PC-ket. Telepítsd az ügynököt, és minden nap bejelentkezik a szerverhez, és ellenőrzi magát. Nem számít, ha a számítógépek tűzfalazott, ellenőrzési adatok továbbra is megjelenik az Open- AudIT.</p><p>Vizsgáláskor <strong>ha</strong> a reagensnek intézkedéseket kell tennie, mindhárom vizsgálatot át kell esnie (ha a vizsgálat be van állítva). <strong>Akkor...</strong> az intézkedéseket meghozzák.</p>';

$GLOBALS["lang"]['<p>Applications are defined by you, the user and stored for Open-AudIT to use and associate with devices.<br> <br></p>'] = '<p>Az alkalmazásokat Ön, a felhasználó határozza meg és tárolja az Open- AudIT használatához és az eszközökhöz való kapcsolódáshoz.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Attributes are stored for Open-AudIT to use for particular fields.</p>'] = '<p>Attribútumok tárolja Open- AudIT használni bizonyos mezők.</p>';

$GLOBALS["lang"]['<p>Being able to determine which machines are configured the same is a major part of systems administration and auditing &ndash; and now reporting on that will be made simple and automated. Once you define your baseline it will automatically run against a set of devices on a predetermined schedule. The output of these executed baselines will be available for web viewing, importing into a third party system or even as a printed report.<br> <br> Baselines enable you to combine audit data with a set of attributes you have previously defined (your baseline) to determine compliance of devices.<br> <br> For example - you might create a baseline from a device running Centos 6 which acts as one of your apache servers in a cluster. You know this particular server is configured just the way you want it but you are unsure if other servers in the cluster are configured exactly the same. Baselines enables you to determine this.<br> <br> </p>'] = '<p>Az, hogy meg tudjuk határozni, hogy melyik gép van konfigurálva, a rendszerek adminisztrációjának és auditálásának fontos része - és most a jelentéstétel egyszerűvé és automatikussá válik. Ha meghatározza a kiindulási értéket, automatikusan fut egy sor eszköz egy előre meghatározott ütemezés. A végrehajtott alapvonalak kimenete webes megtekintésre, harmadik fél rendszerébe történő importálásra vagy akár nyomtatott jelentésre is rendelkezésre áll.<br/> <br/> Alapok lehetővé teszi, hogy az ellenőrzési adatokat kombinálja egy sor attribútum korábban meghatározott (a kiindulási), hogy meghatározza az eszközök megfelelőségét.<br/> <br/> Például - létrehozhat egy alapvonalat egy Centos 6-os típusú eszközből, ami az egyik apache szervereként működik egy klaszterben. Tudod, hogy ez a bizonyos szerver pontosan úgy van beállítva, ahogy szeretnéd, de nem vagy biztos benne, hogy a klaszter többi szervere pontosan ugyanolyan. Az alapvonalak lehetővé teszik, hogy ezt eldöntsd.<br/> <br/> </p>';

$GLOBALS["lang"]['<p>Clusters are stored in Open-AudIT to associate devices to better record, manage and estimate licensing costs.<br> <br></p>'] = '<p>A klasztereket az Open- AudIT-ben tárolják, hogy az eszközöket az engedélyezési költségek jobb rögzítésére, kezelésére és becslésére használják.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Components is a generic term used for the tables that store the attributes for a device. Those tables are: access_point, arp, bios, certificate, cli_config, disk, dns, file, ip, license, log, memory, module, monitor, motherboard, netstat, network, nmap, optical, pagefile, partition, policy, print_queue, processor, radio, route, san, scsi, server, server_item, service, share, software, software_key, sound, task, usb, user, user_group, variable, video, vm, windows.</p><p> In addition we class the following tables also as device related: application, attachment, cluster, credential, image.</p>'] = '<p>Az összetevők általános kifejezés azokra a táblázatokra, amelyek az eszköz tulajdonságait tárolják. Ezek a táblázatok a következők: access _ point, arp, bios, certificate, cli _ config, disk, dns, file, ip, licence, log, memory, modult, monitor, alaplap, netstat, hálózat, nmap, optikai, pagefile, partíció, politika, print _ queue, processzor, rádió, útvonal, san, scsi, szerver _ tétel, szolgáltatás, megosztás, szoftver, szoftver _ key, feladat, usb, felhasználó _ csoport, változó, videó, vm, ablakok.</p><p> Ezen kívül az alábbi táblázatokat is az eszközhöz kapcsolódónak minősítjük: alkalmazás, csatolás, klaszter, hitelesség, kép.</p>';

$GLOBALS["lang"]['<p>Credentials are encrypted when stored in the database.<br> <br>When a Discovery is run, a device has its credentials retrieved and tested for connection first (from the <code>credential</code> table). If these fail, then credentials associated with the given Org <code>credentials.org_id</code> is also tested against the device. Working credentials are stored at an individual device level in the credential table (note - no "s" in the table name).<br> <br>SSH keys are tested before SSH username / password. When testing SSH, credentials will also be marked as working with sudo or being root.<br> <br>For ease of use, Windows passwords should not contain a single or double quote. This is a remote WMI limitation, not an Open-AudIT limitation.<br> <br></p>'] = '<p>Az adatbázisban tárolt fájlok titkosítva vannak.<br/> <br/>Amikor egy Discovery fut, egy eszköz a mandátumát lekérte, és tesztelt kapcsolat először (a <code>credential</code> táblázat). Ha ezek nem sikerül, akkor a megadott Org-hoz kapcsolódó megbízások <code>credentials.org_id</code> az eszköz ellen is tesztelik. A munkaigazolásokat az egyes eszközök szintjén tárolják a hitelesítő táblázatban (jegyzet - nincs "s" a táblázat nevében).<br/> <br/>Az SSH billentyűket az SSH felhasználónév / jelszó előtt tesztelik. Az SSH vizsgálatakor a megbízóleveleket sudo-val vagy root-val is jelölik.<br/> <br/>A használat megkönnyítése érdekében a Windows jelszavak nem tartalmazhatnak egyetlen vagy dupla idézetet sem. Ez egy távoli WMI korlátozás, nem egy Open- AudIT korlátozás.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Credentials are used to access devices.<br> <br>Configuring credentials should be one of the first things you do after installing Open-AudIT.<br> <br></p>'] = '<p>Az eszközökhöz való hozzáféréshez a krediteket használják.<br/> <br/>A megbízólevelek konfigurálása az Open- AudIT telepítése után az első dolgok egyike.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Define your racks and assign devices into their positions. You already have your devices in Open-AudIT and you know your locations. Open-AudIT extends this to allow you to create a rack and assign devices to it. Open-AudIT will even provide a visualisation of the rack and the devices contained within. If you provide a device picture, that picture will be used in the visualisation. You can look at the rack on the screen and see the same items you would see if you were standing in front of it.<br> <br></p>'] = '<p>Definiáld az állványaidat, és állíts a helyükre eszközöket. Már megvannak az eszközeid az Open- AudIT-ban, és tudod, hol vagy. Open- AudIT kiterjeszti ezt, hogy lehetővé teszi, hogy hozzon létre egy rack és hozzárendeli eszközök hozzá. Az Open- AudIT még az állvány és a benne lévő eszközök megjelenítését is biztosítja. Ha egy eszköz képet, hogy a képet fogják használni a vizualizáció. Megnézheti a rácsot a képernyőn, és ugyanazokat a tárgyakat láthatják, ha előtte állnak.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Devices on your network need to be managed. But how do you keep your records up to date? A spreadsheet - defintley not. That will be out of date in hours, if not days. Why manually try to keep up. Use Open-AudIT to automatically scan your networks and record your devices - manufacturer, model, serial and more than 100 other attributes. Full lists of software, services, disks, open ports, users, etc. Automatically see if an attribute has been added, removed or changed.<br> <br>Once Open-AudIT is setup, you can sit back and relax. Have change reports emailed to you on a schedule, for example - what new devices did we discover this week? What new software was installed this week? Were there any hardware changes last month?<br> <br>Expand on the stored fields easily with your own custom attributes.<br> <br>Even add devices that are not connected to your network or those devices your Open-AudIT server cannot reach.<br> <br>Computers, switches, routers, printers or any other device on your network - Open-AudIT can audit them all.<br> <br></p>'] = '<p>A hálózatán lévő eszközöket kezelni kell. De hogy tartja naprakészen a feljegyzéseit? Egy táblázat - defintley not. Ez órákon belül elavul, ha nem napokon belül. Miért próbálja kézzel tartani a lépést? Az Open- AudIT segítségével automatikusan letapogathatja hálózatait és rögzítheti eszközeit - gyártóját, modelljét, sorozatgyártóját és több mint 100 más attribútumát. Szoftver, szolgáltatások, lemezek, nyitott kikötők, felhasználók, stb. Automatikusan ellenőrizze, hogy egy attribútumot hozzáadtak, eltávolítottak vagy megváltoztattak-e.<br/> <br/>Miután az Open- AudIT beállítást elvégeztük, hátradőlhetsz és pihenhetsz. Változott-e az Ön számára e-mailben egy menetrend, például - milyen új eszközöket fedeztünk fel ezen a héten? Milyen új szoftvert telepítettek a héten? Volt valami hardver változás a múlt hónapban?<br/> <br/>Bővítse a tárolt mezők könnyen a saját egyedi attribútumok.<br/> <br/>Még olyan eszközöket is hozzáadhat, amelyek nem kapcsolódnak hálózatához, vagy azokat, amelyeket az Open- AudIT szerver nem tud elérni.<br/> <br/>Számítógépek, kapcsolók, routerek, nyomtatók vagy bármilyen más eszköz a hálózaton - Open- AudIT képes mindet ellenőrizni.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Discoveries are at the very heart of what Open-AudIT does.<br> <br>How else would you know "What is on my network?"<br> <br>Discoveries are prepared data items that enable you to run a discovery upon a network in a single click, without entering the details of that network each and every time.<br> <br></p>'] = '<p>A felfedezések állnak az Open- AudIT tevékenységének középpontjában.<br/> <br/>Honnan tudhatnád, hogy mi van a hálózatomon?<br/> <br/>A felderítések olyan adatelemek, amelyek lehetővé teszik, hogy egyetlen kattintással futtasson egy felfedezést egy hálózaton, anélkül, hogy minden egyes alkalommal megadná a hálózat adatait.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Discovery Options are a global setting changed in the <a href="../configuration?configuration.name=discovery_default_scan_option">configuration</a>. If you have an Open-AudIT Enterprise license these are settable per discovery and in addition futher customizable as required. Discovery Options are as follows (including an indicitave time to scan an individual IP):<br/><br><strong>UltraFast</strong>: <i>1 second</i>. Scan only the ports that Open-AudIT needs to use to talk to the device and detect an IOS device (WMI, SSH, SNMP, Apple Sync). An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is not considered open. Device must respond to an Nmap ping. Use aggressive timing.<br><br/><strong>SuperFast</strong>: <i>5 seconds</i>. Scan the top 10 TCP and UDP ports, as well as port 62078 (Apple IOS detection). An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is not considered open. Device must respond to an Nmap ping. Use aggressive timing.<br/><br/><strong>Fast</strong>: <i>40 seconds</i>. Scan the top 100 TCP and UDP ports, as well as port 62078 (Apple IOS detection). An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is not considered open. Device must respond to an Nmap ping. Use aggressive timing.<br/><br/><strong>Medium (Classic)</strong>: <i>90 seconds</i>. As close to a traditional Open-AudIT scan as we can make it. Scan the top 1000 TCP ports, as well as 62078 (Apple IOS detection) and UDP 161 (SNMP). An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is considered open (and will trigger device detection). Devices are scanned regardless of a response to an Nmap ping. Use aggressive timing.<br/><br/><strong>Medium</strong>: <i>100 seconds</i>. Scan the top 1000 TCP and top 100 UDP ports, as well as port 62078 (Apple IOS detection). An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is not considered open. Device must respond to an Nmap ping. Use aggressive timing.<br/><br/><strong>Slow</strong>: <i>4 minutes</i>. Scan the top 1000 TCP and top 100 UDP ports, as well as port 62078 (Apple IOS detection). Version detection enabled. An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is considered open (and will trigger device detection). Device must respond to an Nmap ping. Use normal timing.<br/><br/><strong>UltraSlow</strong>: <i>20 minutes</i>. Not recommended. Scan the top 1000 TCP and UDP ports, as well as port 62078 (Apple IOS detection). Devices are scanned regardless of a response to an Nmap ping. Version detection enabled. An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is considered open (and will trigger device detection). Use polite timing.<br/><br/><strong>Custom</strong>: <i>Unknown time</i>. When options other than as set by a standard discovery preset are altered.<br><br></p>'] = '<p>Felfedezés A lehetőségek egy globális környezet megváltozott a <a href="../configuration?configuration.name=discovery_default_scan_option">konfiguráció</a>. Ha van Open- AudIT Enterprise licenced, ezek a felfedezésenként beállíthatók, és ráadásul szükség szerint testre szabhatók. Felfedezés A lehetőségek a következők (beleértve egy indicitave időt szkennelni egy adott IP):<br/><br/><strong>UltraFast</strong>: <i>1 másodperc</i>. Csak az Open- AudIT által a készülékkel való beszélgetéshez és az IOS eszköz (WMI, SSH, SNMP, Apple Sync) észleléséhez használt portokat lehet lekérdezni. A <code>open|filtered</code> A kikötőt nyitottnak kell tekinteni. A <code>filtered</code> a kikötő nem tekinthető nyitottnak. Az eszköznek reagálnia kell egy Nmap pingre. Használd az agresszív időzítést.<br/><br><strong>SuperFast</strong>: <i>5 másodperc</i>. Keresse meg a 10 TCP és UDP portot, valamint a 62078 portot (Apple IOS detektor). A <code>open|filtered</code> A kikötőt nyitottnak kell tekinteni. A <code>filtered</code> a kikötő nem tekinthető nyitottnak. Az eszköznek reagálnia kell egy Nmap pingre. Használd az agresszív időzítést.<br><br/><strong>Gyors</strong>: <i>40 másodperc</i>. Keresse meg a 100 TCP és UDP portot, valamint a 62078 portot (Apple IOS detektor). A <code>open|filtered</code> A kikötőt nyitottnak kell tekinteni. A <code>filtered</code> a kikötő nem tekinthető nyitottnak. Az eszköznek reagálnia kell egy Nmap pingre. Használd az agresszív időzítést.<br/><br/><strong>Közepes (klasszikus)</strong>: <i>90 másodperc</i>. Olyan közel egy hagyományos Open- AudIT letapogatáshoz, amennyire csak lehet. Keresse meg a legjobb 1000 TCP portot, valamint a 62078 (Apple IOS detektor) és az UDP 161 (SNMP) portot. A <code>open|filtered</code> A kikötőt nyitottnak kell tekinteni. A <code>filtered</code> A portot nyitottnak kell tekinteni (és az eszköz észlelését fogja előidézni). Az eszközöket a Nmap pingre adott választól függetlenül letapogatják. Használd az agresszív időzítést.<br/><br/><strong>Közepes</strong>: <i>100 másodperc</i>. A felső 1000 TCP és top 100 UDP port, valamint port 62078 (Apple IOS detektor). A <code>open|filtered</code> A kikötőt nyitottnak kell tekinteni. A <code>filtered</code> a kikötő nem tekinthető nyitottnak. Az eszköznek reagálnia kell egy Nmap pingre. Használd az agresszív időzítést.<br/><br/><strong>Lassú</strong>: <i>4 perc</i>. A felső 1000 TCP és top 100 UDP port, valamint port 62078 (Apple IOS detektor). Verzió észlelés engedélyezve. A <code>open|filtered</code> A kikötőt nyitottnak kell tekinteni. A <code>filtered</code> A portot nyitottnak kell tekinteni (és az eszköz észlelését fogja előidézni). Az eszköznek reagálnia kell egy Nmap pingre. A szokásos időzítés.<br/><br/><strong>UltraSlow</strong>: <i>20 perc</i>. Nem javasolt. Keresse meg a legjobb 1000 TCP és UDP portot, valamint a 62078 portot (Apple IOS detektor). Az eszközöket a Nmap pingre adott választól függetlenül letapogatják. Verzió észlelés engedélyezve. A <code>open|filtered</code> A kikötőt nyitottnak kell tekinteni. A <code>filtered</code> A portot nyitottnak kell tekinteni (és az eszköz észlelését fogja előidézni). Udvarias időzítés.<br/><br/><strong>Egyéni</strong>: <i>Ismeretlen idő</i>. Amikor más opciók is módosulnak, mint amit egy standard felfedezés előír.<br/><br/></br></br></p>';

$GLOBALS["lang"]['<p>Groups are used as simple lists of devices that match the required conditions. If requested using JSON they return a list of <code>devices.id</code> only. If requested using the web interface, they return the standard column attribute list.<br> <br></p>'] = '<p>A csoportokat az előírt feltételeknek megfelelő eszközök egyszerű listájaként használják. Ha a JSON-t kérik, a <code>devices.id</code> Csak. Ha a webes interfész igényli, akkor a standard oszlop attribútum listát adja vissza.<br/> <br/></p>';

$GLOBALS["lang"]['<p>If the user logging on to Open-AudIT does not have the access to search LDAP (and you are using OpenLDAP), you can use another account which does have this access. Use the <code>ldap_dn_account</code> and <code>ldap_dn_password</code> to configure this.<br> <br><strong>Helpful Documentation</strong><br> <br>
        <a href="/index.php/auth/help">General Auth Help</a><br> <br>
        <a href="/index.php/faq?name=Using Entra for Auth">Using Entra for Auth</a><br> <br>
        <a href="/index.php/faq?name=Using OKTA for Auth">Using OKTA for Auth</a><br> <br>
        <a href="/index.php/faq?name=Troubleshooting LDAP Logins">Troubleshooting LDAP Logins</a><br> <br>
        <a href="/index.php/faq?name=Users, Roles and Orgs">Users, Roles and Orgs</a><br> <br></p>'] = '<p>Ha a felhasználó bejelentkezik az Open- AudIT-re, nincs hozzáférése az LDAP kereséséhez (és az OpenLDAP-ot használja), akkor egy másik fiókot is használhat, amelynek van ilyen hozzáférése. A <code>ldap_dn_account</code> és <code>ldap_dn_password</code> Ezt konfigurálni.<br/> <br/><strong>Hasznos dokumentáció</strong><br/> <br/><a href="/index.php/auth/help">Általános Auth Help</a><br/> <br/><a href="/index.php/faq?name=Using Entra for Auth">Az Entra használata Auth-ra</a><br/> <br/><a href="/index.php/faq?name=Using OKTA for Auth">OKTA alkalmazása az Auth-hoz</a><br/> <br/><a href="/index.php/faq?name=Troubleshooting LDAP Logins">Problémamegoldás LDAP Logins</a><br/> <br/><a href="/index.php/faq?name=Users, Roles and Orgs">Felhasználók, szerepek és sorok</a><br/> <br/></p>';

$GLOBALS["lang"]['<p>If you add a device type, to display the associated icon you will have to manually copy the .svg formatted file to the directory:<br><em>Linux</em>:/usr/local/open-audit/public/device_images<br><em>Windows</em>: c:\xampp\htdocs\open-audit\device_images<br> <br>If you add a location type, to display the associated icon you will have to manually copy the 32x32px icon to the directory:<br><em>Linux</em>:/usr/local/open-audit/public/images/map_icons<br><em>Windows</em>: c:\xampp\htdocs\open-audit\images\map_icons</p><p>When the <i>resource</i> is a <code>device</code>, valid <i>types</i> are: <code>class</code>, <code>environment</code>, <code>status</code> and <code>type</code>. If the <i>resource</i> is <code>locations</code> or <code>org</code> the only valid <i>type</i> is <code>type</code>. If the <i>resource</i> is a <code>query</code> the only valid <i>type</i> is <code>menu_category</code>.</p>'] = '<p>Ha egy eszköztípust adunk hozzá, a hozzá tartozó ikon megjelenítéséhez manuálisan kell másolni a .svg formátumú fájlt a könyvtárba:<br/><em>Linux</em>: / usr / local / open-audit / public / device _ images<br/><em>Windows</em>: c:\ xampp\ htdocs\ open- audit\ device _ images<br/> <br/>Ha hozzáad egy helytípust, a hozzá tartozó ikon megjelenítéséhez kézzel kell másolni a 32x32px ikont a könyvtárba:<br/><em>Linux</em>: / usr / local / open-audit / public / images / map _ icons<br/><em>Windows</em>: c:\ xampp\ htdocs\ open- audit\ images\ map _ icons</p><p>Amikor <i>forrás</i> a <code>device</code>érvényes <i>típusok</i> : <code>class</code>, <code>environment</code>, <code>status</code> és <code>type</code>. Ha <i>forrás</i> ed <code>locations</code> vagy <code>org</code> az egyetlen érvényes <i>típus</i> ed <code>type</code>. Ha <i>forrás</i> a <code>query</code> az egyetlen érvényes <i>típus</i> ed <code>menu_category</code>.</p>';

$GLOBALS["lang"]['<p>If you intend to completely audit your cloud machines, do not forget you will also need those credentials saved in Open-AudIT.</p><p>Make sure you allow the correct ports if you are using Microsoft Azure (22 for SSH, etc). Check your Virtual Machine -> Networking rules.<br> <br></p>'] = '<p>Ha teljes mértékben ellenőrizni szeretné a felhőgépeit, ne felejtse el, hogy az Open- AudIT-ban elmentett igazolásokra is szüksége lesz.</p><p>Győződjön meg róla, hogy lehetővé teszi a megfelelő portok, ha használja a Microsoft Azure (22 SSH, stb). Ellenőrizze virtuális gépét - > Hálózati szabályok.<br/> <br/></p>';

$GLOBALS["lang"]['<p>If you select a List type, the "values" field will be enabled. You should put a comma separated list of selectable values here. These will display in a dropdown box whenever the field is edited.<br> <br>Like most other attributes, Fields can be bulk edited. Use the Bulk Edit function as you normally would and you will see the Fields are available for input.<br> <br>View the device details screen, open the section containing the field and (if you have sufficient access) you can click on the field value to edit it.<br> <br></p>'] = '<p>Ha kiválaszt egy Lista típust, az "értékek" mező be lesz jelölve. Ide kellene tenned a választható értékek vesszővel külön listáját. Ezek megjelennek majd egy lepattintható dobozban, amikor a mezőt szerkesztik.<br/> <br/>Mint a legtöbb más tulajdonság, Fields lehet ömlesztett szerkesztett. Használja a tömeges Edit funkció, ahogy általában, és látni fogja, hogy a mezők rendelkezésre állnak a bemenet.<br/> <br/>Tekintse meg az eszköz részletes képernyőjét, nyissa meg a mezőt tartalmazó részt, és (ha elegendő hozzáférése van) kattintson a mező értékére a szerkesztéshez.<br/> <br/></p>';

$GLOBALS["lang"]['<p>In the ever-changing world of computer security where new vulnerabilities are being discovered and patched every day, enforcing security compliance must be a continuous process. It also needs to include a way to make adjustments to policies, as well as periodic assessment and risk monitoring. The OpenSCAP ecosystem provides tools and customizable policies for a quick, cost-effective and flexible implementation of these processes.</p>'] = '<p>A számítógépes biztonság állandóan változó világában, ahol minden nap új sebezhetőségeket fedeznek fel és foltoznak össze, a biztonsági megfelelés érvényesítésének folyamatos folyamatnak kell lennie. Magában kell foglalnia a politikák kiigazításának módját, valamint az időszakos értékelést és a kockázatfelügyeletet. Az OpenSCAP ökoszisztéma eszközöket és testreszabható politikákat biztosít e folyamatok gyors, költséghatékony és rugalmas végrehajtásához.</p>';

$GLOBALS["lang"]['<p>Integrations allow you to setup device selection and schedules for Open-AudIT to talk to external systems.<br> <br></p>'] = '<p>Integrálások lehetővé teszi, hogy beállítsa eszköz kiválasztása és menetrendek Open- AudIT beszélni külső rendszerek.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Nmap timing details are found on the bottom of this linked page <a href="https://nmap.org/book/man-performance.html" target="_blank">https://nmap.org/book/man-performance.html</a>. From that page:<br> <br><em>If you are on a decent broadband or ethernet connection, I would recommend always using -T4 (Aggressive). Some people love -T5 (Insane) though it is too aggressive for my taste. People sometimes specify -T2 (Polite) because they think it is less likely to crash hosts or because they consider themselves to be polite in general. They often do not realize just how slow -T2 really is. Their scan may take ten times longer than a default scan. Machine crashes and bandwidth problems are rare with the default timing options -T3 (Normal) and so I normally recommend that for cautious scanners. Omitting version detection is far more effective than playing with timing values at reducing these problems.</em><footer>Gordon <i>Fyodor</i> Lyon</footer><br> <br></p>'] = '<p>Nmap időzítő részletek találhatók az alján a kapcsolódó oldalon <a href="https://nmap.org/book/man-performance.html" target="_blank">https: / / nmap.org / book / man- performance.html</a>. Ezen az oldalon:<br/> <br/><em>Ha egy tisztességes szélessávú vagy Ethernet kapcsolat, azt javaslom, mindig használja a -T4 (Agresszív). Néhányan szeretik a -T5-öt, bár ez túl agresszív az én ízlésemnek. Az emberek néha megadják a -T2 (Polite), mert úgy gondolják, hogy kevésbé valószínű, hogy összeomlik gazdatestek, vagy mert úgy vélik, hogy általában udvariasak. Gyakran nem veszik észre, milyen lassú is a -T2 valójában. A letapogatásuk tízszer hosszabb lehet, mint az alapértelmezett letapogatás. A gépek összeomlása és sávszélesség problémák ritkák az alapértelmezett időzítő opciók -T3 (Normal) és így általában azt javaslom, hogy az óvatos szkennerek. A verziófelismerés elhagyása sokkal hatékonyabb, mint az időzítési értékekkel játszani e problémák csökkentése érdekében.</em><footer>Gordon <i>Fjodor</i> Lyon</footer><br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT can be configured to use different methods to authenticate a user and in addition, to create a user account using assigned roles and orgs based on group membership.<br> <br></p>'] = '<p>Az Open- AudIT konfigurálható arra, hogy különböző módszereket alkalmazzon a felhasználó hitelesítésére, valamint arra is, hogy felhasználói fiókot hozzon létre hozzárendelt szerepek és orgák felhasználásával, csoporttagság alapján.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT can retrieve details about a file or directory of files and monitor these files for changes as per other attributes in the Open-AudIT database.<br> <br>This feature works out of the box for Linux Open-AudIT servers, but needs a change to the service account name under a Windows Open-AudIT server.<br> <br>Supported clients are Windows and Linux.<br> <br></p>'] = '<p>Open- Aud Az IT letöltheti a fájlokat tartalmazó fájlról vagy könyvtárról szóló adatokat, és az Open- AudIT adatbázis más attribútumainak megfelelően nyomon követheti ezeket a fájlokat a változtatásokhoz.<br/> <br/>Ez a funkció a Linux Open- AudIT szerverek dobozából jön létre, de a Windows Open- AudIT szerver alatt meg kell változtatni a szolgáltatás fióknevét.<br/> <br/>Támogatott ügyfelek Windows és Linux.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT can retrieve details about a file, ask the native package manager if they are known to it and monitor these files for changes as per other attributes in the Open-AudIT database.<br> <br>Supported clients are Linux only.<br> <br></p>'] = '<p>Open- Aud IT letöltheti a részleteket egy fájlról, megkérdezheti az anyanyelvi csomagkezelőtől, hogy ismerik-e, és figyelemmel kísérheti ezeket a fájlokat a változtatások tekintetében az Open- AudIT adatbázis más attribútumainak megfelelően.<br/> <br/>A támogatott kliensek csak Linux.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT can store information in custom fields that are associated with each device.<br> <br>Once an Additional Field has been created it can be used in queries and groups just like any other attribute in the database.<br> <br></p>'] = '<p>Open- Aud Az IT az egyes eszközökhöz kapcsolódó egyedi mezőkben tárolhatja az információkat.<br/> <br/>Ha létrehoztunk egy további mezőt, akkor olyan lekérdezésekben és csoportokban használható, mint bármely más attribútum az adatbázisban.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT comes with many queries inbuilt. If you require a specific query and none of the pre-packaged queries fit your needs, it is quite easy to create a new one and load it into Open-AudIT for running.<br> <br></p>'] = '<p>Open- AudIT jön sok kérdés beépített. Ha speciális lekérdezésre van szükség, és egyik előre csomagolt lekérdezés sem felel meg az igényeknek, akkor nagyon könnyű egy újat létrehozni, és a futáshoz az Open- AudIT-ba betölteni.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT comes with many summaries inbuilt. If you require a specific summary and none of the pre-packaged summaries fit your needs, it is quite easy to create a new one and load it into Open-AudIT for running.<br> <br></p>'] = '<p>Az Open- AudIT számos beépített összefoglalóval rendelkezik. Ha egy konkrét összefoglalóra van szüksége, és az előre csomagolt összefoglalók egyike sem felel meg az igényeinek, elég könnyű létrehozni egy újat, és betölteni az Open- AudIT-ba futáshoz.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT is supported by FirstWave with an amazing level of support. If you prefer an active community of support givers, theres that as well. Where else can you talk directly to the developers and get a response within 24 hours? Just try that with other products! Amazing support. Full stop. You need support, we provide support. No ifs or buts. Great support. Period.<br> <br></p>'] = '<p>Az Open- AudIT-ot a FirstWave támogatja, elképesztő szintű támogatással. Ha a támogatók aktív közösségét részesíti előnyben, akkor azt is. Hol máshol lehet közvetlenül beszélni a fejlesztőkkel, és 24 órán belül választ kapni? Csak próbáld ki más termékekkel! Csodálatos támogatás. Teljes leállás. Támogatásra van szüksége, mi támogatjuk. Se ha, se de. Nagy támogatás. Pont.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT provides multi-tenancy out of the box!<br> <br>Orgs (organisations) in Open-AudIT are a key item. A user has a primary Org as well as a list of Orgs they can access. A user combines this with a list of assigned "Roles" that define what actions they can take on items assigned to the Orgs they have access to. The combination of a users "orgs" and "roles" define what they can and cannot do within Open-AudIT.<br> <br>Most items in Open-AudIT are assigned to an Org. Devices, Locations, Networks, etc.<br> <br>Orgs can have child Orgs. Think of an organisational chart (tree) structure. If a user has access to a specific Org, they also have access to that Orgs descendants. For more information, see this <a href="/index.php/faq?name=Users, Roles and Orgs">FAQ</a>.</p>'] = '<p>Az Open- AudIT multi- bérlést biztosít a dobozból!<br/> <br/>Az Open- AudIT (szervezetek) rendszerei kulcsfontosságúak. A felhasználónak van egy elsődleges Org, valamint egy listát a Orgs, hogy hozzáférhet. A felhasználó ezt kombinálja a kijelölt "Rolles" listával, amely meghatározza, hogy milyen intézkedéseket tehetnek az olyan tételekkel kapcsolatban, amelyekhez hozzáférnek. A felhasználók "orgs" és "szerepek" kombinációja határozza meg, hogy mit tehetnek és mit nem az Open- AudIT-on belül.<br/> <br/>Az Open- AudIT legtöbb eleme egy Org. Eszközökhöz, helyekhez, hálózatokhoz stb.<br/> <br/>Az orgáknak lehet gyerekük. Gondoljon egy szervezeti chart (fa) struktúra. Ha egy felhasználó hozzáférhet egy bizonyos Org-hoz, akkor az Orgs leszármazottaihoz is. További információkért lásd ezt: <a href="/index.php/faq?name=Users, Roles and Orgs">GYIK</a>.</p>';

$GLOBALS["lang"]['<p>Open-AudIT provides multi-tenancy out of the box!<br> <br>Orgs (organisations) in Open-AudIT are a key item. A user has a primary Org as well as a list of Orgs they can access. A user combines this with a list of assigned "Roles" that define what actions they can take on items assigned to the Orgs they have access to. The combination of a users "orgs" and "roles" define what they can and cannot do within Open-AudIT.<br> <br>Most items in Open-AudIT are assigned to an Org. Devices, Locations, Networks, etc.<br> <br>Orgs can have child Orgs. Think of an organisational chart (tree) structure. If a user has access to a specific Org, they also have access to that Orgs descendants.</p>'] = '<p>Az Open- AudIT multi- bérlést biztosít a dobozból!<br/> <br/>Az Open- AudIT (szervezetek) rendszerei kulcsfontosságúak. A felhasználónak van egy elsődleges Org, valamint egy listát a Orgs, hogy hozzáférhet. A felhasználó ezt kombinálja a kijelölt "Rolles" listával, amely meghatározza, hogy milyen intézkedéseket tehetnek az olyan tételekkel kapcsolatban, amelyekhez hozzáférnek. A felhasználók "orgs" és "szerepek" kombinációja határozza meg, hogy mit tehetnek és mit nem az Open- AudIT-on belül.<br/> <br/>Az Open- AudIT legtöbb eleme egy Org. Eszközökhöz, helyekhez, hálózatokhoz stb.<br/> <br/>Az orgáknak lehet gyerekük. Gondoljon egy szervezeti chart (fa) struktúra. Ha egy felhasználó hozzáférhet egy bizonyos Org-hoz, akkor az Orgs leszármazottaihoz is.</p>';

$GLOBALS["lang"]['<p>Quickly view the status of devices on your network.<br> <br></p>'] = '<p>Gyorsan nézd meg az eszközök állapotát a hálózaton.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Roles in Open-AudIT are a key item. A user has a primary Org as well as a list of Orgs they can access. A user combines this with a list of assigned Roles that define what actions they can take on items assigned to the Orgs they have access to. The combination of a users "orgs" and "roles" define what they can and cannot do within Open-AudIT.<br> <br>
        Get the complete Open-AudIT Enterprise experience. Creating roles allows fine grained control over what your users can do within Open-AudIT.<br> <br>
        The primary method for authorisation (what a user can do) is based on the users Roles. Default roles are defined as admin, org_admin, reporter and user. Each role has a set of permissions (Create, Read, Update, Delete) for each endpoint. The ability to define additional roles and edit existing roles is enabled in Open-AudIT Enterprise.<br> <br>Roles can also be used with LDAP (Active Directory and OpenLDAP) authorisation. Enterprise licensed installations have the ability to customise the LDAP group for each defined role.<br> <br></p>'] = '<p>Színsorok Open- Aud-ban Az IT kulcsfontosságú elem. A felhasználónak van egy elsődleges Org, valamint egy listát a Orgs, hogy hozzáférhet. A felhasználó ezt kombinálja a kijelölt szerepek listájával, amelyek meghatározzák, hogy milyen intézkedéseket tehetnek a hozzájuk rendelt tételekkel kapcsolatban. A felhasználók "orgs" és "szerepek" kombinációja határozza meg, hogy mit tehetnek és mit nem az Open- AudIT-on belül.<br/> <br/>Szerezd meg a teljes Open- AudIT Enterprise élményt. A szerepek létrehozása lehetővé teszi a finom szemcsés kontrollt, hogy mire képesek a felhasználók az Open- AudIT-on belül.<br/> <br/>Az engedélyezés elsődleges módszere (amit a felhasználó tehet) a felhasználói tekercseken alapul. Alapértelmezett szerepek: admin, org _ admin, riporter és felhasználó. Minden szerepnek van egy sor jogosultsága (Create, Read, Frissítés, Törlés) minden végpontra. Az Open- AudIT Enterprise lehetővé teszi a további szerepek meghatározását és a meglévő szerepek szerkesztését.<br/> <br/>A szerepek LDAP (Active Directory és OpenLDAP) engedélyezéssel is használhatók. A vállalati engedéllyel rendelkező létesítmények képesek az LDAP-csoportot minden meghatározott szerephez igazítani.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Rules examine attributes and make cahnges based on the appropriate rule.</p>'] = '<p>A szabályok megvizsgálják az attribútumokat, és a megfelelő szabályon alapulnak.</p>';

$GLOBALS["lang"]['<p>Scanning options allow you to easily apply a set of options to a discovery.<br> <br></p>'] = '<p>Szkennelés opciók lehetővé teszi, hogy könnyen alkalmazza a lehetőségek egy felfedezés.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Simple, intuitive, accurate geographic mapping provided by Google Maps. Open-AudIT leverages Google Maps to provide live, interactive geographic mapping of device locations. Automated conversion of street addresses to geocodes and longitude / latitude.<br> <br>
        </p>'] = '<p>Egyszerű, intuitív, pontos földrajzi térképezés a Google Maps által. Open- AudIT tőkeáttétel A Google Maps az eszközök helyeinek élő, interaktív földrajzi feltérképezését biztosítja. Utcai címek automatikus átalakítása geocode-ra és hosszúságra / szélességi fokra.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Software Packages are used to determine if antivirus, backup, firewall, approved or banned software is installed.<br> <br></p>'] = '<p>Szoftver csomagok segítségével határozzák meg, hogy vírusellenes, tartalék, tűzfal, jóváhagyott vagy betiltott szoftver van telepítve.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Some examples of valid Subnet attributes are: 192.168.1.1 (a single IP address), 192.168.1.0/24 (a subnet), 192.168.1-3.1-20 (a range of IP addresses).<br> <br><em>NOTE</em> - Only a subnet (as per the examples - 192.168.1.0/24) will be able to automatically create a valid network for Open-AudIT. <br> <br>If you use an Active Directory type, make sure you have appropriate credentials to talk to your Domain Controller already in <a href="../credentials">credentials</a>.<br> <br></p>'] = '<p>Néhány példa az érvényes Subnet attribútumokra: 192.168.1.1 (egyetlen IP-cím), 192.168.1.0 / 24 (egy alhálózat), 192.168.11-3.11-20 (IP-címsor).<br/> <br/><em>MEGJEGYZÉS</em> - Csak egy alhálózat (a példák szerint - 192.168.1.0 / 24) lesz képes automatikusan létrehozni egy érvényes hálózat Open- AudIT. <br/> <br/>Ha egy Active Directory típusú, győződjön meg róla, hogy a megfelelő hitelesítő beszélni a Domain Controller már <a href="../credentials">hitelesítő</a>.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Standards are stored in Open-AudIT.<br /><br /><br /><br /></p>'] = '<p>A szabványok az Open- AudIT-ban vannak tárolva.<br/><br/><br/><br/></p>';

$GLOBALS["lang"]['<p>Supported clients are Linux only.<br> <br></p>'] = '<p>A támogatott kliensek csak Linux.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Tasks have a schedule that mirrors the unix cron schedule. The attributes for minute, hour, day_of_month, month, day_of_week all act as per the cron definitions. You can select multiples of these using comma seperated values (no spaces). You can select every value using *.<br> <br>The <code>type</code> of the task can be one of: baselines, collectors, discoveries, queries, reports or summaries.<br> <br>If you wish to schedule a Baseline or Discovery, you will need to create these before creating the tasks. You must use the ID of the type of item in <code>sub_resource_id</code>. For example if you wish to schedule a Discovery, use that particular Discoveries ID in <code>sub_resource_id</code>.<br> <br>The value for <code>uuid</code> is specific to each Open-AudIT server. Your unique value can be found in the configuration.<br> <br>The <code>options</code> attribute is a JSON document containing any extra attributes required to run the task. The extra attributes for reports, queries and summaries are: <code>email_address</code> and <code>format</code>. The extra attribute for Bselines is <code>group_id</code>.<br> <br></p>'] = '<p>A feladatoknak van egy menetrendjük, ami tükrözi az Unix Cron ütemtervét. A perc, óra, hónap, hónap, hét napjára vonatkozó attribútumok a cron definíciók szerint működnek. Ezek többszörösét vessző szegerált értékekkel (szóközök nélkül) lehet kiválasztani. Minden értéket kiválaszthat *.<br/> <br/>A <code>type</code> a feladat lehet: alapvonalak, gyűjtők, felfedezések, lekérdezések, jelentések vagy összefoglalók.<br/> <br/>Ha be szeretné ütemezni a kiindulási vagy Discovery, akkor meg kell létrehozni ezeket, mielőtt a feladatok. Meg kell használni az azonosító típusú tétel <code>sub_resource_id</code>. Például, ha egy Discovery-t szeretne beütemezni, használja az adott Discoveries ID-t <code>sub_resource_id</code>.<br/> <br/>Az érték <code>uuid</code> minden Open- AudIT kiszolgálóra jellemző. Az Ön egyedi értéke megtalálható a konfigurációban.<br/> <br/>A <code>options</code> attribútum egy JSON dokumentum, amely tartalmazza a feladat végrehajtásához szükséges további attribútumokat. A jelentésekre, lekérdezésekre és összefoglalókra vonatkozó további attribútumok a következők: <code>email_address</code> és <code>format</code>. A Bselines további attribútuma <code>group_id</code>.<br/> <br/></p>';

$GLOBALS["lang"]['<p>The <code>type</code> of the location will assign its icon.<br> <br></p>'] = '<p>A <code>type</code> a hely hozzárendeli a ikon.<br/> <br/></p>';

$GLOBALS["lang"]['<p>The Attributes endpoint allows you to add customized values to different attributes in Open-AudIT, at the moment this feature works on the Class, Environment, Status and Type attributes on Devices, the Type attribute for both Locations and Orgs as well as the Menu Category for Queries. If you view an item of one of the prvious types (say view a Lkocation) you will notice the Type attribute must be selected from a drop-down box. This is where those values are stored. Hence, if you would like to add a new Type to be chosen for a Location, add it using the Attributes feature.</p>'] = '<p>Az attribútumok végpontja lehetővé teszi, hogy testreszabott értékeket adjunk az Open- AudIT különböző attribútumaihoz, abban a pillanatban, amikor ez a funkció működik az Osztály-, Környezet-, állapot- és Típusattribútumokon az eszközökön, a Típusattribútumon mind a Helyek, mind az Orgok, valamint a Menu Kategória a lekérdezésekre. Ha megnézi egy elem az egyik pririve típusok (mondja nézd meg az Lkoction) akkor észre fogja venni a Típus attribútum kell választani egy drop-down doboz. Itt tárolják ezeket az értékeket. Ezért, ha szeretne hozzáadni egy új Típus kell választani egy hely, add hozzá a Attribútumok funkció.</p>';

$GLOBALS["lang"]['<p>The Collectors feature enables you to easily manage many "collector" computers that perform network discovery. All Collectors are centrally controlled from the Server. The only required network ports between the Collector and the Server are 80 and/or 443.<br> <br>It makes managing disparate networks quick, easy and simple. Open-AudIT Enterprise licensees get a single collector license included and have the option to buy more as required..<br> <br></p>'] = '<p>A Gyűjtők funkció lehetővé teszi, hogy könnyen kezelhető sok "gyűjtő" számítógépek, amelyek a hálózati felfedezés. Minden gyűjtőt központilag irányítanak a szervertől. Az egyetlen szükséges hálózati portok a gyűjtő és a kiszolgáló között 80 és / vagy 443.<br/> <br/>Ez teszi az eltérő hálózatok kezelését gyors, egyszerű és egyszerű. Open- AudIT Enterprise licencek kap egy gyűjtői licenc tartalmazza, és a lehetőség, hogy többet, ha szükséges..<br/> <br/></p>';

$GLOBALS["lang"]['<p>The SELECT section of your SQL <em>must</em> contain fully qualified columns. IE - <code>SELECT devices.id AS `devices.id`, devices.name AS `devices.name` ...</code>.<br> <br>The WHERE section of your SQL <em>must</em> contain <code>WHERE @filter</code> so Open-AudIT knows to restrict your query to the appropriate Orgs. SQL not containing this condition will result in the query failing to be created, unless you have the Admin role.<br> <br>An example query SQL showing attributes on devices that have an <code>os_group</code> attribute of "Linux" - <br><code>SELECT devices.id AS `devices.id`, devices.icon AS `devices.icon`, devices.type AS `devices.type`, devices.name AS `devices.name`, devices.os_name AS `devices.os_name` FROM devices WHERE @filter AND devices.os_group = "Linux"</code><br> <br></p>'] = '<p>Az SQL SELECT szakasza <em>kell</em> teljesen képzett oszlopokat tartalmaz. IE - <code>SELECT devices.id AS `devices.id`, devices.name AS `devices.name` ...</code>.<br/> <br/>Az SQL HERE szakasza <em>kell</em> tartalmaz <code>WHERE @filter</code> Szóval az Open- AudIT tudja, hogy a lekérdezésedet a megfelelő Orgokra kell korlátozni. SQL nem tartalmazza ezt a feltételt fog eredményezni a lekérdezés nem jön létre, kivéve, ha az Admin szerepet.<br/> <br/>Példa lekérdezés SQL megjelenítő attribútumok eszközök, amelyek <code>os_group</code> attribútum "Linux" - <br/><code>SELECT devices.id AS `devices.id`, devices.icon AS `devices.icon`, devices.type AS `devices.type`, devices.name AS `devices.name`, devices.os_name AS `devices.os_name` FROM devices WHERE @filter AND devices.os_group = "Linux"</code><br/> <br/></p>';

$GLOBALS["lang"]['<p>The SELECT section of your SQL <em>must</em> only contain <code>DISTINCT(devices.id)</code>.<br> <br>The WHERE section of your SQL <em>must</em> contain <code>WHERE @filter</code> so Open-AudIT knows to restrict your query to the appropriate Orgs. SQL not containing this condition will result in the group failing to be created.<br> <br>An example for SQL to select all devices running the Debian OS - <code>SELECT DISTINCT(devices.id) FROM devices WHERE @filter AND devices.os_family = "Debian"</code><br> <br></p>'] = '<p>Az SQL SELECT szakasza <em>kell</em> kizárólag: <code>DISTINCT(devices.id)</code>.<br/> <br/>Az SQL HERE szakasza <em>kell</em> tartalmaz <code>WHERE @filter</code> Szóval az Open- AudIT tudja, hogy a lekérdezésedet a megfelelő Orgokra kell korlátozni. SQL nem tartalmazza ezt a feltételt fog eredményezni a csoport nem jön létre.<br/> <br/>Példa az SQL-re a Debian OS-t futtató összes eszköz kiválasztására - <code>SELECT DISTINCT(devices.id) FROM devices WHERE @filter AND devices.os_family = "Debian"</code><br/> <br/></p>';

$GLOBALS["lang"]['<p>The license endpoint allows you to track the number of licenses found on your devices.<br> <br>To create an entry to track your licenses you <em>must</em> to provide a name, an organization, the number of licenses acquired and the name of the software. On the field <code>match_string</code> you must provide the name of the software that you want to track, you can use the percent sign (%) as a wildcard in the match_string.<br> <br></p>'] = '<p>A licenc végpont lehetővé teszi, hogy nyomon kövesse a licencek számát található eszközök.<br/> <br/>Hogy létrehozzunk egy bejegyzést a licenceid nyomon követéséhez. <em>kell</em> egy név, egy szervezet, a megszerzett engedélyek száma és a szoftver neve. A pályán <code>match_string</code> meg kell adni a nevét a szoftver, hogy szeretné nyomon követni, akkor használja a százalékos jel (%), mint egy wild kártya a match _ string.<br/> <br/></p>';

$GLOBALS["lang"]['<p>The network should be in the format 192.168.1.0/24.<br> <br></p>'] = '<p>A hálózatnak a 192.168.1.0 / 24 formátumban kell lennie.<br/> <br/></p>';

$GLOBALS["lang"]['<p>The primary and optional secondary items should be fully qualified - ie, devices.type or software.name.<br> <br></p>'] = '<p>Az elsődleges és opcionális másodlagos elemeket teljes mértékben minősített - azaz eszközök. típus vagy szoftver. név.<br/> <br/></p>';

$GLOBALS["lang"]['<p>There is no need to do anything if you are running Open-AudIT on a Linux server.<br>
<br>
Windows clients are just fine and require no special actions, however.... to enable this feature the audit script must be run locally on the target Windows system. It cannot be run remotely as we do with WMI calls when running the audit script on one Windows machine, while targeting a second Windows machine. To do this we need to copy the audit script to the target Windows machine and then run it. Unfortunately the service account that Apache runs under is the Local System account. This account has no access to remote (network based) resources. To work around this issue the service must be run under another account. It is easiest to just use the local Administrator account, but you can try any account you like as long as it has the required privileges. The Local System account has as much local access as the local Administrator account.<br>
<br>
See our page on enabling <a href="/index.php/faq?name=Running Open-AudIT Apache Service Under Windows">Running Open-AudIT Apache Service Under Windows</a></p>'] = '<p>Nincs szükség semmire, ha Linux szerveren futtatod az Open- AudIT-ot.<br/><br/>A Windows kliensek csak jól, és nem igényel különleges intézkedéseket, azonban... hogy ez a funkció a könyvvizsgálati szkript kell futtatni helyben a cél Windows rendszer. Nem lehet távolról futtatni, mint amit a WMI hívásokkal teszünk, amikor egy Windows gépen futtatjuk a könyvvizsgálati szkriptet, miközben egy második Windows gépet célzunk meg. Ehhez másolni kell a könyvvizsgálati szkriptet a cél Windows gépre, majd futtatni. Sajnos az Apache által vezetett szervizfiók a Local System fiók. Ez a számla nem férhet hozzá távoli (hálózati) forrásokhoz. A probléma megoldásához a szolgáltatást egy másik számlán kell vezetni. A legkönnyebb csak a helyi Administrator fiókot használni, de bármilyen fiókot kipróbálhatsz, amíg megvan a szükséges jogosultsága. A Local System fiók ugyanolyan helyi hozzáféréssel rendelkezik, mint a helyi Administrator számla.<br/><br/>Lásd az alábbi oldalt: <a href="/index.php/faq?name=Running Open-AudIT Apache Service Under Windows">Open- AudIT apache szolgáltatás futtatása Windows alatt</a></p>';

$GLOBALS["lang"]['<p>These are the devices that live within a rack.<br> <br></p>'] = '<p>Ezek azok az eszközök, amik egy állványon belül élnek.<br/> <br/></p>';

$GLOBALS["lang"]['<p>This endpoint enables you to add your cloud infrastructure details. Open-AudIT will then reach out to your clouds using their native API and return your servers, just like any other device in Open-AudIT.<br> <br><em>NOTE</em> - To use this feature, we <em>must</em> enable the configuration items match_mac (for AWS) and match_hostname (for Azure). This will be done automatically the first time a cloud discovery is executed.<br> <br>Credentials for your cloud (<a href="/index.php/faq?name=Credentials for Microsoft Azure used in Cloud Discovery">Azure</a> or <a href="/index.php/faq?name=Credentials for Amazon AWS used in Cloud Discovery">AWS</a>) are required.<br> <br></p>'] = '<p>Ez a végpont lehetővé teszi, hogy a felhő infrastruktúra részleteket. Az Open- AudIT ezután a saját API-jükkel fogja elérni a felhőket, és visszaadja a szervereket, mint bármely más eszköz az Open- AudIT-ban.<br/> <br/><em>MEGJEGYZÉS</em> - Ezt a funkciót, mi <em>kell</em> lehetővé teszi a konfigurációs elemek match _ mac (AWS) és match _ hostname (Azure). Ez automatikusan megtörténik az első alkalommal, amikor egy felhő felfedezés kerül végrehajtásra.<br/> <br/>Credents a felhő (<a href="/index.php/faq?name=Credentials for Microsoft Azure used in Cloud Discovery">Azúr</a> vagy <a href="/index.php/faq?name=Credentials for Amazon AWS used in Cloud Discovery">AWS</a>).<br/> <br/></p>';

$GLOBALS["lang"]['<p>Vulnerabilities reporting based on the NIST CVE feed.<br> <br></p>'] = '<p>Az NIST CVE adatain alapuló sebezhetőségi jelentések.<br/> <br/></p>';

$GLOBALS["lang"]['<p>We initially setup the default list of scripts with the default options. These default scripts cannot be deleted. You can create additional scripts for use by you as required. Your script will be based on one of the existing scripts and have custom options applied. The scripts can then be downloaded from the list page at menu -> Discover -> Audit Scripts -> List Audit Scripts<br> <br></p>'] = '<p>Kezdetben beállítottuk az alapértelmezett szkriptek listáját az alapértelmezett opciókkal. Ezek az alapértelmezett szkriptek nem törölhetők. Létrehozhat további szkripteket, ha szükséges. A szkriptet az egyik létező szkriptre alapozzuk, és egyéni opciókat alkalmazunk. A szkriptek ezután letölthetők a menün található listaoldalról - > Felderítő - > Könyvvizsgálati szkriptek - > Könyvvizsgálati szkriptek listája<br/> <br/></p>';

$GLOBALS["lang"]['<p>When using Regex for matching, a helpful page can be found on the <a href="https://www.php.net/manual/en/regexp.reference.meta.php" target="_blank"> PHP website</a>. Some differences to Perl Regex can be found <a href="https://www.php.net/manual/en/reference.pcre.pattern.differences.php" target="_blank">here</a>.</p>'] = '<p>Ha a Regex megfeleltetésére, egy hasznos oldal található a <a href="https://www.php.net/manual/en/regexp.reference.meta.php" target="_blank"> PHP weboldal</a>. Néhány különbség a Perl Regex lehet találni <a href="https://www.php.net/manual/en/reference.pcre.pattern.differences.php" target="_blank">Tessék.</a>.</p>';

$GLOBALS["lang"]['<p>Widgets can easily be created to show whatever is specific to your environment on your dashboards.<br> <br></p>'] = '<p>Widgets könnyen létrehozható, hogy megmutassa, bármi is egyedi a környezet a műszerfalon.<br/> <br/></p>';

$GLOBALS["lang"]['<p>With Open-AudIT Professional and Enterprise you can automate and schedule discoveries, report generation, or baseline checks to run when you want, and as often as you need. Schedule your discoveries to run nightly and reports to be generated and emailed to key personnel each morning. Complex or simple schedules, device discovery and report generation is just a click away.<br> <br>Create individual discovery schedules for each subnet or AD controller, add in reports to be created for targeted audiences. Develop simple or complex schedules to support company needs, avoid backups or impact to operations, or simply to spread the load and speed-up audit completion.<br> <br></p>'] = '<p>Open- AudIT Professzionális és Enterprise lehet automatizálni és ütemezni felfedezések, jelentés generáció, vagy alapellenőrzés futtatni, amikor csak akarod, és ahányszor csak szükséges. Tervezze meg a felfedezések futtatni éjszaka, és jelentést kell generálni, és e-mailben a kulcsfontosságú személyzet minden reggel. Komplex vagy egyszerű menetrend, eszköz felfedezés és jelentés generáció csak egy kattintás.<br/> <br/>Hozzon létre egyedi felfedezési ütemezés minden alhálózat vagy AD vezérlő, hozzá a jelentések létrehozandó célzott közönség. Egyszerű vagy összetett ütemtervek kidolgozása a vállalati igények támogatására, a mentések elkerülésére vagy a műveletekre gyakorolt hatás elkerülésére, vagy egyszerűen a terhelés és a gyorsasági ellenőrzés befejezésének terjesztésére.<br/> <br/></p>';

$GLOBALS["lang"]['<p>You can create a script with all the options for any of the existing audit scripts - not just Windows. AIX, ESX, Linux, OSX and Windows are all covered.<br> <br></p>'] = '<p>Létrehozhat egy szkriptet az összes opcióval a meglévő könyvvizsgálati szkriptekhez - nem csak a Windows-hoz. AIX, ESX, Linux, OSX és Windows mind le van fedve.<br/> <br/></p>';

$GLOBALS["lang"]['<p>You can use the percent % sign as a wildcard in the match_string.<br> <br></p>'] = '<p>A%% jelet a match _ string-ben vadkártyaként használhatja.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Your racks help refine exactly where your devices are located.<br> <br></p>'] = '<p>A rekeszei segítenek pontosan finomítani, hogy hol vannak az eszközei.<br/> <br/></p>';

$GLOBALS["lang"]['A Google Maps API Key is required for this function.'] = 'A Google Térkép API Kulcs szükséges ehhez a funkcióhoz.';

$GLOBALS["lang"]['A JSON array of device IDs that will have this benchmark executed.'] = 'Egy JSON sor eszköz azonosítója, ami végrehajtja ezt a referenciaértéket.';

$GLOBALS["lang"]['A JSON array of objects matching the software name taken from the CVE, enriched with the software name retrieved by Open-AudIT.'] = 'A JSON sor objektumok egyeznek a szoftver nevét vett a CVE, gazdagított a szoftver nevét által visszaszerzett Open- AudIT.';

$GLOBALS["lang"]['A JSON array of values to test for this vulnerability.'] = 'A JSON értékek sorozata, hogy teszteljék ezt a sebezhetőséget.';

$GLOBALS["lang"]['A JSON document containing the Orgs assigned to this user. IDs taken from <code>orgs.id</code>. If a user has access to an Org, they have access to that Orgs descendants.'] = 'Egy JSON dokumentum, ami tartalmazza a felhasználóhoz rendelt Orgokat. Személyi igazolvány <code>orgs.id</code>. Ha egy felhasználó hozzáférhet egy Org-hoz, akkor hozzáférhet az Orgs leszármazottaihoz.';

$GLOBALS["lang"]['A JSON document containing the required attributes depending on <code>scripts.type</code>.'] = 'A JSON dokumentum tartalmazza a szükséges attribútumok függően <code>scripts.type</code>.';

$GLOBALS["lang"]['A JSON document containing the required attributes overriding the chosen discovery_scan_options.'] = 'Egy JSON dokumentum, amely a szükséges attribútumokat tartalmazza, felülírja a kiválasztott discovery _ scan _ options-t.';

$GLOBALS["lang"]['A JSON document containing the required attributes overriding the default device match options.'] = 'Egy JSON dokumentum, amely a szükséges attribútumokat tartalmazza, felülírja az alapértelmezett eszköz match opciókat.';

$GLOBALS["lang"]['A JSON document containing the roles assigned to this user. Role names taken from <code>roles.name</code>.'] = 'A JSON dokumentum tartalmazza a felhasználónak kijelölt szerepeket. Szerepnevek <code>roles.name</code>.';

$GLOBALS["lang"]['A JSON object containing an array of attributes to change if the match occurs.'] = 'A JSON objektum egy sor attribútumot tartalmaz, hogy megváltozzon, ha a mérkőzés megtörténik.';

$GLOBALS["lang"]['A JSON object containing an array of attributes to match.'] = 'Egy JSON objektum, amely egy sor attribútumot tartalmaz.';

$GLOBALS["lang"]['A JSON object containing collection specific options.'] = 'Egy JSON objektum, amely gyűjteményspecifikus lehetőségeket tartalmaz.';

$GLOBALS["lang"]['A JSON object populated via a Cloud discovery.'] = 'Egy JSON objektum, amit a Felhő felfedezett.';

$GLOBALS["lang"]['A JSON representation containing the details of the queue item to be executed.'] = 'Egy JSON képviselet, amely tartalmazza a végrehajtásra kerülő sor részleteit.';

$GLOBALS["lang"]['A JSON representation of the fields for this integration.'] = 'A JSON képviselete az integráció területeiről.';

$GLOBALS["lang"]['A JSON representation of the individual tests and their results on all devices this baseline has been run against.'] = 'Az egyes tesztek és azok eredményeinek JSON-ábrázolása minden eszközön ezzel az alapértékkel szemben.';

$GLOBALS["lang"]['A JSON representation of the tests that make up this policy.'] = 'A JSON ábrázolja a teszteket, amik ezt a politikát alkotják.';

$GLOBALS["lang"]['A URL to a file to download.'] = 'URL letölthető fájlhoz.';

$GLOBALS["lang"]['A calculated field that displays the number of times this piece of software was found on the computers in the selected Org (and its descendants if configured).'] = 'Számított mező, amely mutatja a szám, amikor ezt a szoftverdarabot találtak a számítógépeken a kiválasztott Org (és leszármazottai, ha konfigurálták).';

$GLOBALS["lang"]['A collector is either in Collector or Stand-Alone mode.'] = 'A gyűjtők vagy gyűjtők, vagy készenléti üzemmódban.';

$GLOBALS["lang"]['A comma separated list of applicable CVEs.'] = 'Az alkalmazandó közös biztonsági szabályok vesszővel elkülönített listája.';

$GLOBALS["lang"]['A comma separated list of values, one of which can be selected.'] = 'Az értékek vesszővel elválasztott listája, amelyek közül az egyik kiválasztható.';

$GLOBALS["lang"]['A command to run. When the agent is Windows based, this command is run from within the powershell agent.'] = 'Futási parancs. Amikor az ügynök Windows alapú, ez a parancs a powershell agent-ből fut.';

$GLOBALS["lang"]['A list of custom TCP ports to scan (22 is SSH, 135 is WMI, 62078 is iPhone sync).'] = 'Az egyedi TCP portok listája (22 SSH, 135 WMI, 62078 az iPhone sync).';

$GLOBALS["lang"]['A list of custom UDP ports to scan (161 is SNMP).'] = 'Az egyedi UDP portok listája (161 SNMP).';

$GLOBALS["lang"]['A lower number means it will be applied before other rules.'] = 'Az alacsonyabb szám azt jelenti, hogy azt más szabályok előtt kell alkalmazni.';

$GLOBALS["lang"]['A lower number means it will be applied before other rules. The default weight is 100.'] = 'Az alacsonyabb szám azt jelenti, hogy azt más szabályok előtt kell alkalmazni. Az alapértelmezett súly 100.';

$GLOBALS["lang"]['A password (stored as a hash) that enables logon when using application authentication.'] = 'Egy jelszó (hash-ként tárolva), amely lehetővé teszi a logon használatát az alkalmazás hitelesítése során.';

$GLOBALS["lang"]['A routing domain or address space where the IP addresses and MAC addresses are unique.'] = 'Olyan útválasztási tartomány vagy cím, ahol az IP-címek és a MAC-címek egyediek.';

$GLOBALS["lang"]['A security zone is a administrative domain or policy domain within the Network Domain.'] = 'A biztonsági zóna a hálózati tartományon belül közigazgatási vagy szakpolitikai terület.';

$GLOBALS["lang"]['A short description of the log entry.'] = 'A napló bejegyzésének rövid leírása.';

$GLOBALS["lang"]['A string that matches the <code>software.name</code> attribute. You can use the standard SQL wildcard of percent (%) to match one or more characters.'] = 'A string, amely egyezik a <code>software.name</code> attribútum. Használhatja a szabványos SQL wildcard százalékos (%), hogy megfeleljen egy vagy több karakter.';

$GLOBALS["lang"]['A vulnerability affecting availability may allow attackers to disrupt services, crash systems, or cause denial-of-service (DoS) (None, Low, High).'] = 'A rendelkezésre állást befolyásoló sebezhetőség lehetővé teheti a támadók számára, hogy megzavarják a szolgáltatásokat, a baleseti rendszereket vagy letagadják a szolgáltatást (DoS) (nincs, alacsony, magas).';

$GLOBALS["lang"]['A vulnerability affecting confidentiality may allow attackers to read sensitive data, such as personal information, credentials, or proprietary business data (None, Low, High).'] = 'A titoktartást befolyásoló sebezhetőség lehetővé teheti a támadók számára, hogy érzékeny adatokat, például személyes adatokat, igazolásokat vagy védett üzleti adatokat olvassanak (None, Low, High).';

$GLOBALS["lang"]['A vulnerability affecting integrity may allow attackers to modify data, inject malicious code, or alter system configurations (None, Low, High).'] = 'A sérthetetlenséget befolyásoló sebezhetőség lehetővé teheti a támadók számára, hogy módosítsák az adatokat, rosszindulatú kódot adjanak be, vagy módosítsák a rendszerkonfigurációkat (nincs, alacsony, magas).';

$GLOBALS["lang"]['AD Group'] = 'AD csoport';

$GLOBALS["lang"]['ADSL, HFC, ISDN, etc.'] = 'ADSL, HFC, ISDN stb.';

$GLOBALS["lang"]['AIX'] = 'AIX';

$GLOBALS["lang"]['ALL IPs'] = 'MINDEN IP';

$GLOBALS["lang"]['API / Web Access'] = 'API / Web Access';

$GLOBALS["lang"]['API Documentation'] = 'API dokumentáció';

$GLOBALS["lang"]['API Key required.'] = 'API Key szükséges.';

$GLOBALS["lang"]['API Result'] = 'API eredmény';

$GLOBALS["lang"]['About'] = 'Körülbelül';

$GLOBALS["lang"]['Accept'] = 'Elfogadás';

$GLOBALS["lang"]['access_point'] = 'Hozzáférési pont';

$GLOBALS["lang"]['Access Point'] = 'Hozzáférési pont';

$GLOBALS["lang"]['access_token'] = 'Hozzáférés Token';

$GLOBALS["lang"]['Access Token'] = 'Hozzáférés Token';

$GLOBALS["lang"]['ack_by'] = 'Ack by';

$GLOBALS["lang"]['Ack By'] = 'Ack by';

$GLOBALS["lang"]['ack_date'] = 'Akk dátum';

$GLOBALS["lang"]['Ack Date'] = 'Akk dátum';

$GLOBALS["lang"]['ack_time'] = 'Akk idő';

$GLOBALS["lang"]['Ack Time'] = 'Akk idő';

$GLOBALS["lang"]['action'] = 'Intézkedés';

$GLOBALS["lang"]['Action'] = 'Intézkedés';

$GLOBALS["lang"]['action_audit'] = 'Akcióellenőrzés';

$GLOBALS["lang"]['Action Audit'] = 'Akcióellenőrzés';

$GLOBALS["lang"]['action_command'] = 'Akcióparancsnokság';

$GLOBALS["lang"]['Action Command'] = 'Akcióparancsnokság';

$GLOBALS["lang"]['action_date'] = 'Művelet dátuma';

$GLOBALS["lang"]['Action Date'] = 'Művelet dátuma';

$GLOBALS["lang"]['action_devices_assigned_to_location'] = 'Akció eszközök hozzárendelve a helyszínre';

$GLOBALS["lang"]['Action Devices Assigned To Location'] = 'Akció eszközök hozzárendelve a helyszínre';

$GLOBALS["lang"]['action_devices_assigned_to_org'] = 'Az Orghoz rendelt akcióeszközök';

$GLOBALS["lang"]['Action Devices Assigned To Org'] = 'Az Orghoz rendelt akcióeszközök';

$GLOBALS["lang"]['action_download'] = 'Akció letöltése';

$GLOBALS["lang"]['Action Download'] = 'Akció letöltése';

$GLOBALS["lang"]['action_uninstall'] = 'Akció eltávolítása';

$GLOBALS["lang"]['Action Uninstall'] = 'Akció eltávolítása';

$GLOBALS["lang"]['actioned'] = 'Aktiválva';

$GLOBALS["lang"]['Actioned'] = 'Aktiválva';

$GLOBALS["lang"]['actioned_by'] = 'Fordította:';

$GLOBALS["lang"]['Actioned By'] = 'Fordította:';

$GLOBALS["lang"]['actioned_date'] = 'Aktivált dátum';

$GLOBALS["lang"]['Actioned Date'] = 'Aktivált dátum';

$GLOBALS["lang"]['actions'] = 'Intézkedések';

$GLOBALS["lang"]['Actions'] = 'Intézkedések';

$GLOBALS["lang"]['Activate'] = 'Aktiválás';

$GLOBALS["lang"]['Activate Free License'] = 'Ingyenes licenc aktiválása';

$GLOBALS["lang"]['Activate Key'] = 'Kulcs aktiválása';

$GLOBALS["lang"]['Activate a free Enterprise license'] = 'Ingyenes Enterprise engedély aktiválása';

$GLOBALS["lang"]['Active'] = 'Aktív';

$GLOBALS["lang"]['Active / Active'] = 'Aktív / aktív';

$GLOBALS["lang"]['Active / Passive'] = 'Aktív / passzív';

$GLOBALS["lang"]['Active Directory'] = 'Aktív könyvtár';

$GLOBALS["lang"]['Active Directory Domain'] = 'Active Directory Domain';

$GLOBALS["lang"]['active_directory_ou'] = 'Active Directory Ou';

$GLOBALS["lang"]['Active Directory Ou'] = 'Active Directory Ou';

$GLOBALS["lang"]['Active Directory Server'] = 'Aktív könyvtár kiszolgáló';

$GLOBALS["lang"]['ad_domain'] = 'Ad Domain';

$GLOBALS["lang"]['Ad Domain'] = 'Ad Domain';

$GLOBALS["lang"]['ad_group'] = 'Ad Group';

$GLOBALS["lang"]['Ad Group'] = 'Ad Group';

$GLOBALS["lang"]['ad_server'] = 'Ad Server';

$GLOBALS["lang"]['Ad Server'] = 'Ad Server';

$GLOBALS["lang"]['Add'] = 'Hozzáadás';

$GLOBALS["lang"]['Add Credentials'] = 'Kártyák hozzáadása';

$GLOBALS["lang"]['Add Device'] = 'Eszköz hozzáadása';

$GLOBALS["lang"]['Add Device to Application'] = 'Eszköz hozzáadása az alkalmazáshoz';

$GLOBALS["lang"]['Add Device to Cluster'] = 'Eszköz hozzáadása a klaszter';

$GLOBALS["lang"]['Add Exception'] = 'Kivétel hozzáadása';

$GLOBALS["lang"]['Add Field'] = 'Mező hozzáadása';

$GLOBALS["lang"]['Add If'] = 'Ha';

$GLOBALS["lang"]['Add Policies from Device'] = 'Politikák hozzáadása eszközből';

$GLOBALS["lang"]['Add Policy'] = 'Policy hozzáadása';

$GLOBALS["lang"]['Add Then'] = 'Ezután';

$GLOBALS["lang"]['Add image'] = 'Képek hozzáadása';

$GLOBALS["lang"]['additional_items'] = 'Kiegészítő tételek';

$GLOBALS["lang"]['Additional Items'] = 'Kiegészítő tételek';

$GLOBALS["lang"]['address'] = 'Cím';

$GLOBALS["lang"]['Address'] = 'Cím';

$GLOBALS["lang"]['Admin'] = 'Admin';

$GLOBALS["lang"]['admin_status'] = 'Admin állapot';

$GLOBALS["lang"]['Admin Status'] = 'Admin állapot';

$GLOBALS["lang"]['advanced'] = 'Speciális';

$GLOBALS["lang"]['Advanced'] = 'Speciális';

$GLOBALS["lang"]['Afghanistan'] = 'Afganisztán';

$GLOBALS["lang"]['agents'] = 'Ügynökök';

$GLOBALS["lang"]['Agents'] = 'Ügynökök';

$GLOBALS["lang"]['Aggressive'] = 'Agresszív';

$GLOBALS["lang"]['Aland Islands'] = 'Aland-szigetek';

$GLOBALS["lang"]['Albania'] = 'Albánia';

$GLOBALS["lang"]['alert_style'] = 'Figyelmeztető stílus';

$GLOBALS["lang"]['Alert Style'] = 'Figyelmeztető stílus';

$GLOBALS["lang"]['Algeria'] = 'Algéria';

$GLOBALS["lang"]['algorithm'] = 'Algoritmus';

$GLOBALS["lang"]['Algorithm'] = 'Algoritmus';

$GLOBALS["lang"]['alias'] = 'Alias';

$GLOBALS["lang"]['Alias'] = 'Alias';

$GLOBALS["lang"]['All'] = 'Összes';

$GLOBALS["lang"]['All IPs'] = 'Minden IP';

$GLOBALS["lang"]['All Policies'] = 'Minden politika';

$GLOBALS["lang"]['All Queued Items'] = 'Minden sorban álló tétel';

$GLOBALS["lang"]['Amazon AWS Fields'] = 'Amazon AWS Területek';

$GLOBALS["lang"]['American Samoa'] = 'Amerikai Szamoa';

$GLOBALS["lang"]['An array of <code>benchmarks.id</code>.'] = 'Egy tömb <code>benchmarks.id</code>.';

$GLOBALS["lang"]['An array of <code>devices.id</code>.'] = 'Egy tömb <code>devices.id</code>.';

$GLOBALS["lang"]['An array of object representing external links to more information.'] = 'Egy sor objektum ábrázolja külső linkek több információ.';

$GLOBALS["lang"]['An encrypted JSON document containing the required attributes depending on the <code>credentials.type</code>.'] = 'Egy titkosított JSON dokumentum, amely a szükséges attribútumokat tartalmazza a <code>credentials.type</code>.';

$GLOBALS["lang"]['An indication of the level of service required by this site.'] = 'Az oldal által igényelt szolgáltatás szintjének feltüntetése.';

$GLOBALS["lang"]['An internal field that indicates if the discovery has completed.'] = 'Egy belső mező, ami jelzi, hogy a felfedezés befejeződött-e.';

$GLOBALS["lang"]['An optional GeoCode'] = 'Választható GeoCode';

$GLOBALS["lang"]['An optional password to use sudo.'] = 'Egy opcionális jelszó a sudo használatához.';

$GLOBALS["lang"]['Andorra'] = 'Andorra';

$GLOBALS["lang"]['Angola'] = 'Angola';

$GLOBALS["lang"]['Anguilla'] = 'Anguilla';

$GLOBALS["lang"]['Antarctica'] = 'Antarktisz';

$GLOBALS["lang"]['AntiVirus'] = 'Antivírus';

$GLOBALS["lang"]['Antigua and Barbuda'] = 'Antigua és Barbuda';

$GLOBALS["lang"]['Antivirus'] = 'Antivírus';

$GLOBALS["lang"]['Any TCP ports (comma seperated, no spaces) you wish to exclude from this discovery. Only available when using Nmap 7+.'] = 'Bármely TCP port (vessző elkülönítve, szóközök nélkül), amit ki szeretne zárni ebből a felfedezésből. Csak Nmap 7 + használatával érhető el.';

$GLOBALS["lang"]['Any UDP ports (comma seperated, no spaces) you wish to exclude from this discovery. Only available when using Nmap 7+.'] = 'Minden UDP port (vessző elkülönítve, szóközök nélkül), amit ki szeretne zárni ebből a felfedezésből. Csak Nmap 7 + használatával érhető el.';

$GLOBALS["lang"]['Any additional documentation you need.'] = 'Minden további szükséges dokumentáció.';

$GLOBALS["lang"]['Any additional notes you care to make.'] = 'Minden további megjegyzés, amit szeretne.';

$GLOBALS["lang"]['Any devices will be assigned to this Org when they run their audit script (if set). Links to <code>orgs.id</code>.'] = 'Minden eszközt ehhez az Org-hoz rendelünk, amikor lefuttatják a könyvvizsgálati forgatókönyvet (ha be van állítva). Kapcsolatok <code>orgs.id</code>.';

$GLOBALS["lang"]['Any discovered devices will be assigned to this Location if set. Links to <code>locations.id</code>.'] = 'Minden felfedezett eszközt erre a helyre rendelünk, ha be van állítva. Kapcsolatok <code>locations.id</code>.';

$GLOBALS["lang"]['Any discovered devices will be assigned to this Location when they run their audit script (if set). Links to <code>locations.id</code>.'] = 'Minden felfedezett eszköz erre a helyre kerül, amikor lefuttatja a könyvvizsgálati forgatókönyvet (ha be van állítva). Kapcsolatok <code>locations.id</code>.';

$GLOBALS["lang"]['Any discovered devices will be assigned to this Org if set. If not set, they are assigned to the <code>org_id</code> of this discovery. Links to <code>orgs.id</code>.'] = 'Minden felfedezett eszközt ehhez az Org-hoz rendelünk, ha be van állítva. Ha nincs beállítva, akkor a <code>org_id</code> Ez a felfedezés. Kapcsolatok <code>orgs.id</code>.';

$GLOBALS["lang"]['Any required filter. NOTE: When type = traffic, this represents the font-awesome icon.'] = 'Minden szükséges szűrő. MEGJEGYZÉS: Amikor a típus = forgalom, ez képviseli a fond- félelmetes ikon.';

$GLOBALS["lang"]['Any specific TCP ports you wish tested (comma seperated, no spaces).'] = 'Minden konkrét TCP portok kívánt tesztelt (vessző elkülönített, szóközök nélkül).';

$GLOBALS["lang"]['Any specific UDP ports you wish tested (comma seperated, no spaces).'] = 'Minden konkrét UDP portok kívánt tesztelt (vessző elkülönített, szóközök nélkül).';

$GLOBALS["lang"]['Application'] = 'Alkalmazás';

$GLOBALS["lang"]['application_id'] = 'Alkalmazási azonosító';

$GLOBALS["lang"]['Application ID'] = 'Alkalmazási azonosító';

$GLOBALS["lang"]['Application Licenses'] = 'Alkalmazási engedélyek';

$GLOBALS["lang"]['Application, Operating System or Hardware.'] = 'Alkalmazás, operációs rendszer vagy hardver.';

$GLOBALS["lang"]['applications'] = 'Alkalmazások';

$GLOBALS["lang"]['Applications'] = 'Alkalmazások';

$GLOBALS["lang"]['applied'] = 'Alkalmazott';

$GLOBALS["lang"]['Applied'] = 'Alkalmazott';

$GLOBALS["lang"]['Approved'] = 'Jóváhagyva';

$GLOBALS["lang"]['April'] = 'Április';

$GLOBALS["lang"]['architecture'] = 'Építészet';

$GLOBALS["lang"]['Architecture'] = 'Építészet';

$GLOBALS["lang"]['Are you sure you want to delete this input item?'] = 'Biztosan törölni szeretné ezt a bemeneti elemet?';

$GLOBALS["lang"]['Are you sure you want to delete this output item?'] = 'Biztosan törölni szeretné ezt a kimeneti elemet?';

$GLOBALS["lang"]['Are you sure? This will remove all queue entries and prevent the remaining IPs from being discovered.'] = 'Biztos? Ez eltávolítja az összes sorban álló bejegyzéseket, és megakadályozza a fennmaradó IP-ek felfedezését.';

$GLOBALS["lang"]['Are you sure? This will reset the queue processing count and could cause load on the server.'] = 'Biztos? Ez visszaállítja a sorszámot, és terhelést okozhat a szerveren.';

$GLOBALS["lang"]['area'] = 'Terület';

$GLOBALS["lang"]['Area'] = 'Terület';

$GLOBALS["lang"]['Argentina'] = 'Argentína';

$GLOBALS["lang"]['Armenia'] = 'Örményország';

$GLOBALS["lang"]['arp'] = 'Arp';

$GLOBALS["lang"]['Arp'] = 'Arp';

$GLOBALS["lang"]['Aruba'] = 'Aruba';

$GLOBALS["lang"]['As per the attributes for device environments. Production, Training, et al.'] = 'Az eszköz környezetére vonatkozó attribútumok szerint. Production, Training, et al.';

$GLOBALS["lang"]['As you have Collectors registered, please choose where to execute this discovery.'] = 'Mivel a Gyűjtők regisztráltak, kérjük, válassza ki, hol hajtsa végre ezt a felfedezést.';

$GLOBALS["lang"]['Ask me later'] = 'Kérdezd meg később.';

$GLOBALS["lang"]['Ask the Community for help or contribute answers for others.'] = 'Kérjen segítséget a Közösségtől, vagy adjon válaszokat másoknak.';

$GLOBALS["lang"]['aspect_ratio'] = 'Szemrevételezési arány';

$GLOBALS["lang"]['Aspect Ratio'] = 'Szemrevételezési arány';

$GLOBALS["lang"]['Asset ID'] = 'Eszközök azonosítója';

$GLOBALS["lang"]['asset_ident'] = 'Eszközazonosító';

$GLOBALS["lang"]['Asset Ident'] = 'Eszközazonosító';

$GLOBALS["lang"]['asset_number'] = 'Eszközök száma';

$GLOBALS["lang"]['Asset Number'] = 'Eszközök száma';

$GLOBALS["lang"]['asset_tag'] = 'Eszközjegyzék';

$GLOBALS["lang"]['Asset Tag'] = 'Eszközjegyzék';

$GLOBALS["lang"]['Assign Device to Application'] = 'Alkalmazási eszköz kijelölése';

$GLOBALS["lang"]['Assign Device to Cluster'] = 'Az eszköz kijelölése a klaszter számára';

$GLOBALS["lang"]['Assign Device to Location'] = 'Az eszköz kijelölése a helyszínre';

$GLOBALS["lang"]['Assign Device to Organisation'] = 'A szervezet kijelölése';

$GLOBALS["lang"]['Assign Devices to Location'] = 'Eszközök hozzárendelése a helyhez';

$GLOBALS["lang"]['Assign Devices to Organisation'] = 'Szervezeti egységek kijelölése';

$GLOBALS["lang"]['Assign an Operator'] = 'Üzemeltető kijelölése';

$GLOBALS["lang"]['Assigned To'] = 'Címzett';

$GLOBALS["lang"]['At present we can use netstat_ports, software and users.'] = 'Jelenleg a netstat _ ports, a szoftver és a felhasználók.';

$GLOBALS["lang"]['attached_device_id'] = 'Csatolt eszköz azonosítója';

$GLOBALS["lang"]['Attached Device ID'] = 'Csatolt eszköz azonosítója';

$GLOBALS["lang"]['attached_to'] = 'Csatolva';

$GLOBALS["lang"]['Attached To'] = 'Csatolva';

$GLOBALS["lang"]['attachment'] = 'Csatolás';

$GLOBALS["lang"]['Attachment'] = 'Csatolás';

$GLOBALS["lang"]['attachments'] = 'Mellékletek';

$GLOBALS["lang"]['Attachments'] = 'Mellékletek';

$GLOBALS["lang"]['attack_complexity'] = 'Támadás komplexitás';

$GLOBALS["lang"]['Attack Complexity'] = 'Támadás komplexitás';

$GLOBALS["lang"]['attack_requirements'] = 'Támadási követelmények';

$GLOBALS["lang"]['Attack Requirements'] = 'Támadási követelmények';

$GLOBALS["lang"]['attack_vector'] = 'Támadás Vector';

$GLOBALS["lang"]['Attack Vector'] = 'Támadás Vector';

$GLOBALS["lang"]['Attribute'] = 'Attribútum';

$GLOBALS["lang"]['attributes'] = 'Attribútumok';

$GLOBALS["lang"]['Attributes'] = 'Attribútumok';

$GLOBALS["lang"]['Audit'] = 'Ellenőrzés';

$GLOBALS["lang"]['Audit AIX'] = 'Audit AIX';

$GLOBALS["lang"]['Audit ESXi'] = 'Ellenőrzés ESXi';

$GLOBALS["lang"]['Audit Linux'] = 'Linux ellenőrzés';

$GLOBALS["lang"]['audit_log'] = 'Ellenőrzési napló';

$GLOBALS["lang"]['Audit Log'] = 'Ellenőrzési napló';

$GLOBALS["lang"]['Audit My PC'] = 'Ellenőrzés PC';

$GLOBALS["lang"]['Audit OSX'] = 'Ellenőrzés OSX';

$GLOBALS["lang"]['Audit Result Input'] = 'Ellenőrzési eredmény';

$GLOBALS["lang"]['Audit Status'] = 'Ellenőrzési státus';

$GLOBALS["lang"]['Audit Windows'] = 'Windows ellenőrzés';

$GLOBALS["lang"]['Audit the Device'] = 'Az eszköz ellenőrzése';

$GLOBALS["lang"]['Audits'] = 'Ellenőrzések';

$GLOBALS["lang"]['August'] = 'augusztus';

$GLOBALS["lang"]['Australia'] = 'Ausztrália';

$GLOBALS["lang"]['Austria'] = 'Ausztria';

$GLOBALS["lang"]['Auth'] = 'Auth';

$GLOBALS["lang"]['auth'] = 'Auth';

$GLOBALS["lang"]['Authentication Passphrase'] = 'Hitelesítés Passphrase';

$GLOBALS["lang"]['authority_key_ident'] = 'A Hatóság fő azonosítója';

$GLOBALS["lang"]['Authority Key Ident'] = 'A Hatóság fő azonosítója';

$GLOBALS["lang"]['Auto'] = 'Automatikus';

$GLOBALS["lang"]['auto_renew'] = 'Automatikus újraindítás';

$GLOBALS["lang"]['Auto Renew'] = 'Automatikus újraindítás';

$GLOBALS["lang"]['Auto populated by the Open-AudIT Server.'] = 'Az Open- AudIT szerver automatikusan benépesített.';

$GLOBALS["lang"]['AutoRenew'] = 'AutoRenew';

$GLOBALS["lang"]['automatable'] = 'Automatizálható';

$GLOBALS["lang"]['Automatable'] = 'Automatizálható';

$GLOBALS["lang"]['Automatically populated based on the Collectors OS.'] = 'Automatikusan lakott a Collectors OS alapján.';

$GLOBALS["lang"]['availability'] = 'Elérhetőség';

$GLOBALS["lang"]['Availability'] = 'Elérhetőség';

$GLOBALS["lang"]['Azerbaijan'] = 'Azerbajdzsán';

$GLOBALS["lang"]['BTU Max'] = 'BTU Max';

$GLOBALS["lang"]['BTU Total'] = 'BTU összesen';

$GLOBALS["lang"]['Backup'] = 'Erősítés';

$GLOBALS["lang"]['Bahamas the'] = 'Bahama-szigetek';

$GLOBALS["lang"]['Bahrain'] = 'Bahrein';

$GLOBALS["lang"]['Bangladesh'] = 'Banglades';

$GLOBALS["lang"]['bank'] = 'Bank';

$GLOBALS["lang"]['Bank'] = 'Bank';

$GLOBALS["lang"]['Banned'] = 'Száműzött';

$GLOBALS["lang"]['bar_code'] = 'Vonalkód';

$GLOBALS["lang"]['Bar Code'] = 'Vonalkód';

$GLOBALS["lang"]['Barbados'] = 'Barbados';

$GLOBALS["lang"]['Base DN'] = 'DN alap';

$GLOBALS["lang"]['base_score'] = 'Alappontszám';

$GLOBALS["lang"]['Base Score'] = 'Alappontszám';

$GLOBALS["lang"]['base_severity'] = 'Alapsúlyosság';

$GLOBALS["lang"]['Base Severity'] = 'Alapsúlyosság';

$GLOBALS["lang"]['based_on'] = 'Alapján';

$GLOBALS["lang"]['Based On'] = 'Alapján';

$GLOBALS["lang"]['baseline'] = 'Kiindulási';

$GLOBALS["lang"]['Baseline'] = 'Kiindulási';

$GLOBALS["lang"]['baseline_id'] = 'Kiindulási azonosító';

$GLOBALS["lang"]['Baseline ID'] = 'Kiindulási azonosító';

$GLOBALS["lang"]['baselines'] = 'Alapértékek';

$GLOBALS["lang"]['Baselines'] = 'Alapértékek';

$GLOBALS["lang"]['baselines_policies'] = 'Alapelvek';

$GLOBALS["lang"]['Baselines Policies'] = 'Alapelvek';

$GLOBALS["lang"]['Baselines Policy'] = 'Alapelvek';

$GLOBALS["lang"]['Baselines Policy Details'] = 'Alapelvek szakpolitikai részletek';

$GLOBALS["lang"]['baselines_results'] = 'Alapértékek';

$GLOBALS["lang"]['Baselines Results'] = 'Alapértékek';

$GLOBALS["lang"]['Basic'] = 'Alap';

$GLOBALS["lang"]['Belarus'] = 'Belarusz';

$GLOBALS["lang"]['Belgium'] = 'Belgium';

$GLOBALS["lang"]['Belize'] = 'Belize';

$GLOBALS["lang"]['Benchmark'] = 'Referenciajel';

$GLOBALS["lang"]['benchmark_id'] = 'Referenciaazonosító';

$GLOBALS["lang"]['Benchmark ID'] = 'Referenciaazonosító';

$GLOBALS["lang"]['benchmarks'] = 'Referenciaértékek';

$GLOBALS["lang"]['Benchmarks'] = 'Referenciaértékek';

$GLOBALS["lang"]['benchmarks_exceptions'] = 'A referenciaértékek kivételei';

$GLOBALS["lang"]['Benchmarks Exceptions'] = 'A referenciaértékek kivételei';

$GLOBALS["lang"]['benchmarks_log'] = 'Referenciajelek naplója';

$GLOBALS["lang"]['Benchmarks Log'] = 'Referenciajelek naplója';

$GLOBALS["lang"]['benchmarks_policies'] = 'Referenciajelentési politikák';

$GLOBALS["lang"]['Benchmarks Policies'] = 'Referenciajelentési politikák';

$GLOBALS["lang"]['benchmarks_result'] = 'Referenciajelek eredménye';

$GLOBALS["lang"]['Benchmarks Result'] = 'Referenciajelek eredménye';

$GLOBALS["lang"]['Benin'] = 'Benin';

$GLOBALS["lang"]['Bermuda'] = 'Bermuda';

$GLOBALS["lang"]['best_practises'] = 'Legjobb gyakorlatok';

$GLOBALS["lang"]['Best Practises'] = 'Legjobb gyakorlatok';

$GLOBALS["lang"]['Bhutan'] = 'Bhután';

$GLOBALS["lang"]['bios'] = 'Biosz';

$GLOBALS["lang"]['Bios'] = 'Biosz';

$GLOBALS["lang"]['body'] = 'Test';

$GLOBALS["lang"]['Body'] = 'Test';

$GLOBALS["lang"]['Bolivia'] = 'Bolívia';

$GLOBALS["lang"]['Boolean'] = 'Boolean';

$GLOBALS["lang"]['Boolean 1/0'] = 'Boolean 1 / 0';

$GLOBALS["lang"]['Boolean y/n'] = 'Logikai y / n';

$GLOBALS["lang"]['boot_device'] = 'Boot Device';

$GLOBALS["lang"]['Boot Device'] = 'Boot Device';

$GLOBALS["lang"]['bootable'] = 'Indítható';

$GLOBALS["lang"]['Bootable'] = 'Indítható';

$GLOBALS["lang"]['Bosnia and Herzegovina'] = 'Bosznia és Hercegovina';

$GLOBALS["lang"]['Botswana'] = 'Botswana';

$GLOBALS["lang"]['Bouvet Island (Bouvetoya)'] = 'Bouvet-sziget (Bouvetoya)';

$GLOBALS["lang"]['Brazil'] = 'Brazília';

$GLOBALS["lang"]['Brazilian Portuguese'] = 'Brazil portugál';

$GLOBALS["lang"]['British Indian Ocean Territory (Chagos Archipelago)'] = 'Brit Indiai-óceáni terület (Chagos Archipelago)';

$GLOBALS["lang"]['British Virgin Islands'] = 'Brit Virgin-szigetek';

$GLOBALS["lang"]['Brunei Darussalam'] = 'Brunei Darussalam';

$GLOBALS["lang"]['btu_max'] = 'Btu Max';

$GLOBALS["lang"]['Btu Max'] = 'Btu Max';

$GLOBALS["lang"]['btu_total'] = 'Btu összesen';

$GLOBALS["lang"]['Btu Total'] = 'Btu összesen';

$GLOBALS["lang"]['build_number'] = 'Építési szám';

$GLOBALS["lang"]['Build Number'] = 'Építési szám';

$GLOBALS["lang"]['build_number_full'] = 'Teljes szám építése';

$GLOBALS["lang"]['Build Number Full'] = 'Teljes szám építése';

$GLOBALS["lang"]['Building'] = 'Épület';

$GLOBALS["lang"]['Bulgaria'] = 'Bulgária';

$GLOBALS["lang"]['Bulk Edit'] = 'Tömegszerkesztés';

$GLOBALS["lang"]['Bulk Editing Device Attributes'] = 'Tömegszerkesztő eszközök attribútumai';

$GLOBALS["lang"]['Burkina Faso'] = 'Burkina Faso';

$GLOBALS["lang"]['Burundi'] = 'Burundi';

$GLOBALS["lang"]['business_requirements'] = 'Üzleti követelmények';

$GLOBALS["lang"]['Business Requirements'] = 'Üzleti követelmények';

$GLOBALS["lang"]['Buy'] = 'Vásárlás';

$GLOBALS["lang"]['Buy More'] = 'Buy More';

$GLOBALS["lang"]['Buy More Licenses'] = 'További licencek vásárlása';

$GLOBALS["lang"]['By'] = 'By';

$GLOBALS["lang"]['CIDR'] = 'CIDR';

$GLOBALS["lang"]['CIDR Mask'] = 'CIDR Maszk';

$GLOBALS["lang"]['cli_config'] = 'CLI Config';

$GLOBALS["lang"]['CLI Config'] = 'CLI Config';

$GLOBALS["lang"]['CPU'] = 'CPU';

$GLOBALS["lang"]['CPUs'] = 'CPU';

$GLOBALS["lang"]['CSV'] = 'CSV';

$GLOBALS["lang"]['CVE'] = 'CVE';

$GLOBALS["lang"]['Calculated from discovery.'] = 'A felfedezésből számolva.';

$GLOBALS["lang"]['Calculated total number of valid IP addresses for this network.'] = 'A hálózat érvényes IP-címeinek teljes számítása.';

$GLOBALS["lang"]['Calculated upon completion, the time taken to execute this item.'] = 'Kiszámolva a befejezés, az idő, hogy végrehajtsa ezt a tételt.';

$GLOBALS["lang"]['Calculated when integration is run and contains a JSON representation of the devices in this integration. Each links to <code>devices.id</code>.'] = 'Számított, amikor az integráció fut, és tartalmaz egy JSON ábrázolása az eszközök ebben az integrációban. Minden linkre <code>devices.id</code>.';

$GLOBALS["lang"]['Calculated when integration is run and contains a JSON representation of the locations in this integration. Each links to <code>locations.id</code>.'] = 'Számított, amikor az integráció fut, és tartalmaz egy JSON ábrázolása a helyszínek ebben az integrációban. Minden linkre <code>locations.id</code>.';

$GLOBALS["lang"]['Calculated when integration is run and contains the number of devices selected from Open-AudIT.'] = 'Kiszámolva, amikor az integráció fut, és tartalmazza a kiválasztott eszközök számát Open- AudIT.';

$GLOBALS["lang"]['Calculated when integration is run and contains the number of devices selected the external system.'] = 'Az integráció futásakor számítják ki, és a kiválasztott eszközök számát tartalmazzák.';

$GLOBALS["lang"]['Calculated when integration is run and contains the number of devices to be updated in the external system.'] = 'Az integráció futásakor számítják ki, és a külső rendszerben frissítendő eszközök számát tartalmazzák.';

$GLOBALS["lang"]['Calculated when integration is run and contains the number of devices updated in Open-AudIT.'] = 'Az integráció futásakor számoljuk ki, és tartalmazza az Open- AudIT-ban frissített eszközök számát.';

$GLOBALS["lang"]['Cambodia'] = 'Kuba';

$GLOBALS["lang"]['Cameroon'] = 'Kamerun';

$GLOBALS["lang"]['Campus Area Network'] = 'Kampuszterület-hálózat';

$GLOBALS["lang"]['Can be  <code>active</code>, <code>passive</code> or blank.'] = 'Lehet <code>active</code>, <code>passive</code> vagy üres.';

$GLOBALS["lang"]['Can be <code>application</code>, <code>compute</code>, <code>database</code>, <code>storage</code>, <code>virtualisation</code>, <code>web</code>, <code>other</code> or blank.'] = 'Lehet <code>application</code>, <code>compute</code>, <code>database</code>, <code>storage</code>, <code>virtualisation</code>, <code>web</code>, <code>other</code> vagy üres.';

$GLOBALS["lang"]['Can be <code>auto</code>, <code>fixed</code>, <code>other</code> or blank.'] = 'Lehet <code>auto</code>, <code>fixed</code>, <code>other</code> vagy üres.';

$GLOBALS["lang"]['Can be <code>high availability</code>, <code>load balancing</code>, <code>performance</code>, <code>storage</code>, <code>other</code> or blank.'] = 'Lehet <code>high availability</code>, <code>load balancing</code>, <code>performance</code>, <code>storage</code>, <code>other</code> vagy üres.';

$GLOBALS["lang"]['Can be <code>line</code>, <code>pie</code> or <code>traffic</code>.'] = 'Lehet <code>line</code>, <code>pie</code> vagy <code>traffic</code>.';

$GLOBALS["lang"]['Can be <code>user</code> or <code>collector</code>.'] = 'Lehet <code>user</code> vagy <code>collector</code>.';

$GLOBALS["lang"]['Can be set by discovery or user.'] = 'Beállítható felfedezés vagy felhasználó által.';

$GLOBALS["lang"]['Can be set by discovery or user. Uses the ID from the locations table.'] = 'Beállítható felfedezés vagy felhasználó által. Felhasználja az azonosítót a helymeghatározó táblából.';

$GLOBALS["lang"]['Can the user edit this item.'] = 'A felhasználó szerkesztheti ezt az elemet.';

$GLOBALS["lang"]['Canada'] = 'Kanada';

$GLOBALS["lang"]['Cancel'] = 'Törlés';

$GLOBALS["lang"]['capabilities'] = 'Kapacitások';

$GLOBALS["lang"]['Capabilities'] = 'Kapacitások';

$GLOBALS["lang"]['Capacity'] = 'Kapacitás';

$GLOBALS["lang"]['Cape Verde'] = 'Zöld-foki-szigetek';

$GLOBALS["lang"]['Capitalise'] = 'Kapitalizáció';

$GLOBALS["lang"]['caption'] = 'Felirat';

$GLOBALS["lang"]['Caption'] = 'Felirat';

$GLOBALS["lang"]['Cayman Islands'] = 'Kajmán-szigetek';

$GLOBALS["lang"]['Cellular Details'] = 'Cellularis adatok';

$GLOBALS["lang"]['Central African Republic'] = 'Közép-afrikai Köztársaság';

$GLOBALS["lang"]['certificate'] = 'Tanúsítvány';

$GLOBALS["lang"]['Certificate'] = 'Tanúsítvány';

$GLOBALS["lang"]['certificate_file'] = 'Tanúsítványfájl';

$GLOBALS["lang"]['Certificate File'] = 'Tanúsítványfájl';

$GLOBALS["lang"]['certificate_name'] = 'A bizonyítvány neve';

$GLOBALS["lang"]['Certificate Name'] = 'A bizonyítvány neve';

$GLOBALS["lang"]['certificates'] = 'Tanúsítványok';

$GLOBALS["lang"]['Certificates'] = 'Tanúsítványok';

$GLOBALS["lang"]['Chad'] = 'Csád';

$GLOBALS["lang"]['change_id'] = 'Személyazonosító módosítás';

$GLOBALS["lang"]['Change ID'] = 'Személyazonosító módosítás';

$GLOBALS["lang"]['change_log'] = 'A napló módosítása';

$GLOBALS["lang"]['Change Log'] = 'A napló módosítása';

$GLOBALS["lang"]['change_type'] = 'Típus módosítása';

$GLOBALS["lang"]['Change Type'] = 'Típus módosítása';

$GLOBALS["lang"]['check_minutes'] = 'Ellenőrzési jegyzőkönyv';

$GLOBALS["lang"]['Check Minutes'] = 'Ellenőrzési jegyzőkönyv';

$GLOBALS["lang"]['Check for SSH on these ports'] = 'Ellenőrizze az SSH-t ezeken a kikötőkön';

$GLOBALS["lang"]['Check this port for any SSH service.'] = 'Ellenőrizze ezt a portot minden SSH szolgáltatás.';

$GLOBALS["lang"]['Chile'] = 'Chile';

$GLOBALS["lang"]['China'] = 'Kína';

$GLOBALS["lang"]['Choose'] = 'Válasszon';

$GLOBALS["lang"]['Choose (select OS first)'] = 'Válasszon (először válassza az OS-t)';

$GLOBALS["lang"]['Choose a Device'] = 'Válasszon ki egy eszközt';

$GLOBALS["lang"]['Choose a Table'] = 'Táblázat kiválasztása';

$GLOBALS["lang"]['Christmas Island'] = 'Karácsony-sziget';

$GLOBALS["lang"]['cidr'] = 'Cidr';

$GLOBALS["lang"]['Cidr'] = 'Cidr';

$GLOBALS["lang"]['circuit_count'] = 'Áramkör-szám';

$GLOBALS["lang"]['Circuit Count'] = 'Áramkör-szám';

$GLOBALS["lang"]['circuit_status'] = 'Bekapcsolási állapot';

$GLOBALS["lang"]['Circuit Status'] = 'Bekapcsolási állapot';

$GLOBALS["lang"]['city'] = 'Város';

$GLOBALS["lang"]['City'] = 'Város';

$GLOBALS["lang"]['class'] = 'Osztály';

$GLOBALS["lang"]['Class'] = 'Osztály';

$GLOBALS["lang"]['class_text'] = 'Osztályszöveg';

$GLOBALS["lang"]['Class Text'] = 'Osztályszöveg';

$GLOBALS["lang"]['Click the Delete button to remove the example devices from Open-AudIT.<br>This will remove the below devices from the database. '] = 'Kattintson a Törlés gombra az Open- AudIT példájának eltávolításához.<br/>Ez eltávolítja az alábbi eszközöket az adatbázisból. ';

$GLOBALS["lang"]['Click the Import button below to populate Open-AudIT with example device data.'] = 'Kattintson az alábbi importáló gombra az Open- AudIT megjelenítéséhez.';

$GLOBALS["lang"]['Client ID'] = 'Ügyfél azonosítója';

$GLOBALS["lang"]['client_ident'] = 'Ügyfél azonosító';

$GLOBALS["lang"]['Client Ident'] = 'Ügyfél azonosító';

$GLOBALS["lang"]['client_secret'] = 'Ügyfél titok';

$GLOBALS["lang"]['Client Secret'] = 'Ügyfél titok';

$GLOBALS["lang"]['client_site_name'] = 'Ügyfél neve';

$GLOBALS["lang"]['Client Site Name'] = 'Ügyfél neve';

$GLOBALS["lang"]['Close'] = 'Bezárás';

$GLOBALS["lang"]['Cloud'] = 'Felhő';

$GLOBALS["lang"]['Cloud Details'] = 'Felhő adatai';

$GLOBALS["lang"]['Cloud Discovery'] = 'Felhő feltárása';

$GLOBALS["lang"]['cloud_id'] = 'Felhőazonosító';

$GLOBALS["lang"]['Cloud ID'] = 'Felhőazonosító';

$GLOBALS["lang"]['cloud_log'] = 'Felhőnapló';

$GLOBALS["lang"]['Cloud Log'] = 'Felhőnapló';

$GLOBALS["lang"]['cloud_name'] = 'Felhő neve';

$GLOBALS["lang"]['Cloud Name'] = 'Felhő neve';

$GLOBALS["lang"]['Cloud Network'] = 'Felhőhálózat';

$GLOBALS["lang"]['clouds'] = 'Felhők';

$GLOBALS["lang"]['Clouds'] = 'Felhők';

$GLOBALS["lang"]['cluster'] = 'Klaszter';

$GLOBALS["lang"]['Cluster'] = 'Klaszter';

$GLOBALS["lang"]['cluster_id'] = 'Klaszter azonosító';

$GLOBALS["lang"]['Cluster ID'] = 'Klaszter azonosító';

$GLOBALS["lang"]['cluster_name'] = 'Klaszter neve';

$GLOBALS["lang"]['Cluster Name'] = 'Klaszter neve';

$GLOBALS["lang"]['cluster_type'] = 'Klaszter típusa';

$GLOBALS["lang"]['Cluster Type'] = 'Klaszter típusa';

$GLOBALS["lang"]['clusters'] = 'Kukkolók';

$GLOBALS["lang"]['Clusters'] = 'Kukkolók';

$GLOBALS["lang"]['Cocos (Keeling) Islands'] = 'Kókusz (Keeling) -szigetek';

$GLOBALS["lang"]['Collector'] = 'Gyűjtő';

$GLOBALS["lang"]['Collector (UUID)'] = 'Gyűjtő (UUID)';

$GLOBALS["lang"]['Collector Name'] = 'Gyűjtő neve';

$GLOBALS["lang"]['collector_uuid'] = 'Gyűjtő Uuid';

$GLOBALS["lang"]['Collector Uuid'] = 'Gyűjtő Uuid';

$GLOBALS["lang"]['collectors'] = 'Gyűjtők';

$GLOBALS["lang"]['Collectors'] = 'Gyűjtők';

$GLOBALS["lang"]['Colombia'] = 'Kolumbia';

$GLOBALS["lang"]['color'] = 'Szín';

$GLOBALS["lang"]['Color'] = 'Szín';

$GLOBALS["lang"]['column'] = 'oszlop';

$GLOBALS["lang"]['Column'] = 'oszlop';

$GLOBALS["lang"]['Columns'] = 'Oszlopok';

$GLOBALS["lang"]['command'] = 'Parancs';

$GLOBALS["lang"]['Command'] = 'Parancs';

$GLOBALS["lang"]['command_options'] = 'Parancsbeállítások';

$GLOBALS["lang"]['Command Options'] = 'Parancsbeállítások';

$GLOBALS["lang"]['command_output'] = 'Parancskimenet';

$GLOBALS["lang"]['Command Output'] = 'Parancskimenet';

$GLOBALS["lang"]['command_status'] = 'Parancsnoki állapot';

$GLOBALS["lang"]['Command Status'] = 'Parancsnoki állapot';

$GLOBALS["lang"]['command_time_to_execute'] = 'Parancsolási idő a végrehajtáshoz';

$GLOBALS["lang"]['Command Time To Execute'] = 'Parancsolási idő a végrehajtáshoz';

$GLOBALS["lang"]['comment'] = 'Megjegyzés';

$GLOBALS["lang"]['Comment'] = 'Megjegyzés';

$GLOBALS["lang"]['comments'] = 'Megjegyzések';

$GLOBALS["lang"]['Comments'] = 'Megjegyzések';

$GLOBALS["lang"]['commercial'] = 'Kereskedelmi';

$GLOBALS["lang"]['Commercial'] = 'Kereskedelmi';

$GLOBALS["lang"]['common_name'] = 'Közhasználatú név';

$GLOBALS["lang"]['Common Name'] = 'Közhasználatú név';

$GLOBALS["lang"]['Commonly referred to as the clientId.'] = 'Általában ügyfélként emlegetik.';

$GLOBALS["lang"]['Commonly referred to as the clientSecret.'] = 'Általában az ügyféltitokként emlegetik.';

$GLOBALS["lang"]['Community'] = 'Közösség';

$GLOBALS["lang"]['Community Questions'] = 'Közösségi kérdések';

$GLOBALS["lang"]['Community String'] = 'Közösségi sztring';

$GLOBALS["lang"]['Comoros the'] = 'Comore-szigetek';

$GLOBALS["lang"]['Compact'] = 'Kompakt';

$GLOBALS["lang"]['Company'] = 'Vállalat';

$GLOBALS["lang"]['Complexity of the attack (Low or High).'] = 'A támadás bonyolultsága (alacsony vagy magas).';

$GLOBALS["lang"]['Component Table'] = 'Összetevő táblázat';

$GLOBALS["lang"]['Components (All Devices)'] = 'Alkatrészek (minden eszköz)';

$GLOBALS["lang"]['Compute'] = 'Számítás';

$GLOBALS["lang"]['Condition'] = 'Feltétel';

$GLOBALS["lang"]['Config'] = 'Config';

$GLOBALS["lang"]['Config Default, currently '] = 'Config Alapértelmezés, jelenleg ';

$GLOBALS["lang"]['config_file'] = 'Konfig fájl';

$GLOBALS["lang"]['Config File'] = 'Konfig fájl';

$GLOBALS["lang"]['config_manager_error_code'] = 'A hibakód beállításai';

$GLOBALS["lang"]['Config Manager Error Code'] = 'A hibakód beállításai';

$GLOBALS["lang"]['configuration'] = 'Beállítás';

$GLOBALS["lang"]['Configuration'] = 'Beállítás';

$GLOBALS["lang"]['Configure'] = 'Beállítás';

$GLOBALS["lang"]['Congo'] = 'Kongó';

$GLOBALS["lang"]['Congo the'] = 'Kongó';

$GLOBALS["lang"]['Connected To'] = 'Csatlakozás';

$GLOBALS["lang"]['connection'] = 'Kapcsolat';

$GLOBALS["lang"]['Connection'] = 'Kapcsolat';

$GLOBALS["lang"]['Connection Options'] = 'Csatlakozási beállítások';

$GLOBALS["lang"]['connection_status'] = 'Csatlakozási állapot';

$GLOBALS["lang"]['Connection Status'] = 'Csatlakozási állapot';

$GLOBALS["lang"]['connections'] = 'Kapcsolatok';

$GLOBALS["lang"]['Connections'] = 'Kapcsolatok';

$GLOBALS["lang"]['Consider filtered Ports Open'] = 'Szűrt Portok megnyitása';

$GLOBALS["lang"]['Consider open|filtered Ports Open'] = 'Tekintse nyitva 124; szűrt Portok megnyitása';

$GLOBALS["lang"]['contact'] = 'Kapcsolat';

$GLOBALS["lang"]['Contact'] = 'Kapcsolat';

$GLOBALS["lang"]['contact_name'] = 'Kapcsolattartó neve';

$GLOBALS["lang"]['Contact Name'] = 'Kapcsolattartó neve';

$GLOBALS["lang"]['contained_in'] = 'Tartalmazva';

$GLOBALS["lang"]['Contained In'] = 'Tartalmazva';

$GLOBALS["lang"]['Contains a JSON object details the associated widgets and their positions.'] = 'Tartalmaz egy JSON objektum részleteket a kapcsolódó widgets és pozícióit.';

$GLOBALS["lang"]['Contains the fields that determine if we should use ssh, snmp and wmi discovery options. A JSON object.'] = 'Tartalmazza a mezőket, amelyek meghatározzák, hogy kell használni ssh, snmp és wmi felfedezés lehetőségeket. Egy JSON objektum.';

$GLOBALS["lang"]['Context Engine ID'] = 'Kontextus motorazonosító';

$GLOBALS["lang"]['Context Name'] = 'Kontextus neve';

$GLOBALS["lang"]['contractual_obligations'] = 'Szerződéses kötelezettségek';

$GLOBALS["lang"]['Contractual Obligations'] = 'Szerződéses kötelezettségek';

$GLOBALS["lang"]['Cook Islands'] = 'Cook-szigetek';

$GLOBALS["lang"]['Copy and paste an audit result'] = 'Ellenőrzési eredmény másolása és beillesztése';

$GLOBALS["lang"]['Copy and paste the below to the forums, another instance of Open-AudIT or anywhere else you need to provide this item.'] = 'Másolja és illessze be az alábbi fórumokra, egy másik példány Open- AudIT vagy bárhol máshol meg kell adni ezt a tételt.';

$GLOBALS["lang"]['core_count'] = 'Törzsszám';

$GLOBALS["lang"]['Core Count'] = 'Törzsszám';

$GLOBALS["lang"]['Cores'] = 'Magok';

$GLOBALS["lang"]['cost_center'] = 'Költségközpont';

$GLOBALS["lang"]['Cost Center'] = 'Költségközpont';

$GLOBALS["lang"]['cost_code'] = 'Költségkód';

$GLOBALS["lang"]['Cost Code'] = 'Költségkód';

$GLOBALS["lang"]['Costa Rica'] = 'Costa Rica';

$GLOBALS["lang"]['Cote d Ivoire'] = 'Cote d Ivanced';

$GLOBALS["lang"]['count'] = 'Számolás';

$GLOBALS["lang"]['Count'] = 'Számolás';

$GLOBALS["lang"]['country'] = 'Ország';

$GLOBALS["lang"]['Country'] = 'Ország';

$GLOBALS["lang"]['country_code'] = 'Ország kódja';

$GLOBALS["lang"]['Country Code'] = 'Ország kódja';

$GLOBALS["lang"]['cpu_count'] = 'Cpu Count';

$GLOBALS["lang"]['Cpu Count'] = 'Cpu Count';

$GLOBALS["lang"]['Create'] = 'Létrehozás';

$GLOBALS["lang"]['Create Example Devices'] = 'Példa eszközök létrehozása';

$GLOBALS["lang"]['create_external_count'] = 'Külső szám létrehozása';

$GLOBALS["lang"]['Create External Count'] = 'Külső szám létrehozása';

$GLOBALS["lang"]['create_external_from_internal'] = 'Külső belső';

$GLOBALS["lang"]['Create External From Internal'] = 'Külső belső';

$GLOBALS["lang"]['Create Geocode'] = 'Geocode létrehozása';

$GLOBALS["lang"]['create_internal_count'] = 'Belső szám létrehozása';

$GLOBALS["lang"]['Create Internal Count'] = 'Belső szám létrehozása';

$GLOBALS["lang"]['create_internal_from_external'] = 'Belső külsõ létrehozása';

$GLOBALS["lang"]['Create Internal From External'] = 'Belső külsõ létrehozása';

$GLOBALS["lang"]['Create NMIS Devices from Open-AudIT'] = 'NMIS eszközök létrehozása az Open- AudIT-ból';

$GLOBALS["lang"]['Create Open-AudIT Devices from '] = 'Open- AudIT létrehozása Eszközök ';

$GLOBALS["lang"]['Create Open-AudIT Devices from NMIS'] = 'Open- AudIT létrehozása Az NMIS eszközei';

$GLOBALS["lang"]['created_by'] = 'Létrehozta';

$GLOBALS["lang"]['Created By'] = 'Létrehozta';

$GLOBALS["lang"]['created_date'] = 'Létrehozott dátum';

$GLOBALS["lang"]['Created Date'] = 'Létrehozott dátum';

$GLOBALS["lang"]['Creating'] = 'Létrehozás';

$GLOBALS["lang"]['Creating Device'] = 'Eszközök létrehozása';

$GLOBALS["lang"]['Creating a Query'] = 'Kérdés létrehozása';

$GLOBALS["lang"]['creator'] = 'Teremtő';

$GLOBALS["lang"]['Creator'] = 'Teremtő';

$GLOBALS["lang"]['credential'] = 'Kredenciális';

$GLOBALS["lang"]['Credential'] = 'Kredenciális';

$GLOBALS["lang"]['credentials'] = 'Hitelezők';

$GLOBALS["lang"]['Credentials'] = 'Hitelezők';

$GLOBALS["lang"]['Credentials Client ID'] = 'Ügyfél azonosítója';

$GLOBALS["lang"]['Credentials Subscription ID'] = 'Credents Subscription Azonosító';

$GLOBALS["lang"]['Credentials Tenant ID'] = 'Hitelnyújtói azonosító';

$GLOBALS["lang"]['Credentials for Amazon AWS used in Cloud Discovery'] = 'Az Amazon által a Cloud Discovery-ben használt Amazon AWS-re vonatkozó adatok';

$GLOBALS["lang"]['Credentials for Microsoft Azure used in Cloud Discovery'] = 'A Microsoft kreditjei A Cloud Discovery-ben használt azúr';

$GLOBALS["lang"]['Critical'] = 'Kritikus';

$GLOBALS["lang"]['criticality'] = 'Kritikusság';

$GLOBALS["lang"]['Criticality'] = 'Kritikusság';

$GLOBALS["lang"]['Croatia'] = 'Horvátország';

$GLOBALS["lang"]['Cuba'] = 'Kuba';

$GLOBALS["lang"]['current'] = 'Jelenleg';

$GLOBALS["lang"]['Current'] = 'Jelenleg';

$GLOBALS["lang"]['Current Discovery Processes'] = 'Jelenlegi felderítési folyamatok';

$GLOBALS["lang"]['Current date & time is '] = 'Jelenlegi dátum és idő: ';

$GLOBALS["lang"]['Currently Installed'] = 'Jelenleg telepítve';

$GLOBALS["lang"]['Currently supported types are <code>snmp</code>, <code>snmp_v3</code>, <code>ssh</code>, <code>ssh_key</code> or <code>windows</code>.'] = 'Jelenleg támogatott típusok: <code>snmp</code>, <code>snmp_v3</code>, <code>ssh</code>, <code>ssh_key</code> vagy <code>windows</code>.';

$GLOBALS["lang"]['Custom TCP Ports'] = 'Egyedi TCP portok';

$GLOBALS["lang"]['Custom UDP Ports'] = 'Egyedi UDP Kikötők';

$GLOBALS["lang"]['Cve'] = 'Cve';

$GLOBALS["lang"]['Cyprus'] = 'Ciprus';

$GLOBALS["lang"]['Czech'] = 'Cseh';

$GLOBALS["lang"]['Czech Republic'] = 'Cseh Köztársaság';

$GLOBALS["lang"]['DHCP'] = 'DHCP';

$GLOBALS["lang"]['DN Account (optional)'] = 'DN-számla (nem kötelező)';

$GLOBALS["lang"]['DN Password (optional)'] = 'DN jelszó (nem kötelező)';

$GLOBALS["lang"]['DNS FQDN'] = 'DNS FQDN';

$GLOBALS["lang"]['DNS Hostname'] = 'DNS Hostname';

$GLOBALS["lang"]['dashboard_id'] = 'A műszerfal azonosítója';

$GLOBALS["lang"]['Dashboard ID'] = 'A műszerfal azonosítója';

$GLOBALS["lang"]['dashboards'] = 'Tálca';

$GLOBALS["lang"]['Dashboards'] = 'Tálca';

$GLOBALS["lang"]['Database'] = 'Adatbázis';

$GLOBALS["lang"]['db_action'] = 'Adatbázis-művelet';

$GLOBALS["lang"]['Database Action'] = 'Adatbázis-művelet';

$GLOBALS["lang"]['db_column'] = 'Adatbázis-oszlop';

$GLOBALS["lang"]['Database Column'] = 'Adatbázis-oszlop';

$GLOBALS["lang"]['Database Definition'] = 'Adatbázis-meghatározás';

$GLOBALS["lang"]['db_row'] = 'Adatsor';

$GLOBALS["lang"]['Database Row'] = 'Adatsor';

$GLOBALS["lang"]['Database Schema'] = 'Adatbázis-rendszer';

$GLOBALS["lang"]['db_table'] = 'Adatbázis';

$GLOBALS["lang"]['Database Table'] = 'Adatbázis';

$GLOBALS["lang"]['dataset_title'] = 'Adatkészlet címe';

$GLOBALS["lang"]['Dataset Title'] = 'Adatkészlet címe';

$GLOBALS["lang"]['date'] = 'Időpont';

$GLOBALS["lang"]['Date'] = 'Időpont';

$GLOBALS["lang"]['Date D-M-Y'] = 'Dátum';

$GLOBALS["lang"]['Date M-D-Y'] = 'Dátum: M- D- Y';

$GLOBALS["lang"]['Date Now'] = 'Dátum';

$GLOBALS["lang"]['date_of_manufacture'] = 'Előállítás időpontja';

$GLOBALS["lang"]['Date Of Manufacture'] = 'Előállítás időpontja';

$GLOBALS["lang"]['date_paid'] = 'Kifizetett dátum';

$GLOBALS["lang"]['Date Paid'] = 'Kifizetett dátum';

$GLOBALS["lang"]['date_received'] = 'Elfogadott dátum';

$GLOBALS["lang"]['Date Received'] = 'Elfogadott dátum';

$GLOBALS["lang"]['Date Y-M-D'] = 'Időpont';

$GLOBALS["lang"]['Date and time when the CVE was last updated.'] = 'A CVE legutóbbi frissítésének dátuma és időpontja.';

$GLOBALS["lang"]['Date and time when the CVE was published.'] = 'A CVE közzétételének időpontja és időpontja.';

$GLOBALS["lang"]['Date when the CVE was published.'] = 'A CVE közzétételének időpontja.';

$GLOBALS["lang"]['DateTime Now'] = 'DateTime Now';

$GLOBALS["lang"]['DateTime Y-M-D H:M:S'] = 'Időpont Y- M- D H: M: S';

$GLOBALS["lang"]['day_of_month'] = 'Hónap napja';

$GLOBALS["lang"]['Day Of Month'] = 'Hónap napja';

$GLOBALS["lang"]['day_of_week'] = 'A hét napja';

$GLOBALS["lang"]['Day Of Week'] = 'A hét napja';

$GLOBALS["lang"]['Day of Month'] = 'Hónap';

$GLOBALS["lang"]['dbus_identifier'] = 'Dbus azonosító';

$GLOBALS["lang"]['Dbus Identifier'] = 'Dbus azonosító';

$GLOBALS["lang"]['Debug'] = 'Hibaelhárítás';

$GLOBALS["lang"]['December'] = 'december';

$GLOBALS["lang"]['Default'] = 'Alapértelmezés';

$GLOBALS["lang"]['Default Items'] = 'Alapértelmezett tételek';

$GLOBALS["lang"]['Default Value'] = 'Alapértelmezett érték';

$GLOBALS["lang"]['Default of 389. Normally 636 used for Active Directory LDAPS.'] = '389 alapértelmezés. Általában 636-ot használnak az Active Directory LDAPS-nél.';

$GLOBALS["lang"]['Default of <code>3</code> for LDAP and Active Directory.'] = 'Alapértelmezés: <code>3</code> LDAP és Active Directory esetében.';

$GLOBALS["lang"]['Defaults'] = 'Alapértelmezés';

$GLOBALS["lang"]['delay_minutes'] = 'Késedelmi jegyzőkönyv';

$GLOBALS["lang"]['Delay Minutes'] = 'Késedelmi jegyzőkönyv';

$GLOBALS["lang"]['Delete'] = 'Törlés';

$GLOBALS["lang"]['Delete Example Devices'] = 'Példa eszközök törlése';

$GLOBALS["lang"]['delete_external_from_internal'] = 'A külső belső rész törlése';

$GLOBALS["lang"]['Delete External From Internal'] = 'A külső belső rész törlése';

$GLOBALS["lang"]['Delete NMIS Devices if not in Open-AudIT'] = 'NMIS törlése Eszközök, ha nincsenek az Open- AudIT-ban';

$GLOBALS["lang"]['Delete from Application'] = 'Törlés az alkalmazásból';

$GLOBALS["lang"]['Delete from Cluster'] = 'Törlés a Clusterből';

$GLOBALS["lang"]['Denmark'] = 'Dánia';

$GLOBALS["lang"]['Derived by audit or manually set by user.'] = 'Ellenőrzéssel vagy a felhasználó által kézzel beállítva.';

$GLOBALS["lang"]['Derived by audit.'] = 'Ellenőrzésből származik.';

$GLOBALS["lang"]['Derived from <code>rack_devices.device_id</code>.'] = 'Származtatott <code>rack_devices.device_id</code>.';

$GLOBALS["lang"]['Derived from <code>rack_devices.rack_id</code>.'] = 'Származtatott <code>rack_devices.rack_id</code>.';

$GLOBALS["lang"]['Derived from Collector discovery.'] = 'A Kollektor felfedezéséből származik.';

$GLOBALS["lang"]['Derived from OS Name.'] = 'Az OS név alapján.';

$GLOBALS["lang"]['Derived from cloud discovery.'] = 'A felhőből származik.';

$GLOBALS["lang"]['Derived from device audits.'] = 'Az eszközök ellenőrzéséből származik.';

$GLOBALS["lang"]['Derived from device type and OS.'] = 'Az eszköztípusból és az OS-ből származik.';

$GLOBALS["lang"]['Derived from discovery.'] = 'A felfedezésből származik.';

$GLOBALS["lang"]['Derived from hostname, sysName, dns Hostname and IP in that order.'] = 'Származott a hostname, sysName, dns Hostname és IP ebben a sorrendben.';

$GLOBALS["lang"]['Derived from the integer severity.'] = 'Az egész szám súlyosságából eredően.';

$GLOBALS["lang"]['description'] = 'Leírás';

$GLOBALS["lang"]['Description'] = 'Leírás';

$GLOBALS["lang"]['destination'] = 'Rendeltetési hely';

$GLOBALS["lang"]['Destination'] = 'Rendeltetési hely';

$GLOBALS["lang"]['detail'] = 'Részlet';

$GLOBALS["lang"]['Detail'] = 'Részlet';

$GLOBALS["lang"]['Details'] = 'Részletek';

$GLOBALS["lang"]['details'] = 'Részletek';

$GLOBALS["lang"]['Details of who is usually contactable at this site.'] = 'Részletek, hogy ki általában kontakt ezen az oldalon.';

$GLOBALS["lang"]['device'] = 'Eszköz';

$GLOBALS["lang"]['Device'] = 'Eszköz';

$GLOBALS["lang"]['Device Audits'] = 'Eszközök ellenőrzése';

$GLOBALS["lang"]['Device ID'] = 'Az eszköz azonosítója';

$GLOBALS["lang"]['device_id'] = 'Az eszköz azonosítója';

$GLOBALS["lang"]['device_id_a'] = 'A-azonosító eszköz';

$GLOBALS["lang"]['Device ID A'] = 'A-azonosító eszköz';

$GLOBALS["lang"]['device_id_b'] = 'ID B eszköz';

$GLOBALS["lang"]['Device ID B'] = 'ID B eszköz';

$GLOBALS["lang"]['Device Name'] = 'Az eszköz neve';

$GLOBALS["lang"]['Device Result'] = 'Eszközeredmény';

$GLOBALS["lang"]['Device Results'] = 'Eszközök eredményei';

$GLOBALS["lang"]['Device Seed'] = 'Az eszköz magja';

$GLOBALS["lang"]['Device Seed IP'] = 'Mag IP eszköz';

$GLOBALS["lang"]['Device Status'] = 'Az eszköz állapota';

$GLOBALS["lang"]['Device Types'] = 'Eszköztípusok';

$GLOBALS["lang"]['Device is in the Subnet'] = 'Az eszköz a hálóban van.';

$GLOBALS["lang"]['Devices'] = 'Eszközök';

$GLOBALS["lang"]['devices_assigned_to_location'] = 'A helyszínre kijelölt eszközök';

$GLOBALS["lang"]['Devices Assigned To Location'] = 'A helyszínre kijelölt eszközök';

$GLOBALS["lang"]['devices_assigned_to_org'] = 'Orghoz rendelt eszközök';

$GLOBALS["lang"]['Devices Assigned To Org'] = 'Orghoz rendelt eszközök';

$GLOBALS["lang"]['Devices Audited'] = 'Ellenőrzött eszközök';

$GLOBALS["lang"]['Devices Created in '] = 'Létrehozott eszközök ';

$GLOBALS["lang"]['Devices Created in Open-AudIT'] = 'Eszközök létrehozott Open- AudIT';

$GLOBALS["lang"]['devices_default_display_columns'] = 'Eszközök alapértelmezett megjelenítési oszlopok';

$GLOBALS["lang"]['Devices Default Display Columns'] = 'Eszközök alapértelmezett megjelenítési oszlopok';

$GLOBALS["lang"]['Devices Found Last 7 Days'] = 'Az utolsó 7 napban talált eszközök';

$GLOBALS["lang"]['Devices Found Today'] = 'A ma talált eszközök';

$GLOBALS["lang"]['Devices Found Yesterday'] = 'A tegnap talált eszközök';

$GLOBALS["lang"]['Devices Not Audited'] = 'Nem auditált eszközök';

$GLOBALS["lang"]['Devices Not Seen 30 Days'] = 'Nem látott eszközök 30 nap';

$GLOBALS["lang"]['Devices Not Seen 7 Days'] = 'Nem látott eszközök 7 nap';

$GLOBALS["lang"]['Devices Not Seen 90 Days'] = '90 napig nem látott eszközök';

$GLOBALS["lang"]['Devices Retrieved via API'] = 'Az API-n keresztül visszanyert eszközök';

$GLOBALS["lang"]['Devices Selected from '] = 'Kiválasztott eszközök ';

$GLOBALS["lang"]['Devices Selected from Open-AudIT'] = 'Az Open- AudIT közül kiválasztott eszközök';

$GLOBALS["lang"]['Devices Updated in '] = 'Eszközök frissítve ';

$GLOBALS["lang"]['Devices Updated in Open-AudIT'] = 'Eszközök frissítve Open- AudIT';

$GLOBALS["lang"]['Devices are being benchmarked.'] = 'Az eszközöket teljesítményméréssel jelölik.';

$GLOBALS["lang"]['Devices are not being benchmarked.'] = 'Az eszközöket nem mérik fel.';

$GLOBALS["lang"]['Devices could be benchmarked.'] = 'Az eszközöket teljesítményméréssel is meg lehet határozni.';

$GLOBALS["lang"]['Devices in Running State'] = 'A futópálya menti eszközök';

$GLOBALS["lang"]['Devices in Stopped State'] = 'Készülékek leállított állapotban';

$GLOBALS["lang"]['Devices in this'] = 'Eszközök ebben';

$GLOBALS["lang"]['Devired from type or OS.'] = 'Típusból vagy operációs rendszerből készült.';

$GLOBALS["lang"]['dhcp_enabled'] = 'Dhcp bekapcsolva';

$GLOBALS["lang"]['Dhcp Enabled'] = 'Dhcp bekapcsolva';

$GLOBALS["lang"]['dhcp_lease_expires'] = 'Dhcp Lease Expires';

$GLOBALS["lang"]['Dhcp Lease Expires'] = 'Dhcp Lease Expires';

$GLOBALS["lang"]['dhcp_lease_obtained'] = 'Dhcp Lease';

$GLOBALS["lang"]['Dhcp Lease Obtained'] = 'Dhcp Lease';

$GLOBALS["lang"]['dhcp_server'] = 'Dhcp kiszolgáló';

$GLOBALS["lang"]['Dhcp Server'] = 'Dhcp kiszolgáló';

$GLOBALS["lang"]['Did the command complete successfully and return expected data.'] = 'A parancs sikeresen befejeződött és a várt adatokat visszaküldte.';

$GLOBALS["lang"]['direction'] = 'Irány';

$GLOBALS["lang"]['Direction'] = 'Irány';

$GLOBALS["lang"]['directory'] = 'Könyvtár';

$GLOBALS["lang"]['Directory'] = 'Könyvtár';

$GLOBALS["lang"]['disabled'] = 'Fogyatékos';

$GLOBALS["lang"]['Disabled'] = 'Fogyatékos';

$GLOBALS["lang"]['discard'] = 'Kidobás';

$GLOBALS["lang"]['Discard'] = 'Kidobás';

$GLOBALS["lang"]['Discover'] = 'Felderítés';

$GLOBALS["lang"]['discoveries'] = 'Felderítés';

$GLOBALS["lang"]['Discoveries'] = 'Felderítés';

$GLOBALS["lang"]['Discovery'] = 'Felfedezés';

$GLOBALS["lang"]['Discovery Change Logs'] = 'Fedélzetváltoztató naplók';

$GLOBALS["lang"]['Discovery Data Retention'] = 'Adatmegőrzés';

$GLOBALS["lang"]['discovery_id'] = 'Felfedő azonosító';

$GLOBALS["lang"]['Discovery ID'] = 'Felfedő azonosító';

$GLOBALS["lang"]['Discovery Issues'] = 'Felfedező kérdések';

$GLOBALS["lang"]['discovery_log'] = 'Felfedező napló';

$GLOBALS["lang"]['Discovery Log'] = 'Felfedező napló';

$GLOBALS["lang"]['Discovery Match Options'] = 'Felfedező match beállítások';

$GLOBALS["lang"]['Discovery Name'] = 'A felfedezés neve';

$GLOBALS["lang"]['Discovery Options'] = 'Felfedező beállítások';

$GLOBALS["lang"]['Discovery Queue Count'] = 'Felfedező sorszám';

$GLOBALS["lang"]['Discovery Queue Limit'] = 'Discovery sor limit';

$GLOBALS["lang"]['discovery_run'] = 'Discovery Run';

$GLOBALS["lang"]['Discovery Run'] = 'Discovery Run';

$GLOBALS["lang"]['discovery_scan_options'] = 'Felderítő keresési beállítások';

$GLOBALS["lang"]['Discovery Scan Options'] = 'Felderítő keresési beállítások';

$GLOBALS["lang"]['disk'] = 'Lemez';

$GLOBALS["lang"]['Disk'] = 'Lemez';

$GLOBALS["lang"]['display_version'] = 'Verzió megjelenítése';

$GLOBALS["lang"]['Display Version'] = 'Verzió megjelenítése';

$GLOBALS["lang"]['Display in Menu'] = 'Megjelenítés menüben';

$GLOBALS["lang"]['district'] = 'Körzet';

$GLOBALS["lang"]['District'] = 'Körzet';

$GLOBALS["lang"]['Djibouti'] = 'Dzsibuti';

$GLOBALS["lang"]['dns'] = 'Dns';

$GLOBALS["lang"]['Dns'] = 'Dns';

$GLOBALS["lang"]['dns_domain'] = 'Dns tartomány';

$GLOBALS["lang"]['Dns Domain'] = 'Dns tartomány';

$GLOBALS["lang"]['dns_domain_reg_enabled'] = 'Dns tartományi rendszer bekapcsolva';

$GLOBALS["lang"]['Dns Domain Reg Enabled'] = 'Dns tartományi rendszer bekapcsolva';

$GLOBALS["lang"]['dns_fqdn'] = 'Dns Fqdn';

$GLOBALS["lang"]['Dns Fqdn'] = 'Dns Fqdn';

$GLOBALS["lang"]['dns_host_name'] = 'Dns host name';

$GLOBALS["lang"]['Dns Host Name'] = 'Dns host name';

$GLOBALS["lang"]['dns_hostname'] = 'Dns Hostname';

$GLOBALS["lang"]['Dns Hostname'] = 'Dns Hostname';

$GLOBALS["lang"]['dns_server'] = 'Dns kiszolgáló';

$GLOBALS["lang"]['Dns Server'] = 'Dns kiszolgáló';

$GLOBALS["lang"]['Do not scan these TCP ports.'] = 'Ne szkenneld ezeket a TCP portokat.';

$GLOBALS["lang"]['Do not scan these UDP ports.'] = 'Ne szkenneld ezeket az UDP portokat.';

$GLOBALS["lang"]['Do not show me again'] = 'Ne mutasd meg újra!';

$GLOBALS["lang"]['Do you want to use secure transport (LDAPS) or regular unencrypted LDAP.'] = 'Biztonságos szállítást (LDAPS) vagy normál, titkosított LDAP-t szeretne használni.';

$GLOBALS["lang"]['Do you wish to see the standard sidebar on the left.'] = 'Szeretné látni a bal oldalon a szokásos oldalvonalat?';

$GLOBALS["lang"]['documentation'] = 'Dokumentáció';

$GLOBALS["lang"]['Documentation'] = 'Dokumentáció';

$GLOBALS["lang"]['Does the license apply to child Orgs.'] = 'A jogosítvány érvényes a gyermekorgokra?';

$GLOBALS["lang"]['domain'] = 'Terület';

$GLOBALS["lang"]['Domain'] = 'Terület';

$GLOBALS["lang"]['domain_controller_address'] = 'Tartományvezérlő címe';

$GLOBALS["lang"]['Domain Controller Address'] = 'Tartományvezérlő címe';

$GLOBALS["lang"]['domain_controller_name'] = 'Tartományvezérlő Név';

$GLOBALS["lang"]['Domain Controller Name'] = 'Tartományvezérlő Név';

$GLOBALS["lang"]['domain_role'] = 'Domain Role';

$GLOBALS["lang"]['Domain Role'] = 'Domain Role';

$GLOBALS["lang"]['domain_short'] = 'Tartomány rövid';

$GLOBALS["lang"]['Domain Short'] = 'Tartomány rövid';

$GLOBALS["lang"]['Dominica'] = 'Dominika';

$GLOBALS["lang"]['Dominican Republic'] = 'Dominikai Köztársaság';

$GLOBALS["lang"]['Dont hold my hand, I know what I am doing. No filter and the ability to join custom tables.'] = 'Ne fogd a kezem, tudom, mit csinálok. Nincs szűrő és a képesség, hogy csatlakozzon egyéni asztalok.';

$GLOBALS["lang"]['Download'] = 'Letöltés';

$GLOBALS["lang"]['Download a file from URL'] = 'Fájl letöltése URL-ből';

$GLOBALS["lang"]['driver'] = 'Vezető';

$GLOBALS["lang"]['Driver'] = 'Vezető';

$GLOBALS["lang"]['duplex'] = 'Duplex';

$GLOBALS["lang"]['Duplex'] = 'Duplex';

$GLOBALS["lang"]['duration'] = 'Időtartam';

$GLOBALS["lang"]['Duration'] = 'Időtartam';

$GLOBALS["lang"]['ESXi'] = 'ESXi';

$GLOBALS["lang"]['EULA'] = 'EULA';

$GLOBALS["lang"]['Ecuador'] = 'Ecuador';

$GLOBALS["lang"]['Edit'] = 'Szerkesztés';

$GLOBALS["lang"]['edit_log'] = 'A napló szerkesztése';

$GLOBALS["lang"]['Edit Log'] = 'A napló szerkesztése';

$GLOBALS["lang"]['editable'] = 'Szerkeszthető';

$GLOBALS["lang"]['Editable'] = 'Szerkeszthető';

$GLOBALS["lang"]['edited_by'] = 'Edited by';

$GLOBALS["lang"]['Edited By'] = 'Edited by';

$GLOBALS["lang"]['edited_date'] = 'Szerkesztett dátum';

$GLOBALS["lang"]['Edited Date'] = 'Szerkesztett dátum';

$GLOBALS["lang"]['edition'] = 'Edition';

$GLOBALS["lang"]['Edition'] = 'Edition';

$GLOBALS["lang"]['Egypt'] = 'Egyiptom';

$GLOBALS["lang"]['Either Amazon, Google or Microsoft.'] = 'Vagy az Amazon, a Google vagy a Microsoft.';

$GLOBALS["lang"]['Either none or present.

<strong>None</strong> - The successful attack does not depend on the deployment and execution conditions of the vulnerable system. The attacker can expect to be able to reach the vulnerability and execute the exploit under all or most instances of the vulnerability.

<strong>Present</strong> - The successful attack depends on the presence of specific deployment and execution conditions of the vulnerable system that enable the attack. These include:

A race condition must be won to successfully exploit the vulnerability. The successfulness of the attack is conditioned on execution conditions that are not under full control of the attacker. The attack may need to be launched multiple times against a single target before being successful.

Network injection. The attacker must inject themselves into the logical network path between the target and the resource requested by the victim (e.g. vulnerabilities requiring an on-path attacker).'] = 'Vagy nincs, vagy jelen van.

<strong>Nincs</strong> - A sikeres támadás nem függ a kiszolgáltatott rendszer telepítési és végrehajtási körülményeitől. A támadó számíthat arra, hogy képes lesz elérni a sebezhetőséget, és végre a kizsákmányolás minden vagy a legtöbb esetben a sebezhetőség.

<strong>Jelen</strong> - A sikeres támadás attól függ, hogy milyen konkrét telepítési és végrehajtási feltételek vannak a kiszolgáltatott rendszerben, ami lehetővé teszi a támadást. Ezek közé tartoznak:

A faj állapota kell nyerni, hogy sikeresen kihasználják a sebezhetőség. A támadás sikere olyan végrehajtási feltételekhez van kötve, amelyek nincsenek teljes mértékben a támadó irányítása alatt. A támadást lehet, hogy több alkalommal is el kell indítani egyetlen célpont ellen, mielőtt sikeres lenne.

Hálózati injekció. A támadónak be kell injekcióznia magát a célpont és az áldozat által kért erőforrás közötti logikai hálózati útba (pl. az online támadót igénylő sebezhetőségek).';

$GLOBALS["lang"]['El Salvador'] = 'Salvador';

$GLOBALS["lang"]['email'] = 'E-mail';

$GLOBALS["lang"]['Email'] = 'E-mail';

$GLOBALS["lang"]['email_address'] = 'E-mail cím';

$GLOBALS["lang"]['Email Address'] = 'E-mail cím';

$GLOBALS["lang"]['Email Configuration'] = 'E-mail beállítás';

$GLOBALS["lang"]['Email to send test to'] = 'A vizsgálat elküldéséhez szükséges e-mail';

$GLOBALS["lang"]['Enable'] = 'Beállítás';

$GLOBALS["lang"]['enabled'] = 'Engedélyezve';

$GLOBALS["lang"]['Enabled'] = 'Engedélyezve';

$GLOBALS["lang"]['encryption'] = 'Titkosítás';

$GLOBALS["lang"]['Encryption'] = 'Titkosítás';

$GLOBALS["lang"]['encryption_method'] = 'Titkosítási módszer';

$GLOBALS["lang"]['Encryption Method'] = 'Titkosítási módszer';

$GLOBALS["lang"]['encryption_status'] = 'Titkosítási állapot';

$GLOBALS["lang"]['Encryption Status'] = 'Titkosítási állapot';

$GLOBALS["lang"]['end_date'] = 'Befejezés dátuma';

$GLOBALS["lang"]['End Date'] = 'Befejezés dátuma';

$GLOBALS["lang"]['End OF Life Product ID'] = 'Életfogytiglan termékazonosító';

$GLOBALS["lang"]['end_of_life'] = 'Az élet vége';

$GLOBALS["lang"]['End Of Life'] = 'Az élet vége';

$GLOBALS["lang"]['end_of_production'] = 'A gyártás vége';

$GLOBALS["lang"]['End Of Production'] = 'A gyártás vége';

$GLOBALS["lang"]['end_of_service'] = 'Szolgáltatás vége';

$GLOBALS["lang"]['End Of Service'] = 'Szolgáltatás vége';

$GLOBALS["lang"]['end_of_service_life'] = 'Szolgálati élet vége';

$GLOBALS["lang"]['End Of Service Life'] = 'Szolgálati élet vége';

$GLOBALS["lang"]['English'] = 'Angol';

$GLOBALS["lang"]['enterprise'] = 'Vállalkozás';

$GLOBALS["lang"]['Enterprise'] = 'Vállalkozás';

$GLOBALS["lang"]['Enterprise Private Network'] = 'Vállalati magán hálózat';

$GLOBALS["lang"]['Entitlement Type'] = 'A jogosultság típusa';

$GLOBALS["lang"]['environment'] = 'Környezet';

$GLOBALS["lang"]['Environment'] = 'Környezet';

$GLOBALS["lang"]['Equal To'] = 'Egyenlő';

$GLOBALS["lang"]['Equal To or Greater Than'] = 'Egyenlő vagy nagyobb';

$GLOBALS["lang"]['Equal To or Less Than'] = 'Egyenlő vagy kevesebb';

$GLOBALS["lang"]['Equals'] = 'Egyenlők';

$GLOBALS["lang"]['Equatorial Guinea'] = 'Egyenlítői-Guinea';

$GLOBALS["lang"]['Eritrea'] = 'Eritrea';

$GLOBALS["lang"]['Error'] = 'Hiba';

$GLOBALS["lang"]['Error Code'] = 'Hibakód';

$GLOBALS["lang"]['Established'] = 'Alapítás';

$GLOBALS["lang"]['Estonia'] = 'Észtország';

$GLOBALS["lang"]['Ethernet MAC'] = 'Ethernet MAC';

$GLOBALS["lang"]['ethernet_mac'] = 'Ethernet Mac';

$GLOBALS["lang"]['Ethernet Mac'] = 'Ethernet Mac';

$GLOBALS["lang"]['Ethiopia'] = 'Etiópia';

$GLOBALS["lang"]['Every'] = 'Minden';

$GLOBALS["lang"]['Every Day'] = 'Minden nap';

$GLOBALS["lang"]['Exceptions'] = 'Kivételek';

$GLOBALS["lang"]['exclude'] = 'Kizárás';

$GLOBALS["lang"]['Exclude'] = 'Kizárás';

$GLOBALS["lang"]['exclude_ip'] = 'Az IP kizárása';

$GLOBALS["lang"]['Exclude IP'] = 'Az IP kizárása';

$GLOBALS["lang"]['Exclude IP Addresses'] = 'Az IP címek kizárása';

$GLOBALS["lang"]['Exclude TCP Ports'] = 'TCP-portok kizárása';

$GLOBALS["lang"]['exclude_tcp_ports'] = 'A Tcp portok kizárása';

$GLOBALS["lang"]['Exclude Tcp Ports'] = 'A Tcp portok kizárása';

$GLOBALS["lang"]['Exclude UDP Ports'] = 'UDP-portok kizárása';

$GLOBALS["lang"]['exclude_udp_ports'] = 'Udp portok kizárása';

$GLOBALS["lang"]['Exclude Udp Ports'] = 'Udp portok kizárása';

$GLOBALS["lang"]['Exclude these IP addresses from being Nmap scanned.'] = 'Kivéve ezeket az IP-címeket a szkennelésből.';

$GLOBALS["lang"]['Excluded'] = 'Kizárva';

$GLOBALS["lang"]['exclusion_reasons'] = 'Kizárási okok';

$GLOBALS["lang"]['Exclusion Reasons'] = 'Kizárási okok';

$GLOBALS["lang"]['executable'] = 'Végrehajtható';

$GLOBALS["lang"]['Executable'] = 'Végrehajtható';

$GLOBALS["lang"]['executable_id'] = 'Végrehajtható azonosító';

$GLOBALS["lang"]['Executable ID'] = 'Végrehajtható azonosító';

$GLOBALS["lang"]['executables'] = 'Végrehajtható';

$GLOBALS["lang"]['Executables'] = 'Végrehajtható';

$GLOBALS["lang"]['Execute'] = 'Végrehajtás';

$GLOBALS["lang"]['Executing'] = 'Végrehajtás';

$GLOBALS["lang"]['exemption_reason'] = 'Mentesség indoka';

$GLOBALS["lang"]['Exemption Reason'] = 'Mentesség indoka';

$GLOBALS["lang"]['Existing Building'] = 'Meglévő épület';

$GLOBALS["lang"]['Existing Floor'] = 'Meglévő szint';

$GLOBALS["lang"]['Existing Room'] = 'Meglévő szoba';

$GLOBALS["lang"]['Existing Row'] = 'Meglévő sor';

$GLOBALS["lang"]['expire_date'] = 'Lejárat dátuma';

$GLOBALS["lang"]['Expire Date'] = 'Lejárat dátuma';

$GLOBALS["lang"]['expire_minutes'] = 'A jegyzőkönyv lejárta';

$GLOBALS["lang"]['Expire Minutes'] = 'A jegyzőkönyv lejárta';

$GLOBALS["lang"]['expires'] = 'Lejárati idő';

$GLOBALS["lang"]['Expires'] = 'Lejárati idő';

$GLOBALS["lang"]['expiry_date'] = 'Lejárat dátuma';

$GLOBALS["lang"]['Expiry Date'] = 'Lejárat dátuma';

$GLOBALS["lang"]['exploit_maturity'] = 'Exploit lejárat';

$GLOBALS["lang"]['Exploit Maturity'] = 'Exploit lejárat';

$GLOBALS["lang"]['Export'] = 'Export';

$GLOBALS["lang"]['Export by Device'] = 'Kivitel eszközzel';

$GLOBALS["lang"]['Export by Policy'] = 'Politika szerinti kivitel';

$GLOBALS["lang"]['Export data to'] = 'Az adatok exportálása';

$GLOBALS["lang"]['expose'] = 'Megjelenés';

$GLOBALS["lang"]['Expose'] = 'Megjelenés';

$GLOBALS["lang"]['External'] = 'Külső';

$GLOBALS["lang"]['External Field Name'] = 'Külső mező neve';

$GLOBALS["lang"]['External Field Type'] = 'Külső mező típusa';

$GLOBALS["lang"]['external_ident'] = 'Külső azonosító';

$GLOBALS["lang"]['External Ident'] = 'Külső azonosító';

$GLOBALS["lang"]['external_link'] = 'Külső kapcsolat';

$GLOBALS["lang"]['External Link'] = 'Külső kapcsolat';

$GLOBALS["lang"]['extra_columns'] = 'Extra oszlopok';

$GLOBALS["lang"]['Extra Columns'] = 'Extra oszlopok';

$GLOBALS["lang"]['Extra and more verbose logging is generated for troubleshooting.'] = 'Extra és több verbózus naplózást generálnak a hibaelhárításhoz.';

$GLOBALS["lang"]['FAQ'] = 'GYIK';

$GLOBALS["lang"]['FQDN'] = 'FQDN';

$GLOBALS["lang"]['FW Revision'] = 'FW felülvizsgálata';

$GLOBALS["lang"]['Fail'] = 'Hiba';

$GLOBALS["lang"]['Failed'] = 'Nem sikerült';

$GLOBALS["lang"]['Failed Severity'] = 'Nem sikerült súlyosság';

$GLOBALS["lang"]['Falkland Islands (Malvinas)'] = 'Falkland-szigetek (Malvinas)';

$GLOBALS["lang"]['Family'] = 'Család';

$GLOBALS["lang"]['Faroe Islands'] = 'Feröer szigetek';

$GLOBALS["lang"]['Features'] = 'Jellemzők';

$GLOBALS["lang"]['February'] = 'Február';

$GLOBALS["lang"]['field'] = 'mező';

$GLOBALS["lang"]['Field'] = 'mező';

$GLOBALS["lang"]['field_id'] = 'mező';

$GLOBALS["lang"]['Field ID'] = 'mező';

$GLOBALS["lang"]['Field Name'] = 'Mező neve';

$GLOBALS["lang"]['Field Type'] = 'Mező típusa';

$GLOBALS["lang"]['Fields'] = 'Területek';

$GLOBALS["lang"]['fields'] = 'Területek';

$GLOBALS["lang"]['Fiji the Fiji Islands'] = 'Fidzsi-szigetek';

$GLOBALS["lang"]['File'] = 'Fájl';

$GLOBALS["lang"]['File Import'] = 'Fájl importálása';

$GLOBALS["lang"]['File Input'] = 'Fájl bemenet';

$GLOBALS["lang"]['file_name'] = 'Fájl neve';

$GLOBALS["lang"]['File Name'] = 'Fájl neve';

$GLOBALS["lang"]['file_size'] = 'Fájl mérete';

$GLOBALS["lang"]['File Size'] = 'Fájl mérete';

$GLOBALS["lang"]['filename'] = 'Fájlnév';

$GLOBALS["lang"]['Filename'] = 'Fájlnév';

$GLOBALS["lang"]['files'] = 'Fájlok';

$GLOBALS["lang"]['Files'] = 'Fájlok';

$GLOBALS["lang"]['files_id'] = 'Fájlazonosító';

$GLOBALS["lang"]['Files ID'] = 'Fájlazonosító';

$GLOBALS["lang"]['filter'] = 'Szűrő';

$GLOBALS["lang"]['Filter'] = 'Szűrő';

$GLOBALS["lang"]['filtered'] = 'Szűrve';

$GLOBALS["lang"]['Filtered'] = 'Szűrve';

$GLOBALS["lang"]['Finland'] = 'Finnország';

$GLOBALS["lang"]['Firewall'] = 'Tűzfal';

$GLOBALS["lang"]['firewall_rule'] = 'Tűzfal szabály';

$GLOBALS["lang"]['Firewall Rule'] = 'Tűzfal szabály';

$GLOBALS["lang"]['firmware'] = 'Firmware';

$GLOBALS["lang"]['Firmware'] = 'Firmware';

$GLOBALS["lang"]['firmware_revision'] = 'A szoftverek felülvizsgálata';

$GLOBALS["lang"]['Firmware Revision'] = 'A szoftverek felülvizsgálata';

$GLOBALS["lang"]['First Name'] = 'Keresztnév';

$GLOBALS["lang"]['first_run'] = 'Első futás';

$GLOBALS["lang"]['First Run'] = 'Első futás';

$GLOBALS["lang"]['first_seen'] = 'Első megtekintés';

$GLOBALS["lang"]['First Seen'] = 'Első megtekintés';

$GLOBALS["lang"]['FirstWave'] = 'FirstWave';

$GLOBALS["lang"]['Fix'] = 'Javítás';

$GLOBALS["lang"]['Fixed'] = 'Rögzített';

$GLOBALS["lang"]['Floor'] = 'Padló';

$GLOBALS["lang"]['Follow any of the links below and discover how to use Open-AudIT to find out <b>Whats On Your Network?</b>'] = 'Kövesse az alábbi linkeket, és fedezze fel, hogyan kell használni az Open- AudIT, hogy megtudja, <b>Mi van a hálózatodon?</b>';

$GLOBALS["lang"]['For a seed discovery, should I only discover IPs in the private IP address space.'] = 'Egy mag felfedezés, ha csak felfedezni IP-ek a privát IP címtér.';

$GLOBALS["lang"]['For a seed discovery, should I only discover IPs on the chosen subnet.'] = 'Egy mag felfedezés, ha csak felfedezni IP a kiválasztott alhálózat.';

$GLOBALS["lang"]['For a seed discovery, should I ping the subnet before running the discovery.'] = 'Egy mag felfedezés, kellene pingelni az alhálót, mielőtt fut a felfedezés.';

$GLOBALS["lang"]['For advanced entry of a raw SQL query. As per Queries, you must include <code>WHERE @filter AND<code> in your SQL.'] = 'Egy nyers SQL lekérdezéshez. Mint egy lekérdezés, meg kell tartalmaznia <code>WHERE @filter AND<code> in your SQL.</code></code>';

$GLOBALS["lang"]['For licenses that are not perpetual, when does the license expire.'] = 'A nem állandó licencek mikor járnak le.';

$GLOBALS["lang"]['form_factor'] = 'Formatényező';

$GLOBALS["lang"]['Form Factor'] = 'Formatényező';

$GLOBALS["lang"]['format'] = 'Formátum';

$GLOBALS["lang"]['Format'] = 'Formátum';

$GLOBALS["lang"]['fqdn'] = 'Fqdn';

$GLOBALS["lang"]['Fqdn'] = 'Fqdn';

$GLOBALS["lang"]['France, French Republic'] = 'Franciaország, Franciaország';

$GLOBALS["lang"]['free'] = 'Ingyenes';

$GLOBALS["lang"]['Free'] = 'Ingyenes';

$GLOBALS["lang"]['French'] = 'Francia';

$GLOBALS["lang"]['French Guiana'] = 'Francia Guyana';

$GLOBALS["lang"]['French Polynesia'] = 'Francia Polinézia';

$GLOBALS["lang"]['French Southern Territories'] = 'Francia déli területek';

$GLOBALS["lang"]['Frequently Asked Questions'] = 'Gyakran ismételt kérdések';

$GLOBALS["lang"]['Friday'] = 'Péntek';

$GLOBALS["lang"]['From 100 Devices'] = '100 eszköztől';

$GLOBALS["lang"]['From 500 Devices'] = '500 eszközből';

$GLOBALS["lang"]['full_name'] = 'Teljes név';

$GLOBALS["lang"]['Full Name'] = 'Teljes név';

$GLOBALS["lang"]['function'] = 'Funkció';

$GLOBALS["lang"]['Function'] = 'Funkció';

$GLOBALS["lang"]['GROUP BY'] = 'CSOPORT';

$GLOBALS["lang"]['Gabon'] = 'Gabon';

$GLOBALS["lang"]['Gambia the'] = 'Gambia a';

$GLOBALS["lang"]['gateway'] = 'Átjáró';

$GLOBALS["lang"]['Gateway'] = 'Átjáró';

$GLOBALS["lang"]['gateways'] = 'Átjárók';

$GLOBALS["lang"]['Gateways'] = 'Átjárók';

$GLOBALS["lang"]['Generated By'] = 'Generated by';

$GLOBALS["lang"]['geo'] = 'Geo';

$GLOBALS["lang"]['Geo'] = 'Geo';

$GLOBALS["lang"]['Georgia'] = 'Grúzia';

$GLOBALS["lang"]['German'] = 'Német';

$GLOBALS["lang"]['Germany'] = 'Németország';

$GLOBALS["lang"]['Get Lat/Long'] = 'Lat / Long';

$GLOBALS["lang"]['Get Started'] = 'Kezdés';

$GLOBALS["lang"]['Get a Free License'] = 'Ingyenes licenc';

$GLOBALS["lang"]['Getting Started'] = 'Kezdődik';

$GLOBALS["lang"]['Ghana'] = 'Ghána';

$GLOBALS["lang"]['Gibraltar'] = 'Gibraltár';

$GLOBALS["lang"]['Global Discovery Options'] = 'Globális felfedezés lehetőségei';

$GLOBALS["lang"]['Go'] = 'Menj!';

$GLOBALS["lang"]['Google Compute Fields'] = 'Google Számítómezők';

$GLOBALS["lang"]['Google Maps API Key'] = 'Google Térkép API Kulcs';

$GLOBALS["lang"]['Greater Than'] = 'Nagyobb, mint';

$GLOBALS["lang"]['Greater Than or Equals'] = 'Nagyobb mint vagy egyenlő';

$GLOBALS["lang"]['Greece'] = 'Görögország';

$GLOBALS["lang"]['Green Query'] = 'Zöld lekérdezés';

$GLOBALS["lang"]['Greenland'] = 'Grönland';

$GLOBALS["lang"]['Grenada'] = 'Grenada';

$GLOBALS["lang"]['Group'] = 'Csoport';

$GLOBALS["lang"]['group_by'] = 'Csoport';

$GLOBALS["lang"]['Group By'] = 'Csoport';

$GLOBALS["lang"]['group_id'] = 'Csoport';

$GLOBALS["lang"]['Group ID'] = 'Csoport';

$GLOBALS["lang"]['groups'] = 'Csoportok';

$GLOBALS["lang"]['Groups'] = 'Csoportok';

$GLOBALS["lang"]['Guadeloupe'] = 'Guadeloupe';

$GLOBALS["lang"]['Guam'] = 'Guam';

$GLOBALS["lang"]['Guatemala'] = 'Guatemala';

$GLOBALS["lang"]['Guernsey'] = 'Guernsey';

$GLOBALS["lang"]['guest_device_id'] = 'Vendég eszköz azonosítója';

$GLOBALS["lang"]['Guest Device ID'] = 'Vendég eszköz azonosítója';

$GLOBALS["lang"]['guid'] = 'Guid';

$GLOBALS["lang"]['Guid'] = 'Guid';

$GLOBALS["lang"]['Guinea'] = 'Guinea';

$GLOBALS["lang"]['Guinea-Bissau'] = 'Guinea- Bissau';

$GLOBALS["lang"]['Guyana'] = 'Guyana';

$GLOBALS["lang"]['HP-UX'] = 'HP- UX';

$GLOBALS["lang"]['HW Revision'] = 'HW felülvizsgálat';

$GLOBALS["lang"]['Haiti'] = 'Haiti';

$GLOBALS["lang"]['hard_drive_index'] = 'Kemény meghajtási index';

$GLOBALS["lang"]['Hard Drive Index'] = 'Kemény meghajtási index';

$GLOBALS["lang"]['hardware_revision'] = 'Hardverfelülvizsgálat';

$GLOBALS["lang"]['Hardware Revision'] = 'Hardverfelülvizsgálat';

$GLOBALS["lang"]['Has this policy been applied in this organization.'] = 'Ezt a politikát alkalmazták ebben a szervezetben?';

$GLOBALS["lang"]['hash'] = 'Hash';

$GLOBALS["lang"]['Hash'] = 'Hash';

$GLOBALS["lang"]['Head'] = 'Fej';

$GLOBALS["lang"]['Heard Island and McDonald Islands'] = 'Heard-sziget és McDonald-szigetek';

$GLOBALS["lang"]['height'] = 'Magasság';

$GLOBALS["lang"]['Height'] = 'Magasság';

$GLOBALS["lang"]['Height in RU'] = 'Magasság a VT-ben';

$GLOBALS["lang"]['Help'] = 'Segítség';

$GLOBALS["lang"]['Help and Frequently Asked Questions'] = 'Súgó és gyakran ismételt kérdések';

$GLOBALS["lang"]['high'] = 'Magas';

$GLOBALS["lang"]['High'] = 'Magas';

$GLOBALS["lang"]['High Availability'] = 'Magas elérhetőség';

$GLOBALS["lang"]['Holy See (Vatican City State)'] = 'Szentszék (Vatikáni Városállam)';

$GLOBALS["lang"]['Home'] = 'Tartalom';

$GLOBALS["lang"]['home'] = 'Tartalom';

$GLOBALS["lang"]['Home Area Network'] = 'Beltéri hálózat';

$GLOBALS["lang"]['Honduras'] = 'Honduras';

$GLOBALS["lang"]['Hong Kong'] = 'Hongkong';

$GLOBALS["lang"]['host'] = 'Host';

$GLOBALS["lang"]['Host'] = 'Host';

$GLOBALS["lang"]['hostname'] = 'Hostname';

$GLOBALS["lang"]['Hostname'] = 'Hostname';

$GLOBALS["lang"]['hour'] = 'Óra';

$GLOBALS["lang"]['Hour'] = 'Óra';

$GLOBALS["lang"]['How and Why is Open-AudIT More Secure'] = 'Hogyan és miért biztonságos az Open- AudIT';

$GLOBALS["lang"]['How long did the command take to execute.'] = 'Mennyi ideig tartott a parancs végrehajtása.';

$GLOBALS["lang"]['How long should Nmap wait for a response, per device.'] = 'Mennyi ideig kell Nmap várni a választ, egy eszköz.';

$GLOBALS["lang"]['How many circuit feed to this rack.'] = 'Hány áramkör van ebben a rekeszben.';

$GLOBALS["lang"]['How many policies results in a fail.'] = 'Hány politika vezet kudarcot.';

$GLOBALS["lang"]['How many policies results in a pass.'] = 'Hány politika vezet át?';

$GLOBALS["lang"]['How many power sockets in this rack.'] = 'Hány konnektor van ebben az állványban?';

$GLOBALS["lang"]['How many rack units in height is this rack.'] = 'Hány állványegység van ebben a állványban?';

$GLOBALS["lang"]['How often should the collector ask the server for a task.'] = 'Milyen gyakran kell a gyűjtő kérni a szerver egy feladatot.';

$GLOBALS["lang"]['How should we select devices to be integrated (using an Attribute, Query or a Group).'] = 'Hogyan válasszuk ki az integrálandó eszközöket (attribútum, lekérdezés vagy csoport használatával).';

$GLOBALS["lang"]['How the vulnerability is exploited (e.g., Network, Adjacent, Local, Physical).'] = 'A sebezhetőség kihasználásának módja (pl. Hálózat, Administration, Helyi, Fizikai).';

$GLOBALS["lang"]['How to compare'] = 'Hogyan kell összehasonlítani';

$GLOBALS["lang"]['Human-readable explanation of the vulnerability.'] = 'Emberileg olvasható magyarázat a sebezhetőségre.';

$GLOBALS["lang"]['Hungary'] = 'Magyarország';

$GLOBALS["lang"]['hw_cpe'] = 'Hw Cpe';

$GLOBALS["lang"]['Hw Cpe'] = 'Hw Cpe';

$GLOBALS["lang"]['hyperthreading'] = 'Hyperthread';

$GLOBALS["lang"]['Hyperthreading'] = 'Hyperthread';

$GLOBALS["lang"]['I have read the EULA.'] = 'Olvastam az EULA-t.';

$GLOBALS["lang"]['id'] = 'Azonosító';

$GLOBALS["lang"]['ID'] = 'ID';

$GLOBALS["lang"]['IF'] = 'IF';

$GLOBALS["lang"]['IOS Version'] = 'IOS verzió';

$GLOBALS["lang"]['IP'] = 'IP';

$GLOBALS["lang"]['ip'] = 'IP';

$GLOBALS["lang"]['IP Address'] = 'IP-cím';

$GLOBALS["lang"]['IP Addresses'] = 'IP címek';

$GLOBALS["lang"]['IP Last Seen'] = 'IP last Seen';

$GLOBALS["lang"]['IP Set By'] = 'IP beállítás';

$GLOBALS["lang"]['ISO 27001 only.'] = 'Kizárólag ISO 27001.';

$GLOBALS["lang"]['Iceland'] = 'Izland';

$GLOBALS["lang"]['icon'] = 'Ikon';

$GLOBALS["lang"]['Icon'] = 'Ikon';

$GLOBALS["lang"]['Icon and Text'] = 'Ikon és szöveg';

$GLOBALS["lang"]['Icon only, text only or icon and text.'] = 'Csak ikon, csak szöveg vagy ikon és szöveg.';

$GLOBALS["lang"]['id_internal'] = 'Belső azonosító';

$GLOBALS["lang"]['Id Internal'] = 'Belső azonosító';

$GLOBALS["lang"]['id_number'] = 'Azonosító szám';

$GLOBALS["lang"]['Id Number'] = 'Azonosító szám';

$GLOBALS["lang"]['identification'] = 'Azonosítás';

$GLOBALS["lang"]['Identification'] = 'Azonosítás';

$GLOBALS["lang"]['If'] = 'Ha';

$GLOBALS["lang"]['If a port responds with filtered, should we consider it available.'] = 'Ha egy port szűréssel reagál, akkor azt elérhetőnek kell tekintenünk.';

$GLOBALS["lang"]['If a port responds with open|filtered, should we consider it available.'] = 'Ha egy kikötő nyitott 124-gyel reagál, szűrjük le, ha úgy vesszük, hogy elérhető.';

$GLOBALS["lang"]['If a remote device does not exist in the Open-AudIT selected devices, should we delete it from the external system.'] = 'Ha egy távoli eszköz nem létezik az Open- AudIT kiválasztott eszközökben, töröljük a külső rendszerből.';

$GLOBALS["lang"]['If an Open-AudIT device has been changed, should we update the external system.'] = 'Ha egy Open- AudIT eszközt megváltoztattak, frissítsük a külső rendszert.';

$GLOBALS["lang"]['If an Open-AudIT device is not on the external system, should we create it.'] = 'Ha egy Open- AudIT eszköz nincs a külső rendszeren, akkor készítsük el.';

$GLOBALS["lang"]['If an agent reports its primary IP is in this subnet, perform the actions.'] = 'Ha egy ügynök jelenti az elsődleges IP-jét ebben az alhálózatban, végezze el a műveleteket.';

$GLOBALS["lang"]['If any of these (comma seperated, no spaces) ports are detected, assume SSH is running on them and use them for auditing. No need to add this port to the Custom TCP ports - it will be added automatically.'] = 'Ha ezek közül bármelyik (vessző alakú, szóközök nélküli) portot észlelnek, feltételezve, hogy az SSH fut rajtuk, és azokat ellenőrzési célokra használja. Nem kell ezt a portot hozzáadni a Custom TCP portokhoz - automatikusan hozzá lesz adva.';

$GLOBALS["lang"]['If set, holds a JSON array of specific device columns this user has chosen to see, other than the configuration default.'] = 'Ha be van állítva, egy JSON tömbnyi speciális eszközoszlopot tart, amelyet ez a felhasználó választott meg, a konfigurációs alapértelmezésen kívül.';

$GLOBALS["lang"]['If the agent OS family (case insensitive) contains this string, perform the actions.'] = 'Ha az ügynök OS család (esetérzéketlen) tartalmazza ezt a sztringet, végezze el a cselekvéseket.';

$GLOBALS["lang"]['If the following conditions are met:<br><ul><li>a Role has an assigned ad_group</li><li>an Org has an assigned ad_group</li><li>an LDAP Server has use_roles set to y</li><li>a user exists in LDAP (be it Active Directory or OpenLDAP) and is in the assigned ad_groups</li></ul>That user can log on to Open-AudIT without an account in Open-AudIT needing to be created. Open-AudIT will query the LDAP in question and if the user is in the required groups but not in Open-AudIT, their user attributes (name, full name, email,  roles, orgs, etc) within Open-AudIT will be automatically populated and they will be logged on.<br> <br>'] = 'Ha a következő feltételek teljesülnek:<br/><ul><li>a Role van egy kijelölt ad _ group</li><li>egy Org van egy kijelölt ad _ group</li><li>LDAP A szerver felhasználja az y</li><li>a felhasználó létezik LDAP (legyen ez Aktív Directory vagy OpenLDAP) és a kijelölt ad _ groups</li></ul>Ez a felhasználó bejelentkezhet az Open- AudIT-re anélkül, hogy az Open- AudIT fiókját létre kellene hozni. Az Open- AudIT lekérdezi a kérdéses LDAP-ot, és ha a felhasználó a szükséges csoportokban van, de nem az Open- AudIT-ben, akkor a felhasználói attribútumok (név, teljes név, e-mail, szerepek, orgok, stb.) az Open- AudIT-on belül automatikusan elnépesednek és bejelentkeznek.<br/> <br/>';

$GLOBALS["lang"]['If the user logging on to Open-AudIT does not have the access to search LDAP, you can use another account which does have this access.'] = 'Ha a felhasználó bejelentkezik az Open- AudIT-ra, nincs hozzáférése az LDAP kereséséhez, akkor használhat egy másik olyan fiókot, amelynek van ilyen hozzáférése.';

$GLOBALS["lang"]['If this many or more minutes have passed since the device contacted the server, perform the actions.'] = 'Ha ez a sok vagy több perc telt el azóta, hogy az eszköz kapcsolatba lépett a szerverrel, végezze el a műveleteket.';

$GLOBALS["lang"]['If you choose a Collector, it will be scheduled to execute on the next 5 minute boundary.'] = 'Ha egy Gyűjtőt választasz, a következő 5 perces határnál kell végrehajtani.';

$GLOBALS["lang"]['ifadminstatus'] = 'Adminisztratív státus';

$GLOBALS["lang"]['Ifadminstatus'] = 'Adminisztratív státus';

$GLOBALS["lang"]['iflastchange'] = 'Iflastchange';

$GLOBALS["lang"]['Iflastchange'] = 'Iflastchange';

$GLOBALS["lang"]['Ignored'] = 'Nem';

$GLOBALS["lang"]['image'] = 'Kép';

$GLOBALS["lang"]['Image'] = 'Kép';

$GLOBALS["lang"]['Images'] = 'Képek';

$GLOBALS["lang"]['impact_availability'] = 'Hatási rendelkezésre állás';

$GLOBALS["lang"]['Impact Availability'] = 'Hatási rendelkezésre állás';

$GLOBALS["lang"]['impact_confidentiality'] = 'A hatás bizalmas jellege';

$GLOBALS["lang"]['Impact Confidentiality'] = 'A hatás bizalmas jellege';

$GLOBALS["lang"]['impact_integrity'] = 'Hatásintegritás';

$GLOBALS["lang"]['Impact Integrity'] = 'Hatásintegritás';

$GLOBALS["lang"]['implementation_notes'] = 'Végrehajtási megjegyzések';

$GLOBALS["lang"]['Implementation Notes'] = 'Végrehajtási megjegyzések';

$GLOBALS["lang"]['Import'] = 'Import';

$GLOBALS["lang"]['Import Example Data'] = 'Példa adatok importálása';

$GLOBALS["lang"]['improvement_opportunities'] = 'Javítási lehetőségek';

$GLOBALS["lang"]['Improvement Opportunities'] = 'Javítási lehetőségek';

$GLOBALS["lang"]['In'] = 'In';

$GLOBALS["lang"]['Inactive'] = 'Inaktív';

$GLOBALS["lang"]['Include'] = 'Tartalmazza';

$GLOBALS["lang"]['Incomplete'] = 'Nem teljes';

$GLOBALS["lang"]['Index'] = 'Index';

$GLOBALS["lang"]['India'] = 'India';

$GLOBALS["lang"]['Indonesia'] = 'Indonézia';

$GLOBALS["lang"]['Info'] = 'Információ';

$GLOBALS["lang"]['Informational'] = 'Tájékoztatás';

$GLOBALS["lang"]['initial_size'] = 'Kezdeti méret';

$GLOBALS["lang"]['Initial Size'] = 'Kezdeti méret';

$GLOBALS["lang"]['inode'] = 'Icsomópont';

$GLOBALS["lang"]['Inode'] = 'Icsomópont';

$GLOBALS["lang"]['Input Type'] = 'Bemeneti típus';

$GLOBALS["lang"]['inputs'] = 'Bemenetek';

$GLOBALS["lang"]['Inputs'] = 'Bemenetek';

$GLOBALS["lang"]['Insane'] = 'Őrült.';

$GLOBALS["lang"]['Insert example data and discover all that Open-AudIT can tell you.'] = 'Helyezze be a példás adatokat, és fedezzen fel mindent, amit az Open- AudIT adhat.';

$GLOBALS["lang"]['Insert your Purchased license Key'] = 'A Vásárolt engedély Kulcs';

$GLOBALS["lang"]['install'] = 'Telepítés';

$GLOBALS["lang"]['Install'] = 'Telepítés';

$GLOBALS["lang"]['install_date'] = 'Dátum telepítése';

$GLOBALS["lang"]['Install Date'] = 'Dátum telepítése';

$GLOBALS["lang"]['install_directory'] = 'A könyvtár telepítése';

$GLOBALS["lang"]['Install Directory'] = 'A könyvtár telepítése';

$GLOBALS["lang"]['Install OpenScap if required'] = 'OpenScap telepítése, ha szükséges';

$GLOBALS["lang"]['install_source'] = 'A forrás telepítése';

$GLOBALS["lang"]['Install Source'] = 'A forrás telepítése';

$GLOBALS["lang"]['installed_by'] = 'Telepített';

$GLOBALS["lang"]['Installed By'] = 'Telepített';

$GLOBALS["lang"]['installed_on'] = 'Telepítve';

$GLOBALS["lang"]['Installed On'] = 'Telepítve';

$GLOBALS["lang"]['Installing on Linux'] = 'Telepítés Linuxra';

$GLOBALS["lang"]['Installing on MacOS'] = 'MacOS telepítése';

$GLOBALS["lang"]['Installing on Windows'] = 'Telepítés a Windows';

$GLOBALS["lang"]['instance'] = 'Elsőfokú Bíróság';

$GLOBALS["lang"]['Instance'] = 'Elsőfokú Bíróság';

$GLOBALS["lang"]['instance_ident'] = 'Elsőfokú Bíróság';

$GLOBALS["lang"]['Instance Ident'] = 'Elsőfokú Bíróság';

$GLOBALS["lang"]['instance_options'] = 'Az Elsőfokú Bíróság álláspontja';

$GLOBALS["lang"]['Instance Options'] = 'Az Elsőfokú Bíróság álláspontja';

$GLOBALS["lang"]['instance_provider'] = 'Elsőfokú Bíróság';

$GLOBALS["lang"]['Instance Provider'] = 'Elsőfokú Bíróság';

$GLOBALS["lang"]['instance_reservation_ident'] = 'Előzetes foglalás Azonosító';

$GLOBALS["lang"]['Instance Reservation Ident'] = 'Előzetes foglalás Azonosító';

$GLOBALS["lang"]['instance_state'] = 'Elsőfokú Bíróság';

$GLOBALS["lang"]['Instance State'] = 'Elsőfokú Bíróság';

$GLOBALS["lang"]['instance_tags'] = 'Előzetes címkék';

$GLOBALS["lang"]['Instance Tags'] = 'Előzetes címkék';

$GLOBALS["lang"]['instance_type'] = 'Érvényesség típusa';

$GLOBALS["lang"]['Instance Type'] = 'Érvényesség típusa';

$GLOBALS["lang"]['Integer'] = 'Integer';

$GLOBALS["lang"]['Integration'] = 'Integráció';

$GLOBALS["lang"]['integrations'] = 'Integráció';

$GLOBALS["lang"]['Integrations'] = 'Integráció';

$GLOBALS["lang"]['integrations_id'] = 'Integrációs azonosító';

$GLOBALS["lang"]['Integrations ID'] = 'Integrációs azonosító';

$GLOBALS["lang"]['integrations_log'] = 'Integrációs napló';

$GLOBALS["lang"]['Integrations Log'] = 'Integrációs napló';

$GLOBALS["lang"]['interface'] = 'Interfész';

$GLOBALS["lang"]['Interface'] = 'Interfész';

$GLOBALS["lang"]['interface_id'] = 'Interfészek azonosítója';

$GLOBALS["lang"]['Interface ID'] = 'Interfészek azonosítója';

$GLOBALS["lang"]['interface_type'] = 'Interfész típusa';

$GLOBALS["lang"]['Interface Type'] = 'Interfész típusa';

$GLOBALS["lang"]['Internal'] = 'Belső';

$GLOBALS["lang"]['Internal Field Name'] = 'Belső mező neve';

$GLOBALS["lang"]['Internal ID'] = 'Belső azonosító';

$GLOBALS["lang"]['Internal JSON array of valid access tokens for this user.'] = 'Belső JSON tömb érvényes hozzáférési zsetonok a felhasználó.';

$GLOBALS["lang"]['Introduction'] = 'Bevezetés';

$GLOBALS["lang"]['invoice'] = 'Számla';

$GLOBALS["lang"]['Invoice'] = 'Számla';

$GLOBALS["lang"]['invoice_id'] = 'Azonosító';

$GLOBALS["lang"]['Invoice ID'] = 'Azonosító';

$GLOBALS["lang"]['invoice_item'] = 'Számlatulajdonos';

$GLOBALS["lang"]['Invoice Item'] = 'Számlatulajdonos';

$GLOBALS["lang"]['ios_version'] = 'Ios Version';

$GLOBALS["lang"]['Ios Version'] = 'Ios Version';

$GLOBALS["lang"]['ip_address_external_a'] = 'Ip Cím Külső A';

$GLOBALS["lang"]['Ip Address External A'] = 'Ip Cím Külső A';

$GLOBALS["lang"]['ip_address_external_b'] = 'Ip Cím Külső B';

$GLOBALS["lang"]['Ip Address External B'] = 'Ip Cím Külső B';

$GLOBALS["lang"]['ip_address_internal_a'] = 'Ip Cím Belső A';

$GLOBALS["lang"]['Ip Address Internal A'] = 'Ip Cím Belső A';

$GLOBALS["lang"]['ip_address_internal_b'] = 'Ip Cím Belső B';

$GLOBALS["lang"]['Ip Address Internal B'] = 'Ip Cím Belső B';

$GLOBALS["lang"]['ip_all_count'] = 'Ip Minden gróf';

$GLOBALS["lang"]['Ip All Count'] = 'Ip Minden gróf';

$GLOBALS["lang"]['ip_audited_count'] = 'Ip Ellenőrzött gróf';

$GLOBALS["lang"]['Ip Audited Count'] = 'Ip Ellenőrzött gróf';

$GLOBALS["lang"]['ip_discovered_count'] = 'Ip Felfedezett gróf';

$GLOBALS["lang"]['Ip Discovered Count'] = 'Ip Felfedezett gróf';

$GLOBALS["lang"]['ip_enabled'] = 'Ip bekapcsolva';

$GLOBALS["lang"]['Ip Enabled'] = 'Ip bekapcsolva';

$GLOBALS["lang"]['ip_responding_count'] = 'Ip válaszszám';

$GLOBALS["lang"]['Ip Responding Count'] = 'Ip válaszszám';

$GLOBALS["lang"]['ip_scanned_count'] = 'Ip szkennelt gróf';

$GLOBALS["lang"]['Ip Scanned Count'] = 'Ip szkennelt gróf';

$GLOBALS["lang"]['Iran'] = 'Irán';

$GLOBALS["lang"]['Iraq'] = 'Irak';

$GLOBALS["lang"]['Ireland'] = 'Írország';

$GLOBALS["lang"]['Is FRU'] = 'A FRU';

$GLOBALS["lang"]['is_fru'] = 'Fru';

$GLOBALS["lang"]['Is Fru'] = 'Fru';

$GLOBALS["lang"]['Is the NMIS server local (on this Open-AudIT server) or remote?'] = 'Az NMIS szerver helyi (ezen az Open- AudIT szerveren) vagy távoli?';

$GLOBALS["lang"]['Is this account active? If set to <code>n</code>, the user cannot logon.'] = 'Aktív ez a számla? Ha be van állítva <code>n</code>, a felhasználó nem tud bejelentkezni.';

$GLOBALS["lang"]['Is this query restricted to licensed customers.'] = 'Ez a lekérdezés az engedéllyel rendelkező ügyfelekre korlátozódik?';

$GLOBALS["lang"]['Is this task enabled (y/n).'] = 'Ez a feladat be van kapcsolva (y / n).';

$GLOBALS["lang"]['Isle of Man'] = 'Man-sziget';

$GLOBALS["lang"]['Israel'] = 'Izrael';

$GLOBALS["lang"]['Issue'] = 'Kiállítás';

$GLOBALS["lang"]['issuer'] = 'Kibocsátó';

$GLOBALS["lang"]['Issuer'] = 'Kibocsátó';

$GLOBALS["lang"]['issuer_name'] = 'Kibocsátó neve';

$GLOBALS["lang"]['Issuer Name'] = 'Kibocsátó neve';

$GLOBALS["lang"]['Issues'] = 'Kérdések';

$GLOBALS["lang"]['Italy'] = 'Olaszország';

$GLOBALS["lang"]['Items not in Baseline'] = 'Kiindulási tételek';

$GLOBALS["lang"]['JSON'] = 'JSON';

$GLOBALS["lang"]['JSON to Import'] = 'JSON importáláshoz';

$GLOBALS["lang"]['Jamaica'] = 'Jamaika';

$GLOBALS["lang"]['January'] = 'január';

$GLOBALS["lang"]['Japan'] = 'Japán';

$GLOBALS["lang"]['Jersey'] = 'Jersey';

$GLOBALS["lang"]['Jordan'] = 'Jordan';

$GLOBALS["lang"]['July'] = 'július';

$GLOBALS["lang"]['June'] = 'Június';

$GLOBALS["lang"]['Kazakhstan'] = 'Kazahsztán';

$GLOBALS["lang"]['Kenya'] = 'Kenya';

$GLOBALS["lang"]['kernel_version'] = 'Kernel verzió';

$GLOBALS["lang"]['Kernel Version'] = 'Kernel verzió';

$GLOBALS["lang"]['Key'] = 'Kulcs';

$GLOBALS["lang"]['Key Password (optional)'] = 'Kulcsjelszó (nem kötelező)';

$GLOBALS["lang"]['keys'] = 'Kulcsok';

$GLOBALS["lang"]['Keys'] = 'Kulcsok';

$GLOBALS["lang"]['Kiribati'] = 'Kiribati';

$GLOBALS["lang"]['Korea'] = 'Korea';

$GLOBALS["lang"]['Kuwait'] = 'Kuvait';

$GLOBALS["lang"]['Kyrgyz Republic'] = 'Kirgiz Köztársaság';

$GLOBALS["lang"]['lang'] = 'Lang';

$GLOBALS["lang"]['Lang'] = 'Lang';

$GLOBALS["lang"]['language'] = 'Nyelv';

$GLOBALS["lang"]['Language'] = 'Nyelv';

$GLOBALS["lang"]['Lao'] = 'Lao!';

$GLOBALS["lang"]['last_changed'] = 'Utolsó módosítás';

$GLOBALS["lang"]['Last Changed'] = 'Utolsó módosítás';

$GLOBALS["lang"]['last_finished'] = 'Utolsó befejezés';

$GLOBALS["lang"]['Last Finished'] = 'Utolsó befejezés';

$GLOBALS["lang"]['last_logon'] = 'Last Logon';

$GLOBALS["lang"]['Last Logon'] = 'Last Logon';

$GLOBALS["lang"]['Last Name'] = 'Vezetéknév';

$GLOBALS["lang"]['last_os_update'] = 'Utolsó frissítések';

$GLOBALS["lang"]['Last Os Update'] = 'Utolsó frissítések';

$GLOBALS["lang"]['last_result'] = 'Utolsó eredmény';

$GLOBALS["lang"]['Last Result'] = 'Utolsó eredmény';

$GLOBALS["lang"]['last_run'] = 'Utolsó futás';

$GLOBALS["lang"]['Last Run'] = 'Utolsó futás';

$GLOBALS["lang"]['last_seen'] = 'Last Seen';

$GLOBALS["lang"]['Last Seen'] = 'Last Seen';

$GLOBALS["lang"]['last_seen_by'] = 'Last Seen By';

$GLOBALS["lang"]['Last Seen By'] = 'Last Seen By';

$GLOBALS["lang"]['last_user'] = 'Utolsó felhasználó';

$GLOBALS["lang"]['Last User'] = 'Utolsó felhasználó';

$GLOBALS["lang"]['lastModified'] = 'Módosítva';

$GLOBALS["lang"]['LastModified'] = 'Módosítva';

$GLOBALS["lang"]['latitude'] = 'Földrajzi szélesség';

$GLOBALS["lang"]['Latitude'] = 'Földrajzi szélesség';

$GLOBALS["lang"]['Latvia'] = 'Lettország';

$GLOBALS["lang"]['Layout'] = 'Elrendezés';

$GLOBALS["lang"]['ldap'] = 'Ldap';

$GLOBALS["lang"]['Ldap'] = 'Ldap';

$GLOBALS["lang"]['ldap_base_dn'] = 'Ldap bázis Dn';

$GLOBALS["lang"]['Ldap Base Dn'] = 'Ldap bázis Dn';

$GLOBALS["lang"]['ldap_dn_account'] = 'Ldap Dn számla';

$GLOBALS["lang"]['Ldap Dn Account'] = 'Ldap Dn számla';

$GLOBALS["lang"]['ldap_dn_password'] = 'Ldap Dn jelszó';

$GLOBALS["lang"]['Ldap Dn Password'] = 'Ldap Dn jelszó';

$GLOBALS["lang"]['Learn About'] = 'Ismerje meg';

$GLOBALS["lang"]['Learn More'] = 'Bővebben';

$GLOBALS["lang"]['lease_expiry_date'] = 'A lízing lejáratának dátuma';

$GLOBALS["lang"]['Lease Expiry Date'] = 'A lízing lejáratának dátuma';

$GLOBALS["lang"]['Lebanon'] = 'Libanon';

$GLOBALS["lang"]['legal_requirements'] = 'Jogi követelmények';

$GLOBALS["lang"]['Legal Requirements'] = 'Jogi követelmények';

$GLOBALS["lang"]['Lesotho'] = 'Lesotho';

$GLOBALS["lang"]['Less Than'] = 'Kevesebb, mint';

$GLOBALS["lang"]['Less Than or Equals'] = 'Kevesebb, mint vagy egyenlő';

$GLOBALS["lang"]['level'] = 'Szint';

$GLOBALS["lang"]['Level'] = 'Szint';

$GLOBALS["lang"]['Level of privileges needed to exploit (None, Low, High).'] = 'A hasznosításhoz szükséges kiváltságok szintje (None, Low, High).';

$GLOBALS["lang"]['Liberia'] = 'Libéria';

$GLOBALS["lang"]['Libyan Arab Jamahiriya'] = 'Líbiai Arab Jamahiriya';

$GLOBALS["lang"]['License'] = 'Jogosítvány';

$GLOBALS["lang"]['License Key'] = 'Engedélykulcs';

$GLOBALS["lang"]['License Required'] = 'Szükséges licenc';

$GLOBALS["lang"]['licenses'] = 'Engedélyek';

$GLOBALS["lang"]['Licenses'] = 'Engedélyek';

$GLOBALS["lang"]['Liechtenstein'] = 'Liechtenstein';

$GLOBALS["lang"]['Like'] = 'Mint';

$GLOBALS["lang"]['limit'] = 'Határérték';

$GLOBALS["lang"]['Limit'] = 'Határérték';

$GLOBALS["lang"]['Limit the query to the first X items.'] = 'Korlátozza a lekérdezést az első X tételre.';

$GLOBALS["lang"]['Limited to 100 rows.'] = '100 sor.';

$GLOBALS["lang"]['line_amount'] = 'Vonalösszeg';

$GLOBALS["lang"]['Line Amount'] = 'Vonalösszeg';

$GLOBALS["lang"]['Line Graph'] = 'Vonalábra';

$GLOBALS["lang"]['line_number_a'] = 'A vonal';

$GLOBALS["lang"]['Line Number A'] = 'A vonal';

$GLOBALS["lang"]['line_number_b'] = 'B vonal';

$GLOBALS["lang"]['Line Number B'] = 'B vonal';

$GLOBALS["lang"]['line_text'] = 'Vonalszöveg';

$GLOBALS["lang"]['Line Text'] = 'Vonalszöveg';

$GLOBALS["lang"]['link'] = 'Kapcsolat';

$GLOBALS["lang"]['Link'] = 'Kapcsolat';

$GLOBALS["lang"]['Link (Advanced)'] = 'Link (Speciális)';

$GLOBALS["lang"]['Linked Files'] = 'Kapcsolt fájlok';

$GLOBALS["lang"]['links'] = 'Linkek';

$GLOBALS["lang"]['Links'] = 'Linkek';

$GLOBALS["lang"]['Links this discovery to the associated cloud (if required). Links to <code>clouds.id</code>.'] = 'Összekapcsolja ezt a felfedezést a kapcsolódó felhővel (ha szükséges). Kapcsolatok <code>clouds.id</code>.';

$GLOBALS["lang"]['Links to <code>discovery_scan_options.id</code>.'] = 'Kapcsolatok <code>discovery_scan_options.id</code>.';

$GLOBALS["lang"]['Links to <code>standards.id</code>'] = 'Kapcsolatok <code>standards.id</code>';

$GLOBALS["lang"]['Links to <standards_policies.id</code>'] = 'Kapcsolatok <standards_policies.id< code=""></standards_policies.id<>';

$GLOBALS["lang"]['Linux'] = 'Linux';

$GLOBALS["lang"]['List'] = 'Lista';

$GLOBALS["lang"]['list_table_format'] = 'A táblázat formátuma';

$GLOBALS["lang"]['List Table Format'] = 'A táblázat formátuma';

$GLOBALS["lang"]['Lithuania'] = 'Litvánia';

$GLOBALS["lang"]['Load Balancing'] = 'Kiegyenlítés betöltése';

$GLOBALS["lang"]['Local'] = 'Helyi';

$GLOBALS["lang"]['Local Area Network'] = 'Helyi területi hálózat';

$GLOBALS["lang"]['local_port'] = 'Helyi kikötő';

$GLOBALS["lang"]['Local Port'] = 'Helyi kikötő';

$GLOBALS["lang"]['Localhost'] = 'Localhost';

$GLOBALS["lang"]['Localisation'] = 'Lokalizáció';

$GLOBALS["lang"]['Location'] = 'Hely';

$GLOBALS["lang"]['Location A'] = 'A hely';

$GLOBALS["lang"]['Location B'] = '"B" hely';

$GLOBALS["lang"]['location_id'] = 'Helyszín azonosító';

$GLOBALS["lang"]['Location ID'] = 'Helyszín azonosító';

$GLOBALS["lang"]['location_id_a'] = 'A helyszín';

$GLOBALS["lang"]['Location ID A'] = 'A helyszín';

$GLOBALS["lang"]['location_id_b'] = 'Személyazonosító szám: B';

$GLOBALS["lang"]['Location ID B'] = 'Személyazonosító szám: B';

$GLOBALS["lang"]['location_latitude'] = 'Földrajzi szélesség';

$GLOBALS["lang"]['Location Latitude'] = 'Földrajzi szélesség';

$GLOBALS["lang"]['location_level'] = 'Helyszín';

$GLOBALS["lang"]['Location Level'] = 'Helyszín';

$GLOBALS["lang"]['location_longitude'] = 'Földrajzi hosszúság';

$GLOBALS["lang"]['Location Longitude'] = 'Földrajzi hosszúság';

$GLOBALS["lang"]['location_rack'] = 'Helyszín Rack';

$GLOBALS["lang"]['Location Rack'] = 'Helyszín Rack';

$GLOBALS["lang"]['location_rack_position'] = 'Helyszín Rack Pozíció';

$GLOBALS["lang"]['Location Rack Position'] = 'Helyszín Rack Pozíció';

$GLOBALS["lang"]['location_rack_size'] = 'Hely Rack mérete';

$GLOBALS["lang"]['Location Rack Size'] = 'Hely Rack mérete';

$GLOBALS["lang"]['location_room'] = 'Helyszín Szoba';

$GLOBALS["lang"]['Location Room'] = 'Helyszín Szoba';

$GLOBALS["lang"]['location_suite'] = 'Helyszín Lakosztály';

$GLOBALS["lang"]['Location Suite'] = 'Helyszín Lakosztály';

$GLOBALS["lang"]['locations'] = 'Helyek';

$GLOBALS["lang"]['Locations'] = 'Helyek';

$GLOBALS["lang"]['Locations in this'] = 'Helyek ebben';

$GLOBALS["lang"]['log'] = 'Log';

$GLOBALS["lang"]['Log'] = 'Log';

$GLOBALS["lang"]['log_format'] = 'Log Format';

$GLOBALS["lang"]['Log Format'] = 'Log Format';

$GLOBALS["lang"]['log_path'] = 'Log Path';

$GLOBALS["lang"]['Log Path'] = 'Log Path';

$GLOBALS["lang"]['log_rotation'] = 'Naplóbejegyzés';

$GLOBALS["lang"]['Log Rotation'] = 'Naplóbejegyzés';

$GLOBALS["lang"]['log_status'] = 'Log status';

$GLOBALS["lang"]['Log Status'] = 'Log status';

$GLOBALS["lang"]['Logical Cores '] = 'Logikai magok ';

$GLOBALS["lang"]['logical_count'] = 'Logikai gróf';

$GLOBALS["lang"]['Logical Count'] = 'Logikai gróf';

$GLOBALS["lang"]['Logout'] = 'Kijelentkezés';

$GLOBALS["lang"]['Logs'] = 'Bejelentkezés';

$GLOBALS["lang"]['longitude'] = 'Földrajzi hosszúság';

$GLOBALS["lang"]['Longitude'] = 'Földrajzi hosszúság';

$GLOBALS["lang"]['low'] = 'Alacsony';

$GLOBALS["lang"]['Low'] = 'Alacsony';

$GLOBALS["lang"]['Lower Case'] = 'Alsó eset';

$GLOBALS["lang"]['Luxembourg'] = 'Luxemburg';

$GLOBALS["lang"]['MAC Address'] = 'MAC-cím';

$GLOBALS["lang"]['MAC Manufacturer'] = 'MAC Gyártó';

$GLOBALS["lang"]['mac'] = 'Mac';

$GLOBALS["lang"]['Mac'] = 'Mac';

$GLOBALS["lang"]['Mac Address'] = 'Mac Cím';

$GLOBALS["lang"]['MacOS'] = 'MacOS';

$GLOBALS["lang"]['Macao'] = 'Makaó';

$GLOBALS["lang"]['Macedonia'] = 'Macedónia';

$GLOBALS["lang"]['Madagascar'] = 'Madagaszkár';

$GLOBALS["lang"]['maintenance_expires'] = 'Karbantartási határidők';

$GLOBALS["lang"]['Maintenance Expires'] = 'Karbantartási határidők';

$GLOBALS["lang"]['Make My Default Dashboard'] = 'Make My Alapértelmezett műszerfal';

$GLOBALS["lang"]['Make this install a Collector'] = 'Ezt telepítse egy Gyűjtő';

$GLOBALS["lang"]['Malawi'] = 'Malawi';

$GLOBALS["lang"]['Malaysia'] = 'Malajzia';

$GLOBALS["lang"]['Maldives'] = 'Maldív-szigetek';

$GLOBALS["lang"]['Mali'] = 'Mali';

$GLOBALS["lang"]['Malta'] = 'Málta';

$GLOBALS["lang"]['Manage'] = 'Kezelés';

$GLOBALS["lang"]['Manage Licenses'] = 'Kezelési engedélyek';

$GLOBALS["lang"]['Manage in NMIS'] = 'Az NMIS kezelése';

$GLOBALS["lang"]['Managed'] = 'Kezelés';

$GLOBALS["lang"]['managed_by'] = 'Kezelte';

$GLOBALS["lang"]['Managed By'] = 'Kezelte';

$GLOBALS["lang"]['Manual Input'] = 'Kézi bemenet';

$GLOBALS["lang"]['Manually set by user, defaults to Production.'] = 'Kézzel beállított felhasználó, alapértelmezés Production.';

$GLOBALS["lang"]['Manually set by user.'] = 'Kézzel beállítva.';

$GLOBALS["lang"]['manufacture_date'] = 'Előállítás időpontja';

$GLOBALS["lang"]['Manufacture Date'] = 'Előállítás időpontja';

$GLOBALS["lang"]['manufacturer'] = 'Gyártó';

$GLOBALS["lang"]['Manufacturer'] = 'Gyártó';

$GLOBALS["lang"]['manufacturer_code'] = 'Gyártó kódja';

$GLOBALS["lang"]['Manufacturer Code'] = 'Gyártó kódja';

$GLOBALS["lang"]['Map'] = 'Térkép';

$GLOBALS["lang"]['maps'] = 'Térképek';

$GLOBALS["lang"]['Maps'] = 'Térképek';

$GLOBALS["lang"]['March'] = 'Március';

$GLOBALS["lang"]['Marshall Islands'] = 'Marshall-szigetek';

$GLOBALS["lang"]['Martinique'] = 'Martinique';

$GLOBALS["lang"]['mask'] = 'Maszk';

$GLOBALS["lang"]['Mask'] = 'Maszk';

$GLOBALS["lang"]['Match'] = 'Gyufa';

$GLOBALS["lang"]['match_options'] = 'Match beállítások';

$GLOBALS["lang"]['Match Options'] = 'Match beállítások';

$GLOBALS["lang"]['match_string'] = 'Match String';

$GLOBALS["lang"]['Match String'] = 'Match String';

$GLOBALS["lang"]['Matching Attribute'] = 'Egyező attribútum';

$GLOBALS["lang"]['maturity_level'] = 'Lejárat';

$GLOBALS["lang"]['Maturity Level'] = 'Lejárat';

$GLOBALS["lang"]['maturity_score'] = 'Lejárat pontszáma';

$GLOBALS["lang"]['Maturity Score'] = 'Lejárat pontszáma';

$GLOBALS["lang"]['Mauritania'] = 'Mauritánia';

$GLOBALS["lang"]['Mauritius'] = 'Mauritius';

$GLOBALS["lang"]['max_file_size'] = 'Maximális fájlméret';

$GLOBALS["lang"]['Max File Size'] = 'Maximális fájlméret';

$GLOBALS["lang"]['Max Length'] = 'Maximális hossz';

$GLOBALS["lang"]['max_size'] = 'Maximális méret';

$GLOBALS["lang"]['Max Size'] = 'Maximális méret';

$GLOBALS["lang"]['May'] = 'Május';

$GLOBALS["lang"]['Mayotte'] = 'Mayotte';

$GLOBALS["lang"]['Measures the likelihood of the vulnerability being attacked, and is based on the current state of exploit techniques, exploit code availability, or active, “in-the-wild” exploitation.'] = 'Méri annak valószínűségét, hogy a sebezhetőséget megtámadják, és a kiaknázási technikák jelenlegi állapotán, a kódok rendelkezésre állásának kihasználásán vagy aktív "a vadonban" történő kiaknázásán alapul.';

$GLOBALS["lang"]['medium'] = 'Közepes';

$GLOBALS["lang"]['Medium'] = 'Közepes';

$GLOBALS["lang"]['members'] = 'Tagok';

$GLOBALS["lang"]['Members'] = 'Tagok';

$GLOBALS["lang"]['memory'] = 'Memória';

$GLOBALS["lang"]['Memory'] = 'Memória';

$GLOBALS["lang"]['memory_count'] = 'Memóriaszám';

$GLOBALS["lang"]['Memory Count'] = 'Memóriaszám';

$GLOBALS["lang"]['memory_slot_count'] = 'Memória vágásszám';

$GLOBALS["lang"]['Memory Slot Count'] = 'Memória vágásszám';

$GLOBALS["lang"]['menu_category'] = 'Menü kategória';

$GLOBALS["lang"]['Menu Category'] = 'Menü kategória';

$GLOBALS["lang"]['menu_display'] = 'Menü megjelenítése';

$GLOBALS["lang"]['Menu Display'] = 'Menü megjelenítése';

$GLOBALS["lang"]['message'] = 'Üzenet';

$GLOBALS["lang"]['Message'] = 'Üzenet';

$GLOBALS["lang"]['meta_last_changed'] = 'Meta utoljára módosítva';

$GLOBALS["lang"]['Meta Last Changed'] = 'Meta utoljára módosítva';

$GLOBALS["lang"]['metric'] = 'Metric';

$GLOBALS["lang"]['Metric'] = 'Metric';

$GLOBALS["lang"]['Metropolitan Area Network'] = 'Nagyvárosi Területhálózat';

$GLOBALS["lang"]['Mexico'] = 'Mexikó';

$GLOBALS["lang"]['Micronesia'] = 'Mikronézia';

$GLOBALS["lang"]['Microsoft Azure Fields'] = 'Microsoft Azure Fields';

$GLOBALS["lang"]['microtime'] = 'Mikroidő';

$GLOBALS["lang"]['Microtime'] = 'Mikroidő';

$GLOBALS["lang"]['minute'] = 'Egy perc.';

$GLOBALS["lang"]['Minute'] = 'Egy perc.';

$GLOBALS["lang"]['Minutes Since last Audit are Greater than'] = 'Jegyzőkönyv Mivel a legutóbbi ellenőrzés nagyobb, mint';

$GLOBALS["lang"]['model'] = 'Minta';

$GLOBALS["lang"]['Model'] = 'Minta';

$GLOBALS["lang"]['model_family'] = 'Minta család';

$GLOBALS["lang"]['Model Family'] = 'Minta család';

$GLOBALS["lang"]['module'] = 'Modul';

$GLOBALS["lang"]['Module'] = 'Modul';

$GLOBALS["lang"]['module_index'] = 'Modulindex';

$GLOBALS["lang"]['Module Index'] = 'Modulindex';

$GLOBALS["lang"]['Modules'] = 'Modulok';

$GLOBALS["lang"]['Moldova'] = 'Moldova';

$GLOBALS["lang"]['Monaco'] = 'Monaco';

$GLOBALS["lang"]['Monday'] = 'Hétfő';

$GLOBALS["lang"]['Mongolia'] = 'Mongólia';

$GLOBALS["lang"]['monitor'] = 'Monitor';

$GLOBALS["lang"]['Monitor'] = 'Monitor';

$GLOBALS["lang"]['Montenegro'] = 'Montenegró';

$GLOBALS["lang"]['month'] = 'Hónap';

$GLOBALS["lang"]['Month'] = 'Hónap';

$GLOBALS["lang"]['Montserrat'] = 'Montserrat';

$GLOBALS["lang"]['Morocco'] = 'Marokkó';

$GLOBALS["lang"]['motherboard'] = 'Alaplap';

$GLOBALS["lang"]['Motherboard'] = 'Alaplap';

$GLOBALS["lang"]['mount_point'] = 'Mount Point';

$GLOBALS["lang"]['Mount Point'] = 'Mount Point';

$GLOBALS["lang"]['mount_type'] = 'Tételtípus';

$GLOBALS["lang"]['Mount Type'] = 'Tételtípus';

$GLOBALS["lang"]['Mozambique'] = 'Mozambik';

$GLOBALS["lang"]['Must Respond to Ping'] = 'Válaszolnia kell a Ping';

$GLOBALS["lang"]['Myanmar'] = 'Mianmar';

$GLOBALS["lang"]['N+1'] = 'N + 1';

$GLOBALS["lang"]['N+M'] = 'N + M';

$GLOBALS["lang"]['N-to-1'] = 'N- to- 1';

$GLOBALS["lang"]['N-to-N'] = 'N- to- N';

$GLOBALS["lang"]['NMIS Business Service'] = 'NMIS Business Service';

$GLOBALS["lang"]['NMIS Customer'] = 'NMIS Ügyfél';

$GLOBALS["lang"]['NMIS Device Options'] = 'NMIS eszközbeállítások';

$GLOBALS["lang"]['NMIS Device Selection'] = 'NMIS eszköz kiválasztása';

$GLOBALS["lang"]['NMIS Field Name'] = 'NMIS mező neve';

$GLOBALS["lang"]['NMIS Field Type'] = 'NMIS mező típusa';

$GLOBALS["lang"]['NMIS Group'] = 'NMIS Csoport';

$GLOBALS["lang"]['NMIS Poller'] = 'NMIS Poller';

$GLOBALS["lang"]['NMIS Role'] = 'NMIS Szerep';

$GLOBALS["lang"]['NOTE - You can prevent plain text credentials being displayed below by setting the configuration item for <code>decrypt_credentials</code> to <code>n</code>.'] = 'MEGJEGYZÉS - Megakadályozhatja, hogy az alábbi szöveges adatok megjelenjenek a konfigurációs elem beállításával <code>decrypt_credentials</code> - <code>n</code>.';

$GLOBALS["lang"]['name'] = 'Név';

$GLOBALS["lang"]['Name'] = 'Név';

$GLOBALS["lang"]['Namibia'] = 'Namíbia';

$GLOBALS["lang"]['Nauru'] = 'Nauru';

$GLOBALS["lang"]['Nepal'] = 'Nepál';

$GLOBALS["lang"]['net_index'] = 'Nettó index';

$GLOBALS["lang"]['Net Index'] = 'Nettó index';

$GLOBALS["lang"]['Netherlands Antilles'] = 'Holland Antillák';

$GLOBALS["lang"]['Netherlands the'] = 'Hollandia';

$GLOBALS["lang"]['netmask'] = 'Hálózati maszk';

$GLOBALS["lang"]['Netmask'] = 'Hálózati maszk';

$GLOBALS["lang"]['netstat'] = 'Netstat';

$GLOBALS["lang"]['Netstat'] = 'Netstat';

$GLOBALS["lang"]['Netstat Policies'] = 'Netstat Politikák';

$GLOBALS["lang"]['Network'] = 'Hálózat';

$GLOBALS["lang"]['network_address'] = 'Hálózati cím';

$GLOBALS["lang"]['Network Address'] = 'Hálózati cím';

$GLOBALS["lang"]['network_domain'] = 'Hálózati tartomány';

$GLOBALS["lang"]['Network Domain'] = 'Hálózati tartomány';

$GLOBALS["lang"]['Network Types'] = 'Hálózattípusok';

$GLOBALS["lang"]['networks'] = 'Hálózatok';

$GLOBALS["lang"]['Networks'] = 'Hálózatok';

$GLOBALS["lang"]['Networks Generated By'] = 'Az általa létrehozott hálózatok';

$GLOBALS["lang"]['Networks using a CIDR Mask of'] = 'CIDR maszkot használó hálózatok';

$GLOBALS["lang"]['New Building Name'] = 'Új épület neve';

$GLOBALS["lang"]['New Caledonia'] = 'Új-Kaledónia';

$GLOBALS["lang"]['New Floor Name'] = 'Új padlónév';

$GLOBALS["lang"]['New Room Name'] = 'Új szoba neve';

$GLOBALS["lang"]['New Row Name'] = 'Új sor neve';

$GLOBALS["lang"]['New Zealand'] = 'Új-Zéland';

$GLOBALS["lang"]['News'] = 'Hírek';

$GLOBALS["lang"]['next_hop'] = 'Következő Ugrás';

$GLOBALS["lang"]['Next Hop'] = 'Következő Ugrás';

$GLOBALS["lang"]['next_run'] = 'Következő futás';

$GLOBALS["lang"]['Next Run'] = 'Következő futás';

$GLOBALS["lang"]['Nicaragua'] = 'Nicaragua';

$GLOBALS["lang"]['Niger'] = 'Niger';

$GLOBALS["lang"]['Nigeria'] = 'Nigéria';

$GLOBALS["lang"]['Niue'] = 'Niue';

$GLOBALS["lang"]['nmap'] = 'Nmap';

$GLOBALS["lang"]['Nmap'] = 'Nmap';

$GLOBALS["lang"]['Nmap Port Scanning Responses'] = 'Nmap Port Scanning válaszok';

$GLOBALS["lang"]['nmap_tcp_ports'] = 'Nmap Tcp Ports';

$GLOBALS["lang"]['Nmap Tcp Ports'] = 'Nmap Tcp Ports';

$GLOBALS["lang"]['nmap_udp_ports'] = 'Nmap Udp Ports';

$GLOBALS["lang"]['Nmap Udp Ports'] = 'Nmap Udp Ports';

$GLOBALS["lang"]['nmis_business_service'] = 'Nmis Business Service';

$GLOBALS["lang"]['Nmis Business Service'] = 'Nmis Business Service';

$GLOBALS["lang"]['nmis_customer'] = 'Nmis Ügyfél';

$GLOBALS["lang"]['Nmis Customer'] = 'Nmis Ügyfél';

$GLOBALS["lang"]['nmis_group'] = 'Nmis Csoport';

$GLOBALS["lang"]['Nmis Group'] = 'Nmis Csoport';

$GLOBALS["lang"]['nmis_manage'] = 'Nmis kezelése';

$GLOBALS["lang"]['Nmis Manage'] = 'Nmis kezelése';

$GLOBALS["lang"]['nmis_name'] = 'Nmis név';

$GLOBALS["lang"]['Nmis Name'] = 'Nmis név';

$GLOBALS["lang"]['nmis_notes'] = 'Megjegyzés';

$GLOBALS["lang"]['Nmis Notes'] = 'Megjegyzés';

$GLOBALS["lang"]['nmis_poller'] = 'Nmis Poller';

$GLOBALS["lang"]['Nmis Poller'] = 'Nmis Poller';

$GLOBALS["lang"]['nmis_poller_uuid'] = 'Nmis Poller Uuid';

$GLOBALS["lang"]['Nmis Poller Uuid'] = 'Nmis Poller Uuid';

$GLOBALS["lang"]['nmis_role'] = 'Nmis Role';

$GLOBALS["lang"]['Nmis Role'] = 'Nmis Role';

$GLOBALS["lang"]['No'] = 'Nem.';

$GLOBALS["lang"]['No Devices Returned'] = 'Nincs visszaadott eszköz';

$GLOBALS["lang"]['No Google Maps API Key present, you will not be able to display the map.'] = 'Nincs Google Térkép API Kulcs jelen, akkor nem lesz képes megjeleníteni a térképet.';

$GLOBALS["lang"]['No License for Professional or Enterprise'] = 'Nincs licenc a Professional vagy Enterprise';

$GLOBALS["lang"]['No Results'] = 'Nincs eredmény';

$GLOBALS["lang"]['No data in License Key'] = 'Nincs adat a licenckulcsban';

$GLOBALS["lang"]['No database upgrade required at this time.'] = 'Jelenleg nincs szükség adatbázisfrissítésre.';

$GLOBALS["lang"]['Node'] = 'csomópont';

$GLOBALS["lang"]['None'] = 'Nincs';

$GLOBALS["lang"]['Norfolk Island'] = 'Norfolk-sziget';

$GLOBALS["lang"]['Normal'] = 'Normál';

$GLOBALS["lang"]['Northern Mariana Islands'] = 'Észak-Mariana-szigetek';

$GLOBALS["lang"]['Norway'] = 'Norvégia';

$GLOBALS["lang"]['Not Applicable'] = 'Nem alkalmazható';

$GLOBALS["lang"]['Not Checked'] = 'Nem ellenőrizve';

$GLOBALS["lang"]['Not Equals'] = 'Nem egyenletek';

$GLOBALS["lang"]['Not In'] = 'Nincs';

$GLOBALS["lang"]['Not Like'] = 'Nem úgy.';

$GLOBALS["lang"]['Not Set'] = 'Nem beállított';

$GLOBALS["lang"]['Not normally used. If set, this requires the device to have an open port (as per Scan Options) to be considered responding. A MAC address, arp response or ping response is not considered sufficient to be considered responding. Useful if a router or firewall between the Open-AudIT server and target IP is responding to port scans on the IPs behalf.'] = 'Általában nem használják. Ha be van jelölve, akkor az eszköz nyitott porttal rendelkezik (a scan opciók szerint), amelyet válasznak kell tekinteni. A MAC-cím, az arp-válasz vagy a ping-válasz nem tekinthető elegendőnek ahhoz, hogy reagálónak lehessen tekinteni. Hasznos, ha az Open- AudIT szerver és a cél IP közötti útválasztó vagy tűzfal válaszol az IP-k nevében végzett portszkennerekre.';

$GLOBALS["lang"]['Note'] = 'Megjegyzés';

$GLOBALS["lang"]['Note - Selecting a parent will automatically provide access to its children (although it wont be shown here).'] = 'Megjegyzés - A szülő kiválasztása automatikusan hozzáférést biztosít gyermekeihez (bár itt nem jelenik meg).';

$GLOBALS["lang"]['Notes'] = 'Megjegyzések';

$GLOBALS["lang"]['notes'] = 'Megjegyzések';

$GLOBALS["lang"]['Notice'] = 'Értesítés';

$GLOBALS["lang"]['notin'] = 'Notin';

$GLOBALS["lang"]['Notin'] = 'Notin';

$GLOBALS["lang"]['November'] = 'November';

$GLOBALS["lang"]['nvd_json'] = 'Nvd Json';

$GLOBALS["lang"]['Nvd Json'] = 'Nvd Json';

$GLOBALS["lang"]['ORDER BY'] = 'Rendelés';

$GLOBALS["lang"]['OS'] = 'OS';

$GLOBALS["lang"]['OS Families'] = 'OS Családok';

$GLOBALS["lang"]['OS Family'] = 'OS Család';

$GLOBALS["lang"]['OS Group'] = 'OS csoport';

$GLOBALS["lang"]['oae_manage'] = 'Oae Kezelés';

$GLOBALS["lang"]['Oae Manage'] = 'Oae Kezelés';

$GLOBALS["lang"]['object_ident'] = 'Objektum azonosító';

$GLOBALS["lang"]['Object Ident'] = 'Objektum azonosító';

$GLOBALS["lang"]['October'] = 'Október';

$GLOBALS["lang"]['Oman'] = 'Omán';

$GLOBALS["lang"]['omk_uuid'] = 'Omk Uuid';

$GLOBALS["lang"]['Omk Uuid'] = 'Omk Uuid';

$GLOBALS["lang"]['On'] = 'On';

$GLOBALS["lang"]['One of <code>3x2</code>, <code>4x2</code>, <code>4x3</code> or <code>4x4</code>.'] = 'Az egyik <code>3x2</code>, <code>4x2</code>, <code>4x3</code> vagy <code>4x4</code>.';

$GLOBALS["lang"]['One of Campus Area Network, Cloud Network, Enterprise Private Network, Home Area Network, Local Area Network, Metropolitan Area Network, Passive Optical Local Area Network, Personal Area Network, Storage-Area Network, System-Area Network, Virtual Private Network, Wide Area Network, Wireless Local Area Network.'] = 'A Campus Area Network, Cloud Network, Enterprise Private Network, Home Area Network, Local Area Network, Metropolitan Area Network, Passive Optical Local Area Network, Personal Area Network, Storage- Area Network, System- Area Network, Virtual Private Network, Wide Area Network, Wireless Local Area Network.';

$GLOBALS["lang"]['One of Development, Disaster Recovery, Evaluation, Pre-Production, Production, Testing, Training, User Acceptance Testing'] = 'A fejlesztés, katasztrófa-helyreállítás, értékelés, előzetes termelés, termelés, vizsgálat, képzés, felhasználói elfogadás teszt';

$GLOBALS["lang"]['One of allocated, delegated, planning, reserved, unallocated, unknown, unmanaged. Defaults to allocated.'] = 'A kiosztott, átruházott, tervezett, fenntartott, fel nem osztott, ismeretlen, kezeletlen területek egyike. Alapértelmezés hozzárendelve.';

$GLOBALS["lang"]['One of either <code>active directory</code> or <code>openldap</code>.'] = 'Valamelyik <code>active directory</code> vagy <code>openldap</code>.';

$GLOBALS["lang"]['One of: antivirus, backup, firewall, approved, banned, ignored or other.'] = 'Az egyik: vírusellenes, tartalék, tűzfal, engedélyezett, tiltott, figyelmen kívül hagyott vagy egyéb.';

$GLOBALS["lang"]['Online Documentation'] = 'Online dokumentáció';

$GLOBALS["lang"]['Open-AudIT'] = 'Open- AudIT';

$GLOBALS["lang"]['Open-AudIT Community'] = 'Open- AudIT közösség';

$GLOBALS["lang"]['Open-AudIT Device Selection'] = 'Open- AudIT eszköz kiválasztása';

$GLOBALS["lang"]['Open-AudIT Enterprise'] = 'Open- AudIT Enterprise';

$GLOBALS["lang"]['Open-AudIT Enterprise. High-scale flexible discovery and audit solution for large networks. All the features of Professional plus: Baselines, File Auditing, Cloud Discovery, Rack Management, Configurable Role Based Access Control including Active Directory and LDAP.'] = 'Open-AudIT Enterprise. Nagyléptékű, rugalmas felfedezési és ellenőrzési megoldás a nagy hálózatok számára. Minden funkció a Professional plus: Alapok, File Auditing, Cloud Discovery, Rack Management, Configable Role Based Access Control, beleértve az Active Directory és LDAP.';

$GLOBALS["lang"]['Open-AudIT Field Name'] = 'Open- AudIT mező neve';

$GLOBALS["lang"]['Open-AudIT Licenses'] = 'Open- AudIT licencek';

$GLOBALS["lang"]['Open-AudIT Options'] = 'Open- AudIT beállítások';

$GLOBALS["lang"]['Open-AudIT Professional'] = 'Open- AudIT professzionális';

$GLOBALS["lang"]['Open-AudIT Professional. The world\\'] = 'Open-AudIT Professional. A világ.';

$GLOBALS["lang"]['Open-AudIT and Nmap'] = 'Open- AudIT és Nmap';

$GLOBALS["lang"]['OpenScap is Installed'] = 'OpenScap telepítve';

$GLOBALS["lang"]['openldap_user_dn'] = 'Openldap felhasználói Dn';

$GLOBALS["lang"]['Openldap User Dn'] = 'Openldap felhasználói Dn';

$GLOBALS["lang"]['openldap_user_membership_attribute'] = 'Openldap felhasználói tagsági attribútum';

$GLOBALS["lang"]['Openldap User Membership Attribute'] = 'Openldap felhasználói tagsági attribútum';

$GLOBALS["lang"]['open|filtered'] = 'Nyílt, 124; szűrt';

$GLOBALS["lang"]['Open|filtered'] = 'Nyílt, 124; szűrt';

$GLOBALS["lang"]['Operating System'] = 'Működési rendszer';

$GLOBALS["lang"]['Operating System Family Contains'] = 'Működési rendszer Családi Tartalékok';

$GLOBALS["lang"]['Operating Systems'] = 'Üzemeltetési rendszerek';

$GLOBALS["lang"]['optical'] = 'Optikai';

$GLOBALS["lang"]['Optical'] = 'Optikai';

$GLOBALS["lang"]['Optimized'] = 'Optimalizált';

$GLOBALS["lang"]['Optional version as audited by Open-AudIT. Use the percent sign % as a wildcard.'] = 'Az Open- AudIT által ellenőrzött opcionális változat. Használja a%% -ot vadkártyaként.';

$GLOBALS["lang"]['options'] = 'Opciók';

$GLOBALS["lang"]['Options'] = 'Opciók';

$GLOBALS["lang"]['Or select from the below fields.'] = 'Vagy válasszon az alábbi mezők közül.';

$GLOBALS["lang"]['org_descendants'] = 'Org leszármazottak';

$GLOBALS["lang"]['Org Descendants'] = 'Org leszármazottak';

$GLOBALS["lang"]['org_id'] = 'Org azonosító';

$GLOBALS["lang"]['Org ID'] = 'Org azonosító';

$GLOBALS["lang"]['Organisation'] = 'Szervezet';

$GLOBALS["lang"]['organisation'] = 'Szervezet';

$GLOBALS["lang"]['Organisation Descendants'] = 'Szervezet leszármazottai';

$GLOBALS["lang"]['Organisations'] = 'Szervezetek';

$GLOBALS["lang"]['orgs'] = 'Orgok';

$GLOBALS["lang"]['Orgs'] = 'Orgok';

$GLOBALS["lang"]['Orgs Name'] = 'Orgs név';

$GLOBALS["lang"]['orientation'] = 'Tájolás';

$GLOBALS["lang"]['Orientation'] = 'Tájolás';

$GLOBALS["lang"]['os'] = 'O';

$GLOBALS["lang"]['Os'] = 'O';

$GLOBALS["lang"]['os_arch'] = 'Os Arch';

$GLOBALS["lang"]['Os Arch'] = 'Os Arch';

$GLOBALS["lang"]['os_bit'] = 'Os Bit';

$GLOBALS["lang"]['Os Bit'] = 'Os Bit';

$GLOBALS["lang"]['os_cpe'] = 'Os Cpe';

$GLOBALS["lang"]['Os Cpe'] = 'Os Cpe';

$GLOBALS["lang"]['os_display_version'] = 'Os megjelenítő verzió';

$GLOBALS["lang"]['Os Display Version'] = 'Os megjelenítő verzió';

$GLOBALS["lang"]['os_family'] = 'O Család';

$GLOBALS["lang"]['Os Family'] = 'O Család';

$GLOBALS["lang"]['os_group'] = 'Os csoport';

$GLOBALS["lang"]['Os Group'] = 'Os csoport';

$GLOBALS["lang"]['os_installation_date'] = 'Os telepítési dátum';

$GLOBALS["lang"]['Os Installation Date'] = 'Os telepítési dátum';

$GLOBALS["lang"]['os_licence_expiry'] = 'Az engedély lejárta';

$GLOBALS["lang"]['Os Licence Expiry'] = 'Az engedély lejárta';

$GLOBALS["lang"]['os_license'] = 'Os licenc';

$GLOBALS["lang"]['Os License'] = 'Os licenc';

$GLOBALS["lang"]['os_license_code'] = 'Os licenc kódja';

$GLOBALS["lang"]['Os License Code'] = 'Os licenc kódja';

$GLOBALS["lang"]['os_license_mode'] = 'Os licenc mód';

$GLOBALS["lang"]['Os License Mode'] = 'Os licenc mód';

$GLOBALS["lang"]['os_license_type'] = 'Os licenc típusa';

$GLOBALS["lang"]['Os License Type'] = 'Os licenc típusa';

$GLOBALS["lang"]['os_name'] = 'Os Név';

$GLOBALS["lang"]['Os Name'] = 'Os Név';

$GLOBALS["lang"]['os_version'] = 'Os Version';

$GLOBALS["lang"]['Os Version'] = 'Os Version';

$GLOBALS["lang"]['Other'] = 'Egyéb';

$GLOBALS["lang"]['Others'] = 'Egyéb';

$GLOBALS["lang"]['Our timeout for a SSH response'] = 'Az idő egy SSH válasz';

$GLOBALS["lang"]['Our timeout for a WMI response'] = 'A WMI-válasz ideje';

$GLOBALS["lang"]['Our timeout for an SNMP response'] = 'Időt kérünk az SNMP válaszára.';

$GLOBALS["lang"]['Our timeout for an audit script response'] = 'Az idő egy audit script válasz';

$GLOBALS["lang"]['output'] = 'Kimenet';

$GLOBALS["lang"]['Output'] = 'Kimenet';

$GLOBALS["lang"]['outputs'] = 'Eredmények';

$GLOBALS["lang"]['Outputs'] = 'Eredmények';

$GLOBALS["lang"]['Overall severity score (0–10).'] = 'Teljes súlyossági pontszám (0- 10).';

$GLOBALS["lang"]['overwrite'] = 'Felülírás';

$GLOBALS["lang"]['Overwrite'] = 'Felülírás';

$GLOBALS["lang"]['owner'] = 'Tulajdonos';

$GLOBALS["lang"]['Owner'] = 'Tulajdonos';

$GLOBALS["lang"]['PHP'] = 'PHP';

$GLOBALS["lang"]['POD'] = 'POD';

$GLOBALS["lang"]['Package'] = 'Csomag';

$GLOBALS["lang"]['packages'] = 'Csomagok';

$GLOBALS["lang"]['Packages'] = 'Csomagok';

$GLOBALS["lang"]['pagefile'] = 'Pagefile';

$GLOBALS["lang"]['Pagefile'] = 'Pagefile';

$GLOBALS["lang"]['Pakistan'] = 'Pakisztán';

$GLOBALS["lang"]['Palau'] = 'Palau';

$GLOBALS["lang"]['Palestinian Territory'] = 'Palesztin terület';

$GLOBALS["lang"]['Panama'] = 'Panama';

$GLOBALS["lang"]['Papua New Guinea'] = 'Pápua Új-Guinea';

$GLOBALS["lang"]['Paraguay'] = 'Paraguay';

$GLOBALS["lang"]['Paranoid'] = 'Paranoid';

$GLOBALS["lang"]['Parent'] = 'Szülő';

$GLOBALS["lang"]['parent_id'] = 'Anyaazonosító';

$GLOBALS["lang"]['Parent ID'] = 'Anyaazonosító';

$GLOBALS["lang"]['parent_name'] = 'Szülőnév';

$GLOBALS["lang"]['Parent Name'] = 'Szülőnév';

$GLOBALS["lang"]['part_number'] = 'Részszám';

$GLOBALS["lang"]['Part Number'] = 'Részszám';

$GLOBALS["lang"]['part_of_domain'] = 'Tartomány';

$GLOBALS["lang"]['Part Of Domain'] = 'Tartomány';

$GLOBALS["lang"]['Partition'] = 'Részesedés';

$GLOBALS["lang"]['partition_count'] = 'Részesedések száma';

$GLOBALS["lang"]['Partition Count'] = 'Részesedések száma';

$GLOBALS["lang"]['partition_disk_index'] = 'Partíciós lemezindex';

$GLOBALS["lang"]['Partition Disk Index'] = 'Partíciós lemezindex';

$GLOBALS["lang"]['Pass'] = 'Pass';

$GLOBALS["lang"]['Passed'] = 'Elhunyt';

$GLOBALS["lang"]['Passive Optical Local Area Network'] = 'Passzív optikai helyi területi hálózat';

$GLOBALS["lang"]['Password'] = 'Jelszó';

$GLOBALS["lang"]['password'] = 'Jelszó';

$GLOBALS["lang"]['password_changeable'] = 'Jelszó megváltoztatható';

$GLOBALS["lang"]['Password Changeable'] = 'Jelszó megváltoztatható';

$GLOBALS["lang"]['password_disabled'] = 'Jelszó letiltva';

$GLOBALS["lang"]['Password Disabled'] = 'Jelszó letiltva';

$GLOBALS["lang"]['password_expires'] = 'A jelszó lejár';

$GLOBALS["lang"]['Password Expires'] = 'A jelszó lejár';

$GLOBALS["lang"]['password_last_changed'] = 'Jelszó utoljára megváltozott';

$GLOBALS["lang"]['Password Last Changed'] = 'Jelszó utoljára megváltozott';

$GLOBALS["lang"]['password_required'] = 'Jelszó szükséges';

$GLOBALS["lang"]['Password Required'] = 'Jelszó szükséges';

$GLOBALS["lang"]['patch_panel'] = 'Patch panel';

$GLOBALS["lang"]['Patch Panel'] = 'Patch panel';

$GLOBALS["lang"]['patch_panel_port'] = 'Patch panel port';

$GLOBALS["lang"]['Patch Panel Port'] = 'Patch panel port';

$GLOBALS["lang"]['path'] = 'Útvonal';

$GLOBALS["lang"]['Path'] = 'Útvonal';

$GLOBALS["lang"]['Performance'] = 'Teljesítmény';

$GLOBALS["lang"]['Performed'] = 'Performált';

$GLOBALS["lang"]['permission'] = 'Engedély';

$GLOBALS["lang"]['Permission'] = 'Engedély';

$GLOBALS["lang"]['permissions'] = 'Jogosultságok';

$GLOBALS["lang"]['Permissions'] = 'Jogosultságok';

$GLOBALS["lang"]['Personal Area Network'] = 'Személyi terület hálózat';

$GLOBALS["lang"]['Peru'] = 'Peru';

$GLOBALS["lang"]['Philippines'] = 'Fülöp-szigetek';

$GLOBALS["lang"]['phone'] = 'Telefon';

$GLOBALS["lang"]['Phone'] = 'Telefon';

$GLOBALS["lang"]['Physical CPUs'] = 'Fizikai CPU';

$GLOBALS["lang"]['physical_count'] = 'Fizikai szám';

$GLOBALS["lang"]['Physical Count'] = 'Fizikai szám';

$GLOBALS["lang"]['physical_depth'] = 'Fizikai mélység';

$GLOBALS["lang"]['Physical Depth'] = 'Fizikai mélység';

$GLOBALS["lang"]['physical_height'] = 'Fizikai magasság';

$GLOBALS["lang"]['Physical Height'] = 'Fizikai magasság';

$GLOBALS["lang"]['physical_width'] = 'Fizikai szélesség';

$GLOBALS["lang"]['Physical Width'] = 'Fizikai szélesség';

$GLOBALS["lang"]['picture'] = 'Képek';

$GLOBALS["lang"]['Picture'] = 'Képek';

$GLOBALS["lang"]['pid'] = 'Pid';

$GLOBALS["lang"]['Pid'] = 'Pid';

$GLOBALS["lang"]['Pie Chart'] = 'Pite diagram';

$GLOBALS["lang"]['ping'] = 'Ping';

$GLOBALS["lang"]['Ping'] = 'Ping';

$GLOBALS["lang"]['Pitcairn Islands'] = 'Pitcairn-szigetek';

$GLOBALS["lang"]['placement'] = 'Elhelyezés';

$GLOBALS["lang"]['Placement'] = 'Elhelyezés';

$GLOBALS["lang"]['Please have an Open-AudIT administrator logon and upgrade the database.'] = 'Kérjük, legyen Open- AudIT rendszergazda bejelentkezési és frissítse az adatbázist.';

$GLOBALS["lang"]['Please note that the select box will override the text input box.'] = 'Felhívjuk figyelmét, hogy a kijelölt mezőben felülírja a szövegbeviteli mezőt.';

$GLOBALS["lang"]['Please set using'] = 'Kérjük, használja';

$GLOBALS["lang"]['pod'] = 'Pod';

$GLOBALS["lang"]['Pod'] = 'Pod';

$GLOBALS["lang"]['Poland'] = 'Lengyelország';

$GLOBALS["lang"]['Policies'] = 'Politika';

$GLOBALS["lang"]['Policies have exceptions.'] = 'A politikáknak vannak kivételeik.';

$GLOBALS["lang"]['policy'] = 'Politika';

$GLOBALS["lang"]['Policy'] = 'Politika';

$GLOBALS["lang"]['policy_id'] = 'Szakpolitikai azonosító';

$GLOBALS["lang"]['Policy ID'] = 'Szakpolitikai azonosító';

$GLOBALS["lang"]['Policy Result'] = 'Politikai eredmény';

$GLOBALS["lang"]['Policy Results'] = 'Politikai eredmények';

$GLOBALS["lang"]['Polite'] = 'Polit';

$GLOBALS["lang"]['Populated by audit.'] = 'Ellenőrzéssel halmozva.';

$GLOBALS["lang"]['Populated by discovery and audit.'] = 'Felfedezés és ellenőrzés alapján.';

$GLOBALS["lang"]['Populated dynamically.'] = 'Diktálva.';

$GLOBALS["lang"]['Populated from DNS.'] = 'A DNS-ből.';

$GLOBALS["lang"]['Populated from SNMP discovery.'] = 'Az SNMP felfedezése alapján.';

$GLOBALS["lang"]['Populated from device audits.'] = 'Az eszközök ellenőrzése alapján.';

$GLOBALS["lang"]['Populated from hostname.'] = 'A hostname-ból.';

$GLOBALS["lang"]['Populated from machine-id on Linux.'] = 'A Linux-on a machine- id-ből.';

$GLOBALS["lang"]['Populated from the IP for the default route or the IP detected in discovery.'] = 'Az IP-ből az alapértelmezett útvonalra vagy a felfedezés során észlelt IP-re összesítve.';

$GLOBALS["lang"]['Populated from the hostname command.'] = 'A hostname parancs alapján.';

$GLOBALS["lang"]['Populated with additional data from the external system, in a JSON representation.'] = 'A külső rendszer további adataival, egy JSON képviselettel egészítve ki.';

$GLOBALS["lang"]['port'] = 'Kikötő';

$GLOBALS["lang"]['Port'] = 'Kikötő';

$GLOBALS["lang"]['port_name'] = 'Kikötő neve';

$GLOBALS["lang"]['Port Name'] = 'Kikötő neve';

$GLOBALS["lang"]['port_number'] = 'Kikötőszám';

$GLOBALS["lang"]['Port Number'] = 'Kikötőszám';

$GLOBALS["lang"]['ports_in_order'] = 'Ports in order';

$GLOBALS["lang"]['Ports In Order'] = 'Ports in order';

$GLOBALS["lang"]['ports_stop_after'] = 'Ports Stop After';

$GLOBALS["lang"]['Ports Stop After'] = 'Ports Stop After';

$GLOBALS["lang"]['Portugal, Portuguese Republic'] = 'Portugália, Portugál Köztársaság';

$GLOBALS["lang"]['position'] = 'Pozíció';

$GLOBALS["lang"]['Position'] = 'Pozíció';

$GLOBALS["lang"]['postcode'] = 'Irányítószám';

$GLOBALS["lang"]['Postcode'] = 'Irányítószám';

$GLOBALS["lang"]['power_circuit'] = 'Áramkör';

$GLOBALS["lang"]['Power Circuit'] = 'Áramkör';

$GLOBALS["lang"]['power_sockets'] = 'Power Sockets';

$GLOBALS["lang"]['Power Sockets'] = 'Power Sockets';

$GLOBALS["lang"]['Predictable'] = 'Kiszámítható';

$GLOBALS["lang"]['Preferences'] = 'Előirányzatok';

$GLOBALS["lang"]['Prerequisites'] = 'Előfeltételek';

$GLOBALS["lang"]['Prerequisites and Tests'] = 'Előfeltételek és vizsgálatok';

$GLOBALS["lang"]['present'] = 'Jelen';

$GLOBALS["lang"]['Present'] = 'Jelen';

$GLOBALS["lang"]['previous_value'] = 'Előző érték';

$GLOBALS["lang"]['Previous Value'] = 'Előző érték';

$GLOBALS["lang"]['primary'] = 'Elsődleges';

$GLOBALS["lang"]['Primary'] = 'Elsődleges';

$GLOBALS["lang"]['Primary Key'] = 'Elsődleges kulcs';

$GLOBALS["lang"]['print_queue'] = 'Nyomtatási sor';

$GLOBALS["lang"]['Print Queue'] = 'Nyomtatási sor';

$GLOBALS["lang"]['printer_color'] = 'Nyomtatószín';

$GLOBALS["lang"]['Printer Color'] = 'Nyomtatószín';

$GLOBALS["lang"]['printer_duplex'] = 'Duplex nyomtató';

$GLOBALS["lang"]['Printer Duplex'] = 'Duplex nyomtató';

$GLOBALS["lang"]['printer_port_name'] = 'Nyomtató kikötő neve';

$GLOBALS["lang"]['Printer Port Name'] = 'Nyomtató kikötő neve';

$GLOBALS["lang"]['printer_shared'] = 'Megosztott nyomtató';

$GLOBALS["lang"]['Printer Shared'] = 'Megosztott nyomtató';

$GLOBALS["lang"]['printer_shared_name'] = 'A nyomtató megosztott neve';

$GLOBALS["lang"]['Printer Shared Name'] = 'A nyomtató megosztott neve';

$GLOBALS["lang"]['priority'] = 'Prioritás';

$GLOBALS["lang"]['Priority'] = 'Prioritás';

$GLOBALS["lang"]['Privacy Passphrase'] = 'Adatvédelem';

$GLOBALS["lang"]['privileges_required'] = 'Szükséges kiváltságok';

$GLOBALS["lang"]['Privileges Required'] = 'Szükséges kiváltságok';

$GLOBALS["lang"]['processor'] = 'FeldolgozóName';

$GLOBALS["lang"]['Processor'] = 'FeldolgozóName';

$GLOBALS["lang"]['processor_count'] = 'Processzorok száma';

$GLOBALS["lang"]['Processor Count'] = 'Processzorok száma';

$GLOBALS["lang"]['processor_slot_count'] = 'Processor Slot Count';

$GLOBALS["lang"]['Processor Slot Count'] = 'Processor Slot Count';

$GLOBALS["lang"]['processor_type'] = 'Feldolgozótípus';

$GLOBALS["lang"]['Processor Type'] = 'Feldolgozótípus';

$GLOBALS["lang"]['Processors'] = 'Feldolgozók';

$GLOBALS["lang"]['product_name'] = 'Terméknév';

$GLOBALS["lang"]['Product Name'] = 'Terméknév';

$GLOBALS["lang"]['Product Name Match from CPE: '] = 'A termék neve egyezik a CPE: ';

$GLOBALS["lang"]['products'] = 'Termékek';

$GLOBALS["lang"]['Products'] = 'Termékek';

$GLOBALS["lang"]['profile'] = 'Profil';

$GLOBALS["lang"]['Profile'] = 'Profil';

$GLOBALS["lang"]['program'] = 'Program';

$GLOBALS["lang"]['Program'] = 'Program';

$GLOBALS["lang"]['protocol'] = 'Jegyzőkönyv';

$GLOBALS["lang"]['Protocol'] = 'Jegyzőkönyv';

$GLOBALS["lang"]['provider'] = 'Szolgáltató';

$GLOBALS["lang"]['Provider'] = 'Szolgáltató';

$GLOBALS["lang"]['published'] = 'Megjelent';

$GLOBALS["lang"]['Published'] = 'Megjelent';

$GLOBALS["lang"]['published_date'] = 'Megjelent dátum';

$GLOBALS["lang"]['Published Date'] = 'Megjelent dátum';

$GLOBALS["lang"]['publisher'] = 'Kiadó';

$GLOBALS["lang"]['Publisher'] = 'Kiadó';

$GLOBALS["lang"]['Puerto Rico'] = 'Puerto Rico';

$GLOBALS["lang"]['Purchase'] = 'Vásárlás';

$GLOBALS["lang"]['purchase_amount'] = 'Beszerzési összeg';

$GLOBALS["lang"]['Purchase Amount'] = 'Beszerzési összeg';

$GLOBALS["lang"]['purchase_cost_center'] = 'Vásárlási költség központ';

$GLOBALS["lang"]['Purchase Cost Center'] = 'Vásárlási költség központ';

$GLOBALS["lang"]['purchase_count'] = 'Beszerzési szám';

$GLOBALS["lang"]['Purchase Count'] = 'Beszerzési szám';

$GLOBALS["lang"]['purchase_date'] = 'Vásárlási dátum';

$GLOBALS["lang"]['Purchase Date'] = 'Vásárlási dátum';

$GLOBALS["lang"]['purchase_invoice'] = 'Beszerzési számla';

$GLOBALS["lang"]['Purchase Invoice'] = 'Beszerzési számla';

$GLOBALS["lang"]['purchase_order'] = 'Megrendelés';

$GLOBALS["lang"]['Purchase Order'] = 'Megrendelés';

$GLOBALS["lang"]['purchase_order_number'] = 'Megrendelés száma';

$GLOBALS["lang"]['Purchase Order Number'] = 'Megrendelés száma';

$GLOBALS["lang"]['purchase_service_contract_number'] = 'Vásárlási szolgáltatási szerződés száma';

$GLOBALS["lang"]['Purchase Service Contract Number'] = 'Vásárlási szolgáltatási szerződés száma';

$GLOBALS["lang"]['purchase_vendor'] = 'Vendor vásárlása';

$GLOBALS["lang"]['Purchase Vendor'] = 'Vendor vásárlása';

$GLOBALS["lang"]['purpose'] = 'Cél';

$GLOBALS["lang"]['Purpose'] = 'Cél';

$GLOBALS["lang"]['Qatar'] = 'Katar';

$GLOBALS["lang"]['queries'] = 'Kérdések';

$GLOBALS["lang"]['Queries'] = 'Kérdések';

$GLOBALS["lang"]['Query'] = 'Kérdés';

$GLOBALS["lang"]['queue'] = 'Sorozat';

$GLOBALS["lang"]['Queue'] = 'Sorozat';

$GLOBALS["lang"]['Queue Limit'] = 'A sor határa';

$GLOBALS["lang"]['Queued Device Audits'] = 'Soros eszközellenőrzés';

$GLOBALS["lang"]['Queued IP Scans'] = 'Queued IP scans';

$GLOBALS["lang"]['Queued Items'] = 'Sorozatos tételek';

$GLOBALS["lang"]['RU Start'] = 'VT indítása';

$GLOBALS["lang"]['RX Bitrate'] = 'RX bitráta';

$GLOBALS["lang"]['RX Freq'] = 'RX Freq';

$GLOBALS["lang"]['RX Level'] = 'RX szint';

$GLOBALS["lang"]['RX Power'] = 'RX Power';

$GLOBALS["lang"]['RX Profile'] = 'RX profil';

$GLOBALS["lang"]['Rack'] = 'Rack';

$GLOBALS["lang"]['rack_devices'] = 'Rack eszközök';

$GLOBALS["lang"]['Rack Devices'] = 'Rack eszközök';

$GLOBALS["lang"]['rack_id'] = 'Rack ID';

$GLOBALS["lang"]['Rack ID'] = 'Rack ID';

$GLOBALS["lang"]['Racks'] = 'Rekesz';

$GLOBALS["lang"]['racks'] = 'Rekesz';

$GLOBALS["lang"]['radio'] = 'Rádió';

$GLOBALS["lang"]['Radio'] = 'Rádió';

$GLOBALS["lang"]['Radio MAC'] = 'Rádió MAC';

$GLOBALS["lang"]['rationale'] = 'Indokolás';

$GLOBALS["lang"]['Rationale'] = 'Indokolás';

$GLOBALS["lang"]['raw'] = 'Nyers';

$GLOBALS["lang"]['Raw'] = 'Nyers';

$GLOBALS["lang"]['read'] = 'Olvassa el';

$GLOBALS["lang"]['Read'] = 'Olvassa el';

$GLOBALS["lang"]['Read our online documentation on the Open-AudIT Wiki.'] = 'Olvassa el online dokumentációnkat az Open- AudIT Wiki oldalon.';

$GLOBALS["lang"]['Red Query'] = 'Vörös lekérdezés';

$GLOBALS["lang"]['Redirect URI'] = 'URI átirányítása';

$GLOBALS["lang"]['redirect_uri'] = 'Uri átirányítása';

$GLOBALS["lang"]['Redirect Uri'] = 'Uri átirányítása';

$GLOBALS["lang"]['references'] = 'Hivatkozások';

$GLOBALS["lang"]['References'] = 'Hivatkozások';

$GLOBALS["lang"]['region'] = 'Régió';

$GLOBALS["lang"]['Region'] = 'Régió';

$GLOBALS["lang"]['registered_user'] = 'Regisztrált felhasználó';

$GLOBALS["lang"]['Registered User'] = 'Regisztrált felhasználó';

$GLOBALS["lang"]['rel'] = 'Rel';

$GLOBALS["lang"]['Rel'] = 'Rel';

$GLOBALS["lang"]['Release'] = 'Kibocsátás';

$GLOBALS["lang"]['remediation'] = 'Felújítás';

$GLOBALS["lang"]['Remediation'] = 'Felújítás';

$GLOBALS["lang"]['Remote'] = 'Távoli';

$GLOBALS["lang"]['remote_address'] = 'Távoli cím';

$GLOBALS["lang"]['Remote Address'] = 'Távoli cím';

$GLOBALS["lang"]['remote_port'] = 'Távoli kikötő';

$GLOBALS["lang"]['Remote Port'] = 'Távoli kikötő';

$GLOBALS["lang"]['Remove'] = 'Eltávolítás';

$GLOBALS["lang"]['Remove Exception'] = 'Kivétel eltávolítása';

$GLOBALS["lang"]['Report'] = 'Jelentés';

$GLOBALS["lang"]['Report on your devices, networks and more'] = 'Jelentés az eszközökről, hálózatokról és még több';

$GLOBALS["lang"]['reportable'] = 'Adatszolgáltatásra kötelezett pénzügyi intézmény';

$GLOBALS["lang"]['Reportable'] = 'Adatszolgáltatásra kötelezett pénzügyi intézmény';

$GLOBALS["lang"]['Reports'] = 'Jelentések';

$GLOBALS["lang"]['request'] = 'Kérelem';

$GLOBALS["lang"]['Request'] = 'Kérelem';

$GLOBALS["lang"]['Request a Specific CVE'] = 'Egyedi kérelem CVE';

$GLOBALS["lang"]['requested'] = 'Kérelmezett';

$GLOBALS["lang"]['Requested'] = 'Kérelmezett';

$GLOBALS["lang"]['require_port'] = 'Előírt kikötő';

$GLOBALS["lang"]['Require Port'] = 'Előírt kikötő';

$GLOBALS["lang"]['Require an Open Port'] = 'Nyitott port igénylése';

$GLOBALS["lang"]['Required'] = 'Szükséges';

$GLOBALS["lang"]['Reset'] = 'Visszaállítás';

$GLOBALS["lang"]['Reset All Data'] = 'Minden adat újraindítása';

$GLOBALS["lang"]['Reset to Default'] = 'Alapértelmezés újraindítása';

$GLOBALS["lang"]['resource'] = 'Erőforrás';

$GLOBALS["lang"]['Resource'] = 'Erőforrás';

$GLOBALS["lang"]['Resource Name'] = 'Erőforrás-név';

$GLOBALS["lang"]['Resources'] = 'Erőforrások';

$GLOBALS["lang"]['response'] = 'Válasz';

$GLOBALS["lang"]['Response'] = 'Válasz';

$GLOBALS["lang"]['responsibility'] = 'Felelősség';

$GLOBALS["lang"]['Responsibility'] = 'Felelősség';

$GLOBALS["lang"]['Restore my Licenses'] = 'Helyreállítom az engedélyeimet.';

$GLOBALS["lang"]['Restrict to Private'] = 'Szigorúan bizalmas';

$GLOBALS["lang"]['Restrict to Subnet'] = 'Szigorúan az alnetre';

$GLOBALS["lang"]['result'] = 'Eredmény';

$GLOBALS["lang"]['Result'] = 'Eredmény';

$GLOBALS["lang"]['Results'] = 'Eredmények';

$GLOBALS["lang"]['retrieved'] = 'Retrieved';

$GLOBALS["lang"]['Retrieved'] = 'Retrieved';

$GLOBALS["lang"]['retrieved_ident'] = 'Retrieved Ident';

$GLOBALS["lang"]['Retrieved Ident'] = 'Retrieved Ident';

$GLOBALS["lang"]['retrieved_name'] = 'Retrieved Name';

$GLOBALS["lang"]['Retrieved Name'] = 'Retrieved Name';

$GLOBALS["lang"]['Retrieved from the device - Windows:Win32_ComputerSystemProduct, Linux:dmidecode, MacOS:system_profiler, ESXi:vim-cmd hostsvc/hostsummary, HP-UX:machinfo, Solaris:smbios, AIX:uname.'] = 'Retrieved from the device - Windows: Win32 _ ComputerSystemProduct, Linux: dmidecode, MacOS: system _ profiler, ESXi: vim- cmd hostsvc / hostsump, HP- UX: machinfo, Solaris: smbios, AIX: uname.';

$GLOBALS["lang"]['Reunion'] = 'Reunion';

$GLOBALS["lang"]['revision'] = 'Felülvizsgálat';

$GLOBALS["lang"]['Revision'] = 'Felülvizsgálat';

$GLOBALS["lang"]['risk_assesment_result'] = 'Kockázatértékelés eredménye';

$GLOBALS["lang"]['Risk Assesment Result'] = 'Kockázatértékelés eredménye';

$GLOBALS["lang"]['role'] = 'Szerep';

$GLOBALS["lang"]['Role'] = 'Szerep';

$GLOBALS["lang"]['roles'] = 'Színpad';

$GLOBALS["lang"]['Roles'] = 'Színpad';

$GLOBALS["lang"]['Romania'] = 'Románia';

$GLOBALS["lang"]['Room'] = 'Szoba';

$GLOBALS["lang"]['route'] = 'Útvonal';

$GLOBALS["lang"]['Route'] = 'Útvonal';

$GLOBALS["lang"]['Row'] = 'sor';

$GLOBALS["lang"]['Row Count'] = 'Sorszám';

$GLOBALS["lang"]['row_position'] = 'Sorpozíció';

$GLOBALS["lang"]['Row Position'] = 'Sorpozíció';

$GLOBALS["lang"]['Rows'] = 'Sorok';

$GLOBALS["lang"]['ru_height'] = 'Ru Height';

$GLOBALS["lang"]['Ru Height'] = 'Ru Height';

$GLOBALS["lang"]['ru_start'] = 'Ru Start';

$GLOBALS["lang"]['Ru Start'] = 'Ru Start';

$GLOBALS["lang"]['rule_group'] = 'cikk';

$GLOBALS["lang"]['Rule Group'] = 'cikk';

$GLOBALS["lang"]['rules'] = 'Szabályok';

$GLOBALS["lang"]['Rules'] = 'Szabályok';

$GLOBALS["lang"]['Run Discovery'] = 'Run Discovery';

$GLOBALS["lang"]['Run Discovery on Devices'] = 'Run Discovery on Devices';

$GLOBALS["lang"]['Run a discovery and find out <b>Whats On Your Network?</b>'] = 'Futtass le egy felfedezést és derítsd ki, <b>Mi van a hálózatodon?</b>';

$GLOBALS["lang"]['Run this Command'] = 'A parancs futtatása';

$GLOBALS["lang"]['runas'] = 'Runafélék';

$GLOBALS["lang"]['Runas'] = 'Runafélék';

$GLOBALS["lang"]['Running Open-AudIT Apache Service Under Windows'] = 'Open- AudIT apache szolgáltatás futtatása Windows alatt';

$GLOBALS["lang"]['Russian Federation'] = 'Orosz Föderáció';

$GLOBALS["lang"]['Rwanda'] = 'Ruanda';

$GLOBALS["lang"]['rx_bitrate'] = 'Rx bitráta';

$GLOBALS["lang"]['Rx Bitrate'] = 'Rx bitráta';

$GLOBALS["lang"]['rx_freq'] = 'Rx Freq';

$GLOBALS["lang"]['Rx Freq'] = 'Rx Freq';

$GLOBALS["lang"]['rx_level'] = 'Rx szint';

$GLOBALS["lang"]['Rx Level'] = 'Rx szint';

$GLOBALS["lang"]['rx_power'] = 'Rx Power';

$GLOBALS["lang"]['Rx Power'] = 'Rx Power';

$GLOBALS["lang"]['rx_profile'] = 'Rx profil';

$GLOBALS["lang"]['Rx Profile'] = 'Rx profil';

$GLOBALS["lang"]['SELECT'] = 'SELECT';

$GLOBALS["lang"]['SID'] = 'SID';

$GLOBALS["lang"]['SM Version'] = 'SM verzió';

$GLOBALS["lang"]['SNMP (v1 / v2)'] = 'SNMP (v1 / v2)';

$GLOBALS["lang"]['SNMP Details'] = 'SNMP Részletek';

$GLOBALS["lang"]['SNMP OID'] = 'SNMP OID';

$GLOBALS["lang"]['SNMP Version'] = 'SNMP verzió';

$GLOBALS["lang"]['SNMP v3'] = 'SNMP v3';

$GLOBALS["lang"]['SQL'] = 'SQL';

$GLOBALS["lang"]['SQL (Advanced)'] = 'SQL (Speciális)';

$GLOBALS["lang"]['SQL Creation Statements'] = 'SQL Létrehozási nyilatkozatok';

$GLOBALS["lang"]['SSH'] = 'SSH';

$GLOBALS["lang"]['SSH Key'] = 'SSH Kulcs';

$GLOBALS["lang"]['SW Revision'] = 'SW felülvizsgálata';

$GLOBALS["lang"]['Saint Barthelemy'] = 'Saint Barthelemy';

$GLOBALS["lang"]['Saint Helena'] = 'Saint Helena';

$GLOBALS["lang"]['Saint Kitts and Nevis'] = 'Saint Kitts és Nevis';

$GLOBALS["lang"]['Saint Lucia'] = 'Saint Lucia';

$GLOBALS["lang"]['Saint Martin'] = 'Saint Martin';

$GLOBALS["lang"]['Saint Pierre and Miquelon'] = 'Saint Pierre és Miquelon';

$GLOBALS["lang"]['Saint Vincent and the Grenadines'] = 'Saint Vincent és Grenadine-szigetek';

$GLOBALS["lang"]['Samoa'] = 'Szamoa';

$GLOBALS["lang"]['san'] = 'San';

$GLOBALS["lang"]['San'] = 'San';

$GLOBALS["lang"]['San Marino'] = 'San Marino';

$GLOBALS["lang"]['Sao Tome and Principe'] = 'São Tomé és Príncipe';

$GLOBALS["lang"]['Saturday'] = 'Szombat';

$GLOBALS["lang"]['Saudi Arabia'] = 'Szaúd-Arábia';

$GLOBALS["lang"]['Save as Default'] = 'Mentés alapértelmezésként';

$GLOBALS["lang"]['scaling'] = 'Méretezés';

$GLOBALS["lang"]['Scaling'] = 'Méretezés';

$GLOBALS["lang"]['scan_options'] = 'Keresés beállításai';

$GLOBALS["lang"]['Scan Options'] = 'Keresés beállításai';

$GLOBALS["lang"]['Scan Options ID'] = 'A keresési beállítások azonosítója';

$GLOBALS["lang"]['Scan the Nmap top number of TCP ports.'] = 'Keresse meg a TCP portok Nmap felső számát.';

$GLOBALS["lang"]['Scan the Nmap top number of UDP ports.'] = 'Keresse meg az Nmap felső számát UDP ports.';

$GLOBALS["lang"]['schedule'] = 'Menetrend';

$GLOBALS["lang"]['Schedule'] = 'Menetrend';

$GLOBALS["lang"]['scope'] = 'Hatály';

$GLOBALS["lang"]['Scope'] = 'Hatály';

$GLOBALS["lang"]['script_timeout'] = 'Script Időpont';

$GLOBALS["lang"]['Script Timeout'] = 'Script Időpont';

$GLOBALS["lang"]['scripts'] = 'Szkriptek';

$GLOBALS["lang"]['Scripts'] = 'Szkriptek';

$GLOBALS["lang"]['scsi'] = 'Scsi';

$GLOBALS["lang"]['Scsi'] = 'Scsi';

$GLOBALS["lang"]['scsi_bus'] = 'Scsi busz';

$GLOBALS["lang"]['Scsi Bus'] = 'Scsi busz';

$GLOBALS["lang"]['scsi_logical_unit'] = 'Scsi logikai egység';

$GLOBALS["lang"]['Scsi Logical Unit'] = 'Scsi logikai egység';

$GLOBALS["lang"]['scsi_port'] = 'Scsi Port';

$GLOBALS["lang"]['Scsi Port'] = 'Scsi Port';

$GLOBALS["lang"]['Search'] = 'Keresés';

$GLOBALS["lang"]['Search For a Device'] = 'Keresés egy eszköz';

$GLOBALS["lang"]['Search for Device'] = 'Device keresése';

$GLOBALS["lang"]['Searching Using DataTables'] = 'Adattáblák keresése';

$GLOBALS["lang"]['secondary'] = 'Másodlagos';

$GLOBALS["lang"]['Secondary'] = 'Másodlagos';

$GLOBALS["lang"]['Secondary Text'] = 'Másodlagos szöveg';

$GLOBALS["lang"]['section'] = 'szakasz';

$GLOBALS["lang"]['Section'] = 'szakasz';

$GLOBALS["lang"]['secure'] = 'Biztonságos';

$GLOBALS["lang"]['Secure'] = 'Biztonságos';

$GLOBALS["lang"]['Security Name'] = 'Biztonsági név';

$GLOBALS["lang"]['Security Status'] = 'Biztonsági állapot';

$GLOBALS["lang"]['security_zone'] = 'Biztonsági zóna';

$GLOBALS["lang"]['Security Zone'] = 'Biztonsági zóna';

$GLOBALS["lang"]['seed_ip'] = 'Vetőmag IP';

$GLOBALS["lang"]['Seed IP'] = 'Vetőmag IP';

$GLOBALS["lang"]['seed_ping'] = 'Vetőmagping';

$GLOBALS["lang"]['Seed Ping'] = 'Vetőmagping';

$GLOBALS["lang"]['seed_restrict_to_private'] = 'Seed Restrige To Private';

$GLOBALS["lang"]['Seed Restrict To Private'] = 'Seed Restrige To Private';

$GLOBALS["lang"]['seed_restrict_to_subnet'] = 'Seed Restirty To Subnet';

$GLOBALS["lang"]['Seed Restrict To Subnet'] = 'Seed Restirty To Subnet';

$GLOBALS["lang"]['Select'] = 'Kijelölés';

$GLOBALS["lang"]['Select All'] = 'Az összes kiválasztása';

$GLOBALS["lang"]['select_external_attribute'] = 'Külső attribútum kiválasztása';

$GLOBALS["lang"]['Select External Attribute'] = 'Külső attribútum kiválasztása';

$GLOBALS["lang"]['select_external_count'] = 'Külső szám kiválasztása';

$GLOBALS["lang"]['Select External Count'] = 'Külső szám kiválasztása';

$GLOBALS["lang"]['select_external_type'] = 'Külső Típus';

$GLOBALS["lang"]['Select External Type'] = 'Külső Típus';

$GLOBALS["lang"]['select_external_value'] = 'Külső Érték';

$GLOBALS["lang"]['Select External Value'] = 'Külső Érték';

$GLOBALS["lang"]['select_internal_attribute'] = 'Belső attribútum kiválasztása';

$GLOBALS["lang"]['Select Internal Attribute'] = 'Belső attribútum kiválasztása';

$GLOBALS["lang"]['select_internal_count'] = 'Belső szám kiválasztása';

$GLOBALS["lang"]['Select Internal Count'] = 'Belső szám kiválasztása';

$GLOBALS["lang"]['select_internal_type'] = 'Belső Típus';

$GLOBALS["lang"]['Select Internal Type'] = 'Belső Típus';

$GLOBALS["lang"]['select_internal_value'] = 'Belső Érték';

$GLOBALS["lang"]['Select Internal Value'] = 'Belső Érték';

$GLOBALS["lang"]['Select a Table'] = 'Táblázat';

$GLOBALS["lang"]['Senegal'] = 'Szenegál';

$GLOBALS["lang"]['sensitivity'] = 'Érzékenység';

$GLOBALS["lang"]['Sensitivity'] = 'Érzékenység';

$GLOBALS["lang"]['September'] = 'Szeptember';

$GLOBALS["lang"]['Serbia'] = 'Szerbia';

$GLOBALS["lang"]['serial'] = 'Sorozat';

$GLOBALS["lang"]['Serial'] = 'Sorozat';

$GLOBALS["lang"]['serial_imei'] = 'Sorozatos imei';

$GLOBALS["lang"]['Serial Imei'] = 'Sorozatos imei';

$GLOBALS["lang"]['serial_sim'] = 'Sorozat';

$GLOBALS["lang"]['Serial Sim'] = 'Sorozat';

$GLOBALS["lang"]['series'] = 'Sorozat';

$GLOBALS["lang"]['Series'] = 'Sorozat';

$GLOBALS["lang"]['server'] = 'Szolgáltató';

$GLOBALS["lang"]['Server'] = 'Szolgáltató';

$GLOBALS["lang"]['server_id'] = 'A kiszolgáló azonosítója';

$GLOBALS["lang"]['Server ID'] = 'A kiszolgáló azonosítója';

$GLOBALS["lang"]['Server Is'] = 'A kiszolgáló';

$GLOBALS["lang"]['server_item'] = 'Szolgálati tétel';

$GLOBALS["lang"]['Server Item'] = 'Szolgálati tétel';

$GLOBALS["lang"]['Server Status'] = 'A kiszolgáló állapota';

$GLOBALS["lang"]['Servers'] = 'Szerverek';

$GLOBALS["lang"]['service'] = 'Szolgáltatás';

$GLOBALS["lang"]['Service'] = 'Szolgáltatás';

$GLOBALS["lang"]['service_identifier'] = 'Szolgáltatási azonosító';

$GLOBALS["lang"]['Service Identifier'] = 'Szolgáltatási azonosító';

$GLOBALS["lang"]['service_level_a'] = 'A szolgáltatási szint';

$GLOBALS["lang"]['Service Level A'] = 'A szolgáltatási szint';

$GLOBALS["lang"]['service_level_b'] = '"B" szolgáltatási szint';

$GLOBALS["lang"]['Service Level B'] = '"B" szolgáltatási szint';

$GLOBALS["lang"]['service_network'] = 'Szolgáltatási hálózat';

$GLOBALS["lang"]['Service Network'] = 'Szolgáltatási hálózat';

$GLOBALS["lang"]['service_number'] = 'Szolgáltatási szám';

$GLOBALS["lang"]['Service Number'] = 'Szolgáltatási szám';

$GLOBALS["lang"]['service_pack'] = 'Szolgáltatási csomag';

$GLOBALS["lang"]['Service Pack'] = 'Szolgáltatási csomag';

$GLOBALS["lang"]['service_plan'] = 'Szolgáltatási terv';

$GLOBALS["lang"]['Service Plan'] = 'Szolgáltatási terv';

$GLOBALS["lang"]['service_provider'] = 'Szolgáltató';

$GLOBALS["lang"]['Service Provider'] = 'Szolgáltató';

$GLOBALS["lang"]['service_tag'] = 'Szolgáltatási elem';

$GLOBALS["lang"]['Service Tag'] = 'Szolgáltatási elem';

$GLOBALS["lang"]['service_type'] = 'Szolgáltatástípus';

$GLOBALS["lang"]['Service Type'] = 'Szolgáltatástípus';

$GLOBALS["lang"]['service_version'] = 'Szolgáltatási verzió';

$GLOBALS["lang"]['Service Version'] = 'Szolgáltatási verzió';

$GLOBALS["lang"]['Set'] = 'Beállítás';

$GLOBALS["lang"]['set_by'] = 'Beállítás';

$GLOBALS["lang"]['Set By'] = 'Beállítás';

$GLOBALS["lang"]['Set the size (normal or compact) of the tables on the List screens.'] = 'Állítsa be a táblázatok méretét (normál vagy kompakt) a Lista képernyőin.';

$GLOBALS["lang"]['severity'] = 'Súlyosság';

$GLOBALS["lang"]['Severity'] = 'Súlyosság';

$GLOBALS["lang"]['severity_text'] = 'Súlyossági szöveg';

$GLOBALS["lang"]['Severity Text'] = 'Súlyossági szöveg';

$GLOBALS["lang"]['Severity is calculated from the <code>base_score</code> and can be one of: None, Low, Medium, High, Critical.'] = 'Súlyosság kiszámítása a <code>base_score</code> és lehet az egyik: nincs, alacsony, közepes, magas, kritikus.';

$GLOBALS["lang"]['Seychelles'] = 'Seychelle-szigetek';

$GLOBALS["lang"]['share'] = 'Megosztás';

$GLOBALS["lang"]['Share'] = 'Megosztás';

$GLOBALS["lang"]['Share Name'] = 'Megosztás neve';

$GLOBALS["lang"]['shared'] = 'Megosztva';

$GLOBALS["lang"]['Shared'] = 'Megosztva';

$GLOBALS["lang"]['shared_name'] = 'Megosztott név';

$GLOBALS["lang"]['Shared Name'] = 'Megosztott név';

$GLOBALS["lang"]['shell'] = 'Shell';

$GLOBALS["lang"]['Shell'] = 'Shell';

$GLOBALS["lang"]['Ship Date'] = 'Hajó dátuma';

$GLOBALS["lang"]['short'] = 'Rövid';

$GLOBALS["lang"]['Short'] = 'Rövid';

$GLOBALS["lang"]['Should I remove all non-current data from this device?'] = 'Eltávolítsam az összes nem aktuális adatot erről az eszközről?';

$GLOBALS["lang"]['Should this file (or pattern) be used to exclude files from being reported. Normally, to audit files, this is set to <code>y</code>.'] = 'Ha ezt a fájlt (vagy mintát) arra használják, hogy kizárják a fájlokat a jelentésből. Általában az ellenőrzési fájlok, ez a <code>y</code>.';

$GLOBALS["lang"]['Should this vendor be used when retrieving vulnerabilities from FirstWave.'] = 'Ha ezt az eladót használják a FirstWave sebezhetőségeinek megszerzésekor.';

$GLOBALS["lang"]['Should we add devices from the remote service, locally.'] = 'Adjunk hozzá eszközöket a távoli szolgáltatásból, helyi szinten.';

$GLOBALS["lang"]['Should we apply this license to the selected Org as well as the Orgs children?'] = 'Alkalmazzuk ezt az engedélyt a kiválasztott Org-ra és az Orgs-gyerekekre is?';

$GLOBALS["lang"]['Should we consider a filtered port to be an open port - and therefore flag this IP as having a device attached?'] = 'Tekintsünk egy szűrt portot nyílt portnak, és ezért jelöljük meg ezt az IP-t, mint egy eszközt?';

$GLOBALS["lang"]['Should we consider an open|filtered port to be an open port - and therefore flag this IP as having a device attached?'] = 'Tekintsünk egy nyitott 124-es; szűrt portot nyílt portnak - és ezért jelöljük meg ezt az IP-t, mint egy eszközt?';

$GLOBALS["lang"]['Should we expose this group in the web interface.'] = 'Ha leleplezzük ezt a csoportot a web interfészben.';

$GLOBALS["lang"]['Should we expose this query in the list of reports under the Report menu in the web interface.'] = 'Ha felfedjük ezt a kérdést a jelentés menüpont alatt a webes felületen lévő jelentések listáján.';

$GLOBALS["lang"]['Should we expose this query in the list of reports under the Reports menu in the web interface.'] = 'Ha ezt a lekérdezést közzétesszük a Jelentések menüpont alatt a webes felületen.';

$GLOBALS["lang"]['Should we install Open-Scap on the target machine.'] = 'Ha az Open- Scap-et telepítjük a célgépre.';

$GLOBALS["lang"]['Should we match a device based mac address even if its a known likely duplicate from VMware.'] = 'Ha egyezünk egy eszközalapú Mac címmel, még akkor is, ha a VMware ismert másolata.';

$GLOBALS["lang"]['Should we match a device based on its DNS fqdn.'] = 'Összeillenénk egy DNS fqdn alapú eszközzel?';

$GLOBALS["lang"]['Should we match a device based on its DNS hostname.'] = 'Ha egyezik egy eszköz alapján DNS hostname.';

$GLOBALS["lang"]['Should we match a device based on its UUID.'] = 'Egyezzünk meg egy eszközzel a UUID alapján.';

$GLOBALS["lang"]['Should we match a device based on its dbus id.'] = 'Egyezzünk meg egy Dbus azonosító alapján.';

$GLOBALS["lang"]['Should we match a device based on its fqdn.'] = 'Összeillenénk egy fqdn alapú eszközzel?';

$GLOBALS["lang"]['Should we match a device based on its hostname and UUID.'] = 'Ha egyezik egy eszköz alapján hostname és UUID.';

$GLOBALS["lang"]['Should we match a device based on its hostname and dbus id.'] = 'Ha egyezik egy eszköz alapján hostname és dbus ID.';

$GLOBALS["lang"]['Should we match a device based on its hostname and serial.'] = 'Ha egyezik egy eszköz alapján hostname és sorozat.';

$GLOBALS["lang"]['Should we match a device based on its ip if we have an existing device with no data.'] = 'Ha egyezünk az IP-jén alapuló eszközzel, ha van egy meglévő eszközünk adat nélkül.';

$GLOBALS["lang"]['Should we match a device based on its ip.'] = 'Egyezzünk meg az IP-jén alapuló eszközzel.';

$GLOBALS["lang"]['Should we match a device based on its mac address.'] = 'Ha egyezik egy eszköz alapján a Mac cím.';

$GLOBALS["lang"]['Should we match a device based on its serial and type.'] = 'Ha egyezik egy eszköz alapján a sorozat és a típus.';

$GLOBALS["lang"]['Should we match a device based on its serial number.'] = 'A sorozatszáma alapján kell azonosítanunk.';

$GLOBALS["lang"]['Should we match a device based only on its SNMP sysName and serial.'] = 'Ha egyezik egy eszköz alapján SNMP sysName és sorozat.';

$GLOBALS["lang"]['Should we match a device based only on its SNMP sysName.'] = 'Ha egyezik egy eszköz alapján SNMP sysName.';

$GLOBALS["lang"]['Should we match a device based only on its hostname.'] = 'Ha egyezik egy eszköz alapján csak a hostname.';

$GLOBALS["lang"]['Should we ping the IP before attempting to scan it? If it does not respond to the ping, skip this device.'] = 'Megpingeljük az IP-t, mielőtt megpróbálnánk letapogatni? Ha nem reagál a ping-re, hagyja ki ezt az eszközt.';

$GLOBALS["lang"]['Should we populate the external system from our local devices.'] = 'Ha benépesítjük a külső rendszert a helyi eszközeinkből.';

$GLOBALS["lang"]['Should we run an audit and submit it (y/n).'] = 'Vizsgáljuk meg és nyújtsuk be (y / n).';

$GLOBALS["lang"]['Should we test for SNMP using UDP port 161.'] = 'Teszteljük az SNMP-t az UDP 161-es portjával?';

$GLOBALS["lang"]['Should we test for SSH using TCP port 22.'] = 'A 22-es TCP port segítségével teszteljük az SSH-t.';

$GLOBALS["lang"]['Should we test for WMI using TCP port 135.'] = 'Teszteljük WMI-re a TCP 135-ös portját?';

$GLOBALS["lang"]['Should we uninstall the agent (y/n).'] = 'Ha eltávolítjuk az ügynököt (y / n).';

$GLOBALS["lang"]['Should we use this method to authenticate user credentials. Set to <code>y</code> or <code>n</code>.'] = 'Használjuk ezt a módszert a felhasználói adatok hitelesítésére? Beállítás <code>y</code> vagy <code>n</code>.';

$GLOBALS["lang"]['Should we use this method to populate a users roles. The field <code>use_auth</code> must be set to <code>y</code> to use this. Set to <code>y</code> or <code>n</code>.'] = 'Ha ezt a módszert használjuk a felhasználói szerepek népszerűsítésére. A mező <code>use_auth</code> be kell állítani: <code>y</code> Ezt használni. Beállítás <code>y</code> vagy <code>n</code>.';

$GLOBALS["lang"]['Show All'] = 'Az összes megjelenítése';

$GLOBALS["lang"]['sid'] = 'Sid.';

$GLOBALS["lang"]['Sid'] = 'Sid.';

$GLOBALS["lang"]['sidebar'] = 'Oldalsáv';

$GLOBALS["lang"]['Sidebar'] = 'Oldalsáv';

$GLOBALS["lang"]['Sierra Leone'] = 'Sierra Leone';

$GLOBALS["lang"]['Singapore'] = 'Szingapúr';

$GLOBALS["lang"]['Site A'] = '"A" terület';

$GLOBALS["lang"]['Site B'] = '"B" terület';

$GLOBALS["lang"]['site_hours_a'] = '"A" oldal';

$GLOBALS["lang"]['Site Hours A'] = '"A" oldal';

$GLOBALS["lang"]['site_hours_b'] = '"B" oldal';

$GLOBALS["lang"]['Site Hours B'] = '"B" oldal';

$GLOBALS["lang"]['size'] = 'Méret';

$GLOBALS["lang"]['Size'] = 'Méret';

$GLOBALS["lang"]['slaves'] = 'Rabszolgák';

$GLOBALS["lang"]['Slaves'] = 'Rabszolgák';

$GLOBALS["lang"]['Slovakia (Slovak Republic)'] = 'Szlovákia (Szlovákia)';

$GLOBALS["lang"]['Slovenia'] = 'Szlovénia';

$GLOBALS["lang"]['Smart Status'] = 'Intelligens állapot';

$GLOBALS["lang"]['smversion'] = 'Keverés';

$GLOBALS["lang"]['Smversion'] = 'Keverés';

$GLOBALS["lang"]['Sneaky'] = 'Sneaky';

$GLOBALS["lang"]['snmp_enterprise_id'] = 'Snmp Enterprise ID';

$GLOBALS["lang"]['Snmp Enterprise ID'] = 'Snmp Enterprise ID';

$GLOBALS["lang"]['snmp_enterprise_name'] = 'Snmp Enterprise név';

$GLOBALS["lang"]['Snmp Enterprise Name'] = 'Snmp Enterprise név';

$GLOBALS["lang"]['snmp_oid'] = 'Snmp Oid';

$GLOBALS["lang"]['Snmp Oid'] = 'Snmp Oid';

$GLOBALS["lang"]['snmp_timeout'] = 'Snmp Időpont';

$GLOBALS["lang"]['Snmp Timeout'] = 'Snmp Időpont';

$GLOBALS["lang"]['snmp_version'] = 'Snmp Verzió';

$GLOBALS["lang"]['Snmp Version'] = 'Snmp Verzió';

$GLOBALS["lang"]['socket'] = 'Zokni';

$GLOBALS["lang"]['Socket'] = 'Zokni';

$GLOBALS["lang"]['software'] = 'Szoftver';

$GLOBALS["lang"]['Software'] = 'Szoftver';

$GLOBALS["lang"]['Software Found Last 7 Days'] = 'Szoftver talált utolsó 7 nap';

$GLOBALS["lang"]['Software Found Today'] = 'Szoftver talált ma';

$GLOBALS["lang"]['Software Found Yesterday'] = 'Szoftver talált tegnap';

$GLOBALS["lang"]['software_key'] = 'Szoftverkulcs';

$GLOBALS["lang"]['Software Key'] = 'Szoftverkulcs';

$GLOBALS["lang"]['software_name'] = 'Szoftvernév';

$GLOBALS["lang"]['Software Name'] = 'Szoftvernév';

$GLOBALS["lang"]['Software Policies'] = 'Szoftverpolitika';

$GLOBALS["lang"]['software_revision'] = 'Szoftver felülvizsgálata';

$GLOBALS["lang"]['Software Revision'] = 'Szoftver felülvizsgálata';

$GLOBALS["lang"]['software_version'] = 'Szoftververzió';

$GLOBALS["lang"]['Software Version'] = 'Szoftververzió';

$GLOBALS["lang"]['Solaris'] = 'Solaris';

$GLOBALS["lang"]['Solomon Islands'] = 'Salamon-szigetek';

$GLOBALS["lang"]['Somalia, Somali Republic'] = 'Szomália, Szomália';

$GLOBALS["lang"]['sound'] = 'Hang';

$GLOBALS["lang"]['Sound'] = 'Hang';

$GLOBALS["lang"]['source'] = 'Forrás';

$GLOBALS["lang"]['Source'] = 'Forrás';

$GLOBALS["lang"]['South Africa'] = 'Dél-Afrika';

$GLOBALS["lang"]['South Georgia and the South Sandwich Islands'] = 'Dél-Georgia és a Dél-Sandwich-szigetek';

$GLOBALS["lang"]['Spain'] = 'Spanyolország';

$GLOBALS["lang"]['Spanish'] = 'Spanyol';

$GLOBALS["lang"]['Specific to Azure.'] = 'Azúrra specializálódott.';

$GLOBALS["lang"]['Specific to OKTA.'] = 'Az OKTA-ra specializálódott.';

$GLOBALS["lang"]['Specifies a comma-separated list of targets (no spaces) to be excluded from the scan. The list you pass in uses normal Nmap syntax, so it can include hostnames, CIDR netblocks, octet ranges, etc.'] = 'Meghatározza a célpontok (szóközök nélküli), a letapogatásból kizárandó listáját. A megadott lista normál Nmap szintaxist használ, így lehet benne hostname, CIDR netblocks, oktettartományok, stb.';

$GLOBALS["lang"]['speed'] = 'Sebesség';

$GLOBALS["lang"]['Speed'] = 'Sebesség';

$GLOBALS["lang"]['speed_down_a'] = 'Sebesség lefelé A';

$GLOBALS["lang"]['Speed Down A'] = 'Sebesség lefelé A';

$GLOBALS["lang"]['speed_down_b'] = 'Sebesség lefelé B';

$GLOBALS["lang"]['Speed Down B'] = 'Sebesség lefelé B';

$GLOBALS["lang"]['speed_up_a'] = 'A-sebesség';

$GLOBALS["lang"]['Speed Up A'] = 'A-sebesség';

$GLOBALS["lang"]['speed_up_b'] = 'B sebesség';

$GLOBALS["lang"]['Speed Up B'] = 'B sebesség';

$GLOBALS["lang"]['sql'] = 'Sql';

$GLOBALS["lang"]['Sql'] = 'Sql';

$GLOBALS["lang"]['Sri Lanka'] = 'Srí Lanka';

$GLOBALS["lang"]['ssh_ports'] = 'Ssh Ports';

$GLOBALS["lang"]['Ssh Ports'] = 'Ssh Ports';

$GLOBALS["lang"]['ssh_timeout'] = 'Ssh Timeout';

$GLOBALS["lang"]['Ssh Timeout'] = 'Ssh Timeout';

$GLOBALS["lang"]['Stand-Alone'] = 'Egyedül';

$GLOBALS["lang"]['Standard'] = 'Szabvány';

$GLOBALS["lang"]['standard_id'] = 'Szabványos azonosító';

$GLOBALS["lang"]['Standard ID'] = 'Szabványos azonosító';

$GLOBALS["lang"]['standards'] = 'Szabványok';

$GLOBALS["lang"]['Standards'] = 'Szabványok';

$GLOBALS["lang"]['standards_policies'] = 'Szabványpolitikák';

$GLOBALS["lang"]['Standards Policies'] = 'Szabványpolitikák';

$GLOBALS["lang"]['standards_results'] = 'Szabványeredmények';

$GLOBALS["lang"]['Standards Results'] = 'Szabványeredmények';

$GLOBALS["lang"]['start_date'] = 'Kezdés dátuma';

$GLOBALS["lang"]['Start Date'] = 'Kezdés dátuma';

$GLOBALS["lang"]['start_mode'] = 'Indítási mód';

$GLOBALS["lang"]['Start Mode'] = 'Indítási mód';

$GLOBALS["lang"]['started_date'] = 'Indítás dátuma';

$GLOBALS["lang"]['Started Date'] = 'Indítás dátuma';

$GLOBALS["lang"]['state'] = 'Állam';

$GLOBALS["lang"]['State'] = 'Állam';

$GLOBALS["lang"]['Stats'] = 'Statok';

$GLOBALS["lang"]['status'] = 'Állapot';

$GLOBALS["lang"]['Status'] = 'Állapot';

$GLOBALS["lang"]['Storage'] = 'Tárolás';

$GLOBALS["lang"]['storage_count'] = 'Tárolási szám';

$GLOBALS["lang"]['Storage Count'] = 'Tárolási szám';

$GLOBALS["lang"]['Storage-Area Network'] = 'Storage- Area Network';

$GLOBALS["lang"]['string'] = 'Húrok';

$GLOBALS["lang"]['String'] = 'Húrok';

$GLOBALS["lang"]['sub_resource_id'] = 'Alerőforrás-azonosító';

$GLOBALS["lang"]['Sub Resource ID'] = 'Alerőforrás-azonosító';

$GLOBALS["lang"]['sub_type'] = 'Altípus';

$GLOBALS["lang"]['Sub Type'] = 'Altípus';

$GLOBALS["lang"]['subject_key_ident'] = 'A téma fő azonosítója';

$GLOBALS["lang"]['Subject Key Ident'] = 'A téma fő azonosítója';

$GLOBALS["lang"]['Submit'] = 'Engedély';

$GLOBALS["lang"]['Submitted From'] = 'Benyújtva';

$GLOBALS["lang"]['subnet'] = 'Alhálózat';

$GLOBALS["lang"]['Subnet'] = 'Alhálózat';

$GLOBALS["lang"]['Subscription ID'] = 'Előfizetés azonosítója';

$GLOBALS["lang"]['suburb'] = 'Suburb';

$GLOBALS["lang"]['Suburb'] = 'Suburb';

$GLOBALS["lang"]['Success'] = 'Siker';

$GLOBALS["lang"]['Sudan'] = 'Szudán';

$GLOBALS["lang"]['Sudo Password'] = 'Sudo jelszó';

$GLOBALS["lang"]['Sudo Password (optional)'] = 'Sudo jelszó (nem kötelező)';

$GLOBALS["lang"]['suite'] = 'Lakosztály';

$GLOBALS["lang"]['Suite'] = 'Lakosztály';

$GLOBALS["lang"]['summaries'] = 'Összefoglalások';

$GLOBALS["lang"]['Summaries'] = 'Összefoglalások';

$GLOBALS["lang"]['Summary'] = 'Összefoglaló';

$GLOBALS["lang"]['Sunday'] = 'Vasárnap';

$GLOBALS["lang"]['supplier'] = 'Szállító';

$GLOBALS["lang"]['Supplier'] = 'Szállító';

$GLOBALS["lang"]['Support'] = 'Támogatás';

$GLOBALS["lang"]['Supported types are <code>subnet</code>, <code>seed</code> and <code>active directory</code>.'] = 'Támogatott típusok: <code>subnet</code>, <code>seed</code> és <code>active directory</code>.';

$GLOBALS["lang"]['Suriname'] = 'Suriname';

$GLOBALS["lang"]['Svalbard & Jan Mayen Islands'] = 'Svalbard & Jan Mayen-szigetek';

$GLOBALS["lang"]['Swaziland'] = 'Szváziföld';

$GLOBALS["lang"]['Sweden'] = 'Svédország';

$GLOBALS["lang"]['switch_device_id'] = 'A kapcsolóeszköz azonosítója';

$GLOBALS["lang"]['Switch Device ID'] = 'A kapcsolóeszköz azonosítója';

$GLOBALS["lang"]['switch_port'] = 'Port kapcsolása';

$GLOBALS["lang"]['Switch Port'] = 'Port kapcsolása';

$GLOBALS["lang"]['Switzerland, Swiss Confederation'] = 'Svájc, Svájci Államszövetség';

$GLOBALS["lang"]['Syrian Arab Republic'] = 'Szíriai Arab Köztársaság';

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

$GLOBALS["lang"]['system_component'] = 'Rendszerösszetevő';

$GLOBALS["lang"]['System Component'] = 'Rendszerösszetevő';

$GLOBALS["lang"]['System-Area Network'] = 'Rendszerterület-hálózat';

$GLOBALS["lang"]['TX Bitrate'] = 'TX bitráta';

$GLOBALS["lang"]['TX Freq'] = 'TX Freq';

$GLOBALS["lang"]['TX Level'] = 'TX szint';

$GLOBALS["lang"]['TX Power'] = 'TX teljesítmény';

$GLOBALS["lang"]['TX Profile'] = 'TX profil';

$GLOBALS["lang"]['table'] = 'Táblázat';

$GLOBALS["lang"]['Table'] = 'Táblázat';

$GLOBALS["lang"]['tag'] = 'Tag';

$GLOBALS["lang"]['Tag'] = 'Tag';

$GLOBALS["lang"]['tag_1'] = 'Tag 1';

$GLOBALS["lang"]['Tag 1'] = 'Tag 1';

$GLOBALS["lang"]['tag_2'] = '2. elem';

$GLOBALS["lang"]['Tag 2'] = '2. elem';

$GLOBALS["lang"]['tag_3'] = '3. elem';

$GLOBALS["lang"]['Tag 3'] = '3. elem';

$GLOBALS["lang"]['tags'] = 'Címkék';

$GLOBALS["lang"]['Tags'] = 'Címkék';

$GLOBALS["lang"]['Tags :: '] = 'Címkék: ';

$GLOBALS["lang"]['Taiwan'] = 'Tajvan';

$GLOBALS["lang"]['Tajikistan'] = 'Tádzsikisztán';

$GLOBALS["lang"]['Tanzania'] = 'Tanzánia';

$GLOBALS["lang"]['task'] = 'Feladat';

$GLOBALS["lang"]['Task'] = 'Feladat';

$GLOBALS["lang"]['tasks'] = 'Feladatok';

$GLOBALS["lang"]['Tasks'] = 'Feladatok';

$GLOBALS["lang"]['tcp_ports'] = 'Tcp Ports';

$GLOBALS["lang"]['Tcp Ports'] = 'Tcp Ports';

$GLOBALS["lang"]['tenant'] = 'Bérlő';

$GLOBALS["lang"]['Tenant'] = 'Bérlő';

$GLOBALS["lang"]['ternary'] = 'Ternary';

$GLOBALS["lang"]['Ternary'] = 'Ternary';

$GLOBALS["lang"]['Test 1'] = 'vizsgálat';

$GLOBALS["lang"]['Test 2'] = 'vizsgálat';

$GLOBALS["lang"]['Test 3'] = 'vizsgálat';

$GLOBALS["lang"]['test_minutes'] = 'Vizsgálati jegyzőkönyv';

$GLOBALS["lang"]['Test Minutes'] = 'Vizsgálati jegyzőkönyv';

$GLOBALS["lang"]['test_os'] = 'Vizsgálati Os';

$GLOBALS["lang"]['Test Os'] = 'Vizsgálati Os';

$GLOBALS["lang"]['test_subnet'] = 'Vizsgálati alháló';

$GLOBALS["lang"]['Test Subnet'] = 'Vizsgálati alháló';

$GLOBALS["lang"]['tests'] = 'Vizsgálatok';

$GLOBALS["lang"]['Tests'] = 'Vizsgálatok';

$GLOBALS["lang"]['Text'] = 'Szöveg';

$GLOBALS["lang"]['Thailand'] = 'Thaiföld';

$GLOBALS["lang"]['The Active Directory domain to retrieve a list of subnets from.'] = 'Az Active Directory domain, hogy megszerezze a lista alhálók.';

$GLOBALS["lang"]['The Active Directory server to retrieve a list of subnets from.'] = 'Az Active Directory szerver az alhálózatok listájának letöltéséhez.';

$GLOBALS["lang"]['The Automatable metric captures the answer to the question <strong>Can an attacker automate exploitation events for this vulnerability across multiple targets?</strong> based on steps 1-4 of the kill chain. These steps are reconnaissance, weaponization, delivery, and exploitation (Not Defined, No, Yes).'] = 'Az Automatizálható metrikus rögzíti a választ a kérdésre <strong>Egy támadó képes-e a különböző célpontok közötti sebezhetőséget kihasználni?</strong> A gyilkos lánc 14- es lépései alapján. Ezek a lépések felderítés, fegyverzet, szállítás és kizsákmányolás (Nem meghatározott, Nem, Igen).';

$GLOBALS["lang"]['The CVE identifier.'] = 'A CVE azonosító.';

$GLOBALS["lang"]['The Cloud that owns this item. Links to <code>clouds.id</code>.'] = 'A Felhő, ami ezt a tárgyat birtokolja. Kapcsolatok <code>clouds.id</code>.';

$GLOBALS["lang"]['The Group used to run the Baseline. Links to <code>groups.id</code>.'] = 'A csoport vezette az alapvonalat. Kapcsolatok <code>groups.id</code>.';

$GLOBALS["lang"]['The ID from the devices table (the devices.name will be displayed) of the NTU at this end of the connection. Links to <code>devices.id</code>.'] = 'Az NTU eszköztáblájának azonosítója (a devices.name megjelenik) a kapcsolat ezen végén. Kapcsolatok <code>devices.id</code>.';

$GLOBALS["lang"]['The ID from the imported benchmark policy.'] = 'Az importált referenciamutató-politika azonosítója.';

$GLOBALS["lang"]['The ID from the locations table (the locations.name will be displayed) of this end of the connection. Links to <code>locations.id</code>. The A location is usually the <code>FROM</code> location.'] = 'A kapcsolat ezen végén található azonosító (a hely neve megjelenik). Kapcsolatok <code>locations.id</code>. Az A hely általában a <code>FROM</code> a helyszín.';

$GLOBALS["lang"]['The ID from the locations table (the locations.name will be displayed) of this end of the connection. Links to <code>locations.id</code>. The B location is usually the <code>TO</code> location.'] = 'A kapcsolat ezen végén található azonosító (a hely neve megjelenik). Kapcsolatok <code>locations.id</code>. A B hely általában a <code>TO</code> a helyszín.';

$GLOBALS["lang"]['The ID of the associated device (if any). Links to <code>devices.id</code>.'] = 'A kapcsolódó eszköz azonosítója (ha van ilyen). Kapcsolatok <code>devices.id</code>.';

$GLOBALS["lang"]['The ID of the associated discovery. Linked to <code>discoveries.id</code>'] = 'A társított felfedezés azonosítója. Kapcsolat <code>discoveries.id</code>';

$GLOBALS["lang"]['The ID of the item of the associated type.'] = 'A kapcsolódó típus tételének azonosítója.';

$GLOBALS["lang"]['The ID of this orgs parent org. Linked to <code>orgs.id</code>'] = 'Ennek az orgának az azonosítója. Kapcsolat <code>orgs.id</code>';

$GLOBALS["lang"]['The ID provided by the provider.'] = 'A szolgáltató által megadott azonosító.';

$GLOBALS["lang"]['The ID retrieved from a Cloud discovery.'] = 'Az azonosítót egy Cloud felfedezés alapján találták meg.';

$GLOBALS["lang"]['The IP address of this collector used to communicate with the server.'] = 'A gyűjtőnek a szerverrel való kommunikációhoz használt IP-címe.';

$GLOBALS["lang"]['The IP of the device to start a seed discovery with.'] = 'Az eszköz IP-je, hogy elindítsa a magfelismerést.';

$GLOBALS["lang"]['The IP of the external interface.'] = 'A külső felület IP-je.';

$GLOBALS["lang"]['The IP of the internal interface.'] = 'A belső interfész IP-je.';

$GLOBALS["lang"]['The ISP or Telco providing this link.'] = 'A linket szolgáltató ISP vagy Telco.';

$GLOBALS["lang"]['The JSON record from Mitre.'] = 'A JSON lemez Mitre-től.';

$GLOBALS["lang"]['The JSON record from the NVD feed.'] = 'A JSON lemez az NVD-ből.';

$GLOBALS["lang"]['The LDAP OU of this user (if LDAP is used).'] = 'A felhasználó LDAP OU-ja (ha LDAP-ot használnak).';

$GLOBALS["lang"]['The Location that contains this network. Links to <code>locations.id</code>.'] = 'A hálózat helye. Kapcsolatok <code>locations.id</code>.';

$GLOBALS["lang"]['The NVD assigned base status.'] = 'Az NVD bázis státuszt kapott.';

$GLOBALS["lang"]['The Nmap timing preset.'] = 'A Nmap időzítő beállítás.';

$GLOBALS["lang"]['The OS this package should be reported against. Blank for all. Use the percent sign % as a wildcard. Will be tested against os_group, os_family and os_name in that order.'] = 'Ezt a csomagot jelenteni kell ellene. Mindent elfelejt. Használja a%% -ot vadkártyaként. Az OS _ group, az os _ family és az os _ name ellen lesz tesztelve ebben a sorrendben.';

$GLOBALS["lang"]['The Open-AudIT API'] = 'Az Open- AudIT API';

$GLOBALS["lang"]['The Open-AudIT id of the linked cloud. Links to <code>clouds.id</code>.'] = 'Az összekapcsolt felhő Open- AudIT azonosítója. Kapcsolatok <code>clouds.id</code>.';

$GLOBALS["lang"]['The Open-AudIT server code was exeucted within this file.'] = 'Az Open- Aud Az IT kiszolgáló kódját ebben a fájlban továbbították.';

$GLOBALS["lang"]['The Open-AudIT server code was exeucted within this function.'] = 'Az Open- Aud Az IT kiszolgáló kódját ezen a függvényen belül továbbították.';

$GLOBALS["lang"]['The Organisation that owns this item. Links to <code>orgs.id</code>.'] = 'A szervezet, amely ezt a tételt. Kapcsolatok <code>orgs.id</code>.';

$GLOBALS["lang"]['The Process Identifier of the running associated discovery.'] = 'A futáshoz kapcsolódó felfedezés folyamatazonosítója.';

$GLOBALS["lang"]['The RU positon of the top of this device.'] = 'A VT ezen eszköz tetejének póznája.';

$GLOBALS["lang"]['The SNMP community string.'] = 'Az SNMP közösségi húrja.';

$GLOBALS["lang"]['The SNMP v3 Authentication Passphrase.'] = 'Az SNMP v3 Authentication Passphrase.';

$GLOBALS["lang"]['The SNMP v3 Authentication Protocol.'] = 'Az SNMP v3 hitelesítési protokoll.';

$GLOBALS["lang"]['The SNMP v3 Privacy Passphrase.'] = 'Az SNMP v3 Privacy Passphrase.';

$GLOBALS["lang"]['The SNMP v3 Privacy Protocol.'] = 'Az SNMP v3 adatvédelmi protokoll.';

$GLOBALS["lang"]['The SNMP v3 Security Level.'] = 'Az SNMP v3 biztonsági szint.';

$GLOBALS["lang"]['The SNMP v3 Security Name.'] = 'Az SNMP v3 biztonsági neve.';

$GLOBALS["lang"]['The SNMPv3 context Engine ID (optional).'] = 'Az SNMPv3 szöveges motorazonosító (opcionális).';

$GLOBALS["lang"]['The SNMPv3 context Name (optional).'] = 'Az SNMPv3 kontextus neve (nem kötelező).';

$GLOBALS["lang"]['The URL of the external system.'] = 'A külső rendszer URL-je.';

$GLOBALS["lang"]['The URL of your Open-AudIT Server that this Collector will report to (no trailing slash).'] = 'Az Open- AudIT URL- je Szerver, hogy ez a Gyűjtő fog jelenteni (nincs nyom per).';

$GLOBALS["lang"]['The URL the audit scripts should submit their result to.'] = 'Az URL-nek a könyvvizsgálati forgatókönyvek benyújtják az eredményeket.';

$GLOBALS["lang"]['The actual full name of this user.'] = 'A felhasználó teljes neve.';

$GLOBALS["lang"]['The associated baseline. Links to <code>baselines.id</code>.'] = 'A kapcsolódó kiindulási érték. Kapcsolatok <code>baselines.id</code>.';

$GLOBALS["lang"]['The associated discovery (if required). Links to <code>discoveries.id</code>.'] = 'A kapcsolódó felfedezés (ha szükséges). Kapcsolatok <code>discoveries.id</code>.';

$GLOBALS["lang"]['The attribute to test (from the <code>devices</code> table).'] = 'Az attribútum a vizsgálat (a <code>devices</code> táblázat).';

$GLOBALS["lang"]['The attribute to test (must match an external field name from below).'] = 'A vizsgálat attribútuma (meg kell egyeznie egy külső mező nevével lentről).';

$GLOBALS["lang"]['The audit script upon which to base your customisations.'] = 'A könyvvizsgálati szkript, amire a testreszabásaidat alapozhatod.';

$GLOBALS["lang"]['The base path from which to search for Users.'] = 'Az alapútvonal, ahonnan kereshetjük a Felhasználókat.';

$GLOBALS["lang"]['The benchmark type.'] = 'A referenciatípus.';

$GLOBALS["lang"]['The building the rack is located in.'] = 'Az épület az állvány található.';

$GLOBALS["lang"]['The calculated number of devices to be created externally.'] = 'A külsőleg létrehozandó eszközök számított száma.';

$GLOBALS["lang"]['The calculated number of devices to be created in Open-AudIT.'] = 'Az Open- AudIT-ben létrehozandó eszközök számított száma.';

$GLOBALS["lang"]['The collectors internal IP used when it runs a discovery.'] = 'A gyűjtők belső IP használt, amikor fut egy felfedezés.';

$GLOBALS["lang"]['The column name from the foreign table. Should be one of: class, environment, status, type or menu_category.'] = 'Az oszlop neve a külföldi asztalról. A következő kategóriák egyikének kell lennie: osztály, környezet, állapot, típus vagy menü _ kategória.';

$GLOBALS["lang"]['The command executed upon the target device or Open-AudIT server code executed during discovery.'] = 'A parancs végrehajtva a cél eszköz vagy Open- AudIT szerver kód végrehajtása során felfedezés.';

$GLOBALS["lang"]['The configuration of your cluster can be: <code>active/active</code>, <code>active/passive</code>, <code>N+1</code>, <code>N+M</code>, <code>N-to-1</code>, <code>N-to-N</code>, <code>other</code> or blank.'] = 'A klaszter konfigurációja: <code>active/active</code>, <code>active/passive</code>, <code>N+1</code>, <code>N+M</code>, <code>N-to-1</code>, <code>N-to-N</code>, <code>other</code> vagy üres.';

$GLOBALS["lang"]['The credentials password. If the credentials are an SSH Key, this is the password used to unlock the key and is optional.'] = 'A jelszó. Ha a mandátumok SSH kulcsok, ez a jelszó a kulcs feloldásához, és nem kötelező.';

$GLOBALS["lang"]['The credentials username.'] = 'A felhasználónév.';

$GLOBALS["lang"]['The current status of the Cloud Discovery.'] = 'A Cloud Discovery jelenlegi helyzete.';

$GLOBALS["lang"]['The current status of the discovery.'] = 'A felfedezés jelenlegi helyzete.';

$GLOBALS["lang"]['The dashboard that will be shown by default for this user. Links to <code>dashboards.id</code>.'] = 'A műszerfal, ami alapértelmezés szerint jelenik meg a felhasználó számára. Kapcsolatok <code>dashboards.id</code>.';

$GLOBALS["lang"]['The database version and web version are inconsistent.'] = 'Az adatbázis verziója és a web verziója következetlen.';

$GLOBALS["lang"]['The date of license expiration.'] = 'Az engedély lejárta.';

$GLOBALS["lang"]['The date the software is discontinued by the manufacturer. Usually replaced by a newer version. Maintenance may still be available.'] = 'Az a dátum, amikor a gyártó megszakítja a szoftvert. Általában egy újabb változattal helyettesítik. A karbantartás még mindig elérhető lehet.';

$GLOBALS["lang"]['The date the software no longer receives updates and is effectively discontinued altogether. Maintenance is discontinued.'] = 'Az a dátum, amikor a szoftver már nem kap frissítéseket, és gyakorlatilag teljesen megszűnik. A fenntartó kezelést abba kell hagyni.';

$GLOBALS["lang"]['The date this item was changed or added (read only). NOTE - This is the timestamp from the server.'] = 'A tétel módosításának vagy hozzáadásának dátuma (csak olvasható). MEGJEGYZÉS - Ez a szerver időbélyegzője.';

$GLOBALS["lang"]['The date/time when this result was created.'] = 'Az eredmény létrehozásának dátuma / időpontja.';

$GLOBALS["lang"]['The day of the month when this task should execute (* for every day).'] = 'A hónap napja, amikor ezt a feladatot végre kell hajtani (* minden nap).';

$GLOBALS["lang"]['The day of the week when this task should execute (* for every day).'] = 'A hét azon napja, amikor ennek a feladatnak megvalósulnia kell (* minden nap).';

$GLOBALS["lang"]['The default language assigned to any user created by this method.'] = 'Az ezzel a módszerrel létrehozott felhasználóhoz rendelt alapértelmezett nyelv.';

$GLOBALS["lang"]['The device must respond to an Nmap ping before it is considered online.'] = 'A készüléknek reagálnia kell egy Nmap ping-re, mielőtt online értékelnék.';

$GLOBALS["lang"]['The device within Open-AudIT. Links to <code>devices.id</code>.'] = 'Az eszköz az Open- Auditban. Kapcsolatok <code>devices.id</code>.';

$GLOBALS["lang"]['The direct link for the script is'] = 'A szkript közvetlen linkje:';

$GLOBALS["lang"]['The email address of the reciever'] = 'A kedvezményezett e-mail címe';

$GLOBALS["lang"]['The enterprise binary from FirstWave is required for a license. Please download Open-AudIT from'] = 'A vállalat bináris FirstWave szükséges a licenc. Kérjük, töltse le az Open- AudIT programot';

$GLOBALS["lang"]['The entire associated baseline this result is from.'] = 'A teljes kapcsolódó kiindulási érték ez az eredmény.';

$GLOBALS["lang"]['The externally referenced location ID. Usually populated by Cloud audits.'] = 'A külső referenciás helyazonosító. Általában a Cloud audit által lakott.';

$GLOBALS["lang"]['The first time that Open-AudIT retrieved details of this device.'] = 'Az első alkalom, hogy az Open- AudIT kinyerte az eszköz részleteit.';

$GLOBALS["lang"]['The floor the rack is located on.'] = 'A padló az állvány található.';

$GLOBALS["lang"]['The foreign table to reference. Should be one of: devices, locations, orgs or queries.'] = 'Az ajánlólevél. Valamelyik: eszközök, helyszínek, orgák vagy lekérdezések.';

$GLOBALS["lang"]['The format used for the output to be emailed.'] = 'A kimenet e-mailezéséhez használt formátum.';

$GLOBALS["lang"]['The fully qualified column upon which to group by. NOTE: When type = traffic, this represents the red query id.'] = 'A teljesen képzett oszlop, amely szerint csoportosan. MEGJEGYZÉS: Ha a típus = forgalom, ez a piros lekérdezési azonosító.';

$GLOBALS["lang"]['The fully qualified table.column. Multiple may be provided, separated by a comma (no spaces).'] = 'A teljesen képzett táblázat. Column. Többszörös lehet, vesszővel (szóközökkel) elválasztva.';

$GLOBALS["lang"]['The generated SQL query to test for this vulnerability. This field can be edited to correct the query as required.'] = 'A generált SQL lekérdezés tesztelni ezt a sebezhetőséget. Ez a mező szerkeszthető, hogy korrigálja a lekérdezés szükség szerint.';

$GLOBALS["lang"]['The group of devices on which the baseline was run against.'] = 'Az az eszközcsoport, amelyen az alapvonalat futották.';

$GLOBALS["lang"]['The group that provides a list of devices for the integration. Links to <code>groups.id</code>.'] = 'A csoport, amely az integrációs eszközök listáját tartalmazza. Kapcsolatok <code>groups.id</code>.';

$GLOBALS["lang"]['The hour of the day when this task should execute (* for every hour).'] = 'A nap órája, amikor ezt a feladatot végre kell hajtani (* óránként).';

$GLOBALS["lang"]['The id of the linked device. Links to <code>devices.id</code>'] = 'A csatlakoztatott eszköz azonosítója. Kapcsolatok <code>devices.id</code>';

$GLOBALS["lang"]['The identifier column (integer) in the database (read only).'] = 'Az adatbázis azonosító oszlopa (egész szám) (csak olvasható).';

$GLOBALS["lang"]['The importance of this baseline (not used yet).'] = 'Ennek az alapértéknek a jelentősége (még nem használt).';

$GLOBALS["lang"]['The integer of severity.'] = 'Az egész súlyosság.';

$GLOBALS["lang"]['The ip address of the Auth method.'] = 'Az Auth módszer IP-címe.';

$GLOBALS["lang"]['The language to translate the web interface into for the user.'] = 'A nyelv lefordítani a web felület a felhasználó számára.';

$GLOBALS["lang"]['The last date and time this item was executed (read only).'] = 'Az utolsó dátum és időpont, amikor ezt a tételt végrehajtották (csak olvasható).';

$GLOBALS["lang"]['The last time that Open-AudIT retrieved details of this device.'] = 'Az utolsó alkalom, hogy az Open- AudIT kinyerte az eszköz részleteit.';

$GLOBALS["lang"]['The last time this benchmarks was executed.'] = 'Az utolsó alkalom, amikor végrehajtották ezt a mércét.';

$GLOBALS["lang"]['The last time this integration was run.'] = 'Legutóbb ez az integráció ment végbe.';

$GLOBALS["lang"]['The line number assigned by the provider to the line at this end of the connection.'] = 'A kapcsolat ezen végén a szolgáltató által a vonalhoz rendelt sorszám.';

$GLOBALS["lang"]['The location the rack is located in. Links to <code>locations.id</code>.'] = 'A hely az állvány található. Kapcsolatok <code>locations.id</code>.';

$GLOBALS["lang"]['The locations address.'] = 'A helyszín címe.';

$GLOBALS["lang"]['The locations area.'] = 'A helyszín.';

$GLOBALS["lang"]['The locations city.'] = 'A helyekről.';

$GLOBALS["lang"]['The locations country.'] = 'A helyszínek országa.';

$GLOBALS["lang"]['The locations district.'] = 'A helyszín kerület.';

$GLOBALS["lang"]['The locations latitude.'] = 'A helyszín szélességi fokot mutat.';

$GLOBALS["lang"]['The locations level.'] = 'A helyszínek szintje.';

$GLOBALS["lang"]['The locations longitude.'] = 'A földrajzi hosszúság.';

$GLOBALS["lang"]['The locations phone.'] = 'A helyszín telefon.';

$GLOBALS["lang"]['The locations postcode.'] = 'A helyszínek irányítószáma.';

$GLOBALS["lang"]['The locations region.'] = 'A helyszíneken.';

$GLOBALS["lang"]['The locations room.'] = 'A helyiség.';

$GLOBALS["lang"]['The locations state.'] = 'A helyszínek szerint.';

$GLOBALS["lang"]['The locations suburb.'] = 'A külvárosi helyek.';

$GLOBALS["lang"]['The locations suite.'] = 'A helyszín lakosztály.';

$GLOBALS["lang"]['The maximum physical weight (in KGs) this rack can hold.'] = 'A maximális fizikai súly (KG) ez a rack képes tartani.';

$GLOBALS["lang"]['The maximum total BTUs this rack is rated for.'] = 'A maximális teljes BTUs erre a fogasra van értékelve.';

$GLOBALS["lang"]['The minute of the hour when this task should execute (* for every minute).'] = 'Az óra azon percei, amikor ennek a feladatnak végre kell hajtania (* minden percben).';

$GLOBALS["lang"]['The month of the year when this task should execute (* for every month).'] = 'Az év hónapja, amikor ezt a feladatot végre kell hajtani (* havonta).';

$GLOBALS["lang"]['The name given to this item.'] = 'A tétel neve.';

$GLOBALS["lang"]['The name given to this item. Ideally it should be unique.'] = 'A tétel neve. Ideális esetben egyedinek kellene lennie.';

$GLOBALS["lang"]['The name given to this user (used to login). Ideally it should be unique.'] = 'A felhasználónak adott név (a bejelentkezéshez használt). Ideális esetben egyedinek kellene lennie.';

$GLOBALS["lang"]['The name of the associated cloud (if required).'] = 'A kapcsolódó felhő neve (ha szükséges).';

$GLOBALS["lang"]['The name of the software package, as audited by Open-AudIT. Use the percent sign % as a wildcard.'] = 'Az Open- AudIT által ellenőrzött szoftvercsomag neve. Használja a%% -ot vadkártyaként.';

$GLOBALS["lang"]['The name of the user who last changed or added this item (read only).'] = 'Annak a felhasználónak a neve, aki utoljára megváltoztatta vagy hozzáadta ezt a tételt (csak olvasható).';

$GLOBALS["lang"]['The name provided by the provider.'] = 'A szolgáltató által megadott név.';

$GLOBALS["lang"]['The network in the format 192.168.1.0/24.'] = 'A hálózat 192.168.1.0 / 24 formátumban.';

$GLOBALS["lang"]['The network subnet to execute the discovery on.'] = 'A hálózati alhálózat, hogy végrehajtsa a felfedezést.';

$GLOBALS["lang"]['The number of RUs this device occupies.'] = 'Az eszköz által használt VT-k száma.';

$GLOBALS["lang"]['The number of associated locations. Links to <code>locations.cloud_id</code>.'] = 'A kapcsolódó helyek száma. Kapcsolatok <code>locations.cloud_id</code>.';

$GLOBALS["lang"]['The number of associated networks. Links to <code>networks.cloud_id</code>.'] = 'A kapcsolódó hálózatok száma. Kapcsolatok <code>networks.cloud_id</code>.';

$GLOBALS["lang"]['The number of audited devices in this cloud. Links to <code>devices.cloud_id</code> and <code>devices.serial</code>.'] = 'Az ellenőrzött eszközök száma ebben a felhőben. Kapcsolatok <code>devices.cloud_id</code> és <code>devices.serial</code>.';

$GLOBALS["lang"]['The number of critical severity vulnerabilities held by FirstWave (not in your database).'] = 'A FirstWave által birtokolt kritikus súlyosságú sebezhetőségek száma (nem az adatbázisban).';

$GLOBALS["lang"]['The number of devices found by this discovery.'] = 'A felfedezés során talált eszközök száma.';

$GLOBALS["lang"]['The number of devices in the associated group.'] = 'Az eszközök száma a társult csoportban.';

$GLOBALS["lang"]['The number of devices in this cloud with a state of running. Links to <code>devices.cloud_id</code> and <code>devices.instance_state</code>.'] = 'Az eszközök száma ebben a felhőben futási állapottal. Kapcsolatok <code>devices.cloud_id</code> és <code>devices.instance_state</code>.';

$GLOBALS["lang"]['The number of devices in this cloud with a state of stopped. Links to <code>devices.cloud_id</code> and <code>devices.instance_state</code>.'] = 'A felhőben lévő eszközök száma leállt. Kapcsolatok <code>devices.cloud_id</code> és <code>devices.instance_state</code>.';

$GLOBALS["lang"]['The number of devices in this cloud. Links to <code>devices.cloud_id</code>.'] = 'Az eszközök száma ebben a felhőben. Kapcsolatok <code>devices.cloud_id</code>.';

$GLOBALS["lang"]['The number of devices this benchmark will be executed upon. Derived from <code>benchmarks.devices</code>.'] = 'A referenciamutató-kezelők száma. Származtatott <code>benchmarks.devices</code>.';

$GLOBALS["lang"]['The number of devices to limit this discovery to.'] = 'Az eszközök száma, hogy korlátozzák ezt a felfedezést.';

$GLOBALS["lang"]['The number of high severity vulnerabilities held by FirstWave (not in your database).'] = 'A FirstWave birtokában lévő nagy súlyosságú sebezhetőségek száma (nincs az adatbázisban).';

$GLOBALS["lang"]['The number of low severity vulnerabilities held by FirstWave (not in your database).'] = 'A FirstWave birtokában lévő alacsony súlyosságú sebezhetőségek száma (nem az adatbázisodban).';

$GLOBALS["lang"]['The number of medium severity vulnerabilities held by FirstWave (not in your database).'] = 'A FirstWave birtokában lévő közepes súlyosságú sebezhetőségek száma (nincs az adatbázisban).';

$GLOBALS["lang"]['The number of purchased licenses.'] = 'A vásárolt engedélyek száma.';

$GLOBALS["lang"]['The number of seconds to try and communicate with the target IP.'] = 'A másodpercek száma, hogy megpróbálja és kommunikálni a cél IP.';

$GLOBALS["lang"]['The number of vulnerabilities without a severity held by FirstWave (not in your database).'] = 'A sebezhetőségek száma a FirstWave súlyossága nélkül (nincs az adatbázisodban).';

$GLOBALS["lang"]['The optional secondary column. NOTE: When type = traffic, this represents the yellow query id.'] = 'Az opcionális másodlagos oszlop. MEGJEGYZÉS: Ha a típus = forgalom, ez a sárga lekérdezési azonosító.';

$GLOBALS["lang"]['The optional third column. NOTE: When type = traffic, this represents the green query id.'] = 'A választható harmadik oszlop. MEGJEGYZÉS: Amikor a típus = forgalom, ez a zöld lekérdezés azonosító.';

$GLOBALS["lang"]['The orientation of this device.'] = 'Az eszköz iránya.';

$GLOBALS["lang"]['The password for the dn_account attribute.'] = 'A dn _ account attribútum jelszava.';

$GLOBALS["lang"]['The password used to access the external system.'] = 'A jelszó, amit a külső rendszerhez használnak.';

$GLOBALS["lang"]['The path to the file or directory.'] = 'A fájlhoz vagy könyvtárhoz vezető út.';

$GLOBALS["lang"]['The path to the file or directory. Directories should end with a trailing slash.'] = 'A fájlhoz vagy könyvtárhoz vezető út. A főcímeknek egy nyomkövető vágással kell végződniük.';

$GLOBALS["lang"]['The physical depth (in CMs) of the rack.'] = 'Az állvány fizikai mélysége (CMS).';

$GLOBALS["lang"]['The physical height (in CMs) of the rack.'] = 'Az állvány fizikai magassága (CM).';

$GLOBALS["lang"]['The physical weight (in KGs) of the rack at present.'] = 'Az állvány fizikai súlya (KG-ben) jelenleg.';

$GLOBALS["lang"]['The physical weight (in KGs) of the rack when empty.'] = 'A fizikai súlya (KG) a rack, ha üres.';

$GLOBALS["lang"]['The physical width (in CMs) of the rack.'] = 'Az állvány fizikai szélessége (CM-ben).';

$GLOBALS["lang"]['The pod (if any) that this rack is part of.'] = 'A kabin (ha van), hogy ez a fogas része.';

$GLOBALS["lang"]['The power circuit this rack attaches to.'] = 'Az áramkör, amihez ez a rekesz kapcsolódik.';

$GLOBALS["lang"]['The primary database table upon which to base this widget.'] = 'Az elsődleges adatbázis tábla, amelyre alapozni ezt a widget.';

$GLOBALS["lang"]['The process identifier of this queue item.'] = 'E sorban szereplő tétel folyamatazonosítója.';

$GLOBALS["lang"]['The process that was used last to retrieve details about the device'] = 'A folyamat, amit utoljára használtak, hogy a részleteket az eszköz';

$GLOBALS["lang"]['The query that provides a list of devices for the integration. Links to <code>queries.id</code>.'] = 'A lekérdezés, amely egy listát az eszközök az integráció. Kapcsolatok <code>queries.id</code>.';

$GLOBALS["lang"]['The rack asset number.'] = 'Az eszköz száma.';

$GLOBALS["lang"]['The rack asset tag.'] = 'A fogaskerék.';

$GLOBALS["lang"]['The rack bar code.'] = 'Az állvány vonalkód.';

$GLOBALS["lang"]['The rack model.'] = 'Az állványmodell.';

$GLOBALS["lang"]['The rack serial.'] = 'A Rack sorozat.';

$GLOBALS["lang"]['The rack series.'] = 'A rack sorozat.';

$GLOBALS["lang"]['The rack this device is located in. Links to <code>racks.id</code>.'] = 'Az eszköz állványa. Kapcsolatok <code>racks.id</code>.';

$GLOBALS["lang"]['The recommended process of addressing and fixing identified security vulnerabilities. This typically involves applying patches, updates, or other measures to eliminate the risk posed by the vulnerabilities.'] = 'Az azonosított biztonsági sebezhetőségek kezelésének és rögzítésének ajánlott folyamata. Ez jellemzően tapaszokat, frissítéseket vagy egyéb intézkedéseket jelent a sebezhetőségek által jelentett kockázatok kiküszöbölésére.';

$GLOBALS["lang"]['The regular domain notation of your directory. Eg - <code>open-audit.lan</code>.'] = 'A könyvtár rendszeres domain jelölése. Eg <code>open-audit.lan</code>.';

$GLOBALS["lang"]['The result of the command.'] = 'A parancs eredménye.';

$GLOBALS["lang"]['The room the rack is located in.'] = 'A szoba az állvány található.';

$GLOBALS["lang"]['The row the rack is located in.'] = 'A sor az állvány található.';

$GLOBALS["lang"]['The secret key used in conjunction with your AWS EC2 API key.'] = 'Az AWS EC2 API kulcsával együtt használt titkos kulcs.';

$GLOBALS["lang"]['The software end-of-life date.'] = 'A szoftver az élet vége.';

$GLOBALS["lang"]['The software end-of-service-life date.'] = 'A szoftver véget ér a szolgálat-élet dátummal.';

$GLOBALS["lang"]['The specific database column from the specified database table.'] = 'A megadott adatbázistáblázat egyedi adatbázisoszlopa.';

$GLOBALS["lang"]['The specific database table.'] = 'A konkrét adatbázis tábla.';

$GLOBALS["lang"]['The standard Nmap timing options. We usually use -T4 (Aggressive) as this is recommended for a decent broadband or ethernet connection.'] = 'A standard Nmap időzítő lehetőségek. Általában -T4-et (Agresszív) használunk, mivel ez egy tisztességes szélessávú vagy Ethernet kapcsolathoz ajánlott.';

$GLOBALS["lang"]['The status of this integration'] = 'Az integráció státusa';

$GLOBALS["lang"]['The status of this queued item.'] = 'A sorban álló tárgy állapota.';

$GLOBALS["lang"]['The target IP this log entry referers to (if any).'] = 'A cél IP ez a naplóbejegyzés javítók (ha van).';

$GLOBALS["lang"]['The template for the link to be generated per result line.'] = 'Az eredménysoronként generálandó link sablonja.';

$GLOBALS["lang"]['The text for the bottom of the chart in a line chart (only).'] = 'A diagram alján található szöveg egy sordiagramban (csak).';

$GLOBALS["lang"]['The text that is displayed.'] = 'A megjelenített szöveg.';

$GLOBALS["lang"]['The timestamp after which, this task should run. For example, run a task after the 1st June 2017 at 10am, set it to <code>2017-06-01 09:59:00</code>. This value should be zero padded (ie, 09, not 9). This value defaults to <code>2000-01-01 00:00:00</code> which means by default, a scheduled task will run at next scheduled execution time.'] = 'Az időbélyeg, ami után, ez a feladat fut. Például, fut egy feladat után június 1. 2017 10: 00, állítsa be, hogy <code>2017-06-01 09:59:00</code>. Ez az érték nulla párnázott (azaz, 09, nem 9). Ez az érték alapértelmezett <code>2000-01-01 00:00:00</code> ami alapértelmezés szerint a tervezett feladat a következő tervezett végrehajtási időpontban fut.';

$GLOBALS["lang"]['The top 10, 100 or 1000 (or none) TCP ports commonly in use according to Nmap.'] = 'A top 10, 100 vagy 1000 (vagy sem) TCP portok általában használt szerint Nmap.';

$GLOBALS["lang"]['The top 10, 100 or 1000 (or none) UDP ports commonly in use according to Nmap.'] = 'A top 10, 100 vagy 1000 (vagy sem) UDP portok általában használt szerint Nmap.';

$GLOBALS["lang"]['The total BTU output by this rack.'] = 'A teljes BTU kimenetet ez a rack.';

$GLOBALS["lang"]['The type of device.'] = 'Az eszköz típusa.';

$GLOBALS["lang"]['The type of organisation.'] = 'A szervezet típusa.';

$GLOBALS["lang"]['The type of rack (compute, power, network, etc).'] = 'Az állvány típusa (számítás, teljesítmény, hálózat stb.).';

$GLOBALS["lang"]['The type of task to run. One of: baseline, benchmark, cloud discovery, discovery, integration, report, query.'] = 'A feladat típusa. Az egyik: kiindulási érték, referenciaérték, felhő felfedezés, felfedezés, integráció, jelentés, lekérdezés.';

$GLOBALS["lang"]['The type of the integration (usually named after the external system).'] = 'Az integráció típusa (általában a külső rendszer után elnevezve).';

$GLOBALS["lang"]['The unique identifier of this server.'] = 'A kiszolgáló egyedi azonosítója.';

$GLOBALS["lang"]['The user account this collector uses. Links to <code>users.id</code>.'] = 'A gyűjtő felhasználói fiókja. Kapcsolatok <code>users.id</code>.';

$GLOBALS["lang"]['The username used to access the external system.'] = 'A felhasználónév, amit a külső rendszerhez használnak.';

$GLOBALS["lang"]['The users email address.'] = 'A felhasználók e-mail címe.';

$GLOBALS["lang"]['The usual hours of operation at this site.'] = 'A szokásos műszak ezen az oldalon.';

$GLOBALS["lang"]['The value assigned to the item.'] = 'A tételhez rendelt érték.';

$GLOBALS["lang"]['The value that is stored for this particular item.'] = 'Az adott tétel esetében tárolt érték.';

$GLOBALS["lang"]['The vendor name as per CPE entries.'] = 'Az eladó neve a CPE bejegyzései szerint.';

$GLOBALS["lang"]['The vendor taken from the CPE.'] = 'Az eladó, akit a CPE-ből hoztak.';

$GLOBALS["lang"]['The web directory on the host that Open-AudIT is installed (requires a trailing slash).'] = 'Az Open- AudIT telepítéséhez szükséges webkönyvtár.';

$GLOBALS["lang"]['The widget at position '] = 'A widget pozícióban ';

$GLOBALS["lang"]['The width of this device.'] = 'Az eszköz szélessége.';

$GLOBALS["lang"]['Then'] = 'Akkor...';

$GLOBALS["lang"]['This CVE will be retrieved and overwrite the existing CVE if it exists.'] = 'Ez a CVE lesz visszakeresve, és felülírja a meglévő CVE, ha létezik.';

$GLOBALS["lang"]['This attribute is stored as a JSON object. It is the list of all collections and contains the collection name along with <code>c</code>, <code>r</code>, <code>u</code> and,or <code>d</code> which represent create, read, update and delete. These are the actions a user can perform on items from that particular collection.'] = 'Ezt az attribútumot JSON objektumként tároljuk. Ez a lista az összes gyűjtemény és tartalmazza a gyűjtemény nevét együtt <code>c</code>, <code>r</code>, <code>u</code> és, vagy <code>d</code> amely a létrehozást, olvasást, frissítést és törlést jelenti. Ezek azok a tevékenységek, amelyeket a felhasználó az adott gyűjtemény tételein végezhet.';

$GLOBALS["lang"]['This can be either a varchar (a text field), a list (a list of values that can be selected) or a date.'] = 'Ez lehet varchar (szövegmező), lista (kiválasztható értékek listája) vagy dátum.';

$GLOBALS["lang"]['This collectors universally unique identifier.'] = 'Ez a gyűjtők univerzálisan egyedi azonosítója.';

$GLOBALS["lang"]['This description is auto-populated and should ideally be left as-is.'] = 'Ez a leírás auto-népezett, és ideális esetben a-is marad.';

$GLOBALS["lang"]['This feature requires a Professional or an Enterprise license.'] = 'Ez a funkció professzionális vagy Enterprise licencet igényel.';

$GLOBALS["lang"]['This is generally the primary column, unless otherwise configured. NOTE: When type = traffic, this represents the secondary text.'] = 'Ez általában az elsődleges oszlop, hacsak nem konfigurálva van. MEGJEGYZÉS: Amikor a típus = forgalom, ez a másodlagos szöveg.';

$GLOBALS["lang"]['This item must match the value of the attribute selected or contains the ID of the query to be used.'] = 'Ennek a tételnek meg kell egyeznie a kiválasztott attribútum értékével, vagy tartalmaznia kell a használandó lekérdezés azonosítóját.';

$GLOBALS["lang"]['This item must match the value of the attribute selected.'] = 'Ez a tétel megegyezik a kiválasztott attribútum értékével.';

$GLOBALS["lang"]['This license expires on'] = 'Ez az engedély lejár';

$GLOBALS["lang"]['This should be set to either 1 or the height of the rack.'] = 'Ezt vagy 1-re vagy az állvány magasságára kell beállítani.';

$GLOBALS["lang"]['This will auto-populate.'] = 'Ez auto-populálni fog.';

$GLOBALS["lang"]['This will considerably slow the discovery scan.'] = 'Ez jelentősen lelassítja a felfedezést.';

$GLOBALS["lang"]['Thursday'] = 'Csütörtök';

$GLOBALS["lang"]['time_caption'] = 'Time Caption';

$GLOBALS["lang"]['Time Caption'] = 'Time Caption';

$GLOBALS["lang"]['time_daylight'] = 'Időfény';

$GLOBALS["lang"]['Time Daylight'] = 'Időfény';

$GLOBALS["lang"]['Time to Execute'] = 'A végrehajtásig eltelt idő';

$GLOBALS["lang"]['timeout'] = 'Időpont';

$GLOBALS["lang"]['Timeout'] = 'Időpont';

$GLOBALS["lang"]['Timeout Per Target (Seconds)'] = 'Időpont / cél (másodperc)';

$GLOBALS["lang"]['Timesatamp'] = 'Időpont';

$GLOBALS["lang"]['Timestamp'] = 'Időbélyegző';

$GLOBALS["lang"]['timing'] = 'Időzítés';

$GLOBALS["lang"]['Timing'] = 'Időzítés';

$GLOBALS["lang"]['Timor-Leste'] = 'Timor- Leste';

$GLOBALS["lang"]['Title'] = 'Cím';

$GLOBALS["lang"]['Togo'] = 'Togo';

$GLOBALS["lang"]['Tokelau'] = 'Tokelau';

$GLOBALS["lang"]['Tonga'] = 'Tonga';

$GLOBALS["lang"]['toolbar_style'] = 'Eszköztárstílus';

$GLOBALS["lang"]['Toolbar Style'] = 'Eszköztárstílus';

$GLOBALS["lang"]['Top Nmap TCP Ports'] = 'Top Nmap TCP portok';

$GLOBALS["lang"]['Top Nmap UDP Ports'] = 'Top Nmap UDP portok';

$GLOBALS["lang"]['Traditional Chinese'] = 'Hagyományos kínai';

$GLOBALS["lang"]['Traffic Light'] = 'Forgalmi világítás';

$GLOBALS["lang"]['Trinidad and Tobago'] = 'Trinidad és Tobago';

$GLOBALS["lang"]['Troubleshooting LDAP Logins'] = 'Problémamegoldás LDAP Logins';

$GLOBALS["lang"]['Try all the latest features with a FREE 100 device license of Open-AudIT Enterprise. Please read the <a href=\"'] = 'Próbálja ki a legújabb funkciók egy INGYEN 100 eszköz licenc Open- AudIT Enterprise. Kérjük, olvassa el a < a href =\ "';

$GLOBALS["lang"]['Tuesday'] = 'Kedd';

$GLOBALS["lang"]['Tunisia'] = 'Tunézia';

$GLOBALS["lang"]['Turkey'] = 'Törökország';

$GLOBALS["lang"]['Turkmenistan'] = 'Türkmenisztán';

$GLOBALS["lang"]['Turks and Caicos Islands'] = 'Turks- és Caicos-szigetek';

$GLOBALS["lang"]['Tuvalu'] = 'Tuvalu';

$GLOBALS["lang"]['tx_bitrate'] = 'Tx bitráta';

$GLOBALS["lang"]['Tx Bitrate'] = 'Tx bitráta';

$GLOBALS["lang"]['tx_freq'] = 'Tx Freq';

$GLOBALS["lang"]['Tx Freq'] = 'Tx Freq';

$GLOBALS["lang"]['tx_level'] = 'Tx szint';

$GLOBALS["lang"]['Tx Level'] = 'Tx szint';

$GLOBALS["lang"]['tx_power'] = 'Tx Power';

$GLOBALS["lang"]['Tx Power'] = 'Tx Power';

$GLOBALS["lang"]['tx_profile'] = 'Tx profil';

$GLOBALS["lang"]['Tx Profile'] = 'Tx profil';

$GLOBALS["lang"]['type'] = 'Típus';

$GLOBALS["lang"]['Type'] = 'Típus';

$GLOBALS["lang"]['URL'] = 'URL';

$GLOBALS["lang"]['uuid'] = 'UUID';

$GLOBALS["lang"]['UUID'] = 'UUID';

$GLOBALS["lang"]['udp_ports'] = 'Udp Ports';

$GLOBALS["lang"]['Udp Ports'] = 'Udp Ports';

$GLOBALS["lang"]['Uganda'] = 'Uganda';

$GLOBALS["lang"]['Ukraine'] = 'Ukrajna';

$GLOBALS["lang"]['uninstall'] = 'Eltávolítás';

$GLOBALS["lang"]['Uninstall'] = 'Eltávolítás';

$GLOBALS["lang"]['Uninstall the Agent'] = 'Az ügynök eltávolítása';

$GLOBALS["lang"]['United Arab Emirates'] = 'Egyesült Arab Emírségek';

$GLOBALS["lang"]['United Kingdom'] = 'Egyesült Királyság';

$GLOBALS["lang"]['United States Minor Outlying Islands'] = 'Amerikai Egyesült Államok';

$GLOBALS["lang"]['United States Virgin Islands'] = 'Egyesült Államok Virgin-szigetek';

$GLOBALS["lang"]['United States of America'] = 'Amerikai Egyesült Államok';

$GLOBALS["lang"]['Unknown'] = 'Ismeretlen';

$GLOBALS["lang"]['unlock_pin'] = 'Pin feloldása';

$GLOBALS["lang"]['Unlock Pin'] = 'Pin feloldása';

$GLOBALS["lang"]['Unscheduled'] = 'Nem ütemezett';

$GLOBALS["lang"]['Unused as at 5.2.0.'] = 'Nem használt, mint 5.2.0.';

$GLOBALS["lang"]['Unused.'] = 'Használatlanul.';

$GLOBALS["lang"]['Update'] = 'Frissítés';

$GLOBALS["lang"]['update_external_count'] = 'Külső szám frissítése';

$GLOBALS["lang"]['Update External Count'] = 'Külső szám frissítése';

$GLOBALS["lang"]['update_external_from_internal'] = 'Külső belső frissítés';

$GLOBALS["lang"]['Update External From Internal'] = 'Külső belső frissítés';

$GLOBALS["lang"]['update_internal_count'] = 'Belső számlálás frissítése';

$GLOBALS["lang"]['Update Internal Count'] = 'Belső számlálás frissítése';

$GLOBALS["lang"]['update_internal_from_external'] = 'Belső külső frissítés';

$GLOBALS["lang"]['Update Internal From External'] = 'Belső külső frissítés';

$GLOBALS["lang"]['Update NMIS Devices from Open-AudIT'] = 'NMIS eszközök frissítése az Open- AudIT-ról';

$GLOBALS["lang"]['Update Open-AudIT Devices from '] = 'Open- AudIT frissítése Eszközök ';

$GLOBALS["lang"]['Update Open-AudIT Devices from NMIS'] = 'Open- AudIT frissítése Az NMIS eszközei';

$GLOBALS["lang"]['Updated each time discovery has been executed with IPs detected to be responding.'] = 'Minden alkalommal frissítve, amikor a felfedezést végrehajtották, és az IP-k reagálnak.';

$GLOBALS["lang"]['Updated each time discovery has been executed with IPs that have been scanned by Nmap.'] = 'Minden alkalommal frissítve, amikor a felfedezést végrehajtották az Nmap által szkennelt IP-kkel.';

$GLOBALS["lang"]['Updated each time discovery has been executed with devices we were able to audit.'] = 'Minden alkalommal frissítettük, amikor a felfedezést végrehajtották olyan eszközökkel, amiket ellenőriztünk.';

$GLOBALS["lang"]['Updated each time discovery has been executed with devices we were able to query.'] = 'Minden alkalommal frissítve, amikor a felfedezést végrehajtották olyan eszközökkel, amiket képesek voltunk lekérdezni.';

$GLOBALS["lang"]['Updated each time discovery has been executed.'] = 'Minden alkalommal frissítve, amikor a felfedezést végrehajtották.';

$GLOBALS["lang"]['Updated each time the discovery has been executed.'] = 'Minden alkalommal frissítették, amikor a felfedezést végrehajtották.';

$GLOBALS["lang"]['Updated each time the discovery has completed execution.'] = 'Minden alkalommal, amikor a felfedezés befejeződött.';

$GLOBALS["lang"]['Updating'] = 'Frissítés';

$GLOBALS["lang"]['Upgrade'] = 'Frissítés';

$GLOBALS["lang"]['Upload an audit result file'] = 'Ellenőrzési eredményfájl feltöltése';

$GLOBALS["lang"]['Upper Case'] = 'Felső eset';

$GLOBALS["lang"]['uptime'] = 'Frissítés';

$GLOBALS["lang"]['Uptime'] = 'Frissítés';

$GLOBALS["lang"]['url'] = 'Url';

$GLOBALS["lang"]['Url'] = 'Url';

$GLOBALS["lang"]['Uruguay, Eastern Republic of'] = 'Uruguay, Keleti Köztársaság';

$GLOBALS["lang"]['usb'] = 'Usb';

$GLOBALS["lang"]['Usb'] = 'Usb';

$GLOBALS["lang"]['use'] = 'Felhasználás';

$GLOBALS["lang"]['Use'] = 'Felhasználás';

$GLOBALS["lang"]['use_authentication'] = 'Hitelesítés használata';

$GLOBALS["lang"]['Use Authentication'] = 'Hitelesítés használata';

$GLOBALS["lang"]['use_authorisation'] = 'Felhasználási engedély';

$GLOBALS["lang"]['Use Authorisation'] = 'Felhasználási engedély';

$GLOBALS["lang"]['Use SNMP'] = 'SNMP használata';

$GLOBALS["lang"]['Use SSH'] = 'SSH használata';

$GLOBALS["lang"]['Use Secure (LDAPS)'] = 'Biztonságos használat (LDAPS)';

$GLOBALS["lang"]['Use Service Version Detection'] = 'Service Version detection használata';

$GLOBALS["lang"]['Use WMI'] = 'WMI használata';

$GLOBALS["lang"]['Use for Authentication'] = 'Felhasználás hitelesítésre';

$GLOBALS["lang"]['Use for Roles'] = 'Alkalmazás tekercsekhez';

$GLOBALS["lang"]['used'] = 'Használt';

$GLOBALS["lang"]['Used'] = 'Használt';

$GLOBALS["lang"]['used_count'] = 'Használt szám';

$GLOBALS["lang"]['Used Count'] = 'Használt szám';

$GLOBALS["lang"]['Used by OpenLDAP only.'] = 'Kizárólag az OpenLDAP által használt.';

$GLOBALS["lang"]['Used internally when discovering a single device.'] = 'Belső használatra egyetlen eszköz felfedezésekor.';

$GLOBALS["lang"]['Used internally when discovering a single device. Links to <code>devices.id</code>.'] = 'Belső használatra egyetlen eszköz felfedezésekor. Kapcsolatok <code>devices.id</code>.';

$GLOBALS["lang"]['Used when LDAP servers have been configured to populate a users details - this includes the Orgs to which they have access. If a user is in this LDAP group, they are assigned this org.'] = 'Amikor az LDAP szervereket konfigurálták a felhasználói adatok terjesztésére - ide tartoznak azok az Orgok, amelyekhez hozzáférnek. Ha egy felhasználó ebben az LDAP csoportban van, akkor ezt a sort kapja.';

$GLOBALS["lang"]['Used when LDAP servers have been configured to populate a users details - this includes the Roles which they are assigned. If a user is in this LDAP group, they are assigned this role.'] = 'Amikor az LDAP szervereket konfigurálták, hogy a felhasználók adatait népszerűsítsék - ez magában foglalja azokat a szerepeket, amelyeket kijelöltek. Ha egy felhasználó ebben az LDAP csoportban van, akkor ezt a szerepet kapja.';

$GLOBALS["lang"]['Used when searching OpenLDAP to match a users uid to a groups members. Default of <code>memberUid</code>. Used by OpenLDAP only.'] = 'Az OpenLDAP keresésekor a felhasználók Uid-ja a csoportok tagjaihoz illeszkedik. Alapértelmezés: <code>memberUid</code>. Kizárólag az OpenLDAP által használt.';

$GLOBALS["lang"]['Used with Integrations and FirstWave monitoring applications.'] = 'Az Integrations and FirstWave monitoring alkalmazásokkal.';

$GLOBALS["lang"]['Used with Integrations and FirstWave monitoring applications. Set to y if working SNMP detected by discovery.'] = 'Az Integrations and FirstWave monitoring alkalmazásokkal. Beállítva y, ha a dolgozó SNMP észlelte felfedezés.';

$GLOBALS["lang"]['user'] = 'Felhasználó';

$GLOBALS["lang"]['User'] = 'Felhasználó';

$GLOBALS["lang"]['User DN'] = 'DN felhasználó';

$GLOBALS["lang"]['user_group'] = 'Felhasználócsoport';

$GLOBALS["lang"]['User Group'] = 'Felhasználócsoport';

$GLOBALS["lang"]['user_id'] = 'Felhasználóazonosító';

$GLOBALS["lang"]['User ID'] = 'Felhasználóazonosító';

$GLOBALS["lang"]['user_interaction'] = 'Interakció';

$GLOBALS["lang"]['User Interaction'] = 'Interakció';

$GLOBALS["lang"]['User Membership Attribute'] = 'Felhasználói tagsági attribútum';

$GLOBALS["lang"]['user_name'] = 'Felhasználónév';

$GLOBALS["lang"]['User Name'] = 'Felhasználónév';

$GLOBALS["lang"]['User Policies'] = 'Felhasználói politika';

$GLOBALS["lang"]['Username'] = 'Felhasználónév';

$GLOBALS["lang"]['username'] = 'Felhasználónév';

$GLOBALS["lang"]['users'] = 'Felhasználók';

$GLOBALS["lang"]['Users'] = 'Felhasználók';

$GLOBALS["lang"]['Users, Roles and Orgs'] = 'Felhasználók, szerepek és sorok';

$GLOBALS["lang"]['Using Entra for Auth'] = 'Az Entra használata Auth-ra';

$GLOBALS["lang"]['Using OKTA for Auth'] = 'OKTA alkalmazása az Auth-hoz';

$GLOBALS["lang"]['Usually Mb/s, from Location A.'] = 'Általában Mb / s, az A. helyszínről';

$GLOBALS["lang"]['Usually Mb/s, from Location B.'] = 'Általában Mb / s, a B. helyszínről';

$GLOBALS["lang"]['Usually Mb/s, to Location A.'] = 'Általában Mb / s, az A. helyre';

$GLOBALS["lang"]['Usually Mb/s, to Location B.'] = 'Általában Mb / s, a B. helyre';

$GLOBALS["lang"]['Uzbekistan'] = 'Üzbegisztán';

$GLOBALS["lang"]['VLAN'] = 'VLAN';

$GLOBALS["lang"]['VLAN ID'] = 'VLAN ID';

$GLOBALS["lang"]['valid_from'] = 'Érvényes';

$GLOBALS["lang"]['Valid From'] = 'Érvényes';

$GLOBALS["lang"]['valid_from_raw'] = 'Érvényes a nyers';

$GLOBALS["lang"]['Valid From Raw'] = 'Érvényes a nyers';

$GLOBALS["lang"]['valid_to'] = 'Érvényes';

$GLOBALS["lang"]['Valid To'] = 'Érvényes';

$GLOBALS["lang"]['valid_to_raw'] = 'Érvényes a nyers';

$GLOBALS["lang"]['Valid To Raw'] = 'Érvényes a nyers';

$GLOBALS["lang"]['Valid Values'] = 'Érvényes értékek';

$GLOBALS["lang"]['value'] = 'Érték';

$GLOBALS["lang"]['Value'] = 'Érték';

$GLOBALS["lang"]['values'] = 'Értékek';

$GLOBALS["lang"]['Values'] = 'Értékek';

$GLOBALS["lang"]['Vanuatu'] = 'Vanuatu';

$GLOBALS["lang"]['VarChar'] = 'VarChar';

$GLOBALS["lang"]['Varchar'] = 'Varchar';

$GLOBALS["lang"]['variable'] = 'Változó';

$GLOBALS["lang"]['Variable'] = 'Változó';

$GLOBALS["lang"]['vendor'] = 'Vendor';

$GLOBALS["lang"]['Vendor'] = 'Vendor';

$GLOBALS["lang"]['vendors'] = 'Értékesítők';

$GLOBALS["lang"]['Vendors'] = 'Értékesítők';

$GLOBALS["lang"]['Venezuela'] = 'Venezuela';

$GLOBALS["lang"]['version'] = 'Verzió';

$GLOBALS["lang"]['Version'] = 'Verzió';

$GLOBALS["lang"]['version_padded'] = 'Version Padd';

$GLOBALS["lang"]['Version Padded'] = 'Version Padd';

$GLOBALS["lang"]['version_raw'] = 'Nyers változat';

$GLOBALS["lang"]['Version Raw'] = 'Nyers változat';

$GLOBALS["lang"]['version_string'] = 'Version String';

$GLOBALS["lang"]['Version String'] = 'Version String';

$GLOBALS["lang"]['video'] = 'Videó';

$GLOBALS["lang"]['Video'] = 'Videó';

$GLOBALS["lang"]['Vietnam'] = 'Vietnam';

$GLOBALS["lang"]['View'] = 'Nézet';

$GLOBALS["lang"]['View All'] = 'Minden nézet';

$GLOBALS["lang"]['View Details'] = 'Részletek megtekintése';

$GLOBALS["lang"]['View Device'] = 'Az eszköz megjelenítése';

$GLOBALS["lang"]['View Discovery'] = 'Felfedezés megtekintése';

$GLOBALS["lang"]['View Policy'] = 'Iránymutatás';

$GLOBALS["lang"]['Virtual Private Network'] = 'Virtuális privát hálózat';

$GLOBALS["lang"]['Virtualisation'] = 'Virtualizáció';

$GLOBALS["lang"]['Visit our YouTube channel for instructional videos.'] = 'Látogasson el a YouTube csatornába oktatóvideókért.';

$GLOBALS["lang"]['vlan'] = 'Vlan';

$GLOBALS["lang"]['Vlan'] = 'Vlan';

$GLOBALS["lang"]['vlan_id'] = 'Vlan ID';

$GLOBALS["lang"]['Vlan ID'] = 'Vlan ID';

$GLOBALS["lang"]['vm'] = 'Vm';

$GLOBALS["lang"]['Vm'] = 'Vm';

$GLOBALS["lang"]['vm_device_id'] = 'Vm eszköz azonosítója';

$GLOBALS["lang"]['Vm Device ID'] = 'Vm eszköz azonosítója';

$GLOBALS["lang"]['vm_group'] = 'Vm csoport';

$GLOBALS["lang"]['Vm Group'] = 'Vm csoport';

$GLOBALS["lang"]['vm_ident'] = 'Vm Ident';

$GLOBALS["lang"]['Vm Ident'] = 'Vm Ident';

$GLOBALS["lang"]['vm_server_name'] = 'Vm kiszolgáló neve';

$GLOBALS["lang"]['Vm Server Name'] = 'Vm kiszolgáló neve';

$GLOBALS["lang"]['vm_vendor'] = 'Vm Vendor';

$GLOBALS["lang"]['Vm Vendor'] = 'Vm Vendor';

$GLOBALS["lang"]['vuln_status'] = 'Vuln állapot';

$GLOBALS["lang"]['Vuln Status'] = 'Vuln állapot';

$GLOBALS["lang"]['vulnerabilities'] = 'Sebezhetőségek';

$GLOBALS["lang"]['Vulnerabilities'] = 'Sebezhetőségek';

$GLOBALS["lang"]['vulnerabilities_cache'] = 'Sebezhetőségi tár';

$GLOBALS["lang"]['Vulnerabilities Cache'] = 'Sebezhetőségi tár';

$GLOBALS["lang"]['vulnerability_id'] = 'Sebezhetőségi azonosító';

$GLOBALS["lang"]['Vulnerability ID'] = 'Sebezhetőségi azonosító';

$GLOBALS["lang"]['WHERE'] = 'HOL';

$GLOBALS["lang"]['wall_port'] = 'Fali kikötő';

$GLOBALS["lang"]['Wall Port'] = 'Fali kikötő';

$GLOBALS["lang"]['Wallis and Futuna'] = 'Wallis és Futuna';

$GLOBALS["lang"]['Want to know more?'] = 'Akarsz többet tudni?';

$GLOBALS["lang"]['Warning'] = 'Figyelem';

$GLOBALS["lang"]['warranty'] = 'Garancia';

$GLOBALS["lang"]['Warranty'] = 'Garancia';

$GLOBALS["lang"]['warranty_duration'] = 'Garancia időtartama';

$GLOBALS["lang"]['Warranty Duration'] = 'Garancia időtartama';

$GLOBALS["lang"]['warranty_expires'] = 'Garanciakivonatok';

$GLOBALS["lang"]['Warranty Expires'] = 'Garanciakivonatok';

$GLOBALS["lang"]['warranty_status'] = 'A garancia státusa';

$GLOBALS["lang"]['Warranty Status'] = 'A garancia státusa';

$GLOBALS["lang"]['warranty_type'] = 'Garanciatípus';

$GLOBALS["lang"]['Warranty Type'] = 'Garanciatípus';

$GLOBALS["lang"]['Web'] = 'Web';

$GLOBALS["lang"]['Webserver'] = 'Webszerver';

$GLOBALS["lang"]['Website'] = 'Honlap';

$GLOBALS["lang"]['Wednesday'] = 'Szerda';

$GLOBALS["lang"]['weight'] = 'Testtömeg';

$GLOBALS["lang"]['Weight'] = 'Testtömeg';

$GLOBALS["lang"]['weight_current'] = 'Jelenleg';

$GLOBALS["lang"]['Weight Current'] = 'Jelenleg';

$GLOBALS["lang"]['weight_empty'] = 'Súly üres';

$GLOBALS["lang"]['Weight Empty'] = 'Súly üres';

$GLOBALS["lang"]['weight_max'] = 'Súly max.';

$GLOBALS["lang"]['Weight Max'] = 'Súly max.';

$GLOBALS["lang"]['Welcome'] = 'Üdvözlöm.';

$GLOBALS["lang"]['Welcome Dashboard'] = 'Üdvözöljük a műszerfalon';

$GLOBALS["lang"]['Welcome to FirstWave Open-AudIT'] = 'Üdvözöljük a FirstWave Open- AudIT-on';

$GLOBALS["lang"]['Western Sahara'] = 'Nyugat-Szahara';

$GLOBALS["lang"]['What Can I Expect if I Have no Credentials'] = 'Mire számíthatok, ha nincs hitelem?';

$GLOBALS["lang"]['What is the purpose of this rack.'] = 'Mi a célja ennek az állványnak?';

$GLOBALS["lang"]['What is the type of this location. Allowable types held in <code>attributes</code> table.'] = 'Milyen típusú ez a hely. A gyártó neve és címe: <code>attributes</code> Asztal.';

$GLOBALS["lang"]['When integrating devices from the external system, if the device doesnt exist in Open-AudIT should we create it?'] = 'A külső rendszerből származó eszközök integrálásakor, ha az eszköz nem létezik az Open- AudIT rendszerben, akkor létre kellene hoznunk?';

$GLOBALS["lang"]['When integrating devices from the external system, if the device has been updated in the external system should we update it in Open-AudIT?'] = 'A külső rendszerből származó eszközök integrálásakor, ha az eszközt frissítették a külső rendszerben, akkor frissítsük Open- AudIT-ban?';

$GLOBALS["lang"]['When retrieve an external device, should we run discovery upon it?'] = 'Amikor megszerez egy külső eszközt, utána kéne néznünk?';

$GLOBALS["lang"]['When this benchmark is scheduled to be executed. Derived from the associated <code>tasks.type</code> and <code>tasks.sub_resource_id</code>.'] = 'Ha ezt a referenciaértéket a tervek szerint végrehajtják. A társult vállalkozásból származó <code>tasks.type</code> és <code>tasks.sub_resource_id</code>.';

$GLOBALS["lang"]['When this log was created.'] = 'Amikor ezt a naplót létrehozták.';

$GLOBALS["lang"]['When this queue item started processing.'] = 'Amikor ez a sor tétel kezdett feldolgozni.';

$GLOBALS["lang"]['When we execute this baseline, should we check for items on devices that are not in a policy for this baseline.'] = 'Ha végrehajtjuk ezt az alapvonalat, ellenőriznünk kell azokat az eszközöket, amelyek nincsenek ebben az alaphelyzetben.';

$GLOBALS["lang"]['When we receive an open port, should we attempt to test for the version of the service currently running upon it? This assists in confirming actual running services.'] = 'Amikor nyílt kikötőt kapunk, meg kellene próbálnunk tesztelni a jelenleg rajta futó szolgáltatás változatát? Ez segít megerősíteni a tényleges működési szolgáltatásokat.';

$GLOBALS["lang"]['where'] = 'ahol';

$GLOBALS["lang"]['Where'] = 'ahol';

$GLOBALS["lang"]['Where on the Device Details screen you would like to see this field appear.'] = 'Ahol a Device Details képernyőn szeretné látni ezt a mezőt.';

$GLOBALS["lang"]['Where the rack is in the row.'] = 'Ahol az állvány van a sorban.';

$GLOBALS["lang"]['Whether the vulnerability affects components beyond its own using Impact, Availability and Confidentiality.'] = 'Az, hogy a sebezhetőség a Hatás, elérhetőség és bizalmas jelleg felhasználásával a saját összetevőin túlmutató elemeket érint-e.';

$GLOBALS["lang"]['Whether user interaction is required (None, Passive, Active).'] = 'Függetlenül attól, hogy szükséges-e a felhasználói interakció (nincs, passzív, aktív).';

$GLOBALS["lang"]['Which OS this benchmark applies to.'] = 'Melyik OS-ra vonatkozik ez a referenciaérték?';

$GLOBALS["lang"]['Which devices should Open-AudIT create from the external system (if any). Using All, None or a given Attribute.'] = 'Milyen eszközök Open- AudIT létre a külső rendszer (ha van). Az All, None vagy egy adott Attribútum használata.';

$GLOBALS["lang"]['Which sub-menu should we display this query in.'] = 'Melyik menü legyen a lekérdezés?';

$GLOBALS["lang"]['Who made this rack.'] = 'Ki csinálta ezt a dudát?';

$GLOBALS["lang"]['Why Windows Server Only?'] = 'Miért csak Windows Server?';

$GLOBALS["lang"]['Why do we exclude this policy?'] = 'Miért zárjuk ki ezt a politikát?';

$GLOBALS["lang"]['Wide Area Network'] = 'Szélessávú hálózat';

$GLOBALS["lang"]['Widget'] = 'Szélesség';

$GLOBALS["lang"]['Widget # '] = 'Szélesség # ';

$GLOBALS["lang"]['Widget Type'] = 'Szélességtípus';

$GLOBALS["lang"]['widgets'] = 'Szélességek';

$GLOBALS["lang"]['Widgets'] = 'Szélességek';

$GLOBALS["lang"]['width'] = 'Szélesség';

$GLOBALS["lang"]['Width'] = 'Szélesség';

$GLOBALS["lang"]['windows'] = 'Windows';

$GLOBALS["lang"]['Windows'] = 'Windows';

$GLOBALS["lang"]['Windows Test Script'] = 'Windows teszt szkript';

$GLOBALS["lang"]['Wireless Local Area Network'] = 'Vezeték nélküli helyi hálózat';

$GLOBALS["lang"]['wmi_fails'] = 'Wmi Fails';

$GLOBALS["lang"]['Wmi Fails'] = 'Wmi Fails';

$GLOBALS["lang"]['wmi_timeout'] = 'Wmi Timeout';

$GLOBALS["lang"]['Wmi Timeout'] = 'Wmi Timeout';

$GLOBALS["lang"]['workgroup'] = 'Munkacsoport';

$GLOBALS["lang"]['Workgroup'] = 'Munkacsoport';

$GLOBALS["lang"]['Working Credentials'] = 'Munkakörülmények';

$GLOBALS["lang"]['XML'] = 'XML';

$GLOBALS["lang"]['Yellow Query'] = 'Sárga lekérdezés';

$GLOBALS["lang"]['Yemen'] = 'Jemen';

$GLOBALS["lang"]['Yes'] = 'Igen.';

$GLOBALS["lang"]['You may want to copy and paste this URL in an email to your staff.'] = 'Lehet, hogy ezt az URL-t szeretné másolni és beilleszteni egy e-mailben a személyzet.';

$GLOBALS["lang"]['You must delete your existing license before adding a new license.'] = 'Új licenc hozzáadása előtt törölnie kell a meglévő licencét.';

$GLOBALS["lang"]['YouTube Tutorials'] = 'YouTube Tutorials';

$GLOBALS["lang"]['Your AWS EC2 API key.'] = 'Az AWS EC2 API kulcsod.';

$GLOBALS["lang"]['Your Google Compute credentials as JSON.'] = 'A Google Compute hitelesítő mint JSON.';

$GLOBALS["lang"]['Your Licenses'] = 'Engedélyei';

$GLOBALS["lang"]['Your Microsoft Azure Client ID.'] = 'A Microsoft Azure kliens azonosítója.';

$GLOBALS["lang"]['Your Microsoft Azure Client Secret.'] = 'A Microsoft Azure kliens titkod.';

$GLOBALS["lang"]['Your Microsoft Azure Subscription ID.'] = 'A Microsoft Azure Subscription azonosítója.';

$GLOBALS["lang"]['Your Microsoft Azure Tennant ID.'] = 'A Microsoft Azure Tennant azonosítója.';

$GLOBALS["lang"]['Your SQL to select attributes that will populate this query.'] = 'Az SQL, hogy válassza attribútumok, amelyek benépesítik ezt a kérdést.';

$GLOBALS["lang"]['Your SQL to select devices that will populate this group.'] = 'Az SQL, hogy válasszon eszközöket, amelyek benépesítik ezt a csoportot.';

$GLOBALS["lang"]['Your SSH key.'] = 'Az SSH kulcsod.';

$GLOBALS["lang"]['Your access credentials, as per that clouds native API.'] = 'A hozzáférési engedélyed, az eredeti API szerint.';

$GLOBALS["lang"]['Your description of the status of this connection (provisioned, retired, etc).'] = 'A kapcsolat állapotának leírása (ellátás, nyugdíjas, stb.).';

$GLOBALS["lang"]['Your description of this item.'] = 'A leírás erről a tételről.';

$GLOBALS["lang"]['Your generic name for this piece of software'] = 'Ennek a szoftvernek az általános neve.';

$GLOBALS["lang"]['Your generic version for this piece of software'] = 'A generikus verziója ehhez a szoftverhez';

$GLOBALS["lang"]['Zambia'] = 'Zambia';

$GLOBALS["lang"]['Zimbabwe'] = 'Zimbabwe';

$GLOBALS["lang"]['active'] = 'aktív';

$GLOBALS["lang"]['active directory'] = 'aktív könyvtár';

$GLOBALS["lang"]['active/active'] = 'aktív / aktív';

$GLOBALS["lang"]['active/passive'] = 'aktív / passzív';

$GLOBALS["lang"]['advertisement'] = 'reklám';

$GLOBALS["lang"]['alert'] = 'riasztás';

$GLOBALS["lang"]['all'] = 'valamennyi';

$GLOBALS["lang"]['allocated'] = 'elosztva';

$GLOBALS["lang"]['amazon'] = 'amazon';

$GLOBALS["lang"]['antivirus'] = 'antivírus';

$GLOBALS["lang"]['application'] = 'Kérelem';

$GLOBALS["lang"]['approved'] = 'jóváhagyott';

$GLOBALS["lang"]['attribute'] = 'attribútum';

$GLOBALS["lang"]['auto'] = 'automatikus';

$GLOBALS["lang"]['backup'] = 'mentés';

$GLOBALS["lang"]['banned'] = 'tiltott';

$GLOBALS["lang"]['blog'] = 'blog';

$GLOBALS["lang"]['bottom'] = 'alsó';

$GLOBALS["lang"]['browser_lang'] = 'böngésző _ lang';

$GLOBALS["lang"]['building'] = 'épület';

$GLOBALS["lang"]['cloud'] = 'felhő';

$GLOBALS["lang"]['code'] = 'kód';

$GLOBALS["lang"]['collector'] = 'gyűjtő';

$GLOBALS["lang"]['compute'] = 'kiszámítása';

$GLOBALS["lang"]['config'] = 'konfig';

$GLOBALS["lang"]['contains'] = 'tartalmaz';

$GLOBALS["lang"]['create'] = 'létrehozás';

$GLOBALS["lang"]['created'] = 'Létrehozva';

$GLOBALS["lang"]['critical'] = 'kritikus';

$GLOBALS["lang"]['cve'] = 'unit description in lists';

$GLOBALS["lang"]['database'] = 'adatbázis';

$GLOBALS["lang"]['debug'] = 'hibakeresés';

$GLOBALS["lang"]['delegated'] = 'átruházva';

$GLOBALS["lang"]['delete'] = 'Törlés';

$GLOBALS["lang"]['deleted'] = 'törölve';

$GLOBALS["lang"]['denied'] = 'elutasítva';

$GLOBALS["lang"]['devices'] = 'eszközök';

$GLOBALS["lang"]['digitalocean'] = 'digitálisóceán';

$GLOBALS["lang"]['does not equal'] = 'nem egyenlő';

$GLOBALS["lang"]['emergency'] = 'vészhelyzet';

$GLOBALS["lang"]['entra'] = 'entra';

$GLOBALS["lang"]['equals'] = 'egyenlő';

$GLOBALS["lang"]['error'] = 'hiba';

$GLOBALS["lang"]['established'] = 'megállapított';

$GLOBALS["lang"]['excluded'] = 'kizárva';

$GLOBALS["lang"]['expired'] = 'lejárt';

$GLOBALS["lang"]['extreme - Without which, the organisation would fail.

very high - Functions that are essential for the organisations survival and must be restored immediately.

high - Important functions that should be restored quickly but may have a slightly longer recovery time.

medium - Functions that are necessary but can tolerate longer downtime.

low - Non-essential functions that can be delayed without significant impact.

unassigned - The default until set.'] = 'extrém - amely nélkül a szervezet csődöt mondana.

nagyon magas - A szervezetek túléléséhez elengedhetetlen funkciók, amelyeket azonnal helyre kell állítani.

magas - fontos funkciók, amelyeket vissza kell állítani gyorsan, de lehet, hogy egy kicsit hosszabb helyreállítási idő.

közepes - Funkciók, amelyek szükségesek, de tolerálják a hosszabb pihenést.

alacsony - nem alapvető funkciók, amelyek jelentős hatás nélkül késleltethetők.

undescription - Az alapértelmezett beállításig.';

$GLOBALS["lang"]['fail'] = 'hiba';

$GLOBALS["lang"]['false'] = 'hamis';

$GLOBALS["lang"]['file'] = 'fájl';

$GLOBALS["lang"]['firewall'] = 'tűzfal';

$GLOBALS["lang"]['fixed'] = 'rögzített';

$GLOBALS["lang"]['floor'] = 'padló';

$GLOBALS["lang"]['front'] = 'elöl';

$GLOBALS["lang"]['front-left'] = 'balra';

$GLOBALS["lang"]['front-right'] = 'front- right';

$GLOBALS["lang"]['github'] = 'gitrub';

$GLOBALS["lang"]['google'] = 'Google';

$GLOBALS["lang"]['greater or equals'] = 'nagyobb vagy egyenlő';

$GLOBALS["lang"]['greater than'] = 'nagyobb, mint';

$GLOBALS["lang"]['group'] = 'csoport';

$GLOBALS["lang"]['head'] = 'fej';

$GLOBALS["lang"]['here'] = 'Tessék.';

$GLOBALS["lang"]['high availability'] = 'magas rendelkezésre állás';

$GLOBALS["lang"]['howto'] = 'How to';

$GLOBALS["lang"]['ignored'] = 'figyelmen kívül hagyva';

$GLOBALS["lang"]['in'] = 'in';

$GLOBALS["lang"]['inactive'] = 'inaktív';

$GLOBALS["lang"]['incomplete'] = 'hiányos';

$GLOBALS["lang"]['info'] = 'információ';

$GLOBALS["lang"]['int, text, bool (y/n), etc'] = 'int, text, bool (y / n) stb.';

$GLOBALS["lang"]['is licensed to'] = 'engedéllyel rendelkezik';

$GLOBALS["lang"]['left'] = 'balra';

$GLOBALS["lang"]['less or equals'] = 'kevesebb vagy egyenlő';

$GLOBALS["lang"]['less than'] = 'kevesebb, mint';

$GLOBALS["lang"]['license'] = 'engedély';

$GLOBALS["lang"]['like'] = 'mint';

$GLOBALS["lang"]['line'] = 'vonal';

$GLOBALS["lang"]['load balancing'] = 'terheléskiegyenlítés';

$GLOBALS["lang"]['location'] = 'hely';

$GLOBALS["lang"]['managed'] = 'Kezelt';

$GLOBALS["lang"]['microsoft'] = 'microsoft';

$GLOBALS["lang"]['mount point'] = 'csatolási pont';

$GLOBALS["lang"]['network'] = 'hálózat';

$GLOBALS["lang"]['news'] = 'Hírek';

$GLOBALS["lang"]['no'] = 'Nem';

$GLOBALS["lang"]['node'] = 'csomópont';

$GLOBALS["lang"]['none'] = 'nincs';

$GLOBALS["lang"]['normal'] = 'normális';

$GLOBALS["lang"]['not applicable'] = 'nem értelmezhető';

$GLOBALS["lang"]['not in'] = 'nincs';

$GLOBALS["lang"]['not like'] = 'nem úgy.';

$GLOBALS["lang"]['notice'] = 'értesítés';

$GLOBALS["lang"]['notification'] = 'értesítés';

$GLOBALS["lang"]['okta'] = 'okta';

$GLOBALS["lang"]['openldap'] = 'openldap';

$GLOBALS["lang"]['optimized'] = 'optimalizált';

$GLOBALS["lang"]['optionally '] = 'opcionális ';

$GLOBALS["lang"]['other'] = 'egyéb';

$GLOBALS["lang"]['package'] = 'csomag';

$GLOBALS["lang"]['partition'] = 'partíció';

$GLOBALS["lang"]['pass'] = 'pass';

$GLOBALS["lang"]['pending'] = 'függőben';

$GLOBALS["lang"]['performance'] = 'teljesítmény';

$GLOBALS["lang"]['performed'] = 'végzett';

$GLOBALS["lang"]['pie'] = 'Pite';

$GLOBALS["lang"]['planning'] = 'tervezés';

$GLOBALS["lang"]['predictable'] = 'kiszámítható';

$GLOBALS["lang"]['query'] = 'lekérdezés';

$GLOBALS["lang"]['rear'] = 'hátsó';

$GLOBALS["lang"]['rear-left'] = 'hátra- balra';

$GLOBALS["lang"]['rear-right'] = 'jobb hátsó';

$GLOBALS["lang"]['regex'] = 'regex';

$GLOBALS["lang"]['release'] = 'kiadás';

$GLOBALS["lang"]['reserved'] = 'fenntartott';

$GLOBALS["lang"]['right'] = 'Rendben.';

$GLOBALS["lang"]['room'] = 'szoba';

$GLOBALS["lang"]['row'] = 'sor';

$GLOBALS["lang"]['stand-alone'] = 'önálló';

$GLOBALS["lang"]['standard'] = 'szabvány';

$GLOBALS["lang"]['starts with'] = 'kezdődik';

$GLOBALS["lang"]['storage'] = 'tárolás';

$GLOBALS["lang"]['timestamp'] = 'időbélyegző';

$GLOBALS["lang"]['top'] = 'felső';

$GLOBALS["lang"]['top secret - Military / Government classification. Disclosure would cause exceptionally grave danger to national security.

secret - Military / Government classification. Disclosure would cause serious damage to national security.

confidential - Military / Government and Private Sector classification. Data that is confidential includes trade secrets, intellectual data, application programming code, and other data that could seriously affect the organization if unauthorized disclosure occurred. Data at this level would be available only to personnel in the organization whose work needs, or is directly related to, the accessed data. Access to confidential data usually requires authorization for each access.

private - Private Sector classification. Data that is private includes any information related to personnel, including human resources records, medical records, and salary information, that is used only within the organization.

sensitive - Military / Government and Private Sector classification. Data that is sensitive includes organizational financial information and requires extra measures to ensure its CIA and accuracy. Disclosure might harm national security.

public - Private Sector classification. Public data is data that is generally shared with the public and would not cause a negative impact on the organization. Examples of public data include how many people work in the organization and what products an organization manufactures or sells.

unclassified - Military / Government classification. Any information that can generally be distributed to the public without any threat to national interest.

unassigned - The default until set.'] = 'szigorúan titkos - katonai / kormányzati osztályozás. A nyilvánosságra hozatal kivételesen súlyos veszélyt jelentene a nemzetbiztonságra.

titkos - katonai / kormányzati osztályozás. A nyilvánosságra hozatal súlyos nemzetbiztonsági károkat okozna.

bizalmas - katonai / kormányzati és magánszektorbeli besorolás. A bizalmas adatok magukban foglalják az üzleti titkokat, az intellektuális adatokat, az alkalmazás programozási kódját, valamint azokat az adatokat, amelyek a szervezet illetéktelen felfedése esetén súlyosan érinthetik a szervezetet. Az ezen a szinten rendelkezésre álló adatok csak azon szervezet személyzete számára lennének hozzáférhetők, amelynek a munkához szüksége van vagy közvetlenül kapcsolódik a hozzáférhető adatokhoz. A bizalmas adatokhoz való hozzáférés általában minden egyes hozzáférés engedélyezését igényli.

magán - Private Sector osztályozás. A magánjellegű adatok magukban foglalják a személyzettel kapcsolatos minden olyan információt, beleértve a személyi adatokat, az orvosi feljegyzéseket és a fizetéssel kapcsolatos információkat, amelyeket csak a szervezeten belül használnak.

érzékeny - katonai / kormányzati és magánszektorbeli besorolás. Az érzékeny adatok közé tartozik a szervezeti pénzügyi információ, és további intézkedéseket igényel, hogy biztosítsa a CIA és a pontosság. A nyilvánosságra hozatal veszélyeztetheti a nemzetbiztonságot.

állami - Private Sector osztályozás. A nyilvános adatok általában a nyilvánossággal megosztott adatok, amelyek nem gyakorolnak negatív hatást a szervezetre. A nyilvános adatok közé tartozik például, hogy hány ember dolgozik a szervezetben, és milyen termékeket gyárt vagy ad el egy szervezet.

nem minősített - katonai / kormányzati besorolás. Minden olyan információ, amelyet általában a nemzeti érdekeket veszélyeztető veszély nélkül lehet nyilvánosságra hozni.

undescription - Az alapértelmezett beállításig.';

$GLOBALS["lang"]['traffic'] = 'forgalom';

$GLOBALS["lang"]['true'] = 'igaz';

$GLOBALS["lang"]['unallocated'] = 'nem felosztott';

$GLOBALS["lang"]['unauthorised'] = 'nem engedélyezett';

$GLOBALS["lang"]['unknown'] = 'ismeretlen';

$GLOBALS["lang"]['unmanaged'] = 'kezeletlen';

$GLOBALS["lang"]['unused'] = 'felhasználatlan';

$GLOBALS["lang"]['update'] = 'frissítés';

$GLOBALS["lang"]['valid'] = 'érvényes';

$GLOBALS["lang"]['virtualisation'] = 'virtualizáció';

$GLOBALS["lang"]['warning'] = 'figyelmeztetés';

$GLOBALS["lang"]['web'] = 'web';

$GLOBALS["lang"]['yes'] = 'Igen';

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

