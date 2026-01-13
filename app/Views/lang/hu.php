<?php
$GLOBALS["lang"][' Default, currently '] = ' Alapértelmezés, jelenleg ';

$GLOBALS["lang"][' If something does not work as expected, your first thing to do is check the logs.'] = ' Ha valami nem úgy működik, ahogy vártuk, az első dolog, hogy ellenőrizze a naplók.';

$GLOBALS["lang"][' is now supported with a language file. To change your user to use this language, click '] = ' most támogatja egy nyelvi fájl. A felhasználó megváltoztatásához kattintson erre a nyelvre ';

$GLOBALS["lang"][' seconds'] = ' másodperc';

$GLOBALS["lang"][', but will not need to remember a separate set of logon credentials.'] = ', de nem kell emlékezni külön sor logon hitelesítő.';

$GLOBALS["lang"][', of which we supply over thirty as a default set. Professional users cannot alter these, but an Enterprise user has complete customisation abilities - including creating your own.'] = 'ebből több mint 30-at szolgáltatunk alapértelmezésként. A hivatásos felhasználók ezeket nem tudják megváltoztatni, de egy Enterprise felhasználó teljes testreszabási képességekkel rendelkezik - beleértve saját maga létrehozását is.';

$GLOBALS["lang"][', you <i>must</i> be using https on your Open-AudIT server to use Entra for Auth. Please configure Apache to use <strong>https</strong> before configuring Entra for auth.'] = 'Te... <i>kell</i> az Open- AudIT szerveren https-et használ az Entra-hoz az Auth-hoz. Kérjük, állítsa be az Apache használatát <strong>https</strong> az Entra beállítása előtt audio-ra.';

$GLOBALS["lang"]['. To enable this, edit the configuration item for '] = '. Ennek lehetővé tétele érdekében szerkesztse a konfigurációs elemet ';

$GLOBALS["lang"]['10 Minutes'] = '10 perc';

$GLOBALS["lang"]['15 Minutes'] = '15 perc';

$GLOBALS["lang"]['30 Minutes'] = '30 perc';

$GLOBALS["lang"]['5 Minutes'] = '5 perc';

$GLOBALS["lang"]['93 controls grouped into organizational, people, physical, and technological categories'] = '93 vezérlők csoportosított szervezeti, emberek, fizikai és technológiai kategóriák';

$GLOBALS["lang"]['<br> <strong>NOTE</strong> - You are accessing this URL from the local Open-AudIT server. The downloaded script will not be able to submit when run on any other machine. If you need to audit other machines, please download the script from any remote machine, not using a browser on the Open-AudIT server itself.'] = '<br/><strong>MEGJEGYZÉS</strong> - Ezt az URL-t a helyi Open- AudIT szerverről lehet elérni. A letöltött szkript nem lesz képes más gépen futtatni. Ha más gépeket kell ellenőriznie, kérjük, töltse le a szkriptet bármilyen távoli gépről, és ne használja a böngészőt az Open- AudIT szerveren.';

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

$GLOBALS["lang"]['<p>Microsoft Windows desktop systems have network limitations that may impact the performance of Open-AudIT. The TCP/IP stack limits the number of simultaneous incomplete outbound TCP connection attempts. After the limit is reached, subsequent connection attempts are put in a queue and will be resolved at a fixed rate (10 per second). If too many enter the queue, they may be dropped. And finally, Apache will be restarted by the OS. For this reason, installing Open-AudIT on a Windows desktop operating system is not supported.<br><br>There is nothing wrong with the Open-AudIT code, nor can we do anything to address this issue on Windows client machines.'] = '<p>Microsoft A Windows asztali rendszerek hálózati korlátai befolyásolhatják az Open- AudIT teljesítményét. A TCP / IP stack korlátozza az egyidejűleg befejezetlen TCP csatlakozási kísérletek számát. A határérték elérése után a későbbi csatlakozási kísérleteket sorba állítják, és rögzített kamattal (másodpercenként 10) oldják meg. Ha túl sokan lépnek be a sorba, lehet, hogy eldobják őket. És végül, az apacsot újraindítja az operációs rendszer. Ezért nem támogatott az Open- AudIT telepítése egy Windows asztali operációs rendszerre.<br/><br/>Nincs semmi baj az Open- AudIT kóddal, és nem tehetünk semmit, hogy ezzel a kérdéssel foglalkozzunk a Windows kliens gépeken.</p>';

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

$GLOBALS["lang"]['<strong>NOTE</strong> - You are accessing this URL from the local Open-AudIT server. The downloaded script will not be able to submit when run on any other machine. If you need to audit other machines, please download the script from any remote machine, not using a browser on the Open-AudIT server itself.'] = '<strong>MEGJEGYZÉS</strong> - Ezt az URL-t a helyi Open- AudIT szerverről lehet elérni. A letöltött szkript nem lesz képes más gépen futtatni. Ha más gépeket kell ellenőriznie, kérjük, töltse le a szkriptet bármilyen távoli gépről, és ne használja a böngészőt az Open- AudIT szerveren.';

$GLOBALS["lang"]['A CVE item that does not contain a filter to determine the affected item(s).'] = 'Olyan CVE elem, amely nem tartalmaz szűrőt az érintett elem (ek) meghatározásához.';

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

$GLOBALS["lang"]['A LAN can be connected to a WAN using a router.'] = 'A LAN lehet csatlakoztatni a WAN segítségével router.';

$GLOBALS["lang"]['A Metropolitan area network (MAN) is a large computer network that usually spans a city or a large campus.'] = 'A Metropolitan area network (MAN) egy nagy számítógépes hálózat, amely általában terjeszkedik egy város vagy egy nagy campus.';

$GLOBALS["lang"]['A Seed discovery uses an initial IP to retrieve the IPs of any other devices it knows about, adds those IPs to the list and scans those - again asking for any IPs those additional devices knows about. Rinse and repeat. It is intelligent enough to know if it has already scanned a given IP in its execution and discards any already scanned (or even on the list to be scanned).'] = 'A Seed felfedezés használ egy kezdeti IP-t, hogy visszaszerezze az IP-t minden más eszköz ő tud, hozzáadja ezeket az IP-ket a listát, és szkenneli azokat - ismét kér bármilyen IP-t, hogy további eszközök tudnak. Öblítse le és ismételje meg. Elég intelligens ahhoz, hogy tudja, hogy már szkennelt egy adott IP-t a kivitelezése során, és visszadobja a már szkennelt (vagy akár a szkennelt listán).';

$GLOBALS["lang"]['A Subnet discovery will scan the IPs provided.'] = 'Egy tengeralattjáró felfedezés letapogatja az IP-ket.';

$GLOBALS["lang"]['A URL provided to the agent which will then download the file and store it on the local disk.'] = 'Egy URL biztosított az ügynök, amely majd töltse le a fájlt, és tárolja a helyi lemezen.';

$GLOBALS["lang"]['A URL to a file to download.'] = 'URL letölthető fájlhoz.';

$GLOBALS["lang"]['A backbone network is part of a computer network infrastructure that provides a path for the exchange of information between different LANs or sub-networks. A backbone can tie together diverse networks within the same building, across different buildings, or over a wide area.<br><br>For example, a large company might implement a backbone network to connect departments that are located around the world. The equipment that ties together the departmental networks constitutes the network backbone. When designing a network backbone, network performance and network congestion are critical factors to take into account. Normally, the backbone network capacity is greater than that of the individual networks connected to it.<br><br>Another example of a backbone network is the Internet backbone, which is the set of wide area networks (WANs) and core routers that tie together all networks connected to the Internet.'] = 'A gerinchálózat olyan számítógépes hálózati infrastruktúra részét képezi, amely utat biztosít a különböző LAN-ok vagy alhálózatok közötti információcseréhez. A gerinc egy épületen belül, különböző épületekben vagy széles területen összekapcsolhatja a különböző hálózatokat.<br/><br/>Például egy nagyvállalat egy gerinc hálózatot is bevezethet a világ minden táján található osztályok összekapcsolására. A hálózati gerincet az a berendezés alkotja, amely összeköti a részlegi hálózatokat. A hálózati gerinc kialakításakor figyelembe kell venni a hálózati teljesítményt és a hálózati torlódásokat. Általában a gerinc hálózati kapacitása nagyobb, mint a hozzá kapcsolódó egyes hálózatoké.<br/><br/>Egy másik példa a gerinc hálózat az internet gerince, amely a sor a széles körű hálózatok (WANs) és a fő routerek, amelyek összekötik az összes hálózat kapcsolódik az internethez.';

$GLOBALS["lang"]['A calculated field that displays the number of times this piece of software was found on the computers in the selected Org (and its descendants if configured).'] = 'Számított mező, amely mutatja a szám, amikor ezt a szoftverdarabot találtak a számítógépeken a kiválasztott Org (és leszármazottai, ha konfigurálták).';

$GLOBALS["lang"]['A campus area network (CAN) is made up of an interconnection of LANs within a limited geographical area. The networking equipment (switches, routers) and transmission media (optical fiber, copper plant, Cat5 cabling, etc.) are almost entirely owned by the campus tenant / owner (an enterprise, university, government, etc.).<br><br>For example, a university campus network is likely to link a variety of campus buildings to connect academic colleges or departments, the library, and student residence halls.'] = 'Az egyetemi terület hálózata (CAN) korlátozott földrajzi területen belül a LANS-ok összekapcsolásából áll. A hálózati berendezések (kapcsolók, routerek) és átviteli eszközök (optikai rost, réz üzem, Cat5 kábelezés stb.) szinte teljes mértékben a campus bérlő / tulajdonosa (vállalkozás, egyetem, kormány, stb.).<br/><br/>Például, egy egyetemi campus hálózat valószínűleg összekapcsolja a különböző campus épületek összekapcsolni egyetemi főiskolák vagy osztályok, a könyvtár, és a diákszállók.';

$GLOBALS["lang"]['A closed port is accessible (it receives and responds to Nmap probe packets), but there is no application listening on it. They can be helpful in showing that a host is up on an IP address (host discovery, or ping scanning), and as part of OS detection. Because closed ports are reachable, it may be worth scanning later in case some open up. Administrators may want to consider blocking such ports with a firewall. Then they would appear in the filtered state, discussed next.'] = 'A zárt port elérhető (Nmap szonda csomagokat kap és válaszol), de nincs alkalmazás hallgatása rajta. Ezek hasznosak lehetnek annak bemutatásában, hogy a gazdatest egy IP-cím (host discovery, vagy ping scanning), és részeként OS felismerés. Mivel a zárt kikötők elérhetőek, érdemes lehet később átnézni, hátha megnyílnak. Az igazgatók fontolóra vehetik, hogy tűzfallal blokkolják az ilyen kikötőket. Aztán megjelennek a szűrt állapotban, majd megvitatják.';

$GLOBALS["lang"]['A collector is either in Collector or Stand-Alone mode.'] = 'A gyűjtők vagy gyűjtők, vagy készenléti üzemmódban.';

$GLOBALS["lang"]['A comma separated list of applicable CVEs.'] = 'Az alkalmazandó közös biztonsági szabályok vesszővel elkülönített listája.';

$GLOBALS["lang"]['A comma separated list of values, one of which can be selected.'] = 'Az értékek vesszővel elválasztott listája, amelyek közül az egyik kiválasztható.';

$GLOBALS["lang"]['A command to run. When the agent is Windows based, this command is run from within the powershell agent.'] = 'Futási parancs. Amikor az ügynök Windows alapú, ez a parancs a powershell agent-ből fut.';

$GLOBALS["lang"]['A dashboard is made up of three columns and two rows of what we call <i>widgets</i>. A widget is very similar to a summary, only we take the summary concept a bit further. Widgets are created in a simple fashion using a couple of drop down boxes - or you can elect to use your own SQL for complete customisability.'] = 'A műszerfal három oszlopból és két sorból áll. <i>widgets</i>. A widget nagyon hasonló az összefoglalóhoz, csak mi egy kicsit tovább vesszük az összefoglaló koncepciót. Widgets jönnek létre egy egyszerű módon segítségével néhány csepp dobozok - vagy választhatja, hogy használja a saját SQL teljes testreszabhatóság.';

$GLOBALS["lang"]['A filtered port is considered open (and will trigger device detection).'] = 'A szűrt portot nyitottnak kell tekinteni (és az eszköz észlelését fogja előidézni).';

$GLOBALS["lang"]['A global area network (GAN) is a network used for supporting mobile across an arbitrary number of wireless LANs, satellite coverage areas, etc. The key challenge in mobile communications is handing off user communications from one local coverage area to the next. In IEEE Project 802, this involves a succession of terrestrial wireless LANs.'] = 'A globális területi hálózat (GAN) egy olyan hálózat, amelyet a mobil mobilhálózat támogatására használnak egy önkényes számú vezeték nélküli földterületen, műholdas lefedettségi területen stb. A mobil kommunikáció fő kihívása a felhasználói kommunikáció átadása az egyik helyi lefedettségi területről a másikra. Az IEEE 802 projektben ez földfelszíni vezeték nélküli földterületek sorozatát foglalja magában.';

$GLOBALS["lang"]['A home area network (HAN) is a residential LAN used for communication between digital devices typically deployed in the home, usually a small number of personal computers and accessories, such as printers and mobile computing devices. An important function is the sharing of Internet access, often a broadband service through a cable TV or digital subscriber line (DSL) provider.'] = 'A beltéri hálózat (HAN) olyan lakossági LAN, amelyet általában az otthoni digitális eszközök, általában kis számú személyi számítógép és tartozék, például nyomtatók és mobil számítástechnikai eszközök közötti kommunikációra használnak. Fontos feladat az internet-hozzáférés megosztása, gyakran szélessávú szolgáltatás kábeltelevízió vagy digitális előfizetői vonal (DSL) szolgáltatón keresztül.';

$GLOBALS["lang"]['A list of custom TCP ports to scan (22 is SSH, 135 is WMI, 62078 is iPhone sync).'] = 'Az egyedi TCP portok listája (22 SSH, 135 WMI, 62078 az iPhone sync).';

$GLOBALS["lang"]['A list of custom UDP ports to scan (161 is SNMP).'] = 'Az egyedi UDP portok listája (161 SNMP).';

$GLOBALS["lang"]['A local area network (LAN) is a network that connects computers and devices in a limited geographical area such as a home, school, office building, or closely positioned group of buildings. Each computer or device on the network is a node. Wired LANs are most likely based on Ethernet technology. Newer standards such as ITU-T G.hn also provide a way to create a wired LAN using existing wiring, such as coaxial cables, telephone lines, and power lines.<br><br>The defining characteristics of a LAN, in contrast to a wide area network (WAN), include higher data transfer rates, limited geographic range, and lack of reliance on leased lines to provide connectivity. Current Ethernet or other IEEE 802.3LAN technologies operate at data transfer rates up to 100 Gbit/s, standardized by IEEE in 2010. Currently, 400 Gbit/s Ethernet is being developed.'] = 'A helyi hálózat (LAN) olyan hálózat, amely korlátozott földrajzi területen, például otthon, iskola, irodaépület vagy épületcsoport közelében köti össze a számítógépeket és az eszközöket. Minden számítógép vagy eszköz a hálózaton egy csomópont. A Wired LANs valószínűleg Ethernet technológián alapul. Az újabb szabványok, mint például az ITU- T G.hn, szintén lehetővé teszik egy vezetékes LAN létrehozását meglévő vezetékekkel, például koaxiális kábelekkel, telefonvezetékekkel és elektromos vezetékekkel.<br/><br/>A LAN meghatározó jellemzői, szemben a széles körű hálózatokkal (WAN), magukban foglalják a magasabb adatátviteli arányokat, a korlátozott földrajzi tartományt és a bérelt vonalaktól való függés hiányát a kapcsolat biztosítása érdekében. A jelenlegi Ethernet vagy más IEEE 802.3LAN technológiák legfeljebb 100 Gbit / s adatátviteli sebességgel működnek, amelyet az IEEE 2010-ben szabványosított. Jelenleg 400 Gbit / s Ethernet fejlesztés alatt áll.';

$GLOBALS["lang"]['A location is a physical address that can have devices associated with it. You can assign it coordinates and if there are devices assigned, the location will appear on the Map when you have an Open-AudIT Enterprise license.'] = 'A helyszín egy fizikai cím, amely a hozzá kapcsolódó eszközöket. Beállíthatja a koordinátákat, és ha vannak hozzárendelt eszközök, a hely megjelenik a térképen, ha van egy Open- AudIT Enterprise licenc.';

$GLOBALS["lang"]['A location name will help you to find these devices in the future.'] = 'A helyszín neve segít megtalálni ezeket az eszközöket a jövőben.';

$GLOBALS["lang"]['A lower number means it will be applied before other rules.'] = 'Az alacsonyabb szám azt jelenti, hogy azt más szabályok előtt kell alkalmazni.';

$GLOBALS["lang"]['A lower number means it will be applied before other rules. The default weight is 100.'] = 'Az alacsonyabb szám azt jelenti, hogy azt más szabályok előtt kell alkalmazni. Az alapértelmezett súly 100.';

$GLOBALS["lang"]['A new user logged in to Open-AudIT and was authenticated and authorized by the LDAP sever. That user was then created in Open-AudIT and logged in. Success.'] = 'Egy új felhasználó jelentkezett be az Open- AudIT-re, és az LDAP sever hitelesítette és engedélyezte. A felhasználó ekkor jött létre Open- AudIT és bejelentkezett. Siker.';

$GLOBALS["lang"]['A package is a piece of installed softare. A package has a type - antivirus, approved, backup, banned, cloud, firewall, ignored, license or other.'] = 'A csomag egy beépített softhase. A csomagnak van egy típusa: vírusellenes, jóváhagyott, tartalék, tiltott, felhő, tűzfal, figyelmen kívül hagyott, licenc vagy más.';

$GLOBALS["lang"]['A password (stored as a hash) that enables logon when using application authentication.'] = 'Egy jelszó (hash-ként tárolva), amely lehetővé teszi a logon használatát az alkalmazás hitelesítése során.';

$GLOBALS["lang"]['A person has an account in the Open-AudIT application. Their user account has a list of associated Roles and Organizations. The roles the user has determines WHAT they can do. The Organizations a user has determines WHICH items they can act upon.<br><br>When a user requests to perform an operation (create, read, update, delete) on a collection item, the roles are consulted to see if they are allowed to perform that action, then the orgs are consulted to determine if the collection item belongs to an org the user has permission to act on.'] = 'Egy személynek van egy számlája az Open- AudIT alkalmazásban. A felhasználói fiókjuk tartalmazza a kapcsolódó szerepek és szervezetek listáját. A szerepek a felhasználó határozza meg, mit tehet. A felhasználói szervezetek határozzák meg, hogy mely tételeken léphetnek fel.<br/><br/>Ha egy felhasználó egy gyűjtési tételen egy művelet elvégzésére (létrehozás, olvasás, frissítés, törlés) kér, a szerepek megtekinthetők, hogy el tudják-e végezni ezt a műveletet, akkor az orgok megtekinthetők annak megállapítása érdekében, hogy a gyűjtési tétel egy olyan szervezethez tartozik-e, amelyre a felhasználó jogosult.';

$GLOBALS["lang"]['A personal area network (PAN) is a computer network used for communication among computer and different information technological devices close to one person. Some examples of devices that are used in a PAN are personal computers, printers, fax machines, telephones, PDAs, scanners, and even video game consoles. A PAN may include wired and wireless devices. The reach of a PAN typically extends to 10 meters. A wired PAN is usually constructed with USB and FireWire connections while technologies such as Bluetooth and infrared communication typically form a wireless PAN.'] = 'A személyi területi hálózat (PAN) egy számítógépes hálózat, amelyet számítógéppel és különböző, egy személyhez közeli információs technológiai eszközökkel való kommunikációra használnak. Néhány példa a PAN-ban használt eszközökre: személyi számítógépek, nyomtatók, faxgépek, telefonok, PDA-k, szkennerek, sőt videojáték-konzolok. A PAN tartalmazhat vezetékes és vezeték nélküli berendezéseket. A PAN elérése jellemzően 10 méterre terjed. A vezetékes PAN általában USB és FireWire kapcsolatokkal, míg a technológiák, mint a Bluetooth és infravörös kommunikáció jellemzően alkotják a vezeték nélküli PAN.';

$GLOBALS["lang"]['A query is essentially a SQL statement. This statement is run against the database with the automatic addition of the limit, filtered to apply to only those requested items and only those items the user has permission to view. A Query can be created using menu -> Manage -> Queries -> Create Queries. Queries contain an org_id and are hence restricted to the appropriate users. A user must have the org_admin or reporter role(s) to create, update or delete a query. All users can execute a query. A query has a name attribute used for the menu item as well as a menu category attribute. This tells the Open-Audit GUI which submenu to place the query in. There is also menu display which should be set to <i>y</i> to enable the query in the GUI (<i>n</i> to prevent the query from appearing at all). The query would still run if called using its <code>id</code>, regardless of menu displays value.'] = 'A lekérdezés lényegében egy SQL nyilatkozat. Ez a nyilatkozat fut az adatbázis automatikus hozzáadása a határérték, szűrt, hogy csak a kért elemeket, és csak azokat a tételeket a felhasználó számára, hogy megtekinthesse. A lekérdezés a menü segítségével készíthető - > Kezelés - > Kérdések - > Kérdések létrehozása. A lekérdezések org _ id-et tartalmaznak, ezért a megfelelő felhasználókra korlátozódnak. A felhasználónak rendelkeznie kell az org _ admin vagy riporter szereppel (szerepekkel) a lekérdezés létrehozásához, frissítéséhez vagy törléséhez. Minden felhasználó végezhet lekérdezést. A lekérdezésnek van egy név attribútuma a menüpontban, valamint egy menükategória attribútum. Ez megmondja az Open- Audit GUI-nak, hogy melyik almenübe helyezze a lekérdezést. Van még menü kijelző, amelyet be kell állítani <i>y</i> a GUI (<i>n</i> a lekérdezés esetleges megjelenésének megakadályozása). A kérdés még mindig fut, ha hívják a saját <code>id</code>, függetlenül a menü megjeleníti értéke.';

$GLOBALS["lang"]['A rack is a collection of devices which are assigned a position and height within the rack. A device can optionally have a picture associated with it. A rack is placed in a row. We have created a very granular system for positioning of racks, which is as follows. At the top level (as always) is the Organisation (Org). An Org can have multiple locations (as has always been the case). With the addition of the Racks feature, a location can now contain one or more Buildings. A building can contain one or more Floors. A floor can contain one or more Rooms. A room can contain one or more Rows. This sounds like a lot of work, but defaults are created for you. Create a new Location and the sub-components will be automatically created for you. If you need more items (buildings, rooms, etc) you can add them as you like. A rack can also be part of a <i>pod</i> of racks. The pod attribute works as a tag, rather than a strict hierarchical inheritance model as per buildings, floors, etc.<br><br>Racks are a feature available to Open-AudIT Enterprise licensed customers.'] = 'A fogantyú olyan eszközök gyűjteménye, amelyek a fogason belül elhelyezkednek és magasak. Egy eszköz opcionálisan rendelkezhet egy képpel. Egy állvány van elhelyezve egy sorban. Létrehoztunk egy nagyon szemcsés rendszert az állványok elhelyezésére, ami a következő. A felső szinten (mint mindig) a szervezet (Org). Egy Org lehet több helyszínen (mint mindig is volt). A Racks funkció kiegészítésével egy helyszín egy vagy több épületet is tartalmazhat. Egy épület tartalmazhat egy vagy több emeletet. Egy emelet tartalmazhat egy vagy több szobát. Egy szoba tartalmazhat egy vagy több sort. Ez úgy hangzik, mint egy csomó munka, de alapértelmezett létre az Ön számára. Hozzon létre egy új Hely és az alkomponensek automatikusan létre az Ön számára. Ha több elemre van szüksége (épületek, szobák, stb.), úgy adhatja hozzá, ahogy szeretné. A rack is része lehet a <i>kapszula</i> Egy rekesz. A kapszula attribútum működik, mint egy címke, ahelyett, hogy egy szigorú hierarchikus öröklési modell, mint egy épület, padló, stb<br/><br/>Racks egy funkció elérhető Open- AudIT Enterprise engedéllyel rendelkező ügyfelek.';

$GLOBALS["lang"]['A routing domain or address space where the IP addresses and MAC addresses are unique.'] = 'Olyan útválasztási tartomány vagy cím, ahol az IP-címek és a MAC-címek egyediek.';

$GLOBALS["lang"]['A sample cron file for Linux is below. This should be placed in'] = 'A Linux mintatartalma alább található. Ezt be kell helyezni';

$GLOBALS["lang"]['A security zone is a administrative domain or policy domain within the Network Domain.'] = 'A biztonsági zóna a hálózati tartományon belül közigazgatási vagy szakpolitikai terület.';

$GLOBALS["lang"]['A seed discovery is another type of discovery, where you provide the IP of a single <i>seed</i> device. This device is audited, and any IPs it knows are then added to the list of IPs to be audited. Then, those devices are audited and any IPs they know are also added to the list of IPs for auditing. This process then continues within the parameters configured by the user.'] = 'A mag felfedezés egy másik típusú felfedezés, ahol az IP egy <i>vetőmag</i> készülék. Ezt az eszközt ellenőrzik, és minden általa ismert IP-t felvesznek az ellenőrizendő IP-k listájára. Ezután ezeket az eszközöket auditálják, és az általuk ismert IP-ket is felveszik a könyvvizsgálati IP-ek listájára. Ez a folyamat ezután a felhasználó által beállított paramétereken belül folytatódik.';

$GLOBALS["lang"]['A short description of the log entry.'] = 'A napló bejegyzésének rövid leírása.';

$GLOBALS["lang"]['A storage area network (SAN) is a dedicated network that provides access to consolidated, block level data storage. SANs are primarily used to make storage devices, such as disk arrays, tape libraries, and optical jukeboxes, accessible to servers so that the devices appear like locally attached devices to the operating system. A SAN typically has its own network of storage devices that are generally not accessible through the local area network by other devices. The cost and complexity of SANs dropped in the early 2000s to levels allowing wider adoption across both enterprise and small to medium-sized business environments.'] = 'A tárolóterület-hálózat egy olyan külön hálózat, amely hozzáférést biztosít a konszolidált, csoportszintű adattároláshoz. A SANs-okat elsősorban olyan tárolóeszközök előállítására használják, mint a lemeztömbök, szalagkönyvtárak és optikai zenegépek, amelyek elérhetők a szerverek számára, így az eszközök úgy jelennek meg, mint az operációs rendszerhez csatlakoztatott helyi eszközök. A SAN jellemzően saját tárolóeszköz-hálózattal rendelkezik, amely általában más eszközök nem férnek hozzá a helyi hálózaton keresztül. Az SANS-ek költsége és összetettsége a 2000-es évek elején olyan szintre csökkent, amely lehetővé tette mind a vállalkozások, mind a kis- és középvállalkozások szélesebb körű elfogadását.';

$GLOBALS["lang"]['A string that matches the <code>software.name</code> attribute. You can use the standard SQL wildcard of percent (%) to match one or more characters.'] = 'A string, amely egyezik a <code>software.name</code> attribútum. Használhatja a szabványos SQL wildcard százalékos (%), hogy megfeleljen egy vagy több karakter.';

$GLOBALS["lang"]['A structured system for managing sensitive information'] = 'Az érzékeny információk kezelésére szolgáló strukturált rendszer';

$GLOBALS["lang"]['A timestamp.'] = 'Egy időbélyeg.';

$GLOBALS["lang"]['A user has a primary Org as well as a list of Orgs they can access. A user combines this with a list of assigned roles that define what actions they can take on items assigned to the Orgs they have access to. The combination of a users <i>orgs</i> and <i>roles</i> define what they can and cannot do within Open-AudIT.'] = 'A felhasználónak van egy elsődleges Org, valamint egy listát a Orgs, hogy hozzáférhet. A felhasználó ezt kombinálja a kijelölt szerepek listájával, amelyek meghatározzák, hogy milyen intézkedéseket tehetnek a hozzájuk rendelt eszközökkel kapcsolatban. A felhasználók kombinációja <i>létra</i> és <i>szerepek</i> meghatározza, hogy mit tehetnek és mit nem az Open- AudIT-on belül.';

$GLOBALS["lang"]['A user will have a list of associated organizations (orgs). Each org the user has will allow them to act upon items within that org as per their role(s).<br><br>All orgs except the default org have a parent. Think of an Org Chart. If a user has permission on an Org, they also have permission on any descendants of that Org.<br><br>Users are also allowed permission on a child org to see the items from parent orgs for certain collections. Those are: dashboards, discovery_scan_options, fields, files, groups, queries, reports, roles, rules, scripts, summaries, widgets.<br><br>Do not forget you have granular control over what users can see and do using Roles in Enterprise.'] = 'A felhasználó egy listát a kapcsolódó szervezetek (orgs). Minden egyes org a felhasználó lehetővé teszi számukra, hogy cselekedjenek a tételek belül, hogy a szerepük (s).<br/><br/>Minden org, kivéve az alapértelmezett org van egy szülő. Gondolj egy Org Chart-ra. Ha egy felhasználó engedélyt kap egy Org-ra, akkor az Org leszármazottaira is.<br/><br/>A felhasználók engedélyt kapnak arra is, hogy a gyermek-org megtekinthesse a szülõ orgák tételeit bizonyos gyűjteményekhez. Ezek a következők: műszerfal, felfedezés _ scan _ options, mezők, fájlok, csoportok, lekérdezések, jelentések, szerepek, szabályok, szkriptek, összefoglalók, widgets.<br/><br/>Ne felejtse el, hogy a granulátum ellenőrzése alatt áll, hogy a felhasználók mit láthatnak és mit csinálhatnak az Enterprise-on.';

$GLOBALS["lang"]['A user will have a list of associated organizations (orgs). Each org the user has will allow them to act upon items within that org as per their role(s).<br><br>All orgs except the default org have a parent. Think of an Org Chart. If a user has permission on an Org, they also have permission on any descendants of that Org.<br><br>We have also allow a user with permission on a child org to see the items from parent orgs for certain collections. Those are: dashboards, discovery_scan_options, fields, files, groups, queries, roles, rules, scripts, summaries, widgets.<br><br>Do not forget you have granular control over what users can see and do using'] = 'A felhasználó egy listát a kapcsolódó szervezetek (orgs). Minden egyes org a felhasználó lehetővé teszi számukra, hogy cselekedjenek a tételek belül, hogy a szerepük (s).<br/><br/>Minden org, kivéve az alapértelmezett org van egy szülő. Gondolj egy Org Chart-ra. Ha egy felhasználó engedélyt kap egy Org-ra, akkor az Org leszármazottaira is.<br/><br/>Azt is lehetővé teszi, hogy a felhasználó engedélyével egy gyermek org, hogy a tételek a szülő orgs bizonyos gyűjtemények. Ezek a következők: műszerfal, felfedezés _ scan _ options, mezők, fájlok, csoportok, lekérdezések, szerepek, szabályok, szkriptek, összefoglalók, widgets.<br/><br/>Ne felejtsd el, hogy granulált kontrollod van afelett, amit a felhasználók láthatnak és csinálhatnak';

$GLOBALS["lang"]['A virtual private network (VPN) is an overlay network in which some of the links between nodes are carried by open connections or virtual circuits in some larger network (e.g., the Internet) instead of by physical wires. The data link layer protocols of the virtual network are said to be tunneled through the larger network when this is the case. One common application is secure communications through the public Internet, but a VPN need not have explicit security features, such as authentication or content encryption. VPNs, for example, can be used to separate the traffic of different user communities over an underlying network with strong security features.<br><br>VPN may have best-effort performance, or may have a defined service level agreement (SLA) between the VPN customer and the VPN service provider. Generally, a VPN has a topology more complex than point-to-point.'] = 'A virtuális magánhálózat (VPN) olyan overlay hálózat, amelyben a csomópontok közötti kapcsolatok némelyikét egy nagyobb hálózatban (például az Interneten) nyitott kapcsolatokkal vagy virtuális áramkörökkel, nem pedig fizikai vezetékekkel szállítják. Azt mondják, hogy a virtuális hálózat adatkapcsolati rétegének protokolljait a nagyobb hálózaton keresztül fúrják át, amikor ez a helyzet. Az egyik közös alkalmazás a nyilvános interneten keresztül történő biztonságos kommunikáció, de a VPN-nek nem kell kifejezett biztonsági jellemzőkkel rendelkeznie, például hitelesítéssel vagy tartalomtitkosítással. A VPN-ek például arra használhatók, hogy a különböző felhasználói közösségek forgalmát egy erős biztonsági jellemzőkkel rendelkező, mögöttes hálózaton belül elkülönítsék.<br/><br/>A VPN-nek lehet best- erőkifejtési teljesítménye, vagy rendelkezhet meghatározott szolgáltatási szintről szóló megállapodással (SLA) a VPN-ügyfél és a VPN-szolgáltató között. Általában a VPN topológiája bonyolultabb, mint a pointo-point.';

$GLOBALS["lang"]['A vulnerability affecting availability may allow attackers to disrupt services, crash systems, or cause denial-of-service (DoS) (None, Low, High).'] = 'A rendelkezésre állást befolyásoló sebezhetőség lehetővé teheti a támadók számára, hogy megzavarják a szolgáltatásokat, a baleseti rendszereket vagy letagadják a szolgáltatást (DoS) (nincs, alacsony, magas).';

$GLOBALS["lang"]['A vulnerability affecting confidentiality may allow attackers to read sensitive data, such as personal information, credentials, or proprietary business data (None, Low, High).'] = 'A titoktartást befolyásoló sebezhetőség lehetővé teheti a támadók számára, hogy érzékeny adatokat, például személyes adatokat, igazolásokat vagy védett üzleti adatokat olvassanak (None, Low, High).';

$GLOBALS["lang"]['A vulnerability affecting integrity may allow attackers to modify data, inject malicious code, or alter system configurations (None, Low, High).'] = 'A sérthetetlenséget befolyásoló sebezhetőség lehetővé teheti a támadók számára, hogy módosítsák az adatokat, rosszindulatú kódot adjanak be, vagy módosítsák a rendszerkonfigurációkat (nincs, alacsony, magas).';

$GLOBALS["lang"]['A vulnerability can be editied and more specific package names provided where the enrichment data is insufficient or the generated SQL is not quite correct.'] = 'A sebezhetőséget fel lehet oldani, és konkrétabban meg lehet adni a csomag nevét, ha a dúsítási adatok nem elegendőek, vagy a generált SQL nem teljesen megfelelő.';

$GLOBALS["lang"]['A vulnerability item in Open-AudIT can be thought of as essentially a query against your database to determine your potential exposure to a given CVE report. A vulnerability is made up of the CVE report, along with enrichment data from FirstWave. These two items are combined to produce a suitable query that is automatically downloaded from FirstWave.'] = 'A sebezhetőség elem Open- AudIT lehet gondolni, mint lényegében egy lekérdezés az adatbázis, hogy meghatározza a potenciális expozíció egy adott CVE jelentést. A sebezhetőség a CVE jelentéséből és a FirstWave dúsítási adataiból áll. Ezt a két elemet kombinálják, hogy a FirstWave-ből automatikusan letöltött megfelelő lekérdezést készítsenek.';

$GLOBALS["lang"]['A wide area network (WAN) is a computer network that covers a large geographic area such as a city, country, or spans even intercontinental distances. A WAN uses a communications channel that combines many types of media such as telephone lines, cables, and air waves. A WAN often makes use of transmission facilities provided by common carriers, such as telephone companies. WAN technologies generally function at the lower three layers of the OSI reference model: the physical layer, the data link layer, and the network layer.'] = 'A széles körű hálózat (WAN) olyan számítógépes hálózat, amely nagy földrajzi területet, például várost, országot, vagy akár interkontinentális távolságokat is magában foglal. A WAN olyan kommunikációs csatornát használ, amely számos médiatípust egyesít, például telefonvonalakat, kábeleket és léghullámokat. A WAN gyakran használja a közös fuvarozók, például a telefoncégek által biztosított átviteli eszközöket. A WAN technológiák általában az OSI referencia-modell alsó három rétegében működnek: a fizikai rétegben, az adatkapcsolat-rétegben és a hálózati rétegben.';

$GLOBALS["lang"]['AD Group'] = 'AD csoport';

$GLOBALS["lang"]['ADSL, HFC, ISDN, etc.'] = 'ADSL, HFC, ISDN stb.';

$GLOBALS["lang"]['AIX'] = 'AIX';

$GLOBALS["lang"]['ALL IPs'] = 'MINDEN IP';

$GLOBALS["lang"]['API / Web Access'] = 'API / Web Access';

$GLOBALS["lang"]['API Documentation'] = 'API dokumentáció';

$GLOBALS["lang"]['API Key required.'] = 'API Key szükséges.';

$GLOBALS["lang"]['API Result'] = 'API eredmény';

$GLOBALS["lang"]['About'] = 'Körülbelül';

$GLOBALS["lang"]['Above are the only required items.'] = 'Felette vannak az egyetlen szükséges elemek.';

$GLOBALS["lang"]['Accept'] = 'Elfogadás';

$GLOBALS["lang"]['Access Model'] = 'Hozzáférési modell';

$GLOBALS["lang"]['access_point'] = 'Hozzáférési pont';

$GLOBALS["lang"]['Access Point'] = 'Hozzáférési pont';

$GLOBALS["lang"]['access_token'] = 'Hozzáférés Token';

$GLOBALS["lang"]['Access Token'] = 'Hozzáférés Token';

$GLOBALS["lang"]['Access to the admin$ share and RPC uses the SMB2 protocol.'] = 'Hozzáférés az admin $share és RPC használja az SMB2 protokoll.';

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

$GLOBALS["lang"]['Active Directory and OpenLDAP'] = 'Aktív könyvtár és OpenLDAP';

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

$GLOBALS["lang"]['Add Your Credentials'] = 'Kártyák hozzáadása';

$GLOBALS["lang"]['Add image'] = 'Képek hozzáadása';

$GLOBALS["lang"]['additional_items'] = 'Kiegészítő tételek';

$GLOBALS["lang"]['Additional Items'] = 'Kiegészítő tételek';

$GLOBALS["lang"]['address'] = 'Cím';

$GLOBALS["lang"]['Address'] = 'Cím';

$GLOBALS["lang"]['Address any nonconformities'] = 'A meg nem felelések kezelése';

$GLOBALS["lang"]['Address audit findings and corrective actions'] = 'Az ellenőrzési eredmények és a korrekciós intézkedések kezelése';

$GLOBALS["lang"]['Admin'] = 'Admin';

$GLOBALS["lang"]['admin_status'] = 'Admin állapot';

$GLOBALS["lang"]['Admin Status'] = 'Admin állapot';

$GLOBALS["lang"]['advanced'] = 'Speciális';

$GLOBALS["lang"]['Advanced'] = 'Speciális';

$GLOBALS["lang"]['Afghanistan'] = 'Afganisztán';

$GLOBALS["lang"]['After an Integration has been created, when you view the details of an Integration you will notice a field named Debug. This is set to no by default. Changing it to yes provides extra logging when an Integration is executed. Debug should not be left as yes. This is because the debug output will contain everything retrieved from external systems - including items such as WMI and SNMP credentials. The debug option should be used only when an issue has occurred and you wish to dig deeper in to see if you can determine why.'] = 'Miután létrehozták az Integrációt, ha megnézi az Integráció részleteit, észre fog venni egy Debug nevű mezőt. Ez alapértelmezés szerint nemleges. Az igen-re történő változtatás extra naplózást biztosít, ha az integrációt végrehajtják. A hibakeresést nem szabad igenként hagyni. Ez azért van, mert a debug output tartalmaz minden kinyert külső rendszerek - beleértve a tételek, mint például a WMI és SNMP hitelesítő. A hibakeresési opció csak akkor használható, ha probléma merült fel, és mélyebbre szeretne ásni, hogy kiderítse, miért.';

$GLOBALS["lang"]['After completing the above, uninstall the agent.'] = 'A fentiek befejezése után távolítsa el az ügynököt.';

$GLOBALS["lang"]['Agent? Discovery? Credentials?'] = 'Ügynök? Felfedezés? Hiteleket?';

$GLOBALS["lang"]['agents'] = 'Ügynökök';

$GLOBALS["lang"]['Agents'] = 'Ügynökök';

$GLOBALS["lang"]['Agents entries can be created that specify a duration, a network and an operating system. If all tests match, the server then asks the agent to perform actions. If any test is not set, it is excluded from the <i>all must match</i> requirement.<br><br>You can create multiple agents and have the server check one or all agent entries. You might (for example) specify one agent that says <i>If the agent IP is in this subnet, set the location_id of the device</i>.<br><br>Another example might be not running an audit at all, rather download a script and run it. If the agent is installed with admin rights, you can now manage your machines without opening <strong>any</strong> ports from it to the world.</p><p>Enabling advanced agents means an agent can be instructed to download any file and execute any command. <strong>WARNING</strong>: This comes with security risks. This configuration will <strong>only</strong> function when running Open-AudIT using HTTPS and a valid (Certificate Authority provided) certificate for '] = 'Hatósági bejegyzéseket lehet létrehozni, amelyek meghatározzák az időtartam, a hálózat és az operációs rendszer. Ha minden teszt egyezik, a szerver megkéri az ügynököt, hogy tegyen lépéseket. Ha a vizsgálat nincs beállítva, akkor az ki van zárva a <i>Minden meg kell egyeznie</i> követelmény.<br/><br/>Létrehozhat több ügynököt, és a szerver ellenőriztetheti az egyik vagy az összes ügynök bejegyzését. Megjelölhetne például egy ügynököt, aki azt mondja: <i>Ha az ügynök IP ebben az alhálózatban van, állítsa be az eszköz helyét _ id</i>.<br/><br/>Egy másik példa lehet, hogy egyáltalán nem fut könyvvizsgálat, inkább töltse le a forgatókönyvet, és futtassa le. Ha az ügynök telepített admin jogok, akkor most már kezelni a gépek nélkül <strong>bármilyen</strong> kikötőket a világ felé.<p>A fejlett ügynökök engedélyezése azt jelenti, hogy az ügynököt arra lehet utasítani, hogy töltsön le minden fájlt és hajtson végre bármilyen parancsot. <strong>FIGYELMEZTETÉS</strong>: Ez biztonsági kockázattal jár. Ez a beállítás <strong>Csak</strong> Az Open- AudIT HTTPS használatával történő futtatásakor érvényes (tanúsítványkiadó) tanúsítvány </p>';

$GLOBALS["lang"]['Aggressive'] = 'Agresszív';

$GLOBALS["lang"]['Aland Islands'] = 'Aland-szigetek';

$GLOBALS["lang"]['Albania'] = 'Albánia';

$GLOBALS["lang"]['Albanian'] = 'Albán';

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

$GLOBALS["lang"]['All collections URLs use the format'] = 'Minden gyűjtemény URLs használja a formátumot';

$GLOBALS["lang"]['All device sub-tables contain a couple of important columns.'] = 'Minden eszköz alasztal tartalmaz néhány fontos oszlopot.';

$GLOBALS["lang"]['All devices with a type like computer.'] = 'Minden eszköz olyan típusú, mint a számítógép.';

$GLOBALS["lang"]['All devices with a type of computer or router.'] = 'Minden eszköz egy típusú számítógép vagy router.';

$GLOBALS["lang"]['All devices without a type of switch and printer.'] = 'Minden eszköz kapcsoló és nyomtató nélkül.';

$GLOBALS["lang"]['All devices without a type of switch and printer. Essentially the same as the above query.'] = 'Minden eszköz kapcsoló és nyomtató nélkül. Lényegében ugyanaz, mint a fenti lekérdezés.';

$GLOBALS["lang"]['All regular discovery options are also available for use in Device Seed Discoveries.'] = 'Az összes rendszeres felfedezési lehetőség használható az eszköz mag felfedezések.';

$GLOBALS["lang"]['All tasks can be created the same in Windows and Linux. Tasks use the CRON method for scheduling execution.'] = 'Minden feladat létrehozható a Windows és Linux. A feladatok a CRON módszert használják a végrehajtás ütemezéséhez.';

$GLOBALS["lang"]['Along with this request for information, we send back to FirstWave datapoints that will give us some much needed information on feature use and your installation.'] = 'Ezzel az információkéréssel együtt visszaküldjük a FirstWave adatpontokat, amelyek megadnak nekünk néhány fontos információt a funkció használatáról és telepítéséről.';

$GLOBALS["lang"]['Also can be created from the'] = 'Is lehet létrehozni a';

$GLOBALS["lang"]['Alternatives'] = 'Alternatívák';

$GLOBALS["lang"]['Amazon AWS Fields'] = 'Amazon AWS Területek';

$GLOBALS["lang"]['American Samoa'] = 'Amerikai Szamoa';

$GLOBALS["lang"]['An Active Directory discovery will query Active Directory for a list of networks and scan the associated IPs just like a regular Subnet discovery.'] = 'Egy Active Directory felfedezés lekérdezi Active Directory egy listát a hálózatok, és a kapcsolódó IP-k, mint egy rendszeres Subnet felfedezés.';

$GLOBALS["lang"]['An Org (organization) is the owner of most items in collections within Open-AudIT. With the exception of global items like <i>configuration</i>, most items are assigned to (owned by) an Org. A user has access to those items in a collection, that below to an Org the user has permission on.'] = 'Egy Org (szervezet) a tulajdonosa a legtöbb tétel gyűjtemények Open- AudIT. A globális tételek kivételével: <i>konfiguráció</i>, a legtöbb tételt egy Org-hoz rendelik (tulajdonában). A felhasználónak hozzáférése van ezekhez a tárgyakhoz egy gyűjteményben, amire az alábbi Org a felhasználó engedélye.';

$GLOBALS["lang"]['An application is actively accepting TCP connections, UDP datagrams or SCTP associations on this port. Finding these is often the primary goal of port scanning. Security-minded people know that each open port is an avenue for attack. Attackers and pen-testers want to exploit the open ports, while administrators try to close or protect them with firewalls without thwarting legitimate users. Open ports are also interesting for non-security scans because they show services available for use on the network.'] = 'Az alkalmazás aktívan fogadja a TCP-csatlakozásokat, az UDP adattagramokat vagy az SCTP-szövetségeket. Ezek megtalálása gyakran az elsődleges cél a kikötői szkennelés. A biztonságiak tudják, hogy minden nyitott kikötő a támadás útja. A támadók és a Pen- tesztelők ki akarják használni a nyílt kikötőket, míg az adminisztrátorok tűzfalakkal próbálják bezárni vagy védeni őket, anélkül, hogy a jogos felhasználókat akadályoznák. A nyitott kikötők a nem biztonsági szkennelések szempontjából is érdekesek, mivel a hálózaton használható szolgáltatásokat mutatnak.';

$GLOBALS["lang"]['An array of <code>benchmarks.id</code>.'] = 'Egy tömb <code>benchmarks.id</code>.';

$GLOBALS["lang"]['An array of <code>devices.id</code>.'] = 'Egy tömb <code>devices.id</code>.';

$GLOBALS["lang"]['An array of object representing external links to more information.'] = 'Egy sor objektum ábrázolja külső linkek több információ.';

$GLOBALS["lang"]['An educated guess to the identity and type of device'] = 'Tanult tipp az eszköz azonosításához és típusához';

$GLOBALS["lang"]['An encrypted JSON document containing the required attributes depending on the <code>credentials.type</code>.'] = 'Egy titkosított JSON dokumentum, amely a szükséges attribútumokat tartalmazza a <code>credentials.type</code>.';

$GLOBALS["lang"]['An enterprise private network is a network that a single organization builds to interconnect its office locations (e.g., production sites, head offices, remote offices, shops) so they can share computer resources.'] = 'Egy vállalati magánhálózat egy olyan hálózat, amelyet egyetlen szervezet épít, hogy összekapcsolja irodáját (pl. gyártási helyszínek, központi irodák, távoli irodák, üzletek), így megoszthatja a számítógépes erőforrásokat.';

$GLOBALS["lang"]['An entry can be created using the web interface if the current user logged in has a role that contains the'] = 'A bejegyzés létrehozható a web interfész, ha a jelenlegi felhasználó bejelentkezett egy szerepet, amely tartalmazza a';

$GLOBALS["lang"]['An example JSON POST body is below. This should be attached to the &quot;data&quot; form item.'] = 'Egy példa JSON POST test alatt. Ezt az "adatok" alelemhez kell csatolni.';

$GLOBALS["lang"]['An example widget SQL showing devices counted per location.'] = 'Példa az SQL widget megjelenítéséhez helyenként megszámolt eszközök.';

$GLOBALS["lang"]['An existing Open-AudIT user was authenticated and authorized by the LDAP server. Success.'] = 'Egy meglévő Open- AudIT felhasználót hitelesített és engedélyezett az LDAP szerver. Siker.';

$GLOBALS["lang"]['An indication of the level of service required by this site.'] = 'Az oldal által igényelt szolgáltatás szintjének feltüntetése.';

$GLOBALS["lang"]['An internal field that indicates if the discovery has completed.'] = 'Egy belső mező, ami jelzi, hogy a felfedezés befejeződött-e.';

$GLOBALS["lang"]['An open|filtered port is considered open (and will trigger device detection).<br>Previously, Open-AudIT considered an Nmap response of'] = 'Egy nyitott 124; szűrt port tekinthető nyitott (és elindítja eszköz észlelése).<br/>Korábban, Open- Aud IT figyelembe vett Nmap válasz';

$GLOBALS["lang"]['An optional GeoCode'] = 'Választható GeoCode';

$GLOBALS["lang"]['An optional password to use sudo.'] = 'Egy opcionális jelszó a sudo használatához.';

$GLOBALS["lang"]['Analyzed'] = 'Elemzett';

$GLOBALS["lang"]['And finally, click Submit to execute this discovery.'] = 'És végül, kattintson a Küldetésre, hogy végrehajtsa ezt a felfedezést.';

$GLOBALS["lang"]['And if Something Goes Wrong?'] = 'És ha valami rosszul sül el?';

$GLOBALS["lang"]['And lastly click <i>Submit</i> to create your Open-AudIT Auth method for Entra.'] = 'És végül klikk <i>Engedély</i> az Entra Open- AudIT Auth módszerének létrehozása.';

$GLOBALS["lang"]['And lastly, not so much a security issue - more peace of mind. The data structures are open and documented. You can view them'] = 'És végül, nem annyira biztonsági kérdés - több lelki nyugalom. Az adatstruktúrák nyitottak és dokumentáltak. Láthatod őket.';

$GLOBALS["lang"]['And provide a name - we humbly recommend Open-AudIT &#128512;, but you can name it anything you like. Make sure the option for <i>Integrate any other application you do not find in the gallery (Non-gallery)</i> is selected. And then click <i>Create<i>.'] = 'És adjon egy nevet - alázatosan ajánljuk Open- AudIT-nak, de azt nevezhet el, amit csak akar. Győződjön meg róla, hogy a lehetőség <i>A galériában nem található egyéb alkalmazás (Non- galéria)</i> kiválasztva. And then click <i>Létrehozás<i>.</i></i>';

$GLOBALS["lang"]['And so much more.'] = 'És még sokkal több.';

$GLOBALS["lang"]['Andorra'] = 'Andorra';

$GLOBALS["lang"]['Angola'] = 'Angola';

$GLOBALS["lang"]['Anguilla'] = 'Anguilla';

$GLOBALS["lang"]['Annex A Controls'] = 'A. melléklet Ellenőrzések';

$GLOBALS["lang"]['Antarctica'] = 'Antarktisz';

$GLOBALS["lang"]['AntiVirus'] = 'Antivírus';

$GLOBALS["lang"]['AntiVirus Packages'] = 'Antivirus csomagok';

$GLOBALS["lang"]['Antigua and Barbuda'] = 'Antigua és Barbuda';

$GLOBALS["lang"]['Antivirus'] = 'Antivírus';

$GLOBALS["lang"]['Any TCP ports (comma seperated, no spaces) you wish to exclude from this discovery. Only available when using Nmap 7+.'] = 'Bármely TCP port (vessző elkülönítve, szóközök nélkül), amit ki szeretne zárni ebből a felfedezésből. Csak Nmap 7 + használatával érhető el.';

$GLOBALS["lang"]['Any UDP ports (comma seperated, no spaces) you wish to exclude from this discovery. Only available when using Nmap 7+.'] = 'Minden UDP port (vessző elkülönítve, szóközök nélkül), amit ki szeretne zárni ebből a felfedezésből. Csak Nmap 7 + használatával érhető el.';

$GLOBALS["lang"]['Any additional documentation you need.'] = 'Minden további szükséges dokumentáció.';

$GLOBALS["lang"]['Any additional notes you care to make.'] = 'Minden további megjegyzés, amit szeretne.';

$GLOBALS["lang"]['Any attributes followed by a * indicate that CVSS data less than v4 was used to complete this field. By default, we attempt to use v4 fields, however if they are not populated we will fallback to the previous version(s) for attributes.'] = 'Bármely attribútum, amelyet egy * követ, azt jelzi, hogy a CVSS-adatokat v4-nél kisebb mértékben használták e mező kitöltéséhez. Alapértelmezés szerint megpróbálunk v4 mezőket használni, de ha nem népesednek, akkor az attribútumok esetében visszaesünk az előző verzióra.';

$GLOBALS["lang"]['Any devices will be assigned to this Org when they run their audit script (if set).'] = 'Minden eszközt ehhez az Org-hoz rendelünk, amikor lefuttatják a könyvvizsgálati forgatókönyvet (ha be van állítva).';

$GLOBALS["lang"]['Any devices will be assigned to this Org when they run their audit script (if set). Links to <code>orgs.id</code>.'] = 'Minden eszközt ehhez az Org-hoz rendelünk, amikor lefuttatják a könyvvizsgálati forgatókönyvet (ha be van állítva). Kapcsolatok <code>orgs.id</code>.';

$GLOBALS["lang"]['Any discovered devices will be assigned to this Location if set. Links to <code>locations.id</code>.'] = 'Minden felfedezett eszközt erre a helyre rendelünk, ha be van állítva. Kapcsolatok <code>locations.id</code>.';

$GLOBALS["lang"]['Any discovered devices will be assigned to this Location when they run their audit script (if set).'] = 'Minden felfedezett eszköz erre a helyre kerül, amikor lefuttatja a könyvvizsgálati forgatókönyvet (ha be van állítva).';

$GLOBALS["lang"]['Any discovered devices will be assigned to this Location when they run their audit script (if set). Links to <code>locations.id</code>.'] = 'Minden felfedezett eszköz erre a helyre kerül, amikor lefuttatja a könyvvizsgálati forgatókönyvet (ha be van állítva). Kapcsolatok <code>locations.id</code>.';

$GLOBALS["lang"]['Any discovered devices will be assigned to this Org if set. If not set, they are assigned to the <code>org_id</code> of this discovery. Links to <code>orgs.id</code>.'] = 'Minden felfedezett eszközt ehhez az Org-hoz rendelünk, ha be van állítva. Ha nincs beállítva, akkor a <code>org_id</code> Ez a felfedezés. Kapcsolatok <code>orgs.id</code>.';

$GLOBALS["lang"]['Any files found in this manner are stored in the <i>executable</i> table as per any other device component.'] = 'Az ilyen módon talált fájlokat a <i>végrehajtható</i> táblázat, az eszköz bármely más összetevője szerint.';

$GLOBALS["lang"]['Any required filter. NOTE: When type = traffic, this represents the font-awesome icon.'] = 'Minden szükséges szűrő. MEGJEGYZÉS: Amikor a típus = forgalom, ez képviseli a fond- félelmetes ikon.';

$GLOBALS["lang"]['Any specific TCP ports you wish tested (comma seperated, no spaces).'] = 'Minden konkrét TCP portok kívánt tesztelt (vessző elkülönített, szóközök nélkül).';

$GLOBALS["lang"]['Any specific UDP ports you wish tested (comma seperated, no spaces).'] = 'Minden konkrét UDP portok kívánt tesztelt (vessző elkülönített, szóközök nélkül).';

$GLOBALS["lang"]['Any user uploaded images are placed here.'] = 'Minden feltöltött kép ide kerül.';

$GLOBALS["lang"]['Application'] = 'Alkalmazás';

$GLOBALS["lang"]['Application Definitions'] = 'Alkalmazási fogalommeghatározások';

$GLOBALS["lang"]['application_id'] = 'Alkalmazási azonosító';

$GLOBALS["lang"]['Application ID'] = 'Alkalmazási azonosító';

$GLOBALS["lang"]['Application Licenses'] = 'Alkalmazási engedélyek';

$GLOBALS["lang"]['Application, Operating System or Hardware.'] = 'Alkalmazás, operációs rendszer vagy hardver.';

$GLOBALS["lang"]['applications'] = 'Alkalmazások';

$GLOBALS["lang"]['Applications'] = 'Alkalmazások';

$GLOBALS["lang"]['Applications are an Enterprise only feature.'] = 'Az alkalmazások csak az Enterprise funkciói.';

$GLOBALS["lang"]['Applications are being introduced in Open-AudIT 2.2 with a view to expand on the concept as further development is made.'] = 'A pályázatokat az Open- AudIT 2.2-ben vezetik be azzal a céllal, hogy a további fejlesztések során bővítsék a koncepciót.';

$GLOBALS["lang"]['applied'] = 'Alkalmazott';

$GLOBALS["lang"]['Applied'] = 'Alkalmazott';

$GLOBALS["lang"]['Approved'] = 'Jóváhagyva';

$GLOBALS["lang"]['Approved Packages'] = 'Engedélyezett csomagok';

$GLOBALS["lang"]['April'] = 'Április';

$GLOBALS["lang"]['Arabic'] = 'Arab';

$GLOBALS["lang"]['architecture'] = 'Építészet';

$GLOBALS["lang"]['Architecture'] = 'Építészet';

$GLOBALS["lang"]['Are you sure you want to delete this input item?'] = 'Biztosan törölni szeretné ezt a bemeneti elemet?';

$GLOBALS["lang"]['Are you sure you want to delete this output item?'] = 'Biztosan törölni szeretné ezt a kimeneti elemet?';

$GLOBALS["lang"]['Are you sure?'] = 'Biztos?';

$GLOBALS["lang"]['Are you sure? This will remove all queue entries and prevent the remaining IPs from being discovered.'] = 'Biztos? Ez eltávolítja az összes sorban álló bejegyzéseket, és megakadályozza a fennmaradó IP-ek felfedezését.';

$GLOBALS["lang"]['Are you sure? This will reset the queue processing count and could cause load on the server.'] = 'Biztos? Ez visszaállítja a sorszámot, és terhelést okozhat a szerveren.';

$GLOBALS["lang"]['area'] = 'Terület';

$GLOBALS["lang"]['Area'] = 'Terület';

$GLOBALS["lang"]['Argentina'] = 'Argentína';

$GLOBALS["lang"]['Armenia'] = 'Örményország';

$GLOBALS["lang"]['arp'] = 'Arp';

$GLOBALS["lang"]['Arp'] = 'Arp';

$GLOBALS["lang"]['Aruba'] = 'Aruba';

$GLOBALS["lang"]['As a reminder of how authorisations works in Open-AudIT, see'] = 'Emlékeztetőül, hogyan működik az engedélyek Open- AudIT, lásd';

$GLOBALS["lang"]['As a result, we <strong>must</strong> have the admin$ share available to the discovery credentials user. Please check the target Windows machine provides <i>write</i> access for the discovery credentials user.<br>'] = 'Ennek eredményeként <strong>kell</strong> van az admin $megosztást elérhető a felfedezési megbízások felhasználó. Kérjük, ellenőrizze a cél Windows gép biztosítja <i>írás</i> Hozzáférés a felfedezési megbízások felhasználójához.<br/>';

$GLOBALS["lang"]['As mentioned above, the developers do not speak all the translation languages offered. This means we cannot review with acuracy, the translated text. We do try for a cursory review. If you see something that is not translated correctly, you can change it yourself. Edit the appropriate language file (as below) and find the text to be changed. Maybe it does not exist and you need to add it. Just change the text, save the file and refresh your we page. No need to restart any services/daemons for it to take effect. You might need to force refresh your browser.'] = 'Mint már említettük, a fejlesztők nem beszélik az összes ajánlott fordítási nyelvet. Ez azt jelenti, hogy nem tudjuk felülvizsgálni a lefordított szöveget. Próbálkozunk egy gyors felülvizsgálattal. Ha látsz valamit, ami nincs helyesen lefordítva, megváltoztathatod magad. A megfelelő nyelvi fájl szerkesztése (az alábbiak szerint) és a szöveg módosítása. Talán nem is létezik, és hozzá kell adnod. Csak módosítsa a szöveget, mentse el a fájlt, és frissítse a mi oldalunkat. Nem kell újraindítani a szolgáltatásokat / démonokat, hogy érvénybe lépjen. Lehet, hogy fel kell frissítenie a böngészőjét.';

$GLOBALS["lang"]['As per the OpenSCAP benchmarks - <i>Do not attempt to implement any of the settings in this benchmark without first testing them in a non-operational environment. The creators of this benchmark assume no responsibility whatsoever for its use by other parties, and makes no guarantees, expressed or implied, about its quality, reliability, or any other characteristic.</i><br><br>Seriously, do not blindly start <i>fixing</i> issues revealed after running a benchmark without first thoroughly testing in a non-production, identical environment.'] = 'Az OpenSCAP-referenciaértékek szerint <i>Ne próbálja meg végrehajtani a referenciamutató egyik beállítását sem anélkül, hogy először nem működőképes környezetben tesztelné azokat. E referenciaérték kidolgozói semmilyen felelősséget nem vállalnak annak más felek általi használatáért, és nem nyújtanak - kifejezett vagy vélelmezett - garanciát annak minőségére, megbízhatóságára vagy más jellemzőjére vonatkozóan.</i><br/><br/>Komolyan, ne vakon kezdd! <i>rögzítés</i> egy referenciaérték futtatása után feltárt problémák, amelyek nem termelésben, azonos környezetben történő első alapos vizsgálat nélkül történtek.';

$GLOBALS["lang"]['As per the attributes for device environments. Production, Training, et al.'] = 'Az eszköz környezetére vonatkozó attribútumok szerint. Production, Training, et al.';

$GLOBALS["lang"]['As the audit script uses bash, you can use the wildcard of * when you are defining directories and exclusions.'] = 'Mivel a könyvvizsgálati szkript bash, akkor használja a * wildcard, ha meghatározza könyvtárak és kizárások.';

$GLOBALS["lang"]['As usual, go to menu → Manage → Integrations → Create Integration. As above, if you are running on Linux and you have NMIS on the same server, you do not need to do anything other than click <i>Submit</i>. I cannot make it easier than that.'] = 'Mint mindig, menj a menübe → Kezelés → Integráció → Integráció létrehozása. Mint fentebb, ha Linux-on futsz, és NMIS-ed van ugyanazon a szerveren, nem kell mást tenned, mint kattintani. <i>Engedély</i>. Nem könnyíthetem meg.';

$GLOBALS["lang"]['As we run Discoveries and collect device results we populate the list of networks. The Blessed Subnets feature uses this list of networks to only accept data from devices on those networks.'] = 'A felderítések lefuttatása és az eszközgyűjtés során a hálózatok listáját terjesztjük. Az Áldott Alhálók funkció használja ezt a listát a hálózatok, hogy csak elfogadni adatokat eszközök ezeken a hálózatokon.';

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

$GLOBALS["lang"]['Assign an ISMS manager or team'] = 'ISMS-kezelő vagy -csoport kijelölése';

$GLOBALS["lang"]['Assign an Operator'] = 'Üzemeltető kijelölése';

$GLOBALS["lang"]['Assign any audited devices to this Org. Leave blank to leave device in currently assigned Org (or to set default).'] = 'Jelölje be a vizsgált eszközöket ehhez az Org-hoz. Hagyja üresen az eszközt a jelenleg kijelölt Org-ban (vagy állítsa be az alapértelmezett értéket).';

$GLOBALS["lang"]['Assign the Device to a Location'] = 'Az eszköz kijelölése egy helyre';

$GLOBALS["lang"]['Assign the device to an Org'] = 'Az eszköz hozzárendelése egy org';

$GLOBALS["lang"]['Assigned To'] = 'Címzett';

$GLOBALS["lang"]['Assigning Discovered Devices'] = 'A felfedezett eszközök hozzárendelése';

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

$GLOBALS["lang"]['Attempt to ping the device if we are not auditing localhost.'] = 'Próbálja meg pingelni az eszközt, ha nem a localhost ellenőrzése.';

$GLOBALS["lang"]['Attribute'] = 'Attribútum';

$GLOBALS["lang"]['attributes'] = 'Attribútumok';

$GLOBALS["lang"]['Attributes'] = 'Attribútumok';

$GLOBALS["lang"]['Attributes are stored for Open-AudIT to use for particular fields, at present all fields are based on the devices, locations, orgs and queries tables. The attributes you can edit are associated with the following columns: Class, Environment, Status & Type.'] = 'Attribútumok tárolja Open- AudIT használni bizonyos mezők, jelenleg minden mező alapul eszközök, helyszínek, orgák és lekérdezések táblázatok. A szerkeszthető attribútumok a következő oszlopokhoz kapcsolódnak: Osztály, környezet, státusz és típus.';

$GLOBALS["lang"]['Audit'] = 'Ellenőrzés';

$GLOBALS["lang"]['Audit AIX'] = 'Audit AIX';

$GLOBALS["lang"]['Audit DNS'] = 'Ellenőrzési DNS';

$GLOBALS["lang"]['Audit ESXi'] = 'Ellenőrzés ESXi';

$GLOBALS["lang"]['Audit Linux'] = 'Linux ellenőrzés';

$GLOBALS["lang"]['audit_log'] = 'Ellenőrzési napló';

$GLOBALS["lang"]['Audit Log'] = 'Ellenőrzési napló';

$GLOBALS["lang"]['Audit Mount Point'] = 'Ellenőrzési Mount Point';

$GLOBALS["lang"]['Audit My PC'] = 'Ellenőrzés PC';

$GLOBALS["lang"]['Audit Netstat'] = 'Audit Netstat';

$GLOBALS["lang"]['Audit OSX'] = 'Ellenőrzés OSX';

$GLOBALS["lang"]['Audit Result Input'] = 'Ellenőrzési eredmény';

$GLOBALS["lang"]['Audit Software'] = 'Könyvvizsgálati szoftver';

$GLOBALS["lang"]['Audit Status'] = 'Ellenőrzési státus';

$GLOBALS["lang"]['Audit Win32 Product'] = 'Audit Win32 Termék';

$GLOBALS["lang"]['Audit Windows'] = 'Windows ellenőrzés';

$GLOBALS["lang"]['Audit the Device'] = 'Az eszköz ellenőrzése';

$GLOBALS["lang"]['Audits'] = 'Ellenőrzések';

$GLOBALS["lang"]['August'] = 'augusztus';

$GLOBALS["lang"]['Australia'] = 'Ausztrália';

$GLOBALS["lang"]['Austria'] = 'Ausztria';

$GLOBALS["lang"]['Auth'] = 'Auth';

$GLOBALS["lang"]['auth'] = 'Auth';

$GLOBALS["lang"]['Auth Methods'] = 'Aut methods';

$GLOBALS["lang"]['Authenticate only'] = 'Csak hitelesítés';

$GLOBALS["lang"]['Authentication Passphrase'] = 'Hitelesítés Passphrase';

$GLOBALS["lang"]['Authentication Protocol'] = 'Hitelesítési protokoll';

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

$GLOBALS["lang"]['Available Benchmarks'] = 'A rendelkezésre álló referenciaértékek';

$GLOBALS["lang"]['Awaiting Analysis'] = 'Várakozási elemzés';

$GLOBALS["lang"]['Azerbaijan'] = 'Azerbajdzsán';

$GLOBALS["lang"]['Azerbaijani'] = 'Azerbajdzsáni';

$GLOBALS["lang"]['Azure Active Directory'] = 'Azure Active Directory';

$GLOBALS["lang"]['BTU Max'] = 'BTU Max';

$GLOBALS["lang"]['BTU Total'] = 'BTU összesen';

$GLOBALS["lang"]['Backbone network'] = 'Backbone hálózat';

$GLOBALS["lang"]['Backup'] = 'Erősítés';

$GLOBALS["lang"]['Bahamas the'] = 'Bahama-szigetek';

$GLOBALS["lang"]['Bahrain'] = 'Bahrein';

$GLOBALS["lang"]['Bangladesh'] = 'Banglades';

$GLOBALS["lang"]['bank'] = 'Bank';

$GLOBALS["lang"]['Bank'] = 'Bank';

$GLOBALS["lang"]['Banned'] = 'Száműzött';

$GLOBALS["lang"]['Banned Packages'] = 'Bankett csomagok';

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

$GLOBALS["lang"]['Baselines can compare netstat ports, users and software.'] = 'Alapok összehasonlítani Netstat ports, felhasználók és szoftver.';

$GLOBALS["lang"]['Baselines enable you to combine audit data with a set of attributes you have previously defined (your baseline) to determine compliance of devices.'] = 'Alapok lehetővé teszi, hogy az ellenőrzési adatokat kombinálja egy sor attribútum korábban meghatározott (a kiindulási), hogy meghatározza az eszközök megfelelőségét.';

$GLOBALS["lang"]['Baselines for Device Comparison'] = 'Az eszköz összehasonlítása alapjai';

$GLOBALS["lang"]['Basic'] = 'Alap';

$GLOBALS["lang"]['Basque'] = 'BaszkName';

$GLOBALS["lang"]['Because we try to be as transparent as possible, here is your actual data that we send.'] = 'Mivel igyekszünk a lehető legátláthatóbb lenni, itt vannak a tényleges adatok, amiket küldünk.';

$GLOBALS["lang"]['Being able to determine which machines are configured in the same way is a major part of systems administration and auditing – and now reporting on that will be made simple and automated. Once you define your baseline it will automatically run against a set of devices on a predetermined schedule. The output of these executed baselines will be available for web viewing, importing into a third party system or even as a printed report.<br><br>For auditing and management purposes it can be advantageous to baseline individual devices against a fixed, known good device. Baselines enable you to combine audit data with a set of attributes you have previously defined (your baseline) to determine compliance of devices.'] = 'Az, hogy meg tudjuk határozni, hogy mely gépeket konfigurálják ugyanúgy, a rendszerek adminisztrációjának és auditálásának fontos része - és most a jelentéstétel egyszerűvé és automatikussá válik. Ha meghatározza a kiindulási értéket, automatikusan fut egy sor eszköz egy előre meghatározott ütemezés. A végrehajtott alapvonalak kimenete webes megtekintésre, harmadik fél rendszerébe történő importálásra vagy akár nyomtatott jelentésre is rendelkezésre áll.<br/><br/>Ellenőrzési és irányítási célból előnyös lehet az egyes alapeszközök számára egy rögzített, ismert jó eszközzel szemben. Alapok lehetővé teszi, hogy az ellenőrzési adatokat kombinálja egy sor attribútum korábban meghatározott (a kiindulási), hogy meghatározza az eszközök megfelelőségét.';

$GLOBALS["lang"]['Belarus'] = 'Belarusz';

$GLOBALS["lang"]['Belgium'] = 'Belgium';

$GLOBALS["lang"]['Belize'] = 'Belize';

$GLOBALS["lang"]['Below is an example of the required csv format.'] = 'Az alábbiakban egy példa a szükséges csv formátum.';

$GLOBALS["lang"]['Below these lines are where the variables are injected into the script. Following on from our earlier example, the Linux audit script is populated with our directory like so'] = 'Ezek alatt a sorok alatt vannak a változók befecskendezése a szkriptbe. A korábbi példánkból következik, hogy a Linux könyvvizsgálati szkript így benépesíti a könyvtárunkat.';

$GLOBALS["lang"]['Below you can see an example Org Chart. If a user has permission on the <i>Finance A</i> Org, they also have permission on the descendant Orgs of Dept A, B & C. This is regardless of the collection requested.<br><br>If the collection requested allows ascendants, then the user will also have access to Company #1 and Default Org items. This is for (as above) queries, groups, et al.<br><br>Note - A user may have access to a query from Default Org, but that is the query itself not the result. The result will only show devices that the user has access to - IE devices from Finance A and Dept A, B & C.'] = 'Az alábbiakban látható egy példa Org Chart. Ha a felhasználó jogosult a <i>"A" pénzügy</i> Org, nekik is van engedélyük a Dept A, B & C leszármazottai számára. Ez függetlenül a kért gyűjteménytől.<br/><br/>Ha a kért gyűjtemény lehetővé teszi a felemelkedőket, akkor a felhasználó is hozzáférhet a cég # 1 és Alapértelmezett Org elemek. Ez (mint fent) a lekérdezések, csoportok, et al.<br/><br/>Megjegyzés - A felhasználó hozzáférhet az alapértelmezett org lekérdezéséhez, de ez maga a lekérdezés nem az eredmény. Az eredmény csak azt mutatja, hogy a felhasználó hozzáférhet - IE eszközök Finance A és Dept A, B & C';

$GLOBALS["lang"]['Benchmark'] = 'Referenciajel';

$GLOBALS["lang"]['benchmark_id'] = 'Referenciaazonosító';

$GLOBALS["lang"]['Benchmark ID'] = 'Referenciaazonosító';

$GLOBALS["lang"]['Benchmark Tasks are created automatically when a benchmark is created.'] = 'A referenciaértékek létrehozásakor a referenciaértékek automatikusan létrejönnek.';

$GLOBALS["lang"]['Benchmark execution and processing can take a lengthy amount of time, hence the preference to schedule them and not run them ad-hoc.'] = 'A teljesítménymutatók végrehajtása és feldolgozása hosszadalmas időt vehet igénybe, ezért az ütemezés előnyben részesítése nem ad hoc.';

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

$GLOBALS["lang"]['Benchmarks are created by providing an operating system and Version, combined with a specific guide and a list of machines to execute it upon. After creation, benchmarks are executed against the list of machines on a schedule.'] = 'A referenciajeleket egy operációs rendszer és a Verzió biztosításával hozzák létre, egy konkrét útmutatóval és egy olyan gépek listájával együtt, amelyek ezt követően végrehajtják. Létrehozás után a referenciamutatókat az ütemterv szerinti gépek listája alapján hajtják végre.';

$GLOBALS["lang"]['Benchmarks for Best Practise Configuration'] = 'Referenciajelek a legjobb gyakorlati beállításokhoz';

$GLOBALS["lang"]['Benchmarks provide security recommendations for your computers, utilising the OpenSCAP tools and policies.</p><p><i>From the OpenSCAP homepage:</i>  In the ever-changing world of computer security where new vulnerabilities are being discovered and patched every day, enforcing security compliance must be a continuous process. It also needs to include a way to make adjustments to policies, as well as periodic assessment and risk monitoring. The OpenSCAP ecosystem provides tools and customizable policies for a quick, cost-effective and flexible implementation of these processes.'] = 'A referenciajelek biztonsági ajánlásokat nyújtanak a számítógépekhez, az OpenSCAP eszközök és politikák felhasználásával.<p><i>Az OpenSCAP honlapjáról:</i> A számítógépes biztonság állandóan változó világában, ahol minden nap új sebezhetőségeket fedeznek fel és foltoznak össze, a biztonsági megfelelés érvényesítésének folyamatos folyamatnak kell lennie. Magában kell foglalnia a politikák kiigazításának módját, valamint az időszakos értékelést és a kockázatfelügyeletet. Az OpenSCAP ökoszisztéma eszközöket és testreszabható politikákat biztosít e folyamatok gyors, költséghatékony és rugalmas végrehajtásához.</p>';

$GLOBALS["lang"]['Benefits'] = 'Előnyök';

$GLOBALS["lang"]['Bengali'] = 'Bengáli';

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

$GLOBALS["lang"]['Both forms of'] = 'Mindkét formája';

$GLOBALS["lang"]['Botswana'] = 'Botswana';

$GLOBALS["lang"]['Bouvet Island (Bouvetoya)'] = 'Bouvet-sziget (Bouvetoya)';

$GLOBALS["lang"]['Brazil'] = 'Brazília';

$GLOBALS["lang"]['Brazilian Portuguese'] = 'Brazil portugál';

$GLOBALS["lang"]['Breaking it Down'] = 'Breaking it down';

$GLOBALS["lang"]['British Indian Ocean Territory (Chagos Archipelago)'] = 'Brit Indiai-óceáni terület (Chagos Archipelago)';

$GLOBALS["lang"]['British Virgin Islands'] = 'Brit Virgin-szigetek';

$GLOBALS["lang"]['Browse down the tree to Console Root -> Component Services -> Computers -> My Computer<br><br>Right click on <i>My Computer</i> and select properties<br><br>Select the <i>Default Properties</i> tab'] = 'Böngészés a fán a Console Root - > Komponens szolgáltatások - > Számítógépek - > A számítógépem<br/><br/>Jobb egérgombbal <i>A számítógépem</i> és válassza ki a tulajdonságok<br/><br/>Válassza ki a <i>Alapértelmezett tulajdonságok</i> tab';

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

$GLOBALS["lang"]['Builds trust with clients and partners'] = 'Megbízást épít ügyfelekkel és partnerekkel';

$GLOBALS["lang"]['Bulgaria'] = 'Bulgária';

$GLOBALS["lang"]['Bulgarian'] = 'bolgár';

$GLOBALS["lang"]['Bulk Edit'] = 'Tömegszerkesztés';

$GLOBALS["lang"]['Bulk Edit Form'] = 'Tömegszerkesztési űrlap';

$GLOBALS["lang"]['Bulk Editing Device Attributes'] = 'Tömegszerkesztő eszközök attribútumai';

$GLOBALS["lang"]['Bulk edit selections wont stay selected after clicking next page.'] = 'A tömeges szerkesztési beállítások nem maradnak kiválasztva a következő oldalra kattintva.';

$GLOBALS["lang"]['Burkina Faso'] = 'Burkina Faso';

$GLOBALS["lang"]['Burundi'] = 'Burundi';

$GLOBALS["lang"]['business_requirements'] = 'Üzleti követelmények';

$GLOBALS["lang"]['Business Requirements'] = 'Üzleti követelmények';

$GLOBALS["lang"]['But I Only Have Windows Client Machines Available!'] = 'De csak Windows kliens gépek állnak rendelkezésre!';

$GLOBALS["lang"]['But I do not want to have to change the language file every time I update!'] = 'De nem akarom, hogy minden alkalommal, amikor frissíteni!';

$GLOBALS["lang"]['Buy'] = 'Vásárlás';

$GLOBALS["lang"]['Buy More'] = 'Buy More';

$GLOBALS["lang"]['Buy More Licenses'] = 'További licencek vásárlása';

$GLOBALS["lang"]['By'] = 'By';

$GLOBALS["lang"]['By default we integrate all devices with their nmis_manage attribute set to <i>y</i>. With 4.2.0 we also ship a Rule that says <i>If we discover a device and it has a valid SNMP OID, mark that device as managed by NMIS</i>. Obviously you can disable this if it is not what you want.'] = 'Alapértelmezés szerint integrálunk minden eszközt az nmis _ management attribútumaival <i>y</i>. A 4.2.0 is szállít egy szabály, amely azt mondja, <i>Ha felfedezünk egy eszközt, és van egy érvényes SNMP OID, jelölje meg, hogy a készülék által kezelt NMIS</i>. Nyilvánvalóan hatástalaníthatod, ha nem ezt akarod.';

$GLOBALS["lang"]['By default, we skip certificate validation because customers tend to use self-signed certificates. To enable certificate validation, edit the file below'] = 'Alapértelmezés szerint azért hagyjuk ki a tanúsítvány érvényesítését, mert az ügyfelek általában önjelölt tanúsítványokat használnak. A tanúsítvány érvényesítésének lehetővé tétele érdekében az alábbi fájl szerkesztése';

$GLOBALS["lang"]['CIDR'] = 'CIDR';

$GLOBALS["lang"]['CIDR Mask'] = 'CIDR Maszk';

$GLOBALS["lang"]['cli_config'] = 'CLI Config';

$GLOBALS["lang"]['CLI Config'] = 'CLI Config';

$GLOBALS["lang"]['CPU'] = 'CPU';

$GLOBALS["lang"]['CPUs'] = 'CPU';

$GLOBALS["lang"]['CSV'] = 'CSV';

$GLOBALS["lang"]['CVE'] = 'CVE';

$GLOBALS["lang"]['CVEs with a status of received, awaiting analysis, undergoing analysis, rejected. These CVEs (mostly) do not contain sufficient information to enable us to generate a correct SQL query.'] = 'A beérkezett, elemzésre váró, elemzésre váró, elutasított KVSZ-ek. Ezek a CVE-k (többnyire) nem tartalmaznak elegendő információt ahhoz, hogy megfelelő SQL lekérdezést készíthessünk.';

$GLOBALS["lang"]['Calculated from discovery.'] = 'A felfedezésből számolva.';

$GLOBALS["lang"]['Calculated total number of valid IP addresses for this network.'] = 'A hálózat érvényes IP-címeinek teljes számítása.';

$GLOBALS["lang"]['Calculated upon completion, the time taken to execute this item.'] = 'Kiszámolva a befejezés, az idő, hogy végrehajtsa ezt a tételt.';

$GLOBALS["lang"]['Calculated when integration is run and contains a JSON representation of the devices in this integration. Each links to <code>devices.id</code>.'] = 'Számított, amikor az integráció fut, és tartalmaz egy JSON ábrázolása az eszközök ebben az integrációban. Minden linkre <code>devices.id</code>.';

$GLOBALS["lang"]['Calculated when integration is run and contains a JSON representation of the locations in this integration. Each links to <code>locations.id</code>.'] = 'Számított, amikor az integráció fut, és tartalmaz egy JSON ábrázolása a helyszínek ebben az integrációban. Minden linkre <code>locations.id</code>.';

$GLOBALS["lang"]['Calculated when integration is run and contains the number of devices selected from Open-AudIT.'] = 'Kiszámolva, amikor az integráció fut, és tartalmazza a kiválasztott eszközök számát Open- AudIT.';

$GLOBALS["lang"]['Calculated when integration is run and contains the number of devices selected the external system.'] = 'Az integráció futásakor számítják ki, és a kiválasztott eszközök számát tartalmazzák.';

$GLOBALS["lang"]['Calculated when integration is run and contains the number of devices to be updated in the external system.'] = 'Az integráció futásakor számítják ki, és a külső rendszerben frissítendő eszközök számát tartalmazzák.';

$GLOBALS["lang"]['Calculated when integration is run and contains the number of devices updated in Open-AudIT.'] = 'Az integráció futásakor számoljuk ki, és tartalmazza az Open- AudIT-ban frissített eszközök számát.';

$GLOBALS["lang"]['Call up a command prompt by clicking Start and searching for <code>command</code>'] = 'A start gombra kattintva hívja fel a parancsparancsot <code>command</code>';

$GLOBALS["lang"]['Cambodia'] = 'Kuba';

$GLOBALS["lang"]['Cameroon'] = 'Kamerun';

$GLOBALS["lang"]['Campus Area Network'] = 'Kampuszterület-hálózat';

$GLOBALS["lang"]['Campus area network'] = 'Kampuszterület-hálózat';

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

$GLOBALS["lang"]['Catalan'] = 'Katalán';

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

$GLOBALS["lang"]['Certification'] = 'Bizonyítvány';

$GLOBALS["lang"]['Certification Audit'] = 'Tanúsítványellenőrzés';

$GLOBALS["lang"]['Certification Process'] = 'Tanúsítási eljárás';

$GLOBALS["lang"]['Chad'] = 'Csád';

$GLOBALS["lang"]['Change'] = 'Változás';

$GLOBALS["lang"]['change_id'] = 'Személyazonosító módosítás';

$GLOBALS["lang"]['Change ID'] = 'Személyazonosító módosítás';

$GLOBALS["lang"]['change_log'] = 'A napló módosítása';

$GLOBALS["lang"]['Change Log'] = 'A napló módosítása';

$GLOBALS["lang"]['Change Logs'] = 'A naplók módosítása';

$GLOBALS["lang"]['change_type'] = 'Típus módosítása';

$GLOBALS["lang"]['Change Type'] = 'Típus módosítása';

$GLOBALS["lang"]['check_minutes'] = 'Ellenőrzési jegyzőkönyv';

$GLOBALS["lang"]['Check Minutes'] = 'Ellenőrzési jegyzőkönyv';

$GLOBALS["lang"]['Check for SSH on these ports'] = 'Ellenőrizze az SSH-t ezeken a kikötőkön';

$GLOBALS["lang"]['Check this port for any SSH service.'] = 'Ellenőrizze ezt a portot minden SSH szolgáltatás.';

$GLOBALS["lang"]['Chile'] = 'Chile';

$GLOBALS["lang"]['China'] = 'Kína';

$GLOBALS["lang"]['Chinese'] = 'Kínai';

$GLOBALS["lang"]['Chinese (traditional)'] = 'Kínai (hagyományos)';

$GLOBALS["lang"]['Choose'] = 'Válasszon';

$GLOBALS["lang"]['Choose (select OS first)'] = 'Válasszon (először válassza az OS-t)';

$GLOBALS["lang"]['Choose a Device'] = 'Válasszon ki egy eszközt';

$GLOBALS["lang"]['Choose a Table'] = 'Táblázat kiválasztása';

$GLOBALS["lang"]['Choose the type of the task from the first drop down. This will configure the additional fields required depending on the type of task.'] = 'Válassza ki a feladat típusát az első csepp. Ez a feladat típusától függően meghatározza a szükséges további mezőket.';

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

$GLOBALS["lang"]['Click <i>New client secret</i>.'] = 'Kattintson ide <i>Új ügyféltitok</i>.';

$GLOBALS["lang"]['Click Submit to Execute'] = 'Kattintson a Küldés a végrehajtáshoz';

$GLOBALS["lang"]['Click on <i>Properties</i> under the <i>Manage</i> header in the central menu column. Copy the <i>User Access URL</i>. Once copied, paste it into yout text editor. You will need to copy one section of this field.<br><br>Our example field looks like this<br><code>https://launcher.myapps.microsoft.com/api/signin/5d97003c-g24b-346e-9932-77db6470b939?tenantId=cf406343-1a96-4f7c-0cc6-46e86dddabf3</code>.<br><br>The section we need is <code>cf406343-1a96-4f7c-0cc6-46e86dddabf3</code> (the tenant ID). This is used in Open-AudIT as the <i>Tenant</i> field, so paste it in there.'] = 'Kattintson a <i>Tulajdonságok</i> cikk <i>Kezelés</i> Fejléc a központi menüoszlopban. Másolás <i>Felhasználói hozzáférés URL</i>. Ha lemásolta, illessze be a yout szövegszerkesztőbe. Másolnia kell a mező egy részét.<br/><br/>A példaképünk így néz ki.<br/><code>https://launcher.myapps.microsoft.com/api/signin/5d97003c-g24b-346e-9932-77db6470b939?tenantId=cf406343-1a96-4f7c-0cc6-46e86dddabf3</code>.<br/><br/>A rész, amire szükségünk van, <code>cf406343-1a96-4f7c-0cc6-46e86dddabf3</code> (a bérlő azonosítója). Ezt használják az Open- AudIT <i>Bérlő</i> mező, szóval ragaszd bele.';

$GLOBALS["lang"]['Click on App Registrations to create a new Application, then click New Application Registration. Give it a name (I used Open-AudIT), select Web app / API as the type and provide any URL (the URL is not important) and now click Create.'] = 'Kattintson az App Registrations, hogy hozzon létre egy új alkalmazás, majd kattintson az Új jelentkezési regisztráció. Adjon neki egy nevet (Open- AudIT-ot használtam), válassza a Web app / API típust, és adjon meg bármilyen URL-t (az URL nem fontos), és most kattintson a Create gombra.';

$GLOBALS["lang"]['Click on OK and close the DCOMCNFG window.<br><br>The above changes will require a reboot to take effect.'] = 'Kattintson az OK gombra és zárja be a DCOMCNFG ablakot.<br/><br/>A fenti változtatásokhoz újra kell indítani.';

$GLOBALS["lang"]['Click on the application you just created. The Application ID displayed is the Client ID.<br><br>To create the client secret, click Settings, then Keys. Provide a key name and select an appropriate expiry date, then click Save.<br><br>The value will be populated for you - this is the Client Secret.'] = 'Kattintson az Ön által létrehozott alkalmazásra. Az alkalmazás azonosítója a kliens azonosítója.<br/><br/>A kliens titok létrehozásához kattintson a Beállítások gombra, majd a Keys gombra. Adja meg a kulcsnevet és válassza ki a megfelelő lejárati dátumot, majd kattintson a Mentés gombra.<br/><br/>Az érték lesz népes az Ön számára - ez az Ügyfél Titka.';

$GLOBALS["lang"]['Click the Delete button to remove the example devices from Open-AudIT.<br>This will remove the below devices from the database. '] = 'Kattintson a Törlés gombra az Open- AudIT példájának eltávolításához.<br/>Ez eltávolítja az alábbi eszközöket az adatbázisból. ';

$GLOBALS["lang"]['Click the Edit button for <i>Basic SAML Configuration</i>.'] = 'Kattintson a Szerkesztés gombra <i>MINTA Beállítás</i>.';

$GLOBALS["lang"]['Click the Import button below to populate Open-AudIT with example device data.'] = 'Kattintson az alábbi importáló gombra az Open- AudIT megjelenítéséhez.';

$GLOBALS["lang"]['Click the icon to the right of the field you wish to edit. Change the field and click the green icon to submit.'] = 'Kattintson az ikonra a szerkesztni kívánt mező jobb oldalán. A mező megváltoztatása és kattintson a zöld ikonra, hogy benyújtsa.';

$GLOBALS["lang"]['Client ID'] = 'Ügyfél azonosítója';

$GLOBALS["lang"]['Client ID and Secret'] = 'Ügyfél azonosító és titkos';

$GLOBALS["lang"]['client_ident'] = 'Ügyfél azonosító';

$GLOBALS["lang"]['Client Ident'] = 'Ügyfél azonosító';

$GLOBALS["lang"]['client_secret'] = 'Ügyfél titok';

$GLOBALS["lang"]['Client Secret'] = 'Ügyfél titok';

$GLOBALS["lang"]['client_site_name'] = 'Ügyfél neve';

$GLOBALS["lang"]['Client Site Name'] = 'Ügyfél neve';

$GLOBALS["lang"]['Close'] = 'Bezárás';

$GLOBALS["lang"]['Closed'] = 'Zárva';

$GLOBALS["lang"]['Cloud'] = 'Felhő';

$GLOBALS["lang"]['Cloud Details'] = 'Felhő adatai';

$GLOBALS["lang"]['Cloud Discovery'] = 'Felhő feltárása';

$GLOBALS["lang"]['Cloud Discovery and Auditing'] = 'Felhő feltárása és könyvvizsgálat';

$GLOBALS["lang"]['cloud_id'] = 'Felhőazonosító';

$GLOBALS["lang"]['Cloud ID'] = 'Felhőazonosító';

$GLOBALS["lang"]['cloud_log'] = 'Felhőnapló';

$GLOBALS["lang"]['Cloud Log'] = 'Felhőnapló';

$GLOBALS["lang"]['cloud_name'] = 'Felhő neve';

$GLOBALS["lang"]['Cloud Name'] = 'Felhő neve';

$GLOBALS["lang"]['Cloud Network'] = 'Felhőhálózat';

$GLOBALS["lang"]['clouds'] = 'Felhők';

$GLOBALS["lang"]['Clouds'] = 'Felhők';

$GLOBALS["lang"]['Clouds are a feature available to Open-AudIT Enterprise licensed customers.'] = 'A felhők az Open- AudIT Enterprise engedéllyel rendelkező ügyfelei számára állnak rendelkezésre.';

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

$GLOBALS["lang"]['Clusters and Reporting'] = 'Közzététel és jelentéstétel';

$GLOBALS["lang"]['Cocos (Keeling) Islands'] = 'Kókusz (Keeling) -szigetek';

$GLOBALS["lang"]['Collection'] = 'Gyűjtemény';

$GLOBALS["lang"]['Collections'] = 'Gyűjtemények';

$GLOBALS["lang"]['Collector'] = 'Gyűjtő';

$GLOBALS["lang"]['Collector (UUID)'] = 'Gyűjtő (UUID)';

$GLOBALS["lang"]['Collector / Server is an Enterprise only feature. Enterprise customers receive one Collector license for free. Additional Collector licenses can be purchased as required.'] = 'A Collector / Server csak egy Enterprise funkció. Az Enterprise ügyfelei egy Collector licencet kapnak ingyen. További Kollektori engedélyek megvásárolhatók szükség szerint.';

$GLOBALS["lang"]['Collector / Server is designed so that you can have a remote or <i>collector</i>  instance of Open-AudIT running on a remote machine. That collector instance might be in another security zone, subnet, cloud hosting instance or at a customer site.  The remote collector is then doing all the discovering and auditing of devices locally avoiding networking and firewalling complexity.  The Collector once it has registered is completely controlled by the <i>server</i>.  This means you only need an HTTP or HTTPS connection from that Collector to the Server.'] = 'A gyűjtőt / kiszolgálót úgy tervezték, hogy távirányító vagy <i>gyűjtő</i> például Open- AudIT fut egy távoli gép. Lehet, hogy az a gyűjtő egy másik biztonsági zónában van, alhálón, felhőtárhelyen vagy egy ügyféloldalon. A távoli gyűjtő ezt követően elvégzi az összes felfedező és audit eszközök helyi elkerülésére hálózati és tűzfal komplexitás. A gyűjtőt, miután regisztrálta, teljes mértékben ellenőrzi a <i>kiszolgáló</i>. Ez azt jelenti, hogy csak HTTP vagy HTTPS kapcsolatra van szükség a gyűjtőtől a szerverig.';

$GLOBALS["lang"]['Collector Dashboard'] = 'Gyűjtő műszerfal';

$GLOBALS["lang"]['Collector Name'] = 'Gyűjtő neve';

$GLOBALS["lang"]['collector_uuid'] = 'Gyűjtő Uuid';

$GLOBALS["lang"]['Collector Uuid'] = 'Gyűjtő Uuid';

$GLOBALS["lang"]['Collector tasks are automatically setup when the collector feature is enabled. Collector tasks should not be created directly by users. Collector tasks can have their frequency edited after creation. If the Open-AudIT Server has Collectors reporting to it, an additional drop down is provided. You can select this to specify which Collector the task should run on. Only Discovery tasks are supported for Collectors.'] = 'A gyűjtői feladatok automatikusan be vannak állítva, ha a gyűjtői funkció be van kapcsolva. A gyűjtői feladatokat nem közvetlenül a felhasználók hozzák létre. A gyűjtői feladatok a létrehozás után szerkeszthetők. Ha az Open- AudIT szerveren a gyűjtők jelentenek neki, akkor további leesés történik. Kiválaszthatja ezt, hogy meghatározza, hogy melyik Collector a feladat fut. Csak a Discovery feladatokat támogatják a gyűjtők.';

$GLOBALS["lang"]['Collectors'] = 'Gyűjtők';

$GLOBALS["lang"]['Collectors can operate in one of two modes: Collector and StandAlone. When in Collector mode, the instance of Open-AudIT is managed by the main server. When in Stand Alone mode, the instance is managed locally and forwards any found devices to the main server.'] = 'Gyűjtők működhetnek az egyik két mód: Gyűjtő és standAlone. Gyűjtő módban az Open- AudIT egy példányát a fő szerver kezeli. Amikor a Stand Alone módban, az eset kezelésére helyben, és továbbítja a talált eszközök a fő szerver.';

$GLOBALS["lang"]['Collectors for Remote Discovery'] = 'Gyűjtemények távoli felfedezéshez';

$GLOBALS["lang"]['Colombia'] = 'Kolumbia';

$GLOBALS["lang"]['color'] = 'Szín';

$GLOBALS["lang"]['Color'] = 'Szín';

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

$GLOBALS["lang"]['Comment out the below line (about line 49 or so). Just place a hash # at the start of the line.'] = 'Megjegyzés ki az alábbi sor (körülbelül vonal 49 vagy így). Csak rakj egy hasist a sor elejére.';

$GLOBALS["lang"]['comments'] = 'Megjegyzések';

$GLOBALS["lang"]['Comments'] = 'Megjegyzések';

$GLOBALS["lang"]['commercial'] = 'Kereskedelmi';

$GLOBALS["lang"]['Commercial'] = 'Kereskedelmi';

$GLOBALS["lang"]['Commercial Support'] = 'Kereskedelmi támogatás';

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

$GLOBALS["lang"]['Complete these steps.'] = 'Fejezd be ezeket a lépéseket.';

$GLOBALS["lang"]['Complexity of the attack (Low or High).'] = 'A támadás bonyolultsága (alacsony vagy magas).';

$GLOBALS["lang"]['Component Table'] = 'Összetevő táblázat';

$GLOBALS["lang"]['Components (All Devices)'] = 'Alkatrészek (minden eszköz)';

$GLOBALS["lang"]['Compute'] = 'Számítás';

$GLOBALS["lang"]['Condition'] = 'Feltétel';

$GLOBALS["lang"]['Conduct a risk assessment'] = 'Kockázatértékelés elvégzése';

$GLOBALS["lang"]['Conduct awareness and training programs'] = 'A tudatosságnövelő és képzési programok végrehajtása';

$GLOBALS["lang"]['Conduct management review meetings'] = 'A vezetőség felülvizsgálati ülései';

$GLOBALS["lang"]['Conduct regular surveillance audits (usually annually)'] = 'Rendszeres felügyeleti ellenőrzések végzése (általában évente)';

$GLOBALS["lang"]['Conducted by an accredited body in two stages'] = 'akkreditált testület által két szakaszban vezetett';

$GLOBALS["lang"]['Config'] = 'Config';

$GLOBALS["lang"]['Config Default, currently '] = 'Config Alapértelmezés, jelenleg ';

$GLOBALS["lang"]['config_file'] = 'Konfig fájl';

$GLOBALS["lang"]['Config File'] = 'Konfig fájl';

$GLOBALS["lang"]['config_manager_error_code'] = 'A hibakód beállításai';

$GLOBALS["lang"]['Config Manager Error Code'] = 'A hibakód beállításai';

$GLOBALS["lang"]['Configurable Role Based Access Control (RBAC)'] = 'Konfigurálható szerepalapú hozzáférés-szabályozás (RBAC)';

$GLOBALS["lang"]['configuration'] = 'Beállítás';

$GLOBALS["lang"]['Configuration'] = 'Beállítás';

$GLOBALS["lang"]['Configuration Change Detection and Reporting'] = 'Konfigurációs változás észlelése és jelentése';

$GLOBALS["lang"]['Configure'] = 'Beállítás';

$GLOBALS["lang"]['Configure the agent server-side to perform audits on a schedule'] = 'Az ügynök szerveroldalának beállítása az ellenőrzés ütemezéséhez';

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

$GLOBALS["lang"]['Consulting, implementation and other services are available through'] = 'Tanácsadás, végrehajtás és egyéb szolgáltatások állnak rendelkezésre';

$GLOBALS["lang"]['contact'] = 'Kapcsolat';

$GLOBALS["lang"]['Contact'] = 'Kapcsolat';

$GLOBALS["lang"]['contact_name'] = 'Kapcsolattartó neve';

$GLOBALS["lang"]['Contact Name'] = 'Kapcsolattartó neve';

$GLOBALS["lang"]['contained_in'] = 'Tartalmazva';

$GLOBALS["lang"]['Contained In'] = 'Tartalmazva';

$GLOBALS["lang"]['Contains a JSON object details the associated widgets and their positions.'] = 'Tartalmaz egy JSON objektum részleteket a kapcsolódó widgets és pozícióit.';

$GLOBALS["lang"]['Contains the fields that determine if we should use ssh, snmp and wmi discovery options. A JSON object.'] = 'Tartalmazza a mezőket, amelyek meghatározzák, hogy kell használni ssh, snmp és wmi felfedezés lehetőségeket. Egy JSON objektum.';

$GLOBALS["lang"]['Context & Leadership'] = 'Kontextus és vezetőség';

$GLOBALS["lang"]['Context Engine ID'] = 'Kontextus motorazonosító';

$GLOBALS["lang"]['Context Name'] = 'Kontextus neve';

$GLOBALS["lang"]['Continuously improve the ISMS'] = 'Az ISMS folyamatos javítása';

$GLOBALS["lang"]['contractual_obligations'] = 'Szerződéses kötelezettségek';

$GLOBALS["lang"]['Contractual Obligations'] = 'Szerződéses kötelezettségek';

$GLOBALS["lang"]['Cook Islands'] = 'Cook-szigetek';

$GLOBALS["lang"]['Copy and paste an audit result'] = 'Ellenőrzési eredmény másolása és beillesztése';

$GLOBALS["lang"]['Copy and paste the below to the forums, another instance of Open-AudIT or anywhere else you need to provide this item.'] = 'Másolja és illessze be az alábbi fórumokra, egy másik példány Open- AudIT vagy bárhol máshol meg kell adni ezt a tételt.';

$GLOBALS["lang"]['Copy the <i>Application ID</i> field and paste it into the Open-AudIT <i>Client ID</i> field for the new Auth Method.'] = 'Másolás <i>Alkalmazási azonosító</i> mező és illessze be az Open- AudIT <i>Ügyfél azonosítója</i> mező az új Auth módszerhez.';

$GLOBALS["lang"]['Copy the <i>Client ID</i> and paste it into the Open-AudIT <i>Client ID</i> field.<br>If there is no secret, click <i>Generate new secret</i>, then copy the value and paste it into the Open-AudIT <i>Client Secret</i> field.'] = 'Másolás <i>Ügyfél azonosítója</i> és illessze be az Open- AudIT-ba <i>Ügyfél azonosítója</i> mező.<br/>Ha nincs titok, kattints. <i>Új titok létrehozása</i>, majd másolja az értéket, és illessze be az Open- AudIT <i>Ügyfél titok</i> mező.';

$GLOBALS["lang"]['Copy the value and paste it into the Open-AudIT form for the <i>Client Secret</i> field.'] = 'Másolja le az értéket, és illessze be az Open- AudIT űrlapba <i>Ügyfél titok</i> mező.';

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

$GLOBALS["lang"]['Create File'] = 'Fájl létrehozása';

$GLOBALS["lang"]['Create Geocode'] = 'Geocode létrehozása';

$GLOBALS["lang"]['create_internal_count'] = 'Belső szám létrehozása';

$GLOBALS["lang"]['Create Internal Count'] = 'Belső szám létrehozása';

$GLOBALS["lang"]['create_internal_from_external'] = 'Belső külsõ létrehozása';

$GLOBALS["lang"]['Create Internal From External'] = 'Belső külsõ létrehozása';

$GLOBALS["lang"]['Create NMIS Devices from Open-AudIT'] = 'NMIS eszközök létrehozása az Open- AudIT-ból';

$GLOBALS["lang"]['Create Open-AudIT Devices from '] = 'Open- AudIT létrehozása Eszközök ';

$GLOBALS["lang"]['Create Open-AudIT Devices from NMIS'] = 'Open- AudIT létrehozása Az NMIS eszközei';

$GLOBALS["lang"]['Create a Baseline for the example device'] = 'Alapvonal létrehozása a példa eszközhöz';

$GLOBALS["lang"]['Create a Discovery'] = 'Felfedezés létrehozása';

$GLOBALS["lang"]['Create a Statement of Applicability (SoA)'] = 'Alkalmazhatósági nyilatkozat létrehozása (SoA)';

$GLOBALS["lang"]['created_by'] = 'Létrehozta';

$GLOBALS["lang"]['Created By'] = 'Létrehozta';

$GLOBALS["lang"]['created_date'] = 'Létrehozott dátum';

$GLOBALS["lang"]['Created Date'] = 'Létrehozott dátum';

$GLOBALS["lang"]['Creating'] = 'Létrehozás';

$GLOBALS["lang"]['Creating Credentials'] = 'Kártyák létrehozása';

$GLOBALS["lang"]['Creating Device'] = 'Eszközök létrehozása';

$GLOBALS["lang"]['Creating Widgets'] = 'Widgets létrehozása';

$GLOBALS["lang"]['Creating a Discovery Scan Options entry'] = 'Felfedezés létrehozása Keresés beállítások';

$GLOBALS["lang"]['Creating a Query'] = 'Kérdés létrehozása';

$GLOBALS["lang"]['Creating a SQL Statement for Groups'] = 'SQL-nyilatkozat létrehozása csoportok számára';

$GLOBALS["lang"]['Creating a SQL Statement for Queries'] = 'SQL nyilatkozat létrehozása lekérdezésekre';

$GLOBALS["lang"]['Creating an Integration'] = 'Integráció létrehozása';

$GLOBALS["lang"]['creator'] = 'Teremtő';

$GLOBALS["lang"]['Creator'] = 'Teremtő';

$GLOBALS["lang"]['credential'] = 'Kredenciális';

$GLOBALS["lang"]['Credential'] = 'Kredenciális';

$GLOBALS["lang"]['Credentials'] = 'Hitelezők';

$GLOBALS["lang"]['Credentials Client ID'] = 'Ügyfél azonosítója';

$GLOBALS["lang"]['Credentials Subscription ID'] = 'Credents Subscription Azonosító';

$GLOBALS["lang"]['Credentials Tenant ID'] = 'Hitelnyújtói azonosító';

$GLOBALS["lang"]['Credentials are stored in the <i>credentials</i> database table. The actual credential information is encrypted in storage. When a Discovery is run, a device has its specific credentials retrieved from the database, decrypted and tested. If these fail the list of credentials is also retrieved, decrypted and then tested against the device starting with credentials known to have worked previously. Device specific credentials are stored at an individual device level in the <i>credential</i> table (note - no <i>s</i> in the table name). SSH keys are tested before SSH username / password. When testing SSH, credentials will also be marked as working with sudo or being root.'] = 'A krediteket a <i>hitelesítő</i> adatbázistábla. A tényleges hitelesítő információ titkosított a raktárban. Amikor a Discovery fut, egy eszköz a konkrét mandátumát az adatbázisból, dekódolva és tesztelve. Ha ezek nem működnek, akkor a mandátumlistát is lekérdezik, dekódolják, majd tesztelik az eszköz ellen, kezdve a korábban ismert megbízásokkal. Eszközspecifikus hitelesítő tárolja az egyes eszköz szintjén a <i>hitelképes</i> táblázat (megjegyzés - nem <i>sz</i> a táblázat nevében). Az SSH billentyűket az SSH felhasználónév / jelszó előtt tesztelik. Az SSH vizsgálatakor a megbízóleveleket sudo-val vagy root-val is jelölik.';

$GLOBALS["lang"]['Credentials can have one of a few different types - snmp v.1 / v.2, snmp v.3, ssh, ssh key, windows are all implemented. CAVEAT - ssh keys are not implemented for Windows Open-AudIT servers as yet.'] = 'A credents lehet néhány különböző típus egyike - snmp v.1 / v.2, snmp v.3, ssh, ssh key, windows are all implemented. CAVEAT - ssh billentyűket még nem hajtottak végre a Windows Open- AudIT szerverekhez.';

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

$GLOBALS["lang"]['Custom Fields'] = 'Egyedi mezők';

$GLOBALS["lang"]['Custom TCP Ports'] = 'Egyedi TCP portok';

$GLOBALS["lang"]['Custom TCP Ports. Any specific ports we would liuke scanned in addition to the Top TCP Ports. Comma seperated, no spaces.'] = 'Egyedi TCP Ports. Minden egyes portot, amit a Top TCP Ports mellett letapogatnánk. Elkülönült vessző, nincs hely.';

$GLOBALS["lang"]['Custom UDP Ports'] = 'Egyedi UDP Kikötők';

$GLOBALS["lang"]['Custom UDP Ports. Any specific ports we would liuke scanned in addition to the Top UDP Ports. Comma seperated, no spaces.'] = 'Egyedi UDP Ports. Bármilyen konkrét portot, amit a Top UDP Ports-on kívül letapogatnánk. Elkülönült vessző, nincs hely.';

$GLOBALS["lang"]['Customisable Scanning Options per Discovery'] = 'Testreszabható szkennelés opciók egy felfedezés';

$GLOBALS["lang"]['Cve'] = 'Cve';

$GLOBALS["lang"]['Cyprus'] = 'Ciprus';

$GLOBALS["lang"]['Czech'] = 'Cseh';

$GLOBALS["lang"]['Czech Republic'] = 'Cseh Köztársaság';

$GLOBALS["lang"]['DHCP'] = 'DHCP';

$GLOBALS["lang"]['DN Account (optional)'] = 'DN-számla (nem kötelező)';

$GLOBALS["lang"]['DN Password (optional)'] = 'DN jelszó (nem kötelező)';

$GLOBALS["lang"]['DNS FQDN'] = 'DNS FQDN';

$GLOBALS["lang"]['DNS Hostname'] = 'DNS Hostname';

$GLOBALS["lang"]['Danish'] = 'dán';

$GLOBALS["lang"]['dashboard_id'] = 'A műszerfal azonosítója';

$GLOBALS["lang"]['Dashboard ID'] = 'A műszerfal azonosítója';

$GLOBALS["lang"]['Dashboard Widgets'] = 'A műszerfal szélei';

$GLOBALS["lang"]['dashboards'] = 'Tálca';

$GLOBALS["lang"]['Dashboards'] = 'Tálca';

$GLOBALS["lang"]['Dashboards and Widgets allow Enterprise licensed customers to create, read, update and delete both of these collections to ensure their homepage is exactly what they need to see. Not only that, but a user is able to set a given dashboard as their own homepage. Everyone does not need to use the same homepage (dashboard), nor the same widgets on that dashboard. Professional licensed customers can choose between two predefined dashboards to set as their own homepage.'] = 'A Dashboardok és a Widgets lehetővé teszik az Enterprise engedéllyel rendelkező ügyfelek számára, hogy mindkét gyűjteményt elkészítsék, elolvassák, frissítsék és töröljék, hogy a honlapjuk pontosan az, amit látniuk kell. Nem csak ez, hanem egy felhasználó is képes beállítani egy adott műszerfal saját honlapján. Nem mindenkinek kell ugyanazt a honlapot (műszerfal) használni, és nem is kell ugyanazt a grafikont használni. A szakmai engedéllyel rendelkező ügyfelek választhatnak két előre meghatározott műszerfal közül, amelyek saját honlapjukként jelennek meg.';

$GLOBALS["lang"]['Dashboards provide <i>at a glance</i> important visibility for changes occurring on your network as well as providing quick links to device types, manufacturers, and operating systems and so much more.'] = 'A műszerfal biztosítja <i>egy pillantásra</i> fontos láthatóság a hálózati változások, valamint a gyors kapcsolatok eszköztípusok, gyártók, és operációs rendszerek és még sok más.';

$GLOBALS["lang"]['Dashboards use'] = 'A műszerfal használata';

$GLOBALS["lang"]['Data'] = 'Adatok';

$GLOBALS["lang"]['Data Export - CSV, XML, JSON'] = 'Adatexport - CSV, XML, JSON';

$GLOBALS["lang"]['Data Retention'] = 'Adatmegőrzés';

$GLOBALS["lang"]['Database'] = 'Adatbázis';

$GLOBALS["lang"]['db_action'] = 'Adatbázis-művelet';

$GLOBALS["lang"]['Database Action'] = 'Adatbázis-művelet';

$GLOBALS["lang"]['db_column'] = 'Adatbázis-oszlop';

$GLOBALS["lang"]['Database Column'] = 'Adatbázis-oszlop';

$GLOBALS["lang"]['Database Definition'] = 'Adatbázis-meghatározás';

$GLOBALS["lang"]['db_row'] = 'Adatsor';

$GLOBALS["lang"]['Database Row'] = 'Adatsor';

$GLOBALS["lang"]['Database Schema'] = 'Adatbázis-rendszer';

$GLOBALS["lang"]['Database Server Discovery'] = 'Adatbázis kiszolgáló felfedezés';

$GLOBALS["lang"]['db_table'] = 'Adatbázis';

$GLOBALS["lang"]['Database Table'] = 'Adatbázis';

$GLOBALS["lang"]['Database Tables'] = 'Adatbázistáblázatok';

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

$GLOBALS["lang"]['Debugging'] = 'Hibakeresés';

$GLOBALS["lang"]['Debugging a Script'] = 'A szkript hibakeresése';

$GLOBALS["lang"]['December'] = 'december';

$GLOBALS["lang"]['Decommission'] = 'Megszűnés';

$GLOBALS["lang"]['Default'] = 'Alapértelmezés';

$GLOBALS["lang"]['Default Authentication Level - Set to Connect'] = 'Alapértelmezett hitelesítés Szint - Kapcsolódás beállítása';

$GLOBALS["lang"]['Default Impersonation Level - Set to Identify'] = 'Alapértelmezett személyazonosság Szint - Beállítás azonosításra';

$GLOBALS["lang"]['Default Items'] = 'Alapértelmezett tételek';

$GLOBALS["lang"]['Default Orgs Groups'] = 'Alapértelmezett rendszercsoportok';

$GLOBALS["lang"]['Default Roles Groups'] = 'Alapértelmezett szerepcsoportok';

$GLOBALS["lang"]['Default Value'] = 'Alapértelmezett érték';

$GLOBALS["lang"]['Default of 389. Normally 636 used for Active Directory LDAPS.'] = '389 alapértelmezés. Általában 636-ot használnak az Active Directory LDAPS-nél.';

$GLOBALS["lang"]['Default of <code>3</code> for LDAP and Active Directory.'] = 'Alapértelmezés: <code>3</code> LDAP és Active Directory esetében.';

$GLOBALS["lang"]['Defaults'] = 'Alapértelmezés';

$GLOBALS["lang"]['Deferred'] = 'Elhalasztva';

$GLOBALS["lang"]['Define project scope and objectives'] = 'A projekt alkalmazási körének és célkitűzéseinek meghatározása';

$GLOBALS["lang"]['Define the ISMS scope'] = 'Az ISMS alkalmazási körének meghatározása';

$GLOBALS["lang"]['Define the context of the organization (internal/external issues)'] = 'A szervezet kontextusának meghatározása (belső / külső kérdések)';

$GLOBALS["lang"]['delay_minutes'] = 'Késedelmi jegyzőkönyv';

$GLOBALS["lang"]['Delay Minutes'] = 'Késedelmi jegyzőkönyv';

$GLOBALS["lang"]['Delete'] = 'Törlés';

$GLOBALS["lang"]['Delete Example Devices'] = 'Példa eszközök törlése';

$GLOBALS["lang"]['delete_external_from_internal'] = 'A külső belső rész törlése';

$GLOBALS["lang"]['Delete External From Internal'] = 'A külső belső rész törlése';

$GLOBALS["lang"]['Delete NMIS Devices if not in Open-AudIT'] = 'NMIS törlése Eszközök, ha nincsenek az Open- AudIT-ban';

$GLOBALS["lang"]['Delete a {collection} entry.'] = 'Törölje a {collection} bejegyzést.';

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

$GLOBALS["lang"]['Details of who is usually contactable at this site.'] = 'Részletek, hogy ki általában kontakt ezen az oldalon.';

$GLOBALS["lang"]['Determine how often you want to run the Baseline check against the database and create a Scheduled Report'] = 'Határozza meg, hogy milyen gyakran szeretné lefuttatni a kiindulási ellenőrzést az adatbázisban, és hozzon létre egy ütemezett jelentést';

$GLOBALS["lang"]['Determine risk treatment options'] = 'Kockázatkezelési lehetőségek meghatározása';

$GLOBALS["lang"]['Develop a Risk Treatment Plan'] = 'Kockázatkezelési terv kidolgozása';

$GLOBALS["lang"]['Develop policies, procedures, and controls'] = 'Politikák, eljárások és ellenőrzések kidolgozása';

$GLOBALS["lang"]['Develop required ISMS documentation (policies, procedures, etc.)'] = 'A szükséges ISMS-dokumentáció kidolgozása (irányelvek, eljárások stb.)';

$GLOBALS["lang"]['device'] = 'Eszköz';

$GLOBALS["lang"]['Device'] = 'Eszköz';

$GLOBALS["lang"]['Device Audits'] = 'Eszközök ellenőrzése';

$GLOBALS["lang"]['Device Component Names'] = 'A komponens neve';

$GLOBALS["lang"]['Device ID'] = 'Az eszköz azonosítója';

$GLOBALS["lang"]['device_id'] = 'Az eszköz azonosítója';

$GLOBALS["lang"]['device_id_a'] = 'A-azonosító eszköz';

$GLOBALS["lang"]['Device ID A'] = 'A-azonosító eszköz';

$GLOBALS["lang"]['device_id_b'] = 'ID B eszköz';

$GLOBALS["lang"]['Device ID B'] = 'ID B eszköz';

$GLOBALS["lang"]['Device Matching Rules'] = 'Eszközegyezési szabályok';

$GLOBALS["lang"]['Device Name'] = 'Az eszköz neve';

$GLOBALS["lang"]['Device Result'] = 'Eszközeredmény';

$GLOBALS["lang"]['Device Results'] = 'Eszközök eredményei';

$GLOBALS["lang"]['Device Seed'] = 'Az eszköz magja';

$GLOBALS["lang"]['Device Seed Discoveries are a good option if you know that your network consists of a range of subnets, but you are unsure what they are. Seed the discovery with a local router and watch your network unfold before your eyes.'] = 'Az eszköz magja A felfedezés jó lehetőség, ha tudod, hogy a hálózatod alhálózatokból áll, de nem vagy biztos benne, hogy mik azok. Seed a felfedezés egy helyi router és nézni a hálózat kibontakozik a szemed előtt.';

$GLOBALS["lang"]['Device Seed IP'] = 'Mag IP eszköz';

$GLOBALS["lang"]['Device Status'] = 'Az eszköz állapota';

$GLOBALS["lang"]['Device Types'] = 'Eszköztípusok';

$GLOBALS["lang"]['Device and Software and Hardware Auditing'] = 'Eszköz, szoftver és hardver könyvvizsgálat';

$GLOBALS["lang"]['Device is in the Subnet'] = 'Az eszköz a hálóban van.';

$GLOBALS["lang"]['Devices'] = 'Eszközök';

$GLOBALS["lang"]['devices_assigned_to_location'] = 'A helyszínre kijelölt eszközök';

$GLOBALS["lang"]['Devices Assigned To Location'] = 'A helyszínre kijelölt eszközök';

$GLOBALS["lang"]['devices_assigned_to_org'] = 'Orghoz rendelt eszközök';

$GLOBALS["lang"]['Devices Assigned To Org'] = 'Orghoz rendelt eszközök';

$GLOBALS["lang"]['Devices Audited'] = 'Ellenőrzött eszközök';

$GLOBALS["lang"]['Devices Collection'] = 'Eszközök gyűjtése';

$GLOBALS["lang"]['Devices Created in '] = 'Létrehozott eszközök ';

$GLOBALS["lang"]['Devices Created in Open-AudIT'] = 'Eszközök létrehozott Open- AudIT';

$GLOBALS["lang"]['devices_default_display_columns'] = 'Eszközök alapértelmezett megjelenítési oszlopok';

$GLOBALS["lang"]['Devices Default Display Columns'] = 'Eszközök alapértelmezett megjelenítési oszlopok';

$GLOBALS["lang"]['Devices Found Last 7 Days'] = 'Az utolsó 7 napban talált eszközök';

$GLOBALS["lang"]['Devices Found Today'] = 'A ma talált eszközök';

$GLOBALS["lang"]['Devices Found Yesterday'] = 'A tegnap talált eszközök';

$GLOBALS["lang"]['Devices Missing Information'] = 'Hiányzó információk';

$GLOBALS["lang"]['Devices Not Audited'] = 'Nem auditált eszközök';

$GLOBALS["lang"]['Devices Not Seen 30 Days'] = 'Nem látott eszközök 30 nap';

$GLOBALS["lang"]['Devices Not Seen 7 Days'] = 'Nem látott eszközök 7 nap';

$GLOBALS["lang"]['Devices Not Seen 90 Days'] = '90 napig nem látott eszközök';

$GLOBALS["lang"]['Devices Older Than X'] = 'X-nél régebbi eszközök';

$GLOBALS["lang"]['Devices Retrieved via API'] = 'Az API-n keresztül visszanyert eszközök';

$GLOBALS["lang"]['Devices Selected from '] = 'Kiválasztott eszközök ';

$GLOBALS["lang"]['Devices Selected from Open-AudIT'] = 'Az Open- AudIT közül kiválasztott eszközök';

$GLOBALS["lang"]['Devices Updated in '] = 'Eszközök frissítve ';

$GLOBALS["lang"]['Devices Updated in Open-AudIT'] = 'Eszközök frissítve Open- AudIT';

$GLOBALS["lang"]['Devices are being benchmarked.'] = 'Az eszközöket teljesítményméréssel jelölik.';

$GLOBALS["lang"]['Devices are not being benchmarked.'] = 'Az eszközöket nem mérik fel.';

$GLOBALS["lang"]['Devices could be benchmarked.'] = 'Az eszközöket teljesítményméréssel is meg lehet határozni.';

$GLOBALS["lang"]['Devices from Open-AudIT'] = 'Open- AudIT eszközök';

$GLOBALS["lang"]['Devices in Running State'] = 'A futópálya menti eszközök';

$GLOBALS["lang"]['Devices in Stopped State'] = 'Készülékek leállított állapotban';

$GLOBALS["lang"]['Devices in this'] = 'Eszközök ebben';

$GLOBALS["lang"]['Devices will not be matched if their status is set to <i>deleted</i>. Any other status will allow a match to occur.'] = 'Az eszközök nem egyeznek, ha állapotuk <i>törölve</i>. Minden más állapot lehetővé teszi a mérkőzés bekövetkezését.';

$GLOBALS["lang"]['Devices with Expired Warranties'] = 'Lejárt biztosítékokkal rendelkező eszközök';

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

$GLOBALS["lang"]['Discoveries'] = 'Felderítés';

$GLOBALS["lang"]['Discoveries are at the very heart of what Open-AudIT does. How else would you know <i>Whats On Your Network?</i>'] = 'A felfedezések állnak az Open- AudIT tevékenységének középpontjában. Honnan máshonnan tudnád <i>Mi van a hálózatodon?</i>';

$GLOBALS["lang"]['Discoveries are entries that enable you to run a discovery upon a network in a single click, without entering the details of that network each and every time.'] = 'Felfedezések olyan bejegyzések, amelyek lehetővé teszik, hogy futtasson egy felfedezés egy hálózaton egyetlen kattintással, anélkül, hogy a részleteket a hálózat minden egyes alkalommal.';

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

$GLOBALS["lang"]['Discovery Scan Options are just another item collection. Enterprise users can create, read, update and delete entries as required. Professional users can read all entries, but not create new entries, update existing entries or delete entries. Community users have no GUI that allows access to this collection.'] = 'Discovery Scan A lehetőségek csak egy újabb tétel gyűjtemény. Az Enterprise felhasználók szükség szerint létrehozhatnak, olvashatnak, frissíthetnek és törölhetnek bejegyzéseket. A hivatásos felhasználók elolvashatják az összes bejegyzést, de nem hozhatnak létre új bejegyzéseket, frissíthetik a meglévő bejegyzéseket vagy törölhetik a bejegyzéseket. A közösségi felhasználóknak nincs olyan GUI-juk, amely lehetővé tenné a gyűjteményhez való hozzáférést.';

$GLOBALS["lang"]['Discovery Scan Types'] = 'A letapogatás típusai';

$GLOBALS["lang"]['Discovery Support'] = 'Felfedező támogatás';

$GLOBALS["lang"]['Discovery has stopped working'] = 'A felfedezés leállt.';

$GLOBALS["lang"]['disk'] = 'Lemez';

$GLOBALS["lang"]['Disk'] = 'Lemez';

$GLOBALS["lang"]['display_version'] = 'Verzió megjelenítése';

$GLOBALS["lang"]['Display Version'] = 'Verzió megjelenítése';

$GLOBALS["lang"]['Display in Menu'] = 'Megjelenítés menüben';

$GLOBALS["lang"]['Displays a standard web form for submission to POST /{collection}.'] = 'Megjelenít egy standard webes űrlapot a POST / {collection} címre.';

$GLOBALS["lang"]['Displays a standard web form for submission to POST /{collection}/import.'] = 'Megjeleníti a POST / {collection} / import űrlapot.';

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

$GLOBALS["lang"]['Do not forget about the Open-AudIT wiki for all your documentation.'] = 'Ne felejtsd el az Open- AudIT wiki-t az összes dokumentációdhoz.';

$GLOBALS["lang"]['Do not forget there is a mountain of documentation on the wiki'] = 'Ne felejtsd el, hogy van egy csomó dokumentáció a wiki';

$GLOBALS["lang"]['Do not scan these TCP ports.'] = 'Ne szkenneld ezeket a TCP portokat.';

$GLOBALS["lang"]['Do not scan these UDP ports.'] = 'Ne szkenneld ezeket az UDP portokat.';

$GLOBALS["lang"]['Do not show me again'] = 'Ne mutasd meg újra!';

$GLOBALS["lang"]['Do you have a perfect example of this configuration? Perhaps a device located in a lab environment or a workstation you use to clone workstation VMs from.'] = 'Van egy tökéletes példája ennek a konfigurációnak? Talán egy laboratóriumi környezetben lévő eszköz, vagy egy munkaállomás, ahonnan a VM munkaállomást klónozzák.';

$GLOBALS["lang"]['Do you want to use secure transport (LDAPS) or regular unencrypted LDAP.'] = 'Biztonságos szállítást (LDAPS) vagy normál, titkosított LDAP-t szeretne használni.';

$GLOBALS["lang"]['Do you wish to see the standard sidebar on the left.'] = 'Szeretné látni a bal oldalon a szokásos oldalvonalat?';

$GLOBALS["lang"]['documentation'] = 'Dokumentáció';

$GLOBALS["lang"]['Documentation'] = 'Dokumentáció';

$GLOBALS["lang"]['Documentation about a particular collection.'] = 'Dokumentáció egy bizonyos gyűjteményről.';

$GLOBALS["lang"]['Does Not Equal'] = 'Nem egyenlő';

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

$GLOBALS["lang"]['Download a File'] = 'Fájl letöltése';

$GLOBALS["lang"]['Download a file from URL'] = 'Fájl letöltése URL-ből';

$GLOBALS["lang"]['Download the test_windows_client.vbs script directly'] = 'Töltse le közvetlenül a teszt _ windows _ client.vbs szkriptet';

$GLOBALS["lang"]['Download your updated version from'] = 'Töltse le a frissített verziót a';

$GLOBALS["lang"]['driver'] = 'Vezető';

$GLOBALS["lang"]['Driver'] = 'Vezető';

$GLOBALS["lang"]['duplex'] = 'Duplex';

$GLOBALS["lang"]['Duplex'] = 'Duplex';

$GLOBALS["lang"]['Duplicate Devices / Missing Devices'] = 'Kettős / hiányzó eszközök';

$GLOBALS["lang"]['duration'] = 'Időtartam';

$GLOBALS["lang"]['Duration'] = 'Időtartam';

$GLOBALS["lang"]['Dutch'] = 'Holland';

$GLOBALS["lang"]['ESXi'] = 'ESXi';

$GLOBALS["lang"]['EULA'] = 'EULA';

$GLOBALS["lang"]['Each IP is scanned with the discovery configured options (see Discovery Scan Options and Discovery - Community vs Professional vs Enterprise on the wiki). In general, Nmap will test for ports 22 (ssh), 135 (wmi), 62078 (iPhone) and UDP 161 (snmp). If 22, 135 or 161 respond the credential list is retrieved and each credential tested in turn. The first working credentials are used for further queries directly from the device. Note - if a device has previously been discovered and has working credentials, those credentials are tested first. Only if those fail are the other credentials then attempted.'] = 'Minden IP szkennelt a felfedezés konfigurált opciók (lásd Discovery Scan Options és Discovery - Community vs Professional vs Enterprise a wiki). Az Nmap általában 22 (ssh), 135 (wmi), 62078 (iPhone) és az UDP 161 (snmp) portot vizsgál. Ha 22, 135 vagy 161 válaszol, a hitelezési listát visszaállítják, és minden egyes hitelesítő teszteli. Az első megbízólevelet közvetlenül az eszközből származó további lekérdezésekhez használják. Megjegyzés: ha egy eszközt korábban már felfedeztek, és működik a megbízólevél, akkor azokat először tesztelik. Csak akkor, ha azok elbuknak, a többi hitelesítő, majd megpróbálta.';

$GLOBALS["lang"]['Each time a device is discovered or an audit result is processed, all rules are retrieved from the database and run against the attributes of the specific device. Rules run against one device at a time - there is no facility to say <i>Run the rules against all devices<i> or <i>Run the rules against these devices<i>. An individual rule will test one or more attributes of the device and if they match the rule, the result will be applied. Several attributes can be tested. Several attributes can be set. Think of this as an If This, Then That system for Open-AudIT.'] = 'Minden alkalommal, amikor egy eszközt felfedeznek, vagy egy ellenőrzési eredményt feldolgoznak, minden szabályt kivesznek az adatbázisból, és az adott eszköz attribútumaival futnak. Szabályok fut szemben egy eszköz egyszerre - nincs lehetőség, hogy azt mondják <i>Futtasd le a szabályokat minden eszköz ellen<i> vagy <i>Futtasd le a szabályokat ezek ellen az eszközök ellen<i>. Az egyedi szabály az eszköz egy vagy több attribútumát teszteli, és ha megfelelnek a szabálynak, az eredményt alkalmazzák. Számos attribútum tesztelhető. Több attribútum is beállítható. Gondolj erre úgy, mint egy "Ha ez", aztán a "Nyílt Audit" rendszerre.</i></i></i></i>';

$GLOBALS["lang"]['Easily run a discovery upon a network in a single click, without entering the details of that network each and every time.'] = 'Könnyen fut egy felfedezés egy hálózaton egyetlen kattintással, anélkül, hogy a részleteket a hálózat minden egyes alkalommal.';

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

$GLOBALS["lang"]['Enable Distributed COM on this computer - Option is checked'] = 'Elosztott COM engedélyezése a számítógépen - Az opció ellenőrzése';

$GLOBALS["lang"]['enabled'] = 'Engedélyezve';

$GLOBALS["lang"]['Enabled'] = 'Engedélyezve';

$GLOBALS["lang"]['Enabling the Feature Under Windows'] = 'A funkció engedélyezése Windows alatt';

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

$GLOBALS["lang"]['Endpoint'] = 'Végpont';

$GLOBALS["lang"]['English'] = 'Angol';

$GLOBALS["lang"]['Enhances regulatory compliance'] = 'A szabályozás betartásának javítása';

$GLOBALS["lang"]['Enrichment is complete. The CVE has full metadata and is considered stable.'] = 'A gazdagság befejeződött. A CVE teljes metaadatokat tartalmaz, és stabilnak tekinthető.';

$GLOBALS["lang"]['Ensure documentation is controlled and accessible'] = 'A dokumentáció ellenőrzése és hozzáférhetősége';

$GLOBALS["lang"]['enterprise'] = 'Vállalkozás';

$GLOBALS["lang"]['Enterprise'] = 'Vállalkozás';

$GLOBALS["lang"]['Enterprise Private Network'] = 'Vállalati magán hálózat';

$GLOBALS["lang"]['Enterprise private network'] = 'Vállalati magánhálózat';

$GLOBALS["lang"]['Entitlement Type'] = 'A jogosultság típusa';

$GLOBALS["lang"]['Entra'] = 'Entra';

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

$GLOBALS["lang"]['Esperanto'] = 'Esperanto';

$GLOBALS["lang"]['Establish a project plan and timeline'] = 'Projektterv és ütemterv létrehozása';

$GLOBALS["lang"]['Establish an information security policy'] = 'Információbiztonsági politika létrehozása';

$GLOBALS["lang"]['Established'] = 'Alapítás';

$GLOBALS["lang"]['Estonia'] = 'Észtország';

$GLOBALS["lang"]['Estonian'] = 'Észtország';

$GLOBALS["lang"]['Ethernet MAC'] = 'Ethernet MAC';

$GLOBALS["lang"]['ethernet_mac'] = 'Ethernet Mac';

$GLOBALS["lang"]['Ethernet Mac'] = 'Ethernet Mac';

$GLOBALS["lang"]['Ethiopia'] = 'Etiópia';

$GLOBALS["lang"]['Evaluate the ISMS internally'] = 'Az ISMS belső értékelése';

$GLOBALS["lang"]['Every'] = 'Minden';

$GLOBALS["lang"]['Every Day'] = 'Minden nap';

$GLOBALS["lang"]['Example'] = 'Példa';

$GLOBALS["lang"]['Example Devices'] = 'Példa eszközök';

$GLOBALS["lang"]['Example Org Chart with Access'] = 'Példa Org Chart hozzáférés';

$GLOBALS["lang"]['Example text from'] = 'Példa szöveg';

$GLOBALS["lang"]['Examples'] = 'Példák';

$GLOBALS["lang"]['Exceptions'] = 'Kivételek';

$GLOBALS["lang"]['exclude'] = 'Kizárás';

$GLOBALS["lang"]['Exclude'] = 'Kizárás';

$GLOBALS["lang"]['exclude_ip'] = 'Az IP kizárása';

$GLOBALS["lang"]['Exclude IP'] = 'Az IP kizárása';

$GLOBALS["lang"]['Exclude IP Addresses'] = 'Az IP címek kizárása';

$GLOBALS["lang"]['Exclude IP Addresses (individual IP - 192.168.1.20, ranges - 192.168.1.30-40 or subnets - 192.168.1.100/30) listed from being scanned. Comma seperated, no spaces.'] = 'Az IP címek kivételével (egyedi IP - 192.168.1.20, tartományok - 192.168.1.30- 40 vagy alhálók - 192.168.1.100 / 30) a szkennelésből. Elkülönült vessző, nincs hely.';

$GLOBALS["lang"]['Exclude TCP Ports'] = 'TCP-portok kizárása';

$GLOBALS["lang"]['exclude_tcp_ports'] = 'A Tcp portok kizárása';

$GLOBALS["lang"]['Exclude Tcp Ports'] = 'A Tcp portok kizárása';

$GLOBALS["lang"]['Exclude UDP Ports'] = 'UDP-portok kizárása';

$GLOBALS["lang"]['exclude_udp_ports'] = 'Udp portok kizárása';

$GLOBALS["lang"]['Exclude Udp Ports'] = 'Udp portok kizárása';

$GLOBALS["lang"]['Exclude any ports listed from being scanned. Comma seperated, no spaces.'] = 'A szkennelt kikötők kivételével. Elkülönült vessző, nincs hely.';

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

$GLOBALS["lang"]['Exporting a Device'] = 'Egy eszköz exportálása';

$GLOBALS["lang"]['expose'] = 'Megjelenés';

$GLOBALS["lang"]['Expose'] = 'Megjelenés';

$GLOBALS["lang"]['External'] = 'Külső';

$GLOBALS["lang"]['External Field Name'] = 'Külső mező neve';

$GLOBALS["lang"]['External Field Type'] = 'Külső mező típusa';

$GLOBALS["lang"]['External Field Types'] = 'Külső mezõtípusok';

$GLOBALS["lang"]['external_ident'] = 'Külső azonosító';

$GLOBALS["lang"]['External Ident'] = 'Külső azonosító';

$GLOBALS["lang"]['external_link'] = 'Külső kapcsolat';

$GLOBALS["lang"]['External Link'] = 'Külső kapcsolat';

$GLOBALS["lang"]['extra_columns'] = 'Extra oszlopok';

$GLOBALS["lang"]['Extra Columns'] = 'Extra oszlopok';

$GLOBALS["lang"]['Extra and Time based Reporting'] = 'Kiegészítő és időalapú adatszolgáltatás';

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

$GLOBALS["lang"]['Fields attributes are'] = 'A mezők attribútumai';

$GLOBALS["lang"]['Fiji the Fiji Islands'] = 'Fidzsi-szigetek';

$GLOBALS["lang"]['File'] = 'Fájl';

$GLOBALS["lang"]['File Auditing'] = 'Fájlellenőrzés';

$GLOBALS["lang"]['File Import'] = 'Fájl importálása';

$GLOBALS["lang"]['File Input'] = 'Fájl bemenet';

$GLOBALS["lang"]['file_name'] = 'Fájl neve';

$GLOBALS["lang"]['File Name'] = 'Fájl neve';

$GLOBALS["lang"]['File Share Discovery'] = 'Fájl megosztása felfedezés';

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

$GLOBALS["lang"]['Filtered Ports'] = 'Szűrt portok';

$GLOBALS["lang"]['Finland'] = 'Finnország';

$GLOBALS["lang"]['Finnish'] = 'Finnország';

$GLOBALS["lang"]['Firewall'] = 'Tűzfal';

$GLOBALS["lang"]['Firewall Packages'] = 'Tűzfali csomagok';

$GLOBALS["lang"]['firewall_rule'] = 'Tűzfal szabály';

$GLOBALS["lang"]['Firewall Rule'] = 'Tűzfal szabály';

$GLOBALS["lang"]['firmware'] = 'Firmware';

$GLOBALS["lang"]['Firmware'] = 'Firmware';

$GLOBALS["lang"]['firmware_revision'] = 'A szoftverek felülvizsgálata';

$GLOBALS["lang"]['Firmware Revision'] = 'A szoftverek felülvizsgálata';

$GLOBALS["lang"]['First'] = 'Első';

$GLOBALS["lang"]['First Name'] = 'Keresztnév';

$GLOBALS["lang"]['first_run'] = 'Első futás';

$GLOBALS["lang"]['First Run'] = 'Első futás';

$GLOBALS["lang"]['first_seen'] = 'Első megtekintés';

$GLOBALS["lang"]['First Seen'] = 'Első megtekintés';

$GLOBALS["lang"]['First focus on what the end need is: are you trying to baseline software, users, or Netstat data? What is the important thing(s) to compare and report on?'] = 'Először is arra kell koncentrálnod, hogy mire van szükséged: a szoftverek, a felhasználók vagy a Netstat adatai alapján? Mi a fontos, hogy összehasonlítsuk és jelentsük?';

$GLOBALS["lang"]['FirstWave'] = 'FirstWave';

$GLOBALS["lang"]['Fix'] = 'Javítás';

$GLOBALS["lang"]['Fixed'] = 'Rögzített';

$GLOBALS["lang"]['Fixing the Issue'] = 'A kiadás rögzítése';

$GLOBALS["lang"]['Floor'] = 'Padló';

$GLOBALS["lang"]['Follow any of the links below and discover how to use Open-AudIT to find out <b>Whats On Your Network?</b>'] = 'Kövesse az alábbi linkeket, és fedezze fel, hogyan kell használni az Open- AudIT, hogy megtudja, <b>Mi van a hálózatodon?</b>';

$GLOBALS["lang"]['For'] = 'A';

$GLOBALS["lang"]['For <i>Type</i> make sure to select Baseline, and for Group you should select a Group of devices, if applicable to this baseline, that best represent the devices to apply the baseline against. This will prevent erroneous entries.'] = 'A <i>Típus</i> Győződjön meg róla, hogy kiválasztja a kiindulási értéket, és a csoport válassza ki az eszközök csoportját, ha erre az alapértékre vonatkozik, amely a legjobban képviseli azokat az eszközöket, amelyekkel szemben az alapértéket alkalmazzák. Ez megakadályozza a hibás bejegyzéseket.';

$GLOBALS["lang"]['For Debian/Ubuntu run, including setting dpkg to remember your override so an apt-get upgrade will not break'] = 'A Debian / Ubuntu fut, beleértve a beállítás dpkg emlékezni a felülbírálat, így egy apt-get frissítés nem törik';

$GLOBALS["lang"]['For SNMP Open-AudIT can use v1, v2 and v3 credentials. The device is queried regardless of it being a router, switch (regular network devices) or a computer (Linux and Windows often run SNMP for monitoring tools).'] = 'SNMP Open- AudIT esetén v1, v2 és v3 hitelesítő használható. Az eszköz kérdésessé válik, függetlenül attól, hogy router, kapcsoló (hagyományos hálózati eszközök) vagy számítógép (Linux és Windows gyakran fut SNMP monitoring eszközök).';

$GLOBALS["lang"]['For a primer on cron, see this Wikipedia page'] = 'Az alapozó a cron, lásd ezt a Wikipedia oldalt';

$GLOBALS["lang"]['For a seed discovery, should I only discover IPs in the private IP address space.'] = 'Egy mag felfedezés, ha csak felfedezni IP-ek a privát IP címtér.';

$GLOBALS["lang"]['For a seed discovery, should I only discover IPs on the chosen subnet.'] = 'Egy mag felfedezés, ha csak felfedezni IP a kiválasztott alhálózat.';

$GLOBALS["lang"]['For a seed discovery, should I ping the subnet before running the discovery.'] = 'Egy mag felfedezés, kellene pingelni az alhálót, mielőtt fut a felfedezés.';

$GLOBALS["lang"]['For advanced entry of a raw SQL query. As per Queries, you must include <code>WHERE @filter AND<code> in your SQL.'] = 'Egy nyers SQL lekérdezéshez. Mint egy lekérdezés, meg kell tartalmaznia <code>WHERE @filter AND<code> in your SQL.</code></code>';

$GLOBALS["lang"]['For each spawned process, the below occurs.'] = 'Minden ívási folyamatnál az alábbiak következnek be.';

$GLOBALS["lang"]['For example - you might create a baseline from a device running Redhat 9 which acts as one of your Apache servers in a cluster. You know this particular server is configured just the way you want it but you are unsure if other servers in the cluster are configured exactly the same. Baselines enable you to determine this.'] = 'Például - létrehozhat egy alapvonalat egy Redhat 9-et futtató eszközből, amely az egyik Apache szervereként működik egy klaszterben. Tudod, hogy ez a bizonyos szerver pontosan úgy van beállítva, ahogy szeretnéd, de nem vagy biztos benne, hogy a klaszter többi szervere pontosan ugyanolyan. Az alapvonalak lehetővé teszik, hogy ezt eldöntsd.';

$GLOBALS["lang"]['For example - you might create a baseline from a device running Redhat 9 which acts as one of your Apache servers in a cluster. You know this particular server is configured just the way you want it but you are unsure if other servers in the cluster are configured exactly the same. Baselines enables you to determine this.'] = 'Például - létrehozhat egy alapvonalat egy Redhat 9-et futtató eszközből, amely az egyik Apache szervereként működik egy klaszterben. Tudod, hogy ez a bizonyos szerver pontosan úgy van beállítva, ahogy szeretnéd, de nem vagy biztos benne, hogy a klaszter többi szervere pontosan ugyanolyan. Az alapvonalak lehetővé teszik, hogy ezt eldöntsd.';

$GLOBALS["lang"]['For further details information, see the wiki.'] = 'További információk a wiki oldalon találhatók.';

$GLOBALS["lang"]['For licenses that are not perpetual, when does the license expire.'] = 'A nem állandó licencek mikor járnak le.';

$GLOBALS["lang"]['For more detailed information, check the Open-AudIT Knowledge Base.'] = 'Részletesebb információkért ellenőrizze az Open- AudIT tudásbázist.';

$GLOBALS["lang"]['For more information please see the following guide which includes a video. Use'] = 'További információkért kérjük, látogasson el az alábbi útmutatóba, amely egy videót tartalmaz. Felhasználás';

$GLOBALS["lang"]['For more information, see'] = 'További információkért lásd:';

$GLOBALS["lang"]['form_factor'] = 'Formatényező';

$GLOBALS["lang"]['Form Factor'] = 'Formatényező';

$GLOBALS["lang"]['format'] = 'Formátum';

$GLOBALS["lang"]['Format'] = 'Formátum';

$GLOBALS["lang"]['Forth'] = 'Forth';

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

$GLOBALS["lang"]['From that page'] = 'Abból az oldalról.';

$GLOBALS["lang"]['full_name'] = 'Teljes név';

$GLOBALS["lang"]['Full Name'] = 'Teljes név';

$GLOBALS["lang"]['Full cloud auditing with all the details from a regular Open-AudIT audit AND details such as the machine type and size.'] = 'Teljes felhő ellenőrzés minden részletet a rendszeres Open- AudIT audit ÉS részletek, mint a gép típusa és mérete.';

$GLOBALS["lang"]['function'] = 'Funkció';

$GLOBALS["lang"]['Function'] = 'Funkció';

$GLOBALS["lang"]['GROUP BY'] = 'CSOPORT';

$GLOBALS["lang"]['Gabon'] = 'Gabon';

$GLOBALS["lang"]['Galician'] = 'Galíciai';

$GLOBALS["lang"]['Gambia the'] = 'Gambia a';

$GLOBALS["lang"]['Gap Analysis (optional)'] = 'Gap elemzés (nem kötelező)';

$GLOBALS["lang"]['gateway'] = 'Átjáró';

$GLOBALS["lang"]['Gateway'] = 'Átjáró';

$GLOBALS["lang"]['gateways'] = 'Átjárók';

$GLOBALS["lang"]['Gateways'] = 'Átjárók';

$GLOBALS["lang"]['Generated By'] = 'Generated by';

$GLOBALS["lang"]['geo'] = 'Geo';

$GLOBALS["lang"]['Geo'] = 'Geo';

$GLOBALS["lang"]['Geographical Maps'] = 'Földrajzi térképek';

$GLOBALS["lang"]['Georgia'] = 'Grúzia';

$GLOBALS["lang"]['German'] = 'Német';

$GLOBALS["lang"]['Germany'] = 'Németország';

$GLOBALS["lang"]['Get Lat/Long'] = 'Lat / Long';

$GLOBALS["lang"]['Get News'] = 'Hírek';

$GLOBALS["lang"]['Get Started'] = 'Kezdés';

$GLOBALS["lang"]['Get a Free License'] = 'Ingyenes licenc';

$GLOBALS["lang"]['Get familiar with the Open-AudIT platform and explore some of its features.'] = 'Ismerje meg az Open- AudIT platformot, és tárjon fel néhány funkciót.';

$GLOBALS["lang"]['Getting Started'] = 'Kezdődik';

$GLOBALS["lang"]['Ghana'] = 'Ghána';

$GLOBALS["lang"]['Gibraltar'] = 'Gibraltár';

$GLOBALS["lang"]['Github'] = 'Github';

$GLOBALS["lang"]['Global Discovery Options'] = 'Globális felfedezés lehetőségei';

$GLOBALS["lang"]['Global area network'] = 'Globális területi hálózat';

$GLOBALS["lang"]['Go'] = 'Menj!';

$GLOBALS["lang"]['Go back to your Open-AudIT server and create a discovery with the target Windows computers IP Address as the subnet (this will save having to discover the entire subnet again). Run the discovery, taking note of any issues. For any issues found, take appropriate actions.'] = 'Menjen vissza az Open- AudIT szerverére, és hozzon létre egy felfedezést a cél Windows számítógépek IP-címével, mint az alhálózathoz (ez menti meg, hogy újra felfedezze az egész alhálót). Futtasd le a felfedezést, és jegyezd fel a problémákat. Minden feltárt kérdésben tegyen megfelelő intézkedéseket.';

$GLOBALS["lang"]['Go the target Windows PC (or use RDP) and log on as the user used by your discovery credential set.'] = 'Menjen a cél Windows PC (vagy használja RDP) és bejelentkezik, mint a felhasználó által használt felfedezés hitelkártya.';

$GLOBALS["lang"]['Go to menu'] = 'Menü';

$GLOBALS["lang"]['Go to the <i>Applications</i> -> <i>App registrations</i> menu item on the far left. Search for Open-AudIT. Click the Open-AudIT entry in the list (assuming you named the app Open-AudIT).'] = 'Menj a <i>Alkalmazások</i> - > <i>Alkalmazási nyilvántartás</i> A bal szélső menüpont. Keressétek az Open- Auditot. Kattintson az Open- AudIT bejegyzésre a listában (feltételezve, hogy az Open- AudIT alkalmazást nevezte meg).';

$GLOBALS["lang"]['Go to the <i>Certificates and secrets</i> menu item under <i>Manage</i> in the center menu.'] = 'Menj a <i>Tanúsítványok és titkok</i> menü alatt <i>Kezelés</i> A középső menüben.';

$GLOBALS["lang"]['Go to the <i>Single sign-on</i> menu item and click SAML for <i>Select a single sign-on method</i>.'] = 'Menj a <i>Egyszeri jelzés</i> Menü elem és kattintson a SAML <i>Válasszon ki egy "sign- on" módszert</i>.';

$GLOBALS["lang"]['Google Compute Fields'] = 'Google Számítómezők';

$GLOBALS["lang"]['Google JSON Credentials'] = 'Google JSON Hitelezők';

$GLOBALS["lang"]['Google Maps API Key'] = 'Google Térkép API Kulcs';

$GLOBALS["lang"]['Great, then you can help! Send FirstWave the text shown in the GUI and what should be shown. We will include that in the language file so going forward, the translation is improved and you do not need to worry about updating it for every release!'] = 'Remek, akkor segíthetsz! Első küldés Wave a szöveg látható a GUI és mit kell mutatni. Azt is tartalmazza, hogy a nyelvi fájl így megy előre, a fordítás javult, és nem kell aggódnia frissítése minden kiadás!';

$GLOBALS["lang"]['Greater Than'] = 'Nagyobb, mint';

$GLOBALS["lang"]['Greater Than or Equals'] = 'Nagyobb mint vagy egyenlő';

$GLOBALS["lang"]['Greece'] = 'Görögország';

$GLOBALS["lang"]['Greek'] = 'Görög';

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

$GLOBALS["lang"]['Groups are used as simple lists of devices that match the required conditions. If requested using JSON they return a list of <i>devices.id</i> only. If requested using the web interface, they return the standard column attribute list. Groups can be used for Integrations, Baselines and other items.'] = 'A csoportokat az előírt feltételeknek megfelelő eszközök egyszerű listájaként használják. Ha a JSON-t kérik, a <i>devices.id</i> Csak. Ha a webes interfész igényli, akkor a standard oszlop attribútum listát adja vissza. Csoportokat lehet használni integrálások, alapvonalak és egyéb tételek.';

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

$GLOBALS["lang"]['Hardware'] = 'Hardver';

$GLOBALS["lang"]['hardware_revision'] = 'Hardverfelülvizsgálat';

$GLOBALS["lang"]['Hardware Revision'] = 'Hardverfelülvizsgálat';

$GLOBALS["lang"]['Has this policy been applied in this organization.'] = 'Ezt a politikát alkalmazták ebben a szervezetben?';

$GLOBALS["lang"]['hash'] = 'Hash';

$GLOBALS["lang"]['Hash'] = 'Hash';

$GLOBALS["lang"]['Have the agent always run the latest audit script (if you upgrade Open-AudIT and manually copy the scripts to the targets, then set cron - you will need to update these scripts for each upgrade).'] = 'Az ügynök mindig futtassa le a legújabb audit script (ha frissíti Open- AudIT és kézzel másolja a szkriptek a célokat, majd állítsa cron - meg kell frissíteni ezeket a szkripteket minden frissítéshez).';

$GLOBALS["lang"]['Have your user open a command prompt (using <i>Run as Administrator</i>). Paste the below into the prompt to download the Agent.'] = 'A felhasználó nyissa meg a parancs prompt (használata <i>Futni, mint adminisztrátor</i>). Helyezze be az alábbi szöveget az ügynök letöltésére szolgáló pontba.';

$GLOBALS["lang"]['Head'] = 'Fej';

$GLOBALS["lang"]['Heard Island and McDonald Islands'] = 'Heard-sziget és McDonald-szigetek';

$GLOBALS["lang"]['Hebrew'] = 'Héber';

$GLOBALS["lang"]['height'] = 'Magasság';

$GLOBALS["lang"]['Height'] = 'Magasság';

$GLOBALS["lang"]['Height in RU'] = 'Magasság a VT-ben';

$GLOBALS["lang"]['Help'] = 'Segítség';

$GLOBALS["lang"]['Help and Frequently Asked Questions'] = 'Súgó és gyakran ismételt kérdések';

$GLOBALS["lang"]['Helps manage and mitigate information security risks'] = 'Segíti az információbiztonsági kockázatok kezelését és enyhítését';

$GLOBALS["lang"]['Hide Audit Window'] = 'Az ellenőrző ablak elrejtése';

$GLOBALS["lang"]['high'] = 'Magas';

$GLOBALS["lang"]['High'] = 'Magas';

$GLOBALS["lang"]['High Availability'] = 'Magas elérhetőség';

$GLOBALS["lang"]['Hindi'] = 'Hindi';

$GLOBALS["lang"]['Holy See (Vatican City State)'] = 'Szentszék (Vatikáni Városállam)';

$GLOBALS["lang"]['Home'] = 'Tartalom';

$GLOBALS["lang"]['home'] = 'Tartalom';

$GLOBALS["lang"]['Home Area Network'] = 'Beltéri hálózat';

$GLOBALS["lang"]['Home area network'] = 'Beltéri hálózat';

$GLOBALS["lang"]['Honduras'] = 'Honduras';

$GLOBALS["lang"]['Hong Kong'] = 'Hongkong';

$GLOBALS["lang"]['host'] = 'Host';

$GLOBALS["lang"]['Host'] = 'Host';

$GLOBALS["lang"]['hostname'] = 'Hostname';

$GLOBALS["lang"]['Hostname'] = 'Hostname';

$GLOBALS["lang"]['hour'] = 'Óra';

$GLOBALS["lang"]['Hour'] = 'Óra';

$GLOBALS["lang"]['How Does It Work?'] = 'Hogy működik?';

$GLOBALS["lang"]['How Does it Work?'] = 'Hogy működik?';

$GLOBALS["lang"]['How Long Does it Take'] = 'Meddig tart?';

$GLOBALS["lang"]['How and Why is'] = 'Hogyan és miért';

$GLOBALS["lang"]['How and Why is Open-AudIT More Secure'] = 'Hogyan és miért biztonságos az Open- AudIT';

$GLOBALS["lang"]['How do they work?'] = 'Hogy működnek?';

$GLOBALS["lang"]['How does a Device Seed Discovery find known IPs?'] = 'Hogyan találja meg egy eszköz Seed Discovery ismert IP-k?';

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

$GLOBALS["lang"]['Hungarian'] = 'magyar';

$GLOBALS["lang"]['Hungary'] = 'Magyarország';

$GLOBALS["lang"]['hw_cpe'] = 'Hw Cpe';

$GLOBALS["lang"]['Hw Cpe'] = 'Hw Cpe';

$GLOBALS["lang"]['hyperthreading'] = 'Hyperthread';

$GLOBALS["lang"]['Hyperthreading'] = 'Hyperthread';

$GLOBALS["lang"]['I have read the EULA.'] = 'Olvastam az EULA-t.';

$GLOBALS["lang"]['I hope this post has alleviated any concerns you have about Open-AudIT and Security. If you have any questions at all, please do not hesitate to reach out to us here at FirstWave. We are always happy to discuss your concerns and needs. And maybe if your question is not something I have addressed here, I can add it here for future users'] = 'Remélem, ez a posta enyhítette az aggodalmát az Open- AudIT és a biztonság miatt. Ha bármilyen kérdése van, kérjük, ne habozzon kapcsolatba lépni velünk itt a FirstWave-ben. Mindig örömmel vitatjuk meg az aggodalmait és szükségleteit. És talán ha a kérdésed nem olyasmi, amit itt tárgyaltam, akkor hozzáadhatom a jövőbeli felhasználóknak.';

$GLOBALS["lang"]['id'] = 'Azonosító';

$GLOBALS["lang"]['ID'] = 'ID';

$GLOBALS["lang"]['IF'] = 'IF';

$GLOBALS["lang"]['IMPORTANT'] = 'FONTOS';

$GLOBALS["lang"]['INPUTS'] = 'INPUTOK';

$GLOBALS["lang"]['IOS Version'] = 'IOS verzió';

$GLOBALS["lang"]['IP'] = 'IP';

$GLOBALS["lang"]['ip'] = 'IP';

$GLOBALS["lang"]['IP Address'] = 'IP-cím';

$GLOBALS["lang"]['IP Addresses'] = 'IP címek';

$GLOBALS["lang"]['IP Last Seen'] = 'IP last Seen';

$GLOBALS["lang"]['IP Set By'] = 'IP beállítás';

$GLOBALS["lang"]['ISMS'] = 'ISMS';

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

$GLOBALS["lang"]['Identify information assets'] = 'Pénzügyi ágazatbeli szervezetek által kibocsátott CET1 tőkeinstrumentumok, ha az intézmény nem rendelkezik jelentős részesedéssel az említett vállalkozásokban';

$GLOBALS["lang"]['Identify interested parties and their requirements'] = 'Az érdekelt felek azonosítása és azok követelményei';

$GLOBALS["lang"]['Identify key stakeholders and assign roles'] = 'A legfontosabb érdekeltek azonosítása és szerepkörök kijelölése';

$GLOBALS["lang"]['Identify the device(s) that are your exemplary, or <i>gold image</i> you want to compare similar devices against.'] = 'a példamutató eszköz (ek) azonosítása, vagy <i>arany kép</i> össze akarja hasonlítani a hasonló eszközöket.';

$GLOBALS["lang"]['Identifying and evaluating security risks'] = 'A biztonsági kockázatok azonosítása és értékelése';

$GLOBALS["lang"]['If'] = 'Ha';

$GLOBALS["lang"]['If a device is individually discovered using the <i>Discover Device</i> link on the device details page, we first check if this device has been discovered previously (by Discovery) and if so, use the discovery options from that scan. If it has not been previously discovered, we revert to the configuration item discovery_default_scan_option the settings.'] = 'Ha egy eszközt egyénileg fedeznek fel a <i>Fedezze fel az eszközt</i> link a készülék részletes oldalán, először ellenőrizzük, hogy ezt az eszközt már felfedezett korábban (Discovery), és ha igen, használja a felfedezési lehetőségeket a szkenner. Ha eddig még nem fedeztük fel, akkor visszatérünk a beállítások konfigurációjára.';

$GLOBALS["lang"]['If a new Org is created, an LDAP group name is automatically derived from the name. For example, if a new Org is created and is named Test, the corresponding LDAP group will be named open-audit_orgs_test.'] = 'Ha új Org jön létre, az LDAP csoport neve automatikusan levezethető a névből. Például, ha egy új Org jön létre, és nevet Test, a megfelelő LDAP csoport neve open-audit _ orgs _ test.';

$GLOBALS["lang"]['If a port responds with filtered, should we consider it available.'] = 'Ha egy port szűréssel reagál, akkor azt elérhetőnek kell tekintenünk.';

$GLOBALS["lang"]['If a port responds with open|filtered, should we consider it available.'] = 'Ha egy kikötő nyitott 124-gyel reagál, szűrjük le, ha úgy vesszük, hogy elérhető.';

$GLOBALS["lang"]['If a remote device does not exist in the Open-AudIT selected devices, should we delete it from the external system.'] = 'Ha egy távoli eszköz nem létezik az Open- AudIT kiválasztott eszközökben, töröljük a külső rendszerből.';

$GLOBALS["lang"]['If an Open-AudIT device has been changed, should we update the external system.'] = 'Ha egy Open- AudIT eszközt megváltoztattak, frissítsük a külső rendszert.';

$GLOBALS["lang"]['If an Open-AudIT device is not on the external system, should we create it.'] = 'Ha egy Open- AudIT eszköz nincs a külső rendszeren, akkor készítsük el.';

$GLOBALS["lang"]['If an agent reports its primary IP is in this subnet, perform the actions.'] = 'Ha egy ügynök jelenti az elsődleges IP-jét ebben az alhálózatban, végezze el a műveleteket.';

$GLOBALS["lang"]['If any of these (comma seperated, no spaces) ports are detected, assume SSH is running on them and use them for auditing. No need to add this port to the Custom TCP ports - it will be added automatically.'] = 'Ha ezek közül bármelyik (vessző alakú, szóközök nélküli) portot észlelnek, feltételezve, hogy az SSH fut rajtuk, és azokat ellenőrzési célokra használja. Nem kell ezt a portot hozzáadni a Custom TCP portokhoz - automatikusan hozzá lesz adva.';

$GLOBALS["lang"]['If no operator is specified, the default is =. Properties should be fully qualified - ie, devices.hostname (not just hostname).'] = 'Ha nincs megadva operátor, az alapértelmezett =. Tulajdonságokat kell teljesen képzett - azaz, devices.hostname (nem csak hostname).';

$GLOBALS["lang"]['If no value is present, supply this value. EG: for system.nmis_group / configuraion.group we use'] = 'Ha nincs jelen érték, adja meg ezt az értéket. EG: a system.nmis _ group / configuraion esetében. csoport, amit használunk';

$GLOBALS["lang"]['If set, holds a JSON array of specific device columns this user has chosen to see, other than the configuration default.'] = 'Ha be van állítva, egy JSON tömbnyi speciális eszközoszlopot tart, amelyet ez a felhasználó választott meg, a konfigurációs alapértelmezésen kívül.';

$GLOBALS["lang"]['If the OS Family (as reported by the device) contains this item, pass.</li>'] = 'Ha az OS család (az eszköz által jelentett) tartalmazza ezt a tételt, pass.';

$GLOBALS["lang"]['If the Open-AudIT Server has Collectors reporting to it, an additional drop down is provided. You can select this to specify which Collector the task should run on. Only Discovery tasks are supported for Collectors.'] = 'Ha az Open- AudIT szerveren a gyűjtők jelentenek neki, akkor további leesés történik. Kiválaszthatja ezt, hogy meghatározza, hogy melyik Collector a feladat fut. Csak a Discovery feladatokat támogatják a gyűjtők.';

$GLOBALS["lang"]['If the agent OS family (case insensitive) contains this string, perform the actions.'] = 'Ha az ügynök OS család (esetérzéketlen) tartalmazza ezt a sztringet, végezze el a cselekvéseket.';

$GLOBALS["lang"]['If the binary is not found in either of these locations, a warning message will be displayed in the installer.'] = 'Ha a bináris nem található egyik ilyen helyen, figyelmeztető üzenet jelenik meg a telepítő.';

$GLOBALS["lang"]['If the following conditions are met:<br><ul><li>a Role has an assigned ad_group</li><li>an Org has an assigned ad_group</li><li>an LDAP Server has use_roles set to y</li><li>a user exists in LDAP (be it Active Directory or OpenLDAP) and is in the assigned ad_groups</li></ul>That user can log on to Open-AudIT without an account in Open-AudIT needing to be created. Open-AudIT will query the LDAP in question and if the user is in the required groups but not in Open-AudIT, their user attributes (name, full name, email,  roles, orgs, etc) within Open-AudIT will be automatically populated and they will be logged on.<br> <br>'] = 'Ha a következő feltételek teljesülnek:<br/><ul><li>a Role van egy kijelölt ad _ group</li><li>egy Org van egy kijelölt ad _ group</li><li>LDAP A szerver felhasználja az y</li><li>a felhasználó létezik LDAP (legyen ez Aktív Directory vagy OpenLDAP) és a kijelölt ad _ groups</li></ul>Ez a felhasználó bejelentkezhet az Open- AudIT-re anélkül, hogy az Open- AudIT fiókját létre kellene hozni. Az Open- AudIT lekérdezi a kérdéses LDAP-ot, és ha a felhasználó a szükséges csoportokban van, de nem az Open- AudIT-ben, akkor a felhasználói attribútumok (név, teljes név, e-mail, szerepek, orgok, stb.) az Open- AudIT-on belül automatikusan elnépesednek és bejelentkeznek.<br/> <br/>';

$GLOBALS["lang"]['If the local field is true (bool) or y (string) or Y (string) or 1 (integer) then set the external data to 1.'] = 'Ha a helyi mező igaz (bool) vagy y (string) vagy Y (string) vagy 1 (integer), akkor állítsa be a külső adatokat 1-re.';

$GLOBALS["lang"]['If the local field is true (bool) or y (string) or Y (string) or 1 (integer) then set the external data to y.'] = 'Ha a helyi mező igaz (bool) vagy y (string) vagy Y (string) vagy 1 (integer), akkor állítsa be a külső adatokat y-ra.';

$GLOBALS["lang"]['If the primary IP (as reported by the device) is in this subnet, pass.</li>'] = 'Ha az elsődleges IP (az eszköz jelentése szerint) ebben az alhálóban van, adja át.';

$GLOBALS["lang"]['If the user account does not actually exist within Open-AudIT and <code>use_authorisation</code> is set, the user will be created. If it does exist, details such as email, full name, etc will be populated.'] = 'Ha a felhasználói fiók ténylegesen nem létezik Open- AudIT és <code>use_authorisation</code> be van állítva, a felhasználó létre fog jönni. Ha létezik, az olyan részleteket, mint az e-mail, a teljes név stb.';

$GLOBALS["lang"]['If the user either does not have valid credentials or is not in at least one Open-AudIT Role and Group (when using <code>use_authorisation</code>), Open-AudIT will fallback to using local Open-AudIT user details and attempt authentication and authorization there. Failing that, the user will be denied access.'] = 'Ha a felhasználó vagy nem rendelkezik érvényes hitelesítő vagy nincs legalább egy Open- AudIT szerepe és csoportja (amikor használja <code>use_authorisation</code>), Open- AudIT visszaesik a helyi Open- AudIT felhasználói adatok, és megpróbálja a hitelesítést és az engedélyezést. Ha ez nem történik meg, a felhasználó nem kap hozzáférést.';

$GLOBALS["lang"]['If the user logging on to Open-AudIT does not have the access to search LDAP, you can use another account which does have this access.'] = 'Ha a felhasználó bejelentkezik az Open- AudIT-ra, nincs hozzáférése az LDAP kereséséhez, akkor használhat egy másik olyan fiókot, amelynek van ilyen hozzáférése.';

$GLOBALS["lang"]['If the user logging on to Open-AudIT does not have the access to search OpenLDAP, you can use another account which does have this access. Use the dn_account and dn_password to configure this.'] = 'Ha a felhasználó bejelentkezik az Open- AudIT-ra, nincs hozzáférése az OpenLDAP kereséséhez, akkor használhat egy másik olyan fiókot, amelynek van ilyen hozzáférése. A dn _ account és a dn _ jelszó segítségével állítsuk be ezt.';

$GLOBALS["lang"]['If the value is not set, the current timestamp will be used.'] = 'Ha az érték nincs beállítva, az aktuális időbélyegzőt használjuk.';

$GLOBALS["lang"]['If the value is set, that timestamp value will be used.'] = 'Ha az érték be van állítva, ezt az időbélyegzőt használjuk.';

$GLOBALS["lang"]['If this change does not work for you, all is not lost. We have added a configuration item (set to n by default, so it will use not this new option out of the box) called discovery_use_org_id_match. If you change it to y then the OrgID assigned to the device by the discovery will be used in the relevant match rules.'] = 'Ha ez a változás nem működik, nem minden vész el. Hozzáadtunk egy konfigurációs elemet (alapértelmezés szerint n-re állítva, így nem ezt az új opciót fogja használni a mezőből), a Discovery _ use _ org _ id _ match nevet. Ha megváltoztatod y-ra, akkor az eszközhöz a felfedezés által hozzárendelt OrgID-t a vonatkozó egyezési szabályokban fogják használni.';

$GLOBALS["lang"]['If this many minutes (or more) have passed since the server last saw the device, pass.</li>'] = 'Ha ez a sok perc (vagy több) elmúlt, mióta a szerver utoljára látta az eszközt, adja át.';

$GLOBALS["lang"]['If this many or more minutes have passed since the device contacted the server, perform the actions.'] = 'Ha ez a sok vagy több perc telt el azóta, hogy az eszköz kapcsolatba lépett a szerverrel, végezze el a műveleteket.';

$GLOBALS["lang"]['If this occurs then the issue you are seeing is related to the table control being used on the webpage. It only stores in memory the state of the check boxes for the current page being viewed. If you make selections, then page forward/back those selections will be lost. You can, however, accomplish what you want by expanding the number of devices shown on each page. In the top-left corner is a drop-down labeled “records per page”; use this to expand the number of entries displayed until you see all you want to select for Bulk Edit.'] = 'Ha ez bekövetkezik, akkor az Ön által látott probléma a weboldalon használt asztalvezérléshez kapcsolódik. Ez csak tárolja a memóriában az állapotát a check dobozok az aktuális oldal megtekintésére. Ha kiválasztja, akkor a lap előre / hátra Ezek a kiválasztások elvesznek. Ön azonban elérheti, amit akar, kiterjesztve az egyes oldalakon látható eszközök számát. A top- bal sarokban van egy csepp lefelé címkézett "rekordok oldalanként"; használja ezt, hogy bővítse a megjelenített bejegyzések számát, amíg nem lát mindent, amit szeretne kiválasztani a tömeges Edit.';

$GLOBALS["lang"]['If we detect the san management software, should we run an auto-discover before the query.'] = 'Ha észleljük a san management szoftvert, futtassunk le egy automatikus felfedezést a lekérdezés előtt.';

$GLOBALS["lang"]['If you add a Location Type, add those icons to'] = 'Ha hozzáad egy helytípus, add hozzá az ikonok';

$GLOBALS["lang"]['If you add a device type, to display the associated icon you will have to manually copy the .svg formatted file to the directory'] = 'Ha egy eszköztípust adunk hozzá, a hozzá tartozó ikon megjelenítéséhez manuálisan kell másolni a .svg formátumú fájlt a könyvtárba';

$GLOBALS["lang"]['If you are a supported FirstWave customer,a couple of items will make helping your easier. Open a support ticket with FirstWave and attach the logfile. Also include the output from the Support button on the upper right of the'] = 'Ha Ön egy támogatott FirstWave ügyfél, néhány elem megkönnyíti a segítséget. Nyiss egy support jegyet a FirstWave és csatolja a logfile. Is tartalmazza a kimenetet a Support gomb a jobb felső jobb';

$GLOBALS["lang"]['If you are a supported customer and open a support ticket with FirstWave, please attach these files.'] = 'Ha Ön egy támogatott ügyfél, és nyissa meg a támogatási jegyet FirstWave, kérjük, csatolja ezeket a fájlokat.';

$GLOBALS["lang"]['If you are having issues with Google Maps API keys or your company does not have access to create Google Maps API keys, please contact the FirstWave support team.'] = 'Ha problémája van a Google Maps API billentyűkkel, vagy cége nem férhet hozzá a Google Maps API billentyűkhöz, kérjük, lépjen kapcsolatba a FirstWave támogató csapattal.';

$GLOBALS["lang"]['If you are on Windows or your NMIS server is remote, you will need to supply the URL, username and password to access that server.'] = 'Ha a Windows-on vagy az NMIS szerver távoli, akkor az URL-t, a felhasználónevet és a jelszót kell megadnia a kiszolgáló eléréséhez.';

$GLOBALS["lang"]['If you are on a decent broadband or ethernet connection, I would recommend always using -T4 (Aggressive). Some people love -T5 (Insane) though it is too aggressive for my taste. People sometimes specify -T2 (Polite) because they think it is less likely to crash hosts or because they consider themselves to be polite in general. They often do not realize just how slow -T2 really is. Their scan may take ten times longer than a default scan. Machine crashes and bandwidth problems are rare with the default timing options -T3 (Normal) and so I normally recommend that for cautious scanners. Omitting version detection is far more effective than playing with timing values at reducing these problems.'] = 'Ha egy tisztességes szélessávú vagy Ethernet kapcsolat, azt javaslom, mindig használja a -T4 (Agresszív). Néhányan szeretik a -T5-öt, bár ez túl agresszív az én ízlésemnek. Az emberek néha megadják a -T2 (Polite), mert úgy gondolják, hogy kevésbé valószínű, hogy összeomlik gazdatestek, vagy mert úgy vélik, hogy általában udvariasak. Gyakran nem veszik észre, milyen lassú is a -T2 valójában. A letapogatásuk tízszer hosszabb lehet, mint az alapértelmezett letapogatás. A gépek összeomlása és sávszélesség problémák ritkák az alapértelmezett időzítő opciók -T3 (Normal) és így általában azt javaslom, hogy az óvatos szkennerek. A verziófelismerés elhagyása sokkal hatékonyabb, mint az időzítési értékekkel játszani e problémák csökkentése érdekében.';

$GLOBALS["lang"]['If you are running a RedHat or Centos system and you have upgraded Nmap, please reset the SUID on the binary by'] = 'Ha RedHat vagy Centos rendszert futtatsz, és frissítetted az Nmap-et, kérjük, állítsd vissza a bináris SUID-ját';

$GLOBALS["lang"]['If you are running an Open-AudIT server on Linux, this does not affect you.'] = 'Ha egy Open- AudIT szervert futtatsz Linux-on, ez nem érint téged.';

$GLOBALS["lang"]['If you are using Open-AudIT on Windows or if your NMIS server is not on your Open-AudIT Server (in the case of some Linux installs), you will need to supply access credentials and a URL to the remote NMIS - but that is all! Yes - Integrations between NMIS and Open-AudIT even work with Windows based Open-AudIT now!'] = 'Ha Open- AudIT-ot használsz a Windows-on, vagy ha az NMIS szervered nincs az Open- AudIT szervereden (néhány Linux install esetén), akkor hozzáférést és URL-t kell biztosítanod a távoli NMIS-hez - de ez minden! Igen - Az NMIS és az Open- AudIT integrálása is működik a Windows alapú Open- AudIT segítségével!';

$GLOBALS["lang"]['If you choose a Collector, it will be scheduled to execute on the next 5 minute boundary.'] = 'Ha egy Gyűjtőt választasz, a következő 5 perces határnál kell végrehajtani.';

$GLOBALS["lang"]['If you do normally set devices_assigned_to_org and the configuration item is enabled, then the OrgID will be used to further refine the match.'] = 'Ha a _ attract _ to _ org-ot általában beállítja, és a konfigurációs elem be van kapcsolva, akkor az OrgID-t használjuk a mérkőzés további finomítására.';

$GLOBALS["lang"]['If you do not normally set devices_assigned_to_org, then it will have no effect. We only check using the OrgID if it has been set in discovery (or manually in an audit script) and enabled in the configuration.'] = 'Ha általában nem állítod be a _ entred _ to _ org eszközöket, akkor nem lesz hatása. Csak akkor ellenőrizzük az OrgID-t, ha azt felfedezték (vagy manuálisan egy könyvvizsgálati szkriptben) és a konfigurációban engedélyezték.';

$GLOBALS["lang"]['If you enable the configuration item, use discovery to assign an Org and then subsequently change the OrgID of a device after discovery then you will likely have a new device created the next time the discovery runs. In this instance, you should probably just unset devices_assigned_to_org before running subsequent discoveries. This is because (in this instance) you have told Open-AudIT <i>these devices from this discovery belong to Org X<i>, but then changed the Org of the device. You have changed the stored devices information. In this case - there is no no longer a device belonging to Org X, so we create a new one.'] = 'Ha engedélyezi a konfigurációs elemet, használja a felfedezést, hogy hozzárendelje az Org-ot, majd ezt követően megváltoztassa az eszköz OrgID-jét a felfedezés után, akkor valószínűleg egy új eszközt fog létrehozni a következő alkalommal, amikor a felfedezés fut. Ebben az esetben valószínűleg csak ki kell kapcsolnia eszközöket _ entred _ to _ org, mielőtt futtat későbbi felfedezések. Ez azért van, mert (ebben az esetben) azt mondta Open- AudIT <i>Ezek a felfedezések az Org X-hez tartoznak.<i>, de aztán megváltoztatta az Org az eszköz. Megváltoztatta a tárolt eszközök adatait. Ebben az esetben - nincs többé az Org X-hez tartozó eszköz, ezért létrehozunk egy újat.</i></i>';

$GLOBALS["lang"]['If you have Anti-Virus software running, allowing the services of Opmantek (omkd), Apache (apache2.2) and MySQL (mysql) to auto start and run is essential. These services are used by Open-AudIT. You should only need to do this once. If your Anti-Virus program keeps prompting you about Open-AudIT, please post to the forums or send an email to support with the name and version of your Anti-Virus software.'] = 'Ha van anti-vírus szoftver fut, lehetővé teszi a szolgáltatások Opmantek (omkd), Apache (apache2.2) és MySQL (mysql), hogy az automatikus indítása és futtatása elengedhetetlen. Ezeket a szolgáltatásokat az Open- AudIT használja. Csak egyszer kell megtenned. Ha az Anti-Virus program folyamatosan az Open- AudIT-ra ösztönöz, kérjük, posztoljon a fórumokra, vagy küldjön e-mailt, hogy támogassa az Anti-Virus szoftver nevét és verzióját.';

$GLOBALS["lang"]['If you have working credentials, you can expect the full amount of information possible.<br><br>Obviously, the best way to use Open-AudIT is to have working credentials for the devices being discovered (be they WMI, SSH, or SNMP credentials).<br><br>We also have a page on auditing without credentials.'] = 'Ha van megbízólevele, akkor számíthat a teljes mennyiségű információ lehetséges.<br/><br/>Nyilvánvaló, hogy a legjobb módja az Open- AudIT használatának, ha a felfedezett eszközök (legyen az WMI, SSH vagy SNMP) megbízólevele.<br/><br/>Van egy oldalunk is a hitelesítő nélküli könyvvizsgálatról.';

$GLOBALS["lang"]['If you include the \"id\" field <strong>and</strong> set it with a number, that item will be updated rather than created.'] = 'Ha tartalmazza a\ "id\" mezőt <strong>és</strong> állítsa be egy számot, hogy a tételt frissíteni, ahelyett, hogy létre.';

$GLOBALS["lang"]['If you need to configure Active Directory access, you can usually use the example of <code>cn=Users,dc=your,dc=domain,dc=com</code> for your <code>base_dn</code>. There is no need to set <code>user_dn</code>.'] = 'Ha be kell állítani az Active Directory hozzáférést, akkor általában használja a példa <code>cn=Users,dc=your,dc=domain,dc=com</code> a <code>base_dn</code>. Nincs szükség beállításra. <code>user_dn</code>.';

$GLOBALS["lang"]['If you need to configure OpenLDAP access for your users and a given users access DN is normally <code>uid=username@domain,cn=People,dc=your,dc=domain,dc=com</code> then you should set <code>base_dn</code> to <code>dc=your,dc=domain,dc=com</code> and <code>user_dn</code> to <code>uid=@username@@domain,cn=People</code>. The special words <code>@username</code> and <code>@domain</code> will be replaced by the login details provided by your user on the login page.'] = 'Ha be kell állítania az OpenLDAP hozzáférést a felhasználók számára, és egy adott felhasználó hozzáférést DN általában <code>uid=username@domain,cn=People,dc=your,dc=domain,dc=com</code> Akkor állítsd be! <code>base_dn</code> - <code>dc=your,dc=domain,dc=com</code> és <code>user_dn</code> - <code>uid=@username@@domain,cn=People</code>. A különleges szavak <code>@username</code> és <code>@domain</code> helyettesíti a bejelentkezési oldalon a felhasználó által megadott bejelentkezési adatokat.';

$GLOBALS["lang"]['If you run discovery upon a subnet that the Server (or Collector) is directly installed on, you can expect the following for responding devices'] = 'Ha egy olyan alhálózaton futtatod a felfedezést, amelyre a Szerver (vagy a Gyűjtő) közvetlenül be van telepítve, a válaszeszközökre a következő adatokat várhatod el:';

$GLOBALS["lang"]['If you run discovery upon a subnet that your Server (or Collector) is not directly installed on, you can expect the following for responding devices'] = 'Ha egy olyan alhálózaton futtatod a felfedezést, amelyre a Server (vagy Collector) nincs közvetlenül telepítve, akkor a következő válaszeszközökre számíthatsz:';

$GLOBALS["lang"]['If you select a List type, an additional field will appear called Values. You should put a comma separated list of selectable values here. These will display in a dropdown box whenever the field is edited.'] = 'Ha kijelölsz egy Lista típust, egy további mező jelenik meg, amit értékeknek hívnak. Ide kellene tenned a választható értékek vesszővel külön listáját. Ezek megjelennek majd egy lepattintható dobozban, amikor a mezőt szerkesztik.';

$GLOBALS["lang"]['If you set the values for'] = 'Ha beállítja az értékeket';

$GLOBALS["lang"]['If you want to force your Agents to use a particular configuration, you can supply the ID of the agents entry to use, as below (replace $id with the number of the Agents entry). When this Agent is installed, it will check-in with the sevrer and <strong>only</strong> check that one individual Agent entrys attributes (tests and actions). This may be useful if you are an MSP - create an Agents entry for a particular customer and have their devices all use this entry, which assigns them to an Org and Location.'] = 'Ha azt szeretnénk, hogy kényszeríteni az ügynökök, hogy egy bizonyos konfiguráció, akkor adja meg az azonosító a ügynökök belépés használni, mint alább (cserélje ki $ID a számát ügynökök bejegyzés). Ha ez az ügynök be van építve, bejelentkezik a hetvenessel és <strong>Csak</strong> Ellenőrizze, hogy egy személy Agent ents attribútumok (vizsgálatok és tevékenységek). Ez hasznos lehet, ha egy MSP - hozzon létre egy ügynök bejegyzést egy adott ügyfél, és az eszközök minden használja ezt a bejegyzést, amely hozzárendeli őket egy Org és a hely.';

$GLOBALS["lang"]['If you wish to dig in and customize the Integration, click the Advanced button (and try not to be overwhelmed!).'] = 'Ha szeretne ásni és testreszabni az integráció, kattintson a Speciális gombra (és próbálja meg, hogy ne túlterhelni!).';

$GLOBALS["lang"]['If you wish to run a Discovery on an externally provided device, select the option and when the Integration is created, so s the Discovery.'] = 'Ha a Discovery-t külső eszközön szeretné lefuttatni, válassza ki az opciót, és amikor az Integráció létrejön, akkor a Discovery is.';

$GLOBALS["lang"]['If you would like to use the script outside of Discovery we have created another endpoint called <i>scripts</i>. See the documentation'] = 'Ha a Discovery-n kívül szeretné használni a forgatókönyvet, létrehoztunk egy másik végpontot, a neve: <i>Szkriptek</i>. Lásd a dokumentációt';

$GLOBALS["lang"]['If your user does not have <i>Run as Administrator</i> rights, they can still download the agent (first command above) and run it to submit an audit as below. It will be a one-off audit without the Agent being installed or scheduled.'] = 'Ha a felhasználó nem rendelkezik <i>Futni, mint adminisztrátor</i> jogok, még mindig letölti az ügynök (első parancs fent), és futtassa le, hogy nyújtson be egy audit, mint alább. Ez egy egyszeri ellenőrzés lesz anélkül, hogy az ügynököt telepítenék vagy beütemeznék.';

$GLOBALS["lang"]['ifadminstatus'] = 'Adminisztratív státus';

$GLOBALS["lang"]['Ifadminstatus'] = 'Adminisztratív státus';

$GLOBALS["lang"]['iflastchange'] = 'Iflastchange';

$GLOBALS["lang"]['Iflastchange'] = 'Iflastchange';

$GLOBALS["lang"]['Ignore Invalid SSL'] = 'Érvénytelen SSL kihagyása';

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

$GLOBALS["lang"]['Implement selected controls and procedures'] = 'A kiválasztott ellenőrzések és eljárások végrehajtása';

$GLOBALS["lang"]['Implementation'] = 'Végrehajtás';

$GLOBALS["lang"]['implementation_notes'] = 'Végrehajtási megjegyzések';

$GLOBALS["lang"]['Implementation Notes'] = 'Végrehajtási megjegyzések';

$GLOBALS["lang"]['Import'] = 'Import';

$GLOBALS["lang"]['Import Example Data'] = 'Példa adatok importálása';

$GLOBALS["lang"]['Import multiple {collection} using a CSV.'] = 'Több {collection} importálása CSV-vel.';

$GLOBALS["lang"]['improvement_opportunities'] = 'Javítási lehetőségek';

$GLOBALS["lang"]['Improvement Opportunities'] = 'Javítási lehetőségek';

$GLOBALS["lang"]['Improves business continuity and resilience'] = 'Javítja az üzleti folytonosságot és az ellenálló képességet';

$GLOBALS["lang"]['In'] = 'In';

$GLOBALS["lang"]['In a second tab or window go to your OKTA console and click <i>Create App Integration</i>.'] = 'Egy második lapon vagy ablakban kattintson az OKTA konzolra <i>App integráció létrehozása</i>.';

$GLOBALS["lang"]['In a second tab or window sign-on to your'] = 'Egy második lapon vagy ablak jelzi az Ön';

$GLOBALS["lang"]['In my personal opinion, the best way to find and audit every single item on your network is a Seed Discovery for each subnet, restricted to that subnet (using credentials). Seed Discoveries use switch, router and computer MAC Address tables to not miss a single device. If it is connected to the network and uses TCP/IP, a switch/router/computer has to know it is there - thats just how TCP/IP works. Combine that with custom TCP and/or UDP ports and you should then be able to determine the device type as well. But thats just my personal preference'] = 'Személyes véleményem szerint, a legjobb módja annak, hogy megtalálja és ellenőrizze minden egyes elem a hálózat egy Seed Discovery minden alhálózat, korlátozva, hogy az alhálózat (a hitelesítő). Seed Discoveries használja kapcsoló, router és számítógép MAC címek, hogy ne hagyja ki egyetlen eszköz. Ha csatlakozik a hálózathoz, és TCP / IP-t használ, a kapcsolónak / router / computer-nek tudnia kell, hogy ott van - ez pontosan így működik. Ezt kombinálja az egyedi TCP és / vagy UDP portokkal, és akkor meg kell tudni határozni az eszköz típusát is. De ez a személyes véleményem.';

$GLOBALS["lang"]['In order for Open-AudIT to be able to apply user permissions on items, we mandate the user of <code>WHERE @filter</code>. If you do not use this format, the queryCreateForm will throw a warning. Only users with the Admin role are permitted to create queries that lack this attribute and even then, only after the configuration item for <i>advanced_queries</i> has been enabled.'] = 'Annak érdekében, hogy az Open- AudIT képes legyen alkalmazni felhasználói engedélyek tételek, mi megbízza a felhasználó <code>WHERE @filter</code>. Ha nem használja ezt a formátumot, a queryCreateForm fog dobni egy figyelmeztetést. Csak a felhasználók az Admin szerepet lehet létrehozni lekérdezéseket, hogy hiányzik ez az attribútum, és még akkor, csak a konfigurációs elemet <i>fejlett _ lekérdezések</i> engedélyezve van.';

$GLOBALS["lang"]['In order to enable Google Maps you will need to a Google API Key follow this link and log in with your Google account,'] = 'A Google Maps engedélyezéséhez Google API kulcsra van szüksége, kövesse ezt a linket és jelentkezzen be az Ön Google fiók,';

$GLOBALS["lang"]['In order to use the Azure Rest API, you will need to create an Azure Active Directory Application that is used for authentication.'] = 'Az Azure Rest API használatához létre kell hoznia egy Azure Active Directory Alkalmazást, amit a hitelesítéshez használnak.';

$GLOBALS["lang"]['In order to use this functionality, it must be enabled in the configuration - click'] = 'Ennek a funkciónak a használatához a konfigurációban kell bekapcsolni - kattints';

$GLOBALS["lang"]['In the (comma seperated) list'] = 'A (vessző alakú) listában';

$GLOBALS["lang"]['In the case of <code>in</code> and <code>notin</code>, you should enclose the values in round brackets and separate them using a comma (just a comma, not a comma, then space).<br><br>With these operators you can filter quite comprehensively.<br><br>When you add data and filter on multiple columns, those columns are combined using <strong>AND</strong>. You cannot filter using an <strong>OR</strong> condition. With the inclusion of <code>notin</code>, you should be able to get most searches working. And for those that do really require unsupported and complex selections, you can always write an actual query.'] = 'Amennyiben <code>in</code> és <code>notin</code>, akkor kell csatolni az értékeket kerek zárójelben, és válassza szét őket egy vessző (csak vessző, nem vessző, majd tér).<br/><br/>Ezekkel a kezelőkkel meglehetősen átfogóan szűrhető.<br/><br/>Ha több oszlopon is hozzáadunk adatokat és szűrőt, ezeket az oszlopokat kombináljuk <strong>ÉS</strong>. Nem szűrhető a <strong>VAGY</strong> állapot. A <code>notin</code>A legtöbb keresést be lehet indítani. És azok számára, akik valóban igényelnek támogatatlan és összetett kiválasztásokat, mindig lehet írni egy tényleges lekérdezés.';

$GLOBALS["lang"]['In the case where we store several fields (usually in JSON format) inside a BIGTEXT MySQL field (eg: credentials.credentials - the credentials column in the credentials table), you should use the format'] = 'Abban az esetben, ha több mezőt tárolunk (általában JSON formátumban) a BIGTEXT MySQL mezőn belül (pl.: mandátumok. mandátumok - a mandátumoszlop a hitelesítő táblázatban), akkor használja a formátum';

$GLOBALS["lang"]['In the command prompt shell, navigate to the download directory (likely <code>cd Downloads</code>).'] = 'A parancs prompt shell, navigálni a letöltési könyvtár (valószínű <code>cd Downloads</code>).';

$GLOBALS["lang"]['Inactive'] = 'Inaktív';

$GLOBALS["lang"]['Incomplete'] = 'Nem teljes';

$GLOBALS["lang"]['Index'] = 'Index';

$GLOBALS["lang"]['India'] = 'India';

$GLOBALS["lang"]['Indonesia'] = 'Indonézia';

$GLOBALS["lang"]['Indonesian'] = 'Indonézia';

$GLOBALS["lang"]['Info'] = 'Információ';

$GLOBALS["lang"]['Information only.'] = 'Csak információ.';

$GLOBALS["lang"]['Informational'] = 'Tájékoztatás';

$GLOBALS["lang"]['initial_size'] = 'Kezdeti méret';

$GLOBALS["lang"]['Initial Size'] = 'Kezdeti méret';

$GLOBALS["lang"]['Initial login credentials are'] = 'Az első bejelentkezési adatok';

$GLOBALS["lang"]['Initiation'] = 'Az eljárás megindítása';

$GLOBALS["lang"]['inode'] = 'Icsomópont';

$GLOBALS["lang"]['Inode'] = 'Icsomópont';

$GLOBALS["lang"]['Input'] = 'Bemenet';

$GLOBALS["lang"]['Input Type'] = 'Bemeneti típus';

$GLOBALS["lang"]['inputs'] = 'Bemenetek';

$GLOBALS["lang"]['Inputs'] = 'Bemenetek';

$GLOBALS["lang"]['Insane'] = 'Őrült.';

$GLOBALS["lang"]['Insert a new {collection} entry.'] = 'Helyezzen be egy új {collection} bejegyzést.';

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

$GLOBALS["lang"]['Install Support'] = 'Támogatás telepítése';

$GLOBALS["lang"]['installed_by'] = 'Telepített';

$GLOBALS["lang"]['Installed By'] = 'Telepített';

$GLOBALS["lang"]['installed_on'] = 'Telepítve';

$GLOBALS["lang"]['Installed On'] = 'Telepítve';

$GLOBALS["lang"]['Installing'] = 'Telepítés';

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

$GLOBALS["lang"]['Integrations can be scheduled as desired. This is left to the user.'] = 'Integráció lehet ütemezni a kívánt. Ez a felhasználóra marad.';

$GLOBALS["lang"]['Integrations can be scheduled as per Discoveries, Queries, et al.'] = 'Integráció lehet ütemezni, mint a Discoveries, Queries, et al.';

$GLOBALS["lang"]['Interactive Dashboards'] = 'Interaktív műszerfal';

$GLOBALS["lang"]['Interactive dashboards provide instant visibility into the status of network inventory allowing IT teams to spot newly discovered devices and unusual device behaviour at a glance.'] = 'Az interaktív műszerfal azonnali láthatóságot biztosít a hálózati leltár állapotában, lehetővé téve az informatikai csapatok számára, hogy egy pillantás alatt észrevegyék az újonnan felfedezett eszközöket és az eszközök szokatlan viselkedését.';

$GLOBALS["lang"]['interface'] = 'Interfész';

$GLOBALS["lang"]['Interface'] = 'Interfész';

$GLOBALS["lang"]['interface_id'] = 'Interfészek azonosítója';

$GLOBALS["lang"]['Interface ID'] = 'Interfészek azonosítója';

$GLOBALS["lang"]['interface_type'] = 'Interfész típusa';

$GLOBALS["lang"]['Interface Type'] = 'Interfész típusa';

$GLOBALS["lang"]['Internal'] = 'Belső';

$GLOBALS["lang"]['Internal Audit'] = 'Belső ellenőrzés';

$GLOBALS["lang"]['Internal Audit & Review'] = 'Belső ellenőrzés és felülvizsgálat';

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

$GLOBALS["lang"]['Irish'] = 'Ír';

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

$GLOBALS["lang"]['It <i>Just Works</i> with NMIS'] = 'A <i>Csak működik.</i> az NMIS-szel';

$GLOBALS["lang"]['It is available at Menu -> Help ->'] = 'A menü - > Segítség - >';

$GLOBALS["lang"]['It is important to note that when Open-AudIT determines a match any properties set to <i>y</i> must match exactly (and not be blank) in order for Open-AudIT to determine that the discovered device matches a device already in the database. If none of the properties marked <i>y</i> match, then a new device entry will be created, which could result in duplicate device entries. In situations where properties are duplicated, for example a dbus_id is copied during a VM clone, then an existing device may incorrectly get overwritten/updated rather then a new entry being created resulting in missing devices.'] = 'Fontos megjegyezni, hogy amikor az Open- AudIT meghatároz egy egyezést bármely tulajdonsággal <i>y</i> pontosan illeszkednie kell (és nem üres) ahhoz, hogy az Open- AudIT megállapítsa, hogy a felfedezett eszköz már az adatbázisban található eszköz. Ha a feltüntetett tulajdonságok egyike sem szerepel <i>y</i> egyezés, akkor egy új eszköz bejegyzés jön létre, ami azt eredményezheti, hogy két eszköz bejegyzést. Azokban az esetekben, amikor a tulajdonságokat lemásolják, például a dbus _ id-et lemásolják egy VM klón alatt, akkor egy meglévő eszköz helytelenül lehet felülírni / frissíteni, majd egy új bejegyzés jön létre, ami hiányzó eszközökhöz vezet.';

$GLOBALS["lang"]['It is not uncommon to have an overlapping address space in a given Organisation. Not ideal, but not uncommon.'] = 'Nem ritka, hogy egy adott szervezetben átfedő címhely van. Nem ideális, de nem szokatlan.';

$GLOBALS["lang"]['It is very common for second tier motherboard manufacturers to not set this, to set it to all <i>0</i>s or even all <i>F</i>s.'] = 'Nagyon gyakori, hogy a második szintű alaplap gyártók ezt nem határozzák meg, hanem az összes <i>0</i>s vagy akár az összes <i>F</i>c.';

$GLOBALS["lang"]['Italian'] = 'olasz';

$GLOBALS["lang"]['Italy'] = 'Olaszország';

$GLOBALS["lang"]['Items not in Baseline'] = 'Kiindulási tételek';

$GLOBALS["lang"]['JSON'] = 'JSON';

$GLOBALS["lang"]['JSON to Import'] = 'JSON importáláshoz';

$GLOBALS["lang"]['Jamaica'] = 'Jamaika';

$GLOBALS["lang"]['January'] = 'január';

$GLOBALS["lang"]['Japan'] = 'Japán';

$GLOBALS["lang"]['Japanese'] = 'Japán';

$GLOBALS["lang"]['Jersey'] = 'Jersey';

$GLOBALS["lang"]['Jordan'] = 'Jordan';

$GLOBALS["lang"]['July'] = 'július';

$GLOBALS["lang"]['June'] = 'Június';

$GLOBALS["lang"]['Kazakhstan'] = 'Kazahsztán';

$GLOBALS["lang"]['Kenya'] = 'Kenya';

$GLOBALS["lang"]['kernel_version'] = 'Kernel verzió';

$GLOBALS["lang"]['Kernel Version'] = 'Kernel verzió';

$GLOBALS["lang"]['Key'] = 'Kulcs';

$GLOBALS["lang"]['Key Components'] = 'Kulcskomponensek';

$GLOBALS["lang"]['Key Password (optional)'] = 'Kulcsjelszó (nem kötelező)';

$GLOBALS["lang"]['keys'] = 'Kulcsok';

$GLOBALS["lang"]['Keys'] = 'Kulcsok';

$GLOBALS["lang"]['Kiribati'] = 'Kiribati';

$GLOBALS["lang"]['Korea'] = 'Korea';

$GLOBALS["lang"]['Korean'] = 'Koreai';

$GLOBALS["lang"]['Kuwait'] = 'Kuvait';

$GLOBALS["lang"]['Kyrgyz'] = 'Kirgiz';

$GLOBALS["lang"]['Kyrgyz Republic'] = 'Kirgiz Köztársaság';

$GLOBALS["lang"]['LDAP Group'] = 'LDAP csoport';

$GLOBALS["lang"]['LDAP was searched for this user and their account was found.'] = 'Az LDAP-ot megkeresték, és megtalálták a fiókjukat.';

$GLOBALS["lang"]['LDAP was searched for this user and their account was not found. Check the LDAP server logs. The user credentials have worked, but the user was not found. Also check you have specified the correct Base DN attribute when you created the LDAP Server in Open-AudIT.'] = 'Az LDAP-ot megkeresték, és nem találták meg a fiókját. Ellenőrizze az LDAP szervernaplót. A felhasználói adatok működtek, de a felhasználó nem található. Azt is ellenőrizze, hogy megadtad-e a megfelelő Bázis DN attribútumot, amikor létrehoztad az Open- AudIT LDAP szervert.';

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

$GLOBALS["lang"]['Last up is WMI. For Windows as in Linux, a user with Administrator level access is preferred (see Target Client Configuration on the wiki).'] = 'Az utolsó WMI. A Windows, mint a Linux, egy felhasználó Administrator szintű hozzáférést előnyben részesíti (lásd Célkliens konfiguráció a wiki).';

$GLOBALS["lang"]['lastModified'] = 'Módosítva';

$GLOBALS["lang"]['LastModified'] = 'Módosítva';

$GLOBALS["lang"]['latitude'] = 'Földrajzi szélesség';

$GLOBALS["lang"]['Latitude'] = 'Földrajzi szélesség';

$GLOBALS["lang"]['Latvia'] = 'Lettország';

$GLOBALS["lang"]['Latvian'] = 'Lettország';

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

$GLOBALS["lang"]['Lets set the logging to debug. Copy the file:'] = 'Állítsuk be a naplózást hibakeresésre. Másold le a fájlt:';

$GLOBALS["lang"]['level'] = 'Szint';

$GLOBALS["lang"]['Level'] = 'Szint';

$GLOBALS["lang"]['Level of privileges needed to exploit (None, Low, High).'] = 'A hasznosításhoz szükséges kiváltságok szintje (None, Low, High).';

$GLOBALS["lang"]['Liberia'] = 'Libéria';

$GLOBALS["lang"]['Libraries (ie, code that another program might include). These are typically items like Wordpress extensions, drupal extensions, node.js libraries, Android / iPhone / Windows libraries, python libraries, etc.'] = 'Könyvtárak (azaz kód, amit egy másik program tartalmazhat). Ezek általában tételek, mint a wordpress kiterjesztések, drupal kiterjesztések, node.js könyvtárak, Android / iPhone / Windows könyvtárak, piton könyvtárak, stb.';

$GLOBALS["lang"]['Libyan Arab Jamahiriya'] = 'Líbiai Arab Jamahiriya';

$GLOBALS["lang"]['License'] = 'Jogosítvány';

$GLOBALS["lang"]['License Key'] = 'Engedélykulcs';

$GLOBALS["lang"]['License Required'] = 'Szükséges licenc';

$GLOBALS["lang"]['Licensed users are free to add or modify the rules as you see fit. If you have a device with an SNMP OID that does not match a model already in the file - now you can add it easily. No more waiting for us to provide a patch and add it to the code base for you.<br><br>When you create a Rules entry, you will need to provide a name and a list of inputs and outputs. The inputs and outputs are stored as JSON arrays within the database.<br><br>Inputs have a table and attribute, an operator and a value. When executing the condition, it works thus: If $table . $attribute $operator $value then apply the outputs.<br><br>An example rule to match an SNMP OID and set the model is below.<br>'] = 'Az engedéllyel rendelkező felhasználók szabadon kiegészíthetik vagy módosíthatják a szabályokat, ahogy Ön jónak látja. Ha van egy SNMP OID-val ellátott eszközünk, amely nem egyezik meg egy már a fájlban lévő modellel - most már könnyen hozzá lehet adni. Nincs több várakozás, hogy biztosítsunk egy foltot, és hozzáadjuk a kódhoz.<br/><br/>Amikor létrehoz egy Szabályok bejegyzést, meg kell adnia egy nevet és egy listát a bemenetek és kimenetek. A bemenetek és kimenetek tárolják JSON tömbök az adatbázisban.<br/><br/>A bemenetek táblázata és attribútuma, egy üzemeltető és egy érték. A feltétel teljesítésekor így működik: Ha $table. $attribútum $operator $érték akkor alkalmazza a kimeneteket.<br/><br/>Egy példa szabály, hogy megfeleljen az SNMP OID és állítsa be a modellt alább.<br/>';

$GLOBALS["lang"]['Licenses'] = 'Engedélyek';

$GLOBALS["lang"]['Liechtenstein'] = 'Liechtenstein';

$GLOBALS["lang"]['Like'] = 'Mint';

$GLOBALS["lang"]['Like most other attributes, Additional Fields can be bulk edited. Use the Bulk Edit function as you normally would and you will see the Additional Fields are available for input.'] = 'Mint a legtöbb más tulajdonság, További mezők lehet ömlesztett szerkesztett. Használja a tömeges Edit funkció, ahogy általában, és látni fogja, hogy a további mezők rendelkezésre állnak a bemeneti.';

$GLOBALS["lang"]['Like versus Equals'] = 'Mint az Egyenlők';

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

$GLOBALS["lang"]['Line charts must return date or my_date, description or my_description and count.'] = 'A diagramoknak vissza kell térniük a dátum vagy a dátum, leírás vagy a leírás és a számlálás.';

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

$GLOBALS["lang"]['Linux Packages'] = 'Linux csomagok';

$GLOBALS["lang"]['List'] = 'Lista';

$GLOBALS["lang"]['List All NMAP Ports, Protocols and Programs for Each Device'] = 'Minden NMAP portok, protokollok és programok listája minden eszközhöz';

$GLOBALS["lang"]['List Devices'] = 'Lista eszközök';

$GLOBALS["lang"]['List Discoveries'] = 'Felderítések listája';

$GLOBALS["lang"]['list_table_format'] = 'A táblázat formátuma';

$GLOBALS["lang"]['List Table Format'] = 'A táblázat formátuma';

$GLOBALS["lang"]['List Tables'] = 'Lista táblázatok';

$GLOBALS["lang"]['Lithuania'] = 'Litvánia';

$GLOBALS["lang"]['Lithuanian'] = 'Litvánia';

$GLOBALS["lang"]['Load Balancing'] = 'Kiegyenlítés betöltése';

$GLOBALS["lang"]['Local'] = 'Helyi';

$GLOBALS["lang"]['Local Area Network'] = 'Helyi területi hálózat';

$GLOBALS["lang"]['local_port'] = 'Helyi kikötő';

$GLOBALS["lang"]['Local Port'] = 'Helyi kikötő';

$GLOBALS["lang"]['Local area network'] = 'Helyi hálózat';

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

$GLOBALS["lang"]['Location Name'] = 'Helyszín neve';

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

$GLOBALS["lang"]['Locations'] = 'Helyek';

$GLOBALS["lang"]['Locations in this'] = 'Helyek ebben';

$GLOBALS["lang"]['log'] = 'Log';

$GLOBALS["lang"]['Log'] = 'Log';

$GLOBALS["lang"]['log_format'] = 'Log Format';

$GLOBALS["lang"]['Log Format'] = 'Log Format';

$GLOBALS["lang"]['Log Line'] = 'Naplóvonal';

$GLOBALS["lang"]['log_path'] = 'Log Path';

$GLOBALS["lang"]['Log Path'] = 'Log Path';

$GLOBALS["lang"]['log_rotation'] = 'Naplóbejegyzés';

$GLOBALS["lang"]['Log Rotation'] = 'Naplóbejegyzés';

$GLOBALS["lang"]['log_status'] = 'Log status';

$GLOBALS["lang"]['Log Status'] = 'Log status';

$GLOBALS["lang"]['Logging in'] = 'Bejelentkezés';

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

$GLOBALS["lang"]['Lowercase Hostname'] = 'Lowercase Hostname';

$GLOBALS["lang"]['Luxembourg'] = 'Luxemburg';

$GLOBALS["lang"]['MAC Address'] = 'MAC-cím';

$GLOBALS["lang"]['MAC Manufacturer'] = 'MAC Gyártó';

$GLOBALS["lang"]['mac'] = 'Mac';

$GLOBALS["lang"]['Mac'] = 'Mac';

$GLOBALS["lang"]['Mac Address'] = 'Mac Cím';

$GLOBALS["lang"]['MacOS'] = 'MacOS';

$GLOBALS["lang"]['MacOS Packages'] = 'MacOS csomagok';

$GLOBALS["lang"]['Macao'] = 'Makaó';

$GLOBALS["lang"]['Macedonia'] = 'Macedónia';

$GLOBALS["lang"]['Madagascar'] = 'Madagaszkár';

$GLOBALS["lang"]['Maintain records of risk assessments and treatments'] = 'A kockázatértékelések és -kezelések nyilvántartása';

$GLOBALS["lang"]['maintenance_expires'] = 'Karbantartási határidők';

$GLOBALS["lang"]['Maintenance Expires'] = 'Karbantartási határidők';

$GLOBALS["lang"]['Make My Default Dashboard'] = 'Make My Alapértelmezett műszerfal';

$GLOBALS["lang"]['Make this install a Collector'] = 'Ezt telepítse egy Gyűjtő';

$GLOBALS["lang"]['Malawi'] = 'Malawi';

$GLOBALS["lang"]['Malay'] = 'Malay';

$GLOBALS["lang"]['Malaysia'] = 'Malajzia';

$GLOBALS["lang"]['Maldives'] = 'Maldív-szigetek';

$GLOBALS["lang"]['Mali'] = 'Mali';

$GLOBALS["lang"]['Malta'] = 'Málta';

$GLOBALS["lang"]['Manage'] = 'Kezelés';

$GLOBALS["lang"]['Manage Licenses'] = 'Kezelési engedélyek';

$GLOBALS["lang"]['Manage in NMIS'] = 'Az NMIS kezelése';

$GLOBALS["lang"]['Manage incidents and nonconformities'] = 'Az események kezelése és a meg nem felelés';

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

$GLOBALS["lang"]['Match Order'] = 'Match Order';

$GLOBALS["lang"]['Match Process'] = 'Párzási folyamat';

$GLOBALS["lang"]['match_string'] = 'Match String';

$GLOBALS["lang"]['Match String'] = 'Match String';

$GLOBALS["lang"]['Matching Attribute'] = 'Egyező attribútum';

$GLOBALS["lang"]['Matching Devices - Including OrgID'] = 'Hozzáillő eszközök - beleértve az OrgID-t';

$GLOBALS["lang"]['Matching Linux Devices'] = 'Linux eszközök megfeleltetése';

$GLOBALS["lang"]['Matching is conducted in the following order'] = 'A megfeleltetés a következő sorrendben történik:';

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

$GLOBALS["lang"]['Metropolitan area network'] = 'Nagyvárosi területi hálózat';

$GLOBALS["lang"]['Mexico'] = 'Mexikó';

$GLOBALS["lang"]['Micronesia'] = 'Mikronézia';

$GLOBALS["lang"]['Microsoft Azure Fields'] = 'Microsoft Azure Fields';

$GLOBALS["lang"]['microtime'] = 'Mikroidő';

$GLOBALS["lang"]['Microtime'] = 'Mikroidő';

$GLOBALS["lang"]['minute'] = 'Egy perc.';

$GLOBALS["lang"]['Minute'] = 'Egy perc.';

$GLOBALS["lang"]['Minutes'] = 'Jegyzőkönyv';

$GLOBALS["lang"]['Minutes Since last Audit are Greater than'] = 'Jegyzőkönyv Mivel a legutóbbi ellenőrzés nagyobb, mint';

$GLOBALS["lang"]['model'] = 'Minta';

$GLOBALS["lang"]['Model'] = 'Minta';

$GLOBALS["lang"]['model_family'] = 'Minta család';

$GLOBALS["lang"]['Model Family'] = 'Minta család';

$GLOBALS["lang"]['Modified'] = 'Módosított';

$GLOBALS["lang"]['Modifying an Existing Script'] = 'Meglévő szkript módosítása';

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

$GLOBALS["lang"]['Monitor and measure ISMS performance'] = 'Az ISMS teljesítményének ellenőrzése és mérése';

$GLOBALS["lang"]['Montenegro'] = 'Montenegró';

$GLOBALS["lang"]['month'] = 'Hónap';

$GLOBALS["lang"]['Month'] = 'Hónap';

$GLOBALS["lang"]['Montserrat'] = 'Montserrat';

$GLOBALS["lang"]['More Information'] = 'További információk';

$GLOBALS["lang"]['More Secure'] = 'Biztonságosabb';

$GLOBALS["lang"]['More elaborate SQL can used to group attributes within a range. Below shows the SQL for devices not seen in a pie chart grouped by last seen date ranges.'] = 'A részletesebb SQL lehet használni a csoport attribútumok tartományban. Az alábbiakban látható az SQL az eszközök nem látható a pite chart csoportosított utolsó látható dátum tartományok.';

$GLOBALS["lang"]['More information about debugging this can be found on a helpful Stack Overflow thread'] = 'További információk a hibakeresés ez megtalálható egy hasznos Stack Overflow szál';

$GLOBALS["lang"]['Morocco'] = 'Marokkó';

$GLOBALS["lang"]['Most likely the Windows firewall (or a third party firewall) is denying the connection attempt.<br><br>Please log on to the target Windows machine and check the firewall settings.'] = 'Valószínűleg a Windows tűzfal (vagy egy harmadik fél tűzfal) tagadja a kapcsolat kísérlet.<br/><br/>Kérjük, jelentkezzen be a cél Windows gépre, és ellenőrizze a tűzfal beállításokat.';

$GLOBALS["lang"]['Most of Open-AudIT is Licensed with GNU AGPL.'] = 'Az Open- AudIT nagy része GNU AGPL-vel van engedélyezve.';

$GLOBALS["lang"]['motherboard'] = 'Alaplap';

$GLOBALS["lang"]['Motherboard'] = 'Alaplap';

$GLOBALS["lang"]['mount_point'] = 'Mount Point';

$GLOBALS["lang"]['Mount Point'] = 'Mount Point';

$GLOBALS["lang"]['mount_type'] = 'Tételtípus';

$GLOBALS["lang"]['Mount Type'] = 'Tételtípus';

$GLOBALS["lang"]['Mozambique'] = 'Mozambik';

$GLOBALS["lang"]['Must Respond To Ping. If set, Nmap will fist attempt to send and listen for an ICMP response. If the device does not respond, no further scanning will occur.<br>Previously a device did not have to respond to a ping for Open-AudIT to continue scanning.'] = 'Válaszolnom kell Ping-nek. Ha be van állítva, Nmap megpróbálja elküldeni és meghallgatni az ICMP válaszát. Ha a készülék nem reagál, további letapogatás nem történik.<br/>Korábban egy eszköznek nem kellett reagálnia a Ping Open- AudIT folyamatos szkenneléséhez.';

$GLOBALS["lang"]['Must Respond to Ping'] = 'Válaszolnia kell a Ping';

$GLOBALS["lang"]['My AntiVirus is prompting me to deny/allow things'] = 'Az antivírusom arra ösztönöz, hogy tagadjak / engedjek dolgokat.';

$GLOBALS["lang"]['My time is off in Open-AudIT'] = 'Az én időm szabadnapos Open- AudIT';

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

$GLOBALS["lang"]['NOTE'] = 'MEGJEGYZÉS';

$GLOBALS["lang"]['NOTE #2'] = 'Megjegyzés # 2';

$GLOBALS["lang"]['NOTE - For more info on DateTime formats, see'] = 'MEGJEGYZÉS - A DateTime formátumokra vonatkozó további információkért lásd:';

$GLOBALS["lang"]['NOTE - If you request a downloaded CSV, XML or JSON format (either a single credential, or the complete collection) the actual credential details will be sent. Not the encrypted string, the actual username, password, community string, etc. Any sensitive details are not displayed in the web GUI, but are made available via other formats. To prevent this export a configuration item is available called decrypt_credentials.'] = 'MEGJEGYZÉS - Ha letöltött CSV, XML vagy JSON formátumot (vagy egyetlen kreditet, vagy a teljes gyűjteményt) kér, a tényleges hitelesítő adatokat elküldjük. Nem a titkosított sztring, a valódi felhasználónév, jelszó, közösségi sztring, stb. Az érzékeny részletek nem jelennek meg a web GUI-ban, hanem más formátumokon keresztül állnak rendelkezésre. Az export megelőzése érdekében a konfigurációs elem a dekódolás _ mandátumnak nevezett.';

$GLOBALS["lang"]['NOTE - The curly brackets in the data filed should be used as-is (not replaced as per other examples above).'] = 'MEGJEGYZÉS - A megadott adatok göndör zárójeleit kell használni (nem helyettesítendő a fenti példákkal).';

$GLOBALS["lang"]['NOTE - You can prevent plain text credentials being displayed below by setting the configuration item for <code>decrypt_credentials</code> to <code>n</code>.'] = 'MEGJEGYZÉS - Megakadályozhatja, hogy az alábbi szöveges adatok megjelenjenek a konfigurációs elem beállításával <code>decrypt_credentials</code> - <code>n</code>.';

$GLOBALS["lang"]['name'] = 'Név';

$GLOBALS["lang"]['Name'] = 'Név';

$GLOBALS["lang"]['Name: The name you are giving to this field. Ideally it should be unique.'] = 'Név: A név, amit ennek a mezőnek adsz. Ideális esetben egyedinek kellene lennie.';

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

$GLOBALS["lang"]['Netstat Ports'] = 'Netstat Ports';

$GLOBALS["lang"]['Netstat Ports use a combination of port number, protocol and program. If all are present the policy passes.'] = 'A Netstat Ports portszám, protokoll és program kombinációját használja. Ha mindenki jelen van, a politika érvényesül.';

$GLOBALS["lang"]['Network'] = 'Hálózat';

$GLOBALS["lang"]['network_address'] = 'Hálózati cím';

$GLOBALS["lang"]['Network Address'] = 'Hálózati cím';

$GLOBALS["lang"]['Network Discovery'] = 'Hálózati felfedezés';

$GLOBALS["lang"]['network_domain'] = 'Hálózati tartomány';

$GLOBALS["lang"]['Network Domain'] = 'Hálózati tartomány';

$GLOBALS["lang"]['Network Types'] = 'Hálózattípusok';

$GLOBALS["lang"]['Network type is set to Local Area Network by default, but can be changed by the user as they see fit. The types supported are below (with thanks to Wikipedia).<br><br>A network can be characterized by its physical capacity or its organizational purpose. Use of the network, including user authorization and access rights, differ accordingly.'] = 'A hálózati típus alapértelmezés szerint a helyi hálózatba van beállítva, de a felhasználó úgy módosíthatja, ahogy jónak látja. A támogatott típusok alább vannak (köszönhetően a Wikipedia).<br/><br/>Egy hálózatot fizikai kapacitása vagy szervezeti célja jellemez. A hálózat használata, beleértve a felhasználói engedélyt és a hozzáférési jogokat, ennek megfelelően eltérő.';

$GLOBALS["lang"]['networks'] = 'Hálózatok';

$GLOBALS["lang"]['Networks'] = 'Hálózatok';

$GLOBALS["lang"]['Networks Generated By'] = 'Az általa létrehozott hálózatok';

$GLOBALS["lang"]['Networks are updated with every discovery. Items such as IPs Available and IPs Used, along with Gateways, DHCP and DNS Servers are added as found.'] = 'A hálózatokat minden felfedezéssel frissítik. Az olyan elemek, mint az elérhető IP-k és a használt IP-k, a Gateways-szel, a DHCP-vel és a DNS-szerverekkel együtt kerülnek hozzáadásra, mint az megtalálható.';

$GLOBALS["lang"]['Networks respond differently depending on how they are configured. Some routers and/or firewalls can respond <i>on behalf</i> of IPs on the other side of their interfaces to the Open-AudIT Server. It is quite common to see Nmap report a probe for SNMP (UDP port 161) to respond as open|filtered for devices that do and do not exist. This is misleading as there is no device at that IP, yet it ends up with a device entry in the database. 99.9% of the time, it is not Open-AudIT, nor even Nmap, but the network causing this issue. Now that we have the options to treat open|filtered ports as either open or closed, we can eliminate a lot of this confusion. Enterprise users even have the option to change this on a per discovery basis (more than just using the Medium (Classic) item, as above).'] = 'A hálózatok eltérő módon reagálnak, attól függően, hogyan konfigurálják őket. Egyes routerek és / vagy tűzfalak válaszolhatnak <i>az elnök</i> IP-ek az Open- AudIT szerverhez való kapcsolódásuk másik oldalán. Elég gyakori, hogy Nmap jelentést egy szonda az SNMP (UDP port 161), hogy reagál, mint a nyitott XIV; szűrt eszközök, amelyek nem léteznek. Ez félrevezető, mivel az IP-nél nincs eszköz, mégis egy eszközbejegyzés kerül az adatbázisba. Az idő 99,9% -a nem Open- AudIT, és nem is Nmap, hanem a hálózat okozza ezt a problémát. Most, hogy már megvan a lehetőség, hogy a nyitott 124; szűrt kikötők akár nyitott vagy zárt, meg tudjuk szüntetni a sok ezt a zűrzavart. Az Enterprise felhasználóknak még lehetőségük is van arra, hogy ezt egy felfedezés alapján változtassák meg (több, mint a Medium (Classic) elemet használva, mint fent).';

$GLOBALS["lang"]['Networks using a CIDR Mask of'] = 'CIDR maszkot használó hálózatok';

$GLOBALS["lang"]['New Building Name'] = 'Új épület neve';

$GLOBALS["lang"]['New Caledonia'] = 'Új-Kaledónia';

$GLOBALS["lang"]['New Floor Name'] = 'Új padlónév';

$GLOBALS["lang"]['New Room Name'] = 'Új szoba neve';

$GLOBALS["lang"]['New Row Name'] = 'Új sor neve';

$GLOBALS["lang"]['New Zealand'] = 'Új-Zéland';

$GLOBALS["lang"]['News'] = 'Hírek';

$GLOBALS["lang"]['News checks-in each time you login for updated queries & packages, configuration recommendations, release announcements, blog posts and more.'] = 'Hírek ellenőrök minden alkalommal, amikor bejelentkezik a frissített lekérdezések és csomagok, konfigurációs ajánlások, kiadás bejelentések, blog hozzászólások és így tovább.';

$GLOBALS["lang"]['News is our way of keeping you up-to-date with the latest fixes, announcements, query updates, software versions and more.<br><br>You do not need to keep on top of the wiki or check for new releases, we can send these to you!'] = 'A híreink a legújabb javítások, bejelentések, lekérdezések, szoftververziók stb. frissítésére szolgálnak.<br/><br/>Nem kell, hogy a tetején a wiki, vagy ellenőrizze az új kiadás, tudjuk küldeni ezeket!';

$GLOBALS["lang"]['next_hop'] = 'Következő Ugrás';

$GLOBALS["lang"]['Next Hop'] = 'Következő Ugrás';

$GLOBALS["lang"]['next_run'] = 'Következő futás';

$GLOBALS["lang"]['Next Run'] = 'Következő futás';

$GLOBALS["lang"]['Next click <i>Create your own application</i>.'] = 'Következő kattintás <i>Saját alkalmazás létrehozása</i>.';

$GLOBALS["lang"]['Next, click OK, then right click the Apache 2.4 service and click Restart. Done!'] = 'Ezután kattintson az OK gombra, majd kattintson a jobb egérgombbal az Apache 2.4 szolgáltatás és kattintson a Restart gombra. Kész!';

$GLOBALS["lang"]['Next, right click the Apache2.4 service and select Properties, then click the Log On tab.'] = 'Ezután kattintson az Apache2.4 szolgáltatásra, és válassza ki a Tulajdonságokat, majd kattintson a Log On tab gombra.';

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

$GLOBALS["lang"]['Nmap cannot determine whether the port is open because packet filtering prevents its probes from reaching the port. The filtering could be from a dedicated firewall device, router rules, or host-based firewall software. These ports frustrate attackers because they provide so little information. Sometimes they respond with ICMP error messages such as type 3 code 13 (destination unreachable: communication administratively prohibited), but filters that simply drop probes without responding are far more common. This forces Nmap to retry several times just in case the probe was dropped due to network congestion rather than filtering. This slows down the scan dramatically.'] = 'Az Nmap nem tudja meghatározni, hogy a port nyitva van-e, mert a csomagszűrés megakadályozza, hogy a szondái elérjék a kikötőt. A szűrés lehet egy külön tűzfal eszköz, router szabályok, vagy host- alapú tűzfal szoftver. Ezek a kikötők frusztrálják a támadókat, mert olyan kevés információt nyújtanak. Néha reagálnak ICMP hibaüzenetek, mint például a típus 3 kód 13 (cél elérhetetlen: kommunikáció adminisztratív tiltott), de szűrők, amelyek egyszerűen csepp szondák válasz nélkül sokkal gyakoribb. Ez arra kényszeríti az Nmap-ot, hogy többször is próbálkozzon, arra az esetre, ha a szondát a hálózati torlódások miatt ejtenék, ahelyett, hogy szűrnék. Ez drámaian lelassítja a letapogatást.';

$GLOBALS["lang"]['Nmap places ports in this state when it is unable to determine whether a port is open or filtered. This occurs for scan types in which open ports give no response. The lack of response could also mean that a packet filter dropped the probe or any response it elicited. So Nmap does not know for sure whether the port is open or being filtered. The UDP, IP protocol, FIN, NULL, and Xmas scans classify ports this way.'] = 'Az Nmap akkor helyezi el a kikötőt ebben az állapotban, amikor nem tudja megállapítani, hogy egy kikötő nyitott vagy szűrt-e. Ez akkor fordul elő, amikor a nyitott portok nem adnak választ. A válasz hiánya azt is jelentheti, hogy egy csomagszűrő leejtette a szondát, vagy bármilyen általa kiváltott választ. Tehát Nmap nem tudja biztosan, hogy a port nyitva van vagy szűrik. Az UDP, az IP protokoll, a FIN, az NULL és a Xmas így osztályozza a portokat.';

$GLOBALS["lang"]['Nmap timing details are found on the bottom of this linked page'] = 'Nmap időzítő részletek találhatók az alján a kapcsolódó oldalon';

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

$GLOBALS["lang"]['No devices are in the database.'] = 'Nincsenek eszközök az adatbázisban.';

$GLOBALS["lang"]['Node'] = 'csomópont';

$GLOBALS["lang"]['None'] = 'Nincs';

$GLOBALS["lang"]['Norfolk Island'] = 'Norfolk-sziget';

$GLOBALS["lang"]['Normal'] = 'Normál';

$GLOBALS["lang"]['Northern Mariana Islands'] = 'Észak-Mariana-szigetek';

$GLOBALS["lang"]['Norway'] = 'Norvégia';

$GLOBALS["lang"]['Norwegian'] = 'Norvég';

$GLOBALS["lang"]['Not Applicable'] = 'Nem alkalmazható';

$GLOBALS["lang"]['Not Checked'] = 'Nem ellenőrizve';

$GLOBALS["lang"]['Not Equals'] = 'Nem egyenletek';

$GLOBALS["lang"]['Not In'] = 'Nincs';

$GLOBALS["lang"]['Not Like'] = 'Nem úgy.';

$GLOBALS["lang"]['Not Set'] = 'Nem beállított';

$GLOBALS["lang"]['Not every computer will be able to successfully complete a benchmark. We have seen in some fail in testing for reasons beyond our control. The logs should help point you in the right direction for these items.'] = 'Nem minden számítógép lesz képes sikeresen befejezni egy referenciaértéket. Láttuk, hogy néhány hiba a tesztelés olyan okok miatt, amelyeket nem tudunk irányítani. A naplók segítenek a helyes irányba ezeket a tételeket.';

$GLOBALS["lang"]['Not in the (comma seperated) list'] = 'Nem szerepel a (vessző alakú) listában';

$GLOBALS["lang"]['Not normally used. If set, this requires the device to have an open port (as per Scan Options) to be considered responding. A MAC address, arp response or ping response is not considered sufficient to be considered responding. Useful if a router or firewall between the Open-AudIT server and target IP is responding to port scans on the IPs behalf.'] = 'Általában nem használják. Ha be van jelölve, akkor az eszköz nyitott porttal rendelkezik (a scan opciók szerint), amelyet válasznak kell tekinteni. A MAC-cím, az arp-válasz vagy a ping-válasz nem tekinthető elegendőnek ahhoz, hogy reagálónak lehessen tekinteni. Hasznos, ha az Open- AudIT szerver és a cél IP közötti útválasztó vagy tűzfal válaszol az IP-k nevében végzett portszkennerekre.';

$GLOBALS["lang"]['Note'] = 'Megjegyzés';

$GLOBALS["lang"]['Note - Selecting a parent will automatically provide access to its children (although it wont be shown here).'] = 'Megjegyzés - A szülő kiválasztása automatikusan hozzáférést biztosít gyermekeihez (bár itt nem jelenik meg).';

$GLOBALS["lang"]['Note that the 100 device Enterprise license does not include support.'] = 'Ne feledje, hogy a 100 készülék Enterprise licenc nem tartalmazza a támogatást.';

$GLOBALS["lang"]['Note, you may need to make the script executable with'] = 'Megjegyzés, lehet, hogy meg kell, hogy a szkript végrehajtása';

$GLOBALS["lang"]['Notes'] = 'Megjegyzések';

$GLOBALS["lang"]['notes'] = 'Megjegyzések';

$GLOBALS["lang"]['Notice'] = 'Értesítés';

$GLOBALS["lang"]['notin'] = 'Notin';

$GLOBALS["lang"]['Notin'] = 'Notin';

$GLOBALS["lang"]['November'] = 'November';

$GLOBALS["lang"]['Now for the Subscription ID, click All Services, Subscriptions and copy it.'] = 'Most az előfizetés azonosítójához kattintson az All Services, Subscriptions és másolja le.';

$GLOBALS["lang"]['Now we need to provide the Azure Active Directory application access to your subscription.<br><br>Click on Resource Groups and then the resource group you would like your Azure Active Directory Application to have access to.<br><br>Click Add. The role should be Contributor and then search for the app (Open-AudIT). Then click Save.<br><br>Now the application has access to the subscription, so we can make API calls. The API calls will be requested on behalf of the application, not your user.'] = 'Most meg kell, hogy az Azure Active Directory alkalmazás hozzáférést az előfizetést.<br/><br/>Kattintson az Erőforrás Csoportok, majd az erőforrás csoport szeretné, hogy az Azure Active Directory Application, hogy hozzáférjen.<br/><br/>Kattintson a Hozzáadás gombra. A feladat a hozzájáruló, majd keresni az alkalmazás (Open- AudIT). Akkor kattintson a Mentés gombra.<br/><br/>Most az alkalmazás hozzáférhet az előfizetéshez, így API hívásokat intézhetünk. Az API hívásokat az alkalmazás nevében kérik, nem a felhasználójával.';

$GLOBALS["lang"]['nvd_json'] = 'Nvd Json';

$GLOBALS["lang"]['Nvd Json'] = 'Nvd Json';

$GLOBALS["lang"]['ORDER BY'] = 'Rendelés';

$GLOBALS["lang"]['OS'] = 'OS';

$GLOBALS["lang"]['OS Families'] = 'OS Családok';

$GLOBALS["lang"]['OS Family'] = 'OS Család';

$GLOBALS["lang"]['OS Group'] = 'OS csoport';

$GLOBALS["lang"]['OUTPUTS'] = 'KISZERELÉSEK';

$GLOBALS["lang"]['oae_manage'] = 'Oae Kezelés';

$GLOBALS["lang"]['Oae Manage'] = 'Oae Kezelés';

$GLOBALS["lang"]['object_ident'] = 'Objektum azonosító';

$GLOBALS["lang"]['Object Ident'] = 'Objektum azonosító';

$GLOBALS["lang"]['Obtain top management support'] = 'A felső vezetés támogatása';

$GLOBALS["lang"]['October'] = 'Október';

$GLOBALS["lang"]['Offset'] = 'Ellentmondás';

$GLOBALS["lang"]['Okta'] = 'Okta';

$GLOBALS["lang"]['Oman'] = 'Omán';

$GLOBALS["lang"]['omk_uuid'] = 'Omk Uuid';

$GLOBALS["lang"]['Omk Uuid'] = 'Omk Uuid';

$GLOBALS["lang"]['On'] = 'On';

$GLOBALS["lang"]['On Windows, Open-AudIT uses WMI as it is primary method of auditing. Windows has a notorious reputation where remote WMI is concerned. It tends to either <i>just work</i> or some mystery item on the target requires changing. If you are experiencing difficulty auditing remote Windows PCs, we have created a script called test_windows_client.vbs. You can run this script <strong>locally</strong> on the machine in question, after signing on as the user that is used by Open-AudIT to perform the audit. The script makes <strong>no changes</strong> to the target devices. It checks most (not all) of the items below and generates PASS, FAIL and INFO tags for various properties. NOTE - If your target system is being audited correctly, you should not change any settings. Some of the below do not exist on Windows PCs that are able to be audited and some do exist. Only change settings if your discoveries on particular PCs are not working as intended.'] = 'A Windows-on az Open- AudIT WMI-t használ, mivel ez az elsődleges ellenőrzési módszer. A Windows hírhedt hírneve a távoli WMI. Hajlamos bármelyik <i>Csak dolgozz.</i> vagy valami rejtélyes elem a cél igényel változás. Ha nehézséget tapasztalsz a távoli Windows PC-k ellenőrzése során, létrehoztunk egy teszt _ windows _ client.vbs. nevű forgatókönyvet. Lefuttathatod a forgatókönyvet. <strong>helyi</strong> a szóban forgó gépen, miután aláírta, mint az Open- AudIT által az ellenőrzés elvégzésére használt felhasználó. A forgatókönyv <strong>nincs változás</strong> a céleszközökhöz. Az alábbi elemek többségét (nem az összeset) ellenőrzi, és különböző tulajdonságokhoz PASS, FAIL és INFO címkét állít elő. MEGJEGYZÉS - Ha a célrendszert megfelelően ellenőrzik, nem szabad semmilyen beállítást megváltoztatnia. Néhány az alábbi nem létezik a Windows PC-k, amelyek képesek ellenőrizni, és néhány létezik. Csak akkor módosítsa a beállításokat, ha bizonyos PC-ken végzett felfedezései nem a kívánt módon működnek.';

$GLOBALS["lang"]['On the Tasks List page, click the <i>Add New</i> button to configure a task.'] = 'A Feladatok listája oldalon kattintson a <i>Új</i> gombbal lehet beállítani egy feladatot.';

$GLOBALS["lang"]['On the field <i>Match String</i> you should provide the name of the software that you want to track. You can use the percent sign (%) as a wildcard in where required.'] = 'A pályán <i>Match String</i> meg kell adnia a nevét a szoftver, hogy szeretné nyomon követni. Használhatja a százalékos jel (%), mint egy vad kártya, ahol szükséges.';

$GLOBALS["lang"]['On the next page you will be able to select Access Keys and see your key or create a new key.'] = 'A következő oldalon kiválaszthatja a Access Keys-t és megnézheti a kulcsát, vagy létrehozhat egy új kulcsot.';

$GLOBALS["lang"]['On the target Windows PC, run the DCOM utility and verify (or set) the below attributes. Start -> Run, Enter DCOMCNFG and press OK. This will open the DCOMCNFG window.'] = 'A cél Windows PC, futtassa a DCOM segédprogram, és ellenőrizze (vagy állítsa be) az alábbi attribútumok. Kezdés - > Fuss, Enter DCOMCNFG és nyomja meg OK. Ez megnyitja a DCOMCNFG ablakot.';

$GLOBALS["lang"]['On the top right (underneath the menu bar) you will see several buttons. These allow you to select another dashboard, set the current dashboard as your homepage (if it is not already) and edit the current dashboard (if you have permission).'] = 'A jobb felső részen (a menüsáv alatt) több gomb látható. Ezek lehetővé teszik, hogy válasszon egy másik műszerfal, állítsa be az aktuális műszerfal, mint az Ön honlapján (ha még nem), és szerkessze az aktuális műszerfal (ha van engedélye).';

$GLOBALS["lang"]['On-Premise, Not Cloud'] = 'On-Premise, Nem Felhő';

$GLOBALS["lang"]['Once an Additional Field has been created it can be used in queries and groups just like any other attribute in the database.'] = 'Ha létrehoztunk egy további mezőt, akkor olyan lekérdezésekben és csoportokban használható, mint bármely más attribútum az adatbázisban.';

$GLOBALS["lang"]['Once commented out, your certificate will be validated, but may also fail this validation if you are using self-signed certificates and have not configured your server correctly.'] = 'Miután kimondta, a tanúsítvány érvényesítésre kerül, de lehet, hogy nem sikerül ezt a validálást, ha saját kezűleg aláírt tanúsítványokat használ, és nem állította be megfelelően a szervert.';

$GLOBALS["lang"]['Once the script has run on a target, should the script delete itself.'] = 'Ha a szkript már fut a cél, ha a szkript törli magát.';

$GLOBALS["lang"]['Once those initial queries (snmp, ssh, wmi) are complete, if the device is a supported by the audit scripts (Windows, Linux, OSX, AIX, HP-UX, Solaris and ESXi), the correct audit script will be copied to the target and executed. The audit script will self delete upon completion. The result will be stored on the target machine as an XML file. The Open-AudIT server will then retrieve the result file for processing and delete the result file on the target. The location the audit script is copied to on the target device (at least for SSH audits) is configurable by editing the discovery_linux_script_directory config item. By default it is set to /tmp/. This may need changing if /tmp has noexec set. The result file is then processed and the device details updated within Open-AudIT.'] = 'Amint a kezdeti lekérdezések (snmp, ssh, wmi) befejeződnek, ha az eszköz a könyvvizsgálati szkriptek (Windows, Linux, OSX, AIX, HP-UX, Solaris és ESXi) által támogatott eszköz, a megfelelő könyvvizsgálati szkriptet lemásolják a célra és végrehajtják. A könyvvizsgálati szkript a befejezés után automatikusan törlődik. Az eredményt XML fájlként tároljuk a célgépen. Az Open- AudIT szerver ezután lekérdezi az eredmény fájlt a feldolgozásra, és törli az eredmény fájlt a cél. Az a hely, ahol az audit script másolódik a céleszközre (legalább SSH auditok esetében), konfigurálható a discovery _ linux _ script _ direct config elem szerkesztésével. Alapértelmezés szerint ez a / tmp /. Ennek megváltoztatására lehet szükség, ha a / tmp noexec készletben van. Az eredményfájl feldolgozásra kerül, az eszköz adatai pedig az Open- AudIT rendszeren belül frissülnek.';

$GLOBALS["lang"]['Once you click the execute button, Open-AudIT will spawn a process to initiate the discovery and return the user to the discovery details page. The newly spawned process takes the configured discovery options and executes Nmap commands to determine the initial list of IP addresses to be scanned (or queries Active Directory if that type is used). Each IP to be scanned is placed into a queue. Once the initial process has completed (and there are IPs to be scanned in the queue) a number of processes will be spawned to further scan each IP in parallel. This number of processes is configurable in the configuration, edit the attribute <i>queue_limit</i>. By default this is set to 20.'] = 'Ha rákattint a végrehajtási gombra, az Open- AudIT egy folyamatot fog kiterjeszteni, hogy elindítsa a felfedezést, és visszaadja a felhasználónak a felfedezés részleteit. Az újonnan ívott folyamat veszi a konfigurált felfedezési lehetőségek és végrehajtja Nmap parancsokat, hogy meghatározza a kezdeti listáját IP címek kell szkennelni (vagy lekérdezések Aktív Directory, ha ezt a típust használják). Minden letapogatandó IP-t sorba állítanak. Miután a kezdeti folyamat befejeződött (és vannak IP-ek, amelyeket le kell szkennelni a sorban) számos folyamat lesz ívás további szkennelés minden egyes IP párhuzamosan. Ez a szám a folyamatok konfigurálható a konfiguráció, szerkeszteni az attribútum <i>sor _ limit</i>. Alapértelmezés szerint ez 20.';

$GLOBALS["lang"]['Once you have chosen your devices to edit, click the pencil button on the top right of the table.'] = 'Miután kiválasztotta eszközeit a szerkesztéshez, kattintson a ceruza gombra az asztal jobb felső részén.';

$GLOBALS["lang"]['Once you have done this, Open-AudIT will attempt to verify your user logon details against the configured Auth Method. If the user has valid credentials and <code>use_authorisation</code> is set, Open-AudIT will ask for the list of groups that the user belongs to. If the user is in the corresponding groups for Open-AudIT Roles and Orgs, those Roles and Orgs will be applied to that user.'] = 'Ha ezt megtette, az Open- AudIT megpróbálja ellenőrizni a felhasználói logon adatait a konfigurált Auth metódus segítségével. Ha a felhasználó érvényes hitelesítő és <code>use_authorisation</code> be van állítva, Open- AudIT fogja kérni a listát a csoportok, hogy a felhasználó tartozik. Ha a felhasználó a megfelelő csoportok Open- AudIT Rolles és Orgs, azokat a szerepek és Orgs fogják alkalmazni a felhasználó.';

$GLOBALS["lang"]['Once you have generated a Baseline Definition you can schedule it to be run against a specified group of devices.'] = 'Miután létrehozta a kiindulási meghatározás lehet ütemezni, hogy fut egy meghatározott csoport eszközök.';

$GLOBALS["lang"]['Once you have those items, in Open-AudIT Enterprise you can go to menu -> Discover -> Clouds -> Create Clouds, select the <i>Amazon AWS</i> type and paste them in. Done.'] = 'Ha megvannak azok a tételek, Open- AudIT Enterprise lehet menni a menü - > Felderítő - > Felhők - > Létrehozás Felhők, válassza ki a <i>Amazon AWS</i> gépeld be és ragaszd be őket. Kész.';

$GLOBALS["lang"]['Once you have those items, in Open-AudIT Enterprise you can go to menu -> Discover -> Clouds -> Create Clouds, select the <i>Microsoft Azure</i> type and paste them in. Done.'] = 'Ha megvannak azok a tételek, Open- AudIT Enterprise lehet menni a menü - > Felderítő - > Felhők - > Létrehozás Felhők, válassza ki a <i>Microsoft Azure</i> gépeld be és ragaszd be őket. Kész.';

$GLOBALS["lang"]['Once you have your cloud credentials, it is merely a matter of creating a new cloud and running the discovery - or scheduling first/future discoveries. Make sure you also have the credentials required to log on to your cloud machines, and it is all done for you just like a regular discovery. Credentials for your cloud'] = 'Ha megvan a felhő hitelesítő, ez csupán a feladata, hogy hozzon létre egy új felhő és futtatni a felfedezés - vagy ütemezése első / jövőbeli felfedezések. Győződjön meg arról is, hogy megvan a hitelesítő szükséges, hogy bejelentkezzen a felhő gépek, és ez az egész az Ön számára, mint egy rendszeres felfedezés. Credents a felhő';

$GLOBALS["lang"]['One of <code>3x2</code>, <code>4x2</code>, <code>4x3</code> or <code>4x4</code>.'] = 'Az egyik <code>3x2</code>, <code>4x2</code>, <code>4x3</code> vagy <code>4x4</code>.';

$GLOBALS["lang"]['One of Campus Area Network, Cloud Network, Enterprise Private Network, Home Area Network, Local Area Network, Metropolitan Area Network, Passive Optical Local Area Network, Personal Area Network, Storage-Area Network, System-Area Network, Virtual Private Network, Wide Area Network, Wireless Local Area Network.'] = 'A Campus Area Network, Cloud Network, Enterprise Private Network, Home Area Network, Local Area Network, Metropolitan Area Network, Passive Optical Local Area Network, Personal Area Network, Storage- Area Network, System- Area Network, Virtual Private Network, Wide Area Network, Wireless Local Area Network.';

$GLOBALS["lang"]['One of Development, Disaster Recovery, Evaluation, Pre-Production, Production, Testing, Training, User Acceptance Testing'] = 'A fejlesztés, katasztrófa-helyreállítás, értékelés, előzetes termelés, termelés, vizsgálat, képzés, felhasználói elfogadás teszt';

$GLOBALS["lang"]['One of allocated, delegated, planning, reserved, unallocated, unknown, unmanaged. Defaults to allocated.'] = 'A kiosztott, átruházott, tervezett, fenntartott, fel nem osztott, ismeretlen, kezeletlen területek egyike. Alapértelmezés hozzárendelve.';

$GLOBALS["lang"]['One of either <code>active directory</code> or <code>openldap</code>.'] = 'Valamelyik <code>active directory</code> vagy <code>openldap</code>.';

$GLOBALS["lang"]['One of: antivirus, backup, firewall, approved, banned, ignored or other.'] = 'Az egyik: vírusellenes, tartalék, tűzfal, engedélyezett, tiltott, figyelmen kívül hagyott vagy egyéb.';

$GLOBALS["lang"]['One other item to be careful of - make sure you use the hostname (or fqdn) of your LDAP Server that matches what is in the certificate (not just the LDAP Servers IP address) when creating the LDAP entry in Open-AudIT.'] = 'Egy másik dolog, hogy legyen óvatos - győződjön meg róla, hogy használja a hostname (vagy fqdn) a LDAP Az Open- AudIT LDAP bejegyzés létrehozásakor a tanúsítványban szereplő (nem csak az LDAP Servers IP-cím) szerver.';

$GLOBALS["lang"]['Online Documentation'] = 'Online dokumentáció';

$GLOBALS["lang"]['Open'] = 'Megnyitás';

$GLOBALS["lang"]['Open Data'] = 'Nyílt adatok';

$GLOBALS["lang"]['Open Source'] = 'Nyílt forrás';

$GLOBALS["lang"]['Open-AudIT'] = 'Open- AudIT';

$GLOBALS["lang"]['Open-AudIT Community source code is available on GitHub. You are encouraged to inspect any code you have concerns about, and because it is open source - you are also encouraged to ask us about any issues you have or report any findings. We are always more than happy to accept code contributions, vulnerability reports, or even simple questions. We are here to help.<br><br>The audit scripts themselves (Windows, Linux, MacOS, et al) are deliberately written in readable native shell script (VBScript for Windows, Bash for *nix). You can see exactly what commands are run. You can remove any commands you feel you do not need. You can ask a third party to inspect the code for you and (if you want to) report any findings.<br><br>Open-AudIT Enterprise performs the add-on commercial functions for Open-AudIT Community. It is included as a single compiled file with no external dependencies. Where Enterprise itself performs the function(s), if you are concerned with any issues Firstwave is happy to work through them with you - just ask! Try that with another commercial software vendor!'] = 'Open- AudIT Közösségi forráskód elérhető a GitHub-on. Önt arra ösztönzik, hogy vizsgálja meg a kódot van aggályai, és mivel ez a nyílt forrás - akkor is arra ösztönzik, hogy kérdezze meg minket bármilyen kérdést, vagy jelentést bármilyen megállapításokat. Mindig örömmel fogadjuk el a kódhozzájárulásokat, a sebezhetőségi jelentéseket, vagy akár az egyszerű kérdéseket. Segíteni jöttünk.<br/><br/>A könyvvizsgálati szkriptek (Windows, Linux, MacOS, et al) szándékosan olvasható anyanyelvi script (VBScript for Windows, Bash for * nix). Pontosan láthatja, hogy mi a parancs. Eltávolíthat minden olyan parancsot, amire nincs szüksége. Megkérheti egy harmadik felet, hogy vizsgálja meg az Ön számára a kódot, és (ha szeretné) jelenteni bármilyen megállapítást.<br/><br/>Open- AudIT Az Enterprise elvégzi az Open- AudIT Community kereskedelmi funkcióinak kiegészítését. Ez tartalmazza, mint egy egyetlen összeállított fájl, külső függések nélkül. Ha az Enterprise maga látja el a funkciót (funkciókat), ha Önt bármilyen probléma érinti Firstwave boldog, hogy velük együtt - csak kérdezd! Próbáld ki egy másik kereskedelmi szoftver árussal!';

$GLOBALS["lang"]['Open-AudIT Device Selection'] = 'Open- AudIT eszköz kiválasztása';

$GLOBALS["lang"]['Open-AudIT Enterprise has the ability to choose from a pre-defined list of discovery scan options and also to customise individual options per discovery.'] = 'Open- AudIT Az Enterprise-nak lehetősége van arra, hogy előre meghatározott listáról válasszon a felfedezési scan opciók közül, és egyedi opciókat testesítsen meg felfedezésenként.';

$GLOBALS["lang"]['Open-AudIT Enterprise. High-scale flexible discovery and audit solution for large networks. All the features of Professional plus: Baselines, File Auditing, Cloud Discovery, Rack Management, Configurable Role Based Access Control including Active Directory and LDAP.'] = 'Open-AudIT Enterprise. Nagyléptékű, rugalmas felfedezési és ellenőrzési megoldás a nagy hálózatok számára. Minden funkció a Professional plus: Alapok, File Auditing, Cloud Discovery, Rack Management, Configable Role Based Access Control, beleértve az Active Directory és LDAP.';

$GLOBALS["lang"]['Open-AudIT Field Name'] = 'Open- AudIT mező neve';

$GLOBALS["lang"]['Open-AudIT Licenses'] = 'Open- AudIT licencek';

$GLOBALS["lang"]['Open-AudIT Options'] = 'Open- AudIT beállítások';

$GLOBALS["lang"]['Open-AudIT Professional and Enterprise include Enhanced Reporting features, including time-based, historical, and muti-query based reporting features in multiple formats.'] = 'Open- AudIT Professional and Enterprise included Enhanced Reporting funkciók, beleértve az időalapú, történelmi, és muti- query alapú jelentési funkciók több formátumban.';

$GLOBALS["lang"]['Open-AudIT Professional has the ability to choose from a pre-defined list of discovery scan options, per discovery.'] = 'Open- AudIT Professional has the possibility to choose from a pre- defined list of discovery scan options, per discovery.';

$GLOBALS["lang"]['Open-AudIT Professional. The worlds'] = 'Open-AudIT Professional. A világ.';

$GLOBALS["lang"]['Open-AudIT can be configured to use LDAP servers (Microsoft Active Directory and/or OpenLDAP) to authenticate and authorize a user and in addition, to create a user account in Open-AudIT using assigned roles and orgs based on LDAP group membership. It can also use'] = 'Open- Aud Az IT beállítható, hogy az LDAP szervereket (Microsoft Active Directory és / vagy OpenLDAP) használja a felhasználó hitelesítésére és engedélyezésére, valamint arra, hogy az Open- AudIT felhasználói fiókját az LDAP csoport tagsága alapján hozzárendelt szerepeket és orgákat használva hozza létre. Használható';

$GLOBALS["lang"]['Open-AudIT can be run on your server in your data center. It does not need access to the internet at all. Even the installation on Linux where we use the distribution package manager for our prerequisites can be negated by you using an in-house and security team-approved package repository.<br><br>Open-AudIT does not store any of your data in the cloud. Even licensing information can be provided without having to access the internet from the Open-AudIT server.<br><br>Sure, it is easier to allow it to access the internet to download packages (including security fixes) for your distribution, but that is up to you and your security policies. Open-AudIT does not need the internet.'] = 'Open- Aud IT futtatható a szerveren az adatközpontban. Egyáltalán nincs szüksége internet-hozzáférésre. Még a Linux telepítés is, ahol a disztribúciós csomag kezelőjét használjuk az előfeltételeinkhez, elutasítható, ha egy belső és biztonsági rendszerű csomagtárat használsz.<br/><br/>Open- Aud Az IT egyetlen adatot sem tárol a felhőben. Még licenciainformációk is megadhatók anélkül, hogy az Open- AudIT szerverről kellene hozzáférniük az internethez.<br/><br/>Persze, könnyebb lehetővé tenni, hogy az interneten letölthető csomagok (beleértve a biztonsági javításokat) az Ön forgalmazásához, de ez rajtad és a biztonsági politikán múlik. Az Open- Auditnak nincs szüksége az internetre.';

$GLOBALS["lang"]['Open-AudIT can download, parse and use NIST CVE Vulnerability reports.'] = 'Az Open- AudIT letöltheti, elemezheti és felhasználhatja a NIST CVE sebezhetőségi jelentéseket.';

$GLOBALS["lang"]['Open-AudIT can show in one of several languages. How you can improve this?'] = 'Open- Aud Az IT több nyelven is megjelenhet. Hogyan lehet javítani ezen?';

$GLOBALS["lang"]['Open-AudIT can store information in additional fields that are associated with each device.'] = 'Open- Aud Az IT az egyes eszközökhöz kapcsolódó további mezőkben tárolhatja az információkat.';

$GLOBALS["lang"]['Open-AudIT can use Microsoft Entra (previously known as Microsoft Azure Active Directory) as an authentication method. This means your user in Open-AudIT can click the Logon using Entra button on the logon page and use their Entra credentials to logon. That user will need to already exist within Open-AudIT (and be assigned'] = 'Az Open- AudIT alkalmazhatja a Microsoft Entra (korábban Microsoft Azure Active Directory néven ismert) hitelesítési módszert. Ez azt jelenti, hogy a felhasználó az Open- AudIT gombra kattint az Entra gomb segítségével a logon oldalon, és használja az Entra hitelesítő logon. Ennek a felhasználónak már léteznie kell az Open- AudIT (és ki kell jelölni';

$GLOBALS["lang"]['Open-AudIT can use OKTA as an authentication method. This means your user in Open-AudIT can click the Logon using OKTA button on the logon page and use their OKTA credentials to logon. That user will need to already exist within Open-AudIT (and be assigned Roles and Orgs), but will not need to remember a separate set of logon credentials.'] = 'Az Open- AudIT azonosítási módszerként használhatja az OKTA-t. Ez azt jelenti, hogy a felhasználó az Open- AudIT gombra kattinthat az OKTA gombra a logon oldalon, és az OKTA hitelesítő segítségével bejelentkezhet. Ennek a felhasználónak már léteznie kell az Open- AudIT-on belül (és hozzá kell rendelni a szerepeket és az Orgs-okat), de nem kell emlékeznie egy külön logon adathalmazra.';

$GLOBALS["lang"]['Open-AudIT comes with many queries inbuilt. If you require a specific query and none of the pre-packaged queries fit your needs, it is quite easy to create a new one and load it into Open-AudIT for running.'] = 'Open- AudIT jön sok kérdés beépített. Ha speciális lekérdezésre van szükség, és egyik előre csomagolt lekérdezés sem felel meg az igényeknek, akkor nagyon könnyű egy újat létrehozni, és a futáshoz az Open- AudIT-ba betölteni.';

$GLOBALS["lang"]['Open-AudIT has a JSON Restful API to be used both in the web interface and via JSON requests.'] = 'Az Open- AudIT rendelkezik egy JSON Restful API-val, amelyet mind a webfelületen, mind a JSON kéréseken keresztül használhat.';

$GLOBALS["lang"]['Open-AudIT has a granular permissions system to determine what a user within Open-AudIT can do, and the items he can do it to. Open-AudIT can be entirely self-contained, or use Active Directory or OpenLDAP for authentication and/or authorization.<br><br>It is entirely up to the administrator of Open-AudIT how they would like the Role Based Access Control to work.'] = 'Open- Aud Az IT-nek van egy granulált jogosultsági rendszere, hogy meghatározza, mire képes egy felhasználó az Open- AudIT-on belül, és hogy milyen eszközökkel tudja ezt megtenni. Az Open- AudIT teljesen önmagába foglalható, vagy az Active Directory vagy az OpenLDAP használatával hitelesíthető és / vagy engedélyezhető.<br/><br/>Teljes mértékben az Open- AudIT adminisztrátorától függ, hogyan szeretné a szerepalapú hozzáférés vezérlését.';

$GLOBALS["lang"]['Open-AudIT has a powerful change detection engine. Any device attributes that are added, removed or changed will be detected and stored. These changes can be reported upon and the relevant data confirmed as to what was expected from your company change and release process.<br><br>When a device is audited, attributes are divided into sections which correspond to tables in the database.<br><br>Each device (computer, router, printer, et al) has an entry in the <code>devices</code> table. Each entry in the devices table has an <code>id</code> column. This value is unique - it is an auto-incrementing id.<br><br>When the audit result is processed, each item in each section has its audit result compared to what is in the database.<br><br>For each section, if the key columns (see below table) contain the identical values, it is considered already installed and has its <code>last_seen</code> attribute updated. No change_log entry is created.<br><br>If any of the key columns do not match, it is considered a new attribute and is inserted. A <code>change_log</code> entry is created if the device had other attributes already present in the table.<br><br>At the completion of the audit processing, any database items that have not been updated (or inserted) are considered to not be present. The <code>current</code> attribute for this item is set to <i>n</i> and a change_log entry is generated.<br><br>So, we can determine if something is currently installed - the current column is <i>y</i>.<br><br>We can determine when something was initially detected - the <i>first_seen</i>.<br><br>We can determine if something was installed after the initial audit - first seen will be different in the component and device tables.<br><br>We can determine if something is not currently installed, but previously was - current = <i>n</i>.<br><br>We can determine the last time we detected an item - last_seen.<br><br>At any given point, we can determine what was on a system - by using the audit_log table and selecting the relevant components based on first_seen and last_seen.<br><br>Each section and its matching key columns are below.<br><br>NOTE - There are some exceptions as detailed below.<br><br>*1 - For network cards, if the computer is a VMware Esx machine it also uses the net_index and connection columns.<br><br>*2 - For partitions, f the computer is an AIX machine, we use the partition name.'] = 'Open- Aud Az IT-nek erős változás-érzékelő motorja van. Minden olyan eszközattribútumot, amelyet hozzáadnak, eltávolítanak vagy módosítanak, felfedezni és tárolni kell. Ezek a változások jelenthetők, és a vonatkozó adatok megerősítették, hogy mi várható a cég változás és kiadás folyamat.<br/><br/>Az eszköz ellenőrzése során az attribútumok az adatbázis táblázatainak megfelelő szakaszokra oszlanak.<br/><br/>Minden eszköz (számítógép, router, nyomtató, et al) tartalmaz egy bejegyzést a <code>devices</code> Asztal. Az eszköztáblázat minden egyes bejegyzésében van egy <code>id</code> oszlop Ez az érték egyedi - ez egy auto-növelő azonosító.<br/><br/>Az ellenőrzési eredmény feldolgozásakor az egyes szakaszok minden tételének ellenőrzési eredménye az adatbázisban találhatókhoz képest.<br/><br/>Minden szakaszra, ha a fő oszlopok (lásd az alábbi táblázatot) tartalmazzák az azonos értékeket, akkor már telepítettnek tekintendő, és <code>last_seen</code> attribútum frissítve. Nincs változás _ log bejegyzés.<br/><br/>Ha valamelyik kulcsoszlop nem illeszkedik, akkor új attribútumnak kell tekinteni, és be kell illeszteni. A <code>change_log</code> A bejegyzés akkor jön létre, ha az eszköz más attribútumokkal már rendelkezik a táblázatban.<br/><br/>Az audit-feldolgozás befejezésekor a nem frissített (vagy be nem helyezett) adatbáziselemek nem minősülnek jelen lévőnek. A <code>current</code> az e tételre vonatkozó attribútum: <i>n</i> és a change _ log bejegyzés létrejön.<br/><br/>Tehát meghatározhatjuk, hogy van-e valami telepítve - az aktuális oszlop <i>y</i>.<br/><br/>Meg tudjuk határozni, mikor észleltek valamit - a <i>first _ seen</i>.<br/><br/>Meg tudjuk állapítani, hogy az első ellenőrzés után telepített-e valamit - először az alkatrész és az eszköz táblákban más lesz.<br/><br/>Meg tudjuk állapítani, ha valami nincs telepítve, de korábban - jelenlegi = <i>n</i>.<br/><br/>Meghatározhatjuk, mikor észleltünk utoljára egy tárgyat.<br/><br/>Egy adott ponton bármikor meghatározhatjuk, hogy mi volt a rendszerben - az audit _ log tábla használatával és a megfelelő komponensek kiválasztásával az első _ seen és az utolsó _ seen alapján.<br/><br/>Minden szakasz és a hozzá tartozó kulcsoszlopok az alábbiakban találhatók.<br/><br/>MEGJEGYZÉS - Az alábbiakban részletezettek szerint vannak kivételek.<br/><br/>* 1 - Hálózati kártyákhoz, ha a számítógép VMware Esx gép, akkor a net _ index és a kapcsolat oszlopokat is használja.<br/><br/>* 2 - A partíciók, f a számítógép egy AIX gép, használjuk a partíció nevét.';

$GLOBALS["lang"]['Open-AudIT is a program designed to track and report on your IT and related assets details and configuration. Open-AudIT can tell <i>What is On Your Network?</i>, how it is configured and if there have been any changes. Open-AudIT delivers a sleek, flexible and easy to use platform for device discovery, IT auditing and inventory management automation straight out of the box.'] = 'Az Open- AudIT egy olyan program, amelynek célja, hogy nyomon kövesse és jelentse az informatikai és a kapcsolódó eszközök adatait és konfigurációját. Open- AudIT meg tudja mondani <i>Mi van a hálózatodon?</i>, hogyan van konfigurálva, és ha bármilyen változás történt. Az Open- AudIT egy sima, rugalmas és könnyen használható platformot biztosít az eszközök felfedezéséhez, az IT auditáláshoz és a készletkezelés automatizálásához közvetlenül a dobozból.';

$GLOBALS["lang"]['Open-AudIT makes it easy to edit the attributes of multiple devices at once.'] = 'Open- Aud IT megkönnyíti a több eszköz tulajdonságainak szerkesztését egyszerre.';

$GLOBALS["lang"]['Open-AudIT needs specific directory permissions to be able to create files, upload results, etc. Please set as below.'] = 'Open- Aud Az IT-nek speciális könyvtári jogosultságokra van szüksége, hogy fájlokat, feltöltési eredményeket, stb. Kérjük, állítsa be az alábbiak szerint.';

$GLOBALS["lang"]['Open-AudIT provides many built-in queries and makes it simple to create your own.'] = 'Open- AudIT biztosít sok építmény- lekérdezésekben, és egyszerűvé teszi, hogy a saját.';

$GLOBALS["lang"]['Open-AudIT ships with inbuilt roles for admin, org_admin and user.<br><br>Generally, a user who is an administrator of the Open-AudIT application itself should have admin and possible org_admin roles.<br><br>A user can have multiple roles. The permission will be applied at the most permissive level - IE, if a user has the roles of user and org_admin, they will be able to create locations because org_admin grants this permission, even though the user role does not.<br><br>The admin role allows access to collections such as configuration, database, groups, ldap servers, logs, queries and roles. Global items that affect the entire application.<br><br>The org_admin role usually allows create, read, update and delete actions for any collection that contains the org_id column. Virtually all data except some of the collections mentioned above will contain an <code>org_id</code> column.<br><br>The user role generally allows read only access to all items with an org_id column.'] = 'Open- Aud IT hajók beépített szerepekkel admin, org _ admin és felhasználó.<br/><br/>Az Open- AudIT alkalmazás adminisztrátora általában adminnal és lehetséges org _ admin szerepekkel rendelkezik.<br/><br/>A felhasználónak több szerepe is lehet. Az engedély a legengedékenyebb szinten kerül alkalmazásra - IE, ha a felhasználónak vannak felhasználói és org _ admin szerepei, akkor képesek lesznek helyszínek létrehozására, mert az org _ admin megadja ezt az engedélyt, annak ellenére, hogy a felhasználó szerepe nem.<br/><br/>Az admin szerep lehetővé teszi a hozzáférést olyan gyűjteményekhez, mint a konfiguráció, adatbázis, csoportok, ldap szerverek, naplók, lekérdezések és szerepek. Globális elemek, amelyek befolyásolják az egész alkalmazás.<br/><br/>Az org _ admin szerepkör általában lehetővé teszi az org _ id oszlopot tartalmazó gyűjtemények elkészítését, olvasását, frissítését és törlését. Gyakorlatilag minden adat, kivéve néhány fent említett gyűjtemények tartalmaz egy <code>org_id</code> oszlop<br/><br/>A felhasználó szerepe általában csak az org _ id oszloppal rendelkező elemekhez lehet olvasni.';

$GLOBALS["lang"]['Open-AudIT ships with inbuilt roles for admin, org_admin and user.<br><br>Generally, a user who is an administrator of the Open-AudIT application itself should have admin and possible org_admin roles.<br><br>A user can have multiple roles. The permission will be applied at the most permissive level - IE, if a user has the roles of user and org_admin, they will be able to create locations because org_admin grants this permission, even though the user role does not.<br><br>The admin role allows access to collections such as configuration, database, groups, ldap servers, logs, queries and roles. Global items that affect the entire application.<br><br>The org_admin role usually allows create, read, update and delete actions for any collection that contains the org_id column. Virtually all data except some of the collections mentioned above will contain an org_id column.<br><br>The user role generally allows read only access to all items with an org_id column.'] = 'Open- Aud IT hajók beépített szerepekkel admin, org _ admin és felhasználó.<br/><br/>Az Open- AudIT alkalmazás adminisztrátora általában adminnal és lehetséges org _ admin szerepekkel rendelkezik.<br/><br/>A felhasználónak több szerepe is lehet. Az engedély a legengedékenyebb szinten kerül alkalmazásra - IE, ha a felhasználónak vannak felhasználói és org _ admin szerepei, akkor képesek lesznek helyszínek létrehozására, mert az org _ admin megadja ezt az engedélyt, annak ellenére, hogy a felhasználó szerepe nem.<br/><br/>Az admin szerep lehetővé teszi a hozzáférést olyan gyűjteményekhez, mint a konfiguráció, adatbázis, csoportok, ldap szerverek, naplók, lekérdezések és szerepek. Globális elemek, amelyek befolyásolják az egész alkalmazás.<br/><br/>Az org _ admin szerepkör általában lehetővé teszi az org _ id oszlopot tartalmazó gyűjtemények elkészítését, olvasását, frissítését és törlését. Gyakorlatilag minden adat, kivéve néhány fent említett gyűjtemény tartalmaz egy org _ id oszlopot.<br/><br/>A felhasználó szerepe általában csak az org _ id oszloppal rendelkező elemekhez lehet olvasni.';

$GLOBALS["lang"]['Open-AudIT ships with several pre-configured Dashboards. If you are a Professional user, you can select between two of these and set it as your default page when you logon. If you are an Enterprise user, you can not only select between the five preconfigured Dashboards, but you also have the ability to create your own.'] = 'Open- AudIT hajók több előre beállított műszerfal. Ha Ön egy Professional felhasználó, akkor válassza ki két ezek közül, és állítsa be, mint az alapértelmezett oldalt, amikor bejelentkezik. Ha Ön egy Enterprise felhasználó, akkor nem csak az öt előre konfigurált Dashboardok közül választhat, hanem a sajátját is képes létrehozni.';

$GLOBALS["lang"]['Open-AudIT should be installed on 64bit Windows <strong>Server</strong> systems only. Windows 10 and Windows 11 are <strong>not</strong> supported.'] = 'Az Open- AudIT telepíthető a 64bites Windows-ra <strong>Szolgáltató</strong> kizárólag rendszerek. Windows 10 és Windows 11 <strong>nem</strong> támogatott.';

$GLOBALS["lang"]['Open-AudIT uses Nmap in its Discovery function. Nmap probes devices for open ports. Devices ideally should respond with open for working ports. Devices often do not respond with this. The varying responses are detailed below.'] = 'Az Open- AudIT Nmap-ot használ a Discovery funkciójában. Nmap szondák eszközök nyitott portok. Az eszközöknek ideális esetben nyitott kikötőkkel kell reagálniuk. Az eszközök gyakran nem reagálnak erre. A különböző válaszok az alábbiakban találhatók.';

$GLOBALS["lang"]['Open-AudIT uses Nmap in its Discovery function. Without Nmap, Open-AudIT will not function correctly. Every Open-AudIT install assumes Nmap is installed and will also test for it on the Discovery web pages. More information about Open-AudIT and Nmap is available here'] = 'Az Open- AudIT Nmap-ot használ a Discovery funkciójában. Nmap nélkül az Open- AudIT nem működik megfelelően. Minden Open- AudIT telepítés feltételezi Nmap van telepítve, és azt is teszteli a Discovery weboldalak. További információk az Open- AudIT és az Nmap kapcsolatáról itt találhatók';

$GLOBALS["lang"]['Open-AudIT uses Nmap in its Discovery function. Without Nmap, Open-AudIT will not function correctly. Every Open-AudIT install assumes Nmap is installed and will test for it on the Discovery web pages.'] = 'Az Open- AudIT Nmap-ot használ a Discovery funkciójában. Nmap nélkül az Open- AudIT nem működik megfelelően. Minden Open- AudIT telepítés feltételezi Nmap van telepítve, és tesztelni fogja azt a Discovery weboldalak.';

$GLOBALS["lang"]['Open-AudIT uses credentials to access your devices. These are encrypted and stored, just as you would expect.'] = 'Open- Aud Az IT az eszközeihez való hozzáféréshez használ igazolványt. Ezek titkosítva vannak és tárolva, ahogy várnád.';

$GLOBALS["lang"]['Open-AudIT was written by an English speaking Australian. Everything in the application uses English wording. However Open-AudIT has always supported multiple languages for display. These translations are not always correct, because the developers do not natively speak the language of every translation offered.<br><br>What can you do if something is not correct in the translation?'] = 'Open- AudIT írt egy angol beszélő ausztrál. Az alkalmazásban minden angol szöveget használ. Az Open- AudIT azonban mindig több nyelvet támogatott a megjelenítéshez. Ezek a fordítások nem mindig helyesek, mert a fejlesztők nemileg nem beszélik a nyelvet minden fordítás kínált.<br/><br/>Mit tehet, ha valami nem stimmel a fordításban?';

$GLOBALS["lang"]['OpenLDAP'] = 'OpenLDAP';

$GLOBALS["lang"]['OpenScap is Installed'] = 'OpenScap telepítve';

$GLOBALS["lang"]['Opening a Support Ticket?'] = 'Support Ticket nyitása?';

$GLOBALS["lang"]['openldap_user_dn'] = 'Openldap felhasználói Dn';

$GLOBALS["lang"]['Openldap User Dn'] = 'Openldap felhasználói Dn';

$GLOBALS["lang"]['openldap_user_membership_attribute'] = 'Openldap felhasználói tagsági attribútum';

$GLOBALS["lang"]['Openldap User Membership Attribute'] = 'Openldap felhasználói tagsági attribútum';

$GLOBALS["lang"]['open|filtered'] = 'Nyílt, 124; szűrt';

$GLOBALS["lang"]['Open|filtered'] = 'Nyílt, 124; szűrt';

$GLOBALS["lang"]['Operating System'] = 'Működési rendszer';

$GLOBALS["lang"]['Operating System Family Contains'] = 'Működési rendszer Családi Tartalékok';

$GLOBALS["lang"]['Operating Systems'] = 'Üzemeltetési rendszerek';

$GLOBALS["lang"]['Operators'] = 'Operátorok';

$GLOBALS["lang"]['optical'] = 'Optikai';

$GLOBALS["lang"]['Optical'] = 'Optikai';

$GLOBALS["lang"]['Optimized'] = 'Optimalizált';

$GLOBALS["lang"]['Option #1 - Change the data'] = 'Opció # 1 - Az adatok módosítása';

$GLOBALS["lang"]['Option #2 - Change the translation file'] = '2. lehetőség - A fordítási fájl módosítása';

$GLOBALS["lang"]['Optional Agent Based Auditing'] = 'Opcionális ügynöki alapú ellenőrzés';

$GLOBALS["lang"]['Optional version as audited by Open-AudIT. Use the percent sign % as a wildcard.'] = 'Az Open- AudIT által ellenőrzött opcionális változat. Használja a%% -ot vadkártyaként.';

$GLOBALS["lang"]['options'] = 'Opciók';

$GLOBALS["lang"]['Options'] = 'Opciók';

$GLOBALS["lang"]['Options, options, options'] = 'Opciók, opciók, opciók';

$GLOBALS["lang"]['Or'] = 'vagy';

$GLOBALS["lang"]['Or select from the below fields.'] = 'Vagy válasszon az alábbi mezők közül.';

$GLOBALS["lang"]['org_descendants'] = 'Org leszármazottak';

$GLOBALS["lang"]['Org Descendants'] = 'Org leszármazottak';

$GLOBALS["lang"]['org_id'] = 'Org azonosító';

$GLOBALS["lang"]['Org ID'] = 'Org azonosító';

$GLOBALS["lang"]['Organisation'] = 'Szervezet';

$GLOBALS["lang"]['organisation'] = 'Szervezet';

$GLOBALS["lang"]['Organisation Descendants'] = 'Szervezet leszármazottai';

$GLOBALS["lang"]['Organisations'] = 'Szervezetek';

$GLOBALS["lang"]['Organisations can extend and enhance the level of detail that is stored against every discovered device using custom fields and the open core allows for easy integration into CMDB, event management and ticketing systems.'] = 'A szervezetek kiterjeszthetik és fokozhatják a részletesség szintjét, amelyet minden felfedezett eszköz ellen tárolnak egyedi mezők használatával, és a nyitott mag lehetővé teszi a CMDB-be való könnyű integrációt, az eseménykezelést és a jegyrendszert.';

$GLOBALS["lang"]['orgs'] = 'Orgok';

$GLOBALS["lang"]['Orgs'] = 'Orgok';

$GLOBALS["lang"]['Orgs Name'] = 'Orgs név';

$GLOBALS["lang"]['Orgs in Open-AudIT are a key item. A user has a primary Org as well as a list of Orgs they can access. A user combines this with a list of assigned roles that define what actions they can take on items assigned to the Orgs they have access to. The combination of a users <i>orgs</i> and <i>roles</i> define what they can and cannot do within Open-AudIT.<br><br>Most items in Open-AudIT are assigned to an Org. Devices, Locations, Networks, etc, etc.<br><br>Orgs can have child Orgs. Think of an organisational chart (tree) structure. If a user has access to a specific Org, most of the time (not always) they also have access to that Orgs descendants.'] = 'Az Open- AudIT parancs kulcsfontosságú elem. A felhasználónak van egy elsődleges Org, valamint egy listát a Orgs, hogy hozzáférhet. A felhasználó ezt kombinálja a kijelölt szerepek listájával, amelyek meghatározzák, hogy milyen intézkedéseket tehetnek a hozzájuk rendelt eszközökkel kapcsolatban. A felhasználók kombinációja <i>létra</i> és <i>szerepek</i> meghatározza, hogy mit tehetnek és mit nem az Open- AudIT-on belül.<br/><br/>Az Open- AudIT legtöbb eleme egy Org. Eszközökhöz, helyekhez, hálózatokhoz stb.<br/><br/>Az orgáknak lehet gyerekük. Gondoljon egy szervezeti chart (fa) struktúra. Ha a felhasználó hozzáférhet egy bizonyos Org, a legtöbb alkalommal (nem mindig) is hozzáférnek, hogy az Orgs leszármazottak.';

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

$GLOBALS["lang"]['Other than that restriction, you are free to select attributes as required. It is a good idea to use the menu'] = 'Ezen a korlátozáson kívül szabadon választhat attribútumokat. Jó ötlet használni a menüt.';

$GLOBALS["lang"]['Others'] = 'Egyéb';

$GLOBALS["lang"]['Our default Integration also enables a discovery on any externally supplied devices. So we ship a default discovery for the Default Integration out of the box. These use the default matching rules, but also enable matching on IP address.'] = 'Az alapértelmezett Integráció is lehetővé teszi a felfedezés bármely külső eszközökkel. Tehát kiszállítunk egy alapértelmezett felfedezést az Alapértelmezett Integrációhoz a dobozból. Ezek az alapértelmezett egyezési szabályokat használják, de lehetővé teszik a megfeleltetést az IP-címen.';

$GLOBALS["lang"]['Our examples will use the <i>type</i> column.'] = 'Példaink a következő: <i>típus</i> oszlop';

$GLOBALS["lang"]['Our framework uploads files here for processing, then deletes them. Think submitted audit results, etc.'] = 'A rendszerünk feltölti a fájlokat a feldolgozásra, majd törli őket. Gondoljon a benyújtott ellenőrzési eredményekre, stb.';

$GLOBALS["lang"]['Our goal with the initial integrations release was specifically for NMIS to Open-AudIT integration to <i>just work</i>. If you are using the programs on Linux, you can literally click a single button to execute the integration. Nothing more is required. Having said that, the integration itself is extremely configurable - so if something is not to your preference, it can easily be changed.'] = 'A cél a kezdeti integrációk kiadás volt kifejezetten NMIS Open- AudIT integráció <i>Csak dolgozz.</i>. Ha Linuxon használod a programokat, szó szerint egyetlen gombra kattinthatsz az integráció végrehajtásához. Semmi másra nincs szükség. Miután ezt mondta, az integráció maga rendkívül konfigurálható - így ha valami nem tetszik, akkor könnyen megváltoztatható.';

$GLOBALS["lang"]['Our new feature called Vulnerabilities gives you the ability to quickly determine if any devices are affected by any CVE (Common Vulnerability Exposure) - but how?<br><br>FirstWave constantly consumes the output from the Nist NVD feed. We take this and apply a few restrictions, then extract the affected programs and build a SQL query for reporting. Your Open-AudIT instance reaches out to FirstWave and requests any new vulnerabilities on a regular basis. When it receives a new vulnerability record, it is run against the database and the result stored. Each time a device is processed, all matching vulnerabilities are again executed and the result stored. This means when viewing a vulnerability list, we do not need to calculate all affected devices - we already have the result. When you view an individual vulnerability record, we do indeed recalculate the result for this singular vulnerability.<br><br>So, you are always up to date!<br><br>In addition to this, we also calculate the result of all vulnerabilities for all devices daily (usually at a quiet time, say 2am).<br><br>In your instance of Open-AudIT, we allow you to select which vendors you care about. i.e. there is no use retrieving vulnerability records from a vendor whose software you do not use or have installed. By default, our vendor list is Adobe, Apple, Cisco, Google, Microsoft, Mozilla, and Redhat.<br><br>This all sounds very simple, but behind the scenes a <b>lot</b> is going on. For instance, the CVE record contains a list of affected software - but those software names do not match what we receive when we audit a computer. A good example is Apache. Typically, a CVE record will say the affected software is http_server. In reality, this appears as apache2 (Ubuntu), httpd (Redhat), Apache HTTP Server (Windows) - and others. So, we have to first determine what is the actual name of the program we receive when we ask a computer, and there may be multiple names. After that we must parse the CVE record and create a matching SQL statement. Allowing for multiple program names as above, and multiple versions, version ranges, and even multiple different pieces of software (an example is Thunderbird and Firefox in a single CVE). And your instance of Open-AudIT must take this and apply Orgs filtering as well. And that is just a single CVE. What about determining which CVEs you have and do not have? What about adding a vendor to the list later? So many things to consider!<br><br>As well as the usual reporting, we also have a few new widgets available for Dashboards, based on Vulnerabilities data.'] = 'Az új funkciónk, a Sebezhetőség, lehetővé teszi, hogy gyorsan megállapítsuk, hogy bármilyen eszközt érint-e bármilyen CVE (közös sebezhetőségi expozíció) - de hogyan?<br/><br/>A FirstWave folyamatosan fogyaszt a Nist NVD-ből. Fogjuk ezt és alkalmazunk néhány korlátozást, majd kivonjuk az érintett programokat, és készítünk egy SQL lekérdezést a jelentéshez. Az Ön Open- AudIT példánya a FirstWave felé tart, és rendszeresen új sebezhetőséget kér. Amikor kap egy új sebezhetőségi rekordot, akkor fut az adatbázis és az eredmény tárolt. Minden alkalommal, amikor egy eszközt feldolgoznak, az összes megfelelő sebezhetőséget újra végrehajtják és az eredményt tárolják. Ez azt jelenti, hogy a sebezhetőségi lista megtekintésekor nem kell minden érintett eszközt kiszámítanunk - már megvan az eredmény. Ha megnézünk egy egyéni sebezhetőségi rekordot, valóban újraszámoljuk ennek az egyedülálló sebezhetőségnek az eredményét.<br/><br/>Szóval mindig naprakész vagy!<br/><br/>Ezen kívül, azt is kiszámítják az összes sebezhetőség minden eszköz naponta (általában egy csendes időben, mondjuk 2am).<br/><br/>Az Open- AudIT esetedben lehetővé tesszük, hogy kiválasztsd, mely forgalmazókkal törődsz. azaz nincs használható letöltése sebezhetőségi rekordok egy eladó, akinek szoftver nem használja, vagy telepített. Alapértelmezés szerint az eladók listája az Adobe, Apple, Cisco, Google, Microsoft, Mozilla és Redhat.<br/><br/>Ez nagyon egyszerűnek hangzik, de a színfalak mögött <b>tétel</b> tovább megy. Például a CVE rekord tartalmaz egy listát az érintett szoftverekről - de ezek a szoftvernevek nem egyeznek azzal, amit a számítógép ellenőrzésekor kapunk. Jó példa erre az Apache. Egy CVE rekord általában azt mondja, hogy az érintett szoftver http _ server. A valóságban ez apache2 (Ubuntu), httpd (Redhat), Apache HTTP Server (Windows) és mások formájában jelenik meg. Tehát először meg kell határoznunk, hogy mi a valódi neve annak a programnak, amit akkor kapunk, amikor egy számítógépet kérünk, és lehet, hogy több név is van. Ezt követően meg kell elemeznünk a CVE rekordot, és létre kell hoznunk egy megfelelő SQL nyilatkozatot. Lehetővé teszi több program nevét, mint fent, és több verzió, verziótartományok, és még több különböző darab szoftver (például Thunderbird és Firefox egyetlen CVE). És az Open- AudIT példájának ezt is fel kell vennie, és az Orgs szűrést is alkalmaznia kell. És ez csak egy CVE. Mi lenne, ha meghatároznád, hogy melyik KVSZ-ed van, és melyik nem? Mi lenne, ha később felvennénk egy eladót a listára? Annyi mindent kell figyelembe venni!<br/><br/>A szokásos jelentésekkel együtt van néhány új bővítményünk is a Dashboard számára, a sebezhetőségi adatok alapján.';

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

$GLOBALS["lang"]['PAExec is a freely-redistributable re-implementation of SysInternal/Microsofts popular PsExec program.  PAExec aims to be a drop in replacement for PsExec, so the command-line usage is identical, with additional options also supported.  This work was originally inspired by Talha Tariqs RemCom.'] = 'A PAExec a SysInternal / Microsofts népszerű PsExec program szabadúszó újraelosztható megvalósítása. A PAExec célja a PsExec helyettesítésének csökkenése, így a parancssor használata azonos, további opciók is támogathatók. Ezt a munkát eredetileg Talha Tariqs RemCom inspirálta.';

$GLOBALS["lang"]['PHP'] = 'PHP';

$GLOBALS["lang"]['POD'] = 'POD';

$GLOBALS["lang"]['POSTing data'] = 'POSTING-adatok';

$GLOBALS["lang"]['Package'] = 'Csomag';

$GLOBALS["lang"]['packages'] = 'Csomagok';

$GLOBALS["lang"]['Packages'] = 'Csomagok';

$GLOBALS["lang"]['Packages are used to report on things such as <i>banned software</i>, AntiVirus on servers, etc.<br><br>Open-AudIT provides widgets that build upon also supplied repots to detemine the status of antivirus, firewall and other software.'] = 'A csomagokat az olyan dolgok jelentésére használják, mint például: <i>tiltott szoftver</i>, Antivírus szervereken stb.<br/><br/>Az Open- AudIT olyan grafikonokat biztosít, amelyek az antivírus, tűzfal és más szoftverek állapotát detemizálják.';

$GLOBALS["lang"]['pagefile'] = 'Pagefile';

$GLOBALS["lang"]['Pagefile'] = 'Pagefile';

$GLOBALS["lang"]['Pakistan'] = 'Pakisztán';

$GLOBALS["lang"]['Palau'] = 'Palau';

$GLOBALS["lang"]['Palestinian Territory'] = 'Palesztin terület';

$GLOBALS["lang"]['Panama'] = 'Panama';

$GLOBALS["lang"]['Papua New Guinea'] = 'Pápua Új-Guinea';

$GLOBALS["lang"]['Paraguay'] = 'Paraguay';

$GLOBALS["lang"]['Parameters'] = 'Paraméterek';

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

$GLOBALS["lang"]['Permission'] = 'Engedély';

$GLOBALS["lang"]['Permission Required'] = 'Engedély szükséges';

$GLOBALS["lang"]['permissions'] = 'Jogosultságok';

$GLOBALS["lang"]['Permissions'] = 'Jogosultságok';

$GLOBALS["lang"]['Persian'] = 'Perzsa';

$GLOBALS["lang"]['Personal Area Network'] = 'Személyi terület hálózat';

$GLOBALS["lang"]['Personal area network'] = 'Személyi terület hálózat';

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

$GLOBALS["lang"]['Pie charts must return name or my_name, description or my_description and count.'] = 'A pite diagramoknak vissza kell adniuk a nevét vagy a nevem, a leírásom vagy a leírásom és a számom.';

$GLOBALS["lang"]['ping'] = 'Ping';

$GLOBALS["lang"]['Ping'] = 'Ping';

$GLOBALS["lang"]['Ping Target'] = 'Ping Cél';

$GLOBALS["lang"]['Pitcairn Islands'] = 'Pitcairn-szigetek';

$GLOBALS["lang"]['placement'] = 'Elhelyezés';

$GLOBALS["lang"]['Placement'] = 'Elhelyezés';

$GLOBALS["lang"]['Plan and conduct internal audits'] = 'Terv és belső ellenőrzések végzése';

$GLOBALS["lang"]['Please have an Open-AudIT administrator logon and upgrade the database.'] = 'Kérjük, legyen Open- AudIT rendszergazda bejelentkezési és frissítse az adatbázist.';

$GLOBALS["lang"]['Please log in and change these ASAP.'] = 'Kérem, jelentkezzen be és cserélje ki ezeket azonnal.';

$GLOBALS["lang"]['Please log on to the Open-AudIT Server (either Windows or Linux) and run <code>nslookup IP_ADDRESS_OF_TARGET</code> in the command prompt or shell. It must be able to resolve the IP to a name.'] = 'Kérjük, jelentkezzen be az Open- AudIT szerverre (Windows vagy Linux) és fusson <code>nslookup IP_ADDRESS_OF_TARGET</code> a parancspontban vagy a hüvelyben. Képesnek kell lennie arra, hogy az IP-t egy névhez igazítsa.';

$GLOBALS["lang"]['Please note that the select box will override the text input box.'] = 'Felhívjuk figyelmét, hogy a kijelölt mezőben felülírja a szövegbeviteli mezőt.';

$GLOBALS["lang"]['Please see the FAQ'] = 'Kérjük, nézze meg a GYIK';

$GLOBALS["lang"]['Please send all three files to your support contact at Opmantek and describe your issue.'] = 'Kérjük, küldje el mindhárom fájlt az Opmantek-i támogató kapcsolatának, és írja le a problémáját.';

$GLOBALS["lang"]['Please set using'] = 'Kérjük, használja';

$GLOBALS["lang"]['Please visit the homepage at'] = 'Kérjük, látogasson el a honlapra:';

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

$GLOBALS["lang"]['Polish'] = 'lengyel';

$GLOBALS["lang"]['Polite'] = 'Polit';

$GLOBALS["lang"]['Populate the with values provided below:'] = 'Az alábbiakban megadott értékek:';

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

$GLOBALS["lang"]['Portuguese'] = 'Portugália';

$GLOBALS["lang"]['Portuguese (Brazil)'] = 'Portugália (Brazília)';

$GLOBALS["lang"]['position'] = 'Pozíció';

$GLOBALS["lang"]['Position'] = 'Pozíció';

$GLOBALS["lang"]['Post-Certification'] = 'PostCertification';

$GLOBALS["lang"]['postcode'] = 'Irányítószám';

$GLOBALS["lang"]['Postcode'] = 'Irányítószám';

$GLOBALS["lang"]['power_circuit'] = 'Áramkör';

$GLOBALS["lang"]['Power Circuit'] = 'Áramkör';

$GLOBALS["lang"]['power_sockets'] = 'Power Sockets';

$GLOBALS["lang"]['Power Sockets'] = 'Power Sockets';

$GLOBALS["lang"]['Predictable'] = 'Kiszámítható';

$GLOBALS["lang"]['Preferences'] = 'Előirányzatok';

$GLOBALS["lang"]['Prepare for recertification every 3 years'] = 'Felkészülés az újraélesztésre 3 évente';

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

$GLOBALS["lang"]['Privacy Protocol'] = 'Adatvédelmi protokoll';

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

$GLOBALS["lang"]['Professional'] = 'Szakmai';

$GLOBALS["lang"]['profile'] = 'Profil';

$GLOBALS["lang"]['Profile'] = 'Profil';

$GLOBALS["lang"]['program'] = 'Program';

$GLOBALS["lang"]['Program'] = 'Program';

$GLOBALS["lang"]['Properties'] = 'Tulajdonságok';

$GLOBALS["lang"]['Proprietary. If you want to modify HighCharts you may require a'] = 'Példakép. Ha módosítani szeretné a HighCharts lehet szükség a';

$GLOBALS["lang"]['Protects confidentiality, integrity, and availability of information'] = 'Az információk bizalmas jellegének, integritásának és hozzáférhetőségének védelme';

$GLOBALS["lang"]['protocol'] = 'Jegyzőkönyv';

$GLOBALS["lang"]['Protocol'] = 'Jegyzőkönyv';

$GLOBALS["lang"]['Provide a description and select and expires duration.'] = 'Adja meg a leírást, válassza ki és töltse ki az időtartamot.';

$GLOBALS["lang"]['Provide a name - we humbly recommand Open-AudIT &#128512;, but you can name it anything you like.<br>From the Open-AudIT form, copy the value for the <i>Redirect URI</i> field and paste it into the <i>Sign-in redirect URIs</i> field in OKTA.<br>The Sign-out redirect URIs is optional, but if you want you can use open-audit/index.php/logout with your Open-AudIT servers http address, as per the screenshot.<br>Normally your Open-AudIT URL will look something like'] = 'Adjon egy nevet - alázatosan ajánljuk az Open- Auditot, de azt nevezhet, amit csak akar.<br/>Az Open- AudIT űrlapról másolja le a <i>URI átirányítása</i> mező és illessze be a <i>Jelzés az átirányított URI-kben</i> mező OKTA.<br/>A "Sign- out" átirányított URI-k opcionálisak, de ha szeretné, használhatja az open- audit / index indexet. php / kijelentkezés az Open- AudIT szervereivel http cím, a képernyőkép szerint.<br/>Általában a Az Open- AudIT URL valahogy így fog kinézni:';

$GLOBALS["lang"]['Provided you have the correct credentials, Device Seed Discovery works as follows'] = 'Feltéve, hogy a megfelelő hitelesítő, Device Seed Discovery működik az alábbiak szerint';

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

$GLOBALS["lang"]['Queries are an important part of Open-AudIT. They are what enables you to get meaningful information from all the device data you have discovered. Along with summaries and groups, they provide a powerful mechanism to extract crucial information.'] = 'A lekérdezések az Open- AudIT fontos részei. Ezek azok, amelyek lehetővé teszik, hogy jelentős információkat szerezz az összes eszköz által felfedezett adatból. Összefoglalásokkal és csoportokkal együtt hatékony mechanizmust biztosítanak a létfontosságú információk kinyerésére.';

$GLOBALS["lang"]['Queries for Groups should select only the'] = 'A csoportoknak szóló kérdések csak a';

$GLOBALS["lang"]['Query'] = 'Kérdés';

$GLOBALS["lang"]['Query this Active Directory attribute first to determine the users work unit.'] = 'Kérdés ez Active Directory attribútum először meghatározni a felhasználók munkaegység.';

$GLOBALS["lang"]['Query this Active Directory attribute second to determine the users work unit.'] = 'Kérdés ez Active Directory attribútum második, hogy meghatározza a felhasználók munkaegység.';

$GLOBALS["lang"]['queue'] = 'Sorozat';

$GLOBALS["lang"]['Queue'] = 'Sorozat';

$GLOBALS["lang"]['Queue Limit'] = 'A sor határa';

$GLOBALS["lang"]['Queued Device Audits'] = 'Soros eszközellenőrzés';

$GLOBALS["lang"]['Queued IP Scans'] = 'Queued IP scans';

$GLOBALS["lang"]['Queued Items'] = 'Sorozatos tételek';

$GLOBALS["lang"]['RBAC for Active Directory and openLDAP'] = 'RBAC Active Directory és openLDAP';

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

$GLOBALS["lang"]['Rack Management and Reporting'] = 'Rack Management és jelentéstétel';

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

$GLOBALS["lang"]['Read through the log file at'] = 'Olvassa el a naplófájl a';

$GLOBALS["lang"]['Received'] = 'Vettem.';

$GLOBALS["lang"]['Recently we have been asked the question - do you consider Open-AudIT more secure than other similar programs? As with most things, the answer is <i>it depends</i>.<br><br>Open-AudIT can be operated in such a way as to be extremely secure. But as usual with computer-based security, the more secure you wish to make something, the more inconvenient it becomes to use. The old phrase <i>the most secure computer is one that is turned off and in the cupboard<i> comes to mind.<br><br>Below we will outline some options that can be used with Open-AudIT that will increase security. Like most items within Open-AudIT, these are options and not mandatory. How far you take security is up to you.'] = 'Nemrégiben feltették nekünk a kérdést - Ön szerint az Open- AudIT biztonságosabb, mint más hasonló programok? Mint a legtöbb dolog, a válasz: <i>Attól függ.</i>.<br/><br/>Open- Aud Az IT-t rendkívül biztonságos módon lehet üzemeltetni. De mint mindig, a számítógép-alapú biztonság, minél biztonságosabb szeretne tenni valamit, annál kényelmetlenebb válik használni. A régi mondat. <i>A legbiztonságosabb számítógép az, ami ki van kapcsolva, és a szekrényben<i> Eszembe jut.<br/><br/>Az alábbiakban felvázolunk néhány opciót, amelyek az Open- AudIT segítségével használhatók, ami növeli a biztonságot. Mint a legtöbb elem az Open- AudIT, ezek is lehetőségek, és nem kötelező. Hogy milyen messzire mész, az rajtad múlik.</i></i>';

$GLOBALS["lang"]['Recertification:</strong> Required every three years'] = 'Újratelepítés: Kötelező háromévente';

$GLOBALS["lang"]['Red Query'] = 'Vörös lekérdezés';

$GLOBALS["lang"]['Redirect URI'] = 'URI átirányítása';

$GLOBALS["lang"]['redirect_uri'] = 'Uri átirányítása';

$GLOBALS["lang"]['Redirect Uri'] = 'Uri átirányítása';

$GLOBALS["lang"]['Reduces risk of data breaches and cyber threats'] = 'Az adatok megsértésének és a számítógépes fenyegetések kockázatának csökkentése';

$GLOBALS["lang"]['references'] = 'Hivatkozások';

$GLOBALS["lang"]['References'] = 'Hivatkozások';

$GLOBALS["lang"]['region'] = 'Régió';

$GLOBALS["lang"]['Region'] = 'Régió';

$GLOBALS["lang"]['registered_user'] = 'Regisztrált felhasználó';

$GLOBALS["lang"]['Registered User'] = 'Regisztrált felhasználó';

$GLOBALS["lang"]['Rejected'] = 'Elutasítva';

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

$GLOBALS["lang"]['Repeat until you have a completely discovered and audited Windows PC.'] = 'Ismételje meg, amíg van egy teljesen felfedezett és ellenőrzött Windows PC.';

$GLOBALS["lang"]['Report'] = 'Jelentés';

$GLOBALS["lang"]['Report on your devices, networks and more'] = 'Jelentés az eszközökről, hálózatokról és még több';

$GLOBALS["lang"]['reportable'] = 'Adatszolgáltatásra kötelezett pénzügyi intézmény';

$GLOBALS["lang"]['Reportable'] = 'Adatszolgáltatásra kötelezett pénzügyi intézmény';

$GLOBALS["lang"]['Reports'] = 'Jelentések';

$GLOBALS["lang"]['request'] = 'Kérelem';

$GLOBALS["lang"]['Request'] = 'Kérelem';

$GLOBALS["lang"]['Request Method'] = 'Kérelmezési módszer';

$GLOBALS["lang"]['Request Vulnerability'] = 'Sebezhetőségi kérelem';

$GLOBALS["lang"]['Request a Specific CVE'] = 'Egyedi kérelem CVE';

$GLOBALS["lang"]['requested'] = 'Kérelmezett';

$GLOBALS["lang"]['Requested'] = 'Kérelmezett';

$GLOBALS["lang"]['require_port'] = 'Előírt kikötő';

$GLOBALS["lang"]['Require Port'] = 'Előírt kikötő';

$GLOBALS["lang"]['Require an Open Port'] = 'Nyitott port igénylése';

$GLOBALS["lang"]['Required'] = 'Szükséges';

$GLOBALS["lang"]['Required AWS user permissions'] = 'Szükséges AWS felhasználói engedélyek';

$GLOBALS["lang"]['Required Fields'] = 'Szükséges mezők';

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

$GLOBALS["lang"]['Resulting Function'] = 'Eredményfunkció';

$GLOBALS["lang"]['Results'] = 'Eredmények';

$GLOBALS["lang"]['Retrieve a list of devices in the'] = 'Szerezze meg az eszközök listáját a';

$GLOBALS["lang"]['Retrieve a list of devices with OS Name like Windows 2008'] = 'A Windows 2008-hoz hasonló OS nevű eszközök listájának letöltése';

$GLOBALS["lang"]['Retrieve all details about the device with id 88.'] = 'Az eszköz minden részletének lekérdezése az ID 88-mal.';

$GLOBALS["lang"]['Retrieve all devices running Windows.'] = 'Minden Windows-t futtató eszköz letöltése.';

$GLOBALS["lang"]['Retrieve all devices with the standard columns'] = 'Minden eszköz letöltése a szabványos oszlopokkal';

$GLOBALS["lang"]['Retrieve the first 10 devices running Windows ordered by hostname'] = 'Az első 10 eszköz letöltése, a Windows futtatása a hostname alapján';

$GLOBALS["lang"]['Retrieve the properties id, ip, hostname, domain, type from all devices'] = 'Távolítsa el a tulajdonságok ID, ip, hostname, domain, típus minden eszköz';

$GLOBALS["lang"]['retrieved'] = 'Retrieved';

$GLOBALS["lang"]['Retrieved'] = 'Retrieved';

$GLOBALS["lang"]['retrieved_ident'] = 'Retrieved Ident';

$GLOBALS["lang"]['Retrieved Ident'] = 'Retrieved Ident';

$GLOBALS["lang"]['retrieved_name'] = 'Retrieved Name';

$GLOBALS["lang"]['Retrieved Name'] = 'Retrieved Name';

$GLOBALS["lang"]['Retrieved from the device - Windows:Win32_ComputerSystemProduct, Linux:dmidecode, MacOS:system_profiler, ESXi:vim-cmd hostsvc/hostsummary, HP-UX:machinfo, Solaris:smbios, AIX:uname.'] = 'Retrieved from the device - Windows: Win32 _ ComputerSystemProduct, Linux: dmidecode, MacOS: system _ profiler, ESXi: vim- cmd hostsvc / hostsump, HP- UX: machinfo, Solaris: smbios, AIX: uname.';

$GLOBALS["lang"]['Retrieving a List of Credentials'] = 'A kreditlista letöltése';

$GLOBALS["lang"]['Retrieving or Creating'] = 'Letöltés vagy létrehozás';

$GLOBALS["lang"]['Return a collection of devices with the default set of columns (devices.id, devices.icon, devices.type, devices.name, devices.ip, devices.dns_fqdn, devices.identification, devices.description, devices.manufacturer, devices.os_family, devices.status)'] = 'Visszaadni egy eszközgyűjteményt az alapértelmezett oszlopokkal (devices.id, devices.icon, devices.type, devices.name, devices.ip, devices.dns _ fqdn, devices.identifice.devices.description, devices.master, devices.os _ family, devices.status)';

$GLOBALS["lang"]['Return a list of all Modules installed on Routers'] = 'Vissza egy listát az összes telepített modulok Routers';

$GLOBALS["lang"]['Return an individual device details'] = 'Egy egyedi eszköz visszaadása\\';

$GLOBALS["lang"]['Returns a list of {collection}.'] = 'Visszaadja a {gyűjtemény} listáját.';

$GLOBALS["lang"]['Returns a {collection} details.'] = 'Visszaadja a {collection} adatokat.';

$GLOBALS["lang"]['Reunion'] = 'Reunion';

$GLOBALS["lang"]['Review current practices against ISO 27001 requirements'] = 'A jelenlegi gyakorlat felülvizsgálata az ISO 27001 követelményekkel szemben';

$GLOBALS["lang"]['revision'] = 'Felülvizsgálat';

$GLOBALS["lang"]['Revision'] = 'Felülvizsgálat';

$GLOBALS["lang"]['risk_assesment_result'] = 'Kockázatértékelés eredménye';

$GLOBALS["lang"]['Risk Assesment Result'] = 'Kockázatértékelés eredménye';

$GLOBALS["lang"]['Risk Assessment & Treatment'] = 'Kockázatértékelés és kezelés';

$GLOBALS["lang"]['Risk Management'] = 'Kockázatkezelés';

$GLOBALS["lang"]['Role'] = 'Szerep';

$GLOBALS["lang"]['roles'] = 'Színpad';

$GLOBALS["lang"]['Roles'] = 'Színpad';

$GLOBALS["lang"]['Roles can only be created and edited if you have an Open-AudIT Enterprise license. For most users, the default set of Roles should be all that is required.'] = 'A szerepeket csak akkor lehet létrehozni és szerkeszteni, ha van Open- AudIT Enterprise engedélyed. A legtöbb felhasználó számára, az alapértelmezett sor a Rolles kell minden, ami szükséges.';

$GLOBALS["lang"]['Romania'] = 'Románia';

$GLOBALS["lang"]['Romanian'] = 'román';

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

$GLOBALS["lang"]['Rules are created and run against a device when the device is discovered or an audit result is processed. Rules can be used to set a device attribute based on other attributes.<br><br>NOTE - At present we cannot delete a rule input or output that contains a /. This is because the framework is parsing the / as part of the URL and returning a 404, even before our code runs. The work-around for this is to delete the Rule itself, then recreate the inputs and outputs as required. Fortunately inputs and outputs that contain a / are rare (indeed, none exist by default).'] = 'Szabályok jönnek létre, és fut egy eszköz, ha a készülék felfedezése vagy az ellenőrzési eredmény feldolgozása. A szabályok más attribútumokon alapuló eszköz attribútum beállításához használhatók.<br/><br/>MEGJEGYZÉS - Jelenleg nem törölhetjük a /. Ez azért van, mert a keret az URL részét képezi, és egy 404-est ad vissza, még mielőtt a kódunk elindul. A munka erre az, hogy törölje a szabály maga, majd újra a bemenetek és kimenetek szükség szerint. Szerencsére bemenetek és kimenetek, amelyek tartalmaznak egy / vannak ritka (valóban nem létezik alapértelmezés szerint).';

$GLOBALS["lang"]['Run Discovery'] = 'Run Discovery';

$GLOBALS["lang"]['Run Discovery on Devices'] = 'Run Discovery on Devices';

$GLOBALS["lang"]['Run Your Discovery'] = 'Run Your Discovery';

$GLOBALS["lang"]['Run a Command'] = 'Parancsot futtatni';

$GLOBALS["lang"]['Run a discovery and find out <b>Whats On Your Network?</b>'] = 'Futtass le egy felfedezést és derítsd ki, <b>Mi van a hálózatodon?</b>';

$GLOBALS["lang"]['Run the script by typing <code>cscript test_windows_client.vbs</code> in the console.'] = 'A szkript lefuttatása gépeléssel <code>cscript test_windows_client.vbs</code> A konzolban.';

$GLOBALS["lang"]['Run this Command'] = 'A parancs futtatása';

$GLOBALS["lang"]['runas'] = 'Runafélék';

$GLOBALS["lang"]['Runas'] = 'Runafélék';

$GLOBALS["lang"]['Running'] = 'Futtatás';

$GLOBALS["lang"]['Running Open-AudIT Apache Service Under Windows'] = 'Open- AudIT apache szolgáltatás futtatása Windows alatt';

$GLOBALS["lang"]['Russian'] = 'Orosz';

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

$GLOBALS["lang"]['SAN Audit'] = 'SAN Audit';

$GLOBALS["lang"]['SAN Auto-Discover'] = 'SAN Auto- Discover';

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

$GLOBALS["lang"]['SQL not containing this condition will result in the widget failing to be executed.'] = 'SQL nem tartalmazza ezt a feltételt fog eredményezni a widget nem hajtják végre.';

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

$GLOBALS["lang"]['Save and run the file. Make sure you run the file as an Administrator in order to install it (right click, Run as Administrator).'] = 'Mentse meg és futtassa le az aktát. Győződjön meg róla, hogy futtassa a fájlt, mint egy Administrator annak érdekében, hogy telepítse (jobb klikk, Run mint Administrator).';

$GLOBALS["lang"]['Save as Default'] = 'Mentés alapértelmezésként';

$GLOBALS["lang"]['Save the downloaded file.'] = 'A letöltött fájl elmentése.';

$GLOBALS["lang"]['scaling'] = 'Méretezés';

$GLOBALS["lang"]['Scaling'] = 'Méretezés';

$GLOBALS["lang"]['scan_options'] = 'Keresés beállításai';

$GLOBALS["lang"]['Scan Options'] = 'Keresés beállításai';

$GLOBALS["lang"]['Scan Options ID'] = 'A keresési beállítások azonosítója';

$GLOBALS["lang"]['Scan for this port(s) and if detected open, use this port for SSH communication. This is added to the list of Custom TCP Ports above (if not already included), so there is no need to include it in that list as well. Comma seperated, no spaces.'] = 'Keresse meg ezt a portot (portokat), és ha nyitva van, használja ezt a portot SSH kommunikációhoz. Ez a lista a Custom TCP Ports fenti (ha nem szerepel), így nem kell felvenni, hogy a listát is. Elkülönült vessző, nincs hely.';

$GLOBALS["lang"]['Scan the Nmap top number of TCP ports.'] = 'Keresse meg a TCP portok Nmap felső számát.';

$GLOBALS["lang"]['Scan the Nmap top number of UDP ports.'] = 'Keresse meg az Nmap felső számát UDP ports.';

$GLOBALS["lang"]['schedule'] = 'Menetrend';

$GLOBALS["lang"]['Schedule'] = 'Menetrend';

$GLOBALS["lang"]['Scheduled device discovery and reporting make Open-AudIT Professional an efficient solution for busy IT professionals looking to reduce overheads and increase insights.'] = 'Tervezett eszköz felfedezés és jelentés teszi Open- AudIT Professional hatékony megoldás a elfoglalt informatikai szakemberek keres, hogy csökkentse az általános költségeket és növeli a betekintést.';

$GLOBALS["lang"]['Scheduling - discovery, reporting &amp; more'] = 'Tervezés - felfedezés, jelentés és több';

$GLOBALS["lang"]['scope'] = 'Hatály';

$GLOBALS["lang"]['Scope'] = 'Hatály';

$GLOBALS["lang"]['Scope is known as Authorization Scope, representing whether a vulnerability affects resources beyond the original security authority of the vulnerable component.<br><br>The only two valid values for this attribute are'] = 'Az alkalmazási kör az engedélyezési alkalmazási kör, amely azt jelöli, hogy a sebezhetőség a veszélyeztetett komponens eredeti biztonsági hatóságán kívüli forrásokat érint-e.<br/><br/>Ennek az attribútumnak csak két érvényes értéke van:';

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

$GLOBALS["lang"]['Searching Using DataTables'] = 'Adattáblák keresése';

$GLOBALS["lang"]['Second'] = 'Második';

$GLOBALS["lang"]['secondary'] = 'Másodlagos';

$GLOBALS["lang"]['Secondary'] = 'Másodlagos';

$GLOBALS["lang"]['Secondary Text'] = 'Másodlagos szöveg';

$GLOBALS["lang"]['Secret Key'] = 'Titkos kulcs';

$GLOBALS["lang"]['section'] = 'szakasz';

$GLOBALS["lang"]['Section'] = 'szakasz';

$GLOBALS["lang"]['secure'] = 'Biztonságos';

$GLOBALS["lang"]['Secure'] = 'Biztonságos';

$GLOBALS["lang"]['Security Content Automation Protocol'] = 'Biztonsági tartalom automatizálási protokoll';

$GLOBALS["lang"]['Security Level'] = 'Biztonsági szint';

$GLOBALS["lang"]['Security Name'] = 'Biztonsági név';

$GLOBALS["lang"]['Security Status'] = 'Biztonsági állapot';

$GLOBALS["lang"]['security_zone'] = 'Biztonsági zóna';

$GLOBALS["lang"]['Security Zone'] = 'Biztonsági zóna';

$GLOBALS["lang"]['See above. NOTE - This could also be caused by a self-signed certificate on the LDAP server. We are working to allow for this in a future release.'] = 'Lásd fent. MEGJEGYZÉS - Ezt okozhatja az LDAP szerveren egy önjelölt tanúsítvány is. Dolgozunk azon, hogy ezt a jövőben is lehetővé tegyük.';

$GLOBALS["lang"]['See our page on enabling'] = 'Lásd az alábbi oldalt:';

$GLOBALS["lang"]['Seed Discoveries'] = 'Vetőmagok';

$GLOBALS["lang"]['seed_ip'] = 'Vetőmag IP';

$GLOBALS["lang"]['Seed IP'] = 'Vetőmag IP';

$GLOBALS["lang"]['seed_ping'] = 'Vetőmagping';

$GLOBALS["lang"]['Seed Ping'] = 'Vetőmagping';

$GLOBALS["lang"]['seed_restrict_to_private'] = 'Seed Restrige To Private';

$GLOBALS["lang"]['Seed Restrict To Private'] = 'Seed Restrige To Private';

$GLOBALS["lang"]['seed_restrict_to_subnet'] = 'Seed Restirty To Subnet';

$GLOBALS["lang"]['Seed Restrict To Subnet'] = 'Seed Restirty To Subnet';

$GLOBALS["lang"]['Select'] = 'Kijelölés';

$GLOBALS["lang"]['Select Admin -> Tasks -> Create Task from the menu.'] = 'Admin kiválasztása - > Feladatok - > Létrehozás A menü feladata.';

$GLOBALS["lang"]['Select All'] = 'Az összes kiválasztása';

$GLOBALS["lang"]['Select All Devices'] = 'Minden eszköz kiválasztása';

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

$GLOBALS["lang"]['Select Menu -> Manage -> Baselines -> List Baselines.'] = 'Menü kiválasztása - > Kezelés - > Alapok - > Lista Alapok.';

$GLOBALS["lang"]['Select a Table'] = 'Táblázat';

$GLOBALS["lang"]['Select an accredited certification body'] = 'Az akkreditált tanúsító szerv kiválasztása';

$GLOBALS["lang"]['Select and apply appropriate controls (Annex A)'] = 'Megfelelő kezelőszervek kiválasztása és alkalmazása (A. melléklet)';

$GLOBALS["lang"]['Select the <i>COM Security</i> tab<br><br>Click on Access Permissions Edit Default'] = 'Válassza ki a <i>COM Biztonság</i> tab<br/><br/>Kattintson a hozzáférési engedélyekre Alapértelmezés módosítása';

$GLOBALS["lang"]['Select the <i>Sign On</i> tab and copy the value for <i>Issuer</i> (just the URL itself). Paste this into the Open-AudIT <i>Issuer</i> field.'] = 'Válassza ki a <i>Aláírás</i> tab és másolja az értéket <i>Kibocsátó</i> (csak az URL maga). Ezt helyezze be az Open- AudIT fájlba <i>Kibocsátó</i> mező.';

$GLOBALS["lang"]['Select the <i>This Account</i> checkbox and provide the account name and password.'] = 'Válassza ki a <i>Ez a számla</i> ellenőrződoboz és adja meg a számla nevét és jelszavát.';

$GLOBALS["lang"]['Select the Start menu and type <i>services<.i>. Click the Services icon.'] = 'Válassza ki a Start menüt és típusát <i>szolgáltatások < .i >. Kattintson a Szolgáltatások ikonra.</i>';

$GLOBALS["lang"]['Select the type of Auth Menthod to create and input the relevant details.'] = 'Válassza ki az Auth Menthod típusát a vonatkozó adatok létrehozásához és beviteléhez.';

$GLOBALS["lang"]['Self Delete'] = 'Öntörlés';

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

$GLOBALS["lang"]['Servers Only'] = 'Csak kiszolgálók';

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

$GLOBALS["lang"]['Service Under Windows'] = 'Szolgáltatás Windows alatt';

$GLOBALS["lang"]['service_version'] = 'Szolgáltatási verzió';

$GLOBALS["lang"]['Service Version'] = 'Szolgáltatási verzió';

$GLOBALS["lang"]['Set'] = 'Beállítás';

$GLOBALS["lang"]['set_by'] = 'Beállítás';

$GLOBALS["lang"]['Set By'] = 'Beállítás';

$GLOBALS["lang"]['Set by the Discovery function - do not normally set this manually.'] = 'A Discovery funkció által beállítva - ne állítsuk be ezt manuálisan.';

$GLOBALS["lang"]['Set by the audit_domain or discover_domain scripts. Do not set.'] = 'Az audit _ domain vagy a display _ domain szkriptek által beállítva. Ne állítsd be!';

$GLOBALS["lang"]['Set the external text to capitalized version of the internal data.'] = 'Állítsa be a külső szöveget a belső adatok tőkésített változatához.';

$GLOBALS["lang"]['Set the external text to lowercase.'] = 'Állítsa be a külső szöveget alacsonyra.';

$GLOBALS["lang"]['Set the external text to uppercase.'] = 'Állítsa be a külső szöveget nagybetűvé.';

$GLOBALS["lang"]['Set the size (normal or compact) of the tables on the List screens.'] = 'Állítsa be a táblázatok méretét (normál vagy kompakt) a Lista képernyőin.';

$GLOBALS["lang"]['Set this if you wish to insert systems from AD that may not be contactable, but have been seen by AD since that date.'] = 'Állítsa be ezt, ha az AD olyan rendszereit szeretné behelyezni, amelyek nem érintkezhetők, de az AD ezen időpont óta látta őket.';

$GLOBALS["lang"]['Setting up Discovery on a subnet is almost identical to running a regular Discovery via the web interface. The only additional items are the scheduled hour and day(s) and a name for the Scheduled Task itself. You can take advantage of this to schedule multiple discoveries using different sets of credentials.<br><br>As per the Subnet Discovery, the Active Directory Discovery is also simply the same fields as a regular Active Directory Discovery with the addition of a day, hour(s) and name.<br><br>If the Open-AudIT Server has Collectors reporting to it, an additional drop down is provided. You can select this to specify which Collector the task should run on. Only Discovery tasks are supported for Collectors. Specify the same items as a regular Discovery, but provide the alternate Collector to run this task.'] = 'A Discovery felállítása egy alhálózaton majdnem azonos egy normál Discovery futtatásával a web felületen. Az egyetlen további elem a tervezett óra és nap (ok), valamint a tervezett feladat neve. Ezt kihasználhatja, hogy több felfedezést is beütemezzen különböző megbízólevelekkel.<br/><br/>Ahogy a Subnet Discovery, az Active Directory Discovery is egyszerűen ugyanazt a mezőt, mint a rendszeres Active Directory Discovery a hozzá egy nap, óra (s) és a név.<br/><br/>Ha az Open- AudIT szerveren a gyűjtők jelentenek neki, akkor további leesés történik. Kiválaszthatja ezt, hogy meghatározza, hogy melyik Collector a feladat fut. Csak a Discovery feladatokat támogatják a gyűjtők. Adja meg ugyanazokat a tételeket, mint a rendszeres felfedezés, de adja meg az alternatív gyűjtő futtatni ezt a feladatot.';

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

$GLOBALS["lang"]['Shipped are a set of default items. These can be found by going to menu'] = 'A leadás alapértelmezett elemek sorozata. Ezek megtalálhatók a menü';

$GLOBALS["lang"]['short'] = 'Rövid';

$GLOBALS["lang"]['Short'] = 'Rövid';

$GLOBALS["lang"]['Should I remove all non-current data from this device?'] = 'Eltávolítsam az összes nem aktuális adatot erről az eszközről?';

$GLOBALS["lang"]['Should this file (or pattern) be used to exclude files from being reported. Normally, to audit files, this is set to <code>y</code>.'] = 'Ha ezt a fájlt (vagy mintát) arra használják, hogy kizárják a fájlokat a jelentésből. Általában az ellenőrzési fájlok, ez a <code>y</code>.';

$GLOBALS["lang"]['Should this vendor be used when retrieving vulnerabilities from FirstWave.'] = 'Ha ezt az eladót használják a FirstWave sebezhetőségeinek megszerzésekor.';

$GLOBALS["lang"]['Should we add devices from the remote service, locally.'] = 'Adjunk hozzá eszközöket a távoli szolgáltatásból, helyi szinten.';

$GLOBALS["lang"]['Should we apply this license to the selected Org as well as the Orgs children?'] = 'Alkalmazzuk ezt az engedélyt a kiválasztott Org-ra és az Orgs-gyerekekre is?';

$GLOBALS["lang"]['Should we audit a SAN if the management software is detected.'] = 'Ellenőrizzünk egy SAN-t, ha a kezelő szoftvert észlelik.';

$GLOBALS["lang"]['Should we audit mount points.'] = 'Ellenőrizzük a pontokat?';

$GLOBALS["lang"]['Should we audit netstat ports (yes, no, servers only).'] = 'Ellenőrizzük a netstat portokat (igen, nem, csak szerverek).';

$GLOBALS["lang"]['Should we audit the installed software.'] = 'Ellenőrizzük a telepített szoftvert?';

$GLOBALS["lang"]['Should we consider a filtered port to be an open port - and therefore flag this IP as having a device attached?'] = 'Tekintsünk egy szűrt portot nyílt portnak, és ezért jelöljük meg ezt az IP-t, mint egy eszközt?';

$GLOBALS["lang"]['Should we consider an open|filtered port to be an open port - and therefore flag this IP as having a device attached?'] = 'Tekintsünk egy nyitott 124-es; szűrt portot nyílt portnak - és ezért jelöljük meg ezt az IP-t, mint egy eszközt?';

$GLOBALS["lang"]['Should we convert the hostname to lowercase.'] = 'Átalakíthatnánk a hostname-ot kisbetűvé.';

$GLOBALS["lang"]['Should we create a file based on the audit result.'] = 'Készítsünk egy fájlt az ellenőrzés eredménye alapján.';

$GLOBALS["lang"]['Should we expose this group in the web interface.'] = 'Ha leleplezzük ezt a csoportot a web interfészben.';

$GLOBALS["lang"]['Should we expose this query in the list of reports under the Report menu in the web interface.'] = 'Ha felfedjük ezt a kérdést a jelentés menüpont alatt a webes felületen lévő jelentések listáján.';

$GLOBALS["lang"]['Should we expose this query in the list of reports under the Reports menu in the web interface.'] = 'Ha ezt a lekérdezést közzétesszük a Jelentések menüpont alatt a webes felületen.';

$GLOBALS["lang"]['Should we hide the audit script window when executing.'] = 'El kellene rejtenünk a könyvvizsgálati forgatókönyvet, amikor végrehajtjuk.';

$GLOBALS["lang"]['Should we ignore an invalid or self signed SSL certificate and submit the result anyway.'] = 'Ha figyelmen kívül hagyunk egy érvénytelen vagy saját aláírással ellátott SSL tanúsítványt, és mindenképpen benyújtjuk az eredményt.';

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

$GLOBALS["lang"]['Should we retrieve all DNS names'] = 'Visszaszerezzük az összes DNS nevet?';

$GLOBALS["lang"]['Should we run an audit and submit it (y/n).'] = 'Vizsgáljuk meg és nyújtsuk be (y / n).';

$GLOBALS["lang"]['Should we test for SNMP using UDP port 161.'] = 'Teszteljük az SNMP-t az UDP 161-es portjával?';

$GLOBALS["lang"]['Should we test for SSH using TCP port 22.'] = 'A 22-es TCP port segítségével teszteljük az SSH-t.';

$GLOBALS["lang"]['Should we test for WMI using TCP port 135.'] = 'Teszteljük WMI-re a TCP 135-ös portját?';

$GLOBALS["lang"]['Should we uninstall the agent (y/n).'] = 'Ha eltávolítjuk az ügynököt (y / n).';

$GLOBALS["lang"]['Should we use the system or user level proxy to submit the audit result.'] = 'Ha a rendszer vagy felhasználói szintű proxy-t használjuk az ellenőrzés eredményeinek benyújtására.';

$GLOBALS["lang"]['Should we use the win32_product WMI class (not recommended by Microsoft) when retrieving installed software.'] = 'Ha a win32 _ product WMI osztályt használjuk (a Microsoft nem ajánlja) telepített szoftver lekérdezésekor.';

$GLOBALS["lang"]['Should we use this method to authenticate user credentials. Set to <code>y</code> or <code>n</code>.'] = 'Használjuk ezt a módszert a felhasználói adatok hitelesítésére? Beállítás <code>y</code> vagy <code>n</code>.';

$GLOBALS["lang"]['Should we use this method to populate a users roles. The field <code>use_auth</code> must be set to <code>y</code> to use this. Set to <code>y</code> or <code>n</code>.'] = 'Ha ezt a módszert használjuk a felhasználói szerepek népszerűsítésére. A mező <code>use_auth</code> be kell állítani: <code>y</code> Ezt használni. Beállítás <code>y</code> vagy <code>n</code>.';

$GLOBALS["lang"]['Should we use this value to match external and internal devices. Our default Integration uses IP and UUID here. If either of these match between external and internal device, we consider them to be the same device.'] = 'Használjuk ezt az értéket a külső és belső eszközök egyezésére. Alapértelmezés szerint az Integráció IP-t és UUID-t használ itt. Ha bármelyik egyezés a külső és a belső eszköz között, akkor ugyanaz a szerkezet.';

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

$GLOBALS["lang"]['Slovak'] = 'Szlovákia';

$GLOBALS["lang"]['Slovakia (Slovak Republic)'] = 'Szlovákia (Szlovákia)';

$GLOBALS["lang"]['Slovenia'] = 'Szlovénia';

$GLOBALS["lang"]['Slovenian'] = 'Szlovénia';

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

$GLOBALS["lang"]['So a script is not working on a recalcitrant device. Grrr. The scripts for Windows, Linux, and MacOS all accept the debugging argument. This can be set in the script itself, or provided on the command line. Run the script using that option set to 5 and you should see in which section of the script the failure occurs. For example'] = 'Tehát egy forgatókönyv nem működik egy visszaeső eszközön. Grrr. A Windows, Linux és MacOS szkriptek mindegyike elfogadja a hibakeresési érvet. Ez beállítható magában a szkriptben, vagy a parancssorban. Futtasd le a szkriptet ezzel az opcióval, és nézd meg, melyik részben történik a hiba. Például';

$GLOBALS["lang"]['So apart from a regular word, what other options are there - I am glad you asked! As per the standard Open-AudIT API, we have several operators for filtering. Operators that can precede the value are'] = 'Tehát eltekintve egy rendszeres szót, milyen más lehetőségek vannak - örülök, hogy megkérdezte! A standard Open- AudIT API szerint számos operátorunk van szűrésre. Az értéket megelőző gazdasági szereplők:';

$GLOBALS["lang"]['So you have an issue providing Open-AudIT credentials to discover your devices. I have an answer - dont then! Sure, I mean, discovery is the best thing since sliced bread. You do not need to know ahead of time <i>Whats On Your Network</i>. But how can you extract data from devices without providing credentials?<br><br>In the case of computers, an easy option is to copy the appropriate audit script to the target machines and set it to execute on a schedule. More details on the wiki. The machines will send their data to Open-AudIT on that schedule, almost as if you were running discovery. The device simply runs the audit script on a schedule (again, you can read the audit script) as the user you tell it to and sends the output to the server. No credentials are involved at all.<br><br>And now we have Agents for Windows. The advantages of an actual installed Agent are'] = 'Tehát van egy probléma, amely Open- AudIT igazolásokat, hogy fedezze fel az eszközök. Van egy válaszom. Persze, a felfedezés a legjobb dolog a szeletelt kenyér óta. Nem kell előre tudnod. <i>Mi a hálózat</i>. De hogyan lehet adatokat kinyerni az eszközökből anélkül, hogy hitelesítő?<br/><br/>Számítógépek esetében az egyszerű lehetőség a megfelelő könyvvizsgálati szkript másolása a célgépekhez, és a program végrehajtása. További részletek a wiki-ről. A gépek elküldik az adataikat az Open- AudIT-nak, mintha a felfedezést futtatnák. Az eszköz egyszerűen futtatja az audit script egy menetrend (ismét, akkor olvassa el az audit script), mint a felhasználó azt mondja, és elküldi a kimenetet a szerver. Egyáltalán nincs benne.<br/><br/>És most vannak Windows ügynökeink. Az előnyök egy ténylegesen telepített ügynök:';

$GLOBALS["lang"]['socket'] = 'Zokni';

$GLOBALS["lang"]['Socket'] = 'Zokni';

$GLOBALS["lang"]['software'] = 'Szoftver';

$GLOBALS["lang"]['Software'] = 'Szoftver';

$GLOBALS["lang"]['Software Found Last 7 Days'] = 'Szoftver talált utolsó 7 nap';

$GLOBALS["lang"]['Software Found Today'] = 'Szoftver talált ma';

$GLOBALS["lang"]['Software Found Yesterday'] = 'Szoftver talált tegnap';

$GLOBALS["lang"]['software_key'] = 'Szoftverkulcs';

$GLOBALS["lang"]['Software Key'] = 'Szoftverkulcs';

$GLOBALS["lang"]['Software License Reporting'] = 'Szoftverlicenc bejelentése';

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

$GLOBALS["lang"]['Some collections can be executed - queries, etc - see below.'] = 'Néhány gyűjtemény végrehajtható - lekérdezések, stb - lásd alább.';

$GLOBALS["lang"]['Some examples are at the bottom of this page. All endpoints also have a minimum list of required fields. These are below.'] = 'Néhány példa a lap alján található. Valamennyi végpont tartalmazza az előírt mezők minimális listáját is. Ezek lent vannak.';

$GLOBALS["lang"]['Some of our templates support the new move to dataTables, using server side processing. This massivley improves load times.'] = 'Néhány sablonunk támogatja az új lépést az adattáblák, a szerver oldalán feldolgozás. Ez a massivley javítja a terhelést.';

$GLOBALS["lang"]['Some other error has occurred when attempting to bind to the LDAP server. It is contactable (ie, the <i>connect</i> above has worked), but for some other reason, binding has not occurred. Check the logs on the LDAP server.'] = 'Az LDAP szerverhez való kapcsolódáskor más hiba is előfordult. Kapcsolható (azaz <i>kapcsolat</i> a fentiek szerint), de valamilyen más oknál fogva, nem történt kötelező erejű. Ellenőrizze az LDAP kiszolgáló naplóit.';

$GLOBALS["lang"]['Something has gone seriously wrong. Open-AudIT cannot read the <i>orgs</i> table.'] = 'Valami nagyon rosszul sült el. Open- AudIT nem tudja elolvasni a <i>létra</i> Asztal.';

$GLOBALS["lang"]['Something has gone seriously wrong. Open-AudIT cannot read the <i>roles</i> table.'] = 'Valami nagyon rosszul sült el. Open- AudIT nem tudja elolvasni a <i>szerepek</i> Asztal.';

$GLOBALS["lang"]['Sometimes agentless discovery just does not fit your use-case. Maybe your PCs have tight firewalls. Maybe they are not on the network when your discoveries are scheduled. Maybe they are used by remote workers. Whatever the case, this is where an agent can help. Install it on the target machine and it will <i>check-in</i> with your Open-AudIT server on a schedule and accept tasks. The most common task the server requests is for the agent to audit itself and send the result.'] = 'Néha a féktelen felfedezés nem illik a maga ügyéhez. Lehet, hogy a PC-knek tűzfaluk van. Talán nincsenek a hálózaton, amikor a felfedezéseid be vannak ütemezve. Talán távoli munkások használják őket. Bármi is az eset, itt segíthet egy ügynök. Telepítse a célgépre, és ez <i>check - in</i> Open- AudIT kiszolgálójával a menetrend szerint, és elfogadja a feladatokat. A leggyakoribb feladat, amit a kiszolgáló kér, hogy az ügynök ellenőrizze magát, és küldje el az eredményt.';

$GLOBALS["lang"]['Sort'] = 'Rendezés';

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

$GLOBALS["lang"]['Stage 1: Documentation review'] = '1. szakasz: Dokumentáció felülvizsgálata';

$GLOBALS["lang"]['Stage 2: Implementation and effectiveness review'] = '2. szakasz: A végrehajtás és a hatékonyság felülvizsgálata';

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

$GLOBALS["lang"]['Start a web browser and go to'] = 'Indítsa el a böngészőt és menjen a';

$GLOBALS["lang"]['started_date'] = 'Indítás dátuma';

$GLOBALS["lang"]['Started Date'] = 'Indítás dátuma';

$GLOBALS["lang"]['Starting June 2018 Google has implemented a pay-as-you-go pricing model for the Google Maps Platform APIs. Previously, most users with moderate usage could use Google Maps, which are embedded into opCharts and Open-AudIT Professional/Enterprise, for free. Googles new policy is outlined here,'] = '2018. június eleje A Google egy pay-as-you- go árazási modellt vezetett be a Google Térkép Platform API-k számára. Korábban a legtöbb mérsékelt felhasználású felhasználó ingyen használhatná a Google Maps-ot, amely beágyazódott az opCharts-ba és az Open- AudIT Professional / Enterprise-ba. A googles új politikáját itt vázoljuk fel,';

$GLOBALS["lang"]['Starts With'] = 'Kezdődik';

$GLOBALS["lang"]['state'] = 'Állam';

$GLOBALS["lang"]['State'] = 'Állam';

$GLOBALS["lang"]['Stats'] = 'Statok';

$GLOBALS["lang"]['status'] = 'Állapot';

$GLOBALS["lang"]['Status'] = 'Állapot';

$GLOBALS["lang"]['Storage'] = 'Tárolás';

$GLOBALS["lang"]['storage_count'] = 'Tárolási szám';

$GLOBALS["lang"]['Storage Count'] = 'Tárolási szám';

$GLOBALS["lang"]['Storage area network'] = 'Tárolóterület-hálózat';

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

$GLOBALS["lang"]['Submit Online'] = 'Küldés online';

$GLOBALS["lang"]['Submitted From'] = 'Benyújtva';

$GLOBALS["lang"]['Subnet'] = 'Alhálózat';

$GLOBALS["lang"]['Subnet Discoveries'] = 'Alnetes leválasztások';

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

$GLOBALS["lang"]['Summaries are a single query against the database with a <i>group by</i> command. Using this simple method we can easily create a summary for virtually any attribute.<br><br>We no longer require a separate report for each <i>type</i> of a device. We now simply have a summary that groups by <i>devices.type</i> and shows the result. You can then click on a given type from the list and see the matching devices. In this case, one Summary replaces (potentially) 78 reports (there are 78 device types).<br><br>A summary is different to a query in that a summary is designed to group items by a given attribute then provide a <i>click through</i> link to the actual devices. A query is simply a list of items with no further links. As above - this of a Summary as a combined <i>report + subreport</i>, whereas a query is simply a single Report.<br><br>Summaries have a different collection template to the other resources within Open-AudIT. This template shows the Summary as you would expect and also shows buttons with counts of other resources. This page is designed to be the HomePage of Open-AudIT.'] = 'Summaries egyetlen kérdés ellen adatbázis <i>csoport</i> Parancsnokság. Ezzel az egyszerű módszerrel könnyen létrehozhatunk egy összefoglalót gyakorlatilag bármilyen attribútum.<br/><br/>Már nincs szükségünk külön jelentésre. <i>típus</i> egy eszköz. Most már csak egy összefoglaló, hogy a csoportok <i>eszközök. típus</i> és mutatja az eredményt. Ezután kattinthat egy adott típusra a listáról, és láthatja a megfelelő eszközöket. Ebben az esetben egy összefoglaló (potenciálisan) 78 jelentés helyébe lép (78 eszköztípus létezik).<br/><br/>Az összefoglaló különbözik a lekérdezéstől, mivel az összefoglalót egy adott attribútum alapján csoportosítják a tételeket, majd egy <i>kattintás</i> kapcsolat a tényleges eszközökkel. A lekérdezés egyszerűen egy lista olyan tételekről, amelyek nem tartalmaznak további linkeket. Mint fent - ez az összefoglaló, mint egy kombinált <i>jelentés + részjelentés</i>, míg a lekérdezés egyszerű egyetlen jelentés.<br/><br/>A summaries egy másik gyűjtési sablon, mint a többi forrás Open- AudIT. Ez a sablon mutatja az összefoglalót, ahogy azt elvárnánk, és megmutatja gombok száma más források. Ez az oldal az Open- AudIT honlapjára lett tervezve.';

$GLOBALS["lang"]['Summaries are designed to group items by a particular matching column and then to provide a link to individual devices. In the previous versions of Open-AudIT, this would have been two different items - a report and subreport. We have now bundled these into what we call a Summary.'] = 'Az összefoglalókat arra tervezték, hogy a tételeket egy adott megfelelő oszloppal csoportosítsák, majd az egyes eszközökhöz kapcsolódjanak. Az Open- AudIT korábbi változataiban ez két különböző tétel lett volna: egy jelentés és egy részjelentés. Ezeket most összecsomagoltuk egy összefoglalóval.';

$GLOBALS["lang"]['Summaries provide drilldown reporting capabilities. Simple, intuitive, powerful.'] = 'A summaries-ok adatkezelési lehetőségeket biztosítanak. Egyszerű, intuitív, erős.';

$GLOBALS["lang"]['Summaries take the same arguments as Queries.'] = 'A summaries ugyanazokat az érveket képviseli, mint a Queries.';

$GLOBALS["lang"]['Summary'] = 'Összefoglaló';

$GLOBALS["lang"]['Sunday'] = 'Vasárnap';

$GLOBALS["lang"]['supplier'] = 'Szállító';

$GLOBALS["lang"]['Supplier'] = 'Szállító';

$GLOBALS["lang"]['Support'] = 'Támogatás';

$GLOBALS["lang"]['Supported types are <code>subnet</code>, <code>seed</code> and <code>active directory</code>.'] = 'Támogatott típusok: <code>subnet</code>, <code>seed</code> és <code>active directory</code>.';

$GLOBALS["lang"]['Supports compliance with legal and regulatory requirements'] = 'Támogatja a jogi és szabályozási követelményeknek való megfelelést';

$GLOBALS["lang"]['Suriname'] = 'Suriname';

$GLOBALS["lang"]['Surveillance Audits:</strong> Annual audits to maintain certification'] = 'Felügyeleti ellenőrzések: Éves ellenőrzések a tanúsítás fenntartása érdekében';

$GLOBALS["lang"]['Svalbard & Jan Mayen Islands'] = 'Svalbard & Jan Mayen-szigetek';

$GLOBALS["lang"]['Swaziland'] = 'Szváziföld';

$GLOBALS["lang"]['Sweden'] = 'Svédország';

$GLOBALS["lang"]['Swedish'] = 'Svédország';

$GLOBALS["lang"]['switch_device_id'] = 'A kapcsolóeszköz azonosítója';

$GLOBALS["lang"]['Switch Device ID'] = 'A kapcsolóeszköz azonosítója';

$GLOBALS["lang"]['switch_port'] = 'Port kapcsolása';

$GLOBALS["lang"]['Switch Port'] = 'Port kapcsolása';

$GLOBALS["lang"]['Switzerland, Swiss Confederation'] = 'Svájc, Svájci Államszövetség';

$GLOBALS["lang"]['Symptom'] = 'Szimulált';

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

$GLOBALS["lang"]['Table'] = 'Táblázat';

$GLOBALS["lang"]['tag'] = 'Tag';

$GLOBALS["lang"]['Tag'] = 'Tag';

$GLOBALS["lang"]['tag_1'] = 'Tag 1';

$GLOBALS["lang"]['Tag 1'] = 'Tag 1';

$GLOBALS["lang"]['tag_2'] = '2. elem';

$GLOBALS["lang"]['Tag 2'] = '2. elem';

$GLOBALS["lang"]['tag_3'] = '3. elem';

$GLOBALS["lang"]['Tag 3'] = '3. elem';

$GLOBALS["lang"]['Tagalog'] = 'Tagalog';

$GLOBALS["lang"]['tags'] = 'Címkék';

$GLOBALS["lang"]['Tags'] = 'Címkék';

$GLOBALS["lang"]['Tags :: '] = 'Címkék: ';

$GLOBALS["lang"]['Taiwan'] = 'Tajvan';

$GLOBALS["lang"]['Tajikistan'] = 'Tádzsikisztán';

$GLOBALS["lang"]['Take note of all output and action each item as appropriate.'] = 'Figyelembe kell venni az összes kimenetet és műveletet minden elem, ha szükséges.';

$GLOBALS["lang"]['Tanzania'] = 'Tanzánia';

$GLOBALS["lang"]['Target Computer'] = 'Célszámítógép';

$GLOBALS["lang"]['task'] = 'Feladat';

$GLOBALS["lang"]['Task'] = 'Feladat';

$GLOBALS["lang"]['tasks'] = 'Feladatok';

$GLOBALS["lang"]['Tasks'] = 'Feladatok';

$GLOBALS["lang"]['Tasks can be one of several distinct types: Baseline, Discovery, Report, Query, Summary or Collector.'] = 'A feladatok lehetnek az egyik különböző típusok: alapvonal, felfedezés, jelentés, lekérdezés, összefoglaló vagy gyűjtő.';

$GLOBALS["lang"]['tcp_ports'] = 'Tcp Ports';

$GLOBALS["lang"]['Tcp Ports'] = 'Tcp Ports';

$GLOBALS["lang"]['Technical Details'] = 'Technikai részletek';

$GLOBALS["lang"]['tenant'] = 'Bérlő';

$GLOBALS["lang"]['Tenant'] = 'Bérlő';

$GLOBALS["lang"]['Tenant ID'] = 'Bérlő azonosítója';

$GLOBALS["lang"]['Tennant ID'] = 'A feszültség azonosítója';

$GLOBALS["lang"]['ternary'] = 'Ternary';

$GLOBALS["lang"]['Ternary'] = 'Ternary';

$GLOBALS["lang"]['Test 1'] = 'vizsgálat';

$GLOBALS["lang"]['Test 2'] = 'vizsgálat';

$GLOBALS["lang"]['Test 3'] = 'vizsgálat';

$GLOBALS["lang"]['Test Email'] = 'E-mail tesztelése';

$GLOBALS["lang"]['test_minutes'] = 'Vizsgálati jegyzőkönyv';

$GLOBALS["lang"]['Test Minutes'] = 'Vizsgálati jegyzőkönyv';

$GLOBALS["lang"]['test_os'] = 'Vizsgálati Os';

$GLOBALS["lang"]['Test Os'] = 'Vizsgálati Os';

$GLOBALS["lang"]['test_subnet'] = 'Vizsgálati alháló';

$GLOBALS["lang"]['Test Subnet'] = 'Vizsgálati alháló';

$GLOBALS["lang"]['tests'] = 'Vizsgálatok';

$GLOBALS["lang"]['Tests'] = 'Vizsgálatok';

$GLOBALS["lang"]['Text'] = 'Szöveg';

$GLOBALS["lang"]['Thai'] = 'Thai';

$GLOBALS["lang"]['Thailand'] = 'Thaiföld';

$GLOBALS["lang"]['Thank you for starting your journey with the best discovery and inventory tool around.'] = 'Köszönjük, hogy a legjobb felfedező és leltározó eszközzel kezdte útját.';

$GLOBALS["lang"]['Thanks to'] = 'Köszönöm';

$GLOBALS["lang"]['Thats it! You have just edited the attributes of as many devices as you need to.'] = 'Ez az! Épp most szerkesztette meg annyi eszköz tulajdonságait, amennyi szükséges.';

$GLOBALS["lang"]['The <i>Roles</i> endpoint allows you to manage the set of permissions(Create, Read, Update, Delete) that are granted to the users and are applied to each endpoint.'] = 'A <i>Színpad</i> A végpont lehetővé teszi, hogy kezelje a felhasználóknak megadott és az egyes végpontokra alkalmazott jogosultságokat (Create, Read, Update, Delete).';

$GLOBALS["lang"]['The API uses a cookie. You can request a cookie by sending a POST to the URL below, containing the username and password attributes and values:'] = 'Az API sütit használ. Kérhet egy cookie-t, ha a POST-ot az alábbi URL-be küldi, amely tartalmazza a felhasználónevet és a jelszó attribútumokat és értékeket:';

$GLOBALS["lang"]['The Active Directory domain to retrieve a list of subnets from.'] = 'Az Active Directory domain, hogy megszerezze a lista alhálók.';

$GLOBALS["lang"]['The Active Directory server to retrieve a list of subnets from.'] = 'Az Active Directory szerver az alhálózatok listájának letöltéséhez.';

$GLOBALS["lang"]['The Applications endpoint allows you to define an application which you can then associate to a device (or devices).'] = 'Az Alkalmazások végpontja lehetővé teszi, hogy meghatározzon egy alkalmazást, amelyet aztán egy eszközhöz (vagy eszközökhöz) kapcsolhat.';

$GLOBALS["lang"]['The Attributes endpoint allows you to add customized values to different attributes in Open-AudIT, at the moment this feature works on the Class, Environment, Status and Type attributes on Devices, the Type attribute for both Locations and Orgs as well as the Menu Category for Queries. If you view an item of one of the prvious types (say view a Lkocation) you will notice the Type attribute must be selected from a drop-down box. This is where those values are stored. Hence, if you would like to add a new Type to be chosen for a Location, add it using the Attributes feature.'] = 'Az attribútumok végpontja lehetővé teszi, hogy testreszabott értékeket adjunk az Open- AudIT különböző attribútumaihoz, abban a pillanatban, amikor ez a funkció működik az Osztály-, Környezet-, állapot- és Típusattribútumokon az eszközökön, a Típusattribútumon mind a Helyek, mind az Orgok, valamint a Menu Kategória a lekérdezésekre. Ha megnézi egy elem az egyik pririve típusok (mondja nézd meg az Lkoction) akkor észre fogja venni a Típus attribútum kell választani egy drop-down doboz. Itt tárolják ezeket az értékeket. Ezért, ha szeretne hozzáadni egy új Típus kell választani egy hely, add hozzá a Attribútumok funkció.';

$GLOBALS["lang"]['The Automatable metric captures the answer to the question <strong>Can an attacker automate exploitation events for this vulnerability across multiple targets?</strong> based on steps 1-4 of the kill chain. These steps are reconnaissance, weaponization, delivery, and exploitation (Not Defined, No, Yes).'] = 'Az Automatizálható metrikus rögzíti a választ a kérdésre <strong>Egy támadó képes-e a különböző célpontok közötti sebezhetőséget kihasználni?</strong> A gyilkos lánc 14- es lépései alapján. Ezek a lépések felderítés, fegyverzet, szállítás és kizsákmányolás (Nem meghatározott, Nem, Igen).';

$GLOBALS["lang"]['The CVE has been marked as invalid or withdrawn in the CVE List. It remains in the NVD but is excluded from default search results.'] = 'A CVE-t érvénytelennek nyilvánították vagy visszavonták a CVE-listában. Ez marad az NVD, de nem az alapértelmezett keresési eredmények.';

$GLOBALS["lang"]['The CVE has been published to the CVE List and included in the NVD dataset. Initial ingestion only.'] = 'A CVE-t közzétették a CVE-listában, és szerepel az NVD adatállományban. Csak a kezdeti bevétel.';

$GLOBALS["lang"]['The CVE has been updated after initial analysis. NVD enrichment data may have been revised.'] = 'A CVE-t a kezdeti elemzés után frissítették. Az NVD dúsítási adatait felülvizsgálhatták.';

$GLOBALS["lang"]['The CVE identifier.'] = 'A CVE azonosító.';

$GLOBALS["lang"]['The CVE is actively being enriched with CVSS scores, CWE classifications, reference tags, and CPE applicability.'] = 'A CVE-t aktívan gazdagítják CVSS-pontokkal, CWE-osztályokkal, referenciatáblákkal és CPE-alkalmazhatósággal.';

$GLOBALS["lang"]['The CVE is not currently prioritized for enrichment due to resource constraints or other reasons.'] = 'A CVE-t jelenleg nem részesítik előnyben az erőforrások szűkössége vagy egyéb okok miatt.';

$GLOBALS["lang"]['The CVE is queued for enrichment by NVD analysts. No detailed metadata yet.'] = 'A CVE-t NVD-elemzők állítják sorba dúsításra. Még nincs részletes metaadat.';

$GLOBALS["lang"]['The Cloud that owns this item. Links to <code>clouds.id</code>.'] = 'A Felhő, ami ezt a tárgyat birtokolja. Kapcsolatok <code>clouds.id</code>.';

$GLOBALS["lang"]['The Device Seed Discovery type is the newest highly-effective method for network crawling, giving you the ability to target your network as narrowly or as broadly as you need. It is fast, it works and it is great.'] = 'The Device Seed Discovery type is the new highly-effective method for network crawing, give you the possibility to target your network as knewly or wide as you need. Gyors, működik és nagyszerű.';

$GLOBALS["lang"]['The Discovery Scan Options we ship are detailed in the table below. As above, Enterprise users can create more of these or edit the shipped items.'] = 'A Discovery Scan Az általunk szállított lehetőségeket az alábbi táblázat részletezi. Mint fentebb, az Enterprise felhasználók több ilyen vagy szerkeszti a szállított elemeket.';

$GLOBALS["lang"]['The Elevated User query'] = 'A felemelt felhasználói lekérdezés';

$GLOBALS["lang"]['The Executables feature scans the disk of a device as part of the audit and checks that every executable file is known to the package manager. Because it uses the package manager, the feature applies to Linux target devices only, and further than that, only rpm or deb based distributions. Anything Redhat or Debian based should work.'] = 'A Futtatók az ellenőrzés részeként letapogatják egy eszköz lemezét, és ellenőrzik, hogy minden végrehajtható fájl ismert-e a csomagkezelő számára. Mivel a csomagkezelőt használja, a funkció csak a Linux céleszközökre vonatkozik, és ezen túl csak rpm vagy deb alapú disztribúciókra. Minden Redhat vagy Debian alapnak működnie kell.';

$GLOBALS["lang"]['The FROM'] = 'AZ';

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

$GLOBALS["lang"]['The ISO/IEC 27001 certification process and its key elements.'] = 'Az ISO / IEC 27001 tanúsítási eljárás és annak kulcsfontosságú elemei.';

$GLOBALS["lang"]['The ISP or Telco providing this link.'] = 'A linket szolgáltató ISP vagy Telco.';

$GLOBALS["lang"]['The JSON record from Mitre.'] = 'A JSON lemez Mitre-től.';

$GLOBALS["lang"]['The JSON record from the NVD feed.'] = 'A JSON lemez az NVD-ből.';

$GLOBALS["lang"]['The LDAP OU of this user (if LDAP is used).'] = 'A felhasználó LDAP OU-ja (ha LDAP-ot használnak).';

$GLOBALS["lang"]['The LDAP server could not be connected to. At all. Check it is pingable from the Open-AudIT server. Check the correct port is open to the Open-AudIT server. An nmap from the Open-AudIT server will show this. Substitute your LDAP servers IP for $ip. Try:<code>nmap -vv $ip</code>'] = 'Az LDAP szerver nem kapcsolható. Egyáltalán. Ellenőrizze, hogy az Open- AudIT szerveren keresztül érhető-e el. Ellenőrizze, hogy a megfelelő port nyitva van-e az Open- AudIT szerveren. Egy nmap az Open- AudIT szerverről ezt mutatja. Helyettesítse a LDAP szerverek IP $ip. Próbáld meg:<code>nmap -vv $ip</code>';

$GLOBALS["lang"]['The LDAP server type is invalid. It should be either <i>active directory</i> or <i>openldap</i>.'] = 'Az LDAP szerver típusa érvénytelen. Vagy... <i>aktív könyvtár</i> vagy <i>openldap</i>.';

$GLOBALS["lang"]['The LDAP server was connected to and the user credentials accepted for bind.'] = 'Az LDAP szerver csatlakoztatva volt, és a felhasználói megbízások elfogadva.';

$GLOBALS["lang"]['The Linux Open-AudIT installer will test for and if required, install Open-AudITs dependencies from your distributions repository, including setting the Nmap SetUID. This is required for SNMP (UDP 161) detection by a non-root user. This is supported on RedHat/CentOS and Debian/Ubuntu. If you need to manually install Nmap:<br><br>For RedHat/CentOS do (NOTE - if you upgrade using yum, you will need to reapply this <i>chmod</i> setting).'] = 'A Linux Open- AudIT installer teszteli és szükség esetén telepíti az Open- AudITs függéseket a disztribúciós tárhelyétől, beleértve az Nmap SetUID beállítását. Erre az SNMP (UDP 161) nem root felhasználó általi észleléséhez van szükség. Ezt a RedHat / CentOS és a Debian / Ubuntu is támogatja. Ha kézzel kell telepíteni Nmap:<br/><br/>A RedHat / CentOS do (MEGJEGYZÉS - ha frissíti segítségével yum, akkor újra kell alkalmazni ezt <i>chmod</i> zít';

$GLOBALS["lang"]['The Location that contains this network. Links to <code>locations.id</code>.'] = 'A hálózat helye. Kapcsolatok <code>locations.id</code>.';

$GLOBALS["lang"]['The NVD assigned base status.'] = 'Az NVD bázis státuszt kapott.';

$GLOBALS["lang"]['The National Institute of Standards and Technology is the federal technology agency. They advance official technology, measurement science and standards.'] = 'A Nemzeti Szabványügyi és Technológiai Intézet a szövetségi technológiai ügynökség. A hivatalos technológiát, méréstudományt és szabványokat fejlesztik.';

$GLOBALS["lang"]['The Network to Discover'] = 'A hálózat felfedése';

$GLOBALS["lang"]['The Nmap timing preset.'] = 'A Nmap időzítő beállítás.';

$GLOBALS["lang"]['The OS this package should be reported against. Blank for all. Use the percent sign % as a wildcard. Will be tested against os_group, os_family and os_name in that order.'] = 'Ezt a csomagot jelenteni kell ellene. Mindent elfelejt. Használja a%% -ot vadkártyaként. Az OS _ group, az os _ family és az os _ name ellen lesz tesztelve ebben a sorrendben.';

$GLOBALS["lang"]['The Open-AudIT API'] = 'Az Open- AudIT API';

$GLOBALS["lang"]['The Open-AudIT id of the linked cloud. Links to <code>clouds.id</code>.'] = 'Az összekapcsolt felhő Open- AudIT azonosítója. Kapcsolatok <code>clouds.id</code>.';

$GLOBALS["lang"]['The Open-AudIT server code was exeucted within this file.'] = 'Az Open- Aud Az IT kiszolgáló kódját ebben a fájlban továbbították.';

$GLOBALS["lang"]['The Open-AudIT server code was exeucted within this function.'] = 'Az Open- Aud Az IT kiszolgáló kódját ezen a függvényen belül továbbították.';

$GLOBALS["lang"]['The OpenSCAP ecosystem provides multiple tools to assist administrators and auditors with assessment, measurement, and enforcement of security baselines including a wide variety of hardening guides and configuration baselines developed by the open source community, ensuring that you can choose a security policy which best suits the needs of your organization, regardless of its size.'] = 'Az OpenSCAP-ökoszisztéma számos eszközt kínál a biztonsági alapvonalak értékeléséhez, méréséhez és érvényesítéséhez, beleértve a nyílt forráskódú közösség által kifejlesztett, a keményítő útmutatók és konfigurációs alapvonalak széles választékát, biztosítva, hogy olyan biztonsági politikát választhasson, amely a legjobban megfelel szervezetének, méretétől függetlenül.';

$GLOBALS["lang"]['The OpenSCAP project is a collection of open source tools for implementing and enforcing this standard, and has been awarded the SCAP 1.2 certification by NIST in 2014.'] = 'Az OpenSCAP projekt nyílt forráskódú eszközök gyűjteménye e szabvány végrehajtásához és végrehajtásához, és 2014-ben elnyerte a NIST SCAP 1.2 tanúsítását.';

$GLOBALS["lang"]['The Organisation that owns this item. Links to <code>orgs.id</code>.'] = 'A szervezet, amely ezt a tételt. Kapcsolatok <code>orgs.id</code>.';

$GLOBALS["lang"]['The Process Identifier of the running associated discovery.'] = 'A futáshoz kapcsolódó felfedezés folyamatazonosítója.';

$GLOBALS["lang"]['The RU positon of the top of this device.'] = 'A VT ezen eszköz tetejének póznája.';

$GLOBALS["lang"]['The Racks feature is used to manage and visualize your rack use with an Organisation, Location, Building, Floor, Room and Row.'] = 'A Racks funkció segítségével kezeli és vizualizálja a rack használat egy szervezet, hely, épület, padló, szoba és sor.';

$GLOBALS["lang"]['The SCAP is a specification for expressing and manipulating security data in standardized ways. SCAP uses several individual specifications in concert to automate continuous monitoring, vulnerability management, and security policy compliance evaluation reporting'] = 'Az SCAP a biztonsági adatok szabványosított módon történő kifejezésére és manipulálására vonatkozó előírás. Az SCAP több egyedi specifikációt alkalmaz a folyamatos nyomon követés, a sebezhetőségi kezelés és a biztonsági politika megfelelésének értékelésére vonatkozó jelentés automatizálására.';

$GLOBALS["lang"]['The SELECT'] = 'A SZELECT';

$GLOBALS["lang"]['The SELECT section of the query should use full dot notation and also request the field with its full dot name. IE - SELECT devices.id AS `devices.id`. Each field should be selected in this fashion to enable GUI side attribute filtering.'] = 'A lekérdezés SELECT szakasza a teljes pontjelölést használja, és a mezőt teljes pontnévvel is kéri. IE - SELECT eszközök. ID AS "devices.id". Minden mezőt ebben a formában kell kiválasztani, hogy a GUI oldalsó szűrés lehetővé váljon.';

$GLOBALS["lang"]['The SELECT section of your SQL must contain fully qualified columns and specify certain columns.'] = 'Az SQL SELECT szakaszának teljesen képzett oszlopokat kell tartalmaznia, és meg kell határoznia bizonyos oszlopokat.';

$GLOBALS["lang"]['The SNMP community string.'] = 'Az SNMP közösségi húrja.';

$GLOBALS["lang"]['The SNMP v3 Authentication Passphrase.'] = 'Az SNMP v3 Authentication Passphrase.';

$GLOBALS["lang"]['The SNMP v3 Authentication Protocol.'] = 'Az SNMP v3 hitelesítési protokoll.';

$GLOBALS["lang"]['The SNMP v3 Privacy Passphrase.'] = 'Az SNMP v3 Privacy Passphrase.';

$GLOBALS["lang"]['The SNMP v3 Privacy Protocol.'] = 'Az SNMP v3 adatvédelmi protokoll.';

$GLOBALS["lang"]['The SNMP v3 Security Level.'] = 'Az SNMP v3 biztonsági szint.';

$GLOBALS["lang"]['The SNMP v3 Security Name.'] = 'Az SNMP v3 biztonsági neve.';

$GLOBALS["lang"]['The SNMPv3 context Engine ID (optional).'] = 'Az SNMPv3 szöveges motorazonosító (opcionális).';

$GLOBALS["lang"]['The SNMPv3 context Name (optional).'] = 'Az SNMPv3 kontextus neve (nem kötelező).';

$GLOBALS["lang"]['The SQL cannot contain <strong>WHERE @filter OR</strong>. That SQL will not be executed, however <strong>WHERE @filter AND</strong> queries are allowed.'] = 'Az SQL nem tartalmazhat <strong>Where @ filter OR</strong>. Az SQL-t azonban nem hajtják végre. <strong>Where @ filter AND</strong> Kérdések engedélyezettek.';

$GLOBALS["lang"]['The SQL queries used in Open-AudIT require the use of the backtick - ` character and NOT the standard single quote for fields. On most US Windows keyboards the backtick key is located in the top-left of the keyboard along with the tilde ~. On a US Mac keyboard the backtick key is located next to the SHIFT key. The standard single quote is still used to enclose values as the examples below illustrate.'] = 'Az Open- AudIT-ban használt SQL lekérdezések a backtick - \'karakter használatát igénylik, NEM pedig a mezőkre vonatkozó egységes egységes árajánlatot. A legtöbb US Windows billentyűzeten a backtick gomb a billentyűzet bal felső sarkában található a Tilde ~ -del együtt. Egy US Mac billentyűzeten a backtick gomb a SHIFT gomb mellett található. A standard egyszeri árajánlatot még mindig használják az értékek bekötésére, ahogy azt az alábbi példák szemléltetik.';

$GLOBALS["lang"]['The SQL query is essentially broken into three parts.'] = 'Az SQL lekérdezés lényegében három részre tört.';

$GLOBALS["lang"]['The Standards functionality in Open-AudIT allows you to, ahead of time, complete the questions auditors require when completing ISO 27001 certification.'] = 'Az Open- AudIT standard funkcionalitása lehetővé teszi, hogy időben kitöltse az ISO 27001 tanúsítás elvégzésekor a könyvvizsgálók által igényelt kérdéseket.';

$GLOBALS["lang"]['The URL of the external system.'] = 'A külső rendszer URL-je.';

$GLOBALS["lang"]['The URL of your Open-AudIT Server that this Collector will report to (no trailing slash).'] = 'Az Open- AudIT URL- je Szerver, hogy ez a Gyűjtő fog jelenteni (nincs nyom per).';

$GLOBALS["lang"]['The URL the audit scripts should submit their result to.'] = 'Az URL-nek a könyvvizsgálati forgatókönyvek benyújtják az eredményeket.';

$GLOBALS["lang"]['The User endpoint allows you to manage user accounts within Open-AudIT.'] = 'A felhasználói végpont lehetővé teszi a felhasználói fiókok kezelését az Open- AudIT rendszeren belül.';

$GLOBALS["lang"]['The WHERE'] = 'HOL';

$GLOBALS["lang"]['The WHERE section of your SQL <em>must</em> contain'] = 'Az SQL HERE szakasza <em>kell</em> tartalmaz';

$GLOBALS["lang"]['The Windows'] = 'A Windows';

$GLOBALS["lang"]['The Windows log may say the following'] = 'A Windows napló a következő';

$GLOBALS["lang"]['The account must have a password; WMI does not allow blank passwords.'] = 'A számlának jelszóval kell rendelkeznie; a WMI nem enged üres jelszavakat.';

$GLOBALS["lang"]['The account password must NOT contain \" (double quotes). This is because cscript (and wscript) cannot parse argument values containing double quotes. They are simply stripped. No (before you ask) escaping will not work. This is a cscript limitation and nothing to do with Open-AudIT.'] = 'A fiók jelszó NEM tartalmazhat\ "(dupla idézetek). Ez azért van, mert a cscript (és a wscript) nem képes kettős idézeteket tartalmazó argumentumértékeket elemezni. Egyszerűen levetkőznek. Nem (mielőtt megkérdeznéd) a szökés nem fog működni. Ez egy script korlátozás, és semmi köze az Open- AudIT-hoz.';

$GLOBALS["lang"]['The actual full name of this user.'] = 'A felhasználó teljes neve.';

$GLOBALS["lang"]['The address of the Open-AudIT server submit page.'] = 'Az Open- AudIT kiszolgáló címe.';

$GLOBALS["lang"]['The administrator supplied credentials that were successfully used to bind to LDAP.'] = 'Az adminisztrátor olyan megbízásokat nyújtott be, amelyeket sikeresen használtak az LDAP-hoz való kötődéshez.';

$GLOBALS["lang"]['The administrator supplied credentials to bind to the LDAP server, but they have not been accepted by the LDAP sevrer. Double check the credentials work on the LDAP server, and then check (or reset them) in the Open-AudIT LDAP Server entry.'] = 'A rendszergazda az LDAP szerverhez való kötődéshez nyújtott hitelesítő adatokat, de azokat az LDAP sevrer nem fogadta el. Duplán ellenőrizze az LDAP szerver hitelességét, majd ellenőrizze (vagy állítsa vissza) az Open- AudIT LDAP kiszolgáló bejegyzésében.';

$GLOBALS["lang"]['The agent and server are also intelligent enough to self-update the agent if a newer version is installed on the server (say after upgrading Open-AudIT).'] = 'Az ügynök és a szerver is elég intelligens ahhoz, hogy önfrissítse az ügynököt, ha egy újabb verziót telepítenek a szerverre (mondjuk az Open- AudIT korszerűsítése után).';

$GLOBALS["lang"]['The agent should download a fresh copy of the audit script, run it and submit the result to the server.'] = 'Az ügynöknek le kell töltenie az ellenőrzési szkript friss másolatát, le kell futtatnia, és be kell nyújtania az eredményt a szervernek.';

$GLOBALS["lang"]['The application creates temporary audit scrtips here, copies them to the target machines, then deletes them.'] = 'Az alkalmazás ideiglenes ellenőrzési scraps itt, másolja őket a cél gépek, majd törli őket.';

$GLOBALS["lang"]['The associated baseline. Links to <code>baselines.id</code>.'] = 'A kapcsolódó kiindulási érték. Kapcsolatok <code>baselines.id</code>.';

$GLOBALS["lang"]['The associated discovery (if required). Links to <code>discoveries.id</code>.'] = 'A kapcsolódó felfedezés (ha szükséges). Kapcsolatok <code>discoveries.id</code>.';

$GLOBALS["lang"]['The attribute to test (from the <code>devices</code> table).'] = 'Az attribútum a vizsgálat (a <code>devices</code> táblázat).';

$GLOBALS["lang"]['The attribute to test (must match an external field name from below).'] = 'A vizsgálat attribútuma (meg kell egyeznie egy külső mező nevével lentről).';

$GLOBALS["lang"]['The attributes for discovery scan options are as below.'] = 'A felfedezési scan opciók attribútumai az alábbiak.';

$GLOBALS["lang"]['The audit script upon which to base your customisations.'] = 'A könyvvizsgálati szkript, amire a testreszabásaidat alapozhatod.';

$GLOBALS["lang"]['The audit script will use the files[ ] array and retrieve the file details.'] = 'Az audit script fogja használni a fájlokat [] tömb és a fájl adatait.';

$GLOBALS["lang"]['The audit scripts all accept a debugging argument. You can run the script utilizing that and see in more detail what the issue is. And if you cannot figure it out - that is what we are here for! Open a support case and we will get things running in no time.'] = 'A könyvvizsgálati szkriptek mindegyike elfogadja a hibajavító érvet. Futtathatja a szkriptet ezzel, és részletesebben is láthatja, mi a probléma. És ha nem tudod kitalálni, ezért vagyunk itt! Nyiss egy támogatási ügyet, és pillanatok alatt beindítjuk a dolgokat.';

$GLOBALS["lang"]['The base path from which to search for Users.'] = 'Az alapútvonal, ahonnan kereshetjük a Felhasználókat.';

$GLOBALS["lang"]['The below steps are not the fault of or unique to Open-AudIT and would affect <strong>any</strong> discovery application using remote WMI and/or Windows.'] = 'Az alábbi lépések nem a hibája vagy egyedi Open- AudIT és érintené <strong>bármilyen</strong> felderítő alkalmazás távoli WMI és / vagy Windows használatával.';

$GLOBALS["lang"]['The benchmark type.'] = 'A referenciatípus.';

$GLOBALS["lang"]['The building the rack is located in.'] = 'Az épület az állvány található.';

$GLOBALS["lang"]['The calculated number of devices to be created externally.'] = 'A külsőleg létrehozandó eszközök számított száma.';

$GLOBALS["lang"]['The calculated number of devices to be created in Open-AudIT.'] = 'Az Open- AudIT-ben létrehozandó eszközök számított száma.';

$GLOBALS["lang"]['The client ID is the ID of an Azure Active Directory application. The client secret is the key that you give that application.'] = 'A kliens azonosítója egy Azure Active Directory alkalmazás azonosítója. A kliens titka a kulcs, amit a jelentkezéshez adsz.';

$GLOBALS["lang"]['The collector is essentially a full install of Open-AudIT in <i>collector</i> mode. The collector is designed to run discovery upon the network it is situated in. It is not restricted to only that network, but ideally it would essentially be one collector per subnet where required. The collector is driven on a schedule by the server and runs discovery upon the network as specified.<br>When in Stand Alone mode the Collector acts as an independant server, simply forwarding all devices found to the main server.<br><br>Once installed and setup, control of the Collector is performed on the Server (not in Stand Alone mode).<br><br>The only required network ports between the collector and server are 80 or 443 (TCP connection established from the Collector to the Server). The Open-AudIT database is not (and cannot be) shared between these installs.<br><br>By default the collector (not in Stand Alone mode) will request from the server any discovery tasks every 5 minutes (you can configure this on the server for new Collectors using the configuration item collector_check_minutes) therefor any discovery tasks for the collector should be scheduled for 0, 5, 10, 15, etc minutes.'] = 'A gyűjtő lényegében egy teljes telepítése Open- AudIT <i>gyűjtő</i> mode. A gyűjtőt arra tervezték, hogy felfedezze a hálózatát. Nem csak erre a hálózatra korlátozódik, de ideális esetben alhálózatonként egy gyűjtő lenne, ahol szükséges. A gyűjtőt a szerver hajtja és a megadott módon futtatja a hálózatot.<br/>When in Stand Egyedül üzemmód a Gyűjtő működik, mint egy független szerver, egyszerűen továbbít minden eszközt talált a fő szerver.<br/><br/>A telepítés és beállítás után a Gyűjtő vezérlése a kiszolgálón történik (nem a Stand Alone módban).<br/><br/>Az egyetlen szükséges hálózati portok között a gyűjtő és szerver 80 vagy 443 (TCP kapcsolat létrehozott a gyűjtő a szerver). Az Open- AudIT adatbázis nem oszlik meg (és nem is lehet) az installok között.<br/><br/>Alapértelmezés szerint a gyűjtő (nem a Stand Alone módban) 5 percenként bármilyen felfedezési feladatot kér a szervertől (ezt az új Gyűjtemények szerverén állíthatja be a gyűjtő _ check _ minutes konfigurációs tételének használatával) ahhoz, hogy a gyűjtő bármilyen felfedezési feladatát 0, 5, 10, 15, stb.';

$GLOBALS["lang"]['The collector is essentially a full install of Open-AudIT in <i>collector</i> mode. This mode would reduce visible functionality in an effort to simplify and focus the application. It is designed to collect information about local networks and devices, where firewall and/or network traversal is an issue from the server.'] = 'A gyűjtő lényegében egy teljes telepítése Open- AudIT <i>gyűjtő</i> mode. Ez a mód az alkalmazás egyszerűsítése és fókuszálása érdekében csökkentené a látható funkcionalitást. Arra tervezték, hogy információkat gyűjtsön a helyi hálózatokról és eszközökről, ahol a tűzfal és / vagy a hálózati transzverzum probléma a szerver.';

$GLOBALS["lang"]['The collectors internal IP used when it runs a discovery.'] = 'A gyűjtők belső IP használt, amikor fut egy felfedezés.';

$GLOBALS["lang"]['The column name from the foreign table. Should be one of: class, environment, status, type or menu_category.'] = 'Az oszlop neve a külföldi asztalról. A következő kategóriák egyikének kell lennie: osztály, környezet, állapot, típus vagy menü _ kategória.';

$GLOBALS["lang"]['The command executed upon the target device or Open-AudIT server code executed during discovery.'] = 'A parancs végrehajtva a cél eszköz vagy Open- AudIT szerver kód végrehajtása során felfedezés.';

$GLOBALS["lang"]['The configuration of your cluster can be: <code>active/active</code>, <code>active/passive</code>, <code>N+1</code>, <code>N+M</code>, <code>N-to-1</code>, <code>N-to-N</code>, <code>other</code> or blank.'] = 'A klaszter konfigurációja: <code>active/active</code>, <code>active/passive</code>, <code>N+1</code>, <code>N+M</code>, <code>N-to-1</code>, <code>N-to-N</code>, <code>other</code> vagy üres.';

$GLOBALS["lang"]['The credentials password. If the credentials are an SSH Key, this is the password used to unlock the key and is optional.'] = 'A jelszó. Ha a mandátumok SSH kulcsok, ez a jelszó a kulcs feloldásához, és nem kötelező.';

$GLOBALS["lang"]['The credentials supplied by the user have failed.'] = 'A felhasználó által megadott hitelesítő nem sikerült.';

$GLOBALS["lang"]['The credentials username.'] = 'A felhasználónév.';

$GLOBALS["lang"]['The current date and time in the format: Y-m-d H:i:s.'] = 'Az aktuális dátum és idő a következő formátumban: Y- m- d H: i: s.';

$GLOBALS["lang"]['The current date in Y-m-d format.'] = 'Az aktuális dátum Y- m- d formátumban.';

$GLOBALS["lang"]['The current status of the Cloud Discovery.'] = 'A Cloud Discovery jelenlegi helyzete.';

$GLOBALS["lang"]['The current status of the discovery.'] = 'A felfedezés jelenlegi helyzete.';

$GLOBALS["lang"]['The dashboard that will be shown by default for this user. Links to <code>dashboards.id</code>.'] = 'A műszerfal, ami alapértelmezés szerint jelenik meg a felhasználó számára. Kapcsolatok <code>dashboards.id</code>.';

$GLOBALS["lang"]['The data stored in the database is not showing in the application translated. We leave the data as it is. However, there is nothing to stop you, the user, changing the name (for example) of an item in the database to your language.'] = 'Az adatbázisban tárolt adatok nem jelennek meg a lefordított alkalmazásban. Így hagyjuk az adatokat. Azonban nincs semmi, ami megállíthatná Önt, a felhasználót, aki megváltoztatja egy elem nevét (például) az adatbázisban a nyelvére.';

$GLOBALS["lang"]['The data you input will be used in a <code>LIKE</code> clause, not (as per the API) an <code>equals</code> clause. Another example - if you input <code>comput</code>, it would still return all computers. And because we are using a <code>LIKE</code> clause, it is case-insensitive.'] = 'Az Ön által bevitt adatokat a <code>LIKE</code> záradék, nem (az API szerint) <code>equals</code> záradék. Egy másik példa - ha input <code>comput</code>Akkor is visszaadná az összes számítógépet. És mert a <code>LIKE</code> záradék, ez az ügy érzéketlen.';

$GLOBALS["lang"]['The database schema can be found in the application if the user has database::read permission by going to menu: Admin -> Database ->'] = 'Az adatbázis séma megtalálható az alkalmazásban, ha a felhasználónak van adatbázisa:: olvasási engedély menü: Admin - > Adatbázis - >';

$GLOBALS["lang"]['The database version and web version are inconsistent.'] = 'Az adatbázis verziója és a web verziója következetlen.';

$GLOBALS["lang"]['The date of license expiration.'] = 'Az engedély lejárta.';

$GLOBALS["lang"]['The date the software is discontinued by the manufacturer. Usually replaced by a newer version. Maintenance may still be available.'] = 'Az a dátum, amikor a gyártó megszakítja a szoftvert. Általában egy újabb változattal helyettesítik. A karbantartás még mindig elérhető lehet.';

$GLOBALS["lang"]['The date the software no longer receives updates and is effectively discontinued altogether. Maintenance is discontinued.'] = 'Az a dátum, amikor a szoftver már nem kap frissítéseket, és gyakorlatilag teljesen megszűnik. A fenntartó kezelést abba kell hagyni.';

$GLOBALS["lang"]['The date this item was changed or added (read only). NOTE - This is the timestamp from the server.'] = 'A tétel módosításának vagy hozzáadásának dátuma (csak olvasható). MEGJEGYZÉS - Ez a szerver időbélyegzője.';

$GLOBALS["lang"]['The date/time when this result was created.'] = 'Az eredmény létrehozásának dátuma / időpontja.';

$GLOBALS["lang"]['The day of the month when this task should execute (* for every day).'] = 'A hónap napja, amikor ezt a feladatot végre kell hajtani (* minden nap).';

$GLOBALS["lang"]['The day of the week when this task should execute (* for every day).'] = 'A hét azon napja, amikor ennek a feladatnak megvalósulnia kell (* minden nap).';

$GLOBALS["lang"]['The debug level (will output to command prompt window). Lower means less output with 0 being no output.'] = 'A debug szint (a kimenet parancsa azonnali ablak). Az alacsonyabb kevesebb kimenetet jelent, 0 pedig nincs kimenet.';

$GLOBALS["lang"]['The default discovery scan option is the UltraFast set.'] = 'Az alapértelmezett felismerési beállítás az UltraFast.';

$GLOBALS["lang"]['The default language assigned to any user created by this method.'] = 'Az ezzel a módszerrel létrehozott felhasználóhoz rendelt alapértelmezett nyelv.';

$GLOBALS["lang"]['The device must respond to an Nmap ping before it is considered online.'] = 'A készüléknek reagálnia kell egy Nmap ping-re, mielőtt online értékelnék.';

$GLOBALS["lang"]['The device within Open-AudIT. Links to <code>devices.id</code>.'] = 'Az eszköz az Open- Auditban. Kapcsolatok <code>devices.id</code>.';

$GLOBALS["lang"]['The direct link for the script is'] = 'A szkript közvetlen linkje:';

$GLOBALS["lang"]['The email address of the receiver'] = 'A kedvezményezett e-mail címe';

$GLOBALS["lang"]['The enterprise binary from FirstWave is required for a license. Please download Open-AudIT from'] = 'A vállalat bináris FirstWave szükséges a licenc. Kérjük, töltse le az Open- AudIT programot';

$GLOBALS["lang"]['The entire associated baseline this result is from.'] = 'A teljes kapcsolódó kiindulási érték ez az eredmény.';

$GLOBALS["lang"]['The exploited vulnerability can affect resources beyond the security authority of the vulnerable component. This usually means a privilege or trust boundary is crossed (for example, escaping from a container to the host OS).'] = 'A kihasznált sebezhetőség a kiszolgáltatott komponens biztonsági hatóságán kívüli erőforrásokat is érinthet. Ez általában azt jelenti, hogy a kiváltság vagy a bizalom határait átlépik (például a konténerből a host OS-ba való menekülés).';

$GLOBALS["lang"]['The exploited vulnerability only impacts resources within the same security authority as the vulnerable component. In other words, the attacker’s actions stay within the original trust boundary.'] = 'A kihasznált sebezhetőség csak ugyanazon biztonsági hatóságon belüli erőforrásokat érinti, mint a kiszolgáltatott komponens. Más szóval, a támadó tettei az eredeti bizalmi határon belül maradnak.';

$GLOBALS["lang"]['The externally referenced location ID. Usually populated by Cloud audits.'] = 'A külső referenciás helyazonosító. Általában a Cloud audit által lakott.';

$GLOBALS["lang"]['The fields associated with an Integration are stored in the database as a JSON array of objects. Each field has the following attributes'] = 'Az Integrációhoz kapcsolódó mezőket az adatbázisban tárolja a JSON objektumok tömbeként. Minden mező a következő attribútumokkal rendelkezik:';

$GLOBALS["lang"]['The first time that Open-AudIT retrieved details of this device.'] = 'Az első alkalom, hogy az Open- AudIT kinyerte az eszköz részleteit.';

$GLOBALS["lang"]['The floor the rack is located on.'] = 'A padló az állvány található.';

$GLOBALS["lang"]['The foreign table to reference. Should be one of: devices, locations, orgs or queries.'] = 'Az ajánlólevél. Valamelyik: eszközök, helyszínek, orgák vagy lekérdezések.';

$GLOBALS["lang"]['The format of your data should be in the form'] = 'Az adatok formátuma legyen a formában';

$GLOBALS["lang"]['The format used for the output to be emailed.'] = 'A kimenet e-mailezéséhez használt formátum.';

$GLOBALS["lang"]['The fully qualified column upon which to group by. NOTE: When type = traffic, this represents the red query id.'] = 'A teljesen képzett oszlop, amely szerint csoportosan. MEGJEGYZÉS: Ha a típus = forgalom, ez a piros lekérdezési azonosító.';

$GLOBALS["lang"]['The fully qualified name returned by the external system. EG: for NMIS we use configuration.roleType.'] = 'A külső rendszer által visszaadott teljes értékű név. EG: az NMIS-hez konfigurációt használunk. szerep Típus.';

$GLOBALS["lang"]['The fully qualified table.column. Multiple may be provided, separated by a comma (no spaces).'] = 'A teljesen képzett táblázat. Column. Többszörös lehet, vesszővel (szóközökkel) elválasztva.';

$GLOBALS["lang"]['The generated SQL query to test for this vulnerability. This field can be edited to correct the query as required.'] = 'A generált SQL lekérdezés tesztelni ezt a sebezhetőséget. Ez a mező szerkeszthető, hogy korrigálja a lekérdezés szükség szerint.';

$GLOBALS["lang"]['The group of devices on which the baseline was run against.'] = 'Az az eszközcsoport, amelyen az alapvonalat futották.';

$GLOBALS["lang"]['The group that provides a list of devices for the integration. Links to <code>groups.id</code>.'] = 'A csoport, amely az integrációs eszközök listáját tartalmazza. Kapcsolatok <code>groups.id</code>.';

$GLOBALS["lang"]['The hour of the day when this task should execute (* for every hour).'] = 'A nap órája, amikor ezt a feladatot végre kell hajtani (* óránként).';

$GLOBALS["lang"]['The id of the linked device. Links to <code>devices.id</code>'] = 'A csatlakoztatott eszköz azonosítója. Kapcsolatok <code>devices.id</code>';

$GLOBALS["lang"]['The identifier column (integer) in the database (read only).'] = 'Az adatbázis azonosító oszlopa (egész szám) (csak olvasható).';

$GLOBALS["lang"]['The importance of this baseline (not used yet).'] = 'Ennek az alapértéknek a jelentősége (még nem használt).';

$GLOBALS["lang"]['The integer of severity.'] = 'Az egész súlyosság.';

$GLOBALS["lang"]['The internal value, reformatted in this format.'] = 'A belső érték, átformázva ebben a formátumban.';

$GLOBALS["lang"]['The ip address of the Auth method.'] = 'Az Auth módszer IP-címe.';

$GLOBALS["lang"]['The language to translate the web interface into for the user.'] = 'A nyelv lefordítani a web felület a felhasználó számára.';

$GLOBALS["lang"]['The last date and time this item was executed (read only).'] = 'Az utolsó dátum és időpont, amikor ezt a tételt végrehajtották (csak olvasható).';

$GLOBALS["lang"]['The last time that Open-AudIT retrieved details of this device.'] = 'Az utolsó alkalom, hogy az Open- AudIT kinyerte az eszköz részleteit.';

$GLOBALS["lang"]['The last time this benchmarks was executed.'] = 'Az utolsó alkalom, amikor végrehajtották ezt a mércét.';

$GLOBALS["lang"]['The last time this integration was run.'] = 'Legutóbb ez az integráció ment végbe.';

$GLOBALS["lang"]['The license endpoint allows you to track the number of licenses found on your devices.'] = 'A licenc végpont lehetővé teszi, hogy nyomon kövesse a licencek számát található eszközök.';

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

$GLOBALS["lang"]['The logic for device matching is contained in the devices_helper.php file, which on a Linux install can be found here'] = 'A logikai eszköz egyezés tartalmazza az eszközök _ helper.php fájlt, amely egy Linux telepítés itt található';

$GLOBALS["lang"]['The machine-default permission settings do not grant Local Activation permission for the COM Server application with'] = 'A machine- alapértelmezett engedélybeállítások nem adnak helyi aktiválási engedélyt a COM Server alkalmazáshoz';

$GLOBALS["lang"]['The maximum physical weight (in KGs) this rack can hold.'] = 'A maximális fizikai súly (KG) ez a rack képes tartani.';

$GLOBALS["lang"]['The maximum total BTUs this rack is rated for.'] = 'A maximális teljes BTUs erre a fogasra van értékelve.';

$GLOBALS["lang"]['The minimum required attributes for attributes are'] = 'A minimális szükséges attribútumok attribútumok:';

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

$GLOBALS["lang"]['The new Agent runs a PowerShell version of the old audit script in preparation for the depreciation of VBScript (yes, it is coming).'] = 'Az új ügynök a régi könyvvizsgálati szkript PowerShell verzióját futtatja a VBScript értékcsökkenésének előkészítésére (igen, jön).';

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

$GLOBALS["lang"]['The offset is the count of devices you wish to return data from.'] = 'Az eltolódás azon eszközök száma, amelyekből az adatokat vissza szeretné adni.';

$GLOBALS["lang"]['The only required permission / policy name (in our testing) is'] = 'Az egyetlen szükséges engedély / politika neve (a tesztelés)';

$GLOBALS["lang"]['The optional secondary column. NOTE: When type = traffic, this represents the yellow query id.'] = 'Az opcionális másodlagos oszlop. MEGJEGYZÉS: Ha a típus = forgalom, ez a sárga lekérdezési azonosító.';

$GLOBALS["lang"]['The optional third column. NOTE: When type = traffic, this represents the green query id.'] = 'A választható harmadik oszlop. MEGJEGYZÉS: Amikor a típus = forgalom, ez a zöld lekérdezés azonosító.';

$GLOBALS["lang"]['The order of information retrieval is snmp, ssh, wmi.'] = 'Az információszerzés rendje: snmp, ssh, wmi.';

$GLOBALS["lang"]['The orientation of this device.'] = 'Az eszköz iránya.';

$GLOBALS["lang"]['The password (if not using the user running the script).'] = 'A jelszó (ha nem a szkriptet futtató felhasználó).';

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

$GLOBALS["lang"]['The primary method for authorization (what a user can do) is now based on the users Roles. Roles are defined as admin, org_admin, reporter, and user by default. Each role has a set of permissions (Create, Read, Update, Delete) for each endpoint. Standard roles as shipped should cover 99.9 percent of use-cases. The ability to define additional roles and edit existing roles is enabled in Open-AudIT Enterprise.'] = 'Az elsődleges módszer az engedélyezés (amit a felhasználó tehet) most alapul a felhasználók Rolles. A szerepek meghatározása: admin, org _ admin, riporter és felhasználó alapértelmezés szerint. Minden szerepnek van egy sor jogosultsága (Create, Read, Frissítés, Törlés) minden végpontra. A szokásos szerepeknek a használat 99,9 százalékát kell lefedniük. Az Open- AudIT Enterprise lehetővé teszi a további szerepek meghatározását és a meglévő szerepek szerkesztését.';

$GLOBALS["lang"]['The process identifier of this queue item.'] = 'E sorban szereplő tétel folyamatazonosítója.';

$GLOBALS["lang"]['The process that was used last to retrieve details about the device'] = 'A folyamat, amit utoljára használtak, hogy a részleteket az eszköz';

$GLOBALS["lang"]['The purpose of this licensing page is to list the products and licenses included in Firstwave Commercial products including products based upon open source works.Open-AudIT is licensed from Firstwave under AGPLv3 or later with Enterprise and Professional functionality licensed under commercial terms.Open-AudIT when downloaded from FirstWave may include the following libraries and projects, which are supplied unmodified and licensed as indicated:'] = 'Ezen engedélyezési oldal célja, hogy felsorolja a Firstwave kereskedelmi termékekben szereplő termékeket és engedélyeket, beleértve a nyílt forráskódú műveken alapuló termékeket is. Open- AudIT engedéllyel rendelkezik a Firstwave alatt AGPLv3 vagy később a Enterprise és a Professional funkcionality engedéllyel kereskedelmi feltételek. A FirstWave-ről letöltött Open- AudIT a következő könyvtárakat és projekteket foglalhatja magában, amelyeket a jelzett módon nem módosítottak és engedélyeztek:';

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

$GLOBALS["lang"]['The requested properties should be in a comma-separated list. Properties should be fully qualified - ie, system.hostname (not just hostname).'] = 'A kért tulajdonságokat külön-külön kell felsorolni. Tulajdonságokat kell teljesen képzett - azaz, rendszer.hostname (nem csak hostname).';

$GLOBALS["lang"]['The result of the command.'] = 'A parancs eredménye.';

$GLOBALS["lang"]['The room the rack is located in.'] = 'A szoba az állvány található.';

$GLOBALS["lang"]['The row the rack is located in.'] = 'A sor az állvány található.';

$GLOBALS["lang"]['The search for group on the LDAP server failed. Check the LDAP server logs. Have you created these groups (for roles and orgs) on the LDAP server and assigned LDAP users to them?'] = 'A csoport keresése az LDAP szerveren nem sikerült. Ellenőrizze az LDAP szervernaplót. Létrehozta-e ezeket a csoportokat (szerepeket és orgokat) az LDAP szerveren, és hozzárendelte-e hozzájuk az LDAP felhasználókat?';

$GLOBALS["lang"]['The secret key used in conjunction with your AWS EC2 API key.'] = 'Az AWS EC2 API kulcsával együtt használt titkos kulcs.';

$GLOBALS["lang"]['The software end-of-life date.'] = 'A szoftver az élet vége.';

$GLOBALS["lang"]['The software end-of-service-life date.'] = 'A szoftver véget ér a szolgálat-élet dátummal.';

$GLOBALS["lang"]['The specific database column from the specified database table.'] = 'A megadott adatbázistáblázat egyedi adatbázisoszlopa.';

$GLOBALS["lang"]['The specific database table.'] = 'A konkrét adatbázis tábla.';

$GLOBALS["lang"]['The standard Nmap timing options. Previously set at T4 (aggressive).'] = 'A standard Nmap időzítő lehetőségek. Az előző részek tartalmából:';

$GLOBALS["lang"]['The standard Nmap timing options. We usually use -T4 (Aggressive) as this is recommended for a decent broadband or ethernet connection.'] = 'A standard Nmap időzítő lehetőségek. Általában -T4-et (Agresszív) használunk, mivel ez egy tisztességes szélessávú vagy Ethernet kapcsolathoz ajánlott.';

$GLOBALS["lang"]['The status of this integration'] = 'Az integráció státusa';

$GLOBALS["lang"]['The status of this queued item.'] = 'A sorban álló tárgy állapota.';

$GLOBALS["lang"]['The steps below outline the process.'] = 'Az alábbi lépések felvázolják a folyamatot.';

$GLOBALS["lang"]['The target IP this log entry referers to (if any).'] = 'A cél IP ez a naplóbejegyzés javítók (ha van).';

$GLOBALS["lang"]['The target computer to audit. \".\" means localhost.'] = 'A célszámítógép, hogy ellenőrizze.\. "\" jelentése localhost.';

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

$GLOBALS["lang"]['The unfiltered state means that a port is accessible, but Nmap is unable to determine whether it is open or closed. Only the ACK scan, which is used to map firewall rulesets, classifies ports into this state. Scanning unfiltered ports with other scan types such as Window scan, SYN scan, or FIN scan, may help resolve whether the port is open.'] = 'A szűretlen állapot azt jelenti, hogy egy kikötő hozzáférhető, de Nmap nem tudja meghatározni, hogy nyitott vagy zárt. Csak a tűzfal szabályzatok feltérképezésére használt ACK scan sorolja a kikötőket ebbe az állapotba. Szűretlen portok szkennelése más típusú letapogatókkal, például Ablak, SYN scan vagy FIN scan segítségével megoldható, hogy a port nyitva van-e.';

$GLOBALS["lang"]['The unique identifier of this server.'] = 'A kiszolgáló egyedi azonosítója.';

$GLOBALS["lang"]['The user account this collector uses. Links to <code>users.id</code>.'] = 'A gyűjtő felhasználói fiókja. Kapcsolatok <code>users.id</code>.';

$GLOBALS["lang"]['The user in Active Directory / OpenLDAP must be a direct member of the required Open-AudIT groups for Roles and Orgs. A member of a group that is a member another group that is a member of the Open-AudIT group will not work.'] = 'A felhasználó az Active Directory / OpenLDAP közvetlen tagja kell, hogy legyen a szükséges Open- AudIT csoportok Rolls és Orgs. Az Open- AudIT csoport egyik tagja nem működik.';

$GLOBALS["lang"]['The user is in LDAP and their credentials are valid, but is not in any of the Open-AudIT LDAP groups for Orgs.'] = 'A felhasználó az LDAP-ban van, és a megbízólevele érvényes, de nem szerepel egyik Open- AudIT LDAP csoportban sem.';

$GLOBALS["lang"]['The user is in LDAP and their credentials are valid, but is not in any of the Open-AudIT LDAP groups for Roles.'] = 'A felhasználó az LDAP-ban van, és a megbízólevele érvényes, de nem szerepel egyik Open- AudIT LDAP csoportban sem.';

$GLOBALS["lang"]['The user is in LDAP and their credentials are valid, but is not in any of the required Open-AudIT LDAP groups.'] = 'A felhasználó az LDAP-ban van, és a megbízólevele érvényes, de nincs a szükséges Open- AudIT LDAP csoportok egyikében sem.';

$GLOBALS["lang"]['The user is in the LDAP group that matches this Org.'] = 'A felhasználó az LDAP csoportban, amely megfelel ennek az Org.';

$GLOBALS["lang"]['The user is in the LDAP group that matches this Role.'] = 'A felhasználó az LDAP csoport, amely megfelel ennek a szerepnek.';

$GLOBALS["lang"]['The user is not in the LDAP group that matches this Org.'] = 'A felhasználó nincs az LDAP csoportban, amely megfelel ennek az Org.';

$GLOBALS["lang"]['The user is not in the LDAP group that matches this Role.'] = 'A felhasználó nincs az LDAP csoportban, amely megfelel ennek a szerepnek.';

$GLOBALS["lang"]['The user that was specified exists in LDAP, but Open-AudIT is not configured to consume the LDAP groups for roles and that user does not exist within Open-AudIT. Either select <i>Use LDAP for Roles</i> on the Open-AudIT LDAP Server screen or create this user within Open-AudIT and assign roles and orgs.'] = 'A megadott felhasználó létezik LDAP-ban, de az Open- AudIT nem konfigurált, hogy elfogyassza az LDAP csoportokat szerepek céljából, és hogy a felhasználó nem létezik az Open- AudIT-on belül. Válassza ki <i>LDAP használata szerepekhez</i> az Open- AudIT LDAP-ról Szerver képernyő vagy hozzon létre ez a felhasználó belül Open- AudIT és hozzárendelése szerepek és orgs.';

$GLOBALS["lang"]['The username (if not using the user running the script).'] = 'A felhasználónév (ha nem a szkriptet futtató felhasználó).';

$GLOBALS["lang"]['The username used to access the external system.'] = 'A felhasználónév, amit a külső rendszerhez használnak.';

$GLOBALS["lang"]['The users details were not retrieved from LDAP. Check the LDAP server logs.'] = 'A felhasználók adatait nem az LDAP. Ellenőrizze az LDAP szervernaplót.';

$GLOBALS["lang"]['The users details were retrieved from LDAP.'] = 'A felhasználók adatait az LDAP-tól szereztük meg.';

$GLOBALS["lang"]['The users email address.'] = 'A felhasználók e-mail címe.';

$GLOBALS["lang"]['The usual hours of operation at this site.'] = 'A szokásos műszak ezen az oldalon.';

$GLOBALS["lang"]['The value assigned to the item.'] = 'A tételhez rendelt érték.';

$GLOBALS["lang"]['The value that is stored for this particular item.'] = 'Az adott tétel esetében tárolt érték.';

$GLOBALS["lang"]['The vendor name as per CPE entries.'] = 'Az eladó neve a CPE bejegyzései szerint.';

$GLOBALS["lang"]['The vendor taken from the CPE.'] = 'Az eladó, akit a CPE-ből hoztak.';

$GLOBALS["lang"]['The web directory on the host that Open-AudIT is installed (requires a trailing slash).'] = 'Az Open- AudIT telepítéséhez szükséges webkönyvtár.';

$GLOBALS["lang"]['The widget at position '] = 'A widget pozícióban ';

$GLOBALS["lang"]['The width of this device.'] = 'Az eszköz szélessége.';

$GLOBALS["lang"]['Their OrgIDs and their descendants'] = 'Az orgonáik és leszármazottaik';

$GLOBALS["lang"]['Their OrgIDs only'] = 'Csak az orgonáik.';

$GLOBALS["lang"]['Their OrgIDs, ascendants and descendants'] = 'Az orgiáik, felmenőik és leszármazottaik';

$GLOBALS["lang"]['Then'] = 'Akkor...';

$GLOBALS["lang"]['Then create a new Auth method in Open-AudIT by going to menu -> Admin -> Auth Methods -> Create Auth. Provide a name and set the <i>type</i> to Entra.'] = 'Ezután hozzon létre egy új Auth módszert az Open- AudIT menüben - > Admin - > Auth Methods - > Létrehozni Auth-ot. Adja meg a nevet, és állítsa be a <i>típus</i> Az Entrának.';

$GLOBALS["lang"]['Then you can use Open-AudIT (unsupported) to receive audit data directly from the clients. Discovery <strong>will fail</strong>, but if youre not using Discovery (the main feature Open-AudIT was designed around), you can still get device data. You would need to run the audit scripts directly on the clients using cron, or use the Windows Agent feature (Enterprise only).'] = 'Ezután az Open- AudIT (nem támogatott) segítségével közvetlenül az ügyfelektől kaphat ellenőrzési adatokat. Felfedezés <strong>nem sikerül.</strong>, de ha nem használja Discovery (a fő funkció Open- AudIT tervezték körül), akkor még mindig kap eszközadatokat. A könyvvizsgálati szkripteket közvetlenül az ügyfeleken kell futtatni cron használatával, vagy a Windows Agent funkciót (csak az Enterprise-t) kell használni.';

$GLOBALS["lang"]['There is a button to export to JSON. This will display only the device table of attributes. To export the device with all associated component tables, view the device details, then add'] = 'Van egy gomb a JSON-ra. Ez csak az attribútumok eszköztábláját jeleníti meg. Az eszköz exportálásához az összes kapcsolódó komponens táblával, megtekintheti az eszköz adatait, majd hozzáadhatja';

$GLOBALS["lang"]['There is absolutely no need to manually edit each individual device.'] = 'Egyáltalán nem szükséges kézzel szerkeszteni minden egyes eszközt.';

$GLOBALS["lang"]['There is no need to do anything if you are running Open-AudIT on a Linux server.<br><br>Windows clients are just fine and require no special actions, however.... to enable this feature the audit script must be run locally on the target Windows system. It cannot be run remotely as we do with WMI calls when running the audit script on one Windows machine, while targeting a second Windows machine. To do this we need to copy the audit script to the target Windows machine and then run it. Unfortunately the service account that Apache runs under is the Local System account. This account has no access to remote (network based) resources. To work around this issue the service must be run under another account. It is easiest to just use the local Administrator account, but you can try any account you like as long as it has the required privileges. The Local System account has as much local access as the local Administrator account.'] = 'Nincs szükség semmire, ha Linux szerveren futtatod az Open- AudIT-ot.<br/><br/>A Windows kliensek csak jól, és nem igényel különleges intézkedéseket, azonban... hogy ez a funkció a könyvvizsgálati szkript kell futtatni helyben a cél Windows rendszer. Nem lehet távolról futtatni, mint amit a WMI hívásokkal teszünk, amikor egy Windows gépen futtatjuk a könyvvizsgálati szkriptet, miközben egy második Windows gépet célzunk meg. Ehhez másolni kell a könyvvizsgálati szkriptet a cél Windows gépre, majd futtatni. Sajnos az Apache által vezetett szervizfiók a Local System fiók. Ez a számla nem férhet hozzá távoli (hálózati) forrásokhoz. A probléma megoldásához a szolgáltatást egy másik számlán kell vezetni. A legkönnyebb csak a helyi Administrator fiókot használni, de bármilyen fiókot kipróbálhatsz, amíg megvan a szükséges jogosultsága. A Local System fiók ugyanolyan helyi hozzáféréssel rendelkezik, mint a helyi Administrator számla.';

$GLOBALS["lang"]['These are only examples. You may need to adjust these attributes to suit your particular LDAP.'] = 'Ezek csak példák. Szükség lehet arra, hogy ezeket az attribútumokat a megadott LDAP-hoz igazítsa.';

$GLOBALS["lang"]['These parameters enable you to audit only what is useful and relevant to you, saving processing time and allowing you to discover your network in an orderly manner.'] = 'Ezek a paraméterek lehetővé teszik, hogy csak azt ellenőrizze, mi hasznos és releváns az Ön számára, megtakarítás feldolgozási időt, és lehetővé teszi, hogy fedezze fel a hálózat szabályos módon.';

$GLOBALS["lang"]['Thing'] = 'Valami.';

$GLOBALS["lang"]['Think of mail.domain1.com and mail.domain2.com - same hostname.'] = 'Gondoljon a mail.domain1.com és mail.domain2.com - ugyanaz a hostname.';

$GLOBALS["lang"]['Third'] = 'Harmadik';

$GLOBALS["lang"]['This CVE will be retrieved and overwrite the existing CVE if it exists.'] = 'Ez a CVE lesz visszakeresve, és felülírja a meglévő CVE, ha létezik.';

$GLOBALS["lang"]['This Org has no AD group specified. Check the roles details within Open-AudIT.'] = 'Ez az Org nem definiált AD csoportot. Ellenőrizze a szerepek részleteit Open- AudIT.';

$GLOBALS["lang"]['This Org has no AD group specified. Check the roles details within Open-AudIT. <span class=\"confluence-link\">Have you created these groups (for orgs) on the LDAP server and assigned LDAP users to them?'] = 'Ez az Org nem definiált AD csoportot. Ellenőrizze a szerepek részleteit Open- AudIT. <span class=\'\"confluence-link\"\'>Létrehozta-e ezeket a csoportokat (orgoknak) az LDAP szerveren, és hozzárendelte-e hozzájuk az LDAP felhasználókat?</span>';

$GLOBALS["lang"]['This Role has no AD group specified. Check the roles details within Open-AudIT.'] = 'Ez a szerep nem definiált AD-csoportot. Ellenőrizze a szerepek részleteit Open- AudIT.';

$GLOBALS["lang"]['This attribute is stored as a JSON object. It is the list of all collections and contains the collection name along with <code>c</code>, <code>r</code>, <code>u</code> and,or <code>d</code> which represent create, read, update and delete. These are the actions a user can perform on items from that particular collection.'] = 'Ezt az attribútumot JSON objektumként tároljuk. Ez a lista az összes gyűjtemény és tartalmazza a gyűjtemény nevét együtt <code>c</code>, <code>r</code>, <code>u</code> és, vagy <code>d</code> amely a létrehozást, olvasást, frissítést és törlést jelenti. Ezek azok a tevékenységek, amelyeket a felhasználó az adott gyűjtemény tételein végezhet.';

$GLOBALS["lang"]['This can be either a varchar (a text field), a list (a list of values that can be selected) or a date.'] = 'Ez lehet varchar (szövegmező), lista (kiválasztható értékek listája) vagy dátum.';

$GLOBALS["lang"]['This code relys on the great work done by the'] = 'Ez a kód a nagy munka által végzett';

$GLOBALS["lang"]['This collectors universally unique identifier.'] = 'Ez a gyűjtők univerzálisan egyedi azonosítója.';

$GLOBALS["lang"]['This column is required by'] = 'Ezt az oszlopot a következők írják elő:';

$GLOBALS["lang"]['This column is required by '] = 'Ezt az oszlopot a következők írják elő: ';

$GLOBALS["lang"]['This description is auto-populated and should ideally be left as-is.'] = 'Ez a leírás auto-népezett, és ideális esetben a-is marad.';

$GLOBALS["lang"]['This endpoint enables you to add the connections that are part of your network infrastructure, it allows you to customize a variety of attributes, specify where this connection is located and the organization that it belongs.'] = 'Ez a végpont lehetővé teszi, hogy hozzáadja a hálózati infrastruktúra részét képező kapcsolatokat, lehetővé teszi, hogy testre szabja a különböző attribútumok, ahol ez a kapcsolat található, és a szervezet, hogy tartozik.';

$GLOBALS["lang"]['This error indicates that SMB1 has been disabled or removed from the target machine. This is normal for modern version of Windows and you will only see this message when the SMB2 connection attempt has failed. If the SMB2 connection fails, we attempt SMB1 to enable discovery on old versions of Windows. If the target Windows machine <i>is</i> running an old version of Windows, it is likely your credentials have failed. In that case, see'] = 'Ez a hiba azt jelzi, hogy az SMB1-et kikapcsolták vagy eltávolították a célgépből. Ez normális a Windows modern verziójában, és csak akkor fogja látni ezt az üzenetet, ha az SMB2 kapcsolat kísérlet nem sikerült. Ha az SMB2 kapcsolat nem sikerül, megkíséreljük az SMB1-et, hogy a régi Windows verziókon is felfedezzük. Ha a cél Windows gép <i>ed</i> A Windows egy régi verzióját futtatja, valószínűleg a megbízólevele nem sikerült. Ebben az esetben, lásd';

$GLOBALS["lang"]['This error indicates that not enough virtual memory or paging file quota is available to complete the specified operation. You should try again later.'] = 'Ez a hiba azt jelzi, hogy a megadott művelet befejezéséhez nem áll rendelkezésre elegendő virtuális memória vagy csipogási fájlkvóta. Próbáld meg később.';

$GLOBALS["lang"]['This error indicates the credentials used either are incorrect, do not exist or do not have sufficient privileges to log on remotely to the target Windows machine. You should verify the credentials and check the below.'] = 'Ez a hiba azt jelzi, hogy a használt mandátumok helytelenek, nem léteznek, vagy nem rendelkeznek elegendő jogosultsággal ahhoz, hogy távolról bejelentkezzenek a cél Windows géphez. Ellenőriznie kell az igazolványokat, és ellenőriznie kell az alábbiakat.';

$GLOBALS["lang"]['This example creates a list of all Modules marked as'] = 'Ez a példa létrehoz egy listát az összes Module jelölt:';

$GLOBALS["lang"]['This example creates a list of devices and the open Ports, Protocols, and Programs found by the NMAP scan.'] = 'Ez a példa létrehozza az NMAP scan által talált eszközök és nyílt portok, protokollok és programok listáját.';

$GLOBALS["lang"]['This example creates a list of devices where the Function or Description fields are blank OR the Purchase Date is the default.'] = 'Ez a példa létrehoz egy listát az eszközökről, ahol a Funkció vagy Leírás mezők üresek, vagy a Vásárlási dátum az alapértelmezett.';

$GLOBALS["lang"]['This example query retrieves a list of devices OVER 3 years old. The query uses today'] = 'Ez a példa lekérdezi a 3 éves eszközök listáját. A lekérdezés ma használatos';

$GLOBALS["lang"]['This example uses'] = 'Ez a példa használja';

$GLOBALS["lang"]['This feature requires a Professional or an Enterprise license.'] = 'Ez a funkció professzionális vagy Enterprise licencet igényel.';

$GLOBALS["lang"]['This feature, because it has the ability to affect target devices more than usual must be manually enabled. To enable this feature, change the configuration item feature_executables to <i>yes</i>.'] = 'Ezt a funkciót, mert képes arra, hogy befolyásolja a céleszközök nagyobb, mint általában kell engedélyezni. Ha szeretné ezt a funkciót, módosítsa a konfigurációs elemet: <i>Igen</i>.';

$GLOBALS["lang"]['This file tells Linux to poll the application to determine if there are any scheduled tasks that should be run.'] = 'Ez a fájl azt mondja a Linux-nak, hogy vizsgálja meg az alkalmazást, hogy van-e olyan tervezett feladat, amit futtatni kell.';

$GLOBALS["lang"]['This form provides a simple way to get started discovering the devices on your network. For more (much more) detailed options, you can individually create'] = 'Ez az űrlap egy egyszerű módja annak, hogy elkezdjük felfedezni az eszközöket a hálózaton. További (sokkal több) részletes opciók, akkor egyénileg';

$GLOBALS["lang"]['This is also the way that PAExec works.'] = 'A PAExec is így működik.';

$GLOBALS["lang"]['This is an optional configuration option, enabled by setting discovery_use_org_id_match in the global configuration.'] = 'Ez egy opcionális konfigurációs opció, a discovery _ use _ org _ id _ match beállításával engedélyezve.';

$GLOBALS["lang"]['This is generally the primary column, unless otherwise configured. NOTE: When type = traffic, this represents the secondary text.'] = 'Ez általában az elsődleges oszlop, hacsak nem konfigurálva van. MEGJEGYZÉS: Amikor a típus = forgalom, ez a másodlagos szöveg.';

$GLOBALS["lang"]['This is likely due to MySQL time being off. MySQL typically uses the host devices time. You can check this by'] = 'Ez valószínűleg azért van, mert a MySQL ideje lejárt. A MySQL általában a gazdatest eszköz idejét használja. Ezt ellenőrizheti.';

$GLOBALS["lang"]['This is settable by users and so even though it should be globally unique, there is certainly no guarantee of this.'] = 'Ez a felhasználók számára megoldható, és bár világszinten egyedinek kell lennie, erre természetesen nincs garancia.';

$GLOBALS["lang"]['This is the directory where we store any attachments to devices.'] = 'Ez az a könyvtár, ahol bármilyen csatlakozást tárolunk az eszközökhöz.';

$GLOBALS["lang"]['This is to be used as the first point of call when troubleshooting Open-AudIT issues. You can click the Export button on the top right to retrieve this as a JSON file (to be added to the support ticket / email.'] = 'Ez lesz az első napirendi pont az Open- AudIT problémák problémamegoldásakor. A jobb felső oldali Export gombra kattintva lekérheti ezt JSON fájlként (hozzá kell adni a support ticket / email-hez.';

$GLOBALS["lang"]['This issue is under investigation.'] = 'Ez a kérdés vizsgálat alatt áll.';

$GLOBALS["lang"]['This item must match the value of the attribute selected or contains the ID of the query to be used.'] = 'Ennek a tételnek meg kell egyeznie a kiválasztott attribútum értékével, vagy tartalmaznia kell a használandó lekérdezés azonosítóját.';

$GLOBALS["lang"]['This item must match the value of the attribute selected.'] = 'Ez a tétel megegyezik a kiválasztott attribútum értékével.';

$GLOBALS["lang"]['This license expires on'] = 'Ez az engedély lejár';

$GLOBALS["lang"]['This security permission can be modified using the Component Services administrative tool.'] = 'Ez a biztonsági engedély a Component Services adminisztratív eszközével módosítható.';

$GLOBALS["lang"]['This should be commented out after troubleshooting as debug mode will generate a lot of logs on the disk for no benefit.'] = 'Ezt meg kell kommentálni után hibaelhárítás debug mód generál egy csomó naplók a lemezen nem előnyös.';

$GLOBALS["lang"]['This should be globally unique, but I have seen instances where it is not.'] = 'Ennek világszinten egyedinek kell lennie, de láttam olyan eseteket, ahol nem.';

$GLOBALS["lang"]['This should be set to either 1 or the height of the rack.'] = 'Ezt vagy 1-re vagy az állvány magasságára kell beállítani.';

$GLOBALS["lang"]['This should be the fully qualified field name in the database. Currently columns from the system, fields and credentials tables are supported. EG: system.nmis_role.'] = 'Ennek kell lennie a teljesen képzett mező nevét az adatbázisban. Jelenleg oszlopok a rendszer, mezők és hitelesítő táblázatok támogatott. EG: system.nmis _ role.';

$GLOBALS["lang"]['This state is used when Nmap is unable to determine whether a port is closed or filtered. It is only used for the IP ID idle scan.'] = 'Ezt az állapotot akkor alkalmazzák, amikor az Nmap nem tudja megállapítani, hogy egy port zárt vagy szűrt. Csak az IP ID üresjárati vizsgálatához használják.';

$GLOBALS["lang"]['This will auto-populate.'] = 'Ez auto-populálni fog.';

$GLOBALS["lang"]['This will considerably slow the discovery scan.'] = 'Ez jelentősen lelassítja a felfedezést.';

$GLOBALS["lang"]['This will delete the current rows in the'] = 'Ez törli az aktuális sorokat a';

$GLOBALS["lang"]['This will permanently DELETE this license.'] = 'Ez véglegesen érvényteleníti az engedélyt.';

$GLOBALS["lang"]['This will show you the Bulk Edit form. Any attributes you set on this form will be applied to all selected devices. You can set multiple attributes at once.'] = 'Ez megmutatja a tömeges Edit űrlapot. Minden attribútumot, amit erre a nyomtatványra állít, minden kiválasztott eszközre alkalmazni kell. Egyszerre több attribútumot állíthat be.';

$GLOBALS["lang"]['Thursday'] = 'Csütörtök';

$GLOBALS["lang"]['time_caption'] = 'Time Caption';

$GLOBALS["lang"]['Time Caption'] = 'Time Caption';

$GLOBALS["lang"]['time_daylight'] = 'Időfény';

$GLOBALS["lang"]['Time Daylight'] = 'Időfény';

$GLOBALS["lang"]['Time to Execute'] = 'A végrehajtásig eltelt idő';

$GLOBALS["lang"]['timeout'] = 'Időpont';

$GLOBALS["lang"]['Timeout'] = 'Időpont';

$GLOBALS["lang"]['Timeout Per Target (Seconds)'] = 'Időpont / cél (másodperc)';

$GLOBALS["lang"]['Timeout per Target. Wait for X seconds for a target response.'] = 'Időpont / cél. Várjuk meg az X másodpercet, amíg a célpont reagál.';

$GLOBALS["lang"]['Timesatamp'] = 'Időpont';

$GLOBALS["lang"]['Timestamp'] = 'Időbélyegző';

$GLOBALS["lang"]['timing'] = 'Időzítés';

$GLOBALS["lang"]['Timing'] = 'Időzítés';

$GLOBALS["lang"]['Timor-Leste'] = 'Timor- Leste';

$GLOBALS["lang"]['Title'] = 'Cím';

$GLOBALS["lang"]['To a new file named .env (in the same directory). Now edit that new file and uncomment (remove the #) the line below (line 17)'] = 'Egy .env nevű új fájlhoz (ugyanabban a könyvtárban). Most szerkessze az új fájlt, és nem nyilatkozik (távolítsa el a #) az alábbi sor (sor 17)';

$GLOBALS["lang"]['To actually execute the query, append a /execute, thus /open-audit/index.php/queries/{$id}/execute.'] = 'A lekérdezés végrehajtásához csatoljuk a / végrehajtást, így: / open-audit / index.php / queries / {$id} / execution.';

$GLOBALS["lang"]['To audit a machine, you must have credentials and administrator level access.'] = 'A gép ellenőrzéséhez hitelesítő és rendszergazdai szintű hozzáférés szükséges.';

$GLOBALS["lang"]['To audit a remote machine on an Active Directory domain, your supplied user (or if none provided, the user running the script) must be a member of the target machines Administrators group (or subgroup).'] = 'Ahhoz, hogy ellenőrizz egy távoli gépet egy Active Directory domain, a szállított felhasználó (vagy ha nincs megadva, a felhasználó fut a script) kell tagja a célgép adminisztrátorok csoport (vagy alcsoport).';

$GLOBALS["lang"]['To audit a remote machine that is not in a domain, you must use the Administrator account (not <i>an</i> admin account, <i>the</i> Administrator account) on the target PC. #1 and #2'] = 'Ahhoz, hogy egy távoli gép, amely nincs egy domain, akkor használja a Administrator számla (nem <i>al</i> admin fiók, <i>a</i> Administrator account) a cél PC. # 1 és # 2';

$GLOBALS["lang"]['To audit localhost, any supplied credentials are disregarded and the connection is made using the details of the user running the script.'] = 'A localhost ellenőrzéséhez figyelmen kívül kell hagyni a megadott igazolásokat, és a kapcsolat a szkriptet futtató felhasználó adataival történik.';

$GLOBALS["lang"]['To compare software we check the name and version. Because version numbers are not all standardised in format, when we receive an audit result we create a new attribute called software_padded which we store in the database along with the rest of the software details for each package. For this reason, baselines using software policies will not work when run against a device that has not been audited by 1.10 (at least). Software policies can test against the version being <i>equal to</i>, <i>greater than</i> or <i>equal to or greater than</i>.'] = 'A szoftver összehasonlításához ellenőrizzük a nevet és a verziót. Mivel a verziószámok nem mind szabványosított formátumúak, amikor audit eredményt kapunk, létrehozunk egy új attribútumot, a szoftvert _ padded-et, amelyet az adatbázisban tárolunk az egyes csomagok szoftverének részleteivel együtt. Ezért a szoftverpolitikát használó alapvonalak nem fognak működni, ha egy olyan eszközzel futnak, amelyet nem ellenőriztek 1.10-ig (legalább). Szoftverpolitika lehet tesztelni ellen verzió <i>egyenlő</i>, <i>nagyobb, mint</i> vagy <i>egyenlő vagy nagyobb</i>.';

$GLOBALS["lang"]['To create a new entry click the Create button in the upper right hand corner.'] = 'Új bejegyzés létrehozásához kattintson a Jobb felső sarokban található Létrehozási gombra.';

$GLOBALS["lang"]['To create a resource, you should POST the required data.'] = 'Ahhoz, hogy egy erőforrás, akkor POST a szükséges adatokat.';

$GLOBALS["lang"]['To enable a remote machine (Vista or above) to be audited that is not on a domain, by an account in the Administrators group, other than the actual Administrator account see the below section on UAC.'] = 'Annak érdekében, hogy lehetővé váljon egy olyan távoli gép (Vista vagy annál magasabb) könyvvizsgálata, amely nem egy tartományon belül van, az Igazgatók csoportjának egy számlája, kivéve a tényleges Administrator számlát, lásd az alábbi UAC szakaszt.';

$GLOBALS["lang"]['To enable this, create a new Auth item by going to menu -> Admin -> Auth -> Create Auth Method.'] = 'Ehhez hozzon létre egy új Auth elemet menü - > Admin - > Auth - > Auth módszer létrehozása.';

$GLOBALS["lang"]['To execute the Windows powershell script, open a command prompt as Administrator and use the following command'] = 'A Windows powershell script végrehajtásához nyisson meg egy parancsparancsot adminisztrátorként, és használja a következő parancsot:';

$GLOBALS["lang"]['To execute the audit script, open a terminal and use the following command'] = 'A könyvvizsgálati szkript végrehajtásához nyisson terminált, és használja a következő parancsot:';

$GLOBALS["lang"]['To filter by a property value, use the property name. Operators that should precede the value are'] = 'Az ingatlanérték szűréséhez használja az ingatlannevet. A piaci szereplők, hogy meg kell előzni az értéket';

$GLOBALS["lang"]['To install Nmap on Windows, visit the Nmap page at'] = 'Nmap telepítése a Windows-on, látogasson el az Nmap oldalra';

$GLOBALS["lang"]['To make the change, just follow the steps below.'] = 'A változtatáshoz csak kövesse az alábbi lépéseket.';

$GLOBALS["lang"]['To retrieve the Tenant ID. Open the Azure portal click on Azure Active Directory, Properties and the Tenant ID is displayed as your Directory ID - do not blame me for the name mismatch, that is how Microsoft roll.'] = 'Hogy visszaszerezze a bérgyilkost. Nyissa meg az Azure portált kattintson az Azure Active Directory, Properties és a Tenant ID jelenik meg, mint a Directory ID - ne hibáztasson engem a név nem megfelelő, így a Microsoft roll.';

$GLOBALS["lang"]['To retrieve your key, log in to the AWS Console and select your username, then My Security Credentials.'] = 'Ahhoz, hogy visszaszerezze a kulcsot, jelentkezzen be az AWS konzolba, és válassza ki a felhasználónevét, majd a biztonsági adataimat.';

$GLOBALS["lang"]['To return a specific component item.'] = 'Egy adott komponens visszaküldéséhez.';

$GLOBALS["lang"]['To return all items for a compnent type for a specific device.'] = 'Az összes elem visszaküldése egy bizonyos eszközhöz.';

$GLOBALS["lang"]['To return all items for a component type. If you wanted all software you would use'] = 'Minden elem visszaküldése egy komponens típushoz. Ha minden szoftvert szeretnél használni';

$GLOBALS["lang"]['To reverse sort, insert a minus, thus'] = 'Visszafordítani a sort, be a mínusz, így';

$GLOBALS["lang"]['To run the test script on the target Windows PC'] = 'A tesztszkript futtatásához a cél Windows PC-n';

$GLOBALS["lang"]['To select devices to be integrated, we use nmis_manage = y, but you might like (for example) type = router. You can also use a Group or Query if you prefer something more complex.'] = 'Az integrálandó eszközök kiválasztásához nmis _ management = y-t használunk, de lehet, hogy (például) type = router típust szeretnénk. Csoportot vagy lekérdezést is használhat, ha valami összetettebb dolgot szeretne.';

$GLOBALS["lang"]['To sort by a database column, use'] = 'Adatbázis oszloppal történő rendezéshez használja';

$GLOBALS["lang"]['To use this Enterprise feature, you first need to create your user in Open-AudIT as per usual. Assigning a password is not necessary. You do have to assign Roles and Orgs. The username in Open-AudIT should match the Entra <i>preferred username</i> attribute. There is no need for a Full Name or Email - these will be populated from Entra. If you do not know your users <i>preferred username</i>, fear not. You can create the new Auth Method in Open-AudIT and the Enterprise Application in Entra and when a user attempts to sign-on to Open-AudIT without a pre-existing user, check the logs and you will see their <i>preferred username</i> logged for your convienence.'] = 'Ahhoz, hogy ezt az Enterprise funkciót, akkor először meg kell létrehozni a felhasználó Open- AudIT, mint a szokásos. Jelszó megadása nem szükséges. Ki kell jelölnöd Rolles-t és Orgst. Az Open- AudIT felhasználónevének egyeznie kell az Entrával. <i>preferált felhasználónév</i> attribútum. Nincs szükség teljes névre vagy e-mailre - ezek az Entra-ból lesznek benépesítve. Ha nem ismeri a felhasználókat <i>preferált felhasználónév</i>Ne félj. Létrehozhatja az új Auth Módszert az Open- AudIT-ban és az Enterprise Application-t az Entra-ban, és amikor a felhasználó megpróbálja jelezni az Open- AudIT-ot egy már meglévő felhasználó nélkül, ellenőrizze a naplózást és látni fogja a <i>preferált felhasználónév</i> Bejelentkeztél a konvienciádra.';

$GLOBALS["lang"]['To use this Enterprise feature, you first need to create your user in Open-AudIT as per usual. Assigning a password is not necessary. You do have to assign Roles and Orgs. The username in Open-AudIT should match the OKTA <i>name</i> attribute. There is no need for a Full Name or Email - these will be populated from OKTA. If you do not know your users <i>name<i>, fear not. You can create the new Auth Menthod in Open-AudIT and the Application in OKTA and when a user attempts to sign-on to Open-AudIT without a pre-existing user, check the logs and you will see their <i>name<i> logged for your convienence.<br></p><p>Then create a new Auth method in Open-AudIT by going to menu -> Admin -> Auth Methods -> Create Auth. Provide a name and set the <i>type</i> to Okta.'] = 'Ahhoz, hogy ezt az Enterprise funkciót, akkor először meg kell létrehozni a felhasználó Open- AudIT, mint a szokásos. Jelszó megadása nem szükséges. Ki kell jelölnöd Rolles-t és Orgst. Az Open- AudIT felhasználónevének egyeznie kell az OKTA-val. <i>név</i> attribútum. Nincs szükség teljes névre vagy e-mailre - ezek az OKTA-ból lesznek benépesítve. Ha nem ismeri a felhasználókat <i>név<i>Ne félj. Létrehozhatja az új Auth menthod az Open- AudIT és az alkalmazás az OKTA, és ha a felhasználó megpróbálja jelezni, hogy Open- AudIT nélkül már meglévő felhasználó, ellenőrizze a naplók és látni fogja a <i>név<i> Bejelentkeztél a konvienciádra.<br/><p>Ezután hozzon létre egy új Auth módszert az Open- AudIT menüben - > Admin - > Auth Methods - > Létrehozni Auth-ot. Adja meg a nevet, és állítsa be a <i>típus</i> Oktába.</p></i></i></i></i>';

$GLOBALS["lang"]['To use this feature you must enable the configuration items match_mac (for AWS) and match_hostname (for Azure). This will be done automatically the first time a cloud discovery is executed. For more on Open-AudITs matching rules see HERE: Matching Devices'] = 'Ha ezt a funkciót szeretné használni, akkor engedélyeznie kell a konfigurációs elemek match _ mac (AWS) és match _ hostname (Azure). Ez automatikusan megtörténik az első alkalommal, amikor egy felhő felfedezés kerül végrehajtásra. További részletek az Open- AudITs megfeleltetési szabályok lásd ITE: Egyezés eszközök';

$GLOBALS["lang"]['To view the details of a query, the standard URL structure of /open-audit/index.php/queries/{$id} should be used.'] = 'A lekérdezés részleteinek megtekintéséhez a / open- audit / index standard URL szerkezete. php / queries / {$id} kell használni.';

$GLOBALS["lang"]['Togo'] = 'Togo';

$GLOBALS["lang"]['Tokelau'] = 'Tokelau';

$GLOBALS["lang"]['Tonga'] = 'Tonga';

$GLOBALS["lang"]['toolbar_style'] = 'Eszköztárstílus';

$GLOBALS["lang"]['Toolbar Style'] = 'Eszköztárstílus';

$GLOBALS["lang"]['Top Nmap TCP Ports'] = 'Top Nmap TCP portok';

$GLOBALS["lang"]['Top Nmap TCP Ports. The top 10, 100, 1000 ports to scan as per Nmaps &quot;top ports&quot; options.'] = 'Top Nmap TCP Ports. A top 10, 100, 1000 portot a Nmaps "top ports" opciók szerint kell letapogatni.';

$GLOBALS["lang"]['Top Nmap UDP Ports'] = 'Top Nmap UDP portok';

$GLOBALS["lang"]['Top Nmap UDP Ports. The top 10, 100, 1000 ports to scan as per Nmaps &quot;top ports&quot; options.'] = 'Top Nmap UDP Ports. A top 10, 100, 1000 portot a Nmaps "top ports" opciók szerint kell letapogatni.';

$GLOBALS["lang"]['Traditional Chinese'] = 'Hagyományos kínai';

$GLOBALS["lang"]['Traffic Light'] = 'Forgalmi világítás';

$GLOBALS["lang"]['Trinidad and Tobago'] = 'Trinidad és Tobago';

$GLOBALS["lang"]['Troubleshooting'] = 'Hibaelhárítás';

$GLOBALS["lang"]['Troubleshooting LDAP Logins'] = 'Problémamegoldás LDAP Logins';

$GLOBALS["lang"]['Try Open-AudIT Enterprise, on us without a time limit. All the features of Enterprise. Limited to 20 devices.'] = 'Open- AudIT Enterprise, ránk, időkorlátozás nélkül. Az Enterprise összes jellemzője. 20 eszközre korlátozva.';

$GLOBALS["lang"]['Try all the latest features with a FREE 100 device license of Open-AudIT Enterprise. Please read the '] = 'Próbálja ki a legújabb funkciók egy INGYEN 100 eszköz licenc Open- AudIT Enterprise. Kérjük, olvassa el a ';

$GLOBALS["lang"]['Try logging in using an LDAP user. We are assuming this will fail (otherwise, why are you still reading this?). Next, comment out the line from ther file above.'] = 'Próbálja meg bejelentkezni egy LDAP felhasználó. Feltételezzük, hogy ez nem fog működni (különben miért olvasod még mindig ezt?). Következő, komment out the line from ther file about.';

$GLOBALS["lang"]['Tuesday'] = 'Kedd';

$GLOBALS["lang"]['Tunisia'] = 'Tunézia';

$GLOBALS["lang"]['Turkey'] = 'Törökország';

$GLOBALS["lang"]['Turkish'] = 'Török';

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

$GLOBALS["lang"]['Type: This can be either a varchar (a text field) or a List (a list of values that can be selected).'] = 'Típus: Ez lehet egy varchar (egy szövegmező) vagy egy List (az értékek listája, amelyek kiválaszthatók).';

$GLOBALS["lang"]['Types of Networks'] = 'Hálózattípusok';

$GLOBALS["lang"]['URL'] = 'URL';

$GLOBALS["lang"]['uuid'] = 'UUID';

$GLOBALS["lang"]['UUID'] = 'UUID';

$GLOBALS["lang"]['udp_ports'] = 'Udp Ports';

$GLOBALS["lang"]['Udp Ports'] = 'Udp Ports';

$GLOBALS["lang"]['Uganda'] = 'Uganda';

$GLOBALS["lang"]['Ukraine'] = 'Ukrajna';

$GLOBALS["lang"]['Ukrainian'] = 'Ukrajna';

$GLOBALS["lang"]['Undergo Stage 1 audit (documentation review)'] = 'Undergo Stage 1 audit (dokumentáció felülvizsgálata)';

$GLOBALS["lang"]['Undergo Stage 2 audit (implementation review)'] = '2. szakasz szerinti ellenőrzés (végrehajtási felülvizsgálat)';

$GLOBALS["lang"]['Undergoing Analysis'] = 'Folyamatban lévő elemzés';

$GLOBALS["lang"]['Unfiltered'] = 'Szűrés nélkül';

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

$GLOBALS["lang"]['Update Vulnerabilities'] = 'A sebezhetőségek frissítése';

$GLOBALS["lang"]['Update an attribute of a {collection} entry.'] = 'Frissítse a {collection} bejegyzés attribútumát.';

$GLOBALS["lang"]['Update attributes'] = 'attribútumok frissítése';

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

$GLOBALS["lang"]['Urdu'] = 'Urdu';

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

$GLOBALS["lang"]['Use Proxy'] = 'Proxy használata';

$GLOBALS["lang"]['Use SNMP'] = 'SNMP használata';

$GLOBALS["lang"]['Use SSH'] = 'SSH használata';

$GLOBALS["lang"]['Use Secure (LDAPS)'] = 'Biztonságos használat (LDAPS)';

$GLOBALS["lang"]['Use Service Version Detection'] = 'Service Version detection használata';

$GLOBALS["lang"]['Use Service Version Detection. When a detected port is detected as open, if set to <i>y</i>, Nmap will query the target device in an attempt to determine the version of the service running on this port.<br>This can be useful when identifying unclassified devices. This was not previously used.'] = 'Használja a Service Version Detection. Ha az érzékelt port nyitottként észleli, ha be van állítva <i>y</i>Nmap lekérdezi a célberendezést, hogy megállapítsa a porton futó szolgáltatás változatát.<br/>Ez hasznos lehet a nem minősített eszközök azonosításakor. Ezt korábban nem alkalmazták.';

$GLOBALS["lang"]['Use WMI'] = 'WMI használata';

$GLOBALS["lang"]['Use a <i>Sign-in method</i> of OIDC - OpenID Connect and an <i>Application Type</i> of Web Application. Click <i>Next</i>.'] = 'A <i>Jelölési módszer</i> OIDC - OpenID Connect és egy <i>Alkalmazási típus</i> webes alkalmazás. Kattintson ide <i>Következő</i>.';

$GLOBALS["lang"]['Use for Authentication'] = 'Felhasználás hitelesítésre';

$GLOBALS["lang"]['Use for Roles'] = 'Alkalmazás tekercsekhez';

$GLOBALS["lang"]['Use the standard install options when displayed and click the <i>I Agree</i>, <i>Next</i> and <i>Install</i> buttons to install Nmap.'] = 'Használja a standard telepítési lehetőségeket, amikor megjelenik, és kattintson a <i>Egyetértek.</i>, <i>Következő</i> és <i>Telepítés</i> gombok telepíteni Nmap.';

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

$GLOBALS["lang"]['Users work similar to Netstat Ports. If a user exists with a matching name, status and password details (changeable, expires, required) then the policy passes.'] = 'A felhasználók a Netstat Ports-hoz hasonlóan dolgoznak. Ha a felhasználó létezik egy egyező név, állapot és jelszó részleteket (cserélhető, lejár, szükséges), akkor a házirendet.';

$GLOBALS["lang"]['Users, Roles and Orgs'] = 'Felhasználók, szerepek és sorok';

$GLOBALS["lang"]['Uses the CodeIgniter PHP Framework.'] = 'A CodeIgniter PHP keretrendszert használja.';

$GLOBALS["lang"]['Using'] = 'Felhasználás';

$GLOBALS["lang"]['Using Entra for Auth'] = 'Az Entra használata Auth-ra';

$GLOBALS["lang"]['Using LDAPS'] = 'LDAPS használata';

$GLOBALS["lang"]['Using OKTA for Auth'] = 'OKTA alkalmazása az Auth-hoz';

$GLOBALS["lang"]['Using the format option is useful when using a web browser but you wish to see the result in JSON format. Adding format=json achieves this. Normally a web browser will set its accept header to HTML, so in that case, we return the rendered page. Using an API to retrieve JSON you should set the accept header to'] = 'A formátum opció használata hasznos egy böngésző használatakor, de szeretné látni az eredményt JSON formátumban. Hozzáadás formátum = json eléri ezt. Általában a böngésző beállítja az elfogadó fejlécet HTML-re, így ebben az esetben visszaadjuk a kihagyott oldalt. A JSON visszaszerzéséhez API használatával be kell állítani az elfogadó fejlécet';

$GLOBALS["lang"]['Usually Mbs, from Location A.'] = 'Általában Mbs, az A. helyszínről';

$GLOBALS["lang"]['Usually Mbs, from Location B.'] = 'Általában Mbs, a B. helyszínről';

$GLOBALS["lang"]['Usually Mbs, to Location A.'] = 'Általában Mbs, az A helyre';

$GLOBALS["lang"]['Usually Mbs, to Location B.'] = 'Általában Mbs, a B helyre.';

$GLOBALS["lang"]['Usually should be set to 3.'] = 'Általában 3-ra kell beállítani.';

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

$GLOBALS["lang"]['Value Types'] = 'Értéktípusok';

$GLOBALS["lang"]['values'] = 'Értékek';

$GLOBALS["lang"]['Values'] = 'Értékek';

$GLOBALS["lang"]['Values: In the case of a <i>list</i> field, this should be a comma separated list of valid values.'] = 'Értékek: A <i>lista</i> mező, ennek az érvényes értékek vesszővel elkülönített listájának kell lennie.';

$GLOBALS["lang"]['Vanuatu'] = 'Vanuatu';

$GLOBALS["lang"]['VarChar'] = 'VarChar';

$GLOBALS["lang"]['Varchar'] = 'Varchar';

$GLOBALS["lang"]['variable'] = 'Változó';

$GLOBALS["lang"]['Variable'] = 'Változó';

$GLOBALS["lang"]['Various'] = 'Különféle';

$GLOBALS["lang"]['vendor'] = 'Vendor';

$GLOBALS["lang"]['Vendor'] = 'Vendor';

$GLOBALS["lang"]['Vendor Report'] = 'Vendor-jelentés';

$GLOBALS["lang"]['vendors'] = 'Értékesítők';

$GLOBALS["lang"]['Vendors'] = 'Értékesítők';

$GLOBALS["lang"]['Venezuela'] = 'Venezuela';

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

$GLOBALS["lang"]['Vietnamese'] = 'Vietnámi';

$GLOBALS["lang"]['View'] = 'Nézet';

$GLOBALS["lang"]['View All'] = 'Minden nézet';

$GLOBALS["lang"]['View Details'] = 'Részletek megtekintése';

$GLOBALS["lang"]['View Device'] = 'Az eszköz megjelenítése';

$GLOBALS["lang"]['View Discovery'] = 'Felfedezés megtekintése';

$GLOBALS["lang"]['View Policy'] = 'Iránymutatás';

$GLOBALS["lang"]['View Racks'] = 'Rekesz megtekintése';

$GLOBALS["lang"]['View the'] = 'A';

$GLOBALS["lang"]['View the discovery in question, then click the Support button in the top right toolbar. This will provide the discovery settings, config items, the discovery device list as well as the logs for this particular discovery.'] = 'Tekintse meg a kérdéses felfedezést, majd kattintson a Support gombra a jobb felső eszköztárnál. Ez biztosítja a felfedezés beállításokat, config elemek, a felfedezés eszköz lista, valamint a naplók ehhez a konkrét felfedezéshez.';

$GLOBALS["lang"]['View the release notes on the'] = 'Tekintse meg a kiadás jegyzetek a';

$GLOBALS["lang"]['Virtual Private Network'] = 'Virtuális privát hálózat';

$GLOBALS["lang"]['Virtual private network'] = 'Virtuális magánhálózat';

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

$GLOBALS["lang"]['Vulnerabilities and Results'] = 'Sebezhetőségek és eredmények';

$GLOBALS["lang"]['Vulnerabilities initially published before 1st January, 2025 (by default). We see no sense in returning vulnerabilities from years prior. This can be changed in the configuration.'] = 'A sebezhetőséget eredetileg 2025. január 1-je előtt tették közzé (alapértelmezés szerint). Nem látjuk értelmét visszatérni a sebezhetőségeket évekkel ezelőttről. Ez megváltoztatható a konfigurációban.';

$GLOBALS["lang"]['vulnerability_id'] = 'Sebezhetőségi azonosító';

$GLOBALS["lang"]['Vulnerability ID'] = 'Sebezhetőségi azonosító';

$GLOBALS["lang"]['Vulnerability Status'] = 'Sebezhetőségi állapot';

$GLOBALS["lang"]['WARNING - When creating a baseline using software policies, at present Centos and RedHat package the kernel using the names <i>kernel</i> and <i>kernel-devel</i>. There can be multiple packages with this name and different versions concurrently installed. Debian based distributions use names like <i>linux-image-3.13.0-24-generic</i>, note the version number is included in the package name. Because RedHat based operating systems use this format and subsequently have multiple identical package names with different versions we currently exclude <i>kernel</i> and <i>kernel-devel</i> from software policies. This may be addressed in a future update.'] = 'FIGYELEMBE VÉVE - Amikor egy alapértelmezést szoftverpolitikákkal, jelenleg Centos és RedHat csomag a kernel segítségével a nevek <i>kernel</i> és <i>kernel- devell</i>. Több csomag is lehet ezzel a névvel és különböző verziók telepítve. A Debian alapú disztribúciók olyan neveket használnak, mint <i>linux- image- 3.13.0- 24- generikus</i>, Megjegyzés: a verziószám szerepel a csomagolás nevében. Mivel a RedHat alapú operációs rendszerek ezt a formátumot használják, és ezt követően több azonos csomagnevük van különböző verziókkal, jelenleg kizárjuk <i>kernel</i> és <i>kernel- devell</i> szoftverpolitikákból. Ez egy későbbi frissítésben is megoldható.';

$GLOBALS["lang"]['WHERE'] = 'HOL';

$GLOBALS["lang"]['WMI Credentials Requirements'] = 'WMI Credents követelmények';

$GLOBALS["lang"]['Wait for it to complete, then paste in this next line to install the Agent.'] = 'Várja meg, amíg befejeződik, majd illessze be a következő sort, hogy telepítse az ügynököt.';

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

$GLOBALS["lang"]['We also have an option to Ping Before Scan (important for routers with long lived ARP caches). This is usually a good idea.'] = 'Van egy lehetőség Ping előtt Scan (fontos routerek hosszú élettartamú ARP cache). Ez általában jó ötlet.';

$GLOBALS["lang"]['We also have our action items (which are executed in the order below):'] = 'Vannak akciótételeink is (amelyeket az alábbi sorrendben hajtanak végre):';

$GLOBALS["lang"]['We are often asked this question and the answer most definitely is <i>it depends</i>. It depends on the number of IPs to be scanned, the network connection speed, the speed of the devices being scanned, the type of devices being scanned, the number of different credentials being tested and the speed of the Open-AudIT server. We do not have a calculator that would allow us to input those variables and return a value. It is simply too complex. Generally I limit my discoveries to 256 IP addresses - ie, a /24 subnet. We have had customers scan /16 subnets (65k addresses) and it does work - but it can take a long time. You are much better off scanning in /24 blocks. If you simply do not know what your address ranges are, then this is a good case for a Seed discovery.'] = 'Gyakran felteszik ezt a kérdést, és a válasz a leghatározottabban: <i>Attól függ.</i>. A letapogatandó IP-ek számától, a hálózati kapcsolat sebességétől, a szkennelt eszközök sebességétől, a szkennelt eszközök típusától, a vizsgálandó különböző hitelesítő-adatok számától és az Open- AudIT szerver sebességétől függ. Nincs olyan számológépünk, ami lehetővé tenné számunkra, hogy bevigyük ezeket a változókat, és visszaadjunk egy értéket. Egyszerűen túl bonyolult. Általában 256 IP címre korlátozom a felfedezéseimet, azaz egy / 24 alnetre. Voltak ügyfeleink szkennelés / 16 alhálózatok (65k címek) és működik - de ez eltarthat egy ideig. Sokkal jobb, ha letapogatsz a / 24 blokkokban. Ha egyszerűen nem tudja, hogy mi a cím tartományok, akkor ez egy jó esetben egy Seed felfedezés.';

$GLOBALS["lang"]['We have more detailed instructions on'] = 'Részletesebb utasításokkal rendelkezünk a';

$GLOBALS["lang"]['We have tests for:'] = 'Teszteink vannak:';

$GLOBALS["lang"]['We hope you find Open-AudIT as useful as we do.'] = 'Reméljük, Open- Auditot ugyanolyan hasznosnak találja, mint mi.';

$GLOBALS["lang"]['We initially setup the default list of scripts with the default options. The list of script is viewable at /scripts. These default scripts cannot be deleted. You can create additional scripts for use by you as required. Your script will be based on one of the existing scripts and have custom options applied. The scripts can then be downloaded from the list page at menu: Discover -> Audit Scripts -> List Audit Scripts.'] = 'Kezdetben beállítottuk az alapértelmezett szkriptek listáját az alapértelmezett opciókkal. A szkript listája megtekinthető a / szkripteknél. Ezek az alapértelmezett szkriptek nem törölhetők. Létrehozhat további szkripteket, ha szükséges. A szkriptet az egyik létező szkriptre alapozzuk, és egyéni opciókat alkalmazunk. A szkriptek ezután letölthetők a lista oldaláról a menü: Felfedezés - > Könyvvizsgálati szkriptek - > Lista Audit szkriptek.';

$GLOBALS["lang"]['We need some credentials to be able to effectively talk to the devices on your network.'] = 'Szükségünk van néhány megbízólevélre, hogy hatékonyan tudjunk beszélni a hálózatuk eszközeivel.';

$GLOBALS["lang"]['We only send the minimum amount of data and nothing of a sensitive nature. We send our license data (name, type, etc), our application data (name, version, platform, timezone, etc), any logged errors, a count of device types and a count of the features used. <i>Any</i> environment has devices and that is the only piece of your data we send. And only the type of device and a count. Not the manufacturer, not the model. We send nothing special. No networks. No IP addresses. No OS versions. No software names. The UUID and Server fields are sha256 encoded (so we do not know the value). We send just the data we need to improve the product. We hope you see the benefit to all of us with this information. It will provide us guided direction on where to focus improvements and new features in the product.'] = 'Csak a minimális mennyiségű adatot küldjük el, és semmi kényes dolgot. Elküldjük a licencadatokat (név, típus, stb.), az alkalmazás adatait (név, verzió, platform, időzóna, stb.), a naplózott hibákat, az eszköztípusok számát és az alkalmazott funkciók számát. <i>Bármely</i> A környezetnek vannak eszközei, és ez az egyetlen adat, amit küldünk. És csak az eszköz típusa és a számláló. Sem a gyártó, sem a modell. Nem küldünk semmi különlegeset. Nincs hálózat. Nincs IP cím. Nincs OS verzió. Nincsenek szoftvernevek. A UUID és a Server mezők Sha256 kódolt (így nem tudjuk az értéket). Elküldjük a szükséges adatokat a termék javításához. Reméljük, hogy mindannyiunk számára hasznos lesz ez az információ. Útmutató lesz számunkra arra nézve, hogy hol összpontosítsunk a fejlesztésekre és az új tulajdonságokra a termékben.';

$GLOBALS["lang"]['We tend to use the Google Chrome extension called Postman for testing actual restful queries. You might like to install and test with that.'] = 'A Google Chrome kiterjesztést Postman néven használjuk a tényleges nyugtató kérdések tesztelésére. Talán szeretné telepíteni és tesztelni.';

$GLOBALS["lang"]['Web'] = 'Web';

$GLOBALS["lang"]['Web Application Routes'] = 'Webes alkalmazási útvonalak';

$GLOBALS["lang"]['Web Server Discovery'] = 'Web Server felfedezés';

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

$GLOBALS["lang"]['Welcome to'] = 'Üdv a';

$GLOBALS["lang"]['Western Sahara'] = 'Nyugat-Szahara';

$GLOBALS["lang"]['What Can I Expect if I Have no Credentials'] = 'Mire számíthatok, ha nincs hitelem?';

$GLOBALS["lang"]['What about fields that I want from NMIS that are not in Open-AudIT? We have got you covered. Any fields in the external system (NMIS) that do not exist in Open-AudIT will be automatically created as Open-AudIT Custom fields.'] = 'Mi van azokkal a mezőkkel, amiket az NMIS-től akarok, amik nincsenek az Open- Auditban? Fedezünk. Az Open- AudIT-ban nem létező külső rendszer (NMIS) bármely mezője automatikusan Open- AudIT Custom mezőként jön létre.';

$GLOBALS["lang"]['What about other network devices? Think switches, routers, printers, etc. Obviously, it is best if you can provide some SNMP credentials for these devices. They only need <i>read-only</i> access. But if you do not want to do even that, there is nothing stopping you from running discovery, finding the devices, and making a rule or two to identify them (maybe use MAC Address prefix in combination with open ports, for example). You wont have much information, but you will know they are on the network, what they are, and when the last time they were seen was. You will also see if anything new appears on the network.'] = 'Mi van más hálózati eszközökkel? Gondoljunk kapcsolókra, routerekre, nyomtatókra stb. Nyilvánvaló, hogy a legjobb, ha tud néhány SNMP hitelesítő ezeket az eszközöket. Csak kell nekik. <i>read- only</i> hozzáférés. De ha nem akarja, hogy még ezt, nincs semmi akadálya, hogy futtassa a felfedezés, megtalálja az eszközöket, és hogy egy vagy két szabályt azonosítani őket (talán használja MAC cím előtag együtt nyitott portok, például). Nem lesz sok információjuk, de tudni fogják, hogy a hálózaton vannak, mik is ők, és mikor látták őket utoljára. Azt is látni fogja, ha valami új jelenik meg a hálózaton.';

$GLOBALS["lang"]['What do we send?'] = 'Mit küldjünk?';

$GLOBALS["lang"]['What does this actually mean to you?'] = 'Mit jelent ez neked?';

$GLOBALS["lang"]['What is the purpose of this rack.'] = 'Mi a célja ennek az állványnak?';

$GLOBALS["lang"]['What is the type of this location. Allowable types held in <code>attributes</code> table.'] = 'Milyen típusú ez a hely. A gyártó neve és címe: <code>attributes</code> Asztal.';

$GLOBALS["lang"]['When Open-AudIT on Linux discovers a Windows machine, in order to execute a remote command we use'] = 'Amikor az Open- AudIT a Linuxon felfedez egy Windows gépet, egy távoli parancs végrehajtása érdekében használjuk';

$GLOBALS["lang"]['When Open-AudIT on Windows discovers a Windows machine, in order to execute a remote command we use'] = 'Amikor az Open- AudIT a Windows felfedez egy Windows gépet, annak érdekében, hogy egy távoli parancsot használunk';

$GLOBALS["lang"]['When Open-AudIT receives data about a device, either by discovering the device during an audit run or by the user importing the device, it must determine if this discovered device matches a device that already exists within its database, or if it is a new device that should be added. Open-AudIT uses a series of twelve property matches to determine this. The Match Rules work as OR comparisons, not AND. This means the first rule that matches a field in the discovered device to one in the dB resolves as an existing device. All Matching Rules have to fail in order for a device to be new and result in a new record being created.'] = 'Open- Aud Az IT-nek az eszközre vonatkozó adatokat kell beszereznie, akár az eszköz könyvvizsgálat során történő felfedezésével, akár az eszközt importáló felhasználó által, meg kell határoznia, hogy ez a felfedezett eszköz megfelel-e az adatbázisában már létező eszköznek, vagy egy új eszköz, amelyet hozzá kell adni. Az Open- AudIT tizenkét ingatlan egyezést használ, hogy megállapítsa ezt. A Match Rules úgy működik, mint OR összehasonlítások, nem és. Ez azt az első szabályt jelenti, amely a felfedezett eszköz mezőjét a dB-ben lévő egyik mezőhöz köti, és meglévő eszközként oldja fel. Minden egyezési szabálynak meg kell buknia ahhoz, hogy egy eszköz új legyen, és új rekordot hozzon létre.';

$GLOBALS["lang"]['When POSTing data, you must include an access token. An access token is generated with every request type, so make a GET (for example) and Accept: application/json, parse the response for meta→access_token, and include that with your request. This should be placed in the field data[access_token], IE, the top level.'] = 'Amikor POSTING adatok, meg kell tartalmaznia a hozzáférést jelvény. Hozzáférési jelvény keletkezik minden kéréstípus, így egy GET (például) és elfogadás: alkalmazás / json, parse a válasz a meta → access _ membre, és tartalmazza, hogy az Ön kérésére. Ezt kell elhelyezni a mező adatok [hozzáférés _ token], IE, a felső szint.';

$GLOBALS["lang"]['When a device is Discovered the audit script will be injected with the file (or directory) details. Both audit_linux.sh and audit_windows.vbs will be populated, regardless of the file path. If you are thinking <i>but putting a Linux path into a Windows machine will break things!</i>, it wont break, you just wont receive any data from that file or directory entry.<br>Retrieved details will be stored in the <i>file</i> database table and are stored like any other attribute. File details will be stored as any other attribute and generate alerts if any of the following attributes change - <i>full_name</i>, <i>hash</i>, <i>inode</i>, <i>last_changed</i>. The table contain a system_id, first_seen, last_seen and current columns as well as the file details.<br>Attributes recorded are:<br><ul><li>Windows - name, size, directory, SHA1 hash (of the file contents), last changed, permissions, owner, version (file permitting).</li><br><li>Linux - name, size, directory, SHA1 hash (of the file contents), last changed, meta data last changed, permissions, owner, group, inode.</li></ul>You will see a section in both the Windows and Linux audit scripts as below'] = 'Amikor egy eszköz felfedezett a könyvvizsgálati szkript lesz befecskendezve a fájl (vagy könyvtár) részleteket. Mind audit _ linux.sh, mind audit _ windows.vbs lesz lakott, függetlenül a fájl útvonal. Ha arra gondolsz, <i>De ha egy Linux útvonalat egy Windows gépbe helyezünk, az megtöri a dolgokat!</i>Nem törik el, csak nem kap semmilyen adatot a fájlból vagy könyvtárból.<br/>Retrieved details will be stored in the <i>fájl</i> adatbázis tábla és tárolja, mint bármely más attribútum. Fájl adatok tárolja, mint bármely más attribútum, és generál figyelmeztető, ha bármely alábbi attribútumok változnak - <i>teljes név</i>, <i>hasis</i>, <i>inód</i>, <i>utolsó _ megváltozott</i>. A táblázat egy system _ id, first _ seen, last _ seen és az aktuális oszlopokat, valamint a fájl részleteit tartalmazza.<br/>A rögzített attribútumok:<br/><ul><li>Windows - név, méret, könyvtár, SHA1 hash (a fájl tartalma), utolsó módosítás, engedélyek, tulajdonos, verzió (fájl engedélyezve).</li><br/><li>Linux - név, méret, könyvtár, SHA1 hash (a fájl tartalma), utolsó megváltozott, meta adatok utoljára megváltozott, engedélyek, tulajdonos, csoport, inode.</li></ul>A Windows és Linux könyvvizsgálati szkriptekben az alábbi részben látható';

$GLOBALS["lang"]['When a discovery is run, the relevant discovery scan option is chosen and those settings are used by Nmap to scan the target devices.  The scan options determine which ports nmap scans, how fast they scan and whether or not nmap ping is first used to determine if the IP is live or not.'] = 'Amikor egy felfedezés fut, a vonatkozó felfedezés scan opció kiválasztható, és ezeket a beállításokat az Nmap használja a céleszközök szkennelésére. A scan opciók határozzák meg, hogy melyik portok nmap szkennelés, milyen gyorsan szkennelnek, és hogy az nmap ping először annak meghatározására, hogy az IP élő vagy sem.';

$GLOBALS["lang"]['When a discovery is run, the relevant discovery scan option is chosen and those settings used by Nmap to scan the target devices. If no option set is chosen, the default configuration item (discovery_default_scan_option) is selected and used. Open-AudIT Community will use the default options as per the configuration for all discoveries.'] = 'Amikor egy felfedezés fut, a vonatkozó felfedezés scan opció kiválasztva, és azok a beállítások által használt Nmap szkennelni a céleszközök. Ha nincs beállítás, akkor az alapértelmezett konfigurációs elemet (discovery _ default _ scan _ option) kell kiválasztani és használni. Az Open- AudIT Community az alapértelmezett beállításokat használja az összes felfedezéshez.';

$GLOBALS["lang"]['When a subnet discovery is executed it first runs, if selected, an Nmap ping scan on the range or IP addresses. Any device responding will be port scanned. If an Nmap ping scan is not requested, each IP is individually port scanned. Which ports? That is determined by the'] = 'Amikor egy alhálózati felfedezés végrehajtásra kerül, először fut, ha kiválasztják, egy Nmap ping scan a tartományon vagy IP címeken. Minden eszközt letapogatunk. Ha nem kérnek Nmap ping scan-t, minden IP-t külön-külön letapogatnak. Melyik kikötő? Ezt az alábbiak határozzák meg:';

$GLOBALS["lang"]['When auditing a Linux device via SSH, some Linux distributions do not allow sudo commands to be passed without a TTY (which we are doing). To completely audit one of these linux distributions it is best to supply the root user credentials. If no root is supplied and sudo without a TTY is not possible, the audit script will be run but will not contain the amount of data as would otherwise. Subsequent audits using root (or run locally using sudo) will therefore provide extra details about the system and generate several <i>changes</i>.'] = 'Amikor egy Linux eszközt SSH-n keresztül vizsgálunk, néhány Linux disztribúció nem teszi lehetővé, hogy a sudo parancsokat TTY nélkül adjuk át (amit mi csinálunk). Ahhoz, hogy teljes mértékben ellenőrizze az egyik ilyen linux disztribúciók a legjobb, hogy a root felhasználói adatok. Ha nincs root, és a szudo TTY nélkül nem lehetséges, a könyvvizsgálati szkript futtatásra kerül, de nem tartalmazza az adatok mennyiségét, mint egyébként. A root (vagy helyi sudo) használatával végzett későbbi ellenőrzések ezért további részleteket szolgáltatnak a rendszerről, és több <i>változások</i>.';

$GLOBALS["lang"]['When combining devices, which system is the authoritative source for information.'] = 'Az eszközök kombinálásakor melyik rendszer az információ hiteles forrása.';

$GLOBALS["lang"]['When complete, close the command window and you are done!'] = 'Ha kész, zárja be a parancsablakot, és kész!';

$GLOBALS["lang"]['When creating a widget, if you select the <i>Advanced</i> button you will have the ability to upload your own custom SQL.'] = 'Amikor létrehoz egy widget, ha kiválasztja a <i>Speciális</i> gombbal feltöltheti saját SQL-jét.';

$GLOBALS["lang"]['When integrating devices from the external system, if the device doesnt exist in Open-AudIT should we create it?'] = 'A külső rendszerből származó eszközök integrálásakor, ha az eszköz nem létezik az Open- AudIT rendszerben, akkor létre kellene hoznunk?';

$GLOBALS["lang"]['When integrating devices from the external system, if the device has been updated in the external system should we update it in Open-AudIT?'] = 'A külső rendszerből származó eszközök integrálásakor, ha az eszközt frissítették a külső rendszerben, akkor frissítsük Open- AudIT-ban?';

$GLOBALS["lang"]['When investigating a Discovery, support will request the Exported Discovery Logs. To retrieve these, go to menu -> Discoveries ->'] = 'Amikor egy Discovery után nyomozunk, a támogatás az Exportált Discovery Logs-t fogja kérni. Ezek letöltéséhez menjen a menübe - > Felderítés - >';

$GLOBALS["lang"]['When matching a Linux based device, we prefer to use the Dbus id concatenated with the hostname. We can also use other options as per the below table, but we can retrieve the Dbus ID without root. To retrieve the UUID (from the motherboard), we need to run dmidecode, which does require root. Unfortunately, when you clone an ESXi guest, the Dbus ID does not get recreated - hence our concatenating this with the hostname. There is a good article linked here that details the <i>why</i> of hardware IDs.'] = 'Ha egy Linux alapú eszközhöz illeszkedünk, inkább a Dbus ID-t használjuk, amely a hostname-hoz illeszkedik. Más lehetőségeket is használhatunk az alábbi táblázat szerint, de a Dbus azonosítót root nélkül is megszerezhetjük. Az UUID visszaszerzéséhez (az alaplapról) dmidecode-ot kell futtatnunk, amihez gyökérre van szükség. Sajnos, ha klónozni egy ESXi vendég, a Dbus ID nem lesz újra - ezért a conkatenating ezt a hostname. Van itt egy jó cikk, amely részletezi a <i>miért</i> hardverazonosító.';

$GLOBALS["lang"]['When requesting JSON, by default no limit is set. When requesting screen display, the limit is set to 1000 by default. This can be changed in the configuration. See the <i>page_size</i> item'] = 'A JSON kérésekor alapértelmezés szerint nincs korlátozás. Képernyő kérésekor a határérték alapértelmezés szerint 1000. Ez megváltoztatható a konfigurációban. Lásd a <i>oldal _ méret</i> tétel';

$GLOBALS["lang"]['When retrieve an external device, should we run discovery upon it?'] = 'Amikor megszerez egy külső eszközt, utána kéne néznünk?';

$GLOBALS["lang"]['When running Open-AudIT on Windows the Apache service account must be that of a <i>regular</i> user (or the Administrator). This is because the <i>Local System</i> account normally used to run Apache has no access to any network resources. IE - We cannot use Apache when running as the Local System account account to copy the audit script to Windows PCs.'] = 'Amikor fut Open- AudIT a Windows az Apache szolgáltatás számla kell lennie, hogy a <i>rendszeres</i> felhasználó (vagy az adminisztrátor). Ez azért van, mert <i>Helyi rendszer</i> az Apache futtatására használt számla nem fér hozzá semmilyen hálózati forráshoz. IE - Nem használhatjuk az Apache-t, ha a Local System fiókként fut, hogy a könyvvizsgálati szkriptet Windows PC-kre másoljuk.';

$GLOBALS["lang"]['When the configuration option is set, we take this into account for devices for a certain defined subset of match rules where the configuration item has been enabled. These rules are:'] = 'Amikor a konfigurációs beállítás be van állítva, ezt figyelembe vesszük az eszközök egy bizonyos meghatározott alcsoportjához egyezési szabályok, ahol a konfigurációs elem be van kapcsolva. E szabályok a következők:';

$GLOBALS["lang"]['When the rules run in discovery, any matching rules will appear in the discovery log. See below for an example.'] = 'Amikor a szabályok megszületnek, minden egyező szabály megjelenik a felfedezési naplóban. Példaként lásd alább.';

$GLOBALS["lang"]['When this benchmark is scheduled to be executed. Derived from the associated <code>tasks.type</code> and <code>tasks.sub_resource_id</code>.'] = 'Ha ezt a referenciaértéket a tervek szerint végrehajtják. A társult vállalkozásból származó <code>tasks.type</code> és <code>tasks.sub_resource_id</code>.';

$GLOBALS["lang"]['When this log was created.'] = 'Amikor ezt a naplót létrehozták.';

$GLOBALS["lang"]['When this queue item started processing.'] = 'Amikor ez a sor tétel kezdett feldolgozni.';

$GLOBALS["lang"]['When using Open-AudIT Professional or Enterprise, widgets are available and customisable to be displayed on Dashboards.'] = 'Az Open- AudIT Professional vagy Enterprise használatakor a Dashboardokon megjeleníthetők a bővítmények.';

$GLOBALS["lang"]['When we are converting an internally selected device to an object for the external system, what should the external data be. EG: integer, string, etc.'] = 'Amikor egy belsőleg kiválasztott eszközt a külső rendszer tárgyává alakítunk át, mi legyen a külső adat. EG: egész szám, string stb.';

$GLOBALS["lang"]['When we execute this baseline, should we check for items on devices that are not in a policy for this baseline.'] = 'Ha végrehajtjuk ezt az alapvonalat, ellenőriznünk kell azokat az eszközöket, amelyek nincsenek ebben az alaphelyzetben.';

$GLOBALS["lang"]['When we receive an open port, should we attempt to test for the version of the service currently running upon it? This assists in confirming actual running services.'] = 'Amikor nyílt kikötőt kapunk, meg kellene próbálnunk tesztelni a jelenleg rajta futó szolgáltatás változatát? Ez segít megerősíteni a tényleges működési szolgáltatásokat.';

$GLOBALS["lang"]['When you are using Clouds to discover your Amazon AWS instances, you will need two credential items - key and secret key. Your key should already be known to you and your secret key as well. Of note is that you cannot retrieve your secret key using the AWS Console provided by Amazon. If you have misplaced it, you will need to generate a new one.'] = 'Amikor a Clouds, hogy fedezze fel az Amazon AWS-esetek, akkor lesz szükség két hitelképes tételek - kulcs és titkos kulcs. A kulcsát már ismernie kellene, és a titkos kulcsát is. A megjegyzés az, hogy nem lehet visszaszerezni a titkos kulcsot az AWS Console által biztosított Amazon. Ha eltévedt, akkor egy újat kell létrehoznia.';

$GLOBALS["lang"]['When you are using Clouds to discover your Microsoft Azure instances, you will need four credential items - subscription id, tenant id, client id and client secret.'] = 'Ha a Clouds-ot a Microsoft Azure-esetek felfedezésére használja, négy kreditre lesz szüksége - előfizetés, bérlő-azonosító, kliens-azonosító és ügyféltitok.';

$GLOBALS["lang"]['When you create a discovery you have an option to devices_assigned_to_org. This means that any devices discovered for this discovery will be assigned (have <code>devices.org_id</code> set to) your chosen Organisation.'] = 'Ha felfedezést készítesz, akkor lehetőséged van a _ entred _ to _ org eszközökre. Ez azt jelenti, hogy a felfedezés során felfedezett eszközöket ( <code>devices.org_id</code> a) a kiválasztott szervezet.';

$GLOBALS["lang"]['When you create a new discovery if you click the Advanced button, you have many more options to change, one of them being the type of discovery.Types have always been Subnet (encompassing the above range, subnet, ip options) and Active Directory. As at v4.1, Open-AudIT has a new discovery type called Seed.'] = 'Amikor létrehozol egy új felfedezést, ha rákattintasz a Speciális gombra, sokkal több lehetőséged van a változásra, az egyik a felfedezés típusa. Típusok mindig is Subnet (magában foglalja a fenti tartomány, alnet, ip opciók) és Active Directory. Mint a v4.1-ben, az Open- AudIT-nak van egy új felfedező típusa, a Seed.';

$GLOBALS["lang"]['When you enable a Query to be run on a schedule, the query is emailed to your chosen address. You must have set up email via menu -> Admin -> Enterprise -> Email Config. We also have a <i>test email<i> button on that page. Input your details, save it and then test it. You should have a modal box that informs you if it successful or not and obviously a test email should arrive if it is successful. Once you have email configured, your scheduled query can be configured.<br><br>Provide a name, optional description, choose <i>Query</i> type, select the desired query, provide an email address, choose a format and set the schedule.<br><br>Provide an hour (hour only, no minutes as yet), give the task a name (this is not the name of the actual scheduled query itself), select which days you would like the query run, choose which query you would like run, supply an email address and choose a query format and you are done.<br>Queries will be sent with an email body of the query (in html format) and the query attached in the requested format.'] = 'Amikor lehetővé teszi, hogy egy lekérdezés futtassa a menetrend, a lekérdezés e-mailben a választott címet. Az e-mailt menü útján kell beállítani - > Admin - > Enterprise - > E-mail Config. Van egy <i>teszt e-mail<i> gombbal azon az oldalon. Írja be a részleteket, mentse el, és tesztelje le. Meg kell egy modális doboz, amely tájékoztatja, ha sikeres vagy nem, és nyilvánvalóan egy teszt e-mail érkezik, ha sikeres. Az e-mail beállítás után a tervezett lekérdezés is beállítható.<br/><br/>Adja meg a nevet, a választható leírást, válasszon <i>Kérdés</i> type, válassza ki a kívánt lekérdezést, adjon meg egy e-mail címet, válasszon egy formátumot, és állítsa be a menetrendet.<br/><br/>Adjon egy órát (csak óra, perc még nincs), adja meg a feladatot egy nevet (ez nem a neve a tényleges tervezett lekérdezés maga), válassza ki, hogy mely napokon szeretné a lekérdezés fut, válassza ki, melyik lekérdezés szeretné futtatni, adjon meg egy e-mail címet, és válasszon egy lekérdezés formátum, és kész.<br/>A lekérdezéseket a lekérdezés (html formátumban) és a lekérdezés kívánt formátumú e-mailjével küldik el.</i></i>';

$GLOBALS["lang"]['When you enter text into one of the column headings, you can simply use a normal word. For example, when you enter <code>computer</code> into the search box above the <i>Type</i> column, the search will return all devices with the type of Computer. Essentially, Open-AudIT requests data using a URL like <code>devices?devices.type=computer</code>. Now there is one significant difference when using the dataTables search, versus the standard'] = 'Ha a szöveget az egyik oszlopba írja be, egyszerűen használhat egy normális szót. Például, amikor belépsz <code>computer</code> A <i>Típus</i> oszlop, a keresés visszaadja az összes eszközt a számítógép típusával. Lényegében, Open- Aud Az adatlekérdezés URL használatával történik. <code>devices?devices.type=computer</code>. Most van egy jelentős különbség, amikor használja az adattáblák keresés, szemben a standard';

$GLOBALS["lang"]['where'] = 'ahol';

$GLOBALS["lang"]['Where'] = 'ahol';

$GLOBALS["lang"]['Where $x is a number. This many LDAP entries are in the DB and have been retrieved.'] = 'Ahol a $x egy szám. Ez a sok LDAP bejegyzés a DB-ben van, és visszaszereztük.';

$GLOBALS["lang"]['Where on the Device Details screen you would like to see this field appear.'] = 'Ahol a Device Details képernyőn szeretné látni ezt a mezőt.';

$GLOBALS["lang"]['Where the rack is in the row.'] = 'Ahol az állvány van a sorban.';

$GLOBALS["lang"]['Whether the vulnerability affects components beyond its own using Impact, Availability and Confidentiality.'] = 'Az, hogy a sebezhetőség a Hatás, elérhetőség és bizalmas jelleg felhasználásával a saját összetevőin túlmutató elemeket érint-e.';

$GLOBALS["lang"]['Whether user interaction is required (None, Passive, Active).'] = 'Függetlenül attól, hogy szükséges-e a felhasználói interakció (nincs, passzív, aktív).';

$GLOBALS["lang"]['Which OS this benchmark applies to.'] = 'Melyik OS-ra vonatkozik ez a referenciaérték?';

$GLOBALS["lang"]['Which devices should Open-AudIT create from the external system (if any). Using All, None or a given Attribute.'] = 'Milyen eszközök Open- AudIT létre a külső rendszer (ha van). Az All, None vagy egy adott Attribútum használata.';

$GLOBALS["lang"]['Which network should we discover. This should be in the format of'] = 'Melyik hálózatot kellene felfedeznünk. Ennek a következőképpen kell történnie:';

$GLOBALS["lang"]['Which sub-menu should we display this query in.'] = 'Melyik menü legyen a lekérdezés?';

$GLOBALS["lang"]['Who made this rack.'] = 'Ki csinálta ezt a dudát?';

$GLOBALS["lang"]['Why Windows Server Only?'] = 'Miért csak Windows Server?';

$GLOBALS["lang"]['Why do we exclude this policy?'] = 'Miért zárjuk ki ezt a politikát?';

$GLOBALS["lang"]['Wide Area Network'] = 'Szélessávú hálózat';

$GLOBALS["lang"]['Wide area network'] = 'Széleskörű hálózat';

$GLOBALS["lang"]['Widget'] = 'Szélesség';

$GLOBALS["lang"]['Widget #'] = 'Szélesség #';

$GLOBALS["lang"]['Widget # '] = 'Szélesség # ';

$GLOBALS["lang"]['Widget Type'] = 'Szélességtípus';

$GLOBALS["lang"]['widgets'] = 'Szélességek';

$GLOBALS["lang"]['Widgets'] = 'Szélességek';

$GLOBALS["lang"]['Widgets are designed to be used on Dashboards. Enterprise users have complete freedom to create, update and delete widgets as required.'] = 'A szélességeket a műszerfalon történő használatra tervezték. Az Enterprise felhasználók teljes szabadságot élveznek a szükséges bővítmények létrehozására, frissítésére és törlésére.';

$GLOBALS["lang"]['width'] = 'Szélesség';

$GLOBALS["lang"]['Width'] = 'Szélesség';

$GLOBALS["lang"]['windows'] = 'Windows';

$GLOBALS["lang"]['Windows'] = 'Windows';

$GLOBALS["lang"]['Windows Packages'] = 'Windows csomagok';

$GLOBALS["lang"]['Windows Test Script'] = 'Windows teszt szkript';

$GLOBALS["lang"]['Windows User Work Unit #1'] = 'Windows felhasználói munkaegység # 1';

$GLOBALS["lang"]['Windows User Work Unit #2'] = 'Windows felhasználói munkaegység # 2';

$GLOBALS["lang"]['Windows may also have blocked the service from starting. On the target start the Windows Security applet and ensure the WinExeSvc executable is allowed to run (click Allow on Device and then Start Actions).'] = 'Lehet, hogy a Windows blokkolta a szolgáltatást. A cél indítsa el a Windows Security applet, és győződjön meg róla, hogy a WinExeSvc futtatható lehet futtatni (Kattintson az Engedélyezés eszközre, majd Start akciók).';

$GLOBALS["lang"]['Winexe page on Samba'] = 'Winexe oldal Sambáról';

$GLOBALS["lang"]['Winexe requires the following Windows services to be started and running: netlogon and rpc services to be running.<br><br>Please log on to the target Windows machine and check the services for netlogon and rpc are running.'] = 'Winexe megkívánja, hogy a következő Windows szolgáltatások induljanak és működjenek: netlogon és rpc szolgáltatások futtatása.<br/><br/>Kérjük, jelentkezzen be a cél Windows gép, és ellenőrizze a szolgáltatások netlogon és rpc fut.';

$GLOBALS["lang"]['Winexe uses the admin$ and RPC (net service start) to install and start a remote service (winexesvc). This service initializes a named pipe that is used to transport commands from the Open-AudIT server to the target and the output in the reverse way. When finished, the named pipe closes and the winexesvc waits for more connections or uninstalls (depending of the options given).'] = 'Winexe használja az admin $és RPC (nettó szolgáltatás kezdete) telepíteni és elindítani egy távoli szolgáltatás (winexesvc). Ez a szolgáltatás inicializálja a megnevezett cső, amely a szállítási parancsok az Open- AudIT szerver a cél és a kimenet fordítva. Befejezésekor a megnevezett cső bezárul, és a winexesvc több kapcsolatra vagy uninstallra vár (a megadott lehetőségektől függően).';

$GLOBALS["lang"]['Wireless Local Area Network'] = 'Vezeték nélküli helyi hálózat';

$GLOBALS["lang"]['With the 3.3.0 release of Open-AudIT we have introduced the concept of a Cluster. This intuitively maps to the idea of a web cluster, database cluster or file cluster (or one of several other purposes) into a given type (high availability, redundancy, scaling, etc).<br><br>Depending on the purpose of cluster chosen, the reporting will be slightly different.<br><br>For example, if you create a Cluster with a purpose of virtualisation, when you have added devices to it you will also see the virtual machines on those devices.'] = 'Az Open- AudIT 3.3.0 kiadásával bemutattuk a Klaszter koncepcióját. Ez az intuitív térképek egy webes klaszter, adatbázis klaszter vagy fájlklaszter (vagy több más cél) egy adott típusba (magas rendelkezésre állás, redundancia, méretezés, stb).<br/><br/>A kiválasztott klaszter céljától függően a jelentés kissé eltérő lesz.<br/><br/>Például, ha létrehoz egy Klaszter a virtualizáció céljából, ha hozzá eszközöket, akkor is látni fogja a virtuális gépek ezen eszközök.';

$GLOBALS["lang"]['With the introduction of the Clouds feature, you can supply details of your cloud, Amazon AWS or Microsoft Azure, and Open-AudIT will use the relevant API to retrieve a list of locations, networks, and instances, then discover each of these instances.'] = 'A bevezetés a Clouds funkció, akkor adja meg a részleteket a felhő, az Amazon AWS vagy a Microsoft Azure, és Open- AudIT fogja használni a megfelelő API, hogy egy listát a helyszínek, hálózatok, és az esetek, majd felfedezni minden ilyen esetek.';

$GLOBALS["lang"]['wmi_fails'] = 'Wmi Fails';

$GLOBALS["lang"]['Wmi Fails'] = 'Wmi Fails';

$GLOBALS["lang"]['wmi_timeout'] = 'Wmi Timeout';

$GLOBALS["lang"]['Wmi Timeout'] = 'Wmi Timeout';

$GLOBALS["lang"]['workgroup'] = 'Munkacsoport';

$GLOBALS["lang"]['Workgroup'] = 'Munkacsoport';

$GLOBALS["lang"]['Working Credentials'] = 'Munkakörülmények';

$GLOBALS["lang"]['Wrap Up'] = 'Csomagolás';

$GLOBALS["lang"]['Written in the PHP scripting language.'] = 'PHP scripting nyelven íródott.';

$GLOBALS["lang"]['XML'] = 'XML';

$GLOBALS["lang"]['Yellow Query'] = 'Sárga lekérdezés';

$GLOBALS["lang"]['Yemen'] = 'Jemen';

$GLOBALS["lang"]['Yes'] = 'Igen.';

$GLOBALS["lang"]['You are able to define extra directories to be scanned as entries in the Executables collection. When defined, the directory and all sub-directories are scanned for files that are executable. You can also define directories and files to be excluded. When activated, these are injected into the linux audit script and performed whenever it is run (usually as part of a discovery). If you want these in a script you can manually copy to the target, use menu -> Discover -> Scripts -> List Scripts and download the script from there.'] = 'Ön képes meghatározni a további könyvtárakat, hogy szkennelni, mint bejegyzések a Végrehajtható gyűjteményben. Ha meg van határozva, a könyvtárat és az összes alkönyvtárat be kell szkennelni a végrehajtható fájlokhoz. A könyvtárakat és a kizárandó fájlokat is megadhatja. Aktiváláskor ezeket a linux könyvvizsgálati szkriptbe kell fecskendezni, és akkor kell elvégezni, amikor fut (általában egy felfedezés részeként). Ha szeretné ezeket egy szkript lehet kézzel másolni a cél, használja a menü - > Fedezze fel - > Scripts - > Lista Scripts és töltse le a script onnan.';

$GLOBALS["lang"]['You are always free to modify the audit scripts themselves to suit your specific requirements. You will need to (re)incorporate those changes whenever you upgrade as they will be overwritten by the default scripts. I would suggest saving a master copy of your modified script, upgrading Open-AudIT, then running a diff between the new default script and your modified script and applying the differences. The audit scripts are native scripts (Windows is VBScript, all others are Bash). Simple and easy to modify - just make sure to have a copy of your changes before you upgrade.'] = 'Ön mindig szabadon módosíthatja a könyvvizsgálati szkriptek magukat, hogy megfeleljen a konkrét követelményeknek. Meg kell (újra) bele ezeket a változásokat, amikor frissíteni, mivel azok felülírják az alapértelmezett szkriptek. Javaslom, hogy mentsük meg a módosított szkript mestermásolatát, frissítsük az Open- AudIT-ot, majd futtassunk egy diffet az új alapértelmezés és a módosított szkript között, és alkalmazzuk a különbségeket. A könyvvizsgálati szkriptek natív szkriptek (Windows VBScript, minden más Bash). Egyszerű és könnyen módosítható - csak győződjön meg róla, hogy egy másolatot a változások előtt frissíteni.';

$GLOBALS["lang"]['You are running version'] = 'Te futtatod a verziót.';

$GLOBALS["lang"]['You can access the collection using the normal Open-AudIT JSON based API. Just like any other collection. Please see'] = 'A gyűjtemény a normál Open- AudIT JSON alapú API használatával érhető el. Mint minden más gyűjtemény. Kérem, nézze meg.';

$GLOBALS["lang"]['You can also'] = 'Ön is';

$GLOBALS["lang"]['You can also see at the bottom of the page a table showing the devices the changes will be applied to.'] = 'Az oldal alján egy táblázat is látható, amelyen az eszközök a változásokat mutatják.';

$GLOBALS["lang"]['You can also specify properties using the below format.'] = 'Az ingatlanokat az alábbi formátumban is megadhatja.';

$GLOBALS["lang"]['You can always run the Firstwave VM on your virtual infrastructure (ESX, Azure, et al). The Firstwave VM runs Debian linux and is free from OS licensing concerns and limitations. Or install on your own Linux distro of choice. We support Redhat 9, Ubuntu 20.04, 22.04 and 24.04 as well as Debian 11 and 12.'] = 'A Firstwave VM futtatható virtuális infrastruktúrán (ESX, Azure, et al). A Firstwave VM futtatja a Debian Linux-ot, és mentes az OS engedélyezési aggályoktól és korlátozásoktól. Vagy telepítse a saját Linux disztró választás. Támogatjuk a Redhat 9, Ubuntu 20.04, 22.04 és 24.04, valamint a Debian 11 és 12.';

$GLOBALS["lang"]['You can assign devices to a location automatically using'] = 'Automatikusan hozzárendelhet eszközöket egy olyan helyre, ahol';

$GLOBALS["lang"]['You can assign devices using custom'] = 'Az eszközök hozzárendelése egyedi';

$GLOBALS["lang"]['You can audit a remote machine without the using the actual Administrator account by creating a registry key. Create the below key on every machine to be audited and make sure the user credentials used is a member of the Administrators group.'] = 'Egy távoli gépet a tényleges Administrator számla használata nélkül is ellenőrizhet egy regiszterkulcs létrehozásával. Az alábbi kulcs létrehozása minden auditálandó gépen, és győződjön meg arról, hogy az alkalmazott felhasználói megbízólevél az igazgatási csoport tagja.';

$GLOBALS["lang"]['You can certainly run a discovery without any valid credentials on the devices within the network, however, the information retrieved will be a very small subset of what Open-AudIT has the ability to retrieve <i>with</i> credentials.'] = 'Minden bizonnyal futtatni egy felfedezés nélkül érvényes hitelesítő az eszközök a hálózaton belül, azonban, az információt szerzett lesz egy nagyon kis részhalmaza, amit Open- AudIT képes visszaszerezni <i>és</i> hitelesítő.';

$GLOBALS["lang"]['You can create a baseline, run it against a group of devices and view the results, add scheduled execution, add more tables for comparison (currently only software, netstat ports and users are enabled), in place baseline editing, archiving of results and more.'] = 'Létrehozhat egy alapvonalat, lefuttathatja egy eszközcsoport segítségével, megtekintheti az eredményeket, hozzáadhat ütemezett végrehajtást, további táblázatokat is hozzáadhat összehasonlításhoz (jelenleg csak szoftverek, netstat portok és felhasználók engedélyezettek), a kiindulási szerkesztés helyén, az eredmények archiválásával és így tovább.';

$GLOBALS["lang"]['You can create a script with all the options for any of the existing audit scripts - not just Windows. AIX, ESX, Linux, OSX and Windows are all covered.'] = 'Létrehozhat egy szkriptet az összes opcióval a meglévő könyvvizsgálati szkriptekhez - nem csak a Windows-hoz. AIX, ESX, Linux, OSX és Windows mind le van fedve.';

$GLOBALS["lang"]['You can customize the entire integration down to which system (NMIS or Open-AudIT) is the authority on a per field basis. There are options to create and/or update devices in Open-AudIT or NMIS. Should we run a discovery on a created or updated device and so much more. There are explanations for each item on the right side of the page.'] = 'A teljes integrációt be lehet szabni, hogy melyik rendszer (NMIS vagy Open- AudIT) a hatóság területenként. Vannak opciók, hogy hozzon létre és / vagy frissítse eszközök Open- AudIT vagy NMIS. Ha lefuttatunk egy felfedezést egy létrehozott vagy frissített eszközön, és még sokkal többet. Vannak magyarázatok minden elem a jobb oldalon az oldalon.';

$GLOBALS["lang"]['You can define an application and associate a device to this application. A device may be associated to more than one application. An application may be associated to more than one device.'] = 'Meghatározhat egy alkalmazást, és ehhez az alkalmazáshoz csatolhat egy eszközt. Egy eszköz egynél több alkalmazáshoz is kapcsolódhat. Az alkalmazás egynél több eszközhöz kapcsolható.';

$GLOBALS["lang"]['You can edit the value of the Additional Field for each individual device on the device details page. View the device details screen, open the section containing the field and (if you have'] = 'A kiegészítő mező értékét minden egyes eszköz esetében szerkesztheti az eszköz részletes oldalán. Tekintse meg az eszköz részletes képernyőjét, nyissa meg a mezőt tartalmazó részt, és';

$GLOBALS["lang"]['You can limit the Device Seed Discovery to fall within a strict set of parameters, including: <i>Restrict to Subnet</i> and <i>Restrict to Private</i>'] = 'Korlátozhatja az eszköz Seed Discovery alá tartozik szigorú paraméterek, beleértve: <i>Szigorúan az alnetre</i> és <i>Szigorúan bizalmas</i>';

$GLOBALS["lang"]['You can manually assign devices using'] = 'Kézzel hozzárendelhet eszközöket';

$GLOBALS["lang"]['You can override this by providing the format option in the URL.'] = 'Ezt felülírhatja a formátumopció megadásával az URL-ben.';

$GLOBALS["lang"]['You can select individual devices by clicking their check-boxes on the right side or selecting all devices clicking the checkbox on the top right of the table (underneath the Edit button that looks like a pencil).'] = 'Kiválaszthatja az egyes eszközöket, ha a jobb oldalon rákattint az ellenőrző dobozokra, vagy kiválasztja az összes eszközt, amely az asztal jobb felső sarkában található (a Ceruzára hasonlító Edit gomb alatt).';

$GLOBALS["lang"]['You can select the devices to be integrated by choosing any attribute in the system (device) table and matching (see menu → Admin → Database → List Tables → system for a list of fields). An attribute match can only match a single value.'] = 'Kiválaszthatja az integrálandó eszközöket a rendszer (eszköz) táblázatban található attribútumok kiválasztásával és megfeleltetésével (lásd a menüpontot → Admin → Adatbázis → Lista Táblázatok → rendszer a mezők listájához). Egy attribútum mérkőzés csak egyetlen értékkel egyezhet.';

$GLOBALS["lang"]['You can turn any server into a collector by going to menu -> Admin -> Collectors -> Make this install a Collector. You will need credentials to log on to the server this install will report in to.'] = 'Minden szervert gyűjtővé változtathatsz a menü segítségével - > Admin - > Gyűjtők - > Ezt telepítse egy Gyűjtő. Szüksége lesz hitelesítő bejelentkezni a szerver ez a telepítés jelenti.';

$GLOBALS["lang"]['You can view by clicking on the blue view icon. You can also edit or delete if you have permissions.'] = 'A kék nézet ikonra kattintva megtekinthető. Szerkeszthet vagy törölhet, ha jogosítványai vannak.';

$GLOBALS["lang"]['You do not have the PHP MBString extension installed. This extension is required.'] = 'Nincs telepítve a PHP MBString kiterjesztés. Ez a kiterjesztés szükséges.';

$GLOBALS["lang"]['You do not have the PHP SNMP extension installed. This extension is highly recommended.'] = 'Nincs telepítve a PHP SNMP kiterjesztés. Ez a kiterjesztés erősen ajánlott.';

$GLOBALS["lang"]['You may want to copy and paste this URL in an email to your staff.'] = 'Lehet, hogy ezt az URL-t szeretné másolni és beilleszteni egy e-mailben a személyzet.';

$GLOBALS["lang"]['You may wish to have Active Directory or OpenLDAP authenticate your users, but not provide authorization. To do this, make sure <i>Use for Authentication</i> is set to Y and <i>Use for Roles</i> is set to N. The credentials will be validated by LDAP, but you will need to have the user already created and assigned Roles in Open-AudIT. This also <i>automatically</i> applies to'] = 'Lehet, hogy szeretné, hogy az Active Directory vagy OpenLDAP hitelesítse a felhasználók, de nem ad engedélyt. Hogy ezt megtehesd, győződj meg róla, <i>Felhasználás hitelesítésre</i> Y és <i>Alkalmazás tekercsekhez</i> N. Az igazolásokat LDAP hitelesíti, de a felhasználónak már létre kell hoznia és hozzá kell rendelnie a Rolles-t az Open- AudIT-ban. Ez is <i>automatikusan</i> alkalmazandó';

$GLOBALS["lang"]['You might have noticed these match rules are for items that might not be globally unique. Some examples:'] = 'Lehet, hogy észrevette, hogy ezek a szabályok a termékek, amelyek nem lehet globális egyedi. Néhány példa:';

$GLOBALS["lang"]['You must delete your existing license before adding a new license.'] = 'Új licenc hozzáadása előtt törölnie kell a meglévő licencét.';

$GLOBALS["lang"]['You must have working SSH credentials to execute a benchmark. The following Operating Systems are currently supported: Centos 7, Debian 12, Redhat 7, Redhat 8, Redhat 9, SLES 15, Ubuntu 20.04, Ubuntu 22.04. We plan to expand on these with further releases.'] = 'Biztos van működő SSH hitelesítő, hogy végrehajtsa a referenciaérték. Jelenleg a következő operációs rendszereket támogatják: Centos 7, Debian 12, Redhat 7, Redhat 8, Redhat 9, SLES 15, Ubuntu 20.04, Ubuntu 22.04. A tervek szerint bővíteni fogjuk ezeket a további kiadásokkal.';

$GLOBALS["lang"]['You should copy and paste the entire file into the textbox. In the case below, copy ALL the text.'] = 'Másolja le és illessze be az egész fájlt a szövegdobozba. Az alábbi esetben másolja le az összes szöveget.';

$GLOBALS["lang"]['You should not include the edited_by and edited_date fields. These will be automatically set.'] = 'Nem szabad a szerkesztett _ by és szerkesztett _ date mezőket megadni. Ezek automatikusan be lesznek állítva.';

$GLOBALS["lang"]['You should only change the second sentence of text, the'] = 'Csak meg kell változtatni a második mondat a szöveg, a';

$GLOBALS["lang"]['You should substitute the required column (eg, org_id) for ATTRIBUTE_NAME.'] = 'Az ATTRIBUTE _ NAME-hez szükséges oszlopot (pl.';

$GLOBALS["lang"]['You should use a header line containing the names of the columns you wish to populate, then your data lines below that.'] = 'Egy fejlécsort kell használnia, amely tartalmazza az oszlopok neveit, melyeket be szeretne sorolni, majd az adatsorokat alatta.';

$GLOBALS["lang"]['You should use only those tables that contain attributes you need. I usually use a left join. For example'] = 'Csak azokat az asztalokat használhatod, amelyek a szükséges attribútumokat tartalmazzák. Általában baloldali csatlakozót használok. Például';

$GLOBALS["lang"]['You will need a'] = 'Szüksége lesz egy';

$GLOBALS["lang"]['You will need the ports for WMI on the Windows firewall opened on each target Windows computer. For Windows Core servers, ensure you allow the firewall connections as per'] = 'Szükséged lesz a portokra a WMI-hez a Windows tűzfalon minden egyes cél Windows számítógépen. Windows Törzsszerverek, biztosítják, hogy a tűzfal csatlakozások, mint a';

$GLOBALS["lang"]['You will see a list of'] = 'Látni fogja a listát a';

$GLOBALS["lang"]['YouTube Tutorials'] = 'YouTube Tutorials';

$GLOBALS["lang"]['Your AWS EC2 API key.'] = 'Az AWS EC2 API kulcsod.';

$GLOBALS["lang"]['Your Google Compute credentials as JSON.'] = 'A Google Compute hitelesítő mint JSON.';

$GLOBALS["lang"]['Your Host is'] = 'A A fogadó';

$GLOBALS["lang"]['Your Licenses'] = 'Engedélyei';

$GLOBALS["lang"]['Your Microsoft Azure Client ID.'] = 'A Microsoft Azure kliens azonosítója.';

$GLOBALS["lang"]['Your Microsoft Azure Client Secret.'] = 'A Microsoft Azure kliens titkod.';

$GLOBALS["lang"]['Your Microsoft Azure Subscription ID.'] = 'A Microsoft Azure Subscription azonosítója.';

$GLOBALS["lang"]['Your Microsoft Azure Tennant ID.'] = 'A Microsoft Azure Tennant azonosítója.';

$GLOBALS["lang"]['Your PHP version is'] = 'A PHP verziód:';

$GLOBALS["lang"]['Your SQL to select attributes that will populate this query.'] = 'Az SQL, hogy válassza attribútumok, amelyek benépesítik ezt a kérdést.';

$GLOBALS["lang"]['Your SQL to select devices that will populate this group.'] = 'Az SQL, hogy válasszon eszközöket, amelyek benépesítik ezt a csoportot.';

$GLOBALS["lang"]['Your SSH key.'] = 'Az SSH kulcsod.';

$GLOBALS["lang"]['Your access credentials, as per that clouds native API.'] = 'A hozzáférési engedélyed, az eredeti API szerint.';

$GLOBALS["lang"]['Your data is your data. You can extract it any time you like. We even helpfully provide exports to CSV, JSON and XML. And we have a JSON API. And you can write custom reports and have those output in CSV, XML, and JSON! Again, it is your data - not anyone else. You can be confident that the security of your data is in your hands.'] = 'Az adataid az adataid. Bármikor kivonhatod, amikor csak akarod. Még a CSV, JSON és XML exportját is segítjük. És van egy JSON API-nk. És egyedi jelentéseket írhatsz, és a kimenet CSV, XML és JSON! Ismétlem, a maga adatai, nem mások. Biztosak lehetnek benne, hogy adataik biztonsága a kezükben van.';

$GLOBALS["lang"]['Your database platform is'] = 'Az adatbázis platform';

$GLOBALS["lang"]['Your description of the status of this connection (provisioned, retired, etc).'] = 'A kapcsolat állapotának leírása (ellátás, nyugdíjas, stb.).';

$GLOBALS["lang"]['Your description of this item.'] = 'A leírás erről a tételről.';

$GLOBALS["lang"]['Your generic name for this piece of software'] = 'Ennek a szoftvernek az általános neve.';

$GLOBALS["lang"]['Your generic version for this piece of software'] = 'A generikus verziója ehhez a szoftverhez';

$GLOBALS["lang"]['Your user should now be able to logon by clicking the <i>Logon with Entra</i> button on the Open-AudIT logon page. As mentioned above, if the logon fails, please check the logfile and verify the users <i>preferred username</i>.<br><br>And that should be all there is too it. Now your users should have one less set of credentials to remember!<br><br>As always, if you have troubles with this feature, please email'] = 'A felhasználónak most már képesnek kell lennie a bejelentkezésre a <i>Logon az Entrával</i> gombbal az Open- AudIT logon oldalon. A fent említettek szerint, ha a logon nem működik, kérjük, ellenőrizze a logfile-t és ellenőrizze a felhasználókat <i>preferált felhasználónév</i>.<br/><br/>És ez minden, ami van. Most már a felhasználók kell eggyel kevesebb hitelesítő emlékezni!<br/><br/>Mint mindig, ha problémái vannak ezzel a funkcióval, kérjük, email';

$GLOBALS["lang"]['Your user should now be able to logon by clicking the <i>Logon with OKTA</i> button on the Open-AudIT logon page. As mentioned above, if the logon fails, please check the logfile and verify the users <i>name</i>.<br><br>And that should be all there is too it. Now your users should have one less set of credentials to remember!<br><br>As always, if you have troubles with this feature, please email'] = 'A felhasználónak most már képesnek kell lennie a bejelentkezésre a <i>Logon az OKTA-val</i> gombbal az Open- AudIT logon oldalon. A fent említettek szerint, ha a logon nem működik, kérjük, ellenőrizze a logfile-t és ellenőrizze a felhasználókat <i>név</i>.<br/><br/>És ez minden, ami van. Most már a felhasználók kell eggyel kevesebb hitelesítő emlékezni!<br/><br/>Mint mindig, ha problémái vannak ezzel a funkcióval, kérjük, email';

$GLOBALS["lang"]['Your web server is'] = 'A webszerver';

$GLOBALS["lang"]['Zambia'] = 'Zambia';

$GLOBALS["lang"]['Zimbabwe'] = 'Zimbabwe';

$GLOBALS["lang"]['a String'] = 'a';

$GLOBALS["lang"]['active'] = 'aktív';

$GLOBALS["lang"]['active directory'] = 'aktív könyvtár';

$GLOBALS["lang"]['active/active'] = 'aktív / aktív';

$GLOBALS["lang"]['active/passive'] = 'aktív / passzív';

$GLOBALS["lang"]['advertisement'] = 'reklám';

$GLOBALS["lang"]['alert'] = 'riasztás';

$GLOBALS["lang"]['all'] = 'valamennyi';

$GLOBALS["lang"]['allocated'] = 'elosztva';

$GLOBALS["lang"]['amazon'] = 'amazon';

$GLOBALS["lang"]['an Integer'] = 'egy';

$GLOBALS["lang"]['and'] = 'és';

$GLOBALS["lang"]['and / or'] = 'és / vagy';

$GLOBALS["lang"]['and a support ticket will be created and actioned.'] = 'és létrehoznak és aktiválnak egy támogató jegyet.';

$GLOBALS["lang"]['and another'] = 'és egy másik';

$GLOBALS["lang"]['and download the Latest Release self-installer. You may need to scroll down the page to find it.'] = 'és töltse le a Legújabb Release öntelepítő. Lehet, hogy lapoznod kell, hogy megtaláld.';

$GLOBALS["lang"]['and go to Applications -> Enterprise Applications (far left menu), then click <i>New application</i>.'] = 'és menjen az Applications - > Enterprise Applications (bal szélső menü) gombra, majd kattintson <i>Új alkalmazás</i>.';

$GLOBALS["lang"]['and its current time is'] = 'és a jelenlegi idő';

$GLOBALS["lang"]['and looks for a warranty expiration date prior to today.'] = 'és keresi a garancia lejárati ideje előtt ma.';

$GLOBALS["lang"]['and review what is possible.'] = 'és felülvizsgálni, ami lehetséges.';

$GLOBALS["lang"]['and the Sign-out redirect URI being'] = 'Az URI átirányítása';

$GLOBALS["lang"]['and the final lines will likely be of most interest. These lines should give you the exact point at which the login failed.'] = 'és a végső sorok valószínűleg a legnagyobb érdeklődést. Ezek a sorok megadják a pontos pontot, amikor a bejelentkezés nem sikerült.';

$GLOBALS["lang"]['antivirus'] = 'antivírus';

$GLOBALS["lang"]['application'] = 'Kérelem';

$GLOBALS["lang"]['approved'] = 'jóváhagyott';

$GLOBALS["lang"]['are required.'] = 'szükség van rá.';

$GLOBALS["lang"]['are used.'] = 'felhasználásra kerülnek.';

$GLOBALS["lang"]['as a device responding on this port.<br>This has caused some customers issues where firewalls respond on behalf of a non-existing device, and hence cause false positive device detection. We now have this attribute available to set per scan.'] = 'Egy eszköz, ami erre a portra reagál.<br/>Ez néhány ügyfél problémáját okozta, ahol a tűzfalak egy nem létező eszköz nevében reagálnak, és így hamis pozitív eszközfelismerést okoznak. Most már elérhető ez az attribútum, amit letapogatásonként állíthatunk be.';

$GLOBALS["lang"]['as the reference point and filters out all virtual machines via a check of the system.serial field for VM.'] = 'referenciapontként, és a rendszer ellenőrzésével kiszűri az összes virtuális gépet. A VM sorozatmezője.';

$GLOBALS["lang"]['assuming working and client populated DNS'] = 'a működő és az ügyfél által lakott DNS-t feltételezve';

$GLOBALS["lang"]['attribute'] = 'attribútum';

$GLOBALS["lang"]['auto'] = 'automatikus';

$GLOBALS["lang"]['backup'] = 'mentés';

$GLOBALS["lang"]['banned'] = 'tiltott';

$GLOBALS["lang"]['blog'] = 'blog';

$GLOBALS["lang"]['blue'] = 'kék';

$GLOBALS["lang"]['bottom'] = 'alsó';

$GLOBALS["lang"]['building'] = 'épület';

$GLOBALS["lang"]['can be used for user authentication (is the users name and password correct) as well as user authorization (what roles and orgs does a user have).<br><br>If a user is not in the configured LDAP but is in Open-AudIT (eg: the <i>admin</i> user), Open-AudIT will fallback to using itself for both authentication and authorization.<br><br>Open-AudIT uses specific LDAP groups for roles and orgs. A user must be a direct member of these group(s) in order for Open-AudIT to determine that users access.<br><br>When configured correctly, LDAP use can completely remove the need to create users in Open-AudIT. Simply configure Open-AudIT to use LDAP for both authentication and authorization. If the user does not exist in Open-AudIT but does exist in LDAP and their credentials are correct and they are a member of the required groups Open-AudIT will create the user account automatically.'] = 'felhasználóazonosításhoz (a felhasználó neve és jelszava helyes), valamint felhasználói engedélyezéshez (milyen szerepek és orgok vannak a felhasználónak) használható.<br/><br/>Ha egy felhasználó nincs a beállított LDAP-ban, de Open- AudIT-ban van (pl.: <i>admin</i> felhasználó), Open- AudIT visszaesik, hogy használja magát mind a hitelesítés és az engedélyezés.<br/><br/>Open- Aud IT speciális LDAP csoportokat használ szerepek és orgok. A felhasználónak közvetlen tagja kell, hogy legyen ezeknek a csoportoknak, hogy az Open- AudIT megállapítsa a felhasználók hozzáférését.<br/><br/>Ha jól konfiguráltuk, az LDAP használata teljesen eltávolíthatja a felhasználók létrehozásának szükségességét az Open- AudIT-ban. Egyszerűen állítsa be az Open- AudIT beállítást az LDAP használatához mind hitelesítéshez, mind engedélyezéshez. Ha a felhasználó nem létezik az Open- AudIT-ban, de létezik az LDAP-ban, és a megbízóleveleik helyesek, és az Open- AudIT csoport tagjai automatikusan létrehozzák a felhasználói fiókot.';

$GLOBALS["lang"]['can now retrieve details about a file or directory of files and monitor these files for changes as per other attributes in the Open-AudIT database. This feature works out of the box for Linux Open-AudIT servers, but needs a change to the service account name under a Windows Open-AudIT server. Supported clients are Windows and Linux.'] = 'Most már letöltheti a fájlokat tartalmazó fájlról vagy könyvtárról szóló részleteket, és az Open- AudIT adatbázis más attribútumainak megfelelően nyomon követheti ezeket a fájlokat. Ez a funkció a Linux Open- AudIT szerverek dobozából jön létre, de a Windows Open- AudIT szerver alatt meg kell változtatni a szolgáltatás fióknevét. Támogatott ügyfelek Windows és Linux.';

$GLOBALS["lang"]['changed'] = 'megváltozott';

$GLOBALS["lang"]['chosen. From there if a port for WMI, SSH or SNMP is detected responding the device is further queried using '] = 'Kiválasztott. Onnan, ha WMI, SSH vagy SNMP portot észlelnek, a készülék további lekérdezésével ';

$GLOBALS["lang"]['cloud'] = 'felhő';

$GLOBALS["lang"]['code'] = 'kód';

$GLOBALS["lang"]['collections and details pages is an icon to execute.'] = 'Gyűjtemények és részletek oldalak egy ikon végrehajtani.';

$GLOBALS["lang"]['collector'] = 'gyűjtő';

$GLOBALS["lang"]['collectors'] = 'gyűjtők';

$GLOBALS["lang"]['column'] = 'oszlop';

$GLOBALS["lang"]['column will contain either <i>y</i> or <i>n</i>. This indicates if this row is currently present on the device. For example software may be installed (which would result in <i>software.current = y</i>), but on a subsequent audit it may not be detected. Open-AudIT will then change this rows current attribute to <i>n</i>.'] = 'oszlop tartalmazza vagy <i>y</i> vagy <i>n</i>. Ez jelzi, hogy ez a sor jelen van-e az eszközön. Például szoftvert lehet telepíteni (ami <i>software.current = y</i>), de egy későbbi ellenőrzés során nem lehet kimutatni. Open- AudIT ezután megváltoztatja ezt a sort aktuális attribútum <i>n</i>.';

$GLOBALS["lang"]['column. The'] = 'oszlop A';

$GLOBALS["lang"]['compute'] = 'kiszámítása';

$GLOBALS["lang"]['config'] = 'konfig';

$GLOBALS["lang"]['console'] = 'konzol';

$GLOBALS["lang"]['contains'] = 'tartalmaz';

$GLOBALS["lang"]['create'] = 'létrehozás';

$GLOBALS["lang"]['created'] = 'Létrehozva';

$GLOBALS["lang"]['credentials'] = 'hitelesítő';

$GLOBALS["lang"]['critical'] = 'kritikus';

$GLOBALS["lang"]['cve'] = 'unit description in lists';

$GLOBALS["lang"]['database'] = 'adatbázis';

$GLOBALS["lang"]['debug'] = 'hibakeresés';

$GLOBALS["lang"]['delegated'] = 'átruházva';

$GLOBALS["lang"]['delete'] = 'Törlés';

$GLOBALS["lang"]['deleted'] = 'törölve';

$GLOBALS["lang"]['denied'] = 'elutasítva';

$GLOBALS["lang"]['details'] = 'részletek';

$GLOBALS["lang"]['devices'] = 'eszközök';

$GLOBALS["lang"]['digitalocean'] = 'digitálisóceán';

$GLOBALS["lang"]['discoveries'] = 'felfedezések';

$GLOBALS["lang"]['documentation for further details.'] = 'további részleteket tartalmazó dokumentáció.';

$GLOBALS["lang"]['does <strong>not</strong> provide vulnerability reports for the following'] = 'van <strong>nem</strong> sebezhetőségi jelentéseket készít a következőkről:';

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

$GLOBALS["lang"]['first'] = 'első';

$GLOBALS["lang"]['fixed'] = 'rögzített';

$GLOBALS["lang"]['floor'] = 'padló';

$GLOBALS["lang"]['for'] = 'MELLÉKLET';

$GLOBALS["lang"]['for authentication'] = 'hitelesítéshez';

$GLOBALS["lang"]['for this information.'] = 'Ezt az információt.';

$GLOBALS["lang"]['from Audit Script Result'] = 'a könyvvizsgálati szkript eredménye';

$GLOBALS["lang"]['from NMIS'] = 'NMIS-től';

$GLOBALS["lang"]['from address LocalHost (Using LRPC) running in the application container'] = 'a LocalHost (LRPC használata) címről az alkalmazás tartályában';

$GLOBALS["lang"]['front'] = 'elöl';

$GLOBALS["lang"]['front-left'] = 'balra';

$GLOBALS["lang"]['front-right'] = 'front- right';

$GLOBALS["lang"]['github'] = 'gitrub';

$GLOBALS["lang"]['google'] = 'Google';

$GLOBALS["lang"]['greater or equals'] = 'nagyobb vagy egyenlő';

$GLOBALS["lang"]['greater than'] = 'nagyobb, mint';

$GLOBALS["lang"]['group'] = 'csoport';

$GLOBALS["lang"]['has not been set'] = 'nincs beállítva';

$GLOBALS["lang"]['have a working reverse DNS resolvable IP to the target Windows PC.'] = 'van egy működő fordított DNS feloldható IP a cél Windows PC.';

$GLOBALS["lang"]['have the ability to be executed. On the'] = 'képes a kivégzésre. On';

$GLOBALS["lang"]['head'] = 'fej';

$GLOBALS["lang"]['here'] = 'Tessék.';

$GLOBALS["lang"]['high availability'] = 'magas rendelkezésre állás';

$GLOBALS["lang"]['howto'] = 'How to';

$GLOBALS["lang"]['if you clone a Linux virtual machine, unless you manually regenerate this (and in my experience, people do not) it will remain the same.'] = 'ha klónozol egy Linux virtuális gépet, hacsak nem regenerálod ezt kézzel (és tapasztalatom szerint az emberek nem), az ugyanaz marad.';

$GLOBALS["lang"]['ignored'] = 'figyelmen kívül hagyva';

$GLOBALS["lang"]['import the example device data'] = 'a mintaeszköz adatainak importálása';

$GLOBALS["lang"]['in'] = 'in';

$GLOBALS["lang"]['in Enterprise.'] = 'Az Enterprise-on.';

$GLOBALS["lang"]['in Inputs can have the following values.'] = 'A bemenetek a következő értékeket tartalmazhatják.';

$GLOBALS["lang"]['in Outputs can have the following values.'] = 'a kimenetek a következő értékeket.';

$GLOBALS["lang"]['inactive'] = 'inaktív';

$GLOBALS["lang"]['incomplete'] = 'hiányos';

$GLOBALS["lang"]['info'] = 'információ';

$GLOBALS["lang"]['installer will test for the presence of Nmap in its standard install locations of'] = 'telepítő teszteli a jelenléte Nmap a standard telepítési helyszínek';

$GLOBALS["lang"]['int, text, bool (y/n), etc'] = 'int, text, bool (y / n) stb.';

$GLOBALS["lang"]['is U.S. standard maintained by National Institute of Standards and Technology'] = 'a Nemzeti Szabványügyi és Technológiai Intézet által fenntartott amerikai szabvány';

$GLOBALS["lang"]['is an international standard for managing information security. It provides a framework for establishing, implementing, maintaining, and continually improving an Information Security Management System (ISMS).'] = 'nemzetközi szabvány az információbiztonság kezelésére. Ez keretet biztosít az információbiztonsági irányítási rendszer (ISMS) létrehozásához, végrehajtásához, fenntartásához és folyamatos javításához.';

$GLOBALS["lang"]['is based upon'] = 'a';

$GLOBALS["lang"]['is licensed to'] = 'engedéllyel rendelkezik';

$GLOBALS["lang"]['is next on the list and Open-AudIT can use password and key authentication. Open-AudIT can also use a sudo enabled user as opposed to the root use directly (although it can also use root). For best results, the root user or a sudo enabled user should be used (see Auditing Linux without root and Target Client Configuration on the wiki). Windows devices can also run ssh, however if Open-AudIT detects this it will stop the SSH queries and instead use WMI (assuming working WMI credentials).'] = 'a következő a listán, és Open- AudIT használhatja a jelszót és a kulcs hitelesítést. Az Open- AudIT a közvetlenül a root használathoz képest egy sudo engedélyezett felhasználót is használhat (bár a root is használható). A legjobb eredményekért a root felhasználót vagy egy sudo-t kell használni (lásd a Linux könyvvizsgálatát root nélkül és a Cél kliens konfigurációját a wiki-n). Windows eszközök is futtatni ssh, azonban ha Open- AudIT észleli ezt, akkor leállítja az SSH lekérdezéseket, és inkább használja a WMI (feltételezve működő WMI hitelesítő).';

$GLOBALS["lang"]['is the link to the'] = 'a kapcsolat a';

$GLOBALS["lang"]['item to view the specific tables and their columns. This will enable you to find exactly what you need, rather than trawling through the MySQL console of the schema creation script.'] = 'a konkrét táblázatok és oszlopaik megtekintésére szolgáló tétel. Ez lehetővé teszi, hogy megtalálja, amire szüksége van, ahelyett, hogy végighalad a MySQL konzol a séma létrehozása script.';

$GLOBALS["lang"]['key required to retrieve lat/long and display map. See'] = 'Lat / long lekérdezéséhez és a térkép megjelenítéséhez szükséges kulcs. Lásd:';

$GLOBALS["lang"]['left'] = 'balra';

$GLOBALS["lang"]['less or equals'] = 'kevesebb vagy egyenlő';

$GLOBALS["lang"]['less than'] = 'kevesebb, mint';

$GLOBALS["lang"]['license'] = 'engedély';

$GLOBALS["lang"]['licenses'] = 'Engedélyek';

$GLOBALS["lang"]['like'] = 'mint';

$GLOBALS["lang"]['line'] = 'vonal';

$GLOBALS["lang"]['list'] = 'lista';

$GLOBALS["lang"]['list View, using the Create button'] = 'list View, a Create gombbal';

$GLOBALS["lang"]['load balancing'] = 'terheléskiegyenlítés';

$GLOBALS["lang"]['location'] = 'hely';

$GLOBALS["lang"]['locations'] = 'helyszínek';

$GLOBALS["lang"]['managed'] = 'Kezelt';

$GLOBALS["lang"]['methods'] = 'módszerek';

$GLOBALS["lang"]['microsoft'] = 'microsoft';

$GLOBALS["lang"]['mount point'] = 'csatolási pont';

$GLOBALS["lang"]['must'] = 'kell';

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

$GLOBALS["lang"]['on devices where'] = 'olyan eszközökön, ahol';

$GLOBALS["lang"]['openldap'] = 'openldap';

$GLOBALS["lang"]['optimized'] = 'optimalizált';

$GLOBALS["lang"]['optionally '] = 'opcionális ';

$GLOBALS["lang"]['or'] = 'vagy';

$GLOBALS["lang"]['or the GitHub page at'] = 'vagy a GitHub oldalon';

$GLOBALS["lang"]['other'] = 'egyéb';

$GLOBALS["lang"]['package'] = 'csomag';

$GLOBALS["lang"]['page. Export your LDAP server from menu -> Admin -> LDAP Servers -> Details to JSON and save and include this data as well.'] = 'oldal. Exportálja LDAP szerverét a menüből - > Admin - > LDAP szerverek - > Részletek a JSON és mentse, és tartalmazza ezeket az adatokat is.';

$GLOBALS["lang"]['partition'] = 'partíció';

$GLOBALS["lang"]['pass'] = 'pass';

$GLOBALS["lang"]['pending'] = 'függőben';

$GLOBALS["lang"]['performance'] = 'teljesítmény';

$GLOBALS["lang"]['performed'] = 'végzett';

$GLOBALS["lang"]['permission'] = 'engedély';

$GLOBALS["lang"]['permissions required per endpoint'] = 'Végpontonként szükséges engedélyek';

$GLOBALS["lang"]['pie'] = 'Pite';

$GLOBALS["lang"]['planning'] = 'tervezés';

$GLOBALS["lang"]['predictable'] = 'kiszámítható';

$GLOBALS["lang"]['query'] = 'lekérdezés';

$GLOBALS["lang"]['rear'] = 'hátsó';

$GLOBALS["lang"]['rear-left'] = 'hátra- balra';

$GLOBALS["lang"]['rear-right'] = 'jobb hátsó';

$GLOBALS["lang"]['regex'] = 'regex';

$GLOBALS["lang"]['release'] = 'kiadás';

$GLOBALS["lang"]['removed from display, but has been set'] = 'kijelzőből eltávolítva, de be van állítva';

$GLOBALS["lang"]['reserved'] = 'fenntartott';

$GLOBALS["lang"]['right'] = 'Rendben.';

$GLOBALS["lang"]['rights) you can click on the field value to edit it.'] = 'jogok) akkor kattintson a mező érték szerkesztéséhez.';

$GLOBALS["lang"]['role'] = 'szerep';

$GLOBALS["lang"]['room'] = 'szoba';

$GLOBALS["lang"]['row'] = 'sor';

$GLOBALS["lang"]['service failed to start due to the following error'] = 'a szolgáltatás nem indult el a következő hiba miatt:';

$GLOBALS["lang"]['so Open-AudIT knows to restrict your query to the appropriate Orgs.'] = 'Szóval az Open- AudIT tudja, hogy a lekérdezésedet a megfelelő Orgokra kell korlátozni.';

$GLOBALS["lang"]['stand-alone'] = 'önálló';

$GLOBALS["lang"]['standard'] = 'szabvány';

$GLOBALS["lang"]['starts with'] = 'kezdődik';

$GLOBALS["lang"]['storage'] = 'tárolás';

$GLOBALS["lang"]['subnet'] = 'alhálózat';

$GLOBALS["lang"]['table'] = 'táblázat';

$GLOBALS["lang"]['table and insert the original rows.'] = 'táblázat és helyezze be az eredeti sorokat.';

$GLOBALS["lang"]['team'] = 'csapat';

$GLOBALS["lang"]['text. The first is the array index and should be left as-is. The index is used in the templates to lookup the translated text.'] = 'SMS. Az első a tömb index, és kell hagyni, hogy az. Az indexet a sablonokban használják a lefordított szöveg kereséséhez.';

$GLOBALS["lang"]['then clicking on the details button for the table.'] = 'majd kattintson az asztal részletes gombjára.';

$GLOBALS["lang"]['then clicking on the details button for the table. Device details are stored in the'] = 'majd kattintson az asztal részletes gombjára. A készülék adatait a';

$GLOBALS["lang"]['timestamp'] = 'időbélyegző';

$GLOBALS["lang"]['to'] = '-';

$GLOBALS["lang"]['to create an item of this type'] = 'egy ilyen típusú tétel létrehozása';

$GLOBALS["lang"]['to the URL, you will get the full database entry, including all component tables, of a given device.'] = 'az URL, akkor kap a teljes adatbázis bejegyzés, beleértve az összes alkatrész táblázatok, egy adott eszköz.';

$GLOBALS["lang"]['to the user'] = 'a felhasználónak';

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

$GLOBALS["lang"]['true or false (in JSON context)'] = 'igaz vagy hamis (JSON kontextusban)';

$GLOBALS["lang"]['unallocated'] = 'nem felosztott';

$GLOBALS["lang"]['unauthorised'] = 'nem engedélyezett';

$GLOBALS["lang"]['unchanged'] = 'változatlan';

$GLOBALS["lang"]['unknown'] = 'ismeretlen';

$GLOBALS["lang"]['unmanaged'] = 'kezeletlen';

$GLOBALS["lang"]['unused'] = 'felhasználatlan';

$GLOBALS["lang"]['update'] = 'frissítés';

$GLOBALS["lang"]['uses the data collected from your devices and matches the software installed with the value provided, it counts the matches calculates how many licenses have been used and how many are left. It allows the use of wildcards on the <i>match string</i> field which matches the software.name attribute.'] = 'használja az eszközeiről gyűjtött adatokat, és megfelel a telepített szoftvernek a megadott értékkel, számolja a mérkőzéseket, hogy hány engedélyt használtak, és hány maradt meg. Lehetővé teszi a vadkártyák használatát a <i>match string</i> mező, amely megfelel a szoftver. név attribútum.';

$GLOBALS["lang"]['using the main menu items.'] = 'a fő menüpontok használata.';

$GLOBALS["lang"]['valid'] = 'érvényes';

$GLOBALS["lang"]['version'] = 'változat';

$GLOBALS["lang"]['virtualisation'] = 'virtualizáció';

$GLOBALS["lang"]['warning'] = 'figyelmeztetés';

$GLOBALS["lang"]['web'] = 'web';

$GLOBALS["lang"]['with Local and Remote access permissions set.'] = 'helyi és távoli hozzáférési jogosultságokkal.';

$GLOBALS["lang"]['with devices::update permission.'] = 'berendezések:: frissítési engedély.';

$GLOBALS["lang"]['with the Sign-On Redirect URI being'] = 'az URI átirányításáról';

$GLOBALS["lang"]['with the intention of providing simple and intuitive access in a manner familiar to developers. In addition to this API, the web interface will use the same request format and supply some additional actions (eg: HTML forms for creating items).'] = 'azzal a szándékkal, hogy a fejlesztők számára ismerős módon egyszerű és intuitív hozzáférést biztosítson. Ezen az API-n kívül a web interfész ugyanazt a kérési formátumot fogja használni, és további lépéseket is biztosít (pl.: HTML nyomtatványok elemek létrehozásához).';

$GLOBALS["lang"]['yes'] = 'Igen';

$GLOBALS["lang"]['you do not require a HighCharts license to use Firstwave products. License'] = 'nem kell HighCharts licenc használata Firstwave termékek. Jogosítvány';

$GLOBALS["lang"]['you will assign any found devices to that Org or Location.'] = 'Minden talált eszközt hozzárendel az Org-hoz vagy a Hely-hez.';

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

