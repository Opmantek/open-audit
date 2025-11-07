<?php
$GLOBALS["lang"][' Default, currently '] = ' Domyślne, aktualnie ';

$GLOBALS["lang"][' is now supported with a language file. To change your user to use this language, click '] = ' jest teraz obsługiwany z pliku językowego. Aby zmienić użytkownika, aby używać tego języka, kliknij ';

$GLOBALS["lang"][' seconds'] = ' sekund';

$GLOBALS["lang"]['10 Minutes'] = '10 minut';

$GLOBALS["lang"]['15 Minutes'] = '15 minut';

$GLOBALS["lang"]['30 Minutes'] = '30 minut';

$GLOBALS["lang"]['5 Minutes'] = '5 minut';

$GLOBALS["lang"]['<br> <strong>NOTE</strong> - You are accessing this URL from the local Open-AudIT server. The downloaded script will not be able to submit when run on any other machine. If you need to audit other machines, please download the script from any remote machine, not using a browser on the Open-AudIT server itself.'] = '<br/> <strong>UWAGA</strong> - Masz dostęp do tego adresu URL z lokalnego serwera Open- Audit. Ściągnięty skrypt nie będzie w stanie złożyć podczas uruchamiania na innej maszynie. W przypadku potrzeby audytu innych maszyn, należy pobrać skrypt z dowolnego zdalnego urządzenia, nie używając przeglądarki na samym serwerze Open- Audit.';

$GLOBALS["lang"]['<p></p>'] = '<p></p>';

$GLOBALS["lang"]['<p><strong class="text-danger">NOTE</strong> - You must have working SSH or SSH Key credentials to execute benchmarks upon a target device.</p>'] = '<p><strong class="text-danger">UWAGA</strong> - Musisz mieć działającą legitymację SSH lub SSH Key do wykonywania wzorców na urządzeniu docelowym.</p>';

$GLOBALS["lang"]['<p><strong>Baseline</strong> - The overarching document that contains the baseline definition and the individual policy tests.<br> <br> <strong>Policies</strong> - The individual tests contained within a Baseline. Each test is for a specific item. An example would be testing for SSH version 1.2.3.<br> <br> <strong>Details</strong> - Baselines can compare netstat ports, users and software.<br> <br> <strong>Software</strong> - To compare software we check the name and version. Because version numbers are not all standardised in format, when we receive an audit result we create a new attribute called software_padded which we store in the database along with the rest of the software details for each package. For this reason, baselines using software policies will not work when run against a device that has not been audited by 1.10 (at least). Software policies can test against the version being "equal to", "greater than" or "equal to or greater than".<br> <br> <strong>Netstat Ports</strong> - Netstat Ports use a combination of port number, protocol and program. If all are present the policy passes.<br> <br> <strong>Users</strong> - Users work similar to Netstat Ports. If a user exists with a matching name, status and password details (changeable, expires, required) then the policy passes.<br> <br> </p>'] = '<p><strong>Początkowa</strong> - nadrzędny dokument zawierający definicję bazową i indywidualne testy polityczne.<br/> <br/> <strong>Polityka</strong> - Indywidualne testy zawarte w punkcie wyjścia. Każdy test dotyczy określonego elementu. Przykładem byłoby badanie SSH w wersji 1.2.3.<br/> <br/> <strong>Szczegóły</strong> - Podstawy mogą porównywać porty netstat, użytkowników i oprogramowanie.<br/> <br/> <strong>Oprogramowanie</strong> - Aby porównać oprogramowanie sprawdzamy nazwę i wersję. Ponieważ numery wersji nie są znormalizowane w formacie, kiedy otrzymujemy wynik audytu tworzymy nowy atrybut o nazwie software _ padded, który przechowujemy w bazie danych wraz z resztą szczegółów oprogramowania dla każdego pakietu. Z tego powodu linie bazowe wykorzystujące politykę oprogramowania nie będą działać, gdy będą działać przeciwko urządzeniu, które nie zostało skontrolowane do 1.10 (co najmniej). Polityka oprogramowania może być testowana na wersji "równej", "większej" lub "równej lub większej".<br/> <br/> <strong>Porty Netstat</strong> - Netstat Ports używa kombinacji numeru portu, protokołu i programu. Jeśli wszyscy są obecni, polityka przechodzi.<br/> <br/> <strong>Użytkownicy</strong> - Użytkownicy pracują podobnie jak Netstat Ports. Jeżeli istnieje użytkownik z dopasowaną nazwą, statusem i hasłem (zmiennym, wygasającym, wymaganym), to polityka przechodzi.<br/> <br/> </p>';

$GLOBALS["lang"]['<p>A location is a physical address that can have devices associated with it.<br> <br>You can assign it coordinates (lat/long) and if there are devices assigned, the location will appear on the Open-AudIT Enterprise map.<br> <br></p>'] = '<p>Lokalizacja to adres fizyczny, który może być powiązany z urządzeniami.<br/> <br/>Możesz przypisać jej współrzędne (lat / long) i jeśli są przyporządkowane urządzenia, lokalizacja pojawi się na mapie Open- Audit Enterprise.<br/> <br/></p>';

$GLOBALS["lang"]['<p>A network is derived from discovery entries and device attributes.<br> <br></p>'] = '<p>Sieć pochodzi z wpisów do wyszukiwania i atrybutów urządzenia.<br/> <br/></p>';

$GLOBALS["lang"]['<p>A summary will display a list of items, grouped by the distinct values of the attribute specified by the <code>table</code> and <code>column</code> attributes.<br> <br>When a summary is executed, the result will be a list of distinct values for that <code>table</code> and <code>column</code>. There will be links on the values that allow the user to see the matching devices.<br> <br>If the attribute of <code>extra_columns</code> is populated, the resulting page will contain these columns in addition to the standard device columns.<br> <br></p>'] = '<p>Podsumowanie wyświetla listę elementów, pogrupowanych przez odrębne wartości atrybutu określonego przez <code>table</code> oraz <code>column</code> atrybuty.<br/> <br/>Po wykonaniu podsumowania, wynik będzie listą różnych wartości dla tego <code>table</code> oraz <code>column</code>. Będą linki do wartości, które pozwolą użytkownikowi zobaczyć urządzenia dopasowujące.<br/> <br/>Jeśli atrybut <code>extra_columns</code> jest zaludniona, wynikowa strona będzie zawierać te kolumny oprócz standardowych kolumn urządzenia.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Agents let you audit PCs without a discovery. Install the agent and it will check-in with the server each day and audit itself. It does not matter if your computers are firewalled, audit data will still appear in Open-AudIT.</p><p>When testing <strong>if</strong> an agent should perform actions, all three tests must pass (if the test is set). <strong>Then</strong> the actions are taken.</p>'] = '<p>Agenci pozwolili ci kontrolować komputery bez odkrycia. Zainstaluj agenta i będzie zameldować się z serwerem każdego dnia i audyt się. Nie ma znaczenia, czy komputery są zapięte ogniowo, dane z audytu będą nadal pojawiały się w Open- Audit.</p><p>Podczas badania <strong>jeśli</strong> agent powinien wykonać czynności, wszystkie trzy badania muszą przejść (jeśli badanie jest ustawione). <strong>Wtedy</strong> podejmowane są działania.</p>';

$GLOBALS["lang"]['<p>Applications are defined by you, the user and stored for Open-AudIT to use and associate with devices.<br> <br></p>'] = '<p>Aplikacje są zdefiniowane przez Ciebie, użytkownika i przechowywane dla Open-Audit używać i kojarzyć z urządzeniami.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Attributes are stored for Open-AudIT to use for particular fields.</p>'] = '<p>Atrybuty są przechowywane dla Open- Audit do wykorzystania dla poszczególnych pól.</p>';

$GLOBALS["lang"]['<p>Being able to determine which machines are configured the same is a major part of systems administration and auditing &ndash; and now reporting on that will be made simple and automated. Once you define your baseline it will automatically run against a set of devices on a predetermined schedule. The output of these executed baselines will be available for web viewing, importing into a third party system or even as a printed report.<br> <br> Baselines enable you to combine audit data with a set of attributes you have previously defined (your baseline) to determine compliance of devices.<br> <br> For example - you might create a baseline from a device running Centos 6 which acts as one of your apache servers in a cluster. You know this particular server is configured just the way you want it but you are unsure if other servers in the cluster are configured exactly the same. Baselines enables you to determine this.<br> <br> </p>'] = '<p>Możliwość określenia, które maszyny są skonfigurowane tak samo jest główną częścią zarządzania systemami i audytu - a teraz raportowanie na ten temat będzie proste i zautomatyzowane. Po zdefiniowaniu linii bazowej będzie on automatycznie uruchamiany z zestawem urządzeń w ustalonym wcześniej harmonogramie. Wyniki tych wykonanych linii podstawowych będą dostępne do przeglądania stron internetowych, importowania do systemu osób trzecich lub nawet w formie raportu drukowanego.<br/> <br/> Linie bazowe umożliwiają połączenie danych audytowych z zbiorem atrybutów, które wcześniej zdefiniowałeś (bazowy) w celu określenia zgodności urządzeń.<br/> <br/> Na przykład - możesz utworzyć punkt odniesienia z urządzenia uruchamiającego Centos 6, który działa jako jeden z serwerów Apache w klastrze. Wiesz, że ten konkretny serwer jest skonfigurowany tak, jak chcesz, ale nie masz pewności, czy inne serwery w klastrze są skonfigurowane dokładnie tak samo. Podstawy umożliwiają określenie tego.<br/> <br/> </p>';

$GLOBALS["lang"]['<p>Clusters are stored in Open-AudIT to associate devices to better record, manage and estimate licensing costs.<br> <br></p>'] = '<p>Klastry są przechowywane w Open- Audit do urządzeń towarzyszących, aby lepiej rejestrować, zarządzać i szacować koszty licencjonowania.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Components is a generic term used for the tables that store the attributes for a device. Those tables are: access_point, arp, bios, certificate, cli_config, disk, dns, file, ip, license, log, memory, module, monitor, motherboard, netstat, network, nmap, optical, pagefile, partition, policy, print_queue, processor, radio, route, san, scsi, server, server_item, service, share, software, software_key, sound, task, usb, user, user_group, variable, video, vm, windows.</p><p> In addition we class the following tables also as device related: application, attachment, cluster, credential, image.</p>'] = '<p>Składniki to termin ogólny używany w tabelach, które przechowują atrybuty urządzenia. Tabele te to: access _ point, arp, bios, certificate, cli _ config, disk, dns, file, ip, licence, log, memory, module, monitor, matherboard, netstat, network, nmap, optic, pagefile, partity, policy, print _ queue, procesor, radio, route, san, scsi, server, server _ item, share, software, software _ key, sound, zadanie, usb, user, user _ group, zmienna, wideo, vm, okna.</p><p> Ponadto klasyfikujemy następujące tabele również jako związane z urządzeniem: aplikacja, załącznik, klaster, credilential, image.</p>';

$GLOBALS["lang"]['<p>Credentials are encrypted when stored in the database.<br> <br>When a Discovery is run, a device has its credentials retrieved and tested for connection first (from the <code>credential</code> table). If these fail, then credentials associated with the given Org <code>credentials.org_id</code> is also tested against the device. Working credentials are stored at an individual device level in the credential table (note - no "s" in the table name).<br> <br>SSH keys are tested before SSH username / password. When testing SSH, credentials will also be marked as working with sudo or being root.<br> <br>For ease of use, Windows passwords should not contain a single or double quote. This is a remote WMI limitation, not an Open-AudIT limitation.<br> <br></p>'] = '<p>Karty są szyfrowane, gdy są przechowywane w bazie danych.<br/> <br/>Po uruchomieniu Discovery, urządzenie ma swoje referencje pobrane i przetestowane do połączenia (z <code>credential</code> Tabela). Jeśli te nie powiodą się, to referencje związane z danym Org <code>credentials.org_id</code> jest również testowany przeciwko urządzeniu. Kwalifikacje robocze są przechowywane na indywidualnym poziomie urządzenia w tabeli kredytowej (uwaga - nie "s" w nazwie tabeli).<br/> <br/>Klucze SSH są testowane przed SSH nazwa użytkownika / hasło. Podczas testowania SSH, referencje będą również oznaczone jako praca z sudo lub jest root.<br/> <br/>Dla ułatwienia korzystania, hasła Windows nie powinny zawierać jednego lub podwójnego cytatu. Jest to zdalne ograniczenie WMI, a nie ograniczenie Open- Audit.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Credentials are used to access devices.<br> <br>Configuring credentials should be one of the first things you do after installing Open-AudIT.<br> <br></p>'] = '<p>Do dostępu do urządzeń wykorzystywane są podstawowe informacje.<br/> <br/>Konfiguracja referencji powinna być jedną z pierwszych rzeczy, które robisz po zainstalowaniu Open- Audit.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Define your racks and assign devices into their positions. You already have your devices in Open-AudIT and you know your locations. Open-AudIT extends this to allow you to create a rack and assign devices to it. Open-AudIT will even provide a visualisation of the rack and the devices contained within. If you provide a device picture, that picture will be used in the visualisation. You can look at the rack on the screen and see the same items you would see if you were standing in front of it.<br> <br></p>'] = '<p>Zdefiniuj swoje stojaki i przypisz urządzenia do ich pozycji. Masz już swoje urządzenia w Open- Audit i znasz swoje lokalizacje. Open-Audit rozszerza to, aby umożliwić tworzenie stojaka i przypisywanie do niego urządzeń. Open-Audit zapewni nawet wizualizację stojaka i urządzeń wewnątrz. Jeśli dostarczysz obraz urządzenia, ten obraz zostanie użyty w wizualizacji. Możesz spojrzeć na rack na ekranie i zobaczyć te same elementy, które można zobaczyć, jeśli stoisz przed nim.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Devices on your network need to be managed. But how do you keep your records up to date? A spreadsheet - defintley not. That will be out of date in hours, if not days. Why manually try to keep up. Use Open-AudIT to automatically scan your networks and record your devices - manufacturer, model, serial and more than 100 other attributes. Full lists of software, services, disks, open ports, users, etc. Automatically see if an attribute has been added, removed or changed.<br> <br>Once Open-AudIT is setup, you can sit back and relax. Have change reports emailed to you on a schedule, for example - what new devices did we discover this week? What new software was installed this week? Were there any hardware changes last month?<br> <br>Expand on the stored fields easily with your own custom attributes.<br> <br>Even add devices that are not connected to your network or those devices your Open-AudIT server cannot reach.<br> <br>Computers, switches, routers, printers or any other device on your network - Open-AudIT can audit them all.<br> <br></p>'] = '<p>Urządzenia w sieci muszą być zarządzane. Ale jak aktualizować swoje akta? Arkusz kalkulacyjny - definitley nie. To będzie przestarzałe w ciągu kilku godzin, jeśli nie dni. Dlaczego ręcznie spróbować nadążyć. Użyj Open-Audit do automatycznego skanowania sieci i zapisu urządzeń - producenta, modelu, serii i ponad 100 innych atrybutów. Pełna lista oprogramowania, usług, dysków, otwartych portów, użytkowników itp. Automatycznie sprawdzić, czy atrybut został dodany, usunięty lub zmieniony.<br/> <br/>Kiedy Open- Audit jest ustawiony, można usiąść i zrelaksować. Czy raporty o zmianach wysłano pocztą elektroniczną na przykład - jakie nowe urządzenia odkryliśmy w tym tygodniu? Jakie nowe oprogramowanie zostało zainstalowane w tym tygodniu? Czy w zeszłym miesiącu były jakieś zmiany sprzętowe?<br/> <br/>Rozwiń na zapisanych polach łatwo z własnymi atrybutami.<br/> <br/>Nawet dodać urządzenia, które nie są podłączone do sieci lub te urządzenia, do których serwer Open- Audit nie może dotrzeć.<br/> <br/>Komputery, przełączniki, routery, drukarki lub inne urządzenia w sieci - Open-Audit może je kontrolować.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Discoveries are at the very heart of what Open-AudIT does.<br> <br>How else would you know "What is on my network?"<br> <br>Discoveries are prepared data items that enable you to run a discovery upon a network in a single click, without entering the details of that network each and every time.<br> <br></p>'] = '<p>Odkrycia są w samym sercu tego, co robi Open- Audit.<br/> <br/>Skąd wiesz, co jest w mojej sieci?<br/> <br/>Odkrycia są przygotowanymi elementami danych, które umożliwiają wykonanie odkrycia na sieci jednym kliknięciem, bez wprowadzania szczegółów tej sieci za każdym razem.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Discovery Options are a global setting changed in the <a href="../configuration?configuration.name=discovery_default_scan_option">configuration</a>. If you have an Open-AudIT Enterprise license these are settable per discovery and in addition futher customizable as required. Discovery Options are as follows (including an indicitave time to scan an individual IP):<br/><br><strong>UltraFast</strong>: <i>1 second</i>. Scan only the ports that Open-AudIT needs to use to talk to the device and detect an IOS device (WMI, SSH, SNMP, Apple Sync). An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is not considered open. Device must respond to an Nmap ping. Use aggressive timing.<br><br/><strong>SuperFast</strong>: <i>5 seconds</i>. Scan the top 10 TCP and UDP ports, as well as port 62078 (Apple IOS detection). An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is not considered open. Device must respond to an Nmap ping. Use aggressive timing.<br/><br/><strong>Fast</strong>: <i>40 seconds</i>. Scan the top 100 TCP and UDP ports, as well as port 62078 (Apple IOS detection). An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is not considered open. Device must respond to an Nmap ping. Use aggressive timing.<br/><br/><strong>Medium (Classic)</strong>: <i>90 seconds</i>. As close to a traditional Open-AudIT scan as we can make it. Scan the top 1000 TCP ports, as well as 62078 (Apple IOS detection) and UDP 161 (SNMP). An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is considered open (and will trigger device detection). Devices are scanned regardless of a response to an Nmap ping. Use aggressive timing.<br/><br/><strong>Medium</strong>: <i>100 seconds</i>. Scan the top 1000 TCP and top 100 UDP ports, as well as port 62078 (Apple IOS detection). An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is not considered open. Device must respond to an Nmap ping. Use aggressive timing.<br/><br/><strong>Slow</strong>: <i>4 minutes</i>. Scan the top 1000 TCP and top 100 UDP ports, as well as port 62078 (Apple IOS detection). Version detection enabled. An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is considered open (and will trigger device detection). Device must respond to an Nmap ping. Use normal timing.<br/><br/><strong>UltraSlow</strong>: <i>20 minutes</i>. Not recommended. Scan the top 1000 TCP and UDP ports, as well as port 62078 (Apple IOS detection). Devices are scanned regardless of a response to an Nmap ping. Version detection enabled. An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is considered open (and will trigger device detection). Use polite timing.<br/><br/><strong>Custom</strong>: <i>Unknown time</i>. When options other than as set by a standard discovery preset are altered.<br><br></p>'] = '<p>Odkrycie Opcje są globalne ustawienie zmienione w <a href="../configuration?configuration.name=discovery_default_scan_option">konfiguracja</a>. Jeśli posiadasz licencję Open- Audit Enterprise, są one ustawiane na każde odkrycie, a dodatkowo dodatkowo można je dostosować do potrzeb. Odkrycie Opcje są następujące (w tym czas indicitave do skanowania pojedynczego IP):<br/><br/><strong>UltraFast</strong>: <i>1 sekunda</i>. Skanuj tylko porty, których Open- Audit potrzebuje do rozmowy z urządzeniem i wykrywania urządzenia IOS (WMI, SSH, SNMP, Apple Sync). An <code>open|filtered</code> Port jest uważany za otwarty. A <code>filtered</code> port nie jest uważany za otwarty. Urządzenie musi odpowiadać na sygnał Nmap. Użyj agresywnego wyczucia czasu.<br/><br><strong>SuperFast</strong>: <i>5 sekund</i>. Przeskanuj 10 najlepszych portów TCP i UDP oraz port 62078 (wykrywanie Apple IOS). An <code>open|filtered</code> Port jest uważany za otwarty. A <code>filtered</code> port nie jest uważany za otwarty. Urządzenie musi odpowiadać na sygnał Nmap. Użyj agresywnego wyczucia czasu.<br><br/><strong>Szybko</strong>: <i>40 sekund</i>. Przeskanuj najlepsze 100 portów TCP i UDP oraz port 62078 (wykrywanie Apple IOS). An <code>open|filtered</code> Port jest uważany za otwarty. A <code>filtered</code> port nie jest uważany za otwarty. Urządzenie musi odpowiadać na sygnał Nmap. Użyj agresywnego wyczucia czasu.<br/><br/><strong>Średni (klasyczny)</strong>: <i>90 sekund</i>. Tak blisko tradycyjnego skanowania Open- Audit, jak możemy to zrobić. Przeskanuj najlepsze 1000 portów TCP oraz 62078 (wykrywanie Apple IOS) i UDP 161 (SNMP). An <code>open|filtered</code> Port jest uważany za otwarty. A <code>filtered</code> port jest uważany za otwarty (i spowoduje wykrycie urządzenia). Urządzenia są skanowane niezależnie od odpowiedzi na Nmap ping. Użyj agresywnego wyczucia czasu.<br/><br/><strong>Średni</strong>: <i>100 sekund</i>. Przeskanuj najlepsze 1000 portów TCP i 100 portów UDP oraz port 62078 (wykrywanie Apple IOS). An <code>open|filtered</code> Port jest uważany za otwarty. A <code>filtered</code> port nie jest uważany za otwarty. Urządzenie musi odpowiadać na sygnał Nmap. Użyj agresywnego wyczucia czasu.<br/><br/><strong>Powoli</strong>: <i>4 minuty</i>. Przeskanuj najlepsze 1000 portów TCP i 100 portów UDP oraz port 62078 (wykrywanie Apple IOS). Wykrywanie wersji włączone. An <code>open|filtered</code> Port jest uważany za otwarty. A <code>filtered</code> port jest uważany za otwarty (i spowoduje wykrycie urządzenia). Urządzenie musi odpowiadać na sygnał Nmap. Użyj normalnego czasu.<br/><br/><strong>UltraSlow</strong>: <i>20 minut</i>. Nie zaleca się. Przeskanuj najlepsze porty TCP i UDP 1000 oraz port 62078 (wykrywanie Apple IOS). Urządzenia są skanowane niezależnie od odpowiedzi na Nmap ping. Wykrywanie wersji włączone. An <code>open|filtered</code> Port jest uważany za otwarty. A <code>filtered</code> port jest uważany za otwarty (i spowoduje wykrycie urządzenia). Użyj grzecznego wyczucia czasu.<br/><br/><strong>Własny</strong>: <i>Nieznany czas</i>. Kiedy opcje inne niż określone przez standardowe odkrycie są zmieniane.<br/><br/></br></br></p>';

$GLOBALS["lang"]['<p>Groups are used as simple lists of devices that match the required conditions. If requested using JSON they return a list of <code>devices.id</code> only. If requested using the web interface, they return the standard column attribute list.<br> <br></p>'] = '<p>Grupy są używane jako proste listy urządzeń, które odpowiadają wymaganym warunkom. Na życzenie JSON zwracają listę <code>devices.id</code> Tylko. Na żądanie przy użyciu interfejsu WWW zwracają listę atrybutów standardowej kolumny.<br/> <br/></p>';

$GLOBALS["lang"]['<p>If the user logging on to Open-AudIT does not have the access to search LDAP (and you are using OpenLDAP), you can use another account which does have this access. Use the <code>ldap_dn_account</code> and <code>ldap_dn_password</code> to configure this.<br> <br><strong>Helpful Documentation</strong><br> <br>
        <a href="/index.php/auth/help">General Auth Help</a><br> <br>
        <a href="/index.php/faq?name=Using Entra for Auth">Using Entra for Auth</a><br> <br>
        <a href="/index.php/faq?name=Using OKTA for Auth">Using OKTA for Auth</a><br> <br>
        <a href="/index.php/faq?name=Troubleshooting LDAP Logins">Troubleshooting LDAP Logins</a><br> <br>
        <a href="/index.php/faq?name=Users, Roles and Orgs">Users, Roles and Orgs</a><br> <br></p>'] = '<p>Jeśli użytkownik loguje się do Open-Audit nie ma dostępu do wyszukiwania LDAP (i używasz OpenLDAP), możesz użyć innego konta, które ma ten dostęp. Użyj <code>ldap_dn_account</code> oraz <code>ldap_dn_password</code> skonfigurować to.<br/> <br/><strong>Pomocna dokumentacja</strong><br/> <br/><a href="/index.php/auth/help">Pomoc General Auth</a><br/> <br/><a href="/index.php/faq?name=Using Entra for Auth">Korzystanie z Entra dla Auth</a><br/> <br/><a href="/index.php/faq?name=Using OKTA for Auth">Korzystanie z OKTA dla Auth</a><br/> <br/><a href="/index.php/faq?name=Troubleshooting LDAP Logins">Rozwiązywanie problemów związanych z logowaniem LDAP</a><br/> <br/><a href="/index.php/faq?name=Users, Roles and Orgs">Użytkownicy, role i orgi</a><br/> <br/></p>';

$GLOBALS["lang"]['<p>If you add a device type, to display the associated icon you will have to manually copy the .svg formatted file to the directory:<br><em>Linux</em>:/usr/local/open-audit/public/device_images<br><em>Windows</em>: c:\xampp\htdocs\open-audit\device_images<br> <br>If you add a location type, to display the associated icon you will have to manually copy the 32x32px icon to the directory:<br><em>Linux</em>:/usr/local/open-audit/public/images/map_icons<br><em>Windows</em>: c:\xampp\htdocs\open-audit\images\map_icons</p><p>When the <i>resource</i> is a <code>device</code>, valid <i>types</i> are: <code>class</code>, <code>environment</code>, <code>status</code> and <code>type</code>. If the <i>resource</i> is <code>locations</code> or <code>org</code> the only valid <i>type</i> is <code>type</code>. If the <i>resource</i> is a <code>query</code> the only valid <i>type</i> is <code>menu_category</code>.</p>'] = '<p>Jeśli dodasz typ urządzenia, aby wyświetlić odpowiednią ikonę, będziesz musiał ręcznie skopiować sformatowany plik .svg do katalogu:<br/><em>Linux</em>: / usr / local / open- audit / public / device _ images<br/><em>Okna</em>: c:\ xampp\ htdocs\ open- audit\ device _ images<br/> <br/>Jeśli dodasz typ lokalizacji, aby wyświetlić przypisaną ikonę, będziesz musiał ręcznie skopiować ikonę 32x32px do katalogu:<br/><em>Linux</em>: / usr / local / open- audit / public / images / map _ ikony<br/><em>Okna</em>: c:\ xampp\ htdocs\ open- audit\ images\ map _ ikony</p><p>Kiedy <i>zasób</i> jest <code>device</code>, ważne <i>rodzaje</i> są: <code>class</code>, <code>environment</code>, <code>status</code> oraz <code>type</code>. Jeśli <i>zasób</i> en <code>locations</code> lub <code>org</code> jedyny ważny <i>typ</i> en <code>type</code>. Jeśli <i>zasób</i> jest <code>query</code> jedyny ważny <i>typ</i> en <code>menu_category</code>.</p>';

$GLOBALS["lang"]['<p>If you intend to completely audit your cloud machines, do not forget you will also need those credentials saved in Open-AudIT.</p><p>Make sure you allow the correct ports if you are using Microsoft Azure (22 for SSH, etc). Check your Virtual Machine -> Networking rules.<br> <br></p>'] = '<p>Jeśli masz zamiar w pełni kontrolować swoje maszyny w chmurze, nie zapomnij, że trzeba będzie również te uprawnienia zapisane w Open- Audit.</p><p>Upewnij się, że jeśli używasz Microsoft Azure (22 dla SSH, itp.), możesz zezwolić na prawidłowe porty. Sprawdź swoją maszynę wirtualną - > Zasady sieciowe.<br/> <br/></p>';

$GLOBALS["lang"]['<p>If you select a List type, the "values" field will be enabled. You should put a comma separated list of selectable values here. These will display in a dropdown box whenever the field is edited.<br> <br>Like most other attributes, Fields can be bulk edited. Use the Bulk Edit function as you normally would and you will see the Fields are available for input.<br> <br>View the device details screen, open the section containing the field and (if you have sufficient access) you can click on the field value to edit it.<br> <br></p>'] = '<p>Jeśli wybierzesz typ listy, zostanie włączone pole "wartości". Należy umieścić tutaj oddzielną przecinek listę wybranych wartości. Będą one wyświetlane w rozwijanym polu za każdym razem, gdy pole zostanie edytowane.<br/> <br/>Podobnie jak większość innych atrybutów, Fields może być masowo edytowany. Użyj funkcji Edycja luzem jak zwykle i zobaczysz pola są dostępne dla wejścia.<br/> <br/>Wyświetl ekran szczegółów urządzenia, otwórz sekcję zawierającą pole i (jeśli masz wystarczający dostęp) kliknij na wartość pola, aby go edytować.<br/> <br/></p>';

$GLOBALS["lang"]['<p>In the ever-changing world of computer security where new vulnerabilities are being discovered and patched every day, enforcing security compliance must be a continuous process. It also needs to include a way to make adjustments to policies, as well as periodic assessment and risk monitoring. The OpenSCAP ecosystem provides tools and customizable policies for a quick, cost-effective and flexible implementation of these processes.</p>'] = '<p>W ciągle zmieniającym się świecie bezpieczeństwa komputerowego, w którym codziennie odkrywane są nowe słabe punkty, egzekwowanie przestrzegania bezpieczeństwa musi być procesem ciągłym. Musi również obejmować sposób dostosowania polityki, a także okresową ocenę i monitorowanie ryzyka. Ekosystem OpenSCAP zapewnia narzędzia i możliwe do dostosowania polityki szybkiego, efektywnego pod względem kosztów i elastycznego wdrażania tych procesów.</p>';

$GLOBALS["lang"]['<p>Integrations allow you to setup device selection and schedules for Open-AudIT to talk to external systems.<br> <br></p>'] = '<p>Integracje pozwalają ustawić wybór urządzeń i harmonogramy Open- Audit, aby rozmawiać z systemami zewnętrznymi.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Nmap timing details are found on the bottom of this linked page <a href="https://nmap.org/book/man-performance.html" target="_blank">https://nmap.org/book/man-performance.html</a>. From that page:<br> <br><em>If you are on a decent broadband or ethernet connection, I would recommend always using -T4 (Aggressive). Some people love -T5 (Insane) though it is too aggressive for my taste. People sometimes specify -T2 (Polite) because they think it is less likely to crash hosts or because they consider themselves to be polite in general. They often do not realize just how slow -T2 really is. Their scan may take ten times longer than a default scan. Machine crashes and bandwidth problems are rare with the default timing options -T3 (Normal) and so I normally recommend that for cautious scanners. Omitting version detection is far more effective than playing with timing values at reducing these problems.</em><footer>Gordon <i>Fyodor</i> Lyon</footer><br> <br></p>'] = '<p>Szczegóły dotyczące czasu Nmap znajdują się na dole tej połączonej strony <a href="https://nmap.org/book/man-performance.html" target="_blank">https: / / nmap.org / book / man- performance.html</a>. Z tej strony:<br/> <br/><em>Jeśli jesteś na przyzwoitym szerokopasmowym lub ethernet połączenia, Polecam zawsze przy użyciu -T4 (Aggressive). Niektórzy ludzie kochają -T5 (Obłąkany) chociaż jest zbyt agresywny jak na mój gust. Ludzie czasami określają -T2 (Polite), ponieważ myślą, że mniej prawdopodobne jest rozbicie gospodarzy lub dlatego, że uważają się za uprzejmych w ogóle. Często nie zdają sobie sprawy, jak powolne jest -T2. Ich skan może trwać dziesięć razy dłużej niż domyślny. Wypadki maszynowe i problemy z przepustowością są rzadkie z domyślnymi opcjami czasu -T3 (Normal) i dlatego normalnie zalecam, że dla ostrożnych skanerów. Pomijanie wykrywania wersji jest znacznie skuteczniejsze niż granie z wartościami czasowymi w zmniejszaniu tych problemów.</em><footer>Gordon. <i>Fiodor</i> Lyon</footer><br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT can be configured to use different methods to authenticate a user and in addition, to create a user account using assigned roles and orgs based on group membership.<br> <br></p>'] = '<p>Open-Audit może być skonfigurowany, aby używać różnych metod do uwierzytelniania użytkownika, a ponadto, aby utworzyć konto użytkownika przy użyciu przypisanych ról i orgów w oparciu o członkostwo w grupie.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT can retrieve details about a file or directory of files and monitor these files for changes as per other attributes in the Open-AudIT database.<br> <br>This feature works out of the box for Linux Open-AudIT servers, but needs a change to the service account name under a Windows Open-AudIT server.<br> <br>Supported clients are Windows and Linux.<br> <br></p>'] = '<p>Open- Aud IT może pobrać szczegóły dotyczące pliku lub katalogu plików i monitorować te pliki w poszukiwaniu zmian, jak w przypadku innych atrybutów w bazie danych Open- Audit.<br/> <br/>Funkcja ta działa z pola dla serwerów Linux Open- Audit, ale wymaga zmiany nazwy konta usługi pod serwerem Windows Open- Audit.<br/> <br/>Obsługowani klienci to Windows i Linux.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT can retrieve details about a file, ask the native package manager if they are known to it and monitor these files for changes as per other attributes in the Open-AudIT database.<br> <br>Supported clients are Linux only.<br> <br></p>'] = '<p>Open- Aud IT może pobrać szczegóły dotyczące pliku, zapytać rodzimego menedżera pakietów, czy są one znane i monitorować te pliki dla zmian, jak dla innych atrybutów w bazie danych Open- Audit.<br/> <br/>Obsługiwani klienci to tylko Linux.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT can store information in custom fields that are associated with each device.<br> <br>Once an Additional Field has been created it can be used in queries and groups just like any other attribute in the database.<br> <br></p>'] = '<p>Open- Aud Informatyka może przechowywać informacje w niestandardowych polach powiązanych z każdym urządzeniem.<br/> <br/>Po utworzeniu dodatkowego pola można go używać w zapytaniach i grupach, jak każdy inny atrybut w bazie danych.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT comes with many queries inbuilt. If you require a specific query and none of the pre-packaged queries fit your needs, it is quite easy to create a new one and load it into Open-AudIT for running.<br> <br></p>'] = '<p>Open- Audit pochodzi z wielu pytań wbudowanych. Jeśli potrzebujesz konkretnego zapytania i żadne z wstępnie zapakowanych zapytań nie odpowiada Twoim potrzebom, łatwo jest utworzyć nowy i załadować go do Open- Audit do uruchomienia.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT comes with many summaries inbuilt. If you require a specific summary and none of the pre-packaged summaries fit your needs, it is quite easy to create a new one and load it into Open-AudIT for running.<br> <br></p>'] = '<p>Open- Audit pochodzi z wielu podsumowań wbudowanych. Jeśli potrzebujesz konkretnego podsumowania i żadna z wstępnie zapakowanych podsumowań nie pasuje do Twoich potrzeb, łatwo jest utworzyć nowy i załadować go do Open- Audit do uruchomienia.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT is supported by FirstWave with an amazing level of support. If you prefer an active community of support givers, theres that as well. Where else can you talk directly to the developers and get a response within 24 hours? Just try that with other products! Amazing support. Full stop. You need support, we provide support. No ifs or buts. Great support. Period.<br> <br></p>'] = '<p>Open-Audit jest obsługiwany przez FirstWave z niesamowitym poziomem wsparcia. Jeśli wolisz aktywną społeczność wsparcia, to również. Gdzie indziej można rozmawiać bezpośrednio z deweloperami i uzyskać odpowiedź w ciągu 24 godzin? Spróbuj z innymi produktami! Niesamowite wsparcie. Cała stop. Potrzebujesz wsparcia, zapewniamy wsparcie. Żadnych ale. Świetne wsparcie. Kropka.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT provides multi-tenancy out of the box!<br> <br>Orgs (organisations) in Open-AudIT are a key item. A user has a primary Org as well as a list of Orgs they can access. A user combines this with a list of assigned "Roles" that define what actions they can take on items assigned to the Orgs they have access to. The combination of a users "orgs" and "roles" define what they can and cannot do within Open-AudIT.<br> <br>Most items in Open-AudIT are assigned to an Org. Devices, Locations, Networks, etc.<br> <br>Orgs can have child Orgs. Think of an organisational chart (tree) structure. If a user has access to a specific Org, they also have access to that Orgs descendants. For more information, see this <a href="/index.php/faq?name=Users, Roles and Orgs">FAQ</a>.</p>'] = '<p>Open-Audit zapewnia wieloetatowy z pudełka!<br/> <br/>Orgs (organizacje) w Open- Audit są kluczowym elementem. Użytkownik posiada pierwotną Org oraz listę Orgów, do których ma dostęp. Użytkownik łączy to z listą przypisanych "Roles", które określają, jakie działania mogą podjąć na pozycje przypisane do Org, do których mają dostęp. Połączenie użytkowników "orgs" i "role" definiuje, co mogą i nie mogą zrobić w ramach Open- Audit.<br/> <br/>Większość pozycji w Open-Audit są przypisane do Org. Urządzenia, Lokalizacje, Sieci, itp.<br/> <br/>Orgs może mieć dzieci Orgs. Pomyśl o strukturze organizacyjnej (drzewo). Jeśli użytkownik ma dostęp do określonego Orga, ma również dostęp do potomków Orgów. Więcej informacji na ten temat: <a href="/index.php/faq?name=Users, Roles and Orgs">FAQ</a>.</p>';

$GLOBALS["lang"]['<p>Open-AudIT provides multi-tenancy out of the box!<br> <br>Orgs (organisations) in Open-AudIT are a key item. A user has a primary Org as well as a list of Orgs they can access. A user combines this with a list of assigned "Roles" that define what actions they can take on items assigned to the Orgs they have access to. The combination of a users "orgs" and "roles" define what they can and cannot do within Open-AudIT.<br> <br>Most items in Open-AudIT are assigned to an Org. Devices, Locations, Networks, etc.<br> <br>Orgs can have child Orgs. Think of an organisational chart (tree) structure. If a user has access to a specific Org, they also have access to that Orgs descendants.</p>'] = '<p>Open-Audit zapewnia wieloetatowy z pudełka!<br/> <br/>Orgs (organizacje) w Open- Audit są kluczowym elementem. Użytkownik posiada pierwotną Org oraz listę Orgów, do których ma dostęp. Użytkownik łączy to z listą przypisanych "Roles", które określają, jakie działania mogą podjąć na pozycje przypisane do Org, do których mają dostęp. Połączenie użytkowników "orgs" i "role" definiuje, co mogą i nie mogą zrobić w ramach Open- Audit.<br/> <br/>Większość pozycji w Open-Audit są przypisane do Org. Urządzenia, Lokalizacje, Sieci, itp.<br/> <br/>Orgs może mieć dzieci Orgs. Pomyśl o strukturze organizacyjnej (drzewo). Jeśli użytkownik ma dostęp do określonego Orga, ma również dostęp do potomków Orgów.</p>';

$GLOBALS["lang"]['<p>Quickly view the status of devices on your network.<br> <br></p>'] = '<p>Szybko wyświetl status urządzeń w sieci.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Roles in Open-AudIT are a key item. A user has a primary Org as well as a list of Orgs they can access. A user combines this with a list of assigned Roles that define what actions they can take on items assigned to the Orgs they have access to. The combination of a users "orgs" and "roles" define what they can and cannot do within Open-AudIT.<br> <br>
        Get the complete Open-AudIT Enterprise experience. Creating roles allows fine grained control over what your users can do within Open-AudIT.<br> <br>
        The primary method for authorisation (what a user can do) is based on the users Roles. Default roles are defined as admin, org_admin, reporter and user. Each role has a set of permissions (Create, Read, Update, Delete) for each endpoint. The ability to define additional roles and edit existing roles is enabled in Open-AudIT Enterprise.<br> <br>Roles can also be used with LDAP (Active Directory and OpenLDAP) authorisation. Enterprise licensed installations have the ability to customise the LDAP group for each defined role.<br> <br></p>'] = '<p>Role w Open- Aud IT to kluczowy element. Użytkownik posiada pierwotną Org oraz listę Orgów, do których ma dostęp. Użytkownik łączy to z listą przypisanych Roles, które określają jakie działania mogą podjąć na pozycje przypisane do Orgs, do których mają dostęp. Połączenie użytkowników "orgs" i "role" definiuje, co mogą i nie mogą zrobić w ramach Open- Audit.<br/> <br/>Pobierz pełne doświadczenie Open- Audit Enterprise. Tworzenie ról pozwala na precyzyjną kontrolę ziaren nad tym, co użytkownicy mogą zrobić w Open- Audit.<br/> <br/>Podstawowa metoda zatwierdzania (co użytkownik może zrobić) opiera się na użytkownikach Roles. Domyślne role są zdefiniowane jako admin, org _ admin, reporter i użytkownik. Każda rola ma zestaw uprawnień (Tworzenie, Odczyt, Aktualizacja, Usuń) dla każdego punktu końcowego. Możliwość zdefiniowania dodatkowych ról i edycji istniejących ról jest włączona w Open- Audit Enterprise.<br/> <br/>Roles może być również używany z autoryzacji LDAP (Active Directory i OpenLDAP). Instalacje licencjonowane przez przedsiębiorstwa mają możliwość dostosowania grupy LDAP do każdej określonej roli.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Rules examine attributes and make cahnges based on the appropriate rule.</p>'] = '<p>Zasady analizują atrybuty i dokonują kadzideł w oparciu o odpowiednią zasadę.</p>';

$GLOBALS["lang"]['<p>Scanning options allow you to easily apply a set of options to a discovery.<br> <br></p>'] = '<p>Opcje skanowania pozwalają na łatwe zastosowanie zestawu opcji do odkrycia.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Simple, intuitive, accurate geographic mapping provided by Google Maps. Open-AudIT leverages Google Maps to provide live, interactive geographic mapping of device locations. Automated conversion of street addresses to geocodes and longitude / latitude.<br> <br>
        </p>'] = '<p>Proste, intuicyjne, dokładne mapy geograficzne dostarczane przez Google Maps. Lewerages Open- Audit Mapy Google, aby zapewnić na żywo, interaktywne mapy geograficzne lokalizacji urządzeń. Automatyczne przeliczanie adresów ulicznych na kody geograficzne i długość / szerokość geograficzną.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Software Packages are used to determine if antivirus, backup, firewall, approved or banned software is installed.<br> <br></p>'] = '<p>Pakiety oprogramowania służą do określenia, czy zainstalowane jest oprogramowanie antywirusowe, backup, firewall, zatwierdzone lub zakazane.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Some examples of valid Subnet attributes are: 192.168.1.1 (a single IP address), 192.168.1.0/24 (a subnet), 192.168.1-3.1-20 (a range of IP addresses).<br> <br><em>NOTE</em> - Only a subnet (as per the examples - 192.168.1.0/24) will be able to automatically create a valid network for Open-AudIT. <br> <br>If you use an Active Directory type, make sure you have appropriate credentials to talk to your Domain Controller already in <a href="../credentials">credentials</a>.<br> <br></p>'] = '<p>Niektóre przykłady ważnych atrybutów Subnet to: 192.168.1.1 (pojedynczy adres IP), 192.168.1.0 / 24 (podnet), 192.168.1-3.1-20 (zakres adresów IP).<br/> <br/><em>UWAGA</em> - Tylko podsieć (jak na przykładach - 192.168.1.0 / 24) będzie w stanie automatycznie utworzyć poprawną sieć dla Open- Audit. <br/> <br/>Jeśli używasz typu Active Directory, upewnij się, że masz odpowiednie referencje, aby porozmawiać ze swoim kontrolerem domeny już w <a href="../credentials">legitymacje</a>.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Standards are stored in Open-AudIT.<br /><br /><br /><br /></p>'] = '<p>Standardy są przechowywane w Open- Audit.<br/><br/><br/><br/></p>';

$GLOBALS["lang"]['<p>Supported clients are Linux only.<br> <br></p>'] = '<p>Obsługiwani klienci to tylko Linux.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Tasks have a schedule that mirrors the unix cron schedule. The attributes for minute, hour, day_of_month, month, day_of_week all act as per the cron definitions. You can select multiples of these using comma seperated values (no spaces). You can select every value using *.<br> <br>The <code>type</code> of the task can be one of: baselines, collectors, discoveries, queries, reports or summaries.<br> <br>If you wish to schedule a Baseline or Discovery, you will need to create these before creating the tasks. You must use the ID of the type of item in <code>sub_resource_id</code>. For example if you wish to schedule a Discovery, use that particular Discoveries ID in <code>sub_resource_id</code>.<br> <br>The value for <code>uuid</code> is specific to each Open-AudIT server. Your unique value can be found in the configuration.<br> <br>The <code>options</code> attribute is a JSON document containing any extra attributes required to run the task. The extra attributes for reports, queries and summaries are: <code>email_address</code> and <code>format</code>. The extra attribute for Bselines is <code>group_id</code>.<br> <br></p>'] = '<p>Zadania mają harmonogram, który odzwierciedla harmonogram unix cron. Atrybuty na minutę, godzinę, dzień _ of _ month, miesiąc, dzień _ of _ week działają zgodnie z definicjami cron. Możesz wybrać wielokrotności tych wartości używając wartości seperacyjnych przecinek (bez spacji). Możesz wybrać każdą wartość używając *.<br/> <br/>W <code>type</code> zadania może być jednym z: linii podstawowych, kolekcjonerów, odkryć, zapytań, raportów lub podsumowań.<br/> <br/>Jeśli chcesz zaplanować Baseline lub Discovery, musisz stworzyć je przed utworzeniem zadań. Musisz użyć ID typu elementu w <code>sub_resource_id</code>. Na przykład jeśli chcesz zaplanować Odkrycie, użyj tego konkretnego ID Odkrywania w <code>sub_resource_id</code>.<br/> <br/>Wartość <code>uuid</code> jest specyficzny dla każdego serwera Open- Audit. Twoją unikalną wartość można znaleźć w konfiguracji.<br/> <br/>W <code>options</code> attribute to dokument JSON zawierający dodatkowe atrybuty wymagane do wykonania zadania. Dodatkowe atrybuty raportów, zapytań i podsumowań to: <code>email_address</code> oraz <code>format</code>. Dodatkowym atrybutem Bselines jest <code>group_id</code>.<br/> <br/></p>';

$GLOBALS["lang"]['<p>The <code>type</code> of the location will assign its icon.<br> <br></p>'] = '<p>W <code>type</code> lokalizacji przydzieli swoją ikonę.<br/> <br/></p>';

$GLOBALS["lang"]['<p>The Attributes endpoint allows you to add customized values to different attributes in Open-AudIT, at the moment this feature works on the Class, Environment, Status and Type attributes on Devices, the Type attribute for both Locations and Orgs as well as the Menu Category for Queries. If you view an item of one of the prvious types (say view a Lkocation) you will notice the Type attribute must be selected from a drop-down box. This is where those values are stored. Hence, if you would like to add a new Type to be chosen for a Location, add it using the Attributes feature.</p>'] = '<p>Punkt końcowy Atrybuty pozwala na dodanie wartości dostosowanych do różnych atrybutów w Open- Audit, w chwili obecnej funkcja ta działa na atrybutach klasy, środowiska, statusu i typu na urządzeniach, atrybucie Typ dla zarówno Lokalizacji i Orgs, jak i kategorii Menu dla zapytań. Jeśli wyświetlisz element jednego z typów (np. widok Lkocation), zauważysz, że atrybut Type musi być wybrany z rozwijanego pola. To tutaj te wartości są przechowywane. W związku z tym, jeśli chcesz dodać nowy typ do wybranej lokalizacji, dodaj go używając funkcji Atrybuty.</p>';

$GLOBALS["lang"]['<p>The Collectors feature enables you to easily manage many "collector" computers that perform network discovery. All Collectors are centrally controlled from the Server. The only required network ports between the Collector and the Server are 80 and/or 443.<br> <br>It makes managing disparate networks quick, easy and simple. Open-AudIT Enterprise licensees get a single collector license included and have the option to buy more as required..<br> <br></p>'] = '<p>Funkcja Collectors umożliwia łatwe zarządzanie wieloma komputerami "kolekcjonerskimi", które wykonują odkrycia sieciowe. Wszystkie kolektory są centralnie sterowane przez serwer. Jedyne wymagane porty sieciowe pomiędzy Kolekcjonerem a Serverem to 80 i / lub 443.<br/> <br/>Dzięki temu zarządzanie zróżnicowanymi sieciami jest szybkie, łatwe i proste. Open-Audit Licencjobiorcy firmy uzyskać jedną licencję kolekcjonerską zawarte i mają możliwość zakupu więcej w zależności od potrzeb.<br/> <br/></p>';

$GLOBALS["lang"]['<p>The SELECT section of your SQL <em>must</em> contain fully qualified columns. IE - <code>SELECT devices.id AS `devices.id`, devices.name AS `devices.name` ...</code>.<br> <br>The WHERE section of your SQL <em>must</em> contain <code>WHERE @filter</code> so Open-AudIT knows to restrict your query to the appropriate Orgs. SQL not containing this condition will result in the query failing to be created, unless you have the Admin role.<br> <br>An example query SQL showing attributes on devices that have an <code>os_group</code> attribute of "Linux" - <br><code>SELECT devices.id AS `devices.id`, devices.icon AS `devices.icon`, devices.type AS `devices.type`, devices.name AS `devices.name`, devices.os_name AS `devices.os_name` FROM devices WHERE @filter AND devices.os_group = "Linux"</code><br> <br></p>'] = '<p>Sekcja SELECT Twojego SQL <em>must</em> zawierają w pełni kwalifikowane kolumny. IE - <code>SELECT devices.id AS `devices.id`, devices.name AS `devices.name` ...</code>.<br/> <br/>Sekcja GDZIE SQL <em>must</em> zawiera <code>WHERE @filter</code> więc Open- Audit wie, aby ograniczyć zapytanie do odpowiednich Orgs. SQL niezawierający tego warunku spowoduje, że zapytanie nie zostanie utworzone, chyba że masz rolę Admin.<br/> <br/>Przykład zapytanie SQL pokazujące atrybuty na urządzeniach, które mają <code>os_group</code> atrybut "Linux" - <br/><code>SELECT devices.id AS `devices.id`, devices.icon AS `devices.icon`, devices.type AS `devices.type`, devices.name AS `devices.name`, devices.os_name AS `devices.os_name` FROM devices WHERE @filter AND devices.os_group = "Linux"</code><br/> <br/></p>';

$GLOBALS["lang"]['<p>The SELECT section of your SQL <em>must</em> only contain <code>DISTINCT(devices.id)</code>.<br> <br>The WHERE section of your SQL <em>must</em> contain <code>WHERE @filter</code> so Open-AudIT knows to restrict your query to the appropriate Orgs. SQL not containing this condition will result in the group failing to be created.<br> <br>An example for SQL to select all devices running the Debian OS - <code>SELECT DISTINCT(devices.id) FROM devices WHERE @filter AND devices.os_family = "Debian"</code><br> <br></p>'] = '<p>Sekcja SELECT Twojego SQL <em>must</em> Tylko zawierają <code>DISTINCT(devices.id)</code>.<br/> <br/>Sekcja GDZIE SQL <em>must</em> zawiera <code>WHERE @filter</code> więc Open- Audit wie, aby ograniczyć zapytanie do odpowiednich Orgs. SQL niezawierający tego warunku spowoduje, że grupa nie zostanie utworzona.<br/> <br/>Przykład dla SQL, aby wybrać wszystkie urządzenia uruchamiające system operacyjny Debiana - <code>SELECT DISTINCT(devices.id) FROM devices WHERE @filter AND devices.os_family = "Debian"</code><br/> <br/></p>';

$GLOBALS["lang"]['<p>The license endpoint allows you to track the number of licenses found on your devices.<br> <br>To create an entry to track your licenses you <em>must</em> to provide a name, an organization, the number of licenses acquired and the name of the software. On the field <code>match_string</code> you must provide the name of the software that you want to track, you can use the percent sign (%) as a wildcard in the match_string.<br> <br></p>'] = '<p>Punkt końcowy licencji pozwala na śledzenie liczby licencji znalezionych na urządzeniach.<br/> <br/>Aby utworzyć wpis do śledzenia licencji <em>must</em> podanie nazwy, organizacji, liczby nabytych licencji oraz nazwy oprogramowania. Na boisku <code>match_string</code> musisz podać nazwę oprogramowania, które chcesz śledzić, możesz użyć znaku% (%) jako dzikiej karty w pliku match _ string.<br/> <br/></p>';

$GLOBALS["lang"]['<p>The network should be in the format 192.168.1.0/24.<br> <br></p>'] = '<p>Sieć powinna mieć format 192.168.1.0 / 24.<br/> <br/></p>';

$GLOBALS["lang"]['<p>The primary and optional secondary items should be fully qualified - ie, devices.type or software.name.<br> <br></p>'] = '<p>Podstawowe i opcjonalne przedmioty drugorzędne powinny być w pełni kwalifikowane - tj. urządzenia. typ lub oprogramowanie. imię.<br/> <br/></p>';

$GLOBALS["lang"]['<p>There is no need to do anything if you are running Open-AudIT on a Linux server.<br>
<br>
Windows clients are just fine and require no special actions, however.... to enable this feature the audit script must be run locally on the target Windows system. It cannot be run remotely as we do with WMI calls when running the audit script on one Windows machine, while targeting a second Windows machine. To do this we need to copy the audit script to the target Windows machine and then run it. Unfortunately the service account that Apache runs under is the Local System account. This account has no access to remote (network based) resources. To work around this issue the service must be run under another account. It is easiest to just use the local Administrator account, but you can try any account you like as long as it has the required privileges. The Local System account has as much local access as the local Administrator account.<br>
<br>
See our page on enabling <a href="/index.php/faq?name=Running Open-AudIT Apache Service Under Windows">Running Open-AudIT Apache Service Under Windows</a></p>'] = '<p>Nie ma potrzeby nic robić, jeśli uruchomisz Open- Audit na serwerze Linux.<br/><br/>Klienci Windows są po prostu w porządku i nie wymagają specjalnych działań, jednak.... aby włączyć tę funkcję skrypt audytu musi być uruchomiony lokalnie w docelowym systemie Windows. Nie można go zdalnie uruchomić, tak jak to robimy z wywołaniami WMI podczas uruchamiania skryptu audytu na jednej maszynie Windows, a jednocześnie celować w drugą maszynę Windows. Aby to zrobić, musimy skopiować skrypt audytu do docelowej maszyny Windows, a następnie uruchomić go. Niestety konto serwisowe, pod którym działa Apache, to konto systemu lokalnego. Konto to nie ma dostępu do zasobów zdalnych (sieciowych). Aby rozwiązać ten problem, usługa musi być prowadzona na innym koncie. Najłatwiej jest po prostu korzystać z lokalnego konta administratora, ale można spróbować dowolnego konta, jeśli ma wymagane uprawnienia. Konto systemu lokalnego ma taki sam dostęp lokalny jak lokalne konto administratora.<br/><br/>Zobacz naszą stronę o możliwości <a href="/index.php/faq?name=Running Open-AudIT Apache Service Under Windows">Uruchomienie usługi Open- Audit Apache pod systemem Windows</a></p>';

$GLOBALS["lang"]['<p>These are the devices that live within a rack.<br> <br></p>'] = '<p>To są urządzenia, które mieszkają w stojaku.<br/> <br/></p>';

$GLOBALS["lang"]['<p>This endpoint enables you to add your cloud infrastructure details. Open-AudIT will then reach out to your clouds using their native API and return your servers, just like any other device in Open-AudIT.<br> <br><em>NOTE</em> - To use this feature, we <em>must</em> enable the configuration items match_mac (for AWS) and match_hostname (for Azure). This will be done automatically the first time a cloud discovery is executed.<br> <br>Credentials for your cloud (<a href="/index.php/faq?name=Credentials for Microsoft Azure used in Cloud Discovery">Azure</a> or <a href="/index.php/faq?name=Credentials for Amazon AWS used in Cloud Discovery">AWS</a>) are required.<br> <br></p>'] = '<p>Ten punkt końcowy pozwala na dodanie szczegółów dotyczących infrastruktury w chmurze. Open-Audit następnie dotrzeć do chmur za pomocą ich rodzimych API i zwrócić swoje serwery, tak jak każde inne urządzenie w Open-Audit.<br/> <br/><em>UWAGA</em> - Aby korzystać z tej funkcji, my <em>must</em> Włącz pozycje konfiguracyjne: match _ mac (dla AWS) i match _ hostname (dla Azure). Zostanie to wykonane automatycznie przy pierwszym uruchomieniu odkrycia w chmurze.<br/> <br/>Fundamenty dla chmury (<a href="/index.php/faq?name=Credentials for Microsoft Azure used in Cloud Discovery">Azure</a> lub <a href="/index.php/faq?name=Credentials for Amazon AWS used in Cloud Discovery">AWS</a>) są wymagane.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Vulnerabilities reporting based on the NIST CVE feed.<br> <br></p>'] = '<p>Raporty o podatności na zagrożenia w oparciu o NIST CVE.<br/> <br/></p>';

$GLOBALS["lang"]['<p>We initially setup the default list of scripts with the default options. These default scripts cannot be deleted. You can create additional scripts for use by you as required. Your script will be based on one of the existing scripts and have custom options applied. The scripts can then be downloaded from the list page at menu -> Discover -> Audit Scripts -> List Audit Scripts<br> <br></p>'] = '<p>Początkowo ustawiamy domyślną listę skryptów z domyślnymi opcjami. Te domyślne skrypty nie mogą być usunięte. Możesz utworzyć dodatkowe skrypty do użycia przez Ciebie w zależności od potrzeb. Skrypt będzie oparty na jednym z istniejących skryptów i będzie miał własne opcje. Skrypty można pobrać ze strony listy w menu - > Odkryj - > Audyt skryptów - > Lista skryptów audytu<br/> <br/></p>';

$GLOBALS["lang"]['<p>When using Regex for matching, a helpful page can be found on the <a href="https://www.php.net/manual/en/regexp.reference.meta.php" target="_blank"> PHP website</a>. Some differences to Perl Regex can be found <a href="https://www.php.net/manual/en/reference.pcre.pattern.differences.php" target="_blank">here</a>.</p>'] = '<p>Przy użyciu Regex do dopasowania, pomocną stronę można znaleźć na <a href="https://www.php.net/manual/en/regexp.reference.meta.php" target="_blank"> Strona internetowa PHP</a>. Niektóre różnice do Perl Regex można znaleźć <a href="https://www.php.net/manual/en/reference.pcre.pattern.differences.php" target="_blank">Tutaj</a>.</p>';

$GLOBALS["lang"]['<p>Widgets can easily be created to show whatever is specific to your environment on your dashboards.<br> <br></p>'] = '<p>Widgety można łatwo tworzyć, aby pokazać, co jest specyficzne dla środowiska na swoich deskach rozdzielczych.<br/> <br/></p>';

$GLOBALS["lang"]['<p>With Open-AudIT Professional and Enterprise you can automate and schedule discoveries, report generation, or baseline checks to run when you want, and as often as you need. Schedule your discoveries to run nightly and reports to be generated and emailed to key personnel each morning. Complex or simple schedules, device discovery and report generation is just a click away.<br> <br>Create individual discovery schedules for each subnet or AD controller, add in reports to be created for targeted audiences. Develop simple or complex schedules to support company needs, avoid backups or impact to operations, or simply to spread the load and speed-up audit completion.<br> <br></p>'] = '<p>Z Open- Audit Profesjonalne i Enterprise można zautomatyzować i zaplanować odkrycia, generowanie raportów, lub podstawowe kontrole, aby uruchomić, kiedy chcesz, i tak często, jak trzeba. Zaplanuj swoje odkrycia, aby uruchomić w nocy i raporty, które mają być generowane i e-mail do kluczowego personelu każdego ranka. Kompleksowe lub proste harmonogramy, odkrywanie urządzeń i generowanie raportów jest tylko jedno kliknięcie.<br/> <br/>Tworzenie indywidualnych harmonogramów wyszukiwania dla każdej podsieci lub kontrolera AD, dodać w raportach, które mają być tworzone dla docelowych odbiorców. Opracowanie prostych lub złożonych harmonogramów w celu wsparcia potrzeb firmy, uniknięcia tworzenia kopii zapasowych lub wpływu na operacje, lub po prostu rozłożenie obciążenia i przyspieszenie zakończenia audytu.<br/> <br/></p>';

$GLOBALS["lang"]['<p>You can create a script with all the options for any of the existing audit scripts - not just Windows. AIX, ESX, Linux, OSX and Windows are all covered.<br> <br></p>'] = '<p>Możesz stworzyć skrypt ze wszystkimi opcjami dla każdego z istniejących skryptów audytu - nie tylko Windows. AIX, ESX, Linux, OSX i Windows są objęte.<br/> <br/></p>';

$GLOBALS["lang"]['<p>You can use the percent % sign as a wildcard in the match_string.<br> <br></p>'] = '<p>Możesz użyć znaku%% jako dzikiej karty w pliku match _ string.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Your racks help refine exactly where your devices are located.<br> <br></p>'] = '<p>Twoje stojaki pomagają udoskonalić dokładnie, gdzie urządzenia są zlokalizowane.<br/> <br/></p>';

$GLOBALS["lang"]['A Google Maps API Key is required for this function.'] = 'Mapy Google API Klucz jest wymagany dla tej funkcji.';

$GLOBALS["lang"]['A JSON array of device IDs that will have this benchmark executed.'] = 'Identyfikator urządzenia JSON, który będzie wykonywał ten wskaźnik.';

$GLOBALS["lang"]['A JSON array of objects matching the software name taken from the CVE, enriched with the software name retrieved by Open-AudIT.'] = 'System JSON obiektów pasujący do nazwy oprogramowania pobranego z CVE, wzbogacony o nazwę oprogramowania uzyskaną przez Open- Audit.';

$GLOBALS["lang"]['A JSON array of values to test for this vulnerability.'] = 'Lista wartości JSON do przetestowania dla tej podatności.';

$GLOBALS["lang"]['A JSON document containing the Orgs assigned to this user. IDs taken from <code>orgs.id</code>. If a user has access to an Org, they have access to that Orgs descendants.'] = 'Dokument JSON zawierający Orgi przypisane temu użytkownikowi. Identyfikatory pobrane z <code>orgs.id</code>. Jeśli użytkownik ma dostęp do Orga, ma dostęp do potomków Orgów.';

$GLOBALS["lang"]['A JSON document containing the required attributes depending on <code>scripts.type</code>.'] = 'Dokument JSON zawierający wymagane atrybuty w zależności od <code>scripts.type</code>.';

$GLOBALS["lang"]['A JSON document containing the required attributes overriding the chosen discovery_scan_options.'] = 'Dokument JSON zawierający wymagane atrybuty nadrzędne dla wybranych opcji discover _ scan _ options.';

$GLOBALS["lang"]['A JSON document containing the required attributes overriding the default device match options.'] = 'Dokument JSON zawierający wymagane atrybuty nadrzędne dla domyślnych opcji dopasowania urządzenia.';

$GLOBALS["lang"]['A JSON document containing the roles assigned to this user. Role names taken from <code>roles.name</code>.'] = 'Dokument JSON zawierający role przypisane temu użytkownikowi. Nazwy ról <code>roles.name</code>.';

$GLOBALS["lang"]['A JSON object containing an array of attributes to change if the match occurs.'] = 'Obiekt JSON zawierający tablicę atrybutów do zmiany w przypadku dopasowania.';

$GLOBALS["lang"]['A JSON object containing an array of attributes to match.'] = 'Obiekt JSON zawierający tablicę atrybutów do dopasowania.';

$GLOBALS["lang"]['A JSON object containing collection specific options.'] = 'Obiekt JSON zawierający specjalne opcje kolekcji.';

$GLOBALS["lang"]['A JSON object populated via a Cloud discovery.'] = 'Obiekt JSON zaludniony przez odkrycie Chmury.';

$GLOBALS["lang"]['A JSON representation containing the details of the queue item to be executed.'] = 'Przedstawicielstwo JSON zawierające szczegóły pozycji kolejki do wykonania.';

$GLOBALS["lang"]['A JSON representation of the fields for this integration.'] = 'Reprezentacja JSON pól dla tej integracji.';

$GLOBALS["lang"]['A JSON representation of the individual tests and their results on all devices this baseline has been run against.'] = 'Przedstawicielstwo JSON poszczególnych testów i ich wyników na wszystkich urządzeniach ten punkt odniesienia został uruchomiony przeciwko.';

$GLOBALS["lang"]['A JSON representation of the tests that make up this policy.'] = 'JSON przedstawia testy, które tworzą tę politykę.';

$GLOBALS["lang"]['A URL to a file to download.'] = 'URL pliku do pobrania.';

$GLOBALS["lang"]['A calculated field that displays the number of times this piece of software was found on the computers in the selected Org (and its descendants if configured).'] = 'Obliczone pole, które wyświetla liczbę razy ten element oprogramowania został znaleziony na komputerach w wybranym Org (i jego potomków, jeśli skonfigurowano).';

$GLOBALS["lang"]['A collector is either in Collector or Stand-Alone mode.'] = 'Kolekcjoner jest albo w trybie Kolekcjoner lub Stand- Sam.';

$GLOBALS["lang"]['A comma separated list of applicable CVEs.'] = 'Oddzielona przecinkami lista właściwych CVE.';

$GLOBALS["lang"]['A comma separated list of values, one of which can be selected.'] = 'Lista wartości oddzielonych przecinkami, z których jedna może być wybrana.';

$GLOBALS["lang"]['A command to run. When the agent is Windows based, this command is run from within the powershell agent.'] = 'Polecenie do uruchomienia. Kiedy agent jest oparty na systemie Windows, polecenie to jest uruchamiane z wewnątrz agenta powershell.';

$GLOBALS["lang"]['A list of custom TCP ports to scan (22 is SSH, 135 is WMI, 62078 is iPhone sync).'] = 'Lista własnych portów TCP do skanowania (22 to SSH, 135 to WMI, 62078 to synchronizacja iPhone \'a).';

$GLOBALS["lang"]['A list of custom UDP ports to scan (161 is SNMP).'] = 'Lista niestandardowych portów UDP do skanowania (161 to SNMP).';

$GLOBALS["lang"]['A lower number means it will be applied before other rules.'] = 'Niższa liczba oznacza, że będzie ona stosowana przed innymi zasadami.';

$GLOBALS["lang"]['A lower number means it will be applied before other rules. The default weight is 100.'] = 'Niższa liczba oznacza, że będzie ona stosowana przed innymi zasadami. Domyślna waga to 100.';

$GLOBALS["lang"]['A password (stored as a hash) that enables logon when using application authentication.'] = 'Hasło (zapisane jako hash), które umożliwia logowanie podczas korzystania z uwierzytelniania aplikacji.';

$GLOBALS["lang"]['A routing domain or address space where the IP addresses and MAC addresses are unique.'] = 'Domena routingu lub przestrzeń adresowa, gdzie adresy IP i adresy MAC są niepowtarzalne.';

$GLOBALS["lang"]['A security zone is a administrative domain or policy domain within the Network Domain.'] = 'Strefa bezpieczeństwa jest domeną administracyjną lub dziedziną polityki w ramach domeny sieci.';

$GLOBALS["lang"]['A short description of the log entry.'] = 'Krótki opis wpisu do dziennika.';

$GLOBALS["lang"]['A string that matches the <code>software.name</code> attribute. You can use the standard SQL wildcard of percent (%) to match one or more characters.'] = 'Łańcuch pasujący do <code>software.name</code> atrybut. Możesz użyć standardowej karty SQL w procentach (%), aby dopasować jeden lub więcej znaków.';

$GLOBALS["lang"]['A vulnerability affecting availability may allow attackers to disrupt services, crash systems, or cause denial-of-service (DoS) (None, Low, High).'] = 'Wrażliwość wpływająca na dostępność może umożliwić atakującym zakłócanie usług, systemów awaryjnych lub powodować zaprzeczenie usługi (DoS) (Brak, niski, wysoki).';

$GLOBALS["lang"]['A vulnerability affecting confidentiality may allow attackers to read sensitive data, such as personal information, credentials, or proprietary business data (None, Low, High).'] = 'Wrażliwość wpływająca na poufność może umożliwić atakującym odczytanie danych wrażliwych, takich jak dane osobowe, dane uwierzytelniające lub zastrzeżone dane biznesowe (Brak, niski, wysoki).';

$GLOBALS["lang"]['A vulnerability affecting integrity may allow attackers to modify data, inject malicious code, or alter system configurations (None, Low, High).'] = 'Wrażliwość wpływająca na integralność może umożliwić atakującym modyfikację danych, wstrzyknięcie złośliwego kodu lub zmianę konfiguracji systemu (Brak, niski, wysoki).';

$GLOBALS["lang"]['AD Group'] = 'Grupa AD';

$GLOBALS["lang"]['ADSL, HFC, ISDN, etc.'] = 'ADSL, HFC, ISDN itp.';

$GLOBALS["lang"]['AIX'] = 'AIX';

$GLOBALS["lang"]['ALL IPs'] = 'WSZYSTKIE IPP';

$GLOBALS["lang"]['API / Web Access'] = 'API / Web Access';

$GLOBALS["lang"]['API Documentation'] = 'Dokumentacja API';

$GLOBALS["lang"]['API Key required.'] = 'Wymagany klucz API.';

$GLOBALS["lang"]['API Result'] = 'Wynik API';

$GLOBALS["lang"]['About'] = 'O';

$GLOBALS["lang"]['Accept'] = 'Akceptuj';

$GLOBALS["lang"]['access_point'] = 'Punkt dostępu';

$GLOBALS["lang"]['Access Point'] = 'Punkt dostępu';

$GLOBALS["lang"]['access_token'] = 'Access Token';

$GLOBALS["lang"]['Access Token'] = 'Access Token';

$GLOBALS["lang"]['ack_by'] = 'Ack by';

$GLOBALS["lang"]['Ack By'] = 'Ack by';

$GLOBALS["lang"]['ack_date'] = 'Data';

$GLOBALS["lang"]['Ack Date'] = 'Data';

$GLOBALS["lang"]['ack_time'] = 'Czas Ack';

$GLOBALS["lang"]['Ack Time'] = 'Czas Ack';

$GLOBALS["lang"]['action'] = 'Działanie';

$GLOBALS["lang"]['Action'] = 'Działanie';

$GLOBALS["lang"]['action_audit'] = 'Audyt działań';

$GLOBALS["lang"]['Action Audit'] = 'Audyt działań';

$GLOBALS["lang"]['action_command'] = 'Polecenie działania';

$GLOBALS["lang"]['Action Command'] = 'Polecenie działania';

$GLOBALS["lang"]['action_date'] = 'Data działania';

$GLOBALS["lang"]['Action Date'] = 'Data działania';

$GLOBALS["lang"]['action_devices_assigned_to_location'] = 'Urządzenia akcji przyporządkowane do lokalizacji';

$GLOBALS["lang"]['Action Devices Assigned To Location'] = 'Urządzenia akcji przyporządkowane do lokalizacji';

$GLOBALS["lang"]['action_devices_assigned_to_org'] = 'Urządzenia do akcji przypisywane Org';

$GLOBALS["lang"]['Action Devices Assigned To Org'] = 'Urządzenia do akcji przypisywane Org';

$GLOBALS["lang"]['action_download'] = 'Pobieranie akcji';

$GLOBALS["lang"]['Action Download'] = 'Pobieranie akcji';

$GLOBALS["lang"]['action_uninstall'] = 'Odinstaluj działanie';

$GLOBALS["lang"]['Action Uninstall'] = 'Odinstaluj działanie';

$GLOBALS["lang"]['actioned'] = 'Aktywowane';

$GLOBALS["lang"]['Actioned'] = 'Aktywowane';

$GLOBALS["lang"]['actioned_by'] = 'Acted by';

$GLOBALS["lang"]['Actioned By'] = 'Acted by';

$GLOBALS["lang"]['actioned_date'] = 'Data aktywna';

$GLOBALS["lang"]['Actioned Date'] = 'Data aktywna';

$GLOBALS["lang"]['actions'] = 'Działania';

$GLOBALS["lang"]['Actions'] = 'Działania';

$GLOBALS["lang"]['Activate'] = 'Aktywuj';

$GLOBALS["lang"]['Activate Free License'] = 'Aktywuj darmową licencję';

$GLOBALS["lang"]['Activate Key'] = 'Aktywuj klucz';

$GLOBALS["lang"]['Activate a free Enterprise license'] = 'Aktywuj darmową licencję Enterprise';

$GLOBALS["lang"]['Active'] = 'Aktywne';

$GLOBALS["lang"]['Active / Active'] = 'Aktywna / aktywna';

$GLOBALS["lang"]['Active / Passive'] = 'Aktywna / pasywna';

$GLOBALS["lang"]['Active Directory'] = 'Katalog aktywny';

$GLOBALS["lang"]['Active Directory Domain'] = 'Domena katalogów aktywnych';

$GLOBALS["lang"]['active_directory_ou'] = 'Aktywny katalog Ou';

$GLOBALS["lang"]['Active Directory Ou'] = 'Aktywny katalog Ou';

$GLOBALS["lang"]['Active Directory Server'] = 'Aktywny serwer katalogów';

$GLOBALS["lang"]['ad_domain'] = 'Domena Ad';

$GLOBALS["lang"]['Ad Domain'] = 'Domena Ad';

$GLOBALS["lang"]['ad_group'] = 'Grupa Ad';

$GLOBALS["lang"]['Ad Group'] = 'Grupa Ad';

$GLOBALS["lang"]['ad_server'] = 'Ad Serwer';

$GLOBALS["lang"]['Ad Server'] = 'Ad Serwer';

$GLOBALS["lang"]['Add'] = 'Dodaj';

$GLOBALS["lang"]['Add Credentials'] = 'Dodaj zasługi';

$GLOBALS["lang"]['Add Device'] = 'Dodaj urządzenie';

$GLOBALS["lang"]['Add Device to Application'] = 'Dodaj urządzenie do aplikacji';

$GLOBALS["lang"]['Add Device to Cluster'] = 'Dodaj urządzenie do klastra';

$GLOBALS["lang"]['Add Exception'] = 'Dodaj wyjątek';

$GLOBALS["lang"]['Add Field'] = 'Dodaj pole';

$GLOBALS["lang"]['Add If'] = 'Dodaj jeśli';

$GLOBALS["lang"]['Add Policies from Device'] = 'Dodaj politykę z urządzenia';

$GLOBALS["lang"]['Add Policy'] = 'Dodaj politykę';

$GLOBALS["lang"]['Add Then'] = 'Dodaj wtedy';

$GLOBALS["lang"]['Add image'] = 'Dodaj obraz';

$GLOBALS["lang"]['additional_items'] = 'Dodatkowe pozycje';

$GLOBALS["lang"]['Additional Items'] = 'Dodatkowe pozycje';

$GLOBALS["lang"]['address'] = 'Adres';

$GLOBALS["lang"]['Address'] = 'Adres';

$GLOBALS["lang"]['Admin'] = 'Admin';

$GLOBALS["lang"]['admin_status'] = 'Status administratora';

$GLOBALS["lang"]['Admin Status'] = 'Status administratora';

$GLOBALS["lang"]['advanced'] = 'Zaawansowane';

$GLOBALS["lang"]['Advanced'] = 'Zaawansowane';

$GLOBALS["lang"]['Afghanistan'] = 'Afganistan';

$GLOBALS["lang"]['agents'] = 'Agenci';

$GLOBALS["lang"]['Agents'] = 'Agenci';

$GLOBALS["lang"]['Aggressive'] = 'Agresywne';

$GLOBALS["lang"]['Aland Islands'] = 'Wyspy Alandzkie';

$GLOBALS["lang"]['Albania'] = 'Albania';

$GLOBALS["lang"]['alert_style'] = 'Styl ostrzegania';

$GLOBALS["lang"]['Alert Style'] = 'Styl ostrzegania';

$GLOBALS["lang"]['Algeria'] = 'Algieria';

$GLOBALS["lang"]['algorithm'] = 'Algorytm';

$GLOBALS["lang"]['Algorithm'] = 'Algorytm';

$GLOBALS["lang"]['alias'] = 'Alias';

$GLOBALS["lang"]['Alias'] = 'Alias';

$GLOBALS["lang"]['All'] = 'Wszystkie';

$GLOBALS["lang"]['All IPs'] = 'Wszystkie IP';

$GLOBALS["lang"]['All Policies'] = 'Wszystkie polityki';

$GLOBALS["lang"]['All Queued Items'] = 'Wszystkie pozycje w kolejce';

$GLOBALS["lang"]['Amazon AWS Fields'] = 'Amazon AWS Pola';

$GLOBALS["lang"]['American Samoa'] = 'Samoa amerykańskie';

$GLOBALS["lang"]['An array of <code>benchmarks.id</code>.'] = 'Tablica <code>benchmarks.id</code>.';

$GLOBALS["lang"]['An array of <code>devices.id</code>.'] = 'Tablica <code>devices.id</code>.';

$GLOBALS["lang"]['An array of object representing external links to more information.'] = 'Tablica obiektu reprezentująca linki zewnętrzne do większej ilości informacji.';

$GLOBALS["lang"]['An encrypted JSON document containing the required attributes depending on the <code>credentials.type</code>.'] = 'Zaszyfrowany dokument JSON zawierający wymagane atrybuty w zależności od <code>credentials.type</code>.';

$GLOBALS["lang"]['An indication of the level of service required by this site.'] = 'Wskazanie poziomu obsługi wymaganej przez tę stronę.';

$GLOBALS["lang"]['An internal field that indicates if the discovery has completed.'] = 'Pole wewnętrzne, które wskazuje, czy odkrycie zostało zakończone.';

$GLOBALS["lang"]['An optional GeoCode'] = 'Opcjonalny GeoCode';

$GLOBALS["lang"]['An optional password to use sudo.'] = 'Opcjonalne hasło do użycia sudo.';

$GLOBALS["lang"]['Andorra'] = 'Andora';

$GLOBALS["lang"]['Angola'] = 'Angola';

$GLOBALS["lang"]['Anguilla'] = 'Anguilla';

$GLOBALS["lang"]['Antarctica'] = 'Antarktyda';

$GLOBALS["lang"]['AntiVirus'] = 'Antywirus';

$GLOBALS["lang"]['Antigua and Barbuda'] = 'Antigua i Barbuda';

$GLOBALS["lang"]['Antivirus'] = 'Antywirus';

$GLOBALS["lang"]['Any TCP ports (comma seperated, no spaces) you wish to exclude from this discovery. Only available when using Nmap 7+.'] = 'Wszelkie porty TCP (przecinek seperated, brak spacji), które chcesz wyłączyć z tego odkrycia. Dostępne tylko przy użyciu Nmap 7 +.';

$GLOBALS["lang"]['Any UDP ports (comma seperated, no spaces) you wish to exclude from this discovery. Only available when using Nmap 7+.'] = 'Wszelkie porty UDP (przecinek oddzielony, bez spacji), które chcesz wyłączyć z tego odkrycia. Dostępne tylko przy użyciu Nmap 7 +.';

$GLOBALS["lang"]['Any additional documentation you need.'] = 'Każda dodatkowa dokumentacja, której potrzebujesz.';

$GLOBALS["lang"]['Any additional notes you care to make.'] = 'Wszelkie dodatkowe notatki, które chcesz zrobić.';

$GLOBALS["lang"]['Any devices will be assigned to this Org when they run their audit script (if set). Links to <code>orgs.id</code>.'] = 'Wszelkie urządzenia zostaną przypisane do tego Org podczas uruchamiania skryptu audytu (jeśli są ustawione). Linki do <code>orgs.id</code>.';

$GLOBALS["lang"]['Any discovered devices will be assigned to this Location if set. Links to <code>locations.id</code>.'] = 'Wszelkie odkryte urządzenia zostaną przypisane do tej lokalizacji, jeśli są ustawione. Linki do <code>locations.id</code>.';

$GLOBALS["lang"]['Any discovered devices will be assigned to this Location when they run their audit script (if set). Links to <code>locations.id</code>.'] = 'Wszelkie odkryte urządzenia zostaną przypisane do tej lokalizacji podczas uruchamiania skryptu audytu (jeśli są ustawione). Linki do <code>locations.id</code>.';

$GLOBALS["lang"]['Any discovered devices will be assigned to this Org if set. If not set, they are assigned to the <code>org_id</code> of this discovery. Links to <code>orgs.id</code>.'] = 'Wszelkie odkryte urządzenia zostaną przypisane do tego Orga, jeśli są ustawione. Jeśli nie ustawione, są one przypisane do <code>org_id</code> o tym odkryciu. Linki do <code>orgs.id</code>.';

$GLOBALS["lang"]['Any required filter. NOTE: When type = traffic, this represents the font-awesome icon.'] = 'Każdy wymagany filtr. UWAGA: When type = traffic, this represents the font- awesome icon.';

$GLOBALS["lang"]['Any specific TCP ports you wish tested (comma seperated, no spaces).'] = 'Wszelkie konkretne porty TCP, które chcesz przetestować (przecinek seperacyjny, brak spacji).';

$GLOBALS["lang"]['Any specific UDP ports you wish tested (comma seperated, no spaces).'] = 'Wszelkie konkretne porty UDP, które chcesz przetestować (przecinek seperacyjny, brak spacji).';

$GLOBALS["lang"]['Application'] = 'Stosowanie';

$GLOBALS["lang"]['application_id'] = 'Identyfikator aplikacji';

$GLOBALS["lang"]['Application ID'] = 'Identyfikator aplikacji';

$GLOBALS["lang"]['Application Licenses'] = 'Licencje na wniosek';

$GLOBALS["lang"]['Application, Operating System or Hardware.'] = 'Aplikacja, system operacyjny lub sprzęt.';

$GLOBALS["lang"]['applications'] = 'Wnioski';

$GLOBALS["lang"]['Applications'] = 'Wnioski';

$GLOBALS["lang"]['applied'] = 'Stosowane';

$GLOBALS["lang"]['Applied'] = 'Stosowane';

$GLOBALS["lang"]['Approved'] = 'Zatwierdzone';

$GLOBALS["lang"]['April'] = 'Kwiecień';

$GLOBALS["lang"]['architecture'] = 'Architektura';

$GLOBALS["lang"]['Architecture'] = 'Architektura';

$GLOBALS["lang"]['Are you sure you want to delete this input item?'] = 'Na pewno chcesz usunąć ten element wejściowy?';

$GLOBALS["lang"]['Are you sure you want to delete this output item?'] = 'Na pewno chcesz usunąć ten element wyjściowy?';

$GLOBALS["lang"]['Are you sure? This will remove all queue entries and prevent the remaining IPs from being discovered.'] = 'Jesteś pewna? Usunie to wszystkie wpisy w kolejce i zapobiegnie odkryciu pozostałych IP.';

$GLOBALS["lang"]['Are you sure? This will reset the queue processing count and could cause load on the server.'] = 'Jesteś pewna? To zresetuje liczbę przetwarzania kolejki i może spowodować obciążenie serwera.';

$GLOBALS["lang"]['area'] = 'Obszar';

$GLOBALS["lang"]['Area'] = 'Obszar';

$GLOBALS["lang"]['Argentina'] = 'Argentyna';

$GLOBALS["lang"]['Armenia'] = 'Armenia';

$GLOBALS["lang"]['arp'] = 'Arp';

$GLOBALS["lang"]['Arp'] = 'Arp';

$GLOBALS["lang"]['Aruba'] = 'Aruba';

$GLOBALS["lang"]['As per the attributes for device environments. Production, Training, et al.'] = 'Zgodnie z atrybutami dla środowisk urządzeń. Production, Training, et al.';

$GLOBALS["lang"]['As you have Collectors registered, please choose where to execute this discovery.'] = 'Jak masz Collectors zarejestrowane, proszę wybrać, gdzie wykonać to odkrycie.';

$GLOBALS["lang"]['Ask me later'] = 'Zapytaj mnie później.';

$GLOBALS["lang"]['Ask the Community for help or contribute answers for others.'] = 'Poproś Wspólnotę o pomoc lub udziel odpowiedzi innym.';

$GLOBALS["lang"]['aspect_ratio'] = 'Wskaźnik prawdopodobieństwa';

$GLOBALS["lang"]['Aspect Ratio'] = 'Wskaźnik prawdopodobieństwa';

$GLOBALS["lang"]['Asset ID'] = 'Identyfikator aktywów';

$GLOBALS["lang"]['asset_ident'] = 'Ident aktywów';

$GLOBALS["lang"]['Asset Ident'] = 'Ident aktywów';

$GLOBALS["lang"]['asset_number'] = 'Numer aktywów';

$GLOBALS["lang"]['Asset Number'] = 'Numer aktywów';

$GLOBALS["lang"]['asset_tag'] = 'Znacznik aktywów';

$GLOBALS["lang"]['Asset Tag'] = 'Znacznik aktywów';

$GLOBALS["lang"]['Assign Device to Application'] = 'Przypisz urządzenie do aplikacji';

$GLOBALS["lang"]['Assign Device to Cluster'] = 'Przypisz urządzenie do klastra';

$GLOBALS["lang"]['Assign Device to Location'] = 'Przypisz urządzenie do lokalizacji';

$GLOBALS["lang"]['Assign Device to Organisation'] = 'Przypisanie urządzenia organizacji';

$GLOBALS["lang"]['Assign Devices to Location'] = 'Przypisz urządzenia do lokalizacji';

$GLOBALS["lang"]['Assign Devices to Organisation'] = 'Przypisanie urządzeń organizacji';

$GLOBALS["lang"]['Assign an Operator'] = 'Przypisz operatorowi';

$GLOBALS["lang"]['Assigned To'] = 'Przyznane';

$GLOBALS["lang"]['At present we can use netstat_ports, software and users.'] = 'Obecnie możemy korzystać z netstat _ ports, oprogramowania i użytkowników.';

$GLOBALS["lang"]['attached_device_id'] = 'Dołączony identyfikator urządzenia';

$GLOBALS["lang"]['Attached Device ID'] = 'Dołączony identyfikator urządzenia';

$GLOBALS["lang"]['attached_to'] = 'Dołączone do';

$GLOBALS["lang"]['Attached To'] = 'Dołączone do';

$GLOBALS["lang"]['attachment'] = 'Załącznik';

$GLOBALS["lang"]['Attachment'] = 'Załącznik';

$GLOBALS["lang"]['attachments'] = 'Załączniki';

$GLOBALS["lang"]['Attachments'] = 'Załączniki';

$GLOBALS["lang"]['attack_complexity'] = 'Attack Complexity';

$GLOBALS["lang"]['Attack Complexity'] = 'Attack Complexity';

$GLOBALS["lang"]['attack_requirements'] = 'Wymagania dotyczące ataku';

$GLOBALS["lang"]['Attack Requirements'] = 'Wymagania dotyczące ataku';

$GLOBALS["lang"]['attack_vector'] = 'Atak wektor';

$GLOBALS["lang"]['Attack Vector'] = 'Atak wektor';

$GLOBALS["lang"]['Attribute'] = 'Atrybut';

$GLOBALS["lang"]['attributes'] = 'Atrybuty';

$GLOBALS["lang"]['Attributes'] = 'Atrybuty';

$GLOBALS["lang"]['Audit'] = 'Kontrola';

$GLOBALS["lang"]['Audit AIX'] = 'Audyt AIX';

$GLOBALS["lang"]['Audit ESXi'] = 'Audyt ESXi';

$GLOBALS["lang"]['Audit Linux'] = 'Audyt Linux';

$GLOBALS["lang"]['audit_log'] = 'Dziennik audytu';

$GLOBALS["lang"]['Audit Log'] = 'Dziennik audytu';

$GLOBALS["lang"]['Audit My PC'] = 'Audyt mojego komputera';

$GLOBALS["lang"]['Audit OSX'] = 'Audyt OSX';

$GLOBALS["lang"]['Audit Result Input'] = 'Wynik audytu';

$GLOBALS["lang"]['Audit Status'] = 'Status audytu';

$GLOBALS["lang"]['Audit Windows'] = 'Audyt Windows';

$GLOBALS["lang"]['Audit the Device'] = 'Audyt urządzenia';

$GLOBALS["lang"]['Audits'] = 'Audyty';

$GLOBALS["lang"]['August'] = 'Sierpień';

$GLOBALS["lang"]['Australia'] = 'Australia';

$GLOBALS["lang"]['Austria'] = 'Austria';

$GLOBALS["lang"]['Auth'] = 'Auth';

$GLOBALS["lang"]['auth'] = 'Auth';

$GLOBALS["lang"]['Authentication Passphrase'] = 'Authentication Passphrase';

$GLOBALS["lang"]['authority_key_ident'] = 'Kluczowy identyfikator organu';

$GLOBALS["lang"]['Authority Key Ident'] = 'Kluczowy identyfikator organu';

$GLOBALS["lang"]['Auto'] = 'Auto';

$GLOBALS["lang"]['auto_renew'] = 'Auto Renew';

$GLOBALS["lang"]['Auto Renew'] = 'Auto Renew';

$GLOBALS["lang"]['Auto populated by the Open-AudIT Server.'] = 'Auto zaludnione przez Open- Audit Server.';

$GLOBALS["lang"]['AutoRenew'] = 'AutoRenew';

$GLOBALS["lang"]['automatable'] = 'Automatyczne';

$GLOBALS["lang"]['Automatable'] = 'Automatyczne';

$GLOBALS["lang"]['Automatically populated based on the Collectors OS.'] = 'Automatycznie zaludnione w oparciu o system operacyjny Collectors.';

$GLOBALS["lang"]['availability'] = 'Dostępność';

$GLOBALS["lang"]['Availability'] = 'Dostępność';

$GLOBALS["lang"]['Azerbaijan'] = 'Azerbejdżan';

$GLOBALS["lang"]['BTU Max'] = 'BTU Max';

$GLOBALS["lang"]['BTU Total'] = 'BTU ogółem';

$GLOBALS["lang"]['Backup'] = 'Kopia zapasowa';

$GLOBALS["lang"]['Bahamas the'] = 'Bahamy';

$GLOBALS["lang"]['Bahrain'] = 'Bahrajn';

$GLOBALS["lang"]['Bangladesh'] = 'Bangladesz';

$GLOBALS["lang"]['bank'] = 'Bank';

$GLOBALS["lang"]['Bank'] = 'Bank';

$GLOBALS["lang"]['Banned'] = 'Zakazane';

$GLOBALS["lang"]['bar_code'] = 'Kod kreskowy';

$GLOBALS["lang"]['Bar Code'] = 'Kod kreskowy';

$GLOBALS["lang"]['Barbados'] = 'Barbados';

$GLOBALS["lang"]['Base DN'] = 'Base DN';

$GLOBALS["lang"]['base_score'] = 'Punkt bazowy';

$GLOBALS["lang"]['Base Score'] = 'Punkt bazowy';

$GLOBALS["lang"]['base_severity'] = 'Stopień ciężkości podstawy';

$GLOBALS["lang"]['Base Severity'] = 'Stopień ciężkości podstawy';

$GLOBALS["lang"]['based_on'] = 'Na podstawie';

$GLOBALS["lang"]['Based On'] = 'Na podstawie';

$GLOBALS["lang"]['baseline'] = 'Początkowa';

$GLOBALS["lang"]['Baseline'] = 'Początkowa';

$GLOBALS["lang"]['baseline_id'] = 'Identyfikator początkowy';

$GLOBALS["lang"]['Baseline ID'] = 'Identyfikator początkowy';

$GLOBALS["lang"]['baselines'] = 'Podstawowe';

$GLOBALS["lang"]['Baselines'] = 'Podstawowe';

$GLOBALS["lang"]['baselines_policies'] = 'Polityka bazowa';

$GLOBALS["lang"]['Baselines Policies'] = 'Polityka bazowa';

$GLOBALS["lang"]['Baselines Policy'] = 'Polityka bazowa';

$GLOBALS["lang"]['Baselines Policy Details'] = 'Szczegóły dotyczące polityki bazowej';

$GLOBALS["lang"]['baselines_results'] = 'Wyniki podstawowe';

$GLOBALS["lang"]['Baselines Results'] = 'Wyniki podstawowe';

$GLOBALS["lang"]['Basic'] = 'Podstawowe';

$GLOBALS["lang"]['Belarus'] = 'Białoruś';

$GLOBALS["lang"]['Belgium'] = 'Belgia';

$GLOBALS["lang"]['Belize'] = 'Belize';

$GLOBALS["lang"]['Benchmark'] = 'Punkt odniesienia';

$GLOBALS["lang"]['benchmark_id'] = 'Identyfikator punktu odniesienia';

$GLOBALS["lang"]['Benchmark ID'] = 'Identyfikator punktu odniesienia';

$GLOBALS["lang"]['benchmarks'] = 'Wartości odniesienia';

$GLOBALS["lang"]['Benchmarks'] = 'Wartości odniesienia';

$GLOBALS["lang"]['benchmarks_exceptions'] = 'Wyjątki';

$GLOBALS["lang"]['Benchmarks Exceptions'] = 'Wyjątki';

$GLOBALS["lang"]['benchmarks_log'] = 'Dziennik wskaźników';

$GLOBALS["lang"]['Benchmarks Log'] = 'Dziennik wskaźników';

$GLOBALS["lang"]['benchmarks_policies'] = 'Polityka odniesienia';

$GLOBALS["lang"]['Benchmarks Policies'] = 'Polityka odniesienia';

$GLOBALS["lang"]['benchmarks_result'] = 'Wynik';

$GLOBALS["lang"]['Benchmarks Result'] = 'Wynik';

$GLOBALS["lang"]['Benin'] = 'Benin';

$GLOBALS["lang"]['Bermuda'] = 'Bermudy';

$GLOBALS["lang"]['best_practises'] = 'Najlepsze praktyki';

$GLOBALS["lang"]['Best Practises'] = 'Najlepsze praktyki';

$GLOBALS["lang"]['Bhutan'] = 'Bhutan';

$GLOBALS["lang"]['bios'] = 'Bio';

$GLOBALS["lang"]['Bios'] = 'Bio';

$GLOBALS["lang"]['body'] = 'Ciało';

$GLOBALS["lang"]['Body'] = 'Ciało';

$GLOBALS["lang"]['Bolivia'] = 'Boliwia';

$GLOBALS["lang"]['Boolean'] = 'Boolean';

$GLOBALS["lang"]['Boolean 1/0'] = 'Boolean 1 / 0';

$GLOBALS["lang"]['Boolean y/n'] = 'Boolean y / n';

$GLOBALS["lang"]['boot_device'] = 'Urządzenie do kopyt';

$GLOBALS["lang"]['Boot Device'] = 'Urządzenie do kopyt';

$GLOBALS["lang"]['bootable'] = 'Bootable';

$GLOBALS["lang"]['Bootable'] = 'Bootable';

$GLOBALS["lang"]['Bosnia and Herzegovina'] = 'Bośnia i Hercegowina';

$GLOBALS["lang"]['Botswana'] = 'Botswana';

$GLOBALS["lang"]['Bouvet Island (Bouvetoya)'] = 'Bouvet Island (Bouvetoya)';

$GLOBALS["lang"]['Brazil'] = 'Brazylia';

$GLOBALS["lang"]['Brazilian Portuguese'] = 'Portugalski brazylijski';

$GLOBALS["lang"]['British Indian Ocean Territory (Chagos Archipelago)'] = 'Brytyjskie Terytorium Oceanu Indyjskiego (archipelag Chagos)';

$GLOBALS["lang"]['British Virgin Islands'] = 'Brytyjskie Wyspy Dziewicze';

$GLOBALS["lang"]['Brunei Darussalam'] = 'Brunei Darussalam';

$GLOBALS["lang"]['btu_max'] = 'Btu Max';

$GLOBALS["lang"]['Btu Max'] = 'Btu Max';

$GLOBALS["lang"]['btu_total'] = 'Btu razem';

$GLOBALS["lang"]['Btu Total'] = 'Btu razem';

$GLOBALS["lang"]['build_number'] = 'Numer budowy';

$GLOBALS["lang"]['Build Number'] = 'Numer budowy';

$GLOBALS["lang"]['build_number_full'] = 'Zbuduj liczbę pełną';

$GLOBALS["lang"]['Build Number Full'] = 'Zbuduj liczbę pełną';

$GLOBALS["lang"]['Building'] = 'Budynek';

$GLOBALS["lang"]['Bulgaria'] = 'Bułgaria';

$GLOBALS["lang"]['Bulk Edit'] = 'Edycja luzem';

$GLOBALS["lang"]['Bulk Editing Device Attributes'] = 'Atrybuty urządzenia do edycji luzem';

$GLOBALS["lang"]['Burkina Faso'] = 'Burkina Faso';

$GLOBALS["lang"]['Burundi'] = 'Burundi Przewodniczący';

$GLOBALS["lang"]['business_requirements'] = 'Wymogi biznesowe';

$GLOBALS["lang"]['Business Requirements'] = 'Wymogi biznesowe';

$GLOBALS["lang"]['Buy'] = 'Kup';

$GLOBALS["lang"]['Buy More'] = 'Kup więcej';

$GLOBALS["lang"]['Buy More Licenses'] = 'Kup więcej licencji';

$GLOBALS["lang"]['By'] = 'Przez';

$GLOBALS["lang"]['CIDR'] = 'CIDR';

$GLOBALS["lang"]['CIDR Mask'] = 'CIDR Maska';

$GLOBALS["lang"]['cli_config'] = 'CLI Konfiguracja';

$GLOBALS["lang"]['CLI Config'] = 'CLI Konfiguracja';

$GLOBALS["lang"]['CPU'] = 'CPU';

$GLOBALS["lang"]['CPUs'] = 'CPU';

$GLOBALS["lang"]['CSV'] = 'CSV';

$GLOBALS["lang"]['CVE'] = 'CVE';

$GLOBALS["lang"]['Calculated from discovery.'] = 'Obliczone z odkrycia.';

$GLOBALS["lang"]['Calculated total number of valid IP addresses for this network.'] = 'Obliczona całkowita liczba ważnych adresów IP dla tej sieci.';

$GLOBALS["lang"]['Calculated upon completion, the time taken to execute this item.'] = 'Obliczona po zakończeniu, czas potrzebny na wykonanie tej pozycji.';

$GLOBALS["lang"]['Calculated when integration is run and contains a JSON representation of the devices in this integration. Each links to <code>devices.id</code>.'] = 'Obliczone przy integracji jest uruchomiony i zawiera JSON reprezentacji urządzeń w tej integracji. Każdy link do <code>devices.id</code>.';

$GLOBALS["lang"]['Calculated when integration is run and contains a JSON representation of the locations in this integration. Each links to <code>locations.id</code>.'] = 'Obliczone przy integracji jest uruchomiony i zawiera JSON reprezentacji lokalizacji w tej integracji. Każdy link do <code>locations.id</code>.';

$GLOBALS["lang"]['Calculated when integration is run and contains the number of devices selected from Open-AudIT.'] = 'Obliczone przy integracji jest uruchomiony i zawiera liczbę urządzeń wybranych z Open- Audit.';

$GLOBALS["lang"]['Calculated when integration is run and contains the number of devices selected the external system.'] = 'Obliczony przy integracji jest uruchomiony i zawiera liczbę urządzeń wybranych systemu zewnętrznego.';

$GLOBALS["lang"]['Calculated when integration is run and contains the number of devices to be updated in the external system.'] = 'Obliczone przy integracji jest uruchomiony i zawiera liczbę urządzeń do aktualizacji w systemie zewnętrznym.';

$GLOBALS["lang"]['Calculated when integration is run and contains the number of devices updated in Open-AudIT.'] = 'Obliczony przy integracji jest uruchomiony i zawiera liczbę urządzeń zaktualizowanych w Open-Audit.';

$GLOBALS["lang"]['Cambodia'] = 'Kambodża';

$GLOBALS["lang"]['Cameroon'] = 'Kamerun';

$GLOBALS["lang"]['Campus Area Network'] = 'Sieć obszaru kampusu';

$GLOBALS["lang"]['Can be  <code>active</code>, <code>passive</code> or blank.'] = 'Może być <code>active</code>, <code>passive</code> lub puste.';

$GLOBALS["lang"]['Can be <code>application</code>, <code>compute</code>, <code>database</code>, <code>storage</code>, <code>virtualisation</code>, <code>web</code>, <code>other</code> or blank.'] = 'Może być <code>application</code>, <code>compute</code>, <code>database</code>, <code>storage</code>, <code>virtualisation</code>, <code>web</code>, <code>other</code> lub puste.';

$GLOBALS["lang"]['Can be <code>auto</code>, <code>fixed</code>, <code>other</code> or blank.'] = 'Może być <code>auto</code>, <code>fixed</code>, <code>other</code> lub puste.';

$GLOBALS["lang"]['Can be <code>high availability</code>, <code>load balancing</code>, <code>performance</code>, <code>storage</code>, <code>other</code> or blank.'] = 'Może być <code>high availability</code>, <code>load balancing</code>, <code>performance</code>, <code>storage</code>, <code>other</code> lub puste.';

$GLOBALS["lang"]['Can be <code>line</code>, <code>pie</code> or <code>traffic</code>.'] = 'Może być <code>line</code>, <code>pie</code> lub <code>traffic</code>.';

$GLOBALS["lang"]['Can be <code>user</code> or <code>collector</code>.'] = 'Może być <code>user</code> lub <code>collector</code>.';

$GLOBALS["lang"]['Can be set by discovery or user.'] = 'Można ustawić przez odkrycie lub użytkownika.';

$GLOBALS["lang"]['Can be set by discovery or user. Uses the ID from the locations table.'] = 'Można ustawić przez odkrycie lub użytkownika. Używa identyfikatora z tabeli lokalizacji.';

$GLOBALS["lang"]['Can the user edit this item.'] = 'Czy użytkownik może edytować ten element.';

$GLOBALS["lang"]['Canada'] = 'Kanada';

$GLOBALS["lang"]['Cancel'] = 'Anuluj';

$GLOBALS["lang"]['capabilities'] = 'Możliwości';

$GLOBALS["lang"]['Capabilities'] = 'Możliwości';

$GLOBALS["lang"]['Capacity'] = 'Zdolność';

$GLOBALS["lang"]['Cape Verde'] = 'Republika Zielonego Przylądka';

$GLOBALS["lang"]['Capitalise'] = 'Kapitalizacja';

$GLOBALS["lang"]['caption'] = 'Podpis';

$GLOBALS["lang"]['Caption'] = 'Podpis';

$GLOBALS["lang"]['Cayman Islands'] = 'Kajmany';

$GLOBALS["lang"]['Cellular Details'] = 'Szczegóły dotyczące komórek';

$GLOBALS["lang"]['Central African Republic'] = 'Republika Środkowoafrykańska';

$GLOBALS["lang"]['certificate'] = 'Certyfikat';

$GLOBALS["lang"]['Certificate'] = 'Certyfikat';

$GLOBALS["lang"]['certificate_file'] = 'Plik certyfikatu';

$GLOBALS["lang"]['Certificate File'] = 'Plik certyfikatu';

$GLOBALS["lang"]['certificate_name'] = 'Nazwa certyfikatu';

$GLOBALS["lang"]['Certificate Name'] = 'Nazwa certyfikatu';

$GLOBALS["lang"]['certificates'] = 'Świadectwa';

$GLOBALS["lang"]['Certificates'] = 'Świadectwa';

$GLOBALS["lang"]['Chad'] = 'Czad';

$GLOBALS["lang"]['change_id'] = 'Zmień identyfikator';

$GLOBALS["lang"]['Change ID'] = 'Zmień identyfikator';

$GLOBALS["lang"]['change_log'] = 'Zmień dziennik';

$GLOBALS["lang"]['Change Log'] = 'Zmień dziennik';

$GLOBALS["lang"]['change_type'] = 'Typ zmiany';

$GLOBALS["lang"]['Change Type'] = 'Typ zmiany';

$GLOBALS["lang"]['check_minutes'] = 'Sprawdź protokół';

$GLOBALS["lang"]['Check Minutes'] = 'Sprawdź protokół';

$GLOBALS["lang"]['Check for SSH on these ports'] = 'Sprawdź SSH w tych portach';

$GLOBALS["lang"]['Check this port for any SSH service.'] = 'Sprawdź ten port dla każdej usługi SSH.';

$GLOBALS["lang"]['Chile'] = 'Chile';

$GLOBALS["lang"]['China'] = 'Chiny';

$GLOBALS["lang"]['Choose'] = 'Wybierz';

$GLOBALS["lang"]['Choose (select OS first)'] = 'Wybierz (wybierz najpierw OS)';

$GLOBALS["lang"]['Choose a Device'] = 'Wybierz urządzenie';

$GLOBALS["lang"]['Choose a Table'] = 'Wybierz tabelę';

$GLOBALS["lang"]['Christmas Island'] = 'Wyspa Bożego Narodzenia';

$GLOBALS["lang"]['cidr'] = 'Cidr Przewodniczący';

$GLOBALS["lang"]['Cidr'] = 'Cidr Przewodniczący';

$GLOBALS["lang"]['circuit_count'] = 'Liczba obwodów';

$GLOBALS["lang"]['Circuit Count'] = 'Liczba obwodów';

$GLOBALS["lang"]['circuit_status'] = 'Status obwodu';

$GLOBALS["lang"]['Circuit Status'] = 'Status obwodu';

$GLOBALS["lang"]['city'] = 'Miasto';

$GLOBALS["lang"]['City'] = 'Miasto';

$GLOBALS["lang"]['class'] = 'Klasa';

$GLOBALS["lang"]['Class'] = 'Klasa';

$GLOBALS["lang"]['class_text'] = 'Tekst klasy';

$GLOBALS["lang"]['Class Text'] = 'Tekst klasy';

$GLOBALS["lang"]['Click the Delete button to remove the example devices from Open-AudIT.<br>This will remove the below devices from the database. '] = 'Kliknij przycisk Usuń, aby usunąć przykładowe urządzenia z Open- Audit.<br/>Usunie to poniższe urządzenia z bazy danych. ';

$GLOBALS["lang"]['Click the Import button below to populate Open-AudIT with example device data.'] = 'Kliknij przycisk Importuj poniżej, aby spopularyzować Open- Audit przykładowymi danymi urządzenia.';

$GLOBALS["lang"]['Client ID'] = 'Identyfikator klienta';

$GLOBALS["lang"]['client_ident'] = 'Klient Ident';

$GLOBALS["lang"]['Client Ident'] = 'Klient Ident';

$GLOBALS["lang"]['client_secret'] = 'Tajemnica klienta';

$GLOBALS["lang"]['Client Secret'] = 'Tajemnica klienta';

$GLOBALS["lang"]['client_site_name'] = 'Nazwa strony klienta';

$GLOBALS["lang"]['Client Site Name'] = 'Nazwa strony klienta';

$GLOBALS["lang"]['Close'] = 'Zamknij';

$GLOBALS["lang"]['Cloud'] = 'Chmura';

$GLOBALS["lang"]['Cloud Details'] = 'Szczegóły dotyczące chmury';

$GLOBALS["lang"]['Cloud Discovery'] = 'Odkrywanie chmur';

$GLOBALS["lang"]['cloud_id'] = 'Identyfikator chmury';

$GLOBALS["lang"]['Cloud ID'] = 'Identyfikator chmury';

$GLOBALS["lang"]['cloud_log'] = 'Dziennik chmur';

$GLOBALS["lang"]['Cloud Log'] = 'Dziennik chmur';

$GLOBALS["lang"]['cloud_name'] = 'Nazwa chmury';

$GLOBALS["lang"]['Cloud Name'] = 'Nazwa chmury';

$GLOBALS["lang"]['Cloud Network'] = 'Sieć chmur';

$GLOBALS["lang"]['clouds'] = 'Chmury';

$GLOBALS["lang"]['Clouds'] = 'Chmury';

$GLOBALS["lang"]['cluster'] = 'Klaster';

$GLOBALS["lang"]['Cluster'] = 'Klaster';

$GLOBALS["lang"]['cluster_id'] = 'Identyfikator klastra';

$GLOBALS["lang"]['Cluster ID'] = 'Identyfikator klastra';

$GLOBALS["lang"]['cluster_name'] = 'Nazwa klastra';

$GLOBALS["lang"]['Cluster Name'] = 'Nazwa klastra';

$GLOBALS["lang"]['cluster_type'] = 'Typ klastra';

$GLOBALS["lang"]['Cluster Type'] = 'Typ klastra';

$GLOBALS["lang"]['clusters'] = 'Klastry';

$GLOBALS["lang"]['Clusters'] = 'Klastry';

$GLOBALS["lang"]['Cocos (Keeling) Islands'] = 'Wyspy Kokosowe (Keeling)';

$GLOBALS["lang"]['Collector'] = 'Kolekcjoner';

$GLOBALS["lang"]['Collector (UUID)'] = 'Kolekcjoner (UUID)';

$GLOBALS["lang"]['Collector Name'] = 'Nazwa kolektora';

$GLOBALS["lang"]['collector_uuid'] = 'Kolekcjoner Uuid';

$GLOBALS["lang"]['Collector Uuid'] = 'Kolekcjoner Uuid';

$GLOBALS["lang"]['collectors'] = 'Zbiorniki';

$GLOBALS["lang"]['Collectors'] = 'Zbiorniki';

$GLOBALS["lang"]['Colombia'] = 'Kolumbia';

$GLOBALS["lang"]['color'] = 'Kolor';

$GLOBALS["lang"]['Color'] = 'Kolor';

$GLOBALS["lang"]['column'] = 'Kolumna';

$GLOBALS["lang"]['Column'] = 'Kolumna';

$GLOBALS["lang"]['Columns'] = 'Kolumny';

$GLOBALS["lang"]['command'] = 'Polecenie';

$GLOBALS["lang"]['Command'] = 'Polecenie';

$GLOBALS["lang"]['command_options'] = 'Opcje poleceń';

$GLOBALS["lang"]['Command Options'] = 'Opcje poleceń';

$GLOBALS["lang"]['command_output'] = 'Wyjście poleceń';

$GLOBALS["lang"]['Command Output'] = 'Wyjście poleceń';

$GLOBALS["lang"]['command_status'] = 'Status polecenia';

$GLOBALS["lang"]['Command Status'] = 'Status polecenia';

$GLOBALS["lang"]['command_time_to_execute'] = 'Czas wykonywania poleceń';

$GLOBALS["lang"]['Command Time To Execute'] = 'Czas wykonywania poleceń';

$GLOBALS["lang"]['comment'] = 'Komentarz';

$GLOBALS["lang"]['Comment'] = 'Komentarz';

$GLOBALS["lang"]['comments'] = 'Uwagi';

$GLOBALS["lang"]['Comments'] = 'Uwagi';

$GLOBALS["lang"]['commercial'] = 'Handel';

$GLOBALS["lang"]['Commercial'] = 'Handel';

$GLOBALS["lang"]['common_name'] = 'ZAŁĄCZNIK';

$GLOBALS["lang"]['Common Name'] = 'ZAŁĄCZNIK';

$GLOBALS["lang"]['Commonly referred to as the clientId.'] = 'Powszechnie określane jako klient Id.';

$GLOBALS["lang"]['Commonly referred to as the clientSecret.'] = 'Powszechnie określany jako klient Secret.';

$GLOBALS["lang"]['Community'] = 'Wspólnota';

$GLOBALS["lang"]['Community Questions'] = 'Pytania wspólnotowe';

$GLOBALS["lang"]['Community String'] = 'String wspólnotowy';

$GLOBALS["lang"]['Comoros the'] = 'Komory';

$GLOBALS["lang"]['Compact'] = 'Kompakt';

$GLOBALS["lang"]['Company'] = 'Przedsiębiorstwo';

$GLOBALS["lang"]['Complexity of the attack (Low or High).'] = 'Kompleksowość ataku (niski lub wysoki).';

$GLOBALS["lang"]['Component Table'] = 'Tabela składników';

$GLOBALS["lang"]['Components (All Devices)'] = 'Składniki (wszystkie urządzenia)';

$GLOBALS["lang"]['Compute'] = 'Oblicz';

$GLOBALS["lang"]['Condition'] = 'Stan';

$GLOBALS["lang"]['Config'] = 'Konfiguracja';

$GLOBALS["lang"]['Config Default, currently '] = 'Konfiguracja Domyślna, aktualnie ';

$GLOBALS["lang"]['config_file'] = 'Plik konfiguracyjny';

$GLOBALS["lang"]['Config File'] = 'Plik konfiguracyjny';

$GLOBALS["lang"]['config_manager_error_code'] = 'Kod błędu menedżera konfiguracji';

$GLOBALS["lang"]['Config Manager Error Code'] = 'Kod błędu menedżera konfiguracji';

$GLOBALS["lang"]['configuration'] = 'Konfiguracja';

$GLOBALS["lang"]['Configuration'] = 'Konfiguracja';

$GLOBALS["lang"]['Configure'] = 'Konfiguracja';

$GLOBALS["lang"]['Congo'] = 'Kongo';

$GLOBALS["lang"]['Congo the'] = 'Kongo';

$GLOBALS["lang"]['Connected To'] = 'Połączone z';

$GLOBALS["lang"]['connection'] = 'Połączenie';

$GLOBALS["lang"]['Connection'] = 'Połączenie';

$GLOBALS["lang"]['Connection Options'] = 'Opcje połączeń';

$GLOBALS["lang"]['connection_status'] = 'Stan połączenia';

$GLOBALS["lang"]['Connection Status'] = 'Stan połączenia';

$GLOBALS["lang"]['connections'] = 'Połączenia';

$GLOBALS["lang"]['Connections'] = 'Połączenia';

$GLOBALS["lang"]['Consider filtered Ports Open'] = 'Rozważ filtrowane Otwarte porty';

$GLOBALS["lang"]['Consider open|filtered Ports Open'] = 'Rozważ otwarte 124; filtrowane Otwarte porty';

$GLOBALS["lang"]['contact'] = 'Kontakt';

$GLOBALS["lang"]['Contact'] = 'Kontakt';

$GLOBALS["lang"]['contact_name'] = 'Nazwa kontaktu';

$GLOBALS["lang"]['Contact Name'] = 'Nazwa kontaktu';

$GLOBALS["lang"]['contained_in'] = 'Zawiera';

$GLOBALS["lang"]['Contained In'] = 'Zawiera';

$GLOBALS["lang"]['Contains a JSON object details the associated widgets and their positions.'] = 'Zawiera obiekt JSON szczegóły związane widżety i ich pozycji.';

$GLOBALS["lang"]['Contains the fields that determine if we should use ssh, snmp and wmi discovery options. A JSON object.'] = 'Zawiera pola, które decydują, czy powinniśmy używać opcji ssh, snmp i wmi. Obiekt JSON.';

$GLOBALS["lang"]['Context Engine ID'] = 'Identyfikator silnika kontekstowego';

$GLOBALS["lang"]['Context Name'] = 'Nazwa kontekstu';

$GLOBALS["lang"]['contractual_obligations'] = 'Zobowiązania umowne';

$GLOBALS["lang"]['Contractual Obligations'] = 'Zobowiązania umowne';

$GLOBALS["lang"]['Cook Islands'] = 'Wyspy Cooka';

$GLOBALS["lang"]['Copy and paste an audit result'] = 'Kopiuj i wklej wynik audytu';

$GLOBALS["lang"]['Copy and paste the below to the forums, another instance of Open-AudIT or anywhere else you need to provide this item.'] = 'Kopiuj i wklej poniższy tekst na forum, w innym przypadku Open- Audit lub gdziekolwiek indziej musisz dostarczyć ten element.';

$GLOBALS["lang"]['core_count'] = 'Liczba zasadnicza';

$GLOBALS["lang"]['Core Count'] = 'Liczba zasadnicza';

$GLOBALS["lang"]['Cores'] = 'Rdzenie';

$GLOBALS["lang"]['cost_center'] = 'Centrum kosztów';

$GLOBALS["lang"]['Cost Center'] = 'Centrum kosztów';

$GLOBALS["lang"]['cost_code'] = 'Kod kosztów';

$GLOBALS["lang"]['Cost Code'] = 'Kod kosztów';

$GLOBALS["lang"]['Costa Rica'] = 'Kostaryka';

$GLOBALS["lang"]['Cote d Ivoire'] = 'Kot';

$GLOBALS["lang"]['count'] = 'Licz';

$GLOBALS["lang"]['Count'] = 'Licz';

$GLOBALS["lang"]['country'] = 'Kraj';

$GLOBALS["lang"]['Country'] = 'Kraj';

$GLOBALS["lang"]['country_code'] = 'Kod kraju';

$GLOBALS["lang"]['Country Code'] = 'Kod kraju';

$GLOBALS["lang"]['cpu_count'] = 'Liczba Cpu';

$GLOBALS["lang"]['Cpu Count'] = 'Liczba Cpu';

$GLOBALS["lang"]['Create'] = 'Utwórz';

$GLOBALS["lang"]['Create Example Devices'] = 'Utwórz przykładowe urządzenia';

$GLOBALS["lang"]['create_external_count'] = 'Utwórz liczbę zewnętrzną';

$GLOBALS["lang"]['Create External Count'] = 'Utwórz liczbę zewnętrzną';

$GLOBALS["lang"]['create_external_from_internal'] = 'Utwórz zewnętrzne od wewnątrz';

$GLOBALS["lang"]['Create External From Internal'] = 'Utwórz zewnętrzne od wewnątrz';

$GLOBALS["lang"]['Create Geocode'] = 'Utwórz Geokod';

$GLOBALS["lang"]['create_internal_count'] = 'Utwórz wewnętrzny licznik';

$GLOBALS["lang"]['Create Internal Count'] = 'Utwórz wewnętrzny licznik';

$GLOBALS["lang"]['create_internal_from_external'] = 'Utwórz wewnętrzną z zewnątrz';

$GLOBALS["lang"]['Create Internal From External'] = 'Utwórz wewnętrzną z zewnątrz';

$GLOBALS["lang"]['Create NMIS Devices from Open-AudIT'] = 'Utwórz urządzenia NMIS z Open- Audit';

$GLOBALS["lang"]['Create Open-AudIT Devices from '] = 'Utwórz Open- Audit Urządzenia z ';

$GLOBALS["lang"]['Create Open-AudIT Devices from NMIS'] = 'Utwórz Open- Audit Urządzenia z NMIS';

$GLOBALS["lang"]['created_by'] = 'Stworzony przez';

$GLOBALS["lang"]['Created By'] = 'Stworzony przez';

$GLOBALS["lang"]['created_date'] = 'Data utworzenia';

$GLOBALS["lang"]['Created Date'] = 'Data utworzenia';

$GLOBALS["lang"]['Creating'] = 'Tworzenie';

$GLOBALS["lang"]['Creating Device'] = 'Tworzenie urządzenia';

$GLOBALS["lang"]['Creating a Query'] = 'Tworzenie zapytań';

$GLOBALS["lang"]['creator'] = 'Twórca';

$GLOBALS["lang"]['Creator'] = 'Twórca';

$GLOBALS["lang"]['credential'] = 'Kredytowy';

$GLOBALS["lang"]['Credential'] = 'Kredytowy';

$GLOBALS["lang"]['credentials'] = 'Należności';

$GLOBALS["lang"]['Credentials'] = 'Należności';

$GLOBALS["lang"]['Credentials Client ID'] = 'Identyfikator klienta';

$GLOBALS["lang"]['Credentials Subscription ID'] = 'Należności Subskrypcja ID';

$GLOBALS["lang"]['Credentials Tenant ID'] = 'Identyfikator nabywcy';

$GLOBALS["lang"]['Credentials for Amazon AWS used in Cloud Discovery'] = 'Kredyty dla Amazon AWS stosowane w Cloud Discovery';

$GLOBALS["lang"]['Credentials for Microsoft Azure used in Cloud Discovery'] = 'Fundamenty dla Microsoft Azure stosowane w Cloud Discovery';

$GLOBALS["lang"]['Critical'] = 'Krytyczne';

$GLOBALS["lang"]['criticality'] = 'Krytyczność';

$GLOBALS["lang"]['Criticality'] = 'Krytyczność';

$GLOBALS["lang"]['Croatia'] = 'Chorwacja';

$GLOBALS["lang"]['Cuba'] = 'Kuba';

$GLOBALS["lang"]['current'] = 'Bieżący';

$GLOBALS["lang"]['Current'] = 'Bieżący';

$GLOBALS["lang"]['Current Discovery Processes'] = 'Bieżące procesy wyszukiwania';

$GLOBALS["lang"]['Current date & time is '] = 'Bieżąca data i czas to ';

$GLOBALS["lang"]['Currently Installed'] = 'Aktualnie zainstalowany';

$GLOBALS["lang"]['Currently supported types are <code>snmp</code>, <code>snmp_v3</code>, <code>ssh</code>, <code>ssh_key</code> or <code>windows</code>.'] = 'Obecnie obsługiwane typy są <code>snmp</code>, <code>snmp_v3</code>, <code>ssh</code>, <code>ssh_key</code> lub <code>windows</code>.';

$GLOBALS["lang"]['Custom TCP Ports'] = 'Własne porty TCP';

$GLOBALS["lang"]['Custom UDP Ports'] = 'Własny UDP Porty';

$GLOBALS["lang"]['Cve'] = 'Cve';

$GLOBALS["lang"]['Cyprus'] = 'Cypr';

$GLOBALS["lang"]['Czech'] = 'Czeski';

$GLOBALS["lang"]['Czech Republic'] = 'Republika Czeska';

$GLOBALS["lang"]['DHCP'] = 'DHCP';

$GLOBALS["lang"]['DN Account (optional)'] = 'Konto DN (nieobowiązkowe)';

$GLOBALS["lang"]['DN Password (optional)'] = 'DN Hasło (opcjonalne)';

$GLOBALS["lang"]['DNS FQDN'] = 'DNS FQDN';

$GLOBALS["lang"]['DNS Hostname'] = 'Nazwa komputera DNS';

$GLOBALS["lang"]['dashboard_id'] = 'Identyfikator tablicy rozdzielczej';

$GLOBALS["lang"]['Dashboard ID'] = 'Identyfikator tablicy rozdzielczej';

$GLOBALS["lang"]['dashboards'] = 'Deski rozdzielcze';

$GLOBALS["lang"]['Dashboards'] = 'Deski rozdzielcze';

$GLOBALS["lang"]['Database'] = 'Baza danych';

$GLOBALS["lang"]['db_action'] = 'Akcja bazy danych';

$GLOBALS["lang"]['Database Action'] = 'Akcja bazy danych';

$GLOBALS["lang"]['db_column'] = 'Kolumna bazy danych';

$GLOBALS["lang"]['Database Column'] = 'Kolumna bazy danych';

$GLOBALS["lang"]['Database Definition'] = 'Definicja bazy danych';

$GLOBALS["lang"]['db_row'] = 'Wiersz bazy danych';

$GLOBALS["lang"]['Database Row'] = 'Wiersz bazy danych';

$GLOBALS["lang"]['Database Schema'] = 'Schemat bazy danych';

$GLOBALS["lang"]['db_table'] = 'Tabela bazy danych';

$GLOBALS["lang"]['Database Table'] = 'Tabela bazy danych';

$GLOBALS["lang"]['dataset_title'] = 'Tytuł zbioru danych';

$GLOBALS["lang"]['Dataset Title'] = 'Tytuł zbioru danych';

$GLOBALS["lang"]['date'] = 'Data';

$GLOBALS["lang"]['Date'] = 'Data';

$GLOBALS["lang"]['Date D-M-Y'] = 'Data D- M- Y';

$GLOBALS["lang"]['Date M-D-Y'] = 'Data M- D- Y';

$GLOBALS["lang"]['Date Now'] = 'Data';

$GLOBALS["lang"]['date_of_manufacture'] = 'Data produkcji';

$GLOBALS["lang"]['Date Of Manufacture'] = 'Data produkcji';

$GLOBALS["lang"]['date_paid'] = 'Data płatności';

$GLOBALS["lang"]['Date Paid'] = 'Data płatności';

$GLOBALS["lang"]['date_received'] = 'Data odebrana';

$GLOBALS["lang"]['Date Received'] = 'Data odebrana';

$GLOBALS["lang"]['Date Y-M-D'] = 'Data Y- M- D';

$GLOBALS["lang"]['Date and time when the CVE was last updated.'] = 'Data i godzina ostatniej aktualizacji CV.';

$GLOBALS["lang"]['Date and time when the CVE was published.'] = 'Data i godzina publikacji CV.';

$GLOBALS["lang"]['Date when the CVE was published.'] = 'Data publikacji CVE.';

$GLOBALS["lang"]['DateTime Now'] = 'DateTime Now';

$GLOBALS["lang"]['DateTime Y-M-D H:M:S'] = 'DateTime Y- M- D H: M: S';

$GLOBALS["lang"]['day_of_month'] = 'Dzień miesiąca';

$GLOBALS["lang"]['Day Of Month'] = 'Dzień miesiąca';

$GLOBALS["lang"]['day_of_week'] = 'Dzień tygodnia';

$GLOBALS["lang"]['Day Of Week'] = 'Dzień tygodnia';

$GLOBALS["lang"]['Day of Month'] = 'Dzień miesiąca';

$GLOBALS["lang"]['dbus_identifier'] = 'Identyfikator Dbusa';

$GLOBALS["lang"]['Dbus Identifier'] = 'Identyfikator Dbusa';

$GLOBALS["lang"]['Debug'] = 'Debugowanie';

$GLOBALS["lang"]['December'] = 'Grudzień';

$GLOBALS["lang"]['Default'] = 'Domyślne';

$GLOBALS["lang"]['Default Items'] = 'Domyślne pozycje';

$GLOBALS["lang"]['Default Value'] = 'Wartość domyślna';

$GLOBALS["lang"]['Default of 389. Normally 636 used for Active Directory LDAPS.'] = 'Domyślnie 389. Normalnie 636 używane dla Active Directory LDAPS.';

$GLOBALS["lang"]['Default of <code>3</code> for LDAP and Active Directory.'] = 'Domyślnie <code>3</code> dla LDAP i Active Directory.';

$GLOBALS["lang"]['Defaults'] = 'Domyślne';

$GLOBALS["lang"]['delay_minutes'] = 'Opóźnienie w protokole';

$GLOBALS["lang"]['Delay Minutes'] = 'Opóźnienie w protokole';

$GLOBALS["lang"]['Delete'] = 'Usuń';

$GLOBALS["lang"]['Delete Example Devices'] = 'Usuń przykładowe urządzenia';

$GLOBALS["lang"]['delete_external_from_internal'] = 'Usuń zewnętrzne z wewnętrznych';

$GLOBALS["lang"]['Delete External From Internal'] = 'Usuń zewnętrzne z wewnętrznych';

$GLOBALS["lang"]['Delete NMIS Devices if not in Open-AudIT'] = 'Usuń NMIS Urządzenia, jeśli nie w Open- Audit';

$GLOBALS["lang"]['Delete from Application'] = 'Usuń z aplikacji';

$GLOBALS["lang"]['Delete from Cluster'] = 'Usuń z klastra';

$GLOBALS["lang"]['Denmark'] = 'Dania';

$GLOBALS["lang"]['Derived by audit or manually set by user.'] = 'Polecane przez audyt lub ręcznie ustawiane przez użytkownika.';

$GLOBALS["lang"]['Derived by audit.'] = 'Posiadane przez audyt.';

$GLOBALS["lang"]['Derived from <code>rack_devices.device_id</code>.'] = 'Pochodne <code>rack_devices.device_id</code>.';

$GLOBALS["lang"]['Derived from <code>rack_devices.rack_id</code>.'] = 'Pochodne <code>rack_devices.rack_id</code>.';

$GLOBALS["lang"]['Derived from Collector discovery.'] = 'Pochodzi z odkrycia Kolekcjonera.';

$GLOBALS["lang"]['Derived from OS Name.'] = 'Pochodzi z OS Name.';

$GLOBALS["lang"]['Derived from cloud discovery.'] = 'Pochodzi z odkrycia chmur.';

$GLOBALS["lang"]['Derived from device audits.'] = 'Pochodzi z audytów urządzeń.';

$GLOBALS["lang"]['Derived from device type and OS.'] = 'Pochodzi z typu urządzenia i systemu operacyjnego.';

$GLOBALS["lang"]['Derived from discovery.'] = 'Pochodzi z odkrycia.';

$GLOBALS["lang"]['Derived from hostname, sysName, dns Hostname and IP in that order.'] = 'Pochodzi z nazwy hosta, sysName, dns Hostname i IP w tej kolejności.';

$GLOBALS["lang"]['Derived from the integer severity.'] = 'Pochodzi z ciężkości całkowitej.';

$GLOBALS["lang"]['description'] = 'Opis';

$GLOBALS["lang"]['Description'] = 'Opis';

$GLOBALS["lang"]['destination'] = 'Miejsce przeznaczenia';

$GLOBALS["lang"]['Destination'] = 'Miejsce przeznaczenia';

$GLOBALS["lang"]['detail'] = 'Szczegóły';

$GLOBALS["lang"]['Detail'] = 'Szczegóły';

$GLOBALS["lang"]['Details'] = 'Szczegóły';

$GLOBALS["lang"]['details'] = 'Szczegóły';

$GLOBALS["lang"]['Details of who is usually contactable at this site.'] = 'Szczegóły, kto jest zwykle stykalny na tej stronie.';

$GLOBALS["lang"]['device'] = 'Urządzenie';

$GLOBALS["lang"]['Device'] = 'Urządzenie';

$GLOBALS["lang"]['Device Audits'] = 'Audyty urządzeń';

$GLOBALS["lang"]['Device ID'] = 'Identyfikator urządzenia';

$GLOBALS["lang"]['device_id'] = 'Identyfikator urządzenia';

$GLOBALS["lang"]['device_id_a'] = 'ID urządzenia A';

$GLOBALS["lang"]['Device ID A'] = 'ID urządzenia A';

$GLOBALS["lang"]['device_id_b'] = 'Kod identyfikacyjny urządzenia B';

$GLOBALS["lang"]['Device ID B'] = 'Kod identyfikacyjny urządzenia B';

$GLOBALS["lang"]['Device Name'] = 'Nazwa urządzenia';

$GLOBALS["lang"]['Device Result'] = 'Wynik urządzenia';

$GLOBALS["lang"]['Device Results'] = 'Wyniki urządzenia';

$GLOBALS["lang"]['Device Seed'] = 'Materiał siewny';

$GLOBALS["lang"]['Device Seed IP'] = 'Urządzenie Nasienie IP';

$GLOBALS["lang"]['Device Status'] = 'Status urządzenia';

$GLOBALS["lang"]['Device Types'] = 'Typy urządzeń';

$GLOBALS["lang"]['Device is in the Subnet'] = 'Urządzenie jest w Subnecie';

$GLOBALS["lang"]['Devices'] = 'Urządzenia';

$GLOBALS["lang"]['devices_assigned_to_location'] = 'Urządzenia przypisane do lokalizacji';

$GLOBALS["lang"]['Devices Assigned To Location'] = 'Urządzenia przypisane do lokalizacji';

$GLOBALS["lang"]['devices_assigned_to_org'] = 'Urządzenia przypisane Org';

$GLOBALS["lang"]['Devices Assigned To Org'] = 'Urządzenia przypisane Org';

$GLOBALS["lang"]['Devices Audited'] = 'Urządzenia audytowane';

$GLOBALS["lang"]['Devices Created in '] = 'Urządzenia ';

$GLOBALS["lang"]['Devices Created in Open-AudIT'] = 'Urządzenia utworzone w Open- Audit';

$GLOBALS["lang"]['devices_default_display_columns'] = 'Domyślne kolumny wyświetlacza urządzeń';

$GLOBALS["lang"]['Devices Default Display Columns'] = 'Domyślne kolumny wyświetlacza urządzeń';

$GLOBALS["lang"]['Devices Found Last 7 Days'] = 'Urządzenia znalezione w ciągu ostatnich 7 dni';

$GLOBALS["lang"]['Devices Found Today'] = 'Urządzenia znalezione dzisiaj';

$GLOBALS["lang"]['Devices Found Yesterday'] = 'Urządzenia znalezione wczoraj';

$GLOBALS["lang"]['Devices Not Audited'] = 'Urządzenia nieaudytowane';

$GLOBALS["lang"]['Devices Not Seen 30 Days'] = 'Urządzenia nie widziane 30 dni';

$GLOBALS["lang"]['Devices Not Seen 7 Days'] = 'Urządzenia nie widziane 7 dni';

$GLOBALS["lang"]['Devices Not Seen 90 Days'] = 'Urządzenia nie widziane 90 dni';

$GLOBALS["lang"]['Devices Retrieved via API'] = 'Urządzenia odzyskane za pośrednictwem API';

$GLOBALS["lang"]['Devices Selected from '] = 'Urządzenia wybrane z ';

$GLOBALS["lang"]['Devices Selected from Open-AudIT'] = 'Urządzenia wybrane z Open- Audit';

$GLOBALS["lang"]['Devices Updated in '] = 'Urządzenia zaktualizowane ';

$GLOBALS["lang"]['Devices Updated in Open-AudIT'] = 'Urządzenia Aktualizacja w Open- Audit';

$GLOBALS["lang"]['Devices are being benchmarked.'] = 'Urządzenia są oznakowane.';

$GLOBALS["lang"]['Devices are not being benchmarked.'] = 'Urządzenia nie są oznakowane.';

$GLOBALS["lang"]['Devices could be benchmarked.'] = 'Urządzenia mogą być oznakowane.';

$GLOBALS["lang"]['Devices in Running State'] = 'Urządzenia w stanie jazdy';

$GLOBALS["lang"]['Devices in Stopped State'] = 'Urządzenia w stanie zatrzymanym';

$GLOBALS["lang"]['Devices in this'] = 'Urządzenia w tym';

$GLOBALS["lang"]['Devired from type or OS.'] = 'Designed from type or OS.';

$GLOBALS["lang"]['dhcp_enabled'] = 'Włączone Dhcp';

$GLOBALS["lang"]['Dhcp Enabled'] = 'Włączone Dhcp';

$GLOBALS["lang"]['dhcp_lease_expires'] = 'Dhcp lease expires';

$GLOBALS["lang"]['Dhcp Lease Expires'] = 'Dhcp lease expires';

$GLOBALS["lang"]['dhcp_lease_obtained'] = 'Dhcp Lease Otrzymana';

$GLOBALS["lang"]['Dhcp Lease Obtained'] = 'Dhcp Lease Otrzymana';

$GLOBALS["lang"]['dhcp_server'] = 'Serwer Dhcp';

$GLOBALS["lang"]['Dhcp Server'] = 'Serwer Dhcp';

$GLOBALS["lang"]['Did the command complete successfully and return expected data.'] = 'Czy polecenie zakończyło się pomyślnie i zwróciło oczekiwane dane.';

$GLOBALS["lang"]['direction'] = 'Kierunek';

$GLOBALS["lang"]['Direction'] = 'Kierunek';

$GLOBALS["lang"]['directory'] = 'Katalog';

$GLOBALS["lang"]['Directory'] = 'Katalog';

$GLOBALS["lang"]['disabled'] = 'Wyłączone';

$GLOBALS["lang"]['Disabled'] = 'Wyłączone';

$GLOBALS["lang"]['discard'] = 'Wyrzucić';

$GLOBALS["lang"]['Discard'] = 'Wyrzucić';

$GLOBALS["lang"]['Discover'] = 'Odkryj';

$GLOBALS["lang"]['discoveries'] = 'Odkrycia';

$GLOBALS["lang"]['Discoveries'] = 'Odkrycia';

$GLOBALS["lang"]['Discovery'] = 'Odkrycie';

$GLOBALS["lang"]['Discovery Change Logs'] = 'Odkrywanie dzienników zmian';

$GLOBALS["lang"]['Discovery Data Retention'] = 'Przechowywanie danych dotyczących odkrycia';

$GLOBALS["lang"]['discovery_id'] = 'Identyfikator rozpoznania';

$GLOBALS["lang"]['Discovery ID'] = 'Identyfikator rozpoznania';

$GLOBALS["lang"]['Discovery Issues'] = 'Kwestie odkrywania';

$GLOBALS["lang"]['discovery_log'] = 'Dziennik Odkrywania';

$GLOBALS["lang"]['Discovery Log'] = 'Dziennik Odkrywania';

$GLOBALS["lang"]['Discovery Match Options'] = 'Opcje dopasowania wyszukiwania';

$GLOBALS["lang"]['Discovery Name'] = 'Nazwa odkrycia';

$GLOBALS["lang"]['Discovery Options'] = 'Opcje wyszukiwania';

$GLOBALS["lang"]['Discovery Queue Count'] = 'Liczba kolejek Discovery';

$GLOBALS["lang"]['Discovery Queue Limit'] = 'Granica kolejki Discovery';

$GLOBALS["lang"]['discovery_run'] = 'Uruchom Discovery';

$GLOBALS["lang"]['Discovery Run'] = 'Uruchom Discovery';

$GLOBALS["lang"]['discovery_scan_options'] = 'Opcje skanowania';

$GLOBALS["lang"]['Discovery Scan Options'] = 'Opcje skanowania';

$GLOBALS["lang"]['disk'] = 'Dysk';

$GLOBALS["lang"]['Disk'] = 'Dysk';

$GLOBALS["lang"]['display_version'] = 'Wyświetl wersję';

$GLOBALS["lang"]['Display Version'] = 'Wyświetl wersję';

$GLOBALS["lang"]['Display in Menu'] = 'Wyświetl w menu';

$GLOBALS["lang"]['district'] = 'Okręg';

$GLOBALS["lang"]['District'] = 'Okręg';

$GLOBALS["lang"]['Djibouti'] = 'Dżibuti';

$GLOBALS["lang"]['dns'] = 'Dns';

$GLOBALS["lang"]['Dns'] = 'Dns';

$GLOBALS["lang"]['dns_domain'] = 'Domena Dns';

$GLOBALS["lang"]['Dns Domain'] = 'Domena Dns';

$GLOBALS["lang"]['dns_domain_reg_enabled'] = 'Dns Domain Reg Enabled';

$GLOBALS["lang"]['Dns Domain Reg Enabled'] = 'Dns Domain Reg Enabled';

$GLOBALS["lang"]['dns_fqdn'] = 'Dns Fqdn';

$GLOBALS["lang"]['Dns Fqdn'] = 'Dns Fqdn';

$GLOBALS["lang"]['dns_host_name'] = 'Nazwa hosta Dns';

$GLOBALS["lang"]['Dns Host Name'] = 'Nazwa hosta Dns';

$GLOBALS["lang"]['dns_hostname'] = 'Dns Hostname';

$GLOBALS["lang"]['Dns Hostname'] = 'Dns Hostname';

$GLOBALS["lang"]['dns_server'] = 'Serwer Dns';

$GLOBALS["lang"]['Dns Server'] = 'Serwer Dns';

$GLOBALS["lang"]['Do not scan these TCP ports.'] = 'Nie skanuj tych portów TCP.';

$GLOBALS["lang"]['Do not scan these UDP ports.'] = 'Nie skanuj tych portów UDP.';

$GLOBALS["lang"]['Do not show me again'] = 'Nie pokazuj mi więcej.';

$GLOBALS["lang"]['Do you want to use secure transport (LDAPS) or regular unencrypted LDAP.'] = 'Czy chcesz korzystać z bezpiecznego transportu (LDAPS) lub regularnego niezaszyfrowanego LDAP.';

$GLOBALS["lang"]['Do you wish to see the standard sidebar on the left.'] = 'Chcesz zobaczyć standardowy pasek boczny po lewej.';

$GLOBALS["lang"]['documentation'] = 'Dokumentacja';

$GLOBALS["lang"]['Documentation'] = 'Dokumentacja';

$GLOBALS["lang"]['Does the license apply to child Orgs.'] = 'Czy licencja dotyczy dzieci Orgs.';

$GLOBALS["lang"]['domain'] = 'Domena';

$GLOBALS["lang"]['Domain'] = 'Domena';

$GLOBALS["lang"]['domain_controller_address'] = 'Adres kontrolera domeny';

$GLOBALS["lang"]['Domain Controller Address'] = 'Adres kontrolera domeny';

$GLOBALS["lang"]['domain_controller_name'] = 'Kontroler domeny Nazwa';

$GLOBALS["lang"]['Domain Controller Name'] = 'Kontroler domeny Nazwa';

$GLOBALS["lang"]['domain_role'] = 'Rola domeny';

$GLOBALS["lang"]['Domain Role'] = 'Rola domeny';

$GLOBALS["lang"]['domain_short'] = 'Domena krótka';

$GLOBALS["lang"]['Domain Short'] = 'Domena krótka';

$GLOBALS["lang"]['Dominica'] = 'Dominika';

$GLOBALS["lang"]['Dominican Republic'] = 'Dominikana';

$GLOBALS["lang"]['Dont hold my hand, I know what I am doing. No filter and the ability to join custom tables.'] = 'Nie trzymaj mnie za rękę, wiem co robię. Brak filtra i możliwość łączenia własnych tabel.';

$GLOBALS["lang"]['Download'] = 'Pobierz';

$GLOBALS["lang"]['Download a file from URL'] = 'Pobierz plik z URL';

$GLOBALS["lang"]['driver'] = 'Kierowca';

$GLOBALS["lang"]['Driver'] = 'Kierowca';

$GLOBALS["lang"]['duplex'] = 'Duplex';

$GLOBALS["lang"]['Duplex'] = 'Duplex';

$GLOBALS["lang"]['duration'] = 'Czas trwania';

$GLOBALS["lang"]['Duration'] = 'Czas trwania';

$GLOBALS["lang"]['ESXi'] = 'ESXi';

$GLOBALS["lang"]['EULA'] = 'EULA';

$GLOBALS["lang"]['Ecuador'] = 'Ekwador';

$GLOBALS["lang"]['Edit'] = 'Edycja';

$GLOBALS["lang"]['edit_log'] = 'Edytuj dziennik';

$GLOBALS["lang"]['Edit Log'] = 'Edytuj dziennik';

$GLOBALS["lang"]['editable'] = 'Edytowalne';

$GLOBALS["lang"]['Editable'] = 'Edytowalne';

$GLOBALS["lang"]['edited_by'] = 'Edytowany przez';

$GLOBALS["lang"]['Edited By'] = 'Edytowany przez';

$GLOBALS["lang"]['edited_date'] = 'Data edycji';

$GLOBALS["lang"]['Edited Date'] = 'Data edycji';

$GLOBALS["lang"]['edition'] = 'Edycja';

$GLOBALS["lang"]['Edition'] = 'Edycja';

$GLOBALS["lang"]['Egypt'] = 'Egipt';

$GLOBALS["lang"]['Either Amazon, Google or Microsoft.'] = 'Amazon, Google lub Microsoft.';

$GLOBALS["lang"]['Either none or present.

<strong>None</strong> - The successful attack does not depend on the deployment and execution conditions of the vulnerable system. The attacker can expect to be able to reach the vulnerability and execute the exploit under all or most instances of the vulnerability.

<strong>Present</strong> - The successful attack depends on the presence of specific deployment and execution conditions of the vulnerable system that enable the attack. These include:

A race condition must be won to successfully exploit the vulnerability. The successfulness of the attack is conditioned on execution conditions that are not under full control of the attacker. The attack may need to be launched multiple times against a single target before being successful.

Network injection. The attacker must inject themselves into the logical network path between the target and the resource requested by the victim (e.g. vulnerabilities requiring an on-path attacker).'] = 'Albo brak, albo obecność.

<strong>Brak</strong> - Udany atak nie zależy od warunków rozmieszczenia i wykonania systemu podatnego na zagrożenia. Napastnik może oczekiwać, że będzie w stanie dotrzeć do podatności i wykonać wykorzystanie w każdym lub większości przypadków podatności.

<strong>Obecny</strong> - Udany atak zależy od obecności konkretnych warunków rozmieszczania i wykonywania przez bezbronny system, który umożliwia atak. Należą do nich:

Warunek wyścigu musi być wygrany, aby skutecznie wykorzystać podatność. Powodzenie ataku uwarunkowane jest warunkami egzekucji, które nie są pod pełną kontrolą napastnika. Atak może wymagać wielokrotnego ataku na jeden cel, zanim zakończy się sukcesem.

Wtrysk sieciowy. Atakujący musi wstrzyknąć się w logiczną ścieżkę sieciową pomiędzy celem a zasobem wymaganym przez ofiarę (np. podatności wymagające atakującego na ścieżce).';

$GLOBALS["lang"]['El Salvador'] = 'Salwador';

$GLOBALS["lang"]['email'] = 'E-mail';

$GLOBALS["lang"]['Email'] = 'E-mail';

$GLOBALS["lang"]['email_address'] = 'Adres e-mail';

$GLOBALS["lang"]['Email Address'] = 'Adres e-mail';

$GLOBALS["lang"]['Email Configuration'] = 'Konfiguracja poczty elektronicznej';

$GLOBALS["lang"]['Email to send test to'] = 'E-mail, aby wysłać test do';

$GLOBALS["lang"]['Enable'] = 'Włącz';

$GLOBALS["lang"]['enabled'] = 'Włączone';

$GLOBALS["lang"]['Enabled'] = 'Włączone';

$GLOBALS["lang"]['encryption'] = 'Szyfrowanie';

$GLOBALS["lang"]['Encryption'] = 'Szyfrowanie';

$GLOBALS["lang"]['encryption_method'] = 'Metoda szyfrowania';

$GLOBALS["lang"]['Encryption Method'] = 'Metoda szyfrowania';

$GLOBALS["lang"]['encryption_status'] = 'Stan szyfrowania';

$GLOBALS["lang"]['Encryption Status'] = 'Stan szyfrowania';

$GLOBALS["lang"]['end_date'] = 'Data zakończenia';

$GLOBALS["lang"]['End Date'] = 'Data zakończenia';

$GLOBALS["lang"]['End OF Life Product ID'] = 'Identyfikator produktu pod koniec życia';

$GLOBALS["lang"]['end_of_life'] = 'Koniec życia';

$GLOBALS["lang"]['End Of Life'] = 'Koniec życia';

$GLOBALS["lang"]['end_of_production'] = 'Koniec produkcji';

$GLOBALS["lang"]['End Of Production'] = 'Koniec produkcji';

$GLOBALS["lang"]['end_of_service'] = 'Koniec serwisu';

$GLOBALS["lang"]['End Of Service'] = 'Koniec serwisu';

$GLOBALS["lang"]['end_of_service_life'] = 'Koniec życia służbowego';

$GLOBALS["lang"]['End Of Service Life'] = 'Koniec życia służbowego';

$GLOBALS["lang"]['English'] = 'Angielski';

$GLOBALS["lang"]['enterprise'] = 'Przedsiębiorstwo';

$GLOBALS["lang"]['Enterprise'] = 'Przedsiębiorstwo';

$GLOBALS["lang"]['Enterprise Private Network'] = 'Europejska Sieć Prywatna';

$GLOBALS["lang"]['Entitlement Type'] = 'Rodzaj uprawnienia';

$GLOBALS["lang"]['environment'] = 'Środowisko';

$GLOBALS["lang"]['Environment'] = 'Środowisko';

$GLOBALS["lang"]['Equal To'] = 'Równe';

$GLOBALS["lang"]['Equal To or Greater Than'] = 'Równe lub większe niż';

$GLOBALS["lang"]['Equal To or Less Than'] = 'Równe lub mniejsze niż';

$GLOBALS["lang"]['Equals'] = 'Równanie';

$GLOBALS["lang"]['Equatorial Guinea'] = 'Gwinea Równikowa';

$GLOBALS["lang"]['Eritrea'] = 'Erytrea';

$GLOBALS["lang"]['Error'] = 'Błąd';

$GLOBALS["lang"]['Error Code'] = 'Kod błędu';

$GLOBALS["lang"]['Established'] = 'Ustanowione';

$GLOBALS["lang"]['Estonia'] = 'Estonia';

$GLOBALS["lang"]['Ethernet MAC'] = 'Ethernet MAC';

$GLOBALS["lang"]['ethernet_mac'] = 'Ethernet Mac';

$GLOBALS["lang"]['Ethernet Mac'] = 'Ethernet Mac';

$GLOBALS["lang"]['Ethiopia'] = 'Etiopia';

$GLOBALS["lang"]['Every'] = 'Każdy';

$GLOBALS["lang"]['Every Day'] = 'Każdego dnia';

$GLOBALS["lang"]['Exceptions'] = 'Wyjątki';

$GLOBALS["lang"]['exclude'] = 'Wyłączenie';

$GLOBALS["lang"]['Exclude'] = 'Wyłączenie';

$GLOBALS["lang"]['exclude_ip'] = 'Z wyłączeniem IP';

$GLOBALS["lang"]['Exclude IP'] = 'Z wyłączeniem IP';

$GLOBALS["lang"]['Exclude IP Addresses'] = 'Z wyłączeniem adresów IP';

$GLOBALS["lang"]['Exclude TCP Ports'] = 'Wyłączenie portów TCP';

$GLOBALS["lang"]['exclude_tcp_ports'] = 'Wyłączenie portów Tcp';

$GLOBALS["lang"]['Exclude Tcp Ports'] = 'Wyłączenie portów Tcp';

$GLOBALS["lang"]['Exclude UDP Ports'] = 'Wyłączenie portów UDP';

$GLOBALS["lang"]['exclude_udp_ports'] = 'Z wyłączeniem Portów Udp';

$GLOBALS["lang"]['Exclude Udp Ports'] = 'Z wyłączeniem Portów Udp';

$GLOBALS["lang"]['Exclude these IP addresses from being Nmap scanned.'] = 'Wyłączenie tych adresów IP z skanowania Nmap.';

$GLOBALS["lang"]['Excluded'] = 'Z wyłączeniem';

$GLOBALS["lang"]['exclusion_reasons'] = 'Uzasadnienie wykluczenia';

$GLOBALS["lang"]['Exclusion Reasons'] = 'Uzasadnienie wykluczenia';

$GLOBALS["lang"]['executable'] = 'Wykonalne';

$GLOBALS["lang"]['Executable'] = 'Wykonalne';

$GLOBALS["lang"]['executable_id'] = 'Identyfikator wykonywalny';

$GLOBALS["lang"]['Executable ID'] = 'Identyfikator wykonywalny';

$GLOBALS["lang"]['executables'] = 'Wykonania';

$GLOBALS["lang"]['Executables'] = 'Wykonania';

$GLOBALS["lang"]['Execute'] = 'Wykonaj';

$GLOBALS["lang"]['Executing'] = 'Wykonanie';

$GLOBALS["lang"]['exemption_reason'] = 'Uzasadnienie wyłączenia';

$GLOBALS["lang"]['Exemption Reason'] = 'Uzasadnienie wyłączenia';

$GLOBALS["lang"]['Existing Building'] = 'Istniejący budynek';

$GLOBALS["lang"]['Existing Floor'] = 'Istniejąca podłoga';

$GLOBALS["lang"]['Existing Room'] = 'Istniejący pokój';

$GLOBALS["lang"]['Existing Row'] = 'Istniejący wiersz';

$GLOBALS["lang"]['expire_date'] = 'Termin ważności';

$GLOBALS["lang"]['Expire Date'] = 'Termin ważności';

$GLOBALS["lang"]['expire_minutes'] = 'Termin ważności protokołu';

$GLOBALS["lang"]['Expire Minutes'] = 'Termin ważności protokołu';

$GLOBALS["lang"]['expires'] = 'Wygasa';

$GLOBALS["lang"]['Expires'] = 'Wygasa';

$GLOBALS["lang"]['expiry_date'] = 'Data wygaśnięcia';

$GLOBALS["lang"]['Expiry Date'] = 'Data wygaśnięcia';

$GLOBALS["lang"]['exploit_maturity'] = 'Wyczerpanie dojrzałości';

$GLOBALS["lang"]['Exploit Maturity'] = 'Wyczerpanie dojrzałości';

$GLOBALS["lang"]['Export'] = 'Eksport';

$GLOBALS["lang"]['Export by Device'] = 'Eksport według urządzenia';

$GLOBALS["lang"]['Export by Policy'] = 'Eksport według zasad';

$GLOBALS["lang"]['Export data to'] = 'Eksport danych do';

$GLOBALS["lang"]['expose'] = 'Ekspozycja';

$GLOBALS["lang"]['Expose'] = 'Ekspozycja';

$GLOBALS["lang"]['External'] = 'Zewnętrzne';

$GLOBALS["lang"]['External Field Name'] = 'Zewnętrzna nazwa pola';

$GLOBALS["lang"]['External Field Type'] = 'Typ pola zewnętrznego';

$GLOBALS["lang"]['external_ident'] = 'Ident zewnętrzny';

$GLOBALS["lang"]['External Ident'] = 'Ident zewnętrzny';

$GLOBALS["lang"]['external_link'] = 'Związek zewnętrzny';

$GLOBALS["lang"]['External Link'] = 'Związek zewnętrzny';

$GLOBALS["lang"]['extra_columns'] = 'Dodatkowe kolumny';

$GLOBALS["lang"]['Extra Columns'] = 'Dodatkowe kolumny';

$GLOBALS["lang"]['Extra and more verbose logging is generated for troubleshooting.'] = 'Dodatkowe i więcej werbose logowanie jest generowane do rozwiązywania problemów.';

$GLOBALS["lang"]['FAQ'] = 'FAQ';

$GLOBALS["lang"]['FQDN'] = 'FQDN';

$GLOBALS["lang"]['FW Revision'] = 'Przegląd FW';

$GLOBALS["lang"]['Fail'] = 'Błąd';

$GLOBALS["lang"]['Failed'] = 'Nieudany';

$GLOBALS["lang"]['Failed Severity'] = 'Nieudane nasilenie';

$GLOBALS["lang"]['Falkland Islands (Malvinas)'] = 'Falklandy (Malwinas)';

$GLOBALS["lang"]['Family'] = 'Rodzina';

$GLOBALS["lang"]['Faroe Islands'] = 'Wyspy Owcze';

$GLOBALS["lang"]['Features'] = 'Cechy';

$GLOBALS["lang"]['February'] = 'Luty';

$GLOBALS["lang"]['field'] = 'Pole';

$GLOBALS["lang"]['Field'] = 'Pole';

$GLOBALS["lang"]['field_id'] = 'Identyfikator pola';

$GLOBALS["lang"]['Field ID'] = 'Identyfikator pola';

$GLOBALS["lang"]['Field Name'] = 'Nazwa pola';

$GLOBALS["lang"]['Field Type'] = 'Rodzaj pola';

$GLOBALS["lang"]['Fields'] = 'Pola';

$GLOBALS["lang"]['fields'] = 'Pola';

$GLOBALS["lang"]['Fiji the Fiji Islands'] = 'Fidżi Wyspy Fidżi';

$GLOBALS["lang"]['File'] = 'Plik';

$GLOBALS["lang"]['File Import'] = 'Importuj plik';

$GLOBALS["lang"]['File Input'] = 'Wejście pliku';

$GLOBALS["lang"]['file_name'] = 'Nazwa pliku';

$GLOBALS["lang"]['File Name'] = 'Nazwa pliku';

$GLOBALS["lang"]['file_size'] = 'Rozmiar pliku';

$GLOBALS["lang"]['File Size'] = 'Rozmiar pliku';

$GLOBALS["lang"]['filename'] = 'Nazwa pliku';

$GLOBALS["lang"]['Filename'] = 'Nazwa pliku';

$GLOBALS["lang"]['files'] = 'Pliki';

$GLOBALS["lang"]['Files'] = 'Pliki';

$GLOBALS["lang"]['files_id'] = 'Identyfikator plików';

$GLOBALS["lang"]['Files ID'] = 'Identyfikator plików';

$GLOBALS["lang"]['filter'] = 'Filtr';

$GLOBALS["lang"]['Filter'] = 'Filtr';

$GLOBALS["lang"]['filtered'] = 'Filtrowane';

$GLOBALS["lang"]['Filtered'] = 'Filtrowane';

$GLOBALS["lang"]['Finland'] = 'Finlandia';

$GLOBALS["lang"]['Firewall'] = 'Firewall';

$GLOBALS["lang"]['firewall_rule'] = 'Zasada firewalla';

$GLOBALS["lang"]['Firewall Rule'] = 'Zasada firewalla';

$GLOBALS["lang"]['firmware'] = 'Oprogramowanie';

$GLOBALS["lang"]['Firmware'] = 'Oprogramowanie';

$GLOBALS["lang"]['firmware_revision'] = 'Przegląd oprogramowania';

$GLOBALS["lang"]['Firmware Revision'] = 'Przegląd oprogramowania';

$GLOBALS["lang"]['First Name'] = 'Imię';

$GLOBALS["lang"]['first_run'] = 'Pierwszy bieg';

$GLOBALS["lang"]['First Run'] = 'Pierwszy bieg';

$GLOBALS["lang"]['first_seen'] = 'Pierwszy raz';

$GLOBALS["lang"]['First Seen'] = 'Pierwszy raz';

$GLOBALS["lang"]['FirstWave'] = 'FirstWave';

$GLOBALS["lang"]['Fix'] = 'Napraw';

$GLOBALS["lang"]['Fixed'] = 'Naprawiono';

$GLOBALS["lang"]['Floor'] = 'Podłoga';

$GLOBALS["lang"]['Follow any of the links below and discover how to use Open-AudIT to find out <b>Whats On Your Network?</b>'] = 'Podążaj za którymkolwiek z poniższych linków i dowiedz się, jak korzystać z Open-Audit, aby się dowiedzieć <b>Co jest w twojej sieci?</b>';

$GLOBALS["lang"]['For a seed discovery, should I only discover IPs in the private IP address space.'] = 'Dla odkrycia nasion, powinienem odkryć IP tylko w prywatnej przestrzeni adresowej IP.';

$GLOBALS["lang"]['For a seed discovery, should I only discover IPs on the chosen subnet.'] = 'Dla odkrycia nasion, powinienem odkryć tylko IP na wybranej podsieci.';

$GLOBALS["lang"]['For a seed discovery, should I ping the subnet before running the discovery.'] = 'Za odkrycie nasion, powinienem sprawdzić podsieć przed uruchomieniem odkrycia.';

$GLOBALS["lang"]['For advanced entry of a raw SQL query. As per Queries, you must include <code>WHERE @filter AND<code> in your SQL.'] = 'Dla zaawansowanego wpisu surowego zapytania SQL. Jak na pytanie, należy uwzględnić <code>WHERE @filter AND<code> in your SQL.</code></code>';

$GLOBALS["lang"]['For licenses that are not perpetual, when does the license expire.'] = 'Dla licencji, które nie są wieczne, kiedy licencja wygasa.';

$GLOBALS["lang"]['form_factor'] = 'Formularz czynnika';

$GLOBALS["lang"]['Form Factor'] = 'Formularz czynnika';

$GLOBALS["lang"]['format'] = 'Format';

$GLOBALS["lang"]['Format'] = 'Format';

$GLOBALS["lang"]['fqdn'] = 'Fqdn';

$GLOBALS["lang"]['Fqdn'] = 'Fqdn';

$GLOBALS["lang"]['France, French Republic'] = 'Francja, Francja';

$GLOBALS["lang"]['free'] = 'Wolny';

$GLOBALS["lang"]['Free'] = 'Wolny';

$GLOBALS["lang"]['French'] = 'Francuski';

$GLOBALS["lang"]['French Guiana'] = 'Gujana Francuska';

$GLOBALS["lang"]['French Polynesia'] = 'Polinezja Francuska';

$GLOBALS["lang"]['French Southern Territories'] = 'Francuskie Terytoria Południowe';

$GLOBALS["lang"]['Frequently Asked Questions'] = 'Często zadawane pytania';

$GLOBALS["lang"]['Friday'] = 'Piątek';

$GLOBALS["lang"]['From 100 Devices'] = 'Od 100 Urządzenia';

$GLOBALS["lang"]['From 500 Devices'] = 'Od 500 Urządzenia';

$GLOBALS["lang"]['full_name'] = 'Pełna nazwa';

$GLOBALS["lang"]['Full Name'] = 'Pełna nazwa';

$GLOBALS["lang"]['function'] = 'Funkcja';

$GLOBALS["lang"]['Function'] = 'Funkcja';

$GLOBALS["lang"]['GROUP BY'] = 'GRUPA';

$GLOBALS["lang"]['Gabon'] = 'Gabon';

$GLOBALS["lang"]['Gambia the'] = 'Gambia';

$GLOBALS["lang"]['gateway'] = 'Brama';

$GLOBALS["lang"]['Gateway'] = 'Brama';

$GLOBALS["lang"]['gateways'] = 'Bramki';

$GLOBALS["lang"]['Gateways'] = 'Bramki';

$GLOBALS["lang"]['Generated By'] = 'Generowane przez';

$GLOBALS["lang"]['geo'] = 'Geo';

$GLOBALS["lang"]['Geo'] = 'Geo';

$GLOBALS["lang"]['Georgia'] = 'Gruzja';

$GLOBALS["lang"]['German'] = 'Niemiecki';

$GLOBALS["lang"]['Germany'] = 'Niemcy';

$GLOBALS["lang"]['Get Lat/Long'] = 'Get Lat / Long';

$GLOBALS["lang"]['Get Started'] = 'Zacznij';

$GLOBALS["lang"]['Get a Free License'] = 'Zdobądź darmową licencję';

$GLOBALS["lang"]['Getting Started'] = 'Rozpoczęcie';

$GLOBALS["lang"]['Ghana'] = 'Ghana';

$GLOBALS["lang"]['Gibraltar'] = 'Gibraltar';

$GLOBALS["lang"]['Global Discovery Options'] = 'Opcje wyszukiwania globalnego';

$GLOBALS["lang"]['Go'] = 'Idź.';

$GLOBALS["lang"]['Google Compute Fields'] = 'Google Compute Fields';

$GLOBALS["lang"]['Google Maps API Key'] = 'API Map Google Klucz';

$GLOBALS["lang"]['Greater Than'] = 'Większy niż';

$GLOBALS["lang"]['Greater Than or Equals'] = 'Większe niż lub równe';

$GLOBALS["lang"]['Greece'] = 'Grecja';

$GLOBALS["lang"]['Green Query'] = 'Zielone zapytania';

$GLOBALS["lang"]['Greenland'] = 'Grenlandia';

$GLOBALS["lang"]['Grenada'] = 'Grenada';

$GLOBALS["lang"]['Group'] = 'Grupa';

$GLOBALS["lang"]['group_by'] = 'Grupa';

$GLOBALS["lang"]['Group By'] = 'Grupa';

$GLOBALS["lang"]['group_id'] = 'Identyfikator grupy';

$GLOBALS["lang"]['Group ID'] = 'Identyfikator grupy';

$GLOBALS["lang"]['groups'] = 'Grupy';

$GLOBALS["lang"]['Groups'] = 'Grupy';

$GLOBALS["lang"]['Guadeloupe'] = 'Gwadelupa';

$GLOBALS["lang"]['Guam'] = 'Guam';

$GLOBALS["lang"]['Guatemala'] = 'Gwatemala';

$GLOBALS["lang"]['Guernsey'] = 'Guernsey Przewodniczący';

$GLOBALS["lang"]['guest_device_id'] = 'Identyfikator urządzenia dla gości';

$GLOBALS["lang"]['Guest Device ID'] = 'Identyfikator urządzenia dla gości';

$GLOBALS["lang"]['guid'] = 'Guid';

$GLOBALS["lang"]['Guid'] = 'Guid';

$GLOBALS["lang"]['Guinea'] = 'Gwinea';

$GLOBALS["lang"]['Guinea-Bissau'] = 'Guinea- Bissau';

$GLOBALS["lang"]['Guyana'] = 'Gujana';

$GLOBALS["lang"]['HP-UX'] = 'HP- UX';

$GLOBALS["lang"]['HW Revision'] = 'Przegląd HW';

$GLOBALS["lang"]['Haiti'] = 'Haiti';

$GLOBALS["lang"]['hard_drive_index'] = 'Wskaźnik dysku twardego';

$GLOBALS["lang"]['Hard Drive Index'] = 'Wskaźnik dysku twardego';

$GLOBALS["lang"]['hardware_revision'] = 'Przegląd sprzętu';

$GLOBALS["lang"]['Hardware Revision'] = 'Przegląd sprzętu';

$GLOBALS["lang"]['Has this policy been applied in this organization.'] = 'Czy ta polityka została zastosowana w tej organizacji.';

$GLOBALS["lang"]['hash'] = 'Hash';

$GLOBALS["lang"]['Hash'] = 'Hash';

$GLOBALS["lang"]['Head'] = 'Głowa';

$GLOBALS["lang"]['Heard Island and McDonald Islands'] = 'Wyspy Heard i McDonald';

$GLOBALS["lang"]['height'] = 'Wysokość';

$GLOBALS["lang"]['Height'] = 'Wysokość';

$GLOBALS["lang"]['Height in RU'] = 'Wysokość w RU';

$GLOBALS["lang"]['Help'] = 'Pomoc';

$GLOBALS["lang"]['Help and Frequently Asked Questions'] = 'Pomoc i często zadawane pytania';

$GLOBALS["lang"]['high'] = 'Wysoki';

$GLOBALS["lang"]['High'] = 'Wysoki';

$GLOBALS["lang"]['High Availability'] = 'Wysoka dostępność';

$GLOBALS["lang"]['Holy See (Vatican City State)'] = 'Stolica Apostolska (Państwo Watykańskie)';

$GLOBALS["lang"]['Home'] = 'Spis treści';

$GLOBALS["lang"]['home'] = 'Spis treści';

$GLOBALS["lang"]['Home Area Network'] = 'Sieć obszaru macierzystego';

$GLOBALS["lang"]['Honduras'] = 'Honduras';

$GLOBALS["lang"]['Hong Kong'] = 'Hongkong';

$GLOBALS["lang"]['host'] = 'Host';

$GLOBALS["lang"]['Host'] = 'Host';

$GLOBALS["lang"]['hostname'] = 'Nazwa komputera';

$GLOBALS["lang"]['Hostname'] = 'Nazwa komputera';

$GLOBALS["lang"]['hour'] = 'Godzina';

$GLOBALS["lang"]['Hour'] = 'Godzina';

$GLOBALS["lang"]['How and Why is Open-AudIT More Secure'] = 'Jak i dlaczego Open- Audit jest bardziej bezpieczne';

$GLOBALS["lang"]['How long did the command take to execute.'] = 'Ile czasu zajęło dowództwu wykonanie.';

$GLOBALS["lang"]['How long should Nmap wait for a response, per device.'] = 'Jak długo Nmap powinien czekać na odpowiedź, na urządzenie.';

$GLOBALS["lang"]['How many circuit feed to this rack.'] = 'Ile obwodów zasila ten stojak?';

$GLOBALS["lang"]['How many policies results in a fail.'] = 'Ile polityk prowadzi do porażki.';

$GLOBALS["lang"]['How many policies results in a pass.'] = 'Ile polityk prowadzi do przejścia.';

$GLOBALS["lang"]['How many power sockets in this rack.'] = 'Ile gniazd zasilających jest w tym bagażniku?';

$GLOBALS["lang"]['How many rack units in height is this rack.'] = 'Ile jednostek na stojakach ma ten stojak?';

$GLOBALS["lang"]['How often should the collector ask the server for a task.'] = 'Jak często kolekcjoner powinien poprosić serwer o zadanie.';

$GLOBALS["lang"]['How should we select devices to be integrated (using an Attribute, Query or a Group).'] = 'Jak wybrać urządzenia, które mają być zintegrowane (używając Atrybuty, Pytania lub Grupy).';

$GLOBALS["lang"]['How the vulnerability is exploited (e.g., Network, Adjacent, Local, Physical).'] = 'W jaki sposób wykorzystuje się podatność (np. sieć, przylegające, lokalne, fizyczne).';

$GLOBALS["lang"]['How to compare'] = 'Jak porównać';

$GLOBALS["lang"]['Human-readable explanation of the vulnerability.'] = 'Ludzkie wyjaśnienie słabości.';

$GLOBALS["lang"]['Hungary'] = 'Węgry';

$GLOBALS["lang"]['hw_cpe'] = 'Hw Cpe';

$GLOBALS["lang"]['Hw Cpe'] = 'Hw Cpe';

$GLOBALS["lang"]['hyperthreading'] = 'Hyperthreading';

$GLOBALS["lang"]['Hyperthreading'] = 'Hyperthreading';

$GLOBALS["lang"]['I have read the EULA.'] = 'Czytałem EULA.';

$GLOBALS["lang"]['id'] = 'ID';

$GLOBALS["lang"]['ID'] = 'ID';

$GLOBALS["lang"]['IF'] = 'IF';

$GLOBALS["lang"]['IOS Version'] = 'Wersja IOS';

$GLOBALS["lang"]['IP'] = 'IP';

$GLOBALS["lang"]['ip'] = 'IP';

$GLOBALS["lang"]['IP Address'] = 'Adres IP';

$GLOBALS["lang"]['IP Addresses'] = 'Adresy IP';

$GLOBALS["lang"]['IP Last Seen'] = 'IP Ostatnio widziany';

$GLOBALS["lang"]['IP Set By'] = 'Ustawienie IP';

$GLOBALS["lang"]['ISO 27001 only.'] = 'Wyłącznie ISO 27001.';

$GLOBALS["lang"]['Iceland'] = 'Islandia';

$GLOBALS["lang"]['icon'] = 'Ikona';

$GLOBALS["lang"]['Icon'] = 'Ikona';

$GLOBALS["lang"]['Icon and Text'] = 'Ikona i tekst';

$GLOBALS["lang"]['Icon only, text only or icon and text.'] = 'Tylko ikona, tylko tekst lub ikona i tekst.';

$GLOBALS["lang"]['id_internal'] = 'Id Wewnętrzny';

$GLOBALS["lang"]['Id Internal'] = 'Id Wewnętrzny';

$GLOBALS["lang"]['id_number'] = 'Numer identyfikacyjny';

$GLOBALS["lang"]['Id Number'] = 'Numer identyfikacyjny';

$GLOBALS["lang"]['identification'] = 'Identyfikacja';

$GLOBALS["lang"]['Identification'] = 'Identyfikacja';

$GLOBALS["lang"]['If'] = 'Jeśli';

$GLOBALS["lang"]['If a port responds with filtered, should we consider it available.'] = 'Jeśli port reaguje filtrowanym, powinniśmy uznać go za dostępny.';

$GLOBALS["lang"]['If a port responds with open|filtered, should we consider it available.'] = 'Jeśli port reaguje z otwartym 124; filtrowane, powinniśmy uznać go za dostępny.';

$GLOBALS["lang"]['If a remote device does not exist in the Open-AudIT selected devices, should we delete it from the external system.'] = 'Jeżeli zdalne urządzenie nie istnieje w wybranych urządzeniach Open- Audit, należy usunąć je z systemu zewnętrznego.';

$GLOBALS["lang"]['If an Open-AudIT device has been changed, should we update the external system.'] = 'Jeżeli urządzenie Open- Audit zostało zmienione, powinniśmy zaktualizować system zewnętrzny.';

$GLOBALS["lang"]['If an Open-AudIT device is not on the external system, should we create it.'] = 'Jeżeli w systemie zewnętrznym nie ma urządzenia Open- Audit, powinniśmy go utworzyć.';

$GLOBALS["lang"]['If an agent reports its primary IP is in this subnet, perform the actions.'] = 'Jeśli agent zgłasza swój pierwotny IP jest w tej podsieci, wykonać działania.';

$GLOBALS["lang"]['If any of these (comma seperated, no spaces) ports are detected, assume SSH is running on them and use them for auditing. No need to add this port to the Custom TCP ports - it will be added automatically.'] = 'W przypadku wykrycia któregokolwiek z tych portów (przecinek seperacyjny, brak spacji), należy założyć, że SSH działa na nich i używa ich do audytu. Nie ma potrzeby dodawania tego portu do własnych portów TCP - zostanie on automatycznie dodany.';

$GLOBALS["lang"]['If set, holds a JSON array of specific device columns this user has chosen to see, other than the configuration default.'] = 'Jeśli jest ustawiony, posiada tablicę JSON poszczególnych kolumn urządzeń, które użytkownik wybrał do obejrzenia, inną niż domyślna konfiguracja.';

$GLOBALS["lang"]['If the agent OS family (case insensitive) contains this string, perform the actions.'] = 'Jeśli rodzina agentów OS (nieczuły przypadek) zawiera ten łańcuch, należy wykonać działania.';

$GLOBALS["lang"]['If the following conditions are met:<br><ul><li>a Role has an assigned ad_group</li><li>an Org has an assigned ad_group</li><li>an LDAP Server has use_roles set to y</li><li>a user exists in LDAP (be it Active Directory or OpenLDAP) and is in the assigned ad_groups</li></ul>That user can log on to Open-AudIT without an account in Open-AudIT needing to be created. Open-AudIT will query the LDAP in question and if the user is in the required groups but not in Open-AudIT, their user attributes (name, full name, email,  roles, orgs, etc) within Open-AudIT will be automatically populated and they will be logged on.<br> <br>'] = 'Jeżeli spełnione są następujące warunki:<br/><ul><li>a Role ma przypisaną grupę ad _ group</li><li>Org ma przypisaną grupę ad _ group</li><li>LDAP Serwer posiada ustawione na y _ roles</li><li>istnieje użytkownik w LDAP (Active Directory lub OpenLDAP) i jest w przydzielonych grupach ad _</li></ul>Użytkownik może zalogować się do Open- Audit bez konta w Open- Audit, które wymaga utworzenia. Open-Audit będzie pytać o LDAP i jeśli użytkownik jest w wymaganych grupach, ale nie w Open-Audit, ich atrybuty użytkownika (nazwa, pełne imię, email, role, orgs, itp) w Open-Audit będą automatycznie zaludnione i będą zalogowane.<br/> <br/>';

$GLOBALS["lang"]['If the user logging on to Open-AudIT does not have the access to search LDAP, you can use another account which does have this access.'] = 'Jeśli użytkownik loguje się do Open- Audit nie ma dostępu do wyszukiwania LDAP, możesz użyć innego konta, które ma ten dostęp.';

$GLOBALS["lang"]['If this many or more minutes have passed since the device contacted the server, perform the actions.'] = 'Jeśli minęło tyle lub więcej minut od kontaktu urządzenia z serwerem, wykonaj działania.';

$GLOBALS["lang"]['If you choose a Collector, it will be scheduled to execute on the next 5 minute boundary.'] = 'Jeśli wybierzesz Kolekcjoner, będzie on wykonywany na następnej 5-minutowej granicy.';

$GLOBALS["lang"]['ifadminstatus'] = 'Status Ifadmingu';

$GLOBALS["lang"]['Ifadminstatus'] = 'Status Ifadmingu';

$GLOBALS["lang"]['iflastchange'] = 'Iflastchange';

$GLOBALS["lang"]['Iflastchange'] = 'Iflastchange';

$GLOBALS["lang"]['Ignored'] = 'Ignored';

$GLOBALS["lang"]['image'] = 'Obraz';

$GLOBALS["lang"]['Image'] = 'Obraz';

$GLOBALS["lang"]['Images'] = 'Obrazy';

$GLOBALS["lang"]['impact_availability'] = 'Dostępność pod względem wpływu';

$GLOBALS["lang"]['Impact Availability'] = 'Dostępność pod względem wpływu';

$GLOBALS["lang"]['impact_confidentiality'] = 'Poufność wpływu';

$GLOBALS["lang"]['Impact Confidentiality'] = 'Poufność wpływu';

$GLOBALS["lang"]['impact_integrity'] = 'Integralność oddziaływania';

$GLOBALS["lang"]['Impact Integrity'] = 'Integralność oddziaływania';

$GLOBALS["lang"]['implementation_notes'] = 'Uwagi wykonawcze';

$GLOBALS["lang"]['Implementation Notes'] = 'Uwagi wykonawcze';

$GLOBALS["lang"]['Import'] = 'Import';

$GLOBALS["lang"]['Import Example Data'] = 'Importuj przykładowe dane';

$GLOBALS["lang"]['improvement_opportunities'] = 'Możliwości poprawy';

$GLOBALS["lang"]['Improvement Opportunities'] = 'Możliwości poprawy';

$GLOBALS["lang"]['In'] = 'W';

$GLOBALS["lang"]['Inactive'] = 'Nieaktywne';

$GLOBALS["lang"]['Include'] = 'Dołącz';

$GLOBALS["lang"]['Incomplete'] = 'Niekompletne';

$GLOBALS["lang"]['Index'] = 'Indeks';

$GLOBALS["lang"]['India'] = 'Indie';

$GLOBALS["lang"]['Indonesia'] = 'Indonezja';

$GLOBALS["lang"]['Info'] = 'Informacja';

$GLOBALS["lang"]['Informational'] = 'Informacja';

$GLOBALS["lang"]['initial_size'] = 'Początkowy rozmiar';

$GLOBALS["lang"]['Initial Size'] = 'Początkowy rozmiar';

$GLOBALS["lang"]['inode'] = 'Inode';

$GLOBALS["lang"]['Inode'] = 'Inode';

$GLOBALS["lang"]['Input Type'] = 'Typ wejścia';

$GLOBALS["lang"]['inputs'] = 'Wejście';

$GLOBALS["lang"]['Inputs'] = 'Wejście';

$GLOBALS["lang"]['Insane'] = 'Szaleństwo';

$GLOBALS["lang"]['Insert example data and discover all that Open-AudIT can tell you.'] = 'Wstaw przykładowe dane i odkryj wszystko, co Open- Audit może Ci powiedzieć.';

$GLOBALS["lang"]['Insert your Purchased license Key'] = 'Wstaw Zakupiona licencja Klucz';

$GLOBALS["lang"]['install'] = 'Instalacja';

$GLOBALS["lang"]['Install'] = 'Instalacja';

$GLOBALS["lang"]['install_date'] = 'Zainstaluj datę';

$GLOBALS["lang"]['Install Date'] = 'Zainstaluj datę';

$GLOBALS["lang"]['install_directory'] = 'Zainstaluj katalog';

$GLOBALS["lang"]['Install Directory'] = 'Zainstaluj katalog';

$GLOBALS["lang"]['Install OpenScap if required'] = 'Zainstaluj OpenScap w razie potrzeby';

$GLOBALS["lang"]['install_source'] = 'Zainstaluj źródło';

$GLOBALS["lang"]['Install Source'] = 'Zainstaluj źródło';

$GLOBALS["lang"]['installed_by'] = 'Zainstalowane przez';

$GLOBALS["lang"]['Installed By'] = 'Zainstalowane przez';

$GLOBALS["lang"]['installed_on'] = 'Zainstalowane';

$GLOBALS["lang"]['Installed On'] = 'Zainstalowane';

$GLOBALS["lang"]['Installing on Linux'] = 'Instalacja na Linuksie';

$GLOBALS["lang"]['Installing on MacOS'] = 'Instalacja na MacOS';

$GLOBALS["lang"]['Installing on Windows'] = 'Instalacja w systemie Windows';

$GLOBALS["lang"]['instance'] = 'Sąd';

$GLOBALS["lang"]['Instance'] = 'Sąd';

$GLOBALS["lang"]['instance_ident'] = 'Sąd Ident';

$GLOBALS["lang"]['Instance Ident'] = 'Sąd Ident';

$GLOBALS["lang"]['instance_options'] = 'Opcje dotyczące kapitału';

$GLOBALS["lang"]['Instance Options'] = 'Opcje dotyczące kapitału';

$GLOBALS["lang"]['instance_provider'] = 'Dostawca informacji';

$GLOBALS["lang"]['Instance Provider'] = 'Dostawca informacji';

$GLOBALS["lang"]['instance_reservation_ident'] = 'Zastrzeżenie Ident';

$GLOBALS["lang"]['Instance Reservation Ident'] = 'Zastrzeżenie Ident';

$GLOBALS["lang"]['instance_state'] = 'Państwo Sądu';

$GLOBALS["lang"]['Instance State'] = 'Państwo Sądu';

$GLOBALS["lang"]['instance_tags'] = 'Znaczniki obecności';

$GLOBALS["lang"]['Instance Tags'] = 'Znaczniki obecności';

$GLOBALS["lang"]['instance_type'] = 'Rodzaj strony';

$GLOBALS["lang"]['Instance Type'] = 'Rodzaj strony';

$GLOBALS["lang"]['Integer'] = 'Integer';

$GLOBALS["lang"]['Integration'] = 'Integracja';

$GLOBALS["lang"]['integrations'] = 'Integracje';

$GLOBALS["lang"]['Integrations'] = 'Integracje';

$GLOBALS["lang"]['integrations_id'] = 'Identyfikator integracji';

$GLOBALS["lang"]['Integrations ID'] = 'Identyfikator integracji';

$GLOBALS["lang"]['integrations_log'] = 'Dziennik integracji';

$GLOBALS["lang"]['Integrations Log'] = 'Dziennik integracji';

$GLOBALS["lang"]['interface'] = 'Interfejs';

$GLOBALS["lang"]['Interface'] = 'Interfejs';

$GLOBALS["lang"]['interface_id'] = 'Identyfikator interfejsu';

$GLOBALS["lang"]['Interface ID'] = 'Identyfikator interfejsu';

$GLOBALS["lang"]['interface_type'] = 'Typ interfejsu';

$GLOBALS["lang"]['Interface Type'] = 'Typ interfejsu';

$GLOBALS["lang"]['Internal'] = 'Wewnętrzne';

$GLOBALS["lang"]['Internal Field Name'] = 'Nazwa pola wewnętrznego';

$GLOBALS["lang"]['Internal ID'] = 'Identyfikator wewnętrzny';

$GLOBALS["lang"]['Internal JSON array of valid access tokens for this user.'] = 'Wewnętrzna tablica JSON ważnych żetonów dostępu dla tego użytkownika.';

$GLOBALS["lang"]['Introduction'] = 'Wprowadzenie';

$GLOBALS["lang"]['invoice'] = 'Faktura';

$GLOBALS["lang"]['Invoice'] = 'Faktura';

$GLOBALS["lang"]['invoice_id'] = 'Identyfikator faktury';

$GLOBALS["lang"]['Invoice ID'] = 'Identyfikator faktury';

$GLOBALS["lang"]['invoice_item'] = 'Pozycja na fakturze';

$GLOBALS["lang"]['Invoice Item'] = 'Pozycja na fakturze';

$GLOBALS["lang"]['ios_version'] = 'Wersja Ios';

$GLOBALS["lang"]['Ios Version'] = 'Wersja Ios';

$GLOBALS["lang"]['ip_address_external_a'] = 'Adres IP zewnętrzny A';

$GLOBALS["lang"]['Ip Address External A'] = 'Adres IP zewnętrzny A';

$GLOBALS["lang"]['ip_address_external_b'] = 'Adres IP zewnętrzny B';

$GLOBALS["lang"]['Ip Address External B'] = 'Adres IP zewnętrzny B';

$GLOBALS["lang"]['ip_address_internal_a'] = 'Adres IP wewnętrzny A';

$GLOBALS["lang"]['Ip Address Internal A'] = 'Adres IP wewnętrzny A';

$GLOBALS["lang"]['ip_address_internal_b'] = 'Adres IP wewnętrzny B';

$GLOBALS["lang"]['Ip Address Internal B'] = 'Adres IP wewnętrzny B';

$GLOBALS["lang"]['ip_all_count'] = 'Ip';

$GLOBALS["lang"]['Ip All Count'] = 'Ip';

$GLOBALS["lang"]['ip_audited_count'] = 'Liczba kontrolowanych Ip';

$GLOBALS["lang"]['Ip Audited Count'] = 'Liczba kontrolowanych Ip';

$GLOBALS["lang"]['ip_discovered_count'] = 'Ip Odkryta liczba';

$GLOBALS["lang"]['Ip Discovered Count'] = 'Ip Odkryta liczba';

$GLOBALS["lang"]['ip_enabled'] = 'Włączone IP';

$GLOBALS["lang"]['Ip Enabled'] = 'Włączone IP';

$GLOBALS["lang"]['ip_responding_count'] = 'Liczba odpowiedzi IP';

$GLOBALS["lang"]['Ip Responding Count'] = 'Liczba odpowiedzi IP';

$GLOBALS["lang"]['ip_scanned_count'] = 'Liczba skanowanych Ip';

$GLOBALS["lang"]['Ip Scanned Count'] = 'Liczba skanowanych Ip';

$GLOBALS["lang"]['Iran'] = 'Iran';

$GLOBALS["lang"]['Iraq'] = 'Irak';

$GLOBALS["lang"]['Ireland'] = 'Irlandia';

$GLOBALS["lang"]['Is FRU'] = 'Czy FRU';

$GLOBALS["lang"]['is_fru'] = 'Czy Fru';

$GLOBALS["lang"]['Is Fru'] = 'Czy Fru';

$GLOBALS["lang"]['Is the NMIS server local (on this Open-AudIT server) or remote?'] = 'Czy serwer NMIS jest lokalny (na tym serwerze Open- Audit) czy zdalny?';

$GLOBALS["lang"]['Is this account active? If set to <code>n</code>, the user cannot logon.'] = 'Czy to konto jest aktywne? Jeśli ustawiono <code>n</code>, użytkownik nie może logować.';

$GLOBALS["lang"]['Is this query restricted to licensed customers.'] = 'Czy to zapytanie jest ograniczone do licencjonowanych klientów.';

$GLOBALS["lang"]['Is this task enabled (y/n).'] = 'Czy to zadanie jest włączone (y / n).';

$GLOBALS["lang"]['Isle of Man'] = 'Wyspa Man';

$GLOBALS["lang"]['Israel'] = 'Izrael';

$GLOBALS["lang"]['Issue'] = 'Wydanie';

$GLOBALS["lang"]['issuer'] = 'Emitent';

$GLOBALS["lang"]['Issuer'] = 'Emitent';

$GLOBALS["lang"]['issuer_name'] = 'Nazwa emitenta';

$GLOBALS["lang"]['Issuer Name'] = 'Nazwa emitenta';

$GLOBALS["lang"]['Issues'] = 'Kwestie';

$GLOBALS["lang"]['Italy'] = 'Włochy';

$GLOBALS["lang"]['Items not in Baseline'] = 'Pozycje nieujęte w pozycji wyjściowej';

$GLOBALS["lang"]['JSON'] = 'JSON';

$GLOBALS["lang"]['JSON to Import'] = 'JSON do importu';

$GLOBALS["lang"]['Jamaica'] = 'Jamajka';

$GLOBALS["lang"]['January'] = 'Styczeń';

$GLOBALS["lang"]['Japan'] = 'Japonia';

$GLOBALS["lang"]['Jersey'] = 'Jersey';

$GLOBALS["lang"]['Jordan'] = 'Jordania';

$GLOBALS["lang"]['July'] = 'Lipiec';

$GLOBALS["lang"]['June'] = 'Czerwiec';

$GLOBALS["lang"]['Kazakhstan'] = 'Kazachstan';

$GLOBALS["lang"]['Kenya'] = 'Kenia';

$GLOBALS["lang"]['kernel_version'] = 'Wersja jądra';

$GLOBALS["lang"]['Kernel Version'] = 'Wersja jądra';

$GLOBALS["lang"]['Key'] = 'Klucz';

$GLOBALS["lang"]['Key Password (optional)'] = 'Hasło kluczowe (opcjonalne)';

$GLOBALS["lang"]['keys'] = 'Klucze';

$GLOBALS["lang"]['Keys'] = 'Klucze';

$GLOBALS["lang"]['Kiribati'] = 'Kiribati';

$GLOBALS["lang"]['Korea'] = 'Korea';

$GLOBALS["lang"]['Kuwait'] = 'Kuwejt';

$GLOBALS["lang"]['Kyrgyz Republic'] = 'Republika Kirgiska';

$GLOBALS["lang"]['lang'] = 'Lang';

$GLOBALS["lang"]['Lang'] = 'Lang';

$GLOBALS["lang"]['language'] = 'Język';

$GLOBALS["lang"]['Language'] = 'Język';

$GLOBALS["lang"]['Lao'] = 'Lao';

$GLOBALS["lang"]['last_changed'] = 'Ostatnia zmiana';

$GLOBALS["lang"]['Last Changed'] = 'Ostatnia zmiana';

$GLOBALS["lang"]['last_finished'] = 'Ostatni zakończony';

$GLOBALS["lang"]['Last Finished'] = 'Ostatni zakończony';

$GLOBALS["lang"]['last_logon'] = 'Ostatni logarytm';

$GLOBALS["lang"]['Last Logon'] = 'Ostatni logarytm';

$GLOBALS["lang"]['Last Name'] = 'Nazwisko';

$GLOBALS["lang"]['last_os_update'] = 'Ostatnia aktualizacja Os';

$GLOBALS["lang"]['Last Os Update'] = 'Ostatnia aktualizacja Os';

$GLOBALS["lang"]['last_result'] = 'Ostatni wynik';

$GLOBALS["lang"]['Last Result'] = 'Ostatni wynik';

$GLOBALS["lang"]['last_run'] = 'Ostatni bieg';

$GLOBALS["lang"]['Last Run'] = 'Ostatni bieg';

$GLOBALS["lang"]['last_seen'] = 'Ostatnio widziana';

$GLOBALS["lang"]['Last Seen'] = 'Ostatnio widziana';

$GLOBALS["lang"]['last_seen_by'] = 'Ostatnio widziana Przez';

$GLOBALS["lang"]['Last Seen By'] = 'Ostatnio widziana Przez';

$GLOBALS["lang"]['last_user'] = 'Ostatni użytkownik';

$GLOBALS["lang"]['Last User'] = 'Ostatni użytkownik';

$GLOBALS["lang"]['lastModified'] = 'LastZmodyfikowana';

$GLOBALS["lang"]['LastModified'] = 'LastZmodyfikowana';

$GLOBALS["lang"]['latitude'] = 'Szerokość geograficzna';

$GLOBALS["lang"]['Latitude'] = 'Szerokość geograficzna';

$GLOBALS["lang"]['Latvia'] = 'Łotwa';

$GLOBALS["lang"]['Layout'] = 'Układ';

$GLOBALS["lang"]['ldap'] = 'Ldap';

$GLOBALS["lang"]['Ldap'] = 'Ldap';

$GLOBALS["lang"]['ldap_base_dn'] = 'Ldap Base Dn';

$GLOBALS["lang"]['Ldap Base Dn'] = 'Ldap Base Dn';

$GLOBALS["lang"]['ldap_dn_account'] = 'Konto Ldap Dn';

$GLOBALS["lang"]['Ldap Dn Account'] = 'Konto Ldap Dn';

$GLOBALS["lang"]['ldap_dn_password'] = 'Hasło Ldap Dn';

$GLOBALS["lang"]['Ldap Dn Password'] = 'Hasło Ldap Dn';

$GLOBALS["lang"]['Learn About'] = 'Dowiedz się więcej';

$GLOBALS["lang"]['Learn More'] = 'Dowiedz się więcej';

$GLOBALS["lang"]['lease_expiry_date'] = 'Data wygaśnięcia dzierżawy';

$GLOBALS["lang"]['Lease Expiry Date'] = 'Data wygaśnięcia dzierżawy';

$GLOBALS["lang"]['Lebanon'] = 'Liban';

$GLOBALS["lang"]['legal_requirements'] = 'Wymogi prawne';

$GLOBALS["lang"]['Legal Requirements'] = 'Wymogi prawne';

$GLOBALS["lang"]['Lesotho'] = 'Lesotho';

$GLOBALS["lang"]['Less Than'] = 'Mniej niż';

$GLOBALS["lang"]['Less Than or Equals'] = 'Mniejsze niż lub równe';

$GLOBALS["lang"]['level'] = 'Poziom';

$GLOBALS["lang"]['Level'] = 'Poziom';

$GLOBALS["lang"]['Level of privileges needed to exploit (None, Low, High).'] = 'Poziom uprawnień potrzebnych do wykorzystania (Brak, niski, wysoki).';

$GLOBALS["lang"]['Liberia'] = 'Liberia';

$GLOBALS["lang"]['Libyan Arab Jamahiriya'] = 'Libyan Arab Jamahiriya';

$GLOBALS["lang"]['License'] = 'Licencja';

$GLOBALS["lang"]['License Key'] = 'Klucz licencyjny';

$GLOBALS["lang"]['License Required'] = 'Wymagana licencja';

$GLOBALS["lang"]['licenses'] = 'Licencje';

$GLOBALS["lang"]['Licenses'] = 'Licencje';

$GLOBALS["lang"]['Liechtenstein'] = 'Liechtenstein';

$GLOBALS["lang"]['Like'] = 'Jak';

$GLOBALS["lang"]['limit'] = 'Granica';

$GLOBALS["lang"]['Limit'] = 'Granica';

$GLOBALS["lang"]['Limit the query to the first X items.'] = 'Ogranicz zapytanie do pierwszych elementów X.';

$GLOBALS["lang"]['Limited to 100 rows.'] = 'Ograniczona do 100 rzędów.';

$GLOBALS["lang"]['line_amount'] = 'Kwota linii';

$GLOBALS["lang"]['Line Amount'] = 'Kwota linii';

$GLOBALS["lang"]['Line Graph'] = 'Wykres linii';

$GLOBALS["lang"]['line_number_a'] = 'Numer linii A';

$GLOBALS["lang"]['Line Number A'] = 'Numer linii A';

$GLOBALS["lang"]['line_number_b'] = 'Linia numer B';

$GLOBALS["lang"]['Line Number B'] = 'Linia numer B';

$GLOBALS["lang"]['line_text'] = 'Tekst wiersza';

$GLOBALS["lang"]['Line Text'] = 'Tekst wiersza';

$GLOBALS["lang"]['link'] = 'Związek';

$GLOBALS["lang"]['Link'] = 'Związek';

$GLOBALS["lang"]['Link (Advanced)'] = 'Związek (zaawansowany)';

$GLOBALS["lang"]['Linked Files'] = 'Powiązane pliki';

$GLOBALS["lang"]['links'] = 'Linki';

$GLOBALS["lang"]['Links'] = 'Linki';

$GLOBALS["lang"]['Links this discovery to the associated cloud (if required). Links to <code>clouds.id</code>.'] = 'Łączy to odkrycie z powiązaną chmurą (w razie potrzeby). Linki do <code>clouds.id</code>.';

$GLOBALS["lang"]['Links to <code>discovery_scan_options.id</code>.'] = 'Linki do <code>discovery_scan_options.id</code>.';

$GLOBALS["lang"]['Links to <code>standards.id</code>'] = 'Linki do <code>standards.id</code>';

$GLOBALS["lang"]['Links to <standards_policies.id</code>'] = 'Linki do <standards_policies.id< code=""></standards_policies.id<>';

$GLOBALS["lang"]['Linux'] = 'Linux';

$GLOBALS["lang"]['List'] = 'Lista';

$GLOBALS["lang"]['list_table_format'] = 'Lista formatu tabeli';

$GLOBALS["lang"]['List Table Format'] = 'Lista formatu tabeli';

$GLOBALS["lang"]['Lithuania'] = 'Litwa';

$GLOBALS["lang"]['Load Balancing'] = 'Zbilansowanie obciążenia';

$GLOBALS["lang"]['Local'] = 'Lokalne';

$GLOBALS["lang"]['Local Area Network'] = 'Lokalna sieć obszarowa';

$GLOBALS["lang"]['local_port'] = 'Port lokalny';

$GLOBALS["lang"]['Local Port'] = 'Port lokalny';

$GLOBALS["lang"]['Localhost'] = 'Localhost';

$GLOBALS["lang"]['Localisation'] = 'Lokalizacja';

$GLOBALS["lang"]['Location'] = 'Lokalizacja';

$GLOBALS["lang"]['Location A'] = 'Lokalizacja A';

$GLOBALS["lang"]['Location B'] = 'Lokalizacja B';

$GLOBALS["lang"]['location_id'] = 'Identyfikator lokalizacji';

$GLOBALS["lang"]['Location ID'] = 'Identyfikator lokalizacji';

$GLOBALS["lang"]['location_id_a'] = 'Identyfikator lokalizacji A';

$GLOBALS["lang"]['Location ID A'] = 'Identyfikator lokalizacji A';

$GLOBALS["lang"]['location_id_b'] = 'Identyfikator lokalizacji B';

$GLOBALS["lang"]['Location ID B'] = 'Identyfikator lokalizacji B';

$GLOBALS["lang"]['location_latitude'] = 'Szerokość położenia';

$GLOBALS["lang"]['Location Latitude'] = 'Szerokość położenia';

$GLOBALS["lang"]['location_level'] = 'Poziom lokalizacji';

$GLOBALS["lang"]['Location Level'] = 'Poziom lokalizacji';

$GLOBALS["lang"]['location_longitude'] = 'Długość geograficzna';

$GLOBALS["lang"]['Location Longitude'] = 'Długość geograficzna';

$GLOBALS["lang"]['location_rack'] = 'Mapa lokalizacji';

$GLOBALS["lang"]['Location Rack'] = 'Mapa lokalizacji';

$GLOBALS["lang"]['location_rack_position'] = 'Lokalizacja Rack Pozycja';

$GLOBALS["lang"]['Location Rack Position'] = 'Lokalizacja Rack Pozycja';

$GLOBALS["lang"]['location_rack_size'] = 'Rozmiar siatki lokalizacji';

$GLOBALS["lang"]['Location Rack Size'] = 'Rozmiar siatki lokalizacji';

$GLOBALS["lang"]['location_room'] = 'Lokalizacja';

$GLOBALS["lang"]['Location Room'] = 'Lokalizacja';

$GLOBALS["lang"]['location_suite'] = 'Lokalizacja Suite';

$GLOBALS["lang"]['Location Suite'] = 'Lokalizacja Suite';

$GLOBALS["lang"]['locations'] = 'Lokalizacja';

$GLOBALS["lang"]['Locations'] = 'Lokalizacja';

$GLOBALS["lang"]['Locations in this'] = 'Lokalizacje w tym';

$GLOBALS["lang"]['log'] = 'Dziennik';

$GLOBALS["lang"]['Log'] = 'Dziennik';

$GLOBALS["lang"]['log_format'] = 'Format dziennika';

$GLOBALS["lang"]['Log Format'] = 'Format dziennika';

$GLOBALS["lang"]['log_path'] = 'Ścieżka dziennika';

$GLOBALS["lang"]['Log Path'] = 'Ścieżka dziennika';

$GLOBALS["lang"]['log_rotation'] = 'Rotacja dziennika';

$GLOBALS["lang"]['Log Rotation'] = 'Rotacja dziennika';

$GLOBALS["lang"]['log_status'] = 'Stan dziennika';

$GLOBALS["lang"]['Log Status'] = 'Stan dziennika';

$GLOBALS["lang"]['Logical Cores '] = 'Tryby logiczne ';

$GLOBALS["lang"]['logical_count'] = 'Liczba logiczna';

$GLOBALS["lang"]['Logical Count'] = 'Liczba logiczna';

$GLOBALS["lang"]['Logout'] = 'Wyloguj';

$GLOBALS["lang"]['Logs'] = 'Logi';

$GLOBALS["lang"]['longitude'] = 'Długość';

$GLOBALS["lang"]['Longitude'] = 'Długość';

$GLOBALS["lang"]['low'] = 'Niski';

$GLOBALS["lang"]['Low'] = 'Niski';

$GLOBALS["lang"]['Lower Case'] = 'Niższy przypadek';

$GLOBALS["lang"]['Luxembourg'] = 'Luksemburg';

$GLOBALS["lang"]['MAC Address'] = 'Adres MAC';

$GLOBALS["lang"]['MAC Manufacturer'] = 'MAC Wytwórca';

$GLOBALS["lang"]['mac'] = 'Mac';

$GLOBALS["lang"]['Mac'] = 'Mac';

$GLOBALS["lang"]['Mac Address'] = 'Adres Mac';

$GLOBALS["lang"]['MacOS'] = 'MacOS';

$GLOBALS["lang"]['Macao'] = 'Makao';

$GLOBALS["lang"]['Macedonia'] = 'Macedonia';

$GLOBALS["lang"]['Madagascar'] = 'Madagaskar';

$GLOBALS["lang"]['maintenance_expires'] = 'Czas utrzymywania';

$GLOBALS["lang"]['Maintenance Expires'] = 'Czas utrzymywania';

$GLOBALS["lang"]['Make My Default Dashboard'] = 'Zrób moją domyślną deskę rozdzielczą';

$GLOBALS["lang"]['Make this install a Collector'] = 'Zrób to zainstalować kolektor';

$GLOBALS["lang"]['Malawi'] = 'Malawi';

$GLOBALS["lang"]['Malaysia'] = 'Malezja';

$GLOBALS["lang"]['Maldives'] = 'Malediwy';

$GLOBALS["lang"]['Mali'] = 'Mali';

$GLOBALS["lang"]['Malta'] = 'Malta';

$GLOBALS["lang"]['Manage'] = 'Zarządzanie';

$GLOBALS["lang"]['Manage Licenses'] = 'Zarządzanie licencjami';

$GLOBALS["lang"]['Manage in NMIS'] = 'Zarządzanie w NMIS';

$GLOBALS["lang"]['Managed'] = 'Zarządzanie';

$GLOBALS["lang"]['managed_by'] = 'Zarządzane przez';

$GLOBALS["lang"]['Managed By'] = 'Zarządzane przez';

$GLOBALS["lang"]['Manual Input'] = 'Ręczne wejście';

$GLOBALS["lang"]['Manually set by user, defaults to Production.'] = 'Ręcznie ustawiony przez użytkownika, domyślnie do produkcji.';

$GLOBALS["lang"]['Manually set by user.'] = 'Ręcznie ustawiony przez użytkownika.';

$GLOBALS["lang"]['manufacture_date'] = 'Data produkcji';

$GLOBALS["lang"]['Manufacture Date'] = 'Data produkcji';

$GLOBALS["lang"]['manufacturer'] = 'Wytwórca';

$GLOBALS["lang"]['Manufacturer'] = 'Wytwórca';

$GLOBALS["lang"]['manufacturer_code'] = 'Kod producenta';

$GLOBALS["lang"]['Manufacturer Code'] = 'Kod producenta';

$GLOBALS["lang"]['Map'] = 'Mapa';

$GLOBALS["lang"]['maps'] = 'Mapy';

$GLOBALS["lang"]['Maps'] = 'Mapy';

$GLOBALS["lang"]['March'] = 'Marzec';

$GLOBALS["lang"]['Marshall Islands'] = 'Wyspy Marshalla';

$GLOBALS["lang"]['Martinique'] = 'Martynika';

$GLOBALS["lang"]['mask'] = 'Maska';

$GLOBALS["lang"]['Mask'] = 'Maska';

$GLOBALS["lang"]['Match'] = 'Dopasuj';

$GLOBALS["lang"]['match_options'] = 'Opcje dopasowania';

$GLOBALS["lang"]['Match Options'] = 'Opcje dopasowania';

$GLOBALS["lang"]['match_string'] = 'String dopasowania';

$GLOBALS["lang"]['Match String'] = 'String dopasowania';

$GLOBALS["lang"]['Matching Attribute'] = 'Atrybut dopasowania';

$GLOBALS["lang"]['maturity_level'] = 'Termin zapadalności';

$GLOBALS["lang"]['Maturity Level'] = 'Termin zapadalności';

$GLOBALS["lang"]['maturity_score'] = 'Ocena dojrzałości';

$GLOBALS["lang"]['Maturity Score'] = 'Ocena dojrzałości';

$GLOBALS["lang"]['Mauritania'] = 'Mauretania';

$GLOBALS["lang"]['Mauritius'] = 'Mauritius';

$GLOBALS["lang"]['max_file_size'] = 'Maksymalny rozmiar pliku';

$GLOBALS["lang"]['Max File Size'] = 'Maksymalny rozmiar pliku';

$GLOBALS["lang"]['Max Length'] = 'Maksymalna długość';

$GLOBALS["lang"]['max_size'] = 'Maksymalny rozmiar';

$GLOBALS["lang"]['Max Size'] = 'Maksymalny rozmiar';

$GLOBALS["lang"]['May'] = 'maj';

$GLOBALS["lang"]['Mayotte'] = 'Majotta';

$GLOBALS["lang"]['Measures the likelihood of the vulnerability being attacked, and is based on the current state of exploit techniques, exploit code availability, or active, “in-the-wild” exploitation.'] = 'Mierzy prawdopodobieństwo ataku na podatność na zagrożenia i opiera się na aktualnym stanie wykorzystania technik, wykorzystania dostępności kodu lub aktywnej "w dzikiej" eksploatacji.';

$GLOBALS["lang"]['medium'] = 'Średni';

$GLOBALS["lang"]['Medium'] = 'Średni';

$GLOBALS["lang"]['members'] = 'Członkowie';

$GLOBALS["lang"]['Members'] = 'Członkowie';

$GLOBALS["lang"]['memory'] = 'Pamięć';

$GLOBALS["lang"]['Memory'] = 'Pamięć';

$GLOBALS["lang"]['memory_count'] = 'Liczba pamięci';

$GLOBALS["lang"]['Memory Count'] = 'Liczba pamięci';

$GLOBALS["lang"]['memory_slot_count'] = 'Liczba gniazd pamięci';

$GLOBALS["lang"]['Memory Slot Count'] = 'Liczba gniazd pamięci';

$GLOBALS["lang"]['menu_category'] = 'Kategoria menu';

$GLOBALS["lang"]['Menu Category'] = 'Kategoria menu';

$GLOBALS["lang"]['menu_display'] = 'Wyświetlacz menu';

$GLOBALS["lang"]['Menu Display'] = 'Wyświetlacz menu';

$GLOBALS["lang"]['message'] = 'Wiadomość';

$GLOBALS["lang"]['Message'] = 'Wiadomość';

$GLOBALS["lang"]['meta_last_changed'] = 'Meta Last Changed';

$GLOBALS["lang"]['Meta Last Changed'] = 'Meta Last Changed';

$GLOBALS["lang"]['metric'] = 'Metric';

$GLOBALS["lang"]['Metric'] = 'Metric';

$GLOBALS["lang"]['Metropolitan Area Network'] = 'Sieć obszarów metropolitalnych';

$GLOBALS["lang"]['Mexico'] = 'Meksyk';

$GLOBALS["lang"]['Micronesia'] = 'Mikronezja';

$GLOBALS["lang"]['Microsoft Azure Fields'] = 'Microsoft Azure Fields';

$GLOBALS["lang"]['microtime'] = 'Mikroczas';

$GLOBALS["lang"]['Microtime'] = 'Mikroczas';

$GLOBALS["lang"]['minute'] = 'Minuta';

$GLOBALS["lang"]['Minute'] = 'Minuta';

$GLOBALS["lang"]['Minutes Since last Audit are Greater than'] = 'Minuty Od ostatniego audytu są większe niż';

$GLOBALS["lang"]['model'] = 'Wzór';

$GLOBALS["lang"]['Model'] = 'Wzór';

$GLOBALS["lang"]['model_family'] = 'Model Family';

$GLOBALS["lang"]['Model Family'] = 'Model Family';

$GLOBALS["lang"]['module'] = 'Moduł';

$GLOBALS["lang"]['Module'] = 'Moduł';

$GLOBALS["lang"]['module_index'] = 'Wskaźnik modułu';

$GLOBALS["lang"]['Module Index'] = 'Wskaźnik modułu';

$GLOBALS["lang"]['Modules'] = 'Moduły';

$GLOBALS["lang"]['Moldova'] = 'Mołdawia';

$GLOBALS["lang"]['Monaco'] = 'Monako';

$GLOBALS["lang"]['Monday'] = 'Poniedziałek';

$GLOBALS["lang"]['Mongolia'] = 'Mongolia';

$GLOBALS["lang"]['monitor'] = 'Monitor';

$GLOBALS["lang"]['Monitor'] = 'Monitor';

$GLOBALS["lang"]['Montenegro'] = 'Czarnogóra';

$GLOBALS["lang"]['month'] = 'Miesiąc';

$GLOBALS["lang"]['Month'] = 'Miesiąc';

$GLOBALS["lang"]['Montserrat'] = 'Montserrat';

$GLOBALS["lang"]['Morocco'] = 'Maroko';

$GLOBALS["lang"]['motherboard'] = 'Płyta główna';

$GLOBALS["lang"]['Motherboard'] = 'Płyta główna';

$GLOBALS["lang"]['mount_point'] = 'Punkt montowania';

$GLOBALS["lang"]['Mount Point'] = 'Punkt montowania';

$GLOBALS["lang"]['mount_type'] = 'Typ montowania';

$GLOBALS["lang"]['Mount Type'] = 'Typ montowania';

$GLOBALS["lang"]['Mozambique'] = 'Mozambik';

$GLOBALS["lang"]['Must Respond to Ping'] = 'Musi odpowiedzieć na Ping';

$GLOBALS["lang"]['Myanmar'] = 'Myanmar';

$GLOBALS["lang"]['N+1'] = 'N + 1';

$GLOBALS["lang"]['N+M'] = 'N + M';

$GLOBALS["lang"]['N-to-1'] = 'N- to-1';

$GLOBALS["lang"]['N-to-N'] = 'N-to-N';

$GLOBALS["lang"]['NMIS Business Service'] = 'NMIS Business Service';

$GLOBALS["lang"]['NMIS Customer'] = 'Klient NMIS';

$GLOBALS["lang"]['NMIS Device Options'] = 'Opcje urządzeń NMIS';

$GLOBALS["lang"]['NMIS Device Selection'] = 'Wybór urządzenia NMIS';

$GLOBALS["lang"]['NMIS Field Name'] = 'Nazwa pola NMIS';

$GLOBALS["lang"]['NMIS Field Type'] = 'Typ pola NMIS';

$GLOBALS["lang"]['NMIS Group'] = 'Grupa NMIS';

$GLOBALS["lang"]['NMIS Poller'] = 'NMIS Poller';

$GLOBALS["lang"]['NMIS Role'] = 'NMIS Rola';

$GLOBALS["lang"]['NOTE - You can prevent plain text credentials being displayed below by setting the configuration item for <code>decrypt_credentials</code> to <code>n</code>.'] = 'UWAGA - Możesz zapobiec wyświetlaniu poniżej prostych referencji tekstowych poprzez ustawienie pozycji konfiguracyjnej dla <code>decrypt_credentials</code> do <code>n</code>.';

$GLOBALS["lang"]['name'] = 'Nazwa';

$GLOBALS["lang"]['Name'] = 'Nazwa';

$GLOBALS["lang"]['Namibia'] = 'Namibia';

$GLOBALS["lang"]['Nauru'] = 'Nauru';

$GLOBALS["lang"]['Nepal'] = 'Nepal';

$GLOBALS["lang"]['net_index'] = 'Indeks netto';

$GLOBALS["lang"]['Net Index'] = 'Indeks netto';

$GLOBALS["lang"]['Netherlands Antilles'] = 'Antyle Holenderskie';

$GLOBALS["lang"]['Netherlands the'] = 'Niderlandy';

$GLOBALS["lang"]['netmask'] = 'Maska sieci';

$GLOBALS["lang"]['Netmask'] = 'Maska sieci';

$GLOBALS["lang"]['netstat'] = 'Netstat';

$GLOBALS["lang"]['Netstat'] = 'Netstat';

$GLOBALS["lang"]['Netstat Policies'] = 'Polityka Netstat';

$GLOBALS["lang"]['Network'] = 'Sieć';

$GLOBALS["lang"]['network_address'] = 'Adres sieci';

$GLOBALS["lang"]['Network Address'] = 'Adres sieci';

$GLOBALS["lang"]['network_domain'] = 'Domena sieci';

$GLOBALS["lang"]['Network Domain'] = 'Domena sieci';

$GLOBALS["lang"]['Network Types'] = 'Rodzaje sieci';

$GLOBALS["lang"]['networks'] = 'Sieci';

$GLOBALS["lang"]['Networks'] = 'Sieci';

$GLOBALS["lang"]['Networks Generated By'] = 'Sieci generowane przez';

$GLOBALS["lang"]['Networks using a CIDR Mask of'] = 'Sieci wykorzystujące maskę CIDR';

$GLOBALS["lang"]['New Building Name'] = 'Nowa nazwa budynku';

$GLOBALS["lang"]['New Caledonia'] = 'Nowa Kaledonia';

$GLOBALS["lang"]['New Floor Name'] = 'Nazwa nowego piętra';

$GLOBALS["lang"]['New Room Name'] = 'Nowa nazwa pokoju';

$GLOBALS["lang"]['New Row Name'] = 'Nazwa nowego wiersza';

$GLOBALS["lang"]['New Zealand'] = 'Nowa Zelandia';

$GLOBALS["lang"]['News'] = 'Aktualności';

$GLOBALS["lang"]['next_hop'] = 'Następny';

$GLOBALS["lang"]['Next Hop'] = 'Następny';

$GLOBALS["lang"]['next_run'] = 'Następny';

$GLOBALS["lang"]['Next Run'] = 'Następny';

$GLOBALS["lang"]['Nicaragua'] = 'Nikaragua';

$GLOBALS["lang"]['Niger'] = 'Niger';

$GLOBALS["lang"]['Nigeria'] = 'Nigeria';

$GLOBALS["lang"]['Niue'] = 'Niue';

$GLOBALS["lang"]['nmap'] = 'Nmap';

$GLOBALS["lang"]['Nmap'] = 'Nmap';

$GLOBALS["lang"]['Nmap Port Scanning Responses'] = 'Nmap Port Scanning Responses';

$GLOBALS["lang"]['nmap_tcp_ports'] = 'Nmap Tcp Ports';

$GLOBALS["lang"]['Nmap Tcp Ports'] = 'Nmap Tcp Ports';

$GLOBALS["lang"]['nmap_udp_ports'] = 'Nmap Udp Ports';

$GLOBALS["lang"]['Nmap Udp Ports'] = 'Nmap Udp Ports';

$GLOBALS["lang"]['nmis_business_service'] = 'Nmis Business Service';

$GLOBALS["lang"]['Nmis Business Service'] = 'Nmis Business Service';

$GLOBALS["lang"]['nmis_customer'] = 'Klient Nmis';

$GLOBALS["lang"]['Nmis Customer'] = 'Klient Nmis';

$GLOBALS["lang"]['nmis_group'] = 'Grupa Nmis';

$GLOBALS["lang"]['Nmis Group'] = 'Grupa Nmis';

$GLOBALS["lang"]['nmis_manage'] = 'Nmis Zarządzanie';

$GLOBALS["lang"]['Nmis Manage'] = 'Nmis Zarządzanie';

$GLOBALS["lang"]['nmis_name'] = 'Nazwa Nmis';

$GLOBALS["lang"]['Nmis Name'] = 'Nazwa Nmis';

$GLOBALS["lang"]['nmis_notes'] = 'Nmis Uwagi';

$GLOBALS["lang"]['Nmis Notes'] = 'Nmis Uwagi';

$GLOBALS["lang"]['nmis_poller'] = 'Nmis Poller';

$GLOBALS["lang"]['Nmis Poller'] = 'Nmis Poller';

$GLOBALS["lang"]['nmis_poller_uuid'] = 'Nmis Poller Uuid';

$GLOBALS["lang"]['Nmis Poller Uuid'] = 'Nmis Poller Uuid';

$GLOBALS["lang"]['nmis_role'] = 'Nmis Role';

$GLOBALS["lang"]['Nmis Role'] = 'Nmis Role';

$GLOBALS["lang"]['No'] = 'Nie.';

$GLOBALS["lang"]['No Devices Returned'] = 'Brak zwracanych urządzeń';

$GLOBALS["lang"]['No Google Maps API Key present, you will not be able to display the map.'] = 'Brak API Map Google Kluczowy prezent, nie będziesz w stanie wyświetlić mapy.';

$GLOBALS["lang"]['No License for Professional or Enterprise'] = 'Brak licencji dla Professional lub Enterprise';

$GLOBALS["lang"]['No Results'] = 'Brak wyników';

$GLOBALS["lang"]['No data in License Key'] = 'Brak danych w kluczu licencyjnym';

$GLOBALS["lang"]['No database upgrade required at this time.'] = 'Aktualizacja bazy danych nie jest wymagana.';

$GLOBALS["lang"]['Node'] = 'Węzeł';

$GLOBALS["lang"]['None'] = 'Brak';

$GLOBALS["lang"]['Norfolk Island'] = 'Wyspa Norfolk';

$GLOBALS["lang"]['Normal'] = 'Normalny';

$GLOBALS["lang"]['Northern Mariana Islands'] = 'Mariany Północne';

$GLOBALS["lang"]['Norway'] = 'Norwegia';

$GLOBALS["lang"]['Not Applicable'] = 'Nie dotyczy';

$GLOBALS["lang"]['Not Checked'] = 'Nie sprawdzone';

$GLOBALS["lang"]['Not Equals'] = 'Nie równa się';

$GLOBALS["lang"]['Not In'] = 'Nie w';

$GLOBALS["lang"]['Not Like'] = 'Nie jak';

$GLOBALS["lang"]['Not Set'] = 'Nie ustawiono';

$GLOBALS["lang"]['Not normally used. If set, this requires the device to have an open port (as per Scan Options) to be considered responding. A MAC address, arp response or ping response is not considered sufficient to be considered responding. Useful if a router or firewall between the Open-AudIT server and target IP is responding to port scans on the IPs behalf.'] = 'Zazwyczaj nieużywane. Jeśli jest ustawione, wymaga to, aby urządzenie miało otwarty port (zgodnie z Opcjami skanowania), który będzie uważany za odpowiadający. Adres MAC, odpowiedź arp lub odpowiedź ping nie są uważane za wystarczające do uznania odpowiedzi. Przydatne, jeśli router lub firewall pomiędzy serwerem Open- Audit a docelowym IP reaguje na skanowanie portów w imieniu IP.';

$GLOBALS["lang"]['Note'] = 'Uwaga';

$GLOBALS["lang"]['Note - Selecting a parent will automatically provide access to its children (although it wont be shown here).'] = 'Notatka - Wybór rodzica automatycznie zapewni dostęp do swoich dzieci (chociaż nie zostanie pokazany tutaj).';

$GLOBALS["lang"]['Notes'] = 'Uwagi';

$GLOBALS["lang"]['notes'] = 'Uwagi';

$GLOBALS["lang"]['Notice'] = 'Informacja';

$GLOBALS["lang"]['notin'] = 'Notin';

$GLOBALS["lang"]['Notin'] = 'Notin';

$GLOBALS["lang"]['November'] = 'Listopad';

$GLOBALS["lang"]['nvd_json'] = 'Nvd Json';

$GLOBALS["lang"]['Nvd Json'] = 'Nvd Json';

$GLOBALS["lang"]['ORDER BY'] = 'POSTANOWIENIE';

$GLOBALS["lang"]['OS'] = 'OS';

$GLOBALS["lang"]['OS Families'] = 'OS Rodziny';

$GLOBALS["lang"]['OS Family'] = 'Rodzina OS';

$GLOBALS["lang"]['OS Group'] = 'Grupa OS';

$GLOBALS["lang"]['oae_manage'] = 'Oae Manage';

$GLOBALS["lang"]['Oae Manage'] = 'Oae Manage';

$GLOBALS["lang"]['object_ident'] = 'Identyfikator obiektu';

$GLOBALS["lang"]['Object Ident'] = 'Identyfikator obiektu';

$GLOBALS["lang"]['October'] = 'październik';

$GLOBALS["lang"]['Oman'] = 'Oman Przewodniczący';

$GLOBALS["lang"]['omk_uuid'] = 'Omk Uuid';

$GLOBALS["lang"]['Omk Uuid'] = 'Omk Uuid';

$GLOBALS["lang"]['On'] = 'On';

$GLOBALS["lang"]['One of <code>3x2</code>, <code>4x2</code>, <code>4x3</code> or <code>4x4</code>.'] = 'Jeden z <code>3x2</code>, <code>4x2</code>, <code>4x3</code> lub <code>4x4</code>.';

$GLOBALS["lang"]['One of Campus Area Network, Cloud Network, Enterprise Private Network, Home Area Network, Local Area Network, Metropolitan Area Network, Passive Optical Local Area Network, Personal Area Network, Storage-Area Network, System-Area Network, Virtual Private Network, Wide Area Network, Wireless Local Area Network.'] = 'Jedna z sieci Campus Area, Cloud Network, Enterprise Private Network, Home Area Network, Local Area Network, Metropolitan Area Network, Passive Optical Local Area Network, Personal Area Network, Storage- Area Network, System- Area Network, Virtual Private Network, Wide Area Network, Wireless Local Area Network.';

$GLOBALS["lang"]['One of Development, Disaster Recovery, Evaluation, Pre-Production, Production, Testing, Training, User Acceptance Testing'] = 'Jeden z rozwoju, Odzyskiwanie katastrof, Ocena, Przedprodukcja, Produkcja, Testowanie, Szkolenie, Testowanie akceptacji użytkownika';

$GLOBALS["lang"]['One of allocated, delegated, planning, reserved, unallocated, unknown, unmanaged. Defaults to allocated.'] = 'Jeden z przydzielonych, przekazanych, zaplanowanych, zarezerwowanych, nieprzydzielonych, nieznanych, niezarządzanych. Domyślnie przydzielone.';

$GLOBALS["lang"]['One of either <code>active directory</code> or <code>openldap</code>.'] = 'Jeden z nich <code>active directory</code> lub <code>openldap</code>.';

$GLOBALS["lang"]['One of: antivirus, backup, firewall, approved, banned, ignored or other.'] = 'Jeden z: antywirusowe, backup, firewall, zatwierdzone, zakazane, ignorowane lub inne.';

$GLOBALS["lang"]['Online Documentation'] = 'Dokumentacja online';

$GLOBALS["lang"]['Open-AudIT'] = 'Open- Audit';

$GLOBALS["lang"]['Open-AudIT Community'] = 'Wspólnota Open- Audit';

$GLOBALS["lang"]['Open-AudIT Device Selection'] = 'Wybór urządzenia Open- Audit';

$GLOBALS["lang"]['Open-AudIT Enterprise'] = 'Open- Audit Enterprise';

$GLOBALS["lang"]['Open-AudIT Enterprise. High-scale flexible discovery and audit solution for large networks. All the features of Professional plus: Baselines, File Auditing, Cloud Discovery, Rack Management, Configurable Role Based Access Control including Active Directory and LDAP.'] = 'Audit Enterprise. Wysokiej skali elastyczne rozwiązanie do wykrywania i audytu dużych sieci. Wszystkie funkcje Professional plus: Basic, File Auditing, Cloud Discovery, Rack Management, Configurable Role Based Access Control w tym Active Directory i LDAP.';

$GLOBALS["lang"]['Open-AudIT Field Name'] = 'Nazwa pola Open- Audit';

$GLOBALS["lang"]['Open-AudIT Licenses'] = 'Licencje Open- Audit';

$GLOBALS["lang"]['Open-AudIT Options'] = 'Opcje Open- Audit';

$GLOBALS["lang"]['Open-AudIT Professional'] = 'Open- Audit Professional';

$GLOBALS["lang"]['Open-AudIT Professional. The world\\'] = 'Open- Audit Professional. Świat';

$GLOBALS["lang"]['Open-AudIT and Nmap'] = 'Open- Audit i Nmap';

$GLOBALS["lang"]['OpenScap is Installed'] = 'OpenScap jest zainstalowany';

$GLOBALS["lang"]['openldap_user_dn'] = 'Openldap Użytkownik Dn';

$GLOBALS["lang"]['Openldap User Dn'] = 'Openldap Użytkownik Dn';

$GLOBALS["lang"]['openldap_user_membership_attribute'] = 'Atrybut członkostwa w Openldap';

$GLOBALS["lang"]['Openldap User Membership Attribute'] = 'Atrybut członkostwa w Openldap';

$GLOBALS["lang"]['open|filtered'] = 'Otwórz blokadę 124; filtrowane';

$GLOBALS["lang"]['Open|filtered'] = 'Otwórz blokadę 124; filtrowane';

$GLOBALS["lang"]['Operating System'] = 'System operacyjny';

$GLOBALS["lang"]['Operating System Family Contains'] = 'System operacyjny Rodzina zawiera';

$GLOBALS["lang"]['Operating Systems'] = 'Systemy operacyjne';

$GLOBALS["lang"]['optical'] = 'Optyczne';

$GLOBALS["lang"]['Optical'] = 'Optyczne';

$GLOBALS["lang"]['Optimized'] = 'Zoptymalizowane';

$GLOBALS["lang"]['Optional version as audited by Open-AudIT. Use the percent sign % as a wildcard.'] = 'Opcjonalna wersja kontrolowana przez Open- Audit. Użyj znaku%% jako dzikiej karty.';

$GLOBALS["lang"]['options'] = 'Opcje';

$GLOBALS["lang"]['Options'] = 'Opcje';

$GLOBALS["lang"]['Or select from the below fields.'] = 'Albo wybierz z poniższych pól.';

$GLOBALS["lang"]['org_descendants'] = 'Osad Org';

$GLOBALS["lang"]['Org Descendants'] = 'Osad Org';

$GLOBALS["lang"]['org_id'] = 'Org ID';

$GLOBALS["lang"]['Org ID'] = 'Org ID';

$GLOBALS["lang"]['Organisation'] = 'Organizacja';

$GLOBALS["lang"]['organisation'] = 'Organizacja';

$GLOBALS["lang"]['Organisation Descendants'] = 'Pomocnicy organizacyjni';

$GLOBALS["lang"]['Organisations'] = 'Organizacje';

$GLOBALS["lang"]['orgs'] = 'Orki';

$GLOBALS["lang"]['Orgs'] = 'Orki';

$GLOBALS["lang"]['Orgs Name'] = 'Orgs Name';

$GLOBALS["lang"]['orientation'] = 'Orientacja';

$GLOBALS["lang"]['Orientation'] = 'Orientacja';

$GLOBALS["lang"]['os'] = 'Os';

$GLOBALS["lang"]['Os'] = 'Os';

$GLOBALS["lang"]['os_arch'] = 'Os Arch';

$GLOBALS["lang"]['Os Arch'] = 'Os Arch';

$GLOBALS["lang"]['os_bit'] = 'Os Bit';

$GLOBALS["lang"]['Os Bit'] = 'Os Bit';

$GLOBALS["lang"]['os_cpe'] = 'Os Cpe';

$GLOBALS["lang"]['Os Cpe'] = 'Os Cpe';

$GLOBALS["lang"]['os_display_version'] = 'Wersja wyświetlania Os';

$GLOBALS["lang"]['Os Display Version'] = 'Wersja wyświetlania Os';

$GLOBALS["lang"]['os_family'] = 'Rodzina Os';

$GLOBALS["lang"]['Os Family'] = 'Rodzina Os';

$GLOBALS["lang"]['os_group'] = 'Grupa Os';

$GLOBALS["lang"]['Os Group'] = 'Grupa Os';

$GLOBALS["lang"]['os_installation_date'] = 'Data instalacji Os';

$GLOBALS["lang"]['Os Installation Date'] = 'Data instalacji Os';

$GLOBALS["lang"]['os_licence_expiry'] = 'Wygaśnięcie licencji Os';

$GLOBALS["lang"]['Os Licence Expiry'] = 'Wygaśnięcie licencji Os';

$GLOBALS["lang"]['os_license'] = 'Licencja Os';

$GLOBALS["lang"]['Os License'] = 'Licencja Os';

$GLOBALS["lang"]['os_license_code'] = 'Kod licencji Os';

$GLOBALS["lang"]['Os License Code'] = 'Kod licencji Os';

$GLOBALS["lang"]['os_license_mode'] = 'Tryb licencji Os';

$GLOBALS["lang"]['Os License Mode'] = 'Tryb licencji Os';

$GLOBALS["lang"]['os_license_type'] = 'Typ licencji Os';

$GLOBALS["lang"]['Os License Type'] = 'Typ licencji Os';

$GLOBALS["lang"]['os_name'] = 'Nazwa';

$GLOBALS["lang"]['Os Name'] = 'Nazwa';

$GLOBALS["lang"]['os_version'] = 'Wersja Os';

$GLOBALS["lang"]['Os Version'] = 'Wersja Os';

$GLOBALS["lang"]['Other'] = 'Inne';

$GLOBALS["lang"]['Others'] = 'Pozostałe';

$GLOBALS["lang"]['Our timeout for a SSH response'] = 'Nasz czas na odpowiedź SSH';

$GLOBALS["lang"]['Our timeout for a WMI response'] = 'Nasz czas na odpowiedź WMI';

$GLOBALS["lang"]['Our timeout for an SNMP response'] = 'Nasz czas na odpowiedź SNMP';

$GLOBALS["lang"]['Our timeout for an audit script response'] = 'Nasz czas na odpowiedź skryptu audytu';

$GLOBALS["lang"]['output'] = 'Wyjście';

$GLOBALS["lang"]['Output'] = 'Wyjście';

$GLOBALS["lang"]['outputs'] = 'Wyjścia';

$GLOBALS["lang"]['Outputs'] = 'Wyjścia';

$GLOBALS["lang"]['Overall severity score (0–10).'] = 'Ogólny wskaźnik ciężkości (0- 10).';

$GLOBALS["lang"]['overwrite'] = 'Zastąp';

$GLOBALS["lang"]['Overwrite'] = 'Zastąp';

$GLOBALS["lang"]['owner'] = 'Właściciel';

$GLOBALS["lang"]['Owner'] = 'Właściciel';

$GLOBALS["lang"]['PHP'] = 'PHP';

$GLOBALS["lang"]['POD'] = 'POD';

$GLOBALS["lang"]['Package'] = 'Opakowanie';

$GLOBALS["lang"]['packages'] = 'Opakowania';

$GLOBALS["lang"]['Packages'] = 'Opakowania';

$GLOBALS["lang"]['pagefile'] = 'Pagefile';

$GLOBALS["lang"]['Pagefile'] = 'Pagefile';

$GLOBALS["lang"]['Pakistan'] = 'Pakistan';

$GLOBALS["lang"]['Palau'] = 'Palau';

$GLOBALS["lang"]['Palestinian Territory'] = 'Terytorium Palestyńskie';

$GLOBALS["lang"]['Panama'] = 'Panama';

$GLOBALS["lang"]['Papua New Guinea'] = 'Papua-Nowa Gwinea';

$GLOBALS["lang"]['Paraguay'] = 'Paragwaj';

$GLOBALS["lang"]['Paranoid'] = 'Paranoid';

$GLOBALS["lang"]['Parent'] = 'Rodzic';

$GLOBALS["lang"]['parent_id'] = 'Identyfikator rodzica';

$GLOBALS["lang"]['Parent ID'] = 'Identyfikator rodzica';

$GLOBALS["lang"]['parent_name'] = 'Nazwa rodzica';

$GLOBALS["lang"]['Parent Name'] = 'Nazwa rodzica';

$GLOBALS["lang"]['part_number'] = 'Numer części';

$GLOBALS["lang"]['Part Number'] = 'Numer części';

$GLOBALS["lang"]['part_of_domain'] = 'Część domeny';

$GLOBALS["lang"]['Part Of Domain'] = 'Część domeny';

$GLOBALS["lang"]['Partition'] = 'Część';

$GLOBALS["lang"]['partition_count'] = 'Liczba partycji';

$GLOBALS["lang"]['Partition Count'] = 'Liczba partycji';

$GLOBALS["lang"]['partition_disk_index'] = 'Indeks partycji dysków';

$GLOBALS["lang"]['Partition Disk Index'] = 'Indeks partycji dysków';

$GLOBALS["lang"]['Pass'] = 'Pass';

$GLOBALS["lang"]['Passed'] = 'Przeszedł';

$GLOBALS["lang"]['Passive Optical Local Area Network'] = 'Pasywna sieć obszarów lokalnych optycznych';

$GLOBALS["lang"]['Password'] = 'Hasło';

$GLOBALS["lang"]['password'] = 'Hasło';

$GLOBALS["lang"]['password_changeable'] = 'Zmienne hasła';

$GLOBALS["lang"]['Password Changeable'] = 'Zmienne hasła';

$GLOBALS["lang"]['password_disabled'] = 'Hasło wyłączone';

$GLOBALS["lang"]['Password Disabled'] = 'Hasło wyłączone';

$GLOBALS["lang"]['password_expires'] = 'Termin ważności hasła';

$GLOBALS["lang"]['Password Expires'] = 'Termin ważności hasła';

$GLOBALS["lang"]['password_last_changed'] = 'Hasło Ostatnio zmienione';

$GLOBALS["lang"]['Password Last Changed'] = 'Hasło Ostatnio zmienione';

$GLOBALS["lang"]['password_required'] = 'Wymagane hasło';

$GLOBALS["lang"]['Password Required'] = 'Wymagane hasło';

$GLOBALS["lang"]['patch_panel'] = 'Panel łat';

$GLOBALS["lang"]['Patch Panel'] = 'Panel łat';

$GLOBALS["lang"]['patch_panel_port'] = 'Port panelu łat';

$GLOBALS["lang"]['Patch Panel Port'] = 'Port panelu łat';

$GLOBALS["lang"]['path'] = 'Ścieżka';

$GLOBALS["lang"]['Path'] = 'Ścieżka';

$GLOBALS["lang"]['Performance'] = 'Wydajność';

$GLOBALS["lang"]['Performed'] = 'Wykonane';

$GLOBALS["lang"]['permission'] = 'Zezwolenie';

$GLOBALS["lang"]['Permission'] = 'Zezwolenie';

$GLOBALS["lang"]['permissions'] = 'Uprawnienia';

$GLOBALS["lang"]['Permissions'] = 'Uprawnienia';

$GLOBALS["lang"]['Personal Area Network'] = 'Osobista sieć obszarowa';

$GLOBALS["lang"]['Peru'] = 'Peru';

$GLOBALS["lang"]['Philippines'] = 'Filipiny';

$GLOBALS["lang"]['phone'] = 'Telefon';

$GLOBALS["lang"]['Phone'] = 'Telefon';

$GLOBALS["lang"]['Physical CPUs'] = 'CPU fizyczne';

$GLOBALS["lang"]['physical_count'] = 'Liczba fizyczna';

$GLOBALS["lang"]['Physical Count'] = 'Liczba fizyczna';

$GLOBALS["lang"]['physical_depth'] = 'Głębokość fizyczna';

$GLOBALS["lang"]['Physical Depth'] = 'Głębokość fizyczna';

$GLOBALS["lang"]['physical_height'] = 'Wysokość fizyczna';

$GLOBALS["lang"]['Physical Height'] = 'Wysokość fizyczna';

$GLOBALS["lang"]['physical_width'] = 'Szerokość fizyczna';

$GLOBALS["lang"]['Physical Width'] = 'Szerokość fizyczna';

$GLOBALS["lang"]['picture'] = 'Zdjęcie';

$GLOBALS["lang"]['Picture'] = 'Zdjęcie';

$GLOBALS["lang"]['pid'] = 'Pid';

$GLOBALS["lang"]['Pid'] = 'Pid';

$GLOBALS["lang"]['Pie Chart'] = 'Pie Chart';

$GLOBALS["lang"]['ping'] = 'Ping';

$GLOBALS["lang"]['Ping'] = 'Ping';

$GLOBALS["lang"]['Pitcairn Islands'] = 'Wyspy Pitcairn';

$GLOBALS["lang"]['placement'] = 'Umieszczenie';

$GLOBALS["lang"]['Placement'] = 'Umieszczenie';

$GLOBALS["lang"]['Please have an Open-AudIT administrator logon and upgrade the database.'] = 'Proszę mieć Open- Audit administrator logon i uaktualnić bazę danych.';

$GLOBALS["lang"]['Please note that the select box will override the text input box.'] = 'Uwaga: pole wyboru obejmie pole wprowadzania tekstu.';

$GLOBALS["lang"]['Please set using'] = 'Proszę ustawić';

$GLOBALS["lang"]['pod'] = 'Pod';

$GLOBALS["lang"]['Pod'] = 'Pod';

$GLOBALS["lang"]['Poland'] = 'Polska';

$GLOBALS["lang"]['Policies'] = 'Polityka';

$GLOBALS["lang"]['Policies have exceptions.'] = 'Polityka ma wyjątki.';

$GLOBALS["lang"]['policy'] = 'Polityka';

$GLOBALS["lang"]['Policy'] = 'Polityka';

$GLOBALS["lang"]['policy_id'] = 'Identyfikator polityki';

$GLOBALS["lang"]['Policy ID'] = 'Identyfikator polityki';

$GLOBALS["lang"]['Policy Result'] = 'Wynik polityki';

$GLOBALS["lang"]['Policy Results'] = 'Wyniki polityki';

$GLOBALS["lang"]['Polite'] = 'Polit';

$GLOBALS["lang"]['Populated by audit.'] = 'Poszerzony przez audyt.';

$GLOBALS["lang"]['Populated by discovery and audit.'] = 'Poszerzony przez odkrycie i audyt.';

$GLOBALS["lang"]['Populated dynamically.'] = 'Dynamicznie.';

$GLOBALS["lang"]['Populated from DNS.'] = 'Populowane z DNS.';

$GLOBALS["lang"]['Populated from SNMP discovery.'] = 'Pozyskiwany z odkrycia SNMP.';

$GLOBALS["lang"]['Populated from device audits.'] = 'Poczęta z audytów urządzeń.';

$GLOBALS["lang"]['Populated from hostname.'] = 'Wyrosły z nazwy.';

$GLOBALS["lang"]['Populated from machine-id on Linux.'] = 'Populowane z maszyny-id na Linuksie.';

$GLOBALS["lang"]['Populated from the IP for the default route or the IP detected in discovery.'] = 'Populowane z IP dla domyślnej trasy lub IP wykryte w odkryciu.';

$GLOBALS["lang"]['Populated from the hostname command.'] = 'Populowane z polecenia hosta.';

$GLOBALS["lang"]['Populated with additional data from the external system, in a JSON representation.'] = 'Populowane z dodatkowymi danymi z systemu zewnętrznego, w reprezentacji JSON.';

$GLOBALS["lang"]['port'] = 'Port';

$GLOBALS["lang"]['Port'] = 'Port';

$GLOBALS["lang"]['port_name'] = 'Nazwa portu';

$GLOBALS["lang"]['Port Name'] = 'Nazwa portu';

$GLOBALS["lang"]['port_number'] = 'Numer portu';

$GLOBALS["lang"]['Port Number'] = 'Numer portu';

$GLOBALS["lang"]['ports_in_order'] = 'Porty w porządku';

$GLOBALS["lang"]['Ports In Order'] = 'Porty w porządku';

$GLOBALS["lang"]['ports_stop_after'] = 'Porty stop po';

$GLOBALS["lang"]['Ports Stop After'] = 'Porty stop po';

$GLOBALS["lang"]['Portugal, Portuguese Republic'] = 'Portugalia, Portugalia';

$GLOBALS["lang"]['position'] = 'Pozycja';

$GLOBALS["lang"]['Position'] = 'Pozycja';

$GLOBALS["lang"]['postcode'] = 'Kod pocztowy';

$GLOBALS["lang"]['Postcode'] = 'Kod pocztowy';

$GLOBALS["lang"]['power_circuit'] = 'Obwód zasilania';

$GLOBALS["lang"]['Power Circuit'] = 'Obwód zasilania';

$GLOBALS["lang"]['power_sockets'] = 'Gniazdo zasilania';

$GLOBALS["lang"]['Power Sockets'] = 'Gniazdo zasilania';

$GLOBALS["lang"]['Predictable'] = 'Przewidywalne';

$GLOBALS["lang"]['Preferences'] = 'Ustawienia';

$GLOBALS["lang"]['Prerequisites'] = 'Warunki wstępne';

$GLOBALS["lang"]['Prerequisites and Tests'] = 'Warunki wstępne i badania';

$GLOBALS["lang"]['present'] = 'Obecny';

$GLOBALS["lang"]['Present'] = 'Obecny';

$GLOBALS["lang"]['previous_value'] = 'Poprzednia wartość';

$GLOBALS["lang"]['Previous Value'] = 'Poprzednia wartość';

$GLOBALS["lang"]['primary'] = 'Pierwotne';

$GLOBALS["lang"]['Primary'] = 'Pierwotne';

$GLOBALS["lang"]['Primary Key'] = 'Klucz podstawowy';

$GLOBALS["lang"]['print_queue'] = 'Drukuj kolejkę';

$GLOBALS["lang"]['Print Queue'] = 'Drukuj kolejkę';

$GLOBALS["lang"]['printer_color'] = 'Kolor drukarki';

$GLOBALS["lang"]['Printer Color'] = 'Kolor drukarki';

$GLOBALS["lang"]['printer_duplex'] = 'Drukarka Duplex';

$GLOBALS["lang"]['Printer Duplex'] = 'Drukarka Duplex';

$GLOBALS["lang"]['printer_port_name'] = 'Nazwa portu drukarki';

$GLOBALS["lang"]['Printer Port Name'] = 'Nazwa portu drukarki';

$GLOBALS["lang"]['printer_shared'] = 'Współdzielone drukarki';

$GLOBALS["lang"]['Printer Shared'] = 'Współdzielone drukarki';

$GLOBALS["lang"]['printer_shared_name'] = 'Nazwa współdzielona drukarki';

$GLOBALS["lang"]['Printer Shared Name'] = 'Nazwa współdzielona drukarki';

$GLOBALS["lang"]['priority'] = 'Priorytet';

$GLOBALS["lang"]['Priority'] = 'Priorytet';

$GLOBALS["lang"]['Privacy Passphrase'] = 'Passphrase prywatności';

$GLOBALS["lang"]['privileges_required'] = 'Wymagane uprawnienia';

$GLOBALS["lang"]['Privileges Required'] = 'Wymagane uprawnienia';

$GLOBALS["lang"]['processor'] = 'Procesor';

$GLOBALS["lang"]['Processor'] = 'Procesor';

$GLOBALS["lang"]['processor_count'] = 'Liczba procesorów';

$GLOBALS["lang"]['Processor Count'] = 'Liczba procesorów';

$GLOBALS["lang"]['processor_slot_count'] = 'Liczba gniazd procesora';

$GLOBALS["lang"]['Processor Slot Count'] = 'Liczba gniazd procesora';

$GLOBALS["lang"]['processor_type'] = 'Typ procesora';

$GLOBALS["lang"]['Processor Type'] = 'Typ procesora';

$GLOBALS["lang"]['Processors'] = 'Przetwórcy';

$GLOBALS["lang"]['product_name'] = 'Nazwa produktu';

$GLOBALS["lang"]['Product Name'] = 'Nazwa produktu';

$GLOBALS["lang"]['Product Name Match from CPE: '] = 'Nazwa produktu Match z CPE: ';

$GLOBALS["lang"]['products'] = 'Produkty';

$GLOBALS["lang"]['Products'] = 'Produkty';

$GLOBALS["lang"]['profile'] = 'Profil';

$GLOBALS["lang"]['Profile'] = 'Profil';

$GLOBALS["lang"]['program'] = 'Program';

$GLOBALS["lang"]['Program'] = 'Program';

$GLOBALS["lang"]['protocol'] = 'Protokół';

$GLOBALS["lang"]['Protocol'] = 'Protokół';

$GLOBALS["lang"]['provider'] = 'Dostawca';

$GLOBALS["lang"]['Provider'] = 'Dostawca';

$GLOBALS["lang"]['published'] = 'Opublikowane';

$GLOBALS["lang"]['Published'] = 'Opublikowane';

$GLOBALS["lang"]['published_date'] = 'Data publikacji';

$GLOBALS["lang"]['Published Date'] = 'Data publikacji';

$GLOBALS["lang"]['publisher'] = 'Wydawca';

$GLOBALS["lang"]['Publisher'] = 'Wydawca';

$GLOBALS["lang"]['Puerto Rico'] = 'Puerto Rico';

$GLOBALS["lang"]['Purchase'] = 'Zakup';

$GLOBALS["lang"]['purchase_amount'] = 'Kwota zakupu';

$GLOBALS["lang"]['Purchase Amount'] = 'Kwota zakupu';

$GLOBALS["lang"]['purchase_cost_center'] = 'Centrum kosztów zakupu';

$GLOBALS["lang"]['Purchase Cost Center'] = 'Centrum kosztów zakupu';

$GLOBALS["lang"]['purchase_count'] = 'Liczba zakupów';

$GLOBALS["lang"]['Purchase Count'] = 'Liczba zakupów';

$GLOBALS["lang"]['purchase_date'] = 'Data zakupu';

$GLOBALS["lang"]['Purchase Date'] = 'Data zakupu';

$GLOBALS["lang"]['purchase_invoice'] = 'Faktura zakupu';

$GLOBALS["lang"]['Purchase Invoice'] = 'Faktura zakupu';

$GLOBALS["lang"]['purchase_order'] = 'Zamówienie zakupu';

$GLOBALS["lang"]['Purchase Order'] = 'Zamówienie zakupu';

$GLOBALS["lang"]['purchase_order_number'] = 'Numer zamówienia zakupu';

$GLOBALS["lang"]['Purchase Order Number'] = 'Numer zamówienia zakupu';

$GLOBALS["lang"]['purchase_service_contract_number'] = 'Numer umowy kupna';

$GLOBALS["lang"]['Purchase Service Contract Number'] = 'Numer umowy kupna';

$GLOBALS["lang"]['purchase_vendor'] = 'Kupujący';

$GLOBALS["lang"]['Purchase Vendor'] = 'Kupujący';

$GLOBALS["lang"]['purpose'] = 'Cel';

$GLOBALS["lang"]['Purpose'] = 'Cel';

$GLOBALS["lang"]['Qatar'] = 'Katar';

$GLOBALS["lang"]['queries'] = 'Zapytania';

$GLOBALS["lang"]['Queries'] = 'Zapytania';

$GLOBALS["lang"]['Query'] = 'Pytania';

$GLOBALS["lang"]['queue'] = 'Kolejka';

$GLOBALS["lang"]['Queue'] = 'Kolejka';

$GLOBALS["lang"]['Queue Limit'] = 'Granica kolejki';

$GLOBALS["lang"]['Queued Device Audits'] = 'Audyty urządzeń w kolejce';

$GLOBALS["lang"]['Queued IP Scans'] = 'Skan IP w kolejce';

$GLOBALS["lang"]['Queued Items'] = 'Pozycje w kolejce';

$GLOBALS["lang"]['RU Start'] = 'RU Start';

$GLOBALS["lang"]['RX Bitrate'] = 'RX Bitrate';

$GLOBALS["lang"]['RX Freq'] = 'RX Freq';

$GLOBALS["lang"]['RX Level'] = 'Poziom RX';

$GLOBALS["lang"]['RX Power'] = 'Moc RX';

$GLOBALS["lang"]['RX Profile'] = 'Profil RX';

$GLOBALS["lang"]['Rack'] = 'Rack';

$GLOBALS["lang"]['rack_devices'] = 'Urządzenia do pakowania';

$GLOBALS["lang"]['Rack Devices'] = 'Urządzenia do pakowania';

$GLOBALS["lang"]['rack_id'] = 'Identyfikator rack';

$GLOBALS["lang"]['Rack ID'] = 'Identyfikator rack';

$GLOBALS["lang"]['Racks'] = 'Rakiety';

$GLOBALS["lang"]['racks'] = 'Rakiety';

$GLOBALS["lang"]['radio'] = 'Radio';

$GLOBALS["lang"]['Radio'] = 'Radio';

$GLOBALS["lang"]['Radio MAC'] = 'Radio MAC';

$GLOBALS["lang"]['rationale'] = 'Rationale';

$GLOBALS["lang"]['Rationale'] = 'Rationale';

$GLOBALS["lang"]['raw'] = 'Surowy';

$GLOBALS["lang"]['Raw'] = 'Surowy';

$GLOBALS["lang"]['read'] = 'Czytaj';

$GLOBALS["lang"]['Read'] = 'Czytaj';

$GLOBALS["lang"]['Read our online documentation on the Open-AudIT Wiki.'] = 'Przeczytaj naszą dokumentację online na Open- Audit Wiki.';

$GLOBALS["lang"]['Red Query'] = 'Czerwone zapytanie';

$GLOBALS["lang"]['Redirect URI'] = 'Przekieruj URI';

$GLOBALS["lang"]['redirect_uri'] = 'Przekieruj Uri';

$GLOBALS["lang"]['Redirect Uri'] = 'Przekieruj Uri';

$GLOBALS["lang"]['references'] = 'Odniesienia';

$GLOBALS["lang"]['References'] = 'Odniesienia';

$GLOBALS["lang"]['region'] = 'Region';

$GLOBALS["lang"]['Region'] = 'Region';

$GLOBALS["lang"]['registered_user'] = 'Zarejestrowany użytkownik';

$GLOBALS["lang"]['Registered User'] = 'Zarejestrowany użytkownik';

$GLOBALS["lang"]['rel'] = 'Rel';

$GLOBALS["lang"]['Rel'] = 'Rel';

$GLOBALS["lang"]['Release'] = 'Zwolnienie';

$GLOBALS["lang"]['remediation'] = 'Leczenie';

$GLOBALS["lang"]['Remediation'] = 'Leczenie';

$GLOBALS["lang"]['Remote'] = 'Zdalne';

$GLOBALS["lang"]['remote_address'] = 'Adres zdalny';

$GLOBALS["lang"]['Remote Address'] = 'Adres zdalny';

$GLOBALS["lang"]['remote_port'] = 'Zdalny port';

$GLOBALS["lang"]['Remote Port'] = 'Zdalny port';

$GLOBALS["lang"]['Remove'] = 'Usuń';

$GLOBALS["lang"]['Remove Exception'] = 'Usuń wyjątek';

$GLOBALS["lang"]['Report'] = 'Sprawozdanie';

$GLOBALS["lang"]['Report on your devices, networks and more'] = 'Raport na temat urządzeń, sieci i więcej';

$GLOBALS["lang"]['reportable'] = 'Zgłaszane';

$GLOBALS["lang"]['Reportable'] = 'Zgłaszane';

$GLOBALS["lang"]['Reports'] = 'Sprawozdania';

$GLOBALS["lang"]['request'] = 'Wniosek';

$GLOBALS["lang"]['Request'] = 'Wniosek';

$GLOBALS["lang"]['Request a Specific CVE'] = 'Wniosek CVE';

$GLOBALS["lang"]['requested'] = 'Wymagane';

$GLOBALS["lang"]['Requested'] = 'Wymagane';

$GLOBALS["lang"]['require_port'] = 'Wymagany port';

$GLOBALS["lang"]['Require Port'] = 'Wymagany port';

$GLOBALS["lang"]['Require an Open Port'] = 'Wymagany otwarty port';

$GLOBALS["lang"]['Required'] = 'Wymagane';

$GLOBALS["lang"]['Reset'] = 'Reset';

$GLOBALS["lang"]['Reset All Data'] = 'Przywróć wszystkie dane';

$GLOBALS["lang"]['Reset to Default'] = 'Przywróć domyślne';

$GLOBALS["lang"]['resource'] = 'Zasoby';

$GLOBALS["lang"]['Resource'] = 'Zasoby';

$GLOBALS["lang"]['Resource Name'] = 'Nazwa zasobu';

$GLOBALS["lang"]['Resources'] = 'Zasoby';

$GLOBALS["lang"]['response'] = 'Odpowiedź';

$GLOBALS["lang"]['Response'] = 'Odpowiedź';

$GLOBALS["lang"]['responsibility'] = 'Odpowiedzialność';

$GLOBALS["lang"]['Responsibility'] = 'Odpowiedzialność';

$GLOBALS["lang"]['Restore my Licenses'] = 'Przywróć moje licencje';

$GLOBALS["lang"]['Restrict to Private'] = 'Restrict to Private';

$GLOBALS["lang"]['Restrict to Subnet'] = 'Restrict to Subnet';

$GLOBALS["lang"]['result'] = 'Wynik';

$GLOBALS["lang"]['Result'] = 'Wynik';

$GLOBALS["lang"]['Results'] = 'Wyniki';

$GLOBALS["lang"]['retrieved'] = 'Odzyskiwane';

$GLOBALS["lang"]['Retrieved'] = 'Odzyskiwane';

$GLOBALS["lang"]['retrieved_ident'] = 'Odzyskany Ident';

$GLOBALS["lang"]['Retrieved Ident'] = 'Odzyskany Ident';

$GLOBALS["lang"]['retrieved_name'] = 'Nazwa pobrana';

$GLOBALS["lang"]['Retrieved Name'] = 'Nazwa pobrana';

$GLOBALS["lang"]['Retrieved from the device - Windows:Win32_ComputerSystemProduct, Linux:dmidecode, MacOS:system_profiler, ESXi:vim-cmd hostsvc/hostsummary, HP-UX:machinfo, Solaris:smbios, AIX:uname.'] = 'Pobierany z urządzenia - Windows: Win32 _ ComputerSystemProduct, Linux: dmidecode, MacOS: system _ profiler, ESXi: vim- cmd hostsvc / hoststream, HP- UX: machinfo, Solaris: smbios, AIX: uname.';

$GLOBALS["lang"]['Reunion'] = 'Reunion';

$GLOBALS["lang"]['revision'] = 'Przegląd';

$GLOBALS["lang"]['Revision'] = 'Przegląd';

$GLOBALS["lang"]['risk_assesment_result'] = 'Wynik oceny ryzyka';

$GLOBALS["lang"]['Risk Assesment Result'] = 'Wynik oceny ryzyka';

$GLOBALS["lang"]['role'] = 'Rola';

$GLOBALS["lang"]['Role'] = 'Rola';

$GLOBALS["lang"]['roles'] = 'Role';

$GLOBALS["lang"]['Roles'] = 'Role';

$GLOBALS["lang"]['Romania'] = 'Rumunia';

$GLOBALS["lang"]['Room'] = 'Pokój';

$GLOBALS["lang"]['route'] = 'Droga';

$GLOBALS["lang"]['Route'] = 'Droga';

$GLOBALS["lang"]['Row'] = 'Wiersz';

$GLOBALS["lang"]['Row Count'] = 'Liczba wierszy';

$GLOBALS["lang"]['row_position'] = 'Pozycja wiersza';

$GLOBALS["lang"]['Row Position'] = 'Pozycja wiersza';

$GLOBALS["lang"]['Rows'] = 'Wiersze';

$GLOBALS["lang"]['ru_height'] = 'Wysokość Ru';

$GLOBALS["lang"]['Ru Height'] = 'Wysokość Ru';

$GLOBALS["lang"]['ru_start'] = 'Ru Start';

$GLOBALS["lang"]['Ru Start'] = 'Ru Start';

$GLOBALS["lang"]['rule_group'] = 'Grupa zasad';

$GLOBALS["lang"]['Rule Group'] = 'Grupa zasad';

$GLOBALS["lang"]['rules'] = 'Zasady';

$GLOBALS["lang"]['Rules'] = 'Zasady';

$GLOBALS["lang"]['Run Discovery'] = 'Uruchom Odkrywanie';

$GLOBALS["lang"]['Run Discovery on Devices'] = 'Uruchom wykrywanie urządzeń';

$GLOBALS["lang"]['Run a discovery and find out <b>Whats On Your Network?</b>'] = 'Uruchom odkrycie i dowiedz się <b>Co jest w twojej sieci?</b>';

$GLOBALS["lang"]['Run this Command'] = 'Uruchom to polecenie';

$GLOBALS["lang"]['runas'] = 'Runas';

$GLOBALS["lang"]['Runas'] = 'Runas';

$GLOBALS["lang"]['Running Open-AudIT Apache Service Under Windows'] = 'Uruchomienie usługi Open- Audit Apache pod systemem Windows';

$GLOBALS["lang"]['Russian Federation'] = 'Federacja Rosyjska';

$GLOBALS["lang"]['Rwanda'] = 'Rwanda';

$GLOBALS["lang"]['rx_bitrate'] = 'Rx Bitrate';

$GLOBALS["lang"]['Rx Bitrate'] = 'Rx Bitrate';

$GLOBALS["lang"]['rx_freq'] = 'Rx Freq';

$GLOBALS["lang"]['Rx Freq'] = 'Rx Freq';

$GLOBALS["lang"]['rx_level'] = 'Poziom Rx';

$GLOBALS["lang"]['Rx Level'] = 'Poziom Rx';

$GLOBALS["lang"]['rx_power'] = 'Moc Rx';

$GLOBALS["lang"]['Rx Power'] = 'Moc Rx';

$GLOBALS["lang"]['rx_profile'] = 'Profil Rx';

$GLOBALS["lang"]['Rx Profile'] = 'Profil Rx';

$GLOBALS["lang"]['SELECT'] = 'SELECT';

$GLOBALS["lang"]['SID'] = 'SID';

$GLOBALS["lang"]['SM Version'] = 'Wersja SM';

$GLOBALS["lang"]['SNMP (v1 / v2)'] = 'SNMP (v1 / v2)';

$GLOBALS["lang"]['SNMP Details'] = 'SNMP Szczegóły';

$GLOBALS["lang"]['SNMP OID'] = 'SNMP OID';

$GLOBALS["lang"]['SNMP Version'] = 'Wersja SNMP';

$GLOBALS["lang"]['SNMP v3'] = 'SNMP v3';

$GLOBALS["lang"]['SQL'] = 'SQL';

$GLOBALS["lang"]['SQL (Advanced)'] = 'SQL (Zaawansowany)';

$GLOBALS["lang"]['SQL Creation Statements'] = 'Oświadczenia o tworzeniu SQL';

$GLOBALS["lang"]['SSH'] = 'SSH';

$GLOBALS["lang"]['SSH Key'] = 'SSH Klucz';

$GLOBALS["lang"]['SW Revision'] = 'Przegląd SW';

$GLOBALS["lang"]['Saint Barthelemy'] = 'Saint Barthelemy';

$GLOBALS["lang"]['Saint Helena'] = 'Święta Helena';

$GLOBALS["lang"]['Saint Kitts and Nevis'] = 'Saint Kitts i Nevis';

$GLOBALS["lang"]['Saint Lucia'] = 'Saint Lucia';

$GLOBALS["lang"]['Saint Martin'] = 'Saint Martin';

$GLOBALS["lang"]['Saint Pierre and Miquelon'] = 'Saint Pierre i Miquelon';

$GLOBALS["lang"]['Saint Vincent and the Grenadines'] = 'Saint Vincent i Grenadyny';

$GLOBALS["lang"]['Samoa'] = 'Samoa';

$GLOBALS["lang"]['san'] = 'San';

$GLOBALS["lang"]['San'] = 'San';

$GLOBALS["lang"]['San Marino'] = 'San Marino';

$GLOBALS["lang"]['Sao Tome and Principe'] = 'Wyspy Świętego Tomasza i Książęca';

$GLOBALS["lang"]['Saturday'] = 'Sobota';

$GLOBALS["lang"]['Saudi Arabia'] = 'Arabia Saudyjska';

$GLOBALS["lang"]['Save as Default'] = 'Zapisz jako domyślne';

$GLOBALS["lang"]['scaling'] = 'Skalowanie';

$GLOBALS["lang"]['Scaling'] = 'Skalowanie';

$GLOBALS["lang"]['scan_options'] = 'Opcje skanowania';

$GLOBALS["lang"]['Scan Options'] = 'Opcje skanowania';

$GLOBALS["lang"]['Scan Options ID'] = 'Identyfikator opcji skanowania';

$GLOBALS["lang"]['Scan the Nmap top number of TCP ports.'] = 'Przeskanuj górną liczbę portów TCP Nmap.';

$GLOBALS["lang"]['Scan the Nmap top number of UDP ports.'] = 'Przeskanuj górną liczbę portów UDP Nmap.';

$GLOBALS["lang"]['schedule'] = 'Schemat';

$GLOBALS["lang"]['Schedule'] = 'Schemat';

$GLOBALS["lang"]['scope'] = 'Zakres';

$GLOBALS["lang"]['Scope'] = 'Zakres';

$GLOBALS["lang"]['script_timeout'] = 'Timeout skryptu';

$GLOBALS["lang"]['Script Timeout'] = 'Timeout skryptu';

$GLOBALS["lang"]['scripts'] = 'Skrypt';

$GLOBALS["lang"]['Scripts'] = 'Skrypt';

$GLOBALS["lang"]['scsi'] = 'Scsi';

$GLOBALS["lang"]['Scsi'] = 'Scsi';

$GLOBALS["lang"]['scsi_bus'] = 'Scsi Bus';

$GLOBALS["lang"]['Scsi Bus'] = 'Scsi Bus';

$GLOBALS["lang"]['scsi_logical_unit'] = 'Jednostka logiczna Scsi';

$GLOBALS["lang"]['Scsi Logical Unit'] = 'Jednostka logiczna Scsi';

$GLOBALS["lang"]['scsi_port'] = 'Port Scsi';

$GLOBALS["lang"]['Scsi Port'] = 'Port Scsi';

$GLOBALS["lang"]['Search'] = 'Szukaj';

$GLOBALS["lang"]['Search For a Device'] = 'Szukaj urządzenia';

$GLOBALS["lang"]['Search for Device'] = 'Szukaj urządzenia';

$GLOBALS["lang"]['Searching Using DataTables'] = 'Wyszukiwanie przy użyciu tabel danych';

$GLOBALS["lang"]['secondary'] = 'Wtórne';

$GLOBALS["lang"]['Secondary'] = 'Wtórne';

$GLOBALS["lang"]['Secondary Text'] = 'Tekst drugorzędny';

$GLOBALS["lang"]['section'] = 'Sekcja';

$GLOBALS["lang"]['Section'] = 'Sekcja';

$GLOBALS["lang"]['secure'] = 'Bezpieczne';

$GLOBALS["lang"]['Secure'] = 'Bezpieczne';

$GLOBALS["lang"]['Security Name'] = 'Nazwa bezpieczeństwa';

$GLOBALS["lang"]['Security Status'] = 'Status bezpieczeństwa';

$GLOBALS["lang"]['security_zone'] = 'Obszar bezpieczeństwa';

$GLOBALS["lang"]['Security Zone'] = 'Obszar bezpieczeństwa';

$GLOBALS["lang"]['seed_ip'] = 'Nasienie IP';

$GLOBALS["lang"]['Seed IP'] = 'Nasienie IP';

$GLOBALS["lang"]['seed_ping'] = 'Nasiona Ping';

$GLOBALS["lang"]['Seed Ping'] = 'Nasiona Ping';

$GLOBALS["lang"]['seed_restrict_to_private'] = 'Seed Restrict To Private';

$GLOBALS["lang"]['Seed Restrict To Private'] = 'Seed Restrict To Private';

$GLOBALS["lang"]['seed_restrict_to_subnet'] = 'Seed Restrict To Subnet';

$GLOBALS["lang"]['Seed Restrict To Subnet'] = 'Seed Restrict To Subnet';

$GLOBALS["lang"]['Select'] = 'Wybierz';

$GLOBALS["lang"]['Select All'] = 'Wybierz wszystkie';

$GLOBALS["lang"]['select_external_attribute'] = 'Wybierz atrybut zewnętrzny';

$GLOBALS["lang"]['Select External Attribute'] = 'Wybierz atrybut zewnętrzny';

$GLOBALS["lang"]['select_external_count'] = 'Wybierz liczbę zewnętrzną';

$GLOBALS["lang"]['Select External Count'] = 'Wybierz liczbę zewnętrzną';

$GLOBALS["lang"]['select_external_type'] = 'Wybierz zewnętrzne Rodzaj';

$GLOBALS["lang"]['Select External Type'] = 'Wybierz zewnętrzne Rodzaj';

$GLOBALS["lang"]['select_external_value'] = 'Wybierz zewnętrzne Wartość';

$GLOBALS["lang"]['Select External Value'] = 'Wybierz zewnętrzne Wartość';

$GLOBALS["lang"]['select_internal_attribute'] = 'Wybierz atrybut wewnętrzny';

$GLOBALS["lang"]['Select Internal Attribute'] = 'Wybierz atrybut wewnętrzny';

$GLOBALS["lang"]['select_internal_count'] = 'Wybierz liczbę wewnętrzną';

$GLOBALS["lang"]['Select Internal Count'] = 'Wybierz liczbę wewnętrzną';

$GLOBALS["lang"]['select_internal_type'] = 'Wybierz wewnętrzną Rodzaj';

$GLOBALS["lang"]['Select Internal Type'] = 'Wybierz wewnętrzną Rodzaj';

$GLOBALS["lang"]['select_internal_value'] = 'Wybierz wewnętrzną Wartość';

$GLOBALS["lang"]['Select Internal Value'] = 'Wybierz wewnętrzną Wartość';

$GLOBALS["lang"]['Select a Table'] = 'Wybierz tabelę';

$GLOBALS["lang"]['Senegal'] = 'Senegal';

$GLOBALS["lang"]['sensitivity'] = 'Wrażliwość';

$GLOBALS["lang"]['Sensitivity'] = 'Wrażliwość';

$GLOBALS["lang"]['September'] = 'Wrzesień';

$GLOBALS["lang"]['Serbia'] = 'Serbia';

$GLOBALS["lang"]['serial'] = 'Seria';

$GLOBALS["lang"]['Serial'] = 'Seria';

$GLOBALS["lang"]['serial_imei'] = 'Seryjny Imei';

$GLOBALS["lang"]['Serial Imei'] = 'Seryjny Imei';

$GLOBALS["lang"]['serial_sim'] = 'Seryjny Sim';

$GLOBALS["lang"]['Serial Sim'] = 'Seryjny Sim';

$GLOBALS["lang"]['series'] = 'Seria';

$GLOBALS["lang"]['Series'] = 'Seria';

$GLOBALS["lang"]['server'] = 'Serwer';

$GLOBALS["lang"]['Server'] = 'Serwer';

$GLOBALS["lang"]['server_id'] = 'Identyfikator serwera';

$GLOBALS["lang"]['Server ID'] = 'Identyfikator serwera';

$GLOBALS["lang"]['Server Is'] = 'Serwer Is';

$GLOBALS["lang"]['server_item'] = 'Pozycja serwera';

$GLOBALS["lang"]['Server Item'] = 'Pozycja serwera';

$GLOBALS["lang"]['Server Status'] = 'Status serwera';

$GLOBALS["lang"]['Servers'] = 'Serwery';

$GLOBALS["lang"]['service'] = 'Usługa';

$GLOBALS["lang"]['Service'] = 'Usługa';

$GLOBALS["lang"]['service_identifier'] = 'Identyfikator usługi';

$GLOBALS["lang"]['Service Identifier'] = 'Identyfikator usługi';

$GLOBALS["lang"]['service_level_a'] = 'Poziom usługi A';

$GLOBALS["lang"]['Service Level A'] = 'Poziom usługi A';

$GLOBALS["lang"]['service_level_b'] = 'Poziom usługi B';

$GLOBALS["lang"]['Service Level B'] = 'Poziom usługi B';

$GLOBALS["lang"]['service_network'] = 'Sieć usług';

$GLOBALS["lang"]['Service Network'] = 'Sieć usług';

$GLOBALS["lang"]['service_number'] = 'Numer usługi';

$GLOBALS["lang"]['Service Number'] = 'Numer usługi';

$GLOBALS["lang"]['service_pack'] = 'Pakiet serwisowy';

$GLOBALS["lang"]['Service Pack'] = 'Pakiet serwisowy';

$GLOBALS["lang"]['service_plan'] = 'Plan obsługi';

$GLOBALS["lang"]['Service Plan'] = 'Plan obsługi';

$GLOBALS["lang"]['service_provider'] = 'Usługodawca';

$GLOBALS["lang"]['Service Provider'] = 'Usługodawca';

$GLOBALS["lang"]['service_tag'] = 'Znacznik usługi';

$GLOBALS["lang"]['Service Tag'] = 'Znacznik usługi';

$GLOBALS["lang"]['service_type'] = 'Rodzaj usługi';

$GLOBALS["lang"]['Service Type'] = 'Rodzaj usługi';

$GLOBALS["lang"]['service_version'] = 'Wersja serwisowa';

$GLOBALS["lang"]['Service Version'] = 'Wersja serwisowa';

$GLOBALS["lang"]['Set'] = 'Ustaw';

$GLOBALS["lang"]['set_by'] = 'Set by';

$GLOBALS["lang"]['Set By'] = 'Set by';

$GLOBALS["lang"]['Set the size (normal or compact) of the tables on the List screens.'] = 'Ustaw rozmiar (normalny lub kompaktowy) tabel na ekranie listy.';

$GLOBALS["lang"]['severity'] = 'Stopień ciężkości';

$GLOBALS["lang"]['Severity'] = 'Stopień ciężkości';

$GLOBALS["lang"]['severity_text'] = 'Tekst o nasileniu';

$GLOBALS["lang"]['Severity Text'] = 'Tekst o nasileniu';

$GLOBALS["lang"]['Severity is calculated from the <code>base_score</code> and can be one of: None, Low, Medium, High, Critical.'] = 'Nasilenie oblicza się na podstawie <code>base_score</code> i może być jednym z: Brak, niski, średni, wysoki, krytyczny.';

$GLOBALS["lang"]['Seychelles'] = 'Seszele';

$GLOBALS["lang"]['share'] = 'Udział';

$GLOBALS["lang"]['Share'] = 'Udział';

$GLOBALS["lang"]['Share Name'] = 'Udostępnij nazwę';

$GLOBALS["lang"]['shared'] = 'Wspólne';

$GLOBALS["lang"]['Shared'] = 'Wspólne';

$GLOBALS["lang"]['shared_name'] = 'Nazwa';

$GLOBALS["lang"]['Shared Name'] = 'Nazwa';

$GLOBALS["lang"]['shell'] = 'Skorupa';

$GLOBALS["lang"]['Shell'] = 'Skorupa';

$GLOBALS["lang"]['Ship Date'] = 'Data statku';

$GLOBALS["lang"]['short'] = 'Krótki';

$GLOBALS["lang"]['Short'] = 'Krótki';

$GLOBALS["lang"]['Should I remove all non-current data from this device?'] = 'Czy należy usunąć wszystkie nieaktualne dane z tego urządzenia?';

$GLOBALS["lang"]['Should this file (or pattern) be used to exclude files from being reported. Normally, to audit files, this is set to <code>y</code>.'] = 'Jeśli ten plik (lub wzór) zostanie użyty do wyłączenia plików z zgłaszania. Zazwyczaj, do audytu plików, jest to ustawione na <code>y</code>.';

$GLOBALS["lang"]['Should this vendor be used when retrieving vulnerabilities from FirstWave.'] = 'Czy ten sprzedawca powinien być używany przy odzyskiwaniu słabych punktów z FirstWave.';

$GLOBALS["lang"]['Should we add devices from the remote service, locally.'] = 'Powinniśmy dodać urządzenia z usługi zdalnej, lokalnie.';

$GLOBALS["lang"]['Should we apply this license to the selected Org as well as the Orgs children?'] = 'Czy powinniśmy zastosować tę licencję do wybranych Org, jak również dzieci Orgs?';

$GLOBALS["lang"]['Should we consider a filtered port to be an open port - and therefore flag this IP as having a device attached?'] = 'Czy powinniśmy uznać przefiltrowany port za otwarty port - a tym samym oznaczyć ten IP jako posiadający dołączone urządzenie?';

$GLOBALS["lang"]['Should we consider an open|filtered port to be an open port - and therefore flag this IP as having a device attached?'] = 'Czy powinniśmy uznać otwarty port 124; filtrowany port za otwarty port - a zatem oznaczyć ten IP jako urządzenie dołączone?';

$GLOBALS["lang"]['Should we expose this group in the web interface.'] = 'Powinniśmy ujawnić tę grupę w Interfejsie WWW.';

$GLOBALS["lang"]['Should we expose this query in the list of reports under the Report menu in the web interface.'] = 'Czy powinniśmy ujawnić to zapytanie na liście raportów w menu Raport w Interfejsie WWW.';

$GLOBALS["lang"]['Should we expose this query in the list of reports under the Reports menu in the web interface.'] = 'Czy powinniśmy ujawnić to zapytanie na liście raportów w menu Raporty w Interfejsie WWW.';

$GLOBALS["lang"]['Should we install Open-Scap on the target machine.'] = 'Powinniśmy zainstalować Open- Scap na maszynie docelowej.';

$GLOBALS["lang"]['Should we match a device based mac address even if its a known likely duplicate from VMware.'] = 'Czy mamy dopasować urządzenie oparte na adres mac nawet jeśli jest znany prawdopodobnie duplikat z VMware.';

$GLOBALS["lang"]['Should we match a device based on its DNS fqdn.'] = 'Powinniśmy dopasować urządzenie oparte na DNS fqdn.';

$GLOBALS["lang"]['Should we match a device based on its DNS hostname.'] = 'Powinniśmy dopasować urządzenie na podstawie nazwy komputera DNS.';

$GLOBALS["lang"]['Should we match a device based on its UUID.'] = 'Powinniśmy dopasować urządzenie na podstawie jego UUID.';

$GLOBALS["lang"]['Should we match a device based on its dbus id.'] = 'Powinniśmy dopasować urządzenie na podstawie jego identyfikatora dbusa.';

$GLOBALS["lang"]['Should we match a device based on its fqdn.'] = 'Powinniśmy dopasować urządzenie na podstawie jego fqdn.';

$GLOBALS["lang"]['Should we match a device based on its hostname and UUID.'] = 'Powinniśmy dopasować urządzenie na podstawie jego nazwy i UUID.';

$GLOBALS["lang"]['Should we match a device based on its hostname and dbus id.'] = 'Powinniśmy dopasować urządzenie oparte na jego nazwie hosta i identyfikatorze dbus.';

$GLOBALS["lang"]['Should we match a device based on its hostname and serial.'] = 'Powinniśmy dopasować urządzenie na podstawie nazwy i numeru.';

$GLOBALS["lang"]['Should we match a device based on its ip if we have an existing device with no data.'] = 'Powinniśmy dopasować urządzenie bazujące na jego IP jeśli mamy istniejące urządzenie bez danych.';

$GLOBALS["lang"]['Should we match a device based on its ip.'] = 'Powinniśmy dopasować urządzenie na podstawie jego IP.';

$GLOBALS["lang"]['Should we match a device based on its mac address.'] = 'Powinniśmy dopasować urządzenie na podstawie jego adresu Mac.';

$GLOBALS["lang"]['Should we match a device based on its serial and type.'] = 'Powinniśmy dopasować urządzenie bazujące na jego seryjnym i typu.';

$GLOBALS["lang"]['Should we match a device based on its serial number.'] = 'Powinniśmy dopasować urządzenie na podstawie jego numeru seryjnego.';

$GLOBALS["lang"]['Should we match a device based only on its SNMP sysName and serial.'] = 'Powinniśmy dopasować urządzenie oparte tylko na jego syzmie SNMP Nazwa i serial.';

$GLOBALS["lang"]['Should we match a device based only on its SNMP sysName.'] = 'Powinniśmy dopasować urządzenie oparte tylko na jego syzmie SNMP.';

$GLOBALS["lang"]['Should we match a device based only on its hostname.'] = 'Powinniśmy dopasować urządzenie oparte tylko na jego nazwie.';

$GLOBALS["lang"]['Should we ping the IP before attempting to scan it? If it does not respond to the ping, skip this device.'] = 'Powinniśmy namierzyć IP zanim spróbujemy go zeskanować? Jeśli nie reaguje na ping, pomiń to urządzenie.';

$GLOBALS["lang"]['Should we populate the external system from our local devices.'] = 'Powinniśmy zaludnić zewnętrzny system z naszych lokalnych urządzeń.';

$GLOBALS["lang"]['Should we run an audit and submit it (y/n).'] = 'Czy powinniśmy przeprowadzić audyt i przedstawić go (y / n).';

$GLOBALS["lang"]['Should we test for SNMP using UDP port 161.'] = 'Powinniśmy sprawdzić SNMP używając portu UDP 161.';

$GLOBALS["lang"]['Should we test for SSH using TCP port 22.'] = 'Powinniśmy przetestować na SSH używając portu TCP 22.';

$GLOBALS["lang"]['Should we test for WMI using TCP port 135.'] = 'Powinniśmy sprawdzić WMI używając portu TCP 135.';

$GLOBALS["lang"]['Should we uninstall the agent (y/n).'] = 'Powinniśmy odblokować agenta (y / n).';

$GLOBALS["lang"]['Should we use this method to authenticate user credentials. Set to <code>y</code> or <code>n</code>.'] = 'Czy powinniśmy użyć tej metody do uwierzytelniania uwierzytelnień użytkowników. Ustaw na <code>y</code> lub <code>n</code>.';

$GLOBALS["lang"]['Should we use this method to populate a users roles. The field <code>use_auth</code> must be set to <code>y</code> to use this. Set to <code>y</code> or <code>n</code>.'] = 'Czy powinniśmy użyć tej metody do zaludnienia ról użytkowników. Pole <code>use_auth</code> należy ustawić na <code>y</code> by użyć tego. Ustaw na <code>y</code> lub <code>n</code>.';

$GLOBALS["lang"]['Show All'] = 'Pokaż wszystkie';

$GLOBALS["lang"]['sid'] = 'Sid';

$GLOBALS["lang"]['Sid'] = 'Sid';

$GLOBALS["lang"]['sidebar'] = 'Pasek boczny';

$GLOBALS["lang"]['Sidebar'] = 'Pasek boczny';

$GLOBALS["lang"]['Sierra Leone'] = 'Sierra Leone';

$GLOBALS["lang"]['Singapore'] = 'Singapur';

$GLOBALS["lang"]['Site A'] = 'Strona A';

$GLOBALS["lang"]['Site B'] = 'Strona B';

$GLOBALS["lang"]['site_hours_a'] = 'Godziny strony A';

$GLOBALS["lang"]['Site Hours A'] = 'Godziny strony A';

$GLOBALS["lang"]['site_hours_b'] = 'Czas trwania strony B';

$GLOBALS["lang"]['Site Hours B'] = 'Czas trwania strony B';

$GLOBALS["lang"]['size'] = 'Rozmiar';

$GLOBALS["lang"]['Size'] = 'Rozmiar';

$GLOBALS["lang"]['slaves'] = 'Niewolnicy';

$GLOBALS["lang"]['Slaves'] = 'Niewolnicy';

$GLOBALS["lang"]['Slovakia (Slovak Republic)'] = 'Słowacja (Słowacja)';

$GLOBALS["lang"]['Slovenia'] = 'Słowenia';

$GLOBALS["lang"]['Smart Status'] = 'Inteligentny status';

$GLOBALS["lang"]['smversion'] = 'Smversion';

$GLOBALS["lang"]['Smversion'] = 'Smversion';

$GLOBALS["lang"]['Sneaky'] = 'Sneaky';

$GLOBALS["lang"]['snmp_enterprise_id'] = 'Identyfikator przedsiębiorstwa Snmp';

$GLOBALS["lang"]['Snmp Enterprise ID'] = 'Identyfikator przedsiębiorstwa Snmp';

$GLOBALS["lang"]['snmp_enterprise_name'] = 'Nazwa przedsiębiorstwa Snmp';

$GLOBALS["lang"]['Snmp Enterprise Name'] = 'Nazwa przedsiębiorstwa Snmp';

$GLOBALS["lang"]['snmp_oid'] = 'Snmp Oid';

$GLOBALS["lang"]['Snmp Oid'] = 'Snmp Oid';

$GLOBALS["lang"]['snmp_timeout'] = 'Czas snmp';

$GLOBALS["lang"]['Snmp Timeout'] = 'Czas snmp';

$GLOBALS["lang"]['snmp_version'] = 'Wersja snmp';

$GLOBALS["lang"]['Snmp Version'] = 'Wersja snmp';

$GLOBALS["lang"]['socket'] = 'Gniazdo';

$GLOBALS["lang"]['Socket'] = 'Gniazdo';

$GLOBALS["lang"]['software'] = 'Oprogramowanie';

$GLOBALS["lang"]['Software'] = 'Oprogramowanie';

$GLOBALS["lang"]['Software Found Last 7 Days'] = 'Oprogramowanie znaleziono w ciągu ostatnich 7 dni';

$GLOBALS["lang"]['Software Found Today'] = 'Oprogramowanie znalezione dzisiaj';

$GLOBALS["lang"]['Software Found Yesterday'] = 'Oprogramowanie znalezione wczoraj';

$GLOBALS["lang"]['software_key'] = 'Klucz oprogramowania';

$GLOBALS["lang"]['Software Key'] = 'Klucz oprogramowania';

$GLOBALS["lang"]['software_name'] = 'Nazwa oprogramowania';

$GLOBALS["lang"]['Software Name'] = 'Nazwa oprogramowania';

$GLOBALS["lang"]['Software Policies'] = 'Polityka oprogramowania';

$GLOBALS["lang"]['software_revision'] = 'Przegląd oprogramowania';

$GLOBALS["lang"]['Software Revision'] = 'Przegląd oprogramowania';

$GLOBALS["lang"]['software_version'] = 'Wersja oprogramowania';

$GLOBALS["lang"]['Software Version'] = 'Wersja oprogramowania';

$GLOBALS["lang"]['Solaris'] = 'Solaris';

$GLOBALS["lang"]['Solomon Islands'] = 'Wyspy Salomona';

$GLOBALS["lang"]['Somalia, Somali Republic'] = 'Somalia, Republika Somalii';

$GLOBALS["lang"]['sound'] = 'Dźwięk';

$GLOBALS["lang"]['Sound'] = 'Dźwięk';

$GLOBALS["lang"]['source'] = 'Źródło';

$GLOBALS["lang"]['Source'] = 'Źródło';

$GLOBALS["lang"]['South Africa'] = 'Republika Południowej Afryki';

$GLOBALS["lang"]['South Georgia and the South Sandwich Islands'] = 'Georgia Południowa i Wyspy Sandwich Południowych';

$GLOBALS["lang"]['Spain'] = 'Hiszpania';

$GLOBALS["lang"]['Spanish'] = 'Hiszpański';

$GLOBALS["lang"]['Specific to Azure.'] = 'Specyficzny dla Azure.';

$GLOBALS["lang"]['Specific to OKTA.'] = 'Specyficzny dla OKTA.';

$GLOBALS["lang"]['Specifies a comma-separated list of targets (no spaces) to be excluded from the scan. The list you pass in uses normal Nmap syntax, so it can include hostnames, CIDR netblocks, octet ranges, etc.'] = 'Określa oddzieloną od comma- listę celów (bez spacji), które należy wyłączyć z skanowania. Lista, którą przepuszczasz, używa normalnej składni Nmap, więc może zawierać nazwy hostów, bloki CIDR, zakresy octet, itp.';

$GLOBALS["lang"]['speed'] = 'Prędkość';

$GLOBALS["lang"]['Speed'] = 'Prędkość';

$GLOBALS["lang"]['speed_down_a'] = 'Prędkość w dół A';

$GLOBALS["lang"]['Speed Down A'] = 'Prędkość w dół A';

$GLOBALS["lang"]['speed_down_b'] = 'Prędkość w dół B';

$GLOBALS["lang"]['Speed Down B'] = 'Prędkość w dół B';

$GLOBALS["lang"]['speed_up_a'] = 'Przyspieszenie A';

$GLOBALS["lang"]['Speed Up A'] = 'Przyspieszenie A';

$GLOBALS["lang"]['speed_up_b'] = 'Przyspieszenie B';

$GLOBALS["lang"]['Speed Up B'] = 'Przyspieszenie B';

$GLOBALS["lang"]['sql'] = 'Sql';

$GLOBALS["lang"]['Sql'] = 'Sql';

$GLOBALS["lang"]['Sri Lanka'] = 'Sri Lanka';

$GLOBALS["lang"]['ssh_ports'] = 'Ssh Ports';

$GLOBALS["lang"]['Ssh Ports'] = 'Ssh Ports';

$GLOBALS["lang"]['ssh_timeout'] = 'Czas Ssh';

$GLOBALS["lang"]['Ssh Timeout'] = 'Czas Ssh';

$GLOBALS["lang"]['Stand-Alone'] = 'Stoj - sam';

$GLOBALS["lang"]['Standard'] = 'Standardowy';

$GLOBALS["lang"]['standard_id'] = 'Standard ID';

$GLOBALS["lang"]['Standard ID'] = 'Standard ID';

$GLOBALS["lang"]['standards'] = 'Normy';

$GLOBALS["lang"]['Standards'] = 'Normy';

$GLOBALS["lang"]['standards_policies'] = 'Polityka w zakresie norm';

$GLOBALS["lang"]['Standards Policies'] = 'Polityka w zakresie norm';

$GLOBALS["lang"]['standards_results'] = 'Wyniki norm';

$GLOBALS["lang"]['Standards Results'] = 'Wyniki norm';

$GLOBALS["lang"]['start_date'] = 'Data rozpoczęcia';

$GLOBALS["lang"]['Start Date'] = 'Data rozpoczęcia';

$GLOBALS["lang"]['start_mode'] = 'Tryb startowy';

$GLOBALS["lang"]['Start Mode'] = 'Tryb startowy';

$GLOBALS["lang"]['started_date'] = 'Data rozpoczęcia';

$GLOBALS["lang"]['Started Date'] = 'Data rozpoczęcia';

$GLOBALS["lang"]['state'] = 'Państwo';

$GLOBALS["lang"]['State'] = 'Państwo';

$GLOBALS["lang"]['Stats'] = 'Staty';

$GLOBALS["lang"]['status'] = 'Status';

$GLOBALS["lang"]['Status'] = 'Status';

$GLOBALS["lang"]['Storage'] = 'Przechowywanie';

$GLOBALS["lang"]['storage_count'] = 'Liczba magazynów';

$GLOBALS["lang"]['Storage Count'] = 'Liczba magazynów';

$GLOBALS["lang"]['Storage-Area Network'] = 'Sieć lokalna';

$GLOBALS["lang"]['string'] = 'String';

$GLOBALS["lang"]['String'] = 'String';

$GLOBALS["lang"]['sub_resource_id'] = 'Identyfikator podzasobów';

$GLOBALS["lang"]['Sub Resource ID'] = 'Identyfikator podzasobów';

$GLOBALS["lang"]['sub_type'] = 'Podtyp';

$GLOBALS["lang"]['Sub Type'] = 'Podtyp';

$GLOBALS["lang"]['subject_key_ident'] = 'Klucz tematyczny Ident';

$GLOBALS["lang"]['Subject Key Ident'] = 'Klucz tematyczny Ident';

$GLOBALS["lang"]['Submit'] = 'Prześlij';

$GLOBALS["lang"]['Submitted From'] = 'Przedstawione od';

$GLOBALS["lang"]['subnet'] = 'Podsieć';

$GLOBALS["lang"]['Subnet'] = 'Podsieć';

$GLOBALS["lang"]['Subscription ID'] = 'Identyfikator subskrypcji';

$GLOBALS["lang"]['suburb'] = 'Przedmieście';

$GLOBALS["lang"]['Suburb'] = 'Przedmieście';

$GLOBALS["lang"]['Success'] = 'Sukces';

$GLOBALS["lang"]['Sudan'] = 'Sudan';

$GLOBALS["lang"]['Sudo Password'] = 'Hasło Sudo';

$GLOBALS["lang"]['Sudo Password (optional)'] = 'Hasło Sudo (opcjonalne)';

$GLOBALS["lang"]['suite'] = 'Apartament';

$GLOBALS["lang"]['Suite'] = 'Apartament';

$GLOBALS["lang"]['summaries'] = 'Podsumowania';

$GLOBALS["lang"]['Summaries'] = 'Podsumowania';

$GLOBALS["lang"]['Summary'] = 'Streszczenie';

$GLOBALS["lang"]['Sunday'] = 'Niedziela';

$GLOBALS["lang"]['supplier'] = 'Dostawca';

$GLOBALS["lang"]['Supplier'] = 'Dostawca';

$GLOBALS["lang"]['Support'] = 'Wsparcie';

$GLOBALS["lang"]['Supported types are <code>subnet</code>, <code>seed</code> and <code>active directory</code>.'] = 'Obsługiwane typy są <code>subnet</code>, <code>seed</code> oraz <code>active directory</code>.';

$GLOBALS["lang"]['Suriname'] = 'Surinam';

$GLOBALS["lang"]['Svalbard & Jan Mayen Islands'] = 'Wyspy Svalbard i Jan Mayen';

$GLOBALS["lang"]['Swaziland'] = 'Suazi';

$GLOBALS["lang"]['Sweden'] = 'Szwecja';

$GLOBALS["lang"]['switch_device_id'] = 'Przełącz identyfikator urządzenia';

$GLOBALS["lang"]['Switch Device ID'] = 'Przełącz identyfikator urządzenia';

$GLOBALS["lang"]['switch_port'] = 'Przełącz port';

$GLOBALS["lang"]['Switch Port'] = 'Przełącz port';

$GLOBALS["lang"]['Switzerland, Swiss Confederation'] = 'Szwajcaria, Konfederacja Szwajcarska';

$GLOBALS["lang"]['Syrian Arab Republic'] = 'Syryjska Republika Arabska';

$GLOBALS["lang"]['sysContact'] = 'SysContact';

$GLOBALS["lang"]['SysContact'] = 'SysContact';

$GLOBALS["lang"]['sysDescr'] = 'SysDescr';

$GLOBALS["lang"]['SysDescr'] = 'SysDescr';

$GLOBALS["lang"]['sysLocation'] = 'SysLokalizacja';

$GLOBALS["lang"]['SysLocation'] = 'SysLokalizacja';

$GLOBALS["lang"]['sysName'] = 'SysName';

$GLOBALS["lang"]['SysName'] = 'SysName';

$GLOBALS["lang"]['sysObjectID'] = 'SysObjectID';

$GLOBALS["lang"]['SysObjectID'] = 'SysObjectID';

$GLOBALS["lang"]['sysUpTime'] = 'SysupTime';

$GLOBALS["lang"]['SysUpTime'] = 'SysupTime';

$GLOBALS["lang"]['system_component'] = 'Składnik systemu';

$GLOBALS["lang"]['System Component'] = 'Składnik systemu';

$GLOBALS["lang"]['System-Area Network'] = 'Sieć system- area';

$GLOBALS["lang"]['TX Bitrate'] = 'TX Bitrate';

$GLOBALS["lang"]['TX Freq'] = 'TX Freq';

$GLOBALS["lang"]['TX Level'] = 'Poziom TX';

$GLOBALS["lang"]['TX Power'] = 'Moc TX';

$GLOBALS["lang"]['TX Profile'] = 'Profil TX';

$GLOBALS["lang"]['table'] = 'Tabela';

$GLOBALS["lang"]['Table'] = 'Tabela';

$GLOBALS["lang"]['tag'] = 'Znacznik';

$GLOBALS["lang"]['Tag'] = 'Znacznik';

$GLOBALS["lang"]['tag_1'] = 'Znacznik 1';

$GLOBALS["lang"]['Tag 1'] = 'Znacznik 1';

$GLOBALS["lang"]['tag_2'] = 'Znacznik 2';

$GLOBALS["lang"]['Tag 2'] = 'Znacznik 2';

$GLOBALS["lang"]['tag_3'] = 'Znacznik 3';

$GLOBALS["lang"]['Tag 3'] = 'Znacznik 3';

$GLOBALS["lang"]['tags'] = 'Tags';

$GLOBALS["lang"]['Tags'] = 'Tags';

$GLOBALS["lang"]['Tags :: '] = 'Tags:: ';

$GLOBALS["lang"]['Taiwan'] = 'Tajwan';

$GLOBALS["lang"]['Tajikistan'] = 'Tadżykistan';

$GLOBALS["lang"]['Tanzania'] = 'Tanzania';

$GLOBALS["lang"]['task'] = 'Zadanie';

$GLOBALS["lang"]['Task'] = 'Zadanie';

$GLOBALS["lang"]['tasks'] = 'Zadania';

$GLOBALS["lang"]['Tasks'] = 'Zadania';

$GLOBALS["lang"]['tcp_ports'] = 'Porty Tcp';

$GLOBALS["lang"]['Tcp Ports'] = 'Porty Tcp';

$GLOBALS["lang"]['tenant'] = 'Tenant';

$GLOBALS["lang"]['Tenant'] = 'Tenant';

$GLOBALS["lang"]['ternary'] = 'Ternary';

$GLOBALS["lang"]['Ternary'] = 'Ternary';

$GLOBALS["lang"]['Test 1'] = 'Badanie 1';

$GLOBALS["lang"]['Test 2'] = 'Badanie 2';

$GLOBALS["lang"]['Test 3'] = 'Badanie 3';

$GLOBALS["lang"]['test_minutes'] = 'Protokół testu';

$GLOBALS["lang"]['Test Minutes'] = 'Protokół testu';

$GLOBALS["lang"]['test_os'] = 'Test Os';

$GLOBALS["lang"]['Test Os'] = 'Test Os';

$GLOBALS["lang"]['test_subnet'] = 'Podsieć badawcza';

$GLOBALS["lang"]['Test Subnet'] = 'Podsieć badawcza';

$GLOBALS["lang"]['tests'] = 'Badania';

$GLOBALS["lang"]['Tests'] = 'Badania';

$GLOBALS["lang"]['Text'] = 'Tekst';

$GLOBALS["lang"]['Thailand'] = 'Tajlandia';

$GLOBALS["lang"]['The Active Directory domain to retrieve a list of subnets from.'] = 'Domena Active Directory do pobrania listy podsieci.';

$GLOBALS["lang"]['The Active Directory server to retrieve a list of subnets from.'] = 'Serwer Active Directory do pobrania listy podsieci.';

$GLOBALS["lang"]['The Automatable metric captures the answer to the question <strong>Can an attacker automate exploitation events for this vulnerability across multiple targets?</strong> based on steps 1-4 of the kill chain. These steps are reconnaissance, weaponization, delivery, and exploitation (Not Defined, No, Yes).'] = 'Automatyczna metryka rejestruje odpowiedź na pytanie <strong>Czy napastnik może zautomatyzować zdarzenia eksploatacyjne dla tej podatności na wiele celów?</strong> na podstawie kroków 1- 4 łańcucha. Kroki te to rekonesans, uzbrojenie, dostawa i eksploatacja (Nieokreślone, Nie, Tak).';

$GLOBALS["lang"]['The CVE identifier.'] = 'Identyfikator CVE';

$GLOBALS["lang"]['The Cloud that owns this item. Links to <code>clouds.id</code>.'] = 'Chmura, która posiada ten przedmiot. Linki do <code>clouds.id</code>.';

$GLOBALS["lang"]['The Group used to run the Baseline. Links to <code>groups.id</code>.'] = 'Grupa kierowała bazą. Linki do <code>groups.id</code>.';

$GLOBALS["lang"]['The ID from the devices table (the devices.name will be displayed) of the NTU at this end of the connection. Links to <code>devices.id</code>.'] = 'ID z tabeli urządzeń (wyświetlana będzie nazwa devices.name) NTU na tym końcu połączenia. Linki do <code>devices.id</code>.';

$GLOBALS["lang"]['The ID from the imported benchmark policy.'] = 'Identyfikator z polityki dotyczącej importowanego wskaźnika referencyjnego.';

$GLOBALS["lang"]['The ID from the locations table (the locations.name will be displayed) of this end of the connection. Links to <code>locations.id</code>. The A location is usually the <code>FROM</code> location.'] = 'Identyfikator z tabeli lokalizacji (wyświetlona zostanie nazwa lokacji) tego końca połączenia. Linki do <code>locations.id</code>. Lokalizacja jest zwykle <code>FROM</code> lokalizacja.';

$GLOBALS["lang"]['The ID from the locations table (the locations.name will be displayed) of this end of the connection. Links to <code>locations.id</code>. The B location is usually the <code>TO</code> location.'] = 'Identyfikator z tabeli lokalizacji (wyświetlona zostanie nazwa lokacji) tego końca połączenia. Linki do <code>locations.id</code>. Lokalizacja B jest zwykle <code>TO</code> lokalizacja.';

$GLOBALS["lang"]['The ID of the associated device (if any). Links to <code>devices.id</code>.'] = 'Identyfikator powiązanego urządzenia (jeżeli istnieje). Linki do <code>devices.id</code>.';

$GLOBALS["lang"]['The ID of the associated discovery. Linked to <code>discoveries.id</code>'] = 'Identyfikator związanego z tym odkrycia. Powiązane z <code>discoveries.id</code>';

$GLOBALS["lang"]['The ID of the item of the associated type.'] = 'Identyfikator pozycji powiązanego typu.';

$GLOBALS["lang"]['The ID of this orgs parent org. Linked to <code>orgs.id</code>'] = 'Identyfikator tego organu rodzica org. Powiązane z <code>orgs.id</code>';

$GLOBALS["lang"]['The ID provided by the provider.'] = 'Identyfikator podany przez dostawcę.';

$GLOBALS["lang"]['The ID retrieved from a Cloud discovery.'] = 'Identyfikator pochodzi z odkrycia Cloud.';

$GLOBALS["lang"]['The IP address of this collector used to communicate with the server.'] = 'Adres IP tego kolekcjonera używany do komunikacji z serwerem.';

$GLOBALS["lang"]['The IP of the device to start a seed discovery with.'] = 'IP urządzenia do rozpoczęcia odkrywania nasion z.';

$GLOBALS["lang"]['The IP of the external interface.'] = 'IP interfejsu zewnętrznego.';

$GLOBALS["lang"]['The IP of the internal interface.'] = 'IP interfejsu wewnętrznego.';

$GLOBALS["lang"]['The ISP or Telco providing this link.'] = 'ISP lub Telco dostarczające ten link.';

$GLOBALS["lang"]['The JSON record from Mitre.'] = 'Płyta JSON z Mitre.';

$GLOBALS["lang"]['The JSON record from the NVD feed.'] = 'Nagranie JSON z NVD.';

$GLOBALS["lang"]['The LDAP OU of this user (if LDAP is used).'] = 'LDAP OU tego użytkownika (jeśli jest używany LDAP).';

$GLOBALS["lang"]['The Location that contains this network. Links to <code>locations.id</code>.'] = 'Lokalizacja, która zawiera tę sieć. Linki do <code>locations.id</code>.';

$GLOBALS["lang"]['The NVD assigned base status.'] = 'NVD przydzielił status bazy.';

$GLOBALS["lang"]['The Nmap timing preset.'] = 'Założony czas Nmap.';

$GLOBALS["lang"]['The OS this package should be reported against. Blank for all. Use the percent sign % as a wildcard. Will be tested against os_group, os_family and os_name in that order.'] = 'System operacyjny tego pakietu powinien być zgłoszony przeciwko. Puste dla wszystkich. Użyj znaku%% jako dzikiej karty. Zostanie przetestowany na os _ group, os _ family i os _ name w tej kolejności.';

$GLOBALS["lang"]['The Open-AudIT API'] = 'API Open- Audit';

$GLOBALS["lang"]['The Open-AudIT id of the linked cloud. Links to <code>clouds.id</code>.'] = 'Identyfikator Open- Audit połączonej chmury. Linki do <code>clouds.id</code>.';

$GLOBALS["lang"]['The Open-AudIT server code was exeucted within this file.'] = 'Open- Aud Kod serwera IT został wyjęty z tego pliku.';

$GLOBALS["lang"]['The Open-AudIT server code was exeucted within this function.'] = 'Open- Aud Kod serwera IT został wyjęty z tej funkcji.';

$GLOBALS["lang"]['The Organisation that owns this item. Links to <code>orgs.id</code>.'] = 'Organizacja, która jest właścicielem tej pozycji. Linki do <code>orgs.id</code>.';

$GLOBALS["lang"]['The Process Identifier of the running associated discovery.'] = 'Identyfikator procesu związanego z działaniem.';

$GLOBALS["lang"]['The RU positon of the top of this device.'] = 'RU pozyton górnej części tego urządzenia.';

$GLOBALS["lang"]['The SNMP community string.'] = 'Struna społeczności SNMP.';

$GLOBALS["lang"]['The SNMP v3 Authentication Passphrase.'] = 'SNMP v3 Authentication Passphrase.';

$GLOBALS["lang"]['The SNMP v3 Authentication Protocol.'] = 'Protokół uwierzytelniania SNMP v3.';

$GLOBALS["lang"]['The SNMP v3 Privacy Passphrase.'] = 'SNMP v3 Privacy Passphrase.';

$GLOBALS["lang"]['The SNMP v3 Privacy Protocol.'] = 'Protokół ochrony prywatności SNMP v3.';

$GLOBALS["lang"]['The SNMP v3 Security Level.'] = 'Poziom bezpieczeństwa SNMP v3.';

$GLOBALS["lang"]['The SNMP v3 Security Name.'] = 'Nazwa bezpieczeństwa SNMP v3.';

$GLOBALS["lang"]['The SNMPv3 context Engine ID (optional).'] = 'Identyfikator silnika kontekstowego SNMPv3 (opcjonalny).';

$GLOBALS["lang"]['The SNMPv3 context Name (optional).'] = 'Nazwa kontekstu SNMPv3 (nieobowiązkowo).';

$GLOBALS["lang"]['The URL of the external system.'] = 'URL systemu zewnętrznego.';

$GLOBALS["lang"]['The URL of your Open-AudIT Server that this Collector will report to (no trailing slash).'] = 'URL Twojego Open- Audit Serwer, do którego ten Kolekcjoner się zgłosi (bez slasha).';

$GLOBALS["lang"]['The URL the audit scripts should submit their result to.'] = 'URL skrypty audytowe powinny przekazywać swoje wyniki.';

$GLOBALS["lang"]['The actual full name of this user.'] = 'Rzeczywista pełna nazwa użytkownika.';

$GLOBALS["lang"]['The associated baseline. Links to <code>baselines.id</code>.'] = 'Powiązany punkt odniesienia. Linki do <code>baselines.id</code>.';

$GLOBALS["lang"]['The associated discovery (if required). Links to <code>discoveries.id</code>.'] = 'Związane z tym odkrycie (jeżeli jest wymagane). Linki do <code>discoveries.id</code>.';

$GLOBALS["lang"]['The attribute to test (from the <code>devices</code> table).'] = 'Atrybut badania (z <code>devices</code> Tabela).';

$GLOBALS["lang"]['The attribute to test (must match an external field name from below).'] = 'Atrybut testowy (musi odpowiadać zewnętrznej nazwie pola od dołu).';

$GLOBALS["lang"]['The audit script upon which to base your customisations.'] = 'Skrypt audytu, na którym można oprzeć swoje dostosowania.';

$GLOBALS["lang"]['The base path from which to search for Users.'] = 'Ścieżka bazowa do wyszukiwania użytkowników.';

$GLOBALS["lang"]['The benchmark type.'] = 'Rodzaj wskaźnika referencyjnego.';

$GLOBALS["lang"]['The building the rack is located in.'] = 'Budynek, w którym znajduje się wieszak.';

$GLOBALS["lang"]['The calculated number of devices to be created externally.'] = 'Obliczona liczba urządzeń tworzonych zewnętrznie.';

$GLOBALS["lang"]['The calculated number of devices to be created in Open-AudIT.'] = 'Obliczona liczba urządzeń tworzonych w Open-Audit.';

$GLOBALS["lang"]['The collectors internal IP used when it runs a discovery.'] = 'Kolekcjonerski wewnętrzny IP używany podczas prowadzenia odkrycia.';

$GLOBALS["lang"]['The column name from the foreign table. Should be one of: class, environment, status, type or menu_category.'] = 'Nazwa kolumny z obcej tabeli. Powinno być jedną z: klasy, środowiska, statusu, typu lub menu _ kategorii.';

$GLOBALS["lang"]['The command executed upon the target device or Open-AudIT server code executed during discovery.'] = 'Polecenie wykonywane na urządzeniu docelowym lub kod serwera Open- Audit wykonywany podczas wyszukiwania.';

$GLOBALS["lang"]['The configuration of your cluster can be: <code>active/active</code>, <code>active/passive</code>, <code>N+1</code>, <code>N+M</code>, <code>N-to-1</code>, <code>N-to-N</code>, <code>other</code> or blank.'] = 'Konfiguracja klastra może być: <code>active/active</code>, <code>active/passive</code>, <code>N+1</code>, <code>N+M</code>, <code>N-to-1</code>, <code>N-to-N</code>, <code>other</code> lub puste.';

$GLOBALS["lang"]['The credentials password. If the credentials are an SSH Key, this is the password used to unlock the key and is optional.'] = 'Hasło. Jeśli referencje są kluczem SSH, jest to hasło używane do odblokowania klucza i jest opcjonalne.';

$GLOBALS["lang"]['The credentials username.'] = 'Nazwa użytkownika.';

$GLOBALS["lang"]['The current status of the Cloud Discovery.'] = 'Obecny status Cloud Discovery.';

$GLOBALS["lang"]['The current status of the discovery.'] = 'Obecny status odkrycia.';

$GLOBALS["lang"]['The dashboard that will be shown by default for this user. Links to <code>dashboards.id</code>.'] = 'Deska rozdzielcza, która będzie wyświetlana domyślnie dla tego użytkownika. Linki do <code>dashboards.id</code>.';

$GLOBALS["lang"]['The database version and web version are inconsistent.'] = 'Wersja bazy danych i wersja web są niespójne.';

$GLOBALS["lang"]['The date of license expiration.'] = 'Data ważności licencji.';

$GLOBALS["lang"]['The date the software is discontinued by the manufacturer. Usually replaced by a newer version. Maintenance may still be available.'] = 'Data zaprzestania stosowania oprogramowania przez producenta. Zazwyczaj zastąpiona nowszą wersją. Konserwacja może być nadal dostępna.';

$GLOBALS["lang"]['The date the software no longer receives updates and is effectively discontinued altogether. Maintenance is discontinued.'] = 'Data, w której oprogramowanie nie otrzymuje już aktualizacji i jest w pełni zaniechane. Przerwanie leczenia podtrzymującego.';

$GLOBALS["lang"]['The date this item was changed or added (read only). NOTE - This is the timestamp from the server.'] = 'Data zmiany lub dodania tej pozycji (tylko do odczytu). UWAGA - To jest znacznik czasu z serwera.';

$GLOBALS["lang"]['The date/time when this result was created.'] = 'Data / czas powstania tego wyniku.';

$GLOBALS["lang"]['The day of the month when this task should execute (* for every day).'] = 'Dzień miesiąca, w którym zadanie to powinno być wykonywane (* na każdy dzień).';

$GLOBALS["lang"]['The day of the week when this task should execute (* for every day).'] = 'Dzień tygodnia, w którym zadanie to powinno być wykonywane (* na każdy dzień).';

$GLOBALS["lang"]['The default language assigned to any user created by this method.'] = 'Domyślny język przypisany do każdego użytkownika stworzonego tą metodą.';

$GLOBALS["lang"]['The device must respond to an Nmap ping before it is considered online.'] = 'Urządzenie musi reagować na Nmap ping zanim zostanie uznane za online.';

$GLOBALS["lang"]['The device within Open-AudIT. Links to <code>devices.id</code>.'] = 'Urządzenie w Open- Audit. Linki do <code>devices.id</code>.';

$GLOBALS["lang"]['The direct link for the script is'] = 'Bezpośredni link do skryptu jest';

$GLOBALS["lang"]['The email address of the reciever'] = 'Adres e-mail odbiorcy';

$GLOBALS["lang"]['The enterprise binary from FirstWave is required for a license. Please download Open-AudIT from'] = 'Firma binarna z FirstWave jest wymagana do licencji. Proszę pobrać Open- Audit z';

$GLOBALS["lang"]['The entire associated baseline this result is from.'] = 'Cały związany z tym wynik jest z.';

$GLOBALS["lang"]['The externally referenced location ID. Usually populated by Cloud audits.'] = 'Identyfikator lokalizacji z zewnątrz. Zazwyczaj zaludnione audytami w chmurze.';

$GLOBALS["lang"]['The first time that Open-AudIT retrieved details of this device.'] = 'Po raz pierwszy Open- Audit odzyskał szczegóły tego urządzenia.';

$GLOBALS["lang"]['The floor the rack is located on.'] = 'Podłoga na której znajduje się wieszak.';

$GLOBALS["lang"]['The foreign table to reference. Should be one of: devices, locations, orgs or queries.'] = 'Obca tabela do odniesienia. Powinno być jednym z: urządzeń, lokalizacji, orgów lub zapytań.';

$GLOBALS["lang"]['The format used for the output to be emailed.'] = 'Format używany do wysyłania wiadomości e-mail.';

$GLOBALS["lang"]['The fully qualified column upon which to group by. NOTE: When type = traffic, this represents the red query id.'] = 'W pełni wykwalifikowany kolumna, na który pogrupować. UWAGA: When type = traffic, this represents the red query id.';

$GLOBALS["lang"]['The fully qualified table.column. Multiple may be provided, separated by a comma (no spaces).'] = 'W pełni wykwalifikowany table.column. Można zapewnić wiele, oddzielone przecinkiem (bez spacji).';

$GLOBALS["lang"]['The generated SQL query to test for this vulnerability. This field can be edited to correct the query as required.'] = 'Wygenerowane zapytanie SQL, aby sprawdzić tę wrażliwość. To pole można edytować, aby skorygować zapytanie zgodnie z wymaganiami.';

$GLOBALS["lang"]['The group of devices on which the baseline was run against.'] = 'Grupa urządzeń, przeciwko którym uruchomiono punkt odniesienia.';

$GLOBALS["lang"]['The group that provides a list of devices for the integration. Links to <code>groups.id</code>.'] = 'Grupa, która dostarcza listę urządzeń do integracji. Linki do <code>groups.id</code>.';

$GLOBALS["lang"]['The hour of the day when this task should execute (* for every hour).'] = 'Godzina dnia, kiedy zadanie to powinno być wykonywane (* na każdą godzinę).';

$GLOBALS["lang"]['The id of the linked device. Links to <code>devices.id</code>'] = 'Identyfikator podłączonego urządzenia. Linki do <code>devices.id</code>';

$GLOBALS["lang"]['The identifier column (integer) in the database (read only).'] = 'Kolumna identyfikatora (liczba całkowita) w bazie danych (tylko do odczytu).';

$GLOBALS["lang"]['The importance of this baseline (not used yet).'] = 'Znaczenie tej wartości wyjściowej (jeszcze niewykorzystanej).';

$GLOBALS["lang"]['The integer of severity.'] = 'Liczba całkowita ciężkości.';

$GLOBALS["lang"]['The ip address of the Auth method.'] = 'Adres IP metody Auth.';

$GLOBALS["lang"]['The language to translate the web interface into for the user.'] = 'Język do tłumaczenia interfejsu internetowego dla użytkownika.';

$GLOBALS["lang"]['The last date and time this item was executed (read only).'] = 'Ostatnia data i godzina wykonania tej pozycji (tylko do odczytu).';

$GLOBALS["lang"]['The last time that Open-AudIT retrieved details of this device.'] = 'Ostatni raz Open- Audit odzyskał szczegóły tego urządzenia.';

$GLOBALS["lang"]['The last time this benchmarks was executed.'] = 'Ostatni raz, gdy te kryteria zostały zrealizowane.';

$GLOBALS["lang"]['The last time this integration was run.'] = 'Ostatni raz ta integracja była prowadzona.';

$GLOBALS["lang"]['The line number assigned by the provider to the line at this end of the connection.'] = 'Numer linii przypisany przez dostawcę do linii na tym końcu połączenia.';

$GLOBALS["lang"]['The location the rack is located in. Links to <code>locations.id</code>.'] = 'Lokalizacja stojaka znajduje się w. Linki do <code>locations.id</code>.';

$GLOBALS["lang"]['The locations address.'] = 'Adres lokalizacji.';

$GLOBALS["lang"]['The locations area.'] = 'Lokalizacje.';

$GLOBALS["lang"]['The locations city.'] = 'Lokalizacje miasta.';

$GLOBALS["lang"]['The locations country.'] = 'Lokalizacje kraju.';

$GLOBALS["lang"]['The locations district.'] = 'Lokalizacja dzielnicy.';

$GLOBALS["lang"]['The locations latitude.'] = 'Lokalizacje szerokości geograficznej.';

$GLOBALS["lang"]['The locations level.'] = 'Poziom lokalizacji.';

$GLOBALS["lang"]['The locations longitude.'] = 'Długość geograficzna.';

$GLOBALS["lang"]['The locations phone.'] = 'Telefon z lokalizacji.';

$GLOBALS["lang"]['The locations postcode.'] = 'Lokalizacje po kodzie.';

$GLOBALS["lang"]['The locations region.'] = 'Region lokalizacji.';

$GLOBALS["lang"]['The locations room.'] = 'Lokalizacje.';

$GLOBALS["lang"]['The locations state.'] = 'Lokalizacje wskazują.';

$GLOBALS["lang"]['The locations suburb.'] = 'Lokalizacje na przedmieściach.';

$GLOBALS["lang"]['The locations suite.'] = 'Apartament z lokalizacjami.';

$GLOBALS["lang"]['The maximum physical weight (in KGs) this rack can hold.'] = 'Maksymalny ciężar fizyczny (w KG) ten stojak może utrzymać.';

$GLOBALS["lang"]['The maximum total BTUs this rack is rated for.'] = 'Maksymalny całkowity BTU ten stojak jest oceniany dla.';

$GLOBALS["lang"]['The minute of the hour when this task should execute (* for every minute).'] = 'Minuta godziny, kiedy zadanie to powinno zostać wykonane (* na każdą minutę).';

$GLOBALS["lang"]['The month of the year when this task should execute (* for every month).'] = 'Miesiąc roku, w którym zadanie to powinno zostać wykonane (* za każdy miesiąc).';

$GLOBALS["lang"]['The name given to this item.'] = 'Nazwa nadana temu elementowi.';

$GLOBALS["lang"]['The name given to this item. Ideally it should be unique.'] = 'Nazwa nadana temu elementowi. Idealnie powinno być unikalne.';

$GLOBALS["lang"]['The name given to this user (used to login). Ideally it should be unique.'] = 'Nazwa podana temu użytkownikowi (używana do logowania). Idealnie powinno być unikalne.';

$GLOBALS["lang"]['The name of the associated cloud (if required).'] = 'Nazwa powiązanej chmury (jeżeli jest to wymagane).';

$GLOBALS["lang"]['The name of the software package, as audited by Open-AudIT. Use the percent sign % as a wildcard.'] = 'Nazwa pakietu oprogramowania, kontrolowanego przez Open- Audit. Użyj znaku%% jako dzikiej karty.';

$GLOBALS["lang"]['The name of the user who last changed or added this item (read only).'] = 'Nazwa użytkownika, który ostatnio zmienił lub dodał ten element (tylko do odczytu).';

$GLOBALS["lang"]['The name provided by the provider.'] = 'Nazwa podana przez dostawcę.';

$GLOBALS["lang"]['The network in the format 192.168.1.0/24.'] = 'Sieć w formacie 192.168.1.0 / 24.';

$GLOBALS["lang"]['The network subnet to execute the discovery on.'] = 'Podsieć sieci do wykonania odkrycia.';

$GLOBALS["lang"]['The number of RUs this device occupies.'] = 'Numer RU tego urządzenia zajmuje.';

$GLOBALS["lang"]['The number of associated locations. Links to <code>locations.cloud_id</code>.'] = 'Liczba powiązanych lokalizacji. Linki do <code>locations.cloud_id</code>.';

$GLOBALS["lang"]['The number of associated networks. Links to <code>networks.cloud_id</code>.'] = 'Liczba powiązanych sieci. Linki do <code>networks.cloud_id</code>.';

$GLOBALS["lang"]['The number of audited devices in this cloud. Links to <code>devices.cloud_id</code> and <code>devices.serial</code>.'] = 'Liczba skontrolowanych urządzeń w tej chmurze. Linki do <code>devices.cloud_id</code> oraz <code>devices.serial</code>.';

$GLOBALS["lang"]['The number of critical severity vulnerabilities held by FirstWave (not in your database).'] = 'Liczba krytycznych słabości posiadanych przez FirstWave (nie w bazie danych).';

$GLOBALS["lang"]['The number of devices found by this discovery.'] = 'Liczba urządzeń znalezionych w tym odkryciu.';

$GLOBALS["lang"]['The number of devices in the associated group.'] = 'Liczba urządzeń w powiązanej grupie.';

$GLOBALS["lang"]['The number of devices in this cloud with a state of running. Links to <code>devices.cloud_id</code> and <code>devices.instance_state</code>.'] = 'Liczba urządzeń w tej chmurze ze stanem działania. Linki do <code>devices.cloud_id</code> oraz <code>devices.instance_state</code>.';

$GLOBALS["lang"]['The number of devices in this cloud with a state of stopped. Links to <code>devices.cloud_id</code> and <code>devices.instance_state</code>.'] = 'Liczba urządzeń w tej chmurze ze stanem zatrzymania. Linki do <code>devices.cloud_id</code> oraz <code>devices.instance_state</code>.';

$GLOBALS["lang"]['The number of devices in this cloud. Links to <code>devices.cloud_id</code>.'] = 'Liczba urządzeń w tej chmurze. Linki do <code>devices.cloud_id</code>.';

$GLOBALS["lang"]['The number of devices this benchmark will be executed upon. Derived from <code>benchmarks.devices</code>.'] = 'Liczba urządzeń, na których ten wskaźnik zostanie wykonany. Pochodne <code>benchmarks.devices</code>.';

$GLOBALS["lang"]['The number of devices to limit this discovery to.'] = 'Liczba urządzeń do ograniczenia tego odkrycia.';

$GLOBALS["lang"]['The number of high severity vulnerabilities held by FirstWave (not in your database).'] = 'Liczba słabych punktów w posiadaniu FirstWave (nie w bazie danych).';

$GLOBALS["lang"]['The number of low severity vulnerabilities held by FirstWave (not in your database).'] = 'Liczba słabych punktów w posiadaniu FirstWave (nie w bazie danych).';

$GLOBALS["lang"]['The number of medium severity vulnerabilities held by FirstWave (not in your database).'] = 'Liczba słabych punktów średniej ciężkości posiadanych przez FirstWave (nie w bazie danych).';

$GLOBALS["lang"]['The number of purchased licenses.'] = 'Liczba zakupionych licencji.';

$GLOBALS["lang"]['The number of seconds to try and communicate with the target IP.'] = 'Liczba sekund na próbę komunikacji z docelowym IP.';

$GLOBALS["lang"]['The number of vulnerabilities without a severity held by FirstWave (not in your database).'] = 'Liczba słabych punktów bez dotkliwości w posiadaniu FirstWave (nie w bazie danych).';

$GLOBALS["lang"]['The optional secondary column. NOTE: When type = traffic, this represents the yellow query id.'] = 'Nieobowiązkowa kolumna drugorzędna. UWAGA: When type = traffic, this represents the yellow query id.';

$GLOBALS["lang"]['The optional third column. NOTE: When type = traffic, this represents the green query id.'] = 'Opcjonalna trzecia kolumna. UWAGA: When type = traffic, this represents the green query id.';

$GLOBALS["lang"]['The orientation of this device.'] = 'Kierunek tego urządzenia.';

$GLOBALS["lang"]['The password for the dn_account attribute.'] = 'Hasło atrybutu dn _ account.';

$GLOBALS["lang"]['The password used to access the external system.'] = 'Hasło używane do dostępu do systemu zewnętrznego.';

$GLOBALS["lang"]['The path to the file or directory.'] = 'Ścieżka do pliku lub katalogu.';

$GLOBALS["lang"]['The path to the file or directory. Directories should end with a trailing slash.'] = 'Ścieżka do pliku lub katalogu. Katalogi powinny kończyć się ukośnikiem.';

$GLOBALS["lang"]['The physical depth (in CMs) of the rack.'] = 'Głębokość fizyczna (w CM) stojaka.';

$GLOBALS["lang"]['The physical height (in CMs) of the rack.'] = 'Fizyczna wysokość (w mm) stojaka.';

$GLOBALS["lang"]['The physical weight (in KGs) of the rack at present.'] = 'Waga fizyczna (w KG) stojaka obecnie.';

$GLOBALS["lang"]['The physical weight (in KGs) of the rack when empty.'] = 'Waga fizyczna (w KG) stojaka po opróżnieniu.';

$GLOBALS["lang"]['The physical width (in CMs) of the rack.'] = 'Fizyczna szerokość (w mm) stojaka.';

$GLOBALS["lang"]['The pod (if any) that this rack is part of.'] = 'Komora (jeśli istnieje), że ten stojak jest częścią.';

$GLOBALS["lang"]['The power circuit this rack attaches to.'] = 'Obwód zasilania, do którego przyłącza się ten stojak.';

$GLOBALS["lang"]['The primary database table upon which to base this widget.'] = 'Podstawowa tabela bazy danych, na której można oprzeć ten widget.';

$GLOBALS["lang"]['The process identifier of this queue item.'] = 'Identyfikator procesu tej pozycji kolejki.';

$GLOBALS["lang"]['The process that was used last to retrieve details about the device'] = 'Proces, który został użyty ostatni do uzyskania szczegółów dotyczących urządzenia';

$GLOBALS["lang"]['The query that provides a list of devices for the integration. Links to <code>queries.id</code>.'] = 'Zapytanie, które zawiera listę urządzeń do integracji. Linki do <code>queries.id</code>.';

$GLOBALS["lang"]['The rack asset number.'] = 'Numer konta.';

$GLOBALS["lang"]['The rack asset tag.'] = 'Znacznik aktywów.';

$GLOBALS["lang"]['The rack bar code.'] = 'Kod kreski.';

$GLOBALS["lang"]['The rack model.'] = 'Model bagażnika.';

$GLOBALS["lang"]['The rack serial.'] = 'Serial.';

$GLOBALS["lang"]['The rack series.'] = 'Seria wieszaków.';

$GLOBALS["lang"]['The rack this device is located in. Links to <code>racks.id</code>.'] = 'Stojak, w którym znajduje się to urządzenie. Linki do <code>racks.id</code>.';

$GLOBALS["lang"]['The recommended process of addressing and fixing identified security vulnerabilities. This typically involves applying patches, updates, or other measures to eliminate the risk posed by the vulnerabilities.'] = 'Zalecany proces rozwiązywania i naprawiania stwierdzonych słabych punktów bezpieczeństwa. Oznacza to zazwyczaj stosowanie łat, aktualizacji lub innych środków w celu wyeliminowania ryzyka stwarzanego przez podatności na zagrożenia.';

$GLOBALS["lang"]['The regular domain notation of your directory. Eg - <code>open-audit.lan</code>.'] = 'Regularna notacja domeny katalogu. Eg - <code>open-audit.lan</code>.';

$GLOBALS["lang"]['The result of the command.'] = 'Wynik komendy.';

$GLOBALS["lang"]['The room the rack is located in.'] = 'Pokój, w którym znajduje się stojak.';

$GLOBALS["lang"]['The row the rack is located in.'] = 'Wiersz w którym znajduje się stojak.';

$GLOBALS["lang"]['The secret key used in conjunction with your AWS EC2 API key.'] = 'Sekretny klucz używany w połączeniu z kluczem AWS EC2 API.';

$GLOBALS["lang"]['The software end-of-life date.'] = 'Data zakończenia życia oprogramowania.';

$GLOBALS["lang"]['The software end-of-service-life date.'] = 'Data zakończenia eksploatacji oprogramowania.';

$GLOBALS["lang"]['The specific database column from the specified database table.'] = 'Konkretna kolumna bazy danych z określonej tabeli bazy danych.';

$GLOBALS["lang"]['The specific database table.'] = 'Specjalna tabela bazy danych.';

$GLOBALS["lang"]['The standard Nmap timing options. We usually use -T4 (Aggressive) as this is recommended for a decent broadband or ethernet connection.'] = 'Standardowe opcje Nmap. Zwykle używamy -T4 (Agresywny), ponieważ jest to zalecane dla przyzwoitego połączenia szerokopasmowego lub ethernet.';

$GLOBALS["lang"]['The status of this integration'] = 'Status tej integracji';

$GLOBALS["lang"]['The status of this queued item.'] = 'Status tego elementu w kolejce.';

$GLOBALS["lang"]['The target IP this log entry referers to (if any).'] = 'Docelowy IP ten wpis dziennika odnosi się do (jeśli dotyczy).';

$GLOBALS["lang"]['The template for the link to be generated per result line.'] = 'Szablon odnośnika, który ma być wygenerowany dla każdej linii wyników.';

$GLOBALS["lang"]['The text for the bottom of the chart in a line chart (only).'] = 'Tekst dla dołu wykresu w wykresie linii (tylko).';

$GLOBALS["lang"]['The text that is displayed.'] = 'Wyświetlany tekst.';

$GLOBALS["lang"]['The timestamp after which, this task should run. For example, run a task after the 1st June 2017 at 10am, set it to <code>2017-06-01 09:59:00</code>. This value should be zero padded (ie, 09, not 9). This value defaults to <code>2000-01-01 00:00:00</code> which means by default, a scheduled task will run at next scheduled execution time.'] = 'Znacznik czasu, po którym, to zadanie powinno działać. Na przykład, uruchomić zadanie po 1 czerwca 2017 o godzinie 10 rano, ustawić go <code>2017-06-01 09:59:00</code>. Wartość ta powinna być zerowa (tj. 09, nie 9). Wartość domyślna <code>2000-01-01 00:00:00</code> co oznacza domyślnie, zaplanowane zadanie będzie działać w następnym zaplanowanym czasie wykonania.';

$GLOBALS["lang"]['The top 10, 100 or 1000 (or none) TCP ports commonly in use according to Nmap.'] = 'Top 10, 100 lub 1000 (lub nie) portów TCP powszechnie używane zgodnie z Nmap.';

$GLOBALS["lang"]['The top 10, 100 or 1000 (or none) UDP ports commonly in use according to Nmap.'] = '10, 100 lub 1000 (lub nie) portów UDP powszechnie używanych zgodnie z Nmap.';

$GLOBALS["lang"]['The total BTU output by this rack.'] = 'Całkowite wyjście BTU przez ten stojak.';

$GLOBALS["lang"]['The type of device.'] = 'Typ urządzenia.';

$GLOBALS["lang"]['The type of organisation.'] = 'Rodzaj organizacji.';

$GLOBALS["lang"]['The type of rack (compute, power, network, etc).'] = 'Typ stojaka (obliczenia, moc, sieć itp.).';

$GLOBALS["lang"]['The type of task to run. One of: baseline, benchmark, cloud discovery, discovery, integration, report, query.'] = 'Rodzaj zadania do wykonania. Jeden z: punkt odniesienia, punkt odniesienia, odkrycie w chmurze, odkrycie, integracja, raport, zapytanie.';

$GLOBALS["lang"]['The type of the integration (usually named after the external system).'] = 'Typ integracji (zwykle nazwany po systemie zewnętrznym).';

$GLOBALS["lang"]['The unique identifier of this server.'] = 'Unikalny identyfikator tego serwera.';

$GLOBALS["lang"]['The user account this collector uses. Links to <code>users.id</code>.'] = 'Konto użytkownika tego kolekcjonera używa. Linki do <code>users.id</code>.';

$GLOBALS["lang"]['The username used to access the external system.'] = 'Nazwa użytkownika użyta do uzyskania dostępu do systemu zewnętrznego.';

$GLOBALS["lang"]['The users email address.'] = 'Adres e-mail użytkowników.';

$GLOBALS["lang"]['The usual hours of operation at this site.'] = 'Zwykłe godziny operacji na tej stronie.';

$GLOBALS["lang"]['The value assigned to the item.'] = 'Wartość przypisana do pozycji.';

$GLOBALS["lang"]['The value that is stored for this particular item.'] = 'Wartość, która jest przechowywana dla tego konkretnego elementu.';

$GLOBALS["lang"]['The vendor name as per CPE entries.'] = 'Nazwa sprzedawcy według wpisów CPE.';

$GLOBALS["lang"]['The vendor taken from the CPE.'] = 'Sprzedawca z CPE.';

$GLOBALS["lang"]['The web directory on the host that Open-AudIT is installed (requires a trailing slash).'] = 'Katalog internetowy na hoście, który jest zainstalowany Open- Audit (wymaga ukośnika).';

$GLOBALS["lang"]['The widget at position '] = 'Widget na pozycji ';

$GLOBALS["lang"]['The width of this device.'] = 'Szerokość tego urządzenia.';

$GLOBALS["lang"]['Then'] = 'Wtedy';

$GLOBALS["lang"]['This CVE will be retrieved and overwrite the existing CVE if it exists.'] = 'Ten plik CVE zostanie odzyskany i nadpisany, jeśli istnieje.';

$GLOBALS["lang"]['This attribute is stored as a JSON object. It is the list of all collections and contains the collection name along with <code>c</code>, <code>r</code>, <code>u</code> and,or <code>d</code> which represent create, read, update and delete. These are the actions a user can perform on items from that particular collection.'] = 'Atrybut ten jest zapisany jako obiekt JSON. Jest to lista wszystkich kolekcji i zawiera nazwę kolekcji wraz z <code>c</code>, <code>r</code>, <code>u</code> oraz lub <code>d</code> które reprezentują tworzenie, czytanie, aktualizację i usuwanie. Są to działania, które użytkownik może wykonać na elementach z danej kolekcji.';

$GLOBALS["lang"]['This can be either a varchar (a text field), a list (a list of values that can be selected) or a date.'] = 'Może to być varchar (pole tekstowe), lista (lista wartości, które mogą być wybrane) lub data.';

$GLOBALS["lang"]['This collectors universally unique identifier.'] = 'Kolekcjonery te są powszechnie niepowtarzalnym identyfikatorem.';

$GLOBALS["lang"]['This description is auto-populated and should ideally be left as-is.'] = 'Opis ten jest autozaludniony i najlepiej zostawić jako -is.';

$GLOBALS["lang"]['This feature requires a Professional or an Enterprise license.'] = 'Ta funkcja wymaga licencji Professional lub Enterprise.';

$GLOBALS["lang"]['This is generally the primary column, unless otherwise configured. NOTE: When type = traffic, this represents the secondary text.'] = 'Jest to zazwyczaj pierwsza kolumna, chyba że skonfigurowano inaczej. UWAGA: Gdy typ = ruch, reprezentuje to tekst drugorzędny.';

$GLOBALS["lang"]['This item must match the value of the attribute selected or contains the ID of the query to be used.'] = 'Ta pozycja musi odpowiadać wartości wybranego atrybutu lub zawiera identyfikator używanego zapytania.';

$GLOBALS["lang"]['This item must match the value of the attribute selected.'] = 'Ta pozycja musi odpowiadać wartości wybranego atrybutu.';

$GLOBALS["lang"]['This license expires on'] = 'Ta licencja wygasa w dniu';

$GLOBALS["lang"]['This should be set to either 1 or the height of the rack.'] = 'To powinno być ustawione na 1 lub wysokość stojaka.';

$GLOBALS["lang"]['This will auto-populate.'] = 'To będzie autopopulacja.';

$GLOBALS["lang"]['This will considerably slow the discovery scan.'] = 'To znacznie spowolni skanowanie.';

$GLOBALS["lang"]['Thursday'] = 'Czwartek';

$GLOBALS["lang"]['time_caption'] = 'Czas';

$GLOBALS["lang"]['Time Caption'] = 'Czas';

$GLOBALS["lang"]['time_daylight'] = 'Światło dzienne czasu';

$GLOBALS["lang"]['Time Daylight'] = 'Światło dzienne czasu';

$GLOBALS["lang"]['Time to Execute'] = 'Czas do wykonania';

$GLOBALS["lang"]['timeout'] = 'Czas';

$GLOBALS["lang"]['Timeout'] = 'Czas';

$GLOBALS["lang"]['Timeout Per Target (Seconds)'] = 'Czas na cel (sekundy)';

$GLOBALS["lang"]['Timesatamp'] = 'Plan lekcji';

$GLOBALS["lang"]['Timestamp'] = 'Znacznik czasu';

$GLOBALS["lang"]['timing'] = 'Czas';

$GLOBALS["lang"]['Timing'] = 'Czas';

$GLOBALS["lang"]['Timor-Leste'] = 'Timor Wschodni';

$GLOBALS["lang"]['Title'] = 'Tytuł';

$GLOBALS["lang"]['Togo'] = 'Togo';

$GLOBALS["lang"]['Tokelau'] = 'Tokelau';

$GLOBALS["lang"]['Tonga'] = 'Tonga';

$GLOBALS["lang"]['toolbar_style'] = 'Styl paska narzędzi';

$GLOBALS["lang"]['Toolbar Style'] = 'Styl paska narzędzi';

$GLOBALS["lang"]['Top Nmap TCP Ports'] = 'Top Nmap TCP Ports';

$GLOBALS["lang"]['Top Nmap UDP Ports'] = 'Top Nmap Porty UDP';

$GLOBALS["lang"]['Traditional Chinese'] = 'Tradycyjny chiński';

$GLOBALS["lang"]['Traffic Light'] = 'Światła drogowe';

$GLOBALS["lang"]['Trinidad and Tobago'] = 'Trynidad i Tobago';

$GLOBALS["lang"]['Troubleshooting LDAP Logins'] = 'Rozwiązywanie problemów związanych z logowaniem LDAP';

$GLOBALS["lang"]['Try all the latest features with a FREE 100 device license of Open-AudIT Enterprise. Please read the <a href=\"'] = 'Wypróbuj wszystkie najnowsze funkcje z licencją urządzenia FREE 100 Open- Audit Enterprise. Proszę przeczytać < a href =\ "';

$GLOBALS["lang"]['Tuesday'] = 'Wtorek';

$GLOBALS["lang"]['Tunisia'] = 'Tunezja';

$GLOBALS["lang"]['Turkey'] = 'Turcja';

$GLOBALS["lang"]['Turkmenistan'] = 'Turkmenistan';

$GLOBALS["lang"]['Turks and Caicos Islands'] = 'Wyspy Turks i Caicos';

$GLOBALS["lang"]['Tuvalu'] = 'Tuvalu';

$GLOBALS["lang"]['tx_bitrate'] = 'Tx Bitrate';

$GLOBALS["lang"]['Tx Bitrate'] = 'Tx Bitrate';

$GLOBALS["lang"]['tx_freq'] = 'Tx Freq';

$GLOBALS["lang"]['Tx Freq'] = 'Tx Freq';

$GLOBALS["lang"]['tx_level'] = 'Poziom Tx';

$GLOBALS["lang"]['Tx Level'] = 'Poziom Tx';

$GLOBALS["lang"]['tx_power'] = 'Tx Moc';

$GLOBALS["lang"]['Tx Power'] = 'Tx Moc';

$GLOBALS["lang"]['tx_profile'] = 'Profil Tx';

$GLOBALS["lang"]['Tx Profile'] = 'Profil Tx';

$GLOBALS["lang"]['type'] = 'Rodzaj';

$GLOBALS["lang"]['Type'] = 'Rodzaj';

$GLOBALS["lang"]['URL'] = 'URL';

$GLOBALS["lang"]['uuid'] = 'UUID';

$GLOBALS["lang"]['UUID'] = 'UUID';

$GLOBALS["lang"]['udp_ports'] = 'Porty Udp';

$GLOBALS["lang"]['Udp Ports'] = 'Porty Udp';

$GLOBALS["lang"]['Uganda'] = 'Uganda';

$GLOBALS["lang"]['Ukraine'] = 'Ukraina';

$GLOBALS["lang"]['uninstall'] = 'Odinstaluj';

$GLOBALS["lang"]['Uninstall'] = 'Odinstaluj';

$GLOBALS["lang"]['Uninstall the Agent'] = 'Odinstaluj agenta';

$GLOBALS["lang"]['United Arab Emirates'] = 'Zjednoczone Emiraty Arabskie';

$GLOBALS["lang"]['United Kingdom'] = 'Zjednoczone Królestwo';

$GLOBALS["lang"]['United States Minor Outlying Islands'] = 'Stany Zjednoczone';

$GLOBALS["lang"]['United States Virgin Islands'] = 'Stany Zjednoczone Wyspy Dziewicze';

$GLOBALS["lang"]['United States of America'] = 'Stany Zjednoczone Ameryki';

$GLOBALS["lang"]['Unknown'] = 'Nieznany';

$GLOBALS["lang"]['unlock_pin'] = 'Odblokuj Pin';

$GLOBALS["lang"]['Unlock Pin'] = 'Odblokuj Pin';

$GLOBALS["lang"]['Unscheduled'] = 'Nieplanowany';

$GLOBALS["lang"]['Unused as at 5.2.0.'] = 'Nieużywane jak 5.2.0.';

$GLOBALS["lang"]['Unused.'] = 'Niewykorzystany.';

$GLOBALS["lang"]['Update'] = 'Aktualizacja';

$GLOBALS["lang"]['update_external_count'] = 'Uaktualnij liczbę zewnętrzną';

$GLOBALS["lang"]['Update External Count'] = 'Uaktualnij liczbę zewnętrzną';

$GLOBALS["lang"]['update_external_from_internal'] = 'Uaktualnij zewnętrzne od wewnątrz';

$GLOBALS["lang"]['Update External From Internal'] = 'Uaktualnij zewnętrzne od wewnątrz';

$GLOBALS["lang"]['update_internal_count'] = 'Aktualizuj liczbę wewnętrzną';

$GLOBALS["lang"]['Update Internal Count'] = 'Aktualizuj liczbę wewnętrzną';

$GLOBALS["lang"]['update_internal_from_external'] = 'Aktualizuj wewnętrzną z zewnątrz';

$GLOBALS["lang"]['Update Internal From External'] = 'Aktualizuj wewnętrzną z zewnątrz';

$GLOBALS["lang"]['Update NMIS Devices from Open-AudIT'] = 'Aktualizuj urządzenia NMIS z Open- Audit';

$GLOBALS["lang"]['Update Open-AudIT Devices from '] = 'Aktualizuj Open- Audit Urządzenia z ';

$GLOBALS["lang"]['Update Open-AudIT Devices from NMIS'] = 'Aktualizuj Open- Audit Urządzenia z NMIS';

$GLOBALS["lang"]['Updated each time discovery has been executed with IPs detected to be responding.'] = 'Zaktualizowane za każdym razem, gdy odkrycie zostało wykonane z IP wykryte do odpowiedzi.';

$GLOBALS["lang"]['Updated each time discovery has been executed with IPs that have been scanned by Nmap.'] = 'Aktualizacja za każdym razem, gdy odkrycie zostało wykonane z IP, które zostały zeskanowane przez Nmap.';

$GLOBALS["lang"]['Updated each time discovery has been executed with devices we were able to audit.'] = 'Aktualizacja za każdym razem, gdy odkrycie zostało wykonane za pomocą urządzeń byliśmy w stanie kontrolować.';

$GLOBALS["lang"]['Updated each time discovery has been executed with devices we were able to query.'] = 'Aktualizacja za każdym razem, gdy odkrycie zostało wykonane z urządzeń byliśmy w stanie zapytania.';

$GLOBALS["lang"]['Updated each time discovery has been executed.'] = 'Aktualizacja za każdym razem, gdy odkrycie zostało wykonane.';

$GLOBALS["lang"]['Updated each time the discovery has been executed.'] = 'Aktualizacja za każdym razem, gdy odkrycie zostało wykonane.';

$GLOBALS["lang"]['Updated each time the discovery has completed execution.'] = 'Aktualizacja za każdym razem, gdy odkrycie zakończy egzekucję.';

$GLOBALS["lang"]['Updating'] = 'Aktualizacja';

$GLOBALS["lang"]['Upgrade'] = 'Aktualizacja';

$GLOBALS["lang"]['Upload an audit result file'] = 'Wyślij plik wyników audytu';

$GLOBALS["lang"]['Upper Case'] = 'Przypadek górny';

$GLOBALS["lang"]['uptime'] = 'Uptime';

$GLOBALS["lang"]['Uptime'] = 'Uptime';

$GLOBALS["lang"]['url'] = 'Url';

$GLOBALS["lang"]['Url'] = 'Url';

$GLOBALS["lang"]['Uruguay, Eastern Republic of'] = 'Urugwaj, Republika Wschodnia';

$GLOBALS["lang"]['usb'] = 'Usb';

$GLOBALS["lang"]['Usb'] = 'Usb';

$GLOBALS["lang"]['use'] = 'Stosowanie';

$GLOBALS["lang"]['Use'] = 'Stosowanie';

$GLOBALS["lang"]['use_authentication'] = 'Użyj uwierzytelniania';

$GLOBALS["lang"]['Use Authentication'] = 'Użyj uwierzytelniania';

$GLOBALS["lang"]['use_authorisation'] = 'Użycie zezwolenia';

$GLOBALS["lang"]['Use Authorisation'] = 'Użycie zezwolenia';

$GLOBALS["lang"]['Use SNMP'] = 'Użyj SNMP';

$GLOBALS["lang"]['Use SSH'] = 'Użyj SSH';

$GLOBALS["lang"]['Use Secure (LDAPS)'] = 'Bezpieczne stosowanie (LDAPS)';

$GLOBALS["lang"]['Use Service Version Detection'] = 'Użyj funkcji wykrywania wersji';

$GLOBALS["lang"]['Use WMI'] = 'Użyj WMI';

$GLOBALS["lang"]['Use for Authentication'] = 'Użycie do uwierzytelniania';

$GLOBALS["lang"]['Use for Roles'] = 'Zastosowanie w rolach';

$GLOBALS["lang"]['used'] = 'Używane';

$GLOBALS["lang"]['Used'] = 'Używane';

$GLOBALS["lang"]['used_count'] = 'Używana liczba';

$GLOBALS["lang"]['Used Count'] = 'Używana liczba';

$GLOBALS["lang"]['Used by OpenLDAP only.'] = 'Używany tylko przez OpenLDAP.';

$GLOBALS["lang"]['Used internally when discovering a single device.'] = 'Używany wewnętrznie przy odkrywaniu jednego urządzenia.';

$GLOBALS["lang"]['Used internally when discovering a single device. Links to <code>devices.id</code>.'] = 'Używany wewnętrznie przy odkrywaniu jednego urządzenia. Linki do <code>devices.id</code>.';

$GLOBALS["lang"]['Used when LDAP servers have been configured to populate a users details - this includes the Orgs to which they have access. If a user is in this LDAP group, they are assigned this org.'] = 'Używane, gdy serwery LDAP zostały skonfigurowane do popularyzacji danych użytkowników - obejmuje to Orgi, do których mają dostęp. Jeśli użytkownik jest w tej grupie LDAP, przypisuje się mu ten org.';

$GLOBALS["lang"]['Used when LDAP servers have been configured to populate a users details - this includes the Roles which they are assigned. If a user is in this LDAP group, they are assigned this role.'] = 'Używane, gdy serwery LDAP zostały skonfigurowane do popularyzacji danych użytkowników - zawiera to Roles, które zostały im przypisane. Jeśli użytkownik jest w tej grupie LDAP, przypisuje mu tę rolę.';

$GLOBALS["lang"]['Used when searching OpenLDAP to match a users uid to a groups members. Default of <code>memberUid</code>. Used by OpenLDAP only.'] = 'Używane podczas wyszukiwania OpenLDAP do dopasowania uid użytkowników do członków grup. Domyślnie <code>memberUid</code>. Używany tylko przez OpenLDAP.';

$GLOBALS["lang"]['Used with Integrations and FirstWave monitoring applications.'] = 'Używane z aplikacjami Integrations i FirstWave do monitorowania.';

$GLOBALS["lang"]['Used with Integrations and FirstWave monitoring applications. Set to y if working SNMP detected by discovery.'] = 'Używane z aplikacjami Integrations i FirstWave do monitorowania. Ustaw na y, jeśli działa SNMP wykryte przez odkrycie.';

$GLOBALS["lang"]['user'] = 'Użytkownik';

$GLOBALS["lang"]['User'] = 'Użytkownik';

$GLOBALS["lang"]['User DN'] = 'Użytkownik DN';

$GLOBALS["lang"]['user_group'] = 'Grupa użytkowników';

$GLOBALS["lang"]['User Group'] = 'Grupa użytkowników';

$GLOBALS["lang"]['user_id'] = 'Identyfikator użytkownika';

$GLOBALS["lang"]['User ID'] = 'Identyfikator użytkownika';

$GLOBALS["lang"]['user_interaction'] = 'Interakcje z użytkownikami';

$GLOBALS["lang"]['User Interaction'] = 'Interakcje z użytkownikami';

$GLOBALS["lang"]['User Membership Attribute'] = 'Atrybut członkostwa użytkownika';

$GLOBALS["lang"]['user_name'] = 'Nazwa użytkownika';

$GLOBALS["lang"]['User Name'] = 'Nazwa użytkownika';

$GLOBALS["lang"]['User Policies'] = 'Polityka użytkownika';

$GLOBALS["lang"]['Username'] = 'Nazwa użytkownika';

$GLOBALS["lang"]['username'] = 'Nazwa użytkownika';

$GLOBALS["lang"]['users'] = 'Użytkownicy';

$GLOBALS["lang"]['Users'] = 'Użytkownicy';

$GLOBALS["lang"]['Users, Roles and Orgs'] = 'Użytkownicy, role i orgi';

$GLOBALS["lang"]['Using Entra for Auth'] = 'Korzystanie z Entra dla Auth';

$GLOBALS["lang"]['Using OKTA for Auth'] = 'Korzystanie z OKTA dla Auth';

$GLOBALS["lang"]['Usually Mb/s, from Location A.'] = 'Zazwyczaj Mb / s, z lokalizacji A';

$GLOBALS["lang"]['Usually Mb/s, from Location B.'] = 'Zazwyczaj Mb / s, z Lokalizacji B';

$GLOBALS["lang"]['Usually Mb/s, to Location A.'] = 'Zazwyczaj Mb / s, do lokalizacji A';

$GLOBALS["lang"]['Usually Mb/s, to Location B.'] = 'Zazwyczaj Mb / s, do lokalizacji B';

$GLOBALS["lang"]['Uzbekistan'] = 'Uzbekistan';

$GLOBALS["lang"]['VLAN'] = 'VLAN';

$GLOBALS["lang"]['VLAN ID'] = 'Identyfikator VLAN';

$GLOBALS["lang"]['valid_from'] = 'Ważne od';

$GLOBALS["lang"]['Valid From'] = 'Ważne od';

$GLOBALS["lang"]['valid_from_raw'] = 'Ważny z surowców';

$GLOBALS["lang"]['Valid From Raw'] = 'Ważny z surowców';

$GLOBALS["lang"]['valid_to'] = 'Ważne';

$GLOBALS["lang"]['Valid To'] = 'Ważne';

$GLOBALS["lang"]['valid_to_raw'] = 'Ważny do surowca';

$GLOBALS["lang"]['Valid To Raw'] = 'Ważny do surowca';

$GLOBALS["lang"]['Valid Values'] = 'Ważne wartości';

$GLOBALS["lang"]['value'] = 'Wartość';

$GLOBALS["lang"]['Value'] = 'Wartość';

$GLOBALS["lang"]['values'] = 'Wartości';

$GLOBALS["lang"]['Values'] = 'Wartości';

$GLOBALS["lang"]['Vanuatu'] = 'Vanuatu';

$GLOBALS["lang"]['VarChar'] = 'VarChar';

$GLOBALS["lang"]['Varchar'] = 'Varchar Przewodniczący';

$GLOBALS["lang"]['variable'] = 'Zmienna';

$GLOBALS["lang"]['Variable'] = 'Zmienna';

$GLOBALS["lang"]['vendor'] = 'Sprzedawca';

$GLOBALS["lang"]['Vendor'] = 'Sprzedawca';

$GLOBALS["lang"]['vendors'] = 'Kupujący';

$GLOBALS["lang"]['Vendors'] = 'Kupujący';

$GLOBALS["lang"]['Venezuela'] = 'Wenezuela';

$GLOBALS["lang"]['version'] = 'Wersja';

$GLOBALS["lang"]['Version'] = 'Wersja';

$GLOBALS["lang"]['version_padded'] = 'Wersja dodana';

$GLOBALS["lang"]['Version Padded'] = 'Wersja dodana';

$GLOBALS["lang"]['version_raw'] = 'Wersja surowa';

$GLOBALS["lang"]['Version Raw'] = 'Wersja surowa';

$GLOBALS["lang"]['version_string'] = 'String wersji';

$GLOBALS["lang"]['Version String'] = 'String wersji';

$GLOBALS["lang"]['video'] = 'Wideo';

$GLOBALS["lang"]['Video'] = 'Wideo';

$GLOBALS["lang"]['Vietnam'] = 'Wietnam';

$GLOBALS["lang"]['View'] = 'Widok';

$GLOBALS["lang"]['View All'] = 'Wyświetl wszystkie';

$GLOBALS["lang"]['View Details'] = 'Wyświetl szczegóły';

$GLOBALS["lang"]['View Device'] = 'Widok Urządzenie';

$GLOBALS["lang"]['View Discovery'] = 'Widok Odkrywanie';

$GLOBALS["lang"]['View Policy'] = 'Polityka przeglądania';

$GLOBALS["lang"]['Virtual Private Network'] = 'Wirtualna sieć prywatna';

$GLOBALS["lang"]['Virtualisation'] = 'Wirtualizacja';

$GLOBALS["lang"]['Visit our YouTube channel for instructional videos.'] = 'Odwiedź nasz kanał YouTube dla instruktażowych filmów wideo.';

$GLOBALS["lang"]['vlan'] = 'Vlan Przewodniczący';

$GLOBALS["lang"]['Vlan'] = 'Vlan Przewodniczący';

$GLOBALS["lang"]['vlan_id'] = 'Vlan ID';

$GLOBALS["lang"]['Vlan ID'] = 'Vlan ID';

$GLOBALS["lang"]['vm'] = 'Vm';

$GLOBALS["lang"]['Vm'] = 'Vm';

$GLOBALS["lang"]['vm_device_id'] = 'Identyfikator urządzenia Vm';

$GLOBALS["lang"]['Vm Device ID'] = 'Identyfikator urządzenia Vm';

$GLOBALS["lang"]['vm_group'] = 'Grupa Vm';

$GLOBALS["lang"]['Vm Group'] = 'Grupa Vm';

$GLOBALS["lang"]['vm_ident'] = 'Vm Ident';

$GLOBALS["lang"]['Vm Ident'] = 'Vm Ident';

$GLOBALS["lang"]['vm_server_name'] = 'Nazwa serwera Vm';

$GLOBALS["lang"]['Vm Server Name'] = 'Nazwa serwera Vm';

$GLOBALS["lang"]['vm_vendor'] = 'Vm Vendor';

$GLOBALS["lang"]['Vm Vendor'] = 'Vm Vendor';

$GLOBALS["lang"]['vuln_status'] = 'Status Vuln';

$GLOBALS["lang"]['Vuln Status'] = 'Status Vuln';

$GLOBALS["lang"]['vulnerabilities'] = 'Wrażliwość';

$GLOBALS["lang"]['Vulnerabilities'] = 'Wrażliwość';

$GLOBALS["lang"]['vulnerabilities_cache'] = 'Wrażliwości Cache';

$GLOBALS["lang"]['Vulnerabilities Cache'] = 'Wrażliwości Cache';

$GLOBALS["lang"]['vulnerability_id'] = 'Identyfikator zagrożenia';

$GLOBALS["lang"]['Vulnerability ID'] = 'Identyfikator zagrożenia';

$GLOBALS["lang"]['WHERE'] = 'GDZIE';

$GLOBALS["lang"]['wall_port'] = 'Port ścienny';

$GLOBALS["lang"]['Wall Port'] = 'Port ścienny';

$GLOBALS["lang"]['Wallis and Futuna'] = 'Wallis i Futuna';

$GLOBALS["lang"]['Want to know more?'] = 'Chcesz wiedzieć więcej?';

$GLOBALS["lang"]['Warning'] = 'Ostrzeżenie';

$GLOBALS["lang"]['warranty'] = 'Gwarancja';

$GLOBALS["lang"]['Warranty'] = 'Gwarancja';

$GLOBALS["lang"]['warranty_duration'] = 'Czas trwania gwarancji';

$GLOBALS["lang"]['Warranty Duration'] = 'Czas trwania gwarancji';

$GLOBALS["lang"]['warranty_expires'] = 'Termin gwarancji';

$GLOBALS["lang"]['Warranty Expires'] = 'Termin gwarancji';

$GLOBALS["lang"]['warranty_status'] = 'Status gwarancji';

$GLOBALS["lang"]['Warranty Status'] = 'Status gwarancji';

$GLOBALS["lang"]['warranty_type'] = 'Rodzaj gwarancji';

$GLOBALS["lang"]['Warranty Type'] = 'Rodzaj gwarancji';

$GLOBALS["lang"]['Web'] = 'Web';

$GLOBALS["lang"]['Webserver'] = 'Serwer internetowy';

$GLOBALS["lang"]['Website'] = 'Strona internetowa';

$GLOBALS["lang"]['Wednesday'] = 'Środa';

$GLOBALS["lang"]['weight'] = 'Masa ciała';

$GLOBALS["lang"]['Weight'] = 'Masa ciała';

$GLOBALS["lang"]['weight_current'] = 'Bieżąca masa';

$GLOBALS["lang"]['Weight Current'] = 'Bieżąca masa';

$GLOBALS["lang"]['weight_empty'] = 'Waga pusta';

$GLOBALS["lang"]['Weight Empty'] = 'Waga pusta';

$GLOBALS["lang"]['weight_max'] = 'Waga maksymalna';

$GLOBALS["lang"]['Weight Max'] = 'Waga maksymalna';

$GLOBALS["lang"]['Welcome'] = 'Powitanie';

$GLOBALS["lang"]['Welcome Dashboard'] = 'Powitanie Deska rozdzielcza';

$GLOBALS["lang"]['Welcome to FirstWave Open-AudIT'] = 'Witamy w FirstWave Open- Audit';

$GLOBALS["lang"]['Western Sahara'] = 'Sahara Zachodnia';

$GLOBALS["lang"]['What Can I Expect if I Have no Credentials'] = 'Co mogę oczekiwać, jeśli nie mam żadnych zasług';

$GLOBALS["lang"]['What is the purpose of this rack.'] = 'Jaki jest cel tego stojaka?';

$GLOBALS["lang"]['What is the type of this location. Allowable types held in <code>attributes</code> table.'] = 'Jaki jest typ tego miejsca? Dopuszczalne typy utrzymywane w <code>attributes</code> stół.';

$GLOBALS["lang"]['When integrating devices from the external system, if the device doesnt exist in Open-AudIT should we create it?'] = 'Podczas integracji urządzeń z systemu zewnętrznego, jeśli urządzenie nie istnieje w Open- Audit powinniśmy go utworzyć?';

$GLOBALS["lang"]['When integrating devices from the external system, if the device has been updated in the external system should we update it in Open-AudIT?'] = 'Podczas integrowania urządzeń z systemu zewnętrznego, jeśli urządzenie zostało zaktualizowane w systemie zewnętrznym, czy powinniśmy zaktualizować je w Open-Audit?';

$GLOBALS["lang"]['When retrieve an external device, should we run discovery upon it?'] = 'Kiedy odzyskamy zewnętrzne urządzenie, powinniśmy go wykryć?';

$GLOBALS["lang"]['When this benchmark is scheduled to be executed. Derived from the associated <code>tasks.type</code> and <code>tasks.sub_resource_id</code>.'] = 'Kiedy ten wskaźnik ma być wykonany. Pochodne z powiązanych <code>tasks.type</code> oraz <code>tasks.sub_resource_id</code>.';

$GLOBALS["lang"]['When this log was created.'] = 'Kiedy ten dziennik został stworzony.';

$GLOBALS["lang"]['When this queue item started processing.'] = 'Kiedy ta pozycja kolejki zaczęła przetwarzać.';

$GLOBALS["lang"]['When we execute this baseline, should we check for items on devices that are not in a policy for this baseline.'] = 'Kiedy wykonujemy ten punkt odniesienia, powinniśmy sprawdzić, czy na urządzeniach, które nie są w polityce dla tego punktu odniesienia.';

$GLOBALS["lang"]['When we receive an open port, should we attempt to test for the version of the service currently running upon it? This assists in confirming actual running services.'] = 'Kiedy otrzymujemy otwarty port, czy powinniśmy spróbować przetestować jego wersję? Pomaga to w potwierdzaniu rzeczywistych usług.';

$GLOBALS["lang"]['where'] = 'Gdzie';

$GLOBALS["lang"]['Where'] = 'Gdzie';

$GLOBALS["lang"]['Where on the Device Details screen you would like to see this field appear.'] = 'Gdzie na ekranie Szczegóły urządzenia chcesz zobaczyć to pole.';

$GLOBALS["lang"]['Where the rack is in the row.'] = 'Gdzie wieszak jest w rzędzie.';

$GLOBALS["lang"]['Whether the vulnerability affects components beyond its own using Impact, Availability and Confidentiality.'] = 'Czy podatność na zagrożenia wpływa na komponenty wykraczające poza jej zakres, wykorzystując Impact, Availability i Poufność.';

$GLOBALS["lang"]['Whether user interaction is required (None, Passive, Active).'] = 'Czy wymagana jest interakcja użytkownika (Brak, pasywny, aktywny).';

$GLOBALS["lang"]['Which OS this benchmark applies to.'] = 'Do którego systemu operacyjnego stosuje się ten wskaźnik referencyjny.';

$GLOBALS["lang"]['Which devices should Open-AudIT create from the external system (if any). Using All, None or a given Attribute.'] = 'Które urządzenia powinny Open- Audit tworzyć z systemu zewnętrznego (jeśli istnieje). Korzystanie z wszystkich, Brak lub dany Atrybut.';

$GLOBALS["lang"]['Which sub-menu should we display this query in.'] = 'W którym podmenu powinniśmy wyświetlić to zapytanie.';

$GLOBALS["lang"]['Who made this rack.'] = 'Kto to zrobił.';

$GLOBALS["lang"]['Why Windows Server Only?'] = 'Dlaczego Windows Server Only?';

$GLOBALS["lang"]['Why do we exclude this policy?'] = 'Dlaczego wykluczamy tę politykę?';

$GLOBALS["lang"]['Wide Area Network'] = 'Sieć o szerokim zasięgu';

$GLOBALS["lang"]['Widget'] = 'Widget';

$GLOBALS["lang"]['Widget # '] = 'Widget # ';

$GLOBALS["lang"]['Widget Type'] = 'Typ widżetu';

$GLOBALS["lang"]['widgets'] = 'Widgety';

$GLOBALS["lang"]['Widgets'] = 'Widgety';

$GLOBALS["lang"]['width'] = 'Szerokość';

$GLOBALS["lang"]['Width'] = 'Szerokość';

$GLOBALS["lang"]['windows'] = 'Okna';

$GLOBALS["lang"]['Windows'] = 'Okna';

$GLOBALS["lang"]['Windows Test Script'] = 'Windows Test Script';

$GLOBALS["lang"]['Wireless Local Area Network'] = 'Bezprzewodowa sieć lokalna';

$GLOBALS["lang"]['wmi_fails'] = 'Wmi Fails';

$GLOBALS["lang"]['Wmi Fails'] = 'Wmi Fails';

$GLOBALS["lang"]['wmi_timeout'] = 'Czas Wmi';

$GLOBALS["lang"]['Wmi Timeout'] = 'Czas Wmi';

$GLOBALS["lang"]['workgroup'] = 'Grupa robocza';

$GLOBALS["lang"]['Workgroup'] = 'Grupa robocza';

$GLOBALS["lang"]['Working Credentials'] = 'Funkcje robocze';

$GLOBALS["lang"]['XML'] = 'XML';

$GLOBALS["lang"]['Yellow Query'] = 'Żółte zapytanie';

$GLOBALS["lang"]['Yemen'] = 'Jemen';

$GLOBALS["lang"]['Yes'] = 'Tak.';

$GLOBALS["lang"]['You may want to copy and paste this URL in an email to your staff.'] = 'Możesz skopiować i wkleić ten adres URL w e-mailu do swojego personelu.';

$GLOBALS["lang"]['You must delete your existing license before adding a new license.'] = 'Przed dodaniem nowej licencji należy usunąć istniejącą licencję.';

$GLOBALS["lang"]['YouTube Tutorials'] = 'Tutoriale YouTube';

$GLOBALS["lang"]['Your AWS EC2 API key.'] = 'Twój klucz AWS EC2 API.';

$GLOBALS["lang"]['Your Google Compute credentials as JSON.'] = 'Twoje kwalifikacje do Google Compute jako JSON.';

$GLOBALS["lang"]['Your Licenses'] = 'Twoje licencje';

$GLOBALS["lang"]['Your Microsoft Azure Client ID.'] = 'Twój identyfikator klienta Microsoft Azure.';

$GLOBALS["lang"]['Your Microsoft Azure Client Secret.'] = 'Tajemnica klienta Microsoft Azure.';

$GLOBALS["lang"]['Your Microsoft Azure Subscription ID.'] = 'Twój identyfikator subskrypcji Microsoft Azure.';

$GLOBALS["lang"]['Your Microsoft Azure Tennant ID.'] = 'Twój identyfikator Microsoft Azure Tennant.';

$GLOBALS["lang"]['Your SQL to select attributes that will populate this query.'] = 'Twój SQL wybiera atrybuty, które będą popularyzować to zapytanie.';

$GLOBALS["lang"]['Your SQL to select devices that will populate this group.'] = 'Twój SQL do wyboru urządzeń, które będą populować tę grupę.';

$GLOBALS["lang"]['Your SSH key.'] = 'Twój klucz SSH.';

$GLOBALS["lang"]['Your access credentials, as per that clouds native API.'] = 'Twoje dane dostępu, jak na to, że chmury rodzimych API.';

$GLOBALS["lang"]['Your description of the status of this connection (provisioned, retired, etc).'] = 'Opis stanu tego połączenia (zapasowy, emerytowany itp.).';

$GLOBALS["lang"]['Your description of this item.'] = 'Twój opis tego artykułu.';

$GLOBALS["lang"]['Your generic name for this piece of software'] = 'Twoja ogólna nazwa tego oprogramowania';

$GLOBALS["lang"]['Your generic version for this piece of software'] = 'Twoja wersja ogólna dla tego elementu oprogramowania';

$GLOBALS["lang"]['Zambia'] = 'Zambia';

$GLOBALS["lang"]['Zimbabwe'] = 'Zimbabwe';

$GLOBALS["lang"]['active'] = 'aktywny';

$GLOBALS["lang"]['active directory'] = 'aktywny katalog';

$GLOBALS["lang"]['active/active'] = 'aktywne / aktywne';

$GLOBALS["lang"]['active/passive'] = 'aktywny / pasywny';

$GLOBALS["lang"]['advertisement'] = 'reklama';

$GLOBALS["lang"]['alert'] = 'wpis';

$GLOBALS["lang"]['all'] = 'wszystkie';

$GLOBALS["lang"]['allocated'] = 'przydzielone';

$GLOBALS["lang"]['amazon'] = 'amazon';

$GLOBALS["lang"]['antivirus'] = 'Program antywirusowy';

$GLOBALS["lang"]['application'] = 'wniosek';

$GLOBALS["lang"]['approved'] = 'zatwierdzone';

$GLOBALS["lang"]['attribute'] = 'atrybut';

$GLOBALS["lang"]['auto'] = 'auto';

$GLOBALS["lang"]['backup'] = 'kopia zapasowa';

$GLOBALS["lang"]['banned'] = 'zakaz';

$GLOBALS["lang"]['blog'] = 'blog';

$GLOBALS["lang"]['bottom'] = 'dno';

$GLOBALS["lang"]['browser_lang'] = 'browser _ lang';

$GLOBALS["lang"]['building'] = 'budownictwo';

$GLOBALS["lang"]['cloud'] = 'chmura';

$GLOBALS["lang"]['code'] = 'kod';

$GLOBALS["lang"]['collector'] = 'kolektor';

$GLOBALS["lang"]['compute'] = 'obliczyć';

$GLOBALS["lang"]['config'] = 'config';

$GLOBALS["lang"]['contains'] = 'zawiera';

$GLOBALS["lang"]['create'] = 'create';

$GLOBALS["lang"]['created'] = 'created';

$GLOBALS["lang"]['critical'] = 'krytyczne';

$GLOBALS["lang"]['cve'] = 'cve';

$GLOBALS["lang"]['database'] = 'baza danych';

$GLOBALS["lang"]['debug'] = 'debug';

$GLOBALS["lang"]['delegated'] = 'przekazane';

$GLOBALS["lang"]['delete'] = 'Usuń';

$GLOBALS["lang"]['deleted'] = 'usunięty';

$GLOBALS["lang"]['denied'] = 'odrzucono';

$GLOBALS["lang"]['devices'] = 'urządzenia';

$GLOBALS["lang"]['digitalocean'] = 'digitalocean';

$GLOBALS["lang"]['does not equal'] = 'nie równa się';

$GLOBALS["lang"]['emergency'] = 'awaryjne';

$GLOBALS["lang"]['entra'] = 'entra';

$GLOBALS["lang"]['equals'] = 'równa się';

$GLOBALS["lang"]['error'] = 'błąd';

$GLOBALS["lang"]['established'] = 'ustalone';

$GLOBALS["lang"]['excluded'] = 'wyłączona';

$GLOBALS["lang"]['expired'] = 'wygasł';

$GLOBALS["lang"]['extreme - Without which, the organisation would fail.

very high - Functions that are essential for the organisations survival and must be restored immediately.

high - Important functions that should be restored quickly but may have a slightly longer recovery time.

medium - Functions that are necessary but can tolerate longer downtime.

low - Non-essential functions that can be delayed without significant impact.

unassigned - The default until set.'] = 'ekstremalne - Bez czego organizacja nie powiedzie się.

bardzo wysoki - Funkcje, które są niezbędne dla przetrwania organizacji i muszą zostać natychmiast przywrócone.

wysokie - Ważne funkcje, które powinny być szybko przywrócone, ale mogą mieć nieco dłuższy czas odzyskiwania.

medium - Funkcje, które są niezbędne, ale mogą tolerować dłuższy czas przestoju.

niskie - nieistotne funkcje, które mogą być opóźnione bez znaczącego wpływu.

uncessigned - Domyślnie do ustawienia.';

$GLOBALS["lang"]['fail'] = 'niepowodzenie';

$GLOBALS["lang"]['false'] = 'false';

$GLOBALS["lang"]['file'] = 'plik';

$GLOBALS["lang"]['firewall'] = 'firewall';

$GLOBALS["lang"]['fixed'] = 'stałe';

$GLOBALS["lang"]['floor'] = 'podłoga';

$GLOBALS["lang"]['front'] = 'przód';

$GLOBALS["lang"]['front-left'] = 'Lewa strona';

$GLOBALS["lang"]['front-right'] = 'Prawo pierwszeństwa';

$GLOBALS["lang"]['github'] = 'github';

$GLOBALS["lang"]['google'] = 'google';

$GLOBALS["lang"]['greater or equals'] = 'większe lub równe';

$GLOBALS["lang"]['greater than'] = 'większa niż';

$GLOBALS["lang"]['group'] = 'grupa';

$GLOBALS["lang"]['head'] = 'głowa';

$GLOBALS["lang"]['here'] = 'Tutaj';

$GLOBALS["lang"]['high availability'] = 'wysoka dostępność';

$GLOBALS["lang"]['howto'] = 'jak do';

$GLOBALS["lang"]['ignored'] = 'ignorowane';

$GLOBALS["lang"]['in'] = 'w';

$GLOBALS["lang"]['inactive'] = 'nieaktywny';

$GLOBALS["lang"]['incomplete'] = 'niekompletny';

$GLOBALS["lang"]['info'] = 'info';

$GLOBALS["lang"]['int, text, bool (y/n), etc'] = 'int, tekst, bool (y / n), itp.';

$GLOBALS["lang"]['is licensed to'] = 'jest licencjonowany do';

$GLOBALS["lang"]['left'] = 'lewy';

$GLOBALS["lang"]['less or equals'] = 'mniej lub równa się';

$GLOBALS["lang"]['less than'] = 'mniej niż';

$GLOBALS["lang"]['license'] = 'licencja';

$GLOBALS["lang"]['like'] = 'jak';

$GLOBALS["lang"]['line'] = 'linia';

$GLOBALS["lang"]['load balancing'] = 'bilansowanie obciążenia';

$GLOBALS["lang"]['location'] = 'lokalizacja';

$GLOBALS["lang"]['managed'] = 'zarządzane';

$GLOBALS["lang"]['microsoft'] = 'microsoft';

$GLOBALS["lang"]['mount point'] = 'punkt montowania';

$GLOBALS["lang"]['network'] = 'sieć';

$GLOBALS["lang"]['news'] = 'wiadomości';

$GLOBALS["lang"]['no'] = 'nie';

$GLOBALS["lang"]['node'] = 'węzeł';

$GLOBALS["lang"]['none'] = 'brak';

$GLOBALS["lang"]['normal'] = 'normalny';

$GLOBALS["lang"]['not applicable'] = 'nie dotyczy';

$GLOBALS["lang"]['not in'] = 'nie w';

$GLOBALS["lang"]['not like'] = 'nie jak';

$GLOBALS["lang"]['notice'] = 'zawiadomienie';

$GLOBALS["lang"]['notification'] = 'powiadomienie';

$GLOBALS["lang"]['okta'] = 'okta';

$GLOBALS["lang"]['openldap'] = 'openldap';

$GLOBALS["lang"]['optimized'] = 'zoptymalizowane';

$GLOBALS["lang"]['optionally '] = 'opcjonalnie ';

$GLOBALS["lang"]['other'] = 'pozostałe';

$GLOBALS["lang"]['package'] = 'opakowanie';

$GLOBALS["lang"]['partition'] = 'partycja';

$GLOBALS["lang"]['pass'] = 'pass';

$GLOBALS["lang"]['pending'] = 'oczekujące';

$GLOBALS["lang"]['performance'] = 'wydajność';

$GLOBALS["lang"]['performed'] = 'wykonane';

$GLOBALS["lang"]['pie'] = 'ciasto';

$GLOBALS["lang"]['planning'] = 'planowanie';

$GLOBALS["lang"]['predictable'] = 'przewidywalny';

$GLOBALS["lang"]['query'] = 'zapytanie';

$GLOBALS["lang"]['rear'] = 'tył';

$GLOBALS["lang"]['rear-left'] = 'lewa tylna';

$GLOBALS["lang"]['rear-right'] = 'prawo do tyłu';

$GLOBALS["lang"]['regex'] = 'regex';

$GLOBALS["lang"]['release'] = 'zwolnienie';

$GLOBALS["lang"]['reserved'] = 'zastrzeżone';

$GLOBALS["lang"]['right'] = 'prawo';

$GLOBALS["lang"]['room'] = 'pokój';

$GLOBALS["lang"]['row'] = 'wiersz';

$GLOBALS["lang"]['stand-alone'] = 'samodzielny';

$GLOBALS["lang"]['standard'] = 'standard';

$GLOBALS["lang"]['starts with'] = 'zaczyna się od';

$GLOBALS["lang"]['storage'] = 'przechowywanie';

$GLOBALS["lang"]['timestamp'] = 'znacznik czasu';

$GLOBALS["lang"]['top'] = 'górna';

$GLOBALS["lang"]['top secret - Military / Government classification. Disclosure would cause exceptionally grave danger to national security.

secret - Military / Government classification. Disclosure would cause serious damage to national security.

confidential - Military / Government and Private Sector classification. Data that is confidential includes trade secrets, intellectual data, application programming code, and other data that could seriously affect the organization if unauthorized disclosure occurred. Data at this level would be available only to personnel in the organization whose work needs, or is directly related to, the accessed data. Access to confidential data usually requires authorization for each access.

private - Private Sector classification. Data that is private includes any information related to personnel, including human resources records, medical records, and salary information, that is used only within the organization.

sensitive - Military / Government and Private Sector classification. Data that is sensitive includes organizational financial information and requires extra measures to ensure its CIA and accuracy. Disclosure might harm national security.

public - Private Sector classification. Public data is data that is generally shared with the public and would not cause a negative impact on the organization. Examples of public data include how many people work in the organization and what products an organization manufactures or sells.

unclassified - Military / Government classification. Any information that can generally be distributed to the public without any threat to national interest.

unassigned - The default until set.'] = 'ściśle tajne - klasyfikacja wojskowa / rządowa. Ujawnienie informacji spowodowałoby wyjątkowo poważne zagrożenie dla bezpieczeństwa narodowego.

tajemnica - klasyfikacja wojskowa / rządowa. Ujawnienie informacji spowodowałoby poważne szkody dla bezpieczeństwa narodowego.

poufne - klasyfikacja wojskowo-rządowa i sektora prywatnego. Dane poufne obejmują tajemnice handlowe, dane intelektualne, kod programowania aplikacji oraz inne dane, które mogłyby mieć poważny wpływ na organizację, gdyby doszło do nieautoryzowanego ujawnienia. Dane na tym poziomie byłyby dostępne tylko dla personelu organizacji, którego praca wymaga lub jest bezpośrednio związana z dostępnymi danymi. Dostęp do poufnych danych wymaga zazwyczaj autoryzacji dla każdego dostępu.

klasyfikacja sektora prywatnego - prywatnego. Dane prywatne obejmują wszelkie informacje dotyczące personelu, w tym dane dotyczące zasobów ludzkich, dokumentacji medycznej i informacji o wynagrodzeniu, które są wykorzystywane wyłącznie w ramach organizacji.

delikatna - klasyfikacja wojskowych / rządowych i prywatnych sektorów. Dane wrażliwe obejmują organizacyjne informacje finansowe i wymagają dodatkowych środków w celu zapewnienia ich CIA i dokładności. Ujawnienie informacji może zaszkodzić bezpieczeństwu narodowemu.

klasyfikacja sektora publicznego - prywatnego. Dane publiczne są danymi, które są ogólnie udostępniane opinii publicznej i nie będą miały negatywnego wpływu na organizację. Przykłady danych publicznych obejmują, jak wiele osób pracuje w organizacji i jakie produkty organizacja produkuje lub sprzedaje.

niesklasyfikowany - klasyfikacja wojskowa / rządowa. Wszelkie informacje, które mogą być ogólnie rozpowszechniane wśród społeczeństwa bez zagrożenia dla interesu narodowego.

uncessigned - Domyślnie do ustawienia.';

$GLOBALS["lang"]['traffic'] = 'ruch';

$GLOBALS["lang"]['true'] = 'prawda';

$GLOBALS["lang"]['unallocated'] = 'nieprzydzielone';

$GLOBALS["lang"]['unauthorised'] = 'nieautoryzowany';

$GLOBALS["lang"]['unknown'] = 'nieznany';

$GLOBALS["lang"]['unmanaged'] = 'niezarządzane';

$GLOBALS["lang"]['unused'] = 'niewykorzystane';

$GLOBALS["lang"]['update'] = 'aktualizacja';

$GLOBALS["lang"]['valid'] = 'ważne';

$GLOBALS["lang"]['virtualisation'] = 'wirtualizacja';

$GLOBALS["lang"]['warning'] = 'ostrzeżenie';

$GLOBALS["lang"]['web'] = 'web';

$GLOBALS["lang"]['yes'] = 'tak';

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

