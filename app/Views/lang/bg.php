<?php
$GLOBALS["lang"][' Default, currently '] = ' По подразбиране, в момента ';

$GLOBALS["lang"][' is now supported with a language file. To change your user to use this language, click '] = ' вече се поддържа с езиков файл. За да промените потребителя си, за да използвате този език, кликнете ';

$GLOBALS["lang"][' seconds'] = ' секунди';

$GLOBALS["lang"]['10 Minutes'] = '10 минути';

$GLOBALS["lang"]['15 Minutes'] = '15 минути';

$GLOBALS["lang"]['30 Minutes'] = '30 минути';

$GLOBALS["lang"]['5 Minutes'] = '5 минути';

$GLOBALS["lang"]['<br> <strong>NOTE</strong> - You are accessing this URL from the local Open-AudIT server. The downloaded script will not be able to submit when run on any other machine. If you need to audit other machines, please download the script from any remote machine, not using a browser on the Open-AudIT server itself.'] = '<br/> <strong>БЕЛЕЖКА</strong> - Имате достъп до този URL адрес от местния Open-AudIT сървър. Изтегленият скрипт няма да бъде в състояние да представи, когато работи на друга машина. Ако имате нужда от одит на други машини, моля изтеглите скрипта от всяка отдалечена машина, без да използвате браузър на самия Open-AudIT сървър.';

$GLOBALS["lang"]['<p></p>'] = '<p></p>';

$GLOBALS["lang"]['<p><strong class="text-danger">NOTE</strong> - You must have working SSH or SSH Key credentials to execute benchmarks upon a target device.</p>'] = '<p><strong class="text-danger">БЕЛЕЖКА</strong> - Трябва да имате SSH или SSH Key пълномощия, за да изпълните критерии на целева устройство.</p>';

$GLOBALS["lang"]['<p><strong>Baseline</strong> - The overarching document that contains the baseline definition and the individual policy tests.<br> <br> <strong>Policies</strong> - The individual tests contained within a Baseline. Each test is for a specific item. An example would be testing for SSH version 1.2.3.<br> <br> <strong>Details</strong> - Baselines can compare netstat ports, users and software.<br> <br> <strong>Software</strong> - To compare software we check the name and version. Because version numbers are not all standardised in format, when we receive an audit result we create a new attribute called software_padded which we store in the database along with the rest of the software details for each package. For this reason, baselines using software policies will not work when run against a device that has not been audited by 1.10 (at least). Software policies can test against the version being "equal to", "greater than" or "equal to or greater than".<br> <br> <strong>Netstat Ports</strong> - Netstat Ports use a combination of port number, protocol and program. If all are present the policy passes.<br> <br> <strong>Users</strong> - Users work similar to Netstat Ports. If a user exists with a matching name, status and password details (changeable, expires, required) then the policy passes.<br> <br> </p>'] = '<p><strong>Изходна стойност</strong> - Общият документ, който съдържа основното определение и индивидуалните тестове на политиката.<br/> <br/> <strong>Политики</strong> - Индивидуалните тестове, съдържащи се в базата данни. Всеки тест е за определен елемент. Пример ще бъде изпитването за SSH версия 1.2.3.<br/> <br/> <strong>Подробности</strong> - Изходите могат да сравняват портове, потребители и софтуер.<br/> <br/> <strong>Софтуер</strong> За да сравним софтуера, проверяваме името и версията. Тъй като номерата на версиите не са стандартизирани във формат, когато получим резултат от одит, създаваме нов атрибут, наречен software_padded, който съхраняваме в базата данни заедно с останалите детайли на софтуера за всеки пакет. Поради тази причина базовите стойности, използващи софтуерни политики, няма да работят, когато се работи срещу устройство, което не е било проверявано с 1.10 (поне). Софтуерните политики могат да тестват срещу версията като "равен на," "по-голям от" или "равен на или по-голям от."<br/> <br/> <strong>Портове Netstat</strong> - Netstat Ports използват комбинация от порт номер, протокол и програма. Ако всички присъстват, политиката минава.<br/> <br/> <strong>Потребители</strong> - Потребителите работят подобно на Netstat Ports. Ако потребител съществува със съвпадащо име, статус и данни за паролата (променя се, изтича, изисква се) тогава политиката преминава.<br/> <br/> </p>';

$GLOBALS["lang"]['<p>A location is a physical address that can have devices associated with it.<br> <br>You can assign it coordinates (lat/long) and if there are devices assigned, the location will appear on the Open-AudIT Enterprise map.<br> <br></p>'] = '<p>Мястото е физически адрес, който може да има устройства, свързани с него.<br/> <br/>Можете да зададете координатите (по-малко/дълго) и ако има устройства, които са определени, мястото ще се появи на картата Open-AudIT Enterprise.<br/> <br/></p>';

$GLOBALS["lang"]['<p>A network is derived from discovery entries and device attributes.<br> <br></p>'] = '<p>Мрежата се извлича от входове и атрибути на устройството.<br/> <br/></p>';

$GLOBALS["lang"]['<p>A summary will display a list of items, grouped by the distinct values of the attribute specified by the <code>table</code> and <code>column</code> attributes.<br> <br>When a summary is executed, the result will be a list of distinct values for that <code>table</code> and <code>column</code>. There will be links on the values that allow the user to see the matching devices.<br> <br>If the attribute of <code>extra_columns</code> is populated, the resulting page will contain these columns in addition to the standard device columns.<br> <br></p>'] = '<p>Резюме ще покаже списък на елементите, групирани по отделните стойности на атрибута, посочен от <code>table</code> както и <code>column</code> атрибути.<br/> <br/>Когато се изпълни обобщение, резултатът ще бъде списък на отделни стойности за това <code>table</code> както и <code>column</code>. Ще има връзки на стойностите, които позволяват на потребителя да види съвпадащите устройства.<br/> <br/>Ако атрибутът на <code>extra_columns</code> е населена, получената страница ще съдържа тези колони в допълнение към стандартните колони на устройства.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Agents let you audit PCs without a discovery. Install the agent and it will check-in with the server each day and audit itself. It does not matter if your computers are firewalled, audit data will still appear in Open-AudIT.</p><p>When testing <strong>if</strong> an agent should perform actions, all three tests must pass (if the test is set). <strong>Then</strong> the actions are taken.</p>'] = '<p>Агентите ти позволяват да проверяваш компютрите без откритие. Инсталирайте агента и той ще се регистрира със сървъра всеки ден и ще се извършва одит. Няма значение дали компютрите ви са защитени, одитните данни ще се появят в Open-AudIT.</p><p>При изпитване <strong>ако</strong> агентът трябва да извършва действия, като и трите изпитвания трябва да преминат (ако изпитването е определено). <strong>Тогава...</strong> действията са предприети.</p>';

$GLOBALS["lang"]['<p>Applications are defined by you, the user and stored for Open-AudIT to use and associate with devices.<br> <br></p>'] = '<p>Приложенията се определят от Вас, потребителя и се съхраняват за Open-AudIT да използвате и асоциирате с устройства.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Attributes are stored for Open-AudIT to use for particular fields.</p>'] = '<p>Атрибутите се съхраняват за Open- AudIT, за да се използват за определени полета.</p>';

$GLOBALS["lang"]['<p>Being able to determine which machines are configured the same is a major part of systems administration and auditing &ndash; and now reporting on that will be made simple and automated. Once you define your baseline it will automatically run against a set of devices on a predetermined schedule. The output of these executed baselines will be available for web viewing, importing into a third party system or even as a printed report.<br> <br> Baselines enable you to combine audit data with a set of attributes you have previously defined (your baseline) to determine compliance of devices.<br> <br> For example - you might create a baseline from a device running Centos 6 which acts as one of your apache servers in a cluster. You know this particular server is configured just the way you want it but you are unsure if other servers in the cluster are configured exactly the same. Baselines enables you to determine this.<br> <br> </p>'] = '<p>Да бъдеш в състояние да се определи кои машини са конфигурирани същото е основна част от администрацията на системите и неофициално . . . . . . След като определите базовата си линия, тя автоматично ще работи срещу набор от устройства по предварително определен график. Изходът на тези изпълнени базови стойности ще бъде на разположение за гледане в интернет, внос в система от трети страни или дори като печатен доклад.<br/> <br/> Изходите ви позволяват да комбинирате одитни данни с набор от атрибути, които сте определили преди това (вашите базови стойности), за да определите съответствието на устройствата.<br/> <br/> Например - можете да създадете база от устройство, което работи на Centos 6, което действа като един от вашите апачи сървъри в куп. Знаете, че този сървър е конфигуриран точно както го искате, но не сте сигурни дали другите сървъри в клъстера са конфигурирани точно по същия начин. Изходите ви позволяват да определите това.<br/> <br/> </p>';

$GLOBALS["lang"]['<p>Clusters are stored in Open-AudIT to associate devices to better record, manage and estimate licensing costs.<br> <br></p>'] = '<p>Клъстерите се съхраняват в Open-AudIT за свързване на устройства за по-добро записване, управление и оценка на разходите за лицензиране.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Components is a generic term used for the tables that store the attributes for a device. Those tables are: access_point, arp, bios, certificate, cli_config, disk, dns, file, ip, license, log, memory, module, monitor, motherboard, netstat, network, nmap, optical, pagefile, partition, policy, print_queue, processor, radio, route, san, scsi, server, server_item, service, share, software, software_key, sound, task, usb, user, user_group, variable, video, vm, windows.</p><p> In addition we class the following tables also as device related: application, attachment, cluster, credential, image.</p>'] = '<p>Компонентите са общ термин, използван за таблиците, които съхраняват атрибутите за устройство. Тези таблици са: access_point, arp, bios, сертификат, cli_config, диск, dns, файл, IP, лиценз, log, памет, модул, монитор, дънна платка, netstat, мрежа, nmap, оптичен, pagefile, дял, политика, print_queue, процесор, радио, маршрут, san, SCSI, сървър, сървър_item, услуга, споделяне, софтуер, software_key, звук, задача, USB, потребител, user_group, променлива, видео, VM, прозорци.</p><p> В допълнение ние класираме следните таблици също като свързано устройство: приложение, закрепване, клъстер, Credential, изображение.</p>';

$GLOBALS["lang"]['<p>Credentials are encrypted when stored in the database.<br> <br>When a Discovery is run, a device has its credentials retrieved and tested for connection first (from the <code>credential</code> table). If these fail, then credentials associated with the given Org <code>credentials.org_id</code> is also tested against the device. Working credentials are stored at an individual device level in the credential table (note - no "s" in the table name).<br> <br>SSH keys are tested before SSH username / password. When testing SSH, credentials will also be marked as working with sudo or being root.<br> <br>For ease of use, Windows passwords should not contain a single or double quote. This is a remote WMI limitation, not an Open-AudIT limitation.<br> <br></p>'] = '<p>Credentials са кодирани, когато се съхраняват в базата данни.<br/> <br/>Когато Discovery се стартира, устройството има своите пълномощия, извлечени и тествани за свързване първо (от <code>credential</code> Таблица). Ако те не успеят, тогава пълномощия, свързани с дадената Org <code>credentials.org_id</code> се изпитва и срещу устройството. Работните пълномощия се съхраняват на индивидуално ниво на устройството в таблицата (забележка - няма "s" в името на таблицата).<br/> <br/>SSH ключовете се изпитват преди SSH потребителско име / парола. Когато тествате SSH, акредитивите също ще бъдат маркирани като работа със судо или корен.<br/> <br/>За по-лесна употреба паролите на Windows не трябва да съдържат нито един или двоен цитат. Това е дистанционно WMI ограничение, а не Open-AudIT ограничение.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Credentials are used to access devices.<br> <br>Configuring credentials should be one of the first things you do after installing Open-AudIT.<br> <br></p>'] = '<p>За достъп до устройства се използват лични данни.<br/> <br/>Настройване на пълномощията трябва да бъде едно от първите неща, които правите след инсталирането Open-AudIT.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Define your racks and assign devices into their positions. You already have your devices in Open-AudIT and you know your locations. Open-AudIT extends this to allow you to create a rack and assign devices to it. Open-AudIT will even provide a visualisation of the rack and the devices contained within. If you provide a device picture, that picture will be used in the visualisation. You can look at the rack on the screen and see the same items you would see if you were standing in front of it.<br> <br></p>'] = '<p>Дефинирайте вашите стелажи и присвоявайте устройства в техните позиции. Вече имате устройства в Open-AudIT и знаете къде се намирате. Open-AudIT разширява това, за да ви позволи да създадете стелаж и присвоява устройства към него. Open-AudIT дори ще осигури визуализация на багажника и устройствата, съдържащи се вътре. Ако предоставите снимка на устройство, тази снимка ще бъде използвана във визуализацията. Можете да погледнете стелажа на екрана и да видите същите елементи, които ще видите, ако стоите пред него.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Devices on your network need to be managed. But how do you keep your records up to date? A spreadsheet - defintley not. That will be out of date in hours, if not days. Why manually try to keep up. Use Open-AudIT to automatically scan your networks and record your devices - manufacturer, model, serial and more than 100 other attributes. Full lists of software, services, disks, open ports, users, etc. Automatically see if an attribute has been added, removed or changed.<br> <br>Once Open-AudIT is setup, you can sit back and relax. Have change reports emailed to you on a schedule, for example - what new devices did we discover this week? What new software was installed this week? Were there any hardware changes last month?<br> <br>Expand on the stored fields easily with your own custom attributes.<br> <br>Even add devices that are not connected to your network or those devices your Open-AudIT server cannot reach.<br> <br>Computers, switches, routers, printers or any other device on your network - Open-AudIT can audit them all.<br> <br></p>'] = '<p>Устройствата във вашата мрежа трябва да бъдат управлявани. Но как да поддържате архивите си актуални? Не и електронна таблица. Това ще е остаряло след часове, ако не и дни. Защо ръчно се опитваш да не изоставаш? Използвайте Open-AudIT за автоматично сканиране на вашите мрежи и записване на вашите устройства - производител, модел, сериен и повече от 100 други атрибути. Пълен списък на софтуер, услуги, дискове, отворени портове, потребители и др. Автоматично проверете дали даден атрибут е добавен, премахнат или променен.<br/> <br/>След като Open-AudIT е настройка, можете да седнете и да се отпуснете. Има промяна доклади, изпратени до вас по график, например - какви нови устройства открихме тази седмица? Какъв нов софтуер беше инсталиран тази седмица? Имаше ли промени в хардуера миналия месец?<br/> <br/>Разширете лесно съхраняваните полета със собствени потребителски атрибути.<br/> <br/>Дори добавете устройства, които не са свързани към вашата мрежа или тези устройства, които вашият Open-AudIT сървър не може да достигне.<br/> <br/>Компютри, превключватели, рутери, принтери или друго устройство във вашата мрежа - Open-AudIT може да ги провери всички.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Discoveries are at the very heart of what Open-AudIT does.<br> <br>How else would you know "What is on my network?"<br> <br>Discoveries are prepared data items that enable you to run a discovery upon a network in a single click, without entering the details of that network each and every time.<br> <br></p>'] = '<p>Откритията са в основата на това, което прави Open-AudIT.<br/> <br/>Как иначе ще знаеш "Какво има в мрежата ми?"<br/> <br/>Открива се подготвена информация елементи, които ви позволяват да стартирате откритие върху мрежа в едно кликване, без да навлизате в детайлите на тази мрежа всеки път.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Discovery Options are a global setting changed in the <a href="../configuration?configuration.name=discovery_default_scan_option">configuration</a>. If you have an Open-AudIT Enterprise license these are settable per discovery and in addition futher customizable as required. Discovery Options are as follows (including an indicitave time to scan an individual IP):<br/><br><strong>UltraFast</strong>: <i>1 second</i>. Scan only the ports that Open-AudIT needs to use to talk to the device and detect an IOS device (WMI, SSH, SNMP, Apple Sync). An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is not considered open. Device must respond to an Nmap ping. Use aggressive timing.<br><br/><strong>SuperFast</strong>: <i>5 seconds</i>. Scan the top 10 TCP and UDP ports, as well as port 62078 (Apple IOS detection). An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is not considered open. Device must respond to an Nmap ping. Use aggressive timing.<br/><br/><strong>Fast</strong>: <i>40 seconds</i>. Scan the top 100 TCP and UDP ports, as well as port 62078 (Apple IOS detection). An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is not considered open. Device must respond to an Nmap ping. Use aggressive timing.<br/><br/><strong>Medium (Classic)</strong>: <i>90 seconds</i>. As close to a traditional Open-AudIT scan as we can make it. Scan the top 1000 TCP ports, as well as 62078 (Apple IOS detection) and UDP 161 (SNMP). An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is considered open (and will trigger device detection). Devices are scanned regardless of a response to an Nmap ping. Use aggressive timing.<br/><br/><strong>Medium</strong>: <i>100 seconds</i>. Scan the top 1000 TCP and top 100 UDP ports, as well as port 62078 (Apple IOS detection). An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is not considered open. Device must respond to an Nmap ping. Use aggressive timing.<br/><br/><strong>Slow</strong>: <i>4 minutes</i>. Scan the top 1000 TCP and top 100 UDP ports, as well as port 62078 (Apple IOS detection). Version detection enabled. An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is considered open (and will trigger device detection). Device must respond to an Nmap ping. Use normal timing.<br/><br/><strong>UltraSlow</strong>: <i>20 minutes</i>. Not recommended. Scan the top 1000 TCP and UDP ports, as well as port 62078 (Apple IOS detection). Devices are scanned regardless of a response to an Nmap ping. Version detection enabled. An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is considered open (and will trigger device detection). Use polite timing.<br/><br/><strong>Custom</strong>: <i>Unknown time</i>. When options other than as set by a standard discovery preset are altered.<br><br></p>'] = '<p>Откритие Опциите са глобална промяна в <a href="../configuration?configuration.name=discovery_default_scan_option">конфигурация</a>. Ако имате лиценз Open-AudIT Enterprise те са настроени за всяко откритие и в допълнение futter персонализиране, както се изисква. Откритие Опциите са следните (включително неделимо време за сканиране на индивидуален IP):<br/><br/><strong>UltraFast</strong>: <i>1 секунда</i>. Сканирайте само портовете, които Open-AudIT трябва да използвате, за да говорите с устройството и да откриете IOS устройство (WMI, SSH, SNMP, Apple Sync). Ан <code>open|filtered</code> пристанището се счита за отворено. A <code>filtered</code> пристанището не се счита за отворено. Устройството трябва да отговаря на НМАП пинг. Използвай агресивното време.<br/><br><strong>Супер бързо</strong>: <i>5 секунди</i>. Сканирайте топ 10 TCP и UDP портове, както и порт 62078 (Apple IOS откриване). Ан <code>open|filtered</code> пристанището се счита за отворено. A <code>filtered</code> пристанището не се счита за отворено. Устройството трябва да отговаря на НМАП пинг. Използвай агресивното време.<br><br/><strong>Бързо!</strong>: <i>40 секунди</i>. Сканирайте топ 100 TCP и UDP портове, както и порт 62078 (Apple IOS откриване). Ан <code>open|filtered</code> пристанището се счита за отворено. A <code>filtered</code> пристанището не се счита за отворено. Устройството трябва да отговаря на НМАП пинг. Използвай агресивното време.<br/><br/><strong>Среден (класически)</strong>: <i>90 секунди</i>. Възможно най-близо до традиционното сканиране. Сканирайте 1000 TCP порта, както и 62078 (Apple IOS откриване) и UDP 161 (SNMP). Ан <code>open|filtered</code> пристанището се счита за отворено. A <code>filtered</code> портът се счита за отворен (и ще задейства откриването на устройството). Устройствата се сканират независимо от отговора на НМАП пинг. Използвай агресивното време.<br/><br/><strong>Среден</strong>: <i>100 секунди</i>. Сканирайте върха 1000 TCP и 100 UDP порта, както и порт 62078 (Apple IOS откриване). Ан <code>open|filtered</code> пристанището се счита за отворено. A <code>filtered</code> пристанището не се счита за отворено. Устройството трябва да отговаря на НМАП пинг. Използвай агресивното време.<br/><br/><strong>Бавно.</strong>: <i>4 минути</i>. Сканирайте върха 1000 TCP и 100 UDP порта, както и порт 62078 (Apple IOS откриване). Откриването на версията е активирано. Ан <code>open|filtered</code> пристанището се счита за отворено. A <code>filtered</code> портът се счита за отворен (и ще задейства откриването на устройството). Устройството трябва да отговаря на НМАП пинг. Използвай нормалния момент.<br/><br/><strong>UltraSlow</strong>: <i>20 минути</i>. Не се препоръчва. Сканирайте най-горе 1000 TCP и UDP портове, както и порт 62078 (Apple IOS откриване). Устройствата се сканират независимо от отговора на НМАП пинг. Откриването на версията е активирано. Ан <code>open|filtered</code> пристанището се счита за отворено. A <code>filtered</code> портът се счита за отворен (и ще задейства откриването на устройството). Използвайте учтивото време.<br/><br/><strong>Потребителски</strong>: <i>Неизвестно време</i>. Когато опциите, различни от зададените от стандартно предварително откритие, са променени.<br/><br/></br></br></p>';

$GLOBALS["lang"]['<p>Groups are used as simple lists of devices that match the required conditions. If requested using JSON they return a list of <code>devices.id</code> only. If requested using the web interface, they return the standard column attribute list.<br> <br></p>'] = '<p>Групите се използват като прости списъци на устройства, които отговарят на необходимите условия. При поискване от JSON те връщат списък на <code>devices.id</code> Само. Ако е поискано използване на уеб интерфейса, те връщат стандартния списък с атрибути на колоната.<br/> <br/></p>';

$GLOBALS["lang"]['<p>If the user logging on to Open-AudIT does not have the access to search LDAP (and you are using OpenLDAP), you can use another account which does have this access. Use the <code>ldap_dn_account</code> and <code>ldap_dn_password</code> to configure this.<br> <br><strong>Helpful Documentation</strong><br> <br>
        <a href="/index.php/auth/help">General Auth Help</a><br> <br>
        <a href="/index.php/faq?name=Using Entra for Auth">Using Entra for Auth</a><br> <br>
        <a href="/index.php/faq?name=Using OKTA for Auth">Using OKTA for Auth</a><br> <br>
        <a href="/index.php/faq?name=Troubleshooting LDAP Logins">Troubleshooting LDAP Logins</a><br> <br>
        <a href="/index.php/faq?name=Users, Roles and Orgs">Users, Roles and Orgs</a><br> <br></p>'] = '<p>Ако потребителят влезе в Open-AudIT няма достъп до търсене на LDAP (и използвате OpenLDAP), можете да използвате друг акаунт, който има този достъп. Използвайте <code>ldap_dn_account</code> както и <code>ldap_dn_password</code> За да настроите това.<br/> <br/><strong>Полезна документация</strong><br/> <br/><a href="/index.php/auth/help">Генерал Auth Помощ</a><br/> <br/><a href="/index.php/faq?name=Using Entra for Auth">Използване на Entra за Auth</a><br/> <br/><a href="/index.php/faq?name=Using OKTA for Auth">Използване на OKTA за Auth</a><br/> <br/><a href="/index.php/faq?name=Troubleshooting LDAP Logins">Отстраняване на пропуските в LDAP</a><br/> <br/><a href="/index.php/faq?name=Users, Roles and Orgs">Потребители, роли и орки</a><br/> <br/></p>';

$GLOBALS["lang"]['<p>If you add a device type, to display the associated icon you will have to manually copy the .svg formatted file to the directory:<br><em>Linux</em>:/usr/local/open-audit/public/device_images<br><em>Windows</em>: c:\xampp\htdocs\open-audit\device_images<br> <br>If you add a location type, to display the associated icon you will have to manually copy the 32x32px icon to the directory:<br><em>Linux</em>:/usr/local/open-audit/public/images/map_icons<br><em>Windows</em>: c:\xampp\htdocs\open-audit\images\map_icons</p><p>When the <i>resource</i> is a <code>device</code>, valid <i>types</i> are: <code>class</code>, <code>environment</code>, <code>status</code> and <code>type</code>. If the <i>resource</i> is <code>locations</code> or <code>org</code> the only valid <i>type</i> is <code>type</code>. If the <i>resource</i> is a <code>query</code> the only valid <i>type</i> is <code>menu_category</code>.</p>'] = '<p>Ако добавите тип устройство, за да покажете съответната икона, ще трябва ръчно да копирате .svg форматирания файл в директорията:<br/><em>Linux</em>:/usr/local/open-одит/public/device_images<br/><em>Прозорци</em>: c:\xamp\htdocs\open- Audit\ department_images<br/> <br/>Ако добавите тип местоположение, за да покажете съответната икона, ще трябва ръчно да копирате иконата 32x32px в директорията:<br/><em>Linux</em>:/usr/local/open- Audit/public/images/map_icons<br/><em>Прозорци</em>: c:\xamp\htdocs\open- Audit\images\map_icons</p><p>Когато <i>ресурс</i> е <code>device</code>, валиден <i>вид</i> са: <code>class</code>, <code>environment</code>, <code>status</code> както и <code>type</code>. Ако <i>ресурс</i> е <code>locations</code> или <code>org</code> единственото валидно <i>тип</i> е <code>type</code>. Ако <i>ресурс</i> е <code>query</code> единственото валидно <i>тип</i> е <code>menu_category</code>.</p>';

$GLOBALS["lang"]['<p>If you intend to completely audit your cloud machines, do not forget you will also need those credentials saved in Open-AudIT.</p><p>Make sure you allow the correct ports if you are using Microsoft Azure (22 for SSH, etc). Check your Virtual Machine -> Networking rules.<br> <br></p>'] = '<p>Ако възнамерявате да направите пълен одит на вашите облачни машини, не забравяйте, че ще се нуждаете и от тези акредитации, записани в Open-AudIT.</p><p>Уверете се, че позволявате правилните портове, ако използвате Microsoft Azure (22 за SSH и др.). Проверете Virtual Machine - > Правила в мрежата.<br/> <br/></p>';

$GLOBALS["lang"]['<p>If you select a List type, the "values" field will be enabled. You should put a comma separated list of selectable values here. These will display in a dropdown box whenever the field is edited.<br> <br>Like most other attributes, Fields can be bulk edited. Use the Bulk Edit function as you normally would and you will see the Fields are available for input.<br> <br>View the device details screen, open the section containing the field and (if you have sufficient access) you can click on the field value to edit it.<br> <br></p>'] = '<p>Ако изберете тип Списък, полето "стойности" ще бъде активирано. Тук трябва да поставите разделен списък с избрани стойности. Те ще се показват в падаща кутия, когато полето е редактирано.<br/> <br/>Както повечето други атрибути, полетата могат да бъдат редактирани. Използвайте функцията Bulk Edit, както обикновено бихте и ще видите полетата са достъпни за вход.<br/> <br/>Преглед на екрана с детайлите на устройството, отворете раздела, съдържащ полето и (ако имате достатъчно достъп) можете да кликнете върху стойността на полето, за да го редактирате.<br/> <br/></p>';

$GLOBALS["lang"]['<p>In the ever-changing world of computer security where new vulnerabilities are being discovered and patched every day, enforcing security compliance must be a continuous process. It also needs to include a way to make adjustments to policies, as well as periodic assessment and risk monitoring. The OpenSCAP ecosystem provides tools and customizable policies for a quick, cost-effective and flexible implementation of these processes.</p>'] = '<p>В постоянно променящия се свят на компютърната сигурност, където се откриват и поправят нови слабости всеки ден, прилагането на спазването на сигурността трябва да бъде непрекъснат процес. Тя трябва също така да включва начин за коригиране на политиките, както и периодична оценка и наблюдение на риска. Екосистемата OpenSCAP осигурява инструменти и персонализируеми политики за бързо, икономически ефективно и гъвкаво прилагане на тези процеси.</p>';

$GLOBALS["lang"]['<p>Integrations allow you to setup device selection and schedules for Open-AudIT to talk to external systems.<br> <br></p>'] = '<p>Интеграциите ви позволяват да настроите селекция на устройства и графици за Open-AudIT, за да разговаряте с външни системи.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Nmap timing details are found on the bottom of this linked page <a href="https://nmap.org/book/man-performance.html" target="_blank">https://nmap.org/book/man-performance.html</a>. From that page:<br> <br><em>If you are on a decent broadband or ethernet connection, I would recommend always using -T4 (Aggressive). Some people love -T5 (Insane) though it is too aggressive for my taste. People sometimes specify -T2 (Polite) because they think it is less likely to crash hosts or because they consider themselves to be polite in general. They often do not realize just how slow -T2 really is. Their scan may take ten times longer than a default scan. Machine crashes and bandwidth problems are rare with the default timing options -T3 (Normal) and so I normally recommend that for cautious scanners. Omitting version detection is far more effective than playing with timing values at reducing these problems.</em><footer>Gordon <i>Fyodor</i> Lyon</footer><br> <br></p>'] = '<p>В долната част на тази свързана страница са намерени данни за времето за Nmap <a href="https://nmap.org/book/man-performance.html" target="_blank">https://nmap.org/book/man-performance.html</a>. От тази страница:<br/> <br/><em>Ако сте на прилична широколентова или етерна връзка, бих препоръчал винаги да използвате -T4 (агресивен). Някои хора обичат -T5 (луд) въпреки че е твърде агресивен за моя вкус. Хората понякога посочват -T2 (почтително), защото смятат, че е по-малко вероятно да се разбие домакини или защото те смятат себе си за учтив като цяло. Те често не осъзнават колко бавно е наистина Т2. Сканирането им може да отнеме 10 пъти повече време от сканирането по подразбиране. Машинни катастрофи и проблеми с честотната лента са рядкост с опции по подразбиране време -T3 (нормално) и така обикновено препоръчвам това за предпазливи скенери. Omitting откриване на версия е далеч по-ефективно, отколкото играе с времето стойности за намаляване на тези проблеми.</em><footer>Гордън. <i>Фьодор</i> Лион</footer><br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT can be configured to use different methods to authenticate a user and in addition, to create a user account using assigned roles and orgs based on group membership.<br> <br></p>'] = '<p>Open-AudIT може да бъде конфигуриран за използване на различни методи за удостоверяване на потребителя и в допълнение, за създаване на потребителски акаунт с помощта на определени роли и орги въз основа на членството в групата.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT can retrieve details about a file or directory of files and monitor these files for changes as per other attributes in the Open-AudIT database.<br> <br>This feature works out of the box for Linux Open-AudIT servers, but needs a change to the service account name under a Windows Open-AudIT server.<br> <br>Supported clients are Windows and Linux.<br> <br></p>'] = '<p>Open- Aud IT може да извлече данни за файл или директория на файлове и да следи тези файлове за промени, както и за други атрибути в базата данни Open-AudIT.<br/> <br/>Тази функция работи извън полето за Linux Open-AudIT сървъри, но се нуждае от промяна в името на услугата акаунт под Windows Open-AudIT сървър.<br/> <br/>Поддържани клиенти са Windows и Linux.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT can retrieve details about a file, ask the native package manager if they are known to it and monitor these files for changes as per other attributes in the Open-AudIT database.<br> <br>Supported clients are Linux only.<br> <br></p>'] = '<p>Open- Aud IT може да извлече подробности за файл, да поиска от местния мениджър пакет, ако те са известни с него и да следи тези файлове за промени, както и други атрибути в базата данни Open-AudIT.<br/> <br/>Поддържаните клиенти са само Линукс.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT can store information in custom fields that are associated with each device.<br> <br>Once an Additional Field has been created it can be used in queries and groups just like any other attribute in the database.<br> <br></p>'] = '<p>Open- Aud IT може да съхранява информация в потребителски полета, които са свързани с всяко устройство.<br/> <br/>След като е създадено Допълнително поле, то може да се използва в заявки и групи като всеки друг атрибут в базата данни.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT comes with many queries inbuilt. If you require a specific query and none of the pre-packaged queries fit your needs, it is quite easy to create a new one and load it into Open-AudIT for running.<br> <br></p>'] = '<p>Open-AudIT идва с много въпроси, вградени. Ако имате нужда от конкретна заявка и нито една от предварително опакованите заявки не отговаря на вашите нужди, това е доста лесно да се създаде нова и да се зареди в Open-AudIT за работа.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT comes with many summaries inbuilt. If you require a specific summary and none of the pre-packaged summaries fit your needs, it is quite easy to create a new one and load it into Open-AudIT for running.<br> <br></p>'] = '<p>Open-AudIT идва с много резюмета вградени. Ако имате нужда от конкретно резюме и нито един от предварително опакованите резюмета отговарят на вашите нужди, това е доста лесно да се създаде нов и да го заредите в Open-AudIT за работа.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT is supported by FirstWave with an amazing level of support. If you prefer an active community of support givers, theres that as well. Where else can you talk directly to the developers and get a response within 24 hours? Just try that with other products! Amazing support. Full stop. You need support, we provide support. No ifs or buts. Great support. Period.<br> <br></p>'] = '<p>Open-AudIT е подкрепен от FirstWave с невероятно ниво на подкрепа. Ако предпочитате активна общност от дарители на подкрепа, има и това. Къде другаде можете да говорите директно с разработчиците и да получите отговор в рамките на 24 часа? Просто опитайте с други продукти! Невероятна подкрепа. Пълен стоп. Нуждаеш се от подкрепа, ние осигуряваме подкрепа. Без "ако" или "но." Страхотна подкрепа. Точка.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT provides multi-tenancy out of the box!<br> <br>Orgs (organisations) in Open-AudIT are a key item. A user has a primary Org as well as a list of Orgs they can access. A user combines this with a list of assigned "Roles" that define what actions they can take on items assigned to the Orgs they have access to. The combination of a users "orgs" and "roles" define what they can and cannot do within Open-AudIT.<br> <br>Most items in Open-AudIT are assigned to an Org. Devices, Locations, Networks, etc.<br> <br>Orgs can have child Orgs. Think of an organisational chart (tree) structure. If a user has access to a specific Org, they also have access to that Orgs descendants. For more information, see this <a href="/index.php/faq?name=Users, Roles and Orgs">FAQ</a>.</p>'] = '<p>Open-AudIT осигурява мулти-тененси извън кутията!<br/> <br/>Оргите (организациите) в Open-AudIT са ключов елемент. Потребителят има основно Орг, както и списък с орги, които могат да ползват. Потребителят комбинира това със списък на назначените "Roles," които определят какви действия могат да предприемат на обектите, възложени на Оргите, до които имат достъп. Комбинацията от потребители "orgs" и "roles" определят какво могат и какво не могат да правят в рамките на Open-AudIT.<br/> <br/>Повечето елементи в Open-AudIT са предназначени за Org. Устройства, места, мрежи и др.<br/> <br/>Оргите могат да имат детски орги. Помислете за организационна структура (дърво). Ако потребителят има достъп до определен Орг, той също има достъп до този Орг. За повече информация вижте това <a href="/index.php/faq?name=Users, Roles and Orgs">Често задавани въпроси</a>.</p>';

$GLOBALS["lang"]['<p>Open-AudIT provides multi-tenancy out of the box!<br> <br>Orgs (organisations) in Open-AudIT are a key item. A user has a primary Org as well as a list of Orgs they can access. A user combines this with a list of assigned "Roles" that define what actions they can take on items assigned to the Orgs they have access to. The combination of a users "orgs" and "roles" define what they can and cannot do within Open-AudIT.<br> <br>Most items in Open-AudIT are assigned to an Org. Devices, Locations, Networks, etc.<br> <br>Orgs can have child Orgs. Think of an organisational chart (tree) structure. If a user has access to a specific Org, they also have access to that Orgs descendants.</p>'] = '<p>Open-AudIT осигурява мулти-тененси извън кутията!<br/> <br/>Оргите (организациите) в Open-AudIT са ключов елемент. Потребителят има основно Орг, както и списък с орги, които могат да ползват. Потребителят комбинира това със списък на назначените "Roles," които определят какви действия могат да предприемат на обектите, възложени на Оргите, до които имат достъп. Комбинацията от потребители "orgs" и "roles" определят какво могат и какво не могат да правят в рамките на Open-AudIT.<br/> <br/>Повечето елементи в Open-AudIT са предназначени за Org. Устройства, места, мрежи и др.<br/> <br/>Оргите могат да имат детски орги. Помислете за организационна структура (дърво). Ако потребителят има достъп до определен Орг, той също има достъп до този Орг.</p>';

$GLOBALS["lang"]['<p>Quickly view the status of devices on your network.<br> <br></p>'] = '<p>Бързо огледайте състоянието на устройствата в мрежата си.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Roles in Open-AudIT are a key item. A user has a primary Org as well as a list of Orgs they can access. A user combines this with a list of assigned Roles that define what actions they can take on items assigned to the Orgs they have access to. The combination of a users "orgs" and "roles" define what they can and cannot do within Open-AudIT.<br> <br>
        Get the complete Open-AudIT Enterprise experience. Creating roles allows fine grained control over what your users can do within Open-AudIT.<br> <br>
        The primary method for authorisation (what a user can do) is based on the users Roles. Default roles are defined as admin, org_admin, reporter and user. Each role has a set of permissions (Create, Read, Update, Delete) for each endpoint. The ability to define additional roles and edit existing roles is enabled in Open-AudIT Enterprise.<br> <br>Roles can also be used with LDAP (Active Directory and OpenLDAP) authorisation. Enterprise licensed installations have the ability to customise the LDAP group for each defined role.<br> <br></p>'] = '<p>Роли в Open-Aud Това е ключов елемент. Потребителят има основно Орг, както и списък с орги, които могат да ползват. Потребителят комбинира това със списък на възложените Роли, които определят какви действия могат да предприемат в обектите, възложени на Оргите, до които имат достъп. Комбинацията от потребители "orgs" и "roles" определят какво могат и какво не могат да правят в рамките на Open-AudIT.<br/> <br/>Вземи целия Open-AudIT Enterprise опит. Създаването на роли позволява фино зърнест контрол върху това, което вашите потребители могат да направят в рамките на Open-AudIT.<br/> <br/>Основният метод за разрешаване (това, което потребителят може да направи) се основава на ролите на потребителите. Ролите по подразбиране се определят като администратор, org_admin, репортер и потребител. Всяка роля има набор от разрешения (Създаване, четене, актуализиране, изтриване) за всяка крайна точка. Възможността за определяне на допълнителни роли и редактиране на съществуващи роли е активирана в Open-AudIT Enterprise.<br/> <br/>Ролите могат да се използват и с LDAP (Активна директория и OpenLDAP) разрешение. Лицензираните инсталации на Enterprise имат способността да персонализират LDAP групата за всяка определена роля.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Rules examine attributes and make cahnges based on the appropriate rule.</p>'] = '<p>Правилата разглеждат атрибутите и правят кангите базирани на съответното правило.</p>';

$GLOBALS["lang"]['<p>Scanning options allow you to easily apply a set of options to a discovery.<br> <br></p>'] = '<p>Опциите за сканиране ви позволяват лесно да приложите набор от опции към откритието.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Simple, intuitive, accurate geographic mapping provided by Google Maps. Open-AudIT leverages Google Maps to provide live, interactive geographic mapping of device locations. Automated conversion of street addresses to geocodes and longitude / latitude.<br> <br>
        </p>'] = '<p>Проста, интуитивна, точна географска карта, предоставена от Google Maps. ОФИЦИАЛНИ ОФИЦИАЛНИ ИНСТРУМЕНТИ Google Maps за осигуряване на живо, интерактивно географско картографиране на местата на устройството. Автоматизирано преобразуване на улични адреси към геокоди и географска дължина / ширина.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Software Packages are used to determine if antivirus, backup, firewall, approved or banned software is installed.<br> <br></p>'] = '<p>Софтуерните пакети се използват за определяне дали е инсталиран антивирус, архивиране, защитна стена, одобрен или забранен софтуер.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Some examples of valid Subnet attributes are: 192.168.1.1 (a single IP address), 192.168.1.0/24 (a subnet), 192.168.1-3.1-20 (a range of IP addresses).<br> <br><em>NOTE</em> - Only a subnet (as per the examples - 192.168.1.0/24) will be able to automatically create a valid network for Open-AudIT. <br> <br>If you use an Active Directory type, make sure you have appropriate credentials to talk to your Domain Controller already in <a href="../credentials">credentials</a>.<br> <br></p>'] = '<p>Някои примери за валидни атрибути на Subnet са: 192.168.1.1 (единичен IP адрес), 192.168.1.0/24 (поднет), 192.1 - 3.1-20 (диапазон от IP адреси).<br/> <br/><em>БЕЛЕЖКА</em> - Само поднет (според примерите - 192.168.1.0/24) ще може автоматично да създаде валидна мрежа за Open-AudIT. <br/> <br/>Ако използвате тип Active Directory, уверете се, че имате подходящи препоръки, за да говорите с вашия Domain Controller вече в <a href="../credentials">пълномощия</a>.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Standards are stored in Open-AudIT.<br /><br /><br /><br /></p>'] = '<p>Стандартите се съхраняват в Open-AudIT.<br/><br/><br/><br/></p>';

$GLOBALS["lang"]['<p>Supported clients are Linux only.<br> <br></p>'] = '<p>Поддържаните клиенти са само Линукс.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Tasks have a schedule that mirrors the unix cron schedule. The attributes for minute, hour, day_of_month, month, day_of_week all act as per the cron definitions. You can select multiples of these using comma seperated values (no spaces). You can select every value using *.<br> <br>The <code>type</code> of the task can be one of: baselines, collectors, discoveries, queries, reports or summaries.<br> <br>If you wish to schedule a Baseline or Discovery, you will need to create these before creating the tasks. You must use the ID of the type of item in <code>sub_resource_id</code>. For example if you wish to schedule a Discovery, use that particular Discoveries ID in <code>sub_resource_id</code>.<br> <br>The value for <code>uuid</code> is specific to each Open-AudIT server. Your unique value can be found in the configuration.<br> <br>The <code>options</code> attribute is a JSON document containing any extra attributes required to run the task. The extra attributes for reports, queries and summaries are: <code>email_address</code> and <code>format</code>. The extra attribute for Bselines is <code>group_id</code>.<br> <br></p>'] = '<p>Задачите имат график, който отразява програмата на Уникс Крон. Характеристиките за минута, час, ден_на_месец, месец, ден_на_седмична всички действат по определения за крони. Можете да изберете няколко от тях с помощта на запетая сепарирани стойности (без интервали). Можете да изберете всяка стойност с помощта на *.<br/> <br/>На <code>type</code> на задачата може да бъде един от: базови, колектори, открития, запитвания, доклади или резюмета.<br/> <br/>Ако желаете да насрочите база или Дискавъри, ще трябва да ги създадете преди да създадете задачите. Трябва да използвате ID на вида на елемента в <code>sub_resource_id</code>. Например, ако искате да насрочите откритие, използвайте този конкретен документ за откриване в <code>sub_resource_id</code>.<br/> <br/>Стойността за <code>uuid</code> е специфична за всеки сървър Open-AudIT. Уникалната ви стойност може да бъде намерена в конфигурацията.<br/> <br/>На <code>options</code> атрибут е JSON документ, съдържащ всички допълнителни атрибути, необходими за изпълнение на задачата. Допълнителните атрибути за доклади, запитвания и резюмета са: <code>email_address</code> както и <code>format</code>. Допълнителният атрибут за Bselines е <code>group_id</code>.<br/> <br/></p>';

$GLOBALS["lang"]['<p>The <code>type</code> of the location will assign its icon.<br> <br></p>'] = '<p>На <code>type</code> на местоположението ще определи иконата си.<br/> <br/></p>';

$GLOBALS["lang"]['<p>The Attributes endpoint allows you to add customized values to different attributes in Open-AudIT, at the moment this feature works on the Class, Environment, Status and Type attributes on Devices, the Type attribute for both Locations and Orgs as well as the Menu Category for Queries. If you view an item of one of the prvious types (say view a Lkocation) you will notice the Type attribute must be selected from a drop-down box. This is where those values are stored. Hence, if you would like to add a new Type to be chosen for a Location, add it using the Attributes feature.</p>'] = '<p>Крайната точка на Атрибутите ви позволява да добавите персонализирани стойности към различни атрибути в Open-AudIT, в момента тази функция работи върху класовете, околната среда, състоянието и атрибутите на типа на устройства, атрибута на типа за двете места и орки, както и категория Меню за заявки. Ако видите елемент от един от най-прозрачните типове (кажи изглед към Lkocation), ще забележите атрибута тип трябва да бъде избран от падаща кутия. Тук се съхраняват тези стойности. Следователно, ако искате да добавите нов тип, който да бъде избран за местоположение, добавете го, като използвате функцията за Атрибути.</p>';

$GLOBALS["lang"]['<p>The Collectors feature enables you to easily manage many "collector" computers that perform network discovery. All Collectors are centrally controlled from the Server. The only required network ports between the Collector and the Server are 80 and/or 443.<br> <br>It makes managing disparate networks quick, easy and simple. Open-AudIT Enterprise licensees get a single collector license included and have the option to buy more as required..<br> <br></p>'] = '<p>Функцията Collectors ви позволява лесно да управлявате много "колекционер" компютри, които извършват мрежови открития. Всички колектори са централно контролирани от сървъра. Единствените необходими мрежови портове между колектора и сървъра са 80 и/или 443.<br/> <br/>Това прави управлението на различни мрежи бързо, лесно и просто. Open-AudIT Enterprise лицензистите получават един колекционер лиценз включени и имат възможност да купуват повече, както се изисква..<br/> <br/></p>';

$GLOBALS["lang"]['<p>The SELECT section of your SQL <em>must</em> contain fully qualified columns. IE - <code>SELECT devices.id AS `devices.id`, devices.name AS `devices.name` ...</code>.<br> <br>The WHERE section of your SQL <em>must</em> contain <code>WHERE @filter</code> so Open-AudIT knows to restrict your query to the appropriate Orgs. SQL not containing this condition will result in the query failing to be created, unless you have the Admin role.<br> <br>An example query SQL showing attributes on devices that have an <code>os_group</code> attribute of "Linux" - <br><code>SELECT devices.id AS `devices.id`, devices.icon AS `devices.icon`, devices.type AS `devices.type`, devices.name AS `devices.name`, devices.os_name AS `devices.os_name` FROM devices WHERE @filter AND devices.os_group = "Linux"</code><br> <br></p>'] = '<p>SELECT секцията на вашия SQL <em>трябва</em> съдържа напълно квалифицирани колони. IE - <code>SELECT devices.id AS `devices.id`, devices.name AS `devices.name` ...</code>.<br/> <br/>The Where section of your SQL <em>трябва</em> съдържа <code>WHERE @filter</code> Така Open-AudIT знае да ограничи вашата заявка до съответните Orgs. SQL не съдържа това условие ще доведе до невъзможност да бъде създадена заявка, освен ако имате ролята Admin.<br/> <br/>Примерна заявка SQL показва атрибути на устройства, които имат <code>os_group</code> атрибут на "Линукс" - <br/><code>SELECT devices.id AS `devices.id`, devices.icon AS `devices.icon`, devices.type AS `devices.type`, devices.name AS `devices.name`, devices.os_name AS `devices.os_name` FROM devices WHERE @filter AND devices.os_group = "Linux"</code><br/> <br/></p>';

$GLOBALS["lang"]['<p>The SELECT section of your SQL <em>must</em> only contain <code>DISTINCT(devices.id)</code>.<br> <br>The WHERE section of your SQL <em>must</em> contain <code>WHERE @filter</code> so Open-AudIT knows to restrict your query to the appropriate Orgs. SQL not containing this condition will result in the group failing to be created.<br> <br>An example for SQL to select all devices running the Debian OS - <code>SELECT DISTINCT(devices.id) FROM devices WHERE @filter AND devices.os_family = "Debian"</code><br> <br></p>'] = '<p>SELECT секцията на вашия SQL <em>трябва</em> само съдържа <code>DISTINCT(devices.id)</code>.<br/> <br/>The Where section of your SQL <em>трябва</em> съдържа <code>WHERE @filter</code> Така Open-AudIT знае да ограничи вашата заявка до съответните Orgs. Ако SQL не съдържа това състояние, групата няма да бъде създадена.<br/> <br/>Пример за SQL за избор на всички устройства, работещи с Дебиан OS - <code>SELECT DISTINCT(devices.id) FROM devices WHERE @filter AND devices.os_family = "Debian"</code><br/> <br/></p>';

$GLOBALS["lang"]['<p>The license endpoint allows you to track the number of licenses found on your devices.<br> <br>To create an entry to track your licenses you <em>must</em> to provide a name, an organization, the number of licenses acquired and the name of the software. On the field <code>match_string</code> you must provide the name of the software that you want to track, you can use the percent sign (%) as a wildcard in the match_string.<br> <br></p>'] = '<p>Крайната точка на лиценза ви позволява да проследите броя на лицензите, намерени на устройствата ви.<br/> <br/>За да създадете запис за проследяване на лицензите си <em>трябва</em> да предостави име, организация, броя на придобитите лицензи и името на софтуера. На терена <code>match_string</code> Вие трябва да предоставите името на софтуера, който искате да следите, можете да използвате знака процент (%) като дива карта в match_string.<br/> <br/></p>';

$GLOBALS["lang"]['<p>The network should be in the format 192.168.1.0/24.<br> <br></p>'] = '<p>Мрежата трябва да бъде във формат 191.168.1.0/24.<br/> <br/></p>';

$GLOBALS["lang"]['<p>The primary and optional secondary items should be fully qualified - ie, devices.type or software.name.<br> <br></p>'] = '<p>Първичните и незадължителните вторични елементи трябва да бъдат напълно квалифицирани - т.е. устройства. вид или софтуер. Име.<br/> <br/></p>';

$GLOBALS["lang"]['<p>There is no need to do anything if you are running Open-AudIT on a Linux server.<br>
<br>
Windows clients are just fine and require no special actions, however.... to enable this feature the audit script must be run locally on the target Windows system. It cannot be run remotely as we do with WMI calls when running the audit script on one Windows machine, while targeting a second Windows machine. To do this we need to copy the audit script to the target Windows machine and then run it. Unfortunately the service account that Apache runs under is the Local System account. This account has no access to remote (network based) resources. To work around this issue the service must be run under another account. It is easiest to just use the local Administrator account, but you can try any account you like as long as it has the required privileges. The Local System account has as much local access as the local Administrator account.<br>
<br>
See our page on enabling <a href="/index.php/faq?name=Running Open-AudIT Apache Service Under Windows">Running Open-AudIT Apache Service Under Windows</a></p>'] = '<p>Няма нужда да правите нищо, ако стартирате Open-AudIT на Linux сървър.<br/><br/>Клиентите на Windows са просто добре и не изискват специални действия, обаче... за да се даде възможност тази функция одит скрипт трябва да се работи на местно ниво на целевата система Windows. Тя не може да бъде стартирана дистанционно, както правим с WMI обаждания при провеждане на одит скрипт на една машина Windows, докато се цели втора машина Windows. За да направим това, трябва да копираме одитния скрипт на целевата машина Windows и след това да го стартираме. За съжаление сметката за услугата, по която работи Апачи, е сметката на местната система. Тази сметка няма достъп до отдалечени (мрежови) ресурси. За да се работи по този въпрос, услугата трябва да се управлява по друга сметка. Най-лесно е просто да използвате местния администратор акаунт, но можете да опитате всеки акаунт, който ви харесва, стига да има необходимите привилегии. Сметката на Местната система има толкова местен достъп, колкото и сметката на местния администратор.<br/><br/>Вижте нашата страница за позволяване <a href="/index.php/faq?name=Running Open-AudIT Apache Service Under Windows">Работа с отворени AudIT Apache услуги под Windows</a></p>';

$GLOBALS["lang"]['<p>These are the devices that live within a rack.<br> <br></p>'] = '<p>Това са устройствата, които живеят в багажника.<br/> <br/></p>';

$GLOBALS["lang"]['<p>This endpoint enables you to add your cloud infrastructure details. Open-AudIT will then reach out to your clouds using their native API and return your servers, just like any other device in Open-AudIT.<br> <br><em>NOTE</em> - To use this feature, we <em>must</em> enable the configuration items match_mac (for AWS) and match_hostname (for Azure). This will be done automatically the first time a cloud discovery is executed.<br> <br>Credentials for your cloud (<a href="/index.php/faq?name=Credentials for Microsoft Azure used in Cloud Discovery">Azure</a> or <a href="/index.php/faq?name=Credentials for Amazon AWS used in Cloud Discovery">AWS</a>) are required.<br> <br></p>'] = '<p>Тази крайна точка ви позволява да добавите вашата облачна инфраструктура детайли. Open-AudIT след това ще достигне до облаците си с помощта на родния си API и ще върне сървърите си, точно както всяко друго устройство в Open-AudIT.<br/> <br/><em>БЕЛЕЖКА</em> - За да използваме тази функция, ние <em>трябва</em> позволява на конфигурационните елементи match_mac (за AWS) и match_hostname (за Azure). Това ще стане автоматично при първото откриване на облак.<br/> <br/>Жилища за вашия облак (<a href="/index.php/faq?name=Credentials for Microsoft Azure used in Cloud Discovery">Azure</a> или <a href="/index.php/faq?name=Credentials for Amazon AWS used in Cloud Discovery">AWS</a>) се изискват.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Vulnerabilities reporting based on the NIST CVE feed.<br> <br></p>'] = '<p>Уязвимостта се отчита въз основа на NIST CVE емисията.<br/> <br/></p>';

$GLOBALS["lang"]['<p>We initially setup the default list of scripts with the default options. These default scripts cannot be deleted. You can create additional scripts for use by you as required. Your script will be based on one of the existing scripts and have custom options applied. The scripts can then be downloaded from the list page at menu -> Discover -> Audit Scripts -> List Audit Scripts<br> <br></p>'] = '<p>Първоначално настройваме списъка по подразбиране на скриптовете с опциите по подразбиране. Тези скриптове по подразбиране не могат да бъдат изтрити. Можете да създавате допълнителни скриптове за използване от вас според изискванията. Вашият скрипт ще бъде базиран на един от съществуващите скриптове и ще се прилагат потребителски опции. Скриптовете могат да бъдат изтеглени от страницата на списъка в менюто - > Открийте - > Одитни скриптове - > Списък скриптове за одит<br/> <br/></p>';

$GLOBALS["lang"]['<p>When using Regex for matching, a helpful page can be found on the <a href="https://www.php.net/manual/en/regexp.reference.meta.php" target="_blank"> PHP website</a>. Some differences to Perl Regex can be found <a href="https://www.php.net/manual/en/reference.pcre.pattern.differences.php" target="_blank">here</a>.</p>'] = '<p>Когато използвате Regex за съвпадение, на страницата може да намерите полезна <a href="https://www.php.net/manual/en/regexp.reference.meta.php" target="_blank"> Уебсайт на PHP</a>. Някои разлики към Perl Regex могат да бъдат намерени <a href="https://www.php.net/manual/en/reference.pcre.pattern.differences.php" target="_blank">Ето.</a>.</p>';

$GLOBALS["lang"]['<p>Widgets can easily be created to show whatever is specific to your environment on your dashboards.<br> <br></p>'] = '<p>Widgets могат лесно да бъдат създадени, за да покаже какво е специфично за вашата среда на таблото.<br/> <br/></p>';

$GLOBALS["lang"]['<p>With Open-AudIT Professional and Enterprise you can automate and schedule discoveries, report generation, or baseline checks to run when you want, and as often as you need. Schedule your discoveries to run nightly and reports to be generated and emailed to key personnel each morning. Complex or simple schedules, device discovery and report generation is just a click away.<br> <br>Create individual discovery schedules for each subnet or AD controller, add in reports to be created for targeted audiences. Develop simple or complex schedules to support company needs, avoid backups or impact to operations, or simply to spread the load and speed-up audit completion.<br> <br></p>'] = '<p>С Open- AudIT Professional и Enterprise можете да автоматизирате и планирате открития, докладване поколение, или изходни проверки, за да тече, когато искате, и толкова често, колкото е необходимо. Планирайте вашите открития да тече нощно време и доклади, за да бъдат генерирани и изпратени по електронна поща на ключовия персонал всяка сутрин. Комплексни или прости графици, откриването на устройства и генерирането на доклади е само на един клик разстояние.<br/> <br/>Създаване на индивидуални графици за откриване на всеки подмрежа или AD контролер, добави в доклади, които да бъдат създадени за целеви аудитория. Разработване на прости или сложни графици за подпомагане на нуждите на компанията, избягване на архивиране или въздействие върху операции, или просто за разпространение на натоварване и ускоряване на одита завършване.<br/> <br/></p>';

$GLOBALS["lang"]['<p>You can create a script with all the options for any of the existing audit scripts - not just Windows. AIX, ESX, Linux, OSX and Windows are all covered.<br> <br></p>'] = '<p>Можете да създадете скрипт с всички опции за който и да е от съществуващите одитни скриптове - не само Windows. AIX, ESX, Linux, OSX и Windows са покрити.<br/> <br/></p>';

$GLOBALS["lang"]['<p>You can use the percent % sign as a wildcard in the match_string.<br> <br></p>'] = '<p>Можете да използвате знака процент процент като дива карта в match_string.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Your racks help refine exactly where your devices are located.<br> <br></p>'] = '<p>Вашите стелажи помагат да се усъвършенства точно къде са разположени вашите устройства.<br/> <br/></p>';

$GLOBALS["lang"]['A Google Maps API Key is required for this function.'] = 'Карти в Google API Ключът е необходим за тази функция.';

$GLOBALS["lang"]['A JSON array of device IDs that will have this benchmark executed.'] = 'JSON масив от устройства, които ще имат този бенчмарк изпълнена.';

$GLOBALS["lang"]['A JSON array of objects matching the software name taken from the CVE, enriched with the software name retrieved by Open-AudIT.'] = 'JSON масив от обекти, отговарящи на софтуерното име, взето от CVE, обогатен с името на софтуера, извлечен от Open-AudIT.';

$GLOBALS["lang"]['A JSON array of values to test for this vulnerability.'] = 'JSON масив от стойности, за да се тества за тази уязвимост.';

$GLOBALS["lang"]['A JSON document containing the Orgs assigned to this user. IDs taken from <code>orgs.id</code>. If a user has access to an Org, they have access to that Orgs descendants.'] = 'Документ JSON, съдържащ оргите на този потребител. Документи, взети от <code>orgs.id</code>. Ако потребителят има достъп до Орг, той има достъп до потомците му.';

$GLOBALS["lang"]['A JSON document containing the required attributes depending on <code>scripts.type</code>.'] = 'Документ JSON, съдържащ необходимите атрибути в зависимост от <code>scripts.type</code>.';

$GLOBALS["lang"]['A JSON document containing the required attributes overriding the chosen discovery_scan_options.'] = 'Документ на JSON, съдържащ необходимите атрибути, които налагат избраните откритие_scan_options.';

$GLOBALS["lang"]['A JSON document containing the required attributes overriding the default device match options.'] = 'JSON документ, съдържащ изискваните атрибути, който премахва опциите за съвпадение на устройството по подразбиране.';

$GLOBALS["lang"]['A JSON document containing the roles assigned to this user. Role names taken from <code>roles.name</code>.'] = 'Документ JSON, съдържащ ролите на този потребител. Ролеви имена, взети от <code>roles.name</code>.';

$GLOBALS["lang"]['A JSON object containing an array of attributes to change if the match occurs.'] = 'Обект на JSON, съдържащ масив от атрибути, които да се променят, ако мачът се случи.';

$GLOBALS["lang"]['A JSON object containing an array of attributes to match.'] = 'Обект на JSON, съдържащ множество атрибути, които съвпадат.';

$GLOBALS["lang"]['A JSON object containing collection specific options.'] = 'Обект JSON, съдържащ специфични опции за събиране.';

$GLOBALS["lang"]['A JSON object populated via a Cloud discovery.'] = 'Обект на JSON, населен чрез Cloud откритие.';

$GLOBALS["lang"]['A JSON representation containing the details of the queue item to be executed.'] = 'Представителство на JSON, съдържащо детайлите на опашката, която трябва да бъде изпълнена.';

$GLOBALS["lang"]['A JSON representation of the fields for this integration.'] = 'Джейсън представя полетата за тази интеграция.';

$GLOBALS["lang"]['A JSON representation of the individual tests and their results on all devices this baseline has been run against.'] = 'JSON представяне на отделните тестове и резултатите от тях на всички устройства, с които се работи.';

$GLOBALS["lang"]['A JSON representation of the tests that make up this policy.'] = 'Джейсън представя тестовете, които правят тази политика.';

$GLOBALS["lang"]['A URL to a file to download.'] = 'URL адрес на файл за изтегляне.';

$GLOBALS["lang"]['A calculated field that displays the number of times this piece of software was found on the computers in the selected Org (and its descendants if configured).'] = 'Изчислено поле, което показва броя пъти този софтуер е намерено на компютрите в избрания Орг (и неговите потомци, ако са конфигурирани).';

$GLOBALS["lang"]['A collector is either in Collector or Stand-Alone mode.'] = 'Колекционерът е или в колектора, или в режим Stand-Alone.';

$GLOBALS["lang"]['A comma separated list of applicable CVEs.'] = 'Запетайка разделен списък на приложимите CVE.';

$GLOBALS["lang"]['A comma separated list of values, one of which can be selected.'] = 'Разделен списък от стойности, един от които може да бъде избран.';

$GLOBALS["lang"]['A command to run. When the agent is Windows based, this command is run from within the powershell agent.'] = 'Команда за бягане. Когато агентът е базиран на Windows, тази команда се изпълнява от вътрешността на енергиен агент.';

$GLOBALS["lang"]['A list of custom TCP ports to scan (22 is SSH, 135 is WMI, 62078 is iPhone sync).'] = 'Списък на потребителски TCP портове за сканиране (22 е SSH, 135 е WMI, 62078 е iPhone синхронизиране).';

$GLOBALS["lang"]['A list of custom UDP ports to scan (161 is SNMP).'] = 'Списък на потребителските UDP портове за сканиране (161 е SNMP).';

$GLOBALS["lang"]['A lower number means it will be applied before other rules.'] = 'По-нисък брой означава, че той ще се прилага преди други правила.';

$GLOBALS["lang"]['A lower number means it will be applied before other rules. The default weight is 100.'] = 'По-нисък брой означава, че той ще се прилага преди други правила. По подразбиране теглото е 100.';

$GLOBALS["lang"]['A password (stored as a hash) that enables logon when using application authentication.'] = 'Парола (задържана като хашиш), която позволява логон при използване на автентичност на приложението.';

$GLOBALS["lang"]['A routing domain or address space where the IP addresses and MAC addresses are unique.'] = 'Място за маршрутизиране или адрес, където IP адресите и MAC адресите са уникални.';

$GLOBALS["lang"]['A security zone is a administrative domain or policy domain within the Network Domain.'] = 'Зоната за сигурност е административна област или област на политиката в рамките на Мрежовия домейн.';

$GLOBALS["lang"]['A short description of the log entry.'] = 'Кратко описание на дневника.';

$GLOBALS["lang"]['A string that matches the <code>software.name</code> attribute. You can use the standard SQL wildcard of percent (%) to match one or more characters.'] = 'Струна, която съвпада с <code>software.name</code> атрибут. Можете да използвате стандартната SQL wildcard от проценти (%), за да съвпадне с един или повече символи.';

$GLOBALS["lang"]['A vulnerability affecting availability may allow attackers to disrupt services, crash systems, or cause denial-of-service (DoS) (None, Low, High).'] = 'Уязвимостта, засягаща наличността, може да позволи на нападателите да разрушат услугите, системите за разбиване или да причинят отказ от обслужване (DOS) (None, Low, High).';

$GLOBALS["lang"]['A vulnerability affecting confidentiality may allow attackers to read sensitive data, such as personal information, credentials, or proprietary business data (None, Low, High).'] = 'Уязвимостта, засягаща поверителността, може да позволи на нападателите да четат чувствителни данни, като лична информация, пълномощия или частни бизнес данни (нито една, ниска, висока).';

$GLOBALS["lang"]['A vulnerability affecting integrity may allow attackers to modify data, inject malicious code, or alter system configurations (None, Low, High).'] = 'Уязвимостта, засягаща целостта, може да позволи на нападателите да променят данните, да инжектират злонамерен код или да променят системните конфигурации (нищо, ниско, високо).';

$GLOBALS["lang"]['AD Group'] = 'Група AD';

$GLOBALS["lang"]['ADSL, HFC, ISDN, etc.'] = 'ADSL, HFC, ISDN и др.';

$GLOBALS["lang"]['AIX'] = 'AIX';

$GLOBALS["lang"]['ALL IPs'] = 'ВСИЧКИ IPs';

$GLOBALS["lang"]['API / Web Access'] = 'API / Уеб достъп';

$GLOBALS["lang"]['API Documentation'] = 'Документация API';

$GLOBALS["lang"]['API Key required.'] = 'Изисква се API ключ.';

$GLOBALS["lang"]['API Result'] = 'Резултат от API';

$GLOBALS["lang"]['About'] = 'Относно';

$GLOBALS["lang"]['Accept'] = 'Приемане';

$GLOBALS["lang"]['access_point'] = 'Точка на достъп';

$GLOBALS["lang"]['Access Point'] = 'Точка на достъп';

$GLOBALS["lang"]['access_token'] = 'Достъп до токен';

$GLOBALS["lang"]['Access Token'] = 'Достъп до токен';

$GLOBALS["lang"]['ack_by'] = 'Ack By';

$GLOBALS["lang"]['Ack By'] = 'Ack By';

$GLOBALS["lang"]['ack_date'] = 'Ack Дата';

$GLOBALS["lang"]['Ack Date'] = 'Ack Дата';

$GLOBALS["lang"]['ack_time'] = 'Ack Time';

$GLOBALS["lang"]['Ack Time'] = 'Ack Time';

$GLOBALS["lang"]['action'] = 'Действие';

$GLOBALS["lang"]['Action'] = 'Действие';

$GLOBALS["lang"]['action_audit'] = 'Одит на дейността';

$GLOBALS["lang"]['Action Audit'] = 'Одит на дейността';

$GLOBALS["lang"]['action_command'] = 'Команда за действие';

$GLOBALS["lang"]['Action Command'] = 'Команда за действие';

$GLOBALS["lang"]['action_date'] = 'Дата на действие';

$GLOBALS["lang"]['Action Date'] = 'Дата на действие';

$GLOBALS["lang"]['action_devices_assigned_to_location'] = 'Устройства за действие, предназначени за местоположение';

$GLOBALS["lang"]['Action Devices Assigned To Location'] = 'Устройства за действие, предназначени за местоположение';

$GLOBALS["lang"]['action_devices_assigned_to_org'] = 'Устройства за действие, предназначени за насочване';

$GLOBALS["lang"]['Action Devices Assigned To Org'] = 'Устройства за действие, предназначени за насочване';

$GLOBALS["lang"]['action_download'] = 'Изтегляне на действие';

$GLOBALS["lang"]['Action Download'] = 'Изтегляне на действие';

$GLOBALS["lang"]['action_uninstall'] = 'Деинсталиране на действие';

$GLOBALS["lang"]['Action Uninstall'] = 'Деинсталиране на действие';

$GLOBALS["lang"]['actioned'] = 'Действие';

$GLOBALS["lang"]['Actioned'] = 'Действие';

$GLOBALS["lang"]['actioned_by'] = 'Действие от';

$GLOBALS["lang"]['Actioned By'] = 'Действие от';

$GLOBALS["lang"]['actioned_date'] = 'Дата на действие';

$GLOBALS["lang"]['Actioned Date'] = 'Дата на действие';

$GLOBALS["lang"]['actions'] = 'Действия';

$GLOBALS["lang"]['Actions'] = 'Действия';

$GLOBALS["lang"]['Activate'] = 'Активиране';

$GLOBALS["lang"]['Activate Free License'] = 'Активиране на свободен лиценз';

$GLOBALS["lang"]['Activate Key'] = 'Активиране на ключа';

$GLOBALS["lang"]['Activate a free Enterprise license'] = 'Активиране на свободен лиценз на Enterprise';

$GLOBALS["lang"]['Active'] = 'Активно';

$GLOBALS["lang"]['Active / Active'] = 'Активно / активно';

$GLOBALS["lang"]['Active / Passive'] = 'Активен / пасивен';

$GLOBALS["lang"]['Active Directory'] = 'Активна директория';

$GLOBALS["lang"]['Active Directory Domain'] = 'Active Directory Domain';

$GLOBALS["lang"]['active_directory_ou'] = 'Active Directory Ou';

$GLOBALS["lang"]['Active Directory Ou'] = 'Active Directory Ou';

$GLOBALS["lang"]['Active Directory Server'] = 'Активен директория сървър';

$GLOBALS["lang"]['ad_domain'] = 'Ad Domain';

$GLOBALS["lang"]['Ad Domain'] = 'Ad Domain';

$GLOBALS["lang"]['ad_group'] = 'Ad Group';

$GLOBALS["lang"]['Ad Group'] = 'Ad Group';

$GLOBALS["lang"]['ad_server'] = 'Comment';

$GLOBALS["lang"]['Ad Server'] = 'Comment';

$GLOBALS["lang"]['Add'] = 'Добавяне';

$GLOBALS["lang"]['Add Credentials'] = 'Добавяне на данни';

$GLOBALS["lang"]['Add Device'] = 'Добавяне на устройство';

$GLOBALS["lang"]['Add Device to Application'] = 'Добавяне на устройство към приложение';

$GLOBALS["lang"]['Add Device to Cluster'] = 'Добавяне на устройство към куп';

$GLOBALS["lang"]['Add Exception'] = 'Добавяне на изключение';

$GLOBALS["lang"]['Add Field'] = 'Добавяне на поле';

$GLOBALS["lang"]['Add If'] = 'Добавяне';

$GLOBALS["lang"]['Add Policies from Device'] = 'Добавяне на политики от устройството';

$GLOBALS["lang"]['Add Policy'] = 'Добавяне на политика';

$GLOBALS["lang"]['Add Then'] = 'Добавяне след това';

$GLOBALS["lang"]['Add image'] = 'Добавяне на изображение';

$GLOBALS["lang"]['additional_items'] = 'Допълнителни елементи';

$GLOBALS["lang"]['Additional Items'] = 'Допълнителни елементи';

$GLOBALS["lang"]['address'] = 'Адрес';

$GLOBALS["lang"]['Address'] = 'Адрес';

$GLOBALS["lang"]['Admin'] = 'Администратор';

$GLOBALS["lang"]['admin_status'] = 'Административен статус';

$GLOBALS["lang"]['Admin Status'] = 'Административен статус';

$GLOBALS["lang"]['advanced'] = 'Допълнителни';

$GLOBALS["lang"]['Advanced'] = 'Допълнителни';

$GLOBALS["lang"]['Afghanistan'] = 'Афганистан';

$GLOBALS["lang"]['agents'] = 'Агенти';

$GLOBALS["lang"]['Agents'] = 'Агенти';

$GLOBALS["lang"]['Aggressive'] = 'Агресивен';

$GLOBALS["lang"]['Aland Islands'] = 'Аландски острови';

$GLOBALS["lang"]['Albania'] = 'Албания';

$GLOBALS["lang"]['alert_style'] = 'Стил на алармата';

$GLOBALS["lang"]['Alert Style'] = 'Стил на алармата';

$GLOBALS["lang"]['Algeria'] = 'Алжир';

$GLOBALS["lang"]['algorithm'] = 'Алгоритъм';

$GLOBALS["lang"]['Algorithm'] = 'Алгоритъм';

$GLOBALS["lang"]['alias'] = 'Име';

$GLOBALS["lang"]['Alias'] = 'Име';

$GLOBALS["lang"]['All'] = 'Всички';

$GLOBALS["lang"]['All IPs'] = 'Всички IP-та';

$GLOBALS["lang"]['All Policies'] = 'Всички политики';

$GLOBALS["lang"]['All Queued Items'] = 'Всички въпроси';

$GLOBALS["lang"]['Amazon AWS Fields'] = 'Amazon AWS Полета';

$GLOBALS["lang"]['American Samoa'] = 'Американска Самоа';

$GLOBALS["lang"]['An array of <code>benchmarks.id</code>.'] = 'Един масив от <code>benchmarks.id</code>.';

$GLOBALS["lang"]['An array of <code>devices.id</code>.'] = 'Един масив от <code>devices.id</code>.';

$GLOBALS["lang"]['An array of object representing external links to more information.'] = 'масив от обекти, представляващи външни връзки към повече информация.';

$GLOBALS["lang"]['An encrypted JSON document containing the required attributes depending on the <code>credentials.type</code>.'] = 'Кодиран JSON документ, съдържащ необходимите атрибути в зависимост от <code>credentials.type</code>.';

$GLOBALS["lang"]['An indication of the level of service required by this site.'] = 'Посочване на нивото на обслужване, изисквано от този сайт.';

$GLOBALS["lang"]['An internal field that indicates if the discovery has completed.'] = 'Вътрешно поле, което показва дали откритието е приключило.';

$GLOBALS["lang"]['An optional GeoCode'] = 'Опционален геокод';

$GLOBALS["lang"]['An optional password to use sudo.'] = 'Опционална парола за използване на судо.';

$GLOBALS["lang"]['Andorra'] = 'Андора';

$GLOBALS["lang"]['Angola'] = 'Ангола';

$GLOBALS["lang"]['Anguilla'] = 'Ангуила';

$GLOBALS["lang"]['Antarctica'] = 'Антарктика';

$GLOBALS["lang"]['AntiVirus'] = 'Антивирус';

$GLOBALS["lang"]['Antigua and Barbuda'] = 'Антигуа и Барбуда';

$GLOBALS["lang"]['Antivirus'] = 'Антивирус';

$GLOBALS["lang"]['Any TCP ports (comma seperated, no spaces) you wish to exclude from this discovery. Only available when using Nmap 7+.'] = 'Всички TCP портове (comma seperated, no spaces) искате да изключите от това откритие. Предлага се само при използване на Nmap 7+.';

$GLOBALS["lang"]['Any UDP ports (comma seperated, no spaces) you wish to exclude from this discovery. Only available when using Nmap 7+.'] = 'Всички UDP портове (comma seperated, no spaces) искате да изключите от това откритие. Предлага се само при използване на Nmap 7+.';

$GLOBALS["lang"]['Any additional documentation you need.'] = 'Всякаква допълнителна документация.';

$GLOBALS["lang"]['Any additional notes you care to make.'] = 'Всякакви допълнителни бележки, които искате да направите.';

$GLOBALS["lang"]['Any devices will be assigned to this Org when they run their audit script (if set). Links to <code>orgs.id</code>.'] = 'Всички устройства ще бъдат прикрепени към тази Орг, когато те стартират одитния си скрипт (ако е зададен). Връзки към <code>orgs.id</code>.';

$GLOBALS["lang"]['Any discovered devices will be assigned to this Location if set. Links to <code>locations.id</code>.'] = 'Всички открити устройства ще бъдат прикрепени към това местоположение, ако са поставени. Връзки към <code>locations.id</code>.';

$GLOBALS["lang"]['Any discovered devices will be assigned to this Location when they run their audit script (if set). Links to <code>locations.id</code>.'] = 'Всички открити устройства ще бъдат прикрепени към това място, когато те стартират одитния си скрипт (ако е зададен). Връзки към <code>locations.id</code>.';

$GLOBALS["lang"]['Any discovered devices will be assigned to this Org if set. If not set, they are assigned to the <code>org_id</code> of this discovery. Links to <code>orgs.id</code>.'] = 'Всички открити устройства ще бъдат прикрепени към този Орг, ако са поставени. Ако не е зададен, те са определени за <code>org_id</code> на това откритие. Връзки към <code>orgs.id</code>.';

$GLOBALS["lang"]['Any required filter. NOTE: When type = traffic, this represents the font-awesome icon.'] = 'Всеки необходим филтър. ЗАБЕЛЕЖКА: Когато тип = трафик, това представлява иконата шрифт-страхотен.';

$GLOBALS["lang"]['Any specific TCP ports you wish tested (comma seperated, no spaces).'] = 'Всички специфични портове TCP искате тествани (comma seperated, no spaces).';

$GLOBALS["lang"]['Any specific UDP ports you wish tested (comma seperated, no spaces).'] = 'Всички специфични UDP портове, които желаете тествани (comma seperated, no spaces).';

$GLOBALS["lang"]['Application'] = 'Прилагане';

$GLOBALS["lang"]['application_id'] = 'Идентификационен код на заявлението';

$GLOBALS["lang"]['Application ID'] = 'Идентификационен код на заявлението';

$GLOBALS["lang"]['Application Licenses'] = 'Лицензии за кандидатстване';

$GLOBALS["lang"]['Application, Operating System or Hardware.'] = 'Приложение, операционна система или хардуер.';

$GLOBALS["lang"]['applications'] = 'Приложения';

$GLOBALS["lang"]['Applications'] = 'Приложения';

$GLOBALS["lang"]['applied'] = 'Прилагано';

$GLOBALS["lang"]['Applied'] = 'Прилагано';

$GLOBALS["lang"]['Approved'] = 'Одобрено';

$GLOBALS["lang"]['April'] = 'Април';

$GLOBALS["lang"]['architecture'] = 'Архитектура';

$GLOBALS["lang"]['Architecture'] = 'Архитектура';

$GLOBALS["lang"]['Are you sure you want to delete this input item?'] = 'Сигурни ли сте, че искате да изтриете този елемент?';

$GLOBALS["lang"]['Are you sure you want to delete this output item?'] = 'Сигурни ли сте, че искате да изтриете този изходен елемент?';

$GLOBALS["lang"]['Are you sure? This will remove all queue entries and prevent the remaining IPs from being discovered.'] = 'Сигурен ли си? Това ще премахне всички редове и ще предотврати откриването на останалите IP-та.';

$GLOBALS["lang"]['Are you sure? This will reset the queue processing count and could cause load on the server.'] = 'Сигурен ли си? Това ще рестартира броя на опашката за обработка и може да причини натоварване на сървъра.';

$GLOBALS["lang"]['area'] = 'Зона';

$GLOBALS["lang"]['Area'] = 'Зона';

$GLOBALS["lang"]['Argentina'] = 'Аржентина';

$GLOBALS["lang"]['Armenia'] = 'Армения';

$GLOBALS["lang"]['arp'] = 'Arp';

$GLOBALS["lang"]['Arp'] = 'Arp';

$GLOBALS["lang"]['Aruba'] = 'Аруба';

$GLOBALS["lang"]['As per the attributes for device environments. Production, Training, et al.'] = 'Според атрибутите на средата на устройството. Производство, обучение и др.';

$GLOBALS["lang"]['As you have Collectors registered, please choose where to execute this discovery.'] = 'Както сте регистрирали Collectors, моля изберете къде да извършите това откритие.';

$GLOBALS["lang"]['Ask me later'] = 'Попитай ме по-късно.';

$GLOBALS["lang"]['Ask the Community for help or contribute answers for others.'] = 'Помолете Общността за помощ или даване на отговори за другите.';

$GLOBALS["lang"]['aspect_ratio'] = 'Аспектно съотношение';

$GLOBALS["lang"]['Aspect Ratio'] = 'Аспектно съотношение';

$GLOBALS["lang"]['Asset ID'] = 'Идентификационен код на актива';

$GLOBALS["lang"]['asset_ident'] = 'Идентификация на актива';

$GLOBALS["lang"]['Asset Ident'] = 'Идентификация на актива';

$GLOBALS["lang"]['asset_number'] = 'Номер на актива';

$GLOBALS["lang"]['Asset Number'] = 'Номер на актива';

$GLOBALS["lang"]['asset_tag'] = 'Етикет на актив';

$GLOBALS["lang"]['Asset Tag'] = 'Етикет на актив';

$GLOBALS["lang"]['Assign Device to Application'] = 'Въведете устройство в приложението';

$GLOBALS["lang"]['Assign Device to Cluster'] = 'Задаване на устройство в куп';

$GLOBALS["lang"]['Assign Device to Location'] = 'Въведете устройство за местоположение';

$GLOBALS["lang"]['Assign Device to Organisation'] = 'Задаване на устройство в организацията';

$GLOBALS["lang"]['Assign Devices to Location'] = 'Задаване на устройства за местоположение';

$GLOBALS["lang"]['Assign Devices to Organisation'] = 'Задаване на устройства към организацията';

$GLOBALS["lang"]['Assign an Operator'] = 'Назначете оператор';

$GLOBALS["lang"]['Assigned To'] = 'Назначен';

$GLOBALS["lang"]['At present we can use netstat_ports, software and users.'] = 'В момента можем да използваме netstat_ports, софтуер и потребители.';

$GLOBALS["lang"]['attached_device_id'] = 'Идентификационен код на прикаченото устройство';

$GLOBALS["lang"]['Attached Device ID'] = 'Идентификационен код на прикаченото устройство';

$GLOBALS["lang"]['attached_to'] = 'Прикрепен към';

$GLOBALS["lang"]['Attached To'] = 'Прикрепен към';

$GLOBALS["lang"]['attachment'] = 'Прикрепяне';

$GLOBALS["lang"]['Attachment'] = 'Прикрепяне';

$GLOBALS["lang"]['attachments'] = 'Приложения';

$GLOBALS["lang"]['Attachments'] = 'Приложения';

$GLOBALS["lang"]['attack_complexity'] = 'Атакуваща сложност';

$GLOBALS["lang"]['Attack Complexity'] = 'Атакуваща сложност';

$GLOBALS["lang"]['attack_requirements'] = 'Изисквания за атака';

$GLOBALS["lang"]['Attack Requirements'] = 'Изисквания за атака';

$GLOBALS["lang"]['attack_vector'] = 'Атакуващ вектор';

$GLOBALS["lang"]['Attack Vector'] = 'Атакуващ вектор';

$GLOBALS["lang"]['Attribute'] = 'Атрибут';

$GLOBALS["lang"]['attributes'] = 'Атрибути';

$GLOBALS["lang"]['Attributes'] = 'Атрибути';

$GLOBALS["lang"]['Audit'] = 'Одит';

$GLOBALS["lang"]['Audit AIX'] = 'Одит AIX';

$GLOBALS["lang"]['Audit ESXi'] = 'Одит ESXi';

$GLOBALS["lang"]['Audit Linux'] = 'Одит Линукс';

$GLOBALS["lang"]['audit_log'] = 'Одитен дневник';

$GLOBALS["lang"]['Audit Log'] = 'Одитен дневник';

$GLOBALS["lang"]['Audit My PC'] = 'Проверка на компютъра ми';

$GLOBALS["lang"]['Audit OSX'] = 'Одитен OSX';

$GLOBALS["lang"]['Audit Result Input'] = 'Вход за резултатите от одита';

$GLOBALS["lang"]['Audit Status'] = 'Статут на одит';

$GLOBALS["lang"]['Audit Windows'] = 'Прозорци за одит';

$GLOBALS["lang"]['Audit the Device'] = 'Проверка на устройството';

$GLOBALS["lang"]['Audits'] = 'Одити';

$GLOBALS["lang"]['August'] = 'Август';

$GLOBALS["lang"]['Australia'] = 'Австралия';

$GLOBALS["lang"]['Austria'] = 'Австрия';

$GLOBALS["lang"]['Auth'] = 'Auth';

$GLOBALS["lang"]['auth'] = 'Auth';

$GLOBALS["lang"]['Authentication Passphrase'] = 'Парола за удостоверяване на автентичността';

$GLOBALS["lang"]['authority_key_ident'] = 'Идентификация на главния ключ';

$GLOBALS["lang"]['Authority Key Ident'] = 'Идентификация на главния ключ';

$GLOBALS["lang"]['Auto'] = 'Авто';

$GLOBALS["lang"]['auto_renew'] = 'Автоматично обновяване';

$GLOBALS["lang"]['Auto Renew'] = 'Автоматично обновяване';

$GLOBALS["lang"]['Auto populated by the Open-AudIT Server.'] = 'Автоматично населено от Open-AudIT сървър.';

$GLOBALS["lang"]['AutoRenew'] = 'AutoRenew';

$GLOBALS["lang"]['automatable'] = 'Автоматична';

$GLOBALS["lang"]['Automatable'] = 'Автоматична';

$GLOBALS["lang"]['Automatically populated based on the Collectors OS.'] = 'Автоматично населен въз основа на Collectors OS.';

$GLOBALS["lang"]['availability'] = 'Наличност';

$GLOBALS["lang"]['Availability'] = 'Наличност';

$GLOBALS["lang"]['Azerbaijan'] = 'Азербайджан';

$GLOBALS["lang"]['BTU Max'] = 'BTU Max';

$GLOBALS["lang"]['BTU Total'] = 'BTU Total';

$GLOBALS["lang"]['Backup'] = 'Подкрепление';

$GLOBALS["lang"]['Bahamas the'] = 'Бахамите';

$GLOBALS["lang"]['Bahrain'] = 'Бахрейн';

$GLOBALS["lang"]['Bangladesh'] = 'Бангладеш';

$GLOBALS["lang"]['bank'] = 'Банка';

$GLOBALS["lang"]['Bank'] = 'Банка';

$GLOBALS["lang"]['Banned'] = 'Забранено';

$GLOBALS["lang"]['bar_code'] = 'Код на бара';

$GLOBALS["lang"]['Bar Code'] = 'Код на бара';

$GLOBALS["lang"]['Barbados'] = 'Барбадос';

$GLOBALS["lang"]['Base DN'] = 'База DN';

$GLOBALS["lang"]['base_score'] = 'Базов резултат';

$GLOBALS["lang"]['Base Score'] = 'Базов резултат';

$GLOBALS["lang"]['base_severity'] = 'Базова тежест';

$GLOBALS["lang"]['Base Severity'] = 'Базова тежест';

$GLOBALS["lang"]['based_on'] = 'Въз основа на';

$GLOBALS["lang"]['Based On'] = 'Въз основа на';

$GLOBALS["lang"]['baseline'] = 'Изходна стойност';

$GLOBALS["lang"]['Baseline'] = 'Изходна стойност';

$GLOBALS["lang"]['baseline_id'] = 'Изходен идентификационен код';

$GLOBALS["lang"]['Baseline ID'] = 'Изходен идентификационен код';

$GLOBALS["lang"]['baselines'] = 'Изходи';

$GLOBALS["lang"]['Baselines'] = 'Изходи';

$GLOBALS["lang"]['baselines_policies'] = 'Основни политики';

$GLOBALS["lang"]['Baselines Policies'] = 'Основни политики';

$GLOBALS["lang"]['Baselines Policy'] = 'Политика на база';

$GLOBALS["lang"]['Baselines Policy Details'] = 'Данни за основната политика';

$GLOBALS["lang"]['baselines_results'] = 'Изходни резултати';

$GLOBALS["lang"]['Baselines Results'] = 'Изходни резултати';

$GLOBALS["lang"]['Basic'] = 'Основни';

$GLOBALS["lang"]['Belarus'] = 'Беларус';

$GLOBALS["lang"]['Belgium'] = 'Белгия';

$GLOBALS["lang"]['Belize'] = 'Белиз';

$GLOBALS["lang"]['Benchmark'] = 'Показател';

$GLOBALS["lang"]['benchmark_id'] = 'Идентификационен код на показателя';

$GLOBALS["lang"]['Benchmark ID'] = 'Идентификационен код на показателя';

$GLOBALS["lang"]['benchmarks'] = 'Показатели';

$GLOBALS["lang"]['Benchmarks'] = 'Показатели';

$GLOBALS["lang"]['benchmarks_exceptions'] = 'Изключения от показателите';

$GLOBALS["lang"]['Benchmarks Exceptions'] = 'Изключения от показателите';

$GLOBALS["lang"]['benchmarks_log'] = 'Дневник на показателите';

$GLOBALS["lang"]['Benchmarks Log'] = 'Дневник на показателите';

$GLOBALS["lang"]['benchmarks_policies'] = 'Показатели Политики';

$GLOBALS["lang"]['Benchmarks Policies'] = 'Показатели Политики';

$GLOBALS["lang"]['benchmarks_result'] = 'Резултат от показателите';

$GLOBALS["lang"]['Benchmarks Result'] = 'Резултат от показателите';

$GLOBALS["lang"]['Benin'] = 'Бенин';

$GLOBALS["lang"]['Bermuda'] = 'Бермуда';

$GLOBALS["lang"]['best_practises'] = 'Най-добри тренировки';

$GLOBALS["lang"]['Best Practises'] = 'Най-добри тренировки';

$GLOBALS["lang"]['Bhutan'] = 'Бутан';

$GLOBALS["lang"]['bios'] = 'Биопродукти';

$GLOBALS["lang"]['Bios'] = 'Биопродукти';

$GLOBALS["lang"]['body'] = 'Тяло';

$GLOBALS["lang"]['Body'] = 'Тяло';

$GLOBALS["lang"]['Bolivia'] = 'Боливия';

$GLOBALS["lang"]['Boolean'] = 'Булев';

$GLOBALS["lang"]['Boolean 1/0'] = 'Булева 1/10';

$GLOBALS["lang"]['Boolean y/n'] = 'Булева г/н';

$GLOBALS["lang"]['boot_device'] = 'Бутон';

$GLOBALS["lang"]['Boot Device'] = 'Бутон';

$GLOBALS["lang"]['bootable'] = 'Подложка';

$GLOBALS["lang"]['Bootable'] = 'Подложка';

$GLOBALS["lang"]['Bosnia and Herzegovina'] = 'Босна и Херцеговина';

$GLOBALS["lang"]['Botswana'] = 'Ботсуана';

$GLOBALS["lang"]['Bouvet Island (Bouvetoya)'] = 'Остров Бувет (Буветоя)';

$GLOBALS["lang"]['Brazil'] = 'Бразилия';

$GLOBALS["lang"]['Brazilian Portuguese'] = 'Бразилски португалскиName';

$GLOBALS["lang"]['British Indian Ocean Territory (Chagos Archipelago)'] = 'Британска територия на Индийския океан (Chagos Archipelago)';

$GLOBALS["lang"]['British Virgin Islands'] = 'Британски Вирджински острови';

$GLOBALS["lang"]['Brunei Darussalam'] = 'Бруней Даруссалам';

$GLOBALS["lang"]['btu_max'] = 'Btu Max';

$GLOBALS["lang"]['Btu Max'] = 'Btu Max';

$GLOBALS["lang"]['btu_total'] = 'Btu Total';

$GLOBALS["lang"]['Btu Total'] = 'Btu Total';

$GLOBALS["lang"]['build_number'] = 'Брой сгради';

$GLOBALS["lang"]['Build Number'] = 'Брой сгради';

$GLOBALS["lang"]['build_number_full'] = 'Изграждане на пълен брой';

$GLOBALS["lang"]['Build Number Full'] = 'Изграждане на пълен брой';

$GLOBALS["lang"]['Building'] = 'Сграда';

$GLOBALS["lang"]['Bulgaria'] = 'България';

$GLOBALS["lang"]['Bulk Edit'] = 'Редактиране на куп';

$GLOBALS["lang"]['Bulk Editing Device Attributes'] = 'Атрибути на устройство за наливно редактиране';

$GLOBALS["lang"]['Burkina Faso'] = 'Буркина Фасо';

$GLOBALS["lang"]['Burundi'] = 'Бурунди';

$GLOBALS["lang"]['business_requirements'] = 'Бизнес изисквания';

$GLOBALS["lang"]['Business Requirements'] = 'Бизнес изисквания';

$GLOBALS["lang"]['Buy'] = 'Купи';

$GLOBALS["lang"]['Buy More'] = 'Купи Още';

$GLOBALS["lang"]['Buy More Licenses'] = 'Купи повече лицензи';

$GLOBALS["lang"]['By'] = 'От';

$GLOBALS["lang"]['CIDR'] = 'CIDR';

$GLOBALS["lang"]['CIDR Mask'] = 'CIDR Маска';

$GLOBALS["lang"]['cli_config'] = 'КЛИ Конфиг';

$GLOBALS["lang"]['CLI Config'] = 'КЛИ Конфиг';

$GLOBALS["lang"]['CPU'] = 'CPU';

$GLOBALS["lang"]['CPUs'] = 'Преносими процесори';

$GLOBALS["lang"]['CSV'] = 'CSV';

$GLOBALS["lang"]['CVE'] = 'CVE';

$GLOBALS["lang"]['Calculated from discovery.'] = 'Изчислено от откритието.';

$GLOBALS["lang"]['Calculated total number of valid IP addresses for this network.'] = 'Изчислен общ брой валидни IP адреси за тази мрежа.';

$GLOBALS["lang"]['Calculated upon completion, the time taken to execute this item.'] = 'Изчислено след завършване, времето, необходимо за изпълнение на този елемент.';

$GLOBALS["lang"]['Calculated when integration is run and contains a JSON representation of the devices in this integration. Each links to <code>devices.id</code>.'] = 'Изчислено при стартиране на интеграцията и съдържа JSON представяне на устройствата в тази интеграция. Всяка връзка към <code>devices.id</code>.';

$GLOBALS["lang"]['Calculated when integration is run and contains a JSON representation of the locations in this integration. Each links to <code>locations.id</code>.'] = 'Изчислено, когато интеграцията се стартира и съдържа JSON представяне на местата в тази интеграция. Всяка връзка към <code>locations.id</code>.';

$GLOBALS["lang"]['Calculated when integration is run and contains the number of devices selected from Open-AudIT.'] = 'Изчислено при стартиране на интеграцията и съдържа броя на устройствата, избрани от Open-AudIT.';

$GLOBALS["lang"]['Calculated when integration is run and contains the number of devices selected the external system.'] = 'Изчислено при стартиране на интеграцията и съдържа броя на устройствата, избрани от външната система.';

$GLOBALS["lang"]['Calculated when integration is run and contains the number of devices to be updated in the external system.'] = 'Изчислено при стартиране на интеграцията и съдържа броя на устройствата, които трябва да бъдат актуализирани във външната система.';

$GLOBALS["lang"]['Calculated when integration is run and contains the number of devices updated in Open-AudIT.'] = 'Изчислено при интеграция и съдържа броя на устройствата, актуализирани в Open-AudIT.';

$GLOBALS["lang"]['Cambodia'] = 'Камбоджа';

$GLOBALS["lang"]['Cameroon'] = 'Камерун';

$GLOBALS["lang"]['Campus Area Network'] = 'Мрежа на кампуса';

$GLOBALS["lang"]['Can be  <code>active</code>, <code>passive</code> or blank.'] = 'Може би. <code>active</code>, <code>passive</code> или празен.';

$GLOBALS["lang"]['Can be <code>application</code>, <code>compute</code>, <code>database</code>, <code>storage</code>, <code>virtualisation</code>, <code>web</code>, <code>other</code> or blank.'] = 'Може би. <code>application</code>, <code>compute</code>, <code>database</code>, <code>storage</code>, <code>virtualisation</code>, <code>web</code>, <code>other</code> или празен.';

$GLOBALS["lang"]['Can be <code>auto</code>, <code>fixed</code>, <code>other</code> or blank.'] = 'Може би. <code>auto</code>, <code>fixed</code>, <code>other</code> или празен.';

$GLOBALS["lang"]['Can be <code>high availability</code>, <code>load balancing</code>, <code>performance</code>, <code>storage</code>, <code>other</code> or blank.'] = 'Може би. <code>high availability</code>, <code>load balancing</code>, <code>performance</code>, <code>storage</code>, <code>other</code> или празен.';

$GLOBALS["lang"]['Can be <code>line</code>, <code>pie</code> or <code>traffic</code>.'] = 'Може би. <code>line</code>, <code>pie</code> или <code>traffic</code>.';

$GLOBALS["lang"]['Can be <code>user</code> or <code>collector</code>.'] = 'Може би. <code>user</code> или <code>collector</code>.';

$GLOBALS["lang"]['Can be set by discovery or user.'] = 'Може да се зададе чрез откритие или потребител.';

$GLOBALS["lang"]['Can be set by discovery or user. Uses the ID from the locations table.'] = 'Може да се зададе чрез откритие или потребител. Използва личната карта от таблицата с местата.';

$GLOBALS["lang"]['Can the user edit this item.'] = 'Може ли потребителят да редактира този елемент.';

$GLOBALS["lang"]['Canada'] = 'Канада';

$GLOBALS["lang"]['Cancel'] = 'Отмяна';

$GLOBALS["lang"]['capabilities'] = 'Възможности';

$GLOBALS["lang"]['Capabilities'] = 'Възможности';

$GLOBALS["lang"]['Capacity'] = 'Капацитет';

$GLOBALS["lang"]['Cape Verde'] = 'Кабо Верде';

$GLOBALS["lang"]['Capitalise'] = 'Капитализиране';

$GLOBALS["lang"]['caption'] = 'Капитан';

$GLOBALS["lang"]['Caption'] = 'Капитан';

$GLOBALS["lang"]['Cayman Islands'] = 'Кайманови острови';

$GLOBALS["lang"]['Cellular Details'] = 'Клетъчни данни';

$GLOBALS["lang"]['Central African Republic'] = 'Централноафриканска република';

$GLOBALS["lang"]['certificate'] = 'Сертификат';

$GLOBALS["lang"]['Certificate'] = 'Сертификат';

$GLOBALS["lang"]['certificate_file'] = 'Файл със сертификат';

$GLOBALS["lang"]['Certificate File'] = 'Файл със сертификат';

$GLOBALS["lang"]['certificate_name'] = 'Наименование на сертификата';

$GLOBALS["lang"]['Certificate Name'] = 'Наименование на сертификата';

$GLOBALS["lang"]['certificates'] = 'Сертификати';

$GLOBALS["lang"]['Certificates'] = 'Сертификати';

$GLOBALS["lang"]['Chad'] = 'Чад';

$GLOBALS["lang"]['change_id'] = 'Промяна на ID';

$GLOBALS["lang"]['Change ID'] = 'Промяна на ID';

$GLOBALS["lang"]['change_log'] = 'Промяна на дневника';

$GLOBALS["lang"]['Change Log'] = 'Промяна на дневника';

$GLOBALS["lang"]['change_type'] = 'Промяна на типа';

$GLOBALS["lang"]['Change Type'] = 'Промяна на типа';

$GLOBALS["lang"]['check_minutes'] = 'Проверка на протокола';

$GLOBALS["lang"]['Check Minutes'] = 'Проверка на протокола';

$GLOBALS["lang"]['Check for SSH on these ports'] = 'Проверете за SSH на тези пристанища';

$GLOBALS["lang"]['Check this port for any SSH service.'] = 'Проверете този порт за SSH услуги.';

$GLOBALS["lang"]['Chile'] = 'Чили';

$GLOBALS["lang"]['China'] = 'Китай';

$GLOBALS["lang"]['Choose'] = 'Избор';

$GLOBALS["lang"]['Choose (select OS first)'] = 'Изберете (изберете OS първо)';

$GLOBALS["lang"]['Choose a Device'] = 'Избор на устройство';

$GLOBALS["lang"]['Choose a Table'] = 'Избор на таблица';

$GLOBALS["lang"]['Christmas Island'] = 'Остров Коледа';

$GLOBALS["lang"]['cidr'] = 'Cidr';

$GLOBALS["lang"]['Cidr'] = 'Cidr';

$GLOBALS["lang"]['circuit_count'] = 'Брояч';

$GLOBALS["lang"]['Circuit Count'] = 'Брояч';

$GLOBALS["lang"]['circuit_status'] = 'Състояние на веригата';

$GLOBALS["lang"]['Circuit Status'] = 'Състояние на веригата';

$GLOBALS["lang"]['city'] = 'Град';

$GLOBALS["lang"]['City'] = 'Град';

$GLOBALS["lang"]['class'] = 'Клас';

$GLOBALS["lang"]['Class'] = 'Клас';

$GLOBALS["lang"]['class_text'] = 'Текст на класа';

$GLOBALS["lang"]['Class Text'] = 'Текст на класа';

$GLOBALS["lang"]['Click the Delete button to remove the example devices from Open-AudIT.<br>This will remove the below devices from the database. '] = 'Щракнете върху бутона Изтриване, за да премахнете примерните устройства от Open-AudIT.<br/>Това ще премахне по-долу устройства от базата данни. ';

$GLOBALS["lang"]['Click the Import button below to populate Open-AudIT with example device data.'] = 'Щракнете върху бутона за импортиране по-долу, за да населявате Open-AudIT с примерни данни за устройство.';

$GLOBALS["lang"]['Client ID'] = 'Идентификация на клиента';

$GLOBALS["lang"]['client_ident'] = 'Идентификация на клиента';

$GLOBALS["lang"]['Client Ident'] = 'Идентификация на клиента';

$GLOBALS["lang"]['client_secret'] = 'Клиентска тайна';

$GLOBALS["lang"]['Client Secret'] = 'Клиентска тайна';

$GLOBALS["lang"]['client_site_name'] = 'Име на сайта на клиента';

$GLOBALS["lang"]['Client Site Name'] = 'Име на сайта на клиента';

$GLOBALS["lang"]['Close'] = 'Затваряне';

$GLOBALS["lang"]['Cloud'] = 'Облак';

$GLOBALS["lang"]['Cloud Details'] = 'Данни за облака';

$GLOBALS["lang"]['Cloud Discovery'] = 'Cloud Discovery';

$GLOBALS["lang"]['cloud_id'] = 'Идентификационен код на облака';

$GLOBALS["lang"]['Cloud ID'] = 'Идентификационен код на облака';

$GLOBALS["lang"]['cloud_log'] = 'Дневник на облака';

$GLOBALS["lang"]['Cloud Log'] = 'Дневник на облака';

$GLOBALS["lang"]['cloud_name'] = 'Име на облака';

$GLOBALS["lang"]['Cloud Name'] = 'Име на облака';

$GLOBALS["lang"]['Cloud Network'] = 'Облачна мрежа';

$GLOBALS["lang"]['clouds'] = 'Облаци';

$GLOBALS["lang"]['Clouds'] = 'Облаци';

$GLOBALS["lang"]['cluster'] = 'Клъстер';

$GLOBALS["lang"]['Cluster'] = 'Клъстер';

$GLOBALS["lang"]['cluster_id'] = 'Идентификация на купа';

$GLOBALS["lang"]['Cluster ID'] = 'Идентификация на купа';

$GLOBALS["lang"]['cluster_name'] = 'Име на куп';

$GLOBALS["lang"]['Cluster Name'] = 'Име на куп';

$GLOBALS["lang"]['cluster_type'] = 'Тип клъстер';

$GLOBALS["lang"]['Cluster Type'] = 'Тип клъстер';

$GLOBALS["lang"]['clusters'] = 'Клъстери';

$GLOBALS["lang"]['Clusters'] = 'Клъстери';

$GLOBALS["lang"]['Cocos (Keeling) Islands'] = 'Кокосови острови';

$GLOBALS["lang"]['Collector'] = 'Колекционер';

$GLOBALS["lang"]['Collector (UUID)'] = 'Колекционер (UUID)';

$GLOBALS["lang"]['Collector Name'] = 'Име на колектора';

$GLOBALS["lang"]['collector_uuid'] = 'Колекционер Uuid';

$GLOBALS["lang"]['Collector Uuid'] = 'Колекционер Uuid';

$GLOBALS["lang"]['collectors'] = 'Колекционери';

$GLOBALS["lang"]['Collectors'] = 'Колекционери';

$GLOBALS["lang"]['Colombia'] = 'Колумбия';

$GLOBALS["lang"]['color'] = 'Цвят';

$GLOBALS["lang"]['Color'] = 'Цвят';

$GLOBALS["lang"]['column'] = 'Колона';

$GLOBALS["lang"]['Column'] = 'Колона';

$GLOBALS["lang"]['Columns'] = 'Колони';

$GLOBALS["lang"]['command'] = 'Команда';

$GLOBALS["lang"]['Command'] = 'Команда';

$GLOBALS["lang"]['command_options'] = 'Настройки на командата';

$GLOBALS["lang"]['Command Options'] = 'Настройки на командата';

$GLOBALS["lang"]['command_output'] = 'Изход на командата';

$GLOBALS["lang"]['Command Output'] = 'Изход на командата';

$GLOBALS["lang"]['command_status'] = 'Състояние на командата';

$GLOBALS["lang"]['Command Status'] = 'Състояние на командата';

$GLOBALS["lang"]['command_time_to_execute'] = 'Време за изпълнение на командата';

$GLOBALS["lang"]['Command Time To Execute'] = 'Време за изпълнение на командата';

$GLOBALS["lang"]['comment'] = 'Коментар';

$GLOBALS["lang"]['Comment'] = 'Коментар';

$GLOBALS["lang"]['comments'] = 'Коментари';

$GLOBALS["lang"]['Comments'] = 'Коментари';

$GLOBALS["lang"]['commercial'] = 'Търговски';

$GLOBALS["lang"]['Commercial'] = 'Търговски';

$GLOBALS["lang"]['common_name'] = 'ПРИЛОЖЕНИЕ';

$GLOBALS["lang"]['Common Name'] = 'ПРИЛОЖЕНИЕ';

$GLOBALS["lang"]['Commonly referred to as the clientId.'] = 'Нарича се клиентска карта.';

$GLOBALS["lang"]['Commonly referred to as the clientSecret.'] = 'Често наричан клиент-секрет.';

$GLOBALS["lang"]['Community'] = 'Общност';

$GLOBALS["lang"]['Community Questions'] = 'Въпроси на Общността';

$GLOBALS["lang"]['Community String'] = 'Струна на Общността';

$GLOBALS["lang"]['Comoros the'] = 'Коморски острови';

$GLOBALS["lang"]['Compact'] = 'Компактен';

$GLOBALS["lang"]['Company'] = 'Дружество';

$GLOBALS["lang"]['Complexity of the attack (Low or High).'] = 'Сложност на атаката (ниско или високо).';

$GLOBALS["lang"]['Component Table'] = 'Таблица на компонентите';

$GLOBALS["lang"]['Components (All Devices)'] = 'Компоненти (всички устройства)';

$GLOBALS["lang"]['Compute'] = 'Изчисляване';

$GLOBALS["lang"]['Condition'] = 'Състояние';

$GLOBALS["lang"]['Config'] = 'Конфиг';

$GLOBALS["lang"]['Config Default, currently '] = 'Конфигуриране по подразбиране, в момента ';

$GLOBALS["lang"]['config_file'] = 'Config файл';

$GLOBALS["lang"]['Config File'] = 'Config файл';

$GLOBALS["lang"]['config_manager_error_code'] = 'Код за грешка на мениджъра';

$GLOBALS["lang"]['Config Manager Error Code'] = 'Код за грешка на мениджъра';

$GLOBALS["lang"]['configuration'] = 'Конфигурация';

$GLOBALS["lang"]['Configuration'] = 'Конфигурация';

$GLOBALS["lang"]['Configure'] = 'Настройване';

$GLOBALS["lang"]['Congo'] = 'Конго';

$GLOBALS["lang"]['Congo the'] = 'Конго';

$GLOBALS["lang"]['Connected To'] = 'Връзка с';

$GLOBALS["lang"]['connection'] = 'Връзка';

$GLOBALS["lang"]['Connection'] = 'Връзка';

$GLOBALS["lang"]['Connection Options'] = 'Настройки на връзката';

$GLOBALS["lang"]['connection_status'] = 'Състояние на връзката';

$GLOBALS["lang"]['Connection Status'] = 'Състояние на връзката';

$GLOBALS["lang"]['connections'] = 'Връзки';

$GLOBALS["lang"]['Connections'] = 'Връзки';

$GLOBALS["lang"]['Consider filtered Ports Open'] = 'Помислете филтрирани Отваряне на портове';

$GLOBALS["lang"]['Consider open|filtered Ports Open'] = 'По-скоро отворен Отваряне на портове';

$GLOBALS["lang"]['contact'] = 'Контакт';

$GLOBALS["lang"]['Contact'] = 'Контакт';

$GLOBALS["lang"]['contact_name'] = 'Име за контакт';

$GLOBALS["lang"]['Contact Name'] = 'Име за контакт';

$GLOBALS["lang"]['contained_in'] = 'Затворено';

$GLOBALS["lang"]['Contained In'] = 'Затворено';

$GLOBALS["lang"]['Contains a JSON object details the associated widgets and their positions.'] = 'Съдържа JSON обект детайли свързаните джаджи и техните позиции.';

$GLOBALS["lang"]['Contains the fields that determine if we should use ssh, snmp and wmi discovery options. A JSON object.'] = 'Съдържа полетата, които определят дали трябва да използваме sh, snmp и Wmi възможности за откриване. Обект на JSON.';

$GLOBALS["lang"]['Context Engine ID'] = 'Идентификационен код на двигателя в контекста';

$GLOBALS["lang"]['Context Name'] = 'Наименование на контекста';

$GLOBALS["lang"]['contractual_obligations'] = 'Договорни задължения';

$GLOBALS["lang"]['Contractual Obligations'] = 'Договорни задължения';

$GLOBALS["lang"]['Cook Islands'] = 'Острови Кук';

$GLOBALS["lang"]['Copy and paste an audit result'] = 'Копиране и поставяне на одитен резултат';

$GLOBALS["lang"]['Copy and paste the below to the forums, another instance of Open-AudIT or anywhere else you need to provide this item.'] = 'Копирайте и поставете по-долу на форумите, друг случай на Open-AudIT или някъде другаде трябва да предоставите този елемент.';

$GLOBALS["lang"]['core_count'] = 'Основен брой';

$GLOBALS["lang"]['Core Count'] = 'Основен брой';

$GLOBALS["lang"]['Cores'] = 'Ядра';

$GLOBALS["lang"]['cost_center'] = 'Разходен център';

$GLOBALS["lang"]['Cost Center'] = 'Разходен център';

$GLOBALS["lang"]['cost_code'] = 'Код на разходите';

$GLOBALS["lang"]['Cost Code'] = 'Код на разходите';

$GLOBALS["lang"]['Costa Rica'] = 'Коста Рика';

$GLOBALS["lang"]['Cote d Ivoire'] = 'Кот д\'Ивоар';

$GLOBALS["lang"]['count'] = 'Брой';

$GLOBALS["lang"]['Count'] = 'Брой';

$GLOBALS["lang"]['country'] = 'Държава';

$GLOBALS["lang"]['Country'] = 'Държава';

$GLOBALS["lang"]['country_code'] = 'Код на държавата';

$GLOBALS["lang"]['Country Code'] = 'Код на държавата';

$GLOBALS["lang"]['cpu_count'] = 'Граф Cpu';

$GLOBALS["lang"]['Cpu Count'] = 'Граф Cpu';

$GLOBALS["lang"]['Create'] = 'Създаване';

$GLOBALS["lang"]['Create Example Devices'] = 'Създаване на примерни устройства';

$GLOBALS["lang"]['create_external_count'] = 'Създаване на външен брой';

$GLOBALS["lang"]['Create External Count'] = 'Създаване на външен брой';

$GLOBALS["lang"]['create_external_from_internal'] = 'Създаване на външна от вътрешната';

$GLOBALS["lang"]['Create External From Internal'] = 'Създаване на външна от вътрешната';

$GLOBALS["lang"]['Create Geocode'] = 'Създаване на геокод';

$GLOBALS["lang"]['create_internal_count'] = 'Създаване на вътрешен брой';

$GLOBALS["lang"]['Create Internal Count'] = 'Създаване на вътрешен брой';

$GLOBALS["lang"]['create_internal_from_external'] = 'Създаване на вътрешна от външната';

$GLOBALS["lang"]['Create Internal From External'] = 'Създаване на вътрешна от външната';

$GLOBALS["lang"]['Create NMIS Devices from Open-AudIT'] = 'Създаване на NMIS устройства от Open- AudIT';

$GLOBALS["lang"]['Create Open-AudIT Devices from '] = 'Създаване на Open- AudIT Устройства от ';

$GLOBALS["lang"]['Create Open-AudIT Devices from NMIS'] = 'Създаване на Open- AudIT Устройства от NSM';

$GLOBALS["lang"]['created_by'] = 'Създадено от';

$GLOBALS["lang"]['Created By'] = 'Създадено от';

$GLOBALS["lang"]['created_date'] = 'Създаване на дата';

$GLOBALS["lang"]['Created Date'] = 'Създаване на дата';

$GLOBALS["lang"]['Creating'] = 'Създаване';

$GLOBALS["lang"]['Creating Device'] = 'Създаване на устройство';

$GLOBALS["lang"]['Creating a Query'] = 'Създаване на запитване';

$GLOBALS["lang"]['creator'] = 'Създател';

$GLOBALS["lang"]['Creator'] = 'Създател';

$GLOBALS["lang"]['credential'] = 'Credential';

$GLOBALS["lang"]['Credential'] = 'Credential';

$GLOBALS["lang"]['credentials'] = 'Кредити';

$GLOBALS["lang"]['Credentials'] = 'Кредити';

$GLOBALS["lang"]['Credentials Client ID'] = 'Credentials Client ID';

$GLOBALS["lang"]['Credentials Subscription ID'] = 'Абонамент за ценни книжа Лична карта';

$GLOBALS["lang"]['Credentials Tenant ID'] = 'Наематели';

$GLOBALS["lang"]['Credentials for Amazon AWS used in Cloud Discovery'] = 'Credentials for Amazon AWS use in Cloud Discovery';

$GLOBALS["lang"]['Credentials for Microsoft Azure used in Cloud Discovery'] = 'Credentials for Microsoft Azure използва в Cloud Discovery';

$GLOBALS["lang"]['Critical'] = 'Критично';

$GLOBALS["lang"]['criticality'] = 'Критичност';

$GLOBALS["lang"]['Criticality'] = 'Критичност';

$GLOBALS["lang"]['Croatia'] = 'Хърватия';

$GLOBALS["lang"]['Cuba'] = 'Куба';

$GLOBALS["lang"]['current'] = 'Текущ';

$GLOBALS["lang"]['Current'] = 'Текущ';

$GLOBALS["lang"]['Current Discovery Processes'] = 'Текущи процеси на откритие';

$GLOBALS["lang"]['Current date & time is '] = 'Текуща дата и час ';

$GLOBALS["lang"]['Currently Installed'] = 'В момента инсталиран';

$GLOBALS["lang"]['Currently supported types are <code>snmp</code>, <code>snmp_v3</code>, <code>ssh</code>, <code>ssh_key</code> or <code>windows</code>.'] = 'В момента поддържаните типове са <code>snmp</code>, <code>snmp_v3</code>, <code>ssh</code>, <code>ssh_key</code> или <code>windows</code>.';

$GLOBALS["lang"]['Custom TCP Ports'] = 'Потребителски TCP портове';

$GLOBALS["lang"]['Custom UDP Ports'] = 'Потребителски UDP Портове';

$GLOBALS["lang"]['Cve'] = 'Cve';

$GLOBALS["lang"]['Cyprus'] = 'Кипър';

$GLOBALS["lang"]['Czech'] = 'Чешка';

$GLOBALS["lang"]['Czech Republic'] = 'Чешка република';

$GLOBALS["lang"]['DHCP'] = 'DHCP';

$GLOBALS["lang"]['DN Account (optional)'] = 'Партида DN (по избор)';

$GLOBALS["lang"]['DN Password (optional)'] = 'DN парола (по избор)';

$GLOBALS["lang"]['DNS FQDN'] = 'DNS FQDN';

$GLOBALS["lang"]['DNS Hostname'] = 'DNS Hostname';

$GLOBALS["lang"]['dashboard_id'] = 'Идентификация на таблото';

$GLOBALS["lang"]['Dashboard ID'] = 'Идентификация на таблото';

$GLOBALS["lang"]['dashboards'] = 'С тегло, превишаващо 150 g/m2';

$GLOBALS["lang"]['Dashboards'] = 'С тегло, превишаващо 150 g/m2';

$GLOBALS["lang"]['Database'] = 'База данни';

$GLOBALS["lang"]['db_action'] = 'Действие на БД';

$GLOBALS["lang"]['Database Action'] = 'Действие на БД';

$GLOBALS["lang"]['db_column'] = 'Колона за БД';

$GLOBALS["lang"]['Database Column'] = 'Колона за БД';

$GLOBALS["lang"]['Database Definition'] = 'Определение за БД';

$GLOBALS["lang"]['db_row'] = 'Ред на БД';

$GLOBALS["lang"]['Database Row'] = 'Ред на БД';

$GLOBALS["lang"]['Database Schema'] = 'Database Schema';

$GLOBALS["lang"]['db_table'] = 'Таблица на БД';

$GLOBALS["lang"]['Database Table'] = 'Таблица на БД';

$GLOBALS["lang"]['dataset_title'] = 'Заглавие на набора от данни';

$GLOBALS["lang"]['Dataset Title'] = 'Заглавие на набора от данни';

$GLOBALS["lang"]['date'] = 'Дата';

$GLOBALS["lang"]['Date'] = 'Дата';

$GLOBALS["lang"]['Date D-M-Y'] = 'Дата D-M-Y';

$GLOBALS["lang"]['Date M-D-Y'] = 'Дата M-D-Y';

$GLOBALS["lang"]['Date Now'] = 'Дата сега';

$GLOBALS["lang"]['date_of_manufacture'] = 'Дата на производство';

$GLOBALS["lang"]['Date Of Manufacture'] = 'Дата на производство';

$GLOBALS["lang"]['date_paid'] = 'Дата на плащане';

$GLOBALS["lang"]['Date Paid'] = 'Дата на плащане';

$GLOBALS["lang"]['date_received'] = 'Дата на получаване';

$GLOBALS["lang"]['Date Received'] = 'Дата на получаване';

$GLOBALS["lang"]['Date Y-M-D'] = 'Дата Y-M-D';

$GLOBALS["lang"]['Date and time when the CVE was last updated.'] = 'Дата и час на последно актуализиране на CVE.';

$GLOBALS["lang"]['Date and time when the CVE was published.'] = 'Дата и час на публикуване на CVE.';

$GLOBALS["lang"]['Date when the CVE was published.'] = 'Дата на публикуване на CVE.';

$GLOBALS["lang"]['DateTime Now'] = 'Дата';

$GLOBALS["lang"]['DateTime Y-M-D H:M:S'] = 'Дата Y-M-D H:M:S';

$GLOBALS["lang"]['day_of_month'] = 'Ден на месеца';

$GLOBALS["lang"]['Day Of Month'] = 'Ден на месеца';

$GLOBALS["lang"]['day_of_week'] = 'Ден на седмицата';

$GLOBALS["lang"]['Day Of Week'] = 'Ден на седмицата';

$GLOBALS["lang"]['Day of Month'] = 'Ден на месеца';

$GLOBALS["lang"]['dbus_identifier'] = 'Идентификация на Dbus';

$GLOBALS["lang"]['Dbus Identifier'] = 'Идентификация на Dbus';

$GLOBALS["lang"]['Debug'] = 'Дебъг';

$GLOBALS["lang"]['December'] = 'декември';

$GLOBALS["lang"]['Default'] = 'По подразбиране';

$GLOBALS["lang"]['Default Items'] = 'По подразбиране';

$GLOBALS["lang"]['Default Value'] = 'Стойност по подразбиране';

$GLOBALS["lang"]['Default of 389. Normally 636 used for Active Directory LDAPS.'] = 'По подразбиране 389. Обикновено се използва за активна директория LDAPS.';

$GLOBALS["lang"]['Default of <code>3</code> for LDAP and Active Directory.'] = 'По подразбиране <code>3</code> за LDAP и активна директория.';

$GLOBALS["lang"]['Defaults'] = 'По подразбиране';

$GLOBALS["lang"]['delay_minutes'] = 'Протоколи за забавяне';

$GLOBALS["lang"]['Delay Minutes'] = 'Протоколи за забавяне';

$GLOBALS["lang"]['Delete'] = 'Изтриване';

$GLOBALS["lang"]['Delete Example Devices'] = 'Изтриване на примерни устройства';

$GLOBALS["lang"]['delete_external_from_internal'] = 'Изтриване от вътрешната';

$GLOBALS["lang"]['Delete External From Internal'] = 'Изтриване от вътрешната';

$GLOBALS["lang"]['Delete NMIS Devices if not in Open-AudIT'] = 'Изтриване на NMIS Устройства, ако не са в Open-AudIT';

$GLOBALS["lang"]['Delete from Application'] = 'Изтриване от приложението';

$GLOBALS["lang"]['Delete from Cluster'] = 'Изтриване от куп';

$GLOBALS["lang"]['Denmark'] = 'Дания';

$GLOBALS["lang"]['Derived by audit or manually set by user.'] = 'Произвеждан от одит или ръчно зададен от потребителя.';

$GLOBALS["lang"]['Derived by audit.'] = 'Изпратен от одит.';

$GLOBALS["lang"]['Derived from <code>rack_devices.device_id</code>.'] = 'Drived from <code>rack_devices.device_id</code>.';

$GLOBALS["lang"]['Derived from <code>rack_devices.rack_id</code>.'] = 'Drived from <code>rack_devices.rack_id</code>.';

$GLOBALS["lang"]['Derived from Collector discovery.'] = 'Откритието на Колекционера.';

$GLOBALS["lang"]['Derived from OS Name.'] = 'Изпратен от OS Name.';

$GLOBALS["lang"]['Derived from cloud discovery.'] = 'Откритие от облак.';

$GLOBALS["lang"]['Derived from device audits.'] = 'Изпратен от одити на устройства.';

$GLOBALS["lang"]['Derived from device type and OS.'] = 'От типа устройство и OS.';

$GLOBALS["lang"]['Derived from discovery.'] = 'Откритие.';

$GLOBALS["lang"]['Derived from hostname, sysName, dns Hostname and IP in that order.'] = 'Изпратено от име на домакин, сисИме, DNS Hostname и IP в този ред.';

$GLOBALS["lang"]['Derived from the integer severity.'] = 'От цялата тежест.';

$GLOBALS["lang"]['description'] = 'Описание';

$GLOBALS["lang"]['Description'] = 'Описание';

$GLOBALS["lang"]['destination'] = 'Местоназначение';

$GLOBALS["lang"]['Destination'] = 'Местоназначение';

$GLOBALS["lang"]['detail'] = 'Подробности';

$GLOBALS["lang"]['Detail'] = 'Подробности';

$GLOBALS["lang"]['Details'] = 'Подробности';

$GLOBALS["lang"]['details'] = 'Подробности';

$GLOBALS["lang"]['Details of who is usually contactable at this site.'] = 'Подробности за това кой обикновено е достъпен на този сайт.';

$GLOBALS["lang"]['device'] = 'Устройство';

$GLOBALS["lang"]['Device'] = 'Устройство';

$GLOBALS["lang"]['Device Audits'] = 'Одити на устройства';

$GLOBALS["lang"]['Device ID'] = 'Идентификация на устройството';

$GLOBALS["lang"]['device_id'] = 'Идентификация на устройството';

$GLOBALS["lang"]['device_id_a'] = 'Идентификационен номер на устройството A';

$GLOBALS["lang"]['Device ID A'] = 'Идентификационен номер на устройството A';

$GLOBALS["lang"]['device_id_b'] = 'Идентификационен номер на устройството Б';

$GLOBALS["lang"]['Device ID B'] = 'Идентификационен номер на устройството Б';

$GLOBALS["lang"]['Device Name'] = 'Име на устройството';

$GLOBALS["lang"]['Device Result'] = 'Резултат от устройството';

$GLOBALS["lang"]['Device Results'] = 'Резултати от устройството';

$GLOBALS["lang"]['Device Seed'] = 'Семе от устройство';

$GLOBALS["lang"]['Device Seed IP'] = 'IP устройство за семена';

$GLOBALS["lang"]['Device Status'] = 'Състояние на устройството';

$GLOBALS["lang"]['Device Types'] = 'Видове устройства';

$GLOBALS["lang"]['Device is in the Subnet'] = 'Устройството е в подмрежата';

$GLOBALS["lang"]['Devices'] = 'Устройства';

$GLOBALS["lang"]['devices_assigned_to_location'] = 'Устройства, предназначени за местоположение';

$GLOBALS["lang"]['Devices Assigned To Location'] = 'Устройства, предназначени за местоположение';

$GLOBALS["lang"]['devices_assigned_to_org'] = 'Устройства, предназначени за насочване';

$GLOBALS["lang"]['Devices Assigned To Org'] = 'Устройства, предназначени за насочване';

$GLOBALS["lang"]['Devices Audited'] = 'Огледани устройства';

$GLOBALS["lang"]['Devices Created in '] = 'Устройства, създадени в ';

$GLOBALS["lang"]['Devices Created in Open-AudIT'] = 'Устройства, създадени в Open-AudIT';

$GLOBALS["lang"]['devices_default_display_columns'] = 'Колони за показване по подразбиране на устройствата';

$GLOBALS["lang"]['Devices Default Display Columns'] = 'Колони за показване по подразбиране на устройствата';

$GLOBALS["lang"]['Devices Found Last 7 Days'] = 'Устройства намерени през последните 7 дни';

$GLOBALS["lang"]['Devices Found Today'] = 'Устройство, намерено днес';

$GLOBALS["lang"]['Devices Found Yesterday'] = 'Открити вчера устройства';

$GLOBALS["lang"]['Devices Not Audited'] = 'Устройства, които не са проверени';

$GLOBALS["lang"]['Devices Not Seen 30 Days'] = 'Устройства, които не са наблюдавани 30 дни';

$GLOBALS["lang"]['Devices Not Seen 7 Days'] = 'Устройства, които не са наблюдавани 7 дни';

$GLOBALS["lang"]['Devices Not Seen 90 Days'] = 'Устройства, които не са наблюдавани 90 дни';

$GLOBALS["lang"]['Devices Retrieved via API'] = 'Устройството се изтегля чрез API';

$GLOBALS["lang"]['Devices Selected from '] = 'Устройства, избрани от ';

$GLOBALS["lang"]['Devices Selected from Open-AudIT'] = 'Устройства, избрани от Open-AudIT';

$GLOBALS["lang"]['Devices Updated in '] = 'Обновяване на устройствата ';

$GLOBALS["lang"]['Devices Updated in Open-AudIT'] = 'Усъвършенствани устройства в Open-AudIT';

$GLOBALS["lang"]['Devices are being benchmarked.'] = 'Устройството се проверява.';

$GLOBALS["lang"]['Devices are not being benchmarked.'] = 'Устройствата не се проверяват.';

$GLOBALS["lang"]['Devices could be benchmarked.'] = 'Устройството може да се сравни.';

$GLOBALS["lang"]['Devices in Running State'] = 'Устройства в състояние на движение';

$GLOBALS["lang"]['Devices in Stopped State'] = 'Устройства в състояние на спиране';

$GLOBALS["lang"]['Devices in this'] = 'Устройства в това';

$GLOBALS["lang"]['Devired from type or OS.'] = 'Девириран от тип или OS.';

$GLOBALS["lang"]['dhcp_enabled'] = 'Включване на Dhcp';

$GLOBALS["lang"]['Dhcp Enabled'] = 'Включване на Dhcp';

$GLOBALS["lang"]['dhcp_lease_expires'] = 'Наемане на Dhcp изтича';

$GLOBALS["lang"]['Dhcp Lease Expires'] = 'Наемане на Dhcp изтича';

$GLOBALS["lang"]['dhcp_lease_obtained'] = 'Наемане на Dhcp';

$GLOBALS["lang"]['Dhcp Lease Obtained'] = 'Наемане на Dhcp';

$GLOBALS["lang"]['dhcp_server'] = 'Сървър Dhcp';

$GLOBALS["lang"]['Dhcp Server'] = 'Сървър Dhcp';

$GLOBALS["lang"]['Did the command complete successfully and return expected data.'] = 'Командата завърши успешно и върна очакваните данни.';

$GLOBALS["lang"]['direction'] = 'Посока';

$GLOBALS["lang"]['Direction'] = 'Посока';

$GLOBALS["lang"]['directory'] = 'Директория';

$GLOBALS["lang"]['Directory'] = 'Директория';

$GLOBALS["lang"]['disabled'] = 'Изключване';

$GLOBALS["lang"]['Disabled'] = 'Изключване';

$GLOBALS["lang"]['discard'] = 'Изхвърляне';

$GLOBALS["lang"]['Discard'] = 'Изхвърляне';

$GLOBALS["lang"]['Discover'] = 'Открийте';

$GLOBALS["lang"]['discoveries'] = 'Открийства';

$GLOBALS["lang"]['Discoveries'] = 'Открийства';

$GLOBALS["lang"]['Discovery'] = 'Откритие';

$GLOBALS["lang"]['Discovery Change Logs'] = 'Дневници за промяна на откритието';

$GLOBALS["lang"]['Discovery Data Retention'] = 'Възстановяване на данни за намиране';

$GLOBALS["lang"]['discovery_id'] = 'Идентификация за намиране';

$GLOBALS["lang"]['Discovery ID'] = 'Идентификация за намиране';

$GLOBALS["lang"]['Discovery Issues'] = 'Дискавъри въпроси';

$GLOBALS["lang"]['discovery_log'] = 'Discovery Log';

$GLOBALS["lang"]['Discovery Log'] = 'Discovery Log';

$GLOBALS["lang"]['Discovery Match Options'] = 'Настройки на мача за откритие';

$GLOBALS["lang"]['Discovery Name'] = 'Име на откритие';

$GLOBALS["lang"]['Discovery Options'] = 'Настройки за откриване';

$GLOBALS["lang"]['Discovery Queue Count'] = 'Броя на опашките';

$GLOBALS["lang"]['Discovery Queue Limit'] = 'Лимит на откритие';

$GLOBALS["lang"]['discovery_run'] = 'Run Discovery';

$GLOBALS["lang"]['Discovery Run'] = 'Run Discovery';

$GLOBALS["lang"]['discovery_scan_options'] = 'Настройки за откриване на сканиране';

$GLOBALS["lang"]['Discovery Scan Options'] = 'Настройки за откриване на сканиране';

$GLOBALS["lang"]['disk'] = 'Диск';

$GLOBALS["lang"]['Disk'] = 'Диск';

$GLOBALS["lang"]['display_version'] = 'Версия на дисплея';

$GLOBALS["lang"]['Display Version'] = 'Версия на дисплея';

$GLOBALS["lang"]['Display in Menu'] = 'Показване в менюто';

$GLOBALS["lang"]['district'] = 'Област';

$GLOBALS["lang"]['District'] = 'Област';

$GLOBALS["lang"]['Djibouti'] = 'Джибути';

$GLOBALS["lang"]['dns'] = 'Dns';

$GLOBALS["lang"]['Dns'] = 'Dns';

$GLOBALS["lang"]['dns_domain'] = 'Dns Domain';

$GLOBALS["lang"]['Dns Domain'] = 'Dns Domain';

$GLOBALS["lang"]['dns_domain_reg_enabled'] = 'Dns Dmain Reg активиран';

$GLOBALS["lang"]['Dns Domain Reg Enabled'] = 'Dns Dmain Reg активиран';

$GLOBALS["lang"]['dns_fqdn'] = 'Dns Fqdn';

$GLOBALS["lang"]['Dns Fqdn'] = 'Dns Fqdn';

$GLOBALS["lang"]['dns_host_name'] = 'Име на хост';

$GLOBALS["lang"]['Dns Host Name'] = 'Име на хост';

$GLOBALS["lang"]['dns_hostname'] = 'Име на хост';

$GLOBALS["lang"]['Dns Hostname'] = 'Име на хост';

$GLOBALS["lang"]['dns_server'] = 'Сървър Dns';

$GLOBALS["lang"]['Dns Server'] = 'Сървър Dns';

$GLOBALS["lang"]['Do not scan these TCP ports.'] = 'Не сканирайте тези TCP портове.';

$GLOBALS["lang"]['Do not scan these UDP ports.'] = 'Не сканирайте тези UDP портове.';

$GLOBALS["lang"]['Do not show me again'] = 'Не ми показвай отново.';

$GLOBALS["lang"]['Do you want to use secure transport (LDAPS) or regular unencrypted LDAP.'] = 'Искате ли да използвате защитен транспорт (LDAPS) или редовно некриптиран LDAP.';

$GLOBALS["lang"]['Do you wish to see the standard sidebar on the left.'] = 'Искате ли да видите стандартната странична лента отляво?';

$GLOBALS["lang"]['documentation'] = 'Документация';

$GLOBALS["lang"]['Documentation'] = 'Документация';

$GLOBALS["lang"]['Does the license apply to child Orgs.'] = 'Лицензът важи ли за детските орги?';

$GLOBALS["lang"]['domain'] = 'Област';

$GLOBALS["lang"]['Domain'] = 'Област';

$GLOBALS["lang"]['domain_controller_address'] = 'Адрес на контролера на домейн';

$GLOBALS["lang"]['Domain Controller Address'] = 'Адрес на контролера на домейн';

$GLOBALS["lang"]['domain_controller_name'] = 'Контролер на домейни Име';

$GLOBALS["lang"]['Domain Controller Name'] = 'Контролер на домейни Име';

$GLOBALS["lang"]['domain_role'] = 'Роля на домейн';

$GLOBALS["lang"]['Domain Role'] = 'Роля на домейн';

$GLOBALS["lang"]['domain_short'] = 'Къс домейн';

$GLOBALS["lang"]['Domain Short'] = 'Къс домейн';

$GLOBALS["lang"]['Dominica'] = 'Доминика';

$GLOBALS["lang"]['Dominican Republic'] = 'Доминиканска република';

$GLOBALS["lang"]['Dont hold my hand, I know what I am doing. No filter and the ability to join custom tables.'] = 'Не ми дръж ръката, знам какво правя. Няма филтър и възможност да се присъединят към потребителски маси.';

$GLOBALS["lang"]['Download'] = 'Изтегляне';

$GLOBALS["lang"]['Download a file from URL'] = 'Изтегляне на файл от URL';

$GLOBALS["lang"]['driver'] = 'Шофьор';

$GLOBALS["lang"]['Driver'] = 'Шофьор';

$GLOBALS["lang"]['duplex'] = 'Duplex';

$GLOBALS["lang"]['Duplex'] = 'Duplex';

$GLOBALS["lang"]['duration'] = 'Продължителност';

$GLOBALS["lang"]['Duration'] = 'Продължителност';

$GLOBALS["lang"]['ESXi'] = 'ESXi';

$GLOBALS["lang"]['EULA'] = 'EULA';

$GLOBALS["lang"]['Ecuador'] = 'Еквадор';

$GLOBALS["lang"]['Edit'] = 'Редактиране';

$GLOBALS["lang"]['edit_log'] = 'Редактиране на дневник';

$GLOBALS["lang"]['Edit Log'] = 'Редактиране на дневник';

$GLOBALS["lang"]['editable'] = 'Редактиране';

$GLOBALS["lang"]['Editable'] = 'Редактиране';

$GLOBALS["lang"]['edited_by'] = 'Редактирано от';

$GLOBALS["lang"]['Edited By'] = 'Редактирано от';

$GLOBALS["lang"]['edited_date'] = 'Редактирана дата';

$GLOBALS["lang"]['Edited Date'] = 'Редактирана дата';

$GLOBALS["lang"]['edition'] = 'Издание';

$GLOBALS["lang"]['Edition'] = 'Издание';

$GLOBALS["lang"]['Egypt'] = 'Египет';

$GLOBALS["lang"]['Either Amazon, Google or Microsoft.'] = 'Или Amazon, Google или Microsoft.';

$GLOBALS["lang"]['Either none or present.

<strong>None</strong> - The successful attack does not depend on the deployment and execution conditions of the vulnerable system. The attacker can expect to be able to reach the vulnerability and execute the exploit under all or most instances of the vulnerability.

<strong>Present</strong> - The successful attack depends on the presence of specific deployment and execution conditions of the vulnerable system that enable the attack. These include:

A race condition must be won to successfully exploit the vulnerability. The successfulness of the attack is conditioned on execution conditions that are not under full control of the attacker. The attack may need to be launched multiple times against a single target before being successful.

Network injection. The attacker must inject themselves into the logical network path between the target and the resource requested by the victim (e.g. vulnerabilities requiring an on-path attacker).'] = 'Нито едното, нито другото.

<strong>Няма</strong> - Успешната атака не зависи от условията за разполагане и изпълнение на уязвимите системи. Нападателят може да очаква да бъде в състояние да достигне уязвимостта и да изпълни експлоатацията под всички или повечето случаи на уязвимост.

<strong>Присъства</strong> - Успешната атака зависи от наличието на специфични условия за разполагане и изпълнение на уязвимата система, която позволява атаката. Те включват:

Състезанието трябва да бъде спечелено за успешно използване на уязвимостта. Успешността на атаката се определя при условия на екзекуция, които не са под пълен контрол на нападателя. Атаката може да се наложи да бъде изстреляна многократно срещу една цел, преди да бъде успешна.

Мрежова инжекция. Нападателят трябва да се инжектира в логическата мрежа между целта и ресурса, изискван от жертвата (напр. уязвимост, която изисква нападател на пътя).';

$GLOBALS["lang"]['El Salvador'] = 'Ел Салвадор';

$GLOBALS["lang"]['email'] = 'Имейл';

$GLOBALS["lang"]['Email'] = 'Имейл';

$GLOBALS["lang"]['email_address'] = 'Е- поща';

$GLOBALS["lang"]['Email Address'] = 'Е- поща';

$GLOBALS["lang"]['Email Configuration'] = 'Настройки на е- поща';

$GLOBALS["lang"]['Email to send test to'] = 'Имейл за изпращане на тест';

$GLOBALS["lang"]['Enable'] = 'Включване';

$GLOBALS["lang"]['enabled'] = 'Включване';

$GLOBALS["lang"]['Enabled'] = 'Включване';

$GLOBALS["lang"]['encryption'] = 'Шифроване';

$GLOBALS["lang"]['Encryption'] = 'Шифроване';

$GLOBALS["lang"]['encryption_method'] = 'Метод за шифроване';

$GLOBALS["lang"]['Encryption Method'] = 'Метод за шифроване';

$GLOBALS["lang"]['encryption_status'] = 'Състояние на шифроване';

$GLOBALS["lang"]['Encryption Status'] = 'Състояние на шифроване';

$GLOBALS["lang"]['end_date'] = 'Крайна дата';

$GLOBALS["lang"]['End Date'] = 'Крайна дата';

$GLOBALS["lang"]['End OF Life Product ID'] = 'Идентификационен код на крайния продукт';

$GLOBALS["lang"]['end_of_life'] = 'Краят на живота';

$GLOBALS["lang"]['End Of Life'] = 'Краят на живота';

$GLOBALS["lang"]['end_of_production'] = 'Край на производството';

$GLOBALS["lang"]['End Of Production'] = 'Край на производството';

$GLOBALS["lang"]['end_of_service'] = 'Край на службата';

$GLOBALS["lang"]['End Of Service'] = 'Край на службата';

$GLOBALS["lang"]['end_of_service_life'] = 'Край на службата';

$GLOBALS["lang"]['End Of Service Life'] = 'Край на службата';

$GLOBALS["lang"]['English'] = 'Английски';

$GLOBALS["lang"]['enterprise'] = 'Предприятия';

$GLOBALS["lang"]['Enterprise'] = 'Предприятия';

$GLOBALS["lang"]['Enterprise Private Network'] = 'Частна мрежа на Enterprise';

$GLOBALS["lang"]['Entitlement Type'] = 'Вид право';

$GLOBALS["lang"]['environment'] = 'Околна среда';

$GLOBALS["lang"]['Environment'] = 'Околна среда';

$GLOBALS["lang"]['Equal To'] = 'Равно на';

$GLOBALS["lang"]['Equal To or Greater Than'] = 'Равни или по-големи от';

$GLOBALS["lang"]['Equal To or Less Than'] = 'Равно или по-малко от';

$GLOBALS["lang"]['Equals'] = 'Равни';

$GLOBALS["lang"]['Equatorial Guinea'] = 'Екваториална Гвинея';

$GLOBALS["lang"]['Eritrea'] = 'Еритрея';

$GLOBALS["lang"]['Error'] = 'Грешка';

$GLOBALS["lang"]['Error Code'] = 'Код за грешка';

$GLOBALS["lang"]['Established'] = 'Основано';

$GLOBALS["lang"]['Estonia'] = 'Естония';

$GLOBALS["lang"]['Ethernet MAC'] = 'Ethernet MAC';

$GLOBALS["lang"]['ethernet_mac'] = 'Ethernet Mac';

$GLOBALS["lang"]['Ethernet Mac'] = 'Ethernet Mac';

$GLOBALS["lang"]['Ethiopia'] = 'Етиопия';

$GLOBALS["lang"]['Every'] = 'Всеки';

$GLOBALS["lang"]['Every Day'] = 'Всеки ден';

$GLOBALS["lang"]['Exceptions'] = 'Изключения';

$GLOBALS["lang"]['exclude'] = 'Изключване';

$GLOBALS["lang"]['Exclude'] = 'Изключване';

$GLOBALS["lang"]['exclude_ip'] = 'Изключване на IP';

$GLOBALS["lang"]['Exclude IP'] = 'Изключване на IP';

$GLOBALS["lang"]['Exclude IP Addresses'] = 'Изключване на IP адреси';

$GLOBALS["lang"]['Exclude TCP Ports'] = 'Изключване на TCP портове';

$GLOBALS["lang"]['exclude_tcp_ports'] = 'Изключване на портове Tcp';

$GLOBALS["lang"]['Exclude Tcp Ports'] = 'Изключване на портове Tcp';

$GLOBALS["lang"]['Exclude UDP Ports'] = 'Изключване на UDP портове';

$GLOBALS["lang"]['exclude_udp_ports'] = 'Изключване на Udp портове';

$GLOBALS["lang"]['Exclude Udp Ports'] = 'Изключване на Udp портове';

$GLOBALS["lang"]['Exclude these IP addresses from being Nmap scanned.'] = 'Изключете тези IP адреси от сканирането на NMAP.';

$GLOBALS["lang"]['Excluded'] = 'Изключено';

$GLOBALS["lang"]['exclusion_reasons'] = 'Основания за изключване';

$GLOBALS["lang"]['Exclusion Reasons'] = 'Основания за изключване';

$GLOBALS["lang"]['executable'] = 'Изпълнение';

$GLOBALS["lang"]['Executable'] = 'Изпълнение';

$GLOBALS["lang"]['executable_id'] = 'ИД за изпълнение';

$GLOBALS["lang"]['Executable ID'] = 'ИД за изпълнение';

$GLOBALS["lang"]['executables'] = 'Изпълнение';

$GLOBALS["lang"]['Executables'] = 'Изпълнение';

$GLOBALS["lang"]['Execute'] = 'Изпълнение';

$GLOBALS["lang"]['Executing'] = 'Изпълнение';

$GLOBALS["lang"]['exemption_reason'] = 'Основание за освобождаване';

$GLOBALS["lang"]['Exemption Reason'] = 'Основание за освобождаване';

$GLOBALS["lang"]['Existing Building'] = 'Съществуваща сграда';

$GLOBALS["lang"]['Existing Floor'] = 'Съществуващ под';

$GLOBALS["lang"]['Existing Room'] = 'Съществуваща стая';

$GLOBALS["lang"]['Existing Row'] = 'Съществуващ ред';

$GLOBALS["lang"]['expire_date'] = 'Дата на изтичане';

$GLOBALS["lang"]['Expire Date'] = 'Дата на изтичане';

$GLOBALS["lang"]['expire_minutes'] = 'Извеждане на протокола';

$GLOBALS["lang"]['Expire Minutes'] = 'Извеждане на протокола';

$GLOBALS["lang"]['expires'] = 'Изтича';

$GLOBALS["lang"]['Expires'] = 'Изтича';

$GLOBALS["lang"]['expiry_date'] = 'Дата на изтичане';

$GLOBALS["lang"]['Expiry Date'] = 'Дата на изтичане';

$GLOBALS["lang"]['exploit_maturity'] = 'Експлоатационен срок';

$GLOBALS["lang"]['Exploit Maturity'] = 'Експлоатационен срок';

$GLOBALS["lang"]['Export'] = 'Експортиране';

$GLOBALS["lang"]['Export by Device'] = 'Експортиране по устройство';

$GLOBALS["lang"]['Export by Policy'] = 'Износ по политика';

$GLOBALS["lang"]['Export data to'] = 'Данни за износа';

$GLOBALS["lang"]['expose'] = 'Експозе';

$GLOBALS["lang"]['Expose'] = 'Експозе';

$GLOBALS["lang"]['External'] = 'Външни';

$GLOBALS["lang"]['External Field Name'] = 'Външно поле';

$GLOBALS["lang"]['External Field Type'] = 'Вид външно поле';

$GLOBALS["lang"]['external_ident'] = 'Външна идентификация';

$GLOBALS["lang"]['External Ident'] = 'Външна идентификация';

$GLOBALS["lang"]['external_link'] = 'Външна връзка';

$GLOBALS["lang"]['External Link'] = 'Външна връзка';

$GLOBALS["lang"]['extra_columns'] = 'Допълнителни колони';

$GLOBALS["lang"]['Extra Columns'] = 'Допълнителни колони';

$GLOBALS["lang"]['Extra and more verbose logging is generated for troubleshooting.'] = 'Екстра и повече глаголна сеч се генерира за отстраняване на проблеми.';

$GLOBALS["lang"]['FAQ'] = 'Често задавани въпроси';

$GLOBALS["lang"]['FQDN'] = 'FQDN';

$GLOBALS["lang"]['FW Revision'] = 'Преработка на FW';

$GLOBALS["lang"]['Fail'] = 'Грешка';

$GLOBALS["lang"]['Failed'] = 'Грешка';

$GLOBALS["lang"]['Failed Severity'] = 'Неуспешна тежест';

$GLOBALS["lang"]['Falkland Islands (Malvinas)'] = 'Фолкландски острови (Малвина)';

$GLOBALS["lang"]['Family'] = 'Семейство';

$GLOBALS["lang"]['Faroe Islands'] = 'Фарьорски острови';

$GLOBALS["lang"]['Features'] = 'Характеристики';

$GLOBALS["lang"]['February'] = 'Февруари';

$GLOBALS["lang"]['field'] = 'Поле';

$GLOBALS["lang"]['Field'] = 'Поле';

$GLOBALS["lang"]['field_id'] = 'Идентификация на полето';

$GLOBALS["lang"]['Field ID'] = 'Идентификация на полето';

$GLOBALS["lang"]['Field Name'] = 'Име на полето';

$GLOBALS["lang"]['Field Type'] = 'Вид поле';

$GLOBALS["lang"]['Fields'] = 'Полета';

$GLOBALS["lang"]['fields'] = 'Полета';

$GLOBALS["lang"]['Fiji the Fiji Islands'] = 'Фиджи';

$GLOBALS["lang"]['File'] = 'Файл';

$GLOBALS["lang"]['File Import'] = 'Импортиране на файл';

$GLOBALS["lang"]['File Input'] = 'Вход на файл';

$GLOBALS["lang"]['file_name'] = 'Име на файл';

$GLOBALS["lang"]['File Name'] = 'Име на файл';

$GLOBALS["lang"]['file_size'] = 'Размер на файла';

$GLOBALS["lang"]['File Size'] = 'Размер на файла';

$GLOBALS["lang"]['filename'] = 'Име на файл';

$GLOBALS["lang"]['Filename'] = 'Име на файл';

$GLOBALS["lang"]['files'] = 'Файлове';

$GLOBALS["lang"]['Files'] = 'Файлове';

$GLOBALS["lang"]['files_id'] = 'ID на файловете';

$GLOBALS["lang"]['Files ID'] = 'ID на файловете';

$GLOBALS["lang"]['filter'] = 'Филтър';

$GLOBALS["lang"]['Filter'] = 'Филтър';

$GLOBALS["lang"]['filtered'] = 'Филтрирано';

$GLOBALS["lang"]['Filtered'] = 'Филтрирано';

$GLOBALS["lang"]['Finland'] = 'Финландия';

$GLOBALS["lang"]['Firewall'] = 'Защитна стена';

$GLOBALS["lang"]['firewall_rule'] = 'Правило на защитната стена';

$GLOBALS["lang"]['Firewall Rule'] = 'Правило на защитната стена';

$GLOBALS["lang"]['firmware'] = 'Фирми';

$GLOBALS["lang"]['Firmware'] = 'Фирми';

$GLOBALS["lang"]['firmware_revision'] = 'Преработка на фърмуер';

$GLOBALS["lang"]['Firmware Revision'] = 'Преработка на фърмуер';

$GLOBALS["lang"]['First Name'] = 'Име';

$GLOBALS["lang"]['first_run'] = 'Първо тичане';

$GLOBALS["lang"]['First Run'] = 'Първо тичане';

$GLOBALS["lang"]['first_seen'] = 'Първо видян';

$GLOBALS["lang"]['First Seen'] = 'Първо видян';

$GLOBALS["lang"]['FirstWave'] = 'Първа вълна';

$GLOBALS["lang"]['Fix'] = 'Фиксиране';

$GLOBALS["lang"]['Fixed'] = 'Фиксирана';

$GLOBALS["lang"]['Floor'] = 'Под';

$GLOBALS["lang"]['Follow any of the links below and discover how to use Open-AudIT to find out <b>Whats On Your Network?</b>'] = 'Следвайте някоя от връзките по-долу и открийте как да използвате Open-AudIT, за да разберете <b>Какво има в мрежата ти?</b>';

$GLOBALS["lang"]['For a seed discovery, should I only discover IPs in the private IP address space.'] = 'За откриване на семена, трябва да открия IP-та само в личното IP адресно пространство.';

$GLOBALS["lang"]['For a seed discovery, should I only discover IPs on the chosen subnet.'] = 'За откриване на семена, трябва да открия IP-та само в избраната подмрежа.';

$GLOBALS["lang"]['For a seed discovery, should I ping the subnet before running the discovery.'] = 'За откритие на семена, трябва ли да проследя подмрежата преди да пусна откритието.';

$GLOBALS["lang"]['For advanced entry of a raw SQL query. As per Queries, you must include <code>WHERE @filter AND<code> in your SQL.'] = 'За напреднало въвеждане на сурова SQL заявка. Както се изисква, трябва да включите <code>WHERE @filter AND<code> in your SQL.</code></code>';

$GLOBALS["lang"]['For licenses that are not perpetual, when does the license expire.'] = 'За лицензи, които не са вечни, кога изтича лицензът.';

$GLOBALS["lang"]['form_factor'] = 'Коефициент на формата';

$GLOBALS["lang"]['Form Factor'] = 'Коефициент на формата';

$GLOBALS["lang"]['format'] = 'Формат';

$GLOBALS["lang"]['Format'] = 'Формат';

$GLOBALS["lang"]['fqdn'] = 'Fqdn';

$GLOBALS["lang"]['Fqdn'] = 'Fqdn';

$GLOBALS["lang"]['France, French Republic'] = 'Франция, Френска република';

$GLOBALS["lang"]['free'] = 'Безплатно';

$GLOBALS["lang"]['Free'] = 'Безплатно';

$GLOBALS["lang"]['French'] = 'Френски';

$GLOBALS["lang"]['French Guiana'] = 'Френска Гвиана';

$GLOBALS["lang"]['French Polynesia'] = 'Френска Полинезия';

$GLOBALS["lang"]['French Southern Territories'] = 'Френски южни територии';

$GLOBALS["lang"]['Frequently Asked Questions'] = 'Често задавани въпроси';

$GLOBALS["lang"]['Friday'] = 'Петък';

$GLOBALS["lang"]['From 100 Devices'] = 'От 100 устройства';

$GLOBALS["lang"]['From 500 Devices'] = 'От 500 устройства';

$GLOBALS["lang"]['full_name'] = 'Пълно име';

$GLOBALS["lang"]['Full Name'] = 'Пълно име';

$GLOBALS["lang"]['function'] = 'Функция';

$GLOBALS["lang"]['Function'] = 'Функция';

$GLOBALS["lang"]['GROUP BY'] = 'ГРУПА BY';

$GLOBALS["lang"]['Gabon'] = 'Габон';

$GLOBALS["lang"]['Gambia the'] = 'Гамбия';

$GLOBALS["lang"]['gateway'] = 'Портал';

$GLOBALS["lang"]['Gateway'] = 'Портал';

$GLOBALS["lang"]['gateways'] = 'Портали';

$GLOBALS["lang"]['Gateways'] = 'Портали';

$GLOBALS["lang"]['Generated By'] = 'Генерирани от';

$GLOBALS["lang"]['geo'] = 'Геометрия';

$GLOBALS["lang"]['Geo'] = 'Геометрия';

$GLOBALS["lang"]['Georgia'] = 'Грузия';

$GLOBALS["lang"]['German'] = 'Немски';

$GLOBALS["lang"]['Germany'] = 'Германия';

$GLOBALS["lang"]['Get Lat/Long'] = 'Get Lat/Long';

$GLOBALS["lang"]['Get Started'] = 'Започвай.';

$GLOBALS["lang"]['Get a Free License'] = 'Получаване на свободен лиценз';

$GLOBALS["lang"]['Getting Started'] = 'Започване';

$GLOBALS["lang"]['Ghana'] = 'Гана';

$GLOBALS["lang"]['Gibraltar'] = 'Гибралтар';

$GLOBALS["lang"]['Global Discovery Options'] = 'Настройки на глобалното откритие';

$GLOBALS["lang"]['Go'] = 'Върви.';

$GLOBALS["lang"]['Google Compute Fields'] = 'Google Compute Fields';

$GLOBALS["lang"]['Google Maps API Key'] = 'Google Maps API Ключ';

$GLOBALS["lang"]['Greater Than'] = 'По- голямо от';

$GLOBALS["lang"]['Greater Than or Equals'] = 'По-големи или равни';

$GLOBALS["lang"]['Greece'] = 'Гърция';

$GLOBALS["lang"]['Green Query'] = 'Зелена справка';

$GLOBALS["lang"]['Greenland'] = 'Гренландия';

$GLOBALS["lang"]['Grenada'] = 'Гренада';

$GLOBALS["lang"]['Group'] = 'Група';

$GLOBALS["lang"]['group_by'] = 'Група по';

$GLOBALS["lang"]['Group By'] = 'Група по';

$GLOBALS["lang"]['group_id'] = 'Идентификационен код на групата';

$GLOBALS["lang"]['Group ID'] = 'Идентификационен код на групата';

$GLOBALS["lang"]['groups'] = 'Групи';

$GLOBALS["lang"]['Groups'] = 'Групи';

$GLOBALS["lang"]['Guadeloupe'] = 'Гваделупа';

$GLOBALS["lang"]['Guam'] = 'Гуам';

$GLOBALS["lang"]['Guatemala'] = 'Гватемала';

$GLOBALS["lang"]['Guernsey'] = 'Гърнзи';

$GLOBALS["lang"]['guest_device_id'] = 'Идентификация на устройството за гости';

$GLOBALS["lang"]['Guest Device ID'] = 'Идентификация на устройството за гости';

$GLOBALS["lang"]['guid'] = 'Guid';

$GLOBALS["lang"]['Guid'] = 'Guid';

$GLOBALS["lang"]['Guinea'] = 'Гвинея';

$GLOBALS["lang"]['Guinea-Bissau'] = 'Гвинея Бисау';

$GLOBALS["lang"]['Guyana'] = 'Гвиана';

$GLOBALS["lang"]['HP-UX'] = 'HP-UX';

$GLOBALS["lang"]['HW Revision'] = 'Преработка на ЗВ';

$GLOBALS["lang"]['Haiti'] = 'Хаити';

$GLOBALS["lang"]['hard_drive_index'] = 'Индекс на твърдия диск';

$GLOBALS["lang"]['Hard Drive Index'] = 'Индекс на твърдия диск';

$GLOBALS["lang"]['hardware_revision'] = 'Преглед на хардуера';

$GLOBALS["lang"]['Hardware Revision'] = 'Преглед на хардуера';

$GLOBALS["lang"]['Has this policy been applied in this organization.'] = 'Тази политика е приложена в тази организация.';

$GLOBALS["lang"]['hash'] = 'Хашиш';

$GLOBALS["lang"]['Hash'] = 'Хашиш';

$GLOBALS["lang"]['Head'] = 'Глава';

$GLOBALS["lang"]['Heard Island and McDonald Islands'] = 'Остров Хърд и острови Макдоналд';

$GLOBALS["lang"]['height'] = 'Височина';

$GLOBALS["lang"]['Height'] = 'Височина';

$GLOBALS["lang"]['Height in RU'] = 'Височина в RU';

$GLOBALS["lang"]['Help'] = 'Помощ!';

$GLOBALS["lang"]['Help and Frequently Asked Questions'] = 'Помощ и често задавани въпроси';

$GLOBALS["lang"]['high'] = 'Високо';

$GLOBALS["lang"]['High'] = 'Високо';

$GLOBALS["lang"]['High Availability'] = 'Висока наличност';

$GLOBALS["lang"]['Holy See (Vatican City State)'] = 'Holy See (държава Ватикан)';

$GLOBALS["lang"]['Home'] = 'У дома';

$GLOBALS["lang"]['home'] = 'У дома';

$GLOBALS["lang"]['Home Area Network'] = 'Мрежа на Начало';

$GLOBALS["lang"]['Honduras'] = 'Хондурас';

$GLOBALS["lang"]['Hong Kong'] = 'Хонконг';

$GLOBALS["lang"]['host'] = 'Хост';

$GLOBALS["lang"]['Host'] = 'Хост';

$GLOBALS["lang"]['hostname'] = 'Име на хост';

$GLOBALS["lang"]['Hostname'] = 'Име на хост';

$GLOBALS["lang"]['hour'] = 'Час';

$GLOBALS["lang"]['Hour'] = 'Час';

$GLOBALS["lang"]['How and Why is Open-AudIT More Secure'] = 'Как и защо Open-AudIT е по-сигурна';

$GLOBALS["lang"]['How long did the command take to execute.'] = 'Колко време отне на командването да изпълни.';

$GLOBALS["lang"]['How long should Nmap wait for a response, per device.'] = 'Колко дълго трябва да чака НМАП за отговор, за устройство.';

$GLOBALS["lang"]['How many circuit feed to this rack.'] = 'Колко вериги се хранят с този багажник.';

$GLOBALS["lang"]['How many policies results in a fail.'] = 'Колко политики водят до провал.';

$GLOBALS["lang"]['How many policies results in a pass.'] = 'Колко политики водят до преминаване.';

$GLOBALS["lang"]['How many power sockets in this rack.'] = 'Колко електрически контакта има тук?';

$GLOBALS["lang"]['How many rack units in height is this rack.'] = 'Колко багажника на височина е този багажник.';

$GLOBALS["lang"]['How often should the collector ask the server for a task.'] = 'Колко често колекционерът трябва да поиска от сървъра задача.';

$GLOBALS["lang"]['How should we select devices to be integrated (using an Attribute, Query or a Group).'] = 'Как трябва да изберем устройства, които да бъдат интегрирани (с помощта на Atribute, Query или група).';

$GLOBALS["lang"]['How the vulnerability is exploited (e.g., Network, Adjacent, Local, Physical).'] = 'Как се експлоатира уязвимостта (напр. Мрежа, Адхасент, Местен, Физичен).';

$GLOBALS["lang"]['How to compare'] = 'Как да се сравни';

$GLOBALS["lang"]['Human-readable explanation of the vulnerability.'] = 'Човешкото обяснение за уязвимостта.';

$GLOBALS["lang"]['Hungary'] = 'Унгария';

$GLOBALS["lang"]['hw_cpe'] = 'Hw Cpe';

$GLOBALS["lang"]['Hw Cpe'] = 'Hw Cpe';

$GLOBALS["lang"]['hyperthreading'] = 'Хиперфибриране';

$GLOBALS["lang"]['Hyperthreading'] = 'Хиперфибриране';

$GLOBALS["lang"]['I have read the EULA.'] = 'Прочетох АУЛА.';

$GLOBALS["lang"]['id'] = 'Лична карта';

$GLOBALS["lang"]['ID'] = 'ID';

$GLOBALS["lang"]['IF'] = 'Ако';

$GLOBALS["lang"]['IOS Version'] = 'Версия IOS';

$GLOBALS["lang"]['IP'] = 'IP';

$GLOBALS["lang"]['ip'] = 'IP';

$GLOBALS["lang"]['IP Address'] = 'IP адрес';

$GLOBALS["lang"]['IP Addresses'] = 'IP адреси';

$GLOBALS["lang"]['IP Last Seen'] = 'IP Последно видян';

$GLOBALS["lang"]['IP Set By'] = 'IP Set By';

$GLOBALS["lang"]['ISO 27001 only.'] = 'Само по ISO 27001.';

$GLOBALS["lang"]['Iceland'] = 'Исландия';

$GLOBALS["lang"]['icon'] = 'Икона';

$GLOBALS["lang"]['Icon'] = 'Икона';

$GLOBALS["lang"]['Icon and Text'] = 'Икона и текст';

$GLOBALS["lang"]['Icon only, text only or icon and text.'] = 'Само Icon, само текст или икона и текст.';

$GLOBALS["lang"]['id_internal'] = 'Id Internal';

$GLOBALS["lang"]['Id Internal'] = 'Id Internal';

$GLOBALS["lang"]['id_number'] = 'Номер';

$GLOBALS["lang"]['Id Number'] = 'Номер';

$GLOBALS["lang"]['identification'] = 'Идентификация';

$GLOBALS["lang"]['Identification'] = 'Идентификация';

$GLOBALS["lang"]['If'] = 'Ако';

$GLOBALS["lang"]['If a port responds with filtered, should we consider it available.'] = 'Ако порта отговаря с филтър, трябва да го считаме за достъпен.';

$GLOBALS["lang"]['If a port responds with open|filtered, should we consider it available.'] = 'Ако порта отговаря с отворен, трябва да го разгледаме на разположение.';

$GLOBALS["lang"]['If a remote device does not exist in the Open-AudIT selected devices, should we delete it from the external system.'] = 'Ако дистанционно устройство не съществува в избраните от Open-AudIT устройства, трябва да го изтрием от външната система.';

$GLOBALS["lang"]['If an Open-AudIT device has been changed, should we update the external system.'] = 'Ако е променено Open-AudIT устройство, трябва да актуализираме външната система.';

$GLOBALS["lang"]['If an Open-AudIT device is not on the external system, should we create it.'] = 'Ако Open-AudIT устройство не е на външната система, трябва да го създадем.';

$GLOBALS["lang"]['If an agent reports its primary IP is in this subnet, perform the actions.'] = 'Ако агент докладва, че основният IP е в тази подмрежа, извършва действията.';

$GLOBALS["lang"]['If any of these (comma seperated, no spaces) ports are detected, assume SSH is running on them and use them for auditing. No need to add this port to the Custom TCP ports - it will be added automatically.'] = 'Ако някое от тези (comma seperated, никакви пространства) портове са открити, предполагам SSH работи върху тях и ги използва за одит. Няма нужда да добавяте този порт към потребителските TCP портове - той ще бъде добавен автоматично.';

$GLOBALS["lang"]['If set, holds a JSON array of specific device columns this user has chosen to see, other than the configuration default.'] = 'Ако е зададен, съдържа JSON масив от специфични колони на устройството, този потребител е избрал да види, освен конфигурацията по подразбиране.';

$GLOBALS["lang"]['If the agent OS family (case insensitive) contains this string, perform the actions.'] = 'Ако семейството агент OS (случай безчувствено) съдържа този низ, изпълнява действията.';

$GLOBALS["lang"]['If the following conditions are met:<br><ul><li>a Role has an assigned ad_group</li><li>an Org has an assigned ad_group</li><li>an LDAP Server has use_roles set to y</li><li>a user exists in LDAP (be it Active Directory or OpenLDAP) and is in the assigned ad_groups</li></ul>That user can log on to Open-AudIT without an account in Open-AudIT needing to be created. Open-AudIT will query the LDAP in question and if the user is in the required groups but not in Open-AudIT, their user attributes (name, full name, email,  roles, orgs, etc) within Open-AudIT will be automatically populated and they will be logged on.<br> <br>'] = 'Ако са изпълнени следните условия:<br/><ul><li>Роля има назначена ad_group</li><li>Орг има определена ad_group</li><li>LDAP Сървърът използва_roles, определени за y</li><li>потребител съществува в LDAP (било то Active Directory или OpenLDAP) и е в възложените ad_groups</li></ul>Този потребител може да влезе в Open-AudIT без да се налага създаване на акаунт в Open-AudIT. Open-AudIT ще зададе въпрос за LDAP и ако потребителят е в изискваните групи, но не в Open-AudIT, техните потребителски атрибути (име, пълно име, име, електронна поща, роли, orgs и т.н.) в рамките на Open-AudIT ще бъдат автоматично населени и ще бъдат вписани.<br/> <br/>';

$GLOBALS["lang"]['If the user logging on to Open-AudIT does not have the access to search LDAP, you can use another account which does have this access.'] = 'Ако потребителят влезе в Open-AudIT няма достъп до търсене на LDAP, можете да използвате друг акаунт, който има този достъп.';

$GLOBALS["lang"]['If this many or more minutes have passed since the device contacted the server, perform the actions.'] = 'Ако са минали толкова много или повече минути откакто устройството се е свързало със сървъра, изпълнявайте действията.';

$GLOBALS["lang"]['If you choose a Collector, it will be scheduled to execute on the next 5 minute boundary.'] = 'Ако изберете колектор, той ще бъде планиран да изпълни на следващата граница от 5 минути.';

$GLOBALS["lang"]['ifadminstatus'] = 'Ifadminstatus';

$GLOBALS["lang"]['Ifadminstatus'] = 'Ifadminstatus';

$GLOBALS["lang"]['iflastchange'] = 'Ако последната промяна';

$GLOBALS["lang"]['Iflastchange'] = 'Ако последната промяна';

$GLOBALS["lang"]['Ignored'] = 'Игнориран';

$GLOBALS["lang"]['image'] = 'Изображение';

$GLOBALS["lang"]['Image'] = 'Изображение';

$GLOBALS["lang"]['Images'] = 'Снимки';

$GLOBALS["lang"]['impact_availability'] = 'Наличност на въздействието';

$GLOBALS["lang"]['Impact Availability'] = 'Наличност на въздействието';

$GLOBALS["lang"]['impact_confidentiality'] = 'Поверителност на въздействието';

$GLOBALS["lang"]['Impact Confidentiality'] = 'Поверителност на въздействието';

$GLOBALS["lang"]['impact_integrity'] = 'Почтеност на въздействието';

$GLOBALS["lang"]['Impact Integrity'] = 'Почтеност на въздействието';

$GLOBALS["lang"]['implementation_notes'] = 'Бележки по изпълнението';

$GLOBALS["lang"]['Implementation Notes'] = 'Бележки по изпълнението';

$GLOBALS["lang"]['Import'] = 'Внос';

$GLOBALS["lang"]['Import Example Data'] = 'Импортиране на данни за пример';

$GLOBALS["lang"]['improvement_opportunities'] = 'Възможности за подобряване';

$GLOBALS["lang"]['Improvement Opportunities'] = 'Възможности за подобряване';

$GLOBALS["lang"]['In'] = 'В';

$GLOBALS["lang"]['Inactive'] = 'Неактивен';

$GLOBALS["lang"]['Include'] = 'Включване';

$GLOBALS["lang"]['Incomplete'] = 'Незавършен';

$GLOBALS["lang"]['Index'] = 'Индекс';

$GLOBALS["lang"]['India'] = 'Индия';

$GLOBALS["lang"]['Indonesia'] = 'Индонезия';

$GLOBALS["lang"]['Info'] = 'Информация';

$GLOBALS["lang"]['Informational'] = 'Информация';

$GLOBALS["lang"]['initial_size'] = 'Начална големина';

$GLOBALS["lang"]['Initial Size'] = 'Начална големина';

$GLOBALS["lang"]['inode'] = 'Инодеум';

$GLOBALS["lang"]['Inode'] = 'Инодеум';

$GLOBALS["lang"]['Input Type'] = 'Вид вход';

$GLOBALS["lang"]['inputs'] = 'Входове';

$GLOBALS["lang"]['Inputs'] = 'Входове';

$GLOBALS["lang"]['Insane'] = 'Лудост.';

$GLOBALS["lang"]['Insert example data and discover all that Open-AudIT can tell you.'] = 'Вмъкване на примерни данни и откриване на всичко, което Open-AudIT може да ви каже.';

$GLOBALS["lang"]['Insert your Purchased license Key'] = 'Вмъкване Закупен лиценз Ключ';

$GLOBALS["lang"]['install'] = 'Инсталиране';

$GLOBALS["lang"]['Install'] = 'Инсталиране';

$GLOBALS["lang"]['install_date'] = 'Дата на инсталиране';

$GLOBALS["lang"]['Install Date'] = 'Дата на инсталиране';

$GLOBALS["lang"]['install_directory'] = 'Инсталиране на директория';

$GLOBALS["lang"]['Install Directory'] = 'Инсталиране на директория';

$GLOBALS["lang"]['Install OpenScap if required'] = 'Инсталиране на OpenScap, ако е необходимо';

$GLOBALS["lang"]['install_source'] = 'Инсталиране на източник';

$GLOBALS["lang"]['Install Source'] = 'Инсталиране на източник';

$GLOBALS["lang"]['installed_by'] = 'Инсталирано от';

$GLOBALS["lang"]['Installed By'] = 'Инсталирано от';

$GLOBALS["lang"]['installed_on'] = 'Инсталирано';

$GLOBALS["lang"]['Installed On'] = 'Инсталирано';

$GLOBALS["lang"]['Installing on Linux'] = 'Инсталиране на Linux';

$GLOBALS["lang"]['Installing on MacOS'] = 'Инсталиране на MacOS';

$GLOBALS["lang"]['Installing on Windows'] = 'Инсталиране на Windows';

$GLOBALS["lang"]['instance'] = 'Инстанция';

$GLOBALS["lang"]['Instance'] = 'Инстанция';

$GLOBALS["lang"]['instance_ident'] = 'Идентификация';

$GLOBALS["lang"]['Instance Ident'] = 'Идентификация';

$GLOBALS["lang"]['instance_options'] = 'Опции за прилагане';

$GLOBALS["lang"]['Instance Options'] = 'Опции за прилагане';

$GLOBALS["lang"]['instance_provider'] = 'Доставчик на примери';

$GLOBALS["lang"]['Instance Provider'] = 'Доставчик на примери';

$GLOBALS["lang"]['instance_reservation_ident'] = 'Резерва I-PT-1 Идентификация';

$GLOBALS["lang"]['Instance Reservation Ident'] = 'Резерва I-PT-1 Идентификация';

$GLOBALS["lang"]['instance_state'] = 'Държава на прилагане';

$GLOBALS["lang"]['Instance State'] = 'Държава на прилагане';

$GLOBALS["lang"]['instance_tags'] = 'Tags';

$GLOBALS["lang"]['Instance Tags'] = 'Tags';

$GLOBALS["lang"]['instance_type'] = 'Тип пример';

$GLOBALS["lang"]['Instance Type'] = 'Тип пример';

$GLOBALS["lang"]['Integer'] = 'Integer';

$GLOBALS["lang"]['Integration'] = 'Интеграция';

$GLOBALS["lang"]['integrations'] = 'Интеграция';

$GLOBALS["lang"]['Integrations'] = 'Интеграция';

$GLOBALS["lang"]['integrations_id'] = 'Идентификационен код на интеграцията';

$GLOBALS["lang"]['Integrations ID'] = 'Идентификационен код на интеграцията';

$GLOBALS["lang"]['integrations_log'] = 'Дневник за интеграция';

$GLOBALS["lang"]['Integrations Log'] = 'Дневник за интеграция';

$GLOBALS["lang"]['interface'] = 'Интерфейс';

$GLOBALS["lang"]['Interface'] = 'Интерфейс';

$GLOBALS["lang"]['interface_id'] = 'Идентификационен код на интерфейса';

$GLOBALS["lang"]['Interface ID'] = 'Идентификационен код на интерфейса';

$GLOBALS["lang"]['interface_type'] = 'Тип интерфейс';

$GLOBALS["lang"]['Interface Type'] = 'Тип интерфейс';

$GLOBALS["lang"]['Internal'] = 'Вътрешен';

$GLOBALS["lang"]['Internal Field Name'] = 'Име на вътрешното поле';

$GLOBALS["lang"]['Internal ID'] = 'Вътрешен идентификационен код';

$GLOBALS["lang"]['Internal JSON array of valid access tokens for this user.'] = 'Вътрешен JSON масив от валидни знаци за достъп за този потребител.';

$GLOBALS["lang"]['Introduction'] = 'Въведение';

$GLOBALS["lang"]['invoice'] = 'Фактура';

$GLOBALS["lang"]['Invoice'] = 'Фактура';

$GLOBALS["lang"]['invoice_id'] = 'Идентификация на фактурата';

$GLOBALS["lang"]['Invoice ID'] = 'Идентификация на фактурата';

$GLOBALS["lang"]['invoice_item'] = 'Фактура';

$GLOBALS["lang"]['Invoice Item'] = 'Фактура';

$GLOBALS["lang"]['ios_version'] = 'Версия на Ios';

$GLOBALS["lang"]['Ios Version'] = 'Версия на Ios';

$GLOBALS["lang"]['ip_address_external_a'] = 'Ip Адрес Външно A';

$GLOBALS["lang"]['Ip Address External A'] = 'Ip Адрес Външно A';

$GLOBALS["lang"]['ip_address_external_b'] = 'Ip Address Външен B';

$GLOBALS["lang"]['Ip Address External B'] = 'Ip Address Външен B';

$GLOBALS["lang"]['ip_address_internal_a'] = 'Ip Address Internal A';

$GLOBALS["lang"]['Ip Address Internal A'] = 'Ip Address Internal A';

$GLOBALS["lang"]['ip_address_internal_b'] = 'Ip Address Internal B';

$GLOBALS["lang"]['Ip Address Internal B'] = 'Ip Address Internal B';

$GLOBALS["lang"]['ip_all_count'] = 'Ip All Count';

$GLOBALS["lang"]['Ip All Count'] = 'Ip All Count';

$GLOBALS["lang"]['ip_audited_count'] = 'Ip Audited Count';

$GLOBALS["lang"]['Ip Audited Count'] = 'Ip Audited Count';

$GLOBALS["lang"]['ip_discovered_count'] = 'Ip Открит брой';

$GLOBALS["lang"]['Ip Discovered Count'] = 'Ip Открит брой';

$GLOBALS["lang"]['ip_enabled'] = 'Включен';

$GLOBALS["lang"]['Ip Enabled'] = 'Включен';

$GLOBALS["lang"]['ip_responding_count'] = 'Отговорен брой';

$GLOBALS["lang"]['Ip Responding Count'] = 'Отговорен брой';

$GLOBALS["lang"]['ip_scanned_count'] = 'Ип сканиран брой';

$GLOBALS["lang"]['Ip Scanned Count'] = 'Ип сканиран брой';

$GLOBALS["lang"]['Iran'] = 'Иран';

$GLOBALS["lang"]['Iraq'] = 'Ирак';

$GLOBALS["lang"]['Ireland'] = 'Ирландия';

$GLOBALS["lang"]['Is FRU'] = 'Е FRU';

$GLOBALS["lang"]['is_fru'] = 'Е Фру';

$GLOBALS["lang"]['Is Fru'] = 'Е Фру';

$GLOBALS["lang"]['Is the NMIS server local (on this Open-AudIT server) or remote?'] = 'Дали NMIS сървърът е местен (на този Open-AudIT сървър) или отдалечен?';

$GLOBALS["lang"]['Is this account active? If set to <code>n</code>, the user cannot logon.'] = 'Тази сметка активна ли е? Ако е настроено <code>n</code>, Потребителят не може да се изразява.';

$GLOBALS["lang"]['Is this query restricted to licensed customers.'] = 'Тази заявка е ограничена до лицензирани клиенти.';

$GLOBALS["lang"]['Is this task enabled (y/n).'] = 'Тази задача включена ли е (y/n).';

$GLOBALS["lang"]['Isle of Man'] = 'Остров Ман';

$GLOBALS["lang"]['Israel'] = 'Израел';

$GLOBALS["lang"]['Issue'] = 'Издаване';

$GLOBALS["lang"]['issuer'] = 'Депозити';

$GLOBALS["lang"]['Issuer'] = 'Депозити';

$GLOBALS["lang"]['issuer_name'] = 'Наименование на емитента';

$GLOBALS["lang"]['Issuer Name'] = 'Наименование на емитента';

$GLOBALS["lang"]['Issues'] = 'Въпроси';

$GLOBALS["lang"]['Italy'] = 'Италия';

$GLOBALS["lang"]['Items not in Baseline'] = 'Елементи, които не са на изходно ниво';

$GLOBALS["lang"]['JSON'] = 'JSON';

$GLOBALS["lang"]['JSON to Import'] = 'JSON за внос';

$GLOBALS["lang"]['Jamaica'] = 'Ямайка';

$GLOBALS["lang"]['January'] = 'Януари';

$GLOBALS["lang"]['Japan'] = 'Япония';

$GLOBALS["lang"]['Jersey'] = 'Джърси';

$GLOBALS["lang"]['Jordan'] = 'Йордания';

$GLOBALS["lang"]['July'] = 'Юли';

$GLOBALS["lang"]['June'] = 'Юни';

$GLOBALS["lang"]['Kazakhstan'] = 'Казахстан';

$GLOBALS["lang"]['Kenya'] = 'Кения';

$GLOBALS["lang"]['kernel_version'] = 'Версия на корнела';

$GLOBALS["lang"]['Kernel Version'] = 'Версия на корнела';

$GLOBALS["lang"]['Key'] = 'Ключ';

$GLOBALS["lang"]['Key Password (optional)'] = 'Парола с ключ (по избор)';

$GLOBALS["lang"]['keys'] = 'Ключове';

$GLOBALS["lang"]['Keys'] = 'Ключове';

$GLOBALS["lang"]['Kiribati'] = 'Кирибати';

$GLOBALS["lang"]['Korea'] = 'Корея';

$GLOBALS["lang"]['Kuwait'] = 'Кувейт';

$GLOBALS["lang"]['Kyrgyz Republic'] = 'Киргизка република';

$GLOBALS["lang"]['lang'] = 'Ланг';

$GLOBALS["lang"]['Lang'] = 'Ланг';

$GLOBALS["lang"]['language'] = 'Език';

$GLOBALS["lang"]['Language'] = 'Език';

$GLOBALS["lang"]['Lao'] = 'Лао.';

$GLOBALS["lang"]['last_changed'] = 'Последна промяна';

$GLOBALS["lang"]['Last Changed'] = 'Последна промяна';

$GLOBALS["lang"]['last_finished'] = 'Последно завършено';

$GLOBALS["lang"]['Last Finished'] = 'Последно завършено';

$GLOBALS["lang"]['last_logon'] = 'Последен запис';

$GLOBALS["lang"]['Last Logon'] = 'Последен запис';

$GLOBALS["lang"]['Last Name'] = 'Фамилия';

$GLOBALS["lang"]['last_os_update'] = 'Последна актуализация на Os';

$GLOBALS["lang"]['Last Os Update'] = 'Последна актуализация на Os';

$GLOBALS["lang"]['last_result'] = 'Последен резултат';

$GLOBALS["lang"]['Last Result'] = 'Последен резултат';

$GLOBALS["lang"]['last_run'] = 'Последен пробег';

$GLOBALS["lang"]['Last Run'] = 'Последен пробег';

$GLOBALS["lang"]['last_seen'] = 'Последно видян';

$GLOBALS["lang"]['Last Seen'] = 'Последно видян';

$GLOBALS["lang"]['last_seen_by'] = 'Последно видян От';

$GLOBALS["lang"]['Last Seen By'] = 'Последно видян От';

$GLOBALS["lang"]['last_user'] = 'Последен потребител';

$GLOBALS["lang"]['Last User'] = 'Последен потребител';

$GLOBALS["lang"]['lastModified'] = 'Последна промяна';

$GLOBALS["lang"]['LastModified'] = 'Последна промяна';

$GLOBALS["lang"]['latitude'] = 'Географска ширина';

$GLOBALS["lang"]['Latitude'] = 'Географска ширина';

$GLOBALS["lang"]['Latvia'] = 'Латвия';

$GLOBALS["lang"]['Layout'] = 'Подреждане';

$GLOBALS["lang"]['ldap'] = 'Ldap';

$GLOBALS["lang"]['Ldap'] = 'Ldap';

$GLOBALS["lang"]['ldap_base_dn'] = 'Ldap Base Dn';

$GLOBALS["lang"]['Ldap Base Dn'] = 'Ldap Base Dn';

$GLOBALS["lang"]['ldap_dn_account'] = 'Ldap Dn Сметка';

$GLOBALS["lang"]['Ldap Dn Account'] = 'Ldap Dn Сметка';

$GLOBALS["lang"]['ldap_dn_password'] = 'Ldap Dn Парола';

$GLOBALS["lang"]['Ldap Dn Password'] = 'Ldap Dn Парола';

$GLOBALS["lang"]['Learn About'] = 'Научи за';

$GLOBALS["lang"]['Learn More'] = 'Научете повече';

$GLOBALS["lang"]['lease_expiry_date'] = 'Дата на изтичане на срока на лизинг';

$GLOBALS["lang"]['Lease Expiry Date'] = 'Дата на изтичане на срока на лизинг';

$GLOBALS["lang"]['Lebanon'] = 'Ливан';

$GLOBALS["lang"]['legal_requirements'] = 'Правни изисквания';

$GLOBALS["lang"]['Legal Requirements'] = 'Правни изисквания';

$GLOBALS["lang"]['Lesotho'] = 'Лесото';

$GLOBALS["lang"]['Less Than'] = 'По- малко от';

$GLOBALS["lang"]['Less Than or Equals'] = 'По-малко или равно';

$GLOBALS["lang"]['level'] = 'Ниво';

$GLOBALS["lang"]['Level'] = 'Ниво';

$GLOBALS["lang"]['Level of privileges needed to exploit (None, Low, High).'] = 'Ниво на привилегиите, необходими за експлоатиране (нищо, ниско, високо).';

$GLOBALS["lang"]['Liberia'] = 'Либерия';

$GLOBALS["lang"]['Libyan Arab Jamahiriya'] = 'Либийска арабска Джамахирия';

$GLOBALS["lang"]['License'] = 'Лиценз';

$GLOBALS["lang"]['License Key'] = 'Ключ за лиценза';

$GLOBALS["lang"]['License Required'] = 'Изисква се лиценз';

$GLOBALS["lang"]['licenses'] = 'Лицензии';

$GLOBALS["lang"]['Licenses'] = 'Лицензии';

$GLOBALS["lang"]['Liechtenstein'] = 'Лихтенщайн';

$GLOBALS["lang"]['Like'] = 'Като';

$GLOBALS["lang"]['limit'] = 'Граници';

$GLOBALS["lang"]['Limit'] = 'Граници';

$GLOBALS["lang"]['Limit the query to the first X items.'] = 'Ограничи заявката до първите X елементи.';

$GLOBALS["lang"]['Limited to 100 rows.'] = 'Ограничени до 100 реда.';

$GLOBALS["lang"]['line_amount'] = 'Размер на реда';

$GLOBALS["lang"]['Line Amount'] = 'Размер на реда';

$GLOBALS["lang"]['Line Graph'] = 'Линия';

$GLOBALS["lang"]['line_number_a'] = 'Линия номер А';

$GLOBALS["lang"]['Line Number A'] = 'Линия номер А';

$GLOBALS["lang"]['line_number_b'] = 'Линия No B';

$GLOBALS["lang"]['Line Number B'] = 'Линия No B';

$GLOBALS["lang"]['line_text'] = 'Текст на линия';

$GLOBALS["lang"]['Line Text'] = 'Текст на линия';

$GLOBALS["lang"]['link'] = 'Връзка';

$GLOBALS["lang"]['Link'] = 'Връзка';

$GLOBALS["lang"]['Link (Advanced)'] = 'Връзка (Advanced)';

$GLOBALS["lang"]['Linked Files'] = 'Свързани файлове';

$GLOBALS["lang"]['links'] = 'Връзки';

$GLOBALS["lang"]['Links'] = 'Връзки';

$GLOBALS["lang"]['Links this discovery to the associated cloud (if required). Links to <code>clouds.id</code>.'] = 'Връзки това откритие към свързания облак (ако е необходимо). Връзки към <code>clouds.id</code>.';

$GLOBALS["lang"]['Links to <code>discovery_scan_options.id</code>.'] = 'Връзки към <code>discovery_scan_options.id</code>.';

$GLOBALS["lang"]['Links to <code>standards.id</code>'] = 'Връзки към <code>standards.id</code>';

$GLOBALS["lang"]['Links to <standards_policies.id</code>'] = 'Връзки към <standards_policies.id< code=""></standards_policies.id<>';

$GLOBALS["lang"]['Linux'] = 'Linux';

$GLOBALS["lang"]['List'] = 'Списък';

$GLOBALS["lang"]['list_table_format'] = 'Формат на таблица в списъка';

$GLOBALS["lang"]['List Table Format'] = 'Формат на таблица в списъка';

$GLOBALS["lang"]['Lithuania'] = 'Литва';

$GLOBALS["lang"]['Load Balancing'] = 'Балансиране на товара';

$GLOBALS["lang"]['Local'] = 'Местен';

$GLOBALS["lang"]['Local Area Network'] = 'Локална мрежа';

$GLOBALS["lang"]['local_port'] = 'Местно пристанище';

$GLOBALS["lang"]['Local Port'] = 'Местно пристанище';

$GLOBALS["lang"]['Localhost'] = 'Локално домакинство';

$GLOBALS["lang"]['Localisation'] = 'Локализиране';

$GLOBALS["lang"]['Location'] = 'Местоположение';

$GLOBALS["lang"]['Location A'] = 'Местоположение А';

$GLOBALS["lang"]['Location B'] = 'Местоположение Б';

$GLOBALS["lang"]['location_id'] = 'Идентификация на местоположението';

$GLOBALS["lang"]['Location ID'] = 'Идентификация на местоположението';

$GLOBALS["lang"]['location_id_a'] = 'Местонахождение ID A';

$GLOBALS["lang"]['Location ID A'] = 'Местонахождение ID A';

$GLOBALS["lang"]['location_id_b'] = 'Местонахождение ID B';

$GLOBALS["lang"]['Location ID B'] = 'Местонахождение ID B';

$GLOBALS["lang"]['location_latitude'] = 'Географска ширина';

$GLOBALS["lang"]['Location Latitude'] = 'Географска ширина';

$GLOBALS["lang"]['location_level'] = 'Ниво на местоположението';

$GLOBALS["lang"]['Location Level'] = 'Ниво на местоположението';

$GLOBALS["lang"]['location_longitude'] = 'Дължина на местоположението';

$GLOBALS["lang"]['Location Longitude'] = 'Дължина на местоположението';

$GLOBALS["lang"]['location_rack'] = 'Местоположение Rack';

$GLOBALS["lang"]['Location Rack'] = 'Местоположение Rack';

$GLOBALS["lang"]['location_rack_position'] = 'Местоположение Rack Позиция';

$GLOBALS["lang"]['Location Rack Position'] = 'Местоположение Rack Позиция';

$GLOBALS["lang"]['location_rack_size'] = 'Размер на раницата';

$GLOBALS["lang"]['Location Rack Size'] = 'Размер на раницата';

$GLOBALS["lang"]['location_room'] = 'Локация стая';

$GLOBALS["lang"]['Location Room'] = 'Локация стая';

$GLOBALS["lang"]['location_suite'] = 'Апартамент за местоположение';

$GLOBALS["lang"]['Location Suite'] = 'Апартамент за местоположение';

$GLOBALS["lang"]['locations'] = 'Местоположение';

$GLOBALS["lang"]['Locations'] = 'Местоположение';

$GLOBALS["lang"]['Locations in this'] = 'Местоположение в това';

$GLOBALS["lang"]['log'] = 'Дневник';

$GLOBALS["lang"]['Log'] = 'Дневник';

$GLOBALS["lang"]['log_format'] = 'Формат на дневника';

$GLOBALS["lang"]['Log Format'] = 'Формат на дневника';

$GLOBALS["lang"]['log_path'] = 'Път на дневника';

$GLOBALS["lang"]['Log Path'] = 'Път на дневника';

$GLOBALS["lang"]['log_rotation'] = 'Завъртане на дневника';

$GLOBALS["lang"]['Log Rotation'] = 'Завъртане на дневника';

$GLOBALS["lang"]['log_status'] = 'Състояние на дневника';

$GLOBALS["lang"]['Log Status'] = 'Състояние на дневника';

$GLOBALS["lang"]['Logical Cores '] = 'Логически ядра ';

$GLOBALS["lang"]['logical_count'] = 'Логически брой';

$GLOBALS["lang"]['Logical Count'] = 'Логически брой';

$GLOBALS["lang"]['Logout'] = 'Изход';

$GLOBALS["lang"]['Logs'] = 'Дневници';

$GLOBALS["lang"]['longitude'] = 'Географска дължина';

$GLOBALS["lang"]['Longitude'] = 'Географска дължина';

$GLOBALS["lang"]['low'] = 'Ниско';

$GLOBALS["lang"]['Low'] = 'Ниско';

$GLOBALS["lang"]['Lower Case'] = 'Долен панел';

$GLOBALS["lang"]['Luxembourg'] = 'Люксембург';

$GLOBALS["lang"]['MAC Address'] = 'MAC адрес';

$GLOBALS["lang"]['MAC Manufacturer'] = 'MAC Производител';

$GLOBALS["lang"]['mac'] = 'Mac';

$GLOBALS["lang"]['Mac'] = 'Mac';

$GLOBALS["lang"]['Mac Address'] = 'Адрес на Mac';

$GLOBALS["lang"]['MacOS'] = 'MacOS';

$GLOBALS["lang"]['Macao'] = 'Макао';

$GLOBALS["lang"]['Macedonia'] = 'Македония';

$GLOBALS["lang"]['Madagascar'] = 'Мадагаскар';

$GLOBALS["lang"]['maintenance_expires'] = 'Изтича поддръжка';

$GLOBALS["lang"]['Maintenance Expires'] = 'Изтича поддръжка';

$GLOBALS["lang"]['Make My Default Dashboard'] = 'Make My Dashboard';

$GLOBALS["lang"]['Make this install a Collector'] = 'Направете това инсталиране на колектор';

$GLOBALS["lang"]['Malawi'] = 'Малави';

$GLOBALS["lang"]['Malaysia'] = 'Малайзия';

$GLOBALS["lang"]['Maldives'] = 'Малдиви';

$GLOBALS["lang"]['Mali'] = 'Мали';

$GLOBALS["lang"]['Malta'] = 'Малта';

$GLOBALS["lang"]['Manage'] = 'Управление';

$GLOBALS["lang"]['Manage Licenses'] = 'Управление на лицензите';

$GLOBALS["lang"]['Manage in NMIS'] = 'Управление в NMIS';

$GLOBALS["lang"]['Managed'] = 'Управление';

$GLOBALS["lang"]['managed_by'] = 'Управляван от';

$GLOBALS["lang"]['Managed By'] = 'Управляван от';

$GLOBALS["lang"]['Manual Input'] = 'Ръчен вход';

$GLOBALS["lang"]['Manually set by user, defaults to Production.'] = 'Ръчно настроен от потребителя, по подразбиране към производството.';

$GLOBALS["lang"]['Manually set by user.'] = 'Ръчно настроен от потребителя.';

$GLOBALS["lang"]['manufacture_date'] = 'Дата на производство';

$GLOBALS["lang"]['Manufacture Date'] = 'Дата на производство';

$GLOBALS["lang"]['manufacturer'] = 'Производител';

$GLOBALS["lang"]['Manufacturer'] = 'Производител';

$GLOBALS["lang"]['manufacturer_code'] = 'Код на производителя';

$GLOBALS["lang"]['Manufacturer Code'] = 'Код на производителя';

$GLOBALS["lang"]['Map'] = 'Карта';

$GLOBALS["lang"]['maps'] = 'Карти';

$GLOBALS["lang"]['Maps'] = 'Карти';

$GLOBALS["lang"]['March'] = 'Март';

$GLOBALS["lang"]['Marshall Islands'] = 'Маршалови острови';

$GLOBALS["lang"]['Martinique'] = 'Мартиника';

$GLOBALS["lang"]['mask'] = 'Маска';

$GLOBALS["lang"]['Mask'] = 'Маска';

$GLOBALS["lang"]['Match'] = 'Мач';

$GLOBALS["lang"]['match_options'] = 'Настройки на мача';

$GLOBALS["lang"]['Match Options'] = 'Настройки на мача';

$GLOBALS["lang"]['match_string'] = 'Мач Струн';

$GLOBALS["lang"]['Match String'] = 'Мач Струн';

$GLOBALS["lang"]['Matching Attribute'] = 'Съвпадение на атрибута';

$GLOBALS["lang"]['maturity_level'] = 'Ниво на падеж';

$GLOBALS["lang"]['Maturity Level'] = 'Ниво на падеж';

$GLOBALS["lang"]['maturity_score'] = 'Падежен резултат';

$GLOBALS["lang"]['Maturity Score'] = 'Падежен резултат';

$GLOBALS["lang"]['Mauritania'] = 'Мавритания';

$GLOBALS["lang"]['Mauritius'] = 'Мавриций';

$GLOBALS["lang"]['max_file_size'] = 'Максимален размер на файла';

$GLOBALS["lang"]['Max File Size'] = 'Максимален размер на файла';

$GLOBALS["lang"]['Max Length'] = 'Максимална дължина';

$GLOBALS["lang"]['max_size'] = 'Максимален размер';

$GLOBALS["lang"]['Max Size'] = 'Максимален размер';

$GLOBALS["lang"]['May'] = 'Май';

$GLOBALS["lang"]['Mayotte'] = 'Майот';

$GLOBALS["lang"]['Measures the likelihood of the vulnerability being attacked, and is based on the current state of exploit techniques, exploit code availability, or active, “in-the-wild” exploitation.'] = 'Мерки за вероятността уязвимостта да бъде атакувана и се основава на текущото състояние на техниките за експлоатация, разполагаемостта на кодовете за експлоатация или активната, ин-в-в-ди-на-операция.';

$GLOBALS["lang"]['medium'] = 'Среден';

$GLOBALS["lang"]['Medium'] = 'Среден';

$GLOBALS["lang"]['members'] = 'Членове';

$GLOBALS["lang"]['Members'] = 'Членове';

$GLOBALS["lang"]['memory'] = 'Памет';

$GLOBALS["lang"]['Memory'] = 'Памет';

$GLOBALS["lang"]['memory_count'] = 'Брой памети';

$GLOBALS["lang"]['Memory Count'] = 'Брой памети';

$GLOBALS["lang"]['memory_slot_count'] = 'Броя на слот паметта';

$GLOBALS["lang"]['Memory Slot Count'] = 'Броя на слот паметта';

$GLOBALS["lang"]['menu_category'] = 'Категория Меню';

$GLOBALS["lang"]['Menu Category'] = 'Категория Меню';

$GLOBALS["lang"]['menu_display'] = 'МенюName';

$GLOBALS["lang"]['Menu Display'] = 'МенюName';

$GLOBALS["lang"]['message'] = 'Съобщение';

$GLOBALS["lang"]['Message'] = 'Съобщение';

$GLOBALS["lang"]['meta_last_changed'] = 'Meta последно променен';

$GLOBALS["lang"]['Meta Last Changed'] = 'Meta последно променен';

$GLOBALS["lang"]['metric'] = 'Метрик';

$GLOBALS["lang"]['Metric'] = 'Метрик';

$GLOBALS["lang"]['Metropolitan Area Network'] = 'Метрополитическа мрежа';

$GLOBALS["lang"]['Mexico'] = 'Мексико';

$GLOBALS["lang"]['Micronesia'] = 'Микронезия';

$GLOBALS["lang"]['Microsoft Azure Fields'] = 'Microsoft Azure Fields';

$GLOBALS["lang"]['microtime'] = 'Микровреме';

$GLOBALS["lang"]['Microtime'] = 'Микровреме';

$GLOBALS["lang"]['minute'] = 'Минутка';

$GLOBALS["lang"]['Minute'] = 'Минутка';

$GLOBALS["lang"]['Minutes Since last Audit are Greater than'] = 'Протоколи от последния одит са по-големи от';

$GLOBALS["lang"]['model'] = 'Образец';

$GLOBALS["lang"]['Model'] = 'Образец';

$GLOBALS["lang"]['model_family'] = 'Образец на семейство';

$GLOBALS["lang"]['Model Family'] = 'Образец на семейство';

$GLOBALS["lang"]['module'] = 'Модул';

$GLOBALS["lang"]['Module'] = 'Модул';

$GLOBALS["lang"]['module_index'] = 'Модулен индекс';

$GLOBALS["lang"]['Module Index'] = 'Модулен индекс';

$GLOBALS["lang"]['Modules'] = 'Модули';

$GLOBALS["lang"]['Moldova'] = 'Молдова';

$GLOBALS["lang"]['Monaco'] = 'Монако';

$GLOBALS["lang"]['Monday'] = 'Понеделник';

$GLOBALS["lang"]['Mongolia'] = 'Монголия';

$GLOBALS["lang"]['monitor'] = 'Монитор';

$GLOBALS["lang"]['Monitor'] = 'Монитор';

$GLOBALS["lang"]['Montenegro'] = 'Черна гора';

$GLOBALS["lang"]['month'] = 'Месец';

$GLOBALS["lang"]['Month'] = 'Месец';

$GLOBALS["lang"]['Montserrat'] = 'Монсерат';

$GLOBALS["lang"]['Morocco'] = 'Мароко';

$GLOBALS["lang"]['motherboard'] = 'Детска дъска';

$GLOBALS["lang"]['Motherboard'] = 'Детска дъска';

$GLOBALS["lang"]['mount_point'] = 'Точка на монтиране';

$GLOBALS["lang"]['Mount Point'] = 'Точка на монтиране';

$GLOBALS["lang"]['mount_type'] = 'Тип монтаж';

$GLOBALS["lang"]['Mount Type'] = 'Тип монтаж';

$GLOBALS["lang"]['Mozambique'] = 'Мозамбик';

$GLOBALS["lang"]['Must Respond to Ping'] = 'Трябва да отговаряме на Пинг';

$GLOBALS["lang"]['Myanmar'] = 'Мианмар';

$GLOBALS["lang"]['N+1'] = 'N+1';

$GLOBALS["lang"]['N+M'] = 'N+M';

$GLOBALS["lang"]['N-to-1'] = 'N-to-1';

$GLOBALS["lang"]['N-to-N'] = 'N-to-N';

$GLOBALS["lang"]['NMIS Business Service'] = 'NMIS Business Service';

$GLOBALS["lang"]['NMIS Customer'] = 'NMIS клиент';

$GLOBALS["lang"]['NMIS Device Options'] = 'Настройки на NMIS устройство';

$GLOBALS["lang"]['NMIS Device Selection'] = 'Избор на устройство за NMIS';

$GLOBALS["lang"]['NMIS Field Name'] = 'Име на полето NMIS';

$GLOBALS["lang"]['NMIS Field Type'] = 'Тип поле NMIS';

$GLOBALS["lang"]['NMIS Group'] = 'NMIS Group';

$GLOBALS["lang"]['NMIS Poller'] = 'NMIS Poller';

$GLOBALS["lang"]['NMIS Role'] = 'NMIS Роля';

$GLOBALS["lang"]['NOTE - You can prevent plain text credentials being displayed below by setting the configuration item for <code>decrypt_credentials</code> to <code>n</code>.'] = 'ЗАБЕЛЕЖКА - Можете да предотвратите показването по-долу на обикновените текстови атрибути чрез настройка на конфигурационния елемент за <code>decrypt_credentials</code> до <code>n</code>.';

$GLOBALS["lang"]['name'] = 'Име';

$GLOBALS["lang"]['Name'] = 'Име';

$GLOBALS["lang"]['Namibia'] = 'Намибия';

$GLOBALS["lang"]['Nauru'] = 'Науру.';

$GLOBALS["lang"]['Nepal'] = 'Непал';

$GLOBALS["lang"]['net_index'] = 'Нетен индекс';

$GLOBALS["lang"]['Net Index'] = 'Нетен индекс';

$GLOBALS["lang"]['Netherlands Antilles'] = 'Нидерландия Антили';

$GLOBALS["lang"]['Netherlands the'] = 'Нидерландия';

$GLOBALS["lang"]['netmask'] = 'Нетна маска';

$GLOBALS["lang"]['Netmask'] = 'Нетна маска';

$GLOBALS["lang"]['netstat'] = 'Netstat';

$GLOBALS["lang"]['Netstat'] = 'Netstat';

$GLOBALS["lang"]['Netstat Policies'] = 'Политики за Netstat';

$GLOBALS["lang"]['Network'] = 'Мрежа';

$GLOBALS["lang"]['network_address'] = 'Адрес на мрежата';

$GLOBALS["lang"]['Network Address'] = 'Адрес на мрежата';

$GLOBALS["lang"]['network_domain'] = 'Мрежов домейн';

$GLOBALS["lang"]['Network Domain'] = 'Мрежов домейн';

$GLOBALS["lang"]['Network Types'] = 'Видове мрежи';

$GLOBALS["lang"]['networks'] = 'Мрежи';

$GLOBALS["lang"]['Networks'] = 'Мрежи';

$GLOBALS["lang"]['Networks Generated By'] = 'Мрежи, генерирани от';

$GLOBALS["lang"]['Networks using a CIDR Mask of'] = 'Мрежи, използващи маска на CIDR';

$GLOBALS["lang"]['New Building Name'] = 'Ново име на сградата';

$GLOBALS["lang"]['New Caledonia'] = 'Нова Каледония';

$GLOBALS["lang"]['New Floor Name'] = 'Име на етажа';

$GLOBALS["lang"]['New Room Name'] = 'Име на нова стая';

$GLOBALS["lang"]['New Row Name'] = 'Име на нов ред';

$GLOBALS["lang"]['New Zealand'] = 'Нова Зеландия';

$GLOBALS["lang"]['News'] = 'Новини';

$GLOBALS["lang"]['next_hop'] = 'Следващ скок';

$GLOBALS["lang"]['Next Hop'] = 'Следващ скок';

$GLOBALS["lang"]['next_run'] = 'Следващо бягане';

$GLOBALS["lang"]['Next Run'] = 'Следващо бягане';

$GLOBALS["lang"]['Nicaragua'] = 'Никарагуа';

$GLOBALS["lang"]['Niger'] = 'Нигер';

$GLOBALS["lang"]['Nigeria'] = 'Нигерия';

$GLOBALS["lang"]['Niue'] = 'Ниуе';

$GLOBALS["lang"]['nmap'] = 'Nmap';

$GLOBALS["lang"]['Nmap'] = 'Nmap';

$GLOBALS["lang"]['Nmap Port Scanning Responses'] = 'Отговори при сканиране на портове';

$GLOBALS["lang"]['nmap_tcp_ports'] = 'Nmap Tcp Ports';

$GLOBALS["lang"]['Nmap Tcp Ports'] = 'Nmap Tcp Ports';

$GLOBALS["lang"]['nmap_udp_ports'] = 'Nmap Udp Ports';

$GLOBALS["lang"]['Nmap Udp Ports'] = 'Nmap Udp Ports';

$GLOBALS["lang"]['nmis_business_service'] = 'Nmis Business Service';

$GLOBALS["lang"]['Nmis Business Service'] = 'Nmis Business Service';

$GLOBALS["lang"]['nmis_customer'] = 'Nmis клиент';

$GLOBALS["lang"]['Nmis Customer'] = 'Nmis клиент';

$GLOBALS["lang"]['nmis_group'] = 'Nmis Group';

$GLOBALS["lang"]['Nmis Group'] = 'Nmis Group';

$GLOBALS["lang"]['nmis_manage'] = 'Управление на Nmis';

$GLOBALS["lang"]['Nmis Manage'] = 'Управление на Nmis';

$GLOBALS["lang"]['nmis_name'] = 'Име Nmis';

$GLOBALS["lang"]['Nmis Name'] = 'Име Nmis';

$GLOBALS["lang"]['nmis_notes'] = 'Бележки Nmis';

$GLOBALS["lang"]['Nmis Notes'] = 'Бележки Nmis';

$GLOBALS["lang"]['nmis_poller'] = 'Nmis Poller';

$GLOBALS["lang"]['Nmis Poller'] = 'Nmis Poller';

$GLOBALS["lang"]['nmis_poller_uuid'] = 'Nmis Poller Uuid';

$GLOBALS["lang"]['Nmis Poller Uuid'] = 'Nmis Poller Uuid';

$GLOBALS["lang"]['nmis_role'] = 'Nmis Role';

$GLOBALS["lang"]['Nmis Role'] = 'Nmis Role';

$GLOBALS["lang"]['No'] = 'Не.';

$GLOBALS["lang"]['No Devices Returned'] = 'Няма върнати устройства';

$GLOBALS["lang"]['No Google Maps API Key present, you will not be able to display the map.'] = 'No Google Maps API Ключът присъства, няма да можете да покажете картата.';

$GLOBALS["lang"]['No License for Professional or Enterprise'] = 'Без лиценз за професионално или предприятие';

$GLOBALS["lang"]['No Results'] = 'Няма резултати';

$GLOBALS["lang"]['No data in License Key'] = 'Няма данни в лицензния ключ';

$GLOBALS["lang"]['No database upgrade required at this time.'] = 'Засега не се изисква подобрение на базата данни.';

$GLOBALS["lang"]['Node'] = 'Възел';

$GLOBALS["lang"]['None'] = 'Няма';

$GLOBALS["lang"]['Norfolk Island'] = 'Остров Норфолк';

$GLOBALS["lang"]['Normal'] = 'Нормално';

$GLOBALS["lang"]['Northern Mariana Islands'] = 'Северни Мариански острови';

$GLOBALS["lang"]['Norway'] = 'Норвегия';

$GLOBALS["lang"]['Not Applicable'] = 'Неприложимо';

$GLOBALS["lang"]['Not Checked'] = 'Не се проверява';

$GLOBALS["lang"]['Not Equals'] = 'Неравни';

$GLOBALS["lang"]['Not In'] = 'Няма';

$GLOBALS["lang"]['Not Like'] = 'Не като';

$GLOBALS["lang"]['Not Set'] = 'Не е зададен';

$GLOBALS["lang"]['Not normally used. If set, this requires the device to have an open port (as per Scan Options) to be considered responding. A MAC address, arp response or ping response is not considered sufficient to be considered responding. Useful if a router or firewall between the Open-AudIT server and target IP is responding to port scans on the IPs behalf.'] = 'Обикновено не се използва. Ако е настроен, това изисква устройството да има отворен порт (както на скенер опции), за да се счита за отговор. MAC адрес, отговор на арп или отговор на пинг не се счита за достатъчно, за да се счита, че отговаря. Полезно е, ако рутер или защитна стена между Open-AudIT сървъра и целева IP отговаря на порт скенери от името на IPs.';

$GLOBALS["lang"]['Note'] = 'Забележка';

$GLOBALS["lang"]['Note - Selecting a parent will automatically provide access to its children (although it wont be shown here).'] = 'Забележка - Изборът на родител автоматично ще осигури достъп до децата му (въпреки че няма да бъде показан тук).';

$GLOBALS["lang"]['Notes'] = 'Забележки';

$GLOBALS["lang"]['notes'] = 'Забележки';

$GLOBALS["lang"]['Notice'] = 'Известие';

$GLOBALS["lang"]['notin'] = 'Notin';

$GLOBALS["lang"]['Notin'] = 'Notin';

$GLOBALS["lang"]['November'] = 'Ноември';

$GLOBALS["lang"]['nvd_json'] = 'Nvd Json';

$GLOBALS["lang"]['Nvd Json'] = 'Nvd Json';

$GLOBALS["lang"]['ORDER BY'] = 'Ред по ред';

$GLOBALS["lang"]['OS'] = 'OS';

$GLOBALS["lang"]['OS Families'] = 'OS семейства';

$GLOBALS["lang"]['OS Family'] = 'Семейство OS';

$GLOBALS["lang"]['OS Group'] = 'Група OS';

$GLOBALS["lang"]['oae_manage'] = 'Управление';

$GLOBALS["lang"]['Oae Manage'] = 'Управление';

$GLOBALS["lang"]['object_ident'] = 'Идентификация на предмета';

$GLOBALS["lang"]['Object Ident'] = 'Идентификация на предмета';

$GLOBALS["lang"]['October'] = 'Октомври';

$GLOBALS["lang"]['Oman'] = 'Оман';

$GLOBALS["lang"]['omk_uuid'] = 'Omk Uuid';

$GLOBALS["lang"]['Omk Uuid'] = 'Omk Uuid';

$GLOBALS["lang"]['On'] = 'На';

$GLOBALS["lang"]['One of <code>3x2</code>, <code>4x2</code>, <code>4x3</code> or <code>4x4</code>.'] = 'Един от <code>3x2</code>, <code>4x2</code>, <code>4x3</code> или <code>4x4</code>.';

$GLOBALS["lang"]['One of Campus Area Network, Cloud Network, Enterprise Private Network, Home Area Network, Local Area Network, Metropolitan Area Network, Passive Optical Local Area Network, Personal Area Network, Storage-Area Network, System-Area Network, Virtual Private Network, Wide Area Network, Wireless Local Area Network.'] = 'Един от Campus Area Network, Cloud Network, Enterprise Private Network, Home Area Network, Local Area Network, Metropolitan Area Network, Пасивна оптична локална мрежа, Лична зона Мрежа, Storage-Area Network, Virtual Private Network, Wide Area Network, Wireless Local Area Network.';

$GLOBALS["lang"]['One of Development, Disaster Recovery, Evaluation, Pre-Production, Production, Testing, Training, User Acceptance Testing'] = 'Един от развитието, възстановяване на бедствия, Оценка, Pre-Production, Производство, Тестване, Обучение, Тестване за приемане на потребителите';

$GLOBALS["lang"]['One of allocated, delegated, planning, reserved, unallocated, unknown, unmanaged. Defaults to allocated.'] = 'Един от разпределени, делегирани, планиране, запазени, неразпределени, непознати, неуправляеми. По подразбиране.';

$GLOBALS["lang"]['One of either <code>active directory</code> or <code>openldap</code>.'] = 'Една от двете <code>active directory</code> или <code>openldap</code>.';

$GLOBALS["lang"]['One of: antivirus, backup, firewall, approved, banned, ignored or other.'] = 'Един от: антивирус, архивиране, защитна стена, одобрени, забранени, игнорирани или други.';

$GLOBALS["lang"]['Online Documentation'] = 'Онлайн документация';

$GLOBALS["lang"]['Open-AudIT'] = 'Open- AudIT';

$GLOBALS["lang"]['Open-AudIT Community'] = 'Общност Open-AudIT';

$GLOBALS["lang"]['Open-AudIT Device Selection'] = 'Избор на отворено устройство';

$GLOBALS["lang"]['Open-AudIT Enterprise'] = 'Open- AudIT Enterprise';

$GLOBALS["lang"]['Open-AudIT Enterprise. High-scale flexible discovery and audit solution for large networks. All the features of Professional plus: Baselines, File Auditing, Cloud Discovery, Rack Management, Configurable Role Based Access Control including Active Directory and LDAP.'] = 'Open-AudIT Enterprise. Високомащабно гъвкаво решение за откриване и одит на големи мрежи. Всички характеристики на Professional plus: Изходи, File Auditing, Cloud Discovery, Rack Management, Надежден Ролев контрол на достъпа, включително Active Directory и LDAP.';

$GLOBALS["lang"]['Open-AudIT Field Name'] = 'Име на полето Open- AudIT';

$GLOBALS["lang"]['Open-AudIT Licenses'] = 'Лицензи за отворен AudIT';

$GLOBALS["lang"]['Open-AudIT Options'] = 'Настройки на Open- AudIT';

$GLOBALS["lang"]['Open-AudIT Professional'] = 'Open- AudIT Professional';

$GLOBALS["lang"]['Open-AudIT Professional. The world\\'] = 'Open-AudIT Professional. Светът\\';

$GLOBALS["lang"]['Open-AudIT and Nmap'] = 'Open- AudIT и NMap';

$GLOBALS["lang"]['OpenScap is Installed'] = 'OpenScap се инсталира';

$GLOBALS["lang"]['openldap_user_dn'] = 'Openldap Потребител Dn';

$GLOBALS["lang"]['Openldap User Dn'] = 'Openldap Потребител Dn';

$GLOBALS["lang"]['openldap_user_membership_attribute'] = 'Openldap Потребителско участие';

$GLOBALS["lang"]['Openldap User Membership Attribute'] = 'Openldap Потребителско участие';

$GLOBALS["lang"]['open|filtered'] = 'Отворено';

$GLOBALS["lang"]['Open|filtered'] = 'Отворено';

$GLOBALS["lang"]['Operating System'] = 'Операционна система';

$GLOBALS["lang"]['Operating System Family Contains'] = 'Семейството на операционната система';

$GLOBALS["lang"]['Operating Systems'] = 'Работни системи';

$GLOBALS["lang"]['optical'] = 'Оптични';

$GLOBALS["lang"]['Optical'] = 'Оптични';

$GLOBALS["lang"]['Optimized'] = 'Оптимизиран';

$GLOBALS["lang"]['Optional version as audited by Open-AudIT. Use the percent sign % as a wildcard.'] = 'Опционална версия като одитирана от Open-AudIT. Използвай знака за процента като дива карта.';

$GLOBALS["lang"]['options'] = 'Настройки';

$GLOBALS["lang"]['Options'] = 'Настройки';

$GLOBALS["lang"]['Or select from the below fields.'] = 'Или изберете от долните полета.';

$GLOBALS["lang"]['org_descendants'] = 'Орг десендианти';

$GLOBALS["lang"]['Org Descendants'] = 'Орг десендианти';

$GLOBALS["lang"]['org_id'] = 'ID на Org';

$GLOBALS["lang"]['Org ID'] = 'ID на Org';

$GLOBALS["lang"]['Organisation'] = 'Организация';

$GLOBALS["lang"]['organisation'] = 'Организация';

$GLOBALS["lang"]['Organisation Descendants'] = 'Организационна система';

$GLOBALS["lang"]['Organisations'] = 'Организации';

$GLOBALS["lang"]['orgs'] = 'Орги';

$GLOBALS["lang"]['Orgs'] = 'Орги';

$GLOBALS["lang"]['Orgs Name'] = 'Име на орките';

$GLOBALS["lang"]['orientation'] = 'Ориентация';

$GLOBALS["lang"]['Orientation'] = 'Ориентация';

$GLOBALS["lang"]['os'] = 'Ос';

$GLOBALS["lang"]['Os'] = 'Ос';

$GLOBALS["lang"]['os_arch'] = 'Os Arch';

$GLOBALS["lang"]['Os Arch'] = 'Os Arch';

$GLOBALS["lang"]['os_bit'] = 'Os Bit';

$GLOBALS["lang"]['Os Bit'] = 'Os Bit';

$GLOBALS["lang"]['os_cpe'] = 'Os Cpe';

$GLOBALS["lang"]['Os Cpe'] = 'Os Cpe';

$GLOBALS["lang"]['os_display_version'] = 'Версия на дисплея Os';

$GLOBALS["lang"]['Os Display Version'] = 'Версия на дисплея Os';

$GLOBALS["lang"]['os_family'] = 'Семейство Os';

$GLOBALS["lang"]['Os Family'] = 'Семейство Os';

$GLOBALS["lang"]['os_group'] = 'Група Os';

$GLOBALS["lang"]['Os Group'] = 'Група Os';

$GLOBALS["lang"]['os_installation_date'] = 'Дата на инсталиране';

$GLOBALS["lang"]['Os Installation Date'] = 'Дата на инсталиране';

$GLOBALS["lang"]['os_licence_expiry'] = 'Os Лицензионен срок на валидност';

$GLOBALS["lang"]['Os Licence Expiry'] = 'Os Лицензионен срок на валидност';

$GLOBALS["lang"]['os_license'] = 'Os Лиценз';

$GLOBALS["lang"]['Os License'] = 'Os Лиценз';

$GLOBALS["lang"]['os_license_code'] = 'Os License Code';

$GLOBALS["lang"]['Os License Code'] = 'Os License Code';

$GLOBALS["lang"]['os_license_mode'] = 'Режим на лиценз Os';

$GLOBALS["lang"]['Os License Mode'] = 'Режим на лиценз Os';

$GLOBALS["lang"]['os_license_type'] = 'Тип на лиценза Os';

$GLOBALS["lang"]['Os License Type'] = 'Тип на лиценза Os';

$GLOBALS["lang"]['os_name'] = 'Име на Os';

$GLOBALS["lang"]['Os Name'] = 'Име на Os';

$GLOBALS["lang"]['os_version'] = 'Версия Os';

$GLOBALS["lang"]['Os Version'] = 'Версия Os';

$GLOBALS["lang"]['Other'] = 'Други';

$GLOBALS["lang"]['Others'] = 'Други';

$GLOBALS["lang"]['Our timeout for a SSH response'] = 'Нашият тайм аут за SSH отговор';

$GLOBALS["lang"]['Our timeout for a WMI response'] = 'Нашето време за WMI отговор';

$GLOBALS["lang"]['Our timeout for an SNMP response'] = 'Времето ни за SNMP отговор';

$GLOBALS["lang"]['Our timeout for an audit script response'] = 'Нашето време за отговор на одитния скрипт';

$GLOBALS["lang"]['output'] = 'Изход';

$GLOBALS["lang"]['Output'] = 'Изход';

$GLOBALS["lang"]['outputs'] = 'Изходи';

$GLOBALS["lang"]['Outputs'] = 'Изходи';

$GLOBALS["lang"]['Overall severity score (0–10).'] = 'Обща оценка на тежестта (0';

$GLOBALS["lang"]['overwrite'] = 'Презапис';

$GLOBALS["lang"]['Overwrite'] = 'Презапис';

$GLOBALS["lang"]['owner'] = 'Собственик';

$GLOBALS["lang"]['Owner'] = 'Собственик';

$GLOBALS["lang"]['PHP'] = 'PHP';

$GLOBALS["lang"]['POD'] = 'ПУ';

$GLOBALS["lang"]['Package'] = 'Опаковка';

$GLOBALS["lang"]['packages'] = 'Пакети';

$GLOBALS["lang"]['Packages'] = 'Пакети';

$GLOBALS["lang"]['pagefile'] = 'Файл с страници';

$GLOBALS["lang"]['Pagefile'] = 'Файл с страници';

$GLOBALS["lang"]['Pakistan'] = 'Пакистан';

$GLOBALS["lang"]['Palau'] = 'Палау';

$GLOBALS["lang"]['Palestinian Territory'] = 'Палестинска територия';

$GLOBALS["lang"]['Panama'] = 'Панама';

$GLOBALS["lang"]['Papua New Guinea'] = 'Папуа Нова Гвинея';

$GLOBALS["lang"]['Paraguay'] = 'Парагвай';

$GLOBALS["lang"]['Paranoid'] = 'Параноичен';

$GLOBALS["lang"]['Parent'] = 'Родител';

$GLOBALS["lang"]['parent_id'] = 'Идентификация на родителя';

$GLOBALS["lang"]['Parent ID'] = 'Идентификация на родителя';

$GLOBALS["lang"]['parent_name'] = 'Име на родителя';

$GLOBALS["lang"]['Parent Name'] = 'Име на родителя';

$GLOBALS["lang"]['part_number'] = 'Номер на частта';

$GLOBALS["lang"]['Part Number'] = 'Номер на частта';

$GLOBALS["lang"]['part_of_domain'] = 'Част от домейн';

$GLOBALS["lang"]['Part Of Domain'] = 'Част от домейн';

$GLOBALS["lang"]['Partition'] = 'Разделяне';

$GLOBALS["lang"]['partition_count'] = 'Брой части';

$GLOBALS["lang"]['Partition Count'] = 'Брой части';

$GLOBALS["lang"]['partition_disk_index'] = 'Индекс на диска за дялове';

$GLOBALS["lang"]['Partition Disk Index'] = 'Индекс на диска за дялове';

$GLOBALS["lang"]['Pass'] = 'Пас';

$GLOBALS["lang"]['Passed'] = 'Преминал';

$GLOBALS["lang"]['Passive Optical Local Area Network'] = 'Пасивна оптична локална мрежа';

$GLOBALS["lang"]['Password'] = 'Парола';

$GLOBALS["lang"]['password'] = 'Парола';

$GLOBALS["lang"]['password_changeable'] = 'Парола за промяна';

$GLOBALS["lang"]['Password Changeable'] = 'Парола за промяна';

$GLOBALS["lang"]['password_disabled'] = 'Паролата е изключена';

$GLOBALS["lang"]['Password Disabled'] = 'Паролата е изключена';

$GLOBALS["lang"]['password_expires'] = 'Изтича паролата';

$GLOBALS["lang"]['Password Expires'] = 'Изтича паролата';

$GLOBALS["lang"]['password_last_changed'] = 'Парола последно променена';

$GLOBALS["lang"]['Password Last Changed'] = 'Парола последно променена';

$GLOBALS["lang"]['password_required'] = 'Изисква се парола';

$GLOBALS["lang"]['Password Required'] = 'Изисква се парола';

$GLOBALS["lang"]['patch_panel'] = 'Patch Panel';

$GLOBALS["lang"]['Patch Panel'] = 'Patch Panel';

$GLOBALS["lang"]['patch_panel_port'] = 'Patch панел порт';

$GLOBALS["lang"]['Patch Panel Port'] = 'Patch панел порт';

$GLOBALS["lang"]['path'] = 'Път';

$GLOBALS["lang"]['Path'] = 'Път';

$GLOBALS["lang"]['Performance'] = 'Изпълнение';

$GLOBALS["lang"]['Performed'] = 'Изпълнение';

$GLOBALS["lang"]['permission'] = 'Разрешение';

$GLOBALS["lang"]['Permission'] = 'Разрешение';

$GLOBALS["lang"]['permissions'] = 'Разрешения';

$GLOBALS["lang"]['Permissions'] = 'Разрешения';

$GLOBALS["lang"]['Personal Area Network'] = 'Лична мрежа';

$GLOBALS["lang"]['Peru'] = 'Перу';

$GLOBALS["lang"]['Philippines'] = 'Филипини';

$GLOBALS["lang"]['phone'] = 'Телефон';

$GLOBALS["lang"]['Phone'] = 'Телефон';

$GLOBALS["lang"]['Physical CPUs'] = 'Физични процесори';

$GLOBALS["lang"]['physical_count'] = 'Физически брой';

$GLOBALS["lang"]['Physical Count'] = 'Физически брой';

$GLOBALS["lang"]['physical_depth'] = 'Физическа дълбочина';

$GLOBALS["lang"]['Physical Depth'] = 'Физическа дълбочина';

$GLOBALS["lang"]['physical_height'] = 'Физическа височина';

$GLOBALS["lang"]['Physical Height'] = 'Физическа височина';

$GLOBALS["lang"]['physical_width'] = 'Физическа ширина';

$GLOBALS["lang"]['Physical Width'] = 'Физическа ширина';

$GLOBALS["lang"]['picture'] = 'Снимка';

$GLOBALS["lang"]['Picture'] = 'Снимка';

$GLOBALS["lang"]['pid'] = 'Pid';

$GLOBALS["lang"]['Pid'] = 'Pid';

$GLOBALS["lang"]['Pie Chart'] = 'Картон';

$GLOBALS["lang"]['ping'] = 'Пинг';

$GLOBALS["lang"]['Ping'] = 'Пинг';

$GLOBALS["lang"]['Pitcairn Islands'] = 'Острови Питкерн';

$GLOBALS["lang"]['placement'] = 'Място';

$GLOBALS["lang"]['Placement'] = 'Място';

$GLOBALS["lang"]['Please have an Open-AudIT administrator logon and upgrade the database.'] = 'Моля, имайте лого на администратора Open-AudIT и надграждане на базата данни.';

$GLOBALS["lang"]['Please note that the select box will override the text input box.'] = 'Моля, имайте предвид, че избраната клетка ще отмени полето за въвеждане на текст.';

$GLOBALS["lang"]['Please set using'] = 'Моля, задайте използването';

$GLOBALS["lang"]['pod'] = 'Капсула';

$GLOBALS["lang"]['Pod'] = 'Капсула';

$GLOBALS["lang"]['Poland'] = 'Полша';

$GLOBALS["lang"]['Policies'] = 'Политики';

$GLOBALS["lang"]['Policies have exceptions.'] = 'Политиките имат изключения.';

$GLOBALS["lang"]['policy'] = 'Политика';

$GLOBALS["lang"]['Policy'] = 'Политика';

$GLOBALS["lang"]['policy_id'] = 'Идентификационен код на политиката';

$GLOBALS["lang"]['Policy ID'] = 'Идентификационен код на политиката';

$GLOBALS["lang"]['Policy Result'] = 'Резултат от политиката';

$GLOBALS["lang"]['Policy Results'] = 'Резултати от политиката';

$GLOBALS["lang"]['Polite'] = 'Любезен';

$GLOBALS["lang"]['Populated by audit.'] = 'Населено от одит.';

$GLOBALS["lang"]['Populated by discovery and audit.'] = 'Населена с откритие и одит.';

$GLOBALS["lang"]['Populated dynamically.'] = 'Населено динамично.';

$GLOBALS["lang"]['Populated from DNS.'] = 'Населено от ДНС.';

$GLOBALS["lang"]['Populated from SNMP discovery.'] = 'Населено от SNMP откритие.';

$GLOBALS["lang"]['Populated from device audits.'] = 'Населено от одити на устройства.';

$GLOBALS["lang"]['Populated from hostname.'] = 'Населено от името на домакина.';

$GLOBALS["lang"]['Populated from machine-id on Linux.'] = 'Напояван от машинна идентификация на Линукс.';

$GLOBALS["lang"]['Populated from the IP for the default route or the IP detected in discovery.'] = 'Населено от РП за маршрута по подразбиране или за РП, открити при откриването.';

$GLOBALS["lang"]['Populated from the hostname command.'] = 'Населено от командването на хостовете.';

$GLOBALS["lang"]['Populated with additional data from the external system, in a JSON representation.'] = 'Напоен с допълнителни данни от външната система, в JSON представителство.';

$GLOBALS["lang"]['port'] = 'Порт';

$GLOBALS["lang"]['Port'] = 'Порт';

$GLOBALS["lang"]['port_name'] = 'Име на пристанището';

$GLOBALS["lang"]['Port Name'] = 'Име на пристанището';

$GLOBALS["lang"]['port_number'] = 'Номер на пристанището';

$GLOBALS["lang"]['Port Number'] = 'Номер на пристанището';

$GLOBALS["lang"]['ports_in_order'] = 'Портове в ред';

$GLOBALS["lang"]['Ports In Order'] = 'Портове в ред';

$GLOBALS["lang"]['ports_stop_after'] = 'След спиране на портовете';

$GLOBALS["lang"]['Ports Stop After'] = 'След спиране на портовете';

$GLOBALS["lang"]['Portugal, Portuguese Republic'] = 'Португалия, Португалска република';

$GLOBALS["lang"]['position'] = 'Позиция';

$GLOBALS["lang"]['Position'] = 'Позиция';

$GLOBALS["lang"]['postcode'] = 'Пощенски код';

$GLOBALS["lang"]['Postcode'] = 'Пощенски код';

$GLOBALS["lang"]['power_circuit'] = 'Мощност';

$GLOBALS["lang"]['Power Circuit'] = 'Мощност';

$GLOBALS["lang"]['power_sockets'] = 'Захранващи устройства';

$GLOBALS["lang"]['Power Sockets'] = 'Захранващи устройства';

$GLOBALS["lang"]['Predictable'] = 'Предвидимо';

$GLOBALS["lang"]['Preferences'] = 'Преференция';

$GLOBALS["lang"]['Prerequisites'] = 'Предпоставки';

$GLOBALS["lang"]['Prerequisites and Tests'] = 'Предпоставки и тестове';

$GLOBALS["lang"]['present'] = 'Присъства';

$GLOBALS["lang"]['Present'] = 'Присъства';

$GLOBALS["lang"]['previous_value'] = 'Предишна стойност';

$GLOBALS["lang"]['Previous Value'] = 'Предишна стойност';

$GLOBALS["lang"]['primary'] = 'Първичен';

$GLOBALS["lang"]['Primary'] = 'Първичен';

$GLOBALS["lang"]['Primary Key'] = 'Първичен ключ';

$GLOBALS["lang"]['print_queue'] = 'Печат на опашката';

$GLOBALS["lang"]['Print Queue'] = 'Печат на опашката';

$GLOBALS["lang"]['printer_color'] = 'Цвят на принтера';

$GLOBALS["lang"]['Printer Color'] = 'Цвят на принтера';

$GLOBALS["lang"]['printer_duplex'] = 'Принтер Duplex';

$GLOBALS["lang"]['Printer Duplex'] = 'Принтер Duplex';

$GLOBALS["lang"]['printer_port_name'] = 'Име на принтера';

$GLOBALS["lang"]['Printer Port Name'] = 'Име на принтера';

$GLOBALS["lang"]['printer_shared'] = 'Споделен принтер';

$GLOBALS["lang"]['Printer Shared'] = 'Споделен принтер';

$GLOBALS["lang"]['printer_shared_name'] = 'Споделяно име на принтера';

$GLOBALS["lang"]['Printer Shared Name'] = 'Споделяно име на принтера';

$GLOBALS["lang"]['priority'] = 'Приоритет';

$GLOBALS["lang"]['Priority'] = 'Приоритет';

$GLOBALS["lang"]['Privacy Passphrase'] = 'Парола за лични данни';

$GLOBALS["lang"]['privileges_required'] = 'Необходими привилегии';

$GLOBALS["lang"]['Privileges Required'] = 'Необходими привилегии';

$GLOBALS["lang"]['processor'] = 'Процесор';

$GLOBALS["lang"]['Processor'] = 'Процесор';

$GLOBALS["lang"]['processor_count'] = 'Брояч на процесорите';

$GLOBALS["lang"]['Processor Count'] = 'Брояч на процесорите';

$GLOBALS["lang"]['processor_slot_count'] = 'Брояч на процесорите';

$GLOBALS["lang"]['Processor Slot Count'] = 'Брояч на процесорите';

$GLOBALS["lang"]['processor_type'] = 'Тип процесор';

$GLOBALS["lang"]['Processor Type'] = 'Тип процесор';

$GLOBALS["lang"]['Processors'] = 'Процесори';

$GLOBALS["lang"]['product_name'] = 'Наименование на продукта';

$GLOBALS["lang"]['Product Name'] = 'Наименование на продукта';

$GLOBALS["lang"]['Product Name Match from CPE: '] = 'Име на продукта Мач от CPE: ';

$GLOBALS["lang"]['products'] = 'Продукти';

$GLOBALS["lang"]['Products'] = 'Продукти';

$GLOBALS["lang"]['profile'] = 'Профил';

$GLOBALS["lang"]['Profile'] = 'Профил';

$GLOBALS["lang"]['program'] = 'Програма';

$GLOBALS["lang"]['Program'] = 'Програма';

$GLOBALS["lang"]['protocol'] = 'Протокол';

$GLOBALS["lang"]['Protocol'] = 'Протокол';

$GLOBALS["lang"]['provider'] = 'Доставчик';

$GLOBALS["lang"]['Provider'] = 'Доставчик';

$GLOBALS["lang"]['published'] = 'Публикувано';

$GLOBALS["lang"]['Published'] = 'Публикувано';

$GLOBALS["lang"]['published_date'] = 'Публикувана дата';

$GLOBALS["lang"]['Published Date'] = 'Публикувана дата';

$GLOBALS["lang"]['publisher'] = 'Издател';

$GLOBALS["lang"]['Publisher'] = 'Издател';

$GLOBALS["lang"]['Puerto Rico'] = 'Пуерто Рико';

$GLOBALS["lang"]['Purchase'] = 'Покупка';

$GLOBALS["lang"]['purchase_amount'] = 'Покупна сума';

$GLOBALS["lang"]['Purchase Amount'] = 'Покупна сума';

$GLOBALS["lang"]['purchase_cost_center'] = 'Център за покупки';

$GLOBALS["lang"]['Purchase Cost Center'] = 'Център за покупки';

$GLOBALS["lang"]['purchase_count'] = 'Брой покупки';

$GLOBALS["lang"]['Purchase Count'] = 'Брой покупки';

$GLOBALS["lang"]['purchase_date'] = 'Дата на закупуване';

$GLOBALS["lang"]['Purchase Date'] = 'Дата на закупуване';

$GLOBALS["lang"]['purchase_invoice'] = 'Закупуване на фактура';

$GLOBALS["lang"]['Purchase Invoice'] = 'Закупуване на фактура';

$GLOBALS["lang"]['purchase_order'] = 'Поръчка за покупка';

$GLOBALS["lang"]['Purchase Order'] = 'Поръчка за покупка';

$GLOBALS["lang"]['purchase_order_number'] = 'Номер на поръчката за покупка';

$GLOBALS["lang"]['Purchase Order Number'] = 'Номер на поръчката за покупка';

$GLOBALS["lang"]['purchase_service_contract_number'] = 'Номер на договора за услуги за покупка';

$GLOBALS["lang"]['Purchase Service Contract Number'] = 'Номер на договора за услуги за покупка';

$GLOBALS["lang"]['purchase_vendor'] = 'Купуване на търговец';

$GLOBALS["lang"]['Purchase Vendor'] = 'Купуване на търговец';

$GLOBALS["lang"]['purpose'] = 'Цел';

$GLOBALS["lang"]['Purpose'] = 'Цел';

$GLOBALS["lang"]['Qatar'] = 'Катар';

$GLOBALS["lang"]['queries'] = 'Въпроси';

$GLOBALS["lang"]['Queries'] = 'Въпроси';

$GLOBALS["lang"]['Query'] = 'Въпрос';

$GLOBALS["lang"]['queue'] = 'Ред';

$GLOBALS["lang"]['Queue'] = 'Ред';

$GLOBALS["lang"]['Queue Limit'] = 'Гранична стойност';

$GLOBALS["lang"]['Queued Device Audits'] = 'Одити на устройства';

$GLOBALS["lang"]['Queued IP Scans'] = 'Търсене на IP сканирания';

$GLOBALS["lang"]['Queued Items'] = 'Квитирани елементи';

$GLOBALS["lang"]['RU Start'] = 'RU Start';

$GLOBALS["lang"]['RX Bitrate'] = 'RX битрат';

$GLOBALS["lang"]['RX Freq'] = 'RX Freq';

$GLOBALS["lang"]['RX Level'] = 'Ниво RX';

$GLOBALS["lang"]['RX Power'] = 'RX мощност';

$GLOBALS["lang"]['RX Profile'] = 'Профил RX';

$GLOBALS["lang"]['Rack'] = 'Rack';

$GLOBALS["lang"]['rack_devices'] = 'Устройства Rack';

$GLOBALS["lang"]['Rack Devices'] = 'Устройства Rack';

$GLOBALS["lang"]['rack_id'] = 'Rack ID';

$GLOBALS["lang"]['Rack ID'] = 'Rack ID';

$GLOBALS["lang"]['Racks'] = 'Ракети';

$GLOBALS["lang"]['racks'] = 'Ракети';

$GLOBALS["lang"]['radio'] = 'Радио';

$GLOBALS["lang"]['Radio'] = 'Радио';

$GLOBALS["lang"]['Radio MAC'] = 'Радио МАК';

$GLOBALS["lang"]['rationale'] = 'Rationale';

$GLOBALS["lang"]['Rationale'] = 'Rationale';

$GLOBALS["lang"]['raw'] = 'Суров';

$GLOBALS["lang"]['Raw'] = 'Суров';

$GLOBALS["lang"]['read'] = 'Четене';

$GLOBALS["lang"]['Read'] = 'Четене';

$GLOBALS["lang"]['Read our online documentation on the Open-AudIT Wiki.'] = 'Прочетете нашата онлайн документация за Open-AudIT Wiki.';

$GLOBALS["lang"]['Red Query'] = 'Червена справка';

$GLOBALS["lang"]['Redirect URI'] = 'Пренасочване на URI';

$GLOBALS["lang"]['redirect_uri'] = 'Пренасочване на Uri';

$GLOBALS["lang"]['Redirect Uri'] = 'Пренасочване на Uri';

$GLOBALS["lang"]['references'] = 'Позоваванията';

$GLOBALS["lang"]['References'] = 'Позоваванията';

$GLOBALS["lang"]['region'] = 'Регион';

$GLOBALS["lang"]['Region'] = 'Регион';

$GLOBALS["lang"]['registered_user'] = 'Регистриран потребител';

$GLOBALS["lang"]['Registered User'] = 'Регистриран потребител';

$GLOBALS["lang"]['rel'] = 'Рел';

$GLOBALS["lang"]['Rel'] = 'Рел';

$GLOBALS["lang"]['Release'] = 'Освобождаване';

$GLOBALS["lang"]['remediation'] = 'Възстановяване';

$GLOBALS["lang"]['Remediation'] = 'Възстановяване';

$GLOBALS["lang"]['Remote'] = 'Дистанционно';

$GLOBALS["lang"]['remote_address'] = 'Отдалечен адрес';

$GLOBALS["lang"]['Remote Address'] = 'Отдалечен адрес';

$GLOBALS["lang"]['remote_port'] = 'Отдалечен порт';

$GLOBALS["lang"]['Remote Port'] = 'Отдалечен порт';

$GLOBALS["lang"]['Remove'] = 'Премахване';

$GLOBALS["lang"]['Remove Exception'] = 'Премахване на изключение';

$GLOBALS["lang"]['Report'] = 'Доклад';

$GLOBALS["lang"]['Report on your devices, networks and more'] = 'Доклад за вашите устройства, мрежи и др.';

$GLOBALS["lang"]['reportable'] = 'Счетоводни данни';

$GLOBALS["lang"]['Reportable'] = 'Счетоводни данни';

$GLOBALS["lang"]['Reports'] = 'Доклади';

$GLOBALS["lang"]['request'] = 'Искане';

$GLOBALS["lang"]['Request'] = 'Искане';

$GLOBALS["lang"]['Request a Specific CVE'] = 'Искане за специфична CVE';

$GLOBALS["lang"]['requested'] = 'Заявено';

$GLOBALS["lang"]['Requested'] = 'Заявено';

$GLOBALS["lang"]['require_port'] = 'Изискване на порт';

$GLOBALS["lang"]['Require Port'] = 'Изискване на порт';

$GLOBALS["lang"]['Require an Open Port'] = 'Изискване на отворен порт';

$GLOBALS["lang"]['Required'] = 'Изисква се';

$GLOBALS["lang"]['Reset'] = 'Рестартиране';

$GLOBALS["lang"]['Reset All Data'] = 'Възстановяване на всички данни';

$GLOBALS["lang"]['Reset to Default'] = 'По подразбиране';

$GLOBALS["lang"]['resource'] = 'Ресурс';

$GLOBALS["lang"]['Resource'] = 'Ресурс';

$GLOBALS["lang"]['Resource Name'] = 'Име на ресурса';

$GLOBALS["lang"]['Resources'] = 'Средства';

$GLOBALS["lang"]['response'] = 'Отговор';

$GLOBALS["lang"]['Response'] = 'Отговор';

$GLOBALS["lang"]['responsibility'] = 'Отговорност';

$GLOBALS["lang"]['Responsibility'] = 'Отговорност';

$GLOBALS["lang"]['Restore my Licenses'] = 'Възстановяване на лицензите ми';

$GLOBALS["lang"]['Restrict to Private'] = 'Ограничено до частно';

$GLOBALS["lang"]['Restrict to Subnet'] = 'Ограничено до подмрежа';

$GLOBALS["lang"]['result'] = 'Резултат';

$GLOBALS["lang"]['Result'] = 'Резултат';

$GLOBALS["lang"]['Results'] = 'Резултати';

$GLOBALS["lang"]['retrieved'] = 'Retrieved';

$GLOBALS["lang"]['Retrieved'] = 'Retrieved';

$GLOBALS["lang"]['retrieved_ident'] = 'Идентифицирана';

$GLOBALS["lang"]['Retrieved Ident'] = 'Идентифицирана';

$GLOBALS["lang"]['retrieved_name'] = 'Възстановено име';

$GLOBALS["lang"]['Retrieved Name'] = 'Възстановено име';

$GLOBALS["lang"]['Retrieved from the device - Windows:Win32_ComputerSystemProduct, Linux:dmidecode, MacOS:system_profiler, ESXi:vim-cmd hostsvc/hostsummary, HP-UX:machinfo, Solaris:smbios, AIX:uname.'] = 'Retrieved from the device - Windows:Win32_ComputerSystemProduct, Linux:dmidecode, MacOS:system_profiler, ESXi: vim-cmd hostvc/hostsummary, HP-UX: machinfo Solaris: smbios, AIX:uname.';

$GLOBALS["lang"]['Reunion'] = 'Събиране';

$GLOBALS["lang"]['revision'] = 'Преразглеждане';

$GLOBALS["lang"]['Revision'] = 'Преразглеждане';

$GLOBALS["lang"]['risk_assesment_result'] = 'Резултат от отстраняване на риска';

$GLOBALS["lang"]['Risk Assesment Result'] = 'Резултат от отстраняване на риска';

$GLOBALS["lang"]['role'] = 'Роля';

$GLOBALS["lang"]['Role'] = 'Роля';

$GLOBALS["lang"]['roles'] = 'Роли';

$GLOBALS["lang"]['Roles'] = 'Роли';

$GLOBALS["lang"]['Romania'] = 'Румъния';

$GLOBALS["lang"]['Room'] = 'Стая';

$GLOBALS["lang"]['route'] = 'Път';

$GLOBALS["lang"]['Route'] = 'Път';

$GLOBALS["lang"]['Row'] = 'Ред';

$GLOBALS["lang"]['Row Count'] = 'Брой редове';

$GLOBALS["lang"]['row_position'] = 'Позиция на реда';

$GLOBALS["lang"]['Row Position'] = 'Позиция на реда';

$GLOBALS["lang"]['Rows'] = 'Редове';

$GLOBALS["lang"]['ru_height'] = 'Ru Височина';

$GLOBALS["lang"]['Ru Height'] = 'Ru Височина';

$GLOBALS["lang"]['ru_start'] = 'Ru Start';

$GLOBALS["lang"]['Ru Start'] = 'Ru Start';

$GLOBALS["lang"]['rule_group'] = 'Група на членовете';

$GLOBALS["lang"]['Rule Group'] = 'Група на членовете';

$GLOBALS["lang"]['rules'] = 'Правила';

$GLOBALS["lang"]['Rules'] = 'Правила';

$GLOBALS["lang"]['Run Discovery'] = 'Изпълнение на Откритие';

$GLOBALS["lang"]['Run Discovery on Devices'] = 'Изпълнение на Откритие на устройства';

$GLOBALS["lang"]['Run a discovery and find out <b>Whats On Your Network?</b>'] = 'Направи откритие и разбери. <b>Какво има в мрежата ти?</b>';

$GLOBALS["lang"]['Run this Command'] = 'Изпълнение на командата';

$GLOBALS["lang"]['runas'] = 'Руна';

$GLOBALS["lang"]['Runas'] = 'Руна';

$GLOBALS["lang"]['Running Open-AudIT Apache Service Under Windows'] = 'Работа с отворени AudIT Apache услуги под Windows';

$GLOBALS["lang"]['Russian Federation'] = 'Руска федерация';

$GLOBALS["lang"]['Rwanda'] = 'Руанда';

$GLOBALS["lang"]['rx_bitrate'] = 'Rx Битрат';

$GLOBALS["lang"]['Rx Bitrate'] = 'Rx Битрат';

$GLOBALS["lang"]['rx_freq'] = 'Rx Freq';

$GLOBALS["lang"]['Rx Freq'] = 'Rx Freq';

$GLOBALS["lang"]['rx_level'] = 'Ниво Rx';

$GLOBALS["lang"]['Rx Level'] = 'Ниво Rx';

$GLOBALS["lang"]['rx_power'] = 'Rx Power';

$GLOBALS["lang"]['Rx Power'] = 'Rx Power';

$GLOBALS["lang"]['rx_profile'] = 'Профил Rx';

$GLOBALS["lang"]['Rx Profile'] = 'Профил Rx';

$GLOBALS["lang"]['SELECT'] = 'СЕЛЕКТ';

$GLOBALS["lang"]['SID'] = 'SID';

$GLOBALS["lang"]['SM Version'] = 'Версия на SM';

$GLOBALS["lang"]['SNMP (v1 / v2)'] = 'SNMP (v1 / v2)';

$GLOBALS["lang"]['SNMP Details'] = 'SNMP Подробности';

$GLOBALS["lang"]['SNMP OID'] = 'SNMP OID';

$GLOBALS["lang"]['SNMP Version'] = 'Версия на SNMP';

$GLOBALS["lang"]['SNMP v3'] = 'SNMP v3';

$GLOBALS["lang"]['SQL'] = 'SQL';

$GLOBALS["lang"]['SQL (Advanced)'] = 'SQL (предварително)';

$GLOBALS["lang"]['SQL Creation Statements'] = 'Изявления за създаване на SQL';

$GLOBALS["lang"]['SSH'] = 'SSH';

$GLOBALS["lang"]['SSH Key'] = 'SSH Ключ';

$GLOBALS["lang"]['SW Revision'] = 'СУ Ревизия';

$GLOBALS["lang"]['Saint Barthelemy'] = 'Сейнт Бартелеми';

$GLOBALS["lang"]['Saint Helena'] = 'Света Елена';

$GLOBALS["lang"]['Saint Kitts and Nevis'] = 'Сейнт Китс и Невис';

$GLOBALS["lang"]['Saint Lucia'] = 'Сейнт Лусия';

$GLOBALS["lang"]['Saint Martin'] = 'Сейнт Мартин';

$GLOBALS["lang"]['Saint Pierre and Miquelon'] = 'Сен Пиер и Микелон';

$GLOBALS["lang"]['Saint Vincent and the Grenadines'] = 'Сейнт Винсънт и Гренадини';

$GLOBALS["lang"]['Samoa'] = 'Самоа';

$GLOBALS["lang"]['san'] = 'Сан';

$GLOBALS["lang"]['San'] = 'Сан';

$GLOBALS["lang"]['San Marino'] = 'Сан Марино';

$GLOBALS["lang"]['Sao Tome and Principe'] = 'Сао Томе и Принсипи';

$GLOBALS["lang"]['Saturday'] = 'Събота';

$GLOBALS["lang"]['Saudi Arabia'] = 'Саудитска Арабия';

$GLOBALS["lang"]['Save as Default'] = 'Запис като по подразбиране';

$GLOBALS["lang"]['scaling'] = 'Скалиране';

$GLOBALS["lang"]['Scaling'] = 'Скалиране';

$GLOBALS["lang"]['scan_options'] = 'Настройки на сканирането';

$GLOBALS["lang"]['Scan Options'] = 'Настройки на сканирането';

$GLOBALS["lang"]['Scan Options ID'] = 'ID на настройките за сканиране';

$GLOBALS["lang"]['Scan the Nmap top number of TCP ports.'] = 'Сканирайте горния номер на TCP портовете.';

$GLOBALS["lang"]['Scan the Nmap top number of UDP ports.'] = 'Сканирайте горния номер на UDP портове.';

$GLOBALS["lang"]['schedule'] = 'График';

$GLOBALS["lang"]['Schedule'] = 'График';

$GLOBALS["lang"]['scope'] = 'Обхват';

$GLOBALS["lang"]['Scope'] = 'Обхват';

$GLOBALS["lang"]['script_timeout'] = 'Прекъсване на скрипта';

$GLOBALS["lang"]['Script Timeout'] = 'Прекъсване на скрипта';

$GLOBALS["lang"]['scripts'] = 'Скриптове';

$GLOBALS["lang"]['Scripts'] = 'Скриптове';

$GLOBALS["lang"]['scsi'] = 'Scsi';

$GLOBALS["lang"]['Scsi'] = 'Scsi';

$GLOBALS["lang"]['scsi_bus'] = 'Автобус Scsi';

$GLOBALS["lang"]['Scsi Bus'] = 'Автобус Scsi';

$GLOBALS["lang"]['scsi_logical_unit'] = 'Scsi Логическа единица';

$GLOBALS["lang"]['Scsi Logical Unit'] = 'Scsi Логическа единица';

$GLOBALS["lang"]['scsi_port'] = 'Порт Scsi';

$GLOBALS["lang"]['Scsi Port'] = 'Порт Scsi';

$GLOBALS["lang"]['Search'] = 'Търсене';

$GLOBALS["lang"]['Search For a Device'] = 'Търсене на устройство';

$GLOBALS["lang"]['Search for Device'] = 'Търсене на устройство';

$GLOBALS["lang"]['Searching Using DataTables'] = 'Търсене чрез таблици с данни';

$GLOBALS["lang"]['secondary'] = 'Вторичен';

$GLOBALS["lang"]['Secondary'] = 'Вторичен';

$GLOBALS["lang"]['Secondary Text'] = 'Вторичен текст';

$GLOBALS["lang"]['section'] = 'Раздел';

$GLOBALS["lang"]['Section'] = 'Раздел';

$GLOBALS["lang"]['secure'] = 'Сигурност';

$GLOBALS["lang"]['Secure'] = 'Сигурност';

$GLOBALS["lang"]['Security Name'] = 'Име на сигурността';

$GLOBALS["lang"]['Security Status'] = 'Състояние на сигурността';

$GLOBALS["lang"]['security_zone'] = 'Зона за сигурност';

$GLOBALS["lang"]['Security Zone'] = 'Зона за сигурност';

$GLOBALS["lang"]['seed_ip'] = 'IP на семената';

$GLOBALS["lang"]['Seed IP'] = 'IP на семената';

$GLOBALS["lang"]['seed_ping'] = 'Ping за семена';

$GLOBALS["lang"]['Seed Ping'] = 'Ping за семена';

$GLOBALS["lang"]['seed_restrict_to_private'] = 'Семе, ограничено до частно';

$GLOBALS["lang"]['Seed Restrict To Private'] = 'Семе, ограничено до частно';

$GLOBALS["lang"]['seed_restrict_to_subnet'] = 'Подмрежа на семена';

$GLOBALS["lang"]['Seed Restrict To Subnet'] = 'Подмрежа на семена';

$GLOBALS["lang"]['Select'] = 'Избор';

$GLOBALS["lang"]['Select All'] = 'Избор на всички';

$GLOBALS["lang"]['select_external_attribute'] = 'Избор на външен принос';

$GLOBALS["lang"]['Select External Attribute'] = 'Избор на външен принос';

$GLOBALS["lang"]['select_external_count'] = 'Избор на външен брой';

$GLOBALS["lang"]['Select External Count'] = 'Избор на външен брой';

$GLOBALS["lang"]['select_external_type'] = 'Избор на външна Тип';

$GLOBALS["lang"]['Select External Type'] = 'Избор на външна Тип';

$GLOBALS["lang"]['select_external_value'] = 'Избор на външна Стойност';

$GLOBALS["lang"]['Select External Value'] = 'Избор на външна Стойност';

$GLOBALS["lang"]['select_internal_attribute'] = 'Изберете вътрешен принос';

$GLOBALS["lang"]['Select Internal Attribute'] = 'Изберете вътрешен принос';

$GLOBALS["lang"]['select_internal_count'] = 'Избор на вътрешен брой';

$GLOBALS["lang"]['Select Internal Count'] = 'Избор на вътрешен брой';

$GLOBALS["lang"]['select_internal_type'] = 'Избор на вътрешна Тип';

$GLOBALS["lang"]['Select Internal Type'] = 'Избор на вътрешна Тип';

$GLOBALS["lang"]['select_internal_value'] = 'Избор на вътрешна Стойност';

$GLOBALS["lang"]['Select Internal Value'] = 'Избор на вътрешна Стойност';

$GLOBALS["lang"]['Select a Table'] = 'Избор на таблица';

$GLOBALS["lang"]['Senegal'] = 'Сенегал';

$GLOBALS["lang"]['sensitivity'] = 'Чувствителност';

$GLOBALS["lang"]['Sensitivity'] = 'Чувствителност';

$GLOBALS["lang"]['September'] = 'септември';

$GLOBALS["lang"]['Serbia'] = 'Сърбия';

$GLOBALS["lang"]['serial'] = 'Сериен';

$GLOBALS["lang"]['Serial'] = 'Сериен';

$GLOBALS["lang"]['serial_imei'] = 'Сериен Имей';

$GLOBALS["lang"]['Serial Imei'] = 'Сериен Имей';

$GLOBALS["lang"]['serial_sim'] = 'Serial Sim';

$GLOBALS["lang"]['Serial Sim'] = 'Serial Sim';

$GLOBALS["lang"]['series'] = 'Серия';

$GLOBALS["lang"]['Series'] = 'Серия';

$GLOBALS["lang"]['server'] = 'Сървър';

$GLOBALS["lang"]['Server'] = 'Сървър';

$GLOBALS["lang"]['server_id'] = 'Идентификация на сървъра';

$GLOBALS["lang"]['Server ID'] = 'Идентификация на сървъра';

$GLOBALS["lang"]['Server Is'] = 'Сървър';

$GLOBALS["lang"]['server_item'] = 'Сървърен елемент';

$GLOBALS["lang"]['Server Item'] = 'Сървърен елемент';

$GLOBALS["lang"]['Server Status'] = 'Състояние на сървъра';

$GLOBALS["lang"]['Servers'] = 'Сървъри';

$GLOBALS["lang"]['service'] = 'Услуги';

$GLOBALS["lang"]['Service'] = 'Услуги';

$GLOBALS["lang"]['service_identifier'] = 'Идентификационен код на услугата';

$GLOBALS["lang"]['Service Identifier'] = 'Идентификационен код на услугата';

$GLOBALS["lang"]['service_level_a'] = 'Ниво на обслужване A';

$GLOBALS["lang"]['Service Level A'] = 'Ниво на обслужване A';

$GLOBALS["lang"]['service_level_b'] = 'Ниво на обслужване Б';

$GLOBALS["lang"]['Service Level B'] = 'Ниво на обслужване Б';

$GLOBALS["lang"]['service_network'] = 'Сервизна мрежа';

$GLOBALS["lang"]['Service Network'] = 'Сервизна мрежа';

$GLOBALS["lang"]['service_number'] = 'Номер на услугата';

$GLOBALS["lang"]['Service Number'] = 'Номер на услугата';

$GLOBALS["lang"]['service_pack'] = 'Сервизен пакет';

$GLOBALS["lang"]['Service Pack'] = 'Сервизен пакет';

$GLOBALS["lang"]['service_plan'] = 'План за обслужване';

$GLOBALS["lang"]['Service Plan'] = 'План за обслужване';

$GLOBALS["lang"]['service_provider'] = 'Доставчик на услуги';

$GLOBALS["lang"]['Service Provider'] = 'Доставчик на услуги';

$GLOBALS["lang"]['service_tag'] = 'Етикет на услугата';

$GLOBALS["lang"]['Service Tag'] = 'Етикет на услугата';

$GLOBALS["lang"]['service_type'] = 'Вид услуга';

$GLOBALS["lang"]['Service Type'] = 'Вид услуга';

$GLOBALS["lang"]['service_version'] = 'Версия на услугата';

$GLOBALS["lang"]['Service Version'] = 'Версия на услугата';

$GLOBALS["lang"]['Set'] = 'Комплект';

$GLOBALS["lang"]['set_by'] = 'Задаване по';

$GLOBALS["lang"]['Set By'] = 'Задаване по';

$GLOBALS["lang"]['Set the size (normal or compact) of the tables on the List screens.'] = 'Задайте размера (нормален или компактен) на таблиците на екраните на Списъка.';

$GLOBALS["lang"]['severity'] = 'Нервност';

$GLOBALS["lang"]['Severity'] = 'Нервност';

$GLOBALS["lang"]['severity_text'] = 'Severity Текст';

$GLOBALS["lang"]['Severity Text'] = 'Severity Текст';

$GLOBALS["lang"]['Severity is calculated from the <code>base_score</code> and can be one of: None, Low, Medium, High, Critical.'] = 'Тежестта се изчислява от <code>base_score</code> и може да бъде един от: None, Low, Medium, High, Critical.';

$GLOBALS["lang"]['Seychelles'] = 'Сейшелски острови';

$GLOBALS["lang"]['share'] = 'Дял';

$GLOBALS["lang"]['Share'] = 'Дял';

$GLOBALS["lang"]['Share Name'] = 'Наименование на акцията';

$GLOBALS["lang"]['shared'] = 'Споделен';

$GLOBALS["lang"]['Shared'] = 'Споделен';

$GLOBALS["lang"]['shared_name'] = 'Споделено наименование';

$GLOBALS["lang"]['Shared Name'] = 'Споделено наименование';

$GLOBALS["lang"]['shell'] = 'Черупка';

$GLOBALS["lang"]['Shell'] = 'Черупка';

$GLOBALS["lang"]['Ship Date'] = 'Дата на кораба';

$GLOBALS["lang"]['short'] = 'Кратко';

$GLOBALS["lang"]['Short'] = 'Кратко';

$GLOBALS["lang"]['Should I remove all non-current data from this device?'] = 'Трябва ли да премахна всички нетекущи данни от това устройство?';

$GLOBALS["lang"]['Should this file (or pattern) be used to exclude files from being reported. Normally, to audit files, this is set to <code>y</code>.'] = 'Ако файлът (или моделът) се използва за изключване на файловете от докладваното. Обикновено, за проверка на файлове, това е настроено <code>y</code>.';

$GLOBALS["lang"]['Should this vendor be used when retrieving vulnerabilities from FirstWave.'] = 'Ако този продавач се използва при извличане на слабости от FirstWave.';

$GLOBALS["lang"]['Should we add devices from the remote service, locally.'] = 'Трябва ли да добавим устройства от дистанционното, локално.';

$GLOBALS["lang"]['Should we apply this license to the selected Org as well as the Orgs children?'] = 'Трябва ли да приложим този лиценз към избраната Орг, както и децата на Оргс?';

$GLOBALS["lang"]['Should we consider a filtered port to be an open port - and therefore flag this IP as having a device attached?'] = 'Трябва ли да считаме филтрирания порт за отворен порт - и следователно да маркираме този IP като устройство, което е прикрепено?';

$GLOBALS["lang"]['Should we consider an open|filtered port to be an open port - and therefore flag this IP as having a device attached?'] = 'Трябва ли да считаме отворения порт за отворен порт - и следователно да маркираме този IP като прикрепено устройство?';

$GLOBALS["lang"]['Should we expose this group in the web interface.'] = 'Да разобличим тази група в уеб интерфейса.';

$GLOBALS["lang"]['Should we expose this query in the list of reports under the Report menu in the web interface.'] = 'Трябва ли да изложим тази заявка в списъка на докладите в менюто Доклад в уеб интерфейса.';

$GLOBALS["lang"]['Should we expose this query in the list of reports under the Reports menu in the web interface.'] = 'Трябва ли да изложим тази заявка в списъка с доклади в менюто Reports в уеб интерфейса.';

$GLOBALS["lang"]['Should we install Open-Scap on the target machine.'] = 'Трябва ли да инсталираме Open-Scap на целевата машина.';

$GLOBALS["lang"]['Should we match a device based mac address even if its a known likely duplicate from VMware.'] = 'Трябва ли да съвпадне с устройство базиран mac адрес, дори ако това е известен вероятно дубликат от VMware.';

$GLOBALS["lang"]['Should we match a device based on its DNS fqdn.'] = 'Трябва ли да съвпадне устройство, базирано на DNS fqdn.';

$GLOBALS["lang"]['Should we match a device based on its DNS hostname.'] = 'Трябва да съвпаднем с устройство, базирано на името на приемника му.';

$GLOBALS["lang"]['Should we match a device based on its UUID.'] = 'Трябва ли да съвпадне устройство, базирано на UUID.';

$GLOBALS["lang"]['Should we match a device based on its dbus id.'] = 'Трябва ли да съвпадне устройство въз основа на неговата Dbus ID.';

$GLOBALS["lang"]['Should we match a device based on its fqdn.'] = 'Трябва ли да съвпадне устройство въз основа на неговата fqdn.';

$GLOBALS["lang"]['Should we match a device based on its hostname and UUID.'] = 'Трябва ли да съвпадне устройство, базирано на името му и UUID.';

$GLOBALS["lang"]['Should we match a device based on its hostname and dbus id.'] = 'Трябва ли да съвпаднем с устройство, базирано на името на приемника и идентификацията му?';

$GLOBALS["lang"]['Should we match a device based on its hostname and serial.'] = 'Трябва ли да съвпаднем с устройство базирано на името и серийното му име.';

$GLOBALS["lang"]['Should we match a device based on its ip if we have an existing device with no data.'] = 'Трябва ли да съвпадне устройство въз основа на неговия IP ако имаме съществуващо устройство без данни.';

$GLOBALS["lang"]['Should we match a device based on its ip.'] = 'Трябва ли да съвпаднем с устройство на базата на ИП.';

$GLOBALS["lang"]['Should we match a device based on its mac address.'] = 'Трябва ли да съвпадне устройство въз основа на неговия MAC адрес.';

$GLOBALS["lang"]['Should we match a device based on its serial and type.'] = 'Трябва ли да съвпаднем с устройство базирано на серийния и тип.';

$GLOBALS["lang"]['Should we match a device based on its serial number.'] = 'Да съвпаднем ли със серийния му номер?';

$GLOBALS["lang"]['Should we match a device based only on its SNMP sysName and serial.'] = 'Трябва ли да съвпадне устройство, базирано само на SNMP SysName и сериен.';

$GLOBALS["lang"]['Should we match a device based only on its SNMP sysName.'] = 'Трябва ли да съвпадне устройство, базирано само на SNMP SysName.';

$GLOBALS["lang"]['Should we match a device based only on its hostname.'] = 'Трябва да съвпаднем с устройство, базирано само на името на приемника му.';

$GLOBALS["lang"]['Should we ping the IP before attempting to scan it? If it does not respond to the ping, skip this device.'] = 'Да пуснем ли IP-то, преди да го сканираме? Ако не реагира на пинга, пропуснете това устройство.';

$GLOBALS["lang"]['Should we populate the external system from our local devices.'] = 'Трябва ли да населяваме външната система от нашите местни устройства.';

$GLOBALS["lang"]['Should we run an audit and submit it (y/n).'] = 'Трябва ли да направим одит и да го представим (да/не).';

$GLOBALS["lang"]['Should we test for SNMP using UDP port 161.'] = 'Да тестваме за SNMP чрез UDP порт 161.';

$GLOBALS["lang"]['Should we test for SSH using TCP port 22.'] = 'Трябва ли да тестваме за SSH чрез TCP порт 22?';

$GLOBALS["lang"]['Should we test for WMI using TCP port 135.'] = 'Трябва ли да тестваме за WMI използвайки TCP порт 135.';

$GLOBALS["lang"]['Should we uninstall the agent (y/n).'] = 'Трябва ли да деинсталираме агента (y/n).';

$GLOBALS["lang"]['Should we use this method to authenticate user credentials. Set to <code>y</code> or <code>n</code>.'] = 'Трябва ли да използваме този метод, за да автентираме потребителските препоръки. Задаване на <code>y</code> или <code>n</code>.';

$GLOBALS["lang"]['Should we use this method to populate a users roles. The field <code>use_auth</code> must be set to <code>y</code> to use this. Set to <code>y</code> or <code>n</code>.'] = 'Трябва ли да използваме този метод, за да населяваме ролите на потребителите. Полето <code>use_auth</code> трябва да бъде настроено <code>y</code> да използвам това. Задаване на <code>y</code> или <code>n</code>.';

$GLOBALS["lang"]['Show All'] = 'Показване на всички';

$GLOBALS["lang"]['sid'] = 'Сид.';

$GLOBALS["lang"]['Sid'] = 'Сид.';

$GLOBALS["lang"]['sidebar'] = 'Страничен панел';

$GLOBALS["lang"]['Sidebar'] = 'Страничен панел';

$GLOBALS["lang"]['Sierra Leone'] = 'Сиера Леоне';

$GLOBALS["lang"]['Singapore'] = 'Сингапур';

$GLOBALS["lang"]['Site A'] = 'Обект А';

$GLOBALS["lang"]['Site B'] = 'Място Б';

$GLOBALS["lang"]['site_hours_a'] = 'Часове на обекта A';

$GLOBALS["lang"]['Site Hours A'] = 'Часове на обекта A';

$GLOBALS["lang"]['site_hours_b'] = 'Часове на обекта B';

$GLOBALS["lang"]['Site Hours B'] = 'Часове на обекта B';

$GLOBALS["lang"]['size'] = 'Размер';

$GLOBALS["lang"]['Size'] = 'Размер';

$GLOBALS["lang"]['slaves'] = 'Роби';

$GLOBALS["lang"]['Slaves'] = 'Роби';

$GLOBALS["lang"]['Slovakia (Slovak Republic)'] = 'Словакия (Slovak Republic)';

$GLOBALS["lang"]['Slovenia'] = 'Словения';

$GLOBALS["lang"]['Smart Status'] = 'Интелигентно състояние';

$GLOBALS["lang"]['smversion'] = 'Smversion';

$GLOBALS["lang"]['Smversion'] = 'Smversion';

$GLOBALS["lang"]['Sneaky'] = 'Подло.';

$GLOBALS["lang"]['snmp_enterprise_id'] = 'Snmp Enterprise ID';

$GLOBALS["lang"]['Snmp Enterprise ID'] = 'Snmp Enterprise ID';

$GLOBALS["lang"]['snmp_enterprise_name'] = 'Име на Snmp Enterprise';

$GLOBALS["lang"]['Snmp Enterprise Name'] = 'Име на Snmp Enterprise';

$GLOBALS["lang"]['snmp_oid'] = 'Snmp Oid';

$GLOBALS["lang"]['Snmp Oid'] = 'Snmp Oid';

$GLOBALS["lang"]['snmp_timeout'] = 'Snmp таймаут';

$GLOBALS["lang"]['Snmp Timeout'] = 'Snmp таймаут';

$GLOBALS["lang"]['snmp_version'] = 'Snmp Version';

$GLOBALS["lang"]['Snmp Version'] = 'Snmp Version';

$GLOBALS["lang"]['socket'] = 'Socket';

$GLOBALS["lang"]['Socket'] = 'Socket';

$GLOBALS["lang"]['software'] = 'Софтуер';

$GLOBALS["lang"]['Software'] = 'Софтуер';

$GLOBALS["lang"]['Software Found Last 7 Days'] = 'Софтуер, намерен през последните 7 дни';

$GLOBALS["lang"]['Software Found Today'] = 'Софтуер, открит днес';

$GLOBALS["lang"]['Software Found Yesterday'] = 'Софтуерът е намерен вчера';

$GLOBALS["lang"]['software_key'] = 'Софтуерен ключ';

$GLOBALS["lang"]['Software Key'] = 'Софтуерен ключ';

$GLOBALS["lang"]['software_name'] = 'Име на софтуера';

$GLOBALS["lang"]['Software Name'] = 'Име на софтуера';

$GLOBALS["lang"]['Software Policies'] = 'Софтуерни политики';

$GLOBALS["lang"]['software_revision'] = 'Преглед на софтуера';

$GLOBALS["lang"]['Software Revision'] = 'Преглед на софтуера';

$GLOBALS["lang"]['software_version'] = 'Версия на софтуера';

$GLOBALS["lang"]['Software Version'] = 'Версия на софтуера';

$GLOBALS["lang"]['Solaris'] = 'Соларис';

$GLOBALS["lang"]['Solomon Islands'] = 'Соломонови острови';

$GLOBALS["lang"]['Somalia, Somali Republic'] = 'Сомалия, Република Сомалия';

$GLOBALS["lang"]['sound'] = 'Звук';

$GLOBALS["lang"]['Sound'] = 'Звук';

$GLOBALS["lang"]['source'] = 'Източник';

$GLOBALS["lang"]['Source'] = 'Източник';

$GLOBALS["lang"]['South Africa'] = 'Южна Африка';

$GLOBALS["lang"]['South Georgia and the South Sandwich Islands'] = 'Южна Грузия и Южните Сандвичеви острови';

$GLOBALS["lang"]['Spain'] = 'Испания';

$GLOBALS["lang"]['Spanish'] = 'Испански';

$GLOBALS["lang"]['Specific to Azure.'] = 'Особено за Азуре.';

$GLOBALS["lang"]['Specific to OKTA.'] = 'Особено за ОКТА.';

$GLOBALS["lang"]['Specifies a comma-separated list of targets (no spaces) to be excluded from the scan. The list you pass in uses normal Nmap syntax, so it can include hostnames, CIDR netblocks, octet ranges, etc.'] = 'Посочва разделен на запетая списък на целите (без интервали), които да бъдат изключени от сканирането. Списъкът, който преминавате в използва нормален Nmap синтаксис, така че може да включва имена на домакини, CIDR нетоблокове, октети диапазони и др.';

$GLOBALS["lang"]['speed'] = 'Скорост';

$GLOBALS["lang"]['Speed'] = 'Скорост';

$GLOBALS["lang"]['speed_down_a'] = 'Скорост надолу A';

$GLOBALS["lang"]['Speed Down A'] = 'Скорост надолу A';

$GLOBALS["lang"]['speed_down_b'] = 'Скорост надолу B';

$GLOBALS["lang"]['Speed Down B'] = 'Скорост надолу B';

$GLOBALS["lang"]['speed_up_a'] = 'Скорост A';

$GLOBALS["lang"]['Speed Up A'] = 'Скорост A';

$GLOBALS["lang"]['speed_up_b'] = 'Скорост B';

$GLOBALS["lang"]['Speed Up B'] = 'Скорост B';

$GLOBALS["lang"]['sql'] = 'Sql';

$GLOBALS["lang"]['Sql'] = 'Sql';

$GLOBALS["lang"]['Sri Lanka'] = 'Шри Ланка';

$GLOBALS["lang"]['ssh_ports'] = 'Ssh Ports';

$GLOBALS["lang"]['Ssh Ports'] = 'Ssh Ports';

$GLOBALS["lang"]['ssh_timeout'] = 'Тайм аут';

$GLOBALS["lang"]['Ssh Timeout'] = 'Тайм аут';

$GLOBALS["lang"]['Stand-Alone'] = 'Стой сам.';

$GLOBALS["lang"]['Standard'] = 'Стандарт';

$GLOBALS["lang"]['standard_id'] = 'Стандартен идентификатор';

$GLOBALS["lang"]['Standard ID'] = 'Стандартен идентификатор';

$GLOBALS["lang"]['standards'] = 'Стандарти';

$GLOBALS["lang"]['Standards'] = 'Стандарти';

$GLOBALS["lang"]['standards_policies'] = 'Стандартни политики';

$GLOBALS["lang"]['Standards Policies'] = 'Стандартни политики';

$GLOBALS["lang"]['standards_results'] = 'Резултати от стандартите';

$GLOBALS["lang"]['Standards Results'] = 'Резултати от стандартите';

$GLOBALS["lang"]['start_date'] = 'Начална дата';

$GLOBALS["lang"]['Start Date'] = 'Начална дата';

$GLOBALS["lang"]['start_mode'] = 'Стартов режим';

$GLOBALS["lang"]['Start Mode'] = 'Стартов режим';

$GLOBALS["lang"]['started_date'] = 'Начална дата';

$GLOBALS["lang"]['Started Date'] = 'Начална дата';

$GLOBALS["lang"]['state'] = 'Държава';

$GLOBALS["lang"]['State'] = 'Държава';

$GLOBALS["lang"]['Stats'] = 'Показатели';

$GLOBALS["lang"]['status'] = 'Състояние';

$GLOBALS["lang"]['Status'] = 'Състояние';

$GLOBALS["lang"]['Storage'] = 'Съхранение';

$GLOBALS["lang"]['storage_count'] = 'Брой на съхранение';

$GLOBALS["lang"]['Storage Count'] = 'Брой на съхранение';

$GLOBALS["lang"]['Storage-Area Network'] = 'Мрежа за съхранение - региона';

$GLOBALS["lang"]['string'] = 'Струна';

$GLOBALS["lang"]['String'] = 'Струна';

$GLOBALS["lang"]['sub_resource_id'] = 'Подименен идентификационен код на ресурса';

$GLOBALS["lang"]['Sub Resource ID'] = 'Подименен идентификационен код на ресурса';

$GLOBALS["lang"]['sub_type'] = 'Подтип';

$GLOBALS["lang"]['Sub Type'] = 'Подтип';

$GLOBALS["lang"]['subject_key_ident'] = 'Идентификация на предмета';

$GLOBALS["lang"]['Subject Key Ident'] = 'Идентификация на предмета';

$GLOBALS["lang"]['Submit'] = 'Подаване';

$GLOBALS["lang"]['Submitted From'] = 'Предоставено от';

$GLOBALS["lang"]['subnet'] = 'Подмрежа';

$GLOBALS["lang"]['Subnet'] = 'Подмрежа';

$GLOBALS["lang"]['Subscription ID'] = 'Идентификационен код на абонамента';

$GLOBALS["lang"]['suburb'] = 'Предградие';

$GLOBALS["lang"]['Suburb'] = 'Предградие';

$GLOBALS["lang"]['Success'] = 'Успех';

$GLOBALS["lang"]['Sudan'] = 'Судан';

$GLOBALS["lang"]['Sudo Password'] = 'Судо парола';

$GLOBALS["lang"]['Sudo Password (optional)'] = 'Судо парола (по избор)';

$GLOBALS["lang"]['suite'] = 'Апартамент';

$GLOBALS["lang"]['Suite'] = 'Апартамент';

$GLOBALS["lang"]['summaries'] = 'Сумари';

$GLOBALS["lang"]['Summaries'] = 'Сумари';

$GLOBALS["lang"]['Summary'] = 'Резюме';

$GLOBALS["lang"]['Sunday'] = 'Неделя';

$GLOBALS["lang"]['supplier'] = 'Доставчик';

$GLOBALS["lang"]['Supplier'] = 'Доставчик';

$GLOBALS["lang"]['Support'] = 'Подкрепа';

$GLOBALS["lang"]['Supported types are <code>subnet</code>, <code>seed</code> and <code>active directory</code>.'] = 'Поддържани видове са <code>subnet</code>, <code>seed</code> както и <code>active directory</code>.';

$GLOBALS["lang"]['Suriname'] = 'Суринам';

$GLOBALS["lang"]['Svalbard & Jan Mayen Islands'] = 'Острови Свалбард и Ян Майен';

$GLOBALS["lang"]['Swaziland'] = 'Свазиленд';

$GLOBALS["lang"]['Sweden'] = 'Швеция';

$GLOBALS["lang"]['switch_device_id'] = 'Превключване на идентификатора на устройството';

$GLOBALS["lang"]['Switch Device ID'] = 'Превключване на идентификатора на устройството';

$GLOBALS["lang"]['switch_port'] = 'Превключване на порт';

$GLOBALS["lang"]['Switch Port'] = 'Превключване на порт';

$GLOBALS["lang"]['Switzerland, Swiss Confederation'] = 'Швейцария, Конфедерация Швейцария';

$GLOBALS["lang"]['Syrian Arab Republic'] = 'Сирийска арабска република';

$GLOBALS["lang"]['sysContact'] = 'SysContact';

$GLOBALS["lang"]['SysContact'] = 'SysContact';

$GLOBALS["lang"]['sysDescr'] = 'SysDescr';

$GLOBALS["lang"]['SysDescr'] = 'SysDescr';

$GLOBALS["lang"]['sysLocation'] = 'Сислокация';

$GLOBALS["lang"]['SysLocation'] = 'Сислокация';

$GLOBALS["lang"]['sysName'] = 'SysName';

$GLOBALS["lang"]['SysName'] = 'SysName';

$GLOBALS["lang"]['sysObjectID'] = 'SysObjectID';

$GLOBALS["lang"]['SysObjectID'] = 'SysObjectID';

$GLOBALS["lang"]['sysUpTime'] = 'SysUpTime';

$GLOBALS["lang"]['SysUpTime'] = 'SysUpTime';

$GLOBALS["lang"]['system_component'] = 'Компонент на системата';

$GLOBALS["lang"]['System Component'] = 'Компонент на системата';

$GLOBALS["lang"]['System-Area Network'] = 'Системна мрежа';

$GLOBALS["lang"]['TX Bitrate'] = 'TX битрат';

$GLOBALS["lang"]['TX Freq'] = 'TX Freq';

$GLOBALS["lang"]['TX Level'] = 'Ниво TX';

$GLOBALS["lang"]['TX Power'] = 'TX мощност';

$GLOBALS["lang"]['TX Profile'] = 'Профил TX';

$GLOBALS["lang"]['table'] = 'Таблица';

$GLOBALS["lang"]['Table'] = 'Таблица';

$GLOBALS["lang"]['tag'] = 'Етикет';

$GLOBALS["lang"]['Tag'] = 'Етикет';

$GLOBALS["lang"]['tag_1'] = 'Етикет 1';

$GLOBALS["lang"]['Tag 1'] = 'Етикет 1';

$GLOBALS["lang"]['tag_2'] = 'Етикет 2';

$GLOBALS["lang"]['Tag 2'] = 'Етикет 2';

$GLOBALS["lang"]['tag_3'] = 'Етикет 3';

$GLOBALS["lang"]['Tag 3'] = 'Етикет 3';

$GLOBALS["lang"]['tags'] = 'Етикети';

$GLOBALS["lang"]['Tags'] = 'Етикети';

$GLOBALS["lang"]['Tags :: '] = 'Tags: ';

$GLOBALS["lang"]['Taiwan'] = 'Тайван';

$GLOBALS["lang"]['Tajikistan'] = 'Таджикистан';

$GLOBALS["lang"]['Tanzania'] = 'Танзания';

$GLOBALS["lang"]['task'] = 'Задача';

$GLOBALS["lang"]['Task'] = 'Задача';

$GLOBALS["lang"]['tasks'] = 'Задачи';

$GLOBALS["lang"]['Tasks'] = 'Задачи';

$GLOBALS["lang"]['tcp_ports'] = 'Tcp портове';

$GLOBALS["lang"]['Tcp Ports'] = 'Tcp портове';

$GLOBALS["lang"]['tenant'] = 'Наемател';

$GLOBALS["lang"]['Tenant'] = 'Наемател';

$GLOBALS["lang"]['ternary'] = 'Тернария';

$GLOBALS["lang"]['Ternary'] = 'Тернария';

$GLOBALS["lang"]['Test 1'] = 'Изпитване 1';

$GLOBALS["lang"]['Test 2'] = 'Изпитване 2';

$GLOBALS["lang"]['Test 3'] = 'Изпитване 3';

$GLOBALS["lang"]['test_minutes'] = 'Протоколи от изпитването';

$GLOBALS["lang"]['Test Minutes'] = 'Протоколи от изпитването';

$GLOBALS["lang"]['test_os'] = 'Изпитване Os';

$GLOBALS["lang"]['Test Os'] = 'Изпитване Os';

$GLOBALS["lang"]['test_subnet'] = 'Тестов подмрежа';

$GLOBALS["lang"]['Test Subnet'] = 'Тестов подмрежа';

$GLOBALS["lang"]['tests'] = 'Изпитвания';

$GLOBALS["lang"]['Tests'] = 'Изпитвания';

$GLOBALS["lang"]['Text'] = 'Текст';

$GLOBALS["lang"]['Thailand'] = 'Тайланд';

$GLOBALS["lang"]['The Active Directory domain to retrieve a list of subnets from.'] = 'Домейнът на активната директория за извличане на списък с подмрежи от.';

$GLOBALS["lang"]['The Active Directory server to retrieve a list of subnets from.'] = 'Сървърът Active Directory за извличане на списък на subnets от.';

$GLOBALS["lang"]['The Automatable metric captures the answer to the question <strong>Can an attacker automate exploitation events for this vulnerability across multiple targets?</strong> based on steps 1-4 of the kill chain. These steps are reconnaissance, weaponization, delivery, and exploitation (Not Defined, No, Yes).'] = 'Автоматичната метрика улавя отговора на въпроса <strong>Може ли нападателят да автоматизира експлоатацията на тази уязвимост при множество цели?</strong> Въз основа на стъпки 1-4 от веригата за убиване. Тези стъпки са разузнаване, оръжие, доставка и експлоатация (не е определено, не, да).';

$GLOBALS["lang"]['The CVE identifier.'] = 'Идентификацията на CVE.';

$GLOBALS["lang"]['The Cloud that owns this item. Links to <code>clouds.id</code>.'] = 'Облакът, който притежава този предмет. Връзки към <code>clouds.id</code>.';

$GLOBALS["lang"]['The Group used to run the Baseline. Links to <code>groups.id</code>.'] = 'Групата е управлявала базата. Връзки към <code>groups.id</code>.';

$GLOBALS["lang"]['The ID from the devices table (the devices.name will be displayed) of the NTU at this end of the connection. Links to <code>devices.id</code>.'] = 'ID от таблицата с устройства (името ще бъде показано) на NTU в този край на връзката. Връзки към <code>devices.id</code>.';

$GLOBALS["lang"]['The ID from the imported benchmark policy.'] = 'Идентификационен код на вносната референтна политика.';

$GLOBALS["lang"]['The ID from the locations table (the locations.name will be displayed) of this end of the connection. Links to <code>locations.id</code>. The A location is usually the <code>FROM</code> location.'] = 'ID от таблицата с местоположенията (името ще бъде показано) на този край на връзката. Връзки към <code>locations.id</code>. Мястото А обикновено е <code>FROM</code> местоположение.';

$GLOBALS["lang"]['The ID from the locations table (the locations.name will be displayed) of this end of the connection. Links to <code>locations.id</code>. The B location is usually the <code>TO</code> location.'] = 'ID от таблицата с местоположенията (името ще бъде показано) на този край на връзката. Връзки към <code>locations.id</code>. Мястото B обикновено е <code>TO</code> местоположение.';

$GLOBALS["lang"]['The ID of the associated device (if any). Links to <code>devices.id</code>.'] = 'Идентификация на свързаното устройство (ако има такова). Връзки към <code>devices.id</code>.';

$GLOBALS["lang"]['The ID of the associated discovery. Linked to <code>discoveries.id</code>'] = 'Идентифициране на свързаното откритие. Свързано <code>discoveries.id</code>';

$GLOBALS["lang"]['The ID of the item of the associated type.'] = 'Идентификационен код на елемента от свързания тип.';

$GLOBALS["lang"]['The ID of this orgs parent org. Linked to <code>orgs.id</code>'] = 'Идентифициране на този orgs родителски орг. Свързано <code>orgs.id</code>';

$GLOBALS["lang"]['The ID provided by the provider.'] = 'Идентификационен код, предоставен от доставчика.';

$GLOBALS["lang"]['The ID retrieved from a Cloud discovery.'] = 'Идентифициран е от "Клауд."';

$GLOBALS["lang"]['The IP address of this collector used to communicate with the server.'] = 'IP адресът на този колектор, използван за комуникация със сървъра.';

$GLOBALS["lang"]['The IP of the device to start a seed discovery with.'] = 'IP на устройството за откриване на семена.';

$GLOBALS["lang"]['The IP of the external interface.'] = 'IP на външния интерфейс.';

$GLOBALS["lang"]['The IP of the internal interface.'] = 'IP на вътрешния интерфейс.';

$GLOBALS["lang"]['The ISP or Telco providing this link.'] = 'ISP или Telco предоставят тази връзка.';

$GLOBALS["lang"]['The JSON record from Mitre.'] = 'Записът на Джейсън от Митре.';

$GLOBALS["lang"]['The JSON record from the NVD feed.'] = 'Записът на JSON от NVD.';

$GLOBALS["lang"]['The LDAP OU of this user (if LDAP is used).'] = 'LDAP OU на този потребител (ако се използва LDAP).';

$GLOBALS["lang"]['The Location that contains this network. Links to <code>locations.id</code>.'] = 'Местоположението, което съдържа тази мрежа. Връзки към <code>locations.id</code>.';

$GLOBALS["lang"]['The NVD assigned base status.'] = 'Според NVD базовият статус.';

$GLOBALS["lang"]['The Nmap timing preset.'] = 'Времето за NMAP е определено.';

$GLOBALS["lang"]['The OS this package should be reported against. Blank for all. Use the percent sign % as a wildcard. Will be tested against os_group, os_family and os_name in that order.'] = 'OS този пакет трябва да се докладва против. Празен за всички. Използвай знака за процента като дива карта. Ще бъдат тествани срещу os_group, os_family и os_name в този ред.';

$GLOBALS["lang"]['The Open-AudIT API'] = 'Open- AudIT API';

$GLOBALS["lang"]['The Open-AudIT id of the linked cloud. Links to <code>clouds.id</code>.'] = 'Идентифицирането на свързания облак. Връзки към <code>clouds.id</code>.';

$GLOBALS["lang"]['The Open-AudIT server code was exeucted within this file.'] = 'Open- Aud Кодът на сървъра беше проверен в този файл.';

$GLOBALS["lang"]['The Open-AudIT server code was exeucted within this function.'] = 'Open- Aud Кодът на ИТ сървъра е бил проследен в рамките на тази функция.';

$GLOBALS["lang"]['The Organisation that owns this item. Links to <code>orgs.id</code>.'] = 'Организацията, която притежава тази позиция. Връзки към <code>orgs.id</code>.';

$GLOBALS["lang"]['The Process Identifier of the running associated discovery.'] = 'Идентификационен код на процеса на съвместното откриване.';

$GLOBALS["lang"]['The RU positon of the top of this device.'] = 'Позитонът на устройството.';

$GLOBALS["lang"]['The SNMP community string.'] = 'СНМП общността струна.';

$GLOBALS["lang"]['The SNMP v3 Authentication Passphrase.'] = 'SNMP v3 парола за удостоверяване.';

$GLOBALS["lang"]['The SNMP v3 Authentication Protocol.'] = 'Протокол за удостоверяване SNMP v3.';

$GLOBALS["lang"]['The SNMP v3 Privacy Passphrase.'] = 'SNMP v3 Privacy Passfaction.';

$GLOBALS["lang"]['The SNMP v3 Privacy Protocol.'] = 'Протокол за поверителност SNMP v3.';

$GLOBALS["lang"]['The SNMP v3 Security Level.'] = 'SNMP v3 ниво на сигурност.';

$GLOBALS["lang"]['The SNMP v3 Security Name.'] = 'SNMP v3 Security Name.';

$GLOBALS["lang"]['The SNMPv3 context Engine ID (optional).'] = 'Идентификационен код на двигателя (по избор).';

$GLOBALS["lang"]['The SNMPv3 context Name (optional).'] = 'Име на контекста SNMPv3 (по избор).';

$GLOBALS["lang"]['The URL of the external system.'] = 'Адресът на външната система.';

$GLOBALS["lang"]['The URL of your Open-AudIT Server that this Collector will report to (no trailing slash).'] = 'Адрес на вашия Open-AudIT Сървър, на който този колектор ще докладва (без наклонена черта).';

$GLOBALS["lang"]['The URL the audit scripts should submit their result to.'] = 'Адресът, на който трябва да представят резултатите от одита.';

$GLOBALS["lang"]['The actual full name of this user.'] = 'Истинското пълно име на този потребител.';

$GLOBALS["lang"]['The associated baseline. Links to <code>baselines.id</code>.'] = 'Свързаното изходно ниво. Връзки към <code>baselines.id</code>.';

$GLOBALS["lang"]['The associated discovery (if required). Links to <code>discoveries.id</code>.'] = 'Свързаното откритие (ако е необходимо). Връзки към <code>discoveries.id</code>.';

$GLOBALS["lang"]['The attribute to test (from the <code>devices</code> table).'] = 'Атрибутът към изпитването (от <code>devices</code> Таблица).';

$GLOBALS["lang"]['The attribute to test (must match an external field name from below).'] = 'Атрибутът към изпитването (трябва да съответства на външно наименование на полето отдолу).';

$GLOBALS["lang"]['The audit script upon which to base your customisations.'] = 'Одитният сценарий, върху който да базирате персонализациите си.';

$GLOBALS["lang"]['The base path from which to search for Users.'] = 'Базовият път, от който да търсим потребители.';

$GLOBALS["lang"]['The benchmark type.'] = 'Типът бенчмарк.';

$GLOBALS["lang"]['The building the rack is located in.'] = 'Сградата на багажника се намира в.';

$GLOBALS["lang"]['The calculated number of devices to be created externally.'] = 'Изчисленият брой устройства, които трябва да бъдат създадени външно.';

$GLOBALS["lang"]['The calculated number of devices to be created in Open-AudIT.'] = 'Изчисленият брой устройства, които да бъдат създадени в Open-AudIT.';

$GLOBALS["lang"]['The collectors internal IP used when it runs a discovery.'] = 'Колекционерите са ползвали вътрешен IP, когато са правили открития.';

$GLOBALS["lang"]['The column name from the foreign table. Should be one of: class, environment, status, type or menu_category.'] = 'Името на колоната от чуждестранната таблица. Трябва да бъде един от: клас, околна среда, статус, тип или меню_категория.';

$GLOBALS["lang"]['The command executed upon the target device or Open-AudIT server code executed during discovery.'] = 'Командата се изпълнява на целевата устройство или Open-AudIT сървърен код, изпълнен по време на откриването.';

$GLOBALS["lang"]['The configuration of your cluster can be: <code>active/active</code>, <code>active/passive</code>, <code>N+1</code>, <code>N+M</code>, <code>N-to-1</code>, <code>N-to-N</code>, <code>other</code> or blank.'] = 'Конфигурацията на вашия клъстер може да бъде: <code>active/active</code>, <code>active/passive</code>, <code>N+1</code>, <code>N+M</code>, <code>N-to-1</code>, <code>N-to-N</code>, <code>other</code> или празен.';

$GLOBALS["lang"]['The credentials password. If the credentials are an SSH Key, this is the password used to unlock the key and is optional.'] = 'Паролата. Ако пълномощията са SSH ключ, това е паролата, използвана за отключване на ключа и е по избор.';

$GLOBALS["lang"]['The credentials username.'] = 'Потребителско име.';

$GLOBALS["lang"]['The current status of the Cloud Discovery.'] = 'Състоянието на Cloud Discovery.';

$GLOBALS["lang"]['The current status of the discovery.'] = 'Състоянието на откритието.';

$GLOBALS["lang"]['The dashboard that will be shown by default for this user. Links to <code>dashboards.id</code>.'] = 'Арматурното табло, което ще бъде показано по подразбиране за този потребител. Връзки към <code>dashboards.id</code>.';

$GLOBALS["lang"]['The database version and web version are inconsistent.'] = 'Версията на базата данни и уеб версията са несъвместими.';

$GLOBALS["lang"]['The date of license expiration.'] = 'Датата на изтичане на лиценза.';

$GLOBALS["lang"]['The date the software is discontinued by the manufacturer. Usually replaced by a newer version. Maintenance may still be available.'] = 'Датата, на която софтуерът се прекратява от производителя. Обикновено се заменя с по-нова версия. Поддръжката все още може да е на разположение.';

$GLOBALS["lang"]['The date the software no longer receives updates and is effectively discontinued altogether. Maintenance is discontinued.'] = 'Датата, на която софтуерът вече не получава актуализации и се прекратява напълно. Поддържането се прекратява.';

$GLOBALS["lang"]['The date this item was changed or added (read only). NOTE - This is the timestamp from the server.'] = 'Датата на промяна или добавяне на този елемент (само за четене). ЗАБЕЛЕЖКА - Това е печатът на сървъра.';

$GLOBALS["lang"]['The date/time when this result was created.'] = 'Дата/време, когато е създаден този резултат.';

$GLOBALS["lang"]['The day of the month when this task should execute (* for every day).'] = 'Деня на месеца , в който това дело ще се изпълни .';

$GLOBALS["lang"]['The day of the week when this task should execute (* for every day).'] = 'Деня на седмицата , когато тази задача трябва да се изпълни .';

$GLOBALS["lang"]['The default language assigned to any user created by this method.'] = 'Езикът по подразбиране, определен на всеки потребител, създаден по този метод.';

$GLOBALS["lang"]['The device must respond to an Nmap ping before it is considered online.'] = 'Устройството трябва да отговаря на НМАП пинг преди да се счита за онлайн.';

$GLOBALS["lang"]['The device within Open-AudIT. Links to <code>devices.id</code>.'] = 'Устройството вътре в Open-AudIT. Връзки към <code>devices.id</code>.';

$GLOBALS["lang"]['The direct link for the script is'] = 'Директната връзка за скрипта е';

$GLOBALS["lang"]['The email address of the reciever'] = 'Имейл адресът на ресивера';

$GLOBALS["lang"]['The enterprise binary from FirstWave is required for a license. Please download Open-AudIT from'] = 'Двоичното предприятие от FirstWave се изисква за лиценз. Моля, изтеглете Open- AudIT от';

$GLOBALS["lang"]['The entire associated baseline this result is from.'] = 'Цялото свързано изходно ниво е от този резултат.';

$GLOBALS["lang"]['The externally referenced location ID. Usually populated by Cloud audits.'] = 'Външната идентификация на местоположението. Обикновено се населява от Cloud одити.';

$GLOBALS["lang"]['The first time that Open-AudIT retrieved details of this device.'] = 'Първият път, когато Open-AudIT извади подробности за това устройство.';

$GLOBALS["lang"]['The floor the rack is located on.'] = 'Подът на багажника е разположен на.';

$GLOBALS["lang"]['The foreign table to reference. Should be one of: devices, locations, orgs or queries.'] = 'Чуждестранната таблица. Трябва да бъде едно от: устройства, места, орги или запитвания.';

$GLOBALS["lang"]['The format used for the output to be emailed.'] = 'Форматът, използван за получаване на имейл.';

$GLOBALS["lang"]['The fully qualified column upon which to group by. NOTE: When type = traffic, this represents the red query id.'] = 'Напълно квалифицираната колона, от която да се групира. БЕЛЕЖКА: Когато тип = трафик, това представлява червената заявка ID.';

$GLOBALS["lang"]['The fully qualified table.column. Multiple may be provided, separated by a comma (no spaces).'] = 'Напълно квалифицирана таблица. Колона. Могат да се предоставят няколко, разделени от запетая (без пространства).';

$GLOBALS["lang"]['The generated SQL query to test for this vulnerability. This field can be edited to correct the query as required.'] = 'Генерираната SQL заявка за изпитване за тази уязвимост. Това поле може да бъде редактирано, за да се коригира заявката, както се изисква.';

$GLOBALS["lang"]['The group of devices on which the baseline was run against.'] = 'Групата устройства, срещу които е била приложена базовата линия.';

$GLOBALS["lang"]['The group that provides a list of devices for the integration. Links to <code>groups.id</code>.'] = 'Групата, която предоставя списък на устройствата за интеграция. Връзки към <code>groups.id</code>.';

$GLOBALS["lang"]['The hour of the day when this task should execute (* for every hour).'] = 'Часът на деня , когато това дело ще се изпълни .';

$GLOBALS["lang"]['The id of the linked device. Links to <code>devices.id</code>'] = 'Идентификацията на свързаното устройство. Връзки към <code>devices.id</code>';

$GLOBALS["lang"]['The identifier column (integer) in the database (read only).'] = 'Колоната за идентификатор (integer) в базата данни (само за четене).';

$GLOBALS["lang"]['The importance of this baseline (not used yet).'] = 'Значението на това изходно ниво (все още не се използва).';

$GLOBALS["lang"]['The integer of severity.'] = 'Цялото число на тежестта.';

$GLOBALS["lang"]['The ip address of the Auth method.'] = 'IP адреса на метода на Аут.';

$GLOBALS["lang"]['The language to translate the web interface into for the user.'] = 'Езикът за превод на уеб интерфейса за потребителя.';

$GLOBALS["lang"]['The last date and time this item was executed (read only).'] = 'Последната дата и час на изпълнение на този елемент (само за четене).';

$GLOBALS["lang"]['The last time that Open-AudIT retrieved details of this device.'] = 'Последният път, когато Open-AudIT извади подробности за това устройство.';

$GLOBALS["lang"]['The last time this benchmarks was executed.'] = 'Последният път, когато бяха изпълнени тези критерии.';

$GLOBALS["lang"]['The last time this integration was run.'] = 'Последният път, когато се проведе тази интеграция.';

$GLOBALS["lang"]['The line number assigned by the provider to the line at this end of the connection.'] = 'Номерът на линията, определен от доставчика на линията в този край на връзката.';

$GLOBALS["lang"]['The location the rack is located in. Links to <code>locations.id</code>.'] = 'Местоположението на багажника се намира в. Връзки към <code>locations.id</code>.';

$GLOBALS["lang"]['The locations address.'] = 'Адресът.';

$GLOBALS["lang"]['The locations area.'] = 'Местонахождението.';

$GLOBALS["lang"]['The locations city.'] = 'Местонахождението на града.';

$GLOBALS["lang"]['The locations country.'] = 'Местонахождението на страната.';

$GLOBALS["lang"]['The locations district.'] = 'Местонахождението.';

$GLOBALS["lang"]['The locations latitude.'] = 'Мястото ширина.';

$GLOBALS["lang"]['The locations level.'] = 'Ниво на местоположението.';

$GLOBALS["lang"]['The locations longitude.'] = 'Локациите дължина.';

$GLOBALS["lang"]['The locations phone.'] = 'Телефонът на местата.';

$GLOBALS["lang"]['The locations postcode.'] = 'Мястото пощенски код.';

$GLOBALS["lang"]['The locations region.'] = 'Районът с местата.';

$GLOBALS["lang"]['The locations room.'] = 'Мястото.';

$GLOBALS["lang"]['The locations state.'] = 'Местоположенията са известни.';

$GLOBALS["lang"]['The locations suburb.'] = 'Местонахождението предградие.';

$GLOBALS["lang"]['The locations suite.'] = 'Мястото апартамент.';

$GLOBALS["lang"]['The maximum physical weight (in KGs) this rack can hold.'] = 'Максималното физическо тегло (в KGs) може да се задържи.';

$GLOBALS["lang"]['The maximum total BTUs this rack is rated for.'] = 'Максималният общ брой на BTU, за който се оценява багажника.';

$GLOBALS["lang"]['The minute of the hour when this task should execute (* for every minute).'] = 'Минутите на часа, когато тази задача трябва да се изпълни (* за всяка минута).';

$GLOBALS["lang"]['The month of the year when this task should execute (* for every month).'] = 'Месецът на годината, в който тази задача трябва да се изпълнява (* за всеки месец).';

$GLOBALS["lang"]['The name given to this item.'] = 'Името, дадено на този елемент.';

$GLOBALS["lang"]['The name given to this item. Ideally it should be unique.'] = 'Името, дадено на този елемент. В идеалния случай трябва да е уникален.';

$GLOBALS["lang"]['The name given to this user (used to login). Ideally it should be unique.'] = 'Името, дадено на този потребител (използван за влизане). В идеалния случай трябва да е уникален.';

$GLOBALS["lang"]['The name of the associated cloud (if required).'] = 'Име на свързания облак (ако е необходимо).';

$GLOBALS["lang"]['The name of the software package, as audited by Open-AudIT. Use the percent sign % as a wildcard.'] = 'Наименованието на софтуерния пакет, който се проверява от Open-AudIT. Използвай знака за процента като дива карта.';

$GLOBALS["lang"]['The name of the user who last changed or added this item (read only).'] = 'Името на потребителя, който последно е променил или добавил този елемент (само за четене).';

$GLOBALS["lang"]['The name provided by the provider.'] = 'Името, предоставено от доставчика.';

$GLOBALS["lang"]['The network in the format 192.168.1.0/24.'] = 'Мрежата във формат 191.168.1.0/24.';

$GLOBALS["lang"]['The network subnet to execute the discovery on.'] = 'Мрежовата мрежа да изпълни откритието.';

$GLOBALS["lang"]['The number of RUs this device occupies.'] = 'Броят на ЖП това устройство заема.';

$GLOBALS["lang"]['The number of associated locations. Links to <code>locations.cloud_id</code>.'] = 'Броят на свързаните места. Връзки към <code>locations.cloud_id</code>.';

$GLOBALS["lang"]['The number of associated networks. Links to <code>networks.cloud_id</code>.'] = 'Броят на асоциираните мрежи. Връзки към <code>networks.cloud_id</code>.';

$GLOBALS["lang"]['The number of audited devices in this cloud. Links to <code>devices.cloud_id</code> and <code>devices.serial</code>.'] = 'Броят на одитираните устройства в този облак. Връзки към <code>devices.cloud_id</code> както и <code>devices.serial</code>.';

$GLOBALS["lang"]['The number of critical severity vulnerabilities held by FirstWave (not in your database).'] = 'Броят на критичните слабости, държани от FirstWave (не и във вашата база данни).';

$GLOBALS["lang"]['The number of devices found by this discovery.'] = 'Броят на устройствата намерени от това откритие.';

$GLOBALS["lang"]['The number of devices in the associated group.'] = 'Броят на устройствата в асоциираната група.';

$GLOBALS["lang"]['The number of devices in this cloud with a state of running. Links to <code>devices.cloud_id</code> and <code>devices.instance_state</code>.'] = 'Броят на устройствата в този облак със състояние на движение. Връзки към <code>devices.cloud_id</code> както и <code>devices.instance_state</code>.';

$GLOBALS["lang"]['The number of devices in this cloud with a state of stopped. Links to <code>devices.cloud_id</code> and <code>devices.instance_state</code>.'] = 'Броят на устройствата в този облак със състояние на спиране. Връзки към <code>devices.cloud_id</code> както и <code>devices.instance_state</code>.';

$GLOBALS["lang"]['The number of devices in this cloud. Links to <code>devices.cloud_id</code>.'] = 'Броят на устройствата в този облак. Връзки към <code>devices.cloud_id</code>.';

$GLOBALS["lang"]['The number of devices this benchmark will be executed upon. Derived from <code>benchmarks.devices</code>.'] = 'Броят на устройствата, на които ще бъде изпълнен бенчмаркът. Drived from <code>benchmarks.devices</code>.';

$GLOBALS["lang"]['The number of devices to limit this discovery to.'] = 'Броят на устройствата за ограничаване на това откритие.';

$GLOBALS["lang"]['The number of high severity vulnerabilities held by FirstWave (not in your database).'] = 'Броят на слабостите с висока тежест, държани от FirstWave (не и във вашата база данни).';

$GLOBALS["lang"]['The number of low severity vulnerabilities held by FirstWave (not in your database).'] = 'Броят на слабите места с ниска тежест, държани от FirstWave (не и във вашата база данни).';

$GLOBALS["lang"]['The number of medium severity vulnerabilities held by FirstWave (not in your database).'] = 'Броят на слабите места със средна тежест, държани от FirstWave (не и във вашата база данни).';

$GLOBALS["lang"]['The number of purchased licenses.'] = 'Броят на закупените лицензи.';

$GLOBALS["lang"]['The number of seconds to try and communicate with the target IP.'] = 'Броят на секундите, за да се опита да комуникира с целевата IP.';

$GLOBALS["lang"]['The number of vulnerabilities without a severity held by FirstWave (not in your database).'] = 'Броят на слабостите без тежест, държани от FirstWave (не и във вашата база данни).';

$GLOBALS["lang"]['The optional secondary column. NOTE: When type = traffic, this represents the yellow query id.'] = 'Опционалната вторична колона. БЕЛЕЖКА: Когато тип = трафик, това представлява жълтата заявка ID.';

$GLOBALS["lang"]['The optional third column. NOTE: When type = traffic, this represents the green query id.'] = 'По избор третата колона. БЕЛЕЖКА: Когато тип = трафик, това представлява зелената заявка ID.';

$GLOBALS["lang"]['The orientation of this device.'] = 'Ориентацията на това устройство.';

$GLOBALS["lang"]['The password for the dn_account attribute.'] = 'Паролата за акаунта.';

$GLOBALS["lang"]['The password used to access the external system.'] = 'Паролата, използвана за достъп до външната система.';

$GLOBALS["lang"]['The path to the file or directory.'] = 'Пътят към файла или директорията.';

$GLOBALS["lang"]['The path to the file or directory. Directories should end with a trailing slash.'] = 'Пътят към файла или директорията. Директориите трябва да завършат с наклонена черта.';

$GLOBALS["lang"]['The physical depth (in CMs) of the rack.'] = 'Физическата дълбочина (в CMs) на багажника.';

$GLOBALS["lang"]['The physical height (in CMs) of the rack.'] = 'Физическата височина (в CMs) на багажника.';

$GLOBALS["lang"]['The physical weight (in KGs) of the rack at present.'] = 'Физическото тегло (в KGs) на багажника в момента.';

$GLOBALS["lang"]['The physical weight (in KGs) of the rack when empty.'] = 'Физическото тегло (в KGs) на багажника, когато е празно.';

$GLOBALS["lang"]['The physical width (in CMs) of the rack.'] = 'Физическата ширина (в CMs) на багажника.';

$GLOBALS["lang"]['The pod (if any) that this rack is part of.'] = 'Капсулата (ако има такава), от която е част тази стойка.';

$GLOBALS["lang"]['The power circuit this rack attaches to.'] = 'Захранващата верига, към която се прикрепя багажника.';

$GLOBALS["lang"]['The primary database table upon which to base this widget.'] = 'Основната таблица на базата данни, на която да се основава този джаджа.';

$GLOBALS["lang"]['The process identifier of this queue item.'] = 'Идентификационен код на процеса на тази точка от опашката.';

$GLOBALS["lang"]['The process that was used last to retrieve details about the device'] = 'Процесът, който е използван последен за извличане на подробности за устройството';

$GLOBALS["lang"]['The query that provides a list of devices for the integration. Links to <code>queries.id</code>.'] = 'Запитване, което предоставя списък на устройства за интеграция. Връзки към <code>queries.id</code>.';

$GLOBALS["lang"]['The rack asset number.'] = 'Номерът на актив.';

$GLOBALS["lang"]['The rack asset tag.'] = 'Табелката с активи.';

$GLOBALS["lang"]['The rack bar code.'] = 'Кодът на бара.';

$GLOBALS["lang"]['The rack model.'] = 'Моделът на багажника.';

$GLOBALS["lang"]['The rack serial.'] = 'Серийният сериал.';

$GLOBALS["lang"]['The rack series.'] = 'Сериите за балкона.';

$GLOBALS["lang"]['The rack this device is located in. Links to <code>racks.id</code>.'] = 'В багажника е разположено това устройство. Връзки към <code>racks.id</code>.';

$GLOBALS["lang"]['The recommended process of addressing and fixing identified security vulnerabilities. This typically involves applying patches, updates, or other measures to eliminate the risk posed by the vulnerabilities.'] = 'Препоръчаният процес на справяне и определяне на установените слабости по отношение на сигурността. Това обикновено включва прилагане на пластири, актуализации или други мерки за премахване на риска, породен от уязвимостта.';

$GLOBALS["lang"]['The regular domain notation of your directory. Eg - <code>open-audit.lan</code>.'] = 'Редовната нотация на вашия указател. Eg - <code>open-audit.lan</code>.';

$GLOBALS["lang"]['The result of the command.'] = 'Резултатът от командването.';

$GLOBALS["lang"]['The room the rack is located in.'] = 'Стаята, в която се намира багажника.';

$GLOBALS["lang"]['The row the rack is located in.'] = 'Редът, в който се намира багажника.';

$GLOBALS["lang"]['The secret key used in conjunction with your AWS EC2 API key.'] = 'Тайният ключ, използван заедно с вашия AWS EC2 API ключ.';

$GLOBALS["lang"]['The software end-of-life date.'] = 'Датата на края на живота на софтуера.';

$GLOBALS["lang"]['The software end-of-service-life date.'] = 'Датата на изтичане на срока на експлоатация на софтуера.';

$GLOBALS["lang"]['The specific database column from the specified database table.'] = 'Конкретната колона от базата данни от посочената таблица с данни.';

$GLOBALS["lang"]['The specific database table.'] = 'Конкретната таблица с данни.';

$GLOBALS["lang"]['The standard Nmap timing options. We usually use -T4 (Aggressive) as this is recommended for a decent broadband or ethernet connection.'] = 'Стандартните опции за Nmap. Обикновено използваме -T4 (агресивен), тъй като това се препоръчва за прилична широколентова или етернетна връзка.';

$GLOBALS["lang"]['The status of this integration'] = 'Статус на тази интеграция';

$GLOBALS["lang"]['The status of this queued item.'] = 'Статусът на този предмет на опашката.';

$GLOBALS["lang"]['The target IP this log entry referers to (if any).'] = 'Целта IP този лог вход рефери към (ако има такива).';

$GLOBALS["lang"]['The template for the link to be generated per result line.'] = 'Образецът за връзката, която трябва да се генерира по линия на резултата.';

$GLOBALS["lang"]['The text for the bottom of the chart in a line chart (only).'] = 'Текстът за долната част на графиката в линия диаграма (само).';

$GLOBALS["lang"]['The text that is displayed.'] = 'Текстът, който се показва.';

$GLOBALS["lang"]['The timestamp after which, this task should run. For example, run a task after the 1st June 2017 at 10am, set it to <code>2017-06-01 09:59:00</code>. This value should be zero padded (ie, 09, not 9). This value defaults to <code>2000-01-01 00:00:00</code> which means by default, a scheduled task will run at next scheduled execution time.'] = 'Времето, след което тази задача трябва да се изпълни. Например, изпълнявайте задача след 1 юни 2017 г. в 10:00 ч. <code>2017-06-01 09:59:00</code>. Тази стойност трябва да бъде нула подплатени (т.е. 09, а не 9). По подразбиране тази стойност <code>2000-01-01 00:00:00</code> което означава, че по подразбиране, планирана задача ще се изпълнява в следващия планиран час на изпълнение.';

$GLOBALS["lang"]['The top 10, 100 or 1000 (or none) TCP ports commonly in use according to Nmap.'] = 'Топ 10, 100 или 1000 (или нито един) портове TCP обикновено се използват съгласно Nmap.';

$GLOBALS["lang"]['The top 10, 100 or 1000 (or none) UDP ports commonly in use according to Nmap.'] = 'Топ 10, 100 или 1000 (или нито един) UDP портове обикновено се използват в съответствие с Nmap.';

$GLOBALS["lang"]['The total BTU output by this rack.'] = 'Общата продукция на BTU от този багажник.';

$GLOBALS["lang"]['The type of device.'] = 'Типът устройство.';

$GLOBALS["lang"]['The type of organisation.'] = 'Типът организация.';

$GLOBALS["lang"]['The type of rack (compute, power, network, etc).'] = 'Типът багажник (компютър, мощност, мрежа и т.н.).';

$GLOBALS["lang"]['The type of task to run. One of: baseline, benchmark, cloud discovery, discovery, integration, report, query.'] = 'Типът задача за изпълнение. Един от: базова, база, облачно откритие, откритие, интеграция, доклад, запитване.';

$GLOBALS["lang"]['The type of the integration (usually named after the external system).'] = 'Типът интеграция (обикновено кръстен на външната система).';

$GLOBALS["lang"]['The unique identifier of this server.'] = 'Уникалният идентификатор на този сървър.';

$GLOBALS["lang"]['The user account this collector uses. Links to <code>users.id</code>.'] = 'Потребителският акаунт, който колекционерът използва. Връзки към <code>users.id</code>.';

$GLOBALS["lang"]['The username used to access the external system.'] = 'Потребителското име, използвано за достъп до външната система.';

$GLOBALS["lang"]['The users email address.'] = 'Имейл адреса на потребителите.';

$GLOBALS["lang"]['The usual hours of operation at this site.'] = 'Обичайните часове работа на това място.';

$GLOBALS["lang"]['The value assigned to the item.'] = 'Стойността, определена за елемента.';

$GLOBALS["lang"]['The value that is stored for this particular item.'] = 'Стойността, която се съхранява за този конкретен елемент.';

$GLOBALS["lang"]['The vendor name as per CPE entries.'] = 'Име на продавача съгласно CPE.';

$GLOBALS["lang"]['The vendor taken from the CPE.'] = 'Продавачът е взел от CPE.';

$GLOBALS["lang"]['The web directory on the host that Open-AudIT is installed (requires a trailing slash).'] = 'Web директорията на хоста, че Open-AudIT е инсталиран ( requires a trailing slack).';

$GLOBALS["lang"]['The widget at position '] = 'Устройството на позиция ';

$GLOBALS["lang"]['The width of this device.'] = 'Широчината на това устройство.';

$GLOBALS["lang"]['Then'] = 'Тогава...';

$GLOBALS["lang"]['This CVE will be retrieved and overwrite the existing CVE if it exists.'] = 'Тази CVE ще бъде изтеглена и презапише съществуващата CVE, ако съществува.';

$GLOBALS["lang"]['This attribute is stored as a JSON object. It is the list of all collections and contains the collection name along with <code>c</code>, <code>r</code>, <code>u</code> and,or <code>d</code> which represent create, read, update and delete. These are the actions a user can perform on items from that particular collection.'] = 'Този атрибут се съхранява като обект JSON. Той е списък на всички колекции и съдържа името на колекцията заедно с <code>c</code>, <code>r</code>, <code>u</code> и, или <code>d</code> които представляват създаване, четене, актуализиране и изтриване. Това са действията, които потребителят може да извърши върху елементи от тази конкретна колекция.';

$GLOBALS["lang"]['This can be either a varchar (a text field), a list (a list of values that can be selected) or a date.'] = 'Това може да бъде или Варчар (текстово поле), списък (списък със стойности, които могат да бъдат избрани) или дата.';

$GLOBALS["lang"]['This collectors universally unique identifier.'] = 'Този колектори универсално уникален идентификатор.';

$GLOBALS["lang"]['This description is auto-populated and should ideally be left as-is.'] = 'Това описание е автоматично населено и в идеалния случай трябва да бъде оставено както-е.';

$GLOBALS["lang"]['This feature requires a Professional or an Enterprise license.'] = 'Тази функция изисква професионален или лиценз на Enterprise.';

$GLOBALS["lang"]['This is generally the primary column, unless otherwise configured. NOTE: When type = traffic, this represents the secondary text.'] = 'Това обикновено е основната колона, освен ако не е конфигурирана друга. БЕЛЕЖКА: Когато тип = трафик, това представлява вторичния текст.';

$GLOBALS["lang"]['This item must match the value of the attribute selected or contains the ID of the query to be used.'] = 'Този елемент трябва да съответства на стойността на избрания атрибут или съдържа ID на заявката, която трябва да се използва.';

$GLOBALS["lang"]['This item must match the value of the attribute selected.'] = 'Този елемент трябва да съответства на стойността на избрания атрибут.';

$GLOBALS["lang"]['This license expires on'] = 'Този лиценз изтича на';

$GLOBALS["lang"]['This should be set to either 1 or the height of the rack.'] = 'Това трябва да бъде определено на 1 или височината на багажника.';

$GLOBALS["lang"]['This will auto-populate.'] = 'Това ще стане автоматично.';

$GLOBALS["lang"]['This will considerably slow the discovery scan.'] = 'Това значително ще забави сканирането.';

$GLOBALS["lang"]['Thursday'] = 'четвъртък';

$GLOBALS["lang"]['time_caption'] = 'Капитан на времето';

$GLOBALS["lang"]['Time Caption'] = 'Капитан на времето';

$GLOBALS["lang"]['time_daylight'] = 'Дневна светлина';

$GLOBALS["lang"]['Time Daylight'] = 'Дневна светлина';

$GLOBALS["lang"]['Time to Execute'] = 'Време за изпълнение';

$GLOBALS["lang"]['timeout'] = 'Прекъсване';

$GLOBALS["lang"]['Timeout'] = 'Прекъсване';

$GLOBALS["lang"]['Timeout Per Target (Seconds)'] = 'Тайм аут за целта (втори)';

$GLOBALS["lang"]['Timesatamp'] = 'Timesatamp';

$GLOBALS["lang"]['Timestamp'] = 'Времеви печат';

$GLOBALS["lang"]['timing'] = 'Момент';

$GLOBALS["lang"]['Timing'] = 'Момент';

$GLOBALS["lang"]['Timor-Leste'] = 'Източен Тимор';

$GLOBALS["lang"]['Title'] = 'Заглавие';

$GLOBALS["lang"]['Togo'] = 'Того';

$GLOBALS["lang"]['Tokelau'] = 'Токелау';

$GLOBALS["lang"]['Tonga'] = 'Тонга';

$GLOBALS["lang"]['toolbar_style'] = 'Стил на лентата с инструменти';

$GLOBALS["lang"]['Toolbar Style'] = 'Стил на лентата с инструменти';

$GLOBALS["lang"]['Top Nmap TCP Ports'] = 'Top Nmap TCP Ports';

$GLOBALS["lang"]['Top Nmap UDP Ports'] = 'Top Nmap UDP портове';

$GLOBALS["lang"]['Traditional Chinese'] = 'Традиционен китайски';

$GLOBALS["lang"]['Traffic Light'] = 'Светлина за движение';

$GLOBALS["lang"]['Trinidad and Tobago'] = 'Тринидад и Тобаго';

$GLOBALS["lang"]['Troubleshooting LDAP Logins'] = 'Отстраняване на пропуските в LDAP';

$GLOBALS["lang"]['Try all the latest features with a FREE 100 device license of Open-AudIT Enterprise. Please read the <a href=\"'] = 'Опитайте всички най-новите функции с безплатен 100 лиценз устройство на Open-AudIT Enterprise. Моля, прочетете <a href=\"';

$GLOBALS["lang"]['Tuesday'] = 'Вторник';

$GLOBALS["lang"]['Tunisia'] = 'Тунис';

$GLOBALS["lang"]['Turkey'] = 'Турция';

$GLOBALS["lang"]['Turkmenistan'] = 'Туркменистан';

$GLOBALS["lang"]['Turks and Caicos Islands'] = 'Острови Търкс и Кайкос';

$GLOBALS["lang"]['Tuvalu'] = 'Тувалу';

$GLOBALS["lang"]['tx_bitrate'] = 'Tx Битрат';

$GLOBALS["lang"]['Tx Bitrate'] = 'Tx Битрат';

$GLOBALS["lang"]['tx_freq'] = 'Tx Freq';

$GLOBALS["lang"]['Tx Freq'] = 'Tx Freq';

$GLOBALS["lang"]['tx_level'] = 'Ниво Tx';

$GLOBALS["lang"]['Tx Level'] = 'Ниво Tx';

$GLOBALS["lang"]['tx_power'] = 'Tx Power';

$GLOBALS["lang"]['Tx Power'] = 'Tx Power';

$GLOBALS["lang"]['tx_profile'] = 'Профил Tx';

$GLOBALS["lang"]['Tx Profile'] = 'Профил Tx';

$GLOBALS["lang"]['type'] = 'Тип';

$GLOBALS["lang"]['Type'] = 'Тип';

$GLOBALS["lang"]['URL'] = 'Адрес';

$GLOBALS["lang"]['uuid'] = 'UUID';

$GLOBALS["lang"]['UUID'] = 'UUID';

$GLOBALS["lang"]['udp_ports'] = 'Портове Udp';

$GLOBALS["lang"]['Udp Ports'] = 'Портове Udp';

$GLOBALS["lang"]['Uganda'] = 'Уганда';

$GLOBALS["lang"]['Ukraine'] = 'Украйна';

$GLOBALS["lang"]['uninstall'] = 'Деинсталиране';

$GLOBALS["lang"]['Uninstall'] = 'Деинсталиране';

$GLOBALS["lang"]['Uninstall the Agent'] = 'Деинсталиране на агента';

$GLOBALS["lang"]['United Arab Emirates'] = 'Обединени арабски емирства';

$GLOBALS["lang"]['United Kingdom'] = 'Обединено кралство';

$GLOBALS["lang"]['United States Minor Outlying Islands'] = 'Американски острови';

$GLOBALS["lang"]['United States Virgin Islands'] = 'САЩ Вирджински острови';

$GLOBALS["lang"]['United States of America'] = 'Съединени американски щати';

$GLOBALS["lang"]['Unknown'] = 'Неизвестно';

$GLOBALS["lang"]['unlock_pin'] = 'Отключи карфица';

$GLOBALS["lang"]['Unlock Pin'] = 'Отключи карфица';

$GLOBALS["lang"]['Unscheduled'] = 'Непланирано';

$GLOBALS["lang"]['Unused as at 5.2.0.'] = 'Не се използва в 5.2.0.';

$GLOBALS["lang"]['Unused.'] = 'Неизползваеми.';

$GLOBALS["lang"]['Update'] = 'Обновяване';

$GLOBALS["lang"]['update_external_count'] = 'Обновяване на външния брой';

$GLOBALS["lang"]['Update External Count'] = 'Обновяване на външния брой';

$GLOBALS["lang"]['update_external_from_internal'] = 'Обновяване на външната от вътрешната';

$GLOBALS["lang"]['Update External From Internal'] = 'Обновяване на външната от вътрешната';

$GLOBALS["lang"]['update_internal_count'] = 'Обновяване на вътрешния брой';

$GLOBALS["lang"]['Update Internal Count'] = 'Обновяване на вътрешния брой';

$GLOBALS["lang"]['update_internal_from_external'] = 'Обновяване на вътрешната от външната';

$GLOBALS["lang"]['Update Internal From External'] = 'Обновяване на вътрешната от външната';

$GLOBALS["lang"]['Update NMIS Devices from Open-AudIT'] = 'Обновяване на NMIS устройства от Open-AudIT';

$GLOBALS["lang"]['Update Open-AudIT Devices from '] = 'Обновяване на Open- AudIT Устройства от ';

$GLOBALS["lang"]['Update Open-AudIT Devices from NMIS'] = 'Обновяване на Open- AudIT Устройства от NSM';

$GLOBALS["lang"]['Updated each time discovery has been executed with IPs detected to be responding.'] = 'Обновяване на всяко откритие е било извършено с IP-та, открити да отговарят.';

$GLOBALS["lang"]['Updated each time discovery has been executed with IPs that have been scanned by Nmap.'] = 'Обновено всяко откритие е било извършено с IP-та, сканирани от Nmap.';

$GLOBALS["lang"]['Updated each time discovery has been executed with devices we were able to audit.'] = 'Обновяването на всяко откритие е извършено с устройства, които успяхме да проверим.';

$GLOBALS["lang"]['Updated each time discovery has been executed with devices we were able to query.'] = 'Обновено всяко откритие е извършено с устройства, които сме могли да проверим.';

$GLOBALS["lang"]['Updated each time discovery has been executed.'] = 'Обновяването на всяко откритие е извършено.';

$GLOBALS["lang"]['Updated each time the discovery has been executed.'] = 'Обновяване всеки път, когато откриването е било извършено.';

$GLOBALS["lang"]['Updated each time the discovery has completed execution.'] = 'Обновяване всеки път, когато откритието завърши екзекуцията.';

$GLOBALS["lang"]['Updating'] = 'Обновяване';

$GLOBALS["lang"]['Upgrade'] = 'Обновяване';

$GLOBALS["lang"]['Upload an audit result file'] = 'Качване на файл с резултатите от одита';

$GLOBALS["lang"]['Upper Case'] = 'Горен панел';

$GLOBALS["lang"]['uptime'] = 'Крайно време';

$GLOBALS["lang"]['Uptime'] = 'Крайно време';

$GLOBALS["lang"]['url'] = 'Url';

$GLOBALS["lang"]['Url'] = 'Url';

$GLOBALS["lang"]['Uruguay, Eastern Republic of'] = 'Уругвай, Източна република';

$GLOBALS["lang"]['usb'] = 'USb';

$GLOBALS["lang"]['Usb'] = 'USb';

$GLOBALS["lang"]['use'] = 'Използване';

$GLOBALS["lang"]['Use'] = 'Използване';

$GLOBALS["lang"]['use_authentication'] = 'Използване на автентичността';

$GLOBALS["lang"]['Use Authentication'] = 'Използване на автентичността';

$GLOBALS["lang"]['use_authorisation'] = 'Използване на разрешение';

$GLOBALS["lang"]['Use Authorisation'] = 'Използване на разрешение';

$GLOBALS["lang"]['Use SNMP'] = 'Използване на SNMP';

$GLOBALS["lang"]['Use SSH'] = 'Използване на SSH';

$GLOBALS["lang"]['Use Secure (LDAPS)'] = 'Използване подсигурено (LDAPS)';

$GLOBALS["lang"]['Use Service Version Detection'] = 'Използване на версия на услугата за откриване';

$GLOBALS["lang"]['Use WMI'] = 'Използване на WMI';

$GLOBALS["lang"]['Use for Authentication'] = 'Използване за удостоверяване';

$GLOBALS["lang"]['Use for Roles'] = 'Използване за роли';

$GLOBALS["lang"]['used'] = 'Използване';

$GLOBALS["lang"]['Used'] = 'Използване';

$GLOBALS["lang"]['used_count'] = 'Използван брой';

$GLOBALS["lang"]['Used Count'] = 'Използван брой';

$GLOBALS["lang"]['Used by OpenLDAP only.'] = 'Използва се само от OpenLDAP.';

$GLOBALS["lang"]['Used internally when discovering a single device.'] = 'Използва се вътрешно при откриване на едно устройство.';

$GLOBALS["lang"]['Used internally when discovering a single device. Links to <code>devices.id</code>.'] = 'Използва се вътрешно при откриване на едно устройство. Връзки към <code>devices.id</code>.';

$GLOBALS["lang"]['Used when LDAP servers have been configured to populate a users details - this includes the Orgs to which they have access. If a user is in this LDAP group, they are assigned this org.'] = 'Използва се, когато сървърите на LDAP са конфигурирани да населяват потребителски данни - това включва орките, до които имат достъп. Ако потребител е в тази LDAP група, те се назначават тази org.';

$GLOBALS["lang"]['Used when LDAP servers have been configured to populate a users details - this includes the Roles which they are assigned. If a user is in this LDAP group, they are assigned this role.'] = 'Използва се, когато сървърите на LDAP са конфигурирани да населяват данни за потребителите - това включва ролите, които са им възложени. Ако потребител е в тази LDAP група, те получават тази роля.';

$GLOBALS["lang"]['Used when searching OpenLDAP to match a users uid to a groups members. Default of <code>memberUid</code>. Used by OpenLDAP only.'] = 'Използва се при търсене на OpenLDAP за съвпадение на потребител с членове на групи. По подразбиране <code>memberUid</code>. Използва се само от OpenLDAP.';

$GLOBALS["lang"]['Used with Integrations and FirstWave monitoring applications.'] = 'Използва се с Интеграции и приложения за мониторинг от FirstWave.';

$GLOBALS["lang"]['Used with Integrations and FirstWave monitoring applications. Set to y if working SNMP detected by discovery.'] = 'Използва се с Интеграции и приложения за мониторинг от FirstWave. Зададете на y, ако работи SNMP засечен от откритието.';

$GLOBALS["lang"]['user'] = 'Потребител';

$GLOBALS["lang"]['User'] = 'Потребител';

$GLOBALS["lang"]['User DN'] = 'Потребител DN';

$GLOBALS["lang"]['user_group'] = 'Потребителска група';

$GLOBALS["lang"]['User Group'] = 'Потребителска група';

$GLOBALS["lang"]['user_id'] = 'Потребителски идентификационен код';

$GLOBALS["lang"]['User ID'] = 'Потребителски идентификационен код';

$GLOBALS["lang"]['user_interaction'] = 'Взаимодействие с потребителя';

$GLOBALS["lang"]['User Interaction'] = 'Взаимодействие с потребителя';

$GLOBALS["lang"]['User Membership Attribute'] = 'Потребителско участие';

$GLOBALS["lang"]['user_name'] = 'Потребител';

$GLOBALS["lang"]['User Name'] = 'Потребител';

$GLOBALS["lang"]['User Policies'] = 'Политика на потребителите';

$GLOBALS["lang"]['Username'] = 'Потребител';

$GLOBALS["lang"]['username'] = 'Потребител';

$GLOBALS["lang"]['users'] = 'Потребители';

$GLOBALS["lang"]['Users'] = 'Потребители';

$GLOBALS["lang"]['Users, Roles and Orgs'] = 'Потребители, роли и орки';

$GLOBALS["lang"]['Using Entra for Auth'] = 'Използване на Entra за Auth';

$GLOBALS["lang"]['Using OKTA for Auth'] = 'Използване на OKTA за Auth';

$GLOBALS["lang"]['Usually Mb/s, from Location A.'] = 'Обикновено Mb/s, от местоположение А.';

$GLOBALS["lang"]['Usually Mb/s, from Location B.'] = 'Обикновено Mb/s, от местоположение B.';

$GLOBALS["lang"]['Usually Mb/s, to Location A.'] = 'Обикновено Mb/s, за местоположение A.';

$GLOBALS["lang"]['Usually Mb/s, to Location B.'] = 'Обикновено Mb/s, до местоположение B.';

$GLOBALS["lang"]['Uzbekistan'] = 'Узбекистан';

$GLOBALS["lang"]['VLAN'] = 'VLAN';

$GLOBALS["lang"]['VLAN ID'] = 'Идентификация на VLAN';

$GLOBALS["lang"]['valid_from'] = 'Валидна от';

$GLOBALS["lang"]['Valid From'] = 'Валидна от';

$GLOBALS["lang"]['valid_from_raw'] = 'Валидно от сурово';

$GLOBALS["lang"]['Valid From Raw'] = 'Валидно от сурово';

$GLOBALS["lang"]['valid_to'] = 'Валиден до';

$GLOBALS["lang"]['Valid To'] = 'Валиден до';

$GLOBALS["lang"]['valid_to_raw'] = 'Валидна към сурова';

$GLOBALS["lang"]['Valid To Raw'] = 'Валидна към сурова';

$GLOBALS["lang"]['Valid Values'] = 'Валидни стойности';

$GLOBALS["lang"]['value'] = 'Стойност';

$GLOBALS["lang"]['Value'] = 'Стойност';

$GLOBALS["lang"]['values'] = 'Стойности';

$GLOBALS["lang"]['Values'] = 'Стойности';

$GLOBALS["lang"]['Vanuatu'] = 'Вануату';

$GLOBALS["lang"]['VarChar'] = 'VarChar';

$GLOBALS["lang"]['Varchar'] = 'Varchar';

$GLOBALS["lang"]['variable'] = 'Променлива';

$GLOBALS["lang"]['Variable'] = 'Променлива';

$GLOBALS["lang"]['vendor'] = 'Производител';

$GLOBALS["lang"]['Vendor'] = 'Производител';

$GLOBALS["lang"]['vendors'] = 'Вносители';

$GLOBALS["lang"]['Vendors'] = 'Вносители';

$GLOBALS["lang"]['Venezuela'] = 'Венецуела';

$GLOBALS["lang"]['version'] = 'Версия';

$GLOBALS["lang"]['Version'] = 'Версия';

$GLOBALS["lang"]['version_padded'] = 'Версия подплатени';

$GLOBALS["lang"]['Version Padded'] = 'Версия подплатени';

$GLOBALS["lang"]['version_raw'] = 'Версия Raw';

$GLOBALS["lang"]['Version Raw'] = 'Версия Raw';

$GLOBALS["lang"]['version_string'] = 'Версия String';

$GLOBALS["lang"]['Version String'] = 'Версия String';

$GLOBALS["lang"]['video'] = 'Видео';

$GLOBALS["lang"]['Video'] = 'Видео';

$GLOBALS["lang"]['Vietnam'] = 'Виетнам';

$GLOBALS["lang"]['View'] = 'Преглед';

$GLOBALS["lang"]['View All'] = 'Преглед на всички';

$GLOBALS["lang"]['View Details'] = 'Подробности';

$GLOBALS["lang"]['View Device'] = 'Преглед на устройство';

$GLOBALS["lang"]['View Discovery'] = 'Преглед на откритие';

$GLOBALS["lang"]['View Policy'] = 'Преглед на политиката';

$GLOBALS["lang"]['Virtual Private Network'] = 'Виртуална частна мрежа';

$GLOBALS["lang"]['Virtualisation'] = 'Виртуализиране';

$GLOBALS["lang"]['Visit our YouTube channel for instructional videos.'] = 'Посетете нашия YouTube канал за инструкции видеоклипове.';

$GLOBALS["lang"]['vlan'] = 'Vlan';

$GLOBALS["lang"]['Vlan'] = 'Vlan';

$GLOBALS["lang"]['vlan_id'] = 'Идентификация на Vlan';

$GLOBALS["lang"]['Vlan ID'] = 'Идентификация на Vlan';

$GLOBALS["lang"]['vm'] = 'Vm';

$GLOBALS["lang"]['Vm'] = 'Vm';

$GLOBALS["lang"]['vm_device_id'] = 'ID на Vm устройство';

$GLOBALS["lang"]['Vm Device ID'] = 'ID на Vm устройство';

$GLOBALS["lang"]['vm_group'] = 'Vm Group';

$GLOBALS["lang"]['Vm Group'] = 'Vm Group';

$GLOBALS["lang"]['vm_ident'] = 'Vm Идентификация';

$GLOBALS["lang"]['Vm Ident'] = 'Vm Идентификация';

$GLOBALS["lang"]['vm_server_name'] = 'Име на сървъра Vm';

$GLOBALS["lang"]['Vm Server Name'] = 'Име на сървъра Vm';

$GLOBALS["lang"]['vm_vendor'] = 'Vm Vendor';

$GLOBALS["lang"]['Vm Vendor'] = 'Vm Vendor';

$GLOBALS["lang"]['vuln_status'] = 'Състояние на вулна';

$GLOBALS["lang"]['Vuln Status'] = 'Състояние на вулна';

$GLOBALS["lang"]['vulnerabilities'] = 'Уязвимост';

$GLOBALS["lang"]['Vulnerabilities'] = 'Уязвимост';

$GLOBALS["lang"]['vulnerabilities_cache'] = 'Уязвими кешове';

$GLOBALS["lang"]['Vulnerabilities Cache'] = 'Уязвими кешове';

$GLOBALS["lang"]['vulnerability_id'] = 'Идентификационен код на уязвимостта';

$GLOBALS["lang"]['Vulnerability ID'] = 'Идентификационен код на уязвимостта';

$GLOBALS["lang"]['WHERE'] = 'Къде?';

$GLOBALS["lang"]['wall_port'] = 'Стенен порт';

$GLOBALS["lang"]['Wall Port'] = 'Стенен порт';

$GLOBALS["lang"]['Wallis and Futuna'] = 'Уолис и Футуна';

$GLOBALS["lang"]['Want to know more?'] = 'Искаш ли да знаеш повече?';

$GLOBALS["lang"]['Warning'] = 'Предупреждение';

$GLOBALS["lang"]['warranty'] = 'Гаранция';

$GLOBALS["lang"]['Warranty'] = 'Гаранция';

$GLOBALS["lang"]['warranty_duration'] = 'Срок на гаранцията';

$GLOBALS["lang"]['Warranty Duration'] = 'Срок на гаранцията';

$GLOBALS["lang"]['warranty_expires'] = 'Гаранция изтича';

$GLOBALS["lang"]['Warranty Expires'] = 'Гаранция изтича';

$GLOBALS["lang"]['warranty_status'] = 'Състояние на гаранцията';

$GLOBALS["lang"]['Warranty Status'] = 'Състояние на гаранцията';

$GLOBALS["lang"]['warranty_type'] = 'Вид гаранция';

$GLOBALS["lang"]['Warranty Type'] = 'Вид гаранция';

$GLOBALS["lang"]['Web'] = 'Уеб';

$GLOBALS["lang"]['Webserver'] = 'Уебсървър';

$GLOBALS["lang"]['Website'] = 'Уебсайт';

$GLOBALS["lang"]['Wednesday'] = 'Сряда';

$GLOBALS["lang"]['weight'] = 'Тегло';

$GLOBALS["lang"]['Weight'] = 'Тегло';

$GLOBALS["lang"]['weight_current'] = 'Тегло ток';

$GLOBALS["lang"]['Weight Current'] = 'Тегло ток';

$GLOBALS["lang"]['weight_empty'] = 'Тегло празен';

$GLOBALS["lang"]['Weight Empty'] = 'Тегло празен';

$GLOBALS["lang"]['weight_max'] = 'Максимално тегло';

$GLOBALS["lang"]['Weight Max'] = 'Максимално тегло';

$GLOBALS["lang"]['Welcome'] = 'Добре дошли.';

$GLOBALS["lang"]['Welcome Dashboard'] = 'Добре дошли на таблото.';

$GLOBALS["lang"]['Welcome to FirstWave Open-AudIT'] = 'Добре дошли в FirstWave Open-AudIT';

$GLOBALS["lang"]['Western Sahara'] = 'Западна Сахара';

$GLOBALS["lang"]['What Can I Expect if I Have no Credentials'] = 'Какво мога да очаквам, ако нямам ценни книжа';

$GLOBALS["lang"]['What is the purpose of this rack.'] = 'Каква е целта на тази стойка.';

$GLOBALS["lang"]['What is the type of this location. Allowable types held in <code>attributes</code> table.'] = 'Какъв е този тип място. Позволими типове, държани в <code>attributes</code> Маса.';

$GLOBALS["lang"]['When integrating devices from the external system, if the device doesnt exist in Open-AudIT should we create it?'] = 'При интегриране на устройства от външната система, ако устройството не съществува в Open-AudIT трябва ли да го създадем?';

$GLOBALS["lang"]['When integrating devices from the external system, if the device has been updated in the external system should we update it in Open-AudIT?'] = 'При интегриране на устройства от външната система, ако устройството е актуализирано във външната система, трябва ли да го актуализираме в Open-AudIT?';

$GLOBALS["lang"]['When retrieve an external device, should we run discovery upon it?'] = 'Когато вземем външно устройство, трябва ли да го открием?';

$GLOBALS["lang"]['When this benchmark is scheduled to be executed. Derived from the associated <code>tasks.type</code> and <code>tasks.sub_resource_id</code>.'] = 'Когато е планирано да бъде изпълнен този бенчмарк. Извлечени от асоциираните <code>tasks.type</code> както и <code>tasks.sub_resource_id</code>.';

$GLOBALS["lang"]['When this log was created.'] = 'Когато този дневник е създаден.';

$GLOBALS["lang"]['When this queue item started processing.'] = 'Когато тази опашка елемент започна обработка.';

$GLOBALS["lang"]['When we execute this baseline, should we check for items on devices that are not in a policy for this baseline.'] = 'Когато изпълняваме тази базова линия, трябва да проверим за елементи на устройства, които не са в политика за тази базова линия.';

$GLOBALS["lang"]['When we receive an open port, should we attempt to test for the version of the service currently running upon it? This assists in confirming actual running services.'] = 'Когато получим отворен порт, трябва ли да се опитаме да тестваме за версията на услугата, която понастоящем работи върху него? Това помага при потвърждаването на реални услуги за управление.';

$GLOBALS["lang"]['where'] = 'Къде?';

$GLOBALS["lang"]['Where'] = 'Къде?';

$GLOBALS["lang"]['Where on the Device Details screen you would like to see this field appear.'] = 'Къде на екрана с детайлите на устройството бихте искали да видите това поле да се появи.';

$GLOBALS["lang"]['Where the rack is in the row.'] = 'Където е багажника.';

$GLOBALS["lang"]['Whether the vulnerability affects components beyond its own using Impact, Availability and Confidentiality.'] = 'Дали уязвимостта засяга компоненти извън собствените си, използвайки въздействие, наличност и поверителност.';

$GLOBALS["lang"]['Whether user interaction is required (None, Passive, Active).'] = 'Независимо дали е необходимо взаимодействие с потребителя (не, пасивно, активно).';

$GLOBALS["lang"]['Which OS this benchmark applies to.'] = 'За кой OS се отнася този показател.';

$GLOBALS["lang"]['Which devices should Open-AudIT create from the external system (if any). Using All, None or a given Attribute.'] = 'Кои устройства трябва да създават Open-AudIT от външната система (ако има такива). Използване на всички, нито един или даден Atribute.';

$GLOBALS["lang"]['Which sub-menu should we display this query in.'] = 'В кой подменю трябва да покажем тази заявка.';

$GLOBALS["lang"]['Who made this rack.'] = 'Който е направил този багажник.';

$GLOBALS["lang"]['Why Windows Server Only?'] = 'Защо само Windows сървър?';

$GLOBALS["lang"]['Why do we exclude this policy?'] = 'Защо изключваме тази политика?';

$GLOBALS["lang"]['Wide Area Network'] = 'Широка мрежа от зони';

$GLOBALS["lang"]['Widget'] = 'Name';

$GLOBALS["lang"]['Widget # '] = 'Name ';

$GLOBALS["lang"]['Widget Type'] = 'Тип джаджа';

$GLOBALS["lang"]['widgets'] = 'Name';

$GLOBALS["lang"]['Widgets'] = 'Name';

$GLOBALS["lang"]['width'] = 'Ширина';

$GLOBALS["lang"]['Width'] = 'Ширина';

$GLOBALS["lang"]['windows'] = 'Прозорци';

$GLOBALS["lang"]['Windows'] = 'Прозорци';

$GLOBALS["lang"]['Windows Test Script'] = 'Windows Test Script';

$GLOBALS["lang"]['Wireless Local Area Network'] = 'Безжична локална мрежа';

$GLOBALS["lang"]['wmi_fails'] = 'Wmi се проваля';

$GLOBALS["lang"]['Wmi Fails'] = 'Wmi се проваля';

$GLOBALS["lang"]['wmi_timeout'] = 'Времетраене на Wmi';

$GLOBALS["lang"]['Wmi Timeout'] = 'Времетраене на Wmi';

$GLOBALS["lang"]['workgroup'] = 'Работна група';

$GLOBALS["lang"]['Workgroup'] = 'Работна група';

$GLOBALS["lang"]['Working Credentials'] = 'Работни данни';

$GLOBALS["lang"]['XML'] = 'XML';

$GLOBALS["lang"]['Yellow Query'] = 'Жълта справка';

$GLOBALS["lang"]['Yemen'] = 'Йемен';

$GLOBALS["lang"]['Yes'] = 'Да.';

$GLOBALS["lang"]['You may want to copy and paste this URL in an email to your staff.'] = 'Може да искате да копирате и поставите този URL адрес в имейл до вашия персонал.';

$GLOBALS["lang"]['You must delete your existing license before adding a new license.'] = 'Трябва да изтриете съществуващия лиценз, преди да добавите нов лиценз.';

$GLOBALS["lang"]['YouTube Tutorials'] = 'Училища в YouTube';

$GLOBALS["lang"]['Your AWS EC2 API key.'] = 'Вашият AWS EC2 API ключ.';

$GLOBALS["lang"]['Your Google Compute credentials as JSON.'] = 'Вашият Google Compute препоръки като JSON.';

$GLOBALS["lang"]['Your Licenses'] = 'Вашите лицензи';

$GLOBALS["lang"]['Your Microsoft Azure Client ID.'] = 'Вашият Microsoft Azure клиент ID.';

$GLOBALS["lang"]['Your Microsoft Azure Client Secret.'] = 'Тайната на клиента ти от Майкрософт Азуре.';

$GLOBALS["lang"]['Your Microsoft Azure Subscription ID.'] = 'Вашият Microsoft Azure ID за абонамент.';

$GLOBALS["lang"]['Your Microsoft Azure Tennant ID.'] = 'Вашият Microsoft Azure Tennent ID.';

$GLOBALS["lang"]['Your SQL to select attributes that will populate this query.'] = 'Вашият SQL да изберете атрибути, които ще населят тази заявка.';

$GLOBALS["lang"]['Your SQL to select devices that will populate this group.'] = 'Вашият SQL да изберете устройства, които ще населят тази група.';

$GLOBALS["lang"]['Your SSH key.'] = 'Ключът ти.';

$GLOBALS["lang"]['Your access credentials, as per that clouds native API.'] = 'Акредитациите ти за достъп, според този облак местен API.';

$GLOBALS["lang"]['Your description of the status of this connection (provisioned, retired, etc).'] = 'Вашето описание на състоянието на тази връзка (задължителна, пенсионирана и т.н.).';

$GLOBALS["lang"]['Your description of this item.'] = 'Вашето описание на този предмет.';

$GLOBALS["lang"]['Your generic name for this piece of software'] = 'Вашето общо име за този софтуер';

$GLOBALS["lang"]['Your generic version for this piece of software'] = 'Вашата обща версия за този софтуер';

$GLOBALS["lang"]['Zambia'] = 'Замбия';

$GLOBALS["lang"]['Zimbabwe'] = 'Зимбабве';

$GLOBALS["lang"]['active'] = 'активен';

$GLOBALS["lang"]['active directory'] = 'активна директория';

$GLOBALS["lang"]['active/active'] = 'активен/активен';

$GLOBALS["lang"]['active/passive'] = 'активен/пасивен';

$GLOBALS["lang"]['advertisement'] = 'реклама';

$GLOBALS["lang"]['alert'] = 'тревога';

$GLOBALS["lang"]['all'] = 'Всички';

$GLOBALS["lang"]['allocated'] = 'разпределени';

$GLOBALS["lang"]['amazon'] = 'амазон';

$GLOBALS["lang"]['antivirus'] = 'антивирус';

$GLOBALS["lang"]['application'] = 'заявление';

$GLOBALS["lang"]['approved'] = 'одобрен';

$GLOBALS["lang"]['attribute'] = 'атрибут';

$GLOBALS["lang"]['auto'] = 'Авто';

$GLOBALS["lang"]['backup'] = 'архивиране';

$GLOBALS["lang"]['banned'] = 'забранено';

$GLOBALS["lang"]['blog'] = 'блог';

$GLOBALS["lang"]['bottom'] = 'дъното';

$GLOBALS["lang"]['browser_lang'] = 'browser_ lang';

$GLOBALS["lang"]['building'] = 'сграда';

$GLOBALS["lang"]['cloud'] = 'Облак';

$GLOBALS["lang"]['code'] = 'Код';

$GLOBALS["lang"]['collector'] = 'колектор';

$GLOBALS["lang"]['compute'] = 'изчисляване';

$GLOBALS["lang"]['config'] = 'config';

$GLOBALS["lang"]['contains'] = 'съдържа';

$GLOBALS["lang"]['create'] = 'създаване';

$GLOBALS["lang"]['created'] = 'създаден';

$GLOBALS["lang"]['critical'] = 'критично';

$GLOBALS["lang"]['cve'] = 'cve';

$GLOBALS["lang"]['database'] = 'База данни';

$GLOBALS["lang"]['debug'] = 'дебъг';

$GLOBALS["lang"]['delegated'] = 'Делегиране';

$GLOBALS["lang"]['delete'] = 'Изтриване';

$GLOBALS["lang"]['deleted'] = 'Изтриване';

$GLOBALS["lang"]['denied'] = 'отказано';

$GLOBALS["lang"]['devices'] = 'устройства';

$GLOBALS["lang"]['digitalocean'] = 'дигитоциан';

$GLOBALS["lang"]['does not equal'] = 'не се равнява';

$GLOBALS["lang"]['emergency'] = 'Аварийно положение';

$GLOBALS["lang"]['entra'] = 'ентра';

$GLOBALS["lang"]['equals'] = 'равно';

$GLOBALS["lang"]['error'] = 'грешка';

$GLOBALS["lang"]['established'] = 'установено';

$GLOBALS["lang"]['excluded'] = 'изключен';

$GLOBALS["lang"]['expired'] = 'изтекъл';

$GLOBALS["lang"]['extreme - Without which, the organisation would fail.

very high - Functions that are essential for the organisations survival and must be restored immediately.

high - Important functions that should be restored quickly but may have a slightly longer recovery time.

medium - Functions that are necessary but can tolerate longer downtime.

low - Non-essential functions that can be delayed without significant impact.

unassigned - The default until set.'] = 'екстремно - без което организацията ще се провали.

много високи - функции, които са от съществено значение за оцеляването на организациите и трябва да бъдат възстановени незабавно.

високо - важни функции, които трябва да бъдат възстановени бързо, но може да имат малко по-дълго време за възстановяване.

среда - Функции, които са необходими, но могат да толерират по-дълго време.

ниско - несъществени функции, които могат да бъдат забавени без значително въздействие.

неназначен - По подразбиране до задаване.';

$GLOBALS["lang"]['fail'] = 'провал';

$GLOBALS["lang"]['false'] = 'Грешно';

$GLOBALS["lang"]['file'] = 'файл';

$GLOBALS["lang"]['firewall'] = 'защитна стена';

$GLOBALS["lang"]['fixed'] = 'фиксирана';

$GLOBALS["lang"]['floor'] = 'под';

$GLOBALS["lang"]['front'] = 'отпред';

$GLOBALS["lang"]['front-left'] = 'отпред-ляво';

$GLOBALS["lang"]['front-right'] = 'отпред-дясно';

$GLOBALS["lang"]['github'] = 'гитуб';

$GLOBALS["lang"]['google'] = 'Google';

$GLOBALS["lang"]['greater or equals'] = 'повече или равно';

$GLOBALS["lang"]['greater than'] = 'по- голямо от';

$GLOBALS["lang"]['group'] = 'група';

$GLOBALS["lang"]['head'] = 'Глава';

$GLOBALS["lang"]['here'] = 'Ето.';

$GLOBALS["lang"]['high availability'] = 'висока наличност';

$GLOBALS["lang"]['howto'] = 'howto';

$GLOBALS["lang"]['ignored'] = 'игнориран';

$GLOBALS["lang"]['in'] = 'в';

$GLOBALS["lang"]['inactive'] = 'неактивна';

$GLOBALS["lang"]['incomplete'] = 'непълен';

$GLOBALS["lang"]['info'] = 'Информация';

$GLOBALS["lang"]['int, text, bool (y/n), etc'] = 'int, text, bool (y/n), etc.';

$GLOBALS["lang"]['is licensed to'] = 'има лиценз за';

$GLOBALS["lang"]['left'] = 'ляво';

$GLOBALS["lang"]['less or equals'] = 'по-малко или равно на';

$GLOBALS["lang"]['less than'] = 'по- малко от';

$GLOBALS["lang"]['license'] = 'лиценз';

$GLOBALS["lang"]['like'] = 'Като';

$GLOBALS["lang"]['line'] = 'линия';

$GLOBALS["lang"]['load balancing'] = 'балансиране на товара';

$GLOBALS["lang"]['location'] = 'местоположение';

$GLOBALS["lang"]['managed'] = 'управляван';

$GLOBALS["lang"]['microsoft'] = 'microsoft';

$GLOBALS["lang"]['mount point'] = 'точка на монтиране';

$GLOBALS["lang"]['network'] = 'Мрежа';

$GLOBALS["lang"]['news'] = 'Новини';

$GLOBALS["lang"]['no'] = 'ве';

$GLOBALS["lang"]['node'] = 'Възел';

$GLOBALS["lang"]['none'] = 'няма';

$GLOBALS["lang"]['normal'] = 'нормално';

$GLOBALS["lang"]['not applicable'] = 'Неприложимо';

$GLOBALS["lang"]['not in'] = 'не в';

$GLOBALS["lang"]['not like'] = 'Не като';

$GLOBALS["lang"]['notice'] = 'известие';

$GLOBALS["lang"]['notification'] = 'уведомление';

$GLOBALS["lang"]['okta'] = 'окта';

$GLOBALS["lang"]['openldap'] = 'openldap';

$GLOBALS["lang"]['optimized'] = 'оптимизирана';

$GLOBALS["lang"]['optionally '] = 'по избор ';

$GLOBALS["lang"]['other'] = 'други';

$GLOBALS["lang"]['package'] = 'Опаковка';

$GLOBALS["lang"]['partition'] = 'дял';

$GLOBALS["lang"]['pass'] = 'пас';

$GLOBALS["lang"]['pending'] = 'В очакване';

$GLOBALS["lang"]['performance'] = 'ефективност';

$GLOBALS["lang"]['performed'] = 'извършено';

$GLOBALS["lang"]['pie'] = 'Пай';

$GLOBALS["lang"]['planning'] = 'планиране';

$GLOBALS["lang"]['predictable'] = 'предсказуемо';

$GLOBALS["lang"]['query'] = 'запитване';

$GLOBALS["lang"]['rear'] = 'отзад';

$GLOBALS["lang"]['rear-left'] = 'задно ляво';

$GLOBALS["lang"]['rear-right'] = 'заден надясно';

$GLOBALS["lang"]['regex'] = 'регекс';

$GLOBALS["lang"]['release'] = 'освобождаване';

$GLOBALS["lang"]['reserved'] = 'запазени';

$GLOBALS["lang"]['right'] = 'Добре.';

$GLOBALS["lang"]['room'] = 'Стая';

$GLOBALS["lang"]['row'] = 'Ред';

$GLOBALS["lang"]['stand-alone'] = 'самостоятелно';

$GLOBALS["lang"]['standard'] = 'стандарт';

$GLOBALS["lang"]['starts with'] = 'започва с';

$GLOBALS["lang"]['storage'] = 'съхранение';

$GLOBALS["lang"]['timestamp'] = 'Дата';

$GLOBALS["lang"]['top'] = 'отгоре';

$GLOBALS["lang"]['top secret - Military / Government classification. Disclosure would cause exceptionally grave danger to national security.

secret - Military / Government classification. Disclosure would cause serious damage to national security.

confidential - Military / Government and Private Sector classification. Data that is confidential includes trade secrets, intellectual data, application programming code, and other data that could seriously affect the organization if unauthorized disclosure occurred. Data at this level would be available only to personnel in the organization whose work needs, or is directly related to, the accessed data. Access to confidential data usually requires authorization for each access.

private - Private Sector classification. Data that is private includes any information related to personnel, including human resources records, medical records, and salary information, that is used only within the organization.

sensitive - Military / Government and Private Sector classification. Data that is sensitive includes organizational financial information and requires extra measures to ensure its CIA and accuracy. Disclosure might harm national security.

public - Private Sector classification. Public data is data that is generally shared with the public and would not cause a negative impact on the organization. Examples of public data include how many people work in the organization and what products an organization manufactures or sells.

unclassified - Military / Government classification. Any information that can generally be distributed to the public without any threat to national interest.

unassigned - The default until set.'] = 'строго секретно - военна / държавна класификация. Разкриването би причинило изключително сериозна опасност за националната сигурност.

тайна - военна/правителствена класификация. Разкриването би причинило сериозни щети на националната сигурност.

конфиденциална - Военна/правителствена и частна секторна класификация. Данните, които са поверителни, включват търговски тайни, интелектуални данни, код за програмиране на приложения и други данни, които биха могли сериозно да засегнат организацията, ако неоторизирано разкриване се случи. Данните на това ниво ще бъдат достъпни само за персонала в организацията, чиято работа се нуждае или е пряко свързана с достъпните данни. Достъпът до поверителни данни обикновено изисква разрешение за всеки достъп.

частна - класификация на частния сектор. Данните, които са лични, включват всяка информация, свързана с персонала, включително досиетата на човешките ресурси, медицинските досиета и информацията за заплатите, която се използва само в рамките на организацията.

чувствителна - класификация на военния / правителствения и частния сектор. Данните, които са чувствителни, включват организационна финансова информация и изискват допълнителни мерки, за да се гарантира нейната ЦРУ и точност. Разкриването може да навреди на националната сигурност.

публично - класификация на частния сектор. Публичните данни са данни, които обикновено се споделят с обществеността и не биха причинили отрицателно въздействие върху организацията. Примери за публични данни включват колко хора работят в организацията и какви продукти една организация произвежда или продава.

некласифицирана - военна/правителствена класификация. Всяка информация, която обикновено може да бъде разпространена на обществеността без никаква заплаха за националния интерес.

неназначен - По подразбиране до задаване.';

$GLOBALS["lang"]['traffic'] = 'трафик';

$GLOBALS["lang"]['true'] = 'Вярно е.';

$GLOBALS["lang"]['unallocated'] = 'неразпределени';

$GLOBALS["lang"]['unauthorised'] = 'неразрешен';

$GLOBALS["lang"]['unknown'] = 'неизвестно';

$GLOBALS["lang"]['unmanaged'] = 'без управление';

$GLOBALS["lang"]['unused'] = 'неизползван';

$GLOBALS["lang"]['update'] = 'актуализация';

$GLOBALS["lang"]['valid'] = 'валидно';

$GLOBALS["lang"]['virtualisation'] = 'виртуализация';

$GLOBALS["lang"]['warning'] = 'предупреждение';

$GLOBALS["lang"]['web'] = 'уеб';

$GLOBALS["lang"]['yes'] = 'Да.';

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

