<?php
$GLOBALS["lang"][' Default, currently '] = ' Domyślne, aktualnie ';

$GLOBALS["lang"][' If something does not work as expected, your first thing to do is check the logs.'] = ' Jeśli coś nie działa zgodnie z oczekiwaniami, pierwszą rzeczą do zrobienia jest sprawdzenie dzienników.';

$GLOBALS["lang"][' is now supported with a language file. To change your user to use this language, click '] = ' jest teraz obsługiwany z pliku językowego. Aby zmienić użytkownika, aby używać tego języka, kliknij ';

$GLOBALS["lang"][' seconds'] = ' sekund';

$GLOBALS["lang"][', but will not need to remember a separate set of logon credentials.'] = ', ale nie będzie musiał pamiętać oddzielny zestaw logonów.';

$GLOBALS["lang"][', of which we supply over thirty as a default set. Professional users cannot alter these, but an Enterprise user has complete customisation abilities - including creating your own.'] = ', z czego dostarczamy ponad 30 jako zestaw domyślny. Użytkownicy profesjonalni nie mogą ich zmieniać, ale użytkownik Enterprise ma pełne zdolności dostosowawcze - w tym tworzenie własnych.';

$GLOBALS["lang"][', you <i>must</i> be using https on your Open-AudIT server to use Entra for Auth. Please configure Apache to use <strong>https</strong> before configuring Entra for auth.'] = 'Ty <i>must</i> używać https na serwerze Open- Audit, aby używać Entra dla Auth. Proszę skonfigurować Apache do użycia <strong>https</strong> przed skonfigurowaniem Entra na auth.';

$GLOBALS["lang"]['. To enable this, edit the configuration item for '] = '. Aby to włączyć, edytuj element konfiguracji dla ';

$GLOBALS["lang"]['10 Minutes'] = '10 minut';

$GLOBALS["lang"]['15 Minutes'] = '15 minut';

$GLOBALS["lang"]['30 Minutes'] = '30 minut';

$GLOBALS["lang"]['5 Minutes'] = '5 minut';

$GLOBALS["lang"]['93 controls grouped into organizational, people, physical, and technological categories'] = '93 kontrole pogrupowane w kategorie organizacyjne, ludzkie, fizyczne i technologiczne';

$GLOBALS["lang"]['<br> <strong>NOTE</strong> - You are accessing this URL from the local Open-AudIT server. The downloaded script will not be able to submit when run on any other machine. If you need to audit other machines, please download the script from any remote machine, not using a browser on the Open-AudIT server itself.'] = '<br/><strong>UWAGA</strong> - Masz dostęp do tego adresu URL z lokalnego serwera Open- Audit. Ściągnięty skrypt nie będzie w stanie złożyć podczas uruchamiania na innej maszynie. W przypadku potrzeby audytu innych maszyn, należy pobrać skrypt z dowolnego zdalnego urządzenia, nie używając przeglądarki na samym serwerze Open- Audit.';

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

$GLOBALS["lang"]['<p>Microsoft Windows desktop systems have network limitations that may impact the performance of Open-AudIT. The TCP/IP stack limits the number of simultaneous incomplete outbound TCP connection attempts. After the limit is reached, subsequent connection attempts are put in a queue and will be resolved at a fixed rate (10 per second). If too many enter the queue, they may be dropped. And finally, Apache will be restarted by the OS. For this reason, installing Open-AudIT on a Windows desktop operating system is not supported.<br><br>There is nothing wrong with the Open-AudIT code, nor can we do anything to address this issue on Windows client machines.'] = '<p>Microsoft Systemy Windows mają ograniczenia sieciowe, które mogą mieć wpływ na wydajność Open- Audit. Stos TCP / IP ogranicza liczbę jednoczesnych niekompletnych prób połączenia TCP. Po osiągnięciu limitu kolejne próby połączenia są ustawiane w kolejce i zostaną rozwiązane w stałej szybkości (10 na sekundę). Jeśli zbyt wielu wejdzie do kolejki, mogą zostać wycofane. I wreszcie, Apache zostanie ponownie uruchomiony przez OS. Z tego powodu instalacja Open- Audit na pulpicie systemu operacyjnego Windows nie jest obsługiwana.<br/><br/>Nie ma nic złego z kodem Open- Audit, ani nie możemy zrobić nic, aby rozwiązać ten problem na maszynach klienta Windows.</p>';

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

$GLOBALS["lang"]['<strong>NOTE</strong> - You are accessing this URL from the local Open-AudIT server. The downloaded script will not be able to submit when run on any other machine. If you need to audit other machines, please download the script from any remote machine, not using a browser on the Open-AudIT server itself.'] = '<strong>UWAGA</strong> - Masz dostęp do tego adresu URL z lokalnego serwera Open- Audit. Ściągnięty skrypt nie będzie w stanie złożyć podczas uruchamiania na innej maszynie. W przypadku potrzeby audytu innych maszyn, należy pobrać skrypt z dowolnego zdalnego urządzenia, nie używając przeglądarki na samym serwerze Open- Audit.';

$GLOBALS["lang"]['A CVE item that does not contain a filter to determine the affected item(s).'] = 'Element CVE, który nie zawiera filtra w celu określenia danego elementu (-ów).';

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

$GLOBALS["lang"]['A LAN can be connected to a WAN using a router.'] = 'LAN można podłączyć do WAN za pomocą routera.';

$GLOBALS["lang"]['A Metropolitan area network (MAN) is a large computer network that usually spans a city or a large campus.'] = 'Metropolitan area network (MAN) to duża sieć komputerowa, która zwykle obejmuje miasto lub duży kampus.';

$GLOBALS["lang"]['A Seed discovery uses an initial IP to retrieve the IPs of any other devices it knows about, adds those IPs to the list and scans those - again asking for any IPs those additional devices knows about. Rinse and repeat. It is intelligent enough to know if it has already scanned a given IP in its execution and discards any already scanned (or even on the list to be scanned).'] = 'A Odkrycie materiału siewnego wykorzystuje początkowe IP do pobrania IP wszelkich innych urządzeń, o których wie, dodaje te IP do listy i skanuje je - ponownie prosi o jakiekolwiek IP, które dodatkowe urządzenia wiedzą. Przepłukać i powtórzyć. Jest na tyle inteligentny, aby wiedzieć, czy już skanował dany IP w jego wykonaniu i odrzuca jakiekolwiek już zeskanowane (lub nawet na liście do zeskanowania).';

$GLOBALS["lang"]['A Subnet discovery will scan the IPs provided.'] = 'Odkrycie podsieci skanuje dostarczone IP.';

$GLOBALS["lang"]['A URL provided to the agent which will then download the file and store it on the local disk.'] = 'URL dostarczony agentowi, który następnie pobierze plik i zapisze go na lokalnym dysku.';

$GLOBALS["lang"]['A URL to a file to download.'] = 'URL pliku do pobrania.';

$GLOBALS["lang"]['A backbone network is part of a computer network infrastructure that provides a path for the exchange of information between different LANs or sub-networks. A backbone can tie together diverse networks within the same building, across different buildings, or over a wide area.<br><br>For example, a large company might implement a backbone network to connect departments that are located around the world. The equipment that ties together the departmental networks constitutes the network backbone. When designing a network backbone, network performance and network congestion are critical factors to take into account. Normally, the backbone network capacity is greater than that of the individual networks connected to it.<br><br>Another example of a backbone network is the Internet backbone, which is the set of wide area networks (WANs) and core routers that tie together all networks connected to the Internet.'] = 'Sieć szkieletowa jest częścią infrastruktury sieci komputerowej, która zapewnia ścieżkę wymiany informacji między różnymi LAN lub podsieciami. Krzesło może łączyć różnorodne sieci w obrębie tego samego budynku, w różnych budynkach lub na szerokim obszarze.<br/><br/>Na przykład duże przedsiębiorstwo może wdrożyć sieć szkieletową, aby połączyć działy zlokalizowane na całym świecie. Urządzenia łączące sieci departamentów stanowią szkielet sieci. Przy projektowaniu szkieletu sieci kluczowe czynniki, które należy wziąć pod uwagę, to wydajność sieci i przeciążenie sieci. Zazwyczaj zdolność przepustowa sieci szkieletowej jest większa niż w przypadku sieci połączonych z nią.<br/><br/>Innym przykładem sieci szkieletowej jest szkielet internetowy, który jest zbiorem sieci o szerokim zasięgu (WAN) i podstawowych routerów łączących wszystkie sieci podłączone do Internetu.';

$GLOBALS["lang"]['A calculated field that displays the number of times this piece of software was found on the computers in the selected Org (and its descendants if configured).'] = 'Obliczone pole, które wyświetla liczbę razy ten element oprogramowania został znaleziony na komputerach w wybranym Org (i jego potomków, jeśli skonfigurowano).';

$GLOBALS["lang"]['A campus area network (CAN) is made up of an interconnection of LANs within a limited geographical area. The networking equipment (switches, routers) and transmission media (optical fiber, copper plant, Cat5 cabling, etc.) are almost entirely owned by the campus tenant / owner (an enterprise, university, government, etc.).<br><br>For example, a university campus network is likely to link a variety of campus buildings to connect academic colleges or departments, the library, and student residence halls.'] = 'Sieć campus area network (CAN) składa się z połączeń wzajemnych między LAN na ograniczonym obszarze geograficznym. Urządzenia sieciowe (przełączniki, routery) i nośniki transmisji (światłowody, miedziane instalacje, okablowanie Cat5 itp.) są prawie w całości własnością najemcy / właściciela kampusu (przedsiębiorstwo, uniwersytet, rząd itp.).<br/><br/>Na przykład sieć kampusu uniwersyteckiego może łączyć różne budynki kampusu w celu połączenia akademickich uczelni lub wydziałów, biblioteki i akademickich sal mieszkalnych.';

$GLOBALS["lang"]['A closed port is accessible (it receives and responds to Nmap probe packets), but there is no application listening on it. They can be helpful in showing that a host is up on an IP address (host discovery, or ping scanning), and as part of OS detection. Because closed ports are reachable, it may be worth scanning later in case some open up. Administrators may want to consider blocking such ports with a firewall. Then they would appear in the filtered state, discussed next.'] = 'Zamknięty port jest dostępny (odbiera i reaguje na pakiety sond Nmap), ale nie ma na nich podsłuchu aplikacji. Mogą być pomocne w pokazywaniu, że host znajduje się na adresie IP (odkrycie hosta lub skanowanie ping) oraz w ramach wykrywania systemu operacyjnego. Ponieważ zamknięte porty są dostępne, może warto je później skanować na wypadek, gdyby coś się otworzyło. Administratorzy mogą rozważyć zablokowanie takich portów za pomocą zapory. Pojawiały się w stanie filtrowanym, omówione później.';

$GLOBALS["lang"]['A collector is either in Collector or Stand-Alone mode.'] = 'Kolekcjoner jest albo w trybie Kolekcjoner lub Stand- Sam.';

$GLOBALS["lang"]['A comma separated list of applicable CVEs.'] = 'Oddzielona przecinkami lista właściwych CVE.';

$GLOBALS["lang"]['A comma separated list of values, one of which can be selected.'] = 'Lista wartości oddzielonych przecinkami, z których jedna może być wybrana.';

$GLOBALS["lang"]['A command to run. When the agent is Windows based, this command is run from within the powershell agent.'] = 'Polecenie do uruchomienia. Kiedy agent jest oparty na systemie Windows, polecenie to jest uruchamiane z wewnątrz agenta powershell.';

$GLOBALS["lang"]['A dashboard is made up of three columns and two rows of what we call <i>widgets</i>. A widget is very similar to a summary, only we take the summary concept a bit further. Widgets are created in a simple fashion using a couple of drop down boxes - or you can elect to use your own SQL for complete customisability.'] = 'Deska rozdzielcza składa się z trzech kolumn i dwóch rzędów tego, co nazywamy <i>widgets</i>. Widget jest bardzo podobny do podsumowania, tylko że podsumowujemy koncepcję nieco dalej. Widgety są tworzone w prosty sposób za pomocą kilku rozwijanych pól - lub można wybrać, aby używać własnego SQL dla pełnej konfigurowalności.';

$GLOBALS["lang"]['A filtered port is considered open (and will trigger device detection).'] = 'Przefiltrowany port jest uważany za otwarty (i spowoduje wykrywanie urządzeń).';

$GLOBALS["lang"]['A global area network (GAN) is a network used for supporting mobile across an arbitrary number of wireless LANs, satellite coverage areas, etc. The key challenge in mobile communications is handing off user communications from one local coverage area to the next. In IEEE Project 802, this involves a succession of terrestrial wireless LANs.'] = 'Globalna sieć obszarowa (GAN) jest siecią wykorzystywaną do wspierania łączności ruchomej przez arbitralną liczbę bezprzewodowych LAN, obszarów zasięgu satelitarnego itp. Kluczowym wyzwaniem w dziedzinie łączności ruchomej jest przekazywanie komunikacji z użytkowników z jednego obszaru lokalnego na następny. W projekcie IEEE 802 wiąże się to z kolejnością naziemnych bezprzewodowych LAN.';

$GLOBALS["lang"]['A home area network (HAN) is a residential LAN used for communication between digital devices typically deployed in the home, usually a small number of personal computers and accessories, such as printers and mobile computing devices. An important function is the sharing of Internet access, often a broadband service through a cable TV or digital subscriber line (DSL) provider.'] = 'Sieć lokalna (HAN) jest siecią lokalną służącą do komunikacji między urządzeniami cyfrowymi zazwyczaj stosowanymi w domu, zazwyczaj niewielką liczbą komputerów osobistych i akcesoriów, takich jak drukarki i mobilne urządzenia obliczeniowe. Ważną funkcją jest dzielenie się dostępem do Internetu, często usługi szerokopasmowej za pośrednictwem telewizji kablowej lub cyfrowej linii abonentów (DSL).';

$GLOBALS["lang"]['A list of custom TCP ports to scan (22 is SSH, 135 is WMI, 62078 is iPhone sync).'] = 'Lista własnych portów TCP do skanowania (22 to SSH, 135 to WMI, 62078 to synchronizacja iPhone \'a).';

$GLOBALS["lang"]['A list of custom UDP ports to scan (161 is SNMP).'] = 'Lista niestandardowych portów UDP do skanowania (161 to SNMP).';

$GLOBALS["lang"]['A local area network (LAN) is a network that connects computers and devices in a limited geographical area such as a home, school, office building, or closely positioned group of buildings. Each computer or device on the network is a node. Wired LANs are most likely based on Ethernet technology. Newer standards such as ITU-T G.hn also provide a way to create a wired LAN using existing wiring, such as coaxial cables, telephone lines, and power lines.<br><br>The defining characteristics of a LAN, in contrast to a wide area network (WAN), include higher data transfer rates, limited geographic range, and lack of reliance on leased lines to provide connectivity. Current Ethernet or other IEEE 802.3LAN technologies operate at data transfer rates up to 100 Gbit/s, standardized by IEEE in 2010. Currently, 400 Gbit/s Ethernet is being developed.'] = 'Lokalna sieć lokalna (LAN) to sieć łącząca komputery i urządzenia w ograniczonym obszarze geograficznym, takim jak dom, szkoła, budynek biurowy lub ściśle usytuowana grupa budynków. Każdy komputer lub urządzenie w sieci jest węzłem. Wired LAN są najprawdopodobniej oparte na technologii Ethernet. Nowsze standardy, takie jak ITU- T G.hn, stanowią również sposób na stworzenie przewodowej sieci LAN z wykorzystaniem istniejących przewodów, takich jak kable koncentryczne, linie telefoniczne i linie energetyczne.<br/><br/>Charakterystyka sieci LAN, w przeciwieństwie do szerokiej sieci obszarowej (WAN), obejmuje wyższe wskaźniki transferu danych, ograniczony zasięg geograficzny oraz brak zależności od łączy dzierżawionych w celu zapewnienia łączności. Obecne technologie Ethernet lub inne technologie IEEE 802.3LAN działają z szybkością transferu danych do 100 Gbit / s, standaryzowaną przez IEEE w 2010 r. Obecnie 400 Gbit / s Ethernet jest w fazie rozwoju.';

$GLOBALS["lang"]['A location is a physical address that can have devices associated with it. You can assign it coordinates and if there are devices assigned, the location will appear on the Map when you have an Open-AudIT Enterprise license.'] = 'Lokalizacja to adres fizyczny, który może być powiązany z urządzeniami. Możesz przypisać jej współrzędne i jeśli są przyporządkowane urządzenia, lokalizacja pojawi się na mapie, gdy masz licencję Open- Audit Enterprise.';

$GLOBALS["lang"]['A location name will help you to find these devices in the future.'] = 'Nazwa lokalizacji pomoże Ci znaleźć te urządzenia w przyszłości.';

$GLOBALS["lang"]['A lower number means it will be applied before other rules.'] = 'Niższa liczba oznacza, że będzie ona stosowana przed innymi zasadami.';

$GLOBALS["lang"]['A lower number means it will be applied before other rules. The default weight is 100.'] = 'Niższa liczba oznacza, że będzie ona stosowana przed innymi zasadami. Domyślna waga to 100.';

$GLOBALS["lang"]['A new user logged in to Open-AudIT and was authenticated and authorized by the LDAP sever. That user was then created in Open-AudIT and logged in. Success.'] = 'Nowy użytkownik zalogował się do Open- Audit i został uwierzytelniony i autoryzowany przez sever LDAP. Użytkownik został utworzony w Open- Audit i zalogowany. Sukces.';

$GLOBALS["lang"]['A package is a piece of installed softare. A package has a type - antivirus, approved, backup, banned, cloud, firewall, ignored, license or other.'] = 'Pakiet jest kawałkiem zainstalowanego softaru. Pakiet posiada typ - antywirusowy, zatwierdzony, backup, zakazany, chmura, firewall, ignorowany, licencja lub inne.';

$GLOBALS["lang"]['A password (stored as a hash) that enables logon when using application authentication.'] = 'Hasło (zapisane jako hash), które umożliwia logowanie podczas korzystania z uwierzytelniania aplikacji.';

$GLOBALS["lang"]['A person has an account in the Open-AudIT application. Their user account has a list of associated Roles and Organizations. The roles the user has determines WHAT they can do. The Organizations a user has determines WHICH items they can act upon.<br><br>When a user requests to perform an operation (create, read, update, delete) on a collection item, the roles are consulted to see if they are allowed to perform that action, then the orgs are consulted to determine if the collection item belongs to an org the user has permission to act on.'] = 'Osoba posiada konto w aplikacji Open- Audit. Ich konto użytkownika ma listę powiązanych Roles i organizacji. Role, które użytkownik ma określa, co mogą zrobić. Organizacje, które użytkownik określa, które elementy mogą działać.<br/><br/>Gdy użytkownik zwraca się o wykonanie operacji (tworzenie, czytanie, aktualizacja, usuwanie) na elemencie kolekcji, konsultuje się z rolami, aby sprawdzić, czy są one dozwolone do wykonywania tej czynności, a następnie konsultuje się z orgami w celu ustalenia, czy element kolekcji należy do org, na który użytkownik ma pozwolenie.';

$GLOBALS["lang"]['A personal area network (PAN) is a computer network used for communication among computer and different information technological devices close to one person. Some examples of devices that are used in a PAN are personal computers, printers, fax machines, telephones, PDAs, scanners, and even video game consoles. A PAN may include wired and wireless devices. The reach of a PAN typically extends to 10 meters. A wired PAN is usually constructed with USB and FireWire connections while technologies such as Bluetooth and infrared communication typically form a wireless PAN.'] = 'Osobista sieć obszarowa (PAN) jest siecią komputerową służącą do komunikacji pomiędzy komputerami i różnymi technologicznymi urządzeniami informatycznymi blisko jednej osoby. Przykładami urządzeń używanych w PAN są komputery osobiste, drukarki, faksy, telefony, PDA, skanery, a nawet konsole do gier wideo. PAN może obejmować urządzenia przewodowe i bezprzewodowe. Zasięg PAN zazwyczaj sięga 10 metrów. Panel przewodowy jest zazwyczaj konstruowany z połączeniami USB i FireWire, podczas gdy technologie takie jak komunikacja Bluetooth i podczerwieni zazwyczaj tworzą bezprzewodowy PAN.';

$GLOBALS["lang"]['A query is essentially a SQL statement. This statement is run against the database with the automatic addition of the limit, filtered to apply to only those requested items and only those items the user has permission to view. A Query can be created using menu -> Manage -> Queries -> Create Queries. Queries contain an org_id and are hence restricted to the appropriate users. A user must have the org_admin or reporter role(s) to create, update or delete a query. All users can execute a query. A query has a name attribute used for the menu item as well as a menu category attribute. This tells the Open-Audit GUI which submenu to place the query in. There is also menu display which should be set to <i>y</i> to enable the query in the GUI (<i>n</i> to prevent the query from appearing at all). The query would still run if called using its <code>id</code>, regardless of menu displays value.'] = 'Zapytanie jest zasadniczo wyrażeniem SQL. To oświadczenie jest uruchamiane w bazie danych z automatycznym dodawaniem limitu, filtrowane w celu zastosowania tylko do tych wymaganych elementów i tylko tych elementów, które użytkownik ma prawo wyświetlić. Zapytanie można utworzyć używając menu - > Zarządzanie - > Zapytania - > Tworzenie zapytań. Zapytania zawierają org _ id i dlatego są ograniczone do odpowiednich użytkowników. Użytkownik musi posiadać funkcję lub funkcje org _ admin lub reportera, aby utworzyć, zaktualizować lub usunąć zapytanie. Wszyscy użytkownicy mogą wykonać zapytanie. Zapytanie posiada atrybut nazwy używany dla pozycji menu oraz atrybut kategorii menu. Wskazuje on, w którym podmenu należy umieścić zapytanie. Istnieje również wyświetlacz menu, który powinien być ustawiony na <i>y</i> aby umożliwić zapytanie w GUI (<i>n</i> aby zapobiec pojawieniu się zapytania). Zapytanie nadal będzie działać, jeśli wywołana za pomocą jego <code>id</code>, niezależnie od wartości menu.';

$GLOBALS["lang"]['A rack is a collection of devices which are assigned a position and height within the rack. A device can optionally have a picture associated with it. A rack is placed in a row. We have created a very granular system for positioning of racks, which is as follows. At the top level (as always) is the Organisation (Org). An Org can have multiple locations (as has always been the case). With the addition of the Racks feature, a location can now contain one or more Buildings. A building can contain one or more Floors. A floor can contain one or more Rooms. A room can contain one or more Rows. This sounds like a lot of work, but defaults are created for you. Create a new Location and the sub-components will be automatically created for you. If you need more items (buildings, rooms, etc) you can add them as you like. A rack can also be part of a <i>pod</i> of racks. The pod attribute works as a tag, rather than a strict hierarchical inheritance model as per buildings, floors, etc.<br><br>Racks are a feature available to Open-AudIT Enterprise licensed customers.'] = 'Stojak jest kolekcją urządzeń, którym przypisano położenie i wysokość wewnątrz stojaka. Urządzenie może ewentualnie mieć związane z nim zdjęcie. Stojak jest umieszczony w rzędzie. Stworzyliśmy bardzo granulowany system pozycjonowania stojaków, który jest następujący. Na najwyższym poziomie (jak zawsze) znajduje się Organizacja (Org). Org może mieć wiele lokalizacji (jak zawsze). Z dodatkiem funkcji Racks, lokalizacja może teraz zawierać jeden lub więcej budynków. Budynek może zawierać co najmniej jedną podłogę. Podłoga może zawierać jeden lub więcej pokoi. Pokój może zawierać jeden lub więcej wierszy. To brzmi jak dużo pracy, ale domyślnie są tworzone dla Ciebie. Utwórz nową Lokalizację, a podkomponenty będą automatycznie tworzone dla Ciebie. Jeśli potrzebujesz więcej elementów (budynki, pokoje itp.) możesz je dodać jak chcesz. Stojak może być również częścią <i>pob</i> z regałów. Atrybut kapsuły działa jako znacznik, a nie ściśle hierarchiczny model dziedziczenia, jak na budynki, podłogi, itp.<br/><br/>Racks to funkcja dostępna dla licencjonowanych klientów Open- Audit Enterprise.';

$GLOBALS["lang"]['A routing domain or address space where the IP addresses and MAC addresses are unique.'] = 'Domena routingu lub przestrzeń adresowa, gdzie adresy IP i adresy MAC są niepowtarzalne.';

$GLOBALS["lang"]['A sample cron file for Linux is below. This should be placed in'] = 'Poniżej znajduje się przykładowy plik cron dla Linuksa. Należy to umieścić w';

$GLOBALS["lang"]['A security zone is a administrative domain or policy domain within the Network Domain.'] = 'Strefa bezpieczeństwa jest domeną administracyjną lub dziedziną polityki w ramach domeny sieci.';

$GLOBALS["lang"]['A seed discovery is another type of discovery, where you provide the IP of a single <i>seed</i> device. This device is audited, and any IPs it knows are then added to the list of IPs to be audited. Then, those devices are audited and any IPs they know are also added to the list of IPs for auditing. This process then continues within the parameters configured by the user.'] = 'Odkrycie nasion jest innym rodzajem odkrycia, gdzie można dostarczyć IP jednego <i>nasiona</i> urządzenie. Urządzenie to podlega audytowi, a wszelkie znane IP są następnie dodawane do wykazu IP podlegających audytowi. Następnie urządzenia te podlegają audytowi, a wszelkie znane im IP są również dodawane do wykazu IP do celów audytu. Następnie proces ten przebiega w ramach parametrów skonfigurowanych przez użytkownika.';

$GLOBALS["lang"]['A short description of the log entry.'] = 'Krótki opis wpisu do dziennika.';

$GLOBALS["lang"]['A storage area network (SAN) is a dedicated network that provides access to consolidated, block level data storage. SANs are primarily used to make storage devices, such as disk arrays, tape libraries, and optical jukeboxes, accessible to servers so that the devices appear like locally attached devices to the operating system. A SAN typically has its own network of storage devices that are generally not accessible through the local area network by other devices. The cost and complexity of SANs dropped in the early 2000s to levels allowing wider adoption across both enterprise and small to medium-sized business environments.'] = 'Sieć przestrzeni pamięci masowej (SAN) jest specjalną siecią, która zapewnia dostęp do skonsolidowanego, na poziomie bloku przechowywania danych. SAN są wykorzystywane przede wszystkim do wytwarzania urządzeń pamięci masowej, takich jak tablice dyskowe, biblioteki taśmowe i skrzynki gramofonowe, dostępne dla serwerów, tak aby urządzenia wyglądały jak przyłączone lokalnie urządzenia do systemu operacyjnego. SAN zazwyczaj posiada własną sieć urządzeń pamięci masowej, które na ogół nie są dostępne przez lokalną sieć lokalną przez inne urządzenia. Koszty i złożoność SAN spadły na początku 2000 r. do poziomów umożliwiających szersze przyjęcie zarówno w środowisku przedsiębiorstw, jak i małych i średnich.';

$GLOBALS["lang"]['A string that matches the <code>software.name</code> attribute. You can use the standard SQL wildcard of percent (%) to match one or more characters.'] = 'Łańcuch pasujący do <code>software.name</code> atrybut. Możesz użyć standardowej karty SQL w procentach (%), aby dopasować jeden lub więcej znaków.';

$GLOBALS["lang"]['A structured system for managing sensitive information'] = 'Zorganizowany system zarządzania informacjami wrażliwymi';

$GLOBALS["lang"]['A timestamp.'] = 'Znacznik czasu.';

$GLOBALS["lang"]['A user has a primary Org as well as a list of Orgs they can access. A user combines this with a list of assigned roles that define what actions they can take on items assigned to the Orgs they have access to. The combination of a users <i>orgs</i> and <i>roles</i> define what they can and cannot do within Open-AudIT.'] = 'Użytkownik posiada pierwotną Org oraz listę Orgów, do których ma dostęp. Użytkownik łączy to z listą przypisanych ról, które określają, jakie działania mogą podjąć na pozycje przypisane do Orgów, do których mają dostęp. Połączenie użytkowników <i>orgi</i> oraz <i>role</i> zdefiniować, co mogą i nie mogą zrobić w ramach Open- Audit.';

$GLOBALS["lang"]['A user will have a list of associated organizations (orgs). Each org the user has will allow them to act upon items within that org as per their role(s).<br><br>All orgs except the default org have a parent. Think of an Org Chart. If a user has permission on an Org, they also have permission on any descendants of that Org.<br><br>Users are also allowed permission on a child org to see the items from parent orgs for certain collections. Those are: dashboards, discovery_scan_options, fields, files, groups, queries, reports, roles, rules, scripts, summaries, widgets.<br><br>Do not forget you have granular control over what users can see and do using Roles in Enterprise.'] = 'Użytkownik będzie miał listę stowarzyszonych organizacji (orgs). Każdy org, który ma użytkownik, pozwoli im działać na pozycje w ramach tego org zgodnie z ich rolą (rolami).<br/><br/>Wszystkie orgi z wyjątkiem domyślnego org mają rodzica. Pomyśl o Org Chart. Jeśli użytkownik ma pozwolenie na Org, ma również pozwolenie na potomków tego Orga.<br/><br/>Użytkownicy mogą również uzyskać pozwolenie na dziecko org, aby zobaczyć pozycje z orgów rodzica dla niektórych kolekcji. Są to: deski rozdzielcze, opcje discovery _ scan, pola, pliki, grupy, pytania, raporty, role, zasady, skrypty, podsumowania, widgety.<br/><br/>Nie zapomnij, że masz granulowaną kontrolę nad tym, co użytkownicy mogą zobaczyć i zrobić używając Roles w Enterprise.';

$GLOBALS["lang"]['A user will have a list of associated organizations (orgs). Each org the user has will allow them to act upon items within that org as per their role(s).<br><br>All orgs except the default org have a parent. Think of an Org Chart. If a user has permission on an Org, they also have permission on any descendants of that Org.<br><br>We have also allow a user with permission on a child org to see the items from parent orgs for certain collections. Those are: dashboards, discovery_scan_options, fields, files, groups, queries, roles, rules, scripts, summaries, widgets.<br><br>Do not forget you have granular control over what users can see and do using'] = 'Użytkownik będzie miał listę stowarzyszonych organizacji (orgs). Każdy org, który ma użytkownik, pozwoli im działać na pozycje w ramach tego org zgodnie z ich rolą (rolami).<br/><br/>Wszystkie orgi z wyjątkiem domyślnego org mają rodzica. Pomyśl o Org Chart. Jeśli użytkownik ma pozwolenie na Org, ma również pozwolenie na potomków tego Orga.<br/><br/>Mamy również pozwolić użytkownikowi za zgodą na dziecko org zobaczyć elementy z orgi rodzica dla niektórych kolekcji. Są to: deski rozdzielcze, opcje description _ scan _, pola, pliki, grupy, pytania, role, zasady, skrypty, streszczenia, widżety.<br/><br/>Nie zapomnij, że masz granulowaną kontrolę nad tym, co użytkownicy mogą zobaczyć i zrobić za pomocą';

$GLOBALS["lang"]['A virtual private network (VPN) is an overlay network in which some of the links between nodes are carried by open connections or virtual circuits in some larger network (e.g., the Internet) instead of by physical wires. The data link layer protocols of the virtual network are said to be tunneled through the larger network when this is the case. One common application is secure communications through the public Internet, but a VPN need not have explicit security features, such as authentication or content encryption. VPNs, for example, can be used to separate the traffic of different user communities over an underlying network with strong security features.<br><br>VPN may have best-effort performance, or may have a defined service level agreement (SLA) between the VPN customer and the VPN service provider. Generally, a VPN has a topology more complex than point-to-point.'] = 'Wirtualna sieć prywatna (VPN) jest siecią nakładającą, w której niektóre połączenia między węzłami są przewożone przez otwarte połączenia lub obwody wirtualne w jakiejś większej sieci (np. Internet) zamiast przez przewody fizyczne. Mówi się, że protokoły warstwy łącza danych sieci wirtualnej są tunelowane przez większą sieć, kiedy tak jest. Jedną z wspólnych aplikacji jest bezpieczna komunikacja za pośrednictwem publicznego Internetu, ale VPN nie musi mieć wyraźnych zabezpieczeń, takich jak uwierzytelnianie lub szyfrowanie treści. Na przykład VPN mogą być wykorzystywane do oddzielenia ruchu różnych społeczności użytkowników od sieci bazowej o silnych cechach bezpieczeństwa.<br/><br/>VPN może mieć najlepszą wydajność, lub może mieć określony poziom usług (SLA) między klientem VPN i dostawcą usług VPN. Ogólnie rzecz biorąc, VPN ma topologię bardziej złożoną niż punkt do punktu.';

$GLOBALS["lang"]['A vulnerability affecting availability may allow attackers to disrupt services, crash systems, or cause denial-of-service (DoS) (None, Low, High).'] = 'Wrażliwość wpływająca na dostępność może umożliwić atakującym zakłócanie usług, systemów awaryjnych lub powodować zaprzeczenie usługi (DoS) (Brak, niski, wysoki).';

$GLOBALS["lang"]['A vulnerability affecting confidentiality may allow attackers to read sensitive data, such as personal information, credentials, or proprietary business data (None, Low, High).'] = 'Wrażliwość wpływająca na poufność może umożliwić atakującym odczytanie danych wrażliwych, takich jak dane osobowe, dane uwierzytelniające lub zastrzeżone dane biznesowe (Brak, niski, wysoki).';

$GLOBALS["lang"]['A vulnerability affecting integrity may allow attackers to modify data, inject malicious code, or alter system configurations (None, Low, High).'] = 'Wrażliwość wpływająca na integralność może umożliwić atakującym modyfikację danych, wstrzyknięcie złośliwego kodu lub zmianę konfiguracji systemu (Brak, niski, wysoki).';

$GLOBALS["lang"]['A vulnerability can be editied and more specific package names provided where the enrichment data is insufficient or the generated SQL is not quite correct.'] = 'Wrażliwość może być budowana i bardziej szczegółowe nazwy pakietów, w przypadku gdy dane wzbogacania są niewystarczające lub wygenerowany SQL nie jest do końca poprawne.';

$GLOBALS["lang"]['A vulnerability item in Open-AudIT can be thought of as essentially a query against your database to determine your potential exposure to a given CVE report. A vulnerability is made up of the CVE report, along with enrichment data from FirstWave. These two items are combined to produce a suitable query that is automatically downloaded from FirstWave.'] = 'Element wrażliwości w Open- Audit można uznać za zasadniczo zapytanie do bazy danych w celu określenia potencjalnego narażenia na dany raport CVE. W sprawozdaniu CVE składa się ze sprawozdania CVE oraz danych dotyczących wzbogacania z FirstWave. Te dwa elementy są połączone, aby stworzyć odpowiednie zapytanie, które jest automatycznie pobierane z FirstWave.';

$GLOBALS["lang"]['A wide area network (WAN) is a computer network that covers a large geographic area such as a city, country, or spans even intercontinental distances. A WAN uses a communications channel that combines many types of media such as telephone lines, cables, and air waves. A WAN often makes use of transmission facilities provided by common carriers, such as telephone companies. WAN technologies generally function at the lower three layers of the OSI reference model: the physical layer, the data link layer, and the network layer.'] = 'Szeroka sieć obszarowa (WAN) to sieć komputerowa obejmująca duży obszar geograficzny, taki jak miasto, kraj czy nawet międzykontynentalne odległości. WAN wykorzystuje kanał komunikacyjny, który łączy wiele rodzajów mediów, takich jak linie telefoniczne, kable i fale powietrzne. WAN często korzysta z urządzeń przesyłowych dostarczanych przez zwykłych przewoźników, takich jak firmy telefoniczne. Technologie WAN funkcjonują zazwyczaj na niższych trzech warstwach modelu referencyjnego OSI: warstwie fizycznej, warstwie łącza danych i warstwie sieciowej.';

$GLOBALS["lang"]['AD Group'] = 'Grupa AD';

$GLOBALS["lang"]['ADSL, HFC, ISDN, etc.'] = 'ADSL, HFC, ISDN itp.';

$GLOBALS["lang"]['AIX'] = 'AIX';

$GLOBALS["lang"]['ALL IPs'] = 'WSZYSTKIE IPP';

$GLOBALS["lang"]['API / Web Access'] = 'API / Web Access';

$GLOBALS["lang"]['API Documentation'] = 'Dokumentacja API';

$GLOBALS["lang"]['API Key required.'] = 'Wymagany klucz API.';

$GLOBALS["lang"]['API Result'] = 'Wynik API';

$GLOBALS["lang"]['About'] = 'O';

$GLOBALS["lang"]['Above are the only required items.'] = 'Powyżej są jedyne wymagane elementy.';

$GLOBALS["lang"]['Accept'] = 'Akceptuj';

$GLOBALS["lang"]['Access Model'] = 'Model dostępu';

$GLOBALS["lang"]['access_point'] = 'Punkt dostępu';

$GLOBALS["lang"]['Access Point'] = 'Punkt dostępu';

$GLOBALS["lang"]['access_token'] = 'Access Token';

$GLOBALS["lang"]['Access Token'] = 'Access Token';

$GLOBALS["lang"]['Access to the admin$ share and RPC uses the SMB2 protocol.'] = 'Dostęp do akcji admin $i RPC wykorzystuje protokół SMB2.';

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

$GLOBALS["lang"]['Active Directory and OpenLDAP'] = 'Aktywny katalog i OpenLDAP';

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

$GLOBALS["lang"]['Add Your Credentials'] = 'Dodaj swoje zasługi';

$GLOBALS["lang"]['Add image'] = 'Dodaj obraz';

$GLOBALS["lang"]['additional_items'] = 'Dodatkowe pozycje';

$GLOBALS["lang"]['Additional Items'] = 'Dodatkowe pozycje';

$GLOBALS["lang"]['address'] = 'Adres';

$GLOBALS["lang"]['Address'] = 'Adres';

$GLOBALS["lang"]['Address any nonconformities'] = 'Adres wszelkich niezgodności';

$GLOBALS["lang"]['Address audit findings and corrective actions'] = 'Działania naprawcze';

$GLOBALS["lang"]['Admin'] = 'Admin';

$GLOBALS["lang"]['admin_status'] = 'Status administratora';

$GLOBALS["lang"]['Admin Status'] = 'Status administratora';

$GLOBALS["lang"]['advanced'] = 'Zaawansowane';

$GLOBALS["lang"]['Advanced'] = 'Zaawansowane';

$GLOBALS["lang"]['Afghanistan'] = 'Afganistan';

$GLOBALS["lang"]['After an Integration has been created, when you view the details of an Integration you will notice a field named Debug. This is set to no by default. Changing it to yes provides extra logging when an Integration is executed. Debug should not be left as yes. This is because the debug output will contain everything retrieved from external systems - including items such as WMI and SNMP credentials. The debug option should be used only when an issue has occurred and you wish to dig deeper in to see if you can determine why.'] = 'Po utworzeniu Integracji, po obejrzeniu szczegółów Integracji zauważysz pole o nazwie Debug. To jest ustawione na nie domyślnie. Zmiana na tak zapewnia dodatkowe logowanie podczas wykonywania integracji. Debug nie powinien być pozostawiony jako tak. Dzieje się tak dlatego, że wyjście debugowania będzie zawierać wszystko, co można odzyskać z zewnętrznych systemów - w tym elementy takie jak WMI i SNMP. Opcja debugowania powinna być używana tylko wtedy, gdy pojawił się problem i chcesz głębiej się dowiedzieć, czy możesz ustalić dlaczego.';

$GLOBALS["lang"]['After completing the above, uninstall the agent.'] = 'Po zakończeniu powyższych czynności, odblokuj agenta.';

$GLOBALS["lang"]['Agent? Discovery? Credentials?'] = 'Agencie? Odkrycie? Zasługi?';

$GLOBALS["lang"]['agents'] = 'Agenci';

$GLOBALS["lang"]['Agents'] = 'Agenci';

$GLOBALS["lang"]['Agents entries can be created that specify a duration, a network and an operating system. If all tests match, the server then asks the agent to perform actions. If any test is not set, it is excluded from the <i>all must match</i> requirement.<br><br>You can create multiple agents and have the server check one or all agent entries. You might (for example) specify one agent that says <i>If the agent IP is in this subnet, set the location_id of the device</i>.<br><br>Another example might be not running an audit at all, rather download a script and run it. If the agent is installed with admin rights, you can now manage your machines without opening <strong>any</strong> ports from it to the world.</p><p>Enabling advanced agents means an agent can be instructed to download any file and execute any command. <strong>WARNING</strong>: This comes with security risks. This configuration will <strong>only</strong> function when running Open-AudIT using HTTPS and a valid (Certificate Authority provided) certificate for '] = 'Można utworzyć wpisy agentów określające czas trwania, sieć i system operacyjny. Jeśli wszystkie testy się zgadzają, serwer prosi agenta o wykonanie czynności. Jeżeli żaden test nie jest ustawiony, jest on wykluczony z <i>wszystko musi pasować</i> wymóg.<br/><br/>Możesz utworzyć wiele agentów i mieć serwer sprawdzić jeden lub wszystkie wpisy agenta. Można (na przykład) określić jeden agent, który mówi <i>Jeśli agent IP jest w tej podsieci, ustaw lokalizację _ id urządzenia</i>.<br/><br/>Innym przykładem może być nie prowadzenie audytu w ogóle, a raczej pobranie skryptu i uruchomienie go. Jeśli agent jest zainstalowany z prawami administratora, można teraz zarządzać maszynami bez otwierania <strong>wszystkie</strong> Porty z niego do świata.<p>Włączenie zaawansowanych agentów oznacza, że agent może być poinstruowany do pobierania plików i wykonywania dowolnych poleceń. <strong>OSTRZEŻENIE</strong>: To wiąże się z ryzykiem bezpieczeństwa. Ta konfiguracja będzie <strong>Tylko</strong> funkcja podczas uruchamiania Open- Audit przy użyciu HTTPS i ważnego certyfikatu (Certificate Authority) dla </p>';

$GLOBALS["lang"]['Aggressive'] = 'Agresywne';

$GLOBALS["lang"]['Aland Islands'] = 'Wyspy Alandzkie';

$GLOBALS["lang"]['Albania'] = 'Albania';

$GLOBALS["lang"]['Albanian'] = 'Albański';

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

$GLOBALS["lang"]['All collections URLs use the format'] = 'Wszystkie kolekcje URL używają formatu';

$GLOBALS["lang"]['All device sub-tables contain a couple of important columns.'] = 'Wszystkie podtabele urządzeń zawierają kilka ważnych kolumn.';

$GLOBALS["lang"]['All devices with a type like computer.'] = 'Wszystkie urządzenia z takim typem komputera.';

$GLOBALS["lang"]['All devices with a type of computer or router.'] = 'Wszystkie urządzenia z typem komputera lub routera.';

$GLOBALS["lang"]['All devices without a type of switch and printer.'] = 'Wszystkie urządzenia bez rodzaju przełącznika i drukarki.';

$GLOBALS["lang"]['All devices without a type of switch and printer. Essentially the same as the above query.'] = 'Wszystkie urządzenia bez rodzaju przełącznika i drukarki. Zasadniczo takie same jak wyżej wymienione zapytanie.';

$GLOBALS["lang"]['All regular discovery options are also available for use in Device Seed Discoveries.'] = 'Wszystkie regularne opcje wyszukiwania są również dostępne do użytku w Device Seed Discoveries.';

$GLOBALS["lang"]['All tasks can be created the same in Windows and Linux. Tasks use the CRON method for scheduling execution.'] = 'Wszystkie zadania mogą być tworzone w systemie Windows i Linux. Zadania wykorzystują metodę CRON do planowania wykonania.';

$GLOBALS["lang"]['Along with this request for information, we send back to FirstWave datapoints that will give us some much needed information on feature use and your installation.'] = 'Wraz z tym wnioskiem o udzielenie informacji, wysyłamy z powrotem do punktów danych FirstWave, które dadzą nam bardzo potrzebne informacje na temat wykorzystania funkcji i instalacji.';

$GLOBALS["lang"]['Also can be created from the'] = 'Można również utworzyć z';

$GLOBALS["lang"]['Alternatives'] = 'Alternatywy';

$GLOBALS["lang"]['Amazon AWS Fields'] = 'Amazon AWS Pola';

$GLOBALS["lang"]['American Samoa'] = 'Samoa amerykańskie';

$GLOBALS["lang"]['An Active Directory discovery will query Active Directory for a list of networks and scan the associated IPs just like a regular Subnet discovery.'] = 'Odkrycie Active Directory zapyta Active Directory o listę sieci i skanuje powiązane IP tak jak zwykłe odkrycie Subnet.';

$GLOBALS["lang"]['An Org (organization) is the owner of most items in collections within Open-AudIT. With the exception of global items like <i>configuration</i>, most items are assigned to (owned by) an Org. A user has access to those items in a collection, that below to an Org the user has permission on.'] = 'Org (organizacja) jest właścicielem większości pozycji w zbiorach w Open- Audit. Z wyjątkiem pozycji globalnych, takich jak <i>konfiguracja</i>, większość pozycji są przypisane do (własnością) Org. Użytkownik ma dostęp do tych elementów w kolekcji, które poniżej do Org użytkownik ma pozwolenie na.';

$GLOBALS["lang"]['An application is actively accepting TCP connections, UDP datagrams or SCTP associations on this port. Finding these is often the primary goal of port scanning. Security-minded people know that each open port is an avenue for attack. Attackers and pen-testers want to exploit the open ports, while administrators try to close or protect them with firewalls without thwarting legitimate users. Open ports are also interesting for non-security scans because they show services available for use on the network.'] = 'Aplikacja aktywnie akceptuje połączenia TCP, datagramy UDP lub stowarzyszenia SCTP w tym porcie. Znalezienie ich jest często głównym celem skanowania portów. Ludzie dbający o bezpieczeństwo wiedzą, że każdy otwarty port jest drogą do ataku. Atakujący i pentesterzy chcą wykorzystać otwarte porty, podczas gdy administratorzy starają się je zamknąć lub chronić za pomocą firewall bez zakłócania legalnych użytkowników. Otwarte porty są również interesujące dla skanów braku bezpieczeństwa, ponieważ pokazują usługi dostępne do użytku w sieci.';

$GLOBALS["lang"]['An array of <code>benchmarks.id</code>.'] = 'Tablica <code>benchmarks.id</code>.';

$GLOBALS["lang"]['An array of <code>devices.id</code>.'] = 'Tablica <code>devices.id</code>.';

$GLOBALS["lang"]['An array of object representing external links to more information.'] = 'Tablica obiektu reprezentująca linki zewnętrzne do większej ilości informacji.';

$GLOBALS["lang"]['An educated guess to the identity and type of device'] = 'Wykształcone zgadywanie tożsamości i typu urządzenia';

$GLOBALS["lang"]['An encrypted JSON document containing the required attributes depending on the <code>credentials.type</code>.'] = 'Zaszyfrowany dokument JSON zawierający wymagane atrybuty w zależności od <code>credentials.type</code>.';

$GLOBALS["lang"]['An enterprise private network is a network that a single organization builds to interconnect its office locations (e.g., production sites, head offices, remote offices, shops) so they can share computer resources.'] = 'Prywatna sieć przedsiębiorstwa jest siecią, którą tworzy jedna organizacja, aby połączyć swoje biura (np. zakłady produkcyjne, centrale, biura, sklepy), aby mogły dzielić się zasobami komputerowymi.';

$GLOBALS["lang"]['An entry can be created using the web interface if the current user logged in has a role that contains the'] = 'Wpis może zostać utworzony przy użyciu interfejsu WWW, jeśli bieżący użytkownik zalogowany ma rolę, która zawiera';

$GLOBALS["lang"]['An example JSON POST body is below. This should be attached to the &quot;data&quot; form item.'] = 'Przykład ciała JSON POST jest poniżej. Należy to dołączyć do pozycji formularza "dane".';

$GLOBALS["lang"]['An example widget SQL showing devices counted per location.'] = 'Przykład widget SQL pokazujący urządzenia policzone na lokalizację.';

$GLOBALS["lang"]['An existing Open-AudIT user was authenticated and authorized by the LDAP server. Success.'] = 'Istniejący użytkownik Open- Audit został uwierzytelniony i autoryzowany przez serwer LDAP. Sukces.';

$GLOBALS["lang"]['An indication of the level of service required by this site.'] = 'Wskazanie poziomu obsługi wymaganej przez tę stronę.';

$GLOBALS["lang"]['An internal field that indicates if the discovery has completed.'] = 'Pole wewnętrzne, które wskazuje, czy odkrycie zostało zakończone.';

$GLOBALS["lang"]['An open|filtered port is considered open (and will trigger device detection).<br>Previously, Open-AudIT considered an Nmap response of'] = 'Otwarty port filtrowany jest uważany za otwarty (i uruchamia wykrywanie urządzeń).<br/>Poprzednio, Open- Aud IT rozważał odpowiedź Nmap na';

$GLOBALS["lang"]['An optional GeoCode'] = 'Opcjonalny GeoCode';

$GLOBALS["lang"]['An optional password to use sudo.'] = 'Opcjonalne hasło do użycia sudo.';

$GLOBALS["lang"]['Analyzed'] = 'Analizowane';

$GLOBALS["lang"]['And finally, click Submit to execute this discovery.'] = 'I w końcu, kliknij Wyślij, aby wykonać to odkrycie.';

$GLOBALS["lang"]['And if Something Goes Wrong?'] = 'A jeśli coś pójdzie nie tak?';

$GLOBALS["lang"]['And lastly click <i>Submit</i> to create your Open-AudIT Auth method for Entra.'] = 'I wreszcie kliknij <i>Prześlij</i> Aby utworzyć metodę Open- Audit Auth dla Entra.';

$GLOBALS["lang"]['And lastly, not so much a security issue - more peace of mind. The data structures are open and documented. You can view them'] = 'I na koniec, nie jest to kwestia bezpieczeństwa - więcej spokoju umysłu. Struktury danych są otwarte i udokumentowane. Możesz je zobaczyć.';

$GLOBALS["lang"]['And provide a name - we humbly recommend Open-AudIT &#128512;, but you can name it anything you like. Make sure the option for <i>Integrate any other application you do not find in the gallery (Non-gallery)</i> is selected. And then click <i>Create<i>.'] = 'w ciągu 10 września 2009 r. _ BAR _ _ BAR _ _ BAR _ _ BAR _ _ BAR _ _ BAR _ _ BAR _ = Auaudyauauauauauauauauauauauda _ BAR _ _ BAR _ _ BAR _, w szczególności, w szczególności, w czasie, w czasie, w czasie, w czasie, w czasie, w czasie, z, z, z, z, z, z, z, z, z, z, w czasie, z, z, z, z, z, z, z, z, z, z, z, z, z, z, z, z, z, z, z, z, z, z, z, z, z, z, z, w, z, z, z, z, w,, w, w, w, w, w, w, w, w, około, około, około, około, około, około, około, około, około, około, około, około, około, w ew rzecz, około, około, około, około, około, w rzeczz, około, około, w ew rzeczz, około, w ew ew ew sprawie z, około w sprawie z, w Upewnij się, że opcja <i>Integracja innych aplikacji, których nie znajdziesz w galerii (Non-gallery)</i> jest wybrany. A potem kliknij <i>Utwórz<i>.</i></i>';

$GLOBALS["lang"]['And so much more.'] = 'I o wiele więcej.';

$GLOBALS["lang"]['Andorra'] = 'Andora';

$GLOBALS["lang"]['Angola'] = 'Angola';

$GLOBALS["lang"]['Anguilla'] = 'Anguilla';

$GLOBALS["lang"]['Annex A Controls'] = 'Załącznik A Kontrole';

$GLOBALS["lang"]['Antarctica'] = 'Antarktyda';

$GLOBALS["lang"]['AntiVirus'] = 'Antywirus';

$GLOBALS["lang"]['AntiVirus Packages'] = 'Pakiety przeciwwirusowe';

$GLOBALS["lang"]['Antigua and Barbuda'] = 'Antigua i Barbuda';

$GLOBALS["lang"]['Antivirus'] = 'Antywirus';

$GLOBALS["lang"]['Any TCP ports (comma seperated, no spaces) you wish to exclude from this discovery. Only available when using Nmap 7+.'] = 'Wszelkie porty TCP (przecinek seperated, brak spacji), które chcesz wyłączyć z tego odkrycia. Dostępne tylko przy użyciu Nmap 7 +.';

$GLOBALS["lang"]['Any UDP ports (comma seperated, no spaces) you wish to exclude from this discovery. Only available when using Nmap 7+.'] = 'Wszelkie porty UDP (przecinek oddzielony, bez spacji), które chcesz wyłączyć z tego odkrycia. Dostępne tylko przy użyciu Nmap 7 +.';

$GLOBALS["lang"]['Any additional documentation you need.'] = 'Każda dodatkowa dokumentacja, której potrzebujesz.';

$GLOBALS["lang"]['Any additional notes you care to make.'] = 'Wszelkie dodatkowe notatki, które chcesz zrobić.';

$GLOBALS["lang"]['Any attributes followed by a * indicate that CVSS data less than v4 was used to complete this field. By default, we attempt to use v4 fields, however if they are not populated we will fallback to the previous version(s) for attributes.'] = 'Wszelkie atrybuty, po których następuje * wskazują, że dane CVSS mniejsze niż v4 zostały wykorzystane do uzupełnienia tego pola. Domyślnie staramy się korzystać z pól v4, jednak jeśli nie są one zaludnione, to powrócimy do poprzedniej wersji (s) dla atrybutów.';

$GLOBALS["lang"]['Any devices will be assigned to this Org when they run their audit script (if set).'] = 'Wszelkie urządzenia zostaną przypisane do tego Org podczas uruchamiania skryptu audytu (jeśli są ustawione).';

$GLOBALS["lang"]['Any devices will be assigned to this Org when they run their audit script (if set). Links to <code>orgs.id</code>.'] = 'Wszelkie urządzenia zostaną przypisane do tego Org podczas uruchamiania skryptu audytu (jeśli są ustawione). Linki do <code>orgs.id</code>.';

$GLOBALS["lang"]['Any discovered devices will be assigned to this Location if set. Links to <code>locations.id</code>.'] = 'Wszelkie odkryte urządzenia zostaną przypisane do tej lokalizacji, jeśli są ustawione. Linki do <code>locations.id</code>.';

$GLOBALS["lang"]['Any discovered devices will be assigned to this Location when they run their audit script (if set).'] = 'Wszelkie odkryte urządzenia zostaną przypisane do tej lokalizacji podczas uruchamiania skryptu audytu (jeśli są ustawione).';

$GLOBALS["lang"]['Any discovered devices will be assigned to this Location when they run their audit script (if set). Links to <code>locations.id</code>.'] = 'Wszelkie odkryte urządzenia zostaną przypisane do tej lokalizacji podczas uruchamiania skryptu audytu (jeśli są ustawione). Linki do <code>locations.id</code>.';

$GLOBALS["lang"]['Any discovered devices will be assigned to this Org if set. If not set, they are assigned to the <code>org_id</code> of this discovery. Links to <code>orgs.id</code>.'] = 'Wszelkie odkryte urządzenia zostaną przypisane do tego Orga, jeśli są ustawione. Jeśli nie ustawione, są one przypisane do <code>org_id</code> o tym odkryciu. Linki do <code>orgs.id</code>.';

$GLOBALS["lang"]['Any files found in this manner are stored in the <i>executable</i> table as per any other device component.'] = 'Wszelkie pliki znalezione w ten sposób są przechowywane w <i>wykonywalny</i> tabelę według każdego innego elementu urządzenia.';

$GLOBALS["lang"]['Any required filter. NOTE: When type = traffic, this represents the font-awesome icon.'] = 'Każdy wymagany filtr. UWAGA: When type = traffic, this represents the font- awesome icon.';

$GLOBALS["lang"]['Any specific TCP ports you wish tested (comma seperated, no spaces).'] = 'Wszelkie konkretne porty TCP, które chcesz przetestować (przecinek seperacyjny, brak spacji).';

$GLOBALS["lang"]['Any specific UDP ports you wish tested (comma seperated, no spaces).'] = 'Wszelkie konkretne porty UDP, które chcesz przetestować (przecinek seperacyjny, brak spacji).';

$GLOBALS["lang"]['Any user uploaded images are placed here.'] = 'Każdy użytkownik przesłane obrazy są umieszczone tutaj.';

$GLOBALS["lang"]['Application'] = 'Stosowanie';

$GLOBALS["lang"]['Application Definitions'] = 'Definicje zastosowania';

$GLOBALS["lang"]['application_id'] = 'Identyfikator aplikacji';

$GLOBALS["lang"]['Application ID'] = 'Identyfikator aplikacji';

$GLOBALS["lang"]['Application Licenses'] = 'Licencje na wniosek';

$GLOBALS["lang"]['Application, Operating System or Hardware.'] = 'Aplikacja, system operacyjny lub sprzęt.';

$GLOBALS["lang"]['applications'] = 'Wnioski';

$GLOBALS["lang"]['Applications'] = 'Wnioski';

$GLOBALS["lang"]['Applications are an Enterprise only feature.'] = 'Aplikacje są tylko funkcją Enterprise.';

$GLOBALS["lang"]['Applications are being introduced in Open-AudIT 2.2 with a view to expand on the concept as further development is made.'] = 'Wnioski są wprowadzane w Open- Audit 2.2 w celu rozszerzenia koncepcji w miarę dalszego rozwoju.';

$GLOBALS["lang"]['applied'] = 'Stosowane';

$GLOBALS["lang"]['Applied'] = 'Stosowane';

$GLOBALS["lang"]['Approved'] = 'Zatwierdzone';

$GLOBALS["lang"]['Approved Packages'] = 'Zatwierdzone pakiety';

$GLOBALS["lang"]['April'] = 'Kwiecień';

$GLOBALS["lang"]['Arabic'] = 'Arabski';

$GLOBALS["lang"]['architecture'] = 'Architektura';

$GLOBALS["lang"]['Architecture'] = 'Architektura';

$GLOBALS["lang"]['Are you sure you want to delete this input item?'] = 'Na pewno chcesz usunąć ten element wejściowy?';

$GLOBALS["lang"]['Are you sure you want to delete this output item?'] = 'Na pewno chcesz usunąć ten element wyjściowy?';

$GLOBALS["lang"]['Are you sure?'] = 'Jesteś pewna?';

$GLOBALS["lang"]['Are you sure? This will remove all queue entries and prevent the remaining IPs from being discovered.'] = 'Jesteś pewna? Usunie to wszystkie wpisy w kolejce i zapobiegnie odkryciu pozostałych IP.';

$GLOBALS["lang"]['Are you sure? This will reset the queue processing count and could cause load on the server.'] = 'Jesteś pewna? To zresetuje liczbę przetwarzania kolejki i może spowodować obciążenie serwera.';

$GLOBALS["lang"]['area'] = 'Obszar';

$GLOBALS["lang"]['Area'] = 'Obszar';

$GLOBALS["lang"]['Argentina'] = 'Argentyna';

$GLOBALS["lang"]['Armenia'] = 'Armenia';

$GLOBALS["lang"]['arp'] = 'Arp';

$GLOBALS["lang"]['Arp'] = 'Arp';

$GLOBALS["lang"]['Aruba'] = 'Aruba';

$GLOBALS["lang"]['As a reminder of how authorisations works in Open-AudIT, see'] = 'Jako przypomnienie, jak działa autoryzacja w Open- Audit, zobacz';

$GLOBALS["lang"]['As a result, we <strong>must</strong> have the admin$ share available to the discovery credentials user. Please check the target Windows machine provides <i>write</i> access for the discovery credentials user.<br>'] = 'W rezultacie <strong>must</strong> mieć admin $share dostępny dla użytkownika uwierzytelniania wyszukiwania. Proszę sprawdzić docelową maszynę Windows <i>pisać</i> dostęp dla użytkowników identyfikatorów.<br/>';

$GLOBALS["lang"]['As mentioned above, the developers do not speak all the translation languages offered. This means we cannot review with acuracy, the translated text. We do try for a cursory review. If you see something that is not translated correctly, you can change it yourself. Edit the appropriate language file (as below) and find the text to be changed. Maybe it does not exist and you need to add it. Just change the text, save the file and refresh your we page. No need to restart any services/daemons for it to take effect. You might need to force refresh your browser.'] = 'Jak wspomniano powyżej, deweloperzy nie mówią wszystkimi językami tłumaczeniowymi. Oznacza to, że nie możemy przeglądać tekstu przetłumaczonego z akuracją. Staramy się o pobieżny przegląd. Jeśli zobaczysz coś, co nie jest prawidłowo przetłumaczone, możesz to zmienić. Edytuj odpowiedni plik językowy (jak poniżej) i znajdź tekst do zmiany. Może nie istnieje i musisz to dodać. Po prostu zmień tekst, zapisz plik i odśwież stronę. Nie trzeba ponownie uruchomić żadnych usług / demonów, aby stało się skuteczne. Może trzeba będzie wymusić odświeżenie przeglądarki.';

$GLOBALS["lang"]['As per the OpenSCAP benchmarks - <i>Do not attempt to implement any of the settings in this benchmark without first testing them in a non-operational environment. The creators of this benchmark assume no responsibility whatsoever for its use by other parties, and makes no guarantees, expressed or implied, about its quality, reliability, or any other characteristic.</i><br><br>Seriously, do not blindly start <i>fixing</i> issues revealed after running a benchmark without first thoroughly testing in a non-production, identical environment.'] = 'Zgodnie z kryteriami OpenSCAP - <i>Nie należy próbować wprowadzać żadnych ustawień w tym wskaźniku bez uprzedniego testowania ich w środowisku nieoperacyjnym. Twórcy tego wskaźnika nie ponoszą żadnej odpowiedzialności za jego wykorzystanie przez inne strony i nie dają żadnych gwarancji, wyrażonych ani implikowanych, co do jego jakości, niezawodności lub innych cech.</i><br/><br/>Poważnie, nie zaczynaj na ślepo. <i>ustalające</i> kwestie ujawnione po przeprowadzeniu wskaźnika referencyjnego bez uprzedniego gruntownego testowania w nieprodukcyjnym, identycznym środowisku.';

$GLOBALS["lang"]['As per the attributes for device environments. Production, Training, et al.'] = 'Zgodnie z atrybutami dla środowisk urządzeń. Production, Training, et al.';

$GLOBALS["lang"]['As the audit script uses bash, you can use the wildcard of * when you are defining directories and exclusions.'] = 'Ponieważ skrypt audytu używa bash, możesz użyć dzikiej karty *, kiedy definiujesz katalogi i wykluczenia.';

$GLOBALS["lang"]['As usual, go to menu → Manage → Integrations → Create Integration. As above, if you are running on Linux and you have NMIS on the same server, you do not need to do anything other than click <i>Submit</i>. I cannot make it easier than that.'] = 'Jak zwykle, przejdź do menu → Zarządzanie → Integracje → Tworzenie integracji. Jak powyżej, jeśli uruchomisz na Linuksie i masz NMIS na tym samym serwerze, nie musisz robić nic innego niż kliknięcie <i>Prześlij</i>. Nie mogę tego ułatwić.';

$GLOBALS["lang"]['As we run Discoveries and collect device results we populate the list of networks. The Blessed Subnets feature uses this list of networks to only accept data from devices on those networks.'] = 'Podczas uruchamiania Discoveries i zbierania wyników urządzeń popularyzujemy listę sieci. Funkcja Błogosławionych Podsieci wykorzystuje tę listę sieci, aby akceptować tylko dane z urządzeń znajdujących się w tych sieciach.';

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

$GLOBALS["lang"]['Assign an ISMS manager or team'] = 'Przypisanie menedżera lub zespołu ISMS';

$GLOBALS["lang"]['Assign an Operator'] = 'Przypisz operatorowi';

$GLOBALS["lang"]['Assign any audited devices to this Org. Leave blank to leave device in currently assigned Org (or to set default).'] = 'Przypisz dowolne skontrolowane urządzenia do tego Org. Zostaw puste, aby zostawić urządzenie w aktualnie przypisanym Org (lub ustawić wartość domyślną).';

$GLOBALS["lang"]['Assign the Device to a Location'] = 'Przypisz urządzenie do lokalizacji';

$GLOBALS["lang"]['Assign the device to an Org'] = 'Przypisz urządzenie Org';

$GLOBALS["lang"]['Assigned To'] = 'Przyznane';

$GLOBALS["lang"]['Assigning Discovered Devices'] = 'Przypisanie wykrytych urządzeń';

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

$GLOBALS["lang"]['Attempt to ping the device if we are not auditing localhost.'] = 'Próba nakłuwania urządzenia, jeśli nie kontrolujemy lokalizacji.';

$GLOBALS["lang"]['Attribute'] = 'Atrybut';

$GLOBALS["lang"]['attributes'] = 'Atrybuty';

$GLOBALS["lang"]['Attributes'] = 'Atrybuty';

$GLOBALS["lang"]['Attributes are stored for Open-AudIT to use for particular fields, at present all fields are based on the devices, locations, orgs and queries tables. The attributes you can edit are associated with the following columns: Class, Environment, Status & Type.'] = 'Atrybuty są przechowywane dla Open- Audit do wykorzystania dla poszczególnych pól, obecnie wszystkie pola są oparte na urządzeniach, lokalizacjach, organach i tabelach zapytań. Atrybuty, które można edytować są związane z następującymi kolumnami: Klasa, Środowisko, Status i typ.';

$GLOBALS["lang"]['Audit'] = 'Kontrola';

$GLOBALS["lang"]['Audit AIX'] = 'Audyt AIX';

$GLOBALS["lang"]['Audit DNS'] = 'Audyt DNS';

$GLOBALS["lang"]['Audit ESXi'] = 'Audyt ESXi';

$GLOBALS["lang"]['Audit Linux'] = 'Audyt Linux';

$GLOBALS["lang"]['audit_log'] = 'Dziennik audytu';

$GLOBALS["lang"]['Audit Log'] = 'Dziennik audytu';

$GLOBALS["lang"]['Audit Mount Point'] = 'Punkt góry audytu';

$GLOBALS["lang"]['Audit My PC'] = 'Audyt mojego komputera';

$GLOBALS["lang"]['Audit Netstat'] = 'Audyt Netstat';

$GLOBALS["lang"]['Audit OSX'] = 'Audyt OSX';

$GLOBALS["lang"]['Audit Result Input'] = 'Wynik audytu';

$GLOBALS["lang"]['Audit Software'] = 'Oprogramowanie do audytu';

$GLOBALS["lang"]['Audit Status'] = 'Status audytu';

$GLOBALS["lang"]['Audit Win32 Product'] = 'Audyt PNR Produkt';

$GLOBALS["lang"]['Audit Windows'] = 'Audyt Windows';

$GLOBALS["lang"]['Audit the Device'] = 'Audyt urządzenia';

$GLOBALS["lang"]['Audits'] = 'Audyty';

$GLOBALS["lang"]['August'] = 'Sierpień';

$GLOBALS["lang"]['Australia'] = 'Australia';

$GLOBALS["lang"]['Austria'] = 'Austria';

$GLOBALS["lang"]['Auth'] = 'Auth';

$GLOBALS["lang"]['auth'] = 'Auth';

$GLOBALS["lang"]['Auth Methods'] = 'Metody Auth';

$GLOBALS["lang"]['Authenticate only'] = 'Tylko uwierzytelniaj';

$GLOBALS["lang"]['Authentication Passphrase'] = 'Authentication Passphrase';

$GLOBALS["lang"]['Authentication Protocol'] = 'Protokół uwierzytelniania';

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

$GLOBALS["lang"]['Available Benchmarks'] = 'Dostępne wskaźniki';

$GLOBALS["lang"]['Awaiting Analysis'] = 'Oczekiwanie Analiza';

$GLOBALS["lang"]['Azerbaijan'] = 'Azerbejdżan';

$GLOBALS["lang"]['Azerbaijani'] = 'Azerbejdżani';

$GLOBALS["lang"]['Azure Active Directory'] = 'Katalog aktywności Azure';

$GLOBALS["lang"]['BTU Max'] = 'BTU Max';

$GLOBALS["lang"]['BTU Total'] = 'BTU ogółem';

$GLOBALS["lang"]['Backbone network'] = 'Sieć backbone';

$GLOBALS["lang"]['Backup'] = 'Kopia zapasowa';

$GLOBALS["lang"]['Bahamas the'] = 'Bahamy';

$GLOBALS["lang"]['Bahrain'] = 'Bahrajn';

$GLOBALS["lang"]['Bangladesh'] = 'Bangladesz';

$GLOBALS["lang"]['bank'] = 'Bank';

$GLOBALS["lang"]['Bank'] = 'Bank';

$GLOBALS["lang"]['Banned'] = 'Zakazane';

$GLOBALS["lang"]['Banned Packages'] = 'Opakowania zakazane';

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

$GLOBALS["lang"]['Baselines can compare netstat ports, users and software.'] = 'Podstawy mogą porównywać porty netstat, użytkowników i oprogramowanie.';

$GLOBALS["lang"]['Baselines enable you to combine audit data with a set of attributes you have previously defined (your baseline) to determine compliance of devices.'] = 'Linie bazowe umożliwiają połączenie danych audytowych z zbiorem atrybutów, które wcześniej zdefiniowałeś (bazowy) w celu określenia zgodności urządzeń.';

$GLOBALS["lang"]['Baselines for Device Comparison'] = 'Podstawy dla porównania urządzeń';

$GLOBALS["lang"]['Basic'] = 'Podstawowe';

$GLOBALS["lang"]['Basque'] = 'Baskijski';

$GLOBALS["lang"]['Because we try to be as transparent as possible, here is your actual data that we send.'] = 'Ponieważ staramy się być jak najbardziej przejrzyści, oto wasze faktyczne dane, które wysyłamy.';

$GLOBALS["lang"]['Being able to determine which machines are configured in the same way is a major part of systems administration and auditing – and now reporting on that will be made simple and automated. Once you define your baseline it will automatically run against a set of devices on a predetermined schedule. The output of these executed baselines will be available for web viewing, importing into a third party system or even as a printed report.<br><br>For auditing and management purposes it can be advantageous to baseline individual devices against a fixed, known good device. Baselines enable you to combine audit data with a set of attributes you have previously defined (your baseline) to determine compliance of devices.'] = 'Możliwość określenia, które maszyny są skonfigurowane w ten sam sposób jest główną częścią zarządzania systemami i audytu - a teraz raportowanie na ten temat będzie proste i zautomatyzowane. Po zdefiniowaniu linii bazowej będzie on automatycznie uruchamiany z zestawem urządzeń w ustalonym wcześniej harmonogramie. Wyniki tych wykonanych linii podstawowych będą dostępne do przeglądania stron internetowych, importowania do systemu osób trzecich lub nawet w formie raportu drukowanego.<br/><br/>Do celów audytu i zarządzania może być korzystne dla podstawowych poszczególnych urządzeń przed stałym, znanym dobrym urządzeniem. Linie bazowe umożliwiają połączenie danych audytowych z zbiorem atrybutów, które wcześniej zdefiniowałeś (bazowy) w celu określenia zgodności urządzeń.';

$GLOBALS["lang"]['Belarus'] = 'Białoruś';

$GLOBALS["lang"]['Belgium'] = 'Belgia';

$GLOBALS["lang"]['Belize'] = 'Belize';

$GLOBALS["lang"]['Below is an example of the required csv format.'] = 'Poniżej znajduje się przykład wymaganego formatu csv.';

$GLOBALS["lang"]['Below these lines are where the variables are injected into the script. Following on from our earlier example, the Linux audit script is populated with our directory like so'] = 'Poniżej znajdują się miejsca, gdzie zmienne są wpisywane do skryptu. Nawiązując do naszego wcześniejszego przykładu, skrypt audytu Linuksa jest zaludniony naszym katalogiem w ten sposób.';

$GLOBALS["lang"]['Below you can see an example Org Chart. If a user has permission on the <i>Finance A</i> Org, they also have permission on the descendant Orgs of Dept A, B & C. This is regardless of the collection requested.<br><br>If the collection requested allows ascendants, then the user will also have access to Company #1 and Default Org items. This is for (as above) queries, groups, et al.<br><br>Note - A user may have access to a query from Default Org, but that is the query itself not the result. The result will only show devices that the user has access to - IE devices from Finance A and Dept A, B & C.'] = 'Poniżej znajduje się przykład wykresu Org. Jeśli użytkownik ma pozwolenie na <i>Finanse A</i> Org, oni również mają pozwolenie na potomek Orgi Dept A, B & C. Jest to niezależnie od wymaganej kolekcji.<br/><br/>Jeśli wymagana kolekcja pozwala na wzloty, użytkownik będzie miał również dostęp do pozycji Firmy # 1 i Domyślnych Org. Dotyczy to (jak powyżej) zapytań, grup, et al.<br/><br/>Notatka - Użytkownik może mieć dostęp do zapytania z domyślnego Org, ale to samo zapytanie nie jest wynikiem. Wynik pokaże tylko urządzenia, które użytkownik ma dostęp do - IE urządzeń z Finance A i Dept A, B & C.';

$GLOBALS["lang"]['Benchmark'] = 'Punkt odniesienia';

$GLOBALS["lang"]['benchmark_id'] = 'Identyfikator punktu odniesienia';

$GLOBALS["lang"]['Benchmark ID'] = 'Identyfikator punktu odniesienia';

$GLOBALS["lang"]['Benchmark Tasks are created automatically when a benchmark is created.'] = 'Znak odniesienia Zadania są tworzone automatycznie przy tworzeniu wskaźnika referencyjnego.';

$GLOBALS["lang"]['Benchmark execution and processing can take a lengthy amount of time, hence the preference to schedule them and not run them ad-hoc.'] = 'Wykonanie i przetwarzanie porównawcze może trwać przez długi czas, stąd też preferowanie ich planowania, a nie uruchamiania na bieżąco.';

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

$GLOBALS["lang"]['Benchmarks are created by providing an operating system and Version, combined with a specific guide and a list of machines to execute it upon. After creation, benchmarks are executed against the list of machines on a schedule.'] = 'Punkty odniesienia są tworzone przez zapewnienie systemu operacyjnego i wersji, w połączeniu ze szczegółowym przewodnikiem i listą maszyn do jego wykonania. Po utworzeniu wartości odniesienia są realizowane na podstawie listy maszyn według harmonogramu.';

$GLOBALS["lang"]['Benchmarks for Best Practise Configuration'] = 'Wartości odniesienia dla konfiguracji najlepszych praktyk';

$GLOBALS["lang"]['Benchmarks provide security recommendations for your computers, utilising the OpenSCAP tools and policies.</p><p><i>From the OpenSCAP homepage:</i>  In the ever-changing world of computer security where new vulnerabilities are being discovered and patched every day, enforcing security compliance must be a continuous process. It also needs to include a way to make adjustments to policies, as well as periodic assessment and risk monitoring. The OpenSCAP ecosystem provides tools and customizable policies for a quick, cost-effective and flexible implementation of these processes.'] = 'Wskaźniki zapewniają zalecenia bezpieczeństwa dla komputerów, wykorzystując narzędzia i polityki OpenSCAP.<p><i>Strona główna OpenSCAP:</i> W ciągle zmieniającym się świecie bezpieczeństwa komputerowego, w którym codziennie odkrywane są nowe słabe punkty, egzekwowanie przestrzegania bezpieczeństwa musi być procesem ciągłym. Musi również obejmować sposób dostosowania polityki, a także okresową ocenę i monitorowanie ryzyka. Ekosystem OpenSCAP zapewnia narzędzia i możliwe do dostosowania polityki szybkiego, efektywnego pod względem kosztów i elastycznego wdrażania tych procesów.</p>';

$GLOBALS["lang"]['Benefits'] = 'Korzyści';

$GLOBALS["lang"]['Bengali'] = 'Bengali';

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

$GLOBALS["lang"]['Both forms of'] = 'Obie formy';

$GLOBALS["lang"]['Botswana'] = 'Botswana';

$GLOBALS["lang"]['Bouvet Island (Bouvetoya)'] = 'Bouvet Island (Bouvetoya)';

$GLOBALS["lang"]['Brazil'] = 'Brazylia';

$GLOBALS["lang"]['Brazilian Portuguese'] = 'Portugalski brazylijski';

$GLOBALS["lang"]['Breaking it Down'] = 'Przełamywanie go';

$GLOBALS["lang"]['British Indian Ocean Territory (Chagos Archipelago)'] = 'Brytyjskie Terytorium Oceanu Indyjskiego (archipelag Chagos)';

$GLOBALS["lang"]['British Virgin Islands'] = 'Brytyjskie Wyspy Dziewicze';

$GLOBALS["lang"]['Browse down the tree to Console Root -> Component Services -> Computers -> My Computer<br><br>Right click on <i>My Computer</i> and select properties<br><br>Select the <i>Default Properties</i> tab'] = 'Przeglądaj drzewo do Console Root - > Usługi w zakresie komponentów - > Komputery - > Mój komputer<br/><br/>Kliknij prawym przyciskiem myszy <i>Mój komputer</i> i wybrać właściwości<br/><br/>Wybierz <i>Domyślne właściwości</i> tab';

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

$GLOBALS["lang"]['Builds trust with clients and partners'] = 'Buduje zaufanie do klientów i partnerów';

$GLOBALS["lang"]['Bulgaria'] = 'Bułgaria';

$GLOBALS["lang"]['Bulgarian'] = 'Bułgarski';

$GLOBALS["lang"]['Bulk Edit'] = 'Edycja luzem';

$GLOBALS["lang"]['Bulk Edit Form'] = 'Forma edycji luzem';

$GLOBALS["lang"]['Bulk Editing Device Attributes'] = 'Atrybuty urządzenia do edycji luzem';

$GLOBALS["lang"]['Bulk edit selections wont stay selected after clicking next page.'] = 'Wybór edycji luzem nie zostanie wybrany po kliknięciu następnej strony.';

$GLOBALS["lang"]['Burkina Faso'] = 'Burkina Faso';

$GLOBALS["lang"]['Burundi'] = 'Burundi Przewodniczący';

$GLOBALS["lang"]['business_requirements'] = 'Wymogi biznesowe';

$GLOBALS["lang"]['Business Requirements'] = 'Wymogi biznesowe';

$GLOBALS["lang"]['But I Only Have Windows Client Machines Available!'] = 'Ale mam tylko maszyny klienta Windows dostępne!';

$GLOBALS["lang"]['But I do not want to have to change the language file every time I update!'] = 'Ale nie chcę zmieniać pliku językowego za każdym razem, gdy go aktualizuję!';

$GLOBALS["lang"]['Buy'] = 'Kup';

$GLOBALS["lang"]['Buy More'] = 'Kup więcej';

$GLOBALS["lang"]['Buy More Licenses'] = 'Kup więcej licencji';

$GLOBALS["lang"]['By'] = 'Przez';

$GLOBALS["lang"]['By default we integrate all devices with their nmis_manage attribute set to <i>y</i>. With 4.2.0 we also ship a Rule that says <i>If we discover a device and it has a valid SNMP OID, mark that device as managed by NMIS</i>. Obviously you can disable this if it is not what you want.'] = 'Domyślnie całkujemy wszystkie urządzenia z ich atrybutem nmis _ manage ustawionym na <i>y</i>. Z 4.2.0 wysyłamy również zasadę, która mówi <i>Jeśli odkryjemy urządzenie, które posiada poprawny system SNMP OID, oznacz to urządzenie zgodnie z NMIS</i>. Oczywiście możesz to wyłączyć, jeśli nie tego chcesz.';

$GLOBALS["lang"]['By default, we skip certificate validation because customers tend to use self-signed certificates. To enable certificate validation, edit the file below'] = 'Domyślnie pomijamy walidację certyfikatu, ponieważ klienci mają tendencję do korzystania z samopodpisanych certyfikatów. Aby umożliwić walidację certyfikatu, edytuj plik poniżej';

$GLOBALS["lang"]['CIDR'] = 'CIDR';

$GLOBALS["lang"]['CIDR Mask'] = 'CIDR Maska';

$GLOBALS["lang"]['cli_config'] = 'CLI Konfiguracja';

$GLOBALS["lang"]['CLI Config'] = 'CLI Konfiguracja';

$GLOBALS["lang"]['CPU'] = 'CPU';

$GLOBALS["lang"]['CPUs'] = 'CPU';

$GLOBALS["lang"]['CSV'] = 'CSV';

$GLOBALS["lang"]['CVE'] = 'CVE';

$GLOBALS["lang"]['CVEs with a status of received, awaiting analysis, undergoing analysis, rejected. These CVEs (mostly) do not contain sufficient information to enable us to generate a correct SQL query.'] = 'CVE ze statusem otrzymanych, oczekujących na analizę, w trakcie analizy, odrzucone. Te CVE (głównie) nie zawierają wystarczających informacji, aby umożliwić nam wygenerowanie poprawnego zapytania SQL.';

$GLOBALS["lang"]['Calculated from discovery.'] = 'Obliczone z odkrycia.';

$GLOBALS["lang"]['Calculated total number of valid IP addresses for this network.'] = 'Obliczona całkowita liczba ważnych adresów IP dla tej sieci.';

$GLOBALS["lang"]['Calculated upon completion, the time taken to execute this item.'] = 'Obliczona po zakończeniu, czas potrzebny na wykonanie tej pozycji.';

$GLOBALS["lang"]['Calculated when integration is run and contains a JSON representation of the devices in this integration. Each links to <code>devices.id</code>.'] = 'Obliczone przy integracji jest uruchomiony i zawiera JSON reprezentacji urządzeń w tej integracji. Każdy link do <code>devices.id</code>.';

$GLOBALS["lang"]['Calculated when integration is run and contains a JSON representation of the locations in this integration. Each links to <code>locations.id</code>.'] = 'Obliczone przy integracji jest uruchomiony i zawiera JSON reprezentacji lokalizacji w tej integracji. Każdy link do <code>locations.id</code>.';

$GLOBALS["lang"]['Calculated when integration is run and contains the number of devices selected from Open-AudIT.'] = 'Obliczone przy integracji jest uruchomiony i zawiera liczbę urządzeń wybranych z Open- Audit.';

$GLOBALS["lang"]['Calculated when integration is run and contains the number of devices selected the external system.'] = 'Obliczony przy integracji jest uruchomiony i zawiera liczbę urządzeń wybranych systemu zewnętrznego.';

$GLOBALS["lang"]['Calculated when integration is run and contains the number of devices to be updated in the external system.'] = 'Obliczone przy integracji jest uruchomiony i zawiera liczbę urządzeń do aktualizacji w systemie zewnętrznym.';

$GLOBALS["lang"]['Calculated when integration is run and contains the number of devices updated in Open-AudIT.'] = 'Obliczony przy integracji jest uruchomiony i zawiera liczbę urządzeń zaktualizowanych w Open-Audit.';

$GLOBALS["lang"]['Call up a command prompt by clicking Start and searching for <code>command</code>'] = 'Wywołanie polecenia przez kliknięcie Uruchom i wyszukaj <code>command</code>';

$GLOBALS["lang"]['Cambodia'] = 'Kambodża';

$GLOBALS["lang"]['Cameroon'] = 'Kamerun';

$GLOBALS["lang"]['Campus Area Network'] = 'Sieć obszaru kampusu';

$GLOBALS["lang"]['Campus area network'] = 'Sieć kampusu';

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

$GLOBALS["lang"]['Catalan'] = 'Kataloński';

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

$GLOBALS["lang"]['Certification'] = 'Certyfikacja';

$GLOBALS["lang"]['Certification Audit'] = 'Audyt certyfikacji';

$GLOBALS["lang"]['Certification Process'] = 'Proces certyfikacji';

$GLOBALS["lang"]['Chad'] = 'Czad';

$GLOBALS["lang"]['Change'] = 'Zmiana';

$GLOBALS["lang"]['change_id'] = 'Zmień identyfikator';

$GLOBALS["lang"]['Change ID'] = 'Zmień identyfikator';

$GLOBALS["lang"]['change_log'] = 'Zmień dziennik';

$GLOBALS["lang"]['Change Log'] = 'Zmień dziennik';

$GLOBALS["lang"]['Change Logs'] = 'Zmień dzienniki';

$GLOBALS["lang"]['change_type'] = 'Typ zmiany';

$GLOBALS["lang"]['Change Type'] = 'Typ zmiany';

$GLOBALS["lang"]['check_minutes'] = 'Sprawdź protokół';

$GLOBALS["lang"]['Check Minutes'] = 'Sprawdź protokół';

$GLOBALS["lang"]['Check for SSH on these ports'] = 'Sprawdź SSH w tych portach';

$GLOBALS["lang"]['Check this port for any SSH service.'] = 'Sprawdź ten port dla każdej usługi SSH.';

$GLOBALS["lang"]['Chile'] = 'Chile';

$GLOBALS["lang"]['China'] = 'Chiny';

$GLOBALS["lang"]['Chinese'] = 'Chiński';

$GLOBALS["lang"]['Chinese (traditional)'] = 'Chiński (tradycyjny)';

$GLOBALS["lang"]['Choose'] = 'Wybierz';

$GLOBALS["lang"]['Choose (select OS first)'] = 'Wybierz (wybierz najpierw OS)';

$GLOBALS["lang"]['Choose a Device'] = 'Wybierz urządzenie';

$GLOBALS["lang"]['Choose a Table'] = 'Wybierz tabelę';

$GLOBALS["lang"]['Choose the type of the task from the first drop down. This will configure the additional fields required depending on the type of task.'] = 'Wybierz typ zadania z pierwszego zrzutu. To skonfiguruje dodatkowe pola wymagane w zależności od rodzaju zadania.';

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

$GLOBALS["lang"]['Click <i>New client secret</i>.'] = 'Kliknij <i>Tajemnica nowego klienta</i>.';

$GLOBALS["lang"]['Click Submit to Execute'] = 'Kliknij Wyślij do wykonania';

$GLOBALS["lang"]['Click on <i>Properties</i> under the <i>Manage</i> header in the central menu column. Copy the <i>User Access URL</i>. Once copied, paste it into yout text editor. You will need to copy one section of this field.<br><br>Our example field looks like this<br><code>https://launcher.myapps.microsoft.com/api/signin/5d97003c-g24b-346e-9932-77db6470b939?tenantId=cf406343-1a96-4f7c-0cc6-46e86dddabf3</code>.<br><br>The section we need is <code>cf406343-1a96-4f7c-0cc6-46e86dddabf3</code> (the tenant ID). This is used in Open-AudIT as the <i>Tenant</i> field, so paste it in there.'] = 'Kliknij <i>Właściwości</i> od <i>Zarządzanie</i> nagłówek w centralnej kolumnie menu. Kopiuj <i>URL dostępu użytkownika</i>. Po skopiowaniu wklej go do edytora tekstu yout. Musisz skopiować jedną sekcję tego pola.<br/><br/>Nasze przykładowe pole wygląda tak.<br/><code>https://launcher.myapps.microsoft.com/api/signin/5d97003c-g24b-346e-9932-77db6470b939?tenantId=cf406343-1a96-4f7c-0cc6-46e86dddabf3</code>.<br/><br/>Potrzebujemy sekcji <code>cf406343-1a96-4f7c-0cc6-46e86dddabf3</code> (identyfikator lokatora). Jest to używane w Open- Audit jako <i>Tenant</i> Pole, wklej go tam.';

$GLOBALS["lang"]['Click on App Registrations to create a new Application, then click New Application Registration. Give it a name (I used Open-AudIT), select Web app / API as the type and provide any URL (the URL is not important) and now click Create.'] = 'Kliknij na App Registrations, aby utworzyć nową aplikację, a następnie kliknij na New Application Registration. Podaj nazwę (użyłem Open- Audit), wybierz aplikację / API Web jako typ i podaj dowolny adres URL (URL nie jest ważny), a teraz kliknij Utwórz.';

$GLOBALS["lang"]['Click on OK and close the DCOMCNFG window.<br><br>The above changes will require a reboot to take effect.'] = 'Kliknij OK i zamknij okno DCOMCNFG.<br/><br/>Powyższe zmiany będą wymagały ponownego uruchomienia.';

$GLOBALS["lang"]['Click on the application you just created. The Application ID displayed is the Client ID.<br><br>To create the client secret, click Settings, then Keys. Provide a key name and select an appropriate expiry date, then click Save.<br><br>The value will be populated for you - this is the Client Secret.'] = 'Kliknij na aplikację, którą właśnie stworzyłeś. Wyświetlany identyfikator aplikacji to ID klienta.<br/><br/>Aby utworzyć tajemnicę klienta, kliknij przycisk Ustawienia, a następnie klawisze. Podaj nazwę klucza i wybierz odpowiedni termin ważności, a następnie kliknij Zapisz.<br/><br/>Wartość zostanie zaludniona dla Ciebie - to jest Secret Klienta.';

$GLOBALS["lang"]['Click the Delete button to remove the example devices from Open-AudIT.<br>This will remove the below devices from the database. '] = 'Kliknij przycisk Usuń, aby usunąć przykładowe urządzenia z Open- Audit.<br/>Usunie to poniższe urządzenia z bazy danych. ';

$GLOBALS["lang"]['Click the Edit button for <i>Basic SAML Configuration</i>.'] = 'Kliknij przycisk Edycja <i>Podstawowa SAML Konfiguracja</i>.';

$GLOBALS["lang"]['Click the Import button below to populate Open-AudIT with example device data.'] = 'Kliknij przycisk Importuj poniżej, aby spopularyzować Open- Audit przykładowymi danymi urządzenia.';

$GLOBALS["lang"]['Click the icon to the right of the field you wish to edit. Change the field and click the green icon to submit.'] = 'Kliknij ikonę po prawej stronie pola, które chcesz edytować. Zmień pole i kliknij na zieloną ikonę, aby je przesłać.';

$GLOBALS["lang"]['Client ID'] = 'Identyfikator klienta';

$GLOBALS["lang"]['Client ID and Secret'] = 'Identyfikator klienta i tajemnica';

$GLOBALS["lang"]['client_ident'] = 'Klient Ident';

$GLOBALS["lang"]['Client Ident'] = 'Klient Ident';

$GLOBALS["lang"]['client_secret'] = 'Tajemnica klienta';

$GLOBALS["lang"]['Client Secret'] = 'Tajemnica klienta';

$GLOBALS["lang"]['client_site_name'] = 'Nazwa strony klienta';

$GLOBALS["lang"]['Client Site Name'] = 'Nazwa strony klienta';

$GLOBALS["lang"]['Close'] = 'Zamknij';

$GLOBALS["lang"]['Closed'] = 'Zamknięte';

$GLOBALS["lang"]['Cloud'] = 'Chmura';

$GLOBALS["lang"]['Cloud Details'] = 'Szczegóły dotyczące chmury';

$GLOBALS["lang"]['Cloud Discovery'] = 'Odkrywanie chmur';

$GLOBALS["lang"]['Cloud Discovery and Auditing'] = 'Odkrycie w chmurze i audyt';

$GLOBALS["lang"]['cloud_id'] = 'Identyfikator chmury';

$GLOBALS["lang"]['Cloud ID'] = 'Identyfikator chmury';

$GLOBALS["lang"]['cloud_log'] = 'Dziennik chmur';

$GLOBALS["lang"]['Cloud Log'] = 'Dziennik chmur';

$GLOBALS["lang"]['cloud_name'] = 'Nazwa chmury';

$GLOBALS["lang"]['Cloud Name'] = 'Nazwa chmury';

$GLOBALS["lang"]['Cloud Network'] = 'Sieć chmur';

$GLOBALS["lang"]['clouds'] = 'Chmury';

$GLOBALS["lang"]['Clouds'] = 'Chmury';

$GLOBALS["lang"]['Clouds are a feature available to Open-AudIT Enterprise licensed customers.'] = 'Chmury to funkcja dostępna dla licencjonowanych klientów Open- Audit Enterprise.';

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

$GLOBALS["lang"]['Clusters and Reporting'] = 'Klastry i sprawozdawczość';

$GLOBALS["lang"]['Cocos (Keeling) Islands'] = 'Wyspy Kokosowe (Keeling)';

$GLOBALS["lang"]['Collection'] = 'Kolekcja';

$GLOBALS["lang"]['Collections'] = 'Zbiory';

$GLOBALS["lang"]['Collector'] = 'Kolekcjoner';

$GLOBALS["lang"]['Collector (UUID)'] = 'Kolekcjoner (UUID)';

$GLOBALS["lang"]['Collector / Server is an Enterprise only feature. Enterprise customers receive one Collector license for free. Additional Collector licenses can be purchased as required.'] = 'Kolekcjoner / Serwer jest tylko funkcją Enterprise. Klienci firmy otrzymują jedną licencję Collector za darmo. Dodatkowe licencje Collector mogą być zakupione w zależności od potrzeb.';

$GLOBALS["lang"]['Collector / Server is designed so that you can have a remote or <i>collector</i>  instance of Open-AudIT running on a remote machine. That collector instance might be in another security zone, subnet, cloud hosting instance or at a customer site.  The remote collector is then doing all the discovering and auditing of devices locally avoiding networking and firewalling complexity.  The Collector once it has registered is completely controlled by the <i>server</i>.  This means you only need an HTTP or HTTPS connection from that Collector to the Server.'] = 'Kolekcjoner / Serwer jest zaprojektowany tak, że można mieć pilota lub <i>kolektor</i> instancja Open- Audit działa na zdalnej maszynie. Ta instancja kolekcjonerska może być w innej strefie bezpieczeństwa, podsieci, cloud hosting instancji lub na stronie klienta. Kolekcjoner zdalny następnie robi wszystkie odkrywania i audytu urządzeń lokalnie unikając sieci i firewalling złożoności. Kolekcjoner po zarejestrowaniu jest całkowicie kontrolowany przez <i>serwer</i>. Oznacza to, że potrzebujesz tylko połączenia HTTP lub HTTPS z tego Kolekcjonera do serwera.';

$GLOBALS["lang"]['Collector Dashboard'] = 'Deska rozdzielcza kolektora';

$GLOBALS["lang"]['Collector Name'] = 'Nazwa kolektora';

$GLOBALS["lang"]['collector_uuid'] = 'Kolekcjoner Uuid';

$GLOBALS["lang"]['Collector Uuid'] = 'Kolekcjoner Uuid';

$GLOBALS["lang"]['Collector tasks are automatically setup when the collector feature is enabled. Collector tasks should not be created directly by users. Collector tasks can have their frequency edited after creation. If the Open-AudIT Server has Collectors reporting to it, an additional drop down is provided. You can select this to specify which Collector the task should run on. Only Discovery tasks are supported for Collectors.'] = 'Zadania kolektora są automatycznie ustawiane po włączeniu funkcji kolektora. Zadania kolektora nie powinny być tworzone bezpośrednio przez użytkowników. Zadania kolektora mogą być edytowane po utworzeniu. Jeżeli Open- Audit Server ma raportujące do niego kolektory, jest dostarczony dodatkowy spadek. Możesz wybrać to, aby określić, na którym Kolekcjoner zadanie powinno być uruchomione. Tylko zadania Discovery są obsługiwane dla Kolekcjonerów.';

$GLOBALS["lang"]['Collectors'] = 'Zbiorniki';

$GLOBALS["lang"]['Collectors can operate in one of two modes: Collector and StandAlone. When in Collector mode, the instance of Open-AudIT is managed by the main server. When in Stand Alone mode, the instance is managed locally and forwards any found devices to the main server.'] = 'Kolekcjonerzy mogą działać w jednym z dwóch trybów: Collector i StandAly. Gdy w trybie Collector instancja Open- Audit jest zarządzana przez główny serwer. Gdy w trybie Stand Alone instancja jest zarządzana lokalnie i do przodu wszelkie znalezione urządzenia do głównego serwera.';

$GLOBALS["lang"]['Collectors for Remote Discovery'] = 'Kolekcjonery do zdalnego wyszukiwania';

$GLOBALS["lang"]['Colombia'] = 'Kolumbia';

$GLOBALS["lang"]['color'] = 'Kolor';

$GLOBALS["lang"]['Color'] = 'Kolor';

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

$GLOBALS["lang"]['Comment out the below line (about line 49 or so). Just place a hash # at the start of the line.'] = 'Komentarz poniżej linii (około linii 49 lub więcej). Wystarczy umieścić hasz # na początku linii.';

$GLOBALS["lang"]['comments'] = 'Uwagi';

$GLOBALS["lang"]['Comments'] = 'Uwagi';

$GLOBALS["lang"]['commercial'] = 'Handel';

$GLOBALS["lang"]['Commercial'] = 'Handel';

$GLOBALS["lang"]['Commercial Support'] = 'Wsparcie handlowe';

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

$GLOBALS["lang"]['Complete these steps.'] = 'Dokończ te kroki.';

$GLOBALS["lang"]['Complexity of the attack (Low or High).'] = 'Kompleksowość ataku (niski lub wysoki).';

$GLOBALS["lang"]['Component Table'] = 'Tabela składników';

$GLOBALS["lang"]['Components (All Devices)'] = 'Składniki (wszystkie urządzenia)';

$GLOBALS["lang"]['Compute'] = 'Oblicz';

$GLOBALS["lang"]['Condition'] = 'Stan';

$GLOBALS["lang"]['Conduct a risk assessment'] = 'Przeprowadzenie oceny ryzyka';

$GLOBALS["lang"]['Conduct awareness and training programs'] = 'Prowadzenie programów informacyjnych i szkoleniowych';

$GLOBALS["lang"]['Conduct management review meetings'] = 'Posiedzenia przeglądów zarządzania postępowaniem';

$GLOBALS["lang"]['Conduct regular surveillance audits (usually annually)'] = 'Przeprowadzanie regularnych audytów nadzoru (zazwyczaj co roku)';

$GLOBALS["lang"]['Conducted by an accredited body in two stages'] = 'Prowadzony przez akredytowany organ w dwóch etapach';

$GLOBALS["lang"]['Config'] = 'Konfiguracja';

$GLOBALS["lang"]['Config Default, currently '] = 'Konfiguracja Domyślna, aktualnie ';

$GLOBALS["lang"]['config_file'] = 'Plik konfiguracyjny';

$GLOBALS["lang"]['Config File'] = 'Plik konfiguracyjny';

$GLOBALS["lang"]['config_manager_error_code'] = 'Kod błędu menedżera konfiguracji';

$GLOBALS["lang"]['Config Manager Error Code'] = 'Kod błędu menedżera konfiguracji';

$GLOBALS["lang"]['Configurable Role Based Access Control (RBAC)'] = 'Configurable Role Based Access Control (RBAC)';

$GLOBALS["lang"]['configuration'] = 'Konfiguracja';

$GLOBALS["lang"]['Configuration'] = 'Konfiguracja';

$GLOBALS["lang"]['Configuration Change Detection and Reporting'] = 'Konfiguracja Wykrywanie zmian i sprawozdawczość';

$GLOBALS["lang"]['Configure'] = 'Konfiguracja';

$GLOBALS["lang"]['Configure the agent server-side to perform audits on a schedule'] = 'Konfiguracja serwera agenta do przeprowadzania audytów według harmonogramu';

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

$GLOBALS["lang"]['Consulting, implementation and other services are available through'] = 'Doradztwo, wdrażanie i inne usługi są dostępne poprzez';

$GLOBALS["lang"]['contact'] = 'Kontakt';

$GLOBALS["lang"]['Contact'] = 'Kontakt';

$GLOBALS["lang"]['contact_name'] = 'Nazwa kontaktu';

$GLOBALS["lang"]['Contact Name'] = 'Nazwa kontaktu';

$GLOBALS["lang"]['contained_in'] = 'Zawiera';

$GLOBALS["lang"]['Contained In'] = 'Zawiera';

$GLOBALS["lang"]['Contains a JSON object details the associated widgets and their positions.'] = 'Zawiera obiekt JSON szczegóły związane widżety i ich pozycji.';

$GLOBALS["lang"]['Contains the fields that determine if we should use ssh, snmp and wmi discovery options. A JSON object.'] = 'Zawiera pola, które decydują, czy powinniśmy używać opcji ssh, snmp i wmi. Obiekt JSON.';

$GLOBALS["lang"]['Context & Leadership'] = 'Kontekst i przywództwo';

$GLOBALS["lang"]['Context Engine ID'] = 'Identyfikator silnika kontekstowego';

$GLOBALS["lang"]['Context Name'] = 'Nazwa kontekstu';

$GLOBALS["lang"]['Continuously improve the ISMS'] = 'Stała poprawa ISMS';

$GLOBALS["lang"]['contractual_obligations'] = 'Zobowiązania umowne';

$GLOBALS["lang"]['Contractual Obligations'] = 'Zobowiązania umowne';

$GLOBALS["lang"]['Cook Islands'] = 'Wyspy Cooka';

$GLOBALS["lang"]['Copy and paste an audit result'] = 'Kopiuj i wklej wynik audytu';

$GLOBALS["lang"]['Copy and paste the below to the forums, another instance of Open-AudIT or anywhere else you need to provide this item.'] = 'Kopiuj i wklej poniższy tekst na forum, w innym przypadku Open- Audit lub gdziekolwiek indziej musisz dostarczyć ten element.';

$GLOBALS["lang"]['Copy the <i>Application ID</i> field and paste it into the Open-AudIT <i>Client ID</i> field for the new Auth Method.'] = 'Kopiuj <i>Identyfikator aplikacji</i> pole i wklej go do Open- Audit <i>Identyfikator klienta</i> pole dla nowej metody Auth.';

$GLOBALS["lang"]['Copy the <i>Client ID</i> and paste it into the Open-AudIT <i>Client ID</i> field.<br>If there is no secret, click <i>Generate new secret</i>, then copy the value and paste it into the Open-AudIT <i>Client Secret</i> field.'] = 'Kopiuj <i>Identyfikator klienta</i> i wkleić do Open- Audit <i>Identyfikator klienta</i> Pole.<br/>Jeśli nie ma sekretu, kliknij <i>Generuj nowy sekret</i>, następnie skopiuj wartość i wklej ją do Open- Audit <i>Tajemnica klienta</i> Pole.';

$GLOBALS["lang"]['Copy the value and paste it into the Open-AudIT form for the <i>Client Secret</i> field.'] = 'Skopiuj wartość i wklej ją do formularza Open- Audit <i>Tajemnica klienta</i> Pole.';

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

$GLOBALS["lang"]['Create File'] = 'Utwórz plik';

$GLOBALS["lang"]['Create Geocode'] = 'Utwórz Geokod';

$GLOBALS["lang"]['create_internal_count'] = 'Utwórz wewnętrzny licznik';

$GLOBALS["lang"]['Create Internal Count'] = 'Utwórz wewnętrzny licznik';

$GLOBALS["lang"]['create_internal_from_external'] = 'Utwórz wewnętrzną z zewnątrz';

$GLOBALS["lang"]['Create Internal From External'] = 'Utwórz wewnętrzną z zewnątrz';

$GLOBALS["lang"]['Create NMIS Devices from Open-AudIT'] = 'Utwórz urządzenia NMIS z Open- Audit';

$GLOBALS["lang"]['Create Open-AudIT Devices from '] = 'Utwórz Open- Audit Urządzenia z ';

$GLOBALS["lang"]['Create Open-AudIT Devices from NMIS'] = 'Utwórz Open- Audit Urządzenia z NMIS';

$GLOBALS["lang"]['Create a Baseline for the example device'] = 'Utwórz podstawę dla przykładowego urządzenia';

$GLOBALS["lang"]['Create a Discovery'] = 'Utwórz odkrycie';

$GLOBALS["lang"]['Create a Statement of Applicability (SoA)'] = 'Stworzenie oświadczenia o stosowaniu (SoA)';

$GLOBALS["lang"]['created_by'] = 'Stworzony przez';

$GLOBALS["lang"]['Created By'] = 'Stworzony przez';

$GLOBALS["lang"]['created_date'] = 'Data utworzenia';

$GLOBALS["lang"]['Created Date'] = 'Data utworzenia';

$GLOBALS["lang"]['Creating'] = 'Tworzenie';

$GLOBALS["lang"]['Creating Credentials'] = 'Tworzenie kart';

$GLOBALS["lang"]['Creating Device'] = 'Tworzenie urządzenia';

$GLOBALS["lang"]['Creating Widgets'] = 'Tworzenie widżetów';

$GLOBALS["lang"]['Creating a Discovery Scan Options entry'] = 'Tworzenie odkrycia Wpis opcji skanowania';

$GLOBALS["lang"]['Creating a Query'] = 'Tworzenie zapytań';

$GLOBALS["lang"]['Creating a SQL Statement for Groups'] = 'Tworzenie oświadczenia SQL dla grup';

$GLOBALS["lang"]['Creating a SQL Statement for Queries'] = 'Tworzenie oświadczenia SQL dla zapytań';

$GLOBALS["lang"]['Creating an Integration'] = 'Tworzenie integracji';

$GLOBALS["lang"]['creator'] = 'Twórca';

$GLOBALS["lang"]['Creator'] = 'Twórca';

$GLOBALS["lang"]['credential'] = 'Kredytowy';

$GLOBALS["lang"]['Credential'] = 'Kredytowy';

$GLOBALS["lang"]['Credentials'] = 'Należności';

$GLOBALS["lang"]['Credentials Client ID'] = 'Identyfikator klienta';

$GLOBALS["lang"]['Credentials Subscription ID'] = 'Należności Subskrypcja ID';

$GLOBALS["lang"]['Credentials Tenant ID'] = 'Identyfikator nabywcy';

$GLOBALS["lang"]['Credentials are stored in the <i>credentials</i> database table. The actual credential information is encrypted in storage. When a Discovery is run, a device has its specific credentials retrieved from the database, decrypted and tested. If these fail the list of credentials is also retrieved, decrypted and then tested against the device starting with credentials known to have worked previously. Device specific credentials are stored at an individual device level in the <i>credential</i> table (note - no <i>s</i> in the table name). SSH keys are tested before SSH username / password. When testing SSH, credentials will also be marked as working with sudo or being root.'] = 'Fundamenty przechowywane są w <i>legitymacje</i> tabela bazy danych. Rzeczywista informacja jest zakodowana w magazynie. Po uruchomieniu Discovery, urządzenie ma swoje specyficzne dane z bazy danych, odszyfrowane i przetestowane. W przypadku niepowodzenia, lista uwierzytelniania jest również pobierana, odszyfrowywana, a następnie testowana na urządzeniu, zaczynając od referencji, o których wiadomo, że działały wcześniej. Dane dotyczące konkretnego urządzenia są przechowywane na poziomie pojedynczego urządzenia w <i>Kredytowe</i> tabela (uwaga - nie <i>s</i> w nazwie tabeli). Klucze SSH są testowane przed SSH nazwa użytkownika / hasło. Podczas testowania SSH, referencje będą również oznaczone jako praca z sudo lub jest root.';

$GLOBALS["lang"]['Credentials can have one of a few different types - snmp v.1 / v.2, snmp v.3, ssh, ssh key, windows are all implemented. CAVEAT - ssh keys are not implemented for Windows Open-AudIT servers as yet.'] = 'Kredyty mogą mieć jeden z kilku różnych typów - snmp v.1 / v.2, snmp v.3, ssh, ssh key, okna są zaimplementowane. CAVEAT - klawisze ssh nie są jeszcze zaimplementowane dla serwerów Windows Open- Audit.';

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

$GLOBALS["lang"]['Custom Fields'] = 'Niestandardowe pola';

$GLOBALS["lang"]['Custom TCP Ports'] = 'Własne porty TCP';

$GLOBALS["lang"]['Custom TCP Ports. Any specific ports we would liuke scanned in addition to the Top TCP Ports. Comma seperated, no spaces.'] = 'Własne porty TCP. Jakiekolwiek konkretne porty, które byśmy zeskanowali oprócz Top TCP Ports. Przecinek seperacyjny, brak przestrzeni.';

$GLOBALS["lang"]['Custom UDP Ports'] = 'Własny UDP Porty';

$GLOBALS["lang"]['Custom UDP Ports. Any specific ports we would liuke scanned in addition to the Top UDP Ports. Comma seperated, no spaces.'] = 'Własne porty UDP. Każde konkretne porty, które zeskanowaliśmy oprócz najlepszych portów UDP. Przecinek seperacyjny, brak przestrzeni.';

$GLOBALS["lang"]['Customisable Scanning Options per Discovery'] = 'Dostosowalne opcje skanowania na Discovery';

$GLOBALS["lang"]['Cve'] = 'Cve';

$GLOBALS["lang"]['Cyprus'] = 'Cypr';

$GLOBALS["lang"]['Czech'] = 'Czeski';

$GLOBALS["lang"]['Czech Republic'] = 'Republika Czeska';

$GLOBALS["lang"]['DHCP'] = 'DHCP';

$GLOBALS["lang"]['DN Account (optional)'] = 'Konto DN (nieobowiązkowe)';

$GLOBALS["lang"]['DN Password (optional)'] = 'DN Hasło (opcjonalne)';

$GLOBALS["lang"]['DNS FQDN'] = 'DNS FQDN';

$GLOBALS["lang"]['DNS Hostname'] = 'Nazwa komputera DNS';

$GLOBALS["lang"]['Danish'] = 'Dania';

$GLOBALS["lang"]['dashboard_id'] = 'Identyfikator tablicy rozdzielczej';

$GLOBALS["lang"]['Dashboard ID'] = 'Identyfikator tablicy rozdzielczej';

$GLOBALS["lang"]['Dashboard Widgets'] = 'Widgety deski rozdzielczej';

$GLOBALS["lang"]['dashboards'] = 'Deski rozdzielcze';

$GLOBALS["lang"]['Dashboards'] = 'Deski rozdzielcze';

$GLOBALS["lang"]['Dashboards and Widgets allow Enterprise licensed customers to create, read, update and delete both of these collections to ensure their homepage is exactly what they need to see. Not only that, but a user is able to set a given dashboard as their own homepage. Everyone does not need to use the same homepage (dashboard), nor the same widgets on that dashboard. Professional licensed customers can choose between two predefined dashboards to set as their own homepage.'] = 'Deski rozdzielcze i Widgety pozwalają klientom licencjonowanym przez Enterprise tworzyć, czytać, aktualizować i usuwać obie te kolekcje, aby upewnić się, że ich strona główna jest dokładnie to, co muszą zobaczyć. Nie tylko to, ale użytkownik jest w stanie ustawić określoną deskę rozdzielczą jako własną stronę główną. Każdy nie musi używać tej samej strony głównej (deska rozdzielcza), ani tych samych widżetów na tej desce rozdzielczej. Profesjonalni licencjonowani klienci mogą wybrać między dwoma wstępnie zdefiniowanymi deskami rozdzielczymi, aby ustawić jako własną stronę główną.';

$GLOBALS["lang"]['Dashboards provide <i>at a glance</i> important visibility for changes occurring on your network as well as providing quick links to device types, manufacturers, and operating systems and so much more.'] = 'Deski rozdzielcze zapewniają <i>w mgnieniu oka</i> ważna widoczność zmian zachodzących w sieci, jak również zapewnienie szybkich połączeń z typami urządzeń, producentami i systemami operacyjnymi i wiele więcej.';

$GLOBALS["lang"]['Dashboards use'] = 'Stosowanie desek rozdzielczych';

$GLOBALS["lang"]['Data'] = 'Dane';

$GLOBALS["lang"]['Data Export - CSV, XML, JSON'] = 'Eksport danych - CSV, XML, JSON';

$GLOBALS["lang"]['Data Retention'] = 'Zatrzymanie danych';

$GLOBALS["lang"]['Database'] = 'Baza danych';

$GLOBALS["lang"]['db_action'] = 'Akcja bazy danych';

$GLOBALS["lang"]['Database Action'] = 'Akcja bazy danych';

$GLOBALS["lang"]['db_column'] = 'Kolumna bazy danych';

$GLOBALS["lang"]['Database Column'] = 'Kolumna bazy danych';

$GLOBALS["lang"]['Database Definition'] = 'Definicja bazy danych';

$GLOBALS["lang"]['db_row'] = 'Wiersz bazy danych';

$GLOBALS["lang"]['Database Row'] = 'Wiersz bazy danych';

$GLOBALS["lang"]['Database Schema'] = 'Schemat bazy danych';

$GLOBALS["lang"]['Database Server Discovery'] = 'Odkrywanie serwera baz danych';

$GLOBALS["lang"]['db_table'] = 'Tabela bazy danych';

$GLOBALS["lang"]['Database Table'] = 'Tabela bazy danych';

$GLOBALS["lang"]['Database Tables'] = 'Tabele bazy danych';

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

$GLOBALS["lang"]['Debugging'] = 'Debugowanie';

$GLOBALS["lang"]['Debugging a Script'] = 'Debugowanie skryptu';

$GLOBALS["lang"]['December'] = 'Grudzień';

$GLOBALS["lang"]['Decommission'] = 'Rozstanie';

$GLOBALS["lang"]['Default'] = 'Domyślne';

$GLOBALS["lang"]['Default Authentication Level - Set to Connect'] = 'Domyślne uwierzytelnienie Poziom - Ustaw na podłączenie';

$GLOBALS["lang"]['Default Impersonation Level - Set to Identify'] = 'Domyślne naśladowanie Poziom - Ustaw na identyfikację';

$GLOBALS["lang"]['Default Items'] = 'Domyślne pozycje';

$GLOBALS["lang"]['Default Orgs Groups'] = 'Domyślne grupy orgów';

$GLOBALS["lang"]['Default Roles Groups'] = 'Domyślne grupy roli';

$GLOBALS["lang"]['Default Value'] = 'Wartość domyślna';

$GLOBALS["lang"]['Default of 389. Normally 636 used for Active Directory LDAPS.'] = 'Domyślnie 389. Normalnie 636 używane dla Active Directory LDAPS.';

$GLOBALS["lang"]['Default of <code>3</code> for LDAP and Active Directory.'] = 'Domyślnie <code>3</code> dla LDAP i Active Directory.';

$GLOBALS["lang"]['Defaults'] = 'Domyślne';

$GLOBALS["lang"]['Deferred'] = 'Odroczone';

$GLOBALS["lang"]['Define project scope and objectives'] = 'Określenie zakresu i celów projektu';

$GLOBALS["lang"]['Define the ISMS scope'] = 'Określenie zakresu ISMS';

$GLOBALS["lang"]['Define the context of the organization (internal/external issues)'] = 'Określenie kontekstu organizacji (kwestie wewnętrzne / zewnętrzne)';

$GLOBALS["lang"]['delay_minutes'] = 'Opóźnienie w protokole';

$GLOBALS["lang"]['Delay Minutes'] = 'Opóźnienie w protokole';

$GLOBALS["lang"]['Delete'] = 'Usuń';

$GLOBALS["lang"]['Delete Example Devices'] = 'Usuń przykładowe urządzenia';

$GLOBALS["lang"]['delete_external_from_internal'] = 'Usuń zewnętrzne z wewnętrznych';

$GLOBALS["lang"]['Delete External From Internal'] = 'Usuń zewnętrzne z wewnętrznych';

$GLOBALS["lang"]['Delete NMIS Devices if not in Open-AudIT'] = 'Usuń NMIS Urządzenia, jeśli nie w Open- Audit';

$GLOBALS["lang"]['Delete a {collection} entry.'] = 'Usuń wpis {kolekcja}.';

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

$GLOBALS["lang"]['Details of who is usually contactable at this site.'] = 'Szczegóły, kto jest zwykle stykalny na tej stronie.';

$GLOBALS["lang"]['Determine how often you want to run the Baseline check against the database and create a Scheduled Report'] = 'Określ, jak często chcesz uruchomić sprawdzanie bazowe z bazy danych i utworzyć raport zaplanowany';

$GLOBALS["lang"]['Determine risk treatment options'] = 'Określić opcje leczenia ryzyka';

$GLOBALS["lang"]['Develop a Risk Treatment Plan'] = 'Opracowanie planu leczenia ryzyka';

$GLOBALS["lang"]['Develop policies, procedures, and controls'] = 'Opracowanie polityk, procedur i kontroli';

$GLOBALS["lang"]['Develop required ISMS documentation (policies, procedures, etc.)'] = 'Opracowanie wymaganej dokumentacji ISMS (polityki, procedury itp.)';

$GLOBALS["lang"]['device'] = 'Urządzenie';

$GLOBALS["lang"]['Device'] = 'Urządzenie';

$GLOBALS["lang"]['Device Audits'] = 'Audyty urządzeń';

$GLOBALS["lang"]['Device Component Names'] = 'Nazwy elementów urządzenia';

$GLOBALS["lang"]['Device ID'] = 'Identyfikator urządzenia';

$GLOBALS["lang"]['device_id'] = 'Identyfikator urządzenia';

$GLOBALS["lang"]['device_id_a'] = 'ID urządzenia A';

$GLOBALS["lang"]['Device ID A'] = 'ID urządzenia A';

$GLOBALS["lang"]['device_id_b'] = 'Kod identyfikacyjny urządzenia B';

$GLOBALS["lang"]['Device ID B'] = 'Kod identyfikacyjny urządzenia B';

$GLOBALS["lang"]['Device Matching Rules'] = 'Zasady dopasowania urządzenia';

$GLOBALS["lang"]['Device Name'] = 'Nazwa urządzenia';

$GLOBALS["lang"]['Device Result'] = 'Wynik urządzenia';

$GLOBALS["lang"]['Device Results'] = 'Wyniki urządzenia';

$GLOBALS["lang"]['Device Seed'] = 'Materiał siewny';

$GLOBALS["lang"]['Device Seed Discoveries are a good option if you know that your network consists of a range of subnets, but you are unsure what they are. Seed the discovery with a local router and watch your network unfold before your eyes.'] = 'Materiał siewny Odkrycia są dobrą opcją, jeśli wiesz, że twoja sieć składa się z wielu podsieci, ale nie jesteś pewien, czym są. Nasienie odkrycia z lokalnego routera i oglądać sieć rozwija się przed oczami.';

$GLOBALS["lang"]['Device Seed IP'] = 'Urządzenie Nasienie IP';

$GLOBALS["lang"]['Device Status'] = 'Status urządzenia';

$GLOBALS["lang"]['Device Types'] = 'Typy urządzeń';

$GLOBALS["lang"]['Device and Software and Hardware Auditing'] = 'Urządzenia i oprogramowanie oraz audyt sprzętu';

$GLOBALS["lang"]['Device is in the Subnet'] = 'Urządzenie jest w Subnecie';

$GLOBALS["lang"]['Devices'] = 'Urządzenia';

$GLOBALS["lang"]['devices_assigned_to_location'] = 'Urządzenia przypisane do lokalizacji';

$GLOBALS["lang"]['Devices Assigned To Location'] = 'Urządzenia przypisane do lokalizacji';

$GLOBALS["lang"]['devices_assigned_to_org'] = 'Urządzenia przypisane Org';

$GLOBALS["lang"]['Devices Assigned To Org'] = 'Urządzenia przypisane Org';

$GLOBALS["lang"]['Devices Audited'] = 'Urządzenia audytowane';

$GLOBALS["lang"]['Devices Collection'] = 'Kolekcja urządzeń';

$GLOBALS["lang"]['Devices Created in '] = 'Urządzenia ';

$GLOBALS["lang"]['Devices Created in Open-AudIT'] = 'Urządzenia utworzone w Open- Audit';

$GLOBALS["lang"]['devices_default_display_columns'] = 'Domyślne kolumny wyświetlacza urządzeń';

$GLOBALS["lang"]['Devices Default Display Columns'] = 'Domyślne kolumny wyświetlacza urządzeń';

$GLOBALS["lang"]['Devices Found Last 7 Days'] = 'Urządzenia znalezione w ciągu ostatnich 7 dni';

$GLOBALS["lang"]['Devices Found Today'] = 'Urządzenia znalezione dzisiaj';

$GLOBALS["lang"]['Devices Found Yesterday'] = 'Urządzenia znalezione wczoraj';

$GLOBALS["lang"]['Devices Missing Information'] = 'Brak informacji na temat urządzeń';

$GLOBALS["lang"]['Devices Not Audited'] = 'Urządzenia nieaudytowane';

$GLOBALS["lang"]['Devices Not Seen 30 Days'] = 'Urządzenia nie widziane 30 dni';

$GLOBALS["lang"]['Devices Not Seen 7 Days'] = 'Urządzenia nie widziane 7 dni';

$GLOBALS["lang"]['Devices Not Seen 90 Days'] = 'Urządzenia nie widziane 90 dni';

$GLOBALS["lang"]['Devices Older Than X'] = 'Urządzenia starsze niż X';

$GLOBALS["lang"]['Devices Retrieved via API'] = 'Urządzenia odzyskane za pośrednictwem API';

$GLOBALS["lang"]['Devices Selected from '] = 'Urządzenia wybrane z ';

$GLOBALS["lang"]['Devices Selected from Open-AudIT'] = 'Urządzenia wybrane z Open- Audit';

$GLOBALS["lang"]['Devices Updated in '] = 'Urządzenia zaktualizowane ';

$GLOBALS["lang"]['Devices Updated in Open-AudIT'] = 'Urządzenia Aktualizacja w Open- Audit';

$GLOBALS["lang"]['Devices are being benchmarked.'] = 'Urządzenia są oznakowane.';

$GLOBALS["lang"]['Devices are not being benchmarked.'] = 'Urządzenia nie są oznakowane.';

$GLOBALS["lang"]['Devices could be benchmarked.'] = 'Urządzenia mogą być oznakowane.';

$GLOBALS["lang"]['Devices from Open-AudIT'] = 'Urządzenia z Open- Audit';

$GLOBALS["lang"]['Devices in Running State'] = 'Urządzenia w stanie jazdy';

$GLOBALS["lang"]['Devices in Stopped State'] = 'Urządzenia w stanie zatrzymanym';

$GLOBALS["lang"]['Devices in this'] = 'Urządzenia w tym';

$GLOBALS["lang"]['Devices will not be matched if their status is set to <i>deleted</i>. Any other status will allow a match to occur.'] = 'Urządzenia nie będą dopasowane, jeśli ich status jest ustawiony na <i>usunięty</i>. Każdy inny status pozwoli na dopasowanie.';

$GLOBALS["lang"]['Devices with Expired Warranties'] = 'Urządzenia z zużytą gwarancją';

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

$GLOBALS["lang"]['Discoveries'] = 'Odkrycia';

$GLOBALS["lang"]['Discoveries are at the very heart of what Open-AudIT does. How else would you know <i>Whats On Your Network?</i>'] = 'Odkrycia są w samym sercu tego, co robi Open- Audit. Skąd inaczej byś wiedział? <i>Co jest w twojej sieci?</i>';

$GLOBALS["lang"]['Discoveries are entries that enable you to run a discovery upon a network in a single click, without entering the details of that network each and every time.'] = 'Odkrycia to wpisy, które pozwalają na wykonanie odkrycia na sieci za jednym kliknięciem, bez wprowadzania szczegółów tej sieci za każdym razem.';

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

$GLOBALS["lang"]['Discovery Scan Options are just another item collection. Enterprise users can create, read, update and delete entries as required. Professional users can read all entries, but not create new entries, update existing entries or delete entries. Community users have no GUI that allows access to this collection.'] = 'Przeskanuj Opcje to tylko kolejna kolekcja elementów. Użytkownicy przedsiębiorstwa mogą tworzyć, czytać, aktualizować i usuwać wpisy zgodnie z wymaganiami. Profesjonalni użytkownicy mogą czytać wszystkie wpisy, ale nie tworzyć nowych wpisów, aktualizować istniejące wpisy lub usuwać wpisy. Użytkownicy wspólnotowi nie posiadają GUI, który umożliwiałby dostęp do tej kolekcji.';

$GLOBALS["lang"]['Discovery Scan Types'] = 'Rodzaje skanowania';

$GLOBALS["lang"]['Discovery Support'] = 'Wsparcie wyszukiwania';

$GLOBALS["lang"]['Discovery has stopped working'] = 'Odkrycie przestało działać.';

$GLOBALS["lang"]['disk'] = 'Dysk';

$GLOBALS["lang"]['Disk'] = 'Dysk';

$GLOBALS["lang"]['display_version'] = 'Wyświetl wersję';

$GLOBALS["lang"]['Display Version'] = 'Wyświetl wersję';

$GLOBALS["lang"]['Display in Menu'] = 'Wyświetl w menu';

$GLOBALS["lang"]['Displays a standard web form for submission to POST /{collection}.'] = 'Wyświetla standardowy formularz internetowy do przekazania do POST / {collection}.';

$GLOBALS["lang"]['Displays a standard web form for submission to POST /{collection}/import.'] = 'Wyświetla standardowy formularz internetowy do przesyłania do POST / {collection} / import.';

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

$GLOBALS["lang"]['Do not forget about the Open-AudIT wiki for all your documentation.'] = 'Nie zapomnij o Open- Audit wiki dla całej dokumentacji.';

$GLOBALS["lang"]['Do not forget there is a mountain of documentation on the wiki'] = 'Nie zapominaj, że jest góra dokumentacji na wiki';

$GLOBALS["lang"]['Do not scan these TCP ports.'] = 'Nie skanuj tych portów TCP.';

$GLOBALS["lang"]['Do not scan these UDP ports.'] = 'Nie skanuj tych portów UDP.';

$GLOBALS["lang"]['Do not show me again'] = 'Nie pokazuj mi więcej.';

$GLOBALS["lang"]['Do you have a perfect example of this configuration? Perhaps a device located in a lab environment or a workstation you use to clone workstation VMs from.'] = 'Masz doskonały przykład tej konfiguracji? Może urządzenie znajdujące się w środowisku laboratoryjnym lub stacji roboczej, z której sklonujesz maszyny wirtualne.';

$GLOBALS["lang"]['Do you want to use secure transport (LDAPS) or regular unencrypted LDAP.'] = 'Czy chcesz korzystać z bezpiecznego transportu (LDAPS) lub regularnego niezaszyfrowanego LDAP.';

$GLOBALS["lang"]['Do you wish to see the standard sidebar on the left.'] = 'Chcesz zobaczyć standardowy pasek boczny po lewej.';

$GLOBALS["lang"]['documentation'] = 'Dokumentacja';

$GLOBALS["lang"]['Documentation'] = 'Dokumentacja';

$GLOBALS["lang"]['Documentation about a particular collection.'] = 'Dokumentacja dotycząca konkretnej kolekcji.';

$GLOBALS["lang"]['Does Not Equal'] = 'Nie równa się';

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

$GLOBALS["lang"]['Download a File'] = 'Pobierz plik';

$GLOBALS["lang"]['Download a file from URL'] = 'Pobierz plik z URL';

$GLOBALS["lang"]['Download the test_windows_client.vbs script directly'] = 'Pobierz bezpośrednio skrypt test _ windows _ client.vbs';

$GLOBALS["lang"]['Download your updated version from'] = 'Pobierz zaktualizowaną wersję z';

$GLOBALS["lang"]['driver'] = 'Kierowca';

$GLOBALS["lang"]['Driver'] = 'Kierowca';

$GLOBALS["lang"]['duplex'] = 'Duplex';

$GLOBALS["lang"]['Duplex'] = 'Duplex';

$GLOBALS["lang"]['Duplicate Devices / Missing Devices'] = 'Duplikaty urządzeń / brakujących urządzeń';

$GLOBALS["lang"]['duration'] = 'Czas trwania';

$GLOBALS["lang"]['Duration'] = 'Czas trwania';

$GLOBALS["lang"]['Dutch'] = 'holenderski';

$GLOBALS["lang"]['ESXi'] = 'ESXi';

$GLOBALS["lang"]['EULA'] = 'EULA';

$GLOBALS["lang"]['Each IP is scanned with the discovery configured options (see Discovery Scan Options and Discovery - Community vs Professional vs Enterprise on the wiki). In general, Nmap will test for ports 22 (ssh), 135 (wmi), 62078 (iPhone) and UDP 161 (snmp). If 22, 135 or 161 respond the credential list is retrieved and each credential tested in turn. The first working credentials are used for further queries directly from the device. Note - if a device has previously been discovered and has working credentials, those credentials are tested first. Only if those fail are the other credentials then attempted.'] = 'Każdy IP jest skanowany za pomocą skonfigurowanych opcji wyszukiwania (zobacz Opcje skanowania Discovery i Discovery - Community vs Professional vs Enterprise na wiki). Ogólnie rzecz biorąc, Nmap będzie testować dla portów 22 (ssh), 135 (wmi), 62078 (iPhone) i UDP 161 (snmp). W przypadku uzyskania odpowiedzi 22, 135 lub 161 na listę kredytową, a każda z nich jest testowana z kolei. Pierwsze referencje robocze są wykorzystywane do dalszych zapytań bezpośrednio z urządzenia. Uwaga - jeśli urządzenie zostało wcześniej odkryte i posiada referencje robocze, te referencje są najpierw testowane. Tylko jeśli te porażki są inne referencje następnie próbował.';

$GLOBALS["lang"]['Each time a device is discovered or an audit result is processed, all rules are retrieved from the database and run against the attributes of the specific device. Rules run against one device at a time - there is no facility to say <i>Run the rules against all devices<i> or <i>Run the rules against these devices<i>. An individual rule will test one or more attributes of the device and if they match the rule, the result will be applied. Several attributes can be tested. Several attributes can be set. Think of this as an If This, Then That system for Open-AudIT.'] = 'Za każdym razem, gdy urządzenie jest odkrywane lub wynik audytu jest przetwarzany, wszystkie zasady są pobierane z bazy danych i uruchamiane w oparciu o atrybuty danego urządzenia. Zasady działają przeciwko jednemu urządzeniu na raz - nie ma możliwości, aby powiedzieć <i>Uruchom zasady przeciwko wszystkim urządzeniom<i> lub <i>Uruchom zasady przeciwko tym urządzeniom<i>. Indywidualna reguła będzie testować jeden lub więcej atrybutów urządzenia i jeśli będą one zgodne z regułą, wynik zostanie zastosowany. Można przetestować kilka atrybutów. Można ustawić kilka atrybutów. Pomyśl o tym jak o "Jeśli to", wtedy ten system dla Open- Audit.</i></i></i></i>';

$GLOBALS["lang"]['Easily run a discovery upon a network in a single click, without entering the details of that network each and every time.'] = 'Łatwo uruchomić odkrycie na sieci za jednym kliknięciem, bez wprowadzania szczegółów tej sieci za każdym razem.';

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

$GLOBALS["lang"]['Enable Distributed COM on this computer - Option is checked'] = 'Włącz dystrybucję COM na tym komputerze - opcja jest sprawdzana';

$GLOBALS["lang"]['enabled'] = 'Włączone';

$GLOBALS["lang"]['Enabled'] = 'Włączone';

$GLOBALS["lang"]['Enabling the Feature Under Windows'] = 'Włączenie funkcji pod systemem Windows';

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

$GLOBALS["lang"]['Endpoint'] = 'Punkt końcowy';

$GLOBALS["lang"]['English'] = 'Angielski';

$GLOBALS["lang"]['Enhances regulatory compliance'] = 'Poprawa zgodności regulacyjnej';

$GLOBALS["lang"]['Enrichment is complete. The CVE has full metadata and is considered stable.'] = 'Wzbogacenie jest zakończone. CVE posiada pełne metadane i jest uważane za stabilne.';

$GLOBALS["lang"]['Ensure documentation is controlled and accessible'] = 'Zapewnienie kontroli i dostępności dokumentacji';

$GLOBALS["lang"]['enterprise'] = 'Przedsiębiorstwo';

$GLOBALS["lang"]['Enterprise'] = 'Przedsiębiorstwo';

$GLOBALS["lang"]['Enterprise Private Network'] = 'Europejska Sieć Prywatna';

$GLOBALS["lang"]['Enterprise private network'] = 'Sieć prywatna przedsiębiorstw';

$GLOBALS["lang"]['Entitlement Type'] = 'Rodzaj uprawnienia';

$GLOBALS["lang"]['Entra'] = 'Entra';

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

$GLOBALS["lang"]['Esperanto'] = 'Esperanto';

$GLOBALS["lang"]['Establish a project plan and timeline'] = 'Ustanowienie planu i harmonogramu projektu';

$GLOBALS["lang"]['Establish an information security policy'] = 'Ustanowienie polityki bezpieczeństwa informacji';

$GLOBALS["lang"]['Established'] = 'Ustanowione';

$GLOBALS["lang"]['Estonia'] = 'Estonia';

$GLOBALS["lang"]['Estonian'] = 'Estoński';

$GLOBALS["lang"]['Ethernet MAC'] = 'Ethernet MAC';

$GLOBALS["lang"]['ethernet_mac'] = 'Ethernet Mac';

$GLOBALS["lang"]['Ethernet Mac'] = 'Ethernet Mac';

$GLOBALS["lang"]['Ethiopia'] = 'Etiopia';

$GLOBALS["lang"]['Evaluate the ISMS internally'] = 'Ocena ISMS wewnętrznie';

$GLOBALS["lang"]['Every'] = 'Każdy';

$GLOBALS["lang"]['Every Day'] = 'Każdego dnia';

$GLOBALS["lang"]['Example'] = 'Przykład';

$GLOBALS["lang"]['Example Devices'] = 'Przykładowe urządzenia';

$GLOBALS["lang"]['Example Org Chart with Access'] = 'Przykład Wykres Org z dostępem';

$GLOBALS["lang"]['Example text from'] = 'Przykład tekstu z';

$GLOBALS["lang"]['Examples'] = 'Przykłady';

$GLOBALS["lang"]['Exceptions'] = 'Wyjątki';

$GLOBALS["lang"]['exclude'] = 'Wyłączenie';

$GLOBALS["lang"]['Exclude'] = 'Wyłączenie';

$GLOBALS["lang"]['exclude_ip'] = 'Z wyłączeniem IP';

$GLOBALS["lang"]['Exclude IP'] = 'Z wyłączeniem IP';

$GLOBALS["lang"]['Exclude IP Addresses'] = 'Z wyłączeniem adresów IP';

$GLOBALS["lang"]['Exclude IP Addresses (individual IP - 192.168.1.20, ranges - 192.168.1.30-40 or subnets - 192.168.1.100/30) listed from being scanned. Comma seperated, no spaces.'] = 'Z wyjątkiem adresów IP (indywidualne IP - 192.168.1.20, zakresy - 192.168.1.30- 40 lub podsieci - 192.168.1.100 / 30) wymienionych z skanowania. Przecinek seperacyjny, brak przestrzeni.';

$GLOBALS["lang"]['Exclude TCP Ports'] = 'Wyłączenie portów TCP';

$GLOBALS["lang"]['exclude_tcp_ports'] = 'Wyłączenie portów Tcp';

$GLOBALS["lang"]['Exclude Tcp Ports'] = 'Wyłączenie portów Tcp';

$GLOBALS["lang"]['Exclude UDP Ports'] = 'Wyłączenie portów UDP';

$GLOBALS["lang"]['exclude_udp_ports'] = 'Z wyłączeniem Portów Udp';

$GLOBALS["lang"]['Exclude Udp Ports'] = 'Z wyłączeniem Portów Udp';

$GLOBALS["lang"]['Exclude any ports listed from being scanned. Comma seperated, no spaces.'] = 'Wyłączcie wszystkie wymienione porty z skanowania. Przecinek seperacyjny, brak przestrzeni.';

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

$GLOBALS["lang"]['Exporting a Device'] = 'Eksportowanie urządzenia';

$GLOBALS["lang"]['expose'] = 'Ekspozycja';

$GLOBALS["lang"]['Expose'] = 'Ekspozycja';

$GLOBALS["lang"]['External'] = 'Zewnętrzne';

$GLOBALS["lang"]['External Field Name'] = 'Zewnętrzna nazwa pola';

$GLOBALS["lang"]['External Field Type'] = 'Typ pola zewnętrznego';

$GLOBALS["lang"]['External Field Types'] = 'Typy pól zewnętrznych';

$GLOBALS["lang"]['external_ident'] = 'Ident zewnętrzny';

$GLOBALS["lang"]['External Ident'] = 'Ident zewnętrzny';

$GLOBALS["lang"]['external_link'] = 'Związek zewnętrzny';

$GLOBALS["lang"]['External Link'] = 'Związek zewnętrzny';

$GLOBALS["lang"]['extra_columns'] = 'Dodatkowe kolumny';

$GLOBALS["lang"]['Extra Columns'] = 'Dodatkowe kolumny';

$GLOBALS["lang"]['Extra and Time based Reporting'] = 'Sprawozdawczość dodatkowa i okresowa';

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

$GLOBALS["lang"]['Fields attributes are'] = 'Atrybuty pól to:';

$GLOBALS["lang"]['Fiji the Fiji Islands'] = 'Fidżi Wyspy Fidżi';

$GLOBALS["lang"]['File'] = 'Plik';

$GLOBALS["lang"]['File Auditing'] = 'Audyt plików';

$GLOBALS["lang"]['File Import'] = 'Importuj plik';

$GLOBALS["lang"]['File Input'] = 'Wejście pliku';

$GLOBALS["lang"]['file_name'] = 'Nazwa pliku';

$GLOBALS["lang"]['File Name'] = 'Nazwa pliku';

$GLOBALS["lang"]['File Share Discovery'] = 'Udostępnianie plików Odkrywanie';

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

$GLOBALS["lang"]['Filtered Ports'] = 'Filtrowane porty';

$GLOBALS["lang"]['Finland'] = 'Finlandia';

$GLOBALS["lang"]['Finnish'] = 'Finlandia';

$GLOBALS["lang"]['Firewall'] = 'Firewall';

$GLOBALS["lang"]['Firewall Packages'] = 'Pakiety firewall';

$GLOBALS["lang"]['firewall_rule'] = 'Zasada firewalla';

$GLOBALS["lang"]['Firewall Rule'] = 'Zasada firewalla';

$GLOBALS["lang"]['firmware'] = 'Oprogramowanie';

$GLOBALS["lang"]['Firmware'] = 'Oprogramowanie';

$GLOBALS["lang"]['firmware_revision'] = 'Przegląd oprogramowania';

$GLOBALS["lang"]['Firmware Revision'] = 'Przegląd oprogramowania';

$GLOBALS["lang"]['First'] = 'Najpierw';

$GLOBALS["lang"]['First Name'] = 'Imię';

$GLOBALS["lang"]['first_run'] = 'Pierwszy bieg';

$GLOBALS["lang"]['First Run'] = 'Pierwszy bieg';

$GLOBALS["lang"]['first_seen'] = 'Pierwszy raz';

$GLOBALS["lang"]['First Seen'] = 'Pierwszy raz';

$GLOBALS["lang"]['First focus on what the end need is: are you trying to baseline software, users, or Netstat data? What is the important thing(s) to compare and report on?'] = 'Najpierw skupcie się na tym, co jest potrzebne: czy próbujecie uruchomić oprogramowanie bazowe, użytkowników czy dane Netstat? Jaka jest ważna (-e) rzecz (-e) do porównania i raportowania?';

$GLOBALS["lang"]['FirstWave'] = 'FirstWave';

$GLOBALS["lang"]['Fix'] = 'Napraw';

$GLOBALS["lang"]['Fixed'] = 'Naprawiono';

$GLOBALS["lang"]['Fixing the Issue'] = 'Ustawienie wydania';

$GLOBALS["lang"]['Floor'] = 'Podłoga';

$GLOBALS["lang"]['Follow any of the links below and discover how to use Open-AudIT to find out <b>Whats On Your Network?</b>'] = 'Podążaj za którymkolwiek z poniższych linków i dowiedz się, jak korzystać z Open-Audit, aby się dowiedzieć <b>Co jest w twojej sieci?</b>';

$GLOBALS["lang"]['For'] = 'Dla';

$GLOBALS["lang"]['For <i>Type</i> make sure to select Baseline, and for Group you should select a Group of devices, if applicable to this baseline, that best represent the devices to apply the baseline against. This will prevent erroneous entries.'] = 'Dla <i>Rodzaj</i> Upewnij się, aby wybrać linię bazową, a dla grupy należy wybrać grupę urządzeń, jeśli ma to zastosowanie do tej linii bazowej, które najlepiej reprezentują urządzenia do stosowania linii bazowej. To zapobiegnie błędnym zapisom.';

$GLOBALS["lang"]['For Debian/Ubuntu run, including setting dpkg to remember your override so an apt-get upgrade will not break'] = 'Dla Debiana / Ubuntu uruchomić, w tym ustawienie dpkg, aby pamiętać o nadpisie, więc apt- get upgrade nie złamie';

$GLOBALS["lang"]['For SNMP Open-AudIT can use v1, v2 and v3 credentials. The device is queried regardless of it being a router, switch (regular network devices) or a computer (Linux and Windows often run SNMP for monitoring tools).'] = 'Dla SNMP Open- Audit może używać v1, v2 i v3. Urządzenie jest sprawdzane niezależnie od tego, czy jest to router, przełącznik (regularne urządzenia sieciowe) lub komputer (Linux i Windows często uruchamiają SNMP do monitorowania narzędzi).';

$GLOBALS["lang"]['For a primer on cron, see this Wikipedia page'] = 'Na podkład na cron, zobacz tę stronę Wikipedia';

$GLOBALS["lang"]['For a seed discovery, should I only discover IPs in the private IP address space.'] = 'Dla odkrycia nasion, powinienem odkryć IP tylko w prywatnej przestrzeni adresowej IP.';

$GLOBALS["lang"]['For a seed discovery, should I only discover IPs on the chosen subnet.'] = 'Dla odkrycia nasion, powinienem odkryć tylko IP na wybranej podsieci.';

$GLOBALS["lang"]['For a seed discovery, should I ping the subnet before running the discovery.'] = 'Za odkrycie nasion, powinienem sprawdzić podsieć przed uruchomieniem odkrycia.';

$GLOBALS["lang"]['For advanced entry of a raw SQL query. As per Queries, you must include <code>WHERE @filter AND<code> in your SQL.'] = 'Dla zaawansowanego wpisu surowego zapytania SQL. Jak na pytanie, należy uwzględnić <code>WHERE @filter AND<code> in your SQL.</code></code>';

$GLOBALS["lang"]['For each spawned process, the below occurs.'] = 'Dla każdego procesu tarłowego, pojawia się poniżej.';

$GLOBALS["lang"]['For example - you might create a baseline from a device running Redhat 9 which acts as one of your Apache servers in a cluster. You know this particular server is configured just the way you want it but you are unsure if other servers in the cluster are configured exactly the same. Baselines enable you to determine this.'] = 'Na przykład - możesz utworzyć punkt odniesienia z urządzenia uruchamiającego Redhat 9, który działa jako jeden z serwerów Apache w klastrze. Wiesz, że ten konkretny serwer jest skonfigurowany tak, jak chcesz, ale nie masz pewności, czy inne serwery w klastrze są skonfigurowane dokładnie tak samo. Podstawy umożliwiają określenie tego.';

$GLOBALS["lang"]['For example - you might create a baseline from a device running Redhat 9 which acts as one of your Apache servers in a cluster. You know this particular server is configured just the way you want it but you are unsure if other servers in the cluster are configured exactly the same. Baselines enables you to determine this.'] = 'Na przykład - możesz utworzyć punkt odniesienia z urządzenia uruchamiającego Redhat 9, który działa jako jeden z serwerów Apache w klastrze. Wiesz, że ten konkretny serwer jest skonfigurowany tak, jak chcesz, ale nie masz pewności, czy inne serwery w klastrze są skonfigurowane dokładnie tak samo. Podstawy umożliwiają określenie tego.';

$GLOBALS["lang"]['For further details information, see the wiki.'] = 'Więcej informacji można znaleźć w wiki.';

$GLOBALS["lang"]['For licenses that are not perpetual, when does the license expire.'] = 'Dla licencji, które nie są wieczne, kiedy licencja wygasa.';

$GLOBALS["lang"]['For more detailed information, check the Open-AudIT Knowledge Base.'] = 'Aby uzyskać bardziej szczegółowe informacje, sprawdź bazę wiedzy Open- Audit.';

$GLOBALS["lang"]['For more information please see the following guide which includes a video. Use'] = 'Więcej informacji można znaleźć w poniższym przewodniku, który zawiera film wideo. Stosowanie';

$GLOBALS["lang"]['For more information, see'] = 'Więcej informacji na ten temat:';

$GLOBALS["lang"]['form_factor'] = 'Formularz czynnika';

$GLOBALS["lang"]['Form Factor'] = 'Formularz czynnika';

$GLOBALS["lang"]['format'] = 'Format';

$GLOBALS["lang"]['Format'] = 'Format';

$GLOBALS["lang"]['Forth'] = 'Forth';

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

$GLOBALS["lang"]['From that page'] = 'Z tej strony';

$GLOBALS["lang"]['full_name'] = 'Pełna nazwa';

$GLOBALS["lang"]['Full Name'] = 'Pełna nazwa';

$GLOBALS["lang"]['Full cloud auditing with all the details from a regular Open-AudIT audit AND details such as the machine type and size.'] = 'Pełna kontrola w chmurze ze wszystkimi szczegółami z regularnego audytu Open- Audit oraz szczegóły, takie jak typ maszyny i rozmiar.';

$GLOBALS["lang"]['function'] = 'Funkcja';

$GLOBALS["lang"]['Function'] = 'Funkcja';

$GLOBALS["lang"]['GROUP BY'] = 'GRUPA';

$GLOBALS["lang"]['Gabon'] = 'Gabon';

$GLOBALS["lang"]['Galician'] = 'Galicyjczyk';

$GLOBALS["lang"]['Gambia the'] = 'Gambia';

$GLOBALS["lang"]['Gap Analysis (optional)'] = 'Analiza luk (nieobowiązkowo)';

$GLOBALS["lang"]['gateway'] = 'Brama';

$GLOBALS["lang"]['Gateway'] = 'Brama';

$GLOBALS["lang"]['gateways'] = 'Bramki';

$GLOBALS["lang"]['Gateways'] = 'Bramki';

$GLOBALS["lang"]['Generated By'] = 'Generowane przez';

$GLOBALS["lang"]['geo'] = 'Geo';

$GLOBALS["lang"]['Geo'] = 'Geo';

$GLOBALS["lang"]['Geographical Maps'] = 'Mapy geograficzne';

$GLOBALS["lang"]['Georgia'] = 'Gruzja';

$GLOBALS["lang"]['German'] = 'Niemiecki';

$GLOBALS["lang"]['Germany'] = 'Niemcy';

$GLOBALS["lang"]['Get Lat/Long'] = 'Get Lat / Long';

$GLOBALS["lang"]['Get News'] = 'Pobierz wiadomości';

$GLOBALS["lang"]['Get Started'] = 'Zacznij';

$GLOBALS["lang"]['Get a Free License'] = 'Zdobądź darmową licencję';

$GLOBALS["lang"]['Get familiar with the Open-AudIT platform and explore some of its features.'] = 'Poznaj platformę Open- Audit i poznaj niektóre z jej funkcji.';

$GLOBALS["lang"]['Getting Started'] = 'Rozpoczęcie';

$GLOBALS["lang"]['Ghana'] = 'Ghana';

$GLOBALS["lang"]['Gibraltar'] = 'Gibraltar';

$GLOBALS["lang"]['Github'] = 'Github';

$GLOBALS["lang"]['Global Discovery Options'] = 'Opcje wyszukiwania globalnego';

$GLOBALS["lang"]['Global area network'] = 'Globalna sieć obszarów';

$GLOBALS["lang"]['Go'] = 'Idź.';

$GLOBALS["lang"]['Go back to your Open-AudIT server and create a discovery with the target Windows computers IP Address as the subnet (this will save having to discover the entire subnet again). Run the discovery, taking note of any issues. For any issues found, take appropriate actions.'] = 'Wróć do swojego serwera Open- Audit i stwórz odkrycie z docelowym adresem IP komputerów Windows jako podsieci (zaoszczędzi to na ponownym odkryciu całej podsieci). Uruchom odkrycie, biorąc pod uwagę wszelkie problemy. W przypadku wszelkich stwierdzonych problemów należy podjąć odpowiednie działania.';

$GLOBALS["lang"]['Go the target Windows PC (or use RDP) and log on as the user used by your discovery credential set.'] = 'Przejdź do docelowego komputera Windows (lub użyj PROW) i zaloguj się jako użytkownik używany przez Twój zestaw do wyszukiwania.';

$GLOBALS["lang"]['Go to menu'] = 'Przejdź do menu';

$GLOBALS["lang"]['Go to the <i>Applications</i> -> <i>App registrations</i> menu item on the far left. Search for Open-AudIT. Click the Open-AudIT entry in the list (assuming you named the app Open-AudIT).'] = 'Idź do <i>Wnioski</i> - > <i>Rejestracja aplikacji</i> pozycja menu po lewej stronie. Szukaj Open- Audit. Kliknij pozycję Open- Audit na liście (zakładając, że nazwałeś aplikację Open- Audit).';

$GLOBALS["lang"]['Go to the <i>Certificates and secrets</i> menu item under <i>Manage</i> in the center menu.'] = 'Idź do <i>Świadectwa i tajemnice</i> pozycja menu pod <i>Zarządzanie</i> w menu centrum.';

$GLOBALS["lang"]['Go to the <i>Single sign-on</i> menu item and click SAML for <i>Select a single sign-on method</i>.'] = 'Idź do <i>Pojedyncze oznakowanie</i> element menu i kliknij SAML dla <i>Wybierz jedną metodę sygnalizacji</i>.';

$GLOBALS["lang"]['Google Compute Fields'] = 'Google Compute Fields';

$GLOBALS["lang"]['Google JSON Credentials'] = 'Google JSON Należności';

$GLOBALS["lang"]['Google Maps API Key'] = 'API Map Google Klucz';

$GLOBALS["lang"]['Great, then you can help! Send FirstWave the text shown in the GUI and what should be shown. We will include that in the language file so going forward, the translation is improved and you do not need to worry about updating it for every release!'] = 'Świetnie, więc możesz pomóc! Wyślij pierwszy Pomachaj tekstem pokazanym w GUI i tym, co należy pokazać. Wpiszemy to do pliku językowego, więc do przodu, tłumaczenie jest ulepszone i nie trzeba martwić się o aktualizację go dla każdego wydania!';

$GLOBALS["lang"]['Greater Than'] = 'Większy niż';

$GLOBALS["lang"]['Greater Than or Equals'] = 'Większe niż lub równe';

$GLOBALS["lang"]['Greece'] = 'Grecja';

$GLOBALS["lang"]['Greek'] = 'Grecki';

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

$GLOBALS["lang"]['Groups are used as simple lists of devices that match the required conditions. If requested using JSON they return a list of <i>devices.id</i> only. If requested using the web interface, they return the standard column attribute list. Groups can be used for Integrations, Baselines and other items.'] = 'Grupy są używane jako proste listy urządzeń, które odpowiadają wymaganym warunkom. Na życzenie JSON zwracają listę <i>devices.id</i> Tylko. Na żądanie przy użyciu interfejsu WWW zwracają listę atrybutów standardowej kolumny. Grupy mogą być wykorzystywane do integracji, linii bazowych i innych pozycji.';

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

$GLOBALS["lang"]['Hardware'] = 'Sprzęt';

$GLOBALS["lang"]['hardware_revision'] = 'Przegląd sprzętu';

$GLOBALS["lang"]['Hardware Revision'] = 'Przegląd sprzętu';

$GLOBALS["lang"]['Has this policy been applied in this organization.'] = 'Czy ta polityka została zastosowana w tej organizacji.';

$GLOBALS["lang"]['hash'] = 'Hash';

$GLOBALS["lang"]['Hash'] = 'Hash';

$GLOBALS["lang"]['Have the agent always run the latest audit script (if you upgrade Open-AudIT and manually copy the scripts to the targets, then set cron - you will need to update these scripts for each upgrade).'] = 'Czy agent zawsze uruchomić najnowszy skrypt audytu (jeśli uaktualnić Open- Audit i ręcznie skopiować skrypty do celów, a następnie ustawić cron - trzeba będzie zaktualizować te skrypty dla każdej aktualizacji).';

$GLOBALS["lang"]['Have your user open a command prompt (using <i>Run as Administrator</i>). Paste the below into the prompt to download the Agent.'] = 'Niech użytkownik otworzy polecenie (za pomocą <i>Uruchom jako administrator</i>). Wklej poniższy przycisk w celu pobrania agenta.';

$GLOBALS["lang"]['Head'] = 'Głowa';

$GLOBALS["lang"]['Heard Island and McDonald Islands'] = 'Wyspy Heard i McDonald';

$GLOBALS["lang"]['Hebrew'] = 'Hebrajski';

$GLOBALS["lang"]['height'] = 'Wysokość';

$GLOBALS["lang"]['Height'] = 'Wysokość';

$GLOBALS["lang"]['Height in RU'] = 'Wysokość w RU';

$GLOBALS["lang"]['Help'] = 'Pomoc';

$GLOBALS["lang"]['Help and Frequently Asked Questions'] = 'Pomoc i często zadawane pytania';

$GLOBALS["lang"]['Helps manage and mitigate information security risks'] = 'Pomaga w zarządzaniu ryzykiem związanym z bezpieczeństwem informacji i łagodzeniu tych zagrożeń';

$GLOBALS["lang"]['Hide Audit Window'] = 'Ukryj okno audytu';

$GLOBALS["lang"]['high'] = 'Wysoki';

$GLOBALS["lang"]['High'] = 'Wysoki';

$GLOBALS["lang"]['High Availability'] = 'Wysoka dostępność';

$GLOBALS["lang"]['Hindi'] = 'Hindi';

$GLOBALS["lang"]['Holy See (Vatican City State)'] = 'Stolica Apostolska (Państwo Watykańskie)';

$GLOBALS["lang"]['Home'] = 'Spis treści';

$GLOBALS["lang"]['home'] = 'Spis treści';

$GLOBALS["lang"]['Home Area Network'] = 'Sieć obszaru macierzystego';

$GLOBALS["lang"]['Home area network'] = 'Sieć obszaru macierzystego';

$GLOBALS["lang"]['Honduras'] = 'Honduras';

$GLOBALS["lang"]['Hong Kong'] = 'Hongkong';

$GLOBALS["lang"]['host'] = 'Host';

$GLOBALS["lang"]['Host'] = 'Host';

$GLOBALS["lang"]['hostname'] = 'Nazwa komputera';

$GLOBALS["lang"]['Hostname'] = 'Nazwa komputera';

$GLOBALS["lang"]['hour'] = 'Godzina';

$GLOBALS["lang"]['Hour'] = 'Godzina';

$GLOBALS["lang"]['How Does It Work?'] = 'Jak to działa?';

$GLOBALS["lang"]['How Does it Work?'] = 'Jak to działa?';

$GLOBALS["lang"]['How Long Does it Take'] = 'Jak długo to trwa';

$GLOBALS["lang"]['How and Why is'] = 'Jak i dlaczego';

$GLOBALS["lang"]['How and Why is Open-AudIT More Secure'] = 'Jak i dlaczego Open- Audit jest bardziej bezpieczne';

$GLOBALS["lang"]['How do they work?'] = 'Jak działają?';

$GLOBALS["lang"]['How does a Device Seed Discovery find known IPs?'] = 'Jak urządzenie Seed Discovery znajduje znane IP?';

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

$GLOBALS["lang"]['Hungarian'] = 'Węgierski';

$GLOBALS["lang"]['Hungary'] = 'Węgry';

$GLOBALS["lang"]['hw_cpe'] = 'Hw Cpe';

$GLOBALS["lang"]['Hw Cpe'] = 'Hw Cpe';

$GLOBALS["lang"]['hyperthreading'] = 'Hyperthreading';

$GLOBALS["lang"]['Hyperthreading'] = 'Hyperthreading';

$GLOBALS["lang"]['I have read the EULA.'] = 'Czytałem EULA.';

$GLOBALS["lang"]['I hope this post has alleviated any concerns you have about Open-AudIT and Security. If you have any questions at all, please do not hesitate to reach out to us here at FirstWave. We are always happy to discuss your concerns and needs. And maybe if your question is not something I have addressed here, I can add it here for future users'] = 'Mam nadzieję, że ten post złagodził wszelkie obawy dotyczące Open- Audit i bezpieczeństwa. Jeśli masz jakieś pytania, nie wahaj się dotrzeć do nas tutaj w FirstWave. Zawsze chętnie omówimy wasze obawy i potrzeby. I może jeśli twoje pytanie nie jest czymś, o czym tutaj mówiłem, mogę dodać je tutaj dla przyszłych użytkowników';

$GLOBALS["lang"]['id'] = 'ID';

$GLOBALS["lang"]['ID'] = 'ID';

$GLOBALS["lang"]['IF'] = 'IF';

$GLOBALS["lang"]['IMPORTANT'] = 'WAŻNE';

$GLOBALS["lang"]['INPUTS'] = 'DOKUMENTY';

$GLOBALS["lang"]['IOS Version'] = 'Wersja IOS';

$GLOBALS["lang"]['IP'] = 'IP';

$GLOBALS["lang"]['ip'] = 'IP';

$GLOBALS["lang"]['IP Address'] = 'Adres IP';

$GLOBALS["lang"]['IP Addresses'] = 'Adresy IP';

$GLOBALS["lang"]['IP Last Seen'] = 'IP Ostatnio widziany';

$GLOBALS["lang"]['IP Set By'] = 'Ustawienie IP';

$GLOBALS["lang"]['ISMS'] = 'ISMS';

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

$GLOBALS["lang"]['Identify information assets'] = 'Identyfikacja aktywów';

$GLOBALS["lang"]['Identify interested parties and their requirements'] = 'Określenie zainteresowanych stron i ich wymogów';

$GLOBALS["lang"]['Identify key stakeholders and assign roles'] = 'Określenie kluczowych zainteresowanych stron i przydzielenie ról';

$GLOBALS["lang"]['Identify the device(s) that are your exemplary, or <i>gold image</i> you want to compare similar devices against.'] = 'Identyfikacja urządzenia (urządzeń), które są wzorcowe, lub <i>złoty obraz</i> chcesz porównać podobne urządzenia przeciwko.';

$GLOBALS["lang"]['Identifying and evaluating security risks'] = 'Identyfikacja i ocena ryzyka dla bezpieczeństwa';

$GLOBALS["lang"]['If'] = 'Jeśli';

$GLOBALS["lang"]['If a device is individually discovered using the <i>Discover Device</i> link on the device details page, we first check if this device has been discovered previously (by Discovery) and if so, use the discovery options from that scan. If it has not been previously discovered, we revert to the configuration item discovery_default_scan_option the settings.'] = 'Jeżeli urządzenie jest indywidualnie odkrywane za pomocą <i>Odkryj urządzenie</i> link na stronie szczegóły urządzenia, najpierw sprawdzamy, czy to urządzenie zostało odkryte wcześniej (przez Discovery), a jeśli tak, użyj opcji wyszukiwania z tego skanowania. Jeśli wcześniej nie został odkryty, wracamy do pozycji konfiguracyjnej discovery _ default _ scan _ option ustawień.';

$GLOBALS["lang"]['If a new Org is created, an LDAP group name is automatically derived from the name. For example, if a new Org is created and is named Test, the corresponding LDAP group will be named open-audit_orgs_test.'] = 'W przypadku utworzenia nowego Org, nazwa grupy LDAP jest automatycznie wywodząca się z nazwy. Na przykład, jeśli nowy Org zostanie stworzony i nazwany Test, odpowiednia grupa LDAP zostanie nazwana open- audit _ orgs _ test.';

$GLOBALS["lang"]['If a port responds with filtered, should we consider it available.'] = 'Jeśli port reaguje filtrowanym, powinniśmy uznać go za dostępny.';

$GLOBALS["lang"]['If a port responds with open|filtered, should we consider it available.'] = 'Jeśli port reaguje z otwartym 124; filtrowane, powinniśmy uznać go za dostępny.';

$GLOBALS["lang"]['If a remote device does not exist in the Open-AudIT selected devices, should we delete it from the external system.'] = 'Jeżeli zdalne urządzenie nie istnieje w wybranych urządzeniach Open- Audit, należy usunąć je z systemu zewnętrznego.';

$GLOBALS["lang"]['If an Open-AudIT device has been changed, should we update the external system.'] = 'Jeżeli urządzenie Open- Audit zostało zmienione, powinniśmy zaktualizować system zewnętrzny.';

$GLOBALS["lang"]['If an Open-AudIT device is not on the external system, should we create it.'] = 'Jeżeli w systemie zewnętrznym nie ma urządzenia Open- Audit, powinniśmy go utworzyć.';

$GLOBALS["lang"]['If an agent reports its primary IP is in this subnet, perform the actions.'] = 'Jeśli agent zgłasza swój pierwotny IP jest w tej podsieci, wykonać działania.';

$GLOBALS["lang"]['If any of these (comma seperated, no spaces) ports are detected, assume SSH is running on them and use them for auditing. No need to add this port to the Custom TCP ports - it will be added automatically.'] = 'W przypadku wykrycia któregokolwiek z tych portów (przecinek seperacyjny, brak spacji), należy założyć, że SSH działa na nich i używa ich do audytu. Nie ma potrzeby dodawania tego portu do własnych portów TCP - zostanie on automatycznie dodany.';

$GLOBALS["lang"]['If no operator is specified, the default is =. Properties should be fully qualified - ie, devices.hostname (not just hostname).'] = 'Jeśli nie podano operatora, domyślna wartość to =. Właściwości powinny być w pełni zakwalifikowane - tj. devices.hostname (nie tylko hostname).';

$GLOBALS["lang"]['If no value is present, supply this value. EG: for system.nmis_group / configuraion.group we use'] = 'Jeśli nie ma żadnej wartości, należy podać tę wartość. EG: dla system.nmis _ group / configuraion. grupa używamy';

$GLOBALS["lang"]['If set, holds a JSON array of specific device columns this user has chosen to see, other than the configuration default.'] = 'Jeśli jest ustawiony, posiada tablicę JSON poszczególnych kolumn urządzeń, które użytkownik wybrał do obejrzenia, inną niż domyślna konfiguracja.';

$GLOBALS["lang"]['If the OS Family (as reported by the device) contains this item, pass.</li>'] = 'Jeśli rodzina OS (podana przez urządzenie) zawiera ten element, należy przejść.';

$GLOBALS["lang"]['If the Open-AudIT Server has Collectors reporting to it, an additional drop down is provided. You can select this to specify which Collector the task should run on. Only Discovery tasks are supported for Collectors.'] = 'Jeżeli Open- Audit Server ma raportujące do niego kolektory, jest dostarczony dodatkowy spadek. Możesz wybrać to, aby określić, na którym Kolekcjoner zadanie powinno być uruchomione. Tylko zadania Discovery są obsługiwane dla Kolekcjonerów.';

$GLOBALS["lang"]['If the agent OS family (case insensitive) contains this string, perform the actions.'] = 'Jeśli rodzina agentów OS (nieczuły przypadek) zawiera ten łańcuch, należy wykonać działania.';

$GLOBALS["lang"]['If the binary is not found in either of these locations, a warning message will be displayed in the installer.'] = 'Jeśli w żadnej z tych lokalizacji nie zostanie znaleziona opcja binarna, w instalatorze zostanie wyświetlona wiadomość ostrzegawcza.';

$GLOBALS["lang"]['If the following conditions are met:<br><ul><li>a Role has an assigned ad_group</li><li>an Org has an assigned ad_group</li><li>an LDAP Server has use_roles set to y</li><li>a user exists in LDAP (be it Active Directory or OpenLDAP) and is in the assigned ad_groups</li></ul>That user can log on to Open-AudIT without an account in Open-AudIT needing to be created. Open-AudIT will query the LDAP in question and if the user is in the required groups but not in Open-AudIT, their user attributes (name, full name, email,  roles, orgs, etc) within Open-AudIT will be automatically populated and they will be logged on.<br> <br>'] = 'Jeżeli spełnione są następujące warunki:<br/><ul><li>a Role ma przypisaną grupę ad _ group</li><li>Org ma przypisaną grupę ad _ group</li><li>LDAP Serwer posiada ustawione na y _ roles</li><li>istnieje użytkownik w LDAP (Active Directory lub OpenLDAP) i jest w przydzielonych grupach ad _</li></ul>Użytkownik może zalogować się do Open- Audit bez konta w Open- Audit, które wymaga utworzenia. Open-Audit będzie pytać o LDAP i jeśli użytkownik jest w wymaganych grupach, ale nie w Open-Audit, ich atrybuty użytkownika (nazwa, pełne imię, email, role, orgs, itp) w Open-Audit będą automatycznie zaludnione i będą zalogowane.<br/> <br/>';

$GLOBALS["lang"]['If the local field is true (bool) or y (string) or Y (string) or 1 (integer) then set the external data to 1.'] = 'Jeśli pole lokalne jest prawdziwe (bool) lub y (string) lub Y (string) lub 1 (integer), wtedy ustaw dane zewnętrzne na 1.';

$GLOBALS["lang"]['If the local field is true (bool) or y (string) or Y (string) or 1 (integer) then set the external data to y.'] = 'Jeśli pole lokalne jest prawdziwe (bool) lub y (string) lub Y (string) lub 1 (integer), wtedy ustaw dane zewnętrzne na y.';

$GLOBALS["lang"]['If the primary IP (as reported by the device) is in this subnet, pass.</li>'] = 'Jeżeli pierwotny IP (podany przez urządzenie) znajduje się w tej podsieci, należy przejść.';

$GLOBALS["lang"]['If the user account does not actually exist within Open-AudIT and <code>use_authorisation</code> is set, the user will be created. If it does exist, details such as email, full name, etc will be populated.'] = 'Jeśli konto użytkownika nie istnieje w Open- Audit i <code>use_authorisation</code> jest ustawiony, użytkownik zostanie utworzony. Jeśli istnieje, szczegóły takie jak e-mail, pełna nazwa, itp będą zaludnione.';

$GLOBALS["lang"]['If the user either does not have valid credentials or is not in at least one Open-AudIT Role and Group (when using <code>use_authorisation</code>), Open-AudIT will fallback to using local Open-AudIT user details and attempt authentication and authorization there. Failing that, the user will be denied access.'] = 'Jeśli użytkownik nie posiada ważnych uprawnień lub nie znajduje się w co najmniej jednym Open- Audit Role and Group (przy użyciu <code>use_authorisation</code>), Open- Audit będzie korzystać z lokalnych danych użytkownika Open- Audit oraz spróbować uwierzytelniania i autoryzacji tam. W przeciwnym razie użytkownik nie będzie miał dostępu.';

$GLOBALS["lang"]['If the user logging on to Open-AudIT does not have the access to search LDAP, you can use another account which does have this access.'] = 'Jeśli użytkownik loguje się do Open- Audit nie ma dostępu do wyszukiwania LDAP, możesz użyć innego konta, które ma ten dostęp.';

$GLOBALS["lang"]['If the user logging on to Open-AudIT does not have the access to search OpenLDAP, you can use another account which does have this access. Use the dn_account and dn_password to configure this.'] = 'Jeśli użytkownik loguje się do Open-Audit nie ma dostępu do wyszukiwania OpenLDAP, możesz użyć innego konta, które ma ten dostęp. Użyj dn _ account i dn _ haslo, aby to skonfigurować.';

$GLOBALS["lang"]['If the value is not set, the current timestamp will be used.'] = 'Jeśli wartość nie jest ustawiona, zostanie użyty bieżący znacznik czasu.';

$GLOBALS["lang"]['If the value is set, that timestamp value will be used.'] = 'Jeśli wartość jest ustawiona, zostanie zastosowana ta wartość znacznika czasu.';

$GLOBALS["lang"]['If this change does not work for you, all is not lost. We have added a configuration item (set to n by default, so it will use not this new option out of the box) called discovery_use_org_id_match. If you change it to y then the OrgID assigned to the device by the discovery will be used in the relevant match rules.'] = 'Jeśli ta zmiana nie zadziała, wszystko nie jest stracone. Dodaliśmy element konfiguracyjny (domyślnie ustawiony na n, więc nie będzie on używał tej nowej opcji z pola) o nazwie Discovery _ use _ org _ id _ match. Jeśli zmienisz go na y, to Orgid przypisany do urządzenia przez odkrycie zostanie użyty w odpowiednich zasadach dopasowania.';

$GLOBALS["lang"]['If this many minutes (or more) have passed since the server last saw the device, pass.</li>'] = 'Jeśli tyle minut (lub więcej) minęło od czasu, gdy serwer ostatni raz widział urządzenie, podaj.';

$GLOBALS["lang"]['If this many or more minutes have passed since the device contacted the server, perform the actions.'] = 'Jeśli minęło tyle lub więcej minut od kontaktu urządzenia z serwerem, wykonaj działania.';

$GLOBALS["lang"]['If this occurs then the issue you are seeing is related to the table control being used on the webpage. It only stores in memory the state of the check boxes for the current page being viewed. If you make selections, then page forward/back those selections will be lost. You can, however, accomplish what you want by expanding the number of devices shown on each page. In the top-left corner is a drop-down labeled “records per page”; use this to expand the number of entries displayed until you see all you want to select for Bulk Edit.'] = 'Jeśli tak się stanie, to problem, który widzisz jest związany z kontrolą tabeli używanej na stronie internetowej. To tylko przechowuje w pamięci stan pól kontrolnych dla bieżącej strony oglądanej. Jeśli dokonasz wyboru, strona do przodu / do tyłu będzie stracona. Można jednak osiągnąć to, co chcesz, rozszerzając liczbę urządzeń wyświetlanych na każdej stronie. W lewym górnym rogu znajduje się kroplomierzem oznaczonym "rekordy na stronę"; użyj tego do rozszerzenia liczby wyświetlanych wpisów, aż zobaczysz wszystko, co chcesz wybrać dla edycji luzem.';

$GLOBALS["lang"]['If we detect the san management software, should we run an auto-discover before the query.'] = 'Jeśli wykryjemy oprogramowanie do zarządzania San, powinniśmy uruchomić auto- odkryć przed zapytaniem.';

$GLOBALS["lang"]['If you add a Location Type, add those icons to'] = 'Jeśli dodasz typ lokalizacji, dodaj te ikony do';

$GLOBALS["lang"]['If you add a device type, to display the associated icon you will have to manually copy the .svg formatted file to the directory'] = 'Jeśli dodasz typ urządzenia, aby wyświetlić odpowiednią ikonę, będziesz musiał ręcznie skopiować sformatowany plik .svg do katalogu';

$GLOBALS["lang"]['If you are a supported FirstWave customer,a couple of items will make helping your easier. Open a support ticket with FirstWave and attach the logfile. Also include the output from the Support button on the upper right of the'] = 'Jeśli jesteś obsługiwanym klientem FirstWave, kilka elementów ułatwi Ci pomoc. Otwórz bilet wsparcia za pomocą FirstWave i załącz plik logowania. Również zawierać wyjście z przycisku Wsparcie w prawym górnym rogu';

$GLOBALS["lang"]['If you are a supported customer and open a support ticket with FirstWave, please attach these files.'] = 'Jeśli jesteś obsługiwanym klientem i otworzysz bilet z FirstWave, załącz te pliki.';

$GLOBALS["lang"]['If you are having issues with Google Maps API keys or your company does not have access to create Google Maps API keys, please contact the FirstWave support team.'] = 'Jeśli masz problemy z kluczami API Map Google lub Twoja firma nie ma dostępu do tworzenia kluczy API Map Google, skontaktuj się z zespołem wsparcia FirstWave.';

$GLOBALS["lang"]['If you are on Windows or your NMIS server is remote, you will need to supply the URL, username and password to access that server.'] = 'Jeśli jesteś w systemie Windows lub serwer NMIS jest zdalny, będziesz musiał dostarczyć adres URL, nazwę użytkownika i hasło, aby uzyskać dostęp do tego serwera.';

$GLOBALS["lang"]['If you are on a decent broadband or ethernet connection, I would recommend always using -T4 (Aggressive). Some people love -T5 (Insane) though it is too aggressive for my taste. People sometimes specify -T2 (Polite) because they think it is less likely to crash hosts or because they consider themselves to be polite in general. They often do not realize just how slow -T2 really is. Their scan may take ten times longer than a default scan. Machine crashes and bandwidth problems are rare with the default timing options -T3 (Normal) and so I normally recommend that for cautious scanners. Omitting version detection is far more effective than playing with timing values at reducing these problems.'] = 'Jeśli jesteś na przyzwoitym szerokopasmowym lub ethernet połączenia, Polecam zawsze przy użyciu -T4 (Aggressive). Niektórzy ludzie kochają -T5 (Obłąkany) chociaż jest zbyt agresywny jak na mój gust. Ludzie czasami określają -T2 (Polite), ponieważ myślą, że mniej prawdopodobne jest rozbicie gospodarzy lub dlatego, że uważają się za uprzejmych w ogóle. Często nie zdają sobie sprawy, jak powolne jest -T2. Ich skan może trwać dziesięć razy dłużej niż domyślny. Wypadki maszynowe i problemy z przepustowością są rzadkie z domyślnymi opcjami czasu -T3 (Normal) i dlatego normalnie zalecam, że dla ostrożnych skanerów. Pomijanie wykrywania wersji jest znacznie skuteczniejsze niż granie z wartościami czasowymi w zmniejszaniu tych problemów.';

$GLOBALS["lang"]['If you are running a RedHat or Centos system and you have upgraded Nmap, please reset the SUID on the binary by'] = 'Jeśli uruchomiłeś system RedHat lub Centos i uaktualniłeś Nmap, proszę zresetować SUID w systemie binarnym przez';

$GLOBALS["lang"]['If you are running an Open-AudIT server on Linux, this does not affect you.'] = 'Jeśli uruchomisz serwer Open- Audit na Linuksie, nie wpłynie to na Ciebie.';

$GLOBALS["lang"]['If you are using Open-AudIT on Windows or if your NMIS server is not on your Open-AudIT Server (in the case of some Linux installs), you will need to supply access credentials and a URL to the remote NMIS - but that is all! Yes - Integrations between NMIS and Open-AudIT even work with Windows based Open-AudIT now!'] = 'Jeśli używasz Open- Audit w systemie Windows lub jeśli serwer NMIS nie jest na Twoim serwerze Open- Audit (w przypadku niektórych instalacji Linuksa), będziesz musiał dostarczyć dane dostępu i adres URL do zdalnego NMIS - ale to wszystko! Tak - Integracje między NMIS i Open-Audit nawet pracować z Windows oparte Open- Audit teraz!';

$GLOBALS["lang"]['If you choose a Collector, it will be scheduled to execute on the next 5 minute boundary.'] = 'Jeśli wybierzesz Kolekcjoner, będzie on wykonywany na następnej 5-minutowej granicy.';

$GLOBALS["lang"]['If you do normally set devices_assigned_to_org and the configuration item is enabled, then the OrgID will be used to further refine the match.'] = 'Jeśli normalnie ustawisz urządzenia _ przypisane _ to _ org i pozycja konfiguracyjna jest włączona, to Orgid zostanie użyty do dalszego dopracowania dopasowania.';

$GLOBALS["lang"]['If you do not normally set devices_assigned_to_org, then it will have no effect. We only check using the OrgID if it has been set in discovery (or manually in an audit script) and enabled in the configuration.'] = 'Jeśli normalnie nie ustawisz urządzeń _ przypisanych _ do _ org, nie będzie to miało żadnego skutku. Sprawdzamy przy użyciu Orgid tylko wtedy, gdy został ustawiony w rozpoznaniu (lub ręcznie w skrypcie audytu) i włączony w konfiguracji.';

$GLOBALS["lang"]['If you enable the configuration item, use discovery to assign an Org and then subsequently change the OrgID of a device after discovery then you will likely have a new device created the next time the discovery runs. In this instance, you should probably just unset devices_assigned_to_org before running subsequent discoveries. This is because (in this instance) you have told Open-AudIT <i>these devices from this discovery belong to Org X<i>, but then changed the Org of the device. You have changed the stored devices information. In this case - there is no no longer a device belonging to Org X, so we create a new one.'] = 'Jeśli włączysz element konfiguracyjny, użyj funkcji discovery do przypisania Org, a następnie zmień Orgid urządzenia po odkryciu, a następnie prawdopodobnie będziesz miał nowe urządzenie utworzone przy następnym uruchomieniu funkcji discovery. W tym przypadku, przed uruchomieniem kolejnych odkryć, powinieneś prawdopodobnie po prostu wyłączyć urządzenia _ cessioned _ to _ org. To dlatego, że (w tym przypadku) powiedział Open- Audit <i>Te urządzenia z tego odkrycia należą do Org X.<i>, ale potem zmienił Org urządzenia. Zmieniłeś informacje o przechowywanych urządzeniach. W tym przypadku - nie ma już urządzenia należącego do Org X, więc tworzymy nowy.</i></i>';

$GLOBALS["lang"]['If you have Anti-Virus software running, allowing the services of Opmantek (omkd), Apache (apache2.2) and MySQL (mysql) to auto start and run is essential. These services are used by Open-AudIT. You should only need to do this once. If your Anti-Virus program keeps prompting you about Open-AudIT, please post to the forums or send an email to support with the name and version of your Anti-Virus software.'] = 'Jeśli masz uruchomione oprogramowanie Anti- Virus, pozwalając usługi Opmantek (omkd), Apache (apache2.2) i MySQL (mysql) do automatycznego uruchamiania i uruchamiania jest niezbędne. Usługi te są wykorzystywane przez Open- Audit. Powinieneś to zrobić tylko raz. Jeśli Twój program Anti- Virus wciąż namawia Cię do Open- Audit, wyślij na forum lub wyślij e-mail, aby wesprzeć nazwę i wersję Twojego oprogramowania Anti- Virus.';

$GLOBALS["lang"]['If you have working credentials, you can expect the full amount of information possible.<br><br>Obviously, the best way to use Open-AudIT is to have working credentials for the devices being discovered (be they WMI, SSH, or SNMP credentials).<br><br>We also have a page on auditing without credentials.'] = 'Jeśli posiadasz referencje robocze, możesz oczekiwać pełnej ilości informacji.<br/><br/>Oczywiście najlepszym sposobem korzystania z Open- Audit jest posiadanie referencji roboczych dla odkrywanych urządzeń (np. WMI, SSH lub SNMP).<br/><br/>Mamy też stronę o audycie bez referencji.';

$GLOBALS["lang"]['If you include the \"id\" field <strong>and</strong> set it with a number, that item will be updated rather than created.'] = 'Jeśli włączysz pole\ "id\" <strong>oraz</strong> ustawić go na numer, ten element będzie uaktualniony zamiast utworzony.';

$GLOBALS["lang"]['If you need to configure Active Directory access, you can usually use the example of <code>cn=Users,dc=your,dc=domain,dc=com</code> for your <code>base_dn</code>. There is no need to set <code>user_dn</code>.'] = 'Jeśli musisz skonfigurować Active Directory access, zazwyczaj można użyć przykładu <code>cn=Users,dc=your,dc=domain,dc=com</code> dla <code>base_dn</code>. Nie ma potrzeby ustawiania <code>user_dn</code>.';

$GLOBALS["lang"]['If you need to configure OpenLDAP access for your users and a given users access DN is normally <code>uid=username@domain,cn=People,dc=your,dc=domain,dc=com</code> then you should set <code>base_dn</code> to <code>dc=your,dc=domain,dc=com</code> and <code>user_dn</code> to <code>uid=@username@@domain,cn=People</code>. The special words <code>@username</code> and <code>@domain</code> will be replaced by the login details provided by your user on the login page.'] = 'Jeśli musisz skonfigurować dostęp OpenLDAP dla użytkowników, a dany dostęp dla użytkowników jest zazwyczaj DN <code>uid=username@domain,cn=People,dc=your,dc=domain,dc=com</code> to powinieneś ustawić <code>base_dn</code> do <code>dc=your,dc=domain,dc=com</code> oraz <code>user_dn</code> do <code>uid=@username@@domain,cn=People</code>. Specjalne słowa <code>@username</code> oraz <code>@domain</code> zostaną zastąpione przez dane logowania podane przez użytkownika na stronie logowania.';

$GLOBALS["lang"]['If you run discovery upon a subnet that the Server (or Collector) is directly installed on, you can expect the following for responding devices'] = 'Jeśli uruchomisz na podsieci, że Serwer (lub Kolekcjoner) jest bezpośrednio zainstalowany, możesz spodziewać się następujących urządzeń';

$GLOBALS["lang"]['If you run discovery upon a subnet that your Server (or Collector) is not directly installed on, you can expect the following for responding devices'] = 'Jeśli uruchomisz na podsieci, że Twój Serwer (lub Kolekcjoner) nie jest bezpośrednio zainstalowany, możesz oczekiwać, że dla urządzeń reagujących';

$GLOBALS["lang"]['If you select a List type, an additional field will appear called Values. You should put a comma separated list of selectable values here. These will display in a dropdown box whenever the field is edited.'] = 'Jeśli wybierzesz typ listy, pojawi się dodatkowe pole o nazwie Wartości. Należy umieścić tutaj oddzielną przecinek listę wybranych wartości. Będą one wyświetlane w rozwijanym polu za każdym razem, gdy pole zostanie edytowane.';

$GLOBALS["lang"]['If you set the values for'] = 'Jeśli ustawisz wartości dla';

$GLOBALS["lang"]['If you want to force your Agents to use a particular configuration, you can supply the ID of the agents entry to use, as below (replace $id with the number of the Agents entry). When this Agent is installed, it will check-in with the sevrer and <strong>only</strong> check that one individual Agent entrys attributes (tests and actions). This may be useful if you are an MSP - create an Agents entry for a particular customer and have their devices all use this entry, which assigns them to an Org and Location.'] = 'Jeśli chcesz zmusić swoich agentów do korzystania z określonej konfiguracji, możesz dostarczyć ID wejścia agentów do użycia, jak poniżej (zastąpić $id numerem wpisu agentów). Kiedy ten Agent jest zainstalowany, zamelduje się z searrer i <strong>Tylko</strong> Sprawdź, czy jedna osoba Agent wprowadza atrybuty (testy i działania). Może to być przydatne, jeśli jesteś MSP - utworzyć wpis agentów dla konkretnego klienta i mieć ich urządzenia wszystkie korzystać z tego wpisu, który przypisuje je do Org i Lokalizacja.';

$GLOBALS["lang"]['If you wish to dig in and customize the Integration, click the Advanced button (and try not to be overwhelmed!).'] = 'Jeśli chcesz kopać i dostosować integrację, kliknij przycisk Zaawansowany (i spróbuj nie być przytłoczony!).';

$GLOBALS["lang"]['If you wish to run a Discovery on an externally provided device, select the option and when the Integration is created, so s the Discovery.'] = 'Jeśli chcesz uruchomić Discovery na urządzeniu zewnętrznym, wybierz opcję i kiedy zostanie utworzona Integracja, więc jest Discovery.';

$GLOBALS["lang"]['If you would like to use the script outside of Discovery we have created another endpoint called <i>scripts</i>. See the documentation'] = 'Jeśli chcesz użyć skryptu poza Discovery stworzyliśmy inny punkt końcowy o nazwie <i>skrypty</i>. Zob. dokumentacja';

$GLOBALS["lang"]['If your user does not have <i>Run as Administrator</i> rights, they can still download the agent (first command above) and run it to submit an audit as below. It will be a one-off audit without the Agent being installed or scheduled.'] = 'Jeśli Twój użytkownik nie ma <i>Uruchom jako administrator</i> prawa, nadal mogą pobrać agenta (pierwsze polecenie powyżej) i uruchomić go do przedłożenia audytu jak poniżej. Będzie to kontrola jednorazowa bez zainstalowania lub zaplanowania agenta.';

$GLOBALS["lang"]['ifadminstatus'] = 'Status Ifadmingu';

$GLOBALS["lang"]['Ifadminstatus'] = 'Status Ifadmingu';

$GLOBALS["lang"]['iflastchange'] = 'Iflastchange';

$GLOBALS["lang"]['Iflastchange'] = 'Iflastchange';

$GLOBALS["lang"]['Ignore Invalid SSL'] = 'Ignoruj nieprawidłowy SSL';

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

$GLOBALS["lang"]['Implement selected controls and procedures'] = 'Wdrożenie wybranych kontroli i procedur';

$GLOBALS["lang"]['Implementation'] = 'Wykonanie';

$GLOBALS["lang"]['implementation_notes'] = 'Uwagi wykonawcze';

$GLOBALS["lang"]['Implementation Notes'] = 'Uwagi wykonawcze';

$GLOBALS["lang"]['Import'] = 'Import';

$GLOBALS["lang"]['Import Example Data'] = 'Importuj przykładowe dane';

$GLOBALS["lang"]['Import multiple {collection} using a CSV.'] = 'Importuj wielokrotne {kolekcja} za pomocą CSV.';

$GLOBALS["lang"]['improvement_opportunities'] = 'Możliwości poprawy';

$GLOBALS["lang"]['Improvement Opportunities'] = 'Możliwości poprawy';

$GLOBALS["lang"]['Improves business continuity and resilience'] = 'Poprawia ciągłość i odporność działalności';

$GLOBALS["lang"]['In'] = 'W';

$GLOBALS["lang"]['In a second tab or window go to your OKTA console and click <i>Create App Integration</i>.'] = 'W drugiej karcie lub oknie przejdź do konsoli OKTA i kliknij <i>Tworzenie integracji aplikacji</i>.';

$GLOBALS["lang"]['In a second tab or window sign-on to your'] = 'W drugiej zakładce lub oknie signing- on';

$GLOBALS["lang"]['In my personal opinion, the best way to find and audit every single item on your network is a Seed Discovery for each subnet, restricted to that subnet (using credentials). Seed Discoveries use switch, router and computer MAC Address tables to not miss a single device. If it is connected to the network and uses TCP/IP, a switch/router/computer has to know it is there - thats just how TCP/IP works. Combine that with custom TCP and/or UDP ports and you should then be able to determine the device type as well. But thats just my personal preference'] = 'Moim osobistym zdaniem, najlepszym sposobem na znalezienie i audyt każdej pozycji w sieci jest odkrycie nasion dla każdej podsieci, ograniczone do tej podsieci (z wykorzystaniem referencji). Seed Discoveries używa przełącznika, routera i komputera tablic adresowych MAC, aby nie przegapić jednego urządzenia. Jeśli jest podłączony do sieci i używa TCP / IP, przełącznik / router / komputer musi wiedzieć, że tam jest - tak właśnie działa TCP / IP. Połącz to z własnymi portami TCP i / lub UDP, a następnie powinieneś być w stanie określić typ urządzenia. Ale to tylko moje osobiste preferencje.';

$GLOBALS["lang"]['In order for Open-AudIT to be able to apply user permissions on items, we mandate the user of <code>WHERE @filter</code>. If you do not use this format, the queryCreateForm will throw a warning. Only users with the Admin role are permitted to create queries that lack this attribute and even then, only after the configuration item for <i>advanced_queries</i> has been enabled.'] = 'Aby Open- Audit mógł stosować uprawnienia użytkownika do elementów, zlecamy użytkownikowi <code>WHERE @filter</code>. Jeśli nie używasz tego formatu, QueryCreateForm rzuci ostrzeżenie. Tylko użytkownicy z roli Admin mogą tworzyć zapytania, które brakuje tego atrybutu, a nawet wtedy, tylko po pozycji konfiguracyjnej dla <i>zaawansowane _ zapytania</i> został włączony.';

$GLOBALS["lang"]['In order to enable Google Maps you will need to a Google API Key follow this link and log in with your Google account,'] = 'Aby włączyć Mapy Google, trzeba będzie Google API Key śledzić ten link i zalogować się ze swoim Konto Google,';

$GLOBALS["lang"]['In order to use the Azure Rest API, you will need to create an Azure Active Directory Application that is used for authentication.'] = 'Aby korzystać z API Azure Rest Rest, musisz utworzyć aplikację Azure Active Directory, która jest używana do uwierzytelniania.';

$GLOBALS["lang"]['In order to use this functionality, it must be enabled in the configuration - click'] = 'Aby korzystać z tej funkcjonalności, musi być włączona w konfiguracji - kliknij';

$GLOBALS["lang"]['In the (comma seperated) list'] = 'Na liście (przecinek seperated)';

$GLOBALS["lang"]['In the case of <code>in</code> and <code>notin</code>, you should enclose the values in round brackets and separate them using a comma (just a comma, not a comma, then space).<br><br>With these operators you can filter quite comprehensively.<br><br>When you add data and filter on multiple columns, those columns are combined using <strong>AND</strong>. You cannot filter using an <strong>OR</strong> condition. With the inclusion of <code>notin</code>, you should be able to get most searches working. And for those that do really require unsupported and complex selections, you can always write an actual query.'] = 'W przypadku <code>in</code> oraz <code>notin</code>, należy dołączyć wartości w nawiasach okrągłych i oddzielić je za pomocą przecinka (tylko przecinek, nie przecinek, a następnie przestrzeń).<br/><br/>Dzięki tym operatorom można filtrować dość kompleksowo.<br/><br/>Po dodaniu danych i filtrowaniu na wielu kolumnach, kolumny te są łączone za pomocą <strong>ORAZ</strong>. Nie można filtrować za pomocą <strong>LUB</strong> stan. Z uwzględnieniem <code>notin</code>, powinieneś być w stanie uzyskać większość wyszukiwania działa. A dla tych, którzy naprawdę wymagają nieobsługiwanych i złożonych selekcji, zawsze można napisać prawdziwe zapytanie.';

$GLOBALS["lang"]['In the case where we store several fields (usually in JSON format) inside a BIGTEXT MySQL field (eg: credentials.credentials - the credentials column in the credentials table), you should use the format'] = 'W przypadku przechowywania kilku pól (zazwyczaj w formacie JSON) wewnątrz pola BIGTEXT MySQL (np. referencje. referencje - kolumna referencji w tabeli referencji), należy użyć formatu';

$GLOBALS["lang"]['In the command prompt shell, navigate to the download directory (likely <code>cd Downloads</code>).'] = 'W instrukcji short przejdź do katalogu pobierania (prawdopodobnie) <code>cd Downloads</code>).';

$GLOBALS["lang"]['Inactive'] = 'Nieaktywne';

$GLOBALS["lang"]['Incomplete'] = 'Niekompletne';

$GLOBALS["lang"]['Index'] = 'Indeks';

$GLOBALS["lang"]['India'] = 'Indie';

$GLOBALS["lang"]['Indonesia'] = 'Indonezja';

$GLOBALS["lang"]['Indonesian'] = 'Indonezja';

$GLOBALS["lang"]['Info'] = 'Informacja';

$GLOBALS["lang"]['Information only.'] = 'Tylko informacje.';

$GLOBALS["lang"]['Informational'] = 'Informacja';

$GLOBALS["lang"]['initial_size'] = 'Początkowy rozmiar';

$GLOBALS["lang"]['Initial Size'] = 'Początkowy rozmiar';

$GLOBALS["lang"]['Initial login credentials are'] = 'Wstępne dane logowania są';

$GLOBALS["lang"]['Initiation'] = 'Wszczęcie postępowania';

$GLOBALS["lang"]['inode'] = 'Inode';

$GLOBALS["lang"]['Inode'] = 'Inode';

$GLOBALS["lang"]['Input'] = 'Wejście';

$GLOBALS["lang"]['Input Type'] = 'Typ wejścia';

$GLOBALS["lang"]['inputs'] = 'Wejście';

$GLOBALS["lang"]['Inputs'] = 'Wejście';

$GLOBALS["lang"]['Insane'] = 'Szaleństwo';

$GLOBALS["lang"]['Insert a new {collection} entry.'] = 'Wstaw nowy wpis {kolekcja}.';

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

$GLOBALS["lang"]['Install Support'] = 'Zainstaluj wsparcie';

$GLOBALS["lang"]['installed_by'] = 'Zainstalowane przez';

$GLOBALS["lang"]['Installed By'] = 'Zainstalowane przez';

$GLOBALS["lang"]['installed_on'] = 'Zainstalowane';

$GLOBALS["lang"]['Installed On'] = 'Zainstalowane';

$GLOBALS["lang"]['Installing'] = 'Instalacja';

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

$GLOBALS["lang"]['Integrations can be scheduled as desired. This is left to the user.'] = 'Integracje mogą być zaplanowane zgodnie z życzeniem. Zostawia to użytkownikowi.';

$GLOBALS["lang"]['Integrations can be scheduled as per Discoveries, Queries, et al.'] = 'Integracje można zaplanować według Discoveries, Queries, et al.';

$GLOBALS["lang"]['Interactive Dashboards'] = 'Interaktywne tablice rozdzielcze';

$GLOBALS["lang"]['Interactive dashboards provide instant visibility into the status of network inventory allowing IT teams to spot newly discovered devices and unusual device behaviour at a glance.'] = 'Interaktywne tablice rozdzielcze zapewniają natychmiastową widoczność w statusie inwentaryzacji sieciowej, pozwalając zespołom IT na wykrycie nowo odkrytych urządzeń i nietypowych zachowań urządzeń w skrócie.';

$GLOBALS["lang"]['interface'] = 'Interfejs';

$GLOBALS["lang"]['Interface'] = 'Interfejs';

$GLOBALS["lang"]['interface_id'] = 'Identyfikator interfejsu';

$GLOBALS["lang"]['Interface ID'] = 'Identyfikator interfejsu';

$GLOBALS["lang"]['interface_type'] = 'Typ interfejsu';

$GLOBALS["lang"]['Interface Type'] = 'Typ interfejsu';

$GLOBALS["lang"]['Internal'] = 'Wewnętrzne';

$GLOBALS["lang"]['Internal Audit'] = 'Audyt wewnętrzny';

$GLOBALS["lang"]['Internal Audit & Review'] = 'Audyt wewnętrzny i przegląd';

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

$GLOBALS["lang"]['Irish'] = 'Irlandzki';

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

$GLOBALS["lang"]['It <i>Just Works</i> with NMIS'] = 'To <i>Tylko działa.</i> z NMIS';

$GLOBALS["lang"]['It is available at Menu -> Help ->'] = 'Jest on dostępny w menu - > Pomoc - >';

$GLOBALS["lang"]['It is important to note that when Open-AudIT determines a match any properties set to <i>y</i> must match exactly (and not be blank) in order for Open-AudIT to determine that the discovered device matches a device already in the database. If none of the properties marked <i>y</i> match, then a new device entry will be created, which could result in duplicate device entries. In situations where properties are duplicated, for example a dbus_id is copied during a VM clone, then an existing device may incorrectly get overwritten/updated rather then a new entry being created resulting in missing devices.'] = 'Ważne jest, aby zauważyć, że gdy Open-Audit określa dopasowanie dowolnych właściwości ustawionych na <i>y</i> musi dopasować dokładnie (i nie być puste), aby Open-Audit ustalić, że odkryte urządzenie pasuje do urządzenia już w bazie danych. Jeżeli żadna z właściwości nie jest oznaczona <i>y</i> dopasowanie, następnie zostanie utworzony nowy wpis urządzenia, który może skutkować duplikatami wpisów urządzenia. W sytuacjach, w których właściwości są duplikowane, na przykład, że dbus _ id jest kopiowany podczas klonu VM, wówczas istniejące urządzenie może zostać nieprawidłowo nadpisane / zaktualizowane, a następnie powstanie nowy wpis, który spowoduje brak urządzeń.';

$GLOBALS["lang"]['It is not uncommon to have an overlapping address space in a given Organisation. Not ideal, but not uncommon.'] = 'Nierzadko zdarza się, że w danej organizacji występuje nakładająca się przestrzeń adresowa. Nie idealnie, ale niezbyt często.';

$GLOBALS["lang"]['It is very common for second tier motherboard manufacturers to not set this, to set it to all <i>0</i>s or even all <i>F</i>s.'] = 'Jest bardzo powszechne dla producentów płyt macierzystych drugiego poziomu, aby nie ustawić tego, aby ustawić go do wszystkich <i>0</i>s lub nawet wszystkie <i>F</i>d.';

$GLOBALS["lang"]['Italian'] = 'Włoski';

$GLOBALS["lang"]['Italy'] = 'Włochy';

$GLOBALS["lang"]['Items not in Baseline'] = 'Pozycje nieujęte w pozycji wyjściowej';

$GLOBALS["lang"]['JSON'] = 'JSON';

$GLOBALS["lang"]['JSON to Import'] = 'JSON do importu';

$GLOBALS["lang"]['Jamaica'] = 'Jamajka';

$GLOBALS["lang"]['January'] = 'Styczeń';

$GLOBALS["lang"]['Japan'] = 'Japonia';

$GLOBALS["lang"]['Japanese'] = 'Japoński';

$GLOBALS["lang"]['Jersey'] = 'Jersey';

$GLOBALS["lang"]['Jordan'] = 'Jordania';

$GLOBALS["lang"]['July'] = 'Lipiec';

$GLOBALS["lang"]['June'] = 'Czerwiec';

$GLOBALS["lang"]['Kazakhstan'] = 'Kazachstan';

$GLOBALS["lang"]['Kenya'] = 'Kenia';

$GLOBALS["lang"]['kernel_version'] = 'Wersja jądra';

$GLOBALS["lang"]['Kernel Version'] = 'Wersja jądra';

$GLOBALS["lang"]['Key'] = 'Klucz';

$GLOBALS["lang"]['Key Components'] = 'Kluczowe elementy';

$GLOBALS["lang"]['Key Password (optional)'] = 'Hasło kluczowe (opcjonalne)';

$GLOBALS["lang"]['keys'] = 'Klucze';

$GLOBALS["lang"]['Keys'] = 'Klucze';

$GLOBALS["lang"]['Kiribati'] = 'Kiribati';

$GLOBALS["lang"]['Korea'] = 'Korea';

$GLOBALS["lang"]['Korean'] = 'Koreański';

$GLOBALS["lang"]['Kuwait'] = 'Kuwejt';

$GLOBALS["lang"]['Kyrgyz'] = 'Kirgistan';

$GLOBALS["lang"]['Kyrgyz Republic'] = 'Republika Kirgiska';

$GLOBALS["lang"]['LDAP Group'] = 'Grupa LDAP';

$GLOBALS["lang"]['LDAP was searched for this user and their account was found.'] = 'LDAP został przeszukany dla tego użytkownika i ich konto zostało znalezione.';

$GLOBALS["lang"]['LDAP was searched for this user and their account was not found. Check the LDAP server logs. The user credentials have worked, but the user was not found. Also check you have specified the correct Base DN attribute when you created the LDAP Server in Open-AudIT.'] = 'LDAP został przeszukany dla tego użytkownika i nie znaleziono ich konta. Sprawdź dzienniki serwerów LDAP. Dane uwierzytelniające użytkowników zadziałały, ale użytkownika nie znaleziono. Sprawdź również, czy podano poprawny atrybut Base DN podczas tworzenia serwera LDAP w Open- Audit.';

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

$GLOBALS["lang"]['Last up is WMI. For Windows as in Linux, a user with Administrator level access is preferred (see Target Client Configuration on the wiki).'] = 'Ostatni to WMI. Dla systemu Windows jak w Linuksie preferowany jest użytkownik z dostępem do poziomu administratora (patrz Konfiguracja klienta docelowego na wiki).';

$GLOBALS["lang"]['lastModified'] = 'LastZmodyfikowana';

$GLOBALS["lang"]['LastModified'] = 'LastZmodyfikowana';

$GLOBALS["lang"]['latitude'] = 'Szerokość geograficzna';

$GLOBALS["lang"]['Latitude'] = 'Szerokość geograficzna';

$GLOBALS["lang"]['Latvia'] = 'Łotwa';

$GLOBALS["lang"]['Latvian'] = 'Łotwa';

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

$GLOBALS["lang"]['Lets set the logging to debug. Copy the file:'] = 'Ustawmy logowanie na debugowanie. Kopiuj plik:';

$GLOBALS["lang"]['level'] = 'Poziom';

$GLOBALS["lang"]['Level'] = 'Poziom';

$GLOBALS["lang"]['Level of privileges needed to exploit (None, Low, High).'] = 'Poziom uprawnień potrzebnych do wykorzystania (Brak, niski, wysoki).';

$GLOBALS["lang"]['Liberia'] = 'Liberia';

$GLOBALS["lang"]['Libraries (ie, code that another program might include). These are typically items like Wordpress extensions, drupal extensions, node.js libraries, Android / iPhone / Windows libraries, python libraries, etc.'] = 'Biblioteki (tj. kod, który może zawierać inny program). Są to zazwyczaj elementy takie jak Wordpress rozszerzeń, Drupal rozszerzeń, node.js bibliotek, Android / iPhone / Windows bibliotek, biblioteki python, itp.';

$GLOBALS["lang"]['Libyan Arab Jamahiriya'] = 'Libyan Arab Jamahiriya';

$GLOBALS["lang"]['License'] = 'Licencja';

$GLOBALS["lang"]['License Key'] = 'Klucz licencyjny';

$GLOBALS["lang"]['License Required'] = 'Wymagana licencja';

$GLOBALS["lang"]['Licensed users are free to add or modify the rules as you see fit. If you have a device with an SNMP OID that does not match a model already in the file - now you can add it easily. No more waiting for us to provide a patch and add it to the code base for you.<br><br>When you create a Rules entry, you will need to provide a name and a list of inputs and outputs. The inputs and outputs are stored as JSON arrays within the database.<br><br>Inputs have a table and attribute, an operator and a value. When executing the condition, it works thus: If $table . $attribute $operator $value then apply the outputs.<br><br>An example rule to match an SNMP OID and set the model is below.<br>'] = 'Licencjonowani użytkownicy mogą dodawać lub modyfikować zasady według własnego uznania. Jeśli masz urządzenie z SNMP OID, które nie pasuje do modelu już w pliku - teraz możesz go łatwo dodać. Koniec czekania, aż dostarczymy ci plaster i dodamy go do kodu.<br/><br/>Po utworzeniu wpisu Zasady, będziesz musiał podać nazwę i listę wejść i wyjść. Wejścia i wyjścia są przechowywane jako tablice JSON w bazie danych.<br/><br/>Wejścia mają tabelę i atrybut, operatora i wartość. Podczas wykonywania warunku, działa w ten sposób: Jeśli $tabela. $atrybut $operator $wartość następnie zastosować wyjścia.<br/><br/>Przykładowa zasada dopasowania do SNMP OID i ustawienia modelu jest poniżej.<br/>';

$GLOBALS["lang"]['Licenses'] = 'Licencje';

$GLOBALS["lang"]['Liechtenstein'] = 'Liechtenstein';

$GLOBALS["lang"]['Like'] = 'Jak';

$GLOBALS["lang"]['Like most other attributes, Additional Fields can be bulk edited. Use the Bulk Edit function as you normally would and you will see the Additional Fields are available for input.'] = 'Podobnie jak większość innych atrybutów, dodatkowe pola mogą być masowo edytowane. Użyj funkcji Edycja luzem jak zwykle i zobaczysz dodatkowe pola są dostępne dla wejścia.';

$GLOBALS["lang"]['Like versus Equals'] = 'Like versus Equals';

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

$GLOBALS["lang"]['Line charts must return date or my_date, description or my_description and count.'] = 'Wykresy linii muszą zwracać datę lub moją _ datę, opis lub moją _ opis i liczyć.';

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

$GLOBALS["lang"]['Linux Packages'] = 'Pakiety Linuksa';

$GLOBALS["lang"]['List'] = 'Lista';

$GLOBALS["lang"]['List All NMAP Ports, Protocols and Programs for Each Device'] = 'Lista wszystkich portów, protokołów i programów NMAP dla każdego urządzenia';

$GLOBALS["lang"]['List Devices'] = 'Lista urządzeń';

$GLOBALS["lang"]['List Discoveries'] = 'Lista Odkryć';

$GLOBALS["lang"]['list_table_format'] = 'Lista formatu tabeli';

$GLOBALS["lang"]['List Table Format'] = 'Lista formatu tabeli';

$GLOBALS["lang"]['List Tables'] = 'Tabele listy';

$GLOBALS["lang"]['Lithuania'] = 'Litwa';

$GLOBALS["lang"]['Lithuanian'] = 'Litewski';

$GLOBALS["lang"]['Load Balancing'] = 'Zbilansowanie obciążenia';

$GLOBALS["lang"]['Local'] = 'Lokalne';

$GLOBALS["lang"]['Local Area Network'] = 'Lokalna sieć obszarowa';

$GLOBALS["lang"]['local_port'] = 'Port lokalny';

$GLOBALS["lang"]['Local Port'] = 'Port lokalny';

$GLOBALS["lang"]['Local area network'] = 'Lokalna sieć obszarowa';

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

$GLOBALS["lang"]['Location Name'] = 'Nazwa lokalizacji';

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

$GLOBALS["lang"]['Locations'] = 'Lokalizacja';

$GLOBALS["lang"]['Locations in this'] = 'Lokalizacje w tym';

$GLOBALS["lang"]['log'] = 'Dziennik';

$GLOBALS["lang"]['Log'] = 'Dziennik';

$GLOBALS["lang"]['log_format'] = 'Format dziennika';

$GLOBALS["lang"]['Log Format'] = 'Format dziennika';

$GLOBALS["lang"]['Log Line'] = 'Wiersz dziennika';

$GLOBALS["lang"]['log_path'] = 'Ścieżka dziennika';

$GLOBALS["lang"]['Log Path'] = 'Ścieżka dziennika';

$GLOBALS["lang"]['log_rotation'] = 'Rotacja dziennika';

$GLOBALS["lang"]['Log Rotation'] = 'Rotacja dziennika';

$GLOBALS["lang"]['log_status'] = 'Stan dziennika';

$GLOBALS["lang"]['Log Status'] = 'Stan dziennika';

$GLOBALS["lang"]['Logging in'] = 'Logowanie';

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

$GLOBALS["lang"]['Lowercase Hostname'] = 'Nazwa serwera Lowercase';

$GLOBALS["lang"]['Luxembourg'] = 'Luksemburg';

$GLOBALS["lang"]['MAC Address'] = 'Adres MAC';

$GLOBALS["lang"]['MAC Manufacturer'] = 'MAC Wytwórca';

$GLOBALS["lang"]['mac'] = 'Mac';

$GLOBALS["lang"]['Mac'] = 'Mac';

$GLOBALS["lang"]['Mac Address'] = 'Adres Mac';

$GLOBALS["lang"]['MacOS'] = 'MacOS';

$GLOBALS["lang"]['MacOS Packages'] = 'Pakiety MacOS';

$GLOBALS["lang"]['Macao'] = 'Makao';

$GLOBALS["lang"]['Macedonia'] = 'Macedonia';

$GLOBALS["lang"]['Madagascar'] = 'Madagaskar';

$GLOBALS["lang"]['Maintain records of risk assessments and treatments'] = 'Prowadzenie rejestrów ocen ryzyka i zabiegów';

$GLOBALS["lang"]['maintenance_expires'] = 'Czas utrzymywania';

$GLOBALS["lang"]['Maintenance Expires'] = 'Czas utrzymywania';

$GLOBALS["lang"]['Make My Default Dashboard'] = 'Zrób moją domyślną deskę rozdzielczą';

$GLOBALS["lang"]['Make this install a Collector'] = 'Zrób to zainstalować kolektor';

$GLOBALS["lang"]['Malawi'] = 'Malawi';

$GLOBALS["lang"]['Malay'] = 'Malajski';

$GLOBALS["lang"]['Malaysia'] = 'Malezja';

$GLOBALS["lang"]['Maldives'] = 'Malediwy';

$GLOBALS["lang"]['Mali'] = 'Mali';

$GLOBALS["lang"]['Malta'] = 'Malta';

$GLOBALS["lang"]['Manage'] = 'Zarządzanie';

$GLOBALS["lang"]['Manage Licenses'] = 'Zarządzanie licencjami';

$GLOBALS["lang"]['Manage in NMIS'] = 'Zarządzanie w NMIS';

$GLOBALS["lang"]['Manage incidents and nonconformities'] = 'Zarządzanie zdarzeniami i niezgodnościami';

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

$GLOBALS["lang"]['Match Order'] = 'Zamówienie dopasowania';

$GLOBALS["lang"]['Match Process'] = 'Proces dopasowania';

$GLOBALS["lang"]['match_string'] = 'String dopasowania';

$GLOBALS["lang"]['Match String'] = 'String dopasowania';

$GLOBALS["lang"]['Matching Attribute'] = 'Atrybut dopasowania';

$GLOBALS["lang"]['Matching Devices - Including OrgID'] = 'Urządzenia pasujące - w tym Orgid';

$GLOBALS["lang"]['Matching Linux Devices'] = 'Pasujące urządzenia Linux';

$GLOBALS["lang"]['Matching is conducted in the following order'] = 'Dopasowanie odbywa się w następującej kolejności';

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

$GLOBALS["lang"]['Metropolitan area network'] = 'Metropolitalna sieć obszarowa';

$GLOBALS["lang"]['Mexico'] = 'Meksyk';

$GLOBALS["lang"]['Micronesia'] = 'Mikronezja';

$GLOBALS["lang"]['Microsoft Azure Fields'] = 'Microsoft Azure Fields';

$GLOBALS["lang"]['microtime'] = 'Mikroczas';

$GLOBALS["lang"]['Microtime'] = 'Mikroczas';

$GLOBALS["lang"]['minute'] = 'Minuta';

$GLOBALS["lang"]['Minute'] = 'Minuta';

$GLOBALS["lang"]['Minutes'] = 'Protokół';

$GLOBALS["lang"]['Minutes Since last Audit are Greater than'] = 'Minuty Od ostatniego audytu są większe niż';

$GLOBALS["lang"]['model'] = 'Wzór';

$GLOBALS["lang"]['Model'] = 'Wzór';

$GLOBALS["lang"]['model_family'] = 'Model Family';

$GLOBALS["lang"]['Model Family'] = 'Model Family';

$GLOBALS["lang"]['Modified'] = 'Zmodyfikowane';

$GLOBALS["lang"]['Modifying an Existing Script'] = 'Modyfikowanie istniejącego skryptu';

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

$GLOBALS["lang"]['Monitor and measure ISMS performance'] = 'Monitorowanie i pomiar wydajności ISMS';

$GLOBALS["lang"]['Montenegro'] = 'Czarnogóra';

$GLOBALS["lang"]['month'] = 'Miesiąc';

$GLOBALS["lang"]['Month'] = 'Miesiąc';

$GLOBALS["lang"]['Montserrat'] = 'Montserrat';

$GLOBALS["lang"]['More Information'] = 'Więcej informacji';

$GLOBALS["lang"]['More Secure'] = 'Bardziej bezpieczne';

$GLOBALS["lang"]['More elaborate SQL can used to group attributes within a range. Below shows the SQL for devices not seen in a pie chart grouped by last seen date ranges.'] = 'Bardziej skomplikowany SQL może używać do grupowania atrybutów w zakresie. Poniżej pokazano SQL dla urządzeń niewidocznych na wykresie ciasta zgrupowanym według ostatnio widzianych zakresów dat.';

$GLOBALS["lang"]['More information about debugging this can be found on a helpful Stack Overflow thread'] = 'Więcej informacji na temat debugowania można znaleźć na przydatnym wątku Stack Overflow';

$GLOBALS["lang"]['Morocco'] = 'Maroko';

$GLOBALS["lang"]['Most likely the Windows firewall (or a third party firewall) is denying the connection attempt.<br><br>Please log on to the target Windows machine and check the firewall settings.'] = 'Najprawdopodobniej firewall systemu Windows (lub zapora osoby trzeciej) zaprzecza próbie połączenia.<br/><br/>Proszę zalogować się do docelowej maszyny Windows i sprawdzić ustawienia firewall.';

$GLOBALS["lang"]['Most of Open-AudIT is Licensed with GNU AGPL.'] = 'Większość Open- Audit jest licencjonowana z GNU AGPL.';

$GLOBALS["lang"]['motherboard'] = 'Płyta główna';

$GLOBALS["lang"]['Motherboard'] = 'Płyta główna';

$GLOBALS["lang"]['mount_point'] = 'Punkt montowania';

$GLOBALS["lang"]['Mount Point'] = 'Punkt montowania';

$GLOBALS["lang"]['mount_type'] = 'Typ montowania';

$GLOBALS["lang"]['Mount Type'] = 'Typ montowania';

$GLOBALS["lang"]['Mozambique'] = 'Mozambik';

$GLOBALS["lang"]['Must Respond To Ping. If set, Nmap will fist attempt to send and listen for an ICMP response. If the device does not respond, no further scanning will occur.<br>Previously a device did not have to respond to a ping for Open-AudIT to continue scanning.'] = 'Muszę odpowiedzieć na Ping. Jeśli jest ustawiony, Nmap spróbuje wysłać i wysłuchać odpowiedzi ICMP. Jeżeli urządzenie nie reaguje, nie będzie dalszego skanowania.<br/>Wcześniej urządzenie nie musiało odpowiadać na ping dla Open- Audit, aby kontynuować skanowanie.';

$GLOBALS["lang"]['Must Respond to Ping'] = 'Musi odpowiedzieć na Ping';

$GLOBALS["lang"]['My AntiVirus is prompting me to deny/allow things'] = 'Mój antywirus skłania mnie do zaprzeczania / dopuszczania rzeczy';

$GLOBALS["lang"]['My time is off in Open-AudIT'] = 'Mój czas jest wyłączony w Open- Audit';

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

$GLOBALS["lang"]['NOTE'] = 'UWAGA';

$GLOBALS["lang"]['NOTE #2'] = 'UWAGA nr 2';

$GLOBALS["lang"]['NOTE - For more info on DateTime formats, see'] = 'UWAGA - Więcej informacji na temat formatów DateTime można znaleźć';

$GLOBALS["lang"]['NOTE - If you request a downloaded CSV, XML or JSON format (either a single credential, or the complete collection) the actual credential details will be sent. Not the encrypted string, the actual username, password, community string, etc. Any sensitive details are not displayed in the web GUI, but are made available via other formats. To prevent this export a configuration item is available called decrypt_credentials.'] = 'UWAGA - Jeśli zażądasz pobranego formatu CSV, XML lub JSON (albo jednego lub kompletnej kolekcji), zostaną wysłane faktyczne dane kredytowe. Nie zaszyfrowany ciąg, prawdziwa nazwa użytkownika, hasło, wspólnotowy ciąg etc. Wszelkie wrażliwe szczegóły nie są wyświetlane w Internetowym GUI, ale są udostępniane w innych formatach. Aby zapobiec temu eksportowi, dostępny jest element konfiguracyjny o nazwie decrypt _ references.';

$GLOBALS["lang"]['NOTE - The curly brackets in the data filed should be used as-is (not replaced as per other examples above).'] = 'UWAGA - Należy użyć nawiasów kręconych w przekazywanych danych jako -is (nie zastępuje się jak w innych przykładach powyżej).';

$GLOBALS["lang"]['NOTE - You can prevent plain text credentials being displayed below by setting the configuration item for <code>decrypt_credentials</code> to <code>n</code>.'] = 'UWAGA - Możesz zapobiec wyświetlaniu poniżej prostych referencji tekstowych poprzez ustawienie pozycji konfiguracyjnej dla <code>decrypt_credentials</code> do <code>n</code>.';

$GLOBALS["lang"]['name'] = 'Nazwa';

$GLOBALS["lang"]['Name'] = 'Nazwa';

$GLOBALS["lang"]['Name: The name you are giving to this field. Ideally it should be unique.'] = 'Nazwa: Nazwa, którą podajesz temu polu. Idealnie powinno być unikalne.';

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

$GLOBALS["lang"]['Netstat Ports'] = 'Porty Netstat';

$GLOBALS["lang"]['Netstat Ports use a combination of port number, protocol and program. If all are present the policy passes.'] = 'Netstat Ports używa kombinacji numeru portu, protokołu i programu. Jeśli wszyscy są obecni, polityka przechodzi.';

$GLOBALS["lang"]['Network'] = 'Sieć';

$GLOBALS["lang"]['network_address'] = 'Adres sieci';

$GLOBALS["lang"]['Network Address'] = 'Adres sieci';

$GLOBALS["lang"]['Network Discovery'] = 'Odkrywanie sieci';

$GLOBALS["lang"]['network_domain'] = 'Domena sieci';

$GLOBALS["lang"]['Network Domain'] = 'Domena sieci';

$GLOBALS["lang"]['Network Types'] = 'Rodzaje sieci';

$GLOBALS["lang"]['Network type is set to Local Area Network by default, but can be changed by the user as they see fit. The types supported are below (with thanks to Wikipedia).<br><br>A network can be characterized by its physical capacity or its organizational purpose. Use of the network, including user authorization and access rights, differ accordingly.'] = 'Typ sieci jest domyślnie ustawiany na Lokalną Sieć Obszarową, ale może być zmieniany przez użytkownika, jak uznają za odpowiednie. Typy obsługiwane są poniżej (dzięki Wikipedii).<br/><br/>Sieć może charakteryzować się swoją zdolnością fizyczną lub celem organizacyjnym. Korzystanie z sieci, w tym autoryzacja użytkownika i prawa dostępu, różnią się odpowiednio.';

$GLOBALS["lang"]['networks'] = 'Sieci';

$GLOBALS["lang"]['Networks'] = 'Sieci';

$GLOBALS["lang"]['Networks Generated By'] = 'Sieci generowane przez';

$GLOBALS["lang"]['Networks are updated with every discovery. Items such as IPs Available and IPs Used, along with Gateways, DHCP and DNS Servers are added as found.'] = 'Sieci są aktualizowane z każdym odkryciem. Pozycje takie jak IP Dostępne i IP Używane, wraz z Gateways, DHCP i serwery DNS są dodawane jako znalezione.';

$GLOBALS["lang"]['Networks respond differently depending on how they are configured. Some routers and/or firewalls can respond <i>on behalf</i> of IPs on the other side of their interfaces to the Open-AudIT Server. It is quite common to see Nmap report a probe for SNMP (UDP port 161) to respond as open|filtered for devices that do and do not exist. This is misleading as there is no device at that IP, yet it ends up with a device entry in the database. 99.9% of the time, it is not Open-AudIT, nor even Nmap, but the network causing this issue. Now that we have the options to treat open|filtered ports as either open or closed, we can eliminate a lot of this confusion. Enterprise users even have the option to change this on a per discovery basis (more than just using the Medium (Classic) item, as above).'] = 'Sieci reagują inaczej w zależności od konfiguracji. Niektóre routery i / lub zapory mogą reagować <i>w imieniu</i> IP po drugiej stronie ich interfejsów do Open- Audit Server. Jest to dość powszechne, aby zobaczyć Nmap raportować sondę dla SNMP (port UDP 161), aby odpowiedzieć jako otwarte 124; filtrowane dla urządzeń, które nie istnieją. Jest to mylące, ponieważ nie ma żadnego urządzenia w tym IP, ale kończy się na wpisie urządzenia do bazy danych. 99,9% czasu, nie jest Open- Audit, ani nawet Nmap, ale sieć powoduje ten problem. Teraz, gdy mamy opcje, aby traktować otwarte porty 124; filtrowane porty jako otwarte lub zamknięte, możemy wyeliminować wiele z tego zamieszania. Użytkownicy przedsiębiorstwa mają nawet możliwość zmiany tej opcji na podstawie każdego odkrycia (więcej niż tylko używając pozycji Medium (Classic), jak powyżej).';

$GLOBALS["lang"]['Networks using a CIDR Mask of'] = 'Sieci wykorzystujące maskę CIDR';

$GLOBALS["lang"]['New Building Name'] = 'Nowa nazwa budynku';

$GLOBALS["lang"]['New Caledonia'] = 'Nowa Kaledonia';

$GLOBALS["lang"]['New Floor Name'] = 'Nazwa nowego piętra';

$GLOBALS["lang"]['New Room Name'] = 'Nowa nazwa pokoju';

$GLOBALS["lang"]['New Row Name'] = 'Nazwa nowego wiersza';

$GLOBALS["lang"]['New Zealand'] = 'Nowa Zelandia';

$GLOBALS["lang"]['News'] = 'Aktualności';

$GLOBALS["lang"]['News checks-in each time you login for updated queries & packages, configuration recommendations, release announcements, blog posts and more.'] = 'Wiadomości checks- w każdym przypadku logowania się do zaktualizowanych zapytań i pakietów, zaleceń konfiguracji, wydania ogłoszeń, postów na blogu i więcej.';

$GLOBALS["lang"]['News is our way of keeping you up-to-date with the latest fixes, announcements, query updates, software versions and more.<br><br>You do not need to keep on top of the wiki or check for new releases, we can send these to you!'] = 'Aktualności to nasz sposób na utrzymanie Cię na bieżąco z najnowszymi poprawkami, ogłoszeniami, aktualizacjami zapytań, wersjami oprogramowania i innymi.<br/><br/>Nie musisz trzymać się wiki lub sprawdzić nowe wydania, możemy wysłać je do Ciebie!';

$GLOBALS["lang"]['next_hop'] = 'Następny';

$GLOBALS["lang"]['Next Hop'] = 'Następny';

$GLOBALS["lang"]['next_run'] = 'Następny';

$GLOBALS["lang"]['Next Run'] = 'Następny';

$GLOBALS["lang"]['Next click <i>Create your own application</i>.'] = 'Następne kliknięcie <i>Utwórz własną aplikację</i>.';

$GLOBALS["lang"]['Next, click OK, then right click the Apache 2.4 service and click Restart. Done!'] = 'Następnie kliknij OK, a następnie kliknij prawym przyciskiem myszy usługę Apache 2.4 i ponownie. Gotowe!';

$GLOBALS["lang"]['Next, right click the Apache2.4 service and select Properties, then click the Log On tab.'] = 'Następnie kliknij prawym przyciskiem myszy usługę Apache2.4 i wybierz Właściwości, a następnie kliknij kartę Log On.';

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

$GLOBALS["lang"]['Nmap cannot determine whether the port is open because packet filtering prevents its probes from reaching the port. The filtering could be from a dedicated firewall device, router rules, or host-based firewall software. These ports frustrate attackers because they provide so little information. Sometimes they respond with ICMP error messages such as type 3 code 13 (destination unreachable: communication administratively prohibited), but filters that simply drop probes without responding are far more common. This forces Nmap to retry several times just in case the probe was dropped due to network congestion rather than filtering. This slows down the scan dramatically.'] = 'Nmap nie może określić, czy port jest otwarty, ponieważ filtrowanie pakietów zapobiega dotarciu sond do portu. Filtrowanie może być z dedykowanego urządzenia firewall, zasad routera, lub host- oparte oprogramowanie firewall. Te porty frustrują atakujących, ponieważ dostarczają tak mało informacji. Czasami reagują one komunikatami błędów ICMP, takimi jak kod typu 3 13 (cel nieosiągalny: komunikacja zabroniona administracyjnie), ale filtry, które po prostu upuszczają sondy bez odpowiedzi, są znacznie częstsze. Zmusza to Nmap do wielokrotnego próby na wypadek, gdyby sonda została zrzucona z powodu przeciążenia sieci, a nie filtrowania. To znacznie spowalnia skanowanie.';

$GLOBALS["lang"]['Nmap places ports in this state when it is unable to determine whether a port is open or filtered. This occurs for scan types in which open ports give no response. The lack of response could also mean that a packet filter dropped the probe or any response it elicited. So Nmap does not know for sure whether the port is open or being filtered. The UDP, IP protocol, FIN, NULL, and Xmas scans classify ports this way.'] = 'Nmap umieszcza porty w tym stanie, gdy nie jest w stanie określić, czy port jest otwarty czy filtrowany. Dotyczy to typów skanów, w których otwarte porty nie dają odpowiedzi. Brak odpowiedzi może również oznaczać, że filtr pakietów upuścił sondę lub wszelkie odpowiedzi, które wywołał. Nmap nie wie na pewno, czy port jest otwarty czy filtrowany. Skanowanie UDP, protokołu IP, FIN, NULL i Xmas klasyfikuje porty w ten sposób.';

$GLOBALS["lang"]['Nmap timing details are found on the bottom of this linked page'] = 'Szczegóły dotyczące czasu Nmap znajdują się na dole tej połączonej strony';

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

$GLOBALS["lang"]['No devices are in the database.'] = 'W bazie danych nie ma żadnych urządzeń.';

$GLOBALS["lang"]['Node'] = 'Węzeł';

$GLOBALS["lang"]['None'] = 'Brak';

$GLOBALS["lang"]['Norfolk Island'] = 'Wyspa Norfolk';

$GLOBALS["lang"]['Normal'] = 'Normalny';

$GLOBALS["lang"]['Northern Mariana Islands'] = 'Mariany Północne';

$GLOBALS["lang"]['Norway'] = 'Norwegia';

$GLOBALS["lang"]['Norwegian'] = 'Norweski';

$GLOBALS["lang"]['Not Applicable'] = 'Nie dotyczy';

$GLOBALS["lang"]['Not Checked'] = 'Nie sprawdzone';

$GLOBALS["lang"]['Not Equals'] = 'Nie równa się';

$GLOBALS["lang"]['Not In'] = 'Nie w';

$GLOBALS["lang"]['Not Like'] = 'Nie jak';

$GLOBALS["lang"]['Not Set'] = 'Nie ustawiono';

$GLOBALS["lang"]['Not every computer will be able to successfully complete a benchmark. We have seen in some fail in testing for reasons beyond our control. The logs should help point you in the right direction for these items.'] = 'Nie każdy komputer będzie w stanie z powodzeniem ukończyć punkt odniesienia. Widzieliśmy w niektórych niepowodzeniach w testach z powodów poza naszą kontrolą. Logi powinny pomóc wskazać właściwy kierunek dla tych przedmiotów.';

$GLOBALS["lang"]['Not in the (comma seperated) list'] = 'Nie figuruje na liście (przecinek seperated)';

$GLOBALS["lang"]['Not normally used. If set, this requires the device to have an open port (as per Scan Options) to be considered responding. A MAC address, arp response or ping response is not considered sufficient to be considered responding. Useful if a router or firewall between the Open-AudIT server and target IP is responding to port scans on the IPs behalf.'] = 'Zazwyczaj nieużywane. Jeśli jest ustawione, wymaga to, aby urządzenie miało otwarty port (zgodnie z Opcjami skanowania), który będzie uważany za odpowiadający. Adres MAC, odpowiedź arp lub odpowiedź ping nie są uważane za wystarczające do uznania odpowiedzi. Przydatne, jeśli router lub firewall pomiędzy serwerem Open- Audit a docelowym IP reaguje na skanowanie portów w imieniu IP.';

$GLOBALS["lang"]['Note'] = 'Uwaga';

$GLOBALS["lang"]['Note - Selecting a parent will automatically provide access to its children (although it wont be shown here).'] = 'Notatka - Wybór rodzica automatycznie zapewni dostęp do swoich dzieci (chociaż nie zostanie pokazany tutaj).';

$GLOBALS["lang"]['Note that the 100 device Enterprise license does not include support.'] = 'Należy pamiętać, że licencja Enterprise 100 urządzeń nie zawiera wsparcia.';

$GLOBALS["lang"]['Note, you may need to make the script executable with'] = 'Uwaga, może być konieczne wykonanie skryptu z';

$GLOBALS["lang"]['Notes'] = 'Uwagi';

$GLOBALS["lang"]['notes'] = 'Uwagi';

$GLOBALS["lang"]['Notice'] = 'Informacja';

$GLOBALS["lang"]['notin'] = 'Notin';

$GLOBALS["lang"]['Notin'] = 'Notin';

$GLOBALS["lang"]['November'] = 'Listopad';

$GLOBALS["lang"]['Now for the Subscription ID, click All Services, Subscriptions and copy it.'] = 'Teraz dla ID Subskrypcji, kliknij wszystkie usługi, Subskrypcje i skopiuj go.';

$GLOBALS["lang"]['Now we need to provide the Azure Active Directory application access to your subscription.<br><br>Click on Resource Groups and then the resource group you would like your Azure Active Directory Application to have access to.<br><br>Click Add. The role should be Contributor and then search for the app (Open-AudIT). Then click Save.<br><br>Now the application has access to the subscription, so we can make API calls. The API calls will be requested on behalf of the application, not your user.'] = 'Teraz musimy zapewnić aplikację Azure Active Directory dostęp do subskrypcji.<br/><br/>Kliknij na Grupy zasobów, a następnie grupę zasobów, do której chciałbyś, aby Twoja aplikacja Azure Active Directory miała dostęp.<br/><br/>Kliknij przycisk Dodaj. Rolą powinien być Uczestnik, a następnie szukać aplikacji (Open- Audit). Następnie kliknij Zapisz.<br/><br/>Teraz aplikacja ma dostęp do subskrypcji, więc możemy wykonać API połączeń. Rozmowy API będą wymagane w imieniu aplikacji, a nie użytkownika.';

$GLOBALS["lang"]['nvd_json'] = 'Nvd Json';

$GLOBALS["lang"]['Nvd Json'] = 'Nvd Json';

$GLOBALS["lang"]['ORDER BY'] = 'POSTANOWIENIE';

$GLOBALS["lang"]['OS'] = 'OS';

$GLOBALS["lang"]['OS Families'] = 'OS Rodziny';

$GLOBALS["lang"]['OS Family'] = 'Rodzina OS';

$GLOBALS["lang"]['OS Group'] = 'Grupa OS';

$GLOBALS["lang"]['OUTPUTS'] = 'WYNIKI';

$GLOBALS["lang"]['oae_manage'] = 'Oae Manage';

$GLOBALS["lang"]['Oae Manage'] = 'Oae Manage';

$GLOBALS["lang"]['object_ident'] = 'Identyfikator obiektu';

$GLOBALS["lang"]['Object Ident'] = 'Identyfikator obiektu';

$GLOBALS["lang"]['Obtain top management support'] = 'Uzyskaj najlepsze wsparcie w zarządzaniu';

$GLOBALS["lang"]['October'] = 'październik';

$GLOBALS["lang"]['Offset'] = 'Offset';

$GLOBALS["lang"]['Okta'] = 'Okta';

$GLOBALS["lang"]['Oman'] = 'Oman Przewodniczący';

$GLOBALS["lang"]['omk_uuid'] = 'Omk Uuid';

$GLOBALS["lang"]['Omk Uuid'] = 'Omk Uuid';

$GLOBALS["lang"]['On'] = 'On';

$GLOBALS["lang"]['On Windows, Open-AudIT uses WMI as it is primary method of auditing. Windows has a notorious reputation where remote WMI is concerned. It tends to either <i>just work</i> or some mystery item on the target requires changing. If you are experiencing difficulty auditing remote Windows PCs, we have created a script called test_windows_client.vbs. You can run this script <strong>locally</strong> on the machine in question, after signing on as the user that is used by Open-AudIT to perform the audit. The script makes <strong>no changes</strong> to the target devices. It checks most (not all) of the items below and generates PASS, FAIL and INFO tags for various properties. NOTE - If your target system is being audited correctly, you should not change any settings. Some of the below do not exist on Windows PCs that are able to be audited and some do exist. Only change settings if your discoveries on particular PCs are not working as intended.'] = 'W systemie Windows Open- Audit wykorzystuje WMI jako podstawową metodę audytu. Windows ma sławną reputację w przypadku zdalnego WMI. To ma tendencję do albo <i>Po prostu pracuj</i> lub jakiś tajemniczy przedmiot na celu wymaga zmiany. Jeśli masz problemy z audytem zdalnych komputerów Windows, stworzyliśmy skrypt o nazwie test _ Windows _ client.vbs. Możesz uruchomić ten skrypt <strong>lokalnie</strong> na danej maszynie, po zalogowaniu się jako użytkownik, który jest używany przez Open-Audit do przeprowadzania audytu. Scenariusz <strong>brak zmian</strong> do urządzeń docelowych. Sprawdza większość (nie wszystkie) poniższych elementów i generuje znaczniki PASS, FAIL i INFO dla różnych właściwości. UWAGA - Jeśli system docelowy jest sprawdzany prawidłowo, nie należy zmieniać ustawień. Niektóre z poniższych nie istnieją na komputerach z systemem Windows, które mogą być kontrolowane, a niektóre istnieją. Zmień ustawienia tylko wtedy, gdy Twoje odkrycia na poszczególnych komputerach nie działają zgodnie z przeznaczeniem.';

$GLOBALS["lang"]['On the Tasks List page, click the <i>Add New</i> button to configure a task.'] = 'Na stronie Lista zadań kliknij przycisk <i>Dodaj nowy</i> przycisk konfiguracji zadania.';

$GLOBALS["lang"]['On the field <i>Match String</i> you should provide the name of the software that you want to track. You can use the percent sign (%) as a wildcard in where required.'] = 'Na boisku <i>String dopasowania</i> należy podać nazwę oprogramowania, które chcesz śledzić. Możesz użyć znaku procentu (%) jako dzikiej karty tam, gdzie jest to wymagane.';

$GLOBALS["lang"]['On the next page you will be able to select Access Keys and see your key or create a new key.'] = 'Na następnej stronie będziesz mógł wybrać Access Keys i zobaczyć swój klucz lub utworzyć nowy klucz.';

$GLOBALS["lang"]['On the target Windows PC, run the DCOM utility and verify (or set) the below attributes. Start -> Run, Enter DCOMCNFG and press OK. This will open the DCOMCNFG window.'] = 'Na docelowym komputerze Windows uruchom narzędzie DCOM i zweryfikuj (lub ustaw) poniższe atrybuty. Start - > Uruchom, Enter DCOMCNFG i naciśnij OK. To otworzy okno DCOMCNFG.';

$GLOBALS["lang"]['On the top right (underneath the menu bar) you will see several buttons. These allow you to select another dashboard, set the current dashboard as your homepage (if it is not already) and edit the current dashboard (if you have permission).'] = 'W prawym górnym rogu (pod paskiem menu) widać kilka przycisków. Pozwala to wybrać inną tablicę rozdzielczą, ustawić bieżącą tablicę rozdzielczą jako swoją stronę główną (jeśli jeszcze nie jest) i edytować bieżącą tablicę rozdzielczą (jeśli masz pozwolenie).';

$GLOBALS["lang"]['On-Premise, Not Cloud'] = 'Premiza, nie chmura';

$GLOBALS["lang"]['Once an Additional Field has been created it can be used in queries and groups just like any other attribute in the database.'] = 'Po utworzeniu dodatkowego pola można go używać w zapytaniach i grupach, jak każdy inny atrybut w bazie danych.';

$GLOBALS["lang"]['Once commented out, your certificate will be validated, but may also fail this validation if you are using self-signed certificates and have not configured your server correctly.'] = 'Po skomentowaniu, Twój certyfikat zostanie potwierdzony, ale może również nie potwierdzić tej walidacji, jeśli używasz samopodpisanych certyfikatów i nie skonfigurował swojego serwera poprawnie.';

$GLOBALS["lang"]['Once the script has run on a target, should the script delete itself.'] = 'Po uruchomieniu skryptu na celu, czy skrypt sam się usunie.';

$GLOBALS["lang"]['Once those initial queries (snmp, ssh, wmi) are complete, if the device is a supported by the audit scripts (Windows, Linux, OSX, AIX, HP-UX, Solaris and ESXi), the correct audit script will be copied to the target and executed. The audit script will self delete upon completion. The result will be stored on the target machine as an XML file. The Open-AudIT server will then retrieve the result file for processing and delete the result file on the target. The location the audit script is copied to on the target device (at least for SSH audits) is configurable by editing the discovery_linux_script_directory config item. By default it is set to /tmp/. This may need changing if /tmp has noexec set. The result file is then processed and the device details updated within Open-AudIT.'] = 'Po zakończeniu tych początkowych zapytań (snmp, ssh, wmi), jeśli urządzenie jest obsługiwane przez skrypty audytu (Windows, Linux, OSX, AIX, HP- UX, Solaris i ESXi), poprawny skrypt audytu zostanie skopiowany do celu i wykonany. Skrypt audytu sam usunie się po zakończeniu. Wynik zostanie zapisany na maszynie docelowej jako plik XML. Serwer Open- Audit następnie odzyska plik wyników do przetwarzania i usunie plik wyników na docelowym serwerze. Lokalizacja skryptu audytu jest kopiowana na urządzeniu docelowym (przynajmniej dla audytów SSH) jest konfigurowalna przez edycję pozycji config _ linux _ script _ directory. Domyślnie jest ustawiony na / tmp /. Może to wymagać zmiany jeśli / tmp ma zestaw noexec. Następnie plik wyniku jest przetwarzany, a szczegóły urządzenia są aktualizowane w Open-Audit.';

$GLOBALS["lang"]['Once you click the execute button, Open-AudIT will spawn a process to initiate the discovery and return the user to the discovery details page. The newly spawned process takes the configured discovery options and executes Nmap commands to determine the initial list of IP addresses to be scanned (or queries Active Directory if that type is used). Each IP to be scanned is placed into a queue. Once the initial process has completed (and there are IPs to be scanned in the queue) a number of processes will be spawned to further scan each IP in parallel. This number of processes is configurable in the configuration, edit the attribute <i>queue_limit</i>. By default this is set to 20.'] = 'Po kliknięciu przycisku execute, Open-Audit wytworzy proces inicjowania odkrycia i zwróci użytkownika do strony szczegóły odkrycia. Nowo wyselekcjonowany proces wykorzystuje skonfigurowane opcje wyszukiwania i wykonuje polecenia Nmap w celu określenia początkowej listy adresów IP, które mają być skanowane (lub zapytań Active Directory, jeśli ten typ jest używany). Każdy skanowany IP jest umieszczany w kolejce. Po zakończeniu procesu początkowego (a w kolejce zostaną zeskanowane IP), szereg procesów zostanie opracowanych w celu dalszego skanowania każdego IP równolegle. Ta liczba procesów jest konfigurowalna w konfiguracji, edytuj atrybut <i>level _ limit</i>. Domyślnie jest to ustawione na 20.';

$GLOBALS["lang"]['Once you have chosen your devices to edit, click the pencil button on the top right of the table.'] = 'Po wybraniu urządzenia do edycji, kliknij przycisk ołówka w prawym górnym rogu tabeli.';

$GLOBALS["lang"]['Once you have done this, Open-AudIT will attempt to verify your user logon details against the configured Auth Method. If the user has valid credentials and <code>use_authorisation</code> is set, Open-AudIT will ask for the list of groups that the user belongs to. If the user is in the corresponding groups for Open-AudIT Roles and Orgs, those Roles and Orgs will be applied to that user.'] = 'Po wykonaniu tego zadania Open- Audit będzie próbował zweryfikować szczegóły logowania użytkownika z skonfigurowaną metodą Auth. Jeśli użytkownik posiada ważne referencje i <code>use_authorisation</code> jest ustawiony, Open- Audit zapyta o listę grup, do których należy użytkownik. Jeśli użytkownik jest w odpowiednich grupach dla Open- Audit Roles i Orgs, te Roles i Orgs będą stosowane do tego użytkownika.';

$GLOBALS["lang"]['Once you have generated a Baseline Definition you can schedule it to be run against a specified group of devices.'] = 'Po wygenerowaniu definicji bazowej możesz ją zaplanować, aby została uruchomiona z określoną grupą urządzeń.';

$GLOBALS["lang"]['Once you have those items, in Open-AudIT Enterprise you can go to menu -> Discover -> Clouds -> Create Clouds, select the <i>Amazon AWS</i> type and paste them in. Done.'] = 'Po uzyskaniu tych pozycji, w Open- Audit Enterprise możesz przejść do menu - > Odkryj - > Chmury - > Utwórz Chmury, wybierz <i>Amazon AWS</i> Wpisz i wklej je. Załatwione.';

$GLOBALS["lang"]['Once you have those items, in Open-AudIT Enterprise you can go to menu -> Discover -> Clouds -> Create Clouds, select the <i>Microsoft Azure</i> type and paste them in. Done.'] = 'Po uzyskaniu tych pozycji, w Open- Audit Enterprise możesz przejść do menu - > Odkryj - > Chmury - > Utwórz Chmury, wybierz <i>Microsoft Azure</i> Wpisz i wklej je. Załatwione.';

$GLOBALS["lang"]['Once you have your cloud credentials, it is merely a matter of creating a new cloud and running the discovery - or scheduling first/future discoveries. Make sure you also have the credentials required to log on to your cloud machines, and it is all done for you just like a regular discovery. Credentials for your cloud'] = 'Gdy już posiadasz referencje w chmurze, jest to tylko kwestia stworzenia nowej chmury i uruchomienia odkrycia - lub planowania pierwsze / przyszłe odkrycia. Upewnij się, że masz również referencje wymagane do logowania się do maszyn w chmurze, i to wszystko jest zrobione dla Ciebie tak jak regularne odkrycie. Fundamenty dla chmury';

$GLOBALS["lang"]['One of <code>3x2</code>, <code>4x2</code>, <code>4x3</code> or <code>4x4</code>.'] = 'Jeden z <code>3x2</code>, <code>4x2</code>, <code>4x3</code> lub <code>4x4</code>.';

$GLOBALS["lang"]['One of Campus Area Network, Cloud Network, Enterprise Private Network, Home Area Network, Local Area Network, Metropolitan Area Network, Passive Optical Local Area Network, Personal Area Network, Storage-Area Network, System-Area Network, Virtual Private Network, Wide Area Network, Wireless Local Area Network.'] = 'Jedna z sieci Campus Area, Cloud Network, Enterprise Private Network, Home Area Network, Local Area Network, Metropolitan Area Network, Passive Optical Local Area Network, Personal Area Network, Storage- Area Network, System- Area Network, Virtual Private Network, Wide Area Network, Wireless Local Area Network.';

$GLOBALS["lang"]['One of Development, Disaster Recovery, Evaluation, Pre-Production, Production, Testing, Training, User Acceptance Testing'] = 'Jeden z rozwoju, Odzyskiwanie katastrof, Ocena, Przedprodukcja, Produkcja, Testowanie, Szkolenie, Testowanie akceptacji użytkownika';

$GLOBALS["lang"]['One of allocated, delegated, planning, reserved, unallocated, unknown, unmanaged. Defaults to allocated.'] = 'Jeden z przydzielonych, przekazanych, zaplanowanych, zarezerwowanych, nieprzydzielonych, nieznanych, niezarządzanych. Domyślnie przydzielone.';

$GLOBALS["lang"]['One of either <code>active directory</code> or <code>openldap</code>.'] = 'Jeden z nich <code>active directory</code> lub <code>openldap</code>.';

$GLOBALS["lang"]['One of: antivirus, backup, firewall, approved, banned, ignored or other.'] = 'Jeden z: antywirusowe, backup, firewall, zatwierdzone, zakazane, ignorowane lub inne.';

$GLOBALS["lang"]['One other item to be careful of - make sure you use the hostname (or fqdn) of your LDAP Server that matches what is in the certificate (not just the LDAP Servers IP address) when creating the LDAP entry in Open-AudIT.'] = 'Jeszcze jeden przedmiot - upewnij się, że używasz nazwy hosta (lub fqdn) swojego LDAP Serwer pasujący do tego, co znajduje się w certyfikacie (nie tylko adres IP serwera LDAP) podczas tworzenia wpisu LDAP w Open- Audit.';

$GLOBALS["lang"]['Online Documentation'] = 'Dokumentacja online';

$GLOBALS["lang"]['Open'] = 'Otwórz';

$GLOBALS["lang"]['Open Data'] = 'Otwarte dane';

$GLOBALS["lang"]['Open Source'] = 'Otwarte źródło';

$GLOBALS["lang"]['Open-AudIT'] = 'Open- Audit';

$GLOBALS["lang"]['Open-AudIT Community source code is available on GitHub. You are encouraged to inspect any code you have concerns about, and because it is open source - you are also encouraged to ask us about any issues you have or report any findings. We are always more than happy to accept code contributions, vulnerability reports, or even simple questions. We are here to help.<br><br>The audit scripts themselves (Windows, Linux, MacOS, et al) are deliberately written in readable native shell script (VBScript for Windows, Bash for *nix). You can see exactly what commands are run. You can remove any commands you feel you do not need. You can ask a third party to inspect the code for you and (if you want to) report any findings.<br><br>Open-AudIT Enterprise performs the add-on commercial functions for Open-AudIT Community. It is included as a single compiled file with no external dependencies. Where Enterprise itself performs the function(s), if you are concerned with any issues Firstwave is happy to work through them with you - just ask! Try that with another commercial software vendor!'] = 'Open- Audit Wspólnotowy kod źródłowy jest dostępny na GitHub. Zachęca się Państwa do sprawdzenia każdego kodu, o który macie obawy, a ponieważ jest to otwarte źródło - zachęca się również do pytania nas o wszelkie kwestie, które macie lub zgłaszają jakiekolwiek ustalenia. Jesteśmy zawsze bardziej niż szczęśliwi akceptując składki kodu, raporty podatności, a nawet proste pytania. Jesteśmy tu, by pomóc.<br/><br/>Sam skrypt audytowy (Windows, Linux, MacOS, et al) jest celowo napisany w czytelnym skrypcie rodzimej powłoki (VBScript for Windows, Bash for * nix). Możesz dokładnie zobaczyć jakie polecenia są uruchamiane. Możesz usunąć dowolne komendy, których nie potrzebujesz. Możesz poprosić osobę trzecią o sprawdzenie kodu dla Ciebie i (jeśli chcesz) zgłosić jakiekolwiek ustalenia.<br/><br/>Open- Audit Firma wykonuje add- na funkcje handlowe dla Open- Audit Wspólnoty. Jest on dołączony jako pojedynczy plik kompilowany bez zewnętrznych zależności. Gdzie Enterprise sam wykonuje funkcję (y), jeśli jesteś zainteresowany jakimikolwiek kwestiami Pierwsza fala jest szczęśliwa, aby pracować przez nich z tobą - wystarczy zapytać! Spróbuj tego z innym komercyjnym sprzedawcą oprogramowania!';

$GLOBALS["lang"]['Open-AudIT Device Selection'] = 'Wybór urządzenia Open- Audit';

$GLOBALS["lang"]['Open-AudIT Enterprise has the ability to choose from a pre-defined list of discovery scan options and also to customise individual options per discovery.'] = 'Open- Audit Enterprise ma możliwość wyboru z wcześniej zdefiniowanej listy możliwości skanowania odkryć, a także dostosowania poszczególnych opcji na odkrycie.';

$GLOBALS["lang"]['Open-AudIT Enterprise. High-scale flexible discovery and audit solution for large networks. All the features of Professional plus: Baselines, File Auditing, Cloud Discovery, Rack Management, Configurable Role Based Access Control including Active Directory and LDAP.'] = 'Audit Enterprise. Wysokiej skali elastyczne rozwiązanie do wykrywania i audytu dużych sieci. Wszystkie funkcje Professional plus: Basic, File Auditing, Cloud Discovery, Rack Management, Configurable Role Based Access Control w tym Active Directory i LDAP.';

$GLOBALS["lang"]['Open-AudIT Field Name'] = 'Nazwa pola Open- Audit';

$GLOBALS["lang"]['Open-AudIT Licenses'] = 'Licencje Open- Audit';

$GLOBALS["lang"]['Open-AudIT Options'] = 'Opcje Open- Audit';

$GLOBALS["lang"]['Open-AudIT Professional and Enterprise include Enhanced Reporting features, including time-based, historical, and muti-query based reporting features in multiple formats.'] = 'Open- Audit Professional i Enterprise zawierają ulepszone funkcje raportowania, w tym funkcje oparte na czasie, historyczne i Muti- query w wielu formatach.';

$GLOBALS["lang"]['Open-AudIT Professional has the ability to choose from a pre-defined list of discovery scan options, per discovery.'] = 'Open- Audit Profesjonalny ma możliwość wyboru z wcześniej zdefiniowanej listy opcji skanowania odkryć, na odkrycie.';

$GLOBALS["lang"]['Open-AudIT Professional. The worlds'] = 'Open- Audit Professional. Świat';

$GLOBALS["lang"]['Open-AudIT can be configured to use LDAP servers (Microsoft Active Directory and/or OpenLDAP) to authenticate and authorize a user and in addition, to create a user account in Open-AudIT using assigned roles and orgs based on LDAP group membership. It can also use'] = 'Open- Aud Informatyka może być skonfigurowana, aby używać serwerów LDAP (Microsoft Active Directory i / lub OpenLDAP) do uwierzytelniania i autoryzowania użytkownika, a ponadto do tworzenia konta użytkownika w Open-Audit przy użyciu przypisanych ról i orgów w oparciu o członkostwo w grupie LDAP. Może również używać';

$GLOBALS["lang"]['Open-AudIT can be run on your server in your data center. It does not need access to the internet at all. Even the installation on Linux where we use the distribution package manager for our prerequisites can be negated by you using an in-house and security team-approved package repository.<br><br>Open-AudIT does not store any of your data in the cloud. Even licensing information can be provided without having to access the internet from the Open-AudIT server.<br><br>Sure, it is easier to allow it to access the internet to download packages (including security fixes) for your distribution, but that is up to you and your security policies. Open-AudIT does not need the internet.'] = 'Open- Aud IT można uruchomić na serwerze w centrum danych. W ogóle nie potrzebuje dostępu do Internetu. Nawet instalacja na Linuksie, w której używamy menedżera pakietów dystrybucyjnych dla naszych warunków wstępnych, może być zaprzeczona przez Ciebie za pomocą repozytorium pakietów wewnątrz domu i bezpieczeństwa.<br/><br/>Open- Aud IT nie przechowuje żadnych danych w chmurze. Nawet informacje licencyjne mogą być dostarczane bez konieczności dostępu do Internetu z serwera Open- Audit.<br/><br/>Jasne, łatwiej jest mu uzyskać dostęp do Internetu, aby pobrać pakiety (w tym poprawki bezpieczeństwa) dla Twojej dystrybucji, ale to zależy od Ciebie i Twojej polityki bezpieczeństwa. Open- Audit nie potrzebuje internetu.';

$GLOBALS["lang"]['Open-AudIT can download, parse and use NIST CVE Vulnerability reports.'] = 'Open- Audit może pobierać, analizować i wykorzystywać raporty NIST CVE.';

$GLOBALS["lang"]['Open-AudIT can show in one of several languages. How you can improve this?'] = 'Open- Aud IT może pokazać się w jednym z kilku języków. Jak możesz to ulepszyć?';

$GLOBALS["lang"]['Open-AudIT can store information in additional fields that are associated with each device.'] = 'Open- Aud Informatyka może przechowywać informacje w dodatkowych polach związanych z każdym urządzeniem.';

$GLOBALS["lang"]['Open-AudIT can use Microsoft Entra (previously known as Microsoft Azure Active Directory) as an authentication method. This means your user in Open-AudIT can click the Logon using Entra button on the logon page and use their Entra credentials to logon. That user will need to already exist within Open-AudIT (and be assigned'] = 'Open-Audit może wykorzystywać Microsoft Entra (wcześniej znany jako Microsoft Azure Active Directory) jako metodę uwierzytelniania. Oznacza to, że użytkownik Open- Audit może kliknąć przycisk Logon za pomocą przycisku Entra na stronie logonu i użyć ich referencji Entra do logonu. Użytkownik ten będzie musiał już istnieć w Open- Audit (i być przypisany';

$GLOBALS["lang"]['Open-AudIT can use OKTA as an authentication method. This means your user in Open-AudIT can click the Logon using OKTA button on the logon page and use their OKTA credentials to logon. That user will need to already exist within Open-AudIT (and be assigned Roles and Orgs), but will not need to remember a separate set of logon credentials.'] = 'Open- Audit może używać OKTA jako metody uwierzytelniania. Oznacza to, że użytkownik w Open-Audit może kliknąć przycisk Logon za pomocą OKTA na stronie logonu i użyć ich referencji OKTA do logonu. Użytkownik ten będzie musiał już istnieć w ramach Open-Audit (i być przypisany Roles i Orgs), ale nie będzie musiał pamiętać oddzielny zestaw logonów.';

$GLOBALS["lang"]['Open-AudIT comes with many queries inbuilt. If you require a specific query and none of the pre-packaged queries fit your needs, it is quite easy to create a new one and load it into Open-AudIT for running.'] = 'Open- Audit pochodzi z wielu pytań wbudowanych. Jeśli potrzebujesz konkretnego zapytania i żadne z wstępnie zapakowanych zapytań nie odpowiada Twoim potrzebom, łatwo jest utworzyć nowy i załadować go do Open- Audit do uruchomienia.';

$GLOBALS["lang"]['Open-AudIT has a JSON Restful API to be used both in the web interface and via JSON requests.'] = 'Open-Audit ma API JSON Restful do użycia zarówno w Interfejsie WWW, jak i za pośrednictwem żądań JSON.';

$GLOBALS["lang"]['Open-AudIT has a granular permissions system to determine what a user within Open-AudIT can do, and the items he can do it to. Open-AudIT can be entirely self-contained, or use Active Directory or OpenLDAP for authentication and/or authorization.<br><br>It is entirely up to the administrator of Open-AudIT how they would like the Role Based Access Control to work.'] = 'Open- Aud IT posiada granulowany system uprawnień, aby określić, co użytkownik w Open- Audit może zrobić, a elementy mogą to zrobić. Open-Audit może być w pełni samodzielny, lub używać Active Directory lub OpenLDAP do uwierzytelniania i / lub autoryzacji.<br/><br/>To zależy wyłącznie od administratora Open- Audit jak chcieliby, aby kontrola dostępu oparta na roli do pracy.';

$GLOBALS["lang"]['Open-AudIT has a powerful change detection engine. Any device attributes that are added, removed or changed will be detected and stored. These changes can be reported upon and the relevant data confirmed as to what was expected from your company change and release process.<br><br>When a device is audited, attributes are divided into sections which correspond to tables in the database.<br><br>Each device (computer, router, printer, et al) has an entry in the <code>devices</code> table. Each entry in the devices table has an <code>id</code> column. This value is unique - it is an auto-incrementing id.<br><br>When the audit result is processed, each item in each section has its audit result compared to what is in the database.<br><br>For each section, if the key columns (see below table) contain the identical values, it is considered already installed and has its <code>last_seen</code> attribute updated. No change_log entry is created.<br><br>If any of the key columns do not match, it is considered a new attribute and is inserted. A <code>change_log</code> entry is created if the device had other attributes already present in the table.<br><br>At the completion of the audit processing, any database items that have not been updated (or inserted) are considered to not be present. The <code>current</code> attribute for this item is set to <i>n</i> and a change_log entry is generated.<br><br>So, we can determine if something is currently installed - the current column is <i>y</i>.<br><br>We can determine when something was initially detected - the <i>first_seen</i>.<br><br>We can determine if something was installed after the initial audit - first seen will be different in the component and device tables.<br><br>We can determine if something is not currently installed, but previously was - current = <i>n</i>.<br><br>We can determine the last time we detected an item - last_seen.<br><br>At any given point, we can determine what was on a system - by using the audit_log table and selecting the relevant components based on first_seen and last_seen.<br><br>Each section and its matching key columns are below.<br><br>NOTE - There are some exceptions as detailed below.<br><br>*1 - For network cards, if the computer is a VMware Esx machine it also uses the net_index and connection columns.<br><br>*2 - For partitions, f the computer is an AIX machine, we use the partition name.'] = 'Open- Aud IT ma potężny silnik wykrywający zmiany. Wszelkie atrybuty urządzenia, które są dodawane, usuwane lub zmieniane, będą wykrywane i przechowywane. Zmiany te mogą być zgłaszane na i odpowiednie dane potwierdzone co do tego, czego oczekiwano od procesu zmiany i wydania firmy.<br/><br/>Podczas badania wyrobu atrybuty są podzielone na sekcje odpowiadające tabelom w bazie danych.<br/><br/>Każde urządzenie (komputer, router, drukarka, i al) posiada wpis w <code>devices</code> stół. Każdy wpis w tabeli urządzeń ma <code>id</code> kolumna. Ta wartość jest unikalna - jest to identyfikator autoprzyrostowy.<br/><br/>W przypadku gdy wynik audytu jest przetwarzany, każda pozycja w każdej sekcji ma wynik audytu w porównaniu z wynikami zawartymi w bazie danych.<br/><br/>Dla każdej sekcji, jeżeli kolumny klawiszy (patrz poniżej tabela) zawierają identyczne wartości, jest ona uważana za już zainstalowaną i posiada <code>last_seen</code> Aktualizacja atrybutu. Nie został utworzony wpis change _ log.<br/><br/>Jeżeli którakolwiek z kolumn kluczy nie pasuje, jest ona uważana za nowy atrybut i jest wstawiana. A <code>change_log</code> wpis jest tworzony, jeśli urządzenie miało inne atrybuty już obecne w tabeli.<br/><br/>Po zakończeniu procesu audytu wszelkie pozycje bazy danych, które nie zostały zaktualizowane (lub dodane), uznaje się za nieobecne. W <code>current</code> atrybut dla tej pozycji jest ustawiony na <i>n</i> i generowany jest wpis change _ log.<br/><br/>Więc możemy określić, czy coś jest aktualnie zainstalowane - obecna kolumna jest <i>y</i>.<br/><br/>Możemy określić, kiedy coś początkowo wykryto - <i>first _ seen</i>.<br/><br/>Możemy określić, czy coś zostało zainstalowane po wstępnym audycie - po raz pierwszy widoczne będą różnice w tabelach komponentów i urządzeń.<br/><br/>Możemy określić, czy coś nie jest aktualnie zainstalowane, ale wcześniej było - current = <i>n</i>.<br/><br/>Możemy ustalić, kiedy ostatnio wykryliśmy przedmiot - ostatni _ widziany.<br/><br/>W dowolnym punkcie możemy określić, co było w systemie - używając tabeli audit _ log i wybierając odpowiednie komponenty w oparciu o first _ seen i last _ seen.<br/><br/>Każda sekcja i jej odpowiadające kolumny klawiszy są poniżej.<br/><br/>UWAGA - Poniżej przedstawiono kilka wyjątków.<br/><br/>* 1 - W przypadku kart sieciowych, jeśli komputer jest maszyną VMware Esx, używa również kolumn netto _ index i połączenia.<br/><br/>* 2 - Dla partycji, f komputer jest maszyną AIX, używamy nazwy partycji.';

$GLOBALS["lang"]['Open-AudIT is a program designed to track and report on your IT and related assets details and configuration. Open-AudIT can tell <i>What is On Your Network?</i>, how it is configured and if there have been any changes. Open-AudIT delivers a sleek, flexible and easy to use platform for device discovery, IT auditing and inventory management automation straight out of the box.'] = 'Open-Audit to program przeznaczony do śledzenia i raportowania danych i konfiguracji Twojego IT i związanych z nim aktywów. Open- Audit może powiedzieć <i>Co jest w Twojej sieci?</i>, jak jest skonfigurowany i jeśli nie było żadnych zmian. Open-Audit zapewnia elegancką, elastyczną i łatwą w użyciu platformę do wyszukiwania urządzeń, audytu IT i automatyzacji zarządzania zapasami bezpośrednio z pudełka.';

$GLOBALS["lang"]['Open-AudIT makes it easy to edit the attributes of multiple devices at once.'] = 'Open- Aud IT ułatwia edycję atrybutów wielu urządzeń jednocześnie.';

$GLOBALS["lang"]['Open-AudIT needs specific directory permissions to be able to create files, upload results, etc. Please set as below.'] = 'Open- Aud IT potrzebuje określonych uprawnień katalogowych, aby móc tworzyć pliki, wysyłać wyniki itp. Proszę ustawić poniżej.';

$GLOBALS["lang"]['Open-AudIT provides many built-in queries and makes it simple to create your own.'] = 'Open-Audit zapewnia wiele built- w zapytaniach i sprawia, że łatwo utworzyć własne.';

$GLOBALS["lang"]['Open-AudIT ships with inbuilt roles for admin, org_admin and user.<br><br>Generally, a user who is an administrator of the Open-AudIT application itself should have admin and possible org_admin roles.<br><br>A user can have multiple roles. The permission will be applied at the most permissive level - IE, if a user has the roles of user and org_admin, they will be able to create locations because org_admin grants this permission, even though the user role does not.<br><br>The admin role allows access to collections such as configuration, database, groups, ldap servers, logs, queries and roles. Global items that affect the entire application.<br><br>The org_admin role usually allows create, read, update and delete actions for any collection that contains the org_id column. Virtually all data except some of the collections mentioned above will contain an <code>org_id</code> column.<br><br>The user role generally allows read only access to all items with an org_id column.'] = 'Open- Aud Statki IT z wbudowanymi rolami dla admin, org _ admin i użytkownika.<br/><br/>Ogólnie rzecz biorąc, użytkownik, który jest administratorem samej aplikacji Open-Audit, powinien posiadać funkcje admin i możliwe org _ admin.<br/><br/>Użytkownik może mieć wiele ról. Zezwolenie będzie stosowane na najbardziej dopuszczalnym poziomie - IE, jeśli użytkownik ma role użytkownika i org _ admin, będą mogli tworzyć lokalizacje, ponieważ org _ admin udziela tego zezwolenia, nawet jeśli rola użytkownika nie.<br/><br/>Funkcja admin umożliwia dostęp do zbiorów, takich jak konfiguracja, baza danych, grupy, serwery ldap, logi, pytania i role. Pozycje globalne, które wpływają na całą aplikację.<br/><br/>Funkcja org _ admin zazwyczaj pozwala tworzyć, czytać, aktualizować i usuwać działania dla dowolnej kolekcji, która zawiera kolumnę org _ id. Praktycznie wszystkie dane z wyjątkiem niektórych zbiorów wymienionych powyżej będą zawierać <code>org_id</code> kolumna.<br/><br/>Rola użytkownika pozwala na czytanie tylko do wszystkich elementów z kolumną org _ id.';

$GLOBALS["lang"]['Open-AudIT ships with inbuilt roles for admin, org_admin and user.<br><br>Generally, a user who is an administrator of the Open-AudIT application itself should have admin and possible org_admin roles.<br><br>A user can have multiple roles. The permission will be applied at the most permissive level - IE, if a user has the roles of user and org_admin, they will be able to create locations because org_admin grants this permission, even though the user role does not.<br><br>The admin role allows access to collections such as configuration, database, groups, ldap servers, logs, queries and roles. Global items that affect the entire application.<br><br>The org_admin role usually allows create, read, update and delete actions for any collection that contains the org_id column. Virtually all data except some of the collections mentioned above will contain an org_id column.<br><br>The user role generally allows read only access to all items with an org_id column.'] = 'Open- Aud Statki IT z wbudowanymi rolami dla admin, org _ admin i użytkownika.<br/><br/>Ogólnie rzecz biorąc, użytkownik, który jest administratorem samej aplikacji Open-Audit, powinien posiadać funkcje admin i możliwe org _ admin.<br/><br/>Użytkownik może mieć wiele ról. Zezwolenie będzie stosowane na najbardziej dopuszczalnym poziomie - IE, jeśli użytkownik ma role użytkownika i org _ admin, będą mogli tworzyć lokalizacje, ponieważ org _ admin udziela tego zezwolenia, nawet jeśli rola użytkownika nie.<br/><br/>Funkcja admin umożliwia dostęp do zbiorów, takich jak konfiguracja, baza danych, grupy, serwery ldap, logi, pytania i role. Pozycje globalne, które wpływają na całą aplikację.<br/><br/>Funkcja org _ admin zazwyczaj pozwala tworzyć, czytać, aktualizować i usuwać działania dla dowolnej kolekcji, która zawiera kolumnę org _ id. Praktycznie wszystkie dane z wyjątkiem niektórych zbiorów wymienionych powyżej będą zawierać kolumnę org _ id.<br/><br/>Rola użytkownika pozwala na czytanie tylko do wszystkich elementów z kolumną org _ id.';

$GLOBALS["lang"]['Open-AudIT ships with several pre-configured Dashboards. If you are a Professional user, you can select between two of these and set it as your default page when you logon. If you are an Enterprise user, you can not only select between the five preconfigured Dashboards, but you also have the ability to create your own.'] = 'Okręty Open-Audit z kilkoma wstępnie skonfigurowanymi tablicami rozdzielczymi. Jeśli jesteś profesjonalnym użytkownikiem, możesz wybrać pomiędzy dwoma z nich i ustawić go jako domyślną stronę podczas logowania. Jeśli jesteś użytkownikiem Enterprise, możesz nie tylko wybrać pomiędzy pięcioma wstępnie skonfigurowanymi tablicami rozdzielczymi, ale również mieć możliwość tworzenia własnych.';

$GLOBALS["lang"]['Open-AudIT should be installed on 64bit Windows <strong>Server</strong> systems only. Windows 10 and Windows 11 are <strong>not</strong> supported.'] = 'Open- Audit powinien być zainstalowany na 64bit Windows <strong>Serwer</strong> Tylko systemy. Windows 10 i Windows 11 <strong>nie</strong> wspierane.';

$GLOBALS["lang"]['Open-AudIT uses Nmap in its Discovery function. Nmap probes devices for open ports. Devices ideally should respond with open for working ports. Devices often do not respond with this. The varying responses are detailed below.'] = 'Open-Audit używa Nmap w funkcji Discovery. Nmap sondy dla otwartych portów. Najlepiej, aby urządzenia odpowiadały otwartymi portami pracy. Urządzenia często nie odpowiadają na to. Zróżnicowane odpowiedzi przedstawiono poniżej.';

$GLOBALS["lang"]['Open-AudIT uses Nmap in its Discovery function. Without Nmap, Open-AudIT will not function correctly. Every Open-AudIT install assumes Nmap is installed and will also test for it on the Discovery web pages. More information about Open-AudIT and Nmap is available here'] = 'Open-Audit używa Nmap w funkcji Discovery. Bez Nmap Open- Audit nie będzie działać poprawnie. Każda instalacja Open-Audit zakłada, że Nmap jest zainstalowana i będzie również testować na stronach internetowych Discovery. Więcej informacji o Open-Audit i Nmap można znaleźć tutaj';

$GLOBALS["lang"]['Open-AudIT uses Nmap in its Discovery function. Without Nmap, Open-AudIT will not function correctly. Every Open-AudIT install assumes Nmap is installed and will test for it on the Discovery web pages.'] = 'Open-Audit używa Nmap w funkcji Discovery. Bez Nmap Open- Audit nie będzie działać poprawnie. Każda instalacja Open- Audit zakłada, że Nmap jest zainstalowany i będzie testować na stronach internetowych Discovery.';

$GLOBALS["lang"]['Open-AudIT uses credentials to access your devices. These are encrypted and stored, just as you would expect.'] = 'Open- Aud Informatyka wykorzystuje dane uwierzytelniające do dostępu do urządzeń. Są zaszyfrowane i przechowywane, tak jak się spodziewałeś.';

$GLOBALS["lang"]['Open-AudIT was written by an English speaking Australian. Everything in the application uses English wording. However Open-AudIT has always supported multiple languages for display. These translations are not always correct, because the developers do not natively speak the language of every translation offered.<br><br>What can you do if something is not correct in the translation?'] = 'Open- Audit został napisany przez Australijczyka mówiącego po angielsku. Wszystko w aplikacji używa angielskiego sformułowania. Jednak Open- Audit zawsze obsługiwał wiele języków na wyświetlaczu. Tłumaczenia te nie zawsze są poprawne, ponieważ deweloperzy nie mówią językiem każdego tłumaczenia oferowanego.<br/><br/>Co można zrobić, jeśli coś nie jest poprawne w tłumaczeniu?';

$GLOBALS["lang"]['OpenLDAP'] = 'OpenLDAP';

$GLOBALS["lang"]['OpenScap is Installed'] = 'OpenScap jest zainstalowany';

$GLOBALS["lang"]['Opening a Support Ticket?'] = 'Otwarcie Biletu Wsparcia?';

$GLOBALS["lang"]['openldap_user_dn'] = 'Openldap Użytkownik Dn';

$GLOBALS["lang"]['Openldap User Dn'] = 'Openldap Użytkownik Dn';

$GLOBALS["lang"]['openldap_user_membership_attribute'] = 'Atrybut członkostwa w Openldap';

$GLOBALS["lang"]['Openldap User Membership Attribute'] = 'Atrybut członkostwa w Openldap';

$GLOBALS["lang"]['open|filtered'] = 'Otwórz blokadę 124; filtrowane';

$GLOBALS["lang"]['Open|filtered'] = 'Otwórz blokadę 124; filtrowane';

$GLOBALS["lang"]['Operating System'] = 'System operacyjny';

$GLOBALS["lang"]['Operating System Family Contains'] = 'System operacyjny Rodzina zawiera';

$GLOBALS["lang"]['Operating Systems'] = 'Systemy operacyjne';

$GLOBALS["lang"]['Operators'] = 'Podmioty gospodarcze';

$GLOBALS["lang"]['optical'] = 'Optyczne';

$GLOBALS["lang"]['Optical'] = 'Optyczne';

$GLOBALS["lang"]['Optimized'] = 'Zoptymalizowane';

$GLOBALS["lang"]['Option #1 - Change the data'] = 'Opcja # 1 - Zmiana danych';

$GLOBALS["lang"]['Option #2 - Change the translation file'] = 'Opcja # 2 - zmiana pliku tłumaczenia';

$GLOBALS["lang"]['Optional Agent Based Auditing'] = 'Audyt fakultatywny agenta';

$GLOBALS["lang"]['Optional version as audited by Open-AudIT. Use the percent sign % as a wildcard.'] = 'Opcjonalna wersja kontrolowana przez Open- Audit. Użyj znaku%% jako dzikiej karty.';

$GLOBALS["lang"]['options'] = 'Opcje';

$GLOBALS["lang"]['Options'] = 'Opcje';

$GLOBALS["lang"]['Options, options, options'] = 'Opcje, opcje, opcje';

$GLOBALS["lang"]['Or'] = 'Lub';

$GLOBALS["lang"]['Or select from the below fields.'] = 'Albo wybierz z poniższych pól.';

$GLOBALS["lang"]['org_descendants'] = 'Osad Org';

$GLOBALS["lang"]['Org Descendants'] = 'Osad Org';

$GLOBALS["lang"]['org_id'] = 'Org ID';

$GLOBALS["lang"]['Org ID'] = 'Org ID';

$GLOBALS["lang"]['Organisation'] = 'Organizacja';

$GLOBALS["lang"]['organisation'] = 'Organizacja';

$GLOBALS["lang"]['Organisation Descendants'] = 'Pomocnicy organizacyjni';

$GLOBALS["lang"]['Organisations'] = 'Organizacje';

$GLOBALS["lang"]['Organisations can extend and enhance the level of detail that is stored against every discovered device using custom fields and the open core allows for easy integration into CMDB, event management and ticketing systems.'] = 'Organizacje mogą rozszerzyć i zwiększyć poziom szczegółowości, który jest przechowywany na każdym odkrytym urządzeniu przy użyciu pól niestandardowych, a otwarty rdzeń pozwala na łatwą integrację z CMDB, zarządzanie zdarzeniami i systemy biletowe.';

$GLOBALS["lang"]['orgs'] = 'Orki';

$GLOBALS["lang"]['Orgs'] = 'Orki';

$GLOBALS["lang"]['Orgs Name'] = 'Orgs Name';

$GLOBALS["lang"]['Orgs in Open-AudIT are a key item. A user has a primary Org as well as a list of Orgs they can access. A user combines this with a list of assigned roles that define what actions they can take on items assigned to the Orgs they have access to. The combination of a users <i>orgs</i> and <i>roles</i> define what they can and cannot do within Open-AudIT.<br><br>Most items in Open-AudIT are assigned to an Org. Devices, Locations, Networks, etc, etc.<br><br>Orgs can have child Orgs. Think of an organisational chart (tree) structure. If a user has access to a specific Org, most of the time (not always) they also have access to that Orgs descendants.'] = 'Orgs in Open- Audit to kluczowy element. Użytkownik posiada pierwotną Org oraz listę Orgów, do których ma dostęp. Użytkownik łączy to z listą przypisanych ról, które określają, jakie działania mogą podjąć na pozycje przypisane do Orgów, do których mają dostęp. Połączenie użytkowników <i>orgi</i> oraz <i>role</i> zdefiniować, co mogą i nie mogą zrobić w ramach Open- Audit.<br/><br/>Większość elementów Open- Audit przypisuje się do Org. Urządzenia, Lokalizacje, Sieci, itp.<br/><br/>Orgs może mieć dzieci Orgs. Pomyśl o strukturze organizacyjnej (drzewo). Jeżeli użytkownik ma dostęp do określonego Orga, większość czasu (nie zawsze) ma również dostęp do potomków Orgów.';

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

$GLOBALS["lang"]['Other than that restriction, you are free to select attributes as required. It is a good idea to use the menu'] = 'Poza tym ograniczeniem możesz wybrać atrybuty w zależności od potrzeb. Dobrze jest skorzystać z menu.';

$GLOBALS["lang"]['Others'] = 'Pozostałe';

$GLOBALS["lang"]['Our default Integration also enables a discovery on any externally supplied devices. So we ship a default discovery for the Default Integration out of the box. These use the default matching rules, but also enable matching on IP address.'] = 'Nasza domyślna integracja umożliwia również odkrycie wszelkich zewnętrznych urządzeń. Więc wysyłamy domyślne odkrycie dla Domyślnej Integracji z pudełka. Używają domyślnych zasad dopasowywania, ale również umożliwiają dopasowanie na adres IP.';

$GLOBALS["lang"]['Our examples will use the <i>type</i> column.'] = 'Nasze przykłady wykorzystamy <i>typ</i> kolumna.';

$GLOBALS["lang"]['Our framework uploads files here for processing, then deletes them. Think submitted audit results, etc.'] = 'Nasze ramy przesyłają pliki tutaj do przetwarzania, a następnie usuwają je. Pomyśl o wynikach audytu, itp.';

$GLOBALS["lang"]['Our goal with the initial integrations release was specifically for NMIS to Open-AudIT integration to <i>just work</i>. If you are using the programs on Linux, you can literally click a single button to execute the integration. Nothing more is required. Having said that, the integration itself is extremely configurable - so if something is not to your preference, it can easily be changed.'] = 'Nasz cel z początkowym wydaniu integracje było specjalnie dla NMIS do Open-Audit integracji <i>Po prostu pracuj</i>. Jeśli używasz programów na Linuksie, możesz dosłownie kliknąć jeden przycisk, aby wykonać integrację. Nic więcej nie jest wymagane. Powiedziawszy to, sama integracja jest niezwykle konfigurowalna - więc jeśli coś nie pasuje do twoich preferencji, można to łatwo zmienić.';

$GLOBALS["lang"]['Our new feature called Vulnerabilities gives you the ability to quickly determine if any devices are affected by any CVE (Common Vulnerability Exposure) - but how?<br><br>FirstWave constantly consumes the output from the Nist NVD feed. We take this and apply a few restrictions, then extract the affected programs and build a SQL query for reporting. Your Open-AudIT instance reaches out to FirstWave and requests any new vulnerabilities on a regular basis. When it receives a new vulnerability record, it is run against the database and the result stored. Each time a device is processed, all matching vulnerabilities are again executed and the result stored. This means when viewing a vulnerability list, we do not need to calculate all affected devices - we already have the result. When you view an individual vulnerability record, we do indeed recalculate the result for this singular vulnerability.<br><br>So, you are always up to date!<br><br>In addition to this, we also calculate the result of all vulnerabilities for all devices daily (usually at a quiet time, say 2am).<br><br>In your instance of Open-AudIT, we allow you to select which vendors you care about. i.e. there is no use retrieving vulnerability records from a vendor whose software you do not use or have installed. By default, our vendor list is Adobe, Apple, Cisco, Google, Microsoft, Mozilla, and Redhat.<br><br>This all sounds very simple, but behind the scenes a <b>lot</b> is going on. For instance, the CVE record contains a list of affected software - but those software names do not match what we receive when we audit a computer. A good example is Apache. Typically, a CVE record will say the affected software is http_server. In reality, this appears as apache2 (Ubuntu), httpd (Redhat), Apache HTTP Server (Windows) - and others. So, we have to first determine what is the actual name of the program we receive when we ask a computer, and there may be multiple names. After that we must parse the CVE record and create a matching SQL statement. Allowing for multiple program names as above, and multiple versions, version ranges, and even multiple different pieces of software (an example is Thunderbird and Firefox in a single CVE). And your instance of Open-AudIT must take this and apply Orgs filtering as well. And that is just a single CVE. What about determining which CVEs you have and do not have? What about adding a vendor to the list later? So many things to consider!<br><br>As well as the usual reporting, we also have a few new widgets available for Dashboards, based on Vulnerabilities data.'] = 'Nasza nowa funkcja o nazwie Wrażliwość daje możliwość szybkiego określenia, czy jakiekolwiek urządzenia są dotknięte przez CVE (Wspólne narażenie na drażliwość) - ale jak?<br/><br/>FirstWave stale zużywa wyjście z Nist NVD. Bierzemy to i stosujemy kilka ograniczeń, następnie wyciągamy dotknięte programy i budujemy zapytanie SQL do raportowania. Twoja instancja Open- Audit dociera do FirstWave i regularnie żąda wszelkich nowych słabych punktów. Po otrzymaniu nowego rekordu podatności, jest uruchamiany z bazy danych i wynik zapisany. Za każdym razem, gdy urządzenie jest przetwarzane, wszystkie pasujące luki są ponownie wykonywane i wynik jest zapisywany. Oznacza to, że podczas przeglądania listy podatności, nie musimy liczyć wszystkich urządzeń dotkniętych - już mamy wynik. Kiedy oglądamy indywidualne dane o podatności na zagrożenia, faktycznie ponownie obliczamy wynik dla tej pojedynczej podatności.<br/><br/>Zawsze jesteś na bieżąco!<br/><br/>Oprócz tego, możemy również obliczyć wynik wszystkich słabych punktów dla wszystkich urządzeń dziennie (zazwyczaj w cichym czasie, powiedzmy 2am).<br/><br/>W przypadku Open- Audit, pozwalamy Ci wybrać, na których sprzedawcach Ci zależy. tzn. nie ma zastosowania do pobierania danych o podatności na zagrożenia od sprzedawcy, którego oprogramowania nie używasz lub nie zainstalowałeś. Domyślnie nasza lista sprzedawców to Adobe, Apple, Cisco, Google, Microsoft, Mozilla i Redhat.<br/><br/>To wszystko brzmi bardzo prosto, ale poza sceną <b>partia</b> To się dzieje. Na przykład zapis CVE zawiera listę oprogramowania, które ma wpływ - ale te nazwy oprogramowania nie pasują do tego, co otrzymujemy podczas audytu komputera. Dobrym przykładem jest Apacz. Zazwyczaj, rekord CVE powie, że dotknięte oprogramowanie jest http _ server. W rzeczywistości pojawia się jako apache2 (Ubuntu), httpd (Redhat), Apache HTTP Server (Windows) - i inne. Najpierw musimy ustalić, jaka jest rzeczywista nazwa programu, który otrzymujemy, kiedy pytamy o komputer i może być wiele nazw. Następnie musimy przetworzyć zapis CVE i utworzyć odpowiednie oświadczenie SQL. Dopuszczalne dla wielu nazw programów, jak powyżej, i wiele wersji, zakresy wersji, a nawet wiele różnych elementów oprogramowania (przykładem jest Thunderbird i Firefox w jednym CVE). A twój przypadek Open- Audit musi wziąć to i zastosować filtrowanie Orgs, jak również. A to jest tylko jedno CVE. A co z określeniem, które CVE masz, a których nie masz? Co z dodaniem sprzedawcy do listy później? Tyle rzeczy do rozważenia!<br/><br/>Oprócz zwykłej sprawozdawczości, mamy również kilka nowych widżetów dostępnych dla tablic rozdzielczych, opartych na danych dotyczących podatności.';

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

$GLOBALS["lang"]['PAExec is a freely-redistributable re-implementation of SysInternal/Microsofts popular PsExec program.  PAExec aims to be a drop in replacement for PsExec, so the command-line usage is identical, with additional options also supported.  This work was originally inspired by Talha Tariqs RemCom.'] = 'PAExec jest swobodną redystrybucją reimplementacji SysInternal / equits popularnego programu PsExec. PAExec ma na celu zmniejszenie zamiany na PsExec, tak więc użycie linii komendant jest identyczne, a dodatkowe opcje również wspierane. Początkowo zainspirowała go Talha Tariqs RemCom.';

$GLOBALS["lang"]['PHP'] = 'PHP';

$GLOBALS["lang"]['POD'] = 'POD';

$GLOBALS["lang"]['POSTing data'] = 'Dane pocztowe';

$GLOBALS["lang"]['Package'] = 'Opakowanie';

$GLOBALS["lang"]['packages'] = 'Opakowania';

$GLOBALS["lang"]['Packages'] = 'Opakowania';

$GLOBALS["lang"]['Packages are used to report on things such as <i>banned software</i>, AntiVirus on servers, etc.<br><br>Open-AudIT provides widgets that build upon also supplied repots to detemine the status of antivirus, firewall and other software.'] = 'Pakiety są wykorzystywane do zgłaszania takich rzeczy jak <i>zakazane oprogramowanie</i>, AntiVirus na serwerach itp.<br/><br/>Open-Audit zapewnia widżety, które opierają się na dostarczanych dotacjach, aby wyłączyć status programu antywirusowego, firewall i innego oprogramowania.';

$GLOBALS["lang"]['pagefile'] = 'Pagefile';

$GLOBALS["lang"]['Pagefile'] = 'Pagefile';

$GLOBALS["lang"]['Pakistan'] = 'Pakistan';

$GLOBALS["lang"]['Palau'] = 'Palau';

$GLOBALS["lang"]['Palestinian Territory'] = 'Terytorium Palestyńskie';

$GLOBALS["lang"]['Panama'] = 'Panama';

$GLOBALS["lang"]['Papua New Guinea'] = 'Papua-Nowa Gwinea';

$GLOBALS["lang"]['Paraguay'] = 'Paragwaj';

$GLOBALS["lang"]['Parameters'] = 'Parametry';

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

$GLOBALS["lang"]['Permission'] = 'Zezwolenie';

$GLOBALS["lang"]['Permission Required'] = 'Wymagane pozwolenie';

$GLOBALS["lang"]['permissions'] = 'Uprawnienia';

$GLOBALS["lang"]['Permissions'] = 'Uprawnienia';

$GLOBALS["lang"]['Persian'] = 'Perski';

$GLOBALS["lang"]['Personal Area Network'] = 'Osobista sieć obszarowa';

$GLOBALS["lang"]['Personal area network'] = 'Osobista sieć obszarowa';

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

$GLOBALS["lang"]['Pie charts must return name or my_name, description or my_description and count.'] = 'Wykresy Pie muszą zwracać nazwę lub moją _ nazwę, opis lub moją _ opis i liczyć.';

$GLOBALS["lang"]['ping'] = 'Ping';

$GLOBALS["lang"]['Ping'] = 'Ping';

$GLOBALS["lang"]['Ping Target'] = 'Cel Ping';

$GLOBALS["lang"]['Pitcairn Islands'] = 'Wyspy Pitcairn';

$GLOBALS["lang"]['placement'] = 'Umieszczenie';

$GLOBALS["lang"]['Placement'] = 'Umieszczenie';

$GLOBALS["lang"]['Plan and conduct internal audits'] = 'Planowanie i przeprowadzanie audytów wewnętrznych';

$GLOBALS["lang"]['Please have an Open-AudIT administrator logon and upgrade the database.'] = 'Proszę mieć Open- Audit administrator logon i uaktualnić bazę danych.';

$GLOBALS["lang"]['Please log in and change these ASAP.'] = 'Zaloguj się i zmień je jak najszybciej.';

$GLOBALS["lang"]['Please log on to the Open-AudIT Server (either Windows or Linux) and run <code>nslookup IP_ADDRESS_OF_TARGET</code> in the command prompt or shell. It must be able to resolve the IP to a name.'] = 'Proszę zalogować się do Open- Audit Server (Windows lub Linux) i uruchomić <code>nslookup IP_ADDRESS_OF_TARGET</code> w instrukcji komendy lub powłoki. Musi być w stanie rozwiązać IP do nazwy.';

$GLOBALS["lang"]['Please note that the select box will override the text input box.'] = 'Uwaga: pole wyboru obejmie pole wprowadzania tekstu.';

$GLOBALS["lang"]['Please see the FAQ'] = 'Proszę zobaczyć FAQ';

$GLOBALS["lang"]['Please send all three files to your support contact at Opmantek and describe your issue.'] = 'Proszę wysłać wszystkie trzy pliki do kontaktu wsparcia w Opmantek i opisać swój problem.';

$GLOBALS["lang"]['Please set using'] = 'Proszę ustawić';

$GLOBALS["lang"]['Please visit the homepage at'] = 'Odwiedź stronę główną';

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

$GLOBALS["lang"]['Polish'] = 'Polski';

$GLOBALS["lang"]['Polite'] = 'Polit';

$GLOBALS["lang"]['Populate the with values provided below:'] = 'Należy stosować wartości podane poniżej:';

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

$GLOBALS["lang"]['Portuguese'] = 'Portugalski';

$GLOBALS["lang"]['Portuguese (Brazil)'] = 'Portugalski (Brazylia)';

$GLOBALS["lang"]['position'] = 'Pozycja';

$GLOBALS["lang"]['Position'] = 'Pozycja';

$GLOBALS["lang"]['Post-Certification'] = 'Po certyfikacji';

$GLOBALS["lang"]['postcode'] = 'Kod pocztowy';

$GLOBALS["lang"]['Postcode'] = 'Kod pocztowy';

$GLOBALS["lang"]['power_circuit'] = 'Obwód zasilania';

$GLOBALS["lang"]['Power Circuit'] = 'Obwód zasilania';

$GLOBALS["lang"]['power_sockets'] = 'Gniazdo zasilania';

$GLOBALS["lang"]['Power Sockets'] = 'Gniazdo zasilania';

$GLOBALS["lang"]['Predictable'] = 'Przewidywalne';

$GLOBALS["lang"]['Preferences'] = 'Ustawienia';

$GLOBALS["lang"]['Prepare for recertification every 3 years'] = 'Przygotowanie do ponownej certyfikacji co 3 lata';

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

$GLOBALS["lang"]['Privacy Protocol'] = 'Protokół w sprawie prywatności';

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

$GLOBALS["lang"]['Professional'] = 'Profesjonalne';

$GLOBALS["lang"]['profile'] = 'Profil';

$GLOBALS["lang"]['Profile'] = 'Profil';

$GLOBALS["lang"]['program'] = 'Program';

$GLOBALS["lang"]['Program'] = 'Program';

$GLOBALS["lang"]['Properties'] = 'Właściwości';

$GLOBALS["lang"]['Proprietary. If you want to modify HighCharts you may require a'] = 'Zasłużony. Jeśli chcesz zmodyfikować HighCharts możesz wymagać';

$GLOBALS["lang"]['Protects confidentiality, integrity, and availability of information'] = 'Ochrona poufności, integralności i dostępności informacji';

$GLOBALS["lang"]['protocol'] = 'Protokół';

$GLOBALS["lang"]['Protocol'] = 'Protokół';

$GLOBALS["lang"]['Provide a description and select and expires duration.'] = 'Należy podać opis oraz wybrać i upłynąć czas trwania.';

$GLOBALS["lang"]['Provide a name - we humbly recommand Open-AudIT &#128512;, but you can name it anything you like.<br>From the Open-AudIT form, copy the value for the <i>Redirect URI</i> field and paste it into the <i>Sign-in redirect URIs</i> field in OKTA.<br>The Sign-out redirect URIs is optional, but if you want you can use open-audit/index.php/logout with your Open-AudIT servers http address, as per the screenshot.<br>Normally your Open-AudIT URL will look something like'] = 'aktówa = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = =] = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = =] = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = = =, w], w], w], w], w], w], w], w], w nocy, w nocy, w nocy, w nocy, w nocy, w nocy, w nocy, w nocy, w nocy, w nocy, w nocy, w nocy, w nocy, w nocy, w szczególności w szczególności w, w, w sprawie z, z, w, w, w,, w, w sprawie z z,, z, z,<br/>Z formularza Open- Audit skopiuj wartość dla <i>Przekieruj URI</i> pola i wkleić go do <i>Sygnał w przekierowaniu URI</i> Pole w OKTA.<br/>Sign- out redirect URI jest opcjonalne, ale jeśli chcesz możesz użyć open- audit / index. php / logout z serwerami Open- Audit http adres, zgodnie z zrzutem ekranu.<br/>Zazwyczaj URL Open- Audit będzie wyglądał jakoś jak';

$GLOBALS["lang"]['Provided you have the correct credentials, Device Seed Discovery works as follows'] = 'Pod warunkiem, że posiadasz odpowiednie kwalifikacje, odkrycie materiału siewnego działa następująco:';

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

$GLOBALS["lang"]['Queries are an important part of Open-AudIT. They are what enables you to get meaningful information from all the device data you have discovered. Along with summaries and groups, they provide a powerful mechanism to extract crucial information.'] = 'Pytania są ważną częścią Open- Audit. Dzięki nim można uzyskać znaczące informacje ze wszystkich odkrytych danych. Oprócz podsumowań i grup, stanowią one potężny mechanizm uzyskiwania kluczowych informacji.';

$GLOBALS["lang"]['Queries for Groups should select only the'] = 'Zapytania dla grup powinny wybrać tylko';

$GLOBALS["lang"]['Query'] = 'Pytania';

$GLOBALS["lang"]['Query this Active Directory attribute first to determine the users work unit.'] = 'Zapytanie atrybutu Active Directory w celu określenia jednostki roboczej użytkowników.';

$GLOBALS["lang"]['Query this Active Directory attribute second to determine the users work unit.'] = 'Sprawdź atrybut Active Directory drugi, aby określić jednostkę roboczą użytkowników.';

$GLOBALS["lang"]['queue'] = 'Kolejka';

$GLOBALS["lang"]['Queue'] = 'Kolejka';

$GLOBALS["lang"]['Queue Limit'] = 'Granica kolejki';

$GLOBALS["lang"]['Queued Device Audits'] = 'Audyty urządzeń w kolejce';

$GLOBALS["lang"]['Queued IP Scans'] = 'Skan IP w kolejce';

$GLOBALS["lang"]['Queued Items'] = 'Pozycje w kolejce';

$GLOBALS["lang"]['RBAC for Active Directory and openLDAP'] = 'RBAC dla Active Directory i openLDAP';

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

$GLOBALS["lang"]['Rack Management and Reporting'] = 'Zarządzanie rack i sprawozdawczość';

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

$GLOBALS["lang"]['Read through the log file at'] = 'Przeczytaj przez plik dziennika w';

$GLOBALS["lang"]['Received'] = 'Otrzymane';

$GLOBALS["lang"]['Recently we have been asked the question - do you consider Open-AudIT more secure than other similar programs? As with most things, the answer is <i>it depends</i>.<br><br>Open-AudIT can be operated in such a way as to be extremely secure. But as usual with computer-based security, the more secure you wish to make something, the more inconvenient it becomes to use. The old phrase <i>the most secure computer is one that is turned off and in the cupboard<i> comes to mind.<br><br>Below we will outline some options that can be used with Open-AudIT that will increase security. Like most items within Open-AudIT, these are options and not mandatory. How far you take security is up to you.'] = 'Ostatnio zadano nam pytanie - czy uważa Pan Open- Audit za bardziej bezpieczne niż inne podobne programy? Tak jak w większości rzeczy, odpowiedź brzmi: <i>zależy</i>.<br/><br/>Open- Aud Informatyka może być obsługiwana w taki sposób, aby była wyjątkowo bezpieczna. Ale jak zwykle z zabezpieczeń komputerowych, im bardziej bezpieczne chcesz coś zrobić, tym bardziej niewygodne staje się wykorzystanie. Stare zdanie <i>najbardziej bezpieczny komputer jest ten, który jest wyłączony i w szafce<i> przychodzi mi do głowy.<br/><br/>Poniżej przedstawimy kilka opcji, które mogą być używane z Open- Audit, które zwiększą bezpieczeństwo. Podobnie jak większość elementów Open- Audit, są to opcje i nie są obowiązkowe. Jak daleko zajmiesz się ochroną, zależy od ciebie.</i></i>';

$GLOBALS["lang"]['Recertification:</strong> Required every three years'] = 'Recertyfikacja: Wymagane co trzy lata';

$GLOBALS["lang"]['Red Query'] = 'Czerwone zapytanie';

$GLOBALS["lang"]['Redirect URI'] = 'Przekieruj URI';

$GLOBALS["lang"]['redirect_uri'] = 'Przekieruj Uri';

$GLOBALS["lang"]['Redirect Uri'] = 'Przekieruj Uri';

$GLOBALS["lang"]['Reduces risk of data breaches and cyber threats'] = 'Zmniejszenie ryzyka naruszenia danych i zagrożeń cybernetycznych';

$GLOBALS["lang"]['references'] = 'Odniesienia';

$GLOBALS["lang"]['References'] = 'Odniesienia';

$GLOBALS["lang"]['region'] = 'Region';

$GLOBALS["lang"]['Region'] = 'Region';

$GLOBALS["lang"]['registered_user'] = 'Zarejestrowany użytkownik';

$GLOBALS["lang"]['Registered User'] = 'Zarejestrowany użytkownik';

$GLOBALS["lang"]['Rejected'] = 'Odrzucone';

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

$GLOBALS["lang"]['Repeat until you have a completely discovered and audited Windows PC.'] = 'Powtarzaj dopóki nie masz całkowicie odkryte i kontrolowane Windows PC.';

$GLOBALS["lang"]['Report'] = 'Sprawozdanie';

$GLOBALS["lang"]['Report on your devices, networks and more'] = 'Raport na temat urządzeń, sieci i więcej';

$GLOBALS["lang"]['reportable'] = 'Zgłaszane';

$GLOBALS["lang"]['Reportable'] = 'Zgłaszane';

$GLOBALS["lang"]['Reports'] = 'Sprawozdania';

$GLOBALS["lang"]['request'] = 'Wniosek';

$GLOBALS["lang"]['Request'] = 'Wniosek';

$GLOBALS["lang"]['Request Method'] = 'Metoda wniosku';

$GLOBALS["lang"]['Request Vulnerability'] = 'Prośba o drażliwość';

$GLOBALS["lang"]['Request a Specific CVE'] = 'Wniosek CVE';

$GLOBALS["lang"]['requested'] = 'Wymagane';

$GLOBALS["lang"]['Requested'] = 'Wymagane';

$GLOBALS["lang"]['require_port'] = 'Wymagany port';

$GLOBALS["lang"]['Require Port'] = 'Wymagany port';

$GLOBALS["lang"]['Require an Open Port'] = 'Wymagany otwarty port';

$GLOBALS["lang"]['Required'] = 'Wymagane';

$GLOBALS["lang"]['Required AWS user permissions'] = 'Wymagane uprawnienia użytkownika AWS';

$GLOBALS["lang"]['Required Fields'] = 'Wymagane pola';

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

$GLOBALS["lang"]['Resulting Function'] = 'Funkcja zakończenia';

$GLOBALS["lang"]['Results'] = 'Wyniki';

$GLOBALS["lang"]['Retrieve a list of devices in the'] = 'Pobieranie listy urządzeń';

$GLOBALS["lang"]['Retrieve a list of devices with OS Name like Windows 2008'] = 'Pobierz listę urządzeń z OS Nazwa jak Windows 2008';

$GLOBALS["lang"]['Retrieve all details about the device with id 88.'] = 'Pobierz wszystkie szczegóły dotyczące urządzenia z id 88.';

$GLOBALS["lang"]['Retrieve all devices running Windows.'] = 'Pobieranie wszystkich urządzeń uruchamiających system Windows.';

$GLOBALS["lang"]['Retrieve all devices with the standard columns'] = 'Pobieranie wszystkich urządzeń za pomocą standardowych kolumn';

$GLOBALS["lang"]['Retrieve the first 10 devices running Windows ordered by hostname'] = 'Pobieranie pierwszych 10 urządzeń uruchamiających Windows zamawianych przez hostname';

$GLOBALS["lang"]['Retrieve the properties id, ip, hostname, domain, type from all devices'] = 'Pobieranie właściwości id, ip, hostname, domain, typ ze wszystkich urządzeń';

$GLOBALS["lang"]['retrieved'] = 'Odzyskiwane';

$GLOBALS["lang"]['Retrieved'] = 'Odzyskiwane';

$GLOBALS["lang"]['retrieved_ident'] = 'Odzyskany Ident';

$GLOBALS["lang"]['Retrieved Ident'] = 'Odzyskany Ident';

$GLOBALS["lang"]['retrieved_name'] = 'Nazwa pobrana';

$GLOBALS["lang"]['Retrieved Name'] = 'Nazwa pobrana';

$GLOBALS["lang"]['Retrieved from the device - Windows:Win32_ComputerSystemProduct, Linux:dmidecode, MacOS:system_profiler, ESXi:vim-cmd hostsvc/hostsummary, HP-UX:machinfo, Solaris:smbios, AIX:uname.'] = 'Pobierany z urządzenia - Windows: Win32 _ ComputerSystemProduct, Linux: dmidecode, MacOS: system _ profiler, ESXi: vim- cmd hostsvc / hoststream, HP- UX: machinfo, Solaris: smbios, AIX: uname.';

$GLOBALS["lang"]['Retrieving a List of Credentials'] = 'Pobieranie listy zasług';

$GLOBALS["lang"]['Retrieving or Creating'] = 'Pobieranie lub tworzenie';

$GLOBALS["lang"]['Return a collection of devices with the default set of columns (devices.id, devices.icon, devices.type, devices.name, devices.ip, devices.dns_fqdn, devices.identification, devices.description, devices.manufacturer, devices.os_family, devices.status)'] = 'Zwróć kolekcję urządzeń z domyślnym zestawem kolumn (devices.id, devices.icon, devices.type, devices.name, devices.ip, devices.dns _ fqdn, devices.identification, devices.devices.devices.devices.exactor, devices.os _ family, devices.status)';

$GLOBALS["lang"]['Return a list of all Modules installed on Routers'] = 'Zwróć listę wszystkich modułów zainstalowanych na Routers';

$GLOBALS["lang"]['Return an individual device details'] = 'Zwróć indywidualne urządzenie\\';

$GLOBALS["lang"]['Returns a list of {collection}.'] = 'Zwraca listę {collection}.';

$GLOBALS["lang"]['Returns a {collection} details.'] = 'Zwraca szczegóły {collection}.';

$GLOBALS["lang"]['Reunion'] = 'Reunion';

$GLOBALS["lang"]['Review current practices against ISO 27001 requirements'] = 'Przegląd obecnych praktyk pod kątem wymogów ISO 27001';

$GLOBALS["lang"]['revision'] = 'Przegląd';

$GLOBALS["lang"]['Revision'] = 'Przegląd';

$GLOBALS["lang"]['risk_assesment_result'] = 'Wynik oceny ryzyka';

$GLOBALS["lang"]['Risk Assesment Result'] = 'Wynik oceny ryzyka';

$GLOBALS["lang"]['Risk Assessment & Treatment'] = 'Ocena ryzyka i leczenie';

$GLOBALS["lang"]['Risk Management'] = 'Zarządzanie ryzykiem';

$GLOBALS["lang"]['Role'] = 'Rola';

$GLOBALS["lang"]['roles'] = 'Role';

$GLOBALS["lang"]['Roles'] = 'Role';

$GLOBALS["lang"]['Roles can only be created and edited if you have an Open-AudIT Enterprise license. For most users, the default set of Roles should be all that is required.'] = 'Role mogą być tworzone i edytowane tylko wtedy, gdy posiadasz licencję Open- Audit Enterprise. Dla większości użytkowników, domyślny zestaw Roles powinien być wszystkim, co jest wymagane.';

$GLOBALS["lang"]['Romania'] = 'Rumunia';

$GLOBALS["lang"]['Romanian'] = 'Rumuński';

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

$GLOBALS["lang"]['Rules are created and run against a device when the device is discovered or an audit result is processed. Rules can be used to set a device attribute based on other attributes.<br><br>NOTE - At present we cannot delete a rule input or output that contains a /. This is because the framework is parsing the / as part of the URL and returning a 404, even before our code runs. The work-around for this is to delete the Rule itself, then recreate the inputs and outputs as required. Fortunately inputs and outputs that contain a / are rare (indeed, none exist by default).'] = 'Zasady są tworzone i uruchamiane przeciwko urządzeniu, gdy urządzenie jest wykrywane lub wynik audytu jest przetwarzany. Zasady mogą być używane do ustawiania atrybutu urządzenia w oparciu o inne atrybuty.<br/><br/>UWAGA - Obecnie nie możemy usunąć wejścia lub wyjścia z reguły, które zawiera a /. Wynika to z faktu, że ramy są częścią URL i zwracają 404, nawet przed uruchomieniem kodu. Praca w tym celu polega na usunięciu samej Reguły, a następnie odtworzeniu wejść i wyjść zgodnie z wymaganiami. Na szczęście wejścia i wyjścia, które zawierają a / są rzadkie (rzeczywiście nie istnieją domyślnie).';

$GLOBALS["lang"]['Run Discovery'] = 'Uruchom Odkrywanie';

$GLOBALS["lang"]['Run Discovery on Devices'] = 'Uruchom wykrywanie urządzeń';

$GLOBALS["lang"]['Run Your Discovery'] = 'Uruchom Odkrycie';

$GLOBALS["lang"]['Run a Command'] = 'Uruchom polecenie';

$GLOBALS["lang"]['Run a discovery and find out <b>Whats On Your Network?</b>'] = 'Uruchom odkrycie i dowiedz się <b>Co jest w twojej sieci?</b>';

$GLOBALS["lang"]['Run the script by typing <code>cscript test_windows_client.vbs</code> in the console.'] = 'Uruchom skrypt wpisując <code>cscript test_windows_client.vbs</code> w konsoli.';

$GLOBALS["lang"]['Run this Command'] = 'Uruchom to polecenie';

$GLOBALS["lang"]['runas'] = 'Runas';

$GLOBALS["lang"]['Runas'] = 'Runas';

$GLOBALS["lang"]['Running'] = 'Uruchomienie';

$GLOBALS["lang"]['Running Open-AudIT Apache Service Under Windows'] = 'Uruchomienie usługi Open- Audit Apache pod systemem Windows';

$GLOBALS["lang"]['Russian'] = 'Rosyjski';

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

$GLOBALS["lang"]['SAN Audit'] = 'SAN Audit';

$GLOBALS["lang"]['SAN Auto-Discover'] = 'SAN Auto- Discover';

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

$GLOBALS["lang"]['SQL not containing this condition will result in the widget failing to be executed.'] = 'SQL niezawierający tego warunku spowoduje niewykonanie widgetu.';

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

$GLOBALS["lang"]['Save and run the file. Make sure you run the file as an Administrator in order to install it (right click, Run as Administrator).'] = 'Zapisz i uruchom plik. Upewnij się, że uruchomisz plik jako Administrator w celu jego zainstalowania (kliknij prawym przyciskiem myszy, Uruchom jako Administrator).';

$GLOBALS["lang"]['Save as Default'] = 'Zapisz jako domyślne';

$GLOBALS["lang"]['Save the downloaded file.'] = 'Zapisz pobrany plik.';

$GLOBALS["lang"]['scaling'] = 'Skalowanie';

$GLOBALS["lang"]['Scaling'] = 'Skalowanie';

$GLOBALS["lang"]['scan_options'] = 'Opcje skanowania';

$GLOBALS["lang"]['Scan Options'] = 'Opcje skanowania';

$GLOBALS["lang"]['Scan Options ID'] = 'Identyfikator opcji skanowania';

$GLOBALS["lang"]['Scan for this port(s) and if detected open, use this port for SSH communication. This is added to the list of Custom TCP Ports above (if not already included), so there is no need to include it in that list as well. Comma seperated, no spaces.'] = 'Skanuj dla tego (-ych) portu (-ów) i jeśli zostanie wykryty otwarty, użyj tego portu do komunikacji SSH. Jest to dodawane do listy Custom TCP Ports powyżej (o ile nie zostały jeszcze włączone), więc nie ma potrzeby włączania go również do tej listy. Przecinek seperacyjny, brak przestrzeni.';

$GLOBALS["lang"]['Scan the Nmap top number of TCP ports.'] = 'Przeskanuj górną liczbę portów TCP Nmap.';

$GLOBALS["lang"]['Scan the Nmap top number of UDP ports.'] = 'Przeskanuj górną liczbę portów UDP Nmap.';

$GLOBALS["lang"]['schedule'] = 'Schemat';

$GLOBALS["lang"]['Schedule'] = 'Schemat';

$GLOBALS["lang"]['Scheduled device discovery and reporting make Open-AudIT Professional an efficient solution for busy IT professionals looking to reduce overheads and increase insights.'] = 'Planowane odkrywanie urządzeń i raportowanie sprawiają, że Open- Audit Professional wydajne rozwiązanie dla zajętych specjalistów IT, chcąc zmniejszyć koszty ogólne i zwiększyć spostrzeżenia.';

$GLOBALS["lang"]['Scheduling - discovery, reporting &amp; more'] = 'Harmonogram - odkrywanie, raportowanie i więcej';

$GLOBALS["lang"]['scope'] = 'Zakres';

$GLOBALS["lang"]['Scope'] = 'Zakres';

$GLOBALS["lang"]['Scope is known as Authorization Scope, representing whether a vulnerability affects resources beyond the original security authority of the vulnerable component.<br><br>The only two valid values for this attribute are'] = 'Zakres jest znany jako zakres autoryzacji, reprezentujący to, czy podatność na zagrożenia wpływa na zasoby wykraczające poza pierwotny organ bezpieczeństwa słabego komponentu.<br/><br/>Jedyne dwie ważne wartości dla tego atrybutu to:';

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

$GLOBALS["lang"]['Searching Using DataTables'] = 'Wyszukiwanie przy użyciu tabel danych';

$GLOBALS["lang"]['Second'] = 'Drugi';

$GLOBALS["lang"]['secondary'] = 'Wtórne';

$GLOBALS["lang"]['Secondary'] = 'Wtórne';

$GLOBALS["lang"]['Secondary Text'] = 'Tekst drugorzędny';

$GLOBALS["lang"]['Secret Key'] = 'Tajny klucz';

$GLOBALS["lang"]['section'] = 'Sekcja';

$GLOBALS["lang"]['Section'] = 'Sekcja';

$GLOBALS["lang"]['secure'] = 'Bezpieczne';

$GLOBALS["lang"]['Secure'] = 'Bezpieczne';

$GLOBALS["lang"]['Security Content Automation Protocol'] = 'Protokół automatyzacji zawartości bezpieczeństwa';

$GLOBALS["lang"]['Security Level'] = 'Poziom bezpieczeństwa';

$GLOBALS["lang"]['Security Name'] = 'Nazwa bezpieczeństwa';

$GLOBALS["lang"]['Security Status'] = 'Status bezpieczeństwa';

$GLOBALS["lang"]['security_zone'] = 'Obszar bezpieczeństwa';

$GLOBALS["lang"]['Security Zone'] = 'Obszar bezpieczeństwa';

$GLOBALS["lang"]['See above. NOTE - This could also be caused by a self-signed certificate on the LDAP server. We are working to allow for this in a future release.'] = 'Patrz powyżej. UWAGA - Może to być również spowodowane przez autodestrukcję certyfikatu na serwerze LDAP. Pracujemy nad tym, aby umożliwić to w przyszłym wydaniu.';

$GLOBALS["lang"]['See our page on enabling'] = 'Zobacz naszą stronę o możliwości';

$GLOBALS["lang"]['Seed Discoveries'] = 'Odkrycia nasion';

$GLOBALS["lang"]['seed_ip'] = 'Nasienie IP';

$GLOBALS["lang"]['Seed IP'] = 'Nasienie IP';

$GLOBALS["lang"]['seed_ping'] = 'Nasiona Ping';

$GLOBALS["lang"]['Seed Ping'] = 'Nasiona Ping';

$GLOBALS["lang"]['seed_restrict_to_private'] = 'Seed Restrict To Private';

$GLOBALS["lang"]['Seed Restrict To Private'] = 'Seed Restrict To Private';

$GLOBALS["lang"]['seed_restrict_to_subnet'] = 'Seed Restrict To Subnet';

$GLOBALS["lang"]['Seed Restrict To Subnet'] = 'Seed Restrict To Subnet';

$GLOBALS["lang"]['Select'] = 'Wybierz';

$GLOBALS["lang"]['Select Admin -> Tasks -> Create Task from the menu.'] = 'Wybierz admin - > Zadania Utwórz Zadanie z menu.';

$GLOBALS["lang"]['Select All'] = 'Wybierz wszystkie';

$GLOBALS["lang"]['Select All Devices'] = 'Wybierz wszystkie urządzenia';

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

$GLOBALS["lang"]['Select Menu -> Manage -> Baselines -> List Baselines.'] = 'Wybierz menu - > Zarządzanie - > Linie bazowe - > Linie bazowe listy.';

$GLOBALS["lang"]['Select a Table'] = 'Wybierz tabelę';

$GLOBALS["lang"]['Select an accredited certification body'] = 'Wybierz akredytowany organ certyfikujący';

$GLOBALS["lang"]['Select and apply appropriate controls (Annex A)'] = 'Wybrać i zastosować odpowiednie kontrole (załącznik A)';

$GLOBALS["lang"]['Select the <i>COM Security</i> tab<br><br>Click on Access Permissions Edit Default'] = 'Wybierz <i>KOM Bezpieczeństwo</i> tab<br/><br/>Kliknij na uprawnienia dostępu Edycja domyślna';

$GLOBALS["lang"]['Select the <i>Sign On</i> tab and copy the value for <i>Issuer</i> (just the URL itself). Paste this into the Open-AudIT <i>Issuer</i> field.'] = 'Wybierz <i>Wpisz</i> tab i skopiuj wartość dla <i>Emitent</i> (tylko sam adres URL). Wklej to do Open- Audit <i>Emitent</i> Pole.';

$GLOBALS["lang"]['Select the <i>This Account</i> checkbox and provide the account name and password.'] = 'Wybierz <i>Niniejsze konto</i> pole wyboru i podać nazwę konta i hasło.';

$GLOBALS["lang"]['Select the Start menu and type <i>services<.i>. Click the Services icon.'] = 'Wybierz menu Start i wpisz <i>usługi < .i >. Kliknij ikonę Usług.</i>';

$GLOBALS["lang"]['Select the type of Auth Menthod to create and input the relevant details.'] = 'Wybierz typ Auth Menthod, aby utworzyć i wprowadzić odpowiednie szczegóły.';

$GLOBALS["lang"]['Self Delete'] = 'Samo Usuń';

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

$GLOBALS["lang"]['Servers Only'] = 'Tylko serwery';

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

$GLOBALS["lang"]['Service Under Windows'] = 'Serwis w systemie Windows';

$GLOBALS["lang"]['service_version'] = 'Wersja serwisowa';

$GLOBALS["lang"]['Service Version'] = 'Wersja serwisowa';

$GLOBALS["lang"]['Set'] = 'Ustaw';

$GLOBALS["lang"]['set_by'] = 'Set by';

$GLOBALS["lang"]['Set By'] = 'Set by';

$GLOBALS["lang"]['Set by the Discovery function - do not normally set this manually.'] = 'Ustawienie funkcji Discovery - nie ustawiać tego ręcznie.';

$GLOBALS["lang"]['Set by the audit_domain or discover_domain scripts. Do not set.'] = 'Ustawienie przy pomocy skryptów audit _ domain lub discover _ domain. Nie ustawiać.';

$GLOBALS["lang"]['Set the external text to capitalized version of the internal data.'] = 'Ustaw tekst zewnętrzny na skapitalizowaną wersję danych wewnętrznych.';

$GLOBALS["lang"]['Set the external text to lowercase.'] = 'Ustaw tekst zewnętrzny na mniejszy.';

$GLOBALS["lang"]['Set the external text to uppercase.'] = 'Ustaw tekst zewnętrzny na wyższy.';

$GLOBALS["lang"]['Set the size (normal or compact) of the tables on the List screens.'] = 'Ustaw rozmiar (normalny lub kompaktowy) tabel na ekranie listy.';

$GLOBALS["lang"]['Set this if you wish to insert systems from AD that may not be contactable, but have been seen by AD since that date.'] = 'Ustaw to, jeśli chcesz wprowadzić systemy z AD, które mogą nie być stykalne, ale były widoczne przez AD od tej daty.';

$GLOBALS["lang"]['Setting up Discovery on a subnet is almost identical to running a regular Discovery via the web interface. The only additional items are the scheduled hour and day(s) and a name for the Scheduled Task itself. You can take advantage of this to schedule multiple discoveries using different sets of credentials.<br><br>As per the Subnet Discovery, the Active Directory Discovery is also simply the same fields as a regular Active Directory Discovery with the addition of a day, hour(s) and name.<br><br>If the Open-AudIT Server has Collectors reporting to it, an additional drop down is provided. You can select this to specify which Collector the task should run on. Only Discovery tasks are supported for Collectors. Specify the same items as a regular Discovery, but provide the alternate Collector to run this task.'] = 'Konfigurowanie Discovery na podsieci jest prawie identyczne z uruchomieniem zwykłego Discovery poprzez interfejs internetowy. Jedyne dodatkowe elementy to planowana godzina i dzień (dni) oraz nazwa zaplanowanego zadania. Można skorzystać z tego, aby zaplanować wiele odkryć przy użyciu różnych zestawów uprawnień.<br/><br/>Jak w Subnet Discovery, Active Directory Discovery jest również po prostu takie same pola jak regularne Active Directory Discovery z dodatkiem dnia, godziny (s) i nazwy.<br/><br/>Jeżeli Open- Audit Server ma raportujące do niego kolektory, jest dostarczony dodatkowy spadek. Możesz wybrać to, aby określić, na którym Kolekcjoner zadanie powinno być uruchomione. Tylko zadania Discovery są obsługiwane dla Kolekcjonerów. Określ te same pozycje, co zwykłe Odkrycie, ale podaj alternatywny Kolekcjoner, aby uruchomić to zadanie.';

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

$GLOBALS["lang"]['Shipped are a set of default items. These can be found by going to menu'] = 'Shipped to zestaw domyślnych elementów. Można je znaleźć idąc do menu';

$GLOBALS["lang"]['short'] = 'Krótki';

$GLOBALS["lang"]['Short'] = 'Krótki';

$GLOBALS["lang"]['Should I remove all non-current data from this device?'] = 'Czy należy usunąć wszystkie nieaktualne dane z tego urządzenia?';

$GLOBALS["lang"]['Should this file (or pattern) be used to exclude files from being reported. Normally, to audit files, this is set to <code>y</code>.'] = 'Jeśli ten plik (lub wzór) zostanie użyty do wyłączenia plików z zgłaszania. Zazwyczaj, do audytu plików, jest to ustawione na <code>y</code>.';

$GLOBALS["lang"]['Should this vendor be used when retrieving vulnerabilities from FirstWave.'] = 'Czy ten sprzedawca powinien być używany przy odzyskiwaniu słabych punktów z FirstWave.';

$GLOBALS["lang"]['Should we add devices from the remote service, locally.'] = 'Powinniśmy dodać urządzenia z usługi zdalnej, lokalnie.';

$GLOBALS["lang"]['Should we apply this license to the selected Org as well as the Orgs children?'] = 'Czy powinniśmy zastosować tę licencję do wybranych Org, jak również dzieci Orgs?';

$GLOBALS["lang"]['Should we audit a SAN if the management software is detected.'] = 'Powinniśmy sprawdzić SAN, jeśli oprogramowanie zarządzania zostanie wykryte.';

$GLOBALS["lang"]['Should we audit mount points.'] = 'Powinniśmy sprawdzić punkty montowania.';

$GLOBALS["lang"]['Should we audit netstat ports (yes, no, servers only).'] = 'Czy powinniśmy kontrolować porty netstat (tak, nie, tylko serwery).';

$GLOBALS["lang"]['Should we audit the installed software.'] = 'Powinniśmy sprawdzić zainstalowane oprogramowanie.';

$GLOBALS["lang"]['Should we consider a filtered port to be an open port - and therefore flag this IP as having a device attached?'] = 'Czy powinniśmy uznać przefiltrowany port za otwarty port - a tym samym oznaczyć ten IP jako posiadający dołączone urządzenie?';

$GLOBALS["lang"]['Should we consider an open|filtered port to be an open port - and therefore flag this IP as having a device attached?'] = 'Czy powinniśmy uznać otwarty port 124; filtrowany port za otwarty port - a zatem oznaczyć ten IP jako urządzenie dołączone?';

$GLOBALS["lang"]['Should we convert the hostname to lowercase.'] = 'Powinniśmy przekonwertować nazwę hosta na małe.';

$GLOBALS["lang"]['Should we create a file based on the audit result.'] = 'Czy powinniśmy utworzyć plik oparty na wynikach audytu.';

$GLOBALS["lang"]['Should we expose this group in the web interface.'] = 'Powinniśmy ujawnić tę grupę w Interfejsie WWW.';

$GLOBALS["lang"]['Should we expose this query in the list of reports under the Report menu in the web interface.'] = 'Czy powinniśmy ujawnić to zapytanie na liście raportów w menu Raport w Interfejsie WWW.';

$GLOBALS["lang"]['Should we expose this query in the list of reports under the Reports menu in the web interface.'] = 'Czy powinniśmy ujawnić to zapytanie na liście raportów w menu Raporty w Interfejsie WWW.';

$GLOBALS["lang"]['Should we hide the audit script window when executing.'] = 'Czy powinniśmy ukryć okno skryptu audytu podczas wykonywania.';

$GLOBALS["lang"]['Should we ignore an invalid or self signed SSL certificate and submit the result anyway.'] = 'Czy powinniśmy zignorować niepoprawny lub autobiograficzny certyfikat SSL i przedłożyć wynik mimo wszystko.';

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

$GLOBALS["lang"]['Should we retrieve all DNS names'] = 'Czy powinniśmy odzyskać wszystkie nazwy DNS';

$GLOBALS["lang"]['Should we run an audit and submit it (y/n).'] = 'Czy powinniśmy przeprowadzić audyt i przedstawić go (y / n).';

$GLOBALS["lang"]['Should we test for SNMP using UDP port 161.'] = 'Powinniśmy sprawdzić SNMP używając portu UDP 161.';

$GLOBALS["lang"]['Should we test for SSH using TCP port 22.'] = 'Powinniśmy przetestować na SSH używając portu TCP 22.';

$GLOBALS["lang"]['Should we test for WMI using TCP port 135.'] = 'Powinniśmy sprawdzić WMI używając portu TCP 135.';

$GLOBALS["lang"]['Should we uninstall the agent (y/n).'] = 'Powinniśmy odblokować agenta (y / n).';

$GLOBALS["lang"]['Should we use the system or user level proxy to submit the audit result.'] = 'Czy powinniśmy wykorzystać system lub proxy poziomu użytkownika do przedstawienia wyników audytu.';

$GLOBALS["lang"]['Should we use the win32_product WMI class (not recommended by Microsoft) when retrieving installed software.'] = 'Czy powinniśmy używać Win32 _ product WMI class (niezalecane przez Microsoft) podczas pobierania zainstalowanego oprogramowania.';

$GLOBALS["lang"]['Should we use this method to authenticate user credentials. Set to <code>y</code> or <code>n</code>.'] = 'Czy powinniśmy użyć tej metody do uwierzytelniania uwierzytelnień użytkowników. Ustaw na <code>y</code> lub <code>n</code>.';

$GLOBALS["lang"]['Should we use this method to populate a users roles. The field <code>use_auth</code> must be set to <code>y</code> to use this. Set to <code>y</code> or <code>n</code>.'] = 'Czy powinniśmy użyć tej metody do zaludnienia ról użytkowników. Pole <code>use_auth</code> należy ustawić na <code>y</code> by użyć tego. Ustaw na <code>y</code> lub <code>n</code>.';

$GLOBALS["lang"]['Should we use this value to match external and internal devices. Our default Integration uses IP and UUID here. If either of these match between external and internal device, we consider them to be the same device.'] = 'Czy powinniśmy użyć tej wartości do dopasowania urządzeń zewnętrznych i wewnętrznych. Nasza domyślna integracja wykorzystuje tutaj IP i UUID. Jeśli któryś z nich pasuje do urządzenia zewnętrznego i wewnętrznego, uważamy go za to samo urządzenie.';

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

$GLOBALS["lang"]['Slovak'] = 'słowacki';

$GLOBALS["lang"]['Slovakia (Slovak Republic)'] = 'Słowacja (Słowacja)';

$GLOBALS["lang"]['Slovenia'] = 'Słowenia';

$GLOBALS["lang"]['Slovenian'] = 'Słowenia';

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

$GLOBALS["lang"]['So a script is not working on a recalcitrant device. Grrr. The scripts for Windows, Linux, and MacOS all accept the debugging argument. This can be set in the script itself, or provided on the command line. Run the script using that option set to 5 and you should see in which section of the script the failure occurs. For example'] = 'Scenariusz nie działa na urządzenie rekalcytacyjne. Grrr. Skrypty dla Windows, Linux i MacOS akceptują argument debugowania. To może być ustawione w samym skrypcie lub podane w wierszu poleceń. Uruchom skrypt używając tej opcji ustawionej na 5 i powinieneś zobaczyć, w której sekcji skryptu występuje awaria. Na przykład';

$GLOBALS["lang"]['So apart from a regular word, what other options are there - I am glad you asked! As per the standard Open-AudIT API, we have several operators for filtering. Operators that can precede the value are'] = 'Więc oprócz zwykłego słowa, jakie są inne opcje - cieszę się, że zapytałeś! Jak w standardzie Open- Audit API, mamy kilku operatorów do filtrowania. Operatorzy, którzy mogą poprzedzić wartość są';

$GLOBALS["lang"]['So you have an issue providing Open-AudIT credentials to discover your devices. I have an answer - dont then! Sure, I mean, discovery is the best thing since sliced bread. You do not need to know ahead of time <i>Whats On Your Network</i>. But how can you extract data from devices without providing credentials?<br><br>In the case of computers, an easy option is to copy the appropriate audit script to the target machines and set it to execute on a schedule. More details on the wiki. The machines will send their data to Open-AudIT on that schedule, almost as if you were running discovery. The device simply runs the audit script on a schedule (again, you can read the audit script) as the user you tell it to and sends the output to the server. No credentials are involved at all.<br><br>And now we have Agents for Windows. The advantages of an actual installed Agent are'] = 'Więc masz problem dostarczając Open- Audit referencje do odkrycia urządzeń. Mam odpowiedź - nie wtedy! Jasne, odkrycie to najlepsza rzecz od czasu krojenia chleba. Nie musisz wiedzieć wcześniej. <i>Co w Twojej sieci</i>. Ale jak można pobierać dane z urządzeń bez dostarczania referencji?<br/><br/>W przypadku komputerów łatwo jest skopiować odpowiedni skrypt audytu do maszyn docelowych i ustawić go do wykonania na harmonogramie. Więcej szczegółów o wiki. Maszyny będą wysyłać swoje dane do Open- Audit w tym harmonogramie, prawie tak, jakbyś prowadził odkrycie. Urządzenie po prostu uruchamia skrypt audytowy na harmonogramie (ponownie, można przeczytać skrypt audytowy) jako użytkownik, do którego mówisz i wysyła wyjście do serwera. W ogóle nie ma referencji.<br/><br/>A teraz mamy agentów dla Windows. Zaletami zainstalowanego agenta są:';

$GLOBALS["lang"]['socket'] = 'Gniazdo';

$GLOBALS["lang"]['Socket'] = 'Gniazdo';

$GLOBALS["lang"]['software'] = 'Oprogramowanie';

$GLOBALS["lang"]['Software'] = 'Oprogramowanie';

$GLOBALS["lang"]['Software Found Last 7 Days'] = 'Oprogramowanie znaleziono w ciągu ostatnich 7 dni';

$GLOBALS["lang"]['Software Found Today'] = 'Oprogramowanie znalezione dzisiaj';

$GLOBALS["lang"]['Software Found Yesterday'] = 'Oprogramowanie znalezione wczoraj';

$GLOBALS["lang"]['software_key'] = 'Klucz oprogramowania';

$GLOBALS["lang"]['Software Key'] = 'Klucz oprogramowania';

$GLOBALS["lang"]['Software License Reporting'] = 'Sprawozdawczość w zakresie licencji oprogramowania';

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

$GLOBALS["lang"]['Some collections can be executed - queries, etc - see below.'] = 'Niektóre zbiory mogą być wykonywane - pytania, itp - patrz poniżej.';

$GLOBALS["lang"]['Some examples are at the bottom of this page. All endpoints also have a minimum list of required fields. These are below.'] = 'Niektóre przykłady znajdują się na dole tej strony. Wszystkie punkty końcowe posiadają również minimalny wykaz wymaganych pól. Te są poniżej.';

$GLOBALS["lang"]['Some of our templates support the new move to dataTables, using server side processing. This massivley improves load times.'] = 'Niektóre z naszych szablonów obsługują nowe przejście do tabel danych przy użyciu przetwarzania po stronie serwera. Massivley poprawia czas obciążenia.';

$GLOBALS["lang"]['Some other error has occurred when attempting to bind to the LDAP server. It is contactable (ie, the <i>connect</i> above has worked), but for some other reason, binding has not occurred. Check the logs on the LDAP server.'] = 'Podczas próby połączenia z serwerem LDAP wystąpił inny błąd. Jest stykalny (tj., <i>połączenie</i> powyżej działa), ale z jakiegoś innego powodu, wiążąca nie wystąpiła. Sprawdź logi na serwerze LDAP.';

$GLOBALS["lang"]['Something has gone seriously wrong. Open-AudIT cannot read the <i>orgs</i> table.'] = 'Coś poszło nie tak. Open- Audit nie może odczytać <i>orgi</i> stół.';

$GLOBALS["lang"]['Something has gone seriously wrong. Open-AudIT cannot read the <i>roles</i> table.'] = 'Coś poszło nie tak. Open- Audit nie może odczytać <i>role</i> stół.';

$GLOBALS["lang"]['Sometimes agentless discovery just does not fit your use-case. Maybe your PCs have tight firewalls. Maybe they are not on the network when your discoveries are scheduled. Maybe they are used by remote workers. Whatever the case, this is where an agent can help. Install it on the target machine and it will <i>check-in</i> with your Open-AudIT server on a schedule and accept tasks. The most common task the server requests is for the agent to audit itself and send the result.'] = 'Czasami bezwartościowe odkrycie nie pasuje do twojego przypadku. Może twoje komputery mają wąskie zapory. Może nie ma ich w sieci, gdy twoje odkrycia są zaplanowane. Może są używane przez odległych pracowników. Niezależnie od sprawy, tu może pomóc agent. Zainstaluj go na maszynie docelowej i będzie <i>check- in</i> z serwerem Open- Audit na harmonogramie i przyjmować zadania. Najczęstszym zadaniem, którego wymaga serwer, jest kontrolowanie samego agenta i wysyłanie wyników.';

$GLOBALS["lang"]['Sort'] = 'Sortuj';

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

$GLOBALS["lang"]['Stage 1: Documentation review'] = 'Etap 1: Przegląd dokumentacji';

$GLOBALS["lang"]['Stage 2: Implementation and effectiveness review'] = 'Etap 2: Przegląd wdrażania i skuteczności';

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

$GLOBALS["lang"]['Start a web browser and go to'] = 'Uruchom przeglądarkę internetową i przejdź do';

$GLOBALS["lang"]['started_date'] = 'Data rozpoczęcia';

$GLOBALS["lang"]['Started Date'] = 'Data rozpoczęcia';

$GLOBALS["lang"]['Starting June 2018 Google has implemented a pay-as-you-go pricing model for the Google Maps Platform APIs. Previously, most users with moderate usage could use Google Maps, which are embedded into opCharts and Open-AudIT Professional/Enterprise, for free. Googles new policy is outlined here,'] = 'Od czerwca 2018 r. Google wdrożył model cen pay- as-you- go dla API platformy Google Maps Platform. Wcześniej, większość użytkowników z umiarkowanym wykorzystaniem może korzystać z Google Maps, które są wbudowane w opCharts i Open-Audit Professional / Enterprise, za darmo. Tu nakreślono nową politykę Google,';

$GLOBALS["lang"]['Starts With'] = 'Zaczyna się od';

$GLOBALS["lang"]['state'] = 'Państwo';

$GLOBALS["lang"]['State'] = 'Państwo';

$GLOBALS["lang"]['Stats'] = 'Staty';

$GLOBALS["lang"]['status'] = 'Status';

$GLOBALS["lang"]['Status'] = 'Status';

$GLOBALS["lang"]['Storage'] = 'Przechowywanie';

$GLOBALS["lang"]['storage_count'] = 'Liczba magazynów';

$GLOBALS["lang"]['Storage Count'] = 'Liczba magazynów';

$GLOBALS["lang"]['Storage area network'] = 'Sieć obszaru składowania';

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

$GLOBALS["lang"]['Submit Online'] = 'Prześlij online';

$GLOBALS["lang"]['Submitted From'] = 'Przedstawione od';

$GLOBALS["lang"]['Subnet'] = 'Podsieć';

$GLOBALS["lang"]['Subnet Discoveries'] = 'Odkrycia podsieci';

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

$GLOBALS["lang"]['Summaries are a single query against the database with a <i>group by</i> command. Using this simple method we can easily create a summary for virtually any attribute.<br><br>We no longer require a separate report for each <i>type</i> of a device. We now simply have a summary that groups by <i>devices.type</i> and shows the result. You can then click on a given type from the list and see the matching devices. In this case, one Summary replaces (potentially) 78 reports (there are 78 device types).<br><br>A summary is different to a query in that a summary is designed to group items by a given attribute then provide a <i>click through</i> link to the actual devices. A query is simply a list of items with no further links. As above - this of a Summary as a combined <i>report + subreport</i>, whereas a query is simply a single Report.<br><br>Summaries have a different collection template to the other resources within Open-AudIT. This template shows the Summary as you would expect and also shows buttons with counts of other resources. This page is designed to be the HomePage of Open-AudIT.'] = 'Summaries są jednym zapytaniem do bazy danych z <i>według grupy</i> Rozkaz. Korzystając z tej prostej metody możemy łatwo stworzyć podsumowanie praktycznie każdego atrybutu.<br/><br/>Nie wymagamy już oddzielnego sprawozdania dla każdego <i>typ</i> urządzenia. Mamy teraz po prostu streszczenie, że grupy <i>urządzenia. typ</i> i pokazuje wynik. Następnie można kliknąć na dany typ z listy i zobaczyć urządzenia pasujące. W tym przypadku jedno podsumowanie zastępuje (potencjalnie) 78 raportów (istnieje 78 typów urządzeń).<br/><br/>Podsumowanie różni się od zapytania, w którym podsumowanie jest przeznaczone do grupowania elementów przez dany atrybut, a następnie dostarcza <i>kliknij przez</i> link do rzeczywistych urządzeń. Zapytanie jest po prostu listą pozycji bez dalszych linków. Jak powyżej - to podsumowania jako połączenie <i>sprawozdanie + podsprawozdanie</i>podczas gdy zapytanie jest po prostu pojedynczym sprawozdaniem.<br/><br/>Summaries mają inny szablon kolekcji do innych zasobów w Open- Audit. Ten szablon pokazuje podsumowanie, jak można się spodziewać, a także pokazuje przyciski z liczbami innych zasobów. Ta strona została zaprojektowana jako Strona domowa Open- Audit.';

$GLOBALS["lang"]['Summaries are designed to group items by a particular matching column and then to provide a link to individual devices. In the previous versions of Open-AudIT, this would have been two different items - a report and subreport. We have now bundled these into what we call a Summary.'] = 'Podsumowania są przeznaczone do grupowania elementów przez konkretną kolumnę dopasowującą, a następnie do dostarczania linka do poszczególnych urządzeń. W poprzednich wersjach Open-Audit byłyby to dwie różne pozycje - raport i podraport. Teraz połączyliśmy je w coś, co nazywamy podsumowaniem.';

$GLOBALS["lang"]['Summaries provide drilldown reporting capabilities. Simple, intuitive, powerful.'] = 'Summaries zapewniają możliwości sprawozdawczości w zakresie odwiertów. Prosty, intuicyjny, potężny.';

$GLOBALS["lang"]['Summaries take the same arguments as Queries.'] = 'Summaries biorą te same argumenty co Queries.';

$GLOBALS["lang"]['Summary'] = 'Streszczenie';

$GLOBALS["lang"]['Sunday'] = 'Niedziela';

$GLOBALS["lang"]['supplier'] = 'Dostawca';

$GLOBALS["lang"]['Supplier'] = 'Dostawca';

$GLOBALS["lang"]['Support'] = 'Wsparcie';

$GLOBALS["lang"]['Supported types are <code>subnet</code>, <code>seed</code> and <code>active directory</code>.'] = 'Obsługiwane typy są <code>subnet</code>, <code>seed</code> oraz <code>active directory</code>.';

$GLOBALS["lang"]['Supports compliance with legal and regulatory requirements'] = 'Wspiera przestrzeganie wymogów prawnych i regulacyjnych';

$GLOBALS["lang"]['Suriname'] = 'Surinam';

$GLOBALS["lang"]['Surveillance Audits:</strong> Annual audits to maintain certification'] = 'Audyty nadzoru: Roczne audyty w celu utrzymania certyfikacji';

$GLOBALS["lang"]['Svalbard & Jan Mayen Islands'] = 'Wyspy Svalbard i Jan Mayen';

$GLOBALS["lang"]['Swaziland'] = 'Suazi';

$GLOBALS["lang"]['Sweden'] = 'Szwecja';

$GLOBALS["lang"]['Swedish'] = 'szwedzki';

$GLOBALS["lang"]['switch_device_id'] = 'Przełącz identyfikator urządzenia';

$GLOBALS["lang"]['Switch Device ID'] = 'Przełącz identyfikator urządzenia';

$GLOBALS["lang"]['switch_port'] = 'Przełącz port';

$GLOBALS["lang"]['Switch Port'] = 'Przełącz port';

$GLOBALS["lang"]['Switzerland, Swiss Confederation'] = 'Szwajcaria, Konfederacja Szwajcarska';

$GLOBALS["lang"]['Symptom'] = 'Objawy';

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

$GLOBALS["lang"]['Table'] = 'Tabela';

$GLOBALS["lang"]['tag'] = 'Znacznik';

$GLOBALS["lang"]['Tag'] = 'Znacznik';

$GLOBALS["lang"]['tag_1'] = 'Znacznik 1';

$GLOBALS["lang"]['Tag 1'] = 'Znacznik 1';

$GLOBALS["lang"]['tag_2'] = 'Znacznik 2';

$GLOBALS["lang"]['Tag 2'] = 'Znacznik 2';

$GLOBALS["lang"]['tag_3'] = 'Znacznik 3';

$GLOBALS["lang"]['Tag 3'] = 'Znacznik 3';

$GLOBALS["lang"]['Tagalog'] = 'Tagalog';

$GLOBALS["lang"]['tags'] = 'Tags';

$GLOBALS["lang"]['Tags'] = 'Tags';

$GLOBALS["lang"]['Tags :: '] = 'Tags:: ';

$GLOBALS["lang"]['Taiwan'] = 'Tajwan';

$GLOBALS["lang"]['Tajikistan'] = 'Tadżykistan';

$GLOBALS["lang"]['Take note of all output and action each item as appropriate.'] = 'Należy wziąć pod uwagę wszystkie wyjścia i działać każdy element odpowiednio.';

$GLOBALS["lang"]['Tanzania'] = 'Tanzania';

$GLOBALS["lang"]['Target Computer'] = 'Komputer docelowy';

$GLOBALS["lang"]['task'] = 'Zadanie';

$GLOBALS["lang"]['Task'] = 'Zadanie';

$GLOBALS["lang"]['tasks'] = 'Zadania';

$GLOBALS["lang"]['Tasks'] = 'Zadania';

$GLOBALS["lang"]['Tasks can be one of several distinct types: Baseline, Discovery, Report, Query, Summary or Collector.'] = 'Zadania mogą być jednym z kilku różnych typów: Baseline, Discovery, Report, Query, Streszczenie lub Kolekcjoner.';

$GLOBALS["lang"]['tcp_ports'] = 'Porty Tcp';

$GLOBALS["lang"]['Tcp Ports'] = 'Porty Tcp';

$GLOBALS["lang"]['Technical Details'] = 'Szczegóły techniczne';

$GLOBALS["lang"]['tenant'] = 'Tenant';

$GLOBALS["lang"]['Tenant'] = 'Tenant';

$GLOBALS["lang"]['Tenant ID'] = 'Identyfikator przedsiębiorstwa';

$GLOBALS["lang"]['Tennant ID'] = 'Identyfikator pozycji';

$GLOBALS["lang"]['ternary'] = 'Ternary';

$GLOBALS["lang"]['Ternary'] = 'Ternary';

$GLOBALS["lang"]['Test 1'] = 'Badanie 1';

$GLOBALS["lang"]['Test 2'] = 'Badanie 2';

$GLOBALS["lang"]['Test 3'] = 'Badanie 3';

$GLOBALS["lang"]['Test Email'] = 'Test email';

$GLOBALS["lang"]['test_minutes'] = 'Protokół testu';

$GLOBALS["lang"]['Test Minutes'] = 'Protokół testu';

$GLOBALS["lang"]['test_os'] = 'Test Os';

$GLOBALS["lang"]['Test Os'] = 'Test Os';

$GLOBALS["lang"]['test_subnet'] = 'Podsieć badawcza';

$GLOBALS["lang"]['Test Subnet'] = 'Podsieć badawcza';

$GLOBALS["lang"]['tests'] = 'Badania';

$GLOBALS["lang"]['Tests'] = 'Badania';

$GLOBALS["lang"]['Text'] = 'Tekst';

$GLOBALS["lang"]['Thai'] = 'Tajski';

$GLOBALS["lang"]['Thailand'] = 'Tajlandia';

$GLOBALS["lang"]['Thank you for starting your journey with the best discovery and inventory tool around.'] = 'Dziękujemy za rozpoczęcie podróży z najlepszym narzędziem odkrywania i inwentaryzacji wokół.';

$GLOBALS["lang"]['Thanks to'] = 'Dzięki';

$GLOBALS["lang"]['Thats it! You have just edited the attributes of as many devices as you need to.'] = 'To jest to! Właśnie edytowałeś atrybuty tylu urządzeń, ile potrzebujesz.';

$GLOBALS["lang"]['The <i>Roles</i> endpoint allows you to manage the set of permissions(Create, Read, Update, Delete) that are granted to the users and are applied to each endpoint.'] = 'W <i>Role</i> punkt końcowy pozwala na zarządzanie zbiorem uprawnień (Tworzenie, Czytanie, Aktualizacja, Usuń), które są przyznawane użytkownikom i są stosowane do każdego punktu końcowego.';

$GLOBALS["lang"]['The API uses a cookie. You can request a cookie by sending a POST to the URL below, containing the username and password attributes and values:'] = 'API używa ciastek. Możesz poprosić o plik cookie wysyłając POST na adres URL poniżej, zawierający atrybuty i wartości użytkownika i hasła:';

$GLOBALS["lang"]['The Active Directory domain to retrieve a list of subnets from.'] = 'Domena Active Directory do pobrania listy podsieci.';

$GLOBALS["lang"]['The Active Directory server to retrieve a list of subnets from.'] = 'Serwer Active Directory do pobrania listy podsieci.';

$GLOBALS["lang"]['The Applications endpoint allows you to define an application which you can then associate to a device (or devices).'] = 'Punkt końcowy aplikacji pozwala zdefiniować aplikację, którą można następnie powiązać z urządzeniem (lub urządzeniami).';

$GLOBALS["lang"]['The Attributes endpoint allows you to add customized values to different attributes in Open-AudIT, at the moment this feature works on the Class, Environment, Status and Type attributes on Devices, the Type attribute for both Locations and Orgs as well as the Menu Category for Queries. If you view an item of one of the prvious types (say view a Lkocation) you will notice the Type attribute must be selected from a drop-down box. This is where those values are stored. Hence, if you would like to add a new Type to be chosen for a Location, add it using the Attributes feature.'] = 'Punkt końcowy Atrybuty pozwala na dodanie wartości dostosowanych do różnych atrybutów w Open- Audit, w chwili obecnej funkcja ta działa na atrybutach klasy, środowiska, statusu i typu na urządzeniach, atrybucie Typ dla zarówno Lokalizacji i Orgs, jak i kategorii Menu dla zapytań. Jeśli wyświetlisz element jednego z typów (np. widok Lkocation), zauważysz, że atrybut Type musi być wybrany z rozwijanego pola. To tutaj te wartości są przechowywane. W związku z tym, jeśli chcesz dodać nowy typ do wybranej lokalizacji, dodaj go używając funkcji Atrybuty.';

$GLOBALS["lang"]['The Automatable metric captures the answer to the question <strong>Can an attacker automate exploitation events for this vulnerability across multiple targets?</strong> based on steps 1-4 of the kill chain. These steps are reconnaissance, weaponization, delivery, and exploitation (Not Defined, No, Yes).'] = 'Automatyczna metryka rejestruje odpowiedź na pytanie <strong>Czy napastnik może zautomatyzować zdarzenia eksploatacyjne dla tej podatności na wiele celów?</strong> na podstawie kroków 1- 4 łańcucha. Kroki te to rekonesans, uzbrojenie, dostawa i eksploatacja (Nieokreślone, Nie, Tak).';

$GLOBALS["lang"]['The CVE has been marked as invalid or withdrawn in the CVE List. It remains in the NVD but is excluded from default search results.'] = 'CVE zostało oznaczone jako nieprawidłowe lub wycofane na liście CVE. Pozostaje w NVD, ale jest wyłączony z domyślnych wyników wyszukiwania.';

$GLOBALS["lang"]['The CVE has been published to the CVE List and included in the NVD dataset. Initial ingestion only.'] = 'CVE zostało opublikowane na liście CVE i włączone do zbioru danych NVD. Tylko początkowe spożycie.';

$GLOBALS["lang"]['The CVE has been updated after initial analysis. NVD enrichment data may have been revised.'] = 'CVE został zaktualizowany po wstępnej analizie. Dane dotyczące wzbogacania NVD mogły zostać zmienione.';

$GLOBALS["lang"]['The CVE identifier.'] = 'Identyfikator CVE';

$GLOBALS["lang"]['The CVE is actively being enriched with CVSS scores, CWE classifications, reference tags, and CPE applicability.'] = 'CVE jest aktywnie wzbogacane wynikami CVSS, klasyfikacjami CWE, znacznikami referencyjnymi i możliwością zastosowania CPE.';

$GLOBALS["lang"]['The CVE is not currently prioritized for enrichment due to resource constraints or other reasons.'] = 'CVE nie jest obecnie traktowany priorytetowo w odniesieniu do wzbogacania ze względu na ograniczenia zasobów lub inne powody.';

$GLOBALS["lang"]['The CVE is queued for enrichment by NVD analysts. No detailed metadata yet.'] = 'CVE jest w kolejce do wzbogacania przez analityków NVD. Brak szczegółowych metadanych.';

$GLOBALS["lang"]['The Cloud that owns this item. Links to <code>clouds.id</code>.'] = 'Chmura, która posiada ten przedmiot. Linki do <code>clouds.id</code>.';

$GLOBALS["lang"]['The Device Seed Discovery type is the newest highly-effective method for network crawling, giving you the ability to target your network as narrowly or as broadly as you need. It is fast, it works and it is great.'] = 'Typ Device Seed Discovery jest najnowszą wysoce efektywną metodą czołgania się w sieci, co daje możliwość celowania do sieci tak wąsko lub tak szeroko, jak potrzebujesz. Jest szybki, działa i jest świetny.';

$GLOBALS["lang"]['The Discovery Scan Options we ship are detailed in the table below. As above, Enterprise users can create more of these or edit the shipped items.'] = 'Scan Discovery Opcje, które wysyłamy są szczegółowo opisane w poniższej tabeli. Jak powyżej, użytkownicy Enterprise mogą tworzyć więcej z tych lub edytować wysłane elementy.';

$GLOBALS["lang"]['The Elevated User query'] = 'Podwyższone zapytanie użytkownika';

$GLOBALS["lang"]['The Executables feature scans the disk of a device as part of the audit and checks that every executable file is known to the package manager. Because it uses the package manager, the feature applies to Linux target devices only, and further than that, only rpm or deb based distributions. Anything Redhat or Debian based should work.'] = 'Funkcja Executionables skanuje dysk urządzenia w ramach audytu i sprawdza, czy każdy plik wykonywalny jest znany menedżerowi pakietu. Ponieważ korzysta z menedżera pakietów, funkcja odnosi się tylko do urządzeń docelowych Linuksa, a ponadto tylko do dystrybucji opartych na rpm lub deb. Cokolwiek Redhat lub Debian powinny działać.';

$GLOBALS["lang"]['The FROM'] = 'Z';

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

$GLOBALS["lang"]['The ISO/IEC 27001 certification process and its key elements.'] = 'Proces certyfikacji ISO / IEC 27001 i jego kluczowe elementy.';

$GLOBALS["lang"]['The ISP or Telco providing this link.'] = 'ISP lub Telco dostarczające ten link.';

$GLOBALS["lang"]['The JSON record from Mitre.'] = 'Płyta JSON z Mitre.';

$GLOBALS["lang"]['The JSON record from the NVD feed.'] = 'Nagranie JSON z NVD.';

$GLOBALS["lang"]['The LDAP OU of this user (if LDAP is used).'] = 'LDAP OU tego użytkownika (jeśli jest używany LDAP).';

$GLOBALS["lang"]['The LDAP server could not be connected to. At all. Check it is pingable from the Open-AudIT server. Check the correct port is open to the Open-AudIT server. An nmap from the Open-AudIT server will show this. Substitute your LDAP servers IP for $ip. Try:<code>nmap -vv $ip</code>'] = 'Serwer LDAP nie mógł być podłączony. W ogóle. Sprawdź, czy jest on dostępny z serwera Open- Audit. Sprawdź poprawny port jest otwarty na serwer Open- Audit. Nmap z serwera Open- Audit pokaże to. Zastąp swoje serwery LDAP IP na $ip. Spróbuj:<code>nmap -vv $ip</code>';

$GLOBALS["lang"]['The LDAP server type is invalid. It should be either <i>active directory</i> or <i>openldap</i>.'] = 'Typ serwera LDAP jest nieprawidłowy. Powinno być albo <i>aktywny katalog</i> lub <i>openldap</i>.';

$GLOBALS["lang"]['The LDAP server was connected to and the user credentials accepted for bind.'] = 'Serwer LDAP został podłączony do i uwierzytelniania użytkownika przyjęte do bind.';

$GLOBALS["lang"]['The Linux Open-AudIT installer will test for and if required, install Open-AudITs dependencies from your distributions repository, including setting the Nmap SetUID. This is required for SNMP (UDP 161) detection by a non-root user. This is supported on RedHat/CentOS and Debian/Ubuntu. If you need to manually install Nmap:<br><br>For RedHat/CentOS do (NOTE - if you upgrade using yum, you will need to reapply this <i>chmod</i> setting).'] = 'Instalator Linux Open- Audit będzie testował zależności Open- Audits z repozytorium dystrybucji, w tym ustawienie Nmap SetuID. Jest to wymagane do wykrywania SNMP (UDP 161) przez użytkownika niebędącego użytkownikiem roota. Jest to obsługiwane przez RedHat / CentOS i Debiana / Ubuntu. Jeśli potrzebujesz ręcznie zainstalować Nmap:<br/><br/>Dla RedHat / CentOS do (UWAGA - w przypadku aktualizacji przy użyciu yum, trzeba będzie ponownie zastosować to <i>chmod</i> nastawianie).';

$GLOBALS["lang"]['The Location that contains this network. Links to <code>locations.id</code>.'] = 'Lokalizacja, która zawiera tę sieć. Linki do <code>locations.id</code>.';

$GLOBALS["lang"]['The NVD assigned base status.'] = 'NVD przydzielił status bazy.';

$GLOBALS["lang"]['The National Institute of Standards and Technology is the federal technology agency. They advance official technology, measurement science and standards.'] = 'Krajowy Instytut Norm i Technologii jest federalną agencją technologiczną. Poprawiają oficjalną technologię, pomiary i standardy.';

$GLOBALS["lang"]['The Network to Discover'] = 'Sieć do odkrywania';

$GLOBALS["lang"]['The Nmap timing preset.'] = 'Założony czas Nmap.';

$GLOBALS["lang"]['The OS this package should be reported against. Blank for all. Use the percent sign % as a wildcard. Will be tested against os_group, os_family and os_name in that order.'] = 'System operacyjny tego pakietu powinien być zgłoszony przeciwko. Puste dla wszystkich. Użyj znaku%% jako dzikiej karty. Zostanie przetestowany na os _ group, os _ family i os _ name w tej kolejności.';

$GLOBALS["lang"]['The Open-AudIT API'] = 'API Open- Audit';

$GLOBALS["lang"]['The Open-AudIT id of the linked cloud. Links to <code>clouds.id</code>.'] = 'Identyfikator Open- Audit połączonej chmury. Linki do <code>clouds.id</code>.';

$GLOBALS["lang"]['The Open-AudIT server code was exeucted within this file.'] = 'Open- Aud Kod serwera IT został wyjęty z tego pliku.';

$GLOBALS["lang"]['The Open-AudIT server code was exeucted within this function.'] = 'Open- Aud Kod serwera IT został wyjęty z tej funkcji.';

$GLOBALS["lang"]['The OpenSCAP ecosystem provides multiple tools to assist administrators and auditors with assessment, measurement, and enforcement of security baselines including a wide variety of hardening guides and configuration baselines developed by the open source community, ensuring that you can choose a security policy which best suits the needs of your organization, regardless of its size.'] = 'Ekosystem OpenSCAP zapewnia wiele narzędzi, aby pomóc administratorom i audytorom w ocenie, pomiarze i egzekwowaniu podstawowych zasad bezpieczeństwa, w tym szerokiej gamy przewodników hartujących i podstawowych konfiguracji opracowanych przez społeczność open source, zapewniając, że można wybrać politykę bezpieczeństwa, która najlepiej odpowiada potrzebom organizacji, niezależnie od jej wielkości.';

$GLOBALS["lang"]['The OpenSCAP project is a collection of open source tools for implementing and enforcing this standard, and has been awarded the SCAP 1.2 certification by NIST in 2014.'] = 'Projekt OpenSCAP jest zbiorem narzędzi open source do wdrażania i egzekwowania tego standardu i otrzymał certyfikat SCAP 1.2 od NIST w 2014 r.';

$GLOBALS["lang"]['The Organisation that owns this item. Links to <code>orgs.id</code>.'] = 'Organizacja, która jest właścicielem tej pozycji. Linki do <code>orgs.id</code>.';

$GLOBALS["lang"]['The Process Identifier of the running associated discovery.'] = 'Identyfikator procesu związanego z działaniem.';

$GLOBALS["lang"]['The RU positon of the top of this device.'] = 'RU pozyton górnej części tego urządzenia.';

$GLOBALS["lang"]['The Racks feature is used to manage and visualize your rack use with an Organisation, Location, Building, Floor, Room and Row.'] = 'Funkcja Racks służy do zarządzania i wizualizacji korzystania z stojaka z organizacją, lokalizacją, budynkiem, podłogą, pokojem i wierszem.';

$GLOBALS["lang"]['The SCAP is a specification for expressing and manipulating security data in standardized ways. SCAP uses several individual specifications in concert to automate continuous monitoring, vulnerability management, and security policy compliance evaluation reporting'] = 'SCAP jest specyfikacją służącą do wyrażania i manipulowania danymi dotyczącymi bezpieczeństwa w standaryzowany sposób. SCAP wykorzystuje kilka indywidualnych specyfikacji w połączeniu z automatyzacją ciągłego monitorowania, zarządzania wrażliwością oraz sprawozdawczości w zakresie oceny zgodności polityki bezpieczeństwa';

$GLOBALS["lang"]['The SELECT'] = 'SELECT';

$GLOBALS["lang"]['The SELECT section of the query should use full dot notation and also request the field with its full dot name. IE - SELECT devices.id AS `devices.id`. Each field should be selected in this fashion to enable GUI side attribute filtering.'] = 'Sekcja SELECT zapytania powinna używać pełnej notacji kropkowej, a także zażądać pola z pełną nazwą kropki. IE - Urządzenia SELECT. id AS "devices.id". Każde pole powinno być wybrane w ten sposób, aby umożliwić filtrowanie atrybutów po stronie GUI.';

$GLOBALS["lang"]['The SELECT section of your SQL must contain fully qualified columns and specify certain columns.'] = 'Sekcja SELECT Twojego SQL musi zawierać w pełni zakwalifikowane kolumny i określać określone kolumny.';

$GLOBALS["lang"]['The SNMP community string.'] = 'Struna społeczności SNMP.';

$GLOBALS["lang"]['The SNMP v3 Authentication Passphrase.'] = 'SNMP v3 Authentication Passphrase.';

$GLOBALS["lang"]['The SNMP v3 Authentication Protocol.'] = 'Protokół uwierzytelniania SNMP v3.';

$GLOBALS["lang"]['The SNMP v3 Privacy Passphrase.'] = 'SNMP v3 Privacy Passphrase.';

$GLOBALS["lang"]['The SNMP v3 Privacy Protocol.'] = 'Protokół ochrony prywatności SNMP v3.';

$GLOBALS["lang"]['The SNMP v3 Security Level.'] = 'Poziom bezpieczeństwa SNMP v3.';

$GLOBALS["lang"]['The SNMP v3 Security Name.'] = 'Nazwa bezpieczeństwa SNMP v3.';

$GLOBALS["lang"]['The SNMPv3 context Engine ID (optional).'] = 'Identyfikator silnika kontekstowego SNMPv3 (opcjonalny).';

$GLOBALS["lang"]['The SNMPv3 context Name (optional).'] = 'Nazwa kontekstu SNMPv3 (nieobowiązkowo).';

$GLOBALS["lang"]['The SQL cannot contain <strong>WHERE @filter OR</strong>. That SQL will not be executed, however <strong>WHERE @filter AND</strong> queries are allowed.'] = 'SQL nie może zawierać <strong>Gdzie @ filter lub</strong>. Ten SQL nie zostanie jednak wykonany <strong>GDZIE @ filter I</strong> Pytania są dozwolone.';

$GLOBALS["lang"]['The SQL queries used in Open-AudIT require the use of the backtick - ` character and NOT the standard single quote for fields. On most US Windows keyboards the backtick key is located in the top-left of the keyboard along with the tilde ~. On a US Mac keyboard the backtick key is located next to the SHIFT key. The standard single quote is still used to enclose values as the examples below illustrate.'] = 'Zapytania SQL stosowane w Open- Audit wymagają użycia funkcji backtick - \'znak i NIE jest standardowym pojedynczym cytatem dla pól. Na większości US Windows klawiatury klawisz tylny znajduje się w lewym górnym rogu klawiatury wraz z tilde ~. Na klawiaturze US Mac klawisz backtick znajduje się obok klawisza SHIFT. Standardowy pojedynczy cytat jest nadal używany do włączenia wartości, jak ilustrują przykłady poniżej.';

$GLOBALS["lang"]['The SQL query is essentially broken into three parts.'] = 'Zapytanie SQL jest zasadniczo podzielone na trzy części.';

$GLOBALS["lang"]['The Standards functionality in Open-AudIT allows you to, ahead of time, complete the questions auditors require when completing ISO 27001 certification.'] = 'Funkcjonalność Standardów w Open- Audit pozwala, przed upływem czasu, ukończyć pytania wymagane przez audytorów podczas wykonywania certyfikacji ISO 27001.';

$GLOBALS["lang"]['The URL of the external system.'] = 'URL systemu zewnętrznego.';

$GLOBALS["lang"]['The URL of your Open-AudIT Server that this Collector will report to (no trailing slash).'] = 'URL Twojego Open- Audit Serwer, do którego ten Kolekcjoner się zgłosi (bez slasha).';

$GLOBALS["lang"]['The URL the audit scripts should submit their result to.'] = 'URL skrypty audytowe powinny przekazywać swoje wyniki.';

$GLOBALS["lang"]['The User endpoint allows you to manage user accounts within Open-AudIT.'] = 'Punkt końcowy Użytkownika pozwala zarządzać kontami użytkowników w ramach Open- Audit.';

$GLOBALS["lang"]['The WHERE'] = 'GDZIE';

$GLOBALS["lang"]['The WHERE section of your SQL <em>must</em> contain'] = 'Sekcja GDZIE SQL <em>must</em> zawiera';

$GLOBALS["lang"]['The Windows'] = 'Okna';

$GLOBALS["lang"]['The Windows log may say the following'] = 'Dziennik Windows może powiedzieć:';

$GLOBALS["lang"]['The account must have a password; WMI does not allow blank passwords.'] = 'Konto musi mieć hasło; WMI nie pozwala na puste hasła.';

$GLOBALS["lang"]['The account password must NOT contain \" (double quotes). This is because cscript (and wscript) cannot parse argument values containing double quotes. They are simply stripped. No (before you ask) escaping will not work. This is a cscript limitation and nothing to do with Open-AudIT.'] = 'Hasło konta NIE może zawierać\ "(podwójne cytaty). Dzieje się tak dlatego, że cscript (i wscript) nie może analizować wartości argumentów zawierających podwójne cytaty. Są po prostu rozebrane. Ucieczka nie zadziała. Jest to ograniczenie cscript i nie ma nic wspólnego z Open- Audit.';

$GLOBALS["lang"]['The actual full name of this user.'] = 'Rzeczywista pełna nazwa użytkownika.';

$GLOBALS["lang"]['The address of the Open-AudIT server submit page.'] = 'Adres strony przesyłania serwera Open- Audit.';

$GLOBALS["lang"]['The administrator supplied credentials that were successfully used to bind to LDAP.'] = 'Administrator dostarczył referencje, które z powodzeniem wykorzystano do związania się z LDAP.';

$GLOBALS["lang"]['The administrator supplied credentials to bind to the LDAP server, but they have not been accepted by the LDAP sevrer. Double check the credentials work on the LDAP server, and then check (or reset them) in the Open-AudIT LDAP Server entry.'] = 'Administrator dostarczył referencje, aby powiązać je z serwerem LDAP, ale nie zostały zaakceptowane przez sewera LDAP. Podwójne sprawdzanie uwierzytelniania działa na serwerze LDAP, a następnie sprawdzanie (lub resetowanie) w pozycji Open- Audit LDAP Server.';

$GLOBALS["lang"]['The agent and server are also intelligent enough to self-update the agent if a newer version is installed on the server (say after upgrading Open-AudIT).'] = 'Agent i serwer są również na tyle inteligentne, aby samodzielnie zaktualizować agenta, jeśli nowsza wersja jest zainstalowana na serwerze (powiedzmy po aktualizacji Open- Audit).';

$GLOBALS["lang"]['The agent should download a fresh copy of the audit script, run it and submit the result to the server.'] = 'Agent powinien pobrać świeżą kopię skryptu audytu, uruchomić go i przesłać wynik do serwera.';

$GLOBALS["lang"]['The application creates temporary audit scrtips here, copies them to the target machines, then deletes them.'] = 'Aplikacja tworzy tu tymczasowe podrapanie, kopiuje je do maszyn docelowych, a następnie usuwa.';

$GLOBALS["lang"]['The associated baseline. Links to <code>baselines.id</code>.'] = 'Powiązany punkt odniesienia. Linki do <code>baselines.id</code>.';

$GLOBALS["lang"]['The associated discovery (if required). Links to <code>discoveries.id</code>.'] = 'Związane z tym odkrycie (jeżeli jest wymagane). Linki do <code>discoveries.id</code>.';

$GLOBALS["lang"]['The attribute to test (from the <code>devices</code> table).'] = 'Atrybut badania (z <code>devices</code> Tabela).';

$GLOBALS["lang"]['The attribute to test (must match an external field name from below).'] = 'Atrybut testowy (musi odpowiadać zewnętrznej nazwie pola od dołu).';

$GLOBALS["lang"]['The attributes for discovery scan options are as below.'] = 'Atrybuty dla opcji skanowania odkryć są jak poniżej.';

$GLOBALS["lang"]['The audit script upon which to base your customisations.'] = 'Skrypt audytu, na którym można oprzeć swoje dostosowania.';

$GLOBALS["lang"]['The audit script will use the files[ ] array and retrieve the file details.'] = 'Skrypt audytu użyje tablicy plików [] i odzyska szczegóły plików.';

$GLOBALS["lang"]['The audit scripts all accept a debugging argument. You can run the script utilizing that and see in more detail what the issue is. And if you cannot figure it out - that is what we are here for! Open a support case and we will get things running in no time.'] = 'Wszystkie skrypty audytowe akceptują argument debugowania. Możesz uruchomić skrypt wykorzystując to i zobaczyć bardziej szczegółowo, co to jest problem. A jeśli nie możesz tego rozgryźć - po to tu jesteśmy! Otwórzcie sprawę wsparcia, a wszystko zacznie działać w mgnieniu oka.';

$GLOBALS["lang"]['The base path from which to search for Users.'] = 'Ścieżka bazowa do wyszukiwania użytkowników.';

$GLOBALS["lang"]['The below steps are not the fault of or unique to Open-AudIT and would affect <strong>any</strong> discovery application using remote WMI and/or Windows.'] = 'Poniższe kroki nie są winą lub unikalne dla Open- Audit i wpłynie <strong>wszystkie</strong> odkrywania aplikacji przy użyciu zdalnego WMI i / lub Windows.';

$GLOBALS["lang"]['The benchmark type.'] = 'Rodzaj wskaźnika referencyjnego.';

$GLOBALS["lang"]['The building the rack is located in.'] = 'Budynek, w którym znajduje się wieszak.';

$GLOBALS["lang"]['The calculated number of devices to be created externally.'] = 'Obliczona liczba urządzeń tworzonych zewnętrznie.';

$GLOBALS["lang"]['The calculated number of devices to be created in Open-AudIT.'] = 'Obliczona liczba urządzeń tworzonych w Open-Audit.';

$GLOBALS["lang"]['The client ID is the ID of an Azure Active Directory application. The client secret is the key that you give that application.'] = 'Identyfikator klienta jest identyfikatorem aplikacji Azure Active Directory. Sekret klienta jest kluczem do podania tej aplikacji.';

$GLOBALS["lang"]['The collector is essentially a full install of Open-AudIT in <i>collector</i> mode. The collector is designed to run discovery upon the network it is situated in. It is not restricted to only that network, but ideally it would essentially be one collector per subnet where required. The collector is driven on a schedule by the server and runs discovery upon the network as specified.<br>When in Stand Alone mode the Collector acts as an independant server, simply forwarding all devices found to the main server.<br><br>Once installed and setup, control of the Collector is performed on the Server (not in Stand Alone mode).<br><br>The only required network ports between the collector and server are 80 or 443 (TCP connection established from the Collector to the Server). The Open-AudIT database is not (and cannot be) shared between these installs.<br><br>By default the collector (not in Stand Alone mode) will request from the server any discovery tasks every 5 minutes (you can configure this on the server for new Collectors using the configuration item collector_check_minutes) therefor any discovery tasks for the collector should be scheduled for 0, 5, 10, 15, etc minutes.'] = 'Kolekcjoner jest zasadniczo pełną instalację Open- Audit w <i>kolektor</i> tryb. Kolekcjoner jest przeznaczony do prowadzenia odkryć na sieci, w której znajduje się. Nie ogranicza się ona wyłącznie do tej sieci, ale najlepiej byłoby, gdyby była ona w razie potrzeby jednym kolekcjonerem na podsieć. Kolekcjoner jest prowadzony zgodnie z harmonogramem przez serwer i uruchamia odkrycie sieci zgodnie z podanymi.<br/>When in Stand Sam tryb Kolekcjoner działa jako niezależny serwer, po prostu przesyła wszystkie urządzenia znalezione na głównym serwerze.<br/><br/>Po zainstalowaniu i skonfigurowaniu, sterowanie Kolekcjonerem jest wykonywane na serwerze (nie w trybie Stand Alone).<br/><br/>Jedynymi wymaganymi portami sieciowymi pomiędzy kolektorem a serwerem są 80 lub 443 (połączenie TCP ustanowione od kolektora do serwera). Baza danych Open- Audit nie jest (i nie może być) udostępniana pomiędzy tymi instalacjami.<br/><br/>Domyślnie kolekcjoner (nie w trybie Stand Alone) będzie żądał od serwera wszelkich zadań wyszukiwania co 5 minut (można to skonfigurować na serwerze dla nowych Kolekcjonerów używając pozycji konfiguracyjnej collector _ check _ minutes), a wszelkie zadania wyszukiwania dla kolektora powinny być zaplanowane na 0, 5, 10, 15 itd.';

$GLOBALS["lang"]['The collector is essentially a full install of Open-AudIT in <i>collector</i> mode. This mode would reduce visible functionality in an effort to simplify and focus the application. It is designed to collect information about local networks and devices, where firewall and/or network traversal is an issue from the server.'] = 'Kolekcjoner jest zasadniczo pełną instalację Open- Audit w <i>kolektor</i> tryb. Tryb ten zmniejszyłby widoczną funkcjonalność w celu uproszczenia i ukierunkowania aplikacji. Jest on przeznaczony do gromadzenia informacji o lokalnych sieciach i urządzeniach, gdzie firewall i / lub traversation sieci jest problemem z serwera.';

$GLOBALS["lang"]['The collectors internal IP used when it runs a discovery.'] = 'Kolekcjonerski wewnętrzny IP używany podczas prowadzenia odkrycia.';

$GLOBALS["lang"]['The column name from the foreign table. Should be one of: class, environment, status, type or menu_category.'] = 'Nazwa kolumny z obcej tabeli. Powinno być jedną z: klasy, środowiska, statusu, typu lub menu _ kategorii.';

$GLOBALS["lang"]['The command executed upon the target device or Open-AudIT server code executed during discovery.'] = 'Polecenie wykonywane na urządzeniu docelowym lub kod serwera Open- Audit wykonywany podczas wyszukiwania.';

$GLOBALS["lang"]['The configuration of your cluster can be: <code>active/active</code>, <code>active/passive</code>, <code>N+1</code>, <code>N+M</code>, <code>N-to-1</code>, <code>N-to-N</code>, <code>other</code> or blank.'] = 'Konfiguracja klastra może być: <code>active/active</code>, <code>active/passive</code>, <code>N+1</code>, <code>N+M</code>, <code>N-to-1</code>, <code>N-to-N</code>, <code>other</code> lub puste.';

$GLOBALS["lang"]['The credentials password. If the credentials are an SSH Key, this is the password used to unlock the key and is optional.'] = 'Hasło. Jeśli referencje są kluczem SSH, jest to hasło używane do odblokowania klucza i jest opcjonalne.';

$GLOBALS["lang"]['The credentials supplied by the user have failed.'] = 'Kwalifikacje dostarczone przez użytkownika zawiodły.';

$GLOBALS["lang"]['The credentials username.'] = 'Nazwa użytkownika.';

$GLOBALS["lang"]['The current date and time in the format: Y-m-d H:i:s.'] = 'Bieżąca data i godzina w formacie: Y- m- d H: i: s.';

$GLOBALS["lang"]['The current date in Y-m-d format.'] = 'Bieżąca data w formacie Y- m- d.';

$GLOBALS["lang"]['The current status of the Cloud Discovery.'] = 'Obecny status Cloud Discovery.';

$GLOBALS["lang"]['The current status of the discovery.'] = 'Obecny status odkrycia.';

$GLOBALS["lang"]['The dashboard that will be shown by default for this user. Links to <code>dashboards.id</code>.'] = 'Deska rozdzielcza, która będzie wyświetlana domyślnie dla tego użytkownika. Linki do <code>dashboards.id</code>.';

$GLOBALS["lang"]['The data stored in the database is not showing in the application translated. We leave the data as it is. However, there is nothing to stop you, the user, changing the name (for example) of an item in the database to your language.'] = 'Dane zapisane w bazie danych nie są wyświetlane w tłumaczonej aplikacji. Zostawiamy dane tak jak jest. Nie ma jednak nic, co mogłoby zatrzymać użytkownika, zmieniając nazwę (na przykład) elementu w bazie danych na Twój język.';

$GLOBALS["lang"]['The data you input will be used in a <code>LIKE</code> clause, not (as per the API) an <code>equals</code> clause. Another example - if you input <code>comput</code>, it would still return all computers. And because we are using a <code>LIKE</code> clause, it is case-insensitive.'] = 'Dane, które wprowadzisz zostaną wykorzystane w <code>LIKE</code> klauzula, nie (zgodnie z API) <code>equals</code> klauzula. Inny przykład - jeśli wprowadzisz <code>comput</code>To i tak zwróciłoby wszystkie komputery. A ponieważ używamy <code>LIKE</code> Klauzula jest niewrażliwa.';

$GLOBALS["lang"]['The database schema can be found in the application if the user has database::read permission by going to menu: Admin -> Database ->'] = 'Schemat bazy danych można znaleźć w aplikacji, jeśli użytkownik posiada bazę danych:: czytaj pozwolenie idąc do menu: Admin - > Baza danych - >';

$GLOBALS["lang"]['The database version and web version are inconsistent.'] = 'Wersja bazy danych i wersja web są niespójne.';

$GLOBALS["lang"]['The date of license expiration.'] = 'Data ważności licencji.';

$GLOBALS["lang"]['The date the software is discontinued by the manufacturer. Usually replaced by a newer version. Maintenance may still be available.'] = 'Data zaprzestania stosowania oprogramowania przez producenta. Zazwyczaj zastąpiona nowszą wersją. Konserwacja może być nadal dostępna.';

$GLOBALS["lang"]['The date the software no longer receives updates and is effectively discontinued altogether. Maintenance is discontinued.'] = 'Data, w której oprogramowanie nie otrzymuje już aktualizacji i jest w pełni zaniechane. Przerwanie leczenia podtrzymującego.';

$GLOBALS["lang"]['The date this item was changed or added (read only). NOTE - This is the timestamp from the server.'] = 'Data zmiany lub dodania tej pozycji (tylko do odczytu). UWAGA - To jest znacznik czasu z serwera.';

$GLOBALS["lang"]['The date/time when this result was created.'] = 'Data / czas powstania tego wyniku.';

$GLOBALS["lang"]['The day of the month when this task should execute (* for every day).'] = 'Dzień miesiąca, w którym zadanie to powinno być wykonywane (* na każdy dzień).';

$GLOBALS["lang"]['The day of the week when this task should execute (* for every day).'] = 'Dzień tygodnia, w którym zadanie to powinno być wykonywane (* na każdy dzień).';

$GLOBALS["lang"]['The debug level (will output to command prompt window). Lower means less output with 0 being no output.'] = 'Poziom debugowania (spowoduje wyjście do okna polecenia). Niższy oznacza mniej wyjścia z 0 bez wyjścia.';

$GLOBALS["lang"]['The default discovery scan option is the UltraFast set.'] = 'Domyślną opcją skanowania jest zestaw UltraFast.';

$GLOBALS["lang"]['The default language assigned to any user created by this method.'] = 'Domyślny język przypisany do każdego użytkownika stworzonego tą metodą.';

$GLOBALS["lang"]['The device must respond to an Nmap ping before it is considered online.'] = 'Urządzenie musi reagować na Nmap ping zanim zostanie uznane za online.';

$GLOBALS["lang"]['The device within Open-AudIT. Links to <code>devices.id</code>.'] = 'Urządzenie w Open- Audit. Linki do <code>devices.id</code>.';

$GLOBALS["lang"]['The direct link for the script is'] = 'Bezpośredni link do skryptu jest';

$GLOBALS["lang"]['The email address of the receiver'] = 'Adres e-mail odbiorcy';

$GLOBALS["lang"]['The enterprise binary from FirstWave is required for a license. Please download Open-AudIT from'] = 'Firma binarna z FirstWave jest wymagana do licencji. Proszę pobrać Open- Audit z';

$GLOBALS["lang"]['The entire associated baseline this result is from.'] = 'Cały związany z tym wynik jest z.';

$GLOBALS["lang"]['The exploited vulnerability can affect resources beyond the security authority of the vulnerable component. This usually means a privilege or trust boundary is crossed (for example, escaping from a container to the host OS).'] = 'Wykorzystywana podatność może mieć wpływ na zasoby wykraczające poza organy bezpieczeństwa w odniesieniu do słabego komponentu. Oznacza to zwykle przekroczenie granicy przywileju lub zaufania (na przykład ucieczka z kontenera do systemu operacyjnego hosta).';

$GLOBALS["lang"]['The exploited vulnerability only impacts resources within the same security authority as the vulnerable component. In other words, the attacker’s actions stay within the original trust boundary.'] = 'Wykorzystywana podatność na zagrożenia wpływa wyłącznie na zasoby w ramach tego samego organu bezpieczeństwa, co składnik podatny na zagrożenia. Innymi słowy, działania napastnika pozostają w granicach pierwotnego zaufania.';

$GLOBALS["lang"]['The externally referenced location ID. Usually populated by Cloud audits.'] = 'Identyfikator lokalizacji z zewnątrz. Zazwyczaj zaludnione audytami w chmurze.';

$GLOBALS["lang"]['The fields associated with an Integration are stored in the database as a JSON array of objects. Each field has the following attributes'] = 'Pola związane z integracją są przechowywane w bazie danych jako tablica obiektów JSON. Każde pole posiada następujące atrybuty';

$GLOBALS["lang"]['The first time that Open-AudIT retrieved details of this device.'] = 'Po raz pierwszy Open- Audit odzyskał szczegóły tego urządzenia.';

$GLOBALS["lang"]['The floor the rack is located on.'] = 'Podłoga na której znajduje się wieszak.';

$GLOBALS["lang"]['The foreign table to reference. Should be one of: devices, locations, orgs or queries.'] = 'Obca tabela do odniesienia. Powinno być jednym z: urządzeń, lokalizacji, orgów lub zapytań.';

$GLOBALS["lang"]['The format of your data should be in the form'] = 'Format Twoich danych powinien być w formie';

$GLOBALS["lang"]['The format used for the output to be emailed.'] = 'Format używany do wysyłania wiadomości e-mail.';

$GLOBALS["lang"]['The fully qualified column upon which to group by. NOTE: When type = traffic, this represents the red query id.'] = 'W pełni wykwalifikowany kolumna, na który pogrupować. UWAGA: When type = traffic, this represents the red query id.';

$GLOBALS["lang"]['The fully qualified name returned by the external system. EG: for NMIS we use configuration.roleType.'] = 'W pełni zakwalifikowana nazwa zwrócona przez system zewnętrzny. EG: dla NMIS używamy konfiguracji. rola Typ.';

$GLOBALS["lang"]['The fully qualified table.column. Multiple may be provided, separated by a comma (no spaces).'] = 'W pełni wykwalifikowany table.column. Można zapewnić wiele, oddzielone przecinkiem (bez spacji).';

$GLOBALS["lang"]['The generated SQL query to test for this vulnerability. This field can be edited to correct the query as required.'] = 'Wygenerowane zapytanie SQL, aby sprawdzić tę wrażliwość. To pole można edytować, aby skorygować zapytanie zgodnie z wymaganiami.';

$GLOBALS["lang"]['The group of devices on which the baseline was run against.'] = 'Grupa urządzeń, przeciwko którym uruchomiono punkt odniesienia.';

$GLOBALS["lang"]['The group that provides a list of devices for the integration. Links to <code>groups.id</code>.'] = 'Grupa, która dostarcza listę urządzeń do integracji. Linki do <code>groups.id</code>.';

$GLOBALS["lang"]['The hour of the day when this task should execute (* for every hour).'] = 'Godzina dnia, kiedy zadanie to powinno być wykonywane (* na każdą godzinę).';

$GLOBALS["lang"]['The id of the linked device. Links to <code>devices.id</code>'] = 'Identyfikator podłączonego urządzenia. Linki do <code>devices.id</code>';

$GLOBALS["lang"]['The identifier column (integer) in the database (read only).'] = 'Kolumna identyfikatora (liczba całkowita) w bazie danych (tylko do odczytu).';

$GLOBALS["lang"]['The importance of this baseline (not used yet).'] = 'Znaczenie tej wartości wyjściowej (jeszcze niewykorzystanej).';

$GLOBALS["lang"]['The integer of severity.'] = 'Liczba całkowita ciężkości.';

$GLOBALS["lang"]['The internal value, reformatted in this format.'] = 'Wartość wewnętrzna, zreformowana w tym formacie.';

$GLOBALS["lang"]['The ip address of the Auth method.'] = 'Adres IP metody Auth.';

$GLOBALS["lang"]['The language to translate the web interface into for the user.'] = 'Język do tłumaczenia interfejsu internetowego dla użytkownika.';

$GLOBALS["lang"]['The last date and time this item was executed (read only).'] = 'Ostatnia data i godzina wykonania tej pozycji (tylko do odczytu).';

$GLOBALS["lang"]['The last time that Open-AudIT retrieved details of this device.'] = 'Ostatni raz Open- Audit odzyskał szczegóły tego urządzenia.';

$GLOBALS["lang"]['The last time this benchmarks was executed.'] = 'Ostatni raz, gdy te kryteria zostały zrealizowane.';

$GLOBALS["lang"]['The last time this integration was run.'] = 'Ostatni raz ta integracja była prowadzona.';

$GLOBALS["lang"]['The license endpoint allows you to track the number of licenses found on your devices.'] = 'Punkt końcowy licencji pozwala na śledzenie liczby licencji znalezionych na urządzeniach.';

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

$GLOBALS["lang"]['The logic for device matching is contained in the devices_helper.php file, which on a Linux install can be found here'] = 'Logika dopasowania urządzenia jest zawarta w pliku directors _ helper.php, który można znaleźć tutaj w instalacji Linux';

$GLOBALS["lang"]['The machine-default permission settings do not grant Local Activation permission for the COM Server application with'] = 'Domyślne ustawienia uprawnień nie przyznają lokalnego zezwolenia na aktywację aplikacji COM Server';

$GLOBALS["lang"]['The maximum physical weight (in KGs) this rack can hold.'] = 'Maksymalny ciężar fizyczny (w KG) ten stojak może utrzymać.';

$GLOBALS["lang"]['The maximum total BTUs this rack is rated for.'] = 'Maksymalny całkowity BTU ten stojak jest oceniany dla.';

$GLOBALS["lang"]['The minimum required attributes for attributes are'] = 'Minimalne wymagane atrybuty atrybutów to:';

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

$GLOBALS["lang"]['The new Agent runs a PowerShell version of the old audit script in preparation for the depreciation of VBScript (yes, it is coming).'] = 'Nowy Agent uruchamia wersję PowerShell starego skryptu audytu w przygotowaniu do amortyzacji VBScript (tak, nadchodzi).';

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

$GLOBALS["lang"]['The offset is the count of devices you wish to return data from.'] = 'Offset to liczba urządzeń, z których chcesz zwrócić dane.';

$GLOBALS["lang"]['The only required permission / policy name (in our testing) is'] = 'Jedynym wymaganym zezwoleniem / nazwą polisy (w naszych testach) jest';

$GLOBALS["lang"]['The optional secondary column. NOTE: When type = traffic, this represents the yellow query id.'] = 'Nieobowiązkowa kolumna drugorzędna. UWAGA: When type = traffic, this represents the yellow query id.';

$GLOBALS["lang"]['The optional third column. NOTE: When type = traffic, this represents the green query id.'] = 'Opcjonalna trzecia kolumna. UWAGA: When type = traffic, this represents the green query id.';

$GLOBALS["lang"]['The order of information retrieval is snmp, ssh, wmi.'] = 'Kolejność wyszukiwania informacji to snmp, ssh, wmi.';

$GLOBALS["lang"]['The orientation of this device.'] = 'Kierunek tego urządzenia.';

$GLOBALS["lang"]['The password (if not using the user running the script).'] = 'Hasło (jeśli nie używa użytkownika uruchamiającego skrypt).';

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

$GLOBALS["lang"]['The primary method for authorization (what a user can do) is now based on the users Roles. Roles are defined as admin, org_admin, reporter, and user by default. Each role has a set of permissions (Create, Read, Update, Delete) for each endpoint. Standard roles as shipped should cover 99.9 percent of use-cases. The ability to define additional roles and edit existing roles is enabled in Open-AudIT Enterprise.'] = 'Podstawowa metoda autoryzacji (co użytkownik może zrobić) jest teraz oparta na użytkownikach Roles. Role są zdefiniowane jako admin, org _ admin, reporter i użytkownik domyślnie. Każda rola ma zestaw uprawnień (Tworzenie, Odczyt, Aktualizacja, Usuń) dla każdego punktu końcowego. Standardowe role w momencie wysyłki powinny obejmować 99,9% przypadków użycia. Możliwość zdefiniowania dodatkowych ról i edycji istniejących ról jest włączona w Open- Audit Enterprise.';

$GLOBALS["lang"]['The process identifier of this queue item.'] = 'Identyfikator procesu tej pozycji kolejki.';

$GLOBALS["lang"]['The process that was used last to retrieve details about the device'] = 'Proces, który został użyty ostatni do uzyskania szczegółów dotyczących urządzenia';

$GLOBALS["lang"]['The purpose of this licensing page is to list the products and licenses included in Firstwave Commercial products including products based upon open source works.Open-AudIT is licensed from Firstwave under AGPLv3 or later with Enterprise and Professional functionality licensed under commercial terms.Open-AudIT when downloaded from FirstWave may include the following libraries and projects, which are supplied unmodified and licensed as indicated:'] = 'Celem niniejszej strony licencyjnej jest lista produktów i licencji zawartych w firstwave handlowych produktów, w tym produktów opartych na pracach open source. Open-Audit jest licencjonowany z Firstwave pod AGPLv3 lub później z Enterprise i Professional funkcjonalności licencjonowane na warunkach komercyjnych. Open- Audit po pobraniu z FirstWave może zawierać następujące biblioteki i projekty, które są dostarczane niezmienione i licencjonowane zgodnie z wskazaniami:';

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

$GLOBALS["lang"]['The requested properties should be in a comma-separated list. Properties should be fully qualified - ie, system.hostname (not just hostname).'] = 'Wymagane właściwości powinny znajdować się na liście oddzielonej od comma. Właściwości powinny być w pełni zakwalifikowane - tj. system.hostname (nie tylko hostname).';

$GLOBALS["lang"]['The result of the command.'] = 'Wynik komendy.';

$GLOBALS["lang"]['The room the rack is located in.'] = 'Pokój, w którym znajduje się stojak.';

$GLOBALS["lang"]['The row the rack is located in.'] = 'Wiersz w którym znajduje się stojak.';

$GLOBALS["lang"]['The search for group on the LDAP server failed. Check the LDAP server logs. Have you created these groups (for roles and orgs) on the LDAP server and assigned LDAP users to them?'] = 'Poszukiwanie grupy na serwerze LDAP nie powiodło się. Sprawdź dzienniki serwerów LDAP. Czy stworzyłeś te grupy (dla ról i orgów) na serwerze LDAP i przydzieliłeś im użytkowników LDAP?';

$GLOBALS["lang"]['The secret key used in conjunction with your AWS EC2 API key.'] = 'Sekretny klucz używany w połączeniu z kluczem AWS EC2 API.';

$GLOBALS["lang"]['The software end-of-life date.'] = 'Data zakończenia życia oprogramowania.';

$GLOBALS["lang"]['The software end-of-service-life date.'] = 'Data zakończenia eksploatacji oprogramowania.';

$GLOBALS["lang"]['The specific database column from the specified database table.'] = 'Konkretna kolumna bazy danych z określonej tabeli bazy danych.';

$GLOBALS["lang"]['The specific database table.'] = 'Specjalna tabela bazy danych.';

$GLOBALS["lang"]['The standard Nmap timing options. Previously set at T4 (aggressive).'] = 'Standardowe opcje Nmap. Poprzednio w T4 (agresja).';

$GLOBALS["lang"]['The standard Nmap timing options. We usually use -T4 (Aggressive) as this is recommended for a decent broadband or ethernet connection.'] = 'Standardowe opcje Nmap. Zwykle używamy -T4 (Agresywny), ponieważ jest to zalecane dla przyzwoitego połączenia szerokopasmowego lub ethernet.';

$GLOBALS["lang"]['The status of this integration'] = 'Status tej integracji';

$GLOBALS["lang"]['The status of this queued item.'] = 'Status tego elementu w kolejce.';

$GLOBALS["lang"]['The steps below outline the process.'] = 'Poniższe etapy opisują proces.';

$GLOBALS["lang"]['The target IP this log entry referers to (if any).'] = 'Docelowy IP ten wpis dziennika odnosi się do (jeśli dotyczy).';

$GLOBALS["lang"]['The target computer to audit. \".\" means localhost.'] = 'Komputer docelowy do audytu.\. "\" oznacza localhost.';

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

$GLOBALS["lang"]['The unfiltered state means that a port is accessible, but Nmap is unable to determine whether it is open or closed. Only the ACK scan, which is used to map firewall rulesets, classifies ports into this state. Scanning unfiltered ports with other scan types such as Window scan, SYN scan, or FIN scan, may help resolve whether the port is open.'] = 'Stan niefiltrowany oznacza, że port jest dostępny, ale Nmap nie jest w stanie określić, czy jest otwarty czy zamknięty. Tylko skaner ACK, który służy do mapowania zasad firewall, klasyfikuje porty do tego stanu. Skanowanie niefiltrowanych portów z innymi typami skanowania, takimi jak skanowanie okien, skanowanie SYN lub skanowanie FIN, może pomóc w rozwiązaniu, czy port jest otwarty.';

$GLOBALS["lang"]['The unique identifier of this server.'] = 'Unikalny identyfikator tego serwera.';

$GLOBALS["lang"]['The user account this collector uses. Links to <code>users.id</code>.'] = 'Konto użytkownika tego kolekcjonera używa. Linki do <code>users.id</code>.';

$GLOBALS["lang"]['The user in Active Directory / OpenLDAP must be a direct member of the required Open-AudIT groups for Roles and Orgs. A member of a group that is a member another group that is a member of the Open-AudIT group will not work.'] = 'Użytkownik Active Directory / OpenLDAP musi być bezpośrednim członkiem wymaganych grup Open- Audit dla Roles i Orgs. Członek grupy, która jest członkiem innej grupy, która jest członkiem grupy Open- Audit nie będzie działać.';

$GLOBALS["lang"]['The user is in LDAP and their credentials are valid, but is not in any of the Open-AudIT LDAP groups for Orgs.'] = 'Użytkownik jest w LDAP i ich referencje są ważne, ale nie jest w żadnej z grup Open- Audit LDAP dla Orgs.';

$GLOBALS["lang"]['The user is in LDAP and their credentials are valid, but is not in any of the Open-AudIT LDAP groups for Roles.'] = 'Użytkownik jest w LDAP i ich referencje są ważne, ale nie jest w żadnej z grup Open- Audit LDAP dla Roles.';

$GLOBALS["lang"]['The user is in LDAP and their credentials are valid, but is not in any of the required Open-AudIT LDAP groups.'] = 'Użytkownik jest w LDAP i ich referencje są ważne, ale nie jest w żadnej z wymaganych grup Open- Audit LDAP.';

$GLOBALS["lang"]['The user is in the LDAP group that matches this Org.'] = 'Użytkownik jest w grupie LDAP, która pasuje do tego Orga.';

$GLOBALS["lang"]['The user is in the LDAP group that matches this Role.'] = 'Użytkownik jest w grupie LDAP, która pasuje do tej roli.';

$GLOBALS["lang"]['The user is not in the LDAP group that matches this Org.'] = 'Użytkownik nie należy do grupy LDAP, która pasuje do tego Org.';

$GLOBALS["lang"]['The user is not in the LDAP group that matches this Role.'] = 'Użytkownik nie należy do grupy LDAP, która pasuje do tej roli.';

$GLOBALS["lang"]['The user that was specified exists in LDAP, but Open-AudIT is not configured to consume the LDAP groups for roles and that user does not exist within Open-AudIT. Either select <i>Use LDAP for Roles</i> on the Open-AudIT LDAP Server screen or create this user within Open-AudIT and assign roles and orgs.'] = 'Użytkownik, który został określony istnieje w LDAP, ale Open-Audit nie jest skonfigurowany do wykorzystania grup LDAP dla ról i że użytkownik nie istnieje w Open-Audit. Wybierz <i>Użyj LDAP dla rolki</i> w sprawie Open- Audit LDAP Ekran serwera lub utworzyć tego użytkownika w Open- Audit i przypisać role i orgs.';

$GLOBALS["lang"]['The username (if not using the user running the script).'] = 'Nazwa użytkownika (jeśli nie używa użytkownika uruchamiającego skrypt).';

$GLOBALS["lang"]['The username used to access the external system.'] = 'Nazwa użytkownika użyta do uzyskania dostępu do systemu zewnętrznego.';

$GLOBALS["lang"]['The users details were not retrieved from LDAP. Check the LDAP server logs.'] = 'Szczegóły dotyczące użytkowników nie zostały pobrane z LDAP. Sprawdź dzienniki serwerów LDAP.';

$GLOBALS["lang"]['The users details were retrieved from LDAP.'] = 'Dane użytkowników zostały pobrane z LDAP.';

$GLOBALS["lang"]['The users email address.'] = 'Adres e-mail użytkowników.';

$GLOBALS["lang"]['The usual hours of operation at this site.'] = 'Zwykłe godziny operacji na tej stronie.';

$GLOBALS["lang"]['The value assigned to the item.'] = 'Wartość przypisana do pozycji.';

$GLOBALS["lang"]['The value that is stored for this particular item.'] = 'Wartość, która jest przechowywana dla tego konkretnego elementu.';

$GLOBALS["lang"]['The vendor name as per CPE entries.'] = 'Nazwa sprzedawcy według wpisów CPE.';

$GLOBALS["lang"]['The vendor taken from the CPE.'] = 'Sprzedawca z CPE.';

$GLOBALS["lang"]['The web directory on the host that Open-AudIT is installed (requires a trailing slash).'] = 'Katalog internetowy na hoście, który jest zainstalowany Open- Audit (wymaga ukośnika).';

$GLOBALS["lang"]['The widget at position '] = 'Widget na pozycji ';

$GLOBALS["lang"]['The width of this device.'] = 'Szerokość tego urządzenia.';

$GLOBALS["lang"]['Their OrgIDs and their descendants'] = 'Ich organy i potomkowie';

$GLOBALS["lang"]['Their OrgIDs only'] = 'Tylko ich organy';

$GLOBALS["lang"]['Their OrgIDs, ascendants and descendants'] = 'Ich organy, wznoszący się i potomkowie';

$GLOBALS["lang"]['Then'] = 'Wtedy';

$GLOBALS["lang"]['Then create a new Auth method in Open-AudIT by going to menu -> Admin -> Auth Methods -> Create Auth. Provide a name and set the <i>type</i> to Entra.'] = 'Następnie utwórz nową metodę Auth w Open-Audit idąc do menu - > Admin - > Metody Auth - > Stwórz Auth. Należy podać nazwę i ustawić <i>typ</i> do Entra.';

$GLOBALS["lang"]['Then you can use Open-AudIT (unsupported) to receive audit data directly from the clients. Discovery <strong>will fail</strong>, but if youre not using Discovery (the main feature Open-AudIT was designed around), you can still get device data. You would need to run the audit scripts directly on the clients using cron, or use the Windows Agent feature (Enterprise only).'] = 'Następnie można użyć Open- Audit (nieobsługiwane) do otrzymywania danych z audytu bezpośrednio od klientów. Odkrycie <strong>nie uda się</strong>, ale jeśli nie używasz Discovery (główna funkcja Open- Audit został zaprojektowany wokół), nadal można uzyskać dane urządzenia. Trzeba by uruchomić skrypty audytu bezpośrednio na klientów za pomocą cron, lub korzystać z funkcji Windows Agent (tylko Enterprise).';

$GLOBALS["lang"]['There is a button to export to JSON. This will display only the device table of attributes. To export the device with all associated component tables, view the device details, then add'] = 'Jest przycisk do eksportu do JSON. Wyświetla tylko tabelę atrybutów urządzenia. Aby eksportować urządzenie ze wszystkimi załączonymi tabelami komponentów, zobacz szczegóły urządzenia, a następnie dodaj';

$GLOBALS["lang"]['There is absolutely no need to manually edit each individual device.'] = 'Nie ma absolutnie potrzeby ręcznej edycji każdego urządzenia.';

$GLOBALS["lang"]['There is no need to do anything if you are running Open-AudIT on a Linux server.<br><br>Windows clients are just fine and require no special actions, however.... to enable this feature the audit script must be run locally on the target Windows system. It cannot be run remotely as we do with WMI calls when running the audit script on one Windows machine, while targeting a second Windows machine. To do this we need to copy the audit script to the target Windows machine and then run it. Unfortunately the service account that Apache runs under is the Local System account. This account has no access to remote (network based) resources. To work around this issue the service must be run under another account. It is easiest to just use the local Administrator account, but you can try any account you like as long as it has the required privileges. The Local System account has as much local access as the local Administrator account.'] = 'Nie ma potrzeby nic robić, jeśli uruchomisz Open- Audit na serwerze Linux.<br/><br/>Klienci Windows są po prostu w porządku i nie wymagają specjalnych działań, jednak.... aby włączyć tę funkcję skrypt audytu musi być uruchomiony lokalnie w docelowym systemie Windows. Nie można go zdalnie uruchomić, tak jak to robimy z wywołaniami WMI podczas uruchamiania skryptu audytu na jednej maszynie Windows, a jednocześnie celować w drugą maszynę Windows. Aby to zrobić, musimy skopiować skrypt audytu do docelowej maszyny Windows, a następnie uruchomić go. Niestety konto serwisowe, pod którym działa Apache, to konto systemu lokalnego. Konto to nie ma dostępu do zasobów zdalnych (sieciowych). Aby rozwiązać ten problem, usługa musi być prowadzona na innym koncie. Najłatwiej jest po prostu korzystać z lokalnego konta administratora, ale można spróbować dowolnego konta, jeśli ma wymagane uprawnienia. Konto systemu lokalnego ma taki sam dostęp lokalny jak lokalne konto administratora.';

$GLOBALS["lang"]['These are only examples. You may need to adjust these attributes to suit your particular LDAP.'] = 'To tylko przykłady. Może być konieczne dostosowanie tych atrybutów do danego LDAP.';

$GLOBALS["lang"]['These parameters enable you to audit only what is useful and relevant to you, saving processing time and allowing you to discover your network in an orderly manner.'] = 'Parametry te pozwalają na kontrolowanie tylko tego, co jest przydatne i istotne dla Ciebie, oszczędzając czas przetwarzania i pozwalając na odkrywanie sieci w sposób uporządkowany.';

$GLOBALS["lang"]['Thing'] = 'Rzecz';

$GLOBALS["lang"]['Think of mail.domain1.com and mail.domain2.com - same hostname.'] = 'Pomyśl o mail.domain1.com i mail.domain2.com - ten sam hostname.';

$GLOBALS["lang"]['Third'] = 'Trzeci';

$GLOBALS["lang"]['This CVE will be retrieved and overwrite the existing CVE if it exists.'] = 'Ten plik CVE zostanie odzyskany i nadpisany, jeśli istnieje.';

$GLOBALS["lang"]['This Org has no AD group specified. Check the roles details within Open-AudIT.'] = 'Ten Org nie ma określonej grupy AD. Sprawdź szczegóły ról w Open- Audit.';

$GLOBALS["lang"]['This Org has no AD group specified. Check the roles details within Open-AudIT. <span class=\"confluence-link\">Have you created these groups (for orgs) on the LDAP server and assigned LDAP users to them?'] = 'Ten Org nie ma określonej grupy AD. Sprawdź szczegóły ról w Open- Audit. <span class=\'\"confluence-link\"\'>Czy na serwerze LDAP stworzyłeś te grupy (dla orgów) i przydzieliłeś im użytkowników LDAP?</span>';

$GLOBALS["lang"]['This Role has no AD group specified. Check the roles details within Open-AudIT.'] = 'Ta rola nie ma określonej grupy AD. Sprawdź szczegóły ról w Open- Audit.';

$GLOBALS["lang"]['This attribute is stored as a JSON object. It is the list of all collections and contains the collection name along with <code>c</code>, <code>r</code>, <code>u</code> and,or <code>d</code> which represent create, read, update and delete. These are the actions a user can perform on items from that particular collection.'] = 'Atrybut ten jest zapisany jako obiekt JSON. Jest to lista wszystkich kolekcji i zawiera nazwę kolekcji wraz z <code>c</code>, <code>r</code>, <code>u</code> oraz lub <code>d</code> które reprezentują tworzenie, czytanie, aktualizację i usuwanie. Są to działania, które użytkownik może wykonać na elementach z danej kolekcji.';

$GLOBALS["lang"]['This can be either a varchar (a text field), a list (a list of values that can be selected) or a date.'] = 'Może to być varchar (pole tekstowe), lista (lista wartości, które mogą być wybrane) lub data.';

$GLOBALS["lang"]['This code relys on the great work done by the'] = 'Ten kod relys na wielką pracę wykonaną przez';

$GLOBALS["lang"]['This collectors universally unique identifier.'] = 'Kolekcjonery te są powszechnie niepowtarzalnym identyfikatorem.';

$GLOBALS["lang"]['This column is required by'] = 'Ta kolumna jest wymagana przez';

$GLOBALS["lang"]['This column is required by '] = 'Ta kolumna jest wymagana przez ';

$GLOBALS["lang"]['This description is auto-populated and should ideally be left as-is.'] = 'Opis ten jest autozaludniony i najlepiej zostawić jako -is.';

$GLOBALS["lang"]['This endpoint enables you to add the connections that are part of your network infrastructure, it allows you to customize a variety of attributes, specify where this connection is located and the organization that it belongs.'] = 'Ten punkt końcowy pozwala na dodanie połączeń, które są częścią infrastruktury sieciowej, pozwala dostosować różne atrybuty, określić, gdzie to połączenie jest zlokalizowane i organizacji, że należy.';

$GLOBALS["lang"]['This error indicates that SMB1 has been disabled or removed from the target machine. This is normal for modern version of Windows and you will only see this message when the SMB2 connection attempt has failed. If the SMB2 connection fails, we attempt SMB1 to enable discovery on old versions of Windows. If the target Windows machine <i>is</i> running an old version of Windows, it is likely your credentials have failed. In that case, see'] = 'Błąd ten wskazuje, że SMB1 został wyłączony lub usunięty z maszyny docelowej. Jest to normalne dla nowoczesnej wersji systemu Windows i zobaczysz tę wiadomość tylko wtedy, gdy próba połączenia SMB2 nie powiodła się. Jeśli połączenie SMB2 się nie powiedzie, podejmujemy próbę SMB1, aby umożliwić odkrycie starych wersji systemu Windows. Jeśli docelowa maszyna Windows <i>en</i> uruchamianie starej wersji Windows, jest prawdopodobne, że Twoje referencje zawiodły. W takim przypadku';

$GLOBALS["lang"]['This error indicates that not enough virtual memory or paging file quota is available to complete the specified operation. You should try again later.'] = 'Błąd ten wskazuje, że do zakończenia określonej operacji dostępna jest niewystarczająca ilość wirtualnej pamięci lub pagingu plików. Powinieneś spróbować później.';

$GLOBALS["lang"]['This error indicates the credentials used either are incorrect, do not exist or do not have sufficient privileges to log on remotely to the target Windows machine. You should verify the credentials and check the below.'] = 'Błąd ten wskazuje, że dane uwierzytelniające są nieprawidłowe, nie istnieją lub nie mają wystarczających uprawnień do zdalnego logowania się do docelowej maszyny Windows. Powinieneś zweryfikować referencje i sprawdzić poniżej.';

$GLOBALS["lang"]['This example creates a list of all Modules marked as'] = 'Ten przykład tworzy listę wszystkich modułów oznaczonych jako';

$GLOBALS["lang"]['This example creates a list of devices and the open Ports, Protocols, and Programs found by the NMAP scan.'] = 'Ten przykład tworzy listę urządzeń oraz otwarte Porty, Protokoły i Programy znalezione przez skanowanie NMAP.';

$GLOBALS["lang"]['This example creates a list of devices where the Function or Description fields are blank OR the Purchase Date is the default.'] = 'Przykład ten tworzy listę urządzeń, w których pola funkcji lub opisu są puste, OR Domyślna data zakupu.';

$GLOBALS["lang"]['This example query retrieves a list of devices OVER 3 years old. The query uses today'] = 'Ten przykład zapytanie pobiera listę urządzeń Over 3 lat. Zapytanie wykorzystuje dzisiaj';

$GLOBALS["lang"]['This example uses'] = 'Ten przykład wykorzystuje';

$GLOBALS["lang"]['This feature requires a Professional or an Enterprise license.'] = 'Ta funkcja wymaga licencji Professional lub Enterprise.';

$GLOBALS["lang"]['This feature, because it has the ability to affect target devices more than usual must be manually enabled. To enable this feature, change the configuration item feature_executables to <i>yes</i>.'] = 'Ta funkcja, ponieważ ma zdolność do wpływu na urządzenia docelowe bardziej niż zwykle musi być ręcznie włączona. Aby włączyć tę funkcję, zmień element konfiguracyjny feature _ executables na <i>tak</i>.';

$GLOBALS["lang"]['This file tells Linux to poll the application to determine if there are any scheduled tasks that should be run.'] = 'Plik ten mówi Linuksowi, aby przebadał aplikację, aby ustalić, czy są jakieś zaplanowane zadania, które należy uruchomić.';

$GLOBALS["lang"]['This form provides a simple way to get started discovering the devices on your network. For more (much more) detailed options, you can individually create'] = 'Formularz ten stanowi prosty sposób na rozpoczęcie odkrywania urządzeń w sieci. Aby uzyskać więcej (znacznie więcej) szczegółowych opcji, można indywidualnie utworzyć';

$GLOBALS["lang"]['This is also the way that PAExec works.'] = 'Tak działa również PAExec.';

$GLOBALS["lang"]['This is an optional configuration option, enabled by setting discovery_use_org_id_match in the global configuration.'] = 'Jest to opcjonalna opcja konfiguracji, umożliwiająca ustawienie discovery _ use _ org _ id _ match w konfiguracji globalnej.';

$GLOBALS["lang"]['This is generally the primary column, unless otherwise configured. NOTE: When type = traffic, this represents the secondary text.'] = 'Jest to zazwyczaj pierwsza kolumna, chyba że skonfigurowano inaczej. UWAGA: Gdy typ = ruch, reprezentuje to tekst drugorzędny.';

$GLOBALS["lang"]['This is likely due to MySQL time being off. MySQL typically uses the host devices time. You can check this by'] = 'Jest to prawdopodobnie spowodowane brakiem czasu MySQL. MySQL zazwyczaj używa czasu urządzeń hosta. Możesz to sprawdzić';

$GLOBALS["lang"]['This is settable by users and so even though it should be globally unique, there is certainly no guarantee of this.'] = 'Jest to możliwe do ustalenia przez użytkowników, a więc nawet jeśli powinno być globalne unikalne, z pewnością nie ma na to gwarancji.';

$GLOBALS["lang"]['This is the directory where we store any attachments to devices.'] = 'To jest katalog, w którym przechowujemy wszelkie załączniki do urządzeń.';

$GLOBALS["lang"]['This is to be used as the first point of call when troubleshooting Open-AudIT issues. You can click the Export button on the top right to retrieve this as a JSON file (to be added to the support ticket / email.'] = 'Jest to pierwszy punkt połączenia przy rozwiązywaniu problemów Open- Audit. Możesz kliknąć przycisk Eksportuj w prawym górnym rogu, aby pobrać to jako plik JSON (należy dodać do biletu / e-mail wsparcia.';

$GLOBALS["lang"]['This issue is under investigation.'] = 'Sprawa ta jest przedmiotem dochodzenia.';

$GLOBALS["lang"]['This item must match the value of the attribute selected or contains the ID of the query to be used.'] = 'Ta pozycja musi odpowiadać wartości wybranego atrybutu lub zawiera identyfikator używanego zapytania.';

$GLOBALS["lang"]['This item must match the value of the attribute selected.'] = 'Ta pozycja musi odpowiadać wartości wybranego atrybutu.';

$GLOBALS["lang"]['This license expires on'] = 'Ta licencja wygasa w dniu';

$GLOBALS["lang"]['This security permission can be modified using the Component Services administrative tool.'] = 'Zezwolenie na ochronę można modyfikować za pomocą narzędzia administracyjnego Usług komponentowych.';

$GLOBALS["lang"]['This should be commented out after troubleshooting as debug mode will generate a lot of logs on the disk for no benefit.'] = 'Należy to skomentować po rozwiązaniu problemu, ponieważ tryb debugowania wygeneruje wiele dzienników na dysku bez żadnych korzyści.';

$GLOBALS["lang"]['This should be globally unique, but I have seen instances where it is not.'] = 'Powinno to być globalne unikalne, ale widziałem przypadki, w których nie istnieje.';

$GLOBALS["lang"]['This should be set to either 1 or the height of the rack.'] = 'To powinno być ustawione na 1 lub wysokość stojaka.';

$GLOBALS["lang"]['This should be the fully qualified field name in the database. Currently columns from the system, fields and credentials tables are supported. EG: system.nmis_role.'] = 'Powinno to być w pełni wykwalifikowaną nazwą pola w bazie danych. Obecnie obsługiwane są kolumny z systemu, pola i tablice uwierzytelniania. EG: system.nmis _ role.';

$GLOBALS["lang"]['This state is used when Nmap is unable to determine whether a port is closed or filtered. It is only used for the IP ID idle scan.'] = 'Stan ten jest stosowany, gdy Nmap nie jest w stanie określić, czy port jest zamknięty czy filtrowany. Jest on stosowany tylko do skanowania IP ID bezczynności.';

$GLOBALS["lang"]['This will auto-populate.'] = 'To będzie autopopulacja.';

$GLOBALS["lang"]['This will considerably slow the discovery scan.'] = 'To znacznie spowolni skanowanie.';

$GLOBALS["lang"]['This will delete the current rows in the'] = 'To usunie bieżące wiersze w';

$GLOBALS["lang"]['This will permanently DELETE this license.'] = 'To na stałe ZDELETE tej licencji.';

$GLOBALS["lang"]['This will show you the Bulk Edit form. Any attributes you set on this form will be applied to all selected devices. You can set multiple attributes at once.'] = 'Pokaże Ci to formularz edycji luzem. Wszelkie atrybuty, które ustawisz w tym formularzu, będą stosowane do wszystkich wybranych urządzeń. Możesz ustawić wiele atrybutów jednocześnie.';

$GLOBALS["lang"]['Thursday'] = 'Czwartek';

$GLOBALS["lang"]['time_caption'] = 'Czas';

$GLOBALS["lang"]['Time Caption'] = 'Czas';

$GLOBALS["lang"]['time_daylight'] = 'Światło dzienne czasu';

$GLOBALS["lang"]['Time Daylight'] = 'Światło dzienne czasu';

$GLOBALS["lang"]['Time to Execute'] = 'Czas do wykonania';

$GLOBALS["lang"]['timeout'] = 'Czas';

$GLOBALS["lang"]['Timeout'] = 'Czas';

$GLOBALS["lang"]['Timeout Per Target (Seconds)'] = 'Czas na cel (sekundy)';

$GLOBALS["lang"]['Timeout per Target. Wait for X seconds for a target response.'] = 'Czas na cel. Poczekajcie na odpowiedź X sekund.';

$GLOBALS["lang"]['Timesatamp'] = 'Plan lekcji';

$GLOBALS["lang"]['Timestamp'] = 'Znacznik czasu';

$GLOBALS["lang"]['timing'] = 'Czas';

$GLOBALS["lang"]['Timing'] = 'Czas';

$GLOBALS["lang"]['Timor-Leste'] = 'Timor Wschodni';

$GLOBALS["lang"]['Title'] = 'Tytuł';

$GLOBALS["lang"]['To a new file named .env (in the same directory). Now edit that new file and uncomment (remove the #) the line below (line 17)'] = 'Do nowego pliku o nazwie .env (w tym samym katalogu). Teraz edytuj ten nowy plik i odkomentuj (usuń #) linię poniżej (linia 17)';

$GLOBALS["lang"]['To actually execute the query, append a /execute, thus /open-audit/index.php/queries/{$id}/execute.'] = 'Aby faktycznie wykonać zapytanie, dołącz a / execute, tym samym / open- audit / index.php / queries / {$id} / execute.';

$GLOBALS["lang"]['To audit a machine, you must have credentials and administrator level access.'] = 'Aby kontrolować maszynę, musisz mieć referencje i dostęp do poziomu administratora.';

$GLOBALS["lang"]['To audit a remote machine on an Active Directory domain, your supplied user (or if none provided, the user running the script) must be a member of the target machines Administrators group (or subgroup).'] = 'Aby kontrolować zdalną maszynę w domenie Active Directory, dostarczany użytkownik (lub jeśli nie jest dostarczony, użytkownik uruchamiający skrypt) musi być członkiem grupy administratorów maszyn docelowych (lub podgrupy).';

$GLOBALS["lang"]['To audit a remote machine that is not in a domain, you must use the Administrator account (not <i>an</i> admin account, <i>the</i> Administrator account) on the target PC. #1 and #2'] = 'Aby kontrolować zdalną maszynę, która nie znajduje się w domenie, musisz użyć konta administratora (nie <i>do</i> konto administratora, <i>do</i> Konto administratora) na docelowym komputerze. # 1 i # 2';

$GLOBALS["lang"]['To audit localhost, any supplied credentials are disregarded and the connection is made using the details of the user running the script.'] = 'Do audytu localhost, wszelkie dostarczone referencje nie są brane pod uwagę i połączenie odbywa się przy użyciu szczegółów użytkownika uruchamiającego skrypt.';

$GLOBALS["lang"]['To compare software we check the name and version. Because version numbers are not all standardised in format, when we receive an audit result we create a new attribute called software_padded which we store in the database along with the rest of the software details for each package. For this reason, baselines using software policies will not work when run against a device that has not been audited by 1.10 (at least). Software policies can test against the version being <i>equal to</i>, <i>greater than</i> or <i>equal to or greater than</i>.'] = 'Aby porównać oprogramowanie sprawdzamy nazwę i wersję. Ponieważ numery wersji nie są znormalizowane w formacie, kiedy otrzymujemy wynik audytu tworzymy nowy atrybut o nazwie software _ padded, który przechowujemy w bazie danych wraz z resztą szczegółów oprogramowania dla każdego pakietu. Z tego powodu linie bazowe wykorzystujące politykę oprogramowania nie będą działać, gdy będą działać przeciwko urządzeniu, które nie zostało skontrolowane do 1.10 (co najmniej). Polityka oprogramowania może testować na wersji <i>równa się</i>, <i>większa niż</i> lub <i>równa lub większa niż</i>.';

$GLOBALS["lang"]['To create a new entry click the Create button in the upper right hand corner.'] = 'Aby utworzyć nowy wpis kliknij przycisk Utwórz w prawym górnym rogu.';

$GLOBALS["lang"]['To create a resource, you should POST the required data.'] = 'Aby utworzyć zasób, należy POST wymagane dane.';

$GLOBALS["lang"]['To enable a remote machine (Vista or above) to be audited that is not on a domain, by an account in the Administrators group, other than the actual Administrator account see the below section on UAC.'] = 'Aby umożliwić kontrolę zdalnej maszyny (Vista lub powyżej), która nie znajduje się na domenie, przez konto w grupie administratorów, inne niż rzeczywiste konto administratora, patrz poniższa sekcja UAC.';

$GLOBALS["lang"]['To enable this, create a new Auth item by going to menu -> Admin -> Auth -> Create Auth Method.'] = 'Aby to włączyć, utwórz nowy element Auth idąc do menu - > Admin - > Auth - > Utwórz metodę Auth.';

$GLOBALS["lang"]['To execute the Windows powershell script, open a command prompt as Administrator and use the following command'] = 'Aby uruchomić skrypt powershell systemu Windows, otwórz polecenie jako Administrator i użyj następującego polecenia';

$GLOBALS["lang"]['To execute the audit script, open a terminal and use the following command'] = 'Aby wykonać skrypt audytu, otwórz terminal i użyj następującego polecenia';

$GLOBALS["lang"]['To filter by a property value, use the property name. Operators that should precede the value are'] = 'Aby filtrować według wartości właściwości, użyj nazwy właściwości. Operatorzy, którzy powinni poprzedzić wartość są';

$GLOBALS["lang"]['To install Nmap on Windows, visit the Nmap page at'] = 'Aby zainstalować Nmap na Windows, odwiedź stronę Nmap na';

$GLOBALS["lang"]['To make the change, just follow the steps below.'] = 'Aby dokonać zmiany, należy postępować zgodnie z poniższymi krokami.';

$GLOBALS["lang"]['To retrieve the Tenant ID. Open the Azure portal click on Azure Active Directory, Properties and the Tenant ID is displayed as your Directory ID - do not blame me for the name mismatch, that is how Microsoft roll.'] = 'Żeby odzyskać dowód tożsamości Tenanta. Otwórz portal Azure kliknij na Azure Active Directory, Właściwości i ID Tenant jest wyświetlany jako ID katalogu - nie wiń mnie za niedopasowanie nazwy, tak Microsoft roll.';

$GLOBALS["lang"]['To retrieve your key, log in to the AWS Console and select your username, then My Security Credentials.'] = 'Aby odzyskać swój klucz, zaloguj się do konsoli AWS i wybierz nazwę użytkownika, a następnie Moje Kredyty Bezpieczeństwa.';

$GLOBALS["lang"]['To return a specific component item.'] = 'Zwraca określony element składowy.';

$GLOBALS["lang"]['To return all items for a compnent type for a specific device.'] = 'Aby zwrócić wszystkie elementy dla typu compnent dla określonego urządzenia.';

$GLOBALS["lang"]['To return all items for a component type. If you wanted all software you would use'] = 'Zwraca wszystkie elementy dla danego typu elementu. Gdybyś chciał użyć wszystkich programów';

$GLOBALS["lang"]['To reverse sort, insert a minus, thus'] = 'Aby odwrócić sortowanie, wstawić minus, więc';

$GLOBALS["lang"]['To run the test script on the target Windows PC'] = 'Aby uruchomić skrypt testowy na docelowym komputerze Windows';

$GLOBALS["lang"]['To select devices to be integrated, we use nmis_manage = y, but you might like (for example) type = router. You can also use a Group or Query if you prefer something more complex.'] = 'Aby wybrać urządzenia, które mają być zintegrowane, użyjemy nmis _ manage = y, ale możesz chcieć (na przykład) type = router. Możesz również użyć grupy lub pytania, jeśli wolisz coś bardziej skomplikowanego.';

$GLOBALS["lang"]['To sort by a database column, use'] = 'Aby sortować przez kolumnę bazy danych, użyj';

$GLOBALS["lang"]['To use this Enterprise feature, you first need to create your user in Open-AudIT as per usual. Assigning a password is not necessary. You do have to assign Roles and Orgs. The username in Open-AudIT should match the Entra <i>preferred username</i> attribute. There is no need for a Full Name or Email - these will be populated from Entra. If you do not know your users <i>preferred username</i>, fear not. You can create the new Auth Method in Open-AudIT and the Enterprise Application in Entra and when a user attempts to sign-on to Open-AudIT without a pre-existing user, check the logs and you will see their <i>preferred username</i> logged for your convienence.'] = 'Aby korzystać z tej funkcji Enterprise, musisz najpierw utworzyć użytkownika w Open- Audit jak zwykle. Przypisanie hasła nie jest konieczne. Musisz przydzielić Roles i Orgs. Nazwa użytkownika w Open- Audit powinna pasować do Entra <i>preferowana nazwa użytkownika</i> atrybut. Nie ma potrzeby, aby pełna nazwa lub e-mail - będą one zaludnione z Entra. Jeśli nie znasz swoich użytkowników <i>preferowana nazwa użytkownika</i>Nie bój się. Możesz utworzyć nową metodę Auth w Open-Audit i aplikacji Enterprise w Entra, a gdy użytkownik próbuje się zalogować do Open-Audit bez wcześniej istniejącego użytkownika, sprawdź dzienniki i zobaczysz ich <i>preferowana nazwa użytkownika</i> Zalogowane dla Twojej konwienencji.';

$GLOBALS["lang"]['To use this Enterprise feature, you first need to create your user in Open-AudIT as per usual. Assigning a password is not necessary. You do have to assign Roles and Orgs. The username in Open-AudIT should match the OKTA <i>name</i> attribute. There is no need for a Full Name or Email - these will be populated from OKTA. If you do not know your users <i>name<i>, fear not. You can create the new Auth Menthod in Open-AudIT and the Application in OKTA and when a user attempts to sign-on to Open-AudIT without a pre-existing user, check the logs and you will see their <i>name<i> logged for your convienence.<br></p><p>Then create a new Auth method in Open-AudIT by going to menu -> Admin -> Auth Methods -> Create Auth. Provide a name and set the <i>type</i> to Okta.'] = 'Aby korzystać z tej funkcji Enterprise, musisz najpierw utworzyć użytkownika w Open- Audit jak zwykle. Przypisanie hasła nie jest konieczne. Musisz przydzielić Roles i Orgs. Nazwa użytkownika Open- Audit powinna pasować do OKTA <i>nazwa</i> atrybut. Nie ma potrzeby na pełne imię i nazwisko lub email - będą one zaludnione z OKTA. Jeśli nie znasz swoich użytkowników <i>nazwa<i>Nie bój się. Możesz utworzyć nowe Auth Menthod w Open-Audit i aplikacji w OKTA, a gdy użytkownik próbuje signing- na Open-Audit bez wcześniej istniejącego użytkownika, sprawdzić logi i zobaczysz ich <i>nazwa<i> Zalogowane dla Twojej konwienencji.<br/><p>Następnie utwórz nową metodę Auth w Open-Audit idąc do menu - > Admin - > Metody Auth - > Stwórz Auth. Należy podać nazwę i ustawić <i>typ</i> do Okty.</p></i></i></i></i>';

$GLOBALS["lang"]['To use this feature you must enable the configuration items match_mac (for AWS) and match_hostname (for Azure). This will be done automatically the first time a cloud discovery is executed. For more on Open-AudITs matching rules see HERE: Matching Devices'] = 'Aby korzystać z tej funkcji, musisz włączyć pozycje konfiguracyjne match _ mac (dla AWS) i match _ hostname (dla Azure). Zostanie to wykonane automatycznie przy pierwszym uruchomieniu odkrycia w chmurze. Więcej informacji na temat zasad dopasowywania Open- Audits patrz TUTAJ: Urządzenia pasujące';

$GLOBALS["lang"]['To view the details of a query, the standard URL structure of /open-audit/index.php/queries/{$id} should be used.'] = 'Aby zobaczyć szczegóły zapytania, standardowa struktura URL / open- audit / index. Należy użyć php / queries / {$id}.';

$GLOBALS["lang"]['Togo'] = 'Togo';

$GLOBALS["lang"]['Tokelau'] = 'Tokelau';

$GLOBALS["lang"]['Tonga'] = 'Tonga';

$GLOBALS["lang"]['toolbar_style'] = 'Styl paska narzędzi';

$GLOBALS["lang"]['Toolbar Style'] = 'Styl paska narzędzi';

$GLOBALS["lang"]['Top Nmap TCP Ports'] = 'Top Nmap TCP Ports';

$GLOBALS["lang"]['Top Nmap TCP Ports. The top 10, 100, 1000 ports to scan as per Nmaps &quot;top ports&quot; options.'] = 'Top Nmap TCP Ports. Top 10, 100, 1000 portów do skanowania w Nmaps opcji "top ports".';

$GLOBALS["lang"]['Top Nmap UDP Ports'] = 'Top Nmap Porty UDP';

$GLOBALS["lang"]['Top Nmap UDP Ports. The top 10, 100, 1000 ports to scan as per Nmaps &quot;top ports&quot; options.'] = 'Top Nmap UDP Ports. Top 10, 100, 1000 portów do skanowania w Nmaps opcji "top ports".';

$GLOBALS["lang"]['Traditional Chinese'] = 'Tradycyjny chiński';

$GLOBALS["lang"]['Traffic Light'] = 'Światła drogowe';

$GLOBALS["lang"]['Trinidad and Tobago'] = 'Trynidad i Tobago';

$GLOBALS["lang"]['Troubleshooting'] = 'Rozwiązywanie problemów';

$GLOBALS["lang"]['Troubleshooting LDAP Logins'] = 'Rozwiązywanie problemów związanych z logowaniem LDAP';

$GLOBALS["lang"]['Try Open-AudIT Enterprise, on us without a time limit. All the features of Enterprise. Limited to 20 devices.'] = 'Spróbuj Open- Audit Enterprise, na nas bez ograniczeń czasowych. Wszystkie cechy Enterprise. Ograniczona do 20 urządzeń.';

$GLOBALS["lang"]['Try all the latest features with a FREE 100 device license of Open-AudIT Enterprise. Please read the '] = 'Wypróbuj wszystkie najnowsze funkcje z licencją urządzenia FREE 100 Open- Audit Enterprise. Proszę przeczytać ';

$GLOBALS["lang"]['Try logging in using an LDAP user. We are assuming this will fail (otherwise, why are you still reading this?). Next, comment out the line from ther file above.'] = 'Spróbuj zalogować się przy użyciu użytkownika LDAP. Zakładamy, że to się nie uda (inaczej, dlaczego nadal to czytasz?). Następnie skomentuj linię z pliku powyżej.';

$GLOBALS["lang"]['Tuesday'] = 'Wtorek';

$GLOBALS["lang"]['Tunisia'] = 'Tunezja';

$GLOBALS["lang"]['Turkey'] = 'Turcja';

$GLOBALS["lang"]['Turkish'] = 'Turecki';

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

$GLOBALS["lang"]['Type: This can be either a varchar (a text field) or a List (a list of values that can be selected).'] = 'Typ: Może to być albo varchar (pole tekstowe) albo Lista (lista wartości, które mogą być wybrane).';

$GLOBALS["lang"]['Types of Networks'] = 'Rodzaje sieci';

$GLOBALS["lang"]['URL'] = 'URL';

$GLOBALS["lang"]['uuid'] = 'UUID';

$GLOBALS["lang"]['UUID'] = 'UUID';

$GLOBALS["lang"]['udp_ports'] = 'Porty Udp';

$GLOBALS["lang"]['Udp Ports'] = 'Porty Udp';

$GLOBALS["lang"]['Uganda'] = 'Uganda';

$GLOBALS["lang"]['Ukraine'] = 'Ukraina';

$GLOBALS["lang"]['Ukrainian'] = 'Ukraiński';

$GLOBALS["lang"]['Undergo Stage 1 audit (documentation review)'] = 'Audyt pierwszego etapu (przegląd dokumentacji)';

$GLOBALS["lang"]['Undergo Stage 2 audit (implementation review)'] = 'Audyt drugiego etapu (przegląd wdrażania)';

$GLOBALS["lang"]['Undergoing Analysis'] = 'Analiza podsumowująca';

$GLOBALS["lang"]['Unfiltered'] = 'Niefiltrowane';

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

$GLOBALS["lang"]['Update Vulnerabilities'] = 'Aktualizuj podatności';

$GLOBALS["lang"]['Update an attribute of a {collection} entry.'] = 'Aktualizuj atrybut wpisu {collection}.';

$GLOBALS["lang"]['Update attributes'] = 'Aktualizuj atrybuty';

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

$GLOBALS["lang"]['Urdu'] = 'Urdu';

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

$GLOBALS["lang"]['Use Proxy'] = 'Użyj Proxy';

$GLOBALS["lang"]['Use SNMP'] = 'Użyj SNMP';

$GLOBALS["lang"]['Use SSH'] = 'Użyj SSH';

$GLOBALS["lang"]['Use Secure (LDAPS)'] = 'Bezpieczne stosowanie (LDAPS)';

$GLOBALS["lang"]['Use Service Version Detection'] = 'Użyj funkcji wykrywania wersji';

$GLOBALS["lang"]['Use Service Version Detection. When a detected port is detected as open, if set to <i>y</i>, Nmap will query the target device in an attempt to determine the version of the service running on this port.<br>This can be useful when identifying unclassified devices. This was not previously used.'] = 'Użyj funkcji Wykrywanie wersji. Gdy wykryty port zostanie wykryty jako otwarty, jeśli ustawiony na <i>y</i>, Nmap zapyta urządzenie docelowe w celu określenia wersji usługi uruchomionej w tym porcie.<br/>Może to być przydatne przy identyfikacji niesklasyfikowanych urządzeń. Nie stosowano tego wcześniej.';

$GLOBALS["lang"]['Use WMI'] = 'Użyj WMI';

$GLOBALS["lang"]['Use a <i>Sign-in method</i> of OIDC - OpenID Connect and an <i>Application Type</i> of Web Application. Click <i>Next</i>.'] = 'Użyj <i>Metoda sygnalizacji</i> OIDC - OpenID Connect i <i>Typ zastosowania</i> aplikacji Web. Kliknij <i>Następny</i>.';

$GLOBALS["lang"]['Use for Authentication'] = 'Użycie do uwierzytelniania';

$GLOBALS["lang"]['Use for Roles'] = 'Zastosowanie w rolach';

$GLOBALS["lang"]['Use the standard install options when displayed and click the <i>I Agree</i>, <i>Next</i> and <i>Install</i> buttons to install Nmap.'] = 'Użyj standardowych opcji instalacji po wyświetleniu i kliknij <i>Zgadzam się.</i>, <i>Następny</i> oraz <i>Instalacja</i> przyciski do instalacji Nmap.';

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

$GLOBALS["lang"]['Users work similar to Netstat Ports. If a user exists with a matching name, status and password details (changeable, expires, required) then the policy passes.'] = 'Użytkownicy pracują podobnie jak Netstat Ports. Jeżeli istnieje użytkownik z dopasowaną nazwą, statusem i hasłem (zmiennym, wygasającym, wymaganym), to polityka przechodzi.';

$GLOBALS["lang"]['Users, Roles and Orgs'] = 'Użytkownicy, role i orgi';

$GLOBALS["lang"]['Uses the CodeIgniter PHP Framework.'] = 'Używa CodeIgniter PHP Framework.';

$GLOBALS["lang"]['Using'] = 'Stosowanie';

$GLOBALS["lang"]['Using Entra for Auth'] = 'Korzystanie z Entra dla Auth';

$GLOBALS["lang"]['Using LDAPS'] = 'Stosowanie LDAPS';

$GLOBALS["lang"]['Using OKTA for Auth'] = 'Korzystanie z OKTA dla Auth';

$GLOBALS["lang"]['Using the format option is useful when using a web browser but you wish to see the result in JSON format. Adding format=json achieves this. Normally a web browser will set its accept header to HTML, so in that case, we return the rendered page. Using an API to retrieve JSON you should set the accept header to'] = 'Korzystanie z opcji format jest przydatne przy użyciu przeglądarki internetowej, ale chcesz zobaczyć wynik w formacie JSON. Dodanie formatu = json osiąga to. Zazwyczaj przeglądarka internetowa ustawi swój akceptowalny nagłówek na HTML, więc w takim przypadku zwracamy renderowaną stronę. Korzystanie z API do pobrania JSON należy ustawić na akceptuj nagłówka';

$GLOBALS["lang"]['Usually Mbs, from Location A.'] = 'Zazwyczaj Mbs, z lokalizacji A.';

$GLOBALS["lang"]['Usually Mbs, from Location B.'] = 'Zazwyczaj Mbs, z lokalizacji B.';

$GLOBALS["lang"]['Usually Mbs, to Location A.'] = 'Zazwyczaj Mbs, do lokalizacji A';

$GLOBALS["lang"]['Usually Mbs, to Location B.'] = 'Zazwyczaj Mbs, do lokalizacji B';

$GLOBALS["lang"]['Usually should be set to 3.'] = 'Zazwyczaj należy ustawić na 3.';

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

$GLOBALS["lang"]['Value Types'] = 'Rodzaje wartości';

$GLOBALS["lang"]['values'] = 'Wartości';

$GLOBALS["lang"]['Values'] = 'Wartości';

$GLOBALS["lang"]['Values: In the case of a <i>list</i> field, this should be a comma separated list of valid values.'] = 'Wartości: W przypadku <i>wykaz</i> pole, to powinna być oddzielona przecinkami lista poprawnych wartości.';

$GLOBALS["lang"]['Vanuatu'] = 'Vanuatu';

$GLOBALS["lang"]['VarChar'] = 'VarChar';

$GLOBALS["lang"]['Varchar'] = 'Varchar Przewodniczący';

$GLOBALS["lang"]['variable'] = 'Zmienna';

$GLOBALS["lang"]['Variable'] = 'Zmienna';

$GLOBALS["lang"]['Various'] = 'Różne';

$GLOBALS["lang"]['vendor'] = 'Sprzedawca';

$GLOBALS["lang"]['Vendor'] = 'Sprzedawca';

$GLOBALS["lang"]['Vendor Report'] = 'Sprawozdanie dostawcy';

$GLOBALS["lang"]['vendors'] = 'Kupujący';

$GLOBALS["lang"]['Vendors'] = 'Kupujący';

$GLOBALS["lang"]['Venezuela'] = 'Wenezuela';

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

$GLOBALS["lang"]['Vietnamese'] = 'Wietnamski';

$GLOBALS["lang"]['View'] = 'Widok';

$GLOBALS["lang"]['View All'] = 'Wyświetl wszystkie';

$GLOBALS["lang"]['View Details'] = 'Wyświetl szczegóły';

$GLOBALS["lang"]['View Device'] = 'Widok Urządzenie';

$GLOBALS["lang"]['View Discovery'] = 'Widok Odkrywanie';

$GLOBALS["lang"]['View Policy'] = 'Polityka przeglądania';

$GLOBALS["lang"]['View Racks'] = 'Widok Racks';

$GLOBALS["lang"]['View the'] = 'Zobacz';

$GLOBALS["lang"]['View the discovery in question, then click the Support button in the top right toolbar. This will provide the discovery settings, config items, the discovery device list as well as the logs for this particular discovery.'] = 'Wyświetl to odkrycie, a następnie kliknij przycisk Wsparcie w prawym górnym pasku narzędzi. To zapewni ustawienia wyszukiwania, pozycje konfiguracyjne, listę urządzeń do wyszukiwania oraz dzienniki dla tego konkretnego odkrycia.';

$GLOBALS["lang"]['View the release notes on the'] = 'Zobacz notatki wydania na';

$GLOBALS["lang"]['Virtual Private Network'] = 'Wirtualna sieć prywatna';

$GLOBALS["lang"]['Virtual private network'] = 'Wirtualna sieć prywatna';

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

$GLOBALS["lang"]['Vulnerabilities and Results'] = 'Wrażliwości i wyniki';

$GLOBALS["lang"]['Vulnerabilities initially published before 1st January, 2025 (by default). We see no sense in returning vulnerabilities from years prior. This can be changed in the configuration.'] = 'Wrażliwości początkowo opublikowane przed 1 stycznia 2025 r. (domyślnie). Nie widzimy sensu w odzyskiwaniu słabości sprzed lat. Można to zmienić w konfiguracji.';

$GLOBALS["lang"]['vulnerability_id'] = 'Identyfikator zagrożenia';

$GLOBALS["lang"]['Vulnerability ID'] = 'Identyfikator zagrożenia';

$GLOBALS["lang"]['Vulnerability Status'] = 'Stan zagrożenia';

$GLOBALS["lang"]['WARNING - When creating a baseline using software policies, at present Centos and RedHat package the kernel using the names <i>kernel</i> and <i>kernel-devel</i>. There can be multiple packages with this name and different versions concurrently installed. Debian based distributions use names like <i>linux-image-3.13.0-24-generic</i>, note the version number is included in the package name. Because RedHat based operating systems use this format and subsequently have multiple identical package names with different versions we currently exclude <i>kernel</i> and <i>kernel-devel</i> from software policies. This may be addressed in a future update.'] = 'OSTRZEŻENIE - Przy tworzeniu bazy bazowej przy użyciu polityki oprogramowania, w chwili obecnej pakiet Centos i RedHat jądro przy użyciu nazw <i>jądro</i> oraz <i>kernel- devel</i>. Istnieje wiele pakietów o tej nazwie i różnych wersjach jednocześnie zainstalowanych. Dystrybucje oparte na Debianie używają nazw takich jak <i>linux- image- 3.13.0- 24- generyczny</i>, numer wersji jest zawarty w nazwie pakietu. Ponieważ systemy operacyjne oparte na RedHat używają tego formatu, a następnie mają wiele identycznych nazw pakietów z różnymi wersjami, które obecnie wykluczamy <i>jądro</i> oraz <i>kernel- devel</i> od polityki oprogramowania. Może to być uwzględnione w przyszłej aktualizacji.';

$GLOBALS["lang"]['WHERE'] = 'GDZIE';

$GLOBALS["lang"]['WMI Credentials Requirements'] = 'WMI Wymagania dotyczące kredytów';

$GLOBALS["lang"]['Wait for it to complete, then paste in this next line to install the Agent.'] = 'Poczekaj, aż się zakończy, a potem wklej następny wiersz, żeby zainstalować agenta.';

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

$GLOBALS["lang"]['We also have an option to Ping Before Scan (important for routers with long lived ARP caches). This is usually a good idea.'] = 'Mamy również możliwość Ping Before Scan (ważne dla routerów z długożyciowymi obudowami ARP). To zazwyczaj dobry pomysł.';

$GLOBALS["lang"]['We also have our action items (which are executed in the order below):'] = 'Mamy również nasze pozycje akcji (które są wykonywane w kolejności poniżej):';

$GLOBALS["lang"]['We are often asked this question and the answer most definitely is <i>it depends</i>. It depends on the number of IPs to be scanned, the network connection speed, the speed of the devices being scanned, the type of devices being scanned, the number of different credentials being tested and the speed of the Open-AudIT server. We do not have a calculator that would allow us to input those variables and return a value. It is simply too complex. Generally I limit my discoveries to 256 IP addresses - ie, a /24 subnet. We have had customers scan /16 subnets (65k addresses) and it does work - but it can take a long time. You are much better off scanning in /24 blocks. If you simply do not know what your address ranges are, then this is a good case for a Seed discovery.'] = 'Często zadajemy to pytanie i odpowiedź brzmi: <i>zależy</i>. To zależy od liczby IP, które mają być skanowane, prędkości połączenia sieciowego, prędkości skanowanych urządzeń, rodzaju skanowanych urządzeń, liczby różnych referencji testowanych i prędkości serwera Open- Audit. Nie mamy kalkulatora, który pozwoliłby nam wprowadzić te zmienne i zwrócić wartość. To zbyt skomplikowane. Generalnie ograniczam moje odkrycia do 256 adresów IP - tj. podsieci a / 24. Mieliśmy klientów skanowanie / 16 podsieci (adresy 65k) i to działa - ale to może zająć dużo czasu. O wiele lepiej skanować w / 24 blokach. Jeśli po prostu nie wiesz jakie są zakresy adresów, to jest to dobry przypadek dla odkrycia nasion.';

$GLOBALS["lang"]['We have more detailed instructions on'] = 'Mamy bardziej szczegółowe instrukcje na temat';

$GLOBALS["lang"]['We have tests for:'] = 'Mamy testy na:';

$GLOBALS["lang"]['We hope you find Open-AudIT as useful as we do.'] = 'Mamy nadzieję, że Open- Audit jest równie przydatny jak my.';

$GLOBALS["lang"]['We initially setup the default list of scripts with the default options. The list of script is viewable at /scripts. These default scripts cannot be deleted. You can create additional scripts for use by you as required. Your script will be based on one of the existing scripts and have custom options applied. The scripts can then be downloaded from the list page at menu: Discover -> Audit Scripts -> List Audit Scripts.'] = 'Początkowo ustawiamy domyślną listę skryptów z domyślnymi opcjami. Lista skryptów jest widoczna przy / skryptach. Te domyślne skrypty nie mogą być usunięte. Możesz utworzyć dodatkowe skrypty do użycia przez Ciebie w zależności od potrzeb. Skrypt będzie oparty na jednym z istniejących skryptów i będzie miał własne opcje. Skrypty można pobrać ze strony listy w menu: Odkryj - > Audyt skryptów - > Lista skryptów audytu.';

$GLOBALS["lang"]['We need some credentials to be able to effectively talk to the devices on your network.'] = 'Potrzebujemy kilku referencji, żeby móc skutecznie rozmawiać z urządzeniami w twojej sieci.';

$GLOBALS["lang"]['We only send the minimum amount of data and nothing of a sensitive nature. We send our license data (name, type, etc), our application data (name, version, platform, timezone, etc), any logged errors, a count of device types and a count of the features used. <i>Any</i> environment has devices and that is the only piece of your data we send. And only the type of device and a count. Not the manufacturer, not the model. We send nothing special. No networks. No IP addresses. No OS versions. No software names. The UUID and Server fields are sha256 encoded (so we do not know the value). We send just the data we need to improve the product. We hope you see the benefit to all of us with this information. It will provide us guided direction on where to focus improvements and new features in the product.'] = 'Wysyłamy tylko minimalną ilość danych i nic wrażliwego. Wysyłamy nasze dane licencyjne (nazwę, typ, itp.), dane aplikacji (nazwę, wersję, platformę, strefę czasową itp.), wszelkie zalogowane błędy, liczbę typów urządzeń oraz liczbę używanych funkcji. <i>Każdy</i> środowisko ma urządzenia i jest to jedyny fragment danych, które wysyłamy. I tylko rodzaj urządzenia i liczba. Nie producent, nie model. Nie wysyłamy nic specjalnego. Żadnych sieci. Żadnych adresów IP. Brak wersji systemu operacyjnego. Żadnych nazw oprogramowania. Pola UUID i Server są zakodowane sha256 (więc nie znamy wartości). Wysyłamy tylko dane potrzebne do ulepszenia produktu. Mamy nadzieję, że ta informacja przyniesie korzyści nam wszystkim. Będzie ona dla nas wskazówką, gdzie należy skupić ulepszenia i nowe cechy produktu.';

$GLOBALS["lang"]['We tend to use the Google Chrome extension called Postman for testing actual restful queries. You might like to install and test with that.'] = 'Zazwyczaj używamy rozszerzenia Google Chrome o nazwie Postman do testowania rzeczywistych spokojnych zapytań. Może chcesz zainstalować i przetestować tym.';

$GLOBALS["lang"]['Web'] = 'Web';

$GLOBALS["lang"]['Web Application Routes'] = 'Trasy aplikacji Web';

$GLOBALS["lang"]['Web Server Discovery'] = 'Odkrywanie serwera WWW';

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

$GLOBALS["lang"]['Welcome to'] = 'Witamy w';

$GLOBALS["lang"]['Western Sahara'] = 'Sahara Zachodnia';

$GLOBALS["lang"]['What Can I Expect if I Have no Credentials'] = 'Co mogę oczekiwać, jeśli nie mam żadnych zasług';

$GLOBALS["lang"]['What about fields that I want from NMIS that are not in Open-AudIT? We have got you covered. Any fields in the external system (NMIS) that do not exist in Open-AudIT will be automatically created as Open-AudIT Custom fields.'] = 'Co z polami, które chcę od NMIS, które nie są w Open- Audit? Osłaniamy cię. Wszelkie pola w systemie zewnętrznym (NMIS), które nie istnieją w Open- Audit zostaną automatycznie utworzone jako pola Open- Audit Custom.';

$GLOBALS["lang"]['What about other network devices? Think switches, routers, printers, etc. Obviously, it is best if you can provide some SNMP credentials for these devices. They only need <i>read-only</i> access. But if you do not want to do even that, there is nothing stopping you from running discovery, finding the devices, and making a rule or two to identify them (maybe use MAC Address prefix in combination with open ports, for example). You wont have much information, but you will know they are on the network, what they are, and when the last time they were seen was. You will also see if anything new appears on the network.'] = 'A co z innymi urządzeniami sieciowymi? Przełączniki, routery, drukarki itp. Oczywiście, najlepiej jest, jeśli można dostarczyć kilka referencji SNMP dla tych urządzeń. Oni tylko potrzebują <i>tylko do odczytu</i> dostęp. Ale jeśli nie chcesz nawet tego zrobić, nic nie powstrzymuje Cię przed uruchomieniem wyszukiwania, odnalezieniem urządzeń i zrobieniem reguły lub dwóch w celu ich identyfikacji (może na przykład użyj prefiksu adresu MAC w połączeniu z otwartymi portami). Nie będziesz miał wiele informacji, ale będziesz wiedział, że są w sieci, czym są, a kiedy ostatni raz je widziano, to było. Zobaczysz też, czy w sieci pojawi się coś nowego.';

$GLOBALS["lang"]['What do we send?'] = 'Co wysyłamy?';

$GLOBALS["lang"]['What does this actually mean to you?'] = 'Co to dla ciebie znaczy?';

$GLOBALS["lang"]['What is the purpose of this rack.'] = 'Jaki jest cel tego stojaka?';

$GLOBALS["lang"]['What is the type of this location. Allowable types held in <code>attributes</code> table.'] = 'Jaki jest typ tego miejsca? Dopuszczalne typy utrzymywane w <code>attributes</code> stół.';

$GLOBALS["lang"]['When Open-AudIT on Linux discovers a Windows machine, in order to execute a remote command we use'] = 'Kiedy Open-Audit na Linuksie odkryje maszynę Windows, w celu wykonania zdalnego polecenia używamy';

$GLOBALS["lang"]['When Open-AudIT on Windows discovers a Windows machine, in order to execute a remote command we use'] = 'Kiedy Open- Audit w systemie Windows odkrywa maszynę Windows, w celu wykonania zdalnego polecenia używamy';

$GLOBALS["lang"]['When Open-AudIT receives data about a device, either by discovering the device during an audit run or by the user importing the device, it must determine if this discovered device matches a device that already exists within its database, or if it is a new device that should be added. Open-AudIT uses a series of twelve property matches to determine this. The Match Rules work as OR comparisons, not AND. This means the first rule that matches a field in the discovered device to one in the dB resolves as an existing device. All Matching Rules have to fail in order for a device to be new and result in a new record being created.'] = 'Kiedy Open- Aud IT otrzymuje dane o urządzeniu, albo poprzez odkrycie urządzenia podczas audytu lub przez użytkownika importującego urządzenie, musi określić, czy to odkryte urządzenie pasuje do urządzenia, które już istnieje w jego bazie danych, albo czy jest to nowe urządzenie, które powinno zostać dodane. Open-Audit wykorzystuje serię dwunastu dopasowań właściwości, aby to określić. Zasady dopasowania działają jako porównania RNO, a nie AND. Oznacza to, że pierwsza zasada, która pasuje do pola w odkrytym urządzeniu, do jednego w dB, rozwiązuje jako istniejące urządzenie. Wszystkie zasady dopasowywania muszą się nie powieść, aby urządzenie było nowe i spowodować utworzenie nowego rekordu.';

$GLOBALS["lang"]['When POSTing data, you must include an access token. An access token is generated with every request type, so make a GET (for example) and Accept: application/json, parse the response for meta→access_token, and include that with your request. This should be placed in the field data[access_token], IE, the top level.'] = 'Kiedy dane POSTing, należy dołączyć żeton dostępu. Token dostępu jest generowany z każdym typem żądania, więc zrób GET (na przykład) i Akceptuj: aplikacja / json, przeglądaj odpowiedź dla meta → access _ token, i załącz to do swojego żądania. Należy to umieścić w polu danych [access _ token], IE, na najwyższym poziomie.';

$GLOBALS["lang"]['When a device is Discovered the audit script will be injected with the file (or directory) details. Both audit_linux.sh and audit_windows.vbs will be populated, regardless of the file path. If you are thinking <i>but putting a Linux path into a Windows machine will break things!</i>, it wont break, you just wont receive any data from that file or directory entry.<br>Retrieved details will be stored in the <i>file</i> database table and are stored like any other attribute. File details will be stored as any other attribute and generate alerts if any of the following attributes change - <i>full_name</i>, <i>hash</i>, <i>inode</i>, <i>last_changed</i>. The table contain a system_id, first_seen, last_seen and current columns as well as the file details.<br>Attributes recorded are:<br><ul><li>Windows - name, size, directory, SHA1 hash (of the file contents), last changed, permissions, owner, version (file permitting).</li><br><li>Linux - name, size, directory, SHA1 hash (of the file contents), last changed, meta data last changed, permissions, owner, group, inode.</li></ul>You will see a section in both the Windows and Linux audit scripts as below'] = 'Gdy urządzenie zostanie odkryte, skrypt audytowy zostanie podany ze szczegółami pliku (lub katalogu). Zarówno audit _ linux.sh, jak i audit _ windows.vbs będą zaludnione, niezależnie od ścieżki pliku. Jeśli myślisz <i>ale wprowadzenie ścieżki Linuksa do maszyny Windows złamie rzeczy!</i>, nie złamie, po prostu nie otrzymasz żadnych danych z tego pliku lub wpisu do katalogu.<br/>Pobierane szczegóły będą przechowywane w <i>plik</i> tabela bazy danych i są przechowywane jak każdy inny atrybut. Szczegóły pliku będą przechowywane jako każdy inny atrybut i generować wpisy, jeśli którykolwiek z następujących atrybutów się zmieni - <i>full _ name</i>, <i>hasz</i>, <i>inode</i>, <i>last _ changed</i>. Tabela zawiera systemowe _ id, first _ seen, last _ seen i bieżące kolumny oraz szczegóły pliku.<br/>Zapisane atrybuty to:<br/><ul><li>Windows - nazwa, rozmiar, katalog, hash SHA1 (zawartości pliku), ostatnio zmienione, uprawnienia, właściciel, wersja (pozwala plik).</li><br/><li>Linux - nazwa, rozmiar, katalog, hash SHA1 (zawartości pliku), ostatnio zmieniony, dane meta ostatnio zmienione, uprawnienia, właściciel, grupa, inode.</li></ul>Zobaczysz sekcję w skryptach audytowych Windows i Linux, jak poniżej';

$GLOBALS["lang"]['When a discovery is run, the relevant discovery scan option is chosen and those settings are used by Nmap to scan the target devices.  The scan options determine which ports nmap scans, how fast they scan and whether or not nmap ping is first used to determine if the IP is live or not.'] = 'Po uruchomieniu wyszukiwania wybrana jest odpowiednia opcja skanowania i te ustawienia są używane przez Nmap do skanowania urządzeń docelowych. Opcje skanowania określają, które porty nmap skanują, jak szybko skanują i czy nmap ping jest najpierw używany do określenia, czy IP jest żywe, czy nie.';

$GLOBALS["lang"]['When a discovery is run, the relevant discovery scan option is chosen and those settings used by Nmap to scan the target devices. If no option set is chosen, the default configuration item (discovery_default_scan_option) is selected and used. Open-AudIT Community will use the default options as per the configuration for all discoveries.'] = 'Po uruchomieniu odkrycia wybrana jest odpowiednia opcja skanowania i ustawienia używane przez Nmap do skanowania urządzeń docelowych. Jeśli nie wybrano żadnej opcji, zostanie wybrany i użyty domyślny element konfiguracyjny (discovery _ default _ scan _ option). Open-Audit Community użyje domyślnych opcji jak w konfiguracji dla wszystkich odkryć.';

$GLOBALS["lang"]['When a subnet discovery is executed it first runs, if selected, an Nmap ping scan on the range or IP addresses. Any device responding will be port scanned. If an Nmap ping scan is not requested, each IP is individually port scanned. Which ports? That is determined by the'] = 'Gdy odkrycie podsieci jest wykonywane, najpierw uruchamia, jeśli jest zaznaczone, Nmap ping skanowanie na zakres lub adresy IP. Każde urządzenie będzie skanowane. Jeśli nie jest wymagane skanowanie Nmap ping, każdy IP jest skanowany indywidualnie. Które porty? To jest określone przez';

$GLOBALS["lang"]['When auditing a Linux device via SSH, some Linux distributions do not allow sudo commands to be passed without a TTY (which we are doing). To completely audit one of these linux distributions it is best to supply the root user credentials. If no root is supplied and sudo without a TTY is not possible, the audit script will be run but will not contain the amount of data as would otherwise. Subsequent audits using root (or run locally using sudo) will therefore provide extra details about the system and generate several <i>changes</i>.'] = 'Podczas audytu urządzenia Linuksa przez SSH niektóre dystrybucje Linuksa nie pozwalają na przekazywanie poleceń sudo bez TTY (co robimy). Aby w pełni sprawdzić jedną z tych dystrybucji linux najlepiej dostarczyć referencje użytkowników root. Jeśli nie jest dostarczony root i sudo bez TTY nie jest możliwe, skrypt audytu zostanie uruchomiony, ale nie będzie zawierać ilości danych, jak w innym przypadku. Kolejne audyty z wykorzystaniem root (lub uruchomić lokalnie za pomocą sudo) będą zatem zawierać dodatkowe szczegóły dotyczące systemu i wygenerować kilka <i>zmiany</i>.';

$GLOBALS["lang"]['When combining devices, which system is the authoritative source for information.'] = 'Podczas łączenia urządzeń, który system jest autorytatywnym źródłem informacji.';

$GLOBALS["lang"]['When complete, close the command window and you are done!'] = 'Po zakończeniu, zamknij okno poleceń i jesteś gotowy!';

$GLOBALS["lang"]['When creating a widget, if you select the <i>Advanced</i> button you will have the ability to upload your own custom SQL.'] = 'Podczas tworzenia widżetu, jeśli wybrać <i>Zaawansowane</i> przycisk będzie miał możliwość wysłania własnego SQL.';

$GLOBALS["lang"]['When integrating devices from the external system, if the device doesnt exist in Open-AudIT should we create it?'] = 'Podczas integracji urządzeń z systemu zewnętrznego, jeśli urządzenie nie istnieje w Open- Audit powinniśmy go utworzyć?';

$GLOBALS["lang"]['When integrating devices from the external system, if the device has been updated in the external system should we update it in Open-AudIT?'] = 'Podczas integrowania urządzeń z systemu zewnętrznego, jeśli urządzenie zostało zaktualizowane w systemie zewnętrznym, czy powinniśmy zaktualizować je w Open-Audit?';

$GLOBALS["lang"]['When investigating a Discovery, support will request the Exported Discovery Logs. To retrieve these, go to menu -> Discoveries ->'] = 'Podczas badania Discovery, wsparcie będzie wymagać Exported Discovery Logs. Aby je odzyskać, przejdź do menu - > Odkrycia - >';

$GLOBALS["lang"]['When matching a Linux based device, we prefer to use the Dbus id concatenated with the hostname. We can also use other options as per the below table, but we can retrieve the Dbus ID without root. To retrieve the UUID (from the motherboard), we need to run dmidecode, which does require root. Unfortunately, when you clone an ESXi guest, the Dbus ID does not get recreated - hence our concatenating this with the hostname. There is a good article linked here that details the <i>why</i> of hardware IDs.'] = 'Przy dopasowywaniu urządzenia bazującego na Linuksie, wolimy używać identyfikatora Dbus złączonego z nazwą hosta. Możemy również użyć innych opcji zgodnie z poniższą tabelą, ale możemy pobrać ID Dbus bez root. Aby odzyskać UUID (z płyty głównej), musimy uruchomić dmidecode, co wymaga root. Niestety, gdy klonujesz gościa ESXi, identyfikator Dbus nie zostanie odtworzony - stąd nasze połączenie tego z nazwą hosta. Jest dobry artykuł połączony tutaj, który szczegółowo <i>dlaczego</i> identyfikatorów sprzętu.';

$GLOBALS["lang"]['When requesting JSON, by default no limit is set. When requesting screen display, the limit is set to 1000 by default. This can be changed in the configuration. See the <i>page_size</i> item'] = 'W przypadku prośby o JSON domyślnie nie ma limitu. Przy żądaniu wyświetlania ekranu domyślnie ustawiany jest limit do 1000. Można to zmienić w konfiguracji. Patrz <i>page _ size</i> pozycja';

$GLOBALS["lang"]['When retrieve an external device, should we run discovery upon it?'] = 'Kiedy odzyskamy zewnętrzne urządzenie, powinniśmy go wykryć?';

$GLOBALS["lang"]['When running Open-AudIT on Windows the Apache service account must be that of a <i>regular</i> user (or the Administrator). This is because the <i>Local System</i> account normally used to run Apache has no access to any network resources. IE - We cannot use Apache when running as the Local System account account to copy the audit script to Windows PCs.'] = 'Podczas uruchamiania Open- Audit w systemie Windows konto serwisowe Apache musi być tym z <i>regularne</i> użytkownik (lub administrator). To dlatego, że <i>System lokalny</i> konto normalnie używane do uruchamiania Apache nie ma dostępu do żadnych zasobów sieciowych. IE - Nie możemy używać Apache podczas uruchamiania jako konta lokalnego systemu do kopiowania skryptu audytu do komputerów Windows.';

$GLOBALS["lang"]['When the configuration option is set, we take this into account for devices for a certain defined subset of match rules where the configuration item has been enabled. These rules are:'] = 'Kiedy opcja konfiguracyjna jest ustawiona, bierzemy to pod uwagę dla urządzeń dla określonego podzbioru zasad dopasowania, gdzie element konfiguracyjny został włączony. Zasady te są następujące:';

$GLOBALS["lang"]['When the rules run in discovery, any matching rules will appear in the discovery log. See below for an example.'] = 'Kiedy zasady będą działać w odkryciu, wszelkie pasujące zasady pojawią się w dzienniku odkryć. Zob. na przykład poniżej.';

$GLOBALS["lang"]['When this benchmark is scheduled to be executed. Derived from the associated <code>tasks.type</code> and <code>tasks.sub_resource_id</code>.'] = 'Kiedy ten wskaźnik ma być wykonany. Pochodne z powiązanych <code>tasks.type</code> oraz <code>tasks.sub_resource_id</code>.';

$GLOBALS["lang"]['When this log was created.'] = 'Kiedy ten dziennik został stworzony.';

$GLOBALS["lang"]['When this queue item started processing.'] = 'Kiedy ta pozycja kolejki zaczęła przetwarzać.';

$GLOBALS["lang"]['When using Open-AudIT Professional or Enterprise, widgets are available and customisable to be displayed on Dashboards.'] = 'Podczas korzystania z Open- Audit Professional lub Enterprise widżety są dostępne i mogą być wyświetlane na tablicach rozdzielczych.';

$GLOBALS["lang"]['When we are converting an internally selected device to an object for the external system, what should the external data be. EG: integer, string, etc.'] = 'Kiedy konwertujemy wewnętrznie wybrane urządzenie do obiektu dla systemu zewnętrznego, jakie powinny być dane zewnętrzne. EG: integer, string itp.';

$GLOBALS["lang"]['When we execute this baseline, should we check for items on devices that are not in a policy for this baseline.'] = 'Kiedy wykonujemy ten punkt odniesienia, powinniśmy sprawdzić, czy na urządzeniach, które nie są w polityce dla tego punktu odniesienia.';

$GLOBALS["lang"]['When we receive an open port, should we attempt to test for the version of the service currently running upon it? This assists in confirming actual running services.'] = 'Kiedy otrzymujemy otwarty port, czy powinniśmy spróbować przetestować jego wersję? Pomaga to w potwierdzaniu rzeczywistych usług.';

$GLOBALS["lang"]['When you are using Clouds to discover your Amazon AWS instances, you will need two credential items - key and secret key. Your key should already be known to you and your secret key as well. Of note is that you cannot retrieve your secret key using the AWS Console provided by Amazon. If you have misplaced it, you will need to generate a new one.'] = 'Kiedy używasz Clouds, aby odkryć swoje instancje Amazon AWS, będziesz potrzebował dwóch elementów kredytowych - klucza i klucza tajnego. Twój klucz powinien być już znany tobie i twojemu sekretnemu kluczykowi. Uwaga jest taka, że nie można odzyskać swojego sekretnego klucza używając konsoli AWS dostarczonej przez Amazon. Jeśli go zgubiłeś, będziesz musiał wygenerować nowy.';

$GLOBALS["lang"]['When you are using Clouds to discover your Microsoft Azure instances, you will need four credential items - subscription id, tenant id, client id and client secret.'] = 'Podczas korzystania z Clouds, aby odkryć swoje instancje Microsoft Azure, będziesz potrzebował czterech punktów zaufania - abonament id, najemca id, klient id i tajemnica klienta.';

$GLOBALS["lang"]['When you create a discovery you have an option to devices_assigned_to_org. This means that any devices discovered for this discovery will be assigned (have <code>devices.org_id</code> set to) your chosen Organisation.'] = 'Po utworzeniu odkrycia masz opcję do urządzeń _ przypisanych _ do _ org. Oznacza to, że wszelkie urządzenia odkryte do tego odkrycia zostaną przypisane ( <code>devices.org_id</code> ustawione na) wybranej organizacji.';

$GLOBALS["lang"]['When you create a new discovery if you click the Advanced button, you have many more options to change, one of them being the type of discovery.Types have always been Subnet (encompassing the above range, subnet, ip options) and Active Directory. As at v4.1, Open-AudIT has a new discovery type called Seed.'] = 'Po utworzeniu nowego odkrycia po kliknięciu przycisku Zaawansowane, masz wiele innych opcji do zmiany, z których jeden jest typem odkrycia. Typy zawsze były Subnet (obejmujący powyższy zakres, podnet, opcje ip) i Active Directory. Jak w v4.1, Open- Audit ma nowy typ odkrycia o nazwie Seed.';

$GLOBALS["lang"]['When you enable a Query to be run on a schedule, the query is emailed to your chosen address. You must have set up email via menu -> Admin -> Enterprise -> Email Config. We also have a <i>test email<i> button on that page. Input your details, save it and then test it. You should have a modal box that informs you if it successful or not and obviously a test email should arrive if it is successful. Once you have email configured, your scheduled query can be configured.<br><br>Provide a name, optional description, choose <i>Query</i> type, select the desired query, provide an email address, choose a format and set the schedule.<br><br>Provide an hour (hour only, no minutes as yet), give the task a name (this is not the name of the actual scheduled query itself), select which days you would like the query run, choose which query you would like run, supply an email address and choose a query format and you are done.<br>Queries will be sent with an email body of the query (in html format) and the query attached in the requested format.'] = 'Kiedy użytkownik włącza zapytanie do kalendarza, zapytanie jest wysyłane na wybrany adres. Musisz ustawić e-mail przez menu - > Admin - > Enterprise - > Konfiguracja e-mail. Mamy również <i>email testowy<i> Przycisk na tej stronie. Wprowadź swoje dane, zachowaj je i przetestuj. Należy mieć pole modalne, które informuje, czy się powiedzie, czy nie i oczywiście email testowy powinien przyjechać, jeśli jest pomyślny. Po skonfigurowaniu poczty e-mail można skonfigurować zaplanowane zapytanie.<br/><br/>Podaj nazwę, opis opcjonalny, wybierz <i>Pytania</i> wpisz, wybierz żądane zapytanie, podaj adres e-mail, wybierz format i ustaw harmonogram.<br/><br/>Dostarcz godzinę (tylko godzina, nie ma minut, jak dotąd), daj zadanie nazwę (to nie jest nazwa rzeczywistego zaplanowanego zapytania sama), wybierz dni, które chcesz uruchomić zapytanie, wybierz które zapytanie chcesz uruchomić, podaj adres e-mail i wybierz format zapytania i jesteś gotowy.<br/>Zapytania będą wysyłane za pomocą e- maila z zapytaniem (w formacie html) i zapytaniem dołączonym w żądanym formacie.</i></i>';

$GLOBALS["lang"]['When you enter text into one of the column headings, you can simply use a normal word. For example, when you enter <code>computer</code> into the search box above the <i>Type</i> column, the search will return all devices with the type of Computer. Essentially, Open-AudIT requests data using a URL like <code>devices?devices.type=computer</code>. Now there is one significant difference when using the dataTables search, versus the standard'] = 'Kiedy wprowadzisz tekst do jednej z nagłówków kolumn, możesz po prostu użyć zwykłego słowa. Na przykład, kiedy wchodzisz <code>computer</code> w polu wyszukiwania powyżej <i>Rodzaj</i> kolumna, wyszukiwanie zwróci wszystkie urządzenia z typem komputera. Zasadniczo, Open- Aud IT wymaga danych przy użyciu URL jak <code>devices?devices.type=computer</code>. Teraz jest jedna istotna różnica podczas korzystania z wyszukiwania tabel danych, w porównaniu ze standardem';

$GLOBALS["lang"]['where'] = 'Gdzie';

$GLOBALS["lang"]['Where'] = 'Gdzie';

$GLOBALS["lang"]['Where $x is a number. This many LDAP entries are in the DB and have been retrieved.'] = 'Gdzie $x jest liczbą. To wiele wpisów LDAP są w DB i zostały odzyskane.';

$GLOBALS["lang"]['Where on the Device Details screen you would like to see this field appear.'] = 'Gdzie na ekranie Szczegóły urządzenia chcesz zobaczyć to pole.';

$GLOBALS["lang"]['Where the rack is in the row.'] = 'Gdzie wieszak jest w rzędzie.';

$GLOBALS["lang"]['Whether the vulnerability affects components beyond its own using Impact, Availability and Confidentiality.'] = 'Czy podatność na zagrożenia wpływa na komponenty wykraczające poza jej zakres, wykorzystując Impact, Availability i Poufność.';

$GLOBALS["lang"]['Whether user interaction is required (None, Passive, Active).'] = 'Czy wymagana jest interakcja użytkownika (Brak, pasywny, aktywny).';

$GLOBALS["lang"]['Which OS this benchmark applies to.'] = 'Do którego systemu operacyjnego stosuje się ten wskaźnik referencyjny.';

$GLOBALS["lang"]['Which devices should Open-AudIT create from the external system (if any). Using All, None or a given Attribute.'] = 'Które urządzenia powinny Open- Audit tworzyć z systemu zewnętrznego (jeśli istnieje). Korzystanie z wszystkich, Brak lub dany Atrybut.';

$GLOBALS["lang"]['Which network should we discover. This should be in the format of'] = 'Którą sieć powinniśmy odkryć. Powinno to być w formie';

$GLOBALS["lang"]['Which sub-menu should we display this query in.'] = 'W którym podmenu powinniśmy wyświetlić to zapytanie.';

$GLOBALS["lang"]['Who made this rack.'] = 'Kto to zrobił.';

$GLOBALS["lang"]['Why Windows Server Only?'] = 'Dlaczego Windows Server Only?';

$GLOBALS["lang"]['Why do we exclude this policy?'] = 'Dlaczego wykluczamy tę politykę?';

$GLOBALS["lang"]['Wide Area Network'] = 'Sieć o szerokim zasięgu';

$GLOBALS["lang"]['Wide area network'] = 'Szeroka sieć obszarowa';

$GLOBALS["lang"]['Widget'] = 'Widget';

$GLOBALS["lang"]['Widget #'] = 'Widget #';

$GLOBALS["lang"]['Widget # '] = 'Widget # ';

$GLOBALS["lang"]['Widget Type'] = 'Typ widżetu';

$GLOBALS["lang"]['widgets'] = 'Widgety';

$GLOBALS["lang"]['Widgets'] = 'Widgety';

$GLOBALS["lang"]['Widgets are designed to be used on Dashboards. Enterprise users have complete freedom to create, update and delete widgets as required.'] = 'Widgety są przeznaczone do stosowania na tablicach rozdzielczych. Użytkownicy firmy mają pełną swobodę tworzenia, aktualizacji i usuwania widżetów zgodnie z wymaganiami.';

$GLOBALS["lang"]['width'] = 'Szerokość';

$GLOBALS["lang"]['Width'] = 'Szerokość';

$GLOBALS["lang"]['windows'] = 'Okna';

$GLOBALS["lang"]['Windows'] = 'Okna';

$GLOBALS["lang"]['Windows Packages'] = 'Pakiety Windows';

$GLOBALS["lang"]['Windows Test Script'] = 'Windows Test Script';

$GLOBALS["lang"]['Windows User Work Unit #1'] = 'Windows User Work Unit # 1';

$GLOBALS["lang"]['Windows User Work Unit #2'] = 'Windows User Work Unit # 2';

$GLOBALS["lang"]['Windows may also have blocked the service from starting. On the target start the Windows Security applet and ensure the WinExeSvc executable is allowed to run (click Allow on Device and then Start Actions).'] = 'Windows może również zablokować uruchomienie usługi. Na docelowym uruchomieniu apletu Bezpieczeństwo systemu Windows i zapewnić możliwość uruchomienia pliku wykonywalnego WinExeSvc (kliknij Zezwalaj na urządzenie, a następnie uruchom działania).';

$GLOBALS["lang"]['Winexe page on Samba'] = 'Strona Winexe na Samba';

$GLOBALS["lang"]['Winexe requires the following Windows services to be started and running: netlogon and rpc services to be running.<br><br>Please log on to the target Windows machine and check the services for netlogon and rpc are running.'] = 'Winexe wymaga, aby uruchomione i uruchomione zostały następujące usługi Windows: usługi netlogon i rpc.<br/><br/>Proszę zalogować się do docelowej maszyny Windows i sprawdzić usługi netlogon i rpc są uruchomione.';

$GLOBALS["lang"]['Winexe uses the admin$ and RPC (net service start) to install and start a remote service (winexesvc). This service initializes a named pipe that is used to transport commands from the Open-AudIT server to the target and the output in the reverse way. When finished, the named pipe closes and the winexesvc waits for more connections or uninstalls (depending of the options given).'] = 'Winexe wykorzystuje admin $i RPC (start usługi netto) do instalacji i uruchomienia usługi zdalnej (winexesvc). Usługa ta inicjalizuje nazwę rury, która jest używana do przesyłania poleceń z serwera Open- Audit do celu i wyjścia w odwrotny sposób. Po zakończeniu, nazwa rury zamyka i winexesvc czeka na więcej połączeń lub uninstalls (w zależności od podanych opcji).';

$GLOBALS["lang"]['Wireless Local Area Network'] = 'Bezprzewodowa sieć lokalna';

$GLOBALS["lang"]['With the 3.3.0 release of Open-AudIT we have introduced the concept of a Cluster. This intuitively maps to the idea of a web cluster, database cluster or file cluster (or one of several other purposes) into a given type (high availability, redundancy, scaling, etc).<br><br>Depending on the purpose of cluster chosen, the reporting will be slightly different.<br><br>For example, if you create a Cluster with a purpose of virtualisation, when you have added devices to it you will also see the virtual machines on those devices.'] = 'Dzięki wersji 3.3.0 Open- Audit wprowadziliśmy koncepcję klastra. Intuicyjnie odwzorowuje on koncepcję klastra webowego, klastra baz danych lub klastra plików (lub jednego z kilku innych celów) na dany typ (wysoka dostępność, redundancja, skalowanie itp.).<br/><br/>W zależności od celu wybranego klastra, sprawozdawczość będzie nieco inna.<br/><br/>Na przykład, jeśli stworzysz klaster w celu wirtualizacji, gdy dodasz do niego urządzenia, zobaczysz również maszyny wirtualne na tych urządzeniach.';

$GLOBALS["lang"]['With the introduction of the Clouds feature, you can supply details of your cloud, Amazon AWS or Microsoft Azure, and Open-AudIT will use the relevant API to retrieve a list of locations, networks, and instances, then discover each of these instances.'] = 'Dzięki wprowadzeniu funkcji Clouds, możesz podać szczegóły swojej chmury, Amazon AWS lub Microsoft Azure, a Open- Audit będzie używać odpowiedniego API, aby pobrać listę lokalizacji, sieci i instancji, a następnie odkryć każdy z tych przypadków.';

$GLOBALS["lang"]['wmi_fails'] = 'Wmi Fails';

$GLOBALS["lang"]['Wmi Fails'] = 'Wmi Fails';

$GLOBALS["lang"]['wmi_timeout'] = 'Czas Wmi';

$GLOBALS["lang"]['Wmi Timeout'] = 'Czas Wmi';

$GLOBALS["lang"]['workgroup'] = 'Grupa robocza';

$GLOBALS["lang"]['Workgroup'] = 'Grupa robocza';

$GLOBALS["lang"]['Working Credentials'] = 'Funkcje robocze';

$GLOBALS["lang"]['Wrap Up'] = 'Zawiń';

$GLOBALS["lang"]['Written in the PHP scripting language.'] = 'Napisane w języku skryptowym PHP.';

$GLOBALS["lang"]['XML'] = 'XML';

$GLOBALS["lang"]['Yellow Query'] = 'Żółte zapytanie';

$GLOBALS["lang"]['Yemen'] = 'Jemen';

$GLOBALS["lang"]['Yes'] = 'Tak.';

$GLOBALS["lang"]['You are able to define extra directories to be scanned as entries in the Executables collection. When defined, the directory and all sub-directories are scanned for files that are executable. You can also define directories and files to be excluded. When activated, these are injected into the linux audit script and performed whenever it is run (usually as part of a discovery). If you want these in a script you can manually copy to the target, use menu -> Discover -> Scripts -> List Scripts and download the script from there.'] = 'Możesz zdefiniować dodatkowe katalogi, które mają być zeskanowane jako wpisy w kolekcji Wykonawcy. Po zdefiniowaniu katalog i wszystkie podkatalogi są skanowane dla plików, które są wykonywalne. Możesz również zdefiniować katalogi i pliki, które mają być wyłączone. Po uruchomieniu, są one wstrzykiwane do skryptu audytu linux i wykonywane zawsze, gdy jest uruchomiony (zazwyczaj jako część odkrycia). Jeśli chcesz je w skrypcie możesz ręcznie skopiować do celu, użyj menu - > Odkryj - > skrypty - > Lista skryptów i pobrać skrypt stamtąd.';

$GLOBALS["lang"]['You are always free to modify the audit scripts themselves to suit your specific requirements. You will need to (re)incorporate those changes whenever you upgrade as they will be overwritten by the default scripts. I would suggest saving a master copy of your modified script, upgrading Open-AudIT, then running a diff between the new default script and your modified script and applying the differences. The audit scripts are native scripts (Windows is VBScript, all others are Bash). Simple and easy to modify - just make sure to have a copy of your changes before you upgrade.'] = 'Zawsze możesz samodzielnie modyfikować skrypty audytowe, aby odpowiadały Twoim konkretnym wymaganiom. Będziesz musiał (ponownie) włączyć te zmiany za każdym razem, gdy uaktualnisz, ponieważ zostaną one nadpisane przez domyślne skrypty. Sugerowałbym zapisanie głównej kopii zmodyfikowanego skryptu, aktualizację Open- Audit, a następnie wprowadzenie różnic pomiędzy nowym skryptem domyślnym a zmodyfikowanym skryptem i zastosowanie różnic. Skrypty audytu to skrypty natywne (Windows to VBScript, wszystkie pozostałe to Bash). Proste i łatwe w modyfikacji - upewnij się, że masz kopię zmian przed aktualizacją.';

$GLOBALS["lang"]['You are running version'] = 'Uruchomisz wersję';

$GLOBALS["lang"]['You can access the collection using the normal Open-AudIT JSON based API. Just like any other collection. Please see'] = 'Możesz uzyskać dostęp do kolekcji za pomocą normalnego Open- Audit JSON oparte API. Jak każda inna kolekcja. Proszę zobaczyć';

$GLOBALS["lang"]['You can also'] = 'Można również';

$GLOBALS["lang"]['You can also see at the bottom of the page a table showing the devices the changes will be applied to.'] = 'Możesz również zobaczyć na dole strony tabelę pokazującą urządzenia zmiany będą stosowane.';

$GLOBALS["lang"]['You can also specify properties using the below format.'] = 'Możesz również określić właściwości używając poniższego formatu.';

$GLOBALS["lang"]['You can always run the Firstwave VM on your virtual infrastructure (ESX, Azure, et al). The Firstwave VM runs Debian linux and is free from OS licensing concerns and limitations. Or install on your own Linux distro of choice. We support Redhat 9, Ubuntu 20.04, 22.04 and 24.04 as well as Debian 11 and 12.'] = 'Zawsze możesz uruchomić urządzenie Firstwave VM na swojej wirtualnej infrastrukturze (ESX, Azure, et al). Firstwave VM działa Debian linux i jest wolny od problemów i ograniczeń związanych z licencją systemu operacyjnego. Lub zainstalować na swoim Linuksie disco z wyboru. Wspieramy Redhat 9, Ubuntu 20.04, 22.04 i 24.04 oraz Debiana 11 i 12.';

$GLOBALS["lang"]['You can assign devices to a location automatically using'] = 'Można przypisać urządzenia do lokalizacji automatycznie za pomocą';

$GLOBALS["lang"]['You can assign devices using custom'] = 'Można przypisać urządzenia przy użyciu własnych';

$GLOBALS["lang"]['You can audit a remote machine without the using the actual Administrator account by creating a registry key. Create the below key on every machine to be audited and make sure the user credentials used is a member of the Administrators group.'] = 'Możesz kontrolować zdalną maszynę bez używania rzeczywistego konta administratora poprzez utworzenie klucza rejestru. Utwórz poniższy klucz na każdej maszynie podlegającej audytowi i upewnij się, że używane referencje użytkowników należą do grupy administratorów.';

$GLOBALS["lang"]['You can certainly run a discovery without any valid credentials on the devices within the network, however, the information retrieved will be a very small subset of what Open-AudIT has the ability to retrieve <i>with</i> credentials.'] = 'Z pewnością można uruchomić odkrycie bez żadnych ważnych referencji na urządzeniach w sieci, jednak informacje uzyskane będzie bardzo mały podzbiór tego, co Open- Audit ma zdolność do pobrania <i>z</i> referencje.';

$GLOBALS["lang"]['You can create a baseline, run it against a group of devices and view the results, add scheduled execution, add more tables for comparison (currently only software, netstat ports and users are enabled), in place baseline editing, archiving of results and more.'] = 'Możesz utworzyć bazę bazową, uruchomić ją z grupą urządzeń i zobaczyć wyniki, dodać planową realizację, dodać więcej tabel do porównania (obecnie tylko oprogramowanie, porty netstat i użytkownicy są włączone), w miejscu edycja bazowa, archiwizacja wyników i więcej.';

$GLOBALS["lang"]['You can create a script with all the options for any of the existing audit scripts - not just Windows. AIX, ESX, Linux, OSX and Windows are all covered.'] = 'Możesz stworzyć skrypt ze wszystkimi opcjami dla każdego z istniejących skryptów audytu - nie tylko Windows. AIX, ESX, Linux, OSX i Windows są objęte.';

$GLOBALS["lang"]['You can customize the entire integration down to which system (NMIS or Open-AudIT) is the authority on a per field basis. There are options to create and/or update devices in Open-AudIT or NMIS. Should we run a discovery on a created or updated device and so much more. There are explanations for each item on the right side of the page.'] = 'Możesz dostosować całą integrację do tego, do jakiego systemu (NMIS lub Open- Audit) jest autorytetem na podstawie pola. Istnieją opcje do tworzenia i / lub aktualizacji urządzeń w Open- Audit lub NMIS. Czy powinniśmy uruchomić odkrycie na stworzonym lub zaktualizowanym urządzeniu i wiele więcej. Istnieją wyjaśnienia dla każdego elementu po prawej stronie strony.';

$GLOBALS["lang"]['You can define an application and associate a device to this application. A device may be associated to more than one application. An application may be associated to more than one device.'] = 'Możesz zdefiniować aplikację i powiązać urządzenie z tą aplikacją. Urządzenie może być powiązane z więcej niż jedną aplikacją. Wniosek może być powiązany z więcej niż jednym urządzeniem.';

$GLOBALS["lang"]['You can edit the value of the Additional Field for each individual device on the device details page. View the device details screen, open the section containing the field and (if you have'] = 'Możesz edytować wartość pola dodatkowego dla każdego urządzenia w zakładce Szczegóły urządzenia. Wyświetl szczegóły urządzenia, otwórz sekcję zawierającą pole i (jeśli masz';

$GLOBALS["lang"]['You can limit the Device Seed Discovery to fall within a strict set of parameters, including: <i>Restrict to Subnet</i> and <i>Restrict to Private</i>'] = 'Można ograniczyć Odkrycie Nasienia Urządzenia do objęcia ścisłym zestawem parametrów, w tym: <i>Restrict to Subnet</i> oraz <i>Restrict to Private</i>';

$GLOBALS["lang"]['You can manually assign devices using'] = 'Można ręcznie przypisać urządzenia za pomocą';

$GLOBALS["lang"]['You can override this by providing the format option in the URL.'] = 'Możesz to nadpisać podając opcję formatu w URL.';

$GLOBALS["lang"]['You can select individual devices by clicking their check-boxes on the right side or selecting all devices clicking the checkbox on the top right of the table (underneath the Edit button that looks like a pencil).'] = 'Możesz wybrać poszczególne urządzenia klikając na pola wyboru po prawej stronie lub wybierając wszystkie urządzenia klikając na pole wyboru po prawej stronie tabeli (pod przyciskiem Edycja, który wygląda jak ołówek).';

$GLOBALS["lang"]['You can select the devices to be integrated by choosing any attribute in the system (device) table and matching (see menu → Admin → Database → List Tables → system for a list of fields). An attribute match can only match a single value.'] = 'Można wybrać urządzenia, które mają być zintegrowane poprzez wybranie dowolnego atrybutu w tabeli systemu (urządzenia) i dopasowanie (patrz menu → Admin → Baza danych → Lista tabel → System dla listy pól). Dopasowanie atrybutu może odpowiadać tylko jednej wartości.';

$GLOBALS["lang"]['You can turn any server into a collector by going to menu -> Admin -> Collectors -> Make this install a Collector. You will need credentials to log on to the server this install will report in to.'] = 'Możesz zmienić dowolny serwer w kolekcjonera idąc do menu - > Admin - > Kolekcjonery - > Niech to zainstaluje kolektora. Będziesz potrzebował referencji, aby zalogować się na serwer, do którego ta instalacja będzie się zgłaszać.';

$GLOBALS["lang"]['You can view by clicking on the blue view icon. You can also edit or delete if you have permissions.'] = 'Możesz zobaczyć klikając na ikonę niebieskiego widoku. Możesz również edytować lub usuwać, jeśli masz uprawnienia.';

$GLOBALS["lang"]['You do not have the PHP MBString extension installed. This extension is required.'] = 'Nie masz zainstalowanego rozszerzenia PHP MBString. To rozszerzenie jest wymagane.';

$GLOBALS["lang"]['You do not have the PHP SNMP extension installed. This extension is highly recommended.'] = 'Nie masz zainstalowanego rozszerzenia PHP SNMP. To rozszerzenie jest wysoce zalecane.';

$GLOBALS["lang"]['You may want to copy and paste this URL in an email to your staff.'] = 'Możesz skopiować i wkleić ten adres URL w e-mailu do swojego personelu.';

$GLOBALS["lang"]['You may wish to have Active Directory or OpenLDAP authenticate your users, but not provide authorization. To do this, make sure <i>Use for Authentication</i> is set to Y and <i>Use for Roles</i> is set to N. The credentials will be validated by LDAP, but you will need to have the user already created and assigned Roles in Open-AudIT. This also <i>automatically</i> applies to'] = 'Użytkownik może chcieć, aby Active Directory lub OpenLDAP uwierzytelniały użytkowników, ale nie dostarczyły autoryzacji. Aby to zrobić, upewnij się, <i>Użycie do uwierzytelniania</i> jest ustawiony na Y i <i>Zastosowanie w rolach</i> jest ustawiony na N. Kwalifikacje zostaną zatwierdzone przez LDAP, ale trzeba będzie mieć użytkownika już utworzone i przypisane Roles w Open- Audit. To również <i>automatycznie</i> dotyczy';

$GLOBALS["lang"]['You might have noticed these match rules are for items that might not be globally unique. Some examples:'] = 'Mogliście zauważyć, że te zasady dopasowania są dla elementów, które mogą nie być globalne unikalne. Niektóre przykłady:';

$GLOBALS["lang"]['You must delete your existing license before adding a new license.'] = 'Przed dodaniem nowej licencji należy usunąć istniejącą licencję.';

$GLOBALS["lang"]['You must have working SSH credentials to execute a benchmark. The following Operating Systems are currently supported: Centos 7, Debian 12, Redhat 7, Redhat 8, Redhat 9, SLES 15, Ubuntu 20.04, Ubuntu 22.04. We plan to expand on these with further releases.'] = 'Musisz mieć odpowiednie referencje SSH, żeby wykonać punkt odniesienia. Obecnie wspierane są następujące systemy operacyjne: Centos 7, Debian 12, Redhat 7, Redhat 8, Redhat 9, SLES 15, Ubuntu 20.04, Ubuntu 22.04. Planujemy je rozszerzyć o kolejne wydania.';

$GLOBALS["lang"]['You should copy and paste the entire file into the textbox. In the case below, copy ALL the text.'] = 'Powinieneś skopiować i wkleić cały plik do textbox. W poniższym przypadku należy skopiować WSZYSTKIE teksty.';

$GLOBALS["lang"]['You should not include the edited_by and edited_date fields. These will be automatically set.'] = 'Nie należy włączać edytowanych pól _ by i edytowanych _ date. Będą one automatycznie ustawiane.';

$GLOBALS["lang"]['You should only change the second sentence of text, the'] = 'Należy tylko zmienić drugie zdanie tekstu,';

$GLOBALS["lang"]['You should substitute the required column (eg, org_id) for ATTRIBUTE_NAME.'] = 'Należy zastąpić wymaganą kolumnę (np. org _ id) dla ATTRIBUTE _ NAME.';

$GLOBALS["lang"]['You should use a header line containing the names of the columns you wish to populate, then your data lines below that.'] = 'Powinieneś użyć linii nagłówka zawierającej nazwy kolumn, które chcesz spopularyzować, a następnie linii danych poniżej tego.';

$GLOBALS["lang"]['You should use only those tables that contain attributes you need. I usually use a left join. For example'] = 'Powinieneś używać tylko tych tabel, które zawierają atrybuty, których potrzebujesz. Zwykle używam lewego dołączenia. Na przykład';

$GLOBALS["lang"]['You will need a'] = 'Będziesz potrzebował';

$GLOBALS["lang"]['You will need the ports for WMI on the Windows firewall opened on each target Windows computer. For Windows Core servers, ensure you allow the firewall connections as per'] = 'Będziesz potrzebować portów WMI na firewall Windows otwarty na każdym docelowym komputerze Windows. Dla Windows Serwery bazowe, upewnij się, że pozwalają na połączenia firewall jak na';

$GLOBALS["lang"]['You will see a list of'] = 'Zobaczysz listę';

$GLOBALS["lang"]['YouTube Tutorials'] = 'Tutoriale YouTube';

$GLOBALS["lang"]['Your AWS EC2 API key.'] = 'Twój klucz AWS EC2 API.';

$GLOBALS["lang"]['Your Google Compute credentials as JSON.'] = 'Twoje kwalifikacje do Google Compute jako JSON.';

$GLOBALS["lang"]['Your Host is'] = 'Twój Host jest';

$GLOBALS["lang"]['Your Licenses'] = 'Twoje licencje';

$GLOBALS["lang"]['Your Microsoft Azure Client ID.'] = 'Twój identyfikator klienta Microsoft Azure.';

$GLOBALS["lang"]['Your Microsoft Azure Client Secret.'] = 'Tajemnica klienta Microsoft Azure.';

$GLOBALS["lang"]['Your Microsoft Azure Subscription ID.'] = 'Twój identyfikator subskrypcji Microsoft Azure.';

$GLOBALS["lang"]['Your Microsoft Azure Tennant ID.'] = 'Twój identyfikator Microsoft Azure Tennant.';

$GLOBALS["lang"]['Your PHP version is'] = 'Twoja wersja PHP jest';

$GLOBALS["lang"]['Your SQL to select attributes that will populate this query.'] = 'Twój SQL wybiera atrybuty, które będą popularyzować to zapytanie.';

$GLOBALS["lang"]['Your SQL to select devices that will populate this group.'] = 'Twój SQL do wyboru urządzeń, które będą populować tę grupę.';

$GLOBALS["lang"]['Your SSH key.'] = 'Twój klucz SSH.';

$GLOBALS["lang"]['Your access credentials, as per that clouds native API.'] = 'Twoje dane dostępu, jak na to, że chmury rodzimych API.';

$GLOBALS["lang"]['Your data is your data. You can extract it any time you like. We even helpfully provide exports to CSV, JSON and XML. And we have a JSON API. And you can write custom reports and have those output in CSV, XML, and JSON! Again, it is your data - not anyone else. You can be confident that the security of your data is in your hands.'] = 'Twoje dane są twoimi danymi. Możesz go wydobyć kiedy tylko chcesz. Pomagamy nawet eksportowi do CSV, JSON i XML. I mamy JSON API. Możesz pisać raporty i mieć te wyniki w CSV, XML i JSON! Ponownie, to twoje dane - nie nikogo innego. Możesz być pewien, że bezpieczeństwo danych jest w twoich rękach.';

$GLOBALS["lang"]['Your database platform is'] = 'Twoja platforma bazy danych jest';

$GLOBALS["lang"]['Your description of the status of this connection (provisioned, retired, etc).'] = 'Opis stanu tego połączenia (zapasowy, emerytowany itp.).';

$GLOBALS["lang"]['Your description of this item.'] = 'Twój opis tego artykułu.';

$GLOBALS["lang"]['Your generic name for this piece of software'] = 'Twoja ogólna nazwa tego oprogramowania';

$GLOBALS["lang"]['Your generic version for this piece of software'] = 'Twoja wersja ogólna dla tego elementu oprogramowania';

$GLOBALS["lang"]['Your user should now be able to logon by clicking the <i>Logon with Entra</i> button on the Open-AudIT logon page. As mentioned above, if the logon fails, please check the logfile and verify the users <i>preferred username</i>.<br><br>And that should be all there is too it. Now your users should have one less set of credentials to remember!<br><br>As always, if you have troubles with this feature, please email'] = 'Użytkownik powinien teraz być w stanie logować klikając <i>Logon z Entra</i> przycisk na stronie Open- Audit logon. Jak wspomniano powyżej, jeśli logon zawiedzie, proszę sprawdzić plik logowania i zweryfikować użytkowników <i>preferowana nazwa użytkownika</i>.<br/><br/>I to powinno być wszystko. Teraz użytkownicy powinni mieć jeden mniej legitymacji do zapamiętania!<br/><br/>Jak zawsze, jeśli masz problemy z tą funkcją, proszę e-mail';

$GLOBALS["lang"]['Your user should now be able to logon by clicking the <i>Logon with OKTA</i> button on the Open-AudIT logon page. As mentioned above, if the logon fails, please check the logfile and verify the users <i>name</i>.<br><br>And that should be all there is too it. Now your users should have one less set of credentials to remember!<br><br>As always, if you have troubles with this feature, please email'] = 'Użytkownik powinien teraz być w stanie logować klikając <i>Logon z OKTA</i> przycisk na stronie Open- Audit logon. Jak wspomniano powyżej, jeśli logon zawiedzie, proszę sprawdzić plik logowania i zweryfikować użytkowników <i>nazwa</i>.<br/><br/>I to powinno być wszystko. Teraz użytkownicy powinni mieć jeden mniej legitymacji do zapamiętania!<br/><br/>Jak zawsze, jeśli masz problemy z tą funkcją, proszę e-mail';

$GLOBALS["lang"]['Your web server is'] = 'Twój serwer WWW jest';

$GLOBALS["lang"]['Zambia'] = 'Zambia';

$GLOBALS["lang"]['Zimbabwe'] = 'Zimbabwe';

$GLOBALS["lang"]['a String'] = 'a String';

$GLOBALS["lang"]['active'] = 'aktywny';

$GLOBALS["lang"]['active directory'] = 'aktywny katalog';

$GLOBALS["lang"]['active/active'] = 'aktywne / aktywne';

$GLOBALS["lang"]['active/passive'] = 'aktywny / pasywny';

$GLOBALS["lang"]['advertisement'] = 'reklama';

$GLOBALS["lang"]['alert'] = 'wpis';

$GLOBALS["lang"]['all'] = 'wszystkie';

$GLOBALS["lang"]['allocated'] = 'przydzielone';

$GLOBALS["lang"]['amazon'] = 'amazon';

$GLOBALS["lang"]['an Integer'] = 'integer';

$GLOBALS["lang"]['and'] = 'oraz';

$GLOBALS["lang"]['and / or'] = 'lub';

$GLOBALS["lang"]['and a support ticket will be created and actioned.'] = 'a bilet wsparcia zostanie stworzony i utworzony.';

$GLOBALS["lang"]['and another'] = 'i inny';

$GLOBALS["lang"]['and download the Latest Release self-installer. You may need to scroll down the page to find it.'] = 'i pobrać autoinstalator Nowości Release. Może trzeba przewinąć stronę, aby ją znaleźć.';

$GLOBALS["lang"]['and go to Applications -> Enterprise Applications (far left menu), then click <i>New application</i>.'] = 'i przejdź do aplikacji - > Aplikacje Enterprise (lewe menu), a następnie kliknij <i>Nowy wniosek</i>.';

$GLOBALS["lang"]['and its current time is'] = 'i jego obecny czas jest';

$GLOBALS["lang"]['and looks for a warranty expiration date prior to today.'] = 'i szuka gwarancji termin ważności przed dniem dzisiejszym.';

$GLOBALS["lang"]['and review what is possible.'] = 'i dokonać przeglądu tego, co jest możliwe.';

$GLOBALS["lang"]['and the Sign-out redirect URI being'] = 'i Sign- out przekierować URI jest';

$GLOBALS["lang"]['and the final lines will likely be of most interest. These lines should give you the exact point at which the login failed.'] = 'i ostateczne linie będą prawdopodobnie najbardziej interesujące. Te linie powinny podać dokładny punkt, w którym logowanie się nie powiodło.';

$GLOBALS["lang"]['antivirus'] = 'Program antywirusowy';

$GLOBALS["lang"]['application'] = 'wniosek';

$GLOBALS["lang"]['approved'] = 'zatwierdzone';

$GLOBALS["lang"]['are required.'] = 'są wymagane.';

$GLOBALS["lang"]['are used.'] = 'są używane.';

$GLOBALS["lang"]['as a device responding on this port.<br>This has caused some customers issues where firewalls respond on behalf of a non-existing device, and hence cause false positive device detection. We now have this attribute available to set per scan.'] = 'jako urządzenie reagujące w tym porcie.<br/>Spowodowało to problemy niektórych klientów, gdzie firewalle reagują w imieniu nieistniejącego urządzenia, a tym samym powodują fałszywie pozytywne wykrywanie urządzenia. Mamy teraz ten atrybut do ustawienia na skanowanie.';

$GLOBALS["lang"]['as the reference point and filters out all virtual machines via a check of the system.serial field for VM.'] = 'jako punkt odniesienia i filtruje wszystkie maszyny wirtualne poprzez sprawdzenie systemu. pole seryjne dla VM.';

$GLOBALS["lang"]['assuming working and client populated DNS'] = 'zakładając, że działa i klient zaludniony DNS';

$GLOBALS["lang"]['attribute'] = 'atrybut';

$GLOBALS["lang"]['auto'] = 'auto';

$GLOBALS["lang"]['backup'] = 'kopia zapasowa';

$GLOBALS["lang"]['banned'] = 'zakaz';

$GLOBALS["lang"]['blog'] = 'blog';

$GLOBALS["lang"]['blue'] = 'niebieski';

$GLOBALS["lang"]['bottom'] = 'dno';

$GLOBALS["lang"]['building'] = 'budownictwo';

$GLOBALS["lang"]['can be used for user authentication (is the users name and password correct) as well as user authorization (what roles and orgs does a user have).<br><br>If a user is not in the configured LDAP but is in Open-AudIT (eg: the <i>admin</i> user), Open-AudIT will fallback to using itself for both authentication and authorization.<br><br>Open-AudIT uses specific LDAP groups for roles and orgs. A user must be a direct member of these group(s) in order for Open-AudIT to determine that users access.<br><br>When configured correctly, LDAP use can completely remove the need to create users in Open-AudIT. Simply configure Open-AudIT to use LDAP for both authentication and authorization. If the user does not exist in Open-AudIT but does exist in LDAP and their credentials are correct and they are a member of the required groups Open-AudIT will create the user account automatically.'] = 'może być używany do uwierzytelniania użytkownika (jest poprawna nazwa użytkownika i hasło), jak również autoryzacji użytkownika (jakie role i orgs ma użytkownik).<br/><br/>Jeśli użytkownik nie jest w skonfigurowanym LDAP, ale jest w Open- Audit (np.: <i>admin</i> user), Open- Audit powróci do używania samego siebie do uwierzytelniania i autoryzacji.<br/><br/>Open- Aud IT wykorzystuje określone grupy LDAP dla ról i orgów. Użytkownik musi być bezpośrednim członkiem tej (-ych) grupy (-ów), aby Open- Audit mógł określić dostęp użytkowników.<br/><br/>Po prawidłowym skonfigurowaniu, użycie LDAP może całkowicie usunąć potrzebę tworzenia użytkowników w Open- Audit. Wystarczy skonfigurować Open- Audit, aby używać LDAP do uwierzytelniania i autoryzacji. Jeśli użytkownik nie istnieje w Open-Audit, ale istnieje w LDAP i ich referencje są poprawne i są one członkiem wymaganych grup Open-Audit będzie tworzyć konto użytkownika automatycznie.';

$GLOBALS["lang"]['can now retrieve details about a file or directory of files and monitor these files for changes as per other attributes in the Open-AudIT database. This feature works out of the box for Linux Open-AudIT servers, but needs a change to the service account name under a Windows Open-AudIT server. Supported clients are Windows and Linux.'] = 'może teraz pobrać szczegóły dotyczące pliku lub katalogu plików i monitorować te pliki dla zmian, jak w przypadku innych atrybutów w bazie danych Open-Audit. Funkcja ta działa z pola dla serwerów Linux Open- Audit, ale wymaga zmiany nazwy konta usługi pod serwerem Windows Open- Audit. Obsługowani klienci to Windows i Linux.';

$GLOBALS["lang"]['changed'] = 'zmienione';

$GLOBALS["lang"]['chosen. From there if a port for WMI, SSH or SNMP is detected responding the device is further queried using '] = 'Wybrany. Stamtąd, jeśli port dla WMI, SSH lub SNMP zostanie wykryty, odpowiedź urządzenia jest dalej sprawdzana za pomocą ';

$GLOBALS["lang"]['cloud'] = 'chmura';

$GLOBALS["lang"]['code'] = 'kod';

$GLOBALS["lang"]['collections and details pages is an icon to execute.'] = 'Kolekcje i szczegóły stron jest ikoną do wykonania.';

$GLOBALS["lang"]['collector'] = 'kolektor';

$GLOBALS["lang"]['collectors'] = 'kolektory';

$GLOBALS["lang"]['column'] = 'kolumna';

$GLOBALS["lang"]['column will contain either <i>y</i> or <i>n</i>. This indicates if this row is currently present on the device. For example software may be installed (which would result in <i>software.current = y</i>), but on a subsequent audit it may not be detected. Open-AudIT will then change this rows current attribute to <i>n</i>.'] = 'kolumna zawiera: <i>y</i> lub <i>n</i>. Wskazuje, czy ten wiersz jest obecny na urządzeniu. Na przykład oprogramowanie może być zainstalowane (co może skutkować <i>Instalare.current = y</i>), ale na późniejszym audycie nie może być wykryta. Open- Audit zmieni atrybut bieżącego wiersza na <i>n</i>.';

$GLOBALS["lang"]['column. The'] = 'kolumna. W';

$GLOBALS["lang"]['compute'] = 'obliczyć';

$GLOBALS["lang"]['config'] = 'config';

$GLOBALS["lang"]['console'] = 'konsola';

$GLOBALS["lang"]['contains'] = 'zawiera';

$GLOBALS["lang"]['create'] = 'create';

$GLOBALS["lang"]['created'] = 'created';

$GLOBALS["lang"]['credentials'] = 'legitymacje';

$GLOBALS["lang"]['critical'] = 'krytyczne';

$GLOBALS["lang"]['cve'] = 'cve';

$GLOBALS["lang"]['database'] = 'baza danych';

$GLOBALS["lang"]['debug'] = 'debug';

$GLOBALS["lang"]['delegated'] = 'przekazane';

$GLOBALS["lang"]['delete'] = 'Usuń';

$GLOBALS["lang"]['deleted'] = 'usunięty';

$GLOBALS["lang"]['denied'] = 'odrzucono';

$GLOBALS["lang"]['details'] = 'szczegóły';

$GLOBALS["lang"]['devices'] = 'urządzenia';

$GLOBALS["lang"]['digitalocean'] = 'digitalocean';

$GLOBALS["lang"]['discoveries'] = 'odkrycia';

$GLOBALS["lang"]['documentation for further details.'] = 'dokumentację dotyczącą dalszych szczegółów.';

$GLOBALS["lang"]['does <strong>not</strong> provide vulnerability reports for the following'] = 'nie <strong>nie</strong> przedstawia sprawozdania dotyczące podatności na zagrożenia w odniesieniu do:';

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

$GLOBALS["lang"]['first'] = 'pierwszy';

$GLOBALS["lang"]['fixed'] = 'stałe';

$GLOBALS["lang"]['floor'] = 'podłoga';

$GLOBALS["lang"]['for'] = 'zamiast';

$GLOBALS["lang"]['for authentication'] = 'do uwierzytelniania';

$GLOBALS["lang"]['for this information.'] = 'dla tych informacji.';

$GLOBALS["lang"]['from Audit Script Result'] = 'od Audit Script Result';

$GLOBALS["lang"]['from NMIS'] = 'od NMIS';

$GLOBALS["lang"]['from address LocalHost (Using LRPC) running in the application container'] = 'z adresu LocalHost (Using LRPC) uruchomiony w pojemniku aplikacji';

$GLOBALS["lang"]['front'] = 'przód';

$GLOBALS["lang"]['front-left'] = 'Lewa strona';

$GLOBALS["lang"]['front-right'] = 'Prawo pierwszeństwa';

$GLOBALS["lang"]['github'] = 'github';

$GLOBALS["lang"]['google'] = 'google';

$GLOBALS["lang"]['greater or equals'] = 'większe lub równe';

$GLOBALS["lang"]['greater than'] = 'większa niż';

$GLOBALS["lang"]['group'] = 'grupa';

$GLOBALS["lang"]['has not been set'] = 'nie został ustawiony';

$GLOBALS["lang"]['have a working reverse DNS resolvable IP to the target Windows PC.'] = 'mieć działający wsteczny DNS rozwiązywalny IP do docelowego komputera Windows.';

$GLOBALS["lang"]['have the ability to be executed. On the'] = 'mieć możliwość wykonania. W sprawie';

$GLOBALS["lang"]['head'] = 'głowa';

$GLOBALS["lang"]['here'] = 'Tutaj';

$GLOBALS["lang"]['high availability'] = 'wysoka dostępność';

$GLOBALS["lang"]['howto'] = 'jak do';

$GLOBALS["lang"]['if you clone a Linux virtual machine, unless you manually regenerate this (and in my experience, people do not) it will remain the same.'] = 'Jeśli sklonujesz wirtualną maszynę Linuksa, chyba że ręcznie to zregenerujesz (a z mojego doświadczenia wiem, że ludzie nie), pozostanie ona taka sama.';

$GLOBALS["lang"]['ignored'] = 'ignorowane';

$GLOBALS["lang"]['import the example device data'] = 'import przykładowych danych urządzenia';

$GLOBALS["lang"]['in'] = 'w';

$GLOBALS["lang"]['in Enterprise.'] = 'na Enterprise.';

$GLOBALS["lang"]['in Inputs can have the following values.'] = 'w wejść mogą mieć następujące wartości.';

$GLOBALS["lang"]['in Outputs can have the following values.'] = 'w Outputs mogą mieć następujące wartości.';

$GLOBALS["lang"]['inactive'] = 'nieaktywny';

$GLOBALS["lang"]['incomplete'] = 'niekompletny';

$GLOBALS["lang"]['info'] = 'info';

$GLOBALS["lang"]['installer will test for the presence of Nmap in its standard install locations of'] = 'instalator będzie testować obecność Nmap w swoich standardowych lokalizacjach instalacji';

$GLOBALS["lang"]['int, text, bool (y/n), etc'] = 'int, tekst, bool (y / n), itp.';

$GLOBALS["lang"]['is U.S. standard maintained by National Institute of Standards and Technology'] = 'jest standardem amerykańskim utrzymywanym przez Narodowy Instytut Norm i Technologii';

$GLOBALS["lang"]['is an international standard for managing information security. It provides a framework for establishing, implementing, maintaining, and continually improving an Information Security Management System (ISMS).'] = 'jest międzynarodowym standardem zarządzania bezpieczeństwem informacji. Stanowi ono ramy dla ustanowienia, wdrożenia, utrzymania i ciągłej poprawy systemu zarządzania bezpieczeństwem informacji (ISMS).';

$GLOBALS["lang"]['is based upon'] = 'jest oparty na';

$GLOBALS["lang"]['is licensed to'] = 'jest licencjonowany do';

$GLOBALS["lang"]['is next on the list and Open-AudIT can use password and key authentication. Open-AudIT can also use a sudo enabled user as opposed to the root use directly (although it can also use root). For best results, the root user or a sudo enabled user should be used (see Auditing Linux without root and Target Client Configuration on the wiki). Windows devices can also run ssh, however if Open-AudIT detects this it will stop the SSH queries and instead use WMI (assuming working WMI credentials).'] = 'jest następny na liście i Open- Audit może używać hasła i uwierzytelniania kluczy. Open-Audit może również używać użytkownika sudo w przeciwieństwie do użytkownika root bezpośrednio (chociaż może również używać root). Aby uzyskać najlepsze wyniki, należy użyć użytkownika root lub użytkownika sudo (patrz Auditing Linux bez root i Konfiguracja klienta docelowego na wiki). Urządzenia Windows mogą również uruchamiać ssh, jednak jeśli Open- Audit wykryje to zatrzyma zapytania SSH i zamiast tego użyje WMI (zakładając, że działa ono z referencjami WMI).';

$GLOBALS["lang"]['is the link to the'] = 'jest link do';

$GLOBALS["lang"]['item to view the specific tables and their columns. This will enable you to find exactly what you need, rather than trawling through the MySQL console of the schema creation script.'] = 'pozycja do wyświetlenia konkretnych tabel i ich kolumn. Umożliwi to znalezienie dokładnie tego, czego potrzebujesz, zamiast trałowania przez konsolę MySQL skryptu tworzenia schematów.';

$GLOBALS["lang"]['key required to retrieve lat/long and display map. See'] = 'klucz wymagany do pobrania LAT / Long i wyświetlenia mapy. Patrz';

$GLOBALS["lang"]['left'] = 'lewy';

$GLOBALS["lang"]['less or equals'] = 'mniej lub równa się';

$GLOBALS["lang"]['less than'] = 'mniej niż';

$GLOBALS["lang"]['license'] = 'licencja';

$GLOBALS["lang"]['licenses'] = 'Licencje';

$GLOBALS["lang"]['like'] = 'jak';

$GLOBALS["lang"]['line'] = 'linia';

$GLOBALS["lang"]['list'] = 'wykaz';

$GLOBALS["lang"]['list View, using the Create button'] = 'Pokaż listę, używając przycisku Utwórz';

$GLOBALS["lang"]['load balancing'] = 'bilansowanie obciążenia';

$GLOBALS["lang"]['location'] = 'lokalizacja';

$GLOBALS["lang"]['locations'] = 'lokalizacje';

$GLOBALS["lang"]['managed'] = 'zarządzane';

$GLOBALS["lang"]['methods'] = 'metody';

$GLOBALS["lang"]['microsoft'] = 'microsoft';

$GLOBALS["lang"]['mount point'] = 'punkt montowania';

$GLOBALS["lang"]['must'] = 'must';

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

$GLOBALS["lang"]['on devices where'] = 'na urządzeniach, w których:';

$GLOBALS["lang"]['openldap'] = 'openldap';

$GLOBALS["lang"]['optimized'] = 'zoptymalizowane';

$GLOBALS["lang"]['optionally '] = 'opcjonalnie ';

$GLOBALS["lang"]['or'] = 'lub';

$GLOBALS["lang"]['or the GitHub page at'] = 'lub strony GitHub na';

$GLOBALS["lang"]['other'] = 'pozostałe';

$GLOBALS["lang"]['package'] = 'opakowanie';

$GLOBALS["lang"]['page. Export your LDAP server from menu -> Admin -> LDAP Servers -> Details to JSON and save and include this data as well.'] = 'strona. Eksportuj serwer LDAP z menu - > Admin - > Serwery LDAP - > Szczegóły dla JSON i zapisać i dołączyć te dane, jak również.';

$GLOBALS["lang"]['partition'] = 'partycja';

$GLOBALS["lang"]['pass'] = 'pass';

$GLOBALS["lang"]['pending'] = 'oczekujące';

$GLOBALS["lang"]['performance'] = 'wydajność';

$GLOBALS["lang"]['performed'] = 'wykonane';

$GLOBALS["lang"]['permission'] = 'pozwolenie';

$GLOBALS["lang"]['permissions required per endpoint'] = 'wymagane uprawnienia na punkt końcowy';

$GLOBALS["lang"]['pie'] = 'ciasto';

$GLOBALS["lang"]['planning'] = 'planowanie';

$GLOBALS["lang"]['predictable'] = 'przewidywalny';

$GLOBALS["lang"]['query'] = 'zapytanie';

$GLOBALS["lang"]['rear'] = 'tył';

$GLOBALS["lang"]['rear-left'] = 'lewa tylna';

$GLOBALS["lang"]['rear-right'] = 'prawo do tyłu';

$GLOBALS["lang"]['regex'] = 'regex';

$GLOBALS["lang"]['release'] = 'zwolnienie';

$GLOBALS["lang"]['removed from display, but has been set'] = 'usunięty z wyświetlacza, ale został ustawiony';

$GLOBALS["lang"]['reserved'] = 'zastrzeżone';

$GLOBALS["lang"]['right'] = 'prawo';

$GLOBALS["lang"]['rights) you can click on the field value to edit it.'] = 'Prawa) można kliknąć na wartość pola, aby go edytować.';

$GLOBALS["lang"]['role'] = 'rola';

$GLOBALS["lang"]['room'] = 'pokój';

$GLOBALS["lang"]['row'] = 'wiersz';

$GLOBALS["lang"]['service failed to start due to the following error'] = 'usługa nie uruchomiła się z powodu następującego błędu';

$GLOBALS["lang"]['so Open-AudIT knows to restrict your query to the appropriate Orgs.'] = 'więc Open- Audit wie, aby ograniczyć zapytanie do odpowiednich Orgs.';

$GLOBALS["lang"]['stand-alone'] = 'samodzielny';

$GLOBALS["lang"]['standard'] = 'standard';

$GLOBALS["lang"]['starts with'] = 'zaczyna się od';

$GLOBALS["lang"]['storage'] = 'przechowywanie';

$GLOBALS["lang"]['subnet'] = 'podsieć';

$GLOBALS["lang"]['table'] = 'tabela';

$GLOBALS["lang"]['table and insert the original rows.'] = 'tabelę i wstawić oryginalne wiersze.';

$GLOBALS["lang"]['team'] = 'zespół';

$GLOBALS["lang"]['text. The first is the array index and should be left as-is. The index is used in the templates to lookup the translated text.'] = 'SMS. Pierwszy to indeks tablicy i powinien być pozostawiony jako -is. Indeks jest używany w szablonach do wyszukiwania przetłumaczonego tekstu.';

$GLOBALS["lang"]['then clicking on the details button for the table.'] = 'następnie kliknij na przycisk szczegółów tabeli.';

$GLOBALS["lang"]['then clicking on the details button for the table. Device details are stored in the'] = 'następnie kliknij na przycisk szczegółów tabeli. Szczegóły dotyczące urządzenia są przechowywane w';

$GLOBALS["lang"]['timestamp'] = 'znacznik czasu';

$GLOBALS["lang"]['to'] = 'do';

$GLOBALS["lang"]['to create an item of this type'] = 'aby utworzyć element tego typu';

$GLOBALS["lang"]['to the URL, you will get the full database entry, including all component tables, of a given device.'] = 'do URL, otrzymasz pełny wpis bazy danych, w tym wszystkie tabele komponentów, danego urządzenia.';

$GLOBALS["lang"]['to the user'] = 'do użytkownika';

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

$GLOBALS["lang"]['true or false (in JSON context)'] = 'prawdziwe lub fałszywe (w kontekście JSON)';

$GLOBALS["lang"]['unallocated'] = 'nieprzydzielone';

$GLOBALS["lang"]['unauthorised'] = 'nieautoryzowany';

$GLOBALS["lang"]['unchanged'] = 'bez zmian';

$GLOBALS["lang"]['unknown'] = 'nieznany';

$GLOBALS["lang"]['unmanaged'] = 'niezarządzane';

$GLOBALS["lang"]['unused'] = 'niewykorzystane';

$GLOBALS["lang"]['update'] = 'aktualizacja';

$GLOBALS["lang"]['uses the data collected from your devices and matches the software installed with the value provided, it counts the matches calculates how many licenses have been used and how many are left. It allows the use of wildcards on the <i>match string</i> field which matches the software.name attribute.'] = 'korzysta z danych zebranych z urządzeń i pasuje do oprogramowania zainstalowanego z dostarczoną wartością, liczy mecze oblicza, ile licencji zostało wykorzystanych i ile zostało. Pozwala na użycie kart dzikiej na <i>ciąg dopasowania</i> pole pasujące do oprogramowania. atrybut nazwy.';

$GLOBALS["lang"]['using the main menu items.'] = 'przy użyciu głównych pozycji menu.';

$GLOBALS["lang"]['valid'] = 'ważne';

$GLOBALS["lang"]['version'] = 'wersja';

$GLOBALS["lang"]['virtualisation'] = 'wirtualizacja';

$GLOBALS["lang"]['warning'] = 'ostrzeżenie';

$GLOBALS["lang"]['web'] = 'web';

$GLOBALS["lang"]['with Local and Remote access permissions set.'] = 'z ustawieniem lokalnych i zdalnych uprawnień dostępu.';

$GLOBALS["lang"]['with devices::update permission.'] = 'z urządzeniami:: aktualizacja zezwolenia.';

$GLOBALS["lang"]['with the Sign-On Redirect URI being'] = 'z Sign- On Przekierować URI jest';

$GLOBALS["lang"]['with the intention of providing simple and intuitive access in a manner familiar to developers. In addition to this API, the web interface will use the same request format and supply some additional actions (eg: HTML forms for creating items).'] = 'z zamiarem zapewnienia prostego i intuicyjnego dostępu w sposób znany deweloperom. Oprócz tego API, interfejs internetowy będzie używał tego samego formatu żądania i dostarcza kilka dodatkowych działań (np.: formularze HTML do tworzenia elementów).';

$GLOBALS["lang"]['yes'] = 'tak';

$GLOBALS["lang"]['you do not require a HighCharts license to use Firstwave products. License'] = 'nie wymagają licencji HighCharts używać produktów Firstwave. Licencja';

$GLOBALS["lang"]['you will assign any found devices to that Org or Location.'] = 'przyporządkujesz wszystkie znalezione urządzenia do tego Org lub Lokalizacja.';

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

