<?php
$GLOBALS["lang"][' Default, currently '] = ' Дефолт, в настоящее время ';

$GLOBALS["lang"][' is now supported with a language file. To change your user to use this language, click '] = ' В настоящее время поддерживается языковой файл. Чтобы изменить пользователя на использование этого языка, нажмите ';

$GLOBALS["lang"][' seconds'] = ' секунды';

$GLOBALS["lang"]['10 Minutes'] = '10 минут';

$GLOBALS["lang"]['15 Minutes'] = '15 минут';

$GLOBALS["lang"]['30 Minutes'] = '30 минут';

$GLOBALS["lang"]['5 Minutes'] = '5 минут';

$GLOBALS["lang"]['<br> <strong>NOTE</strong> - You are accessing this URL from the local Open-AudIT server. The downloaded script will not be able to submit when run on any other machine. If you need to audit other machines, please download the script from any remote machine, not using a browser on the Open-AudIT server itself.'] = '<br/> <strong>Примечание</strong> Вы получаете доступ к этому URL-адресу с локального сервера Open-AudIT. Загруженный скрипт не сможет отправляться при запуске на любой другой машине. Если вам необходимо провести аудит других машин, пожалуйста, скачайте скрипт с любой удаленной машины, не используя браузер на самом сервере Open-AudIT.';

$GLOBALS["lang"]['<p></p>'] = '<p></p>';

$GLOBALS["lang"]['<p><strong class="text-danger">NOTE</strong> - You must have working SSH or SSH Key credentials to execute benchmarks upon a target device.</p>'] = '<p><strong class="text-danger">Примечание</strong> У вас должны быть рабочие учетные данные SSH или SSH Key для выполнения тестов на целевом устройстве.</p>';

$GLOBALS["lang"]['<p><strong>Baseline</strong> - The overarching document that contains the baseline definition and the individual policy tests.<br> <br> <strong>Policies</strong> - The individual tests contained within a Baseline. Each test is for a specific item. An example would be testing for SSH version 1.2.3.<br> <br> <strong>Details</strong> - Baselines can compare netstat ports, users and software.<br> <br> <strong>Software</strong> - To compare software we check the name and version. Because version numbers are not all standardised in format, when we receive an audit result we create a new attribute called software_padded which we store in the database along with the rest of the software details for each package. For this reason, baselines using software policies will not work when run against a device that has not been audited by 1.10 (at least). Software policies can test against the version being "equal to", "greater than" or "equal to or greater than".<br> <br> <strong>Netstat Ports</strong> - Netstat Ports use a combination of port number, protocol and program. If all are present the policy passes.<br> <br> <strong>Users</strong> - Users work similar to Netstat Ports. If a user exists with a matching name, status and password details (changeable, expires, required) then the policy passes.<br> <br> </p>'] = '<p><strong>Базовая линия</strong> Общий документ, содержащий базовое определение и индивидуальные политические тесты.<br/> <br/> <strong>Политика</strong> Индивидуальные тесты, содержащиеся в базовой линии. Каждый тест предназначен для конкретного элемента. Примером может служить тестирование SSH версии 1.2.3.<br/> <br/> <strong>Подробности</strong> Базовые линии могут сравнивать порты Netstat, пользователей и программное обеспечение.<br/> <br/> <strong>Программное обеспечение</strong> Чтобы сравнить программное обеспечение, мы проверяем имя и версию. Поскольку номера версий не все стандартизированы в формате, когда мы получаем результат аудита, мы создаем новый атрибут, называемый software_padded, который мы храним в базе данных вместе с остальными деталями программного обеспечения для каждого пакета. По этой причине базовые линии, использующие программные политики, не будут работать при работе с устройством, которое не было проверено по меньшей мере 1.10. Программные политики могут проверять версию на «равно», «больше» или «равно или больше».<br/> <br/> <strong>Порты Netstat</strong> Порты Netstat используют комбинацию номера порта, протокола и программы. Если все присутствуют, то политика проходит.<br/> <br/> <strong>Пользователи</strong> Пользователи работают аналогично портам Netstat. Если пользователь существует с соответствующим именем, статусом и паролем (изменяемый, истекает, требуется), то политика проходит.<br/> <br/> </p>';

$GLOBALS["lang"]['<p>A location is a physical address that can have devices associated with it.<br> <br>You can assign it coordinates (lat/long) and if there are devices assigned, the location will appear on the Open-AudIT Enterprise map.<br> <br></p>'] = '<p>Местоположение — это физический адрес, с которым могут быть связаны устройства.<br/> <br/>Вы можете назначить ему координаты (поздние/длинные) и при наличии назначенных устройств местоположение появится на карте Open-AudIT Enterprise.<br/> <br/></p>';

$GLOBALS["lang"]['<p>A network is derived from discovery entries and device attributes.<br> <br></p>'] = '<p>Сеть получается из записей обнаружения и атрибутов устройства.<br/> <br/></p>';

$GLOBALS["lang"]['<p>A summary will display a list of items, grouped by the distinct values of the attribute specified by the <code>table</code> and <code>column</code> attributes.<br> <br>When a summary is executed, the result will be a list of distinct values for that <code>table</code> and <code>column</code>. There will be links on the values that allow the user to see the matching devices.<br> <br>If the attribute of <code>extra_columns</code> is populated, the resulting page will contain these columns in addition to the standard device columns.<br> <br></p>'] = '<p>Резюме будет отображать список элементов, сгруппированных по различным значениям атрибута, указанного <code>table</code> и <code>column</code> атрибуты.<br/> <br/>Когда резюме выполняется, результатом будет список различных значений для этого. <code>table</code> и <code>column</code>. Будут ссылки на значения, которые позволяют пользователю видеть соответствующие устройства.<br/> <br/>Если атрибут <code>extra_columns</code> заполнена, полученная страница будет содержать эти столбцы в дополнение к стандартным столбцам устройства.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Agents let you audit PCs without a discovery. Install the agent and it will check-in with the server each day and audit itself. It does not matter if your computers are firewalled, audit data will still appear in Open-AudIT.</p><p>When testing <strong>if</strong> an agent should perform actions, all three tests must pass (if the test is set). <strong>Then</strong> the actions are taken.</p>'] = '<p>Агенты позволяют вам проверять ПК без обнаружения. Установите агента, и он будет проверяться на сервере каждый день. Независимо от того, подключены ли ваши компьютеры к брандмауэру, данные аудита все равно будут отображаться в Open-AudIT.</p><p>При тестировании <strong>если</strong> Агент должен выполнять действия, все три теста должны пройти (если тест установлен). <strong>Потом</strong> Действия предпринимаются.</p>';

$GLOBALS["lang"]['<p>Applications are defined by you, the user and stored for Open-AudIT to use and associate with devices.<br> <br></p>'] = '<p>Приложения определяются вами, пользователем и хранятся в Open-AudIT для использования и связи с устройствами.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Attributes are stored for Open-AudIT to use for particular fields.</p>'] = '<p>Атрибуты хранятся в Open-AudIT для использования в определенных полях.</p>';

$GLOBALS["lang"]['<p>Being able to determine which machines are configured the same is a major part of systems administration and auditing &ndash; and now reporting on that will be made simple and automated. Once you define your baseline it will automatically run against a set of devices on a predetermined schedule. The output of these executed baselines will be available for web viewing, importing into a third party system or even as a printed report.<br> <br> Baselines enable you to combine audit data with a set of attributes you have previously defined (your baseline) to determine compliance of devices.<br> <br> For example - you might create a baseline from a device running Centos 6 which acts as one of your apache servers in a cluster. You know this particular server is configured just the way you want it but you are unsure if other servers in the cluster are configured exactly the same. Baselines enables you to determine this.<br> <br> </p>'] = '<p>Возможность определить, какие машины настроены одинаково, является основной частью системного администрирования и аудита, и теперь отчетность об этом будет сделана простой и автоматизированной. Как только вы определите свой базовый уровень, он автоматически будет работать против набора устройств по заранее определенному графику. Вывод этих выполненных исходных линий будет доступен для просмотра в Интернете, импорта в стороннюю систему или даже в виде печатного отчета.<br/> <br/> Базовые линии позволяют объединить данные аудита с набором атрибутов, которые вы ранее определили (ваш базовый уровень), для определения соответствия устройств.<br/> <br/> Например, вы можете создать базовую линию с устройства под управлением Centos 6, которое действует как один из ваших серверов apache в кластере. Вы знаете, что этот конкретный сервер настроен именно так, как вы хотите, но вы не уверены, что другие серверы в кластере настроены точно так же. Базовые данные позволяют определить это.<br/> <br/> </p>';

$GLOBALS["lang"]['<p>Clusters are stored in Open-AudIT to associate devices to better record, manage and estimate licensing costs.<br> <br></p>'] = '<p>Кластеры хранятся в Open-AudIT, чтобы ассоциировать устройства для лучшей записи, управления и оценки затрат на лицензирование.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Components is a generic term used for the tables that store the attributes for a device. Those tables are: access_point, arp, bios, certificate, cli_config, disk, dns, file, ip, license, log, memory, module, monitor, motherboard, netstat, network, nmap, optical, pagefile, partition, policy, print_queue, processor, radio, route, san, scsi, server, server_item, service, share, software, software_key, sound, task, usb, user, user_group, variable, video, vm, windows.</p><p> In addition we class the following tables also as device related: application, attachment, cluster, credential, image.</p>'] = '<p>Компоненты - это общий термин, используемый для таблиц, которые хранят атрибуты для устройства. Эти таблицы: access_point, arp, bios, certificate, cli_config, disk, dns, file, ip, license, log, memory, module, monitor, motherboard, netstat, network, nmap, optical, pagefile, partition, policy, print_queue, processor, radio, route, san, scsi, server, server_item, service, share, software, software_key, sound, task, usb, user_group, variable, video, vm, windows.</p><p> Кроме того, мы классифицируем следующие таблицы также как связанные с устройством: приложение, приложение, кластер, учетные данные, изображение.</p>';

$GLOBALS["lang"]['<p>Credentials are encrypted when stored in the database.<br> <br>When a Discovery is run, a device has its credentials retrieved and tested for connection first (from the <code>credential</code> table). If these fail, then credentials associated with the given Org <code>credentials.org_id</code> is also tested against the device. Working credentials are stored at an individual device level in the credential table (note - no "s" in the table name).<br> <br>SSH keys are tested before SSH username / password. When testing SSH, credentials will also be marked as working with sudo or being root.<br> <br>For ease of use, Windows passwords should not contain a single or double quote. This is a remote WMI limitation, not an Open-AudIT limitation.<br> <br></p>'] = '<p>Полномочия шифруются при хранении в базе данных.<br/> <br/>Когда Discovery запускается, устройство имеет свои учетные данные, извлеченные и протестированные для подключения в первую очередь (от англ. <code>credential</code> столик). Если это не удается, то учетные данные, связанные с данной организацией <code>credentials.org_id</code> Также тестируется на устройство. Рабочие учетные данные хранятся на уровне отдельного устройства в таблице учетных данных (примечание - нет "s" в названии таблицы).<br/> <br/>Ключи SSH тестируются перед именем пользователя / паролем SSH. При тестировании SSH учетные данные также будут помечены как работа с sudo или root.<br/> <br/>Для удобства использования пароли Windows не должны содержать ни одной или двойной цитаты. Это удаленное ограничение WMI, а не ограничение Open-AudIT.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Credentials are used to access devices.<br> <br>Configuring credentials should be one of the first things you do after installing Open-AudIT.<br> <br></p>'] = '<p>Сертификаты используются для доступа к устройствам.<br/> <br/>Настройка учетных данных должна быть одной из первых вещей, которые вы делаете после установки Open-AudIT.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Define your racks and assign devices into their positions. You already have your devices in Open-AudIT and you know your locations. Open-AudIT extends this to allow you to create a rack and assign devices to it. Open-AudIT will even provide a visualisation of the rack and the devices contained within. If you provide a device picture, that picture will be used in the visualisation. You can look at the rack on the screen and see the same items you would see if you were standing in front of it.<br> <br></p>'] = '<p>Определите свои стойки и назначьте устройства в их положения. У вас уже есть устройства в Open-AudIT, и вы знаете свое местоположение. Open-AudIT расширяет это, чтобы вы могли создать стойку и назначить ей устройства. Open-AudIT даже обеспечит визуализацию стойки и устройств, содержащихся внутри. Если вы предоставите изображение устройства, это изображение будет использоваться в визуализации. Вы можете посмотреть на стойку на экране и увидеть те же предметы, которые вы бы увидели, если бы стояли перед ней.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Devices on your network need to be managed. But how do you keep your records up to date? A spreadsheet - defintley not. That will be out of date in hours, if not days. Why manually try to keep up. Use Open-AudIT to automatically scan your networks and record your devices - manufacturer, model, serial and more than 100 other attributes. Full lists of software, services, disks, open ports, users, etc. Automatically see if an attribute has been added, removed or changed.<br> <br>Once Open-AudIT is setup, you can sit back and relax. Have change reports emailed to you on a schedule, for example - what new devices did we discover this week? What new software was installed this week? Were there any hardware changes last month?<br> <br>Expand on the stored fields easily with your own custom attributes.<br> <br>Even add devices that are not connected to your network or those devices your Open-AudIT server cannot reach.<br> <br>Computers, switches, routers, printers or any other device on your network - Open-AudIT can audit them all.<br> <br></p>'] = '<p>Устройства в вашей сети должны управляться. Но как вы обновляете свои записи? Электронная таблица - не вызывающая. Это устареет через несколько часов, если не дней. Почему вручную стараются не отставать? Используйте Open-AudIT для автоматического сканирования сетей и записи устройств — производителя, модели, серийного и более 100 других атрибутов. Полные списки программного обеспечения, сервисов, дисков, открытых портов, пользователей и т.д. Автоматически проверьте, был ли добавлен, удален или изменен атрибут.<br/> <br/>После установки Open-AudIT вы можете расслабиться. Были ли изменения в отчетах, отправленных вам по электронной почте, например, какие новые устройства мы обнаружили на этой неделе? Какое программное обеспечение было установлено на этой неделе? Были ли какие-либо изменения в прошлом месяце?<br/> <br/>Расширяйте сохраненные поля с помощью собственных пользовательских атрибутов.<br/> <br/>Даже добавьте устройства, которые не подключены к вашей сети, или те устройства, к которым не может подключиться ваш сервер Open-AudIT.<br/> <br/>Компьютеры, коммутаторы, маршрутизаторы, принтеры или любое другое устройство в вашей сети - Open-AudIT может проверить их все.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Discoveries are at the very heart of what Open-AudIT does.<br> <br>How else would you know "What is on my network?"<br> <br>Discoveries are prepared data items that enable you to run a discovery upon a network in a single click, without entering the details of that network each and every time.<br> <br></p>'] = '<p>Открытия лежат в основе того, что делает Open-AudIT.<br/> <br/>Откуда вы знаете, что находится в моей сети?<br/> <br/>Открытия - это готовые элементы данных, которые позволяют запускать обнаружение в сети одним щелчком мыши, не вводя детали этой сети каждый раз.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Discovery Options are a global setting changed in the <a href="../configuration?configuration.name=discovery_default_scan_option">configuration</a>. If you have an Open-AudIT Enterprise license these are settable per discovery and in addition futher customizable as required. Discovery Options are as follows (including an indicitave time to scan an individual IP):<br/><br><strong>UltraFast</strong>: <i>1 second</i>. Scan only the ports that Open-AudIT needs to use to talk to the device and detect an IOS device (WMI, SSH, SNMP, Apple Sync). An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is not considered open. Device must respond to an Nmap ping. Use aggressive timing.<br><br/><strong>SuperFast</strong>: <i>5 seconds</i>. Scan the top 10 TCP and UDP ports, as well as port 62078 (Apple IOS detection). An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is not considered open. Device must respond to an Nmap ping. Use aggressive timing.<br/><br/><strong>Fast</strong>: <i>40 seconds</i>. Scan the top 100 TCP and UDP ports, as well as port 62078 (Apple IOS detection). An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is not considered open. Device must respond to an Nmap ping. Use aggressive timing.<br/><br/><strong>Medium (Classic)</strong>: <i>90 seconds</i>. As close to a traditional Open-AudIT scan as we can make it. Scan the top 1000 TCP ports, as well as 62078 (Apple IOS detection) and UDP 161 (SNMP). An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is considered open (and will trigger device detection). Devices are scanned regardless of a response to an Nmap ping. Use aggressive timing.<br/><br/><strong>Medium</strong>: <i>100 seconds</i>. Scan the top 1000 TCP and top 100 UDP ports, as well as port 62078 (Apple IOS detection). An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is not considered open. Device must respond to an Nmap ping. Use aggressive timing.<br/><br/><strong>Slow</strong>: <i>4 minutes</i>. Scan the top 1000 TCP and top 100 UDP ports, as well as port 62078 (Apple IOS detection). Version detection enabled. An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is considered open (and will trigger device detection). Device must respond to an Nmap ping. Use normal timing.<br/><br/><strong>UltraSlow</strong>: <i>20 minutes</i>. Not recommended. Scan the top 1000 TCP and UDP ports, as well as port 62078 (Apple IOS detection). Devices are scanned regardless of a response to an Nmap ping. Version detection enabled. An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is considered open (and will trigger device detection). Use polite timing.<br/><br/><strong>Custom</strong>: <i>Unknown time</i>. When options other than as set by a standard discovery preset are altered.<br><br></p>'] = '<p>открытие Варианты - это глобальная обстановка, измененная в <a href="../configuration?configuration.name=discovery_default_scan_option">конфигурация</a>. Если у вас есть лицензия Open-AudIT Enterprise, они устанавливаются на открытие и, кроме того, дополнительно настраиваются по мере необходимости. открытие Варианты заключаются в следующем (включая время, необходимое для сканирования отдельного IP):<br/><br/><strong>Ультрабыстрый</strong>: <i>1 секунда</i>. Сканируйте только порты, которые Open-AudIT должен использовать для связи с устройством и обнаружения устройства IOS (WMI, SSH, SNMP, Apple Sync). Ан <code>open|filtered</code> Порт считается открытым. А. <code>filtered</code> Порт не считается открытым. Устройство должно реагировать на пинг Nmap. Используйте агрессивное время.<br/><br><strong>Супербыстрый</strong>: <i>5 секунд</i>. Сканируйте 10 лучших портов TCP и UDP, а также порт 62078 (детектирование Apple IOS). Ан <code>open|filtered</code> Порт считается открытым. А. <code>filtered</code> Порт не считается открытым. Устройство должно реагировать на пинг Nmap. Используйте агрессивное время.<br><br/><strong>Быстро</strong>: <i>40 секунд</i>. Сканируйте 100 лучших портов TCP и UDP, а также порт 62078 (детектирование Apple IOS). Ан <code>open|filtered</code> Порт считается открытым. А. <code>filtered</code> Порт не считается открытым. Устройство должно реагировать на пинг Nmap. Используйте агрессивное время.<br/><br/><strong>Средний (классический)</strong>: <i>90 секунд</i>. Как можно ближе к традиционному сканированию Open-AudIT. Сканируйте 1000 портов TCP, а также 62078 (детектирование Apple IOS) и UDP 161 (SNMP). Ан <code>open|filtered</code> Порт считается открытым. А. <code>filtered</code> Порт считается открытым (и запускает обнаружение устройства). Устройства сканируются независимо от ответа на пинг Nmap. Используйте агрессивное время.<br/><br/><strong>средний</strong>: <i>100 секунд</i>. Сканируйте порты 1000 TCP и 100 UDP, а также порт 62078 (детектирование Apple IOS). Ан <code>open|filtered</code> Порт считается открытым. А. <code>filtered</code> Порт не считается открытым. Устройство должно реагировать на пинг Nmap. Используйте агрессивное время.<br/><br/><strong>Медленно</strong>: <i>4 минуты</i>. Сканируйте порты 1000 TCP и 100 UDP, а также порт 62078 (детектирование Apple IOS). Возможность обнаружения версий. Ан <code>open|filtered</code> Порт считается открытым. А. <code>filtered</code> Порт считается открытым (и запускает обнаружение устройства). Устройство должно реагировать на пинг Nmap. Используйте нормальное время.<br/><br/><strong>Ультрамедленный</strong>: <i>20 минут</i>. Не рекомендуется. Сканируйте 1000 лучших портов TCP и UDP, а также порт 62078 (детектирование Apple IOS). Устройства сканируются независимо от ответа на пинг Nmap. Возможность обнаружения версий. Ан <code>open|filtered</code> Порт считается открытым. А. <code>filtered</code> Порт считается открытым (и запускает обнаружение устройства). Используйте вежливое время.<br/><br/><strong>обычай</strong>: <i>Неизвестное время</i>. Когда параметры, отличные от установленных стандартным набором обнаружения, изменяются.<br/><br/></br></br></p>';

$GLOBALS["lang"]['<p>Groups are used as simple lists of devices that match the required conditions. If requested using JSON they return a list of <code>devices.id</code> only. If requested using the web interface, they return the standard column attribute list.<br> <br></p>'] = '<p>Группы используются в качестве простых списков устройств, соответствующих требуемым условиям. По запросу JSON они возвращают список <code>devices.id</code> Только. При запросе с помощью веб-интерфейса они возвращают стандартный список атрибутов столбца.<br/> <br/></p>';

$GLOBALS["lang"]['<p>If the user logging on to Open-AudIT does not have the access to search LDAP (and you are using OpenLDAP), you can use another account which does have this access. Use the <code>ldap_dn_account</code> and <code>ldap_dn_password</code> to configure this.<br> <br><strong>Helpful Documentation</strong><br> <br>
        <a href="/index.php/auth/help">General Auth Help</a><br> <br>
        <a href="/index.php/faq?name=Using Entra for Auth">Using Entra for Auth</a><br> <br>
        <a href="/index.php/faq?name=Using OKTA for Auth">Using OKTA for Auth</a><br> <br>
        <a href="/index.php/faq?name=Troubleshooting LDAP Logins">Troubleshooting LDAP Logins</a><br> <br>
        <a href="/index.php/faq?name=Users, Roles and Orgs">Users, Roles and Orgs</a><br> <br></p>'] = '<p>Если пользователь, входящий в систему Open-AudIT, не имеет доступа к поисковой системе LDAP (и вы используете OpenLDAP), вы можете использовать другую учетную запись, которая имеет этот доступ. Используйте <code>ldap_dn_account</code> и <code>ldap_dn_password</code> Чтобы настроить это.<br/> <br/><strong>Полезная документация</strong><br/> <br/><a href="/index.php/auth/help">Помощь генерала Аута</a><br/> <br/><a href="/index.php/faq?name=Using Entra for Auth">Использование Entra для Auth</a><br/> <br/><a href="/index.php/faq?name=Using OKTA for Auth">Использование OKTA для Auth</a><br/> <br/><a href="/index.php/faq?name=Troubleshooting LDAP Logins">Устранение неполадок LDAP Logins</a><br/> <br/><a href="/index.php/faq?name=Users, Roles and Orgs">Пользователи, роли и организации</a><br/> <br/></p>';

$GLOBALS["lang"]['<p>If you add a device type, to display the associated icon you will have to manually copy the .svg formatted file to the directory:<br><em>Linux</em>:/usr/local/open-audit/public/device_images<br><em>Windows</em>: c:\xampp\htdocs\open-audit\device_images<br> <br>If you add a location type, to display the associated icon you will have to manually copy the 32x32px icon to the directory:<br><em>Linux</em>:/usr/local/open-audit/public/images/map_icons<br><em>Windows</em>: c:\xampp\htdocs\open-audit\images\map_icons</p><p>When the <i>resource</i> is a <code>device</code>, valid <i>types</i> are: <code>class</code>, <code>environment</code>, <code>status</code> and <code>type</code>. If the <i>resource</i> is <code>locations</code> or <code>org</code> the only valid <i>type</i> is <code>type</code>. If the <i>resource</i> is a <code>query</code> the only valid <i>type</i> is <code>menu_category</code>.</p>'] = '<p>Если вы добавите тип устройства, для отображения связанного значка вам придется вручную скопировать отформатированный файл .svg в каталог:<br/><em>Linux</em>:/usr/local/open-audit/public/device_images<br/><em>Windows</em>c:\xampp\htdocs\open-audit\device_images<br/> <br/>Если вы добавите тип местоположения, для отображения связанного значка вам придется вручную скопировать значок 32x32px в каталог:<br/><em>Linux</em>:/usr/local/open-audit/public/images/map_icons<br/><em>Windows</em>c:\xampp\htdocs\open-audit\images\map_icons</p><p>Когда <i>ресурс</i> является <code>device</code>действительный <i>типы</i> это: <code>class</code>, <code>environment</code>, <code>status</code> и <code>type</code>. Если <i>ресурс</i> это <code>locations</code> или <code>org</code> Единственный действительный <i>тип</i> это <code>type</code>. Если <i>ресурс</i> является <code>query</code> Единственный действительный <i>тип</i> это <code>menu_category</code>.</p>';

$GLOBALS["lang"]['<p>If you intend to completely audit your cloud machines, do not forget you will also need those credentials saved in Open-AudIT.</p><p>Make sure you allow the correct ports if you are using Microsoft Azure (22 for SSH, etc). Check your Virtual Machine -> Networking rules.<br> <br></p>'] = '<p>Если вы намерены полностью проверить свои облачные машины, не забывайте, что вам также понадобятся учетные данные, сохраненные в Open-AudIT.</p><p>Убедитесь, что вы разрешаете правильные порты, если вы используете Microsoft Azure (22 для SSH и т. Д.). Проверьте свою виртуальную машину -> Сетевые правила.<br/> <br/></p>';

$GLOBALS["lang"]['<p>If you select a List type, the "values" field will be enabled. You should put a comma separated list of selectable values here. These will display in a dropdown box whenever the field is edited.<br> <br>Like most other attributes, Fields can be bulk edited. Use the Bulk Edit function as you normally would and you will see the Fields are available for input.<br> <br>View the device details screen, open the section containing the field and (if you have sufficient access) you can click on the field value to edit it.<br> <br></p>'] = '<p>Если вы выберете тип списка, будет включено поле «значения». Вы должны поместить запятую отдельно список выбираемых значений здесь. Они будут отображаться в выпадающем поле всякий раз, когда поле отредактировано.<br/> <br/>Как и большинство других атрибутов, поля могут быть массово отредактированы. Используйте функцию Bulk Edit, как обычно, и вы увидите, что поля доступны для ввода.<br/> <br/>Просмотрите экран деталей устройства, откройте раздел, содержащий поле и (если у вас есть достаточный доступ) вы можете нажать на значение поля для его редактирования.<br/> <br/></p>';

$GLOBALS["lang"]['<p>In the ever-changing world of computer security where new vulnerabilities are being discovered and patched every day, enforcing security compliance must be a continuous process. It also needs to include a way to make adjustments to policies, as well as periodic assessment and risk monitoring. The OpenSCAP ecosystem provides tools and customizable policies for a quick, cost-effective and flexible implementation of these processes.</p>'] = '<p>В постоянно меняющемся мире компьютерной безопасности, где каждый день обнаруживаются и исправляются новые уязвимости, обеспечение соблюдения требований безопасности должно быть непрерывным процессом. Он также должен включать в себя способ внесения корректив в политику, а также периодическую оценку и мониторинг рисков. Экосистема OpenSCAP предоставляет инструменты и настраиваемые политики для быстрого, экономически эффективного и гибкого осуществления этих процессов.</p>';

$GLOBALS["lang"]['<p>Integrations allow you to setup device selection and schedules for Open-AudIT to talk to external systems.<br> <br></p>'] = '<p>Интеграции позволяют настраивать выбор устройств и графики для взаимодействия Open-AudIT с внешними системами.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Nmap timing details are found on the bottom of this linked page <a href="https://nmap.org/book/man-performance.html" target="_blank">https://nmap.org/book/man-performance.html</a>. From that page:<br> <br><em>If you are on a decent broadband or ethernet connection, I would recommend always using -T4 (Aggressive). Some people love -T5 (Insane) though it is too aggressive for my taste. People sometimes specify -T2 (Polite) because they think it is less likely to crash hosts or because they consider themselves to be polite in general. They often do not realize just how slow -T2 really is. Their scan may take ten times longer than a default scan. Machine crashes and bandwidth problems are rare with the default timing options -T3 (Normal) and so I normally recommend that for cautious scanners. Omitting version detection is far more effective than playing with timing values at reducing these problems.</em><footer>Gordon <i>Fyodor</i> Lyon</footer><br> <br></p>'] = '<p>Данные о сроках Nmap найдены в нижней части этой связанной страницы <a href="https://nmap.org/book/man-performance.html" target="_blank">https://nmap.org/book/man-performance.html</a>. На этой странице:<br/> <br/><em>Если вы находитесь на достойном широкополосном или эфирном соединении, я бы рекомендовал всегда использовать -T4 (Агрессивный). Некоторые люди любят T5, хотя это слишком агрессивно на мой вкус. Люди иногда указывают -T2 (Polite), потому что они думают, что это менее вероятно, чтобы сбить хостов или потому, что они считают себя вежливыми в целом. Они часто не понимают, насколько медленным является T2. Их сканирование может занять в десять раз больше времени, чем по умолчанию. Машинные сбои и проблемы с пропускной способностью встречаются редко при вариантах синхронизации по умолчанию -T3 (Normal) и поэтому я обычно рекомендую это для осторожных сканеров. Отказ от обнаружения версий намного эффективнее, чем игра со значениями времени при уменьшении этих проблем.</em><footer>Гордон <i>Федор</i> Лион</footer><br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT can be configured to use different methods to authenticate a user and in addition, to create a user account using assigned roles and orgs based on group membership.<br> <br></p>'] = '<p>Open-AudIT может быть сконфигурирован для использования различных методов аутентификации пользователя и, кроме того, для создания учетной записи пользователя с использованием назначенных ролей и организаций на основе членства в группе.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT can retrieve details about a file or directory of files and monitor these files for changes as per other attributes in the Open-AudIT database.<br> <br>This feature works out of the box for Linux Open-AudIT servers, but needs a change to the service account name under a Windows Open-AudIT server.<br> <br>Supported clients are Windows and Linux.<br> <br></p>'] = '<p>Открытый просмотр Он может извлекать информацию о файле или каталоге файлов и отслеживать эти файлы для изменений в соответствии с другими атрибутами в базе данных Open-AudIT.<br/> <br/>Эта функция работает из коробки для серверов Linux Open-AudIT, но требует изменения имени учетной записи службы под сервером Windows Open-AudIT.<br/> <br/>Поддерживаемыми клиентами являются Windows и Linux.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT can retrieve details about a file, ask the native package manager if they are known to it and monitor these files for changes as per other attributes in the Open-AudIT database.<br> <br>Supported clients are Linux only.<br> <br></p>'] = '<p>Открытый просмотр ИТ-специалисты могут извлекать информацию о файле, спрашивать у диспетчера нативных пакетов, известны ли они ему, и отслеживать эти файлы на предмет изменений в соответствии с другими атрибутами в базе данных Open-AudIT.<br/> <br/>Поддерживаемые клиенты — это только Linux.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT can store information in custom fields that are associated with each device.<br> <br>Once an Additional Field has been created it can be used in queries and groups just like any other attribute in the database.<br> <br></p>'] = '<p>Открытый просмотр Он может хранить информацию в пользовательских полях, которые связаны с каждым устройством.<br/> <br/>После создания дополнительного поля его можно использовать в запросах и группах, как и любой другой атрибут в базе данных.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT comes with many queries inbuilt. If you require a specific query and none of the pre-packaged queries fit your needs, it is quite easy to create a new one and load it into Open-AudIT for running.<br> <br></p>'] = '<p>Open-AudIT поставляется с множеством встроенных запросов. Если вам нужен конкретный запрос и ни один из предварительно упакованных запросов не соответствует вашим потребностям, довольно легко создать новый и загрузить его в Open-AudIT для запуска.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT comes with many summaries inbuilt. If you require a specific summary and none of the pre-packaged summaries fit your needs, it is quite easy to create a new one and load it into Open-AudIT for running.<br> <br></p>'] = '<p>Open-AudIT поставляется с множеством встроенных резюме. Если вам требуется конкретное резюме и ни одно из предварительно упакованных резюме не соответствует вашим потребностям, довольно легко создать новое и загрузить его в Open-AudIT для работы.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT is supported by FirstWave with an amazing level of support. If you prefer an active community of support givers, theres that as well. Where else can you talk directly to the developers and get a response within 24 hours? Just try that with other products! Amazing support. Full stop. You need support, we provide support. No ifs or buts. Great support. Period.<br> <br></p>'] = '<p>Open-AudIT поддерживается FirstWave с удивительным уровнем поддержки. Если вы предпочитаете активное сообщество лиц, оказывающих поддержку, это тоже так. Где еще можно поговорить с разработчиками и получить ответ в течение 24 часов? Попробуйте это с другими продуктами! Удивительная поддержка. Полная остановка. Вам нужна поддержка, мы оказываем поддержку. Никаких "если" или "но". Отличная поддержка. Период.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT provides multi-tenancy out of the box!<br> <br>Orgs (organisations) in Open-AudIT are a key item. A user has a primary Org as well as a list of Orgs they can access. A user combines this with a list of assigned "Roles" that define what actions they can take on items assigned to the Orgs they have access to. The combination of a users "orgs" and "roles" define what they can and cannot do within Open-AudIT.<br> <br>Most items in Open-AudIT are assigned to an Org. Devices, Locations, Networks, etc.<br> <br>Orgs can have child Orgs. Think of an organisational chart (tree) structure. If a user has access to a specific Org, they also have access to that Orgs descendants. For more information, see this <a href="/index.php/faq?name=Users, Roles and Orgs">FAQ</a>.</p>'] = '<p>Open-AudIT обеспечивает многопользовательскую аренду из коробки!<br/> <br/>Организации (организации) в Open-AudIT являются ключевым элементом. У пользователя есть первичная организация, а также список организаций, к которым он может получить доступ. Пользователь объединяет это со списком назначенных «ролей», которые определяют, какие действия они могут предпринять по предметам, назначенным организациям, к которым они имеют доступ. Сочетание «оргов» и «ролей» пользователей определяет, что они могут и не могут делать в рамках Open-AudIT.<br/> <br/>Большинство элементов в Open-AudIT назначаются организации. устройства, местоположения, сети и т. д.<br/> <br/>Органы могут иметь детские организации. Подумайте об организационной структуре (дерево). Если пользователь имеет доступ к определенной организации, он также имеет доступ к потомкам этой организации. Для получения дополнительной информации см. <a href="/index.php/faq?name=Users, Roles and Orgs">FAQ</a>.</p>';

$GLOBALS["lang"]['<p>Open-AudIT provides multi-tenancy out of the box!<br> <br>Orgs (organisations) in Open-AudIT are a key item. A user has a primary Org as well as a list of Orgs they can access. A user combines this with a list of assigned "Roles" that define what actions they can take on items assigned to the Orgs they have access to. The combination of a users "orgs" and "roles" define what they can and cannot do within Open-AudIT.<br> <br>Most items in Open-AudIT are assigned to an Org. Devices, Locations, Networks, etc.<br> <br>Orgs can have child Orgs. Think of an organisational chart (tree) structure. If a user has access to a specific Org, they also have access to that Orgs descendants.</p>'] = '<p>Open-AudIT обеспечивает многопользовательскую аренду из коробки!<br/> <br/>Организации (организации) в Open-AudIT являются ключевым элементом. У пользователя есть первичная организация, а также список организаций, к которым он может получить доступ. Пользователь объединяет это со списком назначенных «ролей», которые определяют, какие действия они могут предпринять по предметам, назначенным организациям, к которым они имеют доступ. Сочетание «оргов» и «ролей» пользователей определяет, что они могут и не могут делать в рамках Open-AudIT.<br/> <br/>Большинство элементов в Open-AudIT назначаются организации. устройства, местоположения, сети и т. д.<br/> <br/>Органы могут иметь детские организации. Подумайте об организационной структуре (дерево). Если пользователь имеет доступ к определенной организации, он также имеет доступ к потомкам этой организации.</p>';

$GLOBALS["lang"]['<p>Quickly view the status of devices on your network.<br> <br></p>'] = '<p>Быстро просмотрите состояние устройств в вашей сети.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Roles in Open-AudIT are a key item. A user has a primary Org as well as a list of Orgs they can access. A user combines this with a list of assigned Roles that define what actions they can take on items assigned to the Orgs they have access to. The combination of a users "orgs" and "roles" define what they can and cannot do within Open-AudIT.<br> <br>
        Get the complete Open-AudIT Enterprise experience. Creating roles allows fine grained control over what your users can do within Open-AudIT.<br> <br>
        The primary method for authorisation (what a user can do) is based on the users Roles. Default roles are defined as admin, org_admin, reporter and user. Each role has a set of permissions (Create, Read, Update, Delete) for each endpoint. The ability to define additional roles and edit existing roles is enabled in Open-AudIT Enterprise.<br> <br>Roles can also be used with LDAP (Active Directory and OpenLDAP) authorisation. Enterprise licensed installations have the ability to customise the LDAP group for each defined role.<br> <br></p>'] = '<p>Роль в OpenAud Это ключевой элемент. У пользователя есть первичная организация, а также список организаций, к которым он может получить доступ. Пользователь объединяет это со списком назначенных ролей, которые определяют, какие действия они могут предпринять по предметам, назначенным организациям, к которым они имеют доступ. Сочетание «оргов» и «ролей» пользователей определяет, что они могут и не могут делать в рамках Open-AudIT.<br/> <br/>Получите полный опыт Open-AudIT Enterprise. Создание ролей позволяет четко контролировать то, что ваши пользователи могут делать в Open-AudIT.<br/> <br/>Основной метод авторизации (что может сделать пользователь) основан на ролях пользователей. Роли по умолчанию определяются как admin, org_admin, Reporter и User. Каждая роль имеет набор разрешений (создавать, читать, обновлять, удалять) для каждой конечной точки. Возможность определения дополнительных ролей и редактирования существующих ролей включена в Open-AudIT Enterprise.<br/> <br/>Роли также могут использоваться с авторизацией LDAP (Active Directory и OpenLDAP). Установки, лицензированные для предприятий, имеют возможность настраивать группу LDAP для каждой определенной роли.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Rules examine attributes and make cahnges based on the appropriate rule.</p>'] = '<p>Правила исследуют атрибуты и делают повозки на основе соответствующего правила.</p>';

$GLOBALS["lang"]['<p>Scanning options allow you to easily apply a set of options to a discovery.<br> <br></p>'] = '<p>Опции сканирования позволяют легко применить набор опций к открытию.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Simple, intuitive, accurate geographic mapping provided by Google Maps. Open-AudIT leverages Google Maps to provide live, interactive geographic mapping of device locations. Automated conversion of street addresses to geocodes and longitude / latitude.<br> <br>
        </p>'] = '<p>Простое, интуитивно понятное, точное географическое отображение, предоставляемое Google Maps. Льготы Open-AudIT Google Maps предоставляет интерактивное географическое отображение местоположения устройств. Автоматическое преобразование адресов улиц в геокоды и долготу/широту.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Software Packages are used to determine if antivirus, backup, firewall, approved or banned software is installed.<br> <br></p>'] = '<p>Пакеты программного обеспечения используются для определения того, установлено ли антивирусное, резервное копирование, брандмауэр, утвержденное или запрещенное программное обеспечение.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Some examples of valid Subnet attributes are: 192.168.1.1 (a single IP address), 192.168.1.0/24 (a subnet), 192.168.1-3.1-20 (a range of IP addresses).<br> <br><em>NOTE</em> - Only a subnet (as per the examples - 192.168.1.0/24) will be able to automatically create a valid network for Open-AudIT. <br> <br>If you use an Active Directory type, make sure you have appropriate credentials to talk to your Domain Controller already in <a href="../credentials">credentials</a>.<br> <br></p>'] = '<p>Некоторые примеры действительных атрибутов Subnet: 192.168.1.1 (единый IP-адрес), 192.168.1.0/24 (подсеть), 192.168.1-3.1-20 (диапазон IP-адресов).<br/> <br/><em>Примечание</em> Только подсеть (в соответствии с примерами - 192.168.1.0/24) сможет автоматически создавать действующую сеть для Open-AudIT. <br/> <br/>Если вы используете тип Active Directory, убедитесь, что у вас есть соответствующие учетные данные, чтобы поговорить с вашим контроллером домена. <a href="../credentials">полномочия</a>.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Standards are stored in Open-AudIT.<br /><br /><br /><br /></p>'] = '<p>Стандарты хранятся в Open-AudIT.<br/><br/><br/><br/></p>';

$GLOBALS["lang"]['<p>Supported clients are Linux only.<br> <br></p>'] = '<p>Поддерживаемые клиенты — это только Linux.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Tasks have a schedule that mirrors the unix cron schedule. The attributes for minute, hour, day_of_month, month, day_of_week all act as per the cron definitions. You can select multiples of these using comma seperated values (no spaces). You can select every value using *.<br> <br>The <code>type</code> of the task can be one of: baselines, collectors, discoveries, queries, reports or summaries.<br> <br>If you wish to schedule a Baseline or Discovery, you will need to create these before creating the tasks. You must use the ID of the type of item in <code>sub_resource_id</code>. For example if you wish to schedule a Discovery, use that particular Discoveries ID in <code>sub_resource_id</code>.<br> <br>The value for <code>uuid</code> is specific to each Open-AudIT server. Your unique value can be found in the configuration.<br> <br>The <code>options</code> attribute is a JSON document containing any extra attributes required to run the task. The extra attributes for reports, queries and summaries are: <code>email_address</code> and <code>format</code>. The extra attribute for Bselines is <code>group_id</code>.<br> <br></p>'] = '<p>Задачи имеют расписание, которое отражает расписание UNIX CRON. Атрибуты минуты, часа, дня месяца, месяца, дня недели действуют в соответствии с определениями cron. Вы можете выбрать кратные из них, используя отдельные значения запятой (без пробелов). Вы можете выбрать любое значение, используя *.<br/> <br/>The <code>type</code> Задачей может быть одна из: исходные линии, коллекторы, открытия, запросы, отчеты или резюме.<br/> <br/>Если вы хотите запланировать Базовую линию или Открытие, вам нужно будет создать их, прежде чем создавать задачи. Вы должны использовать идентификатор типа элемента в <code>sub_resource_id</code>. Например, если вы хотите запланировать Discovery, используйте этот конкретный идентификатор Discoveries. <code>sub_resource_id</code>.<br/> <br/>Ценность для <code>uuid</code> Это относится к каждому серверу Open-AudIT. Ваше уникальное значение можно найти в конфигурации.<br/> <br/>The <code>options</code> Атрибут - это документ JSON, содержащий любые дополнительные атрибуты, необходимые для выполнения задачи. Дополнительными атрибутами для отчетов, запросов и резюме являются: <code>email_address</code> и <code>format</code>. Дополнительным атрибутом для Bselines является <code>group_id</code>.<br/> <br/></p>';

$GLOBALS["lang"]['<p>The <code>type</code> of the location will assign its icon.<br> <br></p>'] = '<p>The <code>type</code> Местоположение присваивает свою икону.<br/> <br/></p>';

$GLOBALS["lang"]['<p>The Attributes endpoint allows you to add customized values to different attributes in Open-AudIT, at the moment this feature works on the Class, Environment, Status and Type attributes on Devices, the Type attribute for both Locations and Orgs as well as the Menu Category for Queries. If you view an item of one of the prvious types (say view a Lkocation) you will notice the Type attribute must be selected from a drop-down box. This is where those values are stored. Hence, if you would like to add a new Type to be chosen for a Location, add it using the Attributes feature.</p>'] = '<p>Конечная точка Attributes позволяет добавлять индивидуальные значения к различным атрибутам в Open-AudIT, на данный момент эта функция работает над атрибутами класса, среды, состояния и типа на устройствах, атрибутом типа как для местоположений, так и для организаций, а также категорией меню для запросов. Если вы просмотрите элемент одного из предыдущих типов (скажем, просмотрите Lkocation), вы заметите, что атрибут Type должен быть выбран из выпадающего окна. Именно здесь хранятся эти ценности. Следовательно, если вы хотите добавить новый тип, который будет выбран для местоположения, добавьте его с помощью функции атрибутов.</p>';

$GLOBALS["lang"]['<p>The Collectors feature enables you to easily manage many "collector" computers that perform network discovery. All Collectors are centrally controlled from the Server. The only required network ports between the Collector and the Server are 80 and/or 443.<br> <br>It makes managing disparate networks quick, easy and simple. Open-AudIT Enterprise licensees get a single collector license included and have the option to buy more as required..<br> <br></p>'] = '<p>Функция Collectors позволяет легко управлять многими «коллекционными» компьютерами, которые выполняют обнаружение сети. Все коллекторы централизованно управляются с сервера. Единственными требуемыми сетевыми портами между Коллектором и Сервером являются 80 и/или 443.<br/> <br/>Это делает управление разрозненными сетями быстрым, легким и простым. Лицензиаты Open-AudIT Enterprise получают единую коллекторскую лицензию и имеют возможность покупать больше по мере необходимости.<br/> <br/></p>';

$GLOBALS["lang"]['<p>The SELECT section of your SQL <em>must</em> contain fully qualified columns. IE - <code>SELECT devices.id AS `devices.id`, devices.name AS `devices.name` ...</code>.<br> <br>The WHERE section of your SQL <em>must</em> contain <code>WHERE @filter</code> so Open-AudIT knows to restrict your query to the appropriate Orgs. SQL not containing this condition will result in the query failing to be created, unless you have the Admin role.<br> <br>An example query SQL showing attributes on devices that have an <code>os_group</code> attribute of "Linux" - <br><code>SELECT devices.id AS `devices.id`, devices.icon AS `devices.icon`, devices.type AS `devices.type`, devices.name AS `devices.name`, devices.os_name AS `devices.os_name` FROM devices WHERE @filter AND devices.os_group = "Linux"</code><br> <br></p>'] = '<p>Раздел SELECT вашего SQL <em>должен</em> Содержит полностью квалифицированные колонки. И.. <code>SELECT devices.id AS `devices.id`, devices.name AS `devices.name` ...</code>.<br/> <br/>Где находится раздел вашего SQL <em>должен</em> содержать <code>WHERE @filter</code> Поэтому Open-AudIT знает, как ограничить ваш запрос соответствующими организациями. SQL, не содержащий этого условия, приведет к тому, что запрос не будет создан, если у вас нет роли администратора.<br/> <br/>Пример запроса SQL, показывающий атрибуты на устройствах, которые имеют <code>os_group</code> Атрибут "Linux" - <br/><code>SELECT devices.id AS `devices.id`, devices.icon AS `devices.icon`, devices.type AS `devices.type`, devices.name AS `devices.name`, devices.os_name AS `devices.os_name` FROM devices WHERE @filter AND devices.os_group = "Linux"</code><br/> <br/></p>';

$GLOBALS["lang"]['<p>The SELECT section of your SQL <em>must</em> only contain <code>DISTINCT(devices.id)</code>.<br> <br>The WHERE section of your SQL <em>must</em> contain <code>WHERE @filter</code> so Open-AudIT knows to restrict your query to the appropriate Orgs. SQL not containing this condition will result in the group failing to be created.<br> <br>An example for SQL to select all devices running the Debian OS - <code>SELECT DISTINCT(devices.id) FROM devices WHERE @filter AND devices.os_family = "Debian"</code><br> <br></p>'] = '<p>Раздел SELECT вашего SQL <em>должен</em> содержать только <code>DISTINCT(devices.id)</code>.<br/> <br/>Где находится раздел вашего SQL <em>должен</em> содержать <code>WHERE @filter</code> Поэтому Open-AudIT знает, как ограничить ваш запрос соответствующими организациями. SQL, не содержащий этого условия, приведет к тому, что группа не будет создана.<br/> <br/>Пример для SQL для выбора всех устройств под управлением Debian OS <code>SELECT DISTINCT(devices.id) FROM devices WHERE @filter AND devices.os_family = "Debian"</code><br/> <br/></p>';

$GLOBALS["lang"]['<p>The license endpoint allows you to track the number of licenses found on your devices.<br> <br>To create an entry to track your licenses you <em>must</em> to provide a name, an organization, the number of licenses acquired and the name of the software. On the field <code>match_string</code> you must provide the name of the software that you want to track, you can use the percent sign (%) as a wildcard in the match_string.<br> <br></p>'] = '<p>Конечная точка лицензии позволяет отслеживать количество лицензий, найденных на ваших устройствах.<br/> <br/>Чтобы создать запись для отслеживания ваших лицензий <em>должен</em> предоставить название, организацию, количество приобретенных лицензий и название программного обеспечения. На поле <code>match_string</code> Вы должны указать название программного обеспечения, которое вы хотите отслеживать, вы можете использовать знак % (%) в качестве wildcard в строке match_string.<br/> <br/></p>';

$GLOBALS["lang"]['<p>The network should be in the format 192.168.1.0/24.<br> <br></p>'] = '<p>Сеть должна быть в формате 192.168.1.0/24.<br/> <br/></p>';

$GLOBALS["lang"]['<p>The primary and optional secondary items should be fully qualified - ie, devices.type or software.name.<br> <br></p>'] = '<p>Первичные и факультативные вторичные предметы должны быть полностью квалифицированными - т.е. устройствами. Тип или программное обеспечение. имя.<br/> <br/></p>';

$GLOBALS["lang"]['<p>There is no need to do anything if you are running Open-AudIT on a Linux server.<br>
<br>
Windows clients are just fine and require no special actions, however.... to enable this feature the audit script must be run locally on the target Windows system. It cannot be run remotely as we do with WMI calls when running the audit script on one Windows machine, while targeting a second Windows machine. To do this we need to copy the audit script to the target Windows machine and then run it. Unfortunately the service account that Apache runs under is the Local System account. This account has no access to remote (network based) resources. To work around this issue the service must be run under another account. It is easiest to just use the local Administrator account, but you can try any account you like as long as it has the required privileges. The Local System account has as much local access as the local Administrator account.<br>
<br>
See our page on enabling <a href="/index.php/faq?name=Running Open-AudIT Apache Service Under Windows">Running Open-AudIT Apache Service Under Windows</a></p>'] = '<p>Вам не нужно ничего делать, если вы используете Open-AudIT на сервере Linux.<br/><br/>Клиенты Windows просто в порядке и не требуют особых действий, однако... чтобы включить эту функцию, скрипт аудита должен быть запущен локально в целевой системе Windows. Он не может запускаться удаленно, как мы делаем с вызовами WMI при запуске скрипта аудита на одной машине Windows, ориентируясь на вторую машину Windows. Для этого нам нужно скопировать скрипт аудита на целевую машину Windows, а затем запустить его. К сожалению, учетная запись службы, под которой работает Apache, является учетной записью локальной системы. Эта учетная запись не имеет доступа к удаленным (сетевым) ресурсам. Чтобы обойти этот вопрос, сервис должен работать под другим аккаунтом. Легче всего использовать локальную учетную запись администратора, но вы можете попробовать любую учетную запись, если она имеет необходимые привилегии. Учетная запись локальной системы имеет такой же локальный доступ, как и учетная запись локального администратора.<br/><br/>См. нашу страницу о возможности <a href="/index.php/faq?name=Running Open-AudIT Apache Service Under Windows">Запуск сервиса Open-AudIT Apache под Windows</a></p>';

$GLOBALS["lang"]['<p>These are the devices that live within a rack.<br> <br></p>'] = '<p>Это устройства, которые живут внутри стойки.<br/> <br/></p>';

$GLOBALS["lang"]['<p>This endpoint enables you to add your cloud infrastructure details. Open-AudIT will then reach out to your clouds using their native API and return your servers, just like any other device in Open-AudIT.<br> <br><em>NOTE</em> - To use this feature, we <em>must</em> enable the configuration items match_mac (for AWS) and match_hostname (for Azure). This will be done automatically the first time a cloud discovery is executed.<br> <br>Credentials for your cloud (<a href="/index.php/faq?name=Credentials for Microsoft Azure used in Cloud Discovery">Azure</a> or <a href="/index.php/faq?name=Credentials for Amazon AWS used in Cloud Discovery">AWS</a>) are required.<br> <br></p>'] = '<p>Эта конечная точка позволяет добавлять данные об облачной инфраструктуре. Затем Open-AudIT подключится к вашим облакам с помощью собственного API и вернет ваши серверы, как и любое другое устройство в Open-AudIT.<br/> <br/><em>Примечание</em> Чтобы использовать эту функцию, мы <em>должен</em> Включите элементы конфигурации match_mac (для AWS) и match_hostname (для Azure). Это будет сделано автоматически при первом обнаружении облака.<br/> <br/>Удостоверения для вашего облака<a href="/index.php/faq?name=Credentials for Microsoft Azure used in Cloud Discovery">Azure</a> или <a href="/index.php/faq?name=Credentials for Amazon AWS used in Cloud Discovery">AWS</a>) являются необходимыми.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Vulnerabilities reporting based on the NIST CVE feed.<br> <br></p>'] = '<p>Отчеты об уязвимостях на основе корма NIST CVE.<br/> <br/></p>';

$GLOBALS["lang"]['<p>We initially setup the default list of scripts with the default options. These default scripts cannot be deleted. You can create additional scripts for use by you as required. Your script will be based on one of the existing scripts and have custom options applied. The scripts can then be downloaded from the list page at menu -> Discover -> Audit Scripts -> List Audit Scripts<br> <br></p>'] = '<p>Сначала мы настраиваем список сценариев по умолчанию с опциями по умолчанию. Эти сценарии по умолчанию не могут быть удалены. Вы можете создавать дополнительные скрипты для использования по мере необходимости. Ваш сценарий будет основан на одном из существующих сценариев и будет иметь пользовательские параметры. Скрипты можно загрузить со страницы списка в меню -> Discover -> Скрипты аудита -> Список сценариев аудита<br/> <br/></p>';

$GLOBALS["lang"]['<p>When using Regex for matching, a helpful page can be found on the <a href="https://www.php.net/manual/en/regexp.reference.meta.php" target="_blank"> PHP website</a>. Some differences to Perl Regex can be found <a href="https://www.php.net/manual/en/reference.pcre.pattern.differences.php" target="_blank">here</a>.</p>'] = '<p>При использовании Regex для сопоставления можно найти полезную страницу <a href="https://www.php.net/manual/en/regexp.reference.meta.php" target="_blank"> PHP сайт</a>. Отличия от Perl Regex можно найти <a href="https://www.php.net/manual/en/reference.pcre.pattern.differences.php" target="_blank">здесь</a>.</p>';

$GLOBALS["lang"]['<p>Widgets can easily be created to show whatever is specific to your environment on your dashboards.<br> <br></p>'] = '<p>Виджеты могут быть легко созданы, чтобы показать все, что относится к вашей среде на панели приборов.<br/> <br/></p>';

$GLOBALS["lang"]['<p>With Open-AudIT Professional and Enterprise you can automate and schedule discoveries, report generation, or baseline checks to run when you want, and as often as you need. Schedule your discoveries to run nightly and reports to be generated and emailed to key personnel each morning. Complex or simple schedules, device discovery and report generation is just a click away.<br> <br>Create individual discovery schedules for each subnet or AD controller, add in reports to be created for targeted audiences. Develop simple or complex schedules to support company needs, avoid backups or impact to operations, or simply to spread the load and speed-up audit completion.<br> <br></p>'] = '<p>С OpenAudIT Вы можете автоматизировать и планировать открытия, генерацию отчетов или базовые проверки, чтобы работать, когда вы хотите, и так часто, как вам нужно. Планируйте свои открытия, чтобы они выполнялись ночью, а отчеты генерировались и отправлялись по электронной почте ключевому персоналу каждое утро. Сложные или простые графики, обнаружение устройств и генерация отчетов - это всего лишь клик.<br/> <br/>Создавайте индивидуальные графики обнаружения для каждой подсети или контроллера AD, добавляйте отчеты для целевой аудитории. Разработайте простые или сложные графики для поддержки потребностей компании, избегайте резервного копирования или воздействия на операции или просто распространяйте загрузку и ускоряйте завершение аудита.<br/> <br/></p>';

$GLOBALS["lang"]['<p>You can create a script with all the options for any of the existing audit scripts - not just Windows. AIX, ESX, Linux, OSX and Windows are all covered.<br> <br></p>'] = '<p>Вы можете создать скрипт со всеми опциями для любого из существующих скриптов аудита - не только Windows. AIX, ESX, Linux, OSX и Windows все покрыты.<br/> <br/></p>';

$GLOBALS["lang"]['<p>You can use the percent % sign as a wildcard in the match_string.<br> <br></p>'] = '<p>Вы можете использовать знак % в качестве wildcard в строке match_string.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Your racks help refine exactly where your devices are located.<br> <br></p>'] = '<p>Ваши стойки помогают точно определить, где находятся ваши устройства.<br/> <br/></p>';

$GLOBALS["lang"]['A Google Maps API Key is required for this function.'] = 'Карты Google API Для этой функции необходим ключ.';

$GLOBALS["lang"]['A JSON array of device IDs that will have this benchmark executed.'] = 'Множество идентификаторов устройств JSON, которые будут выполнять этот эталон.';

$GLOBALS["lang"]['A JSON array of objects matching the software name taken from the CVE, enriched with the software name retrieved by Open-AudIT.'] = 'Массив объектов JSON, соответствующий названию программного обеспечения, взятому из CVE, обогащен именем программного обеспечения, полученным Open-AudIT.';

$GLOBALS["lang"]['A JSON array of values to test for this vulnerability.'] = 'Множество значений JSON для проверки этой уязвимости.';

$GLOBALS["lang"]['A JSON document containing the Orgs assigned to this user. IDs taken from <code>orgs.id</code>. If a user has access to an Org, they have access to that Orgs descendants.'] = 'Документ JSON, содержащий Органы, назначенные этому пользователю. ID, взятые из <code>orgs.id</code>. Если пользователь имеет доступ к какой-либо организации, он имеет доступ к этим потомкам.';

$GLOBALS["lang"]['A JSON document containing the required attributes depending on <code>scripts.type</code>.'] = 'Документ JSON, содержащий требуемые атрибуты в зависимости от <code>scripts.type</code>.';

$GLOBALS["lang"]['A JSON document containing the required attributes overriding the chosen discovery_scan_options.'] = 'Документ JSON, содержащий требуемые атрибуты, перекрывающие выбранные параметры Discovery_scan_options.';

$GLOBALS["lang"]['A JSON document containing the required attributes overriding the default device match options.'] = 'Документ JSON, содержащий необходимые атрибуты, перекрывающие параметры соответствия устройства по умолчанию.';

$GLOBALS["lang"]['A JSON document containing the roles assigned to this user. Role names taken from <code>roles.name</code>.'] = 'Документ JSON, содержащий роли, назначенные этому пользователю. Имена ролей, взятые из <code>roles.name</code>.';

$GLOBALS["lang"]['A JSON object containing an array of attributes to change if the match occurs.'] = 'Объект JSON, содержащий набор атрибутов для изменения, если совпадение происходит.';

$GLOBALS["lang"]['A JSON object containing an array of attributes to match.'] = 'Объект JSON, содержащий набор атрибутов для соответствия.';

$GLOBALS["lang"]['A JSON object containing collection specific options.'] = 'Объект JSON, содержащий конкретные варианты сбора.';

$GLOBALS["lang"]['A JSON object populated via a Cloud discovery.'] = 'Объект JSON, населенный обнаруженным облаком.';

$GLOBALS["lang"]['A JSON representation containing the details of the queue item to be executed.'] = 'Представление JSON, содержащее детали очередей, подлежащих исполнению.';

$GLOBALS["lang"]['A JSON representation of the fields for this integration.'] = 'Представление JSON полей для этой интеграции.';

$GLOBALS["lang"]['A JSON representation of the individual tests and their results on all devices this baseline has been run against.'] = 'Представление JSON об отдельных тестах и их результатах на всех устройствах, с которыми был запущен этот базовый уровень.';

$GLOBALS["lang"]['A JSON representation of the tests that make up this policy.'] = 'Представление JSON тестов, которые составляют эту политику.';

$GLOBALS["lang"]['A URL to a file to download.'] = 'URL для загрузки файла.';

$GLOBALS["lang"]['A calculated field that displays the number of times this piece of software was found on the computers in the selected Org (and its descendants if configured).'] = 'Вычисленное поле, отображающее количество раз, когда эта часть программного обеспечения была найдена на компьютерах в выбранной организации (и ее потомках, если настроена).';

$GLOBALS["lang"]['A collector is either in Collector or Stand-Alone mode.'] = 'Коллекционер находится либо в режиме коллекционера, либо в режиме Stand-Alone.';

$GLOBALS["lang"]['A comma separated list of applicable CVEs.'] = 'Разделенный запятой список применимых CVE.';

$GLOBALS["lang"]['A comma separated list of values, one of which can be selected.'] = 'Запятая разделяет список значений, одно из которых может быть выбрано.';

$GLOBALS["lang"]['A command to run. When the agent is Windows based, this command is run from within the powershell agent.'] = 'Приказ бежать. Когда агент основан на Windows, эта команда запускается из агента Powershell.';

$GLOBALS["lang"]['A list of custom TCP ports to scan (22 is SSH, 135 is WMI, 62078 is iPhone sync).'] = 'Список пользовательских портов TCP для сканирования (22 — SSH, 135 — WMI, 62078 — синхронизация iPhone).';

$GLOBALS["lang"]['A list of custom UDP ports to scan (161 is SNMP).'] = 'Список пользовательских портов UDP для сканирования (161 - SNMP).';

$GLOBALS["lang"]['A lower number means it will be applied before other rules.'] = 'Более низкая цифра означает, что она будет применяться перед другими правилами.';

$GLOBALS["lang"]['A lower number means it will be applied before other rules. The default weight is 100.'] = 'Более низкая цифра означает, что она будет применяться перед другими правилами. Вес по умолчанию составляет 100.';

$GLOBALS["lang"]['A password (stored as a hash) that enables logon when using application authentication.'] = 'Пароль (хранится в виде хэша), который позволяет войти в логотип при использовании аутентификации приложения.';

$GLOBALS["lang"]['A routing domain or address space where the IP addresses and MAC addresses are unique.'] = 'Маршрутизация домена или адресного пространства, где IP-адреса и MAC-адреса являются уникальными.';

$GLOBALS["lang"]['A security zone is a administrative domain or policy domain within the Network Domain.'] = 'Зона безопасности является административным доменом или доменом политики в пределах сетевого домена.';

$GLOBALS["lang"]['A short description of the log entry.'] = 'Краткое описание записи журнала.';

$GLOBALS["lang"]['A string that matches the <code>software.name</code> attribute. You can use the standard SQL wildcard of percent (%) to match one or more characters.'] = 'Струна, которая соответствует <code>software.name</code> атрибут. Вы можете использовать стандартную SQL wildcard % (%) для сопоставления одного или нескольких символов.';

$GLOBALS["lang"]['A vulnerability affecting availability may allow attackers to disrupt services, crash systems, or cause denial-of-service (DoS) (None, Low, High).'] = 'Уязвимость, затрагивающая доступность, может позволить злоумышленникам нарушить работу служб, систем аварий или вызвать отказ в обслуживании (DoS) (None, Low, High).';

$GLOBALS["lang"]['A vulnerability affecting confidentiality may allow attackers to read sensitive data, such as personal information, credentials, or proprietary business data (None, Low, High).'] = 'Уязвимость, затрагивающая конфиденциальность, может позволить злоумышленникам читать конфиденциальные данные, такие как личная информация, учетные данные или служебные данные (None, Low, High).';

$GLOBALS["lang"]['A vulnerability affecting integrity may allow attackers to modify data, inject malicious code, or alter system configurations (None, Low, High).'] = 'Уязвимость, затрагивающая целостность, может позволить злоумышленникам изменять данные, вводить вредоносный код или изменять конфигурации системы (None, Low, High).';

$GLOBALS["lang"]['AD Group'] = 'Группа AD';

$GLOBALS["lang"]['ADSL, HFC, ISDN, etc.'] = 'ADSL, HFC, ISDN и т.д.';

$GLOBALS["lang"]['AIX'] = 'AIX';

$GLOBALS["lang"]['ALL IPs'] = 'Все IP';

$GLOBALS["lang"]['API / Web Access'] = 'API / Web Access';

$GLOBALS["lang"]['API Documentation'] = 'API Документация';

$GLOBALS["lang"]['API Key required.'] = 'Требуется ключ API.';

$GLOBALS["lang"]['API Result'] = 'Результат API';

$GLOBALS["lang"]['About'] = 'О нас';

$GLOBALS["lang"]['Accept'] = 'принимать';

$GLOBALS["lang"]['access_point'] = 'Пункт доступа';

$GLOBALS["lang"]['Access Point'] = 'Пункт доступа';

$GLOBALS["lang"]['access_token'] = 'Доступ к маркеру';

$GLOBALS["lang"]['Access Token'] = 'Доступ к маркеру';

$GLOBALS["lang"]['ack_by'] = 'Ack By';

$GLOBALS["lang"]['Ack By'] = 'Ack By';

$GLOBALS["lang"]['ack_date'] = 'Ack дата';

$GLOBALS["lang"]['Ack Date'] = 'Ack дата';

$GLOBALS["lang"]['ack_time'] = 'Ack Time';

$GLOBALS["lang"]['Ack Time'] = 'Ack Time';

$GLOBALS["lang"]['action'] = 'Меры';

$GLOBALS["lang"]['Action'] = 'Меры';

$GLOBALS["lang"]['action_audit'] = 'Аудит действий';

$GLOBALS["lang"]['Action Audit'] = 'Аудит действий';

$GLOBALS["lang"]['action_command'] = 'Командование';

$GLOBALS["lang"]['Action Command'] = 'Командование';

$GLOBALS["lang"]['action_date'] = 'Дата действия';

$GLOBALS["lang"]['Action Date'] = 'Дата действия';

$GLOBALS["lang"]['action_devices_assigned_to_location'] = 'Устройства действия, присвоенные местоположению';

$GLOBALS["lang"]['Action Devices Assigned To Location'] = 'Устройства действия, присвоенные местоположению';

$GLOBALS["lang"]['action_devices_assigned_to_org'] = 'Устройства действия, переданные в организацию';

$GLOBALS["lang"]['Action Devices Assigned To Org'] = 'Устройства действия, переданные в организацию';

$GLOBALS["lang"]['action_download'] = 'Action скачать';

$GLOBALS["lang"]['Action Download'] = 'Action скачать';

$GLOBALS["lang"]['action_uninstall'] = 'Действие Unstall';

$GLOBALS["lang"]['Action Uninstall'] = 'Действие Unstall';

$GLOBALS["lang"]['actioned'] = 'Действующий';

$GLOBALS["lang"]['Actioned'] = 'Действующий';

$GLOBALS["lang"]['actioned_by'] = 'Действуя посредством';

$GLOBALS["lang"]['Actioned By'] = 'Действуя посредством';

$GLOBALS["lang"]['actioned_date'] = 'Время действия';

$GLOBALS["lang"]['Actioned Date'] = 'Время действия';

$GLOBALS["lang"]['actions'] = 'Меры';

$GLOBALS["lang"]['Actions'] = 'Меры';

$GLOBALS["lang"]['Activate'] = 'активировать';

$GLOBALS["lang"]['Activate Free License'] = 'Активировать бесплатную лицензию';

$GLOBALS["lang"]['Activate Key'] = 'Активировать ключ';

$GLOBALS["lang"]['Activate a free Enterprise license'] = 'Активировать бесплатную лицензию предприятия';

$GLOBALS["lang"]['Active'] = 'Активный';

$GLOBALS["lang"]['Active / Active'] = 'Активный / Active';

$GLOBALS["lang"]['Active / Passive'] = 'Активный/пассивный';

$GLOBALS["lang"]['Active Directory'] = 'Active Directory';

$GLOBALS["lang"]['Active Directory Domain'] = 'Домен Active Directory';

$GLOBALS["lang"]['active_directory_ou'] = 'Active Directory Ou';

$GLOBALS["lang"]['Active Directory Ou'] = 'Active Directory Ou';

$GLOBALS["lang"]['Active Directory Server'] = 'Сервер Active Directory';

$GLOBALS["lang"]['ad_domain'] = 'Домен Ad';

$GLOBALS["lang"]['Ad Domain'] = 'Домен Ad';

$GLOBALS["lang"]['ad_group'] = 'Ad Group';

$GLOBALS["lang"]['Ad Group'] = 'Ad Group';

$GLOBALS["lang"]['ad_server'] = 'Ad Server';

$GLOBALS["lang"]['Ad Server'] = 'Ad Server';

$GLOBALS["lang"]['Add'] = 'Добавить';

$GLOBALS["lang"]['Add Credentials'] = 'Добавить Credentials';

$GLOBALS["lang"]['Add Device'] = 'Добавить устройство';

$GLOBALS["lang"]['Add Device to Application'] = 'Добавить устройство в приложение';

$GLOBALS["lang"]['Add Device to Cluster'] = 'Добавить устройство в кластер';

$GLOBALS["lang"]['Add Exception'] = 'Добавить исключение';

$GLOBALS["lang"]['Add Field'] = 'Добавить поле';

$GLOBALS["lang"]['Add If'] = 'Добавить если';

$GLOBALS["lang"]['Add Policies from Device'] = 'Добавление политик с устройства';

$GLOBALS["lang"]['Add Policy'] = 'Добавить политику';

$GLOBALS["lang"]['Add Then'] = 'Добавить';

$GLOBALS["lang"]['Add image'] = 'Добавить изображение';

$GLOBALS["lang"]['additional_items'] = 'Дополнительные пункты';

$GLOBALS["lang"]['Additional Items'] = 'Дополнительные пункты';

$GLOBALS["lang"]['address'] = 'Адрес';

$GLOBALS["lang"]['Address'] = 'Адрес';

$GLOBALS["lang"]['Admin'] = 'администратор';

$GLOBALS["lang"]['admin_status'] = 'Статус администратора';

$GLOBALS["lang"]['Admin Status'] = 'Статус администратора';

$GLOBALS["lang"]['advanced'] = 'продвинутый';

$GLOBALS["lang"]['Advanced'] = 'продвинутый';

$GLOBALS["lang"]['Afghanistan'] = 'Афганистан';

$GLOBALS["lang"]['agents'] = 'Агенты';

$GLOBALS["lang"]['Agents'] = 'Агенты';

$GLOBALS["lang"]['Aggressive'] = 'агрессивный';

$GLOBALS["lang"]['Aland Islands'] = 'Аландские острова';

$GLOBALS["lang"]['Albania'] = 'Албания';

$GLOBALS["lang"]['alert_style'] = 'Стиль оповещения';

$GLOBALS["lang"]['Alert Style'] = 'Стиль оповещения';

$GLOBALS["lang"]['Algeria'] = 'Алжир';

$GLOBALS["lang"]['algorithm'] = 'Алгоритм';

$GLOBALS["lang"]['Algorithm'] = 'Алгоритм';

$GLOBALS["lang"]['alias'] = 'Алиса';

$GLOBALS["lang"]['Alias'] = 'Алиса';

$GLOBALS["lang"]['All'] = 'Все';

$GLOBALS["lang"]['All IPs'] = 'Все IP';

$GLOBALS["lang"]['All Policies'] = 'Любая политика';

$GLOBALS["lang"]['All Queued Items'] = 'Все задаваемые вопросы';

$GLOBALS["lang"]['Amazon AWS Fields'] = 'Amazon AWS Поля';

$GLOBALS["lang"]['American Samoa'] = 'Американское Самоа';

$GLOBALS["lang"]['An array of <code>benchmarks.id</code>.'] = 'массив из <code>benchmarks.id</code>.';

$GLOBALS["lang"]['An array of <code>devices.id</code>.'] = 'массив из <code>devices.id</code>.';

$GLOBALS["lang"]['An array of object representing external links to more information.'] = 'Массив объектов, представляющих внешние ссылки на дополнительную информацию.';

$GLOBALS["lang"]['An encrypted JSON document containing the required attributes depending on the <code>credentials.type</code>.'] = 'Зашифрованный JSON-документ, содержащий требуемые атрибуты в зависимости от <code>credentials.type</code>.';

$GLOBALS["lang"]['An indication of the level of service required by this site.'] = 'Указание уровня обслуживания, требуемого этим сайтом.';

$GLOBALS["lang"]['An internal field that indicates if the discovery has completed.'] = 'Внутреннее поле, которое указывает, завершено ли открытие.';

$GLOBALS["lang"]['An optional GeoCode'] = 'Дополнительный GeoCode';

$GLOBALS["lang"]['An optional password to use sudo.'] = 'Дополнительный пароль для использования sudo.';

$GLOBALS["lang"]['Andorra'] = 'Андорра';

$GLOBALS["lang"]['Angola'] = 'Ангола';

$GLOBALS["lang"]['Anguilla'] = 'Ангилья';

$GLOBALS["lang"]['Antarctica'] = 'Антарктида';

$GLOBALS["lang"]['AntiVirus'] = 'Антивирус';

$GLOBALS["lang"]['Antigua and Barbuda'] = 'Антигуа и Барбуда';

$GLOBALS["lang"]['Antivirus'] = 'Антивирус';

$GLOBALS["lang"]['Any TCP ports (comma seperated, no spaces) you wish to exclude from this discovery. Only available when using Nmap 7+.'] = 'Любые порты TCP (отдельные запятые, без пробелов) вы хотите исключить из этого открытия. Доступно только при использовании Nmap 7+.';

$GLOBALS["lang"]['Any UDP ports (comma seperated, no spaces) you wish to exclude from this discovery. Only available when using Nmap 7+.'] = 'Любые порты UDP (отдельные запятые, без пробелов) вы хотите исключить из этого открытия. Доступно только при использовании Nmap 7+.';

$GLOBALS["lang"]['Any additional documentation you need.'] = 'Любая дополнительная документация, которая вам нужна.';

$GLOBALS["lang"]['Any additional notes you care to make.'] = 'Любые дополнительные заметки, которые вы хотите сделать.';

$GLOBALS["lang"]['Any devices will be assigned to this Org when they run their audit script (if set). Links to <code>orgs.id</code>.'] = 'Любые устройства будут назначены этой организации, когда они запустят свой скрипт аудита (если он установлен). Ссылки на <code>orgs.id</code>.';

$GLOBALS["lang"]['Any discovered devices will be assigned to this Location if set. Links to <code>locations.id</code>.'] = 'Любые обнаруженные устройства будут назначены на это место, если они установлены. Ссылки на <code>locations.id</code>.';

$GLOBALS["lang"]['Any discovered devices will be assigned to this Location when they run their audit script (if set). Links to <code>locations.id</code>.'] = 'Любые обнаруженные устройства будут назначены на это место, когда они запустят свой скрипт аудита (если он установлен). Ссылки на <code>locations.id</code>.';

$GLOBALS["lang"]['Any discovered devices will be assigned to this Org if set. If not set, they are assigned to the <code>org_id</code> of this discovery. Links to <code>orgs.id</code>.'] = 'Любые обнаруженные устройства будут назначены этой организации, если они установлены. Если же они не установлены, то они отнесены к <code>org_id</code> об этом открытии. Ссылки на <code>orgs.id</code>.';

$GLOBALS["lang"]['Any required filter. NOTE: When type = traffic, this represents the font-awesome icon.'] = 'Любой требуемый фильтр. ПРИМЕЧАНИЕ: Когда тип = трафик, это представляет собой значок шрифта.';

$GLOBALS["lang"]['Any specific TCP ports you wish tested (comma seperated, no spaces).'] = 'Любые конкретные порты TCP, которые вы хотите протестировать (отдельные запятые, без пробелов).';

$GLOBALS["lang"]['Any specific UDP ports you wish tested (comma seperated, no spaces).'] = 'Любые конкретные порты UDP, которые вы хотите протестировать (отдельные запятые, без пробелов).';

$GLOBALS["lang"]['Application'] = 'Применение';

$GLOBALS["lang"]['application_id'] = 'Идентификатор';

$GLOBALS["lang"]['Application ID'] = 'Идентификатор';

$GLOBALS["lang"]['Application Licenses'] = 'Лицензии на применение';

$GLOBALS["lang"]['Application, Operating System or Hardware.'] = 'Приложение, операционная система или аппаратное обеспечение.';

$GLOBALS["lang"]['applications'] = 'Приложения';

$GLOBALS["lang"]['Applications'] = 'Приложения';

$GLOBALS["lang"]['applied'] = 'прикладной';

$GLOBALS["lang"]['Applied'] = 'прикладной';

$GLOBALS["lang"]['Approved'] = 'Утвержденный';

$GLOBALS["lang"]['April'] = 'апрель';

$GLOBALS["lang"]['architecture'] = 'Архитектура';

$GLOBALS["lang"]['Architecture'] = 'Архитектура';

$GLOBALS["lang"]['Are you sure you want to delete this input item?'] = 'Вы уверены, что хотите удалить этот элемент ввода?';

$GLOBALS["lang"]['Are you sure you want to delete this output item?'] = 'Вы уверены, что хотите удалить этот элемент вывода?';

$GLOBALS["lang"]['Are you sure? This will remove all queue entries and prevent the remaining IPs from being discovered.'] = 'Ты уверен? Это удалит все записи в очереди и предотвратит обнаружение оставшихся IP-адресов.';

$GLOBALS["lang"]['Are you sure? This will reset the queue processing count and could cause load on the server.'] = 'Ты уверен? Это сбрасывает количество обработки очереди и может вызвать нагрузку на сервер.';

$GLOBALS["lang"]['area'] = 'район';

$GLOBALS["lang"]['Area'] = 'район';

$GLOBALS["lang"]['Argentina'] = 'Аргентина';

$GLOBALS["lang"]['Armenia'] = 'Армения';

$GLOBALS["lang"]['arp'] = 'аркан';

$GLOBALS["lang"]['Arp'] = 'аркан';

$GLOBALS["lang"]['Aruba'] = 'Аруба';

$GLOBALS["lang"]['As per the attributes for device environments. Production, Training, et al.'] = 'В соответствии с атрибутами для сред устройств. Производство, обучение и др.';

$GLOBALS["lang"]['As you have Collectors registered, please choose where to execute this discovery.'] = 'Поскольку у вас есть Коллекционеры, пожалуйста, выберите, где выполнить это открытие.';

$GLOBALS["lang"]['Ask me later'] = 'Спроси позже';

$GLOBALS["lang"]['Ask the Community for help or contribute answers for others.'] = 'Попросите у сообщества помощи или ответов для других.';

$GLOBALS["lang"]['aspect_ratio'] = 'Соотношение сторон';

$GLOBALS["lang"]['Aspect Ratio'] = 'Соотношение сторон';

$GLOBALS["lang"]['Asset ID'] = 'Актив ID';

$GLOBALS["lang"]['asset_ident'] = 'Идентификация активов';

$GLOBALS["lang"]['Asset Ident'] = 'Идентификация активов';

$GLOBALS["lang"]['asset_number'] = 'Число активов';

$GLOBALS["lang"]['Asset Number'] = 'Число активов';

$GLOBALS["lang"]['asset_tag'] = 'Тег активов';

$GLOBALS["lang"]['Asset Tag'] = 'Тег активов';

$GLOBALS["lang"]['Assign Device to Application'] = 'Назначить устройство для применения';

$GLOBALS["lang"]['Assign Device to Cluster'] = 'Назначить устройство для кластера';

$GLOBALS["lang"]['Assign Device to Location'] = 'Назначьте устройство для местоположения';

$GLOBALS["lang"]['Assign Device to Organisation'] = 'Назначить устройство организации';

$GLOBALS["lang"]['Assign Devices to Location'] = 'Назначение устройств на местоположение';

$GLOBALS["lang"]['Assign Devices to Organisation'] = 'Назначить устройства для организации';

$GLOBALS["lang"]['Assign an Operator'] = 'Назначить оператора';

$GLOBALS["lang"]['Assigned To'] = 'назначенный на';

$GLOBALS["lang"]['At present we can use netstat_ports, software and users.'] = 'В настоящее время мы можем использовать netstat_ports, программное обеспечение и пользователей.';

$GLOBALS["lang"]['attached_device_id'] = 'ID подключенного устройства';

$GLOBALS["lang"]['Attached Device ID'] = 'ID подключенного устройства';

$GLOBALS["lang"]['attached_to'] = 'Прикрепленный к';

$GLOBALS["lang"]['Attached To'] = 'Прикрепленный к';

$GLOBALS["lang"]['attachment'] = 'Прикрепление';

$GLOBALS["lang"]['Attachment'] = 'Прикрепление';

$GLOBALS["lang"]['attachments'] = 'Прикрепления';

$GLOBALS["lang"]['Attachments'] = 'Прикрепления';

$GLOBALS["lang"]['attack_complexity'] = 'Сложность атаки';

$GLOBALS["lang"]['Attack Complexity'] = 'Сложность атаки';

$GLOBALS["lang"]['attack_requirements'] = 'Требования к атаке';

$GLOBALS["lang"]['Attack Requirements'] = 'Требования к атаке';

$GLOBALS["lang"]['attack_vector'] = 'Вектор атаки';

$GLOBALS["lang"]['Attack Vector'] = 'Вектор атаки';

$GLOBALS["lang"]['Attribute'] = 'атрибут';

$GLOBALS["lang"]['attributes'] = 'Атрибуты';

$GLOBALS["lang"]['Attributes'] = 'Атрибуты';

$GLOBALS["lang"]['Audit'] = 'Аудит';

$GLOBALS["lang"]['Audit AIX'] = 'Аудит AIX';

$GLOBALS["lang"]['Audit ESXi'] = 'Аудит ESXi';

$GLOBALS["lang"]['Audit Linux'] = 'Аудитория Linux';

$GLOBALS["lang"]['audit_log'] = 'Аудиторский журнал';

$GLOBALS["lang"]['Audit Log'] = 'Аудиторский журнал';

$GLOBALS["lang"]['Audit My PC'] = 'Аудитория моего ПК';

$GLOBALS["lang"]['Audit OSX'] = 'Аудитория OSX';

$GLOBALS["lang"]['Audit Result Input'] = 'Результаты аудита Input';

$GLOBALS["lang"]['Audit Status'] = 'Статус аудита';

$GLOBALS["lang"]['Audit Windows'] = 'Аудитория Windows';

$GLOBALS["lang"]['Audit the Device'] = 'Проверить устройство';

$GLOBALS["lang"]['Audits'] = 'Аудит';

$GLOBALS["lang"]['August'] = 'август';

$GLOBALS["lang"]['Australia'] = 'Австралия';

$GLOBALS["lang"]['Austria'] = 'Австрия';

$GLOBALS["lang"]['Auth'] = 'аут';

$GLOBALS["lang"]['auth'] = 'аут';

$GLOBALS["lang"]['Authentication Passphrase'] = 'Аутентификация Passphrase';

$GLOBALS["lang"]['authority_key_ident'] = 'Ключевой идентификатор Authority';

$GLOBALS["lang"]['Authority Key Ident'] = 'Ключевой идентификатор Authority';

$GLOBALS["lang"]['Auto'] = 'Автомат';

$GLOBALS["lang"]['auto_renew'] = 'Auto Renew';

$GLOBALS["lang"]['Auto Renew'] = 'Auto Renew';

$GLOBALS["lang"]['Auto populated by the Open-AudIT Server.'] = 'Автозаселяется сервером Open-AudIT.';

$GLOBALS["lang"]['AutoRenew'] = 'AutoRenew';

$GLOBALS["lang"]['automatable'] = 'автоматический';

$GLOBALS["lang"]['Automatable'] = 'автоматический';

$GLOBALS["lang"]['Automatically populated based on the Collectors OS.'] = 'Автоматически заселяется на базе ОС Collectors.';

$GLOBALS["lang"]['availability'] = 'наличие';

$GLOBALS["lang"]['Availability'] = 'наличие';

$GLOBALS["lang"]['Azerbaijan'] = 'Азербайджан';

$GLOBALS["lang"]['BTU Max'] = 'БТУ Макс';

$GLOBALS["lang"]['BTU Total'] = 'BTU Total';

$GLOBALS["lang"]['Backup'] = 'Резервное копирование';

$GLOBALS["lang"]['Bahamas the'] = 'Багамские острова';

$GLOBALS["lang"]['Bahrain'] = 'Бахрейн';

$GLOBALS["lang"]['Bangladesh'] = 'Бангладеш';

$GLOBALS["lang"]['bank'] = 'Банк';

$GLOBALS["lang"]['Bank'] = 'Банк';

$GLOBALS["lang"]['Banned'] = 'запрещенный';

$GLOBALS["lang"]['bar_code'] = 'Барный код';

$GLOBALS["lang"]['Bar Code'] = 'Барный код';

$GLOBALS["lang"]['Barbados'] = 'Барбадос';

$GLOBALS["lang"]['Base DN'] = 'База DN';

$GLOBALS["lang"]['base_score'] = 'Базовый балл';

$GLOBALS["lang"]['Base Score'] = 'Базовый балл';

$GLOBALS["lang"]['base_severity'] = 'Серьезность основания';

$GLOBALS["lang"]['Base Severity'] = 'Серьезность основания';

$GLOBALS["lang"]['based_on'] = 'основанный на';

$GLOBALS["lang"]['Based On'] = 'основанный на';

$GLOBALS["lang"]['baseline'] = 'Базовая линия';

$GLOBALS["lang"]['Baseline'] = 'Базовая линия';

$GLOBALS["lang"]['baseline_id'] = 'Базовый идентификатор';

$GLOBALS["lang"]['Baseline ID'] = 'Базовый идентификатор';

$GLOBALS["lang"]['baselines'] = 'Базовые линии';

$GLOBALS["lang"]['Baselines'] = 'Базовые линии';

$GLOBALS["lang"]['baselines_policies'] = 'Основы политики';

$GLOBALS["lang"]['Baselines Policies'] = 'Основы политики';

$GLOBALS["lang"]['Baselines Policy'] = 'Базовая политика';

$GLOBALS["lang"]['Baselines Policy Details'] = 'Основные детали политики';

$GLOBALS["lang"]['baselines_results'] = 'Базовые результаты';

$GLOBALS["lang"]['Baselines Results'] = 'Базовые результаты';

$GLOBALS["lang"]['Basic'] = 'Базовый';

$GLOBALS["lang"]['Belarus'] = 'Беларусь';

$GLOBALS["lang"]['Belgium'] = 'Бельгия';

$GLOBALS["lang"]['Belize'] = 'Белиз';

$GLOBALS["lang"]['Benchmark'] = 'бенчмарк';

$GLOBALS["lang"]['benchmark_id'] = 'ID бенчмарка';

$GLOBALS["lang"]['Benchmark ID'] = 'ID бенчмарка';

$GLOBALS["lang"]['benchmarks'] = 'Контрольные показатели';

$GLOBALS["lang"]['Benchmarks'] = 'Контрольные показатели';

$GLOBALS["lang"]['benchmarks_exceptions'] = 'Исключения бенчмарков';

$GLOBALS["lang"]['Benchmarks Exceptions'] = 'Исключения бенчмарков';

$GLOBALS["lang"]['benchmarks_log'] = 'Справочная информация';

$GLOBALS["lang"]['Benchmarks Log'] = 'Справочная информация';

$GLOBALS["lang"]['benchmarks_policies'] = 'Основные направления политики';

$GLOBALS["lang"]['Benchmarks Policies'] = 'Основные направления политики';

$GLOBALS["lang"]['benchmarks_result'] = 'Результаты бенчмарков';

$GLOBALS["lang"]['Benchmarks Result'] = 'Результаты бенчмарков';

$GLOBALS["lang"]['Benin'] = 'Бенин';

$GLOBALS["lang"]['Bermuda'] = 'Бермудские острова';

$GLOBALS["lang"]['best_practises'] = 'Лучшие практики';

$GLOBALS["lang"]['Best Practises'] = 'Лучшие практики';

$GLOBALS["lang"]['Bhutan'] = 'Бутан';

$GLOBALS["lang"]['bios'] = 'Биос';

$GLOBALS["lang"]['Bios'] = 'Биос';

$GLOBALS["lang"]['body'] = 'тело';

$GLOBALS["lang"]['Body'] = 'тело';

$GLOBALS["lang"]['Bolivia'] = 'Боливия';

$GLOBALS["lang"]['Boolean'] = 'булевый';

$GLOBALS["lang"]['Boolean 1/0'] = 'Булевый 1/0';

$GLOBALS["lang"]['Boolean y/n'] = 'Булев y/n';

$GLOBALS["lang"]['boot_device'] = 'Загрузочное устройство';

$GLOBALS["lang"]['Boot Device'] = 'Загрузочное устройство';

$GLOBALS["lang"]['bootable'] = 'заряжаемый';

$GLOBALS["lang"]['Bootable'] = 'заряжаемый';

$GLOBALS["lang"]['Bosnia and Herzegovina'] = 'Босния и Герцеговина';

$GLOBALS["lang"]['Botswana'] = 'Ботсвана';

$GLOBALS["lang"]['Bouvet Island (Bouvetoya)'] = 'Остров Буве (Bouvetoya)';

$GLOBALS["lang"]['Brazil'] = 'Бразилия';

$GLOBALS["lang"]['Brazilian Portuguese'] = 'бразильский португальский';

$GLOBALS["lang"]['British Indian Ocean Territory (Chagos Archipelago)'] = 'Британская территория в Индийском океане (Чагосский архипелаг)';

$GLOBALS["lang"]['British Virgin Islands'] = 'Британские Виргинские острова';

$GLOBALS["lang"]['Brunei Darussalam'] = 'Бруней Даруссалам';

$GLOBALS["lang"]['btu_max'] = 'Бту Макс';

$GLOBALS["lang"]['Btu Max'] = 'Бту Макс';

$GLOBALS["lang"]['btu_total'] = 'Btu Total';

$GLOBALS["lang"]['Btu Total'] = 'Btu Total';

$GLOBALS["lang"]['build_number'] = 'Построить номер';

$GLOBALS["lang"]['Build Number'] = 'Построить номер';

$GLOBALS["lang"]['build_number_full'] = 'Постройте номер полностью';

$GLOBALS["lang"]['Build Number Full'] = 'Постройте номер полностью';

$GLOBALS["lang"]['Building'] = 'Здание';

$GLOBALS["lang"]['Bulgaria'] = 'Болгария';

$GLOBALS["lang"]['Bulk Edit'] = 'Bulk Edit';

$GLOBALS["lang"]['Bulk Editing Device Attributes'] = 'Атрибуты Bulk Editing Device';

$GLOBALS["lang"]['Burkina Faso'] = 'Буркина-Фасо';

$GLOBALS["lang"]['Burundi'] = 'Бурунди';

$GLOBALS["lang"]['business_requirements'] = 'Бизнес-требования';

$GLOBALS["lang"]['Business Requirements'] = 'Бизнес-требования';

$GLOBALS["lang"]['Buy'] = 'Купить';

$GLOBALS["lang"]['Buy More'] = 'Купить больше';

$GLOBALS["lang"]['Buy More Licenses'] = 'Купить больше лицензий';

$GLOBALS["lang"]['By'] = 'By';

$GLOBALS["lang"]['CIDR'] = 'CIDR';

$GLOBALS["lang"]['CIDR Mask'] = 'CIDR Маска';

$GLOBALS["lang"]['cli_config'] = 'КЛИ конфигурация';

$GLOBALS["lang"]['CLI Config'] = 'КЛИ конфигурация';

$GLOBALS["lang"]['CPU'] = 'процессор';

$GLOBALS["lang"]['CPUs'] = 'процессоры';

$GLOBALS["lang"]['CSV'] = 'CSV';

$GLOBALS["lang"]['CVE'] = 'КВЭ';

$GLOBALS["lang"]['Calculated from discovery.'] = 'Рассчитано по открытию.';

$GLOBALS["lang"]['Calculated total number of valid IP addresses for this network.'] = 'Рассчитано общее количество действительных IP-адресов для этой сети.';

$GLOBALS["lang"]['Calculated upon completion, the time taken to execute this item.'] = 'Рассчитано по завершении, время, необходимое для выполнения этого пункта.';

$GLOBALS["lang"]['Calculated when integration is run and contains a JSON representation of the devices in this integration. Each links to <code>devices.id</code>.'] = 'Вычисляется при запуске интеграции и содержит представление JSON устройств в этой интеграции. Каждая ссылка на <code>devices.id</code>.';

$GLOBALS["lang"]['Calculated when integration is run and contains a JSON representation of the locations in this integration. Each links to <code>locations.id</code>.'] = 'Вычисляется при запуске интеграции и содержит JSON представление местоположения в этой интеграции. Каждая ссылка на <code>locations.id</code>.';

$GLOBALS["lang"]['Calculated when integration is run and contains the number of devices selected from Open-AudIT.'] = 'Вычисляется при запуске интеграции и содержит количество устройств, выбранных из Open-AudIT.';

$GLOBALS["lang"]['Calculated when integration is run and contains the number of devices selected the external system.'] = 'Вычисляется при запуске интеграции и содержит количество выбранных устройств внешней системы.';

$GLOBALS["lang"]['Calculated when integration is run and contains the number of devices to be updated in the external system.'] = 'Вычисляется при запуске интеграции и содержит количество устройств, подлежащих обновлению во внешней системе.';

$GLOBALS["lang"]['Calculated when integration is run and contains the number of devices updated in Open-AudIT.'] = 'Рассчитано при запуске интеграции и содержит количество обновленных устройств в Open-AudIT.';

$GLOBALS["lang"]['Cambodia'] = 'Камбоджа';

$GLOBALS["lang"]['Cameroon'] = 'Камерун';

$GLOBALS["lang"]['Campus Area Network'] = 'Сеть Campus Area';

$GLOBALS["lang"]['Can be  <code>active</code>, <code>passive</code> or blank.'] = 'может быть <code>active</code>, <code>passive</code> Или пустой.';

$GLOBALS["lang"]['Can be <code>application</code>, <code>compute</code>, <code>database</code>, <code>storage</code>, <code>virtualisation</code>, <code>web</code>, <code>other</code> or blank.'] = 'может быть <code>application</code>, <code>compute</code>, <code>database</code>, <code>storage</code>, <code>virtualisation</code>, <code>web</code>, <code>other</code> Или пустой.';

$GLOBALS["lang"]['Can be <code>auto</code>, <code>fixed</code>, <code>other</code> or blank.'] = 'может быть <code>auto</code>, <code>fixed</code>, <code>other</code> Или пустой.';

$GLOBALS["lang"]['Can be <code>high availability</code>, <code>load balancing</code>, <code>performance</code>, <code>storage</code>, <code>other</code> or blank.'] = 'может быть <code>high availability</code>, <code>load balancing</code>, <code>performance</code>, <code>storage</code>, <code>other</code> Или пустой.';

$GLOBALS["lang"]['Can be <code>line</code>, <code>pie</code> or <code>traffic</code>.'] = 'может быть <code>line</code>, <code>pie</code> или <code>traffic</code>.';

$GLOBALS["lang"]['Can be <code>user</code> or <code>collector</code>.'] = 'может быть <code>user</code> или <code>collector</code>.';

$GLOBALS["lang"]['Can be set by discovery or user.'] = 'Может быть установлен путем обнаружения или пользователя.';

$GLOBALS["lang"]['Can be set by discovery or user. Uses the ID from the locations table.'] = 'Может быть установлен путем обнаружения или пользователя. Используйте ID из таблицы местоположений.';

$GLOBALS["lang"]['Can the user edit this item.'] = 'Пользователь может редактировать этот элемент.';

$GLOBALS["lang"]['Canada'] = 'Канада';

$GLOBALS["lang"]['Cancel'] = 'отменить';

$GLOBALS["lang"]['capabilities'] = 'Возможности';

$GLOBALS["lang"]['Capabilities'] = 'Возможности';

$GLOBALS["lang"]['Capacity'] = 'Вместимость';

$GLOBALS["lang"]['Cape Verde'] = 'Кабо-Верде';

$GLOBALS["lang"]['Capitalise'] = 'капитализировать';

$GLOBALS["lang"]['caption'] = 'Подпись';

$GLOBALS["lang"]['Caption'] = 'Подпись';

$GLOBALS["lang"]['Cayman Islands'] = 'Каймановы острова';

$GLOBALS["lang"]['Cellular Details'] = 'Сотовые детали';

$GLOBALS["lang"]['Central African Republic'] = 'Центральноафриканская Республика';

$GLOBALS["lang"]['certificate'] = 'Сертификат';

$GLOBALS["lang"]['Certificate'] = 'Сертификат';

$GLOBALS["lang"]['certificate_file'] = 'Сертификационный файл';

$GLOBALS["lang"]['Certificate File'] = 'Сертификационный файл';

$GLOBALS["lang"]['certificate_name'] = 'Имя сертификата';

$GLOBALS["lang"]['Certificate Name'] = 'Имя сертификата';

$GLOBALS["lang"]['certificates'] = 'Сертификаты';

$GLOBALS["lang"]['Certificates'] = 'Сертификаты';

$GLOBALS["lang"]['Chad'] = 'Чад';

$GLOBALS["lang"]['change_id'] = 'Изменить ID';

$GLOBALS["lang"]['Change ID'] = 'Изменить ID';

$GLOBALS["lang"]['change_log'] = 'Изменить логотип';

$GLOBALS["lang"]['Change Log'] = 'Изменить логотип';

$GLOBALS["lang"]['change_type'] = 'Тип изменения';

$GLOBALS["lang"]['Change Type'] = 'Тип изменения';

$GLOBALS["lang"]['check_minutes'] = 'Проверьте минуты';

$GLOBALS["lang"]['Check Minutes'] = 'Проверьте минуты';

$GLOBALS["lang"]['Check for SSH on these ports'] = 'Проверьте SSH в этих портах';

$GLOBALS["lang"]['Check this port for any SSH service.'] = 'Проверьте этот порт для любого сервиса SSH.';

$GLOBALS["lang"]['Chile'] = 'Чили';

$GLOBALS["lang"]['China'] = 'Китай';

$GLOBALS["lang"]['Choose'] = 'Выбрать';

$GLOBALS["lang"]['Choose (select OS first)'] = 'Выберите (выберите ОС первым)';

$GLOBALS["lang"]['Choose a Device'] = 'Выберите устройство';

$GLOBALS["lang"]['Choose a Table'] = 'Выберите стол';

$GLOBALS["lang"]['Christmas Island'] = 'Остров Рождества';

$GLOBALS["lang"]['cidr'] = 'Сидр';

$GLOBALS["lang"]['Cidr'] = 'Сидр';

$GLOBALS["lang"]['circuit_count'] = 'Окружной граф';

$GLOBALS["lang"]['Circuit Count'] = 'Окружной граф';

$GLOBALS["lang"]['circuit_status'] = 'Окружной статус';

$GLOBALS["lang"]['Circuit Status'] = 'Окружной статус';

$GLOBALS["lang"]['city'] = 'Город';

$GLOBALS["lang"]['City'] = 'Город';

$GLOBALS["lang"]['class'] = 'Класс';

$GLOBALS["lang"]['Class'] = 'Класс';

$GLOBALS["lang"]['class_text'] = 'Классный текст';

$GLOBALS["lang"]['Class Text'] = 'Классный текст';

$GLOBALS["lang"]['Click the Delete button to remove the example devices from Open-AudIT.<br>This will remove the below devices from the database. '] = 'Нажмите кнопку Удалить, чтобы удалить примеры устройств из Open-AudIT.<br/>Это позволит удалить устройства из базы данных. ';

$GLOBALS["lang"]['Click the Import button below to populate Open-AudIT with example device data.'] = 'Нажмите кнопку «Импорт» ниже, чтобы заполнить Open-AudIT примерами данных устройства.';

$GLOBALS["lang"]['Client ID'] = 'Клиентский ID';

$GLOBALS["lang"]['client_ident'] = 'Идентификация клиента';

$GLOBALS["lang"]['Client Ident'] = 'Идентификация клиента';

$GLOBALS["lang"]['client_secret'] = 'Секрет клиента';

$GLOBALS["lang"]['Client Secret'] = 'Секрет клиента';

$GLOBALS["lang"]['client_site_name'] = 'Имя клиента';

$GLOBALS["lang"]['Client Site Name'] = 'Имя клиента';

$GLOBALS["lang"]['Close'] = 'Закрыть';

$GLOBALS["lang"]['Cloud'] = 'облако';

$GLOBALS["lang"]['Cloud Details'] = 'Облачные детали';

$GLOBALS["lang"]['Cloud Discovery'] = 'Облако Discovery';

$GLOBALS["lang"]['cloud_id'] = 'Cloud ID';

$GLOBALS["lang"]['Cloud ID'] = 'Cloud ID';

$GLOBALS["lang"]['cloud_log'] = 'Облачный блок';

$GLOBALS["lang"]['Cloud Log'] = 'Облачный блок';

$GLOBALS["lang"]['cloud_name'] = 'Облачное имя';

$GLOBALS["lang"]['Cloud Name'] = 'Облачное имя';

$GLOBALS["lang"]['Cloud Network'] = 'Облачная сеть';

$GLOBALS["lang"]['clouds'] = 'облака';

$GLOBALS["lang"]['Clouds'] = 'облака';

$GLOBALS["lang"]['cluster'] = 'Кластер';

$GLOBALS["lang"]['Cluster'] = 'Кластер';

$GLOBALS["lang"]['cluster_id'] = 'Кластерный ID';

$GLOBALS["lang"]['Cluster ID'] = 'Кластерный ID';

$GLOBALS["lang"]['cluster_name'] = 'Название кластера';

$GLOBALS["lang"]['Cluster Name'] = 'Название кластера';

$GLOBALS["lang"]['cluster_type'] = 'Тип кластера';

$GLOBALS["lang"]['Cluster Type'] = 'Тип кластера';

$GLOBALS["lang"]['clusters'] = 'Кластеры';

$GLOBALS["lang"]['Clusters'] = 'Кластеры';

$GLOBALS["lang"]['Cocos (Keeling) Islands'] = 'Кокосовые (Keeling) острова';

$GLOBALS["lang"]['Collector'] = 'коллекционер';

$GLOBALS["lang"]['Collector (UUID)'] = 'Коллекционер (UUID)';

$GLOBALS["lang"]['Collector Name'] = 'Имя коллекционера';

$GLOBALS["lang"]['collector_uuid'] = 'Коллекционер Uuid';

$GLOBALS["lang"]['Collector Uuid'] = 'Коллекционер Uuid';

$GLOBALS["lang"]['collectors'] = 'коллекционеры';

$GLOBALS["lang"]['Collectors'] = 'коллекционеры';

$GLOBALS["lang"]['Colombia'] = 'Колумбия';

$GLOBALS["lang"]['color'] = 'цвет';

$GLOBALS["lang"]['Color'] = 'цвет';

$GLOBALS["lang"]['column'] = 'колонна';

$GLOBALS["lang"]['Column'] = 'колонна';

$GLOBALS["lang"]['Columns'] = 'колонны';

$GLOBALS["lang"]['command'] = 'Командование';

$GLOBALS["lang"]['Command'] = 'Командование';

$GLOBALS["lang"]['command_options'] = 'Командные варианты';

$GLOBALS["lang"]['Command Options'] = 'Командные варианты';

$GLOBALS["lang"]['command_output'] = 'Командный выход';

$GLOBALS["lang"]['Command Output'] = 'Командный выход';

$GLOBALS["lang"]['command_status'] = 'Командный статус';

$GLOBALS["lang"]['Command Status'] = 'Командный статус';

$GLOBALS["lang"]['command_time_to_execute'] = 'Время выполнения команды';

$GLOBALS["lang"]['Command Time To Execute'] = 'Время выполнения команды';

$GLOBALS["lang"]['comment'] = 'Комментарий';

$GLOBALS["lang"]['Comment'] = 'Комментарий';

$GLOBALS["lang"]['comments'] = 'Комментарий';

$GLOBALS["lang"]['Comments'] = 'Комментарий';

$GLOBALS["lang"]['commercial'] = 'Коммерческий';

$GLOBALS["lang"]['Commercial'] = 'Коммерческий';

$GLOBALS["lang"]['common_name'] = 'Общее имя';

$GLOBALS["lang"]['Common Name'] = 'Общее имя';

$GLOBALS["lang"]['Commonly referred to as the clientId.'] = 'Обычно упоминается как клиент.';

$GLOBALS["lang"]['Commonly referred to as the clientSecret.'] = 'Обычно его называют клиентской тайной.';

$GLOBALS["lang"]['Community'] = 'сообщество';

$GLOBALS["lang"]['Community Questions'] = 'Вопросы сообщества';

$GLOBALS["lang"]['Community String'] = 'Общественная струна';

$GLOBALS["lang"]['Comoros the'] = 'Коморские острова';

$GLOBALS["lang"]['Compact'] = 'компактный';

$GLOBALS["lang"]['Company'] = 'Компания';

$GLOBALS["lang"]['Complexity of the attack (Low or High).'] = 'Сложность атаки (низкая или высокая).';

$GLOBALS["lang"]['Component Table'] = 'Компонентная таблица';

$GLOBALS["lang"]['Components (All Devices)'] = 'Компоненты (все устройства)';

$GLOBALS["lang"]['Compute'] = 'вычислять';

$GLOBALS["lang"]['Condition'] = 'Состояние';

$GLOBALS["lang"]['Config'] = 'конфигурация';

$GLOBALS["lang"]['Config Default, currently '] = 'Config Default в настоящее время ';

$GLOBALS["lang"]['config_file'] = 'Конфигурировать файл';

$GLOBALS["lang"]['Config File'] = 'Конфигурировать файл';

$GLOBALS["lang"]['config_manager_error_code'] = 'Диспетчер ошибок код';

$GLOBALS["lang"]['Config Manager Error Code'] = 'Диспетчер ошибок код';

$GLOBALS["lang"]['configuration'] = 'конфигурация';

$GLOBALS["lang"]['Configuration'] = 'конфигурация';

$GLOBALS["lang"]['Configure'] = 'конфигурировать';

$GLOBALS["lang"]['Congo'] = 'Конго';

$GLOBALS["lang"]['Congo the'] = 'Конго';

$GLOBALS["lang"]['Connected To'] = 'подключенный к';

$GLOBALS["lang"]['connection'] = 'Подключение';

$GLOBALS["lang"]['Connection'] = 'Подключение';

$GLOBALS["lang"]['Connection Options'] = 'Варианты подключения';

$GLOBALS["lang"]['connection_status'] = 'Статус подключения';

$GLOBALS["lang"]['Connection Status'] = 'Статус подключения';

$GLOBALS["lang"]['connections'] = 'Соединения';

$GLOBALS["lang"]['Connections'] = 'Соединения';

$GLOBALS["lang"]['Consider filtered Ports Open'] = 'Подумайте о фильтрации Открытые порты';

$GLOBALS["lang"]['Consider open|filtered Ports Open'] = 'Открытый |фильтрованный Открытые порты';

$GLOBALS["lang"]['contact'] = 'Контакт';

$GLOBALS["lang"]['Contact'] = 'Контакт';

$GLOBALS["lang"]['contact_name'] = 'Контактное имя';

$GLOBALS["lang"]['Contact Name'] = 'Контактное имя';

$GLOBALS["lang"]['contained_in'] = 'Содержится в';

$GLOBALS["lang"]['Contained In'] = 'Содержится в';

$GLOBALS["lang"]['Contains a JSON object details the associated widgets and their positions.'] = 'Содержит объект JSON детализирует связанные виджеты и их позиции.';

$GLOBALS["lang"]['Contains the fields that determine if we should use ssh, snmp and wmi discovery options. A JSON object.'] = 'Содержит поля, которые определяют, следует ли использовать варианты обнаружения ssh, snmp и wmi. Объект Джонса.';

$GLOBALS["lang"]['Context Engine ID'] = 'Context Engine ID';

$GLOBALS["lang"]['Context Name'] = 'Название контекста';

$GLOBALS["lang"]['contractual_obligations'] = 'Договорные обязательства';

$GLOBALS["lang"]['Contractual Obligations'] = 'Договорные обязательства';

$GLOBALS["lang"]['Cook Islands'] = 'Острова Кука';

$GLOBALS["lang"]['Copy and paste an audit result'] = 'Копировать и вставлять результаты аудита';

$GLOBALS["lang"]['Copy and paste the below to the forums, another instance of Open-AudIT or anywhere else you need to provide this item.'] = 'Копируйте и вставляйте ниже на форумы, другой экземпляр Open-AudIT или где-либо еще, чтобы предоставить этот пункт.';

$GLOBALS["lang"]['core_count'] = 'Основной счет';

$GLOBALS["lang"]['Core Count'] = 'Основной счет';

$GLOBALS["lang"]['Cores'] = 'ядра';

$GLOBALS["lang"]['cost_center'] = 'Центр затрат';

$GLOBALS["lang"]['Cost Center'] = 'Центр затрат';

$GLOBALS["lang"]['cost_code'] = 'Код затрат';

$GLOBALS["lang"]['Cost Code'] = 'Код затрат';

$GLOBALS["lang"]['Costa Rica'] = 'Коста-Рика';

$GLOBALS["lang"]['Cote d Ivoire'] = 'Кот-д\'Ивуар';

$GLOBALS["lang"]['count'] = 'граф';

$GLOBALS["lang"]['Count'] = 'граф';

$GLOBALS["lang"]['country'] = 'Страна';

$GLOBALS["lang"]['Country'] = 'Страна';

$GLOBALS["lang"]['country_code'] = 'Страновой кодекс';

$GLOBALS["lang"]['Country Code'] = 'Страновой кодекс';

$GLOBALS["lang"]['cpu_count'] = 'Граф Кпу';

$GLOBALS["lang"]['Cpu Count'] = 'Граф Кпу';

$GLOBALS["lang"]['Create'] = 'создавать';

$GLOBALS["lang"]['Create Example Devices'] = 'Создание примерных устройств';

$GLOBALS["lang"]['create_external_count'] = 'Создание внешнего графа';

$GLOBALS["lang"]['Create External Count'] = 'Создание внешнего графа';

$GLOBALS["lang"]['create_external_from_internal'] = 'Создавать внешнее из внутреннего';

$GLOBALS["lang"]['Create External From Internal'] = 'Создавать внешнее из внутреннего';

$GLOBALS["lang"]['Create Geocode'] = 'Создать геокод';

$GLOBALS["lang"]['create_internal_count'] = 'Создаем внутренний счет';

$GLOBALS["lang"]['Create Internal Count'] = 'Создаем внутренний счет';

$GLOBALS["lang"]['create_internal_from_external'] = 'Создать внутреннее из внешнего';

$GLOBALS["lang"]['Create Internal From External'] = 'Создать внутреннее из внешнего';

$GLOBALS["lang"]['Create NMIS Devices from Open-AudIT'] = 'Создание устройств NMIS от Open-AudIT';

$GLOBALS["lang"]['Create Open-AudIT Devices from '] = 'Создание Open-AudIT устройства из ';

$GLOBALS["lang"]['Create Open-AudIT Devices from NMIS'] = 'Создание Open-AudIT Устройства от NMIS';

$GLOBALS["lang"]['created_by'] = 'созданный';

$GLOBALS["lang"]['Created By'] = 'созданный';

$GLOBALS["lang"]['created_date'] = 'Созданная дата';

$GLOBALS["lang"]['Created Date'] = 'Созданная дата';

$GLOBALS["lang"]['Creating'] = 'создавать';

$GLOBALS["lang"]['Creating Device'] = 'Создание устройства';

$GLOBALS["lang"]['Creating a Query'] = 'Создание запроса';

$GLOBALS["lang"]['creator'] = 'Создатель';

$GLOBALS["lang"]['Creator'] = 'Создатель';

$GLOBALS["lang"]['credential'] = 'Полномочия';

$GLOBALS["lang"]['Credential'] = 'Полномочия';

$GLOBALS["lang"]['credentials'] = 'Полномочия';

$GLOBALS["lang"]['Credentials'] = 'Полномочия';

$GLOBALS["lang"]['Credentials Client ID'] = 'Credentials Client ID';

$GLOBALS["lang"]['Credentials Subscription ID'] = 'Полномочия подписки ID';

$GLOBALS["lang"]['Credentials Tenant ID'] = 'Идентификатор арендатора';

$GLOBALS["lang"]['Credentials for Amazon AWS used in Cloud Discovery'] = 'Полномочия Amazon AWS, используемые в Cloud Discovery';

$GLOBALS["lang"]['Credentials for Microsoft Azure used in Cloud Discovery'] = 'Полномочия для Microsoft Azure используется в Cloud Discovery';

$GLOBALS["lang"]['Critical'] = 'критический';

$GLOBALS["lang"]['criticality'] = 'Критичность';

$GLOBALS["lang"]['Criticality'] = 'Критичность';

$GLOBALS["lang"]['Croatia'] = 'Хорватия';

$GLOBALS["lang"]['Cuba'] = 'Куба';

$GLOBALS["lang"]['current'] = 'текущий';

$GLOBALS["lang"]['Current'] = 'текущий';

$GLOBALS["lang"]['Current Discovery Processes'] = 'Современные процессы обнаружения';

$GLOBALS["lang"]['Current date & time is '] = 'Текущая дата и время ';

$GLOBALS["lang"]['Currently Installed'] = 'В настоящее время установлен';

$GLOBALS["lang"]['Currently supported types are <code>snmp</code>, <code>snmp_v3</code>, <code>ssh</code>, <code>ssh_key</code> or <code>windows</code>.'] = 'В настоящее время поддерживаемые типы <code>snmp</code>, <code>snmp_v3</code>, <code>ssh</code>, <code>ssh_key</code> или <code>windows</code>.';

$GLOBALS["lang"]['Custom TCP Ports'] = 'Пользовательские порты TCP';

$GLOBALS["lang"]['Custom UDP Ports'] = 'Пользовательский UDP Порты';

$GLOBALS["lang"]['Cve'] = 'Пещера';

$GLOBALS["lang"]['Cyprus'] = 'Кипр';

$GLOBALS["lang"]['Czech'] = 'чешский';

$GLOBALS["lang"]['Czech Republic'] = 'Чешская Республика';

$GLOBALS["lang"]['DHCP'] = 'ДГКП';

$GLOBALS["lang"]['DN Account (optional)'] = 'Учетная запись DN (факультативно)';

$GLOBALS["lang"]['DN Password (optional)'] = 'DN Password (необязательно)';

$GLOBALS["lang"]['DNS FQDN'] = 'DNS FQDN';

$GLOBALS["lang"]['DNS Hostname'] = 'DNS имя хоста';

$GLOBALS["lang"]['dashboard_id'] = 'Идентификатор панели инструментов';

$GLOBALS["lang"]['Dashboard ID'] = 'Идентификатор панели инструментов';

$GLOBALS["lang"]['dashboards'] = 'Дэшборд';

$GLOBALS["lang"]['Dashboards'] = 'Дэшборд';

$GLOBALS["lang"]['Database'] = 'База данных';

$GLOBALS["lang"]['db_action'] = 'База данных Action';

$GLOBALS["lang"]['Database Action'] = 'База данных Action';

$GLOBALS["lang"]['db_column'] = 'Колонка базы данных';

$GLOBALS["lang"]['Database Column'] = 'Колонка базы данных';

$GLOBALS["lang"]['Database Definition'] = 'Определение базы данных';

$GLOBALS["lang"]['db_row'] = 'База данных Row';

$GLOBALS["lang"]['Database Row'] = 'База данных Row';

$GLOBALS["lang"]['Database Schema'] = 'Схема базы данных';

$GLOBALS["lang"]['db_table'] = 'Таблица базы данных';

$GLOBALS["lang"]['Database Table'] = 'Таблица базы данных';

$GLOBALS["lang"]['dataset_title'] = 'Название Dataset';

$GLOBALS["lang"]['Dataset Title'] = 'Название Dataset';

$GLOBALS["lang"]['date'] = 'Дата';

$GLOBALS["lang"]['Date'] = 'Дата';

$GLOBALS["lang"]['Date D-M-Y'] = 'Дата D-M-Y';

$GLOBALS["lang"]['Date M-D-Y'] = 'Дата M-D-Y';

$GLOBALS["lang"]['Date Now'] = 'Свидание сейчас';

$GLOBALS["lang"]['date_of_manufacture'] = 'Дата изготовления';

$GLOBALS["lang"]['Date Of Manufacture'] = 'Дата изготовления';

$GLOBALS["lang"]['date_paid'] = 'Оплаченная дата';

$GLOBALS["lang"]['Date Paid'] = 'Оплаченная дата';

$GLOBALS["lang"]['date_received'] = 'Дата получения';

$GLOBALS["lang"]['Date Received'] = 'Дата получения';

$GLOBALS["lang"]['Date Y-M-D'] = 'Дата Y-M-D';

$GLOBALS["lang"]['Date and time when the CVE was last updated.'] = 'Дата и время последнего обновления CVE.';

$GLOBALS["lang"]['Date and time when the CVE was published.'] = 'Дата и время публикации CVE.';

$GLOBALS["lang"]['Date when the CVE was published.'] = 'Дата публикации CVE.';

$GLOBALS["lang"]['DateTime Now'] = 'Дата Время Сейчас';

$GLOBALS["lang"]['DateTime Y-M-D H:M:S'] = 'Время даты И-М-Д H:M:S';

$GLOBALS["lang"]['day_of_month'] = 'День месяца';

$GLOBALS["lang"]['Day Of Month'] = 'День месяца';

$GLOBALS["lang"]['day_of_week'] = 'День недели';

$GLOBALS["lang"]['Day Of Week'] = 'День недели';

$GLOBALS["lang"]['Day of Month'] = 'День месяца';

$GLOBALS["lang"]['dbus_identifier'] = 'Идентификатор Dbus';

$GLOBALS["lang"]['Dbus Identifier'] = 'Идентификатор Dbus';

$GLOBALS["lang"]['Debug'] = 'отладка';

$GLOBALS["lang"]['December'] = 'декабрь';

$GLOBALS["lang"]['Default'] = 'по умолчанию';

$GLOBALS["lang"]['Default Items'] = 'Пункты по умолчанию';

$GLOBALS["lang"]['Default Value'] = 'Ценность по умолчанию';

$GLOBALS["lang"]['Default of 389. Normally 636 used for Active Directory LDAPS.'] = 'Дефолт 389. Обычно 636 используется для Active Directory LDAPS.';

$GLOBALS["lang"]['Default of <code>3</code> for LDAP and Active Directory.'] = 'дефолт <code>3</code> LDAP и Active Directory.';

$GLOBALS["lang"]['Defaults'] = 'недостатки';

$GLOBALS["lang"]['delay_minutes'] = 'Задержка минут';

$GLOBALS["lang"]['Delay Minutes'] = 'Задержка минут';

$GLOBALS["lang"]['Delete'] = 'Исключить';

$GLOBALS["lang"]['Delete Example Devices'] = 'Удалить примеры устройств';

$GLOBALS["lang"]['delete_external_from_internal'] = 'Удалить внешнее из внутреннего';

$GLOBALS["lang"]['Delete External From Internal'] = 'Удалить внешнее из внутреннего';

$GLOBALS["lang"]['Delete NMIS Devices if not in Open-AudIT'] = 'Исключить НМИС Устройства, если не в Open-AudIT';

$GLOBALS["lang"]['Delete from Application'] = 'Удалить из приложения';

$GLOBALS["lang"]['Delete from Cluster'] = 'Удалить из кластера';

$GLOBALS["lang"]['Denmark'] = 'Дания';

$GLOBALS["lang"]['Derived by audit or manually set by user.'] = 'Производится путем аудита или вручную устанавливается пользователем.';

$GLOBALS["lang"]['Derived by audit.'] = 'Проводится аудитом.';

$GLOBALS["lang"]['Derived from <code>rack_devices.device_id</code>.'] = 'полученный из <code>rack_devices.device_id</code>.';

$GLOBALS["lang"]['Derived from <code>rack_devices.rack_id</code>.'] = 'полученный из <code>rack_devices.rack_id</code>.';

$GLOBALS["lang"]['Derived from Collector discovery.'] = 'Происходит от коллекционного открытия.';

$GLOBALS["lang"]['Derived from OS Name.'] = 'Производится от OS Name.';

$GLOBALS["lang"]['Derived from cloud discovery.'] = 'Происходит от облачного обнаружения.';

$GLOBALS["lang"]['Derived from device audits.'] = 'Происходит от аппаратных аудитов.';

$GLOBALS["lang"]['Derived from device type and OS.'] = 'Производится от типа устройства и ОС.';

$GLOBALS["lang"]['Derived from discovery.'] = 'Происходит от открытия.';

$GLOBALS["lang"]['Derived from hostname, sysName, dns Hostname and IP in that order.'] = 'Получено из имени хоста, sysName, dns Hostname и IP в этом порядке.';

$GLOBALS["lang"]['Derived from the integer severity.'] = 'Происходит от целочисленной строгости.';

$GLOBALS["lang"]['description'] = 'Описание';

$GLOBALS["lang"]['Description'] = 'Описание';

$GLOBALS["lang"]['destination'] = 'Направление';

$GLOBALS["lang"]['Destination'] = 'Направление';

$GLOBALS["lang"]['detail'] = 'Подробнее';

$GLOBALS["lang"]['Detail'] = 'Подробнее';

$GLOBALS["lang"]['Details'] = 'Подробности';

$GLOBALS["lang"]['details'] = 'Подробности';

$GLOBALS["lang"]['Details of who is usually contactable at this site.'] = 'Подробности о том, с кем обычно можно связаться на этом сайте.';

$GLOBALS["lang"]['device'] = 'Устройство';

$GLOBALS["lang"]['Device'] = 'Устройство';

$GLOBALS["lang"]['Device Audits'] = 'Аудиты устройств';

$GLOBALS["lang"]['Device ID'] = 'ID устройства';

$GLOBALS["lang"]['device_id'] = 'ID устройства';

$GLOBALS["lang"]['device_id_a'] = 'ID устройства';

$GLOBALS["lang"]['Device ID A'] = 'ID устройства';

$GLOBALS["lang"]['device_id_b'] = 'Устройство ID B';

$GLOBALS["lang"]['Device ID B'] = 'Устройство ID B';

$GLOBALS["lang"]['Device Name'] = 'Имя устройства';

$GLOBALS["lang"]['Device Result'] = 'Результат устройства';

$GLOBALS["lang"]['Device Results'] = 'Результаты устройства';

$GLOBALS["lang"]['Device Seed'] = 'Устройство Seed';

$GLOBALS["lang"]['Device Seed IP'] = 'Устройство Seed IP';

$GLOBALS["lang"]['Device Status'] = 'Состояние устройства';

$GLOBALS["lang"]['Device Types'] = 'Типы устройств';

$GLOBALS["lang"]['Device is in the Subnet'] = 'Устройство находится в подсети';

$GLOBALS["lang"]['Devices'] = 'устройства';

$GLOBALS["lang"]['devices_assigned_to_location'] = 'Устройства, присвоенные местоположению';

$GLOBALS["lang"]['Devices Assigned To Location'] = 'Устройства, присвоенные местоположению';

$GLOBALS["lang"]['devices_assigned_to_org'] = 'Устройства, переданные в организацию';

$GLOBALS["lang"]['Devices Assigned To Org'] = 'Устройства, переданные в организацию';

$GLOBALS["lang"]['Devices Audited'] = 'Проверенные устройства';

$GLOBALS["lang"]['Devices Created in '] = 'устройства, созданные в ';

$GLOBALS["lang"]['Devices Created in Open-AudIT'] = 'Устройства, созданные в Open-AudIT';

$GLOBALS["lang"]['devices_default_display_columns'] = 'Системные требования Default Display Columns';

$GLOBALS["lang"]['Devices Default Display Columns'] = 'Системные требования Default Display Columns';

$GLOBALS["lang"]['Devices Found Last 7 Days'] = 'Устройства найдены последние 7 дней';

$GLOBALS["lang"]['Devices Found Today'] = 'Устройства, найденные сегодня';

$GLOBALS["lang"]['Devices Found Yesterday'] = 'Устройства, найденные вчера';

$GLOBALS["lang"]['Devices Not Audited'] = 'Устройства, не прошедшие аудит';

$GLOBALS["lang"]['Devices Not Seen 30 Days'] = 'Устройства, которые не видны 30 дней';

$GLOBALS["lang"]['Devices Not Seen 7 Days'] = 'Устройства, которые не видны 7 дней';

$GLOBALS["lang"]['Devices Not Seen 90 Days'] = 'Устройства, которых не видели 90 дней';

$GLOBALS["lang"]['Devices Retrieved via API'] = 'Устройства, извлеченные через API';

$GLOBALS["lang"]['Devices Selected from '] = 'Устройства, выбранные из ';

$GLOBALS["lang"]['Devices Selected from Open-AudIT'] = 'Устройства, выбранные из Open-AudIT';

$GLOBALS["lang"]['Devices Updated in '] = 'Обновленные устройства в ';

$GLOBALS["lang"]['Devices Updated in Open-AudIT'] = 'Устройства, обновленные в Open-AudIT';

$GLOBALS["lang"]['Devices are being benchmarked.'] = 'Устройства тестируются.';

$GLOBALS["lang"]['Devices are not being benchmarked.'] = 'Устройства не тестируются.';

$GLOBALS["lang"]['Devices could be benchmarked.'] = 'Устройства можно тестировать.';

$GLOBALS["lang"]['Devices in Running State'] = 'Устройства в Running State';

$GLOBALS["lang"]['Devices in Stopped State'] = 'Устройства в остановленном состоянии';

$GLOBALS["lang"]['Devices in this'] = 'устройств в этой';

$GLOBALS["lang"]['Devired from type or OS.'] = 'Отклоняется от типа или ОС.';

$GLOBALS["lang"]['dhcp_enabled'] = 'Dhcp включен';

$GLOBALS["lang"]['Dhcp Enabled'] = 'Dhcp включен';

$GLOBALS["lang"]['dhcp_lease_expires'] = 'Dhcp Lease уходит в отставку';

$GLOBALS["lang"]['Dhcp Lease Expires'] = 'Dhcp Lease уходит в отставку';

$GLOBALS["lang"]['dhcp_lease_obtained'] = 'Dhcp Аренда получена';

$GLOBALS["lang"]['Dhcp Lease Obtained'] = 'Dhcp Аренда получена';

$GLOBALS["lang"]['dhcp_server'] = 'Dhcp сервер';

$GLOBALS["lang"]['Dhcp Server'] = 'Dhcp сервер';

$GLOBALS["lang"]['Did the command complete successfully and return expected data.'] = 'Выполнила ли команда успешно и вернула ожидаемые данные.';

$GLOBALS["lang"]['direction'] = 'направление';

$GLOBALS["lang"]['Direction'] = 'направление';

$GLOBALS["lang"]['directory'] = 'Директория';

$GLOBALS["lang"]['Directory'] = 'Директория';

$GLOBALS["lang"]['disabled'] = 'инвалид';

$GLOBALS["lang"]['Disabled'] = 'инвалид';

$GLOBALS["lang"]['discard'] = 'выбрасывать';

$GLOBALS["lang"]['Discard'] = 'выбрасывать';

$GLOBALS["lang"]['Discover'] = 'Открытие';

$GLOBALS["lang"]['discoveries'] = 'Открытия';

$GLOBALS["lang"]['Discoveries'] = 'Открытия';

$GLOBALS["lang"]['Discovery'] = 'открытие';

$GLOBALS["lang"]['Discovery Change Logs'] = 'Скачать Discovery Change Logs';

$GLOBALS["lang"]['Discovery Data Retention'] = 'Сохранение данных Discovery';

$GLOBALS["lang"]['discovery_id'] = 'Discovery ID';

$GLOBALS["lang"]['Discovery ID'] = 'Discovery ID';

$GLOBALS["lang"]['Discovery Issues'] = 'Проблемы обнаружения';

$GLOBALS["lang"]['discovery_log'] = 'Логотип Discovery';

$GLOBALS["lang"]['Discovery Log'] = 'Логотип Discovery';

$GLOBALS["lang"]['Discovery Match Options'] = 'Варианты Discovery Match';

$GLOBALS["lang"]['Discovery Name'] = 'Название Discovery';

$GLOBALS["lang"]['Discovery Options'] = 'Варианты Discovery';

$GLOBALS["lang"]['Discovery Queue Count'] = 'Оригинальное название: Discovery Queue Count';

$GLOBALS["lang"]['Discovery Queue Limit'] = 'Лимит Discovery Queue';

$GLOBALS["lang"]['discovery_run'] = 'Обсуждение Discovery Run';

$GLOBALS["lang"]['Discovery Run'] = 'Обсуждение Discovery Run';

$GLOBALS["lang"]['discovery_scan_options'] = 'Варианты Discovery Scan';

$GLOBALS["lang"]['Discovery Scan Options'] = 'Варианты Discovery Scan';

$GLOBALS["lang"]['disk'] = 'Диск';

$GLOBALS["lang"]['Disk'] = 'Диск';

$GLOBALS["lang"]['display_version'] = 'Версия Display';

$GLOBALS["lang"]['Display Version'] = 'Версия Display';

$GLOBALS["lang"]['Display in Menu'] = 'Отображение в меню';

$GLOBALS["lang"]['district'] = 'район';

$GLOBALS["lang"]['District'] = 'район';

$GLOBALS["lang"]['Djibouti'] = 'Джибути';

$GLOBALS["lang"]['dns'] = 'Днс';

$GLOBALS["lang"]['Dns'] = 'Днс';

$GLOBALS["lang"]['dns_domain'] = 'Домен DNS';

$GLOBALS["lang"]['Dns Domain'] = 'Домен DNS';

$GLOBALS["lang"]['dns_domain_reg_enabled'] = 'DNS Domain Reg включен';

$GLOBALS["lang"]['Dns Domain Reg Enabled'] = 'DNS Domain Reg включен';

$GLOBALS["lang"]['dns_fqdn'] = 'DNS FQDN';

$GLOBALS["lang"]['Dns Fqdn'] = 'DNS FQDN';

$GLOBALS["lang"]['dns_host_name'] = 'Имя хостинга DNS';

$GLOBALS["lang"]['Dns Host Name'] = 'Имя хостинга DNS';

$GLOBALS["lang"]['dns_hostname'] = 'Имя хозяина';

$GLOBALS["lang"]['Dns Hostname'] = 'Имя хозяина';

$GLOBALS["lang"]['dns_server'] = 'Сервер DNS';

$GLOBALS["lang"]['Dns Server'] = 'Сервер DNS';

$GLOBALS["lang"]['Do not scan these TCP ports.'] = 'Не сканируйте порты TCP.';

$GLOBALS["lang"]['Do not scan these UDP ports.'] = 'Не сканируйте порты UDP.';

$GLOBALS["lang"]['Do not show me again'] = 'Не показывай мне снова';

$GLOBALS["lang"]['Do you want to use secure transport (LDAPS) or regular unencrypted LDAP.'] = 'Вы хотите использовать безопасный транспорт (LDAPS) или обычный незашифрованный LDAP.';

$GLOBALS["lang"]['Do you wish to see the standard sidebar on the left.'] = 'Хотите увидеть стандартную боковую панель слева?';

$GLOBALS["lang"]['documentation'] = 'Документация';

$GLOBALS["lang"]['Documentation'] = 'Документация';

$GLOBALS["lang"]['Does the license apply to child Orgs.'] = 'Лицензия распространяется на детские организации.';

$GLOBALS["lang"]['domain'] = 'домен';

$GLOBALS["lang"]['Domain'] = 'домен';

$GLOBALS["lang"]['domain_controller_address'] = 'Адрес контроллера домена';

$GLOBALS["lang"]['Domain Controller Address'] = 'Адрес контроллера домена';

$GLOBALS["lang"]['domain_controller_name'] = 'Контроллер домена Имя';

$GLOBALS["lang"]['Domain Controller Name'] = 'Контроллер домена Имя';

$GLOBALS["lang"]['domain_role'] = 'Доменная роль';

$GLOBALS["lang"]['Domain Role'] = 'Доменная роль';

$GLOBALS["lang"]['domain_short'] = 'Область короткая';

$GLOBALS["lang"]['Domain Short'] = 'Область короткая';

$GLOBALS["lang"]['Dominica'] = 'Доминика';

$GLOBALS["lang"]['Dominican Republic'] = 'Доминиканская Республика';

$GLOBALS["lang"]['Dont hold my hand, I know what I am doing. No filter and the ability to join custom tables.'] = 'Не держи меня за руку, я знаю, что делаю. Отсутствие фильтра и возможность подключения пользовательских таблиц.';

$GLOBALS["lang"]['Download'] = 'скачать';

$GLOBALS["lang"]['Download a file from URL'] = 'Скачать файл из URL';

$GLOBALS["lang"]['driver'] = 'водитель';

$GLOBALS["lang"]['Driver'] = 'водитель';

$GLOBALS["lang"]['duplex'] = 'дуплекс';

$GLOBALS["lang"]['Duplex'] = 'дуплекс';

$GLOBALS["lang"]['duration'] = 'Продолжительность';

$GLOBALS["lang"]['Duration'] = 'Продолжительность';

$GLOBALS["lang"]['ESXi'] = 'ESXi';

$GLOBALS["lang"]['EULA'] = 'EULA';

$GLOBALS["lang"]['Ecuador'] = 'Эквадор';

$GLOBALS["lang"]['Edit'] = 'Редактировать';

$GLOBALS["lang"]['edit_log'] = 'Редактировать журнал';

$GLOBALS["lang"]['Edit Log'] = 'Редактировать журнал';

$GLOBALS["lang"]['editable'] = 'изменяемый';

$GLOBALS["lang"]['Editable'] = 'изменяемый';

$GLOBALS["lang"]['edited_by'] = 'Под редакцией';

$GLOBALS["lang"]['Edited By'] = 'Под редакцией';

$GLOBALS["lang"]['edited_date'] = 'Отредактированная дата';

$GLOBALS["lang"]['Edited Date'] = 'Отредактированная дата';

$GLOBALS["lang"]['edition'] = 'Издательство';

$GLOBALS["lang"]['Edition'] = 'Издательство';

$GLOBALS["lang"]['Egypt'] = 'Египет';

$GLOBALS["lang"]['Either Amazon, Google or Microsoft.'] = 'Amazon, Google или Microsoft.';

$GLOBALS["lang"]['Either none or present.

<strong>None</strong> - The successful attack does not depend on the deployment and execution conditions of the vulnerable system. The attacker can expect to be able to reach the vulnerability and execute the exploit under all or most instances of the vulnerability.

<strong>Present</strong> - The successful attack depends on the presence of specific deployment and execution conditions of the vulnerable system that enable the attack. These include:

A race condition must be won to successfully exploit the vulnerability. The successfulness of the attack is conditioned on execution conditions that are not under full control of the attacker. The attack may need to be launched multiple times against a single target before being successful.

Network injection. The attacker must inject themselves into the logical network path between the target and the resource requested by the victim (e.g. vulnerabilities requiring an on-path attacker).'] = 'Либо нет, либо присутствует.

<strong>Никто</strong> Успешная атака не зависит от условий развертывания и выполнения уязвимой системы. Злоумышленник может рассчитывать на то, что сможет достичь уязвимости и выполнить эксплойт во всех или большинстве случаев уязвимости.

<strong>Презентация</strong> Успешная атака зависит от наличия конкретных условий развертывания и выполнения уязвимой системы, которые позволяют осуществить атаку. К ним относятся:

Для успешного использования уязвимости необходимо выиграть гонку. Успешность атаки обусловлена условиями исполнения, которые не находятся под полным контролем злоумышленника. Атака может быть запущена несколько раз против одной цели, прежде чем она будет успешной.

Сетевая инъекция. Злоумышленник должен ввести себя в логический сетевой путь между целью и ресурсом, запрошенным жертвой (например, уязвимости, требующие злоумышленника на пути).';

$GLOBALS["lang"]['El Salvador'] = 'Сальвадор';

$GLOBALS["lang"]['email'] = 'Электронная почта';

$GLOBALS["lang"]['Email'] = 'Электронная почта';

$GLOBALS["lang"]['email_address'] = 'Адрес электронной почты';

$GLOBALS["lang"]['Email Address'] = 'Адрес электронной почты';

$GLOBALS["lang"]['Email Configuration'] = 'Конфигурация электронной почты';

$GLOBALS["lang"]['Email to send test to'] = 'Email для отправки теста';

$GLOBALS["lang"]['Enable'] = 'допускать';

$GLOBALS["lang"]['enabled'] = 'включенный';

$GLOBALS["lang"]['Enabled'] = 'включенный';

$GLOBALS["lang"]['encryption'] = 'шифрование';

$GLOBALS["lang"]['Encryption'] = 'шифрование';

$GLOBALS["lang"]['encryption_method'] = 'Метод шифрования';

$GLOBALS["lang"]['Encryption Method'] = 'Метод шифрования';

$GLOBALS["lang"]['encryption_status'] = 'Статус шифрования';

$GLOBALS["lang"]['Encryption Status'] = 'Статус шифрования';

$GLOBALS["lang"]['end_date'] = 'Дата окончания';

$GLOBALS["lang"]['End Date'] = 'Дата окончания';

$GLOBALS["lang"]['End OF Life Product ID'] = 'Идентификатор продукта End of Life';

$GLOBALS["lang"]['end_of_life'] = 'Конец жизни';

$GLOBALS["lang"]['End Of Life'] = 'Конец жизни';

$GLOBALS["lang"]['end_of_production'] = 'Конец производства';

$GLOBALS["lang"]['End Of Production'] = 'Конец производства';

$GLOBALS["lang"]['end_of_service'] = 'Конец службы';

$GLOBALS["lang"]['End Of Service'] = 'Конец службы';

$GLOBALS["lang"]['end_of_service_life'] = 'Конец служебной жизни';

$GLOBALS["lang"]['End Of Service Life'] = 'Конец служебной жизни';

$GLOBALS["lang"]['English'] = 'английский';

$GLOBALS["lang"]['enterprise'] = 'предприятие';

$GLOBALS["lang"]['Enterprise'] = 'предприятие';

$GLOBALS["lang"]['Enterprise Private Network'] = 'Частная предпринимательская сеть';

$GLOBALS["lang"]['Entitlement Type'] = 'Тип права';

$GLOBALS["lang"]['environment'] = 'окружающая среда';

$GLOBALS["lang"]['Environment'] = 'окружающая среда';

$GLOBALS["lang"]['Equal To'] = 'равным';

$GLOBALS["lang"]['Equal To or Greater Than'] = 'равным или большим, чем';

$GLOBALS["lang"]['Equal To or Less Than'] = 'Равно или меньше, чем';

$GLOBALS["lang"]['Equals'] = 'равные';

$GLOBALS["lang"]['Equatorial Guinea'] = 'Экваториальная Гвинея';

$GLOBALS["lang"]['Eritrea'] = 'Эритрея';

$GLOBALS["lang"]['Error'] = 'ошибка';

$GLOBALS["lang"]['Error Code'] = 'Код ошибки';

$GLOBALS["lang"]['Established'] = 'Установленный';

$GLOBALS["lang"]['Estonia'] = 'Эстония';

$GLOBALS["lang"]['Ethernet MAC'] = 'Ethernet MAC';

$GLOBALS["lang"]['ethernet_mac'] = 'Ethernet Mac';

$GLOBALS["lang"]['Ethernet Mac'] = 'Ethernet Mac';

$GLOBALS["lang"]['Ethiopia'] = 'Эфиопия';

$GLOBALS["lang"]['Every'] = 'Каждый';

$GLOBALS["lang"]['Every Day'] = 'Каждый день';

$GLOBALS["lang"]['Exceptions'] = 'Исключения';

$GLOBALS["lang"]['exclude'] = 'Исключить';

$GLOBALS["lang"]['Exclude'] = 'Исключить';

$GLOBALS["lang"]['exclude_ip'] = 'Исключить IP';

$GLOBALS["lang"]['Exclude IP'] = 'Исключить IP';

$GLOBALS["lang"]['Exclude IP Addresses'] = 'Исключить IP-адреса';

$GLOBALS["lang"]['Exclude TCP Ports'] = 'Исключая порты TCP';

$GLOBALS["lang"]['exclude_tcp_ports'] = 'Исключая порты Tcp';

$GLOBALS["lang"]['Exclude Tcp Ports'] = 'Исключая порты Tcp';

$GLOBALS["lang"]['Exclude UDP Ports'] = 'Исключить порты UDP';

$GLOBALS["lang"]['exclude_udp_ports'] = 'Исключить порты Udp';

$GLOBALS["lang"]['Exclude Udp Ports'] = 'Исключить порты Udp';

$GLOBALS["lang"]['Exclude these IP addresses from being Nmap scanned.'] = 'Исключите эти IP-адреса из сканирования Nmap.';

$GLOBALS["lang"]['Excluded'] = 'Исключенный';

$GLOBALS["lang"]['exclusion_reasons'] = 'Причины исключения';

$GLOBALS["lang"]['Exclusion Reasons'] = 'Причины исключения';

$GLOBALS["lang"]['executable'] = 'исполняемый';

$GLOBALS["lang"]['Executable'] = 'исполняемый';

$GLOBALS["lang"]['executable_id'] = 'Исполняемый ID';

$GLOBALS["lang"]['Executable ID'] = 'Исполняемый ID';

$GLOBALS["lang"]['executables'] = 'Исполняемые';

$GLOBALS["lang"]['Executables'] = 'Исполняемые';

$GLOBALS["lang"]['Execute'] = 'казнить';

$GLOBALS["lang"]['Executing'] = 'исполнитель';

$GLOBALS["lang"]['exemption_reason'] = 'Причина освобождения';

$GLOBALS["lang"]['Exemption Reason'] = 'Причина освобождения';

$GLOBALS["lang"]['Existing Building'] = 'Существующее здание';

$GLOBALS["lang"]['Existing Floor'] = 'Существующий пол';

$GLOBALS["lang"]['Existing Room'] = 'Существующая комната';

$GLOBALS["lang"]['Existing Row'] = 'Существующий ряд';

$GLOBALS["lang"]['expire_date'] = 'Дата истечения';

$GLOBALS["lang"]['Expire Date'] = 'Дата истечения';

$GLOBALS["lang"]['expire_minutes'] = 'Минуты истечения';

$GLOBALS["lang"]['Expire Minutes'] = 'Минуты истечения';

$GLOBALS["lang"]['expires'] = 'истекает';

$GLOBALS["lang"]['Expires'] = 'истекает';

$GLOBALS["lang"]['expiry_date'] = 'Дата истечения';

$GLOBALS["lang"]['Expiry Date'] = 'Дата истечения';

$GLOBALS["lang"]['exploit_maturity'] = 'Эксплуатировать зрелость';

$GLOBALS["lang"]['Exploit Maturity'] = 'Эксплуатировать зрелость';

$GLOBALS["lang"]['Export'] = 'экспорт';

$GLOBALS["lang"]['Export by Device'] = 'Экспорт по устройству';

$GLOBALS["lang"]['Export by Policy'] = 'Экспорт в политике';

$GLOBALS["lang"]['Export data to'] = 'Экспорт данных в';

$GLOBALS["lang"]['expose'] = 'экспозиция';

$GLOBALS["lang"]['Expose'] = 'экспозиция';

$GLOBALS["lang"]['External'] = 'внешний';

$GLOBALS["lang"]['External Field Name'] = 'Внешнее поле Имя';

$GLOBALS["lang"]['External Field Type'] = 'Тип внешнего поля';

$GLOBALS["lang"]['external_ident'] = 'Внешний идентификатор';

$GLOBALS["lang"]['External Ident'] = 'Внешний идентификатор';

$GLOBALS["lang"]['external_link'] = 'Внешняя связь';

$GLOBALS["lang"]['External Link'] = 'Внешняя связь';

$GLOBALS["lang"]['extra_columns'] = 'Дополнительные колонны';

$GLOBALS["lang"]['Extra Columns'] = 'Дополнительные колонны';

$GLOBALS["lang"]['Extra and more verbose logging is generated for troubleshooting.'] = 'Для устранения неполадок генерируется дополнительная и более многословная рубка.';

$GLOBALS["lang"]['FAQ'] = 'FAQ';

$GLOBALS["lang"]['FQDN'] = 'FQDN';

$GLOBALS["lang"]['FW Revision'] = 'Пересмотр FW';

$GLOBALS["lang"]['Fail'] = 'провал';

$GLOBALS["lang"]['Failed'] = 'неудачник';

$GLOBALS["lang"]['Failed Severity'] = 'Неудавшаяся жестокость';

$GLOBALS["lang"]['Falkland Islands (Malvinas)'] = 'Фолклендские острова (Мальвины)';

$GLOBALS["lang"]['Family'] = 'семья';

$GLOBALS["lang"]['Faroe Islands'] = 'Фарерские острова';

$GLOBALS["lang"]['Features'] = 'Особенности';

$GLOBALS["lang"]['February'] = 'февраль';

$GLOBALS["lang"]['field'] = 'поле';

$GLOBALS["lang"]['Field'] = 'поле';

$GLOBALS["lang"]['field_id'] = 'Полевой идентификатор';

$GLOBALS["lang"]['Field ID'] = 'Полевой идентификатор';

$GLOBALS["lang"]['Field Name'] = 'Поле имя';

$GLOBALS["lang"]['Field Type'] = 'Тип поля';

$GLOBALS["lang"]['Fields'] = 'Поля';

$GLOBALS["lang"]['fields'] = 'Поля';

$GLOBALS["lang"]['Fiji the Fiji Islands'] = 'Фиджи Острова Фиджи';

$GLOBALS["lang"]['File'] = 'Файл';

$GLOBALS["lang"]['File Import'] = 'Импорт файлов';

$GLOBALS["lang"]['File Input'] = 'Ввод файлов';

$GLOBALS["lang"]['file_name'] = 'Имя файла';

$GLOBALS["lang"]['File Name'] = 'Имя файла';

$GLOBALS["lang"]['file_size'] = 'Размер файла';

$GLOBALS["lang"]['File Size'] = 'Размер файла';

$GLOBALS["lang"]['filename'] = 'Файловое имя';

$GLOBALS["lang"]['Filename'] = 'Файловое имя';

$GLOBALS["lang"]['files'] = 'Файлы';

$GLOBALS["lang"]['Files'] = 'Файлы';

$GLOBALS["lang"]['files_id'] = 'Файлы ID';

$GLOBALS["lang"]['Files ID'] = 'Файлы ID';

$GLOBALS["lang"]['filter'] = 'фильтр';

$GLOBALS["lang"]['Filter'] = 'фильтр';

$GLOBALS["lang"]['filtered'] = 'фильтрованный';

$GLOBALS["lang"]['Filtered'] = 'фильтрованный';

$GLOBALS["lang"]['Finland'] = 'Финляндия';

$GLOBALS["lang"]['Firewall'] = 'брандмауэр';

$GLOBALS["lang"]['firewall_rule'] = 'Правило Firewall';

$GLOBALS["lang"]['Firewall Rule'] = 'Правило Firewall';

$GLOBALS["lang"]['firmware'] = 'Прошивка';

$GLOBALS["lang"]['Firmware'] = 'Прошивка';

$GLOBALS["lang"]['firmware_revision'] = 'Пересмотр прошивки';

$GLOBALS["lang"]['Firmware Revision'] = 'Пересмотр прошивки';

$GLOBALS["lang"]['First Name'] = 'Первое имя';

$GLOBALS["lang"]['first_run'] = 'Первый бег';

$GLOBALS["lang"]['First Run'] = 'Первый бег';

$GLOBALS["lang"]['first_seen'] = 'Первый замеченный';

$GLOBALS["lang"]['First Seen'] = 'Первый замеченный';

$GLOBALS["lang"]['FirstWave'] = 'Первая волна';

$GLOBALS["lang"]['Fix'] = 'исправлять';

$GLOBALS["lang"]['Fixed'] = 'фиксированный';

$GLOBALS["lang"]['Floor'] = 'пол';

$GLOBALS["lang"]['Follow any of the links below and discover how to use Open-AudIT to find out <b>Whats On Your Network?</b>'] = 'Перейдите по любой из приведенных ниже ссылок и узнайте, как использовать Open-AudIT, чтобы узнать <b>Что в вашей сети?</b>';

$GLOBALS["lang"]['For a seed discovery, should I only discover IPs in the private IP address space.'] = 'Для обнаружения семян я должен обнаруживать только IP-адреса в частном пространстве IP-адресов.';

$GLOBALS["lang"]['For a seed discovery, should I only discover IPs on the chosen subnet.'] = 'Для обнаружения семян я должен открывать только IP-адреса в выбранной подсети.';

$GLOBALS["lang"]['For a seed discovery, should I ping the subnet before running the discovery.'] = 'Для обнаружения семян, я должен пинг подсети, прежде чем запустить открытие.';

$GLOBALS["lang"]['For advanced entry of a raw SQL query. As per Queries, you must include <code>WHERE @filter AND<code> in your SQL.'] = 'Для расширенного ввода сырого SQL-запроса. Согласно запросам, вы должны включать <code>WHERE @filter AND<code> in your SQL.</code></code>';

$GLOBALS["lang"]['For licenses that are not perpetual, when does the license expire.'] = 'Для лицензий, которые не являются бессрочными, когда срок действия лицензии истекает.';

$GLOBALS["lang"]['form_factor'] = 'Фактор формы';

$GLOBALS["lang"]['Form Factor'] = 'Фактор формы';

$GLOBALS["lang"]['format'] = 'Формат';

$GLOBALS["lang"]['Format'] = 'Формат';

$GLOBALS["lang"]['fqdn'] = 'qdn';

$GLOBALS["lang"]['Fqdn'] = 'qdn';

$GLOBALS["lang"]['France, French Republic'] = 'Франция, Французская Республика';

$GLOBALS["lang"]['free'] = 'бесплатно';

$GLOBALS["lang"]['Free'] = 'бесплатно';

$GLOBALS["lang"]['French'] = 'французский';

$GLOBALS["lang"]['French Guiana'] = 'Французская Гвиана';

$GLOBALS["lang"]['French Polynesia'] = 'Французская Полинезия';

$GLOBALS["lang"]['French Southern Territories'] = 'Французские южные территории';

$GLOBALS["lang"]['Frequently Asked Questions'] = 'Часто задаваемые вопросы';

$GLOBALS["lang"]['Friday'] = 'Пятница';

$GLOBALS["lang"]['From 100 Devices'] = 'Из 100 устройств';

$GLOBALS["lang"]['From 500 Devices'] = 'Из 500 устройств';

$GLOBALS["lang"]['full_name'] = 'Полное имя';

$GLOBALS["lang"]['Full Name'] = 'Полное имя';

$GLOBALS["lang"]['function'] = 'Функция';

$GLOBALS["lang"]['Function'] = 'Функция';

$GLOBALS["lang"]['GROUP BY'] = 'Взрослый';

$GLOBALS["lang"]['Gabon'] = 'Габон';

$GLOBALS["lang"]['Gambia the'] = 'Гамбия';

$GLOBALS["lang"]['gateway'] = 'Шлюз';

$GLOBALS["lang"]['Gateway'] = 'Шлюз';

$GLOBALS["lang"]['gateways'] = 'Шлюзы';

$GLOBALS["lang"]['Gateways'] = 'Шлюзы';

$GLOBALS["lang"]['Generated By'] = 'сгенерированный';

$GLOBALS["lang"]['geo'] = 'География';

$GLOBALS["lang"]['Geo'] = 'География';

$GLOBALS["lang"]['Georgia'] = 'Грузия';

$GLOBALS["lang"]['German'] = 'немецкий';

$GLOBALS["lang"]['Germany'] = 'Германия';

$GLOBALS["lang"]['Get Lat/Long'] = 'Длинный / Long';

$GLOBALS["lang"]['Get Started'] = 'Начинай.';

$GLOBALS["lang"]['Get a Free License'] = 'Получить бесплатную лицензию';

$GLOBALS["lang"]['Getting Started'] = 'Начало работы';

$GLOBALS["lang"]['Ghana'] = 'Гана';

$GLOBALS["lang"]['Gibraltar'] = 'Гибралтар';

$GLOBALS["lang"]['Global Discovery Options'] = 'Глобальные опции Discovery';

$GLOBALS["lang"]['Go'] = 'Иди.';

$GLOBALS["lang"]['Google Compute Fields'] = 'Google вычисляет поля';

$GLOBALS["lang"]['Google Maps API Key'] = 'Google Maps API Ключ';

$GLOBALS["lang"]['Greater Than'] = 'Больше, чем';

$GLOBALS["lang"]['Greater Than or Equals'] = 'Больше или равно';

$GLOBALS["lang"]['Greece'] = 'Греция';

$GLOBALS["lang"]['Green Query'] = 'Зеленый запрос';

$GLOBALS["lang"]['Greenland'] = 'Гренландия';

$GLOBALS["lang"]['Grenada'] = 'Гренада';

$GLOBALS["lang"]['Group'] = 'Группа';

$GLOBALS["lang"]['group_by'] = 'Группа через';

$GLOBALS["lang"]['Group By'] = 'Группа через';

$GLOBALS["lang"]['group_id'] = 'Группа ID';

$GLOBALS["lang"]['Group ID'] = 'Группа ID';

$GLOBALS["lang"]['groups'] = 'Группы';

$GLOBALS["lang"]['Groups'] = 'Группы';

$GLOBALS["lang"]['Guadeloupe'] = 'Гваделупа';

$GLOBALS["lang"]['Guam'] = 'Гуам';

$GLOBALS["lang"]['Guatemala'] = 'Гватемала';

$GLOBALS["lang"]['Guernsey'] = 'Гернси';

$GLOBALS["lang"]['guest_device_id'] = 'Идентификатор гостевого устройства';

$GLOBALS["lang"]['Guest Device ID'] = 'Идентификатор гостевого устройства';

$GLOBALS["lang"]['guid'] = 'Гид';

$GLOBALS["lang"]['Guid'] = 'Гид';

$GLOBALS["lang"]['Guinea'] = 'Гвинея';

$GLOBALS["lang"]['Guinea-Bissau'] = 'Гвинея-Бисау';

$GLOBALS["lang"]['Guyana'] = 'Гайана';

$GLOBALS["lang"]['HP-UX'] = 'HP-UX';

$GLOBALS["lang"]['HW Revision'] = 'HW Пересмотр';

$GLOBALS["lang"]['Haiti'] = 'Гаити';

$GLOBALS["lang"]['hard_drive_index'] = 'Индекс жесткого диска';

$GLOBALS["lang"]['Hard Drive Index'] = 'Индекс жесткого диска';

$GLOBALS["lang"]['hardware_revision'] = 'Пересмотр оборудования';

$GLOBALS["lang"]['Hardware Revision'] = 'Пересмотр оборудования';

$GLOBALS["lang"]['Has this policy been applied in this organization.'] = 'Применяется ли такая политика в данной организации?';

$GLOBALS["lang"]['hash'] = 'хэш';

$GLOBALS["lang"]['Hash'] = 'хэш';

$GLOBALS["lang"]['Head'] = 'Голова';

$GLOBALS["lang"]['Heard Island and McDonald Islands'] = 'Острова Херд и острова Макдональд';

$GLOBALS["lang"]['height'] = 'высота';

$GLOBALS["lang"]['Height'] = 'высота';

$GLOBALS["lang"]['Height in RU'] = 'Высота в RU';

$GLOBALS["lang"]['Help'] = 'Помощь';

$GLOBALS["lang"]['Help and Frequently Asked Questions'] = 'Помощь и часто задаваемые вопросы';

$GLOBALS["lang"]['high'] = 'высокий';

$GLOBALS["lang"]['High'] = 'высокий';

$GLOBALS["lang"]['High Availability'] = 'Высокая доступность';

$GLOBALS["lang"]['Holy See (Vatican City State)'] = 'Святой Престол (Vatican City State)';

$GLOBALS["lang"]['Home'] = 'Домой';

$GLOBALS["lang"]['home'] = 'Домой';

$GLOBALS["lang"]['Home Area Network'] = 'Сеть Home Area Network';

$GLOBALS["lang"]['Honduras'] = 'Гондурас';

$GLOBALS["lang"]['Hong Kong'] = 'Гонконг';

$GLOBALS["lang"]['host'] = 'ведущий';

$GLOBALS["lang"]['Host'] = 'ведущий';

$GLOBALS["lang"]['hostname'] = 'Имя хозяина';

$GLOBALS["lang"]['Hostname'] = 'Имя хозяина';

$GLOBALS["lang"]['hour'] = 'Час';

$GLOBALS["lang"]['Hour'] = 'Час';

$GLOBALS["lang"]['How and Why is Open-AudIT More Secure'] = 'Как и почему Open-AudIT более безопасен';

$GLOBALS["lang"]['How long did the command take to execute.'] = 'Сколько времени потребовалось команде на выполнение?';

$GLOBALS["lang"]['How long should Nmap wait for a response, per device.'] = 'Как долго Nmap должен ждать ответа на устройство?';

$GLOBALS["lang"]['How many circuit feed to this rack.'] = 'Сколько цепей подают на эту стойку.';

$GLOBALS["lang"]['How many policies results in a fail.'] = 'Сколько стратегий приводит к провалу?';

$GLOBALS["lang"]['How many policies results in a pass.'] = 'Сколько полисов приводит к пропуску.';

$GLOBALS["lang"]['How many power sockets in this rack.'] = 'Сколько розеток в этой стойке.';

$GLOBALS["lang"]['How many rack units in height is this rack.'] = 'Сколько стоек в высоту - эта стойка.';

$GLOBALS["lang"]['How often should the collector ask the server for a task.'] = 'Как часто коллектор должен запрашивать у сервера задание.';

$GLOBALS["lang"]['How should we select devices to be integrated (using an Attribute, Query or a Group).'] = 'Как выбрать устройства для интеграции (с помощью атрибута, запроса или группы)';

$GLOBALS["lang"]['How the vulnerability is exploited (e.g., Network, Adjacent, Local, Physical).'] = 'Как используется уязвимость (например, Network, Adjacent, Local, Physical).';

$GLOBALS["lang"]['How to compare'] = 'Как сравнивать';

$GLOBALS["lang"]['Human-readable explanation of the vulnerability.'] = 'Человеческое объяснение уязвимости.';

$GLOBALS["lang"]['Hungary'] = 'Венгрия';

$GLOBALS["lang"]['hw_cpe'] = 'Hw Cpe';

$GLOBALS["lang"]['Hw Cpe'] = 'Hw Cpe';

$GLOBALS["lang"]['hyperthreading'] = 'Гиперпотоки';

$GLOBALS["lang"]['Hyperthreading'] = 'Гиперпотоки';

$GLOBALS["lang"]['I have read the EULA.'] = 'Я прочла EULA.';

$GLOBALS["lang"]['id'] = 'ID';

$GLOBALS["lang"]['ID'] = 'ID';

$GLOBALS["lang"]['IF'] = 'если';

$GLOBALS["lang"]['IOS Version'] = 'Версия для iOS';

$GLOBALS["lang"]['IP'] = 'IP';

$GLOBALS["lang"]['ip'] = 'IP';

$GLOBALS["lang"]['IP Address'] = 'IP адрес';

$GLOBALS["lang"]['IP Addresses'] = 'IP-адреса';

$GLOBALS["lang"]['IP Last Seen'] = 'IP последний раз видели';

$GLOBALS["lang"]['IP Set By'] = 'IP установленный';

$GLOBALS["lang"]['ISO 27001 only.'] = 'Стандарт ISO 27001.';

$GLOBALS["lang"]['Iceland'] = 'Исландия';

$GLOBALS["lang"]['icon'] = 'икона';

$GLOBALS["lang"]['Icon'] = 'икона';

$GLOBALS["lang"]['Icon and Text'] = 'Икона и текст';

$GLOBALS["lang"]['Icon only, text only or icon and text.'] = 'Только иконка, только текст или иконка и текст.';

$GLOBALS["lang"]['id_internal'] = 'внутренний';

$GLOBALS["lang"]['Id Internal'] = 'внутренний';

$GLOBALS["lang"]['id_number'] = 'Id номер';

$GLOBALS["lang"]['Id Number'] = 'Id номер';

$GLOBALS["lang"]['identification'] = 'Идентификация';

$GLOBALS["lang"]['Identification'] = 'Идентификация';

$GLOBALS["lang"]['If'] = 'Если';

$GLOBALS["lang"]['If a port responds with filtered, should we consider it available.'] = 'Если порт реагирует с фильтрованным, мы должны считать его доступным.';

$GLOBALS["lang"]['If a port responds with open|filtered, should we consider it available.'] = 'Если порт отвечает с открытой фильтрацией, следует ли считать его доступным.';

$GLOBALS["lang"]['If a remote device does not exist in the Open-AudIT selected devices, should we delete it from the external system.'] = 'Если удаленное устройство не существует в выбранных устройствах Open-AudIT, мы должны удалить его из внешней системы.';

$GLOBALS["lang"]['If an Open-AudIT device has been changed, should we update the external system.'] = 'Если устройство Open-AudIT было изменено, следует обновить внешнюю систему.';

$GLOBALS["lang"]['If an Open-AudIT device is not on the external system, should we create it.'] = 'Если устройство Open-AudIT не находится во внешней системе, мы должны его создать.';

$GLOBALS["lang"]['If an agent reports its primary IP is in this subnet, perform the actions.'] = 'Если агент сообщает, что его основной IP находится в этой подсети, выполните действия.';

$GLOBALS["lang"]['If any of these (comma seperated, no spaces) ports are detected, assume SSH is running on them and use them for auditing. No need to add this port to the Custom TCP ports - it will be added automatically.'] = 'Если какой-либо из этих портов обнаружен, предположим, что SSH работает на них и использует их для аудита. Нет необходимости добавлять этот порт в пользовательские порты TCP - он будет добавлен автоматически.';

$GLOBALS["lang"]['If set, holds a JSON array of specific device columns this user has chosen to see, other than the configuration default.'] = 'Если установлен, удерживает JSON-массив конкретных столбцов устройств, которые пользователь выбрал для просмотра, кроме конфигурации по умолчанию.';

$GLOBALS["lang"]['If the agent OS family (case insensitive) contains this string, perform the actions.'] = 'Если семейство агентов ОС (случай нечувствительный) содержит эту строку, выполните действия.';

$GLOBALS["lang"]['If the following conditions are met:<br><ul><li>a Role has an assigned ad_group</li><li>an Org has an assigned ad_group</li><li>an LDAP Server has use_roles set to y</li><li>a user exists in LDAP (be it Active Directory or OpenLDAP) and is in the assigned ad_groups</li></ul>That user can log on to Open-AudIT without an account in Open-AudIT needing to be created. Open-AudIT will query the LDAP in question and if the user is in the required groups but not in Open-AudIT, their user attributes (name, full name, email,  roles, orgs, etc) within Open-AudIT will be automatically populated and they will be logged on.<br> <br>'] = 'Если выполняются следующие условия:<br/><ul><li>a Роль имеет назначенную группу ad_group</li><li>Организация имеет назначенную группу ad_group</li><li>LDAP Сервер использует_roles set to y</li><li>Пользователь существует в LDAP (будь то Active Directory или OpenLDAP) и находится в назначенных ad_groups.</li></ul>Этот пользователь может войти в Open-AudIT без учетной записи в Open-AudIT, которая должна быть создана. Open-AudIT будет запрашивать LDAP, о котором идет речь, и если пользователь находится в требуемых группах, но не в Open-AudIT, его пользовательские атрибуты (имя, полное имя, электронная почта, роли, организации и т.д.) в Open-AudIT будут автоматически заполнены и они будут зарегистрированы.<br/> <br/>';

$GLOBALS["lang"]['If the user logging on to Open-AudIT does not have the access to search LDAP, you can use another account which does have this access.'] = 'Если пользователь, входящий в систему Open-AudIT, не имеет доступа к поисковой системе LDAP, вы можете использовать другую учетную запись, которая имеет этот доступ.';

$GLOBALS["lang"]['If this many or more minutes have passed since the device contacted the server, perform the actions.'] = 'Если прошло много или более минут с момента обращения устройства к серверу, выполните действия.';

$GLOBALS["lang"]['If you choose a Collector, it will be scheduled to execute on the next 5 minute boundary.'] = 'Если вы выберете коллекционера, он будет выполняться на следующей 5-минутной границе.';

$GLOBALS["lang"]['ifadminstatus'] = 'Ифадминстат';

$GLOBALS["lang"]['Ifadminstatus'] = 'Ифадминстат';

$GLOBALS["lang"]['iflastchange'] = 'Если поменять';

$GLOBALS["lang"]['Iflastchange'] = 'Если поменять';

$GLOBALS["lang"]['Ignored'] = 'игнорируемый';

$GLOBALS["lang"]['image'] = 'Изображение';

$GLOBALS["lang"]['Image'] = 'Изображение';

$GLOBALS["lang"]['Images'] = 'Изображения';

$GLOBALS["lang"]['impact_availability'] = 'Доступность воздействия';

$GLOBALS["lang"]['Impact Availability'] = 'Доступность воздействия';

$GLOBALS["lang"]['impact_confidentiality'] = 'Влияние конфиденциальности';

$GLOBALS["lang"]['Impact Confidentiality'] = 'Влияние конфиденциальности';

$GLOBALS["lang"]['impact_integrity'] = 'Влияние на целостность';

$GLOBALS["lang"]['Impact Integrity'] = 'Влияние на целостность';

$GLOBALS["lang"]['implementation_notes'] = 'Записки об осуществлении';

$GLOBALS["lang"]['Implementation Notes'] = 'Записки об осуществлении';

$GLOBALS["lang"]['Import'] = 'импорт';

$GLOBALS["lang"]['Import Example Data'] = 'Импорт примерных данных';

$GLOBALS["lang"]['improvement_opportunities'] = 'Улучшение возможностей';

$GLOBALS["lang"]['Improvement Opportunities'] = 'Улучшение возможностей';

$GLOBALS["lang"]['In'] = 'в';

$GLOBALS["lang"]['Inactive'] = 'неактивный';

$GLOBALS["lang"]['Include'] = 'Включать';

$GLOBALS["lang"]['Incomplete'] = 'неполный';

$GLOBALS["lang"]['Index'] = 'Индекс';

$GLOBALS["lang"]['India'] = 'Индия';

$GLOBALS["lang"]['Indonesia'] = 'Индонезия';

$GLOBALS["lang"]['Info'] = 'информация';

$GLOBALS["lang"]['Informational'] = 'информационный';

$GLOBALS["lang"]['initial_size'] = 'Первоначальный размер';

$GLOBALS["lang"]['Initial Size'] = 'Первоначальный размер';

$GLOBALS["lang"]['inode'] = 'инод';

$GLOBALS["lang"]['Inode'] = 'инод';

$GLOBALS["lang"]['Input Type'] = 'Тип ввода';

$GLOBALS["lang"]['inputs'] = 'Вводы';

$GLOBALS["lang"]['Inputs'] = 'Вводы';

$GLOBALS["lang"]['Insane'] = 'безумный';

$GLOBALS["lang"]['Insert example data and discover all that Open-AudIT can tell you.'] = 'Вставьте примерные данные и узнайте все, что может вам сказать Open-AudIT.';

$GLOBALS["lang"]['Insert your Purchased license Key'] = 'Вставить свой Купленная лицензия Ключ';

$GLOBALS["lang"]['install'] = 'устанавливать';

$GLOBALS["lang"]['Install'] = 'устанавливать';

$GLOBALS["lang"]['install_date'] = 'Установить дату';

$GLOBALS["lang"]['Install Date'] = 'Установить дату';

$GLOBALS["lang"]['install_directory'] = 'Установить Directory';

$GLOBALS["lang"]['Install Directory'] = 'Установить Directory';

$GLOBALS["lang"]['Install OpenScap if required'] = 'Установите OpenScap при необходимости';

$GLOBALS["lang"]['install_source'] = 'Установить источник';

$GLOBALS["lang"]['Install Source'] = 'Установить источник';

$GLOBALS["lang"]['installed_by'] = 'Устанавливается путем';

$GLOBALS["lang"]['Installed By'] = 'Устанавливается путем';

$GLOBALS["lang"]['installed_on'] = 'установленный на';

$GLOBALS["lang"]['Installed On'] = 'установленный на';

$GLOBALS["lang"]['Installing on Linux'] = 'Установка на Linux';

$GLOBALS["lang"]['Installing on MacOS'] = 'Установка на MacOS';

$GLOBALS["lang"]['Installing on Windows'] = 'Установка в Windows';

$GLOBALS["lang"]['instance'] = 'побуждение';

$GLOBALS["lang"]['Instance'] = 'побуждение';

$GLOBALS["lang"]['instance_ident'] = 'Идентификация';

$GLOBALS["lang"]['Instance Ident'] = 'Идентификация';

$GLOBALS["lang"]['instance_options'] = 'Варианты инстанций';

$GLOBALS["lang"]['Instance Options'] = 'Варианты инстанций';

$GLOBALS["lang"]['instance_provider'] = 'поставщик';

$GLOBALS["lang"]['Instance Provider'] = 'поставщик';

$GLOBALS["lang"]['instance_reservation_ident'] = 'Бронирование по месту службы идентификация';

$GLOBALS["lang"]['Instance Reservation Ident'] = 'Бронирование по месту службы идентификация';

$GLOBALS["lang"]['instance_state'] = 'Государство происхождения';

$GLOBALS["lang"]['Instance State'] = 'Государство происхождения';

$GLOBALS["lang"]['instance_tags'] = 'Теги инстанций';

$GLOBALS["lang"]['Instance Tags'] = 'Теги инстанций';

$GLOBALS["lang"]['instance_type'] = 'Тип инстанции';

$GLOBALS["lang"]['Instance Type'] = 'Тип инстанции';

$GLOBALS["lang"]['Integer'] = 'целое число';

$GLOBALS["lang"]['Integration'] = 'интеграция';

$GLOBALS["lang"]['integrations'] = 'Интеграция';

$GLOBALS["lang"]['Integrations'] = 'Интеграция';

$GLOBALS["lang"]['integrations_id'] = 'Интеграция ID';

$GLOBALS["lang"]['Integrations ID'] = 'Интеграция ID';

$GLOBALS["lang"]['integrations_log'] = 'Интеграция Log';

$GLOBALS["lang"]['Integrations Log'] = 'Интеграция Log';

$GLOBALS["lang"]['interface'] = 'Интерфейс';

$GLOBALS["lang"]['Interface'] = 'Интерфейс';

$GLOBALS["lang"]['interface_id'] = 'Интерфейс ID';

$GLOBALS["lang"]['Interface ID'] = 'Интерфейс ID';

$GLOBALS["lang"]['interface_type'] = 'Тип интерфейса';

$GLOBALS["lang"]['Interface Type'] = 'Тип интерфейса';

$GLOBALS["lang"]['Internal'] = 'Внутренний';

$GLOBALS["lang"]['Internal Field Name'] = 'Название внутреннего поля';

$GLOBALS["lang"]['Internal ID'] = 'Внутренний идентификатор';

$GLOBALS["lang"]['Internal JSON array of valid access tokens for this user.'] = 'Внутренний массив токенов JSON для этого пользователя.';

$GLOBALS["lang"]['Introduction'] = 'Введение';

$GLOBALS["lang"]['invoice'] = 'счет';

$GLOBALS["lang"]['Invoice'] = 'счет';

$GLOBALS["lang"]['invoice_id'] = 'Идентификатор счета';

$GLOBALS["lang"]['Invoice ID'] = 'Идентификатор счета';

$GLOBALS["lang"]['invoice_item'] = 'Пункт счета-фактуры';

$GLOBALS["lang"]['Invoice Item'] = 'Пункт счета-фактуры';

$GLOBALS["lang"]['ios_version'] = 'Версия IOS';

$GLOBALS["lang"]['Ios Version'] = 'Версия IOS';

$GLOBALS["lang"]['ip_address_external_a'] = 'Адрес внешнего A';

$GLOBALS["lang"]['Ip Address External A'] = 'Адрес внешнего A';

$GLOBALS["lang"]['ip_address_external_b'] = 'IP-адрес Внешний B';

$GLOBALS["lang"]['Ip Address External B'] = 'IP-адрес Внешний B';

$GLOBALS["lang"]['ip_address_internal_a'] = 'Ip Адрес внутренний A';

$GLOBALS["lang"]['Ip Address Internal A'] = 'Ip Адрес внутренний A';

$GLOBALS["lang"]['ip_address_internal_b'] = 'Ip Адрес внутренний B';

$GLOBALS["lang"]['Ip Address Internal B'] = 'Ip Адрес внутренний B';

$GLOBALS["lang"]['ip_all_count'] = 'Ip All Count (альбом)';

$GLOBALS["lang"]['Ip All Count'] = 'Ip All Count (альбом)';

$GLOBALS["lang"]['ip_audited_count'] = 'Аудиторский счет';

$GLOBALS["lang"]['Ip Audited Count'] = 'Аудиторский счет';

$GLOBALS["lang"]['ip_discovered_count'] = 'Ип обнаружил графа';

$GLOBALS["lang"]['Ip Discovered Count'] = 'Ип обнаружил графа';

$GLOBALS["lang"]['ip_enabled'] = 'Ип включен';

$GLOBALS["lang"]['Ip Enabled'] = 'Ип включен';

$GLOBALS["lang"]['ip_responding_count'] = 'Ип отвечает графу';

$GLOBALS["lang"]['Ip Responding Count'] = 'Ип отвечает графу';

$GLOBALS["lang"]['ip_scanned_count'] = 'Ип сканировал графа';

$GLOBALS["lang"]['Ip Scanned Count'] = 'Ип сканировал графа';

$GLOBALS["lang"]['Iran'] = 'Иран';

$GLOBALS["lang"]['Iraq'] = 'Ирак';

$GLOBALS["lang"]['Ireland'] = 'Ирландия';

$GLOBALS["lang"]['Is FRU'] = 'Фру';

$GLOBALS["lang"]['is_fru'] = 'Фру.';

$GLOBALS["lang"]['Is Fru'] = 'Фру.';

$GLOBALS["lang"]['Is the NMIS server local (on this Open-AudIT server) or remote?'] = 'Является ли сервер NMIS локальным (на этом сервере Open-AudIT) или удаленным?';

$GLOBALS["lang"]['Is this account active? If set to <code>n</code>, the user cannot logon.'] = 'Является ли этот аккаунт активным? Если установить <code>n</code>Пользователь не может войти.';

$GLOBALS["lang"]['Is this query restricted to licensed customers.'] = 'Этот запрос ограничен лицензированными клиентами.';

$GLOBALS["lang"]['Is this task enabled (y/n).'] = 'Позволяет ли эта задача (y/n).';

$GLOBALS["lang"]['Isle of Man'] = 'Остров Мэн';

$GLOBALS["lang"]['Israel'] = 'Израиль';

$GLOBALS["lang"]['Issue'] = 'Вопрос';

$GLOBALS["lang"]['issuer'] = 'эмитент';

$GLOBALS["lang"]['Issuer'] = 'эмитент';

$GLOBALS["lang"]['issuer_name'] = 'Имя эмитента';

$GLOBALS["lang"]['Issuer Name'] = 'Имя эмитента';

$GLOBALS["lang"]['Issues'] = 'Вопросы';

$GLOBALS["lang"]['Italy'] = 'Италия';

$GLOBALS["lang"]['Items not in Baseline'] = 'Пункты не в базовой строке';

$GLOBALS["lang"]['JSON'] = 'Джон';

$GLOBALS["lang"]['JSON to Import'] = 'JSON будет импортировать';

$GLOBALS["lang"]['Jamaica'] = 'Ямайка';

$GLOBALS["lang"]['January'] = 'январь';

$GLOBALS["lang"]['Japan'] = 'Япония';

$GLOBALS["lang"]['Jersey'] = 'Джерси';

$GLOBALS["lang"]['Jordan'] = 'Иордания';

$GLOBALS["lang"]['July'] = 'июль';

$GLOBALS["lang"]['June'] = 'июнь';

$GLOBALS["lang"]['Kazakhstan'] = 'Казахстан';

$GLOBALS["lang"]['Kenya'] = 'Кения';

$GLOBALS["lang"]['kernel_version'] = 'Версия Kernel';

$GLOBALS["lang"]['Kernel Version'] = 'Версия Kernel';

$GLOBALS["lang"]['Key'] = 'Ключ';

$GLOBALS["lang"]['Key Password (optional)'] = 'Ключевой пароль (опционально)';

$GLOBALS["lang"]['keys'] = 'Ключи';

$GLOBALS["lang"]['Keys'] = 'Ключи';

$GLOBALS["lang"]['Kiribati'] = 'Кирибати';

$GLOBALS["lang"]['Korea'] = 'Корея';

$GLOBALS["lang"]['Kuwait'] = 'Кувейт';

$GLOBALS["lang"]['Kyrgyz Republic'] = 'Кыргызская Республика';

$GLOBALS["lang"]['lang'] = 'Лэнг';

$GLOBALS["lang"]['Lang'] = 'Лэнг';

$GLOBALS["lang"]['language'] = 'Язык языка';

$GLOBALS["lang"]['Language'] = 'Язык языка';

$GLOBALS["lang"]['Lao'] = 'Лао';

$GLOBALS["lang"]['last_changed'] = 'Последнее изменение';

$GLOBALS["lang"]['Last Changed'] = 'Последнее изменение';

$GLOBALS["lang"]['last_finished'] = 'Последний законченный';

$GLOBALS["lang"]['Last Finished'] = 'Последний законченный';

$GLOBALS["lang"]['last_logon'] = 'Последний Логон';

$GLOBALS["lang"]['Last Logon'] = 'Последний Логон';

$GLOBALS["lang"]['Last Name'] = 'Последнее имя';

$GLOBALS["lang"]['last_os_update'] = 'Последнее обновление Os';

$GLOBALS["lang"]['Last Os Update'] = 'Последнее обновление Os';

$GLOBALS["lang"]['last_result'] = 'Последний результат';

$GLOBALS["lang"]['Last Result'] = 'Последний результат';

$GLOBALS["lang"]['last_run'] = 'Последний раз';

$GLOBALS["lang"]['Last Run'] = 'Последний раз';

$GLOBALS["lang"]['last_seen'] = 'Последний раз видел';

$GLOBALS["lang"]['Last Seen'] = 'Последний раз видел';

$GLOBALS["lang"]['last_seen_by'] = 'Последний раз видел By';

$GLOBALS["lang"]['Last Seen By'] = 'Последний раз видел By';

$GLOBALS["lang"]['last_user'] = 'Последний пользователь';

$GLOBALS["lang"]['Last User'] = 'Последний пользователь';

$GLOBALS["lang"]['lastModified'] = 'Последний модифицированный';

$GLOBALS["lang"]['LastModified'] = 'Последний модифицированный';

$GLOBALS["lang"]['latitude'] = 'широта';

$GLOBALS["lang"]['Latitude'] = 'широта';

$GLOBALS["lang"]['Latvia'] = 'Латвия';

$GLOBALS["lang"]['Layout'] = 'планировка';

$GLOBALS["lang"]['ldap'] = 'Ловушка';

$GLOBALS["lang"]['Ldap'] = 'Ловушка';

$GLOBALS["lang"]['ldap_base_dn'] = 'База Ldap Dn';

$GLOBALS["lang"]['Ldap Base Dn'] = 'База Ldap Dn';

$GLOBALS["lang"]['ldap_dn_account'] = 'Счет Ldap Dn';

$GLOBALS["lang"]['Ldap Dn Account'] = 'Счет Ldap Dn';

$GLOBALS["lang"]['ldap_dn_password'] = 'Ldap Dn пароль';

$GLOBALS["lang"]['Ldap Dn Password'] = 'Ldap Dn пароль';

$GLOBALS["lang"]['Learn About'] = 'Узнать больше';

$GLOBALS["lang"]['Learn More'] = 'Узнать больше';

$GLOBALS["lang"]['lease_expiry_date'] = 'Дата истечения срока аренды';

$GLOBALS["lang"]['Lease Expiry Date'] = 'Дата истечения срока аренды';

$GLOBALS["lang"]['Lebanon'] = 'Ливан';

$GLOBALS["lang"]['legal_requirements'] = 'Правовые требования';

$GLOBALS["lang"]['Legal Requirements'] = 'Правовые требования';

$GLOBALS["lang"]['Lesotho'] = 'Лесото';

$GLOBALS["lang"]['Less Than'] = 'меньше чем';

$GLOBALS["lang"]['Less Than or Equals'] = 'Меньше, чем равные';

$GLOBALS["lang"]['level'] = 'Уровень';

$GLOBALS["lang"]['Level'] = 'Уровень';

$GLOBALS["lang"]['Level of privileges needed to exploit (None, Low, High).'] = 'Уровень привилегий, необходимых для эксплуатации (ни один, низкий, высокий).';

$GLOBALS["lang"]['Liberia'] = 'Либерия';

$GLOBALS["lang"]['Libyan Arab Jamahiriya'] = 'Ливийская Арабская Джамахирия';

$GLOBALS["lang"]['License'] = 'Лицензия';

$GLOBALS["lang"]['License Key'] = 'Лицензия Ключ';

$GLOBALS["lang"]['License Required'] = 'Лицензия требуется';

$GLOBALS["lang"]['licenses'] = 'Лицензии';

$GLOBALS["lang"]['Licenses'] = 'Лицензии';

$GLOBALS["lang"]['Liechtenstein'] = 'Лихтенштейн';

$GLOBALS["lang"]['Like'] = 'Как будто';

$GLOBALS["lang"]['limit'] = 'предел';

$GLOBALS["lang"]['Limit'] = 'предел';

$GLOBALS["lang"]['Limit the query to the first X items.'] = 'Ограничьте запрос до первых элементов X.';

$GLOBALS["lang"]['Limited to 100 rows.'] = 'Ограничено 100 рядами.';

$GLOBALS["lang"]['line_amount'] = 'линейная сумма';

$GLOBALS["lang"]['Line Amount'] = 'линейная сумма';

$GLOBALS["lang"]['Line Graph'] = 'Графический график';

$GLOBALS["lang"]['line_number_a'] = 'Линия номер А';

$GLOBALS["lang"]['Line Number A'] = 'Линия номер А';

$GLOBALS["lang"]['line_number_b'] = 'Линия номер B';

$GLOBALS["lang"]['Line Number B'] = 'Линия номер B';

$GLOBALS["lang"]['line_text'] = 'Текст строки';

$GLOBALS["lang"]['Line Text'] = 'Текст строки';

$GLOBALS["lang"]['link'] = 'Ссылка';

$GLOBALS["lang"]['Link'] = 'Ссылка';

$GLOBALS["lang"]['Link (Advanced)'] = 'Ссылка (продвинутая)';

$GLOBALS["lang"]['Linked Files'] = 'Связанные файлы';

$GLOBALS["lang"]['links'] = 'Ссылки';

$GLOBALS["lang"]['Links'] = 'Ссылки';

$GLOBALS["lang"]['Links this discovery to the associated cloud (if required). Links to <code>clouds.id</code>.'] = 'Связывает это открытие с соответствующим облаком (при необходимости). Ссылки на <code>clouds.id</code>.';

$GLOBALS["lang"]['Links to <code>discovery_scan_options.id</code>.'] = 'Ссылки на <code>discovery_scan_options.id</code>.';

$GLOBALS["lang"]['Links to <code>standards.id</code>'] = 'Ссылки на <code>standards.id</code>';

$GLOBALS["lang"]['Links to <standards_policies.id</code>'] = 'Ссылки на <standards_policies.id< code=""></standards_policies.id<>';

$GLOBALS["lang"]['Linux'] = 'Linux';

$GLOBALS["lang"]['List'] = 'Список';

$GLOBALS["lang"]['list_table_format'] = 'Формат таблицы';

$GLOBALS["lang"]['List Table Format'] = 'Формат таблицы';

$GLOBALS["lang"]['Lithuania'] = 'Литва';

$GLOBALS["lang"]['Load Balancing'] = 'Балансировка нагрузки';

$GLOBALS["lang"]['Local'] = 'местный';

$GLOBALS["lang"]['Local Area Network'] = 'Локальная сеть';

$GLOBALS["lang"]['local_port'] = 'Местный порт';

$GLOBALS["lang"]['Local Port'] = 'Местный порт';

$GLOBALS["lang"]['Localhost'] = 'Локальный хозяин';

$GLOBALS["lang"]['Localisation'] = 'Локализация';

$GLOBALS["lang"]['Location'] = 'Расположение';

$GLOBALS["lang"]['Location A'] = 'Местоположение A';

$GLOBALS["lang"]['Location B'] = 'Расположение B';

$GLOBALS["lang"]['location_id'] = 'Местонахождение ID';

$GLOBALS["lang"]['Location ID'] = 'Местонахождение ID';

$GLOBALS["lang"]['location_id_a'] = 'Идентификатор местоположения';

$GLOBALS["lang"]['Location ID A'] = 'Идентификатор местоположения';

$GLOBALS["lang"]['location_id_b'] = 'Местонахождение ID B';

$GLOBALS["lang"]['Location ID B'] = 'Местонахождение ID B';

$GLOBALS["lang"]['location_latitude'] = 'Расположение Latitude';

$GLOBALS["lang"]['Location Latitude'] = 'Расположение Latitude';

$GLOBALS["lang"]['location_level'] = 'Уровень расположения';

$GLOBALS["lang"]['Location Level'] = 'Уровень расположения';

$GLOBALS["lang"]['location_longitude'] = 'Расположение Longitude';

$GLOBALS["lang"]['Location Longitude'] = 'Расположение Longitude';

$GLOBALS["lang"]['location_rack'] = 'Расположение Rack';

$GLOBALS["lang"]['Location Rack'] = 'Расположение Rack';

$GLOBALS["lang"]['location_rack_position'] = 'Расположение Rack Position';

$GLOBALS["lang"]['Location Rack Position'] = 'Расположение Rack Position';

$GLOBALS["lang"]['location_rack_size'] = 'Расположение Rack Size';

$GLOBALS["lang"]['Location Rack Size'] = 'Расположение Rack Size';

$GLOBALS["lang"]['location_room'] = 'Месторасположение';

$GLOBALS["lang"]['Location Room'] = 'Месторасположение';

$GLOBALS["lang"]['location_suite'] = 'Расположение Suite';

$GLOBALS["lang"]['Location Suite'] = 'Расположение Suite';

$GLOBALS["lang"]['locations'] = 'Местоположение';

$GLOBALS["lang"]['Locations'] = 'Местоположение';

$GLOBALS["lang"]['Locations in this'] = 'Места в этом';

$GLOBALS["lang"]['log'] = 'Лог';

$GLOBALS["lang"]['Log'] = 'Лог';

$GLOBALS["lang"]['log_format'] = 'Формат журнала';

$GLOBALS["lang"]['Log Format'] = 'Формат журнала';

$GLOBALS["lang"]['log_path'] = 'Логический путь';

$GLOBALS["lang"]['Log Path'] = 'Логический путь';

$GLOBALS["lang"]['log_rotation'] = 'Вращение журнала';

$GLOBALS["lang"]['Log Rotation'] = 'Вращение журнала';

$GLOBALS["lang"]['log_status'] = 'Log Статус';

$GLOBALS["lang"]['Log Status'] = 'Log Статус';

$GLOBALS["lang"]['Logical Cores '] = 'Логические коры ';

$GLOBALS["lang"]['logical_count'] = 'Логический счет';

$GLOBALS["lang"]['Logical Count'] = 'Логический счет';

$GLOBALS["lang"]['Logout'] = 'Выход';

$GLOBALS["lang"]['Logs'] = 'Логс';

$GLOBALS["lang"]['longitude'] = 'долгота';

$GLOBALS["lang"]['Longitude'] = 'долгота';

$GLOBALS["lang"]['low'] = 'низкий';

$GLOBALS["lang"]['Low'] = 'низкий';

$GLOBALS["lang"]['Lower Case'] = 'Нижний случай';

$GLOBALS["lang"]['Luxembourg'] = 'Люксембург';

$GLOBALS["lang"]['MAC Address'] = 'MAC-адрес';

$GLOBALS["lang"]['MAC Manufacturer'] = 'мак Производитель';

$GLOBALS["lang"]['mac'] = 'Мак';

$GLOBALS["lang"]['Mac'] = 'Мак';

$GLOBALS["lang"]['Mac Address'] = 'Mac адрес';

$GLOBALS["lang"]['MacOS'] = 'MacOS';

$GLOBALS["lang"]['Macao'] = 'Макао';

$GLOBALS["lang"]['Macedonia'] = 'Македония';

$GLOBALS["lang"]['Madagascar'] = 'Мадагаскар';

$GLOBALS["lang"]['maintenance_expires'] = 'Сроки технического обслуживания';

$GLOBALS["lang"]['Maintenance Expires'] = 'Сроки технического обслуживания';

$GLOBALS["lang"]['Make My Default Dashboard'] = 'Сделать мою панель инструментов по умолчанию';

$GLOBALS["lang"]['Make this install a Collector'] = 'Сделайте эту установку коллекционером';

$GLOBALS["lang"]['Malawi'] = 'Малави';

$GLOBALS["lang"]['Malaysia'] = 'Малайзия';

$GLOBALS["lang"]['Maldives'] = 'Мальдивы';

$GLOBALS["lang"]['Mali'] = 'Малыш';

$GLOBALS["lang"]['Malta'] = 'Мальта';

$GLOBALS["lang"]['Manage'] = 'Управление';

$GLOBALS["lang"]['Manage Licenses'] = 'Управление лицензиями';

$GLOBALS["lang"]['Manage in NMIS'] = 'Управление в НМИС';

$GLOBALS["lang"]['Managed'] = 'управляемый';

$GLOBALS["lang"]['managed_by'] = 'управляемый';

$GLOBALS["lang"]['Managed By'] = 'управляемый';

$GLOBALS["lang"]['Manual Input'] = 'Ручной ввод';

$GLOBALS["lang"]['Manually set by user, defaults to Production.'] = 'Ручно установленный пользователем, по умолчанию Производитель.';

$GLOBALS["lang"]['Manually set by user.'] = 'вручную устанавливается пользователем.';

$GLOBALS["lang"]['manufacture_date'] = 'Дата изготовления';

$GLOBALS["lang"]['Manufacture Date'] = 'Дата изготовления';

$GLOBALS["lang"]['manufacturer'] = 'Производитель';

$GLOBALS["lang"]['Manufacturer'] = 'Производитель';

$GLOBALS["lang"]['manufacturer_code'] = 'Код изготовителя';

$GLOBALS["lang"]['Manufacturer Code'] = 'Код изготовителя';

$GLOBALS["lang"]['Map'] = 'Карта';

$GLOBALS["lang"]['maps'] = 'Карты';

$GLOBALS["lang"]['Maps'] = 'Карты';

$GLOBALS["lang"]['March'] = 'март';

$GLOBALS["lang"]['Marshall Islands'] = 'Маршалловы Острова';

$GLOBALS["lang"]['Martinique'] = 'Мартиника';

$GLOBALS["lang"]['mask'] = 'Маска';

$GLOBALS["lang"]['Mask'] = 'Маска';

$GLOBALS["lang"]['Match'] = 'матч';

$GLOBALS["lang"]['match_options'] = 'Варианты матчей';

$GLOBALS["lang"]['Match Options'] = 'Варианты матчей';

$GLOBALS["lang"]['match_string'] = 'струна матча';

$GLOBALS["lang"]['Match String'] = 'струна матча';

$GLOBALS["lang"]['Matching Attribute'] = 'Совпадающий атрибут';

$GLOBALS["lang"]['maturity_level'] = 'Уровень зрелости';

$GLOBALS["lang"]['Maturity Level'] = 'Уровень зрелости';

$GLOBALS["lang"]['maturity_score'] = 'Показатель зрелости';

$GLOBALS["lang"]['Maturity Score'] = 'Показатель зрелости';

$GLOBALS["lang"]['Mauritania'] = 'Мавритания';

$GLOBALS["lang"]['Mauritius'] = 'Маврикий';

$GLOBALS["lang"]['max_file_size'] = 'Размер файла Max';

$GLOBALS["lang"]['Max File Size'] = 'Размер файла Max';

$GLOBALS["lang"]['Max Length'] = 'Длина Макса';

$GLOBALS["lang"]['max_size'] = 'Размер Макса';

$GLOBALS["lang"]['Max Size'] = 'Размер Макса';

$GLOBALS["lang"]['May'] = 'май';

$GLOBALS["lang"]['Mayotte'] = 'Майотта';

$GLOBALS["lang"]['Measures the likelihood of the vulnerability being attacked, and is based on the current state of exploit techniques, exploit code availability, or active, “in-the-wild” exploitation.'] = 'Измеряет вероятность атаки на уязвимость и основывается на текущем состоянии технологий эксплойта, доступности кода эксплойта или активной эксплуатации в дикой природе.';

$GLOBALS["lang"]['medium'] = 'средний';

$GLOBALS["lang"]['Medium'] = 'средний';

$GLOBALS["lang"]['members'] = 'Члены';

$GLOBALS["lang"]['Members'] = 'Члены';

$GLOBALS["lang"]['memory'] = 'Память';

$GLOBALS["lang"]['Memory'] = 'Память';

$GLOBALS["lang"]['memory_count'] = 'Счет памяти';

$GLOBALS["lang"]['Memory Count'] = 'Счет памяти';

$GLOBALS["lang"]['memory_slot_count'] = 'Слот памяти Count';

$GLOBALS["lang"]['Memory Slot Count'] = 'Слот памяти Count';

$GLOBALS["lang"]['menu_category'] = 'Категория меню';

$GLOBALS["lang"]['Menu Category'] = 'Категория меню';

$GLOBALS["lang"]['menu_display'] = 'Отображение меню';

$GLOBALS["lang"]['Menu Display'] = 'Отображение меню';

$GLOBALS["lang"]['message'] = 'Послание';

$GLOBALS["lang"]['Message'] = 'Послание';

$GLOBALS["lang"]['meta_last_changed'] = 'Последнее изменение Meta';

$GLOBALS["lang"]['Meta Last Changed'] = 'Последнее изменение Meta';

$GLOBALS["lang"]['metric'] = 'метрический';

$GLOBALS["lang"]['Metric'] = 'метрический';

$GLOBALS["lang"]['Metropolitan Area Network'] = 'Сеть Metropolitan Area Network';

$GLOBALS["lang"]['Mexico'] = 'Мексика';

$GLOBALS["lang"]['Micronesia'] = 'Микронезия';

$GLOBALS["lang"]['Microsoft Azure Fields'] = 'Microsoft Azure Fields';

$GLOBALS["lang"]['microtime'] = 'Микровремя';

$GLOBALS["lang"]['Microtime'] = 'Микровремя';

$GLOBALS["lang"]['minute'] = 'Минута';

$GLOBALS["lang"]['Minute'] = 'Минута';

$GLOBALS["lang"]['Minutes Since last Audit are Greater than'] = 'Минуты с момента последнего аудита больше, чем';

$GLOBALS["lang"]['model'] = 'Модель';

$GLOBALS["lang"]['Model'] = 'Модель';

$GLOBALS["lang"]['model_family'] = 'Модель семейства';

$GLOBALS["lang"]['Model Family'] = 'Модель семейства';

$GLOBALS["lang"]['module'] = 'модуль';

$GLOBALS["lang"]['Module'] = 'модуль';

$GLOBALS["lang"]['module_index'] = 'Индекс модуля';

$GLOBALS["lang"]['Module Index'] = 'Индекс модуля';

$GLOBALS["lang"]['Modules'] = 'модули';

$GLOBALS["lang"]['Moldova'] = 'Молдова';

$GLOBALS["lang"]['Monaco'] = 'Монако';

$GLOBALS["lang"]['Monday'] = 'понедельник';

$GLOBALS["lang"]['Mongolia'] = 'Монголия';

$GLOBALS["lang"]['monitor'] = 'Монитор';

$GLOBALS["lang"]['Monitor'] = 'Монитор';

$GLOBALS["lang"]['Montenegro'] = 'Черногория';

$GLOBALS["lang"]['month'] = 'месяц';

$GLOBALS["lang"]['Month'] = 'месяц';

$GLOBALS["lang"]['Montserrat'] = 'Монтсеррат';

$GLOBALS["lang"]['Morocco'] = 'Марокко';

$GLOBALS["lang"]['motherboard'] = 'материнская плата';

$GLOBALS["lang"]['Motherboard'] = 'материнская плата';

$GLOBALS["lang"]['mount_point'] = 'Горная точка';

$GLOBALS["lang"]['Mount Point'] = 'Горная точка';

$GLOBALS["lang"]['mount_type'] = 'Тип горы';

$GLOBALS["lang"]['Mount Type'] = 'Тип горы';

$GLOBALS["lang"]['Mozambique'] = 'Мозамбик';

$GLOBALS["lang"]['Must Respond to Ping'] = 'Нужно ответить на пинг';

$GLOBALS["lang"]['Myanmar'] = 'Мьянма';

$GLOBALS["lang"]['N+1'] = 'N+1';

$GLOBALS["lang"]['N+M'] = 'N+M';

$GLOBALS["lang"]['N-to-1'] = 'N-to-1';

$GLOBALS["lang"]['N-to-N'] = 'Н-н-н';

$GLOBALS["lang"]['NMIS Business Service'] = 'NMIS Business Service';

$GLOBALS["lang"]['NMIS Customer'] = 'Клиент NMIS';

$GLOBALS["lang"]['NMIS Device Options'] = 'Варианты устройств NMIS';

$GLOBALS["lang"]['NMIS Device Selection'] = 'Выбор устройства NMIS';

$GLOBALS["lang"]['NMIS Field Name'] = 'NMIS Field Name';

$GLOBALS["lang"]['NMIS Field Type'] = 'Тип поля NMIS';

$GLOBALS["lang"]['NMIS Group'] = 'Группа НМИС';

$GLOBALS["lang"]['NMIS Poller'] = 'NMIS Poller';

$GLOBALS["lang"]['NMIS Role'] = 'НМИС Роль';

$GLOBALS["lang"]['NOTE - You can prevent plain text credentials being displayed below by setting the configuration item for <code>decrypt_credentials</code> to <code>n</code>.'] = 'ПРИМЕЧАНИЕ - Вы можете предотвратить отображение простых текстовых учетных данных ниже, установив элемент конфигурации для <code>decrypt_credentials</code> то <code>n</code>.';

$GLOBALS["lang"]['name'] = 'Имя';

$GLOBALS["lang"]['Name'] = 'Имя';

$GLOBALS["lang"]['Namibia'] = 'Намибия';

$GLOBALS["lang"]['Nauru'] = 'Науру';

$GLOBALS["lang"]['Nepal'] = 'Непал';

$GLOBALS["lang"]['net_index'] = 'Чистый индекс';

$GLOBALS["lang"]['Net Index'] = 'Чистый индекс';

$GLOBALS["lang"]['Netherlands Antilles'] = 'Нидерландские Антильские острова';

$GLOBALS["lang"]['Netherlands the'] = 'Нидерланды';

$GLOBALS["lang"]['netmask'] = 'Netmask';

$GLOBALS["lang"]['Netmask'] = 'Netmask';

$GLOBALS["lang"]['netstat'] = 'Netstat';

$GLOBALS["lang"]['Netstat'] = 'Netstat';

$GLOBALS["lang"]['Netstat Policies'] = 'Политика Netstat';

$GLOBALS["lang"]['Network'] = 'Сеть';

$GLOBALS["lang"]['network_address'] = 'Сетевой адрес';

$GLOBALS["lang"]['Network Address'] = 'Сетевой адрес';

$GLOBALS["lang"]['network_domain'] = 'Сетевой домен';

$GLOBALS["lang"]['Network Domain'] = 'Сетевой домен';

$GLOBALS["lang"]['Network Types'] = 'Типы сетей';

$GLOBALS["lang"]['networks'] = 'Сети';

$GLOBALS["lang"]['Networks'] = 'Сети';

$GLOBALS["lang"]['Networks Generated By'] = 'Сети, созданные';

$GLOBALS["lang"]['Networks using a CIDR Mask of'] = 'Сети, использующие маску CIDR';

$GLOBALS["lang"]['New Building Name'] = 'Новое название здания';

$GLOBALS["lang"]['New Caledonia'] = 'Новая Каледония';

$GLOBALS["lang"]['New Floor Name'] = 'Название нового этажа';

$GLOBALS["lang"]['New Room Name'] = 'Название новой комнаты';

$GLOBALS["lang"]['New Row Name'] = 'Новое имя Row';

$GLOBALS["lang"]['New Zealand'] = 'Новая Зеландия';

$GLOBALS["lang"]['News'] = 'Новости';

$GLOBALS["lang"]['next_hop'] = 'Следующий Хоп';

$GLOBALS["lang"]['Next Hop'] = 'Следующий Хоп';

$GLOBALS["lang"]['next_run'] = 'Следующий Run';

$GLOBALS["lang"]['Next Run'] = 'Следующий Run';

$GLOBALS["lang"]['Nicaragua'] = 'Никарагуа';

$GLOBALS["lang"]['Niger'] = 'Нигер';

$GLOBALS["lang"]['Nigeria'] = 'Нигерия';

$GLOBALS["lang"]['Niue'] = 'Ниу';

$GLOBALS["lang"]['nmap'] = 'карта';

$GLOBALS["lang"]['Nmap'] = 'карта';

$GLOBALS["lang"]['Nmap Port Scanning Responses'] = 'Nmap Port Scanning Ответы';

$GLOBALS["lang"]['nmap_tcp_ports'] = 'Порты Nmap Tcp';

$GLOBALS["lang"]['Nmap Tcp Ports'] = 'Порты Nmap Tcp';

$GLOBALS["lang"]['nmap_udp_ports'] = 'Порты Nmap Udp';

$GLOBALS["lang"]['Nmap Udp Ports'] = 'Порты Nmap Udp';

$GLOBALS["lang"]['nmis_business_service'] = 'Nmis Business Service';

$GLOBALS["lang"]['Nmis Business Service'] = 'Nmis Business Service';

$GLOBALS["lang"]['nmis_customer'] = 'Клиент Nmis';

$GLOBALS["lang"]['Nmis Customer'] = 'Клиент Nmis';

$GLOBALS["lang"]['nmis_group'] = 'Nmis Group';

$GLOBALS["lang"]['Nmis Group'] = 'Nmis Group';

$GLOBALS["lang"]['nmis_manage'] = 'Менеджмент Nmis';

$GLOBALS["lang"]['Nmis Manage'] = 'Менеджмент Nmis';

$GLOBALS["lang"]['nmis_name'] = 'Имя Нмиса';

$GLOBALS["lang"]['Nmis Name'] = 'Имя Нмиса';

$GLOBALS["lang"]['nmis_notes'] = 'Nmis Notes';

$GLOBALS["lang"]['Nmis Notes'] = 'Nmis Notes';

$GLOBALS["lang"]['nmis_poller'] = 'Нмис Поллер';

$GLOBALS["lang"]['Nmis Poller'] = 'Нмис Поллер';

$GLOBALS["lang"]['nmis_poller_uuid'] = 'Nmis Poller Uuid';

$GLOBALS["lang"]['Nmis Poller Uuid'] = 'Nmis Poller Uuid';

$GLOBALS["lang"]['nmis_role'] = 'Роль Nmis';

$GLOBALS["lang"]['Nmis Role'] = 'Роль Nmis';

$GLOBALS["lang"]['No'] = 'Нет.';

$GLOBALS["lang"]['No Devices Returned'] = 'Устройства не возвращаются';

$GLOBALS["lang"]['No Google Maps API Key present, you will not be able to display the map.'] = 'Google Maps API отсутствует Ключевой подарок, вы не сможете отобразить карту.';

$GLOBALS["lang"]['No License for Professional or Enterprise'] = 'Нет лицензии для профессионалов или предприятий';

$GLOBALS["lang"]['No Results'] = 'Нет результатов';

$GLOBALS["lang"]['No data in License Key'] = 'Нет данных в лицензионном ключе';

$GLOBALS["lang"]['No database upgrade required at this time.'] = 'В настоящее время обновление базы данных не требуется.';

$GLOBALS["lang"]['Node'] = 'Узел';

$GLOBALS["lang"]['None'] = 'Никто';

$GLOBALS["lang"]['Norfolk Island'] = 'Остров Норфолк';

$GLOBALS["lang"]['Normal'] = 'нормальный';

$GLOBALS["lang"]['Northern Mariana Islands'] = 'Северные Марианские острова';

$GLOBALS["lang"]['Norway'] = 'Норвегия';

$GLOBALS["lang"]['Not Applicable'] = 'Неприменимые';

$GLOBALS["lang"]['Not Checked'] = 'Не проверено';

$GLOBALS["lang"]['Not Equals'] = 'Не равные';

$GLOBALS["lang"]['Not In'] = 'Не в том';

$GLOBALS["lang"]['Not Like'] = 'Не нравится';

$GLOBALS["lang"]['Not Set'] = 'Не ставить';

$GLOBALS["lang"]['Not normally used. If set, this requires the device to have an open port (as per Scan Options) to be considered responding. A MAC address, arp response or ping response is not considered sufficient to be considered responding. Useful if a router or firewall between the Open-AudIT server and target IP is responding to port scans on the IPs behalf.'] = 'Обычно не используется. При установке это требует, чтобы устройство имело открытый порт (в соответствии с опциями сканирования), который считается отвечающим. MAC-адрес, ответ arp или ответ ping не считается достаточным для ответа. Полезно, если маршрутизатор или межсетевой экран между сервером Open-AudIT и целевым IP отвечает на сканирование портов от имени IP.';

$GLOBALS["lang"]['Note'] = 'Примечание';

$GLOBALS["lang"]['Note - Selecting a parent will automatically provide access to its children (although it wont be shown here).'] = 'Выбор родителя автоматически обеспечит доступ к его детям (хотя он не будет показан здесь).';

$GLOBALS["lang"]['Notes'] = 'Заметки';

$GLOBALS["lang"]['notes'] = 'Заметки';

$GLOBALS["lang"]['Notice'] = 'Уведомление';

$GLOBALS["lang"]['notin'] = 'Нет.';

$GLOBALS["lang"]['Notin'] = 'Нет.';

$GLOBALS["lang"]['November'] = 'ноябрь';

$GLOBALS["lang"]['nvd_json'] = 'Nvd Json';

$GLOBALS["lang"]['Nvd Json'] = 'Nvd Json';

$GLOBALS["lang"]['ORDER BY'] = 'По приказу';

$GLOBALS["lang"]['OS'] = 'ОСО';

$GLOBALS["lang"]['OS Families'] = 'Семьи OS';

$GLOBALS["lang"]['OS Family'] = 'Семейство OS';

$GLOBALS["lang"]['OS Group'] = 'OS Group';

$GLOBALS["lang"]['oae_manage'] = 'Oae Управление';

$GLOBALS["lang"]['Oae Manage'] = 'Oae Управление';

$GLOBALS["lang"]['object_ident'] = 'Идентификация объекта';

$GLOBALS["lang"]['Object Ident'] = 'Идентификация объекта';

$GLOBALS["lang"]['October'] = 'октября';

$GLOBALS["lang"]['Oman'] = 'Оман';

$GLOBALS["lang"]['omk_uuid'] = 'Омк Уид';

$GLOBALS["lang"]['Omk Uuid'] = 'Омк Уид';

$GLOBALS["lang"]['On'] = 'На';

$GLOBALS["lang"]['One of <code>3x2</code>, <code>4x2</code>, <code>4x3</code> or <code>4x4</code>.'] = 'Один из <code>3x2</code>, <code>4x2</code>, <code>4x3</code> или <code>4x4</code>.';

$GLOBALS["lang"]['One of Campus Area Network, Cloud Network, Enterprise Private Network, Home Area Network, Local Area Network, Metropolitan Area Network, Passive Optical Local Area Network, Personal Area Network, Storage-Area Network, System-Area Network, Virtual Private Network, Wide Area Network, Wireless Local Area Network.'] = 'Один из Campus Area Network, Cloud Network, Enterprise Private Network, Home Area Network, Local Area Network, Metropolitan Area Network, Passive Optical Local Area Network, Personal Area Network, Storage-Area Network, System-Area Network, Virtual Private Network, Wide Area Network, Wireless Local Area Network.';

$GLOBALS["lang"]['One of Development, Disaster Recovery, Evaluation, Pre-Production, Production, Testing, Training, User Acceptance Testing'] = 'Разработка, восстановление после стихийных бедствий, оценка, предварительное производство, производство, тестирование, обучение, тестирование на принятие пользователей';

$GLOBALS["lang"]['One of allocated, delegated, planning, reserved, unallocated, unknown, unmanaged. Defaults to allocated.'] = 'Один из выделенных, делегированных, планирующих, резервированных, нераспределенных, неизвестных, неуправляемых. Дефолты выделены.';

$GLOBALS["lang"]['One of either <code>active directory</code> or <code>openldap</code>.'] = 'Один из них <code>active directory</code> или <code>openldap</code>.';

$GLOBALS["lang"]['One of: antivirus, backup, firewall, approved, banned, ignored or other.'] = 'Один из них: антивирус, резервное копирование, брандмауэр, одобренный, запрещенный, проигнорированный или другой.';

$GLOBALS["lang"]['Online Documentation'] = 'Онлайн документация';

$GLOBALS["lang"]['Open-AudIT'] = 'Open-AudIT';

$GLOBALS["lang"]['Open-AudIT Community'] = 'Сообщество OpenAudIT';

$GLOBALS["lang"]['Open-AudIT Device Selection'] = 'Выбор устройств Open-AudIT';

$GLOBALS["lang"]['Open-AudIT Enterprise'] = 'Open-AudIT Enterprise';

$GLOBALS["lang"]['Open-AudIT Enterprise. High-scale flexible discovery and audit solution for large networks. All the features of Professional plus: Baselines, File Auditing, Cloud Discovery, Rack Management, Configurable Role Based Access Control including Active Directory and LDAP.'] = 'Open-AudIT Enterprise. Высокомасштабное гибкое решение для обнаружения и аудита больших сетей. Все функции Professional plus: Базовые линии, аудит файлов, Облачное обнаружение, Управление взломом, Конфигурируемый контроль доступа на основе ролей, включая Active Directory и LDAP.';

$GLOBALS["lang"]['Open-AudIT Field Name'] = 'Поле Open-AudIT';

$GLOBALS["lang"]['Open-AudIT Licenses'] = 'Лицензии Open-AudIT';

$GLOBALS["lang"]['Open-AudIT Options'] = 'Варианты Open-AudIT';

$GLOBALS["lang"]['Open-AudIT Professional'] = 'Open-AudIT Professional';

$GLOBALS["lang"]['Open-AudIT Professional. The world\\'] = 'Open-AudIT Professional. Весь мир';

$GLOBALS["lang"]['Open-AudIT and Nmap'] = 'Open-AudIT и Nmap';

$GLOBALS["lang"]['OpenScap is Installed'] = 'OpenScap устанавливается';

$GLOBALS["lang"]['openldap_user_dn'] = 'Пользователь Openldap Dn';

$GLOBALS["lang"]['Openldap User Dn'] = 'Пользователь Openldap Dn';

$GLOBALS["lang"]['openldap_user_membership_attribute'] = 'Атрибут членства пользователей Openldap';

$GLOBALS["lang"]['Openldap User Membership Attribute'] = 'Атрибут членства пользователей Openldap';

$GLOBALS["lang"]['open|filtered'] = 'Открытый |фильтр';

$GLOBALS["lang"]['Open|filtered'] = 'Открытый |фильтр';

$GLOBALS["lang"]['Operating System'] = 'Операционная система';

$GLOBALS["lang"]['Operating System Family Contains'] = 'Семейство операционных систем содержит';

$GLOBALS["lang"]['Operating Systems'] = 'Операционные системы';

$GLOBALS["lang"]['optical'] = 'оптический';

$GLOBALS["lang"]['Optical'] = 'оптический';

$GLOBALS["lang"]['Optimized'] = 'оптимизированный';

$GLOBALS["lang"]['Optional version as audited by Open-AudIT. Use the percent sign % as a wildcard.'] = 'Опциональная версия, проверенная Open-AudIT. Используйте знак % в качестве wildcard.';

$GLOBALS["lang"]['options'] = 'Варианты';

$GLOBALS["lang"]['Options'] = 'Варианты';

$GLOBALS["lang"]['Or select from the below fields.'] = 'Или выберите из приведенных ниже полей.';

$GLOBALS["lang"]['org_descendants'] = 'потомков организации';

$GLOBALS["lang"]['Org Descendants'] = 'потомков организации';

$GLOBALS["lang"]['org_id'] = 'Идентификатор';

$GLOBALS["lang"]['Org ID'] = 'Идентификатор';

$GLOBALS["lang"]['Organisation'] = 'Организация';

$GLOBALS["lang"]['organisation'] = 'Организация';

$GLOBALS["lang"]['Organisation Descendants'] = 'Организация потомков';

$GLOBALS["lang"]['Organisations'] = 'Организации';

$GLOBALS["lang"]['orgs'] = 'организации';

$GLOBALS["lang"]['Orgs'] = 'организации';

$GLOBALS["lang"]['Orgs Name'] = 'Название организации';

$GLOBALS["lang"]['orientation'] = 'Ориентация';

$GLOBALS["lang"]['Orientation'] = 'Ориентация';

$GLOBALS["lang"]['os'] = 'Оз';

$GLOBALS["lang"]['Os'] = 'Оз';

$GLOBALS["lang"]['os_arch'] = 'Os Arch';

$GLOBALS["lang"]['Os Arch'] = 'Os Arch';

$GLOBALS["lang"]['os_bit'] = 'Бит';

$GLOBALS["lang"]['Os Bit'] = 'Бит';

$GLOBALS["lang"]['os_cpe'] = 'Os Cpe';

$GLOBALS["lang"]['Os Cpe'] = 'Os Cpe';

$GLOBALS["lang"]['os_display_version'] = 'Версия Os Display';

$GLOBALS["lang"]['Os Display Version'] = 'Версия Os Display';

$GLOBALS["lang"]['os_family'] = 'Семья';

$GLOBALS["lang"]['Os Family'] = 'Семья';

$GLOBALS["lang"]['os_group'] = 'Os Group';

$GLOBALS["lang"]['Os Group'] = 'Os Group';

$GLOBALS["lang"]['os_installation_date'] = 'Дата установки Os';

$GLOBALS["lang"]['Os Installation Date'] = 'Дата установки Os';

$GLOBALS["lang"]['os_licence_expiry'] = 'Лицензия истекает';

$GLOBALS["lang"]['Os Licence Expiry'] = 'Лицензия истекает';

$GLOBALS["lang"]['os_license'] = 'О лицензии';

$GLOBALS["lang"]['Os License'] = 'О лицензии';

$GLOBALS["lang"]['os_license_code'] = 'Лицензионный кодекс';

$GLOBALS["lang"]['Os License Code'] = 'Лицензионный кодекс';

$GLOBALS["lang"]['os_license_mode'] = 'Лицензионный режим Os';

$GLOBALS["lang"]['Os License Mode'] = 'Лицензионный режим Os';

$GLOBALS["lang"]['os_license_type'] = 'Тип лицензии Os';

$GLOBALS["lang"]['Os License Type'] = 'Тип лицензии Os';

$GLOBALS["lang"]['os_name'] = 'Имя';

$GLOBALS["lang"]['Os Name'] = 'Имя';

$GLOBALS["lang"]['os_version'] = 'Os версия';

$GLOBALS["lang"]['Os Version'] = 'Os версия';

$GLOBALS["lang"]['Other'] = 'другой';

$GLOBALS["lang"]['Others'] = 'Другие';

$GLOBALS["lang"]['Our timeout for a SSH response'] = 'Наш тайм-аут для ответа SSH';

$GLOBALS["lang"]['Our timeout for a WMI response'] = 'Наш тайм-аут для ответа WMI';

$GLOBALS["lang"]['Our timeout for an SNMP response'] = 'Наш тайм-аут для ответа SNMP';

$GLOBALS["lang"]['Our timeout for an audit script response'] = 'Наш тайм-аут для ответа на сценарий аудита';

$GLOBALS["lang"]['output'] = 'выход';

$GLOBALS["lang"]['Output'] = 'выход';

$GLOBALS["lang"]['outputs'] = 'Результаты';

$GLOBALS["lang"]['Outputs'] = 'Результаты';

$GLOBALS["lang"]['Overall severity score (0–10).'] = 'Общая оценка тяжести (0-10).';

$GLOBALS["lang"]['overwrite'] = 'Переписать';

$GLOBALS["lang"]['Overwrite'] = 'Переписать';

$GLOBALS["lang"]['owner'] = 'владелец';

$GLOBALS["lang"]['Owner'] = 'владелец';

$GLOBALS["lang"]['PHP'] = 'PHP';

$GLOBALS["lang"]['POD'] = 'КПК';

$GLOBALS["lang"]['Package'] = 'Пакет';

$GLOBALS["lang"]['packages'] = 'Пакеты';

$GLOBALS["lang"]['Packages'] = 'Пакеты';

$GLOBALS["lang"]['pagefile'] = 'Файл страницы';

$GLOBALS["lang"]['Pagefile'] = 'Файл страницы';

$GLOBALS["lang"]['Pakistan'] = 'Пакистан';

$GLOBALS["lang"]['Palau'] = 'Палау';

$GLOBALS["lang"]['Palestinian Territory'] = 'Палестинская территория';

$GLOBALS["lang"]['Panama'] = 'Панама';

$GLOBALS["lang"]['Papua New Guinea'] = 'Папуа — Новая Гвинея';

$GLOBALS["lang"]['Paraguay'] = 'Парагвай';

$GLOBALS["lang"]['Paranoid'] = 'параноидальный';

$GLOBALS["lang"]['Parent'] = 'родитель';

$GLOBALS["lang"]['parent_id'] = 'Идентификатор родителей';

$GLOBALS["lang"]['Parent ID'] = 'Идентификатор родителей';

$GLOBALS["lang"]['parent_name'] = 'Родительское имя';

$GLOBALS["lang"]['Parent Name'] = 'Родительское имя';

$GLOBALS["lang"]['part_number'] = 'Часть номер';

$GLOBALS["lang"]['Part Number'] = 'Часть номер';

$GLOBALS["lang"]['part_of_domain'] = 'Часть домена';

$GLOBALS["lang"]['Part Of Domain'] = 'Часть домена';

$GLOBALS["lang"]['Partition'] = 'Разделение';

$GLOBALS["lang"]['partition_count'] = 'Граф раздела';

$GLOBALS["lang"]['Partition Count'] = 'Граф раздела';

$GLOBALS["lang"]['partition_disk_index'] = 'Индекс дисков разделов';

$GLOBALS["lang"]['Partition Disk Index'] = 'Индекс дисков разделов';

$GLOBALS["lang"]['Pass'] = 'Пассажир';

$GLOBALS["lang"]['Passed'] = 'Пройденный';

$GLOBALS["lang"]['Passive Optical Local Area Network'] = 'Пассивная оптическая локальная сеть';

$GLOBALS["lang"]['Password'] = 'Пароль';

$GLOBALS["lang"]['password'] = 'Пароль';

$GLOBALS["lang"]['password_changeable'] = 'Изменяемый пароль';

$GLOBALS["lang"]['Password Changeable'] = 'Изменяемый пароль';

$GLOBALS["lang"]['password_disabled'] = 'Пароль отключен';

$GLOBALS["lang"]['Password Disabled'] = 'Пароль отключен';

$GLOBALS["lang"]['password_expires'] = 'Пароль истекает';

$GLOBALS["lang"]['Password Expires'] = 'Пароль истекает';

$GLOBALS["lang"]['password_last_changed'] = 'Последний пароль изменился';

$GLOBALS["lang"]['Password Last Changed'] = 'Последний пароль изменился';

$GLOBALS["lang"]['password_required'] = 'Пароль требуется';

$GLOBALS["lang"]['Password Required'] = 'Пароль требуется';

$GLOBALS["lang"]['patch_panel'] = 'Панель патчей';

$GLOBALS["lang"]['Patch Panel'] = 'Панель патчей';

$GLOBALS["lang"]['patch_panel_port'] = 'Патч Панель Порт';

$GLOBALS["lang"]['Patch Panel Port'] = 'Патч Панель Порт';

$GLOBALS["lang"]['path'] = 'Путь';

$GLOBALS["lang"]['Path'] = 'Путь';

$GLOBALS["lang"]['Performance'] = 'Выступление';

$GLOBALS["lang"]['Performed'] = 'исполненный';

$GLOBALS["lang"]['permission'] = 'Разрешение';

$GLOBALS["lang"]['Permission'] = 'Разрешение';

$GLOBALS["lang"]['permissions'] = 'Разрешения';

$GLOBALS["lang"]['Permissions'] = 'Разрешения';

$GLOBALS["lang"]['Personal Area Network'] = 'Персональная сеть';

$GLOBALS["lang"]['Peru'] = 'Перу';

$GLOBALS["lang"]['Philippines'] = 'Филиппины';

$GLOBALS["lang"]['phone'] = 'Телефон';

$GLOBALS["lang"]['Phone'] = 'Телефон';

$GLOBALS["lang"]['Physical CPUs'] = 'Физические процессоры';

$GLOBALS["lang"]['physical_count'] = 'Физический счет';

$GLOBALS["lang"]['Physical Count'] = 'Физический счет';

$GLOBALS["lang"]['physical_depth'] = 'Физическая глубина';

$GLOBALS["lang"]['Physical Depth'] = 'Физическая глубина';

$GLOBALS["lang"]['physical_height'] = 'Физическая высота';

$GLOBALS["lang"]['Physical Height'] = 'Физическая высота';

$GLOBALS["lang"]['physical_width'] = 'Физическая широта';

$GLOBALS["lang"]['Physical Width'] = 'Физическая широта';

$GLOBALS["lang"]['picture'] = 'фотография';

$GLOBALS["lang"]['Picture'] = 'фотография';

$GLOBALS["lang"]['pid'] = 'Пинок';

$GLOBALS["lang"]['Pid'] = 'Пинок';

$GLOBALS["lang"]['Pie Chart'] = 'Пай Шарт';

$GLOBALS["lang"]['ping'] = 'Пинг';

$GLOBALS["lang"]['Ping'] = 'Пинг';

$GLOBALS["lang"]['Pitcairn Islands'] = 'Острова Питкэрн';

$GLOBALS["lang"]['placement'] = 'Размещение';

$GLOBALS["lang"]['Placement'] = 'Размещение';

$GLOBALS["lang"]['Please have an Open-AudIT administrator logon and upgrade the database.'] = 'Пожалуйста, создайте логотип администратора Open-AudIT и обновите базу данных.';

$GLOBALS["lang"]['Please note that the select box will override the text input box.'] = 'Обратите внимание, что поле выбора будет переопределять поле ввода текста.';

$GLOBALS["lang"]['Please set using'] = 'Пожалуйста, установите';

$GLOBALS["lang"]['pod'] = 'Подушка';

$GLOBALS["lang"]['Pod'] = 'Подушка';

$GLOBALS["lang"]['Poland'] = 'Польша';

$GLOBALS["lang"]['Policies'] = 'Политика';

$GLOBALS["lang"]['Policies have exceptions.'] = 'У политики есть исключения.';

$GLOBALS["lang"]['policy'] = 'Политика';

$GLOBALS["lang"]['Policy'] = 'Политика';

$GLOBALS["lang"]['policy_id'] = 'Политика ID';

$GLOBALS["lang"]['Policy ID'] = 'Политика ID';

$GLOBALS["lang"]['Policy Result'] = 'Результат политики';

$GLOBALS["lang"]['Policy Results'] = 'Результаты политики';

$GLOBALS["lang"]['Polite'] = 'вежливый';

$GLOBALS["lang"]['Populated by audit.'] = 'Населенный аудитом.';

$GLOBALS["lang"]['Populated by discovery and audit.'] = 'Населяется открытием и аудитом.';

$GLOBALS["lang"]['Populated dynamically.'] = 'Динамично заселяется.';

$GLOBALS["lang"]['Populated from DNS.'] = 'Заселяется из DNS.';

$GLOBALS["lang"]['Populated from SNMP discovery.'] = 'Изображение: SNMP Discovery.';

$GLOBALS["lang"]['Populated from device audits.'] = 'Населяется от аппаратных аудитов.';

$GLOBALS["lang"]['Populated from hostname.'] = 'Населяется от имени хоста.';

$GLOBALS["lang"]['Populated from machine-id on Linux.'] = 'Заполнено с помощью machine-id на Linux.';

$GLOBALS["lang"]['Populated from the IP for the default route or the IP detected in discovery.'] = 'Населенный из IP для маршрута по умолчанию или IP, обнаруженного при открытии.';

$GLOBALS["lang"]['Populated from the hostname command.'] = 'Населён из команды имени хоста.';

$GLOBALS["lang"]['Populated with additional data from the external system, in a JSON representation.'] = 'Населенный дополнительными данными из внешней системы, в представлении JSON.';

$GLOBALS["lang"]['port'] = 'Порт';

$GLOBALS["lang"]['Port'] = 'Порт';

$GLOBALS["lang"]['port_name'] = 'Портовое имя';

$GLOBALS["lang"]['Port Name'] = 'Портовое имя';

$GLOBALS["lang"]['port_number'] = 'Порт номер';

$GLOBALS["lang"]['Port Number'] = 'Порт номер';

$GLOBALS["lang"]['ports_in_order'] = 'Порты в порядке';

$GLOBALS["lang"]['Ports In Order'] = 'Порты в порядке';

$GLOBALS["lang"]['ports_stop_after'] = 'Порты останавливаются после';

$GLOBALS["lang"]['Ports Stop After'] = 'Порты останавливаются после';

$GLOBALS["lang"]['Portugal, Portuguese Republic'] = 'Португалия, Португальская Республика';

$GLOBALS["lang"]['position'] = 'Позиция';

$GLOBALS["lang"]['Position'] = 'Позиция';

$GLOBALS["lang"]['postcode'] = 'Почтовый индекс';

$GLOBALS["lang"]['Postcode'] = 'Почтовый индекс';

$GLOBALS["lang"]['power_circuit'] = 'Электрическая цепь';

$GLOBALS["lang"]['Power Circuit'] = 'Электрическая цепь';

$GLOBALS["lang"]['power_sockets'] = 'Силовые розетки';

$GLOBALS["lang"]['Power Sockets'] = 'Силовые розетки';

$GLOBALS["lang"]['Predictable'] = 'предсказуемый';

$GLOBALS["lang"]['Preferences'] = 'Предпочтения';

$GLOBALS["lang"]['Prerequisites'] = 'Предпосылки';

$GLOBALS["lang"]['Prerequisites and Tests'] = 'Предпосылки и испытания';

$GLOBALS["lang"]['present'] = 'Презентация';

$GLOBALS["lang"]['Present'] = 'Презентация';

$GLOBALS["lang"]['previous_value'] = 'Предыдущая ценность';

$GLOBALS["lang"]['Previous Value'] = 'Предыдущая ценность';

$GLOBALS["lang"]['primary'] = 'первичный';

$GLOBALS["lang"]['Primary'] = 'первичный';

$GLOBALS["lang"]['Primary Key'] = 'Первичный ключ';

$GLOBALS["lang"]['print_queue'] = 'Печать Queue';

$GLOBALS["lang"]['Print Queue'] = 'Печать Queue';

$GLOBALS["lang"]['printer_color'] = 'Цвет печати';

$GLOBALS["lang"]['Printer Color'] = 'Цвет печати';

$GLOBALS["lang"]['printer_duplex'] = 'Принтер Дуплекс';

$GLOBALS["lang"]['Printer Duplex'] = 'Принтер Дуплекс';

$GLOBALS["lang"]['printer_port_name'] = 'Имя порта принтера';

$GLOBALS["lang"]['Printer Port Name'] = 'Имя порта принтера';

$GLOBALS["lang"]['printer_shared'] = 'Принтер общий';

$GLOBALS["lang"]['Printer Shared'] = 'Принтер общий';

$GLOBALS["lang"]['printer_shared_name'] = 'Принтер с общим именем';

$GLOBALS["lang"]['Printer Shared Name'] = 'Принтер с общим именем';

$GLOBALS["lang"]['priority'] = 'Приоритет';

$GLOBALS["lang"]['Priority'] = 'Приоритет';

$GLOBALS["lang"]['Privacy Passphrase'] = 'Privacy Passphras';

$GLOBALS["lang"]['privileges_required'] = 'Необходимые привилегии';

$GLOBALS["lang"]['Privileges Required'] = 'Необходимые привилегии';

$GLOBALS["lang"]['processor'] = 'процессор';

$GLOBALS["lang"]['Processor'] = 'процессор';

$GLOBALS["lang"]['processor_count'] = 'Процессор Count';

$GLOBALS["lang"]['Processor Count'] = 'Процессор Count';

$GLOBALS["lang"]['processor_slot_count'] = 'Слот процессора Count';

$GLOBALS["lang"]['Processor Slot Count'] = 'Слот процессора Count';

$GLOBALS["lang"]['processor_type'] = 'Тип процессора';

$GLOBALS["lang"]['Processor Type'] = 'Тип процессора';

$GLOBALS["lang"]['Processors'] = 'Процессоры';

$GLOBALS["lang"]['product_name'] = 'Название продукта';

$GLOBALS["lang"]['Product Name'] = 'Название продукта';

$GLOBALS["lang"]['Product Name Match from CPE: '] = 'Наименование продукта Матч от CPE: ';

$GLOBALS["lang"]['products'] = 'Продукты';

$GLOBALS["lang"]['Products'] = 'Продукты';

$GLOBALS["lang"]['profile'] = 'профиль';

$GLOBALS["lang"]['Profile'] = 'профиль';

$GLOBALS["lang"]['program'] = 'Программа';

$GLOBALS["lang"]['Program'] = 'Программа';

$GLOBALS["lang"]['protocol'] = 'Протокол';

$GLOBALS["lang"]['Protocol'] = 'Протокол';

$GLOBALS["lang"]['provider'] = 'поставщик';

$GLOBALS["lang"]['Provider'] = 'поставщик';

$GLOBALS["lang"]['published'] = 'Опубликовано';

$GLOBALS["lang"]['Published'] = 'Опубликовано';

$GLOBALS["lang"]['published_date'] = 'Опубликованная дата';

$GLOBALS["lang"]['Published Date'] = 'Опубликованная дата';

$GLOBALS["lang"]['publisher'] = 'издатель';

$GLOBALS["lang"]['Publisher'] = 'издатель';

$GLOBALS["lang"]['Puerto Rico'] = 'Пуэрто Рико';

$GLOBALS["lang"]['Purchase'] = 'Покупка';

$GLOBALS["lang"]['purchase_amount'] = 'Сумма покупки';

$GLOBALS["lang"]['Purchase Amount'] = 'Сумма покупки';

$GLOBALS["lang"]['purchase_cost_center'] = 'Центр затрат на покупку';

$GLOBALS["lang"]['Purchase Cost Center'] = 'Центр затрат на покупку';

$GLOBALS["lang"]['purchase_count'] = 'Купить граф';

$GLOBALS["lang"]['Purchase Count'] = 'Купить граф';

$GLOBALS["lang"]['purchase_date'] = 'Дата покупки';

$GLOBALS["lang"]['Purchase Date'] = 'Дата покупки';

$GLOBALS["lang"]['purchase_invoice'] = 'Купить счет';

$GLOBALS["lang"]['Purchase Invoice'] = 'Купить счет';

$GLOBALS["lang"]['purchase_order'] = 'Заказ на покупку';

$GLOBALS["lang"]['Purchase Order'] = 'Заказ на покупку';

$GLOBALS["lang"]['purchase_order_number'] = 'Номер заказа на покупку';

$GLOBALS["lang"]['Purchase Order Number'] = 'Номер заказа на покупку';

$GLOBALS["lang"]['purchase_service_contract_number'] = 'Номер договора купли-продажи';

$GLOBALS["lang"]['Purchase Service Contract Number'] = 'Номер договора купли-продажи';

$GLOBALS["lang"]['purchase_vendor'] = 'Покупатель';

$GLOBALS["lang"]['Purchase Vendor'] = 'Покупатель';

$GLOBALS["lang"]['purpose'] = 'Цель';

$GLOBALS["lang"]['Purpose'] = 'Цель';

$GLOBALS["lang"]['Qatar'] = 'Катар';

$GLOBALS["lang"]['queries'] = 'Запросы';

$GLOBALS["lang"]['Queries'] = 'Запросы';

$GLOBALS["lang"]['Query'] = 'Запрос';

$GLOBALS["lang"]['queue'] = 'очередь';

$GLOBALS["lang"]['Queue'] = 'очередь';

$GLOBALS["lang"]['Queue Limit'] = 'Лимит очереди';

$GLOBALS["lang"]['Queued Device Audits'] = 'Аудиты устройств Queued';

$GLOBALS["lang"]['Queued IP Scans'] = 'Сканирование IP';

$GLOBALS["lang"]['Queued Items'] = 'Очерченные пункты';

$GLOBALS["lang"]['RU Start'] = 'RU Старт';

$GLOBALS["lang"]['RX Bitrate'] = 'RX Bitrate';

$GLOBALS["lang"]['RX Freq'] = 'RX Freq';

$GLOBALS["lang"]['RX Level'] = 'Уровень RX';

$GLOBALS["lang"]['RX Power'] = 'RX Power';

$GLOBALS["lang"]['RX Profile'] = 'Профиль RX';

$GLOBALS["lang"]['Rack'] = 'рэк';

$GLOBALS["lang"]['rack_devices'] = 'Устройства Rack';

$GLOBALS["lang"]['Rack Devices'] = 'Устройства Rack';

$GLOBALS["lang"]['rack_id'] = 'Идентификатор';

$GLOBALS["lang"]['Rack ID'] = 'Идентификатор';

$GLOBALS["lang"]['Racks'] = 'грабли';

$GLOBALS["lang"]['racks'] = 'грабли';

$GLOBALS["lang"]['radio'] = 'Радио';

$GLOBALS["lang"]['Radio'] = 'Радио';

$GLOBALS["lang"]['Radio MAC'] = 'Радио MAC';

$GLOBALS["lang"]['rationale'] = 'обоснование';

$GLOBALS["lang"]['Rationale'] = 'обоснование';

$GLOBALS["lang"]['raw'] = 'сырой';

$GLOBALS["lang"]['Raw'] = 'сырой';

$GLOBALS["lang"]['read'] = 'Читать';

$GLOBALS["lang"]['Read'] = 'Читать';

$GLOBALS["lang"]['Read our online documentation on the Open-AudIT Wiki.'] = 'Читайте нашу онлайн-документацию на Open-AudIT Wiki.';

$GLOBALS["lang"]['Red Query'] = 'Красный запрос';

$GLOBALS["lang"]['Redirect URI'] = 'Перенаправление URI';

$GLOBALS["lang"]['redirect_uri'] = 'Перенаправление Uri';

$GLOBALS["lang"]['Redirect Uri'] = 'Перенаправление Uri';

$GLOBALS["lang"]['references'] = 'Ссылки';

$GLOBALS["lang"]['References'] = 'Ссылки';

$GLOBALS["lang"]['region'] = 'регион';

$GLOBALS["lang"]['Region'] = 'регион';

$GLOBALS["lang"]['registered_user'] = 'Зарегистрированный пользователь';

$GLOBALS["lang"]['Registered User'] = 'Зарегистрированный пользователь';

$GLOBALS["lang"]['rel'] = 'Рель';

$GLOBALS["lang"]['Rel'] = 'Рель';

$GLOBALS["lang"]['Release'] = 'Выпуск';

$GLOBALS["lang"]['remediation'] = 'Восстановление';

$GLOBALS["lang"]['Remediation'] = 'Восстановление';

$GLOBALS["lang"]['Remote'] = 'удаленный';

$GLOBALS["lang"]['remote_address'] = 'Удаленный адрес';

$GLOBALS["lang"]['Remote Address'] = 'Удаленный адрес';

$GLOBALS["lang"]['remote_port'] = 'Удаленный порт';

$GLOBALS["lang"]['Remote Port'] = 'Удаленный порт';

$GLOBALS["lang"]['Remove'] = 'Удалить';

$GLOBALS["lang"]['Remove Exception'] = 'Удалить исключение';

$GLOBALS["lang"]['Report'] = 'Доклад';

$GLOBALS["lang"]['Report on your devices, networks and more'] = 'Сообщите о своих устройствах, сетях и многом другом';

$GLOBALS["lang"]['reportable'] = 'подотчетный';

$GLOBALS["lang"]['Reportable'] = 'подотчетный';

$GLOBALS["lang"]['Reports'] = 'Доклады';

$GLOBALS["lang"]['request'] = 'Просьба';

$GLOBALS["lang"]['Request'] = 'Просьба';

$GLOBALS["lang"]['Request a Specific CVE'] = 'Запросить конкретную КВЭ';

$GLOBALS["lang"]['requested'] = 'Запрошенный';

$GLOBALS["lang"]['Requested'] = 'Запрошенный';

$GLOBALS["lang"]['require_port'] = 'Требуется порт';

$GLOBALS["lang"]['Require Port'] = 'Требуется порт';

$GLOBALS["lang"]['Require an Open Port'] = 'Требуется открытый порт';

$GLOBALS["lang"]['Required'] = 'требуемый';

$GLOBALS["lang"]['Reset'] = 'сброс';

$GLOBALS["lang"]['Reset All Data'] = 'Сбросить все данные';

$GLOBALS["lang"]['Reset to Default'] = 'Перезагрузить в Default';

$GLOBALS["lang"]['resource'] = 'Источник';

$GLOBALS["lang"]['Resource'] = 'Источник';

$GLOBALS["lang"]['Resource Name'] = 'Название ресурса';

$GLOBALS["lang"]['Resources'] = 'ресурсы';

$GLOBALS["lang"]['response'] = 'Ответ';

$GLOBALS["lang"]['Response'] = 'Ответ';

$GLOBALS["lang"]['responsibility'] = 'Ответственность';

$GLOBALS["lang"]['Responsibility'] = 'Ответственность';

$GLOBALS["lang"]['Restore my Licenses'] = 'Восстановите мои лицензии';

$GLOBALS["lang"]['Restrict to Private'] = 'Ограничение для частных';

$GLOBALS["lang"]['Restrict to Subnet'] = 'Ограничение для Subnet';

$GLOBALS["lang"]['result'] = 'Результат';

$GLOBALS["lang"]['Result'] = 'Результат';

$GLOBALS["lang"]['Results'] = 'Результаты';

$GLOBALS["lang"]['retrieved'] = 'возвращенный';

$GLOBALS["lang"]['Retrieved'] = 'возвращенный';

$GLOBALS["lang"]['retrieved_ident'] = 'Полученный идентификатор';

$GLOBALS["lang"]['Retrieved Ident'] = 'Полученный идентификатор';

$GLOBALS["lang"]['retrieved_name'] = 'Восстановленное имя';

$GLOBALS["lang"]['Retrieved Name'] = 'Восстановленное имя';

$GLOBALS["lang"]['Retrieved from the device - Windows:Win32_ComputerSystemProduct, Linux:dmidecode, MacOS:system_profiler, ESXi:vim-cmd hostsvc/hostsummary, HP-UX:machinfo, Solaris:smbios, AIX:uname.'] = 'Извлечено с устройства - Windows:Win32_ComputerSystemProduct, Linux:dmidecode, MacOS:system_profiler, ESXi:vim-cmd hostsvc/hostsummary, HP-UX:machinfo, Solaris:smbios, AIX:uname.';

$GLOBALS["lang"]['Reunion'] = 'Воссоединение';

$GLOBALS["lang"]['revision'] = 'Пересмотр';

$GLOBALS["lang"]['Revision'] = 'Пересмотр';

$GLOBALS["lang"]['risk_assesment_result'] = 'Результат оценки риска';

$GLOBALS["lang"]['Risk Assesment Result'] = 'Результат оценки риска';

$GLOBALS["lang"]['role'] = 'Роль';

$GLOBALS["lang"]['Role'] = 'Роль';

$GLOBALS["lang"]['roles'] = 'Роли';

$GLOBALS["lang"]['Roles'] = 'Роли';

$GLOBALS["lang"]['Romania'] = 'Румыния';

$GLOBALS["lang"]['Room'] = 'Комната';

$GLOBALS["lang"]['route'] = 'Маршрут';

$GLOBALS["lang"]['Route'] = 'Маршрут';

$GLOBALS["lang"]['Row'] = 'ряд';

$GLOBALS["lang"]['Row Count'] = 'Роу Граф';

$GLOBALS["lang"]['row_position'] = 'Позиция Row';

$GLOBALS["lang"]['Row Position'] = 'Позиция Row';

$GLOBALS["lang"]['Rows'] = 'ряды';

$GLOBALS["lang"]['ru_height'] = 'Ру-Хайт';

$GLOBALS["lang"]['Ru Height'] = 'Ру-Хайт';

$GLOBALS["lang"]['ru_start'] = 'Ру Старт';

$GLOBALS["lang"]['Ru Start'] = 'Ру Старт';

$GLOBALS["lang"]['rule_group'] = 'Группа правил';

$GLOBALS["lang"]['Rule Group'] = 'Группа правил';

$GLOBALS["lang"]['rules'] = 'Правила';

$GLOBALS["lang"]['Rules'] = 'Правила';

$GLOBALS["lang"]['Run Discovery'] = 'Скачать Discovery';

$GLOBALS["lang"]['Run Discovery on Devices'] = 'Скачать Discovery на устройствах';

$GLOBALS["lang"]['Run a discovery and find out <b>Whats On Your Network?</b>'] = 'Запустите открытие и узнайте <b>Что в вашей сети?</b>';

$GLOBALS["lang"]['Run this Command'] = 'Управляйте этой командой';

$GLOBALS["lang"]['runas'] = 'Рунас';

$GLOBALS["lang"]['Runas'] = 'Рунас';

$GLOBALS["lang"]['Running Open-AudIT Apache Service Under Windows'] = 'Запуск сервиса Open-AudIT Apache под Windows';

$GLOBALS["lang"]['Russian Federation'] = 'Российская Федерация';

$GLOBALS["lang"]['Rwanda'] = 'Руанда';

$GLOBALS["lang"]['rx_bitrate'] = 'Rx Bitrate';

$GLOBALS["lang"]['Rx Bitrate'] = 'Rx Bitrate';

$GLOBALS["lang"]['rx_freq'] = 'Rx Freq';

$GLOBALS["lang"]['Rx Freq'] = 'Rx Freq';

$GLOBALS["lang"]['rx_level'] = 'Уровень Rx';

$GLOBALS["lang"]['Rx Level'] = 'Уровень Rx';

$GLOBALS["lang"]['rx_power'] = 'RX Power';

$GLOBALS["lang"]['Rx Power'] = 'RX Power';

$GLOBALS["lang"]['rx_profile'] = 'Профиль Rx';

$GLOBALS["lang"]['Rx Profile'] = 'Профиль Rx';

$GLOBALS["lang"]['SELECT'] = 'Избранный';

$GLOBALS["lang"]['SID'] = 'СИД';

$GLOBALS["lang"]['SM Version'] = 'SM версия';

$GLOBALS["lang"]['SNMP (v1 / v2)'] = 'SNMP (v1/v2)';

$GLOBALS["lang"]['SNMP Details'] = 'SNMP Подробности';

$GLOBALS["lang"]['SNMP OID'] = 'SNMP OID';

$GLOBALS["lang"]['SNMP Version'] = 'Версия SNMP';

$GLOBALS["lang"]['SNMP v3'] = 'SNMP v3';

$GLOBALS["lang"]['SQL'] = 'SQL';

$GLOBALS["lang"]['SQL (Advanced)'] = 'SQL (продвинутый)';

$GLOBALS["lang"]['SQL Creation Statements'] = 'Заявления о создании SQL';

$GLOBALS["lang"]['SSH'] = 'Шшш';

$GLOBALS["lang"]['SSH Key'] = 'Шшш Ключ';

$GLOBALS["lang"]['SW Revision'] = 'SW Пересмотр';

$GLOBALS["lang"]['Saint Barthelemy'] = 'Святой Бартелеми';

$GLOBALS["lang"]['Saint Helena'] = 'Святая Елена';

$GLOBALS["lang"]['Saint Kitts and Nevis'] = 'Сент-Китс и Невис';

$GLOBALS["lang"]['Saint Lucia'] = 'Сент-Люсия';

$GLOBALS["lang"]['Saint Martin'] = 'Святой Мартин';

$GLOBALS["lang"]['Saint Pierre and Miquelon'] = 'Сен-Пьер и Микелон';

$GLOBALS["lang"]['Saint Vincent and the Grenadines'] = 'Сент-Винсент и Гренадины';

$GLOBALS["lang"]['Samoa'] = 'Самоа';

$GLOBALS["lang"]['san'] = 'Сан.';

$GLOBALS["lang"]['San'] = 'Сан.';

$GLOBALS["lang"]['San Marino'] = 'Сан-Марино';

$GLOBALS["lang"]['Sao Tome and Principe'] = 'Сан-Томе и Принцип';

$GLOBALS["lang"]['Saturday'] = 'суббота';

$GLOBALS["lang"]['Saudi Arabia'] = 'Саудовская Аравия';

$GLOBALS["lang"]['Save as Default'] = 'Сохранить как по умолчанию';

$GLOBALS["lang"]['scaling'] = 'масштабирование';

$GLOBALS["lang"]['Scaling'] = 'масштабирование';

$GLOBALS["lang"]['scan_options'] = 'Варианты сканирования';

$GLOBALS["lang"]['Scan Options'] = 'Варианты сканирования';

$GLOBALS["lang"]['Scan Options ID'] = 'Идентификатор Scan Options';

$GLOBALS["lang"]['Scan the Nmap top number of TCP ports.'] = 'Сканирование Nmap верхнего числа портов TCP.';

$GLOBALS["lang"]['Scan the Nmap top number of UDP ports.'] = 'Сканирование Nmap верхнего числа портов UDP.';

$GLOBALS["lang"]['schedule'] = 'Расписание';

$GLOBALS["lang"]['Schedule'] = 'Расписание';

$GLOBALS["lang"]['scope'] = 'охват';

$GLOBALS["lang"]['Scope'] = 'охват';

$GLOBALS["lang"]['script_timeout'] = 'Сценарий Timeout';

$GLOBALS["lang"]['Script Timeout'] = 'Сценарий Timeout';

$GLOBALS["lang"]['scripts'] = 'Сценарии';

$GLOBALS["lang"]['Scripts'] = 'Сценарии';

$GLOBALS["lang"]['scsi'] = 'Шишка';

$GLOBALS["lang"]['Scsi'] = 'Шишка';

$GLOBALS["lang"]['scsi_bus'] = 'Автобус Scsi';

$GLOBALS["lang"]['Scsi Bus'] = 'Автобус Scsi';

$GLOBALS["lang"]['scsi_logical_unit'] = 'Логическая единица Scsi';

$GLOBALS["lang"]['Scsi Logical Unit'] = 'Логическая единица Scsi';

$GLOBALS["lang"]['scsi_port'] = 'Порт Ски';

$GLOBALS["lang"]['Scsi Port'] = 'Порт Ски';

$GLOBALS["lang"]['Search'] = 'Поиск';

$GLOBALS["lang"]['Search For a Device'] = 'Поиск для устройства';

$GLOBALS["lang"]['Search for Device'] = 'Поиск устройства';

$GLOBALS["lang"]['Searching Using DataTables'] = 'Поиск с помощью DataTables';

$GLOBALS["lang"]['secondary'] = 'вторичный';

$GLOBALS["lang"]['Secondary'] = 'вторичный';

$GLOBALS["lang"]['Secondary Text'] = 'Вторичный текст';

$GLOBALS["lang"]['section'] = 'Раздел';

$GLOBALS["lang"]['Section'] = 'Раздел';

$GLOBALS["lang"]['secure'] = 'безопасный';

$GLOBALS["lang"]['Secure'] = 'безопасный';

$GLOBALS["lang"]['Security Name'] = 'Безопасность имя';

$GLOBALS["lang"]['Security Status'] = 'Статус безопасности';

$GLOBALS["lang"]['security_zone'] = 'Зона безопасности';

$GLOBALS["lang"]['Security Zone'] = 'Зона безопасности';

$GLOBALS["lang"]['seed_ip'] = 'Семенной IP';

$GLOBALS["lang"]['Seed IP'] = 'Семенной IP';

$GLOBALS["lang"]['seed_ping'] = 'Семенной пинг';

$GLOBALS["lang"]['Seed Ping'] = 'Семенной пинг';

$GLOBALS["lang"]['seed_restrict_to_private'] = 'Семя ограничивается частными';

$GLOBALS["lang"]['Seed Restrict To Private'] = 'Семя ограничивается частными';

$GLOBALS["lang"]['seed_restrict_to_subnet'] = 'Ограничение семян для подсети';

$GLOBALS["lang"]['Seed Restrict To Subnet'] = 'Ограничение семян для подсети';

$GLOBALS["lang"]['Select'] = 'Выбрать';

$GLOBALS["lang"]['Select All'] = 'Выберите все';

$GLOBALS["lang"]['select_external_attribute'] = 'Выберите внешний атрибут';

$GLOBALS["lang"]['Select External Attribute'] = 'Выберите внешний атрибут';

$GLOBALS["lang"]['select_external_count'] = 'Выберите Внешний счет';

$GLOBALS["lang"]['Select External Count'] = 'Выберите Внешний счет';

$GLOBALS["lang"]['select_external_type'] = 'Выберите внешний Тип';

$GLOBALS["lang"]['Select External Type'] = 'Выберите внешний Тип';

$GLOBALS["lang"]['select_external_value'] = 'Выберите внешний ценность';

$GLOBALS["lang"]['Select External Value'] = 'Выберите внешний ценность';

$GLOBALS["lang"]['select_internal_attribute'] = 'Выберите внутренний атрибут';

$GLOBALS["lang"]['Select Internal Attribute'] = 'Выберите внутренний атрибут';

$GLOBALS["lang"]['select_internal_count'] = 'Выберите внутренний счет';

$GLOBALS["lang"]['Select Internal Count'] = 'Выберите внутренний счет';

$GLOBALS["lang"]['select_internal_type'] = 'Выберите внутренний Тип';

$GLOBALS["lang"]['Select Internal Type'] = 'Выберите внутренний Тип';

$GLOBALS["lang"]['select_internal_value'] = 'Выберите внутренний ценность';

$GLOBALS["lang"]['Select Internal Value'] = 'Выберите внутренний ценность';

$GLOBALS["lang"]['Select a Table'] = 'Выберите стол';

$GLOBALS["lang"]['Senegal'] = 'Сенегал';

$GLOBALS["lang"]['sensitivity'] = 'чувствительность';

$GLOBALS["lang"]['Sensitivity'] = 'чувствительность';

$GLOBALS["lang"]['September'] = 'сентябрь';

$GLOBALS["lang"]['Serbia'] = 'Сербия';

$GLOBALS["lang"]['serial'] = 'серийный';

$GLOBALS["lang"]['Serial'] = 'серийный';

$GLOBALS["lang"]['serial_imei'] = 'Серийный Imei';

$GLOBALS["lang"]['Serial Imei'] = 'Серийный Imei';

$GLOBALS["lang"]['serial_sim'] = 'Серийный сим';

$GLOBALS["lang"]['Serial Sim'] = 'Серийный сим';

$GLOBALS["lang"]['series'] = 'Серия';

$GLOBALS["lang"]['Series'] = 'Серия';

$GLOBALS["lang"]['server'] = 'сервер';

$GLOBALS["lang"]['Server'] = 'сервер';

$GLOBALS["lang"]['server_id'] = 'Серверный идентификатор';

$GLOBALS["lang"]['Server ID'] = 'Серверный идентификатор';

$GLOBALS["lang"]['Server Is'] = 'Сервер является';

$GLOBALS["lang"]['server_item'] = 'Серверный элемент';

$GLOBALS["lang"]['Server Item'] = 'Серверный элемент';

$GLOBALS["lang"]['Server Status'] = 'Серверный статус';

$GLOBALS["lang"]['Servers'] = 'Серверы';

$GLOBALS["lang"]['service'] = 'Сервис';

$GLOBALS["lang"]['Service'] = 'Сервис';

$GLOBALS["lang"]['service_identifier'] = 'Идентификатор обслуживания';

$GLOBALS["lang"]['Service Identifier'] = 'Идентификатор обслуживания';

$GLOBALS["lang"]['service_level_a'] = 'Уровень обслуживания A';

$GLOBALS["lang"]['Service Level A'] = 'Уровень обслуживания A';

$GLOBALS["lang"]['service_level_b'] = 'Уровень обслуживания B';

$GLOBALS["lang"]['Service Level B'] = 'Уровень обслуживания B';

$GLOBALS["lang"]['service_network'] = 'Сервисная сеть';

$GLOBALS["lang"]['Service Network'] = 'Сервисная сеть';

$GLOBALS["lang"]['service_number'] = 'Номер службы';

$GLOBALS["lang"]['Service Number'] = 'Номер службы';

$GLOBALS["lang"]['service_pack'] = 'Пакет услуг';

$GLOBALS["lang"]['Service Pack'] = 'Пакет услуг';

$GLOBALS["lang"]['service_plan'] = 'План обслуживания';

$GLOBALS["lang"]['Service Plan'] = 'План обслуживания';

$GLOBALS["lang"]['service_provider'] = 'Поставщик услуг';

$GLOBALS["lang"]['Service Provider'] = 'Поставщик услуг';

$GLOBALS["lang"]['service_tag'] = 'Сервисный тег';

$GLOBALS["lang"]['Service Tag'] = 'Сервисный тег';

$GLOBALS["lang"]['service_type'] = 'Тип обслуживания';

$GLOBALS["lang"]['Service Type'] = 'Тип обслуживания';

$GLOBALS["lang"]['service_version'] = 'Версия службы';

$GLOBALS["lang"]['Service Version'] = 'Версия службы';

$GLOBALS["lang"]['Set'] = 'Настройка';

$GLOBALS["lang"]['set_by'] = 'установленный';

$GLOBALS["lang"]['Set By'] = 'установленный';

$GLOBALS["lang"]['Set the size (normal or compact) of the tables on the List screens.'] = 'Установите размер (нормальный или компактный) таблиц на экранах Списка.';

$GLOBALS["lang"]['severity'] = 'серьезность';

$GLOBALS["lang"]['Severity'] = 'серьезность';

$GLOBALS["lang"]['severity_text'] = 'Тяжёлый текст';

$GLOBALS["lang"]['Severity Text'] = 'Тяжёлый текст';

$GLOBALS["lang"]['Severity is calculated from the <code>base_score</code> and can be one of: None, Low, Medium, High, Critical.'] = 'Тяжесть рассчитывается из <code>base_score</code> Он может быть одним из: Низкий, Средний, Высокий, Критический.';

$GLOBALS["lang"]['Seychelles'] = 'Сейшельские острова';

$GLOBALS["lang"]['share'] = 'Доля';

$GLOBALS["lang"]['Share'] = 'Доля';

$GLOBALS["lang"]['Share Name'] = 'Имя имени';

$GLOBALS["lang"]['shared'] = 'общий';

$GLOBALS["lang"]['Shared'] = 'общий';

$GLOBALS["lang"]['shared_name'] = 'Совместное имя';

$GLOBALS["lang"]['Shared Name'] = 'Совместное имя';

$GLOBALS["lang"]['shell'] = 'раковина';

$GLOBALS["lang"]['Shell'] = 'раковина';

$GLOBALS["lang"]['Ship Date'] = 'Дата судна';

$GLOBALS["lang"]['short'] = 'короткий';

$GLOBALS["lang"]['Short'] = 'короткий';

$GLOBALS["lang"]['Should I remove all non-current data from this device?'] = 'Должен ли я удалить все текущие данные с этого устройства?';

$GLOBALS["lang"]['Should this file (or pattern) be used to exclude files from being reported. Normally, to audit files, this is set to <code>y</code>.'] = 'Этот файл (или шаблон) должен использоваться для исключения файлов из отчета. Как правило, для аудита файлов, это <code>y</code>.';

$GLOBALS["lang"]['Should this vendor be used when retrieving vulnerabilities from FirstWave.'] = 'Должен ли этот поставщик использоваться при извлечении уязвимостей из FirstWave?';

$GLOBALS["lang"]['Should we add devices from the remote service, locally.'] = 'Стоит ли добавлять устройства из удаленного сервиса, локально.';

$GLOBALS["lang"]['Should we apply this license to the selected Org as well as the Orgs children?'] = 'Должны ли мы применять эту лицензию к выбранной организации, а также к детям?';

$GLOBALS["lang"]['Should we consider a filtered port to be an open port - and therefore flag this IP as having a device attached?'] = 'Следует ли считать фильтрованный порт открытым портом и, следовательно, помечать этот IP как имеющий подключенное устройство?';

$GLOBALS["lang"]['Should we consider an open|filtered port to be an open port - and therefore flag this IP as having a device attached?'] = 'Должны ли мы считать открытый порт открытым портом и, следовательно, помечать этот IP как имеющий подключенное устройство?';

$GLOBALS["lang"]['Should we expose this group in the web interface.'] = 'Стоит ли разоблачать эту группу в веб-интерфейсе.';

$GLOBALS["lang"]['Should we expose this query in the list of reports under the Report menu in the web interface.'] = 'Если мы разоблачим этот запрос в списке отчетов в меню Отчет в веб-интерфейсе.';

$GLOBALS["lang"]['Should we expose this query in the list of reports under the Reports menu in the web interface.'] = 'Стоит ли раскрывать этот запрос в списке отчетов в меню Отчеты в веб-интерфейсе.';

$GLOBALS["lang"]['Should we install Open-Scap on the target machine.'] = 'Стоит ли устанавливать Open-Scap на целевую машину.';

$GLOBALS["lang"]['Should we match a device based mac address even if its a known likely duplicate from VMware.'] = 'Должны ли мы соответствовать Mac-адресу на основе устройства, даже если он является известным вероятным дубликатом от VMware?';

$GLOBALS["lang"]['Should we match a device based on its DNS fqdn.'] = 'Должны ли мы соответствовать устройству на основе его DNS fqdn?';

$GLOBALS["lang"]['Should we match a device based on its DNS hostname.'] = 'Должны ли мы соответствовать устройству на основе его имени хоста DNS?';

$GLOBALS["lang"]['Should we match a device based on its UUID.'] = 'Должны ли мы соответствовать устройству на основе его UUID?';

$GLOBALS["lang"]['Should we match a device based on its dbus id.'] = 'Должны ли мы соответствовать устройству на основе его идентификатора dbus.';

$GLOBALS["lang"]['Should we match a device based on its fqdn.'] = 'Мы должны сопоставить устройство на основе его fqdn.';

$GLOBALS["lang"]['Should we match a device based on its hostname and UUID.'] = 'Мы должны сопоставить устройство на основе его имени хоста и UUID.';

$GLOBALS["lang"]['Should we match a device based on its hostname and dbus id.'] = 'Должны ли мы соответствовать устройству на основе его имени хоста и идентификатора dbus.';

$GLOBALS["lang"]['Should we match a device based on its hostname and serial.'] = 'Должны ли мы соответствовать устройству на основе его имени хоста и серийного.';

$GLOBALS["lang"]['Should we match a device based on its ip if we have an existing device with no data.'] = 'Должны ли мы соответствовать устройству на основе его ip, если у нас есть существующее устройство без данных.';

$GLOBALS["lang"]['Should we match a device based on its ip.'] = 'Мы должны сопоставить устройство на основе его ip.';

$GLOBALS["lang"]['Should we match a device based on its mac address.'] = 'Должны ли мы соответствовать устройству на основе его Mac-адреса?';

$GLOBALS["lang"]['Should we match a device based on its serial and type.'] = 'Должны ли мы соответствовать устройству на основе его серийности и типа?';

$GLOBALS["lang"]['Should we match a device based on its serial number.'] = 'Мы должны сопоставить устройство на основе его серийного номера.';

$GLOBALS["lang"]['Should we match a device based only on its SNMP sysName and serial.'] = 'Должны ли мы соответствовать устройству, основанному только на его SNMP и серийном.';

$GLOBALS["lang"]['Should we match a device based only on its SNMP sysName.'] = 'Должны ли мы соответствовать устройству на основе только его SNMP sysName?';

$GLOBALS["lang"]['Should we match a device based only on its hostname.'] = 'Должны ли мы соответствовать устройству, основанному только на его имени хоста?';

$GLOBALS["lang"]['Should we ping the IP before attempting to scan it? If it does not respond to the ping, skip this device.'] = 'Нужно ли пинговать IP, прежде чем пытаться сканировать его? Если он не реагирует на пинг, пропустите это устройство.';

$GLOBALS["lang"]['Should we populate the external system from our local devices.'] = 'Мы должны заселить внешнюю систему от наших локальных устройств.';

$GLOBALS["lang"]['Should we run an audit and submit it (y/n).'] = 'Мы должны провести аудит и представить его (y/n).';

$GLOBALS["lang"]['Should we test for SNMP using UDP port 161.'] = 'Тестирование SNMP с использованием UDP-порта 161.';

$GLOBALS["lang"]['Should we test for SSH using TCP port 22.'] = 'Тестирование SSH с использованием TCP-порта 22.';

$GLOBALS["lang"]['Should we test for WMI using TCP port 135.'] = 'Тестирование WMI с использованием порта 135 TCP.';

$GLOBALS["lang"]['Should we uninstall the agent (y/n).'] = 'Следует ли удалять агент (y/n).';

$GLOBALS["lang"]['Should we use this method to authenticate user credentials. Set to <code>y</code> or <code>n</code>.'] = 'Следует ли использовать этот метод для аутентификации учетных данных пользователей. Настроить <code>y</code> или <code>n</code>.';

$GLOBALS["lang"]['Should we use this method to populate a users roles. The field <code>use_auth</code> must be set to <code>y</code> to use this. Set to <code>y</code> or <code>n</code>.'] = 'Следует ли использовать этот метод для заполнения ролей пользователей? Поле <code>use_auth</code> должны быть установлены <code>y</code> Чтобы использовать это. Настроить <code>y</code> или <code>n</code>.';

$GLOBALS["lang"]['Show All'] = 'Показать все';

$GLOBALS["lang"]['sid'] = 'Сид';

$GLOBALS["lang"]['Sid'] = 'Сид';

$GLOBALS["lang"]['sidebar'] = 'Боковая панель';

$GLOBALS["lang"]['Sidebar'] = 'Боковая панель';

$GLOBALS["lang"]['Sierra Leone'] = 'Сьерра-Леоне';

$GLOBALS["lang"]['Singapore'] = 'Сингапур';

$GLOBALS["lang"]['Site A'] = 'Сайт A';

$GLOBALS["lang"]['Site B'] = 'Сайт B';

$GLOBALS["lang"]['site_hours_a'] = 'Сайт Часы А';

$GLOBALS["lang"]['Site Hours A'] = 'Сайт Часы А';

$GLOBALS["lang"]['site_hours_b'] = 'Сайт Часы B';

$GLOBALS["lang"]['Site Hours B'] = 'Сайт Часы B';

$GLOBALS["lang"]['size'] = 'Размер';

$GLOBALS["lang"]['Size'] = 'Размер';

$GLOBALS["lang"]['slaves'] = 'Рабы';

$GLOBALS["lang"]['Slaves'] = 'Рабы';

$GLOBALS["lang"]['Slovakia (Slovak Republic)'] = 'Словакия (Словацкая Республика)';

$GLOBALS["lang"]['Slovenia'] = 'Словения';

$GLOBALS["lang"]['Smart Status'] = 'Умный статус';

$GLOBALS["lang"]['smversion'] = 'Смверсия';

$GLOBALS["lang"]['Smversion'] = 'Смверсия';

$GLOBALS["lang"]['Sneaky'] = 'Снежный';

$GLOBALS["lang"]['snmp_enterprise_id'] = 'Snmp Enterprise ID';

$GLOBALS["lang"]['Snmp Enterprise ID'] = 'Snmp Enterprise ID';

$GLOBALS["lang"]['snmp_enterprise_name'] = 'Название компании Snmp';

$GLOBALS["lang"]['Snmp Enterprise Name'] = 'Название компании Snmp';

$GLOBALS["lang"]['snmp_oid'] = 'Snmp Oid';

$GLOBALS["lang"]['Snmp Oid'] = 'Snmp Oid';

$GLOBALS["lang"]['snmp_timeout'] = 'Snmp тайм-аут';

$GLOBALS["lang"]['Snmp Timeout'] = 'Snmp тайм-аут';

$GLOBALS["lang"]['snmp_version'] = 'Версия Snmp';

$GLOBALS["lang"]['Snmp Version'] = 'Версия Snmp';

$GLOBALS["lang"]['socket'] = 'гнездо';

$GLOBALS["lang"]['Socket'] = 'гнездо';

$GLOBALS["lang"]['software'] = 'Программное обеспечение';

$GLOBALS["lang"]['Software'] = 'Программное обеспечение';

$GLOBALS["lang"]['Software Found Last 7 Days'] = 'Программное обеспечение найдено последние 7 дней';

$GLOBALS["lang"]['Software Found Today'] = 'Программное обеспечение сегодня';

$GLOBALS["lang"]['Software Found Yesterday'] = 'Программное обеспечение найдено вчера';

$GLOBALS["lang"]['software_key'] = 'Программный ключ';

$GLOBALS["lang"]['Software Key'] = 'Программный ключ';

$GLOBALS["lang"]['software_name'] = 'Программное имя';

$GLOBALS["lang"]['Software Name'] = 'Программное имя';

$GLOBALS["lang"]['Software Policies'] = 'Программная политика';

$GLOBALS["lang"]['software_revision'] = 'Пересмотр программного обеспечения';

$GLOBALS["lang"]['Software Revision'] = 'Пересмотр программного обеспечения';

$GLOBALS["lang"]['software_version'] = 'Версия программного обеспечения';

$GLOBALS["lang"]['Software Version'] = 'Версия программного обеспечения';

$GLOBALS["lang"]['Solaris'] = 'Солярий';

$GLOBALS["lang"]['Solomon Islands'] = 'Соломоновы Острова';

$GLOBALS["lang"]['Somalia, Somali Republic'] = 'Сомали, Сомалийская Республика';

$GLOBALS["lang"]['sound'] = 'Звук звука';

$GLOBALS["lang"]['Sound'] = 'Звук звука';

$GLOBALS["lang"]['source'] = 'Источник';

$GLOBALS["lang"]['Source'] = 'Источник';

$GLOBALS["lang"]['South Africa'] = 'Южная Африка';

$GLOBALS["lang"]['South Georgia and the South Sandwich Islands'] = 'Южная Георгия и Южные Сандвичевы острова';

$GLOBALS["lang"]['Spain'] = 'Испания';

$GLOBALS["lang"]['Spanish'] = 'испанский';

$GLOBALS["lang"]['Specific to Azure.'] = 'Специально для Azure.';

$GLOBALS["lang"]['Specific to OKTA.'] = 'Специально для ОКТА.';

$GLOBALS["lang"]['Specifies a comma-separated list of targets (no spaces) to be excluded from the scan. The list you pass in uses normal Nmap syntax, so it can include hostnames, CIDR netblocks, octet ranges, etc.'] = 'Указывает список целей (без пробелов), которые должны быть исключены из сканирования. Список, который вы передаете, использует обычный синтаксис Nmap, поэтому он может включать имена хостов, сетевые блоки CIDR, диапазоны октетов и т. Д.';

$GLOBALS["lang"]['speed'] = 'Скорость';

$GLOBALS["lang"]['Speed'] = 'Скорость';

$GLOBALS["lang"]['speed_down_a'] = 'Скорость снижается А.';

$GLOBALS["lang"]['Speed Down A'] = 'Скорость снижается А.';

$GLOBALS["lang"]['speed_down_b'] = 'Скорость B';

$GLOBALS["lang"]['Speed Down B'] = 'Скорость B';

$GLOBALS["lang"]['speed_up_a'] = 'Скорость A';

$GLOBALS["lang"]['Speed Up A'] = 'Скорость A';

$GLOBALS["lang"]['speed_up_b'] = 'Скорость B';

$GLOBALS["lang"]['Speed Up B'] = 'Скорость B';

$GLOBALS["lang"]['sql'] = 'ql';

$GLOBALS["lang"]['Sql'] = 'ql';

$GLOBALS["lang"]['Sri Lanka'] = 'Шри-Ланка';

$GLOBALS["lang"]['ssh_ports'] = 'Порты Ssh';

$GLOBALS["lang"]['Ssh Ports'] = 'Порты Ssh';

$GLOBALS["lang"]['ssh_timeout'] = 'Шш тайм-аут';

$GLOBALS["lang"]['Ssh Timeout'] = 'Шш тайм-аут';

$GLOBALS["lang"]['Stand-Alone'] = 'Одинокий';

$GLOBALS["lang"]['Standard'] = 'Стандарт';

$GLOBALS["lang"]['standard_id'] = 'Стандартный ID';

$GLOBALS["lang"]['Standard ID'] = 'Стандартный ID';

$GLOBALS["lang"]['standards'] = 'Стандарты';

$GLOBALS["lang"]['Standards'] = 'Стандарты';

$GLOBALS["lang"]['standards_policies'] = 'Стандартная политика';

$GLOBALS["lang"]['Standards Policies'] = 'Стандартная политика';

$GLOBALS["lang"]['standards_results'] = 'Результаты стандартов';

$GLOBALS["lang"]['Standards Results'] = 'Результаты стандартов';

$GLOBALS["lang"]['start_date'] = 'Дата начала';

$GLOBALS["lang"]['Start Date'] = 'Дата начала';

$GLOBALS["lang"]['start_mode'] = 'Режим Start';

$GLOBALS["lang"]['Start Mode'] = 'Режим Start';

$GLOBALS["lang"]['started_date'] = 'Дата начала';

$GLOBALS["lang"]['Started Date'] = 'Дата начала';

$GLOBALS["lang"]['state'] = 'государство';

$GLOBALS["lang"]['State'] = 'государство';

$GLOBALS["lang"]['Stats'] = 'Статистика';

$GLOBALS["lang"]['status'] = 'статус';

$GLOBALS["lang"]['Status'] = 'статус';

$GLOBALS["lang"]['Storage'] = 'хранение';

$GLOBALS["lang"]['storage_count'] = 'Счет хранения';

$GLOBALS["lang"]['Storage Count'] = 'Счет хранения';

$GLOBALS["lang"]['Storage-Area Network'] = 'Сеть складов-зон';

$GLOBALS["lang"]['string'] = 'Струна';

$GLOBALS["lang"]['String'] = 'Струна';

$GLOBALS["lang"]['sub_resource_id'] = 'Идентификатор субресурса';

$GLOBALS["lang"]['Sub Resource ID'] = 'Идентификатор субресурса';

$GLOBALS["lang"]['sub_type'] = 'Подтип';

$GLOBALS["lang"]['Sub Type'] = 'Подтип';

$GLOBALS["lang"]['subject_key_ident'] = 'Subject Ключевые слова';

$GLOBALS["lang"]['Subject Key Ident'] = 'Subject Ключевые слова';

$GLOBALS["lang"]['Submit'] = 'Представить';

$GLOBALS["lang"]['Submitted From'] = 'Представлено из';

$GLOBALS["lang"]['subnet'] = 'подсеть';

$GLOBALS["lang"]['Subnet'] = 'подсеть';

$GLOBALS["lang"]['Subscription ID'] = 'ID подписки';

$GLOBALS["lang"]['suburb'] = 'пригород';

$GLOBALS["lang"]['Suburb'] = 'пригород';

$GLOBALS["lang"]['Success'] = 'Успех';

$GLOBALS["lang"]['Sudan'] = 'Судан';

$GLOBALS["lang"]['Sudo Password'] = 'Sudo Password';

$GLOBALS["lang"]['Sudo Password (optional)'] = 'Sudo Password (необязательно)';

$GLOBALS["lang"]['suite'] = 'люкс';

$GLOBALS["lang"]['Suite'] = 'люкс';

$GLOBALS["lang"]['summaries'] = 'резюме';

$GLOBALS["lang"]['Summaries'] = 'резюме';

$GLOBALS["lang"]['Summary'] = 'Резюме';

$GLOBALS["lang"]['Sunday'] = 'воскресенье';

$GLOBALS["lang"]['supplier'] = 'поставщик';

$GLOBALS["lang"]['Supplier'] = 'поставщик';

$GLOBALS["lang"]['Support'] = 'Поддержка';

$GLOBALS["lang"]['Supported types are <code>subnet</code>, <code>seed</code> and <code>active directory</code>.'] = 'Поддерживаемые типы являются <code>subnet</code>, <code>seed</code> и <code>active directory</code>.';

$GLOBALS["lang"]['Suriname'] = 'Суринам';

$GLOBALS["lang"]['Svalbard & Jan Mayen Islands'] = 'Шпицберген и острова Ян-Майен';

$GLOBALS["lang"]['Swaziland'] = 'Свазиленд';

$GLOBALS["lang"]['Sweden'] = 'Швеция';

$GLOBALS["lang"]['switch_device_id'] = 'Идентификатор устройства Switch';

$GLOBALS["lang"]['Switch Device ID'] = 'Идентификатор устройства Switch';

$GLOBALS["lang"]['switch_port'] = 'Порт коммутации';

$GLOBALS["lang"]['Switch Port'] = 'Порт коммутации';

$GLOBALS["lang"]['Switzerland, Swiss Confederation'] = 'Швейцария, Швейцарская Конфедерация';

$GLOBALS["lang"]['Syrian Arab Republic'] = 'Сирийская Арабская Республика';

$GLOBALS["lang"]['sysContact'] = 'SysContact';

$GLOBALS["lang"]['SysContact'] = 'SysContact';

$GLOBALS["lang"]['sysDescr'] = 'SysDescr';

$GLOBALS["lang"]['SysDescr'] = 'SysDescr';

$GLOBALS["lang"]['sysLocation'] = 'SysLocation';

$GLOBALS["lang"]['SysLocation'] = 'SysLocation';

$GLOBALS["lang"]['sysName'] = 'Имя';

$GLOBALS["lang"]['SysName'] = 'Имя';

$GLOBALS["lang"]['sysObjectID'] = 'SysObjectID';

$GLOBALS["lang"]['SysObjectID'] = 'SysObjectID';

$GLOBALS["lang"]['sysUpTime'] = 'SysUpTime';

$GLOBALS["lang"]['SysUpTime'] = 'SysUpTime';

$GLOBALS["lang"]['system_component'] = 'Системный компонент';

$GLOBALS["lang"]['System Component'] = 'Системный компонент';

$GLOBALS["lang"]['System-Area Network'] = 'Сеть System-Area';

$GLOBALS["lang"]['TX Bitrate'] = 'TX Bitrate';

$GLOBALS["lang"]['TX Freq'] = 'TX Freq';

$GLOBALS["lang"]['TX Level'] = 'TX уровень';

$GLOBALS["lang"]['TX Power'] = 'TX Power';

$GLOBALS["lang"]['TX Profile'] = 'Профиль TX';

$GLOBALS["lang"]['table'] = 'Столик';

$GLOBALS["lang"]['Table'] = 'Столик';

$GLOBALS["lang"]['tag'] = 'Тег';

$GLOBALS["lang"]['Tag'] = 'Тег';

$GLOBALS["lang"]['tag_1'] = 'Тег 1';

$GLOBALS["lang"]['Tag 1'] = 'Тег 1';

$GLOBALS["lang"]['tag_2'] = 'Точка 2';

$GLOBALS["lang"]['Tag 2'] = 'Точка 2';

$GLOBALS["lang"]['tag_3'] = 'Тег 3';

$GLOBALS["lang"]['Tag 3'] = 'Тег 3';

$GLOBALS["lang"]['tags'] = 'Тэги';

$GLOBALS["lang"]['Tags'] = 'Тэги';

$GLOBALS["lang"]['Tags :: '] = 'Тэги: ';

$GLOBALS["lang"]['Taiwan'] = 'Тайвань';

$GLOBALS["lang"]['Tajikistan'] = 'Таджикистан';

$GLOBALS["lang"]['Tanzania'] = 'Танзания';

$GLOBALS["lang"]['task'] = 'Задание';

$GLOBALS["lang"]['Task'] = 'Задание';

$GLOBALS["lang"]['tasks'] = 'Задачи';

$GLOBALS["lang"]['Tasks'] = 'Задачи';

$GLOBALS["lang"]['tcp_ports'] = 'Порты Tcp';

$GLOBALS["lang"]['Tcp Ports'] = 'Порты Tcp';

$GLOBALS["lang"]['tenant'] = 'Арендатор';

$GLOBALS["lang"]['Tenant'] = 'Арендатор';

$GLOBALS["lang"]['ternary'] = 'Тернард';

$GLOBALS["lang"]['Ternary'] = 'Тернард';

$GLOBALS["lang"]['Test 1'] = 'Испытание 1';

$GLOBALS["lang"]['Test 2'] = 'Испытание 2';

$GLOBALS["lang"]['Test 3'] = 'Испытание 3';

$GLOBALS["lang"]['test_minutes'] = 'Тестовые минуты';

$GLOBALS["lang"]['Test Minutes'] = 'Тестовые минуты';

$GLOBALS["lang"]['test_os'] = 'Тест Os';

$GLOBALS["lang"]['Test Os'] = 'Тест Os';

$GLOBALS["lang"]['test_subnet'] = 'Тестирование Subnet';

$GLOBALS["lang"]['Test Subnet'] = 'Тестирование Subnet';

$GLOBALS["lang"]['tests'] = 'Испытания';

$GLOBALS["lang"]['Tests'] = 'Испытания';

$GLOBALS["lang"]['Text'] = 'Текст';

$GLOBALS["lang"]['Thailand'] = 'Таиланд';

$GLOBALS["lang"]['The Active Directory domain to retrieve a list of subnets from.'] = 'Домен Active Directory для извлечения списка подсетей.';

$GLOBALS["lang"]['The Active Directory server to retrieve a list of subnets from.'] = 'Сервер Active Directory для извлечения списка подсетей.';

$GLOBALS["lang"]['The Automatable metric captures the answer to the question <strong>Can an attacker automate exploitation events for this vulnerability across multiple targets?</strong> based on steps 1-4 of the kill chain. These steps are reconnaissance, weaponization, delivery, and exploitation (Not Defined, No, Yes).'] = 'Автоматизированная метрика фиксирует ответ на вопрос <strong>Может ли злоумышленник автоматизировать события эксплуатации для этой уязвимости?</strong> На основе этапов 1-4 цепи убийства. Эти шаги являются разведкой, вооружением, доставкой и эксплуатацией (не определено, нет, да).';

$GLOBALS["lang"]['The CVE identifier.'] = 'Идентификатор CVE.';

$GLOBALS["lang"]['The Cloud that owns this item. Links to <code>clouds.id</code>.'] = 'Облако, которому принадлежит этот предмет. Ссылки на <code>clouds.id</code>.';

$GLOBALS["lang"]['The Group used to run the Baseline. Links to <code>groups.id</code>.'] = 'Группа раньше управляла базой. Ссылки на <code>groups.id</code>.';

$GLOBALS["lang"]['The ID from the devices table (the devices.name will be displayed) of the NTU at this end of the connection. Links to <code>devices.id</code>.'] = 'Идентификатор из таблицы устройств (название устройств будет отображаться) NTU на этом конце соединения. Ссылки на <code>devices.id</code>.';

$GLOBALS["lang"]['The ID from the imported benchmark policy.'] = 'Идентификатор из импортного эталонного полиса.';

$GLOBALS["lang"]['The ID from the locations table (the locations.name will be displayed) of this end of the connection. Links to <code>locations.id</code>. The A location is usually the <code>FROM</code> location.'] = 'Идентификатор из таблицы местоположений (местоположение.имя будет отображаться) этого конца соединения. Ссылки на <code>locations.id</code>. Местоположение обычно является <code>FROM</code> местоположение.';

$GLOBALS["lang"]['The ID from the locations table (the locations.name will be displayed) of this end of the connection. Links to <code>locations.id</code>. The B location is usually the <code>TO</code> location.'] = 'Идентификатор из таблицы местоположений (местоположение.имя будет отображаться) этого конца соединения. Ссылки на <code>locations.id</code>. Местоположение Б обычно является <code>TO</code> местоположение.';

$GLOBALS["lang"]['The ID of the associated device (if any). Links to <code>devices.id</code>.'] = 'Идентификатор соответствующего устройства (если таковое имеется). Ссылки на <code>devices.id</code>.';

$GLOBALS["lang"]['The ID of the associated discovery. Linked to <code>discoveries.id</code>'] = 'Идентификатор связанного открытия. связанный с <code>discoveries.id</code>';

$GLOBALS["lang"]['The ID of the item of the associated type.'] = 'Идентификатор элемента связанного типа.';

$GLOBALS["lang"]['The ID of this orgs parent org. Linked to <code>orgs.id</code>'] = 'Идентификатор этой родительской организации. связанный с <code>orgs.id</code>';

$GLOBALS["lang"]['The ID provided by the provider.'] = 'Идентификатор, предоставленный провайдером.';

$GLOBALS["lang"]['The ID retrieved from a Cloud discovery.'] = 'Идентификатор, полученный из Облака.';

$GLOBALS["lang"]['The IP address of this collector used to communicate with the server.'] = 'IP-адрес этого коллектора используется для связи с сервером.';

$GLOBALS["lang"]['The IP of the device to start a seed discovery with.'] = 'IP устройства для начала обнаружения семян.';

$GLOBALS["lang"]['The IP of the external interface.'] = 'IP внешнего интерфейса.';

$GLOBALS["lang"]['The IP of the internal interface.'] = 'IP внутреннего интерфейса.';

$GLOBALS["lang"]['The ISP or Telco providing this link.'] = 'ISP или Telco предоставляют эту ссылку.';

$GLOBALS["lang"]['The JSON record from Mitre.'] = 'Запись JSON от Митра.';

$GLOBALS["lang"]['The JSON record from the NVD feed.'] = 'Запись JSON с канала NVD.';

$GLOBALS["lang"]['The LDAP OU of this user (if LDAP is used).'] = 'LDAP OU этого пользователя (если используется LDAP).';

$GLOBALS["lang"]['The Location that contains this network. Links to <code>locations.id</code>.'] = 'Местоположение, содержащее эту сеть. Ссылки на <code>locations.id</code>.';

$GLOBALS["lang"]['The NVD assigned base status.'] = 'NVD присваивает статус базы.';

$GLOBALS["lang"]['The Nmap timing preset.'] = 'Время Nmap заранее установлено.';

$GLOBALS["lang"]['The OS this package should be reported against. Blank for all. Use the percent sign % as a wildcard. Will be tested against os_group, os_family and os_name in that order.'] = 'ОС этот пакет следует сообщать против. Бланк для всех. Используйте знак % в качестве wildcard. В этом порядке будут протестированы os_group, os_family и os_name.';

$GLOBALS["lang"]['The Open-AudIT API'] = 'Open-AudIT API';

$GLOBALS["lang"]['The Open-AudIT id of the linked cloud. Links to <code>clouds.id</code>.'] = 'Идентификатор Open-AudIT связанного облака. Ссылки на <code>clouds.id</code>.';

$GLOBALS["lang"]['The Open-AudIT server code was exeucted within this file.'] = 'Открытое осуждение В этом файле был выделен код ИТ-сервера.';

$GLOBALS["lang"]['The Open-AudIT server code was exeucted within this function.'] = 'Открытое осуждение В рамках этой функции был создан код ИТ-сервера.';

$GLOBALS["lang"]['The Organisation that owns this item. Links to <code>orgs.id</code>.'] = 'Организация, которой принадлежит данный пункт. Ссылки на <code>orgs.id</code>.';

$GLOBALS["lang"]['The Process Identifier of the running associated discovery.'] = 'Идентификатор процесса запуска связанного открытия.';

$GLOBALS["lang"]['The RU positon of the top of this device.'] = 'Позиция RU верхней части этого устройства.';

$GLOBALS["lang"]['The SNMP community string.'] = 'Строка сообщества SNMP.';

$GLOBALS["lang"]['The SNMP v3 Authentication Passphrase.'] = 'SNMP v3 Authentication Passphrase.';

$GLOBALS["lang"]['The SNMP v3 Authentication Protocol.'] = 'Протокол аутентификации SNMP v3.';

$GLOBALS["lang"]['The SNMP v3 Privacy Passphrase.'] = 'SNMP v3 Privacy Passphrase.';

$GLOBALS["lang"]['The SNMP v3 Privacy Protocol.'] = 'Протокол конфиденциальности SNMP v3.';

$GLOBALS["lang"]['The SNMP v3 Security Level.'] = 'Уровень безопасности SNMP v3.';

$GLOBALS["lang"]['The SNMP v3 Security Name.'] = 'SNMP v3 имя безопасности.';

$GLOBALS["lang"]['The SNMPv3 context Engine ID (optional).'] = 'SNMPv3 context Engine ID (необязательно).';

$GLOBALS["lang"]['The SNMPv3 context Name (optional).'] = 'Контекстное имя SNMPv3 (необязательно).';

$GLOBALS["lang"]['The URL of the external system.'] = 'URL внешней системы.';

$GLOBALS["lang"]['The URL of your Open-AudIT Server that this Collector will report to (no trailing slash).'] = 'URL вашего Open-AudIT Сервер, на который будет отчитываться этот Коллекционер (без слежки).';

$GLOBALS["lang"]['The URL the audit scripts should submit their result to.'] = 'URL-адрес, на который должны быть отправлены сценарии аудита.';

$GLOBALS["lang"]['The actual full name of this user.'] = 'Полное имя этого пользователя.';

$GLOBALS["lang"]['The associated baseline. Links to <code>baselines.id</code>.'] = 'Связанный базовый уровень. Ссылки на <code>baselines.id</code>.';

$GLOBALS["lang"]['The associated discovery (if required). Links to <code>discoveries.id</code>.'] = 'Связанное открытие (при необходимости). Ссылки на <code>discoveries.id</code>.';

$GLOBALS["lang"]['The attribute to test (from the <code>devices</code> table).'] = 'Проверка (испытание). <code>devices</code> столик).';

$GLOBALS["lang"]['The attribute to test (must match an external field name from below).'] = 'Атрибут для тестирования (должен соответствовать внешнему названию поля снизу).';

$GLOBALS["lang"]['The audit script upon which to base your customisations.'] = 'Сценарий аудита, на котором основываются ваши настройки.';

$GLOBALS["lang"]['The base path from which to search for Users.'] = 'Базовый путь, с которого следует искать пользователей.';

$GLOBALS["lang"]['The benchmark type.'] = 'Тип бенчмарка.';

$GLOBALS["lang"]['The building the rack is located in.'] = 'В здании расположена стойка.';

$GLOBALS["lang"]['The calculated number of devices to be created externally.'] = 'Расчетное количество устройств, создаваемых извне.';

$GLOBALS["lang"]['The calculated number of devices to be created in Open-AudIT.'] = 'Расчетное количество устройств, которые будут созданы в Open-AudIT.';

$GLOBALS["lang"]['The collectors internal IP used when it runs a discovery.'] = 'Внутренний IP-адрес коллектора используется, когда он запускает открытие.';

$GLOBALS["lang"]['The column name from the foreign table. Should be one of: class, environment, status, type or menu_category.'] = 'Название колонки из заграничного стола. Должно быть одно из: класс, среда, статус, тип или категория меню.';

$GLOBALS["lang"]['The command executed upon the target device or Open-AudIT server code executed during discovery.'] = 'Команда выполняется на целевом устройстве или серверном коде Open-AudIT, выполняемом во время обнаружения.';

$GLOBALS["lang"]['The configuration of your cluster can be: <code>active/active</code>, <code>active/passive</code>, <code>N+1</code>, <code>N+M</code>, <code>N-to-1</code>, <code>N-to-N</code>, <code>other</code> or blank.'] = 'Конфигурация вашего кластера может быть: <code>active/active</code>, <code>active/passive</code>, <code>N+1</code>, <code>N+M</code>, <code>N-to-1</code>, <code>N-to-N</code>, <code>other</code> Или пустой.';

$GLOBALS["lang"]['The credentials password. If the credentials are an SSH Key, this is the password used to unlock the key and is optional.'] = 'Пароль учетных данных. Если учетные данные являются SSH-ключом, это пароль, используемый для разблокировки ключа, и является необязательным.';

$GLOBALS["lang"]['The credentials username.'] = 'Имя пользователя.';

$GLOBALS["lang"]['The current status of the Cloud Discovery.'] = 'Текущее состояние Cloud Discovery.';

$GLOBALS["lang"]['The current status of the discovery.'] = 'Текущий статус открытия.';

$GLOBALS["lang"]['The dashboard that will be shown by default for this user. Links to <code>dashboards.id</code>.'] = 'Панель инструментов, которая будет показана по умолчанию для этого пользователя. Ссылки на <code>dashboards.id</code>.';

$GLOBALS["lang"]['The database version and web version are inconsistent.'] = 'Версия базы данных и веб-версия непоследовательны.';

$GLOBALS["lang"]['The date of license expiration.'] = 'Дата истечения лицензии.';

$GLOBALS["lang"]['The date the software is discontinued by the manufacturer. Usually replaced by a newer version. Maintenance may still be available.'] = 'Дата прекращения использования программного обеспечения производителем. Обычно заменяется более новой версией. Обслуживание может быть доступно.';

$GLOBALS["lang"]['The date the software no longer receives updates and is effectively discontinued altogether. Maintenance is discontinued.'] = 'Дата, когда программное обеспечение больше не получает обновлений и фактически полностью прекращено. Техническое обслуживание прекращено.';

$GLOBALS["lang"]['The date this item was changed or added (read only). NOTE - This is the timestamp from the server.'] = 'Дата, когда этот пункт был изменен или добавлен (только для чтения). ПРИМЕЧАНИЕ: Это временная метка с сервера.';

$GLOBALS["lang"]['The date/time when this result was created.'] = 'Дата/время, когда был создан этот результат.';

$GLOBALS["lang"]['The day of the month when this task should execute (* for every day).'] = 'День месяца, когда эта задача должна быть выполнена (* на каждый день).';

$GLOBALS["lang"]['The day of the week when this task should execute (* for every day).'] = 'День недели, когда эта задача должна выполняться (* на каждый день).';

$GLOBALS["lang"]['The default language assigned to any user created by this method.'] = 'Язык по умолчанию присваивается любому пользователю, созданному этим методом.';

$GLOBALS["lang"]['The device must respond to an Nmap ping before it is considered online.'] = 'Устройство должно реагировать на пинг Nmap, прежде чем оно будет рассмотрено в Интернете.';

$GLOBALS["lang"]['The device within Open-AudIT. Links to <code>devices.id</code>.'] = 'Устройство в составе Open-AudIT. Ссылки на <code>devices.id</code>.';

$GLOBALS["lang"]['The direct link for the script is'] = 'Прямая ссылка на сценарий — это';

$GLOBALS["lang"]['The email address of the reciever'] = 'Адрес электронной почты рецивера';

$GLOBALS["lang"]['The enterprise binary from FirstWave is required for a license. Please download Open-AudIT from'] = 'Бинарный бизнес от FirstWave требуется для получения лицензии. Скачать Open-AudIT из';

$GLOBALS["lang"]['The entire associated baseline this result is from.'] = 'Вся связанная с этим базовая линия является результатом.';

$GLOBALS["lang"]['The externally referenced location ID. Usually populated by Cloud audits.'] = 'Внешний идентификатор местоположения. Обычно это облачные аудиты.';

$GLOBALS["lang"]['The first time that Open-AudIT retrieved details of this device.'] = 'Впервые компания Open-AudIT обнаружила детали этого устройства.';

$GLOBALS["lang"]['The floor the rack is located on.'] = 'На полу расположена стойка.';

$GLOBALS["lang"]['The foreign table to reference. Should be one of: devices, locations, orgs or queries.'] = 'Зарубежная таблица для ссылки. Должно быть одно из: устройств, местоположений, организаций или запросов.';

$GLOBALS["lang"]['The format used for the output to be emailed.'] = 'Формат, используемый для вывода, который должен быть отправлен по электронной почте.';

$GLOBALS["lang"]['The fully qualified column upon which to group by. NOTE: When type = traffic, this represents the red query id.'] = 'Полностью квалифицированная колонка, по которой можно сгруппироваться. ПРИМЕЧАНИЕ: Когда тип = трафик, это представляет собой красный идентификатор запроса.';

$GLOBALS["lang"]['The fully qualified table.column. Multiple may be provided, separated by a comma (no spaces).'] = 'Полностью квалифицированный table.column. Может быть предоставлено несколько, разделенных запятой (без пробелов).';

$GLOBALS["lang"]['The generated SQL query to test for this vulnerability. This field can be edited to correct the query as required.'] = 'Сгенерированный SQL-запрос для проверки этой уязвимости. Это поле может быть отредактировано для исправления запроса по мере необходимости.';

$GLOBALS["lang"]['The group of devices on which the baseline was run against.'] = 'Группа устройств, на которых была запущена базовая линия.';

$GLOBALS["lang"]['The group that provides a list of devices for the integration. Links to <code>groups.id</code>.'] = 'Группа, которая предоставляет список устройств для интеграции. Ссылки на <code>groups.id</code>.';

$GLOBALS["lang"]['The hour of the day when this task should execute (* for every hour).'] = 'Час, когда эта задача должна выполняться (* на каждый час).';

$GLOBALS["lang"]['The id of the linked device. Links to <code>devices.id</code>'] = 'идентификатор связанного устройства. Ссылки на <code>devices.id</code>';

$GLOBALS["lang"]['The identifier column (integer) in the database (read only).'] = 'Колонка идентификатора (целое число) в базе данных (только чтение).';

$GLOBALS["lang"]['The importance of this baseline (not used yet).'] = 'Значение этого базового уровня (пока не используется).';

$GLOBALS["lang"]['The integer of severity.'] = 'Целое число тяжести.';

$GLOBALS["lang"]['The ip address of the Auth method.'] = 'IP-адрес метода Auth.';

$GLOBALS["lang"]['The language to translate the web interface into for the user.'] = 'Язык для перевода веб-интерфейса для пользователя.';

$GLOBALS["lang"]['The last date and time this item was executed (read only).'] = 'Последняя дата и время выполнения этого пункта (только чтение).';

$GLOBALS["lang"]['The last time that Open-AudIT retrieved details of this device.'] = 'В последний раз Open-AudIT извлекла детали этого устройства.';

$GLOBALS["lang"]['The last time this benchmarks was executed.'] = 'В последний раз эти тесты были выполнены.';

$GLOBALS["lang"]['The last time this integration was run.'] = 'В последний раз эта интеграция проходила.';

$GLOBALS["lang"]['The line number assigned by the provider to the line at this end of the connection.'] = 'Номер линии, присвоенный поставщиком линии на этом конце соединения.';

$GLOBALS["lang"]['The location the rack is located in. Links to <code>locations.id</code>.'] = 'Месторасположение, в котором находится стойка. Ссылки на <code>locations.id</code>.';

$GLOBALS["lang"]['The locations address.'] = 'Местонахождение адреса.';

$GLOBALS["lang"]['The locations area.'] = 'Местоположение.';

$GLOBALS["lang"]['The locations city.'] = 'Местоположение города.';

$GLOBALS["lang"]['The locations country.'] = 'Местоположение страны.';

$GLOBALS["lang"]['The locations district.'] = 'Район локаций.';

$GLOBALS["lang"]['The locations latitude.'] = 'Местоположение широты.';

$GLOBALS["lang"]['The locations level.'] = 'Уровень расположения.';

$GLOBALS["lang"]['The locations longitude.'] = 'Местоположение долготы.';

$GLOBALS["lang"]['The locations phone.'] = 'Местонахождение телефона.';

$GLOBALS["lang"]['The locations postcode.'] = 'Почтовый индекс локаций.';

$GLOBALS["lang"]['The locations region.'] = 'Местоположение региона.';

$GLOBALS["lang"]['The locations room.'] = 'Комната расположения.';

$GLOBALS["lang"]['The locations state.'] = 'Местоположение штата.';

$GLOBALS["lang"]['The locations suburb.'] = 'Места в пригороде.';

$GLOBALS["lang"]['The locations suite.'] = 'Местонахождение люкс.';

$GLOBALS["lang"]['The maximum physical weight (in KGs) this rack can hold.'] = 'Максимальный физический вес (в КГ) эта стойка может удерживать.';

$GLOBALS["lang"]['The maximum total BTUs this rack is rated for.'] = 'Максимальная сумма BTU, для которой эта стойка рассчитана.';

$GLOBALS["lang"]['The minute of the hour when this task should execute (* for every minute).'] = 'Минута часа, когда эта задача должна выполняться (* на каждую минуту).';

$GLOBALS["lang"]['The month of the year when this task should execute (* for every month).'] = 'Месяц года, когда эта задача должна быть выполнена (* за каждый месяц).';

$GLOBALS["lang"]['The name given to this item.'] = 'Название, данное этому пункту.';

$GLOBALS["lang"]['The name given to this item. Ideally it should be unique.'] = 'Название, данное этому пункту. В идеале он должен быть уникальным.';

$GLOBALS["lang"]['The name given to this user (used to login). Ideally it should be unique.'] = 'Имя, данное этому пользователю (используется для входа в систему). В идеале он должен быть уникальным.';

$GLOBALS["lang"]['The name of the associated cloud (if required).'] = 'Название соответствующего облака (при необходимости).';

$GLOBALS["lang"]['The name of the software package, as audited by Open-AudIT. Use the percent sign % as a wildcard.'] = 'Название программного пакета, проверенного Open-AudIT. Используйте знак % в качестве wildcard.';

$GLOBALS["lang"]['The name of the user who last changed or added this item (read only).'] = 'Имя пользователя, который в последний раз менял или добавлял этот элемент (только для чтения).';

$GLOBALS["lang"]['The name provided by the provider.'] = 'Название, предоставленное поставщиком.';

$GLOBALS["lang"]['The network in the format 192.168.1.0/24.'] = 'Сеть в формате 192.168.1.0/24.';

$GLOBALS["lang"]['The network subnet to execute the discovery on.'] = 'Сетевая подсеть для выполнения открытия.';

$GLOBALS["lang"]['The number of RUs this device occupies.'] = 'Количество RU занимает это устройство.';

$GLOBALS["lang"]['The number of associated locations. Links to <code>locations.cloud_id</code>.'] = 'Количество связанных локаций. Ссылки на <code>locations.cloud_id</code>.';

$GLOBALS["lang"]['The number of associated networks. Links to <code>networks.cloud_id</code>.'] = 'Количество связанных сетей. Ссылки на <code>networks.cloud_id</code>.';

$GLOBALS["lang"]['The number of audited devices in this cloud. Links to <code>devices.cloud_id</code> and <code>devices.serial</code>.'] = 'Количество проверенных устройств в этом облаке. Ссылки на <code>devices.cloud_id</code> и <code>devices.serial</code>.';

$GLOBALS["lang"]['The number of critical severity vulnerabilities held by FirstWave (not in your database).'] = 'Количество критических уязвимостей, удерживаемых FirstWave (не в базе данных).';

$GLOBALS["lang"]['The number of devices found by this discovery.'] = 'Количество устройств, найденных этим открытием.';

$GLOBALS["lang"]['The number of devices in the associated group.'] = 'Количество устройств в ассоциированной группе.';

$GLOBALS["lang"]['The number of devices in this cloud with a state of running. Links to <code>devices.cloud_id</code> and <code>devices.instance_state</code>.'] = 'Количество устройств в этом облаке с состоянием работы. Ссылки на <code>devices.cloud_id</code> и <code>devices.instance_state</code>.';

$GLOBALS["lang"]['The number of devices in this cloud with a state of stopped. Links to <code>devices.cloud_id</code> and <code>devices.instance_state</code>.'] = 'Количество устройств в этом облаке с состоянием остановлено. Ссылки на <code>devices.cloud_id</code> и <code>devices.instance_state</code>.';

$GLOBALS["lang"]['The number of devices in this cloud. Links to <code>devices.cloud_id</code>.'] = 'Количество устройств в этом облаке. Ссылки на <code>devices.cloud_id</code>.';

$GLOBALS["lang"]['The number of devices this benchmark will be executed upon. Derived from <code>benchmarks.devices</code>.'] = 'Количество устройств, на которых будет выполняться эталон. полученный из <code>benchmarks.devices</code>.';

$GLOBALS["lang"]['The number of devices to limit this discovery to.'] = 'Количество устройств, чтобы ограничить это открытие.';

$GLOBALS["lang"]['The number of high severity vulnerabilities held by FirstWave (not in your database).'] = 'Количество уязвимостей высокой степени уязвимости, хранящихся в FirstWave (не в вашей базе данных).';

$GLOBALS["lang"]['The number of low severity vulnerabilities held by FirstWave (not in your database).'] = 'Количество уязвимостей с низкой степенью серьезности, хранящихся в FirstWave (не в вашей базе данных).';

$GLOBALS["lang"]['The number of medium severity vulnerabilities held by FirstWave (not in your database).'] = 'Количество уязвимостей средней степени тяжести, удерживаемых FirstWave (не в вашей базе данных).';

$GLOBALS["lang"]['The number of purchased licenses.'] = 'Количество приобретенных лицензий.';

$GLOBALS["lang"]['The number of seconds to try and communicate with the target IP.'] = 'Количество секунд, чтобы попытаться связаться с целевым IP.';

$GLOBALS["lang"]['The number of vulnerabilities without a severity held by FirstWave (not in your database).'] = 'Количество уязвимостей без серьезности, удерживаемых FirstWave (не в вашей базе данных).';

$GLOBALS["lang"]['The optional secondary column. NOTE: When type = traffic, this represents the yellow query id.'] = 'Необязательная вторичная колонка. Примечание: Когда тип = трафик, это представляет собой желтый идентификатор запроса.';

$GLOBALS["lang"]['The optional third column. NOTE: When type = traffic, this represents the green query id.'] = 'Факультативная третья колонка. Примечание: Когда тип = трафик, это представляет собой зеленый идентификатор запроса.';

$GLOBALS["lang"]['The orientation of this device.'] = 'Ориентация этого устройства.';

$GLOBALS["lang"]['The password for the dn_account attribute.'] = 'Пароль для атрибута dn_account.';

$GLOBALS["lang"]['The password used to access the external system.'] = 'Пароль используется для доступа к внешней системе.';

$GLOBALS["lang"]['The path to the file or directory.'] = 'Путь к файлу или каталогу.';

$GLOBALS["lang"]['The path to the file or directory. Directories should end with a trailing slash.'] = 'Путь к файлу или каталогу. Каталоги должны заканчиваться скользкой косой.';

$GLOBALS["lang"]['The physical depth (in CMs) of the rack.'] = 'Физическая глубина (в CM) стойки.';

$GLOBALS["lang"]['The physical height (in CMs) of the rack.'] = 'Физическая высота (в CM) стойки.';

$GLOBALS["lang"]['The physical weight (in KGs) of the rack at present.'] = 'Физический вес (в KG) стойки в настоящее время.';

$GLOBALS["lang"]['The physical weight (in KGs) of the rack when empty.'] = 'Физический вес (в KG) стойки, когда она пуста.';

$GLOBALS["lang"]['The physical width (in CMs) of the rack.'] = 'Физическая ширина (в CM) стойки.';

$GLOBALS["lang"]['The pod (if any) that this rack is part of.'] = '(если таковой имеется), то эта стойка является частью.';

$GLOBALS["lang"]['The power circuit this rack attaches to.'] = 'К силовой цепи прикрепляется эта стойка.';

$GLOBALS["lang"]['The primary database table upon which to base this widget.'] = 'Основная таблица базы данных, на которой основан этот виджет.';

$GLOBALS["lang"]['The process identifier of this queue item.'] = 'Идентификатор процесса этой очереди.';

$GLOBALS["lang"]['The process that was used last to retrieve details about the device'] = 'Процесс, который использовался в последний раз для извлечения деталей об устройстве';

$GLOBALS["lang"]['The query that provides a list of devices for the integration. Links to <code>queries.id</code>.'] = 'Запрос, который предоставляет список устройств для интеграции. Ссылки на <code>queries.id</code>.';

$GLOBALS["lang"]['The rack asset number.'] = 'Номер стойки актива.';

$GLOBALS["lang"]['The rack asset tag.'] = 'Тег стойки актива.';

$GLOBALS["lang"]['The rack bar code.'] = 'Штрих-код стойки.';

$GLOBALS["lang"]['The rack model.'] = 'Модель стойки.';

$GLOBALS["lang"]['The rack serial.'] = 'Сериал о стойке.';

$GLOBALS["lang"]['The rack series.'] = 'Серия стойки.';

$GLOBALS["lang"]['The rack this device is located in. Links to <code>racks.id</code>.'] = 'В стойке расположено это устройство. Ссылки на <code>racks.id</code>.';

$GLOBALS["lang"]['The recommended process of addressing and fixing identified security vulnerabilities. This typically involves applying patches, updates, or other measures to eliminate the risk posed by the vulnerabilities.'] = 'Рекомендуемый процесс устранения и исправления выявленных уязвимостей безопасности. Обычно это включает в себя использование патчей, обновлений или других мер для устранения риска, связанного с уязвимостями.';

$GLOBALS["lang"]['The regular domain notation of your directory. Eg - <code>open-audit.lan</code>.'] = 'Обычная нотация вашего каталога. Эг - <code>open-audit.lan</code>.';

$GLOBALS["lang"]['The result of the command.'] = 'Результат командования.';

$GLOBALS["lang"]['The room the rack is located in.'] = 'Комната, в которой находится стойка.';

$GLOBALS["lang"]['The row the rack is located in.'] = 'Рядом расположена стойка.';

$GLOBALS["lang"]['The secret key used in conjunction with your AWS EC2 API key.'] = 'Секретный ключ используется в сочетании с ключом API AWS EC2.';

$GLOBALS["lang"]['The software end-of-life date.'] = 'Дата окончания срока службы программного обеспечения.';

$GLOBALS["lang"]['The software end-of-service-life date.'] = 'Дата окончания срока службы программного обеспечения.';

$GLOBALS["lang"]['The specific database column from the specified database table.'] = 'Конкретный столбец базы данных из указанной таблицы баз данных.';

$GLOBALS["lang"]['The specific database table.'] = 'Конкретная таблица баз данных.';

$GLOBALS["lang"]['The standard Nmap timing options. We usually use -T4 (Aggressive) as this is recommended for a decent broadband or ethernet connection.'] = 'Стандартные варианты Nmap. Обычно мы используем -T4 (Агрессивный), так как это рекомендуется для достойного широкополосного или эфирного соединения.';

$GLOBALS["lang"]['The status of this integration'] = 'Статус этой интеграции';

$GLOBALS["lang"]['The status of this queued item.'] = 'Состояние этого стоящего в очереди пункта.';

$GLOBALS["lang"]['The target IP this log entry referers to (if any).'] = 'Целевой IP, к которому относится этот вход в журнал (если таковой имеется).';

$GLOBALS["lang"]['The template for the link to be generated per result line.'] = 'Шаблон для ссылки, генерируемой на линию результата.';

$GLOBALS["lang"]['The text for the bottom of the chart in a line chart (only).'] = 'Текст для нижней части диаграммы в линейной диаграмме (только).';

$GLOBALS["lang"]['The text that is displayed.'] = 'Текст, который отображается.';

$GLOBALS["lang"]['The timestamp after which, this task should run. For example, run a task after the 1st June 2017 at 10am, set it to <code>2017-06-01 09:59:00</code>. This value should be zero padded (ie, 09, not 9). This value defaults to <code>2000-01-01 00:00:00</code> which means by default, a scheduled task will run at next scheduled execution time.'] = 'Временная метка, после которой эта задача должна выполняться. Например, запустить задание после 1 июня 2017 года в 10 утра, установить его <code>2017-06-01 09:59:00</code>. Это значение должно быть нулевым (т.е. 09, а не 9). Это значение по умолчанию для <code>2000-01-01 00:00:00</code> Это означает, что по умолчанию запланированная задача будет выполняться в следующее запланированное время выполнения.';

$GLOBALS["lang"]['The top 10, 100 or 1000 (or none) TCP ports commonly in use according to Nmap.'] = 'Топ-10, 100 или 1000 (или ни один) портов TCP, обычно используемых в соответствии с Nmap.';

$GLOBALS["lang"]['The top 10, 100 or 1000 (or none) UDP ports commonly in use according to Nmap.'] = 'Топ-10, 100 или 1000 (или ни одного) UDP-портов, обычно используемых в соответствии с Nmap.';

$GLOBALS["lang"]['The total BTU output by this rack.'] = 'Общий выход BTU по этой стойке.';

$GLOBALS["lang"]['The type of device.'] = 'Тип устройства.';

$GLOBALS["lang"]['The type of organisation.'] = 'Тип организации.';

$GLOBALS["lang"]['The type of rack (compute, power, network, etc).'] = 'Тип стойки (компьютер, мощность, сеть и т.д.).';

$GLOBALS["lang"]['The type of task to run. One of: baseline, benchmark, cloud discovery, discovery, integration, report, query.'] = 'Тип задачи для выполнения. Один из них: базовый, бенчмарк, облачное открытие, обнаружение, интеграция, отчет, запрос.';

$GLOBALS["lang"]['The type of the integration (usually named after the external system).'] = 'Тип интеграции (обычно названный в честь внешней системы).';

$GLOBALS["lang"]['The unique identifier of this server.'] = 'Уникальный идентификатор этого сервера.';

$GLOBALS["lang"]['The user account this collector uses. Links to <code>users.id</code>.'] = 'Учетная запись пользователя, которую использует этот коллектор. Ссылки на <code>users.id</code>.';

$GLOBALS["lang"]['The username used to access the external system.'] = 'Имя пользователя используется для доступа к внешней системе.';

$GLOBALS["lang"]['The users email address.'] = 'Адрес электронной почты пользователей.';

$GLOBALS["lang"]['The usual hours of operation at this site.'] = 'Обычные часы работы на этом участке.';

$GLOBALS["lang"]['The value assigned to the item.'] = 'Значение, присвоенное предмету.';

$GLOBALS["lang"]['The value that is stored for this particular item.'] = 'Значение, которое хранится для этого конкретного элемента.';

$GLOBALS["lang"]['The vendor name as per CPE entries.'] = 'Имя поставщика согласно записям CPE.';

$GLOBALS["lang"]['The vendor taken from the CPE.'] = 'Продавец взят из CPE.';

$GLOBALS["lang"]['The web directory on the host that Open-AudIT is installed (requires a trailing slash).'] = 'Веб-каталог на хосте, на котором установлен Open-AudIT (требуется следующая косая черта).';

$GLOBALS["lang"]['The widget at position '] = 'Виджет в позиции ';

$GLOBALS["lang"]['The width of this device.'] = 'Ширина этого устройства.';

$GLOBALS["lang"]['Then'] = 'Потом';

$GLOBALS["lang"]['This CVE will be retrieved and overwrite the existing CVE if it exists.'] = 'Эта CVE будет извлечена и перезаписана существующая CVE, если она существует.';

$GLOBALS["lang"]['This attribute is stored as a JSON object. It is the list of all collections and contains the collection name along with <code>c</code>, <code>r</code>, <code>u</code> and,or <code>d</code> which represent create, read, update and delete. These are the actions a user can perform on items from that particular collection.'] = 'Этот атрибут хранится как объект JSON. Это список всех коллекций и содержит название коллекции. <code>c</code>, <code>r</code>, <code>u</code> и/или <code>d</code> которые представляют собой создание, чтение, обновление и удаление. Это действия, которые пользователь может выполнять на предметах из этой конкретной коллекции.';

$GLOBALS["lang"]['This can be either a varchar (a text field), a list (a list of values that can be selected) or a date.'] = 'Это может быть либо варчар (текстовое поле), список (список значений, которые могут быть выбраны), либо дата.';

$GLOBALS["lang"]['This collectors universally unique identifier.'] = 'Это универсально уникальный идентификатор.';

$GLOBALS["lang"]['This description is auto-populated and should ideally be left as-is.'] = 'Это описание является автозаполненным и в идеале должно быть оставлено как есть.';

$GLOBALS["lang"]['This feature requires a Professional or an Enterprise license.'] = 'Эта функция требует профессиональной или корпоративной лицензии.';

$GLOBALS["lang"]['This is generally the primary column, unless otherwise configured. NOTE: When type = traffic, this represents the secondary text.'] = 'Обычно это основной столбец, если не настроено иначе. Примечание: Когда тип = трафик, это представляет собой вторичный текст.';

$GLOBALS["lang"]['This item must match the value of the attribute selected or contains the ID of the query to be used.'] = 'Этот элемент должен соответствовать значению выбранного атрибута или содержать идентификатор используемого запроса.';

$GLOBALS["lang"]['This item must match the value of the attribute selected.'] = 'Этот элемент должен соответствовать значению выбранного атрибута.';

$GLOBALS["lang"]['This license expires on'] = 'Эта лицензия истекает';

$GLOBALS["lang"]['This should be set to either 1 or the height of the rack.'] = 'Это должно быть установлено на 1 или высоту стойки.';

$GLOBALS["lang"]['This will auto-populate.'] = 'Это будет автонаселение.';

$GLOBALS["lang"]['This will considerably slow the discovery scan.'] = 'Это значительно замедлит сканирование обнаружения.';

$GLOBALS["lang"]['Thursday'] = 'четверг';

$GLOBALS["lang"]['time_caption'] = 'Time Caption';

$GLOBALS["lang"]['Time Caption'] = 'Time Caption';

$GLOBALS["lang"]['time_daylight'] = 'Время суток';

$GLOBALS["lang"]['Time Daylight'] = 'Время суток';

$GLOBALS["lang"]['Time to Execute'] = 'Время выполнять';

$GLOBALS["lang"]['timeout'] = 'тайм-аут';

$GLOBALS["lang"]['Timeout'] = 'тайм-аут';

$GLOBALS["lang"]['Timeout Per Target (Seconds)'] = 'Timeout Per Target (второй)';

$GLOBALS["lang"]['Timesatamp'] = 'Таймса';

$GLOBALS["lang"]['Timestamp'] = 'метка времени';

$GLOBALS["lang"]['timing'] = 'Время';

$GLOBALS["lang"]['Timing'] = 'Время';

$GLOBALS["lang"]['Timor-Leste'] = 'Тимор-Лешти';

$GLOBALS["lang"]['Title'] = 'Название';

$GLOBALS["lang"]['Togo'] = 'Того';

$GLOBALS["lang"]['Tokelau'] = 'Токелау';

$GLOBALS["lang"]['Tonga'] = 'Тонга';

$GLOBALS["lang"]['toolbar_style'] = 'Стиль Toolbar';

$GLOBALS["lang"]['Toolbar Style'] = 'Стиль Toolbar';

$GLOBALS["lang"]['Top Nmap TCP Ports'] = 'Лучшие порты Nmap TCP';

$GLOBALS["lang"]['Top Nmap UDP Ports'] = 'Лучшие порты Nmap UDP';

$GLOBALS["lang"]['Traditional Chinese'] = 'Традиционный китайский';

$GLOBALS["lang"]['Traffic Light'] = 'Светофор';

$GLOBALS["lang"]['Trinidad and Tobago'] = 'Тринидад и Тобаго';

$GLOBALS["lang"]['Troubleshooting LDAP Logins'] = 'Устранение неполадок LDAP Logins';

$GLOBALS["lang"]['Try all the latest features with a FREE 100 device license of Open-AudIT Enterprise. Please read the <a href=\"'] = 'Попробуйте все последние функции с бесплатной лицензией 100 устройств Open-AudIT Enterprise. Пожалуйста, прочитайте <a href=\"';

$GLOBALS["lang"]['Tuesday'] = 'вторник';

$GLOBALS["lang"]['Tunisia'] = 'Тунис';

$GLOBALS["lang"]['Turkey'] = 'Турция';

$GLOBALS["lang"]['Turkmenistan'] = 'Туркменистан';

$GLOBALS["lang"]['Turks and Caicos Islands'] = 'Острова Теркс и Кайкос';

$GLOBALS["lang"]['Tuvalu'] = 'Тувалу';

$GLOBALS["lang"]['tx_bitrate'] = 'Tx Bitrate';

$GLOBALS["lang"]['Tx Bitrate'] = 'Tx Bitrate';

$GLOBALS["lang"]['tx_freq'] = 'Tx Freq';

$GLOBALS["lang"]['Tx Freq'] = 'Tx Freq';

$GLOBALS["lang"]['tx_level'] = 'Уровень Tx';

$GLOBALS["lang"]['Tx Level'] = 'Уровень Tx';

$GLOBALS["lang"]['tx_power'] = 'Tx Power';

$GLOBALS["lang"]['Tx Power'] = 'Tx Power';

$GLOBALS["lang"]['tx_profile'] = 'Профиль Tx';

$GLOBALS["lang"]['Tx Profile'] = 'Профиль Tx';

$GLOBALS["lang"]['type'] = 'Тип';

$GLOBALS["lang"]['Type'] = 'Тип';

$GLOBALS["lang"]['URL'] = 'URL';

$GLOBALS["lang"]['uuid'] = 'UUID';

$GLOBALS["lang"]['UUID'] = 'UUID';

$GLOBALS["lang"]['udp_ports'] = 'Порты Udp';

$GLOBALS["lang"]['Udp Ports'] = 'Порты Udp';

$GLOBALS["lang"]['Uganda'] = 'Уганда';

$GLOBALS["lang"]['Ukraine'] = 'Украина';

$GLOBALS["lang"]['uninstall'] = 'удалить';

$GLOBALS["lang"]['Uninstall'] = 'удалить';

$GLOBALS["lang"]['Uninstall the Agent'] = 'Удалить агента';

$GLOBALS["lang"]['United Arab Emirates'] = 'Объединенные Арабские Эмираты';

$GLOBALS["lang"]['United Kingdom'] = 'Соединенное Королевство';

$GLOBALS["lang"]['United States Minor Outlying Islands'] = 'Малые отдаленные острова США';

$GLOBALS["lang"]['United States Virgin Islands'] = 'Американские Виргинские острова';

$GLOBALS["lang"]['United States of America'] = 'Соединенные Штаты Америки';

$GLOBALS["lang"]['Unknown'] = 'неизвестный';

$GLOBALS["lang"]['unlock_pin'] = 'Разблокировать Pin';

$GLOBALS["lang"]['Unlock Pin'] = 'Разблокировать Pin';

$GLOBALS["lang"]['Unscheduled'] = 'Незапланированный';

$GLOBALS["lang"]['Unused as at 5.2.0.'] = 'Не используется по 5.2.0.';

$GLOBALS["lang"]['Unused.'] = 'Неиспользованный.';

$GLOBALS["lang"]['Update'] = 'обновление';

$GLOBALS["lang"]['update_external_count'] = 'Обновление внешнего счета';

$GLOBALS["lang"]['Update External Count'] = 'Обновление внешнего счета';

$GLOBALS["lang"]['update_external_from_internal'] = 'Обновление внешнее от внутреннего';

$GLOBALS["lang"]['Update External From Internal'] = 'Обновление внешнее от внутреннего';

$GLOBALS["lang"]['update_internal_count'] = 'Обновление Internal Count';

$GLOBALS["lang"]['Update Internal Count'] = 'Обновление Internal Count';

$GLOBALS["lang"]['update_internal_from_external'] = 'Обновление с внешней стороны';

$GLOBALS["lang"]['Update Internal From External'] = 'Обновление с внешней стороны';

$GLOBALS["lang"]['Update NMIS Devices from Open-AudIT'] = 'Обновление устройств NMIS от Open-AudIT';

$GLOBALS["lang"]['Update Open-AudIT Devices from '] = 'Обновление Open-AudIT устройства из ';

$GLOBALS["lang"]['Update Open-AudIT Devices from NMIS'] = 'Обновление Open-AudIT Устройства от NMIS';

$GLOBALS["lang"]['Updated each time discovery has been executed with IPs detected to be responding.'] = 'Обновлялось каждый раз, когда открытие выполнялось с обнаруженными IP-адресами для ответа.';

$GLOBALS["lang"]['Updated each time discovery has been executed with IPs that have been scanned by Nmap.'] = 'Обновлялось каждый раз, когда открытие выполнялось с IP-адресами, которые были отсканированы Nmap.';

$GLOBALS["lang"]['Updated each time discovery has been executed with devices we were able to audit.'] = 'Обновлялось каждый раз, когда открытие выполнялось с помощью устройств, которые мы могли проверить.';

$GLOBALS["lang"]['Updated each time discovery has been executed with devices we were able to query.'] = 'Обновлялось каждый раз, когда открытие выполнялось с помощью устройств, которые мы могли запросить.';

$GLOBALS["lang"]['Updated each time discovery has been executed.'] = 'Обновлялся каждый раз, когда было сделано открытие.';

$GLOBALS["lang"]['Updated each time the discovery has been executed.'] = 'Обновлялся каждый раз, когда открытие выполнялось.';

$GLOBALS["lang"]['Updated each time the discovery has completed execution.'] = 'Обновлялся каждый раз, когда открытие заканчивалось.';

$GLOBALS["lang"]['Updating'] = 'Обновление';

$GLOBALS["lang"]['Upgrade'] = 'модернизировать';

$GLOBALS["lang"]['Upload an audit result file'] = 'Загрузить файл результатов аудита';

$GLOBALS["lang"]['Upper Case'] = 'Верхнее дело';

$GLOBALS["lang"]['uptime'] = 'время';

$GLOBALS["lang"]['Uptime'] = 'время';

$GLOBALS["lang"]['url'] = 'Урл';

$GLOBALS["lang"]['Url'] = 'Урл';

$GLOBALS["lang"]['Uruguay, Eastern Republic of'] = 'Уругвай, Восточная Республика';

$GLOBALS["lang"]['usb'] = 'Усб';

$GLOBALS["lang"]['Usb'] = 'Усб';

$GLOBALS["lang"]['use'] = 'Использовать';

$GLOBALS["lang"]['Use'] = 'Использовать';

$GLOBALS["lang"]['use_authentication'] = 'Использование аутентификации';

$GLOBALS["lang"]['Use Authentication'] = 'Использование аутентификации';

$GLOBALS["lang"]['use_authorisation'] = 'Использование авторизации';

$GLOBALS["lang"]['Use Authorisation'] = 'Использование авторизации';

$GLOBALS["lang"]['Use SNMP'] = 'Используйте SNMP';

$GLOBALS["lang"]['Use SSH'] = 'Используйте SSH';

$GLOBALS["lang"]['Use Secure (LDAPS)'] = 'Используйте Secure (LDAPS)';

$GLOBALS["lang"]['Use Service Version Detection'] = 'Использование Service Version Detection';

$GLOBALS["lang"]['Use WMI'] = 'Используйте WMI';

$GLOBALS["lang"]['Use for Authentication'] = 'Используйте для аутентификации';

$GLOBALS["lang"]['Use for Roles'] = 'Используйте роли';

$GLOBALS["lang"]['used'] = 'использованный';

$GLOBALS["lang"]['Used'] = 'использованный';

$GLOBALS["lang"]['used_count'] = 'Используемый граф';

$GLOBALS["lang"]['Used Count'] = 'Используемый граф';

$GLOBALS["lang"]['Used by OpenLDAP only.'] = 'Используется только OpenLDAP.';

$GLOBALS["lang"]['Used internally when discovering a single device.'] = 'Используется внутри при обнаружении одного устройства.';

$GLOBALS["lang"]['Used internally when discovering a single device. Links to <code>devices.id</code>.'] = 'Используется внутри при обнаружении одного устройства. Ссылки на <code>devices.id</code>.';

$GLOBALS["lang"]['Used when LDAP servers have been configured to populate a users details - this includes the Orgs to which they have access. If a user is in this LDAP group, they are assigned this org.'] = 'Используется, когда серверы LDAP настроены для заполнения данных пользователей - это включает в себя организации, к которым они имеют доступ. Если пользователь входит в эту группу LDAP, ему присваивается эта организация.';

$GLOBALS["lang"]['Used when LDAP servers have been configured to populate a users details - this includes the Roles which they are assigned. If a user is in this LDAP group, they are assigned this role.'] = 'Используется, когда серверы LDAP настроены для заполнения данных пользователей - это включает в себя роли, которые им назначены. Если пользователь входит в группу LDAP, ему присваивается эта роль.';

$GLOBALS["lang"]['Used when searching OpenLDAP to match a users uid to a groups members. Default of <code>memberUid</code>. Used by OpenLDAP only.'] = 'Используется при поиске OpenLDAP для сопоставления пользовательского интерфейса с членами групп. дефолт <code>memberUid</code>. Используется только OpenLDAP.';

$GLOBALS["lang"]['Used with Integrations and FirstWave monitoring applications.'] = 'Используется с приложениями для интеграции и мониторинга FirstWave.';

$GLOBALS["lang"]['Used with Integrations and FirstWave monitoring applications. Set to y if working SNMP detected by discovery.'] = 'Используется с приложениями для интеграции и мониторинга FirstWave. Установить на y, если работа SNMP обнаружена открытием.';

$GLOBALS["lang"]['user'] = 'Пользователь';

$GLOBALS["lang"]['User'] = 'Пользователь';

$GLOBALS["lang"]['User DN'] = 'Пользователь DN';

$GLOBALS["lang"]['user_group'] = 'Пользовательская группа';

$GLOBALS["lang"]['User Group'] = 'Пользовательская группа';

$GLOBALS["lang"]['user_id'] = 'ID пользователя';

$GLOBALS["lang"]['User ID'] = 'ID пользователя';

$GLOBALS["lang"]['user_interaction'] = 'Пользовательское взаимодействие';

$GLOBALS["lang"]['User Interaction'] = 'Пользовательское взаимодействие';

$GLOBALS["lang"]['User Membership Attribute'] = 'Атрибут пользователя';

$GLOBALS["lang"]['user_name'] = 'Имя пользователя';

$GLOBALS["lang"]['User Name'] = 'Имя пользователя';

$GLOBALS["lang"]['User Policies'] = 'Политика пользователей';

$GLOBALS["lang"]['Username'] = 'Имя пользователя';

$GLOBALS["lang"]['username'] = 'Имя пользователя';

$GLOBALS["lang"]['users'] = 'Пользователи';

$GLOBALS["lang"]['Users'] = 'Пользователи';

$GLOBALS["lang"]['Users, Roles and Orgs'] = 'Пользователи, роли и организации';

$GLOBALS["lang"]['Using Entra for Auth'] = 'Использование Entra для Auth';

$GLOBALS["lang"]['Using OKTA for Auth'] = 'Использование OKTA для Auth';

$GLOBALS["lang"]['Usually Mb/s, from Location A.'] = 'Обычно Mb/s, из местоположения A.';

$GLOBALS["lang"]['Usually Mb/s, from Location B.'] = 'Обычно Mb/s, из местоположения B.';

$GLOBALS["lang"]['Usually Mb/s, to Location A.'] = 'Обычно Mb/s, в местоположении A.';

$GLOBALS["lang"]['Usually Mb/s, to Location B.'] = 'Обычно Мб/с, в место Б.';

$GLOBALS["lang"]['Uzbekistan'] = 'Узбекистан';

$GLOBALS["lang"]['VLAN'] = 'VLAN';

$GLOBALS["lang"]['VLAN ID'] = 'VLAN ID';

$GLOBALS["lang"]['valid_from'] = 'действительный от';

$GLOBALS["lang"]['Valid From'] = 'действительный от';

$GLOBALS["lang"]['valid_from_raw'] = 'Действительный от Raw';

$GLOBALS["lang"]['Valid From Raw'] = 'Действительный от Raw';

$GLOBALS["lang"]['valid_to'] = 'действительный';

$GLOBALS["lang"]['Valid To'] = 'действительный';

$GLOBALS["lang"]['valid_to_raw'] = 'Валидный для Raw';

$GLOBALS["lang"]['Valid To Raw'] = 'Валидный для Raw';

$GLOBALS["lang"]['Valid Values'] = 'Действительные значения';

$GLOBALS["lang"]['value'] = 'ценность';

$GLOBALS["lang"]['Value'] = 'ценность';

$GLOBALS["lang"]['values'] = 'ценности';

$GLOBALS["lang"]['Values'] = 'ценности';

$GLOBALS["lang"]['Vanuatu'] = 'Вануату';

$GLOBALS["lang"]['VarChar'] = 'Варшава';

$GLOBALS["lang"]['Varchar'] = 'Варшава';

$GLOBALS["lang"]['variable'] = 'переменный';

$GLOBALS["lang"]['Variable'] = 'переменный';

$GLOBALS["lang"]['vendor'] = 'продавец';

$GLOBALS["lang"]['Vendor'] = 'продавец';

$GLOBALS["lang"]['vendors'] = 'Продавцы';

$GLOBALS["lang"]['Vendors'] = 'Продавцы';

$GLOBALS["lang"]['Venezuela'] = 'Венесуэла';

$GLOBALS["lang"]['version'] = 'Версия';

$GLOBALS["lang"]['Version'] = 'Версия';

$GLOBALS["lang"]['version_padded'] = 'Версия Padded';

$GLOBALS["lang"]['Version Padded'] = 'Версия Padded';

$GLOBALS["lang"]['version_raw'] = 'Версия Raw';

$GLOBALS["lang"]['Version Raw'] = 'Версия Raw';

$GLOBALS["lang"]['version_string'] = 'Версия String';

$GLOBALS["lang"]['Version String'] = 'Версия String';

$GLOBALS["lang"]['video'] = 'Видео';

$GLOBALS["lang"]['Video'] = 'Видео';

$GLOBALS["lang"]['Vietnam'] = 'Вьетнам';

$GLOBALS["lang"]['View'] = 'Посмотреть';

$GLOBALS["lang"]['View All'] = 'Смотреть все';

$GLOBALS["lang"]['View Details'] = 'Посмотреть детали';

$GLOBALS["lang"]['View Device'] = 'Устройство просмотра';

$GLOBALS["lang"]['View Discovery'] = 'Посмотреть Discovery';

$GLOBALS["lang"]['View Policy'] = 'Посмотреть Политика';

$GLOBALS["lang"]['Virtual Private Network'] = 'Виртуальная частная сеть';

$GLOBALS["lang"]['Virtualisation'] = 'Виртуализация';

$GLOBALS["lang"]['Visit our YouTube channel for instructional videos.'] = 'Посетите наш канал YouTube для обучающих видео.';

$GLOBALS["lang"]['vlan'] = 'Влан';

$GLOBALS["lang"]['Vlan'] = 'Влан';

$GLOBALS["lang"]['vlan_id'] = 'Идентификатор Вана';

$GLOBALS["lang"]['Vlan ID'] = 'Идентификатор Вана';

$GLOBALS["lang"]['vm'] = 'В.';

$GLOBALS["lang"]['Vm'] = 'В.';

$GLOBALS["lang"]['vm_device_id'] = 'VM Device ID';

$GLOBALS["lang"]['Vm Device ID'] = 'VM Device ID';

$GLOBALS["lang"]['vm_group'] = 'Vm Group';

$GLOBALS["lang"]['Vm Group'] = 'Vm Group';

$GLOBALS["lang"]['vm_ident'] = 'Vm Идент';

$GLOBALS["lang"]['Vm Ident'] = 'Vm Идент';

$GLOBALS["lang"]['vm_server_name'] = 'Имя сервера Vm';

$GLOBALS["lang"]['Vm Server Name'] = 'Имя сервера Vm';

$GLOBALS["lang"]['vm_vendor'] = 'ВМ Вендор';

$GLOBALS["lang"]['Vm Vendor'] = 'ВМ Вендор';

$GLOBALS["lang"]['vuln_status'] = 'Статус Вульна';

$GLOBALS["lang"]['Vuln Status'] = 'Статус Вульна';

$GLOBALS["lang"]['vulnerabilities'] = 'Уязвимости';

$GLOBALS["lang"]['Vulnerabilities'] = 'Уязвимости';

$GLOBALS["lang"]['vulnerabilities_cache'] = 'Уязвимости кэш';

$GLOBALS["lang"]['Vulnerabilities Cache'] = 'Уязвимости кэш';

$GLOBALS["lang"]['vulnerability_id'] = 'ID уязвимости';

$GLOBALS["lang"]['Vulnerability ID'] = 'ID уязвимости';

$GLOBALS["lang"]['WHERE'] = 'Где';

$GLOBALS["lang"]['wall_port'] = 'Wall Port';

$GLOBALS["lang"]['Wall Port'] = 'Wall Port';

$GLOBALS["lang"]['Wallis and Futuna'] = 'Уоллис и Футуна';

$GLOBALS["lang"]['Want to know more?'] = 'Хотите узнать больше?';

$GLOBALS["lang"]['Warning'] = 'Предупреждение';

$GLOBALS["lang"]['warranty'] = 'гарантия';

$GLOBALS["lang"]['Warranty'] = 'гарантия';

$GLOBALS["lang"]['warranty_duration'] = 'Гарантийная продолжительность';

$GLOBALS["lang"]['Warranty Duration'] = 'Гарантийная продолжительность';

$GLOBALS["lang"]['warranty_expires'] = 'Гарантия истекает';

$GLOBALS["lang"]['Warranty Expires'] = 'Гарантия истекает';

$GLOBALS["lang"]['warranty_status'] = 'Гарантийный статус';

$GLOBALS["lang"]['Warranty Status'] = 'Гарантийный статус';

$GLOBALS["lang"]['warranty_type'] = 'Тип гарантии';

$GLOBALS["lang"]['Warranty Type'] = 'Тип гарантии';

$GLOBALS["lang"]['Web'] = 'Интернет';

$GLOBALS["lang"]['Webserver'] = 'Веб-сервер';

$GLOBALS["lang"]['Website'] = 'Сайт';

$GLOBALS["lang"]['Wednesday'] = 'среда';

$GLOBALS["lang"]['weight'] = 'вес';

$GLOBALS["lang"]['Weight'] = 'вес';

$GLOBALS["lang"]['weight_current'] = 'Текущий вес';

$GLOBALS["lang"]['Weight Current'] = 'Текущий вес';

$GLOBALS["lang"]['weight_empty'] = 'Вес пустой';

$GLOBALS["lang"]['Weight Empty'] = 'Вес пустой';

$GLOBALS["lang"]['weight_max'] = 'Вес Макс';

$GLOBALS["lang"]['Weight Max'] = 'Вес Макс';

$GLOBALS["lang"]['Welcome'] = 'Добро пожаловать.';

$GLOBALS["lang"]['Welcome Dashboard'] = 'Приветственная панель';

$GLOBALS["lang"]['Welcome to FirstWave Open-AudIT'] = 'Добро пожаловать в FirstWave Open-AudIT';

$GLOBALS["lang"]['Western Sahara'] = 'Западная Сахара';

$GLOBALS["lang"]['What Can I Expect if I Have no Credentials'] = 'Что я могу ожидать, если у меня нет полномочий';

$GLOBALS["lang"]['What is the purpose of this rack.'] = 'Какова цель этой стойки?';

$GLOBALS["lang"]['What is the type of this location. Allowable types held in <code>attributes</code> table.'] = 'Каков тип этого места? Допустимые виды удерживаются в <code>attributes</code> столик.';

$GLOBALS["lang"]['When integrating devices from the external system, if the device doesnt exist in Open-AudIT should we create it?'] = 'При интеграции устройств из внешней системы, если устройство не существует в Open-AudIT, следует ли его создавать?';

$GLOBALS["lang"]['When integrating devices from the external system, if the device has been updated in the external system should we update it in Open-AudIT?'] = 'При интеграции устройств из внешней системы, если устройство было обновлено во внешней системе, следует ли обновлять его в Open-AudIT?';

$GLOBALS["lang"]['When retrieve an external device, should we run discovery upon it?'] = 'Когда мы получим внешнее устройство, должны ли мы запустить на нем открытие?';

$GLOBALS["lang"]['When this benchmark is scheduled to be executed. Derived from the associated <code>tasks.type</code> and <code>tasks.sub_resource_id</code>.'] = 'Когда этот тест планируется выполнить. Происходит от связанного <code>tasks.type</code> и <code>tasks.sub_resource_id</code>.';

$GLOBALS["lang"]['When this log was created.'] = 'Когда был создан этот бревно.';

$GLOBALS["lang"]['When this queue item started processing.'] = 'Когда этот предмет очереди начал обрабатываться.';

$GLOBALS["lang"]['When we execute this baseline, should we check for items on devices that are not in a policy for this baseline.'] = 'Когда мы выполняем эту базовую линию, мы должны проверить элементы на устройствах, которые не входят в политику для этой базовой линии.';

$GLOBALS["lang"]['When we receive an open port, should we attempt to test for the version of the service currently running upon it? This assists in confirming actual running services.'] = 'Когда мы получаем открытый порт, должны ли мы пытаться протестировать версию службы, работающей на нем? Это помогает подтвердить фактические услуги.';

$GLOBALS["lang"]['where'] = 'Где?';

$GLOBALS["lang"]['Where'] = 'Где?';

$GLOBALS["lang"]['Where on the Device Details screen you would like to see this field appear.'] = 'Где на экране Детали устройства вы хотели бы увидеть это поле.';

$GLOBALS["lang"]['Where the rack is in the row.'] = 'Где стойка находится в ряду.';

$GLOBALS["lang"]['Whether the vulnerability affects components beyond its own using Impact, Availability and Confidentiality.'] = 'Влияет ли уязвимость на компоненты, выходящие за рамки ее собственной, с помощью Impact, Availability и Confidentiality.';

$GLOBALS["lang"]['Whether user interaction is required (None, Passive, Active).'] = 'Требуется ли взаимодействие с пользователем (нет, пассивное, активное).';

$GLOBALS["lang"]['Which OS this benchmark applies to.'] = 'К какой ОС относится данный бенчмарк.';

$GLOBALS["lang"]['Which devices should Open-AudIT create from the external system (if any). Using All, None or a given Attribute.'] = 'Какие устройства должен создавать Open-AudIT из внешней системы (если таковая имеется). Использование всего, ничего или данного атрибута.';

$GLOBALS["lang"]['Which sub-menu should we display this query in.'] = 'В каком подменю мы должны отобразить этот запрос.';

$GLOBALS["lang"]['Who made this rack.'] = 'Кто сделал эту стойку.';

$GLOBALS["lang"]['Why Windows Server Only?'] = 'Почему только Windows Server?';

$GLOBALS["lang"]['Why do we exclude this policy?'] = 'Почему мы исключаем эту политику?';

$GLOBALS["lang"]['Wide Area Network'] = 'Широкая сеть';

$GLOBALS["lang"]['Widget'] = 'виджет';

$GLOBALS["lang"]['Widget # '] = 'Виджет # ';

$GLOBALS["lang"]['Widget Type'] = 'Виджеты типа';

$GLOBALS["lang"]['widgets'] = 'виджеты';

$GLOBALS["lang"]['Widgets'] = 'виджеты';

$GLOBALS["lang"]['width'] = 'широта';

$GLOBALS["lang"]['Width'] = 'широта';

$GLOBALS["lang"]['windows'] = 'Windows';

$GLOBALS["lang"]['Windows'] = 'Windows';

$GLOBALS["lang"]['Windows Test Script'] = 'Тестовый скрипт Windows';

$GLOBALS["lang"]['Wireless Local Area Network'] = 'Беспроводная локальная сеть';

$GLOBALS["lang"]['wmi_fails'] = 'Wmi Fails';

$GLOBALS["lang"]['Wmi Fails'] = 'Wmi Fails';

$GLOBALS["lang"]['wmi_timeout'] = 'Тайм-аут Вми';

$GLOBALS["lang"]['Wmi Timeout'] = 'Тайм-аут Вми';

$GLOBALS["lang"]['workgroup'] = 'Рабочая группа';

$GLOBALS["lang"]['Workgroup'] = 'Рабочая группа';

$GLOBALS["lang"]['Working Credentials'] = 'Рабочие полномочия';

$GLOBALS["lang"]['XML'] = 'XML';

$GLOBALS["lang"]['Yellow Query'] = 'Желтый запрос';

$GLOBALS["lang"]['Yemen'] = 'Йемен';

$GLOBALS["lang"]['Yes'] = 'Да.';

$GLOBALS["lang"]['You may want to copy and paste this URL in an email to your staff.'] = 'Вы можете скопировать и вставить этот URL-адрес в электронное письмо своим сотрудникам.';

$GLOBALS["lang"]['You must delete your existing license before adding a new license.'] = 'Вы должны удалить существующую лицензию, прежде чем добавлять новую.';

$GLOBALS["lang"]['YouTube Tutorials'] = 'YouTube учебники';

$GLOBALS["lang"]['Your AWS EC2 API key.'] = 'Ключ API AWS EC2.';

$GLOBALS["lang"]['Your Google Compute credentials as JSON.'] = 'Google вычисляет учетные данные как JSON.';

$GLOBALS["lang"]['Your Licenses'] = 'Ваши лицензии';

$GLOBALS["lang"]['Your Microsoft Azure Client ID.'] = 'Клиентский идентификатор Microsoft Azure.';

$GLOBALS["lang"]['Your Microsoft Azure Client Secret.'] = 'Секрет клиента Microsoft Azure.';

$GLOBALS["lang"]['Your Microsoft Azure Subscription ID.'] = 'Ваш идентификатор подписки Microsoft Azure.';

$GLOBALS["lang"]['Your Microsoft Azure Tennant ID.'] = 'Microsoft Azure Tennant ID.';

$GLOBALS["lang"]['Your SQL to select attributes that will populate this query.'] = 'Ваш SQL для выбора атрибутов, которые будут заполнять этот запрос.';

$GLOBALS["lang"]['Your SQL to select devices that will populate this group.'] = 'SQL для выбора устройств, которые будут населять эту группу.';

$GLOBALS["lang"]['Your SSH key.'] = 'Ваш SSH-ключ.';

$GLOBALS["lang"]['Your access credentials, as per that clouds native API.'] = 'Ваши учетные данные доступа, согласно этому нативному API облака.';

$GLOBALS["lang"]['Your description of the status of this connection (provisioned, retired, etc).'] = 'Ваше описание статуса этой связи (предусмотренной, отставной и т.д.).';

$GLOBALS["lang"]['Your description of this item.'] = 'Ваше описание этого пункта.';

$GLOBALS["lang"]['Your generic name for this piece of software'] = 'Ваше общее имя для этого программного обеспечения';

$GLOBALS["lang"]['Your generic version for this piece of software'] = 'Ваша общая версия для этого программного обеспечения';

$GLOBALS["lang"]['Zambia'] = 'Замбия';

$GLOBALS["lang"]['Zimbabwe'] = 'Зимбабве';

$GLOBALS["lang"]['active'] = 'активный';

$GLOBALS["lang"]['active directory'] = 'Активный каталог';

$GLOBALS["lang"]['active/active'] = 'активный/активный';

$GLOBALS["lang"]['active/passive'] = 'активный/пассивный';

$GLOBALS["lang"]['advertisement'] = 'реклама';

$GLOBALS["lang"]['alert'] = 'предупреждать';

$GLOBALS["lang"]['all'] = 'все';

$GLOBALS["lang"]['allocated'] = 'выделенный';

$GLOBALS["lang"]['amazon'] = 'амазонка';

$GLOBALS["lang"]['antivirus'] = 'антивирус';

$GLOBALS["lang"]['application'] = 'приложение';

$GLOBALS["lang"]['approved'] = 'утвержденный';

$GLOBALS["lang"]['attribute'] = 'атрибут';

$GLOBALS["lang"]['auto'] = 'авто';

$GLOBALS["lang"]['backup'] = 'резервный';

$GLOBALS["lang"]['banned'] = 'запрещенный';

$GLOBALS["lang"]['blog'] = 'блог';

$GLOBALS["lang"]['bottom'] = 'дно';

$GLOBALS["lang"]['browser_lang'] = 'Браузер_lang';

$GLOBALS["lang"]['building'] = 'здание';

$GLOBALS["lang"]['cloud'] = 'облако';

$GLOBALS["lang"]['code'] = 'код';

$GLOBALS["lang"]['collector'] = 'коллекционер';

$GLOBALS["lang"]['compute'] = 'вычислять';

$GLOBALS["lang"]['config'] = 'конфигурация';

$GLOBALS["lang"]['contains'] = 'содержит';

$GLOBALS["lang"]['create'] = 'создавать';

$GLOBALS["lang"]['created'] = 'созданный';

$GLOBALS["lang"]['critical'] = 'критический';

$GLOBALS["lang"]['cve'] = 'пещера';

$GLOBALS["lang"]['database'] = 'база данных';

$GLOBALS["lang"]['debug'] = 'отладка';

$GLOBALS["lang"]['delegated'] = 'делегированный';

$GLOBALS["lang"]['delete'] = 'удалять';

$GLOBALS["lang"]['deleted'] = 'удаленный';

$GLOBALS["lang"]['denied'] = 'отрицать';

$GLOBALS["lang"]['devices'] = 'устройства';

$GLOBALS["lang"]['digitalocean'] = 'цифровой';

$GLOBALS["lang"]['does not equal'] = 'Не равный';

$GLOBALS["lang"]['emergency'] = 'чрезвычайная ситуация';

$GLOBALS["lang"]['entra'] = 'внутри';

$GLOBALS["lang"]['equals'] = 'равные';

$GLOBALS["lang"]['error'] = 'ошибка';

$GLOBALS["lang"]['established'] = 'установленный';

$GLOBALS["lang"]['excluded'] = 'исключать';

$GLOBALS["lang"]['expired'] = 'истекший';

$GLOBALS["lang"]['extreme - Without which, the organisation would fail.

very high - Functions that are essential for the organisations survival and must be restored immediately.

high - Important functions that should be restored quickly but may have a slightly longer recovery time.

medium - Functions that are necessary but can tolerate longer downtime.

low - Non-essential functions that can be delayed without significant impact.

unassigned - The default until set.'] = 'Экстремальный — без которого организация потерпела бы неудачу.

Функции, которые необходимы для выживания организаций и должны быть немедленно восстановлены.

Важные функции, которые должны быть восстановлены быстро, но могут иметь немного более длительное время восстановления.

Среда - функции, которые необходимы, но могут выдержать более длительное время простоя.

Несущественные функции, которые могут быть отложены без существенного воздействия.

unassigned — дефолт до установки.';

$GLOBALS["lang"]['fail'] = 'провал';

$GLOBALS["lang"]['false'] = 'ложный';

$GLOBALS["lang"]['file'] = 'файл';

$GLOBALS["lang"]['firewall'] = 'брандмауэр';

$GLOBALS["lang"]['fixed'] = 'фиксированный';

$GLOBALS["lang"]['floor'] = 'этаж';

$GLOBALS["lang"]['front'] = 'фронт';

$GLOBALS["lang"]['front-left'] = 'передний левый';

$GLOBALS["lang"]['front-right'] = 'передний правый';

$GLOBALS["lang"]['github'] = 'гитхаб';

$GLOBALS["lang"]['google'] = 'Google';

$GLOBALS["lang"]['greater or equals'] = 'больший или равный';

$GLOBALS["lang"]['greater than'] = 'больше, чем';

$GLOBALS["lang"]['group'] = 'группа';

$GLOBALS["lang"]['head'] = 'голова';

$GLOBALS["lang"]['here'] = 'здесь';

$GLOBALS["lang"]['high availability'] = 'высокая доступность';

$GLOBALS["lang"]['howto'] = 'как';

$GLOBALS["lang"]['ignored'] = 'игнорируемый';

$GLOBALS["lang"]['in'] = 'в';

$GLOBALS["lang"]['inactive'] = 'неактивный';

$GLOBALS["lang"]['incomplete'] = 'неполный';

$GLOBALS["lang"]['info'] = 'информация';

$GLOBALS["lang"]['int, text, bool (y/n), etc'] = 'int, text, bool (y/n)';

$GLOBALS["lang"]['is licensed to'] = 'лицензируется на';

$GLOBALS["lang"]['left'] = 'левый';

$GLOBALS["lang"]['less or equals'] = 'меньше или равно';

$GLOBALS["lang"]['less than'] = 'меньше чем';

$GLOBALS["lang"]['license'] = 'лицензия';

$GLOBALS["lang"]['like'] = 'как';

$GLOBALS["lang"]['line'] = 'линия';

$GLOBALS["lang"]['load balancing'] = 'балансировка нагрузки';

$GLOBALS["lang"]['location'] = 'местоположение';

$GLOBALS["lang"]['managed'] = 'управляемый';

$GLOBALS["lang"]['microsoft'] = 'микромягкий';

$GLOBALS["lang"]['mount point'] = 'точка крепления';

$GLOBALS["lang"]['network'] = 'сеть';

$GLOBALS["lang"]['news'] = 'новости';

$GLOBALS["lang"]['no'] = 'нет';

$GLOBALS["lang"]['node'] = 'узел';

$GLOBALS["lang"]['none'] = 'ни одного';

$GLOBALS["lang"]['normal'] = 'нормальный';

$GLOBALS["lang"]['not applicable'] = 'не применимо';

$GLOBALS["lang"]['not in'] = 'не входить';

$GLOBALS["lang"]['not like'] = 'не нравится';

$GLOBALS["lang"]['notice'] = 'уведомление';

$GLOBALS["lang"]['notification'] = 'уведомление';

$GLOBALS["lang"]['okta'] = 'окта';

$GLOBALS["lang"]['openldap'] = 'открытое окно';

$GLOBALS["lang"]['optimized'] = 'оптимизированный';

$GLOBALS["lang"]['optionally '] = 'необязательно ';

$GLOBALS["lang"]['other'] = 'другой';

$GLOBALS["lang"]['package'] = 'пакет';

$GLOBALS["lang"]['partition'] = 'раздел';

$GLOBALS["lang"]['pass'] = 'проход';

$GLOBALS["lang"]['pending'] = 'ожидающий';

$GLOBALS["lang"]['performance'] = 'исполнение';

$GLOBALS["lang"]['performed'] = 'выполненный';

$GLOBALS["lang"]['pie'] = 'пирог';

$GLOBALS["lang"]['planning'] = 'планирование';

$GLOBALS["lang"]['predictable'] = 'предсказуемый';

$GLOBALS["lang"]['query'] = 'запрос';

$GLOBALS["lang"]['rear'] = 'задний';

$GLOBALS["lang"]['rear-left'] = 'задний левый';

$GLOBALS["lang"]['rear-right'] = 'задний правый';

$GLOBALS["lang"]['regex'] = 'регекс';

$GLOBALS["lang"]['release'] = 'освобождение';

$GLOBALS["lang"]['reserved'] = 'зарезервированный';

$GLOBALS["lang"]['right'] = 'правильно';

$GLOBALS["lang"]['room'] = 'комната';

$GLOBALS["lang"]['row'] = 'ряд';

$GLOBALS["lang"]['stand-alone'] = 'самостоятельный';

$GLOBALS["lang"]['standard'] = 'стандартный';

$GLOBALS["lang"]['starts with'] = 'начинается с';

$GLOBALS["lang"]['storage'] = 'хранение';

$GLOBALS["lang"]['timestamp'] = 'временная метка';

$GLOBALS["lang"]['top'] = 'вершина';

$GLOBALS["lang"]['top secret - Military / Government classification. Disclosure would cause exceptionally grave danger to national security.

secret - Military / Government classification. Disclosure would cause serious damage to national security.

confidential - Military / Government and Private Sector classification. Data that is confidential includes trade secrets, intellectual data, application programming code, and other data that could seriously affect the organization if unauthorized disclosure occurred. Data at this level would be available only to personnel in the organization whose work needs, or is directly related to, the accessed data. Access to confidential data usually requires authorization for each access.

private - Private Sector classification. Data that is private includes any information related to personnel, including human resources records, medical records, and salary information, that is used only within the organization.

sensitive - Military / Government and Private Sector classification. Data that is sensitive includes organizational financial information and requires extra measures to ensure its CIA and accuracy. Disclosure might harm national security.

public - Private Sector classification. Public data is data that is generally shared with the public and would not cause a negative impact on the organization. Examples of public data include how many people work in the organization and what products an organization manufactures or sells.

unclassified - Military / Government classification. Any information that can generally be distributed to the public without any threat to national interest.

unassigned - The default until set.'] = 'Главный секрет - военная / правительственная классификация. Раскрытие информации будет представлять исключительно серьезную опасность для национальной безопасности.

Тайна — Военная/Правительственная классификация. Раскрытие информации нанесет серьезный ущерб национальной безопасности.

Конфиденциальность — классификация военного/государственного и частного секторов. Конфиденциальные данные включают коммерческую тайну, интеллектуальные данные, код прикладного программирования и другие данные, которые могут серьезно повлиять на организацию, если произойдет несанкционированное раскрытие. Данные на этом уровне будут доступны только персоналу организации, чья работа нуждается или непосредственно связана с доступом к данным. Доступ к конфиденциальным данным обычно требует авторизации для каждого доступа.

Классификация частного сектора. Данные, которые являются частными, включают любую информацию, связанную с персоналом, включая записи о человеческих ресурсах, медицинские записи и информацию о заработной плате, которая используется только в организации.

деликатный - Классификация военного / государственного и частного секторов. Данные, которые являются конфиденциальными, включают в себя организационную финансовую информацию и требуют дополнительных мер для обеспечения ее точности. Раскрытие информации может нанести ущерб национальной безопасности.

Классификация государственного и частного секторов. Публичные данные - это данные, которые обычно передаются общественности и не оказывают негативного влияния на организацию. Примеры общедоступных данных включают в себя, сколько людей работает в организации и какие продукты организация производит или продает.

Незасекреченная — Военная/Правительственная классификация. Любая информация, которая может быть распространена среди общественности без какой-либо угрозы национальным интересам.

unassigned — дефолт до установки.';

$GLOBALS["lang"]['traffic'] = 'трафик';

$GLOBALS["lang"]['true'] = 'истинный';

$GLOBALS["lang"]['unallocated'] = 'нераспределенный';

$GLOBALS["lang"]['unauthorised'] = 'несанкционированный';

$GLOBALS["lang"]['unknown'] = 'неизвестный';

$GLOBALS["lang"]['unmanaged'] = 'неуправляемый';

$GLOBALS["lang"]['unused'] = 'неиспользованный';

$GLOBALS["lang"]['update'] = 'обновление';

$GLOBALS["lang"]['valid'] = 'действительный';

$GLOBALS["lang"]['virtualisation'] = 'виртуализация';

$GLOBALS["lang"]['warning'] = 'предупреждение';

$GLOBALS["lang"]['web'] = 'веб-сайт';

$GLOBALS["lang"]['yes'] = 'да';

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

