<?php
$GLOBALS["lang"][' Default, currently '] = ' За замовчуванням, в даний час ';

$GLOBALS["lang"][' is now supported with a language file. To change your user to use this language, click '] = ' тепер підтримується мовним файлом. Щоб змінити користувача для використання цієї мови, натисніть кнопку ';

$GLOBALS["lang"][' seconds'] = ' час';

$GLOBALS["lang"]['10 Minutes'] = '10 хвилин';

$GLOBALS["lang"]['15 Minutes'] = '15 хвилин';

$GLOBALS["lang"]['30 Minutes'] = '30 хвилин';

$GLOBALS["lang"]['5 Minutes'] = '5 хвилин';

$GLOBALS["lang"]['<br> <strong>NOTE</strong> - You are accessing this URL from the local Open-AudIT server. The downloaded script will not be able to submit when run on any other machine. If you need to audit other machines, please download the script from any remote machine, not using a browser on the Open-AudIT server itself.'] = '<br/> <strong>ЗАМОВИТИ</strong> - Ви отримуєте доступ до цієї URL з локального сервера Open-AudIT. Завантажувальний скрипт не зможе подати при запуску на будь-якій іншій машині. Якщо вам необхідно перевірити інші машини, будь ласка, завантажте скрипт з будь-якої віддаленої машини, не використовуючи браузер на сервері Open-AudIT.';

$GLOBALS["lang"]['<p></p>'] = '<p></p>';

$GLOBALS["lang"]['<p><strong class="text-danger">NOTE</strong> - You must have working SSH or SSH Key credentials to execute benchmarks upon a target device.</p>'] = '<p><strong class="text-danger">ЗАМОВИТИ</strong> - Ви повинні мати робочі SSH або SSH Основні показники для виконання бендиктів на цільовому пристрої.</p>';

$GLOBALS["lang"]['<p><strong>Baseline</strong> - The overarching document that contains the baseline definition and the individual policy tests.<br> <br> <strong>Policies</strong> - The individual tests contained within a Baseline. Each test is for a specific item. An example would be testing for SSH version 1.2.3.<br> <br> <strong>Details</strong> - Baselines can compare netstat ports, users and software.<br> <br> <strong>Software</strong> - To compare software we check the name and version. Because version numbers are not all standardised in format, when we receive an audit result we create a new attribute called software_padded which we store in the database along with the rest of the software details for each package. For this reason, baselines using software policies will not work when run against a device that has not been audited by 1.10 (at least). Software policies can test against the version being "equal to", "greater than" or "equal to or greater than".<br> <br> <strong>Netstat Ports</strong> - Netstat Ports use a combination of port number, protocol and program. If all are present the policy passes.<br> <br> <strong>Users</strong> - Users work similar to Netstat Ports. If a user exists with a matching name, status and password details (changeable, expires, required) then the policy passes.<br> <br> </p>'] = '<p><strong>Бази</strong> - Передавання документа, що містить базове визначення та індивідуальні дослідження політики.<br/> <br/> <strong>Політика</strong> - Індивідуальні тести, що містяться в Базиліні. Кожен тест для конкретного виробу. Приклад буде тестування для версії SSH 1.2.3.<br/> <br/> <strong>Детальніше</strong> - Базиліни можуть порівняти порти netstat, користувачів і програмного забезпечення.<br/> <br/> <strong>Програмне забезпечення</strong> - Для порівняння програмного забезпечення ми перевіряємо назву та версію. Ми можемо самі зателефонувати одержувачу і узгодити зручний час і місце вручення квітів, а якщо необхідно, то збережемо сюрприз. З цієї причини базові лінії з використанням програмних політик не працюватимуть при запуску пристрою, який не був перевірений 1.10 (не менше). Політика програмного забезпечення може протестувати проти версії "наскільки", "наростити", "наслідок" або "наслідок або більше, ніж".<br/> <br/> <strong>Порти Netstat</strong> - Порти Netstat використовують поєднання номеру порту, протоколу та програми. Якщо вся політика проходить.<br/> <br/> <strong>Користувачі</strong> - Користувачі працюють аналогічно портам Netstat. Якщо користувач існує з відповідним ім\'ям, статусом та деталями пароля (змінні, завершені, необхідні) після проходження політики.<br/> <br/> </p>';

$GLOBALS["lang"]['<p>A location is a physical address that can have devices associated with it.<br> <br>You can assign it coordinates (lat/long) and if there are devices assigned, the location will appear on the Open-AudIT Enterprise map.<br> <br></p>'] = '<p>Місце розташування - фізична адреса, яка може мати пристрої, пов\'язані з ним.<br/> <br/>На карті Open-AudIT Enterprise ви можете призначити координати (лат/довго) і якщо є пристрої, призначені для розміщення, місце розташування з\'явиться на карті Open-AudIT Enterprise.<br/> <br/></p>';

$GLOBALS["lang"]['<p>A network is derived from discovery entries and device attributes.<br> <br></p>'] = '<p>Мережа виходить з записів та атрибутів пристрою.<br/> <br/></p>';

$GLOBALS["lang"]['<p>A summary will display a list of items, grouped by the distinct values of the attribute specified by the <code>table</code> and <code>column</code> attributes.<br> <br>When a summary is executed, the result will be a list of distinct values for that <code>table</code> and <code>column</code>. There will be links on the values that allow the user to see the matching devices.<br> <br>If the attribute of <code>extra_columns</code> is populated, the resulting page will contain these columns in addition to the standard device columns.<br> <br></p>'] = '<p>Резюме буде відображати список елементів, що засвідчуються різними значеннями атрибуту, зазначеними атрибутами <code>table</code> і <code>column</code> атрибути.<br/> <br/>Коли виконується резюме, результат буде списком відмінних значень для цього <code>table</code> і <code>column</code>й На значеннях, які дозволяють користувачеві бачити відповідні пристрої.<br/> <br/>Якщо атрибут атрибут атрибуту <code>extra_columns</code> заселений, отримана сторінка міститиме ці стовпчики, крім стандартних стовпчиків пристрою.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Agents let you audit PCs without a discovery. Install the agent and it will check-in with the server each day and audit itself. It does not matter if your computers are firewalled, audit data will still appear in Open-AudIT.</p><p>When testing <strong>if</strong> an agent should perform actions, all three tests must pass (if the test is set). <strong>Then</strong> the actions are taken.</p>'] = '<p>Агенти дозволяють проводити перевірку ПК без відкриття. Встановити агента і він перевірить сервер кожного дня і перевірить себе. Неважливо, якщо ваші комп\'ютери ламаються, дані перевірок все ще з\'являються в Open-AudIT.</p><p>При тестуванні <strong>якщо</strong> агент повинен виконувати дії, всі три тести повинні проходити (якщо тест встановлений). <strong>Далі</strong> беруться дії.</p>';

$GLOBALS["lang"]['<p>Applications are defined by you, the user and stored for Open-AudIT to use and associate with devices.<br> <br></p>'] = '<p>Застосунки визначаються вами, користувачем і зберігаються для Open-AudIT для використання та пов\'язаних з пристроями.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Attributes are stored for Open-AudIT to use for particular fields.</p>'] = '<p>Атрибути зберігаються для Open-AudIT для використання для окремих полів.</p>';

$GLOBALS["lang"]['<p>Being able to determine which machines are configured the same is a major part of systems administration and auditing &ndash; and now reporting on that will be made simple and automated. Once you define your baseline it will automatically run against a set of devices on a predetermined schedule. The output of these executed baselines will be available for web viewing, importing into a third party system or even as a printed report.<br> <br> Baselines enable you to combine audit data with a set of attributes you have previously defined (your baseline) to determine compliance of devices.<br> <br> For example - you might create a baseline from a device running Centos 6 which acts as one of your apache servers in a cluster. You know this particular server is configured just the way you want it but you are unsure if other servers in the cluster are configured exactly the same. Baselines enables you to determine this.<br> <br> </p>'] = '<p>Ми можемо визначити, які машини налаштовані таким же чином, є основною частиною адміністрування та аудиту систем, а зараз звітність про те, що буде виконано просто і автоматизовано. Після того, як ви визначаєте свій базовий рядок, він автоматично буде працювати над набором пристроїв на заздалегідь визначеному графіку. Видача даних виконаних базових систем буде доступна для перегляду веб, імпортування в систему третьої сторони або навіть як друкований звіт.<br/> <br/> Базиліни дозволяють об\'єднати дані аудиту з набором атрибутів, які ви раніше визначені (чотирьох базових) для визначення відповідності пристроїв.<br/> <br/> Наприклад, ви можете створити базову лінію з пристрою, що працює Centos 6, що діє як один з ваших серверів кешу в кластері. Ви знаєте, що цей конкретний сервер налаштований просто спосіб, який ви хочете, але ви не впевнені, якщо інші сервери в кластері налаштовані точно так само. Базові лінії дозволяють визначити це.<br/> <br/> </p>';

$GLOBALS["lang"]['<p>Clusters are stored in Open-AudIT to associate devices to better record, manage and estimate licensing costs.<br> <br></p>'] = '<p>Кластери зберігаються в Open-AudIT для асоціаційних пристроїв для кращого запису, управління та оцінки ліцензійних витрат.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Components is a generic term used for the tables that store the attributes for a device. Those tables are: access_point, arp, bios, certificate, cli_config, disk, dns, file, ip, license, log, memory, module, monitor, motherboard, netstat, network, nmap, optical, pagefile, partition, policy, print_queue, processor, radio, route, san, scsi, server, server_item, service, share, software, software_key, sound, task, usb, user, user_group, variable, video, vm, windows.</p><p> In addition we class the following tables also as device related: application, attachment, cluster, credential, image.</p>'] = '<p>Компоненти є загальним терміном, який використовується для таблиць, які зберігають атрибути для пристрою. Ці таблиці: access_point, arp, біоs, сертифікат, cli_config, диск, dns, файл, ip, ліцензія, журнал, пам\'ять, модуль, монітор, материнська плата, мережа, nmap, оптичний, pagefile, розділ, політика, друк_queue, процесор, радіо, маршрут, san, scsi, сервер, сервер, сервер_item, сервіс, частка, програмне забезпечення, програмне забезпечення, програмне забезпечення, програмне забезпечення, програмне забезпечення, завдання, usb, користувач_група, змінна, відео, vm, вікна.</p><p> Крім того, ми класуємо такі таблиці, як пристрій, пов\'язаний: додаток, вкладення, кластер, облікове значення, зображення.</p>';

$GLOBALS["lang"]['<p>Credentials are encrypted when stored in the database.<br> <br>When a Discovery is run, a device has its credentials retrieved and tested for connection first (from the <code>credential</code> table). If these fail, then credentials associated with the given Org <code>credentials.org_id</code> is also tested against the device. Working credentials are stored at an individual device level in the credential table (note - no "s" in the table name).<br> <br>SSH keys are tested before SSH username / password. When testing SSH, credentials will also be marked as working with sudo or being root.<br> <br>For ease of use, Windows passwords should not contain a single or double quote. This is a remote WMI limitation, not an Open-AudIT limitation.<br> <br></p>'] = '<p>Зашифровані дані при збереженні бази даних.<br/> <br/>Коли компанія Discovery працює, пристрій має свої облікові дані, отримані і протестовані для підключення спочатку (з <code>credential</code> стіл. Якщо це не вдалося, то облікові дані, пов\'язані з даним органом <code>credentials.org_id</code> також тестується на пристрій. Робочі критерії зберігаються на рівні індивідуального пристрою в таблиці (примітки - не "s" в назві таблиці).<br/> <br/>Ключі SSH протестовані до SSH ім\'я користувача / пароль. При тестуванні SSH, облікові дані також будуть позначені як робота з sudo або корінь.<br/> <br/>Для зручності використання паролі Windows не повинні містити одну або подвійну цитату. Це дистанційне обмеження WMI, не обмеження Open-AudIT.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Credentials are used to access devices.<br> <br>Configuring credentials should be one of the first things you do after installing Open-AudIT.<br> <br></p>'] = '<p>Використовуються для пристроїв доступу.<br/> <br/>Налаштування облікових даних має бути одним з перших речей, які ви робите після встановлення Open-AudIT.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Define your racks and assign devices into their positions. You already have your devices in Open-AudIT and you know your locations. Open-AudIT extends this to allow you to create a rack and assign devices to it. Open-AudIT will even provide a visualisation of the rack and the devices contained within. If you provide a device picture, that picture will be used in the visualisation. You can look at the rack on the screen and see the same items you would see if you were standing in front of it.<br> <br></p>'] = '<p>Визначте свої стелажі та призначте їх положення. Ви вже маєте свої пристрої в Open-AudIT, і ви знаєте ваші місця. Open-AudIT поширює це для того, щоб дозволити вам створити стійки та призначити пристрої. Open-AudIT навіть забезпечить візуалізацію стійки та приладів, що містяться в межах. Якщо ви надаєте зображення пристрою, яке зображення буде використовуватися в візуалізації. Ви можете подивитися на стійку на екрані і побачити однакові елементи, які ви побачите, якщо ви стоячи перед ним.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Devices on your network need to be managed. But how do you keep your records up to date? A spreadsheet - defintley not. That will be out of date in hours, if not days. Why manually try to keep up. Use Open-AudIT to automatically scan your networks and record your devices - manufacturer, model, serial and more than 100 other attributes. Full lists of software, services, disks, open ports, users, etc. Automatically see if an attribute has been added, removed or changed.<br> <br>Once Open-AudIT is setup, you can sit back and relax. Have change reports emailed to you on a schedule, for example - what new devices did we discover this week? What new software was installed this week? Were there any hardware changes last month?<br> <br>Expand on the stored fields easily with your own custom attributes.<br> <br>Even add devices that are not connected to your network or those devices your Open-AudIT server cannot reach.<br> <br>Computers, switches, routers, printers or any other device on your network - Open-AudIT can audit them all.<br> <br></p>'] = '<p>Пристрої на вашій мережі повинні бути керовані. Як зберегти ваші записи до дати? Спредмет - defintley not. Що буде з дати в години, якщо не днів. Чому ручна спроба тримати. Використовуйте Open-AudIT для автоматичного сканування мереж та запису ваших пристроїв - виробника, моделі, серіалу та понад 100 інших атрибутів. Повний перелік програмного забезпечення, послуг, дисків, відкритих портів, користувачів тощо. Автоматично див., якщо додано атрибут, видалено або змінено.<br/> <br/>Після налаштування Open-AudIT ви можете спати і розслабитися. Чи можна змінити повідомлення електронної пошти до вас за розкладом, наприклад - які нові пристрої ми знайшли цей тиждень? Що нового програмного забезпечення було встановлено на цьому тижні? Чи існують будь-які апаратні зміни минулого місяця?<br/> <br/>Перегляньте на збережені поля легко з власними атрибутами.<br/> <br/>Навіть додавати пристрої, які не підключені до мережі або тих пристроїв, які ви не можете досягти.<br/> <br/>Комп\'ютери, перемикачі, маршрутизатори, принтери або будь-який інший пристрій на вашій мережі - Open-AudIT може слухати всі.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Discoveries are at the very heart of what Open-AudIT does.<br> <br>How else would you know "What is on my network?"<br> <br>Discoveries are prepared data items that enable you to run a discovery upon a network in a single click, without entering the details of that network each and every time.<br> <br></p>'] = '<p>Відкриває себе на самому серці, що робить Open-AudIT.<br/> <br/>Як дізнатися більше про "Що таке в мережі?"<br/> <br/>Ви дізнаєтесь про те, що ви можете запустити відкриття в мережі в один клік, не вказавши деталі цієї мережі, кожен раз.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Discovery Options are a global setting changed in the <a href="../configuration?configuration.name=discovery_default_scan_option">configuration</a>. If you have an Open-AudIT Enterprise license these are settable per discovery and in addition futher customizable as required. Discovery Options are as follows (including an indicitave time to scan an individual IP):<br/><br><strong>UltraFast</strong>: <i>1 second</i>. Scan only the ports that Open-AudIT needs to use to talk to the device and detect an IOS device (WMI, SSH, SNMP, Apple Sync). An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is not considered open. Device must respond to an Nmap ping. Use aggressive timing.<br><br/><strong>SuperFast</strong>: <i>5 seconds</i>. Scan the top 10 TCP and UDP ports, as well as port 62078 (Apple IOS detection). An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is not considered open. Device must respond to an Nmap ping. Use aggressive timing.<br/><br/><strong>Fast</strong>: <i>40 seconds</i>. Scan the top 100 TCP and UDP ports, as well as port 62078 (Apple IOS detection). An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is not considered open. Device must respond to an Nmap ping. Use aggressive timing.<br/><br/><strong>Medium (Classic)</strong>: <i>90 seconds</i>. As close to a traditional Open-AudIT scan as we can make it. Scan the top 1000 TCP ports, as well as 62078 (Apple IOS detection) and UDP 161 (SNMP). An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is considered open (and will trigger device detection). Devices are scanned regardless of a response to an Nmap ping. Use aggressive timing.<br/><br/><strong>Medium</strong>: <i>100 seconds</i>. Scan the top 1000 TCP and top 100 UDP ports, as well as port 62078 (Apple IOS detection). An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is not considered open. Device must respond to an Nmap ping. Use aggressive timing.<br/><br/><strong>Slow</strong>: <i>4 minutes</i>. Scan the top 1000 TCP and top 100 UDP ports, as well as port 62078 (Apple IOS detection). Version detection enabled. An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is considered open (and will trigger device detection). Device must respond to an Nmap ping. Use normal timing.<br/><br/><strong>UltraSlow</strong>: <i>20 minutes</i>. Not recommended. Scan the top 1000 TCP and UDP ports, as well as port 62078 (Apple IOS detection). Devices are scanned regardless of a response to an Nmap ping. Version detection enabled. An <code>open|filtered</code> port is considered open. A <code>filtered</code> port is considered open (and will trigger device detection). Use polite timing.<br/><br/><strong>Custom</strong>: <i>Unknown time</i>. When options other than as set by a standard discovery preset are altered.<br><br></p>'] = '<p>Про компанію Варіанти глобального налаштування змінені в <a href="../configuration?configuration.name=discovery_default_scan_option">конфігурація</a>й Якщо у вас є ліцензія Open-AudIT Enterprise, це встановити таблицю для відкриття та додавання футер налаштовується як це потрібно. Про компанію Варіанти є наступними (в тому числі і індексом часу сканування індивідуального IP):<br/><br/><strong>УльтраФаст</strong>Довідник <i>1 другий</i>й Сканування тільки портів, які повинні використовувати Open-AudIT для обговорення пристрою та виявлення пристрою IOS (WMI, SSH, SNMP, Apple Sync). Анни <code>open|filtered</code> Відкрито порт. А.А. <code>filtered</code> не вважається відкритим. Пристрої повинні реагувати на Nmap ping. Використовуйте агресивні терміни.<br/><br><strong>СуперФаст</strong>Довідник <i>5 хв</i>й Сканування верхнього порту 10 TCP та UDP, а також порт 62078 (Виявлення Apple IOS). Анни <code>open|filtered</code> Відкрито порт. А.А. <code>filtered</code> не вважається відкритим. Пристрої повинні реагувати на Nmap ping. Використовуйте агресивні терміни.<br><br/><strong>Швидкий</strong>Довідник <i>40 хв</i>й Сканування портів 100 TCP і UDP, а також порт 62078 (Виявлення Apple IOS). Анни <code>open|filtered</code> Відкрито порт. А.А. <code>filtered</code> не вважається відкритим. Пристрої повинні реагувати на Nmap ping. Використовуйте агресивні терміни.<br/><br/><strong>Середній (класичний)</strong>Довідник <i>90 хв</i>й Ми можемо самі зателефонувати одержувачу. Сканування топових портів 1000 TCP, а також 62078 (Apple IOS виявлення) та UDP 161 (SNMP). Анни <code>open|filtered</code> Відкрито порт. А.А. <code>filtered</code> Порт вважається відкритим (і буде викликати виявлення пристрою). Пристрої скануються незалежно від відповіді на Nmap ping. Використовуйте агресивні терміни.<br/><br/><strong>Середній</strong>Довідник <i>100 хв</i>й Сканування верхнього 1000 TCP і верхньої 100 UDP портів, а також порту 62078 (Виявлення Apple IOS). Анни <code>open|filtered</code> Відкрито порт. А.А. <code>filtered</code> не вважається відкритим. Пристрої повинні реагувати на Nmap ping. Використовуйте агресивні терміни.<br/><br/><strong>Слив</strong>Довідник <i>4 хвилини</i>й Сканування верхнього 1000 TCP і верхньої 100 UDP портів, а також порту 62078 (Виявлення Apple IOS). Увімкнено виявлення версії. Анни <code>open|filtered</code> Відкрито порт. А.А. <code>filtered</code> Порт вважається відкритим (і буде викликати виявлення пристрою). Пристрої повинні реагувати на Nmap ping. Використання нормального часу.<br/><br/><strong>УльтраСвітло</strong>Довідник <i>20 хвилин</i>й Не рекомендується. Сканування верхніх портів TCP і UDP, а також порт 62078 (Виявлення Apple IOS). Пристрої скануються незалежно від відповіді на Nmap ping. Увімкнено виявлення версії. Анни <code>open|filtered</code> Відкрито порт. А.А. <code>filtered</code> Порт вважається відкритим (і буде викликати виявлення пристрою). Використовуйте полуітні терміни.<br/><br/><strong>Користування</strong>Довідник <i>Невідомий час</i>й При варіантах, крім встановлених за стандартним набором, змінено.<br/><br/></br></br></p>';

$GLOBALS["lang"]['<p>Groups are used as simple lists of devices that match the required conditions. If requested using JSON they return a list of <code>devices.id</code> only. If requested using the web interface, they return the standard column attribute list.<br> <br></p>'] = '<p>Групи використовуються як прості списки пристроїв, які відповідають необхідним умовам. Якщо ви хочете використовувати JSON, вони повертаються список <code>devices.id</code> тільки. Якщо ви хочете використовувати веб-інтерфейс, вони повертаються стандартний список атрибутів стовпця.<br/> <br/></p>';

$GLOBALS["lang"]['<p>If the user logging on to Open-AudIT does not have the access to search LDAP (and you are using OpenLDAP), you can use another account which does have this access. Use the <code>ldap_dn_account</code> and <code>ldap_dn_password</code> to configure this.<br> <br><strong>Helpful Documentation</strong><br> <br>
        <a href="/index.php/auth/help">General Auth Help</a><br> <br>
        <a href="/index.php/faq?name=Using Entra for Auth">Using Entra for Auth</a><br> <br>
        <a href="/index.php/faq?name=Using OKTA for Auth">Using OKTA for Auth</a><br> <br>
        <a href="/index.php/faq?name=Troubleshooting LDAP Logins">Troubleshooting LDAP Logins</a><br> <br>
        <a href="/index.php/faq?name=Users, Roles and Orgs">Users, Roles and Orgs</a><br> <br></p>'] = '<p>Якщо запис користувача на Open-AudIT не має доступу до пошуку LDAP (і ви використовуєте OpenLDAP), ви можете використовувати інший обліковий запис, який має цей доступ. Використання <code>ldap_dn_account</code> і <code>ldap_dn_password</code> налаштувати це.<br/> <br/><strong>Корисна документація</strong><br/> <br/><a href="/index.php/auth/help">Головна Довідка</a><br/> <br/><a href="/index.php/faq?name=Using Entra for Auth">Використання Entra для Auth</a><br/> <br/><a href="/index.php/faq?name=Using OKTA for Auth">Використання OKTA для Auth</a><br/> <br/><a href="/index.php/faq?name=Troubleshooting LDAP Logins">Виправлення несправностей LDAP Увійти</a><br/> <br/><a href="/index.php/faq?name=Users, Roles and Orgs">Користувачі, Ролі та оргії</a><br/> <br/></p>';

$GLOBALS["lang"]['<p>If you add a device type, to display the associated icon you will have to manually copy the .svg formatted file to the directory:<br><em>Linux</em>:/usr/local/open-audit/public/device_images<br><em>Windows</em>: c:\xampp\htdocs\open-audit\device_images<br> <br>If you add a location type, to display the associated icon you will have to manually copy the 32x32px icon to the directory:<br><em>Linux</em>:/usr/local/open-audit/public/images/map_icons<br><em>Windows</em>: c:\xampp\htdocs\open-audit\images\map_icons</p><p>When the <i>resource</i> is a <code>device</code>, valid <i>types</i> are: <code>class</code>, <code>environment</code>, <code>status</code> and <code>type</code>. If the <i>resource</i> is <code>locations</code> or <code>org</code> the only valid <i>type</i> is <code>type</code>. If the <i>resource</i> is a <code>query</code> the only valid <i>type</i> is <code>menu_category</code>.</p>'] = '<p>Якщо ви додаєте тип пристрою, щоб відобразити відповідну іконку, яку ви повинні вручну копіювати файл .<br/><em>Українська</em>:/usr/local/open-audit/public/device_images<br/><em>Головна</em>: c:\xampp\htdocs\open-audit\device_images<br/> <br/>Якщо ви додаєте тип розташування, щоб відобразити відповідну іконку, яку ви повинні вручну скопіювати значок 32x32px до каталогу:<br/><em>Українська</em>:/usr/local/open-audit/public/images/map_icons<br/><em>Головна</em>: c:\xampp\htdocs\open-audit\images\map_icons</p><p>Коли <i>Ресурси</i> є <code>device</code>, дійсний <i>види</i> : <code>class</code>й <code>environment</code>й <code>status</code> і <code>type</code>й Якщо <i>Ресурси</i> є <code>locations</code> або <code>org</code> єдиний дійсний <i>Тип</i> є <code>type</code>й Якщо <i>Ресурси</i> є <code>query</code> єдиний дійсний <i>Тип</i> є <code>menu_category</code>й</p>';

$GLOBALS["lang"]['<p>If you intend to completely audit your cloud machines, do not forget you will also need those credentials saved in Open-AudIT.</p><p>Make sure you allow the correct ports if you are using Microsoft Azure (22 for SSH, etc). Check your Virtual Machine -> Networking rules.<br> <br></p>'] = '<p>Якщо ви плануєте повністю перевірити свої хмарні машини, не забувайте, що вам також потрібно, щоб ці облікові дані були збережені в Open-AudIT.</p><p>Якщо ви використовуєте Microsoft Azure (22 для SSH тощо). Перевірити віртуальну машину -> Правила мережі.<br/> <br/></p>';

$GLOBALS["lang"]['<p>If you select a List type, the "values" field will be enabled. You should put a comma separated list of selectable values here. These will display in a dropdown box whenever the field is edited.<br> <br>Like most other attributes, Fields can be bulk edited. Use the Bulk Edit function as you normally would and you will see the Fields are available for input.<br> <br>View the device details screen, open the section containing the field and (if you have sufficient access) you can click on the field value to edit it.<br> <br></p>'] = '<p>Якщо вибрати тип списку, поле "значення" буде ввімкнено. Ви повинні покласти кому відокремлений список вибраних значень тут. Це буде відображатися в випадаючому ящику, коли поле редаговано.<br/> <br/>Як і більшість інших атрибутів, поля можуть бути масовими редагуваннями. Використовуйте функцію редагування Bulk, як правило, ви побачите поля доступні для входу.<br/> <br/>Переглядайте екран деталі пристрою, відкрийте розділ, що містить поле та (якщо у вас є достатній доступ) можна натиснути на значення поля для редагування його.<br/> <br/></p>';

$GLOBALS["lang"]['<p>In the ever-changing world of computer security where new vulnerabilities are being discovered and patched every day, enforcing security compliance must be a continuous process. It also needs to include a way to make adjustments to policies, as well as periodic assessment and risk monitoring. The OpenSCAP ecosystem provides tools and customizable policies for a quick, cost-effective and flexible implementation of these processes.</p>'] = '<p>У будь-який час, коли новий вразливості є відкритими і патчуються щодня, що забезпечує дотримання безпеки, повинна бути безперервним процесом. Крім того, потрібно віднести шлях до регулювання політики, а також періодичної оцінки та моніторингу ризику. екосистема OpenSCAP забезпечує інструменти та настроювані політики для швидкого, економічно ефективного та гнучкого виконання цих процесів.</p>';

$GLOBALS["lang"]['<p>Integrations allow you to setup device selection and schedules for Open-AudIT to talk to external systems.<br> <br></p>'] = '<p>Інтеграції дозволяють встановлювати вибір пристроїв та розклад для Open-AudIT для обговорення зовнішніх систем.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Nmap timing details are found on the bottom of this linked page <a href="https://nmap.org/book/man-performance.html" target="_blank">https://nmap.org/book/man-performance.html</a>. From that page:<br> <br><em>If you are on a decent broadband or ethernet connection, I would recommend always using -T4 (Aggressive). Some people love -T5 (Insane) though it is too aggressive for my taste. People sometimes specify -T2 (Polite) because they think it is less likely to crash hosts or because they consider themselves to be polite in general. They often do not realize just how slow -T2 really is. Their scan may take ten times longer than a default scan. Machine crashes and bandwidth problems are rare with the default timing options -T3 (Normal) and so I normally recommend that for cautious scanners. Omitting version detection is far more effective than playing with timing values at reducing these problems.</em><footer>Gordon <i>Fyodor</i> Lyon</footer><br> <br></p>'] = '<p>На дні цієї пов\'язаної сторінки <a href="https://nmap.org/book/man-performance.html" target="_blank">JavaScript licenses API Веб-сайт Go1.13.8</a>й З цієї сторінки:<br/> <br/><em>Якщо ви на гідному широкосмуговому або ефірному підключенні, рекомендуємо завжди використовувати -T4 (Aggressive). Деякі люди люблять -T5 (Insane), хоча він занадто агресивний для мого смаку. Люди іноді вказують -T2 (Polite) тому що вони думають, що це менше, ймовірно, щоб збити господарів або тому, що вони вважають себе, щоб бути в цілому. Вони часто не розуміють, як повільно -T2 дійсно є. Їх сканування може зайняти десять разів довше, ніж сканування за замовчуванням. Машинні аварійні несправності та проблеми пропускної здатності рідко зустрічаються з опціями за замовчуванням -T3 (Normal) і так що я зазвичай рекомендую, що для обережних сканерів. Визначення версії є набагато ефективніше, ніж грати з значеннями термінів при зниженні цих проблем.</em><footer>Гори <i>Фьодор</i> Ліон</footer><br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT can be configured to use different methods to authenticate a user and in addition, to create a user account using assigned roles and orgs based on group membership.<br> <br></p>'] = '<p>Open-AudIT може бути налаштований для використання різних методів для ідентифікації користувача та крім того, для створення облікового запису користувача, використовуючи призначені ролі та orgs на основі групового членства.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT can retrieve details about a file or directory of files and monitor these files for changes as per other attributes in the Open-AudIT database.<br> <br>This feature works out of the box for Linux Open-AudIT servers, but needs a change to the service account name under a Windows Open-AudIT server.<br> <br>Supported clients are Windows and Linux.<br> <br></p>'] = '<p>Відкритий IT може отримувати дані про файл або каталог файлів та відстежувати ці файли для змін у базі даних Open-AudIT.<br/> <br/>Ця функція працює з коробки для серверів Linux Open-AudIT, але потребує зміни в ім\'я облікового запису на сервері Windows Open-AudIT.<br/> <br/>Підтримка клієнтів Windows і Linux.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT can retrieve details about a file, ask the native package manager if they are known to it and monitor these files for changes as per other attributes in the Open-AudIT database.<br> <br>Supported clients are Linux only.<br> <br></p>'] = '<p>Відкритий IT може отримувати дані про файл, попросити рідного менеджера пакетів, якщо вони відомі йому і контролювати ці файли для змін в інших атрибутах у базі даних Open-AudIT.<br/> <br/>Підтримувані клієнти тільки Linux.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT can store information in custom fields that are associated with each device.<br> <br>Once an Additional Field has been created it can be used in queries and groups just like any other attribute in the database.<br> <br></p>'] = '<p>Відкритий IT може зберігати інформацію в користувацьких полях, які асоціюються з кожним пристроєм.<br/> <br/>Після створення додаткового поля можна використовувати в запитах і групах, як і будь-який інший атрибут в базі даних.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT comes with many queries inbuilt. If you require a specific query and none of the pre-packaged queries fit your needs, it is quite easy to create a new one and load it into Open-AudIT for running.<br> <br></p>'] = '<p>Open-AudIT поставляється з багатьма запитами, вбудованими. Якщо вам потрібна конкретна запиту і жодна з попередньо упакованих запитів, то це досить легко створити новий і завантажувати його на Open-AudIT для запуску.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT comes with many summaries inbuilt. If you require a specific summary and none of the pre-packaged summaries fit your needs, it is quite easy to create a new one and load it into Open-AudIT for running.<br> <br></p>'] = '<p>Open-AudIT поставляється з безліччю підсумків вбудованих. Якщо вам потрібен спеціальний підсумок і жодна з попередньо упакованих сумок, які відповідають вашим потребам, це досить легко створити новий і завантажувати його на Open-AudIT для бігу.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT is supported by FirstWave with an amazing level of support. If you prefer an active community of support givers, theres that as well. Where else can you talk directly to the developers and get a response within 24 hours? Just try that with other products! Amazing support. Full stop. You need support, we provide support. No ifs or buts. Great support. Period.<br> <br></p>'] = '<p>Open-AudIT підтримується компанією FirstWave з дивовижним рівнем підтримки. Якщо ви віддаєте перевагу активному співтовариству підтримки, то є, що також. Де ще можна говорити безпосередньо розробникам і отримати відповідь протягом 24 годин? Намагайтеся з іншими продуктами! Дивовижна підтримка. Повна зупинка. Ми надаємо підтримку. Ні в якому разі або але Велика підтримка. Період.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Open-AudIT provides multi-tenancy out of the box!<br> <br>Orgs (organisations) in Open-AudIT are a key item. A user has a primary Org as well as a list of Orgs they can access. A user combines this with a list of assigned "Roles" that define what actions they can take on items assigned to the Orgs they have access to. The combination of a users "orgs" and "roles" define what they can and cannot do within Open-AudIT.<br> <br>Most items in Open-AudIT are assigned to an Org. Devices, Locations, Networks, etc.<br> <br>Orgs can have child Orgs. Think of an organisational chart (tree) structure. If a user has access to a specific Org, they also have access to that Orgs descendants. For more information, see this <a href="/index.php/faq?name=Users, Roles and Orgs">FAQ</a>.</p>'] = '<p>Open-AudIT надає багатомовності з коробки!<br/> <br/>Orgs (організації) в Open-AudIT є ключовим елементом. Користувач має первинну Org, а також список організацій, які вони можуть отримати доступ. Користувач поєднує в собі це зі списком призначених «Ролес», які визначають які дії, які вони можуть приймати на предметах, призначених Організаторам, які мають доступ. Поєднання користувачів "оргс" і "роли" визначає, що вони можуть і не можуть робити в межах Open-AudIT.<br/> <br/>Більшість елементів в Open-AudIT присвоєно Org. Пристрої, локації, мережі тощо.<br/> <br/>Orgs може мати дитини Orgs. Думка організаційної діаграми (дерева) структури. Якщо користувач має доступ до конкретного Оргкомітету, вони також мають доступ до цього Оргкомітету. Для отримання додаткової інформації див. це <a href="/index.php/faq?name=Users, Roles and Orgs">Контакти</a>й</p>';

$GLOBALS["lang"]['<p>Open-AudIT provides multi-tenancy out of the box!<br> <br>Orgs (organisations) in Open-AudIT are a key item. A user has a primary Org as well as a list of Orgs they can access. A user combines this with a list of assigned "Roles" that define what actions they can take on items assigned to the Orgs they have access to. The combination of a users "orgs" and "roles" define what they can and cannot do within Open-AudIT.<br> <br>Most items in Open-AudIT are assigned to an Org. Devices, Locations, Networks, etc.<br> <br>Orgs can have child Orgs. Think of an organisational chart (tree) structure. If a user has access to a specific Org, they also have access to that Orgs descendants.</p>'] = '<p>Open-AudIT надає багатомовності з коробки!<br/> <br/>Orgs (організації) в Open-AudIT є ключовим елементом. Користувач має первинну Org, а також список організацій, які вони можуть отримати доступ. Користувач поєднує в собі це зі списком призначених «Ролес», які визначають які дії, які вони можуть приймати на предметах, призначених Організаторам, які мають доступ. Поєднання користувачів "оргс" і "роли" визначає, що вони можуть і не можуть робити в межах Open-AudIT.<br/> <br/>Більшість елементів в Open-AudIT присвоєно Org. Пристрої, локації, мережі тощо.<br/> <br/>Orgs може мати дитини Orgs. Думка організаційної діаграми (дерева) структури. Якщо користувач має доступ до конкретного Оргкомітету, вони також мають доступ до цього Оргкомітету.</p>';

$GLOBALS["lang"]['<p>Quickly view the status of devices on your network.<br> <br></p>'] = '<p>Швидко переглядати стан пристроїв на вашій мережі.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Roles in Open-AudIT are a key item. A user has a primary Org as well as a list of Orgs they can access. A user combines this with a list of assigned Roles that define what actions they can take on items assigned to the Orgs they have access to. The combination of a users "orgs" and "roles" define what they can and cannot do within Open-AudIT.<br> <br>
        Get the complete Open-AudIT Enterprise experience. Creating roles allows fine grained control over what your users can do within Open-AudIT.<br> <br>
        The primary method for authorisation (what a user can do) is based on the users Roles. Default roles are defined as admin, org_admin, reporter and user. Each role has a set of permissions (Create, Read, Update, Delete) for each endpoint. The ability to define additional roles and edit existing roles is enabled in Open-AudIT Enterprise.<br> <br>Roles can also be used with LDAP (Active Directory and OpenLDAP) authorisation. Enterprise licensed installations have the ability to customise the LDAP group for each defined role.<br> <br></p>'] = '<p>Ролі в Open-Aud IT є ключовим елементом. Користувач має первинну Org, а також список організацій, які вони можуть отримати доступ. Користувач поєднує в собі це з переліком призначених ролей, які визначають які дії, які вони можуть приймати на предметах, призначених органам, які мають доступ до. Поєднання користувачів "оргс" і "роли" визначає, що вони можуть і не можуть робити в межах Open-AudIT.<br/> <br/>Отримайте повний досвід роботи підприємства Open-AudIT. Створення ролей дозволяє тонкозернувати контроль над тим, що користувачі можуть здійснюватися в межах Open-AudIT.<br/> <br/>Первинний метод авторизації (що користувач може зробити) базується на ролі користувачів. За замовчуванням ролі адміністратора, org_admin, репортера та користувача. Кожна роль має набір дозволів (справа, читання, оновлення, видалення) для кожного кінцевого пункту. У Open-AudIT Enterprise включена можливість визначити додаткові ролі та редагувати існуючі ролі.<br/> <br/>Ролі також можна використовувати з авторизації LDAP (Active Directory та OpenLDAP). Підприємства ліцензійних установок мають можливість налаштувати групу LDAP для кожної конкретної ролі.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Rules examine attributes and make cahnges based on the appropriate rule.</p>'] = '<p>Правила досліджують атрибути та роблять гонги на основі відповідного правила.</p>';

$GLOBALS["lang"]['<p>Scanning options allow you to easily apply a set of options to a discovery.<br> <br></p>'] = '<p>Параметри сканування дозволяють легко застосувати набір опцій до відкриття.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Simple, intuitive, accurate geographic mapping provided by Google Maps. Open-AudIT leverages Google Maps to provide live, interactive geographic mapping of device locations. Automated conversion of street addresses to geocodes and longitude / latitude.<br> <br>
        </p>'] = '<p>Простий, інтуїтивно зрозумілий, точний географічний картографування, що надається Google Maps. Універсальні набори Open-AudIT Google Maps для забезпечення живої, інтерактивної географічної карти розташування пристроїв. Автоматизоване перетворення вуличних адрес до геокодів та довготи / широта.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Software Packages are used to determine if antivirus, backup, firewall, approved or banned software is installed.<br> <br></p>'] = '<p>Програмні пакети використовуються для визначення, якщо встановлено антивірус, резервне копіювання, брандмауер, схвалене або заборонене програмне забезпечення.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Some examples of valid Subnet attributes are: 192.168.1.1 (a single IP address), 192.168.1.0/24 (a subnet), 192.168.1-3.1-20 (a range of IP addresses).<br> <br><em>NOTE</em> - Only a subnet (as per the examples - 192.168.1.0/24) will be able to automatically create a valid network for Open-AudIT. <br> <br>If you use an Active Directory type, make sure you have appropriate credentials to talk to your Domain Controller already in <a href="../credentials">credentials</a>.<br> <br></p>'] = '<p>Деякі приклади діючих атрибутів Subnet: 192.168.1.1 (єдина IP-адреса), 192.168.1.0/24 (підмережа), 192.168.1-3.1-20 ( діапазон IP-адрес).<br/> <br/><em>ЗАМОВИТИ</em> - Тільки підмережа (як на прикладах - 192.168.1.0/24) зможе автоматично створити дієву мережу для Open-AudIT. <br/> <br/>Якщо ви використовуєте тип Active Directory, переконайтеся, що у вас є відповідні облікові дані, щоб поговорити з вашим контролером домена вже в <a href="../credentials">Кримінал</a>й<br/> <br/></p>';

$GLOBALS["lang"]['<p>Standards are stored in Open-AudIT.<br /><br /><br /><br /></p>'] = '<p>Стандарти зберігаються в Open-AudIT.<br/><br/><br/><br/></p>';

$GLOBALS["lang"]['<p>Supported clients are Linux only.<br> <br></p>'] = '<p>Підтримувані клієнти тільки Linux.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Tasks have a schedule that mirrors the unix cron schedule. The attributes for minute, hour, day_of_month, month, day_of_week all act as per the cron definitions. You can select multiples of these using comma seperated values (no spaces). You can select every value using *.<br> <br>The <code>type</code> of the task can be one of: baselines, collectors, discoveries, queries, reports or summaries.<br> <br>If you wish to schedule a Baseline or Discovery, you will need to create these before creating the tasks. You must use the ID of the type of item in <code>sub_resource_id</code>. For example if you wish to schedule a Discovery, use that particular Discoveries ID in <code>sub_resource_id</code>.<br> <br>The value for <code>uuid</code> is specific to each Open-AudIT server. Your unique value can be found in the configuration.<br> <br>The <code>options</code> attribute is a JSON document containing any extra attributes required to run the task. The extra attributes for reports, queries and summaries are: <code>email_address</code> and <code>format</code>. The extra attribute for Bselines is <code>group_id</code>.<br> <br></p>'] = '<p>Завдання мають графік, який відображає графік роботи синхрону. атрибути за хвилину, час, день_ місяць, день_of_week всі дії за визначеннями cron. Ви можете вибрати декілька даних за допомогою коми, що відтворюються значення (без пробілів). Ви можете вибрати будь-яке значення за допомогою *.<br/> <br/>Про нас <code>type</code> завдання може бути одним з: базових, колекторів, відкриттів, запитів, звітів або підсумків.<br/> <br/>Якщо ви хочете замовити базову або Discovery, вам потрібно створити ці завдання перед створенням завдань. Ви повинні використовувати ідентифікатор типу елемента в <code>sub_resource_id</code>й Наприклад, якщо ви хочете замовити Discovery, скористайтеся тим самим ідентифікатором Discoveries в <code>sub_resource_id</code>й<br/> <br/>Вартість для <code>uuid</code> є специфічним для кожного сервера Open-AudIT. Ваше унікальне значення можна знайти в конфігурації.<br/> <br/>Про нас <code>options</code> атрибут є документом JSON, що містить додаткові атрибути, необхідні для виконання завдання. Додаткові атрибути для звітів, запитів та підсумків: <code>email_address</code> і <code>format</code>й Додатковий атрибут для Bselines <code>group_id</code>й<br/> <br/></p>';

$GLOBALS["lang"]['<p>The <code>type</code> of the location will assign its icon.<br> <br></p>'] = '<p>Про нас <code>type</code> Місце розташування призначає іконку.<br/> <br/></p>';

$GLOBALS["lang"]['<p>The Attributes endpoint allows you to add customized values to different attributes in Open-AudIT, at the moment this feature works on the Class, Environment, Status and Type attributes on Devices, the Type attribute for both Locations and Orgs as well as the Menu Category for Queries. If you view an item of one of the prvious types (say view a Lkocation) you will notice the Type attribute must be selected from a drop-down box. This is where those values are stored. Hence, if you would like to add a new Type to be chosen for a Location, add it using the Attributes feature.</p>'] = '<p>TheAttributes endpoint дозволяє додати індивідуальні значення для різних атрибутів у Open-AudIT, в даний момент ця функція працює на класі, навколишньому середовищу, статусі та атрибути типу на пристроях, атрибут типу для обох локаціях та органах, а також категорії меню для запитів. Якщо ви переглядаєте елемент одного з найсвіжіших типів (дивитись Lkocation) ви помітите атрибут типу, необхідно вибрати з випадаючого ящика. Це де зберігаються ці значення. Отже, якщо ви хочете додати новий тип, який буде обраний для локації, додайте його за допомогою функції атрибутів.</p>';

$GLOBALS["lang"]['<p>The Collectors feature enables you to easily manage many "collector" computers that perform network discovery. All Collectors are centrally controlled from the Server. The only required network ports between the Collector and the Server are 80 and/or 443.<br> <br>It makes managing disparate networks quick, easy and simple. Open-AudIT Enterprise licensees get a single collector license included and have the option to buy more as required..<br> <br></p>'] = '<p>Збірник дозволяє легко керувати багатьма комп\'ютерами "колектор", які виконують мережеве відкриття. Всі колектори централізовано контролюються з сервера. Єдині необхідні мережеві порти між колектором і сервером є 80 і / або 443.<br/> <br/>Управління депарацією мереж швидко, легко і просто. Юридична компанія Open-AudIT Enterprise надає ліцензію на один колектор, що входить до складу і має можливість придбати більше, ніж потрібно..<br/> <br/></p>';

$GLOBALS["lang"]['<p>The SELECT section of your SQL <em>must</em> contain fully qualified columns. IE - <code>SELECT devices.id AS `devices.id`, devices.name AS `devices.name` ...</code>.<br> <br>The WHERE section of your SQL <em>must</em> contain <code>WHERE @filter</code> so Open-AudIT knows to restrict your query to the appropriate Orgs. SQL not containing this condition will result in the query failing to be created, unless you have the Admin role.<br> <br>An example query SQL showing attributes on devices that have an <code>os_group</code> attribute of "Linux" - <br><code>SELECT devices.id AS `devices.id`, devices.icon AS `devices.icon`, devices.type AS `devices.type`, devices.name AS `devices.name`, devices.os_name AS `devices.os_name` FROM devices WHERE @filter AND devices.os_group = "Linux"</code><br> <br></p>'] = '<p>Розділ SELECT вашого SQL <em>обов\'язково</em> містить повністю кваліфіковані стовпці. Э - <code>SELECT devices.id AS `devices.id`, devices.name AS `devices.name` ...</code>й<br/> <br/>Розділ WHERE вашого SQL <em>обов\'язково</em> В наявності <code>WHERE @filter</code> Тому Open-AudIT знає, щоб обмежити вашу запит на відповідні органи. Якщо у вас є роль адміністратора.<br/> <br/>Приклад запиту SQL показує атрибути на пристроях, які мають <code>os_group</code> атрибут "Linux" - <br/><code>SELECT devices.id AS `devices.id`, devices.icon AS `devices.icon`, devices.type AS `devices.type`, devices.name AS `devices.name`, devices.os_name AS `devices.os_name` FROM devices WHERE @filter AND devices.os_group = "Linux"</code><br/> <br/></p>';

$GLOBALS["lang"]['<p>The SELECT section of your SQL <em>must</em> only contain <code>DISTINCT(devices.id)</code>.<br> <br>The WHERE section of your SQL <em>must</em> contain <code>WHERE @filter</code> so Open-AudIT knows to restrict your query to the appropriate Orgs. SQL not containing this condition will result in the group failing to be created.<br> <br>An example for SQL to select all devices running the Debian OS - <code>SELECT DISTINCT(devices.id) FROM devices WHERE @filter AND devices.os_family = "Debian"</code><br> <br></p>'] = '<p>Розділ SELECT вашого SQL <em>обов\'язково</em> тільки містять <code>DISTINCT(devices.id)</code>й<br/> <br/>Розділ WHERE вашого SQL <em>обов\'язково</em> В наявності <code>WHERE @filter</code> Тому Open-AudIT знає, щоб обмежити вашу запит на відповідні органи. Не містить цього стану призведе до створення групи.<br/> <br/>Приклад для SQL для вибору всіх пристроїв, що працюють на Debian OS - <code>SELECT DISTINCT(devices.id) FROM devices WHERE @filter AND devices.os_family = "Debian"</code><br/> <br/></p>';

$GLOBALS["lang"]['<p>The license endpoint allows you to track the number of licenses found on your devices.<br> <br>To create an entry to track your licenses you <em>must</em> to provide a name, an organization, the number of licenses acquired and the name of the software. On the field <code>match_string</code> you must provide the name of the software that you want to track, you can use the percent sign (%) as a wildcard in the match_string.<br> <br></p>'] = '<p>Ліцензійна кінцева точка дозволяє відстежувати кількість ліцензій, що знаходяться на ваших пристроях.<br/> <br/>Щоб створити запис для відстеження ваших ліцензій <em>обов\'язково</em> надати ім\'я, організацію, кількість придбаних ліцензій та ім\'я програмного забезпечення. На поле <code>match_string</code> Ви повинні надати ім\'я програмного забезпечення, яке ви хочете відстежити, ви можете використовувати знак відсотка (%) як дикийкарт в матчі_string.<br/> <br/></p>';

$GLOBALS["lang"]['<p>The network should be in the format 192.168.1.0/24.<br> <br></p>'] = '<p>Мережа повинна бути в форматі 192.168.1.0/24.<br/> <br/></p>';

$GLOBALS["lang"]['<p>The primary and optional secondary items should be fully qualified - ie, devices.type or software.name.<br> <br></p>'] = '<p>Основні і додаткові вторинні елементи повинні бути повністю кваліфікованими - тобто, пристрої. тип або програмне забезпечення. ім\'я.<br/> <br/></p>';

$GLOBALS["lang"]['<p>There is no need to do anything if you are running Open-AudIT on a Linux server.<br>
<br>
Windows clients are just fine and require no special actions, however.... to enable this feature the audit script must be run locally on the target Windows system. It cannot be run remotely as we do with WMI calls when running the audit script on one Windows machine, while targeting a second Windows machine. To do this we need to copy the audit script to the target Windows machine and then run it. Unfortunately the service account that Apache runs under is the Local System account. This account has no access to remote (network based) resources. To work around this issue the service must be run under another account. It is easiest to just use the local Administrator account, but you can try any account you like as long as it has the required privileges. The Local System account has as much local access as the local Administrator account.<br>
<br>
See our page on enabling <a href="/index.php/faq?name=Running Open-AudIT Apache Service Under Windows">Running Open-AudIT Apache Service Under Windows</a></p>'] = '<p>Не потрібно нічого робити, якщо ви працюєте Open-AudIT на сервері Linux.<br/><br/>Клієнти Windows просто тонкі і не вимагають спеціальних дій, однак.... Щоб увімкнути цю функцію скрипт аудиту необхідно запустити локально на цільовій системі Windows. Ви не можете керувати віддалено, оскільки ми робимо з WMI дзвінками при запуску скрипту аудиту на одній машині Windows, при налаштуванні другої машини Windows. Для цього нам необхідно копіювати скрипт аудиту на цільову машину Windows, а потім запустити його. На жаль, сервісний обліковий запис, який працює в Apache, є локальним обліковим записом системи. Цей обліковий запис не має доступу до віддалених (мережних ресурсів) ресурсів. Щоб працювати над цим питанням, служба повинна працювати під іншим обліковим записом. Ви можете спробувати будь-який обліковий запис, який вам подобається, доки він має необхідні привілеї. У локальному обліковому записі адміністратора локальний доступ.<br/><br/>Переглянути нашу сторінку <a href="/index.php/faq?name=Running Open-AudIT Apache Service Under Windows">Запуск Open-AudIT Apache Service Під Windows</a></p>';

$GLOBALS["lang"]['<p>These are the devices that live within a rack.<br> <br></p>'] = '<p>Це пристрої, які живуть в стійці.<br/> <br/></p>';

$GLOBALS["lang"]['<p>This endpoint enables you to add your cloud infrastructure details. Open-AudIT will then reach out to your clouds using their native API and return your servers, just like any other device in Open-AudIT.<br> <br><em>NOTE</em> - To use this feature, we <em>must</em> enable the configuration items match_mac (for AWS) and match_hostname (for Azure). This will be done automatically the first time a cloud discovery is executed.<br> <br>Credentials for your cloud (<a href="/index.php/faq?name=Credentials for Microsoft Azure used in Cloud Discovery">Azure</a> or <a href="/index.php/faq?name=Credentials for Amazon AWS used in Cloud Discovery">AWS</a>) are required.<br> <br></p>'] = '<p>Ця кінцева точка дозволяє вам додати деталі хмарної інфраструктури. Open-AudIT до ваших хмар, використовуючи свій рідний API і повертає ваші сервери, як і будь-який інший пристрій у Open-AudIT.<br/> <br/><em>ЗАМОВИТИ</em> - Використовуйте цю функцію, ми <em>обов\'язково</em> Увімкніть елементи конфігурації, відповідні_mac (для AWS) і відповідні_hostname (для Azure). Це буде зроблено автоматично в перший раз, коли виконується хмарне відкриття.<br/> <br/>Випадкові значення для вашої хмари (<a href="/index.php/faq?name=Credentials for Microsoft Azure used in Cloud Discovery">Українська</a> або <a href="/index.php/faq?name=Credentials for Amazon AWS used in Cloud Discovery">АВІ</a>) обов\'язкові.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Vulnerabilities reporting based on the NIST CVE feed.<br> <br></p>'] = '<p>Вульбаритність звітності на основі корму NIST CVE.<br/> <br/></p>';

$GLOBALS["lang"]['<p>We initially setup the default list of scripts with the default options. These default scripts cannot be deleted. You can create additional scripts for use by you as required. Your script will be based on one of the existing scripts and have custom options applied. The scripts can then be downloaded from the list page at menu -> Discover -> Audit Scripts -> List Audit Scripts<br> <br></p>'] = '<p>Ми спочатку встановлюємо список типових сценаріїв з параметрами за замовчуванням. Ці скрипти за замовчуванням не можна видалити. Ви можете створювати додаткові скрипти для використання вам, як це потрібно. Ваш скрипт буде базуватися на одному з існуючих сценаріїв і мають спеціальні параметри, які застосовуються. Списки можна завантажити з сторінки списку в меню -> Знайти -> Аудит сценаріїв -> Список сценаріїв аудиту<br/> <br/></p>';

$GLOBALS["lang"]['<p>When using Regex for matching, a helpful page can be found on the <a href="https://www.php.net/manual/en/regexp.reference.meta.php" target="_blank"> PHP website</a>. Some differences to Perl Regex can be found <a href="https://www.php.net/manual/en/reference.pcre.pattern.differences.php" target="_blank">here</a>.</p>'] = '<p>При використанні Regex для узгодження, корисною сторінкою можна знайти на <a href="https://www.php.net/manual/en/regexp.reference.meta.php" target="_blank"> Веб-сайт PHP</a>й Деякі відмінності в Perl Regex можна знайти <a href="https://www.php.net/manual/en/reference.pcre.pattern.differences.php" target="_blank">Головна</a>й</p>';

$GLOBALS["lang"]['<p>Widgets can easily be created to show whatever is specific to your environment on your dashboards.<br> <br></p>'] = '<p>Віджети можуть бути створені для того, щоб показати, що це специфічне для вашого середовища на панелі інструментів.<br/> <br/></p>';

$GLOBALS["lang"]['<p>With Open-AudIT Professional and Enterprise you can automate and schedule discoveries, report generation, or baseline checks to run when you want, and as often as you need. Schedule your discoveries to run nightly and reports to be generated and emailed to key personnel each morning. Complex or simple schedules, device discovery and report generation is just a click away.<br> <br>Create individual discovery schedules for each subnet or AD controller, add in reports to be created for targeted audiences. Develop simple or complex schedules to support company needs, avoid backups or impact to operations, or simply to spread the load and speed-up audit completion.<br> <br></p>'] = '<p>З Open-AudIT Професіонал і підприємство ви можете автоматизувати і відкривати графіки, створення звітів або базових перевірок для запуску, коли ви хочете, і як часто, як вам потрібно. Заплануйте свої покази, щоб запустити нічний час і звіти, щоб бути сформованими та по електронній пошті для ключових співробітників. Комплексні або прості графіки, виявлення пристроїв та генерації звітів просто натисніть кнопку.<br/> <br/>Створіть індивідуальні графіки відкриття для кожного підмережі або контролера AD, додайте до звітів для цільових аудиторій. Розробити прості або складні графіки для підтримки потреб компанії, уникнути резервних копій або впливу на операції, або просто поширити завершення перевірки навантаження та швидкості.<br/> <br/></p>';

$GLOBALS["lang"]['<p>You can create a script with all the options for any of the existing audit scripts - not just Windows. AIX, ESX, Linux, OSX and Windows are all covered.<br> <br></p>'] = '<p>Ви можете створити скрипт з усіма варіантами для будь-якого з існуючих сценаріїв аудиту - не тільки Windows. AIX, ESX, Linux, OSX і Windows все включено.<br/> <br/></p>';

$GLOBALS["lang"]['<p>You can use the percent % sign as a wildcard in the match_string.<br> <br></p>'] = '<p>Ви можете використовувати % знак як дикийкартка в матчі_string.<br/> <br/></p>';

$GLOBALS["lang"]['<p>Your racks help refine exactly where your devices are located.<br> <br></p>'] = '<p>Ваші стійки допомагають рефінувати саме там, де розташовані пристрої.<br/> <br/></p>';

$GLOBALS["lang"]['A Google Maps API Key is required for this function.'] = 'Карта Google Контакти Для цієї функції потрібно ключ.';

$GLOBALS["lang"]['A JSON array of device IDs that will have this benchmark executed.'] = 'JSON масив ідентифікаторів пристроїв, які будуть мати цей еталон, виконаний.';

$GLOBALS["lang"]['A JSON array of objects matching the software name taken from the CVE, enriched with the software name retrieved by Open-AudIT.'] = 'JSON масив об\'єктів, що відповідають назві програмного забезпечення, взятому з CVE, збагачений назвою програмного забезпечення, отриманим від Open-AudIT.';

$GLOBALS["lang"]['A JSON array of values to test for this vulnerability.'] = 'JSON масив значень для тестування для цієї вразливості.';

$GLOBALS["lang"]['A JSON document containing the Orgs assigned to this user. IDs taken from <code>orgs.id</code>. If a user has access to an Org, they have access to that Orgs descendants.'] = 'Документ JSON, що містить Orgs, призначених для цього користувача. Ідентифікатори, взяті з <code>orgs.id</code>й Якщо користувач має доступ до Org, вони мають доступ до цього Orgs-нащадків.';

$GLOBALS["lang"]['A JSON document containing the required attributes depending on <code>scripts.type</code>.'] = 'Документ JSON, що містить необхідні атрибути в залежності від <code>scripts.type</code>й';

$GLOBALS["lang"]['A JSON document containing the required attributes overriding the chosen discovery_scan_options.'] = 'Документ JSON, що містить необхідні атрибути, що перенесли вибране відкриття_scan_options.';

$GLOBALS["lang"]['A JSON document containing the required attributes overriding the default device match options.'] = 'Документ JSON, що містить необхідні атрибути, що надягають параметри відповідності за замовчуванням.';

$GLOBALS["lang"]['A JSON document containing the roles assigned to this user. Role names taken from <code>roles.name</code>.'] = 'Документ JSON, що містить ролі, призначених для цього користувача. Рольові імена, взяті з <code>roles.name</code>й';

$GLOBALS["lang"]['A JSON object containing an array of attributes to change if the match occurs.'] = 'Об\'єкт JSON, що містить масив атрибутів для зміни, якщо відбувається матч.';

$GLOBALS["lang"]['A JSON object containing an array of attributes to match.'] = 'Об\'єкт JSON, що містить масив атрибутів, щоб відповідати.';

$GLOBALS["lang"]['A JSON object containing collection specific options.'] = 'Об\'єкт JSON, що містить певні параметри збору.';

$GLOBALS["lang"]['A JSON object populated via a Cloud discovery.'] = 'Об\'єкт JSON, що знаходиться за допомогою хмарного відкриття.';

$GLOBALS["lang"]['A JSON representation containing the details of the queue item to be executed.'] = 'Представництва JSON, що містить деталі черги для виконання.';

$GLOBALS["lang"]['A JSON representation of the fields for this integration.'] = 'JSON представлення полів для цієї інтеграції.';

$GLOBALS["lang"]['A JSON representation of the individual tests and their results on all devices this baseline has been run against.'] = 'На всіх пристроях дана базова лінія була запущена.';

$GLOBALS["lang"]['A JSON representation of the tests that make up this policy.'] = 'JSON представлення тестів, які роблять цю політику.';

$GLOBALS["lang"]['A URL to a file to download.'] = 'URL на файл для завантаження.';

$GLOBALS["lang"]['A calculated field that displays the number of times this piece of software was found on the computers in the selected Org (and its descendants if configured).'] = 'Розраховано поле, що відображає кількість разів це програмне забезпечення було знайдено на комп\'ютерах у вибраному Org (і його нащадки, якщо налаштовано).';

$GLOBALS["lang"]['A collector is either in Collector or Stand-Alone mode.'] = 'Колектор є або в колекціонерному або стаціонарному режимі.';

$GLOBALS["lang"]['A comma separated list of applicable CVEs.'] = 'Відокремлений список відповідних CVEs.';

$GLOBALS["lang"]['A comma separated list of values, one of which can be selected.'] = 'Відокремлений список значень, один з яких можна вибрати.';

$GLOBALS["lang"]['A command to run. When the agent is Windows based, this command is run from within the powershell agent.'] = 'Команда для запуску. Коли агент є Windows, це команда працює від агента Powershell.';

$GLOBALS["lang"]['A list of custom TCP ports to scan (22 is SSH, 135 is WMI, 62078 is iPhone sync).'] = 'Список користувальницьких портів TCP для сканування (22 - SSH, 135 - WMI, 62078 - iPhone sync).';

$GLOBALS["lang"]['A list of custom UDP ports to scan (161 is SNMP).'] = 'Список користувальницьких портів UDP для сканування (161 - SNMP).';

$GLOBALS["lang"]['A lower number means it will be applied before other rules.'] = 'До інших правил наноситься нижній номер.';

$GLOBALS["lang"]['A lower number means it will be applied before other rules. The default weight is 100.'] = 'До інших правил наноситься нижній номер. Вага за замовчуванням 100.';

$GLOBALS["lang"]['A password (stored as a hash) that enables logon when using application authentication.'] = 'Пароль (зберігати як хеш), що дозволяє логотипувати при використанні автентифікації програми.';

$GLOBALS["lang"]['A routing domain or address space where the IP addresses and MAC addresses are unique.'] = 'Відправлення доменного або адресного простору, в якому адреси IP і MAC є унікальними.';

$GLOBALS["lang"]['A security zone is a administrative domain or policy domain within the Network Domain.'] = 'Зона безпеки є адміністративним доменом або політикою в межах мережевого домену.';

$GLOBALS["lang"]['A short description of the log entry.'] = 'Короткий опис входу в журнал.';

$GLOBALS["lang"]['A string that matches the <code>software.name</code> attribute. You can use the standard SQL wildcard of percent (%) to match one or more characters.'] = 'рядок, яка відповідає рядку <code>software.name</code> атрибут. Ви можете використовувати стандартний SQL Wildcard відсотків (%), щоб відповідати одному або більше символів.';

$GLOBALS["lang"]['A vulnerability affecting availability may allow attackers to disrupt services, crash systems, or cause denial-of-service (DoS) (None, Low, High).'] = 'Уразливість, що впливає на наявність, може дозволити атакуючих агентів для порушення послуг, аварійних систем, або викликати відмово-сервіс (DoS) (не, низький, високий).';

$GLOBALS["lang"]['A vulnerability affecting confidentiality may allow attackers to read sensitive data, such as personal information, credentials, or proprietary business data (None, Low, High).'] = 'Уразливість, що впливає на конфіденційність, може дозволити атакуючих, щоб читати конфіденційні дані, такі як особиста інформація, облікові дані або комерційні дані (не, низький, високий).';

$GLOBALS["lang"]['A vulnerability affecting integrity may allow attackers to modify data, inject malicious code, or alter system configurations (None, Low, High).'] = 'Уразливість, що впливає на цілісність, може дозволити атакувальникам змінювати дані, вводити шкідливий код або змінити налаштування системи (не, низький, високий).';

$GLOBALS["lang"]['AD Group'] = 'Група компаній';

$GLOBALS["lang"]['ADSL, HFC, ISDN, etc.'] = 'ADSL, HFC, ISDN та ін.';

$GLOBALS["lang"]['AIX'] = 'Аікс';

$GLOBALS["lang"]['ALL IPs'] = 'Всі IP-адреси';

$GLOBALS["lang"]['API / Web Access'] = 'API / Веб-доступ';

$GLOBALS["lang"]['API Documentation'] = 'Документація API';

$GLOBALS["lang"]['API Key required.'] = 'Необхідний ключ API.';

$GLOBALS["lang"]['API Result'] = 'Пошук API';

$GLOBALS["lang"]['About'] = 'Про нас';

$GLOBALS["lang"]['Accept'] = 'Прийняти';

$GLOBALS["lang"]['access_point'] = 'Точка доступу';

$GLOBALS["lang"]['Access Point'] = 'Точка доступу';

$GLOBALS["lang"]['access_token'] = 'Доступ Token';

$GLOBALS["lang"]['Access Token'] = 'Доступ Token';

$GLOBALS["lang"]['ack_by'] = 'Ака Б';

$GLOBALS["lang"]['Ack By'] = 'Ака Б';

$GLOBALS["lang"]['ack_date'] = 'Дата завантаження';

$GLOBALS["lang"]['Ack Date'] = 'Дата завантаження';

$GLOBALS["lang"]['ack_time'] = 'Ack час';

$GLOBALS["lang"]['Ack Time'] = 'Ack час';

$GLOBALS["lang"]['action'] = 'Дія';

$GLOBALS["lang"]['Action'] = 'Дія';

$GLOBALS["lang"]['action_audit'] = 'Аудит ефективності';

$GLOBALS["lang"]['Action Audit'] = 'Аудит ефективності';

$GLOBALS["lang"]['action_command'] = 'Командування дій';

$GLOBALS["lang"]['Action Command'] = 'Командування дій';

$GLOBALS["lang"]['action_date'] = 'Дата дії';

$GLOBALS["lang"]['Action Date'] = 'Дата дії';

$GLOBALS["lang"]['action_devices_assigned_to_location'] = 'Дія Пристрої, призначених для локації';

$GLOBALS["lang"]['Action Devices Assigned To Location'] = 'Дія Пристрої, призначених для локації';

$GLOBALS["lang"]['action_devices_assigned_to_org'] = 'Дія Пристрої, призначених для організації';

$GLOBALS["lang"]['Action Devices Assigned To Org'] = 'Дія Пристрої, призначених для організації';

$GLOBALS["lang"]['action_download'] = 'Дія Завантажити';

$GLOBALS["lang"]['Action Download'] = 'Дія Завантажити';

$GLOBALS["lang"]['action_uninstall'] = 'Дію Uninstall';

$GLOBALS["lang"]['Action Uninstall'] = 'Дію Uninstall';

$GLOBALS["lang"]['actioned'] = 'Дія';

$GLOBALS["lang"]['Actioned'] = 'Дія';

$GLOBALS["lang"]['actioned_by'] = 'Дія';

$GLOBALS["lang"]['Actioned By'] = 'Дія';

$GLOBALS["lang"]['actioned_date'] = 'Дата дії';

$GLOBALS["lang"]['Actioned Date'] = 'Дата дії';

$GLOBALS["lang"]['actions'] = 'Акції';

$GLOBALS["lang"]['Actions'] = 'Акції';

$GLOBALS["lang"]['Activate'] = 'Активувати';

$GLOBALS["lang"]['Activate Free License'] = 'Безкоштовна ліцензія';

$GLOBALS["lang"]['Activate Key'] = 'Активувати ключ';

$GLOBALS["lang"]['Activate a free Enterprise license'] = 'Активувати ліцензію безкоштовного підприємства';

$GLOBALS["lang"]['Active'] = 'Активний';

$GLOBALS["lang"]['Active / Active'] = 'Активний / Активний';

$GLOBALS["lang"]['Active / Passive'] = 'Активний / Пасивний';

$GLOBALS["lang"]['Active Directory'] = 'Активний каталог';

$GLOBALS["lang"]['Active Directory Domain'] = 'Статус на сервери';

$GLOBALS["lang"]['active_directory_ou'] = 'Активний каталог Ou';

$GLOBALS["lang"]['Active Directory Ou'] = 'Активний каталог Ou';

$GLOBALS["lang"]['Active Directory Server'] = 'Статус на сервери';

$GLOBALS["lang"]['ad_domain'] = 'Статус на сервери';

$GLOBALS["lang"]['Ad Domain'] = 'Статус на сервери';

$GLOBALS["lang"]['ad_group'] = 'Група компаній';

$GLOBALS["lang"]['Ad Group'] = 'Група компаній';

$GLOBALS["lang"]['ad_server'] = 'Статус на сервери';

$GLOBALS["lang"]['Ad Server'] = 'Статус на сервери';

$GLOBALS["lang"]['Add'] = 'Додати';

$GLOBALS["lang"]['Add Credentials'] = 'Додати облікові дані';

$GLOBALS["lang"]['Add Device'] = 'Додати пристрій';

$GLOBALS["lang"]['Add Device to Application'] = 'Додати пристрій до програми';

$GLOBALS["lang"]['Add Device to Cluster'] = 'Додати пристрій до кластеру';

$GLOBALS["lang"]['Add Exception'] = 'Додати прийом';

$GLOBALS["lang"]['Add Field'] = 'Додати поле';

$GLOBALS["lang"]['Add If'] = 'Додати';

$GLOBALS["lang"]['Add Policies from Device'] = 'Додавання поліцій з пристрою';

$GLOBALS["lang"]['Add Policy'] = 'Політика';

$GLOBALS["lang"]['Add Then'] = 'Додати';

$GLOBALS["lang"]['Add image'] = 'Додати зображення';

$GLOBALS["lang"]['additional_items'] = 'Додаткові товари';

$GLOBALS["lang"]['Additional Items'] = 'Додаткові товари';

$GLOBALS["lang"]['address'] = 'Контакти';

$GLOBALS["lang"]['Address'] = 'Контакти';

$GLOBALS["lang"]['Admin'] = 'Головна';

$GLOBALS["lang"]['admin_status'] = 'Статус на сервери';

$GLOBALS["lang"]['Admin Status'] = 'Статус на сервери';

$GLOBALS["lang"]['advanced'] = 'Головна';

$GLOBALS["lang"]['Advanced'] = 'Головна';

$GLOBALS["lang"]['Afghanistan'] = 'Українська';

$GLOBALS["lang"]['agents'] = 'Агенти';

$GLOBALS["lang"]['Agents'] = 'Агенти';

$GLOBALS["lang"]['Aggressive'] = 'Агрегати';

$GLOBALS["lang"]['Aland Islands'] = 'Аландські острови';

$GLOBALS["lang"]['Albania'] = 'Албанія';

$GLOBALS["lang"]['alert_style'] = 'Стиль вставки';

$GLOBALS["lang"]['Alert Style'] = 'Стиль вставки';

$GLOBALS["lang"]['Algeria'] = 'Алжир';

$GLOBALS["lang"]['algorithm'] = 'Алгоритм';

$GLOBALS["lang"]['Algorithm'] = 'Алгоритм';

$GLOBALS["lang"]['alias'] = 'Альтанка';

$GLOBALS["lang"]['Alias'] = 'Альтанка';

$GLOBALS["lang"]['All'] = 'Всі';

$GLOBALS["lang"]['All IPs'] = 'Всі IP-адреси';

$GLOBALS["lang"]['All Policies'] = 'Всі правила';

$GLOBALS["lang"]['All Queued Items'] = 'Усі товари';

$GLOBALS["lang"]['Amazon AWS Fields'] = 'Amazon AWS Сфери';

$GLOBALS["lang"]['American Samoa'] = 'Американський Самоа';

$GLOBALS["lang"]['An array of <code>benchmarks.id</code>.'] = 'масив <code>benchmarks.id</code>й';

$GLOBALS["lang"]['An array of <code>devices.id</code>.'] = 'масив <code>devices.id</code>й';

$GLOBALS["lang"]['An array of object representing external links to more information.'] = 'Багато об\'єктів, що представляють зовнішні посилання на більш детальну інформацію.';

$GLOBALS["lang"]['An encrypted JSON document containing the required attributes depending on the <code>credentials.type</code>.'] = 'Зашифрований документ JSON, що містить необхідні атрибути залежно від <code>credentials.type</code>й';

$GLOBALS["lang"]['An indication of the level of service required by this site.'] = 'Показання рівня сервісу, необхідний цим сайтом.';

$GLOBALS["lang"]['An internal field that indicates if the discovery has completed.'] = 'Внутрішнє поле, яке вказує на те, що відкриття завершено.';

$GLOBALS["lang"]['An optional GeoCode'] = 'Додатковий GeoCode';

$GLOBALS["lang"]['An optional password to use sudo.'] = 'Додатковий пароль для використання sudo.';

$GLOBALS["lang"]['Andorra'] = 'Андорра';

$GLOBALS["lang"]['Angola'] = 'Ангола';

$GLOBALS["lang"]['Anguilla'] = 'Ангілья';

$GLOBALS["lang"]['Antarctica'] = 'Антарктиди';

$GLOBALS["lang"]['AntiVirus'] = 'Антивірус';

$GLOBALS["lang"]['Antigua and Barbuda'] = 'Антигуа і Барбуда';

$GLOBALS["lang"]['Antivirus'] = 'Антивірус';

$GLOBALS["lang"]['Any TCP ports (comma seperated, no spaces) you wish to exclude from this discovery. Only available when using Nmap 7+.'] = 'Будь-які порти TCP (комма, що відхилено, немає пробілів) ви хочете виключити з цього відкриття. Тільки доступні при використанні Nmap 7+.';

$GLOBALS["lang"]['Any UDP ports (comma seperated, no spaces) you wish to exclude from this discovery. Only available when using Nmap 7+.'] = 'Будь-які порти UDP (комісія, що не пробілів) ви хочете виключити з цього відкриття. Тільки доступні при використанні Nmap 7+.';

$GLOBALS["lang"]['Any additional documentation you need.'] = 'Будь-яка необхідна додаткова документація.';

$GLOBALS["lang"]['Any additional notes you care to make.'] = 'Будь-які додаткові ноти, які ви піклуєтеся, щоб зробити.';

$GLOBALS["lang"]['Any devices will be assigned to this Org when they run their audit script (if set). Links to <code>orgs.id</code>.'] = 'Будь-які пристрої будуть призначені для цього Org, коли вони запускають їх сценарій аудиту (якщо встановити). Посилання <code>orgs.id</code>й';

$GLOBALS["lang"]['Any discovered devices will be assigned to this Location if set. Links to <code>locations.id</code>.'] = 'Будь-які відкриті пристрої будуть призначені для цього Місцезнаходження, якщо встановити. Посилання <code>locations.id</code>й';

$GLOBALS["lang"]['Any discovered devices will be assigned to this Location when they run their audit script (if set). Links to <code>locations.id</code>.'] = 'Будь-які відкриті пристрої будуть призначені для цього Місцезнаходження, коли вони запускають їх сценарій аудиту (якщо встановити). Посилання <code>locations.id</code>й';

$GLOBALS["lang"]['Any discovered devices will be assigned to this Org if set. If not set, they are assigned to the <code>org_id</code> of this discovery. Links to <code>orgs.id</code>.'] = 'Будь-які відкриті пристрої будуть призначені для цього Org. Якщо не встановлено, вони призначають <code>org_id</code> з цього відкриття. Посилання <code>orgs.id</code>й';

$GLOBALS["lang"]['Any required filter. NOTE: When type = traffic, this represents the font-awesome icon.'] = 'Будь-який необхідний фільтр. НЕБЕ: Коли тип = трафік, це являє собою піктограму.';

$GLOBALS["lang"]['Any specific TCP ports you wish tested (comma seperated, no spaces).'] = 'Будь-які конкретні порти TCP, які ви хочете протестувати (комісія, не пробілів).';

$GLOBALS["lang"]['Any specific UDP ports you wish tested (comma seperated, no spaces).'] = 'Будь-які конкретні порти УДП, які ви хочете протестувати (комісія, непростір).';

$GLOBALS["lang"]['Application'] = 'Додаток';

$GLOBALS["lang"]['application_id'] = 'Код заявки';

$GLOBALS["lang"]['Application ID'] = 'Код заявки';

$GLOBALS["lang"]['Application Licenses'] = 'Ліцензії програми';

$GLOBALS["lang"]['Application, Operating System or Hardware.'] = 'Застосування, операційна система або обладнання.';

$GLOBALS["lang"]['applications'] = 'Додатки';

$GLOBALS["lang"]['Applications'] = 'Додатки';

$GLOBALS["lang"]['applied'] = 'Приклад';

$GLOBALS["lang"]['Applied'] = 'Приклад';

$GLOBALS["lang"]['Approved'] = 'Затвердження';

$GLOBALS["lang"]['April'] = 'Квітень';

$GLOBALS["lang"]['architecture'] = 'Архітектура';

$GLOBALS["lang"]['Architecture'] = 'Архітектура';

$GLOBALS["lang"]['Are you sure you want to delete this input item?'] = 'Ви впевнені, що ви хочете видалити цей елемент введення?';

$GLOBALS["lang"]['Are you sure you want to delete this output item?'] = 'Ви впевнені, що ви хочете видалити цей елемент виведення?';

$GLOBALS["lang"]['Are you sure? This will remove all queue entries and prevent the remaining IPs from being discovered.'] = 'Ви впевнені? Це дозволить видалити всі черги записів і запобігти відновленню решти IP-адреси.';

$GLOBALS["lang"]['Are you sure? This will reset the queue processing count and could cause load on the server.'] = 'Ви впевнені? Це скинути кількість черги і може викликати завантаження на сервері.';

$GLOBALS["lang"]['area'] = 'Площа';

$GLOBALS["lang"]['Area'] = 'Площа';

$GLOBALS["lang"]['Argentina'] = 'Українська';

$GLOBALS["lang"]['Armenia'] = 'Українська';

$GLOBALS["lang"]['arp'] = 'Арпа';

$GLOBALS["lang"]['Arp'] = 'Арпа';

$GLOBALS["lang"]['Aruba'] = 'Аруба';

$GLOBALS["lang"]['As per the attributes for device environments. Production, Training, et al.'] = 'В якості атрибутів для оточення пристроїв. Виробництво, Навчання та ін.';

$GLOBALS["lang"]['As you have Collectors registered, please choose where to execute this discovery.'] = 'Як ви зареєстровані колекціонери, будь ласка, виберіть, де для виконання цього відкриття.';

$GLOBALS["lang"]['Ask me later'] = 'Про нас';

$GLOBALS["lang"]['Ask the Community for help or contribute answers for others.'] = 'Запропонувати спільноту на допомогу або сприяти відповіді на інші.';

$GLOBALS["lang"]['aspect_ratio'] = 'Аспект Ратіо';

$GLOBALS["lang"]['Aspect Ratio'] = 'Аспект Ратіо';

$GLOBALS["lang"]['Asset ID'] = 'Код активів';

$GLOBALS["lang"]['asset_ident'] = 'Ассет Ident';

$GLOBALS["lang"]['Asset Ident'] = 'Ассет Ident';

$GLOBALS["lang"]['asset_number'] = 'Кількість активів';

$GLOBALS["lang"]['Asset Number'] = 'Кількість активів';

$GLOBALS["lang"]['asset_tag'] = 'Ассет тег';

$GLOBALS["lang"]['Asset Tag'] = 'Ассет тег';

$GLOBALS["lang"]['Assign Device to Application'] = 'Пристрої підписки на додаток';

$GLOBALS["lang"]['Assign Device to Cluster'] = 'Пристрої для кластеру';

$GLOBALS["lang"]['Assign Device to Location'] = 'Пристрої для розташування';

$GLOBALS["lang"]['Assign Device to Organisation'] = 'Призначення пристрою для організації';

$GLOBALS["lang"]['Assign Devices to Location'] = 'Пристрої для розташування';

$GLOBALS["lang"]['Assign Devices to Organisation'] = 'Призначення пристроїв для організації';

$GLOBALS["lang"]['Assign an Operator'] = 'Підписатися на Оператор';

$GLOBALS["lang"]['Assigned To'] = 'Призначений для';

$GLOBALS["lang"]['At present we can use netstat_ports, software and users.'] = 'В даний час ми можемо використовувати Netstat_ports, програмне забезпечення та користувачів.';

$GLOBALS["lang"]['attached_device_id'] = 'Прикріплений ідентифікатор пристрою';

$GLOBALS["lang"]['Attached Device ID'] = 'Прикріплений ідентифікатор пристрою';

$GLOBALS["lang"]['attached_to'] = 'Прикріплений';

$GLOBALS["lang"]['Attached To'] = 'Прикріплений';

$GLOBALS["lang"]['attachment'] = 'Пристрої';

$GLOBALS["lang"]['Attachment'] = 'Пристрої';

$GLOBALS["lang"]['attachments'] = 'Додатки';

$GLOBALS["lang"]['Attachments'] = 'Додатки';

$GLOBALS["lang"]['attack_complexity'] = 'Асистентність';

$GLOBALS["lang"]['Attack Complexity'] = 'Асистентність';

$GLOBALS["lang"]['attack_requirements'] = 'Вимоги до атак';

$GLOBALS["lang"]['Attack Requirements'] = 'Вимоги до атак';

$GLOBALS["lang"]['attack_vector'] = 'Атак Вектор';

$GLOBALS["lang"]['Attack Vector'] = 'Атак Вектор';

$GLOBALS["lang"]['Attribute'] = 'Атрибут';

$GLOBALS["lang"]['attributes'] = 'Атрибути';

$GLOBALS["lang"]['Attributes'] = 'Атрибути';

$GLOBALS["lang"]['Audit'] = 'Аудит';

$GLOBALS["lang"]['Audit AIX'] = 'Аудиторська АІ';

$GLOBALS["lang"]['Audit ESXi'] = 'Аудит ESXi';

$GLOBALS["lang"]['Audit Linux'] = 'Аудит Linux';

$GLOBALS["lang"]['audit_log'] = 'Журнал аудиту';

$GLOBALS["lang"]['Audit Log'] = 'Журнал аудиту';

$GLOBALS["lang"]['Audit My PC'] = 'Аудит мій ПК';

$GLOBALS["lang"]['Audit OSX'] = 'Аудит OSX';

$GLOBALS["lang"]['Audit Result Input'] = 'Аудит Результат Вхід';

$GLOBALS["lang"]['Audit Status'] = 'Статус на сервери';

$GLOBALS["lang"]['Audit Windows'] = 'Аудит Windows';

$GLOBALS["lang"]['Audit the Device'] = 'Аудит пристрою';

$GLOBALS["lang"]['Audits'] = 'Аудит';

$GLOBALS["lang"]['August'] = 'Серпень';

$GLOBALS["lang"]['Australia'] = 'Українська';

$GLOBALS["lang"]['Austria'] = 'Австрія';

$GLOBALS["lang"]['Auth'] = 'Афіша';

$GLOBALS["lang"]['auth'] = 'Афіша';

$GLOBALS["lang"]['Authentication Passphrase'] = 'аутентифікація Пасфрас';

$GLOBALS["lang"]['authority_key_ident'] = 'Адміністративний ключ Ident';

$GLOBALS["lang"]['Authority Key Ident'] = 'Адміністративний ключ Ident';

$GLOBALS["lang"]['Auto'] = 'Автоматика';

$GLOBALS["lang"]['auto_renew'] = 'Авторемонт';

$GLOBALS["lang"]['Auto Renew'] = 'Авторемонт';

$GLOBALS["lang"]['Auto populated by the Open-AudIT Server.'] = 'Автоматичне використання сервера Open-AudIT.';

$GLOBALS["lang"]['AutoRenew'] = 'Авторемонт';

$GLOBALS["lang"]['automatable'] = 'Автоматизований';

$GLOBALS["lang"]['Automatable'] = 'Автоматизований';

$GLOBALS["lang"]['Automatically populated based on the Collectors OS.'] = 'Автоматично заселений на основі колекторів OS.';

$GLOBALS["lang"]['availability'] = 'Наявність';

$GLOBALS["lang"]['Availability'] = 'Наявність';

$GLOBALS["lang"]['Azerbaijan'] = 'Українська';

$GLOBALS["lang"]['BTU Max'] = 'БТУ Макс';

$GLOBALS["lang"]['BTU Total'] = 'BTU Всього';

$GLOBALS["lang"]['Backup'] = 'Зареєструватися';

$GLOBALS["lang"]['Bahamas the'] = 'Багамські Острови';

$GLOBALS["lang"]['Bahrain'] = 'Бруней Даруссалам';

$GLOBALS["lang"]['Bangladesh'] = 'Бангладеш';

$GLOBALS["lang"]['bank'] = 'Банкомати';

$GLOBALS["lang"]['Bank'] = 'Банкомати';

$GLOBALS["lang"]['Banned'] = 'Зареєструватися';

$GLOBALS["lang"]['bar_code'] = 'Код товару';

$GLOBALS["lang"]['Bar Code'] = 'Код товару';

$GLOBALS["lang"]['Barbados'] = 'Барбадос';

$GLOBALS["lang"]['Base DN'] = 'База DN';

$GLOBALS["lang"]['base_score'] = 'Базова оцінка';

$GLOBALS["lang"]['Base Score'] = 'Базова оцінка';

$GLOBALS["lang"]['base_severity'] = 'Базова довговічність';

$GLOBALS["lang"]['Base Severity'] = 'Базова довговічність';

$GLOBALS["lang"]['based_on'] = 'На основі';

$GLOBALS["lang"]['Based On'] = 'На основі';

$GLOBALS["lang"]['baseline'] = 'Бази';

$GLOBALS["lang"]['Baseline'] = 'Бази';

$GLOBALS["lang"]['baseline_id'] = 'Базовий ідентифікатор';

$GLOBALS["lang"]['Baseline ID'] = 'Базовий ідентифікатор';

$GLOBALS["lang"]['baselines'] = 'Основи';

$GLOBALS["lang"]['Baselines'] = 'Основи';

$GLOBALS["lang"]['baselines_policies'] = 'Політика базиліків';

$GLOBALS["lang"]['Baselines Policies'] = 'Політика базиліків';

$GLOBALS["lang"]['Baselines Policy'] = 'Політика базиліків';

$GLOBALS["lang"]['Baselines Policy Details'] = 'Деталі політики базиліки';

$GLOBALS["lang"]['baselines_results'] = 'Результати базиліків';

$GLOBALS["lang"]['Baselines Results'] = 'Результати базиліків';

$GLOBALS["lang"]['Basic'] = 'Головна';

$GLOBALS["lang"]['Belarus'] = 'Білорусь';

$GLOBALS["lang"]['Belgium'] = 'Бельгія';

$GLOBALS["lang"]['Belize'] = 'Беліз';

$GLOBALS["lang"]['Benchmark'] = 'бенчмарка';

$GLOBALS["lang"]['benchmark_id'] = 'Код товару';

$GLOBALS["lang"]['Benchmark ID'] = 'Код товару';

$GLOBALS["lang"]['benchmarks'] = 'бенчмарки';

$GLOBALS["lang"]['Benchmarks'] = 'бенчмарки';

$GLOBALS["lang"]['benchmarks_exceptions'] = 'Виняток Benchmarks';

$GLOBALS["lang"]['Benchmarks Exceptions'] = 'Виняток Benchmarks';

$GLOBALS["lang"]['benchmarks_log'] = 'Логін';

$GLOBALS["lang"]['Benchmarks Log'] = 'Логін';

$GLOBALS["lang"]['benchmarks_policies'] = 'Політика конфіденційності';

$GLOBALS["lang"]['Benchmarks Policies'] = 'Політика конфіденційності';

$GLOBALS["lang"]['benchmarks_result'] = 'Результати пошуку';

$GLOBALS["lang"]['Benchmarks Result'] = 'Результати пошуку';

$GLOBALS["lang"]['Benin'] = 'Бенін';

$GLOBALS["lang"]['Bermuda'] = 'Бермуди';

$GLOBALS["lang"]['best_practises'] = 'Кращі практики';

$GLOBALS["lang"]['Best Practises'] = 'Кращі практики';

$GLOBALS["lang"]['Bhutan'] = 'Бутан';

$GLOBALS["lang"]['bios'] = 'Біо';

$GLOBALS["lang"]['Bios'] = 'Біо';

$GLOBALS["lang"]['body'] = 'Тіло';

$GLOBALS["lang"]['Body'] = 'Тіло';

$GLOBALS["lang"]['Bolivia'] = 'Болгарія';

$GLOBALS["lang"]['Boolean'] = 'Болеан';

$GLOBALS["lang"]['Boolean 1/0'] = 'Болеан 1/0';

$GLOBALS["lang"]['Boolean y/n'] = 'Болеан y/n';

$GLOBALS["lang"]['boot_device'] = 'Пристрої завантаження';

$GLOBALS["lang"]['Boot Device'] = 'Пристрої завантаження';

$GLOBALS["lang"]['bootable'] = 'Завантажувальний';

$GLOBALS["lang"]['Bootable'] = 'Завантажувальний';

$GLOBALS["lang"]['Bosnia and Herzegovina'] = 'Боснія і Герцеговина';

$GLOBALS["lang"]['Botswana'] = 'Ботсвана';

$GLOBALS["lang"]['Bouvet Island (Bouvetoya)'] = 'Острів Бувет (Bouvetoya)';

$GLOBALS["lang"]['Brazil'] = 'Бразилія';

$GLOBALS["lang"]['Brazilian Portuguese'] = 'Бразилійка Португальська';

$GLOBALS["lang"]['British Indian Ocean Territory (Chagos Archipelago)'] = 'Британський Індійський океан Територія (Chagos Archipelago)';

$GLOBALS["lang"]['British Virgin Islands'] = 'Британські Віргінські острови';

$GLOBALS["lang"]['Brunei Darussalam'] = 'Бруней Даруссалам';

$GLOBALS["lang"]['btu_max'] = 'Бту Макс';

$GLOBALS["lang"]['Btu Max'] = 'Бту Макс';

$GLOBALS["lang"]['btu_total'] = 'Btu Всього';

$GLOBALS["lang"]['Btu Total'] = 'Btu Всього';

$GLOBALS["lang"]['build_number'] = 'Номер збірки';

$GLOBALS["lang"]['Build Number'] = 'Номер збірки';

$GLOBALS["lang"]['build_number_full'] = 'Створити номер';

$GLOBALS["lang"]['Build Number Full'] = 'Створити номер';

$GLOBALS["lang"]['Building'] = 'Будинок';

$GLOBALS["lang"]['Bulgaria'] = 'Болгарія';

$GLOBALS["lang"]['Bulk Edit'] = 'Редагування';

$GLOBALS["lang"]['Bulk Editing Device Attributes'] = 'Настроювання редагування атрибутів пристроїв';

$GLOBALS["lang"]['Burkina Faso'] = 'Буркіна Фасо';

$GLOBALS["lang"]['Burundi'] = 'Бурунді';

$GLOBALS["lang"]['business_requirements'] = 'Вимоги до бізнесу';

$GLOBALS["lang"]['Business Requirements'] = 'Вимоги до бізнесу';

$GLOBALS["lang"]['Buy'] = 'Купити';

$GLOBALS["lang"]['Buy More'] = 'Купити більше';

$GLOBALS["lang"]['Buy More Licenses'] = 'Купуйте більше ліцензій';

$GLOBALS["lang"]['By'] = 'Зареєструватися';

$GLOBALS["lang"]['CIDR'] = 'ЦИДР';

$GLOBALS["lang"]['CIDR Mask'] = 'ЦИДР Маска';

$GLOBALS["lang"]['cli_config'] = 'КЛІ Конфігурація';

$GLOBALS["lang"]['CLI Config'] = 'КЛІ Конфігурація';

$GLOBALS["lang"]['CPU'] = 'Процесор';

$GLOBALS["lang"]['CPUs'] = 'Процесори';

$GLOBALS["lang"]['CSV'] = 'КСВ';

$GLOBALS["lang"]['CVE'] = 'КВ';

$GLOBALS["lang"]['Calculated from discovery.'] = 'Розрахунок з відкриття.';

$GLOBALS["lang"]['Calculated total number of valid IP addresses for this network.'] = 'Обчислення загальної кількості адрес IP для цієї мережі.';

$GLOBALS["lang"]['Calculated upon completion, the time taken to execute this item.'] = 'Обчислення після завершення часу, прийнятих до виконання цього пункту.';

$GLOBALS["lang"]['Calculated when integration is run and contains a JSON representation of the devices in this integration. Each links to <code>devices.id</code>.'] = 'Обчислення при інтеграції відбувається і містить представництво JSON пристроїв в цій інтеграції. Кожен посилання <code>devices.id</code>й';

$GLOBALS["lang"]['Calculated when integration is run and contains a JSON representation of the locations in this integration. Each links to <code>locations.id</code>.'] = 'Обчислення при інтеграції відбувається і містить представництво JSON населених пунктів в цій інтеграції. Кожен посилання <code>locations.id</code>й';

$GLOBALS["lang"]['Calculated when integration is run and contains the number of devices selected from Open-AudIT.'] = 'Обчислення при інтеграції відбувається і містить кількість пристроїв, виділених з Open-AudIT.';

$GLOBALS["lang"]['Calculated when integration is run and contains the number of devices selected the external system.'] = 'Обчислення при інтеграції відбувається і містить кількість пристроїв, вибраних зовнішніми системами.';

$GLOBALS["lang"]['Calculated when integration is run and contains the number of devices to be updated in the external system.'] = 'Розраховуваний при інтеграції працює і містить кількість пристроїв, які можна оновити в зовнішній системі.';

$GLOBALS["lang"]['Calculated when integration is run and contains the number of devices updated in Open-AudIT.'] = 'Розраховано при інтеграції і містить кількість пристроїв, що оновлюються в Open-AudIT.';

$GLOBALS["lang"]['Cambodia'] = 'Камбоджа';

$GLOBALS["lang"]['Cameroon'] = 'Камерун';

$GLOBALS["lang"]['Campus Area Network'] = 'Карта сайту';

$GLOBALS["lang"]['Can be  <code>active</code>, <code>passive</code> or blank.'] = 'Чи можна <code>active</code>й <code>passive</code> або порожній.';

$GLOBALS["lang"]['Can be <code>application</code>, <code>compute</code>, <code>database</code>, <code>storage</code>, <code>virtualisation</code>, <code>web</code>, <code>other</code> or blank.'] = 'Чи можна <code>application</code>й <code>compute</code>й <code>database</code>й <code>storage</code>й <code>virtualisation</code>й <code>web</code>й <code>other</code> або порожній.';

$GLOBALS["lang"]['Can be <code>auto</code>, <code>fixed</code>, <code>other</code> or blank.'] = 'Чи можна <code>auto</code>й <code>fixed</code>й <code>other</code> або порожній.';

$GLOBALS["lang"]['Can be <code>high availability</code>, <code>load balancing</code>, <code>performance</code>, <code>storage</code>, <code>other</code> or blank.'] = 'Чи можна <code>high availability</code>й <code>load balancing</code>й <code>performance</code>й <code>storage</code>й <code>other</code> або порожній.';

$GLOBALS["lang"]['Can be <code>line</code>, <code>pie</code> or <code>traffic</code>.'] = 'Чи можна <code>line</code>й <code>pie</code> або <code>traffic</code>й';

$GLOBALS["lang"]['Can be <code>user</code> or <code>collector</code>.'] = 'Чи можна <code>user</code> або <code>collector</code>й';

$GLOBALS["lang"]['Can be set by discovery or user.'] = 'Може бути встановлена відкриттям або користувачем.';

$GLOBALS["lang"]['Can be set by discovery or user. Uses the ID from the locations table.'] = 'Може бути встановлена відкриттям або користувачем. Використовуйте ідентифікатор з таблиці розташування.';

$GLOBALS["lang"]['Can the user edit this item.'] = 'Чи можна редагувати цей елемент користувача.';

$GLOBALS["lang"]['Canada'] = 'Українська';

$GLOBALS["lang"]['Cancel'] = 'Зареєструватися';

$GLOBALS["lang"]['capabilities'] = 'Можливості';

$GLOBALS["lang"]['Capabilities'] = 'Можливості';

$GLOBALS["lang"]['Capacity'] = 'Місткість';

$GLOBALS["lang"]['Cape Verde'] = 'Кабо-Верде';

$GLOBALS["lang"]['Capitalise'] = 'Капітал';

$GLOBALS["lang"]['caption'] = 'Зареєструватися';

$GLOBALS["lang"]['Caption'] = 'Зареєструватися';

$GLOBALS["lang"]['Cayman Islands'] = 'Кайманові острови';

$GLOBALS["lang"]['Cellular Details'] = 'Клітинні деталі';

$GLOBALS["lang"]['Central African Republic'] = 'Центральноафриканська Республіка';

$GLOBALS["lang"]['certificate'] = 'Сертифікати';

$GLOBALS["lang"]['Certificate'] = 'Сертифікати';

$GLOBALS["lang"]['certificate_file'] = 'Сертифікат файл';

$GLOBALS["lang"]['Certificate File'] = 'Сертифікат файл';

$GLOBALS["lang"]['certificate_name'] = 'Назва сертифіката';

$GLOBALS["lang"]['Certificate Name'] = 'Назва сертифіката';

$GLOBALS["lang"]['certificates'] = 'Сертифікати';

$GLOBALS["lang"]['Certificates'] = 'Сертифікати';

$GLOBALS["lang"]['Chad'] = 'Чад';

$GLOBALS["lang"]['change_id'] = 'Зміна ID';

$GLOBALS["lang"]['Change ID'] = 'Зміна ID';

$GLOBALS["lang"]['change_log'] = 'Логін';

$GLOBALS["lang"]['Change Log'] = 'Логін';

$GLOBALS["lang"]['change_type'] = 'Тип зміни';

$GLOBALS["lang"]['Change Type'] = 'Тип зміни';

$GLOBALS["lang"]['check_minutes'] = 'Перевірити хвилин';

$GLOBALS["lang"]['Check Minutes'] = 'Перевірити хвилин';

$GLOBALS["lang"]['Check for SSH on these ports'] = 'Перевірити SSH на цих портах';

$GLOBALS["lang"]['Check this port for any SSH service.'] = 'Перевірити цей порт для будь-якого сервісу SSH.';

$GLOBALS["lang"]['Chile'] = 'Чилі';

$GLOBALS["lang"]['China'] = 'Китай';

$GLOBALS["lang"]['Choose'] = 'Обрати';

$GLOBALS["lang"]['Choose (select OS first)'] = 'Виберіть (виберіть OS перший)';

$GLOBALS["lang"]['Choose a Device'] = 'Виберіть пристрій';

$GLOBALS["lang"]['Choose a Table'] = 'Виберіть таблицю';

$GLOBALS["lang"]['Christmas Island'] = 'Острів Різдва';

$GLOBALS["lang"]['cidr'] = 'Цидри';

$GLOBALS["lang"]['Cidr'] = 'Цидри';

$GLOBALS["lang"]['circuit_count'] = 'Кількість ланцюгів';

$GLOBALS["lang"]['Circuit Count'] = 'Кількість ланцюгів';

$GLOBALS["lang"]['circuit_status'] = 'Статус на сервери';

$GLOBALS["lang"]['Circuit Status'] = 'Статус на сервери';

$GLOBALS["lang"]['city'] = 'Місто';

$GLOBALS["lang"]['City'] = 'Місто';

$GLOBALS["lang"]['class'] = 'Класика';

$GLOBALS["lang"]['Class'] = 'Класика';

$GLOBALS["lang"]['class_text'] = 'Клас Текст';

$GLOBALS["lang"]['Class Text'] = 'Клас Текст';

$GLOBALS["lang"]['Click the Delete button to remove the example devices from Open-AudIT.<br>This will remove the below devices from the database. '] = 'Натисніть кнопку Видалити, щоб видалити пристрої з Open-AudIT.<br/>Це дозволить видалити нижче пристрої з бази даних. ';

$GLOBALS["lang"]['Click the Import button below to populate Open-AudIT with example device data.'] = 'Натисніть кнопку Імпорта нижче, щоб заблокувати Open-AudIT з даними пристрою.';

$GLOBALS["lang"]['Client ID'] = 'Клієнт';

$GLOBALS["lang"]['client_ident'] = 'Клієнт Ident';

$GLOBALS["lang"]['Client Ident'] = 'Клієнт Ident';

$GLOBALS["lang"]['client_secret'] = 'Клієнти';

$GLOBALS["lang"]['Client Secret'] = 'Клієнти';

$GLOBALS["lang"]['client_site_name'] = 'Назва сайту';

$GLOBALS["lang"]['Client Site Name'] = 'Назва сайту';

$GLOBALS["lang"]['Close'] = 'Закрити';

$GLOBALS["lang"]['Cloud'] = 'Хмар';

$GLOBALS["lang"]['Cloud Details'] = 'Хмарні деталі';

$GLOBALS["lang"]['Cloud Discovery'] = 'Хмарний Discovery';

$GLOBALS["lang"]['cloud_id'] = 'Хмарний ID';

$GLOBALS["lang"]['Cloud ID'] = 'Хмарний ID';

$GLOBALS["lang"]['cloud_log'] = 'Хмарний журнал';

$GLOBALS["lang"]['Cloud Log'] = 'Хмарний журнал';

$GLOBALS["lang"]['cloud_name'] = 'Назва хмари';

$GLOBALS["lang"]['Cloud Name'] = 'Назва хмари';

$GLOBALS["lang"]['Cloud Network'] = 'Хмарна мережа';

$GLOBALS["lang"]['clouds'] = 'Хмари';

$GLOBALS["lang"]['Clouds'] = 'Хмари';

$GLOBALS["lang"]['cluster'] = 'Кластер';

$GLOBALS["lang"]['Cluster'] = 'Кластер';

$GLOBALS["lang"]['cluster_id'] = 'Ідентифікатор кластеру';

$GLOBALS["lang"]['Cluster ID'] = 'Ідентифікатор кластеру';

$GLOBALS["lang"]['cluster_name'] = 'Назва кластера';

$GLOBALS["lang"]['Cluster Name'] = 'Назва кластера';

$GLOBALS["lang"]['cluster_type'] = 'Тип кластера';

$GLOBALS["lang"]['Cluster Type'] = 'Тип кластера';

$GLOBALS["lang"]['clusters'] = 'Кластери';

$GLOBALS["lang"]['Clusters'] = 'Кластери';

$GLOBALS["lang"]['Cocos (Keeling) Islands'] = 'Кокоси (Keeling) острови';

$GLOBALS["lang"]['Collector'] = 'Колектор';

$GLOBALS["lang"]['Collector (UUID)'] = 'Колектор (UUID)';

$GLOBALS["lang"]['Collector Name'] = 'Назва колектора';

$GLOBALS["lang"]['collector_uuid'] = 'Колектор Uuid';

$GLOBALS["lang"]['Collector Uuid'] = 'Колектор Uuid';

$GLOBALS["lang"]['collectors'] = 'Колектори';

$GLOBALS["lang"]['Collectors'] = 'Колектори';

$GLOBALS["lang"]['Colombia'] = 'Колумбія';

$GLOBALS["lang"]['color'] = 'Колір';

$GLOBALS["lang"]['Color'] = 'Колір';

$GLOBALS["lang"]['column'] = 'Почати';

$GLOBALS["lang"]['Column'] = 'Почати';

$GLOBALS["lang"]['Columns'] = 'Колонки';

$GLOBALS["lang"]['command'] = 'Про компанію';

$GLOBALS["lang"]['Command'] = 'Про компанію';

$GLOBALS["lang"]['command_options'] = 'Параметри команд';

$GLOBALS["lang"]['Command Options'] = 'Параметри команд';

$GLOBALS["lang"]['command_output'] = 'Командний вихід';

$GLOBALS["lang"]['Command Output'] = 'Командний вихід';

$GLOBALS["lang"]['command_status'] = 'Статус на сервери';

$GLOBALS["lang"]['Command Status'] = 'Статус на сервери';

$GLOBALS["lang"]['command_time_to_execute'] = 'Час виконання команд';

$GLOBALS["lang"]['Command Time To Execute'] = 'Час виконання команд';

$GLOBALS["lang"]['comment'] = 'Про нас';

$GLOBALS["lang"]['Comment'] = 'Про нас';

$GLOBALS["lang"]['comments'] = 'Коментарі';

$GLOBALS["lang"]['Comments'] = 'Коментарі';

$GLOBALS["lang"]['commercial'] = 'Торгівля';

$GLOBALS["lang"]['Commercial'] = 'Торгівля';

$GLOBALS["lang"]['common_name'] = 'Загальна назва';

$GLOBALS["lang"]['Common Name'] = 'Загальна назва';

$GLOBALS["lang"]['Commonly referred to as the clientId.'] = 'Що стосується клієнта';

$GLOBALS["lang"]['Commonly referred to as the clientSecret.'] = 'По-перше, як клієнт';

$GLOBALS["lang"]['Community'] = 'Українська';

$GLOBALS["lang"]['Community Questions'] = 'Питання спільноти';

$GLOBALS["lang"]['Community String'] = 'Проекти';

$GLOBALS["lang"]['Comoros the'] = 'Комори';

$GLOBALS["lang"]['Compact'] = 'Компактний';

$GLOBALS["lang"]['Company'] = 'Компанія';

$GLOBALS["lang"]['Complexity of the attack (Low or High).'] = 'Комплексність атаки (Low або High).';

$GLOBALS["lang"]['Component Table'] = 'Таблиця компонентів';

$GLOBALS["lang"]['Components (All Devices)'] = 'Компоненти (Всі пристрої)';

$GLOBALS["lang"]['Compute'] = 'Поповнення';

$GLOBALS["lang"]['Condition'] = 'Стан';

$GLOBALS["lang"]['Config'] = 'Конфігурація';

$GLOBALS["lang"]['Config Default, currently '] = 'Налаштування за замовчуванням, в даний час ';

$GLOBALS["lang"]['config_file'] = 'Налаштування файлу';

$GLOBALS["lang"]['Config File'] = 'Налаштування файлу';

$GLOBALS["lang"]['config_manager_error_code'] = 'Код помилки менеджера Config Manager';

$GLOBALS["lang"]['Config Manager Error Code'] = 'Код помилки менеджера Config Manager';

$GLOBALS["lang"]['configuration'] = 'Налаштування';

$GLOBALS["lang"]['Configuration'] = 'Налаштування';

$GLOBALS["lang"]['Configure'] = 'Налаштування';

$GLOBALS["lang"]['Congo'] = 'Конго';

$GLOBALS["lang"]['Congo the'] = 'Конго';

$GLOBALS["lang"]['Connected To'] = 'З\'єднання';

$GLOBALS["lang"]['connection'] = 'Підключення';

$GLOBALS["lang"]['Connection'] = 'Підключення';

$GLOBALS["lang"]['Connection Options'] = 'Параметри підключення';

$GLOBALS["lang"]['connection_status'] = 'Статус на сервери';

$GLOBALS["lang"]['Connection Status'] = 'Статус на сервери';

$GLOBALS["lang"]['connections'] = 'Зв\'язки';

$GLOBALS["lang"]['Connections'] = 'Зв\'язки';

$GLOBALS["lang"]['Consider filtered Ports Open'] = 'Розглянемо фільтри Порти Open';

$GLOBALS["lang"]['Consider open|filtered Ports Open'] = 'Переглянути відкритість Порти Open';

$GLOBALS["lang"]['contact'] = 'Контакти';

$GLOBALS["lang"]['Contact'] = 'Контакти';

$GLOBALS["lang"]['contact_name'] = 'Контакти';

$GLOBALS["lang"]['Contact Name'] = 'Контакти';

$GLOBALS["lang"]['contained_in'] = 'Затриманий';

$GLOBALS["lang"]['Contained In'] = 'Затриманий';

$GLOBALS["lang"]['Contains a JSON object details the associated widgets and their positions.'] = 'Містить об\'єкт JSON деталі пов\'язаних віджетів та їх позицій.';

$GLOBALS["lang"]['Contains the fields that determine if we should use ssh, snmp and wmi discovery options. A JSON object.'] = 'Містить поля, які визначають, якщо ми повинні використовувати Ssh, snmp і wmi варіанти відкриття. Об\'єкт JSON.';

$GLOBALS["lang"]['Context Engine ID'] = 'Код двигуна';

$GLOBALS["lang"]['Context Name'] = 'Ім\'я користувача';

$GLOBALS["lang"]['contractual_obligations'] = 'Договірні зобов’язання';

$GLOBALS["lang"]['Contractual Obligations'] = 'Договірні зобов’язання';

$GLOBALS["lang"]['Cook Islands'] = 'Кукурудзяні острови';

$GLOBALS["lang"]['Copy and paste an audit result'] = 'Копіювати та вставити результат аудиту';

$GLOBALS["lang"]['Copy and paste the below to the forums, another instance of Open-AudIT or anywhere else you need to provide this item.'] = 'Скопіюйте та вставте нижче на форуми, інший екземпляр Open-AudIT або в будь-який інший спосіб, щоб забезпечити цей елемент.';

$GLOBALS["lang"]['core_count'] = 'Кількість ядер';

$GLOBALS["lang"]['Core Count'] = 'Кількість ядер';

$GLOBALS["lang"]['Cores'] = 'Мапа';

$GLOBALS["lang"]['cost_center'] = 'Вартість центру';

$GLOBALS["lang"]['Cost Center'] = 'Вартість центру';

$GLOBALS["lang"]['cost_code'] = 'Код товару';

$GLOBALS["lang"]['Cost Code'] = 'Код товару';

$GLOBALS["lang"]['Costa Rica'] = 'Коста-Рика';

$GLOBALS["lang"]['Cote d Ivoire'] = 'Кот д Івоар';

$GLOBALS["lang"]['count'] = 'Кількість';

$GLOBALS["lang"]['Count'] = 'Кількість';

$GLOBALS["lang"]['country'] = 'Країна';

$GLOBALS["lang"]['Country'] = 'Країна';

$GLOBALS["lang"]['country_code'] = 'Код країни';

$GLOBALS["lang"]['Country Code'] = 'Код країни';

$GLOBALS["lang"]['cpu_count'] = 'Cpu Кількість';

$GLOBALS["lang"]['Cpu Count'] = 'Cpu Кількість';

$GLOBALS["lang"]['Create'] = 'Спілкування';

$GLOBALS["lang"]['Create Example Devices'] = 'Створення прикладних пристроїв';

$GLOBALS["lang"]['create_external_count'] = 'Створення зовнішнього графа';

$GLOBALS["lang"]['Create External Count'] = 'Створення зовнішнього графа';

$GLOBALS["lang"]['create_external_from_internal'] = 'Створення зовнішнього з внутрішнього';

$GLOBALS["lang"]['Create External From Internal'] = 'Створення зовнішнього з внутрішнього';

$GLOBALS["lang"]['Create Geocode'] = 'Створення геокоду';

$GLOBALS["lang"]['create_internal_count'] = 'Створення внутрішнього обліку';

$GLOBALS["lang"]['Create Internal Count'] = 'Створення внутрішнього обліку';

$GLOBALS["lang"]['create_internal_from_external'] = 'Створення внутрішнього з зовнішнього';

$GLOBALS["lang"]['Create Internal From External'] = 'Створення внутрішнього з зовнішнього';

$GLOBALS["lang"]['Create NMIS Devices from Open-AudIT'] = 'Створення пристроїв NMIS від Open-AudIT';

$GLOBALS["lang"]['Create Open-AudIT Devices from '] = 'Створення Open-AudIT Пристрої від ';

$GLOBALS["lang"]['Create Open-AudIT Devices from NMIS'] = 'Створення Open-AudIT Пристрої від NMIS';

$GLOBALS["lang"]['created_by'] = 'Зроблено';

$GLOBALS["lang"]['Created By'] = 'Зроблено';

$GLOBALS["lang"]['created_date'] = 'Дата створення';

$GLOBALS["lang"]['Created Date'] = 'Дата створення';

$GLOBALS["lang"]['Creating'] = 'Створення';

$GLOBALS["lang"]['Creating Device'] = 'Створення пристрою';

$GLOBALS["lang"]['Creating a Query'] = 'Створення запитів';

$GLOBALS["lang"]['creator'] = 'Кріплення';

$GLOBALS["lang"]['Creator'] = 'Кріплення';

$GLOBALS["lang"]['credential'] = 'Редагування';

$GLOBALS["lang"]['Credential'] = 'Редагування';

$GLOBALS["lang"]['credentials'] = 'Регулятори';

$GLOBALS["lang"]['Credentials'] = 'Регулятори';

$GLOBALS["lang"]['Credentials Client ID'] = 'Клієнт';

$GLOBALS["lang"]['Credentials Subscription ID'] = 'Підписка на дані Ім\'я';

$GLOBALS["lang"]['Credentials Tenant ID'] = 'Поведінковий ідентифікатор';

$GLOBALS["lang"]['Credentials for Amazon AWS used in Cloud Discovery'] = 'Credentials для Amazon AWS, що використовується в Cloud Discovery';

$GLOBALS["lang"]['Credentials for Microsoft Azure used in Cloud Discovery'] = 'Credentials для Microsoft Azure використовує в Cloud Discovery';

$GLOBALS["lang"]['Critical'] = 'Критика';

$GLOBALS["lang"]['criticality'] = 'критичність';

$GLOBALS["lang"]['Criticality'] = 'критичність';

$GLOBALS["lang"]['Croatia'] = 'Українська';

$GLOBALS["lang"]['Cuba'] = 'Кубок';

$GLOBALS["lang"]['current'] = 'Поточний час';

$GLOBALS["lang"]['Current'] = 'Поточний час';

$GLOBALS["lang"]['Current Discovery Processes'] = 'Поточні відкриті процеси';

$GLOBALS["lang"]['Current date & time is '] = 'Поточна дата та час ';

$GLOBALS["lang"]['Currently Installed'] = 'Встановити';

$GLOBALS["lang"]['Currently supported types are <code>snmp</code>, <code>snmp_v3</code>, <code>ssh</code>, <code>ssh_key</code> or <code>windows</code>.'] = 'Підтримувані типи <code>snmp</code>й <code>snmp_v3</code>й <code>ssh</code>й <code>ssh_key</code> або <code>windows</code>й';

$GLOBALS["lang"]['Custom TCP Ports'] = 'TCP порти';

$GLOBALS["lang"]['Custom UDP Ports'] = 'Спеціальна UDP Порти';

$GLOBALS["lang"]['Cve'] = 'Про нас';

$GLOBALS["lang"]['Cyprus'] = 'Кіпр';

$GLOBALS["lang"]['Czech'] = 'чеська';

$GLOBALS["lang"]['Czech Republic'] = 'Чехія';

$GLOBALS["lang"]['DHCP'] = 'ДХК';

$GLOBALS["lang"]['DN Account (optional)'] = 'DN акаунт (необов\'язково)';

$GLOBALS["lang"]['DN Password (optional)'] = 'DN Пароль (опція)';

$GLOBALS["lang"]['DNS FQDN'] = 'Статус на сервери';

$GLOBALS["lang"]['DNS Hostname'] = 'Статус на сервери';

$GLOBALS["lang"]['dashboard_id'] = 'Dashboard ID';

$GLOBALS["lang"]['Dashboard ID'] = 'Dashboard ID';

$GLOBALS["lang"]['dashboards'] = 'Ташборди';

$GLOBALS["lang"]['Dashboards'] = 'Ташборди';

$GLOBALS["lang"]['Database'] = 'База даних';

$GLOBALS["lang"]['db_action'] = 'Діяльність бази даних';

$GLOBALS["lang"]['Database Action'] = 'Діяльність бази даних';

$GLOBALS["lang"]['db_column'] = 'База даних';

$GLOBALS["lang"]['Database Column'] = 'База даних';

$GLOBALS["lang"]['Database Definition'] = 'Визначення бази даних';

$GLOBALS["lang"]['db_row'] = 'База даних Row';

$GLOBALS["lang"]['Database Row'] = 'База даних Row';

$GLOBALS["lang"]['Database Schema'] = 'База даних Schema';

$GLOBALS["lang"]['db_table'] = 'База даних';

$GLOBALS["lang"]['Database Table'] = 'База даних';

$GLOBALS["lang"]['dataset_title'] = 'Назва поштового індексу';

$GLOBALS["lang"]['Dataset Title'] = 'Назва поштового індексу';

$GLOBALS["lang"]['date'] = 'Дата';

$GLOBALS["lang"]['Date'] = 'Дата';

$GLOBALS["lang"]['Date D-M-Y'] = 'Дата Д-М-Й';

$GLOBALS["lang"]['Date M-D-Y'] = 'Дата M-D-Y';

$GLOBALS["lang"]['Date Now'] = 'Дата';

$GLOBALS["lang"]['date_of_manufacture'] = 'Дата виготовлення';

$GLOBALS["lang"]['Date Of Manufacture'] = 'Дата виготовлення';

$GLOBALS["lang"]['date_paid'] = 'Дата повідомлення';

$GLOBALS["lang"]['Date Paid'] = 'Дата повідомлення';

$GLOBALS["lang"]['date_received'] = 'Дата отримано';

$GLOBALS["lang"]['Date Received'] = 'Дата отримано';

$GLOBALS["lang"]['Date Y-M-D'] = 'Дата Y-M-D';

$GLOBALS["lang"]['Date and time when the CVE was last updated.'] = 'Дата і час, коли CVE було оновлено.';

$GLOBALS["lang"]['Date and time when the CVE was published.'] = 'Дата і час, коли CVE був опублікований.';

$GLOBALS["lang"]['Date when the CVE was published.'] = 'Дата при публікації CVE.';

$GLOBALS["lang"]['DateTime Now'] = 'Дата';

$GLOBALS["lang"]['DateTime Y-M-D H:M:S'] = 'Дата Я-М-Д Х:М:С';

$GLOBALS["lang"]['day_of_month'] = 'День місяця';

$GLOBALS["lang"]['Day Of Month'] = 'День місяця';

$GLOBALS["lang"]['day_of_week'] = 'День тижня';

$GLOBALS["lang"]['Day Of Week'] = 'День тижня';

$GLOBALS["lang"]['Day of Month'] = 'День місяця';

$GLOBALS["lang"]['dbus_identifier'] = 'Dbus Identifier';

$GLOBALS["lang"]['Dbus Identifier'] = 'Dbus Identifier';

$GLOBALS["lang"]['Debug'] = 'Дебюг';

$GLOBALS["lang"]['December'] = 'Грудень';

$GLOBALS["lang"]['Default'] = 'Зареєструватися';

$GLOBALS["lang"]['Default Items'] = 'За замовчуванням';

$GLOBALS["lang"]['Default Value'] = 'Значення за замовчуванням';

$GLOBALS["lang"]['Default of 389. Normally 636 used for Active Directory LDAPS.'] = 'За замовчуванням 389. Зазвичай 636 використовується для Active Directory LDAPS.';

$GLOBALS["lang"]['Default of <code>3</code> for LDAP and Active Directory.'] = 'За замовчуванням <code>3</code> для LDAP і Active Directory.';

$GLOBALS["lang"]['Defaults'] = 'Контакти';

$GLOBALS["lang"]['delay_minutes'] = 'Прокладка Протоколи';

$GLOBALS["lang"]['Delay Minutes'] = 'Прокладка Протоколи';

$GLOBALS["lang"]['Delete'] = 'Делет';

$GLOBALS["lang"]['Delete Example Devices'] = 'Видалити приклади пристроїв';

$GLOBALS["lang"]['delete_external_from_internal'] = 'Видалити зовнішній від внутрішнього';

$GLOBALS["lang"]['Delete External From Internal'] = 'Видалити зовнішній від внутрішнього';

$GLOBALS["lang"]['Delete NMIS Devices if not in Open-AudIT'] = 'Видалити NMIS Пристрої, якщо не в Open-AudIT';

$GLOBALS["lang"]['Delete from Application'] = 'Видалити з програми';

$GLOBALS["lang"]['Delete from Cluster'] = 'Видалення з кластера';

$GLOBALS["lang"]['Denmark'] = 'Данія';

$GLOBALS["lang"]['Derived by audit or manually set by user.'] = 'Прийнято аудит або вручну встановити користувачем.';

$GLOBALS["lang"]['Derived by audit.'] = 'Прибуває аудит.';

$GLOBALS["lang"]['Derived from <code>rack_devices.device_id</code>.'] = 'Прибув з <code>rack_devices.device_id</code>й';

$GLOBALS["lang"]['Derived from <code>rack_devices.rack_id</code>.'] = 'Прибув з <code>rack_devices.rack_id</code>й';

$GLOBALS["lang"]['Derived from Collector discovery.'] = 'Прибув з відкриття колектора.';

$GLOBALS["lang"]['Derived from OS Name.'] = 'Прибув з OS Name.';

$GLOBALS["lang"]['Derived from cloud discovery.'] = 'Прибув з хмарного відкриття.';

$GLOBALS["lang"]['Derived from device audits.'] = 'Прибуваємо з обліку пристроїв.';

$GLOBALS["lang"]['Derived from device type and OS.'] = 'Прибув від типу пристрою і ОС.';

$GLOBALS["lang"]['Derived from discovery.'] = 'Прибув з відкриття.';

$GLOBALS["lang"]['Derived from hostname, sysName, dns Hostname and IP in that order.'] = 'Прибув з хоста, sysName, dns Hostname і IP в цьому порядку.';

$GLOBALS["lang"]['Derived from the integer severity.'] = 'Прибув з цілої тяжкості.';

$GLOBALS["lang"]['description'] = 'Опис';

$GLOBALS["lang"]['Description'] = 'Опис';

$GLOBALS["lang"]['destination'] = 'Напрямок';

$GLOBALS["lang"]['Destination'] = 'Напрямок';

$GLOBALS["lang"]['detail'] = 'Деталь';

$GLOBALS["lang"]['Detail'] = 'Деталь';

$GLOBALS["lang"]['Details'] = 'Детальніше';

$GLOBALS["lang"]['details'] = 'Детальніше';

$GLOBALS["lang"]['Details of who is usually contactable at this site.'] = 'Деталі, які зазвичай контактуються на цьому сайті.';

$GLOBALS["lang"]['device'] = 'Пристрої';

$GLOBALS["lang"]['Device'] = 'Пристрої';

$GLOBALS["lang"]['Device Audits'] = 'Аудит пристроїв';

$GLOBALS["lang"]['Device ID'] = 'Код пристрою';

$GLOBALS["lang"]['device_id'] = 'Код пристрою';

$GLOBALS["lang"]['device_id_a'] = 'Код пристрою A';

$GLOBALS["lang"]['Device ID A'] = 'Код пристрою A';

$GLOBALS["lang"]['device_id_b'] = 'Код пристрою B';

$GLOBALS["lang"]['Device ID B'] = 'Код пристрою B';

$GLOBALS["lang"]['Device Name'] = 'Назва пристрою';

$GLOBALS["lang"]['Device Result'] = 'Результат роботи пристрою';

$GLOBALS["lang"]['Device Results'] = 'Результати пристрою';

$GLOBALS["lang"]['Device Seed'] = 'Насіннєве обладнання';

$GLOBALS["lang"]['Device Seed IP'] = 'Пристрій насіння IP';

$GLOBALS["lang"]['Device Status'] = 'Статус на сервери';

$GLOBALS["lang"]['Device Types'] = 'Типи пристроїв';

$GLOBALS["lang"]['Device is in the Subnet'] = 'Пристрої в підмережі';

$GLOBALS["lang"]['Devices'] = 'Пристрої';

$GLOBALS["lang"]['devices_assigned_to_location'] = 'Пристрої, призначені для розміщення';

$GLOBALS["lang"]['Devices Assigned To Location'] = 'Пристрої, призначені для розміщення';

$GLOBALS["lang"]['devices_assigned_to_org'] = 'Пристрої, призначені для організації';

$GLOBALS["lang"]['Devices Assigned To Org'] = 'Пристрої, призначені для організації';

$GLOBALS["lang"]['Devices Audited'] = 'Пристрої аудиту';

$GLOBALS["lang"]['Devices Created in '] = 'Створені пристрої ';

$GLOBALS["lang"]['Devices Created in Open-AudIT'] = 'Створено в Open-AudIT';

$GLOBALS["lang"]['devices_default_display_columns'] = 'Пристрої за замовчуванням Дисплей колон';

$GLOBALS["lang"]['Devices Default Display Columns'] = 'Пристрої за замовчуванням Дисплей колон';

$GLOBALS["lang"]['Devices Found Last 7 Days'] = 'Пристрої, знайдені Останні 7 днів';

$GLOBALS["lang"]['Devices Found Today'] = 'Пристрої, знайдені сьогодні';

$GLOBALS["lang"]['Devices Found Yesterday'] = 'Пристрої, знайдені Вчора';

$GLOBALS["lang"]['Devices Not Audited'] = 'Пристрої не перевіряють';

$GLOBALS["lang"]['Devices Not Seen 30 Days'] = 'Пристрої не дивляться 30 днів';

$GLOBALS["lang"]['Devices Not Seen 7 Days'] = 'Пристрої не Seen 7 Днів';

$GLOBALS["lang"]['Devices Not Seen 90 Days'] = 'Пристрої не дивляться 90 днів';

$GLOBALS["lang"]['Devices Retrieved via API'] = 'Пристрої, що зберігаються через API';

$GLOBALS["lang"]['Devices Selected from '] = 'Вибрані пристрої ';

$GLOBALS["lang"]['Devices Selected from Open-AudIT'] = 'Вибрані пристрої від Open-AudIT';

$GLOBALS["lang"]['Devices Updated in '] = 'Пристрої, отримані в ';

$GLOBALS["lang"]['Devices Updated in Open-AudIT'] = 'Пристрої, отримані в Open-AudIT';

$GLOBALS["lang"]['Devices are being benchmarked.'] = 'Пристрої маркуються.';

$GLOBALS["lang"]['Devices are not being benchmarked.'] = 'Пристрої не маркуються.';

$GLOBALS["lang"]['Devices could be benchmarked.'] = 'Пристрої можуть бути марковані.';

$GLOBALS["lang"]['Devices in Running State'] = 'Пристрої в пусковому стані';

$GLOBALS["lang"]['Devices in Stopped State'] = 'Пристрої в Стоппедській державі';

$GLOBALS["lang"]['Devices in this'] = 'Пристрої в цьому';

$GLOBALS["lang"]['Devired from type or OS.'] = 'Випадковий від типу або ОС.';

$GLOBALS["lang"]['dhcp_enabled'] = 'Dhcp Увімкнути';

$GLOBALS["lang"]['Dhcp Enabled'] = 'Dhcp Увімкнути';

$GLOBALS["lang"]['dhcp_lease_expires'] = 'Dhcp Lease Закінчується';

$GLOBALS["lang"]['Dhcp Lease Expires'] = 'Dhcp Lease Закінчується';

$GLOBALS["lang"]['dhcp_lease_obtained'] = 'Dhcp Lease Отриманий';

$GLOBALS["lang"]['Dhcp Lease Obtained'] = 'Dhcp Lease Отриманий';

$GLOBALS["lang"]['dhcp_server'] = 'Статус на сервери';

$GLOBALS["lang"]['Dhcp Server'] = 'Статус на сервери';

$GLOBALS["lang"]['Did the command complete successfully and return expected data.'] = 'Чи вдалося команда успішно і повернути очікувані дані.';

$GLOBALS["lang"]['direction'] = 'Напрямок';

$GLOBALS["lang"]['Direction'] = 'Напрямок';

$GLOBALS["lang"]['directory'] = 'Довідник';

$GLOBALS["lang"]['Directory'] = 'Довідник';

$GLOBALS["lang"]['disabled'] = 'Вимкнено';

$GLOBALS["lang"]['Disabled'] = 'Вимкнено';

$GLOBALS["lang"]['discard'] = 'Проксимус';

$GLOBALS["lang"]['Discard'] = 'Проксимус';

$GLOBALS["lang"]['Discover'] = 'Головна';

$GLOBALS["lang"]['discoveries'] = 'Про компанію';

$GLOBALS["lang"]['Discoveries'] = 'Про компанію';

$GLOBALS["lang"]['Discovery'] = 'Про компанію';

$GLOBALS["lang"]['Discovery Change Logs'] = 'Журнали змін';

$GLOBALS["lang"]['Discovery Data Retention'] = 'Відновлення даних';

$GLOBALS["lang"]['discovery_id'] = 'Ім\'я користувача';

$GLOBALS["lang"]['Discovery ID'] = 'Ім\'я користувача';

$GLOBALS["lang"]['Discovery Issues'] = 'Проблемні питання';

$GLOBALS["lang"]['discovery_log'] = 'Логін';

$GLOBALS["lang"]['Discovery Log'] = 'Логін';

$GLOBALS["lang"]['Discovery Match Options'] = 'Параметри матчу Discovery';

$GLOBALS["lang"]['Discovery Name'] = 'Ім\'я користувача';

$GLOBALS["lang"]['Discovery Options'] = 'Варіанти пошуку';

$GLOBALS["lang"]['Discovery Queue Count'] = 'Випадковий граф';

$GLOBALS["lang"]['Discovery Queue Limit'] = 'Дізнайтесь більше';

$GLOBALS["lang"]['discovery_run'] = 'Пробіг';

$GLOBALS["lang"]['Discovery Run'] = 'Пробіг';

$GLOBALS["lang"]['discovery_scan_options'] = 'Параметри сканування';

$GLOBALS["lang"]['Discovery Scan Options'] = 'Параметри сканування';

$GLOBALS["lang"]['disk'] = 'Дек';

$GLOBALS["lang"]['Disk'] = 'Дек';

$GLOBALS["lang"]['display_version'] = 'Версія для відображення';

$GLOBALS["lang"]['Display Version'] = 'Версія для відображення';

$GLOBALS["lang"]['Display in Menu'] = 'Показати в меню';

$GLOBALS["lang"]['district'] = 'Райони';

$GLOBALS["lang"]['District'] = 'Райони';

$GLOBALS["lang"]['Djibouti'] = 'Джибуті';

$GLOBALS["lang"]['dns'] = 'Днс';

$GLOBALS["lang"]['Dns'] = 'Днс';

$GLOBALS["lang"]['dns_domain'] = 'Dns домен';

$GLOBALS["lang"]['Dns Domain'] = 'Dns домен';

$GLOBALS["lang"]['dns_domain_reg_enabled'] = 'Статус на сервери';

$GLOBALS["lang"]['Dns Domain Reg Enabled'] = 'Статус на сервери';

$GLOBALS["lang"]['dns_fqdn'] = 'Днс Фактн';

$GLOBALS["lang"]['Dns Fqdn'] = 'Днс Фактн';

$GLOBALS["lang"]['dns_host_name'] = 'Днс Хост Ім\'я';

$GLOBALS["lang"]['Dns Host Name'] = 'Днс Хост Ім\'я';

$GLOBALS["lang"]['dns_hostname'] = 'Днс Хостім';

$GLOBALS["lang"]['Dns Hostname'] = 'Днс Хостім';

$GLOBALS["lang"]['dns_server'] = 'Статус на сервери';

$GLOBALS["lang"]['Dns Server'] = 'Статус на сервери';

$GLOBALS["lang"]['Do not scan these TCP ports.'] = 'Не скануйте ці порти TCP.';

$GLOBALS["lang"]['Do not scan these UDP ports.'] = 'Не скануйте ці порти UDP.';

$GLOBALS["lang"]['Do not show me again'] = 'Не показувати мене знову';

$GLOBALS["lang"]['Do you want to use secure transport (LDAPS) or regular unencrypted LDAP.'] = 'Ви хочете використовувати безпечний транспорт (LDAPS) або регулярний розшифрований LDAP.';

$GLOBALS["lang"]['Do you wish to see the standard sidebar on the left.'] = 'Ви хочете бачити стандартну бічну панель зліва.';

$GLOBALS["lang"]['documentation'] = 'Документація';

$GLOBALS["lang"]['Documentation'] = 'Документація';

$GLOBALS["lang"]['Does the license apply to child Orgs.'] = 'Чи застосовується ліцензія на дитину Orgs.';

$GLOBALS["lang"]['domain'] = 'Головна';

$GLOBALS["lang"]['Domain'] = 'Головна';

$GLOBALS["lang"]['domain_controller_address'] = 'Адреса контролера домену';

$GLOBALS["lang"]['Domain Controller Address'] = 'Адреса контролера домену';

$GLOBALS["lang"]['domain_controller_name'] = 'Контролер домену Ім\'я';

$GLOBALS["lang"]['Domain Controller Name'] = 'Контролер домену Ім\'я';

$GLOBALS["lang"]['domain_role'] = 'Роль домену';

$GLOBALS["lang"]['Domain Role'] = 'Роль домену';

$GLOBALS["lang"]['domain_short'] = 'Короткий домен';

$GLOBALS["lang"]['Domain Short'] = 'Короткий домен';

$GLOBALS["lang"]['Dominica'] = 'Домініка';

$GLOBALS["lang"]['Dominican Republic'] = 'Домініканська Республіка';

$GLOBALS["lang"]['Dont hold my hand, I know what I am doing. No filter and the ability to join custom tables.'] = 'Я знаю, що я роблю. Немає фільтра і можливість приєднатися до користувацьких таблиць.';

$GLOBALS["lang"]['Download'] = 'Завантажити';

$GLOBALS["lang"]['Download a file from URL'] = 'Завантажити файл з URL';

$GLOBALS["lang"]['driver'] = 'Водій';

$GLOBALS["lang"]['Driver'] = 'Водій';

$GLOBALS["lang"]['duplex'] = 'Дуплекс';

$GLOBALS["lang"]['Duplex'] = 'Дуплекс';

$GLOBALS["lang"]['duration'] = 'Тривалість';

$GLOBALS["lang"]['Duration'] = 'Тривалість';

$GLOBALS["lang"]['ESXi'] = 'ESXi';

$GLOBALS["lang"]['EULA'] = 'Про компанію';

$GLOBALS["lang"]['Ecuador'] = 'Тернопіль';

$GLOBALS["lang"]['Edit'] = 'Редагування';

$GLOBALS["lang"]['edit_log'] = 'Редагувати журнал';

$GLOBALS["lang"]['Edit Log'] = 'Редагувати журнал';

$GLOBALS["lang"]['editable'] = 'Редагування';

$GLOBALS["lang"]['Editable'] = 'Редагування';

$GLOBALS["lang"]['edited_by'] = 'Редагування';

$GLOBALS["lang"]['Edited By'] = 'Редагування';

$GLOBALS["lang"]['edited_date'] = 'Дата редагування';

$GLOBALS["lang"]['Edited Date'] = 'Дата редагування';

$GLOBALS["lang"]['edition'] = 'Видання';

$GLOBALS["lang"]['Edition'] = 'Видання';

$GLOBALS["lang"]['Egypt'] = 'Єгипет';

$GLOBALS["lang"]['Either Amazon, Google or Microsoft.'] = 'English, Українська, Français...';

$GLOBALS["lang"]['Either none or present.

<strong>None</strong> - The successful attack does not depend on the deployment and execution conditions of the vulnerable system. The attacker can expect to be able to reach the vulnerability and execute the exploit under all or most instances of the vulnerability.

<strong>Present</strong> - The successful attack depends on the presence of specific deployment and execution conditions of the vulnerable system that enable the attack. These include:

A race condition must be won to successfully exploit the vulnerability. The successfulness of the attack is conditioned on execution conditions that are not under full control of the attacker. The attack may need to be launched multiple times against a single target before being successful.

Network injection. The attacker must inject themselves into the logical network path between the target and the resource requested by the victim (e.g. vulnerabilities requiring an on-path attacker).'] = 'Ні, ні.

<strong>Ні</strong> - Успішний напад не залежить від умов розгортання та виконання вразливих систем. Нападник може очікувати, щоб мати можливість досягнути вразливості і виконувати експлуатацію в усіх або більшості випадків вразливості.

<strong>Головна</strong> - Успішний напад залежить від наявності специфічних умов розгортання та виконання вразливих систем, які дозволяють атакувати. До них відносяться:

За умови забігу необхідно успішно використовувати вразливість. Успішність атаки обумовлена умовами виконання, які не підлягають повного контролю атаки. Напад може бути запущений кілька разів проти однієї мети, перш ніж бути успішним.

Ін\'єкції мережі. Нападник повинен вводити себе в логічний шлях мережі між метою і ресурсом, запитаним жертвою (наприклад, вразливості, які вимагають атаки на патологію).';

$GLOBALS["lang"]['El Salvador'] = 'Сальвадор';

$GLOBALS["lang"]['email'] = 'Веб-сайт';

$GLOBALS["lang"]['Email'] = 'Веб-сайт';

$GLOBALS["lang"]['email_address'] = 'Адреса електронної пошти';

$GLOBALS["lang"]['Email Address'] = 'Адреса електронної пошти';

$GLOBALS["lang"]['Email Configuration'] = 'Налаштування електронної пошти';

$GLOBALS["lang"]['Email to send test to'] = 'Email для відправки тесту';

$GLOBALS["lang"]['Enable'] = 'Увімкнути';

$GLOBALS["lang"]['enabled'] = 'Увімкнути';

$GLOBALS["lang"]['Enabled'] = 'Увімкнути';

$GLOBALS["lang"]['encryption'] = 'Розшифрування';

$GLOBALS["lang"]['Encryption'] = 'Розшифрування';

$GLOBALS["lang"]['encryption_method'] = 'Метод шифрування';

$GLOBALS["lang"]['Encryption Method'] = 'Метод шифрування';

$GLOBALS["lang"]['encryption_status'] = 'Статус на сервери';

$GLOBALS["lang"]['Encryption Status'] = 'Статус на сервери';

$GLOBALS["lang"]['end_date'] = 'Дата закінчення';

$GLOBALS["lang"]['End Date'] = 'Дата закінчення';

$GLOBALS["lang"]['End OF Life Product ID'] = 'Ідентифікатор продукту';

$GLOBALS["lang"]['end_of_life'] = 'Кінець життя';

$GLOBALS["lang"]['End Of Life'] = 'Кінець життя';

$GLOBALS["lang"]['end_of_production'] = 'Кінець виробництва';

$GLOBALS["lang"]['End Of Production'] = 'Кінець виробництва';

$GLOBALS["lang"]['end_of_service'] = 'Кінець служби';

$GLOBALS["lang"]['End Of Service'] = 'Кінець служби';

$GLOBALS["lang"]['end_of_service_life'] = 'Кінець служби життя';

$GLOBALS["lang"]['End Of Service Life'] = 'Кінець служби життя';

$GLOBALS["lang"]['English'] = 'Українська';

$GLOBALS["lang"]['enterprise'] = 'Підприємство';

$GLOBALS["lang"]['Enterprise'] = 'Підприємство';

$GLOBALS["lang"]['Enterprise Private Network'] = 'Приватна мережа підприємств';

$GLOBALS["lang"]['Entitlement Type'] = 'Тип назви';

$GLOBALS["lang"]['environment'] = 'Головна';

$GLOBALS["lang"]['Environment'] = 'Головна';

$GLOBALS["lang"]['Equal To'] = 'Що робити';

$GLOBALS["lang"]['Equal To or Greater Than'] = 'Equal To або Великий Than';

$GLOBALS["lang"]['Equal To or Less Than'] = 'Еквалі або Менше';

$GLOBALS["lang"]['Equals'] = 'На продажу';

$GLOBALS["lang"]['Equatorial Guinea'] = 'Екваторіальна Гвінея';

$GLOBALS["lang"]['Eritrea'] = 'Еритрея';

$GLOBALS["lang"]['Error'] = 'Помилка';

$GLOBALS["lang"]['Error Code'] = 'Код помилки';

$GLOBALS["lang"]['Established'] = 'Заснування';

$GLOBALS["lang"]['Estonia'] = 'Естонія';

$GLOBALS["lang"]['Ethernet MAC'] = 'Універсальні інженерні рішення';

$GLOBALS["lang"]['ethernet_mac'] = 'Веб-камера';

$GLOBALS["lang"]['Ethernet Mac'] = 'Веб-камера';

$GLOBALS["lang"]['Ethiopia'] = 'Ефіопія';

$GLOBALS["lang"]['Every'] = 'Всі';

$GLOBALS["lang"]['Every Day'] = 'Щодня';

$GLOBALS["lang"]['Exceptions'] = 'Вибори';

$GLOBALS["lang"]['exclude'] = 'Виключити';

$GLOBALS["lang"]['Exclude'] = 'Виключити';

$GLOBALS["lang"]['exclude_ip'] = 'Виключити IP';

$GLOBALS["lang"]['Exclude IP'] = 'Виключити IP';

$GLOBALS["lang"]['Exclude IP Addresses'] = 'Виключити IP адреси';

$GLOBALS["lang"]['Exclude TCP Ports'] = 'Порти TCP';

$GLOBALS["lang"]['exclude_tcp_ports'] = 'Порти Tcp';

$GLOBALS["lang"]['Exclude Tcp Ports'] = 'Порти Tcp';

$GLOBALS["lang"]['Exclude UDP Ports'] = 'Порти UDP';

$GLOBALS["lang"]['exclude_udp_ports'] = 'Порти Udp';

$GLOBALS["lang"]['Exclude Udp Ports'] = 'Порти Udp';

$GLOBALS["lang"]['Exclude these IP addresses from being Nmap scanned.'] = 'Виключіть ці IP-адреси, які скануються Nmap.';

$GLOBALS["lang"]['Excluded'] = 'Виключені';

$GLOBALS["lang"]['exclusion_reasons'] = 'Причини відчуження';

$GLOBALS["lang"]['Exclusion Reasons'] = 'Причини відчуження';

$GLOBALS["lang"]['executable'] = 'Виконується';

$GLOBALS["lang"]['Executable'] = 'Виконується';

$GLOBALS["lang"]['executable_id'] = 'Виконаний ідентифікатор';

$GLOBALS["lang"]['Executable ID'] = 'Виконаний ідентифікатор';

$GLOBALS["lang"]['executables'] = 'Виконавець';

$GLOBALS["lang"]['Executables'] = 'Виконавець';

$GLOBALS["lang"]['Execute'] = 'Виконувати';

$GLOBALS["lang"]['Executing'] = 'Виконання';

$GLOBALS["lang"]['exemption_reason'] = 'Причини завершення';

$GLOBALS["lang"]['Exemption Reason'] = 'Причини завершення';

$GLOBALS["lang"]['Existing Building'] = 'Експлуатація будівлі';

$GLOBALS["lang"]['Existing Floor'] = 'Підлога';

$GLOBALS["lang"]['Existing Room'] = 'Номер Полулюкс';

$GLOBALS["lang"]['Existing Row'] = 'Експлуатаційний ряд';

$GLOBALS["lang"]['expire_date'] = 'Дата закінчення';

$GLOBALS["lang"]['Expire Date'] = 'Дата закінчення';

$GLOBALS["lang"]['expire_minutes'] = 'Закінчення хвилин';

$GLOBALS["lang"]['Expire Minutes'] = 'Закінчення хвилин';

$GLOBALS["lang"]['expires'] = 'Закінчення';

$GLOBALS["lang"]['Expires'] = 'Закінчення';

$GLOBALS["lang"]['expiry_date'] = 'Термін придатності';

$GLOBALS["lang"]['Expiry Date'] = 'Термін придатності';

$GLOBALS["lang"]['exploit_maturity'] = 'Експлуатована насиченість';

$GLOBALS["lang"]['Exploit Maturity'] = 'Експлуатована насиченість';

$GLOBALS["lang"]['Export'] = 'Експорт';

$GLOBALS["lang"]['Export by Device'] = 'Експорт за допомогою пристрою';

$GLOBALS["lang"]['Export by Policy'] = 'Експорт';

$GLOBALS["lang"]['Export data to'] = 'Експорт даних до';

$GLOBALS["lang"]['expose'] = 'Проксимус';

$GLOBALS["lang"]['Expose'] = 'Проксимус';

$GLOBALS["lang"]['External'] = 'Зовнішній вигляд';

$GLOBALS["lang"]['External Field Name'] = 'Зовнішня назва поля';

$GLOBALS["lang"]['External Field Type'] = 'Тип зовнішнього поля';

$GLOBALS["lang"]['external_ident'] = 'Зовнішній ідентифікатор';

$GLOBALS["lang"]['External Ident'] = 'Зовнішній ідентифікатор';

$GLOBALS["lang"]['external_link'] = 'Зовнішні посилання';

$GLOBALS["lang"]['External Link'] = 'Зовнішні посилання';

$GLOBALS["lang"]['extra_columns'] = 'Додаткові стовпці';

$GLOBALS["lang"]['Extra Columns'] = 'Додаткові стовпці';

$GLOBALS["lang"]['Extra and more verbose logging is generated for troubleshooting.'] = 'Для усунення несправностей генерується додаткова і більш детальна логістика.';

$GLOBALS["lang"]['FAQ'] = 'Контакти';

$GLOBALS["lang"]['FQDN'] = 'ФКДН';

$GLOBALS["lang"]['FW Revision'] = 'FW версія';

$GLOBALS["lang"]['Fail'] = 'В\'язниця';

$GLOBALS["lang"]['Failed'] = 'Неприємний';

$GLOBALS["lang"]['Failed Severity'] = 'В’язкість';

$GLOBALS["lang"]['Falkland Islands (Malvinas)'] = 'Фолклендські острови (Malvinas)';

$GLOBALS["lang"]['Family'] = 'Сім\'я';

$GLOBALS["lang"]['Faroe Islands'] = 'Фарерські острови';

$GLOBALS["lang"]['Features'] = 'Особливості';

$GLOBALS["lang"]['February'] = 'Лютий';

$GLOBALS["lang"]['field'] = 'Сфера';

$GLOBALS["lang"]['Field'] = 'Сфера';

$GLOBALS["lang"]['field_id'] = 'Код поля';

$GLOBALS["lang"]['Field ID'] = 'Код поля';

$GLOBALS["lang"]['Field Name'] = 'Назва поля';

$GLOBALS["lang"]['Field Type'] = 'Тип поля';

$GLOBALS["lang"]['Fields'] = 'Сфери';

$GLOBALS["lang"]['fields'] = 'Сфери';

$GLOBALS["lang"]['Fiji the Fiji Islands'] = 'Фіджі острови Фіджі';

$GLOBALS["lang"]['File'] = 'Головна';

$GLOBALS["lang"]['File Import'] = 'Імпорт файлів';

$GLOBALS["lang"]['File Input'] = 'Вхід';

$GLOBALS["lang"]['file_name'] = 'Ім\'я файла';

$GLOBALS["lang"]['File Name'] = 'Ім\'я файла';

$GLOBALS["lang"]['file_size'] = 'Розмір файлу';

$GLOBALS["lang"]['File Size'] = 'Розмір файлу';

$GLOBALS["lang"]['filename'] = 'Назва файлу';

$GLOBALS["lang"]['Filename'] = 'Назва файлу';

$GLOBALS["lang"]['files'] = 'Файли';

$GLOBALS["lang"]['Files'] = 'Файли';

$GLOBALS["lang"]['files_id'] = 'Файли ID';

$GLOBALS["lang"]['Files ID'] = 'Файли ID';

$GLOBALS["lang"]['filter'] = 'Фільтри';

$GLOBALS["lang"]['Filter'] = 'Фільтри';

$GLOBALS["lang"]['filtered'] = 'Фільтрований';

$GLOBALS["lang"]['Filtered'] = 'Фільтрований';

$GLOBALS["lang"]['Finland'] = 'Фінляндія';

$GLOBALS["lang"]['Firewall'] = 'Лампи';

$GLOBALS["lang"]['firewall_rule'] = 'Ковролін Руле';

$GLOBALS["lang"]['Firewall Rule'] = 'Ковролін Руле';

$GLOBALS["lang"]['firmware'] = 'Прошивка';

$GLOBALS["lang"]['Firmware'] = 'Прошивка';

$GLOBALS["lang"]['firmware_revision'] = 'Завантаження прошивки';

$GLOBALS["lang"]['Firmware Revision'] = 'Завантаження прошивки';

$GLOBALS["lang"]['First Name'] = 'Ім\'я';

$GLOBALS["lang"]['first_run'] = 'Перший запуск';

$GLOBALS["lang"]['First Run'] = 'Перший запуск';

$GLOBALS["lang"]['first_seen'] = 'Перший Диван';

$GLOBALS["lang"]['First Seen'] = 'Перший Диван';

$GLOBALS["lang"]['FirstWave'] = 'Перший';

$GLOBALS["lang"]['Fix'] = 'Фіксація';

$GLOBALS["lang"]['Fixed'] = 'Фіксований';

$GLOBALS["lang"]['Floor'] = 'Підлога';

$GLOBALS["lang"]['Follow any of the links below and discover how to use Open-AudIT to find out <b>Whats On Your Network?</b>'] = 'Дізнайтеся, як використовувати Open-AudIT <b>Що на вашій мережі?</b>';

$GLOBALS["lang"]['For a seed discovery, should I only discover IPs in the private IP address space.'] = 'Для відкриття насіння слід відкрити тільки IP-адресу в приватному IP-адресі.';

$GLOBALS["lang"]['For a seed discovery, should I only discover IPs on the chosen subnet.'] = 'Для відкриття насіння слід відкрити тільки IP-адреси на обраному підмережі.';

$GLOBALS["lang"]['For a seed discovery, should I ping the subnet before running the discovery.'] = 'Для відкриття насіння слід пінгнути підмережу перед початком відкриття.';

$GLOBALS["lang"]['For advanced entry of a raw SQL query. As per Queries, you must include <code>WHERE @filter AND<code> in your SQL.'] = 'Для розширеного в\'їзду сировини SQL запитів. Що стосується запитів, то ви повинні включати <code>WHERE @filter AND<code> in your SQL.</code></code>';

$GLOBALS["lang"]['For licenses that are not perpetual, when does the license expire.'] = 'Для ліцензій, які не є обов’язковими, при оформленні ліцензії.';

$GLOBALS["lang"]['form_factor'] = 'форм фактор';

$GLOBALS["lang"]['Form Factor'] = 'форм фактор';

$GLOBALS["lang"]['format'] = 'Почати';

$GLOBALS["lang"]['Format'] = 'Почати';

$GLOBALS["lang"]['fqdn'] = 'Факти';

$GLOBALS["lang"]['Fqdn'] = 'Факти';

$GLOBALS["lang"]['France, French Republic'] = 'Франція, Французька Республіка';

$GLOBALS["lang"]['free'] = 'Безкоштовно';

$GLOBALS["lang"]['Free'] = 'Безкоштовно';

$GLOBALS["lang"]['French'] = 'Французька';

$GLOBALS["lang"]['French Guiana'] = 'Французька Гуана';

$GLOBALS["lang"]['French Polynesia'] = 'Французька Полінезія';

$GLOBALS["lang"]['French Southern Territories'] = 'Французькі Південні Території';

$GLOBALS["lang"]['Frequently Asked Questions'] = 'Питання і відповіді';

$GLOBALS["lang"]['Friday'] = 'П\'ятниця';

$GLOBALS["lang"]['From 100 Devices'] = 'Від 100 пристроїв';

$GLOBALS["lang"]['From 500 Devices'] = 'Від 500 пристроїв';

$GLOBALS["lang"]['full_name'] = 'Ім\'я';

$GLOBALS["lang"]['Full Name'] = 'Ім\'я';

$GLOBALS["lang"]['function'] = 'Мета';

$GLOBALS["lang"]['Function'] = 'Мета';

$GLOBALS["lang"]['GROUP BY'] = 'ГРУП';

$GLOBALS["lang"]['Gabon'] = 'Габон';

$GLOBALS["lang"]['Gambia the'] = 'Гамбія';

$GLOBALS["lang"]['gateway'] = 'Проксимус';

$GLOBALS["lang"]['Gateway'] = 'Проксимус';

$GLOBALS["lang"]['gateways'] = 'Ворота';

$GLOBALS["lang"]['Gateways'] = 'Ворота';

$GLOBALS["lang"]['Generated By'] = 'Жанри';

$GLOBALS["lang"]['geo'] = 'Геонауки';

$GLOBALS["lang"]['Geo'] = 'Геонауки';

$GLOBALS["lang"]['Georgia'] = 'Грузія';

$GLOBALS["lang"]['German'] = 'Німецький';

$GLOBALS["lang"]['Germany'] = 'Німеччина';

$GLOBALS["lang"]['Get Lat/Long'] = 'Отримати Lat/Long';

$GLOBALS["lang"]['Get Started'] = 'Почати';

$GLOBALS["lang"]['Get a Free License'] = 'Отримати безкоштовну ліцензію';

$GLOBALS["lang"]['Getting Started'] = 'Почати';

$GLOBALS["lang"]['Ghana'] = 'Ганна';

$GLOBALS["lang"]['Gibraltar'] = 'Гібралтар';

$GLOBALS["lang"]['Global Discovery Options'] = 'Глобальні параметри пошуку';

$GLOBALS["lang"]['Go'] = 'Про нас';

$GLOBALS["lang"]['Google Compute Fields'] = 'Google Compute поля';

$GLOBALS["lang"]['Google Maps API Key'] = 'Статус на сервери Головна';

$GLOBALS["lang"]['Greater Than'] = 'Великий Тан';

$GLOBALS["lang"]['Greater Than or Equals'] = 'Великий Than або Equals';

$GLOBALS["lang"]['Greece'] = 'Греція';

$GLOBALS["lang"]['Green Query'] = 'Зелений Коричневий';

$GLOBALS["lang"]['Greenland'] = 'Зелена';

$GLOBALS["lang"]['Grenada'] = 'Гренада';

$GLOBALS["lang"]['Group'] = 'Група';

$GLOBALS["lang"]['group_by'] = 'Група по';

$GLOBALS["lang"]['Group By'] = 'Група по';

$GLOBALS["lang"]['group_id'] = 'Код ЄДРПОУ';

$GLOBALS["lang"]['Group ID'] = 'Код ЄДРПОУ';

$GLOBALS["lang"]['groups'] = 'Групи';

$GLOBALS["lang"]['Groups'] = 'Групи';

$GLOBALS["lang"]['Guadeloupe'] = 'Гваделупа';

$GLOBALS["lang"]['Guam'] = 'Гуам';

$GLOBALS["lang"]['Guatemala'] = 'Гватемала';

$GLOBALS["lang"]['Guernsey'] = 'Гернсі';

$GLOBALS["lang"]['guest_device_id'] = 'Ім\'я користувача';

$GLOBALS["lang"]['Guest Device ID'] = 'Ім\'я користувача';

$GLOBALS["lang"]['guid'] = 'Надія';

$GLOBALS["lang"]['Guid'] = 'Надія';

$GLOBALS["lang"]['Guinea'] = 'Геонауки';

$GLOBALS["lang"]['Guinea-Bissau'] = 'Гвінея-Бісау';

$GLOBALS["lang"]['Guyana'] = 'Гайана';

$GLOBALS["lang"]['HP-UX'] = 'HP-UX - Інтернет-магазин';

$GLOBALS["lang"]['HW Revision'] = 'HW версія';

$GLOBALS["lang"]['Haiti'] = 'Хайти';

$GLOBALS["lang"]['hard_drive_index'] = 'Індекс жорсткого диска';

$GLOBALS["lang"]['Hard Drive Index'] = 'Індекс жорсткого диска';

$GLOBALS["lang"]['hardware_revision'] = 'Обладнання Ревізія';

$GLOBALS["lang"]['Hardware Revision'] = 'Обладнання Ревізія';

$GLOBALS["lang"]['Has this policy been applied in this organization.'] = 'У цій організації надана політика.';

$GLOBALS["lang"]['hash'] = 'Хати';

$GLOBALS["lang"]['Hash'] = 'Хати';

$GLOBALS["lang"]['Head'] = 'Головна';

$GLOBALS["lang"]['Heard Island and McDonald Islands'] = 'Острів Хеард і острови Макдональд';

$GLOBALS["lang"]['height'] = 'Виброхвост';

$GLOBALS["lang"]['Height'] = 'Виброхвост';

$GLOBALS["lang"]['Height in RU'] = 'Висота в RU';

$GLOBALS["lang"]['Help'] = 'Допомогти';

$GLOBALS["lang"]['Help and Frequently Asked Questions'] = 'Запитання та відповіді';

$GLOBALS["lang"]['high'] = 'Висока якість';

$GLOBALS["lang"]['High'] = 'Висока якість';

$GLOBALS["lang"]['High Availability'] = 'Висока доступність';

$GLOBALS["lang"]['Holy See (Vatican City State)'] = 'Свято-Послання (Vatican City State)';

$GLOBALS["lang"]['Home'] = 'Головна';

$GLOBALS["lang"]['home'] = 'Головна';

$GLOBALS["lang"]['Home Area Network'] = 'Головна Мережа';

$GLOBALS["lang"]['Honduras'] = 'Гондурас';

$GLOBALS["lang"]['Hong Kong'] = 'Гонконг';

$GLOBALS["lang"]['host'] = 'Проживання';

$GLOBALS["lang"]['Host'] = 'Проживання';

$GLOBALS["lang"]['hostname'] = 'Логін';

$GLOBALS["lang"]['Hostname'] = 'Логін';

$GLOBALS["lang"]['hour'] = 'Час';

$GLOBALS["lang"]['Hour'] = 'Час';

$GLOBALS["lang"]['How and Why is Open-AudIT More Secure'] = 'Як і чому Open-AudIT більш безпечно';

$GLOBALS["lang"]['How long did the command take to execute.'] = 'Як довго зробив команду, щоб виконати.';

$GLOBALS["lang"]['How long should Nmap wait for a response, per device.'] = 'Як довго не варто чекати від відповіді, на пристрій.';

$GLOBALS["lang"]['How many circuit feed to this rack.'] = 'Скільки ланцюга годувати до цієї стійки.';

$GLOBALS["lang"]['How many policies results in a fail.'] = 'Як багато політик призводить до невдачі.';

$GLOBALS["lang"]['How many policies results in a pass.'] = 'Як багато політик призводить до проходження.';

$GLOBALS["lang"]['How many power sockets in this rack.'] = 'Скільки силових розеток в цій стійки.';

$GLOBALS["lang"]['How many rack units in height is this rack.'] = 'Скільки стелажів у висоту це стійки.';

$GLOBALS["lang"]['How often should the collector ask the server for a task.'] = 'Як часто необхідно зібрати сервер для завдання.';

$GLOBALS["lang"]['How should we select devices to be integrated (using an Attribute, Query or a Group).'] = 'Як вибрати прилади, які повинні бути інтегровані (виходячи з атрибуту, запиту або групи).';

$GLOBALS["lang"]['How the vulnerability is exploited (e.g., Network, Adjacent, Local, Physical).'] = 'Як працює вразливість (наприклад, мережа, суміжні, локальні, фізичні).';

$GLOBALS["lang"]['How to compare'] = 'Як порівняти';

$GLOBALS["lang"]['Human-readable explanation of the vulnerability.'] = 'Людино-прочитане пояснення вразливості.';

$GLOBALS["lang"]['Hungary'] = 'Угорщина';

$GLOBALS["lang"]['hw_cpe'] = 'Хв Кпе';

$GLOBALS["lang"]['Hw Cpe'] = 'Хв Кпе';

$GLOBALS["lang"]['hyperthreading'] = 'Гіперти';

$GLOBALS["lang"]['Hyperthreading'] = 'Гіперти';

$GLOBALS["lang"]['I have read the EULA.'] = 'Я прочитав EULA.';

$GLOBALS["lang"]['id'] = 'Ім\'я';

$GLOBALS["lang"]['ID'] = 'ID';

$GLOBALS["lang"]['IF'] = 'МСБ';

$GLOBALS["lang"]['IOS Version'] = 'Версія IOS';

$GLOBALS["lang"]['IP'] = 'Ім\'я';

$GLOBALS["lang"]['ip'] = 'Ім\'я';

$GLOBALS["lang"]['IP Address'] = 'IP адреса';

$GLOBALS["lang"]['IP Addresses'] = 'IP адреси';

$GLOBALS["lang"]['IP Last Seen'] = 'IP Останнє повідомлення';

$GLOBALS["lang"]['IP Set By'] = 'Налаштування IP';

$GLOBALS["lang"]['ISO 27001 only.'] = 'ISO 27001 тільки.';

$GLOBALS["lang"]['Iceland'] = 'Ісландія';

$GLOBALS["lang"]['icon'] = 'Ікона';

$GLOBALS["lang"]['Icon'] = 'Ікона';

$GLOBALS["lang"]['Icon and Text'] = 'Ікона і текст';

$GLOBALS["lang"]['Icon only, text only or icon and text.'] = 'Ікона тільки, текст тільки або ікона і текст.';

$GLOBALS["lang"]['id_internal'] = 'Внутрішня';

$GLOBALS["lang"]['Id Internal'] = 'Внутрішня';

$GLOBALS["lang"]['id_number'] = 'Id номер';

$GLOBALS["lang"]['Id Number'] = 'Id номер';

$GLOBALS["lang"]['identification'] = 'Видання';

$GLOBALS["lang"]['Identification'] = 'Видання';

$GLOBALS["lang"]['If'] = 'Якщо';

$GLOBALS["lang"]['If a port responds with filtered, should we consider it available.'] = 'Якщо порт відповідає фільтрованим, слід розглянути його доступним.';

$GLOBALS["lang"]['If a port responds with open|filtered, should we consider it available.'] = 'Якщо порт відповідав за допомогою openfiltered, слід розглянути його доступним.';

$GLOBALS["lang"]['If a remote device does not exist in the Open-AudIT selected devices, should we delete it from the external system.'] = 'Якщо віддалений пристрій не існує в обраних пристроях Open-AudIT, слід видалити його з зовнішньої системи.';

$GLOBALS["lang"]['If an Open-AudIT device has been changed, should we update the external system.'] = 'Якщо було змінено пристрій Open-AudIT, слід оновити зовнішню систему.';

$GLOBALS["lang"]['If an Open-AudIT device is not on the external system, should we create it.'] = 'Якщо пристрій Open-AudIT не знаходиться на зовнішній системі, слід створювати його.';

$GLOBALS["lang"]['If an agent reports its primary IP is in this subnet, perform the actions.'] = 'Якщо агент повідомляє про свій первинний IP в цьому підмережі, виконує дії.';

$GLOBALS["lang"]['If any of these (comma seperated, no spaces) ports are detected, assume SSH is running on them and use them for auditing. No need to add this port to the Custom TCP ports - it will be added automatically.'] = 'При виявленні будь-яких з цих (комаційних, не пробілів) портів, припускають SSH на них і використовують їх для проведення перевірок. Немає необхідності додавати цей порт на спеціальні порти TCP - він буде додано автоматично.';

$GLOBALS["lang"]['If set, holds a JSON array of specific device columns this user has chosen to see, other than the configuration default.'] = 'Якщо встановити, утримує JSON масив певних стовпців пристроїв, цей користувач вибрав для перегляду, крім конфігураційного за замовчуванням.';

$GLOBALS["lang"]['If the agent OS family (case insensitive) contains this string, perform the actions.'] = 'Якщо агент OS сім\'ї (змінний) містить цей рядок, виконує дії.';

$GLOBALS["lang"]['If the following conditions are met:<br><ul><li>a Role has an assigned ad_group</li><li>an Org has an assigned ad_group</li><li>an LDAP Server has use_roles set to y</li><li>a user exists in LDAP (be it Active Directory or OpenLDAP) and is in the assigned ad_groups</li></ul>That user can log on to Open-AudIT without an account in Open-AudIT needing to be created. Open-AudIT will query the LDAP in question and if the user is in the required groups but not in Open-AudIT, their user attributes (name, full name, email,  roles, orgs, etc) within Open-AudIT will be automatically populated and they will be logged on.<br> <br>'] = 'У разі виконання наступних умов:<br/><ul><li>Роль має призначену ад_групу</li><li>Org має призначене оголошення_група</li><li>ЛДАП Сервер має use_roles набір до y</li><li>Користувач існує в LDAP (be it Active Directory або OpenLDAP) і знаходиться в призначених оголошеннях_груп</li></ul>Цей користувач може увійти на Open-AudIT без облікового запису в Open-AudIT, необхідного для створення. Open-AudIT буде запитати LDAP і якщо користувач перебуває в необхідних групах, але не в Open-AudIT, атрибути користувачів (ім\'я, ім\'я, прізвище, ім\'я, електронна пошта, ролі, orgs і т.д.) в рамках Open-AudIT буде автоматично заселений, і вони будуть записані на сайті.<br/> <br/>';

$GLOBALS["lang"]['If the user logging on to Open-AudIT does not have the access to search LDAP, you can use another account which does have this access.'] = 'Якщо запис користувача на Open-AudIT не має доступу до пошуку LDAP, ви можете використовувати інший обліковий запис, який має цей доступ.';

$GLOBALS["lang"]['If this many or more minutes have passed since the device contacted the server, perform the actions.'] = 'Якщо це багато або більше хвилин пропущено, оскільки пристрій, що контактує з сервером, виконує дії.';

$GLOBALS["lang"]['If you choose a Collector, it will be scheduled to execute on the next 5 minute boundary.'] = 'Якщо ви обираєте колекціонер, він буде запланований для виконання на наступний 5 хвилинний ліміт.';

$GLOBALS["lang"]['ifadminstatus'] = 'Зареєструватися';

$GLOBALS["lang"]['Ifadminstatus'] = 'Зареєструватися';

$GLOBALS["lang"]['iflastchange'] = 'Умань';

$GLOBALS["lang"]['Iflastchange'] = 'Умань';

$GLOBALS["lang"]['Ignored'] = 'Ігнольд';

$GLOBALS["lang"]['image'] = 'Відео';

$GLOBALS["lang"]['Image'] = 'Відео';

$GLOBALS["lang"]['Images'] = 'Відео';

$GLOBALS["lang"]['impact_availability'] = 'Доступність';

$GLOBALS["lang"]['Impact Availability'] = 'Доступність';

$GLOBALS["lang"]['impact_confidentiality'] = 'Налаштування впливу';

$GLOBALS["lang"]['Impact Confidentiality'] = 'Налаштування впливу';

$GLOBALS["lang"]['impact_integrity'] = 'Інтеграція впливу';

$GLOBALS["lang"]['Impact Integrity'] = 'Інтеграція впливу';

$GLOBALS["lang"]['implementation_notes'] = 'Примітки щодо впровадження';

$GLOBALS["lang"]['Implementation Notes'] = 'Примітки щодо впровадження';

$GLOBALS["lang"]['Import'] = 'Імпорт';

$GLOBALS["lang"]['Import Example Data'] = 'Приклад імпорту даних';

$GLOBALS["lang"]['improvement_opportunities'] = 'Можливості';

$GLOBALS["lang"]['Improvement Opportunities'] = 'Можливості';

$GLOBALS["lang"]['In'] = 'У';

$GLOBALS["lang"]['Inactive'] = 'Неактивний';

$GLOBALS["lang"]['Include'] = 'Включити';

$GLOBALS["lang"]['Incomplete'] = 'Неповторний';

$GLOBALS["lang"]['Index'] = 'Індекс';

$GLOBALS["lang"]['India'] = 'Індія';

$GLOBALS["lang"]['Indonesia'] = 'Індонезія';

$GLOBALS["lang"]['Info'] = 'Новини';

$GLOBALS["lang"]['Informational'] = 'Інформація';

$GLOBALS["lang"]['initial_size'] = 'Початковий розмір';

$GLOBALS["lang"]['Initial Size'] = 'Початковий розмір';

$GLOBALS["lang"]['inode'] = 'Іноди';

$GLOBALS["lang"]['Inode'] = 'Іноди';

$GLOBALS["lang"]['Input Type'] = 'Тип введення';

$GLOBALS["lang"]['inputs'] = 'Вхід';

$GLOBALS["lang"]['Inputs'] = 'Вхід';

$GLOBALS["lang"]['Insane'] = 'Інсан';

$GLOBALS["lang"]['Insert example data and discover all that Open-AudIT can tell you.'] = 'Вставте дані та дізнайтесь, що Open-AudIT може розповісти вам.';

$GLOBALS["lang"]['Insert your Purchased license Key'] = 'Вставте свій Придбання ліцензії Головна';

$GLOBALS["lang"]['install'] = 'Увійти';

$GLOBALS["lang"]['Install'] = 'Увійти';

$GLOBALS["lang"]['install_date'] = 'Дата встановлення';

$GLOBALS["lang"]['Install Date'] = 'Дата встановлення';

$GLOBALS["lang"]['install_directory'] = 'Встановити каталог';

$GLOBALS["lang"]['Install Directory'] = 'Встановити каталог';

$GLOBALS["lang"]['Install OpenScap if required'] = 'Встановити OpenScap при необхідності';

$GLOBALS["lang"]['install_source'] = 'Встановити джерело';

$GLOBALS["lang"]['Install Source'] = 'Встановити джерело';

$GLOBALS["lang"]['installed_by'] = 'Встановити';

$GLOBALS["lang"]['Installed By'] = 'Встановити';

$GLOBALS["lang"]['installed_on'] = 'Встановити на';

$GLOBALS["lang"]['Installed On'] = 'Встановити на';

$GLOBALS["lang"]['Installing on Linux'] = 'Налаштування на Linux';

$GLOBALS["lang"]['Installing on MacOS'] = 'Встановлення на MacOS';

$GLOBALS["lang"]['Installing on Windows'] = 'Встановлення на Windows';

$GLOBALS["lang"]['instance'] = 'Інструкції';

$GLOBALS["lang"]['Instance'] = 'Інструкції';

$GLOBALS["lang"]['instance_ident'] = 'Ідентифікатор';

$GLOBALS["lang"]['Instance Ident'] = 'Ідентифікатор';

$GLOBALS["lang"]['instance_options'] = 'Параметри';

$GLOBALS["lang"]['Instance Options'] = 'Параметри';

$GLOBALS["lang"]['instance_provider'] = 'Постачальник послуг';

$GLOBALS["lang"]['Instance Provider'] = 'Постачальник послуг';

$GLOBALS["lang"]['instance_reservation_ident'] = 'Бронювання Ідент';

$GLOBALS["lang"]['Instance Reservation Ident'] = 'Бронювання Ідент';

$GLOBALS["lang"]['instance_state'] = 'Стан';

$GLOBALS["lang"]['Instance State'] = 'Стан';

$GLOBALS["lang"]['instance_tags'] = 'Теги';

$GLOBALS["lang"]['Instance Tags'] = 'Теги';

$GLOBALS["lang"]['instance_type'] = 'Тип інсталяції';

$GLOBALS["lang"]['Instance Type'] = 'Тип інсталяції';

$GLOBALS["lang"]['Integer'] = 'Інтегер';

$GLOBALS["lang"]['Integration'] = 'Інтеграція';

$GLOBALS["lang"]['integrations'] = 'Інтеграція';

$GLOBALS["lang"]['Integrations'] = 'Інтеграція';

$GLOBALS["lang"]['integrations_id'] = 'Інтеграція ID';

$GLOBALS["lang"]['Integrations ID'] = 'Інтеграція ID';

$GLOBALS["lang"]['integrations_log'] = 'Інтеграція Лог';

$GLOBALS["lang"]['Integrations Log'] = 'Інтеграція Лог';

$GLOBALS["lang"]['interface'] = 'Інтерфейс';

$GLOBALS["lang"]['Interface'] = 'Інтерфейс';

$GLOBALS["lang"]['interface_id'] = 'Інтерфейс ID';

$GLOBALS["lang"]['Interface ID'] = 'Інтерфейс ID';

$GLOBALS["lang"]['interface_type'] = 'Тип інтерфейсу';

$GLOBALS["lang"]['Interface Type'] = 'Тип інтерфейсу';

$GLOBALS["lang"]['Internal'] = 'Внутрішній';

$GLOBALS["lang"]['Internal Field Name'] = 'Назва поля';

$GLOBALS["lang"]['Internal ID'] = 'Внутрішній ідентифікатор';

$GLOBALS["lang"]['Internal JSON array of valid access tokens for this user.'] = 'Внутрішній масив JSON для цього користувача.';

$GLOBALS["lang"]['Introduction'] = 'Вступ';

$GLOBALS["lang"]['invoice'] = 'Інвойс';

$GLOBALS["lang"]['Invoice'] = 'Інвойс';

$GLOBALS["lang"]['invoice_id'] = 'Ім\'я користувача';

$GLOBALS["lang"]['Invoice ID'] = 'Ім\'я користувача';

$GLOBALS["lang"]['invoice_item'] = 'Вхід';

$GLOBALS["lang"]['Invoice Item'] = 'Вхід';

$GLOBALS["lang"]['ios_version'] = 'Версія Ios';

$GLOBALS["lang"]['Ios Version'] = 'Версія Ios';

$GLOBALS["lang"]['ip_address_external_a'] = 'Ip Адреса Зовнішній A';

$GLOBALS["lang"]['Ip Address External A'] = 'Ip Адреса Зовнішній A';

$GLOBALS["lang"]['ip_address_external_b'] = 'Ip Адреса зовнішнього B';

$GLOBALS["lang"]['Ip Address External B'] = 'Ip Адреса зовнішнього B';

$GLOBALS["lang"]['ip_address_internal_a'] = 'Ip Адреса Внутрішня A';

$GLOBALS["lang"]['Ip Address Internal A'] = 'Ip Адреса Внутрішня A';

$GLOBALS["lang"]['ip_address_internal_b'] = 'Ip Адреса Внутрішній Б';

$GLOBALS["lang"]['Ip Address Internal B'] = 'Ip Адреса Внутрішній Б';

$GLOBALS["lang"]['ip_all_count'] = 'Ip Всі рахунки';

$GLOBALS["lang"]['Ip All Count'] = 'Ip Всі рахунки';

$GLOBALS["lang"]['ip_audited_count'] = 'Ip Аудований граф';

$GLOBALS["lang"]['Ip Audited Count'] = 'Ip Аудований граф';

$GLOBALS["lang"]['ip_discovered_count'] = 'Ip Відкриття графа';

$GLOBALS["lang"]['Ip Discovered Count'] = 'Ip Відкриття графа';

$GLOBALS["lang"]['ip_enabled'] = 'Ip Увімкнути';

$GLOBALS["lang"]['Ip Enabled'] = 'Ip Увімкнути';

$GLOBALS["lang"]['ip_responding_count'] = 'Ip Відповідаючи граф';

$GLOBALS["lang"]['Ip Responding Count'] = 'Ip Відповідаючи граф';

$GLOBALS["lang"]['ip_scanned_count'] = 'Ip Скасований граф';

$GLOBALS["lang"]['Ip Scanned Count'] = 'Ip Скасований граф';

$GLOBALS["lang"]['Iran'] = 'Іран';

$GLOBALS["lang"]['Iraq'] = 'Ірак';

$GLOBALS["lang"]['Ireland'] = 'Ірландія';

$GLOBALS["lang"]['Is FRU'] = 'Є ФРУ';

$GLOBALS["lang"]['is_fru'] = 'Чи є Fru';

$GLOBALS["lang"]['Is Fru'] = 'Чи є Fru';

$GLOBALS["lang"]['Is the NMIS server local (on this Open-AudIT server) or remote?'] = 'Чи локальний сервер NMIS (на цьому сервері Open-AudIT) або віддалений?';

$GLOBALS["lang"]['Is this account active? If set to <code>n</code>, the user cannot logon.'] = 'Чи працює цей обліковий запис? Якщо встановити <code>n</code>, Користувач не може бути логіном.';

$GLOBALS["lang"]['Is this query restricted to licensed customers.'] = 'Це запит, обмежений для ліцензованих клієнтів.';

$GLOBALS["lang"]['Is this task enabled (y/n).'] = 'Чи можливо це завдання (y/n).';

$GLOBALS["lang"]['Isle of Man'] = 'Острів Мен';

$GLOBALS["lang"]['Israel'] = 'Ізраїль';

$GLOBALS["lang"]['Issue'] = 'Новини';

$GLOBALS["lang"]['issuer'] = 'Видавець';

$GLOBALS["lang"]['Issuer'] = 'Видавець';

$GLOBALS["lang"]['issuer_name'] = 'Ім\'я користувача';

$GLOBALS["lang"]['Issuer Name'] = 'Ім\'я користувача';

$GLOBALS["lang"]['Issues'] = 'Питання';

$GLOBALS["lang"]['Italy'] = 'Італія';

$GLOBALS["lang"]['Items not in Baseline'] = 'Не в Базиліні';

$GLOBALS["lang"]['JSON'] = 'Сонце';

$GLOBALS["lang"]['JSON to Import'] = 'JSON до імпорту';

$GLOBALS["lang"]['Jamaica'] = 'Ямайка';

$GLOBALS["lang"]['January'] = 'Січень';

$GLOBALS["lang"]['Japan'] = 'Японія';

$GLOBALS["lang"]['Jersey'] = 'Українська';

$GLOBALS["lang"]['Jordan'] = 'Йорданія';

$GLOBALS["lang"]['July'] = 'Липень';

$GLOBALS["lang"]['June'] = 'Червень';

$GLOBALS["lang"]['Kazakhstan'] = 'Українська';

$GLOBALS["lang"]['Kenya'] = 'Кенія';

$GLOBALS["lang"]['kernel_version'] = 'Версія Кернел';

$GLOBALS["lang"]['Kernel Version'] = 'Версія Кернел';

$GLOBALS["lang"]['Key'] = 'Головна';

$GLOBALS["lang"]['Key Password (optional)'] = 'Ключовий пароль (за бажанням)';

$GLOBALS["lang"]['keys'] = 'Головна';

$GLOBALS["lang"]['Keys'] = 'Головна';

$GLOBALS["lang"]['Kiribati'] = 'Кірібаті';

$GLOBALS["lang"]['Korea'] = 'Українська';

$GLOBALS["lang"]['Kuwait'] = 'Кувейт';

$GLOBALS["lang"]['Kyrgyz Republic'] = 'Киргизія';

$GLOBALS["lang"]['lang'] = 'Ланг';

$GLOBALS["lang"]['Lang'] = 'Ланг';

$GLOBALS["lang"]['language'] = 'Українська';

$GLOBALS["lang"]['Language'] = 'Українська';

$GLOBALS["lang"]['Lao'] = 'Лао';

$GLOBALS["lang"]['last_changed'] = 'Останні зміни';

$GLOBALS["lang"]['Last Changed'] = 'Останні зміни';

$GLOBALS["lang"]['last_finished'] = 'Останній Завершено';

$GLOBALS["lang"]['Last Finished'] = 'Останній Завершено';

$GLOBALS["lang"]['last_logon'] = 'Останній Логон';

$GLOBALS["lang"]['Last Logon'] = 'Останній Логон';

$GLOBALS["lang"]['Last Name'] = 'Ім\'я';

$GLOBALS["lang"]['last_os_update'] = 'Останнє оновлення оса';

$GLOBALS["lang"]['Last Os Update'] = 'Останнє оновлення оса';

$GLOBALS["lang"]['last_result'] = 'Останні результати';

$GLOBALS["lang"]['Last Result'] = 'Останні результати';

$GLOBALS["lang"]['last_run'] = 'Останній забіг';

$GLOBALS["lang"]['Last Run'] = 'Останній забіг';

$GLOBALS["lang"]['last_seen'] = 'Останній Диван';

$GLOBALS["lang"]['Last Seen'] = 'Останній Диван';

$GLOBALS["lang"]['last_seen_by'] = 'Останній Диван Зареєструватися';

$GLOBALS["lang"]['Last Seen By'] = 'Останній Диван Зареєструватися';

$GLOBALS["lang"]['last_user'] = 'Останній користувач';

$GLOBALS["lang"]['Last User'] = 'Останній користувач';

$GLOBALS["lang"]['lastModified'] = 'Головна';

$GLOBALS["lang"]['LastModified'] = 'Головна';

$GLOBALS["lang"]['latitude'] = 'Прованс';

$GLOBALS["lang"]['Latitude'] = 'Прованс';

$GLOBALS["lang"]['Latvia'] = 'Латвія';

$GLOBALS["lang"]['Layout'] = 'Прованс';

$GLOBALS["lang"]['ldap'] = 'Лампи';

$GLOBALS["lang"]['Ldap'] = 'Лампи';

$GLOBALS["lang"]['ldap_base_dn'] = 'Ldap бази Dn';

$GLOBALS["lang"]['Ldap Base Dn'] = 'Ldap бази Dn';

$GLOBALS["lang"]['ldap_dn_account'] = 'Ldap Dn акаунт';

$GLOBALS["lang"]['Ldap Dn Account'] = 'Ldap Dn акаунт';

$GLOBALS["lang"]['ldap_dn_password'] = 'Ldap Dn Пароль';

$GLOBALS["lang"]['Ldap Dn Password'] = 'Ldap Dn Пароль';

$GLOBALS["lang"]['Learn About'] = 'Дізнатися більше';

$GLOBALS["lang"]['Learn More'] = 'Дізнатися більше';

$GLOBALS["lang"]['lease_expiry_date'] = 'Термін придатності';

$GLOBALS["lang"]['Lease Expiry Date'] = 'Термін придатності';

$GLOBALS["lang"]['Lebanon'] = 'Ліван';

$GLOBALS["lang"]['legal_requirements'] = 'Правові вимоги';

$GLOBALS["lang"]['Legal Requirements'] = 'Правові вимоги';

$GLOBALS["lang"]['Lesotho'] = 'Лесото';

$GLOBALS["lang"]['Less Than'] = 'Менше ніж';

$GLOBALS["lang"]['Less Than or Equals'] = 'Менше ніжних або рівних';

$GLOBALS["lang"]['level'] = 'Рівень';

$GLOBALS["lang"]['Level'] = 'Рівень';

$GLOBALS["lang"]['Level of privileges needed to exploit (None, Low, High).'] = 'Рівень привілеїв, необхідних для експлуатації (не, низький, високий).';

$GLOBALS["lang"]['Liberia'] = 'Ліберія';

$GLOBALS["lang"]['Libyan Arab Jamahiriya'] = 'Лівінська Арабська Джамахія';

$GLOBALS["lang"]['License'] = 'Ліцензії';

$GLOBALS["lang"]['License Key'] = 'Ліцензійний ключ';

$GLOBALS["lang"]['License Required'] = 'Обов\'язкова ліцензія';

$GLOBALS["lang"]['licenses'] = 'Ліцензії';

$GLOBALS["lang"]['Licenses'] = 'Ліцензії';

$GLOBALS["lang"]['Liechtenstein'] = 'Ліхтенштейн';

$GLOBALS["lang"]['Like'] = 'Як';

$GLOBALS["lang"]['limit'] = 'Ліміт';

$GLOBALS["lang"]['Limit'] = 'Ліміт';

$GLOBALS["lang"]['Limit the query to the first X items.'] = 'Визначте запит першими предметами X.';

$GLOBALS["lang"]['Limited to 100 rows.'] = 'Обмежено до 100 рядків.';

$GLOBALS["lang"]['line_amount'] = 'Лінія Amount';

$GLOBALS["lang"]['Line Amount'] = 'Лінія Amount';

$GLOBALS["lang"]['Line Graph'] = 'Графік роботи';

$GLOBALS["lang"]['line_number_a'] = 'Номер лінії А';

$GLOBALS["lang"]['Line Number A'] = 'Номер лінії А';

$GLOBALS["lang"]['line_number_b'] = 'Номер лінії B';

$GLOBALS["lang"]['Line Number B'] = 'Номер лінії B';

$GLOBALS["lang"]['line_text'] = 'Лінійний текст';

$GLOBALS["lang"]['Line Text'] = 'Лінійний текст';

$GLOBALS["lang"]['link'] = 'Посилання';

$GLOBALS["lang"]['Link'] = 'Посилання';

$GLOBALS["lang"]['Link (Advanced)'] = 'Посилання (Advanced)';

$GLOBALS["lang"]['Linked Files'] = 'Посилання';

$GLOBALS["lang"]['links'] = 'Посилання';

$GLOBALS["lang"]['Links'] = 'Посилання';

$GLOBALS["lang"]['Links this discovery to the associated cloud (if required). Links to <code>clouds.id</code>.'] = 'Посилання цього відкриття до пов\'язаної хмари (за необхідності). Посилання <code>clouds.id</code>й';

$GLOBALS["lang"]['Links to <code>discovery_scan_options.id</code>.'] = 'Посилання <code>discovery_scan_options.id</code>й';

$GLOBALS["lang"]['Links to <code>standards.id</code>'] = 'Посилання <code>standards.id</code>';

$GLOBALS["lang"]['Links to <standards_policies.id</code>'] = 'Посилання <standards_policies.id< code=""></standards_policies.id<>';

$GLOBALS["lang"]['Linux'] = 'Українська';

$GLOBALS["lang"]['List'] = 'Список';

$GLOBALS["lang"]['list_table_format'] = 'Формат таблиці';

$GLOBALS["lang"]['List Table Format'] = 'Формат таблиці';

$GLOBALS["lang"]['Lithuania'] = 'Українська';

$GLOBALS["lang"]['Load Balancing'] = 'Балансування навантаження';

$GLOBALS["lang"]['Local'] = 'Головна';

$GLOBALS["lang"]['Local Area Network'] = 'Місцева мережа';

$GLOBALS["lang"]['local_port'] = 'Місцевий порт';

$GLOBALS["lang"]['Local Port'] = 'Місцевий порт';

$GLOBALS["lang"]['Localhost'] = 'Пригоди';

$GLOBALS["lang"]['Localisation'] = 'Локалізація';

$GLOBALS["lang"]['Location'] = 'Місцезнаходження';

$GLOBALS["lang"]['Location A'] = 'Розташування';

$GLOBALS["lang"]['Location B'] = 'Місцезнаходження B';

$GLOBALS["lang"]['location_id'] = 'Ім\'я користувача';

$GLOBALS["lang"]['Location ID'] = 'Ім\'я користувача';

$GLOBALS["lang"]['location_id_a'] = 'Місцезнаходження ID A';

$GLOBALS["lang"]['Location ID A'] = 'Місцезнаходження ID A';

$GLOBALS["lang"]['location_id_b'] = 'Місцезнаходження ID B';

$GLOBALS["lang"]['Location ID B'] = 'Місцезнаходження ID B';

$GLOBALS["lang"]['location_latitude'] = 'Розташування';

$GLOBALS["lang"]['Location Latitude'] = 'Розташування';

$GLOBALS["lang"]['location_level'] = 'Рівень розташування';

$GLOBALS["lang"]['Location Level'] = 'Рівень розташування';

$GLOBALS["lang"]['location_longitude'] = 'Розташування довготи';

$GLOBALS["lang"]['Location Longitude'] = 'Розташування довготи';

$GLOBALS["lang"]['location_rack'] = 'Розташування стійки';

$GLOBALS["lang"]['Location Rack'] = 'Розташування стійки';

$GLOBALS["lang"]['location_rack_position'] = 'Розташування стійки';

$GLOBALS["lang"]['Location Rack Position'] = 'Розташування стійки';

$GLOBALS["lang"]['location_rack_size'] = 'Розташування стійки розмір';

$GLOBALS["lang"]['Location Rack Size'] = 'Розташування стійки розмір';

$GLOBALS["lang"]['location_room'] = 'Місцезнаходження';

$GLOBALS["lang"]['Location Room'] = 'Місцезнаходження';

$GLOBALS["lang"]['location_suite'] = 'Полулюкс';

$GLOBALS["lang"]['Location Suite'] = 'Полулюкс';

$GLOBALS["lang"]['locations'] = 'Розташування';

$GLOBALS["lang"]['Locations'] = 'Розташування';

$GLOBALS["lang"]['Locations in this'] = 'Місцезнаходження';

$GLOBALS["lang"]['log'] = 'Увійти';

$GLOBALS["lang"]['Log'] = 'Увійти';

$GLOBALS["lang"]['log_format'] = 'Формати';

$GLOBALS["lang"]['Log Format'] = 'Формати';

$GLOBALS["lang"]['log_path'] = 'Увійти';

$GLOBALS["lang"]['Log Path'] = 'Увійти';

$GLOBALS["lang"]['log_rotation'] = 'Революція журналу';

$GLOBALS["lang"]['Log Rotation'] = 'Революція журналу';

$GLOBALS["lang"]['log_status'] = 'Реєстрація';

$GLOBALS["lang"]['Log Status'] = 'Реєстрація';

$GLOBALS["lang"]['Logical Cores '] = 'Логічні ядра ';

$GLOBALS["lang"]['logical_count'] = 'Логічний граф';

$GLOBALS["lang"]['Logical Count'] = 'Логічний граф';

$GLOBALS["lang"]['Logout'] = 'Зареєструватися';

$GLOBALS["lang"]['Logs'] = 'Логін';

$GLOBALS["lang"]['longitude'] = 'Довгий';

$GLOBALS["lang"]['Longitude'] = 'Довгий';

$GLOBALS["lang"]['low'] = 'Низький';

$GLOBALS["lang"]['Low'] = 'Низький';

$GLOBALS["lang"]['Lower Case'] = 'Нижній чохол';

$GLOBALS["lang"]['Luxembourg'] = 'Люксембург';

$GLOBALS["lang"]['MAC Address'] = 'Адреса MAC';

$GLOBALS["lang"]['MAC Manufacturer'] = 'Мапа Продукція';

$GLOBALS["lang"]['mac'] = 'Мапа';

$GLOBALS["lang"]['Mac'] = 'Мапа';

$GLOBALS["lang"]['Mac Address'] = 'Адреса електронної пошти';

$GLOBALS["lang"]['MacOS'] = 'МакОС';

$GLOBALS["lang"]['Macao'] = 'Макао';

$GLOBALS["lang"]['Macedonia'] = 'Македонія';

$GLOBALS["lang"]['Madagascar'] = 'Малайзія';

$GLOBALS["lang"]['maintenance_expires'] = 'Обслуговування Закінчується';

$GLOBALS["lang"]['Maintenance Expires'] = 'Обслуговування Закінчується';

$GLOBALS["lang"]['Make My Default Dashboard'] = 'Зробіть свій за замовчуванням Dashboard';

$GLOBALS["lang"]['Make this install a Collector'] = 'Зробіть цю установку колектора';

$GLOBALS["lang"]['Malawi'] = 'Мали';

$GLOBALS["lang"]['Malaysia'] = 'Малайзія';

$GLOBALS["lang"]['Maldives'] = 'Мальдіви';

$GLOBALS["lang"]['Mali'] = 'Мали';

$GLOBALS["lang"]['Malta'] = 'Мальта';

$GLOBALS["lang"]['Manage'] = 'Мапа';

$GLOBALS["lang"]['Manage Licenses'] = 'Управління ліцензіями';

$GLOBALS["lang"]['Manage in NMIS'] = 'Управління NMIS';

$GLOBALS["lang"]['Managed'] = 'Навігація';

$GLOBALS["lang"]['managed_by'] = 'Керування';

$GLOBALS["lang"]['Managed By'] = 'Керування';

$GLOBALS["lang"]['Manual Input'] = 'Керівництво Вхід';

$GLOBALS["lang"]['Manually set by user, defaults to Production.'] = 'Ручний набір користувача, за замовчуванням для виробництва.';

$GLOBALS["lang"]['Manually set by user.'] = 'Ручний набір користувача.';

$GLOBALS["lang"]['manufacture_date'] = 'Дата виготовлення';

$GLOBALS["lang"]['Manufacture Date'] = 'Дата виготовлення';

$GLOBALS["lang"]['manufacturer'] = 'Продукція';

$GLOBALS["lang"]['Manufacturer'] = 'Продукція';

$GLOBALS["lang"]['manufacturer_code'] = 'Код товару';

$GLOBALS["lang"]['Manufacturer Code'] = 'Код товару';

$GLOBALS["lang"]['Map'] = 'Карта сайту';

$GLOBALS["lang"]['maps'] = 'Карти';

$GLOBALS["lang"]['Maps'] = 'Карти';

$GLOBALS["lang"]['March'] = 'Березень';

$GLOBALS["lang"]['Marshall Islands'] = 'Маршаллові острови';

$GLOBALS["lang"]['Martinique'] = 'Мартініка';

$GLOBALS["lang"]['mask'] = 'Маска';

$GLOBALS["lang"]['Mask'] = 'Маска';

$GLOBALS["lang"]['Match'] = 'Про нас';

$GLOBALS["lang"]['match_options'] = 'Параметри матчу';

$GLOBALS["lang"]['Match Options'] = 'Параметри матчу';

$GLOBALS["lang"]['match_string'] = 'Стрінг матчу';

$GLOBALS["lang"]['Match String'] = 'Стрінг матчу';

$GLOBALS["lang"]['Matching Attribute'] = 'Матч Атрибут';

$GLOBALS["lang"]['maturity_level'] = 'Рівень насиченості';

$GLOBALS["lang"]['Maturity Level'] = 'Рівень насиченості';

$GLOBALS["lang"]['maturity_score'] = 'Оцінка насиченості';

$GLOBALS["lang"]['Maturity Score'] = 'Оцінка насиченості';

$GLOBALS["lang"]['Mauritania'] = 'Мавританія';

$GLOBALS["lang"]['Mauritius'] = 'Маврикій';

$GLOBALS["lang"]['max_file_size'] = 'Макс розмір файлу';

$GLOBALS["lang"]['Max File Size'] = 'Макс розмір файлу';

$GLOBALS["lang"]['Max Length'] = 'Максимальна довжина';

$GLOBALS["lang"]['max_size'] = 'Макс. розмір';

$GLOBALS["lang"]['Max Size'] = 'Макс. розмір';

$GLOBALS["lang"]['May'] = 'Травень';

$GLOBALS["lang"]['Mayotte'] = 'Мінуси';

$GLOBALS["lang"]['Measures the likelihood of the vulnerability being attacked, and is based on the current state of exploit techniques, exploit code availability, or active, “in-the-wild” exploitation.'] = 'Виміряє ймовірність нападу вразливостей, і ґрунтується на поточному стані техніки експлуатації, доступності кодів, або активній, «в-в-в-в-в-в-в-в-в-в-в-в-в-в-в-в-в-в-в-в-в-в-в-в-в-в-в-в-в-в-в-в-в-в-в-в-в-в-в.';

$GLOBALS["lang"]['medium'] = 'Середній';

$GLOBALS["lang"]['Medium'] = 'Середній';

$GLOBALS["lang"]['members'] = 'Учасники';

$GLOBALS["lang"]['Members'] = 'Учасники';

$GLOBALS["lang"]['memory'] = 'Пам\'яті';

$GLOBALS["lang"]['Memory'] = 'Пам\'яті';

$GLOBALS["lang"]['memory_count'] = 'Кількість пам\'яті';

$GLOBALS["lang"]['Memory Count'] = 'Кількість пам\'яті';

$GLOBALS["lang"]['memory_slot_count'] = 'Слот пам\'яті';

$GLOBALS["lang"]['Memory Slot Count'] = 'Слот пам\'яті';

$GLOBALS["lang"]['menu_category'] = 'Категорія меню';

$GLOBALS["lang"]['Menu Category'] = 'Категорія меню';

$GLOBALS["lang"]['menu_display'] = 'Меню Дисплей';

$GLOBALS["lang"]['Menu Display'] = 'Меню Дисплей';

$GLOBALS["lang"]['message'] = 'Новини';

$GLOBALS["lang"]['Message'] = 'Новини';

$GLOBALS["lang"]['meta_last_changed'] = 'Мета Останні зміни';

$GLOBALS["lang"]['Meta Last Changed'] = 'Мета Останні зміни';

$GLOBALS["lang"]['metric'] = 'Матриця';

$GLOBALS["lang"]['Metric'] = 'Матриця';

$GLOBALS["lang"]['Metropolitan Area Network'] = 'Митрополитна мережа';

$GLOBALS["lang"]['Mexico'] = 'Українська';

$GLOBALS["lang"]['Micronesia'] = 'Мікронезія';

$GLOBALS["lang"]['Microsoft Azure Fields'] = 'Microsoft Azure поля';

$GLOBALS["lang"]['microtime'] = 'Мікрочас';

$GLOBALS["lang"]['Microtime'] = 'Мікрочас';

$GLOBALS["lang"]['minute'] = 'Мінуси';

$GLOBALS["lang"]['Minute'] = 'Мінуси';

$GLOBALS["lang"]['Minutes Since last Audit are Greater than'] = 'Протоколи з останнього аудиту більші, ніж';

$GLOBALS["lang"]['model'] = 'Модель';

$GLOBALS["lang"]['Model'] = 'Модель';

$GLOBALS["lang"]['model_family'] = 'Сім\'я моделей';

$GLOBALS["lang"]['Model Family'] = 'Сім\'я моделей';

$GLOBALS["lang"]['module'] = 'Модуль';

$GLOBALS["lang"]['Module'] = 'Модуль';

$GLOBALS["lang"]['module_index'] = 'Індекс модуля';

$GLOBALS["lang"]['Module Index'] = 'Індекс модуля';

$GLOBALS["lang"]['Modules'] = 'Модуль';

$GLOBALS["lang"]['Moldova'] = 'Молдова';

$GLOBALS["lang"]['Monaco'] = 'Монако';

$GLOBALS["lang"]['Monday'] = 'Понеділок';

$GLOBALS["lang"]['Mongolia'] = 'Монголія';

$GLOBALS["lang"]['monitor'] = 'Моніторинг';

$GLOBALS["lang"]['Monitor'] = 'Моніторинг';

$GLOBALS["lang"]['Montenegro'] = 'Українська';

$GLOBALS["lang"]['month'] = 'Місяць';

$GLOBALS["lang"]['Month'] = 'Місяць';

$GLOBALS["lang"]['Montserrat'] = 'Монсеррат';

$GLOBALS["lang"]['Morocco'] = 'Українська';

$GLOBALS["lang"]['motherboard'] = 'Матуся';

$GLOBALS["lang"]['Motherboard'] = 'Матуся';

$GLOBALS["lang"]['mount_point'] = 'Точка зору';

$GLOBALS["lang"]['Mount Point'] = 'Точка зору';

$GLOBALS["lang"]['mount_type'] = 'Тип кріплення';

$GLOBALS["lang"]['Mount Type'] = 'Тип кріплення';

$GLOBALS["lang"]['Mozambique'] = 'Мозамбік';

$GLOBALS["lang"]['Must Respond to Ping'] = 'Потрібна відповідь на Ping';

$GLOBALS["lang"]['Myanmar'] = 'Мар';

$GLOBALS["lang"]['N+1'] = 'Н+1';

$GLOBALS["lang"]['N+M'] = 'Н+М';

$GLOBALS["lang"]['N-to-1'] = 'Н-до-1';

$GLOBALS["lang"]['N-to-N'] = 'N-до-N';

$GLOBALS["lang"]['NMIS Business Service'] = 'Бізнес-служба НМІС';

$GLOBALS["lang"]['NMIS Customer'] = 'Замовник НМІС';

$GLOBALS["lang"]['NMIS Device Options'] = 'Параметри пристрою NMIS';

$GLOBALS["lang"]['NMIS Device Selection'] = 'Вибір пристрою NMIS';

$GLOBALS["lang"]['NMIS Field Name'] = 'Назва поля NMIS';

$GLOBALS["lang"]['NMIS Field Type'] = 'Тип поля NMIS';

$GLOBALS["lang"]['NMIS Group'] = 'Група NMIS';

$GLOBALS["lang"]['NMIS Poller'] = 'NMIS Поллер';

$GLOBALS["lang"]['NMIS Role'] = 'НМІС роль';

$GLOBALS["lang"]['NOTE - You can prevent plain text credentials being displayed below by setting the configuration item for <code>decrypt_credentials</code> to <code>n</code>.'] = 'ПРИМІТКА - Ви можете запобігти простим текстовим обліковим записам, що відображаються нижче, встановивши пункт конфігурації для <code>decrypt_credentials</code> до <code>n</code>й';

$GLOBALS["lang"]['name'] = 'Ім\'я';

$GLOBALS["lang"]['Name'] = 'Ім\'я';

$GLOBALS["lang"]['Namibia'] = 'Намібія';

$GLOBALS["lang"]['Nauru'] = 'Науру';

$GLOBALS["lang"]['Nepal'] = 'Непал';

$GLOBALS["lang"]['net_index'] = 'Індекс Net';

$GLOBALS["lang"]['Net Index'] = 'Індекс Net';

$GLOBALS["lang"]['Netherlands Antilles'] = 'Нідерландські Антилі';

$GLOBALS["lang"]['Netherlands the'] = 'Нідерланди';

$GLOBALS["lang"]['netmask'] = 'Проксимус';

$GLOBALS["lang"]['Netmask'] = 'Проксимус';

$GLOBALS["lang"]['netstat'] = 'Чистий';

$GLOBALS["lang"]['Netstat'] = 'Чистий';

$GLOBALS["lang"]['Netstat Policies'] = 'Політика конфіденційності';

$GLOBALS["lang"]['Network'] = 'Мережа';

$GLOBALS["lang"]['network_address'] = 'Адреса мережі';

$GLOBALS["lang"]['Network Address'] = 'Адреса мережі';

$GLOBALS["lang"]['network_domain'] = 'Статус на сервери';

$GLOBALS["lang"]['Network Domain'] = 'Статус на сервери';

$GLOBALS["lang"]['Network Types'] = 'Типи мережі';

$GLOBALS["lang"]['networks'] = 'Мережі';

$GLOBALS["lang"]['Networks'] = 'Мережі';

$GLOBALS["lang"]['Networks Generated By'] = 'Мережі Generated By';

$GLOBALS["lang"]['Networks using a CIDR Mask of'] = 'Мережі з використанням маски CIDR';

$GLOBALS["lang"]['New Building Name'] = 'Нова назва будівлі';

$GLOBALS["lang"]['New Caledonia'] = 'Нова Каледонія';

$GLOBALS["lang"]['New Floor Name'] = 'Новий поверх';

$GLOBALS["lang"]['New Room Name'] = 'Новий номер';

$GLOBALS["lang"]['New Row Name'] = 'Новий Row Name';

$GLOBALS["lang"]['New Zealand'] = 'Нова Зеландія';

$GLOBALS["lang"]['News'] = 'Новини';

$GLOBALS["lang"]['next_hop'] = 'Далі Хоп';

$GLOBALS["lang"]['Next Hop'] = 'Далі Хоп';

$GLOBALS["lang"]['next_run'] = 'Пробіг';

$GLOBALS["lang"]['Next Run'] = 'Пробіг';

$GLOBALS["lang"]['Nicaragua'] = 'Микита';

$GLOBALS["lang"]['Niger'] = 'Малкa';

$GLOBALS["lang"]['Nigeria'] = 'Нігерія';

$GLOBALS["lang"]['Niue'] = 'Ніу';

$GLOBALS["lang"]['nmap'] = 'Мапа';

$GLOBALS["lang"]['Nmap'] = 'Мапа';

$GLOBALS["lang"]['Nmap Port Scanning Responses'] = 'Відповіді про сканування портів Nmap';

$GLOBALS["lang"]['nmap_tcp_ports'] = 'Nmap Tcp Порти';

$GLOBALS["lang"]['Nmap Tcp Ports'] = 'Nmap Tcp Порти';

$GLOBALS["lang"]['nmap_udp_ports'] = 'Порти Udp';

$GLOBALS["lang"]['Nmap Udp Ports'] = 'Порти Udp';

$GLOBALS["lang"]['nmis_business_service'] = 'Бізнес-послуги Nmis';

$GLOBALS["lang"]['Nmis Business Service'] = 'Бізнес-послуги Nmis';

$GLOBALS["lang"]['nmis_customer'] = 'Nmis Замовник';

$GLOBALS["lang"]['Nmis Customer'] = 'Nmis Замовник';

$GLOBALS["lang"]['nmis_group'] = 'Група Nmis';

$GLOBALS["lang"]['Nmis Group'] = 'Група Nmis';

$GLOBALS["lang"]['nmis_manage'] = 'Nmis Управління';

$GLOBALS["lang"]['Nmis Manage'] = 'Nmis Управління';

$GLOBALS["lang"]['nmis_name'] = 'Ім\'я користувача';

$GLOBALS["lang"]['Nmis Name'] = 'Ім\'я користувача';

$GLOBALS["lang"]['nmis_notes'] = 'Nmis Примітки';

$GLOBALS["lang"]['Nmis Notes'] = 'Nmis Примітки';

$GLOBALS["lang"]['nmis_poller'] = 'Nmis Поллер';

$GLOBALS["lang"]['Nmis Poller'] = 'Nmis Поллер';

$GLOBALS["lang"]['nmis_poller_uuid'] = 'Nmis Поллер Уїд';

$GLOBALS["lang"]['Nmis Poller Uuid'] = 'Nmis Поллер Уїд';

$GLOBALS["lang"]['nmis_role'] = 'Nmis роль';

$GLOBALS["lang"]['Nmis Role'] = 'Nmis роль';

$GLOBALS["lang"]['No'] = 'Немає';

$GLOBALS["lang"]['No Devices Returned'] = 'Немає пристроїв, які повертаються';

$GLOBALS["lang"]['No Google Maps API Key present, you will not be able to display the map.'] = 'English Русский Українська Ключовий презент, ви не зможете відобразити карту.';

$GLOBALS["lang"]['No License for Professional or Enterprise'] = 'Немає ліцензії для професійного або підприємства';

$GLOBALS["lang"]['No Results'] = 'Немає результатів';

$GLOBALS["lang"]['No data in License Key'] = 'Немає даних у ліцензійному ключі';

$GLOBALS["lang"]['No database upgrade required at this time.'] = 'Не потрібно оновлення бази даних в цей час.';

$GLOBALS["lang"]['Node'] = 'Нода';

$GLOBALS["lang"]['None'] = 'Ні';

$GLOBALS["lang"]['Norfolk Island'] = 'Острів Норфолк';

$GLOBALS["lang"]['Normal'] = 'Нормативно';

$GLOBALS["lang"]['Northern Mariana Islands'] = 'Північні Маріанські острови';

$GLOBALS["lang"]['Norway'] = 'Норвегія';

$GLOBALS["lang"]['Not Applicable'] = 'Не застосовувати';

$GLOBALS["lang"]['Not Checked'] = 'Не перевірити';

$GLOBALS["lang"]['Not Equals'] = 'Нема рівних';

$GLOBALS["lang"]['Not In'] = 'Не в';

$GLOBALS["lang"]['Not Like'] = 'Немовля';

$GLOBALS["lang"]['Not Set'] = 'Не встановити';

$GLOBALS["lang"]['Not normally used. If set, this requires the device to have an open port (as per Scan Options) to be considered responding. A MAC address, arp response or ping response is not considered sufficient to be considered responding. Useful if a router or firewall between the Open-AudIT server and target IP is responding to port scans on the IPs behalf.'] = 'Не зазвичай використовується. Якщо встановити, це вимагає пристрою, щоб мати відкритий порт (в залежності від параметрів сканування), щоб розглянути відповідь. A MAC адреса, відповідь arp або відповідь ping не вважається достатнім для того, щоб розглянути відповідь. Корисно, якщо маршрутизатор або брандмауер між сервером Open-AudIT і цільовим IP відповідає на сканування портів від імені IPs.';

$GLOBALS["lang"]['Note'] = 'Зареєструватися';

$GLOBALS["lang"]['Note - Selecting a parent will automatically provide access to its children (although it wont be shown here).'] = 'Примітка - Вибір батька автоматично надасть доступ до своїх дітей (хоча вона не буде показана тут).';

$GLOBALS["lang"]['Notes'] = 'Нотатки';

$GLOBALS["lang"]['notes'] = 'Нотатки';

$GLOBALS["lang"]['Notice'] = 'Про нас';

$GLOBALS["lang"]['notin'] = 'Ноти';

$GLOBALS["lang"]['Notin'] = 'Ноти';

$GLOBALS["lang"]['November'] = 'Листопад';

$GLOBALS["lang"]['nvd_json'] = 'Нвд Джесон';

$GLOBALS["lang"]['Nvd Json'] = 'Нвд Джесон';

$GLOBALS["lang"]['ORDER BY'] = 'ЗАМОВИТИ';

$GLOBALS["lang"]['OS'] = 'ОС';

$GLOBALS["lang"]['OS Families'] = 'Сім\'ї OS';

$GLOBALS["lang"]['OS Family'] = 'Сім\'я OS';

$GLOBALS["lang"]['OS Group'] = 'Група OS';

$GLOBALS["lang"]['oae_manage'] = 'Oae Управління';

$GLOBALS["lang"]['Oae Manage'] = 'Oae Управління';

$GLOBALS["lang"]['object_ident'] = 'Об\'єкт Ident';

$GLOBALS["lang"]['Object Ident'] = 'Об\'єкт Ident';

$GLOBALS["lang"]['October'] = 'Жовтень';

$GLOBALS["lang"]['Oman'] = 'Оман';

$GLOBALS["lang"]['omk_uuid'] = 'Омк Уїд';

$GLOBALS["lang"]['Omk Uuid'] = 'Омк Уїд';

$GLOBALS["lang"]['On'] = 'Про нас';

$GLOBALS["lang"]['One of <code>3x2</code>, <code>4x2</code>, <code>4x3</code> or <code>4x4</code>.'] = 'Один з <code>3x2</code>й <code>4x2</code>й <code>4x3</code> або <code>4x4</code>й';

$GLOBALS["lang"]['One of Campus Area Network, Cloud Network, Enterprise Private Network, Home Area Network, Local Area Network, Metropolitan Area Network, Passive Optical Local Area Network, Personal Area Network, Storage-Area Network, System-Area Network, Virtual Private Network, Wide Area Network, Wireless Local Area Network.'] = 'Мережа Campus Area, Cloud Network, Private Network, Enterprise Private Network, Home Area Network, Local Area Network, Мережа митрополитів, Пасивна оптична локальна мережа, Особиста мережа, Мережа зберігання речей, Мережа системних мереж, Віртуальна приватна мережа, мережа широкої площі, бездротова локальна мережа.';

$GLOBALS["lang"]['One of Development, Disaster Recovery, Evaluation, Pre-Production, Production, Testing, Training, User Acceptance Testing'] = 'One of Development, Відновлення даних, оцінка, передпродуктивність, виробництво, тестування, навчання, тестування';

$GLOBALS["lang"]['One of allocated, delegated, planning, reserved, unallocated, unknown, unmanaged. Defaults to allocated.'] = 'Один з виділених, делегованих, планування, зарезервовані, нерозташовані, невідомі, некеровані. За замовчуванням виділено.';

$GLOBALS["lang"]['One of either <code>active directory</code> or <code>openldap</code>.'] = 'Один з <code>active directory</code> або <code>openldap</code>й';

$GLOBALS["lang"]['One of: antivirus, backup, firewall, approved, banned, ignored or other.'] = 'Один з: антивірус, резервне копіювання, брандмауер, схвалений, заборонений, ігнорується або інші.';

$GLOBALS["lang"]['Online Documentation'] = 'Онлайн Документація';

$GLOBALS["lang"]['Open-AudIT'] = 'Відкритий';

$GLOBALS["lang"]['Open-AudIT Community'] = 'Open-AudIT Громада';

$GLOBALS["lang"]['Open-AudIT Device Selection'] = 'Вибір пристрою Open-AudIT';

$GLOBALS["lang"]['Open-AudIT Enterprise'] = 'Open-AudIT Підприємство';

$GLOBALS["lang"]['Open-AudIT Enterprise. High-scale flexible discovery and audit solution for large networks. All the features of Professional plus: Baselines, File Auditing, Cloud Discovery, Rack Management, Configurable Role Based Access Control including Active Directory and LDAP.'] = 'Open-AudIT Enterprise. Високомасштабне гнучке відкриття та аудиторське рішення для великих мереж. Всі функції Професійні плюс: базиліки, Аудит файлів, Cloud Discovery, Rack Management, Configurable Роль на основі контролю доступу, включаючи Active Directory та LDAP.';

$GLOBALS["lang"]['Open-AudIT Field Name'] = 'Open-AudIT Назва поля';

$GLOBALS["lang"]['Open-AudIT Licenses'] = 'Статус на сервери';

$GLOBALS["lang"]['Open-AudIT Options'] = 'Параметри Open-AudIT';

$GLOBALS["lang"]['Open-AudIT Professional'] = 'Відкритий AudIT Professional';

$GLOBALS["lang"]['Open-AudIT Professional. The world\\'] = 'Професіонал Open-AudIT Світ \';

$GLOBALS["lang"]['Open-AudIT and Nmap'] = 'Open-AudIT та Nmap';

$GLOBALS["lang"]['OpenScap is Installed'] = 'OpenScap встановлюється';

$GLOBALS["lang"]['openldap_user_dn'] = 'Openldap Користувач Dn';

$GLOBALS["lang"]['Openldap User Dn'] = 'Openldap Користувач Dn';

$GLOBALS["lang"]['openldap_user_membership_attribute'] = 'Openldap Атрибут користувачів';

$GLOBALS["lang"]['Openldap User Membership Attribute'] = 'Openldap Атрибут користувачів';

$GLOBALS["lang"]['open|filtered'] = 'Головна';

$GLOBALS["lang"]['Open|filtered'] = 'Головна';

$GLOBALS["lang"]['Operating System'] = 'Операційна система';

$GLOBALS["lang"]['Operating System Family Contains'] = 'Робоча система Family Contains';

$GLOBALS["lang"]['Operating Systems'] = 'Операційні системи';

$GLOBALS["lang"]['optical'] = 'Оптичний';

$GLOBALS["lang"]['Optical'] = 'Оптичний';

$GLOBALS["lang"]['Optimized'] = 'Оптимізований';

$GLOBALS["lang"]['Optional version as audited by Open-AudIT. Use the percent sign % as a wildcard.'] = 'Додаткова версія як аудиторська компанія Open-AudIT. Використовуйте знак відсотка % як дикої картки.';

$GLOBALS["lang"]['options'] = 'Варіанти';

$GLOBALS["lang"]['Options'] = 'Варіанти';

$GLOBALS["lang"]['Or select from the below fields.'] = 'Або виберіть з поля нижче.';

$GLOBALS["lang"]['org_descendants'] = 'Org Відчайники';

$GLOBALS["lang"]['Org Descendants'] = 'Org Відчайники';

$GLOBALS["lang"]['org_id'] = 'Org ID';

$GLOBALS["lang"]['Org ID'] = 'Org ID';

$GLOBALS["lang"]['Organisation'] = 'Організація';

$GLOBALS["lang"]['organisation'] = 'Організація';

$GLOBALS["lang"]['Organisation Descendants'] = 'Организационно-правовая форма';

$GLOBALS["lang"]['Organisations'] = 'Організація';

$GLOBALS["lang"]['orgs'] = 'Органи';

$GLOBALS["lang"]['Orgs'] = 'Органи';

$GLOBALS["lang"]['Orgs Name'] = 'Orgs Ім\'я';

$GLOBALS["lang"]['orientation'] = 'Орієнтація';

$GLOBALS["lang"]['Orientation'] = 'Орієнтація';

$GLOBALS["lang"]['os'] = 'Осокорки';

$GLOBALS["lang"]['Os'] = 'Осокорки';

$GLOBALS["lang"]['os_arch'] = 'Архіви';

$GLOBALS["lang"]['Os Arch'] = 'Архіви';

$GLOBALS["lang"]['os_bit'] = 'Ос Бі';

$GLOBALS["lang"]['Os Bit'] = 'Ос Бі';

$GLOBALS["lang"]['os_cpe'] = 'Ос Кпе';

$GLOBALS["lang"]['Os Cpe'] = 'Ос Кпе';

$GLOBALS["lang"]['os_display_version'] = 'Версія дисплея';

$GLOBALS["lang"]['Os Display Version'] = 'Версія дисплея';

$GLOBALS["lang"]['os_family'] = 'Сім\'я Ос';

$GLOBALS["lang"]['Os Family'] = 'Сім\'я Ос';

$GLOBALS["lang"]['os_group'] = 'Ос Груп';

$GLOBALS["lang"]['Os Group'] = 'Ос Груп';

$GLOBALS["lang"]['os_installation_date'] = 'Дата установки';

$GLOBALS["lang"]['Os Installation Date'] = 'Дата установки';

$GLOBALS["lang"]['os_licence_expiry'] = 'Офіціантність';

$GLOBALS["lang"]['Os Licence Expiry'] = 'Офіціантність';

$GLOBALS["lang"]['os_license'] = 'Ліцензії';

$GLOBALS["lang"]['Os License'] = 'Ліцензії';

$GLOBALS["lang"]['os_license_code'] = 'English Русский Українська';

$GLOBALS["lang"]['Os License Code'] = 'English Русский Українська';

$GLOBALS["lang"]['os_license_mode'] = 'Статус на сервери';

$GLOBALS["lang"]['Os License Mode'] = 'Статус на сервери';

$GLOBALS["lang"]['os_license_type'] = 'Тип ліцензії Os';

$GLOBALS["lang"]['Os License Type'] = 'Тип ліцензії Os';

$GLOBALS["lang"]['os_name'] = 'Ім\'я';

$GLOBALS["lang"]['Os Name'] = 'Ім\'я';

$GLOBALS["lang"]['os_version'] = 'Версія';

$GLOBALS["lang"]['Os Version'] = 'Версія';

$GLOBALS["lang"]['Other'] = 'Інше';

$GLOBALS["lang"]['Others'] = 'Інші';

$GLOBALS["lang"]['Our timeout for a SSH response'] = 'Наш час для відповіді SSH';

$GLOBALS["lang"]['Our timeout for a WMI response'] = 'Ми можемо самі зателефонувати одержувачу!';

$GLOBALS["lang"]['Our timeout for an SNMP response'] = 'Наш час для відповіді SNMP';

$GLOBALS["lang"]['Our timeout for an audit script response'] = 'Наш час для відповіді на сценарії аудиту';

$GLOBALS["lang"]['output'] = 'Вихідний';

$GLOBALS["lang"]['Output'] = 'Вихідний';

$GLOBALS["lang"]['outputs'] = 'Вихідні';

$GLOBALS["lang"]['Outputs'] = 'Вихідні';

$GLOBALS["lang"]['Overall severity score (0–10).'] = 'Загальний показник тяжкості (0–10).';

$GLOBALS["lang"]['overwrite'] = 'Зареєструватися';

$GLOBALS["lang"]['Overwrite'] = 'Зареєструватися';

$GLOBALS["lang"]['owner'] = 'Власники';

$GLOBALS["lang"]['Owner'] = 'Власники';

$GLOBALS["lang"]['PHP'] = 'Українська';

$GLOBALS["lang"]['POD'] = 'ПОД';

$GLOBALS["lang"]['Package'] = 'Пакети';

$GLOBALS["lang"]['packages'] = 'Пакети';

$GLOBALS["lang"]['Packages'] = 'Пакети';

$GLOBALS["lang"]['pagefile'] = 'Веб-сайт';

$GLOBALS["lang"]['Pagefile'] = 'Веб-сайт';

$GLOBALS["lang"]['Pakistan'] = 'Пакистан';

$GLOBALS["lang"]['Palau'] = 'Пау';

$GLOBALS["lang"]['Palestinian Territory'] = 'Палестинська територія';

$GLOBALS["lang"]['Panama'] = 'Пані';

$GLOBALS["lang"]['Papua New Guinea'] = 'Папуа Нова Гвінея';

$GLOBALS["lang"]['Paraguay'] = 'Парагвай';

$GLOBALS["lang"]['Paranoid'] = 'Параніда';

$GLOBALS["lang"]['Parent'] = 'Батьки';

$GLOBALS["lang"]['parent_id'] = 'Ім\'я користувача';

$GLOBALS["lang"]['Parent ID'] = 'Ім\'я користувача';

$GLOBALS["lang"]['parent_name'] = 'Ім\'я користувача';

$GLOBALS["lang"]['Parent Name'] = 'Ім\'я користувача';

$GLOBALS["lang"]['part_number'] = 'Номер деталі';

$GLOBALS["lang"]['Part Number'] = 'Номер деталі';

$GLOBALS["lang"]['part_of_domain'] = 'Частина домену';

$GLOBALS["lang"]['Part Of Domain'] = 'Частина домену';

$GLOBALS["lang"]['Partition'] = 'Почати';

$GLOBALS["lang"]['partition_count'] = 'Кількість місць';

$GLOBALS["lang"]['Partition Count'] = 'Кількість місць';

$GLOBALS["lang"]['partition_disk_index'] = 'Індекс дисертації';

$GLOBALS["lang"]['Partition Disk Index'] = 'Індекс дисертації';

$GLOBALS["lang"]['Pass'] = 'Увійти';

$GLOBALS["lang"]['Passed'] = 'Продано';

$GLOBALS["lang"]['Passive Optical Local Area Network'] = 'Пасивна оптична локальна мережа';

$GLOBALS["lang"]['Password'] = 'Логін';

$GLOBALS["lang"]['password'] = 'Логін';

$GLOBALS["lang"]['password_changeable'] = 'Зміна пароля';

$GLOBALS["lang"]['Password Changeable'] = 'Зміна пароля';

$GLOBALS["lang"]['password_disabled'] = 'Вимкнення пароля';

$GLOBALS["lang"]['Password Disabled'] = 'Вимкнення пароля';

$GLOBALS["lang"]['password_expires'] = 'Статус на сервери';

$GLOBALS["lang"]['Password Expires'] = 'Статус на сервери';

$GLOBALS["lang"]['password_last_changed'] = 'Останні зміни пароля';

$GLOBALS["lang"]['Password Last Changed'] = 'Останні зміни пароля';

$GLOBALS["lang"]['password_required'] = 'Обов\'язковий пароль';

$GLOBALS["lang"]['Password Required'] = 'Обов\'язковий пароль';

$GLOBALS["lang"]['patch_panel'] = 'Патч панелі';

$GLOBALS["lang"]['Patch Panel'] = 'Патч панелі';

$GLOBALS["lang"]['patch_panel_port'] = 'Патч Панель Порт';

$GLOBALS["lang"]['Patch Panel Port'] = 'Патч Панель Порт';

$GLOBALS["lang"]['path'] = 'Патент';

$GLOBALS["lang"]['Path'] = 'Патент';

$GLOBALS["lang"]['Performance'] = 'Продуктивність';

$GLOBALS["lang"]['Performed'] = 'Виконувати';

$GLOBALS["lang"]['permission'] = 'Проживання';

$GLOBALS["lang"]['Permission'] = 'Проживання';

$GLOBALS["lang"]['permissions'] = 'Дозвіли';

$GLOBALS["lang"]['Permissions'] = 'Дозвіли';

$GLOBALS["lang"]['Personal Area Network'] = 'Особистий кабінет мережі';

$GLOBALS["lang"]['Peru'] = 'пердят';

$GLOBALS["lang"]['Philippines'] = 'Філіппіни';

$GLOBALS["lang"]['phone'] = 'Зареєструватися';

$GLOBALS["lang"]['Phone'] = 'Зареєструватися';

$GLOBALS["lang"]['Physical CPUs'] = 'Фізичні процесори';

$GLOBALS["lang"]['physical_count'] = 'Фізичний облік';

$GLOBALS["lang"]['Physical Count'] = 'Фізичний облік';

$GLOBALS["lang"]['physical_depth'] = 'Фізична глибина';

$GLOBALS["lang"]['Physical Depth'] = 'Фізична глибина';

$GLOBALS["lang"]['physical_height'] = 'Фізична висота';

$GLOBALS["lang"]['Physical Height'] = 'Фізична висота';

$GLOBALS["lang"]['physical_width'] = 'Фізична ширина';

$GLOBALS["lang"]['Physical Width'] = 'Фізична ширина';

$GLOBALS["lang"]['picture'] = 'Фото';

$GLOBALS["lang"]['Picture'] = 'Фото';

$GLOBALS["lang"]['pid'] = 'Плетені';

$GLOBALS["lang"]['Pid'] = 'Плетені';

$GLOBALS["lang"]['Pie Chart'] = 'Пиріг діаграми';

$GLOBALS["lang"]['ping'] = 'Пінг';

$GLOBALS["lang"]['Ping'] = 'Пінг';

$GLOBALS["lang"]['Pitcairn Islands'] = 'Питкернські острови';

$GLOBALS["lang"]['placement'] = 'Місце';

$GLOBALS["lang"]['Placement'] = 'Місце';

$GLOBALS["lang"]['Please have an Open-AudIT administrator logon and upgrade the database.'] = 'Будь ласка, отримуйте логотип адміністратора Open-AudIT та отримуйте оновлення бази даних.';

$GLOBALS["lang"]['Please note that the select box will override the text input box.'] = 'Будь ласка, зауважте, що вибрана коробка перенаправить текстове поле введення.';

$GLOBALS["lang"]['Please set using'] = 'Будь ласка, встановіть';

$GLOBALS["lang"]['pod'] = 'Підсумок';

$GLOBALS["lang"]['Pod'] = 'Підсумок';

$GLOBALS["lang"]['Poland'] = 'Польща';

$GLOBALS["lang"]['Policies'] = 'Політика';

$GLOBALS["lang"]['Policies have exceptions.'] = 'Винятоки поліцій мають.';

$GLOBALS["lang"]['policy'] = 'Новини';

$GLOBALS["lang"]['Policy'] = 'Новини';

$GLOBALS["lang"]['policy_id'] = 'Код політики';

$GLOBALS["lang"]['Policy ID'] = 'Код політики';

$GLOBALS["lang"]['Policy Result'] = 'Результатів пошуку';

$GLOBALS["lang"]['Policy Results'] = 'Результати політики';

$GLOBALS["lang"]['Polite'] = 'Політ';

$GLOBALS["lang"]['Populated by audit.'] = 'Аудит.';

$GLOBALS["lang"]['Populated by discovery and audit.'] = 'Поповнений відкриттям та аудитом.';

$GLOBALS["lang"]['Populated dynamically.'] = 'Динаміка поширення.';

$GLOBALS["lang"]['Populated from DNS.'] = 'Поселившись з DNS.';

$GLOBALS["lang"]['Populated from SNMP discovery.'] = 'СНМП-відкриття.';

$GLOBALS["lang"]['Populated from device audits.'] = 'Поповнені з пристроїв аудиту.';

$GLOBALS["lang"]['Populated from hostname.'] = 'Поповнений з хоста.';

$GLOBALS["lang"]['Populated from machine-id on Linux.'] = 'Поповнений від машинної допомоги на Linux.';

$GLOBALS["lang"]['Populated from the IP for the default route or the IP detected in discovery.'] = 'Поповнений з IP для маршруту за замовчуванням або IP виявлений у відкритті.';

$GLOBALS["lang"]['Populated from the hostname command.'] = 'Поповнений з команди хоста.';

$GLOBALS["lang"]['Populated with additional data from the external system, in a JSON representation.'] = 'Поповнені додатковими даними з зовнішньої системи, в представництвах JSON.';

$GLOBALS["lang"]['port'] = 'Портфоліо';

$GLOBALS["lang"]['Port'] = 'Портфоліо';

$GLOBALS["lang"]['port_name'] = 'Назва порту';

$GLOBALS["lang"]['Port Name'] = 'Назва порту';

$GLOBALS["lang"]['port_number'] = 'Номер порту';

$GLOBALS["lang"]['Port Number'] = 'Номер порту';

$GLOBALS["lang"]['ports_in_order'] = 'Порти на замовлення';

$GLOBALS["lang"]['Ports In Order'] = 'Порти на замовлення';

$GLOBALS["lang"]['ports_stop_after'] = 'Порти Стоп після';

$GLOBALS["lang"]['Ports Stop After'] = 'Порти Стоп після';

$GLOBALS["lang"]['Portugal, Portuguese Republic'] = 'Португалія, Португальська Республіка';

$GLOBALS["lang"]['position'] = 'Головна';

$GLOBALS["lang"]['Position'] = 'Головна';

$GLOBALS["lang"]['postcode'] = 'Поштовий індекс';

$GLOBALS["lang"]['Postcode'] = 'Поштовий індекс';

$GLOBALS["lang"]['power_circuit'] = 'Блок живлення';

$GLOBALS["lang"]['Power Circuit'] = 'Блок живлення';

$GLOBALS["lang"]['power_sockets'] = 'Силові розетки';

$GLOBALS["lang"]['Power Sockets'] = 'Силові розетки';

$GLOBALS["lang"]['Predictable'] = 'Випробувано';

$GLOBALS["lang"]['Preferences'] = 'Переваги';

$GLOBALS["lang"]['Prerequisites'] = 'Вимоги';

$GLOBALS["lang"]['Prerequisites and Tests'] = 'Передумови та тести';

$GLOBALS["lang"]['present'] = 'Головна';

$GLOBALS["lang"]['Present'] = 'Головна';

$GLOBALS["lang"]['previous_value'] = 'Попередня вартість';

$GLOBALS["lang"]['Previous Value'] = 'Попередня вартість';

$GLOBALS["lang"]['primary'] = 'Головна';

$GLOBALS["lang"]['Primary'] = 'Головна';

$GLOBALS["lang"]['Primary Key'] = 'Первинний ключ';

$GLOBALS["lang"]['print_queue'] = 'Друк Queue';

$GLOBALS["lang"]['Print Queue'] = 'Друк Queue';

$GLOBALS["lang"]['printer_color'] = 'Колір принтера';

$GLOBALS["lang"]['Printer Color'] = 'Колір принтера';

$GLOBALS["lang"]['printer_duplex'] = 'Принтер Duplex';

$GLOBALS["lang"]['Printer Duplex'] = 'Принтер Duplex';

$GLOBALS["lang"]['printer_port_name'] = 'Порт принтера Назва';

$GLOBALS["lang"]['Printer Port Name'] = 'Порт принтера Назва';

$GLOBALS["lang"]['printer_shared'] = 'Принтер Загальний';

$GLOBALS["lang"]['Printer Shared'] = 'Принтер Загальний';

$GLOBALS["lang"]['printer_shared_name'] = 'Принтер Shared Name';

$GLOBALS["lang"]['Printer Shared Name'] = 'Принтер Shared Name';

$GLOBALS["lang"]['priority'] = 'Головна';

$GLOBALS["lang"]['Priority'] = 'Головна';

$GLOBALS["lang"]['Privacy Passphrase'] = 'Статус на сервери';

$GLOBALS["lang"]['privileges_required'] = 'Привілеї необхідно';

$GLOBALS["lang"]['Privileges Required'] = 'Привілеї необхідно';

$GLOBALS["lang"]['processor'] = 'Процесор';

$GLOBALS["lang"]['Processor'] = 'Процесор';

$GLOBALS["lang"]['processor_count'] = 'Графічний процесор';

$GLOBALS["lang"]['Processor Count'] = 'Графічний процесор';

$GLOBALS["lang"]['processor_slot_count'] = 'Процесор Слот Граф';

$GLOBALS["lang"]['Processor Slot Count'] = 'Процесор Слот Граф';

$GLOBALS["lang"]['processor_type'] = 'Тип процесора';

$GLOBALS["lang"]['Processor Type'] = 'Тип процесора';

$GLOBALS["lang"]['Processors'] = 'Процесори';

$GLOBALS["lang"]['product_name'] = 'Назва продукту';

$GLOBALS["lang"]['Product Name'] = 'Назва продукту';

$GLOBALS["lang"]['Product Name Match from CPE: '] = 'Назва продукту матч з CPE: ';

$GLOBALS["lang"]['products'] = 'Продукція';

$GLOBALS["lang"]['Products'] = 'Продукція';

$GLOBALS["lang"]['profile'] = 'Профіль';

$GLOBALS["lang"]['Profile'] = 'Профіль';

$GLOBALS["lang"]['program'] = 'Програми';

$GLOBALS["lang"]['Program'] = 'Програми';

$GLOBALS["lang"]['protocol'] = 'Протоколи';

$GLOBALS["lang"]['Protocol'] = 'Протоколи';

$GLOBALS["lang"]['provider'] = 'Про компанію';

$GLOBALS["lang"]['Provider'] = 'Про компанію';

$GLOBALS["lang"]['published'] = 'Новини';

$GLOBALS["lang"]['Published'] = 'Новини';

$GLOBALS["lang"]['published_date'] = 'Дата публікації';

$GLOBALS["lang"]['Published Date'] = 'Дата публікації';

$GLOBALS["lang"]['publisher'] = 'Видавництво';

$GLOBALS["lang"]['Publisher'] = 'Видавництво';

$GLOBALS["lang"]['Puerto Rico'] = 'Пуерто-Ріко';

$GLOBALS["lang"]['Purchase'] = 'Закупівля';

$GLOBALS["lang"]['purchase_amount'] = 'Закупівля';

$GLOBALS["lang"]['Purchase Amount'] = 'Закупівля';

$GLOBALS["lang"]['purchase_cost_center'] = 'Закупівельний центр';

$GLOBALS["lang"]['Purchase Cost Center'] = 'Закупівельний центр';

$GLOBALS["lang"]['purchase_count'] = 'Закупівля';

$GLOBALS["lang"]['Purchase Count'] = 'Закупівля';

$GLOBALS["lang"]['purchase_date'] = 'Дата придбання';

$GLOBALS["lang"]['Purchase Date'] = 'Дата придбання';

$GLOBALS["lang"]['purchase_invoice'] = 'Купівля товарів';

$GLOBALS["lang"]['Purchase Invoice'] = 'Купівля товарів';

$GLOBALS["lang"]['purchase_order'] = 'Замовлення закупівель';

$GLOBALS["lang"]['Purchase Order'] = 'Замовлення закупівель';

$GLOBALS["lang"]['purchase_order_number'] = 'Номер замовлення';

$GLOBALS["lang"]['Purchase Order Number'] = 'Номер замовлення';

$GLOBALS["lang"]['purchase_service_contract_number'] = 'Номер договору купівлі-продажу';

$GLOBALS["lang"]['Purchase Service Contract Number'] = 'Номер договору купівлі-продажу';

$GLOBALS["lang"]['purchase_vendor'] = 'Покупка постачальника';

$GLOBALS["lang"]['Purchase Vendor'] = 'Покупка постачальника';

$GLOBALS["lang"]['purpose'] = 'Мета';

$GLOBALS["lang"]['Purpose'] = 'Мета';

$GLOBALS["lang"]['Qatar'] = 'Катар';

$GLOBALS["lang"]['queries'] = 'Квартири';

$GLOBALS["lang"]['Queries'] = 'Квартири';

$GLOBALS["lang"]['Query'] = 'Книжка';

$GLOBALS["lang"]['queue'] = 'Клей';

$GLOBALS["lang"]['Queue'] = 'Клей';

$GLOBALS["lang"]['Queue Limit'] = 'Кеуе Ліміт';

$GLOBALS["lang"]['Queued Device Audits'] = 'Аудит пристроїв';

$GLOBALS["lang"]['Queued IP Scans'] = 'Перевірені IP-скани';

$GLOBALS["lang"]['Queued Items'] = 'Виготовлені товари';

$GLOBALS["lang"]['RU Start'] = 'RU Старт';

$GLOBALS["lang"]['RX Bitrate'] = 'RX бітрейт';

$GLOBALS["lang"]['RX Freq'] = 'RX Фрек';

$GLOBALS["lang"]['RX Level'] = 'Рівень RX';

$GLOBALS["lang"]['RX Power'] = 'Потужність RX';

$GLOBALS["lang"]['RX Profile'] = 'RX Профіль';

$GLOBALS["lang"]['Rack'] = 'Рак';

$GLOBALS["lang"]['rack_devices'] = 'Ракові пристрої';

$GLOBALS["lang"]['Rack Devices'] = 'Ракові пристрої';

$GLOBALS["lang"]['rack_id'] = 'Рак ID';

$GLOBALS["lang"]['Rack ID'] = 'Рак ID';

$GLOBALS["lang"]['Racks'] = 'Кошик';

$GLOBALS["lang"]['racks'] = 'Кошик';

$GLOBALS["lang"]['radio'] = 'Радіо';

$GLOBALS["lang"]['Radio'] = 'Радіо';

$GLOBALS["lang"]['Radio MAC'] = 'Радіо Мац';

$GLOBALS["lang"]['rationale'] = 'Рятейл';

$GLOBALS["lang"]['Rationale'] = 'Рятейл';

$GLOBALS["lang"]['raw'] = 'Сировина';

$GLOBALS["lang"]['Raw'] = 'Сировина';

$GLOBALS["lang"]['read'] = 'Читати далі';

$GLOBALS["lang"]['Read'] = 'Читати далі';

$GLOBALS["lang"]['Read our online documentation on the Open-AudIT Wiki.'] = 'Читати нашу онлайн-документацію на Open-AudIT Wiki.';

$GLOBALS["lang"]['Red Query'] = 'Червоні запити';

$GLOBALS["lang"]['Redirect URI'] = 'Відправити URI';

$GLOBALS["lang"]['redirect_uri'] = 'Перенаправлення Uri';

$GLOBALS["lang"]['Redirect Uri'] = 'Перенаправлення Uri';

$GLOBALS["lang"]['references'] = 'Посилання';

$GLOBALS["lang"]['References'] = 'Посилання';

$GLOBALS["lang"]['region'] = 'Регіон';

$GLOBALS["lang"]['Region'] = 'Регіон';

$GLOBALS["lang"]['registered_user'] = 'Зареєстрований Користувач';

$GLOBALS["lang"]['Registered User'] = 'Зареєстрований Користувач';

$GLOBALS["lang"]['rel'] = 'Рель';

$GLOBALS["lang"]['Rel'] = 'Рель';

$GLOBALS["lang"]['Release'] = 'Релізи';

$GLOBALS["lang"]['remediation'] = 'Ремедіація';

$GLOBALS["lang"]['Remediation'] = 'Ремедіація';

$GLOBALS["lang"]['Remote'] = 'Відправити';

$GLOBALS["lang"]['remote_address'] = 'Віддалена адреса';

$GLOBALS["lang"]['Remote Address'] = 'Віддалена адреса';

$GLOBALS["lang"]['remote_port'] = 'Віддалений порт';

$GLOBALS["lang"]['Remote Port'] = 'Віддалений порт';

$GLOBALS["lang"]['Remove'] = 'Видалити';

$GLOBALS["lang"]['Remove Exception'] = 'Видалити виключення';

$GLOBALS["lang"]['Report'] = 'Звіти';

$GLOBALS["lang"]['Report on your devices, networks and more'] = 'Звіт про пристрої, мережі та багато іншого';

$GLOBALS["lang"]['reportable'] = 'Звітність';

$GLOBALS["lang"]['Reportable'] = 'Звітність';

$GLOBALS["lang"]['Reports'] = 'Звіти';

$GLOBALS["lang"]['request'] = 'Замовити';

$GLOBALS["lang"]['Request'] = 'Замовити';

$GLOBALS["lang"]['Request a Specific CVE'] = 'Запит специфікації КВ';

$GLOBALS["lang"]['requested'] = 'Подати заявку';

$GLOBALS["lang"]['Requested'] = 'Подати заявку';

$GLOBALS["lang"]['require_port'] = 'Портфоліо';

$GLOBALS["lang"]['Require Port'] = 'Портфоліо';

$GLOBALS["lang"]['Require an Open Port'] = 'Потрібні Відкритий порт';

$GLOBALS["lang"]['Required'] = 'Потрібні';

$GLOBALS["lang"]['Reset'] = 'Зареєструватися';

$GLOBALS["lang"]['Reset All Data'] = 'Відновити всі дані';

$GLOBALS["lang"]['Reset to Default'] = 'За замовчуванням';

$GLOBALS["lang"]['resource'] = 'Ресурси';

$GLOBALS["lang"]['Resource'] = 'Ресурси';

$GLOBALS["lang"]['Resource Name'] = 'Назва ресурсу';

$GLOBALS["lang"]['Resources'] = 'Ресурси';

$GLOBALS["lang"]['response'] = 'Відправити';

$GLOBALS["lang"]['Response'] = 'Відправити';

$GLOBALS["lang"]['responsibility'] = 'Відповідальність';

$GLOBALS["lang"]['Responsibility'] = 'Відповідальність';

$GLOBALS["lang"]['Restore my Licenses'] = 'Відновити свої ліцензії';

$GLOBALS["lang"]['Restrict to Private'] = 'Обмеження на приватне';

$GLOBALS["lang"]['Restrict to Subnet'] = 'Обмеження для субмереж';

$GLOBALS["lang"]['result'] = 'Почати';

$GLOBALS["lang"]['Result'] = 'Почати';

$GLOBALS["lang"]['Results'] = 'Результати';

$GLOBALS["lang"]['retrieved'] = 'Увійти';

$GLOBALS["lang"]['Retrieved'] = 'Увійти';

$GLOBALS["lang"]['retrieved_ident'] = 'Ідентифікатор';

$GLOBALS["lang"]['Retrieved Ident'] = 'Ідентифікатор';

$GLOBALS["lang"]['retrieved_name'] = 'Ім\'я користувача';

$GLOBALS["lang"]['Retrieved Name'] = 'Ім\'я користувача';

$GLOBALS["lang"]['Retrieved from the device - Windows:Win32_ComputerSystemProduct, Linux:dmidecode, MacOS:system_profiler, ESXi:vim-cmd hostsvc/hostsummary, HP-UX:machinfo, Solaris:smbios, AIX:uname.'] = 'Вимкнено з пристрою - Windows:Win32_ComputerSystemProduct, Linux:dmidecode, MacOS:system_profiler, ESXi:vim-cmd hostsvc/hostsummary, HP-UX:machinfo, Solaris:smbios, AIX:uname.';

$GLOBALS["lang"]['Reunion'] = 'Реюньйон';

$GLOBALS["lang"]['revision'] = 'Редакція';

$GLOBALS["lang"]['Revision'] = 'Редакція';

$GLOBALS["lang"]['risk_assesment_result'] = 'Результат пошуку ризику';

$GLOBALS["lang"]['Risk Assesment Result'] = 'Результат пошуку ризику';

$GLOBALS["lang"]['role'] = 'роль';

$GLOBALS["lang"]['Role'] = 'роль';

$GLOBALS["lang"]['roles'] = 'Ролики';

$GLOBALS["lang"]['Roles'] = 'Ролики';

$GLOBALS["lang"]['Romania'] = 'Українська';

$GLOBALS["lang"]['Room'] = 'Полулюкс';

$GLOBALS["lang"]['route'] = 'Маршрути';

$GLOBALS["lang"]['Route'] = 'Маршрути';

$GLOBALS["lang"]['Row'] = 'Роу';

$GLOBALS["lang"]['Row Count'] = 'Рівний граф';

$GLOBALS["lang"]['row_position'] = 'Посада';

$GLOBALS["lang"]['Row Position'] = 'Посада';

$GLOBALS["lang"]['Rows'] = 'Руки';

$GLOBALS["lang"]['ru_height'] = 'Висота';

$GLOBALS["lang"]['Ru Height'] = 'Висота';

$GLOBALS["lang"]['ru_start'] = 'Початок';

$GLOBALS["lang"]['Ru Start'] = 'Початок';

$GLOBALS["lang"]['rule_group'] = 'Руль Груп';

$GLOBALS["lang"]['Rule Group'] = 'Руль Груп';

$GLOBALS["lang"]['rules'] = 'Правила';

$GLOBALS["lang"]['Rules'] = 'Правила';

$GLOBALS["lang"]['Run Discovery'] = 'Проживання';

$GLOBALS["lang"]['Run Discovery on Devices'] = 'Відкрийте для себе на пристроях';

$GLOBALS["lang"]['Run a discovery and find out <b>Whats On Your Network?</b>'] = 'Запустити відкриття і дізнатися <b>Що на вашій мережі?</b>';

$GLOBALS["lang"]['Run this Command'] = 'Запуск цієї команди';

$GLOBALS["lang"]['runas'] = 'Пробіг';

$GLOBALS["lang"]['Runas'] = 'Пробіг';

$GLOBALS["lang"]['Running Open-AudIT Apache Service Under Windows'] = 'Запуск Open-AudIT Apache Service Під Windows';

$GLOBALS["lang"]['Russian Federation'] = 'Російська Федерація';

$GLOBALS["lang"]['Rwanda'] = 'Руанда';

$GLOBALS["lang"]['rx_bitrate'] = 'Ркс Бітрат';

$GLOBALS["lang"]['Rx Bitrate'] = 'Ркс Бітрат';

$GLOBALS["lang"]['rx_freq'] = 'Ркс Фрек';

$GLOBALS["lang"]['Rx Freq'] = 'Ркс Фрек';

$GLOBALS["lang"]['rx_level'] = 'Ркс рівень';

$GLOBALS["lang"]['Rx Level'] = 'Ркс рівень';

$GLOBALS["lang"]['rx_power'] = 'Rx Потужність';

$GLOBALS["lang"]['Rx Power'] = 'Rx Потужність';

$GLOBALS["lang"]['rx_profile'] = 'Rx Профіль';

$GLOBALS["lang"]['Rx Profile'] = 'Rx Профіль';

$GLOBALS["lang"]['SELECT'] = 'СЕЛЕКТ';

$GLOBALS["lang"]['SID'] = 'ПІДТРИМКА';

$GLOBALS["lang"]['SM Version'] = 'SM версія';

$GLOBALS["lang"]['SNMP (v1 / v2)'] = 'СНМП (v1 / v2)';

$GLOBALS["lang"]['SNMP Details'] = 'СНМП Детальніше';

$GLOBALS["lang"]['SNMP OID'] = 'СНМП OID';

$GLOBALS["lang"]['SNMP Version'] = 'Версія SNMP';

$GLOBALS["lang"]['SNMP v3'] = 'СНМП v3';

$GLOBALS["lang"]['SQL'] = 'Проксимус';

$GLOBALS["lang"]['SQL (Advanced)'] = 'SQL (Advanced)';

$GLOBALS["lang"]['SQL Creation Statements'] = 'Звіти про створення SQL';

$GLOBALS["lang"]['SSH'] = 'СШ';

$GLOBALS["lang"]['SSH Key'] = 'СШ Головна';

$GLOBALS["lang"]['SW Revision'] = 'SW Ревізія';

$GLOBALS["lang"]['Saint Barthelemy'] = 'Сен-Бартельмі';

$GLOBALS["lang"]['Saint Helena'] = 'Святої Єлени';

$GLOBALS["lang"]['Saint Kitts and Nevis'] = 'Сент-Кіттс і Невіс';

$GLOBALS["lang"]['Saint Lucia'] = 'Сент-Люсія';

$GLOBALS["lang"]['Saint Martin'] = 'Сен-Мартен';

$GLOBALS["lang"]['Saint Pierre and Miquelon'] = 'Сен-П\'єр і Мікелон';

$GLOBALS["lang"]['Saint Vincent and the Grenadines'] = 'Сент-Вінсент і Гренадини';

$GLOBALS["lang"]['Samoa'] = 'Мапа';

$GLOBALS["lang"]['san'] = 'Сан-Франциско';

$GLOBALS["lang"]['San'] = 'Сан-Франциско';

$GLOBALS["lang"]['San Marino'] = 'Сан-Марино';

$GLOBALS["lang"]['Sao Tome and Principe'] = 'Сао Томес і Принципе';

$GLOBALS["lang"]['Saturday'] = 'Субота';

$GLOBALS["lang"]['Saudi Arabia'] = 'Саудівська Аравія';

$GLOBALS["lang"]['Save as Default'] = 'За замовчуванням';

$GLOBALS["lang"]['scaling'] = 'Скальлінг';

$GLOBALS["lang"]['Scaling'] = 'Скальлінг';

$GLOBALS["lang"]['scan_options'] = 'Параметри сканування';

$GLOBALS["lang"]['Scan Options'] = 'Параметри сканування';

$GLOBALS["lang"]['Scan Options ID'] = 'Параметри сканування ID';

$GLOBALS["lang"]['Scan the Nmap top number of TCP ports.'] = 'Сканування верхнього числа портів TCP.';

$GLOBALS["lang"]['Scan the Nmap top number of UDP ports.'] = 'Сканування верхнього числа портів УДП.';

$GLOBALS["lang"]['schedule'] = 'Розклад';

$GLOBALS["lang"]['Schedule'] = 'Розклад';

$GLOBALS["lang"]['scope'] = 'Навігація';

$GLOBALS["lang"]['Scope'] = 'Навігація';

$GLOBALS["lang"]['script_timeout'] = 'Сценарій';

$GLOBALS["lang"]['Script Timeout'] = 'Сценарій';

$GLOBALS["lang"]['scripts'] = 'Списки';

$GLOBALS["lang"]['Scripts'] = 'Списки';

$GLOBALS["lang"]['scsi'] = 'СКАЧАТИ';

$GLOBALS["lang"]['Scsi'] = 'СКАЧАТИ';

$GLOBALS["lang"]['scsi_bus'] = 'Автобуси';

$GLOBALS["lang"]['Scsi Bus'] = 'Автобуси';

$GLOBALS["lang"]['scsi_logical_unit'] = 'Електронна пошта';

$GLOBALS["lang"]['Scsi Logical Unit'] = 'Електронна пошта';

$GLOBALS["lang"]['scsi_port'] = 'Портфоліо';

$GLOBALS["lang"]['Scsi Port'] = 'Портфоліо';

$GLOBALS["lang"]['Search'] = 'Пошук';

$GLOBALS["lang"]['Search For a Device'] = 'Пошук для пристрою';

$GLOBALS["lang"]['Search for Device'] = 'Пошук пристроїв';

$GLOBALS["lang"]['Searching Using DataTables'] = 'Пошук за допомогою даних';

$GLOBALS["lang"]['secondary'] = 'Пожертвувати';

$GLOBALS["lang"]['Secondary'] = 'Пожертвувати';

$GLOBALS["lang"]['Secondary Text'] = 'Другий текст';

$GLOBALS["lang"]['section'] = 'Розсилка';

$GLOBALS["lang"]['Section'] = 'Розсилка';

$GLOBALS["lang"]['secure'] = 'Захист';

$GLOBALS["lang"]['Secure'] = 'Захист';

$GLOBALS["lang"]['Security Name'] = 'Назва безпеки';

$GLOBALS["lang"]['Security Status'] = 'Статус на сервери';

$GLOBALS["lang"]['security_zone'] = 'Зона безпеки';

$GLOBALS["lang"]['Security Zone'] = 'Зона безпеки';

$GLOBALS["lang"]['seed_ip'] = 'Посівний IP';

$GLOBALS["lang"]['Seed IP'] = 'Посівний IP';

$GLOBALS["lang"]['seed_ping'] = 'Сівалка';

$GLOBALS["lang"]['Seed Ping'] = 'Сівалка';

$GLOBALS["lang"]['seed_restrict_to_private'] = 'Обмеження насіння для приватного';

$GLOBALS["lang"]['Seed Restrict To Private'] = 'Обмеження насіння для приватного';

$GLOBALS["lang"]['seed_restrict_to_subnet'] = 'Обмеження насіння для субмереж';

$GLOBALS["lang"]['Seed Restrict To Subnet'] = 'Обмеження насіння для субмереж';

$GLOBALS["lang"]['Select'] = 'Обрати';

$GLOBALS["lang"]['Select All'] = 'Всі';

$GLOBALS["lang"]['select_external_attribute'] = 'Виберіть зовнішній атрибут';

$GLOBALS["lang"]['Select External Attribute'] = 'Виберіть зовнішній атрибут';

$GLOBALS["lang"]['select_external_count'] = 'Виберіть зовнішній граф';

$GLOBALS["lang"]['Select External Count'] = 'Виберіть зовнішній граф';

$GLOBALS["lang"]['select_external_type'] = 'Виберіть зовнішній Тип';

$GLOBALS["lang"]['Select External Type'] = 'Виберіть зовнішній Тип';

$GLOBALS["lang"]['select_external_value'] = 'Виберіть зовнішній Ціна';

$GLOBALS["lang"]['Select External Value'] = 'Виберіть зовнішній Ціна';

$GLOBALS["lang"]['select_internal_attribute'] = 'Виберіть внутрішній атрибут';

$GLOBALS["lang"]['Select Internal Attribute'] = 'Виберіть внутрішній атрибут';

$GLOBALS["lang"]['select_internal_count'] = 'Виберіть Внутрішній граф';

$GLOBALS["lang"]['Select Internal Count'] = 'Виберіть Внутрішній граф';

$GLOBALS["lang"]['select_internal_type'] = 'Виберіть внутрішню Тип';

$GLOBALS["lang"]['Select Internal Type'] = 'Виберіть внутрішню Тип';

$GLOBALS["lang"]['select_internal_value'] = 'Виберіть внутрішню Ціна';

$GLOBALS["lang"]['Select Internal Value'] = 'Виберіть внутрішню Ціна';

$GLOBALS["lang"]['Select a Table'] = 'Виберіть таблицю';

$GLOBALS["lang"]['Senegal'] = 'Сепаратор';

$GLOBALS["lang"]['sensitivity'] = 'Чутливість';

$GLOBALS["lang"]['Sensitivity'] = 'Чутливість';

$GLOBALS["lang"]['September'] = 'Вересень';

$GLOBALS["lang"]['Serbia'] = 'Українська';

$GLOBALS["lang"]['serial'] = 'Проживання';

$GLOBALS["lang"]['Serial'] = 'Проживання';

$GLOBALS["lang"]['serial_imei'] = 'Серійне ім’я';

$GLOBALS["lang"]['Serial Imei'] = 'Серійне ім’я';

$GLOBALS["lang"]['serial_sim'] = 'Серійне Сім\'я';

$GLOBALS["lang"]['Serial Sim'] = 'Серійне Сім\'я';

$GLOBALS["lang"]['series'] = 'Серія';

$GLOBALS["lang"]['Series'] = 'Серія';

$GLOBALS["lang"]['server'] = 'Статус на сервери';

$GLOBALS["lang"]['Server'] = 'Статус на сервери';

$GLOBALS["lang"]['server_id'] = 'Статус на сервери';

$GLOBALS["lang"]['Server ID'] = 'Статус на сервери';

$GLOBALS["lang"]['Server Is'] = 'Сервери';

$GLOBALS["lang"]['server_item'] = 'Статус на сервери';

$GLOBALS["lang"]['Server Item'] = 'Статус на сервери';

$GLOBALS["lang"]['Server Status'] = 'Статус на сервери';

$GLOBALS["lang"]['Servers'] = 'Сервери';

$GLOBALS["lang"]['service'] = 'Послуги';

$GLOBALS["lang"]['Service'] = 'Послуги';

$GLOBALS["lang"]['service_identifier'] = 'Ідентифікатор служби';

$GLOBALS["lang"]['Service Identifier'] = 'Ідентифікатор служби';

$GLOBALS["lang"]['service_level_a'] = 'Рівень сервісу A';

$GLOBALS["lang"]['Service Level A'] = 'Рівень сервісу A';

$GLOBALS["lang"]['service_level_b'] = 'Рівень обслуговування B';

$GLOBALS["lang"]['Service Level B'] = 'Рівень обслуговування B';

$GLOBALS["lang"]['service_network'] = 'Мережа послуг';

$GLOBALS["lang"]['Service Network'] = 'Мережа послуг';

$GLOBALS["lang"]['service_number'] = 'Номер послуги';

$GLOBALS["lang"]['Service Number'] = 'Номер послуги';

$GLOBALS["lang"]['service_pack'] = 'Пакет послуг';

$GLOBALS["lang"]['Service Pack'] = 'Пакет послуг';

$GLOBALS["lang"]['service_plan'] = 'План роботи';

$GLOBALS["lang"]['Service Plan'] = 'План роботи';

$GLOBALS["lang"]['service_provider'] = 'Постачальник послуг';

$GLOBALS["lang"]['Service Provider'] = 'Постачальник послуг';

$GLOBALS["lang"]['service_tag'] = 'теги';

$GLOBALS["lang"]['Service Tag'] = 'теги';

$GLOBALS["lang"]['service_type'] = 'Тип послуги';

$GLOBALS["lang"]['Service Type'] = 'Тип послуги';

$GLOBALS["lang"]['service_version'] = 'Версія сайту';

$GLOBALS["lang"]['Service Version'] = 'Версія сайту';

$GLOBALS["lang"]['Set'] = 'Комплекти';

$GLOBALS["lang"]['set_by'] = 'Комплекти';

$GLOBALS["lang"]['Set By'] = 'Комплекти';

$GLOBALS["lang"]['Set the size (normal or compact) of the tables on the List screens.'] = 'Встановіть розмір (звичайний або компактний) таблиць на екранах Список.';

$GLOBALS["lang"]['severity'] = 'Сєвєвічність';

$GLOBALS["lang"]['Severity'] = 'Сєвєвічність';

$GLOBALS["lang"]['severity_text'] = 'Текст тяжкості';

$GLOBALS["lang"]['Severity Text'] = 'Текст тяжкості';

$GLOBALS["lang"]['Severity is calculated from the <code>base_score</code> and can be one of: None, Low, Medium, High, Critical.'] = 'Термін придатності обчислюється з <code>base_score</code> і може бути одним з: Ні, низький, середній, високий, критичний.';

$GLOBALS["lang"]['Seychelles'] = 'Сейшельські острови';

$GLOBALS["lang"]['share'] = 'Поділитися';

$GLOBALS["lang"]['Share'] = 'Поділитися';

$GLOBALS["lang"]['Share Name'] = 'Ім\'я користувача';

$GLOBALS["lang"]['shared'] = 'Почати';

$GLOBALS["lang"]['Shared'] = 'Почати';

$GLOBALS["lang"]['shared_name'] = 'Ім\'я користувача';

$GLOBALS["lang"]['Shared Name'] = 'Ім\'я користувача';

$GLOBALS["lang"]['shell'] = 'Шпалери';

$GLOBALS["lang"]['Shell'] = 'Шпалери';

$GLOBALS["lang"]['Ship Date'] = 'Дата відправлення';

$GLOBALS["lang"]['short'] = 'Шорти';

$GLOBALS["lang"]['Short'] = 'Шорти';

$GLOBALS["lang"]['Should I remove all non-current data from this device?'] = 'Чи можна видалити всі неточні дані з цього пристрою?';

$GLOBALS["lang"]['Should this file (or pattern) be used to exclude files from being reported. Normally, to audit files, this is set to <code>y</code>.'] = 'Чи слід використовувати цей файл (або шаблон) для виключення файлів з повідомлення. Як правило, для перевірки файлів, це встановлюється для <code>y</code>й';

$GLOBALS["lang"]['Should this vendor be used when retrieving vulnerabilities from FirstWave.'] = 'Чи слід використовувати цей постачальник при перерозподілі вразливостей від FirstWave.';

$GLOBALS["lang"]['Should we add devices from the remote service, locally.'] = 'Якщо ми додаємо пристрої з віддаленого сервісу, локально.';

$GLOBALS["lang"]['Should we apply this license to the selected Org as well as the Orgs children?'] = 'Якщо ми застосовуємо цю ліцензію на обраний орган, а також дітей-Оргій?';

$GLOBALS["lang"]['Should we consider a filtered port to be an open port - and therefore flag this IP as having a device attached?'] = 'Чи слід розглядати фільтрований порт, щоб бути відкритим портом - і тому прапорець цього IP як пристрій підключений?';

$GLOBALS["lang"]['Should we consider an open|filtered port to be an open port - and therefore flag this IP as having a device attached?'] = 'Якщо ми розглянемо відкритий порт, щоб бути відкритим портом - і тому прапорець цього IP як пристрій, прикріплений?';

$GLOBALS["lang"]['Should we expose this group in the web interface.'] = 'Якщо ми підбираємо цю групу в веб-інтерфейс.';

$GLOBALS["lang"]['Should we expose this query in the list of reports under the Report menu in the web interface.'] = 'Якщо ви надаєте цю запит у списку звітів у меню Звіту в веб-інтерфейсі.';

$GLOBALS["lang"]['Should we expose this query in the list of reports under the Reports menu in the web interface.'] = 'Якщо ви надаєте цей запит у списку звітів за меню Звітів у веб-інтерфейс.';

$GLOBALS["lang"]['Should we install Open-Scap on the target machine.'] = 'Якщо ми встановимо Open-Scap на цільовій машині.';

$GLOBALS["lang"]['Should we match a device based mac address even if its a known likely duplicate from VMware.'] = 'Якщо його відомий, ймовірно, дублікати від VMware.';

$GLOBALS["lang"]['Should we match a device based on its DNS fqdn.'] = 'Якщо ми відповідаємо пристрій на основі DNS fqdn.';

$GLOBALS["lang"]['Should we match a device based on its DNS hostname.'] = 'Якщо ми відповідаємо пристрій на основі свого імені DNS.';

$GLOBALS["lang"]['Should we match a device based on its UUID.'] = 'Якщо ми відповідаємо пристрій на основі UUID.';

$GLOBALS["lang"]['Should we match a device based on its dbus id.'] = 'Чи відповідаємо пристрій на основі його dbus id.';

$GLOBALS["lang"]['Should we match a device based on its fqdn.'] = 'Чи відповідаємо пристрій на основі fqdn.';

$GLOBALS["lang"]['Should we match a device based on its hostname and UUID.'] = 'Якщо ми збираємо пристрій на основі свого імені та UUID.';

$GLOBALS["lang"]['Should we match a device based on its hostname and dbus id.'] = 'Якщо ми збираємо пристрій на основі свого хостового імені та dbus id.';

$GLOBALS["lang"]['Should we match a device based on its hostname and serial.'] = 'Якщо ми збираємо пристрій на основі свого імені та серіалу.';

$GLOBALS["lang"]['Should we match a device based on its ip if we have an existing device with no data.'] = 'Якщо у нас є наявний пристрій без даних.';

$GLOBALS["lang"]['Should we match a device based on its ip.'] = 'Якщо ми збираємо пристрій на основі його ip.';

$GLOBALS["lang"]['Should we match a device based on its mac address.'] = 'Якщо ми збираємо пристрій на основі своєї адреси.';

$GLOBALS["lang"]['Should we match a device based on its serial and type.'] = 'Якщо ми відповідаємо пристрій на основі його серійного та типу.';

$GLOBALS["lang"]['Should we match a device based on its serial number.'] = 'Чи відповідаємо пристрій на його серійний номер.';

$GLOBALS["lang"]['Should we match a device based only on its SNMP sysName and serial.'] = 'Якщо ми відповідаємо на пристрій, що базується лише на sysName та серійному режимі.';

$GLOBALS["lang"]['Should we match a device based only on its SNMP sysName.'] = 'Якщо ми відповідаємо пристрій, що базується тільки на його sysName SNMP.';

$GLOBALS["lang"]['Should we match a device based only on its hostname.'] = 'Якщо ми відповідаємо пристрій на основі свого імені.';

$GLOBALS["lang"]['Should we ping the IP before attempting to scan it? If it does not respond to the ping, skip this device.'] = 'Якщо ми скануємо IP перед спробою сканування? Якщо це не відповідає пінгу, пропустіть цей пристрій.';

$GLOBALS["lang"]['Should we populate the external system from our local devices.'] = 'Якщо ми популяємо зовнішню систему з локальних пристроїв.';

$GLOBALS["lang"]['Should we run an audit and submit it (y/n).'] = 'Якщо ми здійснюємо аудит і подаємо його (і/n).';

$GLOBALS["lang"]['Should we test for SNMP using UDP port 161.'] = 'Якщо ми тестуємо для SNMP за допомогою порту UDP 161.';

$GLOBALS["lang"]['Should we test for SSH using TCP port 22.'] = 'Якщо ми тестуємо для SSH за допомогою TCP порту 22.';

$GLOBALS["lang"]['Should we test for WMI using TCP port 135.'] = 'Якщо ми тестуємо для WMI за допомогою порту TCP 135.';

$GLOBALS["lang"]['Should we uninstall the agent (y/n).'] = 'Якщо ми видалили агент (y/n).';

$GLOBALS["lang"]['Should we use this method to authenticate user credentials. Set to <code>y</code> or <code>n</code>.'] = 'Якщо ми використовуємо цей метод для ідентифікації облікових даних користувачів. Комплекти <code>y</code> або <code>n</code>й';

$GLOBALS["lang"]['Should we use this method to populate a users roles. The field <code>use_auth</code> must be set to <code>y</code> to use this. Set to <code>y</code> or <code>n</code>.'] = 'Якщо ми використовуємо цей метод для створення ролі користувачів. Поле <code>use_auth</code> необхідно встановити <code>y</code> використовувати це. Комплекти <code>y</code> або <code>n</code>й';

$GLOBALS["lang"]['Show All'] = 'Показати всі';

$GLOBALS["lang"]['sid'] = 'Надія';

$GLOBALS["lang"]['Sid'] = 'Надія';

$GLOBALS["lang"]['sidebar'] = 'Бомби';

$GLOBALS["lang"]['Sidebar'] = 'Бомби';

$GLOBALS["lang"]['Sierra Leone'] = 'Сєрра-Леоне';

$GLOBALS["lang"]['Singapore'] = 'Українська';

$GLOBALS["lang"]['Site A'] = 'Сайт А';

$GLOBALS["lang"]['Site B'] = 'Сайт Б';

$GLOBALS["lang"]['site_hours_a'] = 'Сайт Години А';

$GLOBALS["lang"]['Site Hours A'] = 'Сайт Години А';

$GLOBALS["lang"]['site_hours_b'] = 'Години роботи сайту B';

$GLOBALS["lang"]['Site Hours B'] = 'Години роботи сайту B';

$GLOBALS["lang"]['size'] = 'Розмір';

$GLOBALS["lang"]['Size'] = 'Розмір';

$GLOBALS["lang"]['slaves'] = 'Слави';

$GLOBALS["lang"]['Slaves'] = 'Слави';

$GLOBALS["lang"]['Slovakia (Slovak Republic)'] = 'Словаччина (Словаччина)';

$GLOBALS["lang"]['Slovenia'] = 'Словенія';

$GLOBALS["lang"]['Smart Status'] = 'Статус на сервери';

$GLOBALS["lang"]['smversion'] = 'Смверсія';

$GLOBALS["lang"]['Smversion'] = 'Смверсія';

$GLOBALS["lang"]['Sneaky'] = 'Снеаки';

$GLOBALS["lang"]['snmp_enterprise_id'] = 'Snmp ID підприємства';

$GLOBALS["lang"]['Snmp Enterprise ID'] = 'Snmp ID підприємства';

$GLOBALS["lang"]['snmp_enterprise_name'] = 'Snmp Назва підприємства';

$GLOBALS["lang"]['Snmp Enterprise Name'] = 'Snmp Назва підприємства';

$GLOBALS["lang"]['snmp_oid'] = 'Snmp Oid';

$GLOBALS["lang"]['Snmp Oid'] = 'Snmp Oid';

$GLOBALS["lang"]['snmp_timeout'] = 'Snmp час';

$GLOBALS["lang"]['Snmp Timeout'] = 'Snmp час';

$GLOBALS["lang"]['snmp_version'] = 'Версія Snmp';

$GLOBALS["lang"]['Snmp Version'] = 'Версія Snmp';

$GLOBALS["lang"]['socket'] = 'Розсилка';

$GLOBALS["lang"]['Socket'] = 'Розсилка';

$GLOBALS["lang"]['software'] = 'Програмне забезпечення';

$GLOBALS["lang"]['Software'] = 'Програмне забезпечення';

$GLOBALS["lang"]['Software Found Last 7 Days'] = 'Програмне забезпечення знайдено Останні 7 днів';

$GLOBALS["lang"]['Software Found Today'] = 'Програмне забезпечення, засноване сьогодні';

$GLOBALS["lang"]['Software Found Yesterday'] = 'Програмне забезпечення Знайдено Вчора';

$GLOBALS["lang"]['software_key'] = 'Програмне забезпечення Key';

$GLOBALS["lang"]['Software Key'] = 'Програмне забезпечення Key';

$GLOBALS["lang"]['software_name'] = 'Назва програмного забезпечення';

$GLOBALS["lang"]['Software Name'] = 'Назва програмного забезпечення';

$GLOBALS["lang"]['Software Policies'] = 'Політика програмного забезпечення';

$GLOBALS["lang"]['software_revision'] = 'Програмне забезпечення';

$GLOBALS["lang"]['Software Revision'] = 'Програмне забезпечення';

$GLOBALS["lang"]['software_version'] = 'Версія програмного забезпечення';

$GLOBALS["lang"]['Software Version'] = 'Версія програмного забезпечення';

$GLOBALS["lang"]['Solaris'] = 'Сонячний';

$GLOBALS["lang"]['Solomon Islands'] = 'Соломонові острови';

$GLOBALS["lang"]['Somalia, Somali Republic'] = 'Сомалі, Сомалі Республіка';

$GLOBALS["lang"]['sound'] = 'Звуковий';

$GLOBALS["lang"]['Sound'] = 'Звуковий';

$GLOBALS["lang"]['source'] = 'Джерело';

$GLOBALS["lang"]['Source'] = 'Джерело';

$GLOBALS["lang"]['South Africa'] = 'Південна Африка';

$GLOBALS["lang"]['South Georgia and the South Sandwich Islands'] = 'Південна Джорджія та Південні Сендвічські острови';

$GLOBALS["lang"]['Spain'] = 'Іспанія';

$GLOBALS["lang"]['Spanish'] = 'Іспанська';

$GLOBALS["lang"]['Specific to Azure.'] = 'Специфікація до Azure.';

$GLOBALS["lang"]['Specific to OKTA.'] = 'Специфікація до OKTA.';

$GLOBALS["lang"]['Specifies a comma-separated list of targets (no spaces) to be excluded from the scan. The list you pass in uses normal Nmap syntax, so it can include hostnames, CIDR netblocks, octet ranges, etc.'] = 'Визначає список цілей (не пробілів), які слід виключити з сканування. Список, який ви проходите у використанні нормальний синтаксис Nmap, тому він може включати хості, CIDR netblocks, octet діапазони і т.д.';

$GLOBALS["lang"]['speed'] = 'швидкість';

$GLOBALS["lang"]['Speed'] = 'швидкість';

$GLOBALS["lang"]['speed_down_a'] = 'швидкість вниз А.А.';

$GLOBALS["lang"]['Speed Down A'] = 'швидкість вниз А.А.';

$GLOBALS["lang"]['speed_down_b'] = 'швидкість вниз B';

$GLOBALS["lang"]['Speed Down B'] = 'швидкість вниз B';

$GLOBALS["lang"]['speed_up_a'] = 'Швидкість вгору A';

$GLOBALS["lang"]['Speed Up A'] = 'Швидкість вгору A';

$GLOBALS["lang"]['speed_up_b'] = 'Швидкість B';

$GLOBALS["lang"]['Speed Up B'] = 'Швидкість B';

$GLOBALS["lang"]['sql'] = 'Кв.м';

$GLOBALS["lang"]['Sql'] = 'Кв.м';

$GLOBALS["lang"]['Sri Lanka'] = 'Шрі-Ланка';

$GLOBALS["lang"]['ssh_ports'] = 'Ssh Порти';

$GLOBALS["lang"]['Ssh Ports'] = 'Ssh Порти';

$GLOBALS["lang"]['ssh_timeout'] = 'Ssh час';

$GLOBALS["lang"]['Ssh Timeout'] = 'Ssh час';

$GLOBALS["lang"]['Stand-Alone'] = 'Стенд-Алон';

$GLOBALS["lang"]['Standard'] = 'Стандарти';

$GLOBALS["lang"]['standard_id'] = 'Стандартний ID';

$GLOBALS["lang"]['Standard ID'] = 'Стандартний ID';

$GLOBALS["lang"]['standards'] = 'Стандарти';

$GLOBALS["lang"]['Standards'] = 'Стандарти';

$GLOBALS["lang"]['standards_policies'] = 'Стандарти';

$GLOBALS["lang"]['Standards Policies'] = 'Стандарти';

$GLOBALS["lang"]['standards_results'] = 'Стандарти';

$GLOBALS["lang"]['Standards Results'] = 'Стандарти';

$GLOBALS["lang"]['start_date'] = 'Дата початку';

$GLOBALS["lang"]['Start Date'] = 'Дата початку';

$GLOBALS["lang"]['start_mode'] = 'Режим старту';

$GLOBALS["lang"]['Start Mode'] = 'Режим старту';

$GLOBALS["lang"]['started_date'] = 'Дата початку';

$GLOBALS["lang"]['Started Date'] = 'Дата початку';

$GLOBALS["lang"]['state'] = 'Стан';

$GLOBALS["lang"]['State'] = 'Стан';

$GLOBALS["lang"]['Stats'] = 'Стати';

$GLOBALS["lang"]['status'] = 'Статус на сервери';

$GLOBALS["lang"]['Status'] = 'Статус на сервери';

$GLOBALS["lang"]['Storage'] = 'Склад';

$GLOBALS["lang"]['storage_count'] = 'Кількість зберігання';

$GLOBALS["lang"]['Storage Count'] = 'Кількість зберігання';

$GLOBALS["lang"]['Storage-Area Network'] = 'Статус на сервери';

$GLOBALS["lang"]['string'] = 'Ступінь';

$GLOBALS["lang"]['String'] = 'Ступінь';

$GLOBALS["lang"]['sub_resource_id'] = 'Ім\'я користувача';

$GLOBALS["lang"]['Sub Resource ID'] = 'Ім\'я користувача';

$GLOBALS["lang"]['sub_type'] = 'Тип субтитри';

$GLOBALS["lang"]['Sub Type'] = 'Тип субтитри';

$GLOBALS["lang"]['subject_key_ident'] = 'Тема Key Ident';

$GLOBALS["lang"]['Subject Key Ident'] = 'Тема Key Ident';

$GLOBALS["lang"]['Submit'] = 'Подати заявку';

$GLOBALS["lang"]['Submitted From'] = 'Надіслане Від';

$GLOBALS["lang"]['subnet'] = 'Навігація';

$GLOBALS["lang"]['Subnet'] = 'Навігація';

$GLOBALS["lang"]['Subscription ID'] = 'Абонемент';

$GLOBALS["lang"]['suburb'] = 'Назар';

$GLOBALS["lang"]['Suburb'] = 'Назар';

$GLOBALS["lang"]['Success'] = 'Про нас';

$GLOBALS["lang"]['Sudan'] = 'Судан';

$GLOBALS["lang"]['Sudo Password'] = 'Судо пароля';

$GLOBALS["lang"]['Sudo Password (optional)'] = 'Судо Пароль (опція)';

$GLOBALS["lang"]['suite'] = 'Полулюкс';

$GLOBALS["lang"]['Suite'] = 'Полулюкс';

$GLOBALS["lang"]['summaries'] = 'Сумпери';

$GLOBALS["lang"]['Summaries'] = 'Сумпери';

$GLOBALS["lang"]['Summary'] = 'Редакція';

$GLOBALS["lang"]['Sunday'] = 'Неділя';

$GLOBALS["lang"]['supplier'] = 'Постачальники';

$GLOBALS["lang"]['Supplier'] = 'Постачальники';

$GLOBALS["lang"]['Support'] = 'Підтримка';

$GLOBALS["lang"]['Supported types are <code>subnet</code>, <code>seed</code> and <code>active directory</code>.'] = 'Підтримувані типи <code>subnet</code>й <code>seed</code> і <code>active directory</code>й';

$GLOBALS["lang"]['Suriname'] = 'Прізвище';

$GLOBALS["lang"]['Svalbard & Jan Mayen Islands'] = 'Svalbard & Jan Mayen Islands';

$GLOBALS["lang"]['Swaziland'] = 'Свазіленд';

$GLOBALS["lang"]['Sweden'] = 'Швеція';

$GLOBALS["lang"]['switch_device_id'] = 'Вимикач ID';

$GLOBALS["lang"]['Switch Device ID'] = 'Вимикач ID';

$GLOBALS["lang"]['switch_port'] = 'Порти';

$GLOBALS["lang"]['Switch Port'] = 'Порти';

$GLOBALS["lang"]['Switzerland, Swiss Confederation'] = 'Швейцарія, Швейцарська конфедерація';

$GLOBALS["lang"]['Syrian Arab Republic'] = 'Сирійська Арабська Республіка';

$GLOBALS["lang"]['sysContact'] = 'СисКонтакти';

$GLOBALS["lang"]['SysContact'] = 'СисКонтакти';

$GLOBALS["lang"]['sysDescr'] = 'СисДезак';

$GLOBALS["lang"]['SysDescr'] = 'СисДезак';

$GLOBALS["lang"]['sysLocation'] = 'Сислокація';

$GLOBALS["lang"]['SysLocation'] = 'Сислокація';

$GLOBALS["lang"]['sysName'] = 'СисName';

$GLOBALS["lang"]['SysName'] = 'СисName';

$GLOBALS["lang"]['sysObjectID'] = 'СисОbjectID';

$GLOBALS["lang"]['SysObjectID'] = 'СисОbjectID';

$GLOBALS["lang"]['sysUpTime'] = 'СисКСНУМКС';

$GLOBALS["lang"]['SysUpTime'] = 'СисКСНУМКС';

$GLOBALS["lang"]['system_component'] = 'Компоненти системи';

$GLOBALS["lang"]['System Component'] = 'Компоненти системи';

$GLOBALS["lang"]['System-Area Network'] = 'Системна мережа';

$GLOBALS["lang"]['TX Bitrate'] = 'TX бітрейт';

$GLOBALS["lang"]['TX Freq'] = 'TX Фрек';

$GLOBALS["lang"]['TX Level'] = 'TX рівень';

$GLOBALS["lang"]['TX Power'] = 'TX Потужність';

$GLOBALS["lang"]['TX Profile'] = 'TX Профіль';

$GLOBALS["lang"]['table'] = 'Настільний';

$GLOBALS["lang"]['Table'] = 'Настільний';

$GLOBALS["lang"]['tag'] = 'Навігація';

$GLOBALS["lang"]['Tag'] = 'Навігація';

$GLOBALS["lang"]['tag_1'] = 'Тег 1';

$GLOBALS["lang"]['Tag 1'] = 'Тег 1';

$GLOBALS["lang"]['tag_2'] = 'Тег 2';

$GLOBALS["lang"]['Tag 2'] = 'Тег 2';

$GLOBALS["lang"]['tag_3'] = 'Тег 3';

$GLOBALS["lang"]['Tag 3'] = 'Тег 3';

$GLOBALS["lang"]['tags'] = 'Панчохи';

$GLOBALS["lang"]['Tags'] = 'Панчохи';

$GLOBALS["lang"]['Tags :: '] = 'Теги :: ';

$GLOBALS["lang"]['Taiwan'] = 'Українська';

$GLOBALS["lang"]['Tajikistan'] = 'Таджикістан';

$GLOBALS["lang"]['Tanzania'] = 'Танзанія';

$GLOBALS["lang"]['task'] = 'Мета';

$GLOBALS["lang"]['Task'] = 'Мета';

$GLOBALS["lang"]['tasks'] = 'Завдання';

$GLOBALS["lang"]['Tasks'] = 'Завдання';

$GLOBALS["lang"]['tcp_ports'] = 'Порти Tcp';

$GLOBALS["lang"]['Tcp Ports'] = 'Порти Tcp';

$GLOBALS["lang"]['tenant'] = 'Навігація';

$GLOBALS["lang"]['Tenant'] = 'Навігація';

$GLOBALS["lang"]['ternary'] = 'Територія';

$GLOBALS["lang"]['Ternary'] = 'Територія';

$GLOBALS["lang"]['Test 1'] = 'Тест 1';

$GLOBALS["lang"]['Test 2'] = 'Тест 2';

$GLOBALS["lang"]['Test 3'] = 'Тест 3';

$GLOBALS["lang"]['test_minutes'] = 'Протокол випробувань';

$GLOBALS["lang"]['Test Minutes'] = 'Протокол випробувань';

$GLOBALS["lang"]['test_os'] = 'Тест Ос';

$GLOBALS["lang"]['Test Os'] = 'Тест Ос';

$GLOBALS["lang"]['test_subnet'] = 'Тест Підмережі';

$GLOBALS["lang"]['Test Subnet'] = 'Тест Підмережі';

$GLOBALS["lang"]['tests'] = 'Тести';

$GLOBALS["lang"]['Tests'] = 'Тести';

$GLOBALS["lang"]['Text'] = 'Головна';

$GLOBALS["lang"]['Thailand'] = 'Таїланд';

$GLOBALS["lang"]['The Active Directory domain to retrieve a list of subnets from.'] = 'Домен Active Directory для отримання списку підмереж.';

$GLOBALS["lang"]['The Active Directory server to retrieve a list of subnets from.'] = 'Сервер Active Directory для отримання списку підмереж.';

$GLOBALS["lang"]['The Automatable metric captures the answer to the question <strong>Can an attacker automate exploitation events for this vulnerability across multiple targets?</strong> based on steps 1-4 of the kill chain. These steps are reconnaissance, weaponization, delivery, and exploitation (Not Defined, No, Yes).'] = 'Автоматизована метрика захоплює відповідь на питання <strong>Чи може атакувати автоматизовані заходи для цієї вразливості через кілька цілей?</strong> на основі кроків 1-4 мережі вбивця. Ці кроки є розвідувальними, зброджування, доставка та експлуатація (не визначилися, Ні, Так).';

$GLOBALS["lang"]['The CVE identifier.'] = 'ідентифікатор CVE.';

$GLOBALS["lang"]['The Cloud that owns this item. Links to <code>clouds.id</code>.'] = 'Хмара, що володіє цим елементом. Посилання <code>clouds.id</code>й';

$GLOBALS["lang"]['The Group used to run the Baseline. Links to <code>groups.id</code>.'] = 'Група використовується для запуску базиліки. Посилання <code>groups.id</code>й';

$GLOBALS["lang"]['The ID from the devices table (the devices.name will be displayed) of the NTU at this end of the connection. Links to <code>devices.id</code>.'] = 'Ідентифікатор з таблиці пристроїв (пристрої.name буде відображатися) НТУ в цьому кінці підключення. Посилання <code>devices.id</code>й';

$GLOBALS["lang"]['The ID from the imported benchmark policy.'] = 'Ідентифікатор з імпортної ланчової політики.';

$GLOBALS["lang"]['The ID from the locations table (the locations.name will be displayed) of this end of the connection. Links to <code>locations.id</code>. The A location is usually the <code>FROM</code> location.'] = 'Ідентифікатор з таблиці розташування (локації.name буде відображатися) цього кінця з\'єднання. Посилання <code>locations.id</code>й Місце розташування зазвичай <code>FROM</code> розташування.';

$GLOBALS["lang"]['The ID from the locations table (the locations.name will be displayed) of this end of the connection. Links to <code>locations.id</code>. The B location is usually the <code>TO</code> location.'] = 'Ідентифікатор з таблиці розташування (локації.name буде відображатися) цього кінця з\'єднання. Посилання <code>locations.id</code>й Розташування B зазвичай <code>TO</code> розташування.';

$GLOBALS["lang"]['The ID of the associated device (if any). Links to <code>devices.id</code>.'] = 'Ідентифікатор підключеного пристрою (за наявності). Посилання <code>devices.id</code>й';

$GLOBALS["lang"]['The ID of the associated discovery. Linked to <code>discoveries.id</code>'] = 'Ідентифікатор асоційованого відкриття. Посилання <code>discoveries.id</code>';

$GLOBALS["lang"]['The ID of the item of the associated type.'] = 'Ідентифікатор елемента асоційованого типу.';

$GLOBALS["lang"]['The ID of this orgs parent org. Linked to <code>orgs.id</code>'] = 'Ідентифікатор цього orgs батьківського org. Посилання <code>orgs.id</code>';

$GLOBALS["lang"]['The ID provided by the provider.'] = 'Ім\'я користувача';

$GLOBALS["lang"]['The ID retrieved from a Cloud discovery.'] = 'Ідентифікатор отримав від хмарного відкриття.';

$GLOBALS["lang"]['The IP address of this collector used to communicate with the server.'] = 'IP-адреса цього колектора використовується для зв\'язку з сервером.';

$GLOBALS["lang"]['The IP of the device to start a seed discovery with.'] = 'IP пристрою для запуску збирання насіння.';

$GLOBALS["lang"]['The IP of the external interface.'] = 'IP зовнішнього інтерфейсу.';

$GLOBALS["lang"]['The IP of the internal interface.'] = 'IP внутрішнього інтерфейсу.';

$GLOBALS["lang"]['The ISP or Telco providing this link.'] = 'ISP або Telco надає посилання.';

$GLOBALS["lang"]['The JSON record from Mitre.'] = 'Запис JSON від Mitre.';

$GLOBALS["lang"]['The JSON record from the NVD feed.'] = 'Запис JSON з корму NVD.';

$GLOBALS["lang"]['The LDAP OU of this user (if LDAP is used).'] = 'LDAP OU цього користувача (якщо LDAP використовується).';

$GLOBALS["lang"]['The Location that contains this network. Links to <code>locations.id</code>.'] = 'Місцезнаходження, що містить цю мережу. Посилання <code>locations.id</code>й';

$GLOBALS["lang"]['The NVD assigned base status.'] = 'NVD присвоєно базовий статус.';

$GLOBALS["lang"]['The Nmap timing preset.'] = 'Передавання карти Nmap.';

$GLOBALS["lang"]['The OS this package should be reported against. Blank for all. Use the percent sign % as a wildcard. Will be tested against os_group, os_family and os_name in that order.'] = 'Цей пакет OS повинен бути повідомлений проти. Помилки для всіх. Використовуйте знак відсотка % як дикої картки. Випробувано з os_group, os_family і os_name в цьому порядку.';

$GLOBALS["lang"]['The Open-AudIT API'] = 'Статус на сервери';

$GLOBALS["lang"]['The Open-AudIT id of the linked cloud. Links to <code>clouds.id</code>.'] = 'Open-AudIT id з пов\'язаної хмари. Посилання <code>clouds.id</code>й';

$GLOBALS["lang"]['The Open-AudIT server code was exeucted within this file.'] = 'Відкритий Цей файл був здійснений на сервері.';

$GLOBALS["lang"]['The Open-AudIT server code was exeucted within this function.'] = 'Відкритий Код сервера IT був здійснений в рамках цієї функції.';

$GLOBALS["lang"]['The Organisation that owns this item. Links to <code>orgs.id</code>.'] = 'Організація, яка володіє цим елементом. Посилання <code>orgs.id</code>й';

$GLOBALS["lang"]['The Process Identifier of the running associated discovery.'] = 'Процес видентифікатор роботи пов\'язаного відкриття.';

$GLOBALS["lang"]['The RU positon of the top of this device.'] = 'RU positon вершини цього пристрою.';

$GLOBALS["lang"]['The SNMP community string.'] = 'СНМП рядок спільноти.';

$GLOBALS["lang"]['The SNMP v3 Authentication Passphrase.'] = 'СНМП v3 аутентифікації Пасфрас.';

$GLOBALS["lang"]['The SNMP v3 Authentication Protocol.'] = 'Протокол аутентифікації SNMP v3.';

$GLOBALS["lang"]['The SNMP v3 Privacy Passphrase.'] = 'Статус на сервери';

$GLOBALS["lang"]['The SNMP v3 Privacy Protocol.'] = 'Протокол конфіденційності SNMP v3.';

$GLOBALS["lang"]['The SNMP v3 Security Level.'] = 'Рівень безпеки SNMP v3.';

$GLOBALS["lang"]['The SNMP v3 Security Name.'] = 'Назва безпеки SNMP v3.';

$GLOBALS["lang"]['The SNMPv3 context Engine ID (optional).'] = 'СНМПВ3 (за бажанням).';

$GLOBALS["lang"]['The SNMPv3 context Name (optional).'] = 'Ім\'я контексту SNMPv3 (необов\'язково).';

$GLOBALS["lang"]['The URL of the external system.'] = 'URL зовнішньої системи.';

$GLOBALS["lang"]['The URL of your Open-AudIT Server that this Collector will report to (no trailing slash).'] = 'URL вашого Open-AudIT Сервер, що цей колектор буде звітувати (без причепів)';

$GLOBALS["lang"]['The URL the audit scripts should submit their result to.'] = 'Списки аудиту URL повинні подати їх результат.';

$GLOBALS["lang"]['The actual full name of this user.'] = 'Повне ім’я користувача.';

$GLOBALS["lang"]['The associated baseline. Links to <code>baselines.id</code>.'] = 'Асоційована базова лінія. Посилання <code>baselines.id</code>й';

$GLOBALS["lang"]['The associated discovery (if required). Links to <code>discoveries.id</code>.'] = 'Асоційоване відкриття (за потреби). Посилання <code>discoveries.id</code>й';

$GLOBALS["lang"]['The attribute to test (from the <code>devices</code> table).'] = 'атрибут для тестування (з <code>devices</code> стіл.';

$GLOBALS["lang"]['The attribute to test (must match an external field name from below).'] = 'атрибут для тестування (підключіть назву зовнішнього поля знизу).';

$GLOBALS["lang"]['The audit script upon which to base your customisations.'] = 'Сценарій аудиту, на якому базувати ваші налаштування.';

$GLOBALS["lang"]['The base path from which to search for Users.'] = 'Базовий шлях від якого для пошуку користувачів.';

$GLOBALS["lang"]['The benchmark type.'] = 'Тип бендикта.';

$GLOBALS["lang"]['The building the rack is located in.'] = 'Будівля стійки знаходиться в.';

$GLOBALS["lang"]['The calculated number of devices to be created externally.'] = 'Розраховується кількість пристроїв, які створюються зовнішньо.';

$GLOBALS["lang"]['The calculated number of devices to be created in Open-AudIT.'] = 'Розраховано кількість пристроїв для створення в Open-AudIT.';

$GLOBALS["lang"]['The collectors internal IP used when it runs a discovery.'] = 'Знімки внутрішніх IP, що використовуються при його роботі.';

$GLOBALS["lang"]['The column name from the foreign table. Should be one of: class, environment, status, type or menu_category.'] = 'Назва стовпця з іноземного столу. Повинен бути одним з: клас, навколишнє середовище, статус, тип або меню_категорія.';

$GLOBALS["lang"]['The command executed upon the target device or Open-AudIT server code executed during discovery.'] = 'Команда, виконана за допомогою цільового пристрою або коду сервера Open-AudIT, виконаного під час відкриття.';

$GLOBALS["lang"]['The configuration of your cluster can be: <code>active/active</code>, <code>active/passive</code>, <code>N+1</code>, <code>N+M</code>, <code>N-to-1</code>, <code>N-to-N</code>, <code>other</code> or blank.'] = 'Конфігурація вашого кластера може бути: <code>active/active</code>й <code>active/passive</code>й <code>N+1</code>й <code>N+M</code>й <code>N-to-1</code>й <code>N-to-N</code>й <code>other</code> або порожній.';

$GLOBALS["lang"]['The credentials password. If the credentials are an SSH Key, this is the password used to unlock the key and is optional.'] = 'Пароль облікових даних. Якщо облікові дані є ключем SSH, це пароль, який використовується для розблокування ключа і є обов\'язковим.';

$GLOBALS["lang"]['The credentials username.'] = 'Ім\'я облікових записів.';

$GLOBALS["lang"]['The current status of the Cloud Discovery.'] = 'Поточний статус Cloud Discovery.';

$GLOBALS["lang"]['The current status of the discovery.'] = 'Поточний статус відкриття.';

$GLOBALS["lang"]['The dashboard that will be shown by default for this user. Links to <code>dashboards.id</code>.'] = 'За замовчуванням для цього користувача буде показано панель інструментів. Посилання <code>dashboards.id</code>й';

$GLOBALS["lang"]['The database version and web version are inconsistent.'] = 'Версія бази даних та веб-версія невідповідні.';

$GLOBALS["lang"]['The date of license expiration.'] = 'Термін дії ліцензії.';

$GLOBALS["lang"]['The date the software is discontinued by the manufacturer. Usually replaced by a newer version. Maintenance may still be available.'] = 'На сьогоднішній день програмне забезпечення припиняється виробником. Як правило, заміняється новою версією. Обслуговування може бути доступним.';

$GLOBALS["lang"]['The date the software no longer receives updates and is effectively discontinued altogether. Maintenance is discontinued.'] = 'На сьогоднішній день програмне забезпечення більше не отримує оновлення і ефективно припиняється. Заборонено обслуговування.';

$GLOBALS["lang"]['The date this item was changed or added (read only). NOTE - This is the timestamp from the server.'] = 'Дата цього елемента було змінено або додано (прочитано тільки). НЕБЕЗПЕЧА - Це часовий апарат з сервера.';

$GLOBALS["lang"]['The date/time when this result was created.'] = 'Дата/час, коли цей результат був створений.';

$GLOBALS["lang"]['The day of the month when this task should execute (* for every day).'] = 'день місяця, коли це завдання повинно виконуватися (* на кожен день).';

$GLOBALS["lang"]['The day of the week when this task should execute (* for every day).'] = 'день тижня, коли це завдання повинно виконуватися (* на кожен день).';

$GLOBALS["lang"]['The default language assigned to any user created by this method.'] = 'Мова за замовчуванням призначена для будь-якого користувача, створеного цим методом.';

$GLOBALS["lang"]['The device must respond to an Nmap ping before it is considered online.'] = 'Пристрій повинен реагувати на Nmap ping, перш ніж він вважається онлайн.';

$GLOBALS["lang"]['The device within Open-AudIT. Links to <code>devices.id</code>.'] = 'Пристрій в Open-AudIT. Посилання <code>devices.id</code>й';

$GLOBALS["lang"]['The direct link for the script is'] = 'Прямий посилання на скрипт';

$GLOBALS["lang"]['The email address of the reciever'] = 'Адреса електронної пошти reciever';

$GLOBALS["lang"]['The enterprise binary from FirstWave is required for a license. Please download Open-AudIT from'] = 'Підприємець з FirstWave необхідний для ліцензії. Завантажити Open-AudIT';

$GLOBALS["lang"]['The entire associated baseline this result is from.'] = 'Весь пов\'язаний базовий результат від.';

$GLOBALS["lang"]['The externally referenced location ID. Usually populated by Cloud audits.'] = 'Ідентифікатор зовнішнього розташування. Зазвичай, за допомогою хмарних перевірок.';

$GLOBALS["lang"]['The first time that Open-AudIT retrieved details of this device.'] = 'Перший раз, коли Open-AudIT отримує деталі цього пристрою.';

$GLOBALS["lang"]['The floor the rack is located on.'] = 'Підлога стійка розташована на.';

$GLOBALS["lang"]['The foreign table to reference. Should be one of: devices, locations, orgs or queries.'] = 'Іноземний стіл на посилання. Повинен бути одним з: пристрої, місця розташування, оргс або запити.';

$GLOBALS["lang"]['The format used for the output to be emailed.'] = 'Формат, який використовується для виходу на електронну пошту.';

$GLOBALS["lang"]['The fully qualified column upon which to group by. NOTE: When type = traffic, this represents the red query id.'] = 'Повний кваліфікований стовпчик, на який групувати. НЕБЕ: Коли тип = трафік, це являє собою червоний запит.';

$GLOBALS["lang"]['The fully qualified table.column. Multiple may be provided, separated by a comma (no spaces).'] = 'Повний кваліфікований стіл.column. Кілька може бути надана, відокремлена комою (без пробілів).';

$GLOBALS["lang"]['The generated SQL query to test for this vulnerability. This field can be edited to correct the query as required.'] = 'Згенерований SQL запитів для тестування для цієї вразливості. Це поле можна редагувати для виправлення запиту.';

$GLOBALS["lang"]['The group of devices on which the baseline was run against.'] = 'Група пристроїв, на яких працює базова лінія.';

$GLOBALS["lang"]['The group that provides a list of devices for the integration. Links to <code>groups.id</code>.'] = 'Група, яка забезпечує перелік пристроїв для інтеграції. Посилання <code>groups.id</code>й';

$GLOBALS["lang"]['The hour of the day when this task should execute (* for every hour).'] = 'Час дня, коли це завдання повинно виконуватися (* за кожну годину).';

$GLOBALS["lang"]['The id of the linked device. Links to <code>devices.id</code>'] = 'id з підключеного пристрою. Посилання <code>devices.id</code>';

$GLOBALS["lang"]['The identifier column (integer) in the database (read only).'] = 'Текстовий стовпчик (інтегер) в базі даних (читати тільки).';

$GLOBALS["lang"]['The importance of this baseline (not used yet).'] = 'Важливість цієї базової лінії (не використовується ще).';

$GLOBALS["lang"]['The integer of severity.'] = 'Цілі тяжкості.';

$GLOBALS["lang"]['The ip address of the Auth method.'] = 'Іп-адреса методу Auth.';

$GLOBALS["lang"]['The language to translate the web interface into for the user.'] = 'Мова для перекладу веб-інтерфейсу для користувача.';

$GLOBALS["lang"]['The last date and time this item was executed (read only).'] = 'Остання дата і час виконання цього елемента (прочитати тільки).';

$GLOBALS["lang"]['The last time that Open-AudIT retrieved details of this device.'] = 'Останній раз, що Open-AudIT отримує деталі цього пристрою.';

$GLOBALS["lang"]['The last time this benchmarks was executed.'] = 'Останнім часом було виконано еталони.';

$GLOBALS["lang"]['The last time this integration was run.'] = 'Останній раз ця інтеграція була запущена.';

$GLOBALS["lang"]['The line number assigned by the provider to the line at this end of the connection.'] = 'Номер лінії, призначеного постачальником до лінії в цьому кінці підключення.';

$GLOBALS["lang"]['The location the rack is located in. Links to <code>locations.id</code>.'] = 'Розташування стійки знаходиться в. Посилання <code>locations.id</code>й';

$GLOBALS["lang"]['The locations address.'] = 'Адреса розташування.';

$GLOBALS["lang"]['The locations area.'] = 'Площа розташування.';

$GLOBALS["lang"]['The locations city.'] = 'Місто розташування.';

$GLOBALS["lang"]['The locations country.'] = 'Країна розташування.';

$GLOBALS["lang"]['The locations district.'] = 'Район розташування.';

$GLOBALS["lang"]['The locations latitude.'] = 'Розташування розташування.';

$GLOBALS["lang"]['The locations level.'] = 'Рівень розташування.';

$GLOBALS["lang"]['The locations longitude.'] = 'Розташування довготи.';

$GLOBALS["lang"]['The locations phone.'] = 'Телефон розташування';

$GLOBALS["lang"]['The locations postcode.'] = 'Поштовий індекс';

$GLOBALS["lang"]['The locations region.'] = 'Область розташування.';

$GLOBALS["lang"]['The locations room.'] = 'Номери готелю.';

$GLOBALS["lang"]['The locations state.'] = 'Стан розташування.';

$GLOBALS["lang"]['The locations suburb.'] = 'Розташування передмістя.';

$GLOBALS["lang"]['The locations suite.'] = 'Полулюкс';

$GLOBALS["lang"]['The maximum physical weight (in KGs) this rack can hold.'] = 'Максимальна фізична вага (в КГ) ця стійка може триматися.';

$GLOBALS["lang"]['The maximum total BTUs this rack is rated for.'] = 'Максимальний загальний BTUs цей стелаж оцінюється.';

$GLOBALS["lang"]['The minute of the hour when this task should execute (* for every minute).'] = 'За хвилину години, коли це завдання повинно виконуватися (* за кожну хвилину).';

$GLOBALS["lang"]['The month of the year when this task should execute (* for every month).'] = 'місяць року, коли це завдання повинно виконуватися (* на місяць).';

$GLOBALS["lang"]['The name given to this item.'] = 'Назва, надана цим елементом.';

$GLOBALS["lang"]['The name given to this item. Ideally it should be unique.'] = 'Назва, надана цим елементом. В ідеалі вона повинна бути унікальною.';

$GLOBALS["lang"]['The name given to this user (used to login). Ideally it should be unique.'] = 'Ім\'я користувача (використано логіном). В ідеалі вона повинна бути унікальною.';

$GLOBALS["lang"]['The name of the associated cloud (if required).'] = 'Назва пов\'язаної хмари (за потреби).';

$GLOBALS["lang"]['The name of the software package, as audited by Open-AudIT. Use the percent sign % as a wildcard.'] = 'Назва програмного пакету, як перевірена Open-AudIT. Використовуйте знак відсотка % як дикої картки.';

$GLOBALS["lang"]['The name of the user who last changed or added this item (read only).'] = 'Ім\'я користувача, який за останні змінив або додано цей елемент (прочитати тільки).';

$GLOBALS["lang"]['The name provided by the provider.'] = 'Ім\'я, що надається провайдером.';

$GLOBALS["lang"]['The network in the format 192.168.1.0/24.'] = 'Мережа у форматі 192.168.1.0/24.';

$GLOBALS["lang"]['The network subnet to execute the discovery on.'] = 'Підмережа для виконання відкриття.';

$GLOBALS["lang"]['The number of RUs this device occupies.'] = 'Кількість RUs цей пристрій займає.';

$GLOBALS["lang"]['The number of associated locations. Links to <code>locations.cloud_id</code>.'] = 'Кількість асоційованих місць. Посилання <code>locations.cloud_id</code>й';

$GLOBALS["lang"]['The number of associated networks. Links to <code>networks.cloud_id</code>.'] = 'Кількість пов\'язаних мереж. Посилання <code>networks.cloud_id</code>й';

$GLOBALS["lang"]['The number of audited devices in this cloud. Links to <code>devices.cloud_id</code> and <code>devices.serial</code>.'] = 'Кількість перевірених пристроїв у цій хмарі. Посилання <code>devices.cloud_id</code> і <code>devices.serial</code>й';

$GLOBALS["lang"]['The number of critical severity vulnerabilities held by FirstWave (not in your database).'] = 'Кількість критичних вразливостей, що проводяться компанією FirstWave (не в базі даних).';

$GLOBALS["lang"]['The number of devices found by this discovery.'] = 'Кількість пристроїв, знайдених цим відкриттям.';

$GLOBALS["lang"]['The number of devices in the associated group.'] = 'Кількість пристроїв в асоційованій групі.';

$GLOBALS["lang"]['The number of devices in this cloud with a state of running. Links to <code>devices.cloud_id</code> and <code>devices.instance_state</code>.'] = 'Кількість пристроїв в цій хмарі з станом бігу. Посилання <code>devices.cloud_id</code> і <code>devices.instance_state</code>й';

$GLOBALS["lang"]['The number of devices in this cloud with a state of stopped. Links to <code>devices.cloud_id</code> and <code>devices.instance_state</code>.'] = 'Кількість пристроїв в цій хмарі з станом зупинення. Посилання <code>devices.cloud_id</code> і <code>devices.instance_state</code>й';

$GLOBALS["lang"]['The number of devices in this cloud. Links to <code>devices.cloud_id</code>.'] = 'Кількість пристроїв в цій хмарі. Посилання <code>devices.cloud_id</code>й';

$GLOBALS["lang"]['The number of devices this benchmark will be executed upon. Derived from <code>benchmarks.devices</code>.'] = 'Кількість пристроїв, які маркуються. Прибув з <code>benchmarks.devices</code>й';

$GLOBALS["lang"]['The number of devices to limit this discovery to.'] = 'Кількість пристроїв для обмеження цього відкриття.';

$GLOBALS["lang"]['The number of high severity vulnerabilities held by FirstWave (not in your database).'] = 'Кількість вразливостей високої тяжкості, що проводяться компанією FirstWave (не в базі даних).';

$GLOBALS["lang"]['The number of low severity vulnerabilities held by FirstWave (not in your database).'] = 'Кількість невисоких вразливостей, що проводяться компанією FirstWave (не в базі даних).';

$GLOBALS["lang"]['The number of medium severity vulnerabilities held by FirstWave (not in your database).'] = 'Кількість вразливостей середньої тяжкості, що проводяться компанією FirstWave (не в базі даних).';

$GLOBALS["lang"]['The number of purchased licenses.'] = 'Кількість придбаних ліцензій.';

$GLOBALS["lang"]['The number of seconds to try and communicate with the target IP.'] = 'Кількість секунд, щоб спробувати і спілкуватися з цільовим IP.';

$GLOBALS["lang"]['The number of vulnerabilities without a severity held by FirstWave (not in your database).'] = 'Кількість вразливостей без тяжкості, що проводиться компанією FirstWave (не в базі даних).';

$GLOBALS["lang"]['The optional secondary column. NOTE: When type = traffic, this represents the yellow query id.'] = 'Додатковий вторинний стовпчик. НЕБЕ: Коли тип = трафік, це являє собою жовтий запит.';

$GLOBALS["lang"]['The optional third column. NOTE: When type = traffic, this represents the green query id.'] = 'Додатковий третій стовпчик. НЕБЕ: Коли тип = трафік, це являє собою зелену запиту.';

$GLOBALS["lang"]['The orientation of this device.'] = 'Консультація даного пристрою.';

$GLOBALS["lang"]['The password for the dn_account attribute.'] = 'Пароль для атрибута dn_account.';

$GLOBALS["lang"]['The password used to access the external system.'] = 'Пароль використовується для доступу до зовнішньої системи.';

$GLOBALS["lang"]['The path to the file or directory.'] = 'Шлях до файлу або каталогу.';

$GLOBALS["lang"]['The path to the file or directory. Directories should end with a trailing slash.'] = 'Шлях до файлу або каталогу. Директорії повинні закінчитися причепом.';

$GLOBALS["lang"]['The physical depth (in CMs) of the rack.'] = 'Фізична глибина (в КМ) стійка.';

$GLOBALS["lang"]['The physical height (in CMs) of the rack.'] = 'Фізична висота (в см) стійки.';

$GLOBALS["lang"]['The physical weight (in KGs) of the rack at present.'] = 'Фізична вага (в КГ) стійки в даний час.';

$GLOBALS["lang"]['The physical weight (in KGs) of the rack when empty.'] = 'Фізична вага (в КГ) стійки при порожні.';

$GLOBALS["lang"]['The physical width (in CMs) of the rack.'] = 'Фізична ширина (в см) стійки.';

$GLOBALS["lang"]['The pod (if any) that this rack is part of.'] = 'Під (за наявності) цей стелаж є частиною.';

$GLOBALS["lang"]['The power circuit this rack attaches to.'] = 'Схема живлення цієї стійки прикріплює до.';

$GLOBALS["lang"]['The primary database table upon which to base this widget.'] = 'Початкова таблиця бази даних, на якій базується цей віджет.';

$GLOBALS["lang"]['The process identifier of this queue item.'] = 'Процес ідентифікатор даного пункту черги.';

$GLOBALS["lang"]['The process that was used last to retrieve details about the device'] = 'Процес, який був використаний останнім, щоб отримати деталі про пристрій';

$GLOBALS["lang"]['The query that provides a list of devices for the integration. Links to <code>queries.id</code>.'] = 'Перевага, яка забезпечує перелік пристроїв для інтеграції. Посилання <code>queries.id</code>й';

$GLOBALS["lang"]['The rack asset number.'] = 'Кількість стійок.';

$GLOBALS["lang"]['The rack asset tag.'] = 'Тег стійки активу.';

$GLOBALS["lang"]['The rack bar code.'] = 'Код стійки.';

$GLOBALS["lang"]['The rack model.'] = 'Модель стійки.';

$GLOBALS["lang"]['The rack serial.'] = 'Строк серійний.';

$GLOBALS["lang"]['The rack series.'] = 'Серія стелажів.';

$GLOBALS["lang"]['The rack this device is located in. Links to <code>racks.id</code>.'] = 'Стійка цього пристрою знаходиться в. Посилання <code>racks.id</code>й';

$GLOBALS["lang"]['The recommended process of addressing and fixing identified security vulnerabilities. This typically involves applying patches, updates, or other measures to eliminate the risk posed by the vulnerabilities.'] = 'Рекомендований процес адресування та фіксації виявлених вразливостей безпеки. Це, як правило, передбачає застосування патчів, оновлень або інших заходів для усунення ризику, встановлених вразливостями.';

$GLOBALS["lang"]['The regular domain notation of your directory. Eg - <code>open-audit.lan</code>.'] = 'Регулярне позначення домену вашого каталогу. Ег - <code>open-audit.lan</code>й';

$GLOBALS["lang"]['The result of the command.'] = 'Результат команди.';

$GLOBALS["lang"]['The room the rack is located in.'] = 'У номері стійка знаходиться.';

$GLOBALS["lang"]['The row the rack is located in.'] = 'Ряд стійки знаходиться в.';

$GLOBALS["lang"]['The secret key used in conjunction with your AWS EC2 API key.'] = 'Секретний ключ, який використовується в поєднанні з ключем API AWS EC2.';

$GLOBALS["lang"]['The software end-of-life date.'] = 'Програма end-of-life';

$GLOBALS["lang"]['The software end-of-service-life date.'] = 'Програма end-of-service-life дата.';

$GLOBALS["lang"]['The specific database column from the specified database table.'] = 'Спеціальний стовпчик бази даних з таблиці бази даних.';

$GLOBALS["lang"]['The specific database table.'] = 'Таблиця бази даних.';

$GLOBALS["lang"]['The standard Nmap timing options. We usually use -T4 (Aggressive) as this is recommended for a decent broadband or ethernet connection.'] = 'Стандартні параметри термінів Nmap. Ми зазвичай використовуємо -T4 (Aggressive) як це рекомендується для гідного широкосмугового або ефірного підключення.';

$GLOBALS["lang"]['The status of this integration'] = 'Статус на сервери';

$GLOBALS["lang"]['The status of this queued item.'] = 'Статус на сервери';

$GLOBALS["lang"]['The target IP this log entry referers to (if any).'] = 'Цільовий IP-адреса входу в журнал (за наявності).';

$GLOBALS["lang"]['The template for the link to be generated per result line.'] = 'Шаблон за посилання, щоб бути створеним на результат лінії.';

$GLOBALS["lang"]['The text for the bottom of the chart in a line chart (only).'] = 'Текст для нижньої діаграми в діаграмі лінії (тільки).';

$GLOBALS["lang"]['The text that is displayed.'] = 'Текст, який відображається.';

$GLOBALS["lang"]['The timestamp after which, this task should run. For example, run a task after the 1st June 2017 at 10am, set it to <code>2017-06-01 09:59:00</code>. This value should be zero padded (ie, 09, not 9). This value defaults to <code>2000-01-01 00:00:00</code> which means by default, a scheduled task will run at next scheduled execution time.'] = 'Після того, як це завдання повинно працювати. Наприклад, запустіть завдання після 1-го червня 2017 в 10 ранку, встановіть його до <code>2017-06-01 09:59:00</code>й Ця вартість повинна бути нульовою прокладкою (тобто 09, не 9). Це значення за замовчуванням <code>2000-01-01 00:00:00</code> що означає за замовчуванням, заплановане завдання буде виконуватися на наступний запланований термін виконання.';

$GLOBALS["lang"]['The top 10, 100 or 1000 (or none) TCP ports commonly in use according to Nmap.'] = 'Топ 10, 100 або 1000 (або немає) TCP портів, які зазвичай використовують за Nmap.';

$GLOBALS["lang"]['The top 10, 100 or 1000 (or none) UDP ports commonly in use according to Nmap.'] = 'Топ 10, 100 або 1000 (або немає) портів УДП, зазвичай в використанні згідно з Nmap.';

$GLOBALS["lang"]['The total BTU output by this rack.'] = 'Загальний випуск BTU за допомогою цієї стійки.';

$GLOBALS["lang"]['The type of device.'] = 'Тип пристрою.';

$GLOBALS["lang"]['The type of organisation.'] = 'Тип організації.';

$GLOBALS["lang"]['The type of rack (compute, power, network, etc).'] = 'Тип стійки (комп\'ютер, потужність, мережа тощо).';

$GLOBALS["lang"]['The type of task to run. One of: baseline, benchmark, cloud discovery, discovery, integration, report, query.'] = 'Тип завдання для запуску. Один з: базовий, еталон, відкриття, інтеграція, звіт, запит.';

$GLOBALS["lang"]['The type of the integration (usually named after the external system).'] = 'Тип інтеграції (як правило, названа зовнішніми системами).';

$GLOBALS["lang"]['The unique identifier of this server.'] = 'Унікальний ідентифікатор цього сервера.';

$GLOBALS["lang"]['The user account this collector uses. Links to <code>users.id</code>.'] = 'Використовується цей колектор. Посилання <code>users.id</code>й';

$GLOBALS["lang"]['The username used to access the external system.'] = 'Ім\'я користувача, що використовується для доступу до зовнішньої системи.';

$GLOBALS["lang"]['The users email address.'] = 'Адреса електронної пошти користувачів.';

$GLOBALS["lang"]['The usual hours of operation at this site.'] = 'Звичайні години роботи на цьому сайті.';

$GLOBALS["lang"]['The value assigned to the item.'] = 'Значення, призначене до пункту.';

$GLOBALS["lang"]['The value that is stored for this particular item.'] = 'Вартість, яка зберігається для цього конкретного елементу.';

$GLOBALS["lang"]['The vendor name as per CPE entries.'] = 'Назва постачальника в якості записів CPE.';

$GLOBALS["lang"]['The vendor taken from the CPE.'] = 'Компанія, що приймається з CPE.';

$GLOBALS["lang"]['The web directory on the host that Open-AudIT is installed (requires a trailing slash).'] = 'Веб-каталог на хості, який встановлюється Open-AudIT (потрібно причіпний стібок).';

$GLOBALS["lang"]['The widget at position '] = 'Віджет на позиції ';

$GLOBALS["lang"]['The width of this device.'] = 'Ширина даного пристрою.';

$GLOBALS["lang"]['Then'] = 'Далі';

$GLOBALS["lang"]['This CVE will be retrieved and overwrite the existing CVE if it exists.'] = 'Цей CVE буде відновлено і перезаписати існуючий CVE, якщо він існує.';

$GLOBALS["lang"]['This attribute is stored as a JSON object. It is the list of all collections and contains the collection name along with <code>c</code>, <code>r</code>, <code>u</code> and,or <code>d</code> which represent create, read, update and delete. These are the actions a user can perform on items from that particular collection.'] = 'Цей атрибут зберігається як об\'єкт JSON. Список всіх колекцій і містить назву колекції разом з <code>c</code>й <code>r</code>й <code>u</code> й <code>d</code> які представляють собою створення, читання, оновлення та видалення. Ці дії користувач може виконуватися на предметах з тієї чи іншої колекції.';

$GLOBALS["lang"]['This can be either a varchar (a text field), a list (a list of values that can be selected) or a date.'] = 'Це може бути як вархар (текстове поле), список (список значень, які можна вибрати) або дати.';

$GLOBALS["lang"]['This collectors universally unique identifier.'] = 'Цей колектор універсально унікальний ідентифікатор.';

$GLOBALS["lang"]['This description is auto-populated and should ideally be left as-is.'] = 'Цей опис автоматично розповсюджується і має бути ідеально лівим.';

$GLOBALS["lang"]['This feature requires a Professional or an Enterprise license.'] = 'Ця функція вимагає професійної або корпоративної ліцензії.';

$GLOBALS["lang"]['This is generally the primary column, unless otherwise configured. NOTE: When type = traffic, this represents the secondary text.'] = 'Це, як правило, первинний стовпчик, якщо інше налаштовано. УВАГА: Коли тип = трафік, це являє собою вторинний текст.';

$GLOBALS["lang"]['This item must match the value of the attribute selected or contains the ID of the query to be used.'] = 'Цей елемент повинен відповідати значенням вибраного атрибуту або містить ідентифікатор запиту, який буде використовуватися.';

$GLOBALS["lang"]['This item must match the value of the attribute selected.'] = 'Цей елемент повинен відповідати значенням вибраного атрибуту.';

$GLOBALS["lang"]['This license expires on'] = 'Ця ліцензія закінчується на';

$GLOBALS["lang"]['This should be set to either 1 or the height of the rack.'] = 'Це має бути встановлена до 1 або висоти стійки.';

$GLOBALS["lang"]['This will auto-populate.'] = 'Це буде автоматично.';

$GLOBALS["lang"]['This will considerably slow the discovery scan.'] = 'Це значно сповільнить сканування відкриття.';

$GLOBALS["lang"]['Thursday'] = 'Четвер';

$GLOBALS["lang"]['time_caption'] = 'Час затримання';

$GLOBALS["lang"]['Time Caption'] = 'Час затримання';

$GLOBALS["lang"]['time_daylight'] = 'Погода';

$GLOBALS["lang"]['Time Daylight'] = 'Погода';

$GLOBALS["lang"]['Time to Execute'] = 'Час виконання';

$GLOBALS["lang"]['timeout'] = 'Розклад';

$GLOBALS["lang"]['Timeout'] = 'Розклад';

$GLOBALS["lang"]['Timeout Per Target (Seconds)'] = 'Час за Ціль (Seconds)';

$GLOBALS["lang"]['Timesatamp'] = 'Мапа';

$GLOBALS["lang"]['Timestamp'] = 'Таймер';

$GLOBALS["lang"]['timing'] = 'Тим';

$GLOBALS["lang"]['Timing'] = 'Тим';

$GLOBALS["lang"]['Timor-Leste'] = 'Тимор-Ліста';

$GLOBALS["lang"]['Title'] = 'Головна';

$GLOBALS["lang"]['Togo'] = 'Того';

$GLOBALS["lang"]['Tokelau'] = 'Токелау';

$GLOBALS["lang"]['Tonga'] = 'Тонга';

$GLOBALS["lang"]['toolbar_style'] = 'Стиль панелі інструментів';

$GLOBALS["lang"]['Toolbar Style'] = 'Стиль панелі інструментів';

$GLOBALS["lang"]['Top Nmap TCP Ports'] = 'Топ Nmap TCP порти';

$GLOBALS["lang"]['Top Nmap UDP Ports'] = 'Топ Nmap порти UDP';

$GLOBALS["lang"]['Traditional Chinese'] = 'Традиційна китайська';

$GLOBALS["lang"]['Traffic Light'] = 'світлофора';

$GLOBALS["lang"]['Trinidad and Tobago'] = 'Тринідад і Тобаго';

$GLOBALS["lang"]['Troubleshooting LDAP Logins'] = 'Виправлення несправностей LDAP Увійти';

$GLOBALS["lang"]['Try all the latest features with a FREE 100 device license of Open-AudIT Enterprise. Please read the <a href=\"'] = 'Спробуйте всі останні функції з безкоштовною ліцензією на пристрої Open-AudIT Enterprise. Будь ласка, прочитайте <a href=\"';

$GLOBALS["lang"]['Tuesday'] = 'П\'ятниця';

$GLOBALS["lang"]['Tunisia'] = 'Туніс';

$GLOBALS["lang"]['Turkey'] = 'Туреччина';

$GLOBALS["lang"]['Turkmenistan'] = 'Туркменістан';

$GLOBALS["lang"]['Turks and Caicos Islands'] = 'Турки та Кайкосові острови';

$GLOBALS["lang"]['Tuvalu'] = 'Тувалу';

$GLOBALS["lang"]['tx_bitrate'] = 'Tx бітрейт';

$GLOBALS["lang"]['Tx Bitrate'] = 'Tx бітрейт';

$GLOBALS["lang"]['tx_freq'] = 'Ткс Фрак';

$GLOBALS["lang"]['Tx Freq'] = 'Ткс Фрак';

$GLOBALS["lang"]['tx_level'] = 'Рівень Tx';

$GLOBALS["lang"]['Tx Level'] = 'Рівень Tx';

$GLOBALS["lang"]['tx_power'] = 'Потужність Tx';

$GLOBALS["lang"]['Tx Power'] = 'Потужність Tx';

$GLOBALS["lang"]['tx_profile'] = 'Профіль Tx';

$GLOBALS["lang"]['Tx Profile'] = 'Профіль Tx';

$GLOBALS["lang"]['type'] = 'Тип';

$GLOBALS["lang"]['Type'] = 'Тип';

$GLOBALS["lang"]['URL'] = 'Контакти';

$GLOBALS["lang"]['uuid'] = 'УУЇД';

$GLOBALS["lang"]['UUID'] = 'УУЇД';

$GLOBALS["lang"]['udp_ports'] = 'Порти Udp';

$GLOBALS["lang"]['Udp Ports'] = 'Порти Udp';

$GLOBALS["lang"]['Uganda'] = 'Уганда';

$GLOBALS["lang"]['Ukraine'] = 'Україна';

$GLOBALS["lang"]['uninstall'] = 'Зареєструватися';

$GLOBALS["lang"]['Uninstall'] = 'Зареєструватися';

$GLOBALS["lang"]['Uninstall the Agent'] = 'Видаліть агент';

$GLOBALS["lang"]['United Arab Emirates'] = 'Об\'єднані Арабські Емірати';

$GLOBALS["lang"]['United Kingdom'] = 'Велика Британія';

$GLOBALS["lang"]['United States Minor Outlying Islands'] = 'Сполучені Штати Мінор Outlying Islands';

$GLOBALS["lang"]['United States Virgin Islands'] = 'США Віргінські острови';

$GLOBALS["lang"]['United States of America'] = 'Сполучені Штати Америки';

$GLOBALS["lang"]['Unknown'] = 'Невідомо';

$GLOBALS["lang"]['unlock_pin'] = 'Розблокувати шпильку';

$GLOBALS["lang"]['Unlock Pin'] = 'Розблокувати шпильку';

$GLOBALS["lang"]['Unscheduled'] = 'Несподівано';

$GLOBALS["lang"]['Unused as at 5.2.0.'] = 'Невикористаний як на 5.2.0.';

$GLOBALS["lang"]['Unused.'] = 'Непристойна.';

$GLOBALS["lang"]['Update'] = 'Новини';

$GLOBALS["lang"]['update_external_count'] = 'Оновлення зовнішнього графа';

$GLOBALS["lang"]['Update External Count'] = 'Оновлення зовнішнього графа';

$GLOBALS["lang"]['update_external_from_internal'] = 'Оновлення зовнішнього від внутрішнього';

$GLOBALS["lang"]['Update External From Internal'] = 'Оновлення зовнішнього від внутрішнього';

$GLOBALS["lang"]['update_internal_count'] = 'Оновлення внутрішнього обліку';

$GLOBALS["lang"]['Update Internal Count'] = 'Оновлення внутрішнього обліку';

$GLOBALS["lang"]['update_internal_from_external'] = 'Оновлення внутрішнього з зовнішнього';

$GLOBALS["lang"]['Update Internal From External'] = 'Оновлення внутрішнього з зовнішнього';

$GLOBALS["lang"]['Update NMIS Devices from Open-AudIT'] = 'Оновлення пристроїв NMIS від Open-AudIT';

$GLOBALS["lang"]['Update Open-AudIT Devices from '] = 'Оновлення Open-AudIT Пристрої від ';

$GLOBALS["lang"]['Update Open-AudIT Devices from NMIS'] = 'Оновлення Open-AudIT Пристрої від NMIS';

$GLOBALS["lang"]['Updated each time discovery has been executed with IPs detected to be responding.'] = 'Оновлено кожен раз відкриття виконано з IP-адресами, виявлених для реагування.';

$GLOBALS["lang"]['Updated each time discovery has been executed with IPs that have been scanned by Nmap.'] = 'Оновлено кожен раз відкриття виконано з IP-адресами, які були відскановані Nmap.';

$GLOBALS["lang"]['Updated each time discovery has been executed with devices we were able to audit.'] = 'Оновлено кожен раз відкриття виконано з пристроями, які ми змогли аудит.';

$GLOBALS["lang"]['Updated each time discovery has been executed with devices we were able to query.'] = 'Оновлено кожен раз відкриття було виконано з пристроями, які ми змогли переробити.';

$GLOBALS["lang"]['Updated each time discovery has been executed.'] = 'Оновлено кожен раз відкриття.';

$GLOBALS["lang"]['Updated each time the discovery has been executed.'] = 'Оновлено кожного разу, коли було виконано відкриття.';

$GLOBALS["lang"]['Updated each time the discovery has completed execution.'] = 'Оновлено кожен раз відкриття завершено.';

$GLOBALS["lang"]['Updating'] = 'Поповнення';

$GLOBALS["lang"]['Upgrade'] = 'Оновити';

$GLOBALS["lang"]['Upload an audit result file'] = 'Завантажте файл результату аудиту';

$GLOBALS["lang"]['Upper Case'] = 'Верхній корпус';

$GLOBALS["lang"]['uptime'] = 'Час';

$GLOBALS["lang"]['Uptime'] = 'Час';

$GLOBALS["lang"]['url'] = 'Урл';

$GLOBALS["lang"]['Url'] = 'Урл';

$GLOBALS["lang"]['Uruguay, Eastern Republic of'] = 'Уругвай, Східна Республіка';

$GLOBALS["lang"]['usb'] = 'Умань';

$GLOBALS["lang"]['Usb'] = 'Умань';

$GLOBALS["lang"]['use'] = 'Зареєструватися';

$GLOBALS["lang"]['Use'] = 'Зареєструватися';

$GLOBALS["lang"]['use_authentication'] = 'Використання аутентифікації';

$GLOBALS["lang"]['Use Authentication'] = 'Використання аутентифікації';

$GLOBALS["lang"]['use_authorisation'] = 'Авторизація';

$GLOBALS["lang"]['Use Authorisation'] = 'Авторизація';

$GLOBALS["lang"]['Use SNMP'] = 'Використання SNMP';

$GLOBALS["lang"]['Use SSH'] = 'Використання SSH';

$GLOBALS["lang"]['Use Secure (LDAPS)'] = 'Використовуйте безпечні (LDAPS)';

$GLOBALS["lang"]['Use Service Version Detection'] = 'Використовуйте послугу виявлення';

$GLOBALS["lang"]['Use WMI'] = 'Використання WMI';

$GLOBALS["lang"]['Use for Authentication'] = 'Використання для аутентифікації';

$GLOBALS["lang"]['Use for Roles'] = 'Використання для ролей';

$GLOBALS["lang"]['used'] = 'Використовується';

$GLOBALS["lang"]['Used'] = 'Використовується';

$GLOBALS["lang"]['used_count'] = 'Використовується граф';

$GLOBALS["lang"]['Used Count'] = 'Використовується граф';

$GLOBALS["lang"]['Used by OpenLDAP only.'] = 'Використовується тільки OpenLDAP.';

$GLOBALS["lang"]['Used internally when discovering a single device.'] = 'Використовується внутрішньо при відкритті одного пристрою.';

$GLOBALS["lang"]['Used internally when discovering a single device. Links to <code>devices.id</code>.'] = 'Використовується внутрішньо при відкритті одного пристрою. Посилання <code>devices.id</code>й';

$GLOBALS["lang"]['Used when LDAP servers have been configured to populate a users details - this includes the Orgs to which they have access. If a user is in this LDAP group, they are assigned this org.'] = 'Використовуються при налаштуванні серверів LDAP для розміщення деталей користувачів - це включає в себе Orgs, до яких вони мають доступ. Якщо користувач знаходиться в цій групі LDAP, вони призначають цей org.';

$GLOBALS["lang"]['Used when LDAP servers have been configured to populate a users details - this includes the Roles which they are assigned. If a user is in this LDAP group, they are assigned this role.'] = 'Використовується при налаштуванні серверів LDAP для розміщення деталей користувачів - це включає в себе ролі, які вони призначені. Якщо користувач знаходиться в цій групі LDAP, вони призначають цю роль.';

$GLOBALS["lang"]['Used when searching OpenLDAP to match a users uid to a groups members. Default of <code>memberUid</code>. Used by OpenLDAP only.'] = 'Використовуйте при пошуку OpenLDAP, щоб відповідати користувачам, які мають відношення до членів групи. За замовчуванням <code>memberUid</code>й Використовується тільки OpenLDAP.';

$GLOBALS["lang"]['Used with Integrations and FirstWave monitoring applications.'] = 'Використовуються з інтеграціями та програмами моніторингу.';

$GLOBALS["lang"]['Used with Integrations and FirstWave monitoring applications. Set to y if working SNMP detected by discovery.'] = 'Використовуються з інтеграціями та програмами моніторингу. Встановити до y, якщо працює SNMP виявлений відкриттям.';

$GLOBALS["lang"]['user'] = 'Користувач';

$GLOBALS["lang"]['User'] = 'Користувач';

$GLOBALS["lang"]['User DN'] = 'Користувач DN';

$GLOBALS["lang"]['user_group'] = 'Група користувачів';

$GLOBALS["lang"]['User Group'] = 'Група користувачів';

$GLOBALS["lang"]['user_id'] = 'Ім\'я користувача';

$GLOBALS["lang"]['User ID'] = 'Ім\'я користувача';

$GLOBALS["lang"]['user_interaction'] = 'Користувачі';

$GLOBALS["lang"]['User Interaction'] = 'Користувачі';

$GLOBALS["lang"]['User Membership Attribute'] = 'Атрибут користувачів';

$GLOBALS["lang"]['user_name'] = 'Ім\'я користувача';

$GLOBALS["lang"]['User Name'] = 'Ім\'я користувача';

$GLOBALS["lang"]['User Policies'] = 'Політика користувача';

$GLOBALS["lang"]['Username'] = 'Логін';

$GLOBALS["lang"]['username'] = 'Логін';

$GLOBALS["lang"]['users'] = 'Користувачі';

$GLOBALS["lang"]['Users'] = 'Користувачі';

$GLOBALS["lang"]['Users, Roles and Orgs'] = 'Користувачі, Ролі та оргії';

$GLOBALS["lang"]['Using Entra for Auth'] = 'Використання Entra для Auth';

$GLOBALS["lang"]['Using OKTA for Auth'] = 'Використання OKTA для Auth';

$GLOBALS["lang"]['Usually Mb/s, from Location A.'] = 'Зазвичай Мб/с, від Місцезнаходження А.';

$GLOBALS["lang"]['Usually Mb/s, from Location B.'] = 'Зазвичай Мб/с, від Місцезнаходження Б.';

$GLOBALS["lang"]['Usually Mb/s, to Location A.'] = 'Зазвичай Мб/с, для Розташування А.';

$GLOBALS["lang"]['Usually Mb/s, to Location B.'] = 'Зазвичай Мб/с, до місця розташування Б.';

$GLOBALS["lang"]['Uzbekistan'] = 'Українська';

$GLOBALS["lang"]['VLAN'] = 'ВЛАС';

$GLOBALS["lang"]['VLAN ID'] = 'ВЛАСТИВОСТІ';

$GLOBALS["lang"]['valid_from'] = 'Дійсно Від';

$GLOBALS["lang"]['Valid From'] = 'Дійсно Від';

$GLOBALS["lang"]['valid_from_raw'] = 'Дійсно З Сирої';

$GLOBALS["lang"]['Valid From Raw'] = 'Дійсно З Сирої';

$GLOBALS["lang"]['valid_to'] = 'Дійсно';

$GLOBALS["lang"]['Valid To'] = 'Дійсно';

$GLOBALS["lang"]['valid_to_raw'] = 'Дійсно Сирий';

$GLOBALS["lang"]['Valid To Raw'] = 'Дійсно Сирий';

$GLOBALS["lang"]['Valid Values'] = 'Діє значення';

$GLOBALS["lang"]['value'] = 'Ціна';

$GLOBALS["lang"]['Value'] = 'Ціна';

$GLOBALS["lang"]['values'] = 'Вартість';

$GLOBALS["lang"]['Values'] = 'Вартість';

$GLOBALS["lang"]['Vanuatu'] = 'Вуату';

$GLOBALS["lang"]['VarChar'] = 'Вархар';

$GLOBALS["lang"]['Varchar'] = 'Варчар';

$GLOBALS["lang"]['variable'] = 'Сортування';

$GLOBALS["lang"]['Variable'] = 'Сортування';

$GLOBALS["lang"]['vendor'] = 'Про компанію';

$GLOBALS["lang"]['Vendor'] = 'Про компанію';

$GLOBALS["lang"]['vendors'] = 'Постачальники';

$GLOBALS["lang"]['Vendors'] = 'Постачальники';

$GLOBALS["lang"]['Venezuela'] = 'Венесуела';

$GLOBALS["lang"]['version'] = 'Редакція';

$GLOBALS["lang"]['Version'] = 'Редакція';

$GLOBALS["lang"]['version_padded'] = 'Версія Padded';

$GLOBALS["lang"]['Version Padded'] = 'Версія Padded';

$GLOBALS["lang"]['version_raw'] = 'Версія Raw';

$GLOBALS["lang"]['Version Raw'] = 'Версія Raw';

$GLOBALS["lang"]['version_string'] = 'Версія String';

$GLOBALS["lang"]['Version String'] = 'Версія String';

$GLOBALS["lang"]['video'] = 'Відео';

$GLOBALS["lang"]['Video'] = 'Відео';

$GLOBALS["lang"]['Vietnam'] = 'В\'єтнам';

$GLOBALS["lang"]['View'] = 'Переглянути';

$GLOBALS["lang"]['View All'] = 'Переглянути всі';

$GLOBALS["lang"]['View Details'] = 'Переглянути подробиці';

$GLOBALS["lang"]['View Device'] = 'Переглянути пристрій';

$GLOBALS["lang"]['View Discovery'] = 'Переглянути Discovery';

$GLOBALS["lang"]['View Policy'] = 'Політика';

$GLOBALS["lang"]['Virtual Private Network'] = 'Віртуальна приватна мережа';

$GLOBALS["lang"]['Virtualisation'] = 'Віртуальна';

$GLOBALS["lang"]['Visit our YouTube channel for instructional videos.'] = 'Відвідайте наш канал YouTube для інструкційних відео.';

$GLOBALS["lang"]['vlan'] = 'Влан';

$GLOBALS["lang"]['Vlan'] = 'Влан';

$GLOBALS["lang"]['vlan_id'] = 'Влан ID';

$GLOBALS["lang"]['Vlan ID'] = 'Влан ID';

$GLOBALS["lang"]['vm'] = 'Вм';

$GLOBALS["lang"]['Vm'] = 'Вм';

$GLOBALS["lang"]['vm_device_id'] = 'Код пристрою Vm';

$GLOBALS["lang"]['Vm Device ID'] = 'Код пристрою Vm';

$GLOBALS["lang"]['vm_group'] = 'Вм Груп';

$GLOBALS["lang"]['Vm Group'] = 'Вм Груп';

$GLOBALS["lang"]['vm_ident'] = 'Вм Ідент';

$GLOBALS["lang"]['Vm Ident'] = 'Вм Ідент';

$GLOBALS["lang"]['vm_server_name'] = 'Назва сервера Vm';

$GLOBALS["lang"]['Vm Server Name'] = 'Назва сервера Vm';

$GLOBALS["lang"]['vm_vendor'] = 'Vm Постачальник';

$GLOBALS["lang"]['Vm Vendor'] = 'Vm Постачальник';

$GLOBALS["lang"]['vuln_status'] = 'Статус на сервери';

$GLOBALS["lang"]['Vuln Status'] = 'Статус на сервери';

$GLOBALS["lang"]['vulnerabilities'] = 'Виноград';

$GLOBALS["lang"]['Vulnerabilities'] = 'Виноград';

$GLOBALS["lang"]['vulnerabilities_cache'] = 'Вульнерабільність кеш';

$GLOBALS["lang"]['Vulnerabilities Cache'] = 'Вульнерабільність кеш';

$GLOBALS["lang"]['vulnerability_id'] = 'Ідентифікатор вразливостей';

$GLOBALS["lang"]['Vulnerability ID'] = 'Ідентифікатор вразливостей';

$GLOBALS["lang"]['WHERE'] = 'ЗДОРОВ\'Я';

$GLOBALS["lang"]['wall_port'] = 'Портфоліо';

$GLOBALS["lang"]['Wall Port'] = 'Портфоліо';

$GLOBALS["lang"]['Wallis and Futuna'] = 'Галас і Футуна';

$GLOBALS["lang"]['Want to know more?'] = 'Як дізнатися більше?';

$GLOBALS["lang"]['Warning'] = 'Зареєструватися';

$GLOBALS["lang"]['warranty'] = 'Гарантія';

$GLOBALS["lang"]['Warranty'] = 'Гарантія';

$GLOBALS["lang"]['warranty_duration'] = 'Тривалість гарантії';

$GLOBALS["lang"]['Warranty Duration'] = 'Тривалість гарантії';

$GLOBALS["lang"]['warranty_expires'] = 'Гарантія Закінчення';

$GLOBALS["lang"]['Warranty Expires'] = 'Гарантія Закінчення';

$GLOBALS["lang"]['warranty_status'] = 'Статус на сервери';

$GLOBALS["lang"]['Warranty Status'] = 'Статус на сервери';

$GLOBALS["lang"]['warranty_type'] = 'Тип гарантії';

$GLOBALS["lang"]['Warranty Type'] = 'Тип гарантії';

$GLOBALS["lang"]['Web'] = 'Веб-сайт';

$GLOBALS["lang"]['Webserver'] = 'Веб-сервер';

$GLOBALS["lang"]['Website'] = 'Веб-сайт';

$GLOBALS["lang"]['Wednesday'] = 'Середа';

$GLOBALS["lang"]['weight'] = 'Вага';

$GLOBALS["lang"]['Weight'] = 'Вага';

$GLOBALS["lang"]['weight_current'] = 'Вага струму';

$GLOBALS["lang"]['Weight Current'] = 'Вага струму';

$GLOBALS["lang"]['weight_empty'] = 'Вага Empty';

$GLOBALS["lang"]['Weight Empty'] = 'Вага Empty';

$GLOBALS["lang"]['weight_max'] = 'Вага Макс';

$GLOBALS["lang"]['Weight Max'] = 'Вага Макс';

$GLOBALS["lang"]['Welcome'] = 'Про нас';

$GLOBALS["lang"]['Welcome Dashboard'] = 'Ласкаво просимо Dashboard';

$GLOBALS["lang"]['Welcome to FirstWave Open-AudIT'] = 'Ласкаво просимо на Open-AudIT';

$GLOBALS["lang"]['Western Sahara'] = 'Західний Сахара';

$GLOBALS["lang"]['What Can I Expect if I Have no Credentials'] = 'Що я можу перевірити, якщо я не має значення';

$GLOBALS["lang"]['What is the purpose of this rack.'] = 'Що таке призначення цієї стійки.';

$GLOBALS["lang"]['What is the type of this location. Allowable types held in <code>attributes</code> table.'] = 'Що таке тип місцезнаходження. Можливі види, що проводяться в <code>attributes</code> стіл.';

$GLOBALS["lang"]['When integrating devices from the external system, if the device doesnt exist in Open-AudIT should we create it?'] = 'При інтеграції пристроїв з зовнішньої системи, якщо пристрій не існує в Open-AudIT повинен створювати його?';

$GLOBALS["lang"]['When integrating devices from the external system, if the device has been updated in the external system should we update it in Open-AudIT?'] = 'При інтеграції пристроїв з зовнішньої системи, якщо пристрій було оновлено в зовнішній системі, необхідно оновити її в Open-AudIT?';

$GLOBALS["lang"]['When retrieve an external device, should we run discovery upon it?'] = 'При отриманні зовнішнього пристрою слід запустити відкриття на ньому?';

$GLOBALS["lang"]['When this benchmark is scheduled to be executed. Derived from the associated <code>tasks.type</code> and <code>tasks.sub_resource_id</code>.'] = 'Коли цей еталон планується виконати. Прибув з асоційованої <code>tasks.type</code> і <code>tasks.sub_resource_id</code>й';

$GLOBALS["lang"]['When this log was created.'] = 'Коли було створено цей журнал.';

$GLOBALS["lang"]['When this queue item started processing.'] = 'Коли цей пункт черги розпочато обробку.';

$GLOBALS["lang"]['When we execute this baseline, should we check for items on devices that are not in a policy for this baseline.'] = 'Коли ми виконуємо цю базову лінію, слід перевірити елементи на пристроях, які не є політикою для цієї бази.';

$GLOBALS["lang"]['When we receive an open port, should we attempt to test for the version of the service currently running upon it? This assists in confirming actual running services.'] = 'Коли ми отримуємо відкритий порт, слід намагатися перевірити версію сервісу, що працює на ньому? Це допомагає підтвердити фактичні роботи.';

$GLOBALS["lang"]['where'] = 'Де придбати';

$GLOBALS["lang"]['Where'] = 'Де придбати';

$GLOBALS["lang"]['Where on the Device Details screen you would like to see this field appear.'] = 'Де на екрані Деталі пристрою ви хочете побачити це поле.';

$GLOBALS["lang"]['Where the rack is in the row.'] = 'Де стійка знаходиться в рядку.';

$GLOBALS["lang"]['Whether the vulnerability affects components beyond its own using Impact, Availability and Confidentiality.'] = 'Чи впливає на вразливість компонентів за власним використанням впливу, наявності та конфігурації.';

$GLOBALS["lang"]['Whether user interaction is required (None, Passive, Active).'] = 'Чи потрібна взаємодія користувача (Нон, Пасивний, Активний).';

$GLOBALS["lang"]['Which OS this benchmark applies to.'] = 'Який еталон OS застосовується до.';

$GLOBALS["lang"]['Which devices should Open-AudIT create from the external system (if any). Using All, None or a given Attribute.'] = 'Які пристрої повинні створювати Open-AudIT з зовнішньої системи (за наявності). Використання всіх, Ні або даної атрибути.';

$GLOBALS["lang"]['Which sub-menu should we display this query in.'] = 'Які субмену повинні відображати цей запит.';

$GLOBALS["lang"]['Who made this rack.'] = 'Хто зробив цей стелаж.';

$GLOBALS["lang"]['Why Windows Server Only?'] = 'Чому Windows Server тільки?';

$GLOBALS["lang"]['Why do we exclude this policy?'] = 'Чому ми можемо виключити цю політику?';

$GLOBALS["lang"]['Wide Area Network'] = 'Мережа ресторанів';

$GLOBALS["lang"]['Widget'] = 'Віджети';

$GLOBALS["lang"]['Widget # '] = 'Віджети # ';

$GLOBALS["lang"]['Widget Type'] = 'Тип Віджети';

$GLOBALS["lang"]['widgets'] = 'Віджети';

$GLOBALS["lang"]['Widgets'] = 'Віджети';

$GLOBALS["lang"]['width'] = 'Навігація';

$GLOBALS["lang"]['Width'] = 'Навігація';

$GLOBALS["lang"]['windows'] = 'Головна';

$GLOBALS["lang"]['Windows'] = 'Головна';

$GLOBALS["lang"]['Windows Test Script'] = 'Тестування Windows';

$GLOBALS["lang"]['Wireless Local Area Network'] = 'Бездротова локальна мережа';

$GLOBALS["lang"]['wmi_fails'] = 'Wmi Fails';

$GLOBALS["lang"]['Wmi Fails'] = 'Wmi Fails';

$GLOBALS["lang"]['wmi_timeout'] = 'Віджети';

$GLOBALS["lang"]['Wmi Timeout'] = 'Віджети';

$GLOBALS["lang"]['workgroup'] = 'Робоча група';

$GLOBALS["lang"]['Workgroup'] = 'Робоча група';

$GLOBALS["lang"]['Working Credentials'] = 'Робочі показники';

$GLOBALS["lang"]['XML'] = 'Список';

$GLOBALS["lang"]['Yellow Query'] = 'Жовтий Коричневий';

$GLOBALS["lang"]['Yemen'] = 'Євангелія';

$GLOBALS["lang"]['Yes'] = 'Я';

$GLOBALS["lang"]['You may want to copy and paste this URL in an email to your staff.'] = 'Ви можете скопіювати і вставити цю URL-адресу в електронному листі.';

$GLOBALS["lang"]['You must delete your existing license before adding a new license.'] = 'Ви повинні видалити наявну ліцензію перед додаванням нової ліцензії.';

$GLOBALS["lang"]['YouTube Tutorials'] = 'Підручники YouTube';

$GLOBALS["lang"]['Your AWS EC2 API key.'] = 'Ваш ключ API AWS EC2.';

$GLOBALS["lang"]['Your Google Compute credentials as JSON.'] = 'Ваші облікові дані Google, як JSON.';

$GLOBALS["lang"]['Your Licenses'] = 'Ліцензії';

$GLOBALS["lang"]['Your Microsoft Azure Client ID.'] = 'Ваш ідентифікатор Microsoft Azure.';

$GLOBALS["lang"]['Your Microsoft Azure Client Secret.'] = 'Ваш клієнт Microsoft Azure';

$GLOBALS["lang"]['Your Microsoft Azure Subscription ID.'] = 'Ваш ідентифікатор підписки Microsoft Azure.';

$GLOBALS["lang"]['Your Microsoft Azure Tennant ID.'] = 'Ваш Microsoft Azure Tennant ID.';

$GLOBALS["lang"]['Your SQL to select attributes that will populate this query.'] = 'Ваш SQL для вибору атрибутів, які збільшать цей запит.';

$GLOBALS["lang"]['Your SQL to select devices that will populate this group.'] = 'Ваш SQL для вибору пристроїв, які будуть заселені цією групою.';

$GLOBALS["lang"]['Your SSH key.'] = 'SSH ключ.';

$GLOBALS["lang"]['Your access credentials, as per that clouds native API.'] = 'Ваш доступ до облікових даних, виходячи з цього хмари рідного API.';

$GLOBALS["lang"]['Your description of the status of this connection (provisioned, retired, etc).'] = 'Ваш опис статусу цього з\'єднання (здійснено, відредаговано та ін.).';

$GLOBALS["lang"]['Your description of this item.'] = 'Ваш опис товару';

$GLOBALS["lang"]['Your generic name for this piece of software'] = 'Ваше ім\'я для цього програмного забезпечення';

$GLOBALS["lang"]['Your generic version for this piece of software'] = 'Визначена версія для цього програмного забезпечення';

$GLOBALS["lang"]['Zambia'] = 'Замбія';

$GLOBALS["lang"]['Zimbabwe'] = 'Зімбабве';

$GLOBALS["lang"]['active'] = 'активний';

$GLOBALS["lang"]['active directory'] = 'активний каталог';

$GLOBALS["lang"]['active/active'] = 'Активний/активний';

$GLOBALS["lang"]['active/passive'] = 'активний/пасивний';

$GLOBALS["lang"]['advertisement'] = 'Новини';

$GLOBALS["lang"]['alert'] = 'Зареєструватися';

$GLOBALS["lang"]['all'] = 'Всі';

$GLOBALS["lang"]['allocated'] = 'виділяється';

$GLOBALS["lang"]['amazon'] = 'амазон';

$GLOBALS["lang"]['antivirus'] = 'антивірус';

$GLOBALS["lang"]['application'] = 'Додаток';

$GLOBALS["lang"]['approved'] = 'затверджено';

$GLOBALS["lang"]['attribute'] = 'атрибути';

$GLOBALS["lang"]['auto'] = 'авто';

$GLOBALS["lang"]['backup'] = 'резервне копіювання';

$GLOBALS["lang"]['banned'] = 'заборонений';

$GLOBALS["lang"]['blog'] = 'Новини';

$GLOBALS["lang"]['bottom'] = 'нижня';

$GLOBALS["lang"]['browser_lang'] = 'JavaScript licenses API Веб-сайт';

$GLOBALS["lang"]['building'] = 'будинок';

$GLOBALS["lang"]['cloud'] = 'хмара';

$GLOBALS["lang"]['code'] = 'Коди';

$GLOBALS["lang"]['collector'] = 'колектор';

$GLOBALS["lang"]['compute'] = 'компіляція';

$GLOBALS["lang"]['config'] = 'Налаштування';

$GLOBALS["lang"]['contains'] = 'В наявності';

$GLOBALS["lang"]['create'] = 'Створення';

$GLOBALS["lang"]['created'] = 'створення';

$GLOBALS["lang"]['critical'] = 'критичний';

$GLOBALS["lang"]['cve'] = 'з';

$GLOBALS["lang"]['database'] = 'База даних';

$GLOBALS["lang"]['debug'] = 'деба';

$GLOBALS["lang"]['delegated'] = 'делеговані';

$GLOBALS["lang"]['delete'] = 'видалення';

$GLOBALS["lang"]['deleted'] = 'видалення';

$GLOBALS["lang"]['denied'] = 'відмова';

$GLOBALS["lang"]['devices'] = 'Пристрої';

$GLOBALS["lang"]['digitalocean'] = 'цифровий';

$GLOBALS["lang"]['does not equal'] = 'не дорівнює';

$GLOBALS["lang"]['emergency'] = 'аварійний';

$GLOBALS["lang"]['entra'] = 'Увійти';

$GLOBALS["lang"]['equals'] = 'рівні';

$GLOBALS["lang"]['error'] = 'Про нас';

$GLOBALS["lang"]['established'] = 'установлений';

$GLOBALS["lang"]['excluded'] = 'Без категорії';

$GLOBALS["lang"]['expired'] = 'розірваний';

$GLOBALS["lang"]['extreme - Without which, the organisation would fail.

very high - Functions that are essential for the organisations survival and must be restored immediately.

high - Important functions that should be restored quickly but may have a slightly longer recovery time.

medium - Functions that are necessary but can tolerate longer downtime.

low - Non-essential functions that can be delayed without significant impact.

unassigned - The default until set.'] = 'екстремальний - без чого організація не змогла.

дуже високий - функції, які необхідні для виживання організацій і повинні бути відновлені негайно.

висока - Важливі функції, які повинні бути відновлені швидко, але можуть мати трохи більш тривалий час відновлення.

середній - Функції, які необхідні, але можуть перенести довший час.

низькі - Неоцінні функції, які можна затримати без суттєвого впливу.

unassigned - За замовчуванням до встановлення.';

$GLOBALS["lang"]['fail'] = 'нема';

$GLOBALS["lang"]['false'] = 'Логін';

$GLOBALS["lang"]['file'] = 'Головна';

$GLOBALS["lang"]['firewall'] = 'брюнетки';

$GLOBALS["lang"]['fixed'] = 'фіксована';

$GLOBALS["lang"]['floor'] = 'Підлога';

$GLOBALS["lang"]['front'] = 'передній';

$GLOBALS["lang"]['front-left'] = 'передній лівий';

$GLOBALS["lang"]['front-right'] = 'передній';

$GLOBALS["lang"]['github'] = 'свінгери';

$GLOBALS["lang"]['google'] = 'Українська';

$GLOBALS["lang"]['greater or equals'] = 'більші або рівні';

$GLOBALS["lang"]['greater than'] = 'більше';

$GLOBALS["lang"]['group'] = 'група';

$GLOBALS["lang"]['head'] = 'Головна';

$GLOBALS["lang"]['here'] = 'Головна';

$GLOBALS["lang"]['high availability'] = 'висока доступність';

$GLOBALS["lang"]['howto'] = 'Як';

$GLOBALS["lang"]['ignored'] = 'ігнорувати';

$GLOBALS["lang"]['in'] = 'в';

$GLOBALS["lang"]['inactive'] = 'неактивний';

$GLOBALS["lang"]['incomplete'] = 'неповний';

$GLOBALS["lang"]['info'] = 'Контакти';

$GLOBALS["lang"]['int, text, bool (y/n), etc'] = 'int, текст, bool (y/n), тощо';

$GLOBALS["lang"]['is licensed to'] = 'Ліцензований на';

$GLOBALS["lang"]['left'] = 'Увійти';

$GLOBALS["lang"]['less or equals'] = 'менше або дорівнює';

$GLOBALS["lang"]['less than'] = 'менше';

$GLOBALS["lang"]['license'] = 'ліцензія';

$GLOBALS["lang"]['like'] = 'як';

$GLOBALS["lang"]['line'] = 'Лінія';

$GLOBALS["lang"]['load balancing'] = 'балансування навантаження';

$GLOBALS["lang"]['location'] = 'Розташування';

$GLOBALS["lang"]['managed'] = 'керований';

$GLOBALS["lang"]['microsoft'] = 'Українська';

$GLOBALS["lang"]['mount point'] = 'точка кріплення';

$GLOBALS["lang"]['network'] = 'мережі';

$GLOBALS["lang"]['news'] = 'Новини';

$GLOBALS["lang"]['no'] = 'немає';

$GLOBALS["lang"]['node'] = 'Увійти';

$GLOBALS["lang"]['none'] = 'немає';

$GLOBALS["lang"]['normal'] = 'нормальний';

$GLOBALS["lang"]['not applicable'] = 'не застосовується';

$GLOBALS["lang"]['not in'] = 'не в';

$GLOBALS["lang"]['not like'] = 'не схожий';

$GLOBALS["lang"]['notice'] = 'повідомлення';

$GLOBALS["lang"]['notification'] = 'повідомлення';

$GLOBALS["lang"]['okta'] = 'окта';

$GLOBALS["lang"]['openldap'] = 'Головна';

$GLOBALS["lang"]['optimized'] = 'Оптимізація';

$GLOBALS["lang"]['optionally '] = 'необов\'язково ';

$GLOBALS["lang"]['other'] = 'інші';

$GLOBALS["lang"]['package'] = 'Пакети';

$GLOBALS["lang"]['partition'] = 'Перегородка';

$GLOBALS["lang"]['pass'] = 'проміжок';

$GLOBALS["lang"]['pending'] = 'панчохи';

$GLOBALS["lang"]['performance'] = 'продуктивність';

$GLOBALS["lang"]['performed'] = 'Виконавці';

$GLOBALS["lang"]['pie'] = 'пердят';

$GLOBALS["lang"]['planning'] = 'планування';

$GLOBALS["lang"]['predictable'] = 'передбачуваний';

$GLOBALS["lang"]['query'] = 'добірка';

$GLOBALS["lang"]['rear'] = 'засупу';

$GLOBALS["lang"]['rear-left'] = 'Задня-ліва';

$GLOBALS["lang"]['rear-right'] = 'Задня сторона';

$GLOBALS["lang"]['regex'] = 'регекс';

$GLOBALS["lang"]['release'] = 'Видання';

$GLOBALS["lang"]['reserved'] = 'Зареєструватися';

$GLOBALS["lang"]['right'] = 'Увійти';

$GLOBALS["lang"]['room'] = 'кімната';

$GLOBALS["lang"]['row'] = 'Увійти';

$GLOBALS["lang"]['stand-alone'] = 'автономний';

$GLOBALS["lang"]['standard'] = 'стандарт';

$GLOBALS["lang"]['starts with'] = 'початок';

$GLOBALS["lang"]['storage'] = 'зберігання';

$GLOBALS["lang"]['timestamp'] = 'час';

$GLOBALS["lang"]['top'] = 'Головна';

$GLOBALS["lang"]['top secret - Military / Government classification. Disclosure would cause exceptionally grave danger to national security.

secret - Military / Government classification. Disclosure would cause serious damage to national security.

confidential - Military / Government and Private Sector classification. Data that is confidential includes trade secrets, intellectual data, application programming code, and other data that could seriously affect the organization if unauthorized disclosure occurred. Data at this level would be available only to personnel in the organization whose work needs, or is directly related to, the accessed data. Access to confidential data usually requires authorization for each access.

private - Private Sector classification. Data that is private includes any information related to personnel, including human resources records, medical records, and salary information, that is used only within the organization.

sensitive - Military / Government and Private Sector classification. Data that is sensitive includes organizational financial information and requires extra measures to ensure its CIA and accuracy. Disclosure might harm national security.

public - Private Sector classification. Public data is data that is generally shared with the public and would not cause a negative impact on the organization. Examples of public data include how many people work in the organization and what products an organization manufactures or sells.

unclassified - Military / Government classification. Any information that can generally be distributed to the public without any threat to national interest.

unassigned - The default until set.'] = 'таємниця - Військова / державна класифікація. Небезпечна загроза для національної безпеки.

секрет - Військова / державна класифікація. Розкриття призведе до серйозного пошкодження національної безпеки.

конфіденційність - Військова / державна та приватна галузь класифікації. Дані, які є конфіденційними, включають комерційні секрети, інтелектуальні дані, програмне забезпечення, та інші дані, які можуть серйозно вплинути на організацію, якщо це відбулося несанкціоноване розкриття. Дані на даному рівні будуть доступні тільки для персоналу в організації, які потребують роботи, або безпосередньо пов\'язані з тим, що доступні дані. Доступ до конфіденційних даних зазвичай вимагає авторизації для кожного доступу.

Приватне - Класифікація приватного сектора. Дані, які є приватними, включають в себе будь-яку інформацію, пов\'язану з персоналом, включаючи записи людських ресурсів, медичні записи та інформацію про заробітну плату, яка використовується тільки в організації.

чутливість - класифікація військового / приватного сектора. Дані, які є конфіденційними, включають організаційну фінансову інформацію та вимагає додаткових заходів, щоб забезпечити її CIA та точність. Закриття може завдати шкоди національній безпеці.

громадськість - Класифікація приватного сектора. Громадські дані є даними, які, як правило, поділилися з громадськістю і не спричиняють негативного впливу на організацію. Приклади публічних даних включають в себе, як багато людей працюють в організації та які продукти, які займаються організацією або продажами.

некласифікована - Військова / державна класифікація. Будь-яка інформація, яка, як правило, поширюється на громадськість без будь-яких загроз національним інтересам.

unassigned - За замовчуванням до встановлення.';

$GLOBALS["lang"]['traffic'] = 'трафік';

$GLOBALS["lang"]['true'] = 'Справедливість';

$GLOBALS["lang"]['unallocated'] = 'не знайдено';

$GLOBALS["lang"]['unauthorised'] = 'несанкціоновані';

$GLOBALS["lang"]['unknown'] = 'Нема';

$GLOBALS["lang"]['unmanaged'] = 'некерований';

$GLOBALS["lang"]['unused'] = 'невикористані';

$GLOBALS["lang"]['update'] = 'оновлення';

$GLOBALS["lang"]['valid'] = 'Увійти';

$GLOBALS["lang"]['virtualisation'] = 'віртуалізація';

$GLOBALS["lang"]['warning'] = 'Зареєструватися';

$GLOBALS["lang"]['web'] = 'Веб-сайт';

$GLOBALS["lang"]['yes'] = 'й';

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

